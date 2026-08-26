<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "Bike Transportation in Bangalore | Safe Two-Wheeler Shifting Bengaluru";
$page_desc = "Planning bike transportation in Bangalore (Bengaluru, KA-01 to KA-05)? Get safe, insured, and doorstep motorcycle shifting. High-quality multi-layer packing and real-time tracking across Koramangala, Indiranagar, Whitefield, HSR Layout, and Electronic City.";
$page_keywords = "bike transportation in bangalore, best bike transportation in bangalore, affordable bike transportation in bangalore, packers and movers bengaluru, bike shifting whitefield, bike transport koramangala, hsr layout bike shipping, doorstep bike transportation bangalore";
$canonical_url = "https://shreeashirwadpackersandmovers.com/pages/bike-transportation-in-bangalore.php";

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
            BIKE TRANSPORTATION BANGALORE RELOCATION SPECIALISTS
          </span>
          <h1 style="font-size: 2.7rem; font-weight: 800; line-height: 1.2; margin-bottom: 20px; color: #ffffff;">
            Professional <span style="color: #f59e0b;">Bike Transportation in Bangalore</span>
          </h1>
          <p style="font-size: 1.12rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 25px;">
            Planning bike transportation in Bangalore (Bengaluru)? Get safe, insured, and doorstep motorcycle shifting. High-quality multi-layer packing and real-time tracking across Koramangala, Indiranagar, Whitefield, HSR Layout, Electronic City, and Bellandur.
          </p>

          <div style="display: flex; gap: 15px; flex-wrap: wrap; margin-bottom: 30px;">
            <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Now" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
              <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call Now: <?php echo SITE_PHONE; ?>
            </a>
            <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20a%20bike%20shifting%20quote%20for%20Bangalore." title="Chat on WhatsApp" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
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
          <h2 style="font-size: 1.4rem; color: #ffffff; margin-bottom: 8px; font-weight: 700; text-align: center;">Get Bangalore Bike Quote</h2>
          <p style="font-size: 0.85rem; color: #94a3b8; text-align: center; margin-bottom: 20px;">Receive transparent cost estimation on WhatsApp in 2 minutes</p>

          <form action="#" method="POST" onsubmit="sendHeroWhatsAppLead(event, this);">
            <div style="margin-bottom: 14px;">
              <input type="text" name="name" class="form-control" placeholder="Your Full Name" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="margin-bottom: 14px;">
              <input type="tel" name="phone" class="form-control" placeholder="10-Digit Phone Number" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 10px; margin-bottom: 14px;">
              <input type="text" name="move_from" class="form-control" value="Bangalore" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
              <input type="text" name="move_to" class="form-control" placeholder="Moving To (City/Area)" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <button type="submit" style="width: 100%; padding: 14px; background: linear-gradient(135deg, #d32f2f 0%, #f59e0b 100%); color: #ffffff; border: none; border-radius: 50px; font-weight: 700; font-size: 1rem; cursor: pointer;">
              Get Instant Bike Quote &rarr;
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
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; margin-bottom: 5px;">24,800+</div>
          <div style="font-size: 0.9rem; color: #94a3b8; font-weight: 600;">Bikes Transported</div>
        </div>
        <div style="padding: 20px; background: rgba(255,255,255,0.03); border-radius: 12px; border: 1px solid rgba(255,255,255,0.05);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; margin-bottom: 5px;">99.7%</div>
          <div style="font-size: 0.9rem; color: #94a3b8; font-weight: 600;">On-Time Delivery Rate</div>
        </div>
        <div style="padding: 20px; background: rgba(255,255,255,0.03); border-radius: 12px; border: 1px solid rgba(255,255,255,0.05);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; margin-bottom: 5px;">100%</div>
          <div style="font-size: 0.9rem; color: #94a3b8; font-weight: 600;">Transit Insurance Protection</div>
        </div>
        <div style="padding: 20px; background: rgba(255,255,255,0.03); border-radius: 12px; border: 1px solid rgba(255,255,255,0.05);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; margin-bottom: 5px;">4.9/5</div>
          <div style="font-size: 0.9rem; color: #94a3b8; font-weight: 600;">Verified User Rating</div>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 3: Comprehensive Bike Shifting Services in Bangalore -->
  <section style="padding: 60px 0; background: #0b132b; color: #ffffff;">
    <div class="container">
      <div style="text-align: center; max-width: 800px; margin: 0 auto 50px;">
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin-bottom: 15px;">
          Premium Two-Wheeler Logistics Services in <span style="color: #f59e0b;">Bangalore</span>
        </h2>
        <p style="font-size: 1rem; color: #94a3b8; line-height: 1.7;">
          Shree Ashirwad Packers and Movers offers specialized two-wheeler transportation from Bangalore across all tech corridors including Whitefield, Electronic City, Bellandur, Marathahalli, Koramangala, and HSR Layout to major national destinations.
        </p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 30px;">
        
        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 14px; padding: 30px;">
          <div style="width: 50px; height: 50px; background: rgba(245, 158, 11, 0.1); border-radius: 10px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
            <i class="fas fa-motorcycle" style="font-size: 1.5rem; color: #f59e0b;"></i>
          </div>
          <h3 style="font-size: 1.3rem; font-weight: 700; color: #ffffff; margin-bottom: 12px;">Standard Commuter Shifting</h3>
          <p style="font-size: 0.95rem; color: #94a3b8; line-height: 1.6;">
            Safe shifting for daily commuters, scooters, and 100cc-150cc motorcycles with 5-layer bubble packaging and mirror protection.
          </p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 14px; padding: 30px;">
          <div style="width: 50px; height: 50px; background: rgba(245, 158, 11, 0.1); border-radius: 10px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
            <i class="fas fa-shield-alt" style="font-size: 1.5rem; color: #f59e0b;"></i>
          </div>
          <h3 style="font-size: 1.3rem; font-weight: 700; color: #ffffff; margin-bottom: 12px;">Premium & Cruiser Logistics</h3>
          <p style="font-size: 0.95rem; color: #94a3b8; line-height: 1.6;">
            Customized wooden crating and 7-layer shock-absorption wrapping for Royal Enfield, Triumph, BMW, and sports bikes with zero scratches.
          </p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 14px; padding: 30px;">
          <div style="width: 50px; height: 50px; background: rgba(245, 158, 11, 0.1); border-radius: 10px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
            <i class="fas fa-truck-loading" style="font-size: 1.5rem; color: #f59e0b;"></i>
          </div>
          <h3 style="font-size: 1.3rem; font-weight: 700; color: #ffffff; margin-bottom: 12px;">Door-to-Door Pickup</h3>
          <p style="font-size: 0.95rem; color: #94a3b8; line-height: 1.6;">
            Free doorstep pickup from any apartment or gated community in Bengaluru straight to destination address anywhere in India.
          </p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 14px; padding: 30px;">
          <div style="width: 50px; height: 50px; background: rgba(245, 158, 11, 0.1); border-radius: 10px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
            <i class="fas fa-file-contract" style="font-size: 1.5rem; color: #f59e0b;"></i>
          </div>
          <h3 style="font-size: 1.3rem; font-weight: 700; color: #ffffff; margin-bottom: 12px;">Comprehensive Insurance</h3>
          <p style="font-size: 0.95rem; color: #94a3b8; line-height: 1.6;">
            Full financial protection against highway accidents, weather hazards, or unexpected incidents with hassle-free claim assistance.
          </p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 14px; padding: 30px;">
          <div style="width: 50px; height: 50px; background: rgba(245, 158, 11, 0.1); border-radius: 10px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
            <i class="fas fa-route" style="font-size: 1.5rem; color: #f59e0b;"></i>
          </div>
          <h3 style="font-size: 1.3rem; font-weight: 700; color: #ffffff; margin-bottom: 12px;">Real-Time GPS Tracking</h3>
          <p style="font-size: 0.95rem; color: #94a3b8; line-height: 1.6;">
            Get continuous WhatsApp location updates and driver tracking details from dispatch at Bangalore hub to final doorstep delivery.
          </p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 14px; padding: 30px;">
          <div style="width: 50px; height: 50px; background: rgba(245, 158, 11, 0.1); border-radius: 10px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
            <i class="fas fa-boxes" style="font-size: 1.5rem; color: #f59e0b;"></i>
          </div>
          <h3 style="font-size: 1.3rem; font-weight: 700; color: #ffffff; margin-bottom: 12px;">Bike + Luggage Combo Shifting</h3>
          <p style="font-size: 0.95rem; color: #94a3b8; line-height: 1.6;">
            Consolidated shipping options allowing riders to send riding gear, accessories, and personal baggage alongside their motorcycle.
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
          Estimated Bike Transportation Rates from <span style="color: #f59e0b;">Bangalore</span>
        </h2>
        <p style="font-size: 0.95rem; color: #94a3b8;">
          Clear pricing guidelines based on travel distance and bike displacement. No hidden charges.
        </p>
      </div>

      <div style="overflow-x: auto; background: rgba(255,255,255,0.02); border-radius: 12px; border: 1px solid rgba(255,255,255,0.08);">
        <table style="width: 100%; border-collapse: collapse; text-align: left; font-size: 0.95rem;">
          <thead>
            <tr style="background: rgba(245, 158, 11, 0.15); color: #f59e0b; border-bottom: 1px solid rgba(255,255,255,0.1);">
              <th style="padding: 16px 20px; font-weight: 700;">Destination Distance</th>
              <th style="padding: 16px 20px; font-weight: 700;">Scooty / 100cc-125cc</th>
              <th style="padding: 16px 20px; font-weight: 700;">150cc - 250cc Bike</th>
              <th style="padding: 16px 20px; font-weight: 700;">Cruiser / Sports Bike</th>
              <th style="padding: 16px 20px; font-weight: 700;">Transit Duration</th>
            </tr>
          </thead>
          <tbody style="color: #cbd5e1;">
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.05);">
              <td style="padding: 16px 20px; font-weight: 600; color: #fff;">Within 350 km (Chennai/Mysore/Coimbatore)</td>
              <td style="padding: 16px 20px;">₹2,200 - ₹3,500</td>
              <td style="padding: 16px 20px;">₹2,800 - ₹4,200</td>
              <td style="padding: 16px 20px;">₹4,200 - ₹6,000</td>
              <td style="padding: 16px 20px;">24 - 48 Hours</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.05);">
              <td style="padding: 16px 20px; font-weight: 600; color: #fff;">350 km - 800 km (Hyderabad/Goa/Kochi)</td>
              <td style="padding: 16px 20px;">₹3,500 - ₹5,000</td>
              <td style="padding: 16px 20px;">₹4,200 - ₹6,200</td>
              <td style="padding: 16px 20px;">₹6,000 - ₹8,500</td>
              <td style="padding: 16px 20px;">2 - 4 Days</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.05);">
              <td style="padding: 16px 20px; font-weight: 600; color: #fff;">800 km - 1600 km (Pune/Mumbai/Vizag)</td>
              <td style="padding: 16px 20px;">₹4,800 - ₹6,800</td>
              <td style="padding: 16px 20px;">₹5,500 - ₹7,800</td>
              <td style="padding: 16px 20px;">₹8,000 - ₹11,000</td>
              <td style="padding: 16px 20px;">3 - 5 Days</td>
            </tr>
            <tr>
              <td style="padding: 16px 20px; font-weight: 600; color: #fff;">1600 km+ (Delhi NCR/Kolkata/Patna)</td>
              <td style="padding: 16px 20px;">₹6,500 - ₹8,800</td>
              <td style="padding: 16px 20px;">₹7,500 - ₹10,200</td>
              <td style="padding: 16px 20px;">₹10,500 - ₹15,000</td>
              <td style="padding: 16px 20px;">5 - 7 Days</td>
            </tr>
          </tbody>
        </table>
      </div>
      <p style="font-size: 0.85rem; color: #64748b; margin-top: 15px; text-align: center;">
        * Indicative prices. Final quote includes GST, transit policy, and door pickup across Bengaluru.
      </p>
    </div>
  </section>

  <!-- Section 5: Step-by-Step Relocation Workflow -->
  <section style="padding: 60px 0; background: #0b132b; color: #ffffff;">
    <div class="container">
      <div style="text-align: center; max-width: 800px; margin: 0 auto 50px;">
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin-bottom: 15px;">
          Our 5-Step Damage-Free Bike Transport Process
        </h2>
        <p style="font-size: 1rem; color: #94a3b8;">
          Rigorous quality standards from pickup in Bengaluru to doorstep delivery across India.
        </p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(5, 1fr); gap: 20px;">
        <div style="background: rgba(255,255,255,0.03); padding: 25px 20px; border-radius: 12px; border-top: 3px solid #f59e0b; text-align: center;">
          <div style="font-size: 1.8rem; font-weight: 800; color: #f59e0b; margin-bottom: 10px;">01</div>
          <h4 style="font-size: 1.1rem; font-weight: 700; color: #fff; margin-bottom: 8px;">Pre-Shift Inspection</h4>
          <p style="font-size: 0.85rem; color: #94a3b8; line-height: 1.5;">Physical verification of bike body, scratches, and fuel level record.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); padding: 25px 20px; border-radius: 12px; border-top: 3px solid #f59e0b; text-align: center;">
          <div style="font-size: 1.8rem; font-weight: 800; color: #f59e0b; margin-bottom: 10px;">02</div>
          <h4 style="font-size: 1.1rem; font-weight: 700; color: #fff; margin-bottom: 8px;">Multi-Layer Wrapping</h4>
          <p style="font-size: 0.85rem; color: #94a3b8; line-height: 1.5;">7-layer protection using foam, bubble wrap, corrugated sheets, and film seal.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); padding: 25px 20px; border-radius: 12px; border-top: 3px solid #f59e0b; text-align: center;">
          <div style="font-size: 1.8rem; font-weight: 800; color: #f59e0b; margin-bottom: 10px;">03</div>
          <h4 style="font-size: 1.1rem; font-weight: 700; color: #fff; margin-bottom: 8px;">Carrier Anchorage</h4>
          <p style="font-size: 0.85rem; color: #94a3b8; line-height: 1.5;">Ramp loading into enclosed container truck with nylon belt tie-down anchorage.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); padding: 25px 20px; border-radius: 12px; border-top: 3px solid #f59e0b; text-align: center;">
          <div style="font-size: 1.8rem; font-weight: 800; color: #f59e0b; margin-bottom: 10px;">04</div>
          <h4 style="font-size: 1.1rem; font-weight: 700; color: #fff; margin-bottom: 8px;">Highway Transit</h4>
          <p style="font-size: 0.85rem; color: #94a3b8; line-height: 1.5;">Real-time GPS tracking with regular status updates sent to WhatsApp.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); padding: 25px 20px; border-radius: 12px; border-top: 3px solid #f59e0b; text-align: center;">
          <div style="font-size: 1.8rem; font-weight: 800; color: #f59e0b; margin-bottom: 10px;">05</div>
          <h4 style="font-size: 1.1rem; font-weight: 700; color: #fff; margin-bottom: 8px;">Doorstep Handover</h4>
          <p style="font-size: 0.85rem; color: #94a3b8; line-height: 1.5;">Delivery at destination address, joint condition report verification, and key handover.</p>
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
            Heavy-Duty 7-Layer Bike Packaging Standard
          </h2>
          <p style="font-size: 1rem; color: #cbd5e1; line-height: 1.7; margin-bottom: 20px;">
            We protect your valuable two-wheeler from scratches, dents, and environmental exposure during long highway journeys with our 7-layer defense system:
          </p>

          <ul style="list-style: none; padding: 0; margin: 0; color: #94a3b8; font-size: 0.95rem; line-height: 2;">
            <li style="display: flex; align-items: center;"><i class="fas fa-check-circle" style="color: #f59e0b; margin-right: 10px;"></i> <strong>Layer 1:</strong> Anti-scratch foam sheets for painted panels & tank.</li>
            <li style="display: flex; align-items: center;"><i class="fas fa-check-circle" style="color: #f59e0b; margin-right: 10px;"></i> <strong>Layer 2:</strong> High-grade air bubble wrapping for vibration cushioning.</li>
            <li style="display: flex; align-items: center;"><i class="fas fa-check-circle" style="color: #f59e0b; margin-right: 10px;"></i> <strong>Layer 3:</strong> Heavy corrugated cardboard encasing.</li>
            <li style="display: flex; align-items: center;"><i class="fas fa-check-circle" style="color: #f59e0b; margin-right: 10px;"></i> <strong>Layer 4:</strong> Waterproof stretch plastic film seal.</li>
            <li style="display: flex; align-items: center;"><i class="fas fa-check-circle" style="color: #f59e0b; margin-right: 10px;"></i> <strong>Layer 5:</strong> Corner foam protectors for indicators, brake levers & mirrors.</li>
          </ul>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 16px; padding: 35px;">
          <h3 style="font-size: 1.4rem; font-weight: 700; color: #ffffff; margin-bottom: 20px; text-align: center;">Mandatory Pre-Transit Checklist</h3>
          <div style="display: grid; gap: 15px; font-size: 0.9rem; color: #cbd5e1;">
            <div style="background: rgba(0,0,0,0.3); padding: 12px 16px; border-radius: 8px;">✓ Drain fuel tank down to under 1 liter as per safety norms.</div>
            <div style="background: rgba(0,0,0,0.3); padding: 12px 16px; border-radius: 8px;">✓ Remove personal luggage, helmet boxes, and unanchored accessories.</div>
            <div style="background: rgba(0,0,0,0.3); padding: 12px 16px; border-radius: 8px;">✓ Check tire air pressure and ensure steering lock functions smoothly.</div>
            <div style="background: rgba(0,0,0,0.3); padding: 12px 16px; border-radius: 8px;">✓ Record 360-degree photos/videos before loading.</div>
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
          Required Documentation for Bike Shifting from Bangalore
        </h2>
        <p style="font-size: 0.95rem; color: #94a3b8;">
          Essential documents for smooth interstate RTO clearance and transit insurance coverage.
        </p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 20px;">
        <div style="background: rgba(255,255,255,0.03); padding: 25px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.05); text-align: center;">
          <i class="fas fa-id-card" style="font-size: 2rem; color: #f59e0b; margin-bottom: 15px;"></i>
          <h4 style="font-size: 1.1rem; font-weight: 700; color: #fff; margin-bottom: 8px;">Vehicle RC Copy</h4>
          <p style="font-size: 0.85rem; color: #94a3b8;">Registration Certificate copy (KA RTO registered or active RC).</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); padding: 25px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.05); text-align: center;">
          <i class="fas fa-file-contract" style="font-size: 2rem; color: #f59e0b; margin-bottom: 15px;"></i>
          <h4 style="font-size: 1.1rem; font-weight: 700; color: #fff; margin-bottom: 8px;">Bike Insurance</h4>
          <p style="font-size: 0.85rem; color: #94a3b8;">Copy of active two-wheeler insurance policy.</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); padding: 25px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.05); text-align: center;">
          <i class="fas fa-user-shield" style="font-size: 2rem; color: #f59e0b; margin-bottom: 15px;"></i>
          <h4 style="font-size: 1.1rem; font-weight: 700; color: #fff; margin-bottom: 8px;">Owner ID Proof</h4>
          <p style="font-size: 0.85rem; color: #94a3b8;">Aadhaar Card, DL, or Passport copy of the vehicle owner.</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); padding: 25px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.05); text-align: center;">
          <i class="fas fa-file-invoice" style="font-size: 2rem; color: #f59e0b; margin-bottom: 15px;"></i>
          <h4 style="font-size: 1.1rem; font-weight: 700; color: #fff; margin-bottom: 8px;">Bilty / LR Bill</h4>
          <p style="font-size: 0.85rem; color: #94a3b8;">Consignment Lorry Receipt issued by Shree Ashirwad Packers.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 8: Route Network from Bangalore -->
  <section style="padding: 60px 0; background: #0f172a; color: #ffffff;">
    <div class="container">
      <div style="text-align: center; max-width: 800px; margin: 0 auto 40px;">
        <h2 style="font-size: 2rem; font-weight: 800; color: #ffffff; margin-bottom: 12px;">
          Major Interstate Bike Transport Routes from <span style="color: #f59e0b;">Bangalore</span>
        </h2>
        <p style="font-size: 0.95rem; color: #94a3b8;">
          Daily container services connecting Bangalore to all major metropolitan hubs across India.
        </p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 15px; font-size: 0.9rem;">
        <div style="background: rgba(255,255,255,0.03); padding: 14px 18px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.05); color: #cbd5e1;">
          <i class="fas fa-truck-moving" style="color: #f59e0b; margin-right: 8px;"></i> Bangalore to Pune / Mumbai
        </div>
        <div style="background: rgba(255,255,255,0.03); padding: 14px 18px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.05); color: #cbd5e1;">
          <i class="fas fa-truck-moving" style="color: #f59e0b; margin-right: 8px;"></i> Bangalore to Delhi NCR
        </div>
        <div style="background: rgba(255,255,255,0.03); padding: 14px 18px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.05); color: #cbd5e1;">
          <i class="fas fa-truck-moving" style="color: #f59e0b; margin-right: 8px;"></i> Bangalore to Hyderabad
        </div>
        <div style="background: rgba(255,255,255,0.03); padding: 14px 18px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.05); color: #cbd5e1;">
          <i class="fas fa-truck-moving" style="color: #f59e0b; margin-right: 8px;"></i> Bangalore to Chennai
        </div>
        <div style="background: rgba(255,255,255,0.03); padding: 14px 18px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.05); color: #cbd5e1;">
          <i class="fas fa-truck-moving" style="color: #f59e0b; margin-right: 8px;"></i> Bangalore to Kolkata
        </div>
        <div style="background: rgba(255,255,255,0.03); padding: 14px 18px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.05); color: #cbd5e1;">
          <i class="fas fa-truck-moving" style="color: #f59e0b; margin-right: 8px;"></i> Bangalore to Ahmedabad
        </div>
        <div style="background: rgba(255,255,255,0.03); padding: 14px 18px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.05); color: #cbd5e1;">
          <i class="fas fa-truck-moving" style="color: #f59e0b; margin-right: 8px;"></i> Bangalore to Patna / Ranchi
        </div>
        <div style="background: rgba(255,255,255,0.03); padding: 14px 18px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.05); color: #cbd5e1;">
          <i class="fas fa-truck-moving" style="color: #f59e0b; margin-right: 8px;"></i> Bangalore to Kochi / Trivandrum
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
              Avoid Unregistered Bike Movers in Bengaluru
            </h3>
            <p style="font-size: 0.95rem; color: #cbd5e1; line-height: 1.7; margin-bottom: 15px;">
              Beware of unverified local transporters operating without fixed hubs or GST documentation. Cheap initial quotes often turn into hidden demands during delivery or result in vehicle damage due to open-truck transportation. Always choose a verified, GST-registered company like Shree Ashirwad Packers and Movers.
            </p>
            <div style="font-weight: 700; color: #f59e0b; font-size: 0.95rem;">
              Shree Ashirwad Packers provides 100% written quotes, IBA-compliant GST bills, and insured delivery.
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
      "question" => "How much does bike transportation in Bangalore cost?",
      "answer" => "Bike transportation charges from Bangalore range from ₹2,200 to ₹3,800 for nearby cities (Chennai, Mysore) and ₹4,800 to ₹10,200 for long-distance relocations to Delhi, Mumbai, or Kolkata."
    ],
    [
      "question" => "Which areas in Bangalore do you provide doorstep bike pickup?",
      "answer" => "We provide free doorstep pickup across Koramangala, Indiranagar, Whitefield, HSR Layout, Electronic City, Bellandur, Marathahalli, BTM Layout, Yelahanka, and Banashankari."
    ],
    [
      "question" => "What documents are required for motorcycle shipping from Bengaluru?",
      "answer" => "Required documents include a photocopy of your Vehicle Registration Certificate (RC), active bike insurance copy, and a government photo ID (Aadhaar or Driving License)."
    ],
    [
      "question" => "Is my motorcycle covered under transit insurance during shifting?",
      "answer" => "Yes. We offer complete transit insurance policies covering physical damages caused by accident, transit risk, or fire with official documentation."
    ],
    [
      "question" => "How many days does bike delivery take from Bangalore to Delhi or Mumbai?",
      "answer" => "Transit to Mumbai or Pune takes 3 to 4 days, while long-distance delivery to Delhi NCR, Patna, or Kolkata takes 5 to 7 days."
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
          Answers to common questions regarding bike transport in Bangalore.
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
        Book Safe Bike Transportation in <span style="color: #f59e0b;">Bangalore Today</span>
      </h2>
      <p style="font-size: 1.1rem; color: #94a3b8; max-width: 700px; margin: 0 auto 30px;">
        Trust Bengaluru's leading bike relocation experts. Get free door inspection and instant cost estimate.
      </p>

      <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap;">
        <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Now" style="padding: 16px 36px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1.05rem; text-decoration: none; box-shadow: 0 4px 20px rgba(225, 29, 72, 0.5);">
          <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call <?php echo SITE_PHONE; ?>
        </a>
        <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20a%20bike%20shifting%20quote%20for%20Bangalore." title="WhatsApp" target="_blank" style="padding: 16px 36px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1.05rem; text-decoration: none; box-shadow: 0 4px 20px rgba(16, 185, 129, 0.5);">
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
  
  var message = "Hello Shree Ashirwad Packers & Movers,\n\nI would like to request a Bike Shipping Quote for Bangalore:\n- Name: " + name + "\n- Phone: " + phone + "\n- Pickup Location: " + moveFrom + "\n- Moving To: " + moveTo;
  
  var whatsappUrl = "https://api.whatsapp.com/send?phone=918409531615&text=" + encodeURIComponent(message);
  window.location.href = whatsappUrl;
}
</script>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>

