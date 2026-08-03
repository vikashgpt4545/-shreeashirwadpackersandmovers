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

  <!-- Specialized Car Carrier Overview Box -->
  <section style="padding: 50px 0; background: linear-gradient(145deg, #0b132b 0%, #172a54 100%); border-bottom: 1px solid rgba(245, 158, 11, 0.3); color: #ffffff;">
    <div class="container" style="max-width: 950px;">
      <h3 style="color: #f59e0b; font-size: 1.4rem; font-weight: 700; margin-bottom: 14px;">Closed Car Carrier Shipping &amp; Intercity Car Logistics Jamshedpur</h3>
      <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.7; margin-bottom: 14px;">
        Transporting your private vehicle—whether a compact hatchback, premium sedan, luxury SUV, or vintage car—from Jamshedpur requires specialized auto-transport machinery and rigid security protocols. Shree Ashirwad Packers and Movers provides professional <strong>car transport guide services in Jamshedpur</strong> using multi-car enclosed hydraulic trailers, custom single-car car containers, and wheel-lock tie-down systems that safeguard your car against highway vibration, road debris, rain spray, and paint scratches.
      </p>
      <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.7; margin-bottom: 14px;">
        Our vehicle shipping operations span all residential and industrial neighborhoods across East Singhbhum including Bistupur, Sakchi, Mango, Adityapur, Telco, Sonari, Kadma, Jugsalai, Golmuri, Baridih, and Sundarnagar. We connect Jamshedpur to major Indian metropolitan cities like Kolkata, Ranchi, Patna, Bhubaneswar, Delhi NCR, Mumbai, Pune, Bangalore, Hyderabad, and Chennai with daily scheduled car carrier trips.
      </p>
      <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.7; margin-bottom: 14px;">
        Unlike open tow trucks or amateur driving drivers who add unnecessary kilometer mileage and wear-and-tear to your odometer, our closed car carrier trailers transport your vehicle 100% off the road. Before loading, a comprehensive joint vehicle condition report (Car Inspection Sheat) is documented, recording exact odometer readings, fuel levels, exterior scratches, and spare accessories.
      </p>
      <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.7; margin-bottom: 14px;">
        Every car carrier unit is fitted with satellite GPS tracking devices enabling 24/7 real-time location monitoring for vehicle owners. All vehicle transport bookings are backed by official GST invoices, consignment Lorry Receipts (LR), and optional 100% all-risk transit insurance policies backed by leading national insurance partners.
      </p>
      <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.7; margin-bottom: 14px;">
        Vehicle relocation logistics in Jamshedpur require specialized handling due to tight turning radiuses in older residential layouts like Sakchi or Bistupur and heavy industrial container traffic along the Tata-Kandra main road. Our experienced car carriers operate dedicated feeder towing vehicles to safely collect cars from narrow city streets and transfer them to long-distance enclosed car trailers parked at main highway terminals.
      </p>
      <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.7; margin-bottom: 14px;">
        Furthermore, our vehicle care personnel conduct full pre-transit cleaning, tire pressure checks, battery maintenance checks, and protective polythene covering over car seats, steering wheels, and floor carpets to ensure your car arrives at the destination in factory-clean condition.
      </p>
      <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.7; margin-bottom: 14px;">
        We also assist corporate executives, Tata Steel employees, bank officers, and defense personnel transferring out of Jamshedpur with official vehicle transport bills, consignment notes, and NOC clearance advice required for inter-state vehicle registration transfer at destination RTO offices.
      </p>
      <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.7; margin-bottom: 14px;">
        With over 15 years of operational experience transporting over 1,800 vehicles across India without a single major damage claim, Shree Ashirwad Packers stands as the most trusted name in professional car carrier logistics in Jharkhand.
      </p>
      <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.7; margin: 0;">
        Review our detailed car transport workflow, protection standards, city-wise rate matrix, document requirements, and car carrier FAQs below.
      </p>
    </div>
  </section>

  <!-- Section 2: Stats -->
  <section style="padding: 35px 0; background: #070d19; border-bottom: 1px solid rgba(245, 158, 11, 0.2);">
    <div class="container">
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(160px, 1fr)); gap: 15px; text-align: center;">
        <div><h3 style="color: #f59e0b; font-size: 2rem; font-weight: 800;">Closed</h3><p style="color: #cbd5e1; font-size: 0.85rem;">Hydraulic Containers</p></div>
        <div><h3 style="color: #f59e0b; font-size: 2rem; font-weight: 800;">1,800+</h3><p style="color: #cbd5e1; font-size: 0.85rem;">Cars Safely Transported</p></div>
        <div><h3 style="color: #f59e0b; font-size: 2rem; font-weight: 800;">Wheel Lock</h3><p style="color: #cbd5e1; font-size: 0.85rem;">Zero Movement Anchors</p></div>
        <div><h3 style="color: #f59e0b; font-size: 2rem; font-weight: 800;">24/7</h3><p style="color: #cbd5e1; font-size: 0.85rem;">Satellite GPS Tracking</p></div>
        <div><h3 style="color: #f59e0b; font-size: 2rem; font-weight: 800;">100%</h3><p style="color: #cbd5e1; font-size: 0.85rem;">Doorstep Pickup &amp; Delivery</p></div>
        <div><h3 style="color: #f59e0b; font-size: 2rem; font-weight: 800;">Full</h3><p style="color: #cbd5e1; font-size: 0.85rem;">All-Risk Transit Insurance</p></div>
      </div>
    </div>
  </section>

  <!-- Section 3: 6-Card Feature Grid -->
  <section style="padding: 60px 0; background: #ffffff;">
    <div class="container">
      <div style="text-align: center; max-width: 800px; margin: 0 auto 40px auto;">
        <span style="color: #d32f2f; font-weight: 700; text-transform: uppercase; font-size: 0.85rem;">Logistics Excellence</span>
        <h2 style="font-size: 2.1rem; color: #0b132b; font-weight: 800; margin-top: 5px;">
          Enclosed Car Carrier Features in <span style="color: #d32f2f;">Jamshedpur</span>
        </h2>
        <p style="color: #64748b; font-size: 0.98rem; margin-top: 8px;">
          State-of-the-art hydraulic vehicle transport trailers designed for maximum automotive safety during long-distance highway travel.
        </p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 25px; margin-bottom: 40px;">
        <div style="background: #f8fafc; padding: 25px; border-radius: 12px; border-top: 4px solid #d32f2f; box-shadow: 0 4px 15px rgba(0,0,0,0.05);">
          <h3 style="font-size: 1.15rem; color: #0b132b; margin-bottom: 8px; font-weight: 700;">Closed Hydraulic Trailers</h3>
          <p style="color: #64748b; font-size: 0.9rem; line-height: 1.6;">Fully enclosed metallic car carrier trailers preventing sun exposure, highway dust, flying gravel, rain water spray, and scratch risks.</p>
        </div>
        <div style="background: #f8fafc; padding: 25px; border-radius: 12px; border-top: 4px solid #f59e0b; box-shadow: 0 4px 15px rgba(0,0,0,0.05);">
          <h3 style="font-size: 1.15rem; color: #0b132b; margin-bottom: 8px; font-weight: 700;">Wheel-Chock &amp; Belt Securing</h3>
          <p style="color: #64748b; font-size: 0.9rem; line-height: 1.6;">All four wheels are locked onto the steel trailer deck using heavy rubber chocks and heavy-duty nylon ratchet tie-down straps.</p>
        </div>
        <div style="background: #f8fafc; padding: 25px; border-radius: 12px; border-top: 4px solid #d32f2f; box-shadow: 0 4px 15px rgba(0,0,0,0.05);">
          <h3 style="font-size: 1.15rem; color: #0b132b; margin-bottom: 8px; font-weight: 700;">Satellite GPS Live Tracking</h3>
          <p style="color: #64748b; font-size: 0.9rem; line-height: 1.6;">Real-time GPS tracking shared directly with car owners to monitor vehicle location and transit milestones across national highways.</p>
        </div>
        <div style="background: #f8fafc; padding: 25px; border-radius: 12px; border-top: 4px solid #f59e0b; box-shadow: 0 4px 15px rgba(0,0,0,0.05);">
          <h3 style="font-size: 1.15rem; color: #0b132b; margin-bottom: 8px; font-weight: 700;">Joint Car Inspection Sheet</h3>
          <p style="color: #64748b; font-size: 0.9rem; line-height: 1.6;">Detailed pre-loading vehicle condition report documenting existing minor scratches, odometer reading, fuel level, and accessories.</p>
        </div>
        <div style="background: #f8fafc; padding: 25px; border-radius: 12px; border-top: 4px solid #d32f2f; box-shadow: 0 4px 15px rgba(0,0,0,0.05);">
          <h3 style="font-size: 1.15rem; color: #0b132b; margin-bottom: 8px; font-weight: 700;">Doorstep Pickup &amp; Handover</h3>
          <p style="color: #64748b; font-size: 0.9rem; line-height: 1.6;">Convenient door-to-door vehicle delivery service from your residence in Jamshedpur to your exact address in the destination city.</p>
        </div>
        <div style="background: #f8fafc; padding: 25px; border-radius: 12px; border-top: 4px solid #f59e0b; box-shadow: 0 4px 15px rgba(0,0,0,0.05);">
          <h3 style="font-size: 1.15rem; color: #0b132b; margin-bottom: 8px; font-weight: 700;">All-Risk Transit Insurance</h3>
          <p style="color: #64748b; font-size: 0.9rem; line-height: 1.6;">Comprehensive insurance policy covering total loss, fire damage, theft, and highway accident risks throughout the transit period.</p>
        </div>
      </div>

      <!-- Specialized Vehicle Category Grid -->
      <div style="margin-bottom: 40px; background: linear-gradient(135deg, #070d19 0%, #172a54 100%); padding: 30px; border-radius: 16px; border: 1px solid rgba(245, 158, 11, 0.3); color: #ffffff;">
        <h3 style="color: #f59e0b; font-size: 1.4rem; font-weight: 800; text-align: center; margin-bottom: 20px;">
          Vehicle Category &amp; Specialized Handling Protocols
        </h3>
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 20px;">
          <div style="background: rgba(255,255,255,0.04); padding: 18px; border-radius: 10px; border-left: 4px solid #d32f2f;">
            <h4 style="color: #ffffff; font-size: 1.05rem; margin: 0 0 6px 0;">Hatchbacks &amp; Compact Cars</h4>
            <p style="color: #cbd5e1; font-size: 0.88rem; line-height: 1.6; margin: 0;">Swift, i20, WagonR, Tiago. Loaded onto upper or lower decks with rubber ramp extensions for smooth ground clearance protection.</p>
          </div>
          <div style="background: rgba(255,255,255,0.04); padding: 18px; border-radius: 10px; border-left: 4px solid #f59e0b;">
            <h4 style="color: #ffffff; font-size: 1.05rem; margin: 0 0 6px 0;">Sedans &amp; Premium Cars</h4>
            <p style="color: #cbd5e1; font-size: 0.88rem; line-height: 1.6; margin: 0;">City, Verna, Ciaz, Octavia. Wrapped with protective steering wheel and gear shift covers, anchored with 4-point wheel harnesses.</p>
          </div>
          <div style="background: rgba(255,255,255,0.04); padding: 18px; border-radius: 10px; border-left: 4px solid #d32f2f;">
            <h4 style="color: #ffffff; font-size: 1.05rem; margin: 0 0 6px 0;">Compact &amp; Full-Size SUVs</h4>
            <p style="color: #cbd5e1; font-size: 0.88rem; line-height: 1.6; margin: 0;">Creta, Brezza, Harrier, Fortuner, Scorpio. Loaded in high-roof container bays with heavy-duty suspension lashing systems.</p>
          </div>
          <div style="background: rgba(255,255,255,0.04); padding: 18px; border-radius: 10px; border-left: 4px solid #f59e0b;">
            <h4 style="color: #ffffff; font-size: 1.05rem; margin: 0 0 6px 0;">Luxury &amp; Imported Cars</h4>
            <p style="color: #cbd5e1; font-size: 0.88rem; line-height: 1.6; margin: 0;">Mercedes, BMW, Audi, Jaguar, Volvo. Shipped in dedicated single-car closed containers with air-ride suspension systems.</p>
          </div>
        </div>
      </div>

      <!-- 7-Layer Vehicle Protection Architecture -->
      <div style="background: #070d19; padding: 35px; border-radius: 16px; border: 1px solid rgba(245, 158, 11, 0.3); color: #ffffff; margin-bottom: 40px;">
        <h3 style="color: #f59e0b; font-size: 1.5rem; font-weight: 800; text-align: center; margin-bottom: 20px;">
          7-Layer Automotive Safety &amp; Protection Architecture
        </h3>
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 15px;">
          <div style="background: rgba(255,255,255,0.03); padding: 16px; border-radius: 8px; border-left: 4px solid #f59e0b;"><h4 style="color: #f59e0b; margin-bottom: 4px; font-size: 0.98rem;">Layer 1: Joint Inspection &amp; Odometer Record</h4><p style="color: #cbd5e1; font-size: 0.85rem; line-height: 1.5; margin: 0;">Pre-trip inspection form logging exact mileage, fuel level, tools, and body condition.</p></div>
          <div style="background: rgba(255,255,255,0.03); padding: 16px; border-radius: 8px; border-left: 4px solid #f59e0b;"><h4 style="color: #f59e0b; margin-bottom: 4px; font-size: 0.98rem;">Layer 2: Interior Protective Sheeting</h4><p style="color: #cbd5e1; font-size: 0.85rem; line-height: 1.5; margin: 0;">Disposable plastic seat covers, steering wheel wraps, and floor mat shields placed inside.</p></div>
          <div style="background: rgba(255,255,255,0.03); padding: 16px; border-radius: 8px; border-left: 4px solid #f59e0b;"><h4 style="color: #f59e0b; margin-bottom: 4px; font-size: 0.98rem;">Layer 3: Bumper &amp; Mirror Protective Foam</h4><p style="color: #cbd5e1; font-size: 0.85rem; line-height: 1.5; margin: 0;">Bubble wrap and foam padding applied to front/rear bumpers and folded side mirrors.</p></div>
          <div style="background: rgba(255,255,255,0.03); padding: 16px; border-radius: 8px; border-left: 4px solid #f59e0b;"><h4 style="color: #f59e0b; margin-bottom: 4px; font-size: 0.98rem;">Layer 4: Hydraulic Low-Angle Ramp Loading</h4><p style="color: #cbd5e1; font-size: 0.85rem; line-height: 1.5; margin: 0;">Precision hydraulic ramps guaranteeing smooth drive-up without ground scraping.</p></div>
          <div style="background: rgba(255,255,255,0.03); padding: 16px; border-radius: 8px; border-left: 4px solid #f59e0b;"><h4 style="color: #f59e0b; margin-bottom: 4px; font-size: 0.98rem;">Layer 5: 4-Point Wheel Chock &amp; Belt Anchoring</h4><p style="color: #cbd5e1; font-size: 0.85rem; line-height: 1.5; margin: 0;">Rubber chocks and heavy nylon ratchet belts locking all 4 wheels to the steel bed.</p></div>
          <div style="background: rgba(255,255,255,0.03); padding: 16px; border-radius: 8px; border-left: 4px solid #f59e0b;"><h4 style="color: #f59e0b; margin-bottom: 4px; font-size: 0.98rem;">Layer 6: Enclosed Metallic Container Seal</h4><p style="color: #cbd5e1; font-size: 0.85rem; line-height: 1.5; margin: 0;">Weather-tight double rear door lock preventing dust, rain, and road flying stones.</p></div>
          <div style="background: rgba(255,255,255,0.03); padding: 16px; border-radius: 8px; border-left: 4px solid #f59e0b;"><h4 style="color: #f59e0b; margin-bottom: 4px; font-size: 0.98rem;">Layer 7: Satellite GPS Beacon &amp; Insurance</h4><p style="color: #cbd5e1; font-size: 0.85rem; line-height: 1.5; margin: 0;">Live tracking monitoring link and full transit policy coverage active throughout journey.</p></div>
        </div>
      </div>
    </div>
  </section>

  <!-- Car Transport Rate Guide Section -->
  <section style="padding: 60px 0; background: #0b132b; color: #ffffff;">
    <div class="container" style="max-width: 950px;">
      <div style="text-align: center; margin-bottom: 40px;">
        <span style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Car Transport Pricing</span>
        <h2 style="font-size: 2.1rem; font-weight: 800; color: #ffffff; margin-top: 8px;">
          Estimated Car Transport Rates from Jamshedpur
        </h2>
        <p style="color: #cbd5e1; font-size: 0.95rem; margin-top: 8px;">
          Transparent, distance-based car carrier pricing including doorstep pickup and delivery.
        </p>
      </div>

      <!-- Pricing Table Box -->
      <div style="background: rgba(255,255,255,0.04); border: 1px solid rgba(245,158,11,0.25); border-radius: 12px; padding: 25px; margin-bottom: 35px;">
        <h3 style="color: #f59e0b; font-size: 1.25rem; font-weight: 700; margin-bottom: 16px;">Car Shipping Tariff Chart (Jamshedpur to Major Destinations)</h3>
        <div style="overflow-x: auto;">
          <table style="width: 100%; border-collapse: collapse; color: #cbd5e1; font-size: 0.9rem;">
            <thead>
              <tr style="background: rgba(245,158,11,0.15); color: #f59e0b; text-align: left;">
                <th style="padding: 12px; border: 1px solid rgba(245,158,11,0.3);">Destination City</th>
                <th style="padding: 12px; border: 1px solid rgba(245,158,11,0.3);">Hatchback Rate</th>
                <th style="padding: 12px; border: 1px solid rgba(245,158,11,0.3);">Sedan / Crossover</th>
                <th style="padding: 12px; border: 1px solid rgba(245,158,11,0.3);">SUV / 7-Seater</th>
                <th style="padding: 12px; border: 1px solid rgba(245,158,11,0.3);">Est. Delivery Time</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td style="padding: 10px; border: 1px solid rgba(255,255,255,0.1);">Jamshedpur to Ranchi / Patna</td>
                <td style="padding: 10px; border: 1px solid rgba(255,255,255,0.1);">₹4,500 - ₹6,500</td>
                <td style="padding: 10px; border: 1px solid rgba(255,255,255,0.1);">₹5,500 - ₹7,500</td>
                <td style="padding: 10px; border: 1px solid rgba(255,255,255,0.1);">₹6,500 - ₹9,000</td>
                <td style="padding: 10px; border: 1px solid rgba(255,255,255,0.1);">1 - 2 Days</td>
              </tr>
              <tr style="background: rgba(255,255,255,0.02);">
                <td style="padding: 10px; border: 1px solid rgba(255,255,255,0.1);">Jamshedpur to Kolkata / Cuttack</td>
                <td style="padding: 10px; border: 1px solid rgba(255,255,255,0.1);">₹5,000 - ₹7,500</td>
                <td style="padding: 10px; border: 1px solid rgba(255,255,255,0.1);">₹6,500 - ₹8,500</td>
                <td style="padding: 10px; border: 1px solid rgba(255,255,255,0.1);">₹7,500 - ₹10,500</td>
                <td style="padding: 10px; border: 1px solid rgba(255,255,255,0.1);">2 - 3 Days</td>
              </tr>
              <tr>
                <td style="padding: 10px; border: 1px solid rgba(255,255,255,0.1);">Jamshedpur to Delhi NCR</td>
                <td style="padding: 10px; border: 1px solid rgba(255,255,255,0.1);">₹8,500 - ₹12,000</td>
                <td style="padding: 10px; border: 1px solid rgba(255,255,255,0.1);">₹10,500 - ₹14,000</td>
                <td style="padding: 10px; border: 1px solid rgba(255,255,255,0.1);">₹12,500 - ₹16,500</td>
                <td style="padding: 10px; border: 1px solid rgba(255,255,255,0.1);">4 - 5 Days</td>
              </tr>
              <tr style="background: rgba(255,255,255,0.02);">
                <td style="padding: 10px; border: 1px solid rgba(255,255,255,0.1);">Jamshedpur to Bangalore / Hyderabad</td>
                <td style="padding: 10px; border: 1px solid rgba(255,255,255,0.1);">₹11,000 - ₹15,000</td>
                <td style="padding: 10px; border: 1px solid rgba(255,255,255,0.1);">₹13,000 - ₹17,500</td>
                <td style="padding: 10px; border: 1px solid rgba(255,255,255,0.1);">₹15,000 - ₹20,000</td>
                <td style="padding: 10px; border: 1px solid rgba(255,255,255,0.1);">5 - 7 Days</td>
              </tr>
              <tr>
                <td style="padding: 10px; border: 1px solid rgba(255,255,255,0.1);">Jamshedpur to Mumbai / Pune</td>
                <td style="padding: 10px; border: 1px solid rgba(255,255,255,0.1);">₹12,000 - ₹16,000</td>
                <td style="padding: 10px; border: 1px solid rgba(255,255,255,0.1);">₹14,000 - ₹18,500</td>
                <td style="padding: 10px; border: 1px solid rgba(255,255,255,0.1);">₹16,500 - ₹22,000</td>
                <td style="padding: 10px; border: 1px solid rgba(255,255,255,0.1);">5 - 7 Days</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

      <!-- Detail Guide Grid -->
      <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 25px;">
        <div style="background: rgba(255,255,255,0.04); border: 1px solid rgba(245,158,11,0.2); padding: 22px; border-radius: 10px;">
          <h4 style="color: #f59e0b; font-size: 1.1rem; margin-bottom: 10px;">Essential Documentation Required</h4>
          <p style="color: #cbd5e1; font-size: 0.9rem; line-height: 1.6; margin: 0;">
            1. Copy of Vehicle Registration Certificate (RC Book)<br>
            2. Valid Vehicle Insurance Policy Copy<br>
            3. Pollution Under Control (PUC) Certificate<br>
            4. Government ID Proof of Vehicle Owner (Aadhaar / PAN)
          </p>
        </div>
        <div style="background: rgba(255,255,255,0.04); border: 1px solid rgba(245,158,11,0.2); padding: 22px; border-radius: 10px;">
          <h4 style="color: #f59e0b; font-size: 1.1rem; margin-bottom: 10px;">Customer Pre-Transport Checklist</h4>
          <p style="color: #cbd5e1; font-size: 0.9rem; line-height: 1.6; margin: 0;">
            1. Keep fuel level at approximately 10-15 liters (¼ tank).<br>
            2. Remove all personal belongings, cash, and loose items.<br>
            3. Ensure battery is charged and tires have correct pressure.<br>
            4. Fold side mirrors and deactivate car alarm system.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- 4-Step Car Carrier Operational Process -->
  <section style="padding: 60px 0; background: #ffffff;">
    <div class="container">
      <div style="text-align: center; max-width: 800px; margin: 0 auto 40px auto;">
        <span style="color: #d32f2f; font-weight: 700; text-transform: uppercase; font-size: 0.85rem;">SOP Workflow</span>
        <h2 style="font-size: 2.1rem; color: #0b132b; font-weight: 800; margin-top: 5px;">
          4-Step Car Relocation Operational Process
        </h2>
      </div>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 20px;">
        <div style="background: #f8fafc; padding: 25px; border-radius: 12px; border-left: 4px solid #d32f2f;">
          <span style="color: #f59e0b; font-weight: 800; font-size: 0.85rem;">STEP 1</span>
          <h3 style="font-size: 1.15rem; color: #0b132b; margin: 8px 0 6px 0; font-weight: 700;">Doorstep Inspection</h3>
          <p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin: 0;">Our driver conducts a joint inspection at your Jamshedpur residence, recording odometer, fuel level, and scratches on the inspection form.</p>
        </div>
        <div style="background: #f8fafc; padding: 25px; border-radius: 12px; border-left: 4px solid #f59e0b;">
          <span style="color: #f59e0b; font-weight: 800; font-size: 0.85rem;">STEP 2</span>
          <h3 style="font-size: 1.15rem; color: #0b132b; margin: 8px 0 6px 0; font-weight: 700;">Hydraulic Ramp Loading</h3>
          <p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin: 0;">Car is driven up hydraulic ramps into closed container trailers and locked using rubber wheel chocks and 4-point nylon harnesses.</p>
        </div>
        <div style="background: #f8fafc; padding: 25px; border-radius: 12px; border-left: 4px solid #d32f2f;">
          <span style="color: #f59e0b; font-weight: 800; font-size: 0.85rem;">STEP 3</span>
          <h3 style="font-size: 1.15rem; color: #0b132b; margin: 8px 0 6px 0; font-weight: 700;">Enclosed Highway Transit</h3>
          <p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin: 0;">The sealed car carrier container navigates national highways with 24/7 satellite GPS tracking updates provided to the car owner.</p>
        </div>
        <div style="background: #f8fafc; padding: 25px; border-radius: 12px; border-left: 4px solid #f59e0b;">
          <span style="color: #f59e0b; font-weight: 800; font-size: 0.85rem;">STEP 4</span>
          <h3 style="font-size: 1.15rem; color: #0b132b; margin: 8px 0 6px 0; font-weight: 700;">Destination Handover</h3>
          <p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin: 0;">Car is unloaded at your destination address, re-inspected against the origin report, and key handover is completed smoothly.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 4: Contextual Internal Links -->
  <section style="padding: 50px 0; background: #f8fafc;">
    <div class="container">
      <div style="text-align: center; max-width: 800px; margin: 0 auto 30px auto;">
        <h3 style="font-size: 1.8rem; color: #0b132b; font-weight: 800;">Explore Related <span style="color: #d32f2f;">Vehicle &amp; Logistics Guides</span></h3>
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

  <!-- Expanded 10-Item Car Transport FAQs -->
  <section style="padding: 50px 0; background: #ffffff;">
    <div class="container">
      <div style="text-align: center; max-width: 800px; margin: 0 auto 35px auto;">
        <h2 style="font-size: 2rem; color: #0b132b; font-weight: 800;">Car Transport FAQs</h2>
      </div>
      <div style="max-width: 850px; margin: 0 auto; display: flex; flex-direction: column; gap: 12px;">
        <div style="background: #f8fafc; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0;"><h4 style="color: #0b132b; font-weight: 700;">Q1: What documents are required to ship a car from Jamshedpur?</h4><p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin-top: 6px;">You need copies of your vehicle Registration Certificate (RC), active motor insurance policy, Pollution Under Control (PUC) certificate, and government photo ID proof of the owner.</p></div>
        <div style="background: #f8fafc; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0;"><h4 style="color: #0b132b; font-weight: 700;">Q2: Are car carrier trucks open tow trucks or closed trailers?</h4><p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin-top: 6px;">We operate 100% enclosed hydraulic car carrier containers that shield vehicles completely from dust, highway stones, sun heat, and rain spray.</p></div>
        <div style="background: #f8fafc; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0;"><h4 style="color: #0b132b; font-weight: 700;">Q3: How is my car prevented from moving inside the truck during transit?</h4><p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin-top: 6px;">All 4 wheels are locked onto the steel trailer bed using heavy rubber wheel chocks and 4-point nylon ratchet tie-down straps anchored securely.</p></div>
        <div style="background: #f8fafc; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0;"><h4 style="color: #0b132b; font-weight: 700;">Q4: Can I keep personal luggage or household items inside the car?</h4><p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin-top: 6px;">For safety and RTO compliance, we advise keeping the car interior empty. Small non-valuable items inside the boot may be permitted after inspection.</p></div>
        <div style="background: #f8fafc; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0;"><h4 style="color: #0b132b; font-weight: 700;">Q5: How much fuel should be left in the car tank before handover?</h4><p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin-top: 6px;">Keep approximately 10 to 15 liters of fuel (about ¼ tank) so the car can be driven onto and off the hydraulic trailer decks safely.</p></div>
        <div style="background: #f8fafc; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0;"><h4 style="color: #0b132b; font-weight: 700;">Q6: How can I track my car during intercity transit?</h4><p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin-top: 6px;">Every car carrier vehicle is fitted with satellite GPS. We provide a live tracking link or daily location updates via WhatsApp and phone SMS.</p></div>
        <div style="background: #f8fafc; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0;"><h4 style="color: #0b132b; font-weight: 700;">Q7: Is transit insurance mandatory for car transportation?</h4><p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin-top: 6px;">Yes, comprehensive 3% all-risk transit insurance is strongly recommended and provided to protect full vehicle value against accident or disaster.</p></div>
        <div style="background: #f8fafc; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0;"><h4 style="color: #0b132b; font-weight: 700;">Q8: How long does car delivery take from Jamshedpur to metro cities?</h4><p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin-top: 6px;">Delivery takes 1-2 days for regional routes (Ranchi, Patna), 2-3 days for Kolkata, 4-5 days for Delhi NCR, and 5-7 days for Bangalore, Mumbai, or Pune.</p></div>
        <div style="background: #f8fafc; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0;"><h4 style="color: #0b132b; font-weight: 700;">Q9: What is the vehicle inspection report signed during pickup?</h4><p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin-top: 6px;">It is a joint document signed by you and our driver listing existing body scratches, odometer reading, fuel level, battery, and spare tire presence.</p></div>
        <div style="background: #f8fafc; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0;"><h4 style="color: #0b132b; font-weight: 700;">Q10: How do I book car carrier service with Shree Ashirwad Packers in Jamshedpur?</h4><p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin-top: 6px;">Call <strong>+91 8409531615</strong> or message us on WhatsApp to book doorstep pickup and receive an instant transparent car shipping quotation.</p></div>
        <div style="background: #f8fafc; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0;"><h4 style="color: #0b132b; font-weight: 700;">Q11: Are luxury vehicles shipped in single-car or multi-car carriers?</h4><p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin-top: 6px;">We offer dedicated single-car covered trailers for ultra-luxury brands (Mercedes, BMW, Audi, Porsche) as well as cost-effective spots in multi-car enclosed carriers.</p></div>
        <div style="background: #f8fafc; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0;"><h4 style="color: #0b132b; font-weight: 700;">Q12: What happens if there are narrow streets near my home in Jamshedpur?</h4><p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin-top: 6px;">If 40-foot car carriers cannot enter narrow lanes in Sakchi or Jugsalai, our driver uses a dedicated flatbed feeder tow truck to collect your car from your door.</p></div>
        <div style="background: #f8fafc; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0;"><h4 style="color: #0b132b; font-weight: 700;">Q13: Do you handle electric vehicle (EV) car transportation from Jamshedpur?</h4><p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin-top: 6px;">Yes, we safely transport Electric Vehicles (EVs). Battery power isolation guidelines and specialized wheel-tie straps are used during EV car shipping.</p></div>
        <div style="background: #f8fafc; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0;"><h4 style="color: #0b132b; font-weight: 700;">Q14: Are toll taxes and state transit permits included in the car shipping quote?</h4><p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin-top: 6px;">Yes, all national highway FASTag tolls, state border taxes, and interstate transit permit fees are 100% included in our upfront quotation with zero hidden fees.</p></div>
        <div style="background: #f8fafc; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0;"><h4 style="color: #0b132b; font-weight: 700;">Q15: What safety measures are taken during monsoon car transport from Jamshedpur?</h4><p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin-top: 6px;">Car carriers are double-sealed with heavy rubber weather-stripping seals to prevent rainwater entering the trailer bed, ensuring your car remains completely dry throughout transit across flooded national highways and rainwater logged corridors.</p></div>
      </div>
    </div>
  </section>

  <!-- Section 6: CTA Banner -->
  <section class="cta-banner-section" style="padding: 50px 0; background: linear-gradient(135deg, #0b132b 0%, #1c2541 100%); color: #ffffff;">
    <div class="container">
      <div style="text-align: center; max-width: 800px; margin: 0 auto;">
        <h2 style="font-size: 2.1rem; font-weight: 800; margin-bottom: 15px;">Ship Your Car Safely From Jamshedpur Today</h2>
        <p style="color: #cbd5e1; font-size: 0.98rem; margin-bottom: 25px;">Closed hydraulic car carriers with wheel locks, live GPS tracking, and insurance.</p>
        <div style="display: flex; gap: 15px; justify-content: center; flex-wrap: wrap;">
          <a href="tel:<?php echo SITE_PHONE_RAW; ?>" style="padding: 14px 32px; background: linear-gradient(135deg, #d32f2f 0%, #f59e0b 100%); color: #fff; border-radius: 50px; font-weight: 700; text-decoration: none;">📞 Call: <?php echo SITE_PHONE; ?></a>
          <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20need%20car%20transport%20quote%20from%20Jamshedpur." target="_blank" style="padding: 14px 32px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #fff; border-radius: 50px; font-weight: 700; text-decoration: none;">💬 WhatsApp Quote</a>
        </div>
      </div>
    </div>
  </section>

</main>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
