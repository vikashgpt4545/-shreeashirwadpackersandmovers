<?php
require_once __DIR__ . '/config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo isset($page_title) ? htmlspecialchars($page_title) : DEFAULT_PAGE_TITLE; ?></title>
  <meta name="description" content="<?php echo isset($page_desc) ? htmlspecialchars($page_desc) : DEFAULT_META_DESC; ?>">
  <meta name="keywords" content="<?php echo isset($page_keywords) ? htmlspecialchars($page_keywords) : DEFAULT_KEYWORDS; ?>">
<?php
  // Compute Clean Dynamic Canonical URL
  $request_path = parse_url($_SERVER['REQUEST_URI'] ?? '', PHP_URL_PATH);
  $clean_slug = preg_replace('/^pages\//', '', ltrim($request_path, '/'));
  $clean_slug = preg_replace('/\.php$/', '', $clean_slug);
  $canonical_url = ($clean_slug === '' || $clean_slug === 'index') ? SITE_URL : SITE_URL . $clean_slug;
?>
  <link rel="canonical" href="<?php echo htmlspecialchars($canonical_url); ?>">
  
  <!-- Open Graph / Facebook / WhatsApp Meta Tags -->
  <meta property="og:type" content="website">
  <meta property="og:url" content="<?php echo htmlspecialchars($canonical_url); ?>">
  <meta property="og:title" content="<?php echo isset($page_title) ? htmlspecialchars($page_title) : DEFAULT_PAGE_TITLE; ?>">
  <meta property="og:description" content="<?php echo isset($page_desc) ? htmlspecialchars($page_desc) : DEFAULT_META_DESC; ?>">
  <meta property="og:image" content="<?php echo SITE_URL; ?>assets/images/logo.png">
  <meta property="og:site_name" content="Shree Ashirwad Packers and Movers">
  <meta property="og:locale" content="en_IN">

  <!-- Twitter Card Meta Tags -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:url" content="<?php echo htmlspecialchars($canonical_url); ?>">
  <meta name="twitter:title" content="<?php echo isset($page_title) ? htmlspecialchars($page_title) : DEFAULT_PAGE_TITLE; ?>">
  <meta name="twitter:description" content="<?php echo isset($page_desc) ? htmlspecialchars($page_desc) : DEFAULT_META_DESC; ?>">
  <meta name="twitter:image" content="<?php echo SITE_URL; ?>assets/images/logo.png">
  
  <!-- Site Icon (Favicon Swastik) -->
  <link rel="icon" type="image/png" href="<?php echo SITE_URL; ?>assets/images/favicon.png">
  
  <!-- CSS Stylesheet -->
  <link rel="stylesheet" href="<?php echo SITE_URL; ?>assets/css/style.css">

  <!-- Schema.org JSON-LD Connected Entity Knowledge Graph for Local Business SEO & AI Search (GEO) -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@graph": [
      {
        "@type": "MovingCompany",
        "@id": "https://shreeashirwadpackersandmovers.com/#organization",
        "name": "Shree Ashirwad Packers and Movers",
        "alternateName": "Packers and Movers Ranchi",
        "image": "<?php echo SITE_URL; ?>assets/images/logo.png",
        "telephone": "<?php echo SITE_PHONE_RAW; ?>",
        "email": "<?php echo SITE_EMAIL; ?>",
        "url": "https://shreeashirwadpackersandmovers.com/",
        "priceRange": "\u20b9\u20b9",
        "address": [
          {
            "@type": "PostalAddress",
            "streetAddress": "Anandpuri Chowk, Vidyanagar Road, Harmu",
            "addressLocality": "Ranchi",
            "addressRegion": "Jharkhand",
            "postalCode": "834002",
            "addressCountry": "IN"
          },
          {
            "@type": "PostalAddress",
            "streetAddress": "Plot no -54/c, Post office sector - 12/A",
            "addressLocality": "Bokaro",
            "addressRegion": "Jharkhand",
            "postalCode": "827012",
            "addressCountry": "IN"
          }
        ],
        "geo": {
          "@type": "GeoCoordinates",
          "latitude": <?php echo GMB_LATITUDE; ?>,
          "longitude": <?php echo GMB_LONGITUDE; ?>
        },
        "hasMap": "<?php echo GMB_MAPS_URL; ?>",
        "sameAs": [
          "<?php echo GMB_MAPS_URL; ?>",
          "<?php echo FACEBOOK_URL; ?>",
          "<?php echo YOUTUBE_URL; ?>"
        ],
        "areaServed": ["Ranchi", "Bokaro", "Jharkhand", "India"],
        "aggregateRating": {
          "@type": "AggregateRating",
          "ratingValue": "4.9",
          "reviewCount": "2850",
          "bestRating": "5",
          "worstRating": "1"
        },
        "hasOfferCatalog": {
          "@type": "OfferCatalog",
          "name": "Relocation Services",
          "itemListElement": [
            {
              "@type": "Offer",
              "itemOffered": {
                "@type": "Service",
                "@id": "https://shreeashirwadpackersandmovers.com/#service-household-shifting",
                "name": "Household Shifting in Ranchi",
                "description": "Complete home relocation services in Ranchi with 7-layer bubble wrap packing, furniture disassembly, enclosed container truck transport, and room-by-room setup at destination.",
                "serviceType": "Household Shifting",
                "provider": {
                  "@id": "https://shreeashirwadpackersandmovers.com/#organization"
                },
                "areaServed": {
                  "@type": "City",
                  "name": "Ranchi"
                }
              }
            },
            {
              "@type": "Offer",
              "itemOffered": {
                "@type": "Service",
                "@id": "https://shreeashirwadpackersandmovers.com/#service-office-shifting",
                "name": "Office and Commercial Shifting in Ranchi",
                "description": "Zero-downtime corporate office relocation in Ranchi with anti-static IT hardware packing, tagged file inventory, and weekend or overnight shifting execution.",
                "serviceType": "Office Shifting",
                "provider": {
                  "@id": "https://shreeashirwadpackersandmovers.com/#organization"
                },
                "areaServed": {
                  "@type": "City",
                  "name": "Ranchi"
                }
              }
            },
            {
              "@type": "Offer",
              "itemOffered": {
                "@type": "Service",
                "@id": "https://shreeashirwadpackersandmovers.com/#service-car-transport",
                "name": "Car Transport in Ranchi",
                "description": "Safe enclosed hydraulic car carrier transport from Ranchi to all Indian cities with zero mileage addition, doorstep pickup and delivery, and scratch-free guarantee.",
                "serviceType": "Car Transportation",
                "provider": {
                  "@id": "https://shreeashirwadpackersandmovers.com/#organization"
                },
                "areaServed": {
                  "@type": "City",
                  "name": "Ranchi"
                }
              }
            },
            {
              "@type": "Offer",
              "itemOffered": {
                "@type": "Service",
                "@id": "https://shreeashirwadpackersandmovers.com/#service-bike-transport",
                "name": "Bike Transport in Ranchi",
                "description": "Scratch-free bike transport from Ranchi with paddy straw padding, corrugated wrap, and belt-locked enclosed container truck delivery pan-India.",
                "serviceType": "Bike Transportation",
                "provider": {
                  "@id": "https://shreeashirwadpackersandmovers.com/#organization"
                },
                "areaServed": {
                  "@type": "City",
                  "name": "Ranchi"
                }
              }
            },
            {
              "@type": "Offer",
              "itemOffered": {
                "@type": "Service",
                "@id": "https://shreeashirwadpackersandmovers.com/#service-warehouse-storage",
                "name": "Warehouse and Storage in Ranchi",
                "description": "Secure short-term and long-term warehouse storage in Ranchi with 24/7 CCTV surveillance, pest control, moisture protection, and flexible rental plans.",
                "serviceType": "Warehouse Storage",
                "provider": {
                  "@id": "https://shreeashirwadpackersandmovers.com/#organization"
                },
                "areaServed": {
                  "@type": "City",
                  "name": "Ranchi"
                }
              }
            }
          ]
        }
      },
      {
        "@type": "BreadcrumbList",
        "@id": "<?php echo htmlspecialchars($canonical_url); ?>#breadcrumb",
        "itemListElement": [
          {
            "@type": "ListItem",
            "position": 1,
            "name": "Home",
            "item": "https://shreeashirwadpackersandmovers.com/"
          },
          {
            "@type": "ListItem",
            "position": 2,
            "name": "<?php echo isset($page_title) ? htmlspecialchars($page_title) : DEFAULT_PAGE_TITLE; ?>",
            "item": "<?php echo htmlspecialchars($canonical_url); ?>"
          }
        ]
      },
      {
        "@type": "WebPage",
        "@id": "<?php echo htmlspecialchars($canonical_url); ?>#webpage",
        "url": "<?php echo htmlspecialchars($canonical_url); ?>",
        "name": "<?php echo isset($page_title) ? htmlspecialchars($page_title) : DEFAULT_PAGE_TITLE; ?>",
        "description": "<?php echo isset($page_desc) ? htmlspecialchars($page_desc) : DEFAULT_META_DESC; ?>",
        "breadcrumb": {
          "@id": "<?php echo htmlspecialchars($canonical_url); ?>#breadcrumb"
        },
        "isPartOf": {
          "@id": "https://shreeashirwadpackersandmovers.com/#organization"
        }
      }
    ]
  }
  </script>
</head>
<body>

  <!-- Top Info Bar -->
  <div class="top-bar">
    <div class="container">
      <div class="top-bar-info">
        <span class="top-bar-item">
          <svg width="14" height="14" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5-2.5z"/></svg>
          Anandpuri Chowk, Harmu, Ranchi, Jharkhand - 834002
        </span>
        <span class="top-bar-item">
          <svg width="14" height="14" fill="currentColor" viewBox="0 0 24 24"><path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/></svg>
          <?php echo SITE_EMAIL; ?>
        </span>
      </div>
    </div>
  </div>

  <!-- Header & Navigation Bar -->
  <header class="site-header">
    <div class="container">
      <nav class="navbar">
        <!-- Logo (Pure Swastik Symbol Image) -->
        <a href="<?php echo SITE_URL; ?>" class="brand-logo" aria-label="Home">
          <img src="<?php echo SITE_URL; ?>assets/images/logo.png" alt="Swastik Logo">
          <div class="brand-text">
            <span class="brand-title">SHREE ASHIRWAD</span>
            <span class="brand-subtitle">PACKERS &amp; MOVERS</span>
          </div>
        </a>

        <!-- Navigation Menu -->
        <ul class="nav-menu" id="navMenu">
          <li><a href="<?php echo SITE_URL; ?>" class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'index.php') ? 'active' : ''; ?>">Home</a></li>
          <li><a href="<?php echo SITE_URL; ?>about" class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'about.php') ? 'active' : ''; ?>">About Us</a></li>
          <li><a href="<?php echo SITE_URL; ?>services" class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'services.php') ? 'active' : ''; ?>">Services</a></li>
          <li><a href="<?php echo SITE_URL; ?>gallery" class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'gallery.php') ? 'active' : ''; ?>">Gallery</a></li>
          <li><a href="<?php echo SITE_URL; ?>contact" class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'contact.php') ? 'active' : ''; ?>">Contact</a></li>
        </ul>

        <!-- Call Button (No 'Call Us Now' text label as requested) -->
        <a href="tel:<?php echo SITE_PHONE_RAW; ?>" class="header-call-btn">
          <div class="call-icon-circle">
            <svg width="18" height="18" fill="currentColor" viewBox="0 0 24 24"><path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/></svg>
          </div>
          <span class="call-number"><?php echo SITE_PHONE; ?></span>
        </a>

        <!-- Mobile Nav Toggle Button -->
        <button class="mobile-nav-toggle" id="mobileNavToggle" aria-label="Toggle navigation">
          &#9776;
        </button>
      </nav>
    </div>
  </header>
