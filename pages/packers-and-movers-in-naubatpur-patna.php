<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "Packers and Movers in Naubatpur Patna | Reliable Local & Outstation Shifting";
$page_desc = "Hire verified packers and movers in Naubatpur, Patna. Professional house shifting, warehouse transport & vehicle moving with 100% IBA GST bill.";
$page_keywords = "packers and movers in naubatpur patna, best packers and movers naubatpur, movers and packers naubatpur patna, house shifting naubatpur patna, local relocation naubatpur";
$canonical_url = "https://shreeashirwadpackersandmovers.com/pages/packers-and-movers-in-naubatpur-patna.php";

$page_city = "Naubatpur, Patna, Bihar";

$faq_list = [
    [
        'q' => 'What are the charges for packers and movers in Naubatpur, Patna?',
        'a' => 'Local shifting within Naubatpur starts from ₹3,000 for 1BHK, ₹6,000 for 2BHK, and ₹9,000 to ₹14,000 for 3BHK houses depending on cargo quantity and packing level.'
    ],
    [
        'q' => 'Are services available across Naubatpur and connecting highways?',
        'a' => 'Yes, we cover Naubatpur, AIIMS Patna road, Bikram, Phulwari Sharif, and Bihta corridor.'
    ],
    [
        'q' => 'Do you provide IBA approved GST bills for official claims?',
        'a' => 'Yes, 100% genuine IBA-compliant GST invoices, consignment notes (LR), and itemized inventory receipts are provided.'
    ],
    [
        'q' => 'What safety measures are used for heavy furniture & electronics?',
        'a' => 'We use 7-layer protective packaging: bubble wrap, corrugated sheets, stretch wrap, edge guards, and custom wooden crating.'
    ],
    [
        'q' => 'Can you transport agricultural machinery or commercial equipment from Naubatpur?',
        'a' => 'Yes, we provide specialized flatbed and closed container vehicles for heavy commercial and agricultural gear.'
    ],
    [
        'q' => 'Is bike and car transport available from Naubatpur Patna?',
        'a' => 'Yes, safe door-to-door vehicle transport using specialized enclosed car carriers and padded bike stands is available.'
    ],
    [
        'q' => 'Do you assist with dismantling beds and ceiling appliances?',
        'a' => 'Yes, trained carpenters and electricians handle furniture disassembly and appliance unmounting.'
    ],
    [
        'q' => 'Is transit insurance provided for long-distance relocations?',
        'a' => 'Yes, 1.5% comprehensive transit insurance is provided for full risk protection during intercity moves.'
    ],
    [
        'q' => 'What items are restricted during packing?',
        'a' => 'Gas cylinders, flammable liquids, hazardous chemicals, cash, jewelry, and legal documents are excluded.'
    ],
    [
        'q' => 'How can I book Packers and Movers in Naubatpur Patna?',
        'a' => 'Call +91 8409531615 or submit your shifting requirements via WhatsApp for a fast free quote.'
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
            PACKERS AND MOVERS NAUBATPUR PATNA
          </span>
          <h1 style="font-size: 2.7rem; font-weight: 800; line-height: 1.2; margin-bottom: 20px; color: #ffffff;">
            Professional <span style="color: #f59e0b;">Packers and Movers in Naubatpur Patna</span>
          </h1>
          <p style="font-size: 1.12rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 25px;">
            Shree Ashirwad Packers and Movers provides top-rated household shifting, commercial relocation, and vehicle transport in Naubatpur, Patna with 100% IBA-approved GST bills and zero hidden costs.
          </p>

          <div style="display: flex; gap: 15px; flex-wrap: wrap; margin-bottom: 30px;">
            <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Now" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
              <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call Now: <?php echo SITE_PHONE; ?>
            </a>
            <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20a%20shifting%20quote%20for%20Naubatpur%20Patna." title="Chat on WhatsApp" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
              <i class="fab fa-whatsapp" style="margin-right: 8px;"></i> Chat on WhatsApp
            </a>
          </div>

          <div style="display: flex; gap: 20px; font-size: 0.9rem; color: #94a3b8;">
            <span><strong style="color: #f59e0b;">100% Insured</strong> Shifting</span>
            <span><strong style="color: #f59e0b;">IBA Approved</strong> GST Bill</span>
            <span><strong style="color: #f59e0b;">Door-to-Door</strong> Service</span>
          </div>
        </div>

        <!-- Hero Lead Form Column -->
        <div class="hero-form-card" style="background: rgba(255, 255, 255, 0.05); backdrop-filter: blur(10px); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 16px; padding: 30px; box-shadow: 0 15px 35px rgba(0,0,0,0.4);">
          <h2 style="font-size: 1.4rem; color: #ffffff; margin-bottom: 8px; font-weight: 700; text-align: center;">Get Naubatpur Quote</h2>
          <p style="font-size: 0.85rem; color: #94a3b8; text-align: center; margin-bottom: 20px;">Receive transparent cost estimation on WhatsApp</p>

          <form action="#" method="POST" onsubmit="sendHeroWhatsAppLead(event, this);">
            <div style="margin-bottom: 14px;">
              <input type="text" name="name" class="form-control" placeholder="Your Full Name" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="margin-bottom: 14px;">
              <input type="tel" name="phone" class="form-control" placeholder="10-Digit Phone Number" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 10px; margin-bottom: 14px;">
              <input type="text" name="move_from" class="form-control" value="Naubatpur, Patna" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
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
        NAUBATPUR LOGISTICS
      </span>
      <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin: 10px 0 20px 0;">
        Trusted Home & Commercial Shifting in <span style="color: #f59e0b;">Naubatpur, Patna</span>
      </h2>
      
      <p style="font-size: 1.05rem; color: #cbd5e1; margin-bottom: 20px;">
        Naubatpur is a rapidly expanding suburban and agricultural region located in South-West Patna. Shree Ashirwad Packers and Movers provides full-spectrum relocation, vehicle shipping, and commercial transport services with specialized closed-body containers across Naubatpur and Bihta corridors.
      </p>

      <p style="font-size: 1rem; color: #cbd5e1; margin-bottom: 25px;">
        Whether you are moving family goods into new housing developments or transporting machinery and office stock along the Patna-Bihta highway, our crew guarantees safe multi-layer packing, prompt highway transport, and end-to-end doorstep unloading.
      </p>

    </div>
  </section>

  <!-- 5. Comprehensive Cost & Tariff Rate Matrix Table -->
  <section style="padding: 50px 0; background: #070d1e; color: #ffffff;">
    <div class="container" style="max-width: 1000px;">
      <h3 style="font-size: 1.8rem; color: #ffffff; font-weight: 700; margin-bottom: 15px; text-align: center;">
        Estimated Relocation Rates for Naubatpur, Patna
      </h3>
      <p style="font-size: 0.95rem; color: #94a3b8; text-align: center; margin-bottom: 30px;">
        Transparent estimates with zero hidden charges. Final quotes depend on exact distance and total cargo volume.
      </p>
      
      <div style="overflow-x: auto;">
        <table style="width: 100%; border-collapse: collapse; background: #172a54; border-radius: 10px; overflow: hidden; border: 1px solid rgba(245, 158, 11, 0.3);">
          <thead>
            <tr style="background: #1e3a8a; color: #f59e0b; text-align: left;">
              <th style="padding: 14px 16px;">Shifting Size</th>
              <th style="padding: 14px 16px;">Local Within Patna (Naubatpur)</th>
              <th style="padding: 14px 16px;">Interstate Move (Patna to Other Cities)</th>
            </tr>
          </thead>
          <tbody>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.08);">
              <td style="padding: 12px 16px; font-weight: 700; color: #fff;">1 BHK House / Room Move</td>
              <td style="padding: 12px 16px; color: #6ee7b7;">₹3,000 - ₹5,000</td>
              <td style="padding: 12px 16px; color: #cbd5e1;">₹9,000 - ₹15,500</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.08);">
              <td style="padding: 12px 16px; font-weight: 700; color: #fff;">2 BHK Flat / House Shifting</td>
              <td style="padding: 12px 16px; color: #6ee7b7;">₹6,000 - ₹9,000</td>
              <td style="padding: 12px 16px; color: #cbd5e1;">₹14,000 - ₹23,000</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.08);">
              <td style="padding: 12px 16px; font-weight: 700; color: #fff;">3 BHK Villa / Large House</td>
              <td style="padding: 12px 16px; color: #6ee7b7;">₹9,000 - ₹14,000</td>
              <td style="padding: 12px 16px; color: #cbd5e1;">₹20,000 - ₹34,000</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.08);">
              <td style="padding: 12px 16px; font-weight: 700; color: #fff;">Two-Wheeler / Bike Carrier</td>
              <td style="padding: 12px 16px; color: #6ee7b7;">₹1,500 - ₹2,500</td>
              <td style="padding: 12px 16px; color: #cbd5e1;">₹4,000 - ₹7,500</td>
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
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff;">Our Shifting Services in Naubatpur Patna</h2>
        <p style="font-size: 0.95rem; color: #94a3b8;">Customized moving solutions for households, commercial setups, and vehicle owners</p>
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
          <i class="fas fa-truck-ramp-box" style="font-size: 2rem; color: #f59e0b; margin-bottom: 15px;"></i>
          <h3 style="font-size: 1.2rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">Commercial Goods Shifting</h3>
          <p style="font-size: 0.9rem; color: #cbd5e1; line-height: 1.6; margin: 0;">Systematic moving of warehouse equipment, commercial stock, and agricultural tools in heavy container trucks.</p>
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
          <p style="font-size: 0.85rem; color: #cbd5e1; margin: 0;">GPS-enabled closed containers ensure secure transit along Patna-Bihta highways.</p>
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
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff;">Why Choose Shree Ashirwad in Naubatpur Patna?</h2>
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
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff;">Frequently Asked Questions (Naubatpur Patna)</h2>
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
      <h2 style="font-size: 2.2rem; font-weight: 800; margin-bottom: 15px; color: #ffffff;">Planning a Move in Naubatpur Patna?</h2>
      <p style="font-size: 1.1rem; color: #cbd5e1; margin-bottom: 30px;">
        Contact Shree Ashirwad Packers and Movers today for a free home survey and instant price quote on WhatsApp.
      </p>
      <div style="display: flex; justify-content: center; gap: 20px; flex-wrap: wrap;">
        <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Now" style="padding: 15px 35px; background: #e11d48; color: #fff; border-radius: 50px; font-weight: 700; font-size: 1.05rem; text-decoration: none; box-shadow: 0 5px 20px rgba(225, 29, 72, 0.4);">
          <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call <?php echo SITE_PHONE; ?>
        </a>
        <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20need%20shifting%20services%20in%20Naubatpur%20Patna." target="_blank" title="WhatsApp Us" style="padding: 15px 35px; background: #10b981; color: #fff; border-radius: 50px; font-weight: 700; font-size: 1.05rem; text-decoration: none; box-shadow: 0 5px 20px rgba(16, 185, 129, 0.4);">
          <i class="fab fa-whatsapp" style="margin-right: 8px;"></i> Instant WhatsApp Estimate
        </a>
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
  "description": "Verified packers and movers in Naubatpur, Patna offering household shifting & warehouse logistics.",
  "url": "<?php echo $canonical_url; ?>",
  "telephone": "<?php echo SITE_PHONE_RAW; ?>",
  "address": {
    "@type": "PostalAddress",
    "addressLocality": "Naubatpur, Patna",
    "addressRegion": "Bihar",
    "addressCountry": "IN"
  },
  "areaServed": "Naubatpur, Patna, Bihar",
  "priceRange": "₹3000 - ₹34000"
}
</script>

<script>
function sendHeroWhatsAppLead(event, form) {
  event.preventDefault();
  var name = form.querySelector('[name="name"]').value;
  var phone = form.querySelector('[name="phone"]').value;
  var moveFrom = form.querySelector('[name="move_from"]').value;
  var moveTo = form.querySelector('[name="move_to"]').value;
  
  var message = "Hello Shree Ashirwad Packers,\n\nI would like a Shifting Quote for Naubatpur Patna:\n- Name: " + name + "\n- Phone: " + phone + "\n- Moving From: " + moveFrom + "\n- Moving To: " + moveTo;
  
  var whatsappUrl = "https://api.whatsapp.com/send?phone=918409531615&text=" + encodeURIComponent(message);
  window.open(whatsappUrl, '_blank');
}
</script>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>


