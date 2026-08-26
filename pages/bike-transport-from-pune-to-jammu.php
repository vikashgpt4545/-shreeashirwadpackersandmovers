<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "Bike Transport from Pune to Jammu | Safe Two-Wheeler Shifting";
$page_desc = "Safe, insured bike transport from Pune to Jammu. Door-to-door delivery with 7-layer bubble packaging, enclosed containers, IBA GST billing & instant quotes.";
$page_keywords = "bike transport from pune to jammu, bike shipping pune to jammu, motorcycle transport pune to jammu charges, bike courier service pune jammu, two wheeler relocation pune jammu";
$canonical_url = "https://shreeashirwadpackersandmovers.com/pages/bike-transport-from-pune-to-jammu.php";

require_once __DIR__ . '/../includes/header.php';
?>

<main class="site-main" style="background-color: #0b132b; color: #cbd5e1; font-family: 'Inter', sans-serif;">

  <!-- 1. Visual Breadcrumb Navigation Bar -->
  <div class="breadcrumb-wrapper" style="background: #1c2541; padding: 12px 0; border-bottom: 1px solid rgba(245, 158, 11, 0.2);">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 15px;">
      <div class="breadcrumb-list" style="font-size: 0.88rem; color: #94a3b8;">
        <span class="breadcrumb-item"><a href="<?php echo SITE_URL; ?>" title="Home" style="color: #f59e0b; text-decoration: none;">Home</a></span>
        <span class="breadcrumb-separator" style="margin: 0 8px; color: #64748b;">/</span>
        <span class="breadcrumb-item"><a href="<?php echo SITE_URL; ?>/pages/bike-transportation.php" title="Bike Transport" style="color: #f59e0b; text-decoration: none;">Bike Transport</a></span>
        <span class="breadcrumb-separator" style="margin: 0 8px; color: #64748b;">/</span>
        <span class="breadcrumb-item active" style="color: #ffffff;"><?php echo htmlspecialchars($page_title); ?></span>
      </div>
    </div>
  </div>

  <!-- 2. Hero Section & Instant WhatsApp Lead Form -->
  <section class="hero-section" style="background: linear-gradient(135deg, #0b132b 0%, #1c2541 100%); padding: 60px 0; color: #ffffff; border-bottom: 1px solid rgba(255, 255, 255, 0.05);">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 15px;">
      <div class="hero-grid" style="display: grid; grid-template-columns: 1.2fr 0.8fr; gap: 40px; align-items: center;">
        
        <div class="hero-text">
          <span class="section-tag" style="background: rgba(245, 158, 11, 0.15); color: #f59e0b; border: 1px solid rgba(245, 158, 11, 0.4); padding: 6px 16px; border-radius: 20px; font-size: 0.85rem; font-weight: 700; text-transform: uppercase; display: inline-block; margin-bottom: 15px;">
            PUNE TO JAMMU BIKE RELOCATION
          </span>
          <h1 style="font-size: 2.5rem; font-weight: 800; line-height: 1.2; margin-bottom: 20px; color: #ffffff;">
            Professional <span style="color: #f59e0b;">Bike Transport from Pune to Jammu</span>
          </h1>
          <p style="font-size: 1.05rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 25px;">
            Relocate your motorcycle safely from Pune to Jammu (~1,900 km) with 100% door-to-door protection. Multi-layer bubble wrapping, enclosed container trucks, GPS tracking, and comprehensive transit insurance included.
          </p>

          <div style="display: flex; gap: 15px; flex-wrap: wrap; margin-bottom: 30px;">
            <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Now" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
              <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call: <?php echo SITE_PHONE; ?>
            </a>
            <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20need%20a%20quote%20for%20bike%20transport%20from%20Pune%20to%20Jammu." title="Chat on WhatsApp" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
              <i class="fab fa-whatsapp" style="margin-right: 8px;"></i> WhatsApp Quote
            </a>
          </div>

          <div style="display: flex; gap: 20px; font-size: 0.9rem; color: #94a3b8;">
            <span><strong style="color: #f59e0b;">Transit Insurance</strong> Covered</span>
            <span><strong style="color: #f59e0b;">7-Layer</strong> Multi Wrapping</span>
            <span><strong style="color: #f59e0b;">4-5 Days</strong> Express Delivery</span>
          </div>
        </div>

        <div class="hero-form-card" style="background: rgba(255, 255, 255, 0.04); backdrop-filter: blur(10px); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 16px; padding: 30px; box-shadow: 0 15px 35px rgba(0,0,0,0.4);">
          <h2 style="font-size: 1.3rem; color: #ffffff; margin-bottom: 8px; font-weight: 700; text-align: center;">Get Pune → Jammu Quote</h2>
          <p style="font-size: 0.85rem; color: #94a3b8; text-align: center; margin-bottom: 20px;">Instant price estimation sent straight to your WhatsApp</p>

          <form action="#" method="POST" onsubmit="sendHeroWhatsAppLead(event, this);">
            <div style="margin-bottom: 14px;">
              <input type="text" name="name" class="form-control" placeholder="Your Full Name" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="margin-bottom: 14px;">
              <input type="tel" name="phone" class="form-control" placeholder="10-Digit Mobile Number" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 10px; margin-bottom: 14px;">
              <input type="text" name="move_from" class="form-control" value="Pune" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
              <input type="text" name="move_to" class="form-control" value="Jammu" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <button type="submit" style="width: 100%; padding: 14px; background: linear-gradient(135deg, #d32f2f 0%, #f59e0b 100%); color: #ffffff; border: none; border-radius: 50px; font-weight: 700; font-size: 1rem; cursor: pointer;">
              Get Instant Estimate Now &rarr;
            </button>
          </form>
        </div>

      </div>
    </div>
  </section>

  <!-- 3. Key Stats Counter Bar -->
  <section class="stats-counter-bar" style="background: #1c2541; padding: 35px 0; border-bottom: 1px solid rgba(255, 255, 255, 0.05);">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 15px;">
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 25px; text-align: center;">
        <div style="background: rgba(255,255,255,0.03); padding: 20px; border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b;">1,450+</div>
          <div style="font-size: 0.9rem; color: #94a3b8;">Bikes Shifted to Jammu</div>
        </div>
        <div style="background: rgba(255,255,255,0.03); padding: 20px; border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b;">1,900+ KM</div>
          <div style="font-size: 0.9rem; color: #94a3b8;">Interstate Highway Corridor</div>
        </div>
        <div style="background: rgba(255,255,255,0.03); padding: 20px; border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b;">100%</div>
          <div style="font-size: 0.9rem; color: #94a3b8;">Transit Insurance Guarantee</div>
        </div>
        <div style="background: rgba(255,255,255,0.03); padding: 20px; border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b;">IBA & GST</div>
          <div style="font-size: 0.9rem; color: #94a3b8;">Approved Bills & Documentation</div>
        </div>
      </div>
    </div>
  </section>

  <!-- 4. 6-Card Feature Grid -->
  <section style="padding: 60px 0; background: #0b132b;">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 15px;">
      <h2 style="font-size: 2rem; font-weight: 800; text-align: center; color: #ffffff; margin-bottom: 15px;">
        Why Choose Our <span style="color: #f59e0b;">Pune to Jammu</span> Bike Transport?
      </h2>
      <p style="text-align: center; color: #94a3b8; max-width: 700px; margin: 0 auto 40px auto; font-size: 0.95rem;">
        Reliable long-distance motorcycle relocation engineered for zero-vibration transit.
      </p>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 25px;">
        <div style="background: #1c2541; padding: 25px; border-radius: 12px; border-left: 4px solid #f59e0b;">
          <h3 style="font-size: 1.2rem; color: #ffffff; margin-bottom: 10px;">Dedicated Covered Trucks</h3>
          <p style="font-size: 0.9rem; color: #94a3b8; line-height: 1.6;">Weatherproof covered container vehicles shield your vehicle against highway dust, rain, and vibrations.</p>
        </div>
        <div style="background: #1c2541; padding: 25px; border-radius: 12px; border-left: 4px solid #f59e0b;">
          <h3 style="font-size: 1.2rem; color: #ffffff; margin-bottom: 10px;">Pune Doorstep Pickup</h3>
          <p style="font-size: 0.9rem; color: #94a3b8; line-height: 1.6;">Doorstep pickup across Hadapsar, Hinjewadi, Wakad, Baner, Kharadi, Viman Nagar, and PCMC.</p>
        </div>
        <div style="background: #1c2541; padding: 25px; border-radius: 12px; border-left: 4px solid #f59e0b;">
          <h3 style="font-size: 1.2rem; color: #ffffff; margin-bottom: 10px;">7-Layer Safety Packing</h3>
          <p style="font-size: 0.9rem; color: #94a3b8; line-height: 1.6;">High-density corrugated sheets, 80-GSM bubble wrap, stretch films, and heavy-duty foam pads guard fragile body parts.</p>
        </div>
        <div style="background: #1c2541; padding: 25px; border-radius: 12px; border-left: 4px solid #f59e0b;">
          <h3 style="font-size: 1.2rem; color: #ffffff; margin-bottom: 10px;">Full Doorstep Jammu Delivery</h3>
          <p style="font-size: 0.9rem; color: #94a3b8; line-height: 1.6;">Direct delivery across Gandhi Nagar, Trikuta Nagar, Channi Himmat, Janipur, and Bari Brahmana.</p>
        </div>
        <div style="background: #1c2541; padding: 25px; border-radius: 12px; border-left: 4px solid #f59e0b;">
          <h3 style="font-size: 1.2rem; color: #ffffff; margin-bottom: 10px;">Transit Insurance Coverage</h3>
          <p style="font-size: 0.9rem; color: #94a3b8; line-height: 1.6;">Comprehensive transit policy protects your motorcycle against accidental loss or damage during transit.</p>
        </div>
        <div style="background: #1c2541; padding: 25px; border-radius: 12px; border-left: 4px solid #f59e0b;">
          <h3 style="font-size: 1.2rem; color: #ffffff; margin-bottom: 10px;">Transparent Freight Tariffs</h3>
          <p style="font-size: 0.9rem; color: #94a3b8; line-height: 1.6;">No hidden fees or unexpected unloading charges. Clear break-up of costs for fuel, packaging, and doorstep labor.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- 5. Specialized Services Breakdown & Tariff Matrix -->
  <section style="padding: 60px 0; background: #1c2541; border-top: 1px solid rgba(255, 255, 255, 0.05);">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 15px;">
      <h2 style="font-size: 2rem; font-weight: 800; text-align: center; color: #ffffff; margin-bottom: 15px;">
        Estimated <span style="color: #f59e0b;">Pune to Jammu</span> Bike Shifting Charges
      </h2>
      <p style="text-align: center; color: #94a3b8; max-width: 700px; margin: 0 auto 40px auto; font-size: 0.95rem;">
        Transparent tariffs based on vehicle type and chosen packaging tier.
      </p>

      <div style="overflow-x: auto; background: #0b132b; border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.3); margin-bottom: 40px;">
        <table style="width: 100%; border-collapse: collapse; text-align: left; color: #cbd5e1; font-size: 0.95rem;">
          <thead>
            <tr style="background: rgba(245, 158, 11, 0.15); color: #f59e0b; border-bottom: 1px solid rgba(245, 158, 11, 0.3);">
              <th style="padding: 16px; border-right: 1px solid rgba(255,255,255,0.05);">Vehicle Type</th>
              <th style="padding: 16px; border-right: 1px solid rgba(255,255,255,0.05);">Standard Packaging</th>
              <th style="padding: 16px; border-right: 1px solid rgba(255,255,255,0.05);">Premium 7-Layer Packaging</th>
              <th style="padding: 16px;">Estimated Transit Duration</th>
            </tr>
          </thead>
          <tbody>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.05);">
              <td style="padding: 16px; border-right: 1px solid rgba(255,255,255,0.05); font-weight: 600; color: #ffffff;">Scooty / 100cc - 125cc Bikes</td>
              <td style="padding: 16px; border-right: 1px solid rgba(255,255,255,0.05);">₹ 5,000 - ₹ 6,500</td>
              <td style="padding: 16px; border-right: 1px solid rgba(255,255,255,0.05); color: #f59e0b;">₹ 6,500 - ₹ 7,800</td>
              <td style="padding: 16px;">4 - 5 Days</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.05);">
              <td style="padding: 16px; border-right: 1px solid rgba(255,255,255,0.05); font-weight: 600; color: #ffffff;">Standard Commuter (150cc - 200cc)</td>
              <td style="padding: 16px; border-right: 1px solid rgba(255,255,255,0.05);">₹ 6,500 - ₹ 8,000</td>
              <td style="padding: 16px; border-right: 1px solid rgba(255,255,255,0.05); color: #f59e0b;">₹ 8,000 - ₹ 9,500</td>
              <td style="padding: 16px;">4 - 5 Days</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.05);">
              <td style="padding: 16px; border-right: 1px solid rgba(255,255,255,0.05); font-weight: 600; color: #ffffff;">Sports / Cruiser (350cc Bullet, RE, KTM)</td>
              <td style="padding: 16px; border-right: 1px solid rgba(255,255,255,0.05);">₹ 8,000 - ₹ 10,000</td>
              <td style="padding: 16px; border-right: 1px solid rgba(255,255,255,0.05); color: #f59e0b;">₹ 10,000 - ₹ 12,000</td>
              <td style="padding: 16px;">4 - 5 Days</td>
            </tr>
            <tr>
              <td style="padding: 16px; border-right: 1px solid rgba(255,255,255,0.05); font-weight: 600; color: #ffffff;">Superbikes / Premium Bikes (500cc+)</td>
              <td style="padding: 16px; border-right: 1px solid rgba(255,255,255,0.05);">₹ 11,500 - ₹ 15,000</td>
              <td style="padding: 16px; border-right: 1px solid rgba(255,255,255,0.05); color: #f59e0b;">₹ 15,000 - ₹ 18,000</td>
              <td style="padding: 16px;">4 - 5 Days</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </section>

  <!-- 6. 7-Layer Safety Packaging Framework -->
  <section style="padding: 60px 0; background: #0b132b;">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 15px;">
      <h2 style="font-size: 2rem; font-weight: 800; text-align: center; color: #ffffff; margin-bottom: 15px;">
        Our 7-Layer <span style="color: #f59e0b;">Protective Packaging</span> Standard
      </h2>
      <p style="text-align: center; color: #94a3b8; max-width: 700px; margin: 0 auto 40px auto; font-size: 0.95rem;">
        Multi-layered security shielding paintwork, engine parts, and mirrors during highway transit.
      </p>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 20px;">
        <div style="background: #1c2541; padding: 20px; border-radius: 10px; text-align: center; border: 1px solid rgba(245,158,11,0.2);">
          <div style="width: 40px; height: 40px; background: #f59e0b; color: #0b132b; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 800; margin: 0 auto 15px auto;">1</div>
          <h4 style="color: #fff; margin-bottom: 8px;">Scratch Guard Film</h4>
          <p style="font-size: 0.85rem; color: #94a3b8;">Primary soft layer directly applied to paintwork, tanks, and headlights.</p>
        </div>
        <div style="background: #1c2541; padding: 20px; border-radius: 10px; text-align: center; border: 1px solid rgba(245,158,11,0.2);">
          <div style="width: 40px; height: 40px; background: #f59e0b; color: #0b132b; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 800; margin: 0 auto 15px auto;">2</div>
          <h4 style="color: #fff; margin-bottom: 8px;">80-GSM Bubble Wrap</h4>
          <p style="font-size: 0.85rem; color: #94a3b8;">Heavy shock-absorbing bubble wrap around engine blocks and handlebars.</p>
        </div>
        <div style="background: #1c2541; padding: 20px; border-radius: 10px; text-align: center; border: 1px solid rgba(245,158,11,0.2);">
          <div style="width: 40px; height: 40px; background: #f59e0b; color: #0b132b; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 800; margin: 0 auto 15px auto;">3</div>
          <h4 style="color: #fff; margin-bottom: 8px;">Corrugated Sheets</h4>
          <p style="font-size: 0.85rem; color: #94a3b8;">Thick paperboard sheets surrounding side panels, mudguards, and exhausts.</p>
        </div>
        <div style="background: #1c2541; padding: 20px; border-radius: 10px; text-align: center; border: 1px solid rgba(245,158,11,0.2);">
          <div style="width: 40px; height: 40px; background: #f59e0b; color: #0b132b; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 800; margin: 0 auto 15px auto;">4</div>
          <h4 style="color: #fff; margin-bottom: 8px;">Heavy Foam Padding</h4>
          <p style="font-size: 0.85rem; color: #94a3b8;">Custom corner pads for indicators, side mirrors, and brake levers.</p>
        </div>
        <div style="background: #1c2541; padding: 20px; border-radius: 10px; text-align: center; border: 1px solid rgba(245,158,11,0.2);">
          <div style="width: 40px; height: 40px; background: #f59e0b; color: #0b132b; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 800; margin: 0 auto 15px auto;">5</div>
          <h4 style="color: #fff; margin-bottom: 8px;">Waterproof Stretch Film</h4>
          <p style="font-size: 0.85rem; color: #94a3b8;">Exterior sealing layer protecting against rainwater, dust, and moisture.</p>
        </div>
        <div style="background: #1c2541; padding: 20px; border-radius: 10px; text-align: center; border: 1px solid rgba(245,158,11,0.2);">
          <div style="width: 40px; height: 40px; background: #f59e0b; color: #0b132b; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 800; margin: 0 auto 15px auto;">6</div>
          <h4 style="color: #fff; margin-bottom: 8px;">Safety Belts & Straps</h4>
          <p style="font-size: 0.85rem; color: #94a3b8;">Industrial nylon ratchet belts securing the motorcycle inside the truck container.</p>
        </div>
        <div style="background: #1c2541; padding: 20px; border-radius: 10px; text-align: center; border: 1px solid rgba(245,158,11,0.2);">
          <div style="width: 40px; height: 40px; background: #f59e0b; color: #0b132b; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 800; margin: 0 auto 15px auto;">7</div>
          <h4 style="color: #fff; margin-bottom: 8px;">Wooden Crate (Optional)</h4>
          <p style="font-size: 0.85rem; color: #94a3b8;">Custom reinforced wooden framing available for luxury sports bikes and long distances.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- 7. Origin Pickup Locality Grid -->
  <section style="padding: 50px 0; background: #1c2541; border-top: 1px solid rgba(255,255,255,0.05);">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 15px;">
      <h3 style="font-size: 1.5rem; color: #ffffff; margin-bottom: 20px;">Top Pickup Localities in Pune</h3>
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 15px;">
        <a href="<?php echo SITE_URL; ?>/pages/bike-transportation.php" style="background: #0b132b; padding: 15px; border-radius: 8px; color: #f59e0b; text-decoration: none; border: 1px solid rgba(255,255,255,0.05);">Hadapsar Bike Shipping</a>
        <a href="<?php echo SITE_URL; ?>/pages/bike-transportation.php" style="background: #0b132b; padding: 15px; border-radius: 8px; color: #f59e0b; text-decoration: none; border: 1px solid rgba(255,255,255,0.05);">Hinjewadi Two-Wheeler Shifting</a>
        <a href="<?php echo SITE_URL; ?>/pages/bike-transportation.php" style="background: #0b132b; padding: 15px; border-radius: 8px; color: #f59e0b; text-decoration: none; border: 1px solid rgba(255,255,255,0.05);">Wakad Motorcycle Courier</a>
        <a href="<?php echo SITE_URL; ?>/pages/bike-transportation.php" style="background: #0b132b; padding: 15px; border-radius: 8px; color: #f59e0b; text-decoration: none; border: 1px solid rgba(255,255,255,0.05);">Baner Bike Transport</a>
      </div>
    </div>
  </section>

  <!-- 8. Intercity Route Network Grid -->
  <section style="padding: 50px 0; background: #0b132b; border-top: 1px solid rgba(255,255,255,0.05);">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 15px;">
      <h3 style="font-size: 1.5rem; color: #ffffff; margin-bottom: 20px;">Popular Routes from Pune</h3>
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 15px;">
        <a href="<?php echo SITE_URL; ?>/pages/bike-transport-from-pune-to-jammu.php" style="background: #1c2541; padding: 15px; border-radius: 8px; color: #f59e0b; text-decoration: none; border: 1px solid rgba(255,255,255,0.05);">Pune to Jammu</a>
        <a href="<?php echo SITE_URL; ?>/pages/bike-transport-from-pune-to-indore.php" style="background: #1c2541; padding: 15px; border-radius: 8px; color: #f59e0b; text-decoration: none; border: 1px solid rgba(255,255,255,0.05);">Pune to Indore</a>
        <a href="<?php echo SITE_URL; ?>/pages/bike-transport-from-pune-to-gurgaon.php" style="background: #1c2541; padding: 15px; border-radius: 8px; color: #f59e0b; text-decoration: none; border: 1px solid rgba(255,255,255,0.05);">Pune to Gurgaon</a>
        <a href="<?php echo SITE_URL; ?>/pages/bike-transport-from-pune-to-chandigarh.php" style="background: #1c2541; padding: 15px; border-radius: 8px; color: #f59e0b; text-decoration: none; border: 1px solid rgba(255,255,255,0.05);">Pune to Chandigarh</a>
      </div>
    </div>
  </section>

  <!-- 9. IBA Approved GST Billing Documentation -->
  <section style="padding: 50px 0; background: #1c2541; border-top: 1px solid rgba(255,255,255,0.05);">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 15px;">
      <h3 style="font-size: 1.5rem; color: #ffffff; margin-bottom: 15px; text-align: center;">Official IBA & GST Documentation Provided</h3>
      <p style="text-align: center; color: #94a3b8; margin-bottom: 30px; font-size: 0.9rem;">100% compliant documents for company reimbursement and corporate claim processing.</p>
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(180px, 1fr)); gap: 15px; text-align: center;">
        <div style="background: #0b132b; padding: 15px; border-radius: 8px; border: 1px solid rgba(245,158,11,0.2); color: #fff;">18% GST Invoice</div>
        <div style="background: #0b132b; padding: 15px; border-radius: 8px; border: 1px solid rgba(245,158,11,0.2); color: #fff;">IBA Money Receipt</div>
        <div style="background: #0b132b; padding: 15px; border-radius: 8px; border: 1px solid rgba(245,158,11,0.2); color: #fff;">Consignment Bilty (LR)</div>
        <div style="background: #0b132b; padding: 15px; border-radius: 8px; border: 1px solid rgba(245,158,11,0.2); color: #fff;">Transit Insurance Policy</div>
        <div style="background: #0b132b; padding: 15px; border-radius: 8px; border: 1px solid rgba(245,158,11,0.2); color: #fff;">Item Inspection List</div>
        <div style="background: #0b132b; padding: 15px; border-radius: 8px; border: 1px solid rgba(245,158,11,0.2); color: #fff;">Gate Pass Document</div>
      </div>
    </div>
  </section>

  <!-- 10. Detailed FAQs with JSON-LD Schema -->
  <section style="padding: 60px 0; background: #0b132b; border-top: 1px solid rgba(255,255,255,0.05);">
    <div class="container" style="max-width: 1000px; margin: 0 auto; padding: 0 15px;">
      <h2 style="font-size: 2rem; font-weight: 800; text-align: center; color: #ffffff; margin-bottom: 30px;">
        Frequently Asked Questions — <span style="color: #f59e0b;">Pune to Jammu</span>
      </h2>

      <div style="display: flex; flex-direction: column; gap: 20px;">
        <div style="background: #1c2541; padding: 25px; border-radius: 12px; border: 1px solid rgba(245,158,11,0.2);">
          <h3 style="font-size: 1.1rem; color: #ffffff; margin-bottom: 10px;">What is the cost of bike transport from Pune to Jammu?</h3>
          <p style="font-size: 0.9rem; color: #94a3b8; line-height: 1.6;">Charges range between ₹5,000 and ₹10,000 depending on vehicle engine capacity and packaging selection.</p>
        </div>
        <div style="background: #1c2541; padding: 25px; border-radius: 12px; border: 1px solid rgba(245,158,11,0.2);">
          <h3 style="font-size: 1.1rem; color: #ffffff; margin-bottom: 10px;">How long does transit take between Pune and Jammu?</h3>
          <p style="font-size: 0.9rem; color: #94a3b8; line-height: 1.6;">Delivery usually takes 4 to 5 days via direct container trucks.</p>
        </div>
        <div style="background: #1c2541; padding: 25px; border-radius: 12px; border: 1px solid rgba(245,158,11,0.2);">
          <h3 style="font-size: 1.1rem; color: #ffffff; margin-bottom: 10px;">What documents are required for two-wheeler transport?</h3>
          <p style="font-size: 0.9rem; color: #94a3b8; line-height: 1.6;">A copy of vehicle Registration Certificate (RC), valid insurance document, and government photo ID proof.</p>
        </div>
        <div style="background: #1c2541; padding: 25px; border-radius: 12px; border: 1px solid rgba(245,158,11,0.2);">
          <h3 style="font-size: 1.1rem; color: #ffffff; margin-bottom: 10px;">Is door-to-door pickup provided in Pune?</h3>
          <p style="font-size: 0.9rem; color: #94a3b8; line-height: 1.6;">Yes, we pick up your motorcycle directly from your doorstep anywhere in Pune and deliver it directly to Jammu.</p>
        </div>
        <div style="background: #1c2541; padding: 25px; border-radius: 12px; border: 1px solid rgba(245,158,11,0.2);">
          <h3 style="font-size: 1.1rem; color: #ffffff; margin-bottom: 10px;">Is transit insurance included?</h3>
          <p style="font-size: 0.9rem; color: #94a3b8; line-height: 1.6;">Yes, comprehensive transit insurance is included in every booking to ensure full financial safety.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- 11. Call-To-Action (CTA) Conversion Footer -->
  <section style="padding: 60px 0; background: linear-gradient(135deg, #1c2541 0%, #0b132b 100%); text-align: center; border-top: 1px solid rgba(245, 158, 11, 0.3);">
    <div class="container" style="max-width: 900px; margin: 0 auto; padding: 0 15px;">
      <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin-bottom: 15px;">Book Your Pune to Jammu Bike Transport Today!</h2>
      <p style="font-size: 1.05rem; color: #cbd5e1; margin-bottom: 30px;">Get 100% insured, scratchless motorcycle shifting with transparent pricing and live updates.</p>
      <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap;">
        <a href="tel:<?php echo SITE_PHONE_RAW; ?>" style="padding: 16px 36px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #fff; border-radius: 50px; font-weight: 700; text-decoration: none; font-size: 1.1rem;">Call Now: <?php echo SITE_PHONE; ?></a>
        <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20to%20book%20bike%20transport%20from%20Pune%20to%20Jammu." target="_blank" style="padding: 16px 36px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #fff; border-radius: 50px; font-weight: 700; text-decoration: none; font-size: 1.1rem;">WhatsApp Us</a>
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
      "name": "What is the cost of bike transport from Pune to Jammu?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Charges range between ₹5,000 and ₹10,000 depending on vehicle engine capacity and packaging selection."
      }
    },
    {
      "@type": "Question",
      "name": "How long does transit take between Pune and Jammu?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Delivery usually takes 4 to 5 days via direct container trucks."
      }
    },
    {
      "@type": "Question",
      "name": "What documents are required for two-wheeler transport?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "A copy of vehicle Registration Certificate (RC), valid insurance document, and government photo ID proof."
      }
    },
    {
      "@type": "Question",
      "name": "Is door-to-door pickup provided in Pune?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, we pick up your motorcycle directly from your doorstep anywhere in Pune and deliver it directly to Jammu."
      }
    },
    {
      "@type": "Question",
      "name": "Is transit insurance included?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, comprehensive transit insurance is included in every booking to ensure full financial safety."
      }
    }
  ]
}
</script>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>

