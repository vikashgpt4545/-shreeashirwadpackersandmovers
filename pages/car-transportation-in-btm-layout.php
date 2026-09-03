<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "Car Transportation in BTM Layout | Car Transport in Bangalore";
$page_desc = "Safe car transportation in BTM Layout (Bangalore) by Shree Ashirwad Packers and Movers. Verified car transport in bangalore, vehicle movers and packers, transparent car shifting charges & car transport near me. Call 8409531615.";
$page_keywords = "car transportation in btm layout, car transport in bangalore, car transport near me, vehicle movers and packers, car shifting charges, car transport btm layout, packers and movers bangalore";
$canonical_url = "https://shreeashirwadpackersandmovers.com/pages/car-transportation-in-btm-layout.php";

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
        <span class="breadcrumb-item active">Car Transportation in BTM Layout</span>
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
            BTM LAYOUT BANGALORE CAR LOGISTICS
          </span>
          <h1 style="font-size: 2.7rem; font-weight: 800; line-height: 1.2; margin-bottom: 20px; color: #ffffff;">
            Reliable <span style="color: #f59e0b;">Car Transportation in BTM Layout</span>
          </h1>
          <p style="font-size: 1.12rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 25px;">
            Searching for reliable <strong>car transport near me</strong> in BTM Layout? Shree Ashirwad Packers and Movers is your premier provider for <strong>car transport in bangalore</strong>. As trusted <strong>vehicle movers and packers</strong>, we offer clear <strong>car shifting charges</strong>, enclosed container carriers, 7-layer body protection, and doorstep pickup across BTM 1st and 2nd Stage.
          </p>

          <div style="display: flex; gap: 15px; flex-wrap: wrap; margin-bottom: 30px;">
            <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Now" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
              <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call Now: <?php echo SITE_PHONE; ?>
            </a>
            <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20a%20car%20transport%20quote%20for%20BTM%20Layout%20Bangalore." title="Chat on WhatsApp" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
              <i class="fab fa-whatsapp" style="margin-right: 8px;"></i> Chat on WhatsApp
            </a>
          </div>

          <div style="display: flex; gap: 20px; font-size: 0.9rem; color: #94a3b8;">
            <span><strong style="color: #f59e0b;">100% Insured</strong> Transit</span>
            <span><strong style="color: #f59e0b;">BTM 1st & 2nd</strong> Stage Hub</span>
            <span><strong style="color: #f59e0b;">Doorstep</strong> Delivery</span>
          </div>
        </div>

        <!-- Hero Lead Form Column -->
        <div class="hero-form-card" style="background: rgba(255, 255, 255, 0.05); backdrop-filter: blur(10px); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 16px; padding: 30px; box-shadow: 0 15px 35px rgba(0,0,0,0.4);">
          <h2 style="font-size: 1.4rem; color: #ffffff; margin-bottom: 8px; font-weight: 700; text-align: center;">Get BTM Layout Car Quote</h2>
          <p style="font-size: 0.85rem; color: #94a3b8; text-align: center; margin-bottom: 20px;">Receive instant price quote on WhatsApp in 2 minutes</p>

          <form action="#" method="POST" onsubmit="sendHeroWhatsAppLead(event, this);">
            <div style="margin-bottom: 14px;">
              <input type="text" name="name" class="form-control" placeholder="Your Full Name" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="margin-bottom: 14px;">
              <input type="tel" name="phone" class="form-control" placeholder="10-Digit Mobile Number" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 10px; margin-bottom: 14px;">
              <input type="text" name="move_from" class="form-control" value="BTM Layout Bangalore" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
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
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b;">14,500+</div>
          <div style="font-size: 0.9rem; color: #94a3b8;">Cars Transported from Bangalore</div>
        </div>
        <div>
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b;">100%</div>
          <div style="font-size: 0.9rem; color: #94a3b8;">Covered Container Carriers</div>
        </div>
        <div>
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b;">Zero</div>
          <div style="font-size: 0.9rem; color: #94a3b8;">Scratch Record</div>
        </div>
        <div>
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b;">24/7</div>
          <div style="font-size: 0.9rem; color: #94a3b8;">Live GPS Monitoring</div>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 4: 6-Card Feature Grid -->
  <section style="padding: 70px 0; background: #0f172a; color: #ffffff;">
    <div class="container">
      <div style="text-align: center; max-width: 700px; margin: 0 auto 50px;">
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff;">Top-Rated <span style="color: #f59e0b;">Car Transport in Bangalore</span></h2>
        <p style="color: #94a3b8; font-size: 1rem; line-height: 1.6;">Our specialized vehicle movers and packers guarantee scratch-free delivery, insurance coverage, and total peace of mind.</p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 30px;">
        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 30px; border-radius: 12px;">
          <div style="width: 50px; height: 50px; background: rgba(245,158,11,0.1); border-radius: 10px; display: flex; align-items: center; justify-content: center; color: #f59e0b; font-size: 1.5rem; margin-bottom: 20px;">
            <i class="fas fa-truck"></i>
          </div>
          <h3 style="font-size: 1.2rem; font-weight: 700; color: #ffffff; margin-bottom: 10px;">Expert Vehicle Movers and Packers</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6;">Trained logistics professionals specialized in safe loading, tie-down, and transportation of sedans & SUVs.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 30px; border-radius: 12px;">
          <div style="width: 50px; height: 50px; background: rgba(245,158,11,0.1); border-radius: 10px; display: flex; align-items: center; justify-content: center; color: #f59e0b; font-size: 1.5rem; margin-bottom: 20px;">
            <i class="fas fa-calculator"></i>
          </div>
          <h3 style="font-size: 1.2rem; font-weight: 700; color: #ffffff; margin-bottom: 10px;">Transparent Car Shifting Charges</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6;">No hidden fees or unexpected surcharges. Get clear, upfront estimates before booking your vehicle relocation.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 30px; border-radius: 12px;">
          <div style="width: 50px; height: 50px; background: rgba(245,158,11,0.1); border-radius: 10px; display: flex; align-items: center; justify-content: center; color: #f59e0b; font-size: 1.5rem; margin-bottom: 20px;">
            <i class="fas fa-shield-alt"></i>
          </div>
          <h3 style="font-size: 1.2rem; font-weight: 700; color: #ffffff; margin-bottom: 10px;">Full Transit Insurance</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6;">100% declared value transit policy covering your vehicle against unforeseen highway incidents.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 30px; border-radius: 12px;">
          <div style="width: 50px; height: 50px; background: rgba(245,158,11,0.1); border-radius: 10px; display: flex; align-items: center; justify-content: center; color: #f59e0b; font-size: 1.5rem; margin-bottom: 20px;">
            <i class="fas fa-map-marked-alt"></i>
          </div>
          <h3 style="font-size: 1.2rem; font-weight: 700; color: #ffffff; margin-bottom: 10px;">Live GPS Tracking</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6;">Continuous satellite tracking updates provided on WhatsApp from pickup in BTM Layout to final destination delivery.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 30px; border-radius: 12px;">
          <div style="width: 50px; height: 50px; background: rgba(245,158,11,0.1); border-radius: 10px; display: flex; align-items: center; justify-content: center; color: #f59e0b; font-size: 1.5rem; margin-bottom: 20px;">
            <i class="fas fa-home"></i>
          </div>
          <h3 style="font-size: 1.2rem; font-weight: 700; color: #ffffff; margin-bottom: 10px;">Doorstep Pick & Drop</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6;">Professional driver pick up right from your apartment or house in BTM Layout with direct delivery at your destination address.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 30px; border-radius: 12px;">
          <div style="width: 50px; height: 50px; background: rgba(245,158,11,0.1); border-radius: 10px; display: flex; align-items: center; justify-content: center; color: #f59e0b; font-size: 1.5rem; margin-bottom: 20px;">
            <i class="fas fa-award"></i>
          </div>
          <h3 style="font-size: 1.2rem; font-weight: 700; color: #ffffff; margin-bottom: 10px;">IBA Approved Invoicing</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6;">Authentic IBA-compliant GST tax invoices and bilty copies for government & corporate employee relocation claims.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 5: Automobile Carrier Infrastructure Options -->
  <section style="padding: 60px 0; background: #1e293b; color: #ffffff;">
    <div class="container">
      <div style="text-align: center; margin-bottom: 40px;">
        <h2 style="font-size: 2rem; font-weight: 800;">Car Carrier Fleet Infrastructure in Bangalore</h2>
        <p style="color: #94a3b8; margin-top: 10px;">Tailored transport solutions serving BTM Layout residents</p>
      </div>

      <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 30px;">
        <div style="background: rgba(0,0,0,0.2); padding: 30px; border-radius: 12px; border-left: 4px solid #f59e0b;">
          <h3 style="font-size: 1.3rem; color: #f59e0b; margin-bottom: 15px;">Option A: Closed Single-Car Container Truck</h3>
          <p style="color: #cbd5e1; line-height: 1.7; margin-bottom: 15px;">Best suited for luxury sedans, vintage vehicles, and premium SUVs. Provides exclusive protection against road dust, weather exposure, and gravel hits.</p>
          <ul style="color: #94a3b8; line-height: 1.8; padding-left: 20px;">
            <li>100% sealed weatherproof metal container</li>
            <li>Low-angle hydraulic drive ramp</li>
            <li>Dedicated single vehicle transit speed</li>
          </ul>
        </div>

        <div style="background: rgba(0,0,0,0.2); padding: 30px; border-radius: 12px; border-left: 4px solid #3b82f6;">
          <h3 style="font-size: 1.3rem; color: #3b82f6; margin-bottom: 15px;">Option B: Multi-Car Covered Trailer Bed</h3>
          <p style="color: #cbd5e1; line-height: 1.7; margin-bottom: 15px;">Cost-effective option for standard hatchbacks and family cars moving via national highway corridors.</p>
          <ul style="color: #94a3b8; line-height: 1.8; padding-left: 20px;">
            <li>Economical shared container freight</li>
            <li>Heavy nylon wheel belt locks</li>
            <li>Daily scheduled departures</li>
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
        <p style="color: #94a3b8;">Ensuring your vehicle reaches its destination without a single mark</p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 20px;">
        <div style="background: rgba(255,255,255,0.03); padding: 25px; border-radius: 10px; text-align: center;">
          <div style="font-size: 1.5rem; font-weight: 800; color: #f59e0b; margin-bottom: 10px;">01</div>
          <h4 style="font-size: 1.1rem; margin-bottom: 10px;">Initial Inspection</h4>
          <p style="font-size: 0.85rem; color: #94a3b8; line-height: 1.6;">Physical condition audit log with high-res photos before vehicle pickup in BTM Layout.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); padding: 25px; border-radius: 10px; text-align: center;">
          <div style="font-size: 1.5rem; font-weight: 800; color: #f59e0b; margin-bottom: 10px;">02</div>
          <h4 style="font-size: 1.1rem; margin-bottom: 10px;">Vulnerable Area Wrapping</h4>
          <p style="font-size: 0.85rem; color: #94a3b8; line-height: 1.6;">Protective foam and bubble wrap application on mirrors, bumpers, and handles.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); padding: 25px; border-radius: 10px; text-align: center;">
          <div style="font-size: 1.5rem; font-weight: 800; color: #f59e0b; margin-bottom: 10px;">03</div>
          <h4 style="font-size: 1.1rem; margin-bottom: 10px;">Hydraulic Ramp Drive</h4>
          <p style="font-size: 0.85rem; color: #94a3b8; line-height: 1.6;">Safe loading onto carrier deck with zero chassis or underbody scraping.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); padding: 25px; border-radius: 10px; text-align: center;">
          <div style="font-size: 1.5rem; font-weight: 800; color: #f59e0b; margin-bottom: 10px;">04</div>
          <h4 style="font-size: 1.1rem; margin-bottom: 10px;">4-Point Wheel Tie-Down</h4>
          <p style="font-size: 0.85rem; color: #94a3b8; line-height: 1.6;">Industrial web straps locking each wheel securely to the carrier floor.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 7: Regional Network Grid (Local Hubs) -->
  <section style="padding: 60px 0; background: #1e293b; color: #ffffff;">
    <div class="container">
      <div style="text-align: center; margin-bottom: 40px;">
        <h2 style="font-size: 2rem; font-weight: 800;">BTM Layout & South Bangalore Regional Network</h2>
        <p style="color: #94a3b8; margin-top: 10px;">Extensive local pickup network across BTM Layout and surrounding IT hubs</p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 15px; text-align: center;">
        <div style="background: rgba(255,255,255,0.05); padding: 15px; border-radius: 8px; font-weight: 600; color: #cbd5e1;">BTM Layout 1st Stage</div>
        <div style="background: rgba(255,255,255,0.05); padding: 15px; border-radius: 8px; font-weight: 600; color: #cbd5e1;">BTM Layout 2nd Stage</div>
        <div style="background: rgba(255,255,255,0.05); padding: 15px; border-radius: 8px; font-weight: 600; color: #cbd5e1;">Koramangala</div>
        <div style="background: rgba(255,255,255,0.05); padding: 15px; border-radius: 8px; font-weight: 600; color: #cbd5e1;">HSR Layout</div>
        <div style="background: rgba(255,255,255,0.05); padding: 15px; border-radius: 8px; font-weight: 600; color: #cbd5e1;">JP Nagar</div>
        <div style="background: rgba(255,255,255,0.05); padding: 15px; border-radius: 8px; font-weight: 600; color: #cbd5e1;">Jayanagar</div>
        <div style="background: rgba(255,255,255,0.05); padding: 15px; border-radius: 8px; font-weight: 600; color: #cbd5e1;">Electronic City</div>
        <div style="background: rgba(255,255,255,0.05); padding: 15px; border-radius: 8px; font-weight: 600; color: #cbd5e1;">Bannerghatta Road</div>
        <div style="background: rgba(255,255,255,0.05); padding: 15px; border-radius: 8px; font-weight: 600; color: #cbd5e1;">Bellandur</div>
        <div style="background: rgba(255,255,255,0.05); padding: 15px; border-radius: 8px; font-weight: 600; color: #cbd5e1;">Marathahalli</div>
        <div style="background: rgba(255,255,255,0.05); padding: 15px; border-radius: 8px; font-weight: 600; color: #cbd5e1;">Whitefield</div>
        <div style="background: rgba(255,255,255,0.05); padding: 15px; border-radius: 8px; font-weight: 600; color: #cbd5e1;">Indiranagar</div>
      </div>
    </div>
  </section>

  <!-- Section 8: Intercity Route Grid -->
  <section style="padding: 60px 0; background: #0f172a; color: #ffffff;">
    <div class="container">
      <div style="text-align: center; margin-bottom: 40px;">
        <h2 style="font-size: 2rem; font-weight: 800;">Popular Intercity Routes from BTM Layout Bangalore</h2>
        <p style="color: #94a3b8; margin-top: 10px;">Direct national highway shipping corridors across India</p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px;">
        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 20px; border-radius: 8px;">
          <h4 style="color: #f59e0b; font-size: 1.1rem; margin-bottom: 8px;">BTM Layout to Hyderabad</h4>
          <p style="color: #94a3b8; font-size: 0.85rem;">Distance: ~570 km | Transit Time: 1-2 Days</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 20px; border-radius: 8px;">
          <h4 style="color: #f59e0b; font-size: 1.1rem; margin-bottom: 8px;">BTM Layout to Chennai</h4>
          <p style="color: #94a3b8; font-size: 0.85rem;">Distance: ~350 km | Transit Time: 1 Day</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 20px; border-radius: 8px;">
          <h4 style="color: #f59e0b; font-size: 1.1rem; margin-bottom: 8px;">BTM Layout to Pune / Mumbai</h4>
          <p style="color: #94a3b8; font-size: 0.85rem;">Distance: ~840 km | Transit Time: 2-3 Days</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 20px; border-radius: 8px;">
          <h4 style="color: #f59e0b; font-size: 1.1rem; margin-bottom: 8px;">BTM Layout to Delhi / NCR</h4>
          <p style="color: #94a3b8; font-size: 0.85rem;">Distance: ~2,150 km | Transit Time: 4-5 Days</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 20px; border-radius: 8px;">
          <h4 style="color: #f59e0b; font-size: 1.1rem; margin-bottom: 8px;">BTM Layout to Kolkata</h4>
          <p style="color: #94a3b8; font-size: 0.85rem;">Distance: ~1,850 km | Transit Time: 4-5 Days</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 20px; border-radius: 8px;">
          <h4 style="color: #f59e0b; font-size: 1.1rem; margin-bottom: 8px;">BTM Layout to Kochi / Trivandrum</h4>
          <p style="color: #94a3b8; font-size: 0.85rem;">Distance: ~550 km | Transit Time: 2 Days</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 9: IBA/GST Compliance Section -->
  <section style="padding: 60px 0; background: #1e293b; color: #ffffff;">
    <div class="container">
      <div style="background: linear-gradient(135deg, rgba(245,158,11,0.1) 0%, rgba(30,41,59,0.8) 100%); border: 1px solid rgba(245,158,11,0.3); padding: 40px; border-radius: 16px;">
        <h2 style="font-size: 1.8rem; color: #f59e0b; margin-bottom: 15px;">IBA & GST Approved Billing for IT Professionals</h2>
        <p style="color: #cbd5e1; line-height: 1.8; margin-bottom: 20px;">
          Serving thousands of IT professionals in BTM Layout and Electronic City, Shree Ashirwad Packers and Movers provides official 18% GST invoices, pre-transit condition audit sheets, and IBA-approved bilty copies for corporate employee claim reimbursement.
        </p>
        <div style="display: flex; gap: 20px; flex-wrap: wrap; color: #94a3b8; font-size: 0.9rem;">
          <span><i class="fas fa-check-circle" style="color: #10b981; margin-right: 6px;"></i> GST Tax Invoice</span>
          <span><i class="fas fa-check-circle" style="color: #10b981; margin-right: 6px;"></i> Pre-Transit Condition Sheet</span>
          <span><i class="fas fa-check-circle" style="color: #10b981; margin-right: 6px;"></i> IBA Approved Bills</span>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 10: 10-Item FAQ with JSON-LD Schema -->
  <section style="padding: 70px 0; background: #0f172a; color: #ffffff;">
    <div class="container">
      <div style="text-align: center; margin-bottom: 50px;">
        <h2 style="font-size: 2.2rem; font-weight: 800;">Frequently Asked Questions — Car Transportation in BTM Layout</h2>
        <p style="color: #94a3b8;">Answers to common queries regarding vehicle shipping in Bangalore</p>
      </div>

      <div style="max-width: 900px; margin: 0 auto; display: flex; flex-direction: column; gap: 15px;">
        
        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 20px; border-radius: 10px;">
          <h3 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 8px;">1. How are car shifting charges calculated for BTM Layout relocations?</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6;">Car shifting charges depend on total transit distance, vehicle model, carrier type (open vs enclosed container), and insurance valuation. Regional moves to Chennai or Hyderabad start at ₹5,500 - ₹8,500, while long-distance interstate moves to Delhi or Kolkata range from ₹12,000 to ₹22,000.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 20px; border-radius: 10px;">
          <h3 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 8px;">2. What makes your car transport in bangalore service reliable?</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6;">We feature enclosed container carriers, 7-layer body protection, 100% declared value insurance, and live GPS tracking.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 20px; border-radius: 10px;">
          <h3 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 8px;">3. How do I find trustworthy vehicle movers and packers near me in BTM Layout?</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6;">Shree Ashirwad Packers and Movers provides direct doorstep pickup across BTM 1st and 2nd Stage with complete documentation and zero-scratch guarantee.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 20px; border-radius: 10px;">
          <h3 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 8px;">4. Is doorstep car pickup available in narrow lanes of BTM Layout?</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6;">Yes, our driver picks up your car directly from your apartment and drives it to our main container loading yard, or loads it directly using small ramp tow trucks if street space permits.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 20px; border-radius: 10px;">
          <h3 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 8px;">5. What paperwork is required before handing over my vehicle?</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6;">Required documents comprise a copy of the car Registration Certificate (RC), valid insurance policy, owner ID, and the signed joint inspection document.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 20px; border-radius: 10px;">
          <h3 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 8px;">6. Can I track my vehicle during highway transit?</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6;">Yes, all our car transport trucks are equipped with GPS tracking hardware, providing daily location updates directly to your WhatsApp.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 20px; border-radius: 10px;">
          <h3 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 8px;">7. How does transit insurance protect my car during movement?</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6;">Transit insurance covers declared vehicle value against accidental damage, fire, or theft during intercity highway movement.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 20px; border-radius: 10px;">
          <h3 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 8px;">8. Is it allowed to keep personal goods inside the car?</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6;">Up to 25 kg of non-hazardous personal items can be stored securely in the vehicle trunk. Flammables and valuables are prohibited.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 20px; border-radius: 10px;">
          <h3 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 8px;">9. How is the vehicle loaded into the container truck?</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6;">We use low-angle hydraulic ramps to drive your car smoothly onto the deck without any underbody contact or bumper damage.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 20px; border-radius: 10px;">
          <h3 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 8px;">10. How far in advance should I schedule my car transport from BTM Layout?</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6;">Booking 2-3 days in advance allows us to arrange optimal carrier slot timing and smooth doorstep pickup.</p>
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
        "description": "Professional car transportation service in BTM Layout (Bangalore) offering top car transport in bangalore, vehicle movers and packers, transparent car shifting charges & car transport near me.",
        "address": {
          "@type": "PostalAddress",
          "addressLocality": "BTM Layout, Bangalore",
          "addressRegion": "Karnataka",
          "addressCountry": "IN"
        }
      },
      {
        "@type": "FAQPage",
        "mainEntity": [
          {
            "@type": "Question",
            "name": "How are car shifting charges calculated for BTM Layout relocations?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "Car shifting charges depend on total transit distance, vehicle model, carrier type, and insurance valuation. Regional moves start at ₹5,500 - ₹8,500, while interstate moves range from ₹12,000 to ₹22,000."
            }
          },
          {
            "@type": "Question",
            "name": "What makes your car transport in bangalore service reliable?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "We feature enclosed container carriers, 7-layer body protection, 100% declared value insurance, and live GPS tracking."
            }
          },
          {
            "@type": "Question",
            "name": "How do I find trustworthy vehicle movers and packers near me in BTM Layout?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "Shree Ashirwad Packers and Movers provides direct doorstep pickup across BTM 1st and 2nd Stage with complete documentation."
            }
          },
          {
            "@type": "Question",
            "name": "Is doorstep car pickup available in narrow lanes of BTM Layout?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "Yes, our driver picks up your car directly from your apartment and drives it to our main container loading yard."
            }
          },
          {
            "@type": "Question",
            "name": "What paperwork is required before handing over my vehicle?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "Required documents comprise a copy of the car Registration Certificate (RC), valid insurance policy, owner ID, and the signed joint inspection document."
            }
          },
          {
            "@type": "Question",
            "name": "Can I track my vehicle during highway transit?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "Yes, all our car transport trucks are equipped with GPS tracking hardware, providing daily location updates directly to your WhatsApp."
            }
          },
          {
            "@type": "Question",
            "name": "How does transit insurance protect my car during movement?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "Transit insurance covers declared vehicle value against accidental damage, fire, or theft during intercity highway movement."
            }
          },
          {
            "@type": "Question",
            "name": "Is it allowed to keep personal goods inside the car?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "Up to 25 kg of non-hazardous personal items can be stored securely in the vehicle trunk. Flammables and valuables are prohibited."
            }
          },
          {
            "@type": "Question",
            "name": "How is the vehicle loaded into the container truck?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "We use low-angle hydraulic ramps to drive your car smoothly onto the deck without any underbody contact."
            }
          },
          {
            "@type": "Question",
            "name": "How far in advance should I schedule my car transport from BTM Layout?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "Booking 2-3 days in advance allows us to arrange optimal carrier slot timing and smooth doorstep pickup."
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
      <h2 style="font-size: 2.2rem; font-weight: 800; margin-bottom: 15px;">Book Car Transportation in BTM Layout Today</h2>
      <p style="font-size: 1.1rem; color: #ffcdd2; max-width: 700px; margin: 0 auto 30px;">
        Get premier vehicle movers and packers with guaranteed doorstep pickup, 7-layer body protection, and full transit insurance.
      </p>
      <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap;">
        <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Now" style="padding: 15px 35px; background: #ffffff; color: #d32f2f; border-radius: 50px; font-weight: 800; font-size: 1.1rem; text-decoration: none; box-shadow: 0 5px 20px rgba(0,0,0,0.3);">
          <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call <?php echo SITE_PHONE; ?>
        </a>
        <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20to%20book%20car%20transportation%20in%20BTM%20Layout%20Bangalore." title="WhatsApp Chat" target="_blank" style="padding: 15px 35px; background: #25d366; color: #ffffff; border-radius: 50px; font-weight: 800; font-size: 1.1rem; text-decoration: none; box-shadow: 0 5px 20px rgba(0,0,0,0.3);">
          <i class="fab fa-whatsapp" style="margin-right: 8px;"></i> WhatsApp Quote
        </a>
      </div>
    </div>
  </section>

</main>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
