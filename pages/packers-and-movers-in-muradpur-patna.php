<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "Packers and Movers in Muradpur Patna | Safe Local Shifting";
$page_desc = "Hire trusted packers and movers in Muradpur, Patna. Affordable house relocation, student room moving near Ashok Rajpath & PMCH with IBA GST bill.";
$page_keywords = "packers and movers in muradpur patna, best packers and movers muradpur, movers and packers muradpur patna, local shifting muradpur, house shifting services muradpur patna";
$canonical_url = "https://shreeashirwadpackersandmovers.com/pages/packers-and-movers-in-muradpur-patna.php";

$page_city = "Muradpur, Patna, Bihar";

$faq_list = [
    [
        'q' => 'What are the charges for home & room shifting in Muradpur, Patna?',
        'a' => 'Local 1BHK/room shifting in Muradpur costs between ₹2,200 and ₹4,500, while 2BHK/3BHK house relocation ranges from ₹5,000 to ₹11,500 based on goods volume.'
    ],
    [
        'q' => 'Which areas around Muradpur and Ashok Rajpath are covered?',
        'a' => 'We cover Muradpur, Ashok Rajpath, Sabzibagh, PMCH area, Mahendru, and Patna University campus surroundings.'
    ],
    [
        'q' => 'Do you provide IBA approved GST bills for official claims?',
        'a' => 'Yes, 100% genuine IBA-compliant GST invoices, consignment notes (LR), and itemized inventory receipts are provided.'
    ],
    [
        'q' => 'What packing materials are used for fragile electronics & books?',
        'a' => 'We utilize multi-layer bubble wrap, 5-layer corrugated boxes, waterproof stretch film, and corner edge protectors.'
    ],
    [
        'q' => 'How do moving trucks navigate congested Ashok Rajpath near Muradpur?',
        'a' => 'Our crew utilizes compact pickup mini-trucks and schedules loading/unloading during early morning or off-peak hours.'
    ],
    [
        'q' => 'Is bike transport available from Muradpur Patna?',
        'a' => 'Yes, safe door-to-door two-wheeler transport with heavy bubble padding is available.'
    ],
    [
        'q' => 'Do you help medical students & hospital staff with quick room shifting in Muradpur?',
        'a' => 'Yes, we specialize in swift, single-day room and hostel/apartment shifting for PMCH doctors, staff, and students.'
    ],
    [
        'q' => 'Is transit insurance included with long-distance shifting from Muradpur?',
        'a' => 'Yes, complete transit insurance (1.5%) is available for full safety during intercity relocations.'
    ],
    [
        'q' => 'What items are restricted during packing?',
        'a' => 'Gas cylinders, flammable liquids, hazardous chemicals, cash, jewelry, and legal documents are excluded.'
    ],
    [
        'q' => 'How can I book Packers and Movers in Muradpur Patna?',
        'a' => 'Call +91 8409531615 or submit your shifting requirements on WhatsApp for an immediate free quote.'
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
            PACKERS AND MOVERS MURADPUR PATNA
          </span>
          <h1 style="font-size: 2.7rem; font-weight: 800; line-height: 1.2; margin-bottom: 20px; color: #ffffff;">
            Professional <span style="color: #f59e0b;">Packers and Movers in Muradpur Patna</span>
          </h1>
          <p style="font-size: 1.12rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 25px;">
            Shree Ashirwad Packers and Movers provides expert household shifting, room moving, and office relocation in Muradpur, Patna. Serving Ashok Rajpath, Sabzibagh, and PMCH area with 100% IBA-approved GST invoices.
          </p>

          <div style="display: flex; gap: 15px; flex-wrap: wrap; margin-bottom: 30px;">
            <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Now" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
              <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call Now: <?php echo SITE_PHONE; ?>
            </a>
            <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20a%20shifting%20quote%20for%20Muradpur%20Patna." title="Chat on WhatsApp" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
              <i class="fab fa-whatsapp" style="margin-right: 8px;"></i> Chat on WhatsApp
            </a>
          </div>

          <div style="display: flex; gap: 20px; font-size: 0.9rem; color: #94a3b8;">
            <span><strong style="color: #f59e0b;">100% Safe</strong> Packing</span>
            <span><strong style="color: #f59e0b;">IBA Approved</strong> GST Bill</span>
            <span><strong style="color: #f59e0b;">Same Day</strong> Local Shift</span>
          </div>
        </div>

        <!-- Hero Lead Form Column -->
        <div class="hero-form-card" style="background: rgba(255, 255, 255, 0.05); backdrop-filter: blur(10px); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 16px; padding: 30px; box-shadow: 0 15px 35px rgba(0,0,0,0.4);">
          <h2 style="font-size: 1.4rem; color: #ffffff; margin-bottom: 8px; font-weight: 700; text-align: center;">Get Muradpur Quote</h2>
          <p style="font-size: 0.85rem; color: #94a3b8; text-align: center; margin-bottom: 20px;">Receive transparent cost estimation on WhatsApp</p>

          <form action="#" method="POST" onsubmit="sendHeroWhatsAppLead(event, this);">
            <div style="margin-bottom: 14px;">
              <input type="text" name="name" class="form-control" placeholder="Your Full Name" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="margin-bottom: 14px;">
              <input type="tel" name="phone" class="form-control" placeholder="10-Digit Phone Number" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 10px; margin-bottom: 14px;">
              <input type="text" name="move_from" class="form-control" value="Muradpur, Patna" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
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
        MURADPUR LOGISTICS
      </span>
      <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin: 10px 0 20px 0;">
        Doorstep House & Room Relocation in <span style="color: #f59e0b;">Muradpur, Patna</span>
      </h2>
      
      <p style="font-size: 1.05rem; color: #cbd5e1; margin-bottom: 20px;">
        Muradpur is a core commercial and educational hub along Ashok Rajpath, situated close to PMCH hospital and Patna University. Shree Ashirwad Packers and Movers provides fast, secure, and hassle-free packing and moving services for families, doctors, and students in Muradpur.
      </p>

      <p style="font-size: 1rem; color: #cbd5e1; margin-bottom: 25px;">
        Navigating narrow lanes and high-density traffic near Sabzibagh and Ashok Rajpath requires seasoned local expertise. Our trained crews utilize compact transport vehicles, bubble-wrap heavy goods, and schedule shifts during off-peak hours for smooth execution.
      </p>

    </div>
  </section>

  <!-- 5. Comprehensive Cost & Tariff Rate Matrix Table -->
  <section style="padding: 50px 0; background: #070d1e; color: #ffffff;">
    <div class="container" style="max-width: 1000px;">
      <h3 style="font-size: 1.8rem; color: #ffffff; font-weight: 700; margin-bottom: 15px; text-align: center;">
        Estimated Relocation Rates for Muradpur, Patna
      </h3>
      <p style="font-size: 0.95rem; color: #94a3b8; text-align: center; margin-bottom: 30px;">
        Transparent estimates with zero hidden charges. Final quotes depend on exact distance and total cargo volume.
      </p>
      
      <div style="overflow-x: auto;">
        <table style="width: 100%; border-collapse: collapse; background: #172a54; border-radius: 10px; overflow: hidden; border: 1px solid rgba(245, 158, 11, 0.3);">
          <thead>
            <tr style="background: #1e3a8a; color: #f59e0b; text-align: left;">
              <th style="padding: 14px 16px;">Shifting Size</th>
              <th style="padding: 14px 16px;">Local Within Patna (Muradpur)</th>
              <th style="padding: 14px 16px;">Interstate Move (Patna to Other Cities)</th>
            </tr>
          </thead>
          <tbody>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.08);">
              <td style="padding: 12px 16px; font-weight: 700; color: #fff;">1 BHK Apartment / Student Room</td>
              <td style="padding: 12px 16px; color: #6ee7b7;">₹2,200 - ₹4,500</td>
              <td style="padding: 12px 16px; color: #cbd5e1;">₹8,500 - ₹14,500</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.08);">
              <td style="padding: 12px 16px; font-weight: 700; color: #fff;">2 BHK Apartment / Flat</td>
              <td style="padding: 12px 16px; color: #6ee7b7;">₹4,500 - ₹7,500</td>
              <td style="padding: 12px 16px; color: #cbd5e1;">₹12,500 - ₹21,000</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.08);">
              <td style="padding: 12px 16px; font-weight: 700; color: #fff;">3 BHK Independent House / Villa</td>
              <td style="padding: 12px 16px; color: #6ee7b7;">₹7,500 - ₹11,500</td>
              <td style="padding: 12px 16px; color: #cbd5e1;">₹18,000 - ₹30,000</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.08);">
              <td style="padding: 12px 16px; font-weight: 700; color: #fff;">Two-Wheeler / Bike Transport</td>
              <td style="padding: 12px 16px; color: #6ee7b7;">₹1,200 - ₹2,200</td>
              <td style="padding: 12px 16px; color: #cbd5e1;">₹3,500 - ₹6,500</td>
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
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff;">Our Shifting Services in Muradpur Patna</h2>
        <p style="font-size: 0.95rem; color: #94a3b8;">Customized moving solutions for households, students, and commercial entities</p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 25px;">
        <div style="background: rgba(255,255,255,0.03); padding: 25px; border-radius: 12px; border: 1px solid rgba(245,158,11,0.2);">
          <i class="fas fa-home" style="font-size: 2rem; color: #f59e0b; margin-bottom: 15px;"></i>
          <h3 style="font-size: 1.2rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">Household Shifting</h3>
          <p style="font-size: 0.9rem; color: #cbd5e1; line-height: 1.6; margin: 0;">Complete home packing with 5-layer corrugated boxes, bubble wraps, foam cushions, and careful furniture dismantling.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); padding: 25px; border-radius: 12px; border: 1px solid rgba(245,158,11,0.2);">
          <i class="fas fa-user-graduate" style="font-size: 2rem; color: #f59e0b; margin-bottom: 15px;"></i>
          <h3 style="font-size: 1.2rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">Student & Doctor Room Moving</h3>
          <p style="font-size: 0.9rem; color: #cbd5e1; line-height: 1.6; margin: 0;">Affordable mini-truck room moving for PMCH medical staff, doctors, and Patna University students.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); padding: 25px; border-radius: 12px; border: 1px solid rgba(245,158,11,0.2);">
          <i class="fas fa-motorcycle" style="font-size: 2rem; color: #f59e0b; margin-bottom: 15px;"></i>
          <h3 style="font-size: 1.2rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">Bike & Vehicle Shipping</h3>
          <p style="font-size: 0.9rem; color: #cbd5e1; line-height: 1.6; margin: 0;">Door-to-door two-wheeler and four-wheeler transport in enclosed carriers with full protection.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); padding: 25px; border-radius: 12px; border: 1px solid rgba(245,158,11,0.2);">
          <i class="fas fa-file-invoice" style="font-size: 2rem; color: #f59e0b; margin-bottom: 15px;"></i>
          <h3 style="font-size: 1.2rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">IBA Approved Bills</h3>
          <p style="font-size: 0.9rem; color: #cbd5e1; line-height: 1.6; margin: 0;">100% official GST invoices, LR consignment notes, and itemized bills accepted by government & corporate claims.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); padding: 25px; border-radius: 12px; border: 1px solid rgba(245,158,11,0.2);">
          <i class="fas fa-shield-alt" style="font-size: 2rem; color: #f59e0b; margin-bottom: 15px;"></i>
          <h3 style="font-size: 1.2rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">Transit Risk Coverage</h3>
          <p style="font-size: 0.9rem; color: #cbd5e1; line-height: 1.6; margin: 0;">Full door-to-door transit risk coverage to safeguard your valuables against road mishaps or natural emergencies.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); padding: 25px; border-radius: 12px; border: 1px solid rgba(245,158,11,0.2);">
          <i class="fas fa-boxes" style="font-size: 2rem; color: #f59e0b; margin-bottom: 15px;"></i>
          <h3 style="font-size: 1.2rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">Office & Shop Relocation</h3>
          <p style="font-size: 0.9rem; color: #cbd5e1; line-height: 1.6; margin: 0;">Systematic moving of commercial stock, medical gear, and office furniture along Ashok Rajpath.</p>
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
          <p style="font-size: 0.85rem; color: #cbd5e1; margin: 0;">Packing delicate items, books, appliances, and furniture safely.</p>
        </div>

        <div style="text-align: center; padding: 20px; background: rgba(255,255,255,0.02); border-radius: 10px; border-top: 3px solid #f59e0b;">
          <div style="width: 40px; height: 40px; background: #f59e0b; color: #000; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 800; margin: 0 auto 15px auto;">3</div>
          <h4 style="font-size: 1.1rem; color: #fff; font-weight: 700; margin-bottom: 8px;">Off-Peak Transit</h4>
          <p style="font-size: 0.85rem; color: #cbd5e1; margin: 0;">Smart routing to bypass Ashok Rajpath congestion efficiently.</p>
        </div>

        <div style="text-align: center; padding: 20px; background: rgba(255,255,255,0.02); border-radius: 10px; border-top: 3px solid #f59e0b;">
          <div style="width: 40px; height: 40px; background: #f59e0b; color: #000; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 800; margin: 0 auto 15px auto;">4</div>
          <h4 style="font-size: 1.1rem; color: #fff; font-weight: 700; margin-bottom: 8px;">Doorstep Setup</h4>
          <p style="font-size: 0.85rem; color: #cbd5e1; margin: 0;">Careful unloading, room placement, and basic unpacking support.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- 8. Why Choose Us Grid -->
  <section style="padding: 60px 0; background: #0b132b; color: #ffffff;">
    <div class="container" style="max-width: 1000px;">
      <div style="text-align: center; margin-bottom: 40px;">
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff;">Why Choose Shree Ashirwad in Muradpur Patna?</h2>
      </div>

      <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 25px;">
        <div style="display: flex; gap: 15px; background: rgba(255,255,255,0.02); padding: 20px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <i class="fas fa-user-shield" style="font-size: 1.8rem; color: #f59e0b;"></i>
          <div>
            <h4 style="font-size: 1.1rem; color: #fff; font-weight: 700; margin-bottom: 5px;">Trained Local Packers</h4>
            <p style="font-size: 0.88rem; color: #cbd5e1; margin: 0;">We never sub-contract your valuable household goods to third-party laborers.</p>
          </div>
        </div>

        <div style="display: flex; gap: 15px; background: rgba(255,255,255,0.02); padding: 20px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <i class="fas fa-calculator" style="font-size: 1.8rem; color: #f59e0b;"></i>
          <div>
            <h4 style="font-size: 1.1rem; color: #fff; font-weight: 700; margin-bottom: 5px;">Fixed Transparent Rates</h4>
            <p style="font-size: 0.88rem; color: #cbd5e1; margin: 0;">Zero last-minute surprises or hidden charges on shifting day.</p>
          </div>
        </div>

        <div style="display: flex; gap: 15px; background: rgba(255,255,255,0.02); padding: 20px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <i class="fas fa-truck-pickup" style="font-size: 1.8rem; color: #f59e0b;"></i>
          <div>
            <h4 style="font-size: 1.1rem; color: #fff; font-weight: 700; margin-bottom: 5px;">Narrow Lane Maneuvering</h4>
            <p style="font-size: 0.88rem; color: #cbd5e1; margin: 0;">Compact pickup fleets tailored for busy market areas like Sabzibagh and Ashok Rajpath.</p>
          </div>
        </div>

        <div style="display: flex; gap: 15px; background: rgba(255,255,255,0.02); padding: 20px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <i class="fas fa-headset" style="font-size: 1.8rem; color: #f59e0b;"></i>
          <div>
            <h4 style="font-size: 1.1rem; color: #fff; font-weight: 700; margin-bottom: 5px;">Dedicated Move Support</h4>
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
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff;">Frequently Asked Questions (Muradpur Patna)</h2>
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
      <h2 style="font-size: 2.2rem; font-weight: 800; margin-bottom: 15px; color: #ffffff;">Planning a Move in Muradpur Patna?</h2>
      <p style="font-size: 1.1rem; color: #cbd5e1; margin-bottom: 30px;">
        Contact Shree Ashirwad Packers and Movers today for a free home survey and instant price quote on WhatsApp.
      </p>
      <div style="display: flex; justify-content: center; gap: 20px; flex-wrap: wrap;">
        <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Now" style="padding: 15px 35px; background: #e11d48; color: #fff; border-radius: 50px; font-weight: 700; font-size: 1.05rem; text-decoration: none; box-shadow: 0 5px 20px rgba(225, 29, 72, 0.4);">
          <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call <?php echo SITE_PHONE; ?>
        </a>
        <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20need%20shifting%20services%20in%20Muradpur%20Patna." target="_blank" title="WhatsApp Us" style="padding: 15px 35px; background: #10b981; color: #fff; border-radius: 50px; font-weight: 700; font-size: 1.05rem; text-decoration: none; box-shadow: 0 5px 20px rgba(16, 185, 129, 0.4);">
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
  "description": "Trusted packers and movers in Muradpur, Patna offering home & room relocation.",
  "url": "<?php echo $canonical_url; ?>",
  "telephone": "<?php echo SITE_PHONE_RAW; ?>",
  "address": {
    "@type": "PostalAddress",
    "addressLocality": "Muradpur, Patna",
    "addressRegion": "Bihar",
    "addressCountry": "IN"
  },
  "areaServed": "Muradpur, Patna, Bihar",
  "priceRange": "₹2200 - ₹30000"
}
</script>

<script>
function sendHeroWhatsAppLead(event, form) {
  event.preventDefault();
  var name = form.querySelector('[name="name"]').value;
  var phone = form.querySelector('[name="phone"]').value;
  var moveFrom = form.querySelector('[name="move_from"]').value;
  var moveTo = form.querySelector('[name="move_to"]').value;
  
  var message = "Hello Shree Ashirwad Packers,\n\nI would like a Shifting Quote for Muradpur Patna:\n- Name: " + name + "\n- Phone: " + phone + "\n- Moving From: " + moveFrom + "\n- Moving To: " + moveTo;
  
  var whatsappUrl = "https://api.whatsapp.com/send?phone=918409531615&text=" + encodeURIComponent(message);
  window.open(whatsappUrl, '_blank');
}
</script>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>


