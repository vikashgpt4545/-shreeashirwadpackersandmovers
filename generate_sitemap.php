<?php
/**
 * Dynamic Master Sitemap Generator
 * Scans all PHP pages in /pages/ directory and serves full sitemap XML dynamically
 */

require_once __DIR__ . '/includes/config.php';

$pagesDir = __DIR__ . '/pages';
$iterator = new RecursiveIteratorIterator(
    new RecursiveDirectoryIterator($pagesDir, RecursiveDirectoryIterator::SKIP_DOTS),
    RecursiveIteratorIterator::SELF_FIRST
);

$urls = [];

// 1. Homepage
$urls[] = [
    'loc' => 'https://shreeashirwadpackersandmovers.com/',
    'priority' => '1.0',
    'changefreq' => 'daily'
];

// 2. Iterate through all PHP files in pages/
foreach ($iterator as $file) {
    if ($file->isFile() && $file->getExtension() === 'php') {
        $filename = $file->getFilename();
        if ($filename === '404.php' || $filename === 'sitemap.php') {
            continue;
        }

        // Relative path from pages/ directory
        $realPath = $file->getPathname();
        $relPath = str_replace('\\', '/', substr($realPath, strlen($pagesDir) + 1));
        $route = str_replace('.php', '', $relPath);

        $url = 'https://shreeashirwadpackersandmovers.com/' . ltrim($route, '/');

        // Priority calculation
        $priority = '0.8';
        $changefreq = 'weekly';

        if (in_array($route, ['about', 'contact', 'services', 'guides', 'gallery'])) {
            $priority = '0.9';
        } elseif (strpos($route, 'services/') === 0) {
            $priority = '0.9';
        } elseif (strpos($route, 'packers-and-movers-in-') === 0) {
            $priority = '0.9';
        }

        $urls[] = [
            'loc' => $url,
            'priority' => $priority,
            'changefreq' => $changefreq
        ];
    }
}

// 3. Construct XML string
$xml = '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
$xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";

foreach ($urls as $item) {
    $xml .= "  <url>\n";
    $xml .= "    <loc>" . htmlspecialchars($item['loc']) . "</loc>\n";
    $xml .= "    <changefreq>" . $item['changefreq'] . "</changefreq>\n";
    $xml .= "    <priority>" . $item['priority'] . "</priority>\n";
    $xml .= "  </url>\n";
}

$xml .= '</urlset>';

// 4. Update static sitemap.xml on disk
@file_put_contents(__DIR__ . '/sitemap.xml', $xml);

// 5. Output XML response directly for HTTP requests
if (php_sapi_name() !== 'cli') {
    header('Content-Type: application/xml; charset=utf-8');
}
echo $xml;
