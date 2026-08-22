<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "Car Transportation in Khunti 8409531615";
$page_desc = "Reliable car transportation in Khunti. Shree Ashirwad Packers and Movers offers safe open & enclosed vehicle carriers, transit insurance, and professional doorstep delivery. Call 8409531615.";
$page_keywords = "car transportation in khunti, best car transportation in khunti, affordable car transportation in khunti, packers and movers, packers and movers in ranchi, top car transportation in khunti company, household shifting car transportation in khunti, doorstep car transportation in khunti, verified car transportation in khunti services, shree ashirwad car transportation in khunti";
$canonical_url = "https://shreeashirwadpackersandmovers.com/pages/car-transportation-in-khunti.php";

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
            CAR TRANSPORTATION KHUNTI RELOCATION SPECIALISTS
          </span>
          <h1 style="font-size: 2.7rem; font-weight: 800; line-height: 1.2; margin-bottom: 20px; color: #ffffff;">
            Professional <span style="color: #f59e0b;">Car Transportation in Khunti</span>
          </h1>
          <p style="font-size: 1.12rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 25px;">
            Reliable car transportation in Khunti. Shree Ashirwad Packers and Movers offers safe open & enclosed vehicle carriers, transit insurance, and professional doorstep delivery. Call 8409531615.
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
          <h2 style="font-size: 1.4rem; color: #ffffff; margin-bottom: 8px; font-weight: 700; text-align: center;">Get Khunti Shifting Quote</h2>
          <p style="font-size: 0.85rem; color: #94a3b8; text-align: center; margin-bottom: 20px;">Receive transparent cost estimation on WhatsApp in 2 minutes</p>

          <form action="#" method="POST" onsubmit="sendHeroWhatsAppLead(event, this);">
            <div style="margin-bottom: 14px;">
              <input type="text" name="name" class="form-control" placeholder="Your Full Name" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="margin-bottom: 14px;">
              <input type="tel" name="phone" class="form-control" placeholder="10-Digit Phone Number" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 10px; margin-bottom: 14px;">
              <input type="text" name="move_from" class="form-control" value="Khunti" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
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
        Safe &amp; Dependable <span style="color: #f59e0b;">Car Transportation in Khunti</span>
      </h2>
      <p style="font-size: 1.05rem; color: #cbd5e1; margin-bottom: 25px; line-height: 1.8;">
        Relocating a personal automobile from Khunti to another city requires professional car carriers, experienced long-distance drivers, and complete protective wrapping. Shree Ashirwad Packers and Movers offers reliable vehicle transport services for car owners, administrative personnel, and families across Khunti district. Whether shipping a compact hatchback, sedan, or heavy SUV, our vehicle logistics setup guarantees zero additional mileage, scratch protection, and door-to-door transit reliability.
      </p>

      <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 25px; margin: 35px 0;">
        <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 25px; box-shadow: 0 10px 25px rgba(0,0,0,0.3);">
          <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 15px;">
            <i class="fas fa-truck-monster"></i>
          </div>
          <h3 style="font-size: 1.25rem; color: #ffffff; font-weight: 700; margin-bottom: 12px;">Enclosed Hydraulic Car Carriers</h3>
          <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.7; margin: 0;">
            Enclosed car containers provide 100% protection against road dust, rain, flying gravel, and harsh weather conditions. Equipped with hydraulic ramps and covered side walls, enclosed trailers are recommended for luxury sedans, premium SUVs, and outstation relocations.
          </p>
        </div>

        <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 25px; box-shadow: 0 10px 25px rgba(0,0,0,0.3);">
          <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 15px;">
            <i class="fas fa-truck-moving"></i>
          </div>
          <h3 style="font-size: 1.25rem; color: #ffffff; font-weight: 700; margin-bottom: 12px;">Multi-Car Open Trailers</h3>
          <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.7; margin: 0;">
            Open multi-vehicle trailers offer a budget-friendly option for regular hatchbacks and family cars. Featuring upper and lower decks with safety wheel locks and heavy nylon belts, open trailers ensure safe multi-vehicle highway movement.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 3: 5-Step Inspection & Loading Safety Protocol -->
  <section style="padding: 70px 0; background: #070d1e; color: #ffffff;">
    <div class="container" style="max-width: 950px; margin: 0 auto;">
      <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Safety Protocol</span>
      <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin: 10px 0 20px 0;">
        5-Step Vehicle Handling &amp; Loading Process
      </h2>
      <p style="font-size: 1.05rem; color: #cbd5e1; margin-bottom: 30px; line-height: 1.8;">
        Our vehicle moving team enforces step-by-step handling protocols to ensure complete safety and accountability throughout car shipping from Khunti:
      </p>

      <div style="display: grid; grid-template-columns: 1fr; gap: 18px; margin-bottom: 35px;">
        <div style="background: rgba(23, 42, 84, 0.6); padding: 20px 24px; border-radius: 12px; border-left: 4px solid #f59e0b; display: flex; gap: 20px; align-items: flex-start;">
          <div style="font-size: 1.8rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">01</div>
          <div>
            <h4 style="color: #ffffff; font-size: 1.15rem; margin-bottom: 6px;">Joint Pre-Loading Condition Audit</h4>
            <p style="font-size: 0.92rem; color: #94a3b8; margin: 0; line-height: 1.6;">Our officer conducts a thorough physical inspection of your car in Khunti, documenting odometer readings, existing paint condition, battery status, and fuel levels on an official checklist.</p>
          </div>
        </div>

        <div style="background: rgba(23, 42, 84, 0.6); padding: 20px 24px; border-radius: 12px; border-left: 4px solid #f59e0b; display: flex; gap: 20px; align-items: flex-start;">
          <div style="font-size: 1.8rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">02</div>
          <div>
            <h4 style="color: #ffffff; font-size: 1.15rem; margin-bottom: 6px;">Body Wrap &amp; Mirror Protection</h4>
            <p style="font-size: 0.92rem; color: #94a3b8; margin: 0; line-height: 1.6;">Vulnerable car parts including front bumpers, side view mirrors, door handles, and steering wheel are wrapped with protective film to prevent grease or scratch marks.</p>
          </div>
        </div>

        <div style="background: rgba(23, 42, 84, 0.6); padding: 20px 24px; border-radius: 12px; border-left: 4px solid #f59e0b; display: flex; gap: 20px; align-items: flex-start;">
          <div style="font-size: 1.8rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">03</div>
          <div>
            <h4 style="color: #ffffff; font-size: 1.15rem; margin-bottom: 6px;">Hydraulic Ramp Drive &amp; Wheel Clamping</h4>
            <p style="font-size: 0.92rem; color: #94a3b8; margin: 0; line-height: 1.6;">The car is driven onto smooth hydraulic carrier ramps. Once inside, heavy-duty wheel chocks and nylon tie-down straps secure all four wheels to the trailer floor deck.</p>
          </div>
        </div>

        <div style="background: rgba(23, 42, 84, 0.6); padding: 20px 24px; border-radius: 12px; border-left: 4px solid #f59e0b; display: flex; gap: 20px; align-items: flex-start;">
          <div style="font-size: 1.8rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">04</div>
          <div>
            <h4 style="color: #ffffff; font-size: 1.15rem; margin-bottom: 6px;">Real-Time GPS Tracking During Transit</h4>
            <p style="font-size: 0.92rem; color: #94a3b8; margin: 0; line-height: 1.6;">Our vehicle containers are monitored via active GPS tracking, enabling movement coordinators to provide live tracking updates to car owners.</p>
          </div>
        </div>

        <div style="background: rgba(23, 42, 84, 0.6); padding: 20px 24px; border-radius: 12px; border-left: 4px solid #f59e0b; display: flex; gap: 20px; align-items: flex-start;">
          <div style="font-size: 1.8rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">05</div>
          <div>
            <h4 style="color: #ffffff; font-size: 1.15rem; margin-bottom: 6px;">Destination Handover &amp; Inspection</h4>
            <p style="font-size: 0.92rem; color: #94a3b8; margin: 0; line-height: 1.6;">At the destination location, the car is unloaded using hydraulic ramps and inspected against the initial condition checklist before handover.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 4: Transit Insurance & Claim-Ready Paperwork -->
  <section style="padding: 70px 0; background: #0b132b; color: #ffffff;">
    <div class="container" style="max-width: 950px; margin: 0 auto;">
      <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Financial Safety</span>
      <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin: 10px 0 20px 0;">
        Transit Insurance &amp; Claim Compliance
      </h2>
      <p style="font-size: 1.05rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 25px;">
        To protect your automobile against unforeseen highway risks during long-distance movement, we provide full-value transit insurance options and compliant paperwork:
      </p>

      <div style="background: #101c40; border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 28px;">
        <ul style="list-style: none; padding: 0; margin: 0; display: grid; grid-template-columns: 1fr 1fr; gap: 16px; color: #cbd5e1; font-size: 0.95rem;">
          <li><i class="fas fa-file-invoice-dollar" style="color: #f59e0b; margin-right: 10px;"></i> <strong>GST Consignment Bill:</strong> Valid itemized invoice accepted for corporate employee claim reimbursement.</li>
          <li><i class="fas fa-shield-alt" style="color: #f59e0b; margin-right: 10px;"></i> <strong>Transit Insurance Coverage:</strong> Full market-value policy protecting against accident or damage.</li>
          <li><i class="fas fa-truck-loading" style="color: #f59e0b; margin-right: 10px;"></i> <strong>Official Lorry Receipt (LR):</strong> Stamped consignment note detailing vehicle identity and route.</li>
          <li><i class="fas fa-clipboard-check" style="color: #f59e0b; margin-right: 10px;"></i> <strong>Condition Check Form:</strong> Signed pre-loading and post-delivery audit checklist.</li>
        </ul>
      </div>
    </div>
  </section>

  <!-- Section 5: Rate Determinants & Local Khunti Context -->
  <section style="padding: 70px 0; background: #070d1e; color: #ffffff;">
    <div class="container" style="max-width: 950px; margin: 0 auto;">
      <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Pricing &amp; Regional Context</span>
      <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin: 10px 0 20px 0;">
        Car Shipping Rates &amp; Logistics Context in Khunti
      </h2>
      
      <p style="font-size: 1.05rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 20px;">
        Khunti is the district headquarters located south of Ranchi, connected to state capital corridors and interstate highway routes via National Highway 20 (NH-20). When booking car transportation from Khunti, vehicle shipping charges are determined based on objective logistics parameters:
      </p>

      <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 20px; margin-top: 25px;">
        <div style="background: #101c40; padding: 22px; border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #f59e0b; font-size: 1.1rem; margin-bottom: 8px;">Vehicle Category &amp; Size</h4>
          <p style="font-size: 0.9rem; color: #94a3b8; margin: 0; line-height: 1.6;">Hatchbacks require less carrier length than large SUVs or luxury sedans, influencing deck space pricing.</p>
        </div>

        <div style="background: #101c40; padding: 22px; border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #f59e0b; font-size: 1.1rem; margin-bottom: 8px;">Carrier Container Choice</h4>
          <p style="font-size: 0.9rem; color: #94a3b8; margin: 0; line-height: 1.6;">Enclosed covered car carriers carry higher operational protection value than open trailer transports.</p>
        </div>

        <div style="background: #101c40; padding: 22px; border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #f59e0b; font-size: 1.1rem; margin-bottom: 8px;">Total Distance &amp; Tolls</h4>
          <p style="font-size: 0.9rem; color: #94a3b8; margin: 0; line-height: 1.6;">Total highway distance from Khunti to destination city along with applicable highway toll fees.</p>
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
          Car Transportation FAQs for <span style="color: #f59e0b;">Khunti</span>
        </h2>
      </div>

      <div style="display: flex; flex-direction: column; gap: 16px;">
        <div style="background: #101c40; padding: 22px 26px; border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Q1: How far in advance should I book car transportation in Khunti?</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.7;">
            We recommend booking 3 to 5 days ahead to schedule doorstep vehicle inspection and reserve space on specialized car carriers.
          </p>
        </div>

        <div style="background: #101c40; padding: 22px 26px; border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Q2: What documents must I present for car shipping from Khunti?</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.7;">
            You will need to provide a copy of your vehicle Registration Certificate (RC), active insurance policy, valid Pollution Under Control (PUC) certificate, and owner ID proof.
          </p>
        </div>

        <div style="background: #101c40; padding: 22px 26px; border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Q3: Are open car trailers safe for long-distance transport?</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.7;">
            Yes, open car trailers are equipped with safety wheel blocks, heavy-duty tie-down harnesses, and upper/lower deck locks, making them a safe and cost-effective option for standard cars.
          </p>
        </div>

        <div style="background: #101c40; padding: 22px 26px; border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Q4: How is pre-transit car condition verified before loading?</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.7;">
            Our officer completes a physical audit form noting current mileage, existing body scratches or dents, battery condition, and fuel level, which is signed by the car owner.
          </p>
        </div>

        <div style="background: #101c40; padding: 22px 26px; border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Q5: Can I track my vehicle carrier's location while in transit?</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.7;">
            Yes, all long-distance car carrier trucks are equipped with active GPS tracking systems for live position tracking.
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
          <h4 style="color: #ffffff; font-size: 1.1rem; margin-bottom: 8px;">Ranchi Capital Headquarters</h4>
          <p style="font-size: 0.88rem; color: #94a3b8; margin-bottom: 12px;">Primary relocation hub, container truck fleet, and corporate IBA billing assistance.</p>
          <a href="<?php echo SITE_URL; ?>packers-and-movers-in-ranchi" title="Packers and Movers in Ranchi →" style="color: #f59e0b; text-decoration: underline; font-weight: 600; font-size: 0.9rem;">
            Packers and Movers Ranchi →
          </a>
        </div>

        <div style="background: #101c40; padding: 20px; border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #ffffff; font-size: 1.1rem; margin-bottom: 8px;">Jamshedpur Relocation Hub</h4>
          <p style="font-size: 0.88rem; color: #94a3b8; margin-bottom: 12px;">Full household, vehicle, and commercial moving services across East Singhbhum.</p>
          <a href="<?php echo SITE_URL; ?>packers-and-movers-in-jamshedpur" title="Packers and Movers in Jamshedpur →" style="color: #f59e0b; text-decoration: underline; font-weight: 600; font-size: 0.9rem;">
            Packers and Movers Jamshedpur →
          </a>
        </div>

        <div style="background: #101c40; padding: 20px; border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #ffffff; font-size: 1.1rem; margin-bottom: 8px;">Contact Customer Support</h4>
          <p style="font-size: 0.88rem; color: #94a3b8; margin-bottom: 12px;">Get instant price estimates and book pre-move doorstep vehicle surveys.</p>
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
        Need Professional <span style="color: #f59e0b;">Car Transportation in Khunti</span>?
      </h2>
      <p style="font-size: 1.05rem; color: #cbd5e1; max-width: 750px; margin: 0 auto 30px auto; line-height: 1.7;">
        Call our helpline at <?php echo SITE_PHONE; ?> or connect via WhatsApp for transparent rates, doorstep pickup scheduling, and claim-ready paperwork.
      </p>

      <div style="display: flex; gap: 15px; justify-content: center; flex-wrap: wrap;">
        <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Now" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 30px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
          <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call Now: <?php echo SITE_PHONE; ?>
        </a>
        <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20a%20car%20transportation%20quote%20for%20Khunti." title="Chat on WhatsApp" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 30px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
          <i class="fab fa-whatsapp" style="margin-right: 8px;"></i> Chat on WhatsApp
        </a>
      </div>
    </div>
  </section>

</main>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>

