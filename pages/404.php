<?php
require_once __DIR__ . '/../includes/config.php';

// Set HTTP response code 404
http_response_code(404);

$page_title = "404 - Page Not Found | Shree Ashirwad Packers and Movers Ranchi";
$page_desc = "The page you are looking for does not exist on Shree Ashirwad Packers and Movers Ranchi website. Return to our homepage or contact us for assistance.";
$page_keywords = DEFAULT_KEYWORDS;

require_once __DIR__ . '/../includes/header.php';
?>

<main class="site-main">

  <section class="error-404-section" style="padding: 90px 0; background: linear-gradient(135deg, #0b132b 0%, #1c2541 100%); color: #ffffff; text-align: center; min-height: 70vh; display: flex; align-items: center;">
    <div class="container" style="max-width: 800px; margin: 0 auto;">
      
      <!-- 404 Graphic / Badge -->
      <div style="font-size: 7rem; font-weight: 900; line-height: 1; color: #f59e0b; font-family: 'Poppins', sans-serif; text-shadow: 0 10px 30px rgba(245, 158, 11, 0.3); margin-bottom: 10px;">
        404
      </div>

      <span class="section-tag" style="background: rgba(245, 158, 11, 0.15); color: #f59e0b; border: 1px solid rgba(245, 158, 11, 0.4); padding: 6px 18px; border-radius: 20px; font-size: 0.85rem; font-weight: 700; text-transform: uppercase; display: inline-block; margin-bottom: 20px;">
        Oops! Page Relocated Or Not Found
      </span>

      <h1 style="font-size: 2.3rem; font-weight: 800; color: #ffffff; margin-bottom: 15px;">
        This Page Does Not Exist or Has Been Moved
      </h1>

      <p style="font-size: 1.1rem; color: #cbd5e1; line-height: 1.7; margin-bottom: 35px; max-width: 650px; margin-left: auto; margin-right: auto;">
        Sorry, the shifting page or link you requested could not be located. It might have been updated, renamed, or relocated. Use the navigation buttons below to explore our services or get a free shifting quote.
      </p>

      <!-- Quick Action Buttons -->
      <div style="display: flex; gap: 15px; justify-content: center; flex-wrap: wrap; margin-bottom: 45px;">
        <a href="<?php echo SITE_URL; ?>" class="btn btn-primary" style="padding: 14px 28px; font-weight: 700;">
          <svg width="18" height="18" fill="currentColor" viewBox="0 0 24 24" style="vertical-align: middle; margin-right: 6px;"><path d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z"/></svg>
          Return to Homepage
        </a>
        <a href="<?php echo SITE_URL; ?>pages/services.php" class="btn btn-secondary" style="padding: 14px 28px; font-weight: 700;">
          View All Services
        </a>
        <a href="<?php echo SITE_URL; ?>pages/contact.php" class="btn btn-outline" style="padding: 14px 28px; font-weight: 700;">
          Contact Us
        </a>
      </div>

      <!-- Quick Lead Call Box -->
      <div style="background: rgba(23, 42, 84, 0.6); border: 1px solid rgba(245, 158, 11, 0.3); border-radius: 12px; padding: 25px; max-width: 550px; margin: 0 auto;">
        <h3 style="font-size: 1.15rem; color: #f59e0b; margin-bottom: 8px; font-weight: 700;">Need Urgent Shifting Assistance in Ranchi?</h3>
        <p style="font-size: 0.95rem; color: #cbd5e1; margin-bottom: 15px;">Call our 24/7 Ranchi Helpline for immediate shifting estimates:</p>
        <a href="tel:<?php echo SITE_PHONE_RAW; ?>" style="font-size: 1.3rem; font-weight: 800; color: #ffffff; text-decoration: none;">
          📞 <?php echo SITE_PHONE; ?>
        </a>
      </div>

    </div>
  </section>

</main>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
