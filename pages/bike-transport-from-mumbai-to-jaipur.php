<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "Bike Transport from Mumbai to Jaipur | Safe Two-Wheeler Shifting";
$page_desc = "Safe, insured & fast bike transport from Mumbai to Jaipur. Get transparent rate cards, 7-layer bubble wrapping, transit insurance, and instant WhatsApp estimates. Complete delivery across Vaishali Nagar, Malviya Nagar, Mansarovar & C-Scheme.";
$page_keywords = "bike transport from mumbai to jaipur, bike packers mumbai to jaipur, motorcycle shipping mumbai jaipur, two wheeler parcel mumbai to jaipur, bike courier charges mumbai jaipur, shree ashirwad packers";
$canonical_url = "https://shreeashirwadpackersandmovers.com/pages/bike-transport-from-mumbai-to-jaipur.php";

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
        <span class="breadcrumb-item active">Bike Transport Mumbai to Jaipur</span>
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
            MUMBAI TO JAIPUR BIKE SHIFTING SPECIALISTS
          </span>
          <h1 style="font-size: 2.5rem; font-weight: 800; line-height: 1.2; margin-bottom: 20px; color: #ffffff;">
            Reliable <span style="color: #f59e0b;">Bike Transport from Mumbai to Jaipur</span>
          </h1>
          <p style="font-size: 1.1rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 25px;">
            Looking to transport your motorcycle from Mumbai to Jaipur? Shree Ashirwad Packers and Movers provides damage-free, door-to-door bike transport with 7-layer bubble wrapping, covered container carriers, and 100% transit insurance coverage. Direct pickup from Mumbai, Thane & Navi Mumbai to Vaishali Nagar, Malviya Nagar, Mansarovar, and C-Scheme Jaipur.
          </p>

          <div style="display: flex; gap: 15px; flex-wrap: wrap; margin-bottom: 30px;">
            <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Now" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
              <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call Now: <?php echo SITE_PHONE; ?>
            </a>
            <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20a%20quote%20for%20Bike%20Transport%20from%20Mumbai%20to%20Jaipur." title="Chat on WhatsApp" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
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
              <input type="text" name="move_to" class="form-control" value="Jaipur" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
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
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; margin-bottom: 5px;">1,150+ KM</div>
          <div style="font-size: 0.9rem; color: #cbd5e1;">Mumbai - Jaipur Distance</div>
        </div>
        <div style="padding: 20px; background: rgba(255,255,255,0.03); border-radius: 12px; border: 1px solid rgba(255,255,255,0.05);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #10b981; margin-bottom: 5px;">3 - 4 Days</div>
          <div style="font-size: 0.9rem; color: #cbd5e1;">Express Highway Transit</div>
        </div>
        <div style="padding: 20px; background: rgba(255,255,255,0.03); border-radius: 12px; border: 1px solid rgba(255,255,255,0.05);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #3b82f6; margin-bottom: 5px;">14,500+</div>
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
          Motorcycle Transport Solutions: <span style="color: #f59e0b;">Mumbai to Jaipur</span>
        </h2>
        <p style="font-size: 1.05rem; color: #94a3b8; line-height: 1.8;">
          Connecting Mumbai to Rajasthan via NH 48 highway corridor (Mumbai-Surat-Vadodara-Udaipur-Jaipur). We offer door-to-door closed container truck transport and Western/North Western Railway parcel booking support.
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
              Safest long-distance shipping option. We collect your motorcycle from your house in Mumbai, perform 7-layer bubble wrapping, transport it via covered truck along NH 48, and deliver it directly to your doorstep in Jaipur.
            </p>
            <ul style="list-style: none; padding: 0; margin: 0 0 25px 0; font-size: 0.9rem; color: #cbd5e1;">
              <li style="margin-bottom: 10px;"><i class="fas fa-check-circle" style="color: #10b981; margin-right: 8px;"></i> Doorstep Pickup across Mumbai, Thane & Navi Mumbai</li>
              <li style="margin-bottom: 10px;"><i class="fas fa-check-circle" style="color: #10b981; margin-right: 8px;"></i> 7-Layer Heavy Duty Bubble & Foam Protection</li>
              <li style="margin-bottom: 10px;"><i class="fas fa-check-circle" style="color: #10b981; margin-right: 8px;"></i> All Risk Transit Insurance Included</li>
              <li style="margin-bottom: 10px;"><i class="fas fa-check-circle" style="color: #10b981; margin-right: 8px;"></i> Delivery within 3 to 4 Days</li>
            </ul>
          </div>
          <div style="border-top: 1px solid rgba(255,255,255,0.1); padding-top: 20px; text-align: center;">
            <span style="font-size: 0.9rem; color: #94a3b8;">Door-to-Door Charges starting from</span>
            <div style="font-size: 1.8rem; font-weight: 800; color: #10b981;">₹3,600 - ₹6,800</div>
          </div>
        </div>

        <div style="background: #1e293b; border-radius: 16px; padding: 35px; border: 1px solid rgba(255,255,255,0.1); display: flex; flex-direction: column; justify-content: space-between;">
          <div>
            <div style="display: inline-block; padding: 8px 16px; background: rgba(59, 130, 246, 0.15); color: #3b82f6; border-radius: 20px; font-weight: 700; font-size: 0.85rem; margin-bottom: 15px;">
              STATION-TO-STATION
            </div>
            <h3 style="font-size: 1.5rem; color: #ffffff; font-weight: 700; margin-bottom: 15px;">Railway Parcel Assistance</h3>
            <p style="font-size: 0.95rem; color: #cbd5e1; line-height: 1.7; margin-bottom: 20px;">
              Station-to-station parcel shipping from Mumbai Central (MMCT) / Bandra Terminus (BDTS) to Jaipur Junction (JP) station.
            </p>
            <ul style="list-style: none; padding: 0; margin: 0 0 25px 0; font-size: 0.9rem; color: #cbd5e1;">
              <li style="margin-bottom: 10px;"><i class="fas fa-check-circle" style="color: #10b981; margin-right: 8px;"></i> Economical option for long distance</li>
              <li style="margin-bottom: 10px;"><i class="fas fa-check-circle" style="color: #10b981; margin-right: 8px;"></i> On-station packing & loading support</li>
              <li style="margin-bottom: 10px;"><i class="fas fa-exclamation-triangle" style="color: #f59e0b; margin-right: 8px;"></i> Fuel tank must be completely empty</li>
              <li style="margin-bottom: 10px;"><i class="fas fa-exclamation-triangle" style="color: #f59e0b; margin-right: 8px;"></i> Customer self-pickup at Jaipur Jn. terminal</li>
            </ul>
          </div>
          <div style="border-top: 1px solid rgba(255,255,255,0.1); padding-top: 20px; text-align: center;">
            <span style="font-size: 0.9rem; color: #94a3b8;">Railway Charges starting from</span>
            <div style="font-size: 1.8rem; font-weight: 800; color: #f59e0b;">₹2,900 - ₹4,400</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 4. Rate Table -->
  <section style="background: #0b132b; padding: 70px 0; color: #ffffff;">
    <div class="container">
      <div style="max-width: 800px; margin: 0 auto; text-align: center; margin-bottom: 40px;">
        <h2 style="font-size: 2.2rem; font-weight: 800; margin-bottom: 15px;">
          Estimated <span style="color: #f59e0b;">Mumbai to Jaipur Bike Transport Rates</span>
        </h2>
        <p style="font-size: 1rem; color: #cbd5e1;">
          Clear cost estimation based on two-wheeler engine cubic capacity and protective packaging selection.
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
              <td style="padding: 16px 20px;">₹2,900 - ₹3,300</td>
              <td style="padding: 16px 20px; color: #10b981; font-weight: 700;">₹3,600 - ₹4,400</td>
              <td style="padding: 16px 20px;">₹4,600 - ₹5,400</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.05); background: rgba(255,255,255,0.02);">
              <td style="padding: 16px 20px; font-weight: 600; color: #fff;">Commuter Bikes (Splendor, Shine 100-150cc)</td>
              <td style="padding: 16px 20px;">₹3,100 - ₹3,600</td>
              <td style="padding: 16px 20px; color: #10b981; font-weight: 700;">₹4,000 - ₹5,000</td>
              <td style="padding: 16px 20px;">₹5,200 - ₹6,200</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.05);">
              <td style="padding: 16px 20px; font-weight: 600; color: #fff;">Sports Bikes (Apache, Pulsar 160-250cc)</td>
              <td style="padding: 16px 20px;">₹3,500 - ₹4,000</td>
              <td style="padding: 16px 20px; color: #10b981; font-weight: 700;">₹4,800 - ₹5,800</td>
              <td style="padding: 16px 20px;">₹6,000 - ₹7,000</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.05); background: rgba(255,255,255,0.02);">
              <td style="padding: 16px 20px; font-weight: 600; color: #fff;">Cruiser Bikes (Royal Enfield Bullet 350-500cc)</td>
              <td style="padding: 16px 20px;">₹3,800 - ₹4,400</td>
              <td style="padding: 16px 20px; color: #10b981; font-weight: 700;">₹5,500 - ₹6,800</td>
              <td style="padding: 16px 20px;">₹7,200 - ₹8,400</td>
            </tr>
            <tr>
              <td style="padding: 16px 20px; font-weight: 600; color: #fff;">Premium Superbikes (>500cc)</td>
              <td style="padding: 16px 20px;">N/A</td>
              <td style="padding: 16px 20px; color: #10b981; font-weight: 700;">₹7,500 - ₹10,000</td>
              <td style="padding: 16px 20px;">₹9,800 - ₹13,000</td>
            </tr>
          </tbody>
        </table>
      </div>
      <p style="text-align: center; font-size: 0.85rem; color: #94a3b8; margin-top: 15px;">
        * Note: Rates are estimated averages. Final quote depends on pickup locality in Mumbai, delivery area in Jaipur, GST, and insurance choices.
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
        <p style="font-size: 1rem; color: #94a3b8;">How we guarantee damage-free motorcycle delivery from Mumbai to Jaipur</p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 25px;">
        <div style="background: #1e293b; padding: 30px; border-radius: 12px; border-top: 4px solid #f59e0b;">
          <div style="font-size: 1.8rem; font-weight: 800; color: #f59e0b; margin-bottom: 10px;">01</div>
          <h3 style="font-size: 1.2rem; font-weight: 700; margin-bottom: 10px;">Doorstep Pickup</h3>
          <p style="font-size: 0.9rem; color: #cbd5e1; line-height: 1.6;">Our team arrives at your home in Mumbai/Thane/Navi Mumbai for condition inspection and paperwork.</p>
        </div>
        <div style="background: #1e293b; padding: 30px; border-radius: 12px; border-top: 4px solid #10b981;">
          <div style="font-size: 1.8rem; font-weight: 800; color: #10b981; margin-bottom: 10px;">02</div>
          <h3 style="font-size: 1.2rem; font-weight: 700; margin-bottom: 10px;">7-Layer Multi-Wrap</h3>
          <p style="font-size: 0.9rem; color: #cbd5e1; line-height: 1.6;">High-density bubble wrap, foam corner guards, corrugated sheets, and film wrap shield paint and tank.</p>
        </div>
        <div style="background: #1e293b; padding: 30px; border-radius: 12px; border-top: 4px solid #3b82f6;">
          <div style="font-size: 1.8rem; font-weight: 800; color: #3b82f6; margin-bottom: 10px;">03</div>
          <h3 style="font-size: 1.2rem; font-weight: 700; margin-bottom: 10px;">Safe Anchorage</h3>
          <p style="font-size: 0.9rem; color: #cbd5e1; line-height: 1.6;">Secured using soft nylon tie-down straps inside dedicated container carriers to prevent movement.</p>
        </div>
        <div style="background: #1e293b; padding: 30px; border-radius: 12px; border-top: 4px solid #a855f7;">
          <div style="font-size: 1.8rem; font-weight: 800; color: #a855f7; margin-bottom: 10px;">04</div>
          <h3 style="font-size: 1.2rem; font-weight: 700; margin-bottom: 10px;">NH 48 Highway Transit</h3>
          <p style="font-size: 0.9rem; color: #cbd5e1; line-height: 1.6;">Smooth travel via Mumbai-Surat-Vadodara-Udaipur-Jaipur NH 48 corridor with GPS tracking updates.</p>
        </div>
        <div style="background: #1e293b; padding: 30px; border-radius: 12px; border-top: 4px solid #f43f5e;">
          <div style="font-size: 1.8rem; font-weight: 800; color: #f43f5e; margin-bottom: 10px;">05</div>
          <h3 style="font-size: 1.2rem; font-weight: 700; margin-bottom: 10px;">Doorstep Delivery</h3>
          <p style="font-size: 0.9rem; color: #cbd5e1; line-height: 1.6;">Unpacking and joint condition check at your exact Jaipur address (Vaishali Nagar, Malviya Nagar, etc.).</p>
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
              To comply with MH-GJ-RJ border transport checkpost rules, please provide copies of:
            </p>
          </div>
          <div>
            <ul style="list-style: none; padding: 0; margin: 0; font-size: 0.95rem; color: #f8fafc;">
              <li style="padding: 12px 16px; background: rgba(0,0,0,0.2); border-radius: 8px; margin-bottom: 10px; display: flex; align-items: center;">
                <i class="fas fa-file-contract" style="color: #f59e0b; margin-right: 12px; font-size: 1.2rem;"></i> Vehicle RC Copy (Registration Certificate)
              </li>
              <li style="padding: 12px 16px; background: rgba(0,0,0,0.2); border-radius: 8px; margin-bottom: 10px; display: flex; align-items: center;">
                <i class="fas fa-shield-alt" style="color: #10b981; margin-right: 12px; font-size: 1.2rem;"></i> Active Motor Insurance Policy Copy
              </li>
              <li style="padding: 12px 16px; background: rgba(0,0,0,0.2); border-radius: 8px; margin-bottom: 10px; display: flex; align-items: center;">
                <i class="fas fa-id-card" style="color: #3b82f6; margin-right: 12px; font-size: 1.2rem;"></i> Owner Govt Photo ID (Aadhaar / Driving License)
              </li>
              <li style="padding: 12px 16px; background: rgba(0,0,0,0.2); border-radius: 8px; display: flex; align-items: center;">
                <i class="fas fa-gas-pump" style="color: #f43f5e; margin-right: 12px; font-size: 1.2rem;"></i> PUC Certificate & Empty Tank Note
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
          Pickup in <span style="color: #f59e0b;">Mumbai Region</span> & Delivery Across <span style="color: #10b981;">Jaipur</span>
        </h2>
        <p style="font-size: 1rem; color: #94a3b8;">Serving all major residential & commercial hubs in Jaipur</p>
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
            <i class="fas fa-map-marker-alt" style="margin-right: 8px;"></i> Jaipur Delivery Locations
          </h3>
          <p style="font-size: 0.9rem; color: #cbd5e1; line-height: 1.8;">
            Vaishali Nagar, Malviya Nagar, Mansarovar, Raja Park, Tonk Road, C-Scheme, Jagatpura, Vidhyadhar Nagar, and Ajmer Road.
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
          <p style="font-size: 0.9rem; color: #cbd5e1; line-height: 1.6;">Multi-layered bubble wrap and corrugated protection keep bike body and paint completely intact.</p>
        </div>
        <div style="background: #1c2541; padding: 25px; border-radius: 12px; border-left: 4px solid #10b981;">
          <h3 style="font-size: 1.15rem; font-weight: 700; margin-bottom: 10px; color: #fff;">Full Transit Insurance</h3>
          <p style="font-size: 0.9rem; color: #cbd5e1; line-height: 1.6;">Comprehensive transit policy safeguards your motorcycle against highway contingencies.</p>
        </div>
        <div style="background: #1c2541; padding: 25px; border-radius: 12px; border-left: 4px solid #3b82f6;">
          <h3 style="font-size: 1.15rem; font-weight: 700; margin-bottom: 10px; color: #fff;">3 to 4 Day Delivery</h3>
          <p style="font-size: 0.9rem; color: #cbd5e1; line-height: 1.6;">Express highway container shipping delivers your bike directly from Mumbai to Jaipur on schedule.</p>
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
          Customer Stories: <span style="color: #f59e0b;">Mumbai to Jaipur</span>
        </h2>
        <p style="font-size: 0.95rem; color: #94a3b8;">Read verified reviews from clients who shifted their bikes with us</p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 25px;">
        <div style="background: #1e293b; padding: 30px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.05);">
          <div style="color: #f59e0b; margin-bottom: 12px;">
            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
          </div>
          <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.7; margin-bottom: 15px;">
            "Relocated my RE Interceptor 650 from Andheri West to Vaishali Nagar Jaipur. 7-layer bubble wrap packaging was rock solid. Reached safely in 3 days!"
          </p>
          <div style="font-weight: 700; color: #fff;">— Rajat Rathore</div>
          <div style="font-size: 0.8rem; color: #94a3b8;">Business Owner, Jaipur</div>
        </div>

        <div style="background: #1e293b; padding: 30px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.05);">
          <div style="color: #f59e0b; margin-bottom: 12px;">
            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
          </div>
          <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.7; margin-bottom: 15px;">
            "Transported Suzuki Access from Navi Mumbai to Malviya Nagar. Very prompt doorstep pick up and safe delivery. Highly recommended!"
          </p>
          <div style="font-weight: 700; color: #fff;">— Meenakshi Shekhawat</div>
          <div style="font-size: 0.8rem; color: #94a3b8;">Architect, Malviya Nagar</div>
        </div>

        <div style="background: #1e293b; padding: 30px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.05);">
          <div style="color: #f59e0b; margin-bottom: 12px;">
            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
          </div>
          <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.7; margin-bottom: 15px;">
            "Honda H'ness CB350 shipped from Thane to Mansarovar Jaipur. Wooden crate option kept the bike 100% safe. Top-class service!"
          </p>
          <div style="font-weight: 700; color: #fff;">— Devendra Singh</div>
          <div style="font-size: 0.8rem; color: #94a3b8;">Engineer, Mansarovar</div>
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
          <p style="font-size: 1rem; color: #94a3b8;">Got questions about bike transport from Mumbai to Jaipur?</p>
        </div>

        <div style="display: flex; flex-direction: column; gap: 15px;">
          <div style="background: #1c2541; border-radius: 10px; padding: 22px; border: 1px solid rgba(255,255,255,0.08);">
            <h3 style="font-size: 1.1rem; font-weight: 700; color: #f59e0b; margin-bottom: 8px;">Q1: How much does bike transport from Mumbai to Jaipur cost?</h3>
            <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.6; margin: 0;">
              Door-to-door bike transport charges from Mumbai to Jaipur range between ₹3,600 to ₹4,400 for scooters, ₹4,000 to ₹5,000 for commuter bikes, and ₹5,500 to ₹6,800 for heavy motorcycles (Bullet/RE).
            </p>
          </div>

          <div style="background: #1c2541; border-radius: 10px; padding: 22px; border: 1px solid rgba(255,255,255,0.08);">
            <h3 style="font-size: 1.1rem; font-weight: 700; color: #f59e0b; margin-bottom: 8px;">Q2: How long does bike delivery take from Mumbai to Jaipur?</h3>
            <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.6; margin: 0;">
              Direct container truck delivery takes between 3 to 4 days from Mumbai to Jaipur via the NH 48 highway corridor.
            </p>
          </div>

          <div style="background: #1c2541; border-radius: 10px; padding: 22px; border: 1px solid rgba(255,255,255,0.08);">
            <h3 style="font-size: 1.1rem; font-weight: 700; color: #f59e0b; margin-bottom: 8px;">Q3: Do you deliver to Vaishali Nagar and Mansarovar in Jaipur?</h3>
            <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.6; margin: 0;">
              Yes! We provide doorstep pickup in Mumbai and doorstep delivery across all Jaipur areas including Vaishali Nagar, Malviya Nagar, Mansarovar, C-Scheme, and Jagatpura.
            </p>
          </div>

          <div style="background: #1c2541; border-radius: 10px; padding: 22px; border: 1px solid rgba(255,255,255,0.08);">
            <h3 style="font-size: 1.1rem; font-weight: 700; color: #f59e0b; margin-bottom: 8px;">Q4: What documents are required for bike transport?</h3>
            <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.6; margin: 0;">
              You need to provide a copy of the Registration Certificate (RC), active motor insurance policy copy, owner ID proof (Aadhaar or DL), and PUC certificate.
            </p>
          </div>

          <div style="background: #1c2541; border-radius: 10px; padding: 22px; border: 1px solid rgba(255,255,255,0.08);">
            <h3 style="font-size: 1.1rem; font-weight: 700; color: #f59e0b; margin-bottom: 8px;">Q5: Is transit insurance included in the quotation?</h3>
            <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.6; margin: 0;">
              Yes, comprehensive transit insurance policy coverage is included to safeguard your motorcycle against highway hazards.
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
        Book Your Bike Transport from Mumbai to Jaipur Today
      </h2>
      <p style="font-size: 1.1rem; color: #cbd5e1; max-width: 700px; margin: 0 auto 30px auto;">
        Get instant transparent pricing, free doorstep inspection, and 100% damage-free motorcycle shipping today.
      </p>

      <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap;">
        <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Us Now" style="padding: 16px 36px; background: #e11d48; color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1.05rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225,29,72,0.4);">
          <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call Us: <?php echo SITE_PHONE; ?>
        </a>
        <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20a%20quote%20for%20Mumbai%20to%20Jaipur%20Bike%20Transport." target="_blank" title="Get WhatsApp Quote" style="padding: 16px 36px; background: #10b981; color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1.05rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16,185,129,0.4);">
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
      "name": "How much does bike transport from Mumbai to Jaipur cost?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Door-to-door bike transport charges from Mumbai to Jaipur range between ₹3,600 to ₹4,400 for scooters, ₹4,000 to ₹5,000 for commuter bikes, and ₹5,500 to ₹6,800 for heavy motorcycles (Bullet/RE)."
      }
    },
    {
      "@type": "Question",
      "name": "How long does bike delivery take from Mumbai to Jaipur?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Direct container truck delivery takes between 3 to 4 days from Mumbai to Jaipur via the NH 48 highway corridor."
      }
    },
    {
      "@type": "Question",
      "name": "Do you deliver to Vaishali Nagar and Mansarovar in Jaipur?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes! We provide doorstep pickup in Mumbai and doorstep delivery across all Jaipur areas including Vaishali Nagar, Malviya Nagar, Mansarovar, C-Scheme, and Jagatpura."
      }
    },
    {
      "@type": "Question",
      "name": "What documents are required for bike transport?",
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
        "text": "Yes, comprehensive transit insurance policy coverage is included to safeguard your motorcycle against highway hazards."
      }
    }
  ]
}
</script>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
