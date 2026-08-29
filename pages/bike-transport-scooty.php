<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "Scooter & Scooty Transport Services | Honda Activa, TVS Jupiter, Vespa Shifting";
$page_desc = "Master Guide for gearless scooter & scooty transportation in India. Specialized fiber-body foam padding, underbody engine shield, zero-scratch enclosed container transport, and doorstep delivery for Activa, Jupiter, Access, Vespa, and Burgman.";
$page_keywords = "scooty transport services, honda activa shifting cost, tvs jupiter transport, vespa relocation india, gearless scooter shipping, scooty parcel rate, shree ashirwad packers";
$canonical_url = "https://shreeashirwadpackersandmovers.com/guides/bike-transport-scooty";

// Define 10 Page-Specific FAQs for Header JSON-LD & Page Body Rendering
$faq_list = [
    [
        "question" => "How do you protect fiber plastic body panels on scooters during transport?",
        "answer" => "Fiber body panels on scooters like Honda Activa and TVS Jupiter are prone to cracking under high pressure. We apply a soft inner micro-fiber film followed by 10mm high-density foam sheets and thick bubble wrap before securing corrugated outer armor."
    ],
    [
        "question" => "What is the average cost to transport a scooty across cities in India?",
        "answer" => "Transporting a gearless scooter typically costs between ₹2,000 and ₹3,200 for distances up to 400 km, ₹3,200 to ₹4,800 for 400–1,000 km, and ₹4,800 to ₹6,500 for long-distance interstate routes over 1,000 km."
    ],
    [
        "question" => "How is a gearless scooter secured inside a transport container?",
        "answer" => "Scooters lack top tube frames, so we secure them using custom lower step-thru frame straps combined with front-wheel locking chocks and soft synthetic ratchet tie-downs attached to heavy-duty floor D-rings."
    ],
    [
        "question" => "Should the scooty be placed on its main stand or side stand during transit?",
        "answer" => "Scooters are secured on their wheels with the main stand retracted, supported by front wheel-chocks and 4-point tensioned straps. Resting on main stands during highway bumps can cause floor pan cracking or stand failure."
    ],
    [
        "question" => "Can I send helmet and footboard luggage with the scooter?",
        "answer" => "Yes. Riding helmets, rainwear, and small personal belongings can be safely locked inside the under-seat storage boot or packed in an auxiliary carton secured alongside the vehicle."
    ],
    [
        "question" => "How do you protect the rear view mirrors and windscreen on vintage Vespas?",
        "answer" => "Rear-view mirrors and retro chrome accessories on Vespas or scooters with tall windscreens are unbolted, individually wrapped in thick bubble wrap, and taped securely to the footboard for zero-damage transit."
    ],
    [
        "question" => "Is doorstep pickup and delivery included for scooty shipping?",
        "answer" => "Yes, our team brings a pickup vehicle directly to your residence, performs pre-transit inspection, packs the scooter on-site, loads it into an enclosed truck, and delivers it to your destination doorstep."
    ],
    [
        "question" => "What documents are required to shift a scooty?",
        "answer" => "You need a copy of the Registration Certificate (RC), valid two-wheeler insurance policy, Pollution Under Control (PUC) certificate, and owner government ID proof."
    ],
    [
        "question" => "Are electric scooters like Ola S1 or Ather handled under scooty transport?",
        "answer" => "Electric scooters are handled under specialized EV protocol, which includes lithium-ion battery circuit isolation and thermal wrap in addition to standard fiber body protection."
    ],
    [
        "question" => "Is transit insurance mandatory for scooty relocation?",
        "answer" => "We strongly recommend comprehensive 1.5% transit insurance based on the declared market value of your scooter to cover unforeseen transit risks, natural hazards, or road accidents."
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
            Gearless Scooter & Fiber-Body Relocation Experts
          </span>
          <h1 style="font-size: 2.7rem; font-weight: 800; line-height: 1.2; margin-bottom: 20px; color: #ffffff;">
            Safe & Reliable <span style="color: #f59e0b;">Scooter & Scooty Transport</span>
          </h1>
          <p style="font-size: 1.12rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 25px;">
            Transporting gearless scooters (Activa, Jupiter, Access, Vespa, Burgman) requires specialized fiber-body foam armor and lower step-thru frame lashing. Shree Ashirwad Packers and Movers guarantees zero-scratch, zero-dent door-to-door container shipping across India.
          </p>

          <div style="display: flex; gap: 15px; flex-wrap: wrap; margin-bottom: 30px;">
            <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Scooty Logistics Desk" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
              <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call Desk: <?php echo SITE_PHONE; ?>
            </a>
            <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20a%20quote%20for%20Scooter%20Transport." title="Chat on WhatsApp" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
              <i class="fab fa-whatsapp" style="margin-right: 8px;"></i> WhatsApp Scooty Quote
            </a>
          </div>

          <div style="display: flex; gap: 20px; font-size: 0.9rem; color: #94a3b8; flex-wrap: wrap;">
            <span><strong style="color: #f59e0b;">Fiber Body</strong> Foam Armor</span>
            <span><strong style="color: #f59e0b;">Step-Thru</strong> Frame Lashing</span>
            <span><strong style="color: #f59e0b;">100% Insured</strong> Handover</span>
          </div>
        </div>

        <!-- Hero Lead Form Column -->
        <div class="hero-form-card" style="background: rgba(255, 255, 255, 0.05); backdrop-filter: blur(10px); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 16px; padding: 30px; box-shadow: 0 15px 35px rgba(0,0,0,0.4);">
          <h2 style="font-size: 1.4rem; color: #ffffff; margin-bottom: 8px; font-weight: 700; text-align: center;">Get Scooty Shifting Quote</h2>
          <p style="font-size: 0.85rem; color: #94a3b8; text-align: center; margin-bottom: 20px;">Receive itemized price estimate on WhatsApp in 2 minutes</p>

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
              Calculate Scooty Freight &rarr;
            </button>
          </form>
        </div>

      </div>
    </div>
  </section>

  <!-- 3. Key Metrics & Scooter Relocation Stats Grid -->
  <section style="padding: 40px 0; background: #0f172a; border-bottom: 1px solid rgba(255,255,255,0.05);">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 20px; text-align: center;">
        
        <div style="background: rgba(255,255,255,0.03); padding: 25px 15px; border-radius: 12px; border: 1px solid rgba(245,158,11,0.2);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; margin-bottom: 5px;">9,400+</div>
          <div style="font-size: 0.9rem; color: #94a3b8;">Scooters & Scooties Shifted</div>
        </div>

        <div style="background: rgba(255,255,255,0.03); padding: 25px 15px; border-radius: 12px; border: 1px solid rgba(245,158,11,0.2);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; margin-bottom: 5px;">100%</div>
          <div style="font-size: 0.9rem; color: #94a3b8;">Fiber Panel Scratch Protection</div>
        </div>

        <div style="background: rgba(255,255,255,0.03); padding: 25px 15px; border-radius: 12px; border: 1px solid rgba(245,158,11,0.2);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; margin-bottom: 5px;">7-Layer</div>
          <div style="font-size: 0.9rem; color: #94a3b8;">High-Density Foam Cushioning</div>
        </div>

        <div style="background: rgba(255,255,255,0.03); padding: 25px 15px; border-radius: 12px; border: 1px solid rgba(245,158,11,0.2);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; margin-bottom: 5px;">Zero</div>
          <div style="font-size: 0.9rem; color: #94a3b8;">Underbody Exhaust Scrape</div>
        </div>

      </div>
    </div>
  </section>

  <!-- 4. Deep Dive Technical Content Section -->
  <section style="padding: 60px 0; background: #0b132b;">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
      
      <div style="max-width: 900px; margin: 0 auto; line-height: 1.8; color: #cbd5e1;">
        
        <h2 style="font-size: 2rem; color: #ffffff; margin-bottom: 20px; font-weight: 700; border-left: 4px solid #f59e0b; padding-left: 15px;">
          Specialized Logistics for Gearless Scooters & Light Two-Wheelers
        </h2>

        <p style="margin-bottom: 20px;">
          Modern gearless scooters—such as the <strong>Honda Activa 6G, TVS Jupiter 125, Suzuki Access 125, Yamaha RayZR, and Vespa SXL</strong>—are designed with lightweight composite plastic or pressed-steel body panels and step-through floorboards. While these features make them agile for city commuting, they require specialized wrapping techniques during highway logistics transit.
        </p>

        <p style="margin-bottom: 20px;">
          Standard rope tie-downs used by unorganized transporters crush plastic body cowlings and break front turn-signal indicators. At Shree Ashirwad Packers and Movers, we employ high-density 10mm EVA foam sheets over all lateral fairings, combined with non-abrasive soft synthetic webbing anchored to front wheel chocks, ensuring your scooter remains perfectly upright and scratch-free.
        </p>

        <h3 style="font-size: 1.5rem; color: #f59e0b; margin: 35px 0 15px 0; font-weight: 700;">
          4 Critical Scooter Protection Safeguards
        </h3>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 20px; margin: 25px 0;">
          
          <div style="background: rgba(255,255,255,0.03); padding: 20px; border-radius: 10px; border: 1px solid rgba(255,255,255,0.08);">
            <h4 style="color: #ffffff; font-size: 1.1rem; margin-bottom: 10px;">1. Side Cowling Foam Armor</h4>
            <p style="font-size: 0.92rem; color: #94a3b8;">Thick foam sheets applied over wide rear side-panels to prevent lateral friction during multi-vehicle truck stacking.</p>
          </div>

          <div style="background: rgba(255,255,255,0.03); padding: 20px; border-radius: 10px; border: 1px solid rgba(255,255,255,0.08);">
            <h4 style="color: #ffffff; font-size: 1.1rem; margin-bottom: 10px;">2. Footboard Step-Thru Lashing</h4>
            <p style="font-size: 0.92rem; color: #94a3b8;">Custom low-center-of-gravity lashing straps secure the lower chassis frame without compressing handlebar plastics.</p>
          </div>

          <div style="background: rgba(255,255,255,0.03); padding: 20px; border-radius: 10px; border: 1px solid rgba(255,255,255,0.08);">
            <h4 style="color: #ffffff; font-size: 1.1rem; margin-bottom: 10px;">3. Exhaust & Center-Stand Shield</h4>
            <p style="font-size: 0.92rem; color: #94a3b8;">Underbody engine casing and exhaust muffler receive impact-resistant corrugated card armor to prevent road debris hits.</p>
          </div>

          <div style="background: rgba(255,255,255,0.03); padding: 20px; border-radius: 10px; border: 1px solid rgba(255,255,255,0.08);">
            <h4 style="color: #ffffff; font-size: 1.1rem; margin-bottom: 10px;">4. Mirror & Windshield Packing</h4>
            <p style="font-size: 0.92rem; color: #94a3b8;">Rearview mirrors and windshield extensions are carefully detached, bubble-wrapped, and safely stored in the footboard bay.</p>
          </div>

        </div>

      </div>

    </div>
  </section>

  <!-- 5. Scooter Transport Pricing & Distance Matrix -->
  <section style="padding: 60px 0; background: #0f172a; border-top: 1px solid rgba(255,255,255,0.08); border-bottom: 1px solid rgba(255,255,255,0.08);">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
      
      <h2 style="font-size: 2rem; color: #ffffff; text-align: center; margin-bottom: 12px; font-weight: 700;">
        Itemized Scooter & Scooty Transport Tariff Matrix
      </h2>
      <p style="text-align: center; color: #94a3b8; margin-bottom: 40px; max-width: 700px; margin-left: auto; margin-right: auto;">
        Distance-calibrated freight rates for popular gearless scooters, maxi-scooters, and retro metal-body models.
      </p>

      <div style="overflow-x: auto;">
        <table style="width: 100%; border-collapse: collapse; text-align: left; background: rgba(255,255,255,0.02); border-radius: 12px; overflow: hidden; border: 1px solid rgba(245, 158, 11, 0.2);">
          <thead>
            <tr style="background: linear-gradient(135deg, #1c2541 0%, #0b132b 100%); color: #f59e0b; border-bottom: 2px solid rgba(245, 158, 11, 0.3);">
              <th style="padding: 16px 20px; font-size: 0.95rem; text-transform: uppercase;">Distance Band</th>
              <th style="padding: 16px 20px; font-size: 0.95rem; text-transform: uppercase;">Fiber-Body Scooty (100-110cc)</th>
              <th style="padding: 16px 20px; font-size: 0.95rem; text-transform: uppercase;">125cc Scooter (Jupiter/Access)</th>
              <th style="padding: 16px 20px; font-size: 0.95rem; text-transform: uppercase;">Retro Metal / Maxi (Vespa/Burgman)</th>
              <th style="padding: 16px 20px; font-size: 0.95rem; text-transform: uppercase;">Estimated Transit Time</th>
            </tr>
          </thead>
          <tbody style="color: #cbd5e1; font-size: 0.95rem;">
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.05);">
              <td style="padding: 16px 20px; font-weight: 700; color: #ffffff;">0 – 350 km</td>
              <td style="padding: 16px 20px;">₹2,000 – ₹2,800</td>
              <td style="padding: 16px 20px;">₹2,300 – ₹3,100</td>
              <td style="padding: 16px 20px;">₹2,800 – ₹3,600</td>
              <td style="padding: 16px 20px; color: #10b981;">24 – 48 Hours</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.05); background: rgba(255,255,255,0.01);">
              <td style="padding: 16px 20px; font-weight: 700; color: #ffffff;">350 – 800 km</td>
              <td style="padding: 16px 20px;">₹3,100 – ₹4,200</td>
              <td style="padding: 16px 20px;">₹3,500 – ₹4,600</td>
              <td style="padding: 16px 20px;">₹4,200 – ₹5,400</td>
              <td style="padding: 16px 20px; color: #10b981;">2 – 3 Days</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.05);">
              <td style="padding: 16px 20px; font-weight: 700; color: #ffffff;">800 – 1,500 km</td>
              <td style="padding: 16px 20px;">₹4,400 – ₹5,800</td>
              <td style="padding: 16px 20px;">₹4,900 – ₹6,400</td>
              <td style="padding: 16px 20px;">₹5,800 – ₹7,200</td>
              <td style="padding: 16px 20px; color: #10b981;">4 – 5 Days</td>
            </tr>
            <tr style="background: rgba(255,255,255,0.01);">
              <td style="padding: 16px 20px; font-weight: 700; color: #ffffff;">1,500+ km</td>
              <td style="padding: 16px 20px;">₹6,000 – ₹7,800</td>
              <td style="padding: 16px 20px;">₹6,800 – ₹8,500</td>
              <td style="padding: 16px 20px;">₹7,900 – ₹9,800</td>
              <td style="padding: 16px 20px; color: #10b981;">6 – 8 Days</td>
            </tr>
          </tbody>
        </table>
      </div>

      <p style="font-size: 0.85rem; color: #94a3b8; margin-top: 15px; text-align: center;">
        * Includes doorstep pickup, 7-layer foam packaging, enclosed container truck transport, and doorstep delivery. 1.5% optional transit insurance policy charged on RC declared value.
      </p>

    </div>
  </section>

  <!-- 6. Step-by-Step Scooter Relocation Protocol -->
  <section style="padding: 60px 0; background: #0b132b;">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
      
      <h2 style="font-size: 2rem; color: #ffffff; text-align: center; margin-bottom: 40px; font-weight: 700;">
        Our 5-Step Guaranteed Scooty Relocation Protocol
      </h2>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 25px;">
        
        <div style="background: rgba(255,255,255,0.03); padding: 30px 20px; border-radius: 12px; border-top: 3px solid #f59e0b;">
          <div style="font-size: 1.8rem; font-weight: 800; color: #f59e0b; margin-bottom: 10px;">01</div>
          <h3 style="font-size: 1.15rem; color: #ffffff; margin-bottom: 10px;">Inspection & Fiber Body Mapping</h3>
          <p style="font-size: 0.9rem; color: #94a3b8;">Supervisor records existing body panel paint state, underbody engine status, and odometer reading on an official digital checklist.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); padding: 30px 20px; border-radius: 12px; border-top: 3px solid #f59e0b;">
          <div style="font-size: 1.8rem; font-weight: 800; color: #f59e0b; margin-bottom: 10px;">02</div>
          <h3 style="font-size: 1.15rem; color: #ffffff; margin-bottom: 10px;">Mirror Removal & Foam Cushioning</h3>
          <p style="font-size: 0.9rem; color: #94a3b8;">Rear-view mirrors unbolted and wrapped; 10mm EVA foam sheets wrapped around wide side cowlings and headlamp fairing.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); padding: 30px 20px; border-radius: 12px; border-top: 3px solid #f59e0b;">
          <div style="font-size: 1.8rem; font-weight: 800; color: #f59e0b; margin-bottom: 10px;">03</div>
          <h3 style="font-size: 1.15rem; color: #ffffff; margin-bottom: 10px;">7-Layer Weatherproof Casing</h3>
          <p style="font-size: 0.9rem; color: #94a3b8;">Anti-scratch inner film, heavy bubble wrap, corrugated cardboard armor, and waterproof stretch wrap sealed with industrial straps.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); padding: 30px 20px; border-radius: 12px; border-top: 3px solid #f59e0b;">
          <div style="font-size: 1.8rem; font-weight: 800; color: #f59e0b; margin-bottom: 10px;">04</div>
          <h3 style="font-size: 1.15rem; color: #ffffff; margin-bottom: 10px;">Container Step-Thru Lashing</h3>
          <p style="font-size: 0.9rem; color: #94a3b8;">Loaded into enclosed container truck; front wheel locked in chocks with soft synthetic ratchet belts anchored to truck floor rings.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); padding: 30px 20px; border-radius: 12px; border-top: 3px solid #f59e0b;">
          <div style="font-size: 1.8rem; font-weight: 800; color: #f59e0b; margin-bottom: 10px;">05</div>
          <h3 style="font-size: 1.15rem; color: #ffffff; margin-bottom: 10px;">Doorstep Handover & Assembly</h3>
          <p style="font-size: 0.9rem; color: #94a3b8;">Delivered to target address, outer wrapping removed, mirrors re-attached, and client verification sign-off completed.</p>
        </div>

      </div>

    </div>
  </section>

  <!-- 7. Strategic Internal Navigation Link Grid -->
  <section style="padding: 50px 0; background: #0f172a; border-top: 1px solid rgba(255,255,255,0.05);">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
      
      <h3 style="font-size: 1.4rem; color: #ffffff; margin-bottom: 20px; font-weight: 700; text-align: center;">
        Explore Related Two-Wheeler Relocation Guides
      </h3>

      <div style="display: flex; gap: 15px; flex-wrap: wrap; justify-content: center; font-size: 0.9rem;">
        <a href="<?php echo SITE_URL; ?>/packers-and-movers-in-ranchi" title="Packers and Movers Ranchi" style="color: #cbd5e1; background: rgba(255,255,255,0.05); padding: 8px 16px; border-radius: 20px; text-decoration: none; border: 1px solid rgba(255,255,255,0.1);">Packers and Movers Ranchi</a>
        <a href="<?php echo SITE_URL; ?>/packers-and-movers-in-patna" title="Packers and Movers Patna" style="color: #cbd5e1; background: rgba(255,255,255,0.05); padding: 8px 16px; border-radius: 20px; text-decoration: none; border: 1px solid rgba(255,255,255,0.1);">Packers and Movers Patna</a>
        <a href="<?php echo SITE_URL; ?>/bike-transportation-cost" title="Bike Transportation Cost Guide" style="color: #cbd5e1; background: rgba(255,255,255,0.05); padding: 8px 16px; border-radius: 20px; text-decoration: none; border: 1px solid rgba(255,255,255,0.1);">Bike Transportation Cost</a>
        <a href="<?php echo SITE_URL; ?>/bike-transport-electric" title="Electric Bike Transport Guide" style="color: #cbd5e1; background: rgba(255,255,255,0.05); padding: 8px 16px; border-radius: 20px; text-decoration: none; border: 1px solid rgba(255,255,255,0.1);">Electric Bike Transport</a>
        <a href="<?php echo SITE_URL; ?>/bike-transport-superbike" title="Superbike Transport Guide" style="color: #cbd5e1; background: rgba(255,255,255,0.05); padding: 8px 16px; border-radius: 20px; text-decoration: none; border: 1px solid rgba(255,255,255,0.1);">Superbike Transport</a>
      </div>

    </div>
  </section>

  <!-- 8. Interactive 10-Item Structured FAQ Section -->
  <section style="padding: 60px 0; background: #0b132b;">
    <div class="container" style="max-width: 900px; margin: 0 auto; padding: 0 20px;">
      
      <h2 style="font-size: 2rem; color: #ffffff; text-align: center; margin-bottom: 12px; font-weight: 700;">
        Frequently Asked Questions: Scooter & Scooty Transport
      </h2>
      <p style="text-align: center; color: #94a3b8; margin-bottom: 40px;">
        Clear answers regarding fiber body protection, lashing methods, costs, and doorstep delivery.
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
        Ready to Relocate Your Scooter or Scooty Scratch-Free?
      </h2>
      <p style="font-size: 1.1rem; color: #cbd5e1; margin-bottom: 30px; line-height: 1.7;">
        Get specialized fiber-body foam armor, enclosed container transport, and 100% insured doorstep handover.
      </p>

      <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap;">
        <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Direct" style="padding: 16px 36px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 800; font-size: 1.05rem; text-decoration: none; box-shadow: 0 6px 20px rgba(225, 29, 72, 0.4);">
          <i class="fas fa-phone-alt" style="margin-right: 10px;"></i> Call Direct: <?php echo SITE_PHONE; ?>
        </a>
        <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20to%20book%20Scooter%20Transport." title="WhatsApp Scooty Booking" target="_blank" style="padding: 16px 36px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 800; font-size: 1.05rem; text-decoration: none; box-shadow: 0 6px 20px rgba(16, 185, 129, 0.4);">
          <i class="fab fa-whatsapp" style="margin-right: 10px;"></i> Book via WhatsApp
        </a>
      </div>

    </div>
  </section>

</main>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
