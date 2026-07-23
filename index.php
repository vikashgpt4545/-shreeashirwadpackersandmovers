<?php
require_once __DIR__ . '/includes/config.php';

$page_title = "Packers and Movers in Ranchi | 8409531615";
$page_desc = "Looking for top-rated Packers and Movers in Ranchi? Get safe household shifting, office relocation, bike & car transport services with 100% damage-free delivery.";
$page_keywords = DEFAULT_KEYWORDS;

require_once __DIR__ . '/includes/header.php';
?>

<!-- ==========================================================================
     HERO SECTION ONLY
     Target Keyword in H1: Packers and Movers in Ranchi
     ========================================================================== -->
<section class="hero-section">
  <div class="container">
    <div class="hero-grid">
      
      <!-- Left Column: Main Headline, Features & CTAs -->
      <div class="hero-content">
        <div class="hero-badge">
          <svg width="14" height="14" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2L1 21h22L12 2zm0 3.99L19.53 19H4.47L12 5.99zM11 16h2v2h-2zm0-6h2v4h-2z"/></svg>
          #1 Trusted Moving Company in Jharkhand
        </div>

        <!-- H1 Tag: Must mention Packers and Movers in Ranchi -->
        <h1 class="hero-title">
          Professional <span>Packers and Movers in Ranchi</span>
        </h1>

        <p class="hero-description">
          Experience seamless, stress-free household &amp; office relocation. We ensure 100% safe packing, real-time tracking, and prompt delivery across Ranchi and nationwide.
        </p>

        <!-- Feature Badges -->
        <div class="hero-features">
          <div class="feature-pill">
            <svg width="16" height="16" fill="currentColor" viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>
            Safe &amp; Secure Packing
          </div>
          <div class="feature-pill">
            <svg width="16" height="16" fill="currentColor" viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>
            Affordable Rates
          </div>
          <div class="feature-pill">
            <svg width="16" height="16" fill="currentColor" viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>
            24/7 Support
          </div>
        </div>

        <!-- Hero CTA Buttons -->
        <div class="hero-cta-group">
          <a href="tel:<?php echo SITE_PHONE_RAW; ?>" class="btn btn-primary">
            <svg width="18" height="18" fill="currentColor" viewBox="0 0 24 24"><path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/></svg>
            Call <?php echo SITE_PHONE; ?>
          </a>
          <a href="#quickQuote" class="btn btn-outline">
            Get Free Price Estimate
          </a>
        </div>
      </div>

      <!-- Right Column: Instant Quick Quote Card -->
      <div class="hero-card-wrapper" id="quickQuote">
        <div class="hero-card">
          <h2 class="card-title">Get Free Shifting Quote</h2>
          <p class="card-subtitle">Get instant price estimate for shifting in Ranchi</p>
          
          <form action="#" method="POST" onsubmit="event.preventDefault(); alert('Quote Request Received!');">
            <div class="form-group">
              <label for="userName" class="form-label">Your Name</label>
              <input type="text" id="userName" name="name" class="form-control" placeholder="Enter your full name" required>
            </div>

            <div class="form-group">
              <label for="userPhone" class="form-label">Phone Number</label>
              <input type="tel" id="userPhone" name="phone" class="form-control" placeholder="Enter 10-digit mobile number" required>
            </div>

            <div class="form-group">
              <label for="moveFrom" class="form-label">Moving From</label>
              <input type="text" id="moveFrom" name="move_from" class="form-control" placeholder="e.g. Ranchi" value="Ranchi" required>
            </div>

            <div class="form-group">
              <label for="moveTo" class="form-label">Moving To</label>
              <input type="text" id="moveTo" name="move_to" class="form-control" placeholder="Destination City" required>
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

<?php
require_once __DIR__ . '/includes/footer.php';
?>
