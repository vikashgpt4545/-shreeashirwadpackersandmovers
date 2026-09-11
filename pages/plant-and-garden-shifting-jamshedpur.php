<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "Plant and Garden Shifting Jamshedpur | Potted Plants | 8409531615";
$page_desc = "Safe Plant and Garden Shifting in Jamshedpur. Breathable crate packing, soil spill protection, care during transit. Call (+91) 8409531615.";
$page_keywords = "plant and garden shifting jamshedpur, potted plant relocation jamshedpur, balcony garden movers bistupur sakchi mango adityapur, nursery plant courier jamshedpur";

$page_city = "Jamshedpur";

$faq_list = [
    ['q' => 'Can plants survive long distance intercity transport?', 'a' => 'Yes, with proper moisture preparation and ventilated aeration crates, plants survive up to 3-4 days of transit.'],
    ['q' => 'What if ceramic pots break during moving?', 'a' => 'We wrap all ceramic and clay pots in thick bubble sheets to prevent breakage.'],
    ['q' => 'How to book plant shifting with Shree Ashirwad Packers?', 'a' => 'Call +91 8409531615 or message us on WhatsApp for garden inspection and quote.']
];

require_once __DIR__ . '/../includes/header.php';
?>

<main class="site-main">

  <!-- Visual Breadcrumb Navigation Bar -->
  <div class="breadcrumb-wrapper">
    <div class="container">
      <div class="breadcrumb-list">
        <span class="breadcrumb-item"><a href="<?php echo SITE_URL; ?>" title="Home">Home</a></span>
        <span class="breadcrumb-separator">/</span>
        <span class="breadcrumb-item"><a href="<?php echo SITE_URL; ?>packers-and-movers-in-jamshedpur" title="Jamshedpur">Jamshedpur</a></span>
        <span class="breadcrumb-separator">/</span>
        <span class="breadcrumb-item active">Plant and Garden Shifting Jamshedpur</span>
      </div>
    </div>
  </div>

  <!-- Hero Section -->
  <section class="hero-section" style="background: linear-gradient(135deg, #0b132b 0%, #1c2541 100%); padding: 60px 0; color: #ffffff;">
    <div class="container">
      <div class="hero-grid" style="display: grid; grid-template-columns: 1.2fr 0.8fr; gap: 40px; align-items: center;">
        
        <div class="hero-text">
          <span class="section-tag" style="background: rgba(245, 158, 11, 0.15); color: #f59e0b; border: 1px solid rgba(245, 158, 11, 0.4); padding: 6px 16px; border-radius: 20px; font-size: 0.85rem; font-weight: 700; text-transform: uppercase; display: inline-block; margin-bottom: 15px;">
            Greenery Relocation Specialist
          </span>
          <h1 style="font-size: 2.7rem; font-weight: 800; line-height: 1.2; margin-bottom: 20px; color: #ffffff;">
            Delicate <span style="color: #f59e0b;">Plant and Garden Shifting Jamshedpur</span>
          </h1>
          <p style="font-size: 1.08rem; color: #cbd5e1; line-height: 1.7; margin-bottom: 25px;">
            Moving your prized indoor potted plants, balcony garden pots, bonsai trees, or rooftop flora to a new home? Shree Ashirwad Packers provides specialized plant relocation using ventilated crates, soil spill wrapping, hydration management, and shock-free vehicle transport across Bistupur, Sakchi, Mango, Adityapur, Telco, Sonari, and Kadma.
          </p>

          <div style="display: flex; gap: 15px; flex-wrap: wrap; margin-bottom: 30px;">
            <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Now:" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #d32f2f 0%, #f59e0b 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(211, 47, 47, 0.4);">
              <i class="fas fa-phone-alt"></i> Call Now: <?php echo SITE_PHONE; ?>
            </a>
            <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20need%20plant%20and%20garden%20shifting%20quote%20in%20Jamshedpur." title="Chat on WhatsApp" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
              <i class="fab fa-whatsapp"></i> Chat on WhatsApp
            </a>
          </div>
        </div>

        <div class="hero-form-card" style="background: rgba(255, 255, 255, 0.05); backdrop-filter: blur(10px); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 16px; padding: 30px; box-shadow: 0 15px 35px rgba(0,0,0,0.4);">
          <h2 style="font-size: 1.4rem; color: #ffffff; margin-bottom: 8px; font-weight: 700; text-align: center;">Get Plant Moving Quote</h2>
          <p style="font-size: 0.85rem; color: #94a3b8; text-align: center; margin-bottom: 20px;">Receive custom plant shifting pricing on WhatsApp</p>

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
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(160px, 1fr)); gap: 15px; text-align: center;">
        <div><h3 style="color: #f59e0b; font-size: 2rem; font-weight: 800;">Ventilated</h3><p style="color: #cbd5e1; font-size: 0.85rem;">Aeration Crate Packaging</p></div>
        <div><h3 style="color: #f59e0b; font-size: 2rem; font-weight: 800;">Zero</h3><p style="color: #cbd5e1; font-size: 0.85rem;">Soil Spill Guarantee</p></div>
        <div><h3 style="color: #f59e0b; font-size: 2rem; font-weight: 800;">Gentle</h3><p style="color: #cbd5e1; font-size: 0.85rem;">Shock-Free Handling</p></div>
        <div><h3 style="color: #f59e0b; font-size: 2rem; font-weight: 800;">100%</h3><p style="color: #cbd5e1; font-size: 0.85rem;">Pot Breakage Insurance</p></div>
        <div><h3 style="color: #f59e0b; font-size: 2rem; font-weight: 800;">3,500+</h3><p style="color: #cbd5e1; font-size: 0.85rem;">Plants Relocated Safely</p></div>
        <div><h3 style="color: #f59e0b; font-size: 2rem; font-weight: 800;">Door Step</h3><p style="color: #cbd5e1; font-size: 0.85rem;">Garden Placement</p></div>
      </div>
    </div>
  </section>

  <!-- Specialized Plant & Garden Shifting Overview Box -->
  <section style="padding: 50px 0; background: linear-gradient(145deg, #0b132b 0%, #172a54 100%); border-bottom: 1px solid rgba(245, 158, 11, 0.3); color: #ffffff;">
    <div class="container" style="max-width: 950px;">
      <h3 style="color: #f59e0b; font-size: 1.4rem; font-weight: 700; margin-bottom: 14px;">Specialized Potted Plant &amp; Balcony Garden Relocation in Jamshedpur</h3>
      <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.7; margin-bottom: 14px;">
        Potted plants, bonsai trees, delicate indoor greenery, and terrace garden flora require expert care during household relocation. Ordinary moving practices often result in broken ceramic pots, spilled soil, snapped stems, or plant dehydration. Shree Ashirwad Packers offers dedicated plant and garden shifting services across Jamshedpur to ensure your greenery survives and thrives at your new address.
      </p>
      <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.7; margin-bottom: 14px;">
        Our <strong>plant and garden shifting in jamshedpur</strong> covers all residential localities including Bistupur, Sakchi, Mango, Adityapur, Telco, Sonari, Kadma, and Jugsalai. We utilize custom ventilated aeration crates, soil-bagging covers, moisture retention techniques, and shock-absorbing truck decks to protect your botanical investment during both local Jamshedpur shifts and long-distance intercity moves to Kolkata, Ranchi, Patna, or Delhi.
      </p>
      <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.7; margin-bottom: 14px;">
        Our trained garden movers inspect your plant collection 24 to 48 hours prior to relocation. We advise on optimal pre-move watering schedules, prune overgrown foliage, and apply protective bubble wrapping to fragile clay, terracotta, and ceramic planters. Plants are loaded last on top-tier vehicle decks with adequate ventilation windows and unloaded first upon arrival at your new destination.
      </p>
      <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.7; margin: 0;">
        With transparent pricing based on pot count and size, 100% genuine IBA-approved GST invoices, and careful doorstep garden placement, Shree Ashirwad Packers is your trusted partner for stress-free green relocation in Jamshedpur.
      </p>
    </div>
  </section>

  <!-- Section 3: Plant Care Features Grid -->
  <section style="padding: 60px 0; background: #ffffff;">
    <div class="container">
      <div style="text-align: center; max-width: 800px; margin: 0 auto 40px auto;">
        <span style="color: #d32f2f; font-weight: 700; text-transform: uppercase; font-size: 0.85rem;">Plant Care Infrastructure</span>
        <h2 style="font-size: 2.1rem; color: #0b132b; font-weight: 800; margin-top: 5px;">
          Key Features of Our <span style="color: #d32f2f;">Jamshedpur Plant Relocation Service</span>
        </h2>
        <p style="color: #64748b; font-size: 0.98rem; margin-top: 8px;">
          Specialized techniques designed to keep your indoor and outdoor plants healthy, hydrated, and intact throughout transit.
        </p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 25px; margin-bottom: 40px;">
        <div style="background: #f8fafc; padding: 25px; border-radius: 12px; border-top: 4px solid #d32f2f; box-shadow: 0 4px 15px rgba(0,0,0,0.05);">
          <h3 style="font-size: 1.15rem; color: #0b132b; margin-bottom: 8px; font-weight: 700;">Ventilated Aeration Crates</h3>
          <p style="color: #64748b; font-size: 0.9rem; line-height: 1.6;">Open-top plastic crates and custom timber frames allowing continuous airflow and light access for live potted plants.</p>
        </div>
        <div style="background: #f8fafc; padding: 25px; border-radius: 12px; border-top: 4px solid #f59e0b; box-shadow: 0 4px 15px rgba(0,0,0,0.05);">
          <h3 style="font-size: 1.15rem; color: #0b132b; margin-bottom: 8px; font-weight: 700;">Zero Soil-Spill Wrapping</h3>
          <p style="color: #64748b; font-size: 0.9rem; line-height: 1.6;">Poly-wrap base covers secured around pot rims to contain soil and moisture, preventing vehicle mess during transit.</p>
        </div>
        <div style="background: #f8fafc; padding: 25px; border-radius: 12px; border-top: 4px solid #d32f2f; box-shadow: 0 4px 15px rgba(0,0,0,0.05);">
          <h3 style="font-size: 1.15rem; color: #0b132b; margin-bottom: 8px; font-weight: 700;">Terracotta &amp; Clay Pot Cushioning</h3>
          <p style="color: #64748b; font-size: 0.9rem; line-height: 1.6;">Multi-layer bubble wrap and corrugated sheet wrapping shielding fragile ceramic and clay pots against cracks.</p>
        </div>
        <div style="background: #f8fafc; padding: 25px; border-radius: 12px; border-top: 4px solid #f59e0b; box-shadow: 0 4px 15px rgba(0,0,0,0.05);">
          <h3 style="font-size: 1.15rem; color: #0b132b; margin-bottom: 8px; font-weight: 700;">Moisture &amp; Hydration Management</h3>
          <p style="color: #64748b; font-size: 0.9rem; line-height: 1.6;">Pre-move root hydration scheduling so plants remain adequately damp without root-rot or waterlogging.</p>
        </div>
        <div style="background: #f8fafc; padding: 25px; border-radius: 12px; border-top: 4px solid #d32f2f; box-shadow: 0 4px 15px rgba(0,0,0,0.05);">
          <h3 style="font-size: 1.15rem; color: #0b132b; margin-bottom: 8px; font-weight: 700;">Top-Tier Vehicle Loading</h3>
          <p style="color: #64748b; font-size: 0.9rem; line-height: 1.6;">Plants are loaded last on top-deck platforms near air vents and unloaded first at your destination to minimize dark hours.</p>
        </div>
        <div style="background: #f8fafc; padding: 25px; border-radius: 12px; border-top: 4px solid #f59e0b; box-shadow: 0 4px 15px rgba(0,0,0,0.05);">
          <h3 style="font-size: 1.15rem; color: #0b132b; margin-bottom: 8px; font-weight: 700;">Balcony &amp; Garden Setup</h3>
          <p style="color: #64748b; font-size: 0.9rem; line-height: 1.6;">Our team carefully places your potted plants on your new balcony, terrace, or garden lawn according to your layout preferences.</p>
        </div>
        <div style="background: #f8fafc; padding: 25px; border-radius: 12px; border-top: 4px solid #d32f2f; box-shadow: 0 4px 15px rgba(0,0,0,0.05);">
          <h3 style="font-size: 1.15rem; color: #0b132b; margin-bottom: 8px; font-weight: 700;">Heavy Planter Hydraulic Lift</h3>
          <p style="color: #64748b; font-size: 0.9rem; line-height: 1.6;">Specialized hydraulic trolleys and lifting straps for effortless movement of heavy concrete, stone, and marble garden planters.</p>
        </div>
        <div style="background: #f8fafc; padding: 25px; border-radius: 12px; border-top: 4px solid #f59e0b; box-shadow: 0 4px 15px rgba(0,0,0,0.05);">
          <h3 style="font-size: 1.15rem; color: #0b132b; margin-bottom: 8px; font-weight: 700;">Bonsai &amp; Exotic Flora Isolation</h3>
          <p style="color: #64748b; font-size: 0.9rem; line-height: 1.6;">Individual wooden frame isolation crates designed for high-value bonsai trees, orchids, and rare ornamental plants.</p>
        </div>
      </div>

      <!-- Specialized Plant Species Relocation Guide Box -->
      <div style="margin-bottom: 40px; background: linear-gradient(135deg, #070d19 0%, #172a54 100%); padding: 30px; border-radius: 16px; border: 1px solid rgba(245, 158, 11, 0.3); color: #ffffff;">
        <h3 style="color: #f59e0b; font-size: 1.4rem; font-weight: 800; text-align: center; margin-bottom: 20px;">
          Plant Species Relocation Protocols
        </h3>
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 20px;">
          <div style="background: rgba(255,255,255,0.04); padding: 18px; border-radius: 10px; border-left: 4px solid #d32f2f;">
            <h4 style="color: #ffffff; font-size: 1.05rem; margin: 0 0 6px 0;">Indoor Foliage &amp; Ferns</h4>
            <p style="color: #cbd5e1; font-size: 0.88rem; line-height: 1.6; margin: 0;">Money plants, monstera, snake plants, and ferns are misted before departure and wrapped in breathable paper sleeves to prevent leaf tear.</p>
          </div>
          <div style="background: rgba(255,255,255,0.04); padding: 18px; border-radius: 10px; border-left: 4px solid #f59e0b;">
            <h4 style="color: #ffffff; font-size: 1.05rem; margin: 0 0 6px 0;">Succulents &amp; Cacti</h4>
            <p style="color: #cbd5e1; font-size: 0.88rem; line-height: 1.6; margin: 0;">Kept dry for 48 hours pre-move. Individual pot cushioning avoids spine damage and stem snap caused by vehicle movement.</p>
          </div>
          <div style="background: rgba(255,255,255,0.04); padding: 18px; border-radius: 10px; border-left: 4px solid #d32f2f;">
            <h4 style="color: #ffffff; font-size: 1.05rem; margin: 0 0 6px 0;">Fragile Ceramic &amp; Clay Pots</h4>
            <p style="color: #cbd5e1; font-size: 0.88rem; line-height: 1.6; margin: 0;">Double bubble wrapped with cardboard base trays, placed in rigid plastic containers to absorb road vibration.</p>
          </div>
          <div style="background: rgba(255,255,255,0.04); padding: 18px; border-radius: 10px; border-left: 4px solid #f59e0b;">
            <h4 style="color: #ffffff; font-size: 1.05rem; margin: 0 0 6px 0;">Large Garden Palms &amp; Ficus</h4>
            <p style="color: #cbd5e1; font-size: 0.88rem; line-height: 1.6; margin: 0;">Tied loosely with jute twine, secured on top-deck platforms with safety straps, and provided ample head clearance.</p>
          </div>
        </div>
      </div>

      <!-- 7-Layer Protective Packaging for Plants -->
      <div style="background: #070d19; padding: 35px; border-radius: 16px; border: 1px solid rgba(245, 158, 11, 0.3); color: #ffffff; margin-bottom: 40px;">
        <h3 style="color: #f59e0b; font-size: 1.5rem; font-weight: 800; text-align: center; margin-bottom: 20px;">
          7-Layer Botanical Protective Packaging Standard
        </h3>
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 15px;">
          <div style="background: rgba(255,255,255,0.03); padding: 16px; border-radius: 8px; border-left: 4px solid #f59e0b;"><h4 style="color: #f59e0b; margin-bottom: 4px; font-size: 0.98rem;">Layer 1: Base Soil-Bag Poly Wrap</h4><p style="color: #cbd5e1; font-size: 0.85rem; line-height: 1.5; margin: 0;">Seals pot soil surface to prevent dirt spilling during transport movement.</p></div>
          <div style="background: rgba(255,255,255,0.03); padding: 16px; border-radius: 8px; border-left: 4px solid #f59e0b;"><h4 style="color: #f59e0b; margin-bottom: 4px; font-size: 0.98rem;">Layer 2: Clay Pot Bubble Cushioning</h4><p style="color: #cbd5e1; font-size: 0.85rem; line-height: 1.5; margin: 0;">Heavy air-bubble wrap around ceramic, clay, and glass planters preventing cracks.</p></div>
          <div style="background: rgba(255,255,255,0.03); padding: 16px; border-radius: 8px; border-left: 4px solid #f59e0b;"><h4 style="color: #f59e0b; margin-bottom: 4px; font-size: 0.98rem;">Layer 3: Foliage Net / Paper Sleeve</h4><p style="color: #cbd5e1; font-size: 0.85rem; line-height: 1.5; margin: 0;">Breathable paper or mesh sleeve gently bundling branches to prevent stem breakage.</p></div>
          <div style="background: rgba(255,255,255,0.03); padding: 16px; border-radius: 8px; border-left: 4px solid #f59e0b;"><h4 style="color: #f59e0b; margin-bottom: 4px; font-size: 0.98rem;">Layer 4: Corrugated Pot Collar</h4><p style="color: #cbd5e1; font-size: 0.85rem; line-height: 1.5; margin: 0;">5-ply corrugated cardboard ring around pot rim protecting structural integrity.</p></div>
          <div style="background: rgba(255,255,255,0.03); padding: 16px; border-radius: 8px; border-left: 4px solid #f59e0b;"><h4 style="color: #f59e0b; margin-bottom: 4px; font-size: 0.98rem;">Layer 5: Open-Top Plastic Aeration Crate</h4><p style="color: #cbd5e1; font-size: 0.85rem; line-height: 1.5; margin: 0;">Rigid plastic crates providing vertical support and preventing pot tipping.</p></div>
          <div style="background: rgba(255,255,255,0.03); padding: 16px; border-radius: 8px; border-left: 4px solid #f59e0b;"><h4 style="color: #f59e0b; margin-bottom: 4px; font-size: 0.98rem;">Layer 6: Anti-Vibration Wooden Pallet Deck</h4><p style="color: #cbd5e1; font-size: 0.85rem; line-height: 1.5; margin: 0;">Elevated wooden base inside moving truck absorbing road bumps and vibration.</p></div>
          <div style="background: rgba(255,255,255,0.03); padding: 16px; border-radius: 8px; border-left: 4px solid #f59e0b;"><h4 style="color: #f59e0b; margin-bottom: 4px; font-size: 0.98rem;">Layer 7: Fragile Live Plant Tagging</h4><p style="color: #cbd5e1; font-size: 0.85rem; line-height: 1.5; margin: 0;">High-visibility neon tags marking crates for top-deck priority loading and gentle handling.</p></div>
        </div>
      </div>
    </div>
  </section>

  <!-- Comprehensive Plant Shifting Pricing Guide Section -->
  <section style="padding: 60px 0; background: #0b132b; color: #ffffff;">
    <div class="container" style="max-width: 950px;">
      <div style="text-align: center; margin-bottom: 40px;">
        <span style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Plant Shifting Price Guide</span>
        <h2 style="font-size: 2.1rem; font-weight: 800; color: #ffffff; margin-top: 8px;">
          Estimated Plant &amp; Garden Shifting Charges in Jamshedpur
        </h2>
        <p style="color: #cbd5e1; font-size: 0.95rem; margin-top: 8px;">
          Transparent pricing structure based on pot count, container material, and destination distance.
        </p>
      </div>

      <!-- Price Table Box -->
      <div style="background: rgba(255,255,255,0.04); border: 1px solid rgba(245,158,11,0.25); border-radius: 12px; padding: 25px; margin-bottom: 35px;">
        <h3 style="color: #f59e0b; font-size: 1.25rem; font-weight: 700; margin-bottom: 16px;">Estimated Plant Relocation Rates (Local &amp; Intercity)</h3>
        <div style="overflow-x: auto;">
          <table style="width: 100%; border-collapse: collapse; color: #cbd5e1; font-size: 0.9rem;">
            <thead>
              <tr style="background: rgba(245,158,11,0.15); color: #f59e0b; text-align: left;">
                <th style="padding: 12px; border: 1px solid rgba(245,158,11,0.3);">Garden / Plant Quantity</th>
                <th style="padding: 12px; border: 1px solid rgba(245,158,11,0.3);">Local Jamshedpur Move</th>
                <th style="padding: 12px; border: 1px solid rgba(245,158,11,0.3);">Intercity Highway Move</th>
                <th style="padding: 12px; border: 1px solid rgba(245,158,11,0.3);">Packaging Included</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td style="padding: 10px; border: 1px solid rgba(255,255,255,0.1);">Small Balcony Set (5 - 10 Pots)</td>
                <td style="padding: 10px; border: 1px solid rgba(255,255,255,0.1);">₹1,200 - ₹2,200</td>
                <td style="padding: 10px; border: 1px solid rgba(255,255,255,0.1);">₹4,500 - ₹8,000</td>
                <td style="padding: 10px; border: 1px solid rgba(255,255,255,0.1);">Soil Wrap + Aeration Crate</td>
              </tr>
              <tr style="background: rgba(255,255,255,0.02);">
                <td style="padding: 10px; border: 1px solid rgba(255,255,255,0.1);">Medium Garden (10 - 25 Pots)</td>
                <td style="padding: 10px; border: 1px solid rgba(255,255,255,0.1);">₹2,200 - ₹4,000</td>
                <td style="padding: 10px; border: 1px solid rgba(255,255,255,0.1);">₹8,000 - ₹14,000</td>
                <td style="padding: 10px; border: 1px solid rgba(255,255,255,0.1);">Bubble Wrap + Top-Deck Loading</td>
              </tr>
              <tr>
                <td style="padding: 10px; border: 1px solid rgba(255,255,255,0.1);">Large Terrace / Rooftop Garden (25+ Pots)</td>
                <td style="padding: 10px; border: 1px solid rgba(255,255,255,0.1);">₹4,000 - ₹7,500</td>
                <td style="padding: 10px; border: 1px solid rgba(255,255,255,0.1);">₹14,000 - ₹24,000</td>
                <td style="padding: 10px; border: 1px solid rgba(255,255,255,0.1);">Custom Timber Crating + Placement</td>
              </tr>
              <tr style="background: rgba(255,255,255,0.02);">
                <td style="padding: 10px; border: 1px solid rgba(255,255,255,0.1);">Heavy Bonsai / Exotic Plants (Per Unit)</td>
                <td style="padding: 10px; border: 1px solid rgba(255,255,255,0.1);">₹500 - ₹1,200</td>
                <td style="padding: 10px; border: 1px solid rgba(255,255,255,0.1);">₹1,500 - ₹3,500</td>
                <td style="padding: 10px; border: 1px solid rgba(255,255,255,0.1);">Individual Wooden Crate</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

      <!-- Detail Guide Grid -->
      <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 25px; margin-bottom: 40px;">
        <div style="background: rgba(255,255,255,0.04); border: 1px solid rgba(245,158,11,0.2); padding: 22px; border-radius: 10px;">
          <h4 style="color: #f59e0b; font-size: 1.1rem; margin-bottom: 10px;">Pre-Move Moisture Preparation</h4>
          <p style="color: #cbd5e1; font-size: 0.9rem; line-height: 1.6; margin: 0;">
            Water your plants thoroughly 24 to 36 hours before departure. Avoid watering on the day of travel to prevent muddy runoff and heavy waterlogged pots that weaken ceramic bases.
          </p>
        </div>
        <div style="background: rgba(255,255,255,0.04); border: 1px solid rgba(245,158,11,0.2); padding: 22px; border-radius: 10px;">
          <h4 style="color: #f59e0b; font-size: 1.1rem; margin-bottom: 10px;">Post-Move Plant Recovery Tips</h4>
          <p style="color: #cbd5e1; font-size: 0.9rem; line-height: 1.6; margin: 0;">
            Upon arrival, place plants in indirect sunlight immediately, sprinkle fresh water on leaves, avoid repotting for 7 days to allow stress recovery, and remove protective wrapping promptly.
          </p>
        </div>
        <div style="background: rgba(255,255,255,0.04); border: 1px solid rgba(245,158,11,0.2); padding: 22px; border-radius: 10px;">
          <h4 style="color: #f59e0b; font-size: 1.1rem; margin-bottom: 10px;">Monsoon Plant Transport Safety</h4>
          <p style="color: #cbd5e1; font-size: 0.9rem; line-height: 1.6; margin: 0;">
            During rainy season shifts in Jamshedpur, potted plants are covered with waterproof tarpaulins that protect soil from excessive rainwater saturation while maintaining proper side aeration.
          </p>
        </div>
        <div style="background: rgba(255,255,255,0.04); border: 1px solid rgba(245,158,11,0.2); padding: 22px; border-radius: 10px;">
          <h4 style="color: #f59e0b; font-size: 1.1rem; margin-bottom: 10px;">Zero Soil Contamination Protocol</h4>
          <p style="color: #cbd5e1; font-size: 0.9rem; line-height: 1.6; margin: 0;">
            We isolate garden pots from household furniture, wooden wardrobes, and electronic appliances inside our moving trucks to eliminate dirt accumulation or water stains on your household goods.
          </p>
        </div>
      </div>

      <!-- Detailed 4-Step Plant Relocation Process -->
      <div style="background: #070d19; padding: 35px; border-radius: 16px; border: 1px solid rgba(245, 158, 11, 0.3); color: #ffffff;">
        <h3 style="color: #f59e0b; font-size: 1.5rem; font-weight: 800; text-align: center; margin-bottom: 25px;">
          4-Step Safe Plant Relocation Roadmap
        </h3>
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 20px;">
          <div style="background: rgba(255,255,255,0.04); padding: 20px; border-radius: 10px; border-left: 4px solid #d32f2f;">
            <span style="color: #f59e0b; font-weight: 800; font-size: 0.85rem;">STEP 1</span>
            <h4 style="color: #ffffff; font-size: 1.1rem; margin: 8px 0 6px 0;">Garden Audit &amp; Pot Inspection</h4>
            <p style="color: #cbd5e1; font-size: 0.88rem; line-height: 1.6; margin: 0;">Our Jamshedpur garden specialist inspects pot count, plant height, ceramic fragility, and provides customized packing recommendations.</p>
          </div>
          <div style="background: rgba(255,255,255,0.04); padding: 20px; border-radius: 10px; border-left: 4px solid #f59e0b;">
            <span style="color: #f59e0b; font-weight: 800; font-size: 0.85rem;">STEP 2</span>
            <h4 style="color: #ffffff; font-size: 1.1rem; margin: 8px 0 6px 0;">7-Layer Botanical Wrapping</h4>
            <p style="color: #cbd5e1; font-size: 0.88rem; line-height: 1.6; margin: 0;">Soil poly-bags are tied, ceramic pots bubble wrapped, and foliage bundled gently with protective paper sleeves on-site in Bistupur or Sakchi.</p>
          </div>
          <div style="background: rgba(255,255,255,0.04); padding: 20px; border-radius: 10px; border-left: 4px solid #d32f2f;">
            <span style="color: #f59e0b; font-weight: 800; font-size: 0.85rem;">STEP 3</span>
            <h4 style="color: #ffffff; font-size: 1.1rem; margin: 8px 0 6px 0;">Top-Deck Truck Loading</h4>
            <p style="color: #cbd5e1; font-size: 0.88rem; line-height: 1.6; margin: 0;">Crates are loaded last on elevated pallet platforms inside our enclosed truck container near ventilation ports for maximum air flow.</p>
          </div>
          <div style="background: rgba(255,255,255,0.04); padding: 20px; border-radius: 10px; border-left: 4px solid #f59e0b;">
            <span style="color: #f59e0b; font-weight: 800; font-size: 0.85rem;">STEP 4</span>
            <h4 style="color: #ffffff; font-size: 1.1rem; margin: 8px 0 6px 0;">Unloading &amp; Balcony Placement</h4>
            <p style="color: #cbd5e1; font-size: 0.88rem; line-height: 1.6; margin: 0;">Unloaded first at destination address, unpacked carefully, and arranged on your new balcony, terrace, or garden lawn as requested.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 5: Contextual Internal Links -->
  <section style="padding: 50px 0; background: #f8fafc;">
    <div class="container">
      <div style="text-align: center; max-width: 800px; margin: 0 auto 30px auto;">
        <h3 style="font-size: 1.8rem; color: #0b132b; font-weight: 800;">Related <span style="color: #d32f2f;">Shifting Guides &amp; Services</span></h3>
      </div>
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); gap: 15px;">
        <a href="<?php echo SITE_URL; ?>packers-and-movers-in-jamshedpur" title="Movers in Jamshedpur" style="background: #fff; padding: 14px; border-radius: 6px; border: 1px solid #e2e8f0; color: #0b132b; text-decoration: none; font-weight: 600; text-align: center; display: block;"><i class="fas fa-map-marker-alt"></i> Movers in Jamshedpur</a>
        <a href="<?php echo SITE_URL; ?>packers-and-movers-bistupur-jamshedpur" title="Movers in Bistupur" style="background: #fff; padding: 14px; border-radius: 6px; border: 1px solid #e2e8f0; color: #0b132b; text-decoration: none; font-weight: 600; text-align: center; display: block;"><i class="fas fa-map-marker-alt"></i> Movers in Bistupur</a>
        <a href="<?php echo SITE_URL; ?>monsoon-relocation-tips-jamshedpur" title="☔ Monsoon Moving Tips" style="background: #fff; padding: 14px; border-radius: 6px; border: 1px solid #e2e8f0; color: #0b132b; text-decoration: none; font-weight: 600; text-align: center; display: block;">☔ Monsoon Moving Tips</a>
        <a href="<?php echo SITE_URL; ?>household-shifting-checklist-jamshedpur" title="Shifting Checklist" style="background: #fff; padding: 14px; border-radius: 6px; border: 1px solid #e2e8f0; color: #0b132b; text-decoration: none; font-weight: 600; text-align: center; display: block;"><i class="fas fa-clipboard-list"></i> Shifting Checklist</a>
        <a href="<?php echo SITE_URL; ?>top-10-shifting-tips-packers-and-movers-in-jamshedpur" title="💡 Top 10 Shifting Tips" style="background: #fff; padding: 14px; border-radius: 6px; border: 1px solid #e2e8f0; color: #0b132b; text-decoration: none; font-weight: 600; text-align: center; display: block;">💡 Top 10 Shifting Tips</a>
        <a href="<?php echo SITE_URL; ?>packing-materials-guide-jamshedpur" title="Packing Materials Guide" style="background: #fff; padding: 14px; border-radius: 6px; border: 1px solid #e2e8f0; color: #0b132b; text-decoration: none; font-weight: 600; text-align: center; display: block;"><i class="fas fa-box"></i> Packing Materials Guide</a>
        <a href="<?php echo SITE_URL; ?>how-to-choose-best-packers-and-movers-in-jamshedpur" title="⭐ How to Choose Movers" style="background: #fff; padding: 14px; border-radius: 6px; border: 1px solid #e2e8f0; color: #0b132b; text-decoration: none; font-weight: 600; text-align: center; display: block;">⭐ How to Choose Movers</a>
        <a href="<?php echo SITE_URL; ?>packers-and-movers-sakchi-jamshedpur" title="Movers in Sakchi" style="background: #fff; padding: 14px; border-radius: 6px; border: 1px solid #e2e8f0; color: #0b132b; text-decoration: none; font-weight: 600; text-align: center; display: block;"><i class="fas fa-map-marker-alt"></i> Movers in Sakchi</a>
      </div>
    </div>
  </section>

  <!-- Section 6: FAQs -->
  <section style="padding: 50px 0; background: #ffffff;">
    <div class="container">
      <div style="text-align: center; max-width: 800px; margin: 0 auto 35px auto;">
        <h2 style="font-size: 2rem; color: #0b132b; font-weight: 800;">Plant Shifting FAQs</h2>
      </div>
      <div style="max-width: 850px; margin: 0 auto; display: flex; flex-direction: column; gap: 12px;">
        <div style="background: #f8fafc; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0;"><h4 style="color: #0b132b; font-weight: 700;">Q1: Can live potted plants survive long-distance intercity transport from Jamshedpur?</h4><p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin-top: 6px;">Yes, with proper pre-move hydration preparation, soil poly-wrapping, and ventilated aeration crates, live plants easily survive 3 to 5 days of intercity road transit.</p></div>
        <div style="background: #f8fafc; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0;"><h4 style="color: #0b132b; font-weight: 700;">Q2: How do you prevent ceramic and terracotta pots from breaking during moving?</h4><p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin-top: 6px;">We wrap ceramic, porcelain, and clay planters in multi-layer bubble sheets and corrugated sleeves before securing them inside rigid plastic crates fitted with anti-vibration pads.</p></div>
        <div style="background: #f8fafc; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0;"><h4 style="color: #0b132b; font-weight: 700;">Q3: When should I water my plants before relocation day?</h4><p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin-top: 6px;">Water your plants thoroughly 24 hours prior to moving. This allows roots to absorb sufficient moisture while allowing excess water to drain out so the pot soil is damp rather than muddy.</p></div>
        <div style="background: #f8fafc; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0;"><h4 style="color: #0b132b; font-weight: 700;">Q4: How are large outdoor potted plants and bonsai trees handled?</h4><p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin-top: 6px;">Heavy outdoor planters and delicate bonsai trees receive custom wooden crate framing constructed on-site in Jamshedpur to ensure zero movement and zero stem breakage during transit.</p></div>
        <div style="background: #f8fafc; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0;"><h4 style="color: #0b132b; font-weight: 700;">Q5: Do you provide soil spill protection inside moving trucks?</h4><p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin-top: 6px;">Yes, every pot base is wrapped in a sealed plastic poly-bag tied around the lower stem to trap loose soil and prevent dirt from spilling over household furniture inside the truck.</p></div>
        <div style="background: #f8fafc; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0;"><h4 style="color: #0b132b; font-weight: 700;">Q6: Where are plants placed inside the moving vehicle?</h4><p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin-top: 6px;">Plants are loaded last on top-tier elevated pallet platforms near container ventilation ports to maximize air circulation and sunlight exposure during daylight travel hours.</p></div>
        <div style="background: #f8fafc; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0;"><h4 style="color: #0b132b; font-weight: 700;">Q7: What should I do immediately after my plants arrive at the new address?</h4><p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin-top: 6px;">Unwrap plants immediately, place them in a shaded area with gentle indirect sunlight, mist the leaves with clean water, and allow them 5 to 7 days to acclimatize before considering repotting.</p></div>
        <div style="background: #f8fafc; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0;"><h4 style="color: #0b132b; font-weight: 700;">Q8: Do you shift terrace garden plants and heavy cement pots in Jamshedpur?</h4><p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin-top: 6px;">Yes, our specialized garden crew carries heavy-duty hydraulic trolleys and lifting straps to safely move heavy cement, stone, and marble garden planters without scratching floors.</p></div>
        <div style="background: #f8fafc; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0;"><h4 style="color: #0b132b; font-weight: 700;">Q9: Are plant shifting charges included in full house shifting quotes?</h4><p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin-top: 6px;">Small quantities of potted plants (3-5 pots) are included in full household moves. Larger balcony gardens or terrace collections are priced based on additional crate and packing material requirements.</p></div>
        <div style="background: #f8fafc; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0;"><h4 style="color: #0b132b; font-weight: 700;">Q10: How can I book plant and garden relocation with Shree Ashirwad Packers?</h4><p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin-top: 6px;">Call us at <strong>+91 8409531615</strong> or send photos of your plant collection on WhatsApp for an immediate garden inspection and customized moving estimate in Jamshedpur.</p></div>
      </div>
    </div>
  </section>

  <!-- Section 6: CTA Banner -->
  <section class="cta-banner-section" style="padding: 50px 0; background: linear-gradient(135deg, #0b132b 0%, #1c2541 100%); color: #ffffff;">
    <div class="container">
      <div style="text-align: center; max-width: 800px; margin: 0 auto;">
        <h2 style="font-size: 2.1rem; font-weight: 800; margin-bottom: 15px;">Book Safe Plant &amp; Garden Shifting Today</h2>
        <div style="display: flex; gap: 15px; justify-content: center; flex-wrap: wrap;">
          <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call:" style="padding: 14px 32px; background: linear-gradient(135deg, #d32f2f 0%, #f59e0b 100%); color: #fff; border-radius: 50px; font-weight: 700; text-decoration: none;"><i class="fas fa-phone-alt"></i> Call: <?php echo SITE_PHONE; ?></a>
          <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20need%20plant%20shifting%20quote%20in%20Jamshedpur." title="WhatsApp Quote" target="_blank" style="padding: 14px 32px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #fff; border-radius: 50px; font-weight: 700; text-decoration: none;"><i class="fab fa-whatsapp"></i> WhatsApp Quote</a>
        </div>
      </div>
    </div>
  </section>

</main>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
