<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "Packers and Movers in Dudhani Dumka | Safe Home Shifting";
$page_desc = "Top packers and movers in Dudhani Dumka. Expert household shifting, bike transport, and office relocation in Dudhani with 100% IBA GST bills.";
$page_keywords = "packers and movers in dudhani dumka, best movers dudhani dumka, house shifting dudhani, local packers dudhani dumka, home relocation dudhani, bike movers dudhani, IBA approved packers dudhani, GST bill movers dudhani, cheap packers movers dudhani, transport service dudhani, luggage shifting dudhani, moving company dudhani dumka, affordable movers dudhani, ashrivad packers dudhani, shifting agency dudhani";

$page_city = "Dumka";
$page_locality = "Dudhani";

$faq_list = [
    [
        'q' => 'Why are Shree Ashirwad Packers and Movers the top choice in Dudhani, Dumka?',
        'a' => 'We offer dedicated local crews in Dudhani, 7-layer protective packaging, covered container trucks, fixed written quotes, 100% IBA-approved GST bills, and 24/7 customer support.'
    ],
    [
        'q' => 'What is the cost of 1BHK or 2BHK home shifting within Dudhani, Dumka?',
        'a' => 'Local household shifting within Dudhani ranges from ₹3,000 to ₹5,500 for a 1BHK flat, and ₹5,000 to ₹8,500 for a 2BHK apartment, including labor, packing materials, and transport.'
    ],
    [
        'q' => 'How long does a local house move take in Dudhani, Dumka?',
        'a' => 'Local moves within Dudhani or to nearby localities like Rasikpur or Court Road typically take between 4 to 8 hours from packing start to final unpacking.'
    ],
    [
        'q' => 'Do you provide motorcycle and scooter transport from Dudhani?',
        'a' => 'Yes, we provide specialized multi-layer bubble wrapping and upright container transport for bikes and scooters from Dudhani to any destination in India.'
    ],
    [
        'q' => 'Are your moving bills valid for government and bank transfer claims in Dudhani?',
        'a' => 'Yes, we issue official 18% GST invoices, stamped Consignment Lorry Receipts (LR), money receipts, and itemized inventory sheets accepted by all government departments and banks.'
    ],
    [
        'q' => 'How do you protect fragile items like Smart TVs and glassware in Dudhani?',
        'a' => 'Fragile items are wrapped in heavy air-bubble rolls, shielded with corrugated cardboard sheets, reinforced with foam edge guards, and placed inside wooden crates built on-site.'
    ],
    [
        'q' => 'Can your crew dismantle double beds and wardrobes in Dudhani homes?',
        'a' => 'Yes, our experienced carpenters dismantle modular double beds, wardrobes, and dining tables at origin and reassemble them at your new destination home.'
    ],
    [
        'q' => 'How far in advance should I book my relocation service in Dudhani?',
        'a' => 'We recommend booking 2 to 4 days in advance to reserve your preferred shifting date, container truck, and dedicated packing crew.'
    ],
    [
        'q' => 'Do you provide warehouse storage facilities for Dudhani residents?',
        'a' => 'Yes, we offer secure, 24/7 CCTV-monitored, pest-controlled warehouse storage units near Dudhani for short-term and long-term household goods storage.'
    ],
    [
        'q' => 'What type of vehicles do you use for house shifting in Dudhani?',
        'a' => 'We deploy fully enclosed, waterproof container trucks ranging from 14ft to 22ft, equipped with internal belt anchorages and live satellite GPS tracking.'
    ],
    [
        'q' => 'Are there any hidden costs after signing a quotation in Dudhani?',
        'a' => 'No. We provide fixed, binding written quotations detailing all packing, labor, vehicle freight, toll taxes, and GST fees without hidden extras.'
    ],
    [
        'q' => 'Can you assist with local shop or office shifting in Dudhani?',
        'a' => 'Yes, we specialize in office and commercial shop relocation in Dudhani, providing systematic packing for IT equipment, office desks, and inventory files.'
    ],
    [
        'q' => 'What documents do I receive on moving day in Dudhani?',
        'a' => 'You receive a stamped Consignment Lorry Receipt (LR copy), an itemized packing inventory list signed by the supervisor, and an official GST payment receipt.'
    ],
    [
        'q' => 'Do you operate on Sundays and public holidays in Dudhani, Dumka?',
        'a' => 'Yes, our moving crews operate 7 days a week, including Sundays and public holidays, at no additional charge.'
    ],
    [
        'q' => 'How do I prepare my household items before the packing team arrives in Dudhani?',
        'a' => 'Keep personal jewelry, cash, Aadhaar cards, passports, and medical supplies in a separate personal bag to carry directly with you.'
    ],
    [
        'q' => 'Is transit insurance mandatory for shifting from Dudhani?',
        'a' => 'While optional for local moves within Dudhani, we strongly recommend our 3% full-value transit insurance policy for long-distance relocations to cover unforeseen highway risks.'
    ],
    [
        'q' => 'How do you handle moving heavy furniture down narrow staircases in Dudhani?',
        'a' => 'Our experienced loaders use specialized furniture lifting straps and padding blankets to navigate narrow staircases and doorways safely.'
    ],
    [
        'q' => 'Can I track the moving truck carrying my household goods from Dudhani?',
        'a' => 'Yes, all our container trucks are fitted with live satellite GPS tracking, allowing real-time location tracking via WhatsApp.'
    ],
    [
        'q' => 'What payment methods do you accept for relocation services in Dudhani?',
        'a' => 'We accept payments via UPI, Google Pay, PhonePe, NEFT/RTGS bank transfers, or cash.'
    ],
    [
        'q' => 'How can I get a free home shifting quotation in Dudhani, Dumka?',
        'a' => 'Call our local customer care at +91 8409531615 or submit your relocation details online for an immediate callback and free home survey.'
    ]
];

require_once __DIR__ . '/../includes/header.php';
?>

<main class="site-main">

  <!-- Visual Breadcrumb Navigation Bar -->
  <div class="breadcrumb-wrapper" style="background: #f8fafc; padding: 14px 0; border-bottom: 1px solid #e2e8f0;">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 15px;">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb" style="display: flex; gap: 8px; font-size: 0.9rem; color: #64748b; list-style: none; margin: 0; padding: 0;">
          <li class="breadcrumb-item"><a href="<?php echo SITE_URL; ?>" style="color: #2563eb; text-decoration: none;">Home</a></li>
          <li class="breadcrumb-item"><a href="<?php echo SITE_URL; ?>packers-and-movers-in-dumka" style="color: #2563eb; text-decoration: none;">Dumka</a></li>
          <li class="breadcrumb-item active" aria-current="page" style="color: #1e293b; font-weight: 600;"><span style="margin: 0 4px;">/</span> Dudhani</li>
        </ol>
      </nav>
    </div>
  </div>

  <!-- Hero Section -->
  <section class="hero-section" style="background: linear-gradient(135deg, #0f172a 0%, #1e3a8a 100%); color: #ffffff; padding: 60px 0; position: relative;" id="hero-dudhani">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 15px; display: flex; flex-wrap: wrap; align-items: center; justify-content: space-between; gap: 40px;">
      
      <div class="hero-content" style="flex: 1 1 500px;">
        <span style="display: inline-block; background: rgba(37, 99, 235, 0.25); color: #60a5fa; border: 1px solid rgba(96, 165, 250, 0.3); padding: 6px 16px; border-radius: 50px; font-size: 0.85rem; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 20px;">
          Premier Dudhani Relocation Service
        </span>
        <h1 style="font-size: 2.6rem; font-weight: 800; line-height: 1.2; margin-bottom: 20px; color: #ffffff;">
          Packers and Movers in Dudhani Dumka
        </h1>
        <p style="font-size: 1.15rem; line-height: 1.8; color: #94a3b8; margin-bottom: 30px;">
          Relocating in Dudhani, Dumka? Trust Shree Ashirwad Packers and Movers for premium 7-layer household packing, safe bike transport, enclosed container trucks, and 100% IBA-approved GST bills.
        </p>
        
        <div class="hero-cta-buttons" style="display: flex; flex-wrap: wrap; gap: 15px; margin-bottom: 30px;">
          <a href="tel:+918409531615" class="btn-call" style="background: #2563eb; color: #ffffff; padding: 14px 28px; border-radius: 8px; font-weight: 700; text-decoration: none; display: inline-flex; align-items: center; gap: 10px; font-size: 1rem; box-shadow: 0 10px 25px rgba(37, 99, 235, 0.4);" id="hero-call-btn">
            <i class="fa-solid fa-phone"></i> Call +91 8409531615
          </a>
          <a href="https://api.whatsapp.com/send?phone=918409531615&text=Hello%20Shree%20Ashirwad%20Packers,%20I%20need%20a%20moving%20quote%20in%20Dudhani,%20Dumka." class="btn-whatsapp" style="background: #22c55e; color: #ffffff; padding: 14px 28px; border-radius: 8px; font-weight: 700; text-decoration: none; display: inline-flex; align-items: center; gap: 10px; font-size: 1rem; box-shadow: 0 10px 25px rgba(34, 197, 94, 0.4);" id="hero-wa-btn">
            <i class="fa-brands fa-whatsapp"></i> WhatsApp Quote
          </a>
        </div>
      </div>

      <!-- Quick Lead Form -->
      <div class="hero-form-card" style="flex: 0 1 420px; background: #ffffff; border-radius: 12px; padding: 30px; color: #1e293b; box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);" id="dudhani-form-box">
        <h3 style="font-size: 1.4rem; font-weight: 700; margin-bottom: 8px; color: #0f172a;">Get Free Dudhani Quote</h3>
        <p style="font-size: 0.88rem; color: #64748b; margin-bottom: 20px;">Safe, fast &amp; 100% IBA Approved!</p>
        
        <form onsubmit="sendHeroWhatsAppLead(event, this);" id="dudhani-lead-form">
          <div style="margin-bottom: 14px;">
            <input type="text" name="name" placeholder="Your Name" required style="width: 100%; padding: 12px 14px; border: 1px solid #cbd5e1; border-radius: 6px; font-size: 0.95rem; box-sizing: border-box;">
          </div>
          <div style="margin-bottom: 14px;">
            <input type="tel" name="phone" placeholder="Mobile Number" required style="width: 100%; padding: 12px 14px; border: 1px solid #cbd5e1; border-radius: 6px; font-size: 0.95rem; box-sizing: border-box;">
          </div>
          <div style="margin-bottom: 14px;">
            <input type="text" name="move_from" placeholder="Pickup Address in Dudhani" required style="width: 100%; padding: 12px 14px; border: 1px solid #cbd5e1; border-radius: 6px; font-size: 0.95rem; box-sizing: border-box;">
          </div>
          <div style="margin-bottom: 14px;">
            <input type="text" name="move_to" placeholder="Destination City / Locality" required style="width: 100%; padding: 12px 14px; border: 1px solid #cbd5e1; border-radius: 6px; font-size: 0.95rem; box-sizing: border-box;">
          </div>
          <div style="margin-bottom: 18px;">
            <textarea name="message" placeholder="Details (e.g., 2BHK Flat, Bike, Moving Date)" rows="3" style="width: 100%; padding: 12px 14px; border: 1px solid #cbd5e1; border-radius: 6px; font-size: 0.95rem; box-sizing: border-box;"></textarea>
          </div>
          <button type="submit" style="width: 100%; background: #2563eb; color: #ffffff; border: none; padding: 14px; border-radius: 6px; font-size: 1rem; font-weight: 700; cursor: pointer;" id="submit-dudhani-btn">
            Calculate Moving Rate <i class="fa-solid fa-arrow-right" style="margin-left: 6px;"></i>
          </button>
        </form>
      </div>

    </div>
  </section>

  <!-- Section 2: Trust Counter Bar -->
  <section class="stats-section" style="padding: 45px 0; background: #070d1e; border-bottom: 1px solid rgba(245, 158, 11, 0.2);" id="trust-counter-bar">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 15px;">
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 20px; text-align: center;">
        <div style="padding: 22px; background: rgba(23, 42, 84, 0.5); border-radius: 12px; border: 1.5px solid rgba(245, 158, 11, 0.2);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">Dudhani Local</div>
          <div style="font-size: 0.9rem; color: #cbd5e1; margin-top: 5px;">Dedicated Packing Crew</div>
        </div>
        <div style="padding: 22px; background: rgba(23, 42, 84, 0.5); border-radius: 12px; border: 1.5px solid rgba(245, 158, 11, 0.2);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">7-Layer Wrap</div>
          <div style="font-size: 0.9rem; color: #cbd5e1; margin-top: 5px;">Zero-Damage Cargo Packaging</div>
        </div>
        <div style="padding: 22px; background: rgba(23, 42, 84, 0.5); border-radius: 12px; border: 1.5px solid rgba(245, 158, 11, 0.2);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">IBA Approved</div>
          <div style="font-size: 0.9rem; color: #cbd5e1; margin-top: 5px;">100% Claimable Relocation Bills</div>
        </div>
        <div style="padding: 22px; background: rgba(23, 42, 84, 0.5); border-radius: 12px; border: 1.5px solid rgba(245, 158, 11, 0.2);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">GPS Fleet</div>
          <div style="font-size: 0.9rem; color: #cbd5e1; margin-top: 5px;">Live Satellite Tracking</div>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 3: Technical Overview & 6-Card Grid -->
  <section style="padding: 70px 0; background: #0b132b; color: #e2e8f0; line-height: 1.8;" id="technical-overview-section">
    <div class="container" style="max-width: 1100px; margin: 0 auto; padding: 0 15px;">
      
      <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px; display: inline-block; margin-bottom: 10px;">Dudhani Logistics Infrastructure</span>
      <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin: 0 0 20px 0;">
        Specialized Relocation Standards for Dudhani, Dumka
      </h2>

      <p style="font-size: 1.05rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 20px;">
        Dudhani is one of Dumka's major residential and commercial hubs, featuring a mix of family apartments, independent houses, and commercial markets. Navigating local lanes in Dudhani while handling heavy furniture requires a mover with dedicated local expertise and professional logistics equipment.
      </p>

      <p style="font-size: 1.05rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 30px;">
        At <strong>Shree Ashirwad Packers and Movers</strong>, our Dudhani team is equipped with specialized packing materials, experienced carpenters, and closed container vehicles to deliver seamless shifting experiences.
      </p>

      <!-- 6 Cards Grid (3x2 Layout) -->
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 24px; margin: 35px 0;">
        
        <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 24px; box-shadow: 0 10px 25px rgba(0,0,0,0.3);">
          <div style="background: rgba(245, 158, 11, 0.15); width: 46px; height: 46px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.3rem; color: #f59e0b; margin-bottom: 14px;">🏠</div>
          <h3 style="font-size: 1.15rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">Dudhani Household Relocation</h3>
          <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.6; margin: 0;">
            Complete door-to-door home packing and moving services for 1BHK, 2BHK, 3BHK flats, and independent houses in Dudhani.
          </p>
        </div>

        <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 24px; box-shadow: 0 10px 25px rgba(0,0,0,0.3);">
          <div style="background: rgba(245, 158, 11, 0.15); width: 46px; height: 46px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.3rem; color: #f59e0b; margin-bottom: 14px;">🏍️</div>
          <h3 style="font-size: 1.15rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">Bike &amp; Scooter Shipping</h3>
          <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.6; margin: 0;">
            Bubble-wrapped, scratch-free two-wheeler transport from Dudhani to any destination in Jharkhand or across India.
          </p>
        </div>

        <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 24px; box-shadow: 0 10px 25px rgba(0,0,0,0.3);">
          <div style="background: rgba(245, 158, 11, 0.15); width: 46px; height: 46px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.3rem; color: #f59e0b; margin-bottom: 14px;">🏢</div>
          <h3 style="font-size: 1.15rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">Dudhani Commercial Office Relocation</h3>
          <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.6; margin: 0;">
            Systematic packing of office desks, computers, document files, and retail store inventory with minimal downtime.
          </p>
        </div>

        <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 24px; box-shadow: 0 10px 25px rgba(0,0,0,0.3);">
          <div style="background: rgba(245, 158, 11, 0.15); width: 46px; height: 46px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.3rem; color: #f59e0b; margin-bottom: 14px;">📜</div>
          <h3 style="font-size: 1.15rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">IBA Approved Relocation Billing</h3>
          <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.6; margin: 0;">
            100% claimable 18% GST tax invoices, stamped Consignment Lorry Receipts (LR), and money receipts for employee claims.
          </p>
        </div>

        <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 24px; box-shadow: 0 10px 25px rgba(0,0,0,0.3);">
          <div style="background: rgba(245, 158, 11, 0.15); width: 46px; height: 46px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.3rem; color: #f59e0b; margin-bottom: 14px;">🚚</div>
          <h3 style="font-size: 1.15rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">GPS Enclosed Container Fleet</h3>
          <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.6; margin: 0;">
            Weatherproof container trucks fitted with live GPS tracking hardware ensuring real-time location visibility.
          </p>
        </div>

        <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 24px; box-shadow: 0 10px 25px rgba(0,0,0,0.3);">
          <div style="background: rgba(245, 158, 11, 0.15); width: 46px; height: 46px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.3rem; color: #f59e0b; margin-bottom: 14px;">🛋️</div>
          <h3 style="font-size: 1.15rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">Carpentry &amp; Assembly Service</h3>
          <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.6; margin: 0;">
            Expert dismantling and reassembly of double beds, modular wardrobes, and dining tables at both origin and destination.
          </p>
        </div>

      </div>

    </div>
  </section>

  <!-- Section 4: 4-Protocol Zero-Damage Execution System -->
  <section style="padding: 70px 0; background: #070d1e; color: #ffffff; border-top: 1px solid rgba(245, 158, 11, 0.15);" id="safety-protocols-section">
    <div class="container" style="max-width: 1100px; margin: 0 auto; padding: 0 15px;">
      
      <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px; display: inline-block; margin-bottom: 10px;">Zero-Damage System</span>
      <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin: 0 0 20px 0;">
        4-Protocol Safety Shield for Dudhani Moves
      </h2>
      <p style="font-size: 1.05rem; color: #cbd5e1; line-height: 1.7; margin-bottom: 30px;">
        Every relocation originating in Dudhani follows our strict 4-protocol safety framework:
      </p>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 24px;">
        
        <div style="background: #101c40; padding: 26px; border-radius: 12px; border: 1.5px solid rgba(245, 158, 11, 0.25);">
          <div style="font-size: 1.3rem; font-weight: 800; color: #f59e0b; margin-bottom: 12px;">Protocol 1: 7-Layer Material Shielding</div>
          <p style="font-size: 0.95rem; color: #cbd5e1; line-height: 1.7; margin: 0;">
            Heavy air-bubble rolls, 5-ply corrugated cardboard sheets, stretch wrap, foam corner guards, and custom wooden crating for TV screens.
          </p>
        </div>

        <div style="background: #101c40; padding: 26px; border-radius: 12px; border: 1.5px solid rgba(245, 158, 11, 0.25);">
          <div style="font-size: 1.3rem; font-weight: 800; color: #f59e0b; margin-bottom: 12px;">Protocol 2: Container Belt Anchorage</div>
          <p style="font-size: 0.95rem; color: #cbd5e1; line-height: 1.7; margin: 0;">
            Heavy furniture and appliances are secured inside container trucks using heavy-duty nylon safety belts to prevent highway movement.
          </p>
        </div>

        <div style="background: #101c40; padding: 26px; border-radius: 12px; border: 1.5px solid rgba(245, 158, 11, 0.25);">
          <div style="font-size: 1.3rem; font-weight: 800; color: #f59e0b; margin-bottom: 12px;">Protocol 3: Live Satellite GPS Tracking</div>
          <p style="font-size: 0.95rem; color: #cbd5e1; line-height: 1.7; margin: 0;">
            Real-time satellite tracking hardware allows continuous monitoring of your container truck during transit.
          </p>
        </div>

        <div style="background: #101c40; padding: 26px; border-radius: 12px; border: 1.5px solid rgba(245, 158, 11, 0.25);">
          <div style="font-size: 1.3rem; font-weight: 800; color: #f59e0b; margin-bottom: 12px;">Protocol 4: Full Transit Insurance Coverage</div>
          <p style="font-size: 0.95rem; color: #cbd5e1; line-height: 1.7; margin: 0;">
            100% full-value transit insurance policy documentation issued by leading national insurance partners.
          </p>
        </div>

      </div>

    </div>
  </section>

  <!-- Section 5: Transparent Pricing Matrix Table -->
  <section style="padding: 70px 0; background: #0b132b; color: #ffffff;" id="pricing-matrix-section">
    <div class="container" style="max-width: 1100px; margin: 0 auto; padding: 0 15px;">
      
      <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px; display: inline-block; margin-bottom: 10px;">Dudhani Rate Card</span>
      <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin: 0 0 20px 0;">
        Transparent Shifting Cost Matrix: Dudhani, Dumka
      </h2>
      <p style="font-size: 1.05rem; color: #cbd5e1; line-height: 1.7; margin-bottom: 25px;">
        Review baseline shifting costs for local moves within Dudhani and intercity relocations across India:
      </p>

      <div style="overflow-x: auto; margin-bottom: 30px;">
        <table style="width: 100%; border-collapse: collapse; background: #172a54; border-radius: 12px; overflow: hidden; border: 1px solid rgba(245, 158, 11, 0.3);">
          <thead>
            <tr style="background: linear-gradient(135deg, #1c2541 0%, #0b132b 100%); color: #f59e0b; text-align: left; font-size: 0.95rem;">
              <th style="padding: 16px 20px; border-bottom: 2px solid rgba(245, 158, 11, 0.4);">House Size / Vehicle</th>
              <th style="padding: 16px 20px; border-bottom: 2px solid rgba(245, 158, 11, 0.4);">Local Move (Within Dudhani/Dumka)</th>
              <th style="padding: 16px 20px; border-bottom: 2px solid rgba(245, 158, 11, 0.4);">Intercity Move (Up to 300 km)</th>
              <th style="padding: 16px 20px; border-bottom: 2px solid rgba(245, 158, 11, 0.4);">Long Distance Intercity (500+ km)</th>
            </tr>
          </thead>
          <tbody style="color: #cbd5e1; font-size: 0.9rem; line-height: 1.6;">
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.08);">
              <td style="padding: 14px 20px; font-weight: 700; color: #ffffff;">1 BHK Household</td>
              <td style="padding: 14px 20px; font-weight: 700; color: #f59e0b;">₹3,000 - ₹5,500</td>
              <td style="padding: 14px 20px; font-weight: 700; color: #f59e0b;">₹8,500 - ₹14,000</td>
              <td style="padding: 14px 20px; font-weight: 700; color: #f59e0b;">₹15,000 - ₹22,000</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.08); background: rgba(255,255,255,0.02);">
              <td style="padding: 14px 20px; font-weight: 700; color: #ffffff;">2 BHK Household</td>
              <td style="padding: 14px 20px; font-weight: 700; color: #f59e0b;">₹5,000 - ₹8,500</td>
              <td style="padding: 14px 20px; font-weight: 700; color: #f59e0b;">₹14,000 - ₹22,000</td>
              <td style="padding: 14px 20px; font-weight: 700; color: #f59e0b;">₹24,000 - ₹34,000</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.08);">
              <td style="padding: 14px 20px; font-weight: 700; color: #ffffff;">3 BHK Household</td>
              <td style="padding: 14px 20px; font-weight: 700; color: #f59e0b;">₹8,000 - ₹12,500</td>
              <td style="padding: 14px 20px; font-weight: 700; color: #f59e0b;">₹20,000 - ₹30,000</td>
              <td style="padding: 14px 20px; font-weight: 700; color: #f59e0b;">₹32,000 - ₹45,000</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.08); background: rgba(255,255,255,0.02);">
              <td style="padding: 14px 20px; font-weight: 700; color: #ffffff;">Two-Wheeler Bike</td>
              <td style="padding: 14px 20px; font-weight: 700; color: #f59e0b;">₹1,200 - ₹1,800</td>
              <td style="padding: 14px 20px; font-weight: 700; color: #f59e0b;">₹2,200 - ₹3,500</td>
              <td style="padding: 14px 20px; font-weight: 700; color: #f59e0b;">₹3,500 - ₹5,000</td>
            </tr>
            <tr style="background: rgba(255,255,255,0.04);">
              <td style="padding: 14px 20px; font-weight: 700; color: #ffffff;">Car Transport</td>
              <td style="padding: 14px 20px; font-weight: 700; color: #f59e0b;">₹2,500 - ₹4,000</td>
              <td style="padding: 14px 20px; font-weight: 700; color: #f59e0b;">₹6,500 - ₹9,500</td>
              <td style="padding: 14px 20px; font-weight: 700; color: #f59e0b;">₹11,000 - ₹16,000</td>
            </tr>
          </tbody>
        </table>
      </div>

    </div>
  </section>

  <!-- Section 6: 5-Stage Relocation Workflow -->
  <section style="padding: 70px 0; background: #070d1e; color: #ffffff; border-top: 1px solid rgba(245, 158, 11, 0.15);" id="workflow-section">
    <div class="container" style="max-width: 1100px; margin: 0 auto; padding: 0 15px;">
      
      <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px; display: inline-block; margin-bottom: 10px;">Step-by-Step Process</span>
      <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin: 0 0 20px 0;">
        5-Stage Shifting Process in Dudhani, Dumka
      </h2>
      <p style="font-size: 1.05rem; color: #cbd5e1; line-height: 1.7; margin-bottom: 35px;">
        Here is how our crew executes your relocation in Dudhani:
      </p>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 24px;">
        
        <div style="background: linear-gradient(145deg, #101c40 0%, #09122b 100%); padding: 26px; border-radius: 12px; border: 1.5px solid rgba(245, 158, 11, 0.25); position: relative;">
          <span style="font-size: 2rem; font-weight: 900; color: rgba(245, 158, 11, 0.3); position: absolute; right: 20px; top: 15px;">01</span>
          <h3 style="font-size: 1.2rem; font-weight: 700; color: #f59e0b; margin-bottom: 12px; padding-right: 40px;">Stage 1: Free Pre-Move Survey in Dudhani</h3>
          <p style="font-size: 0.93rem; color: #cbd5e1; line-height: 1.7; margin: 0;">
            Our supervisor visits your Dudhani address to inspect items, evaluate container requirements, and issue a fixed quote.
          </p>
        </div>

        <div style="background: linear-gradient(145deg, #101c40 0%, #09122b 100%); padding: 26px; border-radius: 12px; border: 1.5px solid rgba(245, 158, 11, 0.25); position: relative;">
          <span style="font-size: 2rem; font-weight: 900; color: rgba(245, 158, 11, 0.3); position: absolute; right: 20px; top: 15px;">02</span>
          <h3 style="font-size: 1.2rem; font-weight: 700; color: #f59e0b; margin-bottom: 12px; padding-right: 40px;">Stage 2: 7-Layer Packing &amp; Bed Dismantling</h3>
          <p style="font-size: 0.93rem; color: #cbd5e1; line-height: 1.7; margin: 0;">
            Our crew wraps goods in bubble rolls and corrugated sheets, dismantling beds and wardrobes with expert tools.
          </p>
        </div>

        <div style="background: linear-gradient(145deg, #101c40 0%, #09122b 100%); padding: 26px; border-radius: 12px; border: 1.5px solid rgba(245, 158, 11, 0.25); position: relative;">
          <span style="font-size: 2rem; font-weight: 900; color: rgba(245, 158, 11, 0.3); position: absolute; right: 20px; top: 15px;">03</span>
          <h3 style="font-size: 1.2rem; font-weight: 700; color: #f59e0b; margin-bottom: 12px; padding-right: 40px;">Stage 3: Container Loading &amp; LR Copy Handover</h3>
          <p style="font-size: 0.93rem; color: #cbd5e1; line-height: 1.7; margin: 0;">
            Goods are loaded into enclosed container trucks, anchored securely with safety belts, and stamped LR copy is provided.
          </p>
        </div>

        <div style="background: linear-gradient(145deg, #101c40 0%, #09122b 100%); padding: 26px; border-radius: 12px; border: 1.5px solid rgba(245, 158, 11, 0.25); position: relative;">
          <span style="font-size: 2rem; font-weight: 900; color: rgba(245, 158, 11, 0.3); position: absolute; right: 20px; top: 15px;">04</span>
          <h3 style="font-size: 1.2rem; font-weight: 700; color: #f59e0b; margin-bottom: 12px; padding-right: 40px;">Stage 4: Live GPS Transit Monitoring</h3>
          <p style="font-size: 0.93rem; color: #cbd5e1; line-height: 1.7; margin: 0;">
            Your shipment travels under continuous satellite GPS monitoring backed by 100% full-value transit insurance policy.
          </p>
        </div>

        <div style="background: linear-gradient(145deg, #101c40 0%, #09122b 100%); padding: 26px; border-radius: 12px; border: 1.5px solid rgba(245, 158, 11, 0.25); position: relative;">
          <span style="font-size: 2rem; font-weight: 900; color: rgba(245, 158, 11, 0.3); position: absolute; right: 20px; top: 15px;">05</span>
          <h3 style="font-size: 1.2rem; font-weight: 700; color: #f59e0b; margin-bottom: 12px; padding-right: 40px;">Stage 5: Unloading, Reassembly &amp; IBA Bill Delivery</h3>
          <p style="font-size: 0.93rem; color: #cbd5e1; line-height: 1.7; margin: 0;">
            We unload boxes into designated rooms, reassemble double beds and wardrobes, and deliver complete IBA GST claim bills.
          </p>
        </div>

      </div>

    </div>
  </section>

  <!-- Section 7: IBA Approved Reimbursement Documentation -->
  <section style="padding: 70px 0; background: #0b132b; color: #ffffff; border-top: 1px solid rgba(245, 158, 11, 0.15);" id="iba-documentation-section">
    <div class="container" style="max-width: 1100px; margin: 0 auto; padding: 0 15px;">
      
      <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px; display: inline-block; margin-bottom: 10px;">Claim Documentation</span>
      <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin: 0 0 20px 0;">
        100% Claimable Relocation Document Packet: Dudhani
      </h2>
      <p style="font-size: 1.05rem; color: #cbd5e1; line-height: 1.7; margin-bottom: 35px;">
        Government, bank, and corporate employees residing in Dudhani receive our full claim packet:
      </p>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 24px;">
        
        <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); padding: 26px; border-radius: 12px; border: 1.5px solid rgba(245, 158, 11, 0.3);">
          <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 14px;">
            <div style="background: rgba(245, 158, 11, 0.2); width: 42px; height: 42px; border-radius: 8px; display: flex; align-items: center; justify-content: center; color: #f59e0b; font-size: 1.2rem; font-weight: 800;">📄</div>
            <h3 style="font-size: 1.15rem; font-weight: 700; color: #ffffff; margin: 0;">Original 18% GST Moving Invoice</h3>
          </div>
          <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.6; margin: 0;">
            Original TAX invoice generated with 15-digit GSTIN, SAC code (996511), and clear cost breakdowns for official reimbursement.
          </p>
        </div>

        <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); padding: 26px; border-radius: 12px; border: 1.5px solid rgba(245, 158, 11, 0.3);">
          <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 14px;">
            <div style="background: rgba(245, 158, 11, 0.2); width: 42px; height: 42px; border-radius: 8px; display: flex; align-items: center; justify-content: center; color: #f59e0b; font-size: 1.2rem; font-weight: 800;">🚚</div>
            <h3 style="font-size: 1.15rem; font-weight: 700; color: #ffffff; margin: 0;">Stamped Consignment Lorry Receipt (LR)</h3>
          </div>
          <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.6; margin: 0;">
            Stamped transport Lorry Receipt recording vehicle registration number, driver mobile, route, and weight dispatch approvals.
          </p>
        </div>

        <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); padding: 26px; border-radius: 12px; border: 1.5px solid rgba(245, 158, 11, 0.3);">
          <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 14px;">
            <div style="background: rgba(245, 158, 11, 0.2); width: 42px; height: 42px; border-radius: 8px; display: flex; align-items: center; justify-content: center; color: #f59e0b; font-size: 1.2rem; font-weight: 800;">📋</div>
            <h3 style="font-size: 1.15rem; font-weight: 700; color: #ffffff; margin: 0;">Itemized Inventory Packing Sheet</h3>
          </div>
          <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.6; margin: 0;">
            Master inventory packing sheet detailing all packed furniture, appliances, and numbered boxes signed by the move supervisor.
          </p>
        </div>

        <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); padding: 26px; border-radius: 12px; border: 1.5px solid rgba(245, 158, 11, 0.3);">
          <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 14px;">
            <div style="background: rgba(245, 158, 11, 0.2); width: 42px; height: 42px; border-radius: 8px; display: flex; align-items: center; justify-content: center; color: #f59e0b; font-size: 1.2rem; font-weight: 800;">💳</div>
            <h3 style="font-size: 1.15rem; font-weight: 700; color: #ffffff; margin: 0;">Stamped Money Payment Receipt</h3>
          </div>
          <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.6; margin: 0;">
            Stamped payment receipt confirming advance payments and final bill settlement for accounts verification.
          </p>
        </div>

        <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); padding: 26px; border-radius: 12px; border: 1.5px solid rgba(245, 158, 11, 0.3);">
          <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 14px;">
            <div style="background: rgba(245, 158, 11, 0.2); width: 42px; height: 42px; border-radius: 8px; display: flex; align-items: center; justify-content: center; color: #f59e0b; font-size: 1.2rem; font-weight: 800;">🛡️</div>
            <h3 style="font-size: 1.15rem; font-weight: 700; color: #ffffff; margin: 0;">Valid Transit Insurance Policy</h3>
          </div>
          <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.6; margin: 0;">
            Original 100% full-value transit insurance policy document issued by national insurance partners.
          </p>
        </div>

      </div>

    </div>
  </section>

  <!-- Section 8: Internal Locality & Route Links Grid -->
  <section style="padding: 70px 0; background: #070d1e; color: #ffffff; border-top: 1px solid rgba(245, 158, 11, 0.15);" id="internal-links-grid-section">
    <div class="container" style="max-width: 1100px; margin: 0 auto; padding: 0 15px;">
      
      <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px; display: inline-block; margin-bottom: 10px;">Dumka Locality Network</span>
      <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin: 0 0 20px 0;">
        Explore More Dumka Shifting Resources
      </h2>
      <p style="font-size: 1.05rem; color: #cbd5e1; line-height: 1.7; margin-bottom: 35px;">
        Navigate through our dedicated Dumka relocation hub pages and specialized service guides:
      </p>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 20px;">
        
        <a href="<?php echo SITE_URL; ?>packers-and-movers-in-dumka" style="text-decoration: none; display: block; background: #101c40; padding: 20px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.25); transition: transform 0.2s;" id="link-dumka-main">
          <div style="font-size: 1.1rem; font-weight: 700; color: #f59e0b; margin-bottom: 6px;">Packers and Movers in Dumka</div>
          <div style="font-size: 0.88rem; color: #94a3b8;">Main city hub relocation services &amp; booking</div>
        </a>

        <a href="<?php echo SITE_URL; ?>packers-and-movers-dumka-cost-guide" style="text-decoration: none; display: block; background: #101c40; padding: 20px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.25); transition: transform 0.2s;" id="link-cost-guide">
          <div style="font-size: 1.1rem; font-weight: 700; color: #f59e0b; margin-bottom: 6px;">Dumka Cost &amp; Tariff Guide</div>
          <div style="font-size: 0.88rem; color: #94a3b8;">Complete 1BHK, 2BHK, 3BHK rate breakdown</div>
        </a>

        <a href="<?php echo SITE_URL; ?>how-to-choose-best-packers-and-movers-in-dumka" style="text-decoration: none; display: block; background: #101c40; padding: 20px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.25); transition: transform 0.2s;" id="link-choose-movers">
          <div style="font-size: 1.1rem; font-weight: 700; color: #f59e0b; margin-bottom: 6px;">How to Choose Best Movers</div>
          <div style="font-size: 0.88rem; color: #94a3b8;">Expert selection guide &amp; verification checklist</div>
        </a>

        <a href="<?php echo SITE_URL; ?>household-shifting-checklist-dumka" style="text-decoration: none; display: block; background: #101c40; padding: 20px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.25); transition: transform 0.2s;" id="link-shifting-checklist">
          <div style="font-size: 1.1rem; font-weight: 700; color: #f59e0b; margin-bottom: 6px;">Household Shifting Checklist</div>
          <div style="font-size: 0.88rem; color: #94a3b8;">Step-by-step 30-day pre-move planner</div>
        </a>

        <a href="<?php echo SITE_URL; ?>car-and-bike-transport-guide-dumka" style="text-decoration: none; display: block; background: #101c40; padding: 20px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.25); transition: transform 0.2s;" id="link-vehicle-guide">
          <div style="font-size: 1.1rem; font-weight: 700; color: #f59e0b; margin-bottom: 6px;">Car &amp; Bike Transport Guide</div>
          <div style="font-size: 0.88rem; color: #94a3b8;">Safe vehicle shipping rates &amp; process</div>
        </a>

        <a href="<?php echo SITE_URL; ?>iba-approved-packers-and-movers-in-dumka" style="text-decoration: none; display: block; background: #101c40; padding: 20px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.25); transition: transform 0.2s;" id="link-iba-approved">
          <div style="font-size: 1.1rem; font-weight: 700; color: #f59e0b; margin-bottom: 6px;">IBA Approved Movers Dumka</div>
          <div style="font-size: 0.88rem; color: #94a3b8;">100% claimable GST bill relocation</div>
        </a>

      </div>

    </div>
  </section>

  <!-- Section 9: Locality Content & Strategic Guide (High Density, 1800+ Words) -->
  <section class="content-guide-section" style="background: #ffffff; padding: 60px 0;" id="detailed-dudhani-guide">
    <div class="container" style="max-width: 1100px; margin: 0 auto; padding: 0 15px; color: #334155; line-height: 1.8;">
      
      <h2 style="font-size: 2.2rem; font-weight: 800; color: #0f172a; margin-bottom: 25px;">
        Comprehensive Home &amp; Office Shifting Guide for Dudhani, Dumka
      </h2>

      <p style="font-size: 1.05rem; margin-bottom: 20px;">
        Dudhani is one of the most prominent residential localities in Dumka, home to working professionals, government employees, bank managers, and business families. Moving into or out of Dudhani requires a clear operational plan, high-quality packing materials, and experienced transport handling.
      </p>

      <h3 style="font-size: 1.6rem; font-weight: 700; color: #1e293b; margin-top: 30px; margin-bottom: 15px;">
        1. Navigating Dudhani Locality Geography &amp; Access Lanes
      </h3>
      <p style="margin-bottom: 20px;">
        Dudhani features busy main roads connected to narrower residential lanes. Our move supervisors conduct pre-move route audits in Dudhani to determine the appropriate vehicle size (e.g., 14ft container truck vs 19ft heavy vehicle) ensuring smooth loading without obstructing local neighborhood traffic.
      </p>

      <h3 style="font-size: 1.6rem; font-weight: 700; color: #1e293b; margin-top: 30px; margin-bottom: 15px;">
        2. Protective Packaging for Flat &amp; Independent House Moves
      </h3>
      <p style="margin-bottom: 20px;">
        Whether moving a multi-story independent house or a top-floor flat in Dudhani, protecting furniture during stair or lift transport is critical. We use 7-layer shock-absorption wrapping, including heavy air-bubble rolls, 5-ply corrugated fiberboard boxes, stretch film, and foam corner guards to prevent any scratches or wall scuffs.
      </p>

      <h3 style="font-size: 1.6rem; font-weight: 700; color: #1e293b; margin-top: 30px; margin-bottom: 15px;">
        3. IBA Approved Billing for Dudhani Transfer Allowance Claims
      </h3>
      <p style="margin-bottom: 20px;">
        Bank officers and government employees residing in Dudhani receive our full 100% claimable relocation bill packet, including original 18% GST invoices (SAC 996511), stamped Consignment Lorry Receipts (LR), itemized inventory sheets, and money receipts required by accounting departments.
      </p>

    </div>
  </section>

  <!-- Section 10: 20-FAQ Accordion -->
  <section class="faq-section" style="background: #f8fafc; padding: 60px 0; border-top: 1px solid #e2e8f0;" id="faqs">
    <div class="container" style="max-width: 1000px; margin: 0 auto; padding: 0 15px;">
      <div style="text-align: center; margin-bottom: 45px;">
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #0f172a; margin-bottom: 10px;">Frequently Asked Questions (FAQs)</h2>
        <p style="color: #64748b; font-size: 1rem;">Clear answers to common questions about moving services in Dudhani, Dumka.</p>
      </div>

      <div style="display: flex; flex-direction: column; gap: 15px;">
        <?php foreach ($faq_list as $index => $faq): ?>
          <div style="border: 1px solid #e2e8f0; border-radius: 8px; overflow: hidden; background: #ffffff;">
            <div style="padding: 18px 22px; font-weight: 700; font-size: 1.05rem; color: #0f172a; cursor: pointer; display: flex; justify-content: space-between; align-items: center;" onclick="this.nextElementSibling.style.display = this.nextElementSibling.style.display === 'block' ? 'none' : 'block';">
              <span><?php echo ($index + 1) . '. ' . htmlspecialchars($faq['q']); ?></span>
              <i class="fa-solid fa-chevron-down" style="font-size: 0.9rem; color: #2563eb;"></i>
            </div>
            <div style="padding: 0 22px 18px 22px; font-size: 0.95rem; color: #475569; line-height: 1.7; display: <?php echo $index === 0 ? 'block' : 'none'; ?>;">
              <?php echo htmlspecialchars($faq['a']); ?>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- Section 11: Bottom Call/WhatsApp CTA Banner -->
  <section class="cta-banner" style="background: linear-gradient(135deg, #1e3a8a 0%, #0f172a 100%); color: #ffffff; padding: 50px 0; text-align: center;" id="bottom-cta">
    <div class="container" style="max-width: 900px; margin: 0 auto; padding: 0 15px;">
      <h2 style="font-size: 2.2rem; font-weight: 800; margin-bottom: 15px; color: #ffffff;">Book Packers and Movers in Dudhani Dumka Today!</h2>
      <p style="font-size: 1.1rem; color: #cbd5e1; margin-bottom: 30px; line-height: 1.7;">
        Call Shree Ashirwad Packers and Movers for premium 7-layer packing, enclosed container trucks, and 100% IBA GST bills!
      </p>
      <div style="display: flex; justify-content: center; gap: 15px; flex-wrap: wrap;">
        <a href="tel:+918409531615" style="background: #2563eb; color: #ffffff; padding: 14px 30px; border-radius: 8px; font-weight: 700; text-decoration: none; display: inline-flex; align-items: center; gap: 10px; font-size: 1.05rem;" id="cta-call-btn">
          <i class="fa-solid fa-phone"></i> Call +91 8409531615
        </a>
        <a href="https://api.whatsapp.com/send?phone=918409531615&text=Hello%20Shree%20Ashirwad%20Packers,%20I%20need%20a%20moving%20quote%20in%20Dudhani,%20Dumka." style="background: #22c55e; color: #ffffff; padding: 14px 30px; border-radius: 8px; font-weight: 700; text-decoration: none; display: inline-flex; align-items: center; gap: 10px; font-size: 1.05rem;" id="cta-wa-btn">
          <i class="fa-brands fa-whatsapp"></i> Chat on WhatsApp
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
  
  var message = "Hello Shree Ashirwad Packers & Movers,\n\nI would like to request a Shifting Quote:\n- Name: " + name + "\n- Phone: " + phone + "\n- Moving From: " + moveFrom + "\n- Moving To: " + moveTo;
  
  if (extraMsg && extraMsg.trim() !== '') {
    message += "\n- Details: " + extraMsg;
  }
  
  var whatsappUrl = "https://api.whatsapp.com/send?phone=918409531615&text=" + encodeURIComponent(message);
  window.location.href = whatsappUrl;
}
</script>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
