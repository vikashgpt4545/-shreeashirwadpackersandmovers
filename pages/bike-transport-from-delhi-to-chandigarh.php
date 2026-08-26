<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "Bike Transport from Delhi to Chandigarh | Safe Two-Wheeler Shifting";
$page_desc = "Planning bike transport from Delhi to Chandigarh? Get safe, insured, and doorstep motorcycle shipping services. View estimated charges, transit times, and packaging details. Complete door-to-door relocation coverage across Connaught Place, Dwarka, Rohini, South Ext, Janakpuri, Laxmi Nagar.";
$page_keywords = "bike transport from delhi to chandigarh, best bike transport from delhi to chandigarh, affordable bike transport from delhi to chandigarh, packers and movers, packers and movers in delhi, top bike transport from delhi to chandigarh company, household shifting bike transport from delhi to chandigarh, doorstep bike transport from delhi to chandigarh, verified bike transport from delhi to chandigarh services, shree ashirwad bike transport from delhi to chandigarh";
$canonical_url = "https://shreeashirwadpackersandmovers.com/pages/bike-transport-from-delhi-to-chandigarh.php";

require_once __DIR__ . '/../includes/header.php';
?>

<main class="site-main">

  <!-- Section 1: Visual Breadcrumb Navigation Bar -->
  <div class="breadcrumb-wrapper" style="background: #0b132b; padding: 12px 0; border-bottom: 1px solid rgba(255,255,255,0.08);">
    <div class="container">
      <div class="breadcrumb-list" style="font-size: 0.88rem; color: #94a3b8;">
        <span class="breadcrumb-item"><a href="<?php echo SITE_URL; ?>" title="Home" style="color: #f59e0b; text-decoration: none;">Home</a></span>
        <span class="breadcrumb-separator" style="margin: 0 8px; color: #475569;">/</span>
        <span class="breadcrumb-item"><a href="<?php echo SITE_URL; ?>/pages/services.php" title="Services" style="color: #f59e0b; text-decoration: none;">Services</a></span>
        <span class="breadcrumb-separator" style="margin: 0 8px; color: #475569;">/</span>
        <span class="breadcrumb-item active" style="color: #cbd5e1;"><?php echo htmlspecialchars($page_title); ?></span>
      </div>
    </div>
  </div>

  <!-- Section 2: Hero Section & Instant WhatsApp Lead Form -->
  <section class="hero-section" style="background: linear-gradient(135deg, #0b132b 0%, #1c2541 100%); padding: 60px 0; color: #ffffff;">
    <div class="container">
      <div class="hero-grid" style="display: grid; grid-template-columns: 1.2fr 0.8fr; gap: 40px; align-items: center;">
        
        <!-- Hero Text Column -->
        <div class="hero-text">
          <span class="section-tag" style="background: rgba(245, 158, 11, 0.15); color: #f59e0b; border: 1px solid rgba(245, 158, 11, 0.4); padding: 6px 16px; border-radius: 20px; font-size: 0.85rem; font-weight: 700; text-transform: uppercase; display: inline-block; margin-bottom: 15px;">
            DELHI TO CHANDIGARH BIKE RELOCATION SPECIALISTS
          </span>
          <h1 style="font-size: 2.5rem; font-weight: 800; line-height: 1.2; margin-bottom: 20px; color: #ffffff;">
            Professional <span style="color: #f59e0b;">Bike Transport from Delhi to Chandigarh</span>
          </h1>
          <p style="font-size: 1.1rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 25px;">
            Need quick and secure motorcycle shipping from Delhi to Chandigarh (~250 km)? Shree Ashirwad Packers and Movers provides same-day or next-day express bike transport in closed trucks with 7-layer safety packaging and full insurance cover.
          </p>

          <div style="display: flex; gap: 15px; flex-wrap: wrap; margin-bottom: 30px;">
            <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Now" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
              <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call Now: <?php echo SITE_PHONE; ?>
            </a>
            <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20a%20quote%20for%20Bike%20Transport%20from%20Delhi%20to%20Chandigarh." title="Chat on WhatsApp" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
              <i class="fab fa-whatsapp" style="margin-right: 8px;"></i> Chat on WhatsApp
            </a>
          </div>

          <div style="display: flex; gap: 20px; font-size: 0.9rem; color: #94a3b8; flex-wrap: wrap;">
            <span><strong style="color: #f59e0b;">100% Insured</strong> Transit</span>
            <span><strong style="color: #f59e0b;">7-Layer</strong> Protective Wrap</span>
            <span><strong style="color: #f59e0b;">Door-to-Door</strong> Delivery</span>
          </div>
        </div>

        <!-- Hero Lead Form Column -->
        <div class="hero-form-card" style="background: rgba(255, 255, 255, 0.05); backdrop-filter: blur(10px); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 16px; padding: 30px; box-shadow: 0 15px 35px rgba(0,0,0,0.4);">
          <h2 style="font-size: 1.35rem; color: #ffffff; margin-bottom: 8px; font-weight: 700; text-align: center;">Get Instant Route Quote</h2>
          <p style="font-size: 0.85rem; color: #94a3b8; text-align: center; margin-bottom: 20px;">Delhi → Chandigarh Shifting Estimate in 2 Mins</p>

          <form action="#" method="POST" onsubmit="sendHeroWhatsAppLead(event, this);">
            <div style="margin-bottom: 14px;">
              <input type="text" name="name" class="form-control" placeholder="Your Full Name" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="margin-bottom: 14px;">
              <input type="tel" name="phone" class="form-control" placeholder="10-Digit Phone Number" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 10px; margin-bottom: 14px;">
              <input type="text" name="move_from" class="form-control" value="Delhi" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
              <input type="text" name="move_to" class="form-control" value="Chandigarh" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <button type="submit" style="width: 100%; padding: 14px; background: linear-gradient(135deg, #d32f2f 0%, #f59e0b 100%); color: #ffffff; border: none; border-radius: 50px; font-weight: 700; font-size: 1rem; cursor: pointer;">
              Get Free Estimate Now &rarr;
            </button>
          </form>
        </div>

      </div>
    </div>
  </section>

  <!-- Section 3: Key Stats Counter Bar -->
  <section style="background: #0f172a; padding: 35px 0; border-bottom: 1px solid rgba(255,255,255,0.05);">
    <div class="container">
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 20px; text-align: center;">
        <div style="padding: 15px; background: rgba(255,255,255,0.03); border-radius: 10px; border: 1px solid rgba(255,255,255,0.05);">
          <div style="font-size: 1.8rem; font-weight: 800; color: #f59e0b;">15,400+</div>
          <div style="font-size: 0.85rem; color: #94a3b8; margin-top: 5px;">North Corridor Deliveries</div>
        </div>
        <div style="padding: 15px; background: rgba(255,255,255,0.03); border-radius: 10px; border: 1px solid rgba(255,255,255,0.05);">
          <div style="font-size: 1.8rem; font-weight: 800; color: #f59e0b;">~250 KM</div>
          <div style="font-size: 0.85rem; color: #94a3b8; margin-top: 5px;">Delhi → Chandigarh Distance</div>
        </div>
        <div style="padding: 15px; background: rgba(255,255,255,0.03); border-radius: 10px; border: 1px solid rgba(255,255,255,0.05);">
          <div style="font-size: 1.8rem; font-weight: 800; color: #f59e0b;">1 - 2 Days</div>
          <div style="font-size: 0.85rem; color: #94a3b8; margin-top: 5px;">Express Delivery Window</div>
        </div>
        <div style="padding: 15px; background: rgba(255,255,255,0.03); border-radius: 10px; border: 1px solid rgba(255,255,255,0.05);">
          <div style="font-size: 1.8rem; font-weight: 800; color: #f59e0b;">IBA Approved</div>
          <div style="font-size: 0.85rem; color: #94a3b8; margin-top: 5px;">Tax Compliant Invoice</div>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 4: 6-Card Feature Grid -->
  <section style="background: #0b132b; padding: 60px 0; color: #ffffff;">
    <div class="container">
      <div style="text-align: center; margin-bottom: 40px;">
        <h2 style="font-size: 2rem; font-weight: 800; color: #ffffff;">Why Choose Us for Delhi to Chandigarh Bike Shipping?</h2>
        <p style="color: #94a3b8; margin-top: 10px;">Dedicated short-haul intercity transport services for ultimate safety.</p>
      </div>
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 25px;">
        <div style="background: rgba(255,255,255,0.03); padding: 25px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.08);">
          <i class="fas fa-shipping-fast" style="font-size: 2rem; color: #f59e0b; margin-bottom: 15px;"></i>
          <h3 style="font-size: 1.2rem; color: #fff; margin-bottom: 10px;">Express 24-48 Hr Dispatch</h3>
          <p style="font-size: 0.9rem; color: #94a3b8; line-height: 1.6;">Daily direct trips between Delhi NCR and Chandigarh ensure rapid delivery within 24 to 48 hours.</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); padding: 25px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.08);">
          <i class="fas fa-box-open" style="font-size: 2rem; color: #f59e0b; margin-bottom: 15px;"></i>
          <h3 style="font-size: 1.2rem; color: #fff; margin-bottom: 10px;">7-Layer Safety Wrap</h3>
          <p style="font-size: 0.9rem; color: #94a3b8; line-height: 1.6;">Bubble wrap, corrugated sheets, foam lever protectors, and stretch film safeguard paintwork.</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); padding: 25px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.08);">
          <i class="fas fa-shield-alt" style="font-size: 2rem; color: #f59e0b; margin-bottom: 15px;"></i>
          <h3 style="font-size: 1.2rem; color: #fff; margin-bottom: 10px;">Full Transit Insurance</h3>
          <p style="font-size: 0.9rem; color: #94a3b8; line-height: 1.6;">Complete financial protection covering any accidental damage or loss on NH 44 corridor.</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); padding: 25px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.08);">
          <i class="fas fa-map-marked-alt" style="font-size: 2rem; color: #f59e0b; margin-bottom: 15px;"></i>
          <h3 style="font-size: 1.2rem; color: #fff; margin-bottom: 10px;">Doorstep Delivery in Tricity</h3>
          <p style="font-size: 0.9rem; color: #94a3b8; line-height: 1.6;">Direct home delivery across Chandigarh (Sectors 1 to 70), Mohali, and Panchkula.</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); padding: 25px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.08);">
          <i class="fas fa-file-invoice" style="font-size: 1.8rem; color: #f59e0b; margin-bottom: 15px;"></i>
          <h3 style="font-size: 1.2rem; color: #fff; margin-bottom: 10px;">IBA Approved GST Invoice</h3>
          <p style="font-size: 0.9rem; color: #94a3b8; line-height: 1.6;">100% tax compliant GST bills accepted for corporate employee relocation claims.</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); padding: 25px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.08);">
          <i class="fas fa-check-circle" style="font-size: 1.8rem; color: #f59e0b; margin-bottom: 15px;"></i>
          <h3 style="font-size: 1.2rem; color: #fff; margin-bottom: 10px;">Zero Driven Guarantee</h3>
          <p style="font-size: 0.9rem; color: #94a3b8; line-height: 1.6;">Your vehicle is transported strictly inside closed carriers with zero unauthorized riding.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 5: Specialized Services Breakdown & Tariff Table -->
  <section style="background: #0f172a; padding: 60px 0; color: #ffffff;">
    <div class="container">
      <div style="text-align: center; margin-bottom: 40px;">
        <h2 style="font-size: 2rem; font-weight: 800; color: #ffffff;">Delhi to Chandigarh Bike Shipping Tariff Chart</h2>
        <p style="color: #94a3b8; margin-top: 10px;">Transparent charges for express Delhi to Chandigarh route.</p>
      </div>

      <div style="overflow-x: auto; margin-bottom: 30px;">
        <table style="width: 100%; border-collapse: collapse; background: rgba(255,255,255,0.02); border: 1px solid rgba(255,255,255,0.08); text-align: left; font-size: 0.95rem;">
          <thead>
            <tr style="background: rgba(245, 158, 11, 0.15); color: #f59e0b; border-bottom: 1px solid rgba(245, 158, 11, 0.3);">
              <th style="padding: 15px; font-weight: 700;">Vehicle Category</th>
              <th style="padding: 15px; font-weight: 700;">Engine Capacity</th>
              <th style="padding: 15px; font-weight: 700;">Standard Freight</th>
              <th style="padding: 15px; font-weight: 700;">Premium Crate Pack</th>
              <th style="padding: 15px; font-weight: 700;">Transit Time</th>
            </tr>
          </thead>
          <tbody style="color: #cbd5e1;">
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.05);">
              <td style="padding: 15px;">Standard Scooters / Mopeds</td>
              <td style="padding: 15px;">100cc - 125cc</td>
              <td style="padding: 15px; color: #f59e0b; font-weight: 700;">₹2,500 - ₹3,200</td>
              <td style="padding: 15px;">₹3,500 - ₹4,200</td>
              <td style="padding: 15px;">1 Day</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.05);">
              <td style="padding: 15px;">Commuter Motorcycles</td>
              <td style="padding: 15px;">125cc - 180cc</td>
              <td style="padding: 15px; color: #f59e0b; font-weight: 700;">₹2,800 - ₹3,600</td>
              <td style="padding: 15px;">₹3,800 - ₹4,800</td>
              <td style="padding: 15px;">1 - 2 Days</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.05);">
              <td style="padding: 15px;">Sports / Cruiser Bikes</td>
              <td style="padding: 15px;">200cc - 500cc</td>
              <td style="padding: 15px; color: #f59e0b; font-weight: 700;">₹3,500 - ₹4,800</td>
              <td style="padding: 15px;">₹5,000 - ₹6,500</td>
              <td style="padding: 15px;">1 - 2 Days</td>
            </tr>
            <tr>
              <td style="padding: 15px;">Superbikes / Premium Cruisers</td>
              <td style="padding: 15px;">500cc+</td>
              <td style="padding: 15px; color: #f59e0b; font-weight: 700;">₹5,500 - ₹8,500</td>
              <td style="padding: 15px;">₹7,500 - ₹10,500</td>
              <td style="padding: 15px;">1 - 2 Days</td>
            </tr>
          </tbody>
        </table>
      </div>
      <p style="font-size: 0.85rem; color: #94a3b8; text-align: center;">*Rates vary depending on bike weight, value declaration, and specific pickup location within Delhi NCR.</p>
    </div>
  </section>

  <!-- Section 6: 7-Layer Safety Packaging Framework -->
  <section style="background: #0b132b; padding: 60px 0; color: #ffffff;">
    <div class="container">
      <div style="text-align: center; margin-bottom: 40px;">
        <h2 style="font-size: 2rem; font-weight: 800; color: #ffffff;">7-Layer Safety Packaging Standard</h2>
        <p style="color: #94a3b8; margin-top: 10px;">Rigorous multi-layer protection for safe transit.</p>
      </div>
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 20px;">
        <div style="padding: 20px; background: rgba(255,255,255,0.03); border-radius: 10px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #fff; font-size: 1.1rem; margin-bottom: 8px;">Layer 1: Stretch Film Wrapping</h4>
          <p style="font-size: 0.88rem; color: #94a3b8;">Protects original body paint against fine dust and grime during loading.</p>
        </div>
        <div style="padding: 20px; background: rgba(255,255,255,0.03); border-radius: 10px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #fff; font-size: 1.1rem; margin-bottom: 8px;">Layer 2: 80-GSM Heavy Bubble Wrap</h4>
          <p style="font-size: 0.88rem; color: #94a3b8;">Dense shock-absorbing air cushioning covering fuel tank and fairing panels.</p>
        </div>
        <div style="padding: 20px; background: rgba(255,255,255,0.03); border-radius: 10px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #fff; font-size: 1.1rem; margin-bottom: 8px;">Layer 3: Corrugated Cardboard Sheets</h4>
          <p style="font-size: 0.88rem; color: #94a3b8;">Impact-resistant cardboard sheets surrounding exhaust pipe and engine guards.</p>
        </div>
        <div style="padding: 20px; background: rgba(255,255,255,0.03); border-radius: 10px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #fff; font-size: 1.1rem; margin-bottom: 8px;">Layer 4: Custom Foam Corner Caps</h4>
          <p style="font-size: 0.88rem; color: #94a3b8;">Protects mirror stalks, brake levers, and foot controls from external pressure.</p>
        </div>
        <div style="padding: 20px; background: rgba(255,255,255,0.03); border-radius: 10px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #fff; font-size: 1.1rem; margin-bottom: 8px;">Layer 5: Waterproof Poly-Shield</h4>
          <p style="font-size: 0.88rem; color: #94a3b8;">Ensures 100% weather protection across highway transit.</p>
        </div>
        <div style="padding: 20px; background: rgba(255,255,255,0.03); border-radius: 10px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #fff; font-size: 1.1rem; margin-bottom: 8px;">Layer 6: Ratchet Tie-Down Belts</h4>
          <p style="font-size: 0.88rem; color: #94a3b8;">Locks bike wheels securely into truck container floor grooves.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 7: Origin Pickup Locality Grid -->
  <section style="background: #0f172a; padding: 60px 0; color: #ffffff;">
    <div class="container">
      <div style="text-align: center; margin-bottom: 40px;">
        <h2 style="font-size: 1.8rem; font-weight: 800; color: #ffffff;">Delhi Pickup Locations</h2>
        <p style="color: #94a3b8; margin-top: 8px;">Doorstep pickup available across all key Delhi sectors.</p>
      </div>
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 15px;">
        <div style="background: rgba(255,255,255,0.03); padding: 15px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.05); text-align: center; color: #cbd5e1;">Connaught Place & Central Delhi</div>
        <div style="background: rgba(255,255,255,0.03); padding: 15px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.05); text-align: center; color: #cbd5e1;">Dwarka & Janakpuri</div>
        <div style="background: rgba(255,255,255,0.03); padding: 15px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.05); text-align: center; color: #cbd5e1;">Rohini & Pitampura</div>
        <div style="background: rgba(255,255,255,0.03); padding: 15px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.05); text-align: center; color: #cbd5e1;">South Extension & Saket</div>
        <div style="background: rgba(255,255,255,0.03); padding: 15px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.05); text-align: center; color: #cbd5e1;">Laxmi Nagar & Preet Vihar</div>
        <div style="background: rgba(255,255,255,0.03); padding: 15px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.05); text-align: center; color: #cbd5e1;">Vasant Kunj & Hauz Khas</div>
      </div>
    </div>
  </section>

  <!-- Section 8: Intercity Route Network Grid -->
  <section style="background: #0b132b; padding: 60px 0; color: #ffffff;">
    <div class="container">
      <div style="text-align: center; margin-bottom: 40px;">
        <h2 style="font-size: 1.8rem; font-weight: 800; color: #ffffff;">Popular Northern Routes from Delhi</h2>
        <p style="color: #94a3b8; margin-top: 8px;">Explore major intercity bike shipping corridors from Delhi NCR.</p>
      </div>
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); gap: 15px;">
        <a href="<?php echo SITE_URL; ?>/pages/bike-transport-from-delhi-to-jaipur.php" style="display: block; padding: 15px; background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 8px; color: #f59e0b; text-decoration: none; text-align: center;">Delhi → Jaipur</a>
        <a href="<?php echo SITE_URL; ?>/pages/bike-transport-from-delhi-to-gorakhpur.php" style="display: block; padding: 15px; background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 8px; color: #f59e0b; text-decoration: none; text-align: center;">Delhi → Gorakhpur</a>
        <a href="<?php echo SITE_URL; ?>/pages/bike-transport-from-delhi-to-bangalore.php" style="display: block; padding: 15px; background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 8px; color: #f59e0b; text-decoration: none; text-align: center;">Delhi → Bangalore</a>
        <a href="<?php echo SITE_URL; ?>/pages/bike-transport-from-delhi-to-mumbai.php" style="display: block; padding: 15px; background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 8px; color: #f59e0b; text-decoration: none; text-align: center;">Delhi → Mumbai</a>
      </div>
    </div>
  </section>

  <!-- Section 9: IBA Approved GST Billing Documentation -->
  <section style="background: #0f172a; padding: 60px 0; color: #ffffff;">
    <div class="container">
      <div style="text-align: center; margin-bottom: 40px;">
        <h2 style="font-size: 1.8rem; font-weight: 800; color: #ffffff;">Official Relocation Billing</h2>
        <p style="color: #94a3b8; margin-top: 8px;">Documentation compliant with corporate relocation policies.</p>
      </div>
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 20px;">
        <div style="padding: 20px; background: rgba(255,255,255,0.03); border-radius: 10px; border: 1px solid rgba(255,255,255,0.08);">
          <i class="fas fa-file-invoice-dollar" style="font-size: 1.8rem; color: #f59e0b; margin-bottom: 12px;"></i>
          <h4 style="color: #fff; margin-bottom: 8px;">GST Invoice</h4>
          <p style="font-size: 0.88rem; color: #94a3b8;">18% GST tax invoice specifying vehicle SAC codes for corporate claim processing.</p>
        </div>
        <div style="padding: 20px; background: rgba(255,255,255,0.03); border-radius: 10px; border: 1px solid rgba(255,255,255,0.08);">
          <i class="fas fa-truck-loading" style="font-size: 1.8rem; color: #f59e0b; margin-bottom: 12px;"></i>
          <h4 style="color: #fff; margin-bottom: 8px;">Lorry Receipt (LR Copy)</h4>
          <p style="font-size: 0.88rem; color: #94a3b8;">Official consignment note specifying bike engine and chassis details.</p>
        </div>
        <div style="padding: 20px; background: rgba(255,255,255,0.03); border-radius: 10px; border: 1px solid rgba(255,255,255,0.08);">
          <i class="fas fa-clipboard-check" style="font-size: 1.8rem; color: #f59e0b; margin-bottom: 12px;"></i>
          <h4 style="color: #fff; margin-bottom: 8px;">Pre-Pickup Inspection</h4>
          <p style="font-size: 0.88rem; color: #94a3b8;">Condition report recording fuel level, odometer reading, and scratches before dispatch.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 10: Detailed FAQs with JSON-LD Schema -->
  <section style="background: #0b132b; padding: 60px 0; color: #ffffff;">
    <div class="container">
      <div style="text-align: center; margin-bottom: 40px;">
        <h2 style="font-size: 2rem; font-weight: 800; color: #ffffff;">Frequently Asked Questions</h2>
        <p style="color: #94a3b8; margin-top: 10px;">Everything you need to know about bike transport from Delhi to Chandigarh.</p>
      </div>

      <div style="max-width: 800px; margin: 0 auto; display: grid; gap: 15px;">
        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 10px; padding: 20px;">
          <h3 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 10px;">How long does bike transport from Delhi to Chandigarh take?</h3>
          <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.6;">Delivery takes usually 24 to 48 hours via direct daily container trucks on NH 44.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 10px; padding: 20px;">
          <h3 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 10px;">What is the cost of bike shipping from Delhi to Chandigarh?</h3>
          <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.6;">Bike shipping rates start from ₹2,500 to ₹4,800 for standard bikes and scooties, up to ₹8,500+ for premium motorcycles.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 10px; padding: 20px;">
          <h3 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 10px;">What documents are required for shipping to Chandigarh?</h3>
          <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.6;">You must submit copies of RC book, valid insurance policy, PUC certificate, and government ID proof.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 10px; padding: 20px;">
          <h3 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 10px;">Is door delivery included in Mohali and Panchkula?</h3>
          <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.6;">Yes, we cover the entire Tricity region including Chandigarh, Mohali, and Panchkula.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 10px; padding: 20px;">
          <h3 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 10px;">How is the motorcycle packaged?</h3>
          <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.6;">We apply 7 layers of protection including 80-GSM bubble wrap, corrugated sheets, foam caps, and stretch wrap.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 10px; padding: 20px;">
          <h3 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 10px;">Should I drain the fuel before handover?</h3>
          <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.6;">Yes, fuel must be kept to minimum reserve (under 1-2 liters) for safety compliance.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 10px; padding: 20px;">
          <h3 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 10px;">Is transit insurance included for Chandigarh route?</h3>
          <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.6;">Yes, comprehensive transit insurance policy protects your bike against any accidental damage during transit.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 10px; padding: 20px;">
          <h3 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 10px;">Do you provide official GST invoice for office relocation claims?</h3>
          <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.6;">Yes, we issue 18% GST invoices and LR consignment notes accepted by all corporate companies.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 10px; padding: 20px;">
          <h3 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 10px;">Will my bike be driven by road to Chandigarh?</h3>
          <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.6;">No, your bike is safely loaded and transported strictly inside closed car/bike container trucks.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 10px; padding: 20px;">
          <h3 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 10px;">How can I reserve a pickup slot in Delhi NCR?</h3>
          <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.6;">Fill out the instant quote form or call our support line directly to lock in your preferred pickup date.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 11: Call-To-Action Conversion Footer -->
  <section style="background: linear-gradient(135deg, #1c2541 0%, #0b132b 100%); padding: 60px 0; text-align: center; color: #ffffff; border-top: 1px solid rgba(245, 158, 11, 0.3);">
    <div class="container">
      <h2 style="font-size: 2.2rem; font-weight: 800; margin-bottom: 15px;">Book Your Bike Transport from Delhi to Chandigarh Today</h2>
      <p style="font-size: 1.1rem; color: #cbd5e1; max-width: 700px; margin: 0 auto 30px; line-height: 1.7;">
        Express, insured, and doorstep motorcycle shipping across the North corridor. Get your instant quote now!
      </p>
      <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap;">
        <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Us Now" style="padding: 15px 35px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #fff; border-radius: 50px; font-weight: 700; text-decoration: none; font-size: 1.05rem; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
          <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call: <?php echo SITE_PHONE; ?>
        </a>
        <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20to%20book%20Bike%20Transport%20from%20Delhi%20to%20Chandigarh." target="_blank" title="WhatsApp Us" style="padding: 15px 35px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #fff; border-radius: 50px; font-weight: 700; text-decoration: none; font-size: 1.05rem; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
          <i class="fab fa-whatsapp" style="margin-right: 8px;"></i> WhatsApp Quote
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
      "name": "How long does bike transport from Delhi to Chandigarh take?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Delivery takes usually 24 to 48 hours via direct daily container trucks on NH 44."
      }
    },
    {
      "@type": "Question",
      "name": "What is the cost of bike shipping from Delhi to Chandigarh?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Bike shipping rates start from ₹2,500 to ₹4,800 for standard bikes and scooties, up to ₹8,500+ for premium motorcycles."
      }
    },
    {
      "@type": "Question",
      "name": "What documents are required for shipping to Chandigarh?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "You must submit copies of RC book, valid insurance policy, PUC certificate, and government ID proof."
      }
    },
    {
      "@type": "Question",
      "name": "Is door delivery included in Mohali and Panchkula?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, we cover the entire Tricity region including Chandigarh, Mohali, and Panchkula."
      }
    },
    {
      "@type": "Question",
      "name": "How is the motorcycle packaged?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "We apply 7 layers of protection including 80-GSM bubble wrap, corrugated sheets, foam caps, and stretch wrap."
      }
    },
    {
      "@type": "Question",
      "name": "Should I drain the fuel before handover?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, fuel must be kept to minimum reserve (under 1-2 liters) for safety compliance."
      }
    },
    {
      "@type": "Question",
      "name": "Is transit insurance included for Chandigarh route?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, comprehensive transit insurance policy protects your bike against any accidental damage during transit."
      }
    },
    {
      "@type": "Question",
      "name": "Do you provide official GST invoice for office relocation claims?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, we issue 18% GST invoices and LR consignment notes accepted by all corporate companies."
      }
    },
    {
      "@type": "Question",
      "name": "Will my bike be driven by road to Chandigarh?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "No, your bike is safely loaded and transported strictly inside closed car/bike container trucks."
      }
    },
    {
      "@type": "Question",
      "name": "How can I reserve a pickup slot in Delhi NCR?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Fill out the instant quote form or call our support line directly to lock in your preferred pickup date."
      }
    }
  ]
}
</script>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>

