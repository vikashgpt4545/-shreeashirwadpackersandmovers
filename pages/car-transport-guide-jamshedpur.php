<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "Car Transport Guide Jamshedpur | Closed Car Carrier | 8409531615";
$page_desc = "Complete Car Transport Guide in Jamshedpur. Closed hydraulic car carrier shipping, door-to-door vehicle relocation, and insurance. Call (+91) 8409531615.";
$page_keywords = "car transport guide jamshedpur, car carrier service jamshedpur, enclosed car shipping bistupur sakchi mango adityapur, vehicle logistics jamshedpur";

$page_city = "Jamshedpur";

$faq_list = [
    ['q' => 'What documents are needed to ship a car from Jamshedpur?', 'a' => 'Copy of RC book, valid vehicle insurance policy, PUC certificate, and owner ID proof.'],
    ['q' => 'Is transit insurance mandatory for car shipping?', 'a' => 'Yes, we recommend and provide comprehensive transit insurance for total peace of mind.'],
    ['q' => 'How to book car carrier service with Shree Ashirwad Packers?', 'a' => 'Call +91 8409531615 or message us on WhatsApp to book doorstep pickup.'],
    ['q' => 'Are car carrier trailers closed or open?', 'a' => 'We operate enclosed hydraulic car carriers to protect vehicles from weather, dust, and road debris.'],
    ['q' => 'Do you provide live GPS tracking for car shipments?', 'a' => 'Yes, all our car carrier trailers feature satellite GPS tracking for real-time location updates.']
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
        <span class="breadcrumb-item"><a href="<?php echo SITE_URL; ?>packers-and-movers-in-jamshedpur">Jamshedpur</a></span>
        <span class="breadcrumb-separator">/</span>
        <span class="breadcrumb-item active">Car Transport Guide Jamshedpur</span>
      </div>
    </div>
  </div>


  <!-- Hero Section -->
  <section class="hero-section" style="background: linear-gradient(135deg, #0b132b 0%, #1c2541 100%); padding: 60px 0; color: #ffffff;">
    <div class="container">
      <div class="hero-grid" style="display: grid; grid-template-columns: 1.2fr 0.8fr; gap: 40px; align-items: center;">
        
        <div class="hero-text">
          <span class="section-tag" style="background: rgba(245, 158, 11, 0.15); color: #f59e0b; border: 1px solid rgba(245, 158, 11, 0.4); padding: 6px 16px; border-radius: 20px; font-size: 0.85rem; font-weight: 700; text-transform: uppercase; display: inline-block; margin-bottom: 15px;">
            Car Logistics Specialist
          </span>
          <h1 style="font-size: 2.7rem; font-weight: 800; line-height: 1.2; margin-bottom: 20px; color: #ffffff;">
            Professional <span style="color: #f59e0b;">Car Transport Guide Jamshedpur</span>
          </h1>
          <p style="font-size: 1.08rem; color: #cbd5e1; line-height: 1.7; margin-bottom: 25px;">
            Shipping your hatchback, luxury sedan, or SUV from Jamshedpur to any major Indian city? Shree Ashirwad Packers provides closed hydraulic car carrier trailers, wheel-lock security, GPS tracking, and complete transit insurance across Bistupur, Sakchi, Mango, Adityapur, Telco, Sonari, and Kadma.
          </p>

          <div style="display: flex; gap: 15px; flex-wrap: wrap; margin-bottom: 30px;">
            <a href="tel:<?php echo SITE_PHONE_RAW; ?>" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #d32f2f 0%, #f59e0b 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(211, 47, 47, 0.4);">
              📞 Call Desk: <?php echo SITE_PHONE; ?>
            </a>
            <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20need%20car%20transport%20quote%20from%20Jamshedpur." target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
              💬 Chat on WhatsApp
            </a>
          </div>
        </div>

        <div class="hero-form-card" style="background: rgba(255, 255, 255, 0.05); backdrop-filter: blur(10px); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 16px; padding: 30px; box-shadow: 0 15px 35px rgba(0,0,0,0.4);">
          <h2 style="font-size: 1.4rem; color: #ffffff; margin-bottom: 8px; font-weight: 700; text-align: center;">Get Car Carrier Quote</h2>
          <p style="font-size: 0.85rem; color: #94a3b8; text-align: center; margin-bottom: 20px;">Receive transparent car shipping rates on WhatsApp</p>

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
        <div><h3 style="color: #f59e0b; font-size: 2rem; font-weight: 800;">Closed</h3><p style="color: #cbd5e1; font-size: 0.85rem;">Hydraulic Containers</p></div>
        <div><h3 style="color: #f59e0b; font-size: 2rem; font-weight: 800;">1,800+</h3><p style="color: #cbd5e1; font-size: 0.85rem;">Cars Safely Transported</p></div>
        <div><h3 style="color: #f59e0b; font-size: 2rem; font-weight: 800;">Wheel Lock</h3><p style="color: #cbd5e1; font-size: 0.85rem;">Zero Movement Clamp</p></div>
        <div><h3 style="color: #f59e0b; font-size: 2rem; font-weight: 800;">24/7</h3><p style="color: #cbd5e1; font-size: 0.85rem;">GPS Satellite Tracking</p></div>
      </div>
    </div>
  </section>

  <!-- Section 3: Car Carrier Workflow -->
  <section style="padding: 60px 0; background: #ffffff;">
    <div class="container">
      <div style="max-width: 900px; margin: 0 auto;">
        
        <h2 style="font-size: 2.1rem; color: #0b132b; font-weight: 800; margin-bottom: 20px;">
          How Enclosed Car Carrier Transport Works
        </h2>

        <div style="display: flex; flex-direction: column; gap: 25px;">
          
          <div style="background: #f8fafc; padding: 25px; border-radius: 12px; border-left: 5px solid #d32f2f;">
            <h3 style="font-size: 1.3rem; color: #0b132b; margin-bottom: 10px;">1. Doorstep Pickup &amp; Joint Inspection Report</h3>
            <p style="color: #64748b; font-size: 0.95rem; line-height: 1.7;">
              Our trained driver picks up your car from your residence in Jamshedpur. A joint inspection form is signed recording exact odometer reading, fuel level, body condition, and spare tire presence.
            </p>
          </div>

          <div style="background: #f8fafc; padding: 25px; border-radius: 12px; border-left: 5px solid #f59e0b;">
            <h3 style="font-size: 1.3rem; color: #0b132b; margin-bottom: 10px;">2. Hydraulic Ramp Loading</h3>
            <p style="color: #64748b; font-size: 0.95rem; line-height: 1.7;">
              Your car is driven up low-angle hydraulic ramps into multi-car enclosed carrier trucks to eliminate underbody scraping or bumper damage.
            </p>
          </div>

          <div style="background: #f8fafc; padding: 25px; border-radius: 12px; border-left: 5px solid #d32f2f;">
            <h3 style="font-size: 1.3rem; color: #0b132b; margin-bottom: 10px;">3. Wheel-Chock Clamping &amp; Belt Securing</h3>
            <p style="color: #64748b; font-size: 0.95rem; line-height: 1.7;">
              All four wheels are locked using rubber wheel chocks and heavy-duty nylon tie-down straps anchored to the trailer deck to prevent forward or backward motion.
            </p>
          </div>

          <div style="background: #f8fafc; padding: 25px; border-radius: 12px; border-left: 5px solid #f59e0b;">
            <h3 style="font-size: 1.3rem; color: #0b132b; margin-bottom: 10px;">4. Sealed Enclosed Transit with Live GPS</h3>
            <p style="color: #64748b; font-size: 0.95rem; line-height: 1.7;">
              The car carrier container is sealed against dust, rain, and road rocks. Live satellite GPS location links are shared with vehicle owners throughout the journey.
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
        <h3 style="font-size: 1.8rem; color: #0b132b; font-weight: 800;">Related <span style="color: #d32f2f;">Vehicle Logistics Services</span></h3>
      </div>
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); gap: 15px;">
        <a href="<?php echo SITE_URL; ?>packers-and-movers-in-jamshedpur" style="background: #fff; padding: 14px; border-radius: 6px; border: 1px solid #e2e8f0; color: #0b132b; text-decoration: none; font-weight: 600; text-align: center; display: block;">📍 Movers in Jamshedpur</a>
        <a href="<?php echo SITE_URL; ?>packers-and-movers-bistupur-jamshedpur" style="background: #fff; padding: 14px; border-radius: 6px; border: 1px solid #e2e8f0; color: #0b132b; text-decoration: none; font-weight: 600; text-align: center; display: block;">📍 Movers in Bistupur</a>
        <a href="<?php echo SITE_URL; ?>bike-transport-guide-jamshedpur" style="background: #fff; padding: 14px; border-radius: 6px; border: 1px solid #e2e8f0; color: #0b132b; text-decoration: none; font-weight: 600; text-align: center; display: block;">🏍️ Bike Transport Guide</a>
        <a href="<?php echo SITE_URL; ?>car-carrier-transport-process-jamshedpur" style="background: #fff; padding: 14px; border-radius: 6px; border: 1px solid #e2e8f0; color: #0b132b; text-decoration: none; font-weight: 600; text-align: center; display: block;">🚛 Car Carrier Process</a>
        <a href="<?php echo SITE_URL; ?>packers-and-movers-jamshedpur-cost-guide" style="background: #fff; padding: 14px; border-radius: 6px; border: 1px solid #e2e8f0; color: #0b132b; text-decoration: none; font-weight: 600; text-align: center; display: block;">💡 Shifting Cost Guide</a>
        <a href="<?php echo SITE_URL; ?>transit-insurance-guide-packers-movers-jamshedpur" style="background: #fff; padding: 14px; border-radius: 6px; border: 1px solid #e2e8f0; color: #0b132b; text-decoration: none; font-weight: 600; text-align: center; display: block;">🛡️ Transit Insurance Guide</a>
        <a href="<?php echo SITE_URL; ?>how-to-choose-best-packers-and-movers-in-jamshedpur" style="background: #fff; padding: 14px; border-radius: 6px; border: 1px solid #e2e8f0; color: #0b132b; text-decoration: none; font-weight: 600; text-align: center; display: block;">⭐ How to Choose Movers</a>
        <a href="<?php echo SITE_URL; ?>packers-and-movers-sakchi-jamshedpur" style="background: #fff; padding: 14px; border-radius: 6px; border: 1px solid #e2e8f0; color: #0b132b; text-decoration: none; font-weight: 600; text-align: center; display: block;">📍 Movers in Sakchi</a>
      </div>
    </div>
  </section>

  <!-- Section 5: FAQs -->
  <section style="padding: 50px 0; background: #ffffff;">
    <div class="container">
      <div style="text-align: center; max-width: 800px; margin: 0 auto 35px auto;">
        <h2 style="font-size: 2rem; color: #0b132b; font-weight: 800;">Car Transport FAQs</h2>
      </div>
      <div style="max-width: 850px; margin: 0 auto; display: flex; flex-direction: column; gap: 12px;">
        <div style="background: #f8fafc; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0;"><h4 style="color: #0b132b;">Q1: What documents are needed to ship a car from Jamshedpur?</h4><p style="color: #64748b; font-size: 0.9rem;">Copy of RC book, valid vehicle insurance policy, PUC certificate, and owner ID proof.</p></div>
        <div style="background: #f8fafc; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0;"><h4 style="color: #0b132b;">Q2: Is transit insurance mandatory for car shipping?</h4><p style="color: #64748b; font-size: 0.9rem;">Yes, we recommend and provide comprehensive transit insurance for total peace of mind.</p></div>
        <div style="background: #f8fafc; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0;"><h4 style="color: #0b132b;">Q3: How to book car carrier service with Shree Ashirwad Packers?</h4><p style="color: #64748b; font-size: 0.9rem;">Call <strong>+91 8409531615</strong> or message us on WhatsApp to book doorstep pickup.</p></div>
      </div>
    </div>
  </section>

  <!-- Section 6: CTA Banner -->
  <section class="cta-banner-section" style="padding: 50px 0; background: linear-gradient(135deg, #0b132b 0%, #1c2541 100%); color: #ffffff;">
    <div class="container">
      <div style="text-align: center; max-width: 800px; margin: 0 auto;">
        <h2 style="font-size: 2.1rem; font-weight: 800; margin-bottom: 15px;">Ship Your Car Safely From Jamshedpur Today</h2>
        <div style="display: flex; gap: 15px; justify-content: center; flex-wrap: wrap;">
          <a href="tel:<?php echo SITE_PHONE_RAW; ?>" style="padding: 14px 32px; background: linear-gradient(135deg, #d32f2f 0%, #f59e0b 100%); color: #fff; border-radius: 50px; font-weight: 700; text-decoration: none;">📞 Call: <?php echo SITE_PHONE; ?></a>
          <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20need%20car%20transport%20quote%20from%20Jamshedpur." target="_blank" style="padding: 14px 32px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #fff; border-radius: 50px; font-weight: 700; text-decoration: none;">💬 WhatsApp Quote</a>
        </div>
      </div>
    </div>
  </section>

</main>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
