<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "Packers and Movers Agrico Jamshedpur | 8409531615";
$page_desc = "Packers and Movers in Agrico Jamshedpur offering safe household shifting, office relocation, bike shipping, and car transport. Call (+91) 8409531615.";
$page_keywords = "packers and movers agrico jamshedpur, packers and movers in agrico, best packers movers agrico, household shifting agrico, agrico club movers, office relocation agrico, car transport agrico, bike shipping agrico, IBA approved movers agrico";

$page_city = "Jamshedpur";

$faq_list = [
    [
        'q' => 'Do you serve Agrico Club House and surrounding quarters?',
        'a' => 'Yes, we serve all sectors in Agrico including Agrico Club House area, Sidhgora border, and Bhalubasa road.'
    ],
    [
        'q' => 'Are GST bills provided for employee claim reimbursements?',
        'a' => 'Yes, we issue genuine IBA GST bills and consignment LR copies.'
    ],
    [
        'q' => 'How early should I schedule shifting in Agrico?',
        'a' => 'Booking 2 to 3 days in advance ensures smooth vehicle scheduling.'
    ],
    [
        'q' => 'Can you move Tata quarters in Agrico?',
        'a' => 'Yes, we are experienced in moving Tata quarters and bungalows in Agrico.'
    ],
    [
        'q' => 'Is transit insurance provided for intercity routes from Agrico?',
        'a' => 'Yes, full transit insurance coverage is available.'
    ],
    [
        'q' => 'How do you transport bikes from Agrico?',
        'a' => 'Motorcycles are wrapped in paddy straw and heavy corrugated sheets before loading.'
    ],
    [
        'q' => 'Are packing materials included in the price estimate?',
        'a' => 'Yes, all 7 layers of packing material are included in the estimate.'
    ],
    [
        'q' => 'Do you disassemble beds and wardrobes?',
        'a' => 'Yes, our experienced carpenters disassemble and reassemble furniture.'
    ],
    [
        'q' => 'Are there any hidden charges?',
        'a' => 'No, we provide clear written quotes prior to starting.'
    ],
    [
        'q' => 'How can I contact Shree Ashirwad Packers in Agrico?',
        'a' => 'Call +91 8409531615 or message us on WhatsApp for an immediate quote.'
    ]
];

require_once __DIR__ . '/../includes/header.php';
?>

<main class="site-main">

  <!-- Visual Breadcrumb Navigation Bar -->
  <div class="breadcrumb-wrapper">
    <div class="container">
      <div class="breadcrumb-list">
        <span class="breadcrumb-item"><a href="<?php echo SITE_URL; ?>">Home</a></span>
        <span class="breadcrumb-separator">/</span>
        <span class="breadcrumb-item"><a href="<?php echo SITE_URL; ?>packers-and-movers-in-jamshedpur">Jamshedpur</a></span>
        <span class="breadcrumb-separator">/</span>
        <span class="breadcrumb-item active">Packers and Movers Agrico Jamshedpur</span>
      </div>
    </div>
  </div>

  <!-- Hero Section -->
  <section class="hero-section" style="background: linear-gradient(135deg, #0b132b 0%, #1c2541 100%); padding: 60px 0; color: #ffffff;">
    <div class="container">
      <div class="hero-grid" style="display: grid; grid-template-columns: 1.2fr 0.8fr; gap: 40px; align-items: center;">
        
        <div class="hero-text">
          <span class="section-tag" style="background: rgba(245, 158, 11, 0.15); color: #f59e0b; border: 1px solid rgba(245, 158, 11, 0.4); padding: 6px 16px; border-radius: 20px; font-size: 0.85rem; font-weight: 700; text-transform: uppercase; display: inline-block; margin-bottom: 15px;">
            Agrico Relocation Specialists
          </span>
          <h1 style="font-size: 2.7rem; font-weight: 800; line-height: 1.2; margin-bottom: 20px; color: #ffffff;">
            Reliable <span style="color: #f59e0b;">Packers and Movers Agrico Jamshedpur</span>
          </h1>
          <p style="font-size: 1.08rem; color: #cbd5e1; line-height: 1.7; margin-bottom: 25px;">
            Planning household or office shifting in Agrico? Shree Ashirwad Packers and Movers provides top-rated zero-damage home moving, IBA corporate billing, car carrier transport, and 7-layer safety packaging across Agrico Colony, Agrico Club House, Sidhgora border, and Bhalubasa road.
          </p>

          <div style="display: flex; gap: 15px; flex-wrap: wrap; margin-bottom: 30px;">
            <a href="tel:<?php echo SITE_PHONE_RAW; ?>" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #d32f2f 0%, #f59e0b 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(211, 47, 47, 0.4);">
              📞 Call Now: <?php echo SITE_PHONE; ?>
            </a>
            <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20need%20shifting%20quote%20for%20Agrico%20Jamshedpur." target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
              💬 Chat on WhatsApp
            </a>
          </div>
        </div>

        <div class="hero-form-card" style="background: rgba(255, 255, 255, 0.05); backdrop-filter: blur(10px); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 16px; padding: 30px; box-shadow: 0 15px 35px rgba(0,0,0,0.4);">
          <h2 style="font-size: 1.4rem; color: #ffffff; margin-bottom: 8px; font-weight: 700; text-align: center;">Get Agrico Shifting Quote</h2>
          <p style="font-size: 0.85rem; color: #94a3b8; text-align: center; margin-bottom: 20px;">Receive transparent cost estimation on WhatsApp in 2 minutes</p>

          <form action="#" method="POST" onsubmit="sendHeroWhatsAppLead(event, this);">
            <div style="margin-bottom: 14px;">
              <input type="text" name="name" class="form-control" placeholder="Your Full Name" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="margin-bottom: 14px;">
              <input type="tel" name="phone" class="form-control" placeholder="10-Digit Phone Number" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 10px; margin-bottom: 14px;">
              <input type="text" name="move_from" class="form-control" value="Agrico Jamshedpur" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
              <input type="text" name="move_to" class="form-control" placeholder="Moving To (City/Area)" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <button type="submit" style="width: 100%; padding: 14px; background: linear-gradient(135deg, #d32f2f 0%, #f59e0b 100%); color: #ffffff; border: none; border-radius: 50px; font-weight: 700; font-size: 1rem; cursor: pointer;">
              Get Instant Estimate Now ➔
            </button>
          </form>
        </div>

      </div>
    </div>
  </section>

  <!-- Section 1: Technical Overview Box -->
  <section style="padding: 50px 0; background: linear-gradient(145deg, #0b132b 0%, #172a54 100%); border-bottom: 1px solid rgba(245, 158, 11, 0.3); color: #ffffff;">
    <div class="container" style="max-width: 950px;">
      <h3 style="color: #f59e0b; font-size: 1.4rem; font-weight: 700; margin-bottom: 14px;">Technical Overview: Professional Relocation Services in Agrico Jamshedpur</h3>
      <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.7; margin-bottom: 14px;">
        Agrico is a key residential township in Jamshedpur, home to Tata Steel employee quarters, Agrico Club House, quiet residential avenues, and proximity to Sidhgora, Golmuri, and Bhalubasa. Shifting homes or offices in Agrico demands expert navigation of residential colony streets, careful handling of Tata quarters furniture, and streamlined logistics for both intra-city transfers and outstation moves across national destinations.
      </p>
      <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.7; margin-bottom: 14px;">
        Our operational coverage in Agrico includes Agrico Colony, Agrico Club House road, Sidhgora border area, Bhalubasa main road, Golmuri market link road, and surrounding housing sectors. We manage permissions, parking coordination, and gate security compliance with localized residential society management for completely hassle-free loading and unloading operations.
      </p>
      <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.7; margin-bottom: 14px;">
        To guarantee zero damage during transit, all household goods receive our signature 7-layer safety packaging—utilizing heavy 300 GSM air-bubble rolls, 5-ply corrugated cardboard sheets, foam corner protectors, stretch film moisture barrier, and custom wooden box crating for glass dining tables, LED TVs, mandirs, and delicate antique items.
      </p>
      <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.7; margin-bottom: 14px;">
        For Tata Steel executives, public sector employees, bank officials, and corporate staff claiming relocation reimbursement, we provide 100% compliant 18% GST invoices, stamped Lorry Receipts (LR), itemized inventory sheets, and IBA-approved bill documentation recognized across corporate HR departments.
      </p>
      <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.7; margin-bottom: 14px;">
        Our vehicle fleet features weather-sealed container trucks, specialized enclosed car carriers, and dedicated city pick-up vehicles equipped with real-time satellite GPS tracking, heavy-duty floor tie-downs, and custom loading ramps for smooth operations in Agrico residential sectors.
      </p>
      <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.7; margin-bottom: 14px;">
        Upon arrival at your destination, our trained unloading crew handles careful offloading, room-specific placement, wooden box uncrating, and reassembly of all disassembled furniture. We conduct a joint inventory check to ensure complete satisfaction before final sign-off.
      </p>
      <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.7; margin: 0;">
        Whether you are shifting locally within Agrico Colony or relocating long-distance to another metro city in India, Shree Ashirwad Packers and Movers provides total peace of mind, dedicated move manager support, and zero damage delivery. Review our 5-stage relocation workflow, 6-card feature grid, safety protocols, route pricing matrix, and 20 detailed FAQs below for full operational details.
      </p>
    </div>
  </section>

  <!-- Section 2: Stats Bar -->
  <section style="padding: 35px 0; background: #070d19; border-bottom: 1px solid rgba(245, 158, 11, 0.2);">
    <div class="container">
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(160px, 1fr)); gap: 15px; text-align: center;">
        <div><h3 style="color: #f59e0b; font-size: 2rem; font-weight: 800;">15+ Yrs</h3><p style="color: #cbd5e1; font-size: 0.85rem;">Local Experience</p></div>
        <div><h3 style="color: #f59e0b; font-size: 2rem; font-weight: 800;">2,850+</h3><p style="color: #cbd5e1; font-size: 0.85rem;">Agrico Relocations</p></div>
        <div><h3 style="color: #f59e0b; font-size: 2rem; font-weight: 800;">100%</h3><p style="color: #cbd5e1; font-size: 0.85rem;">IBA Approved Billing</p></div>
        <div><h3 style="color: #f59e0b; font-size: 2rem; font-weight: 800;">7-Layer</h3><p style="color: #cbd5e1; font-size: 0.85rem;">Safety Packaging</p></div>
        <div><h3 style="color: #f59e0b; font-size: 2rem; font-weight: 800;">24/7</h3><p style="color: #cbd5e1; font-size: 0.85rem;">GPS Satellite Tracking</p></div>
        <div><h3 style="color: #f59e0b; font-size: 2rem; font-weight: 800;">Zero</h3><p style="color: #cbd5e1; font-size: 0.85rem;">Hidden Cost Guarantee</p></div>
      </div>
    </div>
  </section>

  <!-- Section 3: 6-Card Feature Grid -->
  <section style="padding: 60px 0; background: #ffffff;">
    <div class="container">
      <div style="text-align: center; max-width: 800px; margin: 0 auto 40px auto;">
        <span style="color: #d32f2f; font-weight: 700; text-transform: uppercase; font-size: 0.85rem;">Agrico Local Advantage</span>
        <h2 style="font-size: 2.1rem; color: #0b132b; font-weight: 800; margin-top: 5px;">
          Top Choice for <span style="color: #d32f2f;">Packers and Movers in Agrico</span>
        </h2>
        <p style="color: #64748b; font-size: 0.98rem; margin-top: 8px;">
          Agrico is a serene residential colony near Golmuri and Sidhgora. We provide expert household shifting, vehicle transport, and corporate employee moving across Agrico.
        </p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 25px; margin-bottom: 40px;">
        <div style="background: #f8fafc; padding: 25px; border-radius: 12px; border-top: 4px solid #d32f2f; box-shadow: 0 4px 15px rgba(0,0,0,0.05);">
          <h3 style="font-size: 1.15rem; color: #0b132b; margin-bottom: 8px; font-weight: 700;">1. Agrico Colony Access</h3>
          <p style="color: #64748b; font-size: 0.9rem; line-height: 1.6;">Our drivers navigate Agrico Club House road, Sidhgora link, and Bhalubasa crossroad smoothly.</p>
        </div>
        <div style="background: #f8fafc; padding: 25px; border-radius: 12px; border-top: 4px solid #f59e0b; box-shadow: 0 4px 15px rgba(0,0,0,0.05);">
          <h3 style="font-size: 1.15rem; color: #0b132b; margin-bottom: 8px; font-weight: 700;">2. IBA Corporate Billing</h3>
          <p style="color: #64748b; font-size: 0.9rem; line-height: 1.6;">100% genuine GST invoices and consignment bills for TATA employees and corporate executives.</p>
        </div>
        <div style="background: #f8fafc; padding: 25px; border-radius: 12px; border-top: 4px solid #d32f2f; box-shadow: 0 4px 15px rgba(0,0,0,0.05);">
          <h3 style="font-size: 1.15rem; color: #0b132b; margin-bottom: 8px; font-weight: 700;">3. 7-Layer Safety Wrap</h3>
          <p style="color: #64748b; font-size: 0.9rem; line-height: 1.6;">Air-bubble rolls, corrugated sheets, foam corner guards, and stretch wrapping for zero transit damage.</p>
        </div>
        <div style="background: #f8fafc; padding: 25px; border-radius: 12px; border-top: 4px solid #f59e0b; box-shadow: 0 4px 15px rgba(0,0,0,0.05);">
          <h3 style="font-size: 1.15rem; color: #0b132b; margin-bottom: 8px; font-weight: 700;">4. Tata Quarters Shifting</h3>
          <p style="color: #64748b; font-size: 0.9rem; line-height: 1.6;">Smooth loading and packing for Tata quarters and independent bungalows in Agrico.</p>
        </div>
        <div style="background: #f8fafc; padding: 25px; border-radius: 12px; border-top: 4px solid #d32f2f; box-shadow: 0 4px 15px rgba(0,0,0,0.05);">
          <h3 style="font-size: 1.15rem; color: #0b132b; margin-bottom: 8px; font-weight: 700;">5. GPS Enclosed Fleet</h3>
          <p style="color: #64748b; font-size: 0.9rem; line-height: 1.6;">Sealed weather container vehicles equipped with live satellite tracking for real-time location updates.</p>
        </div>
        <div style="background: #f8fafc; padding: 25px; border-radius: 12px; border-top: 4px solid #f59e0b; box-shadow: 0 4px 15px rgba(0,0,0,0.05);">
          <h3 style="font-size: 1.15rem; color: #0b132b; margin-bottom: 8px; font-weight: 700;">6. Transparent Upfront Pricing</h3>
          <p style="color: #64748b; font-size: 0.9rem; line-height: 1.6;">Clear price breakdowns with zero hidden fees or last-minute cost inflation.</p>
        </div>
      </div>

      <!-- Mandatory 4-Protocol Safety System -->
      <div style="background: #070d19; padding: 35px; border-radius: 16px; border: 1px solid rgba(245, 158, 11, 0.3); color: #ffffff; margin-bottom: 40px;">
        <h3 style="color: #f59e0b; font-size: 1.5rem; font-weight: 800; text-align: center; margin-bottom: 20px;">
          Mandatory Safety &amp; Compliance Protocols
        </h3>
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); gap: 15px;">
          <div style="background: rgba(255,255,255,0.03); padding: 18px; border-radius: 8px; border-left: 4px solid #f59e0b;"><h4 style="color: #f59e0b; margin-bottom: 4px; font-size: 0.98rem;">1. Pre-Move Survey &amp; Audit</h4><p style="color: #cbd5e1; font-size: 0.85rem; line-height: 1.5; margin: 0;">Detailed physical itemization to match exact container dimensions and logistics scheduling.</p></div>
          <div style="background: rgba(255,255,255,0.03); padding: 18px; border-radius: 8px; border-left: 4px solid #f59e0b;"><h4 style="color: #f59e0b; margin-bottom: 4px; font-size: 0.98rem;">2. 7-Layer Armor Protection</h4><p style="color: #cbd5e1; font-size: 0.85rem; line-height: 1.5; margin: 0;">Heavy multi-layer wrapping ensuring total cargo safety against transit vibration.</p></div>
          <div style="background: rgba(255,255,255,0.03); padding: 18px; border-radius: 8px; border-left: 4px solid #f59e0b;"><h4 style="color: #f59e0b; margin-bottom: 4px; font-size: 0.98rem;">3. Full Value Transit Insurance</h4><p style="color: #cbd5e1; font-size: 0.85rem; line-height: 1.5; margin: 0;">Comprehensive 3% declared value insurance policy providing complete loss coverage.</p></div>
          <div style="background: rgba(255,255,255,0.03); padding: 18px; border-radius: 8px; border-left: 4px solid #f59e0b;"><h4 style="color: #f59e0b; margin-bottom: 4px; font-size: 0.98rem;">4. GPS Real-Time Monitoring</h4><p style="color: #cbd5e1; font-size: 0.85rem; line-height: 1.5; margin: 0;">Continuous satellite tracking providing live position updates via WhatsApp throughout transit.</p></div>
        </div>
      </div>
    </div>
  </section>

  <!-- Route Logistics Matrix Section -->
  <section style="padding: 60px 0; background: #0b132b; color: #ffffff;">
    <div class="container" style="max-width: 950px;">
      <div style="text-align: center; margin-bottom: 40px;">
        <span style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Local &amp; Intercity Pricing</span>
        <h2 style="font-size: 2.1rem; font-weight: 800; color: #ffffff; margin-top: 8px;">
          Agrico Shifting Rate Matrix
        </h2>
        <p style="color: #cbd5e1; font-size: 0.95rem; margin-top: 8px;">
          Estimated price ranges for local shifting in Agrico and intercity moves out of Jamshedpur.
        </p>
      </div>

      <div style="background: rgba(255,255,255,0.04); border: 1px solid rgba(245,158,11,0.25); border-radius: 12px; padding: 25px; margin-bottom: 35px;">
        <div style="overflow-x: auto;">
          <table style="width: 100%; border-collapse: collapse; color: #cbd5e1; font-size: 0.9rem;">
            <thead>
              <tr style="background: rgba(245,158,11,0.15); color: #f59e0b; text-align: left;">
                <th style="padding: 12px; border: 1px solid rgba(245,158,11,0.3);">Shifting Service</th>
                <th style="padding: 12px; border: 1px solid rgba(245,158,11,0.3);">Vehicle Type</th>
                <th style="padding: 12px; border: 1px solid rgba(245,158,11,0.3);">Service Scope</th>
                <th style="padding: 12px; border: 1px solid rgba(245,158,11,0.3);">Estimated Cost (₹)</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td style="padding: 10px; border: 1px solid rgba(255,255,255,0.1); font-weight: 700; color: #ffffff;">1 BHK Local Shifting (Agrico)</td>
                <td style="padding: 10px; border: 1px solid rgba(255,255,255,0.1);">14ft City Truck</td>
                <td style="padding: 10px; border: 1px solid rgba(255,255,255,0.1);">Local Jamshedpur Area</td>
                <td style="padding: 10px; border: 1px solid rgba(255,255,255,0.1); color: #10b981; font-weight: 700;">₹4,200 - ₹7,000</td>
              </tr>
              <tr style="background: rgba(255,255,255,0.02);">
                <td style="padding: 10px; border: 1px solid rgba(255,255,255,0.1); font-weight: 700; color: #ffffff;">2 BHK Local Shifting (Agrico)</td>
                <td style="padding: 10px; border: 1px solid rgba(255,255,255,0.1);">17ft Container Truck</td>
                <td style="padding: 10px; border: 1px solid rgba(255,255,255,0.1);">Local Jamshedpur Area</td>
                <td style="padding: 10px; border: 1px solid rgba(255,255,255,0.1); color: #f59e0b; font-weight: 700;">₹7,000 - ₹11,500</td>
              </tr>
              <tr>
                <td style="padding: 10px; border: 1px solid rgba(255,255,255,0.1); font-weight: 700; color: #ffffff;">3 BHK Local Relocation (Agrico)</td>
                <td style="padding: 10px; border: 1px solid rgba(255,255,255,0.1);">19ft / 20ft Truck</td>
                <td style="padding: 10px; border: 1px solid rgba(255,255,255,0.1);">Local Jamshedpur Area</td>
                <td style="padding: 10px; border: 1px solid rgba(255,255,255,0.1); color: #f59e0b; font-weight: 700;">₹10,500 - ₹16,500</td>
              </tr>
              <tr style="background: rgba(255,255,255,0.02);">
                <td style="padding: 10px; border: 1px solid rgba(255,255,255,0.1); font-weight: 700; color: #ffffff;">Office Relocation (Agrico)</td>
                <td style="padding: 10px; border: 1px solid rgba(255,255,255,0.1);">Dedicated Container Fleet</td>
                <td style="padding: 10px; border: 1px solid rgba(255,255,255,0.1);">Local / Intercity</td>
                <td style="padding: 10px; border: 1px solid rgba(255,255,255,0.1); color: #10b981; font-weight: 700;">₹12,000 - ₹35,000</td>
              </tr>
              <tr>
                <td style="padding: 10px; border: 1px solid rgba(255,255,255,0.1); font-weight: 700; color: #ffffff;">Car Carrier Shipping (Intercity)</td>
                <td style="padding: 10px; border: 1px solid rgba(255,255,255,0.1);">Enclosed Car Carrier</td>
                <td style="padding: 10px; border: 1px solid rgba(255,255,255,0.1);">Door-to-Door Outstation</td>
                <td style="padding: 10px; border: 1px solid rgba(255,255,255,0.1); color: #10b981; font-weight: 700;">₹6,500 - ₹14,000</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </section>

  <!-- 5-Stage Intercity Relocation Workflow -->
  <section style="padding: 60px 0; background: #ffffff;">
    <div class="container">
      <div style="text-align: center; max-width: 800px; margin: 0 auto 40px auto;">
        <span style="color: #d32f2f; font-weight: 700; text-transform: uppercase; font-size: 0.85rem;">Step-by-Step Logistics</span>
        <h2 style="font-size: 2.1rem; color: #0b132b; font-weight: 800; margin-top: 5px;">
          5-Stage Relocation Workflow in Agrico
        </h2>
      </div>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 15px;">
        <div style="background: #f8fafc; padding: 22px; border-radius: 12px; border-left: 4px solid #d32f2f;">
          <span style="color: #f59e0b; font-weight: 800; font-size: 0.85rem;">STAGE 1</span>
          <h3 style="font-size: 1.1rem; color: #0b132b; margin: 8px 0 6px 0; font-weight: 700;">Doorstep Pre-Move Survey</h3>
          <p style="color: #64748b; font-size: 0.88rem; line-height: 1.6; margin: 0;">Physical or video survey of Agrico residence to assess inventory volume and select vehicle specifications.</p>
        </div>
        <div style="background: #f8fafc; padding: 22px; border-radius: 12px; border-left: 4px solid #f59e0b;">
          <span style="color: #f59e0b; font-weight: 800; font-size: 0.85rem;">STAGE 2</span>
          <h3 style="font-size: 1.1rem; color: #0b132b; margin: 8px 0 6px 0; font-weight: 700;">7-Layer Safety Packaging</h3>
          <p style="color: #64748b; font-size: 0.88rem; line-height: 1.6; margin: 0;">Multi-layered packing with bubble wrap, corrugated sheets, foam corner guards, and custom wooden crating for delicate items.</p>
        </div>
        <div style="background: #f8fafc; padding: 22px; border-radius: 12px; border-left: 4px solid #d32f2f;">
          <span style="color: #f59e0b; font-weight: 800; font-size: 0.85rem;">STAGE 3</span>
          <h3 style="font-size: 1.1rem; color: #0b132b; margin: 8px 0 6px 0; font-weight: 700;">Sealed Container Dispatch</h3>
          <p style="color: #64748b; font-size: 0.88rem; line-height: 1.6; margin: 0;">Systematic loading into closed container trucks, sealed with security locks and tracked via satellite GPS.</p>
        </div>
        <div style="background: #f8fafc; padding: 22px; border-radius: 12px; border-left: 4px solid #f59e0b;">
          <span style="color: #f59e0b; font-weight: 800; font-size: 0.85rem;">STAGE 4</span>
          <h3 style="font-size: 1.1rem; color: #0b132b; margin: 8px 0 6px 0; font-weight: 700;">Safe City / Highway Transit</h3>
          <p style="color: #64748b; font-size: 0.88rem; line-height: 1.6; margin: 0;">Smooth transit via optimized routes with real-time WhatsApp status updates to destination.</p>
        </div>
        <div style="background: #f8fafc; padding: 22px; border-radius: 12px; border-left: 4px solid #d32f2f;">
          <span style="color: #f59e0b; font-weight: 800; font-size: 0.85rem;">STAGE 5</span>
          <h3 style="font-size: 1.1rem; color: #0b132b; margin: 8px 0 6px 0; font-weight: 700;">Doorstep Unloading &amp; Placement</h3>
          <p style="color: #64748b; font-size: 0.88rem; line-height: 1.6; margin: 0;">Unloading into your new home or office, unpacking, assembling furniture, and final verification.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 4: Contextual Links -->
  <section style="padding: 50px 0; background: #f8fafc;">
    <div class="container">
      <div style="text-align: center; max-width: 800px; margin: 0 auto 30px auto;">
        <h3 style="font-size: 1.8rem; color: #0b132b; font-weight: 800;">Connecting <span style="color: #d32f2f;">Agrico</span> to Key Locations</h3>
      </div>
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); gap: 15px;">
        <a href="<?php echo SITE_URL; ?>packers-and-movers-in-jamshedpur" style="background: #fff; padding: 12px; border-radius: 6px; border: 1px solid #e2e8f0; color: #0b132b; text-decoration: none; font-weight: 600;">📍 Movers in Jamshedpur</a>
        <a href="<?php echo SITE_URL; ?>packers-and-movers-sidhgora-jamshedpur" style="background: #fff; padding: 12px; border-radius: 6px; border: 1px solid #e2e8f0; color: #0b132b; text-decoration: none; font-weight: 600;">📍 Movers in Sidhgora</a>
        <a href="<?php echo SITE_URL; ?>packers-and-movers-golmuri-jamshedpur" style="background: #fff; padding: 12px; border-radius: 6px; border: 1px solid #e2e8f0; color: #0b132b; text-decoration: none; font-weight: 600;">📍 Movers in Golmuri</a>
        <a href="<?php echo SITE_URL; ?>packers-and-movers-bhalubasa-jamshedpur" style="background: #fff; padding: 12px; border-radius: 6px; border: 1px solid #e2e8f0; color: #0b132b; text-decoration: none; font-weight: 600;">📍 Movers in Bhalubasa</a>
        <a href="<?php echo SITE_URL; ?>packers-and-movers-jamshedpur-to-ranchi" style="background: #fff; padding: 12px; border-radius: 6px; border: 1px solid #e2e8f0; color: #0b132b; text-decoration: none; font-weight: 600;">🚛 Jamshedpur to Ranchi</a>
        <a href="<?php echo SITE_URL; ?>packers-and-movers-jamshedpur-to-kolkata" style="background: #fff; padding: 12px; border-radius: 6px; border: 1px solid #e2e8f0; color: #0b132b; text-decoration: none; font-weight: 600;">🚛 Jamshedpur to Kolkata</a>
        <a href="<?php echo SITE_URL; ?>packers-and-movers-jamshedpur-to-patna" style="background: #fff; padding: 12px; border-radius: 6px; border: 1px solid #e2e8f0; color: #0b132b; text-decoration: none; font-weight: 600;">🚛 Jamshedpur to Patna</a>
        <a href="<?php echo SITE_URL; ?>packers-and-movers-jamshedpur-to-dhanbad" style="background: #fff; padding: 12px; border-radius: 6px; border: 1px solid #e2e8f0; color: #0b132b; text-decoration: none; font-weight: 600;">🚛 Jamshedpur to Dhanbad</a>
      </div>
    </div>
  </section>

  <!-- Expanded 20-Item Route FAQs -->
  <section style="padding: 50px 0; background: #ffffff;">
    <div class="container">
      <div style="text-align: center; max-width: 800px; margin: 0 auto 35px auto;">
        <h2 style="font-size: 2rem; color: #0b132b; font-weight: 800;">Agrico Relocation FAQs</h2>
      </div>
      <div style="max-width: 850px; margin: 0 auto; display: flex; flex-direction: column; gap: 12px;">
        <div style="background: #f8fafc; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0;"><h4 style="color: #0b132b; font-weight: 700;">Q1: Do you serve Agrico Club House and surrounding quarters?</h4><p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin-top: 6px;">Yes, we serve all sectors in Agrico including Agrico Club House area, Sidhgora border, and Bhalubasa road.</p></div>
        <div style="background: #f8fafc; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0;"><h4 style="color: #0b132b; font-weight: 700;">Q2: Are GST bills provided for employee claim reimbursements?</h4><p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin-top: 6px;">Yes, we issue genuine 18% GST invoices, stamped Consignment Notes (LR), and IBA-approved bill formats for corporate claims.</p></div>
        <div style="background: #f8fafc; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0;"><h4 style="color: #0b132b; font-weight: 700;">Q3: How early should I schedule shifting in Agrico?</h4><p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin-top: 6px;">Booking 24 to 48 hours in advance is recommended to reserve dedicated container trucks.</p></div>
        <div style="background: #f8fafc; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0;"><h4 style="color: #0b132b; font-weight: 700;">Q4: Can you move Tata quarters in Agrico?</h4><p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin-top: 6px;">Yes, we are highly experienced in moving Tata Steel officer quarters and independent homes in Agrico.</p></div>
        <div style="background: #f8fafc; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0;"><h4 style="color: #0b132b; font-weight: 700;">Q5: Is transit insurance provided for intercity routes from Agrico?</h4><p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin-top: 6px;">Yes, comprehensive 3% declared value transit policy coverage protects cargo against highway risks.</p></div>
        <div style="background: #f8fafc; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0;"><h4 style="color: #0b132b; font-weight: 700;">Q6: How do you transport bikes from Agrico?</h4><p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin-top: 6px;">Motorcycles are wrapped in paddy straw, bubble wrap, and heavy corrugated sheets before being secured inside covered carriers.</p></div>
        <div style="background: #f8fafc; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0;"><h4 style="color: #0b132b; font-weight: 700;">Q7: Are packing materials included in the price estimate?</h4><p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin-top: 6px;">Yes, all 7 layers of packing materials—bubble wrap, corrugated sheets, foam guards, stretch film—are fully included.</p></div>
        <div style="background: #f8fafc; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0;"><h4 style="color: #0b132b; font-weight: 700;">Q8: Do you disassemble beds and wardrobes?</h4><p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin-top: 6px;">Yes, our experienced carpenters disassemble and reassemble all heavy furniture items at destination.</p></div>
        <div style="background: #f8fafc; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0;"><h4 style="color: #0b132b; font-weight: 700;">Q9: Are there any hidden charges in Agrico relocation?</h4><p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin-top: 6px;">No, we provide clear written quotes prior to starting with an explicit zero-hidden-cost guarantee.</p></div>
        <div style="background: #f8fafc; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0;"><h4 style="color: #0b132b; font-weight: 700;">Q10: How can I contact Shree Ashirwad Packers in Agrico?</h4><p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin-top: 6px;">Call <strong>+91 8409531615</strong> or message us on WhatsApp for an immediate quote.</p></div>
        <div style="background: #f8fafc; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0;"><h4 style="color: #0b132b; font-weight: 700;">Q11: Which surrounding areas near Agrico do you cover?</h4><p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin-top: 6px;">We cover Agrico Colony, Sidhgora, Golmuri, Bhalubasa, Baridih, and Cable Town.</p></div>
        <div style="background: #f8fafc; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0;"><h4 style="color: #0b132b; font-weight: 700;">Q12: Can I track my vehicle live during transit from Agrico?</h4><p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin-top: 6px;">Yes, all closed container vehicles feature live GPS satellite tracking providing real-time location updates via WhatsApp.</p></div>
        <div style="background: #f8fafc; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0;"><h4 style="color: #0b132b; font-weight: 700;">Q13: How is fragile glassware and crockery packed?</h4><p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin-top: 6px;">Crockery is wrapped item-by-item in bubble sheet and placed vertically in heavy 5-ply corrugated master cartons.</p></div>
        <div style="background: #f8fafc; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0;"><h4 style="color: #0b132b; font-weight: 700;">Q14: Do you offer car shipping from Agrico?</h4><p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin-top: 6px;">Yes, cars are transported inside enclosed hydraulic car container carriers with door-to-door pickup and delivery.</p></div>
        <div style="background: #f8fafc; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0;"><h4 style="color: #0b132b; font-weight: 700;">Q15: What payment schedule is followed for Agrico shifting?</h4><p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin-top: 6px;">Standard booking follows 20% advance, 70% upon loading in Agrico, and the remaining 10% after doorstep delivery.</p></div>
        <div style="background: #f8fafc; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0;"><h4 style="color: #0b132b; font-weight: 700;">Q16: How do you handle narrow lanes in Agrico residential quarters?</h4><p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin-top: 6px;">We deploy specialized smaller feeder vehicles or experienced manual carry teams equipped with heavy safety straps.</p></div>
        <div style="background: #f8fafc; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0;"><h4 style="color: #0b132b; font-weight: 700;">Q17: What paperwork is issued for corporate employee transfer claims?</h4><p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin-top: 6px;">We issue stamped Lorry Receipts (LR), official 18% GST invoices, money receipts, and itemized inventory slips.</p></div>
        <div style="background: #f8fafc; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0;"><h4 style="color: #0b132b; font-weight: 700;">Q18: Can I store goods in Jamshedpur if my destination home is delayed?</h4><p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin-top: 6px;">Yes, we offer secure warehouse storage facilities in Jamshedpur with flexible daily or monthly rates.</p></div>
        <div style="background: #f8fafc; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0;"><h4 style="color: #0b132b; font-weight: 700;">Q19: How are large smart TVs and wooden mandirs packed?</h4><p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin-top: 6px;">Smart TVs and mandirs receive air-bubble cushioning, foam corner protection, and sturdy wooden crate framing.</p></div>
        <div style="background: #f8fafc; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0;"><h4 style="color: #0b132b; font-weight: 700;">Q20: How do I schedule a free doorstep estimate for Agrico relocation?</h4><p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin-top: 6px;">Call <strong>+91 8409531615</strong> or send a message on WhatsApp to arrange a free physical or video survey.</p></div>
      </div>
    </div>
  </section>

  <!-- Section 6: CTA Banner -->
  <section class="cta-banner-section" style="padding: 50px 0; background: linear-gradient(135deg, #0b132b 0%, #1c2541 100%); color: #ffffff;">
    <div class="container">
      <div style="text-align: center; max-width: 800px; margin: 0 auto;">
        <h2 style="font-size: 2.1rem; font-weight: 800; margin-bottom: 15px;">Book Agrico Shifting Services Today</h2>
        <p style="color: #cbd5e1; font-size: 0.98rem; margin-bottom: 25px;">Guaranteed safe transit, 18% GST invoices, IBA approved billing, and 7-layer safety packaging.</p>
        <div style="display: flex; gap: 15px; justify-content: center; flex-wrap: wrap;">
          <a href="tel:<?php echo SITE_PHONE_RAW; ?>" style="padding: 14px 32px; background: linear-gradient(135deg, #d32f2f 0%, #f59e0b 100%); color: #fff; border-radius: 50px; font-weight: 700; text-decoration: none;">📞 Call: <?php echo SITE_PHONE; ?></a>
          <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20need%20shifting%20quote%20for%20Agrico." target="_blank" style="padding: 14px 32px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #fff; border-radius: 50px; font-weight: 700; text-decoration: none;">💬 WhatsApp Quote</a>
        </div>
      </div>
    </div>
  </section>

</main>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
