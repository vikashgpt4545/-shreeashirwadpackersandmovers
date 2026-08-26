<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "Bike Transport from Mumbai to Chandigarh | Safe Two-Wheeler Shifting";
$page_desc = "Safe, insured & fast bike transport from Mumbai to Chandigarh & Tricity. Get transparent rate cards, 7-layer bubble wrapping, transit insurance, and instant WhatsApp estimates. Complete delivery across Sector 17, Sector 35, Mohali & Panchkula.";
$page_keywords = "bike transport from mumbai to chandigarh, bike packers mumbai to chandigarh, motorcycle shipping mumbai chandigarh, two wheeler parcel mumbai to chandigarh, bike courier charges mumbai chandigarh, shree ashirwad packers";
$canonical_url = "https://shreeashirwadpackersandmovers.com/pages/bike-transport-from-mumbai-to-chandigarh.php";

require_once __DIR__ . '/../includes/header.php';
?>

<main class="site-main">

  <!-- Visual Breadcrumb Navigation Bar -->
  <div class="breadcrumb-wrapper">
    <div class="container">
      <div class="breadcrumb-list">
        <span class="breadcrumb-item"><a href="<?php echo SITE_URL; ?>" title="Home">Home</a></span>
        <span class="breadcrumb-separator">/</span>
        <span class="breadcrumb-item"><a href="<?php echo SITE_URL; ?>/#services" title="Services">Services</a></span>
        <span class="breadcrumb-separator">/</span>
        <span class="breadcrumb-item active">Bike Transport Mumbai to Chandigarh</span>
      </div>
    </div>
  </div>

  <!-- 1. Hero Section with Lead Form -->
  <section class="hero-section" style="background: linear-gradient(135deg, #0b132b 0%, #1c2541 100%); padding: 60px 0; color: #ffffff;">
    <div class="container">
      <div class="hero-grid" style="display: grid; grid-template-columns: 1.2fr 0.8fr; gap: 40px; align-items: center;">
        
        <!-- Hero Text Column -->
        <div class="hero-text">
          <span class="section-tag" style="background: rgba(245, 158, 11, 0.15); color: #f59e0b; border: 1px solid rgba(245, 158, 11, 0.4); padding: 6px 16px; border-radius: 20px; font-size: 0.85rem; font-weight: 700; text-transform: uppercase; display: inline-block; margin-bottom: 15px;">
            MUMBAI TO CHANDIGARH BIKE SHIFTING SPECIALISTS
          </span>
          <h1 style="font-size: 2.5rem; font-weight: 800; line-height: 1.2; margin-bottom: 20px; color: #ffffff;">
            Reliable <span style="color: #f59e0b;">Bike Transport from Mumbai to Chandigarh</span>
          </h1>
          <p style="font-size: 1.1rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 25px;">
            Planning long-distance motorcycle shipping from Mumbai to Chandigarh or the Tricity region (Mohali & Panchkula)? Shree Ashirwad Packers and Movers provides damage-free, door-to-door bike transport with 7-layer bubble wrapping, covered container trucks, and 100% transit insurance. Direct door pickup from all Mumbai, Thane & Navi Mumbai locations.
          </p>

          <div style="display: flex; gap: 15px; flex-wrap: wrap; margin-bottom: 30px;">
            <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Now" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
              <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call Now: <?php echo SITE_PHONE; ?>
            </a>
            <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20a%20quote%20for%20Bike%20Transport%20from%20Mumbai%20to%20Chandigarh." title="Chat on WhatsApp" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
              <i class="fab fa-whatsapp" style="margin-right: 8px;"></i> Chat on WhatsApp
            </a>
          </div>

          <div style="display: flex; gap: 20px; font-size: 0.9rem; color: #94a3b8; flex-wrap: wrap;">
            <span><i class="fas fa-shield-alt" style="color: #f59e0b; margin-right: 5px;"></i> <strong>100% Insured</strong> Transport</span>
            <span><i class="fas fa-box-open" style="color: #f59e0b; margin-right: 5px;"></i> <strong>7-Layer</strong> Multi-Wrap</span>
            <span><i class="fas fa-truck-loading" style="color: #f59e0b; margin-right: 5px;"></i> <strong>Door-to-Door</strong> Delivery</span>
          </div>
        </div>

        <!-- Hero Lead Form Column -->
        <div class="hero-form-card" style="background: rgba(255, 255, 255, 0.05); backdrop-filter: blur(10px); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 16px; padding: 30px; box-shadow: 0 15px 35px rgba(0,0,0,0.4);">
          <h2 style="font-size: 1.4rem; color: #ffffff; margin-bottom: 8px; font-weight: 700; text-align: center;">Get Instant Rate Estimate</h2>
          <p style="font-size: 0.85rem; color: #94a3b8; text-align: center; margin-bottom: 20px;">Receive transparent cost estimation on WhatsApp in 2 minutes</p>

          <form action="#" method="POST" onsubmit="sendHeroWhatsAppLead(event, this);">
            <div style="margin-bottom: 14px;">
              <input type="text" name="name" class="form-control" placeholder="Your Full Name" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="margin-bottom: 14px;">
              <input type="tel" name="phone" class="form-control" placeholder="10-Digit Phone Number" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 10px; margin-bottom: 14px;">
              <input type="text" name="move_from" class="form-control" value="Mumbai" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
              <input type="text" name="move_to" class="form-control" value="Chandigarh" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <button type="submit" style="width: 100%; padding: 14px; background: linear-gradient(135deg, #d32f2f 0%, #f59e0b 100%); color: #ffffff; border: none; border-radius: 50px; font-weight: 700; font-size: 1rem; cursor: pointer;">
              Get Instant Estimate Now &rarr;
            </button>
          </form>
        </div>

      </div>
    </div>
  </section>

  <!-- 2. Trust Indicators & Key Metrics Section -->
  <section style="background: #0b132b; padding: 40px 0; border-bottom: 1px solid rgba(255,255,255,0.08);">
    <div class="container">
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 20px; text-align: center;">
        <div style="padding: 20px; background: rgba(255,255,255,0.03); border-radius: 12px; border: 1px solid rgba(255,255,255,0.05);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; margin-bottom: 5px;">1,600+ KM</div>
          <div style="font-size: 0.9rem; color: #cbd5e1;">Mumbai - Chandigarh Distance</div>
        </div>
        <div style="padding: 20px; background: rgba(255,255,255,0.03); border-radius: 12px; border: 1px solid rgba(255,255,255,0.05);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #10b981; margin-bottom: 5px;">4 - 6 Days</div>
          <div style="font-size: 0.9rem; color: #cbd5e1;">Express Highway Transit</div>
        </div>
        <div style="padding: 20px; background: rgba(255,255,255,0.03); border-radius: 12px; border: 1px solid rgba(255,255,255,0.05);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #3b82f6; margin-bottom: 5px;">8,600+</div>
          <div style="font-size: 0.9rem; color: #cbd5e1;">Bikes Delivered</div>
        </div>
        <div style="padding: 20px; background: rgba(255,255,255,0.03); border-radius: 12px; border: 1px solid rgba(255,255,255,0.05);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f43f5e; margin-bottom: 5px;">4.9 / 5.0</div>
          <div style="font-size: 0.9rem; color: #cbd5e1;">Customer Satisfaction Rating</div>
        </div>
      </div>
    </div>
  </section>

  <!-- 3. Service Overview & Modes -->
  <section style="background: #0f172a; padding: 70px 0; color: #f8fafc;">
    <div class="container">
      <div style="max-width: 900px; margin: 0 auto; text-align: center; margin-bottom: 50px;">
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin-bottom: 15px;">
          Motorcycle Transport Solutions: <span style="color: #f59e0b;">Mumbai to Chandigarh</span>
        </h2>
        <p style="font-size: 1.05rem; color: #94a3b8; line-height: 1.8;">
          Spanning across 1,600 km through Maharashtra, Gujarat, Rajasthan, Haryana, and Punjab. We provide door-to-door closed container truck transport and Indian Railways parcel assistance.
        </p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 30px;">
        <div style="background: #1e293b; border-radius: 16px; padding: 35px; border: 1.5px solid #f59e0b; display: flex; flex-direction: column; justify-content: space-between;">
          <div>
            <div style="display: inline-block; padding: 8px 16px; background: rgba(245, 158, 11, 0.15); color: #f59e0b; border-radius: 20px; font-weight: 700; font-size: 0.85rem; margin-bottom: 15px;">
              RECOMMENDED METHOD
            </div>
            <h3 style="font-size: 1.5rem; color: #ffffff; font-weight: 700; margin-bottom: 15px;">Door-to-Door Closed Container Truck</h3>
            <p style="font-size: 0.95rem; color: #cbd5e1; line-height: 1.7; margin-bottom: 20px;">
              Ideal for long-distance relocations. We collect your motorcycle from your doorstep in Mumbai, wrap it with 7 layers of protective material, transport it inside closed vehicle carriers, and deliver it directly to Chandigarh / Mohali / Panchkula.
            </p>
            <ul style="list-style: none; padding: 0; margin: 0 0 25px 0; font-size: 0.9rem; color: #cbd5e1;">
              <li style="margin-bottom: 10px;"><i class="fas fa-check-circle" style="color: #10b981; margin-right: 8px;"></i> Doorstep Pickup across Mumbai, Thane & Navi Mumbai</li>
              <li style="margin-bottom: 10px;"><i class="fas fa-check-circle" style="color: #10b981; margin-right: 8px;"></i> 7-Layer Heavy Duty Bubble & Foam Protection</li>
              <li style="margin-bottom: 10px;"><i class="fas fa-check-circle" style="color: #10b981; margin-right: 8px;"></i> All Risk Transit Insurance Included</li>
              <li style="margin-bottom: 10px;"><i class="fas fa-check-circle" style="color: #10b981; margin-right: 8px;"></i> Delivery within 4 to 6 Days</li>
            </ul>
          </div>
          <div style="border-top: 1px solid rgba(255,255,255,0.1); padding-top: 20px; text-align: center;">
            <span style="font-size: 0.9rem; color: #94a3b8;">Door-to-Door Charges starting from</span>
            <div style="font-size: 1.8rem; font-weight: 800; color: #10b981;">₹4,200 - ₹7,800</div>
          </div>
        </div>

        <div style="background: #1e293b; border-radius: 16px; padding: 35px; border: 1px solid rgba(255,255,255,0.1); display: flex; flex-direction: column; justify-content: space-between;">
          <div>
            <div style="display: inline-block; padding: 8px 16px; background: rgba(59, 130, 246, 0.15); color: #3b82f6; border-radius: 20px; font-weight: 700; font-size: 0.85rem; margin-bottom: 15px;">
              STATION-TO-STATION
            </div>
            <h3 style="font-size: 1.5rem; color: #ffffff; font-weight: 700; margin-bottom: 15px;">Railway Parcel Assistance</h3>
            <p style="font-size: 0.95rem; color: #cbd5e1; line-height: 1.7; margin-bottom: 20px;">
              Station packing and parcel booking support from Bandra Terminus (BDTS) / Mumbai Central (MMCT) to Chandigarh Junction (CDG) / Ambala Cantt (UMB) station.
            </p>
            <ul style="list-style: none; padding: 0; margin: 0 0 25px 0; font-size: 0.9rem; color: #cbd5e1;">
              <li style="margin-bottom: 10px;"><i class="fas fa-check-circle" style="color: #10b981; margin-right: 8px;"></i> Economical long distance freight</li>
              <li style="margin-bottom: 10px;"><i class="fas fa-check-circle" style="color: #10b981; margin-right: 8px;"></i> On-station packing & loading assistance</li>
              <li style="margin-bottom: 10px;"><i class="fas fa-exclamation-triangle" style="color: #f59e0b; margin-right: 8px;"></i> Petrol tank must be completely empty</li>
              <li style="margin-bottom: 10px;"><i class="fas fa-exclamation-triangle" style="color: #f59e0b; margin-right: 8px;"></i> Self-pickup at Chandigarh railway terminal</li>
            </ul>
          </div>
          <div style="border-top: 1px solid rgba(255,255,255,0.1); padding-top: 20px; text-align: center;">
            <span style="font-size: 0.9rem; color: #94a3b8;">Railway Charges starting from</span>
            <div style="font-size: 1.8rem; font-weight: 800; color: #f59e0b;">₹3,200 - ₹5,000</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 4. Tariff Table -->
  <section style="background: #0b132b; padding: 70px 0; color: #ffffff;">
    <div class="container">
      <div style="max-width: 800px; margin: 0 auto; text-align: center; margin-bottom: 40px;">
        <h2 style="font-size: 2.2rem; font-weight: 800; margin-bottom: 15px;">
          Estimated <span style="color: #f59e0b;">Mumbai to Chandigarh Bike Transport Rates</span>
        </h2>
        <p style="font-size: 1rem; color: #cbd5e1;">
          Clear and transparent pricing structure based on two-wheeler engine displacement and packaging choices.
        </p>
      </div>

      <div style="overflow-x: auto; max-width: 900px; margin: 0 auto;">
        <table style="width: 100%; border-collapse: collapse; text-align: left; background: #1c2541; border-radius: 12px; overflow: hidden; border: 1px solid rgba(255,255,255,0.1);">
          <thead>
            <tr style="background: #1e293b; color: #f59e0b; font-size: 1rem; border-bottom: 2px solid rgba(245,158,11,0.3);">
              <th style="padding: 18px 20px;">Bike Category / Engine CC</th>
              <th style="padding: 18px 20px;">Railway Parcel (Approx.)</th>
              <th style="padding: 18px 20px;">Door-to-Door Truck (Standard)</th>
              <th style="padding: 18px 20px;">Premium Wooden Crate</th>
            </tr>
          </thead>
          <tbody style="color: #cbd5e1; font-size: 0.95rem;">
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.05);">
              <td style="padding: 16px 20px; font-weight: 600; color: #fff;">Standard Scooters (Activa, Jupiter 100-125cc)</td>
              <td style="padding: 16px 20px;">₹3,200 - ₹3,600</td>
              <td style="padding: 16px 20px; color: #10b981; font-weight: 700;">₹4,200 - ₹5,000</td>
              <td style="padding: 16px 20px;">₹5,500 - ₹6,200</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.05); background: rgba(255,255,255,0.02);">
              <td style="padding: 16px 20px; font-weight: 600; color: #fff;">Commuter Bikes (Splendor, Shine 100-150cc)</td>
              <td style="padding: 16px 20px;">₹3,500 - ₹4,000</td>
              <td style="padding: 16px 20px; color: #10b981; font-weight: 700;">₹4,800 - ₹5,800</td>
              <td style="padding: 16px 20px;">₹6,200 - ₹7,000</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.05);">
              <td style="padding: 16px 20px; font-weight: 600; color: #fff;">Sports Bikes (Apache, Pulsar 160-250cc)</td>
              <td style="padding: 16px 20px;">₹4,000 - ₹4,600</td>
              <td style="padding: 16px 20px; color: #10b981; font-weight: 700;">₹5,500 - ₹6,600</td>
              <td style="padding: 16px 20px;">₹7,000 - ₹8,000</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.05); background: rgba(255,255,255,0.02);">
              <td style="padding: 16px 20px; font-weight: 600; color: #fff;">Cruiser Bikes (Royal Enfield Bullet 350-500cc)</td>
              <td style="padding: 16px 20px;">₹4,500 - ₹5,200</td>
              <td style="padding: 16px 20px; color: #10b981; font-weight: 700;">₹6,500 - ₹7,800</td>
              <td style="padding: 16px 20px;">₹8,200 - ₹9,500</td>
            </tr>
            <tr>
              <td style="padding: 16px 20px; font-weight: 600; color: #fff;">Premium Superbikes (>500cc)</td>
              <td style="padding: 16px 20px;">N/A</td>
              <td style="padding: 16px 20px; color: #10b981; font-weight: 700;">₹8,500 - ₹11,500</td>
              <td style="padding: 16px 20px;">₹11,000 - ₹14,500</td>
            </tr>
          </tbody>
        </table>
      </div>
      <p style="text-align: center; font-size: 0.85rem; color: #94a3b8; margin-top: 15px;">
        * Note: Rates are estimated averages. Final quote depends on pickup locality in Mumbai, delivery area in Chandigarh/Tricity, GST, and insurance choices.
      </p>
    </div>
  </section>

  <!-- 5. Step-by-Step Relocation Process -->
  <section style="background: #0f172a; padding: 70px 0; color: #ffffff;">
    <div class="container">
      <div style="max-width: 800px; margin: 0 auto; text-align: center; margin-bottom: 50px;">
        <h2 style="font-size: 2.2rem; font-weight: 800; margin-bottom: 15px;">
          Our 5-Step <span style="color: #f59e0b;">Safety Workflow</span>
        </h2>
        <p style="font-size: 1rem; color: #94a3b8;">How we guarantee damage-free motorcycle delivery from Mumbai to Chandigarh</p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 25px;">
        <div style="background: #1e293b; padding: 30px; border-radius: 12px; border-top: 4px solid #f59e0b;">
          <div style="font-size: 1.8rem; font-weight: 800; color: #f59e0b; margin-bottom: 10px;">01</div>
          <h3 style="font-size: 1.2rem; font-weight: 700; margin-bottom: 10px;">Doorstep Pickup</h3>
          <p style="font-size: 0.9rem; color: #cbd5e1; line-height: 1.6;">Our crew arrives at your home in Mumbai/Thane/Navi Mumbai to perform initial inspection and paperwork.</p>
        </div>
        <div style="background: #1e293b; padding: 30px; border-radius: 12px; border-top: 4px solid #10b981;">
          <div style="font-size: 1.8rem; font-weight: 800; color: #10b981; margin-bottom: 10px;">02</div>
          <h3 style="font-size: 1.2rem; font-weight: 700; margin-bottom: 10px;">7-Layer Multi-Wrap</h3>
          <p style="font-size: 0.9rem; color: #cbd5e1; line-height: 1.6;">High-density bubble wrap, foam guards, corrugated sheets, and stretch film safeguard paint and bodywork.</p>
        </div>
        <div style="background: #1e293b; padding: 30px; border-radius: 12px; border-top: 4px solid #3b82f6;">
          <div style="font-size: 1.8rem; font-weight: 800; color: #3b82f6; margin-bottom: 10px;">03</div>
          <h3 style="font-size: 1.2rem; font-weight: 700; margin-bottom: 10px;">Safe Belt Anchorage</h3>
          <p style="font-size: 0.9rem; color: #cbd5e1; line-height: 1.6;">Secured using heavy nylon tie-down straps inside dedicated container carriers to prevent movement.</p>
        </div>
        <div style="background: #1e293b; padding: 30px; border-radius: 12px; border-top: 4px solid #a855f7;">
          <div style="font-size: 1.8rem; font-weight: 800; color: #a855f7; margin-bottom: 10px;">04</div>
          <h3 style="font-size: 1.2rem; font-weight: 700; margin-bottom: 10px;">Long Highway Transit</h3>
          <p style="font-size: 0.9rem; color: #cbd5e1; line-height: 1.6;">Monitored 1,600 km transit via Gujarat-Rajasthan-Delhi highway corridor with regular updates.</p>
        </div>
        <div style="background: #1e293b; padding: 30px; border-radius: 12px; border-top: 4px solid #f43f5e;">
          <div style="font-size: 1.8rem; font-weight: 800; color: #f43f5e; margin-bottom: 10px;">05</div>
          <h3 style="font-size: 1.2rem; font-weight: 700; margin-bottom: 10px;">Tricity Delivery</h3>
          <p style="font-size: 0.9rem; color: #cbd5e1; line-height: 1.6;">Unpacking and joint inspection at your address in Chandigarh, Mohali, or Panchkula.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- 6. Required Documents Checklist -->
  <section style="background: #0b132b; padding: 60px 0; color: #ffffff;">
    <div class="container">
      <div style="background: linear-gradient(135deg, #1c2541 0%, #1e293b 100%); border-radius: 16px; padding: 40px; border: 1px solid rgba(245,158,11,0.2);">
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 30px; align-items: center;">
          <div>
            <span style="color: #f59e0b; font-weight: 700; text-transform: uppercase; font-size: 0.85rem; letter-spacing: 1px;">INTERSTATE RTO COMPLIANCE</span>
            <h2 style="font-size: 1.8rem; font-weight: 800; margin: 10px 0 20px 0;">Required Documents for Shifting</h2>
            <p style="font-size: 0.95rem; color: #cbd5e1; line-height: 1.7;">
              To comply with multi-state border checkposts across Maharashtra, Gujarat, Rajasthan & Haryana, submit copies of:
            </p>
          </div>
          <div>
            <ul style="list-style: none; padding: 0; margin: 0; font-size: 0.95rem; color: #f8fafc;">
              <li style="padding: 12px 16px; background: rgba(0,0,0,0.2); border-radius: 8px; margin-bottom: 10px; display: flex; align-items: center;">
                <i class="fas fa-file-contract" style="color: #f59e0b; margin-right: 12px; font-size: 1.2rem;"></i> Bike RC Copy (Registration Certificate)
              </li>
              <li style="padding: 12px 16px; background: rgba(0,0,0,0.2); border-radius: 8px; margin-bottom: 10px; display: flex; align-items: center;">
                <i class="fas fa-shield-alt" style="color: #10b981; margin-right: 12px; font-size: 1.2rem;"></i> Active Motor Insurance Copy
              </li>
              <li style="padding: 12px 16px; background: rgba(0,0,0,0.2); border-radius: 8px; margin-bottom: 10px; display: flex; align-items: center;">
                <i class="fas fa-id-card" style="color: #3b82f6; margin-right: 12px; font-size: 1.2rem;"></i> Owner Govt Photo ID Proof (Aadhaar / DL)
              </li>
              <li style="padding: 12px 16px; background: rgba(0,0,0,0.2); border-radius: 8px; display: flex; align-items: center;">
                <i class="fas fa-gas-pump" style="color: #f43f5e; margin-right: 12px; font-size: 1.2rem;"></i> Pollution Under Control (PUC) & Empty Tank Note
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 7. Locality Grid -->
  <section style="background: #0f172a; padding: 70px 0; color: #ffffff;">
    <div class="container">
      <div style="text-align: center; margin-bottom: 40px;">
        <h2 style="font-size: 2rem; font-weight: 800;">
          Pickup in <span style="color: #f59e0b;">Mumbai Region</span> & Delivery Across <span style="color: #10b981;">Chandigarh Tricity</span>
        </h2>
        <p style="font-size: 1rem; color: #94a3b8;">Serving all sectors in Chandigarh, Mohali, and Panchkula</p>
      </div>

      <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 30px;">
        <div style="background: #1e293b; padding: 30px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.05);">
          <h3 style="font-size: 1.3rem; font-weight: 700; color: #f59e0b; margin-bottom: 15px;">
            <i class="fas fa-map-marker-alt" style="margin-right: 8px;"></i> Mumbai Pickup Locations
          </h3>
          <p style="font-size: 0.9rem; color: #cbd5e1; line-height: 1.8;">
            Andheri, Bandra, Thane, Navi Mumbai (Vashi, Belapur, Kharghar), Powai, Borivali, Dadar, Malad, Goregaon, Ghatkopar, and Chembur.
          </p>
        </div>

        <div style="background: #1e293b; padding: 30px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.05);">
          <h3 style="font-size: 1.3rem; font-weight: 700; color: #10b981; margin-bottom: 15px;">
            <i class="fas fa-map-marker-alt" style="margin-right: 8px;"></i> Chandigarh Tricity Delivery
          </h3>
          <p style="font-size: 0.9rem; color: #cbd5e1; line-height: 1.8;">
            Chandigarh Sectors (17, 22, 34, 35, 43, 44), Manimajra, Zirakpur, Mohali (Sectors 67, 70, 82, Aerocity), and Panchkula (Sectors 5, 11, 20).
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- 8. Why Choose Us -->
  <section style="background: #0b132b; padding: 70px 0; color: #ffffff;">
    <div class="container">
      <div style="text-align: center; margin-bottom: 50px;">
        <h2 style="font-size: 2.2rem; font-weight: 800;">
          Why Choose <span style="color: #f59e0b;">Shree Ashirwad Packers & Movers</span>?
        </h2>
        <p style="font-size: 1rem; color: #94a3b8;">Trusted partner for long-distance bike relocations</p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 25px;">
        <div style="background: #1c2541; padding: 25px; border-radius: 12px; border-left: 4px solid #f59e0b;">
          <h3 style="font-size: 1.15rem; font-weight: 700; margin-bottom: 10px; color: #fff;">Scratch-Proof Guarantee</h3>
          <p style="font-size: 0.9rem; color: #cbd5e1; line-height: 1.6;">Multi-layered bubble wrap and corrugated protection ensures paintwork remains untouched during transit.</p>
        </div>
        <div style="background: #1c2541; padding: 25px; border-radius: 12px; border-left: 4px solid #10b981;">
          <h3 style="font-size: 1.15rem; font-weight: 700; margin-bottom: 10px; color: #fff;">Full Transit Insurance</h3>
          <p style="font-size: 0.9rem; color: #cbd5e1; line-height: 1.6;">Comprehensive transit policy safeguards your two-wheeler against unforeseen highway incidents.</p>
        </div>
        <div style="background: #1c2541; padding: 25px; border-radius: 12px; border-left: 4px solid #3b82f6;">
          <h3 style="font-size: 1.15rem; font-weight: 700; margin-bottom: 10px; color: #fff;">Safe Long-Haul Shipping</h3>
          <p style="font-size: 0.9rem; color: #cbd5e1; line-height: 1.6;">Enclosed container trucks specially equipped for 1,600+ km long-distance transport.</p>
        </div>
        <div style="background: #1c2541; padding: 25px; border-radius: 12px; border-left: 4px solid #a855f7;">
          <h3 style="font-size: 1.15rem; font-weight: 700; margin-bottom: 10px; color: #fff;">Transparent Pricing</h3>
          <p style="font-size: 0.9rem; color: #cbd5e1; line-height: 1.6;">All inclusive written quotes provided prior to booking. No hidden charges or unexpected toll fees.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- 9. Customer Testimonials -->
  <section style="background: #0f172a; padding: 70px 0; color: #ffffff;">
    <div class="container">
      <div style="text-align: center; margin-bottom: 45px;">
        <h2 style="font-size: 2rem; font-weight: 800;">
          Customer Stories: <span style="color: #f59e0b;">Mumbai to Chandigarh</span>
        </h2>
        <p style="font-size: 0.95rem; color: #94a3b8;">Read verified reviews from clients who shifted their bikes with us</p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 25px;">
        <div style="background: #1e293b; padding: 30px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.05);">
          <div style="color: #f59e0b; margin-bottom: 12px;">
            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
          </div>
          <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.7; margin-bottom: 15px;">
            "Shifted my Royal Enfield Himalayan from Bandra Mumbai to Sector 35 Chandigarh. Excellent packing quality and arrived safely within 5 days. Very professional!"
          </p>
          <div style="font-weight: 700; color: #fff;">— Gurpreet Singh</div>
          <div style="font-size: 0.8rem; color: #94a3b8;">Advocate, Sector 35</div>
        </div>

        <div style="background: #1e293b; padding: 30px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.05);">
          <div style="color: #f59e0b; margin-bottom: 12px;">
            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
          </div>
          <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.7; margin-bottom: 15px;">
            "Transported Suzuki Access from Powai to Mohali Sector 70. Doorstep pickup and unpacking were handled smoothly. Highly recommended."
          </p>
          <div style="font-weight: 700; color: #fff;">— Amanpreet Kaur</div>
          <div style="font-size: 0.8rem; color: #94a3b8;">IT Specialist, Mohali</div>
        </div>

        <div style="background: #1e293b; padding: 30px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.05);">
          <div style="color: #f59e0b; margin-bottom: 12px;">
            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
          </div>
          <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.7; margin-bottom: 15px;">
            "KTM Adventure 390 moved from Navi Mumbai to Panchkula. Wooden crating option provided 100% security. Great service overall!"
          </p>
          <div style="font-weight: 700; color: #fff;">— Varun Verma</div>
          <div style="font-size: 0.8rem; color: #94a3b8;">Entrepreneur, Panchkula</div>
        </div>
      </div>
    </div>
  </section>

  <!-- 10. FAQ Section -->
  <section style="background: #0b132b; padding: 70px 0; color: #ffffff;">
    <div class="container">
      <div style="max-width: 850px; margin: 0 auto;">
        <div style="text-align: center; margin-bottom: 50px;">
          <h2 style="font-size: 2.2rem; font-weight: 800;">
            Frequently Asked <span style="color: #f59e0b;">Questions</span>
          </h2>
          <p style="font-size: 1rem; color: #94a3b8;">Got questions about bike transport from Mumbai to Chandigarh?</p>
        </div>

        <div style="display: flex; flex-direction: column; gap: 15px;">
          <div style="background: #1c2541; border-radius: 10px; padding: 22px; border: 1px solid rgba(255,255,255,0.08);">
            <h3 style="font-size: 1.1rem; font-weight: 700; color: #f59e0b; margin-bottom: 8px;">Q1: How much does bike transport from Mumbai to Chandigarh cost?</h3>
            <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.6; margin: 0;">
              Door-to-door bike transport charges from Mumbai to Chandigarh range between ₹4,200 to ₹5,000 for scooters, ₹4,800 to ₹5,800 for commuter bikes, and ₹6,500 to ₹7,800 for heavy motorcycles (Bullet/RE).
            </p>
          </div>

          <div style="background: #1c2541; border-radius: 10px; padding: 22px; border: 1px solid rgba(255,255,255,0.08);">
            <h3 style="font-size: 1.1rem; font-weight: 700; color: #f59e0b; margin-bottom: 8px;">Q2: How long does delivery take from Mumbai to Chandigarh?</h3>
            <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.6; margin: 0;">
              Given the 1,600 km distance, container truck delivery typically takes between 4 to 6 days.
            </p>
          </div>

          <div style="background: #1c2541; border-radius: 10px; padding: 22px; border: 1px solid rgba(255,255,255,0.08);">
            <h3 style="font-size: 1.1rem; font-weight: 700; color: #f59e0b; margin-bottom: 8px;">Q3: Do you deliver to Mohali and Panchkula as well?</h3>
            <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.6; margin: 0;">
              Yes! We cover the entire Tricity region including all sectors in Chandigarh, Mohali, Panchkula, Zirakpur, and Kharar.
            </p>
          </div>

          <div style="background: #1c2541; border-radius: 10px; padding: 22px; border: 1px solid rgba(255,255,255,0.08);">
            <h3 style="font-size: 1.1rem; font-weight: 700; color: #f59e0b; margin-bottom: 8px;">Q4: What documents are required for bike transport?</h3>
            <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.6; margin: 0;">
              You need to provide a copy of the Registration Certificate (RC), active bike insurance policy copy, owner ID proof (Aadhaar or DL), and PUC certificate.
            </p>
          </div>

          <div style="background: #1c2541; border-radius: 10px; padding: 22px; border: 1px solid rgba(255,255,255,0.08);">
            <h3 style="font-size: 1.1rem; font-weight: 700; color: #f59e0b; margin-bottom: 8px;">Q5: Is transit insurance included in the quotation?</h3>
            <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.6; margin: 0;">
              Yes, comprehensive transit insurance policy coverage is included to safeguard your motorcycle against any highway hazards.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 11. Final CTA Banner -->
  <section style="background: linear-gradient(135deg, #1e1b4b 0%, #065f46 100%); padding: 60px 0; text-align: center; color: #ffffff;">
    <div class="container">
      <h2 style="font-size: 2.2rem; font-weight: 800; margin-bottom: 15px;">
        Book Your Bike Transport from Mumbai to Chandigarh Today
      </h2>
      <p style="font-size: 1.1rem; color: #cbd5e1; max-width: 700px; margin: 0 auto 30px auto;">
        Get instant transparent pricing, free doorstep inspection, and 100% damage-free motorcycle shipping today.
      </p>

      <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap;">
        <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Us Now" style="padding: 16px 36px; background: #e11d48; color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1.05rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225,29,72,0.4);">
          <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call Us: <?php echo SITE_PHONE; ?>
        </a>
        <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20a%20quote%20for%20Mumbai%20to%20Chandigarh%20Bike%20Transport." target="_blank" title="Get WhatsApp Quote" style="padding: 16px 36px; background: #10b981; color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1.05rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16,185,129,0.4);">
          <i class="fab fa-whatsapp" style="margin-right: 8px;"></i> Get WhatsApp Estimate
        </a>
      </div>
    </div>
  </section>

</main>

<!-- Schema JSON-LD for Local SEO & FAQPage -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "How much does bike transport from Mumbai to Chandigarh cost?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Door-to-door bike transport charges from Mumbai to Chandigarh range between ₹4,200 to ₹5,000 for scooters, ₹4,800 to ₹5,800 for commuter bikes, and ₹6,500 to ₹7,800 for heavy motorcycles (Bullet/RE)."
      }
    },
    {
      "@type": "Question",
      "name": "How long does delivery take from Mumbai to Chandigarh?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Given the 1,600 km distance, container truck delivery typically takes between 4 to 6 days."
      }
    },
    {
      "@type": "Question",
      "name": "Do you deliver to Mohali and Panchkula as well?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes! We cover the entire Tricity region including all sectors in Chandigarh, Mohali, Panchkula, Zirakpur, and Kharar."
      }
    },
    {
      "@type": "Question",
      "name": "What documents are required for bike transport?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "You need to provide a copy of the Registration Certificate (RC), active bike insurance policy copy, owner ID proof (Aadhaar or DL), and PUC certificate."
      }
    },
    {
      "@type": "Question",
      "name": "Is transit insurance included in the quotation?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, comprehensive transit insurance policy coverage is included to safeguard your motorcycle against any highway hazards."
      }
    }
  ]
}
</script>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
