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

        <!-- Call & Assistance & Social Links -->
        <div class="footer-col">
          <h3 class="footer-heading">Customer Assistance</h3>
          <p style="font-size: 0.88rem; margin-bottom: 12px;">Need instant relocation assistance or transparent rate estimation in Ranchi?</p>
          <a href="tel:<?php echo SITE_PHONE_RAW; ?>" class="btn btn-primary" style="width: 100%; text-align: center; margin-bottom: 15px;">
            Call Now: <?php echo SITE_PHONE; ?>
          </a>
          <h4 style="font-size: 0.95rem; margin-top: 10px; margin-bottom: 8px; color: var(--primary-color);">Follow & Find Us</h4>
          <div style="display: flex; gap: 12px; align-items: center;">
            <a href="<?php echo FACEBOOK_URL; ?>" target="_blank" rel="noopener" title="Facebook Page" style="color: #1877F2; display: flex; align-items: center; gap: 4px; font-weight: 500; font-size: 0.88rem;">
              <svg width="20" height="20" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg> Facebook
            </a>
            <a href="<?php echo YOUTUBE_URL; ?>" target="_blank" rel="noopener" title="YouTube Channel" style="color: #FF0000; display: flex; align-items: center; gap: 4px; font-weight: 500; font-size: 0.88rem;">
              <svg width="20" height="20" fill="currentColor" viewBox="0 0 24 24"><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg> YouTube
            </a>
            <a href="<?php echo GMB_MAPS_URL; ?>" target="_blank" rel="noopener" title="Google Map Profile" style="color: #4285F4; display: flex; align-items: center; gap: 4px; font-weight: 500; font-size: 0.88rem;">
              <svg width="20" height="20" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg> Location
            </a>
          </div>
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
