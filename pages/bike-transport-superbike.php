<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "Superbike & Sports Motorcycle Transport | Crated Relocation Specialists";
$page_desc = "Master Consumer Guide for high-value Superbike, Sports Bike & Heavy Cruiser relocation in India. Featuring dedicated wooden crating, hydraulic loading, zero-contact container lashing, and 100% all-risk transit insurance for Kawasaki, Ducati, BMW, Triumph, and Harley Davidson.";
$page_keywords = "superbike transport services, sports bike shifting india, ducati transport cost, bmw motorrad logistics, custom motorcycle crating, harley davidson shipping, shree ashirwad packers";
$canonical_url = "https://shreeashirwadpackersandmovers.com/guides/bike-transport-superbike";

// Define 10 Page-Specific FAQs for Header JSON-LD & Page Body Rendering
$faq_list = [
    [
        "question" => "How do you protect high-end superbikes from damage during intercity transport?",
        "answer" => "Superbikes (such as Kawasaki Ninja, Ducati Panigale, or BMW S1000RR) receive custom ISPM-15 wooden crating, non-static microfiber fairing wrap, 10mm high-density foam padding over carbon-fiber components, and soft synthetic harness lashing attached directly to truck floor mounts."
    ],
    [
        "question" => "Why is custom wooden crating recommended for sports bikes and luxury cruisers?",
        "answer" => "Custom wooden crating constructs a rigid, impact-proof perimeter box around the vehicle. This completely isolates the motorcycle from external container shifts, road debris, or accidental contact with other freight."
    ],
    [
        "question" => "How are front upside-down (USD) forks and anodized finishes protected during lashing?",
        "answer" => "We never attach metal hooks or rough rope directly to anodized fork tubes or clip-on handlebars. We use wide, plush soft-loop webbing extensions that choke around lower triple-clamps without abrading fork seals or paint."
    ],
    [
        "question" => "What is the cost of transporting a superbike across states in India?",
        "answer" => "Superbike transportation costs range from ₹5,500 to ₹8,500 for short-to-medium routes (300–700 km) and ₹9,500 to ₹18,000 for long-distance interstate routes (1,000–2,000+ km), including custom wooden crating and dedicated handling."
    ],
    [
        "question" => "How are wide rear tyres (180mm–240mm) secured inside transport trucks?",
        "answer" => "We utilize adjustable heavy-duty steel wheel chocks specifically calibrated for wide rear tyres, preventing lateral sway or tyre slippage during high-speed highway braking."
    ],
    [
        "question" => "Can I insure my superbike at its full invoice value during transit?",
        "answer" => "Yes. We offer 100% full declared value all-risk transit insurance policies. In the rare event of transit damage or road mishaps, the claim covers OEM replacement parts and factory paint repairs."
    ],
    [
        "question" => "How are superbikes loaded into enclosed container trucks?",
        "answer" => "Superbikes are loaded exclusively using hydraulic tail-lifts or wide anti-slip aluminium ramps with low incline angles to ensure zero exhaust pipe, fairing belly pan, or oil-sump scraping."
    ],
    [
        "question" => "Do you provide dedicated, single-vehicle container transport for luxury motorcycles?",
        "answer" => "Yes. For ultra-premium motorcycles (such as Ducati Superleggera, MV Agusta, or Harley-Davidson CVO), we provide dedicated closed mini-containers for total privacy and security."
    ],
    [
        "question" => "Is real-time GPS tracking provided for superbike shipments?",
        "answer" => "Yes, all superbike transports are assigned to GPS-tracked container vehicles, providing live satellite location tracking and automatic milestone alerts on WhatsApp."
    ],
    [
        "question" => "How far in advance should I book superbike crating services?",
        "answer" => "We recommend booking 3 to 5 days in advance so our carpentry crew can pre-fabricate custom-fit wooden crates tailored to your bike's exact length, width, and ground clearance."
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
            White-Glove Superbike Crating & Logistics
          </span>
          <h1 style="font-size: 2.7rem; font-weight: 800; line-height: 1.2; margin-bottom: 20px; color: #ffffff;">
            Premium <span style="color: #f59e0b;">Superbike & Sports Bike Transport</span>
          </h1>
          <p style="font-size: 1.12rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 25px;">
            High-value sports bikes and luxury cruisers demand white-glove engineering. We specialize in custom wooden crating, soft-loop harness lashing, hydraulic ramp loading, full declared-value transit insurance, and GPS-tracked enclosed shipping for Kawasaki, Ducati, BMW, Triumph, and Harley Davidson.
          </p>

          <div style="display: flex; gap: 15px; flex-wrap: wrap; margin-bottom: 30px;">
            <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Superbike Desk" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
              <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Superbike Desk: <?php echo SITE_PHONE; ?>
            </a>
            <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20a%20Superbike%20Transport%20Quote." title="Chat on WhatsApp" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
              <i class="fab fa-whatsapp" style="margin-right: 8px;"></i> WhatsApp Superbike Quote
            </a>
          </div>

          <div style="display: flex; gap: 20px; font-size: 0.9rem; color: #94a3b8; flex-wrap: wrap;">
            <span><strong style="color: #f59e0b;">ISPM-15 Wooden</strong> Crating</span>
            <span><strong style="color: #f59e0b;">Soft-Loop Harness</strong> Lashing</span>
            <span><strong style="color: #f59e0b;">Full Value</strong> All-Risk Insurance</span>
          </div>
        </div>

        <!-- Hero Lead Form Column -->
        <div class="hero-form-card" style="background: rgba(255, 255, 255, 0.05); backdrop-filter: blur(10px); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 16px; padding: 30px; box-shadow: 0 15px 35px rgba(0,0,0,0.4);">
          <h2 style="font-size: 1.4rem; color: #ffffff; margin-bottom: 8px; font-weight: 700; text-align: center;">Get Superbike Transport Quote</h2>
          <p style="font-size: 0.85rem; color: #94a3b8; text-align: center; margin-bottom: 20px;">Receive custom crating & freight breakup on WhatsApp</p>

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
              Calculate Superbike Freight &rarr;
            </button>
          </form>
        </div>

      </div>
    </div>
  </section>

  <!-- 3. Key Metrics & Superbike Logistics Performance Stats Grid -->
  <section style="padding: 40px 0; background: #0f172a; border-bottom: 1px solid rgba(255,255,255,0.05);">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 20px; text-align: center;">
        
        <div style="background: rgba(255,255,255,0.03); padding: 25px 15px; border-radius: 12px; border: 1px solid rgba(245,158,11,0.2);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; margin-bottom: 5px;">2,200+</div>
          <div style="font-size: 0.9rem; color: #94a3b8;">Superbikes & Cruisers Moved</div>
        </div>

        <div style="background: rgba(255,255,255,0.03); padding: 25px 15px; border-radius: 12px; border: 1px solid rgba(245,158,11,0.2);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; margin-bottom: 5px;">ISPM-15</div>
          <div style="font-size: 0.9rem; color: #94a3b8;">Fumigated Wooden Crating</div>
        </div>

        <div style="background: rgba(255,255,255,0.03); padding: 25px 15px; border-radius: 12px; border: 1px solid rgba(245,158,11,0.2);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; margin-bottom: 5px;">100%</div>
          <div style="font-size: 0.9rem; color: #94a3b8;">Full Invoice Value Coverage</div>
        </div>

        <div style="background: rgba(255,255,255,0.03); padding: 25px 15px; border-radius: 12px; border: 1px solid rgba(245,158,11,0.2);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; margin-bottom: 5px;">0%</div>
          <div style="font-size: 0.9rem; color: #94a3b8;">Fairing or Exhaust Damage</div>
        </div>

      </div>
    </div>
  </section>

  <!-- 4. Deep Dive Technical Content Section -->
  <section style="padding: 60px 0; background: #0b132b;">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
      
      <div style="max-width: 900px; margin: 0 auto; line-height: 1.8; color: #cbd5e1;">
        
        <h2 style="font-size: 2rem; color: #ffffff; margin-bottom: 20px; font-weight: 700; border-left: 4px solid #f59e0b; padding-left: 15px;">
          White-Glove Logistics Engineering for High-Performance Motorcycles
        </h2>

        <p style="margin-bottom: 20px;">
          A superbike is far more than a mode of transport—it is a high-precision masterpiece of engineering featuring lightweight carbon-fiber fairings, delicate titanium exhaust systems, anodized USD suspension forks, and expensive electronic dash displays. Moving a motorcycle valued at ₹10 Lakhs to ₹50 Lakhs across highway networks demands zero-compromise logistics protocols.
        </p>

        <p style="margin-bottom: 20px;">
          At Shree Ashirwad Packers and Movers, our superbike division provides specialized <strong>custom wooden crating</strong> and enclosed container transport. We build bespoke timber cages around each motorcycle, isolating the chassis from external shocks while utilizing non-abrasive plush synthetic straps attached to triple-clamps and swingarms.
        </p>

        <h3 style="font-size: 1.5rem; color: #f59e0b; margin: 35px 0 15px 0; font-weight: 700;">
          Superbike Protection Engineering Benchmarks
        </h3>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 20px; margin: 25px 0;">
          
          <div style="background: rgba(255,255,255,0.03); padding: 20px; border-radius: 10px; border: 1px solid rgba(255,255,255,0.08);">
            <h4 style="color: #ffffff; font-size: 1.1rem; margin-bottom: 10px;">1. Bespoke Wooden Crate Enclosure</h4>
            <p style="font-size: 0.92rem; color: #94a3b8;">Solid timber base frame with heavy cross-bracing and impact-absorbing foam bumpers forming a protective cage around the motorcycle.</p>
          </div>

          <div style="background: rgba(255,255,255,0.03); padding: 20px; border-radius: 10px; border: 1px solid rgba(255,255,255,0.08);">
            <h4 style="color: #ffffff; font-size: 1.1rem; margin-bottom: 10px;">2. Plush Soft-Loop Harness Lashing</h4>
            <p style="font-size: 0.92rem; color: #94a3b8;">High-tensile soft webbing chokes around lower triple-clamps and rear swingarm, preventing strap metal friction against anodized fork tubes.</p>
          </div>

          <div style="background: rgba(255,255,255,0.03); padding: 20px; border-radius: 10px; border: 1px solid rgba(255,255,255,0.08);">
            <h4 style="color: #ffffff; font-size: 1.1rem; margin-bottom: 10px;">3. Hydraulic Tail-Lift Loading</h4>
            <p style="font-size: 0.92rem; color: #94a3b8;">Level hydraulic platform loading into container trucks eliminates low-clearance belly-pan scraping, exhaust headers, or oil pan hits.</p>
          </div>

          <div style="background: rgba(255,255,255,0.03); padding: 20px; border-radius: 10px; border: 1px solid rgba(255,255,255,0.08);">
            <h4 style="color: #ffffff; font-size: 1.1rem; margin-bottom: 10px;">4. Wide Rear Tyre Chock Anchor</h4>
            <p style="font-size: 0.92rem; color: #94a3b8;">Floor-mounted adjustable steel wheel chocks tailored for 180mm–240mm rear tyres prevent lateral slip during highway cornering.</p>
          </div>

        </div>

      </div>

    </div>
  </section>

  <!-- 5. Superbike & Sports Bike Tariff Matrix Table -->
  <section style="padding: 60px 0; background: #0f172a; border-top: 1px solid rgba(255,255,255,0.08); border-bottom: 1px solid rgba(255,255,255,0.08);">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
      
      <h2 style="font-size: 2rem; color: #ffffff; text-align: center; margin-bottom: 12px; font-weight: 700;">
        Itemized Superbike & Luxury Motorcycle Freight Tariff
      </h2>
      <p style="text-align: center; color: #94a3b8; margin-bottom: 40px; max-width: 700px; margin-left: auto; margin-right: auto;">
        Distance-calibrated rates for sports bikes, supersports, adventure tourers, and heavy cruisers in India.
      </p>

      <div style="overflow-x: auto;">
        <table style="width: 100%; border-collapse: collapse; text-align: left; background: rgba(255,255,255,0.02); border-radius: 12px; overflow: hidden; border: 1px solid rgba(245, 158, 11, 0.2);">
          <thead>
            <tr style="background: linear-gradient(135deg, #1c2541 0%, #0b132b 100%); color: #f59e0b; border-bottom: 2px solid rgba(245, 158, 11, 0.3);">
              <th style="padding: 16px 20px; font-size: 0.95rem; text-transform: uppercase;">Distance Range</th>
              <th style="padding: 16px 20px; font-size: 0.95rem; text-transform: uppercase;">Mid-Weight Sports (300-650cc)</th>
              <th style="padding: 16px 20px; font-size: 0.95rem; text-transform: uppercase;">Liter-Class Supersport (1000cc)</th>
              <th style="padding: 16px 20px; font-size: 0.95rem; text-transform: uppercase;">Heavy Cruiser / Crated (Harley/Goldwing)</th>
              <th style="padding: 16px 20px; font-size: 0.95rem; text-transform: uppercase;">Estimated Transit Time</th>
            </tr>
          </thead>
          <tbody style="color: #cbd5e1; font-size: 0.95rem;">
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.05);">
              <td style="padding: 16px 20px; font-weight: 700; color: #ffffff;">0 – 350 km</td>
              <td style="padding: 16px 20px;">₹4,200 – ₹5,800</td>
              <td style="padding: 16px 20px;">₹5,500 – ₹7,200</td>
              <td style="padding: 16px 20px;">₹7,000 – ₹9,200</td>
              <td style="padding: 16px 20px; color: #10b981;">24 – 48 Hours</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.05); background: rgba(255,255,255,0.01);">
              <td style="padding: 16px 20px; font-weight: 700; color: #ffffff;">350 – 800 km</td>
              <td style="padding: 16px 20px;">₹6,200 – ₹7,900</td>
              <td style="padding: 16px 20px;">₹7,800 – ₹9,800</td>
              <td style="padding: 16px 20px;">₹9,800 – ₹12,500</td>
              <td style="padding: 16px 20px; color: #10b981;">2 – 3 Days</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.05);">
              <td style="padding: 16px 20px; font-weight: 700; color: #ffffff;">800 – 1,500 km</td>
              <td style="padding: 16px 20px;">₹8,500 – ₹10,800</td>
              <td style="padding: 16px 20px;">₹10,500 – ₹13,500</td>
              <td style="padding: 16px 20px;">₹13,500 – ₹16,800</td>
              <td style="padding: 16px 20px; color: #10b981;">4 – 5 Days</td>
            </tr>
            <tr style="background: rgba(255,255,255,0.01);">
              <td style="padding: 16px 20px; font-weight: 700; color: #ffffff;">1,500+ km</td>
              <td style="padding: 16px 20px;">₹11,200 – ₹14,000</td>
              <td style="padding: 16px 20px;">₹14,000 – ₹17,500</td>
              <td style="padding: 16px 20px;">₹17,500 – ₹22,000</td>
              <td style="padding: 16px 20px; color: #10b981;">6 – 8 Days</td>
            </tr>
          </tbody>
        </table>
      </div>

      <p style="font-size: 0.85rem; color: #94a3b8; margin-top: 15px; text-align: center;">
        * All quotes include custom wooden crating, plush soft-loop harness lashing, hydraulic loading, enclosed container freight, and doorstep delivery. 100% all-risk transit insurance billed at 1.5% declared market value.
      </p>

    </div>
  </section>

  <!-- 6. Step-by-Step Superbike Relocation Protocol -->
  <section style="padding: 60px 0; background: #0b132b;">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
      
      <h2 style="font-size: 2rem; color: #ffffff; text-align: center; margin-bottom: 40px; font-weight: 700;">
        Our 5-Step White-Glove Superbike Relocation Protocol
      </h2>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 25px;">
        
        <div style="background: rgba(255,255,255,0.03); padding: 30px 20px; border-radius: 12px; border-top: 3px solid #f59e0b;">
          <div style="font-size: 1.8rem; font-weight: 800; color: #f59e0b; margin-bottom: 10px;">01</div>
          <h3 style="font-size: 1.15rem; color: #ffffff; margin-bottom: 10px;">Inspection & Dimensions Mapping</h3>
          <p style="font-size: 0.9rem; color: #94a3b8;">High-resolution photo survey recording fairing state, carbon fiber, exhaust headers, and precise length/width measurements for wooden crate fabrication.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); padding: 30px 20px; border-radius: 12px; border-top: 3px solid #f59e0b;">
          <div style="font-size: 1.8rem; font-weight: 800; color: #f59e0b; margin-bottom: 10px;">02</div>
          <h3 style="font-size: 1.15rem; color: #ffffff; margin-bottom: 10px;">7-Layer Soft Shield & Microfiber Wrap</h3>
          <p style="font-size: 0.9rem; color: #94a3b8;">Non-static microfiber fairing wrap, 10mm EVA foam sheets over tanks and exhausts, and thick bubble wrapping across electronic dashboards.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); padding: 30px 20px; border-radius: 12px; border-top: 3px solid #f59e0b;">
          <div style="font-size: 1.8rem; font-weight: 800; color: #f59e0b; margin-bottom: 10px;">03</div>
          <h3 style="font-size: 1.15rem; color: #ffffff; margin-bottom: 10px;">Custom ISPM-15 Wooden Crate Assembly</h3>
          <p style="font-size: 0.9rev; color: #94a3b8;">Bespoke timber crate built around motorcycle base; soft-loop synthetic straps secure lower triple clamps to internal crate floor rings.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); padding: 30px 20px; border-radius: 12px; border-top: 3px solid #f59e0b;">
          <div style="font-size: 1.8rem; font-weight: 800; color: #f59e0b; margin-bottom: 10px;">04</div>
          <h3 style="font-size: 1.15rem; color: #ffffff; margin-bottom: 10px;">Hydraulic Loading & GPS Transit</h3>
          <p style="font-size: 0.9rem; color: #94a3b8;">Crated bike loaded via hydraulic tail-lift into GPS-monitored enclosed truck container for secure highway haulage.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); padding: 30px 20px; border-radius: 12px; border-top: 3px solid #f59e0b;">
          <div style="font-size: 1.8rem; font-weight: 800; color: #f59e0b; margin-bottom: 10px;">05</div>
          <h3 style="font-size: 1.15rem; color: #ffffff; margin-bottom: 10px;">Doorstep Uncrating & Sign-Off</h3>
          <p style="font-size: 0.9rem; color: #94a3b8;">Careful uncrating at destination doorstep, outer foam removal, joint physical verification against pre-transit log, and final handover.</p>
        </div>

      </div>

    </div>
  </section>

  <!-- 7. Strategic Internal Navigation Link Grid -->
  <section style="padding: 50px 0; background: #0f172a; border-top: 1px solid rgba(255,255,255,0.05);">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
      
      <h3 style="font-size: 1.4rem; color: #ffffff; margin-bottom: 20px; font-weight: 700; text-align: center;">
        Explore Related Relocation Hubs & Specialized Guides
      </h3>

      <div style="display: flex; gap: 15px; flex-wrap: wrap; justify-content: center; font-size: 0.9rem;">
        <a href="<?php echo SITE_URL; ?>/packers-and-movers-in-ranchi" title="Packers and Movers Ranchi" style="color: #cbd5e1; background: rgba(255,255,255,0.05); padding: 8px 16px; border-radius: 20px; text-decoration: none; border: 1px solid rgba(255,255,255,0.1);">Packers and Movers Ranchi</a>
        <a href="<?php echo SITE_URL; ?>/packers-and-movers-in-patna" title="Packers and Movers Patna" style="color: #cbd5e1; background: rgba(255,255,255,0.05); padding: 8px 16px; border-radius: 20px; text-decoration: none; border: 1px solid rgba(255,255,255,0.1);">Packers and Movers Patna</a>
        <a href="<?php echo SITE_URL; ?>/bike-transportation-cost" title="Bike Transportation Cost Guide" style="color: #cbd5e1; background: rgba(255,255,255,0.05); padding: 8px 16px; border-radius: 20px; text-decoration: none; border: 1px solid rgba(255,255,255,0.1);">Bike Transportation Cost</a>
        <a href="<?php echo SITE_URL; ?>/bike-transport-bullet" title="Royal Enfield Bullet Transport" style="color: #cbd5e1; background: rgba(255,255,255,0.05); padding: 8px 16px; border-radius: 20px; text-decoration: none; border: 1px solid rgba(255,255,255,0.1);">Royal Enfield Bullet Transport</a>
        <a href="<?php echo SITE_URL; ?>/bike-transport-dirt-quad" title="Dirt Bike & ATV Transport" style="color: #cbd5e1; background: rgba(255,255,255,0.05); padding: 8px 16px; border-radius: 20px; text-decoration: none; border: 1px solid rgba(255,255,255,0.1);">Dirt Bike & ATV Transport</a>
        <a href="<?php echo SITE_URL; ?>/bike-transport-electric" title="Electric Bike Transport" style="color: #cbd5e1; background: rgba(255,255,255,0.05); padding: 8px 16px; border-radius: 20px; text-decoration: none; border: 1px solid rgba(255,255,255,0.1);">Electric Bike Transport</a>
      </div>

    </div>
  </section>

  <!-- 8. Interactive 10-Item Structured FAQ Section -->
  <section style="padding: 60px 0; background: #0b132b;">
    <div class="container" style="max-width: 900px; margin: 0 auto; padding: 0 20px;">
      
      <h2 style="font-size: 2rem; color: #ffffff; text-align: center; margin-bottom: 12px; font-weight: 700;">
        Frequently Asked Questions: Superbike Transport
      </h2>
      <p style="text-align: center; color: #94a3b8; margin-bottom: 40px;">
        Expert answers regarding custom wooden crating, soft-loop harness lashing, insurance, and hydraulic loading.
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
        Book White-Glove Crated Superbike Transport Today
      </h2>
      <p style="font-size: 1.1rem; color: #cbd5e1; margin-bottom: 30px; line-height: 1.7;">
        ISPM-15 custom wooden crating, soft-loop harness lashing, hydraulic loading, and 100% all-risk transit insurance.
      </p>

      <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap;">
        <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Superbike Desk" style="padding: 16px 36px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 800; font-size: 1.05rem; text-decoration: none; box-shadow: 0 6px 20px rgba(225, 29, 72, 0.4);">
          <i class="fas fa-phone-alt" style="margin-right: 10px;"></i> Call Superbike Desk: <?php echo SITE_PHONE; ?>
        </a>
        <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20to%20book%20Superbike%20Transport." title="WhatsApp Superbike Booking" target="_blank" style="padding: 16px 36px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 800; font-size: 1.05rem; text-decoration: none; box-shadow: 0 6px 20px rgba(16, 185, 129, 0.4);">
          <i class="fab fa-whatsapp" style="margin-right: 10px;"></i> Book via WhatsApp
        </a>
      </div>

    </div>
  </section>

</main>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
