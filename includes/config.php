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
$SITE_NAME = 'Shree Ashirwad Packers and Movers';
define('SITE_NAME', 'Shree Ashirwad Packers and Movers');
define('SITE_PHONE', '(+91) 8409531615');
define('SITE_PHONE_RAW', '+918409531615');
define('SITE_EMAIL', 'enquiry@shreeashirwadpackers.in');

// Office Locations & Entity Links
define('ADDRESS_RANCHI', 'Anandpuri Chowk, Vidyanagar Road, Harmu, Ranchi, Jharkhand -834002');
define('ADDRESS_BOKARO', 'Plot no -54/c,Post office sector - 12/A, Bokaro, Jharkhand -827012');
define('ADDRESS_JAMSHEDPUR', 'Main Road, Bistupur / Mango Relocation Hub, Jamshedpur, Jharkhand -831001');
define('GMB_MAPS_URL', 'https://www.google.com/maps/place/Shree+Ashirwad+Packers+and+Movers+Ranchi/@23.3639813,85.3090259,17z/data=!3m1!4b1!4m6!3m5!1s0x39f4e0fa22c8abf9:0xf854a9cfd51fdbff!8m2!3d23.3639813!4d85.3090259!16s%2Fg%2F11pf5pnxnb');
define('FACEBOOK_URL', 'https://www.facebook.com/shreeashirwadpackers/');
define('YOUTUBE_URL', 'https://www.youtube.com/@shreeashirwadpackers');
define('GMB_LATITUDE', 23.3639813);
define('GMB_LONGITUDE', 85.3090259);

// Centralized City Registry Matrix (Infinite Multi-City Framework)
function get_city_details($city_name = 'Ranchi') {
    $city_key = strtolower(trim($city_name));
    
    $matrix = [
        'ranchi' => [
            'name' => 'Ranchi',
            'state' => 'Jharkhand',
            'type' => 'Headquarters (HQ)',
            'address' => ADDRESS_RANCHI,
            'street' => 'Anandpuri Chowk, Vidyanagar Road, Harmu',
            'pincode' => '834002',
            'phone' => SITE_PHONE,
            'phone_raw' => SITE_PHONE_RAW,
            'lat' => 23.3639813,
            'lng' => 85.3090259,
            'topbar' => 'HQ: Anandpuri Chowk, Harmu, Ranchi | Serving Ranchi & All Jharkhand',
            'footer_tag' => 'Packers and Movers in Ranchi. All Rights Reserved.'
        ],
        'jamshedpur' => [
            'name' => 'Jamshedpur',
            'state' => 'Jharkhand',
            'type' => 'Relocation Hub',
            'address' => ADDRESS_JAMSHEDPUR,
            'street' => 'Main Road, Bistupur / Mango Relocation Hub',
            'pincode' => '831001',
            'phone' => SITE_PHONE,
            'phone_raw' => SITE_PHONE_RAW,
            'lat' => 22.8045665,
            'lng' => 86.2028754,
            'topbar' => 'Jamshedpur Hub: Bistupur & Mango | Serving Steel City Jamshedpur & All Jharkhand',
            'footer_tag' => 'Packers and Movers in Jamshedpur. All Rights Reserved.'
        ],
        'bokaro' => [
            'name' => 'Bokaro',
            'state' => 'Jharkhand',
            'type' => 'Branch Office',
            'address' => ADDRESS_BOKARO,
            'street' => 'Plot no -54/c, Post office sector - 12/A',
            'pincode' => '827012',
            'phone' => SITE_PHONE,
            'phone_raw' => SITE_PHONE_RAW,
            'lat' => 23.669296,
            'lng' => 86.151112,
            'topbar' => 'Bokaro Branch: Sector 12/A, Bokaro Steel City | Serving Bokaro, Chas & Jharkhand',
            'footer_tag' => 'Packers and Movers in Bokaro. All Rights Reserved.'
        ]
    ];
    
    if (isset($matrix[$city_key])) {
        return $matrix[$city_key];
    }
    
    // Dynamic Fallback for ANY future city (e.g. Dhanbad, Hazaribagh, Deoghar, Patna, Kolkata)
    $clean_formatted_city = ucfirst($city_key);
    return [
        'name' => $clean_formatted_city,
        'state' => 'India',
        'type' => 'Dedicated Service Coverage Hub',
        'address' => ADDRESS_RANCHI, // Primary Registered HQ Address
        'street' => 'Anandpuri Chowk, Vidyanagar Road, Harmu',
        'pincode' => '834002',
        'phone' => SITE_PHONE,
        'phone_raw' => SITE_PHONE_RAW,
        'lat' => 23.3639813,
        'lng' => 85.3090259,
        'topbar' => $clean_formatted_city . ' Service Hub: Serving ' . $clean_formatted_city . ' & Pan-India Relocation',
        'footer_tag' => 'Packers and Movers in ' . $clean_formatted_city . '. All Rights Reserved.'
    ];
}

// SEO Defaults
define('DEFAULT_PAGE_TITLE', 'Packers and Movers in Ranchi & Jamshedpur | Safe Household & Office Shifting');
define('DEFAULT_META_DESC', 'Top rated Packers and Movers in Ranchi, Jamshedpur, and across Jharkhand offering safe, reliable, and affordable packing, moving, home relocation, and vehicle transportation services.');
define('DEFAULT_KEYWORDS', 'packers and movers in ranchi, packers and movers in jamshedpur, best packers and movers in jharkhand, household shifting ranchi, office relocation jamshedpur, car transport jharkhand, bike transport ranchi, local packers and movers jamshedpur, intercity movers in jharkhand, movers and packers contact number, warehouse storage jharkhand');


