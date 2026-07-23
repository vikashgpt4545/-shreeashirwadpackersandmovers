<?php
require_once __DIR__ . '/config.php';
?>
  <!-- Site Footer -->
  <footer class="site-footer" id="contact">
    <div class="container">
      <div class="footer-grid">
        <!-- Ranchi & Bokaro Office Details (Matching Image Details Exactly) -->
        <div class="footer-col">
          <h3 class="footer-heading">Our Office Locations</h3>
          <div class="footer-address-list">
            <!-- Ranchi Address -->
            <div class="footer-address-item">
              <svg width="18" height="18" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg>
              <span><?php echo ADDRESS_RANCHI; ?></span>
            </div>
            <!-- Bokaro Address -->
            <div class="footer-address-item">
              <svg width="18" height="18" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg>
              <span><?php echo ADDRESS_BOKARO; ?></span>
            </div>
            <!-- Email -->
            <div class="footer-address-item">
              <svg width="18" height="18" fill="currentColor" viewBox="0 0 24 24"><path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/></svg>
              <a href="mailto:<?php echo SITE_EMAIL; ?>"><?php echo SITE_EMAIL; ?></a>
            </div>
          </div>
        </div>

        <!-- Quick Links -->
        <div class="footer-col">
          <h3 class="footer-heading">Quick Links</h3>
          <div class="footer-links">
            <a href="<?php echo SITE_URL; ?>">Home</a>
            <a href="<?php echo SITE_URL; ?>pages/about.php">About Us</a>
            <a href="<?php echo SITE_URL; ?>pages/services.php">Services</a>
            <a href="<?php echo SITE_URL; ?>pages/gallery.php">Gallery</a>
            <a href="<?php echo SITE_URL; ?>pages/contact.php">Contact Us</a>
          </div>
        </div>

        <!-- Call & Assistance -->
        <div class="footer-col">
          <h3 class="footer-heading">Customer Assistance</h3>
          <p style="font-size: 0.88rem; margin-bottom: 12px;">Need instant relocation assistance or transparent cost estimation in Ranchi?</p>
          <a href="tel:<?php echo SITE_PHONE_RAW; ?>" class="btn btn-primary" style="width: 100%;">
            Call Now: <?php echo SITE_PHONE; ?>
          </a>
        </div>
      </div>

      <!-- Copyright Bottom Bar -->
      <div class="footer-bottom">
        <p>&copy; <?php echo date('Y'); ?> Packers and Movers in Ranchi. All Rights Reserved.</p>
      </div>
    </div>
  </footer>

  <!-- Main JavaScript File -->
  <script src="<?php echo SITE_URL; ?>assets/js/main.js"></script>
</body>
</html>
