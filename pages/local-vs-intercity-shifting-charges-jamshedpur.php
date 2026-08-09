<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "Local vs Intercity Shifting Charges Jamshedpur | Price Guide | 8409531615";
$page_desc = "Comparison of Local vs Intercity Shifting Charges in Jamshedpur. Cost breakdown for intra-city home moving vs long-haul routes. Call (+91) 8409531615.";
$page_keywords = "local vs intercity shifting charges jamshedpur, local house moving rates bistupur sakchi mango adityapur, intercity packers cost breakdown jamshedpur, shifting bill comparison jamshedpur";

$page_city = "Jamshedpur";

$faq_list = [
    ['q' => 'How can I get an exact price quote for local shifting in Jamshedpur?', 'a' => 'Contact Shree Ashirwad Packers via phone or WhatsApp for a free instant local survey.'],
    ['q' => 'Are GST and toll charges extra for intercity moves?', 'a' => 'Our written intercity quotes clearly specify toll charges and 18% GST up front with zero hidden fees.'],
    ['q' => 'How to reach Shree Ashirwad Packers for price estimation?', 'a' => 'Call +91 8409531615 or message us on WhatsApp for immediate support.']
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
        <span class="breadcrumb-item active">Local vs Intercity Shifting Charges Jamshedpur</span>
      </div>
    </div>
  </div>

  <!-- Hero Section -->
  <section class="hero-section" style="background: linear-gradient(135deg, #0b132b 0%, #1c2541 100%); padding: 60px 0; color: #ffffff;">
    <div class="container">
      <div class="hero-grid" style="display: grid; grid-template-columns: 1.2fr 0.8fr; gap: 40px; align-items: center;">
        
        <div class="hero-text">
          <span class="section-tag" style="background: rgba(245, 158, 11, 0.15); color: #f59e0b; border: 1px solid rgba(245, 158, 11, 0.4); padding: 6px 16px; border-radius: 20px; font-size: 0.85rem; font-weight: 700; text-transform: uppercase; display: inline-block; margin-bottom: 15px;">
            Price Comparison Guide
          </span>
          <h1 style="font-size: 2.7rem; font-weight: 800; line-height: 1.2; margin-bottom: 20px; color: #ffffff;">
            Comparing <span style="color: #f59e0b;">Local vs Intercity Shifting Charges in Jamshedpur</span>
          </h1>
          <p style="font-size: 1.08rem; color: #cbd5e1; line-height: 1.7; margin-bottom: 25px;">
            Wondering why long-distance intercity relocation costs differently than moving within Jamshedpur? Read our 2026 cost comparison breakdown covering labor fees, container truck pricing, 7-layer packaging materials, toll taxes, and transit insurance across Bistupur, Sakchi, Mango, Adityapur, Telco, Sonari, and Kadma.
          </p>

          <div style="display: flex; gap: 15px; flex-wrap: wrap; margin-bottom: 30px;">
            <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Now:" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #d32f2f 0%, #f59e0b 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(211, 47, 47, 0.4);">
              <i class="fas fa-phone-alt"></i> Call Now: <?php echo SITE_PHONE; ?>
            </a>
            <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20need%20shifting%20price%20comparison%20quote%20in%20Jamshedpur." title="Chat on WhatsApp" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
              <i class="fab fa-whatsapp"></i> Chat on WhatsApp
            </a>
          </div>
        </div>

        <div class="hero-form-card" style="background: rgba(255, 255, 255, 0.05); backdrop-filter: blur(10px); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 16px; padding: 30px; box-shadow: 0 15px 35px rgba(0,0,0,0.4);">
          <h2 style="font-size: 1.4rem; color: #ffffff; margin-bottom: 8px; font-weight: 700; text-align: center;">Get Free Shifting Quote</h2>
          <p style="font-size: 0.85rem; color: #94a3b8; text-align: center; margin-bottom: 20px;">Receive local vs intercity cost estimate on WhatsApp</p>

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

  <!-- Section 2: Stats Bar -->
  <section style="padding: 35px 0; background: #070d19; border-bottom: 1px solid rgba(245, 158, 11, 0.2);">
    <div class="container">
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(160px, 1fr)); gap: 15px; text-align: center;">
        <div><h3 style="color: #f59e0b; font-size: 2rem; font-weight: 800;">Local</h3><p style="color: #cbd5e1; font-size: 0.85rem;">Labor &amp; Volume Driven</p></div>
        <div><h3 style="color: #f59e0b; font-size: 2rem; font-weight: 800;">Intercity</h3><p style="color: #cbd5e1; font-size: 0.85rem;">Fuel, Tolls &amp; Container Fleet</p></div>
        <div><h3 style="color: #f59e0b; font-size: 2rem; font-weight: 800;">100%</h3><p style="color: #cbd5e1; font-size: 0.85rem;">Written Price Quotes</p></div>
        <div><h3 style="color: #f59e0b; font-size: 2rem; font-weight: 800;">7-Layer</h3><p style="color: #cbd5e1; font-size: 0.85rem;">Highway Packaging</p></div>
        <div><h3 style="color: #f59e0b; font-size: 2rem; font-weight: 800;">3% All-Risk</h3><p style="color: #cbd5e1; font-size: 0.85rem;">Transit Insurance</p></div>
        <div><h3 style="color: #f59e0b; font-size: 2rem; font-weight: 800;">Zero</h3><p style="color: #cbd5e1; font-size: 0.85rem;">Hidden Cost Guarantee</p></div>
      </div>
    </div>
  </section>

  <!-- Section 3: 6-Card Feature Grid -->
  <section style="padding: 60px 0; background: #ffffff;">
    <div class="container">
      <div style="text-align: center; max-width: 800px; margin: 0 auto 40px auto;">
        <span style="color: #d32f2f; font-weight: 700; text-transform: uppercase; font-size: 0.85rem;">Cost Determinants</span>
        <h2 style="font-size: 2.1rem; color: #0b132b; font-weight: 800; margin-top: 5px;">
          6 Drivers of Shifting Charges in <span style="color: #d32f2f;">Jamshedpur</span>
        </h2>
        <p style="color: #64748b; font-size: 0.98rem; margin-top: 8px;">
          Technical breakdown of parameters affecting local and intercity relocation bills.
        </p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 25px; margin-bottom: 40px;">
        <div style="background: #f8fafc; padding: 25px; border-radius: 12px; border-top: 4px solid #d32f2f; box-shadow: 0 4px 15px rgba(0,0,0,0.05);">
          <h3 style="font-size: 1.15rem; color: #0b132b; margin-bottom: 8px; font-weight: 700;">1. Distance &amp; Fuel Consumption</h3>
          <p style="color: #64748b; font-size: 0.9rem; line-height: 1.6;">Local moves incur flat city truck transport fees, whereas intercity moves calculate freight per kilometer based on diesel fuel rates.</p>
        </div>
        <div style="background: #f8fafc; padding: 25px; border-radius: 12px; border-top: 4px solid #f59e0b; box-shadow: 0 4px 15px rgba(0,0,0,0.05);">
          <h3 style="font-size: 1.15rem; color: #0b132b; margin-bottom: 8px; font-weight: 700;">2. Labor Force &amp; Floor Height</h3>
          <p style="color: #64748b; font-size: 0.9rem; line-height: 1.6;">Lifting heavy furniture up 4th or 5th floor stairways without elevators requires additional crew members, increasing labor charges.</p>
        </div>
        <div style="background: #f8fafc; padding: 25px; border-radius: 12px; border-top: 4px solid #d32f2f; box-shadow: 0 4px 15px rgba(0,0,0,0.05);">
          <h3 style="font-size: 1.15rem; color: #0b132b; margin-bottom: 8px; font-weight: 700;">3. Packaging Layer Intensity</h3>
          <p style="color: #64748b; font-size: 0.9rem; line-height: 1.6;">Local moves use essential scratch wrap, while long-haul moves require 7-layer bubble wrap, foam, and custom wooden crates.</p>
        </div>
        <div style="background: #f8fafc; padding: 25px; border-radius: 12px; border-top: 4px solid #f59e0b; box-shadow: 0 4px 15px rgba(0,0,0,0.05);">
          <h3 style="font-size: 1.15rem; color: #0b132b; margin-bottom: 8px; font-weight: 700;">4. Vehicle Body Specification</h3>
          <p style="color: #64748b; font-size: 0.9rem; line-height: 1.6;">Choice between open pick-up mini trucks for local city hops vs 100% sealed GPS-tracked closed container trucks for intercity travel.</p>
        </div>
        <div style="background: #f8fafc; padding: 25px; border-radius: 12px; border-top: 4px solid #d32f2f; box-shadow: 0 4px 15px rgba(0,0,0,0.05);">
          <h3 style="font-size: 1.15rem; color: #0b132b; margin-bottom: 8px; font-weight: 700;">5. Toll Taxes &amp; Interstate Permits</h3>
          <p style="color: #64748b; font-size: 0.9rem; line-height: 1.6;">Intercity bills include FASTag highway toll charges, green entry taxes, and state border commercial vehicle permit fees.</p>
        </div>
        <div style="background: #f8fafc; padding: 25px; border-radius: 12px; border-top: 4px solid #f59e0b; box-shadow: 0 4px 15px rgba(0,0,0,0.05);">
          <h3 style="font-size: 1.15rem; color: #0b132b; margin-bottom: 8px; font-weight: 700;">6. Transit Insurance Premium</h3>
          <p style="color: #64748b; font-size: 0.9rem; line-height: 1.6;">Intercity moves mandate 3% declared value transit insurance coverage to protect cargo against highway accidents or theft.</p>
        </div>
      </div>

      <!-- Mandatory 4-Protocol Cost Estimation Safety System -->
      <div style="background: #070d19; padding: 35px; border-radius: 16px; border: 1px solid rgba(245, 158, 11, 0.3); color: #ffffff; margin-bottom: 40px;">
        <h3 style="color: #f59e0b; font-size: 1.5rem; font-weight: 800; text-align: center; margin-bottom: 20px;">
          Mandatory Pricing Transparency Protocols
        </h3>
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); gap: 15px;">
          <div style="background: rgba(255,255,255,0.03); padding: 18px; border-radius: 8px; border-left: 4px solid #f59e0b;"><h4 style="color: #f59e0b; margin-bottom: 4px; font-size: 0.98rem;">1. Itemized Doorstep Survey</h4><p style="color: #cbd5e1; font-size: 0.85rem; line-height: 1.5; margin: 0;">Pre-move physical inventory check to measure exact cubic volume and prevent post-booking rate hikes.</p></div>
          <div style="background: rgba(255,255,255,0.03); padding: 18px; border-radius: 8px; border-left: 4px solid #f59e0b;"><h4 style="color: #f59e0b; margin-bottom: 4px; font-size: 0.98rem;">2. All-Inclusive Written Contract</h4><p style="color: #cbd5e1; font-size: 0.85rem; line-height: 1.5; margin: 0;">Formally signed moving contract explicitly stating labor, packing materials, freight, GST, and tolls.</p></div>
          <div style="background: rgba(255,255,255,0.03); padding: 18px; border-radius: 8px; border-left: 4px solid #f59e0b;"><h4 style="color: #f59e0b; margin-bottom: 4px; font-size: 0.98rem;">3. Official 18% GST Invoice</h4><p style="color: #cbd5e1; font-size: 0.85rem; line-height: 1.5; margin: 0;">Tax-compliant GST billing with breakdown of SAC codes for corporate relocation reimbursement.</p></div>
          <div style="background: rgba(255,255,255,0.03); padding: 18px; border-radius: 8px; border-left: 4px solid #f59e0b;"><h4 style="color: #f59e0b; margin-bottom: 4px; font-size: 0.98rem;">4. Insurance Policy Certificate</h4><p style="color: #cbd5e1; font-size: 0.85rem; line-height: 1.5; margin: 0;">Legitimate insurance policy receipt issued by recognized insurance firms prior to truck dispatch.</p></div>
        </div>
      </div>
    </div>
  </section>

  <!-- Local vs Intercity Shifting Price Comparison Matrix -->
  <section style="padding: 60px 0; background: #0b132b; color: #ffffff;">
    <div class="container" style="max-width: 950px;">
      <div style="text-align: center; margin-bottom: 40px;">
        <span style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Pricing Matrix 2026</span>
        <h2 style="font-size: 2.1rem; font-weight: 800; color: #ffffff; margin-top: 8px;">
          Local vs Intercity Shifting Charges Matrix
        </h2>
        <p style="color: #cbd5e1; font-size: 0.95rem; margin-top: 8px;">
          Estimated price ranges for residential and office relocations originating from Jamshedpur.
        </p>
      </div>

      <div style="background: rgba(255,255,255,0.04); border: 1px solid rgba(245,158,11,0.25); border-radius: 12px; padding: 25px; margin-bottom: 35px;">
        <div style="overflow-x: auto;">
          <table style="width: 100%; border-collapse: collapse; color: #cbd5e1; font-size: 0.9rem;">
            <thead>
              <tr style="background: rgba(245,158,11,0.15); color: #f59e0b; text-align: left;">
                <th style="padding: 12px; border: 1px solid rgba(245,158,11,0.3);">Home / Move Size</th>
                <th style="padding: 12px; border: 1px solid rgba(245,158,11,0.3);">Local Move (Within Jamshedpur)</th>
                <th style="padding: 12px; border: 1px solid rgba(245,158,11,0.3);">Intercity Move (Up to 500 km)</th>
                <th style="padding: 12px; border: 1px solid rgba(245,158,11,0.3);">Intercity Move (1000+ km)</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td style="padding: 10px; border: 1px solid rgba(255,255,255,0.1); font-weight: 700; color: #ffffff;">1 BHK Apartment</td>
                <td style="padding: 10px; border: 1px solid rgba(255,255,255,0.1); color: #10b981;">₹3,500 - ₹6,500</td>
                <td style="padding: 10px; border: 1px solid rgba(255,255,255,0.1); color: #f59e0b;">₹12,000 - ₹18,000</td>
                <td style="padding: 10px; border: 1px solid rgba(255,255,255,0.1); color: #f59e0b;">₹20,000 - ₹28,000</td>
              </tr>
              <tr style="background: rgba(255,255,255,0.02);">
                <td style="padding: 10px; border: 1px solid rgba(255,255,255,0.1); font-weight: 700; color: #ffffff;">2 BHK Apartment</td>
                <td style="padding: 10px; border: 1px solid rgba(255,255,255,0.1); color: #10b981;">₹5,500 - ₹9,500</td>
                <td style="padding: 10px; border: 1px solid rgba(255,255,255,0.1); color: #f59e0b;">₹16,000 - ₹24,000</td>
                <td style="padding: 10px; border: 1px solid rgba(255,255,255,0.1); color: #f59e0b;">₹26,000 - ₹38,000</td>
              </tr>
              <tr>
                <td style="padding: 10px; border: 1px solid rgba(255,255,255,0.1); font-weight: 700; color: #ffffff;">3 BHK Apartment</td>
                <td style="padding: 10px; border: 1px solid rgba(255,255,255,0.1); color: #10b981;">₹8,500 - ₹14,000</td>
                <td style="padding: 10px; border: 1px solid rgba(255,255,255,0.1); color: #f59e0b;">₹22,000 - ₹32,000</td>
                <td style="padding: 10px; border: 1px solid rgba(255,255,255,0.1); color: #f59e0b;">₹35,000 - ₹52,000</td>
              </tr>
              <tr style="background: rgba(255,255,255,0.02);">
                <td style="padding: 10px; border: 1px solid rgba(255,255,255,0.1); font-weight: 700; color: #ffffff;">Independent Villa / 4 BHK</td>
                <td style="padding: 10px; border: 1px solid rgba(255,255,255,0.1); color: #10b981;">₹12,000 - ₹20,000</td>
                <td style="padding: 10px; border: 1px solid rgba(255,255,255,0.1); color: #f59e0b;">₹30,000 - ₹45,000</td>
                <td style="padding: 10px; border: 1px solid rgba(255,255,255,0.1); color: #f59e0b;">₹48,000 - ₹70,000</td>
              </tr>
              <tr>
                <td style="padding: 10px; border: 1px solid rgba(255,255,255,0.1); font-weight: 700; color: #ffffff;">Corporate Office Setup</td>
                <td style="padding: 10px; border: 1px solid rgba(255,255,255,0.1); color: #10b981;">Custom Survey Quote</td>
                <td style="padding: 10px; border: 1px solid rgba(255,255,255,0.1); color: #f59e0b;">Custom Survey Quote</td>
                <td style="padding: 10px; border: 1px solid rgba(255,255,255,0.1); color: #f59e0b;">Custom Survey Quote</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

      <!-- Cost Breakdown Notes -->
      <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 25px;">
        <div style="background: rgba(255,255,255,0.04); border: 1px solid rgba(245,158,11,0.2); padding: 22px; border-radius: 10px;">
          <h4 style="color: #f59e0b; font-size: 1.1rem; margin-bottom: 10px;">Local Shifting Cost Composition</h4>
          <p style="color: #cbd5e1; font-size: 0.9rem; line-height: 1.6; margin: 0;">
            • Labor &amp; Handling: 45% of bill<br>
            • City Vehicle Freight: 30% of bill<br>
            • Surface Scratch Packaging: 15% of bill<br>
            • GST &amp; Admin Fees: 10% of bill
          </p>
        </div>
        <div style="background: rgba(255,255,255,0.04); border: 1px solid rgba(245,158,11,0.2); padding: 22px; border-radius: 10px;">
          <h4 style="color: #f59e0b; font-size: 1.1rem; margin-bottom: 10px;">Intercity Shifting Cost Composition</h4>
          <p style="color: #cbd5e1; font-size: 0.9rem; line-height: 1.6; margin: 0;">
            • Long-Haul Fuel &amp; Driver Allowance: 40%<br>
            • 7-Layer Highway Packaging &amp; Crating: 25%<br>
            • Toll Taxes &amp; Interstate Permits: 15%<br>
            • Transit Insurance &amp; GST: 20%
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- 5-Stage Shifting Cost Calculation Workflow -->
  <section style="padding: 60px 0; background: #ffffff;">
    <div class="container">
      <div style="text-align: center; max-width: 800px; margin: 0 auto 40px auto;">
        <span style="color: #d32f2f; font-weight: 700; text-transform: uppercase; font-size: 0.85rem;">Estimation Methodology</span>
        <h2 style="font-size: 2.1rem; color: #0b132b; font-weight: 800; margin-top: 5px;">
          5-Stage Price Calculation Process
        </h2>
      </div>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 15px;">
        <div style="background: #f8fafc; padding: 22px; border-radius: 12px; border-left: 4px solid #d32f2f;">
          <span style="color: #f59e0b; font-weight: 800; font-size: 0.85rem;">STAGE 1</span>
          <h3 style="font-size: 1.1rem; color: #0b132b; margin: 8px 0 6px 0; font-weight: 700;">Inventory Volume Audit</h3>
          <p style="color: #64748b; font-size: 0.88rem; line-height: 1.6; margin: 0;">Measuring exact total cargo cubic feet (CFT) during pre-move survey.</p>
        </div>
        <div style="background: #f8fafc; padding: 22px; border-radius: 12px; border-left: 4px solid #f59e0b;">
          <span style="color: #f59e0b; font-weight: 800; font-size: 0.85rem;">STAGE 2</span>
          <h3 style="font-size: 1.1rem; color: #0b132b; margin: 8px 0 6px 0; font-weight: 700;">Distance &amp; Route Mapping</h3>
          <p style="color: #64748b; font-size: 0.88rem; line-height: 1.6; margin: 0;">Calculating exact highway kilometer distance, toll plazas, and entry permits.</p>
        </div>
        <div style="background: #f8fafc; padding: 22px; border-radius: 12px; border-left: 4px solid #d32f2f;">
          <span style="color: #f59e0b; font-weight: 800; font-size: 0.85rem;">STAGE 3</span>
          <h3 style="font-size: 1.1rem; color: #0b132b; margin: 8px 0 6px 0; font-weight: 700;">Labor &amp; Access Evaluation</h3>
          <p style="color: #64748b; font-size: 0.88rem; line-height: 1.6; margin: 0;">Assessing floor heights, elevator access, and manpower requirements.</p>
        </div>
        <div style="background: #f8fafc; padding: 22px; border-radius: 12px; border-left: 4px solid #f59e0b;">
          <span style="color: #f59e0b; font-weight: 800; font-size: 0.85rem;">STAGE 4</span>
          <h3 style="font-size: 1.1rem; color: #0b132b; margin: 8px 0 6px 0; font-weight: 700;">Packing Layer Selection</h3>
          <p style="color: #64748b; font-size: 0.88rem; line-height: 1.6; margin: 0;">Determining required quantities of bubble rolls, cartons, and wooden crates.</p>
        </div>
        <div style="background: #f8fafc; padding: 22px; border-radius: 12px; border-left: 4px solid #d32f2f;">
          <span style="color: #f59e0b; font-weight: 800; font-size: 0.85rem;">STAGE 5</span>
          <h3 style="font-size: 1.1rem; color: #0b132b; margin: 8px 0 6px 0; font-weight: 700;">Final Written Quotation</h3>
          <p style="color: #64748b; font-size: 0.88rem; line-height: 1.6; margin: 0;">Issuing an itemized contract with zero-hidden-cost guarantee and GST breakdown.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 4: Contextual Internal Links -->
  <section style="padding: 50px 0; background: #f8fafc;">
    <div class="container">
      <div style="text-align: center; max-width: 800px; margin: 0 auto 30px auto;">
        <h3 style="font-size: 1.8rem; color: #0b132b; font-weight: 800;">Related <span style="color: #d32f2f;">Cost &amp; Shifting Resources</span></h3>
      </div>
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); gap: 15px;">
        <a href="<?php echo SITE_URL; ?>packers-and-movers-in-jamshedpur" title="Movers in Jamshedpur" style="background: #fff; padding: 14px; border-radius: 6px; border: 1px solid #e2e8f0; color: #0b132b; text-decoration: none; font-weight: 600; text-align: center; display: block;"><i class="fas fa-map-marker-alt"></i> Movers in Jamshedpur</a>
        <a href="<?php echo SITE_URL; ?>packers-and-movers-bistupur-jamshedpur" title="Movers in Bistupur" style="background: #fff; padding: 14px; border-radius: 6px; border: 1px solid #e2e8f0; color: #0b132b; text-decoration: none; font-weight: 600; text-align: center; display: block;"><i class="fas fa-map-marker-alt"></i> Movers in Bistupur</a>
        <a href="<?php echo SITE_URL; ?>packers-and-movers-jamshedpur-cost-guide" title="💡 Shifting Cost Guide" style="background: #fff; padding: 14px; border-radius: 6px; border: 1px solid #e2e8f0; color: #0b132b; text-decoration: none; font-weight: 600; text-align: center; display: block;">💡 Shifting Cost Guide</a>
        <a href="<?php echo SITE_URL; ?>how-to-choose-best-packers-and-movers-in-jamshedpur" title="⭐ How to Choose Movers" style="background: #fff; padding: 14px; border-radius: 6px; border: 1px solid #e2e8f0; color: #0b132b; text-decoration: none; font-weight: 600; text-align: center; display: block;">⭐ How to Choose Movers</a>
        <a href="<?php echo SITE_URL; ?>household-shifting-checklist-jamshedpur" title="Shifting Checklist" style="background: #fff; padding: 14px; border-radius: 6px; border: 1px solid #e2e8f0; color: #0b132b; text-decoration: none; font-weight: 600; text-align: center; display: block;"><i class="fas fa-clipboard-list"></i> Shifting Checklist</a>
        <a href="<?php echo SITE_URL; ?>packing-materials-guide-jamshedpur" title="Packing Materials Guide" style="background: #fff; padding: 14px; border-radius: 6px; border: 1px solid #e2e8f0; color: #0b132b; text-decoration: none; font-weight: 600; text-align: center; display: block;"><i class="fas fa-box"></i> Packing Materials Guide</a>
        <a href="<?php echo SITE_URL; ?>transit-insurance-guide-packers-movers-jamshedpur" title="Transit Insurance Guide" style="background: #fff; padding: 14px; border-radius: 6px; border: 1px solid #e2e8f0; color: #0b132b; text-decoration: none; font-weight: 600; text-align: center; display: block;"><i class="fas fa-shield-alt"></i> Transit Insurance Guide</a>
        <a href="<?php echo SITE_URL; ?>packers-and-movers-sakchi-jamshedpur" title="Movers in Sakchi" style="background: #fff; padding: 14px; border-radius: 6px; border: 1px solid #e2e8f0; color: #0b132b; text-decoration: none; font-weight: 600; text-align: center; display: block;"><i class="fas fa-map-marker-alt"></i> Movers in Sakchi</a>
      </div>
    </div>
  </section>

  <!-- Expanded 20-Item Shifting Charges FAQs -->
  <section style="padding: 50px 0; background: #ffffff;">
    <div class="container">
      <div style="text-align: center; max-width: 800px; margin: 0 auto 35px auto;">
        <h2 style="font-size: 2rem; color: #0b132b; font-weight: 800;">Shifting Charges FAQs</h2>
      </div>
      <div style="max-width: 850px; margin: 0 auto; display: flex; flex-direction: column; gap: 12px;">
        <div style="background: #f8fafc; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0;"><h4 style="color: #0b132b; font-weight: 700;">Q1: How can I get an exact price quote for local shifting in Jamshedpur?</h4><p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin-top: 6px;">Contact Shree Ashirwad Packers via phone or WhatsApp for a free instant local survey.</p></div>
        <div style="background: #f8fafc; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0;"><h4 style="color: #0b132b; font-weight: 700;">Q2: Are GST and toll charges extra for intercity moves?</h4><p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin-top: 6px;">Our written intercity quotes clearly specify toll charges and 18% GST up front with zero hidden fees.</p></div>
        <div style="background: #f8fafc; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0;"><h4 style="color: #0b132b; font-weight: 700;">Q3: How to reach Shree Ashirwad Packers for price estimation?</h4><p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin-top: 6px;">Call <strong>+91 8409531615</strong> or message us on WhatsApp for immediate support.</p></div>
        <div style="background: #f8fafc; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0;"><h4 style="color: #0b132b; font-weight: 700;">Q4: Why does local shifting cost significantly less than intercity relocation in Jamshedpur?</h4><p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin-top: 6px;">Local moves involve low travel distances under 30 km without highway tolls, intercity state permits, or long-distance fuel consumption.</p></div>
        <div style="background: #f8fafc; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0;"><h4 style="color: #0b132b; font-weight: 700;">Q5: What factors increase local house shifting charges inside Jamshedpur?</h4><p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin-top: 6px;">High floor levels without elevators, heavy furniture like marble dining tables, narrow staircases, and extra packing layers increase local charges.</p></div>
        <div style="background: #f8fafc; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0;"><h4 style="color: #0b132b; font-weight: 700;">Q6: How is intercity vehicle freight calculated from Jamshedpur to major Indian cities?</h4><p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin-top: 6px;">Freight is calculated based on truck container size (14ft, 17ft, 20ft, or 22ft container) and total distance in kilometers.</p></div>
        <div style="background: #f8fafc; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0;"><h4 style="color: #0b132b; font-weight: 700;">Q7: Is transit insurance mandatory for intercity household relocation?</h4><p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin-top: 6px;">Yes, 3% declared value transit insurance protects your belongings against highway hazards, collision, or fire during intercity transit.</p></div>
        <div style="background: #f8fafc; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0;"><h4 style="color: #0b132b; font-weight: 700;">Q8: Do local shifting rates in Jamshedpur include unpacking and furniture re-assembly?</h4><p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin-top: 6px;">Yes, basic unloading, unpacking, and assembling beds and wardrobes at your new house are included in our local quotes.</p></div>
        <div style="background: #f8fafc; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0;"><h4 style="color: #0b132b; font-weight: 700;">Q9: Are Tata Steel relocation allowances valid for intercity moving bills?</h4><p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin-top: 6px;">Yes, we supply 18% GST invoices, stamped Consignment Notes (LR), and IBA-approved bill formats for corporate claim reimbursement.</p></div>
        <div style="background: #f8fafc; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0;"><h4 style="color: #0b132b; font-weight: 700;">Q10: Can I reduce intercity shifting costs by sharing a container vehicle?</h4><p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin-top: 6px;">Yes, part-load (shared truck) service offers 30% to 40% cost savings for smaller 1 BHK or partial household shipments.</p></div>
        <div style="background: #f8fafc; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0;"><h4 style="color: #0b132b; font-weight: 700;">Q11: What is the average cost to shift a 2 BHK home locally within Jamshedpur?</h4><p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin-top: 6px;">Local 2 BHK shifting within Jamshedpur typically ranges between ₹5,500 and ₹9,500 depending on cargo volume and packing layers.</p></div>
        <div style="background: #f8fafc; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0;"><h4 style="color: #0b132b; font-weight: 700;">Q12: How much does intercity shifting from Jamshedpur to Ranchi or Kolkata cost?</h4><p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin-top: 6px;">Intercity 2 BHK relocation to nearby cities (up to 300 km) costs approximately ₹14,000 to ₹22,000 including packaging and transit.</p></div>
        <div style="background: #f8fafc; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0;"><h4 style="color: #0b132b; font-weight: 700;">Q13: Are carpentry disassembly charges extra for complex modular furniture?</h4><p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin-top: 6px;">Standard furniture unbolting is included; highly specialized Italian modular furniture requiring external carpenters may incur nominal extra charges.</p></div>
        <div style="background: #f8fafc; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0;"><h4 style="color: #0b132b; font-weight: 700;">Q14: How are octroi, entry taxes, and FASTag tolls handled in intercity quotes?</h4><p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin-top: 6px;">All FASTag highway toll fees and state border entry permits are pre-calculated and itemized in our written moving quotation.</p></div>
        <div style="background: #f8fafc; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0;"><h4 style="color: #0b132b; font-weight: 700;">Q15: What payment milestones are followed for local vs intercity moves?</h4><p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin-top: 6px;">Local moves follow 80% post-loading and 20% post-unloading; intercity moves follow 20% booking advance, 70% loading, and 10% delivery balance.</p></div>
        <div style="background: #f8fafc; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0;"><h4 style="color: #0b132b; font-weight: 700;">Q16: Do intercity shifting charges include household storage warehousing?</h4><p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin-top: 6px;">Initial 3 to 7 days storage at our Jamshedpur warehouse can be included upon request; extended storage is billed per monthly rate.</p></div>
        <div style="background: #f8fafc; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0;"><h4 style="color: #0b132b; font-weight: 700;">Q17: What precautions prevent hidden charges from unorganized movers?</h4><p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin-top: 6px;">Insist on a physical pre-move survey and a written quotation signed by the company owner containing a zero-hidden-cost clause.</p></div>
        <div style="background: #f8fafc; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0;"><h4 style="color: #0b132b; font-weight: 700;">Q18: How does car or bike transport affect intercity relocation bills?</h4><p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin-top: 6px;">Adding a car carrier or bike transport stand to your intercity move adds fixed vehicle transport fees with dedicated transit insurance.</p></div>
        <div style="background: #f8fafc; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0;"><h4 style="color: #0b132b; font-weight: 700;">Q19: Can I get a customized corporate office shifting price estimate in Jamshedpur?</h4><p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin-top: 6px;">Yes, our corporate move project manager conducts an detailed site inspection to issue a formal commercial proposal.</p></div>
        <div style="background: #f8fafc; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0;"><h4 style="color: #0b132b; font-weight: 700;">Q20: How to schedule a free local vs intercity cost survey with Shree Ashirwad Packers?</h4><p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin-top: 6px;">Call <strong>+91 8409531615</strong> or contact us via WhatsApp for a free doorstep survey and written price estimation.</p></div>
        <div style="background: #f8fafc; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0;"><h4 style="color: #0b132b; font-weight: 700;">Q21: Are there seasonal price variations for local vs intercity shifting in Jamshedpur?</h4><p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin-top: 6px;">Month-end dates and major festive seasons (Diwali, Durga Puja) see higher demand; booking 5 days in advance secures standard non-peak tariffs.</p></div>
        <div style="background: #f8fafc; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0;"><h4 style="color: #0b132b; font-weight: 700;">Q22: How is packing material cost itemized in local vs intercity billing?</h4><p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin-top: 6px;">Local billing includes basic scratch film; intercity billing itemizes 7-layer bubble rolls, 5-ply cartons, and foam edge protectors by roll and box count.</p></div>
        <div style="background: #f8fafc; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0;"><h4 style="color: #0b132b; font-weight: 700;">Q23: What is the price difference between dedicated container trucks and shared part-load intercity moves?</h4><p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin-top: 6px;">Dedicated containers offer direct, faster delivery at full freight cost; shared part-load trucks reduce costs by 30-40% with slightly flexible delivery timelines.</p></div>
        <div style="background: #f8fafc; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0;"><h4 style="color: #0b132b; font-weight: 700;">Q24: Does staircase carry distance add extra charges to local Jamshedpur shifting bills?</h4><p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin-top: 6px;">Carrying goods over long walking distances from truck to door (over 50 meters) or above the 3rd floor without elevators incurs a small labor surcharge.</p></div>
        <div style="background: #f8fafc; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0;"><h4 style="color: #0b132b; font-weight: 700;">Q25: Are there extra fees for unmounting wall appliances like ACs or geysers during local shifting?</h4><p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin-top: 6px;">Basic electrical disconnects are free; AC gas pump down, bracket unbolting, and re-installation require certified HVAC technician charges.</p></div>
        <div style="background: #f8fafc; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0;"><h4 style="color: #0b132b; font-weight: 700;">Q26: Can I get an all-inclusive price guarantee before booking my Jamshedpur relocation?</h4><p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin-top: 6px;">Yes, our written quotation includes a legally binding zero-hidden-charge guarantee protecting you against post-booking price increases.</p></div>
        <div style="background: #f8fafc; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0;"><h4 style="color: #0b132b; font-weight: 700;">Q27: What GST rates apply to local vs intercity packers and movers services in Jamshedpur?</h4><p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin-top: 6px;">Full-service packing and moving carries an official 18% GST rate, which is fully claimable for corporate employee relocation allowances.</p></div>
        <div style="background: #f8fafc; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0;"><h4 style="color: #0b132b; font-weight: 700;">Q28: How do I request an immediate written price breakdown for shifting in Jamshedpur?</h4><p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin-top: 6px;">Call our customer support helpline at <strong>+91 8409531615</strong> or message us on WhatsApp to receive a formal itemized cost estimate.</p></div>
      </div>
    </div>
  </section>

  <!-- Section 6: CTA Banner -->
  <section class="cta-banner-section" style="padding: 50px 0; background: linear-gradient(135deg, #0b132b 0%, #1c2541 100%); color: #ffffff;">
    <div class="container">
      <div style="text-align: center; max-width: 800px; margin: 0 auto;">
        <h2 style="font-size: 2.1rem; font-weight: 800; margin-bottom: 15px;">Book Transparent Shifting in Jamshedpur Today</h2>
        <p style="color: #cbd5e1; font-size: 0.98rem; margin-bottom: 25px;">Transparent local and intercity pricing with zero hidden fees, 18% GST invoices, and 7-layer packaging.</p>
        <div style="display: flex; gap: 15px; justify-content: center; flex-wrap: wrap;">
          <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call:" style="padding: 14px 32px; background: linear-gradient(135deg, #d32f2f 0%, #f59e0b 100%); color: #fff; border-radius: 50px; font-weight: 700; text-decoration: none;"><i class="fas fa-phone-alt"></i> Call: <?php echo SITE_PHONE; ?></a>
          <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20need%20shifting%20quote%20in%20Jamshedpur." title="WhatsApp Quote" target="_blank" style="padding: 14px 32px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #fff; border-radius: 50px; font-weight: 700; text-decoration: none;"><i class="fab fa-whatsapp"></i> WhatsApp Quote</a>
        </div>
      </div>
    </div>
  </section>

</main>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
