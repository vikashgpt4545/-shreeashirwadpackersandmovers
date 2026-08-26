<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "Bike Transport from Pune to Ahmedabad | Safe Two-Wheeler Shifting";
$page_desc = "Planning bike transport from Pune to Ahmedabad? Get safe, insured, and doorstep motorcycle shipping services. View estimated charges, transit times, and packaging details.";
$page_keywords = "bike transport from pune to ahmedabad, best bike transport from pune to ahmedabad, affordable bike transport from pune to ahmedabad, packers and movers, packers and movers in ranchi, top bike transport from pune to ahmedabad company, household shifting bike transport from pune to ahmedabad, doorstep bike transport from pune to ahmedabad, verified bike transport from pune to ahmedabad services, shree ashirwad bike transport from pune to ahmedabad";
$canonical_url = "https://shreeashirwadpackersandmovers.com/pages/bike-transport-from-pune-to-ahmedabad.php";

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
            BIKE TRANSPORT FROM PUNE TO AHMEDABAD RELOCATION SPECIALISTS
          </span>
          <h1 style="font-size: 2.7rem; font-weight: 800; line-height: 1.2; margin-bottom: 20px; color: #ffffff;">
            Professional <span style="color: #f59e0b;">Bike Transport from Pune to Ahmedabad</span>
          </h1>
          <p style="font-size: 1.12rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 25px;">
            Planning bike transport from Pune to Ahmedabad? Get safe, insured, and doorstep motorcycle shipping services across the NH48 corridor (~660 km). View estimated charges, transit times, and multi-layer packaging protocols.
          </p>

          <div style="display: flex; gap: 15px; flex-wrap: wrap; margin-bottom: 30px;">
            <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Now" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
              <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call Now: <?php echo SITE_PHONE; ?>
            </a>
            <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20a%20quote%20for%20Bike%20Transport%20from%20Pune%20to%20Ahmedabad." title="Chat on WhatsApp" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
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
          <h2 style="font-size: 1.4rem; color: #ffffff; margin-bottom: 8px; font-weight: 700; text-align: center;">Get Pune to Ahmedabad Quote</h2>
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
              <input type="text" name="move_to" class="form-control" value="Ahmedabad" required readonly style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
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
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b;">660+ km</div>
          <div style="font-size: 0.85rem; color: #94a3b8; margin-top: 5px;">NH48 Transit Corridor</div>
        </div>
        <div style="padding: 15px; background: rgba(255,255,255,0.03); border-radius: 10px; border: 1px solid rgba(255,255,255,0.05);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b;">2-3 Days</div>
          <div style="font-size: 0.85rem; color: #94a3b8; margin-top: 5px;">Doorstep Delivery Time</div>
        </div>
        <div style="padding: 15px; background: rgba(255,255,255,0.03); border-radius: 10px; border: 1px solid rgba(255,255,255,0.05);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b;">100% Transit</div>
          <div style="font-size: 0.85rem; color: #94a3b8; margin-top: 5px;">Insurance & Claims Covered</div>
        </div>
        <div style="padding: 15px; background: rgba(255,255,255,0.03); border-radius: 10px; border: 1px solid rgba(255,255,255,0.05);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b;">IBA & GST</div>
          <div style="font-size: 0.85rem; color: #94a3b8; margin-top: 5px;">Compliant Reimbursement Bills</div>
        </div>
      </div>
    </div>
  </section>

  <!-- 6-Card Feature Grid -->
  <section style="background: #0b132b; padding: 60px 0; color: #ffffff;">
    <div class="container">
      <div style="text-align: center; margin-bottom: 45px;">
        <h2 style="font-size: 2.2rem; font-weight: 700; color: #ffffff;">Why Choose Our Pune to Ahmedabad Bike Transport?</h2>
        <p style="color: #94a3b8; max-width: 650px; margin: 10px auto 0;">Engineered for total safety during inter-state transport across Maharashtra and Gujarat.</p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 25px;">
        <div style="background: rgba(255,255,255,0.03); padding: 30px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.08);">
          <div style="font-size: 2rem; color: #f59e0b; margin-bottom: 15px;"><i class="fas fa-truck-covered"></i></div>
          <h3 style="font-size: 1.2rem; color: #ffffff; font-weight: 600; margin-bottom: 10px;">Covered Vehicle Containers</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6;">Weather-proof enclosed car & bike transport carriers protecting your motorcycle from rain, dust, and highway debris.</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); padding: 30px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.08);">
          <div style="font-size: 2rem; color: #f59e0b; margin-bottom: 15px;"><i class="fas fa-box"></i></div>
          <h3 style="font-size: 1.2rem; color: #ffffff; font-weight: 600; margin-bottom: 10px;">7-Layer Multi-Level Cushioning</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6;">Bubble wrap, foam sheets, corrugated pads, and waterproof stretch film to absorb shocks during transit.</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); padding: 30px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.08);">
          <div style="font-size: 2rem; color: #f59e0b; margin-bottom: 15px;"><i class="fas fa-warehouse"></i></div>
          <h3 style="font-size: 1.2rem; color: #ffffff; font-weight: 600; margin-bottom: 10px;">Local Pickup & Drop Hubs</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6;">Dedicated logistics centers in Pune (Hinjewadi, Hadapsar, Wakad) and Ahmedabad (S G Highway, Satellite, Naroda).</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); padding: 30px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.08);">
          <div style="font-size: 2rem; color: #f59e0b; margin-bottom: 15px;"><i class="fas fa-shield-alt"></i></div>
          <h3 style="font-size: 1.2rem; color: #ffffff; font-weight: 600; margin-bottom: 10px;">Full Transit Insurance Policy</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6;">Comprehensive transit insurance policy covering accidental damage and unforeseen events during transport.</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); padding: 30px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.08);">
          <div style="font-size: 2rem; color: #f59e0b; margin-bottom: 15px;"><i class="fas fa-file-invoice"></i></div>
          <h3 style="font-size: 1.2rem; color: #ffffff; font-weight: 600; margin-bottom: 10px;">IBA & Corporate GST Bills</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6;">Valid tax invoice, consignment note (LR), and vehicle condition report for seamless corporate reimbursement.</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); padding: 30px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.08);">
          <div style="font-size: 2rem; color: #f59e0b; margin-bottom: 15px;"><i class="fas fa-headset"></i></div>
          <h3 style="font-size: 1.2rem; color: #ffffff; font-weight: 600; margin-bottom: 10px;">24/7 Tracking & Updates</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6;">Stay informed with real-time tracking alerts from dispatch in Pune to delivery at your doorstep in Ahmedabad.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Pricing Table Section -->
  <section style="background: #0f172a; padding: 60px 0; color: #ffffff;">
    <div class="container">
      <div style="text-align: center; margin-bottom: 40px;">
        <h2 style="font-size: 2.2rem; font-weight: 700; color: #ffffff;">Pune to Ahmedabad Bike Transport Charges</h2>
        <p style="color: #94a3b8; max-width: 600px; margin: 10px auto 0;">Transparent pricing based on engine capacity and packaging type.</p>
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
              <td style="padding: 16px 20px;">₹ 4,200 - ₹ 5,200</td>
              <td style="padding: 16px 20px;">₹ 5,000 - ₹ 6,000</td>
              <td style="padding: 16px 20px;">2 - 3 Days</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.05);">
              <td style="padding: 16px 20px;">Standard Commuter (110cc - 150cc)</td>
              <td style="padding: 16px 20px;">₹ 4,500 - ₹ 5,500</td>
              <td style="padding: 16px 20px;">₹ 5,500 - ₹ 6,500</td>
              <td style="padding: 16px 20px;">2 - 3 Days</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.05);">
              <td style="padding: 16px 20px;">Sports Bike (180cc - 250cc)</td>
              <td style="padding: 16px 20px;">₹ 5,500 - ₹ 6,800</td>
              <td style="padding: 16px 20px;">₹ 6,500 - ₹ 7,800</td>
              <td style="padding: 16px 20px;">2 - 3 Days</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.05);">
              <td style="padding: 16px 20px;">Royal Enfield / Cruiser (350cc+)</td>
              <td style="padding: 16px 20px;">₹ 6,200 - ₹ 7,800</td>
              <td style="padding: 16px 20px;">₹ 7,500 - ₹ 9,000</td>
              <td style="padding: 16px 20px;">2 - 3 Days</td>
            </tr>
            <tr>
              <td style="padding: 16px 20px;">Superbike / Premium (500cc+)</td>
              <td style="padding: 16px 20px;">₹ 8,500 - ₹ 11,500</td>
              <td style="padding: 16px 20px;">₹ 10,000 - ₹ 13,500</td>
              <td style="padding: 16px 20px;">2 - 3 Days</td>
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
        <h2 style="font-size: 2.2rem; font-weight: 700; color: #ffffff;">Our 7-Layer Safety Packaging Framework</h2>
        <p style="color: #94a3b8; max-width: 650px; margin: 10px auto 0;">Ensuring zero scratches, dents, or component strain during long-haul highway movement.</p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 20px;">
        <div style="background: rgba(255,255,255,0.03); padding: 20px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #f59e0b; font-size: 1rem; font-weight: 700; margin-bottom: 8px;">Layer 1: Scratch-Guard Film</h4>
          <p style="color: #94a3b8; font-size: 0.88rem; line-height: 1.5;">Soft protective film applied to fuel tanks, side panels, headlight lenses, and mirrors.</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); padding: 20px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #f59e0b; font-size: 1rem; font-weight: 700; margin-bottom: 8px;">Layer 2: 80-GSM Heavy Bubble Wrap</h4>
          <p style="color: #94a3b8; font-size: 0.88rem; line-height: 1.5;">Thick air-bubble wrapping around engine blocks, exhaust pipes, and handlebars.</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); padding: 20px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #f59e0b; font-size: 1rem; font-weight: 700; margin-bottom: 8px;">Layer 3: High-Density Foam Sheets</h4>
          <p style="color: #94a3b8; font-size: 0.88rem; line-height: 1.5;">Impact-absorbing foam padding attached to front forks, mudguards, and rear suspension.</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); padding: 20px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #f59e0b; font-size: 1rem; font-weight: 700; margin-bottom: 8px;">Layer 4: Corrugated Fibreboard Sheets</h4>
          <p style="color: #94a3b8; font-size: 0.88rem; line-height: 1.5;">Rigid corrugated cardboard enclosing the entire body structure to deflect external pressure.</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); padding: 20px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #f59e0b; font-size: 1rem; font-weight: 700; margin-bottom: 8px;">Layer 5: Water-Resistant LLDPE Stretch Film</h4>
          <p style="color: #94a3b8; font-size: 0.88rem; line-height: 1.5;">Tight outer film seal protecting all inner layers against rain, moisture, and highway dust.</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); padding: 20px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #f59e0b; font-size: 1rem; font-weight: 700; margin-bottom: 8px;">Layer 6: Heavy-Duty Tie-Down Straps</h4>
          <p style="color: #94a3b8; font-size: 0.88rem; line-height: 1.5;">Industrial nylon belt tie-downs locking wheels and frame securely to container walls.</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); padding: 20px; border-radius: 10px; border-left: 4px solid #f59e0b; grid-column: span 1 / -1;">
          <h4 style="color: #f59e0b; font-size: 1rem; font-weight: 700; margin-bottom: 8px;">Layer 7: Custom Wooden Crating (Optional)</h4>
          <p style="color: #94a3b8; font-size: 0.88rem; line-height: 1.5;">Heavy-duty wooden cage enclosure recommended for high-end sports bikes and vintage cruisers.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Localities and Routes Section -->
  <section style="background: #0f172a; padding: 60px 0; color: #ffffff;">
    <div class="container">
      <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 40px;">
        <div>
          <h3 style="font-size: 1.4rem; color: #f59e0b; font-weight: 700; margin-bottom: 20px;">Pune Pickup Hubs</h3>
          <ul style="list-style: none; padding: 0; display: grid; grid-template-columns: 1fr 1fr; gap: 12px; color: #94a3b8; font-size: 0.9rem;">
            <li><i class="fas fa-map-marker-alt" style="color: #f59e0b; margin-right: 8px;"></i> Hinjewadi IT Park</li>
            <li><i class="fas fa-map-marker-alt" style="color: #f59e0b; margin-right: 8px;"></i> Wakad & Pimple Saudagar</li>
            <li><i class="fas fa-map-marker-alt" style="color: #f59e0b; margin-right: 8px;"></i> Hadapsar & Magarpatta</li>
            <li><i class="fas fa-map-marker-alt" style="color: #f59e0b; margin-right: 8px;"></i> Kharadi & Viman Nagar</li>
            <li><i class="fas fa-map-marker-alt" style="color: #f59e0b; margin-right: 8px;"></i> Baner & Aundh</li>
            <li><i class="fas fa-map-marker-alt" style="color: #f59e0b; margin-right: 8px;"></i> Kothrud & Karve Nagar</li>
            <li><i class="fas fa-map-marker-alt" style="color: #f59e0b; margin-right: 8px;"></i> Katraj & Kondhwa</li>
            <li><i class="fas fa-map-marker-alt" style="color: #f59e0b; margin-right: 8px;"></i> Bhosari & Chinchwad</li>
          </ul>
        </div>
        <div>
          <h3 style="font-size: 1.4rem; color: #f59e0b; font-weight: 700; margin-bottom: 20px;">Ahmedabad Delivery Areas</h3>
          <ul style="list-style: none; padding: 0; display: grid; grid-template-columns: 1fr 1fr; gap: 12px; color: #94a3b8; font-size: 0.9rem;">
            <li><i class="fas fa-map-marker-alt" style="color: #f59e0b; margin-right: 8px;"></i> SG Highway & Satellite</li>
            <li><i class="fas fa-map-marker-alt" style="color: #f59e0b; margin-right: 8px;"></i> Prahlad Nagar & Bodakdev</li>
            <li><i class="fas fa-map-marker-alt" style="color: #f59e0b; margin-right: 8px;"></i> Navrangpura & Ashram Road</li>
            <li><i class="fas fa-map-marker-alt" style="color: #f59e0b; margin-right: 8px;"></i> Maninagar & Kankaria</li>
            <li><i class="fas fa-map-marker-alt" style="color: #f59e0b; margin-right: 8px;"></i> Naroda & GIDC Industrial Zone</li>
            <li><i class="fas fa-map-marker-alt" style="color: #f59e0b; margin-right: 8px;"></i> Bopal & South Bopal</li>
            <li><i class="fas fa-map-marker-alt" style="color: #f59e0b; margin-right: 8px;"></i> Chandkheda & Motera</li>
            <li><i class="fas fa-map-marker-alt" style="color: #f59e0b; margin-right: 8px;"></i> Nikol & Vastral</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- IBA Approved GST Billing Documentation -->
  <section style="background: #0b132b; padding: 60px 0; color: #ffffff;">
    <div class="container">
      <div style="text-align: center; margin-bottom: 40px;">
        <h2 style="font-size: 2.2rem; font-weight: 700; color: #ffffff;">Reimbursement & Official Documentation</h2>
        <p style="color: #94a3b8; max-width: 650px; margin: 10px auto 0;">100% corporate claims compliant documents delivered with every shipment.</p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 20px; text-align: center;">
        <div style="background: rgba(255,255,255,0.03); padding: 25px 15px; border-radius: 10px; border: 1px solid rgba(255,255,255,0.05);">
          <i class="fas fa-file-invoice-dollar" style="font-size: 2rem; color: #f59e0b; margin-bottom: 12px;"></i>
          <h4 style="font-size: 1rem; color: #ffffff; margin-bottom: 5px;">GST Invoice</h4>
          <p style="font-size: 0.8rem; color: #94a3b8;">18% GST tax invoice for corporate claims</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); padding: 25px 15px; border-radius: 10px; border: 1px solid rgba(255,255,255,0.05);">
          <i class="fas fa-truck-loading" style="font-size: 2rem; color: #f59e0b; margin-bottom: 12px;"></i>
          <h4 style="font-size: 1rem; color: #ffffff; margin-bottom: 5px;">Consignment Note</h4>
          <p style="font-size: 0.8rem; color: #94a3b8;">Official Bilty / Consignment copy</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); padding: 25px 15px; border-radius: 10px; border: 1px solid rgba(255,255,255,0.05);">
          <i class="fas fa-clipboard-check" style="font-size: 2rem; color: #f59e0b; margin-bottom: 12px;"></i>
          <h4 style="font-size: 1rem; color: #ffffff; margin-bottom: 5px;">Inspection Report</h4>
          <p style="font-size: 0.8rem; color: #94a3b8;">Detailed pre-loading vehicle condition check</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); padding: 25px 15px; border-radius: 10px; border: 1px solid rgba(255,255,255,0.05);">
          <i class="fas fa-shield-alt" style="font-size: 2rem; color: #f59e0b; margin-bottom: 12px;"></i>
          <h4 style="font-size: 1rem; color: #ffffff; margin-bottom: 5px;">Insurance Policy</h4>
          <p style="font-size: 0.8rem; color: #94a3b8;">Full transit insurance certificate</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Detailed FAQs Section -->
  <section style="background: #0f172a; padding: 60px 0; color: #ffffff;">
    <div class="container">
      <div style="text-align: center; margin-bottom: 45px;">
        <h2 style="font-size: 2.2rem; font-weight: 700; color: #ffffff;">Frequently Asked Questions</h2>
        <p style="color: #94a3b8; max-width: 600px; margin: 10px auto 0;">Everything you need to know about bike transport from Pune to Ahmedabad.</p>
      </div>

      <div style="max-width: 800px; margin: 0 auto; display: flex; flex-direction: column; gap: 15px;">
        <div style="background: rgba(255,255,255,0.03); padding: 20px 25px; border-radius: 10px; border: 1px solid rgba(255,255,255,0.05);">
          <h4 style="font-size: 1.1rem; color: #f59e0b; font-weight: 600; margin-bottom: 8px;">What are the charges for bike transport from Pune to Ahmedabad?</h4>
          <p style="color: #94a3b8; font-size: 0.92rem; line-height: 1.6;">Bike transport charges from Pune to Ahmedabad generally range between ₹4,200 and ₹7,800 depending on the bike's engine capacity (cc), weight, and selected packaging tier.</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); padding: 20px 25px; border-radius: 10px; border: 1px solid rgba(255,255,255,0.05);">
          <h4 style="font-size: 1.1rem; color: #f59e0b; font-weight: 600; margin-bottom: 8px;">How long does it take for a bike to reach Ahmedabad from Pune?</h4>
          <p style="color: #94a3b8; font-size: 0.92rem; line-height: 1.6;">Under normal highway traffic conditions on NH48, delivery takes approximately 2 to 3 days from the time of pickup in Pune.</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); padding: 20px 25px; border-radius: 10px; border: 1px solid rgba(255,255,255,0.05);">
          <h4 style="font-size: 1.1rem; color: #f59e0b; font-weight: 600; margin-bottom: 8px;">Is fuel required in the bike tank during transit?</h4>
          <p style="color: #94a3b8; font-size: 0.92rem; line-height: 1.6;">No, for safety regulations, we require the fuel tank to be almost empty (less than 1 liter) to minimize fire hazards during inter-state transport.</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); padding: 20px 25px; border-radius: 10px; border: 1px solid rgba(255,255,255,0.05);">
          <h4 style="font-size: 1.1rem; color: #f59e0b; font-weight: 600; margin-bottom: 8px;">What documents are required to book bike shipping?</h4>
          <p style="color: #94a3b8; font-size: 0.92rem; line-height: 1.6;">You need a copy of the Bike Registration Certificate (RC), valid Insurance Policy, and a Government ID proof (Aadhar or Driving License) of the owner.</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); padding: 20px 25px; border-radius: 10px; border: 1px solid rgba(255,255,255,0.05);">
          <h4 style="font-size: 1.1rem; color: #f59e0b; font-weight: 600; margin-bottom: 8px;">Do you provide doorstep pickup and delivery in Pune and Ahmedabad?</h4>
          <p style="color: #94a3b8; font-size: 0.92rem; line-height: 1.6;">Yes, we provide end-to-end doorstep pickup across all Pune localities and doorstep delivery to your designated address in Ahmedabad.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA Conversion Footer -->
  <section style="background: linear-gradient(135deg, #1e1b4b 0%, #0f172a 100%); padding: 50px 0; color: #ffffff; text-align: center; border-top: 1px solid rgba(245,158,11,0.2);">
    <div class="container">
      <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin-bottom: 15px;">Ready to Transport Your Bike from Pune to Ahmedabad?</h2>
      <p style="color: #cbd5e1; font-size: 1.1rem; max-width: 650px; margin: 0 auto 30px;">Get zero-damage guaranteed bike shipping with multi-layer bubble packaging and full transit insurance.</p>
      <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap;">
        <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Us Now" style="padding: 15px 32px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
          <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call <?php echo SITE_PHONE; ?>
        </a>
        <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20to%20book%20Bike%20Transport%20from%20Pune%20to%20Ahmedabad." title="Instant WhatsApp Booking" target="_blank" style="padding: 15px 32px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
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
      "name": "What are the charges for bike transport from Pune to Ahmedabad?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Bike transport charges from Pune to Ahmedabad generally range between ₹4,200 and ₹7,800 depending on the bike's engine capacity (cc), weight, and selected packaging tier."
      }
    },
    {
      "@type": "Question",
      "name": "How long does it take for a bike to reach Ahmedabad from Pune?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Under normal highway traffic conditions on NH48, delivery takes approximately 2 to 3 days from the time of pickup in Pune."
      }
    },
    {
      "@type": "Question",
      "name": "Is fuel required in the bike tank during transit?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "No, for safety regulations, we require the fuel tank to be almost empty (less than 1 liter) to minimize fire hazards during inter-state transport."
      }
    },
    {
      "@type": "Question",
      "name": "What documents are required to book bike shipping?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "You need a copy of the Bike Registration Certificate (RC), valid Insurance Policy, and a Government ID proof (Aadhar or Driving License) of the owner."
      }
    },
    {
      "@type": "Question",
      "name": "Do you provide doorstep pickup and delivery in Pune and Ahmedabad?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, we provide end-to-end doorstep pickup across all Pune localities and doorstep delivery to your designated address in Ahmedabad."
      }
    }
  ]
}
</script>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
