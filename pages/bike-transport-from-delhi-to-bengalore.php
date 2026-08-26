<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "Bike Transport from Delhi to Bengalore | Safe Two-Wheeler Shifting";
$page_desc = "Planning bike transport from Delhi to Bengalore? Get safe, insured, and doorstep motorcycle shipping services. View estimated charges, transit times, and packaging details. Complete door-to-door relocation coverage across Connaught Place, Dwarka, Rohini, South Ext, Janakpuri, Laxmi Nagar.";
$page_keywords = "bike transport from delhi to bengalore, best bike transport from delhi to bengalore, affordable bike transport from delhi to bengalore, packers and movers, packers and movers in delhi, top bike transport from delhi to bengalore company, household shifting bike transport from delhi to bengalore, doorstep bike transport from delhi to bengalore, verified bike transport from delhi to bengalore services, shree ashirwad bike transport from delhi to bengalore";
$canonical_url = "https://shreeashirwadpackersandmovers.com/pages/bike-transport-from-delhi-to-bengalore.php";

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
            DELHI TO BENGALORE BIKE RELOCATION SPECIALISTS
          </span>
          <h1 style="font-size: 2.5rem; font-weight: 800; line-height: 1.2; margin-bottom: 20px; color: #ffffff;">
            Professional <span style="color: #f59e0b;">Bike Transport from Delhi to Bengalore</span>
          </h1>
          <p style="font-size: 1.1rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 25px;">
            Moving your motorcycle from Delhi to Bengalore (~2,150 km) requires heavy-duty 7-layer safety packaging, closed container shipping, and full transit insurance. Shree Ashirwad Packers and Movers guarantees safe doorstep pickup and delivery with live updates.
          </p>

          <div style="display: flex; gap: 15px; flex-wrap: wrap; margin-bottom: 30px;">
            <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Now" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
              <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call Now: <?php echo SITE_PHONE; ?>
            </a>
            <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20a%20quote%20for%20Bike%20Transport%20from%20Delhi%20to%20Bengalore." title="Chat on WhatsApp" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
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
          <p style="font-size: 0.85rem; color: #94a3b8; text-align: center; margin-bottom: 20px;">Delhi → Bengalore Shifting Estimate in 2 Mins</p>

          <form action="#" method="POST" onsubmit="sendHeroWhatsAppLead(event, this);">
            <div style="margin-bottom: 14px;">
              <input type="text" name="name" class="form-control" placeholder="Your Full Name" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="margin-bottom: 14px;">
              <input type="tel" name="phone" class="form-control" placeholder="10-Digit Phone Number" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 10px; margin-bottom: 14px;">
              <input type="text" name="move_from" class="form-control" value="Delhi" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
              <input type="text" name="move_to" class="form-control" value="Bengalore" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
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
          <div style="font-size: 1.8rem; font-weight: 800; color: #f59e0b;">18,200+</div>
          <div style="font-size: 0.85rem; color: #94a3b8; margin-top: 5px;">Bikes Transported Inter-State</div>
        </div>
        <div style="padding: 15px; background: rgba(255,255,255,0.03); border-radius: 10px; border: 1px solid rgba(255,255,255,0.05);">
          <div style="font-size: 1.8rem; font-weight: 800; color: #f59e0b;">~2,150 KM</div>
          <div style="font-size: 0.85rem; color: #94a3b8; margin-top: 5px;">Delhi → Bengalore Corridor</div>
        </div>
        <div style="padding: 15px; background: rgba(255,255,255,0.03); border-radius: 10px; border: 1px solid rgba(255,255,255,0.05);">
          <div style="font-size: 1.8rem; font-weight: 800; color: #f59e0b;">5 - 7 Days</div>
          <div style="font-size: 0.85rem; color: #94a3b8; margin-top: 5px;">Average Delivery Time</div>
        </div>
        <div style="padding: 15px; background: rgba(255,255,255,0.03); border-radius: 10px; border: 1px solid rgba(255,255,255,0.05);">
          <div style="font-size: 1.8rem; font-weight: 800; color: #f59e0b;">IBA Approved</div>
          <div style="font-size: 0.85rem; color: #94a3b8; margin-top: 5px;">100% Tax Compliant Invoice</div>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 4: 6-Card Feature Grid -->
  <section style="background: #0b132b; padding: 60px 0; color: #ffffff;">
    <div class="container">
      <div style="text-align: center; margin-bottom: 40px;">
        <h2 style="font-size: 2rem; font-weight: 800; color: #ffffff;">Why Choose Us for Delhi to Bengalore Bike Shipping?</h2>
        <p style="color: #94a3b8; margin-top: 10px;">Tailored logistics features designed for long-distance motorcycle safety.</p>
      </div>
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 25px;">
        <div style="background: rgba(255,255,255,0.03); padding: 25px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.08);">
          <i class="fas fa-truck-moving" style="font-size: 2rem; color: #f59e0b; margin-bottom: 15px;"></i>
          <h3 style="font-size: 1.2rem; color: #fff; margin-bottom: 10px;">Covered Container Transporters</h3>
          <p style="font-size: 0.9rem; color: #94a3b8; line-height: 1.6;">Weather-sealed trucks protecting your vehicle against rain, dust, and highway vibration over 2,150 km.</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); padding: 25px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.08);">
          <i class="fas fa-box-open" style="font-size: 2rem; color: #f59e0b; margin-bottom: 15px;"></i>
          <h3 style="font-size: 1.2rem; color: #fff; margin-bottom: 10px;">7-Layer Safety Cushioning</h3>
          <p style="font-size: 0.9rem; color: #94a3b8; line-height: 1.6;">Bubble wrap, corrugated board, foam lever guards, and waterproof shrink wrap safeguard every inch.</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); padding: 25px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.08);">
          <i class="fas fa-shield-alt" style="font-size: 2rem; color: #f59e0b; margin-bottom: 15px;"></i>
          <h3 style="font-size: 1.2rem; color: #fff; margin-bottom: 10px;">Transit Insurance Policy</h3>
          <p style="font-size: 0.9rem; color: #94a3b8; line-height: 1.6;">Comprehensive transit insurance policy protecting against accidental loss or damage during shipping.</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); padding: 25px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.08);">
          <i class="fas fa-map-marked-alt" style="font-size: 2rem; color: #f59e0b; margin-bottom: 15px;"></i>
          <h3 style="font-size: 1.2rem; color: #fff; margin-bottom: 10px;">Door Delivery Across Bengalore</h3>
          <p style="font-size: 0.9rem; color: #94a3b8; line-height: 1.6;">Direct home delivery to Whitefield, Electronic City, Indiranagar, Koramangala, and Hebbal.</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); padding: 25px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.08);">
          <i class="fas fa-file-invoice" style="font-size: 2rem; color: #f59e0b; margin-bottom: 15px;"></i>
          <h3 style="font-size: 1.2rem; color: #fff; margin-bottom: 10px;">IBA Approved Invoicing</h3>
          <p style="font-size: 0.9rem; color: #94a3b8; line-height: 1.6;">Official GST bills suitable for corporate relocation claims and tax reporting.</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); padding: 25px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.08);">
          <i class="fas fa-clock" style="font-size: 2rem; color: #f59e0b; margin-bottom: 15px;"></i>
          <h3 style="font-size: 1.2rem; color: #fff; margin-bottom: 10px;">Guaranteed Time Window</h3>
          <p style="font-size: 0.9rem; color: #94a3b8; line-height: 1.6;">Strict long-haul transit tracking ensuring delivery within 5 to 7 days.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 5: Specialized Services Breakdown & Tariff Table -->
  <section style="background: #0f172a; padding: 60px 0; color: #ffffff;">
    <div class="container">
      <div style="text-align: center; margin-bottom: 40px;">
        <h2 style="font-size: 2rem; font-weight: 800; color: #ffffff;">Delhi to Bengalore Bike Shipping Charges</h2>
        <p style="color: #94a3b8; margin-top: 10px;">Clear, transparent pricing schedule based on motorcycle model and capacity.</p>
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
              <td style="padding: 15px; color: #f59e0b; font-weight: 700;">₹5,500 - ₹6,800</td>
              <td style="padding: 15px;">₹7,200 - ₹8,500</td>
              <td style="padding: 15px;">5 - 6 Days</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.05);">
              <td style="padding: 15px;">Commuter Motorcycles</td>
              <td style="padding: 15px;">125cc - 180cc</td>
              <td style="padding: 15px; color: #f59e0b; font-weight: 700;">₹6,200 - ₹7,800</td>
              <td style="padding: 15px;">₹8,200 - ₹9,800</td>
              <td style="padding: 15px;">5 - 7 Days</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.05);">
              <td style="padding: 15px;">Sports / Cruiser Bikes</td>
              <td style="padding: 15px;">200cc - 500cc</td>
              <td style="padding: 15px; color: #f59e0b; font-weight: 700;">₹7,800 - ₹9,800</td>
              <td style="padding: 15px;">₹10,500 - ₹12,500</td>
              <td style="padding: 15px;">5 - 7 Days</td>
            </tr>
            <tr>
              <td style="padding: 15px;">Superbikes / Premium Cruisers</td>
              <td style="padding: 15px;">500cc+</td>
              <td style="padding: 15px; color: #f59e0b; font-weight: 700;">₹11,000 - ₹16,000</td>
              <td style="padding: 15px;">₹14,500 - ₹19,000</td>
              <td style="padding: 15px;">5 - 7 Days</td>
            </tr>
          </tbody>
        </table>
      </div>
      <p style="font-size: 0.85rem; color: #94a3b8; text-align: center;">*Final price depend on declared vehicle value, transit insurance choice, and specific pickup location.</p>
    </div>
  </section>

  <!-- Section 6: 7-Layer Safety Packaging Framework -->
  <section style="background: #0b132b; padding: 60px 0; color: #ffffff;">
    <div class="container">
      <div style="text-align: center; margin-bottom: 40px;">
        <h2 style="font-size: 2rem; font-weight: 800; color: #ffffff;">7-Layer Safety Packaging Standard</h2>
        <p style="color: #94a3b8; margin-top: 10px;">Ensuring complete physical protection over long-distance transit.</p>
      </div>
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 20px;">
        <div style="padding: 20px; background: rgba(255,255,255,0.03); border-radius: 10px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #fff; font-size: 1.1rem; margin-bottom: 8px;">Layer 1: Stretch Film Wrapping</h4>
          <p style="font-size: 0.88rem; color: #94a3b8;">Protects original body paint against dust and road grime.</p>
        </div>
        <div style="padding: 20px; background: rgba(255,255,255,0.03); border-radius: 10px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #fff; font-size: 1.1rem; margin-bottom: 8px;">Layer 2: 80-GSM Heavy Bubble Wrap</h4>
          <p style="font-size: 0.88rem; color: #94a3b8;">Dense shock-absorbing air bubbles around tank, headlight, and cowlings.</p>
        </div>
        <div style="padding: 20px; background: rgba(255,255,255,0.03); border-radius: 10px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #fff; font-size: 1.1rem; margin-bottom: 8px;">Layer 3: Corrugated Cardboard Sheets</h4>
          <p style="font-size: 0.88rem; color: #94a3b8;">Heavy cardboard shielding silencer, engine casing, and alloy wheels.</p>
        </div>
        <div style="padding: 20px; background: rgba(255,255,255,0.03); border-radius: 10px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #fff; font-size: 1.1rem; margin-bottom: 8px;">Layer 4: Foam Corner Caps</h4>
          <p style="font-size: 0.88rem; color: #94a3b8;">Impact foam caps for brake levers, clutch assembly, and mirrors.</p>
        </div>
        <div style="padding: 20px; background: rgba(255,255,255,0.03); border-radius: 10px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #fff; font-size: 1.1rem; margin-bottom: 8px;">Layer 5: Waterproof Poly Cover</h4>
          <p style="font-size: 0.88rem; color: #94a3b8;">Complete waterproof cover protecting against rain during interstate haulage.</p>
        </div>
        <div style="padding: 20px; background: rgba(255,255,255,0.03); border-radius: 10px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #fff; font-size: 1.1rem; margin-bottom: 8px;">Layer 6: Ratchet Tie-Down Belts</h4>
          <p style="font-size: 0.88rem; color: #94a3b8;">Heavy nylon straps anchoring wheels into container floor locks.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 7: Origin Pickup Locality Grid -->
  <section style="background: #0f172a; padding: 60px 0; color: #ffffff;">
    <div class="container">
      <div style="text-align: center; margin-bottom: 40px;">
        <h2 style="font-size: 1.8rem; font-weight: 800; color: #ffffff;">Delhi Pickup Hubs</h2>
        <p style="color: #94a3b8; margin-top: 8px;">Free pickup available across all major Delhi localities.</p>
      </div>
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 15px;">
        <div style="background: rgba(255,255,255,0.03); padding: 15px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.05); text-align: center; color: #cbd5e1;">Connaught Place & Central Delhi</div>
        <div style="background: rgba(255,255,255,0.03); padding: 15px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.05); text-align: center; color: #cbd5e1;">Dwarka & Uttam Nagar</div>
        <div style="background: rgba(255,255,255,0.03); padding: 15px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.05); text-align: center; color: #cbd5e1;">Rohini & Shalimar Bagh</div>
        <div style="background: rgba(255,255,255,0.03); padding: 15px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.05); text-align: center; color: #cbd5e1;">South Extension & Saket</div>
        <div style="background: rgba(255,255,255,0.03); padding: 15px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.05); text-align: center; color: #cbd5e1;">Janakpuri & Paschim Vihar</div>
        <div style="background: rgba(255,255,255,0.03); padding: 15px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.05); text-align: center; color: #cbd5e1;">Laxmi Nagar & Mayur Vihar</div>
      </div>
    </div>
  </section>

  <!-- Section 8: Intercity Route Network Grid -->
  <section style="background: #0b132b; padding: 60px 0; color: #ffffff;">
    <div class="container">
      <div style="text-align: center; margin-bottom: 40px;">
        <h2 style="font-size: 1.8rem; font-weight: 800; color: #ffffff;">Related Long-Distance Routes</h2>
        <p style="color: #94a3b8; margin-top: 8px;">Explore major interstate bike transport routes from Delhi.</p>
      </div>
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); gap: 15px;">
        <a href="<?php echo SITE_URL; ?>/pages/bike-transport-from-delhi-to-bangalore.php" style="display: block; padding: 15px; background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 8px; color: #f59e0b; text-decoration: none; text-align: center;">Delhi → Bangalore</a>
        <a href="<?php echo SITE_URL; ?>/pages/bike-transport-from-delhi-to-hyderabad.php" style="display: block; padding: 15px; background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 8px; color: #f59e0b; text-decoration: none; text-align: center;">Delhi → Hyderabad</a>
        <a href="<?php echo SITE_URL; ?>/pages/bike-transport-from-delhi-to-chennai.php" style="display: block; padding: 15px; background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 8px; color: #f59e0b; text-decoration: none; text-align: center;">Delhi → Chennai</a>
        <a href="<?php echo SITE_URL; ?>/pages/bike-transport-from-delhi-to-mumbai.php" style="display: block; padding: 15px; background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 8px; color: #f59e0b; text-decoration: none; text-align: center;">Delhi → Mumbai</a>
      </div>
    </div>
  </section>

  <!-- Section 9: IBA Approved GST Billing Documentation -->
  <section style="background: #0f172a; padding: 60px 0; color: #ffffff;">
    <div class="container">
      <div style="text-align: center; margin-bottom: 40px;">
        <h2 style="font-size: 1.8rem; font-weight: 800; color: #ffffff;">Official Billing Documentation</h2>
        <p style="color: #94a3b8; margin-top: 8px;">Documentation compliant with MNC and government relocation claims.</p>
      </div>
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 20px;">
        <div style="padding: 20px; background: rgba(255,255,255,0.03); border-radius: 10px; border: 1px solid rgba(255,255,255,0.08);">
          <i class="fas fa-file-invoice-dollar" style="font-size: 1.8rem; color: #f59e0b; margin-bottom: 12px;"></i>
          <h4 style="color: #fff; margin-bottom: 8px;">GST Invoice</h4>
          <p style="font-size: 0.88rem; color: #94a3b8;">18% GST tax invoice specifying vehicle SAC codes for hassle-free claim processing.</p>
        </div>
        <div style="padding: 20px; background: rgba(255,255,255,0.03); border-radius: 10px; border: 1px solid rgba(255,255,255,0.08);">
          <i class="fas fa-truck-loading" style="font-size: 1.8rem; color: #f59e0b; margin-bottom: 12px;"></i>
          <h4 style="color: #fff; margin-bottom: 8px;">Lorry Receipt (LR Copy)</h4>
          <p style="font-size: 0.88rem; color: #94a3b8;">Official consignment note specifying bike engine and chassis details.</p>
        </div>
        <div style="padding: 20px; background: rgba(255,255,255,0.03); border-radius: 10px; border: 1px solid rgba(255,255,255,0.08);">
          <i class="fas fa-clipboard-check" style="font-size: 1.8rem; color: #f59e0b; margin-bottom: 12px;"></i>
          <h4 style="color: #fff; margin-bottom: 8px;">Pre-Pickup Inspection</h4>
          <p style="font-size: 0.88rem; color: #94a3b8;">Condition report detailing fuel levels and existing scratches prior to loading.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 10: Detailed FAQs with JSON-LD Schema -->
  <section style="background: #0b132b; padding: 60px 0; color: #ffffff;">
    <div class="container">
      <div style="text-align: center; margin-bottom: 40px;">
        <h2 style="font-size: 2rem; font-weight: 800; color: #ffffff;">Frequently Asked Questions</h2>
        <p style="color: #94a3b8; margin-top: 10px;">Everything you need to know about bike transport from Delhi to Bengalore.</p>
      </div>

      <div style="max-width: 800px; margin: 0 auto; display: grid; gap: 15px;">
        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 10px; padding: 20px;">
          <h3 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 10px;">How long does bike transport from Delhi to Bengalore take?</h3>
          <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.6;">Transit time is usually 5 to 7 days via covered container trucks across the ~2,150 km route.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 10px; padding: 20px;">
          <h3 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 10px;">What is the cost of shipping a bike from Delhi to Bengalore?</h3>
          <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.6;">Two-wheeler transport charges range from ₹5,500 to ₹9,800 based on engine cc capacity and packing selection.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 10px; padding: 20px;">
          <h3 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 10px;">What documents are mandatory for motorcycle shipping?</h3>
          <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.6;">You must hand over copies of your Bike RC, Insurance policy, PUC certificate, and Aadhaar ID proof.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 10px; padding: 20px;">
          <h3 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 10px;">Is door-to-door delivery available in Bengalore?</h3>
          <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.6;">Yes, we deliver directly to your doorstep across all major localities in Bengalore including Whitefield, Electronic City, and Koramangala.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 10px; padding: 20px;">
          <h3 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 10px;">How is the motorcycle packaged for safety?</h3>
          <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.6;">We wrap the bike in 7 layers including heavy bubble wrap, corrugated sheets, foam edge caps, and waterproof tarpaulin.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 10px; padding: 20px;">
          <h3 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 10px;">How much petrol should remain in the fuel tank?</h3>
          <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.6;">Keep less than 1-2 liters of petrol to avoid leakage or fire risks in closed containers.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 10px; padding: 20px;">
          <h3 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 10px;">Is insurance provided for the bike during transit?</h3>
          <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.6;">Yes, comprehensive transit insurance is provided based on vehicle valuation to protect against any unforeseen accidents.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 10px; padding: 20px;">
          <h3 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 10px;">Can I track my vehicle during long-distance movement?</h3>
          <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.6;">Yes, live tracking updates are shared with you by our move coordination team throughout the journey.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 10px; padding: 20px;">
          <h3 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 10px;">Are GST bills provided for corporate claim reimbursement?</h3>
          <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.6;">Yes, official 18% GST invoices and LR receipts are provided for claim submission.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 10px; padding: 20px;">
          <h3 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 10px;">How do I book bike shipping from Delhi to Bengalore?</h3>
          <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.6;">Call us or fill out the quick lead form on this page to get a quote and schedule pickup.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 11: Call-To-Action Conversion Footer -->
  <section style="background: linear-gradient(135deg, #1c2541 0%, #0b132b 100%); padding: 60px 0; text-align: center; color: #ffffff; border-top: 1px solid rgba(245, 158, 11, 0.3);">
    <div class="container">
      <h2 style="font-size: 2.2rem; font-weight: 800; margin-bottom: 15px;">Book Your Bike Transport from Delhi to Bengalore Today</h2>
      <p style="font-size: 1.1rem; color: #cbd5e1; max-width: 700px; margin: 0 auto 30px; line-height: 1.7;">
        Safe, insured, and doorstep motorcycle shipping across India. Get your free estimate now!
      </p>
      <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap;">
        <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Us Now" style="padding: 15px 35px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #fff; border-radius: 50px; font-weight: 700; text-decoration: none; font-size: 1.05rem; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
          <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call: <?php echo SITE_PHONE; ?>
        </a>
        <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20to%20book%20Bike%20Transport%20from%20Delhi%20to%20Bengalore." target="_blank" title="WhatsApp Us" style="padding: 15px 35px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #fff; border-radius: 50px; font-weight: 700; text-decoration: none; font-size: 1.05rem; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
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
      "name": "How long does bike transport from Delhi to Bengalore take?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Transit time is usually 5 to 7 days via covered container trucks across the ~2,150 km route."
      }
    },
    {
      "@type": "Question",
      "name": "What is the cost of shipping a bike from Delhi to Bengalore?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Two-wheeler transport charges range from ₹5,500 to ₹9,800 based on engine cc capacity and packing selection."
      }
    },
    {
      "@type": "Question",
      "name": "What documents are mandatory for motorcycle shipping?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "You must hand over copies of your Bike RC, Insurance policy, PUC certificate, and Aadhaar ID proof."
      }
    },
    {
      "@type": "Question",
      "name": "Is door-to-door delivery available in Bengalore?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, we deliver directly to your doorstep across all major localities in Bengalore including Whitefield, Electronic City, and Koramangala."
      }
    },
    {
      "@type": "Question",
      "name": "How is the motorcycle packaged for safety?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "We wrap the bike in 7 layers including heavy bubble wrap, corrugated sheets, foam edge caps, and waterproof tarpaulin."
      }
    },
    {
      "@type": "Question",
      "name": "How much petrol should remain in the fuel tank?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Keep less than 1-2 liters of petrol to avoid leakage or fire risks in closed containers."
      }
    },
    {
      "@type": "Question",
      "name": "Is insurance provided for the bike during transit?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, comprehensive transit insurance is provided based on vehicle valuation to protect against any unforeseen accidents."
      }
    },
    {
      "@type": "Question",
      "name": "Can I track my vehicle during long-distance movement?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, live tracking updates are shared with you by our move coordination team throughout the journey."
      }
    },
    {
      "@type": "Question",
      "name": "Are GST bills provided for corporate claim reimbursement?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, official 18% GST invoices and LR receipts are provided for claim submission."
      }
    },
    {
      "@type": "Question",
      "name": "How do I book bike shipping from Delhi to Bengalore?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Call us or fill out the quick lead form on this page to get a quote and schedule pickup."
      }
    }
  ]
}
</script>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>

