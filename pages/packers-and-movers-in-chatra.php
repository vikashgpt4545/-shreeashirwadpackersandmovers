<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "Packers and Movers in Chatra | 8409531615";
$page_desc = "Professional Packers and Movers in Chatra offering 100% safe household shifting, office relocation, vehicle transport & warehousing with IBA GST billing. Call 8409531615.";
$page_keywords = "packers and movers in chatra, best packers movers chatra, house shifting chatra, chatra relocation services, iba approved movers chatra, home shifting services chatra, car transport chatra, bike shifting chatra, local movers chatra, intercity packers chatra, office relocation chatra, warehouse storage chatra, shifting charges chatra, ashrivad packers chatra, moving company chatra";

$page_city = "Chatra";

$faq_list = [
    [
        'q' => 'Do you provide professional household shifting services in Chatra?',
        'a' => 'Yes, Shree Ashirwad Packers and Movers provides complete, end-to-end household shifting services across Chatra Sadar, Main Road, Post Office Chowk, Kutchery Road, and all surrounding blocks in Chatra district.'
    ],
    [
        'q' => 'How much does local house relocation cost within Chatra town?',
        'a' => 'Local household shifting within Chatra starts at ₹3,000 to ₹5,500 for a 1BHK, ₹5,500 to ₹9,500 for a 2BHK, and ₹9,500 to ₹15,000 for a 3BHK residence, depending on item volume, packing material needs, and floor levels.'
    ],
    [
        'q' => 'Are your moving bills valid for official government and bank GST claims in Chatra?',
        'a' => 'Yes, we issue 100% genuine, IBA-compliant GST invoices, Lorry Receipts (LR), money receipts, and itemized packing lists accepted by government departments, PSU banks, police personnel, and corporate employers in Chatra.'
    ],
    [
        'q' => 'How many days prior to the shifting date should I book packers in Chatra?',
        'a' => 'We recommend booking 2 to 3 days in advance for local shifting within Chatra town, and 4 to 5 days prior for intercity relocations to Ranchi, Patna, Kolkata, or Delhi.'
    ],
    [
        'q' => 'What packaging materials are used for protecting goods during Chatra moves?',
        'a' => 'We utilize a 7-layer safety packaging system consisting of heavy air-bubble rolls, 5-ply corrugated fiberboard sheets, stretch film wrap, foam edge guards, and custom wooden crating for delicate items.'
    ],
    [
        'q' => 'Do you dismantle and reassemble modular furniture in Chatra homes?',
        'a' => 'Yes, our trained carpentering technicians handle the dismantling and careful reassembly of double beds, modular wardrobes, dining tables, and wall-mounted units at your destination.'
    ],
    [
        'q' => 'Do you offer bike and car transport services from Chatra to other states?',
        'a' => 'Yes, we operate specialized covered car carrier trailers and belt-anchored bike container trucks for zero-scratch vehicle transportation nationwide from Chatra.'
    ],
    [
        'q' => 'Is transit insurance provided for home relocation originating from Chatra?',
        'a' => 'Yes, we provide 100% full-value transit insurance policy documentation that protects your household articles against road risks, fire, or accidental damage.'
    ],
    [
        'q' => 'Can you handle commercial office and shop relocation in Chatra?',
        'a' => 'Yes, we manage commercial office moving, IT hardware shifting, commercial inventory transport, and shop relocation with minimal operational downtime.'
    ],
    [
        'q' => 'How can I obtain an instant shifting quote in Chatra?',
        'a' => 'Call +91 8409531615 or submit your requirements on WhatsApp to receive an instant transparent quotation from our move coordinator.'
    ],
    [
        'q' => 'Do you provide warehouse storage facilities in Chatra district?',
        'a' => 'Yes, we offer clean, CCTV-monitored, moisture-proof short-term and long-term household goods storage and warehousing facilities near Chatra.'
    ],
    [
        'q' => 'How are fragile glassware, electronics, and LED TVs packed?',
        'a' => 'Fragile items and LED TVs undergo multi-layer bubble wrapping, foam corner reinforcement, heavy corrugated boxing, and custom wooden crating.'
    ],
    [
        'q' => 'Are there any hidden costs added to the final moving bill in Chatra?',
        'a' => 'No, we operate with 100% price transparency. The written quote provided after pre-move assessment includes all packing, labor, loading, freight, and unloading costs.'
    ],
    [
        'q' => 'Do your packing teams operate on Sundays and public holidays in Chatra?',
        'a' => 'Yes, our packing and moving crews are available 365 days a year, including weekends and official holidays.'
    ],
    [
        'q' => 'Can I track my moving truck during intercity transit from Chatra?',
        'a' => 'Yes, all our intercity container transport vehicles are equipped with active GPS tracking hardware for real-time location updates.'
    ],
    [
        'q' => 'What is the estimated delivery time from Chatra to Ranchi, Patna, or Kolkata?',
        'a' => 'Delivery from Chatra to Ranchi takes approximately 4 to 6 hours, to Patna takes 6 to 8 hours, and to Kolkata takes 18 to 24 hours.'
    ],
    [
        'q' => 'Do you transport single furniture items or partial household loads from Chatra?',
        'a' => 'Yes, we offer part-load container services for individual furniture items, electronic appliances, or student luggage shipments.'
    ],
    [
        'q' => 'Which items are prohibited from being loaded into the moving vehicle?',
        'a' => 'Hazardous chemicals, flammable liquids, compressed gas cylinders, explosives, contraband, and perishable food items are strictly prohibited.'
    ],
    [
        'q' => 'Are stair-carrying charges included if the Chatra building lacks an elevator?',
        'a' => 'Floor elevation and stair carrying requirements are assessed during the initial survey and explicitly specified in your quotation.'
    ],
    [
        'q' => 'Why is Shree Ashirwad Packers considered the most trusted choice in Chatra?',
        'a' => 'With over 15 years of industry experience, 2,800+ successful relocations, 100% IBA GST bill compliance, and zero damage rates, we are Chatra\'s leading relocation brand.'
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
          <li class="breadcrumb-item"><span style="margin: 0 4px;">/</span> <a href="<?php echo SITE_URL; ?>packers-and-movers-in-chatra" style="color: #2563eb; text-decoration: none;">Chatra</a></li>
          <li class="breadcrumb-item active" aria-current="page" style="color: #1e293b; font-weight: 600;"><span style="margin: 0 4px;">/</span> Packers and Movers in Chatra</li>
        </ol>
      </nav>
    </div>
  </div>

  <!-- Hero Section -->
  <section class="hero-section" style="background: linear-gradient(135deg, #0f172a 0%, #1e3a8a 100%); color: #ffffff; padding: 60px 0; position: relative;" id="hero-chatra-hub">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 15px; display: flex; flex-wrap: wrap; align-items: center; justify-content: space-between; gap: 40px;">
      
      <div class="hero-content" style="flex: 1 1 500px;">
        <span style="display: inline-block; background: rgba(37, 99, 235, 0.25); color: #60a5fa; border: 1px solid rgba(96, 165, 250, 0.3); padding: 6px 16px; border-radius: 50px; font-size: 0.85rem; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 20px;">
          Top-Rated Relocation Brand in Chatra District
        </span>
        <h1 style="font-size: 2.8rem; font-weight: 800; line-height: 1.2; margin-bottom: 20px; color: #ffffff;">
          Packers and Movers in Chatra
        </h1>
        <p style="font-size: 1.15rem; line-height: 1.8; color: #94a3b8; margin-bottom: 30px;">
          Welcome to Shree Ashirwad Packers and Movers, Chatra's most dependable and IBA-compliant home shifting, office relocation, vehicle shipping, and storage partner. Operating across Chatra Sadar, Main Road, Post Office Chowk, and all 12 block headquarters, we deliver 100% damage-free moving solutions backed by 7-layer safety packaging, dedicated container transport, full transit insurance, and official GST bills.
        </p>
        
        <div class="hero-cta-buttons" style="display: flex; flex-wrap: wrap; gap: 15px; margin-bottom: 30px;">
          <a href="tel:+918409531615" class="btn-call" style="background: #2563eb; color: #ffffff; padding: 14px 28px; border-radius: 8px; font-weight: 700; text-decoration: none; display: inline-flex; align-items: center; gap: 10px; font-size: 1rem; box-shadow: 0 10px 25px rgba(37, 99, 235, 0.4);" id="hero-call-btn">
            <i class="fa-solid fa-phone"></i> Call +91 8409531615
          </a>
          <a href="https://api.whatsapp.com/send?phone=918409531615&text=Hello%20Shree%20Ashirwad%20Packers%20and%20Movers,%20I%20need%20a%20shifting%20quote%20in%20Chatra." class="btn-whatsapp" style="background: #22c55e; color: #ffffff; padding: 14px 28px; border-radius: 8px; font-weight: 700; text-decoration: none; display: inline-flex; align-items: center; gap: 10px; font-size: 1rem; box-shadow: 0 10px 25px rgba(34, 197, 94, 0.4);" id="hero-wa-btn">
            <i class="fa-brands fa-whatsapp"></i> WhatsApp Quote
          </a>
        </div>

        <div class="hero-badges" style="display: flex; gap: 20px; flex-wrap: wrap; border-top: 1px solid rgba(255, 255, 255, 0.1); padding-top: 20px;">
          <div style="color: #cbd5e1; font-size: 0.9rem; display: flex; align-items: center; gap: 8px;">
            <i class="fa-solid fa-shield-halved" style="color: #60a5fa;"></i> 100% IBA Compliant GST Bills
          </div>
          <div style="color: #cbd5e1; font-size: 0.9rem; display: flex; align-items: center; gap: 8px;">
            <i class="fa-solid fa-box-open" style="color: #60a5fa;"></i> 7-Layer Safety Packaging
          </div>
          <div style="color: #cbd5e1; font-size: 0.9rem; display: flex; align-items: center; gap: 8px;">
            <i class="fa-solid fa-truck-ramp-box" style="color: #60a5fa;"></i> GPS Container Fleet
          </div>
        </div>
      </div>

      <!-- Quick Lead Form -->
      <div class="hero-form-card" style="flex: 0 1 420px; background: #ffffff; border-radius: 12px; padding: 30px; color: #1e293b; box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);" id="chatra-lead-form-box">
        <h3 style="font-size: 1.4rem; font-weight: 700; margin-bottom: 8px; color: #0f172a;">Get Free Shifting Quote</h3>
        <p style="font-size: 0.88rem; color: #64748b; margin-bottom: 20px;">Fast, zero-obligation estimate within 5 minutes!</p>
        
        <form onsubmit="sendHeroWhatsAppLead(event, this);" id="hero-quick-form">
          <div style="margin-bottom: 14px;">
            <input type="text" name="name" placeholder="Your Full Name" required style="width: 100%; padding: 12px 14px; border: 1px solid #cbd5e1; border-radius: 6px; font-size: 0.95rem; box-sizing: border-box;">
          </div>
          <div style="margin-bottom: 14px;">
            <input type="tel" name="phone" placeholder="Mobile Number" required style="width: 100%; padding: 12px 14px; border: 1px solid #cbd5e1; border-radius: 6px; font-size: 0.95rem; box-sizing: border-box;">
          </div>
          <div style="margin-bottom: 14px;">
            <input type="text" name="move_from" placeholder="Pickup Location (e.g. Chatra Sadar)" required style="width: 100%; padding: 12px 14px; border: 1px solid #cbd5e1; border-radius: 6px; font-size: 0.95rem; box-sizing: border-box;">
          </div>
          <div style="margin-bottom: 14px;">
            <input type="text" name="move_to" placeholder="Destination City (e.g. Ranchi / Patna)" required style="width: 100%; padding: 12px 14px; border: 1px solid #cbd5e1; border-radius: 6px; font-size: 0.95rem; box-sizing: border-box;">
          </div>
          <div style="margin-bottom: 18px;">
            <textarea name="message" placeholder="Details of items (e.g. 2BHK House, Bike, Car)" rows="3" style="width: 100%; padding: 12px 14px; border: 1px solid #cbd5e1; border-radius: 6px; font-size: 0.95rem; box-sizing: border-box;"></textarea>
          </div>
          <button type="submit" style="width: 100%; background: #2563eb; color: #ffffff; border: none; padding: 14px; border-radius: 6px; font-size: 1rem; font-weight: 700; cursor: pointer; transition: background 0.3s;" id="submit-lead-btn">
            Calculate Moving Cost <i class="fa-solid fa-arrow-right" style="margin-left: 6px;"></i>
          </button>
        </form>
      </div>

    </div>
  </section>

  <!-- Performance & Trust Metrics Bar -->
  <section class="trust-metrics-section" style="background: #ffffff; padding: 35px 0; border-bottom: 1px solid #e2e8f0;" id="metrics-bar">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 15px;">
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 25px; text-align: center;">
        <div style="padding: 15px; border-right: 1px solid #f1f5f9;">
          <div style="font-size: 2.2rem; font-weight: 800; color: #2563eb;">15+ Years</div>
          <div style="font-size: 0.95rem; color: #64748b; font-weight: 600; margin-top: 4px;">Industry Experience</div>
        </div>
        <div style="padding: 15px; border-right: 1px solid #f1f5f9;">
          <div style="font-size: 2.2rem; font-weight: 800; color: #2563eb;">2,800+</div>
          <div style="font-size: 0.95rem; color: #64748b; font-weight: 600; margin-top: 4px;">Successful Moves</div>
        </div>
        <div style="padding: 15px; border-right: 1px solid #f1f5f9;">
          <div style="font-size: 2.2rem; font-weight: 800; color: #2563eb;">100%</div>
          <div style="font-size: 0.95rem; color: #64748b; font-weight: 600; margin-top: 4px;">IBA GST Compliance</div>
        </div>
        <div style="padding: 15px;">
          <div style="font-size: 2.2rem; font-weight: 800; color: #2563eb;">0% Damage</div>
          <div style="font-size: 0.95rem; color: #64748b; font-weight: 600; margin-top: 4px;">Zero Damage Track Record</div>
        </div>
      </div>
    </div>
  </section>

  <!-- Technical Logistics Capabilities Grid -->
  <section class="capabilities-section" style="background: #f8fafc; padding: 60px 0;" id="capabilities">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 15px;">
      <div style="text-align: center; margin-bottom: 45px;">
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #0f172a; margin-bottom: 12px;">Comprehensive Relocation Services in Chatra</h2>
        <p style="font-size: 1.05rem; color: #64748b; max-width: 750px; margin: 0 auto;">Tailored logistics solutions engineered for households, government officers, commercial establishments, and vehicle owners across Chatra district.</p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 30px;">
        
        <!-- Service Card 1 -->
        <div style="background: #ffffff; padding: 30px; border-radius: 10px; border: 1px solid #e2e8f0; box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05);">
          <div style="width: 55px; height: 55px; background: rgba(37, 99, 235, 0.1); border-radius: 8px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
            <i class="fa-solid fa-house-chimney" style="font-size: 1.6rem; color: #2563eb;"></i>
          </div>
          <h3 style="font-size: 1.3rem; font-weight: 700; color: #0f172a; margin-bottom: 12px;">Household Shifting</h3>
          <p style="color: #64748b; line-height: 1.7; font-size: 0.95rem;">Full-service residential relocation covering 1BHK, 2BHK, 3BHK, and villa moves in Chatra town. Includes 7-layer bubble wrapping, furniture disassembly, heavy lifting, and destination setup.</p>
        </div>

        <!-- Service Card 2 -->
        <div style="background: #ffffff; padding: 30px; border-radius: 10px; border: 1px solid #e2e8f0; box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05);">
          <div style="width: 55px; height: 55px; background: rgba(37, 99, 235, 0.1); border-radius: 8px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
            <i class="fa-solid fa-building-user" style="font-size: 1.6rem; color: #2563eb;"></i>
          </div>
          <h3 style="font-size: 1.3rem; font-weight: 700; color: #0f172a; margin-bottom: 12px;">Office & Commercial Moving</h3>
          <p style="color: #64748b; line-height: 1.7; font-size: 0.95rem;">Seamless business relocation designed for offices, bank branches, shops, and IT setups in Chatra. Minimal operational downtime with organized document archiving and hardware safety.</p>
        </div>

        <!-- Service Card 3 -->
        <div style="background: #ffffff; padding: 30px; border-radius: 10px; border: 1px solid #e2e8f0; box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05);">
          <div style="width: 55px; height: 55px; background: rgba(37, 99, 235, 0.1); border-radius: 8px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
            <i class="fa-solid fa-car-side" style="font-size: 1.6rem; color: #2563eb;"></i>
          </div>
          <h3 style="font-size: 1.3rem; font-weight: 700; color: #0f172a; margin-bottom: 12px;">Car & Bike Shipping</h3>
          <p style="color: #64748b; line-height: 1.7; font-size: 0.95rem;">Scratch-free vehicle transport using covered hydraulic car trailers and specialized belt-fastened bike container trucks with door-to-door delivery from Chatra.</p>
        </div>

        <!-- Service Card 4 -->
        <div style="background: #ffffff; padding: 30px; border-radius: 10px; border: 1px solid #e2e8f0; box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05);">
          <div style="width: 55px; height: 55px; background: rgba(37, 99, 235, 0.1); border-radius: 8px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
            <i class="fa-solid fa-warehouse" style="font-size: 1.6rem; color: #2563eb;"></i>
          </div>
          <h3 style="font-size: 1.3rem; font-weight: 700; color: #0f172a; margin-bottom: 12px;">Warehouse Storage</h3>
          <p style="color: #64748b; line-height: 1.7; font-size: 0.95rem;">Secure, CCTV-monitored, pest-controlled storage facilities near Chatra. Flexible short-term and long-term warehousing for household articles and commercial goods.</p>
        </div>

        <!-- Service Card 5 -->
        <div style="background: #ffffff; padding: 30px; border-radius: 10px; border: 1px solid #e2e8f0; box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05);">
          <div style="width: 55px; height: 55px; background: rgba(37, 99, 235, 0.1); border-radius: 8px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
            <i class="fa-solid fa-file-invoice-dollar" style="font-size: 1.6rem; color: #2563eb;"></i>
          </div>
          <h3 style="font-size: 1.3rem; font-weight: 700; color: #0f172a; margin-bottom: 12px;">IBA GST Billing</h3>
          <p style="color: #64748b; line-height: 1.7; font-size: 0.95rem;">Official 100% claimable GST invoices, money receipts, Lorry Receipts (LR), and itemized inventory lists tailored for government employees, police, and corporate staff in Chatra.</p>
        </div>

        <!-- Service Card 6 -->
        <div style="background: #ffffff; padding: 30px; border-radius: 10px; border: 1px solid #e2e8f0; box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05);">
          <div style="width: 55px; height: 55px; background: rgba(37, 99, 235, 0.1); border-radius: 8px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
            <i class="fa-solid fa-route" style="font-size: 1.6rem; color: #2563eb;"></i>
          </div>
          <h3 style="font-size: 1.3rem; font-weight: 700; color: #0f172a; margin-bottom: 12px;">Intercity Relocation</h3>
          <p style="color: #64748b; line-height: 1.7; font-size: 0.95rem;">Direct daily intercity container transport from Chatra to Ranchi, Patna, Gaya, Kolkata, Delhi, Bangalore, Mumbai, and all major cities across India.</p>
        </div>

      </div>
    </div>
  </section>

  <!-- Relocation Process Workflow -->
  <section class="workflow-section" style="background: #ffffff; padding: 60px 0; border-top: 1px solid #e2e8f0;" id="workflow">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 15px;">
      <div style="text-align: center; margin-bottom: 50px;">
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #0f172a; margin-bottom: 12px;">Our 5-Stage Moving Process in Chatra</h2>
        <p style="font-size: 1.05rem; color: #64748b; max-width: 700px; margin: 0 auto;">A systematic, battle-tested moving workflow designed for stress-free household and commercial relocation.</p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 20px;">
        
        <div style="background: #f8fafc; padding: 25px 20px; border-radius: 8px; border-left: 4px solid #2563eb; position: relative;">
          <span style="font-size: 2rem; font-weight: 800; color: rgba(37, 99, 235, 0.2); position: absolute; right: 15px; top: 10px;">01</span>
          <h4 style="font-size: 1.1rem; font-weight: 700; color: #0f172a; margin-bottom: 8px;">Pre-Move Survey</h4>
          <p style="font-size: 0.88rem; color: #64748b; line-height: 1.6; margin: 0;">Comprehensive home inspection or digital evaluation of your goods to provide a binding written price quote.</p>
        </div>

        <div style="background: #f8fafc; padding: 25px 20px; border-radius: 8px; border-left: 4px solid #2563eb; position: relative;">
          <span style="font-size: 2rem; font-weight: 800; color: rgba(37, 99, 235, 0.2); position: absolute; right: 15px; top: 10px;">02</span>
          <h4 style="font-size: 1.1rem; font-weight: 700; color: #0f172a; margin-bottom: 8px;">7-Layer Packing</h4>
          <p style="font-size: 0.88rem; color: #64748b; line-height: 1.6; margin: 0;">Multi-layered protective packing using heavy bubble wrap, corrugated sheets, foam guards, and wooden crates.</p>
        </div>

        <div style="background: #f8fafc; padding: 25px 20px; border-radius: 8px; border-left: 4px solid #2563eb; position: relative;">
          <span style="font-size: 2rem; font-weight: 800; color: rgba(37, 99, 235, 0.2); position: absolute; right: 15px; top: 10px;">03</span>
          <h4 style="font-size: 1.1rem; font-weight: 700; color: #0f172a; margin-bottom: 8px;">Safe Loading</h4>
          <p style="font-size: 0.88rem; color: #64748b; line-height: 1.6; margin: 0;">Expert handling and secure stacking inside dedicated, weather-proof container transport trucks.</p>
        </div>

        <div style="background: #f8fafc; padding: 25px 20px; border-radius: 8px; border-left: 4px solid #2563eb; position: relative;">
          <span style="font-size: 2rem; font-weight: 800; color: rgba(37, 99, 235, 0.2); position: absolute; right: 15px; top: 10px;">04</span>
          <h4 style="font-size: 1.1rem; font-weight: 700; color: #0f172a; margin-bottom: 8px;">GPS Transit</h4>
          <p style="font-size: 0.88rem; color: #64748b; line-height: 1.6; margin: 0;">Live GPS satellite tracking of your shipment during highway transit with complete transit insurance cover.</p>
        </div>

        <div style="background: #f8fafc; padding: 25px 20px; border-radius: 8px; border-left: 4px solid #2563eb; position: relative;">
          <span style="font-size: 2rem; font-weight: 800; color: rgba(37, 99, 235, 0.2); position: absolute; right: 15px; top: 10px;">05</span>
          <h4 style="font-size: 1.1rem; font-weight: 700; color: #0f172a; margin-bottom: 8px;">Door Unpacking</h4>
          <p style="font-size: 0.88rem; color: #64748b; line-height: 1.6; margin: 0;">Careful unloading, unpacking, furniture reassembly, and item positioning at your new Chatra residence.</p>
        </div>

      </div>
    </div>
  </section>

  <!-- Transparent Pricing & Tariff Matrix -->
  <section class="pricing-section" style="background: #f8fafc; padding: 60px 0; border-top: 1px solid #e2e8f0;" id="pricing-matrix">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 15px;">
      <div style="text-align: center; margin-bottom: 45px;">
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #0f172a; margin-bottom: 12px;">Transparent Shifting Charges in Chatra</h2>
        <p style="font-size: 1.05rem; color: #64748b; max-width: 750px; margin: 0 auto;">No hidden surprises! Explore estimated price charts for local shifting within Chatra and intercity moves across India.</p>
      </div>

      <!-- Local Pricing Table -->
      <div style="background: #ffffff; border-radius: 10px; border: 1px solid #e2e8f0; overflow: hidden; margin-bottom: 40px; box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05);">
        <div style="background: #0f172a; color: #ffffff; padding: 18px 25px; font-size: 1.2rem; font-weight: 700;">
          <i class="fa-solid fa-calculator" style="color: #60a5fa; margin-right: 10px;"></i> Estimated Local Shifting Rates in Chatra Town
        </div>
        <div style="overflow-x: auto;">
          <table style="width: 100%; border-collapse: collapse; text-align: left; font-size: 0.95rem;">
            <thead>
              <tr style="background: #f1f5f9; color: #1e293b; font-weight: 700; border-bottom: 1px solid #e2e8f0;">
                <th style="padding: 15px 20px;">Residence / Shift Type</th>
                <th style="padding: 15px 20px;">Packing Charges</th>
                <th style="padding: 15px 20px;">Labor & Handling</th>
                <th style="padding: 15px 20px;">Transport Vehicle</th>
                <th style="padding: 15px 20px;">Total Approx Rate</th>
              </tr>
            </thead>
            <tbody style="color: #475569;">
              <tr style="border-bottom: 1px solid #f1f5f9;">
                <td style="padding: 15px 20px; font-weight: 600; color: #0f172a;">1 BHK House Relocation</td>
                <td style="padding: 15px 20px;">₹1,200 - ₹2,000</td>
                <td style="padding: 15px 20px;">₹1,000 - ₹1,800</td>
                <td style="padding: 15px 20px;">₹1,500 - ₹2,200</td>
                <td style="padding: 15px 20px; font-weight: 700; color: #2563eb;">₹3,000 - ₹5,500</td>
              </tr>
              <tr style="border-bottom: 1px solid #f1f5f9; background: #fafafa;">
                <td style="padding: 15px 20px; font-weight: 600; color: #0f172a;">2 BHK House Relocation</td>
                <td style="padding: 15px 20px;">₹2,200 - ₹3,500</td>
                <td style="padding: 15px 20px;">₹1,800 - ₹3,000</td>
                <td style="padding: 15px 20px;">₹2,200 - ₹3,500</td>
                <td style="padding: 15px 20px; font-weight: 700; color: #2563eb;">₹5,500 - ₹9,500</td>
              </tr>
              <tr style="border-bottom: 1px solid #f1f5f9;">
                <td style="padding: 15px 20px; font-weight: 600; color: #0f172a;">3 BHK / Villa Relocation</td>
                <td style="padding: 15px 20px;">₹3,500 - ₹5,500</td>
                <td style="padding: 15px 20px;">₹3,000 - ₹4,500</td>
                <td style="padding: 15px 20px;">₹3,500 - ₹5,000</td>
                <td style="padding: 15px 20px; font-weight: 700; color: #2563eb;">₹9,500 - ₹15,000</td>
              </tr>
              <tr style="background: #fafafa;">
                <td style="padding: 15px 20px; font-weight: 600; color: #0f172a;">Vehicle / Bike Transport</td>
                <td style="padding: 15px 20px;">₹800 - ₹1,200</td>
                <td style="padding: 15px 20px;">₹500 - ₹800</td>
                <td style="padding: 15px 20px;">₹1,500 - ₹2,500</td>
                <td style="padding: 15px 20px; font-weight: 700; color: #2563eb;">₹2,500 - ₹4,500</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

    </div>
  </section>

  <!-- Comprehensive Local Content & Relocation Guide Section (1800+ words target) -->
  <section class="content-guide-section" style="background: #ffffff; padding: 60px 0;" id="detailed-guide">
    <div class="container" style="max-width: 1100px; margin: 0 auto; padding: 0 15px; color: #334155; line-height: 1.8;">
      
      <h2 style="font-size: 2.2rem; font-weight: 800; color: #0f172a; margin-bottom: 25px;">Complete Guide to Packers and Movers in Chatra</h2>

      <p style="font-size: 1.05rem; margin-bottom: 20px;">
        Relocating your home, office, or vehicle within or outside Chatra requires precise logistics planning, reliable road transport, and high-quality packing materials. As the leading moving agency in Chatra district, Shree Ashirwad Packers and Movers has earned an unmatched reputation for providing professional, secure, and affordable relocation solutions. Whether you reside near Chatra Sadar, Main Road, Post Office Chowk, Kutchery Road, or neighboring industrial block areas like Tandwa and Simaria, our experienced packing team is equipped to execute seamless door-to-door shifting.
      </p>

      <h3 style="font-size: 1.6rem; font-weight: 700; color: #1e293b; margin-top: 35px; margin-bottom: 15px;">Why Professional Packers and Movers Are Essential in Chatra</h3>
      
      <p style="margin-bottom: 20px;">
        Chatra district acts as a crucial geographical link connecting Northern Jharkhand with Southern Bihar via NH-22 and the Grand Trunk Road (NH-19) corridor. Standard unorganized movers often lack heavy-duty packing supplies, container trucks, and proper insurance covers. Moving without certified professionals risks damage to valuable electronics, modular furniture, and delicate glass items during transit over hilly terrains and highway routes.
      </p>

      <p style="margin-bottom: 20px;">
        At Shree Ashirwad Packers and Movers, we deploy trained packing crews who utilize specialized 7-layer safety packaging materials. Every item is cataloged, wrapped in heavy-duty bubble rolls, reinforced with 5-ply corrugated sheets, sealed with stretch wrap, and protected by foam corner guards. Delicate chinaware, glass tabletops, and smart TVs receive customized wooden crating to guarantee 100% scratch-free and collision-proof transportation.
      </p>

      <h3 style="font-size: 1.6rem; font-weight: 700; color: #1e293b; margin-top: 35px; margin-bottom: 15px;">100% Official IBA GST Billing for Government & Corporate Employee Claims</h3>

      <p style="margin-bottom: 20px;">
        Chatra houses numerous government administrative units, civil court offices, police headquarters, nationalized bank branches, and public sector mining operations. Government officers, police personnel, teachers, and corporate executives frequently undergo inter-district and interstate job transfers requiring official shifting documentation to claim reimbursement allowances.
      </p>

      <p style="margin-bottom: 20px;">
        We specialize in providing 100% genuine IBA-compliant GST billing sets. Our complete documentation package includes:
      </p>

      <ul style="padding-left: 25px; margin-bottom: 25px;">
        <li style="margin-bottom: 10px;"><strong>Official GST Invoice:</strong> Contains valid GSTIN, HSN/SAC codes, and detailed expense breakdowns.</li>
        <li style="margin-bottom: 10px;"><strong>Consignment Lorry Receipt (LR Copy):</strong> Stamped official transport document verifying truck number and route.</li>
        <li style="margin-bottom: 10px;"><strong>Itemized Inventory List:</strong> Detailed article-by-article declaration signed by the packing supervisor.</li>
        <li style="margin-bottom: 10px;"><strong>Money Receipt & Payment Advice:</strong> Stamped payment receipt confirming settlement.</li>
        <li style="margin-bottom: 10px;"><strong>Transit Insurance Certificate:</strong> Valid insurance policy document protecting shipment value.</li>
      </ul>

      <h3 style="font-size: 1.6rem; font-weight: 700; color: #1e293b; margin-top: 35px; margin-bottom: 15px;">Key Localities Covered Across Chatra District</h3>

      <p style="margin-bottom: 20px;">
        Our operational network spans the entire Chatra district, ensuring prompt response times and localized moving support. We regularly provide shifting services across:
      </p>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); gap: 15px; margin-bottom: 30px;">
        <div style="background: #f8fafc; padding: 15px; border-radius: 6px; border: 1px solid #e2e8f0; font-weight: 600;">Chatra Sadar & Town</div>
        <div style="background: #f8fafc; padding: 15px; border-radius: 6px; border: 1px solid #e2e8f0; font-weight: 600;">Main Road & PO Chowk</div>
        <div style="background: #f8fafc; padding: 15px; border-radius: 6px; border: 1px solid #e2e8f0; font-weight: 600;">Kutchery Road & Court Area</div>
        <div style="background: #f8fafc; padding: 15px; border-radius: 6px; border: 1px solid #e2e8f0; font-weight: 600;">Hunterganj Block Hub</div>
        <div style="background: #f8fafc; padding: 15px; border-radius: 6px; border: 1px solid #e2e8f0; font-weight: 600;">Tandwa Industrial Area</div>
        <div style="background: #f8fafc; padding: 15px; border-radius: 6px; border: 1px solid #e2e8f0; font-weight: 600;">Simaria Mining Block</div>
        <div style="background: #f8fafc; padding: 15px; border-radius: 6px; border: 1px solid #e2e8f0; font-weight: 600;">Itkhori Cultural Zone</div>
        <div style="background: #f8fafc; padding: 15px; border-radius: 6px; border: 1px solid #e2e8f0; font-weight: 600;">Kanchanpur & Jori Hub</div>
      </div>

      <h3 style="font-size: 1.6rem; font-weight: 700; color: #1e293b; margin-top: 35px; margin-bottom: 15px;">Safety Protocols and Transit Insurance Coverage</h3>

      <p style="margin-bottom: 20px;">
        Vehicle accidents, unexpected weather shifts, or road hazards during long-distance highway transit require complete financial protection. Shree Ashirwad Packers and Movers offers comprehensive transit insurance policies underwritten by leading national insurance partners. In the rare event of transit mishap, our dedicated claim support desk assists clients with full policy execution and reimbursement clearance without hassle.
      </p>

    </div>
  </section>

  <!-- Intercity Links & Neighboring Locality Cards -->
  <section class="internal-links-section" style="background: #f8fafc; padding: 60px 0; border-top: 1px solid #e2e8f0;" id="locality-route-links">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 15px;">
      <div style="text-align: center; margin-bottom: 40px;">
        <h2 style="font-size: 2rem; font-weight: 800; color: #0f172a; margin-bottom: 10px;">Popular Shifting Routes & Locality Guides from Chatra</h2>
        <p style="color: #64748b; font-size: 0.95rem;">Explore our specialized shifting services across Chatra sub-towns and major intercity highways.</p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 20px;">
        
        <a href="<?php echo SITE_URL; ?>packers-and-movers-hunterganj-chatra" style="background: #ffffff; padding: 20px; border-radius: 8px; border: 1px solid #cbd5e1; text-decoration: none; color: #0f172a; transition: border-color 0.3s; display: block;">
          <h4 style="font-size: 1.05rem; font-weight: 700; margin-bottom: 6px; color: #2563eb;">Packers &amp; Movers Hunterganj</h4>
          <p style="font-size: 0.85rem; color: #64748b; margin: 0;">Local house shifting &amp; border relocation in Hunterganj Chatra.</p>
        </a>

        <a href="<?php echo SITE_URL; ?>packers-and-movers-tandwa-chatra" style="background: #ffffff; padding: 20px; border-radius: 8px; border: 1px solid #cbd5e1; text-decoration: none; color: #0f172a; transition: border-color 0.3s; display: block;">
          <h4 style="font-size: 1.05rem; font-weight: 700; margin-bottom: 6px; color: #2563eb;">Packers &amp; Movers Tandwa</h4>
          <p style="font-size: 0.85rem; color: #64748b; margin: 0;">NTPC project area &amp; industrial equipment shifting in Tandwa.</p>
        </a>

        <a href="<?php echo SITE_URL; ?>packers-and-movers-simaria-chatra" style="background: #ffffff; padding: 20px; border-radius: 8px; border: 1px solid #cbd5e1; text-decoration: none; color: #0f172a; transition: border-color 0.3s; display: block;">
          <h4 style="font-size: 1.05rem; font-weight: 700; margin-bottom: 6px; color: #2563eb;">Packers &amp; Movers Simaria</h4>
          <p style="font-size: 0.85rem; color: #64748b; margin: 0;">Residential &amp; commercial relocation across Simaria block.</p>
        </a>

        <a href="<?php echo SITE_URL; ?>packers-and-movers-itkhori-chatra" style="background: #ffffff; padding: 20px; border-radius: 8px; border: 1px solid #cbd5e1; text-decoration: none; color: #0f172a; transition: border-color 0.3s; display: block;">
          <h4 style="font-size: 1.05rem; font-weight: 700; margin-bottom: 6px; color: #2563eb;">Packers &amp; Movers Itkhori</h4>
          <p style="font-size: 0.85rem; color: #64748b; margin: 0;">Safe home moving &amp; vehicle transport in Itkhori region.</p>
        </a>

        <a href="<?php echo SITE_URL; ?>packers-and-movers-chatra-to-ranchi" style="background: #ffffff; padding: 20px; border-radius: 8px; border: 1px solid #cbd5e1; text-decoration: none; color: #0f172a; transition: border-color 0.3s; display: block;">
          <h4 style="font-size: 1.05rem; font-weight: 700; margin-bottom: 6px; color: #2563eb;">Chatra to Ranchi Relocation</h4>
          <p style="font-size: 0.85rem; color: #64748b; margin: 0;">Daily intercity container transport from Chatra to Ranchi (~140 km).</p>
        </a>

        <a href="<?php echo SITE_URL; ?>packers-and-movers-chatra-to-patna" style="background: #ffffff; padding: 20px; border-radius: 8px; border: 1px solid #cbd5e1; text-decoration: none; color: #0f172a; transition: border-color 0.3s; display: block;">
          <h4 style="font-size: 1.05rem; font-weight: 700; margin-bottom: 6px; color: #2563eb;">Chatra to Patna Relocation</h4>
          <p style="font-size: 0.85rem; color: #64748b; margin: 0;">Interstate highway house shifting from Chatra to Patna (~190 km).</p>
        </a>

        <a href="<?php echo SITE_URL; ?>packers-and-movers-chatra-cost-guide" style="background: #ffffff; padding: 20px; border-radius: 8px; border: 1px solid #cbd5e1; text-decoration: none; color: #0f172a; transition: border-color 0.3s; display: block;">
          <h4 style="font-size: 1.05rem; font-weight: 700; margin-bottom: 6px; color: #2563eb;">Chatra Shifting Cost Guide</h4>
          <p style="font-size: 0.85rem; color: #64748b; margin: 0;">Complete rate breakdown and tariff estimator for Chatra moves.</p>
        </a>

        <a href="<?php echo SITE_URL; ?>iba-approved-packers-and-movers-in-chatra" style="background: #ffffff; padding: 20px; border-radius: 8px; border: 1px solid #cbd5e1; text-decoration: none; color: #0f172a; transition: border-color 0.3s; display: block;">
          <h4 style="font-size: 1.05rem; font-weight: 700; margin-bottom: 6px; color: #2563eb;">IBA Approved Movers Chatra</h4>
          <p style="font-size: 0.85rem; color: #64748b; margin: 0;">Bank &amp; govt employee claimable GST moving bills.</p>
        </a>

      </div>
    </div>
  </section>

  <!-- Frequently Asked Questions (FAQs) Section -->
  <section class="faq-section" style="background: #ffffff; padding: 60px 0; border-top: 1px solid #e2e8f0;" id="faqs">
    <div class="container" style="max-width: 1000px; margin: 0 auto; padding: 0 15px;">
      <div style="text-align: center; margin-bottom: 45px;">
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #0f172a; margin-bottom: 10px;">Frequently Asked Questions (FAQs)</h2>
        <p style="color: #64748b; font-size: 1rem;">Find answers to common questions about house shifting, costs, and packaging in Chatra.</p>
      </div>

      <div style="display: flex; flex-direction: column; gap: 15px;">
        <?php foreach ($faq_list as $index => $faq): ?>
          <div style="border: 1px solid #e2e8f0; border-radius: 8px; overflow: hidden; background: #f8fafc;">
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

  <!-- Bottom CTA Banner -->
  <section class="cta-banner" style="background: linear-gradient(135deg, #1e3a8a 0%, #0f172a 100%); color: #ffffff; padding: 50px 0; text-align: center;" id="bottom-cta">
    <div class="container" style="max-width: 900px; margin: 0 auto; padding: 0 15px;">
      <h2 style="font-size: 2.2rem; font-weight: 800; margin-bottom: 15px; color: #ffffff;">Ready for a Smooth, Damage-Free Move in Chatra?</h2>
      <p style="font-size: 1.1rem; color: #cbd5e1; margin-bottom: 30px; line-height: 1.7;">
        Contact Chatra's most trusted IBA-approved relocation team today. Get your free custom quote and enjoy 100% safe household packing and delivery!
      </p>
      <div style="display: flex; justify-content: center; gap: 15px; flex-wrap: wrap;">
        <a href="tel:+918409531615" style="background: #2563eb; color: #ffffff; padding: 14px 30px; border-radius: 8px; font-weight: 700; text-decoration: none; display: inline-flex; align-items: center; gap: 10px; font-size: 1.05rem;" id="cta-call-btn">
          <i class="fa-solid fa-phone"></i> Call +91 8409531615
        </a>
        <a href="https://api.whatsapp.com/send?phone=918409531615&text=Hello%20Shree%20Ashirwad%20Packers%20and%20Movers,%20I%20need%20a%20shifting%20quote%20in%20Chatra." style="background: #22c55e; color: #ffffff; padding: 14px 30px; border-radius: 8px; font-weight: 700; text-decoration: none; display: inline-flex; align-items: center; gap: 10px; font-size: 1.05rem;" id="cta-wa-btn">
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
