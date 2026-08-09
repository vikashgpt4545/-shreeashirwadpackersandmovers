<?php
// router.php - Router script for PHP built-in CLI server (php -S)

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$filePath = __DIR__ . $uri;

// 1. Serve static files directly (CSS, JS, images, font files)
if ($uri !== '/' && file_exists($filePath) && !is_dir($filePath)) {
    return false;
}

// 2. Root URL -> index.php
$cleanUri = trim($uri, '/');
if (empty($cleanUri)) {
    require __DIR__ . '/index.php';
    exit;
}

// 3. Route /slug -> pages/slug.php
$pageFile = __DIR__ . '/pages/' . $cleanUri . '.php';
if (file_exists($pageFile)) {
    require $pageFile;
    exit;
}

// 4. Route /pages/slug.php directly if requested
$directPage = __DIR__ . '/' . $cleanUri;
if (file_exists($directPage) && !is_dir($directPage)) {
    require $directPage;
    exit;
}

// 5. Route blog posts -> pages/blog/slug.php
if (strpos($cleanUri, 'blog/') === 0) {
    $blogSlug = substr($cleanUri, 5);
    $blogFile = __DIR__ . '/pages/blog/' . $blogSlug . '.php';
    if (file_exists($blogFile)) {
        require $blogFile;
        exit;
    }
}

// 6. 404 Fallback
http_response_code(404);
if (file_exists(__DIR__ . '/pages/404.php')) {
    require __DIR__ . '/pages/404.php';
} else {
    echo "<h1>404 Page Not Found</h1><p>The requested route /" . htmlspecialchars($cleanUri) . " does not exist.</p>";
}
