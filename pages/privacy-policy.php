<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "Privacy Policy | Shree Ashirwad Packers and Movers";
$page_desc = "Learn how Shree Ashirwad Packers and Movers collects, uses, and protects your personal information on our website and during relocation services.";
$page_keywords = DEFAULT_KEYWORDS . ", privacy policy, data protection, customer privacy";

require_once __DIR__ . '/../includes/header.php';
?>

<main class="site-main">
  <section style="padding: 70px 0 90px; background: linear-gradient(135deg, #f8fafc 0%, #eef2ff 100%);">
    <div class="container">
      <div style="max-width: 900px; margin: 0 auto; background: #ffffff; padding: 40px; border-radius: 16px; box-shadow: 0 10px 40px rgba(0,0,0,0.06);">
        <span class="section-tag">Privacy Policy</span>
        <h1 style="font-size: 2rem; margin: 16px 0 10px; color: #0f172a;">Privacy Policy</h1>
        <p style="color: #475569; line-height: 1.8; margin-bottom: 20px;">
          At Shree Ashirwad Packers and Movers, we respect your privacy and are committed to protecting the personal information you share with us through our website, phone calls, or WhatsApp inquiries.
        </p>

        <h2 style="font-size: 1.15rem; margin-top: 28px; color: #111827;">Information We Collect</h2>
        <p style="color: #475569; line-height: 1.8;">
          We may collect your name, phone number, email address, moving date, origin-destination details, and service preferences when you request a quote or contact us for relocation support.
        </p>

        <h2 style="font-size: 1.15rem; margin-top: 28px; color: #111827;">How We Use Your Information</h2>
        <p style="color: #475569; line-height: 1.8;">
          Your information is used to respond to your enquiry, provide quotations, arrange moving services, communicate updates, and improve our customer support experience.
        </p>

        <h2 style="font-size: 1.15rem; margin-top: 28px; color: #111827;">Data Protection</h2>
        <p style="color: #475569; line-height: 1.8;">
          We take reasonable measures to protect your personal data from unauthorized access, misuse, or disclosure. We do not sell or rent your personal information to third parties for marketing purposes.
        </p>

        <h2 style="font-size: 1.15rem; margin-top: 28px; color: #111827;">Cookies and Website Analytics</h2>
        <p style="color: #475569; line-height: 1.8;">
          Our website may use basic analytics and cookies to understand traffic and improve website performance. You may disable cookies through your browser settings if desired.
        </p>

        <h2 style="font-size: 1.15rem; margin-top: 28px; color: #111827;">Contact Us</h2>
        <p style="color: #475569; line-height: 1.8;">
          If you have any questions about this Privacy Policy, please contact us at <a href="mailto:<?php echo SITE_EMAIL; ?>" style="color: #dc2626; font-weight: 600;"><?php echo SITE_EMAIL; ?></a> or call <a href="tel:<?php echo SITE_PHONE_RAW; ?>" style="color: #dc2626; font-weight: 600;"><?php echo SITE_PHONE; ?></a>.
        </p>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
