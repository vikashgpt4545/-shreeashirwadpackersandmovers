<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "Royal Enfield Bullet Transport Services in India | Heavy Bike Shipping Master Guide";
$page_desc = "Complete master guide for Royal Enfield Bullet, Classic 350, Himalayan, and Interceptor 650 transport across India. 7-layer chrome wrapping, hydraulic tail-lift loading, timber crating, and 100% transit insurance.";
$page_keywords = "bike transport bullet, royal enfield bullet transport, classic 350 shipping, bullet bike packers and movers, heavy bike transport, royal enfield relocation, interceptor 650 transport, himalayan bike shipping";
$canonical_url = "https://shreeashirwadpackersandmovers.com/pages/bike-transport-bullet.php";

$faq_list = [
    ['q' => 'How are heavy bikes like Bullet 350 and Classic 350 safely loaded into trucks?', 'a' => 'We utilize heavy-duty hydraulic tail-lifts and anti-slip wide loading ramps engineered for 250+ kg motorcycles. This eliminates manual lifting, drop risks, and underbody frame scrape during container loading.'],
    ['q' => 'Will chrome exhausts, engine fins, and silencers get scratched during transit?', 'a' => 'No. All chrome components receive an initial layer of non-abrasive soft foam wrap, followed by 80 GSM high-density bubble wrap, anti-rust moisture stretch film, and corrugated cardboard shielding.'],
    ['q' => 'Is customized wooden crating necessary for Royal Enfield cruiser motorcycles?', 'a' => 'While standard 7-layer wrapping in enclosed container trucks is highly safe, we strongly recommend custom ISPM timber crating for long-distance routes over 1,000 km or high-value models like Interceptor 650 and Super Meteor.'],
    ['q' => 'How much fuel should remain in the Royal Enfield tank prior to pickup?', 'a' => 'Keep approximately 1 to 2 liters of petrol in the fuel tank so our team can maneuver the bike onto loading ramps. Any excess petrol is safely drained to comply with interstate transit fire safety norms.'],
    ['q' => 'Are IBA-approved billing documents provided for defence and military transfer claims?', 'a' => 'Yes, Shree Ashirwad Packers provides 100% IBA-approved GST invoices, consignment notes (LR copy), itemized packing lists, and stamped payment receipts suitable for armed forces and government relocation claims.'],
    ['q' => 'How are Royal Enfield motorcycles secured inside container trucks to prevent tilting?', 'a' => 'We use 4-point heavy-duty nylon ratchet tie-down straps anchored directly to the vehicle chassis frame and wheel chocks mounted to the container floor, ensuring zero movement even on rough terrain.'],
    ['q' => 'Can aftermarket accessories like leg guards, saddlebags, and tall windshields remain installed?', 'a' => 'Heavy leg guards and pannier frames remain installed and are individually wrapped. Oversized windshields or loose saddlebags are carefully unbolted, padded separately, and safely packed alongside the bike.'],
    ['q' => 'How is the transit insurance valuation calculated for a Royal Enfield motorcycle?', 'a' => 'Transit insurance coverage (typically 1.5% of declared value) is calculated based on the motorcycle\'s current IDV (Insured Declared Value) as stated in your active vehicle insurance policy or current market valuation.'],
    ['q' => 'What is the estimated delivery timeframe for interstate Bullet bike transport?', 'a' => 'Interstate transit typically takes 3 to 5 days for medium-distance corridors (500-1,200 km) and 5 to 7 days for long-distance pan-India routes, backed by real-time GPS tracking updates.'],
    ['q' => 'What documentation must I hand over at the time of motorcycle pickup?', 'a' => 'You need to provide clear photocopies of your Vehicle Registration Certificate (RC), valid insurance policy, government-issued photo ID (Aadhaar/PAN card), and sign the pre-transit vehicle inspection receipt.']
];

require_once __DIR__ . '/../includes/header.php';
?>

<main class="site-main">

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
            ROYAL ENFIELD &amp; HEAVY CRUISER RELOCATION SPECIALISTS
          </span>
          <h1 style="font-size: 2.7rem; font-weight: 800; line-height: 1.2; margin-bottom: 20px; color: #ffffff;">
            Professional <span style="color: #f59e0b;">Royal Enfield Bullet Transport</span> Services
          </h1>
          <p style="font-size: 1.12rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 25px;">
            Relocating your iconic Royal Enfield Bullet 350, Classic, Himalayan, Interceptor 650, or Super Meteor across India? Shree Ashirwad Packers offers heavy-duty hydraulic tail-lift loading, custom ISPM timber crating, 7-layer anti-rust chrome protection, and 100% full-value transit insurance.
          </p>

          <div style="display: flex; gap: 15px; flex-wrap: wrap; margin-bottom: 30px;">
            <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Transport Desk" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
              <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call Now: <?php echo SITE_PHONE; ?>
            </a>
            <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20a%20Royal%20Enfield%20Bullet%20transport%20quote." title="Chat on WhatsApp" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
              <i class="fab fa-whatsapp" style="margin-right: 8px;"></i> Chat on WhatsApp
            </a>
          </div>

          <div style="display: flex; gap: 20px; font-size: 0.9rem; color: #94a3b8;">
            <span><strong style="color: #f59e0b;">Hydraulic Ramp</strong> Loading</span>
            <span><strong style="color: #f59e0b;">7-Layer</strong> Chrome Guard</span>
            <span><strong style="color: #f59e0b;">100% Insured</strong> Doorstep Shipping</span>
          </div>
        </div>

        <!-- Hero Lead Form Column -->
        <div class="hero-form-card" style="background: rgba(255, 255, 255, 0.05); backdrop-filter: blur(10px); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 16px; padding: 30px; box-shadow: 0 15px 35px rgba(0,0,0,0.4);">
          <h2 style="font-size: 1.4rem; color: #ffffff; margin-bottom: 8px; font-weight: 700; text-align: center;">Get Bullet Transport Quote</h2>
          <p style="font-size: 0.85rem; color: #94a3b8; text-align: center; margin-bottom: 20px;">Receive instant cost breakdown on WhatsApp in 2 minutes</p>

          <form action="#" method="POST" onsubmit="sendHeroWhatsAppLead(event, this);">
            <div style="margin-bottom: 14px;">
              <input type="text" name="name" class="form-control" placeholder="Your Full Name" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="margin-bottom: 14px;">
              <input type="tel" name="phone" class="form-control" placeholder="10-Digit Phone Number" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 10px; margin-bottom: 14px;">
              <input type="text" name="move_from" class="form-control" placeholder="Pickup City" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
              <input type="text" name="move_to" class="form-control" placeholder="Drop Destination" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <button type="submit" style="width: 100%; padding: 14px; background: linear-gradient(135deg, #d32f2f 0%, #f59e0b 100%); color: #ffffff; border: none; border-radius: 50px; font-weight: 700; font-size: 1rem; cursor: pointer;">
              Get Instant Estimate Now &rarr;
            </button>
          </form>
        </div>

      </div>
    </div>
  </section>

  <!-- Section 2: Key Operational Metrics -->
  <section style="padding: 45px 0; background: #1c2541; border-top: 1px solid rgba(255,255,255,0.05); border-bottom: 1px solid rgba(255,255,255,0.05);">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 25px; text-align: center;">
        
        <div style="padding: 20px; background: rgba(255,255,255,0.03); border-radius: 12px; border: 1px solid rgba(255,255,255,0.08);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; margin-bottom: 5px;">9,400+</div>
          <div style="font-size: 0.9rem; color: #94a3b8;">Royal Enfield Bikes Shipped</div>
        </div>

        <div style="padding: 20px; background: rgba(255,255,255,0.03); border-radius: 12px; border: 1px solid rgba(255,255,255,0.08);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; margin-bottom: 5px;">300 kg</div>
          <div style="font-size: 0.9rem; color: #94a3b8;">Hydraulic Tail-Lift Capacity</div>
        </div>

        <div style="padding: 20px; background: rgba(255,255,255,0.03); border-radius: 12px; border: 1px solid rgba(255,255,255,0.08);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; margin-bottom: 5px;">7-Layer</div>
          <div style="font-size: 0.9rem; color: #94a3b8;">Chrome &amp; Paint Armor</div>
        </div>

        <div style="padding: 20px; background: rgba(255,255,255,0.03); border-radius: 12px; border: 1px solid rgba(255,255,255,0.08);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; margin-bottom: 5px;">100%</div>
          <div style="font-size: 0.9rem; color: #94a3b8;">Full Value Transit Insurance</div>
        </div>

      </div>
    </div>
  </section>

  <!-- Section 3: Comprehensive Model-Wise Pricing Matrix -->
  <section style="padding: 60px 0; background: #0b132b;">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
      
      <div style="text-align: center; margin-bottom: 40px;">
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin-bottom: 12px;">
          Itemized Royal Enfield Transport Rate Matrix
        </h2>
        <p style="color: #94a3b8; font-size: 1rem; max-width: 700px; margin: 0 auto;">
          Transparent distance-based cost estimation customized for Royal Enfield models and engine displacement.
        </p>
      </div>

      <div style="overflow-x: auto; background: #1c2541; border-radius: 14px; border: 1px solid rgba(255,255,255,0.1); padding: 10px;">
        <table style="width: 100%; border-collapse: collapse; text-align: left; font-size: 0.95rem; color: #e2e8f0;">
          <thead>
            <tr style="background: rgba(245, 158, 11, 0.15); border-bottom: 2px solid rgba(245, 158, 11, 0.3);">
              <th style="padding: 16px; color: #f59e0b; font-weight: 700;">Royal Enfield Model Variant</th>
              <th style="padding: 16px; color: #f59e0b; font-weight: 700;">Displacement / Weight</th>
              <th style="padding: 16px; color: #f59e0b; font-weight: 700;">300 - 800 km Rate</th>
              <th style="padding: 16px; color: #f59e0b; font-weight: 700;">800 - 1,500 km Rate</th>
              <th style="padding: 16px; color: #f59e0b; font-weight: 700;">Above 1,500 km Rate</th>
            </tr>
          </thead>
          <tbody>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.05);">
              <td style="padding: 16px; font-weight: 600;">Bullet 350 / Hunter 350</td>
              <td style="padding: 16px;">349cc (~181 kg)</td>
              <td style="padding: 16px; color: #f59e0b; font-weight: 700;">₹3,800 - ₹5,200</td>
              <td style="padding: 16px; color: #f59e0b; font-weight: 700;">₹5,500 - ₹7,200</td>
              <td style="padding: 16px; color: #f59e0b; font-weight: 700;">₹7,500 - ₹9,800</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.05); background: rgba(255,255,255,0.02);">
              <td style="padding: 16px; font-weight: 600;">Classic 350 / Meteor 350</td>
              <td style="padding: 16px;">349cc (~195 kg)</td>
              <td style="padding: 16px; color: #f59e0b; font-weight: 700;">₹4,200 - ₹5,800</td>
              <td style="padding: 16px; color: #f59e0b; font-weight: 700;">₹6,000 - ₹7,800</td>
              <td style="padding: 16px; color: #f59e0b; font-weight: 700;">₹8,000 - ₹10,500</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.05);">
              <td style="padding: 16px; font-weight: 600;">Himalayan 411 / Scram / Himalayan 450</td>
              <td style="padding: 16px;">411cc - 452cc (~199 kg)</td>
              <td style="padding: 16px; color: #f59e0b; font-weight: 700;">₹4,800 - ₹6,200</td>
              <td style="padding: 16px; color: #f59e0b; font-weight: 700;">₹6,500 - ₹8,500</td>
              <td style="padding: 16px; color: #f59e0b; font-weight: 700;">₹8,800 - ₹11,800</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.05); background: rgba(255,255,255,0.02);">
              <td style="padding: 16px; font-weight: 600;">Interceptor 650 / Continental GT 650</td>
              <td style="padding: 16px;">648cc (~218 kg)</td>
              <td style="padding: 16px; color: #f59e0b; font-weight: 700;">₹5,500 - ₹7,200</td>
              <td style="padding: 16px; color: #f59e0b; font-weight: 700;">₹7,500 - ₹9,800</td>
              <td style="padding: 16px; color: #f59e0b; font-weight: 700;">₹10,200 - ₹13,800</td>
            </tr>
            <tr>
              <td style="padding: 16px; font-weight: 600;">Super Meteor 650 / Shotgun 650</td>
              <td style="padding: 16px;">648cc (~241 kg)</td>
              <td style="padding: 16px; color: #f59e0b; font-weight: 700;">₹6,000 - ₹7,800</td>
              <td style="padding: 16px; color: #f59e0b; font-weight: 700;">₹8,200 - ₹10,500</td>
              <td style="padding: 16px; color: #f59e0b; font-weight: 700;">₹11,000 - ₹14,800</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </section>

  <!-- Section 4: Technical & Operational Advantages -->
  <section style="padding: 60px 0; background: #1c2541;">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
      
      <div style="text-align: center; margin-bottom: 45px;">
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin-bottom: 12px;">
          Engineering &amp; Operational Excellence for Heavy Cruisers
        </h2>
        <p style="color: #94a3b8; font-size: 1rem; max-width: 700px; margin: 0 auto;">
          Why motorcycle enthusiasts and Royal Enfield owners choose Shree Ashirwad Packers across India.
        </p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 30px;">
        
        <div style="background: rgba(255,255,255,0.03); border-radius: 12px; padding: 30px; border: 1px solid rgba(255,255,255,0.08);">
          <div style="width: 50px; height: 50px; border-radius: 10px; background: rgba(245, 158, 11, 0.15); color: #f59e0b; display: flex; align-items: center; justify-content: center; font-size: 1.4rem; margin-bottom: 20px;">
            <i class="fas fa-shield-alt"></i>
          </div>
          <h3 style="font-size: 1.25rem; font-weight: 700; color: #ffffff; margin-bottom: 12px;">Anti-Rust Chrome Protection</h3>
          <p style="color: #94a3b8; font-size: 0.95rem; line-height: 1.7;">
            Bullet chrome exhausts, engine fins, mirrors, and spoke rims are coated with anti-rust foam film before multi-layer bubble wrapping to prevent atmospheric tarnish during highway transit.
          </p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border-radius: 12px; padding: 30px; border: 1px solid rgba(255,255,255,0.08);">
          <div style="width: 50px; height: 50px; border-radius: 10px; background: rgba(245, 158, 11, 0.15); color: #f59e0b; display: flex; align-items: center; justify-content: center; font-size: 1.4rem; margin-bottom: 20px;">
            <i class="fas fa-truck-loading"></i>
          </div>
          <h3 style="font-size: 1.25rem; font-weight: 700; color: #ffffff; margin-bottom: 12px;">Hydraulic Tail-Lift Loading</h3>
          <p style="color: #94a3b8; font-size: 0.95rem; line-height: 1.7;">
            Zero manual lifting risk. Heavy 200+ kg Royal Enfield motorcycles are smoothly wheeled onto hydraulic tail-lifts and safely elevated into enclosed container trucks without underbody scrapes.
          </p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border-radius: 12px; padding: 30px; border: 1px solid rgba(255,255,255,0.08);">
          <div style="width: 50px; height: 50px; border-radius: 10px; background: rgba(245, 158, 11, 0.15); color: #f59e0b; display: flex; align-items: center; justify-content: center; font-size: 1.4rem; margin-bottom: 20px;">
            <i class="fas fa-box font-icon"></i>
          </div>
          <h3 style="font-size: 1.25rem; font-weight: 700; color: #ffffff; margin-bottom: 12px;">Optional ISPM Wooden Crating</h3>
          <p style="color: #94a3b8; font-size: 0.95rem; line-height: 1.7;">
            For long-distance relocations, custom fumigated timber framing creates a rigid protective cage around the motorcycle, safeguarding handlebars, fuel tanks, and custom exhausts.
          </p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border-radius: 12px; padding: 30px; border: 1px solid rgba(255,255,255,0.08);">
          <div style="width: 50px; height: 50px; border-radius: 10px; background: rgba(245, 158, 11, 0.15); color: #f59e0b; display: flex; align-items: center; justify-content: center; font-size: 1.4rem; margin-bottom: 20px;">
            <i class="fas fa-anchor"></i>
          </div>
          <h3 style="font-size: 1.25rem; font-weight: 700; color: #ffffff; margin-bottom: 12px;">4-Point Chassis Strapping</h3>
          <p style="color: #94a3b8; font-size: 0.95rem; line-height: 1.7;">
            Heavy-duty nylon ratchet tie-down belts lock the front forks and rear shock absorbers directly to container floor anchors, maintaining stability during sharp turns and braking.
          </p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border-radius: 12px; padding: 30px; border: 1px solid rgba(255,255,255,0.08);">
          <div style="width: 50px; height: 50px; border-radius: 10px; background: rgba(245, 158, 11, 0.15); color: #f59e0b; display: flex; align-items: center; justify-content: center; font-size: 1.4rem; margin-bottom: 20px;">
            <i class="fas fa-file-invoice-dollar"></i>
          </div>
          <h3 style="font-size: 1.15rem; font-weight: 700; color: #ffffff; margin-bottom: 12px;">100% Full Value Transit Cover</h3>
          <p style="color: #94a3b8; font-size: 0.95rem; line-height: 1.7;">
            Comprehensive insurance covering the declared vehicle value against transit accidents, natural calamities, or unforeseen hazards, ensuring total financial peace of mind.
          </p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border-radius: 12px; padding: 30px; border: 1px solid rgba(255,255,255,0.08);">
          <div style="width: 50px; height: 50px; border-radius: 10px; background: rgba(245, 158, 11, 0.15); color: #f59e0b; display: flex; align-items: center; justify-content: center; font-size: 1.4rem; margin-bottom: 20px;">
            <i class="fas fa-map-marked-alt"></i>
          </div>
          <h3 style="font-size: 1.25rem; font-weight: 700; color: #ffffff; margin-bottom: 12px;">Door-to-Door Convenience</h3>
          <p style="color: #94a3b8; font-size: 0.95rem; line-height: 1.7;">
            Complete door-to-door service with doorstep pickup, pre-loading photographic inspection report, real-time GPS tracking, and destination unboxing assistance.
          </p>
        </div>

      </div>
    </div>
  </section>

  <!-- Section 5: 7-Layer Packaging Standard -->
  <section style="padding: 60px 0; background: #0b132b;">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
      
      <div style="text-align: center; margin-bottom: 45px;">
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin-bottom: 12px;">
          7-Layer Bullet &amp; Heavy Bike Packaging Protocol
        </h2>
        <p style="color: #94a3b8; font-size: 1rem; max-width: 700px; margin: 0 auto;">
          Our specialized multi-tier wrapping system engineered specifically for Royal Enfield body panels and chrome accessories.
        </p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 20px;">
        
        <div style="background: #1c2541; padding: 25px; border-radius: 12px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #ffffff; font-size: 1.1rem; font-weight: 700; margin-bottom: 8px;">Layer 1: Pre-Wrap Inspection &amp; Photo Mapping</h4>
          <p style="color: #94a3b8; font-size: 0.9rem; margin: 0;">Detailed photographic condition mapping of fuel tank lacquer, chrome fins, odometer reading, and existing accessories.</p>
        </div>

        <div style="background: #1c2541; padding: 25px; border-radius: 12px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #ffffff; font-size: 1.1rem; font-weight: 700; margin-bottom: 8px;">Layer 2: Soft Microfiber Inner Foam Film</h4>
          <p style="color: #94a3b8; font-size: 0.9rem; margin: 0;">Non-abrasive inner foam lining wrapped directly over glossy fuel tanks, side shields, and painted mudguards.</p>
        </div>

        <div style="background: #1c2541; padding: 25px; border-radius: 12px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #ffffff; font-size: 1.1rem; font-weight: 700; margin-bottom: 8px;">Layer 3: 80 GSM High-Density Bubble Wrap</h4>
          <p style="color: #94a3b8; font-size: 0.9rem; margin: 0;">Dense impact-absorbing bubble cushioning wrapped around long silencer exhausts, engine crash guards, and front forks.</p>
        </div>

        <div style="background: #1c2541; padding: 25px; border-radius: 12px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #ffffff; font-size: 1.1rem; font-weight: 700; margin-bottom: 8px;">Layer 4: Corrugated Fibreboard Armoring</h4>
          <p style="color: #94a3b8; font-size: 0.9rem; margin: 0;">Heavy corrugated cardboard sheets molded around round headlamps, indicator stalks, handlebars, and tail assemblies.</p>
        </div>

        <div style="background: #1c2541; padding: 25px; border-radius: 12px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #ffffff; font-size: 1.1rem; font-weight: 700; margin-bottom: 8px;">Layer 5: Industrial Weatherproof Stretch Wrap</h4>
          <p style="color: #94a3b8; font-size: 0.9rem; margin: 0;">High-tension outer stretch wrap sealing all protective layers tight against road moisture, dust, and highway vibration.</p>
        </div>

        <div style="background: #1c2541; padding: 25px; border-radius: 12px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #ffffff; font-size: 1.1rem; font-weight: 700; margin-bottom: 8px;">Layer 6: Floor Wheel Chocks &amp; Ratchet Straps</h4>
          <p style="color: #94a3b8; font-size: 0.9rem; margin: 0;">Securing motorcycle wheels into heavy floor chocks inside container trucks using 4-point industrial ratchet belts.</p>
        </div>

      </div>
    </div>
  </section>

  <!-- Section 6: Documents & GST Compliance -->
  <section style="padding: 60px 0; background: #1c2541;">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
      
      <div style="text-align: center; margin-bottom: 45px;">
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin-bottom: 12px;">
          IBA Approved GST Billing &amp; Documentation Checklist
        </h2>
        <p style="color: #94a3b8; font-size: 1rem; max-width: 700px; margin: 0 auto;">
          Full legal compliance for military, defence, government, and corporate relocation claims.
        </p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 25px;">
        <div style="background: rgba(255,255,255,0.03); padding: 25px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.08);">
          <h3 style="font-size: 1.15rem; color: #f59e0b; font-weight: 700; margin-bottom: 10px;">Mandatory Vehicle Documents</h3>
          <ul style="color: #cbd5e1; font-size: 0.9rem; line-height: 1.8; padding-left: 20px; margin: 0;">
            <li>Vehicle Registration Certificate (RC Copy)</li>
            <li>Valid Insurance Policy Copy</li>
            <li>Owner Photo ID (Aadhaar / PAN Card / Driving License)</li>
            <li>Keys &amp; Vehicle Handover Inspection Receipt</li>
          </ul>
        </div>

        <div style="background: rgba(255,255,255,0.03); padding: 25px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.08);">
          <h3 style="font-size: 1.15rem; color: #f59e0b; font-weight: 700; margin-bottom: 10px;">Official Invoice &amp; Release Pack</h3>
          <ul style="color: #cbd5e1; font-size: 0.9rem; line-height: 1.8; padding-left: 20px; margin: 0;">
            <li>IBA Approved Consignment Note (LR Copy)</li>
            <li>Itemized 18% GST Tax Invoice Bill</li>
            <li>Official Money Receipt with Company Stamp</li>
            <li>Pre-Delivery Condition Inspection Slip</li>
          </ul>
        </div>
      </div>

    </div>
  </section>

  <!-- Section 7: FAQs Section -->
  <section style="padding: 60px 0; background: #0b132b;">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
      
      <div style="text-align: center; margin-bottom: 45px;">
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin-bottom: 12px;">
          Frequently Asked Questions (Royal Enfield Bullet Transport)
        </h2>
        <p style="color: #94a3b8; font-size: 1rem; max-width: 700px; margin: 0 auto;">
          Clear answers to common questions about shipping heavy cruiser motorcycles across India.
        </p>
      </div>

      <div style="max-width: 900px; margin: 0 auto; display: grid; gap: 15px;">
        <?php foreach ($faq_list as $index => $faq): ?>
        <div style="background: #1c2541; padding: 20px 25px; border-radius: 10px; border: 1px solid rgba(255,255,255,0.05);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">
            Q<?php echo ($index + 1); ?>: <?php echo htmlspecialchars($faq['q']); ?>
          </h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.6; margin: 0;">
            <?php echo htmlspecialchars($faq['a']); ?>
          </p>
        </div>
        <?php endforeach; ?>
      </div>

    </div>
  </section>

  <!-- Section 8: Strategic Hub Internal Link Grid -->
  <section style="padding: 60px 0; background: #1c2541; border-top: 1px solid rgba(255,255,255,0.05);">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
      
      <div style="text-align: center; margin-bottom: 35px;">
        <h2 style="font-size: 1.8rem; font-weight: 800; color: #ffffff; margin-bottom: 10px;">
          Explore Specialized Bike Transport Services
        </h2>
        <p style="color: #94a3b8; font-size: 0.95rem;">
          Navigate to related motorcycle transport guides and regional relocation hubs.
        </p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 15px;">
        <a href="<?php echo SITE_URL; ?>/pages/bike-transport-scooty.php" style="padding: 14px 18px; background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 8px; color: #f59e0b; font-weight: 600; text-decoration: none; font-size: 0.9rem;">
          <i class="fas fa-motorcycle" style="margin-right: 8px;"></i> Scooty Transport Guide
        </a>
        <a href="<?php echo SITE_URL; ?>/pages/bike-transport-superbike.php" style="padding: 14px 18px; background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 8px; color: #f59e0b; font-weight: 600; text-decoration: none; font-size: 0.9rem;">
          <i class="fas fa-fighter-jet" style="margin-right: 8px;"></i> Superbike Shipping Guide
        </a>
        <a href="<?php echo SITE_URL; ?>/pages/bike-transport-electric.php" style="padding: 14px 18px; background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 8px; color: #f59e0b; font-weight: 600; text-decoration: none; font-size: 0.9rem;">
          <i class="fas fa-charging-station" style="margin-right: 8px;"></i> EV Bike Transport
        </a>
        <a href="<?php echo SITE_URL; ?>/pages/bike-transportation-cost.php" style="padding: 14px 18px; background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 8px; color: #f59e0b; font-weight: 600; text-decoration: none; font-size: 0.9rem;">
          <i class="fas fa-calculator" style="margin-right: 8px;"></i> Bike Transport Cost Guide
        </a>
        <a href="<?php echo SITE_URL; ?>/pages/bike-transportation-process.php" style="padding: 14px 18px; background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 8px; color: #f59e0b; font-weight: 600; text-decoration: none; font-size: 0.9rem;">
          <i class="fas fa-cogs" style="margin-right: 8px;"></i> Shifting Process Guide
        </a>
        <a href="<?php echo SITE_URL; ?>/pages/bike-transport-dirt-quad.php" style="padding: 14px 18px; background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 8px; color: #f59e0b; font-weight: 600; text-decoration: none; font-size: 0.9rem;">
          <i class="fas fa-mountain" style="margin-right: 8px;"></i> Dirt &amp; ATV Quad Transport
        </a>
        <a href="<?php echo SITE_URL; ?>/pages/packers-and-movers-patna.php" style="padding: 14px 18px; background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 8px; color: #f59e0b; font-weight: 600; text-decoration: none; font-size: 0.9rem;">
          <i class="fas fa-city" style="margin-right: 8px;"></i> Packers &amp; Movers Patna
        </a>
        <a href="<?php echo SITE_URL; ?>/pages/bike-transportation-delhi-to-patna.php" style="padding: 14px 18px; background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 8px; color: #f59e0b; font-weight: 600; text-decoration: none; font-size: 0.9rem;">
          <i class="fas fa-route" style="margin-right: 8px;"></i> Delhi to Patna Bike Shifting
        </a>
      </div>

    </div>
  </section>

  <!-- Section 9: High-Conversion CTA Footer -->
  <section style="padding: 50px 0; background: linear-gradient(135deg, #1c2541 0%, #0b132b 100%); text-align: center; border-top: 1px solid rgba(245, 158, 11, 0.2);">
    <div class="container" style="max-width: 900px; margin: 0 auto; padding: 0 20px;">
      <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin-bottom: 15px;">
        Book Royal Enfield Bullet Transport Today
      </h2>
      <p style="font-size: 1.05rem; color: #cbd5e1; margin-bottom: 30px;">
        Get instant quotes, heavy bike hydraulic loading ramps, and 100% insured door-to-door delivery across India.
      </p>

      <div style="display: flex; gap: 15px; justify-content: center; flex-wrap: wrap;">
        <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Representative" style="padding: 15px 35px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
          <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call <?php echo SITE_PHONE; ?>
        </a>
        <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20to%20book%20Royal%20Enfield%20Bullet%20transport." title="WhatsApp Booking" target="_blank" style="padding: 15px 35px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
          <i class="fab fa-whatsapp" style="margin-right: 8px;"></i> WhatsApp Quick Booking
        </a>
      </div>
    </div>
  </section>

</main>

<script>
function sendHeroWhatsAppLead(event, form) {
  event.preventDefault();
  var name = form.querySelector('[name="name"]').value;
  var phone = form.querySelector('[name="phone"]').value;
  var moveFrom = form.querySelector('[name="move_from"]').value;
  var moveTo = form.querySelector('[name="move_to"]').value;
  
  var message = "Hello Shree Ashirwad Packers & Movers,\n\nI would like to request a Royal Enfield Bullet Transport Quote:\n- Name: " + name + "\n- Phone: " + phone + "\n- Pickup City: " + moveFrom + "\n- Destination City: " + moveTo;
  
  var whatsappUrl = "https://api.whatsapp.com/send?phone=918409531615&text=" + encodeURIComponent(message);
  window.location.href = whatsappUrl;
}
</script>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>

