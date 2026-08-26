<?php
$root_dir = dirname(__DIR__, 2);
require_once file_exists(__DIR__ . '/../../includes/config.php') ? __DIR__ . '/../../includes/config.php' : $root_dir . '/includes/config.php';

$page_title = "Car Transportation Services in India | Enclosed Car Carrier Packers Movers";
$page_desc = "Safe and scratch-free car transportation services in India by IBA-approved Shree Ashirwad Packers and Movers. Enclosed hydraulic car carriers, GPS tracking, vehicle inspection report, doorstep delivery, and full insurance.";
$page_keywords = "car transportation services, car carrier trucks india, vehicle shifting packers movers, car shipping ranchi jamshedpur, enclosed car transport, sedan SUV car carrier cost";
$canonical_url = SITE_URL . "services/car-transportation";

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
        <span style="color: #cbd5e1;">Car Transportation Services</span>
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
            ENCLOSED CAR CARRIER SPECIALISTS &bull; 0-KMS ROAD DRIVE
          </span>
          <h1 style="font-size: 2.8rem; font-weight: 800; line-height: 1.2; color: #ffffff; margin-bottom: 20px;">
            Scratch-Free <span style="color: #f59e0b;">Car Transportation Services</span> Across India
          </h1>
          <p style="font-size: 1.1rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 25px;">
            Transport your car with complete peace of mind. <strong>Shree Ashirwad Packers and Movers</strong> utilizes double-deck enclosed car carrier trucks equipped with hydraulic ramps, heavy-duty wheel chocks, GPS tracking, and protective seat covers. We guarantee zero road driving, pre-loading vehicle condition reports, and door-to-door delivery nationwide.
          </p>

          <div style="display: flex; gap: 15px; flex-wrap: wrap; margin-bottom: 30px;">
            <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Car Transport Helpline" style="padding: 14px 28px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; text-decoration: none; display: inline-flex; align-items: center; gap: 10px; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
              <i class="fas fa-phone-alt"></i> Call Helpline: <?php echo SITE_PHONE; ?>
            </a>
            <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20a%20car%20transportation%20quote." title="Chat on WhatsApp" target="_blank" style="padding: 14px 28px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; text-decoration: none; display: inline-flex; align-items: center; gap: 10px; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
              <i class="fab fa-whatsapp"></i> Chat on WhatsApp
            </a>
          </div>

          <div style="display: flex; gap: 20px; font-size: 0.88rem; color: #94a3b8; flex-wrap: wrap;">
            <span><strong style="color: #f59e0b;">Enclosed Covered</strong> Carriers</span>
            <span><strong style="color: #f59e0b;">Pre-Move Condition</strong> Report</span>
            <span><strong style="color: #f59e0b;">Transit Risk</strong> Insurance</span>
          </div>
        </div>

        <!-- Hero Right Form -->
        <div style="background: rgba(15, 23, 42, 0.85); backdrop-filter: blur(12px); border: 1.5px solid rgba(245, 158, 11, 0.35); border-radius: 20px; padding: 32px 28px; box-shadow: 0 20px 45px rgba(0,0,0,0.5);">
          <h2 style="font-size: 1.45rem; color: #ffffff; margin-bottom: 8px; font-weight: 800; text-align: center;">Get Instant Car Shipping Freight</h2>
          <p style="font-size: 0.85rem; color: #94a3b8; text-align: center; margin-bottom: 22px;">Receive exact transparent carrier cost on WhatsApp</p>

          <form action="#" method="POST" onsubmit="sendHeroWhatsAppLead(event, this);">
            <div style="margin-bottom: 14px;">
              <input type="text" name="car_model" class="form-control" placeholder="Car Model (e.g. Swift, Creta, City) *" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.4); color: #fff; font-size: 0.95rem;">
            </div>
            <div style="margin-bottom: 14px;">
              <input type="tel" name="phone" class="form-control" placeholder="10-Digit Mobile Number *" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.4); color: #fff; font-size: 0.95rem;">
            </div>
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 12px; margin-bottom: 14px;">
              <input type="text" name="move_from" class="form-control" placeholder="Pickup City *" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.4); color: #fff; font-size: 0.95rem;">
              <input type="text" name="move_to" class="form-control" placeholder="Delivery City *" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.4); color: #fff; font-size: 0.95rem;">
            </div>
            <div style="margin-bottom: 16px;">
              <select name="car_type" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: #0f172a; color: #fff; font-size: 0.95rem;">
                <option value="" disabled selected>Select Vehicle Category *</option>
                <option value="Hatchback (Alto, i20, WagonR)">Hatchback Car</option>
                <option value="Sedan (Dzire, City, Verna)">Sedan Car</option>
                <option value="Compact SUV (Brezza, Creta, Nexon)">Compact SUV / Crossover</option>
                <option value="Full Size SUV / MUV (Fortuner, Innova, Harrier)">Large SUV / MUV / Luxury Car</option>
              </select>
            </div>
            <button type="submit" style="width: 100%; padding: 14px; background: linear-gradient(135deg, #d32f2f 0%, #f59e0b 100%); color: #ffffff; border: none; border-radius: 50px; font-weight: 800; font-size: 1rem; cursor: pointer; transition: all 0.3s ease;">
              Calculate Car Freight Rate &rarr;
            </button>
          </form>
        </div>

      </div>
    </div>
  </section>

  <!-- SECTION 2: Car Carrier Rate Card -->
  <section style="padding: 70px 0; background: #0f172a; border-top: 1px solid rgba(255,255,255,0.08); border-bottom: 1px solid rgba(255,255,255,0.08);">
    <div class="container" style="max-width: 1140px; margin: 0 auto; padding: 0 15px;">
      
      <div style="text-align: center; margin-bottom: 40px;">
        <span style="color: #f59e0b; font-size: 0.85rem; font-weight: 700; text-transform: uppercase; letter-spacing: 1.5px;">ESTIMATED CAR FREIGHT</span>
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin-top: 8px;">Car Transportation Pricing Matrix (2026 Rates)</h2>
      </div>

      <div style="overflow-x: auto; margin-bottom: 25px;">
        <table style="width: 100%; border-collapse: collapse; text-align: left; background: #070d19; border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 12px; overflow: hidden;">
          <thead>
            <tr style="background: linear-gradient(135deg, #1e1b4b 0%, #0f172a 100%); color: #f59e0b;">
              <th style="padding: 16px 20px; font-weight: 700;">Vehicle Type</th>
              <th style="padding: 16px 20px; font-weight: 700;">Distance: 100 - 500 KM</th>
              <th style="padding: 16px 20px; font-weight: 700;">Distance: 500 - 1200 KM</th>
              <th style="padding: 16px 20px; font-weight: 700;">Distance: 1200 - 2500+ KM</th>
            </tr>
          </thead>
          <tbody style="color: #cbd5e1; font-size: 0.92rem; line-height: 1.6;">
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.08);">
              <td style="padding: 16px 20px; font-weight: 700; color: #ffffff;">Hatchback (Alto, i20, Swift)</td>
              <td style="padding: 16px 20px;">₹6,500 - ₹9,500</td>
              <td style="padding: 16px 20px;">₹10,500 - ₹15,500</td>
              <td style="padding: 16px 20px;">₹14,500 - ₹21,000</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.08); background: rgba(255,255,255,0.02);">
              <td style="padding: 16px 20px; font-weight: 700; color: #ffffff;">Sedan (Dzire, City, Verna)</td>
              <td style="padding: 16px 20px;">₹7,500 - ₹11,500</td>
              <td style="padding: 16px 20px;">₹12,000 - ₹17,500</td>
              <td style="padding: 16px 20px;">₹16,500 - ₹24,000</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.08);">
              <td style="padding: 16px 20px; font-weight: 700; color: #ffffff;">Compact SUV / Crossover (Creta, Nexon)</td>
              <td style="padding: 16px 20px;">₹8,500 - ₹13,000</td>
              <td style="padding: 16px 20px;">₹13,500 - ₹19,500</td>
              <td style="padding: 16px 20px;">₹18,500 - ₹27,000</td>
            </tr>
            <tr>
              <td style="padding: 16px 20px; font-weight: 700; color: #ffffff;">Large SUV / Luxury (Fortuner, Innova, BMW)</td>
              <td style="padding: 16px 20px;">₹10,000 - ₹15,500</td>
              <td style="padding: 16px 20px;">₹16,000 - ₹23,000</td>
              <td style="padding: 16px 20px;">₹22,000 - ₹32,000</td>
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
        <span style="color: #f59e0b; font-size: 0.85rem; font-weight: 700; text-transform: uppercase; letter-spacing: 1.5px;">CAR SHIPPING FAQS</span>
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin-top: 8px;">Frequently Asked Questions on Car Transport</h2>
      </div>

      <div style="display: flex; flex-direction: column; gap: 18px;">
        <div style="background: #0f172a; border: 1px solid rgba(255,255,255,0.08); border-radius: 12px; padding: 22px 25px;">
          <h4 style="font-size: 1.1rem; font-weight: 700; color: #f59e0b; margin-bottom: 8px;">Q1: Is my car driven by road during long-distance intercity transportation?</h4>
          <p style="color: #cbd5e1; font-size: 0.92rem; line-height: 1.7;">
            No! We enforce a strict 0-Kilometer road driving policy. Your car is driven only onto the hydraulic ramp of our specialized enclosed car container vehicle and locked into position. The odometer reading is recorded in the inspection report before and after transit.
          </p>
        </div>

        <div style="background: #0f172a; border: 1px solid rgba(255,255,255,0.08); border-radius: 12px; padding: 22px 25px;">
          <h4 style="font-size: 1.1rem; font-weight: 700; color: #f59e0b; margin-bottom: 8px;">Q2: What documents are required for car shipping in India?</h4>
          <p style="color: #cbd5e1; font-size: 0.92rem; line-height: 1.7;">
            You need to provide copies of: 1. Registration Certificate (RC Book), 2. Valid Car Insurance Policy, 3. PUC Certificate, and 4. Owner Photo ID proof (Aadhaar / Driving License).
          </p>
        </div>
      </div>

    </div>
  </section>

  <!-- SECTION 4: Call to Action Banner -->
  <section style="padding: 60px 0; background: linear-gradient(135deg, #1e1b4b 0%, #0f172a 100%); text-align: center;">
    <div class="container" style="max-width: 900px; margin: 0 auto; padding: 0 15px;">
      <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin-bottom: 14px;">Ship Your Car Safely Across India Today</h2>
      <p style="color: #cbd5e1; font-size: 1.05rem; margin-bottom: 28px; line-height: 1.7;">
        Get scratch-free enclosed container car transportation with live GPS tracking and full transit insurance.
      </p>
      <div style="display: flex; gap: 15px; justify-content: center; flex-wrap: wrap;">
        <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Car Transport Desk" style="padding: 15px 34px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 800; font-size: 1.05rem; text-decoration: none; display: inline-flex; align-items: center; gap: 10px; box-shadow: 0 6px 20px rgba(225, 29, 72, 0.4);">
          <i class="fas fa-phone-alt"></i> Call Helpline: <?php echo SITE_PHONE; ?>
        </a>
        <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20to%20book%20car%20transportation." title="WhatsApp Booking" target="_blank" style="padding: 15px 34px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 800; font-size: 1.05rem; text-decoration: none; display: inline-flex; align-items: center; gap: 10px; box-shadow: 0 6px 20px rgba(16, 185, 129, 0.4);">
          <i class="fab fa-whatsapp"></i> Chat on WhatsApp
        </a>
      </div>
    </div>
  </section>

</main>

<?php require_once file_exists(__DIR__ . '/../../includes/footer.php') ? __DIR__ . '/../../includes/footer.php' : $root_dir . '/includes/footer.php'; ?>
