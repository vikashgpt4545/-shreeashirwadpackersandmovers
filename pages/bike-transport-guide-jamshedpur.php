<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "Bike Transport Guide Jamshedpur | Two-Wheeler Courier | 8409531615";
$page_desc = "Complete Bike Transport Guide in Jamshedpur. Safe two-wheeler packaging, corrugated wrapping, enclosed container courier, door-to-door delivery. Call (+91) 8409531615.";
$page_keywords = "bike transport guide jamshedpur, motorcycle courier jamshedpur, two wheeler shifting bistupur sakchi mango adityapur, bike packing parcel service jamshedpur";

$page_city = "Jamshedpur";

$faq_list = [
    ['q' => 'What documents are required for bike shipping from Jamshedpur?', 'a' => 'Copy of RC book, valid insurance policy, pollution certificate (PUC), and owner Aadhaar card copy.'],
    ['q' => 'Will my motorcycle be driven on the road?', 'a' => 'No, bikes are loaded directly into covered container vehicles after complete wrapping.'],
    ['q' => 'How to book bike courier service with Shree Ashirwad Packers?', 'a' => 'Call +91 8409531615 or message us on WhatsApp for door-step pickup booking.'],
    ['q' => 'How is a bike wrapped for transport in Jamshedpur?', 'a' => 'We use 4-layer packaging including bubble wrap, corrugated sheets, stretch film, and heavy-duty tape.'],
    ['q' => 'Do you drain the petrol tank before bike transport?', 'a' => 'Yes, petrol tanks are drained to under 1 liter to comply with national highway safety regulations.']
];

require_once __DIR__ . '/../includes/header.php';
?>

<main class="site-main">

  <!-- Visual Breadcrumb Navigation Bar -->
  <div class="breadcrumb-wrapper">
    <div class="container">
      <div class="breadcrumb-list">
        <span class="breadcrumb-item"><a href="<?php echo SITE_URL; ?>">Home</a></span>
        <span class="breadcrumb-separator">/</span>
        <span class="breadcrumb-item"><a href="<?php echo SITE_URL; ?>pages/packers-and-movers-in-jamshedpur.php">Jamshedpur</a></span>
        <span class="breadcrumb-separator">/</span>
        <span class="breadcrumb-item active">Bike Transport Guide Jamshedpur</span>
      </div>
    </div>
  </div>


  <!-- Hero Section -->
  <section class="hero-section" style="background: linear-gradient(135deg, #0b132b 0%, #1c2541 100%); padding: 60px 0; color: #ffffff;">
    <div class="container">
      <div class="hero-grid" style="display: grid; grid-template-columns: 1.2fr 0.8fr; gap: 40px; align-items: center;">
        
        <div class="hero-text">
          <span class="section-tag" style="background: rgba(245, 158, 11, 0.15); color: #f59e0b; border: 1px solid rgba(245, 158, 11, 0.4); padding: 6px 16px; border-radius: 20px; font-size: 0.85rem; font-weight: 700; text-transform: uppercase; display: inline-block; margin-bottom: 15px;">
            Two-Wheeler Logistics Guide
          </span>
          <h1 style="font-size: 2.7rem; font-weight: 800; line-height: 1.2; margin-bottom: 20px; color: #ffffff;">
            Safe <span style="color: #f59e0b;">Bike Transport Guide Jamshedpur</span>
          </h1>
          <p style="font-size: 1.08rem; color: #cbd5e1; line-height: 1.7; margin-bottom: 25px;">
            Shipping your motorcycle, sports bike, or scooter from Jamshedpur to any destination across India? Shree Ashirwad Packers provides scratch-proof 4-layer bike wrapping, fuel safety drainage, enclosed container transport, and door-to-door delivery across Bistupur, Sakchi, Mango, Adityapur, Telco, Sonari, and Kadma.
          </p>

          <div style="display: flex; gap: 15px; flex-wrap: wrap; margin-bottom: 30px;">
            <a href="tel:<?php echo SITE_PHONE_RAW; ?>" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #d32f2f 0%, #f59e0b 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(211, 47, 47, 0.4);">
              📞 Call Now: <?php echo SITE_PHONE; ?>
            </a>
            <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20need%20bike%20transport%20quote%20from%20Jamshedpur." target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
              💬 Chat on WhatsApp
            </a>
          </div>
        </div>

        <div class="hero-form-card" style="background: rgba(255, 255, 255, 0.05); backdrop-filter: blur(10px); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 16px; padding: 30px; box-shadow: 0 15px 35px rgba(0,0,0,0.4);">
          <h2 style="font-size: 1.4rem; color: #ffffff; margin-bottom: 8px; font-weight: 700; text-align: center;">Get Bike Transport Quote</h2>
          <p style="font-size: 0.85rem; color: #94a3b8; text-align: center; margin-bottom: 20px;">Receive instant bike courier pricing on WhatsApp</p>

          <form action="#" method="POST" onsubmit="sendHeroWhatsAppLead(event, this);">
            <div style="margin-bottom: 14px;">
              <input type="text" name="name" class="form-control" placeholder="Your Full Name" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="margin-bottom: 14px;">
              <input type="tel" name="phone" class="form-control" placeholder="10-Digit Phone Number" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 10px; margin-bottom: 14px;">
              <input type="text" name="move_from" class="form-control" value="Jamshedpur" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
              <input type="text" name="move_to" class="form-control" placeholder="Destination City" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <button type="submit" style="width: 100%; padding: 14px; background: linear-gradient(135deg, #d32f2f 0%, #f59e0b 100%); color: #ffffff; border: none; border-radius: 50px; font-weight: 700; font-size: 1rem; cursor: pointer;">
              Get Instant Estimate Now ➔
            </button>
          </form>
        </div>

      </div>
    </div>
  </section>

  <!-- Section 2: Stats -->
  <section style="padding: 35px 0; background: #070d19; border-bottom: 1px solid rgba(245, 158, 11, 0.2);">
    <div class="container">
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(180px, 1fr)); gap: 15px; text-align: center;">
        <div><h3 style="color: #f59e0b; font-size: 2rem; font-weight: 800;">4-Layer</h3><p style="color: #cbd5e1; font-size: 0.85rem;">Scratch-Proof Packing</p></div>
        <div><h3 style="color: #f59e0b; font-size: 2rem; font-weight: 800;">2,500+</h3><p style="color: #cbd5e1; font-size: 0.85rem;">Bikes Safely Delivered</p></div>
        <div><h3 style="color: #f59e0b; font-size: 2rem; font-weight: 800;">100%</h3><p style="color: #cbd5e1; font-size: 0.85rem;">Enclosed Container Fleet</p></div>
        <div><h3 style="color: #f59e0b; font-size: 2rem; font-weight: 800;">Door Step</h3><p style="color: #cbd5e1; font-size: 0.85rem;">Pickup &amp; Delivery</p></div>
      </div>
    </div>
  </section>

  <!-- Section 3: Bike Packing Steps -->
  <section style="padding: 60px 0; background: #ffffff;">
    <div class="container">
      <div style="max-width: 900px; margin: 0 auto;">
        
        <h2 style="font-size: 2.1rem; color: #0b132b; font-weight: 800; margin-bottom: 20px;">
          4-Step Bike Transportation Process in Jamshedpur
        </h2>

        <div style="display: flex; flex-direction: column; gap: 25px;">
          
          <div style="background: #f8fafc; padding: 25px; border-radius: 12px; border-left: 5px solid #d32f2f;">
            <h3 style="font-size: 1.3rem; color: #0b132b; margin-bottom: 10px;">1. Pre-Transport Inspection &amp; Document Check</h3>
            <p style="color: #64748b; font-size: 0.95rem; line-height: 1.7;">
              Before packing, existing scratches or dents are documented on the vehicle condition report. Photocopies of RC book, insurance policy, and owner ID are attached to the LR parcel bill.
            </p>
          </div>

          <div style="background: #f8fafc; padding: 25px; border-radius: 12px; border-left: 5px solid #f59e0b;">
            <h3 style="font-size: 1.3rem; color: #0b132b; margin-bottom: 10px;">2. Fuel Drainage &amp; Battery Safety</h3>
            <p style="color: #64748b; font-size: 0.95rem; line-height: 1.7;">
              Petrol tank is drained to under 1 liter to adhere to strict national highway fire safety standards. Rear view mirrors are dismantled and packed separately.
            </p>
          </div>

          <div style="background: #f8fafc; padding: 25px; border-radius: 12px; border-left: 5px solid #d32f2f;">
            <h3 style="font-size: 1.3rem; color: #0b132b; margin-bottom: 10px;">3. 4-Layer Heavy Duty Protective Wrapping</h3>
            <p style="color: #64748b; font-size: 0.95rem; line-height: 1.7;">
              The bike is wrapped in bubble wrap, followed by corrugated cardboard sheets on mudguards, fuel tank, and exhaust pipe, then sealed with stretch film and heavy-duty tape.
            </p>
          </div>

          <div style="background: #f8fafc; padding: 25px; border-radius: 12px; border-left: 5px solid #f59e0b;">
            <h3 style="font-size: 1.3rem; color: #0b132b; margin-bottom: 10px;">4. Belt Anchoring in Covered Container Truck</h3>
            <p style="color: #64748b; font-size: 0.95rem; line-height: 1.7;">
              Inside our covered transport container, the bike is securely fastened to side rails using heavy-duty nylon safety belts to prevent movement during transit.
            </p>
          </div>

        </div>

      </div>
    </div>
  </section>

  <!-- Section 4: Contextual Internal Links -->
  <section style="padding: 50px 0; background: #f8fafc;">
    <div class="container">
      <div style="text-align: center; max-width: 800px; margin: 0 auto 30px auto;">
        <h3 style="font-size: 1.8rem; color: #0b132b; font-weight: 800;">Related <span style="color: #d32f2f;">Vehicle Transport Guides</span></h3>
      </div>
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); gap: 15px;">
        <a href="<?php echo SITE_URL; ?>packers-and-movers-in-jamshedpur" style="background: #fff; padding: 14px; border-radius: 6px; border: 1px solid #e2e8f0; color: #0b132b; text-decoration: none; font-weight: 600; text-align: center; display: block;">📍 Movers in Jamshedpur</a>
        <a href="<?php echo SITE_URL; ?>packers-and-movers-bistupur-jamshedpur" style="background: #fff; padding: 14px; border-radius: 6px; border: 1px solid #e2e8f0; color: #0b132b; text-decoration: none; font-weight: 600; text-align: center; display: block;">📍 Movers in Bistupur</a>
        <a href="<?php echo SITE_URL; ?>car-transport-guide-jamshedpur" style="background: #fff; padding: 14px; border-radius: 6px; border: 1px solid #e2e8f0; color: #0b132b; text-decoration: none; font-weight: 600; text-align: center; display: block;">🚗 Car Transport Guide</a>
        <a href="<?php echo SITE_URL; ?>car-carrier-transport-process-jamshedpur" style="background: #fff; padding: 14px; border-radius: 6px; border: 1px solid #e2e8f0; color: #0b132b; text-decoration: none; font-weight: 600; text-align: center; display: block;">🚛 Car Carrier Process</a>
        <a href="<?php echo SITE_URL; ?>packers-and-movers-jamshedpur-cost-guide" style="background: #fff; padding: 14px; border-radius: 6px; border: 1px solid #e2e8f0; color: #0b132b; text-decoration: none; font-weight: 600; text-align: center; display: block;">💡 Shifting Cost Guide</a>
        <a href="<?php echo SITE_URL; ?>top-10-shifting-tips-packers-and-movers-in-jamshedpur" style="background: #fff; padding: 14px; border-radius: 6px; border: 1px solid #e2e8f0; color: #0b132b; text-decoration: none; font-weight: 600; text-align: center; display: block;">💡 Top 10 Shifting Tips</a>
        <a href="<?php echo SITE_URL; ?>single-item-luggage-shifting-jamshedpur" style="background: #fff; padding: 14px; border-radius: 6px; border: 1px solid #e2e8f0; color: #0b132b; text-decoration: none; font-weight: 600; text-align: center; display: block;">🧳 Single Item Shifting</a>
        <a href="<?php echo SITE_URL; ?>packers-and-movers-sakchi-jamshedpur" style="background: #fff; padding: 14px; border-radius: 6px; border: 1px solid #e2e8f0; color: #0b132b; text-decoration: none; font-weight: 600; text-align: center; display: block;">📍 Movers in Sakchi</a>
      </div>
    </div>
  </section>

  <!-- Section 5: FAQs -->
  <section style="padding: 50px 0; background: #ffffff;">
    <div class="container">
      <div style="text-align: center; max-width: 800px; margin: 0 auto 35px auto;">
        <h2 style="font-size: 2rem; color: #0b132b; font-weight: 800;">Bike Transport FAQs</h2>
      </div>
      <div style="max-width: 850px; margin: 0 auto; display: flex; flex-direction: column; gap: 12px;">
        <div style="background: #f8fafc; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0;"><h4 style="color: #0b132b;">Q1: What documents are required for bike shipping from Jamshedpur?</h4><p style="color: #64748b; font-size: 0.9rem;">Copy of RC book, valid insurance policy, pollution certificate (PUC), and owner Aadhaar card copy.</p></div>
        <div style="background: #f8fafc; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0;"><h4 style="color: #0b132b;">Q2: Will my motorcycle be driven on the road?</h4><p style="color: #64748b; font-size: 0.9rem;">No, bikes are loaded directly into covered container vehicles after complete wrapping.</p></div>
        <div style="background: #f8fafc; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0;"><h4 style="color: #0b132b;">Q3: How to book bike courier service with Shree Ashirwad Packers?</h4><p style="color: #64748b; font-size: 0.9rem;">Call <strong>+91 8409531615</strong> or message us on WhatsApp for door-step pickup booking.</p></div>
      </div>
    </div>
  </section>

  <!-- Section 6: CTA Banner -->
  <section class="cta-banner-section" style="padding: 50px 0; background: linear-gradient(135deg, #0b132b 0%, #1c2541 100%); color: #ffffff;">
    <div class="container">
      <div style="text-align: center; max-width: 800px; margin: 0 auto;">
        <h2 style="font-size: 2.1rem; font-weight: 800; margin-bottom: 15px;">Ship Your Bike Safely From Jamshedpur Today</h2>
        <div style="display: flex; gap: 15px; justify-content: center; flex-wrap: wrap;">
          <a href="tel:<?php echo SITE_PHONE_RAW; ?>" style="padding: 14px 32px; background: linear-gradient(135deg, #d32f2f 0%, #f59e0b 100%); color: #fff; border-radius: 50px; font-weight: 700; text-decoration: none;">📞 Call: <?php echo SITE_PHONE; ?></a>
          <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20need%20bike%20transport%20quote%20from%20Jamshedpur." target="_blank" style="padding: 14px 32px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #fff; border-radius: 50px; font-weight: 700; text-decoration: none;">💬 WhatsApp Quote</a>
        </div>
      </div>
    </div>
  </section>

</main>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
