<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "Bike Movers and Packers in Patna | Crated Two-Wheeler Transport";
$page_desc = "Top-rated bike movers and packers in Patna. Shree Ashirwad Packers offers 7-layer bubble packaging, custom wooden crating, transit insurance, and doorstep pickup across Boring Road, Kankarbagh, Danapur, Patliputra. Call 8409531615.";
$page_keywords = "bike movers and packers in patna, bike packers patna, motorcycle shifting patna, two wheeler transport patna, crated bike shifting patna, patna transport, delhi to patna transport, bike transport service, bike transport cost, bike transport by train, railway bike transport charges";
$canonical_url = "https://shreeashirwadpackersandmovers.com/pages/bike-movers-and-packers-in-patna.php";

$faq_list = [
    ['q' => 'How are motorcycles packed safely for transport by bike movers in Patna?', 'a' => 'Bikes are packed using 7 layers of heavy-duty bubble wrap, corrugated sheets, foam corner guards, and stretch film, then secured inside covered container trucks or custom wooden crates.'],
    ['q' => 'What are the bike relocation charges from Patna to major cities?', 'a' => 'Local bike transfer within Patna costs ₹1,500–₹2,500, intercity bike transport up to 500 km ranges from ₹3,000–₹4,800, and long-distance transport (Patna to Delhi, Bangalore, or Mumbai) costs ₹4,800–₹8,500.'],
    ['q' => 'Is doorstep motorcycle pickup and delivery available across Patna?', 'a' => 'Yes, our professional team provides doorstep pickup and delivery across Boring Road, Kankarbagh, Danapur, Bailey Road, Patliputra, Ashiana Nagar, Exhibition Road, Rajendra Nagar, Anisabad, and Bihta.'],
    ['q' => 'What documents are required to book bike movers and packers in Patna?', 'a' => 'Required documents include a photocopy of the vehicle Registration Certificate (RC), valid insurance policy, owner ID proof (Aadhaar or PAN card), and signed delivery authorization.'],
    ['q' => 'Should the petrol tank be empty before bike transport?', 'a' => 'Yes, fuel should be reduced to less than 1 liter (or completely drained) as per central logistics safety guidelines.'],
    ['q' => 'Do you provide transit insurance for bike transportation from Patna?', 'a' => 'Yes, full-value transit risk insurance (0.3% of declared bike valuation) is issued to protect your vehicle against any road transit damage.'],
    ['q' => 'Do you provide IBA-approved GST bills for bike transport reimbursement?', 'a' => 'Yes, 100% genuine IBA-approved GST invoices with SAC Code 996511 and LR consignment notes are provided for employee relocation claims.'],
    ['q' => 'How long does intercity bike shipping take from Patna?', 'a' => 'Regional transit to nearby cities (Ranchi, Kolkata, Varanasi) takes 24–48 hours, while long-distance transport to metros like Delhi, Bangalore, Mumbai, or Pune takes 3 to 5 days.'],
    ['q' => 'Can sports bikes and premium motorcycles (Royal Enfield, BMW, KTM) be safely shipped?', 'a' => 'Yes, we specialize in premium motorcycle shipping using front-wheel lock chocks, 4-point industrial ratchet straps, and optional wooden crating.'],
    ['q' => 'How can I get an instant price quotation for bike transport in Patna?', 'a' => 'Call +91 8409531615 or submit your pickup locality and destination city on WhatsApp for an immediate price-matched quotation.']
];

require_once __DIR__ . '/../includes/header.php';
?>

<main class="site-main">

  <!-- 1. Visual Breadcrumb Navigation Bar -->
  <div class="breadcrumb-wrapper">
    <div class="container">
      <div class="breadcrumb-list">
        <span class="breadcrumb-item"><a href="<?php echo SITE_URL; ?>" title="Home">Home</a></span>
        <span class="breadcrumb-separator">/</span>
        <span class="breadcrumb-item active">Bike Movers and Packers in Patna</span>
      </div>
    </div>
  </div>

  <!-- 2. Hero Section & Instant WhatsApp Lead Form -->
  <section class="hero-section" style="background: linear-gradient(135deg, #0b132b 0%, #1c2541 100%); padding: 60px 0; color: #ffffff;">
    <div class="container">
      <div class="hero-grid" style="display: grid; grid-template-columns: 1.2fr 0.8fr; gap: 40px; align-items: center;">
        
        <!-- Hero Text Column -->
        <div class="hero-text">
          <span class="section-tag" style="background: rgba(245, 158, 11, 0.15); color: #f59e0b; border: 1px solid rgba(245, 158, 11, 0.4); padding: 6px 16px; border-radius: 20px; font-size: 0.85rem; font-weight: 700; text-transform: uppercase; display: inline-block; margin-bottom: 15px;">
            PATNA BIKE TRANSPORT SPECIALISTS
          </span>
          <h1 style="font-size: 2.6rem; font-weight: 800; line-height: 1.2; margin-bottom: 20px; color: #ffffff;">
            Professional <span style="color: #f59e0b;">Bike Movers & Packers in Patna</span>
          </h1>
          <p style="font-size: 1.05rem; color: #cbd5e1; line-height: 1.7; margin-bottom: 25px;">
            Shree Ashirwad Packers and Movers provides safe, zero-scratch two-wheeler and motorcycle transport in Patna. Enjoy 7-layer bubble packaging, custom wooden crating, full transit insurance, and doorstep pickup across Boring Road, Kankarbagh, Danapur, Patliputra, and all Patna sectors.
          </p>

          <div style="display: flex; gap: 15px; flex-wrap: wrap; margin-bottom: 30px;">
            <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Patna Desk" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
              <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call Patna Desk: <?php echo SITE_PHONE; ?>
            </a>
            <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20a%20Bike%20Movers%20quote%20for%20Patna." title="Chat on WhatsApp" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
              <i class="fab fa-whatsapp" style="margin-right: 8px;"></i> Chat on WhatsApp
            </a>
          </div>

          <div style="display: flex; gap: 20px; font-size: 0.9rem; color: #94a3b8;">
            <span><strong style="color: #f59e0b;">Custom Wooden</strong> Crating</span>
            <span><strong style="color: #f59e0b;">Zero Scratch</strong> Guarantee</span>
            <span><strong style="color: #f59e0b;">IBA Approved</strong> GST Bill</span>
          </div>
        </div>

        <!-- Hero Lead Form Column -->
        <div class="hero-form-card" style="background: rgba(255, 255, 255, 0.05); backdrop-filter: blur(10px); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 16px; padding: 30px; box-shadow: 0 15px 35px rgba(0,0,0,0.4);">
          <h2 style="font-size: 1.4rem; color: #ffffff; margin-bottom: 8px; font-weight: 700; text-align: center;">Get Bike Transport Quote</h2>
          <p style="font-size: 0.85rem; color: #94a3b8; text-align: center; margin-bottom: 20px;">Receive instant transparent price on WhatsApp</p>

          <form action="#" method="POST" onsubmit="sendHeroWhatsAppLead(event, this);">
            <div style="margin-bottom: 14px;">
              <input type="text" name="name" class="form-control" placeholder="Your Full Name" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="margin-bottom: 14px;">
              <input type="tel" name="phone" class="form-control" placeholder="10-Digit WhatsApp Mobile Number" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 10px; margin-bottom: 14px;">
              <input type="text" name="move_from" class="form-control" placeholder="Patna Locality" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
              <input type="text" name="move_to" class="form-control" placeholder="Destination City" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="margin-bottom: 16px;">
              <textarea name="message" class="form-control" rows="2" placeholder="Bike Model (e.g. Royal Enfield 350 / Activa / Apache)" style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;"></textarea>
            </div>
            <button type="submit" class="btn btn-primary" style="width: 100%; padding: 14px; font-weight: 700; font-size: 1rem; border-radius: 8px;">
              Get Instant Estimate Now &rarr;
            </button>
          </form>
        </div>

      </div>
    </div>
  </section>

  <!-- 3. Key Stats Counter Bar -->
  <section class="stats-section" style="padding: 45px 0; background: #070d1e; border-bottom: 1px solid rgba(245, 158, 11, 0.2);">
    <div class="container">
      <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 20px; text-align: center;">
        <div style="padding: 20px; background: rgba(23, 42, 84, 0.5); border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">₹1,500+</div>
          <div style="font-size: 0.9rem; color: #cbd5e1; margin-top: 5px;">Starting Local Patna Shifting</div>
        </div>
        <div style="padding: 20px; background: rgba(23, 42, 84, 0.5); border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">100% Covered</div>
          <div style="font-size: 0.9rem; color: #cbd5e1; margin-top: 5px;">Container Logistics Fleet</div>
        </div>
        <div style="padding: 20px; background: rgba(23, 42, 84, 0.5); border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">7-Layer</div>
          <div style="font-size: 0.9rem; color: #cbd5e1; margin-top: 5px;">Scratch-Proof Packing</div>
        </div>
        <div style="padding: 20px; background: rgba(23, 42, 84, 0.5); border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">0.3% Insured</div>
          <div style="font-size: 0.9rem; color: #cbd5e1; margin-top: 5px;">Full Transit Risk Coverage</div>
        </div>
      </div>
    </div>
  </section>

  <!-- 4. 6-Card Feature Grid (3x2 Layout) -->
  <section style="padding: 65px 0; background: #0b132b; color: #e2e8f0; line-height: 1.8;">
    <div class="container">
      
      <div style="max-width: 950px; margin: 0 auto;">
        <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Logistics Excellence</span>
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin: 10px 0 20px 0;">
          Why Choose Us as Your <span style="color: #f59e0b;">Bike Movers in Patna</span>
        </h2>

        <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px; margin: 30px 0;">
          
          <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px;">
            <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;"><i class="fas fa-box-open"></i></div>
            <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">Custom Wooden Crating</h3>
            <p style="font-size: 0.9rem; color: #cbd5e1; margin: 0;">
              Optional rigid wooden frame crating for premium sports bikes, Bullet 350, and vintage motorcycles.
            </p>
          </div>

          <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px;">
            <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;"><i class="fas fa-layer-group"></i></div>
            <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">7-Layer Protection</h3>
            <p style="font-size: 0.9rem; color: #cbd5e1; margin: 0;">
              Heavy bubble wrapping, corrugated sheets, engine foam padding, and moisture barrier stretch wrap.
            </p>
          </div>

          <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px;">
            <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;"><i class="fas fa-truck-pickup"></i></div>
            <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">Doorstep Pickup Across Patna</h3>
            <p style="font-size: 0.9rem; color: #cbd5e1; margin: 0;">
              Pickup available from Boring Road, Kankarbagh, Danapur, Patliputra, Bailey Road &amp; Rajendra Nagar.
            </p>
          </div>

          <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px;">
            <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;"><i class="fas fa-shield-alt"></i></div>
            <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">Full Transit Insurance</h3>
            <p style="font-size: 0.9rem; color: #cbd5e1; margin: 0;">
              0.3% comprehensive policy covering full vehicle valuation against road mishaps during transit.
            </p>
          </div>

          <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px;">
            <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;"><i class="fas fa-truck-moving"></i></div>
            <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">Closed Container Fleet</h3>
            <p style="font-size: 0.9rem; color: #cbd5e1; margin: 0;">
              All-weather covered container trucks preventing rain, dust, and highway vibration damage.
            </p>
          </div>

          <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px;">
            <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;"><i class="fas fa-file-invoice"></i></div>
            <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">IBA Approved GST Bills</h3>
            <p style="font-size: 0.9rem; color: #cbd5e1; margin: 0;">
              Official GST invoices suitable for Govt, Defence, Bank, PSU &amp; Corporate claim reimbursement.
            </p>
          </div>

        </div>

      </div>

    </div>
  </section>

  <!-- 5. Transparent Pricing Table -->
  <section style="padding: 60px 0; background: #070d1e; color: #ffffff;">
    <div class="container" style="max-width: 950px;">
      
      <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Pricing Matrix</span>
      <h2 style="font-size: 2.1rem; font-weight: 800; color: #ffffff; margin: 10px 0 25px 0;">
        Estimated Bike Transportation Rates from Patna
      </h2>

      <div style="overflow-x: auto; margin-bottom: 30px;">
        <table style="width: 100%; border-collapse: collapse; background: #101c40; border-radius: 12px; overflow: hidden; font-size: 0.95rem;">
          <thead>
            <tr style="background: #172a54; color: #f59e0b; text-align: left;">
              <th style="padding: 16px; border-bottom: 2px solid rgba(245,158,11,0.3);">Two-Wheeler Category</th>
              <th style="padding: 16px; border-bottom: 2px solid rgba(245,158,11,0.3);">Local Within Patna</th>
              <th style="padding: 16px; border-bottom: 2px solid rgba(245,158,11,0.3);">Up to 500 km (Ranchi / Kolkata)</th>
              <th style="padding: 16px; border-bottom: 2px solid rgba(245,158,11,0.3);">Long Distance (Delhi / Bangalore)</th>
            </tr>
          </thead>
          <tbody>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.08);">
              <td style="padding: 14px 16px; font-weight: 700; color: #ffffff;">Scooters (Activa, Jupiter, Access)</td>
              <td style="padding: 14px 16px; color: #6ee7b7; font-weight: 700;">₹1,500 - ₹2,200</td>
              <td style="padding: 14px 16px; color: #6ee7b7; font-weight: 700;">₹2,800 - ₹4,200</td>
              <td style="padding: 14px 16px; color: #6ee7b7; font-weight: 700;">₹4,500 - ₹6,500</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.08);">
              <td style="padding: 14px 16px; font-weight: 700; color: #ffffff;">Commuter Bikes (100cc - 150cc)</td>
              <td style="padding: 14px 16px; color: #6ee7b7; font-weight: 700;">₹1,800 - ₹2,500</td>
              <td style="padding: 14px 16px; color: #6ee7b7; font-weight: 700;">₹3,200 - ₹4,800</td>
              <td style="padding: 14px 16px; color: #6ee7b7; font-weight: 700;">₹4,800 - ₹7,200</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.08);">
              <td style="padding: 14px 16px; font-weight: 700; color: #ffffff;">Sports / Cruiser (Bullet, KTM, Java)</td>
              <td style="padding: 14px 16px; color: #6ee7b7; font-weight: 700;">₹2,200 - ₹3,200</td>
              <td style="padding: 14px 16px; color: #6ee7b7; font-weight: 700;">₹4,000 - ₹5,800</td>
              <td style="padding: 14px 16px; color: #6ee7b7; font-weight: 700;">₹5,800 - ₹8,500</td>
            </tr>
            <tr>
              <td style="padding: 14px 16px; font-weight: 700; color: #ffffff;">Superbikes / Rigid Wooden Crate</td>
              <td style="padding: 14px 16px; color: #6ee7b7; font-weight: 700;">₹3,500 - ₹5,000</td>
              <td style="padding: 14px 16px; color: #6ee7b7; font-weight: 700;">₹6,000 - ₹8,500</td>
              <td style="padding: 14px 16px; color: #6ee7b7; font-weight: 700;">₹9,500 - ₹14,000</td>
            </tr>
          </tbody>
        </table>
      </div>

    </div>
  </section>

  <!-- 6. 7-Layer Bike Safety Protocol -->
  <section style="padding: 60px 0; background: #0b132b; color: #ffffff;">
    <div class="container" style="max-width: 950px;">
      
      <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Safety Protocol</span>
      <h2 style="font-size: 2.1rem; font-weight: 800; color: #ffffff; margin: 10px 0 25px 0;">
        Our 7-Layer Bike Packaging &amp; Crating Protocol
      </h2>

      <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 15px;">
        <div style="background: #172a54; padding: 18px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <div style="font-size: 0.8rem; color: #f59e0b; font-weight: 700;">STEP 01</div>
          <h4 style="font-size: 0.95rem; color: #fff; margin: 4px 0;">Inspection &amp; Fuel Audit</h4>
          <p style="font-size: 0.82rem; color: #cbd5e1; margin: 0;">Physical scratch inspection &amp; fuel draining for safety compliance.</p>
        </div>

        <div style="background: #172a54; padding: 18px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <div style="font-size: 0.8rem; color: #f59e0b; font-weight: 700;">STEP 02</div>
          <h4 style="font-size: 0.95rem; color: #fff; margin: 4px 0;">Bubble Wrap Layer</h4>
          <p style="font-size: 0.82rem; color: #cbd5e1; margin: 0;">Wrapping fuel tank, fairings, side panels &amp; mudguards in heavy bubble wrap.</p>
        </div>

        <div style="background: #172a54; padding: 18px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <div style="font-size: 0.8rem; color: #f59e0b; font-weight: 700;">STEP 03</div>
          <h4 style="font-size: 0.95rem; color: #fff; margin: 4px 0;">Corrugated Sheet Armor</h4>
          <p style="font-size: 0.82rem; color: #cbd5e1; margin: 0;">Encasing headlights, mirrors, exhaust &amp; indicators in heavy corrugated sheets.</p>
        </div>

        <div style="background: #172a54; padding: 18px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <div style="font-size: 0.8rem; color: #f59e0b; font-weight: 700;">STEP 04</div>
          <h4 style="font-size: 0.95rem; color: #fff; margin: 4px 0;">Waterproof Stretch Film</h4>
          <p style="font-size: 0.82rem; color: #cbd5e1; margin: 0;">Tightly wrapping moisture barrier stretch film around bike body.</p>
        </div>

        <div style="background: #172a54; padding: 18px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <div style="font-size: 0.8rem; color: #f59e0b; font-weight: 700;">STEP 05</div>
          <h4 style="font-size: 0.8rem; color: #f59e0b; font-weight: 700;">Hydraulic Ramp Loading</h4>
          <p style="font-size: 0.82rem; color: #cbd5e1; margin: 0;">Guiding bike up non-slip hydraulic ramp into covered container truck bed.</p>
        </div>

        <div style="background: #172a54; padding: 18px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <div style="font-size: 0.8rem; color: #f59e0b; font-weight: 700;">STEP 06</div>
          <h4 style="font-size: 0.95rem; color: #fff; margin: 4px 0;">Chock &amp; Strap Anchoring</h4>
          <p style="font-size: 0.82rem; color: #cbd5e1; margin: 0;">Locking front wheel in steel chock + 4-point industrial ratchet straps.</p>
        </div>

        <div style="background: #172a54; padding: 18px; border-radius: 10px; border-left: 4px solid #f59e0b; grid-column: span 2;">
          <div style="font-size: 0.8rem; color: #f59e0b; font-weight: 700;">STEP 07</div>
          <h4 style="font-size: 0.95rem; color: #fff; margin: 4px 0;">Doorstep Unpacking &amp; Handover</h4>
          <p style="font-size: 0.82rem; color: #cbd5e1; margin: 0;">Unpacking &amp; physical condition verification prior to final handover signature.</p>
        </div>
      </div>

    </div>
  </section>

  <!-- 7. Patna Localities Covered -->
  <section style="padding: 60px 0; background: #070d1e; color: #ffffff;">
    <div class="container" style="max-width: 900px;">
      
      <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Coverage Area</span>
      <h2 style="font-size: 2.1rem; font-weight: 800; color: #ffffff; margin: 10px 0 20px 0;">
        Serving All Major <span style="color: #f59e0b;">Patna Localities</span>
      </h2>

      <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 16px; margin-bottom: 25px;">
        <div style="background: #101c40; padding: 16px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #f59e0b; font-size: 1rem; margin-bottom: 4px;">Central Patna</h4>
          <p style="font-size: 0.85rem; color: #94a3b8; margin: 0;">Boring Road, Exhibition Road, Frazer Road, Gandhi Maidan.</p>
        </div>

        <div style="background: #101c40; padding: 16px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #f59e0b; font-size: 1rem; margin-bottom: 4px;">East Patna</h4>
          <p style="font-size: 0.85rem; color: #94a3b8; margin: 0;">Kankarbagh, Rajendra Nagar, Kumhrar, Patna City.</p>
        </div>

        <div style="background: #101c40; padding: 16px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #f59e0b; font-size: 1rem; margin-bottom: 4px;">West Patna</h4>
          <p style="font-size: 0.85rem; color: #94a3b8; margin: 0;">Bailey Road, Patliputra Colony, Ashiana Nagar, Raja Bazar.</p>
        </div>

        <div style="background: #101c40; padding: 16px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #f59e0b; font-size: 1rem; margin-bottom: 4px;">South Patna</h4>
          <p style="font-size: 0.85rem; color: #94a3b8; margin: 0;">Anisabad, Phulwari Sharif, Gardanibagh, Airport Road.</p>
        </div>

        <div style="background: #101c40; padding: 16px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #f59e0b; font-size: 1rem; margin-bottom: 4px;">Suburban Express Hubs</h4>
          <p style="font-size: 0.85rem; color: #94a3b8; margin: 0;">Danapur Cantt, Saguna More, Bihta, Gola Road.</p>
        </div>

        <div style="background: #101c40; padding: 16px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #f59e0b; font-size: 1rem; margin-bottom: 4px;">Industrial &amp; Outskirts</h4>
          <p style="font-size: 0.85rem; color: #94a3b8; margin: 0;">Fatuha, Hajipur, Didarganj, Zero Mile.</p>
        </div>
      </div>

    </div>
  </section>

  <!-- 8. Popular Intercity Routes from Patna -->
  <section style="padding: 60px 0; background: #0b132b; color: #ffffff;">
    <div class="container" style="max-width: 900px;">
      
      <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Route Network</span>
      <h2 style="font-size: 2.1rem; font-weight: 800; color: #ffffff; margin: 10px 0 20px 0;">
        Popular Intercity Bike Shipping Corridors from Patna
      </h2>

      <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 16px; margin-bottom: 25px;">
        <div style="background: #172a54; padding: 18px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #ffffff; font-size: 1.05rem; margin-bottom: 6px;">Patna to Delhi NCR / Noida / Gurugram</h4>
          <p style="font-size: 0.88rem; color: #94a3b8; margin: 0;">Daily container truck departures with 3-day doorstep delivery.</p>
        </div>

        <div style="background: #172a54; padding: 18px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #ffffff; font-size: 1.05rem; margin-bottom: 6px;">Patna to Ranchi / Jamshedpur / Dhanbad</h4>
          <p style="font-size: 0.88rem; color: #94a3b8; margin: 0;">24-hour express container transport with 0.3% transit insurance.</p>
        </div>

        <div style="background: #172a54; padding: 18px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #ffffff; font-size: 1.05rem; margin-bottom: 6px;">Patna to Kolkata / Siliguri / Guwahati</h4>
          <p style="font-size: 0.88rem; color: #94a3b8; margin: 0;">East India trunk route logistics with direct GPS tracking.</p>
        </div>

        <div style="background: #172a54; padding: 18px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #ffffff; font-size: 1.05rem; margin-bottom: 6px;">Patna to Bengaluru / Pune / Mumbai</h4>
          <p style="font-size: 0.88rem; color: #94a3b8; margin: 0;">Long-distance sealed vehicle carrier shipping with 4 to 5 day transit time.</p>
        </div>
      </div>

    </div>
  </section>

  <!-- 9. Official Claims Documentation -->
  <section style="padding: 60px 0; background: #070d1e; color: #ffffff;">
    <div class="container" style="max-width: 900px;">
      
      <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Official Documentation</span>
      <h2 style="font-size: 2.1rem; font-weight: 800; color: #ffffff; margin: 10px 0 20px 0;">
        IBA Approved GST Billing &amp; Freight Documentation
      </h2>

      <div style="background: #101c40; border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 12px; padding: 25px;">
        <h4 style="color: #f59e0b; font-size: 1.1rem; margin-bottom: 12px; font-weight: 700;">Complete Trackable Relocation Claim Package:</h4>
        <ol style="margin: 0; padding-left: 20px; color: #cbd5e1; line-height: 1.8; font-size: 0.95rem;">
          <li><strong>Itemized GST Freight Invoice</strong> with SAC Code 996511 listing freight charges.</li>
          <li><strong>Pre-Loading Vehicle Condition Audit Form</strong>.</li>
          <li><strong>Consignment Lorry Receipt (LR Copy)</strong> with trackable 10-digit number.</li>
          <li><strong>IBA Approved Registration Code &amp; Official Stamp</strong>.</li>
          <li><strong>Full Transit Risk Insurance Certificate</strong>.</li>
          <li><strong>Official Money Receipt</strong> for 100% claim reimbursement.</li>
        </ol>
      </div>

    </div>
  </section>

  <!-- 10. 10 Detailed FAQs + Valid JSON-LD FAQPage Schema -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "mainEntity": [
      <?php 
      $schema_items = [];
      foreach ($faq_list as $faq) {
          $schema_items[] = '{
            "@type": "Question",
            "name": ' . json_encode($faq['q']) . ',
            "acceptedAnswer": {
              "@type": "Answer",
              "text": ' . json_encode($faq['a']) . '
            }
          }';
      }
      echo implode(',', $schema_items);
      ?>
    ]
  }
  </script>

  <section style="padding: 60px 0; background: #0b132b; color: #ffffff;">
    <div class="container" style="max-width: 900px;">
      
      <div class="section-header text-center" style="margin-bottom: 40px;">
        <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Got Questions?</span>
        <h2 style="font-size: 2.1rem; font-weight: 800; color: #ffffff; margin-top: 10px;">
          Frequently Asked Questions About <span style="color: #f59e0b;">Bike Movers Patna</span>
        </h2>
      </div>

      <div style="display: flex; flex-direction: column; gap: 14px;">
        <?php foreach ($faq_list as $idx => $faq): ?>
          <div style="background: #101c40; padding: 20px 24px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
            <h3 style="font-size: 1.05rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Q<?php echo ($idx + 1); ?>: <?php echo htmlspecialchars($faq['q']); ?></h3>
            <p style="font-size: 0.92rem; color: #cbd5e1; margin: 0; line-height: 1.7;">
              <?php echo htmlspecialchars($faq['a']); ?>
            </p>
          </div>
        <?php endforeach; ?>
      </div>

    </div>
  </section>

  <!-- 11. Call-To-Action (CTA) Conversion Footer -->
  <section style="padding: 60px 0; background: linear-gradient(135deg, #172a54 0%, #0b132b 100%); border-top: 1.5px solid rgba(245, 158, 11, 0.4); color: #ffffff;">
    <div class="container" style="max-width: 900px; text-align: center;">
      
      <span class="section-tag" style="background: rgba(245, 158, 11, 0.2); color: #f59e0b; padding: 6px 16px; border-radius: 20px; font-size: 0.85rem; font-weight: 700; text-transform: uppercase;">
        Book Bike Movers &amp; Packers in Patna
      </span>

      <h2 style="font-size: 2.2rem; font-weight: 800; margin: 15px 0 15px 0; color: #ffffff;">
        Ready for <span style="color: #f59e0b;">Damage-Free Bike Transportation</span>?
      </h2>

      <p style="font-size: 1.05rem; color: #cbd5e1; max-width: 750px; margin: 0 auto 30px auto; line-height: 1.7;">
        Get your instant price estimate today! Free doorstep pickup across all Patna localities, 7-layer bubble wrapping, and 100% insured container truck delivery.
      </p>

      <div style="display: flex; gap: 15px; justify-content: center; flex-wrap: wrap;">
        <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Patna Desk" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 30px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1.05rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
          <i class="fas fa-phone-alt"></i> Call Patna Desk: <?php echo SITE_PHONE; ?>
        </a>
        <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20a%20Bike%20Movers%20quote%20for%20Patna." title="Chat on WhatsApp" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 30px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1.05rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
          <i class="fab fa-whatsapp"></i> Chat on WhatsApp
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
  var extraMsg = form.querySelector('[name="message"]').value;
  
  var message = "Hello Shree Ashirwad Packers & Movers,\n\nI am requesting a Bike Movers Quote for Patna:\n- Name: " + name + "\n- Phone: " + phone + "\n- Pickup Locality in Patna: " + moveFrom + "\n- Destination City: " + moveTo;
  
  if (extraMsg && extraMsg.trim() !== '') {
    message += "\n- Bike Model: " + extraMsg;
  }
  
  var whatsappUrl = "https://api.whatsapp.com/send?phone=918409531615&text=" + encodeURIComponent(message);
  window.location.href = whatsappUrl;
}
</script>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
