<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "Bike Transportation in Namagiripettai | Two-Wheeler Shifting";
$page_desc = "Professional bike transportation in Namagiripettai, Tamil Nadu. Secure door-to-door two-wheeler relocation with 4-layer packaging, transit insurance & IBA approved GST billing.";
$page_keywords = "bike transportation in namagiripettai, two wheeler parcel service namagiripettai, bike relocation namagiripettai tamil nadu, bike movers namagiripettai, motorcycle courier namagiripettai";
$canonical_url = "https://shreeashirwadpackersandmovers.com/pages/bike-transportation-in-namagiripettai.php";

require_once __DIR__ . '/../includes/header.php';
?>

<!-- Custom Dark Mode Theme Overrides for Interstate/Locality Bike Transport Guide -->
<style>
  .dark-theme-override {
    background-color: #0b132b !important;
    color: #cbd5e1 !important;
    font-family: 'Inter', system-ui, -apple-system, sans-serif;
  }
  .dark-theme-override h1, 
  .dark-theme-override h2, 
  .dark-theme-override h3, 
  .dark-theme-override h4, 
  .dark-theme-override h5, 
  .dark-theme-override h6 {
    color: #ffffff !important;
  }
  .dark-card {
    background: #1c2541 !important;
    border: 1px solid rgba(245, 158, 11, 0.2) !important;
    border-radius: 12px !important;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
  }
  .dark-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 25px rgba(245, 158, 11, 0.15) !important;
    border-color: #f59e0b !important;
  }
  .accent-text {
    color: #f59e0b !important;
  }
  .accent-bg {
    background-color: #f59e0b !important;
    color: #0b132b !important;
  }
  .table-dark-custom {
    width: 100%;
    border-collapse: collapse;
    background: #1c2541;
    border-radius: 8px;
    overflow: hidden;
  }
  .table-dark-custom th {
    background: #0b132b;
    color: #f59e0b;
    padding: 14px;
    text-align: left;
    border-bottom: 2px solid rgba(245, 158, 11, 0.3);
  }
  .table-dark-custom td {
    padding: 12px 14px;
    border-bottom: 1px solid rgba(255, 255, 255, 0.05);
    color: #e2e8f0;
  }
  .table-dark-custom tr:hover {
    background: rgba(245, 158, 11, 0.05);
  }
  .faq-accordion-item {
    background: #1c2541;
    border: 1px solid rgba(255, 255, 255, 0.1);
    border-radius: 8px;
    margin-bottom: 12px;
    overflow: hidden;
  }
  .faq-accordion-question {
    padding: 18px 20px;
    font-weight: 700;
    color: #ffffff;
    cursor: pointer;
    display: flex;
    justify-content: space-between;
    align-items: center;
    background: rgba(255, 255, 255, 0.02);
  }
  .faq-accordion-answer {
    padding: 0 20px 18px 20px;
    color: #94a3b8;
    line-height: 1.7;
  }
</style>

<main class="site-main dark-theme-override">

  <!-- 1. Visual Breadcrumb Navigation Bar -->
  <div class="breadcrumb-wrapper" style="background: #0b132b; border-bottom: 1px solid rgba(255,255,255,0.08); padding: 12px 0;">
    <div class="container">
      <div class="breadcrumb-list" style="font-size: 0.88rem; color: #94a3b8;">
        <span class="breadcrumb-item"><a href="<?php echo SITE_URL; ?>" title="Home" style="color: #f59e0b; text-decoration: none;">Home</a></span>
        <span class="breadcrumb-separator" style="margin: 0 8px;">/</span>
        <span class="breadcrumb-item"><a href="<?php echo SITE_URL; ?>pages/bike-transportation-process.php" title="Bike Transport Services" style="color: #f59e0b; text-decoration: none;">Bike Transport</a></span>
        <span class="breadcrumb-separator" style="margin: 0 8px;">/</span>
        <span class="breadcrumb-item active" style="color: #ffffff;"><?php echo htmlspecialchars($page_title); ?></span>
      </div>
    </div>
  </div>

  <!-- 2. Hero Section with Lead Capture Form -->
  <section class="hero-section" style="background: linear-gradient(135deg, #0b132b 0%, #1c2541 100%); padding: 60px 0; color: #ffffff;">
    <div class="container">
      <div class="hero-grid" style="display: grid; grid-template-columns: 1.2fr 0.8fr; gap: 40px; align-items: center;">
        
        <!-- Hero Text Column -->
        <div class="hero-text">
          <span class="section-tag" style="background: rgba(245, 158, 11, 0.15); color: #f59e0b; border: 1px solid rgba(245, 158, 11, 0.4); padding: 6px 16px; border-radius: 20px; font-size: 0.85rem; font-weight: 700; text-transform: uppercase; display: inline-block; margin-bottom: 15px;">
            SAFE TWO-WHEELER RELOCATION IN NAMAGIRIPE TTAI
          </span>
          <h1 style="font-size: 2.5rem; font-weight: 800; line-height: 1.2; margin-bottom: 20px; color: #ffffff;">
            Reliable <span style="color: #f59e0b;">Bike Transportation in Namagiripettai</span>
          </h1>
          <p style="font-size: 1.1rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 25px;">
            Relocating your sports bike, cruiser, or scooter from Namagiripettai (Tamil Nadu) across India? Shree Ashirwad Packers and Movers offers specialized enclosed vehicle carrier transport with multi-layered protective wrapping, full transit insurance cover, and real-time tracking.
          </p>

          <div style="display: flex; gap: 15px; flex-wrap: wrap; margin-bottom: 30px;">
            <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Now" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
              <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call: <?php echo SITE_PHONE; ?>
            </a>
            <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20need%20a%20quote%20for%20bike%20transportation%20from%20Namagiripettai." title="Chat on WhatsApp" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
              <i class="fab fa-whatsapp" style="margin-right: 8px;"></i> WhatsApp Quote
            </a>
          </div>

          <div style="display: flex; gap: 20px; font-size: 0.9rem; color: #94a3b8; flex-wrap: wrap;">
            <span><strong style="color: #f59e0b;">100% Insured</strong> Transit</span>
            <span><strong style="color: #f59e0b;">4-Layer</strong> Packaging</span>
            <span><strong style="color: #f59e0b;">Door-to-Door</strong> Pickup & Delivery</span>
          </div>
        </div>

        <!-- Hero Lead Form Column -->
        <div class="hero-form-card" style="background: rgba(255, 255, 255, 0.05); backdrop-filter: blur(10px); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 16px; padding: 30px; box-shadow: 0 15px 35px rgba(0,0,0,0.4);">
          <h2 style="font-size: 1.4rem; color: #ffffff; margin-bottom: 8px; font-weight: 700; text-align: center;">Get Instant Bike Moving Quote</h2>
          <p style="font-size: 0.85rem; color: #94a3b8; text-align: center; margin-bottom: 20px;">Zero hidden costs • IBA approved documentation</p>

          <form action="#" method="POST" onsubmit="sendHeroWhatsAppLead(event, this);">
            <div style="margin-bottom: 14px;">
              <input type="text" name="name" class="form-control" placeholder="Your Full Name" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="margin-bottom: 14px;">
              <input type="tel" name="phone" class="form-control" placeholder="10-Digit Phone Number" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 10px; margin-bottom: 14px;">
              <input type="text" name="move_from" class="form-control" value="Namagiripettai" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
              <input type="text" name="move_to" class="form-control" placeholder="Destination City" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <button type="submit" style="width: 100%; padding: 14px; background: linear-gradient(135deg, #d32f2f 0%, #f59e0b 100%); color: #ffffff; border: none; border-radius: 50px; font-weight: 700; font-size: 1rem; cursor: pointer;">
              Calculate Transport Fare &rarr;
            </button>
          </form>
        </div>

      </div>
    </div>
  </section>

  <!-- 3. Key Operational Statistics Counter Section -->
  <section style="padding: 40px 0; background: #0b132b; border-bottom: 1px solid rgba(255,255,255,0.05);">
    <div class="container">
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 20px; text-align: center;">
        <div class="dark-card" style="padding: 20px;">
          <div style="font-size: 2rem; font-weight: 800; color: #f59e0b; margin-bottom: 5px;">12,500+</div>
          <div style="font-size: 0.9rem; color: #94a3b8;">Bikes Transported Nationwide</div>
        </div>
        <div class="dark-card" style="padding: 20px;">
          <div style="font-size: 2rem; font-weight: 800; color: #f59e0b; margin-bottom: 5px;">99.8%</div>
          <div style="font-size: 0.9rem; color: #94a3b8;">Damage-Free Transit Record</div>
        </div>
        <div class="dark-card" style="padding: 20px;">
          <div style="font-size: 2rem; font-weight: 800; color: #f59e0b; margin-bottom: 5px;">100%</div>
          <div style="font-size: 0.9rem; color: #94a3b8;">Insurance Claim Assistance</div>
        </div>
        <div class="dark-card" style="padding: 20px;">
          <div style="font-size: 2rem; font-weight: 800; color: #f59e0b; margin-bottom: 5px;">24/7</div>
          <div style="font-size: 0.9rem; color: #94a3b8;">Real-Time GPS Tracking</div>
        </div>
      </div>
    </div>
  </section>

  <!-- 4. 6-Card Operational Value Grid -->
  <section style="padding: 60px 0; background: #1c2541;">
    <div class="container">
      <div style="text-align: center; max-width: 700px; margin: 0 auto 40px auto;">
        <h2 style="font-size: 2rem; font-weight: 700; color: #ffffff; margin-bottom: 12px;">Why Choose Our Namagiripettai Bike Transport Services?</h2>
        <p style="color: #94a3b8;">We eliminate relocation anxiety with specialized equipment, structured loading protocols, and transparent pricing.</p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 25px;">
        <div class="dark-card" style="padding: 25px;">
          <div style="font-size: 1.8rem; color: #f59e0b; margin-bottom: 15px;"><i class="fas fa-shield-alt"></i></div>
          <h3 style="font-size: 1.2rem; font-weight: 700; color: #ffffff; margin-bottom: 10px;">4-Layer Protective Packaging</h3>
          <p style="color: #94a3b8; font-size: 0.92rem; line-height: 1.6;">Bubble wrap, foam sheets, heavy corrugated boxes, and stretch film guarantee 100% protection against scratches and transit shocks.</p>
        </div>
        <div class="dark-card" style="padding: 25px;">
          <div style="font-size: 1.8rem; color: #f59e0b; margin-bottom: 15px;"><i class="fas fa-truck-loading"></i></div>
          <h3 style="font-size: 1.2rem; font-weight: 700; color: #ffffff; margin-bottom: 10px;">Covered Hydraulic Containers</h3>
          <p style="color: #94a3b8; font-size: 0.92rem; line-height: 1.6;">Vehicles are loaded using hydraulic ramps into waterproof, dust-free covered car/bike carrier trucks for long-distance safety.</p>
        </div>
        <div class="dark-card" style="padding: 25px;">
          <div style="font-size: 1.8rem; color: #f59e0b; margin-bottom: 15px;"><i class="fas fa-file-invoice-dollar"></i></div>
          <h3 style="font-size: 1.2rem; font-weight: 700; color: #ffffff; margin-bottom: 10px;">Full Transit Insurance & GST Bills</h3>
          <p style="color: #94a3b8; font-size: 0.92rem; line-height: 1.6;">Every booking includes comprehensive transit insurance coverage and IBA-approved GST invoices eligible for corporate reimbursement.</p>
        </div>
        <div class="dark-card" style="padding: 25px;">
          <div style="font-size: 1.8rem; color: #f59e0b; margin-bottom: 15px;"><i class="fas fa-door-open"></i></div>
          <h3 style="font-size: 1.2rem; font-weight: 700; color: #ffffff; margin-bottom: 10px;">Doorstep Pickup & Delivery</h3>
          <p style="color: #94a3b8; font-size: 0.92rem; line-height: 1.6;">Our team collects your motorcycle directly from your doorstep in Namagiripettai and delivers it safely to your exact destination address.</p>
        </div>
        <div class="dark-card" style="padding: 25px;">
          <div style="font-size: 1.8rem; color: #f59e0b; margin-bottom: 15px;"><i class="fas fa-motorcycle"></i></div>
          <h3 style="font-size: 1.2rem; font-weight: 700; color: #ffffff; margin-bottom: 10px;">All Two-Wheeler Categories</h3>
          <p style="color: #94a3b8; font-size: 0.92rem; line-height: 1.6;">From daily commute scooters and commuter motorcycles to premium super-bikes and cruisers, we handle all models with equal precision.</p>
        </div>
        <div class="dark-card" style="padding: 25px;">
          <div style="font-size: 1.8rem; color: #f59e0b; margin-bottom: 15px;"><i class="fas fa-map-marked-alt"></i></div>
          <h3 style="font-size: 1.2rem; font-weight: 700; color: #ffffff; margin-bottom: 10px;">Live GPS Consignment Tracking</h3>
          <p style="color: #94a3b8; font-size: 0.92rem; line-height: 1.6;">Stay continuously updated on your vehicle's location with automated SMS notifications and active WhatsApp tracking support.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- 5. 7-Layer Packaging Breakdown -->
  <section style="padding: 60px 0; background: #0b132b;">
    <div class="container">
      <div style="text-align: center; max-width: 700px; margin: 0 auto 40px auto;">
        <h2 style="font-size: 2rem; font-weight: 700; color: #ffffff; margin-bottom: 12px;">7-Layer Multi-Stage Bike Wrapping System</h2>
        <p style="color: #94a3b8;">How we safeguard your two-wheeler against bumps, moisture, dust, and highway vibrations.</p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 20px;">
        <div class="dark-card" style="padding: 20px;">
          <div style="font-weight: 700; color: #f59e0b; margin-bottom: 8px;">Layer 1: Soft Cloth Base Layer</div>
          <p style="font-size: 0.88rem; color: #94a3b8; margin: 0;">Covers painted bodywork, fuel tank, and fairings to prevent direct friction and dust abrasion.</p>
        </div>
        <div class="dark-card" style="padding: 20px;">
          <div style="font-weight: 700; color: #f59e0b; margin-bottom: 8px;">Layer 2: High-Density Bubble Wrap</div>
          <p style="font-size: 0.88rem; color: #94a3b8; margin: 0;">Thick air-bubble sheet absorbs kinetic shocks during road transit and prevents dents.</p>
        </div>
        <div class="dark-card" style="padding: 20px;">
          <div style="font-weight: 700; color: #f59e0b; margin-bottom: 8px;">Layer 3: Foam Padding for Levers & Mirrors</div>
          <p style="font-size: 0.88rem; color: #94a3b8; margin: 0;">Extra foam cushioning around brake levers, clutch assembly, indicators, and rearview mirrors.</p>
        </div>
        <div class="dark-card" style="padding: 20px;">
          <div style="font-weight: 700; color: #f59e0b; margin-bottom: 8px;">Layer 4: Heavy Corrugated Sheet Wrapping</div>
          <p style="font-size: 0.88rem; color: #94a3b8; margin: 0;">Rigid cardboard sheets encase the motorcycle frame to guard against external structural pressure.</p>
        </div>
        <div class="dark-card" style="padding: 20px;">
          <div style="font-weight: 700; color: #f59e0b; margin-bottom: 8px;">Layer 5: Waterproof Stretch Film</div>
          <p style="font-size: 0.88rem; color: #94a3b8; margin: 0;">Industrial-grade plastic stretch wrap seals the entire packaging against rain, moisture, and road grime.</p>
        </div>
        <div class="dark-card" style="padding: 20px;">
          <div style="font-weight: 700; color: #f59e0b; margin-bottom: 8px;">Layer 6: Heavy-Duty Tie-Down Straps</div>
          <p style="font-size: 0.88rem; color: #94a3b8; margin: 0;">Non-abrasive nylon ratchet belts lock the bike upright inside the carrier truck to eliminate tilting.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- 6. Popular Destinations / Routes Mapping Grid -->
  <section style="padding: 60px 0; background: #1c2541;">
    <div class="container">
      <div style="text-align: center; max-width: 700px; margin: 0 auto 40px auto;">
        <h2 style="font-size: 2rem; font-weight: 700; color: #ffffff; margin-bottom: 12px;">Major Bike Transport Routes from Namagiripettai</h2>
        <p style="color: #94a3b8;">Regular scheduled vehicle carrier service from Namagiripettai to major metro hubs across India.</p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 15px;">
        <div class="dark-card" style="padding: 15px 20px; display: flex; justify-content: space-between; align-items: center;">
          <span style="color: #ffffff; font-weight: 600;">Namagiripettai to Chennai</span>
          <span style="color: #f59e0b; font-size: 0.85rem;">Daily Service</span>
        </div>
        <div class="dark-card" style="padding: 15px 20px; display: flex; justify-content: space-between; align-items: center;">
          <span style="color: #ffffff; font-weight: 600;">Namagiripettai to Bengaluru</span>
          <span style="color: #f59e0b; font-size: 0.85rem;">Daily Service</span>
        </div>
        <div class="dark-card" style="padding: 15px 20px; display: flex; justify-content: space-between; align-items: center;">
          <span style="color: #ffffff; font-weight: 600;">Namagiripettai to Hyderabad</span>
          <span style="color: #f59e0b; font-size: 0.85rem;">Direct Transit</span>
        </div>
        <div class="dark-card" style="padding: 15px 20px; display: flex; justify-content: space-between; align-items: center;">
          <span style="color: #ffffff; font-weight: 600;">Namagiripettai to Mumbai</span>
          <span style="color: #f59e0b; font-size: 0.85rem;">Scheduled Carrier</span>
        </div>
        <div class="dark-card" style="padding: 15px 20px; display: flex; justify-content: space-between; align-items: center;">
          <span style="color: #ffffff; font-weight: 600;">Namagiripettai to Delhi NCR</span>
          <span style="color: #f59e0b; font-size: 0.85rem;">Express Transit</span>
        </div>
        <div class="dark-card" style="padding: 15px 20px; display: flex; justify-content: space-between; align-items: center;">
          <span style="color: #ffffff; font-weight: 600;">Namagiripettai to Coimbatore</span>
          <span style="color: #f59e0b; font-size: 0.85rem;">Local Express</span>
        </div>
        <div class="dark-card" style="padding: 15px 20px; display: flex; justify-content: space-between; align-items: center;">
          <span style="color: #ffffff; font-weight: 600;">Namagiripettai to Madurai</span>
          <span style="color: #f59e0b; font-size: 0.85rem;">Same Day Delivery</span>
        </div>
        <div class="dark-card" style="padding: 15px 20px; display: flex; justify-content: space-between; align-items: center;">
          <span style="color: #ffffff; font-weight: 600;">Namagiripettai to Kolkata</span>
          <span style="color: #f59e0b; font-size: 0.85rem;">Long-Haul Carrier</span>
        </div>
      </div>
    </div>
  </section>

  <!-- 7. Estimated Rates Table Section -->
  <section style="padding: 60px 0; background: #0b132b;">
    <div class="container">
      <div style="text-align: center; max-width: 700px; margin: 0 auto 40px auto;">
        <h2 style="font-size: 2rem; font-weight: 700; color: #ffffff; margin-bottom: 12px;">Namagiripettai Bike Transport Rate Sheet</h2>
        <p style="color: #94a3b8;">Transparent estimated pricing based on distance, engine capacity, and packaging selection.</p>
      </div>

      <div style="overflow-x: auto;">
        <table class="table-dark-custom">
          <thead>
            <tr>
              <th>Destination City</th>
              <th>Standard Scooters (Up to 125cc)</th>
              <th>Commuter Bikes (150cc - 200cc)</th>
              <th>Royal Enfield / Sports Bikes</th>
              <th>Estimated Delivery Time</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Namagiripettai to Bengaluru</td>
              <td>₹2,800 - ₹3,500</td>
              <td>₹3,200 - ₹4,200</td>
              <td>₹4,500 - ₹5,800</td>
              <td>1 - 2 Days</td>
            </tr>
            <tr>
              <td>Namagiripettai to Chennai</td>
              <td>₹3,000 - ₹3,800</td>
              <td>₹3,500 - ₹4,500</td>
              <td>₹4,800 - ₹6,000</td>
              <td>1 - 2 Days</td>
            </tr>
            <tr>
              <td>Namagiripettai to Hyderabad</td>
              <td>₹4,200 - ₹5,200</td>
              <td>₹4,800 - ₹6,000</td>
              <td>₹6,200 - ₹7,800</td>
              <td>3 - 4 Days</td>
            </tr>
            <tr>
              <td>Namagiripettai to Mumbai / Pune</td>
              <td>₹5,500 - ₹6,800</td>
              <td>₹6,200 - ₹7,500</td>
              <td>₹7,800 - ₹9,500</td>
              <td>4 - 5 Days</td>
            </tr>
            <tr>
              <td>Namagiripettai to Delhi / Gurgaon</td>
              <td>₹6,500 - ₹8,000</td>
              <td>₹7,200 - ₹8,800</td>
              <td>₹9,000 - ₹11,500</td>
              <td>5 - 7 Days</td>
            </tr>
          </tbody>
        </table>
      </div>
      <p style="font-size: 0.85rem; color: #94a3b8; margin-top: 15px; text-align: center;">* Rates are indicative and may vary slightly based on seasonal demand, insurance value, and specific pick-up locations.</p>
    </div>
  </section>

  <!-- 8. Mandatory Checklist & Pre-Transport Guidelines -->
  <section style="padding: 60px 0; background: #1c2541;">
    <div class="container">
      <div style="text-align: center; max-width: 700px; margin: 0 auto 40px auto;">
        <h2 style="font-size: 2rem; font-weight: 700; color: #ffffff; margin-bottom: 12px;">Pre-Transport Checklist for Bike Handover</h2>
        <p style="color: #94a3b8;">Essential steps to ensure smooth customs compliance and safe vehicle transit.</p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 20px;">
        <div class="dark-card" style="padding: 20px;">
          <h4 style="font-size: 1.05rem; font-weight: 700; color: #f59e0b; margin-bottom: 10px;">1. Required Documentation</h4>
          <p style="font-size: 0.9rem; color: #cbd5e1; margin: 0;">Provide photocopies of Bike RC, valid Insurance Policy, and Owner's Government ID Proof (Aadhaar / Driving License).</p>
        </div>
        <div class="dark-card" style="padding: 20px;">
          <h4 style="font-size: 1.05rem; font-weight: 700; color: #f59e0b; margin-bottom: 10px;">2. Fuel Tank Draining</h4>
          <p style="font-size: 0.9rem; color: #cbd5e1; margin: 0;">Keep petrol level under 1-2 litres. Excess fuel poses a fire hazard inside closed trucks and is prohibited by transport regulations.</p>
        </div>
        <div class="dark-card" style="padding: 20px;">
          <h4 style="font-size: 1.05rem; font-weight: 700; color: #f59e0b; margin-bottom: 10px;">3. Personal Items Removal</h4>
          <p style="font-size: 0.9rem; color: #cbd5e1; margin: 0;">Remove all personal items from storage boxes, helmets, and toolkits. Lock all side boxes securely before handover.</p>
        </div>
        <div class="dark-card" style="padding: 20px;">
          <h4 style="font-size: 1.05rem; font-weight: 700; color: #f59e0b; margin-bottom: 10px;">4. Inspection & Joint Inspection</h4>
          <p style="font-size: 0.9rem; color: #cbd5e1; margin: 0;">Conduct a joint physical inspection with our supervisor, record existing scratches/odometer reading on the consignment note.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- 9. Frequently Asked Questions (FAQ) Section -->
  <section style="padding: 60px 0; background: #0b132b;">
    <div class="container" style="max-width: 850px;">
      <div style="text-align: center; margin-bottom: 40px;">
        <h2 style="font-size: 2rem; font-weight: 700; color: #ffffff; margin-bottom: 12px;">Frequently Asked Questions</h2>
        <p style="color: #94a3b8;">Got questions about bike transportation in Namagiripettai? Here are answers to common queries.</p>
      </div>

      <div class="faq-accordion">
        <div class="faq-accordion-item">
          <div class="faq-accordion-question">
            <span>How is my bike protected during long-distance transit from Namagiripettai?</span>
            <i class="fas fa-chevron-down accent-text"></i>
          </div>
          <div class="faq-accordion-answer">
            We utilize a 4-layer wrapping process combining soft inner cloth, air-bubble sheets, corrugated cardboard, and waterproof stretch film. Bikes are tied securely with non-abrasive ratchet belts inside covered carrier trucks.
          </div>
        </div>

        <div class="faq-accordion-item">
          <div class="faq-accordion-question">
            <span>What documents are required to book bike parcel service in Namagiripettai?</span>
            <i class="fas fa-chevron-down accent-text"></i>
          </div>
          <div class="faq-accordion-answer">
            You need to submit copies of your Registration Certificate (RC), valid vehicle insurance document, and ID proof (Aadhaar Card or Driving License) of the sender.
          </div>
        </div>

        <div class="faq-accordion-item">
          <div class="faq-accordion-question">
            <span>Do you provide doorstep pickup and delivery in Namagiripettai?</span>
            <i class="fas fa-chevron-down accent-text"></i>
          </div>
          <div class="faq-accordion-answer">
            Yes! Our pickup vehicle will collect your two-wheeler directly from your address in Namagiripettai and deliver it safely to the doorstep of your destination address.
          </div>
        </div>

        <div class="faq-accordion-item">
          <div class="faq-accordion-question">
            <span>Is transit insurance included in the quoted charges?</span>
            <i class="fas fa-chevron-down accent-text"></i>
          </div>
          <div class="faq-accordion-answer">
            Yes, comprehensive transit insurance cover is included in our formal price quote. It protects your vehicle against unforeseen road accidents, natural disasters, or transit mishaps.
          </div>
        </div>

        <div class="faq-accordion-item">
          <div class="faq-accordion-question">
            <span>How much fuel should be left in the bike before transport?</span>
            <i class="fas fa-chevron-down accent-text"></i>
          </div>
          <div class="faq-accordion-answer">
            We recommend leaving approximately 1 litre of petrol in the tank—just enough to load and unload the vehicle on and off ramps.
          </div>
        </div>

        <div class="faq-accordion-item">
          <div class="faq-accordion-question">
            <span>How long does bike transportation from Namagiripettai to Bangalore or Chennai take?</span>
            <i class="fas fa-chevron-down accent-text"></i>
          </div>
          <div class="faq-accordion-answer">
            Transit to nearby hubs like Bengaluru or Chennai typically takes 1 to 2 business days after pickup, depending on truck dispatch schedules.
          </div>
        </div>

        <div class="faq-accordion-item">
          <div class="faq-accordion-question">
            <span>Can I track my bike during transit?</span>
            <i class="fas fa-chevron-down accent-text"></i>
          </div>
          <div class="faq-accordion-answer">
            Yes! We provide live consignment tracking details and dedicated WhatsApp support so you can get real-time location updates of your vehicle.
          </div>
        </div>

        <div class="faq-accordion-item">
          <div class="faq-accordion-question">
            <span>Do you provide IBA approved bills for corporate relocation claims?</span>
            <i class="fas fa-chevron-down accent-text"></i>
          </div>
          <div class="faq-accordion-answer">
            Yes, Shree Ashirwad Packers and Movers provides official IBA-approved bills and GST invoices recognized by all government departments and corporate firms.
          </div>
        </div>

        <div class="faq-accordion-item">
          <div class="faq-accordion-question">
            <span>What happens if my bike incurs damage during transportation?</span>
            <i class="fas fa-chevron-down accent-text"></i>
          </div>
          <div class="faq-accordion-answer">
            In the rare event of minor transit damage, our team assists you directly with filing and resolving insurance claims under our transit insurance coverage policy.
          </div>
        </div>

        <div class="faq-accordion-item">
          <div class="faq-accordion-question">
            <span>How far in advance should I book the transport service?</span>
            <i class="fas fa-chevron-down accent-text"></i>
          </div>
          <div class="faq-accordion-answer">
            Booking 24 to 48 hours in advance ensures guaranteed truck slot assignment and timely doorstep pickup in Namagiripettai.
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 10. Call-to-Action Footer Banner -->
  <section style="padding: 50px 0; background: linear-gradient(135deg, #1c2541 0%, #0b132b 100%); text-align: center; border-top: 1px solid rgba(245, 158, 11, 0.3);">
    <div class="container">
      <h2 style="font-size: 2rem; font-weight: 800; color: #ffffff; margin-bottom: 15px;">Ready to Transport Your Bike from Namagiripettai?</h2>
      <p style="color: #94a3b8; font-size: 1.05rem; max-width: 650px; margin: 0 auto 25px auto;">Get safe, insured, and affordable two-wheeler relocation services with Shree Ashirwad Packers and Movers today.</p>
      
      <div style="display: flex; gap: 15px; justify-content: center; flex-wrap: wrap;">
        <a href="tel:<?php echo SITE_PHONE_RAW; ?>" style="display: inline-flex; align-items: center; padding: 14px 32px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
          <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call Us: <?php echo SITE_PHONE; ?>
        </a>
        <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20to%20book%20bike%20transportation%20from%20Namagiripettai." target="_blank" style="display: inline-flex; align-items: center; padding: 14px 32px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
          <i class="fab fa-whatsapp" style="margin-right: 8px;"></i> Instant WhatsApp Booking
        </a>
      </div>
    </div>
  </section>

</main>

<!-- 11. FAQPage JSON-LD Schema (10 Items) -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "How is my bike protected during long-distance transit from Namagiripettai?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "We utilize a 4-layer wrapping process combining soft inner cloth, air-bubble sheets, corrugated cardboard, and waterproof stretch film. Bikes are tied securely with non-abrasive ratchet belts inside covered carrier trucks."
      }
    },
    {
      "@type": "Question",
      "name": "What documents are required to book bike parcel service in Namagiripettai?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "You need to submit copies of your Registration Certificate (RC), valid vehicle insurance document, and ID proof (Aadhaar Card or Driving License) of the sender."
      }
    },
    {
      "@type": "Question",
      "name": "Do you provide doorstep pickup and delivery in Namagiripettai?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes! Our pickup vehicle will collect your two-wheeler directly from your address in Namagiripettai and deliver it safely to the doorstep of your destination address."
      }
    },
    {
      "@type": "Question",
      "name": "Is transit insurance included in the quoted charges?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, comprehensive transit insurance cover is included in our formal price quote. It protects your vehicle against unforeseen road accidents, natural disasters, or transit mishaps."
      }
    },
    {
      "@type": "Question",
      "name": "How much fuel should be left in the bike before transport?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "We recommend leaving approximately 1 litre of petrol in the tank—just enough to load and unload the vehicle on and off ramps."
      }
    },
    {
      "@type": "Question",
      "name": "How long does bike transportation from Namagiripettai to Bangalore or Chennai take?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Transit to nearby hubs like Bengaluru or Chennai typically takes 1 to 2 business days after pickup, depending on truck dispatch schedules."
      }
    },
    {
      "@type": "Question",
      "name": "Can I track my bike during transit?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes! We provide live consignment tracking details and dedicated WhatsApp support so you can get real-time location updates of your vehicle."
      }
    },
    {
      "@type": "Question",
      "name": "Do you provide IBA approved bills for corporate relocation claims?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, Shree Ashirwad Packers and Movers provides official IBA-approved bills and GST invoices recognized by all government departments and corporate firms."
      }
    },
    {
      "@type": "Question",
      "name": "What happens if my bike incurs damage during transportation?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "In the rare event of minor transit damage, our team assists you directly with filing and resolving insurance claims under our transit insurance coverage policy."
      }
    },
    {
      "@type": "Question",
      "name": "How far in advance should I book the transport service?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Booking 24 to 48 hours in advance ensures guaranteed truck slot assignment and timely doorstep pickup in Namagiripettai."
      }
    }
  ]
}
</script>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
