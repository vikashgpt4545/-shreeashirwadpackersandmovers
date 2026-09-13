<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "Packers and Movers in Mokama Patna | Trusted Household & Intercity Shifting";
$page_desc = "Hire professional packers and movers in Mokama, Patna. Safe home shifting, car/bike transport, and office moving with IBA GST bill & transit insurance.";
$page_keywords = "packers and movers in mokama patna, best packers and movers mokama, movers and packers mokama patna, local shifting mokama, house shifting services mokama patna";
$canonical_url = "https://shreeashirwadpackersandmovers.com/pages/packers-and-movers-in-mokama-patna.php";

$page_city = "Mokama, Patna, Bihar";

$faq_list = [
    [
        'q' => 'What are the charges for home shifting in Mokama, Patna?',
        'a' => 'Local 1BHK/2BHK household shifting in Mokama ranges from ₹3,000 to ₹7,500, while 3BHK/large house relocation costs ₹8,000 to ₹14,500 based on cargo volume.'
    ],
    [
        'q' => 'Which areas around Mokama and NH-31 are serviced?',
        'a' => 'We cover Mokama town, Mokama Ghat, Marachi, Hathidah, and nearby eastern Patna district corridors.'
    ],
    [
        'q' => 'Do you provide IBA approved GST bills for official claims?',
        'a' => 'Yes, 100% genuine IBA-compliant GST invoices, consignment notes (LR), and itemized inventory lists are provided.'
    ],
    [
        'q' => 'What protective packing materials are used for long-distance moves from Mokama?',
        'a' => 'We use multi-layer bubble wrap, 5-layer heavy corrugated cartons, foam sheets, edge guards, and waterproof stretch wraps.'
    ],
    [
        'q' => 'Is vehicle transport (bike/car) available from Mokama Patna?',
        'a' => 'Yes, door-to-door two-wheeler and four-wheeler shipping in closed container trucks is available.'
    ],
    [
        'q' => 'How far in advance should I book shifting in Mokama?',
        'a' => 'Booking 2 to 4 days in advance is recommended, though urgent same-day local shifting can also be managed.'
    ],
    [
        'q' => 'Is transit insurance provided for goods moving from Mokama?',
        'a' => 'Yes, full 1.5% transit risk insurance coverage is available to protect your items against any unforeseen damage.'
    ],
    [
        'q' => 'Are packing and unloading included in the quote?',
        'a' => 'Yes, all our quotations are all-inclusive covering packing, loading, transit, unloading, and basic unpacking.'
    ],
    [
        'q' => 'What items are restricted from being packed?',
        'a' => 'Flammables, gas cylinders, liquid chemicals, batteries, cash, and precious jewelry are excluded.'
    ],
    [
        'q' => 'How can I book Packers and Movers in Mokama Patna?',
        'a' => 'Call +91 8409531615 or submit your shifting requirements on WhatsApp for an immediate free estimate.'
    ]
];

require_once __DIR__ . '/../includes/header.php';
?>

<main class="site-main">

  <!-- 1. Visual Breadcrumb Navigation Bar -->
  <div class="breadcrumb-wrapper" style="background: #070d1e; padding: 15px 0; border-bottom: 1px solid rgba(255,255,255,0.08);">
    <div class="container">
      <div class="breadcrumb-list" style="font-size: 0.9rem; color: #94a3b8;">
        <span class="breadcrumb-item"><a href="<?php echo SITE_URL; ?>" title="Home" style="color: #f59e0b; text-decoration: none;">Home</a></span>
        <span class="breadcrumb-separator" style="margin: 0 8px;">/</span>
        <span class="breadcrumb-item"><a href="<?php echo SITE_URL; ?>/pages/packers-and-movers-in-patna.php" title="Packers and Movers Patna" style="color: #f59e0b; text-decoration: none;">Patna</a></span>
        <span class="breadcrumb-separator" style="margin: 0 8px;">/</span>
        <span class="breadcrumb-item active" style="color: #cbd5e1;"><?php echo htmlspecialchars($page_title); ?></span>
      </div>
    </div>
  </div>

  <!-- 2. Hero Section with Lead Form -->
  <section class="hero-section" style="background: linear-gradient(135deg, #0b132b 0%, #1c2541 100%); padding: 60px 0; color: #ffffff;">
    <div class="container">
      <div class="hero-grid" style="display: grid; grid-template-columns: 1.2fr 0.8fr; gap: 40px; align-items: center;">
        
        <!-- Hero Text Column -->
        <div class="hero-text">
          <span class="section-tag" style="background: rgba(245, 158, 11, 0.15); color: #f59e0b; border: 1px solid rgba(245, 158, 11, 0.4); padding: 6px 16px; border-radius: 20px; font-size: 0.85rem; font-weight: 700; text-transform: uppercase; display: inline-block; margin-bottom: 15px;">
            PACKERS AND MOVERS MOKAMA PATNA
          </span>
          <h1 style="font-size: 2.7rem; font-weight: 800; line-height: 1.2; margin-bottom: 20px; color: #ffffff;">
            Professional <span style="color: #f59e0b;">Packers and Movers in Mokama Patna</span>
          </h1>
          <p style="font-size: 1.12rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 25px;">
            Shree Ashirwad Packers and Movers provides trusted household shifting, commercial moving, and vehicle shipping in Mokama, Patna. Serving Mokama Ghat, Hathidah, and NH-31 routes with 100% IBA-approved GST invoices.
          </p>

          <div style="display: flex; gap: 15px; flex-wrap: wrap; margin-bottom: 30px;">
            <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Now" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
              <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call Now: <?php echo SITE_PHONE; ?>
            </a>
            <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20a%20shifting%20quote%20for%20Mokama%20Patna." title="Chat on WhatsApp" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
              <i class="fab fa-whatsapp" style="margin-right: 8px;"></i> Chat on WhatsApp
            </a>
          </div>

          <div style="display: flex; gap: 20px; font-size: 0.9rem; color: #94a3b8;">
            <span><strong style="color: #f59e0b;">100% Safe</strong> Packing</span>
            <span><strong style="color: #f59e0b;">IBA Approved</strong> GST Bill</span>
            <span><strong style="color: #f59e0b;">Highway</strong> Fleet</span>
          </div>
        </div>

        <!-- Hero Lead Form Column -->
        <div class="hero-form-card" style="background: rgba(255, 255, 255, 0.05); backdrop-filter: blur(10px); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 16px; padding: 30px; box-shadow: 0 15px 35px rgba(0,0,0,0.4);">
          <h2 style="font-size: 1.4rem; color: #ffffff; margin-bottom: 8px; font-weight: 700; text-align: center;">Get Mokama Quote</h2>
          <p style="font-size: 0.85rem; color: #94a3b8; text-align: center; margin-bottom: 20px;">Receive transparent cost estimation on WhatsApp</p>

          <form action="#" method="POST" onsubmit="sendHeroWhatsAppLead(event, this);">
            <div style="margin-bottom: 14px;">
              <input type="text" name="name" class="form-control" placeholder="Your Full Name" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="margin-bottom: 14px;">
              <input type="tel" name="phone" class="form-control" placeholder="10-Digit Phone Number" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 10px; margin-bottom: 14px;">
              <input type="text" name="move_from" class="form-control" value="Mokama, Patna" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
              <input type="text" name="move_to" class="form-control" placeholder="Destination City/Area" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <button type="submit" style="width: 100%; padding: 14px; background: linear-gradient(135deg, #d32f2f 0%, #f59e0b 100%); color: #ffffff; border: none; border-radius: 50px; font-weight: 700; font-size: 1rem; cursor: pointer;">
              Get Instant Shifting Estimate &rarr;
            </button>
          </form>
        </div>

      </div>
    </div>
  </section>

  <!-- 3. Key Relocation Stats / Highlights Bar -->
  <section style="background: #070d1e; padding: 30px 0; border-top: 1px solid rgba(255,255,255,0.05); border-bottom: 1px solid rgba(255,255,255,0.05);">
    <div class="container">
      <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 20px; text-align: center;">
        <div style="padding: 15px; background: rgba(255,255,255,0.02); border-radius: 10px; border: 1px solid rgba(245,158,11,0.15);">
          <div style="font-size: 1.8rem; font-weight: 800; color: #f59e0b;">12,500+</div>
          <div style="font-size: 0.85rem; color: #94a3b8; margin-top: 4px;">Moves Completed</div>
        </div>
        <div style="padding: 15px; background: rgba(255,255,255,0.02); border-radius: 10px; border: 1px solid rgba(245,158,11,0.15);">
          <div style="font-size: 1.8rem; font-weight: 800; color: #f59e0b;">100%</div>
          <div style="font-size: 0.85rem; color: #94a3b8; margin-top: 4px;">IBA Approved Claims</div>
        </div>
        <div style="padding: 15px; background: rgba(255,255,255,0.02); border-radius: 10px; border: 1px solid rgba(245,158,11,0.15);">
          <div style="font-size: 1.8rem; font-weight: 800; color: #f59e0b;">1.5%</div>
          <div style="font-size: 0.85rem; color: #94a3b8; margin-top: 4px;">Full Risk Cover</div>
        </div>
        <div style="padding: 15px; background: rgba(255,255,255,0.02); border-radius: 10px; border: 1px solid rgba(245,158,11,0.15);">
          <div style="font-size: 1.8rem; font-weight: 800; color: #f59e0b;">24 / 7</div>
          <div style="font-size: 0.85rem; color: #94a3b8; margin-top: 4px;">GPS Live Tracking</div>
        </div>
      </div>
    </div>
  </section>

  <!-- 4. Detailed Service Overview & Sub-locality Context Section -->
  <section style="padding: 60px 0; background: #0b132b; color: #e2e8f0; line-height: 1.8;">
    <div class="container" style="max-width: 1000px;">
      
      <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">
        MOKAMA HIGHWAY HUB
      </span>
      <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin: 10px 0 20px 0;">
        Doorstep House & Vehicle Relocation in <span style="color: #f59e0b;">Mokama, Patna</span>
      </h2>
      
      <p style="font-size: 1.05rem; color: #cbd5e1; margin-bottom: 20px;">
        Situated on the banks of the Ganges in eastern Patna district, Mokama is a strategic industrial and rail-road transport junction. Shree Ashirwad Packers and Movers provides comprehensive relocation services connecting Mokama to Patna city and major all-India routes.
      </p>

      <p style="font-size: 1rem; color: #cbd5e1; margin-bottom: 25px;">
        Whether you are relocating a family residence near Mokama Ghat, moving commercial stock along NH-31, or transferring interstate to Delhi, Bengal, or South India, our expert crew manages end-to-end packing, heavy loading, highway transit, and doorstep delivery with utmost care.
      </p>

    </div>
  </section>

  <!-- 5. Comprehensive Cost & Tariff Rate Matrix Table -->
  <section style="padding: 50px 0; background: #070d1e; color: #ffffff;">
    <div class="container" style="max-width: 1000px;">
      <h3 style="font-size: 1.8rem; color: #ffffff; font-weight: 700; margin-bottom: 15px; text-align: center;">
        Estimated Relocation Rates for Mokama, Patna
      </h3>
      <p style="font-size: 0.95rem; color: #94a3b8; text-align: center; margin-bottom: 30px;">
        Transparent estimates with zero hidden charges. Final quotes depend on exact distance and total cargo volume.
      </p>
      
      <div style="overflow-x: auto;">
        <table style="width: 100%; border-collapse: collapse; background: #172a54; border-radius: 10px; overflow: hidden; border: 1px solid rgba(245, 158, 11, 0.3);">
          <thead>
            <tr style="background: #1e3a8a; color: #f59e0b; text-align: left;">
              <th style="padding: 14px 16px;">Shifting Size</th>
              <th style="padding: 14px 16px;">Local Within Patna (Mokama)</th>
              <th style="padding: 14px 16px;">Interstate Move (Patna to Other Cities)</th>
            </tr>
          </thead>
          <tbody>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.08);">
              <td style="padding: 12px 16px; font-weight: 700; color: #fff;">1 BHK Apartment / Small House</td>
              <td style="padding: 12px 16px; color: #6ee7b7;">₹3,000 - ₹4,800</td>
              <td style="padding: 12px 16px; color: #cbd5e1;">₹9,000 - ₹15,000</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.08);">
              <td style="padding: 12px 16px; font-weight: 700; color: #fff;">2 BHK House / Flat</td>
              <td style="padding: 12px 16px; color: #6ee7b7;">₹4,800 - ₹8,000</td>
              <td style="padding: 12px 16px; color: #cbd5e1;">₹13,000 - ₹22,000</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.08);">
              <td style="padding: 12px 16px; font-weight: 700; color: #fff;">3 BHK Independent House / Villa</td>
              <td style="padding: 12px 16px; color: #6ee7b7;">₹8,000 - ₹13,500</td>
              <td style="padding: 12px 16px; color: #cbd5e1;">₹19,000 - ₹32,000</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.08);">
              <td style="padding: 12px 16px; font-weight: 700; color: #fff;">Two-Wheeler / Bike Transport</td>
              <td style="padding: 12px 16px; color: #6ee7b7;">₹1,500 - ₹2,500</td>
              <td style="padding: 12px 16px; color: #cbd5e1;">₹3,800 - ₹7,000</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.08);">
              <td style="padding: 12px 16px; font-weight: 700; color: #fff;">Four-Wheeler / Car Carrier</td>
              <td style="padding: 12px 16px; color: #6ee7b7;">₹2,500 - ₹4,500</td>
              <td style="padding: 12px 16px; color: #cbd5e1;">₹8,500 - ₹16,000</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </section>

  <!-- 6. Specialized Relocation Services Grid -->
  <section style="padding: 60px 0; background: #0b132b; color: #ffffff;">
    <div class="container">
      <div style="text-align: center; margin-bottom: 40px;">
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff;">Our Shifting Services in Mokama Patna</h2>
        <p style="font-size: 0.95rem; color: #94a3b8;">Customized moving solutions for households, corporate entities, and vehicle owners</p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 25px;">
        <div style="background: rgba(255,255,255,0.03); padding: 25px; border-radius: 12px; border: 1px solid rgba(245,158,11,0.2);">
          <i class="fas fa-home" style="font-size: 2rem; color: #f59e0b; margin-bottom: 15px;"></i>
          <h3 style="font-size: 1.2rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">Household Shifting</h3>
          <p style="font-size: 0.9rem; color: #cbd5e1; line-height: 1.6; margin: 0;">Complete home packing with 5-layer corrugated boxes, bubble wraps, foam cushions, and careful furniture dismantling.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); padding: 25px; border-radius: 12px; border: 1px solid rgba(245,158,11,0.2);">
          <i class="fas fa-motorcycle" style="font-size: 2rem; color: #f59e0b; margin-bottom: 15px;"></i>
          <h3 style="font-size: 1.2rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">Bike & Car Transport</h3>
          <p style="font-size: 0.9rem; color: #cbd5e1; line-height: 1.6; margin: 0;">Scratch-free vehicle transportation in hydraulic enclosed car carriers and specialized bike crates across India.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); padding: 25px; border-radius: 12px; border: 1px solid rgba(245,158,11,0.2);">
          <i class="fas fa-building" style="font-size: 2rem; color: #f59e0b; margin-bottom: 15px;"></i>
          <h3 style="font-size: 1.2rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">Office & Commercial Relocation</h3>
          <p style="font-size: 0.9rem; color: #cbd5e1; line-height: 1.6; margin: 0;">Systematic moving of IT servers, office furniture, files, and commercial inventory with minimal downtime.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); padding: 25px; border-radius: 12px; border: 1px solid rgba(245,158,11,0.2);">
          <i class="fas fa-file-invoice" style="font-size: 2rem; color: #f59e0b; margin-bottom: 15px;"></i>
          <h3 style="font-size: 1.2rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">IBA Approved Bills</h3>
          <p style="font-size: 0.9rem; color: #cbd5e1; line-height: 1.6; margin: 0;">100% official GST invoices, LR consignment notes, and itemized bills accepted by government & corporate claims.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); padding: 25px; border-radius: 12px; border: 1px solid rgba(245,158,11,0.2);">
          <i class="fas fa-shield-alt" style="font-size: 2rem; color: #f59e0b; margin-bottom: 15px;"></i>
          <h3 style="font-size: 1.2rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">Transit Risk Insurance</h3>
          <p style="font-size: 0.9rem; color: #cbd5e1; line-height: 1.6; margin: 0;">Full door-to-door transit risk coverage to safeguard your valuables against road mishaps or natural emergencies.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); padding: 25px; border-radius: 12px; border: 1px solid rgba(245,158,11,0.2);">
          <i class="fas fa-warehouse" style="font-size: 2rem; color: #f59e0b; margin-bottom: 15px;"></i>
          <h3 style="font-size: 1.2rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">Warehouse & Storage</h3>
          <p style="font-size: 0.9rem; color: #cbd5e1; line-height: 1.6; margin: 0;">Secure, CCTV-monitored short-term and long-term household goods storage units in Patna district.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- 7. 4-Step Shifting Process Workflow -->
  <section style="padding: 60px 0; background: #070d1e; color: #ffffff;">
    <div class="container" style="max-width: 1000px;">
      <div style="text-align: center; margin-bottom: 40px;">
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff;">Our 4-Step Smooth Relocation Process</h2>
        <p style="font-size: 0.95rem; color: #94a3b8;">Streamlined execution from initial inquiry to final unpacking</p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 20px;">
        <div style="text-align: center; padding: 20px; background: rgba(255,255,255,0.02); border-radius: 10px; border-top: 3px solid #f59e0b;">
          <div style="width: 40px; height: 40px; background: #f59e0b; color: #000; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 800; margin: 0 auto 15px auto;">1</div>
          <h4 style="font-size: 1.1rem; color: #fff; font-weight: 700; margin-bottom: 8px;">Pre-Move Survey</h4>
          <p style="font-size: 0.85rem; color: #cbd5e1; margin: 0;">Instant quote assessment over phone/WhatsApp or physical inspection.</p>
        </div>

        <div style="text-align: center; padding: 20px; background: rgba(255,255,255,0.02); border-radius: 10px; border-top: 3px solid #f59e0b;">
          <div style="width: 40px; height: 40px; background: #f59e0b; color: #000; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 800; margin: 0 auto 15px auto;">2</div>
          <h4 style="font-size: 1.1rem; color: #fff; font-weight: 700; margin-bottom: 8px;">Multi-Layer Packing</h4>
          <p style="font-size: 0.85rem; color: #cbd5e1; margin: 0;">Packing delicate items, furniture, and appliances with protective materials.</p>
        </div>

        <div style="text-align: center; padding: 20px; background: rgba(255,255,255,0.02); border-radius: 10px; border-top: 3px solid #f59e0b;">
          <div style="width: 40px; height: 40px; background: #f59e0b; color: #000; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 800; margin: 0 auto 15px auto;">3</div>
          <h4 style="font-size: 1.1rem; color: #fff; font-weight: 700; margin-bottom: 8px;">Safe Highway Transit</h4>
          <p style="font-size: 0.85rem; color: #cbd5e1; margin: 0;">GPS-enabled closed containers ensure secure transit along NH-31 & beyond.</p>
        </div>

        <div style="text-align: center; padding: 20px; background: rgba(255,255,255,0.02); border-radius: 10px; border-top: 3px solid #f59e0b;">
          <div style="width: 40px; height: 40px; background: #f59e0b; color: #000; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 800; margin: 0 auto 15px auto;">4</div>
          <h4 style="font-size: 1.1rem; color: #fff; font-weight: 700; margin-bottom: 8px;">Doorstep Unpacking</h4>
          <p style="font-size: 0.85rem; color: #cbd5e1; margin: 0;">Careful unloading, room placement, furniture assembly, and waste removal.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- 8. Why Choose Us Grid -->
  <section style="padding: 60px 0; background: #0b132b; color: #ffffff;">
    <div class="container" style="max-width: 1000px;">
      <div style="text-align: center; margin-bottom: 40px;">
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff;">Why Choose Shree Ashirwad in Mokama Patna?</h2>
      </div>

      <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 25px;">
        <div style="display: flex; gap: 15px; background: rgba(255,255,255,0.02); padding: 20px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <i class="fas fa-user-shield" style="font-size: 1.8rem; color: #f59e0b;"></i>
          <div>
            <h4 style="font-size: 1.1rem; color: #fff; font-weight: 700; margin-bottom: 5px;">Trained In-House Packers</h4>
            <p style="font-size: 0.88rem; color: #cbd5e1; margin: 0;">We never sub-contract your valuable household goods to third-party laborers.</p>
          </div>
        </div>

        <div style="display: flex; gap: 15px; background: rgba(255,255,255,0.02); padding: 20px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <i class="fas fa-calculator" style="font-size: 1.8rem; color: #f59e0b;"></i>
          <div>
            <h4 style="font-size: 1.1rem; color: #fff; font-weight: 700; margin-bottom: 5px;">Fixed Transparent Quotation</h4>
            <p style="font-size: 0.88rem; color: #cbd5e1; margin: 0;">Zero last-minute surprises or hidden charges on shifting day.</p>
          </div>
        </div>

        <div style="display: flex; gap: 15px; background: rgba(255,255,255,0.02); padding: 20px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <i class="fas fa-truck-moving" style="font-size: 1.8rem; color: #f59e0b;"></i>
          <div>
            <h4 style="font-size: 1.1rem; color: #fff; font-weight: 700; margin-bottom: 5px;">Custom Closed Containers</h4>
            <p style="font-size: 0.88rem; color: #cbd5e1; margin: 0;">Weather-proof containers protect your belongings from rain, dust, and transit heat.</p>
          </div>
        </div>

        <div style="display: flex; gap: 15px; background: rgba(255,255,255,0.02); padding: 20px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <i class="fas fa-headset" style="font-size: 1.8rem; color: #f59e0b;"></i>
          <div>
            <h4 style="font-size: 1.1rem; color: #fff; font-weight: 700; margin-bottom: 5px;">Dedicated Move Coordinator</h4>
            <p style="font-size: 0.88rem; color: #cbd5e1; margin: 0;">Single point of contact for live tracking updates and instant query resolution.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 9. FAQ Section with Schema Support -->
  <section class="faq-section" style="padding: 60px 0; background: #070d1e; color: #ffffff;">
    <div class="container" style="max-width: 900px;">
      <div style="text-align: center; margin-bottom: 40px;">
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff;">Frequently Asked Questions (Mokama Patna)</h2>
      </div>

      <div style="display: flex; flex-direction: column; gap: 15px;">
        <?php foreach ($faq_list as $index => $faq): ?>
          <div style="background: #101c40; padding: 20px; border-radius: 8px; border: 1px solid rgba(245, 158, 11, 0.2);">
            <h4 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 8px; font-weight: 700;">
              <?php echo ($index + 1) . '. ' . htmlspecialchars($faq['q']); ?>
            </h4>
            <p style="font-size: 0.98rem; color: #cbd5e1; line-height: 1.7; margin: 0;">
              <?php echo htmlspecialchars($faq['a']); ?>
            </p>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- 10. High-Conversion Closing Call-to-Action Banner -->
  <section style="padding: 60px 0; background: linear-gradient(135deg, #1e3a8a 0%, #0f172a 100%); text-align: center; color: #ffffff;">
    <div class="container" style="max-width: 800px;">
      <h2 style="font-size: 2.2rem; font-weight: 800; margin-bottom: 15px; color: #ffffff;">Planning a Move in Mokama Patna?</h2>
      <p style="font-size: 1.1rem; color: #cbd5e1; margin-bottom: 30px;">
        Contact Shree Ashirwad Packers and Movers today for a free home survey and instant price quote on WhatsApp.
      </p>
      <div style="display: flex; justify-content: center; gap: 20px; flex-wrap: wrap;">
        <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Now" style="padding: 15px 35px; background: #e11d48; color: #fff; border-radius: 50px; font-weight: 700; font-size: 1.05rem; text-decoration: none; box-shadow: 0 5px 20px rgba(225, 29, 72, 0.4);">
          <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call <?php echo SITE_PHONE; ?>
        </a>
        <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20need%20shifting%20services%20in%20Mokama%20Patna." target="_blank" title="WhatsApp Us" style="padding: 15px 35px; background: #10b981; color: #fff; border-radius: 50px; font-weight: 700; font-size: 1.05rem; text-decoration: none; box-shadow: 0 5px 20px rgba(16, 185, 129, 0.4);">
          <i class="fab fa-whatsapp" style="margin-right: 8px;"></i> Instant WhatsApp Estimate
        </a>
      </div>
    </div>
  </section>



<!-- Google Business Profile Verified Customer Trust Section -->
<section style="padding: 35px 0; background: #070d19;">
  <div class="container" style="max-width: 1150px; margin: 0 auto; padding: 0 15px;">
    <div class="gmb-trust-card" style="background: rgba(15, 23, 42, 0.85); border: 1.5px solid rgba(245, 158, 11, 0.35); border-radius: 14px; padding: 28px 24px; margin: 0; color: #cbd5e1;">
      <div style="display: flex; flex-wrap: wrap; justify-content: space-between; align-items: center; border-bottom: 1px solid rgba(255,255,255,0.08); padding-bottom: 16px; margin-bottom: 22px; gap: 12px;">
        <div style="display: flex; align-items: center; gap: 12px;">
          <span style="background: #1e293b; color: #f59e0b; padding: 6px 14px; border-radius: 20px; font-size: 0.85rem; font-weight: 700; display: inline-flex; align-items: center; gap: 6px;">
            <i class="fab fa-google" style="color: #ea4335;"></i> Google Verified Reviews
          </span>
          <span style="font-size: 1.25rem; font-weight: 800; color: #ffffff;">4.9 <span style="color: #f59e0b;">&#9733;&#9733;&#9733;&#9733;&#9733;</span></span>
          <span style="color: #94a3b8; font-size: 0.85rem; font-weight: 500;">(500+ Customer Ratings)</span>
        </div>
        <a href="https://share.google/4FEjDv1dVCJV3O4ch" target="_blank" rel="noopener nofollow" style="color: #f59e0b; text-decoration: none; font-size: 0.88rem; font-weight: 600; display: inline-flex; align-items: center; gap: 5px;">
          View All Reviews on Google Maps &rarr;
        </a>
      </div>
      
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 18px;">
    <div style="background: rgba(0,0,0,0.3); border-radius: 12px; padding: 20px 18px; border-left: 4px solid #f59e0b; border-top: 1px solid rgba(255,255,255,0.06); border-right: 1px solid rgba(255,255,255,0.06); border-bottom: 1px solid rgba(255,255,255,0.06); box-shadow: 0 8px 20px rgba(0,0,0,0.25); display: flex; flex-direction: column; justify-content: space-between;">
      <div>
        <div style="display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 10px; gap: 10px;">
          <div style="display: flex; align-items: center; gap: 10px;">
            <div style="width: 36px; height: 36px; border-radius: 50%; background: #f59e0b22; color: #f59e0b; font-weight: 800; font-size: 0.85rem; display: flex; align-items: center; justify-content: center;">RS</div>
            <div>
              <strong style="color: #ffffff; font-size: 0.95rem; display: block; line-height: 1.2;">Rajesh Sharma</strong>
              <span style="color: #94a3b8; font-size: 0.76rem;">2 months ago</span>
            </div>
          </div>
          <span style="color: #f59e0b; font-size: 0.82rem; font-weight: 700; background: rgba(245, 158, 11, 0.12); padding: 3px 8px; border-radius: 12px; white-space: nowrap;">&#9733;&#9733;&#9733;&#9733;&#9733; Verified</span>
        </div>
        <div style="color: #60a5fa; font-size: 0.8rem; font-weight: 600; margin-bottom: 10px;"><i class="fas fa-check-circle" style="margin-right: 5px;"></i>Car &amp; Bike Relocation (Creta &amp; Enfield)</div>
        <p style="font-size: 0.88rem; line-height: 1.65; margin: 0; color: #cbd5e1; font-style: italic;">
          "Transported my Hyundai Creta and Royal Enfield from Ranchi to Pune in an enclosed container carrier with live GPS tracking. Both vehicles arrived in showroom condition without a single scratch. Provided genuine IBA-approved bill for corporate relocation reimbursement."
        </p>
      </div>
    </div>
    <div style="background: rgba(0,0,0,0.3); border-radius: 12px; padding: 20px 18px; border-left: 4px solid #10b981; border-top: 1px solid rgba(255,255,255,0.06); border-right: 1px solid rgba(255,255,255,0.06); border-bottom: 1px solid rgba(255,255,255,0.06); box-shadow: 0 8px 20px rgba(0,0,0,0.25); display: flex; flex-direction: column; justify-content: space-between;">
      <div>
        <div style="display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 10px; gap: 10px;">
          <div style="display: flex; align-items: center; gap: 10px;">
            <div style="width: 36px; height: 36px; border-radius: 50%; background: #10b98122; color: #10b981; font-weight: 800; font-size: 0.85rem; display: flex; align-items: center; justify-content: center;">AK</div>
            <div>
              <strong style="color: #ffffff; font-size: 0.95rem; display: block; line-height: 1.2;">Amit Kumar</strong>
              <span style="color: #94a3b8; font-size: 0.76rem;">1 month ago</span>
            </div>
          </div>
          <span style="color: #f59e0b; font-size: 0.82rem; font-weight: 700; background: rgba(245, 158, 11, 0.12); padding: 3px 8px; border-radius: 12px; white-space: nowrap;">&#9733;&#9733;&#9733;&#9733;&#9733; Verified</span>
        </div>
        <div style="color: #60a5fa; font-size: 0.8rem; font-weight: 600; margin-bottom: 10px;"><i class="fas fa-check-circle" style="margin-right: 5px;"></i>Household Shifting (3BHK)</div>
        <p style="font-size: 0.88rem; line-height: 1.65; margin: 0; color: #cbd5e1; font-style: italic;">
          "Shifted complete 3BHK household goods from Ranchi to Bangalore with Shree Ashirwad. Exceptional packing quality using double-layer bubble wrap and sturdy cartons for fragile crockery. Zero damage, on-time delivery, and polite loading staff. Highly recommended!"
        </p>
      </div>
    </div>
    <div style="background: rgba(0,0,0,0.3); border-radius: 12px; padding: 20px 18px; border-left: 4px solid #3b82f6; border-top: 1px solid rgba(255,255,255,0.06); border-right: 1px solid rgba(255,255,255,0.06); border-bottom: 1px solid rgba(255,255,255,0.06); box-shadow: 0 8px 20px rgba(0,0,0,0.25); display: flex; flex-direction: column; justify-content: space-between;">
      <div>
        <div style="display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 10px; gap: 10px;">
          <div style="display: flex; align-items: center; gap: 10px;">
            <div style="width: 36px; height: 36px; border-radius: 50%; background: #3b82f622; color: #3b82f6; font-weight: 800; font-size: 0.85rem; display: flex; align-items: center; justify-content: center;">VK</div>
            <div>
              <strong style="color: #ffffff; font-size: 0.95rem; display: block; line-height: 1.2;">Vikram Kumar Singh</strong>
              <span style="color: #94a3b8; font-size: 0.76rem;">3 weeks ago</span>
            </div>
          </div>
          <span style="color: #f59e0b; font-size: 0.82rem; font-weight: 700; background: rgba(245, 158, 11, 0.12); padding: 3px 8px; border-radius: 12px; white-space: nowrap;">&#9733;&#9733;&#9733;&#9733;&#9733; Verified</span>
        </div>
        <div style="color: #60a5fa; font-size: 0.8rem; font-weight: 600; margin-bottom: 10px;"><i class="fas fa-check-circle" style="margin-right: 5px;"></i>SUV &amp; Household Intercity Transit</div>
        <p style="font-size: 0.88rem; line-height: 1.65; margin: 0; color: #cbd5e1; font-style: italic;">
          "Transported my Creta SUV and Royal Enfield motorcycle from Ranchi to Bangalore along with household items. Received live GPS location updates throughout transit. Zero damage! Best choice among professional packers and movers."
        </p>
      </div>
    </div>
    <div style="background: rgba(0,0,0,0.3); border-radius: 12px; padding: 20px 18px; border-left: 4px solid #a855f7; border-top: 1px solid rgba(255,255,255,0.06); border-right: 1px solid rgba(255,255,255,0.06); border-bottom: 1px solid rgba(255,255,255,0.06); box-shadow: 0 8px 20px rgba(0,0,0,0.25); display: flex; flex-direction: column; justify-content: space-between;">
      <div>
        <div style="display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 10px; gap: 10px;">
          <div style="display: flex; align-items: center; gap: 10px;">
            <div style="width: 36px; height: 36px; border-radius: 50%; background: #a855f722; color: #a855f7; font-weight: 800; font-size: 0.85rem; display: flex; align-items: center; justify-content: center;">PV</div>
            <div>
              <strong style="color: #ffffff; font-size: 0.95rem; display: block; line-height: 1.2;">Pooja Verma</strong>
              <span style="color: #94a3b8; font-size: 0.76rem;">1 month ago</span>
            </div>
          </div>
          <span style="color: #f59e0b; font-size: 0.82rem; font-weight: 700; background: rgba(245, 158, 11, 0.12); padding: 3px 8px; border-radius: 12px; white-space: nowrap;">&#9733;&#9733;&#9733;&#9733;&#9733; Verified</span>
        </div>
        <div style="color: #60a5fa; font-size: 0.8rem; font-weight: 600; margin-bottom: 10px;"><i class="fas fa-check-circle" style="margin-right: 5px;"></i>Interstate Relocation to Kolkata</div>
        <p style="font-size: 0.88rem; line-height: 1.65; margin: 0; color: #cbd5e1; font-style: italic;">
          "Very honest pricing with no hidden charges. They provided a proper IBA-approved GST bill and clear transit insurance documentation for my company reimbursement. Outstanding service from reliable movers."
        </p>
      </div>
    </div>
    <div style="background: rgba(0,0,0,0.3); border-radius: 12px; padding: 20px 18px; border-left: 4px solid #06b6d4; border-top: 1px solid rgba(255,255,255,0.06); border-right: 1px solid rgba(255,255,255,0.06); border-bottom: 1px solid rgba(255,255,255,0.06); box-shadow: 0 8px 20px rgba(0,0,0,0.25); display: flex; flex-direction: column; justify-content: space-between;">
      <div>
        <div style="display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 10px; gap: 10px;">
          <div style="display: flex; align-items: center; gap: 10px;">
            <div style="width: 36px; height: 36px; border-radius: 50%; background: #06b6d422; color: #06b6d4; font-weight: 800; font-size: 0.85rem; display: flex; align-items: center; justify-content: center;">AR</div>
            <div>
              <strong style="color: #ffffff; font-size: 0.95rem; display: block; line-height: 1.2;">Ananya Roy</strong>
              <span style="color: #94a3b8; font-size: 0.76rem;">2 months ago</span>
            </div>
          </div>
          <span style="color: #f59e0b; font-size: 0.82rem; font-weight: 700; background: rgba(245, 158, 11, 0.12); padding: 3px 8px; border-radius: 12px; white-space: nowrap;">&#9733;&#9733;&#9733;&#9733;&#9733; Verified</span>
        </div>
        <div style="color: #60a5fa; font-size: 0.8rem; font-weight: 600; margin-bottom: 10px;"><i class="fas fa-check-circle" style="margin-right: 5px;"></i>IT Office &amp; Workstation Relocation</div>
        <p style="font-size: 0.88rem; line-height: 1.65; margin: 0; color: #cbd5e1; font-style: italic;">
          "Shree Ashirwad shifted our software company setup over a single Sunday. All IT servers, monitors, and ergonomic chairs were transported safely with anti-static packaging and zero operational downtime. Truly top-tier logistics team."
        </p>
      </div>
    </div>
    <div style="background: rgba(0,0,0,0.3); border-radius: 12px; padding: 20px 18px; border-left: 4px solid #ec4899; border-top: 1px solid rgba(255,255,255,0.06); border-right: 1px solid rgba(255,255,255,0.06); border-bottom: 1px solid rgba(255,255,255,0.06); box-shadow: 0 8px 20px rgba(0,0,0,0.25); display: flex; flex-direction: column; justify-content: space-between;">
      <div>
        <div style="display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 10px; gap: 10px;">
          <div style="display: flex; align-items: center; gap: 10px;">
            <div style="width: 36px; height: 36px; border-radius: 50%; background: #ec489922; color: #ec4899; font-weight: 800; font-size: 0.85rem; display: flex; align-items: center; justify-content: center;">PS</div>
            <div>
              <strong style="color: #ffffff; font-size: 0.95rem; display: block; line-height: 1.2;">Priya Singh</strong>
              <span style="color: #94a3b8; font-size: 0.76rem;">3 weeks ago</span>
            </div>
          </div>
          <span style="color: #f59e0b; font-size: 0.82rem; font-weight: 700; background: rgba(245, 158, 11, 0.12); padding: 3px 8px; border-radius: 12px; white-space: nowrap;">&#9733;&#9733;&#9733;&#9733;&#9733; Verified</span>
        </div>
        <div style="color: #60a5fa; font-size: 0.8rem; font-weight: 600; margin-bottom: 10px;"><i class="fas fa-check-circle" style="margin-right: 5px;"></i>Local House Relocation</div>
        <p style="font-size: 0.88rem; line-height: 1.65; margin: 0; color: #cbd5e1; font-style: italic;">
          "Very smooth shifting experience within Ranchi. The packing crew arrived exactly on time, dismantled the furniture carefully, and assembled everything at our new flat. Transparent pricing with no hidden moving day surcharges."
        </p>
      </div>
    </div>

      </div>
    </div>
  </div>
</section>

</main>

<!-- 11. Inline JSON-LD Structured Data Schema -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    <?php 
    $schema_faqs = [];
    foreach ($faq_list as $faq) {
        $schema_faqs[] = '{
          "@type": "Question",
          "name": ' . json_encode($faq['q']) . ',
          "acceptedAnswer": {
            "@type": "Answer",
            "text": ' . json_encode($faq['a']) . '
          }
        }';
    }
    echo implode(',', $schema_faqs);
    ?>
  ]
}
</script>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "MovingCompany",
  "name": "Shree Ashirwad Packers and Movers",
  "description": "Trusted packers and movers in Mokama, Patna offering home & vehicle relocation.",
  "url": "<?php echo $canonical_url; ?>",
  "telephone": "<?php echo SITE_PHONE_RAW; ?>",
  "address": {
    "@type": "PostalAddress",
    "addressLocality": "Mokama, Patna",
    "addressRegion": "Bihar",
    "addressCountry": "IN"
  },
  "areaServed": "Mokama, Patna, Bihar",
  "priceRange": "₹3000 - ₹32000"
}
</script>

<script>
function sendHeroWhatsAppLead(event, form) {
  event.preventDefault();
  var name = form.querySelector('[name="name"]').value;
  var phone = form.querySelector('[name="phone"]').value;
  var moveFrom = form.querySelector('[name="move_from"]').value;
  var moveTo = form.querySelector('[name="move_to"]').value;
  
  var message = "Hello Shree Ashirwad Packers,\n\nI would like a Shifting Quote for Mokama Patna:\n- Name: " + name + "\n- Phone: " + phone + "\n- Moving From: " + moveFrom + "\n- Moving To: " + moveTo;
  
  var whatsappUrl = "https://api.whatsapp.com/send?phone=918409531615&text=" + encodeURIComponent(message);
  window.open(whatsappUrl, '_blank');
}
</script>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>


