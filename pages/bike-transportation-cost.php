<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "Bike Transportation Cost & Shifting Rates Master Guide 2026";
$page_desc = "Complete 2026 Master Guide for Bike Transportation Cost in India. Comprehensive state-wise rate matrix, engine CC price brackets, packing material costs, transit insurance breakdown, and hidden charge prevention.";
$page_keywords = "bike transportation cost, two wheeler shifting charges, bike parcel rate calculator, bike transport price per km, motorcycle relocation charges, iba approved bike transport rates, shree ashirwad packers";
$canonical_url = "https://shreeashirwadpackersandmovers.com/guides/bike-transportation-cost";

// Define 10 Page-Specific FAQs for Header JSON-LD & Page Body Rendering
$faq_list = [
    [
        "question" => "What is the average bike transportation cost in India?",
        "answer" => "The average bike transportation cost ranges from ₹2,200 to ₹4,500 for distances under 500 km, ₹4,000 to ₹6,800 for 500–1,500 km, and ₹6,500 to ₹10,500 for long-haul routes over 1,500 km depending on vehicle weight, engine CC, and packaging tier."
    ],
    [
        "question" => "How do engine CC and bike weight impact shifting charges?",
        "answer" => "Heavier motorcycles (350cc+ Royal Enfields, cruisers, or 600cc+ sports bikes) require wider loading ramps, extra tie-down straps, and more volume inside container trucks, resulting in a 20% to 35% surcharge compared to standard 100cc–150cc commuter bikes."
    ],
    [
        "question" => "What packing material costs are included in the quote?",
        "answer" => "Standard professional packing costs (₹600–₹1,200) include 7-layer protection: anti-scratch film, thick bubble wrap, corrugated armor for fuel tanks and side panels, foam wrapping for handlebars/mirrors, and heavy-duty strapping."
    ],
    [
        "question" => "How is transit insurance calculated for bike transport?",
        "answer" => "Transit insurance is calculated at 1.5% of the vehicle's current declared market value. For example, insuring a motorcycle valued at ₹1,000,000 costs ₹1,500 and covers loss, theft, fire, and transit damage."
    ],
    [
        "question" => "Are there any hidden costs in doorstep bike delivery?",
        "answer" => "At Shree Ashirwad Packers and Movers, all quotes are 100% transparent. Door pickup, loading labor, toll taxes, packing materials, and door delivery are included upfront in the official written quotation."
    ],
    [
        "question" => "Is train bike transport cheaper than private container transport?",
        "answer" => "While railway parcel rates (₹1,500–₹3,500) appear cheaper, railways do not include multi-layer professional packaging, door pickup, or insured door delivery, leaving your vehicle at high risk of brake-van scratches."
    ],
    [
        "question" => "What documents are required to get an accurate bike transport quote?",
        "answer" => "You need a copy of the Vehicle Registration Certificate (RC), valid Bike Insurance policy, pollution certificate (PUC), and a government-issued photo ID (Aadhaar or Driving License)."
    ],
    [
        "question" => "Does fuel level inside the tank affect transport cost?",
        "answer" => "For safety and fire hazard prevention, fuel tanks must be drained to under 1 liter before loading. Transporters do not charge extra for empty tanks, but excess fuel must be siphoned out prior to dispatch."
    ],
    [
        "question" => "How do seasonal spikes affect motorcycle relocation charges?",
        "answer" => "Peak relocation months (May–July for academic/job transfers and October–November during festive seasons) can see a 10% to 15% increase in freight demand. Booking 4–7 days in advance locks in baseline rates."
    ],
    [
        "question" => "Can I transport additional riding gear inside the bike shipment?",
        "answer" => "Riding helmets, jackets, and saddlebags can be securely packed alongside the vehicle in dedicated cartons for a minimal handling fee of ₹300–₹600 depending on volume."
    ]
];

require_once __DIR__ . '/../includes/header.php';
?>

<main class="site-main" style="background-color: #0b132b; color: #e2e8f0; font-family: 'Inter', system-ui, -apple-system, sans-serif;">

  <!-- 1. Visual Breadcrumb Navigation Bar -->
  <div class="breadcrumb-wrapper" style="background: rgba(15, 23, 42, 0.8); border-bottom: 1px solid rgba(245, 158, 11, 0.2); padding: 14px 0;">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
      <div class="breadcrumb-list" style="display: flex; align-items: center; gap: 8px; font-size: 0.9rem; color: #94a3b8;">
        <span class="breadcrumb-item"><a href="<?php echo SITE_URL; ?>" title="Home" style="color: #f59e0b; text-decoration: none;">Home</a></span>
        <span class="breadcrumb-separator">/</span>
        <span class="breadcrumb-item"><a href="<?php echo SITE_URL; ?>/guides" title="Guides" style="color: #f59e0b; text-decoration: none;">Guides</a></span>
        <span class="breadcrumb-separator">/</span>
        <span class="breadcrumb-item active" style="color: #cbd5e1;"><?php echo htmlspecialchars($page_title); ?></span>
      </div>
    </div>
  </div>

  <!-- 2. Hero Section with Lead Form -->
  <section class="hero-section" style="background: linear-gradient(135deg, #0b132b 0%, #1c2541 100%); padding: 60px 0; color: #ffffff; border-bottom: 1px solid rgba(255,255,255,0.08);">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
      <div class="hero-grid" style="display: grid; grid-template-columns: 1.2fr 0.8fr; gap: 40px; align-items: center;">
        
        <!-- Hero Text Column -->
        <div class="hero-text">
          <span class="section-tag" style="background: rgba(245, 158, 11, 0.15); color: #f59e0b; border: 1px solid rgba(245, 158, 11, 0.4); padding: 6px 16px; border-radius: 20px; font-size: 0.85rem; font-weight: 700; text-transform: uppercase; display: inline-block; margin-bottom: 15px;">
            Complete 2026 Two-Wheeler Rate Estimator
          </span>
          <h1 style="font-size: 2.7rem; font-weight: 800; line-height: 1.2; margin-bottom: 20px; color: #ffffff;">
            Transparent <span style="color: #f59e0b;">Bike Transportation Cost</span> & Rates
          </h1>
          <p style="font-size: 1.12rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 25px;">
            Calculate exact intercity and interstate bike shifting charges. Understand engine CC pricing brackets, 7-layer packaging fees, transit insurance calculations, and door-to-door container freight rates with zero hidden charges.
          </p>

          <div style="display: flex; gap: 15px; flex-wrap: wrap; margin-bottom: 30px;">
            <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Price Desk" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
              <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call Desk: <?php echo SITE_PHONE; ?>
            </a>
            <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20a%20Bike%20Transport%20Cost%20estimate." title="Chat on WhatsApp" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
              <i class="fab fa-whatsapp" style="margin-right: 8px;"></i> WhatsApp Cost Estimate
            </a>
          </div>

          <div style="display: flex; gap: 20px; font-size: 0.9rem; color: #94a3b8; flex-wrap: wrap;">
            <span><strong style="color: #f59e0b;">Zero Hidden</strong> Surcharges</span>
            <span><strong style="color: #f59e0b;">7-Layer</strong> Protection</span>
            <span><strong style="color: #f59e0b;">100% Insured</strong> Transit</span>
          </div>
        </div>

        <!-- Hero Lead Form Column -->
        <div class="hero-form-card" style="background: rgba(255, 255, 255, 0.05); backdrop-filter: blur(10px); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 16px; padding: 30px; box-shadow: 0 15px 35px rgba(0,0,0,0.4);">
          <h2 style="font-size: 1.4rem; color: #ffffff; margin-bottom: 8px; font-weight: 700; text-align: center;">Calculate Bike Shifting Cost</h2>
          <p style="font-size: 0.85rem; color: #94a3b8; text-align: center; margin-bottom: 20px;">Receive itemized price breakup on WhatsApp in 2 minutes</p>

          <form action="#" method="POST" onsubmit="sendHeroWhatsAppLead(event, this);">
            <div style="margin-bottom: 14px;">
              <input type="text" name="name" class="form-control" placeholder="Your Full Name" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="margin-bottom: 14px;">
              <input type="tel" name="phone" class="form-control" placeholder="10-Digit Mobile Number" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 10px; margin-bottom: 14px;">
              <input type="text" name="move_from" class="form-control" placeholder="Pickup City" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
              <input type="text" name="move_to" class="form-control" placeholder="Delivery City" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <button type="submit" style="width: 100%; padding: 14px; background: linear-gradient(135deg, #d32f2f 0%, #f59e0b 100%); color: #ffffff; border: none; border-radius: 50px; font-weight: 700; font-size: 1rem; cursor: pointer; box-shadow: 0 4px 15px rgba(245, 158, 11, 0.4);">
              Get Itemized Quotation &rarr;
            </button>
          </form>
        </div>

      </div>
    </div>
  </section>

  <!-- 3. Key Metrics & Cost Integrity Stats Grid -->
  <section style="padding: 40px 0; background: #0f172a; border-bottom: 1px solid rgba(255,255,255,0.05);">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 20px; text-align: center;">
        
        <div style="background: rgba(255,255,255,0.03); padding: 25px 15px; border-radius: 12px; border: 1px solid rgba(245,158,11,0.2);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; margin-bottom: 5px;">100%</div>
          <div style="font-size: 0.9rem; color: #94a3b8;">Written Price Guarantee</div>
        </div>

        <div style="background: rgba(255,255,255,0.03); padding: 25px 15px; border-radius: 12px; border: 1px solid rgba(245,158,11,0.2);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; margin-bottom: 5px;">₹0</div>
          <div style="font-size: 0.9rem; color: #94a3b8;">Hidden Octroi/Toll Demurrage</div>
        </div>

        <div style="background: rgba(255,255,255,0.03); padding: 25px 15px; border-radius: 12px; border: 1px solid rgba(245,158,11,0.2);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; margin-bottom: 5px;">1.5%</div>
          <div style="font-size: 0.9rem; color: #94a3b8;">Comprehensive Insurance Rate</div>
        </div>

        <div style="background: rgba(255,255,255,0.03); padding: 25px 15px; border-radius: 12px; border: 1px solid rgba(245,158,11,0.2);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; margin-bottom: 5px;">14,500+</div>
          <div style="font-size: 0.9rem; color: #94a3b8;">Successful Bike Deliveries</div>
        </div>

      </div>
    </div>
  </section>

  <!-- 4. Deep Dive Technical Content Section -->
  <section style="padding: 60px 0; background: #0b132b;">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
      
      <div style="max-width: 900px; margin: 0 auto; line-height: 1.8; color: #cbd5e1;">
        
        <h2 style="font-size: 2rem; color: #ffffff; margin-bottom: 20px; font-weight: 700; border-left: 4px solid #f59e0b; padding-left: 15px;">
          Understanding Bike Transportation Pricing Structure in India
        </h2>

        <p style="margin-bottom: 20px;">
          Navigating two-wheeler transport charges can often be confusing due to wide price variations quoted by unorganized local movers. Understanding how <strong>distance, vehicle displacement (CC), packing quality, transit insurance, and delivery logistics</strong> combine to form your total quotation ensures you receive genuine value without falling prey to cheap low-ball quotes that hide demurrage and unloading surcharges.
        </p>

        <p style="margin-bottom: 20px;">
          At Shree Ashirwad Packers and Movers, we operate on a standardized, itemized pricing framework. Whether you are shipping a light 110cc commuter scooter, a heavy 350cc Royal Enfield Bullet, or a premium 1000cc superbike, our rates reflect actual container truck floor space occupied, fuel consumption per kilometer, and labor overhead.
        </p>

        <h3 style="font-size: 1.5rem; color: #f59e0b; margin: 35px 0 15px 0; font-weight: 700;">
          5 Key Drivers of Bike Relocation Costs
        </h3>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 20px; margin: 25px 0;">
          
          <div style="background: rgba(255,255,255,0.03); padding: 20px; border-radius: 10px; border: 1px solid rgba(255,255,255,0.08);">
            <h4 style="color: #ffffff; font-size: 1.1rem; margin-bottom: 10px;">1. Transit Distance Tiers</h4>
            <p style="font-size: 0.92rem; color: #94a3b8;">Highway line-haul freight per kilometer decreases over longer distances, but total fuel and national highway toll taxes scale linearly with total mileage.</p>
          </div>

          <div style="background: rgba(255,255,255,0.03); padding: 20px; border-radius: 10px; border: 1px solid rgba(255,255,255,0.08);">
            <h4 style="color: #ffffff; font-size: 1.1rem; margin-bottom: 10px;">2. Engine CC & Vehicle Footprint</h4>
            <p style="font-size: 0.92rem; color: #94a3b8;">Scooters (100–125cc) occupy smaller truck bays, whereas heavy cruisers (350–800cc) demand larger wheel-chock footprints and heavier ratchet straps.</p>
          </div>

          <div style="background: rgba(255,255,255,0.03); padding: 20px; border-radius: 10px; border: 1px solid rgba(255,255,255,0.08);">
            <h4 style="color: #ffffff; font-size: 1.1rem; margin-bottom: 10px;">3. 7-Layer Packaging Quality</h4>
            <p style="font-size: 0.92rem; color: #94a3b8;">Multi-layer bubble wrap, heavy corrugated sheet armor, stretch film, and wooden crating (for superbikes) add ₹600 to ₹2,500 depending on protection level.</p>
          </div>

          <div style="background: rgba(255,255,255,0.03); padding: 20px; border-radius: 10px; border: 1px solid rgba(255,255,255,0.08);">
            <h4 style="color: #ffffff; font-size: 1.1rem; margin-bottom: 10px;">4. Transit Insurance Premium</h4>
            <p style="font-size: 0.92rem; color: #94a3b8;">Full all-risk transit insurance is calculated at 1.5% of the vehicle's declared invoice/depreciated value, protecting against accidents, theft, and damage.</p>
          </div>

        </div>

      </div>

    </div>
  </section>

  <!-- 5. Comprehensive State-Wise & Engine CC Tariff Matrix -->
  <section style="padding: 60px 0; background: #0f172a; border-top: 1px solid rgba(255,255,255,0.08); border-bottom: 1px solid rgba(255,255,255,0.08);">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
      
      <h2 style="font-size: 2rem; color: #ffffff; text-align: center; margin-bottom: 12px; font-weight: 700;">
        State-Wise Two-Wheeler Shifting Tariff Matrix (2026 Rates)
      </h2>
      <p style="text-align: center; color: #94a3b8; margin-bottom: 40px; max-width: 700px; margin-left: auto; margin-right: auto;">
        Distance-calibrated price guide categorizing standard scooters, mid-segment motorcycles, and heavy cruisers.
      </p>

      <div style="overflow-x: auto;">
        <table style="width: 100%; border-collapse: collapse; text-align: left; background: rgba(255,255,255,0.02); border-radius: 12px; overflow: hidden; border: 1px solid rgba(245, 158, 11, 0.2);">
          <thead>
            <tr style="background: linear-gradient(135deg, #1c2541 0%, #0b132b 100%); color: #f59e0b; border-bottom: 2px solid rgba(245, 158, 11, 0.3);">
              <th style="padding: 16px 20px; font-size: 0.95rem; text-transform: uppercase;">Distance Range</th>
              <th style="padding: 16px 20px; font-size: 0.95rem; text-transform: uppercase;">Standard Scooter (100-125cc)</th>
              <th style="padding: 16px 20px; font-size: 0.95rem; text-transform: uppercase;">Mid-Segment Bike (150-250cc)</th>
              <th style="padding: 16px 20px; font-size: 0.95rem; text-transform: uppercase;">Cruiser / Royal Enfield (350-500cc)</th>
              <th style="padding: 16px 20px; font-size: 0.95rem; text-transform: uppercase;">Superbike / Crated (600cc+)</th>
            </tr>
          </thead>
          <tbody style="color: #cbd5e1; font-size: 0.95rem;">
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.05);">
              <td style="padding: 16px 20px; font-weight: 700; color: #ffffff;">100 – 400 km</td>
              <td style="padding: 16px 20px;">₹2,200 – ₹3,200</td>
              <td style="padding: 16px 20px;">₹2,800 – ₹3,800</td>
              <td style="padding: 16px 20px;">₹3,500 – ₹4,600</td>
              <td style="padding: 16px 20px; color: #f59e0b;">₹5,500 – ₹7,500</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.05); background: rgba(255,255,255,0.01);">
              <td style="padding: 16px 20px; font-weight: 700; color: #ffffff;">400 – 800 km</td>
              <td style="padding: 16px 20px;">₹3,400 – ₹4,600</td>
              <td style="padding: 16px 20px;">₹4,200 – ₹5,400</td>
              <td style="padding: 16px 20px;">₹5,000 – ₹6,400</td>
              <td style="padding: 16px 20px; color: #f59e0b;">₹7,800 – ₹9,800</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.05);">
              <td style="padding: 16px 20px; font-weight: 700; color: #ffffff;">800 – 1,500 km</td>
              <td style="padding: 16px 20px;">₹4,800 – ₹6,200</td>
              <td style="padding: 16px 20px;">₹5,600 – ₹7,000</td>
              <td style="padding: 16px 20px;">₹6,800 – ₹8,400</td>
              <td style="padding: 16px 20px; color: #f59e0b;">₹10,500 – ₹13,500</td>
            </tr>
            <tr style="background: rgba(255,255,255,0.01);">
              <td style="padding: 16px 20px; font-weight: 700; color: #ffffff;">1,500+ km</td>
              <td style="padding: 16px 20px;">₹6,500 – ₹8,200</td>
              <td style="padding: 16px 20px;">₹7,500 – ₹9,500</td>
              <td style="padding: 16px 20px;">₹8,900 – ₹11,200</td>
              <td style="padding: 16px 20px; color: #f59e0b;">₹14,000 – ₹18,000</td>
            </tr>
          </tbody>
        </table>
      </div>

      <p style="font-size: 0.85rem; color: #94a3b8; margin-top: 15px; text-align: center;">
        * All quotes include door pickup, 7-layer packaging, container truck freight, toll charges, and door delivery. GST (18%) and Transit Insurance (1.5%) billed separately.
      </p>

    </div>
  </section>

  <!-- 6. Step-by-Step Cost Optimization Workflow -->
  <section style="padding: 60px 0; background: #0b132b;">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
      
      <h2 style="font-size: 2rem; color: #ffffff; text-align: center; margin-bottom: 40px; font-weight: 700;">
        How to Get the Most Cost-Effective Bike Shifting Quote
      </h2>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 25px;">
        
        <div style="background: rgba(255,255,255,0.03); padding: 30px 20px; border-radius: 12px; border-top: 3px solid #f59e0b;">
          <div style="font-size: 1.8rem; font-weight: 800; color: #f59e0b; margin-bottom: 10px;">01</div>
          <h3 style="font-size: 1.15rem; color: #ffffff; margin-bottom: 10px;">Advance Booking (4-7 Days Prior)</h3>
          <p style="font-size: 0.9rem; color: #94a3b8;">Booking early locks in baseline container freight rates and avoids peak-demand seasonal surges or rush-order surcharges.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); padding: 30px 20px; border-radius: 12px; border-top: 3px solid #f59e0b;">
          <div style="font-size: 1.8rem; font-weight: 800; color: #f59e0b; margin-bottom: 10px;">02</div>
          <h3 style="font-size: 1.15rem; color: #ffffff; margin-bottom: 10px;">Accurate Vehicle & RC Details</h3>
          <p style="font-size: 0.9rem; color: #94a3b8;">Providing exact engine CC and vehicle weight ensures your quote is calibrated accurately without re-weighing adjustments at transit hubs.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); padding: 30px 20px; border-radius: 12px; border-top: 3px solid #f59e0b;">
          <div style="font-size: 1.8rem; font-weight: 800; color: #f59e0b; margin-bottom: 10px;">03</div>
          <h3 style="font-size: 1.15rem; color: #ffffff; margin-bottom: 10px;">Select Right Packing Grade</h3>
          <p style="font-size: 0.9rem; color: #94a3b8;">Standard 7-layer wrapping provides full protection for commuters; opt for wooden crating only for high-value sports bikes to optimize costs.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); padding: 30px 20px; border-radius: 12px; border-top: 3px solid #f59e0b;">
          <div style="font-size: 1.8rem; font-weight: 800; color: #f59e0b; margin-bottom: 10px;">04</div>
          <h3 style="font-size: 1.15rem; color: #ffffff; margin-bottom: 10px;">Insure at Genuine RC Market Value</h3>
          <p style="font-size: 0.9rem; color: #94a3b8;">Declare realistic depreciated market value on insurance documents to ensure complete claim coverage while keeping premium costs low.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); padding: 30px 20px; border-radius: 12px; border-top: 3px solid #f59e0b;">
          <div style="font-size: 1.8rem; font-weight: 800; color: #f59e0b; margin-bottom: 10px;">05</div>
          <h3 style="font-size: 1.15rem; color: #ffffff; margin-bottom: 10px;">Verify All-Inclusive Quotation</h3>
          <p style="font-size: 0.9rem; color: #94a3b8;">Ensure your written contract explicitly states zero extra charges for loading labor, state border tolls, or doorstep delivery unloading.</p>
        </div>

      </div>

    </div>
  </section>

  <!-- 7. Strategic Internal Navigation Link Grid -->
  <section style="padding: 50px 0; background: #0f172a; border-top: 1px solid rgba(255,255,255,0.05);">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
      
      <h3 style="font-size: 1.4rem; color: #ffffff; margin-bottom: 20px; font-weight: 700; text-align: center;">
        Explore Related Relocation Hubs & Cost Guides
      </h3>

      <div style="display: flex; gap: 15px; flex-wrap: wrap; justify-content: center; font-size: 0.9rem;">
        <a href="<?php echo SITE_URL; ?>/packers-and-movers-in-ranchi" title="Packers and Movers Ranchi" style="color: #cbd5e1; background: rgba(255,255,255,0.05); padding: 8px 16px; border-radius: 20px; text-decoration: none; border: 1px solid rgba(255,255,255,0.1);">Packers and Movers Ranchi</a>
        <a href="<?php echo SITE_URL; ?>/packers-and-movers-in-patna" title="Packers and Movers Patna" style="color: #cbd5e1; background: rgba(255,255,255,0.05); padding: 8px 16px; border-radius: 20px; text-decoration: none; border: 1px solid rgba(255,255,255,0.1);">Packers and Movers Patna</a>
        <a href="<?php echo SITE_URL; ?>/bike-transport-electric" title="Electric Bike Transport" style="color: #cbd5e1; background: rgba(255,255,255,0.05); padding: 8px 16px; border-radius: 20px; text-decoration: none; border: 1px solid rgba(255,255,255,0.1);">Electric Bike Transport</a>
        <a href="<?php echo SITE_URL; ?>/bike-transport-bullet" title="Royal Enfield Bullet Transport" style="color: #cbd5e1; background: rgba(255,255,255,0.05); padding: 8px 16px; border-radius: 20px; text-decoration: none; border: 1px solid rgba(255,255,255,0.1);">Bullet Transport Guide</a>
        <a href="<?php echo SITE_URL; ?>/bike-transport-dirt-quad" title="Dirt Bike & ATV Transport" style="color: #cbd5e1; background: rgba(255,255,255,0.05); padding: 8px 16px; border-radius: 20px; text-decoration: none; border: 1px solid rgba(255,255,255,0.1);">Dirt Bike & ATV Transport</a>
        <a href="<?php echo SITE_URL; ?>/agatti-to-mangalore-car-transport-cost" title="Agatti Car Transport Cost" style="color: #cbd5e1; background: rgba(255,255,255,0.05); padding: 8px 16px; border-radius: 20px; text-decoration: none; border: 1px solid rgba(255,255,255,0.1);">Agatti Maritime Rates</a>
      </div>

    </div>
  </section>

  <!-- 8. Interactive 10-Item Structured FAQ Section -->
  <section style="padding: 60px 0; background: #0b132b;">
    <div class="container" style="max-width: 900px; margin: 0 auto; padding: 0 20px;">
      
      <h2 style="font-size: 2rem; color: #ffffff; text-align: center; margin-bottom: 12px; font-weight: 700;">
        Frequently Asked Questions: Bike Transportation Cost
      </h2>
      <p style="text-align: center; color: #94a3b8; margin-bottom: 40px;">
        Clear answers on motorcycle shifting charges, insurance, packaging costs, and train vs container rates.
      </p>

      <div class="faq-accordion" style="display: flex; flex-direction: column; gap: 15px;">
        <?php foreach ($faq_list as $index => $faq): ?>
          <div style="background: rgba(255, 255, 255, 0.03); border: 1px solid rgba(255, 255, 255, 0.08); border-radius: 10px; overflow: hidden;">
            <details style="padding: 18px 22px; cursor: pointer;">
              <summary style="font-size: 1.05rem; font-weight: 700; color: #ffffff; outline: none; list-style: none; display: flex; justify-content: space-between; align-items: center;">
                <span><?php echo ($index + 1) . '. ' . htmlspecialchars($faq['question']); ?></span>
                <span style="color: #f59e0b; font-size: 1.2rem;">+</span>
              </summary>
              <p style="margin-top: 14px; font-size: 0.95rem; color: #cbd5e1; line-height: 1.7; border-top: 1px solid rgba(255,255,255,0.05); padding-top: 14px;">
                <?php echo htmlspecialchars($faq['answer']); ?>
              </p>
            </details>
          </div>
        <?php endforeach; ?>
      </div>

    </div>
  </section>

  <!-- 9. Final High-Conversion Call to Action Footer Section -->
  <section style="padding: 60px 0; background: linear-gradient(135deg, #1c2541 0%, #0b132b 100%); text-align: center; border-top: 1px solid rgba(245, 158, 11, 0.3);">
    <div class="container" style="max-width: 900px; margin: 0 auto; padding: 0 20px;">
      
      <h2 style="font-size: 2.2rem; color: #ffffff; font-weight: 800; margin-bottom: 15px;">
        Get Your Guaranteed All-Inclusive Bike Transport Quote Now
      </h2>
      <p style="font-size: 1.1rem; color: #cbd5e1; margin-bottom: 30px; line-height: 1.7;">
        Zero hidden costs. Professional 7-layer packaging, 100% insured transit, and doorstep pickup & delivery.
      </p>

      <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap;">
        <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Direct" style="padding: 16px 36px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 800; font-size: 1.05rem; text-decoration: none; box-shadow: 0 6px 20px rgba(225, 29, 72, 0.4);">
          <i class="fas fa-phone-alt" style="margin-right: 10px;"></i> Call Direct: <?php echo SITE_PHONE; ?>
        </a>
        <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20to%20get%20a%20Bike%20Transportation%20Cost%20estimate." title="WhatsApp Booking" target="_blank" style="padding: 16px 36px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 800; font-size: 1.05rem; text-decoration: none; box-shadow: 0 6px 20px rgba(16, 185, 129, 0.4);">
          <i class="fab fa-whatsapp" style="margin-right: 10px;"></i> Book via WhatsApp
        </a>
      </div>

    </div>
  </section>

</main>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
