<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "Bike Transportation in Nichlaul Maharajganj | Safe Motorcycle Shipping";
$page_desc = "Professional bike transportation in Nichlaul, Maharajganj (Uttar Pradesh). Secure door-to-door two-wheeler relocation with 7-layer bubble packing, insurance & GPS tracking.";
$page_keywords = "bike transportation in nichlaul maharajganj, bike parcel nichlaul, motorcycle transport nichlaul up, IBA approved bike transport maharajganj";
$canonical_url = "https://shreeashirwadpackersandmovers.com/pages/bike-transportation-in-nichlaul-maharajganj.php";

$page_city = "Nichlaul, Maharajganj, Uttar Pradesh";

require_once __DIR__ . '/../includes/header.php';
?>

<main class="site-main dark-theme-override" style="background-color: #0b132b; color: #cbd5e1; font-family: 'Inter', system-ui, -apple-system, sans-serif;">

  <!-- Section 1: Visual Breadcrumb Navigation Bar -->
  <div class="breadcrumb-wrapper" style="background: #1c2541; padding: 14px 0; border-bottom: 1px solid rgba(255,255,255,0.08);">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
      <div class="breadcrumb-list" style="display: flex; align-items: center; gap: 8px; font-size: 0.9rem; color: #94a3b8;">
        <span class="breadcrumb-item"><a href="<?php echo SITE_URL; ?>" title="Home" style="color: #f59e0b; text-decoration: none;">Home</a></span>
        <span class="breadcrumb-separator">/</span>
        <span class="breadcrumb-item"><a href="<?php echo SITE_URL; ?>packers-and-movers-in-gorakhpur" title="Gorakhpur Region" style="color: #f59e0b; text-decoration: none;">Gorakhpur Region</a></span>
        <span class="breadcrumb-separator">/</span>
        <span class="breadcrumb-item active" style="color: #ffffff; font-weight: 600;">Nichlaul Maharajganj</span>
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
            BIKE TRANSPORTATION NICHLAUL (MAHARAJGANJ)
          </span>
          <h1 style="font-size: 2.6rem; font-weight: 800; line-height: 1.25; margin-bottom: 20px; color: #ffffff;">
            Professional <span style="color: #f59e0b;">Bike Transportation in Nichlaul Maharajganj</span>
          </h1>
          <p style="font-size: 1.1rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 25px;">
            Shree Ashirwad Packers and Movers provides safe, scratch-proof motorcycle shipping across Nichlaul, Maharajganj, and Eastern UP. Featuring 7-layer bubble padding, enclosed container trucks, doorstep pickup, and 100% transit insurance.
          </p>

          <div style="display: flex; gap: 15px; flex-wrap: wrap; margin-bottom: 30px;">
            <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Now" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
              <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call Now: <?php echo SITE_PHONE; ?>
            </a>
            <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20a%20bike%20transportation%20quote%20for%20Nichlaul%20Maharajganj." title="Chat on WhatsApp" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
              <i class="fab fa-whatsapp" style="margin-right: 8px;"></i> Chat on WhatsApp
            </a>
          </div>

          <div style="display: flex; gap: 20px; font-size: 0.9rem; color: #94a3b8; flex-wrap: wrap;">
            <span><strong style="color: #f59e0b;">✓ 210+</strong> Two-Wheelers Moved</span>
            <span><strong style="color: #f59e0b;">✓ 7-Layer</strong> Bubble Wrapping</span>
            <span><strong style="color: #f59e0b;">✓ Doorstep</strong> Pickup & Drop</span>
          </div>
        </div>

        <!-- Hero Lead Form Column -->
        <div class="hero-form-card" style="background: rgba(255, 255, 255, 0.05); backdrop-filter: blur(10px); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 16px; padding: 30px; box-shadow: 0 15px 35px rgba(0,0,0,0.4);">
          <h2 style="font-size: 1.4rem; color: #ffffff; margin-bottom: 8px; font-weight: 700; text-align: center;">Get Nichlaul Bike Shifting Quote</h2>
          <p style="font-size: 0.85rem; color: #94a3b8; text-align: center; margin-bottom: 20px;">Receive transparent cost estimation on WhatsApp in 2 minutes</p>

          <form action="#" method="POST" onsubmit="sendHeroWhatsAppLead(event, this);">
            <div style="margin-bottom: 14px;">
              <input type="text" name="name" class="form-control" placeholder="Your Full Name" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="margin-bottom: 14px;">
              <input type="tel" name="phone" class="form-control" placeholder="10-Digit Phone Number" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 10px; margin-bottom: 14px;">
              <input type="text" name="move_from" class="form-control" value="Nichlaul, Maharajganj" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
              <input type="text" name="move_to" class="form-control" placeholder="Moving To (City/Area)" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="margin-bottom: 14px;">
              <input type="text" name="bike_model" class="form-control" placeholder="Bike Model (e.g. Royal Enfield, Hero Splendor, Pulsar, Activa)" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
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
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; margin-bottom: 5px;">210+</div>
          <div style="font-size: 0.9rem; color: #94a3b8;">Bikes Moved from Nichlaul</div>
        </div>
        <div style="padding: 20px; background: rgba(255,255,255,0.03); border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.15);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; margin-bottom: 5px;">99.9%</div>
          <div style="font-size: 0.9rem; color: #94a3b8;">Scratch-Free Ratio</div>
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
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin-bottom: 12px;">Why Choose Our Nichlaul Bike Transport?</h2>
        <p style="color: #94a3b8; font-size: 1rem; max-width: 650px; margin: 0 auto;">Tailored for safe highway haulage across Maharajganj district and all major national corridors.</p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 25px;">
        <div style="background: #1c2541; padding: 25px; border-radius: 14px; border: 1px solid rgba(255,255,255,0.06);">
          <div style="width: 50px; height: 50px; background: rgba(245, 158, 11, 0.15); border-radius: 10px; display: flex; align-items: center; justify-content: center; color: #f59e0b; font-size: 1.4rem; margin-bottom: 18px;">
            <i class="fas fa-motorcycle"></i>
          </div>
          <h3 style="font-size: 1.2rem; font-weight: 700; color: #fff; margin-bottom: 10px;">7-Layer Bubble Protection</h3>
          <p style="font-size: 0.9rem; color: #94a3b8; line-height: 1.6;">High-density 80-GSM bubble wrap, foam sheets, and corrugated cardboard shield fuel tank and bodywork.</p>
        </div>

        <div style="background: #1c2541; padding: 25px; border-radius: 14px; border: 1px solid rgba(255,255,255,0.06);">
          <div style="width: 50px; height: 50px; background: rgba(245, 158, 11, 0.15); border-radius: 10px; display: flex; align-items: center; justify-content: center; color: #f59e0b; font-size: 1.4rem; margin-bottom: 18px;">
            <i class="fas fa-truck-loading"></i>
          </div>
          <h3 style="font-size: 1.2rem; font-weight: 700; color: #fff; margin-bottom: 10px;">Enclosed Container Trucks</h3>
          <p style="font-size: 0.9rem; color: #94a3b8; line-height: 1.6;">Weatherproof container carriers equipped with heavy-duty belt harness keep your bike safe during transit.</p>
        </div>

        <div style="background: #1c2541; padding: 25px; border-radius: 14px; border: 1px solid rgba(255,255,255,0.06);">
          <div style="width: 50px; height: 50px; background: rgba(245, 158, 11, 0.15); border-radius: 10px; display: flex; align-items: center; justify-content: center; color: #f59e0b; font-size: 1.4rem; margin-bottom: 18px;">
            <i class="fas fa-shield-alt"></i>
          </div>
          <h3 style="font-size: 1.2rem; font-weight: 700; color: #fff; margin-bottom: 10px;">Full Transit Insurance</h3>
          <p style="font-size: 0.9rem; color: #94a3b8; line-height: 1.6;">Comprehensive financial policy coverage protecting against accident or damage during interstate transit.</p>
        </div>

        <div style="background: #1c2541; padding: 25px; border-radius: 14px; border: 1px solid rgba(255,255,255,0.06);">
          <div style="width: 50px; height: 50px; background: rgba(245, 158, 11, 0.15); border-radius: 10px; display: flex; align-items: center; justify-content: center; color: #f59e0b; font-size: 1.4rem; margin-bottom: 18px;">
            <i class="fas fa-map-marked-alt"></i>
          </div>
          <h3 style="font-size: 1.2rem; font-weight: 700; color: #fff; margin-bottom: 10px;">GPS Tracking & Support</h3>
          <p style="font-size: 0.9rem; color: #94a3b8; line-height: 1.6;">Real-time tracking updates via WhatsApp and dedicated move coordination from Nichlaul Tehsil.</p>
        </div>

        <div style="background: #1c2541; padding: 25px; border-radius: 14px; border: 1px solid rgba(255,255,255,0.06);">
          <div style="width: 50px; height: 50px; background: rgba(245, 158, 11, 0.15); border-radius: 10px; display: flex; align-items: center; justify-content: center; color: #f59e0b; font-size: 1.4rem; margin-bottom: 18px;">
            <i class="fas fa-home"></i>
          </div>
          <h3 style="font-size: 1.2rem; font-weight: 700; color: #fff; margin-bottom: 10px;">Doorstep Pick & Drop</h3>
          <p style="font-size: 0.9rem; color: #94a3b8; line-height: 1.6;">Complete door-to-door pickup from Nichlaul town, Maharajganj, and surrounding villages directly to your address.</p>
        </div>

        <div style="background: #1c2541; padding: 25px; border-radius: 14px; border: 1px solid rgba(255,255,255,0.06);">
          <div style="width: 50px; height: 50px; background: rgba(245, 158, 11, 0.15); border-radius: 10px; display: flex; align-items: center; justify-content: center; color: #f59e0b; font-size: 1.4rem; margin-bottom: 18px;">
            <i class="fas fa-file-invoice-dollar"></i>
          </div>
          <h3 style="font-size: 1.2rem; font-weight: 700; color: #fff; margin-bottom: 10px;">IBA Approved Billing</h3>
          <p style="font-size: 0.9rem; color: #94a3b8; line-height: 1.6;">Official GST bills, LR notes, and damage inspection receipts for government or defense claim reimbursements.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 5: 7-Layer Packaging Protocol -->
  <section style="padding: 60px 0; background: #1c2541; border-top: 1px solid rgba(255,255,255,0.05);">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
      <div style="text-align: center; margin-bottom: 45px;">
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin-bottom: 12px;">7-Layer Shockproof Bike Packaging Standard</h2>
        <p style="color: #94a3b8; font-size: 1rem; max-width: 650px; margin: 0 auto;">Standardized multi-tier protection ensuring scratch-free delivery across India.</p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 20px;">
        <div style="background: #0b132b; padding: 22px; border-radius: 12px; border-top: 4px solid #f59e0b;">
          <div style="font-size: 0.85rem; font-weight: 700; color: #f59e0b; text-transform: uppercase; margin-bottom: 8px;">Layer 1</div>
          <h3 style="font-size: 1.1rem; color: #fff; font-weight: 700; margin-bottom: 10px;">Pre-Inspection</h3>
          <p style="font-size: 0.85rem; color: #94a3b8; line-height: 1.6;">Detailed vehicle physical inspection and photographic condition reporting prior to wrapping.</p>
        </div>

        <div style="background: #0b132b; padding: 22px; border-radius: 12px; border-top: 4px solid #f59e0b;">
          <div style="font-size: 0.85rem; font-weight: 700; color: #f59e0b; text-transform: uppercase; margin-bottom: 8px;">Layer 2</div>
          <h3 style="font-size: 1.1rem; color: #fff; font-weight: 700; margin-bottom: 10px;">Mirror & Light Guards</h3>
          <p style="font-size: 0.85rem; color: #94a3b8; line-height: 1.6;">Foam padding and wrap specifically on rear-view mirrors, indicators, and headlamps.</p>
        </div>

        <div style="background: #0b132b; padding: 22px; border-radius: 12px; border-top: 4px solid #f59e0b;">
          <div style="font-size: 0.85rem; font-weight: 700; color: #f59e0b; text-transform: uppercase; margin-bottom: 8px;">Layer 3</div>
          <h3 style="font-size: 1.1rem; color: #fff; font-weight: 700; margin-bottom: 10px;">80-GSM Bubble Wrap</h3>
          <p style="font-size: 0.85rem; color: #94a3b8; line-height: 1.6;">Heavy-duty air bubble wrap encased around fuel tank, engine guards, and body panels.</p>
        </div>

        <div style="background: #0b132b; padding: 22px; border-radius: 12px; border-top: 4px solid #f59e0b;">
          <div style="font-size: 0.85rem; font-weight: 700; color: #f59e0b; text-transform: uppercase; margin-bottom: 8px;">Layer 4</div>
          <h3 style="font-size: 1.1rem; color: #fff; font-weight: 700; margin-bottom: 10px;">Corrugated Fiberboard</h3>
          <p style="font-size: 0.85rem; color: #94a3b8; line-height: 1.6;">Heavy corrugated cardboard sheets molded over the body structure for impact defense.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 6: Transparent Pricing Matrix -->
  <section style="padding: 60px 0; background: #0b132b;">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
      <div style="text-align: center; margin-bottom: 45px;">
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin-bottom: 12px;">Nichlaul Bike Transport Tariff Matrix</h2>
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
              <td style="padding: 16px 20px; font-weight: 600; color: #fff;">Local / Regional UP (Gorakhpur, Maharajganj, Lucknow)</td>
              <td style="padding: 16px 20px;">₹1,800 - ₹3,200</td>
              <td style="padding: 16px 20px;">₹2,500 - ₹3,800</td>
              <td style="padding: 16px 20px;">₹3,800 - ₹5,200</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.05);">
              <td style="padding: 16px 20px; font-weight: 600; color: #fff;">Interstate 400 km - 800 km (Delhi NCR, Patna, Kanpur)</td>
              <td style="padding: 16px 20px;">₹3,500 - ₹4,800</td>
              <td style="padding: 16px 20px;">₹4,500 - ₹5,800</td>
              <td style="padding: 16px 20px;">₹5,800 - ₹7,500</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.05);">
              <td style="padding: 16px 20px; font-weight: 600; color: #fff;">Interstate 800 km - 1,500 km (Mumbai, Pune, Kolkata)</td>
              <td style="padding: 16px 20px;">₹4,800 - ₹6,500</td>
              <td style="padding: 16px 20px;">₹5,800 - ₹7,800</td>
              <td style="padding: 16px 20px;">₹7,800 - ₹10,200</td>
            </tr>
            <tr>
              <td style="padding: 16px 20px; font-weight: 600; color: #fff;">1,500 km+ (Bangalore, Hyderabad, Chennai)</td>
              <td style="padding: 16px 20px;">₹5,800 - ₹7,800</td>
              <td style="padding: 16px 20px;">₹7,200 - ₹9,500</td>
              <td style="padding: 16px 20px;">₹9,500 - ₹13,500</td>
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
        <p style="color: #94a3b8; font-size: 1rem; max-width: 650px; margin: 0 auto;">Streamlined workflow from booking to final doorstep delivery in Nichlaul.</p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(5, 1fr); gap: 15px;">
        <div style="background: #0b132b; padding: 20px; border-radius: 12px; text-align: center;">
          <div style="width: 40px; height: 40px; background: #f59e0b; color: #000; border-radius: 50%; font-weight: 800; display: flex; align-items: center; justify-content: center; margin: 0 auto 12px;">1</div>
          <h3 style="font-size: 1rem; color: #fff; font-weight: 700; margin-bottom: 8px;">Inspection</h3>
          <p style="font-size: 0.8rem; color: #94a3b8;">Detailed condition report & documentation.</p>
        </div>

        <div style="background: #0b132b; padding: 20px; border-radius: 12px; text-align: center;">
          <div style="width: 40px; height: 40px; background: #f59e0b; color: #000; border-radius: 50%; font-weight: 800; display: flex; align-items: center; justify-content: center; margin: 0 auto 12px;">2</div>
          <h3 style="font-size: 1rem; color: #fff; font-weight: 700; margin-bottom: 8px;">7-Layer Wrapping</h3>
          <p style="font-size: 0.8rem; color: #94a3b8;">Multi-tier bubble, foam, and card wrapping.</p>
        </div>

        <div style="background: #0b132b; padding: 20px; border-radius: 12px; text-align: center;">
          <div style="width: 40px; height: 40px; background: #f59e0b; color: #000; border-radius: 50%; font-weight: 800; display: flex; align-items: center; justify-content: center; margin: 0 auto 12px;">3</div>
          <h3 style="font-size: 1rem; color: #fff; font-weight: 700; margin-bottom: 8px;">Container Loading</h3>
          <p style="font-size: 0.8rem; color: #94a3b8;">Secured with heavy nylon ratchets inside truck.</p>
        </div>

        <div style="background: #0b132b; padding: 20px; border-radius: 12px; text-align: center;">
          <div style="width: 40px; height: 40px; background: #f59e0b; color: #000; border-radius: 50%; font-weight: 800; display: flex; align-items: center; justify-content: center; margin: 0 auto 12px;">4</div>
          <h3 style="font-size: 1rem; color: #fff; font-weight: 700; margin-bottom: 8px;">GPS Transit</h3>
          <p style="font-size: 0.8rem; color: #94a3b8;">Highway haulage with real-time updates.</p>
        </div>

        <div style="background: #0b132b; padding: 20px; border-radius: 12px; text-align: center;">
          <div style="width: 40px; height: 40px; background: #f59e0b; color: #000; border-radius: 50%; font-weight: 800; display: flex; align-items: center; justify-content: center; margin: 0 auto 12px;">5</div>
          <h3 style="font-size: 1rem; color: #fff; font-weight: 700; margin-bottom: 8px;">Doorstep Handover</h3>
          <p style="font-size: 0.8rem; color: #94a3b8;">Final unpacking & delivery verification.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 8: Major Routes from Nichlaul -->
  <section style="padding: 60px 0; background: #0b132b;">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
      <div style="text-align: center; margin-bottom: 45px;">
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin-bottom: 12px;">Frequent Bike Transport Routes from Nichlaul</h2>
        <p style="color: #94a3b8; font-size: 1rem; max-width: 650px; margin: 0 auto;">Regular daily schedules connecting Nichlaul Tehsil to major national destinations.</p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px;">
        <div style="background: #1c2541; padding: 20px; border-radius: 10px; display: flex; justify-content: space-between; align-items: center;">
          <div>
            <div style="font-weight: 700; color: #fff;">Nichlaul → Gorakhpur / Lucknow</div>
            <div style="font-size: 0.8rem; color: #94a3b8;">Transit: 12-24 Hours</div>
          </div>
          <span style="color: #f59e0b; font-weight: 700; font-size: 0.9rem;">Daily Service</span>
        </div>

        <div style="background: #1c2541; padding: 20px; border-radius: 10px; display: flex; justify-content: space-between; align-items: center;">
          <div>
            <div style="font-weight: 700; color: #fff;">Nichlaul → Delhi NCR / Noida</div>
            <div style="font-size: 0.8rem; color: #94a3b8;">Transit: 24-36 Hours</div>
          </div>
          <span style="color: #f59e0b; font-weight: 700; font-size: 0.9rem;">Daily Express</span>
        </div>

        <div style="background: #1c2541; padding: 20px; border-radius: 10px; display: flex; justify-content: space-between; align-items: center;">
          <div>
            <div style="font-weight: 700; color: #fff;">Nichlaul → Mumbai / Pune</div>
            <div style="font-size: 0.8rem; color: #94a3b8;">Transit: 3-4 Days</div>
          </div>
          <span style="color: #f59e0b; font-weight: 700; font-size: 0.9rem;">Express Route</span>
        </div>

        <div style="background: #1c2541; padding: 20px; border-radius: 10px; display: flex; justify-content: space-between; align-items: center;">
          <div>
            <div style="font-weight: 700; color: #fff;">Nichlaul → Bangalore / Hyderabad</div>
            <div style="font-size: 0.8rem; color: #94a3b8;">Transit: 4-5 Days</div>
          </div>
          <span style="color: #f59e0b; font-weight: 700; font-size: 0.9rem;">Express Route</span>
        </div>

        <div style="background: #1c2541; padding: 20px; border-radius: 10px; display: flex; justify-content: space-between; align-items: center;">
          <div>
            <div style="font-weight: 700; color: #fff;">Nichlaul → Kolkata / Patna</div>
            <div style="font-size: 0.8rem; color: #94a3b8;">Transit: 2-3 Days</div>
          </div>
          <span style="color: #f59e0b; font-weight: 700; font-size: 0.9rem;">Daily Freight</span>
        </div>

        <div style="background: #1c2541; padding: 20px; border-radius: 10px; display: flex; justify-content: space-between; align-items: center;">
          <div>
            <div style="font-weight: 700; color: #fff;">Nichlaul → Ahmedabad / Jaipur</div>
            <div style="font-size: 0.8rem; color: #94a3b8;">Transit: 3-4 Days</div>
          </div>
          <span style="color: #f59e0b; font-weight: 700; font-size: 0.9rem;">Interstate Freight</span>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 9: Locality Coverage & Hub Network -->
  <section style="padding: 50px 0; background: #1c2541;">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
      <div style="text-align: center; margin-bottom: 30px;">
        <h2 style="font-size: 1.8rem; font-weight: 800; color: #ffffff;">Maharajganj Regional Hub &amp; Network Links</h2>
        <p style="color: #94a3b8; font-size: 0.95rem;">Seamless interconnectivity across Eastern Uttar Pradesh relocation nodes</p>
      </div>

      <div style="display: flex; flex-wrap: wrap; gap: 14px; justify-content: center;">
        <a href="<?php echo SITE_URL; ?>packers-and-movers-in-gorakhpur" style="background: #0b132b; color: #f59e0b; padding: 10px 20px; border-radius: 20px; font-size: 0.88rem; text-decoration: none; border: 1px solid rgba(245,158,11,0.3); font-weight: 600;">Gorakhpur Master Hub →</a>
        <a href="<?php echo SITE_URL; ?>packers-and-movers-in-nichlaul-maharajganj" style="background: #0b132b; color: #f59e0b; padding: 10px 20px; border-radius: 20px; font-size: 0.88rem; text-decoration: none; border: 1px solid rgba(245,158,11,0.3); font-weight: 600;">Nichlaul Home Shifting →</a>
        <a href="<?php echo SITE_URL; ?>car-transportation-in-nichlaul-maharajganj" style="background: #0b132b; color: #f59e0b; padding: 10px 20px; border-radius: 20px; font-size: 0.88rem; text-decoration: none; border: 1px solid rgba(245,158,11,0.3); font-weight: 600;">Car Transportation Nichlaul →</a>
        <a href="<?php echo SITE_URL; ?>bike-transportation-in-nautanwa-maharajganj" style="background: #0b132b; color: #f59e0b; padding: 10px 20px; border-radius: 20px; font-size: 0.88rem; text-decoration: none; border: 1px solid rgba(245,158,11,0.3); font-weight: 600;">Nautanwa Bike Transport →</a>
      </div>
    </div>
  </section>

  <!-- Section 10: 10-Item Dynamic FAQ & Schema -->
  <?php
  $faq_list = [
    ['q' => 'How much does bike transportation cost from Nichlaul, Maharajganj?', 'a' => 'Bike shipping charges from Nichlaul depend on engine displacement (100cc to 500cc+) and route distance. Local moves start from ₹1,800 to ₹3,200, while long-distance interstate bike parcel ranges from ₹3,500 to ₹7,800.'],
    ['q' => 'What packing materials are used for bike shipping in Nichlaul?', 'a' => 'We use a 7-layer protection method including foam padding, high-density 80-GSM bubble wrap, corrugated sheets, stretch wrapping, mirror guards, and heavy-duty tie-down straps.'],
    ['q' => 'Do you provide doorstep pickup and delivery in Nichlaul Tehsil?', 'a' => 'Yes, our team provides complete doorstep pickup from your address in Nichlaul and delivers directly to your destination city across India.'],
    ['q' => 'What documents are needed for bike parcel from Nichlaul?', 'a' => 'You need to provide a copy of the bike Registration Certificate (RC), valid insurance paper, government ID proof, and consignment LR note.'],
    ['q' => 'Is transit insurance included during bike transport from Nichlaul?', 'a' => 'Yes, optional full-value transit insurance (1.5% of declared bike value) is available to protect against transit loss, fire, or accidental damage.'],
    ['q' => 'Should I drain petrol before handing over my motorcycle in Nichlaul?', 'a' => 'Yes, as per transport safety guidelines, fuel must be reduced to less than 1 liter to prevent inflammable risks during truck shipment.'],
    ['q' => 'How is the bike secured inside the transport truck?', 'a' => 'Motorcycles are clamped upright on wooden base pallets and tied down with heavy-duty nylon web ratchets to keep them completely stable.'],
    ['q' => 'How can I track my bike parcel from Nichlaul?', 'a' => 'We issue a unique LR tracking number and send regular GPS updates via WhatsApp until safe delivery.'],
    ['q' => 'How many days before moving should I book bike transport in Nichlaul?', 'a' => 'We recommend booking 2 to 3 days prior to your preferred pickup date to reserve dedicated slot allocation.'],
    ['q' => 'How do I book Bike Transportation in Nichlaul Maharajganj?', 'a' => 'Call +91 8409531615 or share your bike model and destination details on WhatsApp for an instant free quotation.']
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

  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "MovingCompany",
    "name": "Shree Ashirwad Packers and Movers",
    "description": "Professional bike transportation in Nichlaul, Maharajganj with 7-layer bubble wrap packaging and transit insurance.",
    "url": "<?php echo $canonical_url; ?>",
    "telephone": "<?php echo SITE_PHONE_RAW; ?>",
    "address": {
      "@type": "PostalAddress",
      "addressLocality": "Nichlaul, Maharajganj",
      "addressRegion": "Uttar Pradesh",
      "addressCountry": "IN"
    },
    "areaServed": "Nichlaul, Maharajganj, Uttar Pradesh",
    "priceRange": "₹1800 - ₹7800"
  }
  </script>

  <section style="padding: 60px 0; background: #0b132b;">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
      <div style="text-align: center; margin-bottom: 45px;">
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin-bottom: 12px;">Frequently Asked Questions (FAQ)</h2>
        <p style="color: #94a3b8; font-size: 1rem; max-width: 650px; margin: 0 auto;">Everything you need to know about two-wheeler shipping in Nichlaul Maharajganj.</p>
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
      <h2 style="font-size: 2.4rem; font-weight: 800; color: #ffffff; margin-bottom: 15px;">Ready to Transport Your Bike from Nichlaul?</h2>
      <p style="font-size: 1.1rem; color: #cbd5e1; margin-bottom: 30px; line-height: 1.7;">Get a transparent quote in 2 minutes with guaranteed damage-free delivery and zero hassle.</p>
      
      <div style="display: flex; gap: 15px; justify-content: center; flex-wrap: wrap;">
        <a href="tel:<?php echo SITE_PHONE_RAW; ?>" style="padding: 15px 32px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1.05rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
          <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call <?php echo SITE_PHONE; ?>
        </a>
        <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20need%20a%20bike%20transportation%20quote%20for%20Nichlaul%20Maharajganj." target="_blank" style="padding: 15px 32px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1.05rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
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
