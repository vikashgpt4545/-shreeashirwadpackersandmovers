<?php
/**
 * Modular Master Sitemap & Sub-Sitemap Generator
 * Scans all active PHP pages in /pages/ and generates:
 *  - sitemap_index.xml (Master Index for GSC)
 *  - sitemap-core.xml (Essential landing pages)
 *  - sitemap-local-jharkhand.xml (Ranchi, Jamshedpur, Bokaro, Dhanbad, etc.)
 *  - sitemap-services.xml (Specialized relocation & vehicle transport)
 *  - sitemap-guides.xml (Moving checklists and advice guides)
 *  - sitemap-intercity.xml (All national route corridors)
 *  - sitemap.xml (Comprehensive fallback)
 */

require_once __DIR__ . '/includes/config.php';
date_default_timezone_set('Asia/Kolkata');

$pagesDir = __DIR__ . '/pages';
$iterator = new RecursiveIteratorIterator(
    new RecursiveDirectoryIterator($pagesDir, RecursiveDirectoryIterator::SKIP_DOTS),
    RecursiveIteratorIterator::SELF_FIRST
);

$categories = [
    'core' => [],
    'local-jharkhand' => [],
    'services' => [],
    'guides' => [],
    'intercity' => []
];

$seenUrls = [];

// 1. Homepage
$homepageUrl = 'https://shreeashirwadpackersandmovers.com/';
$homeItem = [
    'loc' => $homepageUrl,
    'lastmod' => date('Y-m-d', filemtime(__DIR__ . '/index.php')),
    'changefreq' => 'daily',
    'priority' => '1.0'
];
$categories['core'][] = $homeItem;
$seenUrls[$homepageUrl] = true;

// Slugs that 301-redirect elsewhere
$redirected_slugs = [
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
    'bike-movers-and-packers-in-patna',
    'bike-packers-and-movers-in-patna',
    'car-movers-and-packers-in-patna',
    'car-packers-and-movers-in-patna',
    'iba-approved-movers-and-packers-in-patna',
    'packers-and-movers-nirrsa-dhanbad',
    'packers-and-movers-rohani-deoghar',
    'packers-and-movers-jarmundi-border-deoghar',
    'packers-and-movers-mahadeodekh-deoghar',
    'packers-and-movers-shankari-deoghar',
    'packers-and-movers-tapasvan-deoghar',
    'packers-and-movers-devipur-deoghar'
];

$jharkhandCities = ['ranchi', 'jamshedpur', 'bokaro', 'dhanbad', 'hazaribagh', 'deoghar', 'giridih', 'ramgarh', 'dumka', 'chaibasa', 'daltonganj', 'medininagar', 'chatra'];

// 2. Iterate through all PHP files in pages/
foreach ($iterator as $file) {
    if ($file->isFile() && $file->getExtension() === 'php') {
        $filename = $file->getFilename();
        if ($filename === '404.php' || $filename === 'sitemap.php') {
            continue;
        }

        // Exclude backup files, partial components, or hidden directories
        $realPath = $file->getPathname();
        $relPath = str_replace('\\', '/', substr($realPath, strlen($pagesDir) + 1));
        if (strpos($relPath, 'includes/') !== false || basename($file->getPath()) === 'includes' || strpos($relPath, 'backup') !== false || strpos($relPath, '_') !== false || strpos($filename, '.bak') !== false) {
            continue;
        }

        $route = str_replace('.php', '', $relPath);

        // Normalize trailing /index
        if (substr($route, -6) === '/index') {
            $route = substr($route, 0, -6);
        }

        $baseName = basename($route);
        if (in_array($route, $redirected_slugs, true) || in_array($baseName, $redirected_slugs, true)) {
            continue;
        }

        $url = 'https://shreeashirwadpackersandmovers.com/' . ltrim($route, '/');
        if (isset($seenUrls[$url])) {
            continue;
        }
        $seenUrls[$url] = true;

        $slug = strtolower($route);
        $fileModTime = date('Y-m-d', $file->getMTime());

        $priority = '0.8';
        $changefreq = 'weekly';

        // Categorize into logical silos
        if (in_array($route, ['about', 'contact', 'services', 'guides', 'gallery', 'privacy-policy', 'terms'])) {
            $priority = '0.9';
            $targetCategory = 'core';
        } elseif (strpos($slug, 'guides/') === 0 || strpos($slug, 'guide') !== false || strpos($slug, 'checklist') !== false || strpos($slug, 'tips') !== false) {
            $priority = '0.8';
            $targetCategory = 'guides';
        } elseif (strpos($slug, 'services/') === 0 || strpos($slug, 'car-transport') !== false || strpos($slug, 'bike-transport') !== false || strpos($slug, 'commercial-shifting') !== false || strpos($slug, 'warehouse') !== false) {
            $priority = '0.8';
            $targetCategory = 'services';
        } else {
            $isJharkhand = false;
            foreach ($jharkhandCities as $jc) {
                if (strpos($slug, $jc) !== false && strpos($slug, '-to-') === false) {
                    $isJharkhand = true;
                    break;
                }
            }
            if ($isJharkhand) {
                $priority = '0.9';
                $targetCategory = 'local-jharkhand';
            } else {
                $priority = '0.8';
                $targetCategory = 'intercity';
            }
        }

        $item = [
            'loc' => $url,
            'lastmod' => $fileModTime,
            'priority' => $priority,
            'changefreq' => $changefreq
        ];

        $categories[$targetCategory][] = $item;
    }
}

/**
 * Helper to build standard sitemap XML
 */
function buildUrlsetXml(array $urls): string {
    $xml = "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
    $xml .= "<urlset xmlns=\"http://www.sitemaps.org/schemas/sitemap/0.9\">\n";
    foreach ($urls as $item) {
        $xml .= "  <url>\n";
        $xml .= "    <loc>" . htmlspecialchars($item['loc']) . "</loc>\n";
        $xml .= "    <lastmod>" . $item['lastmod'] . "</lastmod>\n";
        $xml .= "    <changefreq>" . $item['changefreq'] . "</changefreq>\n";
        $xml .= "    <priority>" . $item['priority'] . "</priority>\n";
        $xml .= "  </url>\n";
    }
    $xml .= "</urlset>";
    return $xml;
}

// 3. Write individual sub-sitemaps
$allUrls = [];
$subSitemapsMeta = [];

foreach ($categories as $catKey => $catUrls) {
    $subXml = buildUrlsetXml($catUrls);
    $subFileName = "sitemap-$catKey.xml";
    file_put_contents(__DIR__ . '/' . $subFileName, $subXml);

    $latestMod = date('Y-m-d');

    $subSitemapsMeta[] = [
        'loc' => 'https://shreeashirwadpackersandmovers.com/' . $subFileName,
        'lastmod' => $latestMod,
        'count' => count($catUrls)
    ];

    $allUrls = array_merge($allUrls, $catUrls);
}

// 4. Construct Master Sitemap Index (sitemap_index.xml)
$indexXml = "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
$indexXml .= "<sitemapindex xmlns=\"http://www.sitemaps.org/schemas/sitemap/0.9\">\n";
foreach ($subSitemapsMeta as $sMeta) {
    $indexXml .= "  <sitemap>\n";
    $indexXml .= "    <loc>" . htmlspecialchars($sMeta['loc']) . "</loc>\n";
    $indexXml .= "    <lastmod>" . $sMeta['lastmod'] . "</lastmod>\n";
    $indexXml .= "  </sitemap>\n";
}
$indexXml .= "</sitemapindex>";

file_put_contents(__DIR__ . '/sitemap_index.xml', $indexXml);

// 5. Update combined master sitemap.xml
$masterXml = buildUrlsetXml($allUrls);
file_put_contents(__DIR__ . '/sitemap.xml', $masterXml);

echo "===========================================\n";
echo "Sitemap Generation Complete!\n";
echo "Generated Files:\n";
foreach ($subSitemapsMeta as $sMeta) {
    echo " - " . basename($sMeta['loc']) . " (" . number_format($sMeta['count']) . " URLs)\n";
}
echo " - sitemap_index.xml (Master Index)\n";
echo " - sitemap.xml (" . number_format(count($allUrls)) . " total URLs)\n";
echo "===========================================\n";
