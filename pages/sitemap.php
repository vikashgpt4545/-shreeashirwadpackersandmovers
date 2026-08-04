<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "All Services & Locality Sitemap Directory | Shree Ashirwad Packers and Movers";
$page_desc = "Explore our complete sitemap directory of household shifting, office relocation, and intercity vehicle transport services across Ranchi, Jamshedpur, Bokaro, and all Jharkhand routes.";
$page_keywords = DEFAULT_KEYWORDS;

require_once __DIR__ . '/../includes/header.php';

// Dynamically fetch and categorize all HTML pages from the pages/ directory
$pages_dir = __DIR__;
$files = glob($pages_dir . '/*.php');

$ranchi_localities = [];
$jamshedpur_localities = [];
$intercity_routes = [];
$guides_and_services = [];

foreach ($files as $file) {
    $filename = basename($file, '.php');
    if (in_array($filename, ['404', 'sitemap', 'index', 'contact', 'about', 'services', 'gallery'])) {
        continue;
    }

    $title = ucwords(str_replace('-', ' ', $filename));

    if (stripos($filename, 'ranchi-to-') !== false || stripos($filename, 'jamshedpur-to-') !== false) {
        $intercity_routes[$filename] = $title;
    } elseif (stripos($filename, 'ranchi') !== false && stripos($filename, 'packers-and-movers') !== false) {
        $ranchi_localities[$filename] = $title;
    } elseif (stripos($filename, 'jamshedpur') !== false && stripos($filename, 'packers-and-movers') !== false) {
        $jamshedpur_localities[$filename] = $title;
    } else {
        $guides_and_services[$filename] = $title;
    }
}

ksort($ranchi_localities);
ksort($jamshedpur_localities);
ksort($intercity_routes);
ksort($guides_and_services);
?>

<main class="site-main">
  <!-- Hero / Header Banner -->
  <section class="page-header-section" style="background: linear-gradient(135deg, #1e293b 0%, #0f172a 100%); color: #fff; padding: 60px 0; text-align: center;">
    <div class="container">
      <h1 style="font-size: 2.2rem; color: #fbbf24; margin-bottom: 12px;">Sitemap & Service Coverage Directory</h1>
      <p style="font-size: 1.05rem; max-width: 800px; margin: 0 auto; color: #cbd5e1;">
        Complete indexing of all localized packing and moving landing pages, intercity shifting routes, and relocation guides provided by Shree Ashirwad Packers and Movers across Jharkhand & Pan-India.
      </p>
    </div>
  </section>

  <!-- Sitemap Directory Links Container -->
  <section class="sitemap-directory-section" style="padding: 50px 0; background: #f8fafc;">
    <div class="container">

      <!-- Main Pages & Services -->
      <div style="background: #fff; padding: 30px; border-radius: 12px; box-shadow: 0 4px 6px -1px rgba(0,0,0,0.05); margin-bottom: 30px;">
        <h2 style="font-size: 1.5rem; color: #b91c1c; border-bottom: 2px solid #fef3c7; padding-bottom: 8px; margin-bottom: 20px;">
          📌 Core Business & Service Hub Pages
        </h2>
        <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(240px, 1fr)); gap: 15px;">
          <a href="<?php echo SITE_URL; ?>" style="color: #1e293b; font-weight: 600; text-decoration: none;">• Home Page</a>
          <a href="<?php echo SITE_URL; ?>about" style="color: #1e293b; font-weight: 600; text-decoration: none;">• About Us</a>
          <a href="<?php echo SITE_URL; ?>services" style="color: #1e293b; font-weight: 600; text-decoration: none;">• Our Services</a>
          <a href="<?php echo SITE_URL; ?>gallery" style="color: #1e293b; font-weight: 600; text-decoration: none;">• Work Photo Gallery</a>
          <a href="<?php echo SITE_URL; ?>contact" style="color: #1e293b; font-weight: 600; text-decoration: none;">• Contact Us & Quote</a>
        </div>
      </div>

      <!-- Ranchi Localities -->
      <div style="background: #fff; padding: 30px; border-radius: 12px; box-shadow: 0 4px 6px -1px rgba(0,0,0,0.05); margin-bottom: 30px;">
        <h2 style="font-size: 1.5rem; color: #b91c1c; border-bottom: 2px solid #fef3c7; padding-bottom: 8px; margin-bottom: 20px;">
          🏡 Ranchi Locality Shifting Routes (<?php echo count($ranchi_localities); ?> Hubs)
        </h2>
        <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(280px, 1fr)); gap: 12px; font-size: 0.92rem;">
          <?php foreach ($ranchi_localities as $slug => $title): ?>
            <a href="<?php echo SITE_URL . $slug; ?>" style="color: #334155; text-decoration: none; padding: 4px 0; border-bottom: 1px dashed #e2e8f0;">
              📍 <?php echo htmlspecialchars($title); ?>
            </a>
          <?php endforeach; ?>
        </div>
      </div>

      <!-- Jamshedpur Localities -->
      <div style="background: #fff; padding: 30px; border-radius: 12px; box-shadow: 0 4px 6px -1px rgba(0,0,0,0.05); margin-bottom: 30px;">
        <h2 style="font-size: 1.5rem; color: #b91c1c; border-bottom: 2px solid #fef3c7; padding-bottom: 8px; margin-bottom: 20px;">
          🏭 Jamshedpur Locality Shifting Routes (<?php echo count($jamshedpur_localities); ?> Hubs)
        </h2>
        <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(280px, 1fr)); gap: 12px; font-size: 0.92rem;">
          <?php foreach ($jamshedpur_localities as $slug => $title): ?>
            <a href="<?php echo SITE_URL . $slug; ?>" style="color: #334155; text-decoration: none; padding: 4px 0; border-bottom: 1px dashed #e2e8f0;">
              📍 <?php echo htmlspecialchars($title); ?>
            </a>
          <?php endforeach; ?>
        </div>
      </div>

      <!-- Intercity Shifting Routes -->
      <div style="background: #fff; padding: 30px; border-radius: 12px; box-shadow: 0 4px 6px -1px rgba(0,0,0,0.05); margin-bottom: 30px;">
        <h2 style="font-size: 1.5rem; color: #b91c1c; border-bottom: 2px solid #fef3c7; padding-bottom: 8px; margin-bottom: 20px;">
          🚚 Major Intercity Relocation Routes (<?php echo count($intercity_routes); ?> Routes)
        </h2>
        <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(280px, 1fr)); gap: 12px; font-size: 0.92rem;">
          <?php foreach ($intercity_routes as $slug => $title): ?>
            <a href="<?php echo SITE_URL . $slug; ?>" style="color: #334155; text-decoration: none; padding: 4px 0; border-bottom: 1px dashed #e2e8f0;">
              🚛 <?php echo htmlspecialchars($title); ?>
            </a>
          <?php endforeach; ?>
        </div>
      </div>

      <!-- Relocation Guides & Cost Checklists -->
      <?php if (!empty($guides_and_services)): ?>
      <div style="background: #fff; padding: 30px; border-radius: 12px; box-shadow: 0 4px 6px -1px rgba(0,0,0,0.05);">
        <h2 style="font-size: 1.5rem; color: #b91c1c; border-bottom: 2px solid #fef3c7; padding-bottom: 8px; margin-bottom: 20px;">
          📚 Relocation Guides, Rate Calculators & Checklists (<?php echo count($guides_and_services); ?> Resources)
        </h2>
        <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(280px, 1fr)); gap: 12px; font-size: 0.92rem;">
          <?php foreach ($guides_and_services as $slug => $title): ?>
            <a href="<?php echo SITE_URL . $slug; ?>" style="color: #334155; text-decoration: none; padding: 4px 0; border-bottom: 1px dashed #e2e8f0;">
              📖 <?php echo htmlspecialchars($title); ?>
            </a>
          <?php endforeach; ?>
        </div>
      </div>
      <?php endif; ?>

    </div>
  </section>
</main>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
