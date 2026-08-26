<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "Bike Transportation in Nipani | Secure Two-Wheeler Shifting Karnataka";
$page_desc = "Professional bike transportation in Nipani, Belagavi district (Karnataka-Maharashtra border). Secure door-to-door two-wheeler relocation along NH-48 with 4-layer packaging and transit insurance.";
$page_keywords = "bike transportation in nipani, best bike transportation in nipani, affordable bike transportation in nipani, packers and movers, packers and movers in ranchi, top bike transportation in nipani company, household shifting bike transportation in nipani, doorstep bike transportation in nipani, verified bike transportation in nipani services, shree ashirwad bike transportation in nipani";
$canonical_url = "https://shreeashirwadpackersandmovers.com/pages/bike-transportation-in-nipani.php";

require_once __DIR__ . '/../includes/header.php';
?>

<main class="site-main dark-theme-override" style="background-color: #0b132b; color: #cbd5e1; font-family: 'Inter', system-ui, -apple-system, sans-serif;">

  <!-- Section 1: Visual Breadcrumb Navigation Bar -->
  <div class="breadcrumb-wrapper" style="background: #1c2541; padding: 14px 0; border-bottom: 1px solid rgba(255,255,255,0.08);">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
      <div class="breadcrumb-list" style="display: flex; align-items: center; gap: 8px; font-size: 0.9rem; color: #94a3b8;">
        <span class="breadcrumb-item"><a href="<?php echo SITE_URL; ?>" title="Home" style="color: #f59e0b; text-decoration: none;">Home</a></span>
        <span class="breadcrumb-separator">/</span>
        <span class="breadcrumb-item"><a href="<?php echo SITE_URL; ?>/pages/bike-transportation.php" title="Bike Transportation" style="color: #f59e0b; text-decoration: none;">Bike Transport</a></span>
        <span class="breadcrumb-separator">/</span>
        <span class="breadcrumb-item active" style="color: #ffffff; font-weight: 600;">Nipani</span>
      </div>
    </div>
  </div>

  <!-- Section 2: Hero Section with Lead Form -->
  <section class="hero-section" style="background: linear-gradient(135deg, #0b132b 0%, #1c2541 100%); padding: 65px 0; color: #ffffff; border-bottom: 1px solid rgba(245, 158, 11, 0.2);">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
      <div class="hero-grid" style="display: grid; grid-template-columns: 1.2fr 0.8fr; gap: 40px; align-items: center;">
        
        <!-- Hero Text Column -->
        <div class="hero-text">
          <span class="section-tag" style="background: rgba(245, 158, 11, 0.15); color: #f59e0b; border: 1px solid rgba(245, 158, 11, 0.4); padding: 6px 16px; border-radius: 20px; font-size: 0.85rem; font-weight: 700; text-transform: uppercase; display: inline-block; margin-bottom: 15px;">
            BIKE TRANSPORTATION NIPANI RELOCATION SPECIALISTS
          </span>
          <h1 style="font-size: 2.6rem; font-weight: 800; line-height: 1.25; margin-bottom: 20px; color: #ffffff;">
            Professional <span style="color: #f59e0b;">Bike Transportation in Nipani</span>
          </h1>
          <p style="font-size: 1.1rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 25px;">
            Shree Ashirwad Packers and Movers delivers premium motorcycle logistics across Nipani, Chikodi, Sankeshwar, Belagavi, and Kolhapur border regions along NH-48. Featuring 4-layer shockproof packaging, covered container trucks, and 100% transit insurance.
          </p>

          <div style="display: flex; gap: 15px; flex-wrap: wrap; margin-bottom: 30px;">
            <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Now" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
              <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call Now: <?php echo SITE_PHONE; ?>
            </a>
            <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20a%20bike%20transportation%20quote%20for%20Nipani." title="Chat on WhatsApp" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
              <i class="fab fa-whatsapp" style="margin-right: 8px;"></i> Chat on WhatsApp
            </a>
          </div>

          <div style="display: flex; gap: 20px; font-size: 0.9rem; color: #94a3b8; flex-wrap: wrap;">
            <span><strong style="color: #f59e0b;">✓ 100% Insured</strong> Shifting</span>
            <span><strong style="color: #f59e0b;">✓ NH-48 Express</strong> Logistics</span>
            <span><strong style="color: #f59e0b;">✓ Door-to-Door</strong> Pick & Drop</span>
          </div>
        </div>

        <!-- Hero Lead Form Column -->
        <div class="hero-form-card" style="background: rgba(255, 255, 255, 0.05); backdrop-filter: blur(10px); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 16px; padding: 30px; box-shadow: 0 15px 35px rgba(0,0,0,0.4);">
          <h2 style="font-size: 1.4rem; color: #ffffff; margin-bottom: 8px; font-weight: 700; text-align: center;">Get Nipani Bike Shifting Quote</h2>
          <p style="font-size: 0.85rem; color: #94a3b8; text-align: center; margin-bottom: 20px;">Receive transparent cost estimation on WhatsApp in 2 minutes</p>

          <form action="#" method="POST" onsubmit="sendHeroWhatsAppLead(event, this);">
            <div style="margin-bottom: 14px;">
              <input type="text" name="name" class="form-control" placeholder="Your Full Name" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="margin-bottom: 14px;">
              <input type="tel" name="phone" class="form-control" placeholder="10-Digit Phone Number" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 10px; margin-bottom: 14px;">
              <input type="text" name="move_from" class="form-control" value="Nipani" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
              <input type="text" name="move_to" class="form-control" placeholder="Moving To (City/Area)" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="margin-bottom: 14px;">
              <input type="text" name="bike_model" class="form-control" placeholder="Bike Model (e.g. Royal Enfield, KTM, Pulsar, Activa, Duke)" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <button type="submit" style="width: 100%; padding: 14px; background: linear-gradient(135deg, #d32f2f 0%, #f59e0b 100%); color: #ffffff; border: none; border-radius: 50px; font-weight: 700; font-size: 1rem; cursor: pointer; box-shadow: 0 4px 15px rgba(245, 158, 11, 0.3);">
              Get Instant Estimate Now &rarr;
            </button>
          </form>
        </div>

      </div>
    </div>
  </section>

  <!-- Section 3: Track Record & Key Statistics -->
  <section style="padding: 45px 0; background: #1c2541; border-bottom: 1px solid rgba(255,255,255,0.05);">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
      <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 20px; text-align: center;">
        <div style="padding: 20px; background: rgba(255,255,255,0.03); border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.15);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; margin-bottom: 5px;">9,100+</div>
          <div style="font-size: 0.9rem; color: #94a3b8;">Bikes Transported</div>
        </div>
        <div style="padding: 20px; background: rgba(255,255,255,0.03); border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.15);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; margin-bottom: 5px;">99.8%</div>
          <div style="font-size: 0.9rem; color: #94a3b8;">Damage-Free Ratio</div>
        </div>
        <div style="padding: 20px; background: rgba(255,255,255,0.03); border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.15);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; margin-bottom: 5px;">100%</div>
          <div style="font-size: 0.9rem; color: #94a3b8;">Transit Insurance</div>
        </div>
        <div style="padding: 20px; background: rgba(255,255,255,0.03); border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.15);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; margin-bottom: 5px;">4.9 ★</div>
          <div style="font-size: 0.9rem; color: #94a3b8;">Customer Rating</div>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 4: Core Transport Features Grid -->
  <section style="padding: 60px 0; background: #0b132b;">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
      <div style="text-align: center; margin-bottom: 45px;">
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin-bottom: 12px;">Why Choose Our Nipani Bike Transport?</h2>
        <p style="color: #94a3b8; font-size: 1rem; max-width: 650px; margin: 0 auto;">Strategic location on NH-48 provides rapid connections across Karnataka, Maharashtra, and Goa.</p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 25px;">
        <div style="background: #1c2541; padding: 25px; border-radius: 14px; border: 1px solid rgba(255,255,255,0.06);">
          <div style="width: 50px; height: 50px; background: rgba(245, 158, 11, 0.15); border-radius: 10px; display: flex; align-items: center; justify-content: center; color: #f59e0b; font-size: 1.4rem; margin-bottom: 18px;">
            <i class="fas fa-box-open"></i>
          </div>
          <h3 style="font-size: 1.2rem; font-weight: 700; color: #fff; margin-bottom: 10px;">4-Layer Shockproof Packaging</h3>
          <p style="font-size: 0.9rem; color: #94a3b8; line-height: 1.6;">Bubble wrap, foam padding, corrugated cardboard sheets, and stretch film protecting against highway debris.</p>
        </div>

        <div style="background: #1c2541; padding: 25px; border-radius: 14px; border: 1px solid rgba(255,255,255,0.06);">
          <div style="width: 50px; height: 50px; background: rgba(245, 158, 11, 0.15); border-radius: 10px; display: flex; align-items: center; justify-content: center; color: #f59e0b; font-size: 1.4rem; margin-bottom: 18px;">
            <i class="fas fa-road"></i>
          </div>
          <h3 style="font-size: 1.2rem; font-weight: 700; color: #fff; margin-bottom: 10px;">NH-48 Express Freight Hub</h3>
          <p style="font-size: 0.9rem; color: #94a3b8; line-height: 1.6;">Direct access to main Pune-Bengaluru national highway ensures zero transit delays.</p>
        </div>

        <div style="background: #1c2541; padding: 25px; border-radius: 14px; border: 1px solid rgba(255,255,255,0.06);">
          <div style="width: 50px; height: 50px; background: rgba(245, 158, 11, 0.15); border-radius: 10px; display: flex; align-items: center; justify-content: center; color: #f59e0b; font-size: 1.4rem; margin-bottom: 18px;">
            <i class="fas fa-shield-alt"></i>
          </div>
          <h3 style="font-size: 1.2rem; font-weight: 700; color: #fff; margin-bottom: 10px;">Full Transit Insurance</h3>
          <p style="font-size: 0.9rem; color: #94a3b8; line-height: 1.6;">Comprehensive financial policy protection covering against accident or damage during interstate transit.</p>
        </div>

        <div style="background: #1c2541; padding: 25px; border-radius: 14px; border: 1px solid rgba(255,255,255,0.06);">
          <div style="width: 50px; height: 50px; background: rgba(245, 158, 11, 0.15); border-radius: 10px; display: flex; align-items: center; justify-content: center; color: #f59e0b; font-size: 1.4rem; margin-bottom: 18px;">
            <i class="fas fa-map-marked-alt"></i>
          </div>
          <h3 style="font-size: 1.2rem; font-weight: 700; color: #fff; margin-bottom: 10px;">GPS Tracking & Support</h3>
          <p style="font-size: 0.9rem; color: #94a3b8; line-height: 1.6;">Real-time tracking updates via WhatsApp and dedicated move coordinator assigned to your vehicle.</p>
        </div>

        <div style="background: #1c2541; padding: 25px; border-radius: 14px; border: 1px solid rgba(255,255,255,0.06);">
          <div style="width: 50px; height: 50px; background: rgba(245, 158, 11, 0.15); border-radius: 10px; display: flex; align-items: center; justify-content: center; color: #f59e0b; font-size: 1.4rem; margin-bottom: 18px;">
            <i class="fas fa-home"></i>
          </div>
          <h3 style="font-size: 1.2rem; font-weight: 700; color: #fff; margin-bottom: 10px;">Doorstep Pick & Drop</h3>
          <p style="font-size: 0.9rem; color: #94a3b8; line-height: 1.6;">Door-to-door pickup across Nipani Town, Chikodi, Sankeshwar, Belagavi, and Kolhapur border towns.</p>
        </div>

        <div style="background: #1c2541; padding: 25px; border-radius: 14px; border: 1px solid rgba(255,255,255,0.06);">
          <div style="width: 50px; height: 50px; background: rgba(245, 158, 11, 0.15); border-radius: 10px; display: flex; align-items: center; justify-content: center; color: #f59e0b; font-size: 1.4rem; margin-bottom: 18px;">
            <i class="fas fa-file-invoice-dollar"></i>
          </div>
          <h3 style="font-size: 1.2rem; font-weight: 700; color: #fff; margin-bottom: 10px;">Transparent Pricing</h3>
          <p style="font-size: 0.9rem; color: #94a3b8; line-height: 1.6;">Clear itemized pricing structure with zero hidden fees. Official GST bills and LR receipts provided.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 5: 4-Layer Packaging Protocol -->
  <section style="padding: 60px 0; background: #1c2541; border-top: 1px solid rgba(255,255,255,0.05);">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
      <div style="text-align: center; margin-bottom: 45px;">
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin-bottom: 12px;">4-Layer Highway Packaging Standard</h2>
        <p style="color: #94a3b8; font-size: 1rem; max-width: 650px; margin: 0 auto;">Standardized multi-tier protection ensuring scratch-free, damage-proof delivery across India.</p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 20px;">
        <div style="background: #0b132b; padding: 22px; border-radius: 12px; border-top: 4px solid #f59e0b;">
          <div style="font-size: 0.85rem; font-weight: 700; color: #f59e0b; text-transform: uppercase; margin-bottom: 8px;">Layer 1</div>
          <h3 style="font-size: 1.1rem; color: #fff; font-weight: 700; margin-bottom: 10px;">Bubble Wrap Cushioning</h3>
          <p style="font-size: 0.85rem; color: #94a3b8; line-height: 1.6;">High-density air bubble wrap wrapped around fuel tank, mirrors, headlights, and body panels.</p>
        </div>

        <div style="background: #0b132b; padding: 22px; border-radius: 12px; border-top: 4px solid #f59e0b;">
          <div style="font-size: 0.85rem; font-weight: 700; color: #f59e0b; text-transform: uppercase; margin-bottom: 8px;">Layer 2</div>
          <h3 style="font-size: 1.1rem; color: #fff; font-weight: 700; margin-bottom: 10px;">Foam Sheet Padding</h3>
          <p style="font-size: 0.85rem; color: #94a3b8; line-height: 1.6;">Thick foam sheets padding silencer, handle bars, indicators, and side guards.</p>
        </div>

        <div style="background: #0b132b; padding: 22px; border-radius: 12px; border-top: 4px solid #f59e0b;">
          <div style="font-size: 0.85rem; font-weight: 700; color: #f59e0b; text-transform: uppercase; margin-bottom: 8px;">Layer 3</div>
          <h3 style="font-size: 1.1rem; color: #fff; font-weight: 700; margin-bottom: 10px;">Corrugated Sheets</h3>
          <p style="font-size: 0.85rem; color: #94a3b8; line-height: 1.6;">Heavy-duty corrugated cardboard sheets molded over the body structure for impact defense.</p>
        </div>

        <div style="background: #0b132b; padding: 22px; border-radius: 12px; border-top: 4px solid #f59e0b;">
          <div style="font-size: 0.85rem; font-weight: 700; color: #f59e0b; text-transform: uppercase; margin-bottom: 8px;">Layer 4</div>
          <h3 style="font-size: 1.1rem; color: #fff; font-weight: 700; margin-bottom: 10px;">Dustproof Film Sealing</h3>
          <p style="font-size: 0.85rem; color: #94a3b8; line-height: 1.6;">Heavy stretch film lamination shielding against highway dust, rain, and grit during transit.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 6: Transparent Pricing Matrix -->
  <section style="padding: 60px 0; background: #0b132b;">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
      <div style="text-align: center; margin-bottom: 45px;">
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin-bottom: 12px;">Nipani Bike Transport Tariff Matrix</h2>
        <p style="color: #94a3b8; font-size: 1rem; max-width: 650px; margin: 0 auto;">Estimated rates based on distance and bike segment. Contact us for precise customized quotes.</p>
      </div>

      <div style="overflow-x: auto;">
        <table style="width: 100%; border-collapse: collapse; background: #1c2541; border-radius: 12px; overflow: hidden; border: 1px solid rgba(255,255,255,0.08);">
          <thead>
            <tr style="background: rgba(245, 158, 11, 0.15); color: #f59e0b; text-align: left;">
              <th style="padding: 16px 20px; font-size: 0.95rem;">Destination Region</th>
              <th style="padding: 16px 20px; font-size: 0.95rem;">Standard Scooters / Bikes (100-150cc)</th>
              <th style="padding: 16px 20px; font-size: 0.95rem;">Sports / Cruiser Bikes (180-350cc)</th>
              <th style="padding: 16px 20px; font-size: 0.95rem;">Premium / Superbikes (350cc+)</th>
            </tr>
          </thead>
          <tbody style="color: #cbd5e1; font-size: 0.9rem;">
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.05);">
              <td style="padding: 16px 20px; font-weight: 600; color: #fff;">Regional Move (Kolhapur, Belagavi, Hubballi - Up to 200 km)</td>
              <td style="padding: 16px 20px;">₹1,800 - ₹3,000</td>
              <td style="padding: 16px 20px;">₹2,500 - ₹3,800</td>
              <td style="padding: 16px 20px;">₹3,800 - ₹5,200</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.05);">
              <td style="padding: 16px 20px; font-weight: 600; color: #fff;">Interstate 300 km - 600 km (Pune, Goa, Mumbai, Solapur)</td>
              <td style="padding: 16px 20px;">₹3,200 - ₹4,800</td>
              <td style="padding: 16px 20px;">₹4,200 - ₹5,800</td>
              <td style="padding: 16px 20px;">₹5,800 - ₹7,800</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.05);">
              <td style="padding: 16px 20px; font-weight: 600; color: #fff;">Interstate 600 km - 1,200 km (Bangalore, Mangalore, Hyderabad)</td>
              <td style="padding: 16px 20px;">₹4,500 - ₹6,500</td>
              <td style="padding: 16px 20px;">₹5,500 - ₹7,800</td>
              <td style="padding: 16px 20px;">₹7,800 - ₹10,500</td>
            </tr>
            <tr>
              <td style="padding: 16px 20px; font-weight: 600; color: #fff;">1,200 km+ (Delhi NCR, Ahmedabad, Jaipur, Kolkata)</td>
              <td style="padding: 16px 20px;">₹6,200 - ₹8,800</td>
              <td style="padding: 16px 20px;">₹7,800 - ₹11,200</td>
              <td style="padding: 16px 20px;">₹11,200 - ₹15,500</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </section>

  <!-- Section 7: Step-by-Step Relocation Workflow -->
  <section style="padding: 60px 0; background: #1c2541;">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
      <div style="text-align: center; margin-bottom: 45px;">
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin-bottom: 12px;">5-Step Systematic Bike Relocation Process</h2>
        <p style="color: #94a3b8; font-size: 1rem; max-width: 650px; margin: 0 auto;">Streamlined workflow from booking to final doorstep delivery in Nipani.</p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(5, 1fr); gap: 15px;">
        <div style="background: #0b132b; padding: 20px; border-radius: 12px; text-align: center;">
          <div style="width: 40px; height: 40px; background: #f59e0b; color: #000; border-radius: 50%; font-weight: 800; display: flex; align-items: center; justify-content: center; margin: 0 auto 12px;">1</div>
          <h3 style="font-size: 1rem; color: #fff; font-weight: 700; margin-bottom: 8px;">Pre-Inspection</h3>
          <p style="font-size: 0.8rem; color: #94a3b8;">Vehicle inspection & physical condition log entry.</p>
        </div>

        <div style="background: #0b132b; padding: 20px; border-radius: 12px; text-align: center;">
          <div style="width: 40px; height: 40px; background: #f59e0b; color: #000; border-radius: 50%; font-weight: 800; display: flex; align-items: center; justify-content: center; margin: 0 auto 12px;">2</div>
          <h3 style="font-size: 1rem; color: #fff; font-weight: 700; margin-bottom: 8px;">4-Layer Packing</h3>
          <p style="font-size: 0.8rem; color: #94a3b8;">Multi-tier bubble, foam, and card wrapping.</p>
        </div>

        <div style="background: #0b132b; padding: 20px; border-radius: 12px; text-align: center;">
          <div style="width: 40px; height: 40px; background: #f59e0b; color: #000; border-radius: 50%; font-weight: 800; display: flex; align-items: center; justify-content: center; margin: 0 auto 12px;">3</div>
          <h3 style="font-size: 1rem; color: #fff; font-weight: 700; margin-bottom: 8px;">Container Loading</h3>
          <p style="font-size: 0.8rem; color: #94a3b8;">Secured with heavy-duty belt tie-downs inside truck.</p>
        </div>

        <div style="background: #0b132b; padding: 20px; border-radius: 12px; text-align: center;">
          <div style="width: 40px; height: 40px; background: #f59e0b; color: #000; border-radius: 50%; font-weight: 800; display: flex; align-items: center; justify-content: center; margin: 0 auto 12px;">4</div>
          <h3 style="font-size: 1rem; color: #fff; font-weight: 700; margin-bottom: 8px;">NH-48 Transit</h3>
          <p style="font-size: 0.8rem; color: #94a3b8;">Highway haulage with real-time GPS tracking.</p>
        </div>

        <div style="background: #0b132b; padding: 20px; border-radius: 12px; text-align: center;">
          <div style="width: 40px; height: 40px; background: #f59e0b; color: #000; border-radius: 50%; font-weight: 800; display: flex; align-items: center; justify-content: center; margin: 0 auto 12px;">5</div>
          <h3 style="font-size: 1rem; color: #fff; font-weight: 700; margin-bottom: 8px;">Door Unpacking</h3>
          <p style="font-size: 0.8rem; color: #94a3b8;">Final handover & joint inspection sign-off.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 8: Major Routes from Nipani -->
  <section style="padding: 60px 0; background: #0b132b;">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
      <div style="text-align: center; margin-bottom: 45px;">
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin-bottom: 12px;">Frequent Bike Transport Routes from Nipani</h2>
        <p style="color: #94a3b8; font-size: 1rem; max-width: 650px; margin: 0 auto;">Regular daily schedules connects Nipani to major cities across Karnataka, Maharashtra, and Goa.</p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px;">
        <div style="background: #1c2541; padding: 20px; border-radius: 10px; display: flex; justify-content: space-between; align-items: center;">
          <div>
            <div style="font-weight: 700; color: #fff;">Nipani → Pune / Kolhapur</div>
            <div style="font-size: 0.8rem; color: #94a3b8;">Transit: 6-12 Hours</div>
          </div>
          <span style="color: #f59e0b; font-weight: 700; font-size: 0.9rem;">Daily Service</span>
        </div>

        <div style="background: #1c2541; padding: 20px; border-radius: 10px; display: flex; justify-content: space-between; align-items: center;">
          <div>
            <div style="font-weight: 700; color: #fff;">Nipani → Belagavi / Hubballi</div>
            <div style="font-size: 0.8rem; color: #94a3b8;">Transit: 4-8 Hours</div>
          </div>
          <span style="color: #f59e0b; font-weight: 700; font-size: 0.9rem;">Daily Service</span>
        </div>

        <div style="background: #1c2541; padding: 20px; border-radius: 10px; display: flex; justify-content: space-between; align-items: center;">
          <div>
            <div style="font-weight: 700; color: #fff;">Nipani → Goa (Panaji / Margao)</div>
            <div style="font-size: 0.8rem; color: #94a3b8;">Transit: 8-12 Hours</div>
          </div>
          <span style="color: #f59e0b; font-weight: 700; font-size: 0.9rem;">Daily Express</span>
        </div>

        <div style="background: #1c2541; padding: 20px; border-radius: 10px; display: flex; justify-content: space-between; align-items: center;">
          <div>
            <div style="font-weight: 700; color: #fff;">Nipani → Mumbai / Thane</div>
            <div style="font-size: 0.8rem; color: #94a3b8;">Transit: 14-18 Hours</div>
          </div>
          <span style="color: #f59e0b; font-weight: 700; font-size: 0.9rem;">Express Route</span>
        </div>

        <div style="background: #1c2541; padding: 20px; border-radius: 10px; display: flex; justify-content: space-between; align-items: center;">
          <div>
            <div style="font-weight: 700; color: #fff;">Nipani → Bengaluru / Mysore</div>
            <div style="font-size: 0.8rem; color: #94a3b8;">Transit: 18-24 Hours</div>
          </div>
          <span style="color: #f59e0b; font-weight: 700; font-size: 0.9rem;">Express Route</span>
        </div>

        <div style="background: #1c2541; padding: 20px; border-radius: 10px; display: flex; justify-content: space-between; align-items: center;">
          <div>
            <div style="font-weight: 700; color: #fff;">Nipani → Hyderabad / Delhi NCR</div>
            <div style="font-size: 0.8rem; color: #94a3b8;">Transit: 2-4 Days</div>
          </div>
          <span style="color: #f59e0b; font-weight: 700; font-size: 0.9rem;">Interstate Freight</span>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 9: Locality Coverage in Nipani -->
  <section style="padding: 50px 0; background: #1c2541;">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
      <div style="text-align: center; margin-bottom: 30px;">
        <h2 style="font-size: 1.8rem; font-weight: 800; color: #ffffff;">Sub-Locality Pickup Network Across Nipani & Belagavi Border</h2>
        <p style="color: #94a3b8; font-size: 0.95rem;">Doorstep pickup and delivery available across all key locations in Nipani Taluk</p>
      </div>

      <div style="display: flex; flex-wrap: wrap; gap: 12px; justify-content: center;">
        <span style="background: #0b132b; color: #cbd5e1; padding: 8px 18px; border-radius: 20px; font-size: 0.85rem; border: 1px solid rgba(255,255,255,0.08);">Nipani Town</span>
        <span style="background: #0b132b; color: #cbd5e1; padding: 8px 18px; border-radius: 20px; font-size: 0.85rem; border: 1px solid rgba(255,255,255,0.08);">Chikodi</span>
        <span style="background: #0b132b; color: #cbd5e1; padding: 8px 18px; border-radius: 20px; font-size: 0.85rem; border: 1px solid rgba(255,255,255,0.08);">Sankeshwar</span>
        <span style="background: #0b132b; color: #cbd5e1; padding: 8px 18px; border-radius: 20px; font-size: 0.85rem; border: 1px solid rgba(255,255,255,0.08);">Yamkanmardi</span>
        <span style="background: #0b132b; color: #cbd5e1; padding: 8px 18px; border-radius: 20px; font-size: 0.85rem; border: 1px solid rgba(255,255,255,0.08);">Tavandi</span>
        <span style="background: #0b132b; color: #cbd5e1; padding: 8px 18px; border-radius: 20px; font-size: 0.85rem; border: 1px solid rgba(255,255,255,0.08);">Shirguppi</span>
        <span style="background: #0b132b; color: #cbd5e1; padding: 8px 18px; border-radius: 20px; font-size: 0.85rem; border: 1px solid rgba(255,255,255,0.08);">Kagal Border</span>
      </div>
    </div>
  </section>

  <!-- Section 10: 10-Item Dynamic FAQ & Schema -->
  <?php
  $faq_list = [
    [
      "q" => "What documents are required to send a bike from Nipani?",
      "a" => "You need to provide a copy of your bike Registration Certificate (RC), active vehicle insurance policy, Pollution Certificate (PUC), and photo ID proof."
    ],
    [
      "q" => "How much does bike transportation from Nipani to Pune or Bengaluru cost?",
      "a" => "Nipani to Pune starts at ₹3,200 to ₹4,800. Shipping to Bengaluru or Mumbai ranges between ₹4,500 and ₹7,800 depending on bike weight and engine capacity."
    ],
    [
      "q" => "Do you offer doorstep bike pickup in Nipani and Chikodi?",
      "a" => "Yes, we provide doorstep pickup and delivery across all parts of Nipani town, Chikodi, Sankeshwar, and surrounding NH-48 border areas."
    ],
    [
      "q" => "How is the motorcycle packaged for long highway journeys?",
      "a" => "We use 4-layer packaging: heavy air bubble wrap, foam padding on delicate parts, thick corrugated cardboard sheets, and stretch film sealing."
    ],
    [
      "q" => "Is insurance included for two-wheeler transport from Nipani?",
      "a" => "Yes, comprehensive transit insurance is provided to safeguard against accident or unexpected damages during highway haulage."
    ],
    [
      "q" => "How much petrol should remain in the fuel tank?",
      "a" => "Fuel must be reduced to under 1 liter to comply with national highway transport safety standards inside enclosed container trucks."
    ],
    [
      "q" => "How fast can my bike reach Pune or Kolhapur from Nipani?",
      "a" => "Given Nipani's direct access to NH-48, transit to Kolhapur or Pune takes just 6 to 12 hours from pickup."
    ],
    [
      "q" => "Can I track my bike transport live on WhatsApp?",
      "a" => "Yes, our team provides real-time location updates via WhatsApp throughout the transit."
    ],
    [
      "q" => "Do you transport sports bikes and premium motorcycles from Nipani?",
      "a" => "Yes, we transport Royal Enfield, KTM, Duke, BMW, and sports bikes using specialized wooden base pallets and wheel harness locks."
    ],
    [
      "q" => "How do I book bike transport in Nipani?",
      "a" => "Submit the lead form on this page or call our team at " . SITE_PHONE . " for an instant free quotation."
    ]
  ];
  ?>

  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "mainEntity": [
      <?php 
      $schema_entities = [];
      foreach ($faq_list as $item) {
        $schema_entities[] = '{
          "@type": "Question",
          "name": ' . json_encode($item["q"]) . ',
          "acceptedAnswer": {
            "@type": "Answer",
            "text": ' . json_encode($item["a"]) . '
          }
        }';
      }
      echo implode(",", $schema_entities);
      ?>
    ]
  }
  </script>

  <section style="padding: 60px 0; background: #0b132b;">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
      <div style="text-align: center; margin-bottom: 45px;">
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin-bottom: 12px;">Frequently Asked Questions (FAQ)</h2>
        <p style="color: #94a3b8; font-size: 1rem; max-width: 650px; margin: 0 auto;">Everything you need to know about two-wheeler shifting services in Nipani.</p>
      </div>

      <div style="max-width: 850px; margin: 0 auto; display: grid; gap: 15px;">
        <?php foreach ($faq_list as $index => $faq): ?>
          <details style="background: #1c2541; padding: 18px 24px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.06); cursor: pointer;">
            <summary style="font-size: 1.05rem; font-weight: 700; color: #ffffff; list-style: none; display: flex; justify-content: space-between; align-items: center;">
              <span><?php echo ($index + 1) . ". " . htmlspecialchars($faq["q"]); ?></span>
              <span style="color: #f59e0b; font-size: 1.2rem;">+</span>
            </summary>
            <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.7; margin-top: 12px; padding-top: 12px; border-top: 1px solid rgba(255,255,255,0.05);">
              <?php echo htmlspecialchars($faq["a"]); ?>
            </p>
          </details>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- Section 11: Call-to-Action Footer Banner -->
  <section style="padding: 60px 0; background: linear-gradient(135deg, #1c2541 0%, #0b132b 100%); text-align: center; border-top: 1px solid rgba(245, 158, 11, 0.2);">
    <div class="container" style="max-width: 900px; margin: 0 auto; padding: 0 20px;">
      <h2 style="font-size: 2.4rem; font-weight: 800; color: #ffffff; margin-bottom: 15px;">Ready to Transport Your Bike from Nipani?</h2>
      <p style="font-size: 1.1rem; color: #cbd5e1; margin-bottom: 30px; line-height: 1.7;">Get a transparent quote in 2 minutes with guaranteed damage-free delivery and zero hassle.</p>
      
      <div style="display: flex; gap: 15px; justify-content: center; flex-wrap: wrap;">
        <a href="tel:<?php echo SITE_PHONE_RAW; ?>" style="padding: 15px 32px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1.05rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
          <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call <?php echo SITE_PHONE; ?>
        </a>
        <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20need%20a%20bike%20transportation%20quote%20for%20Nipani." target="_blank" style="padding: 15px 32px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1.05rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
          <i class="fab fa-whatsapp" style="margin-right: 8px;"></i> Instant WhatsApp Estimate
        </a>
      </div>
    </div>
  </section>

</main>

<script>
function sendHeroWhatsAppLead(event, form) {
  event.preventDefault();
  var name = form.name.value;
  var phone = form.phone.value;
  var move_from = form.move_from.value;
  var move_to = form.move_to.value;
  var bike_model = form.bike_model ? form.bike_model.value : '';
  
  var text = "Hello Shree Ashirwad Packers, I want a bike transport quote:\n" +
             "• Name: " + name + "\n" +
             "• Phone: " + phone + "\n" +
             "• Moving From: " + move_from + "\n" +
             "• Moving To: " + move_to + "\n" +
             "• Bike Model: " + bike_model;
             
  window.open("https://wa.me/918409531615?text=" + encodeURIComponent(text), "_blank");
}
</script>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>

