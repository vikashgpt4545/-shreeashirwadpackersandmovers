<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "Electric Bike & Scooter Transport | Lithium Battery Shifting Safety";
$page_desc = "Authoritative Master Guide for Electric Bike & EV Scooter Transport in India. Specializing in lithium-ion battery isolation, thermal shielding, circuit protection, and door-to-door enclosed shipping with zero battery drain.";
$page_keywords = "electric bike transport, ev scooter shifting, lithium battery transport safety, electric two wheeler parcel, ather ola electric bike shipping, e-bike transportation cost, ev packing charges, shree ashirwad packers";
$canonical_url = "https://shreeashirwadpackersandmovers.com/guides/bike-transport-electric";

// Define 10 Page-Specific FAQs for Header JSON-LD & Page Body Rendering
$faq_list = [
    [
        "question" => "How do you ensure lithium-ion battery safety during electric bike transport?",
        "answer" => "We follow strict protocols for lithium-ion battery transport, including disconnecting main power breakers/MCBs, isolating battery terminals with dielectric electrical tape, and wrapping removable battery packs in anti-static thermal insulation before mounting the EV securely inside closed carrier trucks."
    ],
    [
        "question" => "Should I remove or keep the EV battery installed during transit?",
        "answer" => "For scooters with removable battery packs (such as Bounce Infinity or Hero Electric), we recommend packing the battery in a certified flame-resistant padded crate separately from the vehicle chassis. For fixed battery models (like Ather 450X or Ola S1), we isolate the battery management system (BMS) switch."
    ],
    [
        "question" => "What state charge (SoC) should my electric scooter battery be at before shipping?",
        "answer" => "Logistics safety standards require EV batteries to be transported at a 30% to 50% State of Charge (SoC). Shipping at full 100% charge or complete 0% discharge increases thermal risk and battery degradation during multi-day highway haulage."
    ],
    [
        "question" => "What packing materials are used for electric two-wheelers?",
        "answer" => "We apply a 7-layer safety shield consisting of anti-static inner film, shock-absorbing bubble wrap, high-density foam padding over digital TFT display screens, corrugated cardboard casing, and waterproof outer stretch wrap secured with heavy-duty polypropylene strapping."
    ],
    [
        "question" => "What is the cost of transporting an electric scooter across states in India?",
        "answer" => "Interstate EV scooter transport costs typically range between ₹2,800 and ₹7,500 depending on transit distance, vehicle weight, battery type (fixed vs removable), and whether you opt for standard covered carrier or premium dedicated crate shipping."
    ],
    [
        "question" => "Can electric bikes be transported via Indian Railways parcel service?",
        "answer" => "While railways allow EV transport as luggage or parcel, strict documentation regarding battery isolation and safety certificates is mandatory. Specialized private car/bike carriers provide superior safety against physical damage and battery handling compared to open train brake vans."
    ],
    [
        "question" => "Is transit insurance covered for electric bike relocation?",
        "answer" => "Yes, we provide 100% comprehensive transit insurance policy covering physical damage, road mishaps, theft, and thermal risks during intercity transit, based on the declared invoice value of your electric vehicle."
    ],
    [
        "question" => "Are touchscreens and digital instrument clusters protected during transit?",
        "answer" => "Yes. Modern EV digital dashboards (such as Ola's 7-inch touchscreen or TVS iQube TFT cluster) receive multi-layer micro-fiber wrapping and rigid acrylic shield guards to prevent screen cracking or moisture ingress."
    ],
    [
        "question" => "How do you load heavy electric motorcycles onto transport trucks?",
        "answer" => "Heavy electric motorcycles (like Ultraviolette F77 or Revolt RV400) are loaded using hydraulic tail-lifts or wide anti-slip aluminium ramps to ensure zero chassis scraping or tipping during loading."
    ],
    [
        "question" => "How far in advance should I book my EV transport service?",
        "answer" => "We recommend booking 2 to 4 days prior to your desired moving date so our technical crew can perform pre-booking battery checks and reserve specialized enclosed container space."
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
            Certified EV Relocation & Battery Safety Specialists
          </span>
          <h1 style="font-size: 2.7rem; font-weight: 800; line-height: 1.2; margin-bottom: 20px; color: #ffffff;">
            Safe & Certified <span style="color: #f59e0b;">Electric Bike & Scooter Transport</span>
          </h1>
          <p style="font-size: 1.12rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 25px;">
            Transporting electric two-wheelers demands specialized engineering protocols. From lithium-ion battery circuit isolation and thermal insulation to touchscreen dashboard protection and enclosed container shipping, Shree Ashirwad Packers and Movers delivers zero-damage, zero-battery-drain EV relocation across India.
          </p>

          <div style="display: flex; gap: 15px; flex-wrap: wrap; margin-bottom: 30px;">
            <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Logistics Desk" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
              <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call Desk: <?php echo SITE_PHONE; ?>
            </a>
            <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20need%20a%20quote%20for%20Electric%20Bike%20Transport." title="Chat on WhatsApp" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
              <i class="fab fa-whatsapp" style="margin-right: 8px;"></i> WhatsApp EV Quote
            </a>
          </div>

          <div style="display: flex; gap: 20px; font-size: 0.9rem; color: #94a3b8; flex-wrap: wrap;">
            <span><strong style="color: #f59e0b;">BMS & Circuit</strong> Isolation</span>
            <span><strong style="color: #f59e0b;">7-Layer</strong> Thermal Wrap</span>
            <span><strong style="color: #f59e0b;">100% Insured</strong> Transit</span>
          </div>
        </div>

        <!-- Hero Lead Form Column -->
        <div class="hero-form-card" style="background: rgba(255, 255, 255, 0.05); backdrop-filter: blur(10px); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 16px; padding: 30px; box-shadow: 0 15px 35px rgba(0,0,0,0.4);">
          <h2 style="font-size: 1.4rem; color: #ffffff; margin-bottom: 8px; font-weight: 700; text-align: center;">Get Instant EV Shifting Quote</h2>
          <p style="font-size: 0.85rem; color: #94a3b8; text-align: center; margin-bottom: 20px;">Receive itemized cost estimation on WhatsApp in 2 minutes</p>

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
              Calculate EV Transport Cost &rarr;
            </button>
          </form>
        </div>

      </div>
    </div>
  </section>

  <!-- 3. Key Metrics & Performance Stats Grid -->
  <section style="padding: 40px 0; background: #0f172a; border-bottom: 1px solid rgba(255,255,255,0.05);">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 20px; text-align: center;">
        
        <div style="background: rgba(255,255,255,0.03); padding: 25px 15px; border-radius: 12px; border: 1px solid rgba(245,158,11,0.2);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; margin-bottom: 5px;">4,850+</div>
          <div style="font-size: 0.9rem; color: #94a3b8;">EVs & Scooters Transported</div>
        </div>

        <div style="background: rgba(255,255,255,0.03); padding: 25px 15px; border-radius: 12px; border: 1px solid rgba(245,158,11,0.2);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; margin-bottom: 5px;">0%</div>
          <div style="font-size: 0.9rem; color: #94a3b8;">Thermal Incident Record</div>
        </div>

        <div style="background: rgba(255,255,255,0.03); padding: 25px 15px; border-radius: 12px; border: 1px solid rgba(245,158,11,0.2);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; margin-bottom: 5px;">7-Layer</div>
          <div style="font-size: 0.9rem; color: #94a3b8;">Screen & Body Cushioning</div>
        </div>

        <div style="background: rgba(255,255,255,0.03); padding: 25px 15px; border-radius: 12px; border: 1px solid rgba(245,158,11,0.2);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; margin-bottom: 5px;">100%</div>
          <div style="font-size: 0.9rem; color: #94a3b8;">Transit Insurance Guarantee</div>
        </div>

      </div>
    </div>
  </section>

  <!-- 4. Deep Dive Technical Content Section -->
  <section style="padding: 60px 0; background: #0b132b;">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
      
      <div style="max-width: 900px; margin: 0 auto; line-height: 1.8; color: #cbd5e1;">
        
        <h2 style="font-size: 2rem; color: #ffffff; margin-bottom: 20px; font-weight: 700; border-left: 4px solid #f59e0b; padding-left: 15px;">
          Mastering Electric Vehicle Logistics: Safety, Battery Health & Protection
        </h2>

        <p style="margin-bottom: 20px;">
          The rapid adoption of electric two-wheelers across India—including popular models like the <strong>Ather 450X, Ola S1 Pro, TVS iQube, Hero Vida, Bajaj Chetak, and Revolt RV400</strong>—has revolutionized personal urban mobility. However, moving an electric bike or scooter across intercity and interstate logistics routes presents distinct technical challenges that traditional motorcycle movers are ill-equipped to handle.
        </p>

        <p style="margin-bottom: 20px;">
          Unlike conventional petrol-powered two-wheelers, electric vehicles feature high-energy <strong>Lithium-Ion (Li-ion) battery packs</strong>, delicate Battery Management System (BMS) microcontrollers, sensitive TFT digital touchscreen displays, and vulnerable underbody motor wiring harnesses. Transporting an EV requires dedicated electrical safety isolation, thermal insulation, moisture barriers, and specialized wheel-chock tie-down systems inside enclosed container trucks.
        </p>

        <h3 style="font-size: 1.5rem; color: #f59e0b; margin: 35px 0 15px 0; font-weight: 700;">
          Key EV Relocation Hazards Managed by Shree Ashirwad
        </h3>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 20px; margin: 25px 0;">
          
          <div style="background: rgba(255,255,255,0.03); padding: 20px; border-radius: 10px; border: 1px solid rgba(255,255,255,0.08);">
            <h4 style="color: #ffffff; font-size: 1.1rem; margin-bottom: 10px;">1. Thermal Runaway Mitigation</h4>
            <p style="font-size: 0.92rem; color: #94a3b8;">Lithium batteries exposed to extreme ambient heat or vibration can suffer internal short-circuiting. We isolate main breakers and wrap battery bays in thermal insulation blankets.</p>
          </div>

          <div style="background: rgba(255,255,255,0.03); padding: 20px; border-radius: 10px; border: 1px solid rgba(255,255,255,0.08);">
            <h4 style="color: #ffffff; font-size: 1.1rem; margin-bottom: 10px;">2. TFT Display Protection</h4>
            <p style="font-size: 0.92rem; color: #94a3b8;">Smart EV dashboards feature glass touchscreens sensitive to impact and pressure. We shield screens using non-static microfiber film and rigid acrylic guards.</p>
          </div>

          <div style="background: rgba(255,255,255,0.03); padding: 20px; border-radius: 10px; border: 1px solid rgba(255,255,255,0.08);">
            <h4 style="color: #ffffff; font-size: 1.1rem; margin-bottom: 10px;">3. Battery Drain Prevention</h4>
            <p style="font-size: 0.92rem; color: #94a3b8;">Parasitic electronic draw or active smart telemetry during multi-day highway haulage can drain battery cells below critical thresholds. We isolate BMS sleep modes.</p>
          </div>

          <div style="background: rgba(255,255,255,0.03); padding: 20px; border-radius: 10px; border: 1px solid rgba(255,255,255,0.08);">
            <h4 style="color: #ffffff; font-size: 1.1rem; margin-bottom: 10px;">4. Underbody & Motor Protection</h4>
            <p style="font-size: 0.92rem; color: #94a3b8;">Mid-drive motors and hub assembly cables situated close to the ground can sustain road debris impact. Full cardboard armor shields lower components.</p>
          </div>

        </div>

      </div>

    </div>
  </section>

  <!-- 5. Itemized EV Tariff Matrix Table -->
  <section style="padding: 60px 0; background: #0f172a; border-top: 1px solid rgba(255,255,255,0.08); border-bottom: 1px solid rgba(255,255,255,0.08);">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
      
      <h2 style="font-size: 2rem; color: #ffffff; text-align: center; margin-bottom: 12px; font-weight: 700;">
        Itemized Electric Bike & Scooter Transport Tariff Matrix
      </h2>
      <p style="text-align: center; color: #94a3b8; margin-bottom: 40px; max-width: 700px; margin-left: auto; margin-right: auto;">
        Transparent, distance-calibrated freight pricing for electric scooters, e-motorcycles, and removable battery packs across India.
      </p>

      <div style="overflow-x: auto;">
        <table style="width: 100%; border-collapse: collapse; text-align: left; background: rgba(255,255,255,0.02); border-radius: 12px; overflow: hidden; border: 1px solid rgba(245, 158, 11, 0.2);">
          <thead>
            <tr style="background: linear-gradient(135deg, #1c2541 0%, #0b132b 100%); color: #f59e0b; border-bottom: 2px solid rgba(245, 158, 11, 0.3);">
              <th style="padding: 16px 20px; font-size: 0.95rem; text-transform: uppercase;">Distance Band (km)</th>
              <th style="padding: 16px 20px; font-size: 0.95rem; text-transform: uppercase;">City EV Scooter (Ather/Ola)</th>
              <th style="padding: 16px 20px; font-size: 0.95rem; text-transform: uppercase;">Heavy E-Motorcycle (Revolt/Ultraviolette)</th>
              <th style="padding: 16px 20px; font-size: 0.95rem; text-transform: uppercase;">Removable Battery Pack Shipping</th>
              <th style="padding: 16px 20px; font-size: 0.95rem; text-transform: uppercase;">Estimated Transit Time</th>
            </tr>
          </thead>
          <tbody style="color: #cbd5e1; font-size: 0.95rem;">
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.05);">
              <td style="padding: 16px 20px; font-weight: 700; color: #ffffff;">0 – 300 km (Local/State)</td>
              <td style="padding: 16px 20px;">₹2,400 – ₹3,500</td>
              <td style="padding: 16px 20px;">₹3,200 – ₹4,200</td>
              <td style="padding: 16px 20px;">₹600 – ₹900</td>
              <td style="padding: 16px 20px; color: #10b981;">24 – 48 Hours</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.05); background: rgba(255,255,255,0.01);">
              <td style="padding: 16px 20px; font-weight: 700; color: #ffffff;">300 – 700 km (Intercity)</td>
              <td style="padding: 16px 20px;">₹3,600 – ₹4,800</td>
              <td style="padding: 16px 20px;">₹4,500 – ₹5,800</td>
              <td style="padding: 16px 20px;">₹900 – ₹1,300</td>
              <td style="padding: 16px 20px; color: #10b981;">2 – 3 Days</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.05);">
              <td style="padding: 16px 20px; font-weight: 700; color: #ffffff;">700 – 1,500 km (Interstate)</td>
              <td style="padding: 16px 20px;">₹4,900 – ₹6,500</td>
              <td style="padding: 16px 20px;">₹6,000 – ₹7,800</td>
              <td style="padding: 16px 20px;">₹1,400 – ₹1,900</td>
              <td style="padding: 16px 20px; color: #10b981;">4 – 5 Days</td>
            </tr>
            <tr style="background: rgba(255,255,255,0.01);">
              <td style="padding: 16px 20px; font-weight: 700; color: #ffffff;">1,500+ km (Long Distance)</td>
              <td style="padding: 16px 20px;">₹6,800 – ₹8,900</td>
              <td style="padding: 16px 20px;">₹8,200 – ₹10,500</td>
              <td style="padding: 16px 20px;">₹2,000 – ₹2,600</td>
              <td style="padding: 16px 20px; color: #10b981;">6 – 8 Days</td>
            </tr>
          </tbody>
        </table>
      </div>

      <p style="font-size: 0.85rem; color: #94a3b8; margin-top: 15px; text-align: center;">
        * Rates include 7-layer packaging, lithium battery isolation, loading/unloading labor, and 18% GST invoice. Optional transit insurance charged at 1.5% of declared vehicle value.
      </p>

    </div>
  </section>

  <!-- 6. Step-by-Step EV Transportation Process Workflow -->
  <section style="padding: 60px 0; background: #0b132b;">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
      
      <h2 style="font-size: 2rem; color: #ffffff; text-align: center; margin-bottom: 40px; font-weight: 700;">
        Our 5-Step Certified EV Relocation Protocol
      </h2>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 25px;">
        
        <div style="background: rgba(255,255,255,0.03); padding: 30px 20px; border-radius: 12px; border-top: 3px solid #f59e0b; position: relative;">
          <div style="font-size: 1.8rem; font-weight: 800; color: #f59e0b; margin-bottom: 10px;">01</div>
          <h3 style="font-size: 1.15rem; color: #ffffff; margin-bottom: 10px;">Pre-Shift Inspection & SoC Verification</h3>
          <p style="font-size: 0.9rem; color: #94a3b8;">Detailed digital inspection recording chassis condition, odometer reading, battery state of charge (30–50%), and existing screen scratch marks.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); padding: 30px 20px; border-radius: 12px; border-top: 3px solid #f59e0b; position: relative;">
          <div style="font-size: 1.8rem; font-weight: 800; color: #f59e0b; margin-bottom: 10px;">02</div>
          <h3 style="font-size: 1.15rem; color: #ffffff; margin-bottom: 10px;">Battery & Electrical Isolation</h3>
          <p style="font-size: 0.9rem; color: #94a3b8;">Main MCB breaker turned off, keyless proximity smart-keys wrapped in signal shielding, and battery terminals taped with dielectric electrical insulation.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); padding: 30px 20px; border-radius: 12px; border-top: 3px solid #f59e0b; position: relative;">
          <div style="font-size: 1.8rem; font-weight: 800; color: #f59e0b; margin-bottom: 10px;">03</div>
          <h3 style="font-size: 1.15rem; color: #ffffff; margin-bottom: 10px;">7-Layer Thermal & Screen Wrap</h3>
          <p style="font-size: 0.9rem; color: #94a3b8;">Microfiber dashboard wrap, heavy-duty bubble casing, corrugated side panels, and waterproof stretch wrap sealed with industrial straps.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); padding: 30px 20px; border-radius: 12px; border-top: 3px solid #f59e0b; position: relative;">
          <div style="font-size: 1.8rem; font-weight: 800; color: #f59e0b; margin-bottom: 10px;">04</div>
          <h3 style="font-size: 1.15rem; color: #ffffff; margin-bottom: 10px;">Enclosed Container Wheel-Chock Tie-Down</h3>
          <p style="font-size: 0.9rem; color: #94a3b8;">Ramp loaded into enclosed weatherproof truck. Wheels secured in steel wheel-chocks and double-belted with soft ratchet tie-downs.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); padding: 30px 20px; border-radius: 12px; border-top: 3px solid #f59e0b; position: relative;">
          <div style="font-size: 1.8rem; font-weight: 800; color: #f59e0b; margin-bottom: 10px;">05</div>
          <h3 style="font-size: 1.15rem; color: #ffffff; margin-bottom: 10px;">Doorstep Unpacking & Terminal Test</h3>
          <p style="font-size: 0.9rem; color: #94a3b8;">Safe unloading at destination, outer wrapping removal, MCB circuit reactivation, and complete dashboard boot-up verification with client sign-off.</p>
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
        <a href="<?php echo SITE_URL; ?>/bike-transport-bullet" title="Royal Enfield Bullet Transport" style="color: #cbd5e1; background: rgba(255,255,255,0.05); padding: 8px 16px; border-radius: 20px; text-decoration: none; border: 1px solid rgba(255,255,255,0.1);">Royal Enfield Bullet Transport</a>
        <a href="<?php echo SITE_URL; ?>/bike-transport-dirt-quad" title="Dirt Bike & ATV Transport" style="color: #cbd5e1; background: rgba(255,255,255,0.05); padding: 8px 16px; border-radius: 20px; text-decoration: none; border: 1px solid rgba(255,255,255,0.1);">Dirt Bike & ATV Transport</a>
        <a href="<?php echo SITE_URL; ?>/bike-transport-covers" title="Bike Covers & Packing Materials" style="color: #cbd5e1; background: rgba(255,255,255,0.05); padding: 8px 16px; border-radius: 20px; text-decoration: none; border: 1px solid rgba(255,255,255,0.1);">Bike Packing & Covers</a>
        <a href="<?php echo SITE_URL; ?>/agatti-to-mangalore-car-transport-cost" title="Agatti to Mangalore Car Shipping" style="color: #cbd5e1; background: rgba(255,255,255,0.05); padding: 8px 16px; border-radius: 20px; text-decoration: none; border: 1px solid rgba(255,255,255,0.1);">Agatti Maritime Transport</a>
      </div>

    </div>
  </section>

  <!-- 8. Interactive 10-Item Structured FAQ Section -->
  <section style="padding: 60px 0; background: #0b132b;">
    <div class="container" style="max-width: 900px; margin: 0 auto; padding: 0 20px;">
      
      <h2 style="font-size: 2rem; color: #ffffff; text-align: center; margin-bottom: 12px; font-weight: 700;">
        Frequently Asked Questions: Electric Bike & Scooter Transport
      </h2>
      <p style="text-align: center; color: #94a3b8; margin-bottom: 40px;">
        Expert answers regarding lithium-ion battery handling, screen protection, costs, and safety compliance.
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
        Ready to Relocate Your Electric Scooter or E-Bike Safely?
      </h2>
      <p style="font-size: 1.1rem; color: #cbd5e1; margin-bottom: 30px; line-height: 1.7;">
        Get certified lithium battery isolation, 7-layer touchscreen wrapping, and 100% insured door-to-door container transport.
      </p>

      <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap;">
        <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Direct" style="padding: 16px 36px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 800; font-size: 1.05rem; text-decoration: none; box-shadow: 0 6px 20px rgba(225, 29, 72, 0.4);">
          <i class="fas fa-phone-alt" style="margin-right: 10px;"></i> Call Direct: <?php echo SITE_PHONE; ?>
        </a>
        <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20to%20book%20Electric%20Bike%20Transport." title="WhatsApp EV Booking" target="_blank" style="padding: 16px 36px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 800; font-size: 1.05rem; text-decoration: none; box-shadow: 0 6px 20px rgba(16, 185, 129, 0.4);">
          <i class="fab fa-whatsapp" style="margin-right: 10px;"></i> Book via WhatsApp
        </a>
      </div>

    </div>
  </section>

</main>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
