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
