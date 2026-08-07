<?php
require_once __DIR__ . '/config.php';
?>
  <!-- Site Footer -->
  <footer class="site-footer" id="contact">
    <div class="container">
      <div class="footer-grid">
        <!-- Ranchi, Jamshedpur & Bokaro Office Details -->
        <div class="footer-col">
          <h3 class="footer-heading">Our Office Locations</h3>
          <div class="footer-address-list">
            <!-- Ranchi HQ Address -->
            <div class="footer-address-item">
              <svg width="18" height="18" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5-2.5z"/></svg>
              <span><strong>Ranchi HQ:</strong> <?php echo ADDRESS_RANCHI; ?></span>
            </div>
            <!-- Jamshedpur Hub Address -->
            <div class="footer-address-item">
              <svg width="18" height="18" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5-2.5z"/></svg>
              <span><strong>Jamshedpur Hub:</strong> <?php echo ADDRESS_JAMSHEDPUR; ?></span>
            </div>
            <!-- Bokaro Address -->
            <div class="footer-address-item">
              <svg width="18" height="18" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5-2.5z"/></svg>
              <span><strong>Bokaro Branch:</strong> <?php echo ADDRESS_BOKARO; ?></span>
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
            <a href="<?php echo SITE_URL; ?>about">About Us</a>
            <a href="<?php echo SITE_URL; ?>services">Services</a>
            <a href="<?php echo SITE_URL; ?>gallery">Gallery</a>
            <a href="<?php echo SITE_URL; ?>contact">Contact Us</a>
            <a href="<?php echo SITE_URL; ?>privacy-policy">Privacy Policy</a>
            <a href="<?php echo SITE_URL; ?>terms">Terms &amp; Conditions</a>
            <a href="<?php echo SITE_URL; ?>sitemap" style="color: #f59e0b; font-weight: 600;">HTML Sitemap Directory</a>
          </div>
        </div>

        <!-- Call & Assistance & Social Links -->
        <div class="footer-col">
          <h3 class="footer-heading">Customer Assistance</h3>
          <p style="font-size: 0.88rem; margin-bottom: 12px;">Need instant relocation assistance or transparent rate estimation in <?php echo isset($target_city) ? htmlspecialchars($target_city) : 'Ranchi'; ?>?</p>
          <a href="tel:<?php echo SITE_PHONE_RAW; ?>" class="btn btn-primary" style="width: 100%; text-align: center; margin-bottom: 15px;">
            Call Now: <?php echo SITE_PHONE; ?>
          </a>
          <h4 style="font-size: 0.95rem; margin-top: 10px; margin-bottom: 8px; color: #f59e0b; font-weight: 700;">Follow & Find Us</h4>
          <div style="display: flex; gap: 12px; align-items: center;">
            <a href="<?php echo FACEBOOK_URL; ?>" target="_blank" rel="noopener" title="Facebook Page" style="color: #1877F2; display: flex; align-items: center; gap: 4px; font-weight: 500; font-size: 0.88rem;">
              <svg width="20" height="20" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg> Facebook
            </a>
            <a href="<?php echo YOUTUBE_URL; ?>" target="_blank" rel="noopener" title="YouTube Channel" style="color: #FF0000; display: flex; align-items: center; gap: 4px; font-weight: 500; font-size: 0.88rem;">
              <svg width="20" height="20" fill="currentColor" viewBox="0 0 24 24"><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg> YouTube
            </a>
            <a href="<?php echo GMB_MAPS_URL; ?>" target="_blank" rel="noopener" title="Google Map Profile" style="color: #4285F4; display: flex; align-items: center; gap: 4px; font-weight: 500; font-size: 0.88rem;">
              <svg width="20" height="20" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5-2.5z"/></svg> Location
            </a>
          </div>
        </div>
      </div>

      <!-- Top Localities & Routes Internal Linking Matrix -->
      <div style="border-top: 1px solid rgba(255,255,255,0.1); margin-top: 25px; padding-top: 20px; font-size: 0.82rem; color: #94a3b8;">
        <div style="margin-bottom: 12px;">
          <strong style="color: #f59e0b;">Popular Ranchi Shifting Hubs:</strong>
          <a href="<?php echo SITE_URL; ?>packers-and-movers-in-ranchi" style="color: #cbd5e1; margin: 0 4px;">Packers and Movers Ranchi</a> •
          <a href="<?php echo SITE_URL; ?>packers-and-movers-lalpur-ranchi" style="color: #cbd5e1; margin: 0 4px;">Lalpur</a> •
          <a href="<?php echo SITE_URL; ?>packers-and-movers-kanke-road-ranchi" style="color: #cbd5e1; margin: 0 4px;">Kanke Road</a> •
          <a href="<?php echo SITE_URL; ?>packers-and-movers-ratu-road-ranchi" style="color: #cbd5e1; margin: 0 4px;">Ratu Road</a> •
          <a href="<?php echo SITE_URL; ?>packers-and-movers-doranda-ranchi" style="color: #cbd5e1; margin: 0 4px;">Doranda</a> •
          <a href="<?php echo SITE_URL; ?>packers-and-movers-bariatu-ranchi" style="color: #cbd5e1; margin: 0 4px;">Bariatu</a> •
          <a href="<?php echo SITE_URL; ?>packers-and-movers-hinoo-ranchi" style="color: #cbd5e1; margin: 0 4px;">Hinoo</a> •
          <a href="<?php echo SITE_URL; ?>packers-and-movers-morabadi-ranchi" style="color: #cbd5e1; margin: 0 4px;">Morabadi</a> •
          <a href="<?php echo SITE_URL; ?>packers-and-movers-harmu-ranchi" style="color: #cbd5e1; margin: 0 4px;">Harmu</a> •
          <a href="<?php echo SITE_URL; ?>packers-and-movers-namkum-ranchi" style="color: #cbd5e1; margin: 0 4px;">Namkum</a> •
          <a href="<?php echo SITE_URL; ?>packers-and-movers-kokar-ranchi" style="color: #cbd5e1; margin: 0 4px;">Kokar</a>
        </div>
        <div style="margin-bottom: 12px;">
          <strong style="color: #f59e0b;">Popular Jamshedpur Shifting Hubs:</strong>
          <a href="<?php echo SITE_URL; ?>packers-and-movers-in-jamshedpur" style="color: #cbd5e1; margin: 0 4px;">Packers and Movers Jamshedpur</a> •
          <a href="<?php echo SITE_URL; ?>packers-and-movers-bistupur-jamshedpur" style="color: #cbd5e1; margin: 0 4px;">Bistupur</a> •
          <a href="<?php echo SITE_URL; ?>packers-and-movers-sakchi-jamshedpur" style="color: #cbd5e1; margin: 0 4px;">Sakchi</a> •
          <a href="<?php echo SITE_URL; ?>packers-and-movers-mango-jamshedpur" style="color: #cbd5e1; margin: 0 4px;">Mango</a> •
          <a href="<?php echo SITE_URL; ?>packers-and-movers-kadma-jamshedpur" style="color: #cbd5e1; margin: 0 4px;">Kadma</a> •
          <a href="<?php echo SITE_URL; ?>packers-and-movers-sonari-jamshedpur" style="color: #cbd5e1; margin: 0 4px;">Sonari</a> •
          <a href="<?php echo SITE_URL; ?>packers-and-movers-telco-jamshedpur" style="color: #cbd5e1; margin: 0 4px;">Telco</a> •
          <a href="<?php echo SITE_URL; ?>packers-and-movers-adityapur-jamshedpur" style="color: #cbd5e1; margin: 0 4px;">Adityapur</a> •
          <a href="<?php echo SITE_URL; ?>packers-and-movers-golmuri-jamshedpur" style="color: #cbd5e1; margin: 0 4px;">Golmuri</a> •
          <a href="<?php echo SITE_URL; ?>packers-and-movers-baridih-jamshedpur" style="color: #cbd5e1; margin: 0 4px;">Baridih</a> •
          <a href="<?php echo SITE_URL; ?>packers-and-movers-sundernagar-jamshedpur" style="color: #cbd5e1; margin: 0 4px;">Sundernagar</a>
        </div>
        <div>
          <strong style="color: #f59e0b;">Major Intercity Routes:</strong>
          <a href="<?php echo SITE_URL; ?>packers-and-movers-ranchi-to-jamshedpur" style="color: #cbd5e1; margin: 0 4px;">Ranchi to Jamshedpur</a> •
          <a href="<?php echo SITE_URL; ?>packers-and-movers-ranchi-to-dhanbad" style="color: #cbd5e1; margin: 0 4px;">Ranchi to Dhanbad</a> •
          <a href="<?php echo SITE_URL; ?>packers-and-movers-ranchi-to-bokaro" style="color: #cbd5e1; margin: 0 4px;">Ranchi to Bokaro</a> •
          <a href="<?php echo SITE_URL; ?>packers-and-movers-ranchi-to-kolkata" style="color: #cbd5e1; margin: 0 4px;">Ranchi to Kolkata</a> •
          <a href="<?php echo SITE_URL; ?>packers-and-movers-ranchi-to-patna" style="color: #cbd5e1; margin: 0 4px;">Ranchi to Patna</a> •
          <a href="<?php echo SITE_URL; ?>packers-and-movers-ranchi-to-delhi" style="color: #cbd5e1; margin: 0 4px;">Ranchi to Delhi</a> •
          <a href="<?php echo SITE_URL; ?>packers-and-movers-jamshedpur-to-kolkata" style="color: #cbd5e1; margin: 0 4px;">Jamshedpur to Kolkata</a> •
          <a href="<?php echo SITE_URL; ?>sitemap" style="color: #f59e0b; font-weight: 600; margin-left: 6px;">[View All 400+ Locations Directory &raquo;]</a>
        </div>
      </div>

      <!-- Copyright Bottom Bar -->
      <div class="footer-bottom">
        <p>&copy; <?php echo date('Y'); ?> <?php echo isset($city_details['footer_tag']) ? htmlspecialchars($city_details['footer_tag']) : 'Packers and Movers in Ranchi. All Rights Reserved.'; ?></p>
      </div>
    </div>
  </footer>

  <!-- Main JavaScript File -->
  <script src="<?php echo SITE_URL; ?>assets/js/main.js"></script>
</body>
</html>
