<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "Bike Transport from Delhi to Ballia | Safe Two-Wheeler Shifting";
$page_desc = "Planning bike transport from Delhi to Ballia? Get safe, insured, and doorstep motorcycle shipping services. View estimated charges, transit times, and packaging details. Complete door-to-door relocation coverage across Connaught Place, Dwarka, Rohini, South Ext, Janakpuri, Laxmi Nagar.";
$page_keywords = "bike transport from delhi to ballia, best bike transport from delhi to ballia, affordable bike transport from delhi to ballia, packers and movers, packers and movers in delhi, top bike transport from delhi to ballia company, household shifting bike transport from delhi to ballia, doorstep bike transport from delhi to ballia, verified bike transport from delhi to ballia services, shree ashirwad bike transport from delhi to ballia";
$canonical_url = "https://shreeashirwadpackersandmovers.com/pages/bike-transport-from-delhi-to-ballia.php";

require_once __DIR__ . '/../includes/header.php';
?>

<main class="site-main">

  <!-- Section 1: Visual Breadcrumb Navigation Bar -->
  <div class="breadcrumb-wrapper" style="background: #0b132b; padding: 12px 0; border-bottom: 1px solid rgba(255,255,255,0.08);">
    <div class="container">
      <div class="breadcrumb-list" style="font-size: 0.88rem; color: #94a3b8;">
        <span class="breadcrumb-item"><a href="<?php echo SITE_URL; ?>" title="Home" style="color: #f59e0b; text-decoration: none;">Home</a></span>
        <span class="breadcrumb-separator" style="margin: 0 8px; color: #475569;">/</span>
        <span class="breadcrumb-item"><a href="<?php echo SITE_URL; ?>/pages/services.php" title="Services" style="color: #f59e0b; text-decoration: none;">Services</a></span>
        <span class="breadcrumb-separator" style="margin: 0 8px; color: #475569;">/</span>
        <span class="breadcrumb-item active" style="color: #cbd5e1;"><?php echo htmlspecialchars($page_title); ?></span>
      </div>
    </div>
  </div>

  <!-- Section 2: Hero Section & Instant WhatsApp Lead Form -->
  <section class="hero-section" style="background: linear-gradient(135deg, #0b132b 0%, #1c2541 100%); padding: 60px 0; color: #ffffff;">
    <div class="container">
      <div class="hero-grid" style="display: grid; grid-template-columns: 1.2fr 0.8fr; gap: 40px; align-items: center;">
        
        <!-- Hero Text Column -->
        <div class="hero-text">
          <span class="section-tag" style="background: rgba(245, 158, 11, 0.15); color: #f59e0b; border: 1px solid rgba(245, 158, 11, 0.4); padding: 6px 16px; border-radius: 20px; font-size: 0.85rem; font-weight: 700; text-transform: uppercase; display: inline-block; margin-bottom: 15px;">
            DELHI TO BALLIA BIKE RELOCATION SPECIALISTS
          </span>
          <h1 style="font-size: 2.5rem; font-weight: 800; line-height: 1.2; margin-bottom: 20px; color: #ffffff;">
            Professional <span style="color: #f59e0b;">Bike Transport from Delhi to Ballia</span>
          </h1>
          <p style="font-size: 1.1rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 25px;">
            Transporting your bike from Delhi to Ballia, Eastern UP (~890 km) requires dedicated enclosed transport, multi-layer bubble padding, and full transit insurance. Shree Ashirwad Packers and Movers provides doorstep motorcycle shipping with live updates and IBA-standard compliance.
          </p>

          <div style="display: flex; gap: 15px; flex-wrap: wrap; margin-bottom: 30px;">
            <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Now" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
              <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call Now: <?php echo SITE_PHONE; ?>
            </a>
            <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20a%20quote%20for%20Bike%20Transport%20from%20Delhi%20to%20Ballia." title="Chat on WhatsApp" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
              <i class="fab fa-whatsapp" style="margin-right: 8px;"></i> Chat on WhatsApp
            </a>
          </div>

          <div style="display: flex; gap: 20px; font-size: 0.9rem; color: #94a3b8; flex-wrap: wrap;">
            <span><strong style="color: #f59e0b;">100% Insured</strong> Transit</span>
            <span><strong style="color: #f59e0b;">7-Layer</strong> Protective Wrap</span>
            <span><strong style="color: #f59e0b;">Door-to-Door</strong> Delivery</span>
          </div>
        </div>

        <!-- Hero Lead Form Column -->
        <div class="hero-form-card" style="background: rgba(255, 255, 255, 0.05); backdrop-filter: blur(10px); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 16px; padding: 30px; box-shadow: 0 15px 35px rgba(0,0,0,0.4);">
          <h2 style="font-size: 1.35rem; color: #ffffff; margin-bottom: 8px; font-weight: 700; text-align: center;">Get Instant Route Quote</h2>
          <p style="font-size: 0.85rem; color: #94a3b8; text-align: center; margin-bottom: 20px;">Delhi → Ballia Shifting Estimate in 2 Mins</p>

          <form action="#" method="POST" onsubmit="sendHeroWhatsAppLead(event, this);">
            <div style="margin-bottom: 14px;">
              <input type="text" name="name" class="form-control" placeholder="Your Full Name" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="margin-bottom: 14px;">
              <input type="tel" name="phone" class="form-control" placeholder="10-Digit Phone Number" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 10px; margin-bottom: 14px;">
              <input type="text" name="move_from" class="form-control" value="Delhi" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
              <input type="text" name="move_to" class="form-control" value="Ballia" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <button type="submit" style="width: 100%; padding: 14px; background: linear-gradient(135deg, #d32f2f 0%, #f59e0b 100%); color: #ffffff; border: none; border-radius: 50px; font-weight: 700; font-size: 1rem; cursor: pointer;">
              Get Free Estimate Now &rarr;
            </button>
          </form>
        </div>

      </div>
    </div>
  </section>

  <!-- Section 3: Key Stats Counter Bar -->
  <section style="background: #0f172a; padding: 35px 0; border-bottom: 1px solid rgba(255,255,255,0.05);">
    <div class="container">
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 20px; text-align: center;">
        <div style="padding: 15px; background: rgba(255,255,255,0.03); border-radius: 10px; border: 1px solid rgba(255,255,255,0.05);">
          <div style="font-size: 1.8rem; font-weight: 800; color: #f59e0b;">9,800+</div>
          <div style="font-size: 0.85rem; color: #94a3b8; margin-top: 5px;">UP Routes Delivered</div>
        </div>
        <div style="padding: 15px; background: rgba(255,255,255,0.03); border-radius: 10px; border: 1px solid rgba(255,255,255,0.05);">
          <div style="font-size: 1.8rem; font-weight: 800; color: #f59e0b;">~890 KM</div>
          <div style="font-size: 0.85rem; color: #94a3b8; margin-top: 5px;">Delhi → Ballia Distance</div>
        </div>
        <div style="padding: 15px; background: rgba(255,255,255,0.03); border-radius: 10px; border: 1px solid rgba(255,255,255,0.05);">
          <div style="font-size: 1.8rem; font-weight: 800; color: #f59e0b;">3 - 4 Days</div>
          <div style="font-size: 0.85rem; color: #94a3b8; margin-top: 5px;">Average Delivery Window</div>
        </div>
        <div style="padding: 15px; background: rgba(255,255,255,0.03); border-radius: 10px; border: 1px solid rgba(255,255,255,0.05);">
          <div style="font-size: 1.8rem; font-weight: 800; color: #f59e0b;">IBA Approved</div>
          <div style="font-size: 0.85rem; color: #94a3b8; margin-top: 5px;">Official GST Invoice</div>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 4: 6-Card Feature Grid -->
  <section style="background: #0b132b; padding: 60px 0; color: #ffffff;">
    <div class="container">
      <div style="text-align: center; margin-bottom: 40px;">
        <h2 style="font-size: 2rem; font-weight: 800; color: #ffffff;">Why Choose Us for Delhi to Ballia Bike Shipping?</h2>
        <p style="color: #94a3b8; margin-top: 10px;">Dedicated intercity motorcycle relocation standards.</p>
      </div>
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 25px;">
        <div style="background: rgba(255,255,255,0.03); padding: 25px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.08);">
          <i class="fas fa-truck-moving" style="font-size: 2rem; color: #f59e0b; margin-bottom: 15px;"></i>
          <h3 style="font-size: 1.2rem; color: #fff; margin-bottom: 10px;">Enclosed Container Shipping</h3>
          <p style="font-size: 0.9rem; color: #94a3b8; line-height: 1.6;">Weatherproof closed carriers guarding your vehicle against dust, rains, and highway hazards across Purvanchal Expressway.</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); padding: 25px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.08);">
          <i class="fas fa-box-open" style="font-size: 2rem; color: #f59e0b; margin-bottom: 15px;"></i>
          <h3 style="font-size: 1.2rem; color: #fff; margin-bottom: 10px;">7-Layer Safety Wrap</h3>
          <p style="font-size: 0.9rem; color: #94a3b8; line-height: 1.6;">Heavy-duty 80-GSM bubble wrap, corrugated sheets, foam edge protectors, and stretch film.</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); padding: 25px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.08);">
          <i class="fas fa-shield-alt" style="font-size: 2rem; color: #f59e0b; margin-bottom: 15px;"></i>
          <h3 style="font-size: 1.2rem; color: #fff; margin-bottom: 10px;">Full Transit Insurance</h3>
          <p style="font-size: 0.9rem; color: #94a3b8; line-height: 1.6;">Financial protection for accidental damage, covering your two-wheeler from pickup point to delivery.</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); padding: 25px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.08);">
          <i class="fas fa-map-marked-alt" style="font-size: 2rem; color: #f59e0b; margin-bottom: 15px;"></i>
          <h3 style="font-size: 1.2rem; color: #fff; margin-bottom: 10px;">Doorstep Collection & Drop</h3>
          <p style="font-size: 0.9rem; color: #94a3b8; line-height: 1.6;">Pickup from Connaught Place, Dwarka, Rohini, South Ext, Janakpuri, Laxmi Nagar and delivery across Ballia city.</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); padding: 25px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.08);">
          <i class="fas fa-file-invoice" style="font-size: 2rem; color: #f59e0b; margin-bottom: 15px;"></i>
          <h4 style="font-size: 1.2rem; color: #fff; margin-bottom: 10px;">IBA Approved Bills</h4>
          <p style="font-size: 0.9rem; color: #94a3b8; line-height: 1.6;">GST-compliant invoices for government and corporate relocation reimbursement claims.</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); padding: 25px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.08);">
          <i class="fas fa-clock" style="font-size: 2rem; color: #f59e0b; margin-bottom: 15px;"></i>
          <h3 style="font-size: 1.2rem; color: #fff; margin-bottom: 10px;">On-Time Delivery</h3>
          <p style="font-size: 0.9rem; color: #94a3b8; line-height: 1.6;">Direct express route via Purvanchal Expressway guaranteeing arrival within 3 to 4 days.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 5: Specialized Services Breakdown & Tariff Table -->
  <section style="background: #0f172a; padding: 60px 0; color: #ffffff;">
    <div class="container">
      <div style="text-align: center; margin-bottom: 40px;">
        <h2 style="font-size: 2rem; font-weight: 800; color: #ffffff;">Delhi to Ballia Bike Shipping Tariff Chart</h2>
        <p style="color: #94a3b8; margin-top: 10px;">Transparent, distance-based rates with no hidden costs.</p>
      </div>

      <div style="overflow-x: auto; margin-bottom: 30px;">
        <table style="width: 100%; border-collapse: collapse; background: rgba(255,255,255,0.02); border: 1px solid rgba(255,255,255,0.08); text-align: left; font-size: 0.95rem;">
          <thead>
            <tr style="background: rgba(245, 158, 11, 0.15); color: #f59e0b; border-bottom: 1px solid rgba(245, 158, 11, 0.3);">
              <th style="padding: 15px; font-weight: 700;">Vehicle Category</th>
              <th style="padding: 15px; font-weight: 700;">Engine Capacity</th>
              <th style="padding: 15px; font-weight: 700;">Standard Freight</th>
              <th style="padding: 15px; font-weight: 700;">Premium Crate Pack</th>
              <th style="padding: 15px; font-weight: 700;">Transit Time</th>
            </tr>
          </thead>
          <tbody style="color: #cbd5e1;">
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.05);">
              <td style="padding: 15px;">Standard Scooters / Mopeds</td>
              <td style="padding: 15px;">100cc - 125cc</td>
              <td style="padding: 15px; color: #f59e0b; font-weight: 700;">₹3,800 - ₹4,800</td>
              <td style="padding: 15px;">₹5,200 - ₹6,200</td>
              <td style="padding: 15px;">3 - 4 Days</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.05);">
              <td style="padding: 15px;">Commuter Motorcycles</td>
              <td style="padding: 15px;">125cc - 180cc</td>
              <td style="padding: 15px; color: #f59e0b; font-weight: 700;">₹4,200 - ₹5,500</td>
              <td style="padding: 15px;">₹5,800 - ₹6,900</td>
              <td style="padding: 15px;">3 - 4 Days</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.05);">
              <td style="padding: 15px;">Sports / Cruiser Bikes</td>
              <td style="padding: 15px;">200cc - 500cc</td>
              <td style="padding: 15px; color: #f59e0b; font-weight: 700;">₹5,200 - ₹6,800</td>
              <td style="padding: 15px;">₹6,900 - ₹8,200</td>
              <td style="padding: 15px;">3 - 4 Days</td>
            </tr>
            <tr>
              <td style="padding: 15px;">Superbikes / Premium Cruisers</td>
              <td style="padding: 15px;">500cc+</td>
              <td style="padding: 15px; color: #f59e0b; font-weight: 700;">₹7,500 - ₹10,500</td>
              <td style="padding: 15px;">₹9,800 - ₹13,000</td>
              <td style="padding: 15px;">3 - 4 Days</td>
            </tr>
          </tbody>
        </table>
      </div>
      <p style="font-size: 0.85rem; color: #94a3b8; text-align: center;">*Rates vary depending on vehicle value, insurance tier, and pickup locality accessibility.</p>
    </div>
  </section>

  <!-- Section 6: 7-Layer Safety Packaging Framework -->
  <section style="background: #0b132b; padding: 60px 0; color: #ffffff;">
    <div class="container">
      <div style="text-align: center; margin-bottom: 40px;">
        <h2 style="font-size: 2rem; font-weight: 800; color: #ffffff;">7-Layer Safety Packaging Protocol</h2>
        <p style="color: #94a3b8; margin-top: 10px;">Ensuring 100% scratch-free transport across state highways.</p>
      </div>
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 20px;">
        <div style="padding: 20px; background: rgba(255,255,255,0.03); border-radius: 10px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #fff; font-size: 1.1rem; margin-bottom: 8px;">Layer 1: Stretch Film Wrapping</h4>
          <p style="font-size: 0.88rem; color: #94a3b8;">Protects bike gloss paint finish against humidity and dust particles.</p>
        </div>
        <div style="padding: 20px; background: rgba(255,255,255,0.03); border-radius: 10px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #fff; font-size: 1.1rem; margin-bottom: 8px;">Layer 2: 80-GSM Heavy Bubble Wrap</h4>
          <p style="font-size: 0.88rem; color: #94a3b8;">Shock-absorbing air cushions around tank, fenders, and side fairings.</p>
        </div>
        <div style="padding: 20px; background: rgba(255,255,255,0.03); border-radius: 10px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #fff; font-size: 1.1rem; margin-bottom: 8px;">Layer 3: Corrugated Cardboard Sheets</h4>
          <p style="font-size: 0.88rem; color: #94a3b8;">Rigid outer barrier safeguarding silencers, engine casings, and mirrors.</p>
        </div>
        <div style="padding: 20px; background: rgba(255,255,255,0.03); border-radius: 10px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #fff; font-size: 1.1rem; margin-bottom: 8px;">Layer 4: Foam Lever Edge Covers</h4>
          <p style="font-size: 0.88rem; color: #94a3b8;">Impact-resistant foam caps for brake levers, clutch, and indicators.</p>
        </div>
        <div style="padding: 20px; background: rgba(255,255,255,0.03); border-radius: 10px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #fff; font-size: 1.1rem; margin-bottom: 8px;">Layer 5: Waterproof Outer Tarpaulin</h4>
          <p style="font-size: 0.88rem; color: #94a3b8;">Complete weather shield preventing water ingress during rainy highway travel.</p>
        </div>
        <div style="padding: 20px; background: rgba(255,255,255,0.03); border-radius: 10px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #fff; font-size: 1.1rem; margin-bottom: 8px;">Layer 6: Ratchet Belt Anchoring</h4>
          <p style="font-size: 0.88rem; color: #94a3b8;">Heavy nylon tie-down belts locking wheels firmly to container floor locks.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 7: Origin Pickup Locality Grid -->
  <section style="background: #0f172a; padding: 60px 0; color: #ffffff;">
    <div class="container">
      <div style="text-align: center; margin-bottom: 40px;">
        <h2 style="font-size: 1.8rem; font-weight: 800; color: #ffffff;">Delhi Pickup Localities</h2>
        <p style="color: #94a3b8; margin-top: 8px;">Free pickup available across all major Delhi NCR sectors.</p>
      </div>
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 15px;">
        <div style="background: rgba(255,255,255,0.03); padding: 15px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.05); text-align: center; color: #cbd5e1;">Connaught Place & Karol Bagh</div>
        <div style="background: rgba(255,255,255,0.03); padding: 15px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.05); text-align: center; color: #cbd5e1;">Dwarka & Uttam Nagar</div>
        <div style="background: rgba(255,255,255,0.03); padding: 15px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.05); text-align: center; color: #cbd5e1;">Rohini & Pitampura</div>
        <div style="background: rgba(255,255,255,0.03); padding: 15px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.05); text-align: center; color: #cbd5e1;">Janakpuri & Tilak Nagar</div>
        <div style="background: rgba(255,255,255,0.03); padding: 15px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.05); text-align: center; color: #cbd5e1;">South Extension & Hauz Khas</div>
        <div style="background: rgba(255,255,255,0.03); padding: 15px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.05); text-align: center; color: #cbd5e1;">Laxmi Nagar & Mayur Vihar</div>
      </div>
    </div>
  </section>

  <!-- Section 8: Intercity Route Network Grid -->
  <section style="background: #0b132b; padding: 60px 0; color: #ffffff;">
    <div class="container">
      <div style="text-align: center; margin-bottom: 40px;">
        <h2 style="font-size: 1.8rem; font-weight: 800; color: #ffffff;">Popular Delhi Routes</h2>
        <p style="color: #94a3b8; margin-top: 8px;">Explore additional connecting routes from Delhi.</p>
      </div>
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); gap: 15px;">
        <a href="<?php echo SITE_URL; ?>/pages/bike-transport-from-delhi-to-ahmedabad.php" style="display: block; padding: 15px; background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 8px; color: #f59e0b; text-decoration: none; text-align: center;">Delhi → Ahmedabad</a>
        <a href="<?php echo SITE_URL; ?>/pages/bike-transport-from-delhi-to-gorakhpur.php" style="display: block; padding: 15px; background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 8px; color: #f59e0b; text-decoration: none; text-align: center;">Delhi → Gorakhpur</a>
        <a href="<?php echo SITE_URL; ?>/pages/bike-transport-from-delhi-to-kolkata.php" style="display: block; padding: 15px; background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 8px; color: #f59e0b; text-decoration: none; text-align: center;">Delhi → Kolkata</a>
        <a href="<?php echo SITE_URL; ?>/pages/bike-transport-from-delhi-to-pune.php" style="display: block; padding: 15px; background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 8px; color: #f59e0b; text-decoration: none; text-align: center;">Delhi → Pune</a>
      </div>
    </div>
  </section>

  <!-- Section 9: IBA Approved GST Billing Documentation -->
  <section style="background: #0f172a; padding: 60px 0; color: #ffffff;">
    <div class="container">
      <div style="text-align: center; margin-bottom: 40px;">
        <h2 style="font-size: 1.8rem; font-weight: 800; color: #ffffff;">Official Relocation Billing</h2>
        <p style="color: #94a3b8; margin-top: 8px;">Documentation prepared for corporate and government claims.</p>
      </div>
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 20px;">
        <div style="padding: 20px; background: rgba(255,255,255,0.03); border-radius: 10px; border: 1px solid rgba(255,255,255,0.08);">
          <i class="fas fa-file-invoice-dollar" style="font-size: 1.8rem; color: #f59e0b; margin-bottom: 12px;"></i>
          <h4 style="color: #fff; margin-bottom: 8px;">GST Invoice</h4>
          <p style="font-size: 0.88rem; color: #94a3b8;">18% GST tax invoice with full SAC code details for easy claim approvals.</p>
        </div>
        <div style="padding: 20px; background: rgba(255,255,255,0.03); border-radius: 10px; border: 1px solid rgba(255,255,255,0.08);">
          <i class="fas fa-truck-loading" style="font-size: 1.8rem; color: #f59e0b; margin-bottom: 12px;"></i>
          <h4 style="color: #fff; margin-bottom: 8px;">Lorry Receipt (LR Copy)</h4>
          <p style="font-size: 0.88rem; color: #94a3b8;">Official consignment note specifying vehicle engine and chassis details.</p>
        </div>
        <div style="padding: 20px; background: rgba(255,255,255,0.03); border-radius: 10px; border: 1px solid rgba(255,255,255,0.08);">
          <i class="fas fa-clipboard-check" style="font-size: 1.8rem; color: #f59e0b; margin-bottom: 12px;"></i>
          <h4 style="color: #fff; margin-bottom: 8px;">Vehicle Condition Sheet</h4>
          <p style="font-size: 0.88rem; color: #94a3b8;">Inspection check-sheet signed prior to loading into the container truck.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 10: Detailed FAQs with JSON-LD Schema -->
  <section style="background: #0b132b; padding: 60px 0; color: #ffffff;">
    <div class="container">
      <div style="text-align: center; margin-bottom: 40px;">
        <h2 style="font-size: 2rem; font-weight: 800; color: #ffffff;">Frequently Asked Questions</h2>
        <p style="color: #94a3b8; margin-top: 10px;">Common queries regarding bike shipping from Delhi to Ballia.</p>
      </div>

      <div style="max-width: 800px; margin: 0 auto; display: grid; gap: 15px;">
        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 10px; padding: 20px;">
          <h3 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 10px;">How long does it take to ship a bike from Delhi to Ballia?</h3>
          <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.6;">Transit time is usually 3 to 4 days via Purvanchal Expressway enclosed transport carriers.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 10px; padding: 20px;">
          <h3 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 10px;">What is the cost of bike transport from Delhi to Ballia?</h3>
          <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.6;">Shipping charges range from ₹3,800 to ₹6,800 depending on bike displacement (cc), packaging level, and insurance coverage.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 10px; padding: 20px;">
          <h3 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 10px;">What documents are mandatory for bike transport to UP?</h3>
          <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.6;">You need to hand over photocopies of your RC, active Insurance policy, PUC certificate, and Aadhaar ID.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 10px; padding: 20px;">
          <h3 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 10px;">Is doorstep pickup available in Delhi?</h3>
          <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.6;">Yes, we offer doorstep bike pickup from all locations in Delhi NCR including Dwarka, Rohini, Janakpuri, and Laxmi Nagar.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 10px; padding: 20px;">
          <h3 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 10px;">How is my motorcycle protected during transit?</h3>
          <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.6;">We use 7-layer packaging featuring bubble wrap, corrugated sheets, foam edge caps, waterproof covers, and nylon ratchet tie-down straps inside enclosed container trucks.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 10px; padding: 20px;">
          <h3 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 10px;">How much petrol should remain in the fuel tank?</h3>
          <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.6;">Fuel must be drained to less than 1-2 liters to meet highway transport safety norms.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 10px; padding: 20px;">
          <h3 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 10px;">Will my bike be covered by insurance during transit?</h3>
          <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.6;">Yes, comprehensive transit insurance is provided based on declared vehicle value to safeguard against any unforeseen accidents.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 10px; padding: 20px;">
          <h3 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 10px;">Can I track the transport status from Delhi to Ballia?</h3>
          <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.6;">Yes, our dedicated customer support team provides real-time movement updates across the ~890 km route.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 10px; padding: 20px;">
          <h3 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 10px;">Do you provide official GST bills for corporate claim submission?</h3>
          <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.6;">Yes, we issue IBA-approved 18% GST invoices and Lorry Receipts (LR) for employer reimbursement.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 10px; padding: 20px;">
          <h3 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 10px;">How can I reserve my bike shipping slot to Ballia?</h3>
          <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.6;">Submit the instant quote form or call our support line directly to confirm your pickup schedule.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 11: Call-To-Action Conversion Footer -->
  <section style="background: linear-gradient(135deg, #1c2541 0%, #0b132b 100%); padding: 60px 0; text-align: center; color: #ffffff; border-top: 1px solid rgba(245, 158, 11, 0.3);">
    <div class="container">
      <h2 style="font-size: 2.2rem; font-weight: 800; margin-bottom: 15px;">Book Your Bike Transport from Delhi to Ballia Today</h2>
      <p style="font-size: 1.1rem; color: #cbd5e1; max-width: 700px; margin: 0 auto 30px; line-height: 1.7;">
        Safe, insured, and doorstep motorcycle shipping across India. Get your quote instantly!
      </p>
      <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap;">
        <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Us Now" style="padding: 15px 35px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #fff; border-radius: 50px; font-weight: 700; text-decoration: none; font-size: 1.05rem; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
          <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call: <?php echo SITE_PHONE; ?>
        </a>
        <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20to%20book%20Bike%20Transport%20from%20Delhi%20to%20Ballia." target="_blank" title="WhatsApp Us" style="padding: 15px 35px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #fff; border-radius: 50px; font-weight: 700; text-decoration: none; font-size: 1.05rem; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
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
      "name": "How long does it take to ship a bike from Delhi to Ballia?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Transit time is usually 3 to 4 days via Purvanchal Expressway enclosed transport carriers."
      }
    },
    {
      "@type": "Question",
      "name": "What is the cost of bike transport from Delhi to Ballia?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Shipping charges range from ₹3,800 to ₹6,800 depending on bike displacement (cc), packaging level, and insurance coverage."
      }
    },
    {
      "@type": "Question",
      "name": "What documents are mandatory for bike transport to UP?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "You need to hand over photocopies of your RC, active Insurance policy, PUC certificate, and Aadhaar ID."
      }
    },
    {
      "@type": "Question",
      "name": "Is doorstep pickup available in Delhi?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, we offer doorstep bike pickup from all locations in Delhi NCR including Dwarka, Rohini, Janakpuri, and Laxmi Nagar."
      }
    },
    {
      "@type": "Question",
      "name": "How is my motorcycle protected during transit?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "We use 7-layer packaging featuring bubble wrap, corrugated sheets, foam edge caps, waterproof covers, and nylon ratchet tie-down straps inside enclosed container trucks."
      }
    },
    {
      "@type": "Question",
      "name": "How much petrol should remain in the fuel tank?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Fuel must be drained to less than 1-2 liters to meet highway transport safety norms."
      }
    },
    {
      "@type": "Question",
      "name": "Will my bike be covered by insurance during transit?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, comprehensive transit insurance is provided based on declared vehicle value to safeguard against any unforeseen accidents."
      }
    },
    {
      "@type": "Question",
      "name": "Can I track the transport status from Delhi to Ballia?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, our dedicated customer support team provides real-time movement updates across the ~890 km route."
      }
    },
    {
      "@type": "Question",
      "name": "Do you provide official GST bills for corporate claim submission?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, we issue IBA-approved 18% GST invoices and Lorry Receipts (LR) for employer reimbursement."
      }
    },
    {
      "@type": "Question",
      "name": "How can I reserve my bike shipping slot to Ballia?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Submit the instant quote form or call our support line directly to confirm your pickup schedule."
      }
    }
  ]
}
</script>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>

