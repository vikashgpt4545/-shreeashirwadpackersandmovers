<?php
$root_dir = dirname(__DIR__, 2);
require_once file_exists(__DIR__ . '/../../includes/config.php') ? __DIR__ . '/../../includes/config.php' : $root_dir . '/includes/config.php';

$page_title = "Local Shifting Services | Same-Day City Home Packers Movers";
$page_desc = "Fast, affordable same-day local shifting services across India by Shree Ashirwad Packers and Movers. Professional intracity house moving, bubble wrap packing, furniture assembly, and zero-scratch doorstep delivery.";
$page_keywords = "local shifting services, city home moving, local packers movers ranchi jamshedpur, intracity house relocation, local shifting charges 1bhk 2bhk 3bhk";
$canonical_url = SITE_URL . "services/local-shifting";

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
        <span style="color: #cbd5e1;">Local Shifting Services</span>
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
            SAME-DAY LOCAL CITY RELOCATION &bull; NO HIDDEN STAIR CHARGES
          </span>
          <h1 style="font-size: 2.8rem; font-weight: 800; line-height: 1.2; color: #ffffff; margin-bottom: 20px;">
            Fast &amp; Stress-Free <span style="color: #f59e0b;">Local Shifting Services</span>
          </h1>
          <p style="font-size: 1.1rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 25px;">
            Moving to a new apartment or locality within your city? <strong>Shree Ashirwad Packers and Movers</strong> offers same-day local house shifting with dedicated city vehicles, expert packing teams, furniture dismantling, and floor-by-floor placement. Shift your home in under 6 hours without lifting a finger!
          </p>

          <div style="display: flex; gap: 15px; flex-wrap: wrap; margin-bottom: 30px;">
            <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Local Shifting Desk" style="padding: 14px 28px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; text-decoration: none; display: inline-flex; align-items: center; gap: 10px; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
              <i class="fas fa-phone-alt"></i> Call Helpline: <?php echo SITE_PHONE; ?>
            </a>
            <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20a%20local%20shifting%20quote." title="Chat on WhatsApp" target="_blank" style="padding: 14px 28px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; text-decoration: none; display: inline-flex; align-items: center; gap: 10px; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
              <i class="fab fa-whatsapp"></i> Chat on WhatsApp
            </a>
          </div>

          <div style="display: flex; gap: 20px; font-size: 0.88rem; color: #94a3b8; flex-wrap: wrap;">
            <span><strong style="color: #f59e0b;">Same-Day 6 Hour</strong> Completion</span>
            <span><strong style="color: #f59e0b;">Multi-Layer</strong> Protective Packing</span>
            <span><strong style="color: #f59e0b;">Dedicated City</strong> Truck Fleet</span>
          </div>
        </div>

        <!-- Hero Right Form -->
        <div style="background: rgba(15, 23, 42, 0.85); backdrop-filter: blur(12px); border: 1.5px solid rgba(245, 158, 11, 0.35); border-radius: 20px; padding: 32px 28px; box-shadow: 0 20px 45px rgba(0,0,0,0.5);">
          <h2 style="font-size: 1.45rem; color: #ffffff; margin-bottom: 8px; font-weight: 800; text-align: center;">Get Instant Local Shifting Price</h2>
          <p style="font-size: 0.85rem; color: #94a3b8; text-align: center; margin-bottom: 22px;">Receive exact local house moving cost on WhatsApp</p>

          <form action="#" method="POST" onsubmit="sendHeroWhatsAppLead(event, this);">
            <div style="margin-bottom: 14px;">
              <input type="text" name="name" class="form-control" placeholder="Your Full Name *" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.4); color: #fff; font-size: 0.95rem;">
            </div>
            <div style="margin-bottom: 14px;">
              <input type="tel" name="phone" class="form-control" placeholder="10-Digit Mobile Number *" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.4); color: #fff; font-size: 0.95rem;">
            </div>
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 12px; margin-bottom: 14px;">
              <input type="text" name="move_from" class="form-control" placeholder="Current Area / Locality *" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.4); color: #fff; font-size: 0.95rem;">
              <input type="text" name="move_to" class="form-control" placeholder="Destination Locality *" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.4); color: #fff; font-size: 0.95rem;">
            </div>
            <div style="margin-bottom: 16px;">
              <select name="home_type" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: #0f172a; color: #fff; font-size: 0.95rem;">
                <option value="" disabled selected>Select Home Size *</option>
                <option value="1 BHK Local Shifting">1 BHK Apartment</option>
                <option value="2 BHK Local Shifting">2 BHK Flat</option>
                <option value="3 BHK Local Shifting">3 BHK Apartment</option>
                <option value="4+ BHK / Villa Local Shifting">4+ BHK / Independent House</option>
              </select>
            </div>
            <button type="submit" style="width: 100%; padding: 14px; background: linear-gradient(135deg, #d32f2f 0%, #f59e0b 100%); color: #ffffff; border: none; border-radius: 50px; font-weight: 800; font-size: 1rem; cursor: pointer; transition: all 0.3s ease;">
              Calculate Local Shifting Rate &rarr;
            </button>
          </form>
        </div>

      </div>
    </div>
  </section>

  <!-- SECTION 2: Local Rates Matrix -->
  <section style="padding: 70px 0; background: #0f172a; border-top: 1px solid rgba(255,255,255,0.08); border-bottom: 1px solid rgba(255,255,255,0.08);">
    <div class="container" style="max-width: 1140px; margin: 0 auto; padding: 0 15px;">
      
      <div style="text-align: center; margin-bottom: 40px;">
        <span style="color: #f59e0b; font-size: 0.85rem; font-weight: 700; text-transform: uppercase; letter-spacing: 1.5px;">ESTIMATED LOCAL RATES</span>
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin-top: 8px;">Local House Shifting Rate Card (Intracity)</h2>
      </div>

      <div style="overflow-x: auto; margin-bottom: 25px;">
        <table style="width: 100%; border-collapse: collapse; text-align: left; background: #070d19; border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 12px; overflow: hidden;">
          <thead>
            <tr style="background: linear-gradient(135deg, #1e1b4b 0%, #0f172a 100%); color: #f59e0b;">
              <th style="padding: 16px 20px; font-weight: 700;">Home Size</th>
              <th style="padding: 16px 20px; font-weight: 700;">Within 10 KM Radius</th>
              <th style="padding: 16px 20px; font-weight: 700;">10 KM - 30 KM Radius</th>
              <th style="padding: 16px 20px; font-weight: 700;">Average Completion Time</th>
            </tr>
          </thead>
          <tbody style="color: #cbd5e1; font-size: 0.92rem; line-height: 1.6;">
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.08);">
              <td style="padding: 16px 20px; font-weight: 700; color: #ffffff;">1 BHK Flat / Studio</td>
              <td style="padding: 16px 20px;">₹3,500 - ₹5,500</td>
              <td style="padding: 16px 20px;">₹4,800 - ₹7,200</td>
              <td style="padding: 16px 20px;">3 - 4 Hours</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.08); background: rgba(255,255,255,0.02);">
              <td style="padding: 16px 20px; font-weight: 700; color: #ffffff;">2 BHK Complete Flat</td>
              <td style="padding: 16px 20px;">₹6,000 - ₹9,500</td>
              <td style="padding: 16px 20px;">₹8,000 - ₹12,500</td>
              <td style="padding: 16px 20px;">4 - 6 Hours</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.08);">
              <td style="padding: 16px 20px; font-weight: 700; color: #ffffff;">3 BHK Complete Flat</td>
              <td style="padding: 16px 20px;">₹9,500 - ₹14,000</td>
              <td style="padding: 16px 20px;">₹12,500 - ₹17,500</td>
              <td style="padding: 16px 20px;">6 - 8 Hours</td>
            </tr>
            <tr>
              <td style="padding: 16px 20px; font-weight: 700; color: #ffffff;">4+ BHK / Independent House</td>
              <td style="padding: 16px 20px;">₹13,500 - ₹20,000+</td>
              <td style="padding: 16px 20px;">₹17,000 - ₹25,000+</td>
              <td style="padding: 16px 20px;">Same-Day Evening</td>
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
        <span style="color: #f59e0b; font-size: 0.85rem; font-weight: 700; text-transform: uppercase; letter-spacing: 1.5px;">LOCAL SHIFTING FAQS</span>
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin-top: 8px;">Frequently Asked Questions on Local Relocation</h2>
      </div>

      <div style="display: flex; flex-direction: column; gap: 18px;">
        <div style="background: #0f172a; border: 1px solid rgba(255,255,255,0.08); border-radius: 12px; padding: 22px 25px;">
          <h4 style="font-size: 1.1rem; font-weight: 700; color: #f59e0b; margin-bottom: 8px;">Q1: Can local house shifting be completed on the same day?</h4>
          <p style="color: #cbd5e1; font-size: 0.92rem; line-height: 1.7;">
            Yes! For 1 BHK, 2 BHK, and 3 BHK local moves within the same city, our crew arrives by 8:00 AM, finishes packing and loading by noon, and completes unloading and unpacking at your new home before 6:00 PM on the very same day.
          </p>
        </div>

        <div style="background: #0f172a; border: 1px solid rgba(255,255,255,0.08); border-radius: 12px; padding: 22px 25px;">
          <h4 style="font-size: 1.1rem; font-weight: 700; color: #f59e0b; margin-bottom: 8px;">Q2: Do you charge extra if my building does not have a lift/elevator?</h4>
          <p style="color: #cbd5e1; font-size: 0.92rem; line-height: 1.7;">
            Our formal written quote includes labor for stair carrying up to specified floor levels. We assess floor elevation during our initial discussion so there are zero surprise demands on moving day.
          </p>
        </div>
      </div>

    </div>
  </section>

  <!-- SECTION 4: Call to Action Banner -->
  <section style="padding: 60px 0; background: linear-gradient(135deg, #1e1b4b 0%, #0f172a 100%); text-align: center;">
    <div class="container" style="max-width: 900px; margin: 0 auto; padding: 0 15px;">
      <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin-bottom: 14px;">Shift Your House Locally Today in Under 6 Hours</h2>
      <p style="color: #cbd5e1; font-size: 1.05rem; margin-bottom: 28px; line-height: 1.7;">
        Book your local city house move with Shree Ashirwad Packers and Movers for a hassle-free experience.
      </p>
      <div style="display: flex; gap: 15px; justify-content: center; flex-wrap: wrap;">
        <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Local Moving Desk" style="padding: 15px 34px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 800; font-size: 1.05rem; text-decoration: none; display: inline-flex; align-items: center; gap: 10px; box-shadow: 0 6px 20px rgba(225, 29, 72, 0.4);">
          <i class="fas fa-phone-alt"></i> Call Helpline: <?php echo SITE_PHONE; ?>
        </a>
        <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20to%20book%20local%20shifting." title="WhatsApp Booking" target="_blank" style="padding: 15px 34px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 800; font-size: 1.05rem; text-decoration: none; display: inline-flex; align-items: center; gap: 10px; box-shadow: 0 6px 20px rgba(16, 185, 129, 0.4);">
          <i class="fab fa-whatsapp"></i> Chat on WhatsApp
        </a>
      </div>
    </div>
  </section>

</main>

<?php require_once file_exists(__DIR__ . '/../../includes/footer.php') ? __DIR__ . '/../../includes/footer.php' : $root_dir . '/includes/footer.php'; ?>
