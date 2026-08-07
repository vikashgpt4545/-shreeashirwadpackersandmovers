<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "Terms and Conditions | Shree Ashirwad Packers and Movers";
$page_desc = "Read the terms and conditions for booking packing, moving, and vehicle transportation services with Shree Ashirwad Packers and Movers.";
$page_keywords = DEFAULT_KEYWORDS . ", terms and conditions, booking terms, moving service terms";

require_once __DIR__ . '/../includes/header.php';
?>

<main class="site-main">
  <section style="padding: 70px 0 90px; background: linear-gradient(135deg, #f8fafc 0%, #fff7ed 100%);">
    <div class="container">
      <div style="max-width: 900px; margin: 0 auto; background: #ffffff; padding: 40px; border-radius: 16px; box-shadow: 0 10px 40px rgba(0,0,0,0.06);">
        <span class="section-tag">Terms and Conditions</span>
        <h1 style="font-size: 2rem; margin: 16px 0 10px; color: #0f172a;">Terms and Conditions</h1>
        <p style="color: #475569; line-height: 1.8; margin-bottom: 20px;">
          By using our website or booking services with Shree Ashirwad Packers and Movers, you agree to the following terms and conditions.
        </p>

        <h2 style="font-size: 1.15rem; margin-top: 28px; color: #111827;">Service Booking</h2>
        <p style="color: #475569; line-height: 1.8;">
          All bookings are subject to availability, confirmation, and the final quotation provided by our team. Any changes to the move date or destination should be communicated at the earliest possible time.
        </p>

        <h2 style="font-size: 1.15rem; margin-top: 28px; color: #111827;">Pricing and Payment</h2>
        <p style="color: #475569; line-height: 1.8;">
          Pricing is based on the scope of work, distance, volume of goods, packing materials, and any additional services requested. Final charges may vary depending on actual requirements at the time of service execution.
        </p>

        <h2 style="font-size: 1.15rem; margin-top: 28px; color: #111827;">Liability</h2>
        <p style="color: #475569; line-height: 1.8;">
          We make every reasonable effort to handle belongings safely and professionally. However, standard service limitations and natural wear and tear are not considered negligence.
        </p>

        <h2 style="font-size: 1.15rem; margin-top: 28px; color: #111827;">Customer Responsibility</h2>
        <p style="color: #475569; line-height: 1.8;">
          Customers are responsible for providing accurate contact details, complete inventory information, and timely access to the pickup and delivery locations.
        </p>

        <h2 style="font-size: 1.15rem; margin-top: 28px; color: #111827;">Contact Us</h2>
        <p style="color: #475569; line-height: 1.8;">
          For any questions regarding these terms, contact us at <a href="mailto:<?php echo SITE_EMAIL; ?>" style="color: #dc2626; font-weight: 600;"><?php echo SITE_EMAIL; ?></a> or call <a href="tel:<?php echo SITE_PHONE_RAW; ?>" style="color: #dc2626; font-weight: 600;"><?php echo SITE_PHONE; ?></a>.
        </p>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
