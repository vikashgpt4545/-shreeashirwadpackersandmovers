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

// Slugs that 301-redirect elsewhere (must be excluded from XML sitemap to prevent 301 errors in Search Console)
$redirected_slugs = [
    // Patna Keyword-Variant Cannibalized Stubs -> Redirected to /packers-and-movers-in-patna
    'affordable-packers-and-movers-in-patna',
    'best-company-for-packers-and-movers-in-patna',
    'best-movers-and-packers-in-patna',
    'best-packer-and-mover-in-patna',
    'best-packers-and-movers-in-patna',
    'best-packers-and-movers-service-in-patna',
    'cheap-packers-and-movers-in-patna',
    'home-packers-and-movers-in-patna',
    'list-of-packers-and-movers-in-patna',
    'local-packers-and-movers-in-patna',
    'movers-and-packers-in-patna-boring-road',
    'movers-and-packers-in-patna-kankarbagh',
    'movers-and-packers-in-patna-near-khajpura',
    'movers-and-packers-in-patna-near-me',
    'no-1-packers-and-movers-in-patna',
    'packers-and-mover-in-patna',
    'packers-movers-in-patna',
    'professional-packers-and-movers-in-patna',
    'reliable-packers-and-movers-in-patna',
    'top-packers-and-movers-in-patna',
    'verified-packers-and-movers-in-patna',
    // Vehicle & IBA Patna Stubs -> Redirected to canonical hubs
    'bike-movers-and-packers-in-patna',
    'bike-packers-and-movers-in-patna',
    'car-movers-and-packers-in-patna',
    'car-packers-and-movers-in-patna',
    'iba-approved-movers-and-packers-in-patna',
    // Typo Slug Fixes
    'packers-and-movers-nirrsa-dhanbad',
    'packers-and-movers-rohani-deoghar',
    'packers-and-movers-jarmundi-border-deoghar',
    'packers-and-movers-mahadeodekh-deoghar',
    'packers-and-movers-shankari-deoghar',
    'packers-and-movers-tapasvan-deoghar',
    'packers-and-movers-devipur-deoghar'
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

        // Skip 301 redirected stubs
        if (in_array($route, $redirected_slugs, true)) {
            continue;
        }

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
        } elseif (strpos($route, 'packers-movers-india/') === 0 && substr_count($route, '/') >= 3) {
            // Locality subfolder pages (e.g. /packers-movers-india/madhya-pradesh/dewas/agar-road)
            $priority = '0.7';
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
