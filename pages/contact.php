<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "Contact Us - Shree Ashirwad Packers and Movers";
$page_desc = "Get in touch with Shree Ashirwad Packers and Movers. Call +91 8409531615 or chat on WhatsApp for free pre-move surveys and instant relocation quotes.";
$page_keywords = "contact shree ashirwad packers, packers movers phone number, ranchi packers movers contact, relocation enquiry india";

require_once __DIR__ . '/../includes/header.php';
?>

<main class="site-main" style="background: #070d19; color: #ffffff; min-height: 100vh; padding-bottom: 60px;">

  <!-- Visual Breadcrumb Navigation Bar -->
  <div class="breadcrumb-wrapper" style="padding: 15px 0; background: #0f172a; border-bottom: 1px solid rgba(255,255,255,0.08);">
    <div class="container" style="max-width: 1140px; margin: 0 auto; padding: 0 15px;">
      <div class="breadcrumb-list" style="font-size: 0.9rem; color: #94a3b8;">
        <a href="<?php echo SITE_URL; ?>" title="Home" style="color: #f59e0b; text-decoration: none;">Home</a>
        <span style="margin: 0 8px;">/</span>
        <span style="color: #cbd5e1;">Contact Us</span>
      </div>
    </div>
  </div>

  <!-- Hero Header -->
  <section style="background: linear-gradient(135deg, #0f172a 0%, #1e1b4b 100%); padding: 60px 0 40px 0; text-align: center; border-bottom: 1px solid rgba(255,255,255,0.08);">
    <div class="container" style="max-width: 1000px; margin: 0 auto; padding: 0 15px;">
      <span style="background: rgba(245, 158, 11, 0.1); color: #f59e0b; border: 1.5px solid rgba(245, 158, 11, 0.3); padding: 6px 18px; border-radius: 30px; font-size: 0.8rem; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; display: inline-block; margin-bottom: 16px;">
        24/7 HELPLINE &bull; FREE SURVEY &bull; INSTANT ESTIMATE
      </span>
      <h1 style="font-size: 2.6rem; font-weight: 800; color: #ffffff; line-height: 1.25; margin-bottom: 16px;">
        Get in Touch with Our Shifting Experts
      </h1>
      <p style="font-size: 1.1rem; color: #cbd5e1; max-width: 800px; margin: 0 auto; line-height: 1.7;">
        Have questions about household shifting rates, car carrier availability, or warehouse storage? Connect directly with our customer care team via phone or instant WhatsApp.
      </p>
    </div>
  </section>

  <!-- Contact Form & Branch Info Section -->
  <section style="padding: 70px 0;">
    <div class="container" style="max-width: 1140px; margin: 0 auto; padding: 0 15px;">
      
      <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 40px;">
        
        <!-- Left: Official Contact Card -->
        <div style="background: #0f172a; border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 18px; padding: 36px 30px; box-shadow: 0 15px 35px rgba(0,0,0,0.3);">
          <h2 style="font-size: 1.6rem; font-weight: 800; color: #f59e0b; margin-bottom: 25px; padding-bottom: 12px; border-bottom: 2px solid rgba(245, 158, 11, 0.2);">
            Headquarters &amp; Office Details
          </h2>

          <div style="margin-bottom: 24px; display: flex; gap: 16px; align-items: flex-start;">
            <div style="width: 44px; height: 44px; background: rgba(245, 158, 11, 0.15); border-radius: 10px; display: flex; align-items: center; justify-content: center; color: #f59e0b; font-size: 1.2rem; flex-shrink: 0;">
              <i class="fas fa-map-marker-alt"></i>
            </div>
            <div>
              <h4 style="font-size: 1.05rem; font-weight: 700; color: #ffffff; margin-bottom: 4px;">Main Branch Address</h4>
              <p style="color: #cbd5e1; font-size: 0.92rem; line-height: 1.6; margin: 0;">
                Shree Ashirwad Packers and Movers (OPC) Pvt. Ltd.<br>
                <?php echo ADDRESS_RANCHI; ?>
              </p>
            </div>
          </div>

          <div style="margin-bottom: 24px; display: flex; gap: 16px; align-items: flex-start;">
            <div style="width: 44px; height: 44px; background: rgba(245, 158, 11, 0.15); border-radius: 10px; display: flex; align-items: center; justify-content: center; color: #f59e0b; font-size: 1.2rem; flex-shrink: 0;">
              <i class="fas fa-phone-alt"></i>
            </div>
            <div>
              <h4 style="font-size: 1.05rem; font-weight: 700; color: #ffffff; margin-bottom: 4px;">24/7 Helpline Phone</h4>
              <p style="color: #cbd5e1; font-size: 0.92rem; margin: 0;">
                <a href="tel:<?php echo SITE_PHONE_RAW; ?>" style="color: #f59e0b; font-weight: 700; text-decoration: none; font-size: 1.05rem;"><?php echo SITE_PHONE; ?></a>
              </p>
            </div>
          </div>

          <div style="margin-bottom: 24px; display: flex; gap: 16px; align-items: flex-start;">
            <div style="width: 44px; height: 44px; background: rgba(16, 185, 129, 0.15); border-radius: 10px; display: flex; align-items: center; justify-content: center; color: #10b981; font-size: 1.2rem; flex-shrink: 0;">
              <i class="fab fa-whatsapp"></i>
            </div>
            <div>
              <h4 style="font-size: 1.05rem; font-weight: 700; color: #ffffff; margin-bottom: 4px;">WhatsApp Support</h4>
              <p style="color: #cbd5e1; font-size: 0.92rem; margin: 0;">
                <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20have%20a%20shifting%20enquiry." target="_blank" style="color: #10b981; font-weight: 700; text-decoration: none;">+91 8409531615 (Instant Quote)</a>
              </p>
            </div>
          </div>

          <div style="margin-bottom: 24px; display: flex; gap: 16px; align-items: flex-start;">
            <div style="width: 44px; height: 44px; background: rgba(245, 158, 11, 0.15); border-radius: 10px; display: flex; align-items: center; justify-content: center; color: #f59e0b; font-size: 1.2rem; flex-shrink: 0;">
              <i class="fas fa-envelope"></i>
            </div>
            <div>
              <h4 style="font-size: 1.05rem; font-weight: 700; color: #ffffff; margin-bottom: 4px;">Official Email</h4>
              <p style="color: #cbd5e1; font-size: 0.92rem; margin: 0;">
                <a href="mailto:<?php echo SITE_EMAIL; ?>" style="color: #cbd5e1; text-decoration: none;"><?php echo SITE_EMAIL; ?></a>
              </p>
            </div>
          </div>

          <div style="padding-top: 15px; border-top: 1px solid rgba(255,255,255,0.08); font-size: 0.85rem; color: #94a3b8;">
            <strong>Registration Credentials:</strong> ISO 9001:2015 Certified &bull; Govt. Registered OPC Pvt. Ltd. &bull; IBA Approved Vendor Code Verified
          </div>
        </div>

        <!-- Right: Instant Quote Lead Form -->
        <div style="background: #0f172a; border: 1.5px solid rgba(245, 158, 11, 0.4); border-radius: 18px; padding: 36px 30px; box-shadow: 0 15px 35px rgba(0,0,0,0.3);">
          <h2 style="font-size: 1.6rem; font-weight: 800; color: #ffffff; margin-bottom: 8px;">
            Request Instant Quote
          </h2>
          <p style="font-size: 0.9rem; color: #94a3b8; margin-bottom: 25px;">Fill out the form below to receive customized price estimates directly on WhatsApp.</p>

          <form action="#" method="POST" onsubmit="sendHeroWhatsAppLead(event, this);">
            <div style="margin-bottom: 16px;">
              <label style="display: block; font-size: 0.85rem; font-weight: 700; color: #cbd5e1; margin-bottom: 6px;">Your Name *</label>
              <input type="text" name="name" required placeholder="Enter full name" style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.15); background: #070d19; color: #fff; font-size: 0.95rem; outline: none;">
            </div>

            <div style="margin-bottom: 16px;">
              <label style="display: block; font-size: 0.85rem; font-weight: 700; color: #cbd5e1; margin-bottom: 6px;">Phone / WhatsApp Number *</label>
              <input type="tel" name="phone" required placeholder="10-digit mobile number" style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.15); background: #070d19; color: #fff; font-size: 0.95rem; outline: none;">
            </div>

            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 14px; margin-bottom: 16px;">
              <div>
                <label style="display: block; font-size: 0.85rem; font-weight: 700; color: #cbd5e1; margin-bottom: 6px;">Moving From *</label>
                <input type="text" name="move_from" required placeholder="Current City/Area" style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.15); background: #070d19; color: #fff; font-size: 0.95rem; outline: none;">
              </div>
              <div>
                <label style="display: block; font-size: 0.85rem; font-weight: 700; color: #cbd5e1; margin-bottom: 6px;">Moving To *</label>
                <input type="text" name="move_to" required placeholder="Destination City/Area" style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.15); background: #070d19; color: #fff; font-size: 0.95rem; outline: none;">
              </div>
            </div>

            <div style="margin-bottom: 24px;">
              <label style="display: block; font-size: 0.85rem; font-weight: 700; color: #cbd5e1; margin-bottom: 6px;">Shifting Type</label>
              <select name="service_type" style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.15); background: #070d19; color: #fff; font-size: 0.95rem; outline: none;">
                <option value="Household Shifting">Household Shifting</option>
                <option value="Office Relocation">Office / Commercial Relocation</option>
                <option value="Car Carrier Transport">Car Carrier Transport</option>
                <option value="Bike Shipping">Bike Shipping</option>
                <option value="Warehouse Storage">Warehouse &amp; Storage</option>
              </select>
            </div>

            <button type="submit" style="width: 100%; padding: 14px; background: linear-gradient(135deg, #e11d48 0%, #f59e0b 100%); color: #ffffff; border: none; border-radius: 50px; font-weight: 700; font-size: 1rem; cursor: pointer; box-shadow: 0 6px 20px rgba(225, 29, 72, 0.4);">
              Send Instant Enquiry &rarr;
            </button>
          </form>
        </div>

      </div>

    </div>
  </section>

</main>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
