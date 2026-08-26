<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "Bike Transportation in Aurangabad Bihar | Safe Two-Wheeler Shifting";
$page_desc = "Planning bike transportation in Aurangabad (Bihar)? Get safe, insured, and doorstep motorcycle shifting. High-quality multi-layer packing and real-time tracking.";
$page_keywords = "bike transportation in aurangabad, best bike transportation in aurangabad, affordable bike transportation in aurangabad, packers and movers, packers and movers in ranchi, top bike transportation in aurangabad company, household shifting bike transportation in aurangabad, doorstep bike transportation in aurangabad, verified bike transportation in aurangabad services, shree ashirwad bike transportation in aurangabad";
$canonical_url = "https://shreeashirwadpackersandmovers.com/pages/bike-transportation-in-aurangabad.php";

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
            BIKE TRANSPORTATION AURANGABAD RELOCATION SPECIALISTS
          </span>
          <h1 style="font-size: 2.7rem; font-weight: 800; line-height: 1.2; margin-bottom: 20px; color: #ffffff;">
            Professional <span style="color: #f59e0b;">Bike Transportation in Aurangabad Bihar</span>
          </h1>
          <p style="font-size: 1.12rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 25px;">
            Planning bike transportation in Aurangabad (Bihar)? Get safe, insured, and doorstep motorcycle shifting. High-quality multi-layer packing and real-time tracking.
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
          <h2 style="font-size: 1.4rem; color: #ffffff; margin-bottom: 8px; font-weight: 700; text-align: center;">Get Aurangabad Shifting Quote</h2>
          <p style="font-size: 0.85rem; color: #94a3b8; text-align: center; margin-bottom: 20px;">Receive transparent cost estimation on WhatsApp in 2 minutes</p>

          <form action="#" method="POST" onsubmit="sendHeroWhatsAppLead(event, this);">
            <div style="margin-bottom: 14px;">
              <input type="text" name="name" class="form-control" placeholder="Your Full Name" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="margin-bottom: 14px;">
              <input type="tel" name="phone" class="form-control" placeholder="10-Digit Phone Number" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 10px; margin-bottom: 14px;">
              <input type="text" name="move_from" class="form-control" value="Aurangabad" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
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

  <!-- Section 2: Trusted Relocation Track Record & Stats -->
  <section style="background: #0f172a; padding: 45px 0; border-bottom: 1px solid rgba(255,255,255,0.05);">
    <div class="container">
      <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 20px; text-align: center;">
        <div style="padding: 20px; background: rgba(255,255,255,0.03); border-radius: 12px; border: 1px solid rgba(255,255,255,0.05);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; margin-bottom: 5px;">14,200+</div>
          <div style="font-size: 0.9rem; color: #94a3b8; font-weight: 600;">Bikes Transported</div>
        </div>
        <div style="padding: 20px; background: rgba(255,255,255,0.03); border-radius: 12px; border: 1px solid rgba(255,255,255,0.05);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; margin-bottom: 5px;">99.6%</div>
          <div style="font-size: 0.9rem; color: #94a3b8; font-weight: 600;">On-Time Delivery Rate</div>
        </div>
        <div style="padding: 20px; background: rgba(255,255,255,0.03); border-radius: 12px; border: 1px solid rgba(255,255,255,0.05);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; margin-bottom: 5px;">100%</div>
          <div style="font-size: 0.9rem; color: #94a3b8; font-weight: 600;">Transit Insurance Covered</div>
        </div>
        <div style="padding: 20px; background: rgba(255,255,255,0.03); border-radius: 12px; border: 1px solid rgba(255,255,255,0.05);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; margin-bottom: 5px;">4.9/5</div>
          <div style="font-size: 0.9rem; color: #94a3b8; font-weight: 600;">Verified User Rating</div>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 3: Comprehensive Bike Shifting Services in Aurangabad -->
  <section style="padding: 60px 0; background: #0b132b; color: #ffffff;">
    <div class="container">
      <div style="text-align: center; max-width: 800px; margin: 0 auto 50px;">
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin-bottom: 15px;">
          Premium Two-Wheeler Logistics Services in <span style="color: #f59e0b;">Aurangabad (Bihar)</span>
        </h2>
        <p style="font-size: 1rem; color: #94a3b8; line-height: 1.7;">
          Shree Ashirwad Packers and Movers delivers specialized end-to-end bike relocation from Aurangabad, Bihar to all major Indian cities. We protect your motorcycle with multi-tier packaging and dedicated covered carrier transport.
        </p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 30px;">
        
        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 14px; padding: 30px; transition: transform 0.3s ease;">
          <div style="width: 50px; height: 50px; background: rgba(245, 158, 11, 0.1); border-radius: 10px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
            <i class="fas fa-motorcycle" style="font-size: 1.5rem; color: #f59e0b;"></i>
          </div>
          <h3 style="font-size: 1.3rem; font-weight: 700; color: #ffffff; margin-bottom: 12px;">Standard Bike & Scooty Relocation</h3>
          <p style="font-size: 0.95rem; color: #94a3b8; line-height: 1.6;">
            Safe shifting for daily commuters, scooters, and lightweight motorcycles. Includes 5-layer bubble packaging, mirror removal, and secure wheel clamping.
          </p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 14px; padding: 30px; transition: transform 0.3s ease;">
          <div style="width: 50px; height: 50px; background: rgba(245, 158, 11, 0.1); border-radius: 10px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
            <i class="fas fa-shield-alt" style="font-size: 1.5rem; color: #f59e0b;"></i>
          </div>
          <h3 style="font-size: 1.3rem; font-weight: 700; color: #ffffff; margin-bottom: 12px;">Premium & Superbike Logistics</h3>
          <p style="font-size: 0.95rem; color: #94a3b8; line-height: 1.6;">
            Custom wooden crating and 7-layer shock-absorption wrapping for Royal Enfield, BMW, Kawasaki, and Harley-Davidson bikes with zero paint scratches.
          </p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 14px; padding: 30px; transition: transform 0.3s ease;">
          <div style="width: 50px; height: 50px; background: rgba(245, 158, 11, 0.1); border-radius: 10px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
            <i class="fas fa-truck-loading" style="font-size: 1.5rem; color: #f59e0b;"></i>
          </div>
          <h3 style="font-size: 1.3rem; font-weight: 700; color: #ffffff; margin-bottom: 12px;">Door-to-Door Pickup & Delivery</h3>
          <p style="font-size: 0.95rem; color: #94a3b8; line-height: 1.6;">
            Our team collects your bike straight from your home in Aurangabad and delivers it right to your destination address anywhere across India.
          </p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 14px; padding: 30px; transition: transform 0.3s ease;">
          <div style="width: 50px; height: 50px; background: rgba(245, 158, 11, 0.1); border-radius: 10px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
            <i class="fas fa-file-contract" style="font-size: 1.5rem; color: #f59e0b;"></i>
          </div>
          <h3 style="font-size: 1.3rem; font-weight: 700; color: #ffffff; margin-bottom: 12px;">Full Transit Insurance</h3>
          <p style="font-size: 0.95rem; color: #94a3b8; line-height: 1.6;">
            Complete financial protection against accidents, natural disasters, or unforeseen transit risks with instant claim support.
          </p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 14px; padding: 30px; transition: transform 0.3s ease;">
          <div style="width: 50px; height: 50px; background: rgba(245, 158, 11, 0.1); border-radius: 10px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
            <i class="fas fa-route" style="font-size: 1.5rem; color: #f59e0b;"></i>
          </div>
          <h3 style="font-size: 1.3rem; font-weight: 700; color: #ffffff; margin-bottom: 12px;">Real-Time GPS Tracking</h3>
          <p style="font-size: 0.95rem; color: #94a3b8; line-height: 1.6;">
            Stay informed with continuous WhatsApp location updates and SMS alerts from dispatch at Aurangabad to final delivery.
          </p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 14px; padding: 30px; transition: transform 0.3s ease;">
          <div style="width: 50px; height: 50px; background: rgba(245, 158, 11, 0.1); border-radius: 10px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
            <i class="fas fa-boxes" style="font-size: 1.5rem; color: #f59e0b;"></i>
          </div>
          <h3 style="font-size: 1.3rem; font-weight: 700; color: #ffffff; margin-bottom: 12px;">Combined Bike & Luggage Moving</h3>
          <p style="font-size: 0.95rem; color: #94a3b8; line-height: 1.6;">
            Option to ship personal riding gear, helmets, spare parts, and household boxes alongside your two-wheeler in a single consignment.
          </p>
        </div>

      </div>
    </div>
  </section>

  <!-- Section 4: Transparent Rate Estimation Table -->
  <section style="padding: 60px 0; background: #0f172a; color: #ffffff;">
    <div class="container">
      <div style="text-align: center; max-width: 800px; margin: 0 auto 40px;">
        <h2 style="font-size: 2rem; font-weight: 800; color: #ffffff; margin-bottom: 12px;">
          Estimated Bike Transportation Charges from <span style="color: #f59e0b;">Aurangabad</span>
        </h2>
        <p style="font-size: 0.95rem; color: #94a3b8;">
          Transparent pricing matrix based on distance, bike engine capacity, and packaging standard. No hidden charges.
        </p>
      </div>

      <div style="overflow-x: auto; background: rgba(255,255,255,0.02); border-radius: 12px; border: 1px solid rgba(255,255,255,0.08);">
        <table style="width: 100%; border-collapse: collapse; text-align: left; font-size: 0.95rem;">
          <thead>
            <tr style="background: rgba(245, 158, 11, 0.15); color: #f59e0b; border-bottom: 1px solid rgba(255,255,255,0.1);">
              <th style="padding: 16px 20px; font-weight: 700;">Destination Distance</th>
              <th style="padding: 16px 20px; font-weight: 700;">Scooty / 100cc-125cc</th>
              <th style="padding: 16px 20px; font-weight: 700;">150cc - 250cc Bike</th>
              <th style="padding: 16px 20px; font-weight: 700;">Cruiser / Superbike</th>
              <th style="padding: 16px 20px; font-weight: 700;">Transit Time</th>
            </tr>
          </thead>
          <tbody style="color: #cbd5e1;">
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.05);">
              <td style="padding: 16px 20px; font-weight: 600; color: #fff;">Within 300 km (Regional)</td>
              <td style="padding: 16px 20px;">₹2,200 - ₹3,500</td>
              <td style="padding: 16px 20px;">₹2,800 - ₹4,200</td>
              <td style="padding: 16px 20px;">₹4,500 - ₹6,000</td>
              <td style="padding: 16px 20px;">24 - 48 Hours</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.05);">
              <td style="padding: 16px 20px; font-weight: 600; color: #fff;">300 km - 800 km</td>
              <td style="padding: 16px 20px;">₹3,500 - ₹5,000</td>
              <td style="padding: 16px 20px;">₹4,200 - ₹6,000</td>
              <td style="padding: 16px 20px;">₹6,000 - ₹8,500</td>
              <td style="padding: 16px 20px;">2 - 4 Days</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.05);">
              <td style="padding: 16px 20px; font-weight: 600; color: #fff;">800 km - 1500 km</td>
              <td style="padding: 16px 20px;">₹4,800 - ₹6,800</td>
              <td style="padding: 16px 20px;">₹5,500 - ₹7,800</td>
              <td style="padding: 16px 20px;">₹8,000 - ₹11,500</td>
              <td style="padding: 16px 20px;">4 - 6 Days</td>
            </tr>
            <tr>
              <td style="padding: 16px 20px; font-weight: 600; color: #fff;">1500 km+ (Pan India)</td>
              <td style="padding: 16px 20px;">₹6,200 - ₹8,500</td>
              <td style="padding: 16px 20px;">₹7,200 - ₹9,800</td>
              <td style="padding: 16px 20px;">₹10,500 - ₹15,000</td>
              <td style="padding: 16px 20px;">5 - 8 Days</td>
            </tr>
          </tbody>
        </table>
      </div>
      <p style="font-size: 0.85rem; color: #64748b; margin-top: 15px; text-align: center;">
        * Rates are indicative. Final quote includes taxes, insurance policies, and door-step pickup charges.
      </p>
    </div>
  </section>

  <!-- Section 5: Step-by-Step Relocation Workflow -->
  <section style="padding: 60px 0; background: #0b132b; color: #ffffff;">
    <div class="container">
      <div style="text-align: center; max-width: 800px; margin: 0 auto 50px;">
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin-bottom: 15px;">
          Our 5-Step Secure Bike Shifting Process
        </h2>
        <p style="font-size: 1rem; color: #94a3b8;">
          Engineered to guarantee damage-free transit from inspection to door delivery.
        </p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(5, 1fr); gap: 20px;">
        <div style="background: rgba(255,255,255,0.03); padding: 25px 20px; border-radius: 12px; border-top: 3px solid #f59e0b; text-align: center;">
          <div style="font-size: 1.8rem; font-weight: 800; color: #f59e0b; margin-bottom: 10px;">01</div>
          <h4 style="font-size: 1.1rem; font-weight: 700; color: #fff; margin-bottom: 8px;">Pre-Shift Inspection</h4>
          <p style="font-size: 0.85rem; color: #94a3b8; line-height: 1.5;">Physical inspection, recording odometer reading, and initial condition report.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); padding: 25px 20px; border-radius: 12px; border-top: 3px solid #f59e0b; text-align: center;">
          <div style="font-size: 1.8rem; font-weight: 800; color: #f59e0b; margin-bottom: 10px;">02</div>
          <h4 style="font-size: 1.1rem; font-weight: 700; color: #fff; margin-bottom: 8px;">Multi-Layer Packing</h4>
          <p style="font-size: 0.85rem; color: #94a3b8; line-height: 1.5;">High-density foam, heavy-duty bubble wrap, corrugated sheets, and stretch film.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); padding: 25px 20px; border-radius: 12px; border-top: 3px solid #f59e0b; text-align: center;">
          <div style="font-size: 1.8rem; font-weight: 800; color: #f59e0b; margin-bottom: 10px;">03</div>
          <h4 style="font-size: 1.1rem; font-weight: 700; color: #fff; margin-bottom: 8px;">Safe Carrier Loading</h4>
          <p style="font-size: 0.85rem; color: #94a3b8; line-height: 1.5;">Ramp loading into closed vehicle carriers with wheel locks and heavy nylon tie-down belts.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); padding: 25px 20px; border-radius: 12px; border-top: 3px solid #f59e0b; text-align: center;">
          <div style="font-size: 1.8rem; font-weight: 800; color: #f59e0b; margin-bottom: 10px;">04</div>
          <h4 style="font-size: 1.1rem; font-weight: 700; color: #fff; margin-bottom: 8px;">Tracked Highway Transit</h4>
          <p style="font-size: 0.85rem; color: #94a3b8; line-height: 1.5;">GPS monitored transit with scheduled driver check-ins and customer tracking updates.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); padding: 25px 20px; border-radius: 12px; border-top: 3px solid #f59e0b; text-align: center;">
          <div style="font-size: 1.8rem; font-weight: 800; color: #f59e0b; margin-bottom: 10px;">05</div>
          <h4 style="font-size: 1.1rem; font-weight: 700; color: #fff; margin-bottom: 8px;">Doorstep Unpacking</h4>
          <p style="font-size: 0.85rem; color: #94a3b8; line-height: 1.5;">Safe delivery at destination, physical verification against inspection report, and handover.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 6: Safety & Multi-Layer Packaging Specifications -->
  <section style="padding: 60px 0; background: #0f172a; color: #ffffff;">
    <div class="container">
      <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 40px; align-items: center;">
        <div>
          <span class="section-tag" style="background: rgba(245, 158, 11, 0.15); color: #f59e0b; border: 1px solid rgba(245, 158, 11, 0.4); padding: 6px 16px; border-radius: 20px; font-size: 0.85rem; font-weight: 700; text-transform: uppercase; display: inline-block; margin-bottom: 15px;">
            ZERO-DAMAGE GUARANTEE
          </span>
          <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin-bottom: 20px; line-height: 1.3;">
            Advanced 7-Layer Bike Packaging System
          </h2>
          <p style="font-size: 1rem; color: #cbd5e1; line-height: 1.7; margin-bottom: 20px;">
            To safeguard fragile parts like headlamps, indicators, mirrors, fuel tank, and exhaust pipes during long-distance transit across rough highway terrains, we utilize specialized packing materials:
          </p>

          <ul style="list-style: none; padding: 0; margin: 0; color: #94a3b8; font-size: 0.95rem; line-height: 2;">
            <li style="display: flex; align-items: center;"><i class="fas fa-check-circle" style="color: #f59e0b; margin-right: 10px;"></i> <strong>Layer 1:</strong> Anti-scratch foam wrapping around fuel tank and side panels.</li>
            <li style="display: flex; align-items: center;"><i class="fas fa-check-circle" style="color: #f59e0b; margin-right: 10px;"></i> <strong>Layer 2:</strong> High-density 100 GSM bubble wrap for shock absorption.</li>
            <li style="display: flex; align-items: center;"><i class="fas fa-check-circle" style="color: #f59e0b; margin-right: 10px;"></i> <strong>Layer 3:</strong> Heavy corrugated cardboard sheets guarding metal engine components.</li>
            <li style="display: flex; align-items: center;"><i class="fas fa-check-circle" style="color: #f59e0b; margin-right: 10px;"></i> <strong>Layer 4:</strong> Stretch plastic film seal protecting against rain, dust, and moisture.</li>
            <li style="display: flex; align-items: center;"><i class="fas fa-check-circle" style="color: #f59e0b; margin-right: 10px;"></i> <strong>Layer 5:</strong> Edge protectors for levers, silencer, and indicators.</li>
          </ul>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 16px; padding: 35px;">
          <h3 style="font-size: 1.4rem; font-weight: 700; color: #ffffff; margin-bottom: 20px; text-align: center;">Mandatory Pre-Shifting Checklist</h3>
          <div style="display: grid; gap: 15px; font-size: 0.9rem; color: #cbd5e1;">
            <div style="background: rgba(0,0,0,0.3); padding: 12px 16px; border-radius: 8px;">✓ Empty fuel tank down to 1-2 liters to prevent leakage risks.</div>
            <div style="background: rgba(0,0,0,0.3); padding: 12px 16px; border-radius: 8px;">✓ Remove personal belongings, storage boxes, and loose accessories.</div>
            <div style="background: rgba(0,0,0,0.3); padding: 12px 16px; border-radius: 8px;">✓ Inspect tire pressure and ensure brakes are fully functional.</div>
            <div style="background: rgba(0,0,0,0.3); padding: 12px 16px; border-radius: 8px;">✓ Take clear 360-degree photos/videos before handing over the key.</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 7: Documents & Compliance Checklist -->
  <section style="padding: 60px 0; background: #0b132b; color: #ffffff;">
    <div class="container">
      <div style="text-align: center; max-width: 800px; margin: 0 auto 40px;">
        <h2 style="font-size: 2rem; font-weight: 800; color: #ffffff; margin-bottom: 12px;">
          Required Documents for Bike Transport from Aurangabad
        </h2>
        <p style="font-size: 0.95rem; color: #94a3b8;">
          Simple documentation needed for hassle-free highway RTO checkpoints and insurance validation.
        </p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 20px;">
        <div style="background: rgba(255,255,255,0.03); padding: 25px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.05); text-align: center;">
          <i class="fas fa-id-card" style="font-size: 2rem; color: #f59e0b; margin-bottom: 15px;"></i>
          <h4 style="font-size: 1.1rem; font-weight: 700; color: #fff; margin-bottom: 8px;">Vehicle RC Book</h4>
          <p style="font-size: 0.85rem; color: #94a3b8;">Photocopy or digital MParivahan copy of Registration Certificate.</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); padding: 25px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.05); text-align: center;">
          <i class="fas fa-file-contract" style="font-size: 2rem; color: #f59e0b; margin-bottom: 15px;"></i>
          <h4 style="font-size: 1.1rem; font-weight: 700; color: #fff; margin-bottom: 8px;">Insurance Policy</h4>
          <p style="font-size: 0.85rem; color: #94a3b8;">Valid bike insurance policy photocopy for transit coverage.</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); padding: 25px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.05); text-align: center;">
          <i class="fas fa-user-shield" style="font-size: 2rem; color: #f59e0b; margin-bottom: 15px;"></i>
          <h4 style="font-size: 1.1rem; font-weight: 700; color: #fff; margin-bottom: 8px;">Owner Photo ID</h4>
          <p style="font-size: 0.85rem; color: #94a3b8;">Aadhaar Card, Driving License, or Passport copy of owner.</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); padding: 25px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.05); text-align: center;">
          <i class="fas fa-file-invoice" style="font-size: 2rem; color: #f59e0b; margin-bottom: 15px;"></i>
          <h4 style="font-size: 1.1rem; font-weight: 700; color: #fff; margin-bottom: 8px;">Consignment Note</h4>
          <p style="font-size: 0.85rem; color: #94a3b8;">Official Bilty / LR copy generated by Shree Ashirwad Packers.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 8: Route Network from Aurangabad -->
  <section style="padding: 60px 0; background: #0f172a; color: #ffffff;">
    <div class="container">
      <div style="text-align: center; max-width: 800px; margin: 0 auto 40px;">
        <h2 style="font-size: 2rem; font-weight: 800; color: #ffffff; margin-bottom: 12px;">
          Popular Bike Shifting Routes from <span style="color: #f59e0b;">Aurangabad (Bihar)</span>
        </h2>
        <p style="font-size: 0.95rem; color: #94a3b8;">
          Daily scheduled container trucks connecting Aurangabad to top metropolitan hubs.
        </p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 15px; font-size: 0.9rem;">
        <div style="background: rgba(255,255,255,0.03); padding: 14px 18px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.05); color: #cbd5e1;">
          <i class="fas fa-truck-moving" style="color: #f59e0b; margin-right: 8px;"></i> Aurangabad to Patna
        </div>
        <div style="background: rgba(255,255,255,0.03); padding: 14px 18px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.05); color: #cbd5e1;">
          <i class="fas fa-truck-moving" style="color: #f59e0b; margin-right: 8px;"></i> Aurangabad to Ranchi
        </div>
        <div style="background: rgba(255,255,255,0.03); padding: 14px 18px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.05); color: #cbd5e1;">
          <i class="fas fa-truck-moving" style="color: #f59e0b; margin-right: 8px;"></i> Aurangabad to Delhi NCR
        </div>
        <div style="background: rgba(255,255,255,0.03); padding: 14px 18px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.05); color: #cbd5e1;">
          <i class="fas fa-truck-moving" style="color: #f59e0b; margin-right: 8px;"></i> Aurangabad to Kolkata
        </div>
        <div style="background: rgba(255,255,255,0.03); padding: 14px 18px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.05); color: #cbd5e1;">
          <i class="fas fa-truck-moving" style="color: #f59e0b; margin-right: 8px;"></i> Aurangabad to Bangalore
        </div>
        <div style="background: rgba(255,255,255,0.03); padding: 14px 18px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.05); color: #cbd5e1;">
          <i class="fas fa-truck-moving" style="color: #f59e0b; margin-right: 8px;"></i> Aurangabad to Mumbai
        </div>
        <div style="background: rgba(255,255,255,0.03); padding: 14px 18px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.05); color: #cbd5e1;">
          <i class="fas fa-truck-moving" style="color: #f59e0b; margin-right: 8px;"></i> Aurangabad to Hyderabad
        </div>
        <div style="background: rgba(255,255,255,0.03); padding: 14px 18px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.05); color: #cbd5e1;">
          <i class="fas fa-truck-moving" style="color: #f59e0b; margin-right: 8px;"></i> Aurangabad to Pune
        </div>
      </div>
    </div>
  </section>

  <!-- Section 9: Consumer Warning & Avoiding Unlicensed Movers -->
  <section style="padding: 60px 0; background: #0b132b; color: #ffffff;">
    <div class="container">
      <div style="background: rgba(225, 29, 72, 0.1); border: 1.5px solid rgba(225, 29, 72, 0.3); border-radius: 16px; padding: 40px;">
        <div style="display: flex; gap: 20px; align-items: flex-start;">
          <div style="font-size: 2.5rem; color: #e11d48;"><i class="fas fa-exclamation-triangle"></i></div>
          <div>
            <h3 style="font-size: 1.4rem; font-weight: 700; color: #ffffff; margin-bottom: 12px;">
              Beware of Fake & Unregistered Bike Movers in Aurangabad
            </h3>
            <p style="font-size: 0.95rem; color: #cbd5e1; line-height: 1.7; margin-bottom: 15px;">
              Unverified operators often lure customers with ridiculously low initial quotes, only to demand hidden unloading charges later or transport vehicles without basic bubble wrap. Always demand an official GST invoice, valid LR bill, and IBA-approved credentials before handing over your motorcycle key.
            </p>
            <div style="font-weight: 700; color: #f59e0b; font-size: 0.95rem;">
              Shree Ashirwad Packers and Movers provides 100% written quotes with zero hidden fees.
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 10: Dynamic JSON-LD FAQ Schema + HTML Accordion -->
  <?php
  $faqs = [
    [
      "question" => "How much does bike transportation in Aurangabad cost?",
      "answer" => "Bike transportation charges in Aurangabad range from ₹2,200 to ₹4,500 for regional relocations (under 400 km) and ₹4,800 to ₹9,500 for long-distance interstate shifting depending on bike model and destination."
    ],
    [
      "question" => "What documents are required for motorcycle shifting from Aurangabad?",
      "answer" => "You need to submit a photocopy of your Vehicle Registration Certificate (RC), valid Bike Insurance policy, and a Government Photo ID (Aadhaar or Driving License)."
    ],
    [
      "question" => "Is my bike insured during transit from Aurangabad?",
      "answer" => "Yes. We offer optional full transit insurance covering physical damage due to accidents, fire, or transit risks with official policy documentation."
    ],
    [
      "question" => "How many days will it take to deliver my bike from Aurangabad?",
      "answer" => "Regional deliveries take 24 to 48 hours, while interstate transit to major metros like Delhi, Bangalore, or Mumbai takes between 3 to 6 days."
    ],
    [
      "question" => "Do you provide door-to-door pickup in Aurangabad?",
      "answer" => "Yes, our team provides complete doorstep pickup from your home in Aurangabad and doorstep delivery at your destination address."
    ]
  ];
  ?>

  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "mainEntity": [
      <?php 
      $faq_json = [];
      foreach ($faqs as $faq) {
        $faq_json[] = '{
          "@type": "Question",
          "name": ' . json_encode($faq['question']) . ',
          "acceptedAnswer": {
            "@type": "Answer",
            "text": ' . json_encode($faq['answer']) . '
          }
        }';
      }
      echo implode(',', $faq_json);
      ?>
    ]
  }
  </script>

  <section style="padding: 60px 0; background: #0f172a; color: #ffffff;">
    <div class="container">
      <div style="text-align: center; max-width: 800px; margin: 0 auto 40px;">
        <h2 style="font-size: 2rem; font-weight: 800; color: #ffffff; margin-bottom: 12px;">
          Frequently Asked Questions (<span style="color: #f59e0b;">FAQs</span>)
        </h2>
        <p style="font-size: 0.95rem; color: #94a3b8;">
          Clear answers regarding two-wheeler transport services in Aurangabad.
        </p>
      </div>

      <div style="max-width: 850px; margin: 0 auto; display: grid; gap: 15px;">
        <?php foreach ($faqs as $faq): ?>
          <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 10px; padding: 22px 25px;">
            <h3 style="font-size: 1.1rem; font-weight: 700; color: #f59e0b; margin-bottom: 8px;">
              <i class="far fa-question-circle" style="margin-right: 8px;"></i> <?php echo htmlspecialchars($faq['question']); ?>
            </h3>
            <p style="font-size: 0.95rem; color: #cbd5e1; line-height: 1.6; margin: 0;">
              <?php echo htmlspecialchars($faq['answer']); ?>
            </p>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- Section 11: Call to Action Banner -->
  <section style="padding: 60px 0; background: linear-gradient(135deg, #1c2541 0%, #0b132b 100%); text-align: center; color: #ffffff; border-top: 1px solid rgba(245, 158, 11, 0.3);">
    <div class="container">
      <h2 style="font-size: 2.4rem; font-weight: 800; margin-bottom: 15px;">
        Book Safe Bike Transportation in <span style="color: #f59e0b;">Aurangabad Today</span>
      </h2>
      <p style="font-size: 1.1rem; color: #94a3b8; max-width: 700px; margin: 0 auto 30px;">
        Protect your motorcycle with Bihar's most trusted logistics partner. Get free doorstep inspection and instant cost estimate.
      </p>

      <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap;">
        <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Now" style="padding: 16px 36px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1.05rem; text-decoration: none; box-shadow: 0 4px 20px rgba(225, 29, 72, 0.5);">
          <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call <?php echo SITE_PHONE; ?>
        </a>
        <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20a%20bike%20shifting%20quote%20for%20Aurangabad." title="WhatsApp" target="_blank" style="padding: 16px 36px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1.05rem; text-decoration: none; box-shadow: 0 4px 20px rgba(16, 185, 129, 0.5);">
          <i class="fab fa-whatsapp" style="margin-right: 8px;"></i> Instant WhatsApp Estimate
        </a>
      </div>
    </div>
  </section>

</main>

<script>
function sendHeroWhatsAppLead(event, form) {
  event.preventDefault();
  var name = form.querySelector('[name="name"]').value;
  var phone = form.querySelector('[name="phone"]').value;
  var moveFrom = form.querySelector('[name="move_from"]').value;
  var moveTo = form.querySelector('[name="move_to"]').value;
  
  var message = "Hello Shree Ashirwad Packers & Movers,\n\nI would like to request a Bike Shipping Quote for Aurangabad:\n- Name: " + name + "\n- Phone: " + phone + "\n- Pickup Location: " + moveFrom + "\n- Moving To: " + moveTo;
  
  var whatsappUrl = "https://api.whatsapp.com/send?phone=918409531615&text=" + encodeURIComponent(message);
  window.location.href = whatsappUrl;
}
</script>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
