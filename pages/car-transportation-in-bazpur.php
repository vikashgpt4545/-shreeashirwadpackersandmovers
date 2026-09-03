<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "Car Transportation in Bazpur | Reliable Automobile Transport Services";
$page_desc = "Top rated car transportation in Bazpur by Shree Ashirwad Packers and Movers. Verified automobile transport carriers, 7-layer body wrapping, doorstep pickup & full transit insurance. Call 8409531615.";
$page_keywords = "car transportation in bazpur, automobile transport, car shifting services, best vehicle transport companies, car transport charges, vehicle carrier, car transport service";
$canonical_url = "https://shreeashirwadpackersandmovers.com/pages/car-transportation-in-bazpur.php";

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
        <span class="breadcrumb-item active">Car Transportation in Bazpur</span>
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
            BAZPUR AUTOMOBILE TRANSPORT SPECIALISTS
          </span>
          <h1 style="font-size: 2.7rem; font-weight: 800; line-height: 1.2; margin-bottom: 20px; color: #ffffff;">
            Reliable <span style="color: #f59e0b;">Car Transportation in Bazpur</span>
          </h1>
          <p style="font-size: 1.12rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 25px;">
            Looking for trustworthy <strong>automobile transport</strong> in Bazpur, Uttarakhand? Shree Ashirwad Packers and Movers ranks among the <strong>best vehicle transport companies</strong>, offering specialized covered car containers, 7-layer scratch protection, GPS tracking, and transparent <strong>car transport charges</strong> nationwide.
          </p>

          <div style="display: flex; gap: 15px; flex-wrap: wrap; margin-bottom: 30px;">
            <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Now" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
              <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call Now: <?php echo SITE_PHONE; ?>
            </a>
            <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20a%20car%20transport%20quote%20for%20Bazpur." title="Chat on WhatsApp" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
              <i class="fab fa-whatsapp" style="margin-right: 8px;"></i> Chat on WhatsApp
            </a>
          </div>

          <div style="display: flex; gap: 20px; font-size: 0.9rem; color: #94a3b8;">
            <span><strong style="color: #f59e0b;">100% Insured</strong> Shifting</span>
            <span><strong style="color: #f59e0b;">7-Layer</strong> Body Protection</span>
            <span><strong style="color: #f59e0b;">Doorstep</strong> Pickup & Delivery</span>
          </div>
        </div>

        <!-- Hero Lead Form Column -->
        <div class="hero-form-card" style="background: rgba(255, 255, 255, 0.05); backdrop-filter: blur(10px); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 16px; padding: 30px; box-shadow: 0 15px 35px rgba(0,0,0,0.4);">
          <h2 style="font-size: 1.4rem; color: #ffffff; margin-bottom: 8px; font-weight: 700; text-align: center;">Get Bazpur Car Shifting Quote</h2>
          <p style="font-size: 0.85rem; color: #94a3b8; text-align: center; margin-bottom: 20px;">Get a transparent cost estimation on WhatsApp in 2 minutes</p>

          <form action="#" method="POST" onsubmit="sendHeroWhatsAppLead(event, this);">
            <div style="margin-bottom: 14px;">
              <input type="text" name="name" class="form-control" placeholder="Your Full Name" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="margin-bottom: 14px;">
              <input type="tel" name="phone" class="form-control" placeholder="10-Digit Mobile Number" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 10px; margin-bottom: 14px;">
              <input type="text" name="move_from" class="form-control" value="Bazpur" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
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
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b;">11,800+</div>
          <div style="font-size: 0.9rem; color: #94a3b8;">Cars Relocated Safety</div>
        </div>
        <div>
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b;">100%</div>
          <div style="font-size: 0.9rem; color: #94a3b8;">GPS Tracked Carriers</div>
        </div>
        <div>
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b;">Zero</div>
          <div style="font-size: 0.9rem; color: #94a3b8;">Scratch Guarantee</div>
        </div>
        <div>
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b;">24/7</div>
          <div style="font-size: 0.9rem; color: #94a3b8;">Dedicated Support</div>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 4: 6-Card Feature Grid -->
  <section style="padding: 70px 0; background: #0f172a; color: #ffffff;">
    <div class="container">
      <div style="text-align: center; max-width: 700px; margin: 0 auto 50px;">
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff;">Why Choose Our <span style="color: #f59e0b;">Car Shifting Services</span> in Bazpur?</h2>
        <p style="color: #94a3b8; font-size: 1rem; line-height: 1.6;">Our structured vehicle relocation methodology guarantees scratch-free transit, full legal compliance, and total peace of mind.</p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 30px;">
        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 30px; border-radius: 12px;">
          <div style="width: 50px; height: 50px; background: rgba(245,158,11,0.1); border-radius: 10px; display: flex; align-items: center; justify-content: center; color: #f59e0b; font-size: 1.5rem; margin-bottom: 20px;">
            <i class="fas fa-truck-moving"></i>
          </div>
          <h3 style="font-size: 1.2rem; font-weight: 700; color: #ffffff; margin-bottom: 10px;">Enclosed Automobile Carrier</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6;">Specialized covered car carrier trucks and single-car containerized vehicles protecting your car from dust, rain, and highway debris.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 30px; border-radius: 12px;">
          <div style="width: 50px; height: 50px; background: rgba(245,158,11,0.1); border-radius: 10px; display: flex; align-items: center; justify-content: center; color: #f59e0b; font-size: 1.5rem; margin-bottom: 20px;">
            <i class="fas fa-shield-alt"></i>
          </div>
          <h3 style="font-size: 1.2rem; font-weight: 700; color: #ffffff; margin-bottom: 10px;">Full Transit Insurance</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6;">Comprehensive transit insurance policies covering market value damages, ensuring complete protection for your vehicle investment.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 30px; border-radius: 12px;">
          <div style="width: 50px; height: 50px; background: rgba(245,158,11,0.1); border-radius: 10px; display: flex; align-items: center; justify-content: center; color: #f59e0b; font-size: 1.5rem; margin-bottom: 20px;">
            <i class="fas fa-crosshairs"></i>
          </div>
          <h3 style="font-size: 1.2rem; font-weight: 700; color: #ffffff; margin-bottom: 10px;">Live GPS Monitoring</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6;">Real-time satellite GPS tracking link updates sent directly to your phone from pickup in Bazpur to destination delivery.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 30px; border-radius: 12px;">
          <div style="width: 50px; height: 50px; background: rgba(245,158,11,0.1); border-radius: 10px; display: flex; align-items: center; justify-content: center; color: #f59e0b; font-size: 1.5rem; margin-bottom: 20px;">
            <i class="fas fa-layer-group"></i>
          </div>
          <h3 style="font-size: 1.2rem; font-weight: 700; color: #ffffff; margin-bottom: 10px;">7-Layer Body Guard Wrap</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6;">Heavy-duty bubble wrap, foam, and stretch film covering mirrors, bumpers, and handles to prevent fine scratches.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 30px; border-radius: 12px;">
          <div style="width: 50px; height: 50px; background: rgba(245,158,11,0.1); border-radius: 10px; display: flex; align-items: center; justify-content: center; color: #f59e0b; font-size: 1.5rem; margin-bottom: 20px;">
            <i class="fas fa-map-marked-alt"></i>
          </div>
          <h3 style="font-size: 1.2rem; font-weight: 700; color: #ffffff; margin-bottom: 10px;">Doorstep Pick & Drop</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6;">Hassle-free vehicle pickup right from your home or office in Bazpur and doorstep delivery at your destination address.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 30px; border-radius: 12px;">
          <div style="width: 50px; height: 50px; background: rgba(245,158,11,0.1); border-radius: 10px; display: flex; align-items: center; justify-content: center; color: #f59e0b; font-size: 1.5rem; margin-bottom: 20px;">
            <i class="fas fa-file-invoice-dollar"></i>
          </div>
          <h3 style="font-size: 1.2rem; font-weight: 700; color: #ffffff; margin-bottom: 10px;">IBA & GST Bills</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6;">Official 18% GST invoices, pre-transit vehicle condition reports, and IBA-compliant consignment notes for employee claim reimbursement.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 5: Automobile Carrier Infrastructure Options -->
  <section style="padding: 60px 0; background: #1e293b; color: #ffffff;">
    <div class="container">
      <div style="text-align: center; margin-bottom: 40px;">
        <h2 style="font-size: 2rem; font-weight: 800;">Automobile Transport Carrier Infrastructure</h2>
        <p style="color: #94a3b8; margin-top: 10px;">Select the ideal carrier option suited to your car model and destination</p>
      </div>

      <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 30px;">
        <div style="background: rgba(0,0,0,0.2); padding: 30px; border-radius: 12px; border-left: 4px solid #f59e0b;">
          <h3 style="font-size: 1.3rem; color: #f59e0b; margin-bottom: 15px;">Option A: Closed Single-Car Container Truck</h3>
          <p style="color: #cbd5e1; line-height: 1.7; margin-bottom: 15px;">Recommended for luxury sedans, sports cars, new showroom vehicles, and premium SUVs. Full enclosure protects against weather, dust, and flying road stones with dedicated tie-down wheel chocks.</p>
          <ul style="color: #94a3b8; line-height: 1.8; padding-left: 20px;">
            <li>Exclusive single-vehicle container bed</li>
            <li>Hydraulic ramp loading & unloading</li>
            <li>100% protection against weather & road debris</li>
          </ul>
        </div>

        <div style="background: rgba(0,0,0,0.2); padding: 30px; border-radius: 12px; border-left: 4px solid #3b82f6;">
          <h3 style="font-size: 1.3rem; color: #3b82f6; margin-bottom: 15px;">Option B: Multi-Car Covered Deck Trailer</h3>
          <p style="color: #cbd5e1; line-height: 1.7; margin-bottom: 15px;">The most economical choice for standard hatchbacks and sedans. Heavy-duty multi-car double-decker carriers equipped with heavy safety tarpaulins and individual wheel belt locks.</p>
          <ul style="color: #94a3b8; line-height: 1.8; padding-left: 20px;">
            <li>Budget-friendly intercity shared transit</li>
            <li>Four-point wheel harness locking system</li>
            <li>Frequent fixed departure schedules on major national highways</li>
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
        <p style="color: #94a3b8;">Our rigorous process ensures your car arrives in identical pre-transit condition</p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 20px;">
        <div style="background: rgba(255,255,255,0.03); padding: 25px; border-radius: 10px; text-align: center;">
          <div style="font-size: 1.5rem; font-weight: 800; color: #f59e0b; margin-bottom: 10px;">01</div>
          <h4 style="font-size: 1.1rem; margin-bottom: 10px;">Pre-Pickup Inspection</h4>
          <p style="font-size: 0.85rem; color: #94a3b8; line-height: 1.6;">Detailed physical inspection and digital photo logging of existing body condition, odometer reading, and fuel levels.</p>
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
        <h2 style="font-size: 2rem; font-weight: 800;">Bazpur & Udham Singh Nagar Network Coverage</h2>
        <p style="color: #94a3b8; margin-top: 10px;">Seamless doorstep pickup and transport coverage across Bazpur and nearby Kumaon hubs</p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 15px; text-align: center;">
        <div style="background: rgba(255,255,255,0.05); padding: 15px; border-radius: 8px; font-weight: 600; color: #cbd5e1;">Bazpur Town Market</div>
        <div style="background: rgba(255,255,255,0.05); padding: 15px; border-radius: 8px; font-weight: 600; color: #cbd5e1;">Nainital Road Area</div>
        <div style="background: rgba(255,255,255,0.05); padding: 15px; border-radius: 8px; font-weight: 600; color: #cbd5e1;">Kashipur Road</div>
        <div style="background: rgba(255,255,255,0.05); padding: 15px; border-radius: 8px; font-weight: 600; color: #cbd5e1;">Kashipur</div>
        <div style="background: rgba(255,255,255,0.05); padding: 15px; border-radius: 8px; font-weight: 600; color: #cbd5e1;">Rudrapur</div>
        <div style="background: rgba(255,255,255,0.05); padding: 15px; border-radius: 8px; font-weight: 600; color: #cbd5e1;">Haldwani</div>
        <div style="background: rgba(255,255,255,0.05); padding: 15px; border-radius: 8px; font-weight: 600; color: #cbd5e1;">Pantnagar</div>
        <div style="background: rgba(255,255,255,0.05); padding: 15px; border-radius: 8px; font-weight: 600; color: #cbd5e1;">Kichha</div>
        <div style="background: rgba(255,255,255,0.05); padding: 15px; border-radius: 8px; font-weight: 600; color: #cbd5e1;">Gadarpur</div>
        <div style="background: rgba(255,255,255,0.05); padding: 15px; border-radius: 8px; font-weight: 600; color: #cbd5e1;">Jaspur</div>
        <div style="background: rgba(255,255,255,0.05); padding: 15px; border-radius: 8px; font-weight: 600; color: #cbd5e1;">Khatima</div>
        <div style="background: rgba(255,255,255,0.05); padding: 15px; border-radius: 8px; font-weight: 600; color: #cbd5e1;">Ramnagar</div>
      </div>
    </div>
  </section>

  <!-- Section 8: Intercity Route Grid -->
  <section style="padding: 60px 0; background: #0f172a; color: #ffffff;">
    <div class="container">
      <div style="text-align: center; margin-bottom: 40px;">
        <h2 style="font-size: 2rem; font-weight: 800;">Popular Intercity Routes from Bazpur</h2>
        <p style="color: #94a3b8; margin-top: 10px;">Direct vehicle carrier routes connecting Bazpur to major destinations nationwide</p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px;">
        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 20px; border-radius: 8px;">
          <h4 style="color: #f59e0b; font-size: 1.1rem; margin-bottom: 8px;">Bazpur to Delhi / NCR</h4>
          <p style="color: #94a3b8; font-size: 0.85rem;">Distance: ~230 km | Transit Time: 1-2 Days</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 20px; border-radius: 8px;">
          <h4 style="color: #f59e0b; font-size: 1.1rem; margin-bottom: 8px;">Bazpur to Mumbai / Pune</h4>
          <p style="color: #94a3b8; font-size: 0.85rem;">Distance: ~1,580 km | Transit Time: 4-5 Days</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 20px; border-radius: 8px;">
          <h4 style="color: #f59e0b; font-size: 1.1rem; margin-bottom: 8px;">Bazpur to Bangalore</h4>
          <p style="color: #94a3b8; font-size: 0.85rem;">Distance: ~2,250 km | Transit Time: 5-6 Days</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 20px; border-radius: 8px;">
          <h4 style="color: #f59e0b; font-size: 1.1rem; margin-bottom: 8px;">Bazpur to Lucknow / Kanpur</h4>
          <p style="color: #94a3b8; font-size: 0.85rem;">Distance: ~380 km | Transit Time: 1-2 Days</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 20px; border-radius: 8px;">
          <h4 style="color: #f59e0b; font-size: 1.1rem; margin-bottom: 8px;">Bazpur to Ahmedabad</h4>
          <p style="color: #94a3b8; font-size: 0.85rem;">Distance: ~1,120 km | Transit Time: 3-4 Days</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 20px; border-radius: 8px;">
          <h4 style="color: #f59e0b; font-size: 1.1rem; margin-bottom: 8px;">Bazpur to Dehradun</h4>
          <p style="color: #94a3b8; font-size: 0.85rem;">Distance: ~190 km | Transit Time: 1 Day</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 9: IBA/GST Compliance Section -->
  <section style="padding: 60px 0; background: #1e293b; color: #ffffff;">
    <div class="container">
      <div style="background: linear-gradient(135deg, rgba(245,158,11,0.1) 0%, rgba(30,41,59,0.8) 100%); border: 1px solid rgba(245,158,11,0.3); padding: 40px; border-radius: 16px;">
        <h2 style="font-size: 1.8rem; color: #f59e0b; margin-bottom: 15px;">IBA & GST Claim Documentation Support</h2>
        <p style="color: #cbd5e1; line-height: 1.8; margin-bottom: 20px;">
          Recognized among the <strong>best vehicle transport companies</strong> operating in Uttarakhand, Shree Ashirwad Packers and Movers provides official 18% GST bills, vehicle condition inspection certificates, and IBA-approved consignment bills for 100% employee relocation reimbursement.
        </p>
        <div style="display: flex; gap: 20px; flex-wrap: wrap; color: #94a3b8; font-size: 0.9rem;">
          <span><i class="fas fa-check-circle" style="color: #10b981; margin-right: 6px;"></i> 18% GST Registered Invoice</span>
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
        <h2 style="font-size: 2.2rem; font-weight: 800;">Frequently Asked Questions — Car Transport in Bazpur</h2>
        <p style="color: #94a3b8;">Everything you need to know about our vehicle relocation services</p>
      </div>

      <div style="max-width: 900px; margin: 0 auto; display: flex; flex-direction: column; gap: 15px;">
        
        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 20px; border-radius: 10px;">
          <h3 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 8px;">1. What are the typical car transport charges from Bazpur?</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6;">Car transport charges depend on transit distance, car model, and carrier type. Regional relocations (e.g. to Delhi or Dehradun) start around ₹4,500 - ₹7,500, while long-distance transport (e.g. to Mumbai or Bangalore) ranges from ₹10,000 to ₹18,000.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 20px; border-radius: 10px;">
          <h3 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 8px;">2. How does professional automobile transport protect my vehicle?</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6;">Our automobile transport carriers use hydraulic ramps for zero-impact loading, 4-point wheel tie-down safety belts, and covered decks to prevent road dust, stone chips, and scratch damage during long highway journeys.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 20px; border-radius: 10px;">
          <h3 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 8px;">3. Is doorstep pickup available in Bazpur?</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6;">Yes, we offer complete doorstep pickup across Bazpur town, Kashipur Road, Nainital Road, and nearby Udham Singh Nagar areas.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 20px; border-radius: 10px;">
          <h3 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 8px;">4. Which documents are required for car shifting from Bazpur?</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6;">You must provide a copy of the car Registration Certificate (RC), active motor insurance, PUC certificate, and personal ID proof (Aadhaar/PAN).</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 20px; border-radius: 10px;">
          <h3 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 8px;">5. How can I track my vehicle during transit?</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6;">All our car carriers are fitted with real-time GPS tracking units. You get live location links and regular SMS/WhatsApp updates throughout the journey.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 20px; border-radius: 10px;">
          <h3 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 8px;">6. Can I leave personal items inside the car during transport?</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6;">Up to 20-30 kg of non-flammable personal luggage packed securely in the trunk is permitted. Valuables, cash, and liquids are strictly prohibited.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 20px; border-radius: 10px;">
          <h3 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 8px;">7. What preparations are needed before handing over the car?</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6;">Keep fuel level at around 1/4th, remove loose items, disable security alarms, check tire pressure, and wash the car exterior for accurate pre-transit inspection photography.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 20px; border-radius: 10px;">
          <h3 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 8px;">8. How does transit insurance protect my car during shipping?</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6;">Our comprehensive transit insurance covers accidental loss or damage based on the declared vehicle market value, providing complete financial security.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 20px; border-radius: 10px;">
          <h3 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 8px;">9. Why choose Shree Ashirwad over local brokers?</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6;">We operate verified vehicle carriers, maintain 7-layer protective body packaging, offer real-time GPS tracking, and guarantee transparent pricing with no hidden fees.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 20px; border-radius: 10px;">
          <h3 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 8px;">10. How early should I book car shifting services in Bazpur?</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6;">We recommend booking 2 to 4 days before your planned departure date to ensure guaranteed carrier bed allocation and convenient doorstep pickup scheduling.</p>
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
        "description": "Professional car transportation service in Bazpur providing automobile transport carriers, door-to-door delivery & full transit insurance.",
        "address": {
          "@type": "PostalAddress",
          "addressLocality": "Bazpur",
          "addressRegion": "Uttarakhand",
          "addressCountry": "IN"
        }
      },
      {
        "@type": "FAQPage",
        "mainEntity": [
          {
            "@type": "Question",
            "name": "What are the typical car transport charges from Bazpur?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "Car transport charges depend on transit distance, car model, and carrier type. Regional relocations start around ₹4,500 - ₹7,500, while long-distance transport ranges from ₹10,000 to ₹18,000."
            }
          },
          {
            "@type": "Question",
            "name": "How does professional automobile transport protect my vehicle?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "Our automobile transport carriers use hydraulic ramps for zero-impact loading, 4-point wheel tie-down belts, and covered decks to prevent road dust and stone chips."
            }
          },
          {
            "@type": "Question",
            "name": "Is doorstep pickup available in Bazpur?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "Yes, we offer complete doorstep pickup across Bazpur town, Kashipur Road, Nainital Road, and nearby Udham Singh Nagar areas."
            }
          },
          {
            "@type": "Question",
            "name": "Which documents are required for car shifting from Bazpur?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "You must provide a copy of the car Registration Certificate (RC), active motor insurance, PUC certificate, and personal ID proof."
            }
          },
          {
            "@type": "Question",
            "name": "How can I track my vehicle during transit?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "All our car carriers are fitted with real-time GPS tracking units. You get live location links and regular updates throughout the journey."
            }
          },
          {
            "@type": "Question",
            "name": "Can I leave personal items inside the car during transport?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "Up to 20-30 kg of non-flammable personal luggage packed securely in the trunk is permitted. Valuables, cash, and liquids are strictly prohibited."
            }
          },
          {
            "@type": "Question",
            "name": "What preparations are needed before handing over the car?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "Keep fuel level at around 1/4th, remove loose items, disable security alarms, check tire pressure, and wash the car exterior."
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
            "name": "Why choose Shree Ashirwad over local brokers?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "We operate verified vehicle carriers, maintain 7-layer protective body packaging, offer real-time GPS tracking, and guarantee transparent pricing."
            }
          },
          {
            "@type": "Question",
            "name": "How early should I book car shifting services in Bazpur?",
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
      <h2 style="font-size: 2.2rem; font-weight: 800; margin-bottom: 15px;">Book Safe Car Transportation in Bazpur Today</h2>
      <p style="font-size: 1.1rem; color: #ffcdd2; max-width: 700px; margin: 0 auto 30px;">
        Enjoy guaranteed doorstep pickup, 7-layer protective body wrap, live GPS tracking, and complete transit insurance for your vehicle.
      </p>
      <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap;">
        <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Now" style="padding: 15px 35px; background: #ffffff; color: #d32f2f; border-radius: 50px; font-weight: 800; font-size: 1.1rem; text-decoration: none; box-shadow: 0 5px 20px rgba(0,0,0,0.3);">
          <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call <?php echo SITE_PHONE; ?>
        </a>
        <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20to%20book%20car%20transportation%20in%20Bazpur." title="WhatsApp Chat" target="_blank" style="padding: 15px 35px; background: #25d366; color: #ffffff; border-radius: 50px; font-weight: 800; font-size: 1.1rem; text-decoration: none; box-shadow: 0 5px 20px rgba(0,0,0,0.3);">
          <i class="fab fa-whatsapp" style="margin-right: 8px;"></i> WhatsApp Quote
        </a>
      </div>
    </div>
  </section>

</main>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
