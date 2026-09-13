<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "Packers and Movers in Punpun Patna | Safe House Shifting";
$page_desc = "Top packers and movers in Punpun, Patna. Reliable local household shifting, commercial moving & bike transport with 100% IBA GST invoice.";
$page_keywords = "packers and movers in punpun patna, best packers and movers punpun, movers and packers punpun patna, house shifting punpun, local relocation punpun patna";
$canonical_url = "https://shreeashirwadpackersandmovers.com/pages/packers-and-movers-in-punpun-patna.php";

$page_city = "Punpun, Patna, Bihar";

$faq_list = [
    [
        'q' => 'What are the charges for packers and movers in Punpun, Patna?',
        'a' => 'Local 1BHK home shifting costs ₹2,500 to ₹4,500, 2BHK flat moving ranges from ₹4,500 to ₹7,500, and 3BHK house relocation costs ₹7,500 to ₹12,500.'
    ],
    [
        'q' => 'Which areas in Punpun are covered for doorstep pickup?',
        'a' => 'We cover Punpun Bazar, Punpun Station Road, Lakhna, Sampatchak Link Road, and Patna-Gaya Highway corridor.'
    ],
    [
        'q' => 'Do you provide IBA approved GST bills for employee relocation claims?',
        'a' => 'Yes, 100% genuine IBA-compliant GST tax invoices, consignment bills (LR), and itemized packing lists are provided.'
    ],
    [
        'q' => 'Is same-day house shifting available in Punpun?',
        'a' => 'Yes, we provide express same-day packing, loading, and transit for local intra-city moves within Patna.'
    ],
    [
        'q' => 'What packing materials are used for protecting goods?',
        'a' => 'We use multi-layer bubble wrap, heavy corrugated box sheets, stretch film wrap, corner guards, and waterproof tarpaulins.'
    ],
    [
        'q' => 'Can you transport bikes and cars from Punpun?',
        'a' => 'Yes, we offer safe vehicle shipping in closed car carriers and dedicated hydraulic bike transports.'
    ],
    [
        'q' => 'Do you assist with uninstallation and reassembly of furniture?',
        'a' => 'Yes, our team includes skilled carpenters for dismantling and reassembling double beds, wardrobes, and tables.'
    ],
    [
        'q' => 'Is insurance offered for shifting household goods?',
        'a' => 'Yes, 1.5% transit insurance is available to protect your items against accidental risks during transport.'
    ],
    [
        'q' => 'What items cannot be moved during relocation?',
        'a' => 'Combustible items, gas cylinders, cash, jewelry, and hazardous chemicals are strictly prohibited.'
    ],
    [
        'q' => 'How can I book Packers and Movers in Punpun Patna?',
        'a' => 'Call +91 8409531615 or submit your shifting requirements on WhatsApp for a fast free quote.'
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
            PACKERS AND MOVERS PUNPUN PATNA
          </span>
          <h1 style="font-size: 2.5rem; font-weight: 800; line-height: 1.2; margin-bottom: 20px; color: #ffffff;">
            Reliable & Safe <span style="color: #f59e0b;">Packers and Movers in Punpun Patna</span>
          </h1>
          <p style="font-size: 1.08rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 25px;">
            Shree Ashirwad Packers and Movers provides top-rated house shifting, office relocation, and bike moving across Punpun, Station Road, Lakhna, and Patna-Gaya Highway with 100% IBA GST billing.
          </p>

          <div style="display: flex; gap: 15px; flex-wrap: wrap; margin-bottom: 30px;">
            <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Now" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
              <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call Now: <?php echo SITE_PHONE; ?>
            </a>
            <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20a%20shifting%20quote%20for%20Punpun%20Patna." title="Chat on WhatsApp" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
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
          <h2 style="font-size: 1.4rem; color: #ffffff; margin-bottom: 8px; font-weight: 700; text-align: center;">Get Punpun Quote</h2>
          <p style="font-size: 0.85rem; color: #94a3b8; text-align: center; margin-bottom: 20px;">Fast, transparent cost estimation via WhatsApp</p>

          <form action="#" method="POST" onsubmit="sendHeroWhatsAppLead(event, this);">
            <div style="margin-bottom: 14px;">
              <input type="text" name="name" class="form-control" placeholder="Your Full Name" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="margin-bottom: 14px;">
              <input type="tel" name="phone" class="form-control" placeholder="10-Digit Mobile Number" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 10px; margin-bottom: 14px;">
              <input type="text" name="move_from" class="form-control" value="Punpun, Patna" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
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
        PUNPUN LOGISTICS HUB
      </span>
      <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin: 10px 0 20px 0;">
        Professional Household Relocation in <span style="color: #f59e0b;">Punpun, Patna</span>
      </h2>
      <p style="font-size: 1.05rem; color: #cbd5e1; margin-bottom: 20px;">
        Punpun is an important suburban hub south of Patna on the Patna-Gaya Highway corridor. Shree Ashirwad Packers and Movers deploys professional packing teams and modern covered containers across Punpun Bazar, Station Road, Lakhna, and Sampatchak Link Road to ensure smooth, damage-free relocations.
      </p>
      <p style="font-size: 1.05rem; color: #cbd5e1;">
        Our team handles local house relocations as well as long-distance intercity moves originating from Punpun to major cities like Gaya, Ranchi, Delhi, and Kolkata with complete insurance and IBA approved bills.
      </p>
    </div>
  </section>

  <!-- Section 4: Comprehensive Services Breakdown -->
  <section style="padding: 60px 0; background: #070d1e; color: #ffffff;">
    <div class="container" style="max-width: 1100px;">
      <div style="text-align: center; margin-bottom: 45px;">
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff;">Our Core Services in Punpun Patna</h2>
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
          <h3 style="font-size: 1.3rem; font-weight: 700; color: #ffffff; margin-bottom: 10px;">Commercial Shifting</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.6;">Swift shifting for shops, offices, and commercial units in Punpun with minimal business downtime.</p>
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
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin-top: 10px;">Relocation Rate Card - Punpun Patna</h2>
        <p style="color: #94a3b8; font-size: 0.95rem;">Clear, itemized pricing with zero hidden fees</p>
      </div>

      <div style="overflow-x: auto;">
        <table style="width: 100%; border-collapse: collapse; background: #172a54; border-radius: 10px; overflow: hidden; border: 1px solid rgba(245, 158, 11, 0.3);">
          <thead>
            <tr style="background: #1e3a8a; color: #f59e0b; text-align: left;">
              <th style="padding: 14px 16px;">Move Type / Volume</th>
              <th style="padding: 14px 16px;">Local Within Patna (Punpun)</th>
              <th style="padding: 14px 16px;">Interstate Moving (Outstation)</th>
            </tr>
          </thead>
          <tbody>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.08);">
              <td style="padding: 12px 16px; font-weight: 700; color: #fff;">1 BHK Flat / Room Move</td>
              <td style="padding: 12px 16px; color: #6ee7b7;">₹2,500 - ₹4,500</td>
              <td style="padding: 12px 16px; color: #cbd5e1;">₹8,500 - ₹14,500</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.08);">
              <td style="padding: 12px 16px; font-weight: 700; color: #fff;">2 BHK Flat Relocation</td>
              <td style="padding: 12px 16px; color: #6ee7b7;">₹4,500 - ₹7,500</td>
              <td style="padding: 12px 16px; color: #cbd5e1;">₹12,500 - ₹21,000</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.08);">
              <td style="padding: 12px 16px; font-weight: 700; color: #fff;">3 BHK Independent House / Villa</td>
              <td style="padding: 12px 16px; color: #6ee7b7;">₹7,500 - ₹12,500</td>
              <td style="padding: 12px 16px; color: #cbd5e1;">₹18,500 - ₹32,000</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.08);">
              <td style="padding: 12px 16px; font-weight: 700; color: #fff;">Bike / Two-Wheeler Shipping</td>
              <td style="padding: 12px 16px; color: #6ee7b7;">₹1,200 - ₹2,200</td>
              <td style="padding: 12px 16px; color: #cbd5e1;">₹3,500 - ₹6,500</td>
            </tr>
            <tr>
              <td style="padding: 12px 16px; font-weight: 700; color: #fff;">Car Carrier Transport</td>
              <td style="padding: 12px 16px; color: #6ee7b7;">₹2,500 - ₹4,500</td>
              <td style="padding: 12px 16px; color: #cbd5e1;">₹9,000 - ₹18,000</td>
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
        <p style="color: #94a3b8;">Methodical execution for seamless shifting in Punpun</p>
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
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff;">Why Hire Shree Ashirwad in Punpun?</h2>
      </div>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 20px;">
        <div style="background: #172a54; padding: 20px; border-radius: 10px;">
          <h4 style="color: #f59e0b; font-weight: 700; margin-bottom: 8px;"><i class="fas fa-check-circle" style="margin-right: 8px;"></i>Highway Corridor Reach</h4>
          <p style="color: #cbd5e1; font-size: 0.92rem; margin: 0;">Direct access to Patna-Gaya Highway for fast outstation transport connection.</p>
        </div>

        <div style="background: #172a54; padding: 20px; border-radius: 10px;">
          <h4 style="color: #f59e0b; font-weight: 700; margin-bottom: 8px;"><i class="fas fa-check-circle" style="margin-right: 8px;"></i>In-House Trained Staff</h4>
          <p style="color: #cbd5e1; font-size: 0.92rem; margin: 0;">Permanent, background-verified packers with specialized training in electronics and furniture handling.</p>
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
        <h2 style="font-size: 2rem; font-weight: 800; color: #ffffff;">Popular Relocation Routes from Punpun Patna</h2>
        <p style="color: #94a3b8; font-size: 0.95rem;">Frequent intercity moving destinations</p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 15px; text-align: center;">
        <div style="background: #101c40; padding: 15px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.05); color: #6ee7b7; font-weight: 600;">
          Punpun to Delhi NCR
        </div>
        <div style="background: #101c40; padding: 15px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.05); color: #6ee7b7; font-weight: 600;">
          Punpun to Gaya
        </div>
        <div style="background: #101c40; padding: 15px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.05); color: #6ee7b7; font-weight: 600;">
          Punpun to Kolkata
        </div>
        <div style="background: #101c40; padding: 15px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.05); color: #6ee7b7; font-weight: 600;">
          Punpun to Ranchi
        </div>
        <div style="background: #101c40; padding: 15px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.05); color: #6ee7b7; font-weight: 600;">
          Punpun to Mumbai
        </div>
        <div style="background: #101c40; padding: 15px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.05); color: #6ee7b7; font-weight: 600;">
          Punpun to Bangalore
        </div>
      </div>
    </div>
  </section>

  <!-- Section 9: FAQ Accordion Section -->
  <section class="faq-section" style="padding: 60px 0; background: #0b132b; color: #ffffff;">
    <div class="container" style="max-width: 900px;">
      <div style="text-align: center; margin-bottom: 40px;">
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff;">Frequently Asked Questions (Punpun Patna)</h2>
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
      <h2 style="font-size: 2.2rem; font-weight: 800; margin-bottom: 15px; color: #ffffff;">Planning to Shift in Punpun Patna?</h2>
      <p style="font-size: 1.1rem; color: #e2e8f0; margin-bottom: 30px;">Book certified packers and movers today. Get 100% safe packing, free pre-move survey, and instant estimates.</p>
      <div style="display: flex; gap: 15px; justify-content: center; flex-wrap: wrap;">
        <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Us Now" style="padding: 14px 30px; background: #f59e0b; color: #000000; border-radius: 50px; font-weight: 700; text-decoration: none; font-size: 1rem;">
          <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call: <?php echo SITE_PHONE; ?>
        </a>
        <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20need%20moving%20services%20in%20Punpun%20Patna." title="WhatsApp Inquiry" target="_blank" style="padding: 14px 30px; background: #10b981; color: #ffffff; border-radius: 50px; font-weight: 700; text-decoration: none; font-size: 1rem;">
          <i class="fab fa-whatsapp" style="margin-right: 8px;"></i> WhatsApp Quote
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
  "description": "Top-rated packers and movers in Punpun, Patna offering doorstep house shifting and vehicle relocation.",
  "url": "<?php echo $canonical_url; ?>",
  "telephone": "<?php echo SITE_PHONE_RAW; ?>",
  "address": {
    "@type": "PostalAddress",
    "addressLocality": "Punpun, Patna",
    "addressRegion": "Bihar",
    "addressCountry": "IN"
  },
  "areaServed": "Punpun, Patna, Bihar",
  "priceRange": "₹2500 - ₹32000"
}
</script>

<script>
function sendHeroWhatsAppLead(event, form) {
  event.preventDefault();
  var name = form.querySelector('[name="name"]').value;
  var phone = form.querySelector('[name="phone"]').value;
  var moveFrom = form.querySelector('[name="move_from"]').value;
  var moveTo = form.querySelector('[name="move_to"]').value;
  
  var message = "Hello Shree Ashirwad Packers,\n\nI would like a Shifting Quote for Punpun Patna:\n- Name: " + name + "\n- Phone: " + phone + "\n- Moving From: " + moveFrom + "\n- Moving To: " + moveTo;
  
  var whatsappUrl = "https://api.whatsapp.com/send?phone=918409531615&text=" + encodeURIComponent(message);
  window.open(whatsappUrl, '_blank');
}
</script>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
