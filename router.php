<?php
// router.php - Router script for PHP built-in CLI server (php -S)

$rawPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uri = rawurldecode($rawPath);

// Explicit route for dynamic sitemap XML (matches Apache .htaccess rewrite rule)
if ($uri === '/sitemap.xml') {
    require __DIR__ . '/generate_sitemap.php';
    exit;
}

// Prevent public web access to sensitive credential files (matches Apache .htaccess rule)
if ($uri === '/service_account.json' || basename($uri) === 'service_account.json') {
    http_response_code(403);
    echo "<h1>403 Forbidden</h1><p>Direct web access to this resource is restricted.</p>";
    exit;
}

$filePath = __DIR__ . $uri;

// 1. Serve static files directly (CSS, JS, images, font files)
if ($uri !== '/' && file_exists($filePath) && !is_dir($filePath)) {
    if (realpath($_SERVER['DOCUMENT_ROOT'] ?? '') === realpath(__DIR__)) {
        return false;
    }
    // Started from parent directory: serve static file directly with correct MIME type
    $ext = strtolower(pathinfo($filePath, PATHINFO_EXTENSION));
    $mimeTypes = [
        'css'   => 'text/css; charset=UTF-8',
        'js'    => 'application/javascript; charset=UTF-8',
        'png'   => 'image/png',
        'jpg'   => 'image/jpeg',
        'jpeg'  => 'image/jpeg',
        'webp'  => 'image/webp',
        'svg'   => 'image/svg+xml',
        'woff'  => 'font/woff',
        'woff2' => 'font/woff2',
        'ttf'   => 'font/ttf',
        'ico'   => 'image/x-icon',
        'json'  => 'application/json',
    ];
    $contentType = $mimeTypes[$ext] ?? 'application/octet-stream';
    header('Content-Type: ' . $contentType);
    header('Content-Length: ' . filesize($filePath));
    readfile($filePath);
    exit;
}

// 2. Root URL -> index.php
$cleanUri = trim($uri, '/');
if (empty($cleanUri)) {
    require __DIR__ . '/index.php';
    exit;
}

// Normalize slug by removing leading 'pages/' and trailing '.php'
$slug = $cleanUri;
if (strpos($slug, 'pages/') === 0) {
    $slug = substr($slug, 6);
}
if (substr($slug, -4) === '.php') {
    $slug = substr($slug, 0, -4);
}

// 3. Route /slug or /pages/slug.php -> pages/slug.php
$pageFile = __DIR__ . '/pages/' . $slug . '.php';
if (file_exists($pageFile)) {
    require $pageFile;
    exit;
}

// 3b. Route slug with spaces or special characters converted to standard hyphens
$hyphenSlug = preg_replace('/\s+/', '-', strtolower($slug));
if ($hyphenSlug !== $slug) {
    $hyphenPageFile = __DIR__ . '/pages/' . $hyphenSlug . '.php';
    if (file_exists($hyphenPageFile)) {
        require $hyphenPageFile;
        exit;
    }
}

// 4. Route direct file if requested
$directPage = __DIR__ . '/' . $cleanUri;
if (file_exists($directPage) && !is_dir($directPage)) {
    require $directPage;
    exit;
}

// 5. Smart Fallback for guide <-> checklist variations
$altSlug = str_replace(['-guide-', '-checklist-'], ['-checklist-', '-guide-'], $slug);
if ($altSlug !== $slug) {
    $altPageFile = __DIR__ . '/pages/' . $altSlug . '.php';
    if (file_exists($altPageFile)) {
        require $altPageFile;
        exit;
    }
}

// 6. Route blog posts -> pages/blog/slug.php
if (strpos($cleanUri, 'blog/') === 0) {
    $blogSlug = substr($cleanUri, 5);
    $blogFile = __DIR__ . '/pages/blog/' . $blogSlug . '.php';
    if (file_exists($blogFile)) {
        require $blogFile;
        exit;
    }
}

// 7. 404 Fallback
http_response_code(404);
if (file_exists(__DIR__ . '/pages/404.php')) {
    require __DIR__ . '/pages/404.php';
} else {
    echo "<h1>404 Page Not Found</h1><p>The requested route /" . htmlspecialchars($cleanUri) . " does not exist.</p>";
}

