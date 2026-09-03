<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "Car Transportation in Belpahar | All India Car Transport Company";
$page_desc = "Reliable car transportation in Belpahar by Shree Ashirwad Packers and Movers. Verified car carrier transport trucks, professional automobile shipping services, 7-layer body wrap, and door-to-door delivery. Call 8409531615.";
$page_keywords = "car transportation in belpahar, all india car transport company, automobile shipping services, car carrier transport, car transport service, vehicle carrier, car shifting services";
$canonical_url = "https://shreeashirwadpackersandmovers.com/pages/car-transportation-in-belpahar.php";

require_once __DIR__ . '/../includes/header.php';
?>

<main class="site-main">

  <!-- Section 1: Visual Breadcrumb Navigation Bar -->
  <div class="breadcrumb-wrapper">
    <div class="container">
      <div class="breadcrumb-list">
        <span class="breadcrumb-item"><a href="<?php echo SITE_URL; ?>" title="Home">Home</a></span>
        <span class="breadcrumb-separator">/</span>
        <span class="breadcrumb-item"><a href="<?php echo SITE_URL; ?>pages/car-transportation-cost-charges-rates-quotes-india.php" title="Car Transportation">Car Transport Services</a></span>
        <span class="breadcrumb-separator">/</span>
        <span class="breadcrumb-item active">Car Transportation in Belpahar</span>
      </div>
    </div>
  </div>

  <!-- Section 2: Hero Section with Lead Form -->
  <section class="hero-section" style="background: linear-gradient(135deg, #0b132b 0%, #1c2541 100%); padding: 60px 0; color: #ffffff;">
    <div class="container">
      <div class="hero-grid" style="display: grid; grid-template-columns: 1.2fr 0.8fr; gap: 40px; align-items: center;">
        
        <!-- Hero Text Column -->
        <div class="hero-text">
          <span class="section-tag" style="background: rgba(245, 158, 11, 0.15); color: #f59e0b; border: 1px solid rgba(245, 158, 11, 0.4); padding: 6px 16px; border-radius: 20px; font-size: 0.85rem; font-weight: 700; text-transform: uppercase; display: inline-block; margin-bottom: 15px;">
            BELPAHAR ODISHA AUTOMOBILE LOGISTICS
          </span>
          <h1 style="font-size: 2.7rem; font-weight: 800; line-height: 1.2; margin-bottom: 20px; color: #ffffff;">
            Trusted <span style="color: #f59e0b;">Car Transportation in Belpahar</span>
          </h1>
          <p style="font-size: 1.12rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 25px;">
            Looking for a dependable <strong>all india car transport company</strong> serving Belpahar, Odisha? Shree Ashirwad Packers and Movers provides top-tier <strong>automobile shipping services</strong> featuring multi-car double-decker <strong>car carrier transport</strong> trailers, single-car enclosed containers, 7-layer body protection, and doorstep pickup.
          </p>

          <div style="display: flex; gap: 15px; flex-wrap: wrap; margin-bottom: 30px;">
            <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Now" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
              <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call Now: <?php echo SITE_PHONE; ?>
            </a>
            <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20a%20car%20transport%20quote%20for%20Belpahar." title="Chat on WhatsApp" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
              <i class="fab fa-whatsapp" style="margin-right: 8px;"></i> Chat on WhatsApp
            </a>
          </div>

          <div style="display: flex; gap: 20px; font-size: 0.9rem; color: #94a3b8;">
            <span><strong style="color: #f59e0b;">100% Insured</strong> Transit</span>
            <span><strong style="color: #f59e0b;">7-Layer</strong> Body Wrap</span>
            <span><strong style="color: #f59e0b;">Doorstep</strong> Delivery</span>
          </div>
        </div>

        <!-- Hero Lead Form Column -->
        <div class="hero-form-card" style="background: rgba(255, 255, 255, 0.05); backdrop-filter: blur(10px); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 16px; padding: 30px; box-shadow: 0 15px 35px rgba(0,0,0,0.4);">
          <h2 style="font-size: 1.4rem; color: #ffffff; margin-bottom: 8px; font-weight: 700; text-align: center;">Get Belpahar Car Transport Quote</h2>
          <p style="font-size: 0.85rem; color: #94a3b8; text-align: center; margin-bottom: 20px;">Receive transparent cost estimates directly on WhatsApp in 2 minutes</p>

          <form action="#" method="POST" onsubmit="sendHeroWhatsAppLead(event, this);">
            <div style="margin-bottom: 14px;">
              <input type="text" name="name" class="form-control" placeholder="Your Full Name" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="margin-bottom: 14px;">
              <input type="tel" name="phone" class="form-control" placeholder="10-Digit Mobile Number" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 10px; margin-bottom: 14px;">
              <input type="text" name="move_from" class="form-control" value="Belpahar" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
              <input type="text" name="move_to" class="form-control" placeholder="Destination City" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <button type="submit" style="width: 100%; padding: 14px; background: linear-gradient(135deg, #d32f2f 0%, #f59e0b 100%); color: #ffffff; border: none; border-radius: 50px; font-weight: 700; font-size: 1rem; cursor: pointer;">
              Get Instant Estimate Now &rarr;
            </button>
          </form>
        </div>

      </div>
    </div>
  </section>

  <!-- Section 3: Stats Counter Bar -->
  <section style="background: #1e293b; padding: 35px 0; border-bottom: 1px solid rgba(255,255,255,0.05);">
    <div class="container">
      <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 20px; text-align: center; color: #ffffff;">
        <div>
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b;">13,000+</div>
          <div style="font-size: 0.9rem; color: #94a3b8;">Cars Relocated Safely</div>
        </div>
        <div>
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b;">100%</div>
          <div style="font-size: 0.9rem; color: #94a3b8;">GPS Covered Carriers</div>
        </div>
        <div>
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b;">Zero</div>
          <div style="font-size: 0.9rem; color: #94a3b8;">Damage Record</div>
        </div>
        <div>
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b;">24/7</div>
          <div style="font-size: 0.9rem; color: #94a3b8;">Control Room Support</div>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 4: 6-Card Feature Grid -->
  <section style="padding: 70px 0; background: #0f172a; color: #ffffff;">
    <div class="container">
      <div style="text-align: center; max-width: 700px; margin: 0 auto 50px;">
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff;">Why Hire Our <span style="color: #f59e0b;">Automobile Shipping Services</span> in Belpahar?</h2>
        <p style="color: #94a3b8; font-size: 1rem; line-height: 1.6;">Our end-to-end car transport service in Belpahar guarantees scratch-free transit, complete compliance, and total peace of mind.</p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 30px;">
        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 30px; border-radius: 12px;">
          <div style="width: 50px; height: 50px; background: rgba(245,158,11,0.1); border-radius: 10px; display: flex; align-items: center; justify-content: center; color: #f59e0b; font-size: 1.5rem; margin-bottom: 20px;">
            <i class="fas fa-truck-monster"></i>
          </div>
          <h3 style="font-size: 1.2rem; font-weight: 700; color: #ffffff; margin-bottom: 10px;">Car Carrier Transport Trucks</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6;">Hydraulic ramp multi-car double-decker carriers and single closed containers built for safe long-distance highway vehicle transportation.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 30px; border-radius: 12px;">
          <div style="width: 50px; height: 50px; background: rgba(245,158,11,0.1); border-radius: 10px; display: flex; align-items: center; justify-content: center; color: #f59e0b; font-size: 1.5rem; margin-bottom: 20px;">
            <i class="fas fa-shield-alt"></i>
          </div>
          <h3 style="font-size: 1.2rem; font-weight: 700; color: #ffffff; margin-bottom: 10px;">Full Transit Insurance</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6;">Comprehensive transit insurance policy covering market value damages, ensuring complete protection for your vehicle investment.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 30px; border-radius: 12px;">
          <div style="width: 50px; height: 50px; background: rgba(245,158,11,0.1); border-radius: 10px; display: flex; align-items: center; justify-content: center; color: #f59e0b; font-size: 1.5rem; margin-bottom: 20px;">
            <i class="fas fa-map-marker-alt"></i>
          </div>
          <h3 style="font-size: 1.2rem; font-weight: 700; color: #ffffff; margin-bottom: 10px;">Real-Time GPS Tracking</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6;">Stay informed with live GPS location tracking updates sent directly to your mobile device from pickup to final destination delivery.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 30px; border-radius: 12px;">
          <div style="width: 50px; height: 50px; background: rgba(245,158,11,0.1); border-radius: 10px; display: flex; align-items: center; justify-content: center; color: #f59e0b; font-size: 1.5rem; margin-bottom: 20px;">
            <i class="fas fa-box-open"></i>
          </div>
          <h3 style="font-size: 1.2rem; font-weight: 700; color: #ffffff; margin-bottom: 10px;">7-Layer Protective Coating</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6;">High-density foam padding, stretch wrap, and corner protectors applied on bumpers, mirrors, and handles before ramp loading.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 30px; border-radius: 12px;">
          <div style="width: 50px; height: 50px; background: rgba(245,158,11,0.1); border-radius: 10px; display: flex; align-items: center; justify-content: center; color: #f59e0b; font-size: 1.5rem; margin-bottom: 20px;">
            <i class="fas fa-door-open"></i>
          </div>
          <h3 style="font-size: 1.2rem; font-weight: 700; color: #ffffff; margin-bottom: 10px;">Doorstep Pick & Drop</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6;">Door-to-door vehicle pickup right from your residence or office in Belpahar and direct doorstep unloading nationwide.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 30px; border-radius: 12px;">
          <div style="width: 50px; height: 50px; background: rgba(245,158,11,0.1); border-radius: 10px; display: flex; align-items: center; justify-content: center; color: #f59e0b; font-size: 1.5rem; margin-bottom: 20px;">
            <i class="fas fa-file-invoice"></i>
          </div>
          <h3 style="font-size: 1.2rem; font-weight: 700; color: #ffffff; margin-bottom: 10px;">IBA & GST Compliant</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6;">Complete official documentation including GST invoices, vehicle inspection sheets, and IBA-approved consignment bills for employee claim reimbursement.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 5: Automobile Carrier Infrastructure Options -->
  <section style="padding: 60px 0; background: #1e293b; color: #ffffff;">
    <div class="container">
      <div style="text-align: center; margin-bottom: 40px;">
        <h2 style="font-size: 2rem; font-weight: 800;">Car Carrier Fleet Infrastructure in Belpahar</h2>
        <p style="color: #94a3b8; margin-top: 10px;">Select the ideal carrier option suited to your car model and budget</p>
      </div>

      <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 30px;">
        <div style="background: rgba(0,0,0,0.2); padding: 30px; border-radius: 12px; border-left: 4px solid #f59e0b;">
          <h3 style="font-size: 1.3rem; color: #f59e0b; margin-bottom: 15px;">Option A: Closed Single-Car Container Truck</h3>
          <p style="color: #cbd5e1; line-height: 1.7; margin-bottom: 15px;">Recommended for luxury sedans, premium SUVs, sports vehicles, and vintage models requiring maximum privacy, zero dust exposure, and individualized care.</p>
          <ul style="color: #94a3b8; line-height: 1.8; padding-left: 20px;">
            <li>Exclusive single-vehicle container bed</li>
            <li>Hydraulic ramp loading & unloading</li>
            <li>100% protection against weather & flying gravel</li>
          </ul>
        </div>

        <div style="background: rgba(0,0,0,0.2); padding: 30px; border-radius: 12px; border-left: 4px solid #3b82f6;">
          <h3 style="font-size: 1.3rem; color: #3b82f6; margin-bottom: 15px;">Option B: Multi-Car Covered Deck Trailer</h3>
          <p style="color: #cbd5e1; line-height: 1.7; margin-bottom: 15px;">Budget-friendly shared carrier option for regular family cars and hatchbacks. Double-decker car carriers fitted with side protection sheets and tire locking systems.</p>
          <ul style="color: #94a3b8; line-height: 1.8; padding-left: 20px;">
            <li>Economical intercity shared transit</li>
            <li>Four-wheel tie-down harness safety</li>
            <li>Frequent departures to major Indian metropolitan cities</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 6: 7-Step Safety Protocol -->
  <section style="padding: 70px 0; background: #0f172a; color: #ffffff;">
    <div class="container">
      <div style="text-align: center; margin-bottom: 50px;">
        <h2 style="font-size: 2.2rem; font-weight: 800;">7-Step Vehicle Safety Inspection Protocol</h2>
        <p style="color: #94a3b8;">Our comprehensive checklist guarantees damage-free vehicle delivery</p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 20px;">
        <div style="background: rgba(255,255,255,0.03); padding: 25px; border-radius: 10px; text-align: center;">
          <div style="font-size: 1.5rem; font-weight: 800; color: #f59e0b; margin-bottom: 10px;">01</div>
          <h4 style="font-size: 1.1rem; margin-bottom: 10px;">Pre-Pickup Inspection</h4>
          <p style="font-size: 0.85rem; color: #94a3b8; line-height: 1.6;">Detailed physical survey and photographic logging of existing body condition, odometer reading, and fuel levels.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); padding: 25px; border-radius: 10px; text-align: center;">
          <div style="font-size: 1.5rem; font-weight: 800; color: #f59e0b; margin-bottom: 10px;">02</div>
          <h4 style="font-size: 1.1rem; margin-bottom: 10px;">7-Layer Protective Wrap</h4>
          <p style="font-size: 0.85rem; color: #94a3b8; line-height: 1.6;">Wrapping key vulnerable areas including side mirrors, bumpers, and handles in high-density foam sheeting.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); padding: 25px; border-radius: 10px; text-align: center;">
          <div style="font-size: 1.5rem; font-weight: 800; color: #f59e0b; margin-bottom: 10px;">03</div>
          <h4 style="font-size: 1.1rem; margin-bottom: 10px;">Hydraulic Ramp Loading</h4>
          <p style="font-size: 0.85rem; color: #94a3b8; line-height: 1.6;">Controlled drive-on loading via low-incline hydraulic ramp ensuring zero undercarriage scraping.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); padding: 25px; border-radius: 10px; text-align: center;">
          <div style="font-size: 1.5rem; font-weight: 800; color: #f59e0b; margin-bottom: 10px;">04</div>
          <h4 style="font-size: 1.1rem; margin-bottom: 10px;">4-Point Wheel Harnessing</h4>
          <p style="font-size: 0.85rem; color: #94a3b8; line-height: 1.6;">Securing each tire individually to the trailer deck using heavy-duty nylon web belt tie-downs.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 7: Regional Network Grid (Local Hubs) -->
  <section style="padding: 60px 0; background: #1e293b; color: #ffffff;">
    <div class="container">
      <div style="text-align: center; margin-bottom: 40px;">
        <h2 style="font-size: 2rem; font-weight: 800;">Belpahar & Jharsuguda Local Network Coverage</h2>
        <p style="color: #94a3b8; margin-top: 10px;">Seamless doorstep pickup and transport coverage across Belpahar and neighboring Western Odisha industrial hubs</p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 15px; text-align: center;">
        <div style="background: rgba(255,255,255,0.05); padding: 15px; border-radius: 8px; font-weight: 600; color: #cbd5e1;">Belpahar Town Market</div>
        <div style="background: rgba(255,255,255,0.05); padding: 15px; border-radius: 8px; font-weight: 600; color: #cbd5e1;">TRL Krosaki Area</div>
        <div style="background: rgba(255,255,255,0.05); padding: 15px; border-radius: 8px; font-weight: 600; color: #cbd5e1;">Brajrajnagar</div>
        <div style="background: rgba(255,255,255,0.05); padding: 15px; border-radius: 8px; font-weight: 600; color: #cbd5e1;">Jharsuguda City</div>
        <div style="background: rgba(255,255,255,0.05); padding: 15px; border-radius: 8px; font-weight: 600; color: #cbd5e1;">Sambalpur</div>
        <div style="background: rgba(255,255,255,0.05); padding: 15px; border-radius: 8px; font-weight: 600; color: #cbd5e1;">Burla</div>
        <div style="background: rgba(255,255,255,0.05); padding: 15px; border-radius: 8px; font-weight: 600; color: #cbd5e1;">Bargarh</div>
        <div style="background: rgba(255,255,255,0.05); padding: 15px; border-radius: 8px; font-weight: 600; color: #cbd5e1;">Sundargarh</div>
        <div style="background: rgba(255,255,255,0.05); padding: 15px; border-radius: 8px; font-weight: 600; color: #cbd5e1;">Rourkela</div>
        <div style="background: rgba(255,255,255,0.05); padding: 15px; border-radius: 8px; font-weight: 600; color: #cbd5e1;">Raigarh</div>
        <div style="background: rgba(255,255,255,0.05); padding: 15px; border-radius: 8px; font-weight: 600; color: #cbd5e1;">Bhubaneswar</div>
        <div style="background: rgba(255,255,255,0.05); padding: 15px; border-radius: 8px; font-weight: 600; color: #cbd5e1;">Cuttack</div>
      </div>
    </div>
  </section>

  <!-- Section 8: Intercity Route Grid -->
  <section style="padding: 60px 0; background: #0f172a; color: #ffffff;">
    <div class="container">
      <div style="text-align: center; margin-bottom: 40px;">
        <h2 style="font-size: 2rem; font-weight: 800;">Popular Intercity Routes from Belpahar</h2>
        <p style="color: #94a3b8; margin-top: 10px;">Direct vehicle carrier routes connecting Belpahar to major destinations nationwide</p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px;">
        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 20px; border-radius: 8px;">
          <h4 style="color: #f59e0b; font-size: 1.1rem; margin-bottom: 8px;">Belpahar to Kolkata</h4>
          <p style="color: #94a3b8; font-size: 0.85rem;">Distance: ~520 km | Transit Time: 2-3 Days</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 20px; border-radius: 8px;">
          <h4 style="color: #f59e0b; font-size: 1.1rem; margin-bottom: 8px;">Belpahar to Bhubaneswar</h4>
          <p style="color: #94a3b8; font-size: 0.85rem;">Distance: ~340 km | Transit Time: 1-2 Days</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 20px; border-radius: 8px;">
          <h4 style="color: #f59e0b; font-size: 1.1rem; margin-bottom: 8px;">Belpahar to Raipur / Bilaspur</h4>
          <p style="color: #94a3b8; font-size: 0.85rem;">Distance: ~260 km | Transit Time: 1 Day</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 20px; border-radius: 8px;">
          <h4 style="color: #f59e0b; font-size: 1.1rem; margin-bottom: 8px;">Belpahar to Delhi / NCR</h4>
          <p style="color: #94a3b8; font-size: 0.85rem;">Distance: ~1,380 km | Transit Time: 3-5 Days</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 20px; border-radius: 8px;">
          <h4 style="color: #f59e0b; font-size: 1.1rem; margin-bottom: 8px;">Belpahar to Hyderabad</h4>
          <p style="color: #94a3b8; font-size: 0.85rem;">Distance: ~1,020 km | Transit Time: 3-4 Days</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 20px; border-radius: 8px;">
          <h4 style="color: #f59e0b; font-size: 1.1rem; margin-bottom: 8px;">Belpahar to Bangalore</h4>
          <p style="color: #94a3b8; font-size: 0.85rem;">Distance: ~1,420 km | Transit Time: 4-5 Days</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 9: IBA/GST Compliance Section -->
  <section style="padding: 60px 0; background: #1e293b; color: #ffffff;">
    <div class="container">
      <div style="background: linear-gradient(135deg, rgba(245,158,11,0.1) 0%, rgba(30,41,59,0.8) 100%); border: 1px solid rgba(245,158,11,0.3); padding: 40px; border-radius: 16px;">
        <h2 style="font-size: 1.8rem; color: #f59e0b; margin-bottom: 15px;">IBA & GST Claim Documentation Compliance</h2>
        <p style="color: #cbd5e1; line-height: 1.8; margin-bottom: 20px;">
          As an established <strong>all india car transport company</strong> serving Belpahar, Shree Ashirwad Packers and Movers provides official 18% GST invoices, pre-transit vehicle inspection reports, and IBA-approved consignment bills accepted by central government departments, defense forces, and corporate organizations for 100% claim reimbursement.
        </p>
        <div style="display: flex; gap: 20px; flex-wrap: wrap; color: #94a3b8; font-size: 0.9rem;">
          <span><i class="fas fa-check-circle" style="color: #10b981; margin-right: 6px;"></i> 18% GST Registered Bill</span>
          <span><i class="fas fa-check-circle" style="color: #10b981; margin-right: 6px;"></i> Detailed Car Condition Sheet</span>
          <span><i class="fas fa-check-circle" style="color: #10b981; margin-right: 6px;"></i> IBA Approved Bilty Format</span>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 10: 10-Item FAQ with JSON-LD Schema -->
  <section style="padding: 70px 0; background: #0f172a; color: #ffffff;">
    <div class="container">
      <div style="text-align: center; margin-bottom: 50px;">
        <h2 style="font-size: 2.2rem; font-weight: 800;">Frequently Asked Questions — Car Transport in Belpahar</h2>
        <p style="color: #94a3b8;">Everything you need to know about our vehicle relocation services</p>
      </div>

      <div style="max-width: 900px; margin: 0 auto; display: flex; flex-direction: column; gap: 15px;">
        
        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 20px; border-radius: 10px;">
          <h3 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 8px;">1. What is the cost of car carrier transport from Belpahar?</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6;">The cost depends on destination distance, car model, and carrier selection. Regional moves (e.g. to Bhubaneswar or Raipur) start around ₹4,500 - ₹7,500, while long-distance routes range between ₹9,500 and ₹17,500.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 20px; border-radius: 10px;">
          <h3 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 8px;">2. How does an all india car transport company ensure vehicle safety?</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6;">We use specialized hydraulic ramp car carriers, 7-layer protective body wrapping, 4-point wheel tie-down harness belts, real-time GPS tracking, and full transit insurance coverage.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 20px; border-radius: 10px;">
          <h3 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 8px;">3. Is doorstep vehicle pickup available in Belpahar?</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6;">Yes, we offer direct doorstep pickup across Belpahar town, TRL Krosaki area, and nearby Jharsuguda district locations using specialized car haulers.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 20px; border-radius: 10px;">
          <h3 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 8px;">4. Which documents are required for automobile shipping services?</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6;">You must provide a copy of the car Registration Certificate (RC), valid insurance document, PUC certificate, and personal ID proof (Aadhaar/PAN).</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 20px; border-radius: 10px;">
          <h3 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 8px;">5. How can I track my vehicle during long-distance transit?</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6;">All our car carriers are fitted with real-time GPS tracking units. You get live tracking access and regular SMS/WhatsApp updates throughout the journey.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 20px; border-radius: 10px;">
          <h3 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 8px;">6. Can I keep personal items inside the car during transport?</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6;">Up to 20-30 kg of non-flammable personal luggage packed securely in the trunk is permitted. Flammables, liquids, and cash/valuables are strictly prohibited.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 20px; border-radius: 10px;">
          <h3 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 8px;">7. What preparations are recommended before vehicle handover?</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6;">Keep fuel level at around 1/4th, remove loose items, disable security alarms, check tire pressure, and wash the car exterior for pre-transit photo inspection.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 20px; border-radius: 10px;">
          <h3 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 8px;">8. How does transit insurance protect my car during shipping?</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6;">Our comprehensive transit insurance covers accidental loss or damage based on the declared vehicle market value, providing complete financial security.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 20px; border-radius: 10px;">
          <h3 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 8px;">9. What is the difference between open and enclosed car carriers?</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6;">Open carriers transport multiple vehicles on double-decker open trailers equipped with safety covers, while enclosed containers offer complete 360-degree weather protection.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 20px; border-radius: 10px;">
          <h3 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 8px;">10. How early should I book car transport from Belpahar?</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6;">We recommend booking 2 to 4 days before your planned departure date to ensure guaranteed carrier bed allocation.</p>
        </div>

      </div>
    </div>
  </section>

  <!-- FAQPage & MovingCompany JSON-LD Schema -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@graph": [
      {
        "@type": "MovingCompany",
        "@id": "https://shreeashirwadpackersandmovers.com/#organization",
        "name": "Shree Ashirwad Packers and Movers",
        "url": "https://shreeashirwadpackersandmovers.com/",
        "telephone": "+91-8409531615",
        "description": "All India car transport company serving Belpahar providing car carrier transport, automobile shipping services, door-to-door delivery & full transit insurance.",
        "address": {
          "@type": "PostalAddress",
          "addressLocality": "Belpahar",
          "addressRegion": "Odisha",
          "addressCountry": "IN"
        }
      },
      {
        "@type": "FAQPage",
        "mainEntity": [
          {
            "@type": "Question",
            "name": "What is the cost of car carrier transport from Belpahar?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "The cost depends on destination distance, car model, and carrier selection. Regional moves start around ₹4,500 - ₹7,500, while long-distance routes range between ₹9,500 and ₹17,500."
            }
          },
          {
            "@type": "Question",
            "name": "How does an all india car transport company ensure vehicle safety?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "We use specialized hydraulic ramp car carriers, 7-layer protective body wrapping, 4-point wheel tie-down harness belts, real-time GPS tracking, and full transit insurance."
            }
          },
          {
            "@type": "Question",
            "name": "Is doorstep vehicle pickup available in Belpahar?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "Yes, we offer direct doorstep pickup across Belpahar town, TRL Krosaki area, and nearby Jharsuguda district locations."
            }
          },
          {
            "@type": "Question",
            "name": "Which documents are required for automobile shipping services?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "You must provide a copy of the car Registration Certificate (RC), valid insurance document, PUC certificate, and personal ID proof."
            }
          },
          {
            "@type": "Question",
            "name": "How can I track my vehicle during long-distance transit?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "All our car carriers are fitted with real-time GPS tracking units. You get live tracking access and regular SMS/WhatsApp updates."
            }
          },
          {
            "@type": "Question",
            "name": "Can I keep personal items inside the car during transport?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "Up to 20-30 kg of non-flammable personal luggage packed securely in the trunk is permitted. Flammables, liquids, and cash/valuables are strictly prohibited."
            }
          },
          {
            "@type": "Question",
            "name": "What preparations are recommended before vehicle handover?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "Keep fuel level at around 1/4th, remove loose items, disable security alarms, check tire pressure, and wash car exterior."
            }
          },
          {
            "@type": "Question",
            "name": "How does transit insurance protect my car during shipping?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "Our comprehensive transit insurance covers accidental loss or damage based on the declared vehicle market value."
            }
          },
          {
            "@type": "Question",
            "name": "What is the difference between open and enclosed car carriers?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "Open carriers transport multiple vehicles on double-decker open trailers equipped with safety covers, while enclosed containers offer complete 360-degree weather protection."
            }
          },
          {
            "@type": "Question",
            "name": "How early should I book car transport from Belpahar?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "We recommend booking 2 to 4 days before your planned departure date to ensure guaranteed carrier bed allocation."
            }
          }
        ]
      }
    ]
  }
  </script>

  <!-- Section 11: CTA Footer -->
  <section style="padding: 60px 0; background: linear-gradient(135deg, #d32f2f 0%, #850000 100%); color: #ffffff; text-align: center;">
    <div class="container">
      <h2 style="font-size: 2.2rem; font-weight: 800; margin-bottom: 15px;">Book Safe Car Transportation in Belpahar Today</h2>
      <p style="font-size: 1.1rem; color: #ffcdd2; max-width: 700px; margin: 0 auto 30px;">
        Enjoy guaranteed doorstep pickup, 7-layer protective body wrap, live GPS tracking, and complete transit insurance for your vehicle.
      </p>
      <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap;">
        <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Now" style="padding: 15px 35px; background: #ffffff; color: #d32f2f; border-radius: 50px; font-weight: 800; font-size: 1.1rem; text-decoration: none; box-shadow: 0 5px 20px rgba(0,0,0,0.3);">
          <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call <?php echo SITE_PHONE; ?>
        </a>
        <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20to%20book%20car%20transportation%20in%20Belpahar." title="WhatsApp Chat" target="_blank" style="padding: 15px 35px; background: #25d366; color: #ffffff; border-radius: 50px; font-weight: 800; font-size: 1.1rem; text-decoration: none; box-shadow: 0 5px 20px rgba(0,0,0,0.3);">
          <i class="fab fa-whatsapp" style="margin-right: 8px;"></i> WhatsApp Quote
        </a>
      </div>
    </div>
  </section>

</main>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
