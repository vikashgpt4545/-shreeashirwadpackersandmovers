<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "Packers and Movers in Paliganj Patna | Safe Local & Outstation Shifting";
$page_desc = "Hire verified packers and movers in Paliganj Patna. Top home relocation, agricultural gear moving & vehicle transport with 100% IBA GST bills & insurance.";
$page_keywords = "packers and movers in paliganj patna, best packers and movers paliganj, movers and packers paliganj patna, house shifting paliganj, local relocation paliganj patna";
$canonical_url = "https://shreeashirwadpackersandmovers.com/pages/packers-and-movers-in-paliganj-patna.php";

$page_city = "Paliganj, Patna, Bihar";

$faq_list = [
    [
        'q' => 'What are the charges for household shifting in Paliganj, Patna?',
        'a' => 'Local 1BHK/2BHK house relocation in Paliganj starts from ₹3,000 to ₹7,500, while 3BHK/large house moving costs ₹8,000 to ₹14,500 based on cargo volume.'
    ],
    [
        'q' => 'Which nearby areas around Paliganj and Bikram highway are covered?',
        'a' => 'We service Paliganj town, Dulhin Bazar, Bikram, Naubatpur, and connecting routes to Patna city.'
    ],
    [
        'q' => 'Do you provide IBA approved GST bills for official claims?',
        'a' => 'Yes, 100% genuine IBA-compliant GST tax invoices, consignment notes (LR), and itemized inventory receipts are provided.'
    ],
    [
        'q' => 'What packing materials are used for long-distance relocations from Paliganj?',
        'a' => 'We use 7-layer packaging: heavy bubble wrap, 5-layer corrugated cartons, foam sheets, edge guards, and waterproof stretch wraps.'
    ],
    [
        'q' => 'Is bike and vehicle transport available from Paliganj Patna?',
        'a' => 'Yes, safe door-to-door two-wheeler and four-wheeler transport in closed container trucks is available.'
    ],
    [
        'q' => 'How early should I book shifting services in Paliganj?',
        'a' => 'We recommend booking 2 to 3 days in advance, though urgent same-day local shifting can also be scheduled.'
    ],
    [
        'q' => 'Do you provide transit insurance for household goods from Paliganj?',
        'a' => 'Yes, full 1.5% transit risk insurance coverage is provided to protect your items against any unforeseen damage.'
    ],
    [
        'q' => 'Are packing and unloading included in the estimate?',
        'a' => 'Yes, all our quotes are transparent and cover packing, loading, highway transit, unloading, and basic unpacking.'
    ],
    [
        'q' => 'What items are restricted during packing?',
        'a' => 'Flammables, gas cylinders, liquid chemicals, cash, jewelry, and hazardous items are strictly excluded.'
    ],
    [
        'q' => 'How can I book Packers and Movers in Paliganj Patna?',
        'a' => 'Call +91 8409531615 or submit your shifting requirements on WhatsApp for an immediate free quote.'
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
        <span class="breadcrumb-item"><a href="<?php echo SITE_URL; ?>pages/packers-and-movers-in-patna.php" title="Packers and Movers Patna Hub">Patna Hub</a></span>
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
            PACKERS AND MOVERS PALIGANJ PATNA
          </span>
          <h1 style="font-size: 2.5rem; font-weight: 800; line-height: 1.2; margin-bottom: 20px; color: #ffffff;">
            Reliable & Safe <span style="color: #f59e0b;">Packers and Movers in Paliganj Patna</span>
          </h1>
          <p style="font-size: 1.08rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 25px;">
            Shree Ashirwad Packers and Movers provides trusted household shifting, commercial moving, and vehicle transport in Paliganj, Patna. Serving Dulhin Bazar, Bikram, and Naubatpur routes with 100% IBA-approved GST invoices.
          </p>

          <div style="display: flex; gap: 15px; flex-wrap: wrap; margin-bottom: 30px;">
            <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Now" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
              <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call Now: <?php echo SITE_PHONE; ?>
            </a>
            <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20a%20shifting%20quote%20for%20Paliganj%20Patna." title="Chat on WhatsApp" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
              <i class="fab fa-whatsapp" style="margin-right: 8px;"></i> Chat on WhatsApp
            </a>
          </div>

          <div style="display: flex; gap: 20px; font-size: 0.9rem; color: #94a3b8;">
            <span><strong style="color: #f59e0b;">100% Safe</strong> Packing</span>
            <span><strong style="color: #f59e0b;">IBA Approved</strong> GST Bill</span>
            <span><strong style="color: #f59e0b;">Suburban</strong> Fleet</span>
          </div>
        </div>

        <!-- Hero Lead Form Column -->
        <div class="hero-form-card" style="background: rgba(255, 255, 255, 0.05); backdrop-filter: blur(10px); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 16px; padding: 30px; box-shadow: 0 15px 35px rgba(0,0,0,0.4);">
          <h2 style="font-size: 1.4rem; color: #ffffff; margin-bottom: 8px; font-weight: 700; text-align: center;">Get Paliganj Quote</h2>
          <p style="font-size: 0.85rem; color: #94a3b8; text-align: center; margin-bottom: 20px;">Fast, transparent cost estimation via WhatsApp</p>

          <form action="#" method="POST" onsubmit="sendHeroWhatsAppLead(event, this);">
            <div style="margin-bottom: 14px;">
              <input type="text" name="name" class="form-control" placeholder="Your Full Name" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="margin-bottom: 14px;">
              <input type="tel" name="phone" class="form-control" placeholder="10-Digit Mobile Number" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 10px; margin-bottom: 14px;">
              <input type="text" name="move_from" class="form-control" value="Paliganj, Patna" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
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

  <!-- Section 3: Overview & Local Neighborhood Context -->
  <section style="padding: 60px 0; background: #0b132b; color: #e2e8f0; line-height: 1.8;">
    <div class="container" style="max-width: 1000px;">
      <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">
        PALIGANJ SUBURBAN LOGISTICS
      </span>
      <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin: 10px 0 20px 0;">
        Doorstep House & Vehicle Relocation in <span style="color: #f59e0b;">Paliganj, Patna</span>
      </h2>
      <p style="font-size: 1.05rem; color: #cbd5e1; margin-bottom: 20px;">
        Paliganj is a major agricultural and commercial subdivision in southern Patna district, situated near Bikram and Dulhin Bazar. Shifting households or equipment between Paliganj and central Patna requires sturdy vehicles capable of handling suburban highways and rural access roads smoothly.
      </p>
      <p style="font-size: 1.05rem; color: #cbd5e1;">
        Shree Ashirwad Packers and Movers brings professional packing and transport services directly to your doorstep in Paliganj. From multi-layer protective packaging of home furniture to secure transport of two-wheelers and commercial items, we guarantee safe delivery.
      </p>
    </div>
  </section>

  <!-- Section 4: Comprehensive Services Breakdown -->
  <section style="padding: 60px 0; background: #070d1e; color: #ffffff;">
    <div class="container" style="max-width: 1100px;">
      <div style="text-align: center; margin-bottom: 45px;">
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff;">Our Core Services in Paliganj Patna</h2>
        <p style="color: #94a3b8; font-size: 1rem;">End-to-end relocation solutions crafted for residential and commercial clients</p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 25px;">
        <div style="background: #101c40; padding: 25px; border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <i class="fas fa-home" style="font-size: 2rem; color: #f59e0b; margin-bottom: 15px;"></i>
          <h3 style="font-size: 1.3rem; font-weight: 700; color: #ffffff; margin-bottom: 10px;">Household Shifting</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.6;">Complete house and apartment packing using 7-layer materials. Multi-layer wrapping for sofas, wooden beds, dining sets, and electronic appliances.</p>
        </div>

        <div style="background: #101c40; padding: 25px; border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <i class="fas fa-building" style="font-size: 2rem; color: #f59e0b; margin-bottom: 15px;"></i>
          <h3 style="font-size: 1.3rem; font-weight: 700; color: #ffffff; margin-bottom: 10px;">Office & Shop Shifting</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.6;">Swift shifting for retail shops, offices, and commercial establishments in Paliganj with minimal business interruption.</p>
        </div>

        <div style="background: #101c40; padding: 25px; border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <i class="fas fa-motorcycle" style="font-size: 2rem; color: #f59e0b; margin-bottom: 15px;"></i>
          <h3 style="font-size: 1.3rem; font-weight: 700; color: #ffffff; margin-bottom: 10px;">Bike & Car Transport</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.6;">Safe vehicle transportation with dedicated wheel locks, foam padding, and covered car container trailers to any Indian city.</p>
        </div>

        <div style="background: #101c40; padding: 25px; border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <i class="fas fa-warehouse" style="font-size: 2rem; color: #f59e0b; margin-bottom: 15px;"></i>
          <h3 style="font-size: 1.3rem; font-weight: 700; color: #ffffff; margin-bottom: 10px;">Storage & Warehousing</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.6;">CCTV-monitored, climate-protected storage facilities in Patna for short-term and long-term household goods storage.</p>
        </div>

        <div style="background: #101c40; padding: 25px; border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <i class="fas fa-box-open" style="font-size: 2rem; color: #f59e0b; margin-bottom: 15px;"></i>
          <h3 style="font-size: 1.3rem; font-weight: 700; color: #ffffff; margin-bottom: 10px;">7-Layer Premium Packing</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.6;">Air-bubble film, corrugated rolls, waterproof stretch film, thermocol sheets, and heavy-duty cartons for total goods safety.</p>
        </div>

        <div style="background: #101c40; padding: 25px; border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <i class="fas fa-shield-alt" style="font-size: 2rem; color: #f59e0b; margin-bottom: 15px;"></i>
          <h3 style="font-size: 1.3rem; font-weight: 700; color: #ffffff; margin-bottom: 10px;">IBA Approved Bill & Insurance</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.6;">Official IBA-compliant GST billing for employee claim reimbursements plus 1.5% comprehensive transit insurance coverage.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 5: Transparent Pricing Matrix -->
  <section style="padding: 60px 0; background: #0b132b; color: #e2e8f0;">
    <div class="container" style="max-width: 1000px;">
      <div style="text-align: center; margin-bottom: 40px;">
        <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem;">TRANSPARENT PRICING</span>
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin-top: 10px;">Relocation Rate Card - Paliganj Patna</h2>
        <p style="color: #94a3b8; font-size: 0.95rem;">Clear, itemized pricing with zero hidden fees</p>
      </div>

      <div style="overflow-x: auto;">
        <table style="width: 100%; border-collapse: collapse; background: #172a54; border-radius: 10px; overflow: hidden; border: 1px solid rgba(245, 158, 11, 0.3);">
          <thead>
            <tr style="background: #1e3a8a; color: #f59e0b; text-align: left;">
              <th style="padding: 14px 16px;">Move Type / Volume</th>
              <th style="padding: 14px 16px;">Local Within Patna (Paliganj)</th>
              <th style="padding: 14px 16px;">Interstate Moving (Outstation)</th>
            </tr>
          </thead>
          <tbody>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.08);">
              <td style="padding: 12px 16px; font-weight: 700; color: #fff;">1 BHK Flat / Small House</td>
              <td style="padding: 12px 16px; color: #6ee7b7;">₹3,000 - ₹4,800</td>
              <td style="padding: 12px 16px; color: #cbd5e1;">₹9,000 - ₹15,000</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.08);">
              <td style="padding: 12px 16px; font-weight: 700; color: #fff;">2 BHK Standard House</td>
              <td style="padding: 12px 16px; color: #6ee7b7;">₹4,800 - ₹8,000</td>
              <td style="padding: 12px 16px; color: #cbd5e1;">₹13,000 - ₹22,000</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.08);">
              <td style="padding: 12px 16px; font-weight: 700; color: #fff;">3 BHK Large House / Villa</td>
              <td style="padding: 12px 16px; color: #6ee7b7;">₹8,000 - ₹13,500</td>
              <td style="padding: 12px 16px; color: #cbd5e1;">₹19,000 - ₹32,000</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.08);">
              <td style="padding: 12px 16px; font-weight: 700; color: #fff;">Bike / Two-Wheeler Shipping</td>
              <td style="padding: 12px 16px; color: #6ee7b7;">₹1,500 - ₹2,500</td>
              <td style="padding: 12px 16px; color: #cbd5e1;">₹3,800 - ₹7,000</td>
            </tr>
            <tr>
              <td style="padding: 12px 16px; font-weight: 700; color: #fff;">Car Carrier Transport</td>
              <td style="padding: 12px 16px; color: #6ee7b7;">₹2,800 - ₹4,800</td>
              <td style="padding: 12px 16px; color: #cbd5e1;">₹9,500 - ₹18,500</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </section>

  <!-- Section 6: Standard Operating Process (SOP) -->
  <section style="padding: 60px 0; background: #070d1e; color: #ffffff;">
    <div class="container" style="max-width: 1000px;">
      <div style="text-align: center; margin-bottom: 45px;">
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff;">Our 4-Step Relocation Process</h2>
        <p style="color: #94a3b8;">Methodical execution for seamless shifting in Paliganj</p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 20px;">
        <div style="background: #101c40; padding: 20px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <span style="font-size: 1.8rem; font-weight: 800; color: #f59e0b;">01</span>
          <h4 style="font-size: 1.1rem; color: #fff; margin: 10px 0 5px 0;">Pre-Move Survey</h4>
          <p style="color: #cbd5e1; font-size: 0.88rem;">Free physical or virtual inventory assessment for a precise written estimate.</p>
        </div>

        <div style="background: #101c40; padding: 20px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <span style="font-size: 1.8rem; font-weight: 800; color: #f59e0b;">02</span>
          <h4 style="font-size: 1.1rem; color: #fff; margin: 10px 0 5px 0;">Multi-Layer Packing</h4>
          <p style="color: #cbd5e1; font-size: 0.88rem;">Itemized packing using bubble wraps, corrugated sheets, and labelled boxes.</p>
        </div>

        <div style="background: #101c40; padding: 20px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <span style="font-size: 1.8rem; font-weight: 800; color: #f59e0b;">03</span>
          <h4 style="font-size: 1.1rem; color: #fff; margin: 10px 0 5px 0;">Safe Transportation</h4>
          <p style="color: #cbd5e1; font-size: 0.88rem;">Loading into dedicated containerized vehicles driven by experienced drivers.</p>
        </div>

        <div style="background: #101c40; padding: 20px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <span style="font-size: 1.8rem; font-weight: 800; color: #f59e0b;">04</span>
          <h4 style="font-size: 1.1rem; color: #fff; margin: 10px 0 5px 0;">Unpacking & Setup</h4>
          <p style="color: #cbd5e1; font-size: 0.88rem;">Unloading, room placement, furniture reassembly, and disposal of packing waste.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 7: Why Choose Us / Value Proposition -->
  <section style="padding: 60px 0; background: #0b132b; color: #e2e8f0;">
    <div class="container" style="max-width: 1000px;">
      <div style="text-align: center; margin-bottom: 40px;">
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff;">Why Hire Shree Ashirwad in Paliganj?</h2>
      </div>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 20px;">
        <div style="background: #172a54; padding: 20px; border-radius: 10px;">
          <h4 style="color: #f59e0b; font-weight: 700; margin-bottom: 8px;"><i class="fas fa-check-circle" style="margin-right: 8px;"></i>Suburban Fleet Coverage</h4>
          <p style="color: #cbd5e1; font-size: 0.92rem; margin: 0;">Dedicated vehicles routed specifically for Paliganj, Bikram, and southern Patna subdivisions.</p>
        </div>

        <div style="background: #172a54; padding: 20px; border-radius: 10px;">
          <h4 style="color: #f59e0b; font-weight: 700; margin-bottom: 8px;"><i class="fas fa-check-circle" style="margin-right: 8px;"></i>In-House Trained Staff</h4>
          <p style="color: #cbd5e1; font-size: 0.92rem; margin: 0;">Zero reliance on third-party daily laborers. Permanent, background-verified packing professionals.</p>
        </div>

        <div style="background: #172a54; padding: 20px; border-radius: 10px;">
          <h4 style="color: #f59e0b; font-weight: 700; margin-bottom: 8px;"><i class="fas fa-check-circle" style="margin-right: 8px;"></i>No Hidden Charges Guarantee</h4>
          <p style="color: #cbd5e1; font-size: 0.92rem; margin: 0;">Transparent binding quotes provided before booking. What we quote is exactly what you pay.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 8: Regional Intercity Routes -->
  <section style="padding: 60px 0; background: #070d1e; color: #ffffff;">
    <div class="container" style="max-width: 1000px;">
      <div style="text-align: center; margin-bottom: 35px;">
        <h2 style="font-size: 2rem; font-weight: 800; color: #ffffff;">Popular Relocation Routes from Paliganj Patna</h2>
        <p style="color: #94a3b8; font-size: 0.95rem;">Frequent intercity moving destinations</p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 15px; text-align: center;">
        <div style="background: #101c40; padding: 15px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.05); color: #6ee7b7; font-weight: 600;">
          Paliganj to Delhi NCR
        </div>
        <div style="background: #101c40; padding: 15px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.05); color: #6ee7b7; font-weight: 600;">
          Paliganj to Bangalore
        </div>
        <div style="background: #101c40; padding: 15px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.05); color: #6ee7b7; font-weight: 600;">
          Paliganj to Kolkata
        </div>
        <div style="background: #101c40; padding: 15px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.05); color: #6ee7b7; font-weight: 600;">
          Paliganj to Ranchi
        </div>
        <div style="background: #101c40; padding: 15px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.05); color: #6ee7b7; font-weight: 600;">
          Paliganj to Mumbai
        </div>
        <div style="background: #101c40; padding: 15px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.05); color: #6ee7b7; font-weight: 600;">
          Paliganj to Hyderabad
        </div>
      </div>
    </div>
  </section>

  <!-- Section 9: FAQ Accordion Section -->
  <section class="faq-section" style="padding: 60px 0; background: #0b132b; color: #ffffff;">
    <div class="container" style="max-width: 900px;">
      <div style="text-align: center; margin-bottom: 40px;">
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff;">Frequently Asked Questions (Paliganj Patna)</h2>
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

  <!-- Section 10: High-Conversion CTA Band -->
  <section style="padding: 50px 0; background: linear-gradient(135deg, #d32f2f 0%, #1e3a8a 100%); color: #ffffff; text-align: center;">
    <div class="container" style="max-width: 800px;">
      <h2 style="font-size: 2.2rem; font-weight: 800; margin-bottom: 15px; color: #ffffff;">Planning to Shift in Paliganj Patna?</h2>
      <p style="font-size: 1.1rem; color: #e2e8f0; margin-bottom: 30px;">Book certified packers and movers today. Get 100% safe packing, free pre-move survey, and instant estimates.</p>
      <div style="display: flex; gap: 15px; justify-content: center; flex-wrap: wrap;">
        <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Us Now" style="padding: 14px 30px; background: #f59e0b; color: #000000; border-radius: 50px; font-weight: 700; text-decoration: none; font-size: 1rem;">
          <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call: <?php echo SITE_PHONE; ?>
        </a>
        <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20need%20moving%20services%20in%20Paliganj%20Patna." title="WhatsApp Inquiry" target="_blank" style="padding: 14px 30px; background: #10b981; color: #ffffff; border-radius: 50px; font-weight: 700; text-decoration: none; font-size: 1rem;">
          <i class="fab fa-whatsapp" style="margin-right: 8px;"></i> WhatsApp Quote
        </a>
      </div>
    </div>
  </section>

</main>

<!-- Section 11: Schema Markups & WhatsApp Lead Script -->
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
  "description": "Trusted packers and movers in Paliganj Patna offering home relocation, office moving, and vehicle transport.",
  "url": "<?php echo $canonical_url; ?>",
  "telephone": "<?php echo SITE_PHONE_RAW; ?>",
  "address": {
    "@type": "PostalAddress",
    "addressLocality": "Paliganj, Patna",
    "addressRegion": "Bihar",
    "addressCountry": "IN"
  },
  "areaServed": "Paliganj, Patna, Bihar",
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
  
  var message = "Hello Shree Ashirwad Packers,\n\nI would like a Shifting Quote for Paliganj Patna:\n- Name: " + name + "\n- Phone: " + phone + "\n- Moving From: " + moveFrom + "\n- Moving To: " + moveTo;
  
  var whatsappUrl = "https://api.whatsapp.com/send?phone=918409531615&text=" + encodeURIComponent(message);
  window.open(whatsappUrl, '_blank');
}
</script>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
