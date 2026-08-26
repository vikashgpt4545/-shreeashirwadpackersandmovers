<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "Bike Transportation in Bhatapara | Safe Two-Wheeler Shifting Chhattisgarh";
$page_desc = "Professional bike transportation in Bhatapara, Baloda Bazar-Bhatapara district, Chhattisgarh. Doorstep motorcycle shifting with multi-layer packing, full transit insurance, and GPS tracking across India.";
$page_keywords = "bike transportation in bhatapara, best bike transportation in bhatapara, affordable bike transportation in bhatapara, packers and movers, packers and movers in ranchi, top bike transportation in bhatapara company, household shifting bike transportation in bhatapara, doorstep bike transportation in bhatapara, verified bike transportation in bhatapara services, shree ashirwad bike transportation in bhatapara";
$canonical_url = "https://shreeashirwadpackersandmovers.com/pages/bike-transportation-in-bhatapara.php";

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
            BIKE TRANSPORTATION BHATAPARA RELOCATION SPECIALISTS
          </span>
          <h1 style="font-size: 2.7rem; font-weight: 800; line-height: 1.2; margin-bottom: 20px; color: #ffffff;">
            Professional <span style="color: #f59e0b;">Bike Transportation in Bhatapara</span>
          </h1>
          <p style="font-size: 1.12rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 25px;">
            Professional bike transportation in Bhatapara, Chhattisgarh. Doorstep motorcycle shifting with multi-layer packing, full transit insurance, and GPS tracking across India.
          </p>

          <div style="display: flex; gap: 15px; flex-wrap: wrap; margin-bottom: 30px;">
            <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Now" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
              <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call Now: <?php echo SITE_PHONE; ?>
            </a>
            <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20a%20shifting%20quote%20for%20Bhatapara." title="Chat on WhatsApp" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
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
          <h2 style="font-size: 1.4rem; color: #ffffff; margin-bottom: 8px; font-weight: 700; text-align: center;">Get Bhatapara Shifting Quote</h2>
          <p style="font-size: 0.85rem; color: #94a3b8; text-align: center; margin-bottom: 20px;">Receive transparent cost estimation on WhatsApp in 2 minutes</p>

          <form action="#" method="POST" onsubmit="sendHeroWhatsAppLead(event, this);">
            <div style="margin-bottom: 14px;">
              <input type="text" name="name" class="form-control" placeholder="Your Full Name" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="margin-bottom: 14px;">
              <input type="tel" name="phone" class="form-control" placeholder="10-Digit Phone Number" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 10px; margin-bottom: 14px;">
              <input type="text" name="move_from" class="form-control" value="Bhatapara" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
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

  <!-- Section 2: Trust & Credibility Stats -->
  <section class="stats-section" style="padding: 40px 0; background: #0f172a; border-bottom: 1px solid #1e293b;">
    <div class="container">
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 20px; text-align: center;">
        <div style="padding: 20px; background: #1e293b; border-radius: 12px; border: 1px solid #334155;">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b;">14,800+</div>
          <div style="font-size: 0.9rem; color: #94a3b8; margin-top: 5px;">Bikes Transported</div>
        </div>
        <div style="padding: 20px; background: #1e293b; border-radius: 12px; border: 1px solid #334155;">
          <div style="font-size: 2.2rem; font-weight: 800; color: #10b981;">99.8%</div>
          <div style="font-size: 0.9rem; color: #94a3b8; margin-top: 5px;">Safe Delivery Record</div>
        </div>
        <div style="padding: 20px; background: #1e293b; border-radius: 12px; border: 1px solid #334155;">
          <div style="font-size: 2.2rem; font-weight: 800; color: #3b82f6;">100%</div>
          <div style="font-size: 0.9rem; color: #94a3b8; margin-top: 5px;">Transit Insurance Coverage</div>
        </div>
        <div style="padding: 20px; background: #1e293b; border-radius: 12px; border: 1px solid #334155;">
          <div style="font-size: 2.2rem; font-weight: 800; color: #ec4899;">4.9 ★</div>
          <div style="font-size: 0.9rem; color: #94a3b8; margin-top: 5px;">Customer Rating</div>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 3: Comprehensive Overview -->
  <section class="overview-section" style="padding: 60px 0; background: #0b132b; color: #e2e8f0;">
    <div class="container">
      <div style="max-width: 850px; margin: 0 auto; text-align: center; margin-bottom: 40px;">
        <h2 style="font-size: 2.2rem; font-weight: 700; color: #ffffff; margin-bottom: 15px;">
          End-to-End Bike Transport Services in Bhatapara
        </h2>
        <p style="font-size: 1.05rem; color: #94a3b8; line-height: 1.8;">
          Moving your motorcycle from Bhatapara (Baloda Bazar-Bhatapara district, Chhattisgarh) demands secure closed carriers, multi-layer cushioning, and full transit insurance. Shree Ashirwad Packers and Movers provides reliable two-wheeler transportation to Raipur, Bilaspur, Durg-Bhilai, Nagpur, Delhi, and across India.
        </p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 25px;">
        <div style="background: #1c2541; padding: 25px; border-radius: 12px; border: 1px solid #2e3b5e;">
          <h3 style="font-size: 1.3rem; color: #f59e0b; margin-bottom: 12px;">Doorstep Pickup & Delivery</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; line-height: 1.6;">
            We collect your bike directly from your residence or office in Bhatapara and deliver it safely to your destination city.
          </p>
        </div>
        <div style="background: #1c2541; padding: 25px; border-radius: 12px; border: 1px solid #2e3b5e;">
          <h3 style="font-size: 1.3rem; color: #f59e0b; margin-bottom: 12px;">7-Layer Multi-Guard Packaging</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; line-height: 1.6;">
            Heavy-duty bubble wrapping, corrugated cardboard sheets, foam corner protectors, and waterproof stretch film for maximum protection.
          </p>
        </div>
        <div style="background: #1c2541; padding: 25px; border-radius: 12px; border: 1px solid #2e3b5e;">
          <h3 style="font-size: 1.3rem; color: #f59e0b; margin-bottom: 12px;">Full Transit Insurance</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; line-height: 1.6;">
            Comprehensive declared-value insurance coverage protecting your vehicle against scratches, dents, or transit hazards.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 4: Bike Shifting Rate Matrix -->
  <section class="pricing-section" style="padding: 60px 0; background: #0f172a; color: #ffffff;">
    <div class="container">
      <div style="text-align: center; margin-bottom: 40px;">
        <h2 style="font-size: 2.2rem; font-weight: 700; color: #ffffff; margin-bottom: 10px;">
          Estimated Bike Transportation Charges from Bhatapara
        </h2>
        <p style="font-size: 1rem; color: #94a3b8;">Transparent, competitive tariffs with zero hidden fees</p>
      </div>

      <div style="overflow-x: auto; background: #1e293b; border-radius: 12px; border: 1px solid #334155; padding: 10px;">
        <table style="width: 100%; border-collapse: collapse; text-align: left; min-width: 600px;">
          <thead>
            <tr style="background: #0f172a; border-bottom: 2px solid #334155;">
              <th style="padding: 16px; color: #f59e0b; font-size: 1rem;">Destination Route</th>
              <th style="padding: 16px; color: #f59e0b; font-size: 1rem;">Commuter Bike (100-150cc)</th>
              <th style="padding: 16px; color: #f59e0b; font-size: 1rem;">Sports / Cruiser (180-350cc)</th>
              <th style="padding: 16px; color: #f59e0b; font-size: 1rem;">Premium / Superbike (350cc+)</th>
            </tr>
          </thead>
          <tbody>
            <tr style="border-bottom: 1px solid #334155;">
              <td style="padding: 14px 16px; color: #e2e8f0;">Bhatapara to Raipur / Bilaspur</td>
              <td style="padding: 14px 16px; color: #cbd5e1;">₹1,800 - ₹2,800</td>
              <td style="padding: 14px 16px; color: #cbd5e1;">₹2,800 - ₹4,000</td>
              <td style="padding: 14px 16px; color: #cbd5e1;">₹4,000 - ₹6,000</td>
            </tr>
            <tr style="border-bottom: 1px solid #334155;">
              <td style="padding: 14px 16px; color: #e2e8f0;">Bhatapara to Nagpur / Maharashtra</td>
              <td style="padding: 14px 16px; color: #cbd5e1;">₹2,800 - ₹4,200</td>
              <td style="padding: 14px 16px; color: #cbd5e1;">₹4,000 - ₹5,800</td>
              <td style="padding: 14px 16px; color: #cbd5e1;">₹5,800 - ₹8,500</td>
            </tr>
            <tr style="border-bottom: 1px solid #334155;">
              <td style="padding: 14px 16px; color: #e2e8f0;">Bhatapara to Hyderabad / Telangana</td>
              <td style="padding: 14px 16px; color: #cbd5e1;">₹3,500 - ₹5,000</td>
              <td style="padding: 14px 16px; color: #cbd5e1;">₹4,800 - ₹7,000</td>
              <td style="padding: 14px 16px; color: #cbd5e1;">₹7,000 - ₹10,000</td>
            </tr>
            <tr style="border-bottom: 1px solid #334155;">
              <td style="padding: 14px 16px; color: #e2e8f0;">Bhatapara to Kolkata / West Bengal</td>
              <td style="padding: 14px 16px; color: #cbd5e1;">₹3,800 - ₹5,500</td>
              <td style="padding: 14px 16px; color: #cbd5e1;">₹5,200 - ₹7,500</td>
              <td style="padding: 14px 16px; color: #cbd5e1;">₹7,500 - ₹11,000</td>
            </tr>
            <tr>
              <td style="padding: 14px 16px; color: #e2e8f0;">Bhatapara to Delhi / NCR</td>
              <td style="padding: 14px 16px; color: #cbd5e1;">₹4,500 - ₹6,800</td>
              <td style="padding: 14px 16px; color: #cbd5e1;">₹6,200 - ₹9,000</td>
              <td style="padding: 14px 16px; color: #cbd5e1;">₹9,000 - ₹13,500</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </section>

  <!-- Section 5: Step-by-Step Relocation Process -->
  <section class="process-section" style="padding: 60px 0; background: #0b132b; color: #ffffff;">
    <div class="container">
      <div style="text-align: center; margin-bottom: 40px;">
        <h2 style="font-size: 2.2rem; font-weight: 700; color: #ffffff; margin-bottom: 10px;">
          Our 5-Step Bike Transportation Workflow
        </h2>
        <p style="font-size: 1rem; color: #94a3b8;">Streamlined execution for hassle-free vehicle delivery</p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 20px;">
        <div style="background: #1c2541; padding: 25px; border-radius: 12px; text-align: center; border: 1px solid #2e3b5e;">
          <div style="width: 45px; height: 45px; background: #f59e0b; color: #000; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 800; font-size: 1.2rem; margin: 0 auto 15px;">1</div>
          <h4 style="font-size: 1.1rem; color: #ffffff; margin-bottom: 8px;">Pre-Inspection</h4>
          <p style="font-size: 0.88rem; color: #94a3b8; line-height: 1.5;">Physical examination and detailed condition recording of your vehicle.</p>
        </div>

        <div style="background: #1c2541; padding: 25px; border-radius: 12px; text-align: center; border: 1px solid #2e3b5e;">
          <div style="width: 45px; height: 45px; background: #f59e0b; color: #000; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 800; font-size: 1.2rem; margin: 0 auto 15px;">2</div>
          <h4 style="font-size: 1.1rem; color: #ffffff; margin-bottom: 8px;">Multi-Layer Packing</h4>
          <p style="font-size: 0.88rem; color: #94a3b8; line-height: 1.5;">Application of bubble wrap, foam sheets, and heavy-duty corrugated board.</p>
        </div>

        <div style="background: #1c2541; padding: 25px; border-radius: 12px; text-align: center; border: 1px solid #2e3b5e;">
          <div style="width: 45px; height: 45px; background: #f59e0b; color: #000; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 800; font-size: 1.2rem; margin: 0 auto 15px;">3</div>
          <h4 style="font-size: 1.1rem; color: #ffffff; margin-bottom: 8px;">Safe Loading</h4>
          <p style="font-size: 0.88rem; color: #94a3b8; line-height: 1.5;">Hydraulic lift loading and firm harness anchoring inside covered carriers.</p>
        </div>

        <div style="background: #1c2541; padding: 25px; border-radius: 12px; text-align: center; border: 1px solid #2e3b5e;">
          <div style="width: 45px; height: 45px; background: #f59e0b; color: #000; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 800; font-size: 1.2rem; margin: 0 auto 15px;">4</div>
          <h4 style="font-size: 1.1rem; color: #ffffff; margin-bottom: 8px;">Insured Transit</h4>
          <p style="font-size: 0.88rem; color: #94a3b8; line-height: 1.5;">Real-time GPS tracking and periodic location updates during journey.</p>
        </div>

        <div style="background: #1c2541; padding: 25px; border-radius: 12px; text-align: center; border: 1px solid #2e3b5e;">
          <div style="width: 45px; height: 45px; background: #f59e0b; color: #000; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 800; font-size: 1.2rem; margin: 0 auto 15px;">5</div>
          <h4 style="font-size: 1.1rem; color: #ffffff; margin-bottom: 8px;">Doorstep Delivery</h4>
          <p style="font-size: 0.88rem; color: #94a3b8; line-height: 1.5;">Unpacking, physical re-verification, and key handover at destination.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 6: Document Checklist & Requirements -->
  <section class="docs-section" style="padding: 60px 0; background: #0f172a; color: #ffffff;">
    <div class="container">
      <div style="max-width: 800px; margin: 0 auto; background: #1e293b; padding: 35px; border-radius: 16px; border: 1px solid #334155;">
        <h3 style="font-size: 1.5rem; color: #f59e0b; margin-bottom: 20px; text-align: center;">
          Required Documents for Bike Transport from Bhatapara
        </h3>
        <p style="font-size: 0.95rem; color: #cbd5e1; margin-bottom: 25px; text-align: center;">
          To comply with RTO guidelines and ensure hassle-free transit across state borders, please keep copy sets of the following documents ready:
        </p>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); gap: 15px;">
          <div style="display: flex; align-items: center; gap: 10px; background: #0f172a; padding: 12px 16px; border-radius: 8px;">
            <i class="fas fa-check-circle" style="color: #10b981;"></i>
            <span style="font-size: 0.95rem; color: #e2e8f0;">Vehicle Registration Certificate (RC)</span>
          </div>
          <div style="display: flex; align-items: center; gap: 10px; background: #0f172a; padding: 12px 16px; border-radius: 8px;">
            <i class="fas fa-check-circle" style="color: #10b981;"></i>
            <span style="font-size: 0.95rem; color: #e2e8f0;">Valid Pollution Certificate (PUC)</span>
          </div>
          <div style="display: flex; align-items: center; gap: 10px; background: #0f172a; padding: 12px 16px; border-radius: 8px;">
            <i class="fas fa-check-circle" style="color: #10b981;"></i>
            <span style="font-size: 0.95rem; color: #e2e8f0;">Active Vehicle Insurance Policy</span>
          </div>
          <div style="display: flex; align-items: center; gap: 10px; background: #0f172a; padding: 12px 16px; border-radius: 8px;">
            <i class="fas fa-check-circle" style="color: #10b981;"></i>
            <span style="font-size: 0.95rem; color: #e2e8f0;">Owner ID Proof (Aadhaar / Driving License)</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 7: FAQ Section with Accordion/List -->
  <section class="faq-section" style="padding: 60px 0; background: #0b132b; color: #ffffff;">
    <div class="container">
      <div style="text-align: center; margin-bottom: 40px;">
        <h2 style="font-size: 2.2rem; font-weight: 700; color: #ffffff; margin-bottom: 10px;">
          Frequently Asked Questions (FAQs)
        </h2>
        <p style="font-size: 1rem; color: #94a3b8;">Common queries about bike transport in Bhatapara</p>
      </div>

      <div style="max-width: 850px; margin: 0 auto; display: flex; flex-direction: column; gap: 15px;">
        <div style="background: #1c2541; border: 1px solid #2e3b5e; border-radius: 10px; padding: 20px;">
          <h4 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 8px;">How is my bike protected during transport from Bhatapara?</h4>
          <p style="font-size: 0.95rem; color: #cbd5e1; line-height: 1.6; margin: 0;">
            We utilize a 7-layer safety packaging system consisting of bubble wrap, corrugated sheets, foam corner protectors, and waterproof stretch film, securely tied with safety belts inside covered vehicle carriers.
          </p>
        </div>

        <div style="background: #1c2541; border: 1px solid #2e3b5e; border-radius: 10px; padding: 20px;">
          <h4 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 8px;">How much fuel should be left in the bike tank before shifting?</h4>
          <p style="font-size: 0.95rem; color: #cbd5e1; line-height: 1.6; margin: 0;">
            We recommend leaving around 1 to 2 liters of petrol in the fuel tank to allow easy movement during loading and unloading while conforming to fire safety transport norms.
          </p>
        </div>

        <div style="background: #1c2541; border: 1px solid #2e3b5e; border-radius: 10px; padding: 20px;">
          <h4 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 8px;">Is door-to-door pickup available in Bhatapara?</h4>
          <p style="font-size: 0.95rem; color: #cbd5e1; line-height: 1.6; margin: 0;">
            Yes, our team provides complete doorstep pickup from Bhatapara and direct delivery to your specified destination anywhere across India.
          </p>
        </div>

        <div style="background: #1c2541; border: 1px solid #2e3b5e; border-radius: 10px; padding: 20px;">
          <h4 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 8px;">How long does bike transport from Bhatapara take?</h4>
          <p style="font-size: 0.95rem; color: #cbd5e1; line-height: 1.6; margin: 0;">
            Delivery timelines depend on distance. Routes to Raipur take 1 day, while long-distance interstate routes take 3 to 6 business days.
          </p>
        </div>

        <div style="background: #1c2541; border: 1px solid #2e3b5e; border-radius: 10px; padding: 20px;">
          <h4 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 8px;">Is transit insurance included in the quotation?</h4>
          <p style="font-size: 0.95rem; color: #cbd5e1; line-height: 1.6; margin: 0;">
            Yes, comprehensive transit insurance is provided with every quote to safeguard your vehicle against unforeseen circumstances during transit.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 8: Final Call to Action Footer Banner -->
  <section class="cta-banner" style="padding: 50px 0; background: linear-gradient(135deg, #1e1b4b 0%, #311b92 100%); text-align: center; color: #ffffff;">
    <div class="container">
      <h2 style="font-size: 2.2rem; font-weight: 800; margin-bottom: 15px; color: #ffffff;">
        Ready to Transport Your Bike from Bhatapara?
      </h2>
      <p style="font-size: 1.1rem; color: #cbd5e1; margin-bottom: 30px; max-width: 700px; margin-left: auto; margin-right: auto;">
        Get in touch with Shree Ashirwad Packers and Movers today for instant quotes, expert packing, and guaranteed safe delivery.
      </p>
      <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap;">
        <a href="tel:<?php echo SITE_PHONE_RAW; ?>" style="padding: 15px 35px; background: #e11d48; color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1.05rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
          <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call <?php echo SITE_PHONE; ?>
        </a>
        <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20a%20shifting%20quote%20for%20Bhatapara." target="_blank" style="padding: 15px 35px; background: #10b981; color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1.05rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
          <i class="fab fa-whatsapp" style="margin-right: 8px;"></i> WhatsApp Quick Quote
        </a>
      </div>
    </div>
  </section>

</main>

<!-- Technical SEO: FAQ Schema JSON-LD -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "How is my bike protected during transport from Bhatapara?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "We utilize a 7-layer safety packaging system consisting of bubble wrap, corrugated sheets, foam corner protectors, and waterproof stretch film, securely tied with safety belts inside covered vehicle carriers."
      }
    },
    {
      "@type": "Question",
      "name": "How much fuel should be left in the bike tank before shifting?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "We recommend leaving around 1 to 2 liters of petrol in the fuel tank to allow easy movement during loading and unloading while conforming to fire safety transport norms."
      }
    },
    {
      "@type": "Question",
      "name": "Is door-to-door pickup available in Bhatapara?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, our team provides complete doorstep pickup from Bhatapara and direct delivery to your specified destination anywhere across India."
      }
    },
    {
      "@type": "Question",
      "name": "How long does bike transport from Bhatapara take?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Delivery timelines depend on distance. Routes to Raipur take 1 day, while long-distance interstate routes take 3 to 6 business days."
      }
    },
    {
      "@type": "Question",
      "name": "Is transit insurance included in the quotation?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, comprehensive transit insurance is provided with every quote to safeguard your vehicle against unforeseen circumstances during transit."
      }
    }
  ]
}
</script>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>

