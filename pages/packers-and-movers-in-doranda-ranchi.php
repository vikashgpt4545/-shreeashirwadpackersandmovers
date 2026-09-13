<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "Packers and Movers in Doranda Ranchi | IBA Approved Shifting";
$page_desc = "Top-rated packers and movers in Doranda, Ranchi. Doorstep house shifting, office relocation, car & bike transportation with 7-layer packaging and transit insurance. Call 8409531615.";
$page_keywords = "packers and movers in doranda ranchi, house shifting doranda ranchi, movers packers doranda cantt, relocation services doranda ranchi";
$canonical_url = "https://shreeashirwadpackersandmovers.com/packers-and-movers-in-ranchi";

$page_city = "Doranda, Ranchi, Jharkhand";

$faq_list = [
    ['q' => 'What is the estimated cost of local household shifting in Doranda, Ranchi?', 'a' => 'Local house shifting charges in Doranda range between ₹3,500 and ₹12,000 depending on home size (1BHK to 3BHK), volume of items, floor elevation, and packaging material used.'],
    ['q' => 'Do you provide IBA approved GST bills for defense & corporate reimbursement in Doranda?', 'a' => 'Yes, we provide 100% compliant IBA-approved GST tax invoices, consignment receipts (LR), and itemized inventory lists for defense (Doranda Cantt), PSU, bank, and corporate transfer claims.'],
    ['q' => 'How early should I book packers and movers in Doranda Ranchi?', 'a' => 'We recommend booking 2 to 4 days prior to your planned move date to ensure smooth crew booking and dedicated truck assignment.'],
    ['q' => 'What packaging materials are used for fragile goods during Doranda house moves?', 'a' => 'We use 7-layer safety packaging including air bubble wrap, heavy corrugated box sheets, corner foam protectors, stretch film, and custom wooden crates for delicate glass and electronics.'],
    ['q' => 'Do your movers assist with dismantling and assembling furniture?', 'a' => 'Yes, our skilled carpenters disassemble beds, wardrobes, and modular furniture at pickup in Doranda and reassemble them at your destination home.'],
    ['q' => 'Is transit insurance provided for goods moving from Doranda Ranchi?', 'a' => 'Yes, we offer comprehensive transit insurance covering unforeseen road hazards, accidental damage, or transit scratches.'],
    ['q' => 'Can you transport my bike or car from Doranda to another city?', 'a' => 'Yes, we operate enclosed hydraulic vehicle carriers and wheel-locked bike containers for safe long-distance vehicle transport.'],
    ['q' => 'Are there any hidden fees or extra charges on move day in Doranda?', 'a' => 'No, we provide transparent written estimates with zero hidden costs. All charges are agreed upon before move execution.'],
    ['q' => 'Do you provide warehouse storage options near Doranda Ranchi?', 'a' => 'Yes, we maintain 24/7 CCTV-monitored, moisture-proof warehouse storage facilities for short-term and long-term storage requirements.'],
    ['q' => 'How can I get an instant shifting quote for Doranda Ranchi?', 'a' => 'Call +91 8409531615 or submit your moving details via our WhatsApp form for a free instant cost estimation.']
];

require_once __DIR__ . '/../includes/header.php';
?>

<main class="site-main">

  <!-- 1. Visual Breadcrumb Navigation Bar -->
  <div class="breadcrumb-wrapper">
    <div class="container">
      <div class="breadcrumb-list">
        <span class="breadcrumb-item"><a href="<?php echo SITE_URL; ?>" title="Home">Home</a></span>
        <span class="breadcrumb-separator">/</span>
        <span class="breadcrumb-item"><a href="<?php echo SITE_URL; ?>pages/packers-and-movers-in-ranchi.php" title="Ranchi">Ranchi</a></span>
        <span class="breadcrumb-separator">/</span>
        <span class="breadcrumb-item active"><?php echo htmlspecialchars($page_title); ?></span>
      </div>
    </div>
  </div>

  <!-- 2. Hero Section & Instant WhatsApp Lead Form -->
  <section class="hero-section" style="background: linear-gradient(135deg, #0b132b 0%, #1c2541 100%); padding: 60px 0; color: #ffffff;">
    <div class="container">
      <div class="hero-grid" style="display: grid; grid-template-columns: 1.2fr 0.8fr; gap: 40px; align-items: center;">
        
        <!-- Hero Text Column -->
        <div class="hero-text">
          <span class="section-tag" style="background: rgba(245, 158, 11, 0.15); color: #f59e0b; border: 1px solid rgba(245, 158, 11, 0.4); padding: 6px 16px; border-radius: 20px; font-size: 0.85rem; font-weight: 700; text-transform: uppercase; display: inline-block; margin-bottom: 15px;">
            PACKERS AND MOVERS DORANDA RANCHI
          </span>
          <h1 style="font-size: 2.6rem; font-weight: 800; line-height: 1.2; margin-bottom: 20px; color: #ffffff;">
            Reliable <span style="color: #f59e0b;">Packers and Movers in Doranda Ranchi</span>
          </h1>
          <p style="font-size: 1.05rem; color: #cbd5e1; line-height: 1.7; margin-bottom: 25px;">
            Shree Ashirwad Packers and Movers offers top-tier house shifting, office relocation, and vehicle carrier services in Doranda, Ranchi. Featuring 7-layer packaging, trained carpenters, 100% transit insurance, and IBA-approved GST documentation.
          </p>

          <div style="display: flex; gap: 15px; flex-wrap: wrap; margin-bottom: 30px;">
            <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Now" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
              <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call Now: <?php echo SITE_PHONE; ?>
            </a>
            <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20a%20shifting%20quote%20for%20Doranda%20Ranchi." title="Chat on WhatsApp" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
              <i class="fab fa-whatsapp" style="margin-right: 8px;"></i> Chat on WhatsApp
            </a>
          </div>

          <div style="display: flex; gap: 20px; font-size: 0.9rem; color: #94a3b8;">
            <span><strong style="color: #f59e0b;">1,350+</strong> Moves in Doranda</span>
            <span><strong style="color: #f59e0b;">7-Layer</strong> Protection</span>
            <span><strong style="color: #f59e0b;">100%</strong> Claim Support</span>
          </div>
        </div>

        <!-- Hero Lead Form Column -->
        <div class="hero-form-card" style="background: rgba(255, 255, 255, 0.05); backdrop-filter: blur(10px); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 16px; padding: 30px; box-shadow: 0 15px 35px rgba(0,0,0,0.4);">
          <h2 style="font-size: 1.4rem; color: #ffffff; margin-bottom: 8px; font-weight: 700; text-align: center;">Get Doranda Shifting Quote</h2>
          <p style="font-size: 0.85rem; color: #94a3b8; text-align: center; margin-bottom: 20px;">Receive instant relocation cost estimation on WhatsApp</p>

          <form action="#" method="POST" onsubmit="sendHeroWhatsAppLead(event, this);">
            <div style="margin-bottom: 14px;">
              <input type="text" name="name" class="form-control" placeholder="Your Full Name" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="margin-bottom: 14px;">
              <input type="tel" name="phone" class="form-control" placeholder="10-Digit Phone / WhatsApp Number" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 10px; margin-bottom: 14px;">
              <input type="text" name="move_from" class="form-control" placeholder="Pickup Area" value="Doranda, Ranchi" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
              <input type="text" name="move_to" class="form-control" placeholder="Destination City" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="margin-bottom: 16px;">
              <textarea name="message" class="form-control" rows="2" placeholder="Shifting Items (e.g. 2BHK House, Car, Bike)" style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;"></textarea>
            </div>
            <button type="submit" class="btn btn-primary" style="width: 100%; padding: 14px; background: linear-gradient(135deg, #d32f2f 0%, #f59e0b 100%); color: #ffffff; border: none; border-radius: 50px; font-weight: 700; font-size: 1rem; cursor: pointer;">
              Get Free Quote on WhatsApp &rarr;
            </button>
          </form>
        </div>

      </div>
    </div>
  </section>

  <!-- 3. Key Stats Counter Bar -->
  <section class="stats-section" style="padding: 45px 0; background: #070d1e; border-bottom: 1px solid rgba(245, 158, 11, 0.2);">
    <div class="container">
      <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 20px; text-align: center;">
        <div style="padding: 20px; background: rgba(23, 42, 84, 0.5); border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">1,350+</div>
          <div style="font-size: 0.9rem; color: #cbd5e1; margin-top: 5px;">Doranda Homes Shifted</div>
        </div>
        <div style="padding: 20px; background: rgba(23, 42, 84, 0.5); border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">7-Layer</div>
          <div style="font-size: 0.9rem; color: #cbd5e1; margin-top: 5px;">Heavy Protection Wrap</div>
        </div>
        <div style="padding: 20px; background: rgba(23, 42, 84, 0.5); border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">100%</div>
          <div style="font-size: 0.9rem; color: #cbd5e1; margin-top: 5px;">Transit Risk Cover</div>
        </div>
        <div style="padding: 20px; background: rgba(23, 42, 84, 0.5); border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">IBA Approved</div>
          <div style="font-size: 0.9rem; color: #cbd5e1; margin-top: 5px;">GST Invoice Bills</div>
        </div>
      </div>
    </div>
  </section>

  <!-- 4. 6-Card Feature Grid (3x2 Layout) -->
  <section style="padding: 65px 0; background: #0b132b; color: #e2e8f0; line-height: 1.8;">
    <div class="container">
      
      <div style="max-width: 950px; margin: 0 auto;">
        <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Why Choose Us</span>
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin: 10px 0 20px 0;">
          Premier Relocation Services in <span style="color: #f59e0b;">Doranda Ranchi</span>
        </h2>

        <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px; margin: 30px 0;">
          
          <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px;">
            <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;"><i class="fas fa-home"></i></div>
            <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">Full Doorstep Shifting</h3>
            <p style="font-size: 0.9rem; color: #cbd5e1; margin: 0;">
              End-to-end packing, loading, transportation, and unboxing at your new residence in Doranda.
            </p>
          </div>

          <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px;">
            <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;"><i class="fas fa-truck"></i></div>
            <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">Weatherproof Container Fleet</h3>
            <p style="font-size: 0.9rem; color: #cbd5e1; margin: 0;">
              Closed-body container trucks protecting goods from dust, rain, and transit wear.
            </p>
          </div>

          <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px;">
            <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;"><i class="fas fa-shield-alt"></i></div>
            <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">100% Transit Insurance</h3>
            <p style="font-size: 0.9rem; color: #cbd5e1; margin: 0;">
              Comprehensive financial coverage safeguarding household goods against accidental risk.
            </p>
          </div>

          <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px;">
            <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;"><i class="fas fa-tools"></i></div>
            <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">Expert Furniture Carpenters</h3>
            <p style="font-size: 0.9rem; color: #cbd5e1; margin: 0;">
              Skilled staff for bed, wardrobe, modular kitchen, and heavy furniture handling.
            </p>
          </div>

          <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px;">
            <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;"><i class="fas fa-map-marked-alt"></i></div>
            <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">Live GPS Tracking</h3>
            <p style="font-size: 0.9rem; color: #cbd5e1; margin: 0;">
              Real-time vehicle status updates sent via WhatsApp during local &amp; long-distance moves.
            </p>
          </div>

          <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px;">
            <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;"><i class="fas fa-file-invoice"></i></div>
            <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">IBA Approved Billing</h3>
            <p style="font-size: 0.9rem; color: #cbd5e1; margin: 0;">
              Official GST invoices &amp; consignment notes for defense (Doranda Cantt) and corporate claims.
            </p>
          </div>

        </div>

      </div>

    </div>
  </section>

  <!-- 5. Specialized Services Breakdown -->
  <section style="padding: 60px 0; background: #070d1e; color: #ffffff;">
    <div class="container" style="max-width: 950px;">
      
      <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Our Offerings</span>
      <h2 style="font-size: 2.1rem; font-weight: 800; color: #ffffff; margin: 10px 0 25px 0;">
        Specialized Shifting Services in <span style="color: #f59e0b;">Doranda Ranchi</span>
      </h2>

      <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px;">
        <div style="background: #101c40; padding: 20px; border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #f59e0b; font-size: 1.05rem; margin-bottom: 8px;">Household Shifting</h4>
          <p style="font-size: 0.88rem; color: #cbd5e1; margin: 0;">Complete 1BHK to 4BHK house packing and moving services in Doranda area.</p>
        </div>

        <div style="background: #101c40; padding: 20px; border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #f59e0b; font-size: 1.05rem; margin-bottom: 8px;">Office Relocation</h4>
          <p style="font-size: 0.88rem; color: #cbd5e1; margin: 0;">Systematic IT hardware, server, desk, and document packing for commercial offices.</p>
        </div>

        <div style="background: #101c40; padding: 20px; border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #f59e0b; font-size: 1.05rem; margin-bottom: 8px;">Car Carrier Service</h4>
          <p style="font-size: 0.88rem; color: #cbd5e1; margin: 0;">Enclosed hydraulic car trailer transport with door-to-door vehicle delivery.</p>
        </div>

        <div style="background: #101c40; padding: 20px; border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #f59e0b; font-size: 1.05rem; margin-bottom: 8px;">Bike Courier</h4>
          <p style="font-size: 0.88rem; color: #cbd5e1; margin: 0;">4-layer scratch-proof bubble wrapping &amp; wheel-locked motorcycle parcel.</p>
        </div>

        <div style="background: #101c40; padding: 20px; border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #f59e0b; font-size: 1.05rem; margin-bottom: 8px;">Wooden Crate Packing</h4>
          <p style="font-size: 0.88rem; color: #cbd5e1; margin: 0;">Custom wooden crates for 65+ inch Smart TVs, chandeliers, &amp; delicate glass items.</p>
        </div>

        <div style="background: #101c40; padding: 20px; border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #f59e0b; font-size: 1.05rem; margin-bottom: 8px;">Warehouse Storage</h4>
          <p style="font-size: 0.88rem; color: #cbd5e1; margin: 0;">24/7 monitored secure short-term and long-term luggage storage in Ranchi.</p>
        </div>
      </div>

    </div>
  </section>

  <!-- 6. 7-Layer Safety Packaging Framework -->
  <section style="padding: 60px 0; background: #0b132b; color: #ffffff;">
    <div class="container" style="max-width: 950px;">
      
      <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Safety Protocol</span>
      <h2 style="font-size: 2.1rem; font-weight: 800; color: #ffffff; margin: 10px 0 25px 0;">
        7-Layer Damage-Free Packaging Framework
      </h2>

      <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 15px;">
        <div style="background: #172a54; padding: 18px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <div style="font-size: 0.8rem; color: #f59e0b; font-weight: 700;">LAYER 01</div>
          <h4 style="font-size: 0.95rem; color: #fff; margin: 4px 0;">Stretch Film Sealing</h4>
          <p style="font-size: 0.82rem; color: #cbd5e1; margin: 0;">Waterproof plastic wrapping preventing dust and moisture exposure.</p>
        </div>

        <div style="background: #172a54; padding: 18px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <div style="font-size: 0.8rem; color: #f59e0b; font-weight: 700;">LAYER 02</div>
          <h4 style="font-size: 0.95rem; color: #fff; margin: 4px 0;">80-GSM Bubble Wrap</h4>
          <p style="font-size: 0.82rem; color: #cbd5e1; margin: 0;">High-density shock absorption for furniture, mirrors, and appliances.</p>
        </div>

        <div style="background: #172a54; padding: 18px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <div style="font-size: 0.8rem; color: #f59e0b; font-weight: 700;">LAYER 03</div>
          <h4 style="font-size: 0.95rem; color: #fff; margin: 4px 0;">Corrugated Board</h4>
          <p style="font-size: 0.82rem; color: #cbd5e1; margin: 0;">Rigid outer cardboard casing for refrigerators, beds, and tables.</p>
        </div>

        <div style="background: #172a54; padding: 18px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <div style="font-size: 0.8rem; color: #f59e0b; font-weight: 700;">LAYER 04</div>
          <h4 style="font-size: 0.95rem; color: #fff; margin: 4px 0;">Foam Corner Guards</h4>
          <p style="font-size: 0.82rem; color: #cbd5e1; margin: 0;">Dedicated edge padding protecting sharp wooden and glass corners.</p>
        </div>

        <div style="background: #172a54; padding: 18px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <div style="font-size: 0.8rem; color: #f59e0b; font-weight: 700;">LAYER 05</div>
          <h4 style="font-size: 0.95rem; color: #fff; margin: 4px 0;">Custom Wooden Crating</h4>
          <p style="font-size: 0.82rem; color: #cbd5e1; margin: 0;">Solid wood framing constructed on-site for heavy glass &amp; artwork.</p>
        </div>

        <div style="background: #172a54; padding: 18px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <div style="font-size: 0.8rem; color: #f59e0b; font-weight: 700;">LAYER 06</div>
          <h4 style="font-size: 0.95rem; color: #fff; margin: 4px 0;">Branded Sealing Tapes</h4>
          <p style="font-size: 0.82rem; color: #cbd5e1; margin: 0;">Tamper-evident sealing and room-wise color coding tags.</p>
        </div>

        <div style="background: #172a54; padding: 18px; border-radius: 10px; border-left: 4px solid #f59e0b; grid-column: span 2;">
          <div style="font-size: 0.8rem; color: #f59e0b; font-weight: 700;">LAYER 07</div>
          <h4 style="font-size: 0.95rem; color: #fff; margin: 4px 0;">Nylon Belt Anchoring inside Trucks</h4>
          <p style="font-size: 0.82rem; color: #cbd5e1; margin: 0;">Securing packed boxes and furniture to container truck walls.</p>
        </div>
      </div>

    </div>
  </section>

  <!-- 7. Origin Pickup Locality Grid -->
  <section style="padding: 60px 0; background: #070d1e; color: #ffffff;">
    <div class="container" style="max-width: 900px;">
      
      <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Ranchi Network</span>
      <h2 style="font-size: 2.1rem; font-weight: 800; color: #ffffff; margin: 10px 0 20px 0;">
        Locality Network Across <span style="color: #f59e0b;">Ranchi District</span>
      </h2>

      <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 16px; margin-bottom: 25px;">
        <div style="background: #101c40; padding: 18px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #ffffff; font-size: 1.05rem; margin-bottom: 6px;">Ranchi Master Hub</h4>
          <p style="font-size: 0.88rem; color: #94a3b8; margin-bottom: 8px;">Main capital hub serving all Ranchi sub-localities.</p>
          <a href="<?php echo SITE_URL; ?>pages/packers-and-movers-in-ranchi.php" title="Packers Movers Ranchi Master Hub →" style="color: #f59e0b; text-decoration: underline; font-weight: 600; font-size: 0.88rem;">
            Packers Movers Ranchi Master Hub →
          </a>
        </div>

        <div style="background: #101c40; padding: 18px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #ffffff; font-size: 1.05rem; margin-bottom: 6px;">Kanke Road Shifting</h4>
          <p style="font-size: 0.88rem; color: #94a3b8; margin-bottom: 8px;">Doorstep house packing &amp; local moving in Kanke.</p>
          <a href="<?php echo SITE_URL; ?>pages/packers-and-movers-in-kanke-ranchi.php" title="Packers Movers Kanke Ranchi →" style="color: #f59e0b; text-decoration: underline; font-weight: 600; font-size: 0.88rem;">
            Packers Movers Kanke Ranchi →
          </a>
        </div>

        <div style="background: #101c40; padding: 18px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #ffffff; font-size: 1.05rem; margin-bottom: 6px;">Lalpur House Shifting</h4>
          <p style="font-size: 0.88rem; color: #94a3b8; margin-bottom: 8px;">Reliable packing &amp; moving in Lalpur sector.</p>
          <a href="<?php echo SITE_URL; ?>pages/packers-and-movers-in-lalpur-ranchi.php" title="Packers Movers Lalpur Ranchi →" style="color: #f59e0b; text-decoration: underline; font-weight: 600; font-size: 0.88rem;">
            Packers Movers Lalpur Ranchi →
          </a>
        </div>

        <div style="background: #101c40; padding: 18px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #ffffff; font-size: 1.05rem; margin-bottom: 6px;">Harmu Road Shifting</h4>
          <p style="font-size: 0.88rem; color: #94a3b8; margin-bottom: 8px;">Local home &amp; office moving near Harmu Chowk.</p>
          <a href="<?php echo SITE_URL; ?>pages/packers-and-movers-in-harmu-ranchi.php" title="Packers Movers Harmu Ranchi →" style="color: #f59e0b; text-decoration: underline; font-weight: 600; font-size: 0.88rem;">
            Packers Movers Harmu Ranchi →
          </a>
        </div>
      </div>

    </div>
  </section>

  <!-- 8. Intercity Route Network Grid -->
  <section style="padding: 60px 0; background: #0b132b; color: #ffffff;">
    <div class="container" style="max-width: 900px;">
      
      <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Major Highway Corridors</span>
      <h2 style="font-size: 2.1rem; font-weight: 800; color: #ffffff; margin: 10px 0 20px 0;">
        Popular Relocation Routes from <span style="color: #f59e0b;">Doranda Ranchi</span>
      </h2>

      <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 16px; margin-bottom: 25px;">
        <div style="background: #172a54; padding: 18px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #ffffff; font-size: 1.05rem; margin-bottom: 6px;">Ranchi to Kolkata Route</h4>
          <p style="font-size: 0.88rem; color: #94a3b8; margin-bottom: 8px;">Daily express container truck trips via NH-19.</p>
        </div>

        <div style="background: #172a54; padding: 18px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #ffffff; font-size: 1.05rem; margin-bottom: 6px;">Ranchi to Patna Route</h4>
          <p style="font-size: 0.88rem; color: #94a3b8; margin-bottom: 8px;">Interstate household shifting to Bihar.</p>
        </div>

        <div style="background: #172a54; padding: 18px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #ffffff; font-size: 1.05rem; margin-bottom: 6px;">Ranchi to Jamshedpur Route</h4>
          <p style="font-size: 0.88rem; color: #94a3b8; margin-bottom: 8px;">Same-day intercity moving via NH-33 corridor.</p>
        </div>

        <div style="background: #172a54; padding: 18px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #ffffff; font-size: 1.05rem; margin-bottom: 6px;">Ranchi to Delhi NCR Route</h4>
          <p style="font-size: 0.88rem; color: #94a3b8; margin-bottom: 8px;">Long-distance insured household &amp; vehicle transit.</p>
        </div>
      </div>

    </div>
  </section>

  <!-- 9. IBA Approved GST Billing Documentation -->
  <section style="padding: 60px 0; background: #070d1e; color: #ffffff;">
    <div class="container" style="max-width: 900px;">
      
      <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Official Claims Documentation</span>
      <h2 style="font-size: 2.1rem; font-weight: 800; color: #ffffff; margin: 10px 0 20px 0;">
        IBA Approved GST Shifting Billing in Doranda
      </h2>

      <div style="background: #101c40; border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 12px; padding: 25px;">
        <h4 style="color: #f59e0b; font-size: 1.1rem; margin-bottom: 12px; font-weight: 700;">Government &amp; Defense Claim Paperwork Issued:</h4>
        <ol style="margin: 0; padding-left: 20px; color: #cbd5e1; line-height: 1.8; font-size: 0.95rem;">
          <li><strong>Official GST Shifting Invoice</strong> with complete tax breakdown.</li>
          <li><strong>Itemized Goods Inventory Packing List</strong> with room-wise tag numbers.</li>
          <li><strong>Consignment Lorry Receipt (LR Copy)</strong> with carrier details.</li>
          <li><strong>IBA Approved Stamp &amp; Registration License Code</strong>.</li>
          <li><strong>Comprehensive Transit Insurance Policy Copy</strong>.</li>
          <li><strong>Stamped Payment Receipt</strong> for corporate HR reimbursement.</li>
        </ol>
      </div>

    </div>
  </section>

  <!-- 10. 10 to 15 Detailed FAQs + Valid JSON-LD FAQPage Schema -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "mainEntity": [
      <?php 
      $schema_items = [];
      foreach ($faq_list as $faq) {
          $schema_items[] = '{
            "@type": "Question",
            "name": ' . json_encode($faq['q']) . ',
            "acceptedAnswer": {
              "@type": "Answer",
              "text": ' . json_encode($faq['a']) . '
            }
          }';
      }
      echo implode(',', $schema_items);
      ?>
    ]
  }
  </script>

  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "MovingCompany",
    "name": "Shree Ashirwad Packers and Movers",
    "description": "Professional packers and movers in Doranda Ranchi providing 7-layer household packaging, vehicle carriers, and IBA approved bills.",
    "url": "<?php echo $canonical_url; ?>",
    "telephone": "<?php echo SITE_PHONE_RAW; ?>",
    "address": {
      "@type": "PostalAddress",
      "addressLocality": "Doranda, Ranchi",
      "addressRegion": "Jharkhand",
      "addressCountry": "IN"
    },
    "areaServed": "Doranda, Ranchi, Jharkhand",
    "priceRange": "₹3500 - ₹15000"
  }
  </script>

  <section style="padding: 60px 0; background: #0b132b; color: #ffffff;">
    <div class="container" style="max-width: 900px;">
      
      <div class="section-header text-center" style="margin-bottom: 40px;">
        <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Got Questions?</span>
        <h2 style="font-size: 2.1rem; font-weight: 800; color: #ffffff; margin-top: 10px;">
          Frequently Asked Questions About <span style="color: #f59e0b;">Moving in Doranda Ranchi</span>
        </h2>
      </div>

      <div style="display: flex; flex-direction: column; gap: 14px;">
        <?php foreach ($faq_list as $idx => $faq): ?>
          <div style="background: #101c40; padding: 20px 24px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
            <h3 style="font-size: 1.05rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Q<?php echo ($idx + 1); ?>: <?php echo htmlspecialchars($faq['q']); ?></h3>
            <p style="font-size: 0.92rem; color: #cbd5e1; margin: 0; line-height: 1.7;">
              <?php echo htmlspecialchars($faq['a']); ?>
            </p>
          </div>
        <?php endforeach; ?>
      </div>

    </div>
  </section>

  <!-- 11. Call-To-Action (CTA) Conversion Footer -->
  <section style="padding: 60px 0; background: linear-gradient(135deg, #172a54 0%, #0b132b 100%); border-top: 1.5px solid rgba(245, 158, 11, 0.4); color: #ffffff;">
    <div class="container" style="max-width: 900px; text-align: center;">
      
      <span class="section-tag" style="background: rgba(245, 158, 11, 0.2); color: #f59e0b; padding: 6px 16px; border-radius: 20px; font-size: 0.85rem; font-weight: 700; text-transform: uppercase;">
        Book Doranda Shifting Services
      </span>

      <h2 style="font-size: 2.2rem; font-weight: 800; margin: 15px 0 15px 0; color: #ffffff;">
        Need Reliable <span style="color: #f59e0b;">Packers and Movers in Doranda Ranchi</span>?
      </h2>

      <p style="font-size: 1.05rem; color: #cbd5e1; max-width: 750px; margin: 0 auto 30px auto; line-height: 1.7;">
        Contact our Ranchi relocation team today for 7-layer heavy packaging, door-to-door shifting, and instant pricing quotes.
      </p>

      <div style="display: flex; gap: 15px; justify-content: center; flex-wrap: wrap;">
        <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Now" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 30px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1.05rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
          <i class="fas fa-phone-alt"></i> Call Now: <?php echo SITE_PHONE; ?>
        </a>
        <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad,%20I%20want%20a%20shifting%20quote%20for%20Doranda%20Ranchi." title="Chat on WhatsApp" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 30px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1.05rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
          <i class="fab fa-whatsapp"></i> Chat on WhatsApp
        </a>
      </div>

    </div>
  </section>



<!-- Google Business Profile Verified Customer Trust Section -->
<section style="padding: 35px 0; background: #070d19;">
  <div class="container" style="max-width: 1150px; margin: 0 auto; padding: 0 15px;">
    <div class="gmb-trust-card" style="background: rgba(15, 23, 42, 0.85); border: 1.5px solid rgba(245, 158, 11, 0.35); border-radius: 14px; padding: 28px 24px; margin: 0; color: #cbd5e1;">
      <div style="display: flex; flex-wrap: wrap; justify-content: space-between; align-items: center; border-bottom: 1px solid rgba(255,255,255,0.08); padding-bottom: 16px; margin-bottom: 22px; gap: 12px;">
        <div style="display: flex; align-items: center; gap: 12px;">
          <span style="background: #1e293b; color: #f59e0b; padding: 6px 14px; border-radius: 20px; font-size: 0.85rem; font-weight: 700; display: inline-flex; align-items: center; gap: 6px;">
            <i class="fab fa-google" style="color: #ea4335;"></i> Google Verified Reviews
          </span>
          <span style="font-size: 1.25rem; font-weight: 800; color: #ffffff;">4.9 <span style="color: #f59e0b;">&#9733;&#9733;&#9733;&#9733;&#9733;</span></span>
          <span style="color: #94a3b8; font-size: 0.85rem; font-weight: 500;">(500+ Customer Ratings)</span>
        </div>
        <a href="https://share.google/4FEjDv1dVCJV3O4ch" target="_blank" rel="noopener nofollow" style="color: #f59e0b; text-decoration: none; font-size: 0.88rem; font-weight: 600; display: inline-flex; align-items: center; gap: 5px;">
          View All Reviews on Google Maps &rarr;
        </a>
      </div>
      
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 18px;">
    <div style="background: rgba(0,0,0,0.3); border-radius: 12px; padding: 20px 18px; border-left: 4px solid #f59e0b; border-top: 1px solid rgba(255,255,255,0.06); border-right: 1px solid rgba(255,255,255,0.06); border-bottom: 1px solid rgba(255,255,255,0.06); box-shadow: 0 8px 20px rgba(0,0,0,0.25); display: flex; flex-direction: column; justify-content: space-between;">
      <div>
        <div style="display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 10px; gap: 10px;">
          <div style="display: flex; align-items: center; gap: 10px;">
            <div style="width: 36px; height: 36px; border-radius: 50%; background: #f59e0b22; color: #f59e0b; font-weight: 800; font-size: 0.85rem; display: flex; align-items: center; justify-content: center;">RS</div>
            <div>
              <strong style="color: #ffffff; font-size: 0.95rem; display: block; line-height: 1.2;">Rajesh Sharma</strong>
              <span style="color: #94a3b8; font-size: 0.76rem;">2 months ago</span>
            </div>
          </div>
          <span style="color: #f59e0b; font-size: 0.82rem; font-weight: 700; background: rgba(245, 158, 11, 0.12); padding: 3px 8px; border-radius: 12px; white-space: nowrap;">&#9733;&#9733;&#9733;&#9733;&#9733; Verified</span>
        </div>
        <div style="color: #60a5fa; font-size: 0.8rem; font-weight: 600; margin-bottom: 10px;"><i class="fas fa-check-circle" style="margin-right: 5px;"></i>Car &amp; Bike Relocation (Creta &amp; Enfield)</div>
        <p style="font-size: 0.88rem; line-height: 1.65; margin: 0; color: #cbd5e1; font-style: italic;">
          "Transported my Hyundai Creta and Royal Enfield from Ranchi to Pune in an enclosed container carrier with live GPS tracking. Both vehicles arrived in showroom condition without a single scratch. Provided genuine IBA-approved bill for corporate relocation reimbursement."
        </p>
      </div>
    </div>
    <div style="background: rgba(0,0,0,0.3); border-radius: 12px; padding: 20px 18px; border-left: 4px solid #10b981; border-top: 1px solid rgba(255,255,255,0.06); border-right: 1px solid rgba(255,255,255,0.06); border-bottom: 1px solid rgba(255,255,255,0.06); box-shadow: 0 8px 20px rgba(0,0,0,0.25); display: flex; flex-direction: column; justify-content: space-between;">
      <div>
        <div style="display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 10px; gap: 10px;">
          <div style="display: flex; align-items: center; gap: 10px;">
            <div style="width: 36px; height: 36px; border-radius: 50%; background: #10b98122; color: #10b981; font-weight: 800; font-size: 0.85rem; display: flex; align-items: center; justify-content: center;">AK</div>
            <div>
              <strong style="color: #ffffff; font-size: 0.95rem; display: block; line-height: 1.2;">Amit Kumar</strong>
              <span style="color: #94a3b8; font-size: 0.76rem;">1 month ago</span>
            </div>
          </div>
          <span style="color: #f59e0b; font-size: 0.82rem; font-weight: 700; background: rgba(245, 158, 11, 0.12); padding: 3px 8px; border-radius: 12px; white-space: nowrap;">&#9733;&#9733;&#9733;&#9733;&#9733; Verified</span>
        </div>
        <div style="color: #60a5fa; font-size: 0.8rem; font-weight: 600; margin-bottom: 10px;"><i class="fas fa-check-circle" style="margin-right: 5px;"></i>Household Shifting (3BHK)</div>
        <p style="font-size: 0.88rem; line-height: 1.65; margin: 0; color: #cbd5e1; font-style: italic;">
          "Shifted complete 3BHK household goods from Ranchi to Bangalore with Shree Ashirwad. Exceptional packing quality using double-layer bubble wrap and sturdy cartons for fragile crockery. Zero damage, on-time delivery, and polite loading staff. Highly recommended!"
        </p>
      </div>
    </div>
    <div style="background: rgba(0,0,0,0.3); border-radius: 12px; padding: 20px 18px; border-left: 4px solid #3b82f6; border-top: 1px solid rgba(255,255,255,0.06); border-right: 1px solid rgba(255,255,255,0.06); border-bottom: 1px solid rgba(255,255,255,0.06); box-shadow: 0 8px 20px rgba(0,0,0,0.25); display: flex; flex-direction: column; justify-content: space-between;">
      <div>
        <div style="display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 10px; gap: 10px;">
          <div style="display: flex; align-items: center; gap: 10px;">
            <div style="width: 36px; height: 36px; border-radius: 50%; background: #3b82f622; color: #3b82f6; font-weight: 800; font-size: 0.85rem; display: flex; align-items: center; justify-content: center;">VK</div>
            <div>
              <strong style="color: #ffffff; font-size: 0.95rem; display: block; line-height: 1.2;">Vikram Kumar Singh</strong>
              <span style="color: #94a3b8; font-size: 0.76rem;">3 weeks ago</span>
            </div>
          </div>
          <span style="color: #f59e0b; font-size: 0.82rem; font-weight: 700; background: rgba(245, 158, 11, 0.12); padding: 3px 8px; border-radius: 12px; white-space: nowrap;">&#9733;&#9733;&#9733;&#9733;&#9733; Verified</span>
        </div>
        <div style="color: #60a5fa; font-size: 0.8rem; font-weight: 600; margin-bottom: 10px;"><i class="fas fa-check-circle" style="margin-right: 5px;"></i>SUV &amp; Household Intercity Transit</div>
        <p style="font-size: 0.88rem; line-height: 1.65; margin: 0; color: #cbd5e1; font-style: italic;">
          "Transported my Creta SUV and Royal Enfield motorcycle from Ranchi to Bangalore along with household items. Received live GPS location updates throughout transit. Zero damage! Best choice among professional packers and movers."
        </p>
      </div>
    </div>
    <div style="background: rgba(0,0,0,0.3); border-radius: 12px; padding: 20px 18px; border-left: 4px solid #a855f7; border-top: 1px solid rgba(255,255,255,0.06); border-right: 1px solid rgba(255,255,255,0.06); border-bottom: 1px solid rgba(255,255,255,0.06); box-shadow: 0 8px 20px rgba(0,0,0,0.25); display: flex; flex-direction: column; justify-content: space-between;">
      <div>
        <div style="display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 10px; gap: 10px;">
          <div style="display: flex; align-items: center; gap: 10px;">
            <div style="width: 36px; height: 36px; border-radius: 50%; background: #a855f722; color: #a855f7; font-weight: 800; font-size: 0.85rem; display: flex; align-items: center; justify-content: center;">PV</div>
            <div>
              <strong style="color: #ffffff; font-size: 0.95rem; display: block; line-height: 1.2;">Pooja Verma</strong>
              <span style="color: #94a3b8; font-size: 0.76rem;">1 month ago</span>
            </div>
          </div>
          <span style="color: #f59e0b; font-size: 0.82rem; font-weight: 700; background: rgba(245, 158, 11, 0.12); padding: 3px 8px; border-radius: 12px; white-space: nowrap;">&#9733;&#9733;&#9733;&#9733;&#9733; Verified</span>
        </div>
        <div style="color: #60a5fa; font-size: 0.8rem; font-weight: 600; margin-bottom: 10px;"><i class="fas fa-check-circle" style="margin-right: 5px;"></i>Interstate Relocation to Kolkata</div>
        <p style="font-size: 0.88rem; line-height: 1.65; margin: 0; color: #cbd5e1; font-style: italic;">
          "Very honest pricing with no hidden charges. They provided a proper IBA-approved GST bill and clear transit insurance documentation for my company reimbursement. Outstanding service from reliable movers."
        </p>
      </div>
    </div>
    <div style="background: rgba(0,0,0,0.3); border-radius: 12px; padding: 20px 18px; border-left: 4px solid #06b6d4; border-top: 1px solid rgba(255,255,255,0.06); border-right: 1px solid rgba(255,255,255,0.06); border-bottom: 1px solid rgba(255,255,255,0.06); box-shadow: 0 8px 20px rgba(0,0,0,0.25); display: flex; flex-direction: column; justify-content: space-between;">
      <div>
        <div style="display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 10px; gap: 10px;">
          <div style="display: flex; align-items: center; gap: 10px;">
            <div style="width: 36px; height: 36px; border-radius: 50%; background: #06b6d422; color: #06b6d4; font-weight: 800; font-size: 0.85rem; display: flex; align-items: center; justify-content: center;">AR</div>
            <div>
              <strong style="color: #ffffff; font-size: 0.95rem; display: block; line-height: 1.2;">Ananya Roy</strong>
              <span style="color: #94a3b8; font-size: 0.76rem;">2 months ago</span>
            </div>
          </div>
          <span style="color: #f59e0b; font-size: 0.82rem; font-weight: 700; background: rgba(245, 158, 11, 0.12); padding: 3px 8px; border-radius: 12px; white-space: nowrap;">&#9733;&#9733;&#9733;&#9733;&#9733; Verified</span>
        </div>
        <div style="color: #60a5fa; font-size: 0.8rem; font-weight: 600; margin-bottom: 10px;"><i class="fas fa-check-circle" style="margin-right: 5px;"></i>IT Office &amp; Workstation Relocation</div>
        <p style="font-size: 0.88rem; line-height: 1.65; margin: 0; color: #cbd5e1; font-style: italic;">
          "Shree Ashirwad shifted our software company setup over a single Sunday. All IT servers, monitors, and ergonomic chairs were transported safely with anti-static packaging and zero operational downtime. Truly top-tier logistics team."
        </p>
      </div>
    </div>
    <div style="background: rgba(0,0,0,0.3); border-radius: 12px; padding: 20px 18px; border-left: 4px solid #ec4899; border-top: 1px solid rgba(255,255,255,0.06); border-right: 1px solid rgba(255,255,255,0.06); border-bottom: 1px solid rgba(255,255,255,0.06); box-shadow: 0 8px 20px rgba(0,0,0,0.25); display: flex; flex-direction: column; justify-content: space-between;">
      <div>
        <div style="display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 10px; gap: 10px;">
          <div style="display: flex; align-items: center; gap: 10px;">
            <div style="width: 36px; height: 36px; border-radius: 50%; background: #ec489922; color: #ec4899; font-weight: 800; font-size: 0.85rem; display: flex; align-items: center; justify-content: center;">PS</div>
            <div>
              <strong style="color: #ffffff; font-size: 0.95rem; display: block; line-height: 1.2;">Priya Singh</strong>
              <span style="color: #94a3b8; font-size: 0.76rem;">3 weeks ago</span>
            </div>
          </div>
          <span style="color: #f59e0b; font-size: 0.82rem; font-weight: 700; background: rgba(245, 158, 11, 0.12); padding: 3px 8px; border-radius: 12px; white-space: nowrap;">&#9733;&#9733;&#9733;&#9733;&#9733; Verified</span>
        </div>
        <div style="color: #60a5fa; font-size: 0.8rem; font-weight: 600; margin-bottom: 10px;"><i class="fas fa-check-circle" style="margin-right: 5px;"></i>Local House Relocation</div>
        <p style="font-size: 0.88rem; line-height: 1.65; margin: 0; color: #cbd5e1; font-style: italic;">
          "Very smooth shifting experience within Ranchi. The packing crew arrived exactly on time, dismantled the furniture carefully, and assembled everything at our new flat. Transparent pricing with no hidden moving day surcharges."
        </p>
      </div>
    </div>

      </div>
    </div>
  </div>
</section>

</main>

<script>
function sendHeroWhatsAppLead(event, form) {
  event.preventDefault();
  var name = form.querySelector('[name="name"]').value;
  var phone = form.querySelector('[name="phone"]').value;
  var moveFrom = form.querySelector('[name="move_from"]').value;
  var moveTo = form.querySelector('[name="move_to"]').value;
  var extraMsg = form.querySelector('[name="message"]').value;
  
  var message = "Hello Shree Ashirwad Packers & Movers,\n\nI would like to request a Shifting Quote for Doranda Ranchi:\n- Name: " + name + "\n- Phone: " + phone + "\n- Pickup Location: " + moveFrom + "\n- Moving To: " + moveTo;
  
  if (extraMsg && extraMsg.trim() !== '') {
    message += "\n- Shifting Requirements: " + extraMsg;
  }
  
  var whatsappUrl = "https://api.whatsapp.com/send?phone=918409531615&text=" + encodeURIComponent(message);
  window.location.href = whatsappUrl;
}
</script>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
