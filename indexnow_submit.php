<?php
/**
 * Bing & IndexNow API Automator for Shree Ashirwad Packers and Movers
 * Pushes URLs to Bing Search Index for fast indexing and ChatGPT Search citation visibility.
 * 
 * Usage:
 *   php indexnow_submit.php --file=indexing_queue_jharkhand.txt
 *   php indexnow_submit.php --url=https://shreeashirwadpackersandmovers.com/packers-and-movers-in-ranchi
 *   php indexnow_submit.php --limit=50
 */

if (php_sapi_name() !== 'cli') {
    http_response_code(403);
    die("Access denied. This script can only be executed via CLI.\n");
}

$host = 'shreeashirwadpackersandmovers.com';
$key = '0f8af0894fde48e5b91cad3c5631a2b2';
$keyLocation = "https://{$host}/{$key}.txt";
$rootDir = __DIR__;

// Parse Command Line Options
$options = getopt("", ["url:", "file:", "limit:", "offset:"]);
$targetUrl = $options['url'] ?? null;
$fileList = $options['file'] ?? null;
$limit = isset($options['limit']) ? intval($options['limit']) : 1000;
$offset = isset($options['offset']) ? intval($options['offset']) : 0;

echo "===============================================================\n";
echo "       BING INDEXNOW API SUBMISSION (CHATGPT SEARCH)           \n";
echo "===============================================================\n";
echo "Host        : {$host}\n";
echo "Key Location: {$keyLocation}\n";
echo "Timestamp   : " . date('Y-m-d H:i:s') . "\n";
echo "---------------------------------------------------------------\n";

$urlQueue = [];

if ($targetUrl) {
    $urlQueue[] = $targetUrl;
} elseif ($fileList) {
    $filePath = file_exists($fileList) ? $fileList : ($rootDir . '/' . $fileList);
    if (!file_exists($filePath)) {
        die("Error: URL list file not found at {$filePath}\n");
    }
    $rawUrls = file($filePath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($rawUrls as $u) {
        $u = trim($u);
        if ($u && !str_starts_with($u, '#')) {
            $urlQueue[] = $u;
        }
    }
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
}

if ($offset > 0) {
    $urlQueue = array_slice($urlQueue, $offset);
}
if ($limit > 0 && count($urlQueue) > $limit) {
    $urlQueue = array_slice($urlQueue, 0, $limit);
}

$totalUrls = count($urlQueue);
echo "Total URLs prepared for IndexNow submission: {$totalUrls}\n\n";

if ($totalUrls === 0) {
    echo "No URLs to submit.\n";
    exit(0);
}

// IndexNow accepts up to 10,000 URLs per batch
$batchSize = 1000;
$batches = array_chunk($urlQueue, $batchSize);

$endpoint = 'https://api.indexnow.org/indexnow';

foreach ($batches as $batchIdx => $batchUrls) {
    $currentBatchNum = $batchIdx + 1;
    $countInBatch = count($batchUrls);
    echo "Submitting Batch {$currentBatchNum}/" . count($batches) . " ({$countInBatch} URLs) to {$endpoint}...\n";

    $payload = json_encode([
        'host' => $host,
        'key' => $key,
        'keyLocation' => $keyLocation,
        'urlList' => array_values($batchUrls)
    ], JSON_UNESCAPED_SLASHES);

    $ch = curl_init($endpoint);
    curl_setopt_array($ch, [
        CURLOPT_POST => true,
        CURLOPT_POSTFIELDS => $payload,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_HTTPHEADER => [
            'Content-Type: application/json; charset=utf-8',
            'Content-Length: ' . strlen($payload)
        ],
        CURLOPT_TIMEOUT => 30,
        CURLOPT_SSL_VERIFYPEER => true
    ]);

    $response = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    $curlError = curl_error($ch);
    curl_close($ch);

    if ($httpCode === 200 || $httpCode === 202) {
        echo "  [SUCCESS] HTTP {$httpCode}: Successfully submitted {$countInBatch} URLs to IndexNow network (Bing, Yandex, Seznam).\n";
    } else {
        echo "  [NOTICE] HTTP {$httpCode}: Response: {$response} " . ($curlError ? " (cURL: {$curlError})" : "") . "\n";
    }
}

echo "\nIndexNow Submission Process Finished.\n";
