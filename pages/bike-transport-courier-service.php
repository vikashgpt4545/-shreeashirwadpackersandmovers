<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "Express Bike Transport Courier Service in India | Doorstep Pickup";
$page_desc = "Door-to-door express bike transport courier service across India. Fast motorcycle shipping, 7-layer bubble wrapping, real-time tracking, and 100% transit insurance.";
$page_keywords = "bike transport courier service, express bike shipping, motorcycle courier doorstep pickup, door to door bike transport, fast bike packers movers";
$canonical_url = "https://shreeashirwadpackersandmovers.com/pages/bike-transport-courier-service.php";

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
            EXPRESS DOORSTEP COURIER RELOCATION
          </span>
          <h1 style="font-size: 2.7rem; font-weight: 800; line-height: 1.2; margin-bottom: 20px; color: #ffffff;">
            Express <span style="color: #f59e0b;">Bike Transport Courier Service</span>
          </h1>
          <p style="font-size: 1.12rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 25px;">
            Need quick, reliable door-to-door courier shipping for your motorcycle or scooter? Enjoy 100% doorstep collection, 7-layer bubble wrapping, GPS container truck transit, and hassle-free destination unboxing with Shree Ashirwad Packers.
          </p>

          <div style="display: flex; gap: 15px; flex-wrap: wrap; margin-bottom: 30px;">
            <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Now" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
              <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call Now: <?php echo SITE_PHONE; ?>
            </a>
            <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20a%20bike%20courier%20service%20quote." title="Chat on WhatsApp" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
              <i class="fab fa-whatsapp" style="margin-right: 8px;"></i> Chat on WhatsApp
            </a>
          </div>

          <div style="display: flex; gap: 20px; font-size: 0.9rem; color: #94a3b8;">
            <span><strong style="color: #f59e0b;">Express</strong> Pickup Service</span>
            <span><strong style="color: #f59e0b;">7-Layer</strong> Protective Shield</span>
            <span><strong style="color: #f59e0b;">100% Insured</strong> Doorstep Delivery</span>
          </div>
        </div>

        <!-- Hero Lead Form Column -->
        <div class="hero-form-card" style="background: rgba(255, 255, 255, 0.05); backdrop-filter: blur(10px); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 16px; padding: 30px; box-shadow: 0 15px 35px rgba(0,0,0,0.4);">
          <h2 style="font-size: 1.4rem; color: #ffffff; margin-bottom: 8px; font-weight: 700; text-align: center;">Get Bike Courier Service Quote</h2>
          <p style="font-size: 0.85rem; color: #94a3b8; text-align: center; margin-bottom: 20px;">Receive transparent cost estimation on WhatsApp in 2 minutes</p>

          <form action="#" method="POST" onsubmit="sendHeroWhatsAppLead(event, this);">
            <div style="margin-bottom: 14px;">
              <input type="text" name="name" class="form-control" placeholder="Your Full Name" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="margin-bottom: 14px;">
              <input type="tel" name="phone" class="form-control" placeholder="10-Digit Phone Number" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 10px; margin-bottom: 14px;">
              <input type="text" name="move_from" class="form-control" placeholder="Pickup City" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
              <input type="text" name="move_to" class="form-control" placeholder="Drop Destination" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <button type="submit" style="width: 100%; padding: 14px; background: linear-gradient(135deg, #d32f2f 0%, #f59e0b 100%); color: #ffffff; border: none; border-radius: 50px; font-weight: 700; font-size: 1rem; cursor: pointer;">
              Get Instant Estimate Now &rarr;
            </button>
          </form>
        </div>

      </div>
    </div>
  </section>

  <!-- Section 2: Key Operational Metrics -->
  <section style="padding: 45px 0; background: #1c2541; border-top: 1px solid rgba(255,255,255,0.05); border-bottom: 1px solid rgba(255,255,255,0.05);">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 25px; text-align: center;">
        
        <div style="padding: 20px; background: rgba(255,255,255,0.03); border-radius: 12px; border: 1px solid rgba(255,255,255,0.08);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; margin-bottom: 5px;">24 - 48 Hours</div>
          <div style="font-size: 0.9rem; color: #94a3b8;">Express Hub Dispatch</div>
        </div>

        <div style="padding: 20px; background: rgba(255,255,255,0.03); border-radius: 12px; border: 1px solid rgba(255,255,255,0.08);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; margin-bottom: 5px;">100%</div>
          <div style="font-size: 0.9rem; color: #94a3b8;">Doorstep Collection & Delivery</div>
        </div>

        <div style="padding: 20px; background: rgba(255,255,255,0.03); border-radius: 12px; border: 1px solid rgba(255,255,255,0.08);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; margin-bottom: 5px;">7-Layer</div>
          <div style="font-size: 0.9rem; color: #94a3b8;">Bubble & Foam Padding</div>
        </div>

        <div style="padding: 20px; background: rgba(255,255,255,0.03); border-radius: 12px; border: 1px solid rgba(255,255,255,0.08);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; margin-bottom: 5px;">100%</div>
          <div style="font-size: 0.9rem; color: #94a3b8;">Transit Insurance Coverage</div>
        </div>

      </div>
    </div>
  </section>

  <!-- Section 3: Cost Rate Matrix -->
  <section style="padding: 60px 0; background: #0b132b;">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
      
      <div style="text-align: center; margin-bottom: 40px;">
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin-bottom: 12px;">
          Express Bike Courier Charges Matrix
        </h2>
        <p style="color: #94a3b8; font-size: 1rem; max-width: 700px; margin: 0 auto;">
          Transparent door-to-door courier rate structure for different vehicle categories.
        </p>
      </div>

      <div style="overflow-x: auto; background: #1c2541; border-radius: 14px; border: 1px solid rgba(255,255,255,0.1); padding: 10px;">
        <table style="width: 100%; border-collapse: collapse; text-align: left; font-size: 0.95rem; color: #e2e8f0;">
          <thead>
            <tr style="background: rgba(245, 158, 11, 0.15); border-bottom: 2px solid rgba(245, 158, 11, 0.3);">
              <th style="padding: 16px; color: #f59e0b; font-weight: 700;">Distance Range</th>
              <th style="padding: 16px; color: #f59e0b; font-weight: 700;">Light Bike / Scooter (&lt;125cc)</th>
              <th style="padding: 16px; color: #f59e0b; font-weight: 700;">Standard Bike (150-250cc)</th>
              <th style="padding: 16px; color: #f59e0b; font-weight: 700;">Royal Enfield / Superbike (350cc+)</th>
            </tr>
          </thead>
          <tbody>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.05);">
              <td style="padding: 16px; font-weight: 600;">300 km - 700 km</td>
              <td style="padding: 16px; color: #f59e0b; font-weight: 700;">₹3,200 - ₹4,500</td>
              <td style="padding: 16px; color: #f59e0b; font-weight: 700;">₹4,200 - ₹5,800</td>
              <td style="padding: 16px; color: #f59e0b; font-weight: 700;">₹5,500 - ₹7,200</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.05); background: rgba(255,255,255,0.02);">
              <td style="padding: 16px; font-weight: 600;">700 km - 1,400 km</td>
              <td style="padding: 16px; color: #f59e0b; font-weight: 700;">₹4,500 - ₹6,200</td>
              <td style="padding: 16px; color: #f59e0b; font-weight: 700;">₹5,800 - ₹7,800</td>
              <td style="padding: 16px; color: #f59e0b; font-weight: 700;">₹7,200 - ₹9,800</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.05);">
              <td style="padding: 16px; font-weight: 600;">1,400 km - 2,200 km</td>
              <td style="padding: 16px; color: #f59e0b; font-weight: 700;">₹6,200 - ₹8,500</td>
              <td style="padding: 16px; color: #f59e0b; font-weight: 700;">₹7,800 - ₹10,200</td>
              <td style="padding: 16px; color: #f59e0b; font-weight: 700;">₹9,800 - ₹13,500</td>
            </tr>
            <tr>
              <td style="padding: 16px; font-weight: 600;">Above 2,200 km</td>
              <td style="padding: 16px; color: #f59e0b; font-weight: 700;">₹8,500 - ₹11,500</td>
              <td style="padding: 16px; color: #f59e0b; font-weight: 700;">₹10,200 - ₹13,800</td>
              <td style="padding: 16px; color: #f59e0b; font-weight: 700;">₹13,500 - ₹17,500</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </section>

  <!-- Section 4: Key Service Advantages -->
  <section style="padding: 60px 0; background: #1c2541;">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
      
      <div style="text-align: center; margin-bottom: 45px;">
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin-bottom: 12px;">
          Key Advantages of Bike Courier Services
        </h2>
        <p style="color: #94a3b8; font-size: 1rem; max-width: 700px; margin: 0 auto;">
          Premium door-to-door courier convenience engineered for seamless two-wheeler shipping.
        </p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 30px;">
        
        <div style="background: rgba(255,255,255,0.03); border-radius: 12px; padding: 30px; border: 1px solid rgba(255,255,255,0.08);">
          <div style="width: 50px; height: 50px; border-radius: 10px; background: rgba(245, 158, 11, 0.15); color: #f59e0b; display: flex; align-items: center; justify-content: center; font-size: 1.4rem; margin-bottom: 20px;">
            <i class="fas fa-shipping-fast"></i>
          </div>
          <h3 style="font-size: 1.25rem; font-weight: 700; color: #ffffff; margin-bottom: 12px;">Express Pickup & Dispatch</h3>
          <p style="color: #94a3b8; font-size: 0.95rem; line-height: 1.7;">
            Fast door-to-door courier pickup within 24 hours of booking, directly from your residence or office.
          </p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border-radius: 12px; padding: 30px; border: 1px solid rgba(255,255,255,0.08);">
          <div style="width: 50px; height: 50px; border-radius: 10px; background: rgba(245, 158, 11, 0.15); color: #f59e0b; display: flex; align-items: center; justify-content: center; font-size: 1.4rem; margin-bottom: 20px;">
            <i class="fas fa-box"></i>
          </div>
          <h3 style="font-size: 1.25rem; font-weight: 700; color: #ffffff; margin-bottom: 12px;">7-Layer Bubble Packaging</h3>
          <p style="color: #94a3b8; font-size: 0.95rem; line-height: 1.7;">
            Foam paper, 80 GSM bubble film, corrugated fiberboard, and waterproof stretch wrap protect glossy panels against scratches.
          </p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border-radius: 12px; padding: 30px; border: 1px solid rgba(255,255,255,0.08);">
          <div style="width: 50px; height: 50px; border-radius: 10px; background: rgba(245, 158, 11, 0.15); color: #f59e0b; display: flex; align-items: center; justify-content: center; font-size: 1.4rem; margin-bottom: 20px;">
            <i class="fas fa-truck-moving"></i>
          </div>
          <h3 style="font-size: 1.25rem; font-weight: 700; color: #ffffff; margin-bottom: 12px;">Enclosed Container Trucks</h3>
          <p style="color: #94a3b8; font-size: 0.95rem; line-height: 1.7;">
            Closed hydraulic trucks keep bikes safe from rain, highway dust, and stones during intercity transit.
          </p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border-radius: 12px; padding: 30px; border: 1px solid rgba(255,255,255,0.08);">
          <div style="width: 50px; height: 50px; border-radius: 10px; background: rgba(245, 158, 11, 0.15); color: #f59e0b; display: flex; align-items: center; justify-content: center; font-size: 1.4rem; margin-bottom: 20px;">
            <i class="fas fa-shield-alt"></i>
          </div>
          <h3 style="font-size: 1.25rem; font-weight: 700; color: #ffffff; margin-bottom: 12px;">Full Value Transit Cover</h3>
          <p style="color: #94a3b8; font-size: 0.95rem; line-height: 1.7;">
            All-risk transit insurance protecting declared motorcycle valuation against accidental damage or loss in transit.
          </p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border-radius: 12px; padding: 30px; border: 1px solid rgba(255,255,255,0.08);">
          <div style="width: 50px; height: 50px; border-radius: 10px; background: rgba(245, 158, 11, 0.15); color: #f59e0b; display: flex; align-items: center; justify-content: center; font-size: 1.4rem; margin-bottom: 20px;">
            <i class="fas fa-file-invoice"></i>
          </div>
          <h3 style="font-size: 1.25rem; font-weight: 700; color: #ffffff; margin-bottom: 12px;">IBA Approved GST Billing</h3>
          <p style="color: #94a3b8; font-size: 0.95rem; line-height: 1.7;">
            Official consignment bilty notes and 18% GST tax invoices valid for corporate and government transfer claims.
          </p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border-radius: 12px; padding: 30px; border: 1px solid rgba(255,255,255,0.08);">
          <div style="width: 50px; height: 50px; border-radius: 10px; background: rgba(245, 158, 11, 0.15); color: #f59e0b; display: flex; align-items: center; justify-content: center; font-size: 1.4rem; margin-bottom: 20px;">
            <i class="fas fa-map-marked-alt"></i>
          </div>
          <h3 style="font-size: 1.25rem; font-weight: 700; color: #ffffff; margin-bottom: 12px;">Doorstep Unboxing Support</h3>
          <p style="color: #94a3b8; font-size: 0.95rem; line-height: 1.7;">
            Complete door-to-door convenience with doorstep pickup, pre-loading inspection report, and destination unboxing.
          </p>
        </div>

      </div>
    </div>
  </section>

  <!-- Section 5: Packaging Protocol -->
  <section style="padding: 60px 0; background: #0b132b;">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
      
      <div style="text-align: center; margin-bottom: 45px;">
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin-bottom: 12px;">
          7-Layer Courier Packaging Protocol
        </h2>
        <p style="color: #94a3b8; font-size: 1rem; max-width: 700px; margin: 0 auto;">
          Strict packing procedure engineered to ensure scratch-free express courier delivery.
        </p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 20px;">
        
        <div style="background: #1c2541; padding: 25px; border-radius: 12px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #ffffff; font-size: 1.1rem; font-weight: 700; margin-bottom: 8px;">Step 1: Odometer & Visual Check</h4>
          <p style="color: #94a3b8; font-size: 0.9rem; margin: 0;">Photographic condition inspection and kilometer logging before wrapping.</p>
        </div>

        <div style="background: #1c2541; padding: 25px; border-radius: 12px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #ffffff; font-size: 1.1rem; font-weight: 700; margin-bottom: 8px;">Step 2: Non-Scratch Inner Foam Wrap</h4>
          <p style="color: #94a3b8; font-size: 0.9rem; margin: 0;">Direct foam wrap over fuel tank lacquer, speedometer glass, and side cowls.</p>
        </div>

        <div style="background: #1c2541; padding: 25px; border-radius: 12px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #ffffff; font-size: 1.1rem; font-weight: 700; margin-bottom: 8px;">Step 3: 80 GSM Heavy Bubble Shield</h4>
          <p style="color: #94a3b8; font-size: 0.9rem; margin: 0;">Thick bubble film layer protecting silencer, engine crash guard, and front mudguard.</p>
        </div>

        <div style="background: #1c2541; padding: 25px; border-radius: 12px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #ffffff; font-size: 1.1rem; font-weight: 700; margin-bottom: 8px;">Step 4: Corrugated Box Cushioning</h4>
          <p style="color: #94a3b8; font-size: 0.9rem; margin: 0;">Heavy cardboard fitted over turn indicators, tail lamps, and mudguards.</p>
        </div>

        <div style="background: #1c2541; padding: 25px; border-radius: 12px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #ffffff; font-size: 1.1rem; font-weight: 700; margin-bottom: 8px;">Step 5: High-Tension Stretch Film</h4>
          <p style="color: #94a3b8; font-size: 0.9rem; margin: 0;">Outer stretch wrapping sealing all layers against moisture, dust, and rain.</p>
        </div>

        <div style="background: #1c2541; padding: 25px; border-radius: 12px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #ffffff; font-size: 1.1rem; font-weight: 700; margin-bottom: 8px;">Step 6: Wheel Locking Ratchet Straps</h4>
          <p style="color: #94a3b8; font-size: 0.9rem; margin: 0;">Locking bike wheels firmly to container floor mounts with industrial nylon belts.</p>
        </div>

      </div>
    </div>
  </section>

  <!-- Section 6: Documents & GST Compliance -->
  <section style="padding: 60px 0; background: #1c2541;">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
      
      <div style="text-align: center; margin-bottom: 45px;">
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin-bottom: 12px;">
          IBA Approved GST Billing & Required Documents
        </h2>
        <p style="color: #94a3b8; font-size: 1rem; max-width: 700px; margin: 0 auto;">
          Mandatory paperwork for legal courier transport and corporate claim bills.
        </p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 25px;">
        <div style="background: rgba(255,255,255,0.03); padding: 25px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.08);">
          <h3 style="font-size: 1.15rem; color: #f59e0b; font-weight: 700; margin-bottom: 10px;">Mandatory Vehicle Papers</h3>
          <ul style="color: #cbd5e1; font-size: 0.9rem; line-height: 1.8; padding-left: 20px; margin: 0;">
            <li>Vehicle Registration Certificate (RC Copy)</li>
            <li>Valid Insurance Policy Copy</li>
            <li>Owner Government ID (Aadhaar / PAN Card)</li>
            <li>Keys & Vehicle Pre-Inspection Receipt</li>
          </ul>
        </div>

        <div style="background: rgba(255,255,255,0.03); padding: 25px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.08);">
          <h3 style="font-size: 1.15rem; color: #f59e0b; font-weight: 700; margin-bottom: 10px;">Official Invoice Pack</h3>
          <ul style="color: #cbd5e1; font-size: 0.9rem; line-height: 1.8; padding-left: 20px; margin: 0;">
            <li>IBA Approved Consignment Note (LR Copy)</li>
            <li>Itemized 18% GST Invoice</li>
            <li>Payment Receipt with Official Stamp</li>
            <li>Pre-Delivery Inspection Slip</li>
          </ul>
        </div>
      </div>

    </div>
  </section>

  <!-- Section 7: FAQs with JSON-LD Schema -->
  <section style="padding: 60px 0; background: #0b132b;">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
      
      <div style="text-align: center; margin-bottom: 45px;">
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin-bottom: 12px;">
          Frequently Asked Questions (Bike Courier Service)
        </h2>
        <p style="color: #94a3b8; font-size: 1rem; max-width: 700px; margin: 0 auto;">
          Answers to common questions regarding express motorcycle courier shipping.
        </p>
      </div>

      <div style="max-width: 900px; margin: 0 auto; display: grid; gap: 15px;">
        
        <div style="background: #1c2541; padding: 20px 25px; border-radius: 10px; border: 1px solid rgba(255,255,255,0.05);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">What is express bike transport courier service?</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.6; margin: 0;">
            It is a dedicated door-to-door motorcycle shipping service where our team picks up your bike from your home, packs it with 7-layer bubble wrapping, and transports it inside closed container trucks to your destination.
          </p>
        </div>

        <div style="background: #1c2541; padding: 20px 25px; border-radius: 10px; border: 1px solid rgba(255,255,255,0.05);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">How long does doorstep bike courier delivery take?</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.6; margin: 0;">
            Delivery timelines typically range from 2 to 5 days depending on the distance between pickup and drop cities.
          </p>
        </div>

        <div style="background: #1c2541; padding: 20px 25px; border-radius: 10px; border: 1px solid rgba(255,255,255,0.05);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Is fuel emptied before courier pickup?</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.6; margin: 0;">
            Yes, petrol tanks are drained down to 1-2 liters for fire safety compliance during highway transit inside container trucks.
          </p>
        </div>

        <div style="background: #1c2541; padding: 20px 25px; border-radius: 10px; border: 1px solid rgba(255,255,255,0.05);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Can I track my bike courier status online?</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.6; margin: 0;">
            Yes, we provide consignment LR tracking numbers and regular status updates via WhatsApp and phone support.
          </p>
        </div>

        <div style="background: #1c2541; padding: 20px 25px; border-radius: 10px; border: 1px solid rgba(255,255,255,0.05);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Are GST invoices provided for corporate reimbursement?</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.6; margin: 0;">
            Yes, 100% legal IBA-approved GST invoices and LR bills are issued for all bike courier bookings.
          </p>
        </div>

      </div>

    </div>
  </section>

  <!-- Section 8: CTA Conversion Footer -->
  <section style="padding: 50px 0; background: linear-gradient(135deg, #1c2541 0%, #0b132b 100%); text-align: center; border-top: 1px solid rgba(245, 158, 11, 0.2);">
    <div class="container" style="max-width: 900px; margin: 0 auto; padding: 0 20px;">
      <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin-bottom: 15px;">
        Book Express Bike Courier Service Today
      </h2>
      <p style="font-size: 1.05rem; color: #cbd5e1; margin-bottom: 30px;">
        Get instant quotes, 7-layer protective packaging, and 100% insured door-to-door delivery.
      </p>

      <div style="display: flex; gap: 15px; justify-content: center; flex-wrap: wrap;">
        <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Representative" style="padding: 15px 35px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
          <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call <?php echo SITE_PHONE; ?>
        </a>
        <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20to%20book%20express%20bike%20courier%20service." title="WhatsApp Booking" target="_blank" style="padding: 15px 35px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
          <i class="fab fa-whatsapp" style="margin-right: 8px;"></i> WhatsApp Quick Booking
        </a>
      </div>
    </div>
  </section>

</main>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "What is express bike transport courier service?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "It is a dedicated door-to-door motorcycle shipping service where our team picks up your bike from your home, packs it with 7-layer bubble wrapping, and transports it inside closed container trucks to your destination."
      }
    },
    {
      "@type": "Question",
      "name": "How long does doorstep bike courier delivery take?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Delivery timelines typically range from 2 to 5 days depending on the distance between pickup and drop cities."
      }
    },
    {
      "@type": "Question",
      "name": "Is fuel emptied before courier pickup?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, petrol tanks are drained down to 1-2 liters for fire safety compliance during highway transit inside container trucks."
      }
    },
    {
      "@type": "Question",
      "name": "Can I track my bike courier status online?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, we provide consignment LR tracking numbers and regular status updates via WhatsApp and phone support."
      }
    },
    {
      "@type": "Question",
      "name": "Are GST invoices provided for corporate reimbursement?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, 100% legal IBA-approved GST invoices and LR bills are issued for all bike courier bookings."
      }
    }
  ]
}
</script>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
