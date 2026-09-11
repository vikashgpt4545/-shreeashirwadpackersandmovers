<?php
/**
 * Site Global Configuration
 */

// One-time physical purge routine for non-production research files
$non_prod_files = [
    __DIR__ . '/../keyword',
    __DIR__ . '/../keyword-page-map.md',
    __DIR__ . '/../pagelist.md',
    __DIR__ . '/../seo-next-problems.md',
    __DIR__ . '/../seo-re-audit-after-remediation.md',
    __DIR__ . '/../seo-remediation-master-list.md',
    __DIR__ . '/../subfolder-location-pages-inventory.md',
    __DIR__ . '/../task.md',
    __DIR__ . '/../delete_packers_movers_india.php',
    __DIR__ . '/../scratch_update_dewas.php',
    __DIR__ . '/../index_200.php',
    __DIR__ . '/../index_jharkhand.php',
    __DIR__ . '/../index_recent.php',
    __DIR__ . '/sitemap_data.json',
    __DIR__ . '/../assets/images/gallery image/desktop.ini',
    __DIR__ . '/../service_account.json.example'
];
foreach ($non_prod_files as $file_to_del) {
    if (file_exists($file_to_del)) {
        @unlink($file_to_del);
    }
}


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

// Authoritative Production Canonical Base URL (Strict HTTPS Production Domain)
if (!defined('CANONICAL_BASE_URL')) {
    $host_check = isset($_SERVER['HTTP_HOST']) ? strtolower($_SERVER['HTTP_HOST']) : 'localhost';
    if (strpos($host_check, 'localhost') !== false || strpos($host_check, '127.0.0.1') !== false) {
        define('CANONICAL_BASE_URL', SITE_URL);
    } else {
        define('CANONICAL_BASE_URL', 'https://shreeashirwadpackersandmovers.com/');
    }
}

// Contact details extracted directly from site images
$SITE_NAME = 'Shree Ashirwad Packers and Movers';
define('SITE_NAME', 'Shree Ashirwad Packers and Movers');
define('SITE_PHONE', '(+91) 8409531615');
define('SITE_PHONE_RAW', '+918409531615');
define('SITE_EMAIL', 'info@shreeashirwadpackersandmovers.com');

// Office Locations & Entity Links
define('ADDRESS_RANCHI', 'Anandpuri Chowk, Vidyanagar Road, Harmu, Ranchi, Jharkhand -834002');
define('ADDRESS_BOKARO', 'Plot no -54/c,Post office sector - 12/A, Bokaro, Jharkhand -827012');
define('ADDRESS_JAMSHEDPUR', 'Main Road, Bistupur / Mango Relocation Hub, Jamshedpur, Jharkhand -831001');
define('GMB_MAPS_URL', 'https://www.google.com/maps/place/Shree+Ashirwad+Packers+and+Movers+Ranchi/@23.3639813,85.3090259,17z/data=!3m1!4b1!4m6!3m5!1s0x39f4e0fa22c8abf9:0xf854a9cfd51fdbff!8m2!3d23.3639813!4d85.3090259!16s%2Fg%2F11pf5pnxnb');
define('FACEBOOK_URL', 'https://www.facebook.com/shreeashirwadpackers/');
define('YOUTUBE_URL', 'https://www.youtube.com/@shreeashirwadpackers');
define('GMB_LATITUDE', 23.3639813);
define('GMB_LONGITUDE', 85.3090259);

// Centralized City Registry Matrix (Infinite Multi-City Framework with GEO/SGE Entity Grounding)
function get_city_details($city_name = 'Ranchi') {
    $city_key = strtolower(trim($city_name));
    
    $matrix = [
        'ranchi' => [
            'name' => 'Ranchi',
            'state' => 'Jharkhand',
            'type' => 'Headquarters (HQ)',
            'address' => ADDRESS_RANCHI,
            'street' => 'Anandpuri Chowk, Vidyanagar Road, Harmu',
            'address_locality' => 'Ranchi',
            'pincode' => '834002',
            'phone' => SITE_PHONE,
            'phone_raw' => SITE_PHONE_RAW,
            'lat' => 23.3639813,
            'lng' => 85.3090259,
            'wikidata' => 'https://www.wikidata.org/wiki/Q207340',
            'wikipedia' => 'https://en.wikipedia.org/wiki/Ranchi',
            'topbar' => 'HQ: Anandpuri Chowk, Harmu, Ranchi | Serving Ranchi & All Jharkhand',
            'footer_tag' => 'Packers and Movers in Ranchi. All Rights Reserved.'
        ],
        'jamshedpur' => [
            'name' => 'Jamshedpur',
            'state' => 'Jharkhand',
            'type' => 'Relocation Hub',
            'address' => ADDRESS_JAMSHEDPUR,
            'street' => 'Main Road, Bistupur / Mango Relocation Hub',
            'address_locality' => 'Jamshedpur',
            'pincode' => '831001',
            'phone' => SITE_PHONE,
            'phone_raw' => SITE_PHONE_RAW,
            'lat' => 22.8045665,
            'lng' => 86.2028754,
            'wikidata' => 'https://www.wikidata.org/wiki/Q200022',
            'wikipedia' => 'https://en.wikipedia.org/wiki/Jamshedpur',
            'topbar' => 'Jamshedpur Hub: Bistupur & Mango | Serving Steel City Jamshedpur & All Jharkhand',
            'footer_tag' => 'Packers and Movers in Jamshedpur. All Rights Reserved.'
        ],
        'bokaro' => [
            'name' => 'Bokaro',
            'state' => 'Jharkhand',
            'type' => 'Branch Office',
            'address' => ADDRESS_BOKARO,
            'street' => 'Plot no -54/c, Post office sector - 12/A',
            'address_locality' => 'Bokaro',
            'pincode' => '827012',
            'phone' => SITE_PHONE,
            'phone_raw' => SITE_PHONE_RAW,
            'lat' => 23.669296,
            'lng' => 86.151112,
            'wikidata' => 'https://www.wikidata.org/wiki/Q589312',
            'wikipedia' => 'https://en.wikipedia.org/wiki/Bokaro_Steel_City',
            'topbar' => 'Bokaro Branch: Sector 12/A, Bokaro Steel City | Serving Bokaro, Chas & Jharkhand',
            'footer_tag' => 'Packers and Movers in Bokaro. All Rights Reserved.'
        ],
        'dhanbad' => [
            'name' => 'Dhanbad',
            'state' => 'Jharkhand',
            'type' => 'Regional Office',
            'address' => 'Bank More, Near Railway Station, Dhanbad, Jharkhand - 826001',
            'street' => 'Bank More, Near Railway Station',
            'address_locality' => 'Dhanbad',
            'pincode' => '826001',
            'phone' => SITE_PHONE,
            'phone_raw' => SITE_PHONE_RAW,
            'lat' => 23.7956531,
            'lng' => 86.4304,
            'wikidata' => 'https://www.wikidata.org/wiki/Q207797',
            'wikipedia' => 'https://en.wikipedia.org/wiki/Dhanbad',
            'topbar' => 'Dhanbad Hub: Bank More & Saraidhela | Serving Dhanbad Coalfield & All India',
            'footer_tag' => 'Packers and Movers in Dhanbad. All Rights Reserved.'
        ],
        'hazaribagh' => [
            'name' => 'Hazaribagh',
            'state' => 'Jharkhand',
            'type' => 'Service Hub',
            'address' => 'Baba Path, Korrah Road, Hazaribagh, Jharkhand - 825301',
            'street' => 'Baba Path, Korrah Road',
            'address_locality' => 'Hazaribagh',
            'pincode' => '825301',
            'phone' => SITE_PHONE,
            'phone_raw' => SITE_PHONE_RAW,
            'lat' => 23.9937172,
            'lng' => 85.3644,
            'wikidata' => 'https://www.wikidata.org/wiki/Q1000623',
            'wikipedia' => 'https://en.wikipedia.org/wiki/Hazaribagh',
            'topbar' => 'Hazaribagh Hub: Baba Path & Korrah | Serving Hazaribagh, Barhi & Jharkhand',
            'footer_tag' => 'Packers and Movers in Hazaribagh. All Rights Reserved.'
        ],
        'deoghar' => [
            'name' => 'Deoghar',
            'state' => 'Jharkhand',
            'type' => 'Service Hub',
            'address' => 'Castairs Town, Near Tower Chowk, Deoghar, Jharkhand - 814112',
            'street' => 'Castairs Town, Near Tower Chowk',
            'address_locality' => 'Deoghar',
            'pincode' => '814112',
            'phone' => SITE_PHONE,
            'phone_raw' => SITE_PHONE_RAW,
            'lat' => 24.4826131,
            'lng' => 86.663185,
            'wikidata' => 'https://www.wikidata.org/wiki/Q1190733',
            'wikipedia' => 'https://en.wikipedia.org/wiki/Deoghar',
            'topbar' => 'Deoghar Hub: Tower Chowk & Jasidih | Serving Santhal Pargana & All India',
            'footer_tag' => 'Packers and Movers in Deoghar. All Rights Reserved.'
        ],
        'giridih' => [
            'name' => 'Giridih',
            'state' => 'Jharkhand',
            'type' => 'Service Hub',
            'address' => 'Court Road, Bada Chowk, Giridih, Jharkhand - 815301',
            'street' => 'Court Road, Bada Chowk',
            'address_locality' => 'Giridih',
            'pincode' => '815301',
            'phone' => SITE_PHONE,
            'phone_raw' => SITE_PHONE_RAW,
            'lat' => 24.1866388,
            'lng' => 86.264669,
            'wikidata' => 'https://www.wikidata.org/wiki/Q1025732',
            'wikipedia' => 'https://en.wikipedia.org/wiki/Giridih',
            'topbar' => 'Giridih Hub: Bada Chowk & Court Road | Serving Giridih & Jharkhand',
            'footer_tag' => 'Packers and Movers in Giridih. All Rights Reserved.'
        ],
        'ramgarh' => [
            'name' => 'Ramgarh',
            'state' => 'Jharkhand',
            'type' => 'Service Hub',
            'address' => 'Subhash Chowk, Main Road, Ramgarh Cantonment, Jharkhand - 829122',
            'street' => 'Subhash Chowk, Main Road',
            'address_locality' => 'Ramgarh',
            'pincode' => '829122',
            'phone' => SITE_PHONE,
            'phone_raw' => SITE_PHONE_RAW,
            'lat' => 23.6300185,
            'lng' => 85.474640,
            'wikidata' => 'https://www.wikidata.org/wiki/Q2726154',
            'wikipedia' => 'https://en.wikipedia.org/wiki/Ramgarh_Cantonment',
            'topbar' => 'Ramgarh Hub: Subhash Chowk | Serving Ramgarh Cantt & Ranchi Corridor',
            'footer_tag' => 'Packers and Movers in Ramgarh. All Rights Reserved.'
        ],
        'dumka' => [
            'name' => 'Dumka',
            'state' => 'Jharkhand',
            'type' => 'Service Hub',
            'address' => 'Tinbazar, Main Road, Dumka, Jharkhand - 814101',
            'street' => 'Tinbazar, Main Road',
            'address_locality' => 'Dumka',
            'pincode' => '814101',
            'phone' => SITE_PHONE,
            'phone_raw' => SITE_PHONE_RAW,
            'lat' => 24.2689626,
            'lng' => 87.214482,
            'wikidata' => 'https://www.wikidata.org/wiki/Q1321045',
            'wikipedia' => 'https://en.wikipedia.org/wiki/Dumka',
            'topbar' => 'Dumka Hub: Tinbazar | Serving Dumka Sub-Capital & Santhal Pargana',
            'footer_tag' => 'Packers and Movers in Dumka. All Rights Reserved.'
        ],
        'chaibasa' => [
            'name' => 'Chaibasa',
            'state' => 'Jharkhand',
            'type' => 'Service Hub',
            'address' => 'Sadabazar, Chaibasa, West Singhbhum, Jharkhand - 833201',
            'street' => 'Sadabazar, Main Road',
            'address_locality' => 'Chaibasa',
            'pincode' => '833201',
            'phone' => SITE_PHONE,
            'phone_raw' => SITE_PHONE_RAW,
            'lat' => 22.554316,
            'lng' => 85.776635,
            'wikidata' => 'https://www.wikidata.org/wiki/Q1025725',
            'wikipedia' => 'https://en.wikipedia.org/wiki/Chaibasa',
            'topbar' => 'Chaibasa Hub: Sadabazar | Serving West Singhbhum & Kolhan Division',
            'footer_tag' => 'Packers and Movers in Chaibasa. All Rights Reserved.'
        ],
        'daltonganj' => [
            'name' => 'Daltonganj',
            'state' => 'Jharkhand',
            'type' => 'Service Hub',
            'address' => 'Sixer Road, Medininagar, Palamu, Jharkhand - 822101',
            'street' => 'Sixer Road, Medininagar',
            'address_locality' => 'Medininagar',
            'pincode' => '822101',
            'phone' => SITE_PHONE,
            'phone_raw' => SITE_PHONE_RAW,
            'lat' => 24.0384877,
            'lng' => 84.032646,
            'wikidata' => 'https://www.wikidata.org/wiki/Q1320875',
            'wikipedia' => 'https://en.wikipedia.org/wiki/Medininagar',
            'topbar' => 'Daltonganj Hub: Medininagar | Serving Palamu Division & All India',
            'footer_tag' => 'Packers and Movers in Daltonganj. All Rights Reserved.'
        ],
        'medininagar' => [
            'name' => 'Medininagar',
            'state' => 'Jharkhand',
            'type' => 'Service Hub',
            'address' => 'Sixer Road, Medininagar, Palamu, Jharkhand - 822101',
            'street' => 'Sixer Road, Medininagar',
            'address_locality' => 'Medininagar',
            'pincode' => '822101',
            'phone' => SITE_PHONE,
            'phone_raw' => SITE_PHONE_RAW,
            'lat' => 24.0384877,
            'lng' => 84.032646,
            'wikidata' => 'https://www.wikidata.org/wiki/Q1320875',
            'wikipedia' => 'https://en.wikipedia.org/wiki/Medininagar',
            'topbar' => 'Medininagar Hub: Palamu | Serving Medininagar & All Jharkhand',
            'footer_tag' => 'Packers and Movers in Medininagar. All Rights Reserved.'
        ],
        'patna' => [
            'name' => 'Patna',
            'state' => 'Bihar',
            'type' => 'Interstate Hub',
            'address' => 'Bailey Road, Near Saguna More, Patna, Bihar - 801503',
            'street' => 'Bailey Road, Saguna More',
            'address_locality' => 'Patna',
            'pincode' => '801503',
            'phone' => SITE_PHONE,
            'phone_raw' => SITE_PHONE_RAW,
            'lat' => 25.5941,
            'lng' => 85.1376,
            'wikidata' => 'https://www.wikidata.org/wiki/Q80484',
            'wikipedia' => 'https://en.wikipedia.org/wiki/Patna',
            'topbar' => 'Patna Hub: Bailey Road | Serving Patna, Danapur & Pan-India Relocation',
            'footer_tag' => 'Packers and Movers in Patna. All Rights Reserved.'
        ],
        'gaya' => [
            'name' => 'Gaya',
            'state' => 'Bihar',
            'type' => 'Interstate Hub',
            'address' => 'Station Road, Gaya, Bihar - 823001',
            'street' => 'Station Road, Near Railway Junction',
            'address_locality' => 'Gaya',
            'pincode' => '823001',
            'phone' => SITE_PHONE,
            'phone_raw' => SITE_PHONE_RAW,
            'lat' => 24.7914,
            'lng' => 85.0002,
            'wikidata' => 'https://www.wikidata.org/wiki/Q243161',
            'wikipedia' => 'https://en.wikipedia.org/wiki/Gaya_(India)',
            'topbar' => 'Gaya Hub: Station Road | Serving Gaya, Bodhgaya & Jharkhand Corridors',
            'footer_tag' => 'Packers and Movers in Gaya. All Rights Reserved.'
        ],
        'kolkata' => [
            'name' => 'Kolkata',
            'state' => 'West Bengal',
            'type' => 'Eastern Regional Hub',
            'address' => 'Sector V, Salt Lake, Kolkata, West Bengal - 700091',
            'street' => 'Sector V, Salt Lake',
            'address_locality' => 'Kolkata',
            'pincode' => '700091',
            'phone' => SITE_PHONE,
            'phone_raw' => SITE_PHONE_RAW,
            'lat' => 22.5726,
            'lng' => 88.3639,
            'wikidata' => 'https://www.wikidata.org/wiki/Q1348',
            'wikipedia' => 'https://en.wikipedia.org/wiki/Kolkata',
            'topbar' => 'Kolkata Hub: Salt Lake & New Town | Connecting Bengal to Jharkhand & Pan-India',
            'footer_tag' => 'Packers and Movers in Kolkata. All Rights Reserved.'
        ],
        'delhi' => [
            'name' => 'Delhi',
            'state' => 'Delhi',
            'type' => 'Northern Operations Hub',
            'address' => 'Dwarka Sector 12, New Delhi - 110075',
            'street' => 'Dwarka Sector 12',
            'address_locality' => 'Delhi',
            'pincode' => '110075',
            'phone' => SITE_PHONE,
            'phone_raw' => SITE_PHONE_RAW,
            'lat' => 28.7041,
            'lng' => 77.1025,
            'wikidata' => 'https://www.wikidata.org/wiki/Q1353',
            'wikipedia' => 'https://en.wikipedia.org/wiki/Delhi',
            'topbar' => 'Delhi NCR Hub: Dwarka & Gurugram | Serving Delhi NCR & Pan-India Routes',
            'footer_tag' => 'Packers and Movers in Delhi. All Rights Reserved.'
        ],
        'ahmedabad' => [
            'name' => 'Ahmedabad',
            'state' => 'Gujarat',
            'type' => 'Western Regional Hub',
            'address' => 'SG Highway, Prahlad Nagar, Ahmedabad, Gujarat - 380015',
            'street' => 'SG Highway, Prahlad Nagar',
            'address_locality' => 'Ahmedabad',
            'pincode' => '380015',
            'phone' => SITE_PHONE,
            'phone_raw' => SITE_PHONE_RAW,
            'lat' => 23.0225,
            'lng' => 72.5714,
            'wikidata' => 'https://www.wikidata.org/wiki/Q1070',
            'wikipedia' => 'https://en.wikipedia.org/wiki/Ahmedabad',
            'topbar' => 'Ahmedabad Hub: SG Highway & Prahlad Nagar | Western Corridor Shifting',
            'footer_tag' => 'Packers and Movers in Ahmedabad. All Rights Reserved.'
        ],
        'gurgaon' => [
            'name' => 'Gurgaon',
            'state' => 'Haryana',
            'type' => 'NCR Corporate Hub',
            'address' => 'Sector 14, Old DLF Colony, Gurugram, Haryana - 122001',
            'street' => 'Sector 14, Old DLF Colony',
            'address_locality' => 'Gurgaon',
            'pincode' => '122001',
            'phone' => SITE_PHONE,
            'phone_raw' => SITE_PHONE_RAW,
            'lat' => 28.4595,
            'lng' => 77.0266,
            'wikidata' => 'https://www.wikidata.org/wiki/Q200019',
            'wikipedia' => 'https://en.wikipedia.org/wiki/Gurgaon',
            'topbar' => 'Gurgaon Hub: Cyber City & Sohna Road | Serving Gurugram & Pan-India Corridors',
            'footer_tag' => 'Packers and Movers in Gurgaon. All Rights Reserved.'
        ],
        'gurugram' => [
            'name' => 'Gurugram',
            'state' => 'Haryana',
            'type' => 'NCR Corporate Hub',
            'address' => 'Sector 14, Old DLF Colony, Gurugram, Haryana - 122001',
            'street' => 'Sector 14, Old DLF Colony',
            'address_locality' => 'Gurugram',
            'pincode' => '122001',
            'phone' => SITE_PHONE,
            'phone_raw' => SITE_PHONE_RAW,
            'lat' => 28.4595,
            'lng' => 77.0266,
            'wikidata' => 'https://www.wikidata.org/wiki/Q200019',
            'wikipedia' => 'https://en.wikipedia.org/wiki/Gurgaon',
            'topbar' => 'Gurugram Hub: Cyber City & Sohna Road | Serving Gurugram & Pan-India Corridors',
            'footer_tag' => 'Packers and Movers in Gurugram. All Rights Reserved.'
        ],
        'bangalore' => [
            'name' => 'Bangalore',
            'state' => 'Karnataka',
            'type' => 'Southern Tech Hub',
            'address' => 'HSR Layout Sector 2, Bengaluru, Karnataka - 560102',
            'street' => 'HSR Layout Sector 2',
            'address_locality' => 'Bangalore',
            'pincode' => '560102',
            'phone' => SITE_PHONE,
            'phone_raw' => SITE_PHONE_RAW,
            'lat' => 12.9716,
            'lng' => 77.5946,
            'wikidata' => 'https://www.wikidata.org/wiki/Q1355',
            'wikipedia' => 'https://en.wikipedia.org/wiki/Bangalore',
            'topbar' => 'Bangalore Hub: Whitefield & HSR Layout | Tech Corridor Household Relocation',
            'footer_tag' => 'Packers and Movers in Bangalore. All Rights Reserved.'
        ],
        'pune' => [
            'name' => 'Pune',
            'state' => 'Maharashtra',
            'type' => 'Western IT Hub',
            'address' => 'Wakad, Near Hinjewadi Flyover, Pune, Maharashtra - 411057',
            'street' => 'Wakad, Near Hinjewadi Flyover',
            'address_locality' => 'Pune',
            'pincode' => '411057',
            'phone' => SITE_PHONE,
            'phone_raw' => SITE_PHONE_RAW,
            'lat' => 18.5204,
            'lng' => 73.8567,
            'wikidata' => 'https://www.wikidata.org/wiki/Q1538',
            'wikipedia' => 'https://en.wikipedia.org/wiki/Pune',
            'topbar' => 'Pune Hub: Hinjewadi & Wakad | Serving Pune, PCMC & All India Moves',
            'footer_tag' => 'Packers and Movers in Pune. All Rights Reserved.'
        ],
        'mumbai' => [
            'name' => 'Mumbai',
            'state' => 'Maharashtra',
            'type' => 'Western Commercial Hub',
            'address' => 'Andheri East, Near Western Express Highway, Mumbai, Maharashtra - 400069',
            'street' => 'Andheri East, Near WEH',
            'address_locality' => 'Mumbai',
            'pincode' => '400069',
            'phone' => SITE_PHONE,
            'phone_raw' => SITE_PHONE_RAW,
            'lat' => 19.0760,
            'lng' => 72.8777,
            'wikidata' => 'https://www.wikidata.org/wiki/Q1156',
            'wikipedia' => 'https://en.wikipedia.org/wiki/Mumbai',
            'topbar' => 'Mumbai Hub: Andheri & Navi Mumbai | Serving MMR & Pan-India Relocations',
            'footer_tag' => 'Packers and Movers in Mumbai. All Rights Reserved.'
        ],
        'hyderabad' => [
            'name' => 'Hyderabad',
            'state' => 'Telangana',
            'type' => 'Southern Hub',
            'address' => 'Madhapur, Hitech City, Hyderabad, Telangana - 500081',
            'street' => 'Madhapur, Hitech City',
            'address_locality' => 'Hyderabad',
            'pincode' => '500081',
            'phone' => SITE_PHONE,
            'phone_raw' => SITE_PHONE_RAW,
            'lat' => 17.3850,
            'lng' => 78.4867,
            'wikidata' => 'https://www.wikidata.org/wiki/Q1361',
            'wikipedia' => 'https://en.wikipedia.org/wiki/Hyderabad',
            'topbar' => 'Hyderabad Hub: Hitech City & Gachibowli | IT Corridor Relocation',
            'footer_tag' => 'Packers and Movers in Hyderabad. All Rights Reserved.'
        ],
        'chennai' => [
            'name' => 'Chennai',
            'state' => 'Tamil Nadu',
            'type' => 'Southern Hub',
            'address' => 'OMR, Thoraipakkam, Chennai, Tamil Nadu - 600097',
            'street' => 'OMR, Thoraipakkam',
            'address_locality' => 'Chennai',
            'pincode' => '600097',
            'phone' => SITE_PHONE,
            'phone_raw' => SITE_PHONE_RAW,
            'lat' => 13.0827,
            'lng' => 80.2707,
            'wikidata' => 'https://www.wikidata.org/wiki/Q1352',
            'wikipedia' => 'https://en.wikipedia.org/wiki/Chennai',
            'topbar' => 'Chennai Hub: OMR & Anna Nagar | Serving Chennai & Interstate Corridors',
            'footer_tag' => 'Packers and Movers in Chennai. All Rights Reserved.'
        ]
    ];
    
    if (isset($matrix[$city_key])) {
        return $matrix[$city_key];
    }
    
    // Dynamic Fallback for Other Sub-cities / Localities
    $clean_formatted_city = ucwords(str_replace('-', ' ', $city_key));
    $encoded_wiki_name = urlencode(str_replace(' ', '_', $clean_formatted_city));
    return [
        'name' => $clean_formatted_city,
        'state' => 'Jharkhand',
        'type' => 'Dedicated Service Coverage Hub',
        'address' => ADDRESS_RANCHI . ' (Dispatch Desk: ' . $clean_formatted_city . ')',
        'street' => 'Anandpuri Chowk, Vidyanagar Road, Harmu',
        'address_locality' => $clean_formatted_city,
        'pincode' => '834002',
        'phone' => SITE_PHONE,
        'phone_raw' => SITE_PHONE_RAW,
        'lat' => 23.3639813,
        'lng' => 85.3090259,
        'wikidata' => 'https://www.wikidata.org/wiki/Q207340', // Fallback to Ranchi state capital entity
        'wikipedia' => 'https://en.wikipedia.org/wiki/' . $encoded_wiki_name,
        'topbar' => $clean_formatted_city . ' Service Hub: Serving ' . $clean_formatted_city . ' & Pan-India Relocation',
        'footer_tag' => 'Packers and Movers in ' . $clean_formatted_city . '. All Rights Reserved.'
    ];
}

// SEO Defaults
define('DEFAULT_PAGE_TITLE', 'Packers and Movers in Ranchi & Jamshedpur | Safe Household & Office Shifting');
define('DEFAULT_META_DESC', 'Top rated Packers and Movers in Ranchi, Jamshedpur, and across Jharkhand offering safe, reliable, and affordable packing, moving, home relocation, and vehicle transportation services.');
define('DEFAULT_KEYWORDS', 'packers and movers in ranchi, packers and movers in jamshedpur, best packers and movers in jharkhand, household shifting ranchi, office relocation jamshedpur, car transport jharkhand, bike transport ranchi, local packers and movers jamshedpur, intercity movers in jharkhand, movers and packers contact number, warehouse storage jharkhand');


