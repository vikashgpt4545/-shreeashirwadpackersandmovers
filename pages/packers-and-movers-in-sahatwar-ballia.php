<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "Packers and Movers in Sahatwar Ballia | Safe House Shifting";
$page_desc = "Professional packers and movers in Sahatwar, Ballia. High-quality 7-layer household packaging, door-to-door shifting, IBA approved GST invoice, and transit insurance. Call 8409531615.";
$page_keywords = "packers and movers in sahatwar ballia, house shifting sahatwar, movers and packers sahatwar ballia, home relocation sahatwar";
$canonical_url = "https://shreeashirwadpackersandmovers.com/packers-and-movers-in-sahatwar-ballia";

$page_city = "Sahatwar, Ballia, Uttar Pradesh";

$faq_list = [
    ['q' => 'What are the charges for packers and movers in Sahatwar Ballia?', 'a' => 'Household shifting rates in Sahatwar depend on volume and destination. Local 1-2 BHK moves start from ₹4,500 to ₹9,500, while intercity moves range between ₹11,000 and ₹26,000 with 7-layer bubble wrapping.'],
    ['q' => 'Do you provide IBA-approved GST bills for claim reimbursement in Sahatwar?', 'a' => 'Yes, we provide 100% genuine IBA-compliant GST tax invoices, itemized inventory lists, and LR receipts accepted by government and corporate organizations.'],
    ['q' => 'What packaging materials are used for household packing in Sahatwar?', 'a' => 'We use 80-GSM bubble wrap, heavy corrugated box sheets, stretch wrap film, foam corner protectors, and waterproof plastic sheets.'],
    ['q' => 'Do you offer doorstep household pickup and delivery across Sahatwar?', 'a' => 'Yes, our experienced team provides doorstep packing, loading, transport, unloading, and unpacking in all residential areas across Sahatwar.'],
    ['q' => 'How many days in advance should I book my relocation in Sahatwar?', 'a' => 'Booking 2-4 days in advance guarantees preferred pickup slots, dedicated container trucks, and proper pre-move planning.'],
    ['q' => 'Is transit insurance included in your house shifting services?', 'a' => 'Yes, we offer comprehensive 100% transit insurance covering all household goods against accident or transit damage.'],
    ['q' => 'Can you transport my motorcycle or car along with household goods from Sahatwar?', 'a' => 'Yes, we provide combined vehicle and household shifting packages using covered auto carriers and specialized bike crates.'],
    ['q' => 'How are delicate glassware and electronics packed for transport?', 'a' => 'Fragile items are packed with double bubble layers, placed in heavy corrugated boxes with foam peanuts, and labeled with fragile handling stickers.'],
    ['q' => 'Do you provide disassembly and reassembly of wooden furniture?', 'a' => 'Yes, our technicians dismantle beds, wardrobes, and modular tables at origin and reassemble them at your new destination.'],
    ['q' => 'How do I request a free house shifting quotation for Sahatwar Ballia?', 'a' => 'Call +91 8409531615 or submit your relocation details via WhatsApp for an instant free home survey and transparent pricing.']
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
        <span class="breadcrumb-item"><a href="<?php echo SITE_URL; ?>packers-and-movers-in-ballia" title="Ballia">Ballia</a></span>
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
            PACKERS AND MOVERS SAHATWAR BALLIA
          </span>
          <h1 style="font-size: 2.6rem; font-weight: 800; line-height: 1.2; margin-bottom: 20px; color: #ffffff;">
            Trusted <span style="color: #f59e0b;">Packers and Movers in Sahatwar Ballia</span>
          </h1>
          <p style="font-size: 1.05rem; color: #cbd5e1; line-height: 1.7; margin-bottom: 25px;">
            Shree Ashirwad Packers and Movers offers top-quality house shifting, office relocation, and vehicle transportation services in Sahatwar, Ballia. Benefiting from 7-layer bubble packaging, dedicated closed container vehicles, doorstep service, and 100% IBA-compliant GST billing.
          </p>

          <div style="display: flex; gap: 15px; flex-wrap: wrap; margin-bottom: 30px;">
            <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Now" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
              <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call Now: <?php echo SITE_PHONE; ?>
            </a>
            <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20a%20house%20shifting%20quote%20for%20Sahatwar%20Ballia." title="Chat on WhatsApp" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
              <i class="fab fa-whatsapp" style="margin-right: 8px;"></i> Chat on WhatsApp
            </a>
          </div>

          <div style="display: flex; gap: 20px; font-size: 0.9rem; color: #94a3b8;">
            <span><strong style="color: #f59e0b;">980+</strong> Moves Completed</span>
            <span><strong style="color: #f59e0b;">7-Layer</strong> Packing Guarantee</span>
            <span><strong style="color: #f59e0b;">100%</strong> IBA GST Bills</span>
          </div>
        </div>

        <!-- Hero Lead Form Column -->
        <div class="hero-form-card" style="background: rgba(255, 255, 255, 0.05); backdrop-filter: blur(10px); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 16px; padding: 30px; box-shadow: 0 15px 35px rgba(0,0,0,0.4);">
          <h2 style="font-size: 1.4rem; color: #ffffff; margin-bottom: 8px; font-weight: 700; text-align: center;">Get Sahatwar Shifting Quote</h2>
          <p style="font-size: 0.85rem; color: #94a3b8; text-align: center; margin-bottom: 20px;">Receive transparent house shifting rates instantly on WhatsApp</p>

          <form action="#" method="POST" onsubmit="sendHeroWhatsAppLead(event, this);">
            <div style="margin-bottom: 14px;">
              <input type="text" name="name" class="form-control" placeholder="Your Full Name" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="margin-bottom: 14px;">
              <input type="tel" name="phone" class="form-control" placeholder="10-Digit Phone / WhatsApp Number" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 10px; margin-bottom: 14px;">
              <input type="text" name="move_from" class="form-control" placeholder="Pickup Area" value="Sahatwar, Ballia" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
              <input type="text" name="move_to" class="form-control" placeholder="Destination City" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="margin-bottom: 16px;">
              <textarea name="message" class="form-control" rows="2" placeholder="Moving Details (e.g. 2 BHK House + Bike)" style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;"></textarea>
            </div>
            <button type="submit" class="btn btn-primary" style="width: 100%; padding: 14px; background: linear-gradient(135deg, #d32f2f 0%, #f59e0b 100%); color: #ffffff; border: none; border-radius: 50px; font-weight: 700; font-size: 1rem; cursor: pointer;">
              Get Quote on WhatsApp &rarr;
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
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">980+</div>
          <div style="font-size: 0.9rem; color: #cbd5e1; margin-top: 5px;">Relocations Executed</div>
        </div>
        <div style="padding: 20px; background: rgba(23, 42, 84, 0.5); border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">7-Layer</div>
          <div style="font-size: 0.9rem; color: #cbd5e1; margin-top: 5px;">Damage-Proof Packing</div>
        </div>
        <div style="padding: 20px; background: rgba(23, 42, 84, 0.5); border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">100%</div>
          <div style="font-size: 0.9rem; color: #cbd5e1; margin-top: 5px;">Transit Risk Protection</div>
        </div>
        <div style="padding: 20px; background: rgba(23, 42, 84, 0.5); border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">IBA Approved</div>
          <div style="font-size: 0.9rem; color: #cbd5e1; margin-top: 5px;">GST Invoice &amp; Bills</div>
        </div>
      </div>
    </div>
  </section>

  <!-- 4. 6-Card Feature Grid (3x2 Layout) -->
  <section style="padding: 65px 0; background: #0b132b; color: #e2e8f0; line-height: 1.8;">
    <div class="container">
      
      <div style="max-width: 950px; margin: 0 auto;">
        <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Relocation Excellence</span>
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin: 10px 0 20px 0;">
          Why Choose Our Movers in <span style="color: #f59e0b;">Sahatwar Ballia</span>?
        </h2>

        <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px; margin: 30px 0;">
          
          <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px;">
            <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;"><i class="fas fa-box-open"></i></div>
            <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">7-Layer Protection</h3>
            <p style="font-size: 0.9rem; color: #cbd5e1; margin: 0;">
              Bubble wrap, corrugated sheets, foam edge guards, and waterproof stretch film shielding all items.
            </p>
          </div>

          <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px;">
            <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;"><i class="fas fa-truck-moving"></i></div>
            <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">Weatherproof Container Fleet</h3>
            <p style="font-size: 0.9rem; color: #cbd5e1; margin: 0;">
              Dustproof and waterproof closed container trucks safeguarding goods during long-distance transit.
            </p>
          </div>

          <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px;">
            <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;"><i class="fas fa-file-invoice-dollar"></i></div>
            <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">IBA Approved Billing</h3>
            <p style="font-size: 0.9rem; color: #cbd5e1; margin: 0;">
              Genuine GST bills, itemized inventories, and LR documents for hassle-free claim reimbursement.
            </p>
          </div>

          <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px;">
            <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;"><i class="fas fa-shield-alt"></i></div>
            <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">Transit Insurance</h3>
            <p style="font-size: 0.9rem; color: #cbd5e1; margin: 0;">
              Comprehensive insurance cover providing financial safety against transit hazards and accidents.
            </p>
          </div>

          <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px;">
            <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;"><i class="fas fa-map-marked-alt"></i></div>
            <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">GPS Tracking Updates</h3>
            <p style="font-size: 0.9rem; color: #cbd5e1; margin: 0;">
              Live tracking and status updates via WhatsApp from loading in Sahatwar to destination delivery.
            </p>
          </div>

          <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px;">
            <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;"><i class="fas fa-user-shield"></i></div>
            <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">Trained Labor Crew</h3>
            <p style="font-size: 0.9rem; color: #cbd5e1; margin: 0;">
              Background-verified professionals skilled in handling fragile items and heavy wooden furniture.
            </p>
          </div>

        </div>

      </div>

    </div>
  </section>

  <!-- 5. Specialized Services Breakdown -->
  <section style="padding: 60px 0; background: #070d1e; color: #ffffff;">
    <div class="container" style="max-width: 950px;">
      
      <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Service Portfolio</span>
      <h2 style="font-size: 2.1rem; font-weight: 800; color: #ffffff; margin: 10px 0 25px 0;">
        Specialized Shifting Services in <span style="color: #f59e0b;">Sahatwar</span>
      </h2>

      <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px;">
        <div style="background: #101c40; padding: 20px; border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #f59e0b; font-size: 1.05rem; margin-bottom: 8px;">Household Shifting</h4>
          <p style="font-size: 0.88rem; color: #cbd5e1; margin: 0;">Complete packing, loading, transport, and unloading for 1-4 BHK apartments.</p>
        </div>

        <div style="background: #101c40; padding: 20px; border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #f59e0b; font-size: 1.05rem; margin-bottom: 8px;">Car Carrier Service</h4>
          <p style="font-size: 0.88rem; color: #cbd5e1; margin: 0;">Enclosed hydraulic car trailers for safe vehicle transport across India.</p>
        </div>

        <div style="background: #101c40; padding: 20px; border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #f59e0b; font-size: 1.05rem; margin-bottom: 8px;">Bike Shipping</h4>
          <p style="font-size: 0.88rem; color: #cbd5e1; margin: 0;">7-layer bubble wrapping and wheel belt tie-down for two-wheelers.</p>
        </div>

        <div style="background: #101c40; padding: 20px; border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #f59e0b; font-size: 1.05rem; margin-bottom: 8px;">Office Relocation</h4>
          <p style="font-size: 0.88rem; color: #cbd5e1; margin: 0;">Commercial office shifting including IT servers, desks, and document archives.</p>
        </div>

        <div style="background: #101c40; padding: 20px; border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #f59e0b; font-size: 1.05rem; margin-bottom: 8px;">Warehouse Storage</h4>
          <p style="font-size: 0.88rem; color: #cbd5e1; margin: 0;">CCTV-monitored secure temporary storage facilities for household goods.</p>
        </div>

        <div style="background: #101c40; padding: 20px; border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #f59e0b; font-size: 1.05rem; margin-bottom: 8px;">Defense &amp; Bank Claims</h4>
          <p style="font-size: 0.88rem; color: #cbd5e1; margin: 0;">Official IBA-compliant GST tax invoice &amp; LR receipts for employee claims.</p>
        </div>
      </div>

    </div>
  </section>

  <!-- 6. 7-Layer Safety Packaging Framework -->
  <section style="padding: 60px 0; background: #0b132b; color: #ffffff;">
    <div class="container" style="max-width: 950px;">
      
      <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Packaging Protocol</span>
      <h2 style="font-size: 2.1rem; font-weight: 800; color: #ffffff; margin: 10px 0 25px 0;">
        7-Layer Damage-Proof Household Packaging
      </h2>

      <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 15px;">
        <div style="background: #172a54; padding: 18px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <div style="font-size: 0.8rem; color: #f59e0b; font-weight: 700;">LAYER 01</div>
          <h4 style="font-size: 0.95rem; color: #fff; margin: 4px 0;">Primary Polythene Wrap</h4>
          <p style="font-size: 0.82rem; color: #cbd5e1; margin: 0;">Protective film shielding surfaces against moisture and dust.</p>
        </div>

        <div style="background: #172a54; padding: 18px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <div style="font-size: 0.8rem; color: #f59e0b; font-weight: 700;">LAYER 02</div>
          <h4 style="font-size: 0.95rem; color: #fff; margin: 4px 0;">80-GSM Heavy Bubble</h4>
          <p style="font-size: 0.82rem; color: #cbd5e1; margin: 0;">High-density bubble wrap absorbing road vibration and shock.</p>
        </div>

        <div style="background: #172a54; padding: 18px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <div style="font-size: 0.8rem; color: #f59e0b; font-weight: 700;">LAYER 03</div>
          <h4 style="font-size: 0.95rem; color: #fff; margin: 4px 0;">Corrugated Sheet Board</h4>
          <p style="font-size: 0.82rem; color: #cbd5e1; margin: 0;">Heavy cardboard outer casing for furniture and appliances.</p>
        </div>

        <div style="background: #172a54; padding: 18px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <div style="font-size: 0.8rem; color: #f59e0b; font-weight: 700;">LAYER 04</div>
          <h4 style="font-size: 0.95rem; color: #fff; margin: 4px 0;">Foam Corner Protectors</h4>
          <p style="font-size: 0.82rem; color: #cbd5e1; margin: 0;">Specialized edge foam protecting corners of tables and TVs.</p>
        </div>

        <div style="background: #172a54; padding: 18px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <div style="font-size: 0.8rem; color: #f59e0b; font-weight: 700;">LAYER 05</div>
          <h4 style="font-size: 0.95rem; color: #fff; margin: 4px 0;">Waterproof Stretch Film</h4>
          <p style="font-size: 0.82rem; color: #cbd5e1; margin: 0;">Tight plastic shrink film locking all layers together against weather.</p>
        </div>

        <div style="background: #172a54; padding: 18px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <div style="font-size: 0.8rem; color: #f59e0b; font-weight: 700;">LAYER 06</div>
          <h4 style="font-size: 0.95rem; color: #fff; margin: 4px 0;">Heavy Nylon Strapping</h4>
          <p style="font-size: 0.82rem; color: #cbd5e1; margin: 0;">High-tensile straps securing boxes inside container trucks.</p>
        </div>

        <div style="background: #172a54; padding: 18px; border-radius: 10px; border-left: 4px solid #f59e0b; grid-column: span 2;">
          <div style="font-size: 0.8rem; color: #f59e0b; font-weight: 700;">LAYER 07</div>
          <h4 style="font-size: 0.95rem; color: #fff; margin: 4px 0;">Wooden Crate Reinforcement</h4>
          <p style="font-size: 0.82rem; color: #cbd5e1; margin: 0;">Custom wooden crates built for glass tables, TVs, and marble art.</p>
        </div>
      </div>

    </div>
  </section>

  <!-- 7. Origin Pickup Locality Grid -->
  <section style="padding: 60px 0; background: #070d1e; color: #ffffff;">
    <div class="container" style="max-width: 900px;">
      
      <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Ballia Network</span>
      <h2 style="font-size: 2.1rem; font-weight: 800; color: #ffffff; margin: 10px 0 20px 0;">
        Locality Coverage Across <span style="color: #f59e0b;">Ballia District</span>
      </h2>

      <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 16px; margin-bottom: 25px;">
        <div style="background: #101c40; padding: 18px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #ffffff; font-size: 1.05rem; margin-bottom: 6px;">Ballia Master Hub</h4>
          <p style="font-size: 0.88rem; color: #94a3b8; margin-bottom: 8px;">Main district hub serving Ballia City.</p>
          <a href="<?php echo SITE_URL; ?>packers-and-movers-in-ballia" title="Packers Movers Ballia Master Hub →" style="color: #f59e0b; text-decoration: underline; font-weight: 600; font-size: 0.88rem;">
            Packers Movers Ballia Master Hub →
          </a>
        </div>

        <div style="background: #101c40; padding: 18px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #ffffff; font-size: 1.05rem; margin-bottom: 6px;">Bairia Shifting Hub</h4>
          <p style="font-size: 0.88rem; color: #94a3b8; margin-bottom: 8px;">Doorstep household packing &amp; car transport in Bairia.</p>
          <a href="<?php echo SITE_URL; ?>packers-and-movers-in-bairia-ballia" title="Packers Movers Bairia Ballia →" style="color: #f59e0b; text-decoration: underline; font-weight: 600; font-size: 0.88rem;">
            Packers Movers Bairia Ballia →
          </a>
        </div>

        <div style="background: #101c40; padding: 18px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #ffffff; font-size: 1.05rem; margin-bottom: 6px;">Bansdih Relocation Sector</h4>
          <p style="font-size: 0.88rem; color: #94a3b8; margin-bottom: 8px;">Doorstep house shifting &amp; bike shipping in Bansdih.</p>
          <a href="<?php echo SITE_URL; ?>packers-and-movers-in-bansdih-ballia" title="Packers Movers Bansdih Ballia →" style="color: #f59e0b; text-decoration: underline; font-weight: 600; font-size: 0.88rem;">
            Packers Movers Bansdih Ballia →
          </a>
        </div>

        <div style="background: #101c40; padding: 18px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #ffffff; font-size: 1.05rem; margin-bottom: 6px;">Belthara Road Shifting Hub</h4>
          <p style="font-size: 0.88rem; color: #94a3b8; margin-bottom: 8px;">Household shifting &amp; vehicle carrier in Belthara Road.</p>
          <a href="<?php echo SITE_URL; ?>packers-and-movers-in-belthara-road-ballia" title="Packers Movers Belthara Road Ballia →" style="color: #f59e0b; text-decoration: underline; font-weight: 600; font-size: 0.88rem;">
            Packers Movers Belthara Road Ballia →
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
        Popular Shifting Routes from <span style="color: #f59e0b;">Sahatwar</span>
      </h2>

      <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 16px; margin-bottom: 25px;">
        <div style="background: #172a54; padding: 18px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #ffffff; font-size: 1.05rem; margin-bottom: 6px;">Sahatwar to Delhi NCR</h4>
          <p style="font-size: 0.88rem; color: #94a3b8; margin-bottom: 8px;">Express household shifting to Delhi, Gurgaon &amp; Noida.</p>
        </div>

        <div style="background: #172a54; padding: 18px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #ffffff; font-size: 1.05rem; margin-bottom: 6px;">Sahatwar to Patna / Buxar</h4>
          <p style="font-size: 0.88rem; color: #94a3b8; margin-bottom: 8px;">Direct regional house shifting across state borders.</p>
        </div>

        <div style="background: #172a54; padding: 18px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #ffffff; font-size: 1.05rem; margin-bottom: 6px;">Sahatwar to Mumbai / Pune</h4>
          <p style="font-size: 0.88rem; color: #94a3b8; margin-bottom: 8px;">Long-distance insured household moving to Maharashtra.</p>
        </div>

        <div style="background: #172a54; padding: 18px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #ffffff; font-size: 1.05rem; margin-bottom: 6px;">Sahatwar to Lucknow / Varanasi</h4>
          <p style="font-size: 0.88rem; color: #94a3b8; margin-bottom: 8px;">Fast container truck relocations across Eastern UP.</p>
        </div>
      </div>

    </div>
  </section>

  <!-- 9. IBA Approved GST Billing Documentation -->
  <section style="padding: 60px 0; background: #070d1e; color: #ffffff;">
    <div class="container" style="max-width: 900px;">
      
      <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Official Claims Documentation</span>
      <h2 style="font-size: 2.1rem; font-weight: 800; color: #ffffff; margin: 10px 0 20px 0;">
        IBA Approved GST Billing for Claims
      </h2>

      <div style="background: #101c40; border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 12px; padding: 25px;">
        <h4 style="color: #f59e0b; font-size: 1.1rem; margin-bottom: 12px; font-weight: 700;">Government &amp; Defense Claim Paperwork Issued:</h4>
        <ol style="margin: 0; padding-left: 20px; color: #cbd5e1; line-height: 1.8; font-size: 0.95rem;">
          <li><strong>Official Household Moving GST Tax Invoice</strong> with clear GSTIN details.</li>
          <li><strong>Itemized Goods Packing List &amp; Inventory Sheet</strong> signed at pickup.</li>
          <li><strong>Consignment Lorry Receipt (LR Copy)</strong> with carrier vehicle number.</li>
          <li><strong>IBA Approved Stamp &amp; Registration License Code</strong>.</li>
          <li><strong>Comprehensive Transit Insurance Policy Certificate Copy</strong>.</li>
          <li><strong>Stamped Payment Receipt</strong> for corporate or military reimbursement.</li>
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
    "description": "Professional packers and movers in Sahatwar Ballia providing 7-layer household packing, IBA GST billing, and door-to-door relocation.",
    "url": "<?php echo $canonical_url; ?>",
    "telephone": "<?php echo SITE_PHONE_RAW; ?>",
    "address": {
      "@type": "PostalAddress",
      "addressLocality": "Sahatwar, Ballia",
      "addressRegion": "Uttar Pradesh",
      "addressCountry": "IN"
    },
    "areaServed": "Sahatwar, Ballia, Uttar Pradesh",
    "priceRange": "₹4500 - ₹26000"
  }
  </script>

  <section style="padding: 60px 0; background: #0b132b; color: #ffffff;">
    <div class="container" style="max-width: 900px;">
      
      <div class="section-header text-center" style="margin-bottom: 40px;">
        <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Got Questions?</span>
        <h2 style="font-size: 2.1rem; font-weight: 800; color: #ffffff; margin-top: 10px;">
          Frequently Asked Questions About <span style="color: #f59e0b;">Shifting in Sahatwar</span>
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
        Book House Shifting in Sahatwar
      </span>

      <h2 style="font-size: 2.2rem; font-weight: 800; margin: 15px 0 15px 0; color: #ffffff;">
        Planning a Move in <span style="color: #f59e0b;">Sahatwar Ballia</span>?
      </h2>

      <p style="font-size: 1.05rem; color: #cbd5e1; max-width: 750px; margin: 0 auto 30px auto; line-height: 1.7;">
        Contact our Ballia relocation team today for 7-layer bubble wrapped house packing, IBA approved GST invoices, and safe transportation across India.
      </p>

      <div style="display: flex; gap: 15px; justify-content: center; flex-wrap: wrap;">
        <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Now" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 30px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1.05rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
          <i class="fas fa-phone-alt"></i> Call Now: <?php echo SITE_PHONE; ?>
        </a>
        <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad,%20I%20want%20a%20house%20shifting%20quote%20for%20Sahatwar%20Ballia." title="Chat on WhatsApp" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 30px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1.05rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
          <i class="fab fa-whatsapp"></i> Chat on WhatsApp
        </a>
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
  
  var message = "Hello Shree Ashirwad Packers & Movers,\n\nI would like to request a Shifting Quote for Sahatwar Ballia:\n- Name: " + name + "\n- Phone: " + phone + "\n- Pickup Location: " + moveFrom + "\n- Moving To: " + moveTo;
  
  if (extraMsg && extraMsg.trim() !== '') {
    message += "\n- Shifting Details: " + extraMsg;
  }
  
  var whatsappUrl = "https://api.whatsapp.com/send?phone=918409531615&text=" + encodeURIComponent(message);
  window.location.href = whatsappUrl;
}
</script>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
