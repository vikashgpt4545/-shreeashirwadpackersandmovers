<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "HTML Sitemap | Shree Ashirwad Packers and Movers";
$page_desc = "Explore all site URLs and service location pages for Shree Ashirwad Packers and Movers across Jharkhand and Pan-India.";
$page_keywords = "sitemap, site map, all pages, shree ashirwad packers and movers";
$page_city = "Ranchi";

require_once __DIR__ . '/../includes/header.php';

// Dynamically scan pages directory for 100% accurate sitemap inventory
$pagesDir = __DIR__;
$files = glob($pagesDir . '/*.php');

$categories = [
    'Core Pages & Relocation Guides' => [],
    'Ranchi Location Pages & Routes' => [],
    'Jamshedpur Location Pages & Routes' => [],
    'Dhanbad Location Pages & Routes' => [],
    'Bokaro Location Pages & Routes' => [],
    'Hazaribagh Location Pages & Routes' => [],
    'Deoghar Location Pages & Routes' => [],
    'Chatra Location Pages & Routes' => [],
    'Dumka Location Pages & Routes' => [],
    'Other Regional Relocation Routes' => []
];

foreach ($files as $file) {
    $slug = basename($file, '.php');
    if ($slug === '404' || $slug === 'sitemap') continue; // Exclude error page and self
    
    // Format human readable title
    $rawTitle = str_replace('-', ' ', $slug);
    $title = ucwords($rawTitle);
    $url = SITE_URL . $slug;
    
    $item = ['url' => $url, 'title' => $title];
    
    if (in_array($slug, ['about', 'contact', 'gallery', 'services']) || strpos($slug, 'guide') !== false || strpos($slug, 'checklist') !== false || strpos($slug, 'faqs') !== false || strpos($slug, 'tips') !== false || strpos($slug, 'timeline') !== false || strpos($slug, 'best-practices') !== false || strpos($slug, 'cost-guide') !== false || strpos($slug, 'fraud') !== false || strpos($slug, 'choose') !== false || strpos($slug, 'iba-approved-packers-and-movers-ranchi-benefits') !== false || strpos($slug, 'charges') !== false || strpos($slug, 'process') !== false) {
        $categories['Core Pages & Relocation Guides'][] = $item;
    } elseif (strpos($slug, 'ranchi') !== false) {
        $categories['Ranchi Location Pages & Routes'][] = $item;
    } elseif (strpos($slug, 'jamshedpur') !== false) {
        $categories['Jamshedpur Location Pages & Routes'][] = $item;
    } elseif (strpos($slug, 'dhanbad') !== false) {
        $categories['Dhanbad Location Pages & Routes'][] = $item;
    } elseif (strpos($slug, 'bokaro') !== false) {
        $categories['Bokaro Location Pages & Routes'][] = $item;
    } elseif (strpos($slug, 'hazaribagh') !== false) {
        $categories['Hazaribagh Location Pages & Routes'][] = $item;
    } elseif (strpos($slug, 'deoghar') !== false) {
        $categories['Deoghar Location Pages & Routes'][] = $item;
    } elseif (strpos($slug, 'chatra') !== false) {
        $categories['Chatra Location Pages & Routes'][] = $item;
    } elseif (strpos($slug, 'dumka') !== false) {
        $categories['Dumka Location Pages & Routes'][] = $item;
    } else {
        $categories['Other Regional Relocation Routes'][] = $item;
    }
}

// Total count including homepage
$totalCount = count($files) - 1; // excluding 404
?>

<main class="site-main">
  <div class="breadcrumb-wrapper">
    <div class="container">
      <div class="breadcrumb-list">
        <span class="breadcrumb-item"><a href="<?php echo SITE_URL; ?>">Home</a></span>
        <span class="breadcrumb-separator">/</span>
        <span class="breadcrumb-item active">Sitemap</span>
      </div>
    </div>
  </div>

  <section style="padding: 60px 0; background: #0b132b; color: #ffffff;">
    <div class="container">
      <h1 style="font-size: 2.5rem; font-weight: 800; color: #ffffff; margin-bottom: 15px;">HTML Sitemap</h1>
      <p style="color: #cbd5e1; font-size: 1.1rem; margin-bottom: 40px;">
        Explore all <strong><?php echo $totalCount; ?></strong> service location pages, district hubs, and relocation guides across our website:
      </p>

      <!-- Homepage Entry -->
      <div style="margin-bottom: 40px; background: #172a54; padding: 15px 20px; border-radius: 8px; border: 1px solid rgba(245, 158, 11, 0.3);">
        <a href="<?php echo SITE_URL; ?>" style="color: #f59e0b; font-size: 1.1rem; font-weight: 700; text-decoration: none;">
          🏠 Homepage - Shree Ashirwad Packers and Movers (Main Headquarters)
        </a>
      </div>

      <?php foreach ($categories as $catName => $catItems): ?>
        <?php if (empty($catItems)) continue; ?>
        <div style="margin-bottom: 50px;">
          <h2 style="font-size: 1.6rem; font-weight: 700; color: #f59e0b; border-bottom: 2px solid rgba(245, 158, 11, 0.3); padding-bottom: 10px; margin-bottom: 20px;">
            <?php echo $catName; ?> (<?php echo count($catItems); ?> Pages)
          </h2>
          <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(300px, 1fr)); gap: 12px;">
            <?php foreach ($catItems as $item): ?>
              <div style="background: #172a54; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(245, 158, 11, 0.2); transition: transform 0.2s ease;">
                <a href="<?php echo $item['url']; ?>" style="color: #cbd5e1; text-decoration: none; font-size: 0.9rem; font-weight: 500; display: block;">
                  <?php echo htmlspecialchars($item['title']); ?>
                </a>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
      <?php endforeach; ?>

    </div>
  </section>
</main>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
