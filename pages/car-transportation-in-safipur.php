<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "Car Transportation in Safipur Unnao | Insured Vehicle Carrier";
$page_desc = "Safe car transportation in Safipur, Unnao UP. Doorstep vehicle pickup near Safipur & Fatehpur Chaurasi belt, hydraulic container ramp loading, transit insurance & IBA approved GST bills. Call 8409531615.";
$page_keywords = "car transportation in safipur, car shifting safipur unnao, car carrier service safipur, IBA approved car transport unnao, car shipping cost safipur, motor vehicle transport safipur";
$canonical_url = "https://shreeashirwadpackersandmovers.com/pages/car-transportation-in-safipur.php";

$page_city = "Safipur, Unnao, Uttar Pradesh";

$faq_list = [
    ['q' => 'How are cars safely transported to and from Safipur Unnao?', 'a' => 'Vehicles are loaded onto covered car container trucks or open multi-car trailers using hydraulic tail-lifts, then secured with 4-point wheel tie-down straps and wheel chocks.'],
    ['q' => 'What is the cost of car shipping from Safipur Unnao?', 'a' => 'Regional car shipping within UP/NCR costs between ₹5,000 and ₹9,500. Long-distance transport to Mumbai, Bangalore, or Kolkata ranges from ₹12,000 to ₹22,000 depending on vehicle model.'],
    ['q' => 'Is doorstep car pickup available in Safipur Unnao?', 'a' => 'Yes, our professional car drivers collect your vehicle directly from your doorstep in Safipur, Pariyar road, and surrounding Unnao areas.'],
    ['q' => 'Do you provide IBA approved GST bills for car relocation claims?', 'a' => 'Yes, 100% genuine IBA-compliant GST tax invoices, vehicle condition inspection sheets, and consignment receipts (LR) are issued for defense, corporate, and government claims.'],
    ['q' => 'Is transit insurance included for car parcel shipping from Safipur?', 'a' => 'Yes, full transit insurance coverage (1.5% of declared vehicle value) is provided to safeguard your car against any road transit risk.'],
    ['q' => 'What documents are required to shift a car from Safipur Unnao?', 'a' => 'Required documents include a copy of the Vehicle Registration Certificate (RC), valid insurance copy, owner ID proof (Aadhaar/PAN), and signed pre-loading inspection sheet.'],
    ['q' => 'Can I keep personal belongings inside the car during transport?', 'a' => 'Up to 15-20 kg of non-perishable personal belongings in locked suitcases can be placed in the car trunk at your own discretion.'],
    ['q' => 'How long does car delivery take from Safipur to major Indian cities?', 'a' => 'Deliveries to nearby regional cities like Delhi or Lucknow take 24-48 hours. Interstate routes to Mumbai, Bangalore, or Hyderabad take 3-5 days.'],
    ['q' => 'What type of car carriers do you operate in Safipur?', 'a' => 'We operate single-car enclosed hydraulic container trucks for premium vehicles and multi-car open carriers for budget-friendly transport.'],
    ['q' => 'How do I book car transportation service in Safipur Unnao?', 'a' => 'Call +91 8409531615 or submit your pickup & destination details on WhatsApp for an instant written quote and booking confirmation.']
];

require_once __DIR__ . '/../includes/header.php';
?>

<main class="site-main">

  <!-- 1. Visual Breadcrumb Navigation Bar -->
  <div class="breadcrumb-wrapper">
    <div class="container">
      <div class="breadcrumb-list">
        <span class="breadcrumb-item"><a href="<?php echo SITE_URL; ?>" title="Home">Home</a></span>
        <span class="breadcrumb-separator">/</span>
        <span class="breadcrumb-item"><a href="<?php echo SITE_URL; ?>pages/packers-and-movers-in-unnao.php" title="Unnao">Unnao</a></span>
        <span class="breadcrumb-separator">/</span>
        <span class="breadcrumb-item active">Car Transportation in Safipur</span>
      </div>
    </div>
  </div>

  <!-- 2. Hero Section & Instant WhatsApp Lead Form -->
  <section class="hero-section" style="background: linear-gradient(135deg, #0b132b 0%, #1c2541 100%); padding: 60px 0; color: #ffffff;">
    <div class="container">
      <div class="hero-grid" style="display: grid; grid-template-columns: 1.2fr 0.8fr; gap: 40px; align-items: center;">
        
        <!-- Hero Text Column -->
        <div class="hero-text">
          <span class="section-tag" style="background: rgba(245, 158, 11, 0.15); color: #f59e0b; border: 1px solid rgba(245, 158, 11, 0.4); padding: 6px 16px; border-radius: 20px; font-size: 0.85rem; font-weight: 700; text-transform: uppercase; display: inline-block; margin-bottom: 15px;">
            Enclosed Hydraulic Car Carrier
          </span>
          <h1 style="font-size: 2.6rem; font-weight: 800; line-height: 1.2; margin-bottom: 20px; color: #ffffff;">
            Safe &amp; Insured <span style="color: #f59e0b;">Car Transportation in Safipur</span>
          </h1>
          <p style="font-size: 1.05rem; color: #cbd5e1; line-height: 1.7; margin-bottom: 25px;">
            Looking for trustworthy car shipping in Safipur (Unnao, UP)? Shree Ashirwad Packers and Movers offers hydraulic container loading, enclosed car trailers, doorstep pickup, 100% transit insurance, and IBA-approved GST bills.
          </p>

          <div style="display: flex; gap: 15px; flex-wrap: wrap; margin-bottom: 30px;">
            <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Now:" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
              <i class="fas fa-phone-alt"></i> Call Now: <?php echo SITE_PHONE; ?>
            </a>
            <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20information%20about%20car%20transportation%20in%20Safipur." title="Chat on WhatsApp" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
              <i class="fab fa-whatsapp"></i> Chat on WhatsApp
            </a>
          </div>

          <div style="display: flex; gap: 20px; font-size: 0.9rem; color: #94a3b8;">
            <span><strong style="color: #f59e0b;">1,450+</strong> Cars Delivered</span>
            <span><strong style="color: #f59e0b;">Hydraulic</strong> Ramp Container</span>
            <span><strong style="color: #f59e0b;">100%</strong> IBA GST Claims</span>
          </div>
        </div>

        <!-- Hero Lead Form Column -->
        <div class="hero-form-card" style="background: rgba(255, 255, 255, 0.05); backdrop-filter: blur(10px); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 16px; padding: 30px; box-shadow: 0 15px 35px rgba(0,0,0,0.4);">
          <h2 style="font-size: 1.4rem; color: #ffffff; margin-bottom: 8px; font-weight: 700; text-align: center;">Get Car Transport Quote</h2>
          <p style="font-size: 0.85rem; color: #94a3b8; text-align: center; margin-bottom: 20px;">Receive transparent cost estimation on WhatsApp in 2 minutes</p>

          <form action="#" method="POST" onsubmit="sendHeroWhatsAppLead(event, this);">
            <div style="margin-bottom: 14px;">
              <input type="text" name="name" class="form-control" placeholder="Your Full Name" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="margin-bottom: 14px;">
              <input type="tel" name="phone" class="form-control" placeholder="10-Digit Phone / WhatsApp Number" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 10px; margin-bottom: 14px;">
              <input type="text" name="move_from" class="form-control" placeholder="Pickup (e.g. Safipur)" value="Safipur" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
              <input type="text" name="move_to" class="form-control" placeholder="Destination City" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="margin-bottom: 16px;">
              <textarea name="message" class="form-control" rows="2" placeholder="Car Model (e.g. Swift, Creta, City, Fortuner)" style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;"></textarea>
            </div>
            <button type="submit" class="btn btn-primary" style="width: 100%; padding: 14px; font-weight: 700; font-size: 1rem; border-radius: 8px;">
              Get Quote on WhatsApp
            </button>
          </form>
        </div>

      </div>
    </div>
  </section>

  <!-- 3. Key Stats Counter Bar -->
  <section class="stats-section" style="padding: 45px 0; background: #070d1e; border-bottom: 1px solid rgba(245, 158, 11, 0.2);">
    <div class="container">
      <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 20px; text-align: center;">
        <div style="padding: 20px; background: rgba(23, 42, 84, 0.5); border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">1,450+</div>
          <div style="font-size: 0.9rem; color: #cbd5e1; margin-top: 5px;">Cars Relocated in Unnao</div>
        </div>
        <div style="padding: 20px; background: rgba(23, 42, 84, 0.5); border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">Hydraulic</div>
          <div style="font-size: 0.9rem; color: #cbd5e1; margin-top: 5px;">Ramp Loading System</div>
        </div>
        <div style="padding: 20px; background: rgba(23, 42, 84, 0.5); border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">GPS</div>
          <div style="font-size: 0.9rem; color: #cbd5e1; margin-top: 5px;">Live Vehicle Location Tracking</div>
        </div>
        <div style="padding: 20px; background: rgba(23, 42, 84, 0.5); border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">IBA Approved</div>
          <div style="font-size: 0.9rem; color: #cbd5e1; margin-top: 5px;">Official Claim Documentation</div>
        </div>
      </div>
    </div>
  </section>

  <!-- 4. 6-Card Feature Grid (3x2 Layout) -->
  <section style="padding: 65px 0; background: #0b132b; color: #e2e8f0; line-height: 1.8;">
    <div class="container">
      
      <div style="max-width: 950px; margin: 0 auto;">
        <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Car Carrier Advantages</span>
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin: 10px 0 20px 0;">
          Why Choose Us for <span style="color: #f59e0b;">Car Transportation in Safipur</span>?
        </h2>

        <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px; margin: 30px 0;">
          
          <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px;">
            <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;"><i class="fas fa-car-side"></i></div>
            <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">Doorstep Car Pickup</h3>
            <p style="font-size: 0.9rem; color: #cbd5e1; margin: 0;">
              Our expert drivers collect your hatchback, sedan, or SUV directly from your residence in Safipur Unnao.
            </p>
          </div>

          <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px;">
            <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;"><i class="fas fa-truck-ramp-box"></i></div>
            <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">Hydraulic Ramp Loading</h3>
            <p style="font-size: 0.9rem; color: #cbd5e1; margin: 0;">
              Smooth hydraulic loading ramps prevent undercarriage scraping for low ground clearance luxury sedans.
            </p>
          </div>

          <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px;">
            <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;"><i class="fas fa-file-invoice-dollar"></i></div>
            <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">IBA Approved GST Bills</h3>
            <p style="font-size: 0.9rem; color: #cbd5e1; margin: 0;">
              Genuine IBA-compliant tax invoices for defense, corporate, government, and banking employee allowance claims.
            </p>
          </div>

          <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px;">
            <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;"><i class="fas fa-shield-alt"></i></div>
            <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">Full Transit Insurance</h3>
            <p style="font-size: 0.9rem; color: #cbd5e1; margin: 0;">
              Comprehensive transit insurance covering your vehicle against unexpected highway incidents and transit damages.
            </p>
          </div>

          <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px;">
            <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;"><i class="fas fa-trailer"></i></div>
            <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">Enclosed Container Trucks</h3>
            <p style="font-size: 0.9rem; color: #cbd5e1; margin: 0;">
              Single-car covered container trucks protect your car from weather elements, road debris, and dust.
            </p>
          </div>

          <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px;">
            <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;"><i class="fas fa-satellite-dish"></i></div>
            <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">GPS Location Tracking</h3>
            <p style="font-size: 0.9rem; color: #cbd5e1; margin: 0;">
              Receive live location updates of your car carrier via WhatsApp from loading to doorstep handover.
            </p>
          </div>

        </div>

      </div>

    </div>
  </section>

  <!-- 5. Specialized Services Breakdown (6 Cards) -->
  <section style="padding: 60px 0; background: #070d1e; color: #ffffff;">
    <div class="container" style="max-width: 950px;">
      
      <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Relocation Portfolio</span>
      <h2 style="font-size: 2.1rem; font-weight: 800; color: #ffffff; margin: 10px 0 25px 0;">
        Specialized Automobile Services in <span style="color: #f59e0b;">Safipur</span>
      </h2>

      <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px;">
        <div style="background: #101c40; padding: 20px; border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #f59e0b; font-size: 1.05rem; margin-bottom: 8px;">Hatchback &amp; Sedan Shifting</h4>
          <p style="font-size: 0.88rem; color: #cbd5e1; margin: 0;">Insured transport for Swift, i20, Dzire, Honda City &amp; Ciaz.</p>
        </div>

        <div style="background: #101c40; padding: 20px; border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #f59e0b; font-size: 1.05rem; margin-bottom: 8px;">SUV &amp; MUV Shipping</h4>
          <p style="font-size: 0.88rem; color: #cbd5e1; margin: 0;">Heavy-duty carrier transport for Creta, Scorpio, XUV700, Harrier &amp; Fortuner.</p>
        </div>

        <div style="background: #101c40; padding: 20px; border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #f59e0b; font-size: 1.05rem; margin-bottom: 8px;">Luxury Car Transport</h4>
          <p style="font-size: 0.88rem; color: #cbd5e1; margin: 0;">Enclosed single-car container transport for Mercedes-Benz, BMW, Audi &amp; Jaguar.</p>
        </div>

        <div style="background: #101c40; padding: 20px; border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #f59e0b; font-size: 1.05rem; margin-bottom: 8px;">Household Goods Shifting</h4>
          <p style="font-size: 0.88rem; color: #cbd5e1; margin: 0;">Combined relocation of home furniture and household items alongside your car.</p>
        </div>

        <div style="background: #101c40; padding: 20px; border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #f59e0b; font-size: 1.05rem; margin-bottom: 8px;">Corporate Fleet Transfer</h4>
          <p style="font-size: 0.88rem; color: #cbd5e1; margin: 0;">Bulk corporate vehicle relocation for companies and executive relocations.</p>
        </div>

        <div style="background: #101c40; padding: 20px; border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #f59e0b; font-size: 1.05rem; margin-bottom: 8px;">Vehicle Warehousing</h4>
          <p style="font-size: 0.88rem; color: #cbd5e1; margin: 0;">Secure CCTV-monitored short and long-term car storage facilities in Unnao.</p>
        </div>
      </div>

    </div>
  </section>

  <!-- 6. 7-Layer Safety Packaging Framework -->
  <section style="padding: 60px 0; background: #0b132b; color: #ffffff;">
    <div class="container" style="max-width: 950px;">
      
      <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Safety Protocol</span>
      <h2 style="font-size: 2.1rem; font-weight: 800; color: #ffffff; margin: 10px 0 25px 0;">
        Our 7-Step Car Protection Framework
      </h2>

      <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 15px;">
        <div style="background: #172a54; padding: 18px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <div style="font-size: 0.8rem; color: #f59e0b; font-weight: 700;">STEP 01</div>
          <h4 style="font-size: 0.95rem; color: #fff; margin: 4px 0;">Pre-Loading Inspection</h4>
          <p style="font-size: 0.82rem; color: #cbd5e1; margin: 0;">Detailed condition report logging scratches, fuel level &amp; odometer reading.</p>
        </div>

        <div style="background: #172a54; padding: 18px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <div style="font-size: 0.8rem; color: #f59e0b; font-weight: 700;">STEP 02</div>
          <h4 style="font-size: 0.95rem; color: #fff; margin: 4px 0;">Hydraulic Ramp Drive-On</h4>
          <p style="font-size: 0.82rem; color: #cbd5e1; margin: 0;">Car driven onto truck container bed using zero-tilt hydraulic ramp.</p>
        </div>

        <div style="background: #172a54; padding: 18px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <div style="font-size: 0.8rem; color: #f59e0b; font-weight: 700;">STEP 03</div>
          <h4 style="font-size: 0.95rem; color: #fff; margin: 4px 0;">4-Point Wheel Tie-Down</h4>
          <p style="font-size: 0.82rem; color: #cbd5e1; margin: 0;">Heavy-duty nylon wheel straps securing all 4 wheels to container floor hooks.</p>
        </div>

        <div style="background: #172a54; padding: 18px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <div style="font-size: 0.8rem; color: #f59e0b; font-weight: 700;">STEP 04</div>
          <h4 style="font-size: 0.95rem; color: #fff; margin: 4px 0;">Rubber Wheel Chocks</h4>
          <p style="font-size: 0.82rem; color: #cbd5e1; margin: 0;">Industrial rubber blocks placed behind tires to prevent forward/rear movement.</p>
        </div>

        <div style="background: #172a54; padding: 18px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <div style="font-size: 0.8rem; color: #f59e0b; font-weight: 700;">STEP 05</div>
          <h4 style="font-size: 0.95rem; color: #fff; margin: 4px 0;">Body &amp; Mirror Wrap</h4>
          <p style="font-size: 0.82rem; color: #cbd5e1; margin: 0;">Protective film applied on side mirrors, bumpers, and handles.</p>
        </div>

        <div style="background: #172a54; padding: 18px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <div style="font-size: 0.8rem; color: #f59e0b; font-weight: 700;">STEP 06</div>
          <h4 style="font-size: 0.95rem; color: #fff; margin: 4px 0;">Sealed Container Lock</h4>
          <p style="font-size: 0.82rem; color: #cbd5e1; margin: 0;">Container door sealed with tamper-proof security locks before departure.</p>
        </div>

        <div style="background: #172a54; padding: 18px; border-radius: 10px; border-left: 4px solid #f59e0b; grid-column: span 2;">
          <div style="font-size: 0.8rem; color: #f59e0b; font-weight: 700;">STEP 07</div>
          <h4 style="font-size: 0.95rem; color: #fff; margin: 4px 0;">Doorstep Unloading &amp; Inspection</h4>
          <p style="font-size: 0.82rem; color: #cbd5e1; margin: 0;">Unloading at destination and joint inspection against pre-loading sheet.</p>
        </div>
      </div>

    </div>
  </section>

  <!-- 7. Origin Pickup Locality Grid (4 Contextual Links) -->
  <section style="padding: 60px 0; background: #070d1e; color: #ffffff;">
    <div class="container" style="max-width: 900px;">
      
      <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Unnao District Network</span>
      <h2 style="font-size: 2.1rem; font-weight: 800; color: #ffffff; margin: 10px 0 20px 0;">
        Car Pickup Locations Across <span style="color: #f59e0b;">Unnao District</span>
      </h2>

      <p style="font-size: 1rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 20px;">
        We collect vehicles from Safipur and all major sectors across Unnao district:
      </p>

      <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 16px; margin-bottom: 25px;">
        <div style="background: #101c40; padding: 18px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #ffffff; font-size: 1.05rem; margin-bottom: 6px;">Unnao Central Master Hub</h4>
          <p style="font-size: 0.88rem; color: #94a3b8; margin-bottom: 8px;">Main car carrier loading hub serving Unnao city and highway belt.</p>
          <a href="<?php echo SITE_URL; ?>pages/packers-and-movers-in-unnao.php" title="Packers Movers Unnao Master Hub →" style="color: #f59e0b; text-decoration: underline; font-weight: 600; font-size: 0.88rem;">
            Packers Movers Unnao Master Hub →
          </a>
        </div>

        <div style="background: #101c40; padding: 18px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #ffffff; font-size: 1.05rem; margin-bottom: 6px;">Safipur Bike Transportation</h4>
          <p style="font-size: 0.88rem; color: #94a3b8; margin-bottom: 8px;">Doorstep motorcycle and scooter parcel shipping in Safipur Unnao.</p>
          <a href="<?php echo SITE_URL; ?>pages/bike-transportation-in-safipur.php" title="Bike Transportation Safipur →" style="color: #f59e0b; text-decoration: underline; font-weight: 600; font-size: 0.88rem;">
            Bike Transportation Safipur →
          </a>
        </div>

        <div style="background: #101c40; padding: 18px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #ffffff; font-size: 1.05rem; margin-bottom: 6px;">Fatehpur Chaurasi Car Carrier</h4>
          <p style="font-size: 0.88rem; color: #94a3b8; margin-bottom: 8px;">Car transportation hub serving Fatehpur Chaurasi &amp; Safipur belt.</p>
          <a href="<?php echo SITE_URL; ?>pages/car-transportation-in-fatehpur-chaurasi.php" title="Car Transportation Fatehpur Chaurasi →" style="color: #f59e0b; text-decoration: underline; font-weight: 600; font-size: 0.88rem;">
            Car Transportation Fatehpur Chaurasi →
          </a>
        </div>

        <div style="background: #101c40; padding: 18px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #ffffff; font-size: 1.05rem; margin-bottom: 6px;">Kanpur Regional Hub</h4>
          <p style="font-size: 0.88rem; color: #94a3b8; margin-bottom: 8px;">Major industrial hub serving Kanpur-Unnao industrial belt.</p>
          <a href="<?php echo SITE_URL; ?>pages/packers-and-movers-in-kanpur.php" title="Packers Movers Kanpur Hub →" style="color: #f59e0b; text-decoration: underline; font-weight: 600; font-size: 0.88rem;">
            Packers Movers Kanpur Hub →
          </a>
        </div>
      </div>

    </div>
  </section>

  <!-- 8. Intercity Route Network Grid (4 Contextual Links) -->
  <section style="padding: 60px 0; background: #0b132b; color: #ffffff;">
    <div class="container" style="max-width: 900px;">
      
      <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Major Highway Corridors</span>
      <h2 style="font-size: 2.1rem; font-weight: 800; color: #ffffff; margin: 10px 0 20px 0;">
        Popular Car Shipping Routes from <span style="color: #f59e0b;">Safipur</span>
      </h2>

      <p style="font-size: 1rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 20px;">
        Daily car carrier departures connecting Safipur Unnao to major Indian metropolitan hubs:
      </p>

      <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 16px; margin-bottom: 25px;">
        <div style="background: #172a54; padding: 18px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #ffffff; font-size: 1.05rem; margin-bottom: 6px;">Unnao to Delhi-NCR</h4>
          <p style="font-size: 0.88rem; color: #94a3b8; margin-bottom: 8px;">Express car container routes to Delhi, Noida, Gurgaon &amp; Ghaziabad.</p>
        </div>

        <div style="background: #172a54; padding: 18px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #ffffff; font-size: 1.05rem; margin-bottom: 6px;">Unnao to Mumbai / Pune</h4>
          <p style="font-size: 0.88rem; color: #94a3b8; margin-bottom: 8px;">Insured car carrier services connecting Unnao to Maharashtra.</p>
        </div>

        <div style="background: #172a54; padding: 18px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #ffffff; font-size: 1.05rem; margin-bottom: 6px;">Unnao to Bangalore / Hyderabad</h4>
          <p style="font-size: 0.88rem; color: #94a3b8; margin-bottom: 8px;">Long-distance car container trucks to tech hubs in South India.</p>
        </div>

        <div style="background: #172a54; padding: 18px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #ffffff; font-size: 1.05rem; margin-bottom: 6px;">Unnao to Kolkata / Patna</h4>
          <p style="font-size: 0.88rem; color: #94a3b8; margin-bottom: 8px;">Express vehicle transport connecting Unnao to East India corridors.</p>
        </div>
      </div>

    </div>
  </section>

  <!-- 9. IBA Approved GST Billing Documentation -->
  <section style="padding: 60px 0; background: #070d1e; color: #ffffff;">
    <div class="container" style="max-width: 900px;">
      
      <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Official Claims Documentation</span>
      <h2 style="font-size: 2.1rem; font-weight: 800; color: #ffffff; margin: 10px 0 20px 0;">
        IBA Approved GST Billing for Car Transport in Safipur
      </h2>

      <div style="background: #101c40; border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 12px; padding: 25px;">
        <h4 style="color: #f59e0b; font-size: 1.1rem; margin-bottom: 12px; font-weight: 700;">Complete Vehicle Relocation Claim Set:</h4>
        <ol style="margin: 0; padding-left: 20px; color: #cbd5e1; line-height: 1.8; font-size: 0.95rem;">
          <li><strong>Official GST Consignment Invoice</strong> with itemized car carrier freight charges.</li>
          <li><strong>Pre-Loading Vehicle Condition Inspection Sheet</strong> recorded at Safipur.</li>
          <li><strong>Consignment Lorry Receipt (LR Copy)</strong> with truck number and driver details.</li>
          <li><strong>IBA Approved Stamp &amp; Registration Code</strong> on official letterhead.</li>
          <li><strong>Comprehensive Transit Insurance Policy Copy</strong>.</li>
          <li><strong>Stamped Payment Receipt</strong> for defense, corporate, or government reimbursement submission.</li>
        </ol>
      </div>

    </div>
  </section>

  <!-- 10. 10 Detailed FAQs + Valid JSON-LD FAQPage Schema -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "mainEntity": [
      <?php 
      $schema_items = [];
      foreach ($faq_list as $faq) {
          $schema_items[] = '{
            "@type": "Question",
            "name": ' . json_encode($faq['q']) . ',
            "acceptedAnswer": {
              "@type": "Answer",
              "text": ' . json_encode($faq['a']) . '
            }
          }';
      }
      echo implode(',', $schema_items);
      ?>
    ]
  }
  </script>

  <section style="padding: 60px 0; background: #0b132b; color: #ffffff;">
    <div class="container" style="max-width: 900px;">
      
      <div class="section-header text-center" style="margin-bottom: 40px;">
        <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Got Questions?</span>
        <h2 style="font-size: 2.1rem; font-weight: 800; color: #ffffff; margin-top: 10px;">
          Frequently Asked Questions About <span style="color: #f59e0b;">Car Transport in Safipur</span>
        </h2>
      </div>

      <div style="display: flex; flex-direction: column; gap: 14px;">
        <?php foreach ($faq_list as $idx => $faq): ?>
          <div style="background: #101c40; padding: 20px 24px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
            <h3 style="font-size: 1.05rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Q<?php echo ($idx + 1); ?>: <?php echo htmlspecialchars($faq['q']); ?></h3>
            <p style="font-size: 0.92rem; color: #cbd5e1; margin: 0; line-height: 1.7;">
              <?php echo htmlspecialchars($faq['a']); ?>
            </p>
          </div>
        <?php endforeach; ?>
      </div>

    </div>
  </section>

  <!-- 11. Call-To-Action (CTA) Conversion Footer -->
  <section style="padding: 60px 0; background: linear-gradient(135deg, #172a54 0%, #0b132b 100%); border-top: 1.5px solid rgba(245, 158, 11, 0.4); color: #ffffff;">
    <div class="container" style="max-width: 900px; text-align: center;">
      
      <span class="section-tag" style="background: rgba(245, 158, 11, 0.2); color: #f59e0b; padding: 6px 16px; border-radius: 20px; font-size: 0.85rem; font-weight: 700; text-transform: uppercase;">
        Book Car Shipping in Safipur
      </span>

      <h2 style="font-size: 2.2rem; font-weight: 800; margin: 15px 0 15px 0; color: #ffffff;">
        Need Safe <span style="color: #f59e0b;">Car Transportation in Safipur</span>?
      </h2>

      <p style="font-size: 1.05rem; color: #cbd5e1; max-width: 750px; margin: 0 auto 30px auto; line-height: 1.7;">
        Contact our Unnao Head Office today for a transparent fixed-price quote and enjoy door-to-door insured car container transport across India.
      </p>

      <div style="display: flex; gap: 15px; justify-content: center; flex-wrap: wrap;">
        <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Now:" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 30px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1.05rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
          <i class="fas fa-phone-alt"></i> Call Now: <?php echo SITE_PHONE; ?>
        </a>
        <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20a%20car%20transport%20quote%20for%20Safipur." title="Chat on WhatsApp" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 30px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1.05rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
          <i class="fab fa-whatsapp"></i> Chat on WhatsApp
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
  var extraMsg = form.querySelector('[name="message"]').value;
  
  var message = "Hello Shree Ashirwad Packers & Movers,\n\nI would like to request a Car Transport Quote from Safipur Unnao:\n- Name: " + name + "\n- Phone: " + phone + "\n- Moving From: " + moveFrom + "\n- Moving To: " + moveTo;
  
  if (extraMsg && extraMsg.trim() !== '') {
    message += "\n- Car Model: " + extraMsg;
  }
  
  var whatsappUrl = "https://api.whatsapp.com/send?phone=918409531615&text=" + encodeURIComponent(message);
  window.location.href = whatsappUrl;
}
</script>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>

