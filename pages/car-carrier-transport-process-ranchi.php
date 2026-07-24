<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "Car Carrier Transport Process Ranchi | Safe Vehicle Shipping";
$page_desc = "Step-by-step car carrier transport process in Ranchi. Covered double-decker car trailers, wheel clamp locking, hydraulic ramp loading & live GPS tracking. Call 8409531615.";
$page_keywords = "car carrier transport process ranchi, car shipping packers movers ranchi, car carrier trailer ranchi, vehicle relocation guide ranchi, intercity car transport ranchi";

require_once __DIR__ . '/../includes/header.php';
?>

<main class="site-main">

  <!-- Hero Section with Lead Form -->
  <section class="hero-section" style="background: linear-gradient(135deg, #0b132b 0%, #1c2541 100%); padding: 60px 0; color: #ffffff;">
    <div class="container">
      <div class="hero-grid" style="display: grid; grid-template-columns: 1.2fr 0.8fr; gap: 40px; align-items: center;">
        
        <!-- Hero Text Column -->
        <div class="hero-text">
          <span class="section-tag" style="background: rgba(245, 158, 11, 0.15); color: #f59e0b; border: 1px solid rgba(245, 158, 11, 0.4); padding: 6px 16px; border-radius: 20px; font-size: 0.85rem; font-weight: 700; text-transform: uppercase; display: inline-block; margin-bottom: 15px;">
            Professional Vehicle Logistics 2026
          </span>
          <h1 style="font-size: 2.8rem; font-weight: 800; line-height: 1.2; margin-bottom: 20px; color: #ffffff;">
            Car Carrier Transport <span style="color: #f59e0b;">Process</span> in Ranchi
          </h1>
          <p style="font-size: 1.15rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 25px;">
            Transporting your sedan, SUV, hatchback, or luxury automobile intercity from Ranchi requires specialized vehicle carriers, certified loading ramps, and wheel-tie-down security to prevent road scratch marks, bumper ground impact, weather exposure, or odometer mileage accumulation. Shree Ashirwad Packers and Movers operates specialized covered multi-car double-decker trailers equipped with hydraulic loading decks, safety rubber wheel chocks, heavy-duty nylon belt tie-downs, and real-time GPS tracking systems. Our certified truck operators ensure 100% door-to-door vehicle delivery with comprehensive 360-degree inspection documentation and all-risk transit insurance. Discover our step-by-step car transport process, vehicle inspection standards, pre-transit checklists, and transparent pricing rates.
          </p>

          <div style="display: flex; gap: 15px; flex-wrap: wrap; margin-bottom: 30px;">
            <a href="tel:<?php echo SITE_PHONE_RAW; ?>" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
              📞 Call Car Transport Helpline: <?php echo SITE_PHONE; ?>
            </a>
            <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers%20and%20Movers,%20I%20need%20car%20carrier%20transport%20process%20details." target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
              💬 Chat on WhatsApp
            </a>
          </div>

          <div style="display: flex; gap: 20px; font-size: 0.9rem; color: #94a3b8;">
            <span><strong style="color: #f59e0b;">Covered</strong> Multi-Car Trailers</span>
            <span><strong style="color: #f59e0b;">Wheel-Lock</strong> Belt Safety</span>
            <span><strong style="color: #f59e0b;">Zero</strong> Odometer Mileage</span>
          </div>
        </div>

        <!-- Hero Lead Form Column -->
        <div class="hero-form-card" style="background: rgba(255, 255, 255, 0.05); backdrop-filter: blur(10px); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 16px; padding: 30px; box-shadow: 0 15px 35px rgba(0,0,0,0.4);">
          <h2 style="font-size: 1.4rem; color: #ffffff; margin-bottom: 8px; font-weight: 700; text-align: center;">Get Car Transport Quote</h2>
          <p style="font-size: 0.85rem; color: #94a3b8; text-align: center; margin-bottom: 20px;">Receive itemized vehicle carrier quotes via WhatsApp</p>

          <form action="#" method="POST" onsubmit="sendHeroWhatsAppLead(event, this);">
            <div style="margin-bottom: 14px;">
              <input type="text" name="name" class="form-control" placeholder="Your Full Name" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="margin-bottom: 14px;">
              <input type="tel" name="phone" class="form-control" placeholder="10-Digit Phone / WhatsApp Number" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 10px; margin-bottom: 14px;">
              <input type="text" name="move_from" class="form-control" placeholder="Pickup Location in Ranchi" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
              <input type="text" name="move_to" class="form-control" placeholder="Destination City" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="margin-bottom: 16px;">
              <textarea name="message" class="form-control" rows="2" placeholder="Car Model (e.g. Hatchback, Sedan, SUV, Luxury)" style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;"></textarea>
            </div>
            <button type="submit" class="btn btn-primary" style="width: 100%; padding: 14px; font-weight: 700; font-size: 1rem; border-radius: 8px;">
              Get Car Shipping Quote on WhatsApp
            </button>
          </form>
        </div>

      </div>
    </div>
  </section>

  <!-- Section 2: Car Carrier Key Statistics -->
  <section class="stats-section" style="padding: 50px 0; background: #070d1e; border-bottom: 1px solid rgba(245, 158, 11, 0.2);">
    <div class="container">
      <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 20px; text-align: center;">
        <div style="padding: 20px; background: rgba(23, 42, 84, 0.5); border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">100%</div>
          <div style="font-size: 0.9rem; color: #cbd5e1; margin-top: 5px;">Covered Double-Decker Trailers</div>
        </div>
        <div style="padding: 20px; background: rgba(23, 42, 84, 0.5); border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">4-Point</div>
          <div style="font-size: 0.9rem; color: #cbd5e1; margin-top: 5px;">Wheel Lock Safety Belts</div>
        </div>
        <div style="padding: 20px; background: rgba(23, 42, 84, 0.5); border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">GPS Live</div>
          <div style="font-size: 0.9rem; color: #cbd5e1; margin-top: 5px;">Real-Time Vehicle Tracking</div>
        </div>
        <div style="padding: 20px; background: rgba(23, 42, 84, 0.5); border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">Door-to-Door</div>
          <div style="font-size: 0.9rem; color: #cbd5e1; margin-top: 5px;">Pickup &amp; Delivery Service</div>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 3: 6-Card Grid (3x2 Layout) - 6 Stages of Car Carrier Process -->
  <section style="padding: 70px 0; background: #0b132b; color: #e2e8f0; line-height: 1.8;">
    <div class="container">
      
      <div style="max-width: 950px; margin: 0 auto;">
        <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Car Carrier Logistics</span>
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin: 10px 0 20px 0;">
          6 Critical Steps in Our <span style="color: #f59e0b;">Car Carrier Transport Process</span>
        </h2>
        <p style="font-size: 1.05rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 25px;">
          Our intercity automobile transportation protocol guarantees zero scratch damage, road stone impact, or mechanical stress:
        </p>

        <!-- 6 Cards Grid (3x2 Layout) -->
        <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px; margin: 30px 0;">
          
          <!-- Card 1 -->
          <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px; box-shadow: 0 10px 25px rgba(0,0,0,0.3);">
            <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;">📋</div>
            <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">1. Pre-Transit Joint Car Condition Audit</h3>
            <p style="font-size: 0.9rem; color: #cbd5e1; line-height: 1.6; margin: 0;">
              Our driver performs a thorough 360-degree vehicle inspection, documenting pre-existing dents, scratches, fuel levels, and odometer reading on an official condition sheet signed by the owner.
            </p>
          </div>

          <!-- Card 2 -->
          <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px; box-shadow: 0 10px 25px rgba(0,0,0,0.3);">
            <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;">🛡️</div>
            <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">2. Protective Seat &amp; Steering Cover Shield</h3>
            <p style="font-size: 0.9rem; color: #cbd5e1; line-height: 1.6; margin: 0;">
              Plastic steering wheel covers, disposable floor mats, and seat protective films are installed before driving the vehicle onto the hydraulic loading ramp.
            </p>
          </div>

          <!-- Card 3 -->
          <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px; box-shadow: 0 10px 25px rgba(0,0,0,0.3);">
            <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;">🏗️</div>
            <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">3. Hydraulic Ramp Drive-On Loading</h3>
            <p style="font-size: 0.9rem; color: #cbd5e1; margin: 0; line-height: 1.6;">
              Cars are driven up smooth hydraulic ramp incline decks into covered double-decker auto trailers, avoiding chassis scrapes or bumper underbody contact.
            </p>
          </div>

          <!-- Card 4 -->
          <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px; box-shadow: 0 10px 25px rgba(0,0,0,0.3);">
            <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;">🔒</div>
            <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">4. 4-Point Wheel Clamp &amp; Nylon Belt Locking</h3>
            <p style="font-size: 0.9rem; color: #cbd5e1; margin: 0; line-height: 1.6;">
              Each vehicle tire is locked into position with heavy steel wheel chocks and secured to the trailer floor using 4 high-tensile strength nylon ratchet straps.
            </p>
          </div>

          <!-- Card 5 -->
          <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px; box-shadow: 0 10px 25px rgba(0,0,0,0.3);">
            <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;">📡</div>
            <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">5. GPS Monitored Highway Transit</h3>
            <p style="font-size: 0.9rem; color: #cbd5e1; margin: 0; line-height: 1.6;">
              Covered multi-car carrier trailers operate with real-time GPS tracking systems, allowing vehicle owners to track trailer movement live on national highways.
            </p>
          </div>

          <!-- Card 6 -->
          <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px; box-shadow: 0 10px 25px rgba(0,0,0,0.3);">
            <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;">🏁</div>
            <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">6. Doorstep Unloading &amp; Joint Verification</h3>
            <p style="font-size: 0.9rem; color: #cbd5e1; margin: 0; line-height: 1.6;">
              Upon arrival at your destination city, your car is unloaded via hydraulic ramp, re-inspected against the initial condition sheet, and handed over to you.
            </p>
          </div>

        </div>

        <p style="font-size: 1.05rem; color: #cbd5e1; line-height: 1.8; margin-top: 25px;">
          This 6-step car carrier transport process eliminates road stone chips, weather fading, and extra driving mileage during intercity relocation.
        </p>

      </div>

    </div>
  </section>

  <!-- Section 4: Car Carrier Rate Matrix -->
  <section style="padding: 70px 0; background: linear-gradient(180deg, #0b132b 0%, #16203b 100%); color: #ffffff;">
    <div class="container" style="max-width: 900px;">
      
      <div class="section-header text-center" style="margin-bottom: 45px;">
        <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Car Shipping Rates</span>
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin-top: 10px;">
          Standard Car Carrier Shipping Rates from <span style="color: #f59e0b;">Ranchi</span>
        </h2>
        <p style="font-size: 1.05rem; color: #cbd5e1; max-width: 800px; margin: 15px auto 0 auto; line-height: 1.7;">
          Transparent intercity car shipping rate slabs based on vehicle category and transit distance:
        </p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 24px;">
        
        <div style="background: #172a54; padding: 24px; border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.3);">
          <h3 style="font-size: 1.2rem; color: #f59e0b; font-weight: 700; margin-bottom: 12px;">🚗 Hatchback &amp; Sedan Intercity Shipping Rates</h3>
          <ul style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.8; padding-left: 18px; margin: 0;">
            <li>Ranchi to Patna: ₹7,000 – ₹10,000</li>
            <li>Ranchi to Kolkata: ₹8,000 – ₹12,000</li>
            <li>Ranchi to Delhi NCR: ₹14,000 – ₹19,000</li>
            <li>Ranchi to Bangalore: ₹16,000 – ₹24,000</li>
            <li>Ranchi to Mumbai / Pune: ₹17,000 – ₹25,000</li>
            <li>Includes covered trailer slot &amp; wheel locking</li>
          </ul>
        </div>

        <div style="background: #172a54; padding: 24px; border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.3);">
          <h3 style="font-size: 1.2rem; color: #f59e0b; font-weight: 700; margin-bottom: 12px;">🚙 SUV &amp; Luxury Vehicle Intercity Rates</h3>
          <ul style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.8; padding-left: 18px; margin: 0;">
            <li>Ranchi to Patna (SUV): ₹9,000 – ₹13,000</li>
            <li>Ranchi to Kolkata (SUV): ₹10,000 – ₹15,000</li>
            <li>Ranchi to Delhi NCR (SUV): ₹18,000 – ₹25,000</li>
            <li>Ranchi to Bangalore (SUV): ₹20,000 – ₹28,000</li>
            <li>Single Car Enclosed Carrier (Luxury): ₹28,000 – ₹45,000</li>
            <li>Includes dedicated single-vehicle hydraulic carrier</li>
          </ul>
        </div>

      </div>

      <p style="font-size: 1.05rem; color: #cbd5e1; line-height: 1.8; margin-top: 25px;">
        All automobile transport quotes provided by Shree Ashirwad Packers include door pickup, hydraulic ramp loading, transit insurance, and toll fees with zero surprise add-on pricing.
      </p>

    </div>
  </section>

  <!-- Section 5: Step-by-Step Car Shipping Inspection Protocol -->
  <section style="padding: 70px 0; background: #0b132b; color: #e2e8f0; border-top: 1px solid rgba(245, 158, 11, 0.15);">
    <div class="container" style="max-width: 900px;">
      
      <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Inspection Protocol</span>
      <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin: 10px 0 20px 0;">
        5 Steps of Our Vehicle Inspection Audit
      </h2>

      <p style="font-size: 1.05rem; color: #cbd5e1; margin-bottom: 25px; line-height: 1.8;">
        Our standardized vehicle inspection workflow guarantees 100% transparency for car owners:
      </p>

      <div style="display: grid; grid-template-columns: 1fr; gap: 16px; margin-bottom: 35px;">
        <div style="background: rgba(23, 42, 84, 0.6); padding: 20px 24px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #ffffff; font-size: 1.15rem; margin-bottom: 6px;">1. High-Resolution Photographic &amp; Video Documentation</h4>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.6;">
            We capture 12 high-resolution photos of your vehicle exterior, underbody bumpers, glass panels, and odometer display before loading.
          </p>
        </div>
        <div style="background: rgba(23, 42, 84, 0.6); padding: 20px 24px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #ffffff; font-size: 1.15rem; margin-bottom: 6px;">2. Fluid Leakage &amp; Fuel Level Check</h4>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.6;">
            We verify that the fuel tank is filled to approximately 25% capacity for safe ramp driving while reducing flammable fuel weight in transit.
          </p>
        </div>
        <div style="background: rgba(23, 42, 84, 0.6); padding: 20px 24px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #ffffff; font-size: 1.15rem; margin-bottom: 6px;">3. Tire Pressure &amp; Brake System Verification</h4>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.6;">
            Tire air pressures are checked and corrected to recommended levels so wheel chocks fit firmly against tire treads during trailer travel.
          </p>
        </div>
        <div style="background: rgba(23, 42, 84, 0.6); padding: 20px 24px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #ffffff; font-size: 1.15rem; margin-bottom: 6px;">4. Removal or Retraction of Loose External Accessories</h4>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.6;">
            Radio antennas are unscrewed, side mirrors folded inward, and custom roof racks or bike carriers detached for compact trailer placement.
          </p>
        </div>
        <div style="background: rgba(23, 42, 84, 0.6); padding: 20px 24px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #ffffff; font-size: 1.15rem; margin-bottom: 6px;">5. Issuance of Car Condition Report &amp; Bill of Lading</h4>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.6;">
            A signed copy of the Vehicle Inspection Report and official Bill of Lading contract is provided to the vehicle owner prior to departure.
          </p>
        </div>
      </div>

    </div>
  </section>

  <!-- Section 6: Localities Served in Ranchi (Internal Link Grid 1 - 4 Links) -->
  <section style="padding: 70px 0; background: #070d1e; color: #ffffff;">
    <div class="container" style="max-width: 900px;">
      
      <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Pickup Locations</span>
      <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin: 10px 0 20px 0;">
        Doorstep Car Pickup Across <span style="color: #f59e0b;">Ranchi</span> Sectors
      </h2>

      <p style="font-size: 1.05rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 20px;">
        We dispatch car pickup drivers and multi-car carrier trailers to all major residential hubs in Ranchi:
      </p>

      <!-- Internal Link Grid 1 (4 Contextual Links) -->
      <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 16px; margin-bottom: 30px;">
        <div style="background: #101c40; padding: 18px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #ffffff; font-size: 1.1rem; margin-bottom: 8px;">Kanke Road Executive Sector</h4>
          <p style="font-size: 0.9rem; color: #94a3b8; margin-bottom: 10px;">Luxury sedan and SUV transport pickup services in Kanke Road.</p>
          <a href="<?php echo SITE_URL; ?>pages/packers-and-movers-kanke-road-ranchi.php" style="color: #f59e0b; text-decoration: underline; font-weight: 600; font-size: 0.9rem;">
            Packers Movers Kanke Road Ranchi →
          </a>
        </div>

        <div style="background: #101c40; padding: 18px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #ffffff; font-size: 1.1rem; margin-bottom: 8px;">Harmu Housing Board Zone</h4>
          <p style="font-size: 0.9rem; color: #94a3b8; margin-bottom: 10px;">Doorstep automobile shipping and trailer loading in Harmu.</p>
          <a href="<?php echo SITE_URL; ?>pages/packers-and-movers-harmu-ranchi.php" style="color: #f59e0b; text-decoration: underline; font-weight: 600; font-size: 0.9rem;">
            Packers Movers Harmu Ranchi →
          </a>
        </div>

        <div style="background: #101c40; padding: 18px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #ffffff; font-size: 1.1rem; margin-bottom: 8px;">Hinoo Airport Enclave</h4>
          <p style="font-size: 0.9rem; color: #94a3b8; margin-bottom: 10px;">Fast door pickup for intercity vehicle relocation in Hinoo.</p>
          <a href="<?php echo SITE_URL; ?>pages/packers-and-movers-hinoo-ranchi.php" style="color: #f59e0b; text-decoration: underline; font-weight: 600; font-size: 0.9rem;">
            Packers Movers Hinoo Ranchi →
          </a>
        </div>

        <div style="background: #101c40; padding: 18px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #ffffff; font-size: 1.1rem; margin-bottom: 8px;">Bariatu Medical Enclave</h4>
          <p style="font-size: 0.9rem; color: #94a3b8; margin-bottom: 10px;">Intercity car carrier transport services in Bariatu.</p>
          <a href="<?php echo SITE_URL; ?>pages/packers-and-movers-bariatu-ranchi.php" style="color: #f59e0b; text-decoration: underline; font-weight: 600; font-size: 0.9rem;">
            Packers Movers Bariatu Ranchi →
          </a>
        </div>
      </div>

    </div>
  </section>

  <!-- Section 7: Popular Intercity Car Corridors (Internal Link Grid 2 - 4 Links) -->
  <section style="padding: 70px 0; background: #0b132b; color: #ffffff;">
    <div class="container" style="max-width: 900px;">
      
      <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Intercity Car Routes</span>
      <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin: 10px 0 20px 0;">
        Popular Intercity Car Carrier Corridors from <span style="color: #f59e0b;">Ranchi</span>
      </h2>

      <p style="font-size: 1.05rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 25px;">
        GPS tracked auto trailer routes connecting Ranchi to major Indian metros:
      </p>

      <!-- Internal Link Grid 2 (4 Contextual Links) -->
      <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 16px; margin-bottom: 30px;">
        <div style="background: #172a54; padding: 18px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #ffffff; font-size: 1.1rem; margin-bottom: 8px;">Ranchi to Kolkata Auto Trailer Route</h4>
          <p style="font-size: 0.9rem; color: #94a3b8; margin-bottom: 10px;">NH-19 covered car shipping connecting Ranchi to Kolkata.</p>
          <a href="<?php echo SITE_URL; ?>pages/packers-and-movers-ranchi-to-kolkata.php" style="color: #f59e0b; text-decoration: underline; font-weight: 600; font-size: 0.9rem;">
            Ranchi to Kolkata Shifting Services →
          </a>
        </div>

        <div style="background: #172a54; padding: 18px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #ffffff; font-size: 1.1rem; margin-bottom: 8px;">Ranchi to Patna Car Carrier Link</h4>
          <p style="font-size: 0.9rem; color: #94a3b8; margin-bottom: 10px;">Interstate car carrier transport connecting Ranchi to Patna.</p>
          <a href="<?php echo SITE_URL; ?>pages/packers-and-movers-ranchi-to-patna.php" style="color: #f59e0b; text-decoration: underline; font-weight: 600; font-size: 0.9rem;">
            Ranchi to Patna Shifting Services →
          </a>
        </div>

        <div style="background: #172a54; padding: 18px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #ffffff; font-size: 1.1rem; margin-bottom: 8px;">Ranchi to Pune Express Vehicle Freight</h4>
          <p style="font-size: 0.9rem; color: #94a3b8; margin-bottom: 10px;">Covered multi-car carrier transit connecting Ranchi to Pune.</p>
          <a href="<?php echo SITE_URL; ?>pages/packers-and-movers-ranchi-to-pune.php" style="color: #f59e0b; text-decoration: underline; font-weight: 600; font-size: 0.9rem;">
            Ranchi to Pune Shifting Services →
          </a>
        </div>

        <div style="background: #172a54; padding: 18px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #ffffff; font-size: 1.1rem; margin-bottom: 8px;">Ranchi to Hyderabad Auto Carrier Route</h4>
          <p style="font-size: 0.9rem; color: #94a3b8; margin-bottom: 10px;">Interstate vehicle logistics connecting Ranchi to Hyderabad.</p>
          <a href="<?php echo SITE_URL; ?>pages/packers-and-movers-ranchi-to-hyderabad.php" style="color: #f59e0b; text-decoration: underline; font-weight: 600; font-size: 0.9rem;">
            Ranchi to Hyderabad Shifting Services →
          </a>
        </div>
      </div>

    </div>
  </section>

  <!-- Section 8: Pre-Shipping Car Preparation Checklist -->
  <section style="padding: 70px 0; background: #070d1e; color: #ffffff;">
    <div class="container" style="max-width: 900px;">
      
      <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Car Owner Checklist</span>
      <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin: 10px 0 20px 0;">
        7 Checklist Items to Prepare Your Car for Transport
      </h2>

      <p style="font-size: 1.05rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 20px;">
        Follow these practical steps to prepare your automobile for smooth carrier loading:
      </p>

      <div style="background: #101c40; border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 12px; padding: 28px; margin-bottom: 30px;">
        <h4 style="color: #f59e0b; font-size: 1.2rem; margin-bottom: 14px; font-weight: 700;">Vehicle Preparation Tasks:</h4>
        <ol style="margin: 0; padding-left: 20px; color: #cbd5e1; line-height: 1.9; font-size: 0.98rem;">
          <li><strong>Clean Car Exterior Thoroughly:</strong> A clean car body allows accurate pre-transit recording of pre-existing paint scratches and minor dents.</li>
          <li><strong>Remove All Personal Valuables &amp; Loose Belongings:</strong> Remove sunglasses, cash, dash cams, music systems, and luggage from cabin seats and trunk.</li>
          <li><strong>Keep Fuel Level at 20% to 25%:</strong> Maintain just enough fuel for ramp loading and unloading to reduce vehicle weight and fire safety risk.</li>
          <li><strong>Check Battery Condition &amp; Fix Mechanical Leaks:</strong> Ensure the car battery is charged and resolve oil or coolant leaks prior to transport booking.</li>
          <li><strong>Deactivate Car Alarm Systems:</strong> Turn off anti-theft alarms or provide clear instructions to prevent battery drain from trailer vibrations.</li>
          <li><strong>Prepare Photocopies of Vehicle Documents:</strong> Keep copies of RC smartcard, valid motor insurance certificate, and PUC pollution certificate ready.</li>
          <li><strong>Keep Master &amp; Spare Key Fobs Accessible:</strong> Hand over one working key set to the car carrier driver while retaining your spare key.</li>
        </ol>
      </div>

    </div>
  </section>

  <!-- Section 9: 5-Step Safety Control in Car Transport -->
  <section style="padding: 70px 0; background: #0b132b; color: #ffffff; border-top: 1px solid rgba(245, 158, 11, 0.15);">
    <div class="container" style="max-width: 900px;">
      
      <div class="section-header text-center" style="margin-bottom: 45px;">
        <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Safety Controls</span>
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin-top: 10px;">
          5 Safety Controls Deployed in Automobile Shipping
        </h2>
        <p style="font-size: 1.05rem; color: #cbd5e1; max-width: 750px; margin: 10px auto 0 auto; line-height: 1.7;">
          Our specialized car carriers feature industrial safety systems engineered for long-distance highway travel.
        </p>
      </div>

      <div style="display: grid; grid-template-columns: 1fr; gap: 20px;">
        
        <div style="display: flex; gap: 20px; background: #172a54; padding: 24px; border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <div style="font-size: 2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">01</div>
          <div>
            <h3 style="font-size: 1.2rem; color: #ffffff; margin-bottom: 6px;">Covered Tarpaulin &amp; Metal Side Curtains</h3>
            <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.6;">
              Enclosed trailer walls shield vehicle paintwork from highway flying pebbles, rain, dust storms, and extreme sunlight.
            </p>
          </div>
        </div>

        <div style="display: flex; gap: 20px; background: #172a54; padding: 24px; border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <div style="font-size: 2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">02</div>
          <div>
            <h3 style="font-size: 1.2rem; color: #ffffff; margin-bottom: 6px;">Hydraulic Deck Incline &amp; Low Clearance Safety</h3>
            <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.6;">
              Adjustable hydraulic trailer decks cater to low-ground-clearance sports cars and luxury sedans without underbody scraping.
            </p>
          </div>
        </div>

        <div style="display: flex; gap: 20px; background: #172a54; padding: 24px; border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <div style="font-size: 2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">03</div>
          <div>
            <h3 style="font-size: 1.2rem; color: #ffffff; margin-bottom: 6px;">Rubber-Coated Wheel Chocks &amp; Nylon Harness Belts</h3>
            <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.6;">
              Tires are clamped using non-abrasive rubber wheel stoppers and high-strength synthetic harness straps.
            </p>
          </div>
        </div>

        <div style="display: flex; gap: 20px; background: #172a54; padding: 24px; border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <div style="font-size: 2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">04</div>
          <div>
            <h3 style="font-size: 1.2rem; color: #ffffff; margin-bottom: 6px;">Full Declared Value Vehicle Transit Insurance</h3>
            <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.6;">
              Comprehensive transit insurance covers highway accident, fire, overturn, or theft damage with full claim settlement support.
            </p>
          </div>
        </div>

        <div style="display: flex; gap: 20px; background: #172a54; padding: 24px; border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <div style="font-size: 2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">05</div>
          <div>
            <h3 style="font-size: 1.2rem; color: #ffffff; margin-bottom: 6px;">Certified Heavy Truck Drivers &amp; Escort Pilots</h3>
            <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.6;">
              Experienced long-haul truck drivers trained specifically in car trailer mechanics operate under strict speed control guidelines.
            </p>
          </div>
        </div>

      </div>

    </div>
  </section>

  <!-- Section 10: Frequently Asked Questions (22 Detailed Car Carrier FAQs) -->
  <section style="padding: 70px 0; background: #070d1e; color: #ffffff;">
    <div class="container" style="max-width: 900px;">
      
      <div class="section-header text-center" style="margin-bottom: 45px;">
        <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Car Shipping FAQs</span>
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin-top: 10px;">
          Frequently Asked Questions About <span style="color: #f59e0b;">Car Carrier Shipping in Ranchi</span>
        </h2>
        <p style="font-size: 1.05rem; color: #cbd5e1; max-width: 800px; margin: 15px auto 0 auto; line-height: 1.7;">
          Authoritative answers to common questions regarding car shipping rates, covered trailers, door pickup, insurance coverage, and loading safety.
        </p>
      </div>

      <div style="display: flex; flex-direction: column; gap: 16px;">
        
        <div style="background: #101c40; padding: 20px 24px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Q1: How are cars transported intercity from Ranchi by Shree Ashirwad Packers?</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.7;">
            Cars are loaded onto specialized covered multi-car trailers equipped with hydraulic ramps, locked using 4-point wheel harness belts, and tracked via real-time GPS.
          </p>
        </div>

        <div style="background: #101c40; padding: 20px 24px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Q2: What is the difference between open auto carriers and covered car trailers?</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.7;">
            Covered car trailers feature sealed side curtains that protect vehicles from rain, dust storms, flying road stones, and sun damage, whereas open carriers leave cars exposed.
          </p>
        </div>

        <div style="background: #101c40; padding: 20px 24px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Q3: How much does car carrier transport cost from Ranchi to major cities?</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.7;">
            Car shipping rates range from ₹7,000 to ₹12,000 for nearby routes like Patna/Kolkata, and ₹14,000 to ₹25,000 for long-distance routes like Delhi, Bangalore, or Pune based on car model.
          </p>
        </div>

        <div style="background: #101c40; padding: 20px 24px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Q4: Does car transport involve driving my vehicle on the highway?</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.7;">
            No, your car is driven only for a few meters onto the carrier trailer ramp during loading and off the ramp during unloading, preserving zero highway mileage accumulation.
          </p>
        </div>

        <div style="background: #101c40; padding: 20px 24px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Q5: Can I pack household luggage inside my car during car carrier transport?</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.7;">
            We advise against storing heavy personal goods inside the car cabin, though soft items up to 30 kg stored neatly in the car trunk are generally permissible.
          </p>
        </div>

        <div style="background: #101c40; padding: 20px 24px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Q6: How is low-ground-clearance luxury cars loaded safely into trailers?</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.7;">
            We utilize low-angle hydraulic ramp extension decks and wooden incline ramps to ensure sports cars and luxury sedans load smoothly without bumper scraping.
          </p>
        </div>

        <div style="background: #101c40; padding: 20px 24px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Q7: Is transit insurance mandatory for intercity car carrier shipping?</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.7;">
            Yes, full declared value transit insurance is included in our relocation contracts to protect against accidental damage, fire, or transit hazards.
          </p>
        </div>

        <div style="background: #101c40; padding: 20px 24px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Q8: How long does intercity car carrier transport take from Ranchi?</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.7;">
            Transit times range from 2 to 3 days for neighboring states (Patna, Kolkata) and 5 to 7 days for long-distance metro corridors (Delhi, Bangalore, Mumbai).
          </p>
        </div>

        <div style="background: #101c40; padding: 20px 24px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Q9: What car documents are required prior to shipping?</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.7;">
            You need to provide photocopies of your Vehicle Registration Certificate (RC), valid Insurance policy, PUC pollution certificate, and owner ID proof.
          </p>
        </div>

        <div style="background: #101c40; padding: 20px 24px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Q10: Do you provide doorstep car pickup and delivery in Ranchi?</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.7;">
            Yes, our driver collects your vehicle directly from your home or office address in Ranchi and delivers it to your new doorstep at destination.
          </p>
        </div>

        <div style="background: #101c40; padding: 20px 24px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Q11: Can I track my car carrier trailer location live during shipping?</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.7;">
            Yes, all our car carrier trailers are integrated with GPS tracking units, allowing live location tracking and automated SMS updates.
          </p>
        </div>

        <div style="background: #101c40; padding: 20px 24px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Q12: How are car wheels secured inside the multi-car trailer?</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.7;">
            Tires are locked with heavy rubber wheel chocks and clamped with 4 synthetic ratchet harness belts anchored to the trailer floor.
          </p>
        </div>

        <div style="background: #101c40; padding: 20px 24px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Q13: What happens if my car is damaged during transport?</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.7;">
            In the rare event of transit damage, pre-transit photos and condition reports are cross-verified, and full insurance claims are processed promptly.
          </p>
        </div>

        <div style="background: #101c40; padding: 20px 24px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Q14: How much fuel should be left in the car tank before shipping?</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.7;">
            Keep approximately 1/4th (25%) fuel in the car tank—enough for loading/unloading maneuvers while minimizing fire hazard and payload weight.
          </p>
        </div>

        <div style="background: #101c40; padding: 20px 24px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Q15: How can I book car carrier transport process with Shree Ashirwad Packers?</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.7;">
            Call our vehicle logistics desk at <strong><?php echo SITE_PHONE; ?></strong> (Raw: <strong><?php echo SITE_PHONE_RAW; ?></strong>) or email <strong><?php echo SITE_EMAIL; ?></strong> for immediate booking.
          </p>
        </div>

        <div style="background: #101c40; padding: 20px 24px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Q16: Do you transport non-operational or breakdown cars?</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.7;">
            Yes, non-running vehicles are loaded using specialized hydraulic winch cranes into enclosed car carriers safely.
          </p>
        </div>

        <div style="background: #101c40; padding: 20px 24px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Q17: Should I wash my car before handing it over for shipping?</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.7;">
            Yes, a clean car allows our team to clearly identify and document any pre-existing paint scratches on the inspection report.
          </p>
        </div>

        <div style="background: #101c40; padding: 20px 24px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Q18: What is a single-car hydraulic enclosed carrier?</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.7;">
            It is a private, dedicated single-vehicle covered truck designed specifically for high-end luxury, vintage, or exotic sports automobiles.
          </p>
        </div>

        <div style="background: #101c40; padding: 20px 24px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Q19: Should car toll passes like FASTag be disabled during trailer transit?</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.7;">
            We recommend wrapping your FASTag windshield sticker in foil paper or deactivating it temporarily to prevent erroneous toll deductions as the trailer passes toll plazas.
          </p>
        </div>

        <div style="background: #101c40; padding: 20px 24px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Q20: Are car transport rates fixed or subjected to unexpected highway fees?</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.7;">
            Our car shipping rates are 100% fixed upfront upon contract signing, inclusive of all toll taxes, loading costs, fuel, and door service.
          </p>
        </div>

        <div style="background: #101c40; padding: 20px 24px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Q21: Can two-wheelers be shipped alongside cars in the carrier trailer?</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.7;">
            Yes, motorcycles and scooters can be bubble-wrapped and anchored in dedicated bike racks inside the lower deck of the car carrier trailer.
          </p>
        </div>

        <div style="background: #101c40; padding: 20px 24px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Q22: Why choose Shree Ashirwad Packers for car carrier transport in Ranchi?</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.7;">
            We offer covered double-decker trailers, 4-point wheel locking safety, live GPS tracking, 360-degree inspection reports, and all-risk transit insurance for total vehicle safety.
          </p>
        </div>

      </div>

    </div>
  </section>

  <!-- Section 11: Call To Action Banner -->
  <section style="padding: 70px 0; background: linear-gradient(135deg, #172a54 0%, #0b132b 100%); border-top: 1.5px solid rgba(245, 158, 11, 0.4); color: #ffffff;">
    <div class="container" style="max-width: 900px; text-align: center;">
      
      <span class="section-tag" style="background: rgba(245, 158, 11, 0.2); color: #f59e0b; padding: 6px 16px; border-radius: 20px; font-size: 0.85rem; font-weight: 700; text-transform: uppercase;">
        Safe Covered Car Carrier Transport
      </span>

      <h2 style="font-size: 2.3rem; font-weight: 800; margin: 15px 0 15px 0; color: #ffffff;">
        Book Car Shipping with <span style="color: #f59e0b;">Shree Ashirwad Packers</span>
      </h2>

      <p style="font-size: 1.05rem; color: #cbd5e1; max-width: 750px; margin: 0 auto 30px auto; line-height: 1.7;">
        Contact our vehicle logistics team today for a free car inspection, transparent intercity rates, and covered auto carrier trailer booking.
      </p>

      <div style="display: flex; gap: 15px; justify-content: center; flex-wrap: wrap; margin-bottom: 25px;">
        <a href="tel:<?php echo SITE_PHONE_RAW; ?>" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 30px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1.05rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
          📞 Call Car Helpline: <?php echo SITE_PHONE; ?>
        </a>
        <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers%20and%20Movers,%20I%20want%20to%20book%20car%20carrier%20transport." target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 30px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1.05rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
          💬 Chat on WhatsApp
        </a>
        <a href="<?php echo SITE_URL; ?>pages/contact.php" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 30px; background: linear-gradient(135deg, #1e293b 0%, #0f172a 100%); border: 1.5px solid #f59e0b; color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1.05rem; text-decoration: none; box-shadow: 0 4px 15px rgba(245, 158, 11, 0.2);">
          📍 Visit Ranchi Office
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
  
  var message = "Hello Shree Ashirwad Packers & Movers,\n\nI would like to request a Car Shipping Quote:\n- Name: " + name + "\n- Phone: " + phone + "\n- Pickup Location: " + moveFrom + "\n- Destination City: " + moveTo;
  
  if (extraMsg && extraMsg.trim() !== '') {
    message += "\n- Car Model & Details: " + extraMsg;
  }
  
  var whatsappUrl = "https://api.whatsapp.com/send?phone=918409531615&text=" + encodeURIComponent(message);
  window.location.href = whatsappUrl;
}
</script>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
