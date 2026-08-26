<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "Bike Transport by Car Carrier | Enclosed Multi-Car & Bike Trailer Shipping";
$page_desc = "Safe bike transport by enclosed car carrier trailers in India. Combine car & bike shipping, 7-layer bubble wrapping, hydraulic deck loading, and 100% transit insurance.";
$page_keywords = "bike transport by car carrier, car and bike shipping together, car carrier truck for bike, auto transport trailer bike, combined car bike relocation";
$canonical_url = "https://shreeashirwadpackersandmovers.com/pages/bike-transport-by-car-carrier.php";

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
            ENCLOSED CAR CARRIER & BIKE SHIPPING SPECIALISTS
          </span>
          <h1 style="font-size: 2.7rem; font-weight: 800; line-height: 1.2; margin-bottom: 20px; color: #ffffff;">
            Professional <span style="color: #f59e0b;">Bike Transport by Car Carrier</span>
          </h1>
          <p style="font-size: 1.12rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 25px;">
            Moving both your car and motorcycle across India? Transport your bike safely inside double-decker enclosed car carrier trailers featuring hydraulic ramps, individual wheel chocks, 7-layer bubble wrapping, and door-to-door transit insurance.
          </p>

          <div style="display: flex; gap: 15px; flex-wrap: wrap; margin-bottom: 30px;">
            <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Now" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
              <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call Now: <?php echo SITE_PHONE; ?>
            </a>
            <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20a%20car%20carrier%20bike%20transport%20quote." title="Chat on WhatsApp" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
              <i class="fab fa-whatsapp" style="margin-right: 8px;"></i> Chat on WhatsApp
            </a>
          </div>

          <div style="display: flex; gap: 20px; font-size: 0.9rem; color: #94a3b8;">
            <span><strong style="color: #f59e0b;">Car + Bike</strong> Combo Discount</span>
            <span><strong style="color: #f59e0b;">Enclosed</strong> Multi-Car Trailer</span>
            <span><strong style="color: #f59e0b;">100% Insured</strong> Doorstep Delivery</span>
          </div>
        </div>

        <!-- Hero Lead Form Column -->
        <div class="hero-form-card" style="background: rgba(255, 255, 255, 0.05); backdrop-filter: blur(10px); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 16px; padding: 30px; box-shadow: 0 15px 35px rgba(0,0,0,0.4);">
          <h2 style="font-size: 1.4rem; color: #ffffff; margin-bottom: 8px; font-weight: 700; text-align: center;">Get Car Carrier & Bike Quote</h2>
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
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; margin-bottom: 5px;">Car + Bike</div>
          <div style="font-size: 0.9rem; color: #94a3b8;">Combined Relocation Packages</div>
        </div>

        <div style="padding: 20px; background: rgba(255,255,255,0.03); border-radius: 12px; border: 1px solid rgba(255,255,255,0.08);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; margin-bottom: 5px;">Double-Decker</div>
          <div style="font-size: 0.9rem; color: #94a3b8;">Enclosed Auto Trailers</div>
        </div>

        <div style="padding: 20px; background: rgba(255,255,255,0.03); border-radius: 12px; border: 1px solid rgba(255,255,255,0.08);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; margin-bottom: 5px;">7-Layer</div>
          <div style="font-size: 0.9rem; color: #94a3b8;">Full Body Shield</div>
        </div>

        <div style="padding: 20px; background: rgba(255,255,255,0.03); border-radius: 12px; border: 1px solid rgba(255,255,255,0.08);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; margin-bottom: 5px;">100%</div>
          <div style="font-size: 0.9rem; color: #94a3b8;">Transit Insurance Cover</div>
        </div>

      </div>
    </div>
  </section>

  <!-- Section 3: Cost Matrix -->
  <section style="padding: 60px 0; background: #0b132b;">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
      
      <div style="text-align: center; margin-bottom: 40px;">
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin-bottom: 12px;">
          Estimated Bike Transport Rates in Car Carrier Trailers
        </h2>
        <p style="color: #94a3b8; font-size: 1rem; max-width: 700px; margin: 0 auto;">
          Transparent cost breakdown for solo bike shipping vs combined car + bike carrier transport.
        </p>
      </div>

      <div style="overflow-x: auto; background: #1c2541; border-radius: 14px; border: 1px solid rgba(255,255,255,0.1); padding: 10px;">
        <table style="width: 100%; border-collapse: collapse; text-align: left; font-size: 0.95rem; color: #e2e8f0;">
          <thead>
            <tr style="background: rgba(245, 158, 11, 0.15); border-bottom: 2px solid rgba(245, 158, 11, 0.3);">
              <th style="padding: 16px; color: #f59e0b; font-weight: 700;">Distance Range</th>
              <th style="padding: 16px; color: #f59e0b; font-weight: 700;">Standalone Bike Rate</th>
              <th style="padding: 16px; color: #f59e0b; font-weight: 700;">Bike Rate (With Car Booking)</th>
              <th style="padding: 16px; color: #f59e0b; font-weight: 700;">Estimated Delivery Days</th>
            </tr>
          </thead>
          <tbody>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.05);">
              <td style="padding: 16px; font-weight: 600;">500 km - 1,000 km</td>
              <td style="padding: 16px; color: #f59e0b; font-weight: 700;">₹4,500 - ₹6,000</td>
              <td style="padding: 16px; color: #f59e0b; font-weight: 700;">₹3,200 - ₹4,500</td>
              <td style="padding: 16px;">3 - 4 Days</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.05); background: rgba(255,255,255,0.02);">
              <td style="padding: 16px; font-weight: 600;">1,000 km - 1,800 km</td>
              <td style="padding: 16px; color: #f59e0b; font-weight: 700;">₹6,000 - ₹8,500</td>
              <td style="padding: 16px; color: #f59e0b; font-weight: 700;">₹4,500 - ₹6,500</td>
              <td style="padding: 16px;">4 - 6 Days</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.05);">
              <td style="padding: 16px; font-weight: 600;">1,800 km - 2,500 km</td>
              <td style="padding: 16px; color: #f59e0b; font-weight: 700;">₹8,500 - ₹11,500</td>
              <td style="padding: 16px; color: #f59e0b; font-weight: 700;">₹6,500 - ₹8,800</td>
              <td style="padding: 16px;">6 - 8 Days</td>
            </tr>
            <tr>
              <td style="padding: 16px; font-weight: 600;">Above 2,500 km</td>
              <td style="padding: 16px; color: #f59e0b; font-weight: 700;">₹11,500 - ₹15,000</td>
              <td style="padding: 16px; color: #f59e0b; font-weight: 700;">₹8,800 - ₹12,000</td>
              <td style="padding: 16px;">7 - 10 Days</td>
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
          Key Advantages of Bike Shipping via Car Carrier Trailers
        </h2>
        <p style="color: #94a3b8; font-size: 1rem; max-width: 700px; margin: 0 auto;">
          Premium features engineered for maximum vehicle safety and seamless combined relocations.
        </p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 30px;">
        
        <div style="background: rgba(255,255,255,0.03); border-radius: 12px; padding: 30px; border: 1px solid rgba(255,255,255,0.08);">
          <div style="width: 50px; height: 50px; border-radius: 10px; background: rgba(245, 158, 11, 0.15); color: #f59e0b; display: flex; align-items: center; justify-content: center; font-size: 1.4rem; margin-bottom: 20px;">
            <i class="fas fa-car"></i>
          </div>
          <h3 style="font-size: 1.25rem; font-weight: 700; color: #ffffff; margin-bottom: 12px;">Combined Car + Bike Shipment</h3>
          <p style="color: #94a3b8; font-size: 0.95rem; line-height: 1.7;">
            Ship your sedan/SUV and motorcycle together on the same car carrier trailer with discounted combined freight rates.
          </p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border-radius: 12px; padding: 30px; border: 1px solid rgba(255,255,255,0.08);">
          <div style="width: 50px; height: 50px; border-radius: 10px; background: rgba(245, 158, 11, 0.15); color: #f59e0b; display: flex; align-items: center; justify-content: center; font-size: 1.4rem; margin-bottom: 20px;">
            <i class="fas fa-truck-loading"></i>
          </div>
          <h3 style="font-size: 1.25rem; font-weight: 700; color: #ffffff; margin-bottom: 12px;">Hydraulic Deck Loading</h3>
          <p style="color: #94a3b8; font-size: 0.95rem; line-height: 1.7;">
            Automated hydraulic ramp decks smoothly elevate motorcycles and heavy cruisers into upper or lower trailer decks.
          </p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border-radius: 12px; padding: 30px; border: 1px solid rgba(255,255,255,0.08);">
          <div style="width: 50px; height: 50px; border-radius: 10px; background: rgba(245, 158, 11, 0.15); color: #f59e0b; display: flex; align-items: center; justify-content: center; font-size: 1.4rem; margin-bottom: 20px;">
            <i class="fas fa-layer-group"></i>
          </div>
          <h3 style="font-size: 1.25rem; font-weight: 700; color: #ffffff; margin-bottom: 12px;">Dedicated Bike Bays</h3>
          <p style="color: #94a3b8; font-size: 0.95rem; line-height: 1.7;">
            Specialized wheel chocks and floor anchor slots inside car carriers keep bikes upright without leaning against automobiles.
          </p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border-radius: 12px; padding: 30px; border: 1px solid rgba(255,255,255,0.08);">
          <div style="width: 50px; height: 50px; border-radius: 10px; background: rgba(245, 158, 11, 0.15); color: #f59e0b; display: flex; align-items: center; justify-content: center; font-size: 1.4rem; margin-bottom: 20px;">
            <i class="fas fa-box"></i>
          </div>
          <h3 style="font-size: 1.25rem; font-weight: 700; color: #ffffff; margin-bottom: 12px;">7-Layer Weatherproof Shield</h3>
          <p style="color: #94a3b8; font-size: 0.95rem; line-height: 1.7;">
            Foam padding, 80 GSM bubble wrap, corrugated cardboard, and stretch film protect bikes from dust and moisture inside closed trailers.
          </p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border-radius: 12px; padding: 30px; border: 1px solid rgba(255,255,255,0.08);">
          <div style="width: 50px; height: 50px; border-radius: 10px; background: rgba(245, 158, 11, 0.15); color: #f59e0b; display: flex; align-items: center; justify-content: center; font-size: 1.4rem; margin-bottom: 20px;">
            <i class="fas fa-shield-alt"></i>
          </div>
          <h3 style="font-size: 1.25rem; font-weight: 700; color: #ffffff; margin-bottom: 12px;">All-Risk Transit Cover</h3>
          <p style="color: #94a3b8; font-size: 0.95rem; line-height: 1.7;">
            Comprehensive insurance covering declared values for both car and bike during long-haul interstate highway transport.
          </p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border-radius: 12px; padding: 30px; border: 1px solid rgba(255,255,255,0.08);">
          <div style="width: 50px; height: 50px; border-radius: 10px; background: rgba(245, 158, 11, 0.15); color: #f59e0b; display: flex; align-items: center; justify-content: center; font-size: 1.4rem; margin-bottom: 20px;">
            <i class="fas fa-map-marked-alt"></i>
          </div>
          <h3 style="font-size: 1.25rem; font-weight: 700; color: #ffffff; margin-bottom: 12px;">Door-to-Door Delivery</h3>
          <p style="color: #94a3b8; font-size: 0.95rem; line-height: 1.7;">
            Hassle-free doorstep pickup of both vehicles from your home with synchronized door delivery at your destination address.
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
          7-Layer Packaging Protocol for Car Carrier Bike Transport
        </h2>
        <p style="color: #94a3b8; font-size: 1rem; max-width: 700px; margin: 0 auto;">
          Rigorous protective sequence designed to keep bikes pristine inside multi-vehicle trailers.
        </p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 20px;">
        
        <div style="background: #1c2541; padding: 25px; border-radius: 12px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #ffffff; font-size: 1.1rem; font-weight: 700; margin-bottom: 8px;">Step 1: Joint Vehicle Inspection</h4>
          <p style="color: #94a3b8; font-size: 0.9rem; margin: 0;">Detailed photographic log of both car and bike body condition prior to loading.</p>
        </div>

        <div style="background: #1c2541; padding: 25px; border-radius: 12px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #ffffff; font-size: 1.1rem; font-weight: 700; margin-bottom: 8px;">Step 2: Non-Scratch Foam Wrapping</h4>
          <p style="color: #94a3b8; font-size: 0.9rem; margin: 0;">Direct foam wrap over glossy fuel tank paint, side cowls, and mirror mounts.</p>
        </div>

        <div style="background: #1c2541; padding: 25px; border-radius: 12px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #ffffff; font-size: 1.1rem; font-weight: 700; margin-bottom: 8px;">Step 3: 80 GSM Heavy Bubble Layer</h4>
          <p style="color: #94a3b8; font-size: 0.9rem; margin: 0;">Multi-turn bubble film wrap around chrome exhausts, engine guards, and handlebars.</p>
        </div>

        <div style="background: #1c2541; padding: 25px; border-radius: 12px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #ffffff; font-size: 1.1rem; font-weight: 700; margin-bottom: 8px;">Step 4: Heavy Corrugated Cardboard</h4>
          <p style="color: #94a3b8; font-size: 0.9rem; margin: 0;">Fitted cardboard armor over front headlight, tail lamp, and turn indicators.</p>
        </div>

        <div style="background: #1c2541; padding: 25px; border-radius: 12px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #ffffff; font-size: 1.1rem; font-weight: 700; margin-bottom: 8px;">Step 5: High-Tension Stretch Film</h4>
          <p style="color: #94a3b8; font-size: 0.9rem; margin: 0;">Tight stretch wrap sealing against ambient trailer dust and humidity during transit.</p>
        </div>

        <div style="background: #1c2541; padding: 25px; border-radius: 12px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #ffffff; font-size: 1.1rem; font-weight: 700; margin-bottom: 8px;">Step 6: Deck Floor Wheel Locking</h4>
          <p style="color: #94a3b8; font-size: 0.9rem; margin: 0;">Anchoring bike wheels into specialized trailer chocks with heavy nylon ratchet straps.</p>
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
          Required documentation for combined car & bike shipments and corporate claim bills.
        </p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 25px;">
        <div style="background: rgba(255,255,255,0.03); padding: 25px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.08);">
          <h3 style="font-size: 1.15rem; color: #f59e0b; font-weight: 700; margin-bottom: 10px;">Mandatory Vehicle Papers</h3>
          <ul style="color: #cbd5e1; font-size: 0.9rem; line-height: 1.8; padding-left: 20px; margin: 0;">
            <li>RC Copies for both Car and Bike</li>
            <li>Valid Insurance Copies for both Vehicles</li>
            <li>Owner Government Photo ID (Aadhaar / PAN)</li>
            <li>Signed Keys & Condition Handover Form</li>
          </ul>
        </div>

        <div style="background: rgba(255,255,255,0.03); padding: 25px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.08);">
          <h3 style="font-size: 1.15rem; color: #f59e0b; font-weight: 700; margin-bottom: 10px;">Official Invoice Pack</h3>
          <ul style="color: #cbd5e1; font-size: 0.9rem; line-height: 1.8; padding-left: 20px; margin: 0;">
            <li>IBA Approved Consignment Note (Combined LR Copy)</li>
            <li>Itemized 18% GST Tax Invoice</li>
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
          Frequently Asked Questions (Car Carrier Bike Transport)
        </h2>
        <p style="color: #94a3b8; font-size: 1rem; max-width: 700px; margin: 0 auto;">
          Everything you need to know about transporting a bike inside a car carrier trailer.
        </p>
      </div>

      <div style="max-width: 900px; margin: 0 auto; display: grid; gap: 15px;">
        
        <div style="background: #1c2541; padding: 20px 25px; border-radius: 10px; border: 1px solid rgba(255,255,255,0.05);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Can I transport a motorcycle inside a car carrier trailer without shipping a car?</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.6; margin: 0;">
            Yes, car carrier trailers have dedicated motorcycle bays and wheel locking chocks to safely transport individual bikes alongside car shipments.
          </p>
        </div>

        <div style="background: #1c2541; padding: 20px 25px; border-radius: 10px; border: 1px solid rgba(255,255,255,0.05);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Do I get a discount if I book both my car and bike together?</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.6; margin: 0;">
            Yes, booking car and bike transport together on the same car carrier trailer qualifies for combo package discounts up to 25% on bike freight.
          </p>
        </div>

        <div style="background: #1c2541; padding: 20px 25px; border-radius: 10px; border: 1px solid rgba(255,255,255,0.05);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Are bikes safe from touching automobiles inside the carrier?</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.6; margin: 0;">
            Yes. Bikes are strapped into separate motorcycle bays with 4-point wheel chocks, maintaining safe physical clearance from parked cars.
          </p>
        </div>

        <div style="background: #1c2541; padding: 20px 25px; border-radius: 10px; border: 1px solid rgba(255,255,255,0.05);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Are car carrier trailers open or enclosed?</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.6; margin: 0;">
            We operate fully enclosed double-decker car carrier trucks that completely shield all vehicles against rain, road dust, and weather.
          </p>
        </div>

        <div style="background: #1c2541; padding: 20px 25px; border-radius: 10px; border: 1px solid rgba(255,255,255,0.05);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Are IBA-approved bills provided for both vehicles?</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.6; margin: 0;">
            Yes, itemized 100% legal GST invoices and consignment bills are provided for both car and bike relocations.
          </p>
        </div>

      </div>

    </div>
  </section>

  <!-- Section 8: CTA Conversion Footer -->
  <section style="padding: 50px 0; background: linear-gradient(135deg, #1c2541 0%, #0b132b 100%); text-align: center; border-top: 1px solid rgba(245, 158, 11, 0.2);">
    <div class="container" style="max-width: 900px; margin: 0 auto; padding: 0 20px;">
      <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin-bottom: 15px;">
        Book Car & Bike Carrier Transport Today
      </h2>
      <p style="font-size: 1.05rem; color: #cbd5e1; margin-bottom: 30px;">
        Get instant combo quotes, enclosed double-decker trailer transport, and 100% insured door delivery.
      </p>

      <div style="display: flex; gap: 15px; justify-content: center; flex-wrap: wrap;">
        <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Representative" style="padding: 15px 35px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
          <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call <?php echo SITE_PHONE; ?>
        </a>
        <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20to%20book%20car%20and%20bike%20carrier%20transport." title="WhatsApp Booking" target="_blank" style="padding: 15px 35px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
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
      "name": "Can I transport a motorcycle inside a car carrier trailer without shipping a car?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, car carrier trailers have dedicated motorcycle bays and wheel locking chocks to safely transport individual bikes alongside car shipments."
      }
    },
    {
      "@type": "Question",
      "name": "Do I get a discount if I book both my car and bike together?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, booking car and bike transport together on the same car carrier trailer qualifies for combo package discounts up to 25% on bike freight."
      }
    },
    {
      "@type": "Question",
      "name": "Are bikes safe from touching automobiles inside the carrier?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes. Bikes are strapped into separate motorcycle bays with 4-point wheel chocks, maintaining safe physical clearance from parked cars."
      }
    },
    {
      "@type": "Question",
      "name": "Are car carrier trailers open or enclosed?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "We operate fully enclosed double-decker car carrier trucks that completely shield all vehicles against rain, road dust, and weather."
      }
    },
    {
      "@type": "Question",
      "name": "Are IBA-approved bills provided for both vehicles?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, itemized 100% legal GST invoices and consignment bills are provided for both car and bike relocations."
      }
    }
  ]
}
</script>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
