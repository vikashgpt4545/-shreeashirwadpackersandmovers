<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "Safe Bike Transport from Hyderabad to Visakhapatnam | Instant Quote";
$page_desc = "Get fast, safe, and fully insured bike transport from Hyderabad to Visakhapatnam (Vizag). 7-layer safety packaging, doorstep pickup, and live GPS tracking. Calculate charges now!";
$page_keywords = "bike transport from hyderabad to visakhapatnam, hyderabad to vizag bike transport cost, two wheeler parcel hyderabad to visakhapatnam, bike shifting hyderabad to visakhapatnam, motorcycle courier hyderabad to vizag";
$canonical_url = "https://shreeashirwadpackersandmovers.com/pages/bike-transport-from-hyderabad-to-visakhapatnam.php";

require_once __DIR__ . '/../includes/header.php';
?>

<main class="site-main">

  <!-- Visual Breadcrumb Navigation Bar -->
  <div class="breadcrumb-wrapper">
    <div class="container">
      <div class="breadcrumb-list">
        <span class="breadcrumb-item"><a href="<?php echo SITE_URL; ?>" title="Home">Home</a></span>
        <span class="breadcrumb-separator">/</span>
        <span class="breadcrumb-item active">Bike Transport Hyderabad to Visakhapatnam</span>
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
            HYDERABAD TO VISAKHAPATNAM BIKE SHIFTING
          </span>
          <h1 style="font-size: 2.7rem; font-weight: 800; line-height: 1.2; margin-bottom: 20px; color: #ffffff;">
            Professional <span style="color: #f59e0b;">Bike Transport from Hyderabad to Visakhapatnam</span>
          </h1>
          <p style="font-size: 1.12rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 25px;">
            Relocating your two-wheeler from Hyderabad to Visakhapatnam (Vizag)? Shree Ashirwad Packers and Movers offers 100% scratch-free, insured motorcycle parcel services with doorstep pickup across HITEC City, Gachibowli, Madhapur, Kukatpally, Secunderabad, and Kondapur to all locations in Visakhapatnam.
          </p>

          <div style="display: flex; gap: 15px; flex-wrap: wrap; margin-bottom: 30px;">
            <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Now" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
              <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call Now: <?php echo SITE_PHONE; ?>
            </a>
            <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20a%20quote%20for%20bike%20transport%20from%20Hyderabad%20to%20Visakhapatnam." title="Chat on WhatsApp" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
              <i class="fab fa-whatsapp" style="margin-right: 8px;"></i> WhatsApp Quote
            </a>
          </div>

          <div style="display: flex; gap: 20px; font-size: 0.9rem; color: #94a3b8; flex-wrap: wrap;">
            <span><strong style="color: #f59e0b;">✓ 100% Insured</strong> Transit</span>
            <span><strong style="color: #f59e0b;">✓ 7-Layer</strong> Multi-Cushion Wrap</span>
            <span><strong style="color: #f59e0b;">✓ Doorstep</strong> Pickup & Delivery</span>
          </div>
        </div>

        <!-- Hero Lead Form Column -->
        <div class="hero-form-card" style="background: rgba(255, 255, 255, 0.05); backdrop-filter: blur(10px); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 16px; padding: 30px; box-shadow: 0 15px 35px rgba(0,0,0,0.4);">
          <h2 style="font-size: 1.4rem; color: #ffffff; margin-bottom: 8px; font-weight: 700; text-align: center;">Get Instant Bike Shifting Estimate</h2>
          <p style="font-size: 0.85rem; color: #94a3b8; text-align: center; margin-bottom: 20px;">Transparent Hyderabad to Visakhapatnam pricing in 2 minutes</p>

          <form action="#" method="POST" onsubmit="sendHeroWhatsAppLead(event, this);">
            <div style="margin-bottom: 14px;">
              <input type="text" name="name" class="form-control" placeholder="Your Full Name" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="margin-bottom: 14px;">
              <input type="tel" name="phone" class="form-control" placeholder="10-Digit Mobile Number" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 10px; margin-bottom: 14px;">
              <input type="text" name="move_from" class="form-control" value="Hyderabad" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
              <input type="text" name="move_to" class="form-control" value="Visakhapatnam" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <button type="submit" style="width: 100%; padding: 14px; background: linear-gradient(135deg, #d32f2f 0%, #f59e0b 100%); color: #ffffff; border: none; border-radius: 50px; font-weight: 700; font-size: 1rem; cursor: pointer; transition: all 0.3s ease;">
              Get Instant Estimate Now &rarr;
            </button>
          </form>
        </div>

      </div>
    </div>
  </section>

  <!-- 2. Route Overview & Distance Highlights -->
  <section style="padding: 60px 0; background: #0f172a; color: #f8fafc;">
    <div class="container">
      <div style="max-width: 800px; margin: 0 auto 40px text-align: center;">
        <h2 style="font-size: 2.2rem; font-weight: 700; color: #ffffff; margin-bottom: 15px;">
          Hyderabad to Visakhapatnam Bike Route Highlights
        </h2>
        <p style="color: #94a3b8; font-size: 1.05rem; line-height: 1.7;">
          Connecting Telangana’s capital with Andhra Pradesh’s largest coastal city via NH65 and NH16 corridor.
        </p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); gap: 25px;">
        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 25px; border-radius: 12px; text-align: center;">
          <div style="font-size: 2.2rem; color: #f59e0b; margin-bottom: 10px;"><i class="fas fa-route"></i></div>
          <h3 style="font-size: 1.2rem; color: #fff; margin-bottom: 5px;">Total Distance</h3>
          <p style="color: #cbd5e1; font-size: 1.1rem; font-weight: 600;">Approx. 620 KM</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 25px; border-radius: 12px; text-align: center;">
          <div style="font-size: 2.2rem; color: #f59e0b; margin-bottom: 10px;"><i class="fas fa-clock"></i></div>
          <h3 style="font-size: 1.2rem; color: #fff; margin-bottom: 5px;">Estimated Transit Time</h3>
          <p style="color: #cbd5e1; font-size: 1.1rem; font-weight: 600;">2 - 4 Business Days</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 25px; border-radius: 12px; text-align: center;">
          <div style="font-size: 2.2rem; color: #f59e0b; margin-bottom: 10px;"><i class="fas fa-shield-alt"></i></div>
          <h3 style="font-size: 1.2rem; color: #fff; margin-bottom: 5px;">Insurance Cover</h3>
          <p style="color: #cbd5e1; font-size: 1.1rem; font-weight: 600;">Full Value Protection</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 25px; border-radius: 12px; text-align: center;">
          <div style="font-size: 2.2rem; color: #f59e0b; margin-bottom: 10px;"><i class="fas fa-truck-loading"></i></div>
          <h3 style="font-size: 1.2rem; color: #fff; margin-bottom: 5px;">Transport Type</h3>
          <p style="color: #cbd5e1; font-size: 1.1rem; font-weight: 600;">Covered Hydraulic Containers</p>
        </div>
      </div>
    </div>
  </section>

  <!-- 3. Transparent Pricing Table -->
  <section style="padding: 60px 0; background: #0b132b; color: #ffffff;">
    <div class="container">
      <div style="max-width: 800px; margin: 0 auto 40px; text-align: center;">
        <h2 style="font-size: 2.2rem; font-weight: 700; margin-bottom: 15px; color: #fff;">
          Hyderabad to Visakhapatnam Bike Transport Charges
        </h2>
        <p style="color: #94a3b8; font-size: 1rem;">
          Estimated costs based on vehicle engine capacity and specialized protective packaging requirements.
        </p>
      </div>

      <div style="max-width: 900px; margin: 0 auto; overflow-x: auto;">
        <table style="width: 100%; border-collapse: collapse; background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.1); border-radius: 12px; overflow: hidden; text-align: left;">
          <thead>
            <tr style="background: rgba(245, 158, 11, 0.15); color: #f59e0b; border-bottom: 1px solid rgba(255,255,255,0.1);">
              <th style="padding: 16px 20px; font-size: 1.05rem;">Two-Wheeler Type</th>
              <th style="padding: 16px 20px; font-size: 1.05rem;">Engine Capacity</th>
              <th style="padding: 16px 20px; font-size: 1.05rem;">Estimated Price</th>
              <th style="padding: 16px 20px; font-size: 1.05rem;">Transit Duration</th>
            </tr>
          </thead>
          <tbody style="color: #cbd5e1;">
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.05);">
              <td style="padding: 16px 20px; font-weight: 600; color: #fff;">Standard Scooters / Mopeds</td>
              <td style="padding: 16px 20px;">100cc - 125cc</td>
              <td style="padding: 16px 20px; color: #f59e0b; font-weight: 700;">₹3,500 - ₹4,800</td>
              <td style="padding: 16px 20px;">2 - 3 Days</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.05);">
              <td style="padding: 16px 20px; font-weight: 600; color: #fff;">Commuter Motorcycles</td>
              <td style="padding: 16px 20px;">110cc - 150cc</td>
              <td style="padding: 16px 20px; color: #f59e0b; font-weight: 700;">₹4,000 - ₹5,200</td>
              <td style="padding: 16px 20px;">2 - 3 Days</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.05);">
              <td style="padding: 16px 20px; font-weight: 600; color: #fff;">Sports / Executive Bikes</td>
              <td style="padding: 16px 20px;">150cc - 250cc</td>
              <td style="padding: 16px 20px; color: #f59e0b; font-weight: 700;">₹4,800 - ₹6,200</td>
              <td style="padding: 16px 20px;">3 - 4 Days</td>
            </tr>
            <tr>
              <td style="padding: 16px 20px; font-weight: 600; color: #fff;">Cruisers & Superbikes</td>
              <td style="padding: 16px 20px;">350cc + / Luxury</td>
              <td style="padding: 16px 20px; color: #f59e0b; font-weight: 700;">₹5,800 - ₹7,500</td>
              <td style="padding: 16px 20px;">3 - 4 Days</td>
            </tr>
          </tbody>
        </table>
      </div>
      <p style="font-size: 0.85rem; color: #94a3b8; text-align: center; margin-top: 15px;">*Final charges may vary based on exact pickup/drop locality in Visakhapatnam and optional transit insurance.</p>
    </div>
  </section>

  <!-- 4. 7-Layer Packaging System -->
  <section style="padding: 60px 0; background: #0f172a; color: #ffffff;">
    <div class="container">
      <div style="max-width: 800px; margin: 0 auto 40px; text-align: center;">
        <h2 style="font-size: 2.2rem; font-weight: 700; margin-bottom: 15px;">Our 7-Layer Bike Protection Shield</h2>
        <p style="color: #94a3b8; font-size: 1rem;">We treat your vehicle like our own using industry-leading multi-layered wrapping technology.</p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 25px;">
        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 25px; border-radius: 12px;">
          <span style="color: #f59e0b; font-weight: 800; font-size: 1.2rem;">01</span>
          <h3 style="font-size: 1.15rem; color: #fff; margin: 10px 0 8px;">Scratch-Guard Soft Film</h3>
          <p style="color: #94a3b8; font-size: 0.95rem; line-height: 1.6;">Initial layer applied directly to paintwork, fuel tank, and headlights to shield against micro-scratches.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 25px; border-radius: 12px;">
          <span style="color: #f59e0b; font-weight: 800; font-size: 1.2rem;">02</span>
          <h3 style="font-size: 1.15rem; color: #fff; margin: 10px 0 8px;">Heavy Bubble Cushioning</h3>
          <p style="color: #94a3b8; font-size: 0.95rem; line-height: 1.6;">High-density air bubble wrap surrounding the entire body frame, handlebars, and exhaust pipes.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 25px; border-radius: 12px;">
          <span style="color: #f59e0b; font-weight: 800; font-size: 1.2rem;">03</span>
          <h3 style="font-size: 1.15rem; color: #fff; margin: 10px 0 8px;">Corrugated Fiber Sheets</h3>
          <p style="color: #94a3b8; font-size: 0.95rem; line-height: 1.6;">Thick corrugated sheets wrapped over vulnerable side panels, indicators, and mirrors for impact resistance.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 25px; border-radius: 12px;">
          <span style="color: #f59e0b; font-weight: 800; font-size: 1.2rem;">04</span>
          <h3 style="font-size: 1.15rem; color: #fff; margin: 10px 0 8px;">Edge Guard Protectors</h3>
          <p style="color: #94a3b8; font-size: 0.95rem; line-height: 1.6;">Reinforced foam corners fitted over brake levers, footrests, and silencers.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 25px; border-radius: 12px;">
          <span style="color: #f59e0b; font-weight: 800; font-size: 1.2rem;">05</span>
          <h3 style="font-size: 1.15rem; color: #fff; margin: 10px 0 8px;">Stretch Film Sealing</h3>
          <p style="color: #94a3b8; font-size: 0.95rem; line-height: 1.6;">Weatherproof stretch film sealing all layers tightly against dust, rain, and moisture during interstate transit.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 25px; border-radius: 12px;">
          <span style="color: #f59e0b; font-weight: 800; font-size: 1.2rem;">06</span>
          <h3 style="font-size: 1.15rem; color: #fff; margin: 10px 0 8px;">Heavy-Duty Cargo Strapping</h3>
          <p style="color: #94a3b8; font-size: 0.95rem; line-height: 1.6;">Tied down inside specialized closed car carriers using industrial nylon ratchet belts to eliminate movement.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- 5. Step-by-Step Transport Workflow -->
  <section style="padding: 60px 0; background: #0b132b; color: #ffffff;">
    <div class="container">
      <div style="max-width: 800px; margin: 0 auto 40px; text-align: center;">
        <h2 style="font-size: 2.2rem; font-weight: 700; margin-bottom: 15px;">How Our Bike Shifting Service Works</h2>
        <p style="color: #94a3b8; font-size: 1rem;">Simple 4-step process from booking to final doorstep handover in Visakhapatnam.</p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 20px;">
        <div style="background: rgba(255,255,255,0.03); padding: 25px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.05); text-align: center;">
          <div style="width: 50px; height: 50px; background: #f59e0b; color: #000; font-weight: 800; font-size: 1.3rem; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 15px;">1</div>
          <h3 style="font-size: 1.1rem; color: #fff; margin-bottom: 8px;">Doorstep Inspection</h3>
          <p style="color: #94a3b8; font-size: 0.9rem;">Our team arrives at your Hyderabad home, conducts physical condition inspection & creates digital inventory report.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); padding: 25px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.05); text-align: center;">
          <div style="width: 50px; height: 50px; background: #f59e0b; color: #000; font-weight: 800; font-size: 1.3rem; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 15px;">2</div>
          <h3 style="font-size: 1.1rem; color: #fff; margin-bottom: 8px;">Multi-Layer Packing</h3>
          <p style="color: #94a3b8; font-size: 0.9rem;">Vehicle is wrapped on-site with 7-layer protective cushioning & loaded securely onto closed carriers.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); padding: 25px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.05); text-align: center;">
          <div style="width: 50px; height: 50px; background: #f59e0b; color: #000; font-weight: 800; font-size: 1.3rem; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 15px;">3</div>
          <h3 style="font-size: 1.1rem; color: #fff; margin-bottom: 8px;">Transit & Tracking</h3>
          <p style="color: #94a3b8; font-size: 0.9rem;">Safely navigated via NH65 & NH16 with live location updates shared with you via WhatsApp.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); padding: 25px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.05); text-align: center;">
          <div style="width: 50px; height: 50px; background: #f59e0b; color: #000; font-weight: 800; font-size: 1.3rem; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 15px;">4</div>
          <h3 style="font-size: 1.1rem; color: #fff; margin-bottom: 8px;">Visakhapatnam Unpacking</h3>
          <p style="color: #94a3b8; font-size: 0.9rem;">Unloaded at your Visakhapatnam destination, inspected joint-by-joint with you before final sign-off.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- 6. Essential Documentation Checklist -->
  <section style="padding: 60px 0; background: #0f172a; color: #ffffff;">
    <div class="container">
      <div style="max-width: 800px; margin: 0 auto 40px; text-align: center;">
        <h2 style="font-size: 2.2rem; font-weight: 700; margin-bottom: 15px;">Documents Required for Interstate Bike Parcel</h2>
        <p style="color: #94a3b8; font-size: 1rem;">Simple documentation needed for hassle-free checkpoint clearance across Telangana & Andhra Pradesh.</p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 20px; max-width: 900px; margin: 0 auto;">
        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 20px; border-radius: 10px; display: flex; align-items: center; gap: 15px;">
          <i class="fas fa-file-alt" style="font-size: 1.8rem; color: #f59e0b;"></i>
          <div>
            <h3 style="font-size: 1.05rem; color: #fff; margin-bottom: 3px;">Vehicle Registration Copy (RC)</h3>
            <p style="color: #94a3b8; font-size: 0.85rem;">Photocopy of valid Registration Certificate</p>
          </div>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 20px; border-radius: 10px; display: flex; align-items: center; gap: 15px;">
          <i class="fas fa-shield-alt" style="font-size: 1.8rem; color: #f59e0b;"></i>
          <div>
            <h3 style="font-size: 1.05rem; color: #fff; margin-bottom: 3px;">Insurance Policy Copy</h3>
            <p style="color: #94a3b8; font-size: 0.85rem;">Valid third-party or comprehensive insurance cover</p>
          </div>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 20px; border-radius: 10px; display: flex; align-items: center; gap: 15px;">
          <i class="fas fa-id-card" style="font-size: 1.8rem; color: #f59e0b;"></i>
          <div>
            <h3 style="font-size: 1.05rem; color: #fff; margin-bottom: 3px;">Government Photo ID</h3>
            <p style="color: #94a3b8; font-size: 0.85rem;">Aadhar Card or Driving License photocopy</p>
          </div>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 20px; border-radius: 10px; display: flex; align-items: center; gap: 15px;">
          <i class="fas fa-receipt" style="font-size: 1.8rem; color: #f59e0b;"></i>
          <div>
            <h3 style="font-size: 1.05rem; color: #fff; margin-bottom: 3px;">Consignment Note / Lorry Receipt</h3>
            <p style="color: #94a3b8; font-size: 0.85rem;">Issued by Shree Ashirwad Packers during pickup</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 7. Localities Covered in Hyderabad & Visakhapatnam -->
  <section style="padding: 60px 0; background: #0b132b; color: #ffffff;">
    <div class="container">
      <div style="max-width: 800px; margin: 0 auto 40px; text-align: center;">
        <h2 style="font-size: 2.2rem; font-weight: 700; margin-bottom: 15px;">Doorstep Coverage Network</h2>
        <p style="color: #94a3b8; font-size: 1rem;">Complete doorstep pickup across Hyderabad and delivery in Visakhapatnam.</p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px;">
        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 25px; border-radius: 12px;">
          <h3 style="font-size: 1.2rem; color: #f59e0b; margin-bottom: 15px;"><i class="fas fa-map-marker-alt"></i> Hyderabad Pickup Hubs</h3>
          <ul style="list-style: none; padding: 0; color: #cbd5e1; font-size: 0.95rem; line-height: 2;">
            <li>✓ HITEC City, Gachibowli, Madhapur, Kondapur</li>
            <li>✓ Kukatpally, Miyapur, Chandanagar, Nizampet</li>
            <li>✓ Secunderabad, Begumpet, Somajiguda, Ameerpet</li>
            <li>✓ Banjara Hills, Jubilee Hills, Mehdipatnam</li>
            <li>✓ LB Nagar, Dilsukhnagar, Uppal, Kompally</li>
          </ul>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 25px; border-radius: 12px;">
          <h3 style="font-size: 1.2rem; color: #f59e0b; margin-bottom: 15px;"><i class="fas fa-map-marker-alt"></i> Visakhapatnam Delivery Hubs</h3>
          <ul style="list-style: none; padding: 0; color: #cbd5e1; font-size: 0.95rem; line-height: 2;">
            <li>✓ Gajuwaka, MVP Colony, Siripuram, Seethammadhara</li>
            <li>✓ Madhurawada, Rushikonda, Pendurthi, Sujatha Nagar</li>
            <li>✓ Gopalapatnam, Akkayyapalem, Dwaraka Nagar, Dondaparthy</li>
            <li>✓ Steel Plant Township, Kurmannapalem, Sheela Nagar</li>
            <li>✓ Anakapalle, Bheemunipatnam (Bheemili) & nearby areas</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- 8. Why Choose Shree Ashirwad Packers -->
  <section style="padding: 60px 0; background: #0f172a; color: #ffffff;">
    <div class="container">
      <div style="max-width: 800px; margin: 0 auto 40px; text-align: center;">
        <h2 style="font-size: 2.2rem; font-weight: 700; margin-bottom: 15px;">Why Trust Us for Hyderabad to Visakhapatnam Bike Shifting</h2>
        <p style="color: #94a3b8; font-size: 1rem;">Experience stress-free two-wheeler transportation with our specialized services.</p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 20px;">
        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 25px; border-radius: 12px;">
          <i class="fas fa-shield-virus" style="font-size: 2rem; color: #f59e0b; margin-bottom: 15px;"></i>
          <h3 style="font-size: 1.15rem; color: #fff; margin-bottom: 8px;">Zero Scratch Guarantee</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6;">Our multi-tier protective wrapping eliminates friction, scuffs, and transit damage completely.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 25px; border-radius: 12px;">
          <i class="fas fa-truck-moving" style="font-size: 2rem; color: #f59e0b; margin-bottom: 15px;"></i>
          <h3 style="font-size: 1.15rem; color: #fff; margin-bottom: 8px;">Enclosed Containers</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6;">Vehicles transported inside specialized weather-proof enclosed vehicle carriers.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 25px; border-radius: 12px;">
          <i class="fas fa-history" style="font-size: 2rem; color: #f59e0b; margin-bottom: 15px;"></i>
          <h3 style="font-size: 1.15rem; color: #fff; margin-bottom: 8px;">15+ Years Track Record</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6;">Over 15,000+ two-wheelers safely transported across Andhra Pradesh and Telangana.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 25px; border-radius: 12px;">
          <i class="fas fa-headset" style="font-size: 2rem; color: #f59e0b; margin-bottom: 15px;"></i>
          <h3 style="font-size: 1.15rem; color: #fff; margin-bottom: 8px;">Dedicated Support</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6;">Single point of contact for tracking, documentation & delivery coordination.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- 9. Frequently Asked Questions (FAQ) -->
  <section style="padding: 60px 0; background: #0b132b; color: #ffffff;">
    <div class="container">
      <div style="max-width: 800px; margin: 0 auto 40px; text-align: center;">
        <h2 style="font-size: 2.2rem; font-weight: 700; margin-bottom: 15px;">Frequently Asked Questions</h2>
        <p style="color: #94a3b8; font-size: 1rem;">Common queries regarding bike transport from Hyderabad to Visakhapatnam.</p>
      </div>

      <div style="max-width: 850px; margin: 0 auto; display: flex; flex-direction: column; gap: 15px;">
        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 10px; padding: 20px;">
          <h3 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 8px;">How much does it cost to transport a bike from Hyderabad to Visakhapatnam?</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.6; margin: 0;">Bike transport charges from Hyderabad to Visakhapatnam range between ₹3,500 and ₹7,500 depending on bike CC, model, packaging standard, and pickup location.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 10px; padding: 20px;">
          <h3 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 8px;">How long does it take for bike parcel from Hyderabad to Visakhapatnam?</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.6; margin: 0;">Transit typically takes 2 to 4 days via express container trucks travelling on the NH65 / NH16 route.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 10px; padding: 20px;">
          <h3 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 8px;">Do I need to empty the petrol tank before shifting?</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.6; margin: 0;">Yes, for safety regulations during interstate transport, the fuel tank must be drained down to less than 1 liter.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 10px; padding: 20px;">
          <h3 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 8px;">Is insurance included in the bike transport service?</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.6; margin: 0;">Transit insurance is optional but strongly recommended. We provide full vehicle valuation cover for comprehensive peace of mind.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 10px; padding: 20px;">
          <h3 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 8px;">Do you provide doorstep pickup in Hyderabad and delivery in Visakhapatnam?</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.6; margin: 0;">Yes, we offer complete door-to-door bike relocation services across all localities in Hyderabad and Visakhapatnam.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- 10. Call to Action (CTA) Conversion Bar -->
  <section style="padding: 50px 0; background: linear-gradient(135deg, #1e293b 0%, #0f172a 100%); border-top: 1px solid rgba(245, 158, 11, 0.3); text-align: center; color: #ffffff;">
    <div class="container">
      <h2 style="font-size: 2rem; font-weight: 800; margin-bottom: 15px; color: #ffffff;">Ready to Transport Your Bike from Hyderabad to Visakhapatnam?</h2>
      <p style="color: #94a3b8; font-size: 1.05rem; max-width: 600px; margin: 0 auto 25px;">Get a free, zero-obligation price quote with doorstep pickup and 7-layer packaging included.</p>

      <div style="display: flex; justify-content: center; gap: 15px; flex-wrap: wrap;">
        <a href="tel:<?php echo SITE_PHONE_RAW; ?>" style="padding: 14px 32px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #fff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
          <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call <?php echo SITE_PHONE; ?>
        </a>
        <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20to%20book%20bike%20transport%20from%20Hyderabad%20to%20Visakhapatnam." target="_blank" style="padding: 14px 32px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #fff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
          <i class="fab fa-whatsapp" style="margin-right: 8px;"></i> Book via WhatsApp
        </a>
      </div>
    </div>
  </section>

  <!-- 11. FAQ Schema JSON-LD Injection -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "mainEntity": [
      {
        "@type": "Question",
        "name": "How much does it cost to transport a bike from Hyderabad to Visakhapatnam?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Bike transport charges from Hyderabad to Visakhapatnam range between ₹3,500 and ₹7,500 depending on bike CC, model, packaging standard, and pickup location."
        }
      },
      {
        "@type": "Question",
        "name": "How long does it take for bike parcel from Hyderabad to Visakhapatnam?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Transit typically takes 2 to 4 days via express container trucks travelling on the NH65 / NH16 route."
        }
      },
      {
        "@type": "Question",
        "name": "Do I need to empty the petrol tank before shifting?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Yes, for safety regulations during interstate transport, the fuel tank must be drained down to less than 1 liter."
        }
      },
      {
        "@type": "Question",
        "name": "Is insurance included in the bike transport service?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Transit insurance is optional but strongly recommended. We provide full vehicle valuation cover for comprehensive peace of mind."
        }
      },
      {
        "@type": "Question",
        "name": "Do you provide doorstep pickup in Hyderabad and delivery in Visakhapatnam?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Yes, we offer complete door-to-door bike relocation services across all localities in Hyderabad and Visakhapatnam."
        }
      }
    ]
  }
  </script>

</main>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>

