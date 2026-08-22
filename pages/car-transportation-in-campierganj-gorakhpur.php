<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "Car Transportation in Campierganj Gorakhpur | Safe Car Carrier";
$page_desc = "Reliable car transportation service in Campierganj, Gorakhpur. Closed container car trailers, doorstep pickup, full transit insurance, and 100% IBA GST billing. Call 8409531615.";
$page_keywords = "car transportation in campierganj gorakhpur, car carrier service campierganj, car movers campierganj gorakhpur, vehicle transport campierganj";
$canonical_url = "https://shreeashirwadpackersandmovers.com/car-transportation-in-campierganj-gorakhpur";

$page_city = "Campierganj, Gorakhpur, Uttar Pradesh";

$faq_list = [
    ['q' => 'How is my car transported from Campierganj to another city?', 'a' => 'Your vehicle is loaded onto a specialized covered multi-car trailer using hydraulic ramps and locked firmly with wheel chocks and heavy nylon wheel straps.'],
    ['q' => 'What is the cost of car transportation from Campierganj Gorakhpur?', 'a' => 'Car transportation charges depend on vehicle type (hatchback, sedan, SUV) and destination distance. Intercity rates start from ₹6,500 to ₹18,500 with full insurance.'],
    ['q' => 'Can I keep personal items inside my car during transit?', 'a' => 'Up to 15-20 kg of non-perishable personal items stored neatly in the car trunk are permitted. However, cash, jewellery, and confidential documents must not be left inside.'],
    ['q' => 'Is car transit insurance included in the quotation?', 'a' => 'Transit insurance is calculated based on your car\'s Insured Declared Value (IDV) and provides 100% financial security against transit risks.'],
    ['q' => 'How much fuel should be in the car at pickup?', 'a' => 'We recommend leaving around 5 to 10 liters of fuel in the tank so the car can be driven on and off the trailer and delivered to your doorstep.'],
    ['q' => 'Do you provide door-to-door car pickup in Campierganj Tehsil?', 'a' => 'Yes, our driver picks up the car directly from your residence in Campierganj and delivers it to your destination address anywhere in India.'],
    ['q' => 'What documents are required for shipping my car from Campierganj?', 'a' => 'You need to provide a copy of your Car Registration Certificate (RC), active Insurance policy, Pollution Certificate (PUC), and owner ID proof.'],
    ['q' => 'How long does car transport take from Campierganj to major metros?', 'a' => 'Transit to Delhi NCR takes 2-3 days, while long-distance delivery to Mumbai, Pune, or Bangalore takes 4-6 days depending on route conditions.'],
    ['q' => 'Can I track my car location live during transport?', 'a' => 'Yes, all our car carrier trailers are equipped with real-time GPS tracking devices, providing regular status updates via WhatsApp.'],
    ['q' => 'Are your car shipping bills valid for corporate and government claim reimbursement?', 'a' => 'Yes, we issue 100% valid GST invoices, car LR receipts, and IBA-approved documentation accepted by corporate firms and government departments.']
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
        <span class="breadcrumb-item"><a href="<?php echo SITE_URL; ?>packers-and-movers-in-gorakhpur" title="Gorakhpur">Gorakhpur</a></span>
        <span class="breadcrumb-separator">/</span>
        <span class="breadcrumb-item active"><?php echo htmlspecialchars($page_title); ?></span>
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
            CAR TRANSPORTATION CAMPIERGANJ GORAKHPUR
          </span>
          <h1 style="font-size: 2.6rem; font-weight: 800; line-height: 1.2; margin-bottom: 20px; color: #ffffff;">
            Safe &amp; Insured <span style="color: #f59e0b;">Car Transportation in Campierganj Gorakhpur</span>
          </h1>
          <p style="font-size: 1.05rem; color: #cbd5e1; line-height: 1.7; margin-bottom: 25px;">
            Shree Ashirwad Packers and Movers delivers scratch-free, insured car transportation from Campierganj Tehsil and Gorakhpur to any city in India. We utilize specialized multi-car covered trailers with hydraulic ramps for maximum safety.
          </p>

          <div style="display: flex; gap: 15px; flex-wrap: wrap; margin-bottom: 30px;">
            <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Now" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
              <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call Now: <?php echo SITE_PHONE; ?>
            </a>
            <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20a%20car%20transportation%20quote%20for%20Campierganj%20Gorakhpur." title="Chat on WhatsApp" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
              <i class="fab fa-whatsapp" style="margin-right: 8px;"></i> Chat on WhatsApp
            </a>
          </div>

          <div style="display: flex; gap: 20px; font-size: 0.9rem; color: #94a3b8;">
            <span><strong style="color: #f59e0b;">8,500+</strong> Cars Shifted</span>
            <span><strong style="color: #f59e0b;">Enclosed</strong> Trailer Fleet</span>
            <span><strong style="color: #f59e0b;">100%</strong> Transit Insurance</span>
          </div>
        </div>

        <!-- Hero Lead Form Column -->
        <div class="hero-form-card" style="background: rgba(255, 255, 255, 0.05); backdrop-filter: blur(10px); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 16px; padding: 30px; box-shadow: 0 15px 35px rgba(0,0,0,0.4);">
          <h2 style="font-size: 1.4rem; color: #ffffff; margin-bottom: 8px; font-weight: 700; text-align: center;">Get Campierganj Car Quote</h2>
          <p style="font-size: 0.85rem; color: #94a3b8; text-align: center; margin-bottom: 20px;">Receive transparent car carrier estimation on WhatsApp</p>

          <form action="#" method="POST" onsubmit="sendHeroWhatsAppLead(event, this);">
            <div style="margin-bottom: 14px;">
              <input type="text" name="name" class="form-control" placeholder="Your Full Name" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="margin-bottom: 14px;">
              <input type="tel" name="phone" class="form-control" placeholder="10-Digit Phone / WhatsApp Number" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 10px; margin-bottom: 14px;">
              <input type="text" name="move_from" class="form-control" placeholder="Pickup Area" value="Campierganj, Gorakhpur" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
              <input type="text" name="move_to" class="form-control" placeholder="Destination City" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="margin-bottom: 16px;">
              <textarea name="message" class="form-control" rows="2" placeholder="Car Model (e.g. Maruti Swift, Hyundai Creta, Honda City, SUV)" style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;"></textarea>
            </div>
            <button type="submit" class="btn btn-primary" style="width: 100%; padding: 14px; background: linear-gradient(135deg, #d32f2f 0%, #f59e0b 100%); color: #ffffff; border: none; border-radius: 50px; font-weight: 700; font-size: 1rem; cursor: pointer;">
              Get Car Quote on WhatsApp &rarr;
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
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">8,500+</div>
          <div style="font-size: 0.9rem; color: #cbd5e1; margin-top: 5px;">Cars Shifted from Gorakhpur</div>
        </div>
        <div style="padding: 20px; background: rgba(23, 42, 84, 0.5); border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">100%</div>
          <div style="font-size: 0.9rem; color: #cbd5e1; margin-top: 5px;">Enclosed Auto Trailers</div>
        </div>
        <div style="padding: 20px; background: rgba(23, 42, 84, 0.5); border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">Zero</div>
          <div style="font-size: 0.9rem; color: #cbd5e1; margin-top: 5px;">Scratch &amp; Damage Guarantee</div>
        </div>
        <div style="padding: 20px; background: rgba(23, 42, 84, 0.5); border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">IBA Approved</div>
          <div style="font-size: 0.9rem; color: #cbd5e1; margin-top: 5px;">Official GST Invoice</div>
        </div>
      </div>
    </div>
  </section>

  <!-- 4. 6-Card Feature Grid (3x2 Layout) -->
  <section style="padding: 65px 0; background: #0b132b; color: #e2e8f0; line-height: 1.8;">
    <div class="container">
      
      <div style="max-width: 950px; margin: 0 auto;">
        <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Safety Features</span>
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin: 10px 0 20px 0;">
          Why Choose Car Transport in <span style="color: #f59e0b;">Campierganj Gorakhpur</span>?
        </h2>

        <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px; margin: 30px 0;">
          
          <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px;">
            <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;"><i class="fas fa-truck-monster"></i></div>
            <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">Covered Auto Trailers</h3>
            <p style="font-size: 0.9rem; color: #cbd5e1; margin: 0;">
              Fully enclosed multi-deck car carriers protect your vehicle from highway debris, dust storms, and weather hazards.
            </p>
          </div>

          <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px;">
            <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;"><i class="fas fa-shield-alt"></i></div>
            <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">Hydraulic Ramp Loading</h3>
            <p style="font-size: 0.9rem; color: #cbd5e1; margin: 0;">
              Low-angle hydraulic ramps prevent undercarriage scraping for low ground-clearance sedans and sports cars.
            </p>
          </div>

          <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px;">
            <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;"><i class="fas fa-key"></i></div>
            <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">Door Pickup &amp; Delivery</h3>
            <p style="font-size: 0.9rem; color: #cbd5e1; margin: 0;">
              Convenient doorstep pickup in Campierganj and direct handover at your destination address.
            </p>
          </div>

          <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px;">
            <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;"><i class="fas fa-file-contract"></i></div>
            <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">Full Transit Insurance</h3>
            <p style="font-size: 0.9rem; color: #cbd5e1; margin: 0;">
              Comprehensive transit insurance policy covering total car value against highway risks.
            </p>
          </div>

          <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px;">
            <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;"><i class="fas fa-clipboard-check"></i></div>
            <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">Condition Inspection Report</h3>
            <p style="font-size: 0.9rem; color: #cbd5e1; margin: 0;">
              Detailed pre-loading inspection sheet recording exact odometer reading, fuel level, and car condition.
            </p>
          </div>

          <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px;">
            <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;"><i class="fas fa-satellite"></i></div>
            <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">Real-Time GPS Tracking</h3>
            <p style="font-size: 0.9rem; color: #cbd5e1; margin: 0;">
              Live GPS tracking updates sent directly to your phone throughout the long-distance vehicle journey.
            </p>
          </div>

        </div>

      </div>

    </div>
  </section>

  <!-- 5. Specialized Services Breakdown -->
  <section style="padding: 60px 0; background: #070d1e; color: #ffffff;">
    <div class="container" style="max-width: 950px;">
      
      <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Car Logistics Portfolio</span>
      <h2 style="font-size: 2.1rem; font-weight: 800; color: #ffffff; margin: 10px 0 25px 0;">
        Specialized Car Shipping Services in <span style="color: #f59e0b;">Campierganj Gorakhpur</span>
      </h2>

      <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px;">
        <div style="background: #101c40; padding: 20px; border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #f59e0b; font-size: 1.05rem; margin-bottom: 8px;">Hatchback &amp; Sedan Move</h4>
          <p style="font-size: 0.88rem; color: #cbd5e1; margin: 0;">Safe, budget-friendly car shipping for daily family cars and compact sedans.</p>
        </div>

        <div style="background: #101c40; padding: 20px; border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #f59e0b; font-size: 1.05rem; margin-bottom: 8px;">SUV &amp; MUV Shipping</h4>
          <p style="font-size: 0.88rem; color: #cbd5e1; margin: 0;">Heavy-duty carrier allocation for 7-seater SUVs, crossovers, and utility vehicles.</p>
        </div>

        <div style="background: #101c40; padding: 20px; border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #f59e0b; font-size: 1.05rem; margin-bottom: 8px;">Luxury Car Transport</h4>
          <p style="font-size: 0.88rem; color: #cbd5e1; margin: 0;">Enclosed single-car container transport for premium brands (BMW, Audi, Mercedes).</p>
        </div>

        <div style="background: #101c40; padding: 20px; border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #f59e0b; font-size: 1.05rem; margin-bottom: 8px;">Electric Vehicle (EV) Move</h4>
          <p style="font-size: 0.88rem; color: #cbd5e1; margin: 0;">Specialized EV transport with battery safety monitoring and secure tie-downs.</p>
        </div>

        <div style="background: #101c40; padding: 20px; border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #f59e0b; font-size: 1.05rem; margin-bottom: 8px;">Corporate Fleet Relocation</h4>
          <p style="font-size: 0.88rem; color: #cbd5e1; margin: 0;">Bulk car carrier solutions for corporate employee transfers and dealership logistics.</p>
        </div>

        <div style="background: #101c40; padding: 20px; border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #f59e0b; font-size: 1.05rem; margin-bottom: 8px;">Combined House + Car</h4>
          <p style="font-size: 0.88rem; color: #cbd5e1; margin: 0;">Integrated home shifting + car transport combo packages for maximum savings.</p>
        </div>
      </div>

    </div>
  </section>

  <!-- 6. 7-Layer Safety Packaging Framework -->
  <section style="padding: 60px 0; background: #0b132b; color: #ffffff;">
    <div class="container" style="max-width: 950px;">
      
      <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Safety Protocol</span>
      <h2 style="font-size: 2.1rem; font-weight: 800; color: #ffffff; margin: 10px 0 25px 0;">
        7-Stage Car Protection &amp; Securing Framework
      </h2>

      <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 15px;">
        <div style="background: #172a54; padding: 18px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <div style="font-size: 0.8rem; color: #f59e0b; font-weight: 700;">STAGE 01</div>
          <h4 style="font-size: 0.95rem; color: #fff; margin: 4px 0;">Pre-Pickup Inspection</h4>
          <p style="font-size: 0.82rem; color: #cbd5e1; margin: 0;">Detailed vehicle audit &amp; photographic condition sheet.</p>
        </div>

        <div style="background: #172a54; padding: 18px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <div style="font-size: 0.8rem; color: #f59e0b; font-weight: 700;">STAGE 02</div>
          <h4 style="font-size: 0.95rem; color: #fff; margin: 4px 0;">Interior Seat Covers</h4>
          <p style="font-size: 0.82rem; color: #cbd5e1; margin: 0;">Protective plastic covers fitted on car seats &amp; steering.</p>
        </div>

        <div style="background: #172a54; padding: 18px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <div style="font-size: 0.8rem; color: #f59e0b; font-weight: 700;">STAGE 03</div>
          <h4 style="font-size: 0.95rem; color: #fff; margin: 4px 0;">Bumper Foam Padding</h4>
          <p style="font-size: 0.82rem; color: #cbd5e1; margin: 0;">High-density foam buffers on side mirrors &amp; bumpers.</p>
        </div>

        <div style="background: #172a54; padding: 18px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <div style="font-size: 0.8rem; color: #f59e0b; font-weight: 700;">STAGE 04</div>
          <h4 style="font-size: 0.95rem; color: #fff; margin: 4px 0;">Hydraulic Ramp Loading</h4>
          <p style="font-size: 0.82rem; color: #cbd5e1; margin: 0;">Precision ramp alignment preventing low ground skirt contact.</p>
        </div>

        <div style="background: #172a54; padding: 18px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <div style="font-size: 0.8rem; color: #f59e0b; font-weight: 700;">STAGE 05</div>
          <h4 style="font-size: 0.95rem; color: #fff; margin: 4px 0;">Wheel Chock Lock</h4>
          <p style="font-size: 0.82rem; color: #cbd5e1; margin: 0;">Steel wheel stoppers locked in front &amp; back of all tires.</p>
        </div>

        <div style="background: #172a54; padding: 18px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <div style="font-size: 0.8rem; color: #f59e0b; font-weight: 700;">STAGE 06</div>
          <h4 style="font-size: 0.95rem; color: #fff; margin: 4px 0;">Nylon Harness Tying</h4>
          <p style="font-size: 0.82rem; color: #cbd5e1; margin: 0;">Heavy-duty wheel rim tie-down belts securing vehicle.</p>
        </div>

        <div style="background: #172a54; padding: 18px; border-radius: 10px; border-left: 4px solid #f59e0b; grid-column: span 2;">
          <div style="font-size: 0.8rem; color: #f59e0b; font-weight: 700;">STAGE 07</div>
          <h4 style="font-size: 0.95rem; color: #fff; margin: 4px 0;">Door Lock &amp; Destination Delivery</h4>
          <p style="font-size: 0.82rem; color: #cbd5e1; margin: 0;">Numbered security seal locking &amp; joint doorstep delivery inspection.</p>
        </div>
      </div>

    </div>
  </section>

  <!-- 7. Origin Pickup Locality Grid -->
  <section style="padding: 60px 0; background: #070d1e; color: #ffffff;">
    <div class="container" style="max-width: 900px;">
      
      <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Gorakhpur Network</span>
      <h2 style="font-size: 2.1rem; font-weight: 800; color: #ffffff; margin: 10px 0 20px 0;">
        Locality Coverage Across <span style="color: #f59e0b;">Gorakhpur Region</span>
      </h2>

      <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 16px; margin-bottom: 25px;">
        <div style="background: #101c40; padding: 18px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #ffffff; font-size: 1.05rem; margin-bottom: 6px;">Gorakhpur Master Hub</h4>
          <p style="font-size: 0.88rem; color: #94a3b8; margin-bottom: 8px;">Main auto carrier terminal serving Gorakhpur City.</p>
          <a href="<?php echo SITE_URL; ?>car-transportation-in-gorakhpur" title="Car Transportation Gorakhpur Master Hub →" style="color: #f59e0b; text-decoration: underline; font-weight: 600; font-size: 0.88rem;">
            Car Transportation Gorakhpur Master Hub →
          </a>
        </div>

        <div style="background: #101c40; padding: 18px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #ffffff; font-size: 1.05rem; margin-bottom: 6px;">Campierganj Shifting Sector</h4>
          <p style="font-size: 0.88rem; color: #94a3b8; margin-bottom: 8px;">Doorstep household packing &amp; local house moving.</p>
          <a href="<?php echo SITE_URL; ?>packers-and-movers-in-campierganj-gorakhpur" title="Packers Movers Campierganj Gorakhpur →" style="color: #f59e0b; text-decoration: underline; font-weight: 600; font-size: 0.88rem;">
            Packers Movers Campierganj Gorakhpur →
          </a>
        </div>

        <div style="background: #101c40; padding: 18px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #ffffff; font-size: 1.05rem; margin-bottom: 6px;">Campierganj Bike Carrier</h4>
          <p style="font-size: 0.88rem; color: #94a3b8; margin-bottom: 8px;">Doorstep motorcycle packing &amp; bubble wrap shipping.</p>
          <a href="<?php echo SITE_URL; ?>bike-transportation-in-campierganj-gorakhpur" title="Bike Transportation Campierganj Gorakhpur →" style="color: #f59e0b; text-decoration: underline; font-weight: 600; font-size: 0.88rem;">
            Bike Transportation Campierganj Gorakhpur →
          </a>
        </div>

        <div style="background: #101c40; padding: 18px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #ffffff; font-size: 1.05rem; margin-bottom: 6px;">Sahjanwa Car Carrier</h4>
          <p style="font-size: 0.88rem; color: #94a3b8; margin-bottom: 8px;">Enclosed vehicle shipping across Sahjanwa Tehsil.</p>
          <a href="<?php echo SITE_URL; ?>car-transportation-in-sahjanwa-gorakhpur" title="Car Transportation Sahjanwa Gorakhpur →" style="color: #f59e0b; text-decoration: underline; font-weight: 600; font-size: 0.88rem;">
            Car Transportation Sahjanwa Gorakhpur →
          </a>
        </div>
      </div>

    </div>
  </section>

  <!-- 8. Intercity Route Network Grid -->
  <section style="padding: 60px 0; background: #0b132b; color: #ffffff;">
    <div class="container" style="max-width: 900px;">
      
      <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Major Highway Corridors</span>
      <h2 style="font-size: 2.1rem; font-weight: 800; color: #ffffff; margin: 10px 0 20px 0;">
        Popular Car Transport Routes from <span style="color: #f59e0b;">Campierganj</span>
      </h2>

      <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 16px; margin-bottom: 25px;">
        <div style="background: #172a54; padding: 18px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #ffffff; font-size: 1.05rem; margin-bottom: 6px;">Campierganj to Delhi NCR</h4>
          <p style="font-size: 0.88rem; color: #94a3b8; margin-bottom: 8px;">Express car trailer service via Purvanchal &amp; Agra Expressways.</p>
        </div>

        <div style="background: #172a54; padding: 18px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #ffffff; font-size: 1.05rem; margin-bottom: 6px;">Campierganj to Mumbai / Pune</h4>
          <p style="font-size: 0.88rem; color: #94a3b8; margin-bottom: 8px;">Long-distance insured car transport to Maharashtra hubs.</p>
        </div>

        <div style="background: #172a54; padding: 18px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #ffffff; font-size: 1.05rem; margin-bottom: 6px;">Campierganj to Bangalore / Hyderabad</h4>
          <p style="font-size: 0.88rem; color: #94a3b8; margin-bottom: 8px;">South India express covered auto carrier route.</p>
        </div>

        <div style="background: #172a54; padding: 18px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #ffffff; font-size: 1.05rem; margin-bottom: 6px;">Campierganj to Lucknow / Kanpur</h4>
          <p style="font-size: 0.88rem; color: #94a3b8; margin-bottom: 8px;">Fast intra-state vehicle carrier transport.</p>
        </div>
      </div>

    </div>
  </section>

  <!-- 9. IBA Approved GST Billing Documentation -->
  <section style="padding: 60px 0; background: #070d1e; color: #ffffff;">
    <div class="container" style="max-width: 900px;">
      
      <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Official Claims Documentation</span>
      <h2 style="font-size: 2.1rem; font-weight: 800; color: #ffffff; margin: 10px 0 20px 0;">
        IBA Approved GST Billing for Car Transport
      </h2>

      <div style="background: #101c40; border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 12px; padding: 25px;">
        <h4 style="color: #f59e0b; font-size: 1.1rem; margin-bottom: 12px; font-weight: 700;">Government &amp; Corporate Claim Paperwork Issued:</h4>
        <ol style="margin: 0; padding-left: 20px; color: #cbd5e1; line-height: 1.8; font-size: 0.95rem;">
          <li><strong>Official Car Freight GST Tax Invoice</strong> with clear SAC &amp; GSTIN code.</li>
          <li><strong>Vehicle Condition &amp; Audit Inspection Record</strong> logged at pickup.</li>
          <li><strong>Car Consignment Lorry Receipt (LR Copy)</strong> with carrier trailer number.</li>
          <li><strong>IBA Approved Stamp &amp; Registration License Code</strong>.</li>
          <li><strong>Comprehensive Car Transit Insurance Certificate Copy</strong>.</li>
          <li><strong>Stamped Money Payment Receipt</strong> for employee claim reimbursement.</li>
        </ol>
      </div>

    </div>
  </section>

  <!-- 10. 10 to 15 Detailed FAQs + Valid JSON-LD FAQPage Schema -->
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

  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "MovingCompany",
    "name": "Shree Ashirwad Packers and Movers - Car Transport Campierganj",
    "description": "Professional car transportation service in Campierganj Gorakhpur utilizing enclosed car carriers, doorstep pickup, transit insurance, and IBA GST bills.",
    "url": "<?php echo $canonical_url; ?>",
    "telephone": "<?php echo SITE_PHONE_RAW; ?>",
    "address": {
      "@type": "PostalAddress",
      "addressLocality": "Campierganj, Gorakhpur",
      "addressRegion": "Uttar Pradesh",
      "addressCountry": "IN"
    },
    "areaServed": "Campierganj, Gorakhpur, Uttar Pradesh",
    "priceRange": "₹6500 - ₹22000"
  }
  </script>

  <section style="padding: 60px 0; background: #0b132b; color: #ffffff;">
    <div class="container" style="max-width: 900px;">
      
      <div class="section-header text-center" style="margin-bottom: 40px;">
        <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Got Questions?</span>
        <h2 style="font-size: 2.1rem; font-weight: 800; color: #ffffff; margin-top: 10px;">
          Frequently Asked Questions About <span style="color: #f59e0b;">Car Shipping in Campierganj</span>
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
        Book Car Transport in Campierganj
      </span>

      <h2 style="font-size: 2.2rem; font-weight: 800; margin: 15px 0 15px 0; color: #ffffff;">
        Need Safe <span style="color: #f59e0b;">Car Transportation in Campierganj Gorakhpur</span>?
      </h2>

      <p style="font-size: 1.05rem; color: #cbd5e1; max-width: 750px; margin: 0 auto 30px auto; line-height: 1.7;">
        Contact our Gorakhpur auto logistics team today for an enclosed car carrier trailer quote and insured doorstep delivery across India.
      </p>

      <div style="display: flex; gap: 15px; justify-content: center; flex-wrap: wrap;">
        <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Now" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 30px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1.05rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
          <i class="fas fa-phone-alt"></i> Call Now: <?php echo SITE_PHONE; ?>
        </a>
        <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad,%20I%20want%20to%20book%20car%20transportation%20in%20Campierganj%20Gorakhpur." title="Chat on WhatsApp" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 30px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1.05rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
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
  
  var message = "Hello Shree Ashirwad Packers & Movers,\n\nI would like to request a Car Carrier Quote for Campierganj Gorakhpur:\n- Name: " + name + "\n- Phone: " + phone + "\n- Pickup Location: " + moveFrom + "\n- Moving To: " + moveTo;
  
  if (extraMsg && extraMsg.trim() !== '') {
    message += "\n- Car Model: " + extraMsg;
  }
  
  var whatsappUrl = "https://api.whatsapp.com/send?phone=918409531615&text=" + encodeURIComponent(message);
  window.location.href = whatsappUrl;
}
</script>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
