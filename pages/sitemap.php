<?php
require_once __DIR__ . '/../includes/config.php';

// Comprehensive Category Matrix for All Site Pages
$categories = [
    'Core Pages & Services' => [],
    'Master Relocation Guides & Checklists' => [],
    'Ranchi Location Pages & Locality Routes' => [],
    'Jamshedpur Location Pages & Locality Routes' => [],
    'Dhanbad Location Pages & Locality Routes' => [],
    'Bokaro Location Pages & Locality Routes' => [],
    'Hazaribagh Location Pages & Locality Routes' => [],
    'Deoghar Location Pages & Locality Routes' => [],
    'Chatra Location Pages & Locality Routes' => [],
    'Dumka Location Pages & Locality Routes' => [],
    'Patna Location Pages & Locality Routes' => [],
    'Dewas Location Pages & Locality Routes' => [],
    'Car Transport Routes & Guides Across India' => [],
    'Bike Transport Routes & Guides Across India' => [],
    'Intercity Packers & Movers Routes Across India' => [],
    'All Other Regional Relocation Pages & Routes' => []
];

// Slugs that 301-redirect elsewhere (excluded from HTML sitemap)
$redirected_slugs = [
    // Patna Keyword-Variant Cannibalized Stubs -> Redirected to /packers-and-movers-in-patna
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
    // Vehicle & IBA Patna Stubs -> Redirected to canonical hubs
    'bike-movers-and-packers-in-patna',
    'bike-packers-and-movers-in-patna',
    'car-movers-and-packers-in-patna',
    'car-packers-and-movers-in-patna',
    'iba-approved-movers-and-packers-in-patna',
    // Typo Slug Fixes
    'packers-and-movers-nirrsa-dhanbad',
    'packers-and-movers-rohani-deoghar',
    'packers-and-movers-jarmundi-border-deoghar',
    'packers-and-movers-mahadeodekh-deoghar',
    'packers-and-movers-shankari-deoghar',
    'packers-and-movers-tapasvan-deoghar',
    'packers-and-movers-devipur-deoghar'
];

$pagesDir = __DIR__;
$iterator = new RecursiveIteratorIterator(
    new RecursiveDirectoryIterator($pagesDir, RecursiveDirectoryIterator::SKIP_DOTS),
    RecursiveIteratorIterator::SELF_FIRST
);

$totalCount = 0;

foreach ($iterator as $file) {
    if (!$file->isFile() || $file->getExtension() !== 'php') continue;

    $filename = $file->getFilename();
    if ($filename === '404.php' || $filename === 'sitemap.php') continue;

    $baseName = basename($filename, '.php');
    if (in_array($baseName, $redirected_slugs, true)) continue;

    $realPath = $file->getPathname();
    $relPath = str_replace('\\', '/', substr($realPath, strlen($pagesDir) + 1));
    $route = str_replace('.php', '', $relPath);

    if (substr($route, -6) === '/index') {
        $route = substr($route, 0, -6);
    }

    $slug = strtolower($route);

    $titleBase = basename($route);
    if ($titleBase === '' || $titleBase === 'services') {
        $title = 'Services Overview';
    } else {
        $rawTitle = str_replace('-', ' ', $titleBase);
        $title = ucwords($rawTitle);
        $title = str_replace(['Iba', 'Rto', 'Gst', 'Gps', 'Nh'], ['IBA', 'RTO', 'GST', 'GPS', 'NH'], $title);
    }

    $url = SITE_URL . ltrim($route, '/');
    $item = ['url' => $url, 'title' => $title, 'route' => $route];
    $totalCount++;

    if (strpos($slug, 'services') === 0 || $slug === 'about' || $slug === 'contact' || $slug === 'gallery' || $slug === 'privacy-policy' || $slug === 'terms') {
        $categories['Core Pages & Services'][] = $item;
    } elseif (strpos($slug, 'guides') === 0 || strpos($slug, 'guide') !== false || strpos($slug, 'checklist') !== false || strpos($slug, 'faqs') !== false || strpos($slug, 'tips') !== false || strpos($slug, 'timeline') !== false || strpos($slug, 'best-practices') !== false || strpos($slug, 'cost-guide') !== false || strpos($slug, 'fraud') !== false) {
        $categories['Master Relocation Guides & Checklists'][] = $item;
    } elseif (strpos($slug, 'ranchi') !== false) {
        $categories['Ranchi Location Pages & Locality Routes'][] = $item;
    } elseif (strpos($slug, 'jamshedpur') !== false) {
        $categories['Jamshedpur Location Pages & Locality Routes'][] = $item;
    } elseif (strpos($slug, 'dhanbad') !== false) {
        $categories['Dhanbad Location Pages & Locality Routes'][] = $item;
    } elseif (strpos($slug, 'bokaro') !== false) {
        $categories['Bokaro Location Pages & Locality Routes'][] = $item;
    } elseif (strpos($slug, 'hazaribagh') !== false) {
        $categories['Hazaribagh Location Pages & Locality Routes'][] = $item;
    } elseif (strpos($slug, 'deoghar') !== false) {
        $categories['Deoghar Location Pages & Locality Routes'][] = $item;
    } elseif (strpos($slug, 'chatra') !== false) {
        $categories['Chatra Location Pages & Locality Routes'][] = $item;
    } elseif (strpos($slug, 'dumka') !== false) {
        $categories['Dumka Location Pages & Locality Routes'][] = $item;
    } elseif (strpos($slug, 'patna') !== false) {
        $categories['Patna Location Pages & Locality Routes'][] = $item;
    } elseif (strpos($slug, 'dewas') !== false) {
        $categories['Dewas Location Pages & Locality Routes'][] = $item;
    } elseif (strpos($slug, 'car-transport') !== false || strpos($slug, 'car-carrier') !== false || strpos($slug, 'car-relocation') !== false) {
        $categories['Car Transport Routes & Guides Across India'][] = $item;
    } elseif (strpos($slug, 'bike-transport') !== false || strpos($slug, 'bike-shifting') !== false || strpos($slug, 'bike-relocation') !== false) {
        $categories['Bike Transport Routes & Guides Across India'][] = $item;
    } elseif (strpos($slug, 'packers-and-movers-') !== false || strpos($slug, 'packers-movers-') !== false) {
        $categories['Intercity Packers & Movers Routes Across India'][] = $item;
    } else {
        $categories['All Other Regional Relocation Pages & Routes'][] = $item;
    }
}

// Add homepage count
$totalCount++;

$page_title = "HTML Sitemap - All " . number_format($totalCount) . " Verified Relocation Pages | Shree Ashirwad Packers and Movers";
$page_desc = "Complete HTML sitemap directory listing all " . number_format($totalCount) . " service location pages, intercity routes, car & bike transport guides across India.";
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
          COMPLETE SITE DIRECTORY &bull; 100% LIVE INDEX
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

