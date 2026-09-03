<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "Car Transportation in Barwala | Safe & Verified Vehicle Carrier Services";
$page_desc = "Professional car transportation in Barwala by Shree Ashirwad Packers and Movers. Verified vehicle carrier trucks, 7-layer protective body wrap, door-to-door delivery & full transit insurance. Call 8409531615.";
$page_keywords = "car transportation in barwala, vehicle carrier, car shipping cost, car delivery quotes, intercity car shifting, car transport service, car shifting services";
$canonical_url = "https://shreeashirwadpackersandmovers.com/pages/car-transportation-in-barwala.php";

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
        <span class="breadcrumb-item active">Car Transportation in Barwala</span>
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
            BARWALA VEHICLE RELOCATION EXPERTS
          </span>
          <h1 style="font-size: 2.7rem; font-weight: 800; line-height: 1.2; margin-bottom: 20px; color: #ffffff;">
            Safe & Affordable <span style="color: #f59e0b;">Car Transportation in Barwala</span>
          </h1>
          <p style="font-size: 1.12rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 25px;">
            Looking for a trusted <strong>vehicle carrier</strong> in Barwala, Haryana? Shree Ashirwad Packers and Movers provides secure covered car trailers and enclosed single-car containers equipped with GPS tracking, 7-layer body protection, and doorstep pickup. Get transparent <strong>car delivery quotes</strong> with zero hidden charges.
          </p>

          <div style="display: flex; gap: 15px; flex-wrap: wrap; margin-bottom: 30px;">
            <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Now" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
              <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call Now: <?php echo SITE_PHONE; ?>
            </a>
            <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20a%20car%20transport%20quote%20for%20Barwala." title="Chat on WhatsApp" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
              <i class="fab fa-whatsapp" style="margin-right: 8px;"></i> Chat on WhatsApp
            </a>
          </div>

          <div style="display: flex; gap: 20px; font-size: 0.9rem; color: #94a3b8;">
            <span><strong style="color: #f59e0b;">100% Insured</strong> Transit</span>
            <span><strong style="color: #f59e0b;">7-Layer</strong> Body Wrap</span>
            <span><strong style="color: #f59e0b;">Door-to-Door</strong> Pickup</span>
          </div>
        </div>

        <!-- Hero Lead Form Column -->
        <div class="hero-form-card" style="background: rgba(255, 255, 255, 0.05); backdrop-filter: blur(10px); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 16px; padding: 30px; box-shadow: 0 15px 35px rgba(0,0,0,0.4);">
          <h2 style="font-size: 1.4rem; color: #ffffff; margin-bottom: 8px; font-weight: 700; text-align: center;">Get Barwala Car Transport Estimate</h2>
          <p style="font-size: 0.85rem; color: #94a3b8; text-align: center; margin-bottom: 20px;">Receive transparent cost estimates directly on WhatsApp in 2 minutes</p>

          <form action="#" method="POST" onsubmit="sendHeroWhatsAppLead(event, this);">
            <div style="margin-bottom: 14px;">
              <input type="text" name="name" class="form-control" placeholder="Your Full Name" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="margin-bottom: 14px;">
              <input type="tel" name="phone" class="form-control" placeholder="10-Digit Mobile Number" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 10px; margin-bottom: 14px;">
              <input type="text" name="move_from" class="form-control" value="Barwala" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
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
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b;">15,000+</div>
          <div style="font-size: 0.9rem; color: #94a3b8;">Cars Safely Transported</div>
        </div>
        <div>
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b;">100%</div>
          <div style="font-size: 0.9rem; color: #94a3b8;">GPS Enabled Carriers</div>
        </div>
        <div>
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b;">Zero</div>
          <div style="font-size: 0.9rem; color: #94a3b8;">Damage Record</div>
        </div>
        <div>
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b;">24/7</div>
          <div style="font-size: 0.9rem; color: #94a3b8;">Live Customer Support</div>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 4: 6-Card Feature Grid -->
  <section style="padding: 70px 0; background: #0f172a; color: #ffffff;">
    <div class="container">
      <div style="text-align: center; max-width: 700px; margin: 0 auto 50px;">
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff;">Why Hire Our <span style="color: #f59e0b;">Intercity Car Shifting</span> Service in Barwala?</h2>
        <p style="color: #94a3b8; font-size: 1rem; line-height: 1.6;">Our structured vehicle relocation solutions offer unmatched safety, fair pricing, and nationwide operational reach.</p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 30px;">
        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 30px; border-radius: 12px;">
          <div style="width: 50px; height: 50px; background: rgba(245,158,11,0.1); border-radius: 10px; display: flex; align-items: center; justify-content: center; color: #f59e0b; font-size: 1.5rem; margin-bottom: 20px;">
            <i class="fas fa-truck"></i>
          </div>
          <h3 style="font-size: 1.2rem; font-weight: 700; color: #ffffff; margin-bottom: 10px;">Dedicated Vehicle Carrier</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6;">Double-decker covered trailers and single-car enclosed containers specifically designed for safe, scratch-free long-distance highway vehicle transport.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 30px; border-radius: 12px;">
          <div style="width: 50px; height: 50px; background: rgba(245,158,11,0.1); border-radius: 10px; display: flex; align-items: center; justify-content: center; color: #f59e0b; font-size: 1.5rem; margin-bottom: 20px;">
            <i class="fas fa-calculator"></i>
          </div>
          <h3 style="font-size: 1.2rem; font-weight: 700; color: #ffffff; margin-bottom: 10px;">Clear Car Shipping Cost</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6;">Transparent pricing structure with detailed breakups for freight, insurance, and toll taxes — zero unexpected surprises at delivery.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 30px; border-radius: 12px;">
          <div style="width: 50px; height: 50px; background: rgba(245,158,11,0.1); border-radius: 10px; display: flex; align-items: center; justify-content: center; color: #f59e0b; font-size: 1.5rem; margin-bottom: 20px;">
            <i class="fas fa-satellite-dish"></i>
          </div>
          <h3 style="font-size: 1.2rem; font-weight: 700; color: #ffffff; margin-bottom: 10px;">Live GPS Tracking</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6;">Real-time satellite GPS tracking lets you check your vehicle's exact geographic location and transit speed throughout its journey.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 30px; border-radius: 12px;">
          <div style="width: 50px; height: 50px; background: rgba(245,158,11,0.1); border-radius: 10px; display: flex; align-items: center; justify-content: center; color: #f59e0b; font-size: 1.5rem; margin-bottom: 20px;">
            <i class="fas fa-shield-virus"></i>
          </div>
          <h3 style="font-size: 1.2rem; font-weight: 700; color: #ffffff; margin-bottom: 10px;">7-Layer Protective Coating</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6;">Extensive bubble wrap, foam, and stretch film coverage applied to mirrors, bumpers, and handles before vehicle loading.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 30px; border-radius: 12px;">
          <div style="width: 50px; height: 50px; background: rgba(245,158,11,0.1); border-radius: 10px; display: flex; align-items: center; justify-content: center; color: #f59e0b; font-size: 1.5rem; margin-bottom: 20px;">
            <i class="fas fa-home"></i>
          </div>
          <h3 style="font-size: 1.2rem; font-weight: 700; color: #ffffff; margin-bottom: 10px;">Doorstep Pick & Delivery</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6;">Direct pickup from your doorstep in Barwala and doorstep delivery at your destination address anywhere in India.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 30px; border-radius: 12px;">
          <div style="width: 50px; height: 50px; background: rgba(245,158,11,0.1); border-radius: 10px; display: flex; align-items: center; justify-content: center; color: #f59e0b; font-size: 1.5rem; margin-bottom: 20px;">
            <i class="fas fa-file-contract"></i>
          </div>
          <h3 style="font-size: 1.2rem; font-weight: 700; color: #ffffff; margin-bottom: 10px;">IBA & Insurance Support</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6;">GST-compliant invoices, vehicle condition inspection certificates, and complete transit insurance policies for hassle-free claim processing.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 5: Automobile Carrier Infrastructure Options -->
  <section style="padding: 60px 0; background: #1e293b; color: #ffffff;">
    <div class="container">
      <div style="text-align: center; margin-bottom: 40px;">
        <h2 style="font-size: 2rem; font-weight: 800;">Car Transport Truck Infrastructure in Barwala</h2>
        <p style="color: #94a3b8; margin-top: 10px;">Select the right transport mode suited to your car model and budget</p>
      </div>

      <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 30px;">
        <div style="background: rgba(0,0,0,0.2); padding: 30px; border-radius: 12px; border-left: 4px solid #f59e0b;">
          <h3 style="font-size: 1.3rem; color: #f59e0b; margin-bottom: 15px;">Single-Car Enclosed Container Truck</h3>
          <p style="color: #cbd5e1; line-height: 1.7; margin-bottom: 15px;">Ideal for luxury sedans, premium SUVs, sports cars, and vintage models requiring maximum privacy, zero dust exposure, and individualized care.</p>
          <ul style="color: #94a3b8; line-height: 1.8; padding-left: 20px;">
            <li>Dedicated closed container bed</li>
            <li>Hydraulic ramp loading & unloading</li>
            <li>100% protection against weather & flying gravel</li>
          </ul>
        </div>

        <div style="background: rgba(0,0,0,0.2); padding: 30px; border-radius: 12px; border-left: 4px solid #3b82f6;">
          <h3 style="font-size: 1.3rem; color: #3b82f6; margin-bottom: 15px;">Multi-Car Covered Deck Trailer</h3>
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
        <h2 style="font-size: 2.2rem; font-weight: 800;">7-Step Vehicle Safety Inspection Process</h2>
        <p style="color: #94a3b8;">Our comprehensive checklist guarantees damage-free vehicle delivery</p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 20px;">
        <div style="background: rgba(255,255,255,0.03); padding: 25px; border-radius: 10px; text-align: center;">
          <div style="font-size: 1.5rem; font-weight: 800; color: #f59e0b; margin-bottom: 10px;">01</div>
          <h4 style="font-size: 1.1rem; margin-bottom: 10px;">Initial Condition Audit</h4>
          <p style="font-size: 0.85rem; color: #94a3b8; line-height: 1.6;">Full digital photography and document logging of existing exterior condition and odometer reading.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); padding: 25px; border-radius: 10px; text-align: center;">
          <div style="font-size: 1.5rem; font-weight: 800; color: #f59e0b; margin-bottom: 10px;">02</div>
          <h4 style="font-size: 1.1rem; margin-bottom: 10px;">Protective Wrapping</h4>
          <p style="font-size: 0.85rem; color: #94a3b8; line-height: 1.6;">High-density foam and stretch film applied on bumpers, side mirrors, and door edges.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); padding: 25px; border-radius: 10px; text-align: center;">
          <div style="font-size: 1.5rem; font-weight: 800; color: #f59e0b; margin-bottom: 10px;">03</div>
          <h4 style="font-size: 1.1rem; margin-bottom: 10px;">Hydraulic Ramp Drive-On</h4>
          <p style="font-size: 0.85rem; color: #94a3b8; line-height: 1.6;">Low-angle hydraulic loading ensuring zero undercarriage scraping or bumper damage.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); padding: 25px; border-radius: 10px; text-align: center;">
          <div style="font-size: 1.5rem; font-weight: 800; color: #f59e0b; margin-bottom: 10px;">04</div>
          <h4 style="font-size: 1.1rem; margin-bottom: 10px;">4-Point Belt Harnessing</h4>
          <p style="font-size: 0.85rem; color: #94a3b8; line-height: 1.6;">Securing all four wheels independently using heavy-duty nylon belt straps attached to the deck floor.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 7: Regional Network Grid (Local Hubs) -->
  <section style="padding: 60px 0; background: #1e293b; color: #ffffff;">
    <div class="container">
      <div style="text-align: center; margin-bottom: 40px;">
        <h2 style="font-size: 2rem; font-weight: 800;">Barwala & Haryana Local Network Coverage</h2>
        <p style="color: #94a3b8; margin-top: 10px;">Doorstep vehicle pickup and transport coverage across Barwala and neighboring Haryana hubs</p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 15px; text-align: center;">
        <div style="background: rgba(255,255,255,0.05); padding: 15px; border-radius: 8px; font-weight: 600; color: #cbd5e1;">Barwala Town Main Market</div>
        <div style="background: rgba(255,255,255,0.05); padding: 15px; border-radius: 8px; font-weight: 600; color: #cbd5e1;">Panchkula-Barwala Highway</div>
        <div style="background: rgba(255,255,255,0.05); padding: 15px; border-radius: 8px; font-weight: 600; color: #cbd5e1;">Hisar Road Area</div>
        <div style="background: rgba(255,255,255,0.05); padding: 15px; border-radius: 8px; font-weight: 600; color: #cbd5e1;">Hisar City</div>
        <div style="background: rgba(255,255,255,0.05); padding: 15px; border-radius: 8px; font-weight: 600; color: #cbd5e1;">Hansi</div>
        <div style="background: rgba(255,255,255,0.05); padding: 15px; border-radius: 8px; font-weight: 600; color: #cbd5e1;">Jind</div>
        <div style="background: rgba(255,255,255,0.05); padding: 15px; border-radius: 8px; font-weight: 600; color: #cbd5e1;">Fatehabad</div>
        <div style="background: rgba(255,255,255,0.05); padding: 15px; border-radius: 8px; font-weight: 600; color: #cbd5e1;">Sirsa</div>
        <div style="background: rgba(255,255,255,0.05); padding: 15px; border-radius: 8px; font-weight: 600; color: #cbd5e1;">Ambala</div>
        <div style="background: rgba(255,255,255,0.05); padding: 15px; border-radius: 8px; font-weight: 600; color: #cbd5e1;">Panchkula</div>
        <div style="background: rgba(255,255,255,0.05); padding: 15px; border-radius: 8px; font-weight: 600; color: #cbd5e1;">Rohtak</div>
        <div style="background: rgba(255,255,255,0.05); padding: 15px; border-radius: 8px; font-weight: 600; color: #cbd5e1;">Bhiwani</div>
      </div>
    </div>
  </section>

  <!-- Section 8: Intercity Route Grid -->
  <section style="padding: 60px 0; background: #0f172a; color: #ffffff;">
    <div class="container">
      <div style="text-align: center; margin-bottom: 40px;">
        <h2 style="font-size: 2rem; font-weight: 800;">Popular Intercity Car Routes from Barwala</h2>
        <p style="color: #94a3b8; margin-top: 10px;">Direct vehicle carrier transit routes connecting Barwala across India</p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px;">
        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 20px; border-radius: 8px;">
          <h4 style="color: #f59e0b; font-size: 1.1rem; margin-bottom: 8px;">Barwala to Delhi / Gurgaon</h4>
          <p style="color: #94a3b8; font-size: 0.85rem;">Distance: ~180 km | Transit Time: 1 Day</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 20px; border-radius: 8px;">
          <h4 style="color: #f59e0b; font-size: 1.1rem; margin-bottom: 8px;">Barwala to Mumbai / Pune</h4>
          <p style="color: #94a3b8; font-size: 0.85rem;">Distance: ~1,450 km | Transit Time: 3-4 Days</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 20px; border-radius: 8px;">
          <h4 style="color: #f59e0b; font-size: 1.1rem; margin-bottom: 8px;">Barwala to Bangalore</h4>
          <p style="color: #94a3b8; font-size: 0.85rem;">Distance: ~2,150 km | Transit Time: 5-6 Days</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 20px; border-radius: 8px;">
          <h4 style="color: #f59e0b; font-size: 1.1rem; margin-bottom: 8px;">Barwala to Hyderabad</h4>
          <p style="color: #94a3b8; font-size: 0.85rem;">Distance: ~1,680 km | Transit Time: 4-5 Days</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 20px; border-radius: 8px;">
          <h4 style="color: #f59e0b; font-size: 1.1rem; margin-bottom: 8px;">Barwala to Kolkata</h4>
          <p style="color: #94a3b8; font-size: 0.85rem;">Distance: ~1,550 km | Transit Time: 4-5 Days</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 20px; border-radius: 8px;">
          <h4 style="color: #f59e0b; font-size: 1.1rem; margin-bottom: 8px;">Barwala to Ahmedabad</h4>
          <p style="color: #94a3b8; font-size: 0.85rem;">Distance: ~980 km | Transit Time: 2-3 Days</p>
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
          Shree Ashirwad Packers and Movers provides official 18% GST invoices, pre-transit vehicle inspection reports, and IBA-standard consignment notes (Bilty) accepted by central government departments, defense organizations, and private corporations for employee relocation claims.
        </p>
        <div style="display: flex; gap: 20px; flex-wrap: wrap; color: #94a3b8; font-size: 0.9rem;">
          <span><i class="fas fa-check-circle" style="color: #10b981; margin-right: 6px;"></i> 18% GST Registered Bill</span>
          <span><i class="fas fa-check-circle" style="color: #10b981; margin-right: 6px;"></i> Vehicle Inspection Certificate</span>
          <span><i class="fas fa-check-circle" style="color: #10b981; margin-right: 6px;"></i> IBA Approved Bilty Format</span>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 10: 10-Item FAQ with JSON-LD Schema -->
  <section style="padding: 70px 0; background: #0f172a; color: #ffffff;">
    <div class="container">
      <div style="text-align: center; margin-bottom: 50px;">
        <h2 style="font-size: 2.2rem; font-weight: 800;">Frequently Asked Questions — Car Transport in Barwala</h2>
        <p style="color: #94a3b8;">Everything you need to know about our vehicle relocation services</p>
      </div>

      <div style="max-width: 900px; margin: 0 auto; display: flex; flex-direction: column; gap: 15px;">
        
        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 20px; border-radius: 10px;">
          <h3 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 8px;">1. What is the average car shipping cost from Barwala?</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6;">The car shipping cost depends on the destination city, carrier type, and car model. Local or nearby state transport (e.g., to Delhi) starts around ₹4,000 - ₹7,000, while long-distance routes range from ₹9,000 to ₹17,500.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 20px; border-radius: 10px;">
          <h3 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 8px;">2. How can I get accurate car delivery quotes for my move?</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6;">You can request instant car delivery quotes by calling 8409531615 or submitting your pickup and destination details through our WhatsApp quote form on this page.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 20px; border-radius: 10px;">
          <h3 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 8px;">3. Why should I use a specialized vehicle carrier rather than driving?</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6;">Using a specialized vehicle carrier eliminates highway wear-and-tear, unnecessary mileage accumulation, driver fatigue, and potential road breakdown risks during intercity shifting.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 20px; border-radius: 10px;">
          <h3 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 8px;">4. Is doorstep vehicle pickup available in Barwala?</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6;">Yes, we offer direct doorstep pickup across Barwala, Hisar Road, and nearby areas using specialized hydraulic car loading ramps.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 20px; border-radius: 10px;">
          <h3 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 8px;">5. What documents are required for intercity car shifting from Barwala?</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6;">Mandatory documents include a photocopy of the vehicle Registration Certificate (RC), valid insurance document, PUC certificate, and personal ID proof (Aadhaar/PAN).</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 20px; border-radius: 10px;">
          <h3 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 8px;">6. Can I track my car while it is in transit?</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6;">Yes, all our car carrier trailers are equipped with real-time GPS tracking devices so you can track your car's position live on your smartphone.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 20px; border-radius: 10px;">
          <h3 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 8px;">7. How is my car protected against scratches during loading?</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6;">We apply 7-layer protective wrapping on vulnerable body areas (bumpers, mirrors, handles) and secure the car wheels to the trailer deck using nylon wheel tie-down belts.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 20px; border-radius: 10px;">
          <h3 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 8px;">8. How does transit insurance protect my vehicle investment?</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6;">Transit insurance covers unforeseen accidental damages during transport based on declared vehicle value, ensuring complete financial protection.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 20px; border-radius: 10px;">
          <h3 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 8px;">9. What is the difference between open and enclosed car carriers?</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6;">Open carriers transport multiple vehicles on covered double-decker trailers, while enclosed containers offer complete 360-degree weather and privacy protection for single vehicles.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 20px; border-radius: 10px;">
          <h3 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 8px;">10. How early should I schedule my car transport from Barwala?</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6;">We recommend booking 2 to 3 days in advance to reserve carrier trailer bed space and arrange convenient doorstep pickup timing.</p>
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
        "description": "Professional car transportation service in Barwala providing vehicle carrier transport, door-to-door pickup & full transit insurance.",
        "address": {
          "@type": "PostalAddress",
          "addressLocality": "Barwala",
          "addressRegion": "Haryana",
          "addressCountry": "IN"
        }
      },
      {
        "@type": "FAQPage",
        "mainEntity": [
          {
            "@type": "Question",
            "name": "What is the average car shipping cost from Barwala?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "The car shipping cost depends on the destination city, carrier type, and car model. Nearby state transport starts around ₹4,000 - ₹7,000, while long-distance routes range from ₹9,000 to ₹17,500."
            }
          },
          {
            "@type": "Question",
            "name": "How can I get accurate car delivery quotes for my move?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "You can request instant car delivery quotes by calling 8409531615 or submitting details through our WhatsApp quote form."
            }
          },
          {
            "@type": "Question",
            "name": "Why should I use a specialized vehicle carrier rather than driving?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "Using a specialized vehicle carrier eliminates highway wear-and-tear, unnecessary mileage accumulation, and driver fatigue."
            }
          },
          {
            "@type": "Question",
            "name": "Is doorstep vehicle pickup available in Barwala?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "Yes, we offer direct doorstep pickup across Barwala, Hisar Road, and nearby areas using specialized hydraulic car loading ramps."
            }
          },
          {
            "@type": "Question",
            "name": "What documents are required for intercity car shifting from Barwala?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "Mandatory documents include a photocopy of the vehicle Registration Certificate (RC), valid insurance document, PUC certificate, and personal ID proof."
            }
          },
          {
            "@type": "Question",
            "name": "Can I track my car while it is in transit?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "Yes, all our car carrier trailers are equipped with real-time GPS tracking devices so you can track your car's position live."
            }
          },
          {
            "@type": "Question",
            "name": "How is my car protected against scratches during loading?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "We apply 7-layer protective wrapping on vulnerable body areas and secure the car wheels to the trailer deck using nylon wheel tie-down belts."
            }
          },
          {
            "@type": "Question",
            "name": "How does transit insurance protect my vehicle investment?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "Transit insurance covers unforeseen accidental damages during transport based on declared vehicle value."
            }
          },
          {
            "@type": "Question",
            "name": "What is the difference between open and enclosed car carriers?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "Open carriers transport multiple vehicles on covered double-decker trailers, while enclosed containers offer complete 360-degree weather protection."
            }
          },
          {
            "@type": "Question",
            "name": "How early should I schedule my car transport from Barwala?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "We recommend booking 2 to 3 days in advance to reserve carrier trailer bed space and arrange convenient doorstep pickup timing."
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
      <h2 style="font-size: 2.2rem; font-weight: 800; margin-bottom: 15px;">Book Safe Car Transportation in Barwala Today</h2>
      <p style="font-size: 1.1rem; color: #ffcdd2; max-width: 700px; margin: 0 auto 30px;">
        Enjoy guaranteed doorstep pickup, 7-layer protective body wrap, live GPS tracking, and complete transit insurance for your vehicle.
      </p>
      <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap;">
        <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Now" style="padding: 15px 35px; background: #ffffff; color: #d32f2f; border-radius: 50px; font-weight: 800; font-size: 1.1rem; text-decoration: none; box-shadow: 0 5px 20px rgba(0,0,0,0.3);">
          <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call <?php echo SITE_PHONE; ?>
        </a>
        <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20to%20book%20car%20transportation%20in%20Barwala." title="WhatsApp Chat" target="_blank" style="padding: 15px 35px; background: #25d366; color: #ffffff; border-radius: 50px; font-weight: 800; font-size: 1.1rem; text-decoration: none; box-shadow: 0 5px 20px rgba(0,0,0,0.3);">
          <i class="fab fa-whatsapp" style="margin-right: 8px;"></i> WhatsApp Quote
        </a>
      </div>
    </div>
  </section>

</main>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
