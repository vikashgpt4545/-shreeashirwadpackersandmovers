<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "Packers and Movers in Giridih | IBA Approved Relocation Services 8409531615";
$page_desc = "Top-rated Packers and Movers in Giridih. Complete household shifting, office relocation, car & bike transport, IBA approved billing, and warehouse storage in Giridih Town, Makatpur & Pachamba. Call 8409531615.";
$page_keywords = "packers and movers in giridih, packers and movers giridih, best packers and movers in giridih, top packers and movers in giridih, household shifting in giridih, home relocation services giridih, office shifting services giridih, car transport in giridih, bike transport giridih, giridih town packers movers, makatpur packers, pachamba packers movers, IBA approved packers movers giridih";

$page_city = "Giridih";

$faq_list = [
    ['q' => 'How early should I book packers and movers in Giridih for a smooth relocation?', 'a' => 'We recommend booking 3 to 5 days in advance for local shifting within Giridih Town, Makatpur, Bargaanda, and Pachamba, and 7 to 10 days prior for intercity relocations to major Indian metros like Delhi, Kolkata, Ranchi, Patna, or Bengaluru.'],
    ['q' => 'Are your shifting bills eligible for bank and government employer reimbursement in Giridih?', 'a' => 'Yes, absolutely! Shree Ashirwad Packers and Movers is an IBA-approved moving company. We issue 100% genuine GST invoices (SAC code 996511), stamped Lorry Receipts (LR), itemized packing inventory lists, and IBA consignment documentation accepted by public sector banks, railway authorities, defense departments, and government ministries.'],
    ['q' => 'How are shifting charges calculated for home relocation in Giridih?', 'a' => 'Relocation costs depend on five key parameters: the total volume of household goods (1BHK, 2BHK, 3BHK, or Independent Villa), distance to the destination locality/city, floor elevation, availability of a working service elevator, quality of packing materials required (e.g. 7-layer wrap or wooden crating), and vehicle type (shared vs dedicated closed container truck).'],
    ['q' => 'What level of transit insurance coverage do you provide during moving?', 'a' => 'We provide comprehensive 100% transit insurance covering all declared household belongings, electronic appliances, and vehicles against accidents, fire, rollover damage, or natural calamities during highway transport. The premium is transparently calculated at standard IRDAI rates.'],
    ['q' => 'How do you safeguard fragile glassware, LED TVs, and polished wooden furniture?', 'a' => 'Fragile items undergo multi-layer protection using 80-micron heavy-duty air bubble wrap, foam corner guards, 5-ply corrugated fiberboard sheets, waterproof stretch film, and custom wooden box crating for glass table tops, marble mandirs, and large flat-screen televisions.'],
    ['q' => 'Can I transport my personal car or motor bike along with my household goods from Giridih?', 'a' => 'Yes, we operate dedicated enclosed car carrier trailers and hydraulic bike transport trucks equipped with rubberized wheel clamps, soft tie-down straps, and protective body covers to guarantee scratch-free vehicle shipping from Giridih across India.'],
    ['q' => 'Which specific neighborhoods and towns do you cover in Giridih district?', 'a' => 'We cover 100% of Giridih district including Giridih Town, Makatpur, Bargaanda, Pachamba, Mirzaganj, Dumri, Bagodar, Tisri, Deori, and the Parasnath/Isri market region.'],
    ['q' => 'Do your packers handle furniture disassembly and reassembly at the new house?', 'a' => 'Yes! Our trained carpentry technicians dismantle king/queen size bed frames, modular wardrobes, dining tables, and wall-mounted TV brackets at your current home, pack the hardware securely, and reassemble everything at your destination.'],
    ['q' => 'Is short-term or long-term warehouse storage available in Giridih?', 'a' => 'Yes, we maintain clean, moisture-controlled, pest-free, 24/7 CCTV-monitored warehouse facilities near Giridih for safe short-term and long-term storage of household goods, office archives, and commercial equipment.'],
    ['q' => 'How do I request a free physical or virtual pre-move survey in Giridih?', 'a' => 'Simply call our customer helpline at +91 8409531615 or submit a request via our WhatsApp lead form. Our move supervisor will conduct a free survey and provide a written, fixed-price itemized quote.'],
    ['q' => 'What items are strictly prohibited from being packed inside shifting trucks?', 'a' => 'For safety and statutory compliance, we do not transport hazardous materials such as LPG cylinders, kerosene, petrol/diesel, fireworks, matches, perishable food items, live plants, cash, jewelry, and original property title deeds.'],
    ['q' => 'How long does a local household move within Giridih take to complete?', 'a' => 'Local household shifting within Giridih Town or Makatpur for a standard 2BHK or 3BHK home is typically completed within 5 to 8 hours on the exact same day, including packing, loading, transit, unloading, and basic setup.'],
    ['q' => 'What precautions are taken during monsoon or rainy season moves in Giridih?', 'a' => 'During rainy weather, all goods are double-wrapped with heavy-duty 100-micron plastic stretch film and tarpaulin sheets before being loaded into 100% leak-proof, weatherproof enclosed container trucks.'],
    ['q' => 'Do you provide specialized office and commercial shifting services in Giridih?', 'a' => 'Yes, we execute seamless office relocations including computer server packing, IT hardware anti-static wrapping, modular workstation dismantling, file archives indexing, and weekend commercial shifting to ensure zero operational downtime.'],
    ['q' => 'Can I track my container truck during long-distance intercity transit from Giridih?', 'a' => 'Yes, all our long-distance intercity container trucks are fitted with satellite GPS tracking systems, allowing you to receive real-time location updates directly from our logistics dispatch team.'],
    ['q' => 'What makes Shree Ashirwad Packers and Movers the most trusted choice in Giridih?', 'a' => 'Our 15+ years of operational excellence, IBA approval, zero hidden charges, transparent written contracts, dedicated moving crews, 7-layer packing standard, and 100% claim settlement record make us Giridih’s premier choice.'],
    ['q' => 'How are payment terms structured for home relocation in Giridih?', 'a' => 'We maintain simple, transparent payment terms: a nominal booking advance upon survey confirmation, a partial loading payment when goods are loaded into the container truck, and the final balance upon doorstep delivery and inspection.'],
    ['q' => 'What should I do with my refrigerator and washing machine before moving day?', 'a' => 'Refrigerators should be completely defrosted, emptied, and dried 24 hours prior to loading. Washing machines must have their drums secured with transit bolts and water drainage hoses disconnected and drained.'],
    ['q' => 'How are heavy marble mandirs, glass showcases, and antique artifacts moved safely?', 'a' => 'Delicate marble mandirs, glass showcases, and heavy artifacts are wrapped in high-density foam padding, encased in heavy-duty bubble wrap, and built into custom-fitted wooden crates lined with shock-absorbent foam.'],
    ['q' => 'Do you provide door-to-door car carrier services from Giridih Town to outstation locations?', 'a' => 'Yes, we pick up your car directly from your doorstep in Giridih Town, conduct a detailed joint vehicle condition survey with photo log, transport it via closed vehicle carrier, and deliver it to your destination address.']
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
        <span class="breadcrumb-item"><a href="<?php echo SITE_URL; ?>packers-and-movers-in-ranchi" title="Jharkhand">Jharkhand</a></span>
        <span class="breadcrumb-separator">/</span>
        <span class="breadcrumb-item active">Packers and Movers in Giridih</span>
      </div>
    </div>
  </div>

  <!-- Hero Section with Lead Form -->
  <section class="hero-section" style="background: linear-gradient(135deg, #0b132b 0%, #1c2541 100%); padding: 65px 0; color: #ffffff;">
    <div class="container">
      <div class="hero-grid" style="display: grid; grid-template-columns: 1.2fr 0.8fr; gap: 40px; align-items: center;">
        
        <!-- Hero Text Column -->
        <div class="hero-text">
          <span class="section-tag" style="background: rgba(245, 158, 11, 0.15); color: #f59e0b; border: 1px solid rgba(245, 158, 11, 0.4); padding: 6px 16px; border-radius: 20px; font-size: 0.85rem; font-weight: 700; text-transform: uppercase; display: inline-block; margin-bottom: 15px;">
            IBA Approved &amp; ISO 9001:2015 Certified Logistics Partner
          </span>
          <h1 style="font-size: 2.8rem; font-weight: 800; line-height: 1.2; margin-bottom: 20px; color: #ffffff;">
            Best <span style="color: #f59e0b;">Packers and Movers in Giridih</span>
          </h1>
          <p style="font-size: 1.15rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 25px;">
            Looking for trustworthy, professional, and affordable Packers and Movers in Giridih? Shree Ashirwad Packers and Movers delivers premium, zero-scratch household shifting, office relocation, bike transport, and car shipping across Giridih Town, Makatpur, Bargaanda, Pachamba, Dumri, Bagodar, and outstation routes. We specialize in IBA-approved GST billing for government employees, bank officers, defense personnel, and business owners.
          </p>

          <div style="display: flex; gap: 15px; flex-wrap: wrap; margin-bottom: 30px;">
            <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Moving Specialist:" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
              <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call Specialist: <?php echo SITE_PHONE; ?>
            </a>
            <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers%20and%20Movers,%20I%20need%20a%20relocation%20quote%20for%20Giridih." title="Chat on WhatsApp" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
              <i class="fab fa-whatsapp" style="margin-right: 8px;"></i> Chat on WhatsApp
            </a>
          </div>

          <div style="display: flex; gap: 25px; font-size: 0.9rem; color: #94a3b8;">
            <span><strong style="color: #f59e0b;">15,000+</strong> Relocations Executed</span>
            <span><strong style="color: #f59e0b;">100%</strong> IBA GST Bills</span>
            <span><strong style="color: #f59e0b;">7-Layer</strong> Protective Wrap</span>
          </div>
        </div>

        <!-- Hero Lead Form Column -->
        <div class="hero-form-card" style="background: rgba(255, 255, 255, 0.05); backdrop-filter: blur(10px); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 16px; padding: 30px; box-shadow: 0 15px 35px rgba(0,0,0,0.4);">
          <h2 style="font-size: 1.4rem; color: #ffffff; margin-bottom: 8px; font-weight: 700; text-align: center;">Get Instant Giridih Shifting Quote</h2>
          <p style="font-size: 0.85rem; color: #94a3b8; text-align: center; margin-bottom: 20px;">Receive an itemized transparent quote on WhatsApp within minutes</p>

          <form action="#" method="POST" onsubmit="sendHeroWhatsAppLead(event, this);">
            <div style="margin-bottom: 14px;">
              <input type="text" name="name" class="form-control" placeholder="Your Full Name" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="margin-bottom: 14px;">
              <input type="tel" name="phone" class="form-control" placeholder="10-Digit Mobile / WhatsApp" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 10px; margin-bottom: 14px;">
              <input type="text" name="move_from" class="form-control" placeholder="From (e.g. Giridih Town)" value="Giridih" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
              <input type="text" name="move_to" class="form-control" placeholder="Destination City / Locality" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="margin-bottom: 16px;">
              <textarea name="message" class="form-control" rows="2" placeholder="Home Size (e.g. 1BHK, 2BHK, 3BHK, Villa) & Planned Date" style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;"></textarea>
            </div>
            <button type="submit" class="btn btn-primary" style="width: 100%; padding: 14px; font-weight: 700; font-size: 1rem; border-radius: 8px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #fff; border: none; cursor: pointer;">
              Get Free Estimate on WhatsApp
            </button>
          </form>
        </div>

      </div>
    </div>
  </section>

  <!-- Key Statistics Banner -->
  <section class="stats-section" style="padding: 45px 0; background: #070d1e; border-bottom: 1px solid rgba(245, 158, 11, 0.2);">
    <div class="container">
      <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 20px; text-align: center;">
        <div style="padding: 20px; background: rgba(23, 42, 84, 0.5); border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">15,000+</div>
          <div style="font-size: 0.9rem; color: #cbd5e1; margin-top: 5px;">Happy Relocations</div>
        </div>
        <div style="padding: 20px; background: rgba(23, 42, 84, 0.5); border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">100%</div>
          <div style="font-size: 0.9rem; color: #cbd5e1; margin-top: 5px;">IBA GST Compliance</div>
        </div>
        <div style="padding: 20px; background: rgba(23, 42, 84, 0.5); border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">7-Layer</div>
          <div style="font-size: 0.9rem; color: #cbd5e1; margin-top: 5px;">Protective Material Wrap</div>
        </div>
        <div style="padding: 20px; background: rgba(23, 42, 84, 0.5); border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">0%</div>
          <div style="font-size: 0.9rem; color: #cbd5e1; margin-top: 5px;">Hidden Moving Fees</div>
        </div>
      </div>
    </div>
  </section>

  <!-- Deep Operational Overview Section -->
  <section style="padding: 75px 0; background: #0b132b; color: #e2e8f0; line-height: 1.8;">
    <div class="container" style="max-width: 950px;">
      
      <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Giridih Logistics Expertise</span>
      <h2 style="font-size: 2.3rem; font-weight: 800; color: #ffffff; margin: 12px 0 22px 0;">
        Comprehensive Shifting &amp; Relocation Services in <span style="color: #f59e0b;">Giridih District</span>
      </h2>

      <p style="font-size: 1.05rem; color: #cbd5e1; margin-bottom: 20px;">
        Giridih is one of North Jharkhand's key administrative, commercial, and cultural hubs, famous for its proximity to Parasnath Hill (Shikharji)—one of the most sacred pilgrimage destinations in India—and its thriving mica, steel rerolling, and grain trade sectors. Connecting major highways between Dhanbad, Hazaribagh, Deoghar, Patna, and Kolkata, Giridih experiences frequent residential and commercial movement.
      </p>

      <p style="font-size: 1.05rem; color: #cbd5e1; margin-bottom: 25px;">
        At <strong>Shree Ashirwad Packers and Movers</strong>, we bring over 15 years of operational excellence to Giridih. Whether you are moving a 1BHK apartment within Makatpur or Bargaanda, transferring a villa from Giridih Town to Ranchi or Kolkata, or shifting heavy commercial inventory, our dedicated team handles every aspect of packing, loading, transit, unloading, and furniture assembly with surgical precision.
      </p>

      <!-- 6 Core Services Grid -->
      <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 22px; margin: 35px 0;">
        
        <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 24px; box-shadow: 0 10px 25px rgba(0,0,0,0.3);">
          <div style="background: rgba(245, 158, 11, 0.15); width: 45px; height: 45px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.3rem; color: #f59e0b; margin-bottom: 14px;"><i class="fas fa-home"></i></div>
          <h3 style="font-size: 1.15rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">Household Shifting</h3>
          <p style="font-size: 0.9rem; color: #cbd5e1; line-height: 1.6; margin: 0;">
            Full-service home moving with 7-layer packaging for furniture, electronics, kitchenware, and delicate glass items.
          </p>
        </div>

        <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 24px; box-shadow: 0 10px 25px rgba(0,0,0,0.3);">
          <div style="background: rgba(245, 158, 11, 0.15); width: 45px; height: 45px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.3rem; color: #f59e0b; margin-bottom: 14px;"><i class="fas fa-building"></i></div>
          <h3 style="font-size: 1.15rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">Office Relocation</h3>
          <p style="font-size: 0.9rem; color: #cbd5e1; line-height: 1.6; margin: 0;">
            Systematic commercial relocation including server racks, modular desks, anti-static computer packing, and zero downtime.
          </p>
        </div>

        <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 24px; box-shadow: 0 10px 25px rgba(0,0,0,0.3);">
          <div style="background: rgba(245, 158, 11, 0.15); width: 45px; height: 45px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.3rem; color: #f59e0b; margin-bottom: 14px;"><i class="fas fa-car"></i></div>
          <h3 style="font-size: 1.15rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">Car Transportation</h3>
          <p style="font-size: 0.9rem; color: #cbd5e1; line-height: 1.6; margin: 0;">
            Doorstep pickup and scratch-free vehicle transport using enclosed car carriers with real-time GPS tracking.
          </p>
        </div>

        <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 24px; box-shadow: 0 10px 25px rgba(0,0,0,0.3);">
          <div style="background: rgba(245, 158, 11, 0.15); width: 45px; height: 45px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.3rem; color: #f59e0b; margin-bottom: 14px;"><i class="fas fa-motorcycle"></i></div>
          <h3 style="font-size: 1.15rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">Two-Wheeler Shipping</h3>
          <p style="font-size: 0.9rem; color: #cbd5e1; line-height: 1.6; margin: 0;">
            Specialized bike packaging using bubble wrap, foam pads, corrugated sheet framing, and hydraulic loading ramps.
          </p>
        </div>

        <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 24px; box-shadow: 0 10px 25px rgba(0,0,0,0.3);">
          <div style="background: rgba(245, 158, 11, 0.15); width: 45px; height: 45px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.3rem; color: #f59e0b; margin-bottom: 14px;"><i class="fas fa-warehouse"></i></div>
          <h3 style="font-size: 1.15rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">Warehouse Storage</h3>
          <p style="font-size: 0.9rem; color: #cbd5e1; line-height: 1.6; margin: 0;">
            Secure, pest-free, CCTV-monitored storage facilities for short-term and long-term household and commercial storage.
          </p>
        </div>

        <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 24px; box-shadow: 0 10px 25px rgba(0,0,0,0.3);">
          <div style="background: rgba(245, 158, 11, 0.15); width: 45px; height: 45px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.3rem; color: #f59e0b; margin-bottom: 14px;"><i class="fas fa-file-invoice"></i></div>
          <h3 style="font-size: 1.15rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">IBA Approved Billing</h3>
          <p style="font-size: 0.9rem; color: #cbd5e1; line-height: 1.6; margin: 0;">
            Complete reimbursement document sets (GST Invoice, LR Copy, Inventory List) tailored for government &amp; bank claims.
          </p>
        </div>

      </div>

    </div>
  </section>

  <!-- Section: Comprehensive Tariff Matrix -->
  <section style="padding: 70px 0; background: linear-gradient(180deg, #0b132b 0%, #16203b 100%); color: #ffffff;">
    <div class="container" style="max-width: 950px;">
      
      <div class="section-header text-center" style="margin-bottom: 45px;">
        <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Transparent Pricing Standard</span>
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin-top: 10px;">
          Giridih Shifting Tariff &amp; Price Breakdown
        </h2>
        <p style="font-size: 1.05rem; color: #cbd5e1; max-width: 800px; margin: 15px auto 0 auto; line-height: 1.7;">
          Clear, upfront pricing with zero hidden fees. Check our standard rates for local Giridih moves and intercity routes:
        </p>
      </div>

      <!-- Tariff Table -->
      <div style="background: rgba(23, 42, 84, 0.7); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 25px; overflow-x: auto; margin-bottom: 30px;">
        <table style="width: 100%; border-collapse: collapse; color: #cbd5e1; font-size: 0.95rem;">
          <thead>
            <tr style="background: rgba(245, 158, 11, 0.2); color: #f59e0b; text-align: left;">
              <th style="padding: 14px; border-bottom: 2px solid rgba(245, 158, 11, 0.4);">Shifting Type / Volume</th>
              <th style="padding: 14px; border-bottom: 2px solid rgba(245, 158, 11, 0.4);">Local (Within Giridih)</th>
              <th style="padding: 14px; border-bottom: 2px solid rgba(245, 158, 11, 0.4);">Giridih to Ranchi / Patna</th>
              <th style="padding: 14px; border-bottom: 2px solid rgba(245, 158, 11, 0.4);">Giridih to Delhi / Metro</th>
            </tr>
          </thead>
          <tbody>
            <tr style="border-bottom: 1px solid rgba(255, 255, 255, 0.1);">
              <td style="padding: 14px; font-weight: 700; color: #ffffff;">1 BHK Household Move</td>
              <td style="padding: 14px; color: #10b981; font-weight: 700;">₹3,500 – ₹6,500</td>
              <td style="padding: 14px; color: #f59e0b; font-weight: 700;">₹8,500 – ₹14,500</td>
              <td style="padding: 14px; color: #38bdf8; font-weight: 700;">₹16,000 – ₹24,000</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255, 255, 255, 0.1); background: rgba(0,0,0,0.15);">
              <td style="padding: 14px; font-weight: 700; color: #ffffff;">2 BHK Household Move</td>
              <td style="padding: 14px; color: #10b981; font-weight: 700;">₹6,500 – ₹10,500</td>
              <td style="padding: 14px; color: #f59e0b; font-weight: 700;">₹12,500 – ₹18,500</td>
              <td style="padding: 14px; color: #38bdf8; font-weight: 700;">₹22,000 – ₹34,000</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255, 255, 255, 0.1);">
              <td style="padding: 14px; font-weight: 700; color: #ffffff;">3 BHK Family Villa Move</td>
              <td style="padding: 14px; color: #10b981; font-weight: 700;">₹10,500 – ₹16,500</td>
              <td style="padding: 14px; color: #f59e0b; font-weight: 700;">₹16,500 – ₹25,500</td>
              <td style="padding: 14px; color: #38bdf8; font-weight: 700;">₹30,000 – ₹45,000</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255, 255, 255, 0.1); background: rgba(0,0,0,0.15);">
              <td style="padding: 14px; font-weight: 700; color: #ffffff;">Car Transportation (Enclosed)</td>
              <td style="padding: 14px; color: #10b981; font-weight: 700;">₹2,500 – ₹4,000</td>
              <td style="padding: 14px; color: #f59e0b; font-weight: 700;">₹5,500 – ₹8,500</td>
              <td style="padding: 14px; color: #38bdf8; font-weight: 700;">₹10,500 – ₹17,500</td>
            </tr>
            <tr>
              <td style="padding: 14px; font-weight: 700; color: #ffffff;">Bike Transport (Crated)</td>
              <td style="padding: 14px; color: #10b981; font-weight: 700;">₹1,500 – ₹2,500</td>
              <td style="padding: 14px; color: #f59e0b; font-weight: 700;">₹3,000 – ₹4,500</td>
              <td style="padding: 14px; color: #38bdf8; font-weight: 700;">₹5,000 – ₹9,000</td>
            </tr>
          </tbody>
        </table>
      </div>

      <p style="font-size: 0.95rem; color: #94a3b8; line-height: 1.6; text-align: center;">
        *Note: Final prices may vary slightly based on exact inventory volume, floor elevation without lifts, specialty crating requirements, and transit insurance options.
      </p>

    </div>
  </section>

  <!-- Section: 7 Verification Pillars -->
  <section style="padding: 70px 0; background: #070d1e; color: #ffffff;">
    <div class="container" style="max-width: 950px;">
      
      <div class="section-header text-center" style="margin-bottom: 45px;">
        <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Safety Assurance</span>
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin-top: 10px;">
          7 Verification Pillars of Shree Ashirwad Packers in Giridih
        </h2>
        <p style="font-size: 1.05rem; color: #cbd5e1; max-width: 800px; margin: 15px auto 0 auto; line-height: 1.7;">
          Why thousands of families and corporate officers trust us for their relocations:
        </p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 20px;">
        
        <div style="background: #101c40; padding: 22px; border-radius: 12px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #ffffff; font-size: 1.1rem; margin-bottom: 8px; font-weight: 700;">1. IBA Approved &amp; Registered</h4>
          <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.6; margin: 0;">Official Indian Banks' Association (IBA) code &amp; GSTIN registration guaranteeing valid employer claim documents.</p>
        </div>

        <div style="background: #101c40; padding: 22px; border-radius: 12px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #ffffff; font-size: 1.1rem; margin-bottom: 8px; font-weight: 700;">2. 7-Layer Packaging Standard</h4>
          <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.6; margin: 0;">Multi-layer wrapping combining bubble wrap, foam corners, corrugated sheets, stretch film, and wooden crates.</p>
        </div>

        <div style="background: #101c40; padding: 22px; border-radius: 12px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #ffffff; font-size: 1.1rem; margin-bottom: 8px; font-weight: 700;">3. In-House Trained Crews</h4>
          <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.6; margin: 0;">Zero daily wage freelancers; our permanent move supervisors and carpenters are background-verified professionals.</p>
        </div>

        <div style="background: #101c40; padding: 22px; border-radius: 12px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #ffffff; font-size: 1.1rem; margin-bottom: 8px; font-weight: 700;">4. Dedicated Container Fleet</h4>
          <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.6; margin: 0;">Fully enclosed, weatherproof container trucks protecting goods from rain, dust, highway shocks, and pilferage.</p>
        </div>

        <div style="background: #101c40; padding: 22px; border-radius: 12px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #ffffff; font-size: 1.1rem; margin-bottom: 8px; font-weight: 700;">5. Real-Time GPS Tracking</h4>
          <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.6; margin: 0;">Satellite-monitored intercity trucks providing location updates from dispatch to doorstep unloading.</p>
        </div>

        <div style="background: #101c40; padding: 22px; border-radius: 12px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #ffffff; font-size: 1.1rem; margin-bottom: 8px; font-weight: 700;">6. Comprehensive Transit Insurance</h4>
          <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.6; margin: 0;">100% financial coverage for declared goods against highway accidents, overturned vehicles, or acts of nature.</p>
        </div>

      </div>

      <div style="background: #101c40; padding: 22px; border-radius: 12px; border-left: 4px solid #f59e0b; margin-top: 20px;">
        <h4 style="color: #ffffff; font-size: 1.1rem; margin-bottom: 8px; font-weight: 700;">7. Written Price Contract (Zero Hidden Fees)</h4>
        <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.6; margin: 0;">Every quote is backed by an itemized contract detailing labor costs, packing materials, toll taxes, and vehicle charges with zero surprise additions on delivery day.</p>
      </div>

    </div>
  </section>

  <!-- Section: Giridih Neighborhoods & Intercity Grids -->
  <section style="padding: 70px 0; background: #0b132b; color: #ffffff;">
    <div class="container" style="max-width: 950px;">
      
      <div class="section-header text-center" style="margin-bottom: 45px;">
        <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Service Network</span>
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin-top: 10px;">
          Locations We Serve in <span style="color: #f59e0b;">Giridih &amp; Beyond</span>
        </h2>
      </div>

      <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 25px;">
        
        <!-- Local Neighborhoods Column -->
        <div style="background: #172a54; padding: 25px; border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.3);">
          <h3 style="font-size: 1.2rem; color: #f59e0b; margin-bottom: 15px; font-weight: 700;">Local Coverage in Giridih</h3>
          <ul style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.9; padding-left: 18px; margin: 0;">
            <li><strong>Giridih Town:</strong> District HQ, commercial centers &amp; main markets.</li>
            <li><strong>Makatpur:</strong> Major residential area &amp; educational hub.</li>
            <li><strong>Bargaanda:</strong> Prime residential colonies &amp; apartment complexes.</li>
            <li><strong>Pachamba:</strong> Historic commercial market &amp; residential locality.</li>
            <li><strong>Dumri &amp; Bagodar:</strong> Grand Trunk Road (NH-19) logistics corridor.</li>
            <li><strong>Parasnath / Isri:</strong> Pilgrimage township &amp; trading hub.</li>
          </ul>
        </div>

        <!-- Popular Routes Column -->
        <div style="background: #172a54; padding: 25px; border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.3);">
          <h3 style="font-size: 1.2rem; color: #f59e0b; margin-bottom: 15px; font-weight: 700;">Popular Outstation Routes</h3>
          <ul style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.9; padding-left: 18px; margin: 0;">
            <li><strong>Giridih to Ranchi:</strong> State capital relocation express (200 km).</li>
            <li><strong>Giridih to Dhanbad:</strong> Inter-district container transport (60 km).</li>
            <li><strong>Giridih to Patna:</strong> Interstate highway shipping corridor (240 km).</li>
            <li><strong>Giridih to Kolkata:</strong> Direct trade &amp; home shifting route (300 km).</li>
            <li><strong>Giridih to Deoghar:</strong> Regional intercity relocation (65 km).</li>
            <li><strong>Giridih to Delhi NCR:</strong> Dedicated long-distance closed containers.</li>
          </ul>
        </div>

      </div>

    </div>
  </section>

  <!-- Section: Frequently Asked Questions (20 Comprehensive FAQs) -->
  <section style="padding: 70px 0; background: #070d1e; color: #ffffff;">
    <div class="container" style="max-width: 950px;">
      
      <div class="section-header text-center" style="margin-bottom: 45px;">
        <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Customer Assistance</span>
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin-top: 10px;">
          Frequently Asked Questions About <span style="color: #f59e0b;">Shifting in Giridih</span>
        </h2>
        <p style="font-size: 1.05rem; color: #cbd5e1; max-width: 800px; margin: 15px auto 0 auto; line-height: 1.7;">
          Everything you need to know about our relocation process, packing quality, pricing, and IBA billing in Giridih:
        </p>
      </div>

      <div style="display: flex; flex-direction: column; gap: 16px;">
        <?php foreach ($faq_list as $index => $faq): ?>
        <div style="background: #101c40; padding: 20px 24px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h3 style="font-size: 1.08rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Q<?php echo ($index + 1); ?>: <?php echo htmlspecialchars($faq['q']); ?></h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.7;"><?php echo htmlspecialchars($faq['a']); ?></p>
        </div>
        <?php endforeach; ?>
      </div>

    </div>
  </section>

  <!-- Section: Call To Action Banner -->
  <section style="padding: 70px 0; background: linear-gradient(135deg, #172a54 0%, #0b132b 100%); border-top: 1.5px solid rgba(245, 158, 11, 0.4); color: #ffffff;">
    <div class="container" style="max-width: 900px; text-align: center;">
      
      <span class="section-tag" style="background: rgba(245, 158, 11, 0.2); color: #f59e0b; padding: 6px 16px; border-radius: 20px; font-size: 0.85rem; font-weight: 700; text-transform: uppercase;">
        Zero-Stress Relocation Guaranteed
      </span>

      <h2 style="font-size: 2.3rem; font-weight: 800; margin: 15px 0 15px 0; color: #ffffff;">
        Book Giridih’s Most Trusted <span style="color: #f59e0b;">Packers and Movers</span>
      </h2>

      <p style="font-size: 1.05rem; color: #cbd5e1; max-width: 750px; margin: 0 auto 30px auto; line-height: 1.7;">
        Contact our moving specialists today for a free pre-move survey, 7-layer protective packaging, and IBA-approved billing documentation.
      </p>

      <div style="display: flex; gap: 15px; justify-content: center; flex-wrap: wrap;">
        <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Now:" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 30px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1.05rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
          <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call Now: <?php echo SITE_PHONE; ?>
        </a>
        <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers%20and%20Movers,%20I%20want%20to%20book%20a%20household%20shifting%20survey%20in%20Giridih." title="Chat on WhatsApp" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 30px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1.05rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
          <i class="fab fa-whatsapp" style="margin-right: 8px;"></i> Chat on WhatsApp
        </a>
      </div>

    </div>
  </section>

  <!-- Real Moving Proof Section -->
  <section style="padding: 45px 0; background: #f8fafc; border-top: 1px solid #e2e8f0;">
    <div class="container" style="max-width: 1100px; margin: 0 auto; padding: 0 15px;">
      <div style="display: grid; gap: 24px; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); align-items: center;">
        <div>
          <span style="display: inline-block; color: #d32f2f; font-weight: 700; text-transform: uppercase; font-size: 0.8rem; letter-spacing: 1px; margin-bottom: 10px;">Real Operational Proof</span>
          <h3 style="font-size: 1.55rem; color: #0f172a; font-weight: 800; margin: 0 0 12px 0;">Household packing and loading work from our team</h3>
          <p style="font-size: 1rem; color: #475569; line-height: 1.8; margin: 0;">Our crew uses professional wrapping materials and careful methods for household goods, furniture, and fragile items. These photos show real packing work from our moving operations.</p>
        </div>
        <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 14px;">
          <img title="Shree Ashirwad Packers and Movers Giridih" src="<?php echo SITE_URL; ?>assets/images/gallery/gallery-5.webp" alt="Heavy carton boxes and foam sheet household packing" style="width: 100%; height: 250px; object-fit: cover; border-radius: 12px; border: 1px solid #e2e8f0; box-shadow: 0 4px 12px rgba(0,0,0,0.08);" loading="lazy">
          <img title="Shree Ashirwad Packers and Movers Giridih" src="<?php echo SITE_URL; ?>assets/images/gallery/gallery-3.webp" alt="Wooden crate protection for fragile household items" style="width: 100%; height: 250px; object-fit: cover; border-radius: 12px; border: 1px solid #e2e8f0; box-shadow: 0 4px 12px rgba(0,0,0,0.08);" loading="lazy">
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
  
  var message = "Hello Shree Ashirwad Packers & Movers,\n\nI would like to request a Shifting Quote for Giridih:\n- Name: " + name + "\n- Phone: " + phone + "\n- Moving From: " + moveFrom + "\n- Destination: " + moveTo;
  
  if (extraMsg && extraMsg.trim() !== '') {
    message += "\n- Shifting Details: " + extraMsg;
  }
  
  var whatsappUrl = "https://api.whatsapp.com/send?phone=918409531615&text=" + encodeURIComponent(message);
  window.location.href = whatsappUrl;
}
</script>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
