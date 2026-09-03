<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "Car Transportation in Barrackpur | Professional Vehicle Carrier Services";
$page_desc = "Top rated car transportation in Barrackpur by Shree Ashirwad Packers and Movers. Verified automobile carrier trucks, 7-layer protective packaging, door-to-door delivery & full transit insurance. Call 8409531615.";
$page_keywords = "car transportation in barrackpur, car transport service, top rated car transport companies, automobile carrier, car moving service, car shipping cost, vehicle carrier, car shifting services";
$canonical_url = "https://shreeashirwadpackersandmovers.com/pages/car-transportation-in-barrackpur.php";

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
        <span class="breadcrumb-item active">Car Transportation in Barrackpur</span>
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
            BARRACKPUR AUTOMOBILE LOGISTICS HUB
          </span>
          <h1 style="font-size: 2.7rem; font-weight: 800; line-height: 1.2; margin-bottom: 20px; color: #ffffff;">
            Reliable <span style="color: #f59e0b;">Car Transportation in Barrackpur</span>
          </h1>
          <p style="font-size: 1.12rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 25px;">
            Looking for a dependable <strong>car transport service</strong> in Barrackpur? Shree Ashirwad Packers and Movers provides single-car enclosed containers and multi-car covered trailers with GPS tracking, 7-layer body wrapping, and complete insurance coverage. Counted among the <strong>top rated car transport companies</strong>, we deliver seamless vehicle movement across India.
          </p>

          <div style="display: flex; gap: 15px; flex-wrap: wrap; margin-bottom: 30px;">
            <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Now" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
              <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call Now: <?php echo SITE_PHONE; ?>
            </a>
            <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20a%20car%20transport%20quote%20for%20Barrackpur." title="Chat on WhatsApp" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
              <i class="fab fa-whatsapp" style="margin-right: 8px;"></i> Chat on WhatsApp
            </a>
          </div>

          <div style="display: flex; gap: 20px; font-size: 0.9rem; color: #94a3b8;">
            <span><strong style="color: #f59e0b;">100% Insured</strong> Transit</span>
            <span><strong style="color: #f59e0b;">7-Layer</strong> Body Wrap</span>
            <span><strong style="color: #f59e0b;">Door-to-Door</strong> Delivery</span>
          </div>
        </div>

        <!-- Hero Lead Form Column -->
        <div class="hero-form-card" style="background: rgba(255, 255, 255, 0.05); backdrop-filter: blur(10px); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 16px; padding: 30px; box-shadow: 0 15px 35px rgba(0,0,0,0.4);">
          <h2 style="font-size: 1.4rem; color: #ffffff; margin-bottom: 8px; font-weight: 700; text-align: center;">Get Barrackpur Car Moving Quote</h2>
          <p style="font-size: 0.85rem; color: #94a3b8; text-align: center; margin-bottom: 20px;">Transparent, zero-hidden-fee cost estimate on WhatsApp within 2 minutes</p>

          <form action="#" method="POST" onsubmit="sendHeroWhatsAppLead(event, this);">
            <div style="margin-bottom: 14px;">
              <input type="text" name="name" class="form-control" placeholder="Your Full Name" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="margin-bottom: 14px;">
              <input type="tel" name="phone" class="form-control" placeholder="10-Digit Mobile Number" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 10px; margin-bottom: 14px;">
              <input type="text" name="move_from" class="form-control" value="Barrackpur" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
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
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b;">12,500+</div>
          <div style="font-size: 0.9rem; color: #94a3b8;">Cars Relocated Safety</div>
        </div>
        <div>
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b;">100%</div>
          <div style="font-size: 0.9rem; color: #94a3b8;">GPS Covered Carriers</div>
        </div>
        <div>
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b;">Zero</div>
          <div style="font-size: 0.9rem; color: #94a3b8;">Scratch Guarantee</div>
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
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff;">Why Choose Our <span style="color: #f59e0b;">Car Moving Service</span> in Barrackpur?</h2>
        <p style="color: #94a3b8; font-size: 1rem; line-height: 1.6;">Our end-to-end car transport service in Barrackpur guarantees scratch-free transit, complete compliance, and full peace of mind.</p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 30px;">
        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 30px; border-radius: 12px;">
          <div style="width: 50px; height: 50px; background: rgba(245,158,11,0.1); border-radius: 10px; display: flex; align-items: center; justify-content: center; color: #f59e0b; font-size: 1.5rem; margin-bottom: 20px;">
            <i class="fas fa-truck-monster"></i>
          </div>
          <h3 style="font-size: 1.2rem; font-weight: 700; color: #ffffff; margin-bottom: 10px;">Enclosed Automobile Carrier</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6;">Specialized hydraulic ramp enclosed containers protecting luxury sedans and SUVs from dust, weather elements, and highway debris during transit.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 30px; border-radius: 12px;">
          <div style="width: 50px; height: 50px; background: rgba(245,158,11,0.1); border-radius: 10px; display: flex; align-items: center; justify-content: center; color: #f59e0b; font-size: 1.5rem; margin-bottom: 20px;">
            <i class="fas fa-shield-alt"></i>
          </div>
          <h3 style="font-size: 1.2rem; font-weight: 700; color: #ffffff; margin-bottom: 10px;">Full Transit Insurance</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6;">Comprehensive transit insurance policy covering market value damages, ensuring absolute financial protection throughout long-distance transit.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 30px; border-radius: 12px;">
          <div style="width: 50px; height: 50px; background: rgba(245,158,11,0.1); border-radius: 10px; display: flex; align-items: center; justify-content: center; color: #f59e0b; font-size: 1.5rem; margin-bottom: 20px;">
            <i class="fas fa-map-marker-alt"></i>
          </div>
          <h3 style="font-size: 1.2rem; font-weight: 700; color: #ffffff; margin-bottom: 10px;">Real-Time GPS Tracking</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6;">Stay informed with live GPS location tracking updates sent directly to your phone from pickup in Barrackpur to delivery.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 30px; border-radius: 12px;">
          <div style="width: 50px; height: 50px; background: rgba(245,158,11,0.1); border-radius: 10px; display: flex; align-items: center; justify-content: center; color: #f59e0b; font-size: 1.5rem; margin-bottom: 20px;">
            <i class="fas fa-box-open"></i>
          </div>
          <h3 style="font-size: 1.2rem; font-weight: 700; color: #ffffff; margin-bottom: 10px;">7-Layer Protective Wrap</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6;">High-density foam padding, stretch wrap, and corner protectors applied on bumpers, mirrors, and handles to prevent fine scratches.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 30px; border-radius: 12px;">
          <div style="width: 50px; height: 50px; background: rgba(245,158,11,0.1); border-radius: 10px; display: flex; align-items: center; justify-content: center; color: #f59e0b; font-size: 1.5rem; margin-bottom: 20px;">
            <i class="fas fa-door-open"></i>
          </div>
          <h3 style="font-size: 1.2rem; font-weight: 700; color: #ffffff; margin-bottom: 10px;">Doorstep Pick & Drop</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6;">Door-to-door vehicle pickup right from your home or office in Barrackpur and direct unloading at your destination doorstep.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 30px; border-radius: 12px;">
          <div style="width: 50px; height: 50px; background: rgba(245,158,11,0.1); border-radius: 10px; display: flex; align-items: center; justify-content: center; color: #f59e0b; font-size: 1.5rem; margin-bottom: 20px;">
            <i class="fas fa-file-invoice"></i>
          </div>
          <h3 style="font-size: 1.2rem; font-weight: 700; color: #ffffff; margin-bottom: 10px;">IBA & GST Compliant</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6;">Complete official documentation including GST invoices, vehicle inspection sheets, and IBA-approved consignment bills for employee reimbursement.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 5: Automobile Carrier Infrastructure Options -->
  <section style="padding: 60px 0; background: #1e293b; color: #ffffff;">
    <div class="container">
      <div style="text-align: center; margin-bottom: 40px;">
        <h2 style="font-size: 2rem; font-weight: 800;">Automobile Carrier Infrastructure Options</h2>
        <p style="color: #94a3b8; margin-top: 10px;">Selecting the right carrier option for your vehicle relocation from Barrackpur</p>
      </div>

      <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 30px;">
        <div style="background: rgba(0,0,0,0.2); padding: 30px; border-radius: 12px; border-left: 4px solid #f59e0b;">
          <h3 style="font-size: 1.3rem; color: #f59e0b; margin-bottom: 15px;">Option A: Closed Single-Car Container Truck</h3>
          <p style="color: #cbd5e1; line-height: 1.7; margin-bottom: 15px;">Recommended for high-value luxury cars, sports vehicles, vintage models, and new showroom vehicles. Complete enclosure protects against weather, dust, and flying road debris with dedicated tie-down wheel chocks.</p>
          <ul style="color: #94a3b8; line-height: 1.8; padding-left: 20px;">
            <li>Exclusive single-vehicle container bed</li>
            <li>Hydraulic tail-lift loading system</li>
            <li>Maximum security against weather & vandalism</li>
          </ul>
        </div>

        <div style="background: rgba(0,0,0,0.2); padding: 30px; border-radius: 12px; border-left: 4px solid #3b82f6;">
          <h3 style="font-size: 1.3rem; color: #3b82f6; margin-bottom: 15px;">Option B: Multi-Car Covered Deck Trailer</h3>
          <p style="color: #cbd5e1; line-height: 1.7; margin-bottom: 15px;">The most cost-effective option for standard hatchbacks, sedans, and compact SUVs. Heavy-duty 8-car to 10-car double-decker carriers equipped with heavy safety tarpaulins and individual wheel belt locking systems.</p>
          <ul style="color: #94a3b8; line-height: 1.8; padding-left: 20px;">
            <li>Economical shared intercity transit</li>
            <li>Four-point wheel harness locking system</li>
            <li>Regular fixed dispatch schedules across major national highways</li>
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
          <p style="font-size: 0.85rem; color: #94a3b8; line-height: 1.6;">Detailed physical survey and photographic logging of existing body condition, odometer reading, and fuel levels.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); padding: 25px; border-radius: 10px; text-align: center;">
          <div style="font-size: 1.5rem; font-weight: 800; color: #f59e0b; margin-bottom: 10px;">02</div>
          <h4 style="font-size: 1.1rem; margin-bottom: 10px;">7-Layer Protective Wrapping</h4>
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
        <h2 style="font-size: 2rem; font-weight: 800;">Barrackpur & Greater Kolkata Local Service Hubs</h2>
        <p style="color: #94a3b8; margin-top: 10px;">Seamless doorstep pickup and delivery coverage across Barrackpore and adjacent North 24 Parganas localities</p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 15px; text-align: center;">
        <div style="background: rgba(255,255,255,0.05); padding: 15px; border-radius: 8px; font-weight: 600; color: #cbd5e1;">Barrackpore Trunk Road (BT Road)</div>
        <div style="background: rgba(255,255,255,0.05); padding: 15px; border-radius: 8px; font-weight: 600; color: #cbd5e1;">Syamaprasad Nagar</div>
        <div style="background: rgba(255,255,255,0.05); padding: 15px; border-radius: 8px; font-weight: 600; color: #cbd5e1;">Cantonment Area</div>
        <div style="background: rgba(255,255,255,0.05); padding: 15px; border-radius: 8px; font-weight: 600; color: #cbd5e1;">Sodepur</div>
        <div style="background: rgba(255,255,255,0.05); padding: 15px; border-radius: 8px; font-weight: 600; color: #cbd5e1;">Khardah</div>
        <div style="background: rgba(255,255,255,0.05); padding: 15px; border-radius: 8px; font-weight: 600; color: #cbd5e1;">Titagarh</div>
        <div style="background: rgba(255,255,255,0.05); padding: 15px; border-radius: 8px; font-weight: 600; color: #cbd5e1;">Ichapur</div>
        <div style="background: rgba(255,255,255,0.05); padding: 15px; border-radius: 8px; font-weight: 600; color: #cbd5e1;">Naihati</div>
        <div style="background: rgba(255,255,255,0.05); padding: 15px; border-radius: 8px; font-weight: 600; color: #cbd5e1;">Madhyamgram</div>
        <div style="background: rgba(255,255,255,0.05); padding: 15px; border-radius: 8px; font-weight: 600; color: #cbd5e1;">Barasat</div>
        <div style="background: rgba(255,255,255,0.05); padding: 15px; border-radius: 8px; font-weight: 600; color: #cbd5e1;">Dunlop</div>
        <div style="background: rgba(255,255,255,0.05); padding: 15px; border-radius: 8px; font-weight: 600; color: #cbd5e1;">Belgharia</div>
      </div>
    </div>
  </section>

  <!-- Section 8: Intercity Route Grid -->
  <section style="padding: 60px 0; background: #0f172a; color: #ffffff;">
    <div class="container">
      <div style="text-align: center; margin-bottom: 40px;">
        <h2 style="font-size: 2rem; font-weight: 800;">Popular Intercity Routes from Barrackpur</h2>
        <p style="color: #94a3b8; margin-top: 10px;">Direct vehicle carrier routes connecting Barrackpur to major destinations nationwide</p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px;">
        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 20px; border-radius: 8px;">
          <h4 style="color: #f59e0b; font-size: 1.1rem; margin-bottom: 8px;">Barrackpur to Delhi / NCR</h4>
          <p style="color: #94a3b8; font-size: 0.85rem;">Distance: ~1,450 km | Transit Time: 3-5 Days</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 20px; border-radius: 8px;">
          <h4 style="color: #f59e0b; font-size: 1.1rem; margin-bottom: 8px;">Barrackpur to Bangalore</h4>
          <p style="color: #94a3b8; font-size: 0.85rem;">Distance: ~1,870 km | Transit Time: 4-6 Days</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 20px; border-radius: 8px;">
          <h4 style="color: #f59e0b; font-size: 1.1rem; margin-bottom: 8px;">Barrackpur to Mumbai / Pune</h4>
          <p style="color: #94a3b8; font-size: 0.85rem;">Distance: ~1,920 km | Transit Time: 4-6 Days</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 20px; border-radius: 8px;">
          <h4 style="color: #f59e0b; font-size: 1.1rem; margin-bottom: 8px;">Barrackpur to Hyderabad</h4>
          <p style="color: #94a3b8; font-size: 0.85rem;">Distance: ~1,480 km | Transit Time: 3-5 Days</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 20px; border-radius: 8px;">
          <h4 style="color: #f59e0b; font-size: 1.1rem; margin-bottom: 8px;">Barrackpur to Chennai</h4>
          <p style="color: #94a3b8; font-size: 0.85rem;">Distance: ~1,660 km | Transit Time: 4-5 Days</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 20px; border-radius: 8px;">
          <h4 style="color: #f59e0b; font-size: 1.1rem; margin-bottom: 8px;">Barrackpur to Ranchi / Patna</h4>
          <p style="color: #94a3b8; font-size: 0.85rem;">Distance: ~410 km | Transit Time: 1-2 Days</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 9: IBA/GST Compliance Section -->
  <section style="padding: 60px 0; background: #1e293b; color: #ffffff;">
    <div class="container">
      <div style="background: linear-gradient(135deg, rgba(245,158,11,0.1) 0%, rgba(30,41,59,0.8) 100%); border: 1px solid rgba(245,158,11,0.3); padding: 40px; border-radius: 16px;">
        <h2 style="font-size: 1.8rem; color: #f59e0b; margin-bottom: 15px;">Official GST & IBA Claim Compliance Documentation</h2>
        <p style="color: #cbd5e1; line-height: 1.8; margin-bottom: 20px;">
          As one of the <strong>top rated car transport companies</strong> operating in Barrackpur, Shree Ashirwad Packers and Movers provides standard 18% GST invoices, vehicle condition inspection sheets (Car Condition Report), and official Consignment Note (Bilty) documentation accepted by government departments, public sector units (PSUs), defense forces, and corporate organizations for 100% claim reimbursement.
        </p>
        <div style="display: flex; gap: 20px; flex-wrap: wrap; color: #94a3b8; font-size: 0.9rem;">
          <span><i class="fas fa-check-circle" style="color: #10b981; margin-right: 6px;"></i> 18% GST Registered Bill</span>
          <span><i class="fas fa-check-circle" style="color: #10b981; margin-right: 6px;"></i> Detailed Inspection Sheet</span>
          <span><i class="fas fa-check-circle" style="color: #10b981; margin-right: 6px;"></i> IBA Approved Bilty Format</span>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 10: 10-Item FAQ with JSON-LD Schema -->
  <section style="padding: 70px 0; background: #0f172a; color: #ffffff;">
    <div class="container">
      <div style="text-align: center; margin-bottom: 50px;">
        <h2 style="font-size: 2.2rem; font-weight: 800;">Frequently Asked Questions — Car Transport in Barrackpur</h2>
        <p style="color: #94a3b8;">Everything you need to know about our vehicle relocation services</p>
      </div>

      <div style="max-width: 900px; margin: 0 auto; display: flex; flex-direction: column; gap: 15px;">
        
        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 20px; border-radius: 10px;">
          <h3 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 8px;">1. What is the estimated car shipping cost from Barrackpur?</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6;">The car shipping cost depends on the destination distance, carrier type (open deck vs. closed container), and vehicle model. Intra-state transport starts around ₹4,500 - ₹8,500, while intercity transport (e.g., to Delhi or Bangalore) ranges between ₹9,500 and ₹18,500.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 20px; border-radius: 10px;">
          <h3 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 8px;">2. How does an automobile carrier protect my car during long-distance transit?</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6;">Our specialized automobile carrier trucks feature hydraulic ramps, wheel chocks, and 4-point nylon belt tie-downs that hold the vehicle firmly in place. Enclosed containers completely shield your car from dust, rain, and road flying stones.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 20px; border-radius: 10px;">
          <h3 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 8px;">3. Is doorstep pickup available in Barrackpur?</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6;">Yes, we provide complete doorstep pickup across Barrackpur, Sodepur, Khardah, Titagarh, and nearby North 24 Parganas localities using hydraulic car car-haulers.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 20px; border-radius: 10px;">
          <h3 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 8px;">4. Which documents are mandatory for intercity car shifting?</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6;">You need to provide a copy of the Registration Certificate (RC), valid vehicle insurance policy, PUC certificate, personal ID proof (Aadhaar/PAN), and signed handover inspection sheet.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 20px; border-radius: 10px;">
          <h3 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 8px;">5. How can I track my car during transit from Barrackpur?</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6;">All our vehicle carriers are equipped with real-time GPS tracking devices. You will receive tracking link access and regular status updates via SMS and WhatsApp from our control room.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 20px; border-radius: 10px;">
          <h3 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 8px;">6. Is personal luggage allowed inside the car during transport?</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6;">For safety and security reasons, personal belongings up to 20-30 kg packed securely in the trunk are permitted. Flammable items, liquids, and valuables (cash/jewelry) are strictly prohibited.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 20px; border-radius: 10px;">
          <h3 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 8px;">7. What should I prepare before handing over my vehicle?</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6;">Please keep the fuel tank filled to around 1/4th level, remove all personal items, turn off alarm systems, check tire pressure, and clean the car exterior for accurate pre-transit scratch inspection.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 20px; border-radius: 10px;">
          <h3 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 8px;">8. How does transit insurance work for car moving service?</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6;">Our transit insurance covers accidental damages and unforeseen incidents based on the declared vehicle value. In case of any incident, claims are processed promptly with supporting inspection reports.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 20px; border-radius: 10px;">
          <h3 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 8px;">9. Why is Shree Ashirwad rated among top car transport companies?</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6;">Our commitment to transparent pricing, 7-layer body protection, zero-scratch loading, GPS tracking, and 100% on-time delivery track record makes us a trusted choice across India.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 20px; border-radius: 10px;">
          <h3 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 8px;">10. How far in advance should I book my car transport from Barrackpur?</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6;">We recommend booking 2 to 4 days prior to your preferred pickup date to ensure guaranteed carrier bed allocation and convenient doorstep pickup scheduling.</p>
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
        "description": "Professional car transportation service in Barrackpur providing enclosed automobile carrier transport, door-to-door delivery & full transit insurance.",
        "address": {
          "@type": "PostalAddress",
          "addressLocality": "Barrackpur",
          "addressRegion": "West Bengal",
          "addressCountry": "IN"
        }
      },
      {
        "@type": "FAQPage",
        "mainEntity": [
          {
            "@type": "Question",
            "name": "What is the estimated car shipping cost from Barrackpur?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "The car shipping cost depends on the destination distance, carrier type (open deck vs. closed container), and vehicle model. Intra-state transport starts around ₹4,500 - ₹8,500, while intercity transport ranges between ₹9,500 and ₹18,500."
            }
          },
          {
            "@type": "Question",
            "name": "How does an automobile carrier protect my car during long-distance transit?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "Our specialized automobile carrier trucks feature hydraulic ramps, wheel chocks, and 4-point nylon belt tie-downs that hold the vehicle firmly in place."
            }
          },
          {
            "@type": "Question",
            "name": "Is doorstep pickup available in Barrackpur?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "Yes, we provide complete doorstep pickup across Barrackpur, Sodepur, Khardah, Titagarh, and nearby North 24 Parganas localities."
            }
          },
          {
            "@type": "Question",
            "name": "Which documents are mandatory for intercity car shifting?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "You need to provide a copy of the Registration Certificate (RC), valid vehicle insurance policy, PUC certificate, personal ID proof, and signed handover inspection sheet."
            }
          },
          {
            "@type": "Question",
            "name": "How can I track my car during transit from Barrackpur?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "All our vehicle carriers are equipped with real-time GPS tracking devices. You will receive tracking link access and regular status updates."
            }
          },
          {
            "@type": "Question",
            "name": "Is personal luggage allowed inside the car during transport?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "Personal belongings up to 20-30 kg packed securely in the trunk are permitted. Flammable items, liquids, and valuables are strictly prohibited."
            }
          },
          {
            "@type": "Question",
            "name": "What should I prepare before handing over my vehicle?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "Keep fuel tank filled to 1/4th level, remove personal items, turn off alarms, check tire pressure, and clean the car exterior for inspection."
            }
          },
          {
            "@type": "Question",
            "name": "How does transit insurance work for car moving service?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "Our transit insurance covers accidental damages and unforeseen incidents based on the declared vehicle value."
            }
          },
          {
            "@type": "Question",
            "name": "Why is Shree Ashirwad rated among top car transport companies?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "Our commitment to transparent pricing, 7-layer body protection, zero-scratch loading, GPS tracking, and on-time delivery makes us a trusted choice."
            }
          },
          {
            "@type": "Question",
            "name": "How far in advance should I book my car transport from Barrackpur?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "We recommend booking 2 to 4 days prior to your preferred pickup date to ensure guaranteed carrier bed allocation."
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
      <h2 style="font-size: 2.2rem; font-weight: 800; margin-bottom: 15px;">Book Safe Car Transportation in Barrackpur Today</h2>
      <p style="font-size: 1.1rem; color: #ffcdd2; max-width: 700px; margin: 0 auto 30px;">
        Get guaranteed doorstep pickup, 7-layer protective body wrap, real-time GPS tracking, and full insurance protection for your vehicle.
      </p>
      <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap;">
        <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Now" style="padding: 15px 35px; background: #ffffff; color: #d32f2f; border-radius: 50px; font-weight: 800; font-size: 1.1rem; text-decoration: none; box-shadow: 0 5px 20px rgba(0,0,0,0.3);">
          <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call <?php echo SITE_PHONE; ?>
        </a>
        <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20to%20book%20car%20transportation%20in%20Barrackpur." title="WhatsApp Chat" target="_blank" style="padding: 15px 35px; background: #25d366; color: #ffffff; border-radius: 50px; font-weight: 800; font-size: 1.1rem; text-decoration: none; box-shadow: 0 5px 20px rgba(0,0,0,0.3);">
          <i class="fab fa-whatsapp" style="margin-right: 8px;"></i> WhatsApp Quote
        </a>
      </div>
    </div>
  </section>

</main>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
