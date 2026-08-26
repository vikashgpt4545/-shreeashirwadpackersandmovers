<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "Bike Transport from Kerala to Bangalore | Two-Wheeler Shifting Charges";
$page_desc = "Safe and insured bike transport services from Kerala to Bangalore. Doorstep pickup across Kochi, TVM, Kozhikode, Thrissur & Palakkad, 7-layer wrapping, closed container trucks, and door delivery in Bangalore.";
$page_keywords = "bike transport from kerala to bangalore, kerala to bangalore bike parcel service, two wheeler shifting kerala to bangalore, bike transport charges kerala to bangalore";
$canonical_url = "https://shreeashirwadpackersandmovers.com/pages/bike-transport-from-kerala-to-bangalore.php";

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
        <span class="breadcrumb-item active" style="color: #cbd5e1;">Kerala to Bangalore Bike Transport</span>
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
            KERALA TO BANGALORE BIKE RELOCATION SPECIALISTS
          </span>
          <h1 style="font-size: 2.6rem; font-weight: 800; line-height: 1.25; margin-bottom: 20px; color: #ffffff;">
            Professional <span style="color: #f59e0b;">Bike Transport from Kerala to Bangalore</span>
          </h1>
          <p style="font-size: 1.1rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 25px;">
            Relocating your motorcycle or scooter from Kerala to Bangalore? Shree Ashirwad Packers and Movers provides door-to-door two-wheeler transport with 7-layer bubble wrap packaging, covered container shipping, and full transit insurance coverage.
          </p>

          <div style="display: flex; gap: 15px; flex-wrap: wrap; margin-bottom: 30px;">
            <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Now" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
              <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call Now: <?php echo SITE_PHONE; ?>
            </a>
            <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20a%20quote%20for%20bike%20transport%20from%20Kerala%20to%20Bangalore." title="Chat on WhatsApp" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
              <i class="fab fa-whatsapp" style="margin-right: 8px;"></i> Chat on WhatsApp
            </a>
          </div>

          <div style="display: flex; gap: 20px; font-size: 0.9rem; color: #94a3b8;">
            <span><strong style="color: #f59e0b;">100% Insured</strong> Shipping</span>
            <span><strong style="color: #f59e0b;">7-Layer</strong> Protection</span>
            <span><strong style="color: #f59e0b;">Door-to-Door</strong> Delivery</span>
          </div>
        </div>

        <!-- Hero Lead Form Column -->
        <div class="hero-form-card" style="background: rgba(255, 255, 255, 0.05); backdrop-filter: blur(10px); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 16px; padding: 30px; box-shadow: 0 15px 35px rgba(0,0,0,0.4);">
          <h2 style="font-size: 1.4rem; color: #ffffff; margin-bottom: 8px; font-weight: 700; text-align: center;">Get Instant Bangalore Quote</h2>
          <p style="font-size: 0.85rem; color: #94a3b8; text-align: center; margin-bottom: 20px;">Transparent pricing directly on WhatsApp in 2 minutes</p>

          <form action="#" method="POST" onsubmit="sendHeroWhatsAppLead(event, this);">
            <div style="margin-bottom: 14px;">
              <input type="text" name="name" class="form-control" placeholder="Your Full Name" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="margin-bottom: 14px;">
              <input type="tel" name="phone" class="form-control" placeholder="10-Digit Phone Number" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 10px; margin-bottom: 14px;">
              <input type="text" name="move_from" class="form-control" value="Kerala" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
              <input type="text" name="move_to" class="form-control" value="Bangalore" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
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
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; margin-bottom: 5px;">550 - 750 km</div>
          <div style="font-size: 0.9rem; color: #94a3b8;">Kerala to Bangalore Transit Route</div>
        </div>

        <div style="padding: 20px; background: rgba(255,255,255,0.03); border-radius: 12px; border: 1px solid rgba(255,255,255,0.08);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; margin-bottom: 5px;">2 - 3 Days</div>
          <div style="font-size: 0.9rem; color: #94a3b8;">Transit Time via NH-544 & NH-44</div>
        </div>

        <div style="padding: 20px; background: rgba(255,255,255,0.03); border-radius: 12px; border: 1px solid rgba(255,255,255,0.08);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; margin-bottom: 5px;">7-Layer</div>
          <div style="font-size: 0.9rem; color: #94a3b8;">Heavy Duty Protective Packaging</div>
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
          Estimated Bike Transport Charges from Kerala to Bangalore
        </h2>
        <p style="color: #94a3b8; font-size: 1rem; max-width: 700px; margin: 0 auto;">
          Clear pricing estimate based on motorcycle category and packaging grade.
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
              <td style="padding: 16px; color: #f59e0b; font-weight: 700;">₹3,800 - ₹5,000</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.05); background: rgba(255,255,255,0.02);">
              <td style="padding: 16px; font-weight: 600;">Executive / Sports Motorcycles</td>
              <td style="padding: 16px;">150cc - 250cc</td>
              <td style="padding: 16px;">5-Layer Foam + Guard Padding</td>
              <td style="padding: 16px; color: #f59e0b; font-weight: 700;">₹4,800 - ₹6,500</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.05);">
              <td style="padding: 16px; font-weight: 600;">Cruisers / Royal Enfield / Adventure</td>
              <td style="padding: 16px;">250cc - 500cc</td>
              <td style="padding: 16px;">7-Layer Heavy Duty Wrap</td>
              <td style="padding: 16px; color: #f59e0b; font-weight: 700;">₹5,800 - ₹8,000</td>
            </tr>
            <tr>
              <td style="padding: 16px; font-weight: 600;">Superbikes & Premium Motorcycles</td>
              <td style="padding: 16px;">500cc+</td>
              <td style="padding: 16px;">Custom Wooden Crate Packaging</td>
              <td style="padding: 16px; color: #f59e0b; font-weight: 700;">₹8,500 - ₹12,000</td>
            </tr>
          </tbody>
        </table>
      </div>
      <p style="font-size: 0.85rem; color: #64748b; margin-top: 12px; text-align: center;">
        * Charges vary depending on origin city in Kerala (Kochi, TVM, Kozhikode, Thrissur) and delivery address in Bangalore.
      </p>
    </div>
  </section>

  <!-- Section 4: Key Operational Features -->
  <section style="padding: 60px 0; background: #1c2541;">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
      
      <div style="text-align: center; margin-bottom: 45px;">
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin-bottom: 12px;">
          Why Choose Shree Ashirwad for Kerala to Bangalore Relocation
        </h2>
        <p style="color: #94a3b8; font-size: 1rem; max-width: 700px; margin: 0 auto;">
          We provide dedicated inter-state two-wheeler transportation with complete safety guarantees.
        </p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 30px;">
        
        <div style="background: rgba(255,255,255,0.03); border-radius: 12px; padding: 30px; border: 1px solid rgba(255,255,255,0.08);">
          <div style="width: 50px; height: 50px; border-radius: 10px; background: rgba(245, 158, 11, 0.15); color: #f59e0b; display: flex; align-items: center; justify-content: center; font-size: 1.4rem; margin-bottom: 20px;">
            <i class="fas fa-layer-group"></i>
          </div>
          <h3 style="font-size: 1.25rem; font-weight: 700; color: #ffffff; margin-bottom: 12px;">7-Layer Multi-Packaging</h3>
          <p style="color: #94a3b8; font-size: 0.95rem; line-height: 1.7;">
            Heavy-duty bubble wrap, foam sheets, corrugated cardboard, and stretch wrap safeguard mirror mounts, paintwork, and indicators.
          </p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border-radius: 12px; padding: 30px; border: 1px solid rgba(255,255,255,0.08);">
          <div style="width: 50px; height: 50px; border-radius: 10px; background: rgba(245, 158, 11, 0.15); color: #f59e0b; display: flex; align-items: center; justify-content: center; font-size: 1.4rem; margin-bottom: 20px;">
            <i class="fas fa-truck-moving"></i>
          </div>
          <h3 style="font-size: 1.25rem; font-weight: 700; color: #ffffff; margin-bottom: 12px;">Covered Container Carriers</h3>
          <p style="color: #94a3b8; font-size: 0.95rem; line-height: 1.7;">
            Vehicles are transported in enclosed trucks with wheel chocks and safety harness straps to eliminate movement during transit.
          </p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border-radius: 12px; padding: 30px; border: 1px solid rgba(255,255,255,0.08);">
          <div style="width: 50px; height: 50px; border-radius: 10px; background: rgba(245, 158, 11, 0.15); color: #f59e0b; display: flex; align-items: center; justify-content: center; font-size: 1.4rem; margin-bottom: 20px;">
            <i class="fas fa-shield-alt"></i>
          </div>
          <h3 style="font-size: 1.25rem; font-weight: 700; color: #ffffff; margin-bottom: 12px;">Transit Insurance Cover</h3>
          <p style="color: #94a3b8; font-size: 0.95rem; line-height: 1.7;">
            Comprehensive insurance covers your bike against damage or accident risks during long-distance highway movement.
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
          4-Step Relocation Process
        </h2>
        <p style="color: #94a3b8; font-size: 1rem; max-width: 700px; margin: 0 auto;">
          Seamless door pickup in Kerala to door delivery in Bangalore.
        </p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); gap: 25px;">
        
        <div style="background: #1c2541; padding: 25px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.08); position: relative;">
          <div style="font-size: 2.5rem; font-weight: 900; color: rgba(245, 158, 11, 0.2); position: absolute; top: 15px; right: 20px;">01</div>
          <h3 style="font-size: 1.1rem; font-weight: 700; color: #f59e0b; margin-bottom: 10px;">Kerala Door Pickup</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6;">
            Doorstep pickup in Kochi, Thiruvananthapuram, Kozhikode, Thrissur, Palakkad, Kollam, or Kottayam.
          </p>
        </div>

        <div style="background: #1c2541; padding: 25px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.08); position: relative;">
          <div style="font-size: 2.5rem; font-weight: 900; color: rgba(245, 158, 11, 0.2); position: absolute; top: 15px; right: 20px;">02</div>
          <h3 style="font-size: 1.1rem; font-weight: 700; color: #f59e0b; margin-bottom: 10px;">Professional Packing</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6;">
            On-site multi-layer bubble wrapping, mirror removal/padding, and fuel level adjustment.
          </p>
        </div>

        <div style="background: #1c2541; padding: 25px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.08); position: relative;">
          <div style="font-size: 2.5rem; font-weight: 900; color: rgba(245, 158, 11, 0.2); position: absolute; top: 15px; right: 20px;">03</div>
          <h3 style="font-size: 1.1rem; font-weight: 700; color: #f59e0b; margin-bottom: 10px;">Interstate Highway Transit</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6;">
            Direct interstate transit along Salem - Coimbatore - Palakkad - Kochi / TVM highway corridors.
          </p>
        </div>

        <div style="background: #1c2541; padding: 25px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.08); position: relative;">
          <div style="font-size: 2.5rem; font-weight: 900; color: rgba(245, 158, 11, 0.2); position: absolute; top: 15px; right: 20px;">04</div>
          <h3 style="font-size: 1.1rem; font-weight: 700; color: #f59e0b; margin-bottom: 10px;">Bangalore Door Delivery</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6;">
            Safe delivery to Koramangala, Indiranagar, Whitefield, HSR Layout, Electronic City, or Marathahalli.
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
          Widespread service coverage across all major Kerala cities and Bangalore hubs.
        </p>
      </div>

      <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 30px;">
        
        <div style="background: #0b132b; padding: 30px; border-radius: 14px; border: 1px solid rgba(255,255,255,0.08);">
          <h3 style="font-size: 1.3rem; font-weight: 700; color: #f59e0b; margin-bottom: 15px; display: flex; align-items: center; gap: 10px;">
            <i class="fas fa-map-marker-alt"></i> Kerala Pickup Hubs
          </h3>
          <ul style="list-style: none; padding: 0; margin: 0; color: #cbd5e1; font-size: 0.95rem; line-height: 2;">
            <li><i class="fas fa-check-circle" style="color: #10b981; margin-right: 8px;"></i> Kochi, Ernakulam, Aluva, Kakkanad</li>
            <li><i class="fas fa-check-circle" style="color: #10b981; margin-right: 8px;"></i> Thiruvananthapuram, Kazhakoottam, Attingal</li>
            <li><i class="fas fa-check-circle" style="color: #10b981; margin-right: 8px;"></i> Kozhikode, Calicut City, Feroke, Vadakara</li>
            <li><i class="fas fa-check-circle" style="color: #10b981; margin-right: 8px;"></i> Thrissur, Palakkad, Kollam, Kottayam, Kannur</li>
          </ul>
        </div>

        <div style="background: #0b132b; padding: 30px; border-radius: 14px; border: 1px solid rgba(255,255,255,0.08);">
          <h3 style="font-size: 1.3rem; font-weight: 700; color: #f59e0b; margin-bottom: 15px; display: flex; align-items: center; gap: 10px;">
            <i class="fas fa-map-marker-alt"></i> Bangalore Delivery Sectors
          </h3>
          <ul style="list-style: none; padding: 0; margin: 0; color: #cbd5e1; font-size: 0.95rem; line-height: 2;">
            <li><i class="fas fa-check-circle" style="color: #10b981; margin-right: 8px;"></i> Koramangala, HSR Layout, BTM Layout, Jayanagar</li>
            <li><i class="fas fa-check-circle" style="color: #10b981; margin-right: 8px;"></i> Indiranagar, Domlur, Old Airport Road, MG Road</li>
            <li><i class="fas fa-check-circle" style="color: #10b981; margin-right: 8px;"></i> Whitefield, Marathahalli, Bellandur, Sarjapur</li>
            <li><i class="fas fa-check-circle" style="color: #10b981; margin-right: 8px;"></i> Electronic City, Hebbal, Yelahanka, Banaswadi</li>
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
          Required Transport Documentation
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
          <div style="font-size: 0.88rem; color: #94a3b8;">Valid Insurance Policy Copy</div>
        </div>

        <div style="background: #1c2541; padding: 20px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <div style="font-weight: 700; color: #ffffff; margin-bottom: 5px;">3. Photo ID Proof</div>
          <div style="font-size: 0.88rem; color: #94a3b8;">Aadhaar Card or Driving License</div>
        </div>

        <div style="background: #1c2541; padding: 20px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <div style="font-weight: 700; color: #ffffff; margin-bottom: 5px;">4. Consignment Bilty</div>
          <div style="font-size: 0.88rem; color: #94a3b8;">Issued on-site by Shree Ashirwad</div>
        </div>

      </div>
    </div>
  </section>

  <!-- Section 8: Preparation Tips -->
  <section style="padding: 60px 0; background: #1c2541;">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
      
      <div style="text-align: center; margin-bottom: 40px;">
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin-bottom: 12px;">
          Bike Transport Preparation Tips
        </h2>
        <p style="color: #94a3b8; font-size: 1rem;">
          Recommended steps before handing over your bike for transit.
        </p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 25px;">
        
        <div style="background: #0b132b; padding: 25px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.05);">
          <h4 style="color: #f59e0b; font-size: 1.1rem; margin-bottom: 8px;">Check Fuel Tank</h4>
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6;">Maintain less than 1 liter of petrol in the fuel tank to comply with highway transit safety norms.</p>
        </div>

        <div style="background: #0b132b; padding: 25px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.05);">
          <h4 style="color: #f59e0b; font-size: 1.1rem; margin-bottom: 8px;">Detach Loose Accessories</h4>
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6;">Remove luggage boxes, phone mounts, and helmet holders to prevent damage during loading.</p>
        </div>

        <div style="background: #0b132b; padding: 25px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.05);">
          <h4 style="color: #f59e0b; font-size: 1.1rem; margin-bottom: 8px;">Document Condition</h4>
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6;">Take clear photos and note odometer reading with our pickup staff prior to wrapping.</p>
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
          Everything you need to know about bike transport from Kerala to Bangalore.
        </p>
      </div>

      <div style="display: flex; flex-direction: column; gap: 20px;">
        
        <div style="background: #1c2541; padding: 24px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.08);">
          <h3 style="font-size: 1.15rem; font-weight: 700; color: #f59e0b; margin-bottom: 10px;">Q1: How much does bike transport from Kerala to Bangalore cost?</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.7; margin: 0;">
            The transport charges range between ₹3,800 and ₹8,000 depending on vehicle engine size, pickup city in Kerala (Kochi, TVM, Kozhikode, etc.), and packaging level.
          </p>
        </div>

        <div style="background: #1c2541; padding: 24px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.08);">
          <h3 style="font-size: 1.15rem; font-weight: 700; color: #f59e0b; margin-bottom: 10px;">Q2: What is the transit time for shipping a bike from Kerala to Bangalore?</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.7; margin: 0;">
            Transit usually takes 2 to 3 days via covered container trucks running along the Salem - Coimbatore - Palakkad Highway.
          </p>
        </div>

        <div style="background: #1c2541; padding: 24px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.08);">
          <h3 style="font-size: 1.15rem; font-weight: 700; color: #f59e0b; margin-bottom: 10px;">Q3: Which cities in Kerala are covered for doorstep pickup?</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.7; margin: 0;">
            We offer doorstep pickup in major hubs including Kochi, Thiruvananthapuram, Kozhikode, Thrissur, Palakkad, Kollam, Kottayam, and Kannur.
          </p>
        </div>

        <div style="background: #1c2541; padding: 24px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.08);">
          <h3 style="font-size: 1.15rem; font-weight: 700; color: #f59e0b; margin-bottom: 10px;">Q4: Is transit insurance included in the quotation?</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.7; margin: 0;">
            Yes, full transit insurance coverage is included to guard your vehicle against unexpected highway incidents.
          </p>
        </div>

        <div style="background: #1c2541; padding: 24px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.08);">
          <h3 style="font-size: 1.15rem; font-weight: 700; color: #f59e0b; margin-bottom: 10px;">Q5: What documents do I need to hand over at pickup?</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.7; margin: 0;">
            Photocopies of your bike Registration Certificate (RC), valid insurance policy, and owner photo ID (Aadhaar or Driving License).
          </p>
        </div>

      </div>
    </div>
  </section>

  <!-- Section 10: Call-to-Action (CTA) Footer Banner -->
  <section style="padding: 60px 0; background: linear-gradient(135deg, #1c2541 0%, #0b132b 100%); border-top: 1px solid rgba(255,255,255,0.1);">
    <div class="container" style="max-width: 1000px; margin: 0 auto; padding: 0 20px; text-align: center;">
      
      <h2 style="font-size: 2.3rem; font-weight: 800; color: #ffffff; margin-bottom: 15px;">
        Book Your Bike Transport from Kerala to Bangalore Today
      </h2>
      <p style="color: #cbd5e1; font-size: 1.1rem; max-width: 700px; margin: 0 auto 30px;">
        Get an instant free quote on WhatsApp and experience safe, professional two-wheeler shipping.
      </p>

      <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap;">
        <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Us Now" style="padding: 15px 32px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1.05rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
          <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call Now: <?php echo SITE_PHONE; ?>
        </a>
        <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20a%20quote%20for%20bike%20transport%20from%20Kerala%20to%20Bangalore." title="WhatsApp Chat" target="_blank" style="padding: 15px 32px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1.05rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
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
      "name": "How much does bike transport from Kerala to Bangalore cost?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "The transport charges range between ₹3,800 and ₹8,000 depending on vehicle engine size, pickup city in Kerala (Kochi, TVM, Kozhikode, etc.), and packaging level."
      }
    },
    {
      "@type": "Question",
      "name": "What is the transit time for shipping a bike from Kerala to Bangalore?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Transit usually takes 2 to 3 days via covered container trucks running along the Salem - Coimbatore - Palakkad Highway."
      }
    },
    {
      "@type": "Question",
      "name": "Which cities in Kerala are covered for doorstep pickup?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "We offer doorstep pickup in major hubs including Kochi, Thiruvananthapuram, Kozhikode, Thrissur, Palakkad, Kollam, Kottayam, and Kannur."
      }
    },
    {
      "@type": "Question",
      "name": "Is transit insurance included in the quotation?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, full transit insurance coverage is included to guard your vehicle against unexpected highway incidents."
      }
    },
    {
      "@type": "Question",
      "name": "What documents do I need to hand over at pickup?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Photocopies of your bike Registration Certificate (RC), valid insurance policy, and owner photo ID (Aadhaar or Driving License)."
      }
    }
  ]
}
</script>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>

