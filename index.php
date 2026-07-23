<?php
require_once __DIR__ . '/includes/config.php';

$page_title = "Packers and Movers in Ranchi | 8409531615";
$page_desc = "Looking for top-rated Packers and Movers in Ranchi? Get safe household shifting, office relocation, bike & car transport services with 100% damage-free delivery.";
$page_keywords = DEFAULT_KEYWORDS;

require_once __DIR__ . '/includes/header.php';
?>

<!-- Homepage Main Container -->
<main class="site-main">

  <!-- ==========================================================================
       SECTION 1: HERO SECTION (Swastik Red & Yellow Theme)
       Target Keyword in H1: Packers and Movers in Ranchi
       ========================================================================== -->
  <section class="hero-section">
    <div class="container">
      <div class="hero-grid">
        
        <!-- Left Column: Branding, Keyword H1 & CTAs -->
        <div class="hero-content">
          <div class="hero-badge">
            <svg width="14" height="14" fill="currentColor" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
            #1 Rated Relocation Service in Jharkhand
          </div>

          <!-- Mandatory Target Keyword H1: Packers and Movers in Ranchi -->
          <h1 class="hero-title">
            Professional <span class="text-gradient">Packers and Movers in Ranchi</span>
          </h1>

          <p class="hero-description">
            Get 100% safe, reliable, and hassle-free household shifting, office relocation, and vehicle transportation. Guaranteed damage-free packing with prompt delivery in Ranchi.
          </p>

          <!-- Feature Chips -->
          <div class="hero-features">
            <div class="feature-pill gold">
              <svg width="16" height="16" fill="currentColor" viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>
              100% Safe Packing
            </div>
            <div class="feature-pill red">
              <svg width="16" height="16" fill="currentColor" viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>
              Best Price Guarantee
            </div>
            <div class="feature-pill gold">
              <svg width="16" height="16" fill="currentColor" viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>
              24/7 Live Support
            </div>
          </div>

          <!-- Hero CTA Group -->
          <div class="hero-cta-group">
            <a href="tel:<?php echo SITE_PHONE_RAW; ?>" class="btn btn-primary">
              <svg width="18" height="18" fill="currentColor" viewBox="0 0 24 24"><path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/></svg>
              Call <?php echo SITE_PHONE; ?>
            </a>
            <a href="contact.php" class="btn btn-outline-gold">
              Get Shifting Estimate
            </a>
          </div>
        </div>

        <!-- Right Column: Quick Quote Form Card with Direct WhatsApp Lead Redirection -->
        <div class="hero-card-wrapper" id="quickQuote">
          <div class="hero-card">
            <h2 class="card-title">Get Shifting Quote</h2>
            <p class="card-subtitle">Get instant relocation price calculation in Ranchi</p>
            
            <form action="#" method="POST" onsubmit="sendWhatsAppLead(event, this);">
              <div class="form-group">
                <label for="userName" class="form-label">Your Name</label>
                <input type="text" id="userName" name="name" class="form-control" placeholder="Enter full name" required>
              </div>

              <div class="form-group">
                <label for="userPhone" class="form-label">Mobile Number</label>
                <input type="tel" id="userPhone" name="phone" class="form-control" placeholder="Enter 10-digit mobile number" required>
              </div>

              <div class="form-group">
                <label for="moveFrom" class="form-label">Moving From</label>
                <input type="text" id="moveFrom" name="move_from" class="form-control" placeholder="e.g. Ranchi" value="Ranchi" required>
              </div>

              <div class="form-group">
                <label for="moveTo" class="form-label">Moving To</label>
                <input type="text" id="moveTo" name="move_to" class="form-control" placeholder="Destination city" required>
              </div>

              <button type="submit" class="btn btn-primary" style="width: 100%; margin-top: 6px;">
                Request Instant Quote
              </button>
            </form>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- ==========================================================================
       SECTION 2: TRUSTED BY & ACHIEVEMENT STATS COUNTER
       Keyword Integration: packers and movers in ranchi
       ========================================================================== -->
  <section class="stats-section" id="stats">
    <div class="container">
      
      <!-- Section Header with SEO Copy -->
      <div class="section-header text-center">
        <span class="section-tag">Trusted Relocation Track Record</span>
        <h2 class="section-title">
          Jharkhand's Most Dependable <span class="text-gradient">Packers and Movers in Ranchi</span>
        </h2>
        <p class="section-description">
          With over a decade of domain excellence, Shree Ashirwad has established itself as the top choice for household relocation, commercial office shifting, and vehicle transport. As trusted <strong>packers and movers in ranchi</strong>, we prioritize the safety of your valuable belongings using high-grade multi-layer packing materials and dedicated container trucks.
        </p>
      </div>

      <!-- Stats Counters Grid -->
      <div class="stats-grid">
        
        <div class="stat-card">
          <div class="stat-icon">
            <svg width="28" height="28" fill="currentColor" viewBox="0 0 24 24"><path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 16H5V5h14v14zM7 10h2v7H7zm4-3h2v10h-2zm4 6h2v4h-2z"/></svg>
          </div>
          <div class="stat-number">10,000+</div>
          <div class="stat-label">Successful Moves</div>
          <p class="stat-desc">Completed household & office shifting projects across Ranchi & Jharkhand.</p>
        </div>

        <div class="stat-card">
          <div class="stat-icon">
            <svg width="28" height="28" fill="currentColor" viewBox="0 0 24 24"><path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/></svg>
          </div>
          <div class="stat-number">5,000+</div>
          <div class="stat-label">Happy Clients</div>
          <p class="stat-desc">Satisfied families and businesses who trust our <strong>packers and movers in ranchi</strong>.</p>
        </div>

        <div class="stat-card">
          <div class="stat-icon">
            <svg width="28" height="28" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg>
          </div>
          <div class="stat-number">100+</div>
          <div class="stat-label">Cities Connected</div>
          <p class="stat-desc">Seamless intercity relocation network linking Ranchi to major Indian metro cities.</p>
        </div>

        <div class="stat-card">
          <div class="stat-icon">
            <svg width="28" height="28" fill="currentColor" viewBox="0 0 24 24"><path d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zm4.24 16L12 15.45 7.77 18l1.12-4.81-3.73-3.23 4.92-.42L12 5l1.92 4.53 4.92.42-3.73 3.23L16.23 18z"/></svg>
          </div>
          <div class="stat-number">24/7</div>
          <div class="stat-label">Live Support</div>
          <p class="stat-desc">Round-the-clock dedicated assistance from experienced <strong>packers and movers in ranchi</strong>.</p>
        </div>

      </div>

      <!-- Trust Highlight Banner -->
      <div class="trust-highlight-box">
        <div class="trust-highlight-content">
          <h3>Why Are We Ranked Among the Top Packers and Movers in Ranchi?</h3>
          <p>
            Relocating your home or office doesn't have to be stressful. Our professional team handles every aspect of your move — from premium bubble-wrap packing and heavy furniture dismantling to safe container transport and unloading at your destination. When you choose our verified <strong>packers and movers in ranchi</strong>, you get 100% damage-free assurance, transparent billing, and zero hidden charges.
          </p>
        </div>
        <div class="trust-highlight-cta">
          <a href="tel:<?php echo SITE_PHONE_RAW; ?>" class="btn btn-primary">
            Call <?php echo SITE_PHONE; ?>
          </a>
        </div>
      </div>

    </div>
  </section>

  <!-- ==========================================================================
       SECTION 3: REAL SHIFTING GALLERY (WebP Image Scroll)
       Keyword Integration: packers and movers in ranchi
       ========================================================================== -->
  <section class="home-gallery-section" id="gallery">
    <div class="container">
      
      <!-- Section Header -->
      <div class="section-header text-center">
        <span class="section-tag">Real Shifting Showcase</span>
        <h2 class="section-title">
          Live Work Gallery of Top <span class="text-gradient">Packers and Movers in Ranchi</span>
        </h2>
        <p class="section-description">
          Browse authentic photos of our professional team in action across Ranchi. From heavy-duty 7-layer household packaging to GPS container truck loading, see how our verified <strong>packers and movers in ranchi</strong> deliver 100% damage-free shifting.
        </p>
      </div>

      <!-- Horizontal Image Scroll Track (Uniform Card Box Size) -->
      <div class="gallery-scroll-container">
        <div class="gallery-scroll-track">
          
          <div class="gallery-photo-card">
            <div class="photo-box">
              <img src="assets/images/gallery/gallery-1.webp" alt="Packers and Movers in Ranchi Household Shifting" loading="lazy">
              <div class="photo-overlay">
                <span>Household Packing & Shifting</span>
              </div>
            </div>
          </div>

          <div class="gallery-photo-card">
            <div class="photo-box">
              <img src="assets/images/gallery/gallery-2.webp" alt="Packers and Movers in Ranchi Loading & Unloading" loading="lazy">
              <div class="photo-overlay">
                <span>Heavy Furniture Loading</span>
              </div>
            </div>
          </div>

          <div class="gallery-photo-card">
            <div class="photo-box">
              <img src="assets/images/gallery/gallery-3.webp" alt="Packers and Movers in Ranchi Transport Truck" loading="lazy">
              <div class="photo-overlay">
                <span>Enclosed Container Transport</span>
              </div>
            </div>
          </div>

          <div class="gallery-photo-card">
            <div class="photo-box">
              <img src="assets/images/gallery/gallery-4.webp" alt="Packers and Movers in Ranchi Office Relocation" loading="lazy">
              <div class="photo-overlay">
                <span>Office & Commercial Shifting</span>
              </div>
            </div>
          </div>

          <div class="gallery-photo-card">
            <div class="photo-box">
              <img src="assets/images/gallery/gallery-5.webp" alt="Packers and Movers in Ranchi Vehicle Carrier" loading="lazy">
              <div class="photo-overlay">
                <span>Car & Bike Carrier Transport</span>
              </div>
            </div>
          </div>

          <div class="gallery-photo-card">
            <div class="photo-box">
              <img src="assets/images/gallery/gallery-6.webp" alt="Packers and Movers in Ranchi Unpacking & Placement" loading="lazy">
              <div class="photo-overlay">
                <span>Unpacking & Room Placement</span>
              </div>
            </div>
          </div>

          <div class="gallery-photo-card">
            <div class="photo-box">
              <img src="assets/images/gallery/gallery-7.webp" alt="Packers and Movers in Ranchi Warehouse Logistics" loading="lazy">
              <div class="photo-overlay">
                <span>Warehouse Storage Facilities</span>
              </div>
            </div>
          </div>

        </div>
      </div>

      <!-- Action Button Centered Under Container -->
      <div class="gallery-btn-wrapper">
        <a href="gallery.php" class="btn btn-primary">
          <svg width="18" height="18" fill="currentColor" viewBox="0 0 24 24"><path d="M21 19V5c0-1.1-.9-2-2-2H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2zM8.5 13.5l2.5 3.01L14.5 12l4.5 6H5l3.5-4.5z"/></svg>
          View Full Shifting Photo Gallery
        </a>
      </div>

    </div>
  </section>

  <!-- ==========================================================================
       SECTION 4: COMPREHENSIVE RELOCATION SERVICES
       Keyword Integration: packers and movers in ranchi
       ========================================================================== -->
  <section class="services-section" id="services">
    <div class="container">
      
      <!-- Section Header -->
      <div class="section-header text-center">
        <span class="section-tag">End-to-End Relocation Solutions</span>
        <h2 class="section-title">
          Professional Shifting Services by Top <span class="text-gradient">Packers and Movers in Ranchi</span>
        </h2>
        <p class="section-description">
          Whether you are moving your home within Ranchi or relocating your corporate office to another state, our certified <strong>packers and movers in ranchi</strong> deliver seamless, stress-free shifting backed by 100% damage-proof packaging and trained logistics personnel.
        </p>
      </div>

      <!-- Services Grid -->
      <div class="services-grid">
        
        <!-- Service 1: Household Shifting -->
        <div class="service-card">
          <div class="service-icon-box">
            <svg width="28" height="28" fill="currentColor" viewBox="0 0 24 24"><path d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z"/></svg>
          </div>
          <h3 class="service-title">Household Goods Shifting</h3>
          <p class="service-desc">
            Complete home relocation services across Ranchi. Our expert <strong>packers and movers in ranchi</strong> disassemble heavy beds, pack kitchen glassware safely in sturdy boxes, wrap sofas in bubble film, and transport everything securely.
          </p>
          <ul class="service-features-list">
            <li><svg width="16" height="16" fill="currentColor" viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg> Multi-layer bubble wrapping & foam sheets</li>
            <li><svg width="16" height="16" fill="currentColor" viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg> Furniture disassembly & re-assembly</li>
            <li><svg width="16" height="16" fill="currentColor" viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg> Dedicated enclosed shifting vehicles</li>
          </ul>
          <div class="service-card-footer">
            <a href="contact.php" class="btn btn-outline-gold" style="width: 100%; text-align: center;">Book Home Shifting</a>
          </div>
        </div>

        <!-- Service 2: Office Relocation -->
        <div class="service-card">
          <div class="service-icon-box">
            <svg width="28" height="28" fill="currentColor" viewBox="0 0 24 24"><path d="M12 7V3H2v18h20V7H12zM6 19H4v-2h2v2zm0-4H4v-2h2v2zm0-4H4V9h2v2zm0-4H4V5h2v2zm4 12H8v-2h2v2zm0-4H8v-2h2v2zm0-4H8V9h2v2zm0-4H8V5h2v2zm10 12h-8v-2h2v-2h-2v-2h2v-2h-2V9h8v10zm-2-8h-2v2h2v-2zm0 4h-2v2h2v-2z"/></svg>
          </div>
          <h3 class="service-title">Office & Commercial Shifting</h3>
          <p class="service-desc">
            Fast, zero-downtime corporate relocation for companies in Ranchi. As leading <strong>packers and movers in ranchi</strong>, we safely relocate IT servers, office desks, confidential files, and conference electronics on weekends or off-peak hours.
          </p>
          <ul class="service-features-list">
            <li><svg width="16" height="16" fill="currentColor" viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg> Tagged box labeling & file inventory</li>
            <li><svg width="16" height="16" fill="currentColor" viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg> Anti-static packing for IT hardware</li>
            <li><svg width="16" height="16" fill="currentColor" viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg> Weekend & overnight shifting execution</li>
          </ul>
          <div class="service-card-footer">
            <a href="contact.php" class="btn btn-outline-gold" style="width: 100%; text-align: center;">Book Office Shifting</a>
          </div>
        </div>

        <!-- Service 3: Vehicle Transport -->
        <div class="service-card">
          <div class="service-icon-box">
            <svg width="28" height="28" fill="currentColor" viewBox="0 0 24 24"><path d="M18.92 6.01C18.72 5.42 18.16 5 17.5 5h-11c-.66 0-1.21.42-1.42 1.01L3 12v8c0 .55.45 1 1 1h1c.55 0 1-.45 1-1v-1h12v1c0 .55.45 1 1 1h1c.55 0 1-.45 1-1v-8l-2.08-5.99zM6.5 16c-.83 0-1.5-.67-1.5-1.5S5.67 13 6.5 13s1.5.67 1.5 1.5S7.33 16 6.5 16zm11 0c-.83 0-1.5-.67-1.5-1.5s.67-1.5 1.5-1.5 1.5.67 1.5 1.5-.67 1.5-1.5 1.5zM5 11l1.5-4.5h11L19 11H5z"/></svg>
          </div>
          <h3 class="service-title">Car & Bike Transportation</h3>
          <p class="service-desc">
            Safe vehicle carrier services connecting Ranchi to anywhere in India. Our experienced <strong>packers and movers in ranchi</strong> use hydraulic enclosed car trailers and specialized wheel-lock bike containers.
          </p>
          <ul class="service-features-list">
            <li><svg width="16" height="16" fill="currentColor" viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg> Covered hydraulic car container trailers</li>
            <li><svg width="16" height="16" fill="currentColor" viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg> Scratch-free bike foam wrapping & belt locking</li>
            <li><svg width="16" height="16" fill="currentColor" viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg> Doorstep vehicle pickup & delivery</li>
          </ul>
          <div class="service-card-footer">
            <a href="contact.php" class="btn btn-outline-gold" style="width: 100%; text-align: center;">Book Vehicle Transport</a>
          </div>
        </div>

        <!-- Service 4: Packing & Unpacking -->
        <div class="service-card">
          <div class="service-icon-box">
            <svg width="28" height="28" fill="currentColor" viewBox="0 0 24 24"><path d="M20 6h-4V4c0-1.11-.89-2-2-2h-4c-1.11 0-2 .89-2 2v2H4c-1.11 0-1.99.89-1.99 2L2 19c0 1.11.89 2 2 2h16c1.11 0 2-.89 2-2V8c0-1.11-.89-2-2-2zm-6 0h-4V4h4v2z"/></svg>
          </div>
          <h3 class="service-title">Packing & Unpacking Services</h3>
          <p class="service-desc">
            Professional packing and unboxing help in Ranchi. Relying on premium materials like heavy-duty cartons, stretch wrap, and wooden crates, our <strong>packers and movers in ranchi</strong> safeguard fragile goods completely.
          </p>
          <ul class="service-features-list">
            <li><svg width="16" height="16" fill="currentColor" viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg> Custom wooden crating for TV & artwork</li>
            <li><svg width="16" height="16" fill="currentColor" viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg> High-density corrugated boxes & tape</li>
            <li><svg width="16" height="16" fill="currentColor" viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg> Post-shifting unpacking & placement support</li>
          </ul>
          <div class="service-card-footer">
            <a href="contact.php" class="btn btn-outline-gold" style="width: 100%; text-align: center;">Book Packing Service</a>
          </div>
        </div>

        <!-- Service 5: Warehouse Storage -->
        <div class="service-card">
          <div class="service-icon-box">
            <svg width="28" height="28" fill="currentColor" viewBox="0 0 24 24"><path d="M12 3L2 12h3v8h14v-8h3L12 3zm0 4.5l5 4.5v6H7v-6l5-4.5z"/></svg>
          </div>
          <h3 class="service-title">Warehouse & Goods Storage</h3>
          <p class="service-desc">
            Secure short-term and long-term storage units in Ranchi. Our <strong>packers and movers in ranchi</strong> offer CCTV-monitored, pest-controlled, and fire-safe warehouse facilities for your household goods and commercial stock.
          </p>
          <ul class="service-features-list">
            <li><svg width="16" height="16" fill="currentColor" viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg> 24/7 CCTV surveillance & security guards</li>
            <li><svg width="16" height="16" fill="currentColor" viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg> Moisture-proof & pest-controlled storage</li>
            <li><svg width="16" height="16" fill="currentColor" viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg> Flexible daily, weekly, or monthly plans</li>
          </ul>
          <div class="service-card-footer">
            <a href="contact.php" class="btn btn-outline-gold" style="width: 100%; text-align: center;">Book Storage Space</a>
          </div>
        </div>

        <!-- Service 6: Intercity Relocation -->
        <div class="service-card">
          <div class="service-icon-box">
            <svg width="28" height="28" fill="currentColor" viewBox="0 0 24 24"><path d="M20 8h-3V4H3c-1.1 0-2 .9-2 2v11h2c0 1.66 1.34 3 3 3s3-1.34 3-3h6c0 1.66 1.34 3 3 3s3-1.34 3-3h2v-5l-3-4zM6 18.5c-.83 0-1.5-.67-1.5-1.5s.67-1.5 1.5-1.5 1.5.67 1.5 1.5-.67 1.5-1.5 1.5zm13.5-9l1.96 2.5H17V9.5h2.5zm-1 9c-.83 0-1.5-.67-1.5-1.5s.67-1.5 1.5-1.5 1.5.67 1.5 1.5-.67 1.5-1.5 1.5z"/></svg>
          </div>
          <h3 class="service-title">Intercity & Domestic Shifting</h3>
          <p class="service-desc">
            Smooth intercity shifting from Ranchi to Kolkata, Delhi, Patna, Bangalore, Mumbai, and all major cities. As experienced <strong>packers and movers in ranchi</strong>, we provide transit insurance and GPS vehicle tracking.
          </p>
          <ul class="service-features-list">
            <li><svg width="16" height="16" fill="currentColor" viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg> Pan-India intercity transport network</li>
            <li><svg width="16" height="16" fill="currentColor" viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg> Full transit insurance policy coverage</li>
            <li><svg width="16" height="16" fill="currentColor" viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg> Real-time GPS location updates</li>
          </ul>
          <div class="service-card-footer">
            <a href="contact.php" class="btn btn-outline-gold" style="width: 100%; text-align: center;">Book Intercity Shifting</a>
          </div>
        </div>

      </div>

    </div>
  </section>

  <!-- ==========================================================================
       SECTION 5: WHY CHOOSE US / VALUE PROPOSITION
       Keyword Integration: packers and movers in ranchi
       ========================================================================== -->
  <section class="why-choose-section" id="why-choose-us">
    <div class="container">
      
      <!-- Section Header -->
      <div class="section-header text-center">
        <span class="section-tag">Unmatched Quality & Trust</span>
        <h2 class="section-title">
          Why We Are the Most Preferred <span class="text-gradient">Packers and Movers in Ranchi</span>
        </h2>
        <p class="section-description">
          Selecting reliable <strong>packers and movers in ranchi</strong> shouldn't involve guesswork. At Shree Ashirwad, we combine licensed operational standards, transparent billing practices, and state-of-the-art vehicle tracking to guarantee 100% peace of mind during your relocation.
        </p>
      </div>

      <!-- Why Choose Grid -->
      <div class="why-grid">
        
        <div class="why-card">
          <div class="why-icon-box">
            <svg width="26" height="26" fill="currentColor" viewBox="0 0 24 24"><path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-5.45 9-12V5l-9-4zm-2 16l-4-4 1.41-1.41L10 14.17l6.59-6.59L18 9l-8 8z"/></svg>
          </div>
          <h3 class="why-title">Govt. Registered & IBA Approved</h3>
          <p class="why-desc">
            We are fully licensed, GST-compliant <strong>packers and movers in ranchi</strong> providing valid IBA-approved bills for easy corporate or bank claim reimbursements.
          </p>
        </div>

        <div class="why-card">
          <div class="why-icon-box">
            <svg width="26" height="26" fill="currentColor" viewBox="0 0 24 24"><path d="M11.8 10.9c-2.27-.59-3-1.2-3-2.15 0-1.09 1.01-1.85 2.7-1.85 1.78 0 2.44.85 2.5 2.1h2.21c-.07-1.72-1.12-3.3-3.21-3.81V3h-3v2.16c-1.94.42-3.5 1.68-3.5 3.61 0 2.31 1.91 3.46 4.7 4.13 2.5.6 3 1.48 3 2.41 0 .69-.49 1.79-2.7 1.79-2.06 0-2.87-.92-2.98-2.1h-2.2c.12 2.19 1.76 3.42 3.68 3.83V21h3v-2.15c1.95-.37 3.5-1.5 3.5-3.55 0-2.84-2.43-3.81-4.7-4.4z"/></svg>
          </div>
          <h3 class="why-title">Transparent & Honest Pricing</h3>
          <p class="why-desc">
            No hidden fees, surprise taxes, or moving-day price jumps. When you hire our <strong>packers and movers in ranchi</strong>, the quoted estimate remains fixed and transparent.
          </p>
        </div>

        <div class="why-card">
          <div class="why-icon-box">
            <svg width="26" height="26" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg>
          </div>
          <h3 class="why-title">Real-Time GPS Tracking</h3>
          <p class="why-desc">
            Track your shifting container truck live via satellite GPS. Our <strong>packers and movers in ranchi</strong> ensure you know your vehicle location every minute of the journey.
          </p>
        </div>

        <div class="why-card">
          <div class="why-icon-box">
            <svg width="26" height="26" fill="currentColor" viewBox="0 0 24 24"><path d="M20 6h-4V4c0-1.11-.89-2-2-2h-4c-1.11 0-2 .89-2 2v2H4c-1.11 0-1.99.89-1.99 2L2 19c0 1.11.89 2 2 2h16c1.11 0 2-.89 2-2V8c0-1.11-.89-2-2-2zm-6 0h-4V4h4v2z"/></svg>
          </div>
          <h3 class="why-title">Multi-Layer Safe Packing</h3>
          <p class="why-desc">
            Using heavy-duty bubble wraps, corrugated sheets, stretch films, and corner guards, our <strong>packers and movers in ranchi</strong> guarantee 100% damage-free delivery.
          </p>
        </div>

        <div class="why-card">
          <div class="why-icon-box">
            <svg width="26" height="26" fill="currentColor" viewBox="0 0 24 24"><path d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8zm.5-13H11v6l5.25 3.15.75-1.23-4.5-2.67z"/></svg>
          </div>
          <h3 class="why-title">Guaranteed On-Time Delivery</h3>
          <p class="why-desc">
            We value your time. As punctual <strong>packers and movers in ranchi</strong>, our logistics team strictly meets all pickup times and promised delivery windows without delay.
          </p>
        </div>

        <div class="why-card">
          <div class="why-icon-box">
            <svg width="26" height="26" fill="currentColor" viewBox="0 0 24 24"><path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-2 10h-4v4h-2v-4H7v-2h4V7h2v4h4v2z"/></svg>
          </div>
          <h3 class="why-title">Full Transit Insurance Protection</h3>
          <p class="why-desc">
            For maximum financial security, our <strong>packers and movers in ranchi</strong> provide complete transit insurance policies to cover unforeseen transit risks.
          </p>
        </div>

      </div>

    </div>
  </section>

  <!-- ==========================================================================
       SECTION 5: 4-STEP SIMPLE RELOCATION PROCESS
       Keyword Integration: packers and movers in ranchi
       ========================================================================== -->
  <section class="process-section" id="how-it-works">
    <div class="container">
      
      <!-- Section Header -->
      <div class="section-header text-center">
        <span class="section-tag">Simple & Hassle-Free Journey</span>
        <h2 class="section-title">
          How Shifting Works with Top <span class="text-gradient">Packers and Movers in Ranchi</span>
        </h2>
        <p class="section-description">
          Relocating with Shree Ashirwad is fast and straightforward. Follow our simple 4-step moving timeline designed by expert <strong>packers and movers in ranchi</strong> to ensure an effortless shifting experience from pickup to final unboxing.
        </p>
      </div>

      <!-- Process Steps Grid -->
      <div class="process-grid">
        
        <!-- Step 1 -->
        <div class="process-card">
          <div class="step-number-badge">01</div>
          <div class="process-icon-box">
            <svg width="26" height="26" fill="currentColor" viewBox="0 0 24 24"><path d="M19 3h-4.18C14.4 1.84 13.3 1 12 1c-1.3 0-2.4.84-2.82 2H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-7 0c.55 0 1 .45 1 1s-.45 1-1 1-1-.45-1-1 .45-1 1-1zm2 14H7v-2h7v2zm3-4H7v-2h10v2zm0-4H7V7h10v2z"/></svg>
          </div>
          <h3 class="process-title">Book & Get Instant Estimate</h3>
          <p class="process-desc">
            Submit your moving details via website form or WhatsApp call. Our team of <strong>packers and movers in ranchi</strong> calculates a clear, transparent shifting estimate right away.
          </p>
        </div>

        <!-- Step 2 -->
        <div class="process-card">
          <div class="step-number-badge">02</div>
          <div class="process-icon-box">
            <svg width="26" height="26" fill="currentColor" viewBox="0 0 24 24"><path d="M20 6h-4V4c0-1.11-.89-2-2-2h-4c-1.11 0-2 .89-2 2v2H4c-1.11 0-1.99.89-1.99 2L2 19c0 1.11.89 2 2 2h16c1.11 0 2-.89 2-2V8c0-1.11-.89-2-2-2zm-6 0h-4V4h4v2z"/></svg>
          </div>
          <h3 class="process-title">Multi-Layer Safe Packing</h3>
          <p class="process-desc">
            On moving day, our professional packing crew arrives with premium bubble wrap, corrugated boxes, and foam sheets to protect all household items carefully.
          </p>
        </div>

        <!-- Step 3 -->
        <div class="process-card">
          <div class="step-number-badge">03</div>
          <div class="process-icon-box">
            <svg width="26" height="26" fill="currentColor" viewBox="0 0 24 24"><path d="M20 8h-3V4H3c-1.1 0-2 .9-2 2v11h2c0 1.66 1.34 3 3 3s3-1.34 3-3h6c0 1.66 1.34 3 3 3s3-1.34 3-3h2v-5l-3-4zM6 18.5c-.83 0-1.5-.67-1.5-1.5s.67-1.5 1.5-1.5 1.5.67 1.5 1.5-.67 1.5-1.5 1.5zm13.5-9l1.96 2.5H17V9.5h2.5zm-1 9c-.83 0-1.5-.67-1.5-1.5s.67-1.5 1.5-1.5 1.5.67 1.5 1.5-.67 1.5-1.5 1.5z"/></svg>
          </div>
          <h3 class="process-title">Safe Loading & Transit</h3>
          <p class="process-desc">
            Packed goods are loaded securely into enclosed container trucks. As trusted <strong>packers and movers in ranchi</strong>, we track vehicle transit via live satellite GPS.
          </p>
        </div>

        <!-- Step 4 -->
        <div class="process-card">
          <div class="step-number-badge">04</div>
          <div class="process-icon-box">
            <svg width="26" height="26" fill="currentColor" viewBox="0 0 24 24"><path d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z"/></svg>
          </div>
          <h3 class="process-title">Unloading & Final Setup</h3>
          <p class="process-desc">
            At your destination, our staff unloads, unboxes, and reassembles furniture in your designated rooms to complete a 100% successful move.
          </p>
        </div>

      </div>

    </div>
  </section>

  <!-- ==========================================================================
       SECTION 6: PRICING ESTIMATE BREAKDOWN & FACTORS
       Keyword Integration: packers and movers in ranchi
       Note: Pricing factors only, zero numeric price amounts per project rule
       ========================================================================== -->
  <section class="pricing-section" id="pricing-breakdown">
    <div class="container">
      
      <!-- Section Header -->
      <div class="section-header text-center">
        <span class="section-tag">Transparent Billing & Cost Factors</span>
        <h2 class="section-title">
          Understanding Relocation Costs with <span class="text-gradient">Packers and Movers in Ranchi</span>
        </h2>
        <p class="section-description">
          We believe in complete financial transparency with zero hidden charges. Relocation rates depend on key logistical variables. Learn how our certified <strong>packers and movers in ranchi</strong> calculate fair, budget-friendly shifting estimates customized for your move.
        </p>
      </div>

      <!-- Cost Factor Cards Grid -->
      <div class="pricing-factors-grid">
        
        <div class="pricing-card">
          <div class="pricing-icon-box">
            <svg width="26" height="26" fill="currentColor" viewBox="0 0 24 24"><path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-2 10h-4v4h-2v-4H7v-2h4V7h2v4h4v2z"/></svg>
          </div>
          <h3 class="pricing-card-title">Volume of Household Goods</h3>
          <p class="pricing-card-desc">
            The overall size of your move (1 BHK, 2 BHK, 3 BHK, or villa) determines the size of the container truck required, volume of bubble film, and number of handling staff deployed by our <strong>packers and movers in ranchi</strong>.
          </p>
        </div>

        <div class="pricing-card">
          <div class="pricing-icon-box">
            <svg width="26" height="26" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg>
          </div>
          <h3 class="pricing-card-title">Relocation Distance</h3>
          <p class="pricing-card-desc">
            Local shifting within Ranchi locality areas involves lower fuel costs compared to intercity moving across state borders, which includes highway toll taxes, state permits, and transit time considerations.
          </p>
        </div>

        <div class="pricing-card">
          <div class="pricing-icon-box">
            <svg width="26" height="26" fill="currentColor" viewBox="0 0 24 24"><path d="M20 6h-4V4c0-1.11-.89-2-2-2h-4c-1.11 0-2 .89-2 2v2H4c-1.11 0-1.99.89-1.99 2L2 19c0 1.11.89 2 2 2h16c1.11 0 2-.89 2-2V8c0-1.11-.89-2-2-2zm-6 0h-4V4h4v2z"/></svg>
          </div>
          <h3 class="pricing-card-title">Packing Grade & Custom Crating</h3>
          <p class="pricing-card-desc">
            Standard multi-layer packing vs premium wooden crating for delicate items like glass dining tables, LED TVs, and antique artwork is factored into the customized quotation by our <strong>packers and movers in ranchi</strong>.
          </p>
        </div>

        <div class="pricing-card">
          <div class="pricing-icon-box">
            <svg width="26" height="26" fill="currentColor" viewBox="0 0 24 24"><path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 16H5V5h14v14zM7 10h2v7H7zm4-3h2v10h-2zm4 6h2v4h-2z"/></svg>
          </div>
          <h3 class="pricing-card-title">Floor Level & Elevator Access</h3>
          <p class="pricing-card-desc">
            Moving items from high-rise apartments without elevators requires extra manpower and manual carrying up flights of stairs, which is accounted for in your customized shifting quote.
          </p>
        </div>

      </div>

      <!-- Pricing Guarantee & Transparency Box -->
      <div class="pricing-guarantee-box">
        <div class="pricing-guarantee-content">
          <h3>100% Fixed Price Guarantee & Transparent Quotations</h3>
          <p>
            Unlike unverified local vendors who demand unexpected extra fees on moving day, our professional <strong>packers and movers in ranchi</strong> deliver itemized, written quotes before starting work. Every estimate includes loading, unloading, packing materials, transit insurance options, and GST billing.
          </p>
          <ul class="pricing-highlights-list">
            <li><svg width="18" height="18" fill="currentColor" viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg> Written contract with zero hidden charges</li>
            <li><svg width="18" height="18" fill="currentColor" viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg> Free pre-move site survey or virtual consultation</li>
            <li><svg width="18" height="18" fill="currentColor" viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg> IBA-approved GST invoices for easy claim filing</li>
          </ul>
          <a href="contact.php" class="btn btn-primary">
            Request Custom Price Estimate
          </a>
        </div>
      </div>

    </div>
  </section>

  <!-- ==========================================================================
       SECTION 7: OUR PROCESS GALLERY & OPERATIONAL FLEET
       Keyword Integration: packers and movers in ranchi
       ========================================================================== -->
  <section class="gallery-section" id="gallery">
    <div class="container">
      
      <!-- Section Header -->
      <div class="section-header text-center">
        <span class="section-tag">Operational Excellence</span>
        <h2 class="section-title">
          Our Shifting Process & Logistics Fleet with Top <span class="text-gradient">Packers and Movers in Ranchi</span>
        </h2>
        <p class="section-description">
          Take a look at how our experienced moving crews operate. As leading <strong>packers and movers in ranchi</strong>, we maintain a modern fleet of GPS-equipped covered container trucks, specialized vehicle trailers, and professional packing gear to ensure maximum safety.
        </p>
      </div>

      <!-- Process Gallery Grid -->
      <div class="gallery-grid">
        
        <div class="gallery-card">
          <span class="gallery-badge">Stage 01 • Household Packing</span>
          <div class="gallery-icon-box">
            <svg width="26" height="26" fill="currentColor" viewBox="0 0 24 24"><path d="M20 6h-4V4c0-1.11-.89-2-2-2h-4c-1.11 0-2 .89-2 2v2H4c-1.11 0-1.99.89-1.99 2L2 19c0 1.11.89 2 2 2h16c1.11 0 2-.89 2-2V8c0-1.11-.89-2-2-2zm-6 0h-4V4h4v2z"/></svg>
          </div>
          <h3 class="gallery-title">Multi-Layer Household Wrapping</h3>
          <p class="gallery-desc">
            Our expert <strong>packers and movers in ranchi</strong> wrap sofas, wooden wardrobes, and glass cabinets in multi-layer bubble film, heavy corrugated sheets, and stretch wrap to prevent scratches during transport.
          </p>
        </div>

        <div class="gallery-card">
          <span class="gallery-badge">Stage 02 • Heavy Loading</span>
          <div class="gallery-icon-box">
            <svg width="26" height="26" fill="currentColor" viewBox="0 0 24 24"><path d="M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6v2z"/></svg>
          </div>
          <h3 class="gallery-title">Safe Cargo & Furniture Loading</h3>
          <p class="gallery-desc">
            Trained loaders utilize ramps, sliders, and heavy-duty belts to safely lift double beds, refrigerators, and washing machines into closed trucks without damage.
          </p>
        </div>

        <div class="gallery-card">
          <span class="gallery-badge">Stage 03 • Container Transport</span>
          <div class="gallery-icon-box">
            <svg width="26" height="26" fill="currentColor" viewBox="0 0 24 24"><path d="M20 8h-3V4H3c-1.1 0-2 .9-2 2v11h2c0 1.66 1.34 3 3 3s3-1.34 3-3h6c0 1.66 1.34 3 3 3s3-1.34 3-3h2v-5l-3-4zM6 18.5c-.83 0-1.5-.67-1.5-1.5s.67-1.5 1.5-1.5 1.5.67 1.5 1.5-.67 1.5-1.5 1.5zm13.5-9l1.96 2.5H17V9.5h2.5zm-1 9c-.83 0-1.5-.67-1.5-1.5s.67-1.5 1.5-1.5 1.5.67 1.5 1.5-.67 1.5-1.5 1.5z"/></svg>
          </div>
          <h3 class="gallery-title">Enclosed GPS Shifting Fleet</h3>
          <p class="gallery-desc">
            Weatherproof, fully enclosed container trucks protecting your goods from rain, dust, and transit hazards while being tracked live via satellite GPS by our <strong>packers and movers in ranchi</strong>.
          </p>
        </div>

        <div class="gallery-card">
          <span class="gallery-badge">Stage 04 • Vehicle Transport</span>
          <div class="gallery-icon-box">
            <svg width="26" height="26" fill="currentColor" viewBox="0 0 24 24"><path d="M18.92 6.01C18.72 5.42 18.16 5 17.5 5h-11c-.66 0-1.21.42-1.42 1.01L3 12v8c0 .55.45 1 1 1h1c.55 0 1-.45 1-1v-1h12v1c0 .55.45 1 1 1h1c.55 0 1-.45 1-1v-8l-2.08-5.99zM6.5 16c-.83 0-1.5-.67-1.5-1.5S5.67 13 6.5 13s1.5.67 1.5 1.5S7.33 16 6.5 16zm11 0c-.83 0-1.5-.67-1.5-1.5s.67-1.5 1.5-1.5 1.5.67 1.5 1.5-.67 1.5-1.5 1.5zM5 11l1.5-4.5h11L19 11H5z"/></svg>
          </div>
          <h3 class="gallery-title">Hydraulic Car & Bike Carriers</h3>
          <p class="gallery-desc">
            Dedicated hydraulic car trailers and belt-locked bike containers ensuring scratch-free, zero-mileage transportation connecting Ranchi to any destination in India.
          </p>
        </div>

        <div class="gallery-card">
          <span class="gallery-badge">Stage 05 • Unpacking & Setup</span>
          <div class="gallery-icon-box">
            <svg width="26" height="26" fill="currentColor" viewBox="0 0 24 24"><path d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z"/></svg>
          </div>
          <h3 class="gallery-title">Room-by-Room Setup & Unboxing</h3>
          <p class="gallery-desc">
            Upon arrival, our professional <strong>packers and movers in ranchi</strong> unpack boxes, re-assemble beds and dining tables, and arrange furniture in your designated rooms.
          </p>
        </div>

        <div class="gallery-card">
          <span class="gallery-badge">Stage 06 • Storage Warehouse</span>
          <div class="gallery-icon-box">
            <svg width="26" height="26" fill="currentColor" viewBox="0 0 24 24"><path d="M12 3L2 12h3v8h14v-8h3L12 3zm0 4.5l5 4.5v6H7v-6l5-4.5z"/></svg>
          </div>
          <h3 class="gallery-title">Pest-Controlled Warehouse Storage</h3>
          <p class="gallery-desc">
            Safe short-term and long-term storage facility in Ranchi equipped with 24/7 CCTV surveillance, fire alarms, and moisture-controlled units for your household goods.
          </p>
        </div>

      </div>

    </div>
  </section>

  <!-- ==========================================================================
       SECTION 8: CUSTOMER TESTIMONIALS & REVIEWS
       Keyword Integration: packers and movers in ranchi
       ========================================================================== -->
  <section class="testimonials-section" id="testimonials">
    <div class="container">
      
      <!-- Section Header -->
      <div class="section-header text-center">
        <span class="section-tag">Client Satisfaction & Ratings</span>
        <h2 class="section-title">
          What Clients Say About Top <span class="text-gradient">Packers and Movers in Ranchi</span>
        </h2>
        <p class="section-description">
          Read genuine reviews from homeowners, business executives, and car owners who trusted Shree Ashirwad for their relocation needs. Discover why we maintain a 5-star reputation among <strong>packers and movers in ranchi</strong>.
        </p>
      </div>

      <!-- Testimonials Grid -->
      <div class="testimonials-grid">
        
        <!-- Review 1 -->
        <div class="testimonial-card">
          <div class="testimonial-header">
            <div class="avatar-badge">RS</div>
            <div class="client-meta">
              <h3>Rajesh Sharma</h3>
              <span>Kanke Road, Ranchi • Household Shifting</span>
            </div>
          </div>
          <div class="rating-stars">
            <svg width="18" height="18" fill="currentColor" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
            <svg width="18" height="18" fill="currentColor" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
            <svg width="18" height="18" fill="currentColor" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
            <svg width="18" height="18" fill="currentColor" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
            <svg width="18" height="18" fill="currentColor" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
          </div>
          <p class="testimonial-quote">
            "Relocating our 3 BHK house from Kanke Road to Baryatu was completely seamless. The packing team brought top quality bubble wraps for our glassware and TV. Highly recommended <strong>packers and movers in ranchi</strong>!"
          </p>
        </div>

        <!-- Review 2 -->
        <div class="testimonial-card">
          <div class="testimonial-header">
            <div class="avatar-badge">AR</div>
            <div class="client-meta">
              <h3>Ananya Roy</h3>
              <span>Lalpur, Ranchi • Office Relocation</span>
            </div>
          </div>
          <div class="rating-stars">
            <svg width="18" height="18" fill="currentColor" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
            <svg width="18" height="18" fill="currentColor" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
            <svg width="18" height="18" fill="currentColor" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
            <svg width="18" height="18" fill="currentColor" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
            <svg width="18" height="18" fill="currentColor" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
          </div>
          <p class="testimonial-quote">
            "Shree Ashirwad shifted our software company setup over a single Sunday. All IT servers, monitors, and ergonomic chairs were transported safely with zero downtime. Truly top-tier <strong>packers and movers in ranchi</strong>."
          </p>
        </div>

        <!-- Review 3 -->
        <div class="testimonial-card">
          <div class="testimonial-header">
            <div class="avatar-badge">VS</div>
            <div class="client-meta">
              <h3>Vikram Kumar Singh</h3>
              <span>Harmu, Ranchi • Vehicle Transport</span>
            </div>
          </div>
          <div class="rating-stars">
            <svg width="18" height="18" fill="currentColor" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
            <svg width="18" height="18" fill="currentColor" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
            <svg width="18" height="18" fill="currentColor" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
            <svg width="18" height="18" fill="currentColor" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
            <svg width="18" height="18" fill="currentColor" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
          </div>
          <p class="testimonial-quote">
            "Transported my Creta SUV and Royal Enfield motorcycle from Ranchi to Bangalore. Received live GPS location updates throughout transit. Zero damage! Best choice among <strong>packers and movers in ranchi</strong>."
          </p>
        </div>

        <!-- Review 4 -->
        <div class="testimonial-card">
          <div class="testimonial-header">
            <div class="avatar-badge">PV</div>
            <div class="client-meta">
              <h3>Pooja Verma</h3>
              <span>Doranda, Ranchi • Intercity Move to Kolkata</span>
            </div>
          </div>
          <div class="rating-stars">
            <svg width="18" height="18" fill="currentColor" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
            <svg width="18" height="18" fill="currentColor" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
            <svg width="18" height="18" fill="currentColor" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
            <svg width="18" height="18" fill="currentColor" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
            <svg width="18" height="18" fill="currentColor" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
          </div>
          <p class="testimonial-quote">
            "Very honest pricing with no hidden charges. They provided a proper IBA-approved GST bill for my company reimbursement. Outstanding service from reliable <strong>packers and movers in ranchi</strong>."
          </p>
        </div>

      </div>

    </div>
  </section>

  <!-- ==========================================================================
       SECTION 9: COVERAGE AREAS & SERVICE MAP NETWORK
       Keyword Integration: packers and movers in ranchi
       ========================================================================== -->
  <section class="coverage-section" id="coverage-areas">
    <div class="container">
      
      <!-- Section Header -->
      <div class="section-header text-center">
        <span class="section-tag">Widespread Network</span>
        <h2 class="section-title">
          Coverage Areas Served by Top <span class="text-gradient">Packers and Movers in Ranchi</span>
        </h2>
        <p class="section-description">
          We operate across every major neighborhood in Ranchi and provide pan-India intercity shifting connections to all major Indian cities. Count on our verified <strong>packers and movers in ranchi</strong> for prompt local and long-distance relocations.
        </p>
      </div>

      <!-- Coverage Network Grid -->
      <div class="coverage-grid">
        
        <!-- Localities in Ranchi -->
        <div class="coverage-card">
          <div class="coverage-card-header">
            <div class="coverage-icon">
              <svg width="24" height="24" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg>
            </div>
            <h3 class="coverage-card-title">Key Localities Covered in Ranchi</h3>
          </div>
          <p style="font-size: 0.88rem; color: #cbd5e1; margin-bottom: 14px; line-height: 1.6;">
            Our local transport fleet and packing teams serve all major residential hubs and commercial sectors across Ranchi city:
          </p>
          <div class="coverage-pills-wrapper">
            <span class="locality-pill"><svg width="14" height="14" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg> Kanke Road</span>
            <span class="locality-pill"><svg width="14" height="14" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg> Lalpur</span>
            <span class="locality-pill"><svg width="14" height="14" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg> Harmu Housing Colony</span>
            <span class="locality-pill"><svg width="14" height="14" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg> Doranda</span>
            <span class="locality-pill"><svg width="14" height="14" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg> Baryatu</span>
            <span class="locality-pill"><svg width="14" height="14" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg> Morabadi</span>
            <span class="locality-pill"><svg width="14" height="14" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg> Ratu Road</span>
            <span class="locality-pill"><svg width="14" height="14" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg> Argora</span>
            <span class="locality-pill"><svg width="14" height="14" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg> Hinoo</span>
            <span class="locality-pill"><svg width="14" height="14" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg> Namkum</span>
            <span class="locality-pill"><svg width="14" height="14" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg> Ashok Nagar</span>
            <span class="locality-pill"><svg width="14" height="14" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg> Tupudana</span>
          </div>
        </div>

        <!-- Major Intercity Routes -->
        <div class="coverage-card">
          <div class="coverage-card-header">
            <div class="coverage-icon">
              <svg width="24" height="24" fill="currentColor" viewBox="0 0 24 24"><path d="M20 8h-3V4H3c-1.1 0-2 .9-2 2v11h2c0 1.66 1.34 3 3 3s3-1.34 3-3h6c0 1.66 1.34 3 3 3s3-1.34 3-3h2v-5l-3-4zM6 18.5c-.83 0-1.5-.67-1.5-1.5s.67-1.5 1.5-1.5 1.5.67 1.5 1.5-.67 1.5-1.5 1.5zm13.5-9l1.96 2.5H17V9.5h2.5zm-1 9c-.83 0-1.5-.67-1.5-1.5s.67-1.5 1.5-1.5 1.5.67 1.5 1.5-.67 1.5-1.5 1.5z"/></svg>
            </div>
            <h3 class="coverage-card-title">Intercity Domestic Routes from Ranchi</h3>
          </div>
          <p style="font-size: 0.88rem; color: #cbd5e1; margin-bottom: 14px; line-height: 1.6;">
            Regular container truck departures connecting Ranchi directly to key metro hubs across India:
          </p>
          <div class="coverage-pills-wrapper">
            <span class="locality-pill"><svg width="14" height="14" fill="currentColor" viewBox="0 0 24 24"><path d="M5 13h11.86l-5.43 5.43 1.42 1.42L21.14 12l-8.29-8.29-1.42 1.42L16.86 11H5v2z"/></svg> Ranchi to Kolkata</span>
            <span class="locality-pill"><svg width="14" height="14" fill="currentColor" viewBox="0 0 24 24"><path d="M5 13h11.86l-5.43 5.43 1.42 1.42L21.14 12l-8.29-8.29-1.42 1.42L16.86 11H5v2z"/></svg> Ranchi to Patna</span>
            <span class="locality-pill"><svg width="14" height="14" fill="currentColor" viewBox="0 0 24 24"><path d="M5 13h11.86l-5.43 5.43 1.42 1.42L21.14 12l-8.29-8.29-1.42 1.42L16.86 11H5v2z"/></svg> Ranchi to Delhi NCR</span>
            <span class="locality-pill"><svg width="14" height="14" fill="currentColor" viewBox="0 0 24 24"><path d="M5 13h11.86l-5.43 5.43 1.42 1.42L21.14 12l-8.29-8.29-1.42 1.42L16.86 11H5v2z"/></svg> Ranchi to Bangalore</span>
            <span class="locality-pill"><svg width="14" height="14" fill="currentColor" viewBox="0 0 24 24"><path d="M5 13h11.86l-5.43 5.43 1.42 1.42L21.14 12l-8.29-8.29-1.42 1.42L16.86 11H5v2z"/></svg> Ranchi to Mumbai</span>
            <span class="locality-pill"><svg width="14" height="14" fill="currentColor" viewBox="0 0 24 24"><path d="M5 13h11.86l-5.43 5.43 1.42 1.42L21.14 12l-8.29-8.29-1.42 1.42L16.86 11H5v2z"/></svg> Ranchi to Hyderabad</span>
            <span class="locality-pill"><svg width="14" height="14" fill="currentColor" viewBox="0 0 24 24"><path d="M5 13h11.86l-5.43 5.43 1.42 1.42L21.14 12l-8.29-8.29-1.42 1.42L16.86 11H5v2z"/></svg> Ranchi to Pune</span>
            <span class="locality-pill"><svg width="14" height="14" fill="currentColor" viewBox="0 0 24 24"><path d="M5 13h11.86l-5.43 5.43 1.42 1.42L21.14 12l-8.29-8.29-1.42 1.42L16.86 11H5v2z"/></svg> Ranchi to Jamshedpur</span>
            <span class="locality-pill"><svg width="14" height="14" fill="currentColor" viewBox="0 0 24 24"><path d="M5 13h11.86l-5.43 5.43 1.42 1.42L21.14 12l-8.29-8.29-1.42 1.42L16.86 11H5v2z"/></svg> Ranchi to Dhanbad</span>
          </div>
        </div>

      </div>

    </div>
  </section>

  <!-- ==========================================================================
       SECTION 10: MOVING TIPS, RELOCATION GUIDES & BLOG
       Keyword Integration: packers and movers in ranchi
       ========================================================================== -->
  <section class="tips-section" id="moving-tips">
    <div class="container">
      
      <!-- Section Header -->
      <div class="section-header text-center">
        <span class="section-tag">Shifting Guide & Expert Advice</span>
        <h2 class="section-title">
          Essential Moving Tips by Top <span class="text-gradient">Packers and Movers in Ranchi</span>
        </h2>
        <p class="section-description">
          Planning your upcoming household or office move? Read expert advice and packing guidelines prepared by experienced <strong>packers and movers in ranchi</strong> to ensure an organized, damage-free shifting journey.
        </p>
      </div>

      <!-- Tips Cards Grid -->
      <div class="tips-grid">
        
        <!-- Tip 1 -->
        <div class="tip-card">
          <div class="tip-tag-row">
            <span class="tip-category">Home Shifting</span>
            <span class="tip-read-time">
              <svg width="14" height="14" fill="currentColor" viewBox="0 0 24 24"><path d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8zm.5-13H11v6l5.25 3.15.75-1.23-4.5-2.67z"/></svg>
              4 Min Read
            </span>
          </div>
          <h3 class="tip-title">How to Prepare Household Items Before Shifting Day</h3>
          <p class="tip-desc">
            Declutter unused items room by room, defrost your refrigerator 24 hours prior, keep essential medical & personal documents in a handbag, and label fragile boxes clearly before your <strong>packers and movers in ranchi</strong> arrive.
          </p>
        </div>

        <!-- Tip 2 -->
        <div class="tip-card">
          <div class="tip-tag-row">
            <span class="tip-category">Safety Advice</span>
            <span class="tip-read-time">
              <svg width="14" height="14" fill="currentColor" viewBox="0 0 24 24"><path d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8zm.5-13H11v6l5.25 3.15.75-1.23-4.5-2.67z"/></svg>
              3 Min Read
            </span>
          </div>
          <h3 class="tip-title">10 Items You Should Never Pack in a Shifting Truck</h3>
          <p class="tip-desc">
            Avoid loading hazardous liquids, gas cylinders, paint thinners, cash, or jewelry into general transit trucks. Professional <strong>packers and movers in ranchi</strong> recommend carrying personal valuables safely in your private vehicle.
          </p>
        </div>

        <!-- Tip 3 -->
        <div class="tip-card">
          <div class="tip-tag-row">
            <span class="tip-category">Verification Checklist</span>
            <span class="tip-read-time">
              <svg width="14" height="14" fill="currentColor" viewBox="0 0 24 24"><path d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8zm.5-13H11v6l5.25 3.15.75-1.23-4.5-2.67z"/></svg>
              5 Min Read
            </span>
          </div>
          <h3 class="tip-title">How to Identify Authentic Registered Packers and Movers in Ranchi</h3>
          <p class="tip-desc">
            Verify official GST registration, IBA approval certificates, physical warehouse office in Ranchi, and demand written contracts to avoid unverified local brokers posing as genuine <strong>packers and movers in ranchi</strong>.
          </p>
        </div>

        <!-- Tip 4 -->
        <div class="tip-card">
          <div class="tip-tag-row">
            <span class="tip-category">Vehicle Shifting</span>
            <span class="tip-read-time">
              <svg width="14" height="14" fill="currentColor" viewBox="0 0 24 24"><path d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8zm.5-13H11v6l5.25 3.15.75-1.23-4.5-2.67z"/></svg>
              4 Min Read
            </span>
          </div>
          <h3 class="tip-title">Car & Bike Shifting Checklist: Preventing Transit Scratches</h3>
          <p class="tip-desc">
            Wash your vehicle to inspect pre-existing scratches, keep fuel tank level low (around 25%), remove personal accessories, and record odometer readings before handing over keys to your <strong>packers and movers in ranchi</strong>.
          </p>
        </div>

      </div>

    </div>
  </section>

  <!-- ==========================================================================
       SECTION 11: FREQUENTLY ASKED QUESTIONS (FAQ) ACCORDION
       Keyword Integration: packers and movers in ranchi
       ========================================================================== -->
  <section class="faq-section" id="faqs">
    <div class="container">
      
      <!-- Section Header -->
      <div class="section-header text-center">
        <span class="section-tag">Got Questions? We Have Answers</span>
        <h2 class="section-title">
          Frequently Asked Questions About <span class="text-gradient">Packers and Movers in Ranchi</span>
        </h2>
        <p class="section-description">
          Find fast, reliable answers to common queries regarding pre-move surveys, packing quality, pricing transparency, and insurance coverage provided by our <strong>packers and movers in ranchi</strong>.
        </p>
      </div>

      <!-- FAQ Accordion List -->
      <div class="faq-grid">
        
        <!-- Q1 -->
        <details class="faq-item" open>
          <summary class="faq-summary">
            <span>How far in advance should I book packers and movers in ranchi?</span>
            <div class="faq-icon-toggle">
              <svg width="16" height="16" fill="currentColor" viewBox="0 0 24 24"><path d="M7.41 8.59L12 13.17l4.59-4.58L18 10l-6 6-6-6 1.41-1.41z"/></svg>
            </div>
          </summary>
          <div class="faq-answer">
            It is recommended to book your move 2 to 4 days prior to your preferred shifting date for local moves in Ranchi. For long-distance intercity relocation from Ranchi to major metro cities, booking 5 to 7 days in advance ensures seamless schedule reservation and container truck allocation by our <strong>packers and movers in ranchi</strong>.
          </div>
        </details>

        <!-- Q2 -->
        <details class="faq-item">
          <summary class="faq-summary">
            <span>How do packers and movers in ranchi ensure safety during rainy season shifting?</span>
            <div class="faq-icon-toggle">
              <svg width="16" height="16" fill="currentColor" viewBox="0 0 24 24"><path d="M7.41 8.59L12 13.17l4.59-4.58L18 10l-6 6-6-6 1.41-1.41z"/></svg>
            </div>
          </summary>
          <div class="faq-answer">
            During monsoon relocations, our professional <strong>packers and movers in ranchi</strong> apply high-density waterproof stretch plastic wraps around cardboard boxes, use heavy-duty tarpaulins, and dispatch 100% weatherproof, fully-enclosed container trucks to guard your goods against rain and moisture.
          </div>
        </details>

        <!-- Q3 -->
        <details class="faq-item">
          <summary class="faq-summary">
            <span>Are there any hidden costs or extra taxes in the shifting quote provided by packers and movers in ranchi?</span>
            <div class="faq-icon-toggle">
              <svg width="16" height="16" fill="currentColor" viewBox="0 0 24 24"><path d="M7.41 8.59L12 13.17l4.59-4.58L18 10l-6 6-6-6 1.41-1.41z"/></svg>
            </div>
          </summary>
          <div class="faq-answer">
            No. At Shree Ashirwad, we provide transparent, all-inclusive quotations covering packing materials, labor, loading, transportation, unloading, and GST taxes. As honest <strong>packers and movers in ranchi</strong>, we guarantee zero hidden charges or moving-day price surprises.
          </div>
        </details>

        <!-- Q4 -->
        <details class="faq-item">
          <summary class="faq-summary">
            <span>Do packers and movers in ranchi provide IBA-approved bills for corporate reimbursement?</span>
            <div class="faq-icon-toggle">
              <svg width="16" height="16" fill="currentColor" viewBox="0 0 24 24"><path d="M7.41 8.59L12 13.17l4.59-4.58L18 10l-6 6-6-6 1.41-1.41z"/></svg>
            </div>
          </summary>
          <div class="faq-answer">
            Yes. We provide official GST invoice documentation, consignment notes (LR copy), itemized packing lists, and valid IBA-approved bills. Bank employees and corporate executives moving to or from Ranchi can claim 100% shifting allowance effortlessly with bills from our <strong>packers and movers in ranchi</strong>.
          </div>
        </details>

        <!-- Q5 -->
        <details class="faq-item">
          <summary class="faq-summary">
            <span>How are fragile items like glassware, LED TVs, and artwork packed by packers and movers in ranchi?</span>
            <div class="faq-icon-toggle">
              <svg width="16" height="16" fill="currentColor" viewBox="0 0 24 24"><path d="M7.41 8.59L12 13.17l4.59-4.58L18 10l-6 6-6-6 1.41-1.41z"/></svg>
            </div>
          </summary>
          <div class="faq-answer">
            Delicate items are protected with multi-layer bubble wrap, foam corner guards, and high-density corrugated sheets. Large flat-screen TVs and antique art pieces are placed in custom-built wooden crates for maximum shock absorption by our expert <strong>packers and movers in ranchi</strong>.
          </div>
        </details>

        <!-- Q6 -->
        <details class="faq-item">
          <summary class="faq-summary">
            <span>Can packers and movers in ranchi transport my car or bike along with household goods?</span>
            <div class="faq-icon-toggle">
              <svg width="16" height="16" fill="currentColor" viewBox="0 0 24 24"><path d="M7.41 8.59L12 13.17l4.59-4.58L18 10l-6 6-6-6 1.41-1.41z"/></svg>
            </div>
          </summary>
          <div class="faq-answer">
            Yes. We offer combined household goods and vehicle transportation services. Motorcycles are secured in dedicated wheel-lock bike containers, while cars are transported in covered hydraulic car trailers by our <strong>packers and movers in ranchi</strong>.
          </div>
        </details>

      </div>

    </div>
  </section>

  <!-- ==========================================================================
       SECTION 12: FINAL CALL-TO-ACTION (CTA) BANNER & CONVERSION BOX
       Keyword Integration: packers and movers in ranchi
       ========================================================================== -->
  <section class="cta-banner-section" id="cta-banner">
    <div class="container">
      
      <div class="cta-banner-card">
        <span class="cta-tag">Ready for a Smooth Move?</span>
        
        <h2 class="cta-title">
          Book Top Rated <span class="text-gradient">Packers and Movers in Ranchi</span> Today!
        </h2>
        
        <p class="cta-description">
          Join 10,000+ satisfied families and corporate clients across Jharkhand. Get 100% safe packing, real-time GPS vehicle tracking, and zero hidden costs with our trusted <strong>packers and movers in ranchi</strong>.
        </p>

        <!-- CTA Action Buttons Group -->
        <div class="cta-buttons-wrapper">
          <a href="tel:<?php echo SITE_PHONE_RAW; ?>" class="btn btn-primary">
            <svg width="18" height="18" fill="currentColor" viewBox="0 0 24 24"><path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/></svg>
            Call <?php echo SITE_PHONE; ?>
          </a>
          
          <a href="https://api.whatsapp.com/send?phone=918409531615&text=Hello%20Shree%20Ashirwad%20Packers%20and%20Movers,%20I%20want%20to%20get%20a%20shifting%20estimate." target="_blank" rel="noopener noreferrer" class="btn-whatsapp-green">
            <svg width="20" height="20" fill="currentColor" viewBox="0 0 24 24"><path d="M12.012 2c-5.506 0-9.989 4.478-9.99 9.984 0 1.763.459 3.486 1.333 5.003L2 22l5.127-1.343c1.464.798 3.111 1.218 4.881 1.218h.004c5.506 0 9.989-4.478 9.99-9.984 0-2.669-1.039-5.176-2.926-7.062A9.925 9.925 0 0012.012 2zm0 18.313h-.003c-1.493 0-2.957-.401-4.233-1.158l-.304-.18-3.146.824.839-3.064-.198-.315A8.307 8.307 0 013.687 11.98c0-4.59 3.733-8.324 8.327-8.324 2.223 0 4.312.866 5.884 2.439a8.275 8.275 0 012.434 5.887c0 4.591-3.733 8.324-8.32 8.324zm4.566-6.236c-.25-.125-1.482-.731-1.712-.814-.23-.083-.397-.125-.564.125-.167.25-.647.814-.793.98-.146.167-.292.188-.542.063a6.852 6.852 0 01-2.016-1.242 7.56 7.56 0 01-1.396-1.738c-.146-.25-.016-.386.109-.51.113-.112.25-.292.375-.438.125-.146.167-.25.25-.417.083-.167.042-.313-.021-.438-.063-.125-.564-1.357-.773-1.859-.203-.489-.41-.422-.564-.43h-.48c-.167 0-.438.063-.668.313-.23.25-.877.857-.877 2.09 0 1.232.898 2.423 1.023 2.59.125.167 1.767 2.7 4.283 3.787.599.259 1.067.414 1.431.53.602.191 1.15.164 1.583.1.483-.071 1.482-.605 1.691-1.189.209-.584.209-1.085.146-1.189-.063-.104-.23-.167-.48-.292z"/></svg>
            Chat on WhatsApp
          </a>

          <a href="contact.php" class="btn btn-outline-gold">
            Get Shifting Estimate
          </a>
        </div>

        <!-- Trust Highlights Row -->
        <div class="cta-trust-highlights">
          <div class="cta-trust-item">
            <svg width="18" height="18" fill="currentColor" viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>
            100% Safe Multi-Layer Packing
          </div>
          <div class="cta-trust-item">
            <svg width="18" height="18" fill="currentColor" viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>
            IBA Approved GST Billing
          </div>
          <div class="cta-trust-item">
            <svg width="18" height="18" fill="currentColor" viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>
            Live Satellite GPS Tracking
          </div>
          <div class="cta-trust-item">
            <svg width="18" height="18" fill="currentColor" viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>
            Guaranteed On-Time Shifting
          </div>
        </div>

      </div>

    </div>
  </section>

</main>

<script>
function sendWhatsAppLead(event, form) {
  event.preventDefault();
  var name = form.querySelector('[name="name"]').value;
  var phone = form.querySelector('[name="phone"]').value;
  var moveFrom = form.querySelector('[name="move_from"]').value;
  var moveTo = form.querySelector('[name="move_to"]').value;
  
  var message = "Hello Shree Ashirwad Packers & Movers,\n\nI would like to request a Shifting Quote:\n- Name: " + name + "\n- Phone: " + phone + "\n- Moving From: " + moveFrom + "\n- Moving To: " + moveTo;
  
  var whatsappUrl = "https://api.whatsapp.com/send?phone=918409531615&text=" + encodeURIComponent(message);
  window.location.href = whatsappUrl;
}
</script>

<?php
require_once __DIR__ . '/includes/footer.php';
?>
