<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "Bike Transport from Delhi to Visakhapatnam | Two-Wheeler Shifting Charges";
$page_desc = "Professional bike transport services from Delhi to Visakhapatnam (Vizag). Doorstep pickup in Delhi NCR, 7-layer bubble packaging, container transport, and complete transit insurance. Check rates & transit times.";
$page_keywords = "bike transport from delhi to visakhapatnam, delhi to vizag bike parcel service, two wheeler shifting delhi to visakhapatnam, bike transport charges delhi to visakhapatnam, motorcycle carrier delhi to vizag";
$canonical_url = "https://shreeashirwadpackersandmovers.com/pages/bike-transport-from-delhi-to-visakhapatnam.php";

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
        <span class="breadcrumb-item active" style="color: #cbd5e1;">Delhi to Visakhapatnam Bike Transport</span>
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
            DELHI TO VISAKHAPATNAM (VIZAG) BIKE SHIPPING SPECIALISTS
          </span>
          <h1 style="font-size: 2.6rem; font-weight: 800; line-height: 1.25; margin-bottom: 20px; color: #ffffff;">
            Safe & Insured <span style="color: #f59e0b;">Bike Transport from Delhi to Visakhapatnam</span>
          </h1>
          <p style="font-size: 1.1rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 25px;">
            Relocating your bike from Delhi NCR to Visakhapatnam (Vizag)? Shree Ashirwad Packers and Movers delivers zero-damage two-wheeler transport using enclosed container trucks, 7-layer bubble wrapping, and full transit insurance.
          </p>

          <div style="display: flex; gap: 15px; flex-wrap: wrap; margin-bottom: 30px;">
            <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Now" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
              <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call Now: <?php echo SITE_PHONE; ?>
            </a>
            <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20a%20quote%20for%20bike%20transport%20from%20Delhi%20to%20Visakhapatnam." title="Chat on WhatsApp" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
              <i class="fab fa-whatsapp" style="margin-right: 8px;"></i> Chat on WhatsApp
            </a>
          </div>

          <div style="display: flex; gap: 20px; font-size: 0.9rem; color: #94a3b8;">
            <span><strong style="color: #f59e0b;">100% Insured</strong> Shipping</span>
            <span><strong style="color: #f59e0b;">7-Layer</strong> Multi-Wrap</span>
            <span><strong style="color: #f59e0b;">Door-to-Door</strong> Delivery</span>
          </div>
        </div>

        <!-- Hero Lead Form Column -->
        <div class="hero-form-card" style="background: rgba(255, 255, 255, 0.05); backdrop-filter: blur(10px); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 16px; padding: 30px; box-shadow: 0 15px 35px rgba(0,0,0,0.4);">
          <h2 style="font-size: 1.4rem; color: #ffffff; margin-bottom: 8px; font-weight: 700; text-align: center;">Get Instant Vizag Quote</h2>
          <p style="font-size: 0.85rem; color: #94a3b8; text-align: center; margin-bottom: 20px;">Transparent pricing directly on WhatsApp in 2 minutes</p>

          <form action="#" method="POST" onsubmit="sendHeroWhatsAppLead(event, this);">
            <div style="margin-bottom: 14px;">
              <input type="text" name="name" class="form-control" placeholder="Your Full Name" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="margin-bottom: 14px;">
              <input type="tel" name="phone" class="form-control" placeholder="10-Digit Phone Number" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 10px; margin-bottom: 14px;">
              <input type="text" name="move_from" class="form-control" value="Delhi NCR" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
              <input type="text" name="move_to" class="form-control" value="Visakhapatnam" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
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
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; margin-bottom: 5px;">1,750+ km</div>
          <div style="font-size: 0.9rem; color: #94a3b8;">Delhi to Vizag Highway Route</div>
        </div>

        <div style="padding: 20px; background: rgba(255,255,255,0.03); border-radius: 12px; border: 1px solid rgba(255,255,255,0.08);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; margin-bottom: 5px;">4 - 6 Days</div>
          <div style="font-size: 0.9rem; color: #94a3b8;">Average Transit Duration</div>
        </div>

        <div style="padding: 20px; background: rgba(255,255,255,0.03); border-radius: 12px; border: 1px solid rgba(255,255,255,0.08);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; margin-bottom: 5px;">7-Layer</div>
          <div style="font-size: 0.9rem; color: #94a3b8;">Corrugated & Bubble Packing</div>
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
          Estimated Bike Transport Charges from Delhi to Visakhapatnam
        </h2>
        <p style="color: #94a3b8; font-size: 1rem; max-width: 700px; margin: 0 auto;">
          Transparent pricing structure based on two-wheeler engine capacity, weight, and packaging standard. No hidden surprise fees.
        </p>
      </div>

      <div style="overflow-x: auto; background: #1c2541; border-radius: 14px; border: 1px solid rgba(255,255,255,0.1); padding: 10px;">
        <table style="width: 100%; border-collapse: collapse; text-align: left; font-size: 0.95rem; color: #e2e8f0;">
          <thead>
            <tr style="background: rgba(245, 158, 11, 0.15); border-bottom: 2px solid rgba(245, 158, 11, 0.3);">
              <th style="padding: 16px; color: #f59e0b; font-weight: 700;">Vehicle Category</th>
              <th style="padding: 16px; color: #f59e0b; font-weight: 700;">Engine Capacity</th>
              <th style="padding: 16px; color: #f59e0b; font-weight: 700;">Packaging Type</th>
              <th style="padding: 16px; color: #f59e0b; font-weight: 700;">Estimated Rate (Delhi to Vizag)</th>
            </tr>
          </thead>
          <tbody>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.05);">
              <td style="padding: 16px; font-weight: 600;">Standard Scooters / Commuter Bikes</td>
              <td style="padding: 16px;">100cc - 125cc</td>
              <td style="padding: 16px;">HD Bubble Wrap + Corrugated Sheet</td>
              <td style="padding: 16px; color: #f59e0b; font-weight: 700;">₹4,200 - ₹6,500</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.05); background: rgba(255,255,255,0.02);">
              <td style="padding: 16px; font-weight: 600;">Executive / Sports Motorcycles</td>
              <td style="padding: 16px;">150cc - 250cc</td>
              <td style="padding: 16px;">5-Layer Cushion Wrap + Corner Guards</td>
              <td style="padding: 16px; color: #f59e0b; font-weight: 700;">₹5,500 - ₹8,000</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.05);">
              <td style="padding: 16px; font-weight: 600;">Cruisers / Royal Enfield / Adventure</td>
              <td style="padding: 16px;">250cc - 500cc</td>
              <td style="padding: 16px;">7-Layer Premium Wrap + Wooden Crate Option</td>
              <td style="padding: 16px; color: #f59e0b; font-weight: 700;">₹7,000 - ₹10,500</td>
            </tr>
            <tr>
              <td style="padding: 16px; font-weight: 600;">Superbikes & Imported Motorcycles</td>
              <td style="padding: 16px;">500cc+</td>
              <td style="padding: 16px;">Custom Heavy Duty Wooden Crate Packaging</td>
              <td style="padding: 16px; color: #f59e0b; font-weight: 700;">₹11,000 - ₹16,000</td>
            </tr>
          </tbody>
        </table>
      </div>
      <p style="font-size: 0.85rem; color: #64748b; margin-top: 12px; text-align: center;">
        * Rates are indicative and depend on specific pickup/drop locations in Delhi NCR and Visakhapatnam, fuel surcharges, and optional wooden crate requirements.
      </p>
    </div>
  </section>

  <!-- Section 4: Key Operational Features -->
  <section style="padding: 60px 0; background: #1c2541;">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
      
      <div style="text-align: center; margin-bottom: 45px;">
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin-bottom: 12px;">
          Why Choose Shree Ashirwad for Delhi to Visakhapatnam Bike Shifting
        </h2>
        <p style="color: #94a3b8; font-size: 1rem; max-width: 700px; margin: 0 auto;">
          We combine specialized vehicle carriers with high-grade multi-layer packaging to ensure your two-wheeler arrives in pristine condition.
        </p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 30px;">
        
        <div style="background: rgba(255,255,255,0.03); border-radius: 12px; padding: 30px; border: 1px solid rgba(255,255,255,0.08);">
          <div style="width: 50px; height: 50px; border-radius: 10px; background: rgba(245, 158, 11, 0.15); color: #f59e0b; display: flex; align-items: center; justify-content: center; font-size: 1.4rem; margin-bottom: 20px;">
            <i class="fas fa-layer-group"></i>
          </div>
          <h3 style="font-size: 1.25rem; font-weight: 700; color: #ffffff; margin-bottom: 12px;">7-Layer Premium Protective Wrap</h3>
          <p style="color: #94a3b8; font-size: 0.95rem; line-height: 1.7;">
            We secure handlebars, mirrors, silencers, and body panels using thick bubble wraps, corrugated sheets, foam rolls, and stretch film to shield against scratches or road vibration.
          </p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border-radius: 12px; padding: 30px; border: 1px solid rgba(255,255,255,0.08);">
          <div style="width: 50px; height: 50px; border-radius: 10px; background: rgba(245, 158, 11, 0.15); color: #f59e0b; display: flex; align-items: center; justify-content: center; font-size: 1.4rem; margin-bottom: 20px;">
            <i class="fas fa-truck-moving"></i>
          </div>
          <h3 style="font-size: 1.25rem; font-weight: 700; color: #ffffff; margin-bottom: 12px;">Enclosed Vehicle Containers</h3>
          <p style="color: #94a3b8; font-size: 0.95rem; line-height: 1.7;">
            Bikes are transported inside specialized covered auto-carriers equipped with safety wheel clamps and heavy-duty tie-down belts to eliminate movement during transit across the 1,750+ km route.
          </p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border-radius: 12px; padding: 30px; border: 1px solid rgba(255,255,255,0.08);">
          <div style="width: 50px; height: 50px; border-radius: 10px; background: rgba(245, 158, 11, 0.15); color: #f59e0b; display: flex; align-items: center; justify-content: center; font-size: 1.4rem; margin-bottom: 20px;">
            <i class="fas fa-shield-alt"></i>
          </div>
          <h3 style="font-size: 1.25rem; font-weight: 700; color: #ffffff; margin-bottom: 12px;">Complete Transit Insurance</h3>
          <p style="color: #94a3b8; font-size: 0.95rem; line-height: 1.7;">
            Comprehensive insurance coverage provided for your two-wheeler covering accidental damages or unforeseen events during inter-state highway transit from Delhi to Andhra Pradesh.
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
          Our 4-Step Delhi to Visakhapatnam Bike Shifting Process
        </h2>
        <p style="color: #94a3b8; font-size: 1rem; max-width: 700px; margin: 0 auto;">
          A streamlined, stress-free relocation journey designed to keep you updated from pickup to final door delivery.
        </p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); gap: 25px;">
        
        <div style="background: #1c2541; padding: 25px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.08); position: relative;">
          <div style="font-size: 2.5rem; font-weight: 900; color: rgba(245, 158, 11, 0.2); position: absolute; top: 15px; right: 20px;">01</div>
          <h3 style="font-size: 1.1rem; font-weight: 700; color: #f59e0b; margin-bottom: 10px;">Doorstep Inspection & Pickup</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6;">
            Our team visits your location in Delhi, South Delhi, Dwarka, Rohini, Noida, or Gurgaon to conduct a thorough pre-transport physical condition audit.
          </p>
        </div>

        <div style="background: #1c2541; padding: 25px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.08); position: relative;">
          <div style="font-size: 2.5rem; font-weight: 900; color: rgba(245, 158, 11, 0.2); position: absolute; top: 15px; right: 20px;">02</div>
          <h3 style="font-size: 1.1rem; font-weight: 700; color: #f59e0b; margin-bottom: 10px;">Multi-Layer Packing</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6;">
            7-layer protective packaging is applied onsite, followed by fuel drain verification and secure loading into enclosed container trucks.
          </p>
        </div>

        <div style="background: #1c2541; padding: 25px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.08); position: relative;">
          <div style="font-size: 2.5rem; font-weight: 900; color: rgba(245, 158, 11, 0.2); position: absolute; top: 15px; right: 20px;">03</div>
          <h3 style="font-size: 1.1rem; font-weight: 700; color: #f59e0b; margin-bottom: 10px;">Highway Transit & Tracking</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6;">
            Your bike travels safely along major national highway corridors toward Andhra Pradesh with periodic GPS status updates provided to you.
          </p>
        </div>

        <div style="background: #1c2541; padding: 25px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.08); position: relative;">
          <div style="font-size: 2.5rem; font-weight: 900; color: rgba(245, 158, 11, 0.2); position: absolute; top: 15px; right: 20px;">04</div>
          <h3 style="font-size: 1.1rem; font-weight: 700; color: #f59e0b; margin-bottom: 10px;">Doorstep Delivery in Vizag</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6;">
            Unpacking and joint inspection performed at your residence in Visakhapatnam (MVP Colony, Gajuwaka, Madhurawada, Dwaraka Nagar, etc.).
          </p>
        </div>

      </div>
    </div>
  </section>

  <!-- Section 6: Comprehensive Coverage Areas (Delhi & Visakhapatnam Hubs) -->
  <section style="padding: 60px 0; background: #1c2541;">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
      
      <div style="text-align: center; margin-bottom: 45px;">
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin-bottom: 12px;">
          Pickup & Delivery Hub Coverage
        </h2>
        <p style="color: #94a3b8; font-size: 1rem;">
          Complete door-to-door network across all major sectors of Delhi NCR and Visakhapatnam (Vizag).
        </p>
      </div>

      <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 30px;">
        
        <div style="background: #0b132b; padding: 30px; border-radius: 14px; border: 1px solid rgba(255,255,255,0.08);">
          <h3 style="font-size: 1.3rem; font-weight: 700; color: #f59e0b; margin-bottom: 15px; display: flex; align-items: center; gap: 10px;">
            <i class="fas fa-map-marker-alt"></i> Delhi NCR Pickup Locations
          </h3>
          <ul style="list-style: none; padding: 0; margin: 0; color: #cbd5e1; font-size: 0.95rem; line-height: 2;">
            <li><i class="fas fa-check-circle" style="color: #10b981; margin-right: 8px;"></i> South Delhi (Saket, Hauz Khas, Vasant Kunj, Lajpat Nagar)</li>
            <li><i class="fas fa-check-circle" style="color: #10b981; margin-right: 8px;"></i> West & North Delhi (Dwarka, Janakpuri, Pitampura, Rohini)</li>
            <li><i class="fas fa-check-circle" style="color: #10b981; margin-right: 8px;"></i> Central & East Delhi (Connaught Place, Laxmi Nagar, Mayur Vihar)</li>
            <li><i class="fas fa-check-circle" style="color: #10b981; margin-right: 8px;"></i> NCR Suburbs (Noida, Greater Noida, Gurgaon, Ghaziabad, Faridabad)</li>
          </ul>
        </div>

        <div style="background: #0b132b; padding: 30px; border-radius: 14px; border: 1px solid rgba(255,255,255,0.08);">
          <h3 style="font-size: 1.3rem; font-weight: 700; color: #f59e0b; margin-bottom: 15px; display: flex; align-items: center; gap: 10px;">
            <i class="fas fa-map-marker-alt"></i> Visakhapatnam (Vizag) Delivery Locations
          </h3>
          <ul style="list-style: none; padding: 0; margin: 0; color: #cbd5e1; font-size: 0.95rem; line-height: 2;">
            <li><i class="fas fa-check-circle" style="color: #10b981; margin-right: 8px;"></i> MVP Colony & Dwaraka Nagar</li>
            <li><i class="fas fa-check-circle" style="color: #10b981; margin-right: 8px;"></i> Gajuwaka & Steel Plant Area</li>
            <li><i class="fas fa-check-circle" style="color: #10b981; margin-right: 8px;"></i> Madhurawada & Rushikonda IT Hub</li>
            <li><i class="fas fa-check-circle" style="color: #10b981; margin-right: 8px;"></i> Gopalapatnam, Pendurthi, & Visakhapatnam Port Belt</li>
          </ul>
        </div>

      </div>
    </div>
  </section>

  <!-- Section 7: Required Paperwork & Documentation Guide -->
  <section style="padding: 60px 0; background: #0b132b;">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
      
      <div style="text-align: center; margin-bottom: 40px;">
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin-bottom: 12px;">
          Documents Required for Delhi to Visakhapatnam Bike Shifting
        </h2>
        <p style="color: #94a3b8; font-size: 1rem;">
          To ensure hassle-free inter-state highway checkpost clearances, please keep photocopies of the following ready:
        </p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 20px;">
        
        <div style="background: #1c2541; padding: 20px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <div style="font-weight: 700; color: #ffffff; margin-bottom: 5px;">1. Vehicle RC</div>
          <div style="font-size: 0.88rem; color: #94a3b8;">Registration Certificate Copy</div>
        </div>

        <div style="background: #1c2541; padding: 20px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <div style="font-weight: 700; color: #ffffff; margin-bottom: 5px;">2. Valid Insurance Policy</div>
          <div style="font-size: 0.88rem; color: #94a3b8;">Active Third-Party or Comprehensive</div>
        </div>

        <div style="background: #1c2541; padding: 20px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <div style="font-weight: 700; color: #ffffff; margin-bottom: 5px;">3. Govt photo ID</div>
          <div style="font-size: 0.88rem; color: #94a3b8;">Aadhaar Card or Driving License</div>
        </div>

        <div style="background: #1c2541; padding: 20px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <div style="font-weight: 700; color: #ffffff; margin-bottom: 5px;">4. Consignment Note</div>
          <div style="font-size: 0.88rem; color: #94a3b8;">Issued by Shree Ashirwad Team</div>
        </div>

      </div>
    </div>
  </section>

  <!-- Section 8: Preparation Tips for Vehicle Owners -->
  <section style="padding: 60px 0; background: #1c2541;">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
      
      <div style="text-align: center; margin-bottom: 40px;">
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin-bottom: 12px;">
          Pre-Transport Checklist for Your Two-Wheeler
        </h2>
        <p style="color: #94a3b8; font-size: 1rem;">
          Follow these quick steps before handing over your motorcycle for long-distance transit.
        </p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 25px;">
        
        <div style="background: #0b132b; padding: 25px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.05);">
          <h4 style="color: #f59e0b; font-size: 1.1rem; margin-bottom: 8px;">Keep Fuel Level Low</h4>
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6;">Maintain less than 1-2 liters of petrol in the tank to comply with highway fire and safety regulations.</p>
        </div>

        <div style="background: #0b132b; padding: 25px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.05);">
          <h4 style="color: #f59e0b; font-size: 1.1rem; margin-bottom: 8px;">Remove Personal Accessories</h4>
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6;">Detach loose accessories such as mobile holders, luggage boxes, helmets, and personal items prior to packing.</p>
        </div>

        <div style="background: #0b132b; padding: 25px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.05);">
          <h4 style="color: #f59e0b; font-size: 1.1rem; margin-bottom: 8px;">Record Physical Inspection</h4>
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6;">Take clear photos and videos of your bike from all angles in daylight before handing over the keys.</p>
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
          Everything you need to know about bike shipping from Delhi NCR to Visakhapatnam.
        </p>
      </div>

      <div style="display: flex; flex-direction: column; gap: 20px;">
        
        <div style="background: #1c2541; padding: 24px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.08);">
          <h3 style="font-size: 1.15rem; font-weight: 700; color: #f59e0b; margin-bottom: 10px;">Q1: How much does bike transport from Delhi to Visakhapatnam cost?</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.7; margin: 0;">
            The cost ranges between ₹4,200 and ₹10,500 depending on the bike's engine capacity (100cc commuter to 500cc cruiser), packaging options (Standard multi-wrap or Wooden Crate), and specific pickup/drop locations in Delhi NCR and Vizag.
          </p>
        </div>

        <div style="background: #1c2541; padding: 24px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.08);">
          <h3 style="font-size: 1.15rem; font-weight: 700; color: #f59e0b; margin-bottom: 10px;">Q2: How many days will it take for the bike to reach Visakhapatnam from Delhi?</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.7; margin: 0;">
            The typical transit time for the 1,750+ km journey between Delhi and Visakhapatnam is 4 to 6 days via enclosed container trucks.
          </p>
        </div>

        <div style="background: #1c2541; padding: 24px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.08);">
          <h3 style="font-size: 1.15rem; font-weight: 700; color: #f59e0b; margin-bottom: 10px;">Q3: Is door-to-door delivery available in all areas of Visakhapatnam?</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.7; margin: 0;">
            Yes, we provide complete door-to-door pickup across all areas of Delhi NCR and doorstep delivery in Visakhapatnam including MVP Colony, Gajuwaka, Madhurawada, Dwaraka Nagar, and IT corridors.
          </p>
        </div>

        <div style="background: #1c2541; padding: 24px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.08);">
          <h3 style="font-size: 1.15rem; font-weight: 700; color: #f59e0b; margin-bottom: 10px;">Q4: Is transit insurance included for inter-state bike transport?</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.7; margin: 0;">
            Yes, comprehensive transit insurance cover is included to safeguard your motorcycle against accidents or damage during inter-state highway travel.
          </p>
        </div>

        <div style="background: #1c2541; padding: 24px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.08);">
          <h3 style="font-size: 1.15rem; font-weight: 700; color: #f59e0b; margin-bottom: 10px;">Q5: What documents do I need to submit for shipping my bike?</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.7; margin: 0;">
            You need to provide a photocopy of your Bike Registration Certificate (RC), valid insurance policy, pollution certificate (PUC), and a Government-issued Photo ID (Aadhaar or DL).
          </p>
        </div>

        <div style="background: #1c2541; padding: 24px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.08);">
          <h3 style="font-size: 1.15rem; font-weight: 700; color: #f59e0b; margin-bottom: 10px;">Q6: How is the motorcycle protected during long-distance transit?</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.7; margin: 0;">
            We wrap bikes in 7 protective layers including high-density bubble wrap, corrugated sheets, stretch film, and foam corner guards to prevent any scratches or dents.
          </p>
        </div>

        <div style="background: #1c2541; padding: 24px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.08);">
          <h3 style="font-size: 1.15rem; font-weight: 700; color: #f59e0b; margin-bottom: 10px;">Q7: Is petrol draining compulsory before handing over the bike?</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.7; margin: 0;">
            Yes, fuel levels should be kept under 1-2 liters for safety and fire compliance during highway transport.
          </p>
        </div>

        <div style="background: #1c2541; padding: 24px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.08);">
          <h3 style="font-size: 1.15rem; font-weight: 700; color: #f59e0b; margin-bottom: 10px;">Q8: Do you issue IBA GST bills for corporate reimbursement?</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.7; margin: 0;">
            Yes, official 18% GST invoices, consignment bilty (LR), and money receipts are provided for claim submission.
          </p>
        </div>

        <div style="background: #1c2541; padding: 24px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.08);">
          <h3 style="font-size: 1.15rem; font-weight: 700; color: #f59e0b; margin-bottom: 10px;">Q9: Is my bike ridden on the road between Delhi and Visakhapatnam?</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.7; margin: 0;">
            No, bikes are moved inside enclosed multi-vehicle container trucks with zero road driving.
          </p>
        </div>

        <div style="background: #1c2541; padding: 24px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.08);">
          <h3 style="font-size: 1.15rem; font-weight: 700; color: #f59e0b; margin-bottom: 10px;">Q10: How can I book a doorstep pickup slot in Delhi NCR?</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.7; margin: 0;">
            Fill out the instant estimate form or reach out via WhatsApp/Call to reserve your preferred pickup date.
          </p>
        </div>

      </div>
    </div>
  </section>

  <!-- Section 10: Call-to-Action (CTA) Footer Banner -->
  <section style="padding: 60px 0; background: linear-gradient(135deg, #1c2541 0%, #0b132b 100%); border-top: 1px solid rgba(255,255,255,0.1);">
    <div class="container" style="max-width: 1000px; margin: 0 auto; padding: 0 20px; text-align: center;">
      
      <h2 style="font-size: 2.3rem; font-weight: 800; color: #ffffff; margin-bottom: 15px;">
        Ready to Transport Your Bike from Delhi to Visakhapatnam?
      </h2>
      <p style="color: #cbd5e1; font-size: 1.1rem; max-width: 700px; margin: 0 auto 30px;">
        Get a quick, transparent quote with zero hidden charges. Contact our two-wheeler relocation experts today!
      </p>

      <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap;">
        <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Us Now" style="padding: 15px 32px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1.05rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
          <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call Now: <?php echo SITE_PHONE; ?>
        </a>
        <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20a%20quote%20for%20bike%20transport%20from%20Delhi%20to%20Visakhapatnam." title="WhatsApp Chat" target="_blank" style="padding: 15px 32px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1.05rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
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
      "name": "How much does bike transport from Delhi to Visakhapatnam cost?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "The cost ranges between ₹4,200 and ₹10,500 depending on the bike engine capacity (100cc to 500cc+), packaging type, and specific pickup/drop locations in Delhi NCR and Visakhapatnam."
      }
    },
    {
      "@type": "Question",
      "name": "How many days will it take for the bike to reach Visakhapatnam from Delhi?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "The typical transit time for the 1,750+ km journey between Delhi and Visakhapatnam is 4 to 6 days via enclosed container trucks."
      }
    },
    {
      "@type": "Question",
      "name": "Is door-to-door delivery available in all areas of Visakhapatnam?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, we provide door-to-door pickup across all areas of Delhi NCR and doorstep delivery in Visakhapatnam including MVP Colony, Gajuwaka, Madhurawada, Dwaraka Nagar, and IT corridors."
      }
    },
    {
      "@type": "Question",
      "name": "Is transit insurance included for inter-state bike transport?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, comprehensive transit insurance cover is included to safeguard your motorcycle against accidents or damage during inter-state highway travel."
      }
    },
    {
      "@type": "Question",
      "name": "What documents do I need to submit for shipping my bike?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "You need to provide a photocopy of your Bike Registration Certificate (RC), valid insurance policy, pollution certificate (PUC), and a Government-issued Photo ID (Aadhaar or DL)."
      }
    },
    {
      "@type": "Question",
      "name": "How is the motorcycle protected during long-distance transit?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "We wrap bikes in 7 protective layers including high-density bubble wrap, corrugated sheets, stretch film, and foam corner guards to prevent any scratches or dents."
      }
    },
    {
      "@type": "Question",
      "name": "Is petrol draining compulsory before handing over the bike?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, fuel levels should be kept under 1-2 liters for safety and fire compliance during highway transport."
      }
    },
    {
      "@type": "Question",
      "name": "Do you issue IBA GST bills for corporate reimbursement?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, official 18% GST invoices, consignment bilty (LR), and money receipts are provided for claim submission."
      }
    },
    {
      "@type": "Question",
      "name": "Is my bike ridden on the road between Delhi and Visakhapatnam?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "No, bikes are moved inside enclosed multi-vehicle container trucks with zero road driving."
      }
    },
    {
      "@type": "Question",
      "name": "How can I book a doorstep pickup slot in Delhi NCR?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Fill out the instant estimate form or reach out via WhatsApp/Call to reserve your preferred pickup date."
      }
    }
  ]
}
</script>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
