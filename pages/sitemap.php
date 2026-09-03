<?php
require_once __DIR__ . '/../includes/config.php';

// Manually Curated Master Category Matrix of all Verified Live URLs
$categories = [
    'Core Pages & Relocation Guides' => [
        ['url' => SITE_URL, 'title' => 'Home - Shree Ashirwad Packers and Movers'],
        ['url' => SITE_URL . 'about', 'title' => 'About Us - Professional Relocation Services'],
        ['url' => SITE_URL . 'services', 'title' => 'Our Shifting Services Overview'],
        ['url' => SITE_URL . 'services/household-shifting', 'title' => 'Household Goods Shifting Services'],
        ['url' => SITE_URL . 'services/office-shifting', 'title' => 'Corporate & Office Relocation Services'],
        ['url' => SITE_URL . 'services/car-transportation', 'title' => 'Car Carrier & Vehicle Shipping Services'],
        ['url' => SITE_URL . 'services/local-shifting', 'title' => 'Local House & Goods Shifting Services'],
        ['url' => SITE_URL . 'services/warehouse', 'title' => 'Warehouse & Safe Storage Facilities'],
        ['url' => SITE_URL . 'gallery', 'title' => 'Packing & Shifting Live Photo Gallery'],
        ['url' => SITE_URL . 'contact', 'title' => 'Contact Us - Customer Support & Rate Quotes'],
        ['url' => SITE_URL . 'privacy-policy', 'title' => 'Privacy Policy'],
        ['url' => SITE_URL . 'terms', 'title' => 'Terms & Conditions'],
        ['url' => SITE_URL . 'guides', 'title' => 'Master Relocation Guides Directory'],
        ['url' => SITE_URL . 'guides/shifting-checklist', 'title' => 'Home Relocation Master Checklist'],
        ['url' => SITE_URL . 'guides/packers-movers-bill-reimbursement-claim', 'title' => 'Packers and Movers Bill Reimbursement Claim Guide']
    ],
    'Primary District Hubs & Regional Location Pages' => [
        ['url' => SITE_URL . 'packers-and-movers-in-ranchi', 'title' => 'Packers and Movers in Ranchi (HQ)'],
        ['url' => SITE_URL . 'packers-and-movers-in-jamshedpur', 'title' => 'Packers and Movers in Jamshedpur'],
        ['url' => SITE_URL . 'packers-and-movers-in-bokaro', 'title' => 'Packers and Movers in Bokaro Steel City'],
        ['url' => SITE_URL . 'packers-and-movers-in-dhanbad', 'title' => 'Packers and Movers in Dhanbad'],
        ['url' => SITE_URL . 'packers-and-movers-in-hazaribagh', 'title' => 'Packers and Movers in Hazaribagh'],
        ['url' => SITE_URL . 'packers-and-movers-in-deoghar', 'title' => 'Packers and Movers in Deoghar'],
        ['url' => SITE_URL . 'packers-and-movers-in-dumka', 'title' => 'Packers and Movers in Dumka'],
        ['url' => SITE_URL . 'packers-and-movers-in-chatra', 'title' => 'Packers and Movers in Chatra'],
        ['url' => SITE_URL . 'packers-and-movers-in-giridih', 'title' => 'Packers and Movers in Giridih'],
        ['url' => SITE_URL . 'packers-and-movers-in-patna', 'title' => 'Packers and Movers in Patna'],
        ['url' => SITE_URL . 'packers-and-movers-in-gaya', 'title' => 'Packers and Movers in Gaya'],
        ['url' => SITE_URL . 'packers-and-movers-in-muzaffarpur', 'title' => 'Packers and Movers in Muzaffarpur'],
        ['url' => SITE_URL . 'packers-and-movers-in-mau', 'title' => 'Packers and Movers in Mau'],
        ['url' => SITE_URL . 'packers-and-movers-in-ballia', 'title' => 'Packers and Movers in Ballia'],
        ['url' => SITE_URL . 'packers-and-movers-in-ghazipur', 'title' => 'Packers and Movers in Ghazipur'],
        ['url' => SITE_URL . 'packers-and-movers-in-azamgarh', 'title' => 'Packers and Movers in Azamgarh'],
        ['url' => SITE_URL . 'packers-and-movers-in-gorakhpur', 'title' => 'Packers and Movers in Gorakhpur'],
        ['url' => SITE_URL . 'packers-and-movers-in-deoria', 'title' => 'Packers and Movers in Deoria'],
        ['url' => SITE_URL . 'packers-and-movers-in-jaunpur', 'title' => 'Packers and Movers in Jaunpur'],
        ['url' => SITE_URL . 'packers-and-movers-in-kushinagar', 'title' => 'Packers and Movers in Kushinagar'],
        ['url' => SITE_URL . 'packers-and-movers-in-maharajganj', 'title' => 'Packers and Movers in Maharajganj'],
        ['url' => SITE_URL . 'packers-and-movers-in-dewas', 'title' => 'Packers and Movers in Dewas']
    ],
    'Ranchi Locality Hubs' => [
        ['url' => SITE_URL . 'packers-and-movers-lalpur-ranchi', 'title' => 'Packers and Movers in Lalpur, Ranchi'],
        ['url' => SITE_URL . 'packers-and-movers-kanke-road-ranchi', 'title' => 'Packers and Movers in Kanke Road, Ranchi'],
        ['url' => SITE_URL . 'packers-and-movers-ratu-road-ranchi', 'title' => 'Packers and Movers in Ratu Road, Ranchi'],
        ['url' => SITE_URL . 'packers-and-movers-doranda-ranchi', 'title' => 'Packers and Movers in Doranda, Ranchi'],
        ['url' => SITE_URL . 'packers-and-movers-bariatu-ranchi', 'title' => 'Packers and Movers in Bariatu, Ranchi'],
        ['url' => SITE_URL . 'packers-and-movers-hinoo-ranchi', 'title' => 'Packers and Movers in Hinoo, Ranchi'],
        ['url' => SITE_URL . 'packers-and-movers-morabadi-ranchi', 'title' => 'Packers and Movers in Morabadi, Ranchi'],
        ['url' => SITE_URL . 'packers-and-movers-harmu-ranchi', 'title' => 'Packers and Movers in Harmu, Ranchi'],
        ['url' => SITE_URL . 'packers-and-movers-namkum-ranchi', 'title' => 'Packers and Movers in Namkum, Ranchi'],
        ['url' => SITE_URL . 'packers-and-movers-kokar-ranchi', 'title' => 'Packers and Movers in Kokar, Ranchi'],
        ['url' => SITE_URL . 'packers-and-movers-in-hatia-ranchi', 'title' => 'Packers and Movers in Hatia, Ranchi'],
        ['url' => SITE_URL . 'packers-and-movers-in-kanke-ranchi', 'title' => 'Packers and Movers in Kanke, Ranchi']
    ],
    'Jamshedpur Locality Hubs' => [
        ['url' => SITE_URL . 'packers-and-movers-bistupur-jamshedpur', 'title' => 'Packers and Movers in Bistupur, Jamshedpur'],
        ['url' => SITE_URL . 'packers-and-movers-sakchi-jamshedpur', 'title' => 'Packers and Movers in Sakchi, Jamshedpur'],
        ['url' => SITE_URL . 'packers-and-movers-mango-jamshedpur', 'title' => 'Packers and Movers in Mango, Jamshedpur'],
        ['url' => SITE_URL . 'packers-and-movers-in-kadma-jamshedpur', 'title' => 'Packers and Movers in Kadma, Jamshedpur'],
        ['url' => SITE_URL . 'packers-and-movers-in-sonari-jamshedpur', 'title' => 'Packers and Movers in Sonari, Jamshedpur'],
        ['url' => SITE_URL . 'packers-and-movers-in-telco-jamshedpur', 'title' => 'Packers and Movers in Telco, Jamshedpur'],
        ['url' => SITE_URL . 'packers-and-movers-in-adityapur-jamshedpur', 'title' => 'Packers and Movers in Adityapur, Jamshedpur'],
        ['url' => SITE_URL . 'packers-and-movers-in-golmuri-jamshedpur', 'title' => 'Packers and Movers in Golmuri, Jamshedpur'],
        ['url' => SITE_URL . 'packers-and-movers-in-baridih-jamshedpur', 'title' => 'Packers and Movers in Baridih, Jamshedpur'],
        ['url' => SITE_URL . 'packers-and-movers-in-sundernagar-jamshedpur', 'title' => 'Packers and Movers in Sundernagar, Jamshedpur']
    ],
    'Patna Locality Hubs' => [
        ['url' => SITE_URL . 'packers-and-movers-in-kankarbagh-patna', 'title' => 'Packers and Movers in Kankarbagh, Patna'],
        ['url' => SITE_URL . 'packers-and-movers-in-boring-road-patna', 'title' => 'Packers and Movers in Boring Road, Patna'],
        ['url' => SITE_URL . 'packers-and-movers-in-danapur-patna', 'title' => 'Packers and Movers in Danapur, Patna'],
        ['url' => SITE_URL . 'packers-and-movers-in-bailey-road-patna', 'title' => 'Packers and Movers in Bailey Road, Patna'],
        ['url' => SITE_URL . 'packers-and-movers-in-rajendra-nagar-patna', 'title' => 'Packers and Movers in Rajendra Nagar, Patna'],
        ['url' => SITE_URL . 'packers-and-movers-in-patliputra-colony-patna', 'title' => 'Packers and Movers in Patliputra Colony, Patna'],
        ['url' => SITE_URL . 'packers-and-movers-in-anisabad-patna', 'title' => 'Packers and Movers in Anisabad, Patna'],
        ['url' => SITE_URL . 'packers-and-movers-in-khagaul-patna', 'title' => 'Packers and Movers in Khagaul, Patna'],
        ['url' => SITE_URL . 'packers-and-movers-in-digha-patna', 'title' => 'Packers and Movers in Digha, Patna'],
        ['url' => SITE_URL . 'packers-and-movers-in-bihta-patna', 'title' => 'Packers and Movers in Bihta, Patna']
    ],
    'Intercity Packers & Movers Routes' => [
        ['url' => SITE_URL . 'packers-and-movers-ranchi-to-patna', 'title' => 'Packers and Movers Ranchi to Patna'],
        ['url' => SITE_URL . 'packers-and-movers-ranchi-to-jamshedpur', 'title' => 'Packers and Movers Ranchi to Jamshedpur'],
        ['url' => SITE_URL . 'packers-and-movers-ranchi-to-bokaro', 'title' => 'Packers and Movers Ranchi to Bokaro'],
        ['url' => SITE_URL . 'packers-and-movers-ranchi-to-dhanbad', 'title' => 'Packers and Movers Ranchi to Dhanbad'],
        ['url' => SITE_URL . 'packers-and-movers-ranchi-to-kolkata', 'title' => 'Packers and Movers Ranchi to Kolkata'],
        ['url' => SITE_URL . 'packers-and-movers-ranchi-to-delhi', 'title' => 'Packers and Movers Ranchi to Delhi'],
        ['url' => SITE_URL . 'packers-and-movers-ranchi-to-bangalore', 'title' => 'Packers and Movers Ranchi to Bangalore'],
        ['url' => SITE_URL . 'packers-and-movers-ranchi-to-pune', 'title' => 'Packers and Movers Ranchi to Pune'],
        ['url' => SITE_URL . 'packers-and-movers-ranchi-to-mumbai', 'title' => 'Packers and Movers Ranchi to Mumbai'],
        ['url' => SITE_URL . 'packers-and-movers-ranchi-to-hyderabad', 'title' => 'Packers and Movers Ranchi to Hyderabad'],
        ['url' => SITE_URL . 'packers-and-movers-ranchi-to-bhagalpur', 'title' => 'Packers and Movers Ranchi to Bhagalpur'],
        ['url' => SITE_URL . 'packers-and-movers-ranchi-to-gaya', 'title' => 'Packers and Movers Ranchi to Gaya'],
        ['url' => SITE_URL . 'packers-and-movers-patna-to-ranchi', 'title' => 'Packers and Movers Patna to Ranchi'],
        ['url' => SITE_URL . 'packers-and-movers-patna-to-delhi', 'title' => 'Packers and Movers Patna to Delhi'],
        ['url' => SITE_URL . 'packers-and-movers-patna-to-kolkata', 'title' => 'Packers and Movers Patna to Kolkata'],
        ['url' => SITE_URL . 'packers-and-movers-patna-to-bangalore', 'title' => 'Packers and Movers Patna to Bangalore'],
        ['url' => SITE_URL . 'packers-and-movers-patna-to-mumbai', 'title' => 'Packers and Movers Patna to Mumbai'],
        ['url' => SITE_URL . 'packers-and-movers-jamshedpur-to-kolkata', 'title' => 'Packers and Movers Jamshedpur to Kolkata'],
        ['url' => SITE_URL . 'packers-and-movers-jamshedpur-to-ranchi', 'title' => 'Packers and Movers Jamshedpur to Ranchi'],
        ['url' => SITE_URL . 'packers-and-movers-jamshedpur-to-delhi', 'title' => 'Packers and Movers Jamshedpur to Delhi'],
        ['url' => SITE_URL . 'packers-and-movers-bokaro-to-delhi', 'title' => 'Packers and Movers Bokaro to Delhi'],
        ['url' => SITE_URL . 'packers-and-movers-bokaro-to-ranchi', 'title' => 'Packers and Movers Bokaro to Ranchi'],
        ['url' => SITE_URL . 'packers-and-movers-dhanbad-to-delhi', 'title' => 'Packers and Movers Dhanbad to Delhi'],
        ['url' => SITE_URL . 'packers-and-movers-dhanbad-to-kolkata', 'title' => 'Packers and Movers Dhanbad to Kolkata']
    ],
    'Car & Vehicle Transport Guides & Routes' => [
        ['url' => SITE_URL . 'car-transport-ranchi-to-patna', 'title' => 'Car Transport Ranchi to Patna'],
        ['url' => SITE_URL . 'car-carrier-transport-process-ranchi', 'title' => 'Car Carrier Transport Process Ranchi'],
        ['url' => SITE_URL . 'car-carrier-transport-process-jamshedpur', 'title' => 'Car Carrier Transport Process Jamshedpur'],
        ['url' => SITE_URL . 'car-transport-guide-jamshedpur', 'title' => 'Car Transport Guide Jamshedpur'],
        ['url' => SITE_URL . 'car-and-bike-transport-guide-bokaro', 'title' => 'Car and Bike Transport Guide Bokaro'],
        ['url' => SITE_URL . 'car-and-bike-transport-guide-dhanbad', 'title' => 'Car and Bike Transport Guide Dhanbad'],
        ['url' => SITE_URL . 'car-and-bike-transport-guide-deoghar', 'title' => 'Car and Bike Transport Guide Deoghar'],
        ['url' => SITE_URL . 'car-and-bike-transport-guide-dumka', 'title' => 'Car and Bike Transport Guide Dumka'],
        ['url' => SITE_URL . 'car-and-bike-transport-guide-hazaribagh', 'title' => 'Car and Bike Transport Guide Hazaribagh'],
        ['url' => SITE_URL . 'car-and-bike-transport-guide-chatra', 'title' => 'Car and Bike Transport Guide Chatra'],
        ['url' => SITE_URL . 'affordable-car-transportation-in-ranchi', 'title' => 'Affordable Car Transportation in Ranchi'],
        ['url' => SITE_URL . 'car-transportation-cost-charges-rates-quotes-india', 'title' => 'Car Transportation Cost, Charges & Tariff Rates India'],
        ['url' => SITE_URL . '10-tips-for-relocating-families-needing-reliable-car-transport', 'title' => '10 Tips for Families Needing Reliable Car Transport'],
        ['url' => SITE_URL . '5-red-flags-to-watch-out-for-when-hiring-a-car-transport-service', 'title' => '5 Red Flags When Hiring a Car Transport Service'],
        ['url' => SITE_URL . 'a-complete-guide-to-car-transport-for-vintage-and-classic-autos', 'title' => 'Guide to Car Transport for Vintage & Classic Autos'],
        ['url' => SITE_URL . 'a-comprehensive-guide-to-average-tariffs-for-vehicle-transport-services', 'title' => 'Guide to Average Tariffs for Vehicle Transport Services'],
        ['url' => SITE_URL . 'a-guide-to-interstate-rto-forms-needed-for-vehicle-transport-in-india', 'title' => 'Interstate RTO Forms Needed for Vehicle Transport'],
        ['url' => SITE_URL . 'a-guide-to-shipping-showroom-cars-using-a-specialized-car-transport-service', 'title' => 'Shipping Showroom Cars Using Specialized Car Transport'],
        ['url' => SITE_URL . 'best-payment-terms-and-advance-options-for-vehicle-transport-services', 'title' => 'Payment Terms and Advance Options for Vehicle Transport'],
        ['url' => SITE_URL . 'best-practices-for-preparing-your-luxury-vehicle-for-car-transport', 'title' => 'Preparing Luxury Vehicles for Car Transport']
    ],
    'Bike Transport Routes & Services' => [
        ['url' => SITE_URL . 'bike-transport-ranchi-to-patna', 'title' => 'Bike Transport Ranchi to Patna'],
        ['url' => SITE_URL . 'bike-car-transportation-guide-ranchi', 'title' => 'Bike & Car Transportation Guide Ranchi'],
        ['url' => SITE_URL . 'bike-transport-guide-jamshedpur', 'title' => 'Bike Transport Guide Jamshedpur'],
        ['url' => SITE_URL . 'affordable-bike-transportation-in-ranchi', 'title' => 'Affordable Bike Transportation in Ranchi'],
        ['url' => SITE_URL . '6-tips-to-ensure-smooth-bike-transport-experience-in-chennai', 'title' => '6 Tips to Ensure Smooth Bike Transport Experience'],
        ['url' => SITE_URL . 'bike-shifting-by-train', 'title' => 'Bike Shifting by Train Complete Guide'],
        ['url' => SITE_URL . 'bike-transport-charges-by-train', 'title' => 'Bike Transport Charges by Indian Railways'],
        ['url' => SITE_URL . 'bike-transport-cost-calculator', 'title' => 'Bike Transport Cost Calculator & Tariff Estimator'],
        ['url' => SITE_URL . 'bike-transport-consignment-tracking', 'title' => 'Bike Transport Consignment & Live Tracking'],
        ['url' => SITE_URL . 'bike-transport-checklist', 'title' => 'Two-Wheeler Bike Transport Preparation Checklist'],
        ['url' => SITE_URL . 'bike-transportation-process', 'title' => 'Complete Step-by-Step Bike Transportation Process']
    ]
];

$totalCount = 0;
foreach ($categories as $catItems) {
    $totalCount += count($catItems);
}

$page_title = "HTML Sitemap - All " . number_format($totalCount) . " Verified Relocation Pages | Shree Ashirwad Packers and Movers";
$page_desc = "Complete HTML sitemap directory listing all verified relocation service location pages, intercity routes, car & bike transport guides across India.";
$page_keywords = "sitemap, html sitemap, all pages, shree ashirwad packers and movers";

require_once __DIR__ . '/../includes/header.php';
?>

<main class="site-main" style="background: #070d19; color: #ffffff; min-height: 100vh; padding-bottom: 60px;">
  <div class="breadcrumb-wrapper" style="padding: 15px 0; background: #0f172a; border-bottom: 1px solid rgba(255,255,255,0.08);">
    <div class="container" style="max-width: 1140px; margin: 0 auto; padding: 0 15px;">
      <div class="breadcrumb-list" style="font-size: 0.9rem; color: #94a3b8;">
        <a href="<?php echo SITE_URL; ?>" title="Home" style="color: #f59e0b; text-decoration: none;">Home</a>
        <span style="margin: 0 8px;">/</span>
        <span style="color: #cbd5e1;">HTML Sitemap</span>
      </div>
    </div>
  </div>

  <section style="padding: 50px 0;">
    <div class="container" style="max-width: 1140px; margin: 0 auto; padding: 0 15px;">
      
      <!-- Header & Summary Banner -->
      <div style="background: linear-gradient(135deg, #0f172a 0%, #1e1b4b 100%); border: 1.5px solid rgba(245, 158, 11, 0.4); border-radius: 16px; padding: 35px 30px; margin-bottom: 40px; box-shadow: 0 15px 35px rgba(0,0,0,0.4);">
        <span style="background: rgba(245, 158, 11, 0.1); color: #f59e0b; border: 1.5px solid rgba(245, 158, 11, 0.3); padding: 5px 18px; border-radius: 30px; font-size: 0.8rem; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; display: inline-block; margin-bottom: 15px;">
          COMPLETE SITE DIRECTORY &bull; VERIFIED URL INDEX
        </span>
        <h1 style="font-size: 2.4rem; font-weight: 800; color: #ffffff; line-height: 1.3; margin-bottom: 15px;">
          Master HTML Sitemap Directory
        </h1>
        <p style="color: #cbd5e1; font-size: 1.08rem; line-height: 1.7; margin-bottom: 25px; max-width: 850px;">
          Explore all <strong><?php echo number_format($totalCount); ?></strong> verified service pages, intercity relocation hubs, vehicle shipping routes, and masterclass moving guides across India.
        </p>

        <!-- Live Instant Search Box -->
        <div style="position: relative; max-width: 600px;">
          <input type="text" id="sitemapSearchInput" onkeyup="filterSitemapPages()" placeholder="🔍 Type to search all <?php echo number_format($totalCount); ?> pages (e.g. Ranchi, Patna, Bike, Transport)..." style="width: 100%; padding: 14px 20px; border-radius: 30px; border: 1.5px solid #f59e0b; background: #070d19; color: #ffffff; font-size: 0.95rem; outline: none; box-shadow: 0 4px 15px rgba(0,0,0,0.3);">
          <span id="searchCounter" style="position: absolute; right: 18px; top: 14px; font-size: 0.85rem; color: #f59e0b; font-weight: 700;"></span>
        </div>
      </div>

      <!-- Homepage Card -->
      <div style="margin-bottom: 40px; background: #0f172a; padding: 16px 22px; border-radius: 12px; border: 1.5px solid rgba(245, 158, 11, 0.4);">
        <a href="<?php echo SITE_URL; ?>" title="Homepage - Shree Ashirwad Packers and Movers" style="color: #f59e0b; font-size: 1.1rem; font-weight: 700; text-decoration: none; display: flex; align-items: center; gap: 10px;">
          <i class="fas fa-home"></i> Homepage - Shree Ashirwad Packers and Movers (Main Headquarters)
        </a>
      </div>

      <!-- Categories & Links List -->
      <div id="sitemapCategoriesContainer">
        <?php foreach ($categories as $catName => $catItems): ?>
          <?php if (empty($catItems)) continue; ?>
          <div class="sitemap-cat-block" style="margin-bottom: 45px; background: #0f172a; border: 1px solid rgba(255,255,255,0.08); border-radius: 14px; padding: 28px 24px; box-shadow: 0 8px 25px rgba(0,0,0,0.2);">
            <h2 style="font-size: 1.45rem; font-weight: 700; color: #f59e0b; margin-bottom: 20px; padding-bottom: 10px; border-bottom: 2px solid rgba(245, 158, 11, 0.3); display: flex; justify-content: space-between; align-items: center;">
              <span><?php echo htmlspecialchars($catName); ?></span>
              <span style="font-size: 0.85rem; background: rgba(245, 158, 11, 0.15); color: #f59e0b; border: 1px solid rgba(245, 158, 11, 0.3); padding: 4px 14px; border-radius: 20px;">
                <?php echo count($catItems); ?> Pages
              </span>
            </h2>
            <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(280px, 1fr)); gap: 12px;">
              <?php foreach ($catItems as $item): ?>
                <div class="sitemap-url-card" data-title="<?php echo strtolower(htmlspecialchars($item['title'])); ?>" data-url="<?php echo strtolower(htmlspecialchars($item['url'])); ?>" style="background: #070d19; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(245, 158, 11, 0.15);">
                  <a href="<?php echo htmlspecialchars($item['url']); ?>" title="<?php echo htmlspecialchars($item['title']); ?>" style="color: #cbd5e1; text-decoration: none; font-size: 0.88rem; font-weight: 500; display: block; line-height: 1.5; transition: color 0.2s ease;">
                    &bull; <?php echo htmlspecialchars($item['title']); ?>
                  </a>
                </div>
              <?php endforeach; ?>
            </div>
          </div>
        <?php endforeach; ?>
      </div>

    </div>
  </section>
</main>

<script>
function filterSitemapPages() {
  const input = document.getElementById('sitemapSearchInput').value.toLowerCase();
  const cards = document.querySelectorAll('.sitemap-url-card');
  const catBlocks = document.querySelectorAll('.sitemap-cat-block');
  const counter = document.getElementById('searchCounter');
  let visibleCount = 0;

  cards.forEach(card => {
    const title = card.getAttribute('data-title') || '';
    const url = card.getAttribute('data-url') || '';
    if (title.includes(input) || url.includes(input)) {
      card.style.display = 'block';
      visibleCount++;
    } else {
      card.style.display = 'none';
    }
  });

  catBlocks.forEach(block => {
    const visibleInBlock = block.querySelectorAll('.sitemap-url-card[style*="display: block"]').length;
    if (visibleInBlock > 0 || input === '') {
      block.style.display = 'block';
    } else {
      block.style.display = 'none';
    }
  });

  if (input.length > 0) {
    counter.innerText = visibleCount + ' matches';
  } else {
    counter.innerText = '';
  }
}
</script>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>

