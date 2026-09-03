<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "Car Transportation in Bhatapara | Leading Vehicle Transport Services";
$page_desc = "Expert car transportation in Bhatapara (Baloda Bazar, Chhattisgarh) by Shree Ashirwad Packers and Movers. Top vehicle transport services, car delivery service, trusted automotive shipping companies & full insurance cover. Call 8409531615.";
$page_keywords = "car transportation in bhatapara, vehicle transport services, car transport companies, automotive shipping companies, car delivery service, car movers bhatapara, packers and movers bhatapara";
$canonical_url = "https://shreeashirwadpackersandmovers.com/pages/car-transportation-in-bhatapara.php";

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
        <span class="breadcrumb-item active">Car Transportation in Bhatapara</span>
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
            BHATAPARA CHHATTISGARH CAR LOGISTICS
          </span>
          <h1 style="font-size: 2.7rem; font-weight: 800; line-height: 1.2; margin-bottom: 20px; color: #ffffff;">
            Reliable <span style="color: #f59e0b;">Car Transportation in Bhatapara</span>
          </h1>
          <p style="font-size: 1.12rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 25px;">
            Looking for top-rated <strong>vehicle transport services</strong> in Bhatapara? Shree Ashirwad Packers and Movers stands tall among premier <strong>automotive shipping companies</strong> and licensed <strong>car transport companies</strong>, offering dedicated <strong>car delivery service</strong> with enclosed carriers and 100% transit insurance.
          </p>

          <div style="display: flex; gap: 15px; flex-wrap: wrap; margin-bottom: 30px;">
            <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Now" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
              <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call Now: <?php echo SITE_PHONE; ?>
            </a>
            <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20a%20car%20transport%20quote%20for%20Bhatapara." title="Chat on WhatsApp" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
              <i class="fab fa-whatsapp" style="margin-right: 8px;"></i> Chat on WhatsApp
            </a>
          </div>

          <div style="display: flex; gap: 20px; font-size: 0.9rem; color: #94a3b8;">
            <span><strong style="color: #f59e0b;">100% Insured</strong> Transit</span>
            <span><strong style="color: #f59e0b;">Raipur Hub</strong> Connection</span>
            <span><strong style="color: #f59e0b;">Doorstep</strong> Pickup</span>
          </div>
        </div>

        <!-- Hero Lead Form Column -->
        <div class="hero-form-card" style="background: rgba(255, 255, 255, 0.05); backdrop-filter: blur(10px); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 16px; padding: 30px; box-shadow: 0 15px 35px rgba(0,0,0,0.4);">
          <h2 style="font-size: 1.4rem; color: #ffffff; margin-bottom: 8px; font-weight: 700; text-align: center;">Get Bhatapara Car Transport Quote</h2>
          <p style="font-size: 0.85rem; color: #94a3b8; text-align: center; margin-bottom: 20px;">Receive instant price quote on WhatsApp in 2 minutes</p>

          <form action="#" method="POST" onsubmit="sendHeroWhatsAppLead(event, this);">
            <div style="margin-bottom: 14px;">
              <input type="text" name="name" class="form-control" placeholder="Your Full Name" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="margin-bottom: 14px;">
              <input type="tel" name="phone" class="form-control" placeholder="10-Digit Mobile Number" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 10px; margin-bottom: 14px;">
              <input type="text" name="move_from" class="form-control" value="Bhatapara" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
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
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b;">9,800+</div>
          <div style="font-size: 0.9rem; color: #94a3b8;">Cars Transported</div>
        </div>
        <div>
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b;">100%</div>
          <div style="font-size: 0.9rem; color: #94a3b8;">Covered Containers</div>
        </div>
        <div>
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b;">Zero</div>
          <div style="font-size: 0.9rem; color: #94a3b8;">Damage Guarantee</div>
        </div>
        <div>
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b;">24/7</div>
          <div style="font-size: 0.9rem; color: #94a3b8;">Live GPS Tracking</div>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 4: 6-Card Feature Grid -->
  <section style="padding: 70px 0; background: #0f172a; color: #ffffff;">
    <div class="container">
      <div style="text-align: center; max-width: 700px; margin: 0 auto 50px;">
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff;">Premier <span style="color: #f59e0b;">Vehicle Transport Services</span> in Bhatapara</h2>
        <p style="color: #94a3b8; font-size: 1rem; line-height: 1.6;">Our end-to-end car delivery service ensures safe, timely, and damage-free vehicle shipping.</p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 30px;">
        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 30px; border-radius: 12px;">
          <div style="width: 50px; height: 50px; background: rgba(245,158,11,0.1); border-radius: 10px; display: flex; align-items: center; justify-content: center; color: #f59e0b; font-size: 1.5rem; margin-bottom: 20px;">
            <i class="fas fa-car"></i>
          </div>
          <h3 style="font-size: 1.2rem; font-weight: 700; color: #ffffff; margin-bottom: 10px;">Dedicated Car Delivery Service</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6;">Door-to-door vehicle delivery using single-car closed container trucks and multi-car covered trailers.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 30px; border-radius: 12px;">
          <div style="width: 50px; height: 50px; background: rgba(245,158,11,0.1); border-radius: 10px; display: flex; align-items: center; justify-content: center; color: #f59e0b; font-size: 1.5rem; margin-bottom: 20px;">
            <i class="fas fa-building"></i>
          </div>
          <h3 style="font-size: 1.2rem; font-weight: 700; color: #ffffff; margin-bottom: 10px;">Trusted Automotive Shipping Companies</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6;">Operated under strict national safety protocols matching leading automobile transport networks.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 30px; border-radius: 12px;">
          <div style="width: 50px; height: 50px; background: rgba(245,158,11,0.1); border-radius: 10px; display: flex; align-items: center; justify-content: center; color: #f59e0b; font-size: 1.5rem; margin-bottom: 20px;">
            <i class="fas fa-shield-alt"></i>
          </div>
          <h3 style="font-size: 1.2rem; font-weight: 700; color: #ffffff; margin-bottom: 10px;">Full Transit Insurance</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6;">Complete declared value insurance protecting your vehicle during highway movement from Bhatapara.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 30px; border-radius: 12px;">
          <div style="width: 50px; height: 50px; background: rgba(245,158,11,0.1); border-radius: 10px; display: flex; align-items: center; justify-content: center; color: #f59e0b; font-size: 1.5rem; margin-bottom: 20px;">
            <i class="fas fa-location-arrow"></i>
          </div>
          <h3 style="font-size: 1.2rem; font-weight: 700; color: #ffffff; margin-bottom: 10px;">Live GPS Tracking</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6;">Real-time GPS updates sent directly to your phone throughout the transit path.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 30px; border-radius: 12px;">
          <div style="width: 50px; height: 50px; background: rgba(245,158,11,0.1); border-radius: 10px; display: flex; align-items: center; justify-content: center; color: #f59e0b; font-size: 1.5rem; margin-bottom: 20px;">
            <i class="fas fa-layer-group"></i>
          </div>
          <h3 style="font-size: 1.2rem; font-weight: 700; color: #ffffff; margin-bottom: 10px;">7-Layer Protective Packaging</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6;">High-density foam, bubble wrap, and stretch film covering mirrors, bumpers, and handles.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 30px; border-radius: 12px;">
          <div style="width: 50px; height: 50px; background: rgba(245,158,11,0.1); border-radius: 10px; display: flex; align-items: center; justify-content: center; color: #f59e0b; font-size: 1.5rem; margin-bottom: 20px;">
            <i class="fas fa-file-invoice"></i>
          </div>
          <h3 style="font-size: 1.2rem; font-weight: 700; color: #ffffff; margin-bottom: 10px;">IBA & GST Bills</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6;">100% legal GST invoices and IBA-compliant consignment notes for easy employer claim submission.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 5: Automobile Carrier Infrastructure Options -->
  <section style="padding: 60px 0; background: #1e293b; color: #ffffff;">
    <div class="container">
      <div style="text-align: center; margin-bottom: 40px;">
        <h2 style="font-size: 2rem; font-weight: 800;">Car Shipping Carrier Infrastructure</h2>
        <p style="color: #94a3b8; margin-top: 10px;">Professional solutions from top car transport companies in Chhattisgarh</p>
      </div>

      <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 30px;">
        <div style="background: rgba(0,0,0,0.2); padding: 30px; border-radius: 12px; border-left: 4px solid #f59e0b;">
          <h3 style="font-size: 1.3rem; color: #f59e0b; margin-bottom: 15px;">Option A: Closed Single-Car Container Truck</h3>
          <p style="color: #cbd5e1; line-height: 1.7; margin-bottom: 15px;">Designed for high-end luxury vehicles, vintage cars, and SUVs requiring absolute privacy and protection from weather, dust, and gravel.</p>
          <ul style="color: #94a3b8; line-height: 1.8; padding-left: 20px;">
            <li>Full metal body container seal</li>
            <li>Hydraulic ramp loading mechanism</li>
            <li>Express priority direct transit</li>
          </ul>
        </div>

        <div style="background: rgba(0,0,0,0.2); padding: 30px; border-radius: 12px; border-left: 4px solid #3b82f6;">
          <h3 style="font-size: 1.3rem; color: #3b82f6; margin-bottom: 15px;">Option B: Covered Multi-Car Deck Carrier</h3>
          <p style="color: #cbd5e1; line-height: 1.7; margin-bottom: 15px;">Ideal for budget-conscious customers transporting standard sedans and hatchbacks across states.</p>
          <ul style="color: #94a3b8; line-height: 1.8; padding-left: 20px;">
            <li>Affordable shared container tariff</li>
            <li>Heavy nylon tire harness locking system</li>
            <li>Frequent fixed departure schedules</li>
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
        <p style="color: #94a3b8;">Rigorous safety standards applied to every car transport in Bhatapara</p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 20px;">
        <div style="background: rgba(255,255,255,0.03); padding: 25px; border-radius: 10px; text-align: center;">
          <div style="font-size: 1.5rem; font-weight: 800; color: #f59e0b; margin-bottom: 10px;">01</div>
          <h4 style="font-size: 1.1rem; margin-bottom: 10px;">Pre-Pickup Inspection</h4>
          <p style="font-size: 0.85rem; color: #94a3b8; line-height: 1.6;">Comprehensive visual audit logging existing minor scratches and odometer readings.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); padding: 25px; border-radius: 10px; text-align: center;">
          <div style="font-size: 1.5rem; font-weight: 800; color: #f59e0b; margin-bottom: 10px;">02</div>
          <h4 style="font-size: 1.1rem; margin-bottom: 10px;">Protective Body Wrapping</h4>
          <p style="font-size: 0.85rem; color: #94a3b8; line-height: 1.6;">Applying heavy bubble wrap and stretch film to bumpers, mirrors, and door handles.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); padding: 25px; border-radius: 10px; text-align: center;">
          <div style="font-size: 1.5rem; font-weight: 800; color: #f59e0b; margin-bottom: 10px;">03</div>
          <h4 style="font-size: 1.1rem; margin-bottom: 10px;">Hydraulic Ramp Drive</h4>
          <p style="font-size: 0.85rem; color: #94a3b8; line-height: 1.6;">Smooth ramp drive-on eliminating underbody or bumper contact.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); padding: 25px; border-radius: 10px; text-align: center;">
          <div style="font-size: 1.5rem; font-weight: 800; color: #f59e0b; margin-bottom: 10px;">04</div>
          <h4 style="font-size: 1.1rem; margin-bottom: 10px;">4-Point Wheel Tie-Down</h4>
          <p style="font-size: 0.85rem; color: #94a3b8; line-height: 1.6;">Securing each tire firmly to the truck bed with heavy-duty web belts.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 7: Regional Network Grid (Local Hubs) -->
  <section style="padding: 60px 0; background: #1e293b; color: #ffffff;">
    <div class="container">
      <div style="text-align: center; margin-bottom: 40px;">
        <h2 style="font-size: 2rem; font-weight: 800;">Bhatapara & Baloda Bazar Network Coverage</h2>
        <p style="color: #94a3b8; margin-top: 10px;">Prompt local doorstep pickup across Bhatapara and Chhattisgarh hubs</p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 15px; text-align: center;">
        <div style="background: rgba(255,255,255,0.05); padding: 15px; border-radius: 8px; font-weight: 600; color: #cbd5e1;">Bhatapara Town</div>
        <div style="background: rgba(255,255,255,0.05); padding: 15px; border-radius: 8px; font-weight: 600; color: #cbd5e1;">Baloda Bazar</div>
        <div style="background: rgba(255,255,255,0.05); padding: 15px; border-radius: 8px; font-weight: 600; color: #cbd5e1;">Simga</div>
        <div style="background: rgba(255,255,255,0.05); padding: 15px; border-radius: 8px; font-weight: 600; color: #cbd5e1;">Tilda Neora</div>
        <div style="background: rgba(255,255,255,0.05); padding: 15px; border-radius: 8px; font-weight: 600; color: #cbd5e1;">Raipur</div>
        <div style="background: rgba(255,255,255,0.05); padding: 15px; border-radius: 8px; font-weight: 600; color: #cbd5e1;">Bilaspur</div>
        <div style="background: rgba(255,255,255,0.05); padding: 15px; border-radius: 8px; font-weight: 600; color: #cbd5e1;">Durg / Bhilai</div>
        <div style="background: rgba(255,255,255,0.05); padding: 15px; border-radius: 8px; font-weight: 600; color: #cbd5e1;">Korba</div>
        <div style="background: rgba(255,255,255,0.05); padding: 15px; border-radius: 8px; font-weight: 600; color: #cbd5e1;">Rajnandgaon</div>
        <div style="background: rgba(255,255,255,0.05); padding: 15px; border-radius: 8px; font-weight: 600; color: #cbd5e1;">Raigarh</div>
        <div style="background: rgba(255,255,255,0.05); padding: 15px; border-radius: 8px; font-weight: 600; color: #cbd5e1;">Janjgir</div>
        <div style="background: rgba(255,255,255,0.05); padding: 15px; border-radius: 8px; font-weight: 600; color: #cbd5e1;">Nagpur (MH)</div>
      </div>
    </div>
  </section>

  <!-- Section 8: Intercity Route Grid -->
  <section style="padding: 60px 0; background: #0f172a; color: #ffffff;">
    <div class="container">
      <div style="text-align: center; margin-bottom: 40px;">
        <h2 style="font-size: 2rem; font-weight: 800;">Popular Intercity Car Shipping Routes from Bhatapara</h2>
        <p style="color: #94a3b8; margin-top: 10px;">Connecting Bhatapara to major Indian metropolitan cities</p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px;">
        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 20px; border-radius: 8px;">
          <h4 style="color: #f59e0b; font-size: 1.1rem; margin-bottom: 8px;">Bhatapara to Raipur / Bilaspur</h4>
          <p style="color: #94a3b8; font-size: 0.85rem;">Distance: ~80 km | Transit Time: Same Day</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 20px; border-radius: 8px;">
          <h4 style="color: #f59e0b; font-size: 1.1rem; margin-bottom: 8px;">Bhatapara to Nagpur</h4>
          <p style="color: #94a3b8; font-size: 0.85rem;">Distance: ~350 km | Transit Time: 1 Day</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 20px; border-radius: 8px;">
          <h4 style="color: #f59e0b; font-size: 1.1rem; margin-bottom: 8px;">Bhatapara to Kolkata</h4>
          <p style="color: #94a3b8; font-size: 0.85rem;">Distance: ~720 km | Transit Time: 2-3 Days</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 20px; border-radius: 8px;">
          <h4 style="color: #f59e0b; font-size: 1.1rem; margin-bottom: 8px;">Bhatapara to Delhi / NCR</h4>
          <p style="color: #94a3b8; font-size: 0.85rem;">Distance: ~1,150 km | Transit Time: 3-4 Days</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 20px; border-radius: 8px;">
          <h4 style="color: #f59e0b; font-size: 1.1rem; margin-bottom: 8px;">Bhatapara to Hyderabad</h4>
          <p style="color: #94a3b8; font-size: 0.85rem;">Distance: ~780 km | Transit Time: 2-3 Days</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 20px; border-radius: 8px;">
          <h4 style="color: #f59e0b; font-size: 1.1rem; margin-bottom: 8px;">Bhatapara to Pune / Mumbai</h4>
          <p style="color: #94a3b8; font-size: 0.85rem;">Distance: ~1,020 km | Transit Time: 3-4 Days</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 9: IBA/GST Compliance Section -->
  <section style="padding: 60px 0; background: #1e293b; color: #ffffff;">
    <div class="container">
      <div style="background: linear-gradient(135deg, rgba(245,158,11,0.1) 0%, rgba(30,41,59,0.8) 100%); border: 1px solid rgba(245,158,11,0.3); padding: 40px; border-radius: 16px;">
        <h2 style="font-size: 1.8rem; color: #f59e0b; margin-bottom: 15px;">IBA & GST Approved Vehicle Billing</h2>
        <p style="color: #cbd5e1; line-height: 1.8; margin-bottom: 20px;">
          Shree Ashirwad Packers and Movers provides official 18% GST tax invoices, consignment bills (LR copy), and pre-transit condition audit sheets recognized by leading government bodies, PSUs, and private companies for employee relocation claim reimbursement.
        </p>
        <div style="display: flex; gap: 20px; flex-wrap: wrap; color: #94a3b8; font-size: 0.9rem;">
          <span><i class="fas fa-check-circle" style="color: #10b981; margin-right: 6px;"></i> 18% GST Tax Bill</span>
          <span><i class="fas fa-check-circle" style="color: #10b981; margin-right: 6px;"></i> IBA Approved Bilty</span>
          <span><i class="fas fa-check-circle" style="color: #10b981; margin-right: 6px;"></i> Inspection Report</span>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 10: 10-Item FAQ with JSON-LD Schema -->
  <section style="padding: 70px 0; background: #0f172a; color: #ffffff;">
    <div class="container">
      <div style="text-align: center; margin-bottom: 50px;">
        <h2 style="font-size: 2.2rem; font-weight: 800;">Frequently Asked Questions — Car Transport in Bhatapara</h2>
        <p style="color: #94a3b8;">Everything you need to know about our vehicle relocation services</p>
      </div>

      <div style="max-width: 900px; margin: 0 auto; display: flex; flex-direction: column; gap: 15px;">
        
        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 20px; border-radius: 10px;">
          <h3 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 8px;">1. What are the typical costs for vehicle transport services in Bhatapara?</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6;">Regional car transport from Bhatapara to Raipur or Bilaspur ranges from ₹3,500 to ₹5,500. Interstate shipping to distant capitals costs between ₹9,500 and ₹18,000 based on car model and carrier type.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 20px; border-radius: 10px;">
          <h3 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 8px;">2. How does your car delivery service ensure vehicle safety?</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6;">Our car delivery service uses covered container trailers, 7-layer body protective wrapping, 4-wheel safety belt locks, and 100% declared value insurance.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 20px; border-radius: 10px;">
          <h3 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 8px;">3. Why choose Shree Ashirwad among automotive shipping companies?</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6;">We offer transparent pricing, zero hidden charges, GPS satellite tracking, and official IBA-approved GST documentation for hassle-free claim reimbursement.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 20px; border-radius: 10px;">
          <h3 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 8px;">4. Is doorstep pickup available throughout Bhatapara?</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6;">Yes, we provide direct doorstep pickup across Bhatapara town and Baloda Bazar district areas.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 20px; border-radius: 10px;">
          <h3 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 8px;">5. What documents are needed for booking car transport in Bhatapara?</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6;">You need a copy of the vehicle Registration Certificate (RC), valid insurance copy, owner ID proof, and the completed pre-loading condition sheet.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 20px; border-radius: 10px;">
          <h3 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 8px;">6. Can I track my vehicle status online during highway transport?</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6;">Yes, all our car carrier vehicles are fitted with GPS units that transmit live location updates directly to your WhatsApp.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 20px; border-radius: 10px;">
          <h3 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 8px;">7. Are personal goods allowed inside the vehicle?</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6;">Up to 25 kg of non-flammable personal luggage stored safely in the vehicle trunk is allowed. Cash and hazardous materials are strictly prohibited.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 20px; border-radius: 10px;">
          <h3 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 8px;">8. How does transit insurance protect my vehicle?</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6;">Our transit insurance covers declared vehicle value against accidental damage, fire, or theft during intercity highway movement.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 20px; border-radius: 10px;">
          <h3 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 8px;">9. What preparations should I make before car pickup?</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6;">Keep fuel level at around 1/4th, remove loose internal accessories, disable alarm systems, and wash the car for clear photo logging.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 20px; border-radius: 10px;">
          <h3 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 8px;">10. How early should I confirm booking with car transport companies?</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6;">Booking 2 to 3 days prior to your preferred pickup date ensures guaranteed carrier slot availability.</p>
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
        "description": "Professional car transportation service in Bhatapara offering top vehicle transport services, car delivery service, trusted automotive shipping companies & full insurance cover.",
        "address": {
          "@type": "PostalAddress",
          "addressLocality": "Bhatapara",
          "addressRegion": "Chhattisgarh",
          "addressCountry": "IN"
        }
      },
      {
        "@type": "FAQPage",
        "mainEntity": [
          {
            "@type": "Question",
            "name": "What are the typical costs for vehicle transport services in Bhatapara?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "Regional car transport from Bhatapara to Raipur or Bilaspur ranges from ₹3,500 to ₹5,500. Interstate shipping to distant capitals costs between ₹9,500 and ₹18,000."
            }
          },
          {
            "@type": "Question",
            "name": "How does your car delivery service ensure vehicle safety?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "Our car delivery service uses covered container trailers, 7-layer body protective wrapping, 4-wheel safety belt locks, and 100% declared value insurance."
            }
          },
          {
            "@type": "Question",
            "name": "Why choose Shree Ashirwad among automotive shipping companies?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "We offer transparent pricing, zero hidden charges, GPS satellite tracking, and official IBA-approved GST documentation."
            }
          },
          {
            "@type": "Question",
            "name": "Is doorstep pickup available throughout Bhatapara?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "Yes, we provide direct doorstep pickup across Bhatapara town and Baloda Bazar district areas."
            }
          },
          {
            "@type": "Question",
            "name": "What documents are needed for booking car transport in Bhatapara?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "You need a copy of the vehicle Registration Certificate (RC), valid insurance copy, owner ID proof, and the completed pre-loading condition sheet."
            }
          },
          {
            "@type": "Question",
            "name": "Can I track my vehicle status online during highway transport?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "Yes, all our car carrier vehicles are fitted with GPS units that transmit live location updates directly to your WhatsApp."
            }
          },
          {
            "@type": "Question",
            "name": "Are personal goods allowed inside the vehicle?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "Up to 25 kg of non-flammable personal luggage stored safely in the vehicle trunk is allowed. Cash and hazardous materials are strictly prohibited."
            }
          },
          {
            "@type": "Question",
            "name": "How does transit insurance protect my vehicle?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "Our transit insurance covers declared vehicle value against accidental damage, fire, or theft during intercity highway movement."
            }
          },
          {
            "@type": "Question",
            "name": "What preparations should I make before car pickup?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "Keep fuel level at 1/4th, remove loose internal accessories, disable alarm systems, and wash the car."
            }
          },
          {
            "@type": "Question",
            "name": "How early should I confirm booking with car transport companies?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "Booking 2 to 3 days prior to your preferred pickup date ensures guaranteed carrier slot availability."
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
      <h2 style="font-size: 2.2rem; font-weight: 800; margin-bottom: 15px;">Book Car Transportation in Bhatapara Today</h2>
      <p style="font-size: 1.1rem; color: #ffcdd2; max-width: 700px; margin: 0 auto 30px;">
        Get top vehicle transport services with guaranteed doorstep pickup, 7-layer body protection, and full transit insurance.
      </p>
      <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap;">
        <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Now" style="padding: 15px 35px; background: #ffffff; color: #d32f2f; border-radius: 50px; font-weight: 800; font-size: 1.1rem; text-decoration: none; box-shadow: 0 5px 20px rgba(0,0,0,0.3);">
          <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call <?php echo SITE_PHONE; ?>
        </a>
        <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20to%20book%20car%20transportation%20in%20Bhatapara." title="WhatsApp Chat" target="_blank" style="padding: 15px 35px; background: #25d366; color: #ffffff; border-radius: 50px; font-weight: 800; font-size: 1.1rem; text-decoration: none; box-shadow: 0 5px 20px rgba(0,0,0,0.3);">
          <i class="fab fa-whatsapp" style="margin-right: 8px;"></i> WhatsApp Quote
        </a>
      </div>
    </div>
  </section>

</main>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
