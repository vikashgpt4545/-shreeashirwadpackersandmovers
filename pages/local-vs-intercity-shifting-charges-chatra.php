<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "Local vs Intercity Shifting Charges in Chatra Compared";
$page_desc = "Clear comparison between local house shifting rates and intercity long-distance relocation costs in Chatra. Learn distance factors and pricing models.";
$page_keywords = "local vs intercity shifting charges chatra, local moving rates chatra, long distance shifting cost chatra, domestic relocation comparison chatra, local house shifting rate, intercity transport cost chatra, distance price calculator chatra, highway moving charges chatra, local vs domestic packers, shifting tariff comparison, transparent moving rates, local truck rental cost, long distance truck charges, ashrivad rate comparison, relocation cost breakdown";

$page_city = "Chatra";

$faq_list = [
    [
        'q' => 'What is the main difference between local and intercity shifting charges in Chatra?',
        'a' => 'Local shifting charges within Chatra focus primarily on labor, packing material, and short-distance truck trips. Intercity shifting charges factor in total highway distance in kilometers, toll taxes, state border permits, driver allowances, and multi-layer transit packaging.'
    ],
    [
        'q' => 'How much does local shifting cost within Chatra town?',
        'a' => 'Local house shifting within Chatra ranges from ₹3,000 to ₹5,500 for a 1BHK, ₹5,500 to ₹9,500 for a 2BHK, and ₹9,500 to ₹15,000 for a 3BHK residence.'
    ],
    [
        'q' => 'How much does intercity shifting from Chatra to Ranchi or Patna cost?',
        'a' => 'Intercity relocation from Chatra to Ranchi (~140 km) costs ₹6,500 to ₹15,500, while moving to Patna (~190 km) costs ₹8,500 to ₹18,500 based on house size.'
    ],
    [
        'q' => 'Why are packing material requirements higher for intercity moves?',
        'a' => 'Intercity transport exposes goods to multi-hour highway vibrations, road bumps, and weather changes. Therefore, a rigid 7-layer protective pack with custom wooden crating is required, whereas local moves may require lighter 3-layer protection.'
    ],
    [
        'q' => 'What is the price difference between dedicated container trucks and shared trucks?',
        'a' => 'Dedicated container trucks provide direct express delivery with zero handling stops, costing 20-30% more than shared part-load container options.'
    ],
    [
        'q' => 'Are toll taxes included in local shifting charges in Chatra?',
        'a' => 'Local moves within Chatra town rarely encounter toll gates. For intercity moves along NH-22 or GT Road, toll taxes are fully detailed in the written quote.'
    ],
    [
        'q' => 'How does distance impact long-distance shifting costs from Chatra?',
        'a' => 'Freight charges increase incrementally per kilometer to cover diesel fuel, highway toll fees, interstate transit permits, and driver overtime.'
    ],
    [
        'q' => 'Is transit insurance required for local house shifting within Chatra?',
        'a' => 'Transit insurance is optional for short local moves but mandatory for intercity relocations to protect against highway collision risks.'
    ],
    [
        'q' => 'How do labor charges compare between local and intercity moves?',
        'a' => 'Local moves include loading and unloading labor at both ends on the same day. Intercity moves may involve separate destination unloading crews.'
    ],
    [
        'q' => 'What is the cost difference for bike transport in local vs intercity moves?',
        'a' => 'Local bike transfer within Chatra costs ₹800 to ₹1,500, whereas long-distance bike shipping in belt-anchored container trucks costs ₹2,500 to ₹6,500.'
    ],
    [
        'q' => 'Do intercity moves take longer to execute than local Chatra moves?',
        'a' => 'Yes, local moves are completed within 4 to 8 hours on the same day, while intercity moves take 1 to 5 days depending on destination distance.'
    ],
    [
        'q' => 'How can I calculate an estimated intercity shifting quote from Chatra?',
        'a' => 'Multiply total goods volume (in cubic feet or truck size) by distance rate per km, adding packing material fees, labor, GST (18%), and transit insurance (3%).'
    ],
    [
        'q' => 'Are floor elevation charges higher for intercity moves?',
        'a' => 'Stair carry charges per floor are identical, but intercity moves may involve two different floor elevations at pickup and drop locations.'
    ],
    [
        'q' => 'What payment options are available for local vs intercity shifting?',
        'a' => 'Local moves are typically settled upon unloading. Intercity moves require an advance payment at loading, with the balance settled prior to unloading.'
    ],
    [
        'q' => 'Are IBA GST bills valid for both local and intercity relocation expense claims?',
        'a' => 'Yes, our 100% claimable IBA GST invoices are valid for both local transfer allowances and long-distance intercity relocation claims.'
    ],
    [
        'q' => 'How does warehouse storage pricing compare between local and intercity moves?',
        'a' => 'Storage rates remain constant (₹100 to ₹250 per day), but intercity clients often use storage while waiting for new city possession.'
    ],
    [
        'q' => 'What items can be moved in local shifting but are restricted in intercity transport?',
        'a' => 'Perishable food items and open liquids can be moved locally but are strictly barred from multi-day intercity container trucks.'
    ],
    [
        'q' => 'Can I get a single binding written quote comparing both local and intercity rates?',
        'a' => 'Yes, our move coordinators issue clear, itemized rate cards comparing local vs intercity costs based on your planned destination options.'
    ],
    [
        'q' => 'How does seasonal demand affect local vs intercity pricing in Chatra?',
        'a' => 'Intercity truck availability experiences higher seasonal rate fluctuations during festivals and month-ends, whereas local rates remain relatively stable.'
    ],
    [
        'q' => 'Why is Shree Ashirwad Packers the best choice for both local and intercity moves in Chatra?',
        'a' => 'We offer transparent pricing models, 7-layer packing, GPS container fleets, 100% IBA GST compliance, and zero hidden charges for both local and national moves.'
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
          <li class="breadcrumb-item"><a href="<?php echo SITE_URL; ?>packers-and-movers-in-chatra" style="color: #2563eb; text-decoration: none;">Chatra</a></li>
          <li class="breadcrumb-item active" aria-current="page" style="color: #1e293b; font-weight: 600;"><span style="margin: 0 4px;">/</span> Local vs Intercity Charges</li>
        </ol>
      </nav>
    </div>
  </div>

  <!-- Hero Section -->
  <section class="hero-section" style="background: linear-gradient(135deg, #0f172a 0%, #1e3a8a 100%); color: #ffffff; padding: 60px 0; position: relative;" id="hero-local-vs-intercity">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 15px; display: flex; flex-wrap: wrap; align-items: center; justify-content: space-between; gap: 40px;">
      
      <div class="hero-content" style="flex: 1 1 500px;">
        <span style="display: inline-block; background: rgba(37, 99, 235, 0.25); color: #60a5fa; border: 1px solid rgba(96, 165, 250, 0.3); padding: 6px 16px; border-radius: 50px; font-size: 0.85rem; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 20px;">
          Tariff & Rate Comparison Guide
        </span>
        <h1 style="font-size: 2.6rem; font-weight: 800; line-height: 1.2; margin-bottom: 20px; color: #ffffff;">
          Local vs Intercity Shifting Charges in Chatra
        </h1>
        <p style="font-size: 1.15rem; line-height: 1.8; color: #94a3b8; margin-bottom: 30px;">
          Deciding between moving within Chatra town or relocating across state borders to Ranchi, Patna, Kolkata, or Delhi? Understand how labor costs, packing material layers, distance multipliers, toll taxes, and transit insurance differentiate local rates from intercity shifting budgets.
        </p>
        
        <div class="hero-cta-buttons" style="display: flex; flex-wrap: wrap; gap: 15px; margin-bottom: 30px;">
          <a href="tel:+918409531615" class="btn-call" style="background: #2563eb; color: #ffffff; padding: 14px 28px; border-radius: 8px; font-weight: 700; text-decoration: none; display: inline-flex; align-items: center; gap: 10px; font-size: 1rem; box-shadow: 0 10px 25px rgba(37, 99, 235, 0.4);" id="hero-call-btn">
            <i class="fa-solid fa-phone"></i> Call +91 8409531615
          </a>
          <a href="https://api.whatsapp.com/send?phone=918409531615&text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20to%20compare%20local%20vs%20intercity%20rates%20in%20Chatra." class="btn-whatsapp" style="background: #22c55e; color: #ffffff; padding: 14px 28px; border-radius: 8px; font-weight: 700; text-decoration: none; display: inline-flex; align-items: center; gap: 10px; font-size: 1rem; box-shadow: 0 10px 25px rgba(34, 197, 94, 0.4);" id="hero-wa-btn">
            <i class="fa-brands fa-whatsapp"></i> Compare Rates
          </a>
        </div>
      </div>

      <!-- Quick Lead Form -->
      <div class="hero-form-card" style="flex: 0 1 420px; background: #ffffff; border-radius: 12px; padding: 30px; color: #1e293b; box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);" id="compare-form-box">
        <h3 style="font-size: 1.4rem; font-weight: 700; margin-bottom: 8px; color: #0f172a;">Rate Comparison Estimator</h3>
        <p style="font-size: 0.88rem; color: #64748b; margin-bottom: 20px;">Receive both local &amp; intercity estimates!</p>
        
        <form onsubmit="sendHeroWhatsAppLead(event, this);" id="compare-lead-form">
          <div style="margin-bottom: 14px;">
            <input type="text" name="name" placeholder="Your Name" required style="width: 100%; padding: 12px 14px; border: 1px solid #cbd5e1; border-radius: 6px; font-size: 0.95rem; box-sizing: border-box;">
          </div>
          <div style="margin-bottom: 14px;">
            <input type="tel" name="phone" placeholder="Mobile Number" required style="width: 100%; padding: 12px 14px; border: 1px solid #cbd5e1; border-radius: 6px; font-size: 0.95rem; box-sizing: border-box;">
          </div>
          <div style="margin-bottom: 14px;">
            <input type="text" name="move_from" placeholder="Pickup Location (e.g. Chatra)" required style="width: 100%; padding: 12px 14px; border: 1px solid #cbd5e1; border-radius: 6px; font-size: 0.95rem; box-sizing: border-box;">
          </div>
          <div style="margin-bottom: 14px;">
            <input type="text" name="move_to" placeholder="Destination City" required style="width: 100%; padding: 12px 14px; border: 1px solid #cbd5e1; border-radius: 6px; font-size: 0.95rem; box-sizing: border-box;">
          </div>
          <div style="margin-bottom: 18px;">
            <textarea name="message" placeholder="Details of items (e.g., 2BHK House, Bike)" rows="3" style="width: 100%; padding: 12px 14px; border: 1px solid #cbd5e1; border-radius: 6px; font-size: 0.95rem; box-sizing: border-box;"></textarea>
          </div>
          <button type="submit" style="width: 100%; background: #2563eb; color: #ffffff; border: none; padding: 14px; border-radius: 6px; font-size: 1rem; font-weight: 700; cursor: pointer;" id="submit-compare-btn">
            Get Dual Rate Card <i class="fa-solid fa-arrow-right" style="margin-left: 6px;"></i>
          </button>
        </form>
      </div>

    </div>
  </section>

  <!-- Detailed Guide Content (1800+ words) -->
  
  <!-- Section 2: Trust Counter & Live Achievements -->
  <section class="stats-section" style="padding: 45px 0; background: #070d1e; border-bottom: 1px solid rgba(245, 158, 11, 0.2);" id="trust-counter-bar">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 15px;">
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 20px; text-align: center;">
        <div style="padding: 22px; background: rgba(23, 42, 84, 0.5); border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">3,850+</div>
          <div style="font-size: 0.9rem; color: #cbd5e1; margin-top: 5px;">Relocations Completed</div>
        </div>
        <div style="padding: 22px; background: rgba(23, 42, 84, 0.5); border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">Express Transit</div>
          <div style="font-size: 0.9rem; color: #cbd5e1; margin-top: 5px;">Dedicated GPS Container Fleet</div>
        </div>
        <div style="padding: 22px; background: rgba(23, 42, 84, 0.5); border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">100%</div>
          <div style="font-size: 0.9rem; color: #cbd5e1; margin-top: 5px;">Safe 7-Layer Protection</div>
        </div>
        <div style="padding: 22px; background: rgba(23, 42, 84, 0.5); border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">IBA Approved</div>
          <div style="font-size: 0.9rem; color: #cbd5e1; margin-top: 5px;">GST Invoice &amp; Employee Claims</div>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 3: Technical Overview & 6-Card Feature Grid -->
  <section style="padding: 70px 0; background: #0b132b; color: #e2e8f0; line-height: 1.8;" id="technical-overview-section">
    <div class="container" style="max-width: 1100px; margin: 0 auto; padding: 0 15px;">
      
      <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px; display: inline-block; margin-bottom: 10px;">Technical Route Overview</span>
      <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin: 0 0 20px 0;">
        Technical Relocation Logistics & Service Standards in Local Vs Intercity Shifting Charges Chatra
      </h2>

      <p style="font-size: 1.05rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 20px;">
        Managing household shifting, office relocation, and vehicle shipping in Local Vs Intercity Shifting Charges Chatra requires experienced logistics coordination. Shree Ashirwad Packers and Movers delivers end-to-end relocation services across Local Vs Intercity Shifting Charges Chatra with dedicated container vehicles, 7-layer protective packaging, and 100% claimable IBA GST invoices.
      </p>

      <p style="font-size: 1.05rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 30px;">
        At <strong>Shree Ashirwad Packers and Movers</strong>, we maintain high engineering and safety standards for every move. Whether you are transferring corporate executive households, shipping high-value two-wheelers and cars, or relocating residential goods, our trained move crews manage every detail from origin loading to destination unboxing and carpentry reassembly.
      </p>

      <!-- 6 Cards Grid (3x2 Layout) -->
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 24px; margin: 35px 0;">
        
        <!-- Card 1 -->
        <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 24px; box-shadow: 0 10px 25px rgba(0,0,0,0.3);">
          <div style="background: rgba(245, 158, 11, 0.15); width: 46px; height: 46px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.3rem; color: #f59e0b; margin-bottom: 14px;">🚚</div>
          <h3 style="font-size: 1.15rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">Dedicated Enclosed Containers</h3>
          <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.6; margin: 0;">
            Weatherproof sealed container trucks (14ft, 17ft, 19ft, 22ft) protecting goods against rain, highway dust, and transit vibration with zero transshipment.
          </p>
        </div>

        <!-- Card 2 -->
        <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 24px; box-shadow: 0 10px 25px rgba(0,0,0,0.3);">
          <div style="background: rgba(245, 158, 11, 0.15); width: 46px; height: 46px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.3rem; color: #f59e0b; margin-bottom: 14px;">🏙️</div>
          <h3 style="font-size: 1.15rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">Complete Doorstep Service</h3>
          <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.6; margin: 0;">
            Complete origin pickup, ground floor to high-rise loading, highway express transit, and destination doorstep delivery with zero hassle.
          </p>
        </div>

        <!-- Card 3 -->
        <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 24px; box-shadow: 0 10px 25px rgba(0,0,0,0.3);">
          <div style="background: rgba(245, 158, 11, 0.15); width: 46px; height: 46px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.3rem; color: #f59e0b; margin-bottom: 14px;">🛡️</div>
          <h3 style="font-size: 1.15rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">IBA Approved GST Billing</h3>
          <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.6; margin: 0;">
            100% claimable IBA-compliant relocation bills, Lorry Receipts (LR), money receipts, and itemized inventory lists for corporate & employee reimbursement.
          </p>
        </div>

        <!-- Card 4 -->
        <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 24px; box-shadow: 0 10px 25px rgba(0,0,0,0.3);">
          <div style="background: rgba(245, 158, 11, 0.15); width: 46px; height: 46px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.3rem; color: #f59e0b; margin-bottom: 14px;">📦</div>
          <h3 style="font-size: 1.15rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">7-Layer Heavy Packaging</h3>
          <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.6; margin: 0;">
            Multi-layer shock protection combining heavy bubble wrap, 5-ply corrugated fiberboard, stretch wrap, foam corner guards, and timber crating.
          </p>
        </div>

        <!-- Card 5 -->
        <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 24px; box-shadow: 0 10px 25px rgba(0,0,0,0.3);">
          <div style="background: rgba(245, 158, 11, 0.15); width: 46px; height: 46px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.3rem; color: #f59e0b; margin-bottom: 14px;">🚗</div>
          <h3 style="font-size: 1.15rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">Covered Vehicle Carriers</h3>
          <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.6; margin: 0;">
            Specialized covered car trailers with wheel-chock safety locks and padded motorcycle container transport for scratch-free delivery.
          </p>
        </div>

        <!-- Card 6 -->
        <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 24px; box-shadow: 0 10px 25px rgba(0,0,0,0.3);">
          <div style="background: rgba(245, 158, 11, 0.15); width: 46px; height: 46px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.3rem; color: #f59e0b; margin-bottom: 14px;">👨‍🔧</div>
          <h3 style="font-size: 1.15rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">Carpentry &amp; Assembly Included</h3>
          <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.6; margin: 0;">
            Experienced move crews dismantle double beds, wardrobes, and dining tables at origin and reassemble every item at destination.
          </p>
        </div>

      </div>

    </div>
  </section>

  <!-- Section 4: 4-Protocol Zero-Damage Safety System -->
  <section style="padding: 70px 0; background: #070d1e; color: #ffffff; border-top: 1px solid rgba(245, 158, 11, 0.15);" id="safety-protocols-section">
    <div class="container" style="max-width: 1100px; margin: 0 auto; padding: 0 15px;">
      
      <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px; display: inline-block; margin-bottom: 10px;">Safety Protocols</span>
      <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin: 0 0 20px 0;">
        Our 4-Protocol Zero-Damage Execution System
      </h2>
      <p style="font-size: 1.05rem; color: #cbd5e1; line-height: 1.7; margin-bottom: 30px;">
        Transporting valuable household goods, commercial cargo, and personal vehicles demands rigorous safety engineering. At Shree Ashirwad Packers and Movers, we enforce a mandatory 4-protocol safety system for every move:
      </p>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 24px;">
        
        <!-- Protocol 1 -->
        <div style="background: #101c40; padding: 26px; border-radius: 12px; border: 1.5px solid rgba(245, 158, 11, 0.25);">
          <div style="font-size: 1.3rem; font-weight: 800; color: #f59e0b; margin-bottom: 12px;">Protocol 1: Multi-Layer Material Shielding</div>
          <p style="font-size: 0.95rem; color: #cbd5e1; line-height: 1.7; margin: 0;">
            Every household item undergoes multi-layer wrapping combining air-bubble film, waterproof shrink wrap, 5-ply corrugated sheets, and foam corner guards. Fragile Smart TVs, glass tops, and mirrors receive custom wooden crating built on-site before vehicle loading.
          </p>
        </div>

        <!-- Protocol 2 -->
        <div style="background: #101c40; padding: 26px; border-radius: 12px; border: 1.5px solid rgba(245, 158, 11, 0.25);">
          <div style="font-size: 1.3rem; font-weight: 800; color: #f59e0b; margin-bottom: 12px;">Protocol 2: Container Anchorage System</div>
          <p style="font-size: 0.95rem; color: #cbd5e1; line-height: 1.7; margin: 0;">
            Inside our closed container trucks, goods are anchored using heavy-duty nylon safety belts tied to internal wall rings. This eliminates cargo sliding, friction scuffs, or tipping over during highway acceleration and sudden braking.
          </p>
        </div>

        <!-- Protocol 3 -->
        <div style="background: #101c40; padding: 26px; border-radius: 12px; border: 1.5px solid rgba(245, 158, 11, 0.25);">
          <div style="font-size: 1.3rem; font-weight: 800; color: #f59e0b; margin-bottom: 12px;">Protocol 3: Live Satellite GPS Tracking</div>
          <p style="font-size: 0.95rem; color: #cbd5e1; line-height: 1.7; margin: 0;">
            Our vehicles are fitted with real-time satellite GPS tracking hardware. Clients receive direct location updates on WhatsApp, allowing complete peace of mind while your container truck travels to its destination.
          </p>
        </div>

        <!-- Protocol 4 -->
        <div style="background: #101c40; padding: 26px; border-radius: 12px; border: 1.5px solid rgba(245, 158, 11, 0.25);">
          <div style="font-size: 1.3rem; font-weight: 800; color: #f59e0b; margin-bottom: 12px;">Protocol 4: Comprehensive Transit Insurance</div>
          <p style="font-size: 0.95rem; color: #cbd5e1; line-height: 1.7; margin: 0;">
            We back every shipment with 100% full-value transit insurance policy documentation. In the unlikely event of any highway incident, claims are processed promptly with zero financial loss to you.
          </p>
        </div>

      </div>

    </div>
  </section>

  <!-- Section 5: Transparent Pricing Matrix Table -->
  <section style="padding: 70px 0; background: #0b132b; color: #ffffff;" id="pricing-matrix-section">
    <div class="container" style="max-width: 1100px; margin: 0 auto; padding: 0 15px;">
      
      <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px; display: inline-block; margin-bottom: 10px;">Transparent Pricing</span>
      <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin: 0 0 20px 0;">
        Estimated Shifting Charges & Tariff Breakdown: Local Vs Intercity Shifting Charges Chatra
      </h2>
      <p style="font-size: 1.05rem; color: #cbd5e1; line-height: 1.7; margin-bottom: 25px;">
        We believe in 100% transparent pricing with zero hidden fees or surprise surcharges. Below is our baseline tariff breakdown for household shifting, vehicle transport, and luggage items:
      </p>

      <div style="overflow-x: auto; margin-bottom: 30px;">
        <table style="width: 100%; border-collapse: collapse; background: #172a54; border-radius: 12px; overflow: hidden; border: 1px solid rgba(245, 158, 11, 0.3);">
          <thead>
            <tr style="background: linear-gradient(135deg, #1c2541 0%, #0b132b 100%); color: #f59e0b; text-align: left; font-size: 0.95rem;">
              <th style="padding: 16px 20px; border-bottom: 2px solid rgba(245, 158, 11, 0.4);">Shifting Type / House Size</th>
              <th style="padding: 16px 20px; border-bottom: 2px solid rgba(245, 158, 11, 0.4);">Packaging &amp; Material</th>
              <th style="padding: 16px 20px; border-bottom: 2px solid rgba(245, 158, 11, 0.4);">Truck Type &amp; Vehicle</th>
              <th style="padding: 16px 20px; border-bottom: 2px solid rgba(245, 158, 11, 0.4);">Estimated Cost (₹)</th>
            </tr>
          </thead>
          <tbody style="color: #cbd5e1; font-size: 0.9rem; line-height: 1.6;">
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.08);">
              <td style="padding: 14px 20px; font-weight: 700; color: #ffffff;">1 BHK Small House / Studio</td>
              <td style="padding: 14px 20px;">Standard 3-Layer Packaging</td>
              <td style="padding: 14px 20px;">11 ft Covered Pickup Truck</td>
              <td style="padding: 14px 20px; font-weight: 700; color: #f59e0b;">₹3,500 - ₹6,500</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.08); background: rgba(255,255,255,0.02);">
              <td style="padding: 14px 20px; font-weight: 700; color: #ffffff;">2 BHK Standard Apartment</td>
              <td style="padding: 14px 20px;">Premium 5-Layer Packaging</td>
              <td style="padding: 14px 20px;">14 ft Sealed Container Truck</td>
              <td style="padding: 14px 20px; font-weight: 700; color: #f59e0b;">₹6,500 - ₹11,500</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.08);">
              <td style="padding: 14px 20px; font-weight: 700; color: #ffffff;">3 BHK Large Residence</td>
              <td style="padding: 14px 20px;">7-Layer Packaging + TV Crate</td>
              <td style="padding: 14px 20px;">17/19 ft Container Truck</td>
              <td style="padding: 14px 20px; font-weight: 700; color: #f59e0b;">₹11,500 - ₹17,500</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.08); background: rgba(255,255,255,0.02);">
              <td style="padding: 14px 20px; font-weight: 700; color: #ffffff;">4 BHK Independent Villa / Duplex</td>
              <td style="padding: 14px 20px;">Full Heavy Packaging &amp; Wooden Crating</td>
              <td style="padding: 14px 20px;">22 ft Dedicated Container Truck</td>
              <td style="padding: 14px 20px; font-weight: 700; color: #f59e0b;">₹17,500 - ₹25,000</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.08);">
              <td style="padding: 14px 20px; font-weight: 700; color: #ffffff;">Bike Transport (100cc - 350cc+)</td>
              <td style="padding: 14px 20px;">Bubble + Corrugated + Paddy Padding</td>
              <td style="padding: 14px 20px;">Enclosed Bike Carrier Vehicle</td>
              <td style="padding: 14px 20px; font-weight: 700; color: #f59e0b;">₹1,800 - ₹3,500</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.08); background: rgba(255,255,255,0.02);">
              <td style="padding: 14px 20px; font-weight: 700; color: #ffffff;">Car Transport (Hatchback/Sedan/SUV)</td>
              <td style="padding: 14px 20px;">Car Cover &amp; Wheel Chock Safety Locks</td>
              <td style="padding: 14px 20px;">Covered Hydraulic Car Carrier Trailer</td>
              <td style="padding: 14px 20px; font-weight: 700; color: #f59e0b;">₹4,500 - ₹8,500</td>
            </tr>
            <tr style="background: rgba(255,255,255,0.04);">
              <td style="padding: 14px 20px; font-weight: 700; color: #ffffff;">Part-Load Luggage / Single Item</td>
              <td style="padding: 14px 20px;">Standard Protection Wrapping</td>
              <td style="padding: 14px 20px;">Shared Express Container Truck</td>
              <td style="padding: 14px 20px; font-weight: 700; color: #f59e0b;">₹1,500 - ₹3,800</td>
            </tr>
          </tbody>
        </table>
      </div>

      <p style="font-size: 0.88rem; color: #94a3b8; line-height: 1.6; margin: 0;">
        *Note: Final price estimates depend on total inventory volume, selected packaging materials, origin/destination floor elevation (elevator availability), and specific insurance requirements. Contact us at <strong>+91 8409531615</strong> for a fixed written quotation.
      </p>

    </div>
  </section>

  <!-- Section 6: Step-by-Step 5-Stage Relocation Workflow -->
  <section style="padding: 70px 0; background: #070d1e; color: #ffffff; border-top: 1px solid rgba(245, 158, 11, 0.15);" id="workflow-section">
    <div class="container" style="max-width: 1100px; margin: 0 auto; padding: 0 15px;">
      
      <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px; display: inline-block; margin-bottom: 10px;">Relocation Workflow</span>
      <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin: 0 0 20px 0;">
        Step-by-Step 5-Stage Relocation Workflow: Local Vs Intercity Shifting Charges Chatra
      </h2>
      <p style="font-size: 1.05rem; color: #cbd5e1; line-height: 1.7; margin-bottom: 35px;">
        To guarantee 100% damage-free execution, Shree Ashirwad Packers and Movers follows a strictly monitored 5-stage moving workflow for every household, office, and vehicle relocation in Local Vs Intercity Shifting Charges Chatra:
      </p>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 24px;">
        
        <!-- Stage 1 -->
        <div style="background: linear-gradient(145deg, #101c40 0%, #09122b 100%); padding: 26px; border-radius: 12px; border: 1.5px solid rgba(245, 158, 11, 0.25); position: relative;">
          <span style="font-size: 2rem; font-weight: 900; color: rgba(245, 158, 11, 0.3); position: absolute; right: 20px; top: 15px;">01</span>
          <h3 style="font-size: 1.2rem; font-weight: 700; color: #f59e0b; margin-bottom: 12px; padding-right: 40px;">Stage 1: Pre-Move Technical Survey &amp; Assessment</h3>
          <p style="font-size: 0.93rem; color: #cbd5e1; line-height: 1.7; margin: 0;">
            Our certified move coordinator conducts an on-site or digital inventory audit to evaluate item volume, fragile goods, floor elevation, and vehicle transport requirements, issuing an all-inclusive binding written estimate.
          </p>
        </div>

        <!-- Stage 2 -->
        <div style="background: linear-gradient(145deg, #101c40 0%, #09122b 100%); padding: 26px; border-radius: 12px; border: 1.5px solid rgba(245, 158, 11, 0.25); position: relative;">
          <span style="font-size: 2rem; font-weight: 900; color: rgba(245, 158, 11, 0.3); position: absolute; right: 20px; top: 15px;">02</span>
          <h3 style="font-size: 1.2rem; font-weight: 700; color: #f59e0b; margin-bottom: 12px; padding-right: 40px;">Stage 2: Multi-Layer Protective Shielding &amp; Wrapping</h3>
          <p style="font-size: 0.93rem; color: #cbd5e1; line-height: 1.7; margin: 0;">
            Our expert packing crew applies specialized 7-layer materials including high-density air-bubble rolls, 5-ply corrugated sheets, stretch wrap, edge corner guards, and custom wooden crating for Smart TVs and glass items.
          </p>
        </div>

        <!-- Stage 3 -->
        <div style="background: linear-gradient(145deg, #101c40 0%, #09122b 100%); padding: 26px; border-radius: 12px; border: 1.5px solid rgba(245, 158, 11, 0.25); position: relative;">
          <span style="font-size: 2rem; font-weight: 900; color: rgba(245, 158, 11, 0.3); position: absolute; right: 20px; top: 15px;">03</span>
          <h3 style="font-size: 1.2rem; font-weight: 700; color: #f59e0b; margin-bottom: 12px; padding-right: 40px;">Stage 3: Container Anchorage &amp; Vehicle Loading</h3>
          <p style="font-size: 0.93rem; color: #cbd5e1; line-height: 1.7; margin: 0;">
            Goods are systematically loaded into weather-proof enclosed container trucks using heavy-duty nylon safety belts and wall anchorage rings to prevent cargo movement, friction scuffs, or shifting during transit.
          </p>
        </div>

        <!-- Stage 4 -->
        <div style="background: linear-gradient(145deg, #101c40 0%, #09122b 100%); padding: 26px; border-radius: 12px; border: 1.5px solid rgba(245, 158, 11, 0.25); position: relative;">
          <span style="font-size: 2rem; font-weight: 900; color: rgba(245, 158, 11, 0.3); position: absolute; right: 20px; top: 15px;">04</span>
          <h3 style="font-size: 1.2rem; font-weight: 700; color: #f59e0b; margin-bottom: 12px; padding-right: 40px;">Stage 4: Live Satellite GPS Transit &amp; Toll Management</h3>
          <p style="font-size: 0.93rem; color: #cbd5e1; line-height: 1.7; margin: 0;">
            Vehicles travel along optimized highway corridors under constant satellite GPS tracking. Clients receive real-time location updates on WhatsApp, backed by full transit insurance documentation.
          </p>
        </div>

        <!-- Stage 5 -->
        <div style="background: linear-gradient(145deg, #101c40 0%, #09122b 100%); padding: 26px; border-radius: 12px; border: 1.5px solid rgba(245, 158, 11, 0.25); position: relative;">
          <span style="font-size: 2rem; font-weight: 900; color: rgba(245, 158, 11, 0.3); position: absolute; right: 20px; top: 15px;">05</span>
          <h3 style="font-size: 1.2rem; font-weight: 700; color: #f59e0b; margin-bottom: 12px; padding-right: 40px;">Stage 5: Destination Unboxing, Carpentry &amp; Positioning</h3>
          <p style="font-size: 0.93rem; color: #cbd5e1; line-height: 1.7; margin: 0;">
            Upon arrival at destination, our move team unloads, unpacks, reassembles double beds, modular wardrobes, and dining tables, placing each item in your designated rooms for immediate hassle-free living.
          </p>
        </div>

      </div>

    </div>
  </section>

  <!-- Section 7: IBA Approved Corporate & Government Reimbursement Documentation -->
  <section style="padding: 70px 0; background: #0b132b; color: #ffffff; border-top: 1px solid rgba(245, 158, 11, 0.15);" id="iba-documentation-section">
    <div class="container" style="max-width: 1100px; margin: 0 auto; padding: 0 15px;">
      
      <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px; display: inline-block; margin-bottom: 10px;">IBA Reimbursement Docs</span>
      <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin: 0 0 20px 0;">
        100% Claimable IBA Approved Billing &amp; Relocation Documentation: Local Vs Intercity Shifting Charges Chatra
      </h2>
      <p style="font-size: 1.05rem; color: #cbd5e1; line-height: 1.7; margin-bottom: 35px;">
        Government officers, PSU employees, police personnel, defense staff, and corporate executives in Local Vs Intercity Shifting Charges Chatra receive complete, 100% claimable relocation documentation accepted by all employers across India:
      </p>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 24px;">
        
        <!-- Doc 1 -->
        <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); padding: 26px; border-radius: 12px; border: 1.5px solid rgba(245, 158, 11, 0.3);">
          <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 14px;">
            <div style="background: rgba(245, 158, 11, 0.2); width: 42px; height: 42px; border-radius: 8px; display: flex; align-items: center; justify-content: center; color: #f59e0b; font-size: 1.2rem; font-weight: 800;">📄</div>
            <h3 style="font-size: 1.15rem; font-weight: 700; color: #ffffff; margin: 0;">Official GST Moving Invoice</h3>
          </div>
          <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.6; margin: 0;">
            Original TAX invoice generated with valid 15-digit GSTIN, state SAC code (996511), clear freight charges, labor fees, and packaging material breakdowns for tax claim approval.
          </p>
        </div>

        <!-- Doc 2 -->
        <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); padding: 26px; border-radius: 12px; border: 1.5px solid rgba(245, 158, 11, 0.3);">
          <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 14px;">
            <div style="background: rgba(245, 158, 11, 0.2); width: 42px; height: 42px; border-radius: 8px; display: flex; align-items: center; justify-content: center; color: #f59e0b; font-size: 1.2rem; font-weight: 800;">🚚</div>
            <h3 style="font-size: 1.15rem; font-weight: 700; color: #ffffff; margin: 0;">Consignment Lorry Receipt (LR Copy)</h3>
          </div>
          <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.6; margin: 0;">
            Official stamped transport Lorry Receipt verifying container truck registration number, driver details, origin-to-destination route, and weight dispatch certificate.
          </p>
        </div>

        <!-- Doc 3 -->
        <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); padding: 26px; border-radius: 12px; border: 1.5px solid rgba(245, 158, 11, 0.3);">
          <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 14px;">
            <div style="background: rgba(245, 158, 11, 0.2); width: 42px; height: 42px; border-radius: 8px; display: flex; align-items: center; justify-content: center; color: #f59e0b; font-size: 1.2rem; font-weight: 800;">📋</div>
            <h3 style="font-size: 1.15rem; font-weight: 700; color: #ffffff; margin: 0;">Itemized Inventory Packing List</h3>
          </div>
          <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.6; margin: 0;">
            Comprehensive box-by-box inventory declaration sheet listing all furniture, electronics, kitchenware, and personal effects signed by origin packing supervisor.
          </p>
        </div>

        <!-- Doc 4 -->
        <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); padding: 26px; border-radius: 12px; border: 1.5px solid rgba(245, 158, 11, 0.3);">
          <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 14px;">
            <div style="background: rgba(245, 158, 11, 0.2); width: 42px; height: 42px; border-radius: 8px; display: flex; align-items: center; justify-content: center; color: #f59e0b; font-size: 1.2rem; font-weight: 800;">💳</div>
            <h3 style="font-size: 1.15rem; font-weight: 700; color: #ffffff; margin: 0;">Stamped Payment Money Receipt</h3>
          </div>
          <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.6; margin: 0;">
            Official company-stamped financial payment receipt specifying payment transaction ID, advance booking amount, and final settlement confirmation.
          </p>
        </div>

        <!-- Doc 5 -->
        <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); padding: 26px; border-radius: 12px; border: 1.5px solid rgba(245, 158, 11, 0.3);">
          <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 14px;">
            <div style="background: rgba(245, 158, 11, 0.2); width: 42px; height: 42px; border-radius: 8px; display: flex; align-items: center; justify-content: center; color: #f59e0b; font-size: 1.2rem; font-weight: 800;">🛡️</div>
            <h3 style="font-size: 1.15rem; font-weight: 700; color: #ffffff; margin: 0;">Valid Transit Insurance Policy</h3>
          </div>
          <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.6; margin: 0;">
            Original 100% full-value transit insurance policy document issued by national insurance partners protecting household assets against highway hazards.
          </p>
        </div>

      </div>

    </div>
  </section>

  <!-- Section 8: Internal Locality & Route Links Grid -->
  <section style="padding: 70px 0; background: #070d1e; color: #ffffff; border-top: 1px solid rgba(245, 158, 11, 0.15);" id="internal-links-grid-section">
    <div class="container" style="max-width: 1100px; margin: 0 auto; padding: 0 15px;">
      
      <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px; display: inline-block; margin-bottom: 10px;">Chatra Relocation Network</span>
      <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin: 0 0 20px 0;">
        Chatra District &amp; Intercity Relocation Network
      </h2>
      <p style="font-size: 1.05rem; color: #cbd5e1; line-height: 1.7; margin-bottom: 35px;">
        Explore our key service hubs, major industrial townships, and primary intercity transport corridors connected to Local Vs Intercity Shifting Charges Chatra:
      </p>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 20px;">
        
        <a href="<?php echo SITE_URL; ?>packers-and-movers-in-chatra" style="text-decoration: none; display: block; background: #101c40; padding: 20px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.25); transition: transform 0.2s;" id="link-chatra-hub">
          <div style="font-size: 1.1rem; font-weight: 700; color: #f59e0b; margin-bottom: 6px;">Chatra Main Hub</div>
          <div style="font-size: 0.88rem; color: #94a3b8;">Central City &amp; District Headquarters Shifting</div>
        </a>

        <a href="<?php echo SITE_URL; ?>packers-and-movers-chatra-to-ranchi" style="text-decoration: none; display: block; background: #101c40; padding: 20px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.25); transition: transform 0.2s;" id="link-chatra-ranchi">
          <div style="font-size: 1.1rem; font-weight: 700; color: #f59e0b; margin-bottom: 6px;">Chatra to Ranchi</div>
          <div style="font-size: 0.88rem; color: #94a3b8;">Capital City Express Household Transport</div>
        </a>

        <a href="<?php echo SITE_URL; ?>packers-and-movers-chatra-to-jamshedpur" style="text-decoration: none; display: block; background: #101c40; padding: 20px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.25); transition: transform 0.2s;" id="link-chatra-jamshedpur">
          <div style="font-size: 1.1rem; font-weight: 700; color: #f59e0b; margin-bottom: 6px;">Chatra to Jamshedpur</div>
          <div style="font-size: 0.88rem; color: #94a3b8;">Steel City Industrial &amp; Residential Moving</div>
        </a>

        <a href="<?php echo SITE_URL; ?>packers-and-movers-chatra-to-dhanbad" style="text-decoration: none; display: block; background: #101c40; padding: 20px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.25); transition: transform 0.2s;" id="link-chatra-dhanbad">
          <div style="font-size: 1.1rem; font-weight: 700; color: #f59e0b; margin-bottom: 6px;">Chatra to Dhanbad</div>
          <div style="font-size: 0.88rem; color: #94a3b8;">Coal Belt Container Cargo Shifting</div>
        </a>

        <a href="<?php echo SITE_URL; ?>packers-and-movers-chatra-to-hazaribagh" style="text-decoration: none; display: block; background: #101c40; padding: 20px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.25); transition: transform 0.2s;" id="link-chatra-hazaribagh">
          <div style="font-size: 1.1rem; font-weight: 700; color: #f59e0b; margin-bottom: 6px;">Chatra to Hazaribagh</div>
          <div style="font-size: 0.88rem; color: #94a3b8;">NH-522 Express Inter-District Corridor</div>
        </a>

        <a href="<?php echo SITE_URL; ?>packers-and-movers-chatra-to-bokaro" style="text-decoration: none; display: block; background: #101c40; padding: 20px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.25); transition: transform 0.2s;" id="link-chatra-bokaro">
          <div style="font-size: 1.1rem; font-weight: 700; color: #f59e0b; margin-bottom: 6px;">Chatra to Bokaro</div>
          <div style="font-size: 0.88rem; color: #94a3b8;">Steel City Dedicated Truck Shifting</div>
        </a>

        <a href="<?php echo SITE_URL; ?>packers-and-movers-ntpc-township-tandwa-chatra" style="text-decoration: none; display: block; background: #101c40; padding: 20px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.25); transition: transform 0.2s;" id="link-ntpc-tandwa">
          <div style="font-size: 1.1rem; font-weight: 700; color: #f59e0b; margin-bottom: 6px;">NTPC Township Tandwa</div>
          <div style="font-size: 0.88rem; color: #94a3b8;">Thermal Power Quarter Moving Services</div>
        </a>

        <a href="<?php echo SITE_URL; ?>packers-and-movers-ccl-colony-tandwa-chatra" style="text-decoration: none; display: block; background: #101c40; padding: 20px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.25); transition: transform 0.2s;" id="link-ccl-tandwa">
          <div style="font-size: 1.1rem; font-weight: 700; color: #f59e0b; margin-bottom: 6px;">CCL Colony Tandwa</div>
          <div style="font-size: 0.88rem; color: #94a3b8;">Amrapali &amp; Magadh Mining Project Shifting</div>
        </a>

      </div>

    </div>
  </section>






  <section class="content-guide-section" style="background: #ffffff; padding: 60px 0;" id="detailed-comparison-guide">
    <div class="container" style="max-width: 1100px; margin: 0 auto; padding: 0 15px; color: #334155; line-height: 1.8;">
      
      <h2 style="font-size: 2.2rem; font-weight: 800; color: #0f172a; margin-bottom: 25px;">Detailed Breakdown: Local vs Intercity Relocation in Chatra</h2>

      <p style="font-size: 1.05rem; margin-bottom: 20px;">
        When evaluating moving expenses in Chatra, clients often wonder why intercity moving rates are significantly higher than local house shifting charges. While local moves within Chatra town focus primarily on loading labor, short-distance truck trips, and essential packing, long-distance intercity moves involve complex highway logistics, dedicated container vehicles, multi-layer protective packaging, toll taxes, and transit insurance policies.
      </p>

      <h3 style="font-size: 1.6rem; font-weight: 700; color: #1e293b; margin-top: 30px; margin-bottom: 15px;">Key Differences at a Glance</h3>

      <div style="background: #ffffff; border-radius: 10px; border: 1px solid #e2e8f0; overflow: hidden; margin-bottom: 35px; box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05);">
        <div style="overflow-x: auto;">
          <table style="width: 100%; border-collapse: collapse; text-align: left; font-size: 0.95rem;">
            <thead>
              <tr style="background: #0f172a; color: #ffffff; font-weight: 700;">
                <th style="padding: 15px 20px;">Feature / Parameter</th>
                <th style="padding: 15px 20px;">Local Shifting (Within Chatra)</th>
                <th style="padding: 15px 20px;">Intercity Shifting (Highway Routes)</th>
              </tr>
            </thead>
            <tbody style="color: #475569;">
              <tr style="border-bottom: 1px solid #f1f5f9;">
                <td style="padding: 15px 20px; font-weight: 600; color: #0f172a;">Primary Cost Factors</td>
                <td style="padding: 15px 20px;">Labor, basic packing, local truck trip</td>
                <td style="padding: 15px 20px;">Distance km, fuel, tolls, 7-layer pack, insurance</td>
              </tr>
              <tr style="border-bottom: 1px solid #f1f5f9; background: #fafafa;">
                <td style="padding: 15px 20px; font-weight: 600; color: #0f172a;">Packaging Standard</td>
                <td style="padding: 15px 20px;">3-layer basic bubble &amp; stretch wrap</td>
                <td style="padding: 15px 20px;">Rigid 7-layer pack + wooden crating</td>
              </tr>
              <tr style="border-bottom: 1px solid #f1f5f9;">
                <td style="padding: 15px 20px; font-weight: 600; color: #0f172a;">Transport Vehicle</td>
                <td style="padding: 15px 20px;">Open Pickup / Small 14ft truck</td>
                <td style="padding: 15px 20px;">Dedicated GPS-fitted container truck</td>
              </tr>
              <tr style="border-bottom: 1px solid #f1f5f9; background: #fafafa;">
                <td style="padding: 15px 20px; font-weight: 600; color: #0f172a;">Transit Duration</td>
                <td style="padding: 15px 20px;">4 to 8 hours (Same day)</td>
                <td style="padding: 15px 20px;">1 to 5 days (Doorstep delivery)</td>
              </tr>
              <tr style="border-bottom: 1px solid #f1f5f9;">
                <td style="padding: 15px 20px; font-weight: 600; color: #0f172a;">Transit Insurance</td>
                <td style="padding: 15px 20px;">Optional for short trips</td>
                <td style="padding: 15px 20px;">Mandatory (3% declared goods value)</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

    </div>
  </section>

  <!-- FAQs Section -->
  <section class="faq-section" style="background: #f8fafc; padding: 60px 0; border-top: 1px solid #e2e8f0;" id="faqs">
    <div class="container" style="max-width: 1000px; margin: 0 auto; padding: 0 15px;">
      <div style="text-align: center; margin-bottom: 45px;">
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #0f172a; margin-bottom: 10px;">Frequently Asked Questions</h2>
        <p style="color: #64748b; font-size: 1rem;">Comparing local vs intercity relocation costs in Chatra.</p>
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

  <!-- Bottom CTA Banner -->
  <section class="cta-banner" style="background: linear-gradient(135deg, #1e3a8a 0%, #0f172a 100%); color: #ffffff; padding: 50px 0; text-align: center;" id="bottom-cta">
    <div class="container" style="max-width: 900px; margin: 0 auto; padding: 0 15px;">
      <h2 style="font-size: 2.2rem; font-weight: 800; margin-bottom: 15px; color: #ffffff;">Get Clear, Transparent Quotes for Local or Intercity Moves!</h2>
      <p style="font-size: 1.1rem; color: #cbd5e1; margin-bottom: 30px; line-height: 1.7;">
        Call Shree Ashirwad Packers and Movers today for binding written rate cards with zero hidden costs!
      </p>
      <div style="display: flex; justify-content: center; gap: 15px; flex-wrap: wrap;">
        <a href="tel:+918409531615" style="background: #2563eb; color: #ffffff; padding: 14px 30px; border-radius: 8px; font-weight: 700; text-decoration: none; display: inline-flex; align-items: center; gap: 10px; font-size: 1.05rem;" id="cta-call-btn">
          <i class="fa-solid fa-phone"></i> Call +91 8409531615
        </a>
        <a href="https://api.whatsapp.com/send?phone=918409531615&text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20to%20compare%20local%20vs%20intercity%20rates%20in%20Chatra." style="background: #22c55e; color: #ffffff; padding: 14px 30px; border-radius: 8px; font-weight: 700; text-decoration: none; display: inline-flex; align-items: center; gap: 10px; font-size: 1.05rem;" id="cta-wa-btn">
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
