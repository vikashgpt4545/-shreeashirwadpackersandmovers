<?php
/**
 * Site Global Configuration
 */

// Dynamically determine protocol and domain URL
if (!defined('SITE_URL')) {
    $protocol = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') || (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') ? "https" : "http";
    $host = isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : 'localhost';
    $script_dir = rtrim(dirname($_SERVER['SCRIPT_NAME']), '/\\');
    
    // Add subfolder if running on local XAMPP
    if ($host === 'localhost' || $host === '127.0.0.1') {
        define('SITE_URL', $protocol . '://' . $host . '/shreeashirwadpackersandmovers/');
    } else {
        define('SITE_URL', $protocol . '://' . $host . '/');
    }
}

// Contact details extracted directly from site images
define('SITE_PHONE', '(+91) 8409531615');
define('SITE_PHONE_RAW', '+918409531615');
define('SITE_EMAIL', 'enquiry@shreeashirwadpackers.in');

// Office Locations & Entity Links
define('ADDRESS_RANCHI', 'Anandpuri Chowk, Vidyanagar Road, Harmu, Ranchi, Jharkhand -834002');
define('ADDRESS_BOKARO', 'Plot no -54/c,Post office sector - 12/A, Bokaro, Jharkhand -827012');
define('GMB_MAPS_URL', 'https://www.google.com/maps/place/Shree+Ashirwad+Packers+and+Movers+Ranchi/@23.3639813,85.3090259,17z/data=!3m1!4b1!4m6!3m5!1s0x39f4e0fa22c8abf9:0xf854a9cfd51fdbff!8m2!3d23.3639813!4d85.3090259!16s%2Fg%2F11pf5pnxnb');
define('FACEBOOK_URL', 'https://www.facebook.com/shreeashirwadpackers/');
define('YOUTUBE_URL', 'https://www.youtube.com/@shreeashirwadpackers');
define('GMB_LATITUDE', 23.3639813);
define('GMB_LONGITUDE', 85.3090259);

// SEO Defaults
define('DEFAULT_PAGE_TITLE', 'Packers and Movers in Ranchi | Safe Household & Office Shifting');
define('DEFAULT_META_DESC', 'Top rated Packers and Movers in Ranchi offering safe, reliable, and affordable packing, moving, home relocation, and vehicle transportation services.');
define('DEFAULT_KEYWORDS', 'packers and movers in ranchi, packers and movers ranchi, best packers and movers in ranchi, cheap packers and movers in ranchi, top packers and movers in ranchi, household shifting in ranchi, home relocation services ranchi, office shifting services ranchi, car transport in ranchi, bike transport ranchi, local packers and movers ranchi, intercity movers in ranchi, movers and packers ranchi contact number, packers and movers ranchi charges, house relocation in ranchi, luggage transport service ranchi, relocation services ranchi, warehouse and storage in ranchi, safe packing and moving ranchi, packers and movers in jharkhand');

