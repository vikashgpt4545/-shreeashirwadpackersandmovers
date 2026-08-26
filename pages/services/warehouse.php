<?php
$root_dir = dirname(__DIR__, 2);
require_once file_exists(__DIR__ . '/../../includes/config.php') ? __DIR__ . '/../../includes/config.php' : $root_dir . '/includes/config.php';

$page_title = "Warehouse & Storage Services in India | Secure Goods Storage Packers Movers";
$page_desc = "Secure short and long-term warehouse storage solutions in India by Shree Ashirwad Packers and Movers. 24/7 CCTV surveillance, pest control, inventory barcode logging, palletized storage, and full insurance.";
$page_keywords = "warehouse storage services, household goods storage india, luggage storage facility ranchi jamshedpur, commercial inventory warehousing, secure storage space packers movers";
$canonical_url = SITE_URL . "services/warehouse";

require_once file_exists(__DIR__ . '/../../includes/header.php') ? __DIR__ . '/../../includes/header.php' : $root_dir . '/includes/header.php';
?>

<main class="site-main" style="background: #070d19; color: #ffffff; min-height: 100vh; padding-bottom: 60px;">

  <!-- Visual Breadcrumb Navigation Bar -->
  <div class="breadcrumb-wrapper" style="padding: 15px 0; background: #0f172a; border-bottom: 1px solid rgba(255,255,255,0.08);">
    <div class="container" style="max-width: 1140px; margin: 0 auto; padding: 0 15px;">
      <div class="breadcrumb-list" style="font-size: 0.9rem; color: #94a3b8;">
        <a href="<?php echo SITE_URL; ?>" title="Home" style="color: #f59e0b; text-decoration: none;">Home</a>
        <span style="margin: 0 8px;">/</span>
        <a href="<?php echo SITE_URL; ?>services" title="Services" style="color: #f59e0b; text-decoration: none;">Services</a>
        <span style="margin: 0 8px;">/</span>
        <span style="color: #cbd5e1;">Warehouse &amp; Storage Services</span>
      </div>
    </div>
  </div>

  <!-- SECTION 1: Hero Section with Lead Form -->
  <section class="hero-section" style="background: linear-gradient(135deg, #0f172a 0%, #1e1b4b 100%); padding: 65px 0; border-bottom: 1px solid rgba(255,255,255,0.08);">
    <div class="container" style="max-width: 1140px; margin: 0 auto; padding: 0 15px;">
      <div style="display: grid; grid-template-columns: 1.2fr 0.8fr; gap: 40px; align-items: center;">
        
        <!-- Hero Left Content -->
        <div>
          <span style="background: rgba(245, 158, 11, 0.15); color: #f59e0b; border: 1.5px solid rgba(245, 158, 11, 0.4); padding: 6px 18px; border-radius: 30px; font-size: 0.82rem; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; display: inline-block; margin-bottom: 18px;">
            24/7 CCTV SURVEILLANCE &bull; PEST-CONTROLLED STORAGE
          </span>
          <h1 style="font-size: 2.8rem; font-weight: 800; line-height: 1.2; color: #ffffff; margin-bottom: 20px;">
            Secure <span style="color: #f59e0b;">Warehouse &amp; Storage Services</span> in India
          </h1>
          <p style="font-size: 1.1rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 25px;">
            Need temporary storage while your new house gets renovated or during an overseas assignment? <strong>Shree Ashirwad Packers and Movers</strong> provides state-of-the-art household &amp; commercial warehousing facilities equipped with 24/7 HD CCTV monitoring, fire protection sprinklers, rodent/pest control treatments, barcode inventory tracking, and flexible monthly rental plans.
          </p>

          <div style="display: flex; gap: 15px; flex-wrap: wrap; margin-bottom: 30px;">
            <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Warehouse Support" style="padding: 14px 28px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; text-decoration: none; display: inline-flex; align-items: center; gap: 10px; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
              <i class="fas fa-phone-alt"></i> Call Warehouse Desk: <?php echo SITE_PHONE; ?>
            </a>
            <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20a%20warehouse%20storage%20quote." title="Chat on WhatsApp" target="_blank" style="padding: 14px 28px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; text-decoration: none; display: inline-flex; align-items: center; gap: 10px; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
              <i class="fab fa-whatsapp"></i> Chat on WhatsApp
            </a>
          </div>

          <div style="display: flex; gap: 20px; font-size: 0.88rem; color: #94a3b8; flex-wrap: wrap;">
            <span><strong style="color: #f59e0b;">24/7 HD CCTV</strong> Security</span>
            <span><strong style="color: #f59e0b;">Monthly Rodent</strong> Treatment</span>
            <span><strong style="color: #f59e0b;">Short &amp; Long Term</strong> Plans</span>
          </div>
        </div>

        <!-- Hero Right Form -->
        <div style="background: rgba(15, 23, 42, 0.85); backdrop-filter: blur(12px); border: 1.5px solid rgba(245, 158, 11, 0.35); border-radius: 20px; padding: 32px 28px; box-shadow: 0 20px 45px rgba(0,0,0,0.5);">
          <h2 style="font-size: 1.45rem; color: #ffffff; margin-bottom: 8px; font-weight: 800; text-align: center;">Get Instant Warehouse Rent Quote</h2>
          <p style="font-size: 0.85rem; color: #94a3b8; text-align: center; margin-bottom: 22px;">Receive transparent monthly storage cost estimation</p>

          <form action="#" method="POST" onsubmit="sendHeroWhatsAppLead(event, this);">
            <div style="margin-bottom: 14px;">
              <input type="text" name="name" class="form-control" placeholder="Your Full Name *" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.4); color: #fff; font-size: 0.95rem;">
            </div>
            <div style="margin-bottom: 14px;">
              <input type="tel" name="phone" class="form-control" placeholder="10-Digit Mobile Number *" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.4); color: #fff; font-size: 0.95rem;">
            </div>
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 12px; margin-bottom: 14px;">
              <input type="text" name="city" class="form-control" placeholder="Pickup City *" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.4); color: #fff; font-size: 0.95rem;">
              <input type="text" name="duration" class="form-control" placeholder="Storage Tenure (e.g. 1 Month) *" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.4); color: #fff; font-size: 0.95rem;">
            </div>
            <div style="margin-bottom: 16px;">
              <select name="storage_volume" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: #0f172a; color: #fff; font-size: 0.95rem;">
                <option value="" disabled selected>Select Storage Goods Type *</option>
                <option value="Household Furniture (1 BHK)">1 BHK Household Furniture &amp; Boxes</option>
                <option value="Household Furniture (2 BHK)">2 BHK Household Furniture &amp; Goods</option>
                <option value="Household Furniture (3 BHK)">3 BHK Household Goods</option>
                <option value="Commercial / Office Stock">Commercial Goods / Office Inventory</option>
              </select>
            </div>
            <button type="submit" style="width: 100%; padding: 14px; background: linear-gradient(135deg, #d32f2f 0%, #f59e0b 100%); color: #ffffff; border: none; border-radius: 50px; font-weight: 800; font-size: 1rem; cursor: pointer; transition: all 0.3s ease;">
              Calculate Storage Rent &rarr;
            </button>
          </form>
        </div>

      </div>
    </div>
  </section>

  <!-- SECTION 2: Warehouse Rate Matrix -->
  <section style="padding: 70px 0; background: #0f172a; border-top: 1px solid rgba(255,255,255,0.08); border-bottom: 1px solid rgba(255,255,255,0.08);">
    <div class="container" style="max-width: 1140px; margin: 0 auto; padding: 0 15px;">
      
      <div style="text-align: center; margin-bottom: 40px;">
        <span style="color: #f59e0b; font-size: 0.85rem; font-weight: 700; text-transform: uppercase; letter-spacing: 1.5px;">MONTHLY WAREHOUSE RENT</span>
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin-top: 8px;">Warehouse Storage Pricing Matrix (2026 Updated)</h2>
      </div>

      <div style="overflow-x: auto; margin-bottom: 25px;">
        <table style="width: 100%; border-collapse: collapse; text-align: left; background: #070d19; border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 12px; overflow: hidden;">
          <thead>
            <tr style="background: linear-gradient(135deg, #1e1b4b 0%, #0f172a 100%); color: #f59e0b;">
              <th style="padding: 16px 20px; font-weight: 700;">Goods Storage Type</th>
              <th style="padding: 16px 20px; font-weight: 700;">1 Month Storage Rent</th>
              <th style="padding: 16px 20px; font-weight: 700;">3 - 6 Months (Per Month)</th>
              <th style="padding: 16px 20px; font-weight: 700;">12+ Months Long Term</th>
            </tr>
          </thead>
          <tbody style="color: #cbd5e1; font-size: 0.92rem; line-height: 1.6;">
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.08);">
              <td style="padding: 16px 20px; font-weight: 700; color: #ffffff;">Few Luggage / 10 Cartons</td>
              <td style="padding: 16px 20px;">₹1,500 - ₹2,500</td>
              <td style="padding: 16px 20px;">₹1,200 - ₹2,000</td>
              <td style="padding: 16px 20px;">Discounted Annual Package</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.08); background: rgba(255,255,255,0.02);">
              <td style="padding: 16px 20px; font-weight: 700; color: #ffffff;">1 BHK Complete Household</td>
              <td style="padding: 16px 20px;">₹3,000 - ₹4,500</td>
              <td style="padding: 16px 20px;">₹2,500 - ₹3,800</td>
              <td style="padding: 16px 20px;">Discounted Annual Package</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.08);">
              <td style="padding: 16px 20px; font-weight: 700; color: #ffffff;">2 BHK Complete Household</td>
              <td style="padding: 16px 20px;">₹4,500 - ₹6,500</td>
              <td style="padding: 16px 20px;">₹4,000 - ₹5,500</td>
              <td style="padding: 16px 20px;">Discounted Annual Package</td>
            </tr>
            <tr>
              <td style="padding: 16px 20px; font-weight: 700; color: #ffffff;">3 BHK Complete Household</td>
              <td style="padding: 16px 20px;">₹6,500 - ₹9,500</td>
              <td style="padding: 16px 20px;">₹5,500 - ₹8,000</td>
              <td style="padding: 16px 20px;">Discounted Annual Package</td>
            </tr>
          </tbody>
        </table>
      </div>

    </div>
  </section>

  <!-- SECTION 3: FAQ -->
  <section style="padding: 70px 0; background: #070d19;">
    <div class="container" style="max-width: 900px; margin: 0 auto; padding: 0 15px;">
      
      <div style="text-align: center; margin-bottom: 45px;">
        <span style="color: #f59e0b; font-size: 0.85rem; font-weight: 700; text-transform: uppercase; letter-spacing: 1.5px;">WAREHOUSE FAQS</span>
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin-top: 8px;">Frequently Asked Questions on Goods Storage</h2>
      </div>

      <div style="display: flex; flex-direction: column; gap: 18px;">
        <div style="background: #0f172a; border: 1px solid rgba(255,255,255,0.08); border-radius: 12px; padding: 22px 25px;">
          <h4 style="font-size: 1.1rem; font-weight: 700; color: #f59e0b; margin-bottom: 8px;">Q1: How are my household items protected against moisture, dust, and pests?</h4>
          <p style="color: #cbd5e1; font-size: 0.92rem; line-height: 1.7;">
            All items undergo 7-layer stretch wrap and heavy bubble sheet sealing before being stored on elevated wooden pallets off the concrete floor. We conduct monthly professional pest control, rodent treatment, and fogging operations inside our facility.
          </p>
        </div>

        <div style="background: #0f172a; border: 1px solid rgba(255,255,255,0.08); border-radius: 12px; padding: 22px 25px;">
          <h4 style="font-size: 1.1rem; font-weight: 700; color: #f59e0b; margin-bottom: 8px;">Q2: What is the minimum storage duration available?</h4>
          <p style="color: #cbd5e1; font-size: 0.92rem; line-height: 1.7;">
            Our minimum storage duration is 15 days or 1 month. You can extend your storage tenure on a month-to-month basis or opt for discounted semi-annual / annual packages.
          </p>
        </div>
      </div>

    </div>
  </section>

  <!-- SECTION 4: Call to Action Banner -->
  <section style="padding: 60px 0; background: linear-gradient(135deg, #1e1b4b 0%, #0f172a 100%); text-align: center;">
    <div class="container" style="max-width: 900px; margin: 0 auto; padding: 0 15px;">
      <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin-bottom: 14px;">Store Your Household Goods in 100% Safe Warehouse</h2>
      <p style="color: #cbd5e1; font-size: 1.05rem; margin-bottom: 28px; line-height: 1.7;">
        Book your storage slot with Shree Ashirwad Packers and Movers today for complete peace of mind.
      </p>
      <div style="display: flex; gap: 15px; justify-content: center; flex-wrap: wrap;">
        <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Warehouse Desk" style="padding: 15px 34px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 800; font-size: 1.05rem; text-decoration: none; display: inline-flex; align-items: center; gap: 10px; box-shadow: 0 6px 20px rgba(225, 29, 72, 0.4);">
          <i class="fas fa-phone-alt"></i> Call Helpline: <?php echo SITE_PHONE; ?>
        </a>
        <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20to%20book%20warehouse%20storage." title="WhatsApp Booking" target="_blank" style="padding: 15px 34px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 800; font-size: 1.05rem; text-decoration: none; display: inline-flex; align-items: center; gap: 10px; box-shadow: 0 6px 20px rgba(16, 185, 129, 0.4);">
          <i class="fab fa-whatsapp"></i> Chat on WhatsApp
        </a>
      </div>
    </div>
  </section>

</main>

<?php require_once file_exists(__DIR__ . '/../../includes/footer.php') ? __DIR__ . '/../../includes/footer.php' : $root_dir . '/includes/footer.php'; ?>
