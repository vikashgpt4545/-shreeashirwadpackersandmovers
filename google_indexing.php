<?php
/**
 * Google Indexing API Automator for Shree Ashirwad Packers and Movers
 * Uses Service Account credentials to directly publish URLs to Google for fast indexing.
 * 
 * Usage:
 *  - Submit 200 URLs from sitemap (default batch): php google_indexing.php
 *  - Submit specific URL: php google_indexing.php --url=https://shreeashirwadpackersandmovers.com/packers-and-movers-in-ranchi
 *  - Change batch size: php google_indexing.php --limit=50
 */

$rootDir = __DIR__;
$credsPath = $rootDir . '/service_account.json';

if (!file_exists($credsPath)) {
    die("Error: service_account.json credentials file not found at $credsPath\n");
}

$creds = json_decode(file_get_contents($credsPath), true);
if (json_last_error() !== JSON_ERROR_NONE) {
    die("Error: Invalid JSON in service_account.json: " . json_last_error_msg() . "\n");
}

// Parse Command Line Options
$options = getopt("", ["url:", "limit:", "offset:", "type:"]);
$targetUrl = $options['url'] ?? null;
$limit = isset($options['limit']) ? intval($options['limit']) : 200;
$offset = isset($options['offset']) ? intval($options['offset']) : 0;
$notificationType = $options['type'] ?? 'URL_UPDATED'; // URL_UPDATED or URL_DELETED

echo "===============================================================\n";
echo "       GOOGLE INDEXING API AUTOMATION SCRIPT                    \n";
echo "===============================================================\n";
echo "Project ID : " . $creds['project_id'] . "\n";
echo "Client Email: " . $creds['client_email'] . "\n";
echo "Timestamp   : " . date('Y-m-d H:i:s') . "\n";
echo "---------------------------------------------------------------\n";

// Helper Base64Url encoder
function base64UrlEncode($data) {
    return rtrim(strtr(base64_encode($data), '+/', '-_'), '=');
}

// 1. Generate JWT OAuth Token
function getGoogleAccessToken($creds) {
    $header = json_encode(['alg' => 'RS256', 'typ' => 'JWT']);
    $now = time();
    $claimSet = json_encode([
        'iss' => $creds['client_email'],
        'scope' => 'https://www.googleapis.com/auth/indexing',
        'aud' => $creds['token_uri'],
        'exp' => $now + 3600,
        'iat' => $now
    ]);

    $base64UrlHeader = base64UrlEncode($header);
    $base64UrlClaimSet = base64UrlEncode($claimSet);
    $signatureInput = $base64UrlHeader . "." . $base64UrlClaimSet;

    $privateKey = str_replace('\n', "\n", $creds['private_key']);
    $signature = '';
    
    $success = openssl_sign($signatureInput, $signature, $privateKey, OPENSSL_ALGO_SHA256);
    if (!$success) {
        die("Error: Failed to sign JWT with private key via OpenSSL.\n");
    }

    $base64UrlSignature = base64UrlEncode($signature);
    $jwt = $signatureInput . "." . $base64UrlSignature;

    // Exchange JWT for Access Token
    $ch = curl_init();
    curl_setopt_array($ch, [
        CURLOPT_URL => $creds['token_uri'],
        CURLOPT_POST => true,
        CURLOPT_POSTFIELDS => http_build_query([
            'grant_type' => 'urn:ietf:params:oauth:grant-type:jwt-bearer',
            'assertion' => $jwt
        ]),
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_SSL_VERIFYPEER => true
    ]);

    $response = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    if ($httpCode !== 200) {
        die("Error: Failed to get OAuth2 Access Token. HTTP $httpCode: $response\n");
    }

    $resData = json_decode($response, true);
    return $resData['access_token'] ?? null;
}

echo "Generating OAuth2 Access Token...\n";
$accessToken = getGoogleAccessToken($creds);

if (!$accessToken) {
    die("Error: Unable to retrieve Google Access Token.\n");
}
echo "OAuth2 Access Token generated successfully!\n\n";

// Function to publish URL notification
function publishUrlNotification($url, $type, $accessToken) {
    $endpoint = 'https://indexing.googleapis.com/v3/urlNotifications:publish';
    $payload = json_encode([
        'url' => $url,
        'type' => $type
    ]);

    $ch = curl_init();
    curl_setopt_array($ch, [
        CURLOPT_URL => $endpoint,
        CURLOPT_POST => true,
        CURLOPT_POSTFIELDS => $payload,
        CURLOPT_HTTPHEADER => [
            'Content-Type: application/json',
            'Authorization: Bearer ' . $accessToken
        ],
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_SSL_VERIFYPEER => true
    ]);

    $response = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    return [
        'code' => $httpCode,
        'body' => json_decode($response, true)
    ];
}

// 2. Prepare URL Queue
$urlQueue = [];

if ($targetUrl) {
    $urlQueue[] = $targetUrl;
} else {
    // Read from sitemap.xml
    $sitemapPath = $rootDir . '/sitemap.xml';
    if (!file_exists($sitemapPath)) {
        die("Error: sitemap.xml not found.\n");
    }
    
    $xml = simplexml_load_file($sitemapPath);
    foreach ($xml->url as $urlItem) {
        $urlQueue[] = (string)$urlItem->loc;
    }

    if ($offset > 0) {
        $urlQueue = array_slice($urlQueue, $offset);
    }
    if ($limit > 0) {
        $urlQueue = array_slice($urlQueue, 0, $limit);
    }
}

echo "Total URLs in this batch: " . count($urlQueue) . "\n";
echo "Action Type: $notificationType\n";
echo "---------------------------------------------------------------\n";

$successCount = 0;
$failCount = 0;

foreach ($urlQueue as $index => $url) {
    $num = $index + 1;
    echo "[$num/" . count($urlQueue) . "] Submitting: $url ... ";

    $res = publishUrlNotification($url, $notificationType, $accessToken);

    if ($res['code'] === 200) {
        $successCount++;
        $notifyTime = $res['body']['urlNotificationMetadata']['latestUpdate']['notifyTime'] ?? date('c');
        echo "SUCCESS (HTTP 200) [Time: $notifyTime]\n";
    } else {
        $failCount++;
        $errMsg = $res['body']['error']['message'] ?? 'Unknown Error';
        echo "FAILED (HTTP " . $res['code'] . ") - $errMsg\n";
        
        // If quota exceeded, stop early
        if (strpos(strtolower($errMsg), 'quota') !== false) {
            echo "\n⚠️ Google Indexing API daily quota limit reached. Stopping execution.\n";
            break;
        }
    }

    // Small delay to prevent bursting
    usleep(100000); // 100ms
}

echo "---------------------------------------------------------------\n";
echo "BATCH SUBMISSION COMPLETED\n";
echo "Successful Index Requests: $successCount\n";
echo "Failed Requests           : $failCount\n";
echo "===============================================================\n";
