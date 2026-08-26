<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "Bike Transport from Pune to Bangalore | Safe Two-Wheeler Shifting";
$page_desc = "Planning bike transport from Pune to Bangalore? Get safe, insured, and doorstep motorcycle shipping services across the NH48 corridor (~840 km). View estimated charges, transit times, and packaging details. Complete coverage across Koramangala, Indiranagar, Whitefield, HSR Layout, Electronic City.";
$page_keywords = "bike transport from pune to bangalore, best bike transport from pune to bangalore, affordable bike transport from pune to bangalore, packers and movers, top bike transport from pune to bangalore company, doorstep bike transport from pune to bangalore, verified bike transport from pune to bangalore services, shree ashirwad bike transport from pune to bangalore";
$canonical_url = "https://shreeashirwadpackersandmovers.com/pages/bike-transport-from-pune-to-bangalore.php";

require_once __DIR__ . '/../includes/header.php';
?>

<main class="site-main">

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
            BIKE TRANSPORT FROM PUNE TO BANGALORE RELOCATION SPECIALISTS
          </span>
          <h1 style="font-size: 2.7rem; font-weight: 800; line-height: 1.2; margin-bottom: 20px; color: #ffffff;">
            Professional <span style="color: #f59e0b;">Bike Transport from Pune to Bangalore</span>
          </h1>
          <p style="font-size: 1.12rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 25px;">
            Planning bike transport from Pune to Bangalore (Bengaluru)? Get safe, insured, and doorstep motorcycle shipping services via the NH48 arterial highway (~840 km). Complete door-to-door relocation coverage across Koramangala, Indiranagar, Whitefield, HSR Layout, and Electronic City.
          </p>

          <div style="display: flex; gap: 15px; flex-wrap: wrap; margin-bottom: 30px;">
            <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Now" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
              <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call Now: <?php echo SITE_PHONE; ?>
            </a>
            <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20a%20quote%20for%20Bike%20Transport%20from%20Pune%20to%20Bangalore." title="Chat on WhatsApp" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
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
          <h2 style="font-size: 1.4rem; color: #ffffff; margin-bottom: 8px; font-weight: 700; text-align: center;">Get Pune to Bangalore Quote</h2>
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
              <input type="text" name="move_to" class="form-control" value="Bangalore" required readonly style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
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
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b;">840+ km</div>
          <div style="font-size: 0.85rem; color: #94a3b8; margin-top: 5px;">NH48 Corridor Distance</div>
        </div>
        <div style="padding: 15px; background: rgba(255,255,255,0.03); border-radius: 10px; border: 1px solid rgba(255,255,255,0.05);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b;">3 - 4 Days</div>
          <div style="font-size: 0.85rem; color: #94a3b8; margin-top: 5px;">Doorstep Delivery Time</div>
        </div>
        <div style="padding: 15px; background: rgba(255,255,255,0.03); border-radius: 10px; border: 1px solid rgba(255,255,255,0.05);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b;">100% Insured</div>
          <div style="font-size: 0.85rem; color: #94a3b8; margin-top: 5px;">Full Damage Protection</div>
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
        <h2 style="font-size: 2.2rem; font-weight: 700; color: #ffffff;">Why Choose Our Pune to Bangalore Bike Transport?</h2>
        <p style="color: #94a3b8; max-width: 650px; margin: 10px auto 0;">Specialized inter-state motorcycle logistics between IT Hubs Pune and Bengaluru.</p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 25px;">
        <div style="background: rgba(255,255,255,0.03); padding: 30px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.08);">
          <div style="font-size: 2rem; color: #f59e0b; margin-bottom: 15px;"><i class="fas fa-truck-moving"></i></div>
          <h3 style="font-size: 1.2rem; color: #ffffff; font-weight: 600; margin-bottom: 10px;">Enclosed Special Carriers</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6;">Weatherproof closed containers securing your motorcycle from rain, dust, and highway debris across NH48.</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); padding: 30px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.08);">
          <div style="font-size: 2rem; color: #f59e0b; margin-bottom: 15px;"><i class="fas fa-cubes"></i></div>
          <h3 style="font-size: 1.2rem; color: #ffffff; font-weight: 600; margin-bottom: 10px;">7-Layer Premium Wrapping</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6;">Scratch-guard film, 80-GSM bubble wrap, and corrugated boards protecting fuel tank and side panels.</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); padding: 30px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.08);">
          <div style="font-size: 2rem; color: #f59e0b; margin-bottom: 15px;"><i class="fas fa-home"></i></div>
          <h3 style="font-size: 1.2rem; color: #ffffff; font-weight: 600; margin-bottom: 10px;">Door Pickup & Tech Parks Delivery</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6;">Direct home pickup in Hinjewadi/Kharadi and delivery to Koramangala, Indiranagar, Whitefield, or Electronic City.</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); padding: 30px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.08);">
          <div style="font-size: 2rem; color: #f59e0b; margin-bottom: 15px;"><i class="fas fa-shield-alt"></i></div>
          <h3 style="font-size: 1.2rem; color: #ffffff; font-weight: 600; margin-bottom: 10px;">All-Risk Transit Insurance</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6;">Comprehensive policy covering vehicle valuation against accident damage or unforeseen highway events.</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); padding: 30px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.08);">
          <div style="font-size: 2rem; color: #f59e0b; margin-bottom: 15px;"><i class="fas fa-file-invoice-dollar"></i></div>
          <h3 style="font-size: 1.2rem; color: #ffffff; font-weight: 600; margin-bottom: 10px;">GST & IBA Approved Invoice</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6;">Official 18% GST tax invoice and consignment copy for hassle-free corporate relocation reimbursement.</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); padding: 30px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.08);">
          <div style="font-size: 2rem; color: #f59e0b; margin-bottom: 15px;"><i class="fas fa-comments"></i></div>
          <h3 style="font-size: 1.2rem; color: #ffffff; font-weight: 600; margin-bottom: 10px;">24/7 WhatsApp Tracking</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6;">Continuous GPS coordinate updates and driver contact details from pickup to final destination unloading.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Pricing Table Section -->
  <section style="background: #0f172a; padding: 60px 0; color: #ffffff;">
    <div class="container">
      <div style="text-align: center; margin-bottom: 40px;">
        <h2 style="font-size: 2.2rem; font-weight: 700; color: #ffffff;">Pune to Bangalore Bike Transport Tariff</h2>
        <p style="color: #94a3b8; max-width: 600px; margin: 10px auto 0;">Clear pricing based on bike engine capacity and packaging level.</p>
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
              <td style="padding: 16px 20px;">₹ 4,800 - ₹ 5,800</td>
              <td style="padding: 16px 20px;">₹ 5,800 - ₹ 6,800</td>
              <td style="padding: 16px 20px;">3 - 4 Days</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.05);">
              <td style="padding: 16px 20px;">Standard Commuter (110cc - 150cc)</td>
              <td style="padding: 16px 20px;">₹ 5,200 - ₹ 6,200</td>
              <td style="padding: 16px 20px;">₹ 6,200 - ₹ 7,200</td>
              <td style="padding: 16px 20px;">3 - 4 Days</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.05);">
              <td style="padding: 16px 20px;">Sports Bike (180cc - 250cc)</td>
              <td style="padding: 16px 20px;">₹ 6,200 - ₹ 7,500</td>
              <td style="padding: 16px 20px;">₹ 7,500 - ₹ 8,800</td>
              <td style="padding: 16px 20px;">3 - 4 Days</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.05);">
              <td style="padding: 16px 20px;">Royal Enfield / Cruiser (350cc+)</td>
              <td style="padding: 16px 20px;">₹ 7,000 - ₹ 8,500</td>
              <td style="padding: 16px 20px;">₹ 8,500 - ₹ 10,000</td>
              <td style="padding: 16px 20px;">3 - 4 Days</td>
            </tr>
            <tr>
              <td style="padding: 16px 20px;">Superbike / Premium (500cc+)</td>
              <td style="padding: 16px 20px;">₹ 9,500 - ₹ 13,000</td>
              <td style="padding: 16px 20px;">₹ 11,500 - ₹ 15,000</td>
              <td style="padding: 16px 20px;">3 - 4 Days</td>
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
          <h4 style="color: #f59e0b; font-size: 1rem; font-weight: 700; margin-bottom: 8px;">Layer 1: Polythene Anti-Scratch Film</h4>
          <p style="color: #94a3b8; font-size: 0.88rem; line-height: 1.5;">Soft film applied to painted surfaces, fuel tank, and instruments to prevent micro-abrasions.</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); padding: 20px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #f59e0b; font-size: 1rem; font-weight: 700; margin-bottom: 8px;">Layer 2: 80-GSM Heavy Bubble Wrap</h4>
          <p style="color: #94a3b8; font-size: 0.88rem; line-height: 1.5;">Thick air bubble cushioning wrapping around engine, exhaust, and side panels.</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); padding: 20px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #f59e0b; font-size: 1rem; font-weight: 700; margin-bottom: 8px;">Layer 3: EPE Shock Absorbing Foam Sheets</h4>
          <p style="color: #94a3b8; font-size: 0.88rem; line-height: 1.5;">Dense foam padding wrapped around front forks, mudguards, and rear view mirrors.</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); padding: 20px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #f59e0b; font-size: 1rem; font-weight: 700; margin-bottom: 8px;">Layer 4: Heavy Corrugated Fibreboard</h4>
          <p style="color: #94a3b8; font-size: 0.88rem; line-height: 1.5;">Rigid corrugated cardboard enclosing the entire body structure to absorb impact.</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); padding: 20px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #f59e0b; font-size: 1rem; font-weight: 700; margin-bottom: 8px;">Layer 5: Waterproof Stretch Film Wrapping</h4>
          <p style="color: #94a3b8; font-size: 0.88rem; line-height: 1.5;">Tightly bound outer film seal protecting all inner layers against rain and road dust.</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); padding: 20px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #f59e0b; font-size: 1rem; font-weight: 700; margin-bottom: 8px;">Layer 6: Industrial Nylon Ratchet Straps</h4>
          <p style="color: #94a3b8; font-size: 0.88rem; line-height: 1.5;">Heavy belt tie-downs locking wheels and chassis firmly inside covered container truck.</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); padding: 20px; border-radius: 10px; border-left: 4px solid #f59e0b; grid-column: span 1 / -1;">
          <h4 style="color: #f59e0b; font-size: 1rem; font-weight: 700; margin-bottom: 8px;">Layer 7: Custom Hardwood Wooden Crate (Optional)</h4>
          <p style="color: #94a3b8; font-size: 0.88rem; line-height: 1.5;">Custom wooden frame cage enclosure recommended for premium super-bikes and classic cruisers.</p>
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
            <li><i class="fas fa-map-marker-alt" style="color: #f59e0b; margin-right: 8px;"></i> Hinjewadi IT Park Phase 1-3</li>
            <li><i class="fas fa-map-marker-alt" style="color: #f59e0b; margin-right: 8px;"></i> Wakad & Pimple Saudagar</li>
            <li><i class="fas fa-map-marker-alt" style="color: #f59e0b; margin-right: 8px;"></i> Hadapsar & Magarpatta City</li>
            <li><i class="fas fa-map-marker-alt" style="color: #f59e0b; margin-right: 8px;"></i> Kharadi & Viman Nagar</li>
            <li><i class="fas fa-map-marker-alt" style="color: #f59e0b; margin-right: 8px;"></i> Baner & Aundh</li>
            <li><i class="fas fa-map-marker-alt" style="color: #f59e0b; margin-right: 8px;"></i> Kothrud & Karve Nagar</li>
            <li><i class="fas fa-map-marker-alt" style="color: #f59e0b; margin-right: 8px;"></i> Katraj & Swargate</li>
            <li><i class="fas fa-map-marker-alt" style="color: #f59e0b; margin-right: 8px;"></i> Bhosari & Chinchwad</li>
          </ul>
        </div>
        <div>
          <h3 style="font-size: 1.4rem; color: #f59e0b; font-weight: 700; margin-bottom: 20px;">Bangalore Delivery Areas</h3>
          <ul style="list-style: none; padding: 0; display: grid; grid-template-columns: 1fr 1fr; gap: 12px; color: #94a3b8; font-size: 0.9rem;">
            <li><i class="fas fa-map-marker-alt" style="color: #f59e0b; margin-right: 8px;"></i> Koramangala (Blocks 1-8)</li>
            <li><i class="fas fa-map-marker-alt" style="color: #f59e0b; margin-right: 8px;"></i> Indiranagar & Domlur</li>
            <li><i class="fas fa-map-marker-alt" style="color: #f59e0b; margin-right: 8px;"></i> Whitefield & ITPL</li>
            <li><i class="fas fa-map-marker-alt" style="color: #f59e0b; margin-right: 8px;"></i> HSR Layout & BTM Layout</li>
            <li><i class="fas fa-map-marker-alt" style="color: #f59e0b; margin-right: 8px;"></i> Electronic City Phase 1 & 2</li>
            <li><i class="fas fa-map-marker-alt" style="color: #f59e0b; margin-right: 8px;"></i> Marathahalli & Bellandur</li>
            <li><i class="fas fa-map-marker-alt" style="color: #f59e0b; margin-right: 8px;"></i> Jayanagar & JP Nagar</li>
            <li><i class="fas fa-map-marker-alt" style="color: #f59e0b; margin-right: 8px;"></i> Yelahanka & Hebbal</li>
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
        <p style="color: #94a3b8; max-width: 600px; margin: 10px auto 0;">Everything you need to know about bike transport from Pune to Bangalore.</p>
      </div>

      <div style="max-width: 800px; margin: 0 auto; display: flex; flex-direction: column; gap: 15px;">
        <div style="background: rgba(255,255,255,0.03); padding: 20px 25px; border-radius: 10px; border: 1px solid rgba(255,255,255,0.05);">
          <h4 style="font-size: 1.1rem; color: #f59e0b; font-weight: 600; margin-bottom: 8px;">What are the charges for bike transport from Pune to Bangalore?</h4>
          <p style="color: #94a3b8; font-size: 0.92rem; line-height: 1.6;">Bike transport charges from Pune to Bangalore range from ₹4,800 to ₹10,000 depending on vehicle size, engine cc, and packaging type selected.</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); padding: 20px 25px; border-radius: 10px; border: 1px solid rgba(255,255,255,0.05);">
          <h4 style="font-size: 1.1rem; color: #f59e0b; font-weight: 600; margin-bottom: 8px;">How long does it take for a bike to reach Bangalore from Pune?</h4>
          <p style="color: #94a3b8; font-size: 0.92rem; line-height: 1.6;">The standard transit duration via NH48 is 3 to 4 days from pickup in Pune to doorstep delivery in Bangalore.</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); padding: 20px 25px; border-radius: 10px; border: 1px solid rgba(255,255,255,0.05);">
          <h4 style="font-size: 1.1rem; color: #f59e0b; font-weight: 600; margin-bottom: 8px;">Do you deliver to all tech hubs in Bangalore?</h4>
          <p style="color: #94a3b8; font-size: 0.92rem; line-height: 1.6;">Yes, we cover all major residential and IT hubs including Whitefield, Electronic City, Koramangala, Indiranagar, HSR Layout, and Manyata Tech Park area.</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); padding: 20px 25px; border-radius: 10px; border: 1px solid rgba(255,255,255,0.05);">
          <h4 style="font-size: 1.1rem; color: #f59e0b; font-weight: 600; margin-bottom: 8px;">What documents are needed to move a bike to Karnataka?</h4>
          <p style="color: #94a3b8; font-size: 0.92rem; line-height: 1.6;">You need a copy of the Registration Certificate (RC), active vehicle Insurance policy, and owner's Government photo ID proof.</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); padding: 20px 25px; border-radius: 10px; border: 1px solid rgba(255,255,255,0.05);">
          <h4 style="font-size: 1.1rem; color: #f59e0b; font-weight: 600; margin-bottom: 8px;">Are GST invoices provided for corporate relocation allowance?</h4>
          <p style="color: #94a3b8; font-size: 0.92rem; line-height: 1.6;">Yes, we provide valid 18% GST tax invoices with Bilty/LR copy that are accepted by IT companies and corporate HR departments.</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); padding: 20px 25px; border-radius: 10px; border: 1px solid rgba(255,255,255,0.05);">
          <h4 style="font-size: 1.1rem; color: #f59e0b; font-weight: 600; margin-bottom: 8px;">Is doorstep pickup available across all IT hubs in Pune?</h4>
          <p style="color: #94a3b8; font-size: 0.92rem; line-height: 1.6;">Yes, we offer doorstep pickup from Hinjewadi, Kharadi, Hadapsar, Magarpatta, Wakad, Baner, and surrounding Pune localities.</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); padding: 20px 25px; border-radius: 10px; border: 1px solid rgba(255,255,255,0.05);">
          <h4 style="font-size: 1.1rem; color: #f59e0b; font-weight: 600; margin-bottom: 8px;">How is the bike secured inside the covered truck?</h4>
          <p style="color: #94a3b8; font-size: 0.92rem; line-height: 1.6;">Bikes are wrapped in 7 protective layers and locked in vertical position using wheel chocks and heavy-duty nylon ratchet tie-downs.</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); padding: 20px 25px; border-radius: 10px; border: 1px solid rgba(255,255,255,0.05);">
          <h4 style="font-size: 1.1rem; color: #f59e0b; font-weight: 600; margin-bottom: 8px;">Is transit insurance mandatory for Pune to Bangalore relocation?</h4>
          <p style="color: #94a3b8; font-size: 0.92rem; line-height: 1.6;">Transit insurance is highly recommended and included based on declared vehicle value to safeguard against unforeseen highway risks.</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); padding: 20px 25px; border-radius: 10px; border: 1px solid rgba(255,255,255,0.05);">
          <h4 style="font-size: 1.1rem; color: #f59e0b; font-weight: 600; margin-bottom: 8px;">Should I drain petrol before handing over my motorcycle?</h4>
          <p style="color: #94a3b8; font-size: 0.92rem; line-height: 1.6;">Yes, maintain minimal petrol (less than 1 liter) in the fuel tank to adhere to freight container safety regulations.</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); padding: 20px 25px; border-radius: 10px; border: 1px solid rgba(255,255,255,0.05);">
          <h4 style="font-size: 1.1rem; color: #f59e0b; font-weight: 600; margin-bottom: 8px;">Are custom wooden crates available for Royal Enfield and premium cruisers?</h4>
          <p style="color: #94a3b8; font-size: 0.92rem; line-height: 1.6;">Yes, custom wooden crating is available for Royal Enfield, Jawa, BMW, and high-value sports motorcycles.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA Conversion Footer -->
  <section style="background: linear-gradient(135deg, #1e1b4b 0%, #0f172a 100%); padding: 50px 0; color: #ffffff; text-align: center; border-top: 1px solid rgba(245,158,11,0.2);">
    <div class="container">
      <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin-bottom: 15px;">Ready to Transport Your Bike from Pune to Bangalore?</h2>
      <p style="color: #cbd5e1; font-size: 1.1rem; max-width: 650px; margin: 0 auto 30px;">Get zero-damage guaranteed bike shipping with multi-layer bubble packaging and full transit insurance.</p>
      <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap;">
        <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Us Now" style="padding: 15px 32px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
          <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call <?php echo SITE_PHONE; ?>
        </a>
        <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20to%20book%20Bike%20Transport%20from%20Pune%20to%20Bangalore." title="Instant WhatsApp Booking" target="_blank" style="padding: 15px 32px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
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
      "name": "What are the charges for bike transport from Pune to Bangalore?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Bike transport charges from Pune to Bangalore range from ₹4,800 to ₹10,000 depending on vehicle size, engine cc, and packaging type selected."
      }
    },
    {
      "@type": "Question",
      "name": "How long does it take for a bike to reach Bangalore from Pune?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "The standard transit duration via NH48 is 3 to 4 days from pickup in Pune to doorstep delivery in Bangalore."
      }
    },
    {
      "@type": "Question",
      "name": "Do you deliver to all tech hubs in Bangalore?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, we cover all major residential and IT hubs including Whitefield, Electronic City, Koramangala, Indiranagar, HSR Layout, and Manyata Tech Park area."
      }
    },
    {
      "@type": "Question",
      "name": "What documents are needed to move a bike to Karnataka?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "You need a copy of the Registration Certificate (RC), active vehicle Insurance policy, and owner's Government photo ID proof."
      }
    },
    {
      "@type": "Question",
      "name": "Are GST invoices provided for corporate relocation allowance?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, we provide valid 18% GST tax invoices with Bilty/LR copy that are accepted by IT companies and corporate HR departments."
      }
    },
    {
      "@type": "Question",
      "name": "Is doorstep pickup available across all IT hubs in Pune?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, we offer doorstep pickup from Hinjewadi, Kharadi, Hadapsar, Magarpatta, Wakad, Baner, and surrounding Pune localities."
      }
    },
    {
      "@type": "Question",
      "name": "How is the bike secured inside the covered truck?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Bikes are wrapped in 7 protective layers and locked in vertical position using wheel chocks and heavy-duty nylon ratchet tie-downs."
      }
    },
    {
      "@type": "Question",
      "name": "Is transit insurance mandatory for Pune to Bangalore relocation?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Transit insurance is highly recommended and included based on declared vehicle value to safeguard against unforeseen highway risks."
      }
    },
    {
      "@type": "Question",
      "name": "Should I drain petrol before handing over my motorcycle?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, maintain minimal petrol (less than 1 liter) in the fuel tank to adhere to freight container safety regulations."
      }
    },
    {
      "@type": "Question",
      "name": "Are custom wooden crates available for Royal Enfield and premium cruisers?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, custom wooden crating is available for Royal Enfield, Jawa, BMW, and high-value sports motorcycles."
      }
    }
  ]
}
</script>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
