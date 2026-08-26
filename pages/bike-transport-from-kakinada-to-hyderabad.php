<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "Bike Transport from Kakinada to Hyderabad | Safe Two-Wheeler Relocation";
$page_desc = "Safe, insured & door-to-door bike transport from Kakinada to Hyderabad. Get transparent rate cards, 7-layer bubble wrapping, transit insurance, and instant WhatsApp estimates. Complete delivery across Hitech City, Gachibowli, Kukatpally, Madhapur & Secunderabad.";
$page_keywords = "bike transport from kakinada to hyderabad, bike packers kakinada to hyderabad, motorcycle shipping kakinada to hyderabad, two wheeler parcel kakinada to hyderabad, bike courier charges kakinada hyderabad, shree ashirwad packers";
$canonical_url = "https://shreeashirwadpackersandmovers.com/pages/bike-transport-from-kakinada-to-hyderabad.php";

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
        <span class="breadcrumb-item active">Bike Transport Kakinada to Hyderabad</span>
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
            KAKINADA TO HYDERABAD BIKE RELOCATION SPECIALISTS
          </span>
          <h1 style="font-size: 2.5rem; font-weight: 800; line-height: 1.2; margin-bottom: 20px; color: #ffffff;">
            Safe & Insured <span style="color: #f59e0b;">Bike Transport from Kakinada to Hyderabad</span>
          </h1>
          <p style="font-size: 1.1rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 25px;">
            Relocating your motorcycle from Kakinada to Hyderabad? Shree Ashirwad Packers and Movers delivers hassle-free, door-to-door bike transport with 7-layer protective packaging, dedicated closed container trucks, and 100% transit insurance coverage. Direct door pickup across Kakinada (Bhanugudi, Jagannaickpur, Ramanayyapeta) to all parts of Hyderabad.
          </p>

          <div style="display: flex; gap: 15px; flex-wrap: wrap; margin-bottom: 30px;">
            <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Now" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
              <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call Now: <?php echo SITE_PHONE; ?>
            </a>
            <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20a%20quote%20for%20Bike%20Transport%20from%20Kakinada%20to%20Hyderabad." title="Chat on WhatsApp" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
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
              <input type="text" name="move_from" class="form-control" value="Kakinada" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
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
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; margin-bottom: 5px;">490+ KM</div>
          <div style="font-size: 0.9rem; color: #cbd5e1;">Kakinada - Hyderabad Distance</div>
        </div>
        <div style="padding: 20px; background: rgba(255,255,255,0.03); border-radius: 12px; border: 1px solid rgba(255,255,255,0.05);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #10b981; margin-bottom: 5px;">24 - 48 Hours</div>
          <div style="font-size: 0.9rem; color: #cbd5e1;">Express Transit Time</div>
        </div>
        <div style="padding: 20px; background: rgba(255,255,255,0.03); border-radius: 12px; border: 1px solid rgba(255,255,255,0.05);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #3b82f6; margin-bottom: 5px;">8,400+</div>
          <div style="font-size: 0.9rem; color: #cbd5e1;">Vehicles Delivered</div>
        </div>
        <div style="padding: 20px; background: rgba(255,255,255,0.03); border-radius: 12px; border: 1px solid rgba(255,255,255,0.05);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f43f5e; margin-bottom: 5px;">4.9 / 5.0</div>
          <div style="font-size: 0.9rem; color: #cbd5e1;">Verified Rating</div>
        </div>
      </div>
    </div>
  </section>

  <!-- 3. Detailed Service Overview & Route Highlights -->
  <section style="background: #0f172a; padding: 70px 0; color: #f8fafc;">
    <div class="container">
      <div style="max-width: 900px; margin: 0 auto; text-align: center; margin-bottom: 50px;">
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin-bottom: 15px;">
          Premium <span style="color: #f59e0b;">Kakinada to Hyderabad Motorcycle Transport</span>
        </h2>
        <p style="font-size: 1.05rem; color: #94a3b8; line-height: 1.8;">
          Connecting the coastal port city of Kakinada with Telangana's tech capital Hyderabad via NH 65 & NH 16. We offer specialized door-to-door two-wheeler relocation services tailored for students, IT professionals, and families moving between cities.
        </p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 30px;">
        <!-- Container Truck Transport -->
        <div style="background: #1e293b; border-radius: 16px; padding: 35px; border: 1.5px solid #f59e0b; display: flex; flex-direction: column; justify-content: space-between;">
          <div>
            <div style="display: inline-block; padding: 8px 16px; background: rgba(245, 158, 11, 0.15); color: #f59e0b; border-radius: 20px; font-weight: 700; font-size: 0.85rem; margin-bottom: 15px;">
              RECOMMENDED METHOD
            </div>
            <h3 style="font-size: 1.5rem; color: #ffffff; font-weight: 700; margin-bottom: 15px;">Enclosed Vehicle Carrier Trucking</h3>
            <p style="font-size: 0.95rem; color: #cbd5e1; line-height: 1.7; margin-bottom: 20px;">
              Your bike is packed at your doorstep in Kakinada and loaded into a covered container truck with hydraulic safety locks. Zero exposure to dust, rain, or road debris during highway transit.
            </p>
            <ul style="list-style: none; padding: 0; margin: 0 0 25px 0; font-size: 0.9rem; color: #cbd5e1;">
              <li style="margin-bottom: 10px;"><i class="fas fa-check-circle" style="color: #10b981; margin-right: 8px;"></i> Doorstep pickup from any address in Kakinada</li>
              <li style="margin-bottom: 10px;"><i class="fas fa-check-circle" style="color: #10b981; margin-right: 8px;"></i> Heavy-duty 7-layer bubble & foam wrap</li>
              <li style="margin-bottom: 10px;"><i class="fas fa-check-circle" style="color: #10b981; margin-right: 8px;"></i> Full transit insurance policy included</li>
              <li style="margin-bottom: 10px;"><i class="fas fa-check-circle" style="color: #10b981; margin-right: 8px;"></i> Direct delivery to Hitech City, Kukatpally, Gachibowli</li>
            </ul>
          </div>
          <div style="border-top: 1px solid rgba(255,255,255,0.1); padding-top: 20px; text-align: center;">
            <span style="font-size: 0.9rem; color: #94a3b8;">Door-to-Door Charges starting from</span>
            <div style="font-size: 1.8rem; font-weight: 800; color: #10b981;">₹2,800 - ₹4,800</div>
          </div>
        </div>

        <!-- Train Parcel Service -->
        <div style="background: #1e293b; border-radius: 16px; padding: 35px; border: 1px solid rgba(255,255,255,0.1); display: flex; flex-direction: column; justify-content: space-between;">
          <div>
            <div style="display: inline-block; padding: 8px 16px; background: rgba(59, 130, 246, 0.15); color: #3b82f6; border-radius: 20px; font-weight: 700; font-size: 0.85rem; margin-bottom: 15px;">
              ALTERNATIVE OPTION
            </div>
            <h3 style="font-size: 1.5rem; color: #ffffff; font-weight: 700; margin-bottom: 15px;">Railway Parcel Assistance</h3>
            <p style="font-size: 0.95rem; color: #cbd5e1; line-height: 1.7; margin-bottom: 20px;">
              For budget relocations, we provide station packaging, packing documentation, and railway parcel booking assistance from Kakinada Town (CCT) / Kakinada Port (COA) to Secunderabad (SC).
            </p>
            <ul style="list-style: none; padding: 0; margin: 0 0 25px 0; font-size: 0.9rem; color: #cbd5e1;">
              <li style="margin-bottom: 10px;"><i class="fas fa-check-circle" style="color: #10b981; margin-right: 8px;"></i> Economical station-to-station freight option</li>
              <li style="margin-bottom: 10px;"><i class="fas fa-check-circle" style="color: #10b981; margin-right: 8px;"></i> Professional station packing service</li>
              <li style="margin-bottom: 10px;"><i class="fas fa-exclamation-triangle" style="color: #f59e0b; margin-right: 8px;"></i> Petrol tank draining mandatory</li>
              <li style="margin-bottom: 10px;"><i class="fas fa-exclamation-triangle" style="color: #f59e0b; margin-right: 8px;"></i> Self-pickup required at Secunderabad junction</li>
            </ul>
          </div>
          <div style="border-top: 1px solid rgba(255,255,255,0.1); padding-top: 20px; text-align: center;">
            <span style="font-size: 0.9rem; color: #94a3b8;">Railway Charges starting from</span>
            <div style="font-size: 1.8rem; font-weight: 800; color: #f59e0b;">₹2,200 - ₹3,400</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 4. Rate Card & Tariff Table -->
  <section style="background: #0b132b; padding: 70px 0; color: #ffffff;">
    <div class="container">
      <div style="max-width: 800px; margin: 0 auto; text-align: center; margin-bottom: 40px;">
        <h2 style="font-size: 2.2rem; font-weight: 800; margin-bottom: 15px;">
          Kakinada to Hyderabad <span style="color: #f59e0b;">Bike Transport Cost Card</span>
        </h2>
        <p style="font-size: 1rem; color: #cbd5e1;">
          Clear, transparent pricing based on vehicle model, displacement (CC), and packing preferences.
        </p>
      </div>

      <div style="overflow-x: auto; max-width: 900px; margin: 0 auto;">
        <table style="width: 100%; border-collapse: collapse; text-align: left; background: #1c2541; border-radius: 12px; overflow: hidden; border: 1px solid rgba(255,255,255,0.1);">
          <thead>
            <tr style="background: #1e293b; color: #f59e0b; font-size: 1rem; border-bottom: 2px solid rgba(245,158,11,0.3);">
              <th style="padding: 18px 20px;">Bike Model / Engine Size</th>
              <th style="padding: 18px 20px;">Railway Parcel (Estimated)</th>
              <th style="padding: 18px 20px;">Door-to-Door Container Truck</th>
              <th style="padding: 18px 20px;">Wooden Crate Protection</th>
            </tr>
          </thead>
          <tbody style="color: #cbd5e1; font-size: 0.95rem;">
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.05);">
              <td style="padding: 16px 20px; font-weight: 600; color: #fff;">Moped / Scooter (Activa, Access 100-125cc)</td>
              <td style="padding: 16px 20px;">₹2,200 - ₹2,800</td>
              <td style="padding: 16px 20px; color: #10b981; font-weight: 700;">₹2,800 - ₹3,500</td>
              <td style="padding: 16px 20px;">₹3,800 - ₹4,400</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.05); background: rgba(255,255,255,0.02);">
              <td style="padding: 16px 20px; font-weight: 600; color: #fff;">Commuter Motorcycle (Shine, Passion 100-150cc)</td>
              <td style="padding: 16px 20px;">₹2,400 - ₹3,000</td>
              <td style="padding: 16px 20px; color: #10b981; font-weight: 700;">₹3,200 - ₹3,800</td>
              <td style="padding: 16px 20px;">₹4,200 - ₹4,800</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.05);">
              <td style="padding: 16px 20px; font-weight: 600; color: #fff;">Sports Bikes (FZ, Pulsar, Apache 160-250cc)</td>
              <td style="padding: 16px 20px;">₹2,800 - ₹3,400</td>
              <td style="padding: 16px 20px; color: #10b981; font-weight: 700;">₹3,600 - ₹4,400</td>
              <td style="padding: 16px 20px;">₹4,800 - ₹5,400</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.05); background: rgba(255,255,255,0.02);">
              <td style="padding: 16px 20px; font-weight: 600; color: #fff;">Cruiser / Heavy Bikes (Royal Enfield 350-500cc)</td>
              <td style="padding: 16px 20px;">₹3,200 - ₹3,800</td>
              <td style="padding: 16px 20px; color: #10b981; font-weight: 700;">₹4,200 - ₹5,000</td>
              <td style="padding: 16px 20px;">₹5,400 - ₹6,200</td>
            </tr>
            <tr>
              <td style="padding: 16px 20px; font-weight: 600; color: #fff;">Premium Superbikes (>500cc)</td>
              <td style="padding: 16px 20px;">N/A</td>
              <td style="padding: 16px 20px; color: #10b981; font-weight: 700;">₹5,800 - ₹7,500</td>
              <td style="padding: 16px 20px;">₹7,200 - ₹9,500</td>
            </tr>
          </tbody>
        </table>
      </div>
      <p style="text-align: center; font-size: 0.85rem; color: #94a3b8; margin-top: 15px;">
        * Note: Prices are indicative. Final rates depend on exact pickup locality in Kakinada, delivery sector in Hyderabad, and transit insurance options.
      </p>
    </div>
  </section>

  <!-- 5. Step-by-Step Relocation Process -->
  <section style="background: #0f172a; padding: 70px 0; color: #ffffff;">
    <div class="container">
      <div style="max-width: 800px; margin: 0 auto; text-align: center; margin-bottom: 50px;">
        <h2 style="font-size: 2.2rem; font-weight: 800; margin-bottom: 15px;">
          Our 5-Step <span style="color: #f59e0b;">Bike Shifting Workflow</span>
        </h2>
        <p style="font-size: 1rem; color: #94a3b8;">How we guarantee damage-free motorcycle delivery from Kakinada to Hyderabad</p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 25px;">
        <div style="background: #1e293b; padding: 30px; border-radius: 12px; border-top: 4px solid #f59e0b;">
          <div style="font-size: 1.8rem; font-weight: 800; color: #f59e0b; margin-bottom: 10px;">01</div>
          <h3 style="font-size: 1.2rem; font-weight: 700; margin-bottom: 10px;">Home Inspection</h3>
          <p style="font-size: 0.9rem; color: #cbd5e1; line-height: 1.6;">Our team arrives at your Kakinada address to inspect the motorcycle and prepare an initial condition checklist.</p>
        </div>
        <div style="background: #1e293b; padding: 30px; border-radius: 12px; border-top: 4px solid #10b981;">
          <div style="font-size: 1.8rem; font-weight: 800; color: #10b981; margin-bottom: 10px;">02</div>
          <h3 style="font-size: 1.2rem; font-weight: 700; margin-bottom: 10px;">Multi-Layer Wrapping</h3>
          <p style="font-size: 0.9rem; color: #cbd5e1; line-height: 1.6;">We apply 7 layers of high-density bubble wrap, foam, corrugated cardboards, and stretch film around mirrors, engine, and tank.</p>
        </div>
        <div style="background: #1e293b; padding: 30px; border-radius: 12px; border-top: 4px solid #3b82f6;">
          <div style="font-size: 1.8rem; font-weight: 800; color: #3b82f6; margin-bottom: 10px;">03</div>
          <h3 style="font-size: 1.2rem; font-weight: 700; margin-bottom: 10px;">Truck Anchorage</h3>
          <p style="font-size: 0.9rem; color: #cbd5e1; line-height: 1.6;">Using heavy-duty ratchet belts, your bike is securely locked inside covered container vehicles to prevent movement.</p>
        </div>
        <div style="background: #1e293b; padding: 30px; border-radius: 12px; border-top: 4px solid #a855f7;">
          <div style="font-size: 1.8rem; font-weight: 800; color: #a855f7; margin-bottom: 10px;">04</div>
          <h3 style="font-size: 1.2rem; font-weight: 700; margin-bottom: 10px;">Highway Transit</h3>
          <p style="font-size: 0.9rem; color: #cbd5e1; line-height: 1.6;">Vehicle travels along Kakinada-Rajahmundry-Vijayawada-Suryapet-Hyderabad corridor with live status tracking.</p>
        </div>
        <div style="background: #1e293b; padding: 30px; border-radius: 12px; border-top: 4px solid #f43f5e;">
          <div style="font-size: 1.8rem; font-weight: 800; color: #f43f5e; margin-bottom: 10px;">05</div>
          <h3 style="font-size: 1.2rem; font-weight: 700; margin-bottom: 10px;">Doorstep Delivery</h3>
          <p style="font-size: 0.9rem; color: #cbd5e1; line-height: 1.6;">Safe delivery and careful unpacking at your exact doorstep in Hyderabad (Hitech City, Kukatpally, Madhapur, etc.).</p>
        </div>
      </div>
    </div>
  </section>

  <!-- 6. Required Documents -->
  <section style="background: #0b132b; padding: 60px 0; color: #ffffff;">
    <div class="container">
      <div style="background: linear-gradient(135deg, #1c2541 0%, #1e293b 100%); border-radius: 16px; padding: 40px; border: 1px solid rgba(245,158,11,0.2);">
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 30px; align-items: center;">
          <div>
            <span style="color: #f59e0b; font-weight: 700; text-transform: uppercase; font-size: 0.85rem; letter-spacing: 1px;">RTO & REGULATORY COMPLIANCE</span>
            <h2 style="font-size: 1.8rem; font-weight: 800; margin: 10px 0 20px 0;">Essential Documents for Transit</h2>
            <p style="font-size: 0.95rem; color: #cbd5e1; line-height: 1.7;">
              To ensure smooth highway transit and compliance with Andhra Pradesh to Telangana border checkposts, please keep copies of the following documents ready:
            </p>
          </div>
          <div>
            <ul style="list-style: none; padding: 0; margin: 0; font-size: 0.95rem; color: #f8fafc;">
              <li style="padding: 12px 16px; background: rgba(0,0,0,0.2); border-radius: 8px; margin-bottom: 10px; display: flex; align-items: center;">
                <i class="fas fa-file-contract" style="color: #f59e0b; margin-right: 12px; font-size: 1.2rem;"></i> Vehicle RC Copy (Registration Certificate)
              </li>
              <li style="padding: 12px 16px; background: rgba(0,0,0,0.2); border-radius: 8px; margin-bottom: 10px; display: flex; align-items: center;">
                <i class="fas fa-shield-alt" style="color: #10b981; margin-right: 12px; font-size: 1.2rem;"></i> Active Motor Insurance Certificate
              </li>
              <li style="padding: 12px 16px; background: rgba(0,0,0,0.2); border-radius: 8px; margin-bottom: 10px; display: flex; align-items: center;">
                <i class="fas fa-id-card" style="color: #3b82f6; margin-right: 12px; font-size: 1.2rem;"></i> Owner Government ID (Aadhaar / Driving License)
              </li>
              <li style="padding: 12px 16px; background: rgba(0,0,0,0.2); border-radius: 8px; display: flex; align-items: center;">
                <i class="fas fa-gas-pump" style="color: #f43f5e; margin-right: 12px; font-size: 1.2rem;"></i> PUC Certificate & Empty Fuel Tank Declaration
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 7. Locality Coverage: Kakinada & Hyderabad -->
  <section style="background: #0f172a; padding: 70px 0; color: #ffffff;">
    <div class="container">
      <div style="text-align: center; margin-bottom: 40px;">
        <h2 style="font-size: 2rem; font-weight: 800;">
          Pickup in <span style="color: #f59e0b;">Kakinada</span> & Delivery in <span style="color: #10b981;">Hyderabad</span>
        </h2>
        <p style="font-size: 1rem; color: #94a3b8;">100% door-to-door network coverage across both cities</p>
      </div>

      <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 30px;">
        <!-- Kakinada Localities -->
        <div style="background: #1e293b; padding: 30px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.05);">
          <h3 style="font-size: 1.3rem; font-weight: 700; color: #f59e0b; margin-bottom: 15px;">
            <i class="fas fa-map-marker-alt" style="margin-right: 8px;"></i> Kakinada Pickup Points
          </h3>
          <p style="font-size: 0.9rem; color: #cbd5e1; line-height: 1.8;">
            Bhanugudi Junction, Jagannaickpur, Ramanayyapeta, Gaigolupadu, Suryaraopeta, Sarpavaram, Sambamurthy Nagar, Cinema Road, Kakinada Port Area, Achampeta, and Nagamallithota.
          </p>
        </div>

        <!-- Hyderabad Localities -->
        <div style="background: #1e293b; padding: 30px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.05);">
          <h3 style="font-size: 1.3rem; font-weight: 700; color: #10b981; margin-bottom: 15px;">
            <i class="fas fa-map-marker-alt" style="margin-right: 8px;"></i> Hyderabad Delivery Points
          </h3>
          <p style="font-size: 0.9rem; color: #cbd5e1; line-height: 1.8;">
            Hitech City, Kukatpally, Gachibowli, Madhapur, Kondapur, Banjara Hills, Jubilee Hills, Secunderabad, Begumpet, Miyapur, Ameerpet, Dilsukhnagar, LB Nagar, Kompally, and Uppal.
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
        <p style="font-size: 1rem; color: #94a3b8;">Reliable intercity vehicle relocation services since 2015</p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 25px;">
        <div style="background: #1c2541; padding: 25px; border-radius: 12px; border-left: 4px solid #f59e0b;">
          <h3 style="font-size: 1.15rem; font-weight: 700; margin-bottom: 10px; color: #fff;">Scratch-Proof Packaging</h3>
          <p style="font-size: 0.9rem; color: #cbd5e1; line-height: 1.6;">Multi-layered bubble wrapping and corrugated box padding protects paintwork and plastic fairings from damage.</p>
        </div>
        <div style="background: #1c2541; padding: 25px; border-radius: 12px; border-left: 4px solid #10b981;">
          <h3 style="font-size: 1.15rem; font-weight: 700; margin-bottom: 10px; color: #fff;">100% Transit Protection</h3>
          <p style="font-size: 0.9rem; color: #cbd5e1; line-height: 1.6;">Full transit insurance coverage for complete financial peace of mind against any highway emergencies.</p>
        </div>
        <div style="background: #1c2541; padding: 25px; border-radius: 12px; border-left: 4px solid #3b82f6;">
          <h3 style="font-size: 1.15rem; font-weight: 700; margin-bottom: 10px; color: #fff;">Express 24-48 Hr Delivery</h3>
          <p style="font-size: 0.9rem; color: #cbd5e1; line-height: 1.6;">Direct highway transit along NH 65 ensuring rapid delivery to Hyderabad within 24 to 48 hours.</p>
        </div>
        <div style="background: #1c2541; padding: 25px; border-radius: 12px; border-left: 4px solid #a855f7;">
          <h3 style="font-size: 1.15rem; font-weight: 700; margin-bottom: 10px; color: #fff;">Transparent Pricing</h3>
          <p style="font-size: 0.9rem; color: #cbd5e1; line-height: 1.6;">All-inclusive pricing upfront with zero hidden charges, toll surcharges, or unquoted fees.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- 9. Customer Reviews -->
  <section style="background: #0f172a; padding: 70px 0; color: #ffffff;">
    <div class="container">
      <div style="text-align: center; margin-bottom: 45px;">
        <h2 style="font-size: 2rem; font-weight: 800;">
          Customer Feedback: <span style="color: #f59e0b;">Kakinada to Hyderabad</span>
        </h2>
        <p style="font-size: 0.95rem; color: #94a3b8;">Real reviews from clients who relocated their two-wheelers with us</p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 25px;">
        <div style="background: #1e293b; padding: 30px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.05);">
          <div style="color: #f59e0b; margin-bottom: 12px;">
            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
          </div>
          <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.7; margin-bottom: 15px;">
            "Shifted my Honda Hornet from Bhanugudi Kakinada to Hitech City Hyderabad. Packed very securely with bubble wrap and delivered next day. Excellent communication."
          </p>
          <div style="font-weight: 700; color: #fff;">— Srinivas Raju</div>
          <div style="font-size: 0.8rem; color: #94a3b8;">Software Engineer, Hitech City</div>
        </div>

        <div style="background: #1e293b; padding: 30px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.05);">
          <div style="color: #f59e0b; margin-bottom: 12px;">
            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
          </div>
          <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.7; margin-bottom: 15px;">
            "Transported my TVS Jupiter scooter. Pickup was on time in Kakinada and door delivery in Kukatpally was smooth. Very reasonable rates."
          </p>
          <div style="font-weight: 700; color: #fff;">— K. Lakshmi Narayana</div>
          <div style="font-size: 0.8rem; color: #94a3b8;">Bank Manager, Kukatpally</div>
        </div>

        <div style="background: #1e293b; padding: 30px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.05);">
          <div style="color: #f59e0b; margin-bottom: 12px;">
            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
          </div>
          <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.7; margin-bottom: 15px;">
            "Royal Enfield Classic 350 relocated smoothly. Wooden crating option kept the bike safe. Very happy with Shree Ashirwad Packers!"
          </p>
          <div style="font-weight: 700; color: #fff;">— Venkat Ramana</div>
          <div style="font-size: 0.8rem; color: #94a3b8;">Civil Engineer, Gachibowli</div>
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
          <p style="font-size: 1rem; color: #94a3b8;">Got questions about bike shifting from Kakinada to Hyderabad?</p>
        </div>

        <div style="display: flex; flex-direction: column; gap: 15px;">
          <div style="background: #1c2541; border-radius: 10px; padding: 22px; border: 1px solid rgba(255,255,255,0.08);">
            <h3 style="font-size: 1.1rem; font-weight: 700; color: #f59e0b; margin-bottom: 8px;">Q1: What are the bike transport charges from Kakinada to Hyderabad?</h3>
            <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.6; margin: 0;">
              Door-to-door bike transport charges from Kakinada to Hyderabad start from ₹2,800 to ₹3,500 for scooters, ₹3,200 to ₹3,800 for commuter motorcycles, and ₹4,200 to ₹5,000 for heavy bikes (Royal Enfield) depending on packaging selection.
            </p>
          </div>

          <div style="background: #1c2541; border-radius: 10px; padding: 22px; border: 1px solid rgba(255,255,255,0.08);">
            <h3 style="font-size: 1.1rem; font-weight: 700; color: #f59e0b; margin-bottom: 8px;">Q2: How long does bike delivery take from Kakinada to Hyderabad?</h3>
            <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.6; margin: 0;">
              Direct truck delivery takes between 24 to 48 hours from Kakinada to Hyderabad.
            </p>
          </div>

          <div style="background: #1c2541; border-radius: 10px; padding: 22px; border: 1px solid rgba(255,255,255,0.08);">
            <h3 style="font-size: 1.1rem; font-weight: 700; color: #f59e0b; margin-bottom: 8px;">Q3: Is doorstep pickup available in Kakinada?</h3>
            <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.6; margin: 0;">
              Yes! We offer 100% doorstep pickup across Bhanugudi, Jagannaickpur, Ramanayyapeta, and all residential areas in Kakinada.
            </p>
          </div>

          <div style="background: #1c2541; border-radius: 10px; padding: 22px; border: 1px solid rgba(255,255,255,0.08);">
            <h3 style="font-size: 1.1rem; font-weight: 700; color: #f59e0b; margin-bottom: 8px;">Q4: What documents do I need to submit for bike transport?</h3>
            <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.6; margin: 0;">
              You need to provide a copy of your vehicle RC, valid bike insurance policy, and owner Govt ID proof (Aadhaar or DL).
            </p>
          </div>

          <div style="background: #1c2541; border-radius: 10px; padding: 22px; border: 1px solid rgba(255,255,255,0.08);">
            <h3 style="font-size: 1.1rem; font-weight: 700; color: #f59e0b; margin-bottom: 8px;">Q5: Is transit insurance included in the quotation?</h3>
            <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.6; margin: 0;">
              Yes, full transit insurance coverage is included to safeguard your motorcycle against unforeseen road hazards.
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
        Book Your Bike Transport from Kakinada to Hyderabad
      </h2>
      <p style="font-size: 1.1rem; color: #cbd5e1; max-width: 700px; margin: 0 auto 30px auto;">
        Get instant transparent quotes, free doorstep inspection, and 100% insured two-wheeler relocation today.
      </p>

      <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap;">
        <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Us Now" style="padding: 16px 36px; background: #e11d48; color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1.05rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225,29,72,0.4);">
          <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call Us: <?php echo SITE_PHONE; ?>
        </a>
        <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20a%20quote%20for%20Kakinada%20to%20Hyderabad%20Bike%20Transport." target="_blank" title="Get WhatsApp Quote" style="padding: 16px 36px; background: #10b981; color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1.05rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16,185,129,0.4);">
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
      "name": "What are the bike transport charges from Kakinada to Hyderabad?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Door-to-door bike transport charges from Kakinada to Hyderabad start from ₹2,800 to ₹3,500 for scooters, ₹3,200 to ₹3,800 for commuter motorcycles, and ₹4,200 to ₹5,000 for heavy bikes (Royal Enfield) depending on packaging selection."
      }
    },
    {
      "@type": "Question",
      "name": "How long does bike delivery take from Kakinada to Hyderabad?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Direct truck delivery takes between 24 to 48 hours from Kakinada to Hyderabad."
      }
    },
    {
      "@type": "Question",
      "name": "Is doorstep pickup available in Kakinada?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes! We offer 100% doorstep pickup across Bhanugudi, Jagannaickpur, Ramanayyapeta, and all residential areas in Kakinada."
      }
    },
    {
      "@type": "Question",
      "name": "What documents do I need to submit for bike transport?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "You need to provide a copy of your vehicle RC, valid bike insurance policy, and owner Govt ID proof (Aadhaar or DL)."
      }
    },
    {
      "@type": "Question",
      "name": "Is transit insurance included in the quotation?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, full transit insurance coverage is included to safeguard your motorcycle against unforeseen road hazards."
      }
    }
  ]
}
</script>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
