<?php
require_once __DIR__ . '/../includes/config.php';

// Dynamically scan the pages directory and all subdirectories directly in PHP on every request
$pagesDir = __DIR__;
$iterator = new RecursiveIteratorIterator(
    new RecursiveDirectoryIterator($pagesDir, RecursiveDirectoryIterator::SKIP_DOTS),
    RecursiveIteratorIterator::SELF_FIRST
);

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
    'Patna Location Pages & Routes' => [],
    'Dewas Location Pages & Routes' => [],
    'Car Transport Routes Across India' => [],
    'Bike Transport Routes Across India' => [],
    'Intercity Packers & Movers Routes' => [],
    'Other Regional Relocation Routes' => []
];

$totalCount = 0;

foreach ($iterator as $file) {
    if ($file->isFile() && $file->getExtension() === 'php') {
        $filename = $file->getFilename();
        if ($filename === '404.php' || $filename === 'sitemap.php') continue;

        // Calculate relative route from pages/
        $realPath = $file->getPathname();
        $relPath = str_replace('\\', '/', substr($realPath, strlen($pagesDir) + 1));
        $route = '/' . str_replace('.php', '', $relPath);
        $slug = strtolower($relPath);

        $baseName = basename($filename, '.php');
        $rawTitle = str_replace('-', ' ', $baseName);
        $title = ucwords($rawTitle);
        $title = str_replace(['Iba', 'Rto', 'Gst', 'Gps'], ['IBA', 'RTO', 'GST', 'GPS'], $title);

        $url = SITE_URL . ltrim($route, '/');
        $item = ['url' => $url, 'title' => $title, 'route' => $route];
        $totalCount++;

        // Categorization logic
        if (strpos($slug, 'guide') !== false || strpos($slug, 'checklist') !== false || strpos($slug, 'faqs') !== false || strpos($slug, 'tips') !== false || strpos($slug, 'timeline') !== false || strpos($slug, 'best-practices') !== false || strpos($slug, 'cost-guide') !== false || strpos($slug, 'fraud') !== false || strpos($slug, 'choose') !== false || strpos($slug, 'charges') !== false || strpos($slug, 'process') !== false || strpos($slug, 'regulations') !== false || strpos($slug, 'rules') !== false || strpos($slug, 'about') !== false || strpos($slug, 'contact') !== false || strpos($slug, 'gallery') !== false || strpos($slug, 'services') !== false) {
            if (strpos($slug, 'packers-and-movers-in-') === false && strpos($slug, 'bike-transportation-in-') === false && strpos($slug, 'car-transportation-in-') === false) {
                $categories['Core Pages & Relocation Guides'][] = $item;
                continue;
            }
        }

        if (strpos($slug, 'ranchi') !== false) {
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
        } elseif (strpos($slug, 'patna') !== false) {
            $categories['Patna Location Pages & Routes'][] = $item;
        } elseif (strpos($slug, 'dewas') !== false) {
            $categories['Dewas Location Pages & Routes'][] = $item;
        } elseif (strpos($slug, 'car-transport') !== false) {
            $categories['Car Transport Routes Across India'][] = $item;
        } elseif (strpos($slug, 'bike-transport') !== false) {
            $categories['Bike Transport Routes Across India'][] = $item;
        } elseif (strpos($slug, 'packers-and-movers-') !== false) {
            $categories['Intercity Packers & Movers Routes'][] = $item;
        } else {
            $categories['Other Regional Relocation Routes'][] = $item;
        }
    }
}

// Add homepage count
$totalCount++;

$page_title = "HTML Sitemap - All " . number_format($totalCount) . " Relocation Pages | Shree Ashirwad Packers and Movers";
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
          <input type="text" id="sitemapSearchInput" onkeyup="filterSitemapPages()" placeholder="🔍 Type to search all <?php echo number_format($totalCount); ?> pages (e.g. Ranchi, Dumka, Bike, Dewas)..." style="width: 100%; padding: 14px 20px; border-radius: 30px; border: 1.5px solid #f59e0b; background: #070d19; color: #ffffff; font-size: 0.95rem; outline: none; box-shadow: 0 4px 15px rgba(0,0,0,0.3);">
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
