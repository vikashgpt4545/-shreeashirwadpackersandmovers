<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "Transit Insurance Guide Packers Movers Jamshedpur | 8409531615";
$page_desc = "Complete Transit Insurance Guide for Packers and Movers in Jamshedpur. Learn full goods value coverage, policy terms, and fast claim processing. Call (+91) 8409531615.";
$page_keywords = "transit insurance guide packers movers jamshedpur, moving insurance coverage jamshedpur, goods transit policy bistupur sakchi mango adityapur, household insurance claim jamshedpur";

$page_city = "Jamshedpur";

$faq_list = [
    ['q' => 'Is transit insurance mandatory for intercity moving?', 'a' => 'We strongly recommend transit insurance for all long-distance relocations to protect your investment.'],
    ['q' => 'Will I receive an authentic policy document?', 'a' => 'Yes, an official insurance policy copy issued by recognized IRDAI insurers is handed over prior to dispatch.'],
    ['q' => 'How to reach Shree Ashirwad Packers for insured shifting quotes?', 'a' => 'Call +91 8409531615 or message us on WhatsApp for immediate support.']
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
        <span class="breadcrumb-item active">Transit Insurance Guide Packers Movers Jamshedpur</span>
      </div>
    </div>
  </div>


  <!-- Hero Section -->
  <section class="hero-section" style="background: linear-gradient(135deg, #0b132b 0%, #1c2541 100%); padding: 60px 0; color: #ffffff;">
    <div class="container">
      <div class="hero-grid" style="display: grid; grid-template-columns: 1.2fr 0.8fr; gap: 40px; align-items: center;">
        
        <div class="hero-text">
          <span class="section-tag" style="background: rgba(245, 158, 11, 0.15); color: #f59e0b; border: 1px solid rgba(245, 158, 11, 0.4); padding: 6px 16px; border-radius: 20px; font-size: 0.85rem; font-weight: 700; text-transform: uppercase; display: inline-block; margin-bottom: 15px;">
            Goods Protection Guide
          </span>
          <h1 style="font-size: 2.7rem; font-weight: 800; line-height: 1.2; margin-bottom: 20px; color: #ffffff;">
            Complete <span style="color: #f59e0b;">Transit Insurance Guide Jamshedpur</span>
          </h1>
          <p style="font-size: 1.08rem; color: #cbd5e1; line-height: 1.7; margin-bottom: 25px;">
            Protect your precious household furniture, electronic appliances, and vehicles against unforeseen highway accidents, overturns, or fire damage during relocation. Shree Ashirwad Packers provides comprehensive 3% declared value transit insurance with national insurance partners across Bistupur, Sakchi, Mango, Adityapur, Telco, Sonari, and Kadma.
          </p>

          <div style="display: flex; gap: 15px; flex-wrap: wrap; margin-bottom: 30px;">
            <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Now:" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #d32f2f 0%, #f59e0b 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(211, 47, 47, 0.4);">
              <i class="fas fa-phone-alt"></i> Call Now: <?php echo SITE_PHONE; ?>
            </a>
            <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20need%20transit%20insurance%20details%20and%20quote%20in%20Jamshedpur." title="Chat on WhatsApp" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
              <i class="fab fa-whatsapp"></i> Chat on WhatsApp
            </a>
          </div>
        </div>

        <div class="hero-form-card" style="background: rgba(255, 255, 255, 0.05); backdrop-filter: blur(10px); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 16px; padding: 30px; box-shadow: 0 15px 35px rgba(0,0,0,0.4);">
          <h2 style="font-size: 1.4rem; color: #ffffff; margin-bottom: 8px; font-weight: 700; text-align: center;">Get Insured Shifting Quote</h2>
          <p style="font-size: 0.85rem; color: #94a3b8; text-align: center; margin-bottom: 20px;">Receive a full protection estimate on WhatsApp in 2 minutes</p>

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
              Get Insured Estimate Now ➔
            </button>
          </form>
        </div>

      </div>
    </div>
  </section>

  <!-- Section 1: Overview Box -->
  <section style="padding: 50px 0; background: linear-gradient(145deg, #0b132b 0%, #172a54 100%); border-bottom: 1px solid rgba(245, 158, 11, 0.3); color: #ffffff;">
    <div class="container" style="max-width: 950px;">
      <h3 style="color: #f59e0b; font-size: 1.4rem; font-weight: 700; margin-bottom: 14px;">Complete Transit Insurance Guide for Packers and Movers in Jamshedpur</h3>
      <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.7; margin-bottom: 14px;">
        Relocating your valuable household furniture, electronic appliances, and personal vehicles from Jamshedpur over long national highway distances involves inherent transportation risks such as highway collisions, vehicle overturns, rain water seepage, or fire accidents. Understanding our <strong>transit insurance guide for packers and movers in Jamshedpur</strong> ensures complete financial protection for your goods from origin pickup to final destination delivery.
      </p>
      <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.7; margin-bottom: 14px;">
        Shree Ashirwad Packers and Movers collaborates with leading IRDAI-approved insurance partners (National Insurance, Oriental Insurance, New India Assurance, and ICICI Lombard) to issue legitimate marine cargo and household goods transit policies for clients across Bistupur, Sakchi, Mango, Adityapur, Telco, Sonari, Kadma, Jugsalai, Golmuri, Baridih, and Sundarnagar.
      </p>
      <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.7; margin-bottom: 14px;">
        It is vital to distinguish between two main insurance types: <strong>Transit Risk Insurance (1.5% to 3% premium)</strong> which protects against catastrophic vehicle accidents, fire, and overturn during highway travel, and <strong>All-Risk Comprehensive Insurance</strong> which covers accidental breakage during handling, loading, transit, and unloading when packed by our professional crew.
      </p>
      <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.7; margin-bottom: 14px;">
        To ensure valid policy issuance, clients complete a declared value inventory sheet specifying the current market replacement values of double beds, sofas, LED TVs, refrigerators, washing machines, and vehicles. This declared sum insured forms the legal basis for surveyor assessments and compensation claims.
      </p>
      <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.7; margin-bottom: 14px;">
        Beware of fraudulent moving operators who collect 3% insurance money from customers but fail to generate an authentic insurance policy certificate. At Shree Ashirwad Packers, we issue the official insurance policy document stamped with policy serial numbers and insurer contact details prior to container truck dispatch.
      </p>
      <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.7; margin-bottom: 14px;">
        For corporate executives at Tata Steel, Tata Motors, and bank officers seeking employer relocation claims, transit insurance premium receipts issued by Shree Ashirwad Packers are 100% recognized for HR allowance reimbursement.
      </p>
      <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.7; margin-bottom: 14px;">
        Our customer support hotline remains active throughout the transit journey. In the unlikely event of any minor scratch or bumper impact, our claim desk arranges instant surveyor visits at the destination city to expedite claim settlement without delays.
      </p>
      <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.7; margin: 0;">
        Review our detailed insurance policy breakdown, premium calculation matrix, claim survey procedure, and transit insurance FAQs below.
      </p>
    </div>
  </section>

  <!-- Section 2: Stats Bar -->
  <section style="padding: 35px 0; background: #070d19; border-bottom: 1px solid rgba(245, 158, 11, 0.2);">
    <div class="container">
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(160px, 1fr)); gap: 15px; text-align: center;">
        <div><h3 style="color: #f59e0b; font-size: 2rem; font-weight: 800;">100%</h3><p style="color: #cbd5e1; font-size: 0.85rem;">Declared Value Cover</p></div>
        <div><h3 style="color: #f59e0b; font-size: 2rem; font-weight: 800;">3%</h3><p style="color: #cbd5e1; font-size: 0.85rem;">Standard Premium Rate</p></div>
        <div><h3 style="color: #f59e0b; font-size: 2rem; font-weight: 800;">IRDAI</h3><p style="color: #cbd5e1; font-size: 0.85rem;">Approved Insurers</p></div>
        <div><h3 style="color: #f59e0b; font-size: 2rem; font-weight: 800;">Fast-Track</h3><p style="color: #cbd5e1; font-size: 0.85rem;">Claim Settlement</p></div>
        <div><h3 style="color: #f59e0b; font-size: 2rem; font-weight: 800;">Door-to-Door</h3><p style="color: #cbd5e1; font-size: 0.85rem;">All-Risk Options</p></div>
        <div><h3 style="color: #f59e0b; font-size: 2rem; font-weight: 800;">100%</h3><p style="color: #cbd5e1; font-size: 0.85rem;">Genuine Policy Docs</p></div>
      </div>
    </div>
  </section>

  <!-- Section 3: 6-Card Feature Grid -->
  <section style="padding: 60px 0; background: #ffffff;">
    <div class="container">
      <div style="text-align: center; max-width: 800px; margin: 0 auto 40px auto;">
        <span style="color: #d32f2f; font-weight: 700; text-transform: uppercase; font-size: 0.85rem;">Protection Coverage</span>
        <h2 style="font-size: 2.1rem; color: #0b132b; font-weight: 800; margin-top: 5px;">
          Transit Insurance Features &amp; Policy Types in <span style="color: #d32f2f;">Jamshedpur</span>
        </h2>
        <p style="color: #64748b; font-size: 0.98rem; margin-top: 8px;">
          Comprehensive financial security for household goods, commercial cargo, and personal vehicles.
        </p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 25px; margin-bottom: 40px;">
        <div style="background: #f8fafc; padding: 25px; border-radius: 12px; border-top: 4px solid #d32f2f; box-shadow: 0 4px 15px rgba(0,0,0,0.05);">
          <h3 style="font-size: 1.15rem; color: #0b132b; margin-bottom: 8px; font-weight: 700;">Transit Risk Insurance Policy</h3>
          <p style="color: #64748b; font-size: 0.9rem; line-height: 1.6;">Covers major accidents, vehicle collision, overturning, fire, explosion, or bridge collapse during highway transit.</p>
        </div>
        <div style="background: #f8fafc; padding: 25px; border-radius: 12px; border-top: 4px solid #f59e0b; box-shadow: 0 4px 15px rgba(0,0,0,0.05);">
          <h3 style="font-size: 1.15rem; color: #0b132b; margin-bottom: 8px; font-weight: 700;">All-Risk Household Cover</h3>
          <p style="color: #64748b; font-size: 0.9rem; line-height: 1.6;">Complete door-to-door protection covering handling damage, scratches, glass breakage, and transit bumps.</p>
        </div>
        <div style="background: #f8fafc; padding: 25px; border-radius: 12px; border-top: 4px solid #d32f2f; box-shadow: 0 4px 15px rgba(0,0,0,0.05);">
          <h3 style="font-size: 1.15rem; color: #0b132b; margin-bottom: 8px; font-weight: 700;">Car &amp; Bike Vehicle Insurance</h3>
          <p style="color: #64748b; font-size: 0.9rem; line-height: 1.6;">Dedicated motor transit insurance covering external body damage, paint scratches, and theft during vehicle carrier shipping.</p>
        </div>
        <div style="background: #f8fafc; padding: 25px; border-radius: 12px; border-top: 4px solid #f59e0b; box-shadow: 0 4px 15px rgba(0,0,0,0.05);">
          <h3 style="font-size: 1.15rem; color: #0b132b; margin-bottom: 8px; font-weight: 700;">IRDAI Approved Policy Certificate</h3>
          <p style="color: #64748b; font-size: 0.9rem; line-height: 1.6;">Direct policy document issued by recognized national insurance companies stamped with official policy numbers.</p>
        </div>
        <div style="background: #f8fafc; padding: 25px; border-radius: 12px; border-top: 4px solid #d32f2f; box-shadow: 0 4px 15px rgba(0,0,0,0.05);">
          <h3 style="font-size: 1.15rem; color: #0b132b; margin-bottom: 8px; font-weight: 700;">Transparent 3% Premium Pricing</h3>
          <p style="color: #64748b; font-size: 0.9rem; line-height: 1.6;">Clear declared value premium calculation with zero hidden admin fees or unexpected surcharge deductions.</p>
        </div>
        <div style="background: #f8fafc; padding: 25px; border-radius: 12px; border-top: 4px solid #f59e0b; box-shadow: 0 4px 15px rgba(0,0,0,0.05);">
          <h3 style="font-size: 1.15rem; color: #0b132b; margin-bottom: 8px; font-weight: 700;">Express Surveyor Claim Support</h3>
          <p style="color: #64748b; font-size: 0.9rem; line-height: 1.6;">Dedicated assistance for quick surveyor inspections, loss documentation, LR verification, and fast claim payout.</p>
        </div>
      </div>

      <!-- Mandatory 4-Policy Protection Breakdown -->
      <div style="background: #070d19; padding: 35px; border-radius: 16px; border: 1px solid rgba(245, 158, 11, 0.3); color: #ffffff; margin-bottom: 40px;">
        <h3 style="color: #f59e0b; font-size: 1.5rem; font-weight: 800; text-align: center; margin-bottom: 20px;">
          Core Policy Protection Breakdown
        </h3>
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); gap: 15px;">
          <div style="background: rgba(255,255,255,0.03); padding: 18px; border-radius: 8px; border-left: 4px solid #f59e0b;"><h4 style="color: #f59e0b; margin-bottom: 4px; font-size: 0.98rem;">1. Highway Collision &amp; Overturn</h4><p style="color: #cbd5e1; font-size: 0.85rem; line-height: 1.5; margin: 0;">Full market value protection against vehicle crash, capsizing, or highway bridge disasters.</p></div>
          <div style="background: rgba(255,255,255,0.03); padding: 18px; border-radius: 8px; border-left: 4px solid #f59e0b;"><h4 style="color: #f59e0b; margin-bottom: 4px; font-size: 0.98rem;">2. Fire &amp; Explosion Coverage</h4><p style="color: #cbd5e1; font-size: 0.85rem; line-height: 1.5; margin: 0;">Financial compensation for total or partial goods destruction caused by accidental vehicle fire.</p></div>
          <div style="background: rgba(255,255,255,0.03); padding: 18px; border-radius: 8px; border-left: 4px solid #f59e0b;"><h4 style="color: #f59e0b; margin-bottom: 4px; font-size: 0.98rem;">3. Natural Calamities &amp; Floods</h4><p style="color: #cbd5e1; font-size: 0.85rem; line-height: 1.5; margin: 0;">Protection against severe monsoon floods, landslides, storm damage, or earthquake events in transit.</p></div>
          <div style="background: rgba(255,255,255,0.03); padding: 18px; border-radius: 8px; border-left: 4px solid #f59e0b;"><h4 style="color: #f59e0b; margin-bottom: 4px; font-size: 0.98rem;">4. Accidental Handling Breakage</h4><p style="color: #cbd5e1; font-size: 0.85rem; line-height: 1.5; margin: 0;">All-Risk policy covers furniture chipping, glass panel cracks, and electronic damage during loading.</p></div>
        </div>
      </div>
    </div>
  </section>

  <!-- Insurance Premium & Claim Settlement Comparison Matrix -->
  <section style="padding: 60px 0; background: #0b132b; color: #ffffff;">
    <div class="container" style="max-width: 950px;">
      <div style="text-align: center; margin-bottom: 40px;">
        <span style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Policy Comparison</span>
        <h2 style="font-size: 2.1rem; font-weight: 800; color: #ffffff; margin-top: 8px;">
          Transit Insurance Premium &amp; Coverage Comparison
        </h2>
        <p style="color: #cbd5e1; font-size: 0.95rem; margin-top: 8px;">
          Understand rates, coverage scope, and claim terms before booking your relocation.
        </p>
      </div>

      <div style="background: rgba(255,255,255,0.04); border: 1px solid rgba(245,158,11,0.25); border-radius: 12px; padding: 25px; margin-bottom: 35px;">
        <div style="overflow-x: auto;">
          <table style="width: 100%; border-collapse: collapse; color: #cbd5e1; font-size: 0.9rem;">
            <thead>
              <tr style="background: rgba(245,158,11,0.15); color: #f59e0b; text-align: left;">
                <th style="padding: 12px; border: 1px solid rgba(245,158,11,0.3);">Policy Type</th>
                <th style="padding: 12px; border: 1px solid rgba(245,158,11,0.3);">Premium Rate</th>
                <th style="padding: 12px; border: 1px solid rgba(245,158,11,0.3);">Coverage Scope</th>
                <th style="padding: 12px; border: 1px solid rgba(245,158,11,0.3);">Exclusions</th>
                <th style="padding: 12px; border: 1px solid rgba(245,158,11,0.3);">Claim Survey Time</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td style="padding: 10px; border: 1px solid rgba(255,255,255,0.1);">Transit Risk Insurance</td>
                <td style="padding: 10px; border: 1px solid rgba(255,255,255,0.1);">1.5% - 2% of Declared Value</td>
                <td style="padding: 10px; border: 1px solid rgba(255,255,255,0.1);">Collision, Fire, Overturn, Bridge Collapse</td>
                <td style="padding: 10px; border: 1px solid rgba(255,255,255,0.1);">Minor scratches, internal electronic fault</td>
                <td style="padding: 10px; border: 1px solid rgba(255,255,255,0.1);">24 - 48 Hours</td>
              </tr>
              <tr style="background: rgba(255,255,255,0.02);">
                <td style="padding: 10px; border: 1px solid rgba(255,255,255,0.1);">All-Risk Comprehensive Cover</td>
                <td style="padding: 10px; border: 1px solid rgba(255,255,255,0.1);">3% of Declared Goods Value</td>
                <td style="padding: 10px; border: 1px solid rgba(255,255,255,0.1);">Accidental damage, breakage, handling impact</td>
                <td style="padding: 10px; border: 1px solid rgba(255,255,255,0.1);">Self-packed box damage, cash, jewelry</td>
                <td style="padding: 10px; border: 1px solid rgba(255,255,255,0.1);">24 - 48 Hours</td>
              </tr>
              <tr>
                <td style="padding: 10px; border: 1px solid rgba(255,255,255,0.1);">Car Carrier Motor Insurance</td>
                <td style="padding: 10px; border: 1px solid rgba(255,255,255,0.1);">1.5% - 2.5% of IDV</td>
                <td style="padding: 10px; border: 1px solid rgba(255,255,255,0.1);">External body scratch, dent, theft, transit crash</td>
                <td style="padding: 10px; border: 1px solid rgba(255,255,255,0.1);">Pre-existing dents listed in condition report</td>
                <td style="padding: 10px; border: 1px solid rgba(255,255,255,0.1);">48 Hours</td>
              </tr>
              <tr style="background: rgba(255,255,255,0.02);">
                <td style="padding: 10px; border: 1px solid rgba(255,255,255,0.1);">Bike Courier Insurance</td>
                <td style="padding: 10px; border: 1px solid rgba(255,255,255,0.1);">Rs. 500 - Rs. 1,200 Flat Rate</td>
                <td style="padding: 10px; border: 1px solid rgba(255,255,255,0.1);">Two-wheeler body panel crack, transit theft</td>
                <td style="padding: 10px; border: 1px solid rgba(255,255,255,0.1);">Engine mechanical wear and tear</td>
                <td style="padding: 10px; border: 1px solid rgba(255,255,255,0.1);">24 - 48 Hours</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

      <!-- Guidelines Box -->
      <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 25px;">
        <div style="background: rgba(255,255,255,0.04); border: 1px solid rgba(245,158,11,0.2); padding: 22px; border-radius: 10px;">
          <h4 style="color: #f59e0b; font-size: 1.1rem; margin-bottom: 10px;">Common Insurance Claim Pitfalls</h4>
          <p style="color: #cbd5e1; font-size: 0.9rem; line-height: 1.6; margin: 0;">
            1. Under-declaring item valuation to save on premium.<br>
            2. Self-packing fragile china or electronics into unsealed boxes.<br>
            3. Packing forbidden cash, jewelry, or documents in luggage.<br>
            4. Failing to report damage within 24 hours of delivery.
          </p>
        </div>
        <div style="background: rgba(255,255,255,0.04); border: 1px solid rgba(245,158,11,0.2); padding: 22px; border-radius: 10px;">
          <h4 style="color: #f59e0b; font-size: 1.1rem; margin-bottom: 10px;">Shree Ashirwad Insurance Assurance</h4>
          <p style="color: #cbd5e1; font-size: 0.9rem; line-height: 1.6; margin: 0;">
            1. Original IRDAI insurance policy provided before truck movement.<br>
            2. Professional itemized declared value assistance.<br>
            3. On-site surveyor arrangement within 24 hours of claim note.<br>
            4. Fast direct bank account claim payout support.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- 4-Step Claim Settlement Workflow -->
  <section style="padding: 60px 0; background: #ffffff;">
    <div class="container">
      <div style="text-align: center; max-width: 800px; margin: 0 auto 40px auto;">
        <span style="color: #d32f2f; font-weight: 700; text-transform: uppercase; font-size: 0.85rem;">Process Overview</span>
        <h2 style="font-size: 2.1rem; color: #0b132b; font-weight: 800; margin-top: 5px;">
          4-Step Insurance Claim Settlement Workflow
        </h2>
      </div>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 20px;">
        <div style="background: #f8fafc; padding: 25px; border-radius: 12px; border-left: 4px solid #d32f2f;">
          <span style="color: #f59e0b; font-weight: 800; font-size: 0.85rem;">STEP 1</span>
          <h3 style="font-size: 1.15rem; color: #0b132b; margin: 8px 0 6px 0; font-weight: 700;">Declared Inventory Valuation</h3>
          <p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin: 0;">You list items and current replacement values to calculate the total sum insured and 3% policy premium.</p>
        </div>
        <div style="background: #f8fafc; padding: 25px; border-radius: 12px; border-left: 4px solid #f59e0b;">
          <span style="color: #f59e0b; font-weight: 800; font-size: 0.85rem;">STEP 2</span>
          <h3 style="font-size: 1.15rem; color: #0b132b; margin: 8px 0 6px 0; font-weight: 700;">Official Policy Document Issuance</h3>
          <p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin: 0;">We issue the original IRDAI insurance cover note stamped with policy serial number prior to vehicle dispatch.</p>
        </div>
        <div style="background: #f8fafc; padding: 25px; border-radius: 12px; border-left: 4px solid #d32f2f;">
          <span style="color: #f59e0b; font-weight: 800; font-size: 0.85rem;">STEP 3</span>
          <h3 style="font-size: 1.15rem; color: #0b132b; margin: 8px 0 6px 0; font-weight: 700;">Unpacking Inspection &amp; Damage Note</h3>
          <p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin: 0;">Upon delivery, any damage is recorded on the LR receipt and photographed immediately in the presence of crew supervisor.</p>
        </div>
        <div style="background: #f8fafc; padding: 25px; border-radius: 12px; border-left: 4px solid #f59e0b;">
          <span style="color: #f59e0b; font-weight: 800; font-size: 0.85rem;">STEP 4</span>
          <h3 style="font-size: 1.15rem; color: #0b132b; margin: 8px 0 6px 0; font-weight: 700;">Surveyor Survey &amp; Fund Credit</h3>
          <p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin: 0;">An insurance surveyor assesses the damaged goods, submits a claim report, and funds are credited directly to your account.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 4: Contextual Internal Links -->
  <section style="padding: 50px 0; background: #f8fafc;">
    <div class="container">
      <div style="text-align: center; max-width: 800px; margin: 0 auto 30px auto;">
        <h3 style="font-size: 1.8rem; color: #0b132b; font-weight: 800;">Explore Related <span style="color: #d32f2f;">Shifting Safety Guides</span></h3>
      </div>
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); gap: 15px;">
        <a href="<?php echo SITE_URL; ?>packers-and-movers-in-jamshedpur" title="Movers in Jamshedpur" style="background: #fff; padding: 14px; border-radius: 6px; border: 1px solid #e2e8f0; color: #0b132b; text-decoration: none; font-weight: 600; text-align: center; display: block;"><i class="fas fa-map-marker-alt"></i> Movers in Jamshedpur</a>
        <a href="<?php echo SITE_URL; ?>packers-and-movers-bistupur-jamshedpur" title="Movers in Bistupur" style="background: #fff; padding: 14px; border-radius: 6px; border: 1px solid #e2e8f0; color: #0b132b; text-decoration: none; font-weight: 600; text-align: center; display: block;"><i class="fas fa-map-marker-alt"></i> Movers in Bistupur</a>
        <a href="<?php echo SITE_URL; ?>how-to-choose-best-packers-and-movers-in-jamshedpur" title="⭐ How to Choose Movers" style="background: #fff; padding: 14px; border-radius: 6px; border: 1px solid #e2e8f0; color: #0b132b; text-decoration: none; font-weight: 600; text-align: center; display: block;">⭐ How to Choose Movers</a>
        <a href="<?php echo SITE_URL; ?>iba-approved-packers-and-movers-jamshedpur" title="IBA Approved Movers" style="background: #fff; padding: 14px; border-radius: 6px; border: 1px solid #e2e8f0; color: #0b132b; text-decoration: none; font-weight: 600; text-align: center; display: block;"><i class="fas fa-certificate"></i> IBA Approved Movers</a>
        <a href="<?php echo SITE_URL; ?>how-to-avoid-fraud-packers-movers-jamshedpur" title="Avoid Shifting Fraud" style="background: #fff; padding: 14px; border-radius: 6px; border: 1px solid #e2e8f0; color: #0b132b; text-decoration: none; font-weight: 600; text-align: center; display: block;"><i class="fas fa-shield-alt"></i> Avoid Shifting Fraud</a>
        <a href="<?php echo SITE_URL; ?>car-transport-guide-jamshedpur" title="Car Transport Guide" style="background: #fff; padding: 14px; border-radius: 6px; border: 1px solid #e2e8f0; color: #0b132b; text-decoration: none; font-weight: 600; text-align: center; display: block;"><i class="fas fa-car"></i> Car Transport Guide</a>
        <a href="<?php echo SITE_URL; ?>packers-and-movers-jamshedpur-cost-guide" title="💡 Shifting Cost Guide" style="background: #fff; padding: 14px; border-radius: 6px; border: 1px solid #e2e8f0; color: #0b132b; text-decoration: none; font-weight: 600; text-align: center; display: block;">💡 Shifting Cost Guide</a>
        <a href="<?php echo SITE_URL; ?>packers-and-movers-sakchi-jamshedpur" title="Movers in Sakchi" style="background: #fff; padding: 14px; border-radius: 6px; border: 1px solid #e2e8f0; color: #0b132b; text-decoration: none; font-weight: 600; text-align: center; display: block;"><i class="fas fa-map-marker-alt"></i> Movers in Sakchi</a>
      </div>
    </div>
  </section>

  <!-- Expanded 20-Item Transit Insurance FAQs -->
  <section style="padding: 50px 0; background: #ffffff;">
    <div class="container">
      <div style="text-align: center; max-width: 800px; margin: 0 auto 35px auto;">
        <h2 style="font-size: 2rem; color: #0b132b; font-weight: 800;">Transit Insurance FAQs</h2>
      </div>
      <div style="max-width: 850px; margin: 0 auto; display: flex; flex-direction: column; gap: 12px;">
        <div style="background: #f8fafc; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0;"><h4 style="color: #0b132b; font-weight: 700;">Q1: Is transit insurance mandatory for intercity moving from Jamshedpur?</h4><p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin-top: 6px;">We strongly recommend transit insurance for all long-distance relocations to protect your investment against highway accidents, fire, and storm damage.</p></div>
        <div style="background: #f8fafc; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0;"><h4 style="color: #0b132b; font-weight: 700;">Q2: Will I receive an authentic insurance policy document?</h4><p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin-top: 6px;">Yes, an official insurance policy certificate issued by recognized IRDAI insurers is handed over to you prior to truck dispatch.</p></div>
        <div style="background: #f8fafc; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0;"><h4 style="color: #0b132b; font-weight: 700;">Q3: What is the difference between Transit Risk and All-Risk Insurance?</h4><p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin-top: 6px;">Transit Risk covers major highway accidents, overturns, and fires. All-Risk covers handling breakage and damage during loading/unloading when packed by our crew.</p></div>
        <div style="background: #f8fafc; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0;"><h4 style="color: #0b132b; font-weight: 700;">Q4: How is the insurance premium calculated?</h4><p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin-top: 6px;">Premium is calculated as a percentage (typically 1.5% to 3%) of the declared total replacement value of your household goods or vehicle.</p></div>
        <div style="background: #f8fafc; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0;"><h4 style="color: #0b132b; font-weight: 700;">Q5: What items are excluded from transit insurance coverage?</h4><p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin-top: 6px;">Cash, gold jewelry, valuable documents, perishable food, plants, and self-packed unsealed boxes are excluded from insurance coverage.</p></div>
        <div style="background: #f8fafc; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0;"><h4 style="color: #0b132b; font-weight: 700;">Q6: How to file an insurance claim if damage occurs during transit?</h4><p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin-top: 6px;">Note the damage on the consignment LR receipt upon delivery, take clear photos/videos, and contact our claim helpline within 24 hours.</p></div>
        <div style="background: #f8fafc; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0;"><h4 style="color: #0b132b; font-weight: 700;">Q7: How long does an insurance claim settlement take?</h4><p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin-top: 6px;">Surveyor inspections are conducted within 48 hours, and claim payouts are typically processed within 7 to 15 working days by the insurance company.</p></div>
        <div style="background: #f8fafc; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0;"><h4 style="color: #0b132b; font-weight: 700;">Q8: Are electronic appliances covered under transit insurance?</h4><p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin-top: 6px;">Yes, physical damage to TVs, refrigerators, and washing machines is covered. Internal electronic circuit failure without physical impact is excluded.</p></div>
        <div style="background: #f8fafc; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0;"><h4 style="color: #0b132b; font-weight: 700;">Q9: Is car transit insurance separate from household insurance?</h4><p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin-top: 6px;">Yes, motor car transit insurance is issued based on the car's Insured Declared Value (IDV) and RC book details.</p></div>
        <div style="background: #f8fafc; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0;"><h4 style="color: #0b132b; font-weight: 700;">Q10: Which insurance companies do you partner with in Jamshedpur?</h4><p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin-top: 6px;">We partner with National Insurance, Oriental Insurance, New India Assurance, and ICICI Lombard General Insurance.</p></div>
        <div style="background: #f8fafc; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0;"><h4 style="color: #0b132b; font-weight: 700;">Q11: Does transit insurance cover local shifting within Jamshedpur?</h4><p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin-top: 6px;">While intercity moves mandatorily include transit cover, optional local goods insurance is available for intracity relocations on request.</p></div>
        <div style="background: #f8fafc; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0;"><h4 style="color: #0b132b; font-weight: 700;">Q12: Can bank employees claim transit insurance charges under IBA allowances?</h4><p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin-top: 6px;">Yes, 100% of transit insurance premiums paid to IRDAI insurers are reimbursable under bank officer relocation policies.</p></div>
        <div style="background: #f8fafc; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0;"><h4 style="color: #0b132b; font-weight: 700;">Q13: What is a Declared Value Inventory Form?</h4><p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin-top: 6px;">It is an official document where you list each major household item alongside its estimated current market replacement value.</p></div>
        <div style="background: #f8fafc; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0;"><h4 style="color: #0b132b; font-weight: 700;">Q14: Are glass items and mirrors covered under transit insurance?</h4><p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin-top: 6px;">Glassware and mirrors are covered under All-Risk policy only when packed in wooden crates or heavy-duty bubble wrap by our team.</p></div>
        <div style="background: #f8fafc; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0;"><h4 style="color: #0b132b; font-weight: 700;">Q15: What happens if I under-declare item values to lower the premium?</h4><p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin-top: 6px;">Under-declaring applies the 'Average Clause' in insurance law, proportionately reducing your final claim payout in case of partial loss.</p></div>
        <div style="background: #f8fafc; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0;"><h4 style="color: #0b132b; font-weight: 700;">Q16: Can I buy insurance directly from the insurer or through Shree Ashirwad Packers?</h4><p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin-top: 6px;">We facilitate official direct policy issuance through our corporate tie-ups, saving you time and ensuring seamless surveyor alignment.</p></div>
        <div style="background: #f8fafc; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0;"><h4 style="color: #0b132b; font-weight: 700;">Q17: Is rain water damage covered during monsoon transit?</h4><p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin-top: 6px;">Yes, monsoon water damage is covered provided goods are packed in waterproof poly-sheeting and loaded in enclosed container trucks.</p></div>
        <div style="background: #f8fafc; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0;"><h4 style="color: #0b132b; font-weight: 700;">Q18: What if a box is lost during multi-location transshipment?</h4><p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin-top: 6px;">Non-delivery or total loss of a numbered box listed on the inventory manifest is 100% compensable under the policy terms.</p></div>
        <div style="background: #f8fafc; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0;"><h4 style="color: #0b132b; font-weight: 700;">Q19: How to verify if my insurance policy is real or fake?</h4><p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin-top: 6px;">You can verify the policy number directly on the official portal or customer service toll-free number of National or Oriental Insurance.</p></div>
        <div style="background: #f8fafc; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0;"><h4 style="color: #0b132b; font-weight: 700;">Q20: How do I book insured packers and movers service in Jamshedpur?</h4><p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin-top: 6px;">Call <strong>+91 8409531615</strong> or message us on WhatsApp for immediate declared value assistance and insured relocation quotes.</p></div>
        <div style="background: #f8fafc; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0;"><h4 style="color: #0b132b; font-weight: 700;">Q21: Does transit insurance cover artwork or antique items?</h4><p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin-top: 6px;">High-value artwork, antiques, and luxury sculptures require specialized valuation certificates and customized wooden crating prior to insurance approval.</p></div>
        <div style="background: #f8fafc; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0;"><h4 style="color: #0b132b; font-weight: 700;">Q22: Is GST applied on the transit insurance premium amount?</h4><p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin-top: 6px;">Yes, standard 18% GST applies on marine cargo insurance premiums as regulated by IRDAI tax guidelines.</p></div>
        <div style="background: #f8fafc; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0;"><h4 style="color: #0b132b; font-weight: 700;">Q23: What happens if an insurance surveyor takes time to arrive?</h4><p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin-top: 6px;">Our team coordinates with local insurance surveyor panels in major destination cities, ensuring inspections are completed within 24 to 48 hours.</p></div>
        <div style="background: #f8fafc; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0;"><h4 style="color: #0b132b; font-weight: 700;">Q24: Can I increase the sum insured for selected high-value furniture?</h4><p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin-top: 6px;">Yes, you can specify individual replacement values for specific items on the inventory form to match their current replacement cost.</p></div>
        <div style="background: #f8fafc; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0;"><h4 style="color: #0b132b; font-weight: 700;">Q25: What documents are needed by the insurance company during claim processing?</h4><p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin-top: 6px;">Required documents include original insurance policy certificate, consignment LR copy, itemized inventory packing list, damaged item photos, repair estimate, and bank cancelled cheque.</p></div>
        <div style="background: #f8fafc; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0;"><h4 style="color: #0b132b; font-weight: 700;">Q26: Is transit insurance applicable for temporary storage in Jamshedpur warehouses?</h4><p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin-top: 6px;">Yes, storage insurance endorsements can be extended to cover goods stored in our secure Jamshedpur warehouse facilities for the duration of storage.</p></div>
        <div style="background: #f8fafc; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0;"><h4 style="color: #0b132b; font-weight: 700;">Q27: Can transit insurance claims be tracked online?</h4><p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin-top: 6px;">Yes, once the surveyor submits the inspection report, claim status can be tracked directly using the policy reference number on the insurer's web portal.</p></div>
      </div>
    </div>
  </section>

  <!-- Section 6: CTA Banner -->
  <section class="cta-banner-section" style="padding: 50px 0; background: linear-gradient(135deg, #0b132b 0%, #1c2541 100%); color: #ffffff;">
    <div class="container">
      <div style="text-align: center; max-width: 800px; margin: 0 auto;">
        <h2 style="font-size: 2.1rem; font-weight: 800; margin-bottom: 15px;">Protect Your Goods with Insured Shifting Today</h2>
        <p style="color: #cbd5e1; font-size: 0.98rem; margin-bottom: 25px;">Genuine IRDAI policy documents, 3% declared value coverage, and express surveyor claim support.</p>
        <div style="display: flex; gap: 15px; justify-content: center; flex-wrap: wrap;">
          <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call:" style="padding: 14px 32px; background: linear-gradient(135deg, #d32f2f 0%, #f59e0b 100%); color: #fff; border-radius: 50px; font-weight: 700; text-decoration: none;"><i class="fas fa-phone-alt"></i> Call: <?php echo SITE_PHONE; ?></a>
          <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20need%20insured%20shifting%20quote%20in%20Jamshedpur." title="WhatsApp Quote" target="_blank" style="padding: 14px 32px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #fff; border-radius: 50px; font-weight: 700; text-decoration: none;"><i class="fab fa-whatsapp"></i> WhatsApp Quote</a>
        </div>
      </div>
    </div>
  </section>

</main>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
