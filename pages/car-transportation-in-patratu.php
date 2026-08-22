<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "Car Transportation in Patratu 8409531615";
$page_desc = "Reliable car transportation in Patratu. Shree Ashirwad Packers and Movers offers safe open & enclosed vehicle carriers, transit insurance, and professional doorstep delivery. Call 8409531615.";
$page_keywords = "car transportation in patratu, best car transportation in patratu, affordable car transportation in patratu, packers and movers, packers and movers in ranchi, top car transportation in patratu company, household shifting car transportation in patratu, doorstep car transportation in patratu, verified car transportation in patratu services, shree ashirwad car transportation in patratu";
$canonical_url = "https://shreeashirwadpackersandmovers.com/pages/car-transportation-in-patratu.php";

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
            CAR TRANSPORTATION PATRATU RELOCATION SPECIALISTS
          </span>
          <h1 style="font-size: 2.7rem; font-weight: 800; line-height: 1.2; margin-bottom: 20px; color: #ffffff;">
            Professional <span style="color: #f59e0b;">Car Transportation in Patratu</span>
          </h1>
          <p style="font-size: 1.12rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 25px;">
            Reliable car transportation in Patratu. Shree Ashirwad Packers and Movers offers safe open & enclosed vehicle carriers, transit insurance, and professional doorstep delivery. Call 8409531615.
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
          <h2 style="font-size: 1.4rem; color: #ffffff; margin-bottom: 8px; font-weight: 700; text-align: center;">Get Patratu Shifting Quote</h2>
          <p style="font-size: 0.85rem; color: #94a3b8; text-align: center; margin-bottom: 20px;">Receive transparent cost estimation on WhatsApp in 2 minutes</p>

          <form action="#" method="POST" onsubmit="sendHeroWhatsAppLead(event, this);">
            <div style="margin-bottom: 14px;">
              <input type="text" name="name" class="form-control" placeholder="Your Full Name" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="margin-bottom: 14px;">
              <input type="tel" name="phone" class="form-control" placeholder="10-Digit Phone Number" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 10px; margin-bottom: 14px;">
              <input type="text" name="move_from" class="form-control" value="Patratu" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
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
        Safe &amp; Dependable <span style="color: #f59e0b;">Car Transportation in Patratu</span>
      </h2>
      <p style="font-size: 1.05rem; color: #cbd5e1; margin-bottom: 25px; line-height: 1.8;">
        Moving a personal automobile from Patratu requires specialized vehicle carriers, scratch protection wrapping, and experienced drivers familiar with regional valley roads and interstate highways. Shree Ashirwad Packers and Movers provides professional car carrier services for power plant executives, township residents, and families in Patratu and Ramgarh district. Whether shipping a hatchback, sedan, or heavy SUV, our vehicle transport operations ensure zero added mileage, scratch protection, and door-to-door delivery.
      </p>

      <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 25px; margin: 35px 0;">
        <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 25px; box-shadow: 0 10px 25px rgba(0,0,0,0.3);">
          <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 15px;">
            <i class="fas fa-truck-monster"></i>
          </div>
          <h3 style="font-size: 1.25rem; color: #ffffff; font-weight: 700; margin-bottom: 12px;">Enclosed Hydraulic Car Carriers</h3>
          <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.7; margin: 0;">
            Enclosed car containers offer total protection against rain, road dust, flying gravel, and harsh weather. Equipped with hydraulic loading ramps and solid side walls, enclosed carriers are ideal for luxury sedans, premium SUVs, and long-distance outstation relocations.
          </p>
        </div>

        <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 25px; box-shadow: 0 10px 25px rgba(0,0,0,0.3);">
          <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 15px;">
            <i class="fas fa-truck-moving"></i>
          </div>
          <h3 style="font-size: 1.25rem; color: #ffffff; font-weight: 700; margin-bottom: 12px;">Multi-Car Open Trailers</h3>
          <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.7; margin: 0;">
            Open multi-car transport trailers provide an economical option for family hatchbacks and standard cars. Built with upper and lower deck ramps, wheel locks, and high-tensile safety harnesses, open trailers guarantee safe multi-vehicle highway movement.
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
        Our vehicle transport team enforces step-by-step quality handling from physical inspection to doorstep delivery:
      </p>

      <div style="display: grid; grid-template-columns: 1fr; gap: 18px; margin-bottom: 35px;">
        <div style="background: rgba(23, 42, 84, 0.6); padding: 20px 24px; border-radius: 12px; border-left: 4px solid #f59e0b; display: flex; gap: 20px; align-items: flex-start;">
          <div style="font-size: 1.8rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">01</div>
          <div>
            <h4 style="color: #ffffff; font-size: 1.15rem; margin-bottom: 6px;">Joint Pre-Loading Condition Audit</h4>
            <p style="font-size: 0.92rem; color: #94a3b8; margin: 0; line-height: 1.6;">Our inspection officer inspects your car alongside you in Patratu, documenting odometer reading, existing paint condition, battery status, and fuel levels on an official checklist.</p>
          </div>
        </div>

        <div style="background: rgba(23, 42, 84, 0.6); padding: 20px 24px; border-radius: 12px; border-left: 4px solid #f59e0b; display: flex; gap: 20px; align-items: flex-start;">
          <div style="font-size: 1.8rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">02</div>
          <div>
            <h4 style="color: #ffffff; font-size: 1.15rem; margin-bottom: 6px;">Body &amp; Bumper Protection</h4>
            <p style="font-size: 0.92rem; color: #94a3b8; margin: 0; line-height: 1.6;">Vulnerable car parts including front bumpers, side view mirrors, door handles, and steering wheel are wrapped with protective film to prevent grease or scratch marks.</p>
          </div>
        </div>

        <div style="background: rgba(23, 42, 84, 0.6); padding: 20px 24px; border-radius: 12px; border-left: 4px solid #f59e0b; display: flex; gap: 20px; align-items: flex-start;">
          <div style="font-size: 1.8rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">03</div>
          <div>
            <h4 style="color: #ffffff; font-size: 1.15rem; margin-bottom: 6px;">Ramp Loading &amp; Wheel Clamping</h4>
            <p style="font-size: 0.92rem; color: #94a3b8; margin: 0; line-height: 1.6;">The car is driven onto smooth hydraulic carrier ramps. Once inside, heavy-duty wheel chocks and nylon tie-down straps anchor all four tires securely to the trailer floor deck.</p>
          </div>
        </div>

        <div style="background: rgba(23, 42, 84, 0.6); padding: 20px 24px; border-radius: 12px; border-left: 4px solid #f59e0b; display: flex; gap: 20px; align-items: flex-start;">
          <div style="font-size: 1.8rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">04</div>
          <div>
            <h4 style="color: #ffffff; font-size: 1.15rem; margin-bottom: 6px;">Real-Time GPS Tracking</h4>
            <p style="font-size: 0.92rem; color: #94a3b8; margin: 0; line-height: 1.6;">Our vehicle containers feature active GPS tracking systems, enabling live position updates throughout highway movement from Patratu to destination points.</p>
          </div>
        </div>

        <div style="background: rgba(23, 42, 84, 0.6); padding: 20px 24px; border-radius: 12px; border-left: 4px solid #f59e0b; display: flex; gap: 20px; align-items: flex-start;">
          <div style="font-size: 1.8rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">05</div>
          <div>
            <h4 style="color: #ffffff; font-size: 1.15rem; margin-bottom: 6px;">Destination Delivery &amp; Inspection</h4>
            <p style="font-size: 0.92rem; color: #94a3b8; margin: 0; line-height: 1.6;">At the destination location, the car is ramp-unloaded and inspected against the initial condition checklist before handover.</p>
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
        To protect your automobile asset against unforeseen highway risks, we provide full-value transit insurance options and compliant paperwork:
      </p>

      <div style="background: #101c40; border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 28px;">
        <ul style="list-style: none; padding: 0; margin: 0; display: grid; grid-template-columns: 1fr 1fr; gap: 16px; color: #cbd5e1; font-size: 0.95rem;">
          <li><i class="fas fa-file-invoice-dollar" style="color: #f59e0b; margin-right: 10px;"></i> <strong>GST Consignment Invoice:</strong> Itemized invoice valid for corporate employee transfer claims.</li>
          <li><i class="fas fa-shield-alt" style="color: #f59e0b; margin-right: 10px;"></i> <strong>Transit Insurance Coverage:</strong> Full market-value coverage protecting against road accidents or damage.</li>
          <li><i class="fas fa-truck-loading" style="color: #f59e0b; margin-right: 10px;"></i> <strong>Lorry Receipt (LR Copy):</strong> Official stamped consignment note specifying vehicle identity and route.</li>
          <li><i class="fas fa-clipboard-check" style="color: #f59e0b; margin-right: 10px;"></i> <strong>Condition Check Sheet:</strong> Dual-signed checklist confirming vehicle state at loading.</li>
        </ul>
      </div>
    </div>
  </section>

  <!-- Section 5: Rate Determinants & Local Patratu Context -->
  <section style="padding: 70px 0; background: #070d1e; color: #ffffff;">
    <div class="container" style="max-width: 950px; margin: 0 auto;">
      <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Pricing &amp; Regional Context</span>
      <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin: 10px 0 20px 0;">
        Car Shipping Rates &amp; Logistics Context in Patratu
      </h2>
      
      <p style="font-size: 1.05rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 20px;">
        Patratu is a major industrial thermal township and scenic valley region in Ramgarh district, connected directly to Ranchi via the Ranchi-Patratu 4-lane highway corridor. When booking car transportation from Patratu, vehicle shipping rates depend on transparent logistics parameters:
      </p>

      <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 20px; margin-top: 25px;">
        <div style="background: #101c40; padding: 22px; border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #f59e0b; font-size: 1.1rem; margin-bottom: 8px;">Vehicle Type &amp; Dimensions</h4>
          <p style="font-size: 0.9rem; color: #94a3b8; margin: 0; line-height: 1.6;">Hatchbacks require less carrier length than large SUVs or luxury sedans, influencing deck space pricing.</p>
        </div>

        <div style="background: #101c40; padding: 22px; border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #f59e0b; font-size: 1.1rem; margin-bottom: 8px;">Carrier Container Type</h4>
          <p style="font-size: 0.9rem; color: #94a3b8; margin: 0; line-height: 1.6;">Enclosed covered car carriers carry higher operational protection value than open trailer transports.</p>
        </div>

        <div style="background: #101c40; padding: 22px; border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #f59e0b; font-size: 1.1rem; margin-bottom: 8px;">Total Distance &amp; Tolls</h4>
          <p style="font-size: 0.9rem; color: #94a3b8; margin: 0; line-height: 1.6;">Total highway distance from Patratu to destination city along with applicable highway toll fees.</p>
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
          Car Transportation FAQs for <span style="color: #f59e0b;">Patratu</span>
        </h2>
      </div>

      <div style="display: flex; flex-direction: column; gap: 16px;">
        <div style="background: #101c40; padding: 22px 26px; border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Q1: How far in advance should I book car transport in Patratu?</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.7;">
            We recommend booking 3 to 4 days ahead to schedule doorstep vehicle inspection and reserve space on specialized car carriers.
          </p>
        </div>

        <div style="background: #101c40; padding: 22px 26px; border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Q2: What paperwork is required for vehicle shipping from Patratu?</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.7;">
            Required documents include a copy of the vehicle Registration Certificate (RC), active insurance policy, PUC certificate, and photo ID proof of the owner.
          </p>
        </div>

        <div style="background: #101c40; padding: 22px 26px; border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Q3: How are cars secured inside the carrier during transport?</h3>
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
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Q5: Can I track my vehicle carrier during transit from Patratu?</h3>
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
          <h4 style="color: #ffffff; font-size: 1.1rem; margin-bottom: 8px;">Ramgarh District Hub</h4>
          <p style="font-size: 0.88rem; color: #94a3b8; margin-bottom: 12px;">Full household, office &amp; vehicle moving services across Ramgarh district.</p>
          <a href="<?php echo SITE_URL; ?>packers-and-movers-in-ramgarh" title="Packers and Movers in Ramgarh →" style="color: #f59e0b; text-decoration: underline; font-weight: 600; font-size: 0.9rem;">
            Packers and Movers Ramgarh →
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
        Need Professional <span style="color: #f59e0b;">Car Transportation in Patratu</span>?
      </h2>
      <p style="font-size: 1.05rem; color: #cbd5e1; max-width: 750px; margin: 0 auto 30px auto; line-height: 1.7;">
        Call our helpline at <?php echo SITE_PHONE; ?> or connect via WhatsApp for transparent vehicle transport quotes and doorstep pickup scheduling.
      </p>

      <div style="display: flex; gap: 15px; justify-content: center; flex-wrap: wrap;">
        <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Now" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 30px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
          <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call Now: <?php echo SITE_PHONE; ?>
        </a>
        <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20a%20car%20transportation%20quote%20for%20Patratu." title="Chat on WhatsApp" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 30px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
          <i class="fab fa-whatsapp" style="margin-right: 8px;"></i> Chat on WhatsApp
        </a>
      </div>
    </div>
  </section>

</main>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>

