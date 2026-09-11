<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "Packing Materials Guide Jamshedpur | Quality Wrapping | 8409531615";
$page_desc = "Complete Packing Materials Guide for Movers in Jamshedpur. Air-bubble rolls, 5-ply corrugated boxes, foam guards, wooden crates. Call (+91) 8409531615.";
$page_keywords = "packing materials guide jamshedpur, bubble wrap corrugated boxes jamshedpur, shifting packaging supplies bistupur sakchi mango adityapur, heavy duty packing materials jamshedpur";

$page_city = "Jamshedpur";

$faq_list = [
    ['q' => 'Are packing material costs included in your quotation?', 'a' => 'Yes, all 7 layers of packaging materials are included in our upfront written estimate.'],
    ['q' => 'Can I request wooden crating for my glass top dining table?', 'a' => 'Yes, we construct custom wooden crates for glass items, LEDs, and valuable artifacts on request.'],
    ['q' => 'How to book shifting services with Shree Ashirwad Packers?', 'a' => 'Call +91 8409531615 or message us on WhatsApp for instant quote scheduling.']
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
        <span class="breadcrumb-item active">Packing Materials Guide Jamshedpur</span>
      </div>
    </div>
  </div>

  <!-- Hero Section -->
  <section class="hero-section" style="background: linear-gradient(135deg, #0b132b 0%, #1c2541 100%); padding: 60px 0; color: #ffffff;">
    <div class="container">
      <div class="hero-grid" style="display: grid; grid-template-columns: 1.2fr 0.8fr; gap: 40px; align-items: center;">
        
        <div class="hero-text">
          <span class="section-tag" style="background: rgba(245, 158, 11, 0.15); color: #f59e0b; border: 1px solid rgba(245, 158, 11, 0.4); padding: 6px 16px; border-radius: 20px; font-size: 0.85rem; font-weight: 700; text-transform: uppercase; display: inline-block; margin-bottom: 15px;">
            7-Layer Packaging Standards
          </span>
          <h1 style="font-size: 2.7rem; font-weight: 800; line-height: 1.2; margin-bottom: 20px; color: #ffffff;">
            Essential <span style="color: #f59e0b;">Packing Materials Guide Jamshedpur</span>
          </h1>
          <p style="font-size: 1.08rem; color: #cbd5e1; line-height: 1.7; margin-bottom: 25px;">
            Quality packing material is the single most critical factor preventing damage during home or office moving. Discover the premium 7-layer wrapping supplies used by Shree Ashirwad Packers across Bistupur, Sakchi, Mango, Adityapur, Telco, Sonari, and Kadma.
          </p>

          <div style="display: flex; gap: 15px; flex-wrap: wrap; margin-bottom: 30px;">
            <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Now:" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #d32f2f 0%, #f59e0b 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(211, 47, 47, 0.4);">
              <i class="fas fa-phone-alt"></i> Call Now: <?php echo SITE_PHONE; ?>
            </a>
            <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20need%20packing%20material%20details%20and%20quote%20in%20Jamshedpur." title="Chat on WhatsApp" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
              <i class="fab fa-whatsapp"></i> Chat on WhatsApp
            </a>
          </div>
        </div>

        <div class="hero-form-card" style="background: rgba(255, 255, 255, 0.05); backdrop-filter: blur(10px); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 16px; padding: 30px; box-shadow: 0 15px 35px rgba(0,0,0,0.4);">
          <h2 style="font-size: 1.4rem; color: #ffffff; margin-bottom: 8px; font-weight: 700; text-align: center;">Get Free Shifting Quote</h2>
          <p style="font-size: 0.85rem; color: #94a3b8; text-align: center; margin-bottom: 20px;">Receive a custom estimate including packing material cost</p>

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
        <div><h3 style="color: #f59e0b; font-size: 2rem; font-weight: 800;">5-Ply</h3><p style="color: #cbd5e1; font-size: 0.85rem;">Corrugated Cartons</p></div>
        <div><h3 style="color: #f59e0b; font-size: 2rem; font-weight: 800;">100 GSM</h3><p style="color: #cbd5e1; font-size: 0.85rem;">Air-Bubble Cushioning</p></div>
        <div><h3 style="color: #f59e0b; font-size: 2rem; font-weight: 800;">200 Micron</h3><p style="color: #cbd5e1; font-size: 0.85rem;">Waterproof Stretch Film</p></div>
        <div><h3 style="color: #f59e0b; font-size: 2rem; font-weight: 800;">Custom</h3><p style="color: #cbd5e1; font-size: 0.85rem;">Wooden Crate Framing</p></div>
        <div><h3 style="color: #f59e0b; font-size: 2rem; font-weight: 800;">100%</h3><p style="color: #cbd5e1; font-size: 0.85rem;">Zero Breakage Record</p></div>
        <div><h3 style="color: #f59e0b; font-size: 2rem; font-weight: 800;">Silica Gel</h3><p style="color: #cbd5e1; font-size: 0.85rem;">Moisture Absorbent</p></div>
      </div>
    </div>
  </section>

  <!-- Section 3: 6-Card Feature Grid -->
  <section style="padding: 60px 0; background: #ffffff;">
    <div class="container">
      <div style="text-align: center; max-width: 800px; margin: 0 auto 40px auto;">
        <span style="color: #d32f2f; font-weight: 700; text-transform: uppercase; font-size: 0.85rem;">Material Catalog</span>
        <h2 style="font-size: 2.1rem; color: #0b132b; font-weight: 800; margin-top: 5px;">
          Core Packing Materials &amp; Supplies in <span style="color: #d32f2f;">Jamshedpur</span>
        </h2>
        <p style="color: #64748b; font-size: 0.98rem; margin-top: 8px;">
          Industrial-grade packaging supplies engineered to safeguard every household and commercial asset during shifting.
        </p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 25px; margin-bottom: 40px;">
        <div style="background: #f8fafc; padding: 25px; border-radius: 12px; border-top: 4px solid #d32f2f; box-shadow: 0 4px 15px rgba(0,0,0,0.05);">
          <h3 style="font-size: 1.15rem; color: #0b132b; margin-bottom: 8px; font-weight: 700;">5-Ply &amp; 7-Ply Corrugated Cartons</h3>
          <p style="color: #64748b; font-size: 0.9rem; line-height: 1.6;">Heavy-duty kraft paper cardboard boxes in multiple sizes (small, medium, wardrobe cartons) built to hold up to 45 kg load without bending.</p>
        </div>
        <div style="background: #f8fafc; padding: 25px; border-radius: 12px; border-top: 4px solid #f59e0b; box-shadow: 0 4px 15px rgba(0,0,0,0.05);">
          <h3 style="font-size: 1.15rem; color: #0b132b; margin-bottom: 8px; font-weight: 700;">100 GSM Heavy Air-Bubble Rolls</h3>
          <p style="color: #64748b; font-size: 0.9rem; line-height: 1.6;">High-density shock-absorbing air-bubble wrap providing multi-layer cushioning for glassware, LED TVs, mirrors, and wooden furniture.</p>
        </div>
        <div style="background: #f8fafc; padding: 25px; border-radius: 12px; border-top: 4px solid #d32f2f; box-shadow: 0 4px 15px rgba(0,0,0,0.05);">
          <h3 style="font-size: 1.15rem; color: #0b132b; margin-bottom: 8px; font-weight: 700;">200-Micron Stretch Shrink Film</h3>
          <p style="color: #64748b; font-size: 0.9rem; line-height: 1.6;">Transparent poly-stretch plastic film wrapped tightly around mattresses, sofas, and wooden cabinets to seal against water, dust, and stains.</p>
        </div>
        <div style="background: #f8fafc; padding: 25px; border-radius: 12px; border-top: 4px solid #f59e0b; box-shadow: 0 4px 15px rgba(0,0,0,0.05);">
          <h3 style="font-size: 1.15rem; color: #0b132b; margin-bottom: 8px; font-weight: 700;">L-Shaped Foam Corner Guards</h3>
          <p style="color: #64748b; font-size: 0.9rem; line-height: 1.6;">Rigid polyethylene foam edge protectors fitted onto marble tops, wooden dining tables, and glass edges to absorb accidental corner impacts.</p>
        </div>
        <div style="background: #f8fafc; padding: 25px; border-radius: 12px; border-top: 4px solid #d32f2f; box-shadow: 0 4px 15px rgba(0,0,0,0.05);">
          <h3 style="font-size: 1.15rem; color: #0b132b; margin-bottom: 8px; font-weight: 700;">Corrugated Sheet Rolls &amp; Padding</h3>
          <p style="color: #64748b; font-size: 0.9rem; line-height: 1.6;">Flexible corrugated sheets used to wrap large wooden wardrobes, refrigerator bodies, and washing machines for exterior scratch resistance.</p>
        </div>
        <div style="background: #f8fafc; padding: 25px; border-radius: 12px; border-top: 4px solid #f59e0b; box-shadow: 0 4px 15px rgba(0,0,0,0.05);">
          <h3 style="font-size: 1.15rem; color: #0b132b; margin-bottom: 8px; font-weight: 700;">Custom Solid Wooden Box Crates</h3>
          <p style="color: #64748b; font-size: 0.9rem; line-height: 1.6;">Heavy pine wood crates custom built on-site for valuable items like temple mandir structures, large glass dining tops, and oil paintings.</p>
        </div>
      </div>

      <!-- 7-Layer Packing Protocol -->
      <div style="background: #070d19; padding: 35px; border-radius: 16px; border: 1px solid rgba(245, 158, 11, 0.3); color: #ffffff; margin-bottom: 40px;">
        <h3 style="color: #f59e0b; font-size: 1.5rem; font-weight: 800; text-align: center; margin-bottom: 20px;">
          The 7-Layer Damage-Proof Packaging Protocol
        </h3>
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 15px;">
          <div style="background: rgba(255,255,255,0.03); padding: 16px; border-radius: 8px; border-left: 4px solid #f59e0b;"><h4 style="color: #f59e0b; margin-bottom: 4px; font-size: 0.98rem;">Layer 1: Soft Tissue &amp; Anti-Static Wrap</h4><p style="color: #cbd5e1; font-size: 0.85rem; line-height: 1.5; margin: 0;">Butter paper or anti-static film applied directly to polished wood and LED glass screens.</p></div>
          <div style="background: rgba(255,255,255,0.03); padding: 16px; border-radius: 8px; border-left: 4px solid #f59e0b;"><h4 style="color: #f59e0b; margin-bottom: 4px; font-size: 0.98rem;">Layer 2: 100 GSM Air Bubble Wrap</h4><p style="color: #cbd5e1; font-size: 0.85rem; line-height: 1.5; margin: 0;">Multi-turn air bubble sheet wrapping to absorb vibration and highway shock bumps.</p></div>
          <div style="background: rgba(255,255,255,0.03); padding: 16px; border-radius: 8px; border-left: 4px solid #f59e0b;"><h4 style="color: #f59e0b; margin-bottom: 4px; font-size: 0.98rem;">Layer 3: Foam Edge Guards &amp; Corner Pads</h4><p style="color: #cbd5e1; font-size: 0.85rem; line-height: 1.5; margin: 0;">L-shaped foam profiles placed around furniture corners, table edges, and appliance frames.</p></div>
          <div style="background: rgba(255,255,255,0.03); padding: 16px; border-radius: 8px; border-left: 4px solid #f59e0b;"><h4 style="color: #f59e0b; margin-bottom: 4px; font-size: 0.98rem;">Layer 4: 5-Ply Corrugated Cardboard Shield</h4><p style="color: #cbd5e1; font-size: 0.85rem; line-height: 1.5; margin: 0;">Heavy corrugated cardboard sheets wrapped tightly around main body panels.</p></div>
          <div style="background: rgba(255,255,255,0.03); padding: 16px; border-radius: 8px; border-left: 4px solid #f59e0b;"><h4 style="color: #f59e0b; margin-bottom: 4px; font-size: 0.98rem;">Layer 5: Waterproof Stretch Shrink Wrap</h4><p style="color: #cbd5e1; font-size: 0.85rem; line-height: 1.5; margin: 0;">200-micron polythene stretch film sealed tight to resist rain, moisture, and dust.</p></div>
          <div style="background: rgba(255,255,255,0.03); padding: 16px; border-radius: 8px; border-left: 4px solid #f59e0b;"><h4 style="color: #f59e0b; margin-bottom: 4px; font-size: 0.98rem;">Layer 6: Heavy Duty Polypropylene Strapping</h4><p style="color: #cbd5e1; font-size: 0.85rem; line-height: 1.5; margin: 0;">High-tensile PP plastic straps tension-bound around cartons to prevent accidental popping.</p></div>
          <div style="background: rgba(255,255,255,0.03); padding: 16px; border-radius: 8px; border-left: 4px solid #f59e0b;"><h4 style="color: #f59e0b; margin-bottom: 4px; font-size: 0.98rem;">Layer 7: Custom Wooden Crating (Fragile)</h4><p style="color: #cbd5e1; font-size: 0.85rem; line-height: 1.5; margin: 0;">Solid pine wood cage built around fragile, glass, or high-value items for maximum safety.</p></div>
        </div>
      </div>
    </div>
  </section>

  <!-- Material Estimator & Rate Table Section -->
  <section style="padding: 60px 0; background: #0b132b; color: #ffffff;">
    <div class="container" style="max-width: 950px;">
      <div style="text-align: center; margin-bottom: 40px;">
        <span style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Material Estimator Matrix</span>
        <h2 style="font-size: 2.1rem; font-weight: 800; color: #ffffff; margin-top: 8px;">
          Packing Supplies Quantity &amp; Material Chart
        </h2>
        <p style="color: #cbd5e1; font-size: 0.95rem; margin-top: 8px;">
          Estimated packing material required for typical house sizes in Jamshedpur.
        </p>
      </div>

      <!-- Estimator Table -->
      <div style="background: rgba(255,255,255,0.04); border: 1px solid rgba(245,158,11,0.25); border-radius: 12px; padding: 25px; margin-bottom: 35px;">
        <h3 style="color: #f59e0b; font-size: 1.25rem; font-weight: 700; margin-bottom: 16px;">Standard Packaging Supplies Estimation Table</h3>
        <div style="overflow-x: auto;">
          <table style="width: 100%; border-collapse: collapse; color: #cbd5e1; font-size: 0.9rem;">
            <thead>
              <tr style="background: rgba(245,158,11,0.15); color: #f59e0b; text-align: left;">
                <th style="padding: 12px; border: 1px solid rgba(245,158,11,0.3);">Home Size</th>
                <th style="padding: 12px; border: 1px solid rgba(245,158,11,0.3);">5-Ply Cartons</th>
                <th style="padding: 12px; border: 1px solid rgba(245,158,11,0.3);">Bubble Wrap</th>
                <th style="padding: 12px; border: 1px solid rgba(245,158,11,0.3);">Stretch Film</th>
                <th style="padding: 12px; border: 1px solid rgba(245,158,11,0.3);">Foam Guards &amp; Tapes</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td style="padding: 10px; border: 1px solid rgba(255,255,255,0.1);">1 BHK Apartment</td>
                <td style="padding: 10px; border: 1px solid rgba(255,255,255,0.1);">15 - 22 Boxes</td>
                <td style="padding: 10px; border: 1px solid rgba(255,255,255,0.1);">40 - 60 Meters</td>
                <td style="padding: 10px; border: 1px solid rgba(255,255,255,0.1);">2 Rolls (200m)</td>
                <td style="padding: 10px; border: 1px solid rgba(255,255,255,0.1);">12 Guards / 6 Tapes</td>
              </tr>
              <tr style="background: rgba(255,255,255,0.02);">
                <td style="padding: 10px; border: 1px solid rgba(255,255,255,0.1);">2 BHK Apartment</td>
                <td style="padding: 10px; border: 1px solid rgba(255,255,255,0.1);">25 - 35 Boxes</td>
                <td style="padding: 10px; border: 1px solid rgba(255,255,255,0.1);">75 - 110 Meters</td>
                <td style="padding: 10px; border: 1px solid rgba(255,255,255,0.1);">4 Rolls (400m)</td>
                <td style="padding: 10px; border: 1px solid rgba(255,255,255,0.1);">24 Guards / 12 Tapes</td>
              </tr>
              <tr>
                <td style="padding: 10px; border: 1px solid rgba(255,255,255,0.1);">3 BHK House / Villa</td>
                <td style="padding: 10px; border: 1px solid rgba(255,255,255,0.1);">40 - 60 Boxes</td>
                <td style="padding: 10px; border: 1px solid rgba(255,255,255,0.1);">120 - 180 Meters</td>
                <td style="padding: 10px; border: 1px solid rgba(255,255,255,0.1);">6 Rolls (600m)</td>
                <td style="padding: 10px; border: 1px solid rgba(255,255,255,0.1);">36 Guards / 18 Tapes</td>
              </tr>
              <tr style="background: rgba(255,255,255,0.02);">
                <td style="padding: 10px; border: 1px solid rgba(255,255,255,0.1);">Commercial Office</td>
                <td style="padding: 10px; border: 1px solid rgba(255,255,255,0.1);">60 - 120+ Boxes</td>
                <td style="padding: 10px; border: 1px solid rgba(255,255,255,0.1);">150 - 300 Meters</td>
                <td style="padding: 10px; border: 1px solid rgba(255,255,255,0.1);">10 Rolls (1000m)</td>
                <td style="padding: 10px; border: 1px solid rgba(255,255,255,0.1);">50 Guards / 30 Tapes</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

      <!-- Detail Guide Grid -->
      <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 25px;">
        <div style="background: rgba(255,255,255,0.04); border: 1px solid rgba(245,158,11,0.2); padding: 22px; border-radius: 10px;">
          <h4 style="color: #f59e0b; font-size: 1.1rem; margin-bottom: 10px;">Item-Specific Material Usage</h4>
          <p style="color: #cbd5e1; font-size: 0.9rem; line-height: 1.6; margin: 0;">
            • <strong>Crockery &amp; Glassware:</strong> Butter paper wrap + bubble roll + 5-ply small box.<br>
            • <strong>LED Smart TV:</strong> Anti-static foam + bubble wrap + thermocol corner + wooden crate.<br>
            • <strong>Mattress &amp; Sofas:</strong> 200-micron stretch wrap sheath + fabric cloth covers.<br>
            • <strong>Wooden Wardrobes:</strong> Corrugated paper sheet + edge foam + shrink film.
          </p>
        </div>
        <div style="background: rgba(255,255,255,0.04); border: 1px solid rgba(245,158,11,0.2); padding: 22px; border-radius: 10px;">
          <h4 style="color: #f59e0b; font-size: 1.1rem; margin-bottom: 10px;">Why Quality Materials Matter</h4>
          <p style="color: #cbd5e1; font-size: 0.9rem; line-height: 1.6; margin: 0;">
            1. Prevents box collapsing when stacked inside moving trucks.<br>
            2. Shields household furniture from monsoon moisture &amp; humidity.<br>
            3. Absorbs high-frequency road vibrations on national highways.<br>
            4. Ensures 100% claim-free shifting with complete insurance backing.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- 4-Step Packing Workflow -->
  <section style="padding: 60px 0; background: #ffffff;">
    <div class="container">
      <div style="text-align: center; max-width: 800px; margin: 0 auto 40px auto;">
        <span style="color: #d32f2f; font-weight: 700; text-transform: uppercase; font-size: 0.85rem;">SOP Workflow</span>
        <h2 style="font-size: 2.1rem; color: #0b132b; font-weight: 800; margin-top: 5px;">
          4-Step Professional Packing Process
        </h2>
      </div>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 20px;">
        <div style="background: #f8fafc; padding: 25px; border-radius: 12px; border-left: 4px solid #d32f2f;">
          <span style="color: #f59e0b; font-weight: 800; font-size: 0.85rem;">STEP 1</span>
          <h3 style="font-size: 1.15rem; color: #0b132b; margin: 8px 0 6px 0; font-weight: 700;">Material Inventory Audit</h3>
          <p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin: 0;">Our crew brings pre-calculated virgin packing materials (boxes, bubble wrap, tapes, foam) to your doorstep in Jamshedpur.</p>
        </div>
        <div style="background: #f8fafc; padding: 25px; border-radius: 12px; border-left: 4px solid #f59e0b;">
          <span style="color: #f59e0b; font-weight: 800; font-size: 0.85rem;">STEP 2</span>
          <h3 style="font-size: 1.15rem; color: #0b132b; margin: 8px 0 6px 0; font-weight: 700;">7-Layer Item Wrapping</h3>
          <p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin: 0;">Trained packers wrap delicate items in tissue, bubble film, foam guards, corrugated sheets, and stretch wrap sheaths.</p>
        </div>
        <div style="background: #f8fafc; padding: 25px; border-radius: 12px; border-left: 4px solid #d32f2f;">
          <span style="color: #f59e0b; font-weight: 800; font-size: 0.85rem;">STEP 3</span>
          <h3 style="font-size: 1.15rem; color: #0b132b; margin: 8px 0 6px 0; font-weight: 700;">Box Labeling &amp; Coding</h3>
          <p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin: 0;">Every packed box is color-coded and labeled with room names (Kitchen, Master Bedroom) and fragile warning markers.</p>
        </div>
        <div style="background: #f8fafc; padding: 25px; border-radius: 12px; border-left: 4px solid #f59e0b;">
          <span style="color: #f59e0b; font-weight: 800; font-size: 0.85rem;">STEP 4</span>
          <h3 style="font-size: 1.15rem; color: #0b132b; margin: 8px 0 6px 0; font-weight: 700;">Container Truck Loading</h3>
          <p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin: 0;">Packed cartons and crated items are loaded into closed container trucks using heavy lashing belts and wooden pallets.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 4: Contextual Internal Links -->
  <section style="padding: 50px 0; background: #f8fafc;">
    <div class="container">
      <div style="text-align: center; max-width: 800px; margin: 0 auto 30px auto;">
        <h3 style="font-size: 1.8rem; color: #0b132b; font-weight: 800;">Explore Related <span style="color: #d32f2f;">Packing &amp; Relocation Guides</span></h3>
      </div>
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); gap: 15px;">
        <a href="<?php echo SITE_URL; ?>packers-and-movers-in-jamshedpur" title="Movers in Jamshedpur" style="background: #fff; padding: 14px; border-radius: 6px; border: 1px solid #e2e8f0; color: #0b132b; text-decoration: none; font-weight: 600; text-align: center; display: block;"><i class="fas fa-map-marker-alt"></i> Movers in Jamshedpur</a>
        <a href="<?php echo SITE_URL; ?>packers-and-movers-bistupur-jamshedpur" title="Movers in Bistupur" style="background: #fff; padding: 14px; border-radius: 6px; border: 1px solid #e2e8f0; color: #0b132b; text-decoration: none; font-weight: 600; text-align: center; display: block;"><i class="fas fa-map-marker-alt"></i> Movers in Bistupur</a>
        <a href="<?php echo SITE_URL; ?>top-10-shifting-tips-packers-and-movers-in-jamshedpur" title="💡 Top 10 Shifting Tips" style="background: #fff; padding: 14px; border-radius: 6px; border: 1px solid #e2e8f0; color: #0b132b; text-decoration: none; font-weight: 600; text-align: center; display: block;">💡 Top 10 Shifting Tips</a>
        <a href="<?php echo SITE_URL; ?>household-shifting-checklist-jamshedpur" title="Shifting Checklist" style="background: #fff; padding: 14px; border-radius: 6px; border: 1px solid #e2e8f0; color: #0b132b; text-decoration: none; font-weight: 600; text-align: center; display: block;"><i class="fas fa-clipboard-list"></i> Shifting Checklist</a>
        <a href="<?php echo SITE_URL; ?>moving-heavy-furniture-tips-jamshedpur" title="Moving Furniture Tips" style="background: #fff; padding: 14px; border-radius: 6px; border: 1px solid #e2e8f0; color: #0b132b; text-decoration: none; font-weight: 600; text-align: center; display: block;"><i class="fas fa-couch"></i> Moving Furniture Tips</a>
        <a href="<?php echo SITE_URL; ?>monsoon-relocation-tips-jamshedpur" title="☔ Monsoon Moving Tips" style="background: #fff; padding: 14px; border-radius: 6px; border: 1px solid #e2e8f0; color: #0b132b; text-decoration: none; font-weight: 600; text-align: center; display: block;">☔ Monsoon Moving Tips</a>
        <a href="<?php echo SITE_URL; ?>how-to-choose-best-packers-and-movers-in-jamshedpur" title="⭐ How to Choose Movers" style="background: #fff; padding: 14px; border-radius: 6px; border: 1px solid #e2e8f0; color: #0b132b; text-decoration: none; font-weight: 600; text-align: center; display: block;">⭐ How to Choose Movers</a>
        <a href="<?php echo SITE_URL; ?>packers-and-movers-sakchi-jamshedpur" title="Movers in Sakchi" style="background: #fff; padding: 14px; border-radius: 6px; border: 1px solid #e2e8f0; color: #0b132b; text-decoration: none; font-weight: 600; text-align: center; display: block;"><i class="fas fa-map-marker-alt"></i> Movers in Sakchi</a>
      </div>
    </div>
  </section>

  <!-- Expanded 12-Item Packing Material FAQs -->
  <section style="padding: 50px 0; background: #ffffff;">
    <div class="container">
      <div style="text-align: center; max-width: 800px; margin: 0 auto 35px auto;">
        <h2 style="font-size: 2rem; color: #0b132b; font-weight: 800;">Packing Materials FAQs</h2>
      </div>
      <div style="max-width: 850px; margin: 0 auto; display: flex; flex-direction: column; gap: 12px;">
        <div style="background: #f8fafc; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0;"><h4 style="color: #0b132b; font-weight: 700;">Q1: Are packing material costs included in your quotation?</h4><p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin-top: 6px;">Yes, all 7 layers of packaging materials (bubble wrap, 5-ply cartons, stretch film, tapes, foam guards) are 100% included in our upfront written estimate.</p></div>
        <div style="background: #f8fafc; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0;"><h4 style="color: #0b132b; font-weight: 700;">Q2: Can I request custom wooden crating for my glass top dining table or LED TV?</h4><p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin-top: 6px;">Yes, we construct custom solid pine wood crates for large glass dining tables, marble temples, oversized LEDs, and valuable oil paintings on request.</p></div>
        <div style="background: #f8fafc; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0;"><h4 style="color: #0b132b; font-weight: 700;">Q3: What is the difference between 3-ply and 5-ply corrugated cardboard boxes?</h4><p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin-top: 6px;">3-ply boxes are light single-wall cartons for light clothes, whereas 5-ply boxes have double fluted walls engineered to hold heavy loads up to 45 kg without collapsing.</p></div>
        <div style="background: #f8fafc; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0;"><h4 style="color: #0b132b; font-weight: 700;">Q4: How do you protect mattresses and sofa fabric during monsoon moves in Jamshedpur?</h4><p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin-top: 6px;">Mattresses and upholstered sofas are sealed inside 200-micron thick waterproof polyethylene stretch film sheaths, preventing water moisture and dust penetration.</p></div>
        <div style="background: #f8fafc; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0;"><h4 style="color: #0b132b; font-weight: 700;">Q5: Are silica gel packets used inside boxes for long-distance shifting?</h4><p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin-top: 6px;">Yes, desiccant silica gel packets are placed inside sealed cartons carrying electronics, books, and clothes to absorb atmospheric humidity during highway transit.</p></div>
        <div style="background: #f8fafc; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0;"><h4 style="color: #0b132b; font-weight: 700;">Q6: Do you supply wardrobe boxes with hanging metal rods for expensive clothes?</h4><p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin-top: 6px;">Yes, we provide tall 5-ply wardrobe cartons with built-in metal hanging bars so suits, dresses, and sarees stay wrinkle-free throughout the journey.</p></div>
        <div style="background: #f8fafc; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0;"><h4 style="color: #0b132b; font-weight: 700;">Q7: How is fragile kitchen crockery and chinaware packed?</h4><p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin-top: 6px;">Each individual plate or cup is wrapped in tissue paper and air-bubble film, packed vertically inside heavy 5-ply boxes padded with crumpled kraft paper.</p></div>
        <div style="background: #f8fafc; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0;"><h4 style="color: #0b132b; font-weight: 700;">Q8: Are packing materials reused or fresh virgin supplies?</h4><p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin-top: 6px;">We strictly deploy 100% fresh virgin corrugated boxes, bubble rolls, and stretch films for every customer to guarantee maximum hygienic safety and structural strength.</p></div>
        <div style="background: #f8fafc; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0;"><h4 style="color: #0b132b; font-weight: 700;">Q9: Can I buy packing materials directly from Shree Ashirwad Packers for DIY packing?</h4><p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin-top: 6px;">Yes, we supply bulk bubble rolls, 5-ply cartons, stretch films, and sealing tapes directly to households in Jamshedpur at competitive wholesale prices.</p></div>
        <div style="background: #f8fafc; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0;"><h4 style="color: #0b132b; font-weight: 700;">Q10: What adhesive tape is used to seal heavy moving boxes?</h4><p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin-top: 6px;">We use 3-inch wide high-tack acrylic adhesive BOPP tapes applied in H-pattern sealing across all box joints and bottom seams for maximum seal strength.</p></div>
        <div style="background: #f8fafc; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0;"><h4 style="color: #0b132b; font-weight: 700;">Q11: How are wooden furniture corners protected against scuffs?</h4><p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin-top: 6px;">Heavy L-shaped polyethylene foam corner guards and thick corrugated paper pads are taped over all furniture corners before stretch film wrapping.</p></div>
        <div style="background: #f8fafc; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0;"><h4 style="color: #0b132b; font-weight: 700;">Q12: How to book shifting service with 7-layer packing in Jamshedpur?</h4><p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin-top: 6px;">Call <strong>+91 8409531615</strong> or message us on WhatsApp to schedule a free home survey and receive an all-inclusive 7-layer packing estimate.</p></div>
        <div style="background: #f8fafc; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0;"><h4 style="color: #0b132b; font-weight: 700;">Q13: How are heavy electronic items like washing machines and refrigerators wrapped?</h4><p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin-top: 6px;">We disconnect water pipes or power cables, wrap the outer metal body with heavy corrugated paper rolls and bubble wrap, and apply stretch film to protect compressor components.</p></div>
        <div style="background: #f8fafc; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0;"><h4 style="color: #0b132b; font-weight: 700;">Q14: Are unpacked materials removed after unpacking at the destination home?</h4><p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin-top: 6px;">Yes, our unpacking crew disassembles wooden crates, unrolls plastic wrapping, collects all empty boxes, and cleans your property of packing debris before leaving.</p></div>
        <div style="background: #f8fafc; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0;"><h4 style="color: #0b132b; font-weight: 700;">Q15: What special packing supplies are used for office IT servers and desktop computers?</h4><p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin-top: 6px;">Anti-static bubble wrap rolls, custom foam inserts, anti-static poly bags, and heavy 7-ply computer cartons with security tamper seals are deployed for office IT hardware.</p></div>
        <div style="background: #f8fafc; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0;"><h4 style="color: #0b132b; font-weight: 700;">Q16: Can I request extra packing material on shifting day if I have additional items?</h4><p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin-top: 6px;">Our moving vehicles carry 20% buffer packing materials (extra boxes, bubble wrap, tapes) to easily accommodate last-minute household items on shifting day.</p></div>
        <div style="background: #f8fafc; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0;"><h4 style="color: #0b132b; font-weight: 700;">Q17: How are fragile wall paintings, mirrors, and artwork packed?</h4><p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin-top: 6px;">Glass surfaces are covered with masking tape x-patterns, wrapped in thick air-bubble rolls, shielded with heavy corrugated sheets, and framed inside custom wooden crates.</p></div>
        <div style="background: #f8fafc; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0;"><h4 style="color: #0b132b; font-weight: 700;">Q18: What packing standards are used for long-distance intercity moves from Jamshedpur?</h4><p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin-top: 6px;">Intercity moves receive full 7-layer wrapping including thermocol padding, double-turn bubble wrapping, heavy polypropylene box strapping, and waterproof outer stretch film sheaths.</p></div>
      </div>
    </div>
  </section>

  <!-- Section 6: CTA Banner -->
  <section class="cta-banner-section" style="padding: 50px 0; background: linear-gradient(135deg, #0b132b 0%, #1c2541 100%); color: #ffffff;">
    <div class="container">
      <div style="text-align: center; max-width: 800px; margin: 0 auto;">
        <h2 style="font-size: 2.1rem; font-weight: 800; margin-bottom: 15px;">Book 7-Layer Insured Packing in Jamshedpur</h2>
        <p style="color: #cbd5e1; font-size: 0.98rem; margin-bottom: 25px;">Virgin 5-ply cartons, 100 GSM bubble rolls, waterproof stretch film, and custom wooden crates.</p>
        <div style="display: flex; gap: 15px; justify-content: center; flex-wrap: wrap;">
          <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call:" style="padding: 14px 32px; background: linear-gradient(135deg, #d32f2f 0%, #f59e0b 100%); color: #fff; border-radius: 50px; font-weight: 700; text-decoration: none;"><i class="fas fa-phone-alt"></i> Call: <?php echo SITE_PHONE; ?></a>
          <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20need%20shifting%20quote%20with%207-layer%20packing." title="WhatsApp Quote" target="_blank" style="padding: 14px 32px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #fff; border-radius: 50px; font-weight: 700; text-decoration: none;"><i class="fab fa-whatsapp"></i> WhatsApp Quote</a>
        </div>
      </div>
    </div>
  </section>

</main>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
