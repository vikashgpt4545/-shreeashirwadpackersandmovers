<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "Bike Transport from Rajahmundry to Hyderabad | Two-Wheeler Shifting Charges";
$page_desc = "Safe and insured bike transport services from Rajahmundry to Hyderabad. Doorstep pickup across Danavaipeta, Prakash Nagar, Morampudi, 7-layer bubble wrapping, enclosed container trucks, and door delivery in Hyderabad within 24-48 hours.";
$page_keywords = "bike transport from rajahmundry to hyderabad, rajahmundry to hyderabad bike parcel service, two wheeler shifting rajahmundry to hyderabad, bike transport charges rajahmundry to hyderabad";
$canonical_url = "https://shreeashirwadpackersandmovers.com/pages/bike-transport-from-rajahmundry-to-hyderabad.php";

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
        <span class="breadcrumb-item active" style="color: #cbd5e1;">Rajahmundry to Hyderabad Bike Transport</span>
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
            EAST GODAVARI TO TELANGANA LOGISTICS
          </span>
          <h1 style="font-size: 2.6rem; font-weight: 800; line-height: 1.25; margin-bottom: 20px; color: #ffffff;">
            Professional <span style="color: #f59e0b;">Bike Transport from Rajahmundry to Hyderabad</span>
          </h1>
          <p style="font-size: 1.1rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 25px;">
            Relocating your bike from Rajahmundry to Hyderabad (~425 km via NH16 / NH65)? Shree Ashirwad Packers and Movers offers express 24 to 48-hour motorcycle shipping with 7-layer safety wrapping, enclosed container vehicles, and 100% all-risk transit insurance.
          </p>

          <div style="display: flex; gap: 15px; flex-wrap: wrap; margin-bottom: 30px;">
            <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Now" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
              <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call Now: <?php echo SITE_PHONE; ?>
            </a>
            <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20a%20quote%20for%20bike%20transport%20from%20Rajahmundry%20to%20Hyderabad." title="Chat on WhatsApp" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
              <i class="fab fa-whatsapp" style="margin-right: 8px;"></i> Chat on WhatsApp
            </a>
          </div>

          <div style="display: flex; gap: 20px; font-size: 0.9rem; color: #94a3b8;">
            <span><strong style="color: #f59e0b;">24 - 48 Hours</strong> Express Delivery</span>
            <span><strong style="color: #f59e0b;">7-Layer</strong> Bubble Wrapping</span>
            <span><strong style="color: #f59e0b;">100% Insured</strong> Shifting</span>
          </div>
        </div>

        <!-- Hero Lead Form Column -->
        <div class="hero-form-card" style="background: rgba(255, 255, 255, 0.05); backdrop-filter: blur(10px); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 16px; padding: 30px; box-shadow: 0 15px 35px rgba(0,0,0,0.4);">
          <h2 style="font-size: 1.4rem; color: #ffffff; margin-bottom: 8px; font-weight: 700; text-align: center;">Get Instant Hyderabad Shifting Quote</h2>
          <p style="font-size: 0.85rem; color: #94a3b8; text-align: center; margin-bottom: 20px;">Transparent pricing directly on WhatsApp in 2 minutes</p>

          <form action="#" method="POST" onsubmit="sendHeroWhatsAppLead(event, this);">
            <div style="margin-bottom: 14px;">
              <input type="text" name="name" class="form-control" placeholder="Your Full Name" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="margin-bottom: 14px;">
              <input type="tel" name="phone" class="form-control" placeholder="10-Digit Phone Number" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 10px; margin-bottom: 14px;">
              <input type="text" name="move_from" class="form-control" value="Rajahmundry" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
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

  <!-- Section 2: Key Operational Metrics -->
  <section style="padding: 45px 0; background: #1c2541; border-top: 1px solid rgba(255,255,255,0.05); border-bottom: 1px solid rgba(255,255,255,0.05);">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 25px; text-align: center;">
        
        <div style="padding: 20px; background: rgba(255,255,255,0.03); border-radius: 12px; border: 1px solid rgba(255,255,255,0.08);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; margin-bottom: 5px;">425 km</div>
          <div style="font-size: 0.9rem; color: #94a3b8;">NH16 / NH65 Corridor</div>
        </div>

        <div style="padding: 20px; background: rgba(255,255,255,0.03); border-radius: 12px; border: 1px solid rgba(255,255,255,0.08);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; margin-bottom: 5px;">24-48 Hrs</div>
          <div style="font-size: 0.9rem; color: #94a3b8;">Express Delivery Window</div>
        </div>

        <div style="padding: 20px; background: rgba(255,255,255,0.03); border-radius: 12px; border: 1px solid rgba(255,255,255,0.08);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; margin-bottom: 5px;">7-Layer</div>
          <div style="font-size: 0.9rem; color: #94a3b8;">Bubble Cushion Protection</div>
        </div>

        <div style="padding: 20px; background: rgba(255,255,255,0.03); border-radius: 12px; border: 1px solid rgba(255,255,255,0.08);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; margin-bottom: 5px;">100%</div>
          <div style="font-size: 0.9rem; color: #94a3b8;">All-Risk Transit Insurance</div>
        </div>

      </div>
    </div>
  </section>

  <!-- Section 3: Cost Estimation Matrix -->
  <section style="padding: 60px 0; background: #0b132b;">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
      
      <div style="text-align: center; margin-bottom: 40px;">
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin-bottom: 12px;">
          Estimated Bike Transport Charges from Rajahmundry to Hyderabad
        </h2>
        <p style="color: #94a3b8; font-size: 1rem; max-width: 700px; margin: 0 auto;">
          Transparent tariff breakdown based on motorcycle category and packaging requirements.
        </p>
      </div>

      <div style="overflow-x: auto; background: #1c2541; border-radius: 14px; border: 1px solid rgba(255,255,255,0.1); padding: 10px;">
        <table style="width: 100%; border-collapse: collapse; text-align: left; font-size: 0.95rem; color: #e2e8f0;">
          <thead>
            <tr style="background: rgba(245, 158, 11, 0.15); border-bottom: 2px solid rgba(245, 158, 11, 0.3);">
              <th style="padding: 16px; color: #f59e0b; font-weight: 700;">Vehicle Category</th>
              <th style="padding: 16px; color: #f59e0b; font-weight: 700;">Engine Capacity</th>
              <th style="padding: 16px; color: #f59e0b; font-weight: 700;">Packaging Level</th>
              <th style="padding: 16px; color: #f59e0b; font-weight: 700;">Estimated Rate</th>
            </tr>
          </thead>
          <tbody>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.05);">
              <td style="padding: 16px; font-weight: 600;">Scooters / Standard Commuter Bikes</td>
              <td style="padding: 16px;">100cc - 125cc</td>
              <td style="padding: 16px;">Bubble Wrap + Corrugated Cardboard</td>
              <td style="padding: 16px; color: #f59e0b; font-weight: 700;">₹3,500 - ₹4,200</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.05); background: rgba(255,255,255,0.02);">
              <td style="padding: 16px; font-weight: 600;">Executive / Sports Motorcycles</td>
              <td style="padding: 16px;">150cc - 250cc</td>
              <td style="padding: 16px;">5-Layer Foam + Guard Cushioning</td>
              <td style="padding: 16px; color: #f59e0b; font-weight: 700;">₹4,200 - ₹5,200</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.05);">
              <td style="padding: 16px; font-weight: 600;">Cruisers / Royal Enfield / Adventure</td>
              <td style="padding: 16px;">250cc - 500cc</td>
              <td style="padding: 16px;">7-Layer Heavy Duty Multi-Wrap</td>
              <td style="padding: 16px; color: #f59e0b; font-weight: 700;">₹5,200 - ₹6,200</td>
            </tr>
            <tr>
              <td style="padding: 16px; font-weight: 600;">Superbikes & Premium Motorcycles</td>
              <td style="padding: 16px;">500cc+</td>
              <td style="padding: 16px;">Custom Wooden Crate Enclosure</td>
              <td style="padding: 16px; color: #f59e0b; font-weight: 700;">₹7,000 - ₹9,500</td>
            </tr>
          </tbody>
        </table>
      </div>
      <p style="font-size: 0.85rem; color: #64748b; margin-top: 12px; text-align: center;">
        * Pricing depends on exact pickup location in Rajahmundry (Danavaipeta, Prakash Nagar) and destination in Hyderabad (Hitech City, Gachibowli, Kukatpally).
      </p>
    </div>
  </section>

  <!-- Section 4: Operational Strengths -->
  <section style="padding: 60px 0; background: #1c2541;">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
      
      <div style="text-align: center; margin-bottom: 45px;">
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin-bottom: 12px;">
          Key Shifting Benefits
        </h2>
        <p style="color: #94a3b8; font-size: 1rem; max-width: 700px; margin: 0 auto;">
          Premium long-distance two-wheeler logistics connecting East Godavari to Hyderabad.
        </p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 30px;">
        
        <div style="background: rgba(255,255,255,0.03); border-radius: 12px; padding: 30px; border: 1px solid rgba(255,255,255,0.08);">
          <div style="width: 50px; height: 50px; border-radius: 10px; background: rgba(245, 158, 11, 0.15); color: #f59e0b; display: flex; align-items: center; justify-content: center; font-size: 1.4rem; margin-bottom: 20px;">
            <i class="fas fa-box"></i>
          </div>
          <h3 style="font-size: 1.25rem; font-weight: 700; color: #ffffff; margin-bottom: 12px;">7-Layer Protection</h3>
          <p style="color: #94a3b8; font-size: 0.95rem; line-height: 1.7;">
            Multi-layer bubble wrapping, foam edging, and corrugated sheets shield fuel tanks and chrome components from scratches.
          </p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border-radius: 12px; padding: 30px; border: 1px solid rgba(255,255,255,0.08);">
          <div style="width: 50px; height: 50px; border-radius: 10px; background: rgba(245, 158, 11, 0.15); color: #f59e0b; display: flex; align-items: center; justify-content: center; font-size: 1.4rem; margin-bottom: 20px;">
            <i class="fas fa-truck-moving"></i>
          </div>
          <h3 style="font-size: 1.25rem; font-weight: 700; color: #ffffff; margin-bottom: 12px;">Enclosed Containers</h3>
          <p style="color: #94a3b8; font-size: 0.95rem; line-height: 1.7;">
            Weatherproof enclosed container trucks prevent weather exposure along the 425 km highway transit.
          </p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border-radius: 12px; padding: 30px; border: 1px solid rgba(255,255,255,0.08);">
          <div style="width: 50px; height: 50px; border-radius: 10px; background: rgba(245, 158, 11, 0.15); color: #f59e0b; display: flex; align-items: center; justify-content: center; font-size: 1.4rem; margin-bottom: 20px;">
            <i class="fas fa-shield-alt"></i>
          </div>
          <h3 style="font-size: 1.25rem; font-weight: 700; color: #ffffff; margin-bottom: 12px;">Full Insurance Cover</h3>
          <p style="color: #94a3b8; font-size: 0.95rem; line-height: 1.7;">
            Complete all-risk insurance coverage to protect your vehicle against transit hazards.
          </p>
        </div>

      </div>
    </div>
  </section>

  <!-- Section 5: Step-by-Step Relocation Workflow -->
  <section style="padding: 60px 0; background: #0b132b;">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
      
      <div style="text-align: center; margin-bottom: 45px;">
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin-bottom: 12px;">
          4-Step Relocation Workflow
        </h2>
        <p style="color: #94a3b8; font-size: 1rem; max-width: 700px; margin: 0 auto;">
          From Rajahmundry pickup to Hyderabad delivery.
        </p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); gap: 25px;">
        
        <div style="background: #1c2541; padding: 25px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.08); position: relative;">
          <div style="font-size: 2.5rem; font-weight: 900; color: rgba(245, 158, 11, 0.2); position: absolute; top: 15px; right: 20px;">01</div>
          <h3 style="font-size: 1.1rem; font-weight: 700; color: #f59e0b; margin-bottom: 10px;">Rajahmundry Pickup</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6;">
            Doorstep pickup across Danavaipeta, Prakash Nagar, Morampudi, or Devi Chowk.
          </p>
        </div>

        <div style="background: #1c2541; padding: 25px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.08); position: relative;">
          <div style="font-size: 2.5rem; font-weight: 900; color: rgba(245, 158, 11, 0.2); position: absolute; top: 15px; right: 20px;">02</div>
          <h3 style="font-size: 1.1rem; font-weight: 700; color: #f59e0b; margin-bottom: 10px;">7-Layer Wrapping</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6;">
            Multi-layer bubble wrap padding and mirror wrapping before loading.
          </p>
        </div>

        <div style="background: #1c2541; padding: 25px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.08); position: relative;">
          <div style="font-size: 2.5rem; font-weight: 900; color: rgba(245, 158, 11, 0.2); position: absolute; top: 15px; right: 20px;">03</div>
          <h3 style="font-size: 1.1rem; font-weight: 700; color: #f59e0b; margin-bottom: 10px;">Interstate Highway Transit</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6;">
            Direct 425 km container transit via Vijayawada Highway corridor.
          </p>
        </div>

        <div style="background: #1c2541; padding: 25px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.08); position: relative;">
          <div style="font-size: 2.5rem; font-weight: 900; color: rgba(245, 158, 11, 0.2); position: absolute; top: 15px; right: 20px;">04</div>
          <h3 style="font-size: 1.1rem; font-weight: 700; color: #f59e0b; margin-bottom: 10px;">Hyderabad Delivery</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6;">
            Safe doorstep delivery to Hitech City, Gachibowli, Kukatpally, or Secunderabad.
          </p>
        </div>

      </div>
    </div>
  </section>

  <!-- Section 6: Network Coverage -->
  <section style="padding: 60px 0; background: #1c2541;">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
      
      <div style="text-align: center; margin-bottom: 45px;">
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin-bottom: 12px;">
          Network Coverage Areas
        </h2>
        <p style="color: #94a3b8; font-size: 1rem;">
          Widespread local pickup in Rajahmundry and door delivery across Hyderabad metropolitan area.
        </p>
      </div>

      <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 30px;">
        
        <div style="background: #0b132b; padding: 30px; border-radius: 14px; border: 1px solid rgba(255,255,255,0.08);">
          <h3 style="font-size: 1.3rem; font-weight: 700; color: #f59e0b; margin-bottom: 15px; display: flex; align-items: center; gap: 10px;">
            <i class="fas fa-map-marker-alt"></i> Rajahmundry Pickup Zones
          </h3>
          <ul style="list-style: none; padding: 0; margin: 0; color: #cbd5e1; font-size: 0.95rem; line-height: 2;">
            <li><i class="fas fa-check-circle" style="color: #10b981; margin-right: 8px;"></i> Danavaipeta, Prakash Nagar, Morampudi</li>
            <li><i class="fas fa-check-circle" style="color: #10b981; margin-right: 8px;"></i> Devi Chowk, Kambala Cheruvu, Lalitha Nagar</li>
            <li><i class="fas fa-check-circle" style="color: #10b981; margin-right: 8px;"></i> Stadium Road, Dowleswaram, Rajanagaram Highway Area</li>
            <li><i class="fas fa-check-circle" style="color: #10b981; margin-right: 8px;"></i> JN Road, Syamala Nagar, Diwancheruvu</li>
          </ul>
        </div>

        <div style="background: #0b132b; padding: 30px; border-radius: 14px; border: 1px solid rgba(255,255,255,0.08);">
          <h3 style="font-size: 1.3rem; font-weight: 700; color: #f59e0b; margin-bottom: 15px; display: flex; align-items: center; gap: 10px;">
            <i class="fas fa-map-marker-alt"></i> Hyderabad Delivery Zones
          </h3>
          <ul style="list-style: none; padding: 0; margin: 0; color: #cbd5e1; font-size: 0.95rem; line-height: 2;">
            <li><i class="fas fa-check-circle" style="color: #10b981; margin-right: 8px;"></i> Hitech City, Gachibowli, Madhapur, Kondapur</li>
            <li><i class="fas fa-check-circle" style="color: #10b981; margin-right: 8px;"></i> Kukatpally, Miyapur, Ameerpet, SR Nagar</li>
            <li><i class="fas fa-check-circle" style="color: #10b981; margin-right: 8px;"></i> Banjara Hills, Jubilee Hills, Begumpet, Himayatnagar</li>
            <li><i class="fas fa-check-circle" style="color: #10b981; margin-right: 8px;"></i> Secunderabad, Uppal, LB Nagar, Kompally</li>
          </ul>
        </div>

      </div>
    </div>
  </section>

  <!-- Section 7: Required Documentation -->
  <section style="padding: 60px 0; background: #0b132b;">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
      
      <div style="text-align: center; margin-bottom: 40px;">
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin-bottom: 12px;">
          Required Documentation
        </h2>
        <p style="color: #94a3b8; font-size: 1rem;">
          Keep photocopies of these documents ready at pickup:
        </p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 20px;">
        
        <div style="background: #1c2541; padding: 20px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <div style="font-weight: 700; color: #ffffff; margin-bottom: 5px;">1. Vehicle RC</div>
          <div style="font-size: 0.88rem; color: #94a3b8;">Registration Certificate Copy</div>
        </div>

        <div style="background: #1c2541; padding: 20px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <div style="font-weight: 700; color: #ffffff; margin-bottom: 5px;">2. Bike Insurance</div>
          <div style="font-size: 0.88rem; color: #94a3b8;">Active Policy Copy</div>
        </div>

        <div style="background: #1c2541; padding: 20px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <div style="font-weight: 700; color: #ffffff; margin-bottom: 5px;">3. Identity Proof</div>
          <div style="font-size: 0.88rem; color: #94a3b8;">Aadhaar Card or DL</div>
        </div>

        <div style="background: #1c2541; padding: 20px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <div style="font-weight: 700; color: #ffffff; margin-bottom: 5px;">4. Consignment Note</div>
          <div style="font-size: 0.88rem; color: #94a3b8;">Issued on-site by Shree Ashirwad</div>
        </div>

      </div>
    </div>
  </section>

  <!-- Section 8: Preparation Advice -->
  <section style="padding: 60px 0; background: #1c2541;">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
      
      <div style="text-align: center; margin-bottom: 40px;">
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin-bottom: 12px;">
          Pre-Transit Advice
        </h2>
        <p style="color: #94a3b8; font-size: 1rem;">
          Recommended steps before handing your bike over for transport.
        </p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 25px;">
        
        <div style="background: #0b132b; padding: 25px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.05);">
          <h4 style="color: #f59e0b; font-size: 1.1rem; margin-bottom: 8px;">Minimal Fuel</h4>
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6;">Keep less than 1 liter petrol in the tank for transport safety compliance.</p>
        </div>

        <div style="background: #0b132b; padding: 25px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.05);">
          <h4 style="color: #f59e0b; font-size: 1.1rem; margin-bottom: 8px;">Remove Personal Belongings</h4>
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6;">Remove helmets, keychains, and detached phone holders prior to packing.</p>
        </div>

        <div style="background: #0b132b; padding: 25px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.05);">
          <h4 style="color: #f59e0b; font-size: 1.1rem; margin-bottom: 8px;">Photographic Evidence</h4>
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6;">Take photos of your motorcycle from all angles before loading onto the vehicle.</p>
        </div>

      </div>
    </div>
  </section>

  <!-- Section 9: FAQ -->
  <section style="padding: 60px 0; background: #0b132b;">
    <div class="container" style="max-width: 1000px; margin: 0 auto; padding: 0 20px;">
      
      <div style="text-align: center; margin-bottom: 45px;">
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin-bottom: 12px;">
          Frequently Asked Questions (FAQ)
        </h2>
        <p style="color: #94a3b8; font-size: 1rem;">
          Answers to common questions regarding bike transport from Rajahmundry to Hyderabad.
        </p>
      </div>

      <div style="display: flex; flex-direction: column; gap: 20px;">
        
        <div style="background: #1c2541; padding: 24px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.08);">
          <h3 style="font-size: 1.15rem; font-weight: 700; color: #f59e0b; margin-bottom: 10px;">Q1: What are the bike transport charges from Rajahmundry to Hyderabad?</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.7; margin: 0;">
            Bike transport charges range from ₹3,500 to ₹6,200 depending on motorcycle model, engine size, and chosen packaging level.
          </p>
        </div>

        <div style="background: #1c2541; padding: 24px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.08);">
          <h3 style="font-size: 1.15rem; font-weight: 700; color: #f59e0b; margin-bottom: 10px;">Q2: How long does delivery take from Rajahmundry to Hyderabad?</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.7; margin: 0;">
            Standard delivery timeline is 24 to 48 hours via covered container trucks along the highway corridor.
          </p>
        </div>

        <div style="background: #1c2541; padding: 24px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.08);">
          <h3 style="font-size: 1.15rem; font-weight: 700; color: #f59e0b; margin-bottom: 10px;">Q3: Do you provide doorstep pickup in Rajahmundry?</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.7; margin: 0;">
            Yes, doorstep pickup is available across Danavaipeta, Prakash Nagar, Morampudi, Devi Chowk, and surrounding localities in Rajahmundry.
          </p>
        </div>

        <div style="background: #1c2541; padding: 24px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.08);">
          <h3 style="font-size: 1.15rem; font-weight: 700; color: #f59e0b; margin-bottom: 10px;">Q4: Is transit insurance provided?</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.7; margin: 0;">
            Yes, complete all-risk transit insurance is included to safeguard your motorcycle against unforeseen road hazards.
          </p>
        </div>

        <div style="background: #1c2541; padding: 24px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.08);">
          <h3 style="font-size: 1.15rem; font-weight: 700; color: #f59e0b; margin-bottom: 10px;">Q5: Can I get doorstep delivery in Hitech City or Gachibowli?</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.7; margin: 0;">
            Yes, doorstep delivery is available to all IT hubs, gated communities, and residential areas across Hyderabad.
          </p>
        </div>

        <div style="background: #1c2541; padding: 24px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.08);">
          <h3 style="font-size: 1.15rem; font-weight: 700; color: #f59e0b; margin-bottom: 10px;">Q6: How is the bike secured inside the transport truck?</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.7; margin: 0;">
            Bikes are anchored using 4-point nylon ratchet tie-downs and protected with 7-layer shock-absorbing wrapping material.
          </p>
        </div>

        <div style="background: #1c2541; padding: 24px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.08);">
          <h3 style="font-size: 1.15rem; font-weight: 700; color: #f59e0b; margin-bottom: 10px;">Q7: Is an IBA-approved GST bill provided for claim reimbursement?</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.7; margin: 0;">
            Yes, 18% GST tax invoices along with Consignment Notes (LR) are issued for corporate and defense claim submissions.
          </p>
        </div>

        <div style="background: #1c2541; padding: 24px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.08);">
          <h3 style="font-size: 1.15rem; font-weight: 700; color: #f59e0b; margin-bottom: 10px;">Q8: How much petrol should be kept in the fuel tank?</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.7; margin: 0;">
            Please leave minimal fuel (under 1 liter) in the fuel tank for highway transport safety compliance.
          </p>
        </div>

        <div style="background: #1c2541; padding: 24px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.08);">
          <h3 style="font-size: 1.15rem; font-weight: 700; color: #f59e0b; margin-bottom: 10px;">Q9: Are custom wooden crates available for premium motorcycles?</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.7; margin: 0;">
            Yes, heavy-duty wooden box packing is available for sports bikes and luxury cruisers upon request.
          </p>
        </div>

        <div style="background: #1c2541; padding: 24px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.08);">
          <h3 style="font-size: 1.15rem; font-weight: 700; color: #f59e0b; margin-bottom: 10px;">Q10: What documents are required at the time of pickup?</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.7; margin: 0;">
            Photocopies of your Bike Registration Certificate (RC), valid insurance copy, pollution certificate (PUC), and Govt ID proof are required.
          </p>
        </div>

      </div>
    </div>
  </section>

  <!-- Section 10: Call-to-Action Footer -->
  <section style="padding: 60px 0; background: linear-gradient(135deg, #1c2541 0%, #0b132b 100%); border-top: 1px solid rgba(255,255,255,0.1);">
    <div class="container" style="max-width: 1000px; margin: 0 auto; padding: 0 20px; text-align: center;">
      
      <h2 style="font-size: 2.3rem; font-weight: 800; color: #ffffff; margin-bottom: 15px;">
        Book Your Bike Transport from Rajahmundry to Hyderabad Today
      </h2>
      <p style="color: #cbd5e1; font-size: 1.1rem; max-width: 700px; margin: 0 auto 30px;">
        Get an instant free quote on WhatsApp and schedule safe 24-48 hour bike shifting.
      </p>

      <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap;">
        <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Us Now" style="padding: 15px 32px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1.05rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
          <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call Now: <?php echo SITE_PHONE; ?>
        </a>
        <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20a%20quote%20for%20bike%20transport%20from%20Rajahmundry%20to%20Hyderabad." title="WhatsApp Chat" target="_blank" style="padding: 15px 32px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1.05rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
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
      "name": "What are the bike transport charges from Rajahmundry to Hyderabad?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Bike transport charges range from ₹3,500 to ₹6,200 depending on motorcycle model, engine size, and chosen packaging level."
      }
    },
    {
      "@type": "Question",
      "name": "How long does delivery take from Rajahmundry to Hyderabad?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Standard delivery timeline is 24 to 48 hours via covered container trucks along the highway corridor."
      }
    },
    {
      "@type": "Question",
      "name": "Do you provide doorstep pickup in Rajahmundry?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, doorstep pickup is available across Danavaipeta, Prakash Nagar, Morampudi, Devi Chowk, and surrounding localities in Rajahmundry."
      }
    },
    {
      "@type": "Question",
      "name": "Is transit insurance provided?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, complete all-risk transit insurance is included to safeguard your motorcycle against unforeseen road hazards."
      }
    },
    {
      "@type": "Question",
      "name": "Can I get doorstep delivery in Hitech City or Gachibowli?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, doorstep delivery is available to all IT hubs, gated communities, and residential areas across Hyderabad."
      }
    },
    {
      "@type": "Question",
      "name": "How is the bike secured inside the transport truck?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Bikes are anchored using 4-point nylon ratchet tie-downs and protected with 7-layer shock-absorbing wrapping material."
      }
    },
    {
      "@type": "Question",
      "name": "Is an IBA-approved GST bill provided for claim reimbursement?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, 18% GST tax invoices along with Consignment Notes (LR) are issued for corporate and defense claim submissions."
      }
    },
    {
      "@type": "Question",
      "name": "How much petrol should be kept in the fuel tank?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Please leave minimal fuel (under 1 liter) in the fuel tank for highway transport safety compliance."
      }
    },
    {
      "@type": "Question",
      "name": "Are custom wooden crates available for premium motorcycles?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, heavy-duty wooden box packing is available for sports bikes and luxury cruisers upon request."
      }
    },
    {
      "@type": "Question",
      "name": "What documents are required at the time of pickup?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Photocopies of your Bike Registration Certificate (RC), valid insurance copy, pollution certificate (PUC), and Govt ID proof are required."
      }
    }
  ]
}
</script>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>

