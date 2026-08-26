<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "Bike Transportation in Bandipore | Safe Two-Wheeler Shifting J&K";
$page_desc = "Planning bike transportation in Bandipore (Jammu & Kashmir)? Get safe, insured, and doorstep motorcycle shifting. High-quality multi-layer packing and real-time tracking.";
$page_keywords = "bike transportation in bandipore, best bike transportation in bandipore, affordable bike transportation in bandipore, packers and movers in bandipore, motorcycle transport bandipore jk, doorstep bike transport bandipore, shree ashirwad bike transportation in bandipore";
$canonical_url = "https://shreeashirwadpackersandmovers.com/pages/bike-transportation-in-bandipore.php";

require_once __DIR__ . '/../includes/header.php';
?>

<main class="site-main" style="background-color: #0b132b; color: #cbd5e1; font-family: 'Inter', system-ui, -apple-system, sans-serif;">

  <!-- Visual Breadcrumb Navigation Bar -->
  <div class="breadcrumb-wrapper" style="background: #0f172a; border-bottom: 1px solid rgba(255,255,255,0.08); padding: 14px 0;">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
      <div class="breadcrumb-list" style="display: flex; gap: 8px; align-items: center; font-size: 0.9rem; color: #94a3b8;">
        <span class="breadcrumb-item"><a href="<?php echo SITE_URL; ?>" title="Home" style="color: #f59e0b; text-decoration: none;">Home</a></span>
        <span class="breadcrumb-separator">/</span>
        <span class="breadcrumb-item active" style="color: #cbd5e1;"><?php echo htmlspecialchars($page_title); ?></span>
      </div>
    </div>
  </div>

  <!-- Hero Section with Lead Form -->
  <section class="hero-section" style="background: linear-gradient(135deg, #0b132b 0%, #1c2541 100%); padding: 60px 0; color: #ffffff; border-bottom: 1px solid rgba(255,255,255,0.05);">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
      <div class="hero-grid" style="display: grid; grid-template-columns: 1.2fr 0.8fr; gap: 40px; align-items: center;">
        
        <!-- Hero Text Column -->
        <div class="hero-text">
          <span class="section-tag" style="background: rgba(245, 158, 11, 0.15); color: #f59e0b; border: 1px solid rgba(245, 158, 11, 0.4); padding: 6px 16px; border-radius: 20px; font-size: 0.85rem; font-weight: 700; text-transform: uppercase; display: inline-block; margin-bottom: 15px;">
            BIKE TRANSPORTATION BANDIPORE RELOCATION SPECIALISTS
          </span>
          <h1 style="font-size: 2.7rem; font-weight: 800; line-height: 1.2; margin-bottom: 20px; color: #ffffff;">
            Professional <span style="color: #f59e0b;">Bike Transportation in Bandipore</span>
          </h1>
          <p style="font-size: 1.12rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 25px;">
            Looking for reliable bike transport in Bandipore, Jammu & Kashmir? Shree Ashirwad Packers and Movers provides multi-layer protected, zero-scratch two-wheeler carrier services connecting Bandipore with Srinagar, Jammu, Delhi, and all major cities across India.
          </p>

          <div style="display: flex; gap: 15px; flex-wrap: wrap; margin-bottom: 30px;">
            <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Now" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
              <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call Now: <?php echo SITE_PHONE; ?>
            </a>
            <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20a%20bike%20transportation%20quote%20from%20Bandipore." title="Chat on WhatsApp" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
              <i class="fab fa-whatsapp" style="margin-right: 8px;"></i> Chat on WhatsApp
            </a>
          </div>

          <div style="display: flex; gap: 20px; font-size: 0.9rem; color: #94a3b8; flex-wrap: wrap;">
            <span><strong style="color: #f59e0b;">100% Insured</strong> Shifting</span>
            <span><strong style="color: #f59e0b;">7-Layer</strong> Heavy Packaging</span>
            <span><strong style="color: #f59e0b;">Door-to-Door</strong> Pickup & Delivery</span>
          </div>
        </div>

        <!-- Hero Lead Form Column -->
        <div class="hero-form-card" style="background: rgba(255, 255, 255, 0.05); backdrop-filter: blur(10px); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 16px; padding: 30px; box-shadow: 0 15px 35px rgba(0,0,0,0.4);">
          <h2 style="font-size: 1.4rem; color: #ffffff; margin-bottom: 8px; font-weight: 700; text-align: center;">Get Bandipore Shifting Quote</h2>
          <p style="font-size: 0.85rem; color: #94a3b8; text-align: center; margin-bottom: 20px;">Receive transparent cost estimation on WhatsApp in 2 minutes</p>

          <form action="#" method="POST" onsubmit="sendHeroWhatsAppLead(event, this);">
            <div style="margin-bottom: 14px;">
              <input type="text" name="name" class="form-control" placeholder="Your Full Name" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="margin-bottom: 14px;">
              <input type="tel" name="phone" class="form-control" placeholder="10-Digit Phone Number" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 10px; margin-bottom: 14px;">
              <input type="text" name="move_from" class="form-control" value="Bandipore" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
              <input type="text" name="move_to" class="form-control" placeholder="Destination City" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <button type="submit" style="width: 100%; padding: 14px; background: linear-gradient(135deg, #d32f2f 0%, #f59e0b 100%); color: #ffffff; border: none; border-radius: 50px; font-weight: 700; font-size: 1rem; cursor: pointer;">
              Get Instant Estimate Now &rarr;
            </button>
          </form>
        </div>

      </div>
    </div>
  </section>

  <!-- Section 2: Trusted Relocation Track Record & Stats -->
  <section class="stats-section" style="padding: 50px 0; background: #0f172a; border-bottom: 1px solid rgba(255,255,255,0.05);">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 25px; text-align: center;">
        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 12px; padding: 25px;">
          <div style="font-size: 2.5rem; font-weight: 800; color: #f59e0b; margin-bottom: 5px;">12,500+</div>
          <div style="font-size: 0.95rem; color: #94a3b8;">Bikes Successfully Transported</div>
        </div>
        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 12px; padding: 25px;">
          <div style="font-size: 2.5rem; font-weight: 800; color: #f59e0b; margin-bottom: 5px;">100%</div>
          <div style="font-size: 0.95rem; color: #94a3b8;">Transit Insurance Coverage</div>
        </div>
        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 12px; padding: 25px;">
          <div style="font-size: 2.5rem; font-weight: 800; color: #f59e0b; margin-bottom: 5px;">15+</div>
          <div style="font-size: 0.95rem; color: #94a3b8;">Years Experience in J&K Relocation</div>
        </div>
        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 12px; padding: 25px;">
          <div style="font-size: 2.5rem; font-weight: 800; color: #f59e0b; margin-bottom: 5px;">4.9 / 5</div>
          <div style="font-size: 0.95rem; color: #94a3b8;">Customer Satisfaction Score</div>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 3: Overview & Local Expertise -->
  <section class="overview-section" style="padding: 60px 0; background: #0b132b; border-bottom: 1px solid rgba(255,255,255,0.05);">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
      <div style="max-width: 850px; margin: 0 auto; text-align: center; margin-bottom: 40px;">
        <h2 style="font-size: 2.2rem; font-weight: 700; color: #ffffff; margin-bottom: 15px;">
          Bandipore's Trusted Two-Wheeler Logistics Partner
        </h2>
        <p style="font-size: 1.05rem; color: #cbd5e1; line-height: 1.8;">
          Moving a bike out of Bandipore or transporting a vehicle into the Kashmir valley requires expert handling, appropriate weather proofing, and robust closed-car carriers. Shree Ashirwad Packers and Movers specializes in safe, damage-free bike relocation from Bandipore to any nationwide destination.
        </p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px; margin-top: 30px;">
        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(245,158,11,0.2); border-radius: 12px; padding: 30px;">
          <h3 style="font-size: 1.3rem; color: #f59e0b; margin-bottom: 12px;">Doorstep Pickup in Bandipore</h3>
          <p style="font-size: 0.95rem; color: #94a3b8; line-height: 1.7;">
            We offer direct door pickup service from all parts of Bandipore including Main Town, Plan Bandipore, Nussu, Aloosa, Ashtangoo, and nearby areas across the district.
          </p>
        </div>
        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(245,158,11,0.2); border-radius: 12px; padding: 30px;">
          <h3 style="font-size: 1.3rem; color: #f59e0b; margin-bottom: 12px;">Valley & Highway Network</h3>
          <p style="font-size: 0.95rem; color: #94a3b8; line-height: 1.7;">
            Our streamlined transit route runs via Srinagar-Bandipore highway connecting directly to NH-44, providing rapid dispatch to Jammu, Punjab, Delhi NCR, and rest of India.
          </p>
        </div>
        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(245,158,11,0.2); border-radius: 12px; padding: 30px;">
          <h3 style="font-size: 1.3rem; color: #f59e0b; margin-bottom: 12px;">All Two-Wheeler Types</h3>
          <p style="font-size: 0.95rem; color: #94a3b8; line-height: 1.7;">
            From standard commuter motorcycles and scooters to heavy Royal Enfield cruisers and premium sports bikes, we possess specialized chocks and harness systems.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 4: Key Features Grid -->
  <section class="features-section" style="padding: 60px 0; background: #0f172a; border-bottom: 1px solid rgba(255,255,255,0.05);">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
      <h2 style="font-size: 2.2rem; font-weight: 700; color: #ffffff; text-align: center; margin-bottom: 40px;">
        Why Choose Our Bandipore Bike Transport Service?
      </h2>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 25px;">
        <div style="background: #0b132b; border: 1px solid rgba(255,255,255,0.08); border-radius: 12px; padding: 25px;">
          <div style="width: 50px; height: 50px; background: rgba(245,158,11,0.15); border-radius: 10px; display: flex; align-items: center; justify-content: center; margin-bottom: 18px; color: #f59e0b; font-size: 1.4rem;">
            <i class="fas fa-shield-alt"></i>
          </div>
          <h3 style="font-size: 1.2rem; color: #ffffff; margin-bottom: 10px;">Full Transit Insurance</h3>
          <p style="font-size: 0.9rem; color: #94a3b8; line-height: 1.6;"> Comprehensive coverage protecting your motorcycle against unexpected road hazards or natural weather conditions.</p>
        </div>

        <div style="background: #0b132b; border: 1px solid rgba(255,255,255,0.08); border-radius: 12px; padding: 25px;">
          <div style="width: 50px; height: 50px; background: rgba(245,158,11,0.15); border-radius: 10px; display: flex; align-items: center; justify-content: center; margin-bottom: 18px; color: #f59e0b; font-size: 1.4rem;">
            <i class="fas fa-box"></i>
          </div>
          <h3 style="font-size: 1.2rem; color: #ffffff; margin-bottom: 10px;">Multi-Layer Packing</h3>
          <p style="font-size: 0.9rem; color: #94a3b8; line-height: 1.6;"> High-density bubble wrap, corrugated cardboard, stretch film, and corner protectors safeguard paint and bodywork.</p>
        </div>

        <div style="background: #0b132b; border: 1px solid rgba(255,255,255,0.08); border-radius: 12px; padding: 25px;">
          <div style="width: 50px; height: 50px; background: rgba(245,158,11,0.15); border-radius: 10px; display: flex; align-items: center; justify-content: center; margin-bottom: 18px; color: #f59e0b; font-size: 1.4rem;">
            <i class="fas fa-truck"></i>
          </div>
          <h3 style="font-size: 1.2rem; color: #ffffff; margin-bottom: 10px;">Dedicated Bike Container</h3>
          <p style="font-size: 0.9rem; color: #94a3b8; line-height: 1.6;"> Specialized enclosed vehicle carriers equipped with safety belt tie-downs prevent movement during transit.</p>
        </div>

        <div style="background: #0b132b; border: 1px solid rgba(255,255,255,0.08); border-radius: 12px; padding: 25px;">
          <div style="width: 50px; height: 50px; background: rgba(245,158,11,0.15); border-radius: 10px; display: flex; align-items: center; justify-content: center; margin-bottom: 18px; color: #f59e0b; font-size: 1.4rem;">
            <i class="fas fa-headset"></i>
          </div>
          <h3 style="font-size: 1.2rem; color: #ffffff; margin-bottom: 10px;">24/7 Tracking & Support</h3>
          <p style="font-size: 0.9rem; color: #94a3b8; line-height: 1.6;"> Regular status updates and continuous support from pickup in Bandipore to final destination delivery.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 5: Rate Matrix / Pricing Table -->
  <section class="pricing-section" style="padding: 60px 0; background: #0b132b; border-bottom: 1px solid rgba(255,255,255,0.05);">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
      <h2 style="font-size: 2.2rem; font-weight: 700; color: #ffffff; text-align: center; margin-bottom: 15px;">
        Estimated Bike Transportation Charges from Bandipore
      </h2>
      <p style="text-align: center; color: #94a3b8; max-width: 700px; margin: 0 auto 40px; font-size: 0.95rem;">
        Transparent, fair pricing with zero hidden costs. Final rate depends on destination distance, bike engine size, and transit option.
      </p>

      <div style="overflow-x: auto; background: #0f172a; border-radius: 12px; border: 1px solid rgba(255,255,255,0.08);">
        <table style="width: 100%; border-collapse: collapse; text-align: left; color: #cbd5e1;">
          <thead>
            <tr style="background: rgba(245,158,11,0.15); border-bottom: 1px solid rgba(255,255,255,0.1);">
              <th style="padding: 16px 20px; color: #f59e0b; font-weight: 700;">Destination Route</th>
              <th style="padding: 16px 20px; color: #f59e0b; font-weight: 700;">Standard Bike (100-150cc)</th>
              <th style="padding: 16px 20px; color: #f59e0b; font-weight: 700;">Royal Enfield / Sports</th>
              <th style="padding: 16px 20px; color: #f59e0b; font-weight: 700;">Est. Delivery Time</th>
            </tr>
          </thead>
          <tbody>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.05);">
              <td style="padding: 16px 20px; font-weight: 600; color: #fff;">Bandipore to Jammu</td>
              <td style="padding: 16px 20px;">₹3,200 - ₹4,800</td>
              <td style="padding: 16px 20px;">₹4,500 - ₹6,200</td>
              <td style="padding: 16px 20px;">2 - 3 Days</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.05);">
              <td style="padding: 16px 20px; font-weight: 600; color: #fff;">Bandipore to Delhi NCR</td>
              <td style="padding: 16px 20px;">₹5,500 - ₹7,500</td>
              <td style="padding: 16px 20px;">₹7,000 - ₹9,500</td>
              <td style="padding: 16px 20px;">4 - 6 Days</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.05);">
              <td style="padding: 16px 20px; font-weight: 600; color: #fff;">Bandipore to Chandigarh / Punjab</td>
              <td style="padding: 16px 20px;">₹4,800 - ₹6,800</td>
              <td style="padding: 16px 20px;">₹6,200 - ₹8,500</td>
              <td style="padding: 16px 20px;">3 - 5 Days</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.05);">
              <td style="padding: 16px 20px; font-weight: 600; color: #fff;">Bandipore to Mumbai / Pune</td>
              <td style="padding: 16px 20px;">₹7,500 - ₹10,500</td>
              <td style="padding: 16px 20px;">₹9,000 - ₹13,000</td>
              <td style="padding: 16px 20px;">6 - 8 Days</td>
            </tr>
            <tr>
              <td style="padding: 16px 20px; font-weight: 600; color: #fff;">Bandipore to Bengaluru / Hyderabad</td>
              <td style="padding: 16px 20px;">₹8,500 - ₹12,000</td>
              <td style="padding: 16px 20px;">₹10,500 - ₹15,000</td>
              <td style="padding: 16px 20px;">7 - 10 Days</td>
            </tr>
          </tbody>
        </table>
      </div>
      <p style="font-size: 0.85rem; color: #64748b; margin-top: 15px; text-align: center;">*Note: Prices mentioned above are indicative. Contact us for an exact custom quote based on current route conditions and bike specs.</p>
    </div>
  </section>

  <!-- Section 6: Packaging & Safety Standards Protocol -->
  <section class="packing-protocol" style="padding: 60px 0; background: #0f172a; border-bottom: 1px solid rgba(255,255,255,0.05);">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
      <h2 style="font-size: 2.2rem; font-weight: 700; color: #ffffff; text-align: center; margin-bottom: 40px;">
        Our 5-Step Bike Packaging & Safety Protocol
      </h2>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 20px;">
        <div style="background: #0b132b; border: 1px solid rgba(255,255,255,0.08); border-radius: 12px; padding: 20px;">
          <div style="font-size: 1.5rem; font-weight: 800; color: #f59e0b; margin-bottom: 10px;">01</div>
          <h3 style="font-size: 1.1rem; color: #fff; margin-bottom: 8px;">Pre-Inspection</h3>
          <p style="font-size: 0.85rem; color: #94a3b8; line-height: 1.6;">Detailed physical check & photography recording current bike condition before packing.</p>
        </div>
        <div style="background: #0b132b; border: 1px solid rgba(255,255,255,0.08); border-radius: 12px; padding: 20px;">
          <div style="font-size: 1.5rem; font-weight: 800; color: #f59e0b; margin-bottom: 10px;">02</div>
          <h3 style="font-size: 1.1rem; color: #fff; margin-bottom: 8px;">Bubble Cushioning</h3>
          <p style="font-size: 0.85rem; color: #94a3b8; line-height: 1.6;">Thick bubble wrap application over tank, silencer, mirrors, headlights, and body panels.</p>
        </div>
        <div style="background: #0b132b; border: 1px solid rgba(255,255,255,0.08); border-radius: 12px; padding: 20px;">
          <div style="font-size: 1.5rem; font-weight: 800; color: #f59e0b; margin-bottom: 10px;">03</div>
          <h3 style="font-size: 1.1rem; color: #fff; margin-bottom: 8px;">Corrugated Casing</h3>
          <p style="font-size: 0.85rem; color: #94a3b8; line-height: 1.6;">Heavy corrugated cardboard sheets wrapped and secured tightly around all vulnerable areas.</p>
        </div>
        <div style="background: #0b132b; border: 1px solid rgba(255,255,255,0.08); border-radius: 12px; padding: 20px;">
          <div style="font-size: 1.5rem; font-weight: 800; color: #f59e0b; margin-bottom: 10px;">04</div>
          <h3 style="font-size: 1.1rem; color: #fff; margin-bottom: 8px;">Belt Harnessing</h3>
          <p style="font-size: 0.85rem; color: #94a3b8; line-height: 1.6;">Secured upright inside covered truck using heavy-duty nylon safety straps and wheel locks.</p>
        </div>
        <div style="background: #0b132b; border: 1px solid rgba(255,255,255,0.08); border-radius: 12px; padding: 20px;">
          <div style="font-size: 1.5rem; font-weight: 800; color: #f59e0b; margin-bottom: 10px;">05</div>
          <h3 style="font-size: 1.1rem; color: #fff; margin-bottom: 8px;">Safe Unloading</h3>
          <p style="font-size: 0.85rem; color: #94a3b8; line-height: 1.6;">Unpacking and joint inspection at customer's doorstep at the destination.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 7: Required Documents Checklist -->
  <section class="docs-section" style="padding: 60px 0; background: #0b132b; border-bottom: 1px solid rgba(255,255,255,0.05);">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
      <h2 style="font-size: 2.2rem; font-weight: 700; color: #ffffff; text-align: center; margin-bottom: 15px;">
        Documents Required for Bike Transport from Bandipore
      </h2>
      <p style="text-align: center; color: #94a3b8; margin-bottom: 40px;">To ensure hassle-free transit and highway checkpost clearance, keep these photocopies ready:</p>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 20px; max-width: 900px; margin: 0 auto;">
        <div style="background: #0f172a; padding: 20px; border-radius: 10px; border-left: 4px solid #f59e0b; display: flex; align-items: center; gap: 15px;">
          <i class="fas fa-file-alt" style="color: #f59e0b; font-size: 1.5rem;"></i>
          <div>
            <h4 style="color: #fff; margin-bottom: 4px;">Vehicle Registration Certificate</h4>
            <p style="font-size: 0.85rem; color: #94a3b8; margin: 0;">Self-attested RC copy</p>
          </div>
        </div>
        <div style="background: #0f172a; padding: 20px; border-radius: 10px; border-left: 4px solid #f59e0b; display: flex; align-items: center; gap: 15px;">
          <i class="fas fa-shield-alt" style="color: #f59e0b; font-size: 1.5rem;"></i>
          <div>
            <h4 style="color: #fff; margin-bottom: 4px;">Active Bike Insurance</h4>
            <p style="font-size: 0.85rem; color: #94a3b8; margin: 0;">Valid policy copy for transit coverage</p>
          </div>
        </div>
        <div style="background: #0f172a; padding: 20px; border-radius: 10px; border-left: 4px solid #f59e0b; display: flex; align-items: center; gap: 15px;">
          <i class="fas fa-id-card" style="color: #f59e0b; font-size: 1.5rem;"></i>
          <div>
            <h4 style="color: #fff; margin-bottom: 4px;">Owner Govt ID Proof</h4>
            <p style="font-size: 0.85rem; color: #94a3b8; margin: 0;">Aadhaar Card or Driving License</p>
          </div>
        </div>
        <div style="background: #0f172a; padding: 20px; border-radius: 10px; border-left: 4px solid #f59e0b; display: flex; align-items: center; gap: 15px;">
          <i class="fas fa-smog" style="color: #f59e0b; font-size: 1.5rem;"></i>
          <div>
            <h4 style="color: #fff; margin-bottom: 4px;">Pollution Certificate (PUC)</h4>
            <p style="font-size: 0.85rem; color: #94a3b8; margin: 0;">Valid PUC certificate copy</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 8: Steps to Prepare Your Bike -->
  <section class="prep-section" style="padding: 60px 0; background: #0f172a; border-bottom: 1px solid rgba(255,255,255,0.05);">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
      <h2 style="font-size: 2.2rem; font-weight: 700; color: #ffffff; text-align: center; margin-bottom: 35px;">
        How to Prepare Your Bike Before Pickup
      </h2>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 20px;">
        <div style="background: #0b132b; padding: 20px; border-radius: 10px;">
          <h3 style="color: #f59e0b; font-size: 1.1rem; margin-bottom: 8px;"><i class="fas fa-gas-pump" style="margin-right: 8px;"></i> Empty Fuel Tank</h3>
          <p style="font-size: 0.85rem; color: #94a3b8;">Keep petrol level under 1-2 liters as per transport safety guidelines.</p>
        </div>
        <div style="background: #0b132b; padding: 20px; border-radius: 10px;">
          <h3 style="color: #f59e0b; font-size: 1.1rem; margin-bottom: 8px;"><i class="fas fa-broom" style="margin-right: 8px;"></i> Wash Your Bike</h3>
          <p style="font-size: 0.85rem; color: #94a3b8;">Clean the vehicle thoroughly so pre-existing scratches are easily identified during inspection.</p>
        </div>
        <div style="background: #0b132b; padding: 20px; border-radius: 10px;">
          <h3 style="color: #f59e0b; font-size: 1.1rem; margin-bottom: 8px;"><i class="fas fa-suitcase" style="margin-right: 8px;"></i> Remove Accessories</h3>
          <p style="font-size: 0.85rem; color: #94a3b8;">Remove loose personal belongings, luggage, helmet boxes, and expensive custom fittings.</p>
        </div>
        <div style="background: #0b132b; padding: 20px; border-radius: 10px;">
          <h3 style="color: #f59e0b; font-size: 1.1rem; margin-bottom: 8px;"><i class="fas fa-tachometer-alt" style="margin-right: 8px;"></i> Check Tyre Pressure</h3>
          <p style="font-size: 0.85rem; color: #94a3b8;">Ensure adequate air pressure for smooth loading onto ramp and carrier positioning.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 9: Frequently Asked Questions (FAQs) -->
  <section class="faq-section" style="padding: 60px 0; background: #0b132b; border-bottom: 1px solid rgba(255,255,255,0.05);">
    <div class="container" style="max-width: 1000px; margin: 0 auto; padding: 0 20px;">
      <h2 style="font-size: 2.2rem; font-weight: 700; color: #ffffff; text-align: center; margin-bottom: 40px;">
        Frequently Asked Questions
      </h2>

      <div style="display: flex; flex-direction: column; gap: 15px;">
        <div style="background: #0f172a; border: 1px solid rgba(255,255,255,0.08); border-radius: 10px; padding: 20px;">
          <h3 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 8px;">Q1: How much does bike transport from Bandipore cost?</h3>
          <p style="font-size: 0.9rem; color: #cbd5e1; line-height: 1.6;">Charges start from approximately ₹3,200 for nearby routes like Jammu and vary depending on total distance, engine capacity, and transport model (shared vs. dedicated container).</p>
        </div>
        <div style="background: #0f172a; border: 1px solid rgba(255,255,255,0.08); border-radius: 10px; padding: 20px;">
          <h3 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 8px;">Q2: Is doorstep pickup available in Bandipore town and rural areas?</h3>
          <p style="font-size: 0.9rem; color: #cbd5e1; line-height: 1.6;">Yes, we provide doorstep motorcycle pickup across Bandipore town, Plan Bandipore, Aloosa, Sopore connect, and nearby areas across the district.</p>
        </div>
        <div style="background: #0f172a; border: 1px solid rgba(255,255,255,0.08); border-radius: 10px; padding: 20px;">
          <h3 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 8px;">Q3: How long does it take to deliver a bike from Bandipore to Delhi or South India?</h3>
          <p style="font-size: 0.9rem; color: #cbd5e1; line-height: 1.6;">Delivery to Delhi/NCR typically takes 4 to 6 days, while transport to southern hubs like Bangalore or Hyderabad requires 7 to 10 days depending on weather and highway conditions.</p>
        </div>
        <div style="background: #0f172a; border: 1px solid rgba(255,255,255,0.08); border-radius: 10px; padding: 20px;">
          <h3 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 8px;">Q4: Is transit insurance included in the bike transport service?</h3>
          <p style="font-size: 0.9rem; color: #cbd5e1; line-height: 1.6;">Yes, full transit insurance coverage is provided to protect your two-wheeler against accident or unforeseen damage during road transit.</p>
        </div>
        <div style="background: #0f172a; border: 1px solid rgba(255,255,255,0.08); border-radius: 10px; padding: 20px;">
          <h3 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 8px;">Q5: How can I track my bike during transit?</h3>
          <p style="font-size: 0.9rem; color: #cbd5e1; line-height: 1.6;">We provide regular WhatsApp and phone updates regarding container movement and tracking details until your bike reaches its destination safely.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 10: Call to Action (CTA) Banner -->
  <section class="cta-banner" style="padding: 50px 0; background: linear-gradient(135deg, #1c2541 0%, #0b132b 100%); border-bottom: 1px solid rgba(255,255,255,0.05);">
    <div class="container" style="max-width: 1000px; margin: 0 auto; padding: 0 20px; text-align: center;">
      <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin-bottom: 15px;">
        Ready to Transport Your Bike from Bandipore?
      </h2>
      <p style="font-size: 1.05rem; color: #94a3b8; margin-bottom: 30px;">
        Get an instant free estimate and lock in zero-damage guaranteed bike shifting today.
      </p>
      <div style="display: flex; gap: 15px; justify-content: center; flex-wrap: wrap;">
        <a href="tel:<?php echo SITE_PHONE_RAW; ?>" style="padding: 14px 32px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #fff; font-weight: 700; border-radius: 50px; text-decoration: none;">
          <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call Us: <?php echo SITE_PHONE; ?>
        </a>
        <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20to%20book%20bike%20transportation%20from%20Bandipore." target="_blank" style="padding: 14px 32px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #fff; font-weight: 700; border-radius: 50px; text-decoration: none;">
          <i class="fab fa-whatsapp" style="margin-right: 8px;"></i> Instant WhatsApp Booking
        </a>
      </div>
    </div>
  </section>

  <!-- Section 11: Structured Data JSON-LD Schema -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "mainEntity": [
      {
        "@type": "Question",
        "name": "How much does bike transport from Bandipore cost?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Charges start from approximately ₹3,200 for nearby routes like Jammu and vary depending on total distance, engine capacity, and transport model."
        }
      },
      {
        "@type": "Question",
        "name": "Is doorstep pickup available in Bandipore town and rural areas?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Yes, we provide doorstep motorcycle pickup across Bandipore town, Plan Bandipore, Aloosa, Sopore connect, and nearby areas across the district."
        }
      },
      {
        "@type": "Question",
        "name": "How long does it take to deliver a bike from Bandipore to Delhi or South India?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Delivery to Delhi/NCR typically takes 4 to 6 days, while transport to southern hubs like Bangalore or Hyderabad requires 7 to 10 days depending on weather and highway conditions."
        }
      },
      {
        "@type": "Question",
        "name": "Is transit insurance included in the bike transport service?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Yes, full transit insurance coverage is provided to protect your two-wheeler against accident or unforeseen damage during road transit."
        }
      },
      {
        "@type": "Question",
        "name": "How can I track my bike during transit?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "We provide regular WhatsApp and phone updates regarding container movement and tracking details until your bike reaches its destination safely."
        }
      }
    ]
  }
  </script>

  <script>
  function sendHeroWhatsAppLead(event, form) {
    event.preventDefault();
    const name = form.name.value;
    const phone = form.phone.value;
    const moveFrom = form.move_from.value;
    const moveTo = form.move_to.value;

    const message = `Hello Shree Ashirwad Packers,%0A%0AI would like a bike transportation quote:%0A- Name: ${encodeURIComponent(name)}%0A- Phone: ${encodeURIComponent(phone)}%0A- From: ${encodeURIComponent(moveFrom)}%0A- To: ${encodeURIComponent(moveTo)}`;
    window.open(`https://wa.me/918409531615?text=${message}`, '_blank');
  }
  </script>

</main>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>

