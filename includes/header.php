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
  <link rel="canonical" href="<?php echo SITE_URL; ?>">
  
  <!-- Site Icon (Favicon Swastik) -->
  <link rel="icon" type="image/png" href="assets/images/favicon.png">
  
  <!-- CSS Stylesheet -->
  <link rel="stylesheet" href="assets/css/style.css">

  <!-- Schema.org JSON-LD Structured Data for Local Business SEO -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "MovingCompany",
    "name": "Packers and Movers Ranchi",
    "image": "<?php echo SITE_URL; ?>assets/images/logo.png",
    "telephone": "<?php echo SITE_PHONE_RAW; ?>",
    "email": "<?php echo SITE_EMAIL; ?>",
    "url": "<?php echo SITE_URL; ?>",
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
      "latitude": 23.3600,
      "longitude": 85.3100
    },
    "areaServed": ["Ranchi", "Bokaro", "Jharkhand"]
  }
  </script>
</head>
<body>

  <!-- Top Info Bar -->
  <div class="top-bar">
    <div class="container">
      <div class="top-bar-info">
        <span class="top-bar-item">
          <svg width="14" height="14" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg>
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
        <a href="./" class="brand-logo" aria-label="Home">
          <img src="assets/images/logo.png" alt="Swastik Logo">
          <div class="brand-text">
            <span class="brand-title">SHREE ASHIRWAD</span>
            <span class="brand-subtitle">PACKERS &amp; MOVERS</span>
          </div>
        </a>

        <!-- Navigation Menu -->
        <ul class="nav-menu" id="navMenu">
          <li><a href="./" class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'index.php') ? 'active' : ''; ?>">Home</a></li>
          <li><a href="about.php" class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'about.php') ? 'active' : ''; ?>">About Us</a></li>
          <li><a href="gallery.php" class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'gallery.php') ? 'active' : ''; ?>">Gallery</a></li>
          <li><a href="contact.php" class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'contact.php') ? 'active' : ''; ?>">Contact</a></li>
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
