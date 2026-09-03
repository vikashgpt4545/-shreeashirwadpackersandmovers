<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "Car Transportation in Bhinmal | Enclosed Auto Transport Services";
$page_desc = "Safe car transportation in Bhinmal (Jalore District, Rajasthan) by Shree Ashirwad Packers and Movers. Top automobile transport, move my car solutions, enclosed auto transport services & four wheeler transport. Call 8409531615.";
$page_keywords = "car transportation in bhinmal, automobile transport, move my car, enclosed auto transport services, four wheeler transport, car transport jalore, packers and movers bhinmal";
$canonical_url = "https://shreeashirwadpackersandmovers.com/pages/car-transportation-in-bhinmal.php";

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
        <span class="breadcrumb-item active">Car Transportation in Bhinmal</span>
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
            BHINMAL RAJASTHAN CAR LOGISTICS
          </span>
          <h1 style="font-size: 2.7rem; font-weight: 800; line-height: 1.2; margin-bottom: 20px; color: #ffffff;">
            Reliable <span style="color: #f59e0b;">Car Transportation in Bhinmal</span>
          </h1>
          <p style="font-size: 1.12rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 25px;">
            Looking to <strong>move my car</strong> safely from Bhinmal? Shree Ashirwad Packers and Movers offers expert <strong>automobile transport</strong> and specialized <strong>enclosed auto transport services</strong> for hassle-free <strong>four wheeler transport</strong> with 100% transit insurance and doorstep pickup across Jalore region.
          </p>

          <div style="display: flex; gap: 15px; flex-wrap: wrap; margin-bottom: 30px;">
            <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Now" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
              <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call Now: <?php echo SITE_PHONE; ?>
            </a>
            <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20a%20car%20transport%20quote%20for%20Bhinmal." title="Chat on WhatsApp" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
              <i class="fab fa-whatsapp" style="margin-right: 8px;"></i> Chat on WhatsApp
            </a>
          </div>

          <div style="display: flex; gap: 20px; font-size: 0.9rem; color: #94a3b8;">
            <span><strong style="color: #f59e0b;">100% Insured</strong> Transit</span>
            <span><strong style="color: #f59e0b;">Jodhpur-Jalore</strong> Network</span>
            <span><strong style="color: #f59e0b;">Doorstep</strong> Delivery</span>
          </div>
        </div>

        <!-- Hero Lead Form Column -->
        <div class="hero-form-card" style="background: rgba(255, 255, 255, 0.05); backdrop-filter: blur(10px); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 16px; padding: 30px; box-shadow: 0 15px 35px rgba(0,0,0,0.4);">
          <h2 style="font-size: 1.4rem; color: #ffffff; margin-bottom: 8px; font-weight: 700; text-align: center;">Get Bhinmal Car Transport Quote</h2>
          <p style="font-size: 0.85rem; color: #94a3b8; text-align: center; margin-bottom: 20px;">Receive instant price quote on WhatsApp in 2 minutes</p>

          <form action="#" method="POST" onsubmit="sendHeroWhatsAppLead(event, this);">
            <div style="margin-bottom: 14px;">
              <input type="text" name="name" class="form-control" placeholder="Your Full Name" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="margin-bottom: 14px;">
              <input type="tel" name="phone" class="form-control" placeholder="10-Digit Mobile Number" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 10px; margin-bottom: 14px;">
              <input type="text" name="move_from" class="form-control" value="Bhinmal" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
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
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b;">10,400+</div>
          <div style="font-size: 0.9rem; color: #94a3b8;">Cars Relocated</div>
        </div>
        <div>
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b;">100%</div>
          <div style="font-size: 0.9rem; color: #94a3b8;">Covered Containers</div>
        </div>
        <div>
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b;">Zero</div>
          <div style="font-size: 0.9rem; color: #94a3b8;">Scratch Guarantee</div>
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
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff;">Specialized <span style="color: #f59e0b;">Automobile Transport</span> Features</h2>
        <p style="color: #94a3b8; font-size: 1rem; line-height: 1.6;">Our four wheeler transport services combine absolute vehicle security with clear pricing.</p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 30px;">
        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 30px; border-radius: 12px;">
          <div style="width: 50px; height: 50px; background: rgba(245,158,11,0.1); border-radius: 10px; display: flex; align-items: center; justify-content: center; color: #f59e0b; font-size: 1.5rem; margin-bottom: 20px;">
            <i class="fas fa-trailer"></i>
          </div>
          <h3 style="font-size: 1.2rem; font-weight: 700; color: #ffffff; margin-bottom: 10px;">Enclosed Auto Transport Services</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6;">Fully sealed container trucks protecting vehicles from dust, desert heat, and highway stone hits.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 30px; border-radius: 12px;">
          <div style="width: 50px; height: 50px; background: rgba(245,158,11,0.1); border-radius: 10px; display: flex; align-items: center; justify-content: center; color: #f59e0b; font-size: 1.5rem; margin-bottom: 20px;">
            <i class="fas fa-car-side"></i>
          </div>
          <h3 style="font-size: 1.2rem; font-weight: 700; color: #ffffff; margin-bottom: 10px;">Safe Four Wheeler Transport</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6;">Specially built ramps and wheel chocks tailored for hatchbacks, sedans, luxury cars, and SUVs.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 30px; border-radius: 12px;">
          <div style="width: 50px; height: 50px; background: rgba(245,158,11,0.1); border-radius: 10px; display: flex; align-items: center; justify-content: center; color: #f59e0b; font-size: 1.5rem; margin-bottom: 20px;">
            <i class="fas fa-shield-alt"></i>
          </div>
          <h3 style="font-size: 1.2rem; font-weight: 700; color: #ffffff; margin-bottom: 10px;">Full Transit Insurance</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6;">Declared market value insurance protecting your vehicle during highway movement across states.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 30px; border-radius: 12px;">
          <div style="width: 50px; height: 50px; background: rgba(245,158,11,0.1); border-radius: 10px; display: flex; align-items: center; justify-content: center; color: #f59e0b; font-size: 1.5rem; margin-bottom: 20px;">
            <i class="fas fa-map-marker-alt"></i>
          </div>
          <h3 style="font-size: 1.2rem; font-weight: 700; color: #ffffff; margin-bottom: 10px;">Live GPS Location Tracking</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6;">Continuous satellite tracking updates provided directly to your phone throughout the route.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 30px; border-radius: 12px;">
          <div style="width: 50px; height: 50px; background: rgba(245,158,11,0.1); border-radius: 10px; display: flex; align-items: center; justify-content: center; color: #f59e0b; font-size: 1.5rem; margin-bottom: 20px;">
            <i class="fas fa-home"></i>
          </div>
          <h3 style="font-size: 1.2rem; font-weight: 700; color: #ffffff; margin-bottom: 10px;">Doorstep Pickup & Drop</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6;">Driver pick up right from your home or office in Bhinmal with direct delivery at your new destination.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 30px; border-radius: 12px;">
          <div style="width: 50px; height: 50px; background: rgba(245,158,11,0.1); border-radius: 10px; display: flex; align-items: center; justify-content: center; color: #f59e0b; font-size: 1.5rem; margin-bottom: 20px;">
            <i class="fas fa-file-invoice-dollar"></i>
          </div>
          <h3 style="font-size: 1.2rem; font-weight: 700; color: #ffffff; margin-bottom: 10px;">IBA & GST Bills</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6;">Official 18% GST bills and IBA-compliant consignment notes for employee relocation claim reimbursement.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 5: Automobile Carrier Infrastructure Options -->
  <section style="padding: 60px 0; background: #1e293b; color: #ffffff;">
    <div class="container">
      <div style="text-align: center; margin-bottom: 40px;">
        <h2 style="font-size: 2rem; font-weight: 800;">Car Carrier Fleet Options in Bhinmal</h2>
        <p style="color: #94a3b8; margin-top: 10px;">Tailored solutions to safely move my car across India</p>
      </div>

      <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 30px;">
        <div style="background: rgba(0,0,0,0.2); padding: 30px; border-radius: 12px; border-left: 4px solid #f59e0b;">
          <h3 style="font-size: 1.3rem; color: #f59e0b; margin-bottom: 15px;">Option A: Closed Single-Car Container Truck</h3>
          <p style="color: #cbd5e1; line-height: 1.7; margin-bottom: 15px;">Recommended for luxury sedans, vintage cars, and SUVs requiring 100% dust-proof and climate-protected movement.</p>
          <ul style="color: #94a3b8; line-height: 1.8; padding-left: 20px;">
            <li>Full metal body container enclosure</li>
            <li>Hydraulic ramp zero-scrape loading</li>
            <li>Direct single vehicle express transit</li>
          </ul>
        </div>

        <div style="background: rgba(0,0,0,0.2); padding: 30px; border-radius: 12px; border-left: 4px solid #3b82f6;">
          <h3 style="font-size: 1.3rem; color: #3b82f6; margin-bottom: 15px;">Option B: Covered Multi-Car Deck Trailer</h3>
          <p style="color: #cbd5e1; line-height: 1.7; margin-bottom: 15px;">Cost-effective choice for standard hatchbacks and family cars moving long distance.</p>
          <ul style="color: #94a3b8; line-height: 1.8; padding-left: 20px;">
            <li>Affordable shared container tariff</li>
            <li>Four-wheel nylon strap locking</li>
            <li>Scheduled departures on national highways</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 6: 7-Step Safety Protocol -->
  <section style="padding: 70px 0; background: #0f172a; color: #ffffff;">
    <div class="container">
      <div style="text-align: center; margin-bottom: 50px;">
        <h2 style="font-size: 2.2rem; font-weight: 800;">7-Step Vehicle Protection Standard</h2>
        <p style="color: #94a3b8;">Ensuring your car is delivered without a single mark</p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 20px;">
        <div style="background: rgba(255,255,255,0.03); padding: 25px; border-radius: 10px; text-align: center;">
          <div style="font-size: 1.5rem; font-weight: 800; color: #f59e0b; margin-bottom: 10px;">01</div>
          <h4 style="font-size: 1.1rem; margin-bottom: 10px;">Pre-Pickup Inspection</h4>
          <p style="font-size: 0.85rem; color: #94a3b8; line-height: 1.6;">Physical inspection and digital photo logging of existing body condition and odometer reading.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); padding: 25px; border-radius: 10px; text-align: center;">
          <div style="font-size: 1.5rem; font-weight: 800; color: #f59e0b; margin-bottom: 10px;">02</div>
          <h4 style="font-size: 1.1rem; margin-bottom: 10px;">Protective Foam Wrap</h4>
          <p style="font-size: 0.85rem; color: #94a3b8; line-height: 1.6;">Wrapping mirrors, bumpers, and handles with high-density protective foam sheeting.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); padding: 25px; border-radius: 10px; text-align: center;">
          <div style="font-size: 1.5rem; font-weight: 800; color: #f59e0b; margin-bottom: 10px;">03</div>
          <h4 style="font-size: 1.1rem; margin-bottom: 10px;">Hydraulic Ramp Drive</h4>
          <p style="font-size: 0.85rem; color: #94a3b8; line-height: 1.6;">Safe loading onto carrier deck with zero undercarriage scraping.</p>
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
        <h2 style="font-size: 2rem; font-weight: 800;">Bhinmal & Jalore Regional Coverage</h2>
        <p style="color: #94a3b8; margin-top: 10px;">Doorstep pickup across Bhinmal town and Rajasthan regional centers</p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 15px; text-align: center;">
        <div style="background: rgba(255,255,255,0.05); padding: 15px; border-radius: 8px; font-weight: 600; color: #cbd5e1;">Bhinmal Town</div>
        <div style="background: rgba(255,255,255,0.05); padding: 15px; border-radius: 8px; font-weight: 600; color: #cbd5e1;">Jalore</div>
        <div style="background: rgba(255,255,255,0.05); padding: 15px; border-radius: 8px; font-weight: 600; color: #cbd5e1;">Sanchore</div>
        <div style="background: rgba(255,255,255,0.05); padding: 15px; border-radius: 8px; font-weight: 600; color: #cbd5e1;">Ahore</div>
        <div style="background: rgba(255,255,255,0.05); padding: 15px; border-radius: 8px; font-weight: 600; color: #cbd5e1;">Sirohi</div>
        <div style="background: rgba(255,255,255,0.05); padding: 15px; border-radius: 8px; font-weight: 600; color: #cbd5e1;">Abu Road</div>
        <div style="background: rgba(255,255,255,0.05); padding: 15px; border-radius: 8px; font-weight: 600; color: #cbd5e1;">Pali</div>
        <div style="background: rgba(255,255,255,0.05); padding: 15px; border-radius: 8px; font-weight: 600; color: #cbd5e1;">Jodhpur</div>
        <div style="background: rgba(255,255,255,0.05); padding: 15px; border-radius: 8px; font-weight: 600; color: #cbd5e1;">Barmer</div>
        <div style="background: rgba(255,255,255,0.05); padding: 15px; border-radius: 8px; font-weight: 600; color: #cbd5e1;">Udaipur</div>
        <div style="background: rgba(255,255,255,0.05); padding: 15px; border-radius: 8px; font-weight: 600; color: #cbd5e1;">Ahmedabad (GJ)</div>
        <div style="background: rgba(255,255,255,0.05); padding: 15px; border-radius: 8px; font-weight: 600; color: #cbd5e1;">Palanpur (GJ)</div>
      </div>
    </div>
  </section>

  <!-- Section 8: Intercity Route Grid -->
  <section style="padding: 60px 0; background: #0f172a; color: #ffffff;">
    <div class="container">
      <div style="text-align: center; margin-bottom: 40px;">
        <h2 style="font-size: 2rem; font-weight: 800;">Popular Intercity Routes from Bhinmal</h2>
        <p style="color: #94a3b8; margin-top: 10px;">Direct national highway shipping corridors</p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px;">
        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 20px; border-radius: 8px;">
          <h4 style="color: #f59e0b; font-size: 1.1rem; margin-bottom: 8px;">Bhinmal to Ahmedabad</h4>
          <p style="color: #94a3b8; font-size: 0.85rem;">Distance: ~260 km | Transit Time: 1 Day</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 20px; border-radius: 8px;">
          <h4 style="color: #f59e0b; font-size: 1.1rem; margin-bottom: 8px;">Bhinmal to Jaipur / Delhi</h4>
          <p style="color: #94a3b8; font-size: 0.85rem;">Distance: ~470 km (Jaipur) | Transit Time: 2 Days</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 20px; border-radius: 8px;">
          <h4 style="color: #f59e0b; font-size: 1.1rem; margin-bottom: 8px;">Bhinmal to Mumbai / Pune</h4>
          <p style="color: #94a3b8; font-size: 0.85rem;">Distance: ~750 km | Transit Time: 2-3 Days</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 20px; border-radius: 8px;">
          <h4 style="color: #f59e0b; font-size: 1.1rem; margin-bottom: 8px;">Bhinmal to Bangalore</h4>
          <p style="color: #94a3b8; font-size: 0.85rem;">Distance: ~1,500 km | Transit Time: 4 Days</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 20px; border-radius: 8px;">
          <h4 style="color: #f59e0b; font-size: 1.1rem; margin-bottom: 8px;">Bhinmal to Hyderabad</h4>
          <p style="color: #94a3b8; font-size: 0.85rem;">Distance: ~1,180 km | Transit Time: 3-4 Days</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 20px; border-radius: 8px;">
          <h4 style="color: #f59e0b; font-size: 1.1rem; margin-bottom: 8px;">Bhinmal to Surat / Vadodara</h4>
          <p style="color: #94a3b8; font-size: 0.85rem;">Distance: ~450 km | Transit Time: 2 Days</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 9: IBA/GST Compliance Section -->
  <section style="padding: 60px 0; background: #1e293b; color: #ffffff;">
    <div class="container">
      <div style="background: linear-gradient(135deg, rgba(245,158,11,0.1) 0%, rgba(30,41,59,0.8) 100%); border: 1px solid rgba(245,158,11,0.3); padding: 40px; border-radius: 16px;">
        <h2 style="font-size: 1.8rem; color: #f59e0b; margin-bottom: 15px;">IBA & GST Billing for Automobile Transport</h2>
        <p style="color: #cbd5e1; line-height: 1.8; margin-bottom: 20px;">
          Shree Ashirwad Packers and Movers provides 100% legal GST tax invoices, pre-transit vehicle inspection reports, and IBA-compliant bilty copies accepted by corporate companies, government departments, and banks for relocation claims.
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
        <h2 style="font-size: 2.2rem; font-weight: 800;">Frequently Asked Questions — Car Transport in Bhinmal</h2>
        <p style="color: #94a3b8;">Everything you need to know about our vehicle transport services</p>
      </div>

      <div style="max-width: 900px; margin: 0 auto; display: flex; flex-direction: column; gap: 15px;">
        
        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 20px; border-radius: 10px;">
          <h3 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 8px;">1. What is the process when I want to move my car from Bhinmal?</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6;">Contact us via phone or WhatsApp for a free quote. We conduct doorstep pickup, perform a joint condition audit, apply protective wrap, and load your vehicle into covered carriers.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 20px; border-radius: 10px;">
          <h3 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 8px;">2. What are enclosed auto transport services?</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6;">Enclosed auto transport services utilize fully sealed metal container trailers that shield your car completely from weather, rain, road dust, and stones.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 20px; border-radius: 10px;">
          <h3 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 8px;">3. What are the typical charges for four wheeler transport from Bhinmal?</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6;">Short distance shipping to Ahmedabad or Jodhpur costs ₹4,000 - ₹6,500. Long-distance interstate movement costs between ₹9,500 and ₹18,500 depending on distance and vehicle model.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 20px; border-radius: 10px;">
          <h3 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 8px;">4. Is doorstep car pickup available in Bhinmal town?</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6;">Yes, we provide doorstep pickup across Bhinmal town and surrounding areas in Jalore district.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 20px; border-radius: 10px;">
          <h3 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 8px;">5. Which documents are required for automobile transport?</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6;">You need a copy of the car Registration Certificate (RC), valid insurance document, owner ID proof, and signed inspection sheet.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 20px; border-radius: 10px;">
          <h3 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 8px;">6. Can I track my vehicle status online during highway transport?</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6;">Yes, all our vehicle carriers feature real-time GPS hardware, giving you live tracking updates directly on WhatsApp.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 20px; border-radius: 10px;">
          <h3 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 8px;">7. Are personal goods allowed inside the vehicle during transport?</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6;">Up to 25 kg of non-flammable personal luggage stored safely in the vehicle trunk is allowed. Cash and hazardous materials are strictly prohibited.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 20px; border-radius: 10px;">
          <h3 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 8px;">8. How does transit insurance protect my car during shipping?</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6;">Transit insurance covers declared vehicle market value against accidental damage, fire, or theft during intercity highway movement.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 20px; border-radius: 10px;">
          <h3 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 8px;">9. How is the car loaded onto the carrier trailer?</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6;">We use low-angle hydraulic ramps to drive your car smoothly onto the deck without any underbody scraping.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 20px; border-radius: 10px;">
          <h3 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 8px;">10. How early should I book car transportation in Bhinmal?</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6;">Booking 2 to 3 days in advance guarantees carrier slot availability and timely doorstep pickup.</p>
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
        "description": "Professional car transportation service in Bhinmal (Jalore, Rajasthan) offering top automobile transport, move my car solutions, enclosed auto transport services & four wheeler transport.",
        "address": {
          "@type": "PostalAddress",
          "addressLocality": "Bhinmal",
          "addressRegion": "Rajasthan",
          "addressCountry": "IN"
        }
      },
      {
        "@type": "FAQPage",
        "mainEntity": [
          {
            "@type": "Question",
            "name": "What is the process when I want to move my car from Bhinmal?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "Contact us via phone or WhatsApp for a free quote. We conduct doorstep pickup, perform a joint condition audit, apply protective wrap, and load your vehicle into covered carriers."
            }
          },
          {
            "@type": "Question",
            "name": "What are enclosed auto transport services?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "Enclosed auto transport services utilize fully sealed metal container trailers that shield your car completely from weather, rain, road dust, and stones."
            }
          },
          {
            "@type": "Question",
            "name": "What are the typical charges for four wheeler transport from Bhinmal?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "Short distance shipping to Ahmedabad or Jodhpur costs ₹4,000 - ₹6,500. Long-distance interstate movement costs between ₹9,500 and ₹18,500."
            }
          },
          {
            "@type": "Question",
            "name": "Is doorstep car pickup available in Bhinmal town?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "Yes, we provide doorstep pickup across Bhinmal town and surrounding areas in Jalore district."
            }
          },
          {
            "@type": "Question",
            "name": "Which documents are required for automobile transport?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "You need a copy of the car Registration Certificate (RC), valid insurance document, owner ID proof, and signed inspection sheet."
            }
          },
          {
            "@type": "Question",
            "name": "Can I track my vehicle status online during highway transport?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "Yes, all our vehicle carriers feature real-time GPS hardware, giving you live tracking updates directly on WhatsApp."
            }
          },
          {
            "@type": "Question",
            "name": "Are personal goods allowed inside the vehicle during transport?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "Up to 25 kg of non-flammable personal luggage stored safely in the vehicle trunk is allowed. Cash and hazardous materials are strictly prohibited."
            }
          },
          {
            "@type": "Question",
            "name": "How does transit insurance protect my car during shipping?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "Transit insurance covers declared vehicle market value against accidental damage, fire, or theft during intercity highway movement."
            }
          },
          {
            "@type": "Question",
            "name": "How is the car loaded onto the carrier trailer?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "We use low-angle hydraulic ramps to drive your car smoothly onto the deck without any underbody scraping."
            }
          },
          {
            "@type": "Question",
            "name": "How early should I book car transportation in Bhinmal?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "Booking 2 to 3 days in advance guarantees carrier slot availability and timely doorstep pickup."
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
      <h2 style="font-size: 2.2rem; font-weight: 800; margin-bottom: 15px;">Book Car Transportation in Bhinmal Today</h2>
      <p style="font-size: 1.1rem; color: #ffcdd2; max-width: 700px; margin: 0 auto 30px;">
        Get top enclosed auto transport services with guaranteed doorstep pickup, 7-layer body protection, and full transit insurance.
      </p>
      <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap;">
        <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Now" style="padding: 15px 35px; background: #ffffff; color: #d32f2f; border-radius: 50px; font-weight: 800; font-size: 1.1rem; text-decoration: none; box-shadow: 0 5px 20px rgba(0,0,0,0.3);">
          <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call <?php echo SITE_PHONE; ?>
        </a>
        <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20to%20book%20car%20transportation%20in%20Bhinmal." title="WhatsApp Chat" target="_blank" style="padding: 15px 35px; background: #25d366; color: #ffffff; border-radius: 50px; font-weight: 800; font-size: 1.1rem; text-decoration: none; box-shadow: 0 5px 20px rgba(0,0,0,0.3);">
          <i class="fab fa-whatsapp" style="margin-right: 8px;"></i> WhatsApp Quote
        </a>
      </div>
    </div>
  </section>

</main>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
