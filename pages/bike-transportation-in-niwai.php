<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "Bike Transportation in Niwai | Secure Two-Wheeler Shifting Rajasthan";
$page_desc = "Professional bike transportation in Niwai, Tonk district (Banasthali Vidyapith area). Secure door-to-door two-wheeler relocation along NH-52 with 4-layer sand-dust proof packaging.";
$page_keywords = "bike transportation in niwai, best bike transportation in niwai, affordable bike transportation in niwai, packers and movers, packers and movers in ranchi, top bike transportation in niwai company, household shifting bike transportation in niwai, doorstep bike transportation in niwai, verified bike transportation in niwai services, shree ashirwad bike transportation in niwai";
$canonical_url = "https://shreeashirwadpackersandmovers.com/pages/bike-transportation-in-niwai.php";

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
        <span class="breadcrumb-item active" style="color: #ffffff; font-weight: 600;">Niwai</span>
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
            BIKE TRANSPORTATION NIWAI RELOCATION SPECIALISTS
          </span>
          <h1 style="font-size: 2.6rem; font-weight: 800; line-height: 1.25; margin-bottom: 20px; color: #ffffff;">
            Professional <span style="color: #f59e0b;">Bike Transportation in Niwai</span>
          </h1>
          <p style="font-size: 1.1rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 25px;">
            Shree Ashirwad Packers and Movers delivers high-grade two-wheeler relocation across Niwai, Banasthali Vidyapith, Tonk, and Jaipur-Kota NH-52 corridor. Featuring 4-layer sand-dust proof packaging, covered container trucks, and 100% transit insurance.
          </p>

          <div style="display: flex; gap: 15px; flex-wrap: wrap; margin-bottom: 30px;">
            <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Now" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
              <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call Now: <?php echo SITE_PHONE; ?>
            </a>
            <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20a%20bike%20transportation%20quote%20for%20Niwai." title="Chat on WhatsApp" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
              <i class="fab fa-whatsapp" style="margin-right: 8px;"></i> Chat on WhatsApp
            </a>
          </div>

          <div style="display: flex; gap: 20px; font-size: 0.9rem; color: #94a3b8; flex-wrap: wrap;">
            <span><strong style="color: #f59e0b;">✓ 100% Insured</strong> Shifting</span>
            <span><strong style="color: #f59e0b;">✓ Banasthali Campus</strong> Pickups</span>
            <span><strong style="color: #f59e0b;">✓ Door-to-Door</strong> Pick & Drop</span>
          </div>
        </div>

        <!-- Hero Lead Form Column -->
        <div class="hero-form-card" style="background: rgba(255, 255, 255, 0.05); backdrop-filter: blur(10px); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 16px; padding: 30px; box-shadow: 0 15px 35px rgba(0,0,0,0.4);">
          <h2 style="font-size: 1.4rem; color: #ffffff; margin-bottom: 8px; font-weight: 700; text-align: center;">Get Niwai Bike Shifting Quote</h2>
          <p style="font-size: 0.85rem; color: #94a3b8; text-align: center; margin-bottom: 20px;">Receive transparent cost estimation on WhatsApp in 2 minutes</p>

          <form action="#" method="POST" onsubmit="sendHeroWhatsAppLead(event, this);">
            <div style="margin-bottom: 14px;">
              <input type="text" name="name" class="form-control" placeholder="Your Full Name" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="margin-bottom: 14px;">
              <input type="tel" name="phone" class="form-control" placeholder="10-Digit Phone Number" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 10px; margin-bottom: 14px;">
              <input type="text" name="move_from" class="form-control" value="Niwai" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
              <input type="text" name="move_to" class="form-control" placeholder="Moving To (City/Area)" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="margin-bottom: 14px;">
              <input type="text" name="bike_model" class="form-control" placeholder="Bike Model (e.g. Scooty, Royal Enfield Bullet, Pulsar, Jupiter)" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
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
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; margin-bottom: 5px;">8,500+</div>
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
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin-bottom: 12px;">Why Choose Our Niwai Bike Transport?</h2>
        <p style="color: #94a3b8; font-size: 1rem; max-width: 650px; margin: 0 auto;">Tailored for Rajasthan heat, sand-dust defense, and student/faculty relocations around Banasthali Vidyapith.</p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 25px;">
        <div style="background: #1c2541; padding: 25px; border-radius: 14px; border: 1px solid rgba(255,255,255,0.06);">
          <div style="width: 50px; height: 50px; background: rgba(245, 158, 11, 0.15); border-radius: 10px; display: flex; align-items: center; justify-content: center; color: #f59e0b; font-size: 1.4rem; margin-bottom: 18px;">
            <i class="fas fa-box-open"></i>
          </div>
          <h3 style="font-size: 1.2rem; font-weight: 700; color: #fff; margin-bottom: 10px;">4-Layer Sand-Dust Packaging</h3>
          <p style="font-size: 0.9rem; color: #94a3b8; line-height: 1.6;">Bubble wrap, foam padding, corrugated cardboard sheets, and stretch film sealing out fine desert sand and heat.</p>
        </div>

        <div style="background: #1c2541; padding: 25px; border-radius: 14px; border: 1px solid rgba(255,255,255,0.06);">
          <div style="width: 50px; height: 50px; background: rgba(245, 158, 11, 0.15); border-radius: 10px; display: flex; align-items: center; justify-content: center; color: #f59e0b; font-size: 1.4rem; margin-bottom: 18px;">
            <i class="fas fa-university"></i>
          </div>
          <h3 style="font-size: 1.2rem; font-weight: 700; color: #fff; margin-bottom: 10px;">Banasthali Campus Pickups</h3>
          <p style="font-size: 0.9rem; color: #94a3b8; line-height: 1.6;">Specialized express pickup and delivery service for students and staff at Banasthali Vidyapith campus.</p>
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
          <p style="font-size: 0.9rem; color: #94a3b8; line-height: 1.6;">Door-to-door pickup across Niwai Town, Banasthali Vidyapith, Jhadali, Datwas, and Tonk road.</p>
        </div>

        <div style="background: #1c2541; padding: 25px; border-radius: 14px; border: 1px solid rgba(255,255,255,0.06);">
          <div style="width: 50px; height: 50px; background: rgba(245, 158, 11, 0.15); border-radius: 10px; display: flex; align-items: center; justify-content: center; color: #f59e0b; font-size: 1.4rem; margin-bottom: 18px;">
            <i class="fas fa-file-invoice-dollar"></i>
          </div>
          <h3 style="font-size: 1.2rem; font-weight: 700; color: #fff; margin-bottom: 10px;">Transparent Pricing</h3>
          <p style="font-size: 0.9rem; color: #94a3b8; line-height: 1.6;">Clear itemized quote with zero hidden fees. Official GST invoices provided for institutional reimbursement.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 5: 4-Layer Packaging Protocol -->
  <section style="padding: 60px 0; background: #1c2541; border-top: 1px solid rgba(255,255,255,0.05);">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
      <div style="text-align: center; margin-bottom: 45px;">
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin-bottom: 12px;">4-Layer Desert-Proof Packaging Standard</h2>
        <p style="color: #94a3b8; font-size: 1rem; max-width: 650px; margin: 0 auto;">Standardized multi-tier protection ensuring scratch-free, heat-resistant delivery across India.</p>
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
          <p style="font-size: 0.85rem; color: #94a3b8; line-height: 1.6;">Heavy stretch film lamination shielding against fine desert dust, heat, and rain during transit.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 6: Transparent Pricing Matrix -->
  <section style="padding: 60px 0; background: #0b132b;">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
      <div style="text-align: center; margin-bottom: 45px;">
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin-bottom: 12px;">Niwai Bike Transport Tariff Matrix</h2>
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
              <td style="padding: 16px 20px; font-weight: 600; color: #fff;">Within Jaipur / Tonk / Kota (Up to 150 km)</td>
              <td style="padding: 16px 20px;">₹1,500 - ₹2,500</td>
              <td style="padding: 16px 20px;">₹2,200 - ₹3,500</td>
              <td style="padding: 16px 20px;">₹3,500 - ₹4,800</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.05);">
              <td style="padding: 16px 20px; font-weight: 600; color: #fff;">200 km - 500 km (Delhi NCR, Ajmer, Udaipur, Agra)</td>
              <td style="padding: 16px 20px;">₹3,000 - ₹4,500</td>
              <td style="padding: 16px 20px;">₹4,000 - ₹5,500</td>
              <td style="padding: 16px 20px;">₹5,500 - ₹7,500</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.05);">
              <td style="padding: 16px 20px; font-weight: 600; color: #fff;">500 km - 1,000 km (Ahmedabad, Indore, Lucknow, Chandigarh)</td>
              <td style="padding: 16px 20px;">₹4,500 - ₹6,200</td>
              <td style="padding: 16px 20px;">₹5,500 - ₹7,500</td>
              <td style="padding: 16px 20px;">₹7,500 - ₹10,000</td>
            </tr>
            <tr>
              <td style="padding: 16px 20px; font-weight: 600; color: #fff;">1,000 km+ (Mumbai, Pune, Bangalore, Kolkata, Hyderabad)</td>
              <td style="padding: 16px 20px;">₹5,800 - ₹8,500</td>
              <td style="padding: 16px 20px;">₹7,200 - ₹10,800</td>
              <td style="padding: 16px 20px;">₹10,800 - ₹15,000</td>
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
        <p style="color: #94a3b8; font-size: 1rem; max-width: 650px; margin: 0 auto;">Streamlined workflow from booking to final doorstep delivery in Niwai.</p>
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
          <h3 style="font-size: 1rem; color: #fff; font-weight: 700; margin-bottom: 8px;">NH-52 Transit</h3>
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

  <!-- Section 8: Major Routes from Niwai -->
  <section style="padding: 60px 0; background: #0b132b;">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
      <div style="text-align: center; margin-bottom: 45px;">
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin-bottom: 12px;">Frequent Bike Transport Routes from Niwai</h2>
        <p style="color: #94a3b8; font-size: 1rem; max-width: 650px; margin: 0 auto;">Regular daily schedules connects Niwai to major cities across Rajasthan and nationwide.</p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px;">
        <div style="background: #1c2541; padding: 20px; border-radius: 10px; display: flex; justify-content: space-between; align-items: center;">
          <div>
            <div style="font-weight: 700; color: #fff;">Niwai → Jaipur / Tonk</div>
            <div style="font-size: 0.8rem; color: #94a3b8;">Transit: Same Day (2-4 Hours)</div>
          </div>
          <span style="color: #f59e0b; font-weight: 700; font-size: 0.9rem;">Daily Service</span>
        </div>

        <div style="background: #1c2541; padding: 20px; border-radius: 10px; display: flex; justify-content: space-between; align-items: center;">
          <div>
            <div style="font-weight: 700; color: #fff;">Niwai → Kota / Sawai Madhopur</div>
            <div style="font-size: 0.8rem; color: #94a3b8;">Transit: 4-6 Hours</div>
          </div>
          <span style="color: #f59e0b; font-weight: 700; font-size: 0.9rem;">Daily Service</span>
        </div>

        <div style="background: #1c2541; padding: 20px; border-radius: 10px; display: flex; justify-content: space-between; align-items: center;">
          <div>
            <div style="font-weight: 700; color: #fff;">Niwai → Delhi NCR (Gurgaon / Noida)</div>
            <div style="font-size: 0.8rem; color: #94a3b8;">Transit: 12-18 Hours</div>
          </div>
          <span style="color: #f59e0b; font-weight: 700; font-size: 0.9rem;">Daily Express</span>
        </div>

        <div style="background: #1c2541; padding: 20px; border-radius: 10px; display: flex; justify-content: space-between; align-items: center;">
          <div>
            <div style="font-weight: 700; color: #fff;">Niwai → Ahmedabad / Surat</div>
            <div style="font-size: 0.8rem; color: #94a3b8;">Transit: 24-36 Hours</div>
          </div>
          <span style="color: #f59e0b; font-weight: 700; font-size: 0.9rem;">Express Route</span>
        </div>

        <div style="background: #1c2541; padding: 20px; border-radius: 10px; display: flex; justify-content: space-between; align-items: center;">
          <div>
            <div style="font-weight: 700; color: #fff;">Niwai → Mumbai / Pune</div>
            <div style="font-size: 0.8rem; color: #94a3b8;">Transit: 2-3 Days</div>
          </div>
          <span style="color: #f59e0b; font-weight: 700; font-size: 0.9rem;">Express Route</span>
        </div>

        <div style="background: #1c2541; padding: 20px; border-radius: 10px; display: flex; justify-content: space-between; align-items: center;">
          <div>
            <div style="font-weight: 700; color: #fff;">Niwai → Bengaluru / Hyderabad</div>
            <div style="font-size: 0.8rem; color: #94a3b8;">Transit: 3-4 Days</div>
          </div>
          <span style="color: #f59e0b; font-weight: 700; font-size: 0.9rem;">Interstate Freight</span>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 9: Locality Coverage in Niwai -->
  <section style="padding: 50px 0; background: #1c2541;">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
      <div style="text-align: center; margin-bottom: 30px;">
        <h2 style="font-size: 1.8rem; font-weight: 800; color: #ffffff;">Sub-Locality Pickup Network Across Niwai & Tonk</h2>
        <p style="color: #94a3b8; font-size: 0.95rem;">Doorstep pickup and delivery available across all key locations in Niwai Tehsil</p>
      </div>

      <div style="display: flex; flex-wrap: wrap; gap: 12px; justify-content: center;">
        <span style="background: #0b132b; color: #cbd5e1; padding: 8px 18px; border-radius: 20px; font-size: 0.85rem; border: 1px solid rgba(255,255,255,0.08);">Niwai Town</span>
        <span style="background: #0b132b; color: #cbd5e1; padding: 8px 18px; border-radius: 20px; font-size: 0.85rem; border: 1px solid rgba(255,255,255,0.08);">Banasthali Vidyapith</span>
        <span style="background: #0b132b; color: #cbd5e1; padding: 8px 18px; border-radius: 20px; font-size: 0.85rem; border: 1px solid rgba(255,255,255,0.08);">Jhadali</span>
        <span style="background: #0b132b; color: #cbd5e1; padding: 8px 18px; border-radius: 20px; font-size: 0.85rem; border: 1px solid rgba(255,255,255,0.08);">Datwas</span>
        <span style="background: #0b132b; color: #cbd5e1; padding: 8px 18px; border-radius: 20px; font-size: 0.85rem; border: 1px solid rgba(255,255,255,0.08);">Mundia</span>
        <span style="background: #0b132b; color: #cbd5e1; padding: 8px 18px; border-radius: 20px; font-size: 0.85rem; border: 1px solid rgba(255,255,255,0.08);">Tonk Road Corridor</span>
      </div>
    </div>
  </section>

  <!-- Section 10: 10-Item Dynamic FAQ & Schema -->
  <?php
  $faq_list = [
    [
      "q" => "What documents are required to ship a bike from Niwai?",
      "a" => "You need a copy of the vehicle Registration Certificate (RC), valid Bike Insurance, Pollution Certificate (PUC), and photo ID proof."
    ],
    [
      "q" => "How much does bike transport from Niwai cost?",
      "a" => "Local moves to Jaipur or Kota range from ₹1,500 to ₹3,500. Interstate relocation to Delhi NCR or Ahmedabad starts at ₹3,000 to ₹6,200 depending on bike segment."
    ],
    [
      "q" => "Do you provide bike pickup from Banasthali Vidyapith campus?",
      "a" => "Yes, we offer direct doorstep pickup and delivery for Banasthali Vidyapith students, faculty, and administrative staff."
    ],
    [
      "q" => "How is the bike protected during desert highway transit?",
      "a" => "We use a 4-layer packaging process: bubble wrap, foam padding, corrugated cardboard sheets, and stretch film sealing to block sand, heat, and road vibrations."
    ],
    [
      "q" => "Is transit insurance included for bike shifting from Niwai?",
      "a" => "Yes, full transit insurance coverage is provided to shield against accidents or damages during transit."
    ],
    [
      "q" => "How much petrol should remain in the bike tank?",
      "a" => "Fuel level must be under 1-2 liters to meet highway safety regulations inside enclosed container trucks."
    ],
    [
      "q" => "How long does transport take from Niwai to Jaipur or Delhi?",
      "a" => "Delivery to Jaipur takes 2 to 4 hours, while shipping to Delhi NCR takes 12 to 18 hours."
    ],
    [
      "q" => "Do you offer live shipment tracking?",
      "a" => "Yes, updates are shared directly via WhatsApp alongside a dedicated customer support manager."
    ],
    [
      "q" => "Can I transport scooties and light 110cc two-wheelers?",
      "a" => "Yes, we safely transport all types of two-wheelers including scooties, mopeds, commuter bikes, and heavy cruiser motorcycles."
    ],
    [
      "q" => "How can I book a bike transport service in Niwai?",
      "a" => "Submit our website lead form or call us directly at " . SITE_PHONE . " for an instant cost quote."
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
        <p style="color: #94a3b8; font-size: 1rem; max-width: 650px; margin: 0 auto;">Everything you need to know about two-wheeler shifting services in Niwai.</p>
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
      <h2 style="font-size: 2.4rem; font-weight: 800; color: #ffffff; margin-bottom: 15px;">Ready to Transport Your Bike from Niwai?</h2>
      <p style="font-size: 1.1rem; color: #cbd5e1; margin-bottom: 30px; line-height: 1.7;">Get a transparent quote in 2 minutes with guaranteed damage-free delivery and zero hassle.</p>
      
      <div style="display: flex; gap: 15px; justify-content: center; flex-wrap: wrap;">
        <a href="tel:<?php echo SITE_PHONE_RAW; ?>" style="padding: 15px 32px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1.05rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
          <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call <?php echo SITE_PHONE; ?>
        </a>
        <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20need%20a%20bike%20transportation%20quote%20for%20Niwai." target="_blank" style="padding: 15px 32px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1.05rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
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

