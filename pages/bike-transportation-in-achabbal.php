<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "Bike Transportation in Achabal | Safe & Insured Two-Wheeler Shifting";
$page_desc = "Planning bike transportation in Achabal, Jammu and Kashmir? Get safe, insured, and doorstep motorcycle shipping. High-quality multi-layer packing and real-time tracking. Complete door-to-door relocation coverage across Achabbal, Railway Station Road, Main Market, College Road, Civil Lines.";
$page_keywords = "bike transportation in achabbal, best bike transportation in achabbal, affordable bike transportation in achabbal, packers and movers, packers and movers in ranchi, top bike transportation in achabbal company, household shifting bike transportation in achabbal, doorstep bike transportation in achabbal, verified bike transportation in achabbal services, shree ashirwad bike transportation in achabbal";
$canonical_url = "https://shreeashirwadpackersandmovers.com/pages/bike-transportation-in-achabbal.php";

require_once __DIR__ . '/../includes/header.php';
?>

<main class="site-main dark-theme-override">

  <!-- Visual Breadcrumb Navigation Bar -->
  <div class="breadcrumb-wrapper">
    <div class="container">
      <div class="breadcrumb-list">
        <span class="breadcrumb-item"><a href="<?php echo SITE_URL; ?>" title="Home">Home</a></span>
        <span class="breadcrumb-separator">/</span>
        <span class="breadcrumb-item active"><?php echo htmlspecialchars($page_title); ?></span>
      </div>
    </div>
  </div>

  <!-- Hero Section with Lead Form -->
  <section class="hero-section" style="background: linear-gradient(135deg, #0b132b 0%, #1c2541 100%); padding: 60px 0; color: #ffffff;">
    <div class="container">
      <div class="hero-grid" style="display: grid; grid-template-columns: 1.2fr 0.8fr; gap: 40px; align-items: center;">
        
        <!-- Hero Text Column -->
        <div class="hero-text">
          <span class="section-tag" style="background: rgba(245, 158, 11, 0.15); color: #f59e0b; border: 1px solid rgba(245, 158, 11, 0.4); padding: 6px 16px; border-radius: 20px; font-size: 0.85rem; font-weight: 700; text-transform: uppercase; display: inline-block; margin-bottom: 15px;">
            BIKE TRANSPORTATION ACHABBAL RELOCATION SPECIALISTS
          </span>
          <h1 style="font-size: 2.7rem; font-weight: 800; line-height: 1.2; margin-bottom: 20px; color: #ffffff;">
            Professional <span style="color: #f59e0b;">Bike Transportation in Achabal</span>
          </h1>
          <p style="font-size: 1.12rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 25px;">
            Planning bike transportation in Achabal, Jammu and Kashmir? Get safe, insured, and doorstep motorcycle shipping. High-quality multi-layer packing and real-time tracking. Complete door-to-door relocation coverage across Achabbal, Railway Station Road, Main Market, College Road, Civil Lines.
          </p>

          <div style="display: flex; gap: 15px; flex-wrap: wrap; margin-bottom: 30px;">
            <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Now" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
              <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call Now: <?php echo SITE_PHONE; ?>
            </a>
            <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20a%20shifting%20quote." title="Chat on WhatsApp" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
              <i class="fab fa-whatsapp" style="margin-right: 8px;"></i> Chat on WhatsApp
            </a>
          </div>

          <div style="display: flex; gap: 20px; font-size: 0.9rem; color: #94a3b8;">
            <span><strong style="color: #f59e0b;">100% Insured</strong> Shifting</span>
            <span><strong style="color: #f59e0b;">7-Layer</strong> Bubble Packaging</span>
            <span><strong style="color: #f59e0b;">Door-to-Door</strong> Delivery</span>
          </div>
        </div>

        <!-- Hero Lead Form Column -->
        <div class="hero-form-card" style="background: rgba(255, 255, 255, 0.05); backdrop-filter: blur(10px); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 16px; padding: 30px; box-shadow: 0 15px 35px rgba(0,0,0,0.4);">
          <h2 style="font-size: 1.4rem; color: #ffffff; margin-bottom: 8px; font-weight: 700; text-align: center;">Get Achabbal Shifting Quote</h2>
          <p style="font-size: 0.85rem; color: #94a3b8; text-align: center; margin-bottom: 20px;">Receive transparent cost estimation on WhatsApp in 2 minutes</p>

          <form action="#" method="POST" onsubmit="sendHeroWhatsAppLead(event, this);">
            <div style="margin-bottom: 14px;">
              <input type="text" name="name" class="form-control" placeholder="Your Full Name" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="margin-bottom: 14px;">
              <input type="tel" name="phone" class="form-control" placeholder="10-Digit Phone Number" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 10px; margin-bottom: 14px;">
              <input type="text" name="move_from" class="form-control" value="Achabbal" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
              <input type="text" name="move_to" class="form-control" placeholder="Moving To (City/Area)" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <button type="submit" style="width: 100%; padding: 14px; background: linear-gradient(135deg, #d32f2f 0%, #f59e0b 100%); color: #ffffff; border: none; border-radius: 50px; font-weight: 700; font-size: 1rem; cursor: pointer;">
              Get Instant Estimate Now &rarr;
            </button>
          </form>
        </div>

      </div>
    </div>
  </section>

  <!-- Key Stats Counter Bar -->
  <section class="stats-counter-section" style="background: #1c2541; padding: 45px 0; border-bottom: 1px solid rgba(255,255,255,0.08);">
    <div class="container">
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 25px; text-align: center;">
        <div style="background: rgba(255,255,255,0.03); padding: 25px 15px; border-radius: 12px; border: 1px solid rgba(245,158,11,0.2);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; margin-bottom: 5px;">4,250+</div>
          <div style="font-size: 0.9rem; color: #cbd5e1;">Bikes Transported to/from Achabbal</div>
        </div>
        <div style="background: rgba(255,255,255,0.03); padding: 25px 15px; border-radius: 12px; border: 1px solid rgba(245,158,11,0.2);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; margin-bottom: 5px;">100%</div>
          <div style="font-size: 0.9rem; color: #cbd5e1;">Transit Damage Insurance Covered</div>
        </div>
        <div style="background: rgba(255,255,255,0.03); padding: 25px 15px; border-radius: 12px; border: 1px solid rgba(245,158,11,0.2);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; margin-bottom: 5px;">7-Layer</div>
          <div style="font-size: 0.9rem; color: #cbd5e1;">Heavy-Duty Safety Packaging</div>
        </div>
        <div style="background: rgba(255,255,255,0.03); padding: 25px 15px; border-radius: 12px; border: 1px solid rgba(245,158,11,0.2);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; margin-bottom: 5px;">IBA Approved</div>
          <div style="font-size: 0.9rem; color: #cbd5e1;">GST Billing & Insurance Claim</div>
        </div>
      </div>
    </div>
  </section>

  <!-- 6-Card Feature Grid -->
  <section style="background: #0b132b; padding: 60px 0; color: #ffffff;">
    <div class="container">
      <div style="text-align: center; max-width: 750px; margin: 0 auto 45px;">
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff;">Why Choose Our <span style="color: #f59e0b;">Bike Transportation in Achabal</span>?</h2>
        <p style="color: #cbd5e1; font-size: 1rem; margin-top: 10px;">We deliver seamless, secure two-wheeler relocation across Achabal and nationwide destinations.</p>
      </div>
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px;">
        <div style="background: #1c2541; padding: 30px; border-radius: 12px; border-left: 4px solid #f59e0b;">
          <h3 style="font-size: 1.25rem; color: #ffffff; margin-bottom: 12px;">Covered Container Carriers</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.6;">Weatherproof, hydraulic-lift enclosed trucks protecting your bike from dust, rain, and highway debris during transit.</p>
        </div>
        <div style="background: #1c2541; padding: 30px; border-radius: 12px; border-left: 4px solid #f59e0b;">
          <h3 style="font-size: 1.25rem; color: #ffffff; margin-bottom: 12px;">Multi-Layer Armor Packing</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.6;">High-density 80-GSM bubble wraps, corrugated sheets, foam guards, and stretch film safeguard paint and bodywork.</p>
        </div>
        <div style="background: #1c2541; padding: 30px; border-radius: 12px; border-left: 4px solid #f59e0b;">
          <h3 style="font-size: 1.25rem; color: #ffffff; margin-bottom: 12px;">Doorstep Pickup & Delivery</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.6;">Hassle-free collection from Achabbal, Railway Station Road, Main Market, and direct delivery to your destination.</p>
        </div>
        <div style="background: #1c2541; padding: 30px; border-radius: 12px; border-left: 4px solid #f59e0b;">
          <h3 style="font-size: 1.25rem; color: #ffffff; margin-bottom: 12px;">Transit Insurance Coverage</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.6;">Full risk insurance policies covering total loss or minor scuffs with quick claim processing support.</p>
        </div>
        <div style="background: #1c2541; padding: 30px; border-radius: 12px; border-left: 4px solid #f59e0b;">
          <h3 style="font-size: 1.25rem; color: #ffffff; margin-bottom: 12px;">Dedicated Wheel Locking</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.6;">Engineered wheel chocks and heavy-duty nylon tie-down belts prevent tilt or movement inside transport vehicles.</p>
        </div>
        <div style="background: #1c2541; padding: 30px; border-radius: 12px; border-left: 4px solid #f59e0b;">
          <h3 style="font-size: 1.25rem; color: #ffffff; margin-bottom: 12px;">GPS & Real-Time Tracking</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.6;">Live vehicle tracking and regular SMS updates keep you informed at every leg of your bike’s journey.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Specialized Services Breakdown -->
  <section style="background: #1c2541; padding: 60px 0; color: #ffffff;">
    <div class="container">
      <div style="text-align: center; max-width: 750px; margin: 0 auto 45px;">
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff;">Tailored <span style="color: #f59e0b;">Two-Wheeler Shifting Options</span></h2>
        <p style="color: #cbd5e1; font-size: 1rem; margin-top: 10px;">Customized shipping solutions built for every model and rider requirement.</p>
      </div>
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 25px;">
        <div style="background: #0b132b; padding: 25px; border-radius: 10px; border: 1px solid rgba(255,255,255,0.05);">
          <h4 style="font-size: 1.15rem; color: #f59e0b; margin-bottom: 10px;">Standard Commuter Bikes</h4>
          <p style="color: #cbd5e1; font-size: 0.9rem;">Affordable, secure transport for daily commuters (100cc - 150cc) with full protective wrapping.</p>
        </div>
        <div style="background: #0b132b; padding: 25px; border-radius: 10px; border: 1px solid rgba(255,255,255,0.05);">
          <h4 style="font-size: 1.15rem; color: #f59e0b; margin-bottom: 10px;">Sports & Premium Motorcycles</h4>
          <p style="color: #cbd5e1; font-size: 0.9rem;">Specialized handling with custom wooden crate option for high-end sports and luxury bikes.</p>
        </div>
        <div style="background: #0b132b; padding: 25px; border-radius: 10px; border: 1px solid rgba(255,255,255,0.05);">
          <h4 style="font-size: 1.15rem; color: #f59e0b; margin-bottom: 10px;">Royal Enfield & Cruisers</h4>
          <p style="color: #cbd5e1; font-size: 0.9rem;">Heavy-duty tie-down systems and reinforced padding for heavy cruisers and tourers.</p>
        </div>
        <div style="background: #0b132b; padding: 25px; border-radius: 10px; border: 1px solid rgba(255,255,255,0.05);">
          <h4 style="font-size: 1.15rem; color: #f59e0b; margin-bottom: 10px;">Scooters & Activas</h4>
          <p style="color: #cbd5e1; font-size: 0.9rem;">Compact, safe positioning and fiber-body protection for all automatic gearless scooters.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- 7-Layer Safety Packaging Framework -->
  <section style="background: #0b132b; padding: 60px 0; color: #ffffff;">
    <div class="container">
      <div style="text-align: center; max-width: 750px; margin: 0 auto 45px;">
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff;">Our 7-Layer <span style="color: #f59e0b;">Safety Packaging Protocol</span></h2>
        <p style="color: #cbd5e1; font-size: 1rem; margin-top: 10px;">Engineered multi-layer defense against impacts, scuffs, and transit vibrations.</p>
      </div>
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 20px;">
        <div style="background: #1c2541; padding: 20px; border-radius: 8px; text-align: center;">
          <span style="background: #f59e0b; color: #000; font-weight: 800; padding: 4px 10px; border-radius: 20px; font-size: 0.8rem;">LAYER 1</span>
          <h4 style="color: #fff; margin: 10px 0 5px;">Dust & Scratch Film</h4>
          <p style="color: #cbd5e1; font-size: 0.85rem;">Soft polythene layer directly over paintwork.</p>
        </div>
        <div style="background: #1c2541; padding: 20px; border-radius: 8px; text-align: center;">
          <span style="background: #f59e0b; color: #000; font-weight: 800; padding: 4px 10px; border-radius: 20px; font-size: 0.8rem;">LAYER 2</span>
          <h4 style="color: #fff; margin: 10px 0 5px;">80-GSM Air Bubble Wrap</h4>
          <p style="color: #cbd5e1; font-size: 0.85rem;">Shock-absorbing heavy bubble cushion.</p>
        </div>
        <div style="background: #1c2541; padding: 20px; border-radius: 8px; text-align: center;">
          <span style="background: #f59e0b; color: #000; font-weight: 800; padding: 4px 10px; border-radius: 20px; font-size: 0.8rem;">LAYER 3</span>
          <h4 style="color: #fff; margin: 10px 0 5px;">Corrugated Sheets</h4>
          <p style="color: #cbd5e1; font-size: 0.85rem;">Impact defense around tank & indicators.</p>
        </div>
        <div style="background: #1c2541; padding: 20px; border-radius: 8px; text-align: center;">
          <span style="background: #f59e0b; color: #000; font-weight: 800; padding: 4px 10px; border-radius: 20px; font-size: 0.8rem;">LAYER 4</span>
          <h4 style="color: #fff; margin: 10px 0 5px;">Edge Foam Guards</h4>
          <p style="color: #cbd5e1; font-size: 0.85rem;">Reinforced padding for levers & mirrors.</p>
        </div>
        <div style="background: #1c2541; padding: 20px; border-radius: 8px; text-align: center;">
          <span style="background: #f59e0b; color: #000; font-weight: 800; padding: 4px 10px; border-radius: 20px; font-size: 0.8rem;">LAYER 5</span>
          <h4 style="color: #fff; margin: 10px 0 5px;">Stretch Wrap Seal</h4>
          <p style="color: #cbd5e1; font-size: 0.85rem;">Waterproof outer plastic film bind.</p>
        </div>
        <div style="background: #1c2541; padding: 20px; border-radius: 8px; text-align: center;">
          <span style="background: #f59e0b; color: #000; font-weight: 800; padding: 4px 10px; border-radius: 20px; font-size: 0.8rem;">LAYER 6</span>
          <h4 style="color: #fff; margin: 10px 0 5px;">Nylon Locking Straps</h4>
          <p style="color: #cbd5e1; font-size: 0.85rem;">Anchor belts locked to vehicle chassis.</p>
        </div>
        <div style="background: #1c2541; padding: 20px; border-radius: 8px; text-align: center;">
          <span style="background: #f59e0b; color: #000; font-weight: 800; padding: 4px 10px; border-radius: 20px; font-size: 0.8rem;">LAYER 7</span>
          <h4 style="color: #fff; margin: 10px 0 5px;">Custom Wooden Crate</h4>
          <p style="color: #cbd5e1; font-size: 0.85rem;">Optional solid cage for long routes.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Rate Table Matrix -->
  <section style="background: #1c2541; padding: 60px 0; color: #ffffff;">
    <div class="container">
      <div style="text-align: center; max-width: 750px; margin: 0 auto 40px;">
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff;">Estimated <span style="color: #f59e0b;">Bike Transport Cost Matrix</span></h2>
        <p style="color: #cbd5e1; font-size: 0.95rem; margin-top: 8px;">Transparent indicative rates for two-wheeler shipping to major Indian destinations.</p>
      </div>
      <div style="overflow-x: auto;">
        <table style="width: 100%; border-collapse: collapse; background: #0b132b; border-radius: 10px; overflow: hidden; text-align: left; font-size: 0.95rem;">
          <thead>
            <tr style="background: #f59e0b; color: #000000; font-weight: 700;">
              <th style="padding: 15px 20px;">Destination Route</th>
              <th style="padding: 15px 20px;">Distance (Approx)</th>
              <th style="padding: 15px 20px;">Scooter / Activa Rates</th>
              <th style="padding: 15px 20px;">100cc - 200cc Bike Rates</th>
              <th style="padding: 15px 20px;">Cruiser / Sports Bike Rates</th>
            </tr>
          </thead>
          <tbody>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.05);">
              <td style="padding: 15px 20px; color: #ffffff; font-weight: 600;">Achabal to Delhi / NCR</td>
              <td style="padding: 15px 20px; color: #cbd5e1;">~800 km</td>
              <td style="padding: 15px 20px; color: #f59e0b; font-weight: 700;">₹4,200 - ₹5,800</td>
              <td style="padding: 15px 20px; color: #f59e0b; font-weight: 700;">₹4,800 - ₹6,500</td>
              <td style="padding: 15px 20px; color: #f59e0b; font-weight: 700;">₹6,200 - ₹8,500</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.05);">
              <td style="padding: 15px 20px; color: #ffffff; font-weight: 600;">Achabal to Chandigarh / Punjab</td>
              <td style="padding: 15px 20px; color: #cbd5e1;">~550 km</td>
              <td style="padding: 15px 20px; color: #f59e0b; font-weight: 700;">₹3,800 - ₹5,200</td>
              <td style="padding: 15px 20px; color: #f59e0b; font-weight: 700;">₹4,200 - ₹5,900</td>
              <td style="padding: 15px 20px; color: #f59e0b; font-weight: 700;">₹5,500 - ₹7,500</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.05);">
              <td style="padding: 15px 20px; color: #ffffff; font-weight: 600;">Achabal to Mumbai / Pune</td>
              <td style="padding: 15px 20px; color: #cbd5e1;">~2,100 km</td>
              <td style="padding: 15px 20px; color: #f59e0b; font-weight: 700;">₹6,500 - ₹8,800</td>
              <td style="padding: 15px 20px; color: #f59e0b; font-weight: 700;">₹7,200 - ₹9,500</td>
              <td style="padding: 15px 20px; color: #f59e0b; font-weight: 700;">₹9,000 - ₹12,500</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.05);">
              <td style="padding: 15px 20px; color: #ffffff; font-weight: 600;">Achabal to Bangalore / Hyderabad</td>
              <td style="padding: 15px 20px; color: #cbd5e1;">~2,700 km</td>
              <td style="padding: 15px 20px; color: #f59e0b; font-weight: 700;">₹7,800 - ₹10,200</td>
              <td style="padding: 15px 20px; color: #f59e0b; font-weight: 700;">₹8,500 - ₹11,500</td>
              <td style="padding: 15px 20px; color: #f59e0b; font-weight: 700;">₹10,500 - ₹14,500</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </section>

  <!-- Localities & Network Grids -->
  <section style="background: #0b132b; padding: 60px 0; color: #ffffff;">
    <div class="container">
      <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 40px;">
        <div>
          <h3 style="font-size: 1.5rem; font-weight: 700; color: #f59e0b; margin-bottom: 20px;">Pickup Coverage in Achabal</h3>
          <ul style="list-style: none; padding: 0; display: grid; grid-template-columns: 1fr 1fr; gap: 12px; color: #cbd5e1; font-size: 0.95rem;">
            <li style="background: #1c2541; padding: 10px 15px; border-radius: 6px;">✔ Main Market Achabal</li>
            <li style="background: #1c2541; padding: 10px 15px; border-radius: 6px;">✔ Railway Station Road</li>
            <li style="background: #1c2541; padding: 10px 15px; border-radius: 6px;">✔ College Road Area</li>
            <li style="background: #1c2541; padding: 10px 15px; border-radius: 6px;">✔ Civil Lines Quarter</li>
          </ul>
        </div>
        <div>
          <h3 style="font-size: 1.5rem; font-weight: 700; color: #f59e0b; margin-bottom: 20px;">Intercity Route Connections</h3>
          <ul style="list-style: none; padding: 0; display: grid; grid-template-columns: 1fr 1fr; gap: 12px; color: #cbd5e1; font-size: 0.95rem;">
            <li style="background: #1c2541; padding: 10px 15px; border-radius: 6px;">✔ Achabal to Delhi</li>
            <li style="background: #1c2541; padding: 10px 15px; border-radius: 6px;">✔ Achabal to Jammu</li>
            <li style="background: #1c2541; padding: 10px 15px; border-radius: 6px;">✔ Achabal to Chandigarh</li>
            <li style="background: #1c2541; padding: 10px 15px; border-radius: 6px;">✔ Achabal to Pune</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- IBA Approved GST Billing Documentation -->
  <section style="background: #1c2541; padding: 50px 0; color: #ffffff;">
    <div class="container">
      <div style="text-align: center; max-width: 700px; margin: 0 auto 30px;">
        <h2 style="font-size: 1.8rem; font-weight: 800; color: #ffffff;">Official <span style="color: #f59e0b;">GST Billing & Insurance Documents</span></h2>
        <p style="color: #cbd5e1; font-size: 0.9rem;">We provide 100% compliant documentation for company reimbursement and insurance coverage.</p>
      </div>
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 15px; text-align: center;">
        <div style="background: #0b132b; padding: 15px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.05); color: #cbd5e1; font-size: 0.9rem;">100% Tax GST Invoice</div>
        <div style="background: #0b132b; padding: 15px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.05); color: #cbd5e1; font-size: 0.9rem;">Consignment Lorry Receipt</div>
        <div style="background: #0b132b; padding: 15px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.05); color: #cbd5e1; font-size: 0.9rem;">Vehicle Inspection Certificate</div>
        <div style="background: #0b132b; padding: 15px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.05); color: #cbd5e1; font-size: 0.9rem;">Transit Insurance Policy</div>
      </div>
    </div>
  </section>

  <!-- Detailed FAQs -->
  <section style="background: #0b132b; padding: 60px 0; color: #ffffff;">
    <div class="container" style="max-width: 900px;">
      <div style="text-align: center; margin-bottom: 40px;">
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff;">Frequently Asked <span style="color: #f59e0b;">Questions</span></h2>
        <p style="color: #cbd5e1; font-size: 0.95rem; margin-top: 8px;">Got questions about bike shipping in Achabal? Here are quick answers.</p>
      </div>

      <div style="display: flex; flex-direction: column; gap: 20px;">
        <div style="background: #1c2541; padding: 25px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <h3 style="font-size: 1.15rem; color: #ffffff; margin-bottom: 10px;">How is my bike packed for shipping from Achabal?</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.6;">We apply a 7-layer protective framework including bubble wrap, corrugated sheets, foam edge protectors, and waterproof stretch film before securing it with heavy-duty straps in covered trucks.</p>
        </div>
        <div style="background: #1c2541; padding: 25px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <h3 style="font-size: 1.15rem; color: #ffffff; margin-bottom: 10px;">What documents are required for bike transport in Achabal?</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.6;">You need to provide a photocopy of the bike’s Registration Certificate (RC), valid insurance policy, and Government ID proof (Aadhaar or Driving License) of the sender.</p>
        </div>
        <div style="background: #1c2541; padding: 25px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <h3 style="font-size: 1.15rem; color: #ffffff; margin-bottom: 10px;">Is door-to-door bike pickup available across Achabal?</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.6;">Yes, we offer doorstep pickup from all major areas in Achabal including Railway Station Road, Main Market, and Civil Lines directly to your destination address.</p>
        </div>
        <div style="background: #1c2541; padding: 25px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <h3 style="font-size: 1.15rem; color: #ffffff; margin-bottom: 10px;">How much fuel should be left in the petrol tank?</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.6;">As per safety standards, petrol tanks should be almost empty (less than 1-2 liters) to prevent fire hazards during long-distance transportation.</p>
        </div>
        <div style="background: #1c2541; padding: 25px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <h3 style="font-size: 1.15rem; color: #ffffff; margin-bottom: 10px;">How do I track my bike during transit?</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.6;">We provide regular updates via phone/WhatsApp and real-time GPS tracking status for your carrier vehicle until final delivery.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA Conversion Footer -->
  <section style="background: linear-gradient(135deg, #1c2541 0%, #0b132b 100%); padding: 60px 0; text-align: center; color: #ffffff; border-top: 1px solid rgba(245,158,11,0.3);">
    <div class="container" style="max-width: 800px;">
      <h2 style="font-size: 2.2rem; font-weight: 800; margin-bottom: 15px;">Ready to Transport Your Bike Safely from Achabal?</h2>
      <p style="color: #cbd5e1; font-size: 1.05rem; margin-bottom: 30px;">Contact Shree Ashirwad Packers and Movers today for zero-damage, fully insured doorstep bike shipping.</p>
      <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap;">
        <a href="tel:<?php echo SITE_PHONE_RAW; ?>" style="padding: 15px 35px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #fff; border-radius: 50px; font-weight: 700; font-size: 1.05rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225,29,72,0.4);">
          <i class="fas fa-phone-alt"></i> Call: <?php echo SITE_PHONE; ?>
        </a>
        <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20a%20bike%20shifting%20quote%20for%20Achabal." target="_blank" style="padding: 15px 35px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #fff; border-radius: 50px; font-weight: 700; font-size: 1.05rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16,185,129,0.4);">
          <i class="fab fa-whatsapp"></i> Chat on WhatsApp
        </a>
      </div>
    </div>
  </section>

</main>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "How is my bike packed for shipping from Achabal?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "We apply a 7-layer protective framework including bubble wrap, corrugated sheets, foam edge protectors, and waterproof stretch film before securing it with heavy-duty straps in covered trucks."
      }
    },
    {
      "@type": "Question",
      "name": "What documents are required for bike transport in Achabal?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "You need to provide a photocopy of the bike’s Registration Certificate (RC), valid insurance policy, and Government ID proof (Aadhaar or Driving License) of the sender."
      }
    },
    {
      "@type": "Question",
      "name": "Is door-to-door bike pickup available across Achabal?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, we offer doorstep pickup from all major areas in Achabal including Railway Station Road, Main Market, and Civil Lines directly to your destination address."
      }
    },
    {
      "@type": "Question",
      "name": "How much fuel should be left in the petrol tank?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "As per safety standards, petrol tanks should be almost empty (less than 1-2 liters) to prevent fire hazards during long-distance transportation."
      }
    },
    {
      "@type": "Question",
      "name": "How do I track my bike during transit?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "We provide regular updates via phone/WhatsApp and real-time GPS tracking status for your carrier vehicle until final delivery."
      }
    }
  ]
}
</script>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
