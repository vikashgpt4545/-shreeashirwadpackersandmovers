<?php
/**
 * 200 Completed Pages Google Indexing Script for Batch 4 (Bihar Regional Cluster)
 * Automatically scans and submits 200 completed Patna route and sub-locality pages.
 */

require_once __DIR__ . '/includes/config.php';

$pagesDir = __DIR__ . '/pages';
$completedUrls = [];

// 1. Scan Patna Route Pages
$routeFiles = glob($pagesDir . '/packers-and-movers-patna-to-*.php');
foreach ($routeFiles as $file) {
    $filename = basename($file);
    $completedUrls[] = "https://shreeashirwadpackersandmovers.com/pages/" . $filename;
}

// 2. Scan Patna Sub-Locality Pages
$localityFiles = glob($pagesDir . '/packers-and-movers-in-*-patna.php');
foreach ($localityFiles as $file) {
    $filename = basename($file);
    $completedUrls[] = "https://shreeashirwadpackersandmovers.com/pages/" . $filename;
}

// Limit to top 200 completed pages
$batch200 = array_slice($completedUrls, 0, 200);

echo "===============================================================\n";
echo "       200 BATCH GOOGLE INDEXING SUBMISSION SCRIPT            \n";
echo "===============================================================\n";
echo "Found " . count($completedUrls) . " total completed Patna pages.\n";
echo "Submitting top " . count($batch200) . " completed pages to Google Indexing API...\n\n";

foreach ($batch200 as $index => $url) {
    $num = $index + 1;
    echo "[$num/" . count($batch200) . "] Submitting: $url\n";
    $cmd = 'C:\\xampp\\php\\php.exe google_indexing.php --url=' . escapeshellarg($url);
    passthru($cmd);
    echo "\n";
}

echo "---------------------------------------------------------------\n";
echo "200 Page Indexing Submission Completed!\n";
