<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "Bike Transportation in Nanded Waghala | Two-Wheeler Shifting";
$page_desc = "Professional bike transportation in Nanded Waghala, Maharashtra. Door-to-door two-wheeler parcel service with 4-layer packaging, transit insurance & IBA approved GST billing.";
$page_keywords = "bike transportation in nanded waghala, two wheeler parcel service nanded, bike shifting nanded waghala maharashtra, motorcycle transport nanded";
$canonical_url = "https://shreeashirwadpackersandmovers.com/pages/bike-transportation-in-nanded-waghala.php";

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
            SAFE TWO-WHEELER RELOCATION IN NANDED WAGHALA
          </span>
          <h1 style="font-size: 2.5rem; font-weight: 800; line-height: 1.2; margin-bottom: 20px; color: #ffffff;">
            Professional <span style="color: #f59e0b;">Bike Transportation in Nanded Waghala</span>
          </h1>
          <p style="font-size: 1.1rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 25px;">
            Relocating your motorcycle or scooter from Nanded Waghala (Marathwada, Maharashtra) to anywhere in India? Shree Ashirwad Packers and Movers provides secure enclosed carrier transport with 4-layer shock-proof packaging, door-to-door delivery, and full transit insurance.
          </p>

          <div style="display: flex; gap: 15px; flex-wrap: wrap; margin-bottom: 30px;">
            <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Now" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
              <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call: <?php echo SITE_PHONE; ?>
            </a>
            <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20need%20a%20quote%20for%20bike%20transportation%20from%20Nanded%20Waghala." title="Chat on WhatsApp" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
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
              <input type="text" name="move_from" class="form-control" value="Nanded Waghala" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
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
          <div style="font-size: 2rem; font-weight: 800; color: #f59e0b; margin-bottom: 5px;">14,200+</div>
          <div style="font-size: 0.9rem; color: #94a3b8;">Bikes Transported Nationwide</div>
        </div>
        <div class="dark-card" style="padding: 20px;">
          <div style="font-size: 2rem; font-weight: 800; color: #f59e0b; margin-bottom: 5px;">99.9%</div>
          <div style="font-size: 0.9rem; color: #94a3b8;">Damage-Free Delivery Record</div>
        </div>
        <div class="dark-card" style="padding: 20px;">
          <div style="font-size: 2rem; font-weight: 800; color: #f59e0b; margin-bottom: 5px;">100%</div>
          <div style="font-size: 0.9rem; color: #94a3b8;">Transit Risk Coverage</div>
        </div>
        <div class="dark-card" style="padding: 20px;">
          <div style="font-size: 2rem; font-weight: 800; color: #f59e0b; margin-bottom: 5px;">24/7</div>
          <div style="font-size: 0.9rem; color: #94a3b8;">GPS Tracking Assistance</div>
        </div>
      </div>
    </div>
  </section>

  <!-- 4. 6-Card Operational Value Grid -->
  <section style="padding: 60px 0; background: #1c2541;">
    <div class="container">
      <div style="text-align: center; max-width: 700px; margin: 0 auto 40px auto;">
        <h2 style="font-size: 2rem; font-weight: 700; color: #ffffff; margin-bottom: 12px;">Why Choose Our Nanded Waghala Bike Transport Services?</h2>
        <p style="color: #94a3b8;">We ensure stress-free two-wheeler shipping using specialized vehicle carriers, multi-layered protective packing, and transparent rates.</p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 25px;">
        <div class="dark-card" style="padding: 25px;">
          <div style="font-size: 1.8rem; color: #f59e0b; margin-bottom: 15px;"><i class="fas fa-shield-alt"></i></div>
          <h3 style="font-size: 1.2rem; font-weight: 700; color: #ffffff; margin-bottom: 10px;">4-Layer Armor Packaging</h3>
          <p style="color: #94a3b8; font-size: 0.92rem; line-height: 1.6;">Bubble wrap, foam sheets, heavy corrugated sheets, and waterproof stretch film protect your motorcycle from scratches and dust.</p>
        </div>
        <div class="dark-card" style="padding: 25px;">
          <div style="font-size: 1.8rem; color: #f59e0b; margin-bottom: 15px;"><i class="fas fa-truck-loading"></i></div>
          <h3 style="font-size: 1.2rem; font-weight: 700; color: #ffffff; margin-bottom: 10px;">Covered Vehicle Containers</h3>
          <p style="color: #94a3b8; font-size: 0.92rem; line-height: 1.6;">Bikes are transported inside weatherproof, enclosed car/bike carrier trucks equipped with hydraulic loading ramps.</p>
        </div>
        <div class="dark-card" style="padding: 25px;">
          <div style="font-size: 1.8rem; color: #f59e0b; margin-bottom: 15px;"><i class="fas fa-file-invoice-dollar"></i></div>
          <h3 style="font-size: 1.2rem; font-weight: 700; color: #ffffff; margin-bottom: 10px;">Full Transit Insurance & GST Bills</h3>
          <p style="color: #94a3b8; font-size: 0.92rem; line-height: 1.6;">Comprehensive transit insurance policy included with IBA-approved GST billing suitable for official claim reimbursements.</p>
        </div>
        <div class="dark-card" style="padding: 25px;">
          <div style="font-size: 1.8rem; color: #f59e0b; margin-bottom: 15px;"><i class="fas fa-door-open"></i></div>
          <h3 style="font-size: 1.2rem; font-weight: 700; color: #ffffff; margin-bottom: 10px;">Doorstep Pickup & Delivery</h3>
          <p style="color: #94a3b8; font-size: 0.92rem; line-height: 1.6;">Our team collects your bike directly from your home address in Nanded Waghala and delivers it safely to your destination.</p>
        </div>
        <div class="dark-card" style="padding: 25px;">
          <div style="font-size: 1.8rem; color: #f59e0b; margin-bottom: 15px;"><i class="fas fa-motorcycle"></i></div>
          <h3 style="font-size: 1.2rem; font-weight: 700; color: #ffffff; margin-bottom: 10px;">All Two-Wheeler Models</h3>
          <p style="color: #94a3b8; font-size: 0.92rem; line-height: 1.6;">From daily commute scooters to heavy cruisers (Royal Enfield) and premium sports bikes, we handle all models with precision.</p>
        </div>
        <div class="dark-card" style="padding: 25px;">
          <div style="font-size: 1.8rem; color: #f59e0b; margin-bottom: 15px;"><i class="fas fa-map-marked-alt"></i></div>
          <h3 style="font-size: 1.2rem; font-weight: 700; color: #ffffff; margin-bottom: 10px;">Consignment Live Tracking</h3>
          <p style="color: #94a3b8; font-size: 0.92rem; line-height: 1.6;">Receive real-time location updates via SMS and WhatsApp throughout the transit from Nanded Waghala to your destination.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- 5. 7-Layer Packaging Breakdown -->
  <section style="padding: 60px 0; background: #0b132b;">
    <div class="container">
      <div style="text-align: center; max-width: 700px; margin: 0 auto 40px auto;">
        <h2 style="font-size: 2rem; font-weight: 700; color: #ffffff; margin-bottom: 12px;">7-Layer Multi-Stage Bike Wrapping System</h2>
        <p style="color: #94a3b8;">Our systematic packaging protocol prevents scratches, dents, and transit shocks on long-distance highway routes.</p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 20px;">
        <div class="dark-card" style="padding: 20px;">
          <div style="font-weight: 700; color: #f59e0b; margin-bottom: 8px;">Layer 1: Soft Cloth Body Cover</div>
          <p style="font-size: 0.88rem; color: #94a3b8; margin: 0;">Protects fuel tank, side panels, and painted surfaces from direct contact friction.</p>
        </div>
        <div class="dark-card" style="padding: 20px;">
          <div style="font-weight: 700; color: #f59e0b; margin-bottom: 8px;">Layer 2: Air-Bubble Cushioning</div>
          <p style="font-size: 0.88rem; color: #94a3b8; margin: 0;">Heavy 80-GSM bubble sheet absorbs highway vibrations and protects fragile bodywork.</p>
        </div>
        <div class="dark-card" style="padding: 20px;">
          <div style="font-weight: 700; color: #f59e0b; margin-bottom: 8px;">Layer 3: Foam Padding for Levers & Mirrors</div>
          <p style="font-size: 0.88rem; color: #94a3b8; margin: 0;">Targeted foam protection around brake handles, clutch levers, turn indicators, and mirrors.</p>
        </div>
        <div class="dark-card" style="padding: 20px;">
          <div style="font-weight: 700; color: #f59e0b; margin-bottom: 8px;">Layer 4: Corrugated Board Casing</div>
          <p style="font-size: 0.88rem; color: #94a3b8; margin: 0;">Heavy cardboard sheet wraps around the motorcycle frame to withstand external pressure.</p>
        </div>
        <div class="dark-card" style="padding: 20px;">
          <div style="font-weight: 700; color: #f59e0b; margin-bottom: 8px;">Layer 5: Waterproof Stretch Film</div>
          <p style="font-size: 0.88rem; color: #94a3b8; margin: 0;">Seals the bike against rain, road dust, and moisture during intercity transport.</p>
        </div>
        <div class="dark-card" style="padding: 20px;">
          <div style="font-weight: 700; color: #f59e0b; margin-bottom: 8px;">Layer 6: Heavy-Duty Ratchet Straps</div>
          <p style="font-size: 0.88rem; color: #94a3b8; margin: 0;">Secures the bike upright inside the carrier truck to prevent tilting or side-shifting.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- 6. Popular Destinations / Routes Mapping Grid -->
  <section style="padding: 60px 0; background: #1c2541;">
    <div class="container">
      <div style="text-align: center; max-width: 700px; margin: 0 auto 40px auto;">
        <h2 style="font-size: 2rem; font-weight: 700; color: #ffffff; margin-bottom: 12px;">Popular Transport Routes from Nanded Waghala</h2>
        <p style="color: #94a3b8;">Regular scheduled vehicle carrier service connecting Nanded Waghala to major industrial and metro cities.</p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 15px;">
        <div class="dark-card" style="padding: 15px 20px; display: flex; justify-content: space-between; align-items: center;">
          <span style="color: #ffffff; font-weight: 600;">Nanded to Pune</span>
          <span style="color: #f59e0b; font-size: 0.85rem;">Daily Service</span>
        </div>
        <div class="dark-card" style="padding: 15px 20px; display: flex; justify-content: space-between; align-items: center;">
          <span style="color: #ffffff; font-weight: 600;">Nanded to Mumbai</span>
          <span style="color: #f59e0b; font-size: 0.85rem;">Daily Service</span>
        </div>
        <div class="dark-card" style="padding: 15px 20px; display: flex; justify-content: space-between; align-items: center;">
          <span style="color: #ffffff; font-weight: 600;">Nanded to Hyderabad</span>
          <span style="color: #f59e0b; font-size: 0.85rem;">Express Transit</span>
        </div>
        <div class="dark-card" style="padding: 15px 20px; display: flex; justify-content: space-between; align-items: center;">
          <span style="color: #ffffff; font-weight: 600;">Nanded to Nagpur</span>
          <span style="color: #f59e0b; font-size: 0.85rem;">Direct Service</span>
        </div>
        <div class="dark-card" style="padding: 15px 20px; display: flex; justify-content: space-between; align-items: center;">
          <span style="color: #ffffff; font-weight: 600;">Nanded to Bengaluru</span>
          <span style="color: #f59e0b; font-size: 0.85rem;">Scheduled Carrier</span>
        </div>
        <div class="dark-card" style="padding: 15px 20px; display: flex; justify-content: space-between; align-items: center;">
          <span style="color: #ffffff; font-weight: 600;">Nanded to Delhi NCR</span>
          <span style="color: #f59e0b; font-size: 0.85rem;">Express Transit</span>
        </div>
        <div class="dark-card" style="padding: 15px 20px; display: flex; justify-content: space-between; align-items: center;">
          <span style="color: #ffffff; font-weight: 600;">Nanded to Chhatrapati Sambhajinagar</span>
          <span style="color: #f59e0b; font-size: 0.85rem;">Same Day Dispatch</span>
        </div>
        <div class="dark-card" style="padding: 15px 20px; display: flex; justify-content: space-between; align-items: center;">
          <span style="color: #ffffff; font-weight: 600;">Nanded to Nashik</span>
          <span style="color: #f59e0b; font-size: 0.85rem;">Direct Carrier</span>
        </div>
      </div>
    </div>
  </section>

  <!-- 7. Estimated Rates Table Section -->
  <section style="padding: 60px 0; background: #0b132b;">
    <div class="container">
      <div style="text-align: center; max-width: 700px; margin: 0 auto 40px auto;">
        <h2 style="font-size: 2rem; font-weight: 700; color: #ffffff; margin-bottom: 12px;">Nanded Waghala Bike Transport Fare Estimates</h2>
        <p style="color: #94a3b8;">Transparent distance-based pricing table for two-wheeler shipping.</p>
      </div>

      <div style="overflow-x: auto;">
        <table class="table-dark-custom">
          <thead>
            <tr>
              <th>Destination Route</th>
              <th>Scooters & Light Bikes (100cc - 125cc)</th>
              <th>Standard Motorcycles (150cc - 220cc)</th>
              <th>Cruisers & Heavy Bikes (350cc+)</th>
              <th>Expected Transit Time</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Nanded to Hyderabad</td>
              <td>₹2,800 - ₹3,500</td>
              <td>₹3,200 - ₹4,200</td>
              <td>₹4,500 - ₹5,800</td>
              <td>1 - 2 Days</td>
            </tr>
            <tr>
              <td>Nanded to Pune / Mumbai</td>
              <td>₹3,500 - ₹4,500</td>
              <td>₹4,200 - ₹5,200</td>
              <td>₹5,500 - ₹7,000</td>
              <td>2 - 3 Days</td>
            </tr>
            <tr>
              <td>Nanded to Nagpur</td>
              <td>₹3,200 - ₹4,000</td>
              <td>₹3,800 - ₹4,800</td>
              <td>₹5,000 - ₹6,500</td>
              <td>2 Days</td>
            </tr>
            <tr>
              <td>Nanded to Bengaluru</td>
              <td>₹4,800 - ₹6,000</td>
              <td>₹5,500 - ₹6,800</td>
              <td>₹7,200 - ₹8,800</td>
              <td>3 - 4 Days</td>
            </tr>
            <tr>
              <td>Nanded to Delhi NCR</td>
              <td>₹6,200 - ₹7,500</td>
              <td>₹7,000 - ₹8,500</td>
              <td>₹8,800 - ₹11,000</td>
              <td>5 - 6 Days</td>
            </tr>
          </tbody>
        </table>
      </div>
      <p style="font-size: 0.85rem; color: #94a3b8; margin-top: 15px; text-align: center;">* Rates are indicative and depend on specific bike model, insurance value, and doorstep pickup location.</p>
    </div>
  </section>

  <!-- 8. Mandatory Checklist & Pre-Transport Guidelines -->
  <section style="padding: 60px 0; background: #1c2541;">
    <div class="container">
      <div style="text-align: center; max-width: 700px; margin: 0 auto 40px auto;">
        <h2 style="font-size: 2rem; font-weight: 700; color: #ffffff; margin-bottom: 12px;">Pre-Transport Checklist Before Bike Handover</h2>
        <p style="color: #94a3b8;">Please complete these safety steps prior to handover to our transport team.</p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 20px;">
        <div class="dark-card" style="padding: 20px;">
          <h4 style="font-size: 1.05rem; font-weight: 700; color: #f59e0b; margin-bottom: 10px;">1. Essential Documents</h4>
          <p style="font-size: 0.9rem; color: #cbd5e1; margin: 0;">Keep copies of Bike RC, valid Insurance Policy, and Owner Govt ID Proof ready for verification.</p>
        </div>
        <div class="dark-card" style="padding: 20px;">
          <h4 style="font-size: 1.05rem; font-weight: 700; color: #f59e0b; margin-bottom: 10px;">2. Minimal Fuel Level</h4>
          <p style="font-size: 0.9rem; color: #cbd5e1; margin: 0;">Maintain petrol level around 1 to 2 litres to comply with container truck safety standards.</p>
        </div>
        <div class="dark-card" style="padding: 20px;">
          <h4 style="font-size: 1.05rem; font-weight: 700; color: #f59e0b; margin-bottom: 10px;">3. Empty Personal Belongings</h4>
          <p style="font-size: 0.9rem; color: #cbd5e1; margin: 0;">Remove all personal items from under-seat storage or side boxes before wrapping.</p>
        </div>
        <div class="dark-card" style="padding: 20px;">
          <h4 style="font-size: 1.05rem; font-weight: 700; color: #f59e0b; margin-bottom: 10px;">4. Pre-Pickup Physical Audit</h4>
          <p style="font-size: 0.9rem; color: #cbd5e1; margin: 0;">Conduct a joint inspection with our executive and note odometer readings on the consignment receipt.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- 9. Frequently Asked Questions (FAQ) Section -->
  <section style="padding: 60px 0; background: #0b132b;">
    <div class="container" style="max-width: 850px;">
      <div style="text-align: center; margin-bottom: 40px;">
        <h2 style="font-size: 2rem; font-weight: 700; color: #ffffff; margin-bottom: 12px;">Frequently Asked Questions</h2>
        <p style="color: #94a3b8;">Answers to common questions regarding bike shifting in Nanded Waghala.</p>
      </div>

      <div class="faq-accordion">
        <div class="faq-accordion-item">
          <div class="faq-accordion-question">
            <span>How is my bike packed for safety during transport from Nanded Waghala?</span>
            <i class="fas fa-chevron-down accent-text"></i>
          </div>
          <div class="faq-accordion-answer">
            We use a 4-layer packaging protection including soft inner cloth, 80-GSM bubble wrap, corrugated cardboard sheet, and waterproof stretch film. Bikes are tied securely with ratchet belts inside covered carrier trucks.
          </div>
        </div>

        <div class="faq-accordion-item">
          <div class="faq-accordion-question">
            <span>What documents do I need to submit for bike transport in Nanded?</span>
            <i class="fas fa-chevron-down accent-text"></i>
          </div>
          <div class="faq-accordion-answer">
            You need to provide a copy of your vehicle's Registration Certificate (RC), valid Insurance copy, and Govt ID proof (Aadhaar or Driving License) of the owner.
          </div>
        </div>

        <div class="faq-accordion-item">
          <div class="faq-accordion-question">
            <span>Do you offer doorstep pickup in Nanded Waghala?</span>
            <i class="fas fa-chevron-down accent-text"></i>
          </div>
          <div class="faq-accordion-answer">
            Yes! Our pickup vehicle collects your bike directly from your home or office address in Nanded Waghala and delivers it to your destination address.
          </div>
        </div>

        <div class="faq-accordion-item">
          <div class="faq-accordion-question">
            <span>Is transit insurance provided for two-wheeler transport?</span>
            <i class="fas fa-chevron-down accent-text"></i>
          </div>
          <div class="faq-accordion-answer">
            Yes, comprehensive transit insurance is included in our price quote to protect your motorcycle against unforeseen road hazards or accidents.
          </div>
        </div>

        <div class="faq-accordion-item">
          <div class="faq-accordion-question">
            <span>How much fuel should be in the motorcycle tank?</span>
            <i class="fas fa-chevron-down accent-text"></i>
          </div>
          <div class="faq-accordion-answer">
            Keep around 1-2 litres of fuel—just enough for loading/unloading operations. Excess fuel is prohibited for safety reasons.
          </div>
        </div>

        <div class="faq-accordion-item">
          <div class="faq-accordion-question">
            <span>How long does bike delivery from Nanded to Pune or Mumbai take?</span>
            <i class="fas fa-chevron-down accent-text"></i>
          </div>
          <div class="faq-accordion-answer">
            Transit to Pune, Mumbai, or Hyderabad usually takes 2 to 3 days from the date of pickup.
          </div>
        </div>

        <div class="faq-accordion-item">
          <div class="faq-accordion-question">
            <span>Can I track my bike's shipment status?</span>
            <i class="fas fa-chevron-down accent-text"></i>
          </div>
          <div class="faq-accordion-answer">
            Yes, we offer real-time tracking updates via SMS and WhatsApp throughout the transit journey.
          </div>
        </div>

        <div class="faq-accordion-item">
          <div class="faq-accordion-question">
            <span>Do you issue IBA-approved bills for official claims?</span>
            <i class="fas fa-chevron-down accent-text"></i>
          </div>
          <div class="faq-accordion-answer">
            Yes, we provide official IBA-approved bills and GST invoices recognized by all government departments and corporate organizations.
          </div>
        </div>

        <div class="faq-accordion-item">
          <div class="faq-accordion-question">
            <span>Can you transport heavy cruisers like Royal Enfield or sports bikes?</span>
            <i class="fas fa-chevron-down accent-text"></i>
          </div>
          <div class="faq-accordion-answer">
            Yes, we specialize in transporting heavy cruisers and sports bikes using specialized crate packaging and heavy-duty wheel tiedowns.
          </div>
        </div>

        <div class="faq-accordion-item">
          <div class="faq-accordion-question">
            <span>How can I get an instant price quote for Nanded Waghala bike transport?</span>
            <i class="fas fa-chevron-down accent-text"></i>
          </div>
          <div class="faq-accordion-answer">
            Call us directly or submit your pickup/destination details in the hero form above for an immediate WhatsApp quotation.
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 10. Call-to-Action Footer Banner -->
  <section style="padding: 50px 0; background: linear-gradient(135deg, #1c2541 0%, #0b132b 100%); text-align: center; border-top: 1px solid rgba(245, 158, 11, 0.3);">
    <div class="container">
      <h2 style="font-size: 2rem; font-weight: 800; color: #ffffff; margin-bottom: 15px;">Book Bike Transportation in Nanded Waghala Today</h2>
      <p style="color: #94a3b8; font-size: 1.05rem; max-width: 650px; margin: 0 auto 25px auto;">Get instant quotes, multi-layer packaging, and insured transit for your two-wheeler with Shree Ashirwad Packers and Movers.</p>
      
      <div style="display: flex; gap: 15px; justify-content: center; flex-wrap: wrap;">
        <a href="tel:<?php echo SITE_PHONE_RAW; ?>" style="display: inline-flex; align-items: center; padding: 14px 32px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
          <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call Us: <?php echo SITE_PHONE; ?>
        </a>
        <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20to%20book%20bike%20transportation%20from%20Nanded%20Waghala." target="_blank" style="display: inline-flex; align-items: center; padding: 14px 32px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
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
      "name": "How is my bike packed for safety during transport from Nanded Waghala?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "We use a 4-layer packaging protection including soft inner cloth, 80-GSM bubble wrap, corrugated cardboard sheet, and waterproof stretch film. Bikes are tied securely with ratchet belts inside covered carrier trucks."
      }
    },
    {
      "@type": "Question",
      "name": "What documents do I need to submit for bike transport in Nanded?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "You need to provide a copy of your vehicle's Registration Certificate (RC), valid Insurance copy, and Govt ID proof (Aadhaar or Driving License) of the owner."
      }
    },
    {
      "@type": "Question",
      "name": "Do you offer doorstep pickup in Nanded Waghala?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes! Our pickup vehicle collects your bike directly from your home or office address in Nanded Waghala and delivers it to your destination address."
      }
    },
    {
      "@type": "Question",
      "name": "Is transit insurance provided for two-wheeler transport?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, comprehensive transit insurance is included in our price quote to protect your motorcycle against unforeseen road hazards or accidents."
      }
    },
    {
      "@type": "Question",
      "name": "How much fuel should be in the motorcycle tank?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Keep around 1-2 litres of fuel—just enough for loading/unloading operations. Excess fuel is prohibited for safety reasons."
      }
    },
    {
      "@type": "Question",
      "name": "How long does bike delivery from Nanded to Pune or Mumbai take?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Transit to Pune, Mumbai, or Hyderabad usually takes 2 to 3 days from the date of pickup."
      }
    },
    {
      "@type": "Question",
      "name": "Can I track my bike's shipment status?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, we offer real-time tracking updates via SMS and WhatsApp throughout the transit journey."
      }
    },
    {
      "@type": "Question",
      "name": "Do you issue IBA-approved bills for official claims?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, we provide official IBA-approved bills and GST invoices recognized by all government departments and corporate organizations."
      }
    },
    {
      "@type": "Question",
      "name": "Can you transport heavy cruisers like Royal Enfield or sports bikes?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, we specialize in transporting heavy cruisers and sports bikes using specialized crate packaging and heavy-duty wheel tiedowns."
      }
    },
    {
      "@type": "Question",
      "name": "How can I get an instant price quote for Nanded Waghala bike transport?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Call us directly or submit your pickup/destination details in the hero form above for an immediate WhatsApp quotation."
      }
    }
  ]
}
</script>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
