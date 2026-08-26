<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "Bike Transport from Pune to Aurangabad | Safe Two-Wheeler Shifting";
$page_desc = "Planning bike transport from Pune to Aurangabad? Get safe, insured, and doorstep motorcycle shipping services across the Pune-Ahmednagar-Aurangabad highway corridor (~235 km). View estimated charges, transit times, and packaging details.";
$page_keywords = "bike transport from pune to aurangabad, best bike transport from pune to aurangabad, affordable bike transport from pune to aurangabad, packers and movers, top bike transport from pune to aurangabad company, doorstep bike transport from pune to aurangabad, verified bike transport from pune to aurangabad services, shree ashirwad bike transport from pune to aurangabad";
$canonical_url = "https://shreeashirwadpackersandmovers.com/pages/bike-transport-from-pune-to-aurangabad.php";

require_once __DIR__ . '/../includes/header.php';
?>

<main class="site-main dark-theme-override">

  <!-- Visual Breadcrumb Navigation Bar -->
  <div class="breadcrumb-wrapper">
    <div class="container">
      <div class="breadcrumb-list">
        <span class="breadcrumb-item"><a href="<?php echo SITE_URL; ?>" title="Home">Home</a></span>
        <span class="breadcrumb-separator">/</span>
        <span class="breadcrumb-item active"><?php echo htmlspecialchars($page_title); ?></span>
      </div>
    </div>
  </div>

  <!-- Hero Section with Lead Form -->
  <section class="hero-section" style="background: linear-gradient(135deg, #0b132b 0%, #1c2541 100%); padding: 60px 0; color: #ffffff;">
    <div class="container">
      <div class="hero-grid" style="display: grid; grid-template-columns: 1.2fr 0.8fr; gap: 40px; align-items: center;">
        
        <!-- Hero Text Column -->
        <div class="hero-text">
          <span class="section-tag" style="background: rgba(245, 158, 11, 0.15); color: #f59e0b; border: 1px solid rgba(245, 158, 11, 0.4); padding: 6px 16px; border-radius: 20px; font-size: 0.85rem; font-weight: 700; text-transform: uppercase; display: inline-block; margin-bottom: 15px;">
            BIKE TRANSPORT FROM PUNE TO AURANGABAD RELOCATION SPECIALISTS
          </span>
          <h1 style="font-size: 2.7rem; font-weight: 800; line-height: 1.2; margin-bottom: 20px; color: #ffffff;">
            Professional <span style="color: #f59e0b;">Bike Transport from Pune to Aurangabad</span>
          </h1>
          <p style="font-size: 1.12rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 25px;">
            Planning bike transport from Pune to Aurangabad (Chhatrapati Sambhajinagar)? Get safe, insured, and doorstep motorcycle shipping services via the state highway corridor (~235 km). View estimated charges, transit times, and packaging details.
          </p>

          <div style="display: flex; gap: 15px; flex-wrap: wrap; margin-bottom: 30px;">
            <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Now" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
              <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call Now: <?php echo SITE_PHONE; ?>
            </a>
            <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20a%20quote%20for%20Bike%20Transport%20from%20Pune%20to%20Aurangabad." title="Chat on WhatsApp" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
              <i class="fab fa-whatsapp" style="margin-right: 8px;"></i> Chat on WhatsApp
            </a>
          </div>

          <div style="display: flex; gap: 20px; font-size: 0.9rem; color: #94a3b8;">
            <span><strong style="color: #f59e0b;">100% Insured</strong> Shifting</span>
            <span><strong style="color: #f59e0b;">7-Layer</strong> Bubble Packaging</span>
            <span><strong style="color: #f59e0b;">Door-to-Door</strong> Delivery</span>
          </div>
        </div>

        <!-- Hero Lead Form Column -->
        <div class="hero-form-card" style="background: rgba(255, 255, 255, 0.05); backdrop-filter: blur(10px); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 16px; padding: 30px; box-shadow: 0 15px 35px rgba(0,0,0,0.4);">
          <h2 style="font-size: 1.4rem; color: #ffffff; margin-bottom: 8px; font-weight: 700; text-align: center;">Get Pune to Aurangabad Quote</h2>
          <p style="font-size: 0.85rem; color: #94a3b8; text-align: center; margin-bottom: 20px;">Receive transparent cost estimation on WhatsApp in 2 minutes</p>

          <form action="#" method="POST" onsubmit="sendHeroWhatsAppLead(event, this);">
            <div style="margin-bottom: 14px;">
              <input type="text" name="name" class="form-control" placeholder="Your Full Name" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="margin-bottom: 14px;">
              <input type="tel" name="phone" class="form-control" placeholder="10-Digit Phone Number" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 10px; margin-bottom: 14px;">
              <input type="text" name="move_from" class="form-control" value="Pune" required readonly style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
              <input type="text" name="move_to" class="form-control" value="Aurangabad" required readonly style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <button type="submit" style="width: 100%; padding: 14px; background: linear-gradient(135deg, #d32f2f 0%, #f59e0b 100%); color: #ffffff; border: none; border-radius: 50px; font-weight: 700; font-size: 1rem; cursor: pointer;">
              Get Instant Estimate Now &rarr;
            </button>
          </form>
        </div>

      </div>
    </div>
  </section>

  <!-- Key Stats Counter Bar -->
  <section style="background: #0f172a; padding: 35px 0; border-bottom: 1px solid rgba(255,255,255,0.05);">
    <div class="container">
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 20px; text-align: center;">
        <div style="padding: 15px; background: rgba(255,255,255,0.03); border-radius: 10px; border: 1px solid rgba(255,255,255,0.05);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b;">235+ km</div>
          <div style="font-size: 0.85rem; color: #94a3b8; margin-top: 5px;">SH60 / Highway Route</div>
        </div>
        <div style="padding: 15px; background: rgba(255,255,255,0.03); border-radius: 10px; border: 1px solid rgba(255,255,255,0.05);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b;">24 - 48 Hrs</div>
          <div style="font-size: 0.85rem; color: #94a3b8; margin-top: 5px;">Express Transit Duration</div>
        </div>
        <div style="padding: 15px; background: rgba(255,255,255,0.03); border-radius: 10px; border: 1px solid rgba(255,255,255,0.05);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b;">100% Insured</div>
          <div style="font-size: 0.85rem; color: #94a3b8; margin-top: 5px;">Complete Damage Coverage</div>
        </div>
        <div style="padding: 15px; background: rgba(255,255,255,0.03); border-radius: 10px; border: 1px solid rgba(255,255,255,0.05);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b;">IBA & GST</div>
          <div style="font-size: 0.85rem; color: #94a3b8; margin-top: 5px;">Reimbursement Compliant</div>
        </div>
      </div>
    </div>
  </section>

  <!-- 6-Card Feature Grid -->
  <section style="background: #0b132b; padding: 60px 0; color: #ffffff;">
    <div class="container">
      <div style="text-align: center; margin-bottom: 45px;">
        <h2 style="font-size: 2.2rem; font-weight: 700; color: #ffffff;">Why Choose Our Pune to Aurangabad Bike Shipping?</h2>
        <p style="color: #94a3b8; max-width: 650px; margin: 10px auto 0;">Dedicated regional logistics for smooth motorcycle transportation across Maharashtra.</p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 25px;">
        <div style="background: rgba(255,255,255,0.03); padding: 30px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.08);">
          <div style="font-size: 2rem; color: #f59e0b; margin-bottom: 15px;"><i class="fas fa-truck-monster"></i></div>
          <h3 style="font-size: 1.2rem; color: #ffffff; font-weight: 600; margin-bottom: 10px;">Dedicated Covered Carriers</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6;">Weatherproof closed containers designed specifically for two-wheelers preventing dust and scratch damages.</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); padding: 30px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.08);">
          <div style="font-size: 2rem; color: #f59e0b; margin-bottom: 15px;"><i class="fas fa-layer-group"></i></div>
          <h3 style="font-size: 1.2rem; color: #ffffff; font-weight: 600; margin-bottom: 10px;">7-Layer Safety Armor</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6;">Heavy bubble wrap, EPE foam sheets, and stretch film protection for vulnerable fuel tanks and bodywork.</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); padding: 30px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.08);">
          <div style="font-size: 2rem; color: #f59e0b; margin-bottom: 15px;"><i class="fas fa-map-marked-alt"></i></div>
          <h3 style="font-size: 1.2rem; color: #ffffff; font-weight: 600; margin-bottom: 10px;">Doorstep Pickup & Delivery</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6;">Direct home pickup from all Pune localities and door delivery in CIDCO, Beed Bypass, and Waluj MIDC in Aurangabad.</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); padding: 30px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.08);">
          <div style="font-size: 2rem; color: #f59e0b; margin-bottom: 15px;"><i class="fas fa-shield-alt"></i></div>
          <h3 style="font-size: 1.2rem; color: #ffffff; font-weight: 600; margin-bottom: 10px;">Transit Insurance Coverage</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6;">Full value insurance policy protecting your bike against unforeseen highway risks during movement.</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); padding: 30px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.08);">
          <div style="font-size: 2rem; color: #f59e0b; margin-bottom: 15px;"><i class="fas fa-file-invoice-dollar"></i></div>
          <h3 style="font-size: 1.2rem; color: #ffffff; font-weight: 600; margin-bottom: 10px;">Reimbursement Ready Bills</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6;">IBA-approved GST invoice and consignment note (LR) suitable for corporate employee claims.</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); padding: 30px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.08);">
          <div style="font-size: 2rem; color: #f59e0b; margin-bottom: 15px;"><i class="fas fa-phone-volume"></i></div>
          <h3 style="font-size: 1.2rem; color: #ffffff; font-weight: 600; margin-bottom: 10px;">Live Status Tracking</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6;">Real-time update on dispatch, vehicle positioning, and estimated delivery window directly on WhatsApp.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Pricing Table Section -->
  <section style="background: #0f172a; padding: 60px 0; color: #ffffff;">
    <div class="container">
      <div style="text-align: center; margin-bottom: 40px;">
        <h2 style="font-size: 2.2rem; font-weight: 700; color: #ffffff;">Pune to Aurangabad Bike Transport Charges</h2>
        <p style="color: #94a3b8; max-width: 600px; margin: 10px auto 0;">Affordable pricing matrix based on motorcycle engine size and packaging options.</p>
      </div>

      <div style="overflow-x: auto;">
        <table style="width: 100%; border-collapse: collapse; background: rgba(255,255,255,0.02); border-radius: 10px; overflow: hidden; text-align: left;">
          <thead>
            <tr style="background: #1e293b; color: #f59e0b; font-size: 1rem;">
              <th style="padding: 16px 20px; border-bottom: 1px solid rgba(255,255,255,0.1);">Bike Type / Engine Capacity</th>
              <th style="padding: 16px 20px; border-bottom: 1px solid rgba(255,255,255,0.1);">Standard Packaging</th>
              <th style="padding: 16px 20px; border-bottom: 1px solid rgba(255,255,255,0.1);">Premium 7-Layer Packaging</th>
              <th style="padding: 16px 20px; border-bottom: 1px solid rgba(255,255,255,0.1);">Estimated Transit Time</th>
            </tr>
          </thead>
          <tbody style="color: #cbd5e1; font-size: 0.95rem;">
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.05);">
              <td style="padding: 16px 20px;">Scooter / Scooty (100cc - 125cc)</td>
              <td style="padding: 16px 20px;">₹ 2,800 - ₹ 3,600</td>
              <td style="padding: 16px 20px;">₹ 3,500 - ₹ 4,200</td>
              <td style="padding: 16px 20px;">24 - 48 Hours</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.05);">
              <td style="padding: 16px 20px;">Standard Commuter (110cc - 150cc)</td>
              <td style="padding: 16px 20px;">₹ 3,200 - ₹ 4,000</td>
              <td style="padding: 16px 20px;">₹ 4,000 - ₹ 4,800</td>
              <td style="padding: 16px 20px;">24 - 48 Hours</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.05);">
              <td style="padding: 16px 20px;">Sports Bike (180cc - 250cc)</td>
              <td style="padding: 16px 20px;">₹ 3,800 - ₹ 4,800</td>
              <td style="padding: 16px 20px;">₹ 4,800 - ₹ 5,800</td>
              <td style="padding: 16px 20px;">24 - 48 Hours</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.05);">
              <td style="padding: 16px 20px;">Royal Enfield / Cruiser (350cc+)</td>
              <td style="padding: 16px 20px;">₹ 4,200 - ₹ 5,500</td>
              <td style="padding: 16px 20px;">₹ 5,200 - ₹ 6,500</td>
              <td style="padding: 16px 20px;">24 - 48 Hours</td>
            </tr>
            <tr>
              <td style="padding: 16px 20px;">Superbike / Premium (500cc+)</td>
              <td style="padding: 16px 20px;">₹ 6,000 - ₹ 8,500</td>
              <td style="padding: 16px 20px;">₹ 7,500 - ₹ 10,000</td>
              <td style="padding: 16px 20px;">24 - 48 Hours</td>
            </tr>
          </tbody>
        </table>
      </div>
      <p style="font-size: 0.85rem; color: #64748b; margin-top: 15px; text-align: center;">*Note: Final prices depend on door pickup location, specific bike model weight, and optional insurance valuation.</p>
    </div>
  </section>

  <!-- 7-Layer Packaging Framework -->
  <section style="background: #0b132b; padding: 60px 0; color: #ffffff;">
    <div class="container">
      <div style="text-align: center; margin-bottom: 45px;">
        <h2 style="font-size: 2.2rem; font-weight: 700; color: #ffffff;">7-Layer Damage Protection Guarantee</h2>
        <p style="color: #94a3b8; max-width: 650px; margin: 10px auto 0;">Custom multi-tier wrapping engineered for zero transit impact.</p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 20px;">
        <div style="background: rgba(255,255,255,0.03); padding: 20px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #f59e0b; font-size: 1rem; font-weight: 700; margin-bottom: 8px;">Layer 1: Polythene Anti-Scratch Film</h4>
          <p style="color: #94a3b8; font-size: 0.88rem; line-height: 1.5;">Protects fuel tank paintwork, graphics, and chrome surfaces from friction.</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); padding: 20px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #f59e0b; font-size: 1rem; font-weight: 700; margin-bottom: 8px;">Layer 2: Air Bubble Cushioning</h4>
          <p style="color: #94a3b8; font-size: 0.88rem; line-height: 1.5;">High-density bubble roll wrapped around engine cover, exhaust, and mudguards.</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); padding: 20px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #f59e0b; font-size: 1rem; font-weight: 700; margin-bottom: 8px;">Layer 3: EPE Foam Padding</h4>
          <p style="color: #94a3b8; font-size: 0.88rem; line-height: 1.5;">Shock absorbing foam sheets placed at shock absorbers, footrests, and indicators.</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); padding: 20px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #f59e0b; font-size: 1rem; font-weight: 700; margin-bottom: 8px;">Layer 4: Corrugated Box Boarding</h4>
          <p style="color: #94a3b8; font-size: 0.88rem; line-height: 1.5;">Heavy cardboard casing securing outer contours against side contact.</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); padding: 20px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #f59e0b; font-size: 1rem; font-weight: 700; margin-bottom: 8px;">Layer 5: Waterproof Stretch Wrapping</h4>
          <p style="color: #94a3b8; font-size: 0.88rem; line-height: 1.5;">Tight industrial stretch film sealing the package from dust and moisture.</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); padding: 20px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #f59e0b; font-size: 1rem; font-weight: 700; margin-bottom: 8px;">Layer 6: Heavy Nylon Safety Harness</h4>
          <p style="color: #94a3b8; font-size: 0.88rem; line-height: 1.5;">Ratchet belt anchoring wheels and frame inside the closed transport carrier.</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); padding: 20px; border-radius: 10px; border-left: 4px solid #f59e0b; grid-column: span 1 / -1;">
          <h4 style="color: #f59e0b; font-size: 1rem; font-weight: 700; margin-bottom: 8px;">Layer 7: Hardwood Crate Box (Optional)</h4>
          <p style="color: #94a3b8; font-size: 0.88rem; line-height: 1.5;">Custom wooden frame enclosure for high-end luxury bikes and sports models.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Localities and Routes Section -->
  <section style="background: #0f172a; padding: 60px 0; color: #ffffff;">
    <div class="container">
      <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 40px;">
        <div>
          <h3 style="font-size: 1.4rem; color: #f59e0b; font-weight: 700; margin-bottom: 20px;">Pune Pickup Localities</h3>
          <ul style="list-style: none; padding: 0; display: grid; grid-template-columns: 1fr 1fr; gap: 12px; color: #94a3b8; font-size: 0.9rem;">
            <li><i class="fas fa-map-marker-alt" style="color: #f59e0b; margin-right: 8px;"></i> Hadapsar & Magarpatta</li>
            <li><i class="fas fa-map-marker-alt" style="color: #f59e0b; margin-right: 8px;"></i> Kharadi & Viman Nagar</li>
            <li><i class="fas fa-map-marker-alt" style="color: #f59e0b; margin-right: 8px;"></i> Hinjewadi & Wakad</li>
            <li><i class="fas fa-map-marker-alt" style="color: #f59e0b; margin-right: 8px;"></i> Baner & Aundh</li>
            <li><i class="fas fa-map-marker-alt" style="color: #f59e0b; margin-right: 8px;"></i> Kothrud & Karve Nagar</li>
            <li><i class="fas fa-map-marker-alt" style="color: #f59e0b; margin-right: 8px;"></i> Wagholi & Chandan Nagar</li>
            <li><i class="fas fa-map-marker-alt" style="color: #f59e0b; margin-right: 8px;"></i> Pimpri & Chinchwad</li>
            <li><i class="fas fa-map-marker-alt" style="color: #f59e0b; margin-right: 8px;"></i> Katraj & Swargate</li>
          </ul>
        </div>
        <div>
          <h3 style="font-size: 1.4rem; color: #f59e0b; font-weight: 700; margin-bottom: 20px;">Aurangabad Delivery Hubs</h3>
          <ul style="list-style: none; padding: 0; display: grid; grid-template-columns: 1fr 1fr; gap: 12px; color: #94a3b8; font-size: 0.9rem;">
            <li><i class="fas fa-map-marker-alt" style="color: #f59e0b; margin-right: 8px;"></i> CIDCO Mahanagar (N1-N12)</li>
            <li><i class="fas fa-map-marker-alt" style="color: #f59e0b; margin-right: 8px;"></i> Beed Bypass Road</li>
            <li><i class="fas fa-map-marker-alt" style="color: #f59e0b; margin-right: 8px;"></i> Garkheda & Seven Hills</li>
            <li><i class="fas fa-map-marker-alt" style="color: #f59e0b; margin-right: 8px;"></i> Waluj MIDC Industrial Area</li>
            <li><i class="fas fa-map-marker-alt" style="color: #f59e0b; margin-right: 8px;"></i> Chikalthana MIDC</li>
            <li><i class="fas fa-map-marker-alt" style="color: #f59e0b; margin-right: 8px;"></i> Jalna Road & Osmanpura</li>
            <li><i class="fas fa-map-marker-alt" style="color: #f59e0b; margin-right: 8px;"></i> Mukundwadi & Railway Station</li>
            <li><i class="fas fa-map-marker-alt" style="color: #f59e0b; margin-right: 8px;"></i> Padampura & Shahnoorwadi</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- Official Documentation Section -->
  <section style="background: #0b132b; padding: 60px 0; color: #ffffff;">
    <div class="container">
      <div style="text-align: center; margin-bottom: 40px;">
        <h2 style="font-size: 2.2rem; font-weight: 700; color: #ffffff;">Corporate Reimbursement Documentation</h2>
        <p style="color: #94a3b8; max-width: 650px; margin: 10px auto 0;">Complete set of official documents provided for hassle-free company claims.</p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 20px; text-align: center;">
        <div style="background: rgba(255,255,255,0.03); padding: 25px 15px; border-radius: 10px; border: 1px solid rgba(255,255,255,0.05);">
          <i class="fas fa-file-invoice" style="font-size: 2rem; color: #f59e0b; margin-bottom: 12px;"></i>
          <h4 style="font-size: 1rem; color: #ffffff; margin-bottom: 5px;">GST Invoice</h4>
          <p style="font-size: 0.8rem; color: #94a3b8;">18% GST tax invoice for corporate claim</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); padding: 25px 15px; border-radius: 10px; border: 1px solid rgba(255,255,255,0.05);">
          <i class="fas fa-truck-moving" style="font-size: 2rem; color: #f59e0b; margin-bottom: 12px;"></i>
          <h4 style="font-size: 1rem; color: #ffffff; margin-bottom: 5px;">Lorry Receipt (LR)</h4>
          <p style="font-size: 0.8rem; color: #94a3b8;">Official transport consignment note</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); padding: 25px 15px; border-radius: 10px; border: 1px solid rgba(255,255,255,0.05);">
          <i class="fas fa-clipboard-list" style="font-size: 2rem; color: #f59e0b; margin-bottom: 12px;"></i>
          <h4 style="font-size: 1rem; color: #ffffff; margin-bottom: 5px;">Inspection Checklist</h4>
          <p style="font-size: 0.8rem; color: #94a3b8;">Pre-loading vehicle condition report</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); padding: 25px 15px; border-radius: 10px; border: 1px solid rgba(255,255,255,0.05);">
          <i class="fas fa-file-contract" style="font-size: 2rem; color: #f59e0b; margin-bottom: 12px;"></i>
          <h4 style="font-size: 1rem; color: #ffffff; margin-bottom: 5px;">Insurance Copy</h4>
          <p style="font-size: 0.8rem; color: #94a3b8;">Transit insurance certificate document</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Detailed FAQs Section -->
  <section style="background: #0f172a; padding: 60px 0; color: #ffffff;">
    <div class="container">
      <div style="text-align: center; margin-bottom: 45px;">
        <h2 style="font-size: 2.2rem; font-weight: 700; color: #ffffff;">Frequently Asked Questions</h2>
        <p style="color: #94a3b8; max-width: 600px; margin: 10px auto 0;">Clear answers to common questions regarding Pune to Aurangabad bike shipping.</p>
      </div>

      <div style="max-width: 800px; margin: 0 auto; display: flex; flex-direction: column; gap: 15px;">
        <div style="background: rgba(255,255,255,0.03); padding: 20px 25px; border-radius: 10px; border: 1px solid rgba(255,255,255,0.05);">
          <h4 style="font-size: 1.1rem; color: #f59e0b; font-weight: 600; margin-bottom: 8px;">What are the charges for bike transport from Pune to Aurangabad?</h4>
          <p style="color: #94a3b8; font-size: 0.92rem; line-height: 1.6;">Charges start from ₹2,800 for scooters and up to ₹5,500 for heavy cruisers like Royal Enfield depending on packaging selection.</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); padding: 20px 25px; border-radius: 10px; border: 1px solid rgba(255,255,255,0.05);">
          <h4 style="font-size: 1.1rem; color: #f59e0b; font-weight: 600; margin-bottom: 8px;">How long does it take for delivery between Pune and Aurangabad?</h4>
          <p style="color: #94a3b8; font-size: 0.92rem; line-height: 1.6;">As the distance is around 235 km, delivery is typically completed within 24 to 48 hours from door pickup.</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); padding: 20px 25px; border-radius: 10px; border: 1px solid rgba(255,255,255,0.05);">
          <h4 style="font-size: 1.1rem; color: #f59e0b; font-weight: 600; margin-bottom: 8px;">What documents are mandatory for bike shifting?</h4>
          <p style="color: #94a3b8; font-size: 0.92rem; line-height: 1.6;">A photocopy of the Bike RC, active insurance policy document, and owner's Government ID (Aadhar / PAN / DL).</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); padding: 20px 25px; border-radius: 10px; border: 1px solid rgba(255,255,255,0.05);">
          <h4 style="font-size: 1.1rem; color: #f59e0b; font-weight: 600; margin-bottom: 8px;">Is door pickup available across all parts of Pune?</h4>
          <p style="color: #94a3b8; font-size: 0.92rem; line-height: 1.6;">Yes, we pick up vehicles from all residential and IT hubs across Pune, Pimpri, Chinchwad, and Hinjewadi.</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); padding: 20px 25px; border-radius: 10px; border: 1px solid rgba(255,255,255,0.05);">
          <h4 style="font-size: 1.1rem; color: #f59e0b; font-weight: 600; margin-bottom: 8px;">Will I get GST bill for official reimbursement?</h4>
          <p style="color: #94a3b8; font-size: 0.92rem; line-height: 1.6;">Yes, we issue 100% genuine IBA-compliant GST tax invoices and LR copies accepted by all private companies and PSUs.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA Conversion Footer -->
  <section style="background: linear-gradient(135deg, #1e1b4b 0%, #0f172a 100%); padding: 50px 0; color: #ffffff; text-align: center; border-top: 1px solid rgba(245,158,11,0.2);">
    <div class="container">
      <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin-bottom: 15px;">Book Bike Transport from Pune to Aurangabad Today</h2>
      <p style="color: #cbd5e1; font-size: 1.1rem; max-width: 650px; margin: 0 auto 30px;">Safe 7-layer bubble wrapping, instant door pickup, and express 24-48 hour delivery.</p>
      <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap;">
        <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Us Now" style="padding: 15px 32px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
          <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call <?php echo SITE_PHONE; ?>
        </a>
        <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20to%20book%20Bike%20Transport%20from%20Pune%20to%20Aurangabad." title="Instant WhatsApp Booking" target="_blank" style="padding: 15px 32px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
          <i class="fab fa-whatsapp" style="margin-right: 8px;"></i> WhatsApp Quote
        </a>
      </div>
    </div>
  </section>

</main>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "What are the charges for bike transport from Pune to Aurangabad?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Charges start from ₹2,800 for scooters and up to ₹5,500 for heavy cruisers like Royal Enfield depending on packaging selection."
      }
    },
    {
      "@type": "Question",
      "name": "How long does it take for delivery between Pune and Aurangabad?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "As the distance is around 235 km, delivery is typically completed within 24 to 48 hours from door pickup."
      }
    },
    {
      "@type": "Question",
      "name": "What documents are mandatory for bike shifting?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "A photocopy of the Bike RC, active insurance policy document, and owner's Government ID (Aadhar / PAN / DL)."
      }
    },
    {
      "@type": "Question",
      "name": "Is door pickup available across all parts of Pune?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, we pick up vehicles from all residential and IT hubs across Pune, Pimpri, Chinchwad, and Hinjewadi."
      }
    },
    {
      "@type": "Question",
      "name": "Will I get GST bill for official reimbursement?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, we issue 100% genuine IBA-compliant GST tax invoices and LR copies accepted by all private companies and PSUs."
      }
    }
  ]
}
</script>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
