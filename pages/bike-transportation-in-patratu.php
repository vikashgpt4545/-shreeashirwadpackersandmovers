<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "Bike Transportation in Patratu | Secure Shifting Jharkhand Valley";
$page_desc = "Professional bike transportation in Patratu, Jharkhand. Secure door-to-door two-wheeler shifting with 4-layer coal-dust, valley-road, and reservoir-humidity proof packaging.";
$page_keywords = "bike transportation in patratu, best bike transportation in patratu, affordable bike transportation in patratu, packers and movers, packers and movers in ranchi, top bike transportation in patratu company, household shifting bike transportation in patratu, doorstep bike transportation in patratu, verified bike transportation in patratu services, shree ashirwad bike transportation in patratu";
$canonical_url = "https://shreeashirwadpackersandmovers.com/pages/bike-transportation-in-patratu.php";

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
            BIKE TRANSPORTATION PATRATU RELOCATION SPECIALISTS
          </span>
          <h1 style="font-size: 2.7rem; font-weight: 800; line-height: 1.2; margin-bottom: 20px; color: #ffffff;">
            Professional <span style="color: #f59e0b;">Bike Transportation in Patratu</span>
          </h1>
          <p style="font-size: 1.12rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 25px;">
            Professional bike transportation in Patratu, Jharkhand. Secure door-to-door two-wheeler shifting with 4-layer coal-dust, valley-road, and reservoir-humidity proof packaging.
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

  <!-- Section 2: Overview & Bike Carrier Options -->
  <section style="padding: 70px 0; background: #0b132b; color: #e2e8f0; line-height: 1.8;">
    <div class="container" style="max-width: 950px; margin: 0 auto;">
      <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Specialized Two-Wheeler Logistics</span>
      <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin: 10px 0 20px 0;">
        Safe &amp; Professional <span style="color: #f59e0b;">Bike Transportation in Patratu</span>
      </h2>
      <p style="font-size: 1.05rem; color: #cbd5e1; margin-bottom: 25px; line-height: 1.8;">
        Relocating your motorcycle or scooter from Patratu requires multi-layer protective packaging, fuel draining protocols, and secure carrier tie-downs to prevent transit damage on winding ghat roads. Shree Ashirwad Packers and Movers provides specialized bike shifting services for power plant engineers (PVUNL / NTPC), industrial personnel, resort staff, and families across Patratu and Ramgarh district. Whether shipping a daily commuter motorcycle, cruiser, or electric scooter, our vehicle logistics setup ensures zero mileage addition and door-to-door delivery.
      </p>

      <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 25px; margin: 35px 0;">
        <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 25px; box-shadow: 0 10px 25px rgba(0,0,0,0.3);">
          <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 15px;">
            <i class="fas fa-motorcycle"></i>
          </div>
          <h3 style="font-size: 1.25rem; color: #ffffff; font-weight: 700; margin-bottom: 12px;">4-Layer Scratch &amp; Humidity Proof Packaging</h3>
          <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.7; margin: 0;">
            Every bike is wrapped with high-density foam padding, heavy-duty bubble wrap, corrugated cardboard sheets, and moisture-proof stretch film. Delicate components like mirrors, headlights, indicator lamps, and petrol tanks receive extra buffer layers.
          </p>
        </div>

        <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 25px; box-shadow: 0 10px 25px rgba(0,0,0,0.3);">
          <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 15px;">
            <i class="fas fa-box"></i>
          </div>
          <h3 style="font-size: 1.25rem; color: #ffffff; font-weight: 700; margin-bottom: 12px;">Custom Wooden Crate Packaging</h3>
          <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.7; margin: 0;">
            For sports bikes, imported cruisers, and high-value two-wheelers, we offer optional reinforced wooden crate packing. Rigid timber framing prevents exterior contact or pressure during multi-state highway container movement.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 3: 5-Step Bike Inspection & Transport Safety Protocol -->
  <section style="padding: 70px 0; background: #070d1e; color: #ffffff;">
    <div class="container" style="max-width: 950px; margin: 0 auto;">
      <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Safety Protocol</span>
      <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin: 10px 0 20px 0;">
        5-Step Bike Handling &amp; Transit Process
      </h2>
      <p style="font-size: 1.05rem; color: #cbd5e1; margin-bottom: 30px; line-height: 1.8;">
        Our motorcycle logistics crew enforces rigorous safety protocols for every two-wheeler shipped from Patratu:
      </p>

      <div style="display: grid; grid-template-columns: 1fr; gap: 18px; margin-bottom: 35px;">
        <div style="background: rgba(23, 42, 84, 0.6); padding: 20px 24px; border-radius: 12px; border-left: 4px solid #f59e0b; display: flex; gap: 20px; align-items: flex-start;">
          <div style="font-size: 1.8rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">01</div>
          <div>
            <h4 style="color: #ffffff; font-size: 1.15rem; margin-bottom: 6px;">Joint Physical Inspection &amp; Audit Form</h4>
            <p style="font-size: 0.92rem; color: #94a3b8; margin: 0; line-height: 1.6;">Our representative inspects your motorcycle in Patratu alongside you, recording existing scratches, odometer reading, battery condition, and accessories on an official inspection form.</p>
          </div>
        </div>

        <div style="background: rgba(23, 42, 84, 0.6); padding: 20px 24px; border-radius: 12px; border-left: 4px solid #f59e0b; display: flex; gap: 20px; align-items: flex-start;">
          <div style="font-size: 1.8rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">02</div>
          <div>
            <h4 style="color: #ffffff; font-size: 1.15rem; margin-bottom: 6px;">Fuel Tank Draining &amp; Battery Safety</h4>
            <p style="font-size: 0.92rem; color: #94a3b8; margin: 0; line-height: 1.6;">To eliminate transit fire hazards, petrol levels are siphoned down to reserve level (approx 1 liter), and battery terminals are insulated prior to wrapping.</p>
          </div>
        </div>

        <div style="background: rgba(23, 42, 84, 0.6); padding: 20px 24px; border-radius: 12px; border-left: 4px solid #f59e0b; display: flex; gap: 20px; align-items: flex-start;">
          <div style="font-size: 1.8rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">03</div>
          <div>
            <h4 style="color: #ffffff; font-size: 1.15rem; margin-bottom: 6px;">4-Layer Protective Cushioning</h4>
            <p style="font-size: 0.92rem; color: #94a3b8; margin: 0; line-height: 1.6;">Full body wrapping using heavy bubble wrap, corner foam guards, corrugated sheets, and industrial stretch wrap prevents friction scratches during highway vibration.</p>
          </div>
        </div>

        <div style="background: rgba(23, 42, 84, 0.6); padding: 20px 24px; border-radius: 12px; border-left: 4px solid #f59e0b; display: flex; gap: 20px; align-items: flex-start;">
          <div style="font-size: 1.8rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">04</div>
          <div>
            <h4 style="color: #ffffff; font-size: 1.15rem; margin-bottom: 6px;">Belt Harnessing in Covered Container Truck</h4>
            <p style="font-size: 0.92rem; color: #94a3b8; margin: 0; line-height: 1.6;">The wrapped bike is loaded onto specialized covered vehicle carriers and secured upright using heavy nylon ratchets and wheel locks.</p>
          </div>
        </div>

        <div style="background: rgba(23, 42, 84, 0.6); padding: 20px 24px; border-radius: 12px; border-left: 4px solid #f59e0b; display: flex; gap: 20px; align-items: flex-start;">
          <div style="font-size: 1.8rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">05</div>
          <div>
            <h4 style="color: #ffffff; font-size: 1.15rem; margin-bottom: 6px;">Doorstep Unpacking &amp; Verification</h4>
            <p style="font-size: 0.92rem; color: #94a3b8; margin: 0; line-height: 1.6;">Upon delivery at the destination address, our team carefully unpacks the vehicle and verifies its condition against the initial inspection sheet before final sign-off.</p>
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
        To protect your motorcycle against unpredictable highway risks, we provide full-value transit insurance options and clear documentation:
      </p>

      <div style="background: #101c40; border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 28px;">
        <ul style="list-style: none; padding: 0; margin: 0; display: grid; grid-template-columns: 1fr 1fr; gap: 16px; color: #cbd5e1; font-size: 0.95rem;">
          <li><i class="fas fa-file-invoice-dollar" style="color: #f59e0b; margin-right: 10px;"></i> <strong>GST Consignment Bill:</strong> Valid itemized invoice accepted for company employee relocation claims.</li>
          <li><i class="fas fa-shield-alt" style="color: #f59e0b; margin-right: 10px;"></i> <strong>Full Transit Insurance Cover:</strong> Comprehensive policy protecting against accident or highway hazards.</li>
          <li><i class="fas fa-truck-loading" style="color: #f59e0b; margin-right: 10px;"></i> <strong>Official Lorry Receipt (LR):</strong> Stamped consignment document recording vehicle engine &amp; chassis numbers.</li>
          <li><i class="fas fa-clipboard-check" style="color: #f59e0b; margin-right: 10px;"></i> <strong>Condition Check Sheet:</strong> Dual-signed report confirming vehicle condition prior to loading.</li>
        </ul>
      </div>
    </div>
  </section>

  <!-- Section 5: Rate Determinants & Local Patratu Context -->
  <section style="padding: 70px 0; background: #070d1e; color: #ffffff;">
    <div class="container" style="max-width: 950px; margin: 0 auto;">
      <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Pricing &amp; Regional Logistics</span>
      <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin: 10px 0 20px 0;">
        Bike Shipping Rates &amp; Logistics Context in Patratu
      </h2>
      
      <p style="font-size: 1.05rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 20px;">
        Patratu is a key industrial and tourism valley location in Ramgarh district, connected to Ranchi via scenic ghat roads. When booking bike transportation from Patratu, two-wheeler shipping charges depend on objective factors:
      </p>

      <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 20px; margin-top: 25px;">
        <div style="background: #101c40; padding: 22px; border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #f59e0b; font-size: 1.1rem; margin-bottom: 8px;">Two-Wheeler Class &amp; Engine Displacement</h4>
          <p style="font-size: 0.9rem; color: #94a3b8; margin: 0; line-height: 1.6;">Standard scooters/100cc bikes consume less carrier space than heavy 350cc+ cruisers or sports motorcycles.</p>
        </div>

        <div style="background: #101c40; padding: 22px; border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #f59e0b; font-size: 1.1rem; margin-bottom: 8px;">Packaging Type Selected</h4>
          <p style="font-size: 0.9rem; color: #94a3b8; margin: 0; line-height: 1.6;">Standard 4-layer bubble packaging vs. custom wooden crate framing for high-value motorcycles.</p>
        </div>

        <div style="background: #101c40; padding: 22px; border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #f59e0b; font-size: 1.1rem; margin-bottom: 8px;">Transit Distance &amp; Highway Tolls</h4>
          <p style="font-size: 0.9rem; color: #94a3b8; margin: 0; line-height: 1.6;">Total mileage from Patratu to destination city along with applicable highway transit tolls.</p>
        </div>

        <div style="background: #101c40; padding: 22px; border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #f59e0b; font-size: 1.1rem; margin-bottom: 8px;">Declared Insurance Value</h4>
          <p style="font-size: 0.9rem; color: #94a3b8; margin: 0; line-height: 1.6;">The declared market value of the bike determines the transit policy premium cover.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 6: Frequently Asked Questions (5 Bike FAQs) -->
  <section style="padding: 70px 0; background: #0b132b; color: #ffffff;">
    <div class="container" style="max-width: 950px; margin: 0 auto;">
      <div class="section-header text-center" style="margin-bottom: 45px;">
        <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Helpful Information</span>
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin-top: 10px;">
          Bike Transportation FAQs for <span style="color: #f59e0b;">Patratu</span>
        </h2>
      </div>

      <div style="display: flex; flex-direction: column; gap: 16px;">
        <div style="background: #101c40; padding: 22px 26px; border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Q1: How far in advance should I book bike transportation in Patratu?</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.7;">
            We recommend booking 2 to 3 days in advance to schedule doorstep packing and secure slot reservation on container trucks.
          </p>
        </div>

        <div style="background: #101c40; padding: 22px 26px; border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Q2: What documents are required for shipping a bike from Patratu?</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.7;">
            You need a copy of the vehicle Registration Certificate (RC), valid insurance paper, PUC certificate, and government photo ID of the owner.
          </p>
        </div>

        <div style="background: #101c40; padding: 22px 26px; border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Q3: Should I empty the petrol tank before bike pickup?</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.7;">
            Yes, for highway safety reasons, petrol should be reduced to reserve (around 1 liter). Our team assists with fuel draining if necessary.
          </p>
        </div>

        <div style="background: #101c40; padding: 22px 26px; border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Q4: Is wooden crate packing necessary for regular scooters or motorcycles?</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.7;">
            Standard 4-layer bubble and corrugated wrap is fully sufficient for regular scooters and commuter bikes. Wooden crating is recommended for sports bikes and premium cruisers.
          </p>
        </div>

        <div style="background: #101c40; padding: 22px 26px; border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Q5: Can I track my motorcycle location during transit?</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.7;">
            Yes, all main long-distance container vehicles feature GPS tracking for live updates.
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
          <p style="font-size: 0.88rem; color: #94a3b8; margin-bottom: 12px;">Primary relocation hub, container truck fleet, and corporate billing assistance.</p>
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
          <p style="font-size: 0.88rem; color: #94a3b8; margin-bottom: 12px;">Get instant price estimates and book pre-move doorstep bike surveys.</p>
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
        Book Safe Bike Shifting
      </span>
      <h2 style="font-size: 2.2rem; font-weight: 800; margin: 15px 0; color: #ffffff;">
        Need Professional <span style="color: #f59e0b;">Bike Transportation in Patratu</span>?
      </h2>
      <p style="font-size: 1.05rem; color: #cbd5e1; max-width: 750px; margin: 0 auto 30px auto; line-height: 1.7;">
        Call our helpline at <?php echo SITE_PHONE; ?> or connect via WhatsApp for transparent rates, doorstep packing, and insured two-wheeler transport.
      </p>

      <div style="display: flex; gap: 15px; justify-content: center; flex-wrap: wrap;">
        <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Now" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 30px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
          <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call Now: <?php echo SITE_PHONE; ?>
        </a>
        <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20a%20bike%20transportation%20quote%20for%20Patratu." title="Chat on WhatsApp" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 30px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
          <i class="fab fa-whatsapp" style="margin-right: 8px;"></i> Chat on WhatsApp
        </a>
      </div>
    </div>
  </section>

</main>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>

