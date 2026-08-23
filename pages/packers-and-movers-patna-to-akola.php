<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "Packers and Movers Patna to Akola | Safe Intercity Relocation";
$page_desc = "Hire certified packers and movers from Patna to Akola, Maharashtra. Shree Ashirwad Packers offers safe household shifting, bike transport, and car carrier services via NH-53 with 100% IBA GST bills & insurance.";
$page_keywords = "packers and movers patna to akola, best packers and movers patna to akola, house shifting patna to akola, bike transport patna to akola, car carrier patna to akola, shree ashirwad packers akola";
$canonical_url = "https://shreeashirwadpackersandmovers.com/pages/packers-and-movers-patna-to-akola.php";

$page_city = "Akola";

$faq_list = [
    [
        'q' => 'What are the charges for packers and movers from Patna to Akola?',
        'a' => 'Intercity shifting rates from Patna to Akola start from ₹13,500 to ₹24,500 for a 1 BHK, ₹21,500 to ₹34,000 for a 2 BHK, and ₹30,000 to ₹45,000 for a 3 BHK family house, depending on volume and transport vehicle.'
    ],
    [
        'q' => 'How long does goods delivery take from Patna to Akola?',
        'a' => 'The distance between Patna and Akola is approximately 1,120 km via Nagpur highway corridor. Covered container transit takes around 3 to 5 days for complete doorstep delivery.'
    ],
    [
        'q' => 'Do you provide IBA approved GST bills for official reimbursement?',
        'a' => 'Yes, we provide 100% genuine IBA-compliant GST tax invoices, consignment notes (LR), itemized inventory packing sheets, and payment receipts for corporate and government claim reimbursement.'
    ],
    [
        'q' => 'What protective packing materials are used for fragile goods?',
        'a' => 'We use 7-layer heavy corrugated boxes, 80-GSM air-bubble wrap, waterproof stretch films, foam corner cushions, and custom wooden crating for delicate electronics and glassware.'
    ],
    [
        'q' => 'Is bike and car transport available from Patna to Akola?',
        'a' => 'Yes, door-to-door two-wheeler and four-wheeler vehicle shipping is provided using specialized enclosed car carriers and hydraulic ramp loaders.'
    ],
    [
        'q' => 'Do you cover shifting across all localities in Akola?',
        'a' => 'Yes, we serve Akola city, Civil Lines, Ramdas Peth, Jowahar Nagar, Kaulkhed, Old City, and surrounding regions of Maharashtra.'
    ],
    [
        'q' => 'Is transit insurance included with intercity shifting to Akola?',
        'a' => 'Yes, full transit risk insurance coverage (1.5%) is provided to cover any unforeseen road mishaps, accidents, or environmental hazards.'
    ],
    [
        'q' => 'How do I schedule a pre-move survey in Patna for Akola shifting?',
        'a' => 'You can request a free home physical inspection or instant virtual video inventory survey by calling +91 8409531615 or submitting the WhatsApp form.'
    ],
    [
        'q' => 'What items are restricted during packing for long-distance transit?',
        'a' => 'Flammables, gas cylinders, liquid chemicals, batteries, cash, jewelry, and contraband substances are strictly prohibited.'
    ],
    [
        'q' => 'How can I book Packers and Movers Patna to Akola?',
        'a' => 'Call +91 8409531615 or submit your relocation details on our online WhatsApp lead form for an immediate binding quotation.'
    ]
];

require_once __DIR__ . '/../includes/header.php';
?>

<main class="site-main">

  <!-- Section 1: Visual Breadcrumb Navigation Bar -->
  <div class="breadcrumb-wrapper">
    <div class="container">
      <div class="breadcrumb-list">
        <span class="breadcrumb-item"><a href="<?php echo SITE_URL; ?>" title="Home">Home</a></span>
        <span class="breadcrumb-separator">/</span>
        <span class="breadcrumb-item"><a href="<?php echo SITE_URL; ?>pages/packers-and-movers-in-patna.php" title="Patna Hub">Patna Hub</a></span>
        <span class="breadcrumb-separator">/</span>
        <span class="breadcrumb-item active"><?php echo htmlspecialchars($page_title); ?></span>
      </div>
    </div>
  </div>

  <!-- Section 2: Hero Section with Lead Form -->
  <section class="hero-section" style="background: linear-gradient(135deg, #0b132b 0%, #1c2541 100%); padding: 60px 0; color: #ffffff;">
    <div class="container">
      <div class="hero-grid" style="display: grid; grid-template-columns: 1.2fr 0.8fr; gap: 40px; align-items: center;">
        
        <!-- Hero Text Column -->
        <div class="hero-text">
          <span class="section-tag" style="background: rgba(245, 158, 11, 0.15); color: #f59e0b; border: 1px solid rgba(245, 158, 11, 0.4); padding: 6px 16px; border-radius: 20px; font-size: 0.85rem; font-weight: 700; text-transform: uppercase; display: inline-block; margin-bottom: 15px;">
            PATNA TO AKOLA RELOCATION SPECIALISTS
          </span>
          <h1 style="font-size: 2.5rem; font-weight: 800; line-height: 1.2; margin-bottom: 20px; color: #ffffff;">
            Professional <span style="color: #f59e0b;">Packers and Movers Patna to Akola</span>
          </h1>
          <p style="font-size: 1.08rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 25px;">
            Shree Ashirwad Packers and Movers provides certified doorstep household shifting, bike transport, and car carrier services from Patna to Akola, Maharashtra. 100% IBA-approved GST invoices & transit insurance included.
          </p>

          <div style="display: flex; gap: 15px; flex-wrap: wrap; margin-bottom: 30px;">
            <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Now" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
              <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call Now: <?php echo SITE_PHONE; ?>
            </a>
            <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20a%20shifting%20quote%20for%20Patna%20to%20Akola." title="Chat on WhatsApp" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
              <i class="fab fa-whatsapp" style="margin-right: 8px;"></i> Chat on WhatsApp
            </a>
          </div>

          <div style="display: flex; gap: 20px; font-size: 0.9rem; color: #94a3b8;">
            <span><strong style="color: #f59e0b;">100% Safe</strong> Transit</span>
            <span><strong style="color: #f59e0b;">IBA Approved</strong> GST Bill</span>
            <span><strong style="color: #f59e0b;">Akola & Maharashtra</strong> Coverage</span>
          </div>
        </div>

        <!-- Hero Lead Form Column -->
        <div class="hero-form-card" style="background: rgba(255, 255, 255, 0.05); backdrop-filter: blur(10px); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 16px; padding: 30px; box-shadow: 0 15px 35px rgba(0,0,0,0.4);">
          <h2 style="font-size: 1.4rem; color: #ffffff; margin-bottom: 8px; font-weight: 700; text-align: center;">Get Akola Quote</h2>
          <p style="font-size: 0.85rem; color: #94a3b8; text-align: center; margin-bottom: 20px;">Fast, transparent cost estimation via WhatsApp</p>

          <form action="#" method="POST" onsubmit="sendHeroWhatsAppLead(event, this);">
            <div style="margin-bottom: 14px;">
              <input type="text" name="name" class="form-control" placeholder="Your Full Name" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="margin-bottom: 14px;">
              <input type="tel" name="phone" class="form-control" placeholder="10-Digit Mobile Number" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 10px; margin-bottom: 14px;">
              <input type="text" name="move_from" class="form-control" value="Patna" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
              <input type="text" name="move_to" class="form-control" value="Akola" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <button type="submit" style="width: 100%; padding: 14px; background: linear-gradient(135deg, #d32f2f 0%, #f59e0b 100%); color: #ffffff; border: none; border-radius: 50px; font-weight: 700; font-size: 1rem; cursor: pointer;">
              Get Instant Shifting Estimate &rarr;
            </button>
          </form>
        </div>

      </div>
    </div>
  </section>

  <!-- Section 3: Key Stats Bar -->
  <section style="background: #172a54; padding: 30px 0; border-top: 1px solid rgba(255,255,255,0.1); border-bottom: 1px solid rgba(255,255,255,0.1);">
    <div class="container">
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 20px; text-align: center; color: #ffffff;">
        <div>
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b;">1,120 KM</div>
          <div style="font-size: 0.9rem; color: #cbd5e1;">Patna-Akola Route Distance</div>
        </div>
        <div>
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b;">3-5 DAYS</div>
          <div style="font-size: 0.9rem; color: #cbd5e1;">Express Doorstep Delivery</div>
        </div>
        <div>
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b;">100% IBA</div>
          <div style="font-size: 0.9rem; color: #cbd5e1;">Approved Claim Invoices</div>
        </div>
        <div>
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b;">0% DAMAGE</div>
          <div style="font-size: 0.9rem; color: #cbd5e1;">Multi-Layer Protective Packing</div>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 4: Comprehensive Overview Section -->
  <section style="padding: 60px 0; background: #0b132b; color: #ffffff;">
    <div class="container">
      <div style="max-width: 900px; margin: 0 auto;">
        <h2 style="font-size: 2rem; font-weight: 700; color: #f59e0b; margin-bottom: 20px;">Reliable Patna to Akola Goods Transportation Services</h2>
        <p style="font-size: 1.05rem; line-height: 1.8; color: #cbd5e1; margin-bottom: 20px;">
          Relocating from Patna to Akola requires experienced logistics execution across state borders. Shree Ashirwad Packers and Movers provides dedicated covered container vehicles, trained packing crews, and complete insurance security to guarantee smooth intercity shifting.
        </p>
        <p style="font-size: 1.05rem; line-height: 1.8; color: #cbd5e1; margin-bottom: 20px;">
          Whether moving household furniture, office setups, or personal vehicles, our team manages end-to-end packing, loading, highway transit, unloading, and unpacking with maximum precision.
        </p>
      </div>
    </div>
  </section>

  <!-- Section 5: Transparent Pricing Estimation Matrix Table -->
  <section style="padding: 60px 0; background: #1c2541; color: #ffffff;">
    <div class="container">
      <h2 style="font-size: 2rem; font-weight: 700; text-align: center; color: #f59e0b; margin-bottom: 35px;">Patna to Akola Shifting Cost Breakdown</h2>
      <div style="overflow-x: auto; max-width: 900px; margin: 0 auto;">
        <table style="width: 100%; border-collapse: collapse; background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.1); border-radius: 8px;">
          <thead>
            <tr style="background: #172a54; color: #f59e0b;">
              <th style="padding: 15px; text-align: left; border: 1px solid rgba(255,255,255,0.1);">Shifting Type</th>
              <th style="padding: 15px; text-align: left; border: 1px solid rgba(255,255,255,0.1);">Estimated Price Range</th>
              <th style="padding: 15px; text-align: left; border: 1px solid rgba(255,255,255,0.1);">Key Included Services</th>
            </tr>
          </thead>
          <tbody style="color: #cbd5e1;">
            <tr>
              <td style="padding: 15px; border: 1px solid rgba(255,255,255,0.1);">1 BHK House Shifting</td>
              <td style="padding: 15px; border: 1px solid rgba(255,255,255,0.1);">₹13,500 - ₹24,500</td>
              <td style="padding: 15px; border: 1px solid rgba(255,255,255,0.1);">Full Packing, Loading, Covered Transit, Door Delivery</td>
            </tr>
            <tr>
              <td style="padding: 15px; border: 1px solid rgba(255,255,255,0.1);">2 BHK House Shifting</td>
              <td style="padding: 15px; border: 1px solid rgba(255,255,255,0.1);">₹21,500 - ₹34,000</td>
              <td style="padding: 15px; border: 1px solid rgba(255,255,255,0.1);">7-Layer Packing, Furniture Disassembly, Unpacking Support</td>
            </tr>
            <tr>
              <td style="padding: 15px; border: 1px solid rgba(255,255,255,0.1);">3 BHK House Shifting</td>
              <td style="padding: 15px; border: 1px solid rgba(255,255,255,0.1);">₹30,000 - ₹45,000</td>
              <td style="padding: 15px; border: 1px solid rgba(255,255,255,0.1);">Dedicated Container, Complete Household Handling, Transit Insurance</td>
            </tr>
            <tr>
              <td style="padding: 15px; border: 1px solid rgba(255,255,255,0.1);">Two-Wheeler / Bike Transport</td>
              <td style="padding: 15px; border: 1px solid rgba(255,255,255,0.1);">₹5,000 - ₹9,000</td>
              <td style="padding: 15px; border: 1px solid rgba(255,255,255,0.1);">Bubble & Corrugated Sheet Wrap, Hydraulic Loading, Safe Tie-downs</td>
            </tr>
            <tr>
              <td style="padding: 15px; border: 1px solid rgba(255,255,255,0.1);">Four-Wheeler / Car Carrier</td>
              <td style="padding: 15px; border: 1px solid rgba(255,255,255,0.1);">₹16,500 - ₹26,000</td>
              <td style="padding: 15px; border: 1px solid rgba(255,255,255,0.1);">Enclosed Car Carrier Truck, GPS Tracking, Full Cover Insurance</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </section>

  <!-- Section 6: Specialized Relocation Services Grid (6 Cards) -->
  <section style="padding: 60px 0; background: #0b132b; color: #ffffff;">
    <div class="container">
      <h2 style="font-size: 2rem; font-weight: 700; text-align: center; color: #f59e0b; margin-bottom: 40px;">Our Specialized Relocation Solutions</h2>
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 25px;">
        
        <div style="background: rgba(255,255,255,0.04); border: 1px solid rgba(255,255,255,0.1); border-radius: 12px; padding: 25px;">
          <h3 style="font-size: 1.3rem; color: #f59e0b; margin-bottom: 10px;">Household Shifting</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.6;">Complete door-to-door residential goods packaging, transportation, and setup in Akola.</p>
        </div>

        <div style="background: rgba(255,255,255,0.04); border: 1px solid rgba(255,255,255,0.1); border-radius: 12px; padding: 25px;">
          <h3 style="font-size: 1.3rem; color: #f59e0b; margin-bottom: 10px;">Bike & Scooter Shipping</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.6;">Zero-scratch two-wheeler packaging and secure enclosed transit to Akola.</p>
        </div>

        <div style="background: rgba(255,255,255,0.04); border: 1px solid rgba(255,255,255,0.1); border-radius: 12px; padding: 25px;">
          <h3 style="font-size: 1.3rem; color: #f59e0b; margin-bottom: 10px;">Car Transport Service</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.6;">Specialized enclosed car carriers with doorstep pick-up in Patna and delivery in Akola.</p>
        </div>

        <div style="background: rgba(255,255,255,0.04); border: 1px solid rgba(255,255,255,0.1); border-radius: 12px; padding: 25px;">
          <h3 style="font-size: 1.3rem; color: #f59e0b; margin-bottom: 10px;">Corporate & Office Relocation</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.6;">Systematic IT equipment, office furniture, and official records relocation with minimum downtime.</p>
        </div>

        <div style="background: rgba(255,255,255,0.04); border: 1px solid rgba(255,255,255,0.1); border-radius: 12px; padding: 25px;">
          <h3 style="font-size: 1.3rem; color: #f59e0b; margin-bottom: 10px;">IBA Approved Bills</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.6;">100% valid GST tax invoices and bills for corporate and government claim reimbursement.</p>
        </div>

        <div style="background: rgba(255,255,255,0.04); border: 1px solid rgba(255,255,255,0.1); border-radius: 12px; padding: 25px;">
          <h3 style="font-size: 1.3rem; color: #f59e0b; margin-bottom: 10px;">Transit Insurance Security</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.6;">Complete transit risk policy protection against accidental damages or unforeseen road delays.</p>
        </div>

      </div>
    </div>
  </section>

  <!-- Section 7: 7-Layer Protective Packaging Standard -->
  <section style="padding: 60px 0; background: #1c2541; color: #ffffff;">
    <div class="container">
      <h2 style="font-size: 2rem; font-weight: 700; text-align: center; color: #f59e0b; margin-bottom: 35px;">7-Layer Protective Packaging Standard</h2>
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 20px; text-align: center;">
        
        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.1); padding: 20px; border-radius: 10px;">
          <div style="color: #f59e0b; font-weight: 800; font-size: 1.2rem; margin-bottom: 8px;">Layer 1</div>
          <p style="color: #cbd5e1; font-size: 0.9rem;">Soft polythene stretch wrap for initial dust barrier.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.1); padding: 20px; border-radius: 10px;">
          <div style="color: #f59e0b; font-weight: 800; font-size: 1.2rem; margin-bottom: 8px;">Layer 2</div>
          <p style="color: #cbd5e1; font-size: 0.9rem;">Heavy 80-GSM shock-absorbent air-bubble sheet layer.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.1); padding: 20px; border-radius: 10px;">
          <div style="color: #f59e0b; font-weight: 800; font-size: 1.2rem; margin-bottom: 8px;">Layer 3</div>
          <p style="color: #cbd5e1; font-size: 0.9rem;">High-density thermocol sheets for impact insulation.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.1); padding: 20px; border-radius: 10px;">
          <div style="color: #f59e0b; font-weight: 800; font-size: 1.2rem; margin-bottom: 8px;">Layer 4</div>
          <p style="color: #cbd5e1; font-size: 0.9rem;">Heavy 5-ply corrugated carton boxes for structural rigidity.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.1); padding: 20px; border-radius: 10px;">
          <div style="color: #f59e0b; font-weight: 800; font-size: 1.2rem; margin-bottom: 8px;">Layer 5</div>
          <p style="color: #cbd5e1; font-size: 0.9rem;">Reinforced corner guards for furniture edge safety.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.1); padding: 20px; border-radius: 10px;">
          <div style="color: #f59e0b; font-weight: 800; font-size: 1.2rem; margin-bottom: 8px;">Layer 6</div>
          <p style="color: #cbd5e1; font-size: 0.9rem;">Waterproof tarpaulin outer seal for weatherproofing.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.1); padding: 20px; border-radius: 10px;">
          <div style="color: #f59e0b; font-weight: 800; font-size: 1.2rem; margin-bottom: 8px;">Layer 7</div>
          <p style="color: #cbd5e1; font-size: 0.9rem;">Custom heavy wooden crating for delicate luxury goods.</p>
        </div>

      </div>
    </div>
  </section>

  <!-- Section 8: Key Locality & Destination Coverage Grid -->
  <section style="padding: 60px 0; background: #0b132b; color: #ffffff;">
    <div class="container">
      <h2 style="font-size: 2rem; font-weight: 700; text-align: center; color: #f59e0b; margin-bottom: 35px;">Coverage Across Patna & Akola</h2>
      <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 30px; max-width: 900px; margin: 0 auto;">
        <div style="background: rgba(255,255,255,0.04); border: 1px solid rgba(255,255,255,0.1); padding: 25px; border-radius: 12px;">
          <h3 style="color: #f59e0b; font-size: 1.2rem; margin-bottom: 15px;">Patna Pickup Hubs</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.8;">Boring Road, Kankerbagh, Bailey Road, Raja Bazar, Anisabad, Danapur, Patliputra Colony, Ashiana Nagar, Exhibition Road, Rajendra Nagar.</p>
        </div>
        <div style="background: rgba(255,255,255,0.04); border: 1px solid rgba(255,255,255,0.1); padding: 25px; border-radius: 12px;">
          <h3 style="color: #f59e0b; font-size: 1.2rem; margin-bottom: 15px;">Akola Destination Hubs</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.8;">Akola City, Civil Lines, Ramdas Peth, Jowahar Nagar, Kaulkhed, Old City, and surrounding Maharashtra areas.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 9: Intercity Route Network Links -->
  <section style="padding: 60px 0; background: #1c2541; color: #ffffff;">
    <div class="container">
      <h2 style="font-size: 2rem; font-weight: 700; text-align: center; color: #f59e0b; margin-bottom: 35px;">Connected Intercity Route Network</h2>
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 15px; max-width: 1000px; margin: 0 auto; text-align: center;">
        <a href="<?php echo SITE_URL; ?>pages/packers-and-movers-patna-to-nagpur.php" style="color: #cbd5e1; text-decoration: none; padding: 12px; background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.1); border-radius: 8px; display: block;">Patna to Nagpur</a>
        <a href="<?php echo SITE_URL; ?>pages/packers-and-movers-patna-to-amravati.php" style="color: #cbd5e1; text-decoration: none; padding: 12px; background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.1); border-radius: 8px; display: block;">Patna to Amravati</a>
        <a href="<?php echo SITE_URL; ?>pages/packers-and-movers-patna-to-nashik.php" style="color: #cbd5e1; text-decoration: none; padding: 12px; background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.1); border-radius: 8px; display: block;">Patna to Nashik</a>
        <a href="<?php echo SITE_URL; ?>pages/packers-and-movers-patna-to-pune.php" style="color: #cbd5e1; text-decoration: none; padding: 12px; background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.1); border-radius: 8px; display: block;">Patna to Pune</a>
      </div>
    </div>
  </section>

  <!-- Section 10: Frequently Asked Questions (Accordion + FAQ Schema JSON-LD) -->
  <section style="padding: 60px 0; background: #0b132b; color: #ffffff;">
    <div class="container" style="max-width: 900px; margin: 0 auto;">
      <h2 style="font-size: 2rem; font-weight: 700; text-align: center; color: #f59e0b; margin-bottom: 35px;">Frequently Asked Questions</h2>
      
      <div class="faq-list">
        <?php foreach ($faq_list as $index => $faq): ?>
          <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.1); border-radius: 8px; margin-bottom: 15px; padding: 20px;">
            <h3 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 10px;"><?php echo htmlspecialchars($faq['q']); ?></h3>
            <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.7; margin: 0;"><?php echo htmlspecialchars($faq['a']); ?></p>
          </div>
        <?php endforeach; ?>
      </div>

    </div>
  </section>

  <!-- Section 11: Final Call-to-Action Banner -->
  <section style="padding: 60px 0; background: linear-gradient(135deg, #172a54 0%, #0b132b 100%); text-align: center; color: #ffffff; border-top: 1px solid rgba(255,255,255,0.1);">
    <div class="container" style="max-width: 800px; margin: 0 auto;">
      <h2 style="font-size: 2.2rem; font-weight: 800; margin-bottom: 15px; color: #ffffff;">Book Safe Patna to Akola Shifting Today</h2>
      <p style="font-size: 1.1rem; color: #cbd5e1; margin-bottom: 30px;">
        Get guaranteed safe transportation, 7-layer bubble wrapping, and 100% IBA-approved GST tax invoices.
      </p>
      <div style="display: flex; gap: 15px; justify-content: center; flex-wrap: wrap;">
        <a href="tel:<?php echo SITE_PHONE_RAW; ?>" style="padding: 15px 35px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
          <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call Now: <?php echo SITE_PHONE; ?>
        </a>
        <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20a%20shifting%20quote%20for%20Patna%20to%20Akola." target="_blank" style="padding: 15px 35px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
          <i class="fab fa-whatsapp" style="margin-right: 8px;"></i> WhatsApp Inquiry
        </a>
      </div>
    </div>
  </section>

</main>

<!-- FAQ Schema JSON-LD -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    <?php foreach ($faq_list as $index => $faq): ?>
    {
      "@type": "Question",
      "name": <?php echo json_encode($faq['q']); ?>,
      "acceptedAnswer": {
        "@type": "Answer",
        "text": <?php echo json_encode($faq['a']); ?>
      }
    }<?php echo ($index < count($faq_list) - 1) ? ',' : ''; ?>
    <?php endforeach; ?>
  ]
}
</script>

<!-- MovingCompany Schema JSON-LD -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "MovingCompany",
  "name": "Shree Ashirwad Packers and Movers Patna to Akola",
  "url": "<?php echo $canonical_url; ?>",
  "logo": "https://shreeashirwadpackersandmovers.com/assets/images/logo.png",
  "telephone": "+91-8409531615",
  "priceRange": "₹13500 - ₹45000",
  "description": "Professional household shifting, vehicle transport, and IBA-approved billing services from Patna to Akola.",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "MIG 214, Hanuman Nagar, Kankarbagh",
    "addressLocality": "Patna",
    "addressRegion": "Bihar",
    "postalCode": "800020",
    "addressCountry": "IN"
  },
  "areaServed": [
    "Patna",
    "Akola",
    "Maharashtra"
  ]
}
</script>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
