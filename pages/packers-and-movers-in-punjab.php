<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "Packers and Movers in Punjab | State Relocation Services | 8409531615";
$page_desc = "Top-rated Packers and Movers in Punjab. Professional home shifting, defense & NRI relocation, car & bike transport across Ludhiana, Amritsar, Jalandhar, Patiala, Mohali & Bathinda. Call (+91) 8409531615.";
$page_keywords = "packers and movers in punjab, packers and movers punjab, house shifting punjab, ludhiana packers movers, amritsar packers movers, jalandhar packers movers, mohali packers movers, patiala packers movers, car transport punjab, IBA approved movers punjab";

$page_city = "Punjab";

$faq_list = [
    [
        'q' => 'Which cities and industrial centers do you cover for packers and movers services in Punjab?',
        'a' => 'We cover all major cities and districts across Punjab including Ludhiana, Amritsar, Jalandhar, Patiala, Mohali (SAS Nagar), Bathinda, Pathankot, Hoshiarpur, Moga, Phagwara, Khanna, Firozpur, Zirakpur, and Rajpura.'
    ],
    [
        'q' => 'Are your relocation bills in Punjab compliant with Defense, Army, Bank, PSU, and Corporate reimbursement standards?',
        'a' => 'Yes, Shree Ashirwad Packers and Movers provides 100% genuine IBA-compliant GST invoices, Lorry Receipts (LR), itemized inventory slips, and money receipts accepted by the Indian Army, Air Force, Central Ministries, PSUs, Banks, and MNCs.'
    ],
    [
        'q' => 'What are the charges for home shifting across cities in Punjab?',
        'a' => 'Intra-state shifting within Punjab ranges from ₹4,000 to ₹7,500 for 1BHK, ₹7,500 to ₹14,000 for 2BHK, and ₹14,000 to ₹23,500 for 3BHK houses or independent kothis depending on distance and volume.'
    ],
    [
        'q' => 'How long does inter-city relocation take between major Punjab hubs via GT Road / Expressways?',
        'a' => 'Thanks to the GT Road (NH-44) and express highway network, moves between major Punjab cities like Ludhiana, Amritsar, Jalandhar, and Mohali are executed within 12 to 24 hours.'
    ],
    [
        'q' => 'Do you provide vehicle shipping for cars and motorcycles across Punjab and nationwide?',
        'a' => 'Yes, we operate enclosed hydraulic car carriers and dedicated two-wheeler container trucks connecting all Punjab cities to Delhi NCR, Himachal Pradesh, Jammu, Mumbai, Bangalore, Pune, Bihar, and pan-India.'
    ],
    [
        'q' => 'What packaging materials are used for long-distance household shifting in Punjab?',
        'a' => 'We use a 7-layer safety packing protocol featuring high-density air bubble wrap, 5-ply corrugated cardboard armor, stretch wrapping film, foam corner locks, and heavy wooden crates for delicate items.'
    ],
    [
        'q' => 'How many days in advance should I book packers and movers in Punjab?',
        'a' => 'We recommend booking 2 to 3 days prior for intra-state moves within Punjab and 3 to 5 days prior for inter-state relocations.'
    ],
    [
        'q' => 'Can your crew handle defense cantonment relocations in Amritsar, Jalandhar, Bathinda, and Pathankot?',
        'a' => 'Yes, our crew is experienced in army cantonment gate clearance protocols, military quarter packing, and defense officer relocation billing across Punjab.'
    ],
    [
        'q' => 'Do you provide full-value transit insurance for household goods moving across Punjab?',
        'a' => 'Yes, we provide 100% full-value transit insurance policy coverage safeguarding your belongings against highway transport hazards.'
    ],
    [
        'q' => 'How can I get a fast cost estimate for Punjab relocation?',
        'a' => 'Call +91 8409531615 or submit your moving details on WhatsApp for a fast transparent quote.'
    ]
];

require_once __DIR__ . '/../includes/header.php';
?>

<main class="site-main">

  <!-- Visual Breadcrumb Navigation Bar -->
  <div class="breadcrumb-wrapper">
    <div class="container">
      <ul class="breadcrumb" style="display: flex; gap: 8px; list-style: none; padding: 12px 0; font-size: 0.9rem; color: #cbd5e1;">
        <li><a href="<?php echo SITE_URL; ?>" style="color: #f59e0b; text-decoration: none;">Home</a></li>
        <li>/</li>
        <li><a href="<?php echo SITE_URL; ?>services" style="color: #f59e0b; text-decoration: none;">Services</a></li>
        <li>/</li>
        <li style="color: #94a3b8;">Packers and Movers in Punjab</li>
      </ul>
    </div>
  </div>

  <!-- Section 1: Hero Section with Lead Form -->
  <section class="hero-section" style="background: linear-gradient(135deg, #0b132b 0%, #172a54 100%); padding: 60px 0; color: #ffffff; position: relative;">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 15px;">
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 40px; align-items: center;">
        
        <div>
          <span style="background: rgba(245, 158, 11, 0.2); color: #f59e0b; padding: 6px 14px; border-radius: 20px; font-size: 0.85rem; font-weight: 700; text-transform: uppercase; letter-spacing: 1px;">
            Punjab State Relocation Hub #1 Approved Movers
          </span>
          <h1 style="font-size: 2.5rem; font-weight: 800; line-height: 1.2; margin: 15px 0; color: #ffffff;">
            Packers and Movers in <span style="color: #f59e0b;">Punjab</span>
          </h1>
          <p style="font-size: 1.1rem; color: #cbd5e1; line-height: 1.7; margin-bottom: 25px;">
            Top-rated home shifting, defense & NRI relocation, car & bike shipping services across Ludhiana, Amritsar, Jalandhar, Patiala, Mohali & Bathinda with 100% zero-damage guarantee and IBA claim approval.
          </p>
          <div style="display: flex; gap: 15px; flex-wrap: wrap;">
            <a href="tel:<?php echo SITE_PHONE_RAW; ?>" style="background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; padding: 14px 28px; border-radius: 50px; font-weight: 700; text-decoration: none; display: inline-flex; align-items: center; gap: 8px; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
              <i class="fas fa-phone-alt"></i> Call Now: <?php echo SITE_PHONE; ?>
            </a>
            <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20need%20a%20shifting%20quote%20for%20Punjab." target="_blank" style="background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; padding: 14px 28px; border-radius: 50px; font-weight: 700; text-decoration: none; display: inline-flex; align-items: center; gap: 8px; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
              <i class="fab fa-whatsapp"></i> WhatsApp Quote
            </a>
          </div>
        </div>

        <div style="background: #101c40; padding: 30px; border-radius: 16px; border: 1px solid rgba(245, 158, 11, 0.3); box-shadow: 0 10px 30px rgba(0,0,0,0.5);">
          <h3 style="font-size: 1.4rem; color: #f59e0b; font-weight: 700; margin-bottom: 20px; text-align: center;">
            Get Instant Punjab Shifting Quote
          </h3>
          <form onsubmit="sendHeroWhatsAppLead(event, this)">
            <div style="margin-bottom: 15px;">
              <input type="text" name="name" placeholder="Your Name *" required style="width: 100%; padding: 12px 15px; border-radius: 8px; border: 1px solid #1e293b; background: #0b132b; color: #ffffff; font-size: 0.95rem;">
            </div>
            <div style="margin-bottom: 15px;">
              <input type="tel" name="phone" placeholder="Mobile Number *" required style="width: 100%; padding: 12px 15px; border-radius: 8px; border: 1px solid #1e293b; background: #0b132b; color: #ffffff; font-size: 0.95rem;">
            </div>
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 10px; margin-bottom: 15px;">
              <input type="text" name="move_from" placeholder="Moving From (e.g. Ludhiana) *" required style="width: 100%; padding: 12px 15px; border-radius: 8px; border: 1px solid #1e293b; background: #0b132b; color: #ffffff; font-size: 0.95rem;">
              <input type="text" name="move_to" placeholder="Moving To *" required style="width: 100%; padding: 12px 15px; border-radius: 8px; border: 1px solid #1e293b; background: #0b132b; color: #ffffff; font-size: 0.95rem;">
            </div>
            <div style="margin-bottom: 20px;">
              <textarea name="message" placeholder="Item details / Shifting date (Optional)" style="width: 100%; padding: 12px 15px; border-radius: 8px; border: 1px solid #1e293b; background: #0b132b; color: #ffffff; font-size: 0.95rem; height: 75px; resize: none;"></textarea>
            </div>
            <button type="submit" style="width: 100%; padding: 14px; background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%); color: #0b132b; font-weight: 800; border: none; border-radius: 8px; font-size: 1.05rem; cursor: pointer; text-transform: uppercase; letter-spacing: 0.5px;">
              Request Free Estimate
            </button>
          </form>
        </div>

      </div>
    </div>
  </section>

  <!-- Section 2: Key Trust Badges -->
  <section style="padding: 30px 0; background: #070d1e; border-bottom: 1px solid rgba(255,255,255,0.05);">
    <div class="container" style="max-width: 1100px; margin: 0 auto; padding: 0 15px;">
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 20px; text-align: center;">
        <div style="background: #101c40; padding: 15px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #f59e0b; font-size: 1.5rem; font-weight: 800; margin: 0;">15+ Years</h4>
          <p style="color: #94a3b8; font-size: 0.85rem; margin: 5px 0 0 0;">Relocation Experience</p>
        </div>
        <div style="background: #101c40; padding: 15px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #f59e0b; font-size: 1.5rem; font-weight: 800; margin: 0;">8,400+</h4>
          <p style="color: #94a3b8; font-size: 0.85rem; margin: 5px 0 0 0;">Punjab State Moves Executed</p>
        </div>
        <div style="background: #101c40; padding: 15px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #f59e0b; font-size: 1.5rem; font-weight: 800; margin: 0;">100% IBA</h4>
          <p style="color: #94a3b8; font-size: 0.85rem; margin: 5px 0 0 0;">GST & Claim Compliant</p>
        </div>
        <div style="background: #101c40; padding: 15px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #f59e0b; font-size: 1.5rem; font-weight: 800; margin: 0;">Zero Damage</h4>
          <p style="color: #94a3b8; font-size: 0.85rem; margin: 5px 0 0 0;">7-Layer Safety Packing</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 3: Overview & Local Expertise -->
  <section style="padding: 60px 0; background: #0b132b; color: #ffffff;">
    <div class="container" style="max-width: 1100px; margin: 0 auto; padding: 0 15px;">
      <h2 style="font-size: 2rem; font-weight: 800; color: #ffffff; margin-bottom: 20px; text-align: center;">
        Master <span style="color: #f59e0b;">Relocation Infrastructure</span> Across Punjab
      </h2>
      <p style="font-size: 1.05rem; color: #cbd5e1; line-height: 1.8; text-align: justify; margin-bottom: 20px;">
        Punjab, the vibrant state of northern India, features major industrial, agricultural, educational, and military bases across Ludhiana, Amritsar, Jalandhar, Patiala, Mohali (SAS Nagar), Bathinda, Pathankot, and Hoshiarpur. With a high concentration of defense cantonments, NRI households, corporate IT hubs in Mohali, and manufacturing industries in Ludhiana/Jalandhar, Punjab requires dedicated, secure packing and transport logistics. <strong>Shree Ashirwad Packers and Movers</strong> provides master-level moving solutions across Punjab.
      </p>
      <p style="font-size: 1.05rem; color: #cbd5e1; line-height: 1.8; text-align: justify;">
        Our skilled moving crew uses 7-layer shockproof packing, custom wooden crates for delicate items, enclosed container vehicles, and expert handling for independent kothis, apartments, and military quarter relocations. We provide official IBA-compliant relocation invoices accepted by Defense Forces, Central/State Government units, PSUs, Banks, and MNCs.
      </p>
    </div>
  </section>

  <!-- Section 4: Cost Calculator Table -->
  <section style="padding: 60px 0; background: #070d1e; color: #ffffff;">
    <div class="container" style="max-width: 1100px; margin: 0 auto; padding: 0 15px;">
      <h2 style="font-size: 2rem; font-weight: 800; color: #ffffff; margin-bottom: 15px; text-align: center;">
        Punjab State Shifting <span style="color: #f59e0b;">Cost & Price Table</span>
      </h2>
      <p style="color: #94a3b8; text-align: center; margin-bottom: 35px;">
        Estimated cost breakdown for intra-state (within Punjab) and interstate relocation across India.
      </p>

      <div style="overflow-x: auto;">
        <table style="width: 100%; border-collapse: collapse; background: #101c40; border-radius: 10px; overflow: hidden; border: 1px solid rgba(245, 158, 11, 0.2);">
          <thead>
            <tr style="background: linear-gradient(135deg, #172a54 0%, #0b132b 100%); color: #f59e0b;">
              <th style="padding: 15px; text-align: left; border-bottom: 1px solid rgba(245, 158, 11, 0.3);">Shifting Category</th>
              <th style="padding: 15px; text-align: left; border-bottom: 1px solid rgba(245, 158, 11, 0.3);">Intra-State Move (Within Punjab Cities)</th>
              <th style="padding: 15px; text-align: left; border-bottom: 1px solid rgba(245, 158, 11, 0.3);">Inter-State Move (Punjab to Delhi/MH/KA/Bihar)</th>
            </tr>
          </thead>
          <tbody style="color: #cbd5e1; font-size: 0.95rem;">
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.05);">
              <td style="padding: 15px; font-weight: 600; color: #ffffff;">1 BHK House / Flat Shifting</td>
              <td style="padding: 15px;">₹4,000 - ₹7,500</td>
              <td style="padding: 15px;">₹8,500 - ₹16,000</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.05);">
              <td style="padding: 15px; font-weight: 600; color: #ffffff;">2 BHK House / Kothi Move</td>
              <td style="padding: 15px;">₹7,500 - ₹14,000</td>
              <td style="padding: 15px;">₹14,500 - ₹25,000</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.05);">
              <td style="padding: 15px; font-weight: 600; color: #ffffff;">3 BHK Villa / Large Kothi Move</td>
              <td style="padding: 15px;">₹14,000 - ₹23,500</td>
              <td style="padding: 15px;">₹22,500 - ₹39,000</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.05);">
              <td style="padding: 15px; font-weight: 600; color: #ffffff;">Two-Wheeler / Bike Shipping</td>
              <td style="padding: 15px;">₹1,400 - ₹2,400</td>
              <td style="padding: 15px;">₹3,200 - ₹6,500</td>
            </tr>
            <tr>
              <td style="padding: 15px; font-weight: 600; color: #ffffff;">Car Carrier Transport</td>
              <td style="padding: 15px;">₹2,800 - ₹5,200</td>
              <td style="padding: 15px;">₹8,500 - ₹17,000</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </section>

  <!-- Section 5: 7-Layer Packaging Process -->
  <section style="padding: 60px 0; background: #0b132b; color: #ffffff;">
    <div class="container" style="max-width: 1100px; margin: 0 auto; padding: 0 15px;">
      <h2 style="font-size: 2rem; font-weight: 800; color: #ffffff; margin-bottom: 20px; text-align: center;">
        Our Standard <span style="color: #f59e0b;">7-Layer Safety Packaging</span>
      </h2>
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 20px; margin-top: 30px;">
        <div style="background: #101c40; padding: 20px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <h3 style="color: #f59e0b; font-size: 1.1rem; font-weight: 700; margin-bottom: 10px;">Layer 1: Dust & Moisture Stretch Film</h3>
          <p style="color: #cbd5e1; font-size: 0.9rem; margin: 0;">Initial tight stretch wrapping to protect furniture surfaces from dust and moisture.</p>
        </div>
        <div style="background: #101c40; padding: 20px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <h3 style="color: #f59e0b; font-size: 1.1rem; font-weight: 700; margin-bottom: 10px;">Layer 2: Heavy-Duty Air Bubble Wrap</h3>
          <p style="color: #cbd5e1; font-size: 0.9rem; margin: 0;">High-density shock-absorbing bubble cushioning for appliances and glass items.</p>
        </div>
        <div style="background: #101c40; padding: 20px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <h3 style="color: #f59e0b; font-size: 1.1rem; font-weight: 700; margin-bottom: 10px;">Layer 3: 5-Ply Corrugated Cardboard Armor</h3>
          <p style="color: #cbd5e1; font-size: 0.9rem; margin: 0;">Rigid cardboard sheets wrapped over wooden furniture, washing machines, and refrigerators.</p>
        </div>
        <div style="background: #101c40; padding: 20px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <h3 style="color: #f59e0b; font-size: 1.1rem; font-weight: 700; margin-bottom: 10px;">Layer 4: High-Density Foam Edge Guards</h3>
          <p style="color: #cbd5e1; font-size: 0.9rem; margin: 0;">Form-fitted foam locks shielding television screens, mirrors, and marble tabletop corners.</p>
        </div>
        <div style="background: #101c40; padding: 20px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <h3 style="color: #f59e0b; font-size: 1.1rem; font-weight: 700; margin-bottom: 10px;">Layer 5: Waterproof Polyethylene Outer Shield</h3>
          <p style="color: #cbd5e1; font-size: 0.9rem; margin: 0;">Weatherproof plastic layer safeguarding mattresses and electronic goods during transit.</p>
        </div>
        <div style="background: #101c40; padding: 20px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <h3 style="color: #f59e0b; font-size: 1.1rem; font-weight: 700; margin-bottom: 10px;">Layer 6 & 7: Heavy Crating & Cargo Belt Lashing</h3>
          <p style="color: #cbd5e1; font-size: 0.9rem; margin: 0;">Custom wooden crates for fragile valuables, anchored securely with heavy nylon cargo straps inside container trucks.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 6: Key Cities & Hubs Covered in Punjab -->
  <section style="padding: 60px 0; background: #070d1e; color: #ffffff;">
    <div class="container" style="max-width: 1100px; margin: 0 auto; padding: 0 15px;">
      <h2 style="font-size: 2rem; font-weight: 800; color: #ffffff; margin-bottom: 20px; text-align: center;">
        Key City Hubs Covered <span style="color: #f59e0b;">in Punjab</span>
      </h2>
      <p style="color: #94a3b8; text-align: center; margin-bottom: 30px;">
        We operate active moving fleets across all major urban and industrial districts in Punjab:
      </p>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 15px;">
        <div style="background: #101c40; padding: 15px; border-radius: 8px; border: 1px solid rgba(245, 158, 11, 0.2); color: #cbd5e1; font-weight: 600;">
          <i class="fas fa-city" style="color: #f59e0b; margin-right: 8px;"></i> Ludhiana (Civil Lines, Model Town)
        </div>
        <div style="background: #101c40; padding: 15px; border-radius: 8px; border: 1px solid rgba(245, 158, 11, 0.2); color: #cbd5e1; font-weight: 600;">
          <i class="fas fa-city" style="color: #f59e0b; margin-right: 8px;"></i> Amritsar (Ranjit Avenue, Mall Road)
        </div>
        <div style="background: #101c40; padding: 15px; border-radius: 8px; border: 1px solid rgba(245, 158, 11, 0.2); color: #cbd5e1; font-weight: 600;">
          <i class="fas fa-city" style="color: #f59e0b; margin-right: 8px;"></i> Jalandhar (Model Town, Cantt Area)
        </div>
        <div style="background: #101c40; padding: 15px; border-radius: 8px; border: 1px solid rgba(245, 158, 11, 0.2); color: #cbd5e1; font-weight: 600;">
          <i class="fas fa-city" style="color: #f59e0b; margin-right: 8px;"></i> Mohali (SAS Nagar, Sectors 60-110)
        </div>
        <div style="background: #101c40; padding: 15px; border-radius: 8px; border: 1px solid rgba(245, 158, 11, 0.2); color: #cbd5e1; font-weight: 600;">
          <i class="fas fa-city" style="color: #f59e0b; margin-right: 8px;"></i> Patiala (Urban Estate, SST Nagar)
        </div>
        <div style="background: #101c40; padding: 15px; border-radius: 8px; border: 1px solid rgba(245, 158, 11, 0.2); color: #cbd5e1; font-weight: 600;">
          <i class="fas fa-city" style="color: #f59e0b; margin-right: 8px;"></i> Bathinda & Pathankot Defense Zone
        </div>
        <div style="background: #101c40; padding: 15px; border-radius: 8px; border: 1px solid rgba(245, 158, 11, 0.2); color: #cbd5e1; font-weight: 600;">
          <i class="fas fa-city" style="color: #f59e0b; margin-right: 8px;"></i> Hoshiarpur, Moga & Phagwara
        </div>
        <div style="background: #101c40; padding: 15px; border-radius: 8px; border: 1px solid rgba(245, 158, 11, 0.2); color: #cbd5e1; font-weight: 600;">
          <i class="fas fa-city" style="color: #f59e0b; margin-right: 8px;"></i> Zirakpur, Khanna & Rajpura Corridor
        </div>
      </div>
    </div>
  </section>

  <!-- Section 7: Intercity & Interstate Express Routes -->
  <section style="padding: 60px 0; background: #0b132b; color: #ffffff;">
    <div class="container" style="max-width: 1100px; margin: 0 auto; padding: 0 15px;">
      <h2 style="font-size: 2rem; font-weight: 800; color: #ffffff; margin-bottom: 20px; text-align: center;">
        Interstate Express Relocation Routes <span style="color: #f59e0b;">From Punjab</span>
      </h2>
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 20px;">
        <div style="background: #101c40; padding: 20px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h3 style="color: #f59e0b; font-size: 1.1rem; font-weight: 700; margin-bottom: 10px;">Punjab to Delhi NCR / Haryana</h3>
          <p style="color: #cbd5e1; font-size: 0.9rem; margin: 0;">Direct NH-44 (Grand Trunk Road) express container shuttle.</p>
        </div>
        <div style="background: #101c40; padding: 20px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h3 style="color: #f59e0b; font-size: 1.1rem; font-weight: 700; margin-bottom: 10px;">Punjab to Jammu / Himachal Pradesh</h3>
          <p style="color: #cbd5e1; font-size: 0.9rem; margin: 0;">Direct hill corridor transport with special protective container packaging.</p>
        </div>
        <div style="background: #101c40; padding: 20px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h3 style="color: #f59e0b; font-size: 1.1rem; font-weight: 700; margin-bottom: 10px;">Punjab to Mumbai / Pune / Bangalore</h3>
          <p style="color: #cbd5e1; font-size: 0.9rem; margin: 0;">Interstate freight container transport with door-to-door unpacking.</p>
        </div>
        <div style="background: #101c40; padding: 20px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h3 style="color: #f59e0b; font-size: 1.1rem; font-weight: 700; margin-bottom: 10px;">Punjab to Patna / Ranchi / Kolkata</h3>
          <p style="color: #cbd5e1; font-size: 0.9rem; margin: 0;">Pan-India relocation with live GPS vehicle tracking and IBA claim billing.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 8: Specialized Relocation Services -->
  <section style="padding: 60px 0; background: #070d1e; color: #ffffff;">
    <div class="container" style="max-width: 1100px; margin: 0 auto; padding: 0 15px;">
      <h2 style="font-size: 2rem; font-weight: 800; color: #ffffff; margin-bottom: 20px; text-align: center;">
        Our Comprehensive <span style="color: #f59e0b;">Moving Solutions</span>
      </h2>
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); gap: 20px;">
        <div style="background: #101c40; padding: 20px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2); text-align: center;">
          <i class="fas fa-home" style="font-size: 2rem; color: #f59e0b; margin-bottom: 15px;"></i>
          <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700;">State-Wide Home & Kothi Shifting</h3>
          <p style="color: #cbd5e1; font-size: 0.85rem; line-height: 1.6;">Complete packing, loading, long-haul highway transport, and unpacking.</p>
        </div>
        <div style="background: #101c40; padding: 20px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2); text-align: center;">
          <i class="fas fa-shield-alt" style="font-size: 2rem; color: #f59e0b; margin-bottom: 15px;"></i>
          <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700;">Defense & Military Cantonment Move</h3>
          <p style="color: #cbd5e1; font-size: 0.85rem; line-height: 1.6;">Official IBA claim billing for Army, Air Force, and Police officer relocations.</p>
        </div>
        <div style="background: #101c40; padding: 20px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2); text-align: center;">
          <i class="fas fa-car" style="font-size: 2rem; color: #f59e0b; margin-bottom: 15px;"></i>
          <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700;">Car Transportation</h3>
          <p style="color: #cbd5e1; font-size: 0.85rem; line-height: 1.6;">Enclosed hydraulic car carriers for safe scratch-free vehicle transport nationwide.</p>
        </div>
        <div style="background: #101c40; padding: 20px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2); text-align: center;">
          <i class="fas fa-motorcycle" style="font-size: 2rem; color: #f59e0b; margin-bottom: 15px;"></i>
          <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700;">Bike Shipping</h3>
          <p style="color: #cbd5e1; font-size: 0.85rem; line-height: 1.6;">Multi-layer bubble and corrugated sheet padding for two-wheeler transport.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 9: Customer Reviews -->
  <section style="padding: 60px 0; background: #0b132b; color: #ffffff;">
    <div class="container" style="max-width: 1100px; margin: 0 auto; padding: 0 15px;">
      <h2 style="font-size: 2rem; font-weight: 800; color: #ffffff; margin-bottom: 30px; text-align: center;">
        Punjab Client <span style="color: #f59e0b;">Testimonials</span>
      </h2>
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 20px;">
        <div style="background: #101c40; padding: 25px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <div style="color: #f59e0b; margin-bottom: 10px;">★★★★★</div>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.7; font-style: italic;">
            "Shifted our kothi household items from Model Town Ludhiana to Mohali Sector 70. Excellent bubble packing for heavy wooden furniture and zero damage."
          </p>
          <h4 style="color: #ffffff; font-size: 0.95rem; font-weight: 700; margin: 15px 0 0 0;">— Harpreet Singh Grewal (Industrialist)</h4>
        </div>
        <div style="background: #101c40; padding: 25px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <div style="color: #f59e0b; margin-bottom: 10px;">★★★★★</div>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.7; font-style: italic;">
            "Relocated defense quarter goods from Jalandhar Cantt to Delhi. Provided 100% genuine IBA approved bill for army relocation claim reimbursement."
          </p>
          <h4 style="color: #ffffff; font-size: 0.95rem; font-weight: 700; margin: 15px 0 0 0;">— Col. Gurmeet Dhillon (Indian Army)</h4>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 10: Frequently Asked Questions -->
  <section style="padding: 60px 0; background: #070d1e; color: #ffffff;">
    <div class="container" style="max-width: 1000px; margin: 0 auto; padding: 0 15px;">
      
      <div style="text-align: center; margin-bottom: 40px;">
        <span style="background: rgba(245, 158, 11, 0.2); color: #f59e0b; padding: 6px 16px; border-radius: 20px; font-size: 0.85rem; font-weight: 700; text-transform: uppercase;">
          Got Questions?
        </span>
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin-top: 10px;">
          Frequently Asked Questions About <span style="color: #f59e0b;">Punjab Shifting</span>
        </h2>
      </div>

      <div style="display: flex; flex-direction: column; gap: 16px;">
        <?php foreach ($faq_list as $index => $faq): ?>
        <div style="background: #101c40; padding: 20px 24px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Q<?php echo ($index + 1); ?>: <?php echo htmlspecialchars($faq['q']); ?></h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.7;">
            <?php echo htmlspecialchars($faq['a']); ?>
          </p>
        </div>
        <?php endforeach; ?>
      </div>

    </div>
  </section>

  <!-- Section 11: Call To Action Banner -->
  <section class="cta-banner-section" style="padding: 70px 0; background: linear-gradient(135deg, #172a54 0%, #0b132b 100%); border-top: 1.5px solid rgba(245, 158, 11, 0.4); color: #ffffff;">
    <div class="container" style="max-width: 900px; text-align: center;">
      
      <span class="section-tag" style="background: rgba(245, 158, 11, 0.2); color: #f59e0b; padding: 6px 16px; border-radius: 20px; font-size: 0.85rem; font-weight: 700; text-transform: uppercase;">
        Book Punjab Shifting Services
      </span>

      <h2 style="font-size: 2.3rem; font-weight: 800; margin: 15px 0; color: #ffffff;">
        Ready to Move with <span style="color: #f59e0b;">Packers and Movers in Punjab</span>?
      </h2>

      <p style="font-size: 1.05rem; color: #cbd5e1; max-width: 750px; margin: 0 auto 30px auto; line-height: 1.7;">
        Contact our Punjab state relocation manager today for a transparent price estimate and enjoy smooth, safe, zero-damage home shifting across Punjab & pan-India.
      </p>

      <div style="display: flex; gap: 15px; justify-content: center; flex-wrap: wrap; margin-bottom: 25px;">
        <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Now" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 30px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1.05rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
          <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call Now: <?php echo SITE_PHONE; ?>
        </a>
        <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20need%20a%20shifting%20quote%20for%20Punjab." title="Chat on WhatsApp" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 30px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1.05rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
          <i class="fab fa-whatsapp" style="margin-right: 8px;"></i> Chat on WhatsApp
        </a>
        <a href="<?php echo SITE_URL; ?>contact" title="Contact Office" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 30px; background: linear-gradient(135deg, #1e293b 0%, #0f172a 100%); border: 1.5px solid #f59e0b; color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1.05rem; text-decoration: none; box-shadow: 0 4px 15px rgba(245, 158, 11, 0.2);">
          <i class="fas fa-map-marker-alt" style="margin-right: 8px;"></i> Contact Office
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
  
  var message = "Hello Shree Ashirwad Packers & Movers,\n\nI would like to request a Shifting Quote for Punjab:\n- Name: " + name + "\n- Phone: " + phone + "\n- Moving From: " + moveFrom + "\n- Moving To: " + moveTo;
  
  if (extraMsg && extraMsg.trim() !== '') {
    message += "\n- Details: " + extraMsg;
  }
  
  var whatsappUrl = "https://api.whatsapp.com/send?phone=918409531615&text=" + encodeURIComponent(message);
  window.location.href = whatsappUrl;
}
</script>

<section style="padding: 45px 0; background: #f8fafc; border-top: 1px solid #e2e8f0;">
  <div class="container" style="max-width: 1100px; margin: 0 auto; padding: 0 15px;">
    <div style="display: grid; gap: 24px; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); align-items: center;">
      <div>
        <span style="display: inline-block; color: #d32f2f; font-weight: 700; text-transform: uppercase; font-size: 0.8rem; letter-spacing: 1px; margin-bottom: 10px;">Punjab Relocation Hub</span>
        <h3 style="font-size: 1.55rem; color: #0f172a; font-weight: 800; margin: 0 0 12px 0;">Safe moving solutions across Punjab & India</h3>
        <p style="font-size: 1.0rem; color: #475569; line-height: 1.8; margin: 0;">Our professional packing team ensures high-grade bubble wrapping, careful loading, and prompt delivery across Ludhiana, Amritsar, Jalandhar, Patiala, Mohali, Bathinda, Pathankot, Hoshiarpur, and all Punjab districts.</p>
      </div>
      <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 14px;">
        <img title="Shree Ashirwad Packers and Movers" src="<?php echo SITE_URL; ?>assets/images/gallery/gallery-2.webp" alt="Protective packing for Punjab relocation work" style="width: 100%; height: 250px; object-fit: cover; border-radius: 12px; border: 1px solid #e2e8f0; box-shadow: 0 4px 12px rgba(0,0,0,0.08);" loading="lazy">
        <img title="Shree Ashirwad Packers and Movers" src="<?php echo SITE_URL; ?>assets/images/gallery/gallery-4.webp" alt="Home shifting in Punjab" style="width: 100%; height: 250px; object-fit: cover; border-radius: 12px; border: 1px solid #e2e8f0; box-shadow: 0 4px 12px rgba(0,0,0,0.08);" loading="lazy">
      </div>
    </div>
  </div>
</section>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
