<?php
/**
 * Jharkhand Non-Thin Content Pages Google Indexing Script
 * Scans all Jharkhand regional & route pages, filters out thin content,
 * and submits up to 200 high-quality remediated pages to Google Indexing API.
 */

require_once __DIR__ . '/includes/config.php';

$pagesDir = __DIR__ . '/pages';
$jharkhandKeywords = [
    'ranchi', 'hazaribagh', 'bokaro', 'dhanbad', 'jamshedpur', 
    'giridih', 'deoghar', 'dumka', 'ramgarh', 'sahibganj', 
    'chaibasa', 'medininagar', 'daltonganj', 'phusro', 'jharia',
    'kanke', 'kokar', 'lalpur', 'namkum', 'ratu-road', 'harmu',
    'doranda', 'hatia', 'hinoo', 'bariatu', 'chas'
];

$jharkhandUrls = [];

$files = glob($pagesDir . '/*.php');

foreach ($files as $file) {
    $filename = basename($file);
    $isJharkhand = false;

    foreach ($jharkhandKeywords as $kw) {
        if (strpos(strtolower($filename), $kw) !== false) {
            $isJharkhand = true;
            break;
        }
    }

    if ($isJharkhand) {
        // Check line count / content quality to filter out thin content (must be > 100 lines)
        $lineCount = count(file($file));
        if ($lineCount >= 100) {
            $jharkhandUrls[] = [
                'url' => "https://shreeashirwadpackersandmovers.com/pages/" . $filename,
                'lines' => $lineCount
            ];
        }
    }
}

// Limit to 200 pages
$batch200 = array_slice($jharkhandUrls, 0, 200);

echo "===============================================================\n";
echo "   JHARKHAND HIGH-QUALITY (NON-THIN) PAGES INDEXING SCRIPT     \n";
echo "===============================================================\n";
echo "Total High-Quality Jharkhand Pages Found: " . count($jharkhandUrls) . "\n";
echo "Submitting top " . count($batch200) . " non-thin pages to Google Indexing API...\n\n";

foreach ($batch200 as $index => $item) {
    $num = $index + 1;
    $url = $item['url'];
    $lines = $item['lines'];
    echo "[$num/" . count($batch200) . "] ($lines lines) Submitting: $url\n";
    $cmd = 'C:\\xampp\\php\\php.exe google_indexing.php --url=' . escapeshellarg($url);
    passthru($cmd);
    echo "\n";
}

echo "---------------------------------------------------------------\n";
echo "Jharkhand 200 Page Indexing Submission Completed!\n";
