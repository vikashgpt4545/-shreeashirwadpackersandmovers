<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "Dirt Bike & Quad ATV Transport | Off-Road Vehicle Shifting Guide";
$page_desc = "Complete consumer guide for shipping dirt bikes, motocross motorcycles, quad bikes, and 4x4 ATVs. Specialized heavy wooden crating, hydraulic lift ramp loading, wheel tie-down anchoring, and pan-India insured transport.";
$page_keywords = "dirt bike transport, quad bike shipping, atv transport service, motocross bike transport, off road vehicle shipping, shree ashirwad bike transport";
$canonical_url = "https://shreeashirwadpackersandmovers.com/bike-transport-dirt-quad";

$page_city = "Pan-India / Ranchi / Patna";

$faq_list = [
    [
        'q' => 'How are dirt bikes and quad ATVs transported safely over long distances?',
        'a' => 'Dirt bikes and quad ATVs require specialized handling due to wide knobby tires, high ground clearance, and wider wheel track dimensions. We use custom wooden crates, heavy-duty wheel chocks, and 4-point nylon ratchet tie-downs inside enclosed container trucks to ensure zero movement during transit.'
    ],
    [
        'q' => 'What is the cost of transporting a dirt bike or quad ATV in India?',
        'a' => 'Dirt bike transport rates range from ₹3,200 to ₹6,800 depending on shipping distance. Quad ATVs and 4x4 off-road vehicles cost between ₹6,500 and ₹14,500 due to their larger footprint and custom wooden crate requirements.'
    ],
    [
        'q' => 'Should fluids like petrol or engine oil be drained before quad ATV shipment?',
        'a' => 'Fuel tanks must be drained to less than 1-2 liters for fire safety compliance inside enclosed container trucks. Transmission oil and coolant can remain intact provided there are no active leaks.'
    ],
    [
        'q' => 'Can non-road-legal dirt bikes without RTO registration be transported?',
        'a' => 'Yes. For competition motocross bikes or off-road ATVs without RTO license plates, we require the original purchase invoice, chassis/engine number proof, and owner ID proof for highway transport compliance.'
    ],
    [
        'q' => 'How are wide 4x4 quad ATVs loaded into container vehicles?',
        'a' => 'Quad ATVs are driven or winched up heavy-duty hydraulic tailgate lifts or wide aluminum ramps directly into enclosed container trucks, eliminating manual tilting or chassis strain.'
    ],
    [
        'q' => 'Do you provide transit insurance for high-value off-road vehicles and ATVs?',
        'a' => 'Yes. We provide 100% declared value transit risk insurance policies covering physical damage, rollover hazards, theft, or fire during intercity transit.'
    ],
    [
        'q' => 'Are spare tires, helmets, and riding gear transportable along with the dirt bike?',
        'a' => 'Yes, riding gear, extra knobby tires, tool kits, and chest protectors can be safely packed inside sealed wooden crates or cargo boxes accompanying the vehicle at no extra charge.'
    ],
    [
        'q' => 'What is the turnaround time for shipping a dirt bike or ATV across major Indian cities?',
        'a' => 'Intercity transit between regional hubs (e.g. Ranchi, Patna, Kolkata) takes 1-2 days, while long-haul interstate transit (e.g. Bangalore, Delhi, Mumbai) takes 3-5 days.'
    ],
    [
        'q' => 'Is doorstep pickup and delivery available for quad bikes in suburban areas?',
        'a' => 'Yes, our specialized ramp trucks provide doorstep pickup from residences, farmhouses, off-road tracks, or rally venues, delivering directly to your destination.'
    ],
    [
        'q' => 'How can I get an accurate price quote for dirt bike or ATV shipping?',
        'a' => 'Call +91 8409531615 or submit your ATV/dirt bike dimensions and destination city via WhatsApp for an immediate price estimate.'
    ]
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
        <span class="breadcrumb-item"><a href="<?php echo SITE_URL; ?>guides" title="Guides">Guides</a></span>
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
            SPECIALIZED OFF-ROAD VEHICLE TRANSPORT
          </span>
          <h1 style="font-size: 2.6rem; font-weight: 800; line-height: 1.2; margin-bottom: 20px; color: #ffffff;">
            Dirt Bike &amp; Quad ATV <span style="color: #f59e0b;">Transport &amp; Shipping</span>
          </h1>
          <p style="font-size: 1.08rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 25px;">
            Professional transportation for motocross dirt bikes, quad bikes, 4x4 ATVs, and dune buggies. Featuring heavy-duty custom wooden crating, hydraulic tailgate ramp loading, 4-point wheel tie-downs, and 100% insured enclosed container transit nationwide.
          </p>

          <div style="display: flex; gap: 15px; flex-wrap: wrap; margin-bottom: 30px;">
            <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Transport Specialist" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
              <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call Specialist: <?php echo SITE_PHONE; ?>
            </a>
            <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20a%20dirt%20bike%20or%20ATV%20transport%20quote." title="Chat on WhatsApp" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
              <i class="fab fa-whatsapp" style="margin-right: 8px;"></i> Chat on WhatsApp
            </a>
          </div>

          <div style="display: flex; gap: 20px; font-size: 0.9rem; color: #94a3b8;">
            <span><strong style="color: #f59e0b;">Custom Wooden</strong> Crating</span>
            <span><strong style="color: #f59e0b;">Hydraulic Ramp</strong> Loading</span>
            <span><strong style="color: #f59e0b;">100% Insured</strong> Transit</span>
          </div>
        </div>

        <!-- Hero Lead Form Column -->
        <div class="hero-form-card" style="background: rgba(255, 255, 255, 0.05); backdrop-filter: blur(10px); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 16px; padding: 30px; box-shadow: 0 15px 35px rgba(0,0,0,0.4);">
          <h2 style="font-size: 1.4rem; color: #ffffff; margin-bottom: 8px; font-weight: 700; text-align: center;">Get ATV / Dirt Bike Quote</h2>
          <p style="font-size: 0.85rem; color: #94a3b8; text-align: center; margin-bottom: 20px;">Instant price estimation on WhatsApp in 2 minutes</p>

          <form action="#" method="POST" onsubmit="sendHeroWhatsAppLead(event, this);">
            <div style="margin-bottom: 14px;">
              <input type="text" name="name" class="form-control" placeholder="Your Full Name" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="margin-bottom: 14px;">
              <input type="tel" name="phone" class="form-control" placeholder="10-Digit WhatsApp Phone" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 10px; margin-bottom: 14px;">
              <input type="text" name="move_from" class="form-control" placeholder="Pickup Location" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
              <input type="text" name="move_to" class="form-control" placeholder="Destination City" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="margin-bottom: 16px;">
              <input type="text" name="vehicle_model" class="form-control" placeholder="Vehicle Model (e.g. Kawasaki KX250, Polaris Sportsman ATV)" style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <button type="submit" style="width: 100%; padding: 14px; background: linear-gradient(135deg, #d32f2f 0%, #f59e0b 100%); color: #ffffff; border: none; border-radius: 50px; font-weight: 700; font-size: 1rem; cursor: pointer;">
              Get ATV Shipping Quote &rarr;
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
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">450+</div>
          <div style="font-size: 0.9rem; color: #cbd5e1; margin-top: 5px;">ATVs &amp; Dirt Bikes Moved</div>
        </div>
        <div style="padding: 20px; background: rgba(23, 42, 84, 0.5); border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">4-Point</div>
          <div style="font-size: 0.9rem; color: #cbd5e1; margin-top: 5px;">Ratchet Tie-Down Lock</div>
        </div>
        <div style="padding: 20px; background: rgba(23, 42, 84, 0.5); border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">Heavy Wood</div>
          <div style="font-size: 0.9rem; color: #cbd5e1; margin-top: 5px;">Enclosed Crating</div>
        </div>
        <div style="padding: 20px; background: rgba(23, 42, 84, 0.5); border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">100% Cover</div>
          <div style="font-size: 0.9rem; color: #cbd5e1; margin-top: 5px;">Transit Risk Protection</div>
        </div>
      </div>
    </div>
  </section>

  <!-- 4. 6-Card Feature Grid (3x2 Layout) -->
  <section style="padding: 65px 0; background: #0b132b; color: #e2e8f0; line-height: 1.8;">
    <div class="container">
      
      <div style="max-width: 950px; margin: 0 auto;">
        <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Handling Capabilities</span>
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin: 10px 0 20px 0;">
          Specialized Off-Road Shifting <span style="color: #f59e0b;">Features</span>
        </h2>

        <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px; margin: 30px 0;">
          
          <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px;">
            <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;"><i class="fas fa-box"></i></div>
            <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">Custom Wooden Crates</h3>
            <p style="font-size: 0.9rem; color: #cbd5e1; margin: 0;">
              Custom-built heavy timber frames protecting high handlebars, long suspension forks, and plastic body cowls.
            </p>
          </div>

          <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px;">
            <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;"><i class="fas fa-truck-loading"></i></div>
            <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">Hydraulic Tailgate Ramp</h3>
            <p style="font-size: 0.9rem; color: #cbd5e1; margin: 0;">
              Smooth hydraulic platform loading preventing chassis bottom-outs or suspension compression shock during loading.
            </p>
          </div>

          <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px;">
            <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;"><i class="fas fa-anchor"></i></div>
            <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">4-Point Wheel Tie-Downs</h3>
            <p style="font-size: 0.9rem; color: #cbd5e1; margin: 0;">
              Heavy-duty 2-inch nylon ratchet straps anchored around all 4 ATV wheels or dirt bike rims to lock the vehicle rigid.
            </p>
          </div>

          <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px;">
            <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;"><i class="fas fa-shield-alt"></i></div>
            <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">Enclosed Container Trucks</h3>
            <p style="font-size: 0.9rem; color: #cbd5e1; margin: 0;">
              Fully covered weatherproof containers shielding vehicles from rain, highway dust, flying pebbles, and sun fade.
            </p>
          </div>

          <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px;">
            <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;"><i class="fas fa-toolbox"></i></div>
            <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">Riding Gear &amp; Spares Crate</h3>
            <p style="font-size: 0.9rem; color: #cbd5e1; margin: 0;">
              Dedicated space within the protective crate for helmets, extra knobby tires, tool kits, and spare parts.
            </p>
          </div>

          <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px;">
            <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;"><i class="fas fa-file-invoice"></i></div>
            <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">Rally &amp; Event Transport</h3>
            <p style="font-size: 0.9rem; color: #cbd5e1; margin: 0;">
              Time-bound express logistics catering to motorsport events, off-road track rallies, and private trail expeditions.
            </p>
          </div>

        </div>

      </div>

    </div>
  </section>

  <!-- 5. Customized Tariff & Pricing Matrix -->
  <section style="padding: 60px 0; background: #070d1e; color: #ffffff;">
    <div class="container" style="max-width: 1000px;">
      
      <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Pricing Matrix</span>
      <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin: 10px 0 20px 0;">
        Dirt Bike &amp; Quad ATV Transport <span style="color: #f59e0b;">Tariff Rates</span>
      </h2>
      
      <p style="font-size: 1.05rem; color: #cbd5e1; margin-bottom: 25px;">
        Transparent, itemized pricing for off-road motorcycles, 4x4 quad ATVs, and side-by-side vehicles based on distance and packaging type:
      </p>

      <div style="overflow-x: auto; margin: 30px 0;">
        <table style="width: 100%; border-collapse: collapse; background: #172a54; border-radius: 10px; overflow: hidden; border: 1px solid rgba(245, 158, 11, 0.3);">
          <thead>
            <tr style="background: #1e3a8a; color: #f59e0b; text-align: left;">
              <th style="padding: 14px 16px;">Vehicle Category</th>
              <th style="padding: 14px 16px;">Local / Regional (100-300 km)</th>
              <th style="padding: 14px 16px;">Interstate Corridor (500-1200 km)</th>
              <th style="padding: 14px 16px;">Long Distance (1500+ km)</th>
            </tr>
          </thead>
          <tbody>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.08);">
              <td style="padding: 12px 16px; font-weight: 700; color: #fff;">Dirt Bike / Motocross (125cc - 450cc)</td>
              <td style="padding: 12px 16px; color: #6ee7b7;">₹2,800 - ₹3,800</td>
              <td style="padding: 12px 16px; color: #f59e0b;">₹4,200 - ₹5,800</td>
              <td style="padding: 12px 16px; color: #cbd5e1;">₹6,200 - ₹8,500</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.08);">
              <td style="padding: 12px 16px; font-weight: 700; color: #fff;">Standard Quad ATV (200cc - 400cc)</td>
              <td style="padding: 12px 16px; color: #6ee7b7;">₹4,500 - ₹6,000</td>
              <td style="padding: 12px 16px; color: #f59e0b;">₹7,500 - ₹10,500</td>
              <td style="padding: 12px 16px; color: #cbd5e1;">₹11,500 - ₹15,000</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.08);">
              <td style="padding: 12px 16px; font-weight: 700; color: #fff;">Heavy 4x4 ATV (500cc - 1000cc Polaris/Can-Am)</td>
              <td style="padding: 12px 16px; color: #6ee7b7;">₹6,200 - ₹8,200</td>
              <td style="padding: 12px 16px; color: #f59e0b;">₹10,500 - ₹14,500</td>
              <td style="padding: 12px 16px; color: #cbd5e1;">₹16,000 - ₹21,000</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.08);">
              <td style="padding: 12px 16px; font-weight: 700; color: #fff;">Side-by-Side UTV / Dune Buggy</td>
              <td style="padding: 12px 16px; color: #6ee7b7;">₹8,500 - ₹12,000</td>
              <td style="padding: 12px 16px; color: #f59e0b;">₹15,000 - ₹22,000</td>
              <td style="padding: 12px 16px; color: #cbd5e1;">₹24,000 - ₹32,000</td>
            </tr>
          </tbody>
        </table>
      </div>

    </div>
  </section>

  <!-- 6. 7-Step Packaging Framework -->
  <section style="padding: 60px 0; background: #0b132b; color: #ffffff;">
    <div class="container" style="max-width: 950px;">
      
      <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Step-by-Step Process</span>
      <h2 style="font-size: 2.1rem; font-weight: 800; color: #ffffff; margin: 10px 0 25px 0;">
        7-Step Off-Road Vehicle Loading &amp; Crating Protocol
      </h2>

      <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 15px;">
        <div style="background: #172a54; padding: 18px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <div style="font-size: 0.8rem; color: #f59e0b; font-weight: 700;">STEP 01</div>
          <h4 style="font-size: 0.95rem; color: #fff; margin: 4px 0;">Pre-Shipment Audit</h4>
          <p style="font-size: 0.82rem; color: #cbd5e1; margin: 0;">Recording chassis/engine numbers, fluid levels, and physical body inspection.</p>
        </div>

        <div style="background: #172a54; padding: 18px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <div style="font-size: 0.8rem; color: #f59e0b; font-weight: 700;">STEP 02</div>
          <h4 style="font-size: 0.95rem; color: #fff; margin: 4px 0;">Fuel Safety Draining</h4>
          <p style="font-size: 0.82rem; color: #cbd5e1; margin: 0;">Draining fuel tank to mandatory safe levels for closed container transport.</p>
        </div>

        <div style="background: #172a54; padding: 18px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <div style="font-size: 0.8rem; color: #f59e0b; font-weight: 700;">STEP 03</div>
          <h4 style="font-size: 0.95rem; color: #fff; margin: 4px 0;">Bubble &amp; Foam Wrapping</h4>
          <p style="font-size: 0.82rem; color: #cbd5e1; margin: 0;">Padding handlebars, shock absorbers, exhaust pipes, and plastic body cowls.</p>
        </div>

        <div style="background: #172a54; padding: 18px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <div style="font-size: 0.8rem; color: #f59e0b; font-weight: 700;">STEP 04</div>
          <h4 style="font-size: 0.95rem; color: #fff; margin: 4px 0;">Custom Wooden Frame</h4>
          <p style="font-size: 0.82rem; color: #cbd5e1; margin: 0;">Constructing a tailored timber crate enclosing dirt bikes or ATVs against impact.</p>
        </div>

        <div style="background: #172a54; padding: 18px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <div style="font-size: 0.8rem; color: #f59e0b; font-weight: 700;">STEP 05</div>
          <h4 style="font-size: 0.95rem; color: #fff; margin: 4px 0;">Hydraulic Ramp Loading</h4>
          <p style="font-size: 0.82rem; color: #cbd5e1; margin: 0;">Elevating the crated vehicle via hydraulic tailgate into the covered container truck.</p>
        </div>

        <div style="background: #172a54; padding: 18px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <div style="font-size: 0.8rem; color: #f59e0b; font-weight: 700;">STEP 06</div>
          <h4 style="font-size: 0.95rem; color: #fff; margin: 4px 0;">4-Point Wheel Ratchet Lock</h4>
          <p style="font-size: 0.82rem; color: #cbd5e1; margin: 0;">Fastening high-tensile nylon tie-downs around wheels to truck floor anchors.</p>
        </div>

        <div style="background: #172a54; padding: 18px; border-radius: 10px; border-left: 4px solid #f59e0b; grid-column: span 2;">
          <div style="font-size: 0.8rem; color: #f59e0b; font-weight: 700;">STEP 07</div>
          <h4 style="font-size: 0.95rem; color: #fff; margin: 4px 0;">Doorstep Handoff &amp; Inspection</h4>
          <p style="font-size: 0.82rem; color: #cbd5e1; margin: 0;">Uncrating vehicle at destination home or event venue with physical condition signoff.</p>
        </div>
      </div>

    </div>
  </section>

  <!-- 7. Regional Hubs & Internal Navigation Links -->
  <section style="padding: 60px 0; background: #070d1e; color: #ffffff;">
    <div class="container" style="max-width: 900px;">
      
      <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Network Links</span>
      <h2 style="font-size: 2.1rem; font-weight: 800; color: #ffffff; margin: 10px 0 20px 0;">
        Major Bike Shipping Hubs &amp; <span style="color: #f59e0b;">Guides</span>
      </h2>

      <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 16px; margin-bottom: 25px;">
        <div style="background: #101c40; padding: 18px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #ffffff; font-size: 1.05rem; margin-bottom: 6px;">Ranchi Bike Transport Hub</h4>
          <p style="font-size: 0.88rem; color: #94a3b8; margin-bottom: 8px;">Main hub for two-wheeler transport in Ranchi.</p>
          <a href="<?php echo SITE_URL; ?>packers-and-movers-in-ranchi" title="Packers Movers Ranchi →" style="color: #f59e0b; text-decoration: underline; font-weight: 600; font-size: 0.88rem;">
            Packers Movers Ranchi Master Hub →
          </a>
        </div>

        <div style="background: #101c40; padding: 18px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #ffffff; font-size: 1.05rem; margin-bottom: 6px;">Patna Bike Transport Hub</h4>
          <p style="font-size: 0.88rem; color: #94a3b8; margin-bottom: 8px;">Doorstep bike shipping &amp; packing in Patna.</p>
          <a href="<?php echo SITE_URL; ?>packers-and-movers-in-patna" title="Packers Movers Patna →" style="color: #f59e0b; text-decoration: underline; font-weight: 600; font-size: 0.88rem;">
            Packers Movers Patna Master Hub →
          </a>
        </div>

        <div style="background: #101c40; padding: 18px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #ffffff; font-size: 1.05rem; margin-bottom: 6px;">Bike Transport Covers Guide</h4>
          <p style="font-size: 0.88rem; color: #94a3b8; margin-bottom: 8px;">Heavy 600D waterproof transport covers guide.</p>
          <a href="<?php echo SITE_URL; ?>bike-transport-covers" title="Bike Transport Covers →" style="color: #f59e0b; text-decoration: underline; font-weight: 600; font-size: 0.88rem;">
            Bike Transport Covers Guide →
          </a>
        </div>

        <div style="background: #101c40; padding: 18px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #ffffff; font-size: 1.05rem; margin-bottom: 6px;">All Consumer Shifting Guides</h4>
          <p style="font-size: 0.88rem; color: #94a3b8; margin-bottom: 8px;">Complete intercity vehicle transport guides.</p>
          <a href="<?php echo SITE_URL; ?>guides" title="All Shifting & Shipping Guides →" style="color: #f59e0b; text-decoration: underline; font-weight: 600; font-size: 0.88rem;">
            All Consumer Guides Hub →
          </a>
        </div>
      </div>

    </div>
  </section>

  <!-- 8. Frequently Asked Questions (UI Rendered) -->
  <section style="padding: 60px 0; background: #0b132b; color: #ffffff;">
    <div class="container" style="max-width: 900px;">
      
      <div class="section-header text-center" style="margin-bottom: 40px;">
        <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Got Questions?</span>
        <h2 style="font-size: 2.1rem; font-weight: 800; color: #ffffff; margin-top: 10px;">
          Frequently Asked Questions About <span style="color: #f59e0b;">Dirt Bike &amp; ATV Transport</span>
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

  <!-- 9. Call-To-Action (CTA) Conversion Footer -->
  <section style="padding: 60px 0; background: linear-gradient(135deg, #172a54 0%, #0b132b 100%); border-top: 1.5px solid rgba(245, 158, 11, 0.4); color: #ffffff;">
    <div class="container" style="max-width: 900px; text-align: center;">
      
      <span class="section-tag" style="background: rgba(245, 158, 11, 0.2); color: #f59e0b; padding: 6px 16px; border-radius: 20px; font-size: 0.85rem; font-weight: 700; text-transform: uppercase;">
        Off-Road Vehicle Shifting Experts
      </span>

      <h2 style="font-size: 2.2rem; font-weight: 800; margin: 15px 0 15px 0; color: #ffffff;">
        Need Safe <span style="color: #f59e0b;">Dirt Bike or ATV Transport</span>?
      </h2>

      <p style="font-size: 1.05rem; color: #cbd5e1; max-width: 750px; margin: 0 auto 30px auto; line-height: 1.7;">
        Contact Shree Ashirwad Packers today for heavy-duty wooden crating, hydraulic tailgate ramp loading, and 100% insured pan-India off-road shipping.
      </p>

      <div style="display: flex; gap: 15px; justify-content: center; flex-wrap: wrap;">
        <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Specialist Now" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 30px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1.05rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
          <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call Specialist: <?php echo SITE_PHONE; ?>
        </a>
        <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20a%20dirt%20bike%20or%20ATV%20shipping%20quote." title="Chat on WhatsApp" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 30px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1.05rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
          <i class="fab fa-whatsapp" style="margin-right: 8px;"></i> Chat on WhatsApp
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
  var model = form.querySelector('[name="vehicle_model"]').value;
  
  var message = "Hello Shree Ashirwad Packers & Movers,\n\nI would like an ATV / Dirt Bike Shipping Quote:\n- Name: " + name + "\n- Phone: " + phone + "\n- Pickup Location: " + moveFrom + "\n- Destination City: " + moveTo;
  
  if (model && model.trim() !== '') {
    message += "\n- Vehicle Model: " + model;
  }
  
  var whatsappUrl = "https://api.whatsapp.com/send?phone=918409531615&text=" + encodeURIComponent(message);
  window.open(whatsappUrl, '_blank');
}
</script>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>

