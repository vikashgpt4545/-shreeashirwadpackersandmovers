<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "Bike Transportation Services India | Doorstep Two-Wheeler Shifting";
$page_desc = "Authoritative Master Guide for professional bike transportation services across India. Featuring enclosed container transport, 7-layer packaging, pre-transit inspection, 100% transit insurance, and doorstep delivery for all motorcycles & scooters.";
$page_keywords = "bike transportation services, motorcycle shipping india, two wheeler relocation, insured bike transport, iba approved bike movers, doorstep bike parcel service, shree ashirwad packers";
$canonical_url = "https://shreeashirwadpackersandmovers.com/guides/bike-transportation";

// Define 10 Page-Specific FAQs for Header JSON-LD & Page Body Rendering
$faq_list = [
    [
        "question" => "Why choose Shree Ashirwad Packers and Movers for bike transportation?",
        "answer" => "We are IBA-compliant two-wheeler logistics specialists offering 7-layer protective body packaging, enclosed container truck haulage, 4-point wheel-chock lashing, 100% transit insurance, and guaranteed door-to-door delivery across India."
    ],
    [
        "question" => "How is my motorcycle protected from scratches and dents during shifting?",
        "answer" => "We apply a 7-layer defense system comprising anti-scratch inner film, heavy bubble wrap, corrugated cardboard body armor for fuel tanks and fairings, foam padding for handlebars/mirrors, and waterproof outer stretch wrap."
    ],
    [
        "question" => "What documents must I submit to transport my bike?",
        "answer" => "You need to provide a copy of the Vehicle Registration Certificate (RC), valid insurance policy, Pollution Under Control (PUC) certificate, and government-issued owner ID (Aadhaar or Driving License)."
    ],
    [
        "question" => "What is the difference between open carrier and enclosed container bike transport?",
        "answer" => "Open truck carriers expose your vehicle to highway rain, dust, flying gravel, and weather degradation. Enclosed container trucks keep your motorcycle completely sealed and protected from external elements."
    ],
    [
        "question" => "Is my bike insured during interstate transit?",
        "answer" => "Yes. We offer 100% comprehensive transit insurance coverage (calculated at 1.5% of declared vehicle market value) protecting against accidents, theft, fire, and transit damage."
    ],
    [
        "question" => "How far in advance should I book bike transportation services?",
        "answer" => "We recommend reserving your booking 2 to 4 days prior to your planned moving date to ensure dedicated container floor space and timely doorstep pickup."
    ],
    [
        "question" => "Must the fuel tank be empty before loading?",
        "answer" => "Yes. Highway safety regulations require fuel levels to be reduced to under 1 liter (reserve) to eliminate combustion hazards inside closed truck containers."
    ],
    [
        "question" => "Do you provide real-time tracking for my bike shipment?",
        "answer" => "Yes, our intercity container fleet is integrated with GPS tracking, allowing our logistics team to provide real-time transit updates upon request."
    ],
    [
        "question" => "Can sports bikes and heavy cruisers be safely transported?",
        "answer" => "Absolutley. Heavy cruisers (like Royal Enfield) and high-value superbikes receive customized wooden crating, widened wheel chocks, and reinforced synthetic ratchet straps."
    ],
    [
        "question" => "How long does doorstep bike transportation take in India?",
        "answer" => "Intra-state and neighboring state relocations take 24–48 hours; major metro routes (500–1,200 km) take 2–4 days; long-haul interstate shipments take 5–8 days."
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
        <span class="breadcrumb-item"><a href="<?php echo SITE_URL; ?>guides" title="Guides" style="color: #f59e0b; text-decoration: none;">Guides</a></span>
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
            India's Rated Two-Wheeler Logistics Specialists
          </span>
          <h1 style="font-size: 2.7rem; font-weight: 800; line-height: 1.2; margin-bottom: 20px; color: #ffffff;">
            Professional <span style="color: #f59e0b;">Bike Transportation Services</span>
          </h1>
          <p style="font-size: 1.12rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 25px;">
            Shift your motorcycle or scooter across India with total peace of mind. We provide 7-layer specialized armor wrapping, enclosed container truck haulage, steel wheel-chock lashing, 100% transit insurance, and doorstep delivery with zero scratch guarantee.
          </p>

          <div style="display: flex; gap: 15px; flex-wrap: wrap; margin-bottom: 30px;">
            <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Logistics Desk" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
              <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call Desk: <?php echo SITE_PHONE; ?>
            </a>
            <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20a%20quote%20for%20Bike%20Transportation." title="Chat on WhatsApp" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
              <i class="fab fa-whatsapp" style="margin-right: 8px;"></i> WhatsApp Bike Quote
            </a>
          </div>

          <div style="display: flex; gap: 20px; font-size: 0.9rem; color: #94a3b8; flex-wrap: wrap;">
            <span><strong style="color: #f59e0b;">Enclosed Truck</strong> Shipping</span>
            <span><strong style="color: #f59e0b;">7-Layer</strong> Body Shield</span>
            <span><strong style="color: #f59e0b;">Door-to-Door</strong> Handover</span>
          </div>
        </div>

        <!-- Hero Lead Form Column -->
        <div class="hero-form-card" style="background: rgba(255, 255, 255, 0.05); backdrop-filter: blur(10px); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 16px; padding: 30px; box-shadow: 0 15px 35px rgba(0,0,0,0.4);">
          <h2 style="font-size: 1.4rem; color: #ffffff; margin-bottom: 8px; font-weight: 700; text-align: center;">Get Instant Bike Shifting Quote</h2>
          <p style="font-size: 0.85rem; color: #94a3b8; text-align: center; margin-bottom: 20px;">Receive transparent cost breakup on WhatsApp in 2 minutes</p>

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
              Calculate Transport Cost &rarr;
            </button>
          </form>
        </div>

      </div>
    </div>
  </section>

  <!-- 3. Key Metrics & Service Track Record Stats -->
  <section style="padding: 40px 0; background: #0f172a; border-bottom: 1px solid rgba(255,255,255,0.05);">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 20px; text-align: center;">
        
        <div style="background: rgba(255,255,255,0.03); padding: 25px 15px; border-radius: 12px; border: 1px solid rgba(245,158,11,0.2);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; margin-bottom: 5px;">18,500+</div>
          <div style="font-size: 0.9rem; color: #94a3b8;">Two-Wheelers Relocated</div>
        </div>

        <div style="background: rgba(255,255,255,0.03); padding: 25px 15px; border-radius: 12px; border: 1px solid rgba(245,158,11,0.2);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; margin-bottom: 5px;">100%</div>
          <div style="font-size: 0.9rem; color: #94a3b8;">All-Risk Insurance Coverage</div>
        </div>

        <div style="background: rgba(255,255,255,0.03); padding: 25px 15px; border-radius: 12px; border: 1px solid rgba(245,158,11,0.2);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; margin-bottom: 5px;">7-Layer</div>
          <div style="font-size: 0.9rem; color: #94a3b8;">Impact Cushioning Armor</div>
        </div>

        <div style="background: rgba(255,255,255,0.03); padding: 25px 15px; border-radius: 12px; border: 1px solid rgba(245,158,11,0.2);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; margin-bottom: 5px;">350+</div>
          <div style="font-size: 0.9rem; color: #94a3b8;">Cities Covered Nationwide</div>
        </div>

      </div>
    </div>
  </section>

  <!-- 4. Deep Dive Technical Content Section -->
  <section style="padding: 60px 0; background: #0b132b;">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
      
      <div style="max-width: 900px; margin: 0 auto; line-height: 1.8; color: #cbd5e1;">
        
        <h2 style="font-size: 2rem; color: #ffffff; margin-bottom: 20px; font-weight: 700; border-left: 4px solid #f59e0b; padding-left: 15px;">
          Comprehensive Two-Wheeler Transportation Solutions across India
        </h2>

        <p style="margin-bottom: 20px;">
          Whether you are relocating for a job transfer, sending a motorcycle to a university student, or transporting a high-value superbike for a touring expedition, professional <strong>bike transportation</strong> demands dedicated logistics infrastructure. Transporting a two-wheeler requires far more care than household goods because painted fairings, chrome exhaust pipes, fuel tanks, and sensitive handlebar instrumentation are highly vulnerable to highway vibration and friction.
        </p>

        <p style="margin-bottom: 20px;">
          At Shree Ashirwad Packers and Movers, we specialize in end-to-end two-wheeler relocation. Our specialized enclosed container trucks feature internal lashing points, non-abrasive synthetic ratchet belts, and front wheel-chocks designed specifically for motorcycles, gearless scooters, cruisers, and electric bikes.
        </p>

        <h3 style="font-size: 1.5rem; color: #f59e0b; margin: 35px 0 15px 0; font-weight: 700;">
          Our Core Bike Transport Service Verticals
        </h3>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 20px; margin: 25px 0;">
          
          <div style="background: rgba(255,255,255,0.03); padding: 20px; border-radius: 10px; border: 1px solid rgba(255,255,255,0.08);">
            <h4 style="color: #ffffff; font-size: 1.1rem; margin-bottom: 10px;">1. Standard Motorcycle Shipping</h4>
            <p style="font-size: 0.92rem; color: #94a3b8;">Door-to-door container shipping for 100cc to 250cc commuter motorcycles with 7-layer body wrapping and written inspection log.</p>
          </div>

          <div style="background: rgba(255,255,255,0.03); padding: 20px; border-radius: 10px; border: 1px solid rgba(255,255,255,0.08);">
            <h4 style="color: #ffffff; font-size: 1.1rem; margin-bottom: 10px;">2. Scooter & Scooty Transport</h4>
            <p style="font-size: 0.92rem; color: #94a3b8;">Specialized foam padding for lightweight fiber-body scooters (Activa, Jupiter, Access, Vespa) protecting side cowlings.</p>
          </div>

          <div style="background: rgba(255,255,255,0.03); padding: 20px; border-radius: 10px; border: 1px solid rgba(255,255,255,0.08);">
            <h4 style="color: #ffffff; font-size: 1.1rem; margin-bottom: 10px;">3. Cruiser & Heavy Bike Relocation</h4>
            <p style="font-size: 0.92rem; color: #94a3b8;">Reinforced lashing and heavy-duty wheel chocks for Royal Enfield Bullet, Jawa, Harley Davidson, and cruiser models.</p>
          </div>

          <div style="background: rgba(255,255,255,0.03); padding: 20px; border-radius: 10px; border: 1px solid rgba(255,255,255,0.08);">
            <h4 style="color: #ffffff; font-size: 1.1rem; margin-bottom: 10px;">4. Electric Bike & EV Scooter Shipping</h4>
            <p style="font-size: 0.92rem; color: #94a3b8;">Lithium battery MCB isolation, thermal insulation wrap, and touchscreen display protection for Ather, Ola, and TVS EVs.</p>
          </div>

        </div>

      </div>

    </div>
  </section>

  <!-- 5. General Bike Transport Tariff Matrix Table -->
  <section style="padding: 60px 0; background: #0f172a; border-top: 1px solid rgba(255,255,255,0.08); border-bottom: 1px solid rgba(255,255,255,0.08);">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
      
      <h2 style="font-size: 2rem; color: #ffffff; text-align: center; margin-bottom: 12px; font-weight: 700;">
        All-India Two-Wheeler Transportation Price Guide
      </h2>
      <p style="text-align: center; color: #94a3b8; margin-bottom: 40px; max-width: 700px; margin-left: auto; margin-right: auto;">
        Transparent, distance-calibrated container shipping rates for scooters, commuter bikes, and heavy motorcycles.
      </p>

      <div style="overflow-x: auto;">
        <table style="width: 100%; border-collapse: collapse; text-align: left; background: rgba(255,255,255,0.02); border-radius: 12px; overflow: hidden; border: 1px solid rgba(245, 158, 11, 0.2);">
          <thead>
            <tr style="background: linear-gradient(135deg, #1c2541 0%, #0b132b 100%); color: #f59e0b; border-bottom: 2px solid rgba(245, 158, 11, 0.3);">
              <th style="padding: 16px 20px; font-size: 0.95rem; text-transform: uppercase;">Distance Range</th>
              <th style="padding: 16px 20px; font-size: 0.95rem; text-transform: uppercase;">Scooter / Scooty</th>
              <th style="padding: 16px 20px; font-size: 0.95rem; text-transform: uppercase;">Commuter Bike (100-150cc)</th>
              <th style="padding: 16px 20px; font-size: 0.95rem; text-transform: uppercase;">Bullet / Cruiser (350cc+)</th>
              <th style="padding: 16px 20px; font-size: 0.95rem; text-transform: uppercase;">Estimated Transit Time</th>
            </tr>
          </thead>
          <tbody style="color: #cbd5e1; font-size: 0.95rem;">
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.05);">
              <td style="padding: 16px 20px; font-weight: 700; color: #ffffff;">0 – 400 km</td>
              <td style="padding: 16px 20px;">₹2,200 – ₹3,200</td>
              <td style="padding: 16px 20px;">₹2,500 – ₹3,500</td>
              <td style="padding: 16px 20px;">₹3,400 – ₹4,500</td>
              <td style="padding: 16px 20px; color: #10b981;">24 – 48 Hours</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.05); background: rgba(255,255,255,0.01);">
              <td style="padding: 16px 20px; font-weight: 700; color: #ffffff;">400 – 800 km</td>
              <td style="padding: 16px 20px;">₹3,400 – ₹4,500</td>
              <td style="padding: 16px 20px;">₹3,800 – ₹4,800</td>
              <td style="padding: 16px 20px;">₹4,900 – ₹6,200</td>
              <td style="padding: 16px 20px; color: #10b981;">2 – 3 Days</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.05);">
              <td style="padding: 16px 20px; font-weight: 700; color: #ffffff;">800 – 1,500 km</td>
              <td style="padding: 16px 20px;">₹4,800 – ₹6,200</td>
              <td style="padding: 16px 20px;">₹5,200 – ₹6,800</td>
              <td style="padding: 16px 20px;">₹6,600 – ₹8,200</td>
              <td style="padding: 16px 20px; color: #10b981;">4 – 5 Days</td>
            </tr>
            <tr style="background: rgba(255,255,255,0.01);">
              <td style="padding: 16px 20px; font-weight: 700; color: #ffffff;">1,500+ km</td>
              <td style="padding: 16px 20px;">₹6,500 – ₹8,200</td>
              <td style="padding: 16px 20px;">₹7,200 – ₹9,200</td>
              <td style="padding: 16px 20px;">₹8,800 – ₹11,500</td>
              <td style="padding: 16px 20px; color: #10b981;">6 – 8 Days</td>
            </tr>
          </tbody>
        </table>
      </div>

      <p style="font-size: 0.85rem; color: #94a3b8; margin-top: 15px; text-align: center;">
        * All quotes include 7-layer packaging, doorstep pickup, container truck freight, toll taxes, and doorstep delivery. 100% transit insurance charged at 1.5% of vehicle market value.
      </p>

    </div>
  </section>

  <!-- 6. Step-by-Step Service Workflow Cards -->
  <section style="padding: 60px 0; background: #0b132b;">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
      
      <h2 style="font-size: 2rem; color: #ffffff; text-align: center; margin-bottom: 40px; font-weight: 700;">
        Our 5-Step Guaranteed Relocation Workflow
      </h2>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 25px;">
        
        <div style="background: rgba(255,255,255,0.03); padding: 30px 20px; border-radius: 12px; border-top: 3px solid #f59e0b;">
          <div style="font-size: 1.8rem; font-weight: 800; color: #f59e0b; margin-bottom: 10px;">01</div>
          <h3 style="font-size: 1.15rem; color: #ffffff; margin-bottom: 10px;">Doorstep Survey & RC Check</h3>
          <p style="font-size: 0.9rem; color: #94a3b8;">Our supervisor inspects vehicle condition, records odometer reading, and verifies RC and insurance documents.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); padding: 30px 20px; border-radius: 12px; border-top: 3px solid #f59e0b;">
          <div style="font-size: 1.8rem; font-weight: 800; color: #f59e0b; margin-bottom: 10px;">02</div>
          <h3 style="font-size: 1.15rem; color: #ffffff; margin-bottom: 10px;">7-Layer Armor Packaging</h3>
          <p style="font-size: 0.9rem; color: #94a3b8;">Vehicle is wrapped in anti-scratch film, air-bubble sheeting, corrugated body armor, and waterproof stretch wrap.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); padding: 30px 20px; border-radius: 12px; border-top: 3px solid #f59e0b;">
          <div style="font-size: 1.8rem; font-weight: 800; color: #f59e0b; margin-bottom: 10px;">03</div>
          <h3 style="font-size: 1.15rem; color: #ffffff; margin-bottom: 10px;">Enclosed Container Lashing</h3>
          <p style="font-size: 0.9rem; color: #94a3b8;">Loaded into covered container truck via ramp; front wheel locked in steel chocks and double-belted with synthetic ratchet straps.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); padding: 30px 20px; border-radius: 12px; border-top: 3px solid #f59e0b;">
          <div style="font-size: 1.8rem; font-weight: 800; color: #f59e0b; margin-bottom: 10px;">04</div>
          <h3 style="font-size: 1.15rem; color: #ffffff; margin-bottom: 10px;">GPS Monitored Transit</h3>
          <p style="font-size: 0.9rem; color: #94a3b8;">Container truck dispatched with continuous GPS tracking; regular location status updates provided via WhatsApp.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); padding: 30px 20px; border-radius: 12px; border-top: 3px solid #f59e0b;">
          <div style="font-size: 1.8rem; font-weight: 800; color: #f59e0b; margin-bottom: 10px;">05</div>
          <h3 style="font-size: 1.15rem; color: #ffffff; margin-bottom: 10px;">Doorstep Handover & Unpacking</h3>
          <p style="font-size: 0.9rem; color: #94a3b8;">Safe delivery at target address, outer wrapping removal, mirror re-alignment, and final inspection sign-off.</p>
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
        <a href="<?php echo SITE_URL; ?>packers-and-movers-in-ranchi" title="Packers and Movers Ranchi" style="color: #cbd5e1; background: rgba(255,255,255,0.05); padding: 8px 16px; border-radius: 20px; text-decoration: none; border: 1px solid rgba(255,255,255,0.1);">Packers and Movers Ranchi</a>
        <a href="<?php echo SITE_URL; ?>packers-and-movers-in-patna" title="Packers and Movers Patna" style="color: #cbd5e1; background: rgba(255,255,255,0.05); padding: 8px 16px; border-radius: 20px; text-decoration: none; border: 1px solid rgba(255,255,255,0.1);">Packers and Movers Patna</a>
        <a href="<?php echo SITE_URL; ?>bike-transportation-cost" title="Bike Transportation Cost Guide" style="color: #cbd5e1; background: rgba(255,255,255,0.05); padding: 8px 16px; border-radius: 20px; text-decoration: none; border: 1px solid rgba(255,255,255,0.1);">Bike Transportation Cost</a>
        <a href="<?php echo SITE_URL; ?>bike-transportation-process" title="Bike Transport Process Guide" style="color: #cbd5e1; background: rgba(255,255,255,0.05); padding: 8px 16px; border-radius: 20px; text-decoration: none; border: 1px solid rgba(255,255,255,0.1);">Bike Transport Process</a>
        <a href="<?php echo SITE_URL; ?>bike-transport-electric" title="Electric Bike Transport Guide" style="color: #cbd5e1; background: rgba(255,255,255,0.05); padding: 8px 16px; border-radius: 20px; text-decoration: none; border: 1px solid rgba(255,255,255,0.1);">Electric Bike Transport</a>
        <a href="<?php echo SITE_URL; ?>bike-transport-dirt-quad" title="Dirt Bike & ATV Transport" style="color: #cbd5e1; background: rgba(255,255,255,0.05); padding: 8px 16px; border-radius: 20px; text-decoration: none; border: 1px solid rgba(255,255,255,0.1);">Dirt Bike & ATV Transport</a>
      </div>

    </div>
  </section>

  <!-- 8. Interactive 10-Item Structured FAQ Section -->
  <section style="padding: 60px 0; background: #0b132b;">
    <div class="container" style="max-width: 900px; margin: 0 auto; padding: 0 20px;">
      
      <h2 style="font-size: 2rem; color: #ffffff; text-align: center; margin-bottom: 12px; font-weight: 700;">
        Frequently Asked Questions: Bike Transportation Services
      </h2>
      <p style="text-align: center; color: #94a3b8; margin-bottom: 40px;">
        Everything you need to know about two-wheeler shifting, insurance, packaging, and doorstep delivery.
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
        Book Safe & Insured Bike Transportation Services Today
      </h2>
      <p style="font-size: 1.1rem; color: #cbd5e1; margin-bottom: 30px; line-height: 1.7;">
        7-layer armor packaging, enclosed container shipping, and guaranteed doorstep delivery across India.
      </p>

      <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap;">
        <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Direct" style="padding: 16px 36px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 800; font-size: 1.05rem; text-decoration: none; box-shadow: 0 6px 20px rgba(225, 29, 72, 0.4);">
          <i class="fas fa-phone-alt" style="margin-right: 10px;"></i> Call Direct: <?php echo SITE_PHONE; ?>
        </a>
        <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20to%20book%20Bike%20Transportation%20Services." title="WhatsApp Booking" target="_blank" style="padding: 16px 36px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 800; font-size: 1.05rem; text-decoration: none; box-shadow: 0 6px 20px rgba(16, 185, 129, 0.4);">
          <i class="fab fa-whatsapp" style="margin-right: 10px;"></i> Book via WhatsApp
        </a>
      </div>

    </div>
  </section>

</main>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
