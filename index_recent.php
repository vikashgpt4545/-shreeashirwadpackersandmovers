<?php
/**
 * Selective Google Indexing Script
 * Submits only the specific pages completed in the recent Batch 4 session.
 */

require_once __DIR__ . '/includes/config.php';

$completedUrls = [
    // Final Queue Pages
    "https://shreeashirwadpackersandmovers.com/pages/packers-and-movers-patna-to-mumbai.php",
    "https://shreeashirwadpackersandmovers.com/pages/packers-and-movers-patna-to-munger.php",
    "https://shreeashirwadpackersandmovers.com/pages/packers-and-movers-patna-to-muzaffarnagar.php",
    "https://shreeashirwadpackersandmovers.com/pages/packers-and-movers-patna-to-muzaffarpur.php",
    "https://shreeashirwadpackersandmovers.com/pages/packers-and-movers-patna-to-mysore.php",
    "https://shreeashirwadpackersandmovers.com/pages/packers-and-movers-patna-to-nagercoil.php",
    "https://shreeashirwadpackersandmovers.com/pages/packers-and-movers-patna-to-nagpur.php",
    "https://shreeashirwadpackersandmovers.com/pages/packers-and-movers-patna-to-noida.php",
    "https://shreeashirwadpackersandmovers.com/pages/packers-and-movers-patna-to-pune.php",
    // Previous Session Batch 4 Pages
    "https://shreeashirwadpackersandmovers.com/pages/packers-and-movers-patna-to-kolhapur.php",
    "https://shreeashirwadpackersandmovers.com/pages/packers-and-movers-patna-to-kota.php",
    "https://shreeashirwadpackersandmovers.com/pages/packers-and-movers-patna-to-kozhikode.php",
    "https://shreeashirwadpackersandmovers.com/pages/packers-and-movers-patna-to-kullu.php",
    "https://shreeashirwadpackersandmovers.com/pages/packers-and-movers-patna-to-lakhisarai.php",
    "https://shreeashirwadpackersandmovers.com/pages/packers-and-movers-patna-to-latur.php",
    "https://shreeashirwadpackersandmovers.com/pages/packers-and-movers-patna-to-lucknow.php",
    "https://shreeashirwadpackersandmovers.com/pages/packers-and-movers-patna-to-ludhiana.php",
    "https://shreeashirwadpackersandmovers.com/pages/packers-and-movers-patna-to-madhepura.php",
    "https://shreeashirwadpackersandmovers.com/pages/packers-and-movers-patna-to-madhubani.php",
    "https://shreeashirwadpackersandmovers.com/pages/packers-and-movers-patna-to-madurai.php",
    "https://shreeashirwadpackersandmovers.com/pages/packers-and-movers-patna-to-meerut.php",
    "https://shreeashirwadpackersandmovers.com/pages/packers-and-movers-patna-to-mirzapur.php",
    "https://shreeashirwadpackersandmovers.com/pages/packers-and-movers-patna-to-moradabad.php",
    "https://shreeashirwadpackersandmovers.com/pages/packers-and-movers-patna-to-motihari.php"
];

echo "===============================================================\n";
echo "       SELECTIVE GOOGLE INDEXING SUBMISSION SCRIPT            \n";
echo "===============================================================\n";
echo "Submitting " . count($completedUrls) . " completed pages to Google Indexing API...\n\n";

foreach ($completedUrls as $index => $url) {
    $num = $index + 1;
    echo "[$num/" . count($completedUrls) . "] Submitting: $url\n";
    $cmd = 'C:\\xampp\\php\\php.exe google_indexing.php --url=' . escapeshellarg($url);
    passthru($cmd);
    echo "\n";
}

echo "Selective indexing submission finished!\n";
