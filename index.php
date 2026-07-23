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
       SECTION 3: COMPREHENSIVE RELOCATION SERVICES
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
       SECTION 4: WHY CHOOSE US / VALUE PROPOSITION
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
