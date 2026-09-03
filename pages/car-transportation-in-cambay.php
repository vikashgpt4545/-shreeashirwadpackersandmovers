<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "Car Transportation in Cambay | Car Shipping Services & Vehicle Moving";
$page_desc = "Safe car transportation in Cambay (Khambhat, Gujarat) by Shree Ashirwad Packers and Movers. Verified car shipping services, car courier service, transport my car safely & professional car moving service. Call 8409531615.";
$page_keywords = "car transportation in cambay, car shipping services, transport my car, car courier service, car moving service, packers and movers cambay, car transport khambhat anand";
$canonical_url = "https://shreeashirwadpackersandmovers.com/pages/car-transportation-in-cambay.php";

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
        <span class="breadcrumb-item active">Car Transportation in Cambay</span>
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
            CAMBAY KHAMBHAT GUJARAT VEHICLE LOGISTICS
          </span>
          <h1 style="font-size: 2.7rem; font-weight: 800; line-height: 1.2; margin-bottom: 20px; color: #ffffff;">
            Reliable <span style="color: #f59e0b;">Car Transportation in Cambay</span>
          </h1>
          <p style="font-size: 1.12rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 25px;">
            Planning to <strong>transport my car</strong> safely from Cambay (Khambhat)? Shree Ashirwad Packers and Movers offers top-tier <strong>car shipping services</strong>, dedicated <strong>car courier service</strong> solutions, and seamless <strong>car moving service</strong> across Anand district and pan-India destinations with 100% transit insurance and doorstep pickup.
          </p>

          <div style="display: flex; gap: 15px; flex-wrap: wrap; margin-bottom: 30px;">
            <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Now" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
              <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call Now: <?php echo SITE_PHONE; ?>
            </a>
            <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20a%20car%20transport%20quote%20for%20Cambay%20Gujarat." title="Chat on WhatsApp" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
              <i class="fab fa-whatsapp" style="margin-right: 8px;"></i> Chat on WhatsApp
            </a>
          </div>

          <div style="display: flex; gap: 20px; font-size: 0.9rem; color: #94a3b8;">
            <span><strong style="color: #f59e0b;">100% Insured</strong> Transit</span>
            <span><strong style="color: #f59e0b;">Cambay & Anand</strong> Hub</span>
            <span><strong style="color: #f59e0b;">Doorstep</strong> Pick & Delivery</span>
          </div>
        </div>

        <!-- Hero Lead Form Column -->
        <div class="hero-form-card" style="background: rgba(255, 255, 255, 0.05); backdrop-filter: blur(10px); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 16px; padding: 30px; box-shadow: 0 15px 35px rgba(0,0,0,0.4);">
          <h2 style="font-size: 1.4rem; color: #ffffff; margin-bottom: 8px; font-weight: 700; text-align: center;">Get Instant Cambay Quote</h2>
          <p style="font-size: 0.85rem; color: #94a3b8; text-align: center; margin-bottom: 20px;">Receive quick pricing on WhatsApp in 2 minutes</p>

          <form action="#" method="POST" onsubmit="sendHeroWhatsAppLead(event, this);">
            <div style="margin-bottom: 14px;">
              <input type="text" name="name" class="form-control" placeholder="Your Full Name" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="margin-bottom: 14px;">
              <input type="tel" name="phone" class="form-control" placeholder="10-Digit Mobile Number" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 10px; margin-bottom: 14px;">
              <input type="text" name="move_from" class="form-control" value="Cambay Gujarat" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
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
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b;">15,400+</div>
          <div style="font-size: 0.9rem; color: #94a3b8;">Cars Transported in Gujarat</div>
        </div>
        <div>
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b;">100%</div>
          <div style="font-size: 0.9rem; color: #94a3b8;">Covered Container Trucks</div>
        </div>
        <div>
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b;">Zero</div>
          <div style="font-size: 0.9rem; color: #94a3b8;">Scratch Record</div>
        </div>
        <div>
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b;">24/7</div>
          <div style="font-size: 0.9rem; color: #94a3b8;">Live GPS Location Tracking</div>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 4: 6-Card Feature Grid -->
  <section style="padding: 70px 0; background: #0f172a; color: #ffffff;">
    <div class="container">
      <div style="text-align: center; max-width: 700px; margin: 0 auto 50px;">
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff;">Premium <span style="color: #f59e0b;">Car Shipping Services & Car Courier Service</span></h2>
        <p style="color: #94a3b8; font-size: 1rem; line-height: 1.6;">When you decide to transport my car from Cambay, rely on our experienced car moving service for zero-damage interstate transfer.</p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 30px;">
        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 30px; border-radius: 12px;">
          <div style="width: 50px; height: 50px; background: rgba(245,158,11,0.1); border-radius: 10px; display: flex; align-items: center; justify-content: center; color: #f59e0b; font-size: 1.5rem; margin-bottom: 20px;">
            <i class="fas fa-truck-monster"></i>
          </div>
          <h3 style="font-size: 1.2rem; font-weight: 700; color: #ffffff; margin-bottom: 10px;">Expert Car Shipping Services</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6;">Specialized auto logistics with covered car shipping carriers for hatchback, sedan, and SUV relocation.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 30px; border-radius: 12px;">
          <div style="width: 50px; height: 50px; background: rgba(245,158,11,0.1); border-radius: 10px; display: flex; align-items: center; justify-content: center; color: #f59e0b; font-size: 1.5rem; margin-bottom: 20px;">
            <i class="fas fa-box"></i>
          </div>
          <h3 style="font-size: 1.2rem; font-weight: 700; color: #ffffff; margin-bottom: 10px;">Express Car Courier Service</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6;">Dedicated point-to-point car courier service designed for urgent transfers with fixed delivery timelines.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 30px; border-radius: 12px;">
          <div style="width: 50px; height: 50px; background: rgba(245,158,11,0.1); border-radius: 10px; display: flex; align-items: center; justify-content: center; color: #f59e0b; font-size: 1.5rem; margin-bottom: 20px;">
            <i class="fas fa-car"></i>
          </div>
          <h3 style="font-size: 1.2rem; font-weight: 700; color: #ffffff; margin-bottom: 10px;">Reliable Car Moving Service</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6;">End-to-end car moving service handling pickup, insurance documentation, transit, and door delivery.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 30px; border-radius: 12px;">
          <div style="width: 50px; height: 50px; background: rgba(245,158,11,0.1); border-radius: 10px; display: flex; align-items: center; justify-content: center; color: #f59e0b; font-size: 1.5rem; margin-bottom: 20px;">
            <i class="fas fa-shield-alt"></i>
          </div>
          <h3 style="font-size: 1.2rem; font-weight: 700; color: #ffffff; margin-bottom: 10px;">Declared-Value Insurance</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6;">Comprehensive transit risk protection policy covering your vehicle against physical damage or accidents.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 30px; border-radius: 12px;">
          <div style="width: 50px; height: 50px; background: rgba(245,158,11,0.1); border-radius: 10px; display: flex; align-items: center; justify-content: center; color: #f59e0b; font-size: 1.5rem; margin-bottom: 20px;">
            <i class="fas fa-map-marked-alt"></i>
          </div>
          <h3 style="font-size: 1.2rem; font-weight: 700; color: #ffffff; margin-bottom: 10px;">Doorstep Pick & Delivery</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6;">Direct doorstep pick-up from Cambay (Khambhat) town with door-step drop at your destination.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 30px; border-radius: 12px;">
          <div style="width: 50px; height: 50px; background: rgba(245,158,11,0.1); border-radius: 10px; display: flex; align-items: center; justify-content: center; color: #f59e0b; font-size: 1.5rem; margin-bottom: 20px;">
            <i class="fas fa-file-invoice"></i>
          </div>
          <h3 style="font-size: 1.2rem; font-weight: 700; color: #ffffff; margin-bottom: 10px;">GST Tax Invoice</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6;">Valid 18% GST bills and consignment notes for corporate employee relocation claim processing.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 5: Automobile Carrier Infrastructure Options -->
  <section style="padding: 60px 0; background: #1e293b; color: #ffffff;">
    <div class="container">
      <div style="text-align: center; margin-bottom: 40px;">
        <h2 style="font-size: 2rem; font-weight: 800;">Car Shipping Fleet Options in Cambay</h2>
        <p style="color: #94a3b8; margin-top: 10px;">Engineered carrier infrastructure for safe vehicle shipping</p>
      </div>

      <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 30px;">
        <div style="background: rgba(0,0,0,0.2); padding: 30px; border-radius: 12px; border-left: 4px solid #f59e0b;">
          <h3 style="font-size: 1.3rem; color: #f59e0b; margin-bottom: 15px;">Option A: Closed Single-Car Container Truck</h3>
          <p style="color: #cbd5e1; line-height: 1.7; margin-bottom: 15px;">Specifically built for luxury sedans and premium SUVs requiring zero dust, zero moisture, and total privacy.</p>
          <ul style="color: #94a3b8; line-height: 1.8; padding-left: 20px;">
            <li>100% weather-sealed container container body</li>
            <li>Hydraulic drive-on incline ramps</li>
            <li>Direct point-to-point express route speed</li>
          </ul>
        </div>

        <div style="background: rgba(0,0,0,0.2); padding: 30px; border-radius: 12px; border-left: 4px solid #3b82f6;">
          <h3 style="font-size: 1.3rem; color: #3b82f6; margin-bottom: 15px;">Option B: Multi-Car Covered Deck Trailer</h3>
          <p style="color: #cbd5e1; line-height: 1.7; margin-bottom: 15px;">Most popular for standard family cars moving via national highway hubs across Gujarat and India.</p>
          <ul style="color: #94a3b8; line-height: 1.8; padding-left: 20px;">
            <li>Economical shared container freight cost</li>
            <li>4-wheel heavy nylon tie-down straps</li>
            <li>Daily departure schedules from Anand hub</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 6: 7-Step Safety Protocol -->
  <section style="padding: 70px 0; background: #0f172a; color: #ffffff;">
    <div class="container">
      <div style="text-align: center; margin-bottom: 50px;">
        <h2 style="font-size: 2.2rem; font-weight: 800;">7-Layer Safety & Handling Standard</h2>
        <p style="color: #94a3b8;">Ensuring your vehicle reaches its destination without a single scratch</p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 20px;">
        <div style="background: rgba(255,255,255,0.03); padding: 25px; border-radius: 10px; text-align: center;">
          <div style="font-size: 1.5rem; font-weight: 800; color: #f59e0b; margin-bottom: 10px;">01</div>
          <h4 style="font-size: 1.1rem; margin-bottom: 10px;">Initial Inspection</h4>
          <p style="font-size: 0.85rem; color: #94a3b8; line-height: 1.6;">Thorough inspection report with photos recorded during pickup in Cambay.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); padding: 25px; border-radius: 10px; text-align: center;">
          <div style="font-size: 1.5rem; font-weight: 800; color: #f59e0b; margin-bottom: 10px;">02</div>
          <h4 style="font-size: 1.1rem; margin-bottom: 10px;">Protective Wrapping</h4>
          <p style="font-size: 0.85rem; color: #94a3b8; line-height: 1.6;">Foam sheet and bubble film wrapping on mirrors, handles, and bumpers.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); padding: 25px; border-radius: 10px; text-align: center;">
          <div style="font-size: 1.5rem; font-weight: 800; color: #f59e0b; margin-bottom: 10px;">03</div>
          <h4 style="font-size: 1.1rem; margin-bottom: 10px;">Hydraulic Loading</h4>
          <p style="font-size: 0.85rem; color: #94a3b8; line-height: 1.6;">Controlled loading onto carrier deck using low-incline hydraulic ramps.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); padding: 25px; border-radius: 10px; text-align: center;">
          <div style="font-size: 1.5rem; font-weight: 800; color: #f59e0b; margin-bottom: 10px;">04</div>
          <h4 style="font-size: 1.1rem; margin-bottom: 10px;">4-Wheel Tie-Down</h4>
          <p style="font-size: 0.85rem; color: #94a3b8; line-height: 1.6;">Industrial harness straps securing all four wheels to the floor locks.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 7: Regional Network Grid -->
  <section style="padding: 60px 0; background: #1e293b; color: #ffffff;">
    <div class="container">
      <div style="text-align: center; margin-bottom: 40px;">
        <h2 style="font-size: 2rem; font-weight: 800;">Cambay & Anand District Regional Network</h2>
        <p style="color: #94a3b8; margin-top: 10px;">Doorstep pickup coverage across Cambay (Khambhat) and Central Gujarat</p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 15px; text-align: center;">
        <div style="background: rgba(255,255,255,0.05); padding: 15px; border-radius: 8px; font-weight: 600; color: #cbd5e1;">Cambay / Khambhat Town</div>
        <div style="background: rgba(255,255,255,0.05); padding: 15px; border-radius: 8px; font-weight: 600; color: #cbd5e1;">Anand City</div>
        <div style="background: rgba(255,255,255,0.05); padding: 15px; border-radius: 8px; font-weight: 600; color: #cbd5e1;">Nadiad</div>
        <div style="background: rgba(255,255,255,0.05); padding: 15px; border-radius: 8px; font-weight: 600; color: #cbd5e1;">Petlad</div>
        <div style="background: rgba(255,255,255,0.05); padding: 15px; border-radius: 8px; font-weight: 600; color: #cbd5e1;">Borsad</div>
        <div style="background: rgba(255,255,255,0.05); padding: 15px; border-radius: 8px; font-weight: 600; color: #cbd5e1;">Vadodara</div>
        <div style="background: rgba(255,255,255,0.05); padding: 15px; border-radius: 8px; font-weight: 600; color: #cbd5e1;">Ahmedabad</div>
        <div style="background: rgba(255,255,255,0.05); padding: 15px; border-radius: 8px; font-weight: 600; color: #cbd5e1;">Bharuch</div>
      </div>
    </div>
  </section>

  <!-- Section 8: Intercity Route Grid -->
  <section style="padding: 60px 0; background: #0f172a; color: #ffffff;">
    <div class="container">
      <div style="text-align: center; margin-bottom: 40px;">
        <h2 style="font-size: 2rem; font-weight: 800;">Popular Intercity Routes from Cambay</h2>
        <p style="color: #94a3b8; margin-top: 10px;">Direct national highway shipping corridors across India</p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px;">
        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 20px; border-radius: 8px;">
          <h4 style="color: #f59e0b; font-size: 1.1rem; margin-bottom: 8px;">Cambay to Mumbai / Pune</h4>
          <p style="color: #94a3b8; font-size: 0.85rem;">Distance: ~480 km | Transit Time: 1-2 Days</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 20px; border-radius: 8px;">
          <h4 style="color: #f59e0b; font-size: 1.1rem; margin-bottom: 8px;">Cambay to Delhi / NCR</h4>
          <p style="color: #94a3b8; font-size: 0.85rem;">Distance: ~980 km | Transit Time: 2-3 Days</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 20px; border-radius: 8px;">
          <h4 style="color: #f59e0b; font-size: 1.1rem; margin-bottom: 8px;">Cambay to Bangalore / Hyderabad</h4>
          <p style="color: #94a3b8; font-size: 0.85rem;">Distance: ~1,400 km | Transit Time: 3-4 Days</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 9: IBA/GST Compliance Section -->
  <section style="padding: 60px 0; background: #1e293b; color: #ffffff;">
    <div class="container">
      <div style="background: linear-gradient(135deg, rgba(245,158,11,0.1) 0%, rgba(30,41,59,0.8) 100%); border: 1px solid rgba(245,158,11,0.3); padding: 40px; border-radius: 16px;">
        <h2 style="font-size: 1.8rem; color: #f59e0b; margin-bottom: 15px;">IBA Approved Billing & Corporate Claims</h2>
        <p style="color: #cbd5e1; line-height: 1.8; margin-bottom: 20px;">
          We provide official GST tax invoices, vehicle condition inspection certificates, and IBA-compliant bilty documentation to ensure smooth corporate employee relocation reimbursement.
        </p>
        <div style="display: flex; gap: 20px; flex-wrap: wrap; color: #94a3b8; font-size: 0.9rem;">
          <span><i class="fas fa-check-circle" style="color: #10b981; margin-right: 6px;"></i> 18% GST Invoice</span>
          <span><i class="fas fa-check-circle" style="color: #10b981; margin-right: 6px;"></i> Pre-Transit Condition Sheet</span>
          <span><i class="fas fa-check-circle" style="color: #10b981; margin-right: 6px;"></i> Full Insurance Coverage</span>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 10: 10-Item FAQ with JSON-LD Schema -->
  <section style="padding: 70px 0; background: #0f172a; color: #ffffff;">
    <div class="container">
      <div style="text-align: center; margin-bottom: 50px;">
        <h2 style="font-size: 2.2rem; font-weight: 800;">Frequently Asked Questions — Car Transportation in Cambay</h2>
        <p style="color: #94a3b8;">Answers regarding car shipping services, car courier service, and vehicle logistics</p>
      </div>

      <div style="max-width: 900px; margin: 0 auto; display: flex; flex-direction: column; gap: 15px;">
        
        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 20px; border-radius: 10px;">
          <h3 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 8px;">1. How can I safely transport my car from Cambay (Khambhat)?</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6;">You can schedule our professional car moving service. We collect your car directly at your residence, complete initial inspection, apply 7-layer body protection, and load it securely onto an enclosed container carrier.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 20px; border-radius: 10px;">
          <h3 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 8px;">2. What makes your car shipping services reliable in Cambay?</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6;">We feature enclosed container trucks, full transit insurance coverage, 4-wheel harness tie-downs, and real-time GPS tracking for complete peace of mind.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 20px; border-radius: 10px;">
          <h3 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 8px;">3. Is express car courier service available for urgent relocation?</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6;">Yes, we offer point-to-point car courier service using single-car closed containers for fast and private vehicle transit.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 20px; border-radius: 10px;">
          <h3 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 8px;">4. What are the typical charges for car transportation in Cambay?</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6;">Car transport rates depend on route distance, vehicle type, and carrier selection. Local/regional transport within Gujarat starts at ₹4,000 - ₹7,000, while long-distance interstate moves range from ₹9,500 to ₹19,500.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 20px; border-radius: 10px;">
          <h3 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 8px;">5. Is doorstep pickup included in Cambay?</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6;">Yes, our driver collects the car directly from your house or office in Cambay and delivers it to your destination doorstep.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 20px; border-radius: 10px;">
          <h3 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 8px;">6. What documents are needed before shipping my car?</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6;">You must provide a copy of the car Registration Certificate (RC), active vehicle insurance policy, government photo ID, and signed vehicle inspection sheet.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 20px; border-radius: 10px;">
          <h3 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 8px;">7. Can I track my vehicle during highway transit?</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6;">Yes, all our car transport trucks carry GPS tracking units, providing location updates sent directly to your phone.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 20px; border-radius: 10px;">
          <h3 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 8px;">8. How does transit insurance protect my car during shipping?</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6;">Transit insurance covers declared car value against accidental damage, fire, or loss while in transit.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 20px; border-radius: 10px;">
          <h3 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 8px;">9. Is personal luggage allowed inside the car boot?</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6;">Up to 20-25 kg of non-flammable personal luggage can be kept in the boot. Cash, jewelry, and hazardous items are strictly prohibited.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 20px; border-radius: 10px;">
          <h3 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 8px;">10. How far in advance should I book car moving service in Cambay?</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6;">We recommend booking 2 to 3 days in advance to reserve optimal container slot timing.</p>
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
        "description": "Professional car transportation service in Cambay (Khambhat, Gujarat) offering top car shipping services, express car courier service, transport my car safely & car moving service.",
        "address": {
          "@type": "PostalAddress",
          "addressLocality": "Cambay, Anand",
          "addressRegion": "Gujarat",
          "addressCountry": "IN"
        }
      },
      {
        "@type": "FAQPage",
        "mainEntity": [
          {
            "@type": "Question",
            "name": "How can I safely transport my car from Cambay (Khambhat)?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "You can schedule our professional car moving service. We collect your car directly at your residence, complete initial inspection, apply 7-layer body protection, and load it securely onto an enclosed container carrier."
            }
          },
          {
            "@type": "Question",
            "name": "What makes your car shipping services reliable in Cambay?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "We feature enclosed container trucks, full transit insurance coverage, 4-wheel harness tie-downs, and real-time GPS tracking for complete peace of mind."
            }
          },
          {
            "@type": "Question",
            "name": "Is express car courier service available for urgent relocation?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "Yes, we offer point-to-point car courier service using single-car closed containers for fast and private vehicle transit."
            }
          },
          {
            "@type": "Question",
            "name": "What are the typical charges for car transportation in Cambay?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "Car transport rates depend on route distance, vehicle type, and carrier selection. Local/regional transport starts at ₹4,000 - ₹7,000, while interstate moves range from ₹9,500 to ₹19,500."
            }
          },
          {
            "@type": "Question",
            "name": "Is doorstep pickup included in Cambay?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "Yes, our driver collects the car directly from your house or office in Cambay and delivers it to your destination doorstep."
            }
          },
          {
            "@type": "Question",
            "name": "What documents are needed before shipping my car?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "You must provide a copy of the car Registration Certificate (RC), active vehicle insurance policy, government photo ID, and signed vehicle inspection sheet."
            }
          },
          {
            "@type": "Question",
            "name": "Can I track my vehicle during highway transit?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "Yes, all our car transport trucks carry GPS tracking units, providing location updates sent directly to your phone."
            }
          },
          {
            "@type": "Question",
            "name": "How does transit insurance protect my car during shipping?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "Transit insurance covers declared car value against accidental damage, fire, or loss while in transit."
            }
          },
          {
            "@type": "Question",
            "name": "Is personal luggage allowed inside the car boot?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "Up to 20-25 kg of non-flammable personal luggage can be kept in the boot. Cash, jewelry, and hazardous items are strictly prohibited."
            }
          },
          {
            "@type": "Question",
            "name": "How far in advance should I book car moving service in Cambay?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "We recommend booking 2 to 3 days in advance to reserve optimal container slot timing."
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
      <h2 style="font-size: 2.2rem; font-weight: 800; margin-bottom: 15px;">Book Car Transportation in Cambay Today</h2>
      <p style="font-size: 1.1rem; color: #ffcdd2; max-width: 700px; margin: 0 auto 30px;">
        Get premier car shipping services with guaranteed doorstep pickup, 7-layer safety packaging, and full transit insurance.
      </p>
      <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap;">
        <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Now" style="padding: 15px 35px; background: #ffffff; color: #d32f2f; border-radius: 50px; font-weight: 800; font-size: 1.1rem; text-decoration: none; box-shadow: 0 5px 20px rgba(0,0,0,0.3);">
          <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call <?php echo SITE_PHONE; ?>
        </a>
        <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20to%20book%20car%20transportation%20in%20Cambay%20Gujarat." title="WhatsApp Chat" target="_blank" style="padding: 15px 35px; background: #25d366; color: #ffffff; border-radius: 50px; font-weight: 800; font-size: 1.1rem; text-decoration: none; box-shadow: 0 5px 20px rgba(0,0,0,0.3);">
          <i class="fab fa-whatsapp" style="margin-right: 8px;"></i> WhatsApp Quote
        </a>
      </div>
    </div>
  </section>

</main>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
