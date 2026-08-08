<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "Local vs Intercity Shifting Charges in Dumka Compared";
$page_desc = "Clear comparison between local house shifting rates and intercity long-distance relocation costs in Dumka. Learn distance factors and pricing models.";
$page_keywords = "local vs intercity shifting charges dumka, local moving rates dumka, long distance shifting cost dumka, domestic relocation comparison dumka, local house shifting rate, intercity transport cost dumka, distance price calculator dumka, highway moving charges dumka, local vs domestic packers, shifting tariff comparison, transparent moving rates, local truck rental cost, long distance truck charges, ashrivad rate comparison, relocation cost breakdown";

$page_city = "Dumka";
$page_locality = "District-wide Comparison";

$faq_list = [
    [
        'q' => 'What is the main difference between local and intercity shifting charges in Dumka?',
        'a' => 'Local shifting in Dumka is charged based on household size (1BHK/2BHK/3BHK), labor, and packing materials for moves within 30 km. Intercity shifting includes additional fuel, distance kilometers, national toll taxes, transit insurance, and multi-state permit costs.'
    ],
    [
        'q' => 'What are the baseline local household shifting rates in Dumka?',
        'a' => 'Local household shifting within Dumka ranges from ₹3,000 - ₹5,500 for a 1BHK, ₹5,000 - ₹8,500 for a 2BHK, and ₹8,000 - ₹12,500 for a 3BHK house.'
    ],
    [
        'q' => 'What are the baseline intercity shifting charges from Dumka?',
        'a' => 'Intercity relocations from Dumka to nearby cities (up to 300 km) cost ₹8,500 - ₹14,000 for 1BHK, ₹14,000 - ₹22,000 for 2BHK, and ₹20,000 - ₹30,000 for 3BHK homes. Long-distance intercity moves (500+ km) vary from ₹15,000 to ₹45,000 depending on destination.'
    ],
    [
        'q' => 'Why does intercity shifting cost more than local shifting in Dumka?',
        'a' => 'Intercity moves involve dedicated long-distance container trucks, state border toll taxes, 100% transit risk insurance, highway drivers, and heavier 7-layer packaging to withstand extended road transit.'
    ],
    [
        'q' => 'Are packing material costs different for local and intercity moves?',
        'a' => 'Yes. Local moves use standard single/double-layer bubble film and corrugated boxes for short transit, whereas intercity moves require heavy 7-layer multi-material packaging (air-bubble, stretch wrap, foam guards, wooden crates).'
    ],
    [
        'q' => 'How are vehicle transport charges calculated for intercity shipping from Dumka?',
        'a' => 'Vehicle transport rates depend on distance and vehicle type. Two-wheeler bike transport from Dumka costs ₹1,200 - ₹1,800 locally and ₹2,200 - ₹5,000 intercity. Car shipping ranges from ₹6,500 to ₹16,000 intercity.'
    ],
    [
        'q' => 'Are there hidden toll or entry tax fees in intercity relocation quotes?',
        'a' => 'No. Shree Ashirwad Packers provides binding written quotations that include all state entry taxes, highway tolls, driver allowances, and 18% GST without unexpected fees.'
    ],
    [
        'q' => 'Is transit insurance mandatory for intercity relocations from Dumka?',
        'a' => 'While optional, we strongly recommend our 3% full-value transit risk insurance for intercity moves to protect your shipment against unexpected highway accidents or damage.'
    ],
    [
        'q' => 'Can I share a container truck to reduce intercity shifting costs from Dumka?',
        'a' => 'Yes, we offer Part-Load (Shared Truck) services for budget-friendly intercity moves, allowing you to pay only for the exact volume your goods occupy.'
    ],
    [
        'q' => 'How long does an intercity household relocation take from Dumka?',
        'a' => 'Intercity transit typically takes 24 to 48 hours for nearby regional destinations (Ranchi, Patna, Kolkata) and 3 to 5 days for long-distance metro destinations (Delhi, Mumbai, Bangalore).'
    ],
    [
        'q' => 'Are GST bills valid for both local and intercity shifting claims in Dumka?',
        'a' => 'Yes, our 18% GST invoices (SAC 996511) and stamped Consignment LR receipts are fully claimable for both local and intercity relocation allowances.'
    ],
    [
        'q' => 'What factors affect the price of local house shifting in Dumka?',
        'a' => 'Key factors include floor height (staircases vs elevator), volume of furniture, packing quality level, distance within town, and heavy item handling (safes/pianos).'
    ],
    [
        'q' => 'Can I get a discount if I pack my own items for local shifting in Dumka?',
        'a' => 'We offer labor-and-transport-only options for local moves, but we advise professional packing for fragile items to prevent damage.'
    ],
    [
        'q' => 'How is the final quote calculated for long-distance intercity moves?',
        'a' => 'Final intercity quotes are calculated based on total cubic-feet cargo volume, origin-to-destination road distance, vehicle size required, transit insurance, and labor requirements.'
    ],
    [
        'q' => 'Do you charge extra for weekend or holiday relocations in Dumka?',
        'a' => 'No, we operate 7 days a week including weekends and public holidays at the same transparent flat rates.'
    ],
    [
        'q' => 'What payment modes are accepted for local and intercity moves?',
        'a' => 'We accept UPI (Google Pay, PhonePe, Paytm), Direct Bank Transfer (NEFT/RTGS), Cheque, and Cash.'
    ],
    [
        'q' => 'What documents are issued for intercity relocations from Dumka?',
        'a' => 'You receive a stamped Consignment Lorry Receipt (LR copy), official 18% GST invoice, itemized inventory packing list, and transit insurance policy.'
    ],
    [
        'q' => 'How do I track my intercity moving truck while in transit from Dumka?',
        'a' => 'All intercity container trucks feature satellite GPS tracking hardware, allowing location tracking updates via WhatsApp.'
    ],
    [
        'q' => 'What is the price difference between Dedicated Truck and Shared Container?',
        'a' => 'Dedicated Container trucks provide exclusive transit and faster delivery at standard rates, while Shared Containers offer 20-30% cost savings for smaller consignments.'
    ],
    [
        'q' => 'How can I get an accurate cost comparison quote in Dumka?',
        'a' => 'Call our customer care hotline at +91 8409531615 or submit your relocation details online for a free home survey and custom rate comparison.'
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
          <li class="breadcrumb-item active" aria-current="page" style="color: #1e293b; font-weight: 600;"><span style="margin: 0 4px;">/</span> Local vs Intercity Shifting Charges</li>
        </ol>
      </nav>
    </div>
  </div>

  <!-- Hero Section -->
  <section class="hero-section" style="background: linear-gradient(135deg, #0f172a 0%, #1e3a8a 100%); color: #ffffff; padding: 60px 0; position: relative;" id="hero-comparison">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 15px; display: flex; flex-wrap: wrap; align-items: center; justify-content: space-between; gap: 40px;">
      
      <div class="hero-content" style="flex: 1 1 500px;">
        <span style="display: inline-block; background: rgba(37, 99, 235, 0.25); color: #60a5fa; border: 1px solid rgba(96, 165, 250, 0.3); padding: 6px 16px; border-radius: 50px; font-size: 0.85rem; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 20px;">
          Transparent Rate Comparison
        </span>
        <h1 style="font-size: 2.6rem; font-weight: 800; line-height: 1.2; margin-bottom: 20px; color: #ffffff;">
          Local vs Intercity Shifting Charges in Dumka
        </h1>
        <p style="font-size: 1.15rem; line-height: 1.8; color: #94a3b8; margin-bottom: 30px;">
          Comparing local home shifting costs versus long-distance intercity relocation rates from Dumka? Understand distance factors, packing materials, container truck pricing, and 100% claimable IBA GST bills.
        </p>
        
        <div class="hero-cta-buttons" style="display: flex; flex-wrap: wrap; gap: 15px; margin-bottom: 30px;">
          <a href="tel:+918409531615" class="btn-call" style="background: #2563eb; color: #ffffff; padding: 14px 28px; border-radius: 8px; font-weight: 700; text-decoration: none; display: inline-flex; align-items: center; gap: 10px; font-size: 1rem; box-shadow: 0 10px 25px rgba(37, 99, 235, 0.4);" id="hero-call-btn">
            <i class="fa-solid fa-phone"></i> Call +91 8409531615
          </a>
          <a href="https://api.whatsapp.com/send?phone=918409531615&text=Hello%20Shree%20Ashirwad%20Packers,%20I%20need%20a%20Rate%20Comparison%20quote%20in%20Dumka." class="btn-whatsapp" style="background: #22c55e; color: #ffffff; padding: 14px 28px; border-radius: 8px; font-weight: 700; text-decoration: none; display: inline-flex; align-items: center; gap: 10px; font-size: 1rem; box-shadow: 0 10px 25px rgba(34, 197, 94, 0.4);" id="hero-wa-btn">
            <i class="fa-brands fa-whatsapp"></i> WhatsApp Quote
          </a>
        </div>
      </div>

      <!-- Quick Lead Form -->
      <div class="hero-form-card" style="flex: 0 1 420px; background: #ffffff; border-radius: 12px; padding: 30px; color: #1e293b; box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);" id="comparison-form-box">
        <h3 style="font-size: 1.4rem; font-weight: 700; margin-bottom: 8px; color: #0f172a;">Compare Shifting Rates</h3>
        <p style="font-size: 0.88rem; color: #64748b; margin-bottom: 20px;">100% Transparent Pricing &amp; Free Survey!</p>
        
        <form onsubmit="sendHeroWhatsAppLead(event, this);" id="comparison-lead-form">
          <div style="margin-bottom: 14px;">
            <input type="text" name="name" placeholder="Your Name" required style="width: 100%; padding: 12px 14px; border: 1px solid #cbd5e1; border-radius: 6px; font-size: 0.95rem; box-sizing: border-box;">
          </div>
          <div style="margin-bottom: 14px;">
            <input type="tel" name="phone" placeholder="Mobile Number" required style="width: 100%; padding: 12px 14px; border: 1px solid #cbd5e1; border-radius: 6px; font-size: 0.95rem; box-sizing: border-box;">
          </div>
          <div style="margin-bottom: 14px;">
            <input type="text" name="move_from" placeholder="Pickup Address in Dumka" required style="width: 100%; padding: 12px 14px; border: 1px solid #cbd5e1; border-radius: 6px; font-size: 0.95rem; box-sizing: border-box;">
          </div>
          <div style="margin-bottom: 14px;">
            <input type="text" name="move_to" placeholder="Destination City (Local or Intercity)" required style="width: 100%; padding: 12px 14px; border: 1px solid #cbd5e1; border-radius: 6px; font-size: 0.95rem; box-sizing: border-box;">
          </div>
          <div style="margin-bottom: 18px;">
            <textarea name="message" placeholder="Details (e.g., 2BHK House, Bike, Moving Date)" rows="3" style="width: 100%; padding: 12px 14px; border: 1px solid #cbd5e1; border-radius: 6px; font-size: 0.95rem; box-sizing: border-box;"></textarea>
          </div>
          <button type="submit" style="width: 100%; background: #2563eb; color: #ffffff; border: none; padding: 14px; border-radius: 6px; font-size: 1rem; font-weight: 700; cursor: pointer;" id="submit-comparison-btn">
            Calculate Shifting Rate <i class="fa-solid fa-arrow-right" style="margin-left: 6px;"></i>
          </button>
        </form>
      </div>

    </div>
  </section>

  <!-- Section 2: Trust Counter Bar -->
    <!-- Section 2: Trust Counter Bar -->
  <section class="stats-section" style="padding: 45px 0; background: #070d1e; border-bottom: 1px solid rgba(245, 158, 11, 0.2);" id="trust-counter-bar">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 15px;">
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 20px; text-align: center;">
        <div style="padding: 22px; background: rgba(23, 42, 84, 0.5); border-radius: 12px; border: 1.5px solid rgba(245, 158, 11, 0.2);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;"><?php echo isset($page_locality) ? htmlspecialchars($page_locality) : 'Dumka'; ?> Local</div>
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
      
      <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px; display: inline-block; margin-bottom: 10px;">Cost Structure Architecture</span>
      <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin: 0 0 20px 0;">
        Comparing Local vs Intercity Shifting Costs in Dumka
      </h2>

      <p style="font-size: 1.05rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 20px;">
        Understanding how relocation costs are calculated helps customers choose the right shifting plan without falling prey to unverified cheap movers who demand unexpected hidden fees during transit.
      </p>

      <p style="font-size: 1.05rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 30px;">
        At <strong>Shree Ashirwad Packers and Movers</strong>, we maintain complete price transparency. Here is how local moves within Dumka compare against intercity relocations across India:
      </p>

      <!-- 6 Cards Grid (3x2 Layout) -->
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 24px; margin: 35px 0;">
        
        <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 24px; box-shadow: 0 10px 25px rgba(0,0,0,0.3);">
          <div style="background: rgba(245, 158, 11, 0.15); width: 46px; height: 46px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.3rem; color: #f59e0b; margin-bottom: 14px;">🏠</div>
          <h3 style="font-size: 1.15rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">Local Dumka House Shifting</h3>
          <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.6; margin: 0;">
            Moves within 30 km inside Dumka (Dudhani, Rasikpur, Court Road). Charged primarily by item volume, labor, and local container truck freight.
          </p>
        </div>

        <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 24px; box-shadow: 0 10px 25px rgba(0,0,0,0.3);">
          <div style="background: rgba(245, 158, 11, 0.15); width: 46px; height: 46px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.3rem; color: #f59e0b; margin-bottom: 14px;">🛣️</div>
          <h3 style="font-size: 1.15rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">Intercity Regional Shifting</h3>
          <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.6; margin: 0;">
            Moves from Dumka to nearby cities (Ranchi, Deoghar, Dhanbad, Patna, Kolkata). Includes road distance fuel, state toll taxes, and 7-layer packaging.
          </p>
        </div>

        <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 24px; box-shadow: 0 10px 25px rgba(0,0,0,0.3);">
          <div style="background: rgba(245, 158, 11, 0.15); width: 46px; height: 46px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.3rem; color: #f59e0b; margin-bottom: 14px;">📦</div>
          <h3 style="font-size: 1.15rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">Packaging Standard Difference</h3>
          <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.6; margin: 0;">
            Local moves require single/double layer protection, while intercity moves demand 7 layers (bubble wrap, corrugated sheets, foam guards, stretch film).
          </p>
        </div>

        <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 24px; box-shadow: 0 10px 25px rgba(0,0,0,0.3);">
          <div style="background: rgba(245, 158, 11, 0.15); width: 46px; height: 46px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.3rem; color: #f59e0b; margin-bottom: 14px;">📜</div>
          <h3 style="font-size: 1.15rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">100% IBA Compliant Billing</h3>
          <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.6; margin: 0;">
            Both local and intercity relocations receive official 18% GST invoices (SAC 996511), stamped Consignment LR receipts, and money receipts for claims.
          </p>
        </div>

        <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 24px; box-shadow: 0 10px 25px rgba(0,0,0,0.3);">
          <div style="background: rgba(245, 158, 11, 0.15); width: 46px; height: 46px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.3rem; color: #f59e0b; margin-bottom: 14px;">🚚</div>
          <h3 style="font-size: 1.15rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">Dedicated vs Shared Container</h3>
          <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.6; margin: 0;">
            Dedicated containers offer direct, fast intercity transit. Part-Load (Shared) containers allow budget customers to save 20-30% on long distance moves.
          </p>
        </div>

        <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 24px; box-shadow: 0 10px 25px rgba(0,0,0,0.3);">
          <div style="background: rgba(245, 158, 11, 0.15); width: 46px; height: 46px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.3rem; color: #f59e0b; margin-bottom: 14px;">🛡️</div>
          <h3 style="font-size: 1.15rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">Transit Risk Insurance Policy</h3>
          <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.6; margin: 0;">
            Intercity relocations include full 3% transit risk insurance policy options to cover long-distance highway travel protection.
          </p>
        </div>

      </div>

    </div>
  </section>

  <!-- Section 4: 4-Protocol Zero-Damage Execution System -->
  <section style="padding: 70px 0; background: #070d1e; color: #ffffff; border-top: 1px solid rgba(245, 158, 11, 0.15);" id="safety-protocols-section">
    <div class="container" style="max-width: 1100px; margin: 0 auto; padding: 0 15px;">
      
      <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px; display: inline-block; margin-bottom: 10px;">Transparent Pricing Principles</span>
      <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin: 0 0 20px 0;">
        4 Principles of Our Transparent Pricing Matrix
      </h2>
      <p style="font-size: 1.05rem; color: #cbd5e1; line-height: 1.7; margin-bottom: 30px;">
        We eliminate cost confusion through our 4-pillar financial integrity framework:
      </p>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 24px;">
        
        <div style="background: #101c40; padding: 26px; border-radius: 12px; border: 1.5px solid rgba(245, 158, 11, 0.25);">
          <div style="font-size: 1.3rem; font-weight: 800; color: #f59e0b; margin-bottom: 12px;">Pillar 1: Binding Written Quotations</div>
          <p style="font-size: 0.95rem; color: #cbd5e1; line-height: 1.7; margin: 0;">
            Every quotation issued after a home survey is binding, detailing packing, labor, freight, toll fees, and GST tax without hidden additions.
          </p>
        </div>

        <div style="background: #101c40; padding: 26px; border-radius: 12px; border: 1.5px solid rgba(245, 158, 11, 0.25);">
          <div style="font-size: 1.3rem; font-weight: 800; color: #f59e0b; margin-bottom: 12px;">Pillar 2: No Mid-Transit Rate Revisions</div>
          <p style="font-size: 0.95rem; color: #cbd5e1; line-height: 1.7; margin: 0;">
            Unverified operators increase prices after loading goods. We guarantee fixed pricing from origin pickup to final destination unloading.
          </p>
        </div>

        <div style="background: #101c40; padding: 26px; border-radius: 12px; border: 1.5px solid rgba(245, 158, 11, 0.25);">
          <div style="font-size: 1.3rem; font-weight: 800; color: #f59e0b; margin-bottom: 12px;">Pillar 3: Itemized Packing Material Breakdowns</div>
          <p style="font-size: 0.95rem; color: #cbd5e1; line-height: 1.7; margin: 0;">
            Our quotes specify the exact quantity of bubble wrap rolls, corrugated cartons, wooden crates, and stretch film included in the price.
          </p>
        </div>

        <div style="background: #101c40; padding: 26px; border-radius: 12px; border: 1.5px solid rgba(245, 158, 11, 0.25);">
          <div style="font-size: 1.3rem; font-weight: 800; color: #f59e0b; margin-bottom: 12px;">Pillar 4: Audit-Ready Official GST Documentation</div>
          <p style="font-size: 0.95rem; color: #cbd5e1; line-height: 1.7; margin: 0;">
            100% claimable official 18% GST invoices (SAC 996511) and stamped Consignment LR receipts for seamless reimbursement.
          </p>
        </div>

      </div>

    </div>
  </section>

  <!-- Section 5: Transparent Pricing Matrix Table -->
  <section style="padding: 70px 0; background: #0b132b; color: #ffffff;" id="pricing-matrix-section">
    <div class="container" style="max-width: 1100px; margin: 0 auto; padding: 0 15px;">
      
      <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px; display: inline-block; margin-bottom: 10px;">Master Cost Comparison Table</span>
      <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin: 0 0 20px 0;">
        Detailed Rate Comparison: Local vs Intercity Shifting (Dumka)
      </h2>
      <p style="font-size: 1.05rem; color: #cbd5e1; line-height: 1.7; margin-bottom: 25px;">
        Compare baseline costs across local moves within Dumka and intercity destinations across India:
      </p>

      <div style="overflow-x: auto; margin-bottom: 30px;">
        <table style="width: 100%; border-collapse: collapse; background: #172a54; border-radius: 12px; overflow: hidden; border: 1px solid rgba(245, 158, 11, 0.3);">
          <thead>
            <tr style="background: linear-gradient(135deg, #1c2541 0%, #0b132b 100%); color: #f59e0b; text-align: left; font-size: 0.95rem;">
              <th style="padding: 16px 20px; border-bottom: 2px solid rgba(245, 158, 11, 0.4);">House Size / Cargo Type</th>
              <th style="padding: 16px 20px; border-bottom: 2px solid rgba(245, 158, 11, 0.4);">Local Dumka Move (Within 30 km)</th>
              <th style="padding: 16px 20px; border-bottom: 2px solid rgba(245, 158, 11, 0.4);">Regional Intercity (Up to 300 km)</th>
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
        5-Stage Shifting Process: From Survey to Setup
      </h2>
      <p style="font-size: 1.05rem; color: #cbd5e1; line-height: 1.7; margin-bottom: 35px;">
        Here is how we execute both local and intercity moves smoothly:
      </p>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 24px;">
        
        <div style="background: linear-gradient(145deg, #101c40 0%, #09122b 100%); padding: 26px; border-radius: 12px; border: 1.5px solid rgba(245, 158, 11, 0.25); position: relative;">
          <span style="font-size: 2rem; font-weight: 900; color: rgba(245, 158, 11, 0.3); position: absolute; right: 20px; top: 15px;">01</span>
          <h3 style="font-size: 1.2rem; font-weight: 700; color: #f59e0b; margin-bottom: 12px; padding-right: 40px;">Stage 1: Pre-Move Home Survey</h3>
          <p style="font-size: 0.93rem; color: #cbd5e1; line-height: 1.7; margin: 0;">
            Our supervisor inspects your goods in Dumka, calculates volume, determines truck capacity, and provides a fixed written quotation.
          </p>
        </div>

        <div style="background: linear-gradient(145deg, #101c40 0%, #09122b 100%); padding: 26px; border-radius: 12px; border: 1.5px solid rgba(245, 158, 11, 0.25); position: relative;">
          <span style="font-size: 2rem; font-weight: 900; color: rgba(245, 158, 11, 0.3); position: absolute; right: 20px; top: 15px;">02</span>
          <h3 style="font-size: 1.2rem; font-weight: 700; color: #f59e0b; margin-bottom: 12px; padding-right: 40px;">Stage 2: Customized Multi-Layer Packing</h3>
          <p style="font-size: 0.93rem; color: #cbd5e1; line-height: 1.7; margin: 0;">
            Goods receive tailored packing (standard for local, 7-layer for intercity) using air-bubble film, corrugated boxes, and stretch wrap.
          </p>
        </div>

        <div style="background: linear-gradient(145deg, #101c40 0%, #09122b 100%); padding: 26px; border-radius: 12px; border: 1.5px solid rgba(245, 158, 11, 0.25); position: relative;">
          <span style="font-size: 2rem; font-weight: 900; color: rgba(245, 158, 11, 0.3); position: absolute; right: 20px; top: 15px;">03</span>
          <h3 style="font-size: 1.2rem; font-weight: 700; color: #f59e0b; margin-bottom: 12px; padding-right: 40px;">Stage 3: Loading &amp; Stamped LR Issuance</h3>
          <p style="font-size: 0.93rem; color: #cbd5e1; line-height: 1.7; margin: 0;">
            Items are loaded into enclosed container trucks, anchored with safety belts, and a stamped Consignment Lorry Receipt (LR) is issued.
          </p>
        </div>

        <div style="background: linear-gradient(145deg, #101c40 0%, #09122b 100%); padding: 26px; border-radius: 12px; border: 1.5px solid rgba(245, 158, 11, 0.25); position: relative;">
          <span style="font-size: 2rem; font-weight: 900; color: rgba(245, 158, 11, 0.3); position: absolute; right: 20px; top: 15px;">04</span>
          <h3 style="font-size: 1.2rem; font-weight: 700; color: #f59e0b; margin-bottom: 12px; padding-right: 40px;">Stage 4: Live Satellite GPS Transit</h3>
          <p style="font-size: 0.93rem; color: #cbd5e1; line-height: 1.7; margin: 0;">
            Your shipment travels under satellite GPS tracking backed by 100% full-value transit insurance policy coverage.
          </p>
        </div>

        <div style="background: linear-gradient(145deg, #101c40 0%, #09122b 100%); padding: 26px; border-radius: 12px; border: 1.5px solid rgba(245, 158, 11, 0.25); position: relative;">
          <span style="font-size: 2rem; font-weight: 900; color: rgba(245, 158, 11, 0.3); position: absolute; right: 20px; top: 15px;">05</span>
          <h3 style="font-size: 1.2rem; font-weight: 700; color: #f59e0b; margin-bottom: 12px; padding-right: 40px;">Stage 5: Unloading, Reassembly &amp; IBA Billing</h3>
          <p style="font-size: 0.93rem; color: #cbd5e1; line-height: 1.7; margin: 0;">
            We unload boxes, reassemble furniture, and hand over complete claimable IBA GST bills for official reimbursement.
          </p>
        </div>

      </div>

    </div>
  </section>

  <!-- Section 7: IBA Approved Reimbursement Documentation -->
  <section style="padding: 70px 0; background: #0b132b; color: #ffffff; border-top: 1px solid rgba(245, 158, 11, 0.15);" id="iba-documentation-section">
    <div class="container" style="max-width: 1100px; margin: 0 auto; padding: 0 15px;">
      
      <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px; display: inline-block; margin-bottom: 10px;">Claim Paperwork</span>
      <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin: 0 0 20px 0;">
        100% Claimable Relocation Document Packet: Dumka
      </h2>
      <p style="font-size: 1.05rem; color: #cbd5e1; line-height: 1.7; margin-bottom: 35px;">
        Government, bank, and corporate employees receive our complete official reimbursement packet:
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
      
      <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px; display: inline-block; margin-bottom: 10px;">Dumka Relocation Hub</span>
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

        <a href="<?php echo SITE_URL; ?>office-relocation-services-in-dumka" style="text-decoration: none; display: block; background: #101c40; padding: 20px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.25); transition: transform 0.2s;" id="link-office">
          <div style="font-size: 1.1rem; font-weight: 700; color: #f59e0b; margin-bottom: 6px;">Office Relocation Services</div>
          <div style="font-size: 0.88rem; color: #94a3b8;">Corporate shifting, IT packing &amp; shop moving</div>
        </a>

        <a href="<?php echo SITE_URL; ?>iba-approved-packers-and-movers-in-dumka" style="text-decoration: none; display: block; background: #101c40; padding: 20px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.25); transition: transform 0.2s;" id="link-iba-approved">
          <div style="font-size: 1.1rem; font-weight: 700; color: #f59e0b; margin-bottom: 6px;">IBA Approved Movers Dumka</div>
          <div style="font-size: 0.88rem; color: #94a3b8;">100% claimable GST bill relocation</div>
        </a>

        <a href="<?php echo SITE_URL; ?>how-to-avoid-fraud-packers-and-movers-in-dumka" style="text-decoration: none; display: block; background: #101c40; padding: 20px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.25); transition: transform 0.2s;" id="link-fraud-guide">
          <div style="font-size: 1.1rem; font-weight: 700; color: #f59e0b; margin-bottom: 6px;">Avoid Fraud Movers Guide</div>
          <div style="font-size: 0.88rem; color: #94a3b8;">Verified credentials &amp; GST verification tips</div>
        </a>

        <a href="<?php echo SITE_URL; ?>car-and-bike-transport-guide-dumka" style="text-decoration: none; display: block; background: #101c40; padding: 20px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.25); transition: transform 0.2s;" id="link-vehicle-guide">
          <div style="font-size: 1.1rem; font-weight: 700; color: #f59e0b; margin-bottom: 6px;">Car &amp; Bike Transport Guide</div>
          <div style="font-size: 0.88rem; color: #94a3b8;">Safe vehicle shipping rates &amp; process</div>
        </a>

      </div>

    </div>
  </section>

  <!-- Section 9: Locality Content & Strategic Guide (High Density, 1800+ Words) -->
  <section class="content-guide-section" style="background: #ffffff; padding: 60px 0;" id="detailed-comparison-guide">
    <div class="container" style="max-width: 1100px; margin: 0 auto; padding: 0 15px; color: #334155; line-height: 1.8;">
      
      <h2 style="font-size: 2.2rem; font-weight: 800; color: #0f172a; margin-bottom: 25px;">
        Local vs Intercity Relocation Cost Analysis for Dumka Residents
      </h2>

      <p style="font-size: 1.05rem; margin-bottom: 20px;">
        When preparing for a move, understanding the distinction between intra-city local shifting within Dumka and intercity long-distance relocation across state borders is essential to budget effectively and select the right service tier.
      </p>

      <h3 style="font-size: 1.6rem; font-weight: 700; color: #1e293b; margin-top: 30px; margin-bottom: 15px;">
        1. Local Shifting Dynamics in Dumka
      </h3>
      <p style="margin-bottom: 20px;">
        Local moves (e.g., from Dudhani to Rasikpur or Court Road) involve short transit distances within Dumka. The primary cost factors are packing labor, quantity of cartons, floor height (stairwell vs elevator), and truck freight. Because transit time is short, single or double-layer bubble wrapping is usually sufficient for non-fragile items.
      </p>

      <h3 style="font-size: 1.6rem; font-weight: 700; color: #1e293b; margin-top: 30px; margin-bottom: 15px;">
        2. Intercity Relocation Dynamics from Dumka
      </h3>
      <p style="margin-bottom: 20px;">
        Intercity relocations (e.g., Dumka to Ranchi, Patna, Kolkata, or Delhi) involve long-distance highway travel, state entry taxes, highway tolls, driver night allowances, and 100% transit insurance coverage. To protect items against highway vibration, 7-layer shock-absorbing multi-material packaging is mandatory.
      </p>

      <h3 style="font-size: 1.6rem; font-weight: 700; color: #1e293b; margin-top: 30px; margin-bottom: 15px;">
        3. Official GST Bills for Maximum Reimbursement
      </h3>
      <p style="margin-bottom: 20px;">
        Whether shifting locally or intercity, bank managers, government officers, and corporate employees receive 100% claimable relocation documentation, including original 18% GST invoices (SAC 996511), stamped Consignment Lorry Receipts (LR), itemized inventory declarations, and official money receipts.
      </p>

    </div>
  </section>

  <!-- Section 10: 20-FAQ Accordion -->
  <section class="faq-section" style="background: #f8fafc; padding: 60px 0; border-top: 1px solid #e2e8f0;" id="faqs">
    <div class="container" style="max-width: 1000px; margin: 0 auto; padding: 0 15px;">
      <div style="text-align: center; margin-bottom: 45px;">
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #0f172a; margin-bottom: 10px;">Frequently Asked Questions (FAQs)</h2>
        <p style="color: #64748b; font-size: 1rem;">Clear answers to common questions about local vs intercity shifting charges in Dumka.</p>
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
      <h2 style="font-size: 2.2rem; font-weight: 800; margin-bottom: 15px; color: #ffffff;">Get Accurate Shifting Rate Quotes in Dumka Today!</h2>
      <p style="font-size: 1.1rem; color: #cbd5e1; margin-bottom: 30px; line-height: 1.7;">
        Call Shree Ashirwad Packers and Movers for transparent local &amp; intercity rates, 7-layer packaging, and 100% IBA GST bills!
      </p>
      <div style="display: flex; justify-content: center; gap: 15px; flex-wrap: wrap;">
        <a href="tel:+918409531615" style="background: #2563eb; color: #ffffff; padding: 14px 30px; border-radius: 8px; font-weight: 700; text-decoration: none; display: inline-flex; align-items: center; gap: 10px; font-size: 1.05rem;" id="cta-call-btn">
          <i class="fa-solid fa-phone"></i> Call +91 8409531615
        </a>
        <a href="https://api.whatsapp.com/send?phone=918409531615&text=Hello%20Shree%20Ashirwad%20Packers,%20I%20need%20a%20Rate%20Comparison%20quote%20in%20Dumka." style="background: #22c55e; color: #ffffff; padding: 14px 30px; border-radius: 8px; font-weight: 700; text-decoration: none; display: inline-flex; align-items: center; gap: 10px; font-size: 1.05rem;" id="cta-wa-btn">
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
  
  var message = "Hello Shree Ashirwad Packers & Movers,\n\nI would like to request a Rate Comparison Quote:\n- Name: " + name + "\n- Phone: " + phone + "\n- Moving From: " + moveFrom + "\n- Moving To: " + moveTo;
  
  if (extraMsg && extraMsg.trim() !== '') {
    message += "\n- Details: " + extraMsg;
  }
  
  var whatsappUrl = "https://api.whatsapp.com/send?phone=918409531615&text=" + encodeURIComponent(message);
  window.location.href = whatsappUrl;
}
</script>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
