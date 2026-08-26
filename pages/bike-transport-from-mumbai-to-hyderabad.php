<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "Bike Transport from Mumbai to Hyderabad | Safe Two-Wheeler Shifting";
$page_desc = "Safe, insured & fast bike transport from Mumbai to Hyderabad. Get transparent rate cards, 7-layer bubble wrapping, transit insurance, and instant WhatsApp estimates. Complete delivery across Gachibowli, Hitec City, Madhapur, Kukatpally & Secunderabad.";
$page_keywords = "bike transport from mumbai to hyderabad, bike packers mumbai to hyderabad, motorcycle shipping mumbai hyderabad, two wheeler parcel mumbai to hyderabad, bike courier charges mumbai hyderabad, shree ashirwad packers";
$canonical_url = "https://shreeashirwadpackersandmovers.com/pages/bike-transport-from-mumbai-to-hyderabad.php";

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
        <span class="breadcrumb-item active">Bike Transport Mumbai to Hyderabad</span>
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
            MUMBAI TO HYDERABAD BIKE SHIFTING SPECIALISTS
          </span>
          <h1 style="font-size: 2.5rem; font-weight: 800; line-height: 1.2; margin-bottom: 20px; color: #ffffff;">
            Reliable <span style="color: #f59e0b;">Bike Transport from Mumbai to Hyderabad</span>
          </h1>
          <p style="font-size: 1.1rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 25px;">
            Moving your motorcycle or scooter from Mumbai to Hyderabad? Shree Ashirwad Packers and Movers provides safe, door-to-door bike transport with 7-layer bubble wrapping, covered container carriers, and 100% transit insurance. Direct door pickup across Mumbai, Thane & Navi Mumbai to Gachibowli, Hitec City, Madhapur, and Secunderabad.
          </p>

          <div style="display: flex; gap: 15px; flex-wrap: wrap; margin-bottom: 30px;">
            <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Now" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
              <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call Now: <?php echo SITE_PHONE; ?>
            </a>
            <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20a%20quote%20for%20Bike%20Transport%20from%20Mumbai%20to%20Hyderabad." title="Chat on WhatsApp" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
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
              <input type="text" name="move_to" class="form-control" value="Hyderabad" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
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
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; margin-bottom: 5px;">710+ KM</div>
          <div style="font-size: 0.9rem; color: #cbd5e1;">Mumbai - Hyderabad Distance</div>
        </div>
        <div style="padding: 20px; background: rgba(255,255,255,0.03); border-radius: 12px; border: 1px solid rgba(255,255,255,0.05);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #10b981; margin-bottom: 5px;">2 - 3 Days</div>
          <div style="font-size: 0.9rem; color: #cbd5e1;">Express Highway Transit</div>
        </div>
        <div style="padding: 20px; background: rgba(255,255,255,0.03); border-radius: 12px; border: 1px solid rgba(255,255,255,0.05);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #3b82f6; margin-bottom: 5px;">15,800+</div>
          <div style="font-size: 0.9rem; color: #cbd5e1;">Bikes Transported</div>
        </div>
        <div style="padding: 20px; background: rgba(255,255,255,0.03); border-radius: 12px; border: 1px solid rgba(255,255,255,0.05);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f43f5e; margin-bottom: 5px;">4.9 / 5.0</div>
          <div style="font-size: 0.9rem; color: #cbd5e1;">Verified Customer Score</div>
        </div>
      </div>
    </div>
  </section>

  <!-- 3. Service Overview & Modes -->
  <section style="background: #0f172a; padding: 70px 0; color: #f8fafc;">
    <div class="container">
      <div style="max-width: 900px; margin: 0 auto; text-align: center; margin-bottom: 50px;">
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin-bottom: 15px;">
          Motorcycle Transport Solutions: <span style="color: #f59e0b;">Mumbai to Hyderabad</span>
        </h2>
        <p style="font-size: 1.05rem; color: #94a3b8; line-height: 1.8;">
          Connecting Maharashtra and Telangana along the NH 65 highway corridor via Solapur. We offer door-to-door closed container vehicle carriers and Central Railway parcel booking assistance.
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
              Complete end-to-end relocation solution. We collect your bike from your home in Mumbai, apply 7 layers of bubble and foam packaging, ship via dedicated enclosed container truck along NH 65, and deliver directly to your doorstep in Hyderabad.
            </p>
            <ul style="list-style: none; padding: 0; margin: 0 0 25px 0; font-size: 0.9rem; color: #cbd5e1;">
              <li style="margin-bottom: 10px;"><i class="fas fa-check-circle" style="color: #10b981; margin-right: 8px;"></i> Pickup from all Mumbai, Thane & Navi Mumbai areas</li>
              <li style="margin-bottom: 10px;"><i class="fas fa-check-circle" style="color: #10b981; margin-right: 8px;"></i> 7-Layer Heavy Duty Bubble & Foam Protection</li>
              <li style="margin-bottom: 10px;"><i class="fas fa-check-circle" style="color: #10b981; margin-right: 8px;"></i> Full Transit Policy Insurance Included</li>
              <li style="margin-bottom: 10px;"><i class="fas fa-check-circle" style="color: #10b981; margin-right: 8px;"></i> Prompt 2 to 3 Days Transit Schedule</li>
            </ul>
          </div>
          <div style="border-top: 1px solid rgba(255,255,255,0.1); padding-top: 20px; text-align: center;">
            <span style="font-size: 0.9rem; color: #94a3b8;">Door-to-Door Charges starting from</span>
            <div style="font-size: 1.8rem; font-weight: 800; color: #10b981;">₹3,200 - ₹5,800</div>
          </div>
        </div>

        <div style="background: #1e293b; border-radius: 16px; padding: 35px; border: 1px solid rgba(255,255,255,0.1); display: flex; flex-direction: column; justify-content: space-between;">
          <div>
            <div style="display: inline-block; padding: 8px 16px; background: rgba(59, 130, 246, 0.15); color: #3b82f6; border-radius: 20px; font-weight: 700; font-size: 0.85rem; margin-bottom: 15px;">
              STATION-TO-STATION
            </div>
            <h3 style="font-size: 1.5rem; color: #ffffff; font-weight: 700; margin-bottom: 15px;">Railway Parcel Assistance</h3>
            <p style="font-size: 0.95rem; color: #cbd5e1; line-height: 1.7; margin-bottom: 20px;">
              Station-to-station parcel transport via Central Railway from CSTM / Kalyan to Secunderabad (SC) or Hyderabad Deccan (HYB) station.
            </p>
            <ul style="list-style: none; padding: 0; margin: 0 0 25px 0; font-size: 0.9rem; color: #cbd5e1;">
              <li style="margin-bottom: 10px;"><i class="fas fa-check-circle" style="color: #10b981; margin-right: 8px;"></i> Budget friendly station service</li>
              <li style="margin-bottom: 10px;"><i class="fas fa-check-circle" style="color: #10b981; margin-right: 8px;"></i> On-station gunny packaging support</li>
              <li style="margin-bottom: 10px;"><i class="fas fa-exclamation-triangle" style="color: #f59e0b; margin-right: 8px;"></i> Fuel tank must be drained before loading</li>
              <li style="margin-bottom: 10px;"><i class="fas fa-exclamation-triangle" style="color: #f59e0b; margin-right: 8px;"></i> Self-pickup at Secunderabad / Nampally station</li>
            </ul>
          </div>
          <div style="border-top: 1px solid rgba(255,255,255,0.1); padding-top: 20px; text-align: center;">
            <span style="font-size: 0.9rem; color: #94a3b8;">Railway Charges starting from</span>
            <div style="font-size: 1.8rem; font-weight: 800; color: #f59e0b;">₹2,500 - ₹3,800</div>
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
          Estimated <span style="color: #f59e0b;">Mumbai to Hyderabad Bike Transport Rates</span>
        </h2>
        <p style="font-size: 1rem; color: #cbd5e1;">
          Clear cost estimation based on two-wheeler engine capacity and protective packaging selection.
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
              <td style="padding: 16px 20px;">₹2,500 - ₹2,900</td>
              <td style="padding: 16px 20px; color: #10b981; font-weight: 700;">₹3,200 - ₹3,800</td>
              <td style="padding: 16px 20px;">₹4,200 - ₹4,800</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.05); background: rgba(255,255,255,0.02);">
              <td style="padding: 16px 20px; font-weight: 600; color: #fff;">Commuter Bikes (Splendor, Shine 100-150cc)</td>
              <td style="padding: 16px 20px;">₹2,800 - ₹3,200</td>
              <td style="padding: 16px 20px; color: #10b981; font-weight: 700;">₹3,600 - ₹4,400</td>
              <td style="padding: 16px 20px;">₹4,800 - ₹5,500</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.05);">
              <td style="padding: 16px 20px; font-weight: 600; color: #fff;">Sports Bikes (Apache, Pulsar 160-250cc)</td>
              <td style="padding: 16px 20px;">₹3,100 - ₹3,600</td>
              <td style="padding: 16px 20px; color: #10b981; font-weight: 700;">₹4,200 - ₹5,000</td>
              <td style="padding: 16px 20px;">₹5,500 - ₹6,300</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.05); background: rgba(255,255,255,0.02);">
              <td style="padding: 16px 20px; font-weight: 600; color: #fff;">Cruiser Bikes (Royal Enfield Bullet 350-500cc)</td>
              <td style="padding: 16px 20px;">₹3,400 - ₹4,000</td>
              <td style="padding: 16px 20px; color: #10b981; font-weight: 700;">₹4,800 - ₹5,800</td>
              <td style="padding: 16px 20px;">₹6,200 - ₹7,200</td>
            </tr>
            <tr>
              <td style="padding: 16px 20px; font-weight: 600; color: #fff;">Premium Superbikes (>500cc)</td>
              <td style="padding: 16px 20px;">N/A</td>
              <td style="padding: 16px 20px; color: #10b981; font-weight: 700;">₹6,500 - ₹8,800</td>
              <td style="padding: 16px 20px;">₹8,500 - ₹11,000</td>
            </tr>
          </tbody>
        </table>
      </div>
      <p style="text-align: center; font-size: 0.85rem; color: #94a3b8; margin-top: 15px;">
        * Note: Rates are estimated averages. Final quote depends on pickup locality in Mumbai, delivery area in Hyderabad, GST, and insurance choices.
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
        <p style="font-size: 1rem; color: #94a3b8;">How we ensure scratch-free motorcycle shipping from Mumbai to Hyderabad</p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 25px;">
        <div style="background: #1e293b; padding: 30px; border-radius: 12px; border-top: 4px solid #f59e0b;">
          <div style="font-size: 1.8rem; font-weight: 800; color: #f59e0b; margin-bottom: 10px;">01</div>
          <h3 style="font-size: 1.2rem; font-weight: 700; margin-bottom: 10px;">Doorstep Pickup</h3>
          <p style="font-size: 0.9rem; color: #cbd5e1; line-height: 1.6;">Our team arrives at your home in Mumbai/Thane/Navi Mumbai to conduct condition reporting and documentation.</p>
        </div>
        <div style="background: #1e293b; padding: 30px; border-radius: 12px; border-top: 4px solid #10b981;">
          <div style="font-size: 1.8rem; font-weight: 800; color: #10b981; margin-bottom: 10px;">02</div>
          <h3 style="font-size: 1.2rem; font-weight: 700; margin-bottom: 10px;">7-Layer Multi-Wrap</h3>
          <p style="font-size: 0.9rem; color: #cbd5e1; line-height: 1.6;">High-density bubble wrap, foam guards, corrugated sheets, and film wrap cushion tank, body, and indicators.</p>
        </div>
        <div style="background: #1e293b; padding: 30px; border-radius: 12px; border-top: 4px solid #3b82f6;">
          <div style="font-size: 1.8rem; font-weight: 800; color: #3b82f6; margin-bottom: 10px;">03</div>
          <h3 style="font-size: 1.2rem; font-weight: 700; margin-bottom: 10px;">Safe Anchorage</h3>
          <p style="font-size: 0.9rem; color: #cbd5e1; line-height: 1.6;">Secured using soft nylon belt tie-down straps inside dedicated covered vehicle carriers.</p>
        </div>
        <div style="background: #1e293b; padding: 30px; border-radius: 12px; border-top: 4px solid #a855f7;">
          <div style="font-size: 1.8rem; font-weight: 800; color: #a855f7; margin-bottom: 10px;">04</div>
          <h3 style="font-size: 1.2rem; font-weight: 700; margin-bottom: 10px;">NH 65 Highway Transit</h3>
          <p style="font-size: 0.9rem; color: #cbd5e1; line-height: 1.6;">Smooth movement along Mumbai-Pune-Solapur-Hyderabad NH 65 route with GPS tracking updates.</p>
        </div>
        <div style="background: #1e293b; padding: 30px; border-radius: 12px; border-top: 4px solid #f43f5e;">
          <div style="font-size: 1.8rem; font-weight: 800; color: #f43f5e; margin-bottom: 10px;">05</div>
          <h3 style="font-size: 1.2rem; font-weight: 700; margin-bottom: 10px;">Doorstep Unpacking</h3>
          <p style="font-size: 0.9rem; color: #cbd5e1; line-height: 1.6;">Punctual delivery and joint inspection at your exact Hyderabad address (Gachibowli, Hitec City, etc.).</p>
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
              To clear Maharashtra-Telangana interstate checkposts, please provide copies of:
            </p>
          </div>
          <div>
            <ul style="list-style: none; padding: 0; margin: 0; font-size: 0.95rem; color: #f8fafc;">
              <li style="padding: 12px 16px; background: rgba(0,0,0,0.2); border-radius: 8px; margin-bottom: 10px; display: flex; align-items: center;">
                <i class="fas fa-file-contract" style="color: #f59e0b; margin-right: 12px; font-size: 1.2rem;"></i> Vehicle RC Copy (Registration Certificate)
              </li>
              <li style="padding: 12px 16px; background: rgba(0,0,0,0.2); border-radius: 8px; margin-bottom: 10px; display: flex; align-items: center;">
                <i class="fas fa-shield-alt" style="color: #10b981; margin-right: 12px; font-size: 1.2rem;"></i> Valid Bike Insurance Copy
              </li>
              <li style="padding: 12px 16px; background: rgba(0,0,0,0.2); border-radius: 8px; margin-bottom: 10px; display: flex; align-items: center;">
                <i class="fas fa-id-card" style="color: #3b82f6; margin-right: 12px; font-size: 1.2rem;"></i> Owner Govt Photo ID (Aadhaar / Driving License)
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
          Pickup in <span style="color: #f59e0b;">Mumbai Region</span> & Delivery Across <span style="color: #10b981;">Hyderabad</span>
        </h2>
        <p style="font-size: 1rem; color: #94a3b8;">Serving all major IT corridors & residential townships</p>
      </div>

      <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 30px;">
        <div style="background: #1e293b; padding: 30px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.05);">
          <h3 style="font-size: 1.3rem; font-weight: 700; color: #f59e0b; margin-bottom: 15px;">
            <i class="fas fa-map-marker-alt" style="margin-right: 8px;"></i> Mumbai Pickup Locations
          </h3>
          <p style="font-size: 0.9rem; color: #cbd5e1; line-height: 1.8;">
            Andheri, Bandra, Thane, Navi Mumbai (Vashi, Kharghar, Belapur), Powai, Borivali, Dadar, Malad, Goregaon, Ghatkopar, and Chembur.
          </p>
        </div>

        <div style="background: #1e293b; padding: 30px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.05);">
          <h3 style="font-size: 1.3rem; font-weight: 700; color: #10b981; margin-bottom: 15px;">
            <i class="fas fa-map-marker-alt" style="margin-right: 8px;"></i> Hyderabad Delivery Locations
          </h3>
          <p style="font-size: 0.9rem; color: #cbd5e1; line-height: 1.8;">
            Gachibowli, Hitec City, Madhapur, Kukatpally, Banjara Hills, Jubilee Hills, Secunderabad, Kondapur, Miyapur, Mehdipatnam, and Uppal.
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
        <p style="font-size: 1rem; color: #94a3b8;">Trusted partner for interstate bike relocations</p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 25px;">
        <div style="background: #1c2541; padding: 25px; border-radius: 12px; border-left: 4px solid #f59e0b;">
          <h3 style="font-size: 1.15rem; font-weight: 700; margin-bottom: 10px; color: #fff;">Scratch-Proof Guarantee</h3>
          <p style="font-size: 0.9rem; color: #cbd5e1; line-height: 1.6;">7-layer bubble wrap & corrugated protection keep paint and chrome flawless.</p>
        </div>
        <div style="background: #1c2541; padding: 25px; border-radius: 12px; border-left: 4px solid #10b981;">
          <h3 style="font-size: 1.15rem; font-weight: 700; margin-bottom: 10px; color: #fff;">Full Transit Insurance</h3>
          <p style="font-size: 0.9rem; color: #cbd5e1; line-height: 1.6;">Comprehensive insurance policy safeguards your vehicle against highway risks.</p>
        </div>
        <div style="background: #1c2541; padding: 25px; border-radius: 12px; border-left: 4px solid #3b82f6;">
          <h3 style="font-size: 1.15rem; font-weight: 700; margin-bottom: 10px; color: #fff;">2 to 3 Day Delivery</h3>
          <p style="font-size: 0.9rem; color: #cbd5e1; line-height: 1.6;">Express highway container shipping delivers your motorcycle directly from Mumbai to Hyderabad on time.</p>
        </div>
        <div style="background: #1c2541; padding: 25px; border-radius: 12px; border-left: 4px solid #a855f7;">
          <h3 style="font-size: 1.15rem; font-weight: 700; margin-bottom: 10px; color: #fff;">Transparent Pricing</h3>
          <p style="font-size: 0.9rem; color: #cbd5e1; line-height: 1.6;">All inclusive written quotes provided prior to booking. No surprise extra fees.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- 9. Customer Testimonials -->
  <section style="background: #0f172a; padding: 70px 0; color: #ffffff;">
    <div class="container">
      <div style="text-align: center; margin-bottom: 45px;">
        <h2 style="font-size: 2rem; font-weight: 800;">
          Customer Stories: <span style="color: #f59e0b;">Mumbai to Hyderabad</span>
        </h2>
        <p style="font-size: 0.95rem; color: #94a3b8;">Read verified reviews from clients who shifted their bikes with us</p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 25px;">
        <div style="background: #1e293b; padding: 30px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.05);">
          <div style="color: #f59e0b; margin-bottom: 12px;">
            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
          </div>
          <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.7; margin-bottom: 15px;">
            "Relocated my KTM Duke 390 from Powai to Gachibowli. 7-layer wrapping was fantastic and delivery happened in under 48 hours!"
          </p>
          <div style="font-weight: 700; color: #fff;">— Srinivas Rao</div>
          <div style="font-size: 0.8rem; color: #94a3b8;">Tech Lead, Gachibowli</div>
        </div>

        <div style="background: #1e293b; padding: 30px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.05);">
          <div style="color: #f59e0b; margin-bottom: 12px;">
            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
          </div>
          <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.7; margin-bottom: 15px;">
            "Transported my TVS Jupiter from Thane to Kukatpally. Pickup team arrived right on schedule and bike reached completely safe."
          </p>
          <div style="font-weight: 700; color: #fff;">— Sunitha Reddy</div>
          <div style="font-size: 0.8rem; color: #94a3b8;">Bank Manager, Kukatpally</div>
        </div>

        <div style="background: #1e293b; padding: 30px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.05);">
          <div style="color: #f59e0b; margin-bottom: 12px;">
            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
          </div>
          <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.7; margin-bottom: 15px;">
            "Royal Enfield Himalayan transported from Navi Mumbai to Hitec City. Wooden crate packaging was very secure. Superb experience!"
          </p>
          <div style="font-weight: 700; color: #fff;">— Aditya Verma</div>
          <div style="font-size: 0.8rem; color: #94a3b8;">Product Manager, Hitec City</div>
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
          <p style="font-size: 1rem; color: #94a3b8;">Got questions about bike transport from Mumbai to Hyderabad?</p>
        </div>

        <div style="display: flex; flex-direction: column; gap: 15px;">
          <div style="background: #1c2541; border-radius: 10px; padding: 22px; border: 1px solid rgba(255,255,255,0.08);">
            <h3 style="font-size: 1.1rem; font-weight: 700; color: #f59e0b; margin-bottom: 8px;">Q1: How much does bike transport from Mumbai to Hyderabad cost?</h3>
            <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.6; margin: 0;">
              Door-to-door bike transport charges from Mumbai to Hyderabad range between ₹3,200 to ₹3,800 for scooters, ₹3,600 to ₹4,400 for commuter bikes, and ₹4,800 to ₹5,800 for heavy motorcycles (Bullet/RE).
            </p>
          </div>

          <div style="background: #1c2541; border-radius: 10px; padding: 22px; border: 1px solid rgba(255,255,255,0.08);">
            <h3 style="font-size: 1.1rem; font-weight: 700; color: #f59e0b; margin-bottom: 8px;">Q2: How long does delivery take from Mumbai to Hyderabad?</h3>
            <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.6; margin: 0;">
              Container truck delivery takes between 2 to 3 days from Mumbai to Hyderabad via the NH 65 highway corridor.
            </p>
          </div>

          <div style="background: #1c2541; border-radius: 10px; padding: 22px; border: 1px solid rgba(255,255,255,0.08);">
            <h3 style="font-size: 1.1rem; font-weight: 700; color: #f59e0b; margin-bottom: 8px;">Q3: Do you deliver to Gachibowli and Hitec City?</h3>
            <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.6; margin: 0;">
              Yes! We provide doorstep pickup in Mumbai and doorstep delivery across all Hyderabad areas including Gachibowli, Hitec City, Madhapur, Kukatpally, and Secunderabad.
            </p>
          </div>

          <div style="background: #1c2541; border-radius: 10px; padding: 22px; border: 1px solid rgba(255,255,255,0.08);">
            <h3 style="font-size: 1.1rem; font-weight: 700; color: #f59e0b; margin-bottom: 8px;">Q4: What documents are required for interstate transport?</h3>
            <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.6; margin: 0;">
              You need to provide a copy of the Registration Certificate (RC), active motor insurance policy copy, owner ID proof (Aadhaar or DL), and PUC certificate.
            </p>
          </div>

          <div style="background: #1c2541; border-radius: 10px; padding: 22px; border: 1px solid rgba(255,255,255,0.08);">
            <h3 style="font-size: 1.1rem; font-weight: 700; color: #f59e0b; margin-bottom: 8px;">Q5: Is transit insurance included in the quotation?</h3>
            <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.6; margin: 0;">
              Yes, comprehensive transit insurance policy coverage is included to safeguard your motorcycle against highway contingencies.
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
        Book Your Bike Transport from Mumbai to Hyderabad Today
      </h2>
      <p style="font-size: 1.1rem; color: #cbd5e1; max-width: 700px; margin: 0 auto 30px auto;">
        Get instant transparent pricing, free doorstep inspection, and 100% damage-free motorcycle shipping today.
      </p>

      <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap;">
        <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Us Now" style="padding: 16px 36px; background: #e11d48; color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1.05rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225,29,72,0.4);">
          <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call Us: <?php echo SITE_PHONE; ?>
        </a>
        <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20a%20quote%20for%20Mumbai%20to%20Hyderabad%20Bike%20Transport." target="_blank" title="Get WhatsApp Quote" style="padding: 16px 36px; background: #10b981; color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1.05rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16,185,129,0.4);">
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
      "name": "How much does bike transport from Mumbai to Hyderabad cost?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Door-to-door bike transport charges from Mumbai to Hyderabad range between ₹3,200 to ₹3,800 for scooters, ₹3,600 to ₹4,400 for commuter bikes, and ₹4,800 to ₹5,800 for heavy motorcycles (Bullet/RE)."
      }
    },
    {
      "@type": "Question",
      "name": "How long does delivery take from Mumbai to Hyderabad?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Container truck delivery takes between 2 to 3 days from Mumbai to Hyderabad via the NH 65 highway corridor."
      }
    },
    {
      "@type": "Question",
      "name": "Do you deliver to Gachibowli and Hitec City?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes! We provide doorstep pickup in Mumbai and doorstep delivery across all Hyderabad areas including Gachibowli, Hitec City, Madhapur, Kukatpally, and Secunderabad."
      }
    },
    {
      "@type": "Question",
      "name": "What documents are required for interstate transport?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "You need to provide a copy of the Registration Certificate (RC), active motor insurance policy copy, owner ID proof (Aadhaar or DL), and PUC certificate."
      }
    },
    {
      "@type": "Question",
      "name": "Is transit insurance included in the quotation?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, comprehensive transit insurance policy coverage is included to safeguard your motorcycle against highway contingencies."
      }
    }
  ]
}
</script>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
