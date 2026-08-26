<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "Bike Transport from Draksharamam to Hyderabad | Two-Wheeler Shifting Charges";
$page_desc = "Safe and reliable bike transport services from Draksharamam to Hyderabad. Doorstep pickup in Draksharamam & Konaseema area, 7-layer bubble packaging, container transport, and full transit insurance. Get instant rates!";
$page_keywords = "bike transport from draksharamam to hyderabad, draksharamam to hyderabad bike parcel service, two wheeler shifting draksharamam to hyderabad, bike transport charges draksharamam to hyderabad";
$canonical_url = "https://shreeashirwadpackersandmovers.com/pages/bike-transport-from-draksharamam-to-hyderabad.php";

require_once __DIR__ . '/../includes/header.php';
?>

<main class="site-main" style="background-color: #0b132b; color: #e2e8f0; font-family: 'Inter', system-ui, -apple-system, sans-serif;">

  <!-- Visual Breadcrumb Navigation Bar -->
  <div class="breadcrumb-wrapper" style="background: #1c2541; padding: 14px 0; border-bottom: 1px solid rgba(255,255,255,0.08);">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
      <div class="breadcrumb-list" style="font-size: 0.88rem; color: #94a3b8;">
        <span class="breadcrumb-item"><a href="<?php echo SITE_URL; ?>" title="Home" style="color: #f59e0b; text-decoration: none;">Home</a></span>
        <span class="breadcrumb-separator" style="margin: 0 8px; color: #64748b;">/</span>
        <span class="breadcrumb-item"><a href="<?php echo SITE_URL; ?>#services" title="Services" style="color: #f59e0b; text-decoration: none;">Services</a></span>
        <span class="breadcrumb-separator" style="margin: 0 8px; color: #64748b;">/</span>
        <span class="breadcrumb-item active" style="color: #cbd5e1;">Draksharamam to Hyderabad Bike Transport</span>
      </div>
    </div>
  </div>

  <!-- Section 1: Hero Section with Lead Form -->
  <section class="hero-section" style="background: linear-gradient(135deg, #0b132b 0%, #1c2541 100%); padding: 65px 0; color: #ffffff;">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
      <div class="hero-grid" style="display: grid; grid-template-columns: 1.2fr 0.8fr; gap: 40px; align-items: center;">
        
        <!-- Hero Text Column -->
        <div class="hero-text">
          <span class="section-tag" style="background: rgba(245, 158, 11, 0.15); color: #f59e0b; border: 1px solid rgba(245, 158, 11, 0.4); padding: 6px 16px; border-radius: 20px; font-size: 0.85rem; font-weight: 700; text-transform: uppercase; display: inline-block; margin-bottom: 15px;">
            DRAKSHARAMAM TO HYDERABAD BIKE SHIPPING SPECIALISTS
          </span>
          <h1 style="font-size: 2.6rem; font-weight: 800; line-height: 1.25; margin-bottom: 20px; color: #ffffff;">
            Safe & Reliable <span style="color: #f59e0b;">Bike Transport from Draksharamam to Hyderabad</span>
          </h1>
          <p style="font-size: 1.1rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 25px;">
            Shipping your bike from Draksharamam to Hyderabad? Shree Ashirwad Packers and Movers provides professional door-to-door two-wheeler transport using covered container trucks, 7-layer cushioning, and full transit insurance.
          </p>

          <div style="display: flex; gap: 15px; flex-wrap: wrap; margin-bottom: 30px;">
            <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Now" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
              <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call Now: <?php echo SITE_PHONE; ?>
            </a>
            <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20a%20quote%20for%20bike%20transport%20from%20Draksharamam%20to%20Hyderabad." title="Chat on WhatsApp" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
              <i class="fab fa-whatsapp" style="margin-right: 8px;"></i> Chat on WhatsApp
            </a>
          </div>

          <div style="display: flex; gap: 20px; font-size: 0.9rem; color: #94a3b8;">
            <span><strong style="color: #f59e0b;">100% Insured</strong> Shipping</span>
            <span><strong style="color: #f59e0b;">7-Layer</strong> Protection</span>
            <span><strong style="color: #f59e0b;">Door-to-Door</strong> Service</span>
          </div>
        </div>

        <!-- Hero Lead Form Column -->
        <div class="hero-form-card" style="background: rgba(255, 255, 255, 0.05); backdrop-filter: blur(10px); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 16px; padding: 30px; box-shadow: 0 15px 35px rgba(0,0,0,0.4);">
          <h2 style="font-size: 1.4rem; color: #ffffff; margin-bottom: 8px; font-weight: 700; text-align: center;">Get Instant Hyderabad Quote</h2>
          <p style="font-size: 0.85rem; color: #94a3b8; text-align: center; margin-bottom: 20px;">Transparent pricing directly on WhatsApp in 2 minutes</p>

          <form action="#" method="POST" onsubmit="sendHeroWhatsAppLead(event, this);">
            <div style="margin-bottom: 14px;">
              <input type="text" name="name" class="form-control" placeholder="Your Full Name" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="margin-bottom: 14px;">
              <input type="tel" name="phone" class="form-control" placeholder="10-Digit Phone Number" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 10px; margin-bottom: 14px;">
              <input type="text" name="move_from" class="form-control" value="Draksharamam" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
              <input type="text" name="move_to" class="form-control" value="Hyderabad" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <button type="submit" style="width: 100%; padding: 14px; background: linear-gradient(135deg, #d32f2f 0%, #f59e0b 100%); color: #ffffff; border: none; border-radius: 50px; font-weight: 700; font-size: 1rem; cursor: pointer; transition: all 0.3s ease;">
              Get Free Estimate Now &rarr;
            </button>
          </form>
        </div>

      </div>
    </div>
  </section>

  <!-- Section 2: Trust Signals & Key Statistics -->
  <section style="padding: 45px 0; background: #1c2541; border-top: 1px solid rgba(255,255,255,0.05); border-bottom: 1px solid rgba(255,255,255,0.05);">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 25px; text-align: center;">
        
        <div style="padding: 20px; background: rgba(255,255,255,0.03); border-radius: 12px; border: 1px solid rgba(255,255,255,0.08);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; margin-bottom: 5px;">470+ km</div>
          <div style="font-size: 0.9rem; color: #94a3b8;">Draksharamam to Hyderabad Distance</div>
        </div>

        <div style="padding: 20px; background: rgba(255,255,255,0.03); border-radius: 12px; border: 1px solid rgba(255,255,255,0.08);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; margin-bottom: 5px;">2 - 3 Days</div>
          <div style="font-size: 0.9rem; color: #94a3b8;">Fast Transit Duration</div>
        </div>

        <div style="padding: 20px; background: rgba(255,255,255,0.03); border-radius: 12px; border: 1px solid rgba(255,255,255,0.08);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; margin-bottom: 5px;">7-Layer</div>
          <div style="font-size: 0.9rem; color: #94a3b8;">Multi-Layer Protective Wrapping</div>
        </div>

        <div style="padding: 20px; background: rgba(255,255,255,0.03); border-radius: 12px; border: 1px solid rgba(255,255,255,0.08);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; margin-bottom: 5px;">100%</div>
          <div style="font-size: 0.9rem; color: #94a3b8;">Transit Insurance Guarantee</div>
        </div>

      </div>
    </div>
  </section>

  <!-- Section 3: Cost Estimation Matrix -->
  <section style="padding: 60px 0; background: #0b132b;">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
      
      <div style="text-align: center; margin-bottom: 40px;">
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin-bottom: 12px;">
          Estimated Bike Transport Charges from Draksharamam to Hyderabad
        </h2>
        <p style="color: #94a3b8; font-size: 1rem; max-width: 700px; margin: 0 auto;">
          Clear, upfront pricing with no hidden charges. Choose the tier that matches your two-wheeler.
        </p>
      </div>

      <div style="overflow-x: auto; background: #1c2541; border-radius: 14px; border: 1px solid rgba(255,255,255,0.1); padding: 10px;">
        <table style="width: 100%; border-collapse: collapse; text-align: left; font-size: 0.95rem; color: #e2e8f0;">
          <thead>
            <tr style="background: rgba(245, 158, 11, 0.15); border-bottom: 2px solid rgba(245, 158, 11, 0.3);">
              <th style="padding: 16px; color: #f59e0b; font-weight: 700;">Vehicle Category</th>
              <th style="padding: 16px; color: #f59e0b; font-weight: 700;">Engine Capacity</th>
              <th style="padding: 16px; color: #f59e0b; font-weight: 700;">Packaging Type</th>
              <th style="padding: 16px; color: #f59e0b; font-weight: 700;">Estimated Rate</th>
            </tr>
          </thead>
          <tbody>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.05);">
              <td style="padding: 16px; font-weight: 600;">Standard Scooters / Commuter Bikes</td>
              <td style="padding: 16px;">100cc - 125cc</td>
              <td style="padding: 16px;">Bubble Wrap + Corrugated Sheet</td>
              <td style="padding: 16px; color: #f59e0b; font-weight: 700;">₹2,800 - ₹4,500</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.05); background: rgba(255,255,255,0.02);">
              <td style="padding: 16px; font-weight: 600;">Executive / Sports Motorcycles</td>
              <td style="padding: 16px;">150cc - 250cc</td>
              <td style="padding: 16px;">5-Layer Foam + Corner Guards</td>
              <td style="padding: 16px; color: #f59e0b; font-weight: 700;">₹3,800 - ₹5,800</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.05);">
              <td style="padding: 16px; font-weight: 600;">Cruisers / Royal Enfield / Adventure</td>
              <td style="padding: 16px;">250cc - 500cc</td>
              <td style="padding: 16px;">7-Layer Heavy Duty Wrap</td>
              <td style="padding: 16px; color: #f59e0b; font-weight: 700;">₹4,800 - ₹7,200</td>
            </tr>
            <tr>
              <td style="padding: 16px; font-weight: 600;">Superbikes & Premium Bikes</td>
              <td style="padding: 16px;">500cc+</td>
              <td style="padding: 16px;">Custom Wooden Crate Packaging</td>
              <td style="padding: 16px; color: #f59e0b; font-weight: 700;">₹7,500 - ₹11,500</td>
            </tr>
          </tbody>
        </table>
      </div>
      <p style="font-size: 0.85rem; color: #64748b; margin-top: 12px; text-align: center;">
        * Rates vary depending on pickup point in Draksharamam/Kakinada region and destination drop area in Hyderabad.
      </p>
    </div>
  </section>

  <!-- Section 4: Key Operational Features -->
  <section style="padding: 60px 0; background: #1c2541;">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
      
      <div style="text-align: center; margin-bottom: 45px;">
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin-bottom: 12px;">
          Why Choose Shree Ashirwad for Draksharamam to Hyderabad Shifting
        </h2>
        <p style="color: #94a3b8; font-size: 1rem; max-width: 700px; margin: 0 auto;">
          We handle your motorcycle with maximum care using enclosed carriers and multi-layer cushioning.
        </p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 30px;">
        
        <div style="background: rgba(255,255,255,0.03); border-radius: 12px; padding: 30px; border: 1px solid rgba(255,255,255,0.08);">
          <div style="width: 50px; height: 50px; border-radius: 10px; background: rgba(245, 158, 11, 0.15); color: #f59e0b; display: flex; align-items: center; justify-content: center; font-size: 1.4rem; margin-bottom: 20px;">
            <i class="fas fa-layer-group"></i>
          </div>
          <h3 style="font-size: 1.25rem; font-weight: 700; color: #ffffff; margin-bottom: 12px;">Multi-Layer Protective Wrap</h3>
          <p style="color: #94a3b8; font-size: 0.95rem; line-height: 1.7;">
            High-density bubble wraps and corrugated sheets shield fuel tanks, indicators, and side panels from scratches and dust during transit.
          </p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border-radius: 12px; padding: 30px; border: 1px solid rgba(255,255,255,0.08);">
          <div style="width: 50px; height: 50px; border-radius: 10px; background: rgba(245, 158, 11, 0.15); color: #f59e0b; display: flex; align-items: center; justify-content: center; font-size: 1.4rem; margin-bottom: 20px;">
            <i class="fas fa-truck-moving"></i>
          </div>
          <h3 style="font-size: 1.25rem; font-weight: 700; color: #ffffff; margin-bottom: 12px;">Enclosed Container Trucks</h3>
          <p style="color: #94a3b8; font-size: 0.95rem; line-height: 1.7;">
            Bikes are loaded into closed auto-carriers with safety locks and wheel harness belts to prevent shifting or movement on the highway.
          </p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border-radius: 12px; padding: 30px; border: 1px solid rgba(255,255,255,0.08);">
          <div style="width: 50px; height: 50px; border-radius: 10px; background: rgba(245, 158, 11, 0.15); color: #f59e0b; display: flex; align-items: center; justify-content: center; font-size: 1.4rem; margin-bottom: 20px;">
            <i class="fas fa-shield-alt"></i>
          </div>
          <h3 style="font-size: 1.25rem; font-weight: 700; color: #ffffff; margin-bottom: 12px;">Transit Insurance Coverage</h3>
          <p style="color: #94a3b8; font-size: 0.95rem; line-height: 1.7;">
            Comprehensive insurance options protect your bike against physical damage or accidents during transit along the NH-65 corridor.
          </p>
        </div>

      </div>
    </div>
  </section>

  <!-- Section 5: Step-by-Step Transport Workflow -->
  <section style="padding: 60px 0; background: #0b132b;">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
      
      <div style="text-align: center; margin-bottom: 45px;">
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin-bottom: 12px;">
          4-Step Draksharamam to Hyderabad Shipping Process
        </h2>
        <p style="color: #94a3b8; font-size: 1rem; max-width: 700px; margin: 0 auto;">
          Our seamless workflow ensures complete transparency and peace of mind.
        </p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); gap: 25px;">
        
        <div style="background: #1c2541; padding: 25px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.08); position: relative;">
          <div style="font-size: 2.5rem; font-weight: 900; color: rgba(245, 158, 11, 0.2); position: absolute; top: 15px; right: 20px;">01</div>
          <h3 style="font-size: 1.1rem; font-weight: 700; color: #f59e0b; margin-bottom: 10px;">Doorstep Inspection</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6;">
            Our team visits your address in Draksharamam/Kakinada area to conduct a pre-transit physical condition check and issue a receipt.
          </p>
        </div>

        <div style="background: #1c2541; padding: 25px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.08); position: relative;">
          <div style="font-size: 2.5rem; font-weight: 900; color: rgba(245, 158, 11, 0.2); position: absolute; top: 15px; right: 20px;">02</div>
          <h3 style="font-size: 1.1rem; font-weight: 700; color: #f59e0b; margin-bottom: 10px;">On-Site Multi-Wrap</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6;">
            Bike is securely wrapped with bubble cushioning, petrol is drained to safe limits, and vehicle is loaded onto closed transport.
          </p>
        </div>

        <div style="background: #1c2541; padding: 25px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.08); position: relative;">
          <div style="font-size: 2.5rem; font-weight: 900; color: rgba(245, 158, 11, 0.2); position: absolute; top: 15px; right: 20px;">03</div>
          <h3 style="font-size: 1.1rem; font-weight: 700; color: #f59e0b; margin-bottom: 10px;">Highway Transit</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6;">
            En-route tracking keeps you informed as the vehicle travels toward Telangana via the Vijayawada-Hyderabad Highway corridor.
          </p>
        </div>

        <div style="background: #1c2541; padding: 25px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.08); position: relative;">
          <div style="font-size: 2.5rem; font-weight: 900; color: rgba(245, 158, 11, 0.2); position: absolute; top: 15px; right: 20px;">04</div>
          <h3 style="font-size: 1.1rem; font-weight: 700; color: #f59e0b; margin-bottom: 10px;">Doorstep Delivery in Hyderabad</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6;">
            Delivered directly to your residence in Hitech City, Gachibowli, Kukatpally, Madhapur, or any location in Hyderabad.
          </p>
        </div>

      </div>
    </div>
  </section>

  <!-- Section 6: Comprehensive Coverage Areas -->
  <section style="padding: 60px 0; background: #1c2541;">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
      
      <div style="text-align: center; margin-bottom: 45px;">
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin-bottom: 12px;">
          Pickup & Delivery Network Coverage
        </h2>
        <p style="color: #94a3b8; font-size: 1rem;">
          Complete coverage from Draksharamam region to all major sectors of Hyderabad.
        </p>
      </div>

      <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 30px;">
        
        <div style="background: #0b132b; padding: 30px; border-radius: 14px; border: 1px solid rgba(255,255,255,0.08);">
          <h3 style="font-size: 1.3rem; font-weight: 700; color: #f59e0b; margin-bottom: 15px; display: flex; align-items: center; gap: 10px;">
            <i class="fas fa-map-marker-alt"></i> Draksharamam Pickup Region
          </h3>
          <ul style="list-style: none; padding: 0; margin: 0; color: #cbd5e1; font-size: 0.95rem; line-height: 2;">
            <li><i class="fas fa-check-circle" style="color: #10b981; margin-right: 8px;"></i> Draksharamam Town & Temple Zone</li>
            <li><i class="fas fa-check-circle" style="color: #10b981; margin-right: 8px;"></i> Ramachandrapuram & Kakinada Surroundings</li>
            <li><i class="fas fa-check-circle" style="color: #10b981; margin-right: 8px;"></i> Yanam & Konaseema Belt</li>
            <li><i class="fas fa-check-circle" style="color: #10b981; margin-right: 8px;"></i> Rajahmundry Highway Linking Hubs</li>
          </ul>
        </div>

        <div style="background: #0b132b; padding: 30px; border-radius: 14px; border: 1px solid rgba(255,255,255,0.08);">
          <h3 style="font-size: 1.3rem; font-weight: 700; color: #f59e0b; margin-bottom: 15px; display: flex; align-items: center; gap: 10px;">
            <i class="fas fa-map-marker-alt"></i> Hyderabad Delivery Locations
          </h3>
          <ul style="list-style: none; padding: 0; margin: 0; color: #cbd5e1; font-size: 0.95rem; line-height: 2;">
            <li><i class="fas fa-check-circle" style="color: #10b981; margin-right: 8px;"></i> IT Hubs (Hitech City, Gachibowli, Madhapur, Kondapur)</li>
            <li><i class="fas fa-check-circle" style="color: #10b981; margin-right: 8px;"></i> Residential Belts (Kukatpally, Miyapur, Nizampet, LB Nagar)</li>
            <li><i class="fas fa-check-circle" style="color: #10b981; margin-right: 8px;"></i> Central Hyderabad (Banjara Hills, Jubilee Hills, Begumpet)</li>
            <li><i class="fas fa-check-circle" style="color: #10b981; margin-right: 8px;"></i> Secunderabad & Uppal Industrial Belt</li>
          </ul>
        </div>

      </div>
    </div>
  </section>

  <!-- Section 7: Documentation Guide -->
  <section style="padding: 60px 0; background: #0b132b;">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
      
      <div style="text-align: center; margin-bottom: 40px;">
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin-bottom: 12px;">
          Documents Required for Bike Shifting
        </h2>
        <p style="color: #94a3b8; font-size: 1rem;">
          Keep photocopies of the following documents ready for smooth transit:
        </p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 20px;">
        
        <div style="background: #1c2541; padding: 20px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <div style="font-weight: 700; color: #ffffff; margin-bottom: 5px;">1. Vehicle RC</div>
          <div style="font-size: 0.88rem; color: #94a3b8;">Registration Certificate Copy</div>
        </div>

        <div style="background: #1c2541; padding: 20px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <div style="font-weight: 700; color: #ffffff; margin-bottom: 5px;">2. Bike Insurance</div>
          <div style="font-size: 0.88rem; color: #94a3b8;">Valid Insurance Certificate</div>
        </div>

        <div style="background: #1c2541; padding: 20px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <div style="font-weight: 700; color: #ffffff; margin-bottom: 5px;">3. Identity Proof</div>
          <div style="font-size: 0.88rem; color: #94a3b8;">Aadhaar or Driving License</div>
        </div>

        <div style="background: #1c2541; padding: 20px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <div style="font-weight: 700; color: #ffffff; margin-bottom: 5px;">4. Consignment Receipt</div>
          <div style="font-size: 0.88rem; color: #94a3b8;">Issued at time of pickup</div>
        </div>

      </div>
    </div>
  </section>

  <!-- Section 8: Preparation Tips -->
  <section style="padding: 60px 0; background: #1c2541;">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
      
      <div style="text-align: center; margin-bottom: 40px;">
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin-bottom: 12px;">
          Pre-Transport Tips for Vehicle Owners
        </h2>
        <p style="color: #94a3b8; font-size: 1rem;">
          Quick preparation checks to ensure a safe relocation experience.
        </p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 25px;">
        
        <div style="background: #0b132b; padding: 25px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.05);">
          <h4 style="color: #f59e0b; font-size: 1.1rem; margin-bottom: 8px;">Drain Fuel Tank</h4>
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6;">Keep minimal fuel (approx. 1 liter) for loading/unloading safety as per highway regulations.</p>
        </div>

        <div style="background: #0b132b; padding: 25px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.05);">
          <h4 style="color: #f59e0b; font-size: 1.1rem; margin-bottom: 8px;">Remove Extra Items</h4>
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6;">Detach helmets, keychains, mobile holders, and personal luggage from the bike before handover.</p>
        </div>

        <div style="background: #0b132b; padding: 25px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.05);">
          <h4 style="color: #f59e0b; font-size: 1.1rem; margin-bottom: 8px;">Photograph Your Bike</h4>
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6;">Take photos of the motorcycle from all sides prior to packing to record existing condition.</p>
        </div>

      </div>
    </div>
  </section>

  <!-- Section 9: Frequently Asked Questions (FAQ) -->
  <section style="padding: 60px 0; background: #0b132b;">
    <div class="container" style="max-width: 1000px; margin: 0 auto; padding: 0 20px;">
      
      <div style="text-align: center; margin-bottom: 45px;">
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin-bottom: 12px;">
          Frequently Asked Questions (FAQ)
        </h2>
        <p style="color: #94a3b8; font-size: 1rem;">
          Got questions? Here are clear answers about Draksharamam to Hyderabad bike transport.
        </p>
      </div>

      <div style="display: flex; flex-direction: column; gap: 20px;">
        
        <div style="background: #1c2541; padding: 24px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.08);">
          <h3 style="font-size: 1.15rem; font-weight: 700; color: #f59e0b; margin-bottom: 10px;">Q1: What is the cost of bike transport from Draksharamam to Hyderabad?</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.7; margin: 0;">
            The cost ranges from ₹2,800 for standard 100cc-125cc bikes up to ₹7,200 for Royal Enfield / cruisers, depending on packaging type and exact delivery location in Hyderabad.
          </p>
        </div>

        <div style="background: #1c2541; padding: 24px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.08);">
          <h3 style="font-size: 1.15rem; font-weight: 700; color: #f59e0b; margin-bottom: 10px;">Q2: How long does it take for delivery in Hyderabad?</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.7; margin: 0;">
            Transit usually takes 2 to 3 days via covered vehicle containers operating on the Vijayawada-Hyderabad route corridor.
          </p>
        </div>

        <div style="background: #1c2541; padding: 24px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.08);">
          <h3 style="font-size: 1.15rem; font-weight: 700; color: #f59e0b; margin-bottom: 10px;">Q3: Is pickup available directly from my house in Draksharamam?</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.7; margin: 0;">
            Yes, we provide doorstep pickup from Draksharamam town, Ramachandrapuram, and neighboring Konaseema locations.
          </p>
        </div>

        <div style="background: #1c2541; padding: 24px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.08);">
          <h3 style="font-size: 1.15rem; font-weight: 700; color: #f59e0b; margin-bottom: 10px;">Q4: Is my motorcycle covered by transit insurance?</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.7; margin: 0;">
            Yes, full transit insurance coverage is available to protect your vehicle against unforeseen road mishaps during transit.
          </p>
        </div>

        <div style="background: #1c2541; padding: 24px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.08);">
          <h3 style="font-size: 1.15rem; font-weight: 700; color: #f59e0b; margin-bottom: 10px;">Q5: What paperwork is required before pickup?</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.7; margin: 0;">
            Copies of the bike Registration Certificate (RC), active insurance policy, and owner's photo ID card (Aadhaar or Driving License).
          </p>
        </div>

      </div>
    </div>
  </section>

  <!-- Section 10: Call-to-Action (CTA) Footer Banner -->
  <section style="padding: 60px 0; background: linear-gradient(135deg, #1c2541 0%, #0b132b 100%); border-top: 1px solid rgba(255,255,255,0.1);">
    <div class="container" style="max-width: 1000px; margin: 0 auto; padding: 0 20px; text-align: center;">
      
      <h2 style="font-size: 2.3rem; font-weight: 800; color: #ffffff; margin-bottom: 15px;">
        Book Your Bike Transport from Draksharamam to Hyderabad Today
      </h2>
      <p style="color: #cbd5e1; font-size: 1.1rem; max-width: 700px; margin: 0 auto 30px;">
        Get an instant free quote on WhatsApp and experience safe, hassle-free two-wheeler shipping.
      </p>

      <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap;">
        <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Us Now" style="padding: 15px 32px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1.05rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
          <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call Now: <?php echo SITE_PHONE; ?>
        </a>
        <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20a%20quote%20for%20bike%20transport%20from%20Draksharamam%20to%20Hyderabad." title="WhatsApp Chat" target="_blank" style="padding: 15px 32px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1.05rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
          <i class="fab fa-whatsapp" style="margin-right: 8px;"></i> WhatsApp Us
        </a>
      </div>

    </div>
  </section>

</main>

<!-- Section 11: Schema Markup (FAQPage JSON-LD) -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "What is the cost of bike transport from Draksharamam to Hyderabad?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "The cost ranges from ₹2,800 for standard 100cc-125cc bikes up to ₹7,200 for Royal Enfield / cruisers, depending on packaging type and exact delivery location in Hyderabad."
      }
    },
    {
      "@type": "Question",
      "name": "How long does it take for delivery in Hyderabad?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Transit usually takes 2 to 3 days via covered vehicle containers operating on the Vijayawada-Hyderabad route corridor."
      }
    },
    {
      "@type": "Question",
      "name": "Is pickup available directly from my house in Draksharamam?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, we provide doorstep pickup from Draksharamam town, Ramachandrapuram, and neighboring Konaseema locations."
      }
    },
    {
      "@type": "Question",
      "name": "Is my motorcycle covered by transit insurance?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, full transit insurance coverage is available to protect your vehicle against unforeseen road mishaps during transit."
      }
    },
    {
      "@type": "Question",
      "name": "What paperwork is required before pickup?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Copies of the bike Registration Certificate (RC), active insurance policy, and owner's photo ID card (Aadhaar or Driving License)."
      }
    }
  ]
}
</script>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
