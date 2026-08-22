<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "Car Transportation in Mihijam 8409531615";
$page_desc = "Reliable car transportation in Mihijam. Shree Ashirwad Packers and Movers offers safe open & enclosed vehicle carriers, transit insurance, and professional doorstep delivery. Call 8409531615.";
$page_keywords = "car transportation in mihijam, best car transportation in mihijam, affordable car transportation in mihijam, packers and movers, packers and movers in ranchi, top car transportation in mihijam company, household shifting car transportation in mihijam, doorstep car transportation in mihijam, verified car transportation in mihijam services, shree ashirwad car transportation in mihijam";
$canonical_url = "https://shreeashirwadpackersandmovers.com/pages/car-transportation-in-mihijam.php";

require_once __DIR__ . '/../includes/header.php';
?>

<main class="site-main">

  <!-- Visual Breadcrumb Navigation Bar -->
  <div class="breadcrumb-wrapper">
    <div class="container">
      <div class="breadcrumb-list">
        <span class="breadcrumb-item"><a href="<?php echo SITE_URL; ?>" title="Home">Home</a></span>
        <span class="breadcrumb-separator">/</span>
        <span class="breadcrumb-item active"><?php echo htmlspecialchars($page_title); ?></span>
      </div>
    </div>
  </div>

  <!-- Hero Section with Lead Form -->
  <section class="hero-section" style="background: linear-gradient(135deg, #0b132b 0%, #1c2541 100%); padding: 60px 0; color: #ffffff;">
    <div class="container">
      <div class="hero-grid" style="display: grid; grid-template-columns: 1.2fr 0.8fr; gap: 40px; align-items: center;">
        
        <!-- Hero Text Column -->
        <div class="hero-text">
          <span class="section-tag" style="background: rgba(245, 158, 11, 0.15); color: #f59e0b; border: 1px solid rgba(245, 158, 11, 0.4); padding: 6px 16px; border-radius: 20px; font-size: 0.85rem; font-weight: 700; text-transform: uppercase; display: inline-block; margin-bottom: 15px;">
            CAR TRANSPORTATION MIHIJAM RELOCATION SPECIALISTS
          </span>
          <h1 style="font-size: 2.7rem; font-weight: 800; line-height: 1.2; margin-bottom: 20px; color: #ffffff;">
            Professional <span style="color: #f59e0b;">Car Transportation in Mihijam</span>
          </h1>
          <p style="font-size: 1.12rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 25px;">
            Reliable car transportation in Mihijam. Shree Ashirwad Packers and Movers offers safe open & enclosed vehicle carriers, transit insurance, and professional doorstep delivery. Call 8409531615.
          </p>

          <div style="display: flex; gap: 15px; flex-wrap: wrap; margin-bottom: 30px;">
            <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Now" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
              <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call Now: <?php echo SITE_PHONE; ?>
            </a>
            <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20a%20shifting%20quote." title="Chat on WhatsApp" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
              <i class="fab fa-whatsapp" style="margin-right: 8px;"></i> Chat on WhatsApp
            </a>
          </div>

          <div style="display: flex; gap: 20px; font-size: 0.9rem; color: #94a3b8;">
            <span><strong style="color: #f59e0b;">100% Insured</strong> Shifting</span>
            <span><strong style="color: #f59e0b;">7-Layer</strong> Bubble Packaging</span>
            <span><strong style="color: #f59e0b;">Door-to-Door</strong> Delivery</span>
          </div>
        </div>

        <!-- Hero Lead Form Column -->
        <div class="hero-form-card" style="background: rgba(255, 255, 255, 0.05); backdrop-filter: blur(10px); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 16px; padding: 30px; box-shadow: 0 15px 35px rgba(0,0,0,0.4);">
          <h2 style="font-size: 1.4rem; color: #ffffff; margin-bottom: 8px; font-weight: 700; text-align: center;">Get Mihijam Shifting Quote</h2>
          <p style="font-size: 0.85rem; color: #94a3b8; text-align: center; margin-bottom: 20px;">Receive transparent cost estimation on WhatsApp in 2 minutes</p>

          <form action="#" method="POST" onsubmit="sendHeroWhatsAppLead(event, this);">
            <div style="margin-bottom: 14px;">
              <input type="text" name="name" class="form-control" placeholder="Your Full Name" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="margin-bottom: 14px;">
              <input type="tel" name="phone" class="form-control" placeholder="10-Digit Phone Number" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 10px; margin-bottom: 14px;">
              <input type="text" name="move_from" class="form-control" value="Mihijam" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
              <input type="text" name="move_to" class="form-control" placeholder="Moving To (City/Area)" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <button type="submit" style="width: 100%; padding: 14px; background: linear-gradient(135deg, #d32f2f 0%, #f59e0b 100%); color: #ffffff; border: none; border-radius: 50px; font-weight: 700; font-size: 1rem; cursor: pointer;">
              Get Instant Estimate Now &rarr;
            </button>
          </form>
        </div>

      </div>
    </div>
  </section>

  <!-- Section 2: Overview & Car Carrier Options -->
  <section style="padding: 70px 0; background: #0b132b; color: #e2e8f0; line-height: 1.8;">
    <div class="container" style="max-width: 950px; margin: 0 auto;">
      <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Specialized Vehicle Logistics</span>
      <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin: 10px 0 20px 0;">
        Reliable <span style="color: #f59e0b;">Car Transportation in Mihijam</span>
      </h2>
      <p style="font-size: 1.05rem; color: #cbd5e1; margin-bottom: 25px; line-height: 1.8;">
        Transporting a vehicle from Mihijam across Jharkhand or to neighboring states requires careful highway planning, protective body wrapping, and experienced car carrier drivers. Shree Ashirwad Packers and Movers provides dedicated automobile moving services for car owners, railway township residents, and families in Mihijam and Jamtara district. Whether moving a hatchback, sedan, or heavy SUV, our vehicle logistics setup ensures zero mileage addition, scratch protection, and door-to-door delivery.
      </p>

      <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 25px; margin: 35px 0;">
        <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 25px; box-shadow: 0 10px 25px rgba(0,0,0,0.3);">
          <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 15px;">
            <i class="fas fa-truck-monster"></i>
          </div>
          <h3 style="font-size: 1.25rem; color: #ffffff; font-weight: 700; margin-bottom: 12px;">Enclosed Hydraulic Car Carriers</h3>
          <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.7; margin: 0;">
            Enclosed car containers offer complete weather and gravel protection. Designed with hydraulic loading ramps and covered sidewalls, enclosed carriers safeguard luxury sedans, premium SUVs, and long-distance intercity moves from rain, dust, and road scratches.
          </p>
        </div>

        <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 25px; box-shadow: 0 10px 25px rgba(0,0,0,0.3);">
          <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 15px;">
            <i class="fas fa-truck-moving"></i>
          </div>
          <h3 style="font-size: 1.25rem; color: #ffffff; font-weight: 700; margin-bottom: 12px;">Multi-Car Open Trailers</h3>
          <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.7; margin: 0;">
            Open multi-vehicle carriers are an economical choice for regular family cars and hatchbacks. Built with upper and lower decks, wheel lock chocks, and high-tensile safety belts, open trailers provide safe multi-vehicle highway transport.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 3: 5-Step Vehicle Inspection & Safety Protocol -->
  <section style="padding: 70px 0; background: #070d1e; color: #ffffff;">
    <div class="container" style="max-width: 950px; margin: 0 auto;">
      <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Safety Protocol</span>
      <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin: 10px 0 20px 0;">
        5-Step Vehicle Handling &amp; Loading Process
      </h2>
      <p style="font-size: 1.05rem; color: #cbd5e1; margin-bottom: 30px; line-height: 1.8;">
        Our vehicle transport team adheres to standard operating procedures from initial inspection to final doorstep handover:
      </p>

      <div style="display: grid; grid-template-columns: 1fr; gap: 18px; margin-bottom: 35px;">
        <div style="background: rgba(23, 42, 84, 0.6); padding: 20px 24px; border-radius: 12px; border-left: 4px solid #f59e0b; display: flex; gap: 20px; align-items: flex-start;">
          <div style="font-size: 1.8rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">01</div>
          <div>
            <h4 style="color: #ffffff; font-size: 1.15rem; margin-bottom: 6px;">Joint Pre-Loading Audit</h4>
            <p style="font-size: 0.92rem; color: #94a3b8; margin: 0; line-height: 1.6;">Our officer conducts a joint condition inspection of the car in Mihijam, recording odometer readings, existing body paint condition, battery status, and fuel levels on an official checklist.</p>
          </div>
        </div>

        <div style="background: rgba(23, 42, 84, 0.6); padding: 20px 24px; border-radius: 12px; border-left: 4px solid #f59e0b; display: flex; gap: 20px; align-items: flex-start;">
          <div style="font-size: 1.8rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">02</div>
          <div>
            <h4 style="color: #ffffff; font-size: 1.15rem; margin-bottom: 6px;">Bumper Wrap &amp; Surface Protection</h4>
            <p style="font-size: 0.92rem; color: #94a3b8; margin: 0; line-height: 1.6;">Front bumpers, side mirrors, door handles, and interior steering components receive protective covers to eliminate grease stains or surface scuffs.</p>
          </div>
        </div>

        <div style="background: rgba(23, 42, 84, 0.6); padding: 20px 24px; border-radius: 12px; border-left: 4px solid #f59e0b; display: flex; gap: 20px; align-items: flex-start;">
          <div style="font-size: 1.8rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">03</div>
          <div>
            <h4 style="color: #ffffff; font-size: 1.15rem; margin-bottom: 6px;">Ramp Loading &amp; Deck Clamping</h4>
            <p style="font-size: 0.92rem; color: #94a3b8; margin: 0; line-height: 1.6;">The car is driven smoothly onto hydraulic carrier ramps. Safety wheel blocks and nylon tie-down straps anchor all four tires securely to the trailer floor deck.</p>
          </div>
        </div>

        <div style="background: rgba(23, 42, 84, 0.6); padding: 20px 24px; border-radius: 12px; border-left: 4px solid #f59e0b; display: flex; gap: 20px; align-items: flex-start;">
          <div style="font-size: 1.8rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">04</div>
          <div>
            <h4 style="color: #ffffff; font-size: 1.15rem; margin-bottom: 6px;">Real-Time GPS Tracking</h4>
            <p style="font-size: 0.92rem; color: #94a3b8; margin: 0; line-height: 1.6;">Our vehicle containers feature active GPS tracking systems, allowing live progress updates to car owners throughout transit.</p>
          </div>
        </div>

        <div style="background: rgba(23, 42, 84, 0.6); padding: 20px 24px; border-radius: 12px; border-left: 4px solid #f59e0b; display: flex; gap: 20px; align-items: flex-start;">
          <div style="font-size: 1.8rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">05</div>
          <div>
            <h4 style="color: #ffffff; font-size: 1.15rem; margin-bottom: 6px;">Destination Delivery &amp; Inspection</h4>
            <p style="font-size: 0.92rem; color: #94a3b8; margin: 0; line-height: 1.6;">Upon arrival at the destination address, the vehicle is unloaded using hydraulic ramps and inspected against the initial condition checklist before handover.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 4: Transit Insurance & Claim Protection -->
  <section style="padding: 70px 0; background: #0b132b; color: #ffffff;">
    <div class="container" style="max-width: 950px; margin: 0 auto;">
      <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Financial Safety</span>
      <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin: 10px 0 20px 0;">
        Transit Insurance &amp; Claim Compliance
      </h2>
      <p style="font-size: 1.05rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 25px;">
        To protect your automobile against financial risks during highway transit, we provide complete transit documentation and insurance options:
      </p>

      <div style="background: #101c40; border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 28px;">
        <ul style="list-style: none; padding: 0; margin: 0; display: grid; grid-template-columns: 1fr 1fr; gap: 16px; color: #cbd5e1; font-size: 0.95rem;">
          <li><i class="fas fa-file-invoice-dollar" style="color: #f59e0b; margin-right: 10px;"></i> <strong>GST Consignment Invoice:</strong> Itemized invoice valid for corporate employee transfer claims.</li>
          <li><i class="fas fa-shield-alt" style="color: #f59e0b; margin-right: 10px;"></i> <strong>Transit Insurance Coverage:</strong> Full-value coverage protecting against road accidents or hazards.</li>
          <li><i class="fas fa-truck-loading" style="color: #f59e0b; margin-right: 10px;"></i> <strong>Lorry Receipt (LR Copy):</strong> Official stamped consignment note specifying vehicle identity and route.</li>
          <li><i class="fas fa-clipboard-check" style="color: #f59e0b; margin-right: 10px;"></i> <strong>Condition Check Sheet:</strong> Dual-signed checklist confirming vehicle state at loading.</li>
        </ul>
      </div>
    </div>
  </section>

  <!-- Section 5: Pricing Determinants & Local Mihijam Context -->
  <section style="padding: 70px 0; background: #070d1e; color: #ffffff;">
    <div class="container" style="max-width: 950px; margin: 0 auto;">
      <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Pricing &amp; Regional Logistics</span>
      <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin: 10px 0 20px 0;">
        Car Shipping Rates &amp; Logistics Context in Mihijam
      </h2>
      
      <p style="font-size: 1.05rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 20px;">
        Mihijam is a border town in Jamtara district situated adjacent to Chittaranjan and connected to Grand Trunk Road / NH-19 interstate corridors. When booking car transportation from Mihijam, vehicle moving rates depend on standard operational factors:
      </p>

      <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 20px; margin-top: 25px;">
        <div style="background: #101c40; padding: 22px; border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #f59e0b; font-size: 1.1rem; margin-bottom: 8px;">Vehicle Category &amp; Dimensions</h4>
          <p style="font-size: 0.9rem; color: #94a3b8; margin: 0; line-height: 1.6;">Hatchbacks consume less carrier space than large SUVs or luxury sedans, influencing deck space pricing.</p>
        </div>

        <div style="background: #101c40; padding: 22px; border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #f59e0b; font-size: 1.1rem; margin-bottom: 8px;">Carrier Type Selection</h4>
          <p style="font-size: 0.9rem; color: #94a3b8; margin: 0; line-height: 1.6;">Enclosed covered car carriers carry higher operational protection value than open trailer transports.</p>
        </div>

        <div style="background: #101c40; padding: 22px; border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #f59e0b; font-size: 1.1rem; margin-bottom: 8px;">Transit Distance &amp; Tolls</h4>
          <p style="font-size: 0.9rem; color: #94a3b8; margin: 0; line-height: 1.6;">Total highway distance from Mihijam to destination city along with applicable highway toll fees.</p>
        </div>

        <div style="background: #101c40; padding: 22px; border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #f59e0b; font-size: 1.1rem; margin-bottom: 8px;">Insurance Policy Premium</h4>
          <p style="font-size: 0.9rem; color: #94a3b8; margin: 0; line-height: 1.6;">Declared market valuation of the car determines the transit insurance premium cover.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 6: Frequently Asked Questions (5 Vehicle FAQs) -->
  <section style="padding: 70px 0; background: #0b132b; color: #ffffff;">
    <div class="container" style="max-width: 950px; margin: 0 auto;">
      <div class="section-header text-center" style="margin-bottom: 45px;">
        <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Helpful Information</span>
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin-top: 10px;">
          Car Transportation FAQs for <span style="color: #f59e0b;">Mihijam</span>
        </h2>
      </div>

      <div style="display: flex; flex-direction: column; gap: 16px;">
        <div style="background: #101c40; padding: 22px 26px; border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Q1: How advance should I book car transport in Mihijam?</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.7;">
            We recommend booking 3 to 4 days ahead to schedule doorstep car inspection and reserve carrier space.
          </p>
        </div>

        <div style="background: #101c40; padding: 22px 26px; border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Q2: What paperwork is required for vehicle shipping from Mihijam?</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.7;">
            Required documents include a copy of the vehicle Registration Certificate (RC), active insurance policy, PUC certificate, and photo ID proof of the owner.
          </p>
        </div>

        <div style="background: #101c40; padding: 22px 26px; border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Q3: How are cars protected during long-distance highway travel?</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.7;">
            Cars are driven onto hydraulic ramps, secured with wheel chocks and nylon harnesses, and wrapped at key contact points to prevent surface damage.
          </p>
        </div>

        <div style="background: #101c40; padding: 22px 26px; border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Q4: Is transit insurance included for vehicle transport?</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.7;">
            Yes, full market-value transit insurance options are provided along with stamped consignment bills and Lorry Receipts (LR).
          </p>
        </div>

        <div style="background: #101c40; padding: 22px 26px; border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Q5: Can I track my vehicle carrier during transit from Mihijam?</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.7;">
            Yes, all main long-distance car carriers are equipped with active GPS tracking systems for live position tracking.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 7: Contextual Internal Links Grid (Verified Existing URLs Only) -->
  <section style="padding: 60px 0; background: #070d1e; color: #ffffff;">
    <div class="container" style="max-width: 950px; margin: 0 auto;">
      <div style="text-align: center; margin-bottom: 35px;">
        <span style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Regional Logistics Network</span>
        <h2 style="font-size: 2rem; font-weight: 800; color: #ffffff; margin-top: 8px;">
          Related Relocation &amp; Shifting Hubs
        </h2>
      </div>

      <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px;">
        <div style="background: #101c40; padding: 20px; border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #ffffff; font-size: 1.1rem; margin-bottom: 8px;">Dhanbad Logistics Hub</h4>
          <p style="font-size: 0.88rem; color: #94a3b8; margin-bottom: 12px;">Full household, office &amp; vehicle moving services across coalbelt district.</p>
          <a href="<?php echo SITE_URL; ?>packers-and-movers-in-dhanbad" title="Packers and Movers in Dhanbad →" style="color: #f59e0b; text-decoration: underline; font-weight: 600; font-size: 0.9rem;">
            Packers and Movers Dhanbad →
          </a>
        </div>

        <div style="background: #101c40; padding: 20px; border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #ffffff; font-size: 1.1rem; margin-bottom: 8px;">Ranchi Capital Hub</h4>
          <p style="font-size: 0.88rem; color: #94a3b8; margin-bottom: 12px;">Statewide relocation coordination, container truck dispatch, and corporate billing.</p>
          <a href="<?php echo SITE_URL; ?>packers-and-movers-in-ranchi" title="Packers and Movers in Ranchi →" style="color: #f59e0b; text-decoration: underline; font-weight: 600; font-size: 0.9rem;">
            Packers and Movers Ranchi →
          </a>
        </div>

        <div style="background: #101c40; padding: 20px; border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #ffffff; font-size: 1.1rem; margin-bottom: 8px;">Contact Customer Support</h4>
          <p style="font-size: 0.88rem; color: #94a3b8; margin-bottom: 12px;">Request pre-move vehicle surveys and instant WhatsApp shifting estimates.</p>
          <a href="<?php echo SITE_URL; ?>contact" title="Contact Us →" style="color: #f59e0b; text-decoration: underline; font-weight: 600; font-size: 0.9rem;">
            Contact Shifting Team →
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 8: Final Call To Action Banner -->
  <section style="padding: 60px 0; background: linear-gradient(135deg, #172a54 0%, #0b132b 100%); border-top: 1.5px solid rgba(245, 158, 11, 0.4); color: #ffffff;">
    <div class="container" style="max-width: 900px; margin: 0 auto; text-align: center;">
      <span class="section-tag" style="background: rgba(245, 158, 11, 0.2); color: #f59e0b; padding: 6px 16px; border-radius: 20px; font-size: 0.85rem; font-weight: 700; text-transform: uppercase;">
        Book Safe Car Shifting
      </span>
      <h2 style="font-size: 2.2rem; font-weight: 800; margin: 15px 0; color: #ffffff;">
        Need Professional <span style="color: #f59e0b;">Car Transportation in Mihijam</span>?
      </h2>
      <p style="font-size: 1.05rem; color: #cbd5e1; max-width: 750px; margin: 0 auto 30px auto; line-height: 1.7;">
        Call our helpline at <?php echo SITE_PHONE; ?> or connect via WhatsApp for transparent vehicle transport quotes and doorstep pickup scheduling.
      </p>

      <div style="display: flex; gap: 15px; justify-content: center; flex-wrap: wrap;">
        <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Now" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 30px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
          <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call Now: <?php echo SITE_PHONE; ?>
        </a>
        <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20a%20car%20transportation%20quote%20for%20Mihijam." title="Chat on WhatsApp" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 30px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
          <i class="fab fa-whatsapp" style="margin-right: 8px;"></i> Chat on WhatsApp
        </a>
      </div>
    </div>
  </section>

</main>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>

