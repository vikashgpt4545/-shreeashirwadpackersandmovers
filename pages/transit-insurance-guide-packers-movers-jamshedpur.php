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
        <span class="breadcrumb-item"><a href="<?php echo SITE_URL; ?>">Home</a></span>
        <span class="breadcrumb-separator">/</span>
        <span class="breadcrumb-item"><a href="<?php echo SITE_URL; ?>pages/packers-and-movers-in-jamshedpur.php">Jamshedpur</a></span>
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
            <a href="tel:<?php echo SITE_PHONE_RAW; ?>" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #d32f2f 0%, #f59e0b 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(211, 47, 47, 0.4);">
              📞 Call Now: <?php echo SITE_PHONE; ?>
            </a>
            <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20need%20transit%20insurance%20details%20and%20quote%20in%20Jamshedpur." target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
              💬 Chat on WhatsApp
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

  <!-- Section 2: Stats -->
  <section style="padding: 35px 0; background: #070d19; border-bottom: 1px solid rgba(245, 158, 11, 0.2);">
    <div class="container">
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(180px, 1fr)); gap: 15px; text-align: center;">
        <div><h3 style="color: #f59e0b; font-size: 2rem; font-weight: 800;">100%</h3><p style="color: #cbd5e1; font-size: 0.85rem;">Declared Value Cover</p></div>
        <div><h3 style="color: #f59e0b; font-size: 2rem; font-weight: 800;">3%</h3><p style="color: #cbd5e1; font-size: 0.85rem;">Standard Premium Rate</p></div>
        <div><h3 style="color: #f59e0b; font-size: 2rem; font-weight: 800;">National</h3><p style="color: #cbd5e1; font-size: 0.85rem;">IRDAI Insurance Partners</p></div>
        <div><h3 style="color: #f59e0b; font-size: 2rem; font-weight: 800;">Fast</h3><p style="color: #cbd5e1; font-size: 0.85rem;">Claim Settlement Support</p></div>
      </div>
    </div>
  </section>

  <!-- Section 3: Detailed Insurance Types -->
  <section style="padding: 60px 0; background: #ffffff;">
    <div class="container">
      <div style="max-width: 900px; margin: 0 auto;">
        
        <h2 style="font-size: 2.1rem; color: #0b132b; font-weight: 800; margin-bottom: 20px;">
          Understanding Moving Insurance Options in Jamshedpur
        </h2>
        <p style="color: #475569; font-size: 1rem; line-height: 1.8; margin-bottom: 25px;">
          Transit insurance is a safety net against highway collisions, fire, capsizing of vehicles, or severe weather damage during long-distance intercity transportation.
        </p>

        <div style="display: flex; flex-direction: column; gap: 25px;">
          
          <div style="background: #f8fafc; padding: 25px; border-radius: 12px; border-left: 5px solid #d32f2f;">
            <h3 style="font-size: 1.3rem; color: #0b132b; margin-bottom: 10px;">1. Transit Risk Insurance (Vehicle Collision &amp; Overturn)</h3>
            <p style="color: #64748b; font-size: 0.95rem; line-height: 1.7;">
              Covers damage caused to goods if the carrying vehicle meets with an accident, overturns, or catches fire while traveling on national highways. Premium is typically calculated at 1.5% to 3% of declared value.
            </p>
          </div>

          <div style="background: #f8fafc; padding: 25px; border-radius: 12px; border-left: 5px solid #f59e0b;">
            <h3 style="font-size: 1.3rem; color: #0b132b; margin-bottom: 10px;">2. All-Risk Comprehensive Insurance (Door-to-Door Protection)</h3>
            <p style="color: #64748b; font-size: 0.95rem; line-height: 1.7;">
              Provides complete coverage for accidental breakage during loading, unloading, or transit. Requires mandatory professional packing by Shree Ashirwad Packers crew.
            </p>
          </div>

          <div style="background: #f8fafc; padding: 25px; border-radius: 12px; border-left: 5px solid #d32f2f;">
            <h3 style="font-size: 1.3rem; color: #0b132b; margin-bottom: 10px;">3. Declared Value Inventory Valuation</h3>
            <p style="color: #64748b; font-size: 0.95rem; line-height: 1.7;">
              The customer lists current market replacement values for refrigerators, televisions, sofas, dining tables, and washing machines to fix total policy coverage limits.
            </p>
          </div>

          <div style="background: #f8fafc; padding: 25px; border-radius: 12px; border-left: 5px solid #f59e0b;">
            <h3 style="font-size: 1.3rem; color: #0b132b; margin-bottom: 10px;">4. Claim Settlement Assistance</h3>
            <p style="color: #64748b; font-size: 0.95rem; line-height: 1.7;">
              In the rare event of damage during transit, our team assists you with surveyor inspections, damage photos, LR copies, and claim document filings to ensure speedy compensation.
            </p>
          </div>

        </div>

      </div>
    </div>
  </section>

  <!-- Section 4: Contextual Internal Links -->
  <section style="padding: 50px 0; background: #f8fafc;">
    <div class="container">
      <div style="text-align: center; max-width: 800px; margin: 0 auto 30px auto;">
        <h3 style="font-size: 1.8rem; color: #0b132b; font-weight: 800;">Related <span style="color: #d32f2f;">Shifting Safety Guides</span></h3>
      </div>
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); gap: 15px;">
        <a href="<?php echo SITE_URL; ?>packers-and-movers-in-jamshedpur" style="background: #fff; padding: 14px; border-radius: 6px; border: 1px solid #e2e8f0; color: #0b132b; text-decoration: none; font-weight: 600; text-align: center; display: block;">📍 Movers in Jamshedpur</a>
        <a href="<?php echo SITE_URL; ?>packers-and-movers-bistupur-jamshedpur" style="background: #fff; padding: 14px; border-radius: 6px; border: 1px solid #e2e8f0; color: #0b132b; text-decoration: none; font-weight: 600; text-align: center; display: block;">📍 Movers in Bistupur</a>
        <a href="<?php echo SITE_URL; ?>how-to-choose-best-packers-and-movers-in-jamshedpur" style="background: #fff; padding: 14px; border-radius: 6px; border: 1px solid #e2e8f0; color: #0b132b; text-decoration: none; font-weight: 600; text-align: center; display: block;">⭐ How to Choose Movers</a>
        <a href="<?php echo SITE_URL; ?>iba-approved-packers-and-movers-jamshedpur" style="background: #fff; padding: 14px; border-radius: 6px; border: 1px solid #e2e8f0; color: #0b132b; text-decoration: none; font-weight: 600; text-align: center; display: block;">📜 IBA Approved Movers</a>
        <a href="<?php echo SITE_URL; ?>how-to-avoid-fraud-packers-movers-jamshedpur" style="background: #fff; padding: 14px; border-radius: 6px; border: 1px solid #e2e8f0; color: #0b132b; text-decoration: none; font-weight: 600; text-align: center; display: block;">🛡️ Avoid Shifting Fraud</a>
        <a href="<?php echo SITE_URL; ?>car-transport-guide-jamshedpur" style="background: #fff; padding: 14px; border-radius: 6px; border: 1px solid #e2e8f0; color: #0b132b; text-decoration: none; font-weight: 600; text-align: center; display: block;">🚗 Car Transport Guide</a>
        <a href="<?php echo SITE_URL; ?>packers-and-movers-jamshedpur-cost-guide" style="background: #fff; padding: 14px; border-radius: 6px; border: 1px solid #e2e8f0; color: #0b132b; text-decoration: none; font-weight: 600; text-align: center; display: block;">💡 Shifting Cost Guide</a>
        <a href="<?php echo SITE_URL; ?>packers-and-movers-sakchi-jamshedpur" style="background: #fff; padding: 14px; border-radius: 6px; border: 1px solid #e2e8f0; color: #0b132b; text-decoration: none; font-weight: 600; text-align: center; display: block;">📍 Movers in Sakchi</a>
      </div>
    </div>
  </section>

  <!-- Section 5: FAQs -->
  <section style="padding: 50px 0; background: #ffffff;">
    <div class="container">
      <div style="text-align: center; max-width: 800px; margin: 0 auto 35px auto;">
        <h2 style="font-size: 2rem; color: #0b132b; font-weight: 800;">Transit Insurance FAQs</h2>
      </div>
      <div style="max-width: 850px; margin: 0 auto; display: flex; flex-direction: column; gap: 12px;">
        <div style="background: #f8fafc; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0;"><h4 style="color: #0b132b;">Q1: Is transit insurance mandatory for intercity moving?</h4><p style="color: #64748b; font-size: 0.9rem;">We strongly recommend transit insurance for all long-distance relocations to protect your investment.</p></div>
        <div style="background: #f8fafc; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0;"><h4 style="color: #0b132b;">Q2: Will I receive an authentic policy document?</h4><p style="color: #64748b; font-size: 0.9rem;">Yes, an official insurance policy copy issued by recognized IRDAI insurers is handed over prior to dispatch.</p></div>
        <div style="background: #f8fafc; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0;"><h4 style="color: #0b132b;">Q3: How to reach Shree Ashirwad Packers for insured shifting quotes?</h4><p style="color: #64748b; font-size: 0.9rem;">Call <strong>+91 8409531615</strong> or message us on WhatsApp for immediate support.</p></div>
      </div>
    </div>
  </section>

  <!-- Section 6: CTA Banner -->
  <section class="cta-banner-section" style="padding: 50px 0; background: linear-gradient(135deg, #0b132b 0%, #1c2541 100%); color: #ffffff;">
    <div class="container">
      <div style="text-align: center; max-width: 800px; margin: 0 auto;">
        <h2 style="font-size: 2.1rem; font-weight: 800; margin-bottom: 15px;">Protect Your Goods with Insured Shifting Today</h2>
        <div style="display: flex; gap: 15px; justify-content: center; flex-wrap: wrap;">
          <a href="tel:<?php echo SITE_PHONE_RAW; ?>" style="padding: 14px 32px; background: linear-gradient(135deg, #d32f2f 0%, #f59e0b 100%); color: #fff; border-radius: 50px; font-weight: 700; text-decoration: none;">📞 Call: <?php echo SITE_PHONE; ?></a>
          <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20need%20insured%20shifting%20quote%20in%20Jamshedpur." target="_blank" style="padding: 14px 32px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #fff; border-radius: 50px; font-weight: 700; text-decoration: none;">💬 WhatsApp Quote</a>
        </div>
      </div>
    </div>
  </section>

</main>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
