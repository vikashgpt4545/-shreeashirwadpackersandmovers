<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "Bike Transportation Process | 6-Stage Motorcycle Shipping Workflow";
$page_desc = "Master Guide explaining the complete 6-stage bike transportation process in India. Detailed technical breakdown of pre-transit inspection, 7-layer safety packaging, hydraulic ramp loading, wheel-chock container lashing, GPS tracking, and insured doorstep delivery.";
$page_keywords = "bike transportation process, motorcycle shipping workflow, bike packing procedure, bike transport trailer loading, two wheeler lashing safety, doorstep bike delivery steps, shree ashirwad packers";
$canonical_url = "https://shreeashirwadpackersandmovers.com/guides/bike-transportation-process";

// Define 10 Page-Specific FAQs for Header JSON-LD & Page Body Rendering
$faq_list = [
    [
        "question" => "What is the first step in the professional bike transportation process?",
        "answer" => "The process begins with a joint physical inspection and pre-transit condition mapping. Our supervisor documents all existing scratches, mileage, and fuel levels on a digital inspection sheet signed by both parties."
    ],
    [
        "question" => "Why must fuel be drained from the motorcycle before shipping?",
        "answer" => "Fuel must be drained down to less than 1 liter (reserve level) to comply with Indian Central Motor Vehicles Rules and fire safety directives during enclosed highway truck transit."
    ],
    [
        "question" => "What materials are used in the 7-layer bike packaging protocol?",
        "answer" => "The 7-layer protocol uses anti-scratch stretch film, shock-absorbing bubble wrap, high-density foam padding over mirrors/controls, corrugated cardboard body armor, waterproof outer wrap, edge guards, and polypropylene straps."
    ],
    [
        "question" => "How is the motorcycle loaded onto the transport truck without scratching?",
        "answer" => "Vehicles are loaded using wide anti-slip aluminium ramps or hydraulic tail-lifts operated by trained crew, eliminating manual lifting risks or underbody scraping."
    ],
    [
        "question" => "How is the bike secured inside the container truck during transit?",
        "answer" => "The front wheel is locked inside a floor-mounted steel wheel-chock, and the chassis is stabilized using 4-point soft synthetic ratchet straps anchored to truck side-rails."
    ],
    [
        "question" => "Can I track my motorcycle during intercity transit?",
        "answer" => "Yes, all our primary long-haul container trucks are equipped with real-time GPS tracking systems, providing clients with vehicle location updates upon request."
    ],
    [
        "question" => "What documents are required to complete the booking process?",
        "answer" => "You need a copy of the Vehicle Registration Certificate (RC), active Bike Insurance policy, Pollution Under Control (PUC) certificate, and owner ID proof."
    ],
    [
        "question" => "How is the unpacking process handled at the destination city?",
        "answer" => "Our local delivery team brings the bike to your doorstep, removes all 7 layers of packaging, cleans outer residues, assists with mirror re-alignment, and verifies boot-up before final sign-off."
    ],
    [
        "question" => "What happens if damage occurs during the transportation process?",
        "answer" => "All shipments are backed by 100% comprehensive transit insurance. If damage occurs, our claims department processes repair expenses directly with the insurance provider based on initial inspection logs."
    ],
    [
        "question" => "How long does the complete process take from pickup to delivery?",
        "answer" => "Local/state relocations take 24–48 hours, intercity routes (500–1,200 km) take 2–4 days, and long-haul interstate shipments (1,500+ km) take 5–8 days."
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
            Certified 6-Stage Transport Engineering
          </span>
          <h1 style="font-size: 2.7rem; font-weight: 800; line-height: 1.2; margin-bottom: 20px; color: #ffffff;">
            Professional <span style="color: #f59e0b;">Bike Transportation Process</span>
          </h1>
          <p style="font-size: 1.12rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 25px;">
            Discover the exact engineering workflow behind zero-damage two-wheeler relocation. From pre-transit inspection and 7-layer packaging to hydraulic ramp loading, wheel-chock lashing, and GPS-monitored container transit across India.
          </p>

          <div style="display: flex; gap: 15px; flex-wrap: wrap; margin-bottom: 30px;">
            <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Process Manager" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
              <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call Manager: <?php echo SITE_PHONE; ?>
            </a>
            <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20to%20know%20more%20about%20the%20Bike%20Transportation%20Process." title="Chat on WhatsApp" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
              <i class="fab fa-whatsapp" style="margin-right: 8px;"></i> WhatsApp Process Help
            </a>
          </div>

          <div style="display: flex; gap: 20px; font-size: 0.9rem; color: #94a3b8; flex-wrap: wrap;">
            <span><strong style="color: #f59e0b;">Digital Pre-Check</strong> Inspection</span>
            <span><strong style="color: #f59e0b;">7-Layer</strong> Body Shielding</span>
            <span><strong style="color: #f59e0b;">GPS Tracked</strong> Transit</span>
          </div>
        </div>

        <!-- Hero Lead Form Column -->
        <div class="hero-form-card" style="background: rgba(255, 255, 255, 0.05); backdrop-filter: blur(10px); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 16px; padding: 30px; box-shadow: 0 15px 35px rgba(0,0,0,0.4);">
          <h2 style="font-size: 1.4rem; color: #ffffff; margin-bottom: 8px; font-weight: 700; text-align: center;">Book Bike Transport Process</h2>
          <p style="font-size: 0.85rem; color: #94a3b8; text-align: center; margin-bottom: 20px;">Receive step-by-step process plan & quote on WhatsApp</p>

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
              Get Process Plan & Quote &rarr;
            </button>
          </form>
        </div>

      </div>
    </div>
  </section>

  <!-- 3. Key Process Metrics & Operational Stats -->
  <section style="padding: 40px 0; background: #0f172a; border-bottom: 1px solid rgba(255,255,255,0.05);">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 20px; text-align: center;">
        
        <div style="background: rgba(255,255,255,0.03); padding: 25px 15px; border-radius: 12px; border: 1px solid rgba(245,158,11,0.2);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; margin-bottom: 5px;">6 Stages</div>
          <div style="font-size: 0.9rem; color: #94a3b8;">Standardized Safety Workflow</div>
        </div>

        <div style="background: rgba(255,255,255,0.03); padding: 25px 15px; border-radius: 12px; border: 1px solid rgba(245,158,11,0.2);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; margin-bottom: 5px;">100%</div>
          <div style="font-size: 0.9rem; color: #94a3b8;">Wheel-Chock & Lashing Protocol</div>
        </div>

        <div style="background: rgba(255,255,255,0.03); padding: 25px 15px; border-radius: 12px; border: 1px solid rgba(245,158,11,0.2);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; margin-bottom: 5px;">24/7</div>
          <div style="font-size: 0.9rem; color: #94a3b8;">GPS Tracking & Fleet Support</div>
        </div>

        <div style="background: rgba(255,255,255,0.03); padding: 25px 15px; border-radius: 12px; border: 1px solid rgba(245,158,11,0.2);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; margin-bottom: 5px;">0%</div>
          <div style="font-size: 0.9rem; color: #94a3b8;">Transit Scratch Rate</div>
        </div>

      </div>
    </div>
  </section>

  <!-- 4. Detailed Technical Process Content Section -->
  <section style="padding: 60px 0; background: #0b132b;">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
      
      <div style="max-width: 900px; margin: 0 auto; line-height: 1.8; color: #cbd5e1;">
        
        <h2 style="font-size: 2rem; color: #ffffff; margin-bottom: 20px; font-weight: 700; border-left: 4px solid #f59e0b; padding-left: 15px;">
          The Science of Safe Two-Wheeler Shipping: Step-by-Step Breakdown
        </h2>

        <p style="margin-bottom: 20px;">
          Transporting a motorcycle across hundreds or thousands of kilometers of highway is not simply a matter of loading a bike onto a truck. It requires a meticulous, engineering-backed <strong>6-stage shipping process</strong> designed to neutralize physical impact, vibration, road dust, moisture, and chassis tilt.
        </p>

        <p style="margin-bottom: 20px;">
          At Shree Ashirwad Packers and Movers, our operational protocol follows strict quality assurance standards. From initial physical inspection at your doorstep to specialized 7-layer packing, hydraulic ramp loading, wheel-chock lashing, enclosed container haulage, and final unboxing, every step is executed by certified vehicle handling specialists.
        </p>

        <h3 style="font-size: 1.5rem; color: #f59e0b; margin: 35px 0 15px 0; font-weight: 700;">
          Detailed Inspection & Safety Checkpoint Standards
        </h3>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 20px; margin: 25px 0;">
          
          <div style="background: rgba(255,255,255,0.03); padding: 20px; border-radius: 10px; border: 1px solid rgba(255,255,255,0.08);">
            <h4 style="color: #ffffff; font-size: 1.1rem; margin-bottom: 10px;">Stage 1: Pre-Transit Mapping</h4>
            <p style="font-size: 0.92rem; color: #94a3b8;">High-resolution photo documentation of body paint, fuel tank condition, odometer reading, mirrors, and existing blemishes prior to packaging.</p>
          </div>

          <div style="background: rgba(255,255,255,0.03); padding: 20px; border-radius: 10px; border: 1px solid rgba(255,255,255,0.08);">
            <h4 style="color: #ffffff; font-size: 1.1rem; margin-bottom: 10px;">Stage 2: 7-Layer Body Shielding</h4>
            <p style="font-size: 0.92rem; color: #94a3b8;">Application of anti-scratch inner wrap, thick air-bubble wrap, corrugated side panel sheets, handlebar foam, and waterproof outer stretch wrap.</p>
          </div>

          <div style="background: rgba(255,255,255,0.03); padding: 20px; border-radius: 10px; border: 1px solid rgba(255,255,255,0.08);">
            <h4 style="color: #ffffff; font-size: 1.1rem; margin-bottom: 10px;">Stage 3: Ramp & Tail-Lift Loading</h4>
            <p style="font-size: 0.92rem; color: #94a3b8;">Loading via wide anti-slip aluminium ramps or hydraulic tail-lifts to eliminate manual lifting, drop risks, or underbody exhaust scraping.</p>
          </div>

          <div style="background: rgba(255,255,255,0.03); padding: 20px; border-radius: 10px; border: 1px solid rgba(255,255,255,0.08);">
            <h4 style="color: #ffffff; font-size: 1.1rem; margin-bottom: 10px;">Stage 4: Wheel-Chock & Lashing</h4>
            <p style="font-size: 0.92rem; color: #94a3b8;">Front wheel locked into steel floor chocks inside container trucks; 4-point soft synthetic ratchet straps anchor the chassis firmly.</p>
          </div>

        </div>

      </div>

    </div>
  </section>

  <!-- 5. Process & Equipment Comparison Matrix -->
  <section style="padding: 60px 0; background: #0f172a; border-top: 1px solid rgba(255,255,255,0.08); border-bottom: 1px solid rgba(255,255,255,0.08);">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
      
      <h2 style="font-size: 2rem; color: #ffffff; text-align: center; margin-bottom: 12px; font-weight: 700;">
        Transportation Method & Safety Process Comparison
      </h2>
      <p style="text-align: center; color: #94a3b8; margin-bottom: 40px; max-width: 700px; margin-left: auto; margin-right: auto;">
        Compare our specialized enclosed container workflow against traditional open carrier and train luggage options.
      </p>

      <div style="overflow-x: auto;">
        <table style="width: 100%; border-collapse: collapse; text-align: left; background: rgba(255,255,255,0.02); border-radius: 12px; overflow: hidden; border: 1px solid rgba(245, 158, 11, 0.2);">
          <thead>
            <tr style="background: linear-gradient(135deg, #1c2541 0%, #0b132b 100%); color: #f59e0b; border-bottom: 2px solid rgba(245, 158, 11, 0.3);">
              <th style="padding: 16px 20px; font-size: 0.95rem; text-transform: uppercase;">Process Feature</th>
              <th style="padding: 16px 20px; font-size: 0.95rem; text-transform: uppercase;">Shree Ashirwad Enclosed Container</th>
              <th style="padding: 16px 20px; font-size: 0.95rem; text-transform: uppercase;">Open Truck Carrier</th>
              <th style="padding: 16px 20px; font-size: 0.95rem; text-transform: uppercase;">Railway Brake Van Parcel</th>
            </tr>
          </thead>
          <tbody style="color: #cbd5e1; font-size: 0.95rem;">
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.05);">
              <td style="padding: 16px 20px; font-weight: 700; color: #ffffff;">Pre-Loading Digital Inspection</td>
              <td style="padding: 16px 20px; color: #10b981; font-weight: 700;">Included (Photos & Written Log)</td>
              <td style="padding: 16px 20px;">Basic Manual Note</td>
              <td style="padding: 16px 20px; color: #ef4444;">No Inspection Protocol</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.05); background: rgba(255,255,255,0.01);">
              <td style="padding: 16px 20px; font-weight: 700; color: #ffffff;">Packaging Standard</td>
              <td style="padding: 16px 20px; color: #10b981; font-weight: 700;">7-Layer Weatherproof Shield</td>
              <td style="padding: 16px 20px;">2-3 Layer Basic Gunny Wrap</td>
              <td style="padding: 16px 20px;">Basic Jute Wrapping Only</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.05);">
              <td style="padding: 16px 20px; font-weight: 700; color: #ffffff;">Chassis Lashing & Anchorage</td>
              <td style="padding: 16px 20px; color: #10b981; font-weight: 700;">Steel Wheel-Chocks & Soft Straps</td>
              <td style="padding: 16px 20px;">Rope Tying (Metal Friction Risk)</td>
              <td style="padding: 16px 20px; color: #ef4444;">Unanchored Loose Stacking</td>
            </tr>
            <tr style="background: rgba(255,255,255,0.01);">
              <td style="padding: 16px 20px; font-weight: 700; color: #ffffff;">Doorstep Pickup & Delivery</td>
              <td style="padding: 16px 20px; color: #10b981; font-weight: 700;">100% Door-to-Door Service</td>
              <td style="padding: 16px 20px;">Terminal Pickup Required</td>
              <td style="padding: 16px 20px; color: #ef4444;">Station Platform Pickup Only</td>
            </tr>
          </tbody>
        </table>
      </div>

    </div>
  </section>

  <!-- 6. Step-by-Step Visual Process Workflow Cards -->
  <section style="padding: 60px 0; background: #0b132b;">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
      
      <h2 style="font-size: 2rem; color: #ffffff; text-align: center; margin-bottom: 40px; font-weight: 700;">
        Our 6-Step Doorstep Relocation Workflow
      </h2>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 25px;">
        
        <div style="background: rgba(255,255,255,0.03); padding: 30px 20px; border-radius: 12px; border-top: 3px solid #f59e0b;">
          <div style="font-size: 1.8rem; font-weight: 800; color: #f59e0b; margin-bottom: 10px;">01</div>
          <h3 style="font-size: 1.15rem; color: #ffffff; margin-bottom: 10px;">Doorstep Survey & Document Check</h3>
          <p style="font-size: 0.9rem; color: #94a3b8;">Our supervisor verifies RC, insurance, and ID proofs before conducting pre-transit digital photo inspection.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); padding: 30px 20px; border-radius: 12px; border-top: 3px solid #f59e0b;">
          <div style="font-size: 1.8rem; font-weight: 800; color: #f59e0b; margin-bottom: 10px;">02</div>
          <h3 style="font-size: 1.15rem; color: #ffffff; margin-bottom: 10px;">Fuel Draining & Mirror Protection</h3>
          <p style="font-size: 0.9rem; color: #94a3b8;">Fuel level reduced under 1 liter; rear-view mirrors folded/padded with specialized anti-vibration foam caps.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); padding: 30px 20px; border-radius: 12px; border-top: 3px solid #f59e0b;">
          <div style="font-size: 1.8rem; font-weight: 800; color: #f59e0b; margin-bottom: 10px;">03</div>
          <h3 style="font-size: 1.15rem; color: #ffffff; margin-bottom: 10px;">7-Layer Multi-Material Wrapping</h3>
          <p style="font-size: 0.9rem; color: #94a3b8;">Complete vehicle wrapped in anti-scratch film, air-bubble sheeting, corrugated body armor, and outer stretch wrap.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); padding: 30px 20px; border-radius: 12px; border-top: 3px solid #f59e0b;">
          <div style="font-size: 1.8rem; font-weight: 800; color: #f59e0b; margin-bottom: 10px;">04</div>
          <h3 style="font-size: 1.15rem; color: #ffffff; margin-bottom: 10px;">Ramp Loading & Container Lashing</h3>
          <p style="font-size: 0.9rem; color: #94a3b8;">Ramp loading into covered container; front wheel locked in steel chocks and dual-belted with synthetic ratchet straps.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); padding: 30px 20px; border-radius: 12px; border-top: 3px solid #f59e0b;">
          <div style="font-size: 1.8rem; font-weight: 800; color: #f59e0b; margin-bottom: 10px;">05</div>
          <h3 style="font-size: 1.15rem; color: #ffffff; margin-bottom: 10px;">GPS Tracking & Transit Monitoring</h3>
          <p style="font-size: 0.9rem; color: #94a3b8;">Container truck dispatched with 24/7 GPS tracking; regular transit status updates provided via WhatsApp.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); padding: 30px 20px; border-radius: 12px; border-top: 3px solid #f59e0b;">
          <div style="font-size: 1.8rem; font-weight: 800; color: #f59e0b; margin-bottom: 10px;">06</div>
          <h3 style="font-size: 1.15rem; color: #ffffff; margin-bottom: 10px;">Doorstep Unpacking & Verification</h3>
          <p style="font-size: 0.9rem; color: #94a3b8;">Vehicle unboxed at destination, inspected against original pre-check log, and handed over with final sign-off.</p>
        </div>

      </div>

    </div>
  </section>

  <!-- 7. Strategic Internal Navigation Link Grid -->
  <section style="padding: 50px 0; background: #0f172a; border-top: 1px solid rgba(255,255,255,0.05);">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
      
      <h3 style="font-size: 1.4rem; color: #ffffff; margin-bottom: 20px; font-weight: 700; text-align: center;">
        Explore Related Relocation Guides & Cost Calculators
      </h3>

      <div style="display: flex; gap: 15px; flex-wrap: wrap; justify-content: center; font-size: 0.9rem;">
        <a href="<?php echo SITE_URL; ?>/packers-and-movers-in-ranchi" title="Packers and Movers Ranchi" style="color: #cbd5e1; background: rgba(255,255,255,0.05); padding: 8px 16px; border-radius: 20px; text-decoration: none; border: 1px solid rgba(255,255,255,0.1);">Packers and Movers Ranchi</a>
        <a href="<?php echo SITE_URL; ?>/packers-and-movers-in-patna" title="Packers and Movers Patna" style="color: #cbd5e1; background: rgba(255,255,255,0.05); padding: 8px 16px; border-radius: 20px; text-decoration: none; border: 1px solid rgba(255,255,255,0.1);">Packers and Movers Patna</a>
        <a href="<?php echo SITE_URL; ?>/bike-transportation-cost" title="Bike Transportation Cost Guide" style="color: #cbd5e1; background: rgba(255,255,255,0.05); padding: 8px 16px; border-radius: 20px; text-decoration: none; border: 1px solid rgba(255,255,255,0.1);">Bike Transportation Cost</a>
        <a href="<?php echo SITE_URL; ?>/bike-transport-electric" title="Electric Bike Transport Guide" style="color: #cbd5e1; background: rgba(255,255,255,0.05); padding: 8px 16px; border-radius: 20px; text-decoration: none; border: 1px solid rgba(255,255,255,0.1);">Electric Bike Transport</a>
        <a href="<?php echo SITE_URL; ?>/bike-transport-covers" title="Bike Packing & Covers" style="color: #cbd5e1; background: rgba(255,255,255,0.05); padding: 8px 16px; border-radius: 20px; text-decoration: none; border: 1px solid rgba(255,255,255,0.1);">Bike Packing & Covers</a>
      </div>

    </div>
  </section>

  <!-- 8. Interactive 10-Item Structured FAQ Section -->
  <section style="padding: 60px 0; background: #0b132b;">
    <div class="container" style="max-width: 900px; margin: 0 auto; padding: 0 20px;">
      
      <h2 style="font-size: 2rem; color: #ffffff; text-align: center; margin-bottom: 12px; font-weight: 700;">
        Frequently Asked Questions: Bike Transportation Process
      </h2>
      <p style="text-align: center; color: #94a3b8; margin-bottom: 40px;">
        Expert answers regarding inspection checks, packaging layers, trailer lashing, and doorstep delivery.
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
        Ready for a Scratch-Free, Certified Bike Transportation Process?
      </h2>
      <p style="font-size: 1.1rem; color: #cbd5e1; margin-bottom: 30px; line-height: 1.7;">
        Book our 6-stage relocation workflow. 7-layer body wrapping, wheel-chock container lashing, and insured doorstep delivery.
      </p>

      <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap;">
        <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Direct" style="padding: 16px 36px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 800; font-size: 1.05rem; text-decoration: none; box-shadow: 0 6px 20px rgba(225, 29, 72, 0.4);">
          <i class="fas fa-phone-alt" style="margin-right: 10px;"></i> Call Direct: <?php echo SITE_PHONE; ?>
        </a>
        <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20to%20book%20Bike%20Transportation." title="WhatsApp Process Booking" target="_blank" style="padding: 16px 36px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 800; font-size: 1.05rem; text-decoration: none; box-shadow: 0 6px 20px rgba(16, 185, 129, 0.4);">
          <i class="fab fa-whatsapp" style="margin-right: 10px;"></i> Book via WhatsApp
        </a>
      </div>

    </div>
  </section>

</main>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
