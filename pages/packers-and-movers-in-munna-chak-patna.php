<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "Packers and Movers in Munna Chak Patna | Safe House Shifting";
$page_desc = "Hire certified packers and movers in Munna Chak Patna. Shree Ashirwad Packers and Movers offers secure household shifting, office relocations, room moving, Kankarbagh main road transport, and IBA claim bills with zero hidden costs. Call (+91) 8409531615.";
$page_keywords = "packers and movers in munna chak patna, packers and movers munna chak patna, movers and packers in patna munna chak, house shifting in munna chak patna, best packers and movers in munna chak patna, packers and movers service in patna, movers and packers in patna";
$canonical_url = "https://shreeashirwadpackersandmovers.com/pages/packers-and-movers-in-munna-chak-patna.php";

$page_city = "Munna Chak, Patna, Bihar";

$faq_list = [
    [
        'q' => 'Do you provide same-day household shifting in Munna Chak, Patna?',
        'a' => 'Yes, local shifting within Munna Chak or to nearby locations like Kankarbagh, Rajendra Nagar, Kumhrar, and Bypass Road is fully completed in a single day, including complete packing, transit, loading, and unpacking.'
    ],
    [
        'q' => 'What are the packers and movers charges in Munna Chak Patna?',
        'a' => 'Local 1BHK shifting costs ₹2,500 to ₹4,800, 2BHK flat moving ranges from ₹5,000 to ₹8,500, and 3BHK house relocation costs ₹8,000 to ₹13,000 based on goods volume.'
    ],
    [
        'q' => 'How do you protect delicate goods during transit in Munna Chak?',
        'a' => 'We wrap all glassware, electronics, and delicate decorative items in bubble wrap and foam cushioning sheets, packing them into heavy-duty corrugated cartons.'
    ],
    [
        'q' => 'Do you offer office shifting services in Munna Chak?',
        'a' => 'Yes, we provide specialized commercial and office relocation services including secure packaging for server racks, computers, office files, and modular furniture.'
    ],
    [
        'q' => 'Are your GST bills valid for PSU, bank, and govt employee transfer claims?',
        'a' => 'Yes, Shree Ashirwad Packers provides 100% genuine IBA-compliant GST invoices, LR copies, money receipts, and itemized inventory lists accepted by all govt departments, banks, and corporate firms.'
    ],
    [
        'q' => 'How early should I book shifting in Munna Chak Patna?',
        'a' => 'Booking 1 to 2 days in advance helps us reserve optimal container vehicles and specialized packing crews for your preferred moving time.'
    ],
    [
        'q' => 'Do your movers handle furniture dismantling and reassembly in Munna Chak?',
        'a' => 'Yes, our expert carpenters dismantle double beds, wooden wardrobes, modular dining tables, and reassemble them neatly at your new location.'
    ],
    [
        'q' => 'Can you navigate narrow residential lanes in Munna Chak?',
        'a' => 'Yes, we deploy compact feeder pick-up trucks for narrow interior lanes in Munna Chak to seamlessly shuttle items to larger enclosed highway containers.'
    ],
    [
        'q' => 'Is transit insurance available for long-distance relocations?',
        'a' => 'Yes, we offer 1.5% comprehensive transit insurance coverage for long-distance household shifting originating from Munna Chak.'
    ],
    [
        'q' => 'How can I get an instant quote for shifting in Munna Chak?',
        'a' => 'Call +91 8409531615 or submit your moving details through our website lead form for an instant free price estimation.'
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
            MUNNA CHAK RELOCATIONS SPECIALIST
          </span>
          <h1 style="font-size: 2.5rem; font-weight: 800; line-height: 1.2; margin-bottom: 20px; color: #ffffff;">
            Trusted <span style="color: #f59e0b;">Packers and Movers in Munna Chak Patna</span>
          </h1>
          <p style="font-size: 1.08rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 25px;">
            Shree Ashirwad Packers and Movers provides certified household shifting, commercial relocation, room moving, and bike transport in Munna Chak Patna. 7-layer protective packaging, zero hidden fees, and 100% IBA GST claim bills.
          </p>

          <div style="display: flex; gap: 15px; flex-wrap: wrap; margin-bottom: 30px;">
            <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Now" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
              <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call Now: <?php echo SITE_PHONE; ?>
            </a>
            <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20a%20shifting%20quote%20for%20Munna%20Chak%20Patna." title="Chat on WhatsApp" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
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
          <h2 style="font-size: 1.4rem; color: #ffffff; margin-bottom: 8px; font-weight: 700; text-align: center;">Get Munna Chak Quote</h2>
          <p style="font-size: 0.85rem; color: #94a3b8; text-align: center; margin-bottom: 20px;">Fast, transparent cost estimation via WhatsApp</p>

          <form action="#" method="POST" onsubmit="sendHeroWhatsAppLead(event, this);">
            <div style="margin-bottom: 14px;">
              <input type="text" name="name" class="form-control" placeholder="Your Full Name" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="margin-bottom: 14px;">
              <input type="tel" name="phone" class="form-control" placeholder="10-Digit Mobile Number" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 10px; margin-bottom: 14px;">
              <input type="text" name="move_from" class="form-control" value="Munna Chak, Patna" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
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
        MUNNA CHAK LOGISTICS HUB
      </span>
      <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin: 10px 0 20px 0;">
        Seamless Relocation Services in <span style="color: #f59e0b;">Munna Chak, Patna</span>
      </h2>
      <p style="font-size: 1.05rem; color: #cbd5e1; margin-bottom: 20px;">
        Munna Chak is a busy commercial and residential hub situated along Kankarbagh Main Road in South Patna. Heavy traffic near the main intersection and tight parking spaces in interior residential lanes require prompt team coordination. We deploy small feeder vehicles for narrow lanes when container trucks cannot directly park.
      </p>
      <p style="font-size: 1.05rem; color: #cbd5e1;">
        At <strong>Shree Ashirwad Packers and Movers</strong>, we deploy professional packing teams and modern covered containers across Munna Chak, Kankarbagh, Rajendra Nagar, Kumhrar, and Bypass Road with complete insurance and IBA approved GST bills.
      </p>
    </div>
  </section>

  <!-- Section 4: Comprehensive Services Breakdown -->
  <section style="padding: 60px 0; background: #070d1e; color: #ffffff;">
    <div class="container" style="max-width: 1100px;">
      <div style="text-align: center; margin-bottom: 45px;">
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff;">Our Core Services in Munna Chak Patna</h2>
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
          <h3 style="font-size: 1.3rem; font-weight: 700; color: #ffffff; margin-bottom: 10px;">Commercial Office Move</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.6;">Swift shifting for offices, corporate IT desks, server racks, files, and modular furniture with minimal downtime.</p>
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
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin-top: 10px;">Relocation Rate Card - Munna Chak Patna</h2>
        <p style="color: #94a3b8; font-size: 0.95rem;">Clear, itemized pricing with zero hidden fees</p>
      </div>

      <div style="overflow-x: auto;">
        <table style="width: 100%; border-collapse: collapse; background: #172a54; border-radius: 10px; overflow: hidden; border: 1px solid rgba(245, 158, 11, 0.3);">
          <thead>
            <tr style="background: #1e3a8a; color: #f59e0b; text-align: left;">
              <th style="padding: 14px 16px;">Move Type / Volume</th>
              <th style="padding: 14px 16px;">Local Within Patna (Munna Chak)</th>
              <th style="padding: 14px 16px;">Interstate Moving (Outstation)</th>
            </tr>
          </thead>
          <tbody>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.08);">
              <td style="padding: 12px 16px; font-weight: 700; color: #fff;">1 BHK Flat / Room Move</td>
              <td style="padding: 12px 16px; color: #6ee7b7;">₹2,500 - ₹4,800</td>
              <td style="padding: 12px 16px; color: #cbd5e1;">₹8,500 - ₹15,000</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.08);">
              <td style="padding: 12px 16px; font-weight: 700; color: #fff;">2 BHK Flat Relocation</td>
              <td style="padding: 12px 16px; color: #6ee7b7;">₹5,000 - ₹8,500</td>
              <td style="padding: 12px 16px; color: #cbd5e1;">₹13,000 - ₹22,000</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.08);">
              <td style="padding: 12px 16px; font-weight: 700; color: #fff;">3 BHK Independent House / Villa</td>
              <td style="padding: 12px 16px; color: #6ee7b7;">₹8,000 - ₹13,000</td>
              <td style="padding: 12px 16px; color: #cbd5e1;">₹19,000 - ₹33,000</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.08);">
              <td style="padding: 12px 16px; font-weight: 700; color: #fff;">Bike / Two-Wheeler Shipping</td>
              <td style="padding: 12px 16px; color: #6ee7b7;">₹1,200 - ₹2,500</td>
              <td style="padding: 12px 16px; color: #cbd5e1;">₹3,800 - ₹7,000</td>
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
        <p style="color: #94a3b8;">Methodical execution for seamless shifting in Munna Chak</p>
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
          <h4 style="font-size: 1.8rem; font-weight: 800; color: #f59e0b;">Safe Transportation</h4>
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
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff;">Why Hire Shree Ashirwad in Munna Chak?</h2>
      </div>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 20px;">
        <div style="background: #172a54; padding: 20px; border-radius: 10px;">
          <h4 style="color: #f59e0b; font-weight: 700; margin-bottom: 8px;"><i class="fas fa-check-circle" style="margin-right: 8px;"></i>Kankarbagh Arterial Connectivity</h4>
          <p style="color: #cbd5e1; font-size: 0.92rem; margin: 0;">Direct access to Kankarbagh Main Road and Old Bypass for smooth vehicle dispatch.</p>
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
        <h2 style="font-size: 2rem; font-weight: 800; color: #ffffff;">Popular Relocation Routes from Munna Chak Patna</h2>
        <p style="color: #94a3b8; font-size: 0.95rem;">Frequent intercity moving destinations</p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 15px; text-align: center;">
        <div style="background: #101c40; padding: 15px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.05); color: #6ee7b7; font-weight: 600;">
          Munna Chak to Delhi NCR
        </div>
        <div style="background: #101c40; padding: 15px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.05); color: #6ee7b7; font-weight: 600;">
          Munna Chak to Bangalore
        </div>
        <div style="background: #101c40; padding: 15px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.05); color: #6ee7b7; font-weight: 600;">
          Munna Chak to Kolkata
        </div>
        <div style="background: #101c40; padding: 15px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.05); color: #6ee7b7; font-weight: 600;">
          Munna Chak to Ranchi
        </div>
        <div style="background: #101c40; padding: 15px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.05); color: #6ee7b7; font-weight: 600;">
          Munna Chak to Mumbai
        </div>
        <div style="background: #101c40; padding: 15px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.05); color: #6ee7b7; font-weight: 600;">
          Munna Chak to Hyderabad
        </div>
      </div>
    </div>
  </section>

  <!-- Section 9: FAQ Accordion Section -->
  <section class="faq-section" style="padding: 60px 0; background: #0b132b; color: #ffffff;">
    <div class="container" style="max-width: 900px;">
      <div style="text-align: center; margin-bottom: 40px;">
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff;">Frequently Asked Questions (Munna Chak Patna)</h2>
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
      <h2 style="font-size: 2.2rem; font-weight: 800; margin-bottom: 15px; color: #ffffff;">Planning to Shift in Munna Chak Patna?</h2>
      <p style="font-size: 1.1rem; color: #e2e8f0; margin-bottom: 30px;">Book certified packers and movers today. Get 100% safe packing, free pre-move survey, and instant estimates.</p>
      <div style="display: flex; gap: 15px; justify-content: center; flex-wrap: wrap;">
        <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Us Now" style="padding: 14px 30px; background: #f59e0b; color: #000000; border-radius: 50px; font-weight: 700; text-decoration: none; font-size: 1rem;">
          <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call: <?php echo SITE_PHONE; ?>
        </a>
        <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20need%20moving%20services%20in%20Munna%20Chak%20Patna." title="WhatsApp Inquiry" target="_blank" style="padding: 14px 30px; background: #10b981; color: #ffffff; border-radius: 50px; font-weight: 700; text-decoration: none; font-size: 1rem;">
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
  "description": "Top-rated packers and movers in Munna Chak, Patna offering doorstep house shifting and corporate relocation.",
  "url": "<?php echo $canonical_url; ?>",
  "telephone": "<?php echo SITE_PHONE_RAW; ?>",
  "address": {
    "@type": "PostalAddress",
    "addressLocality": "Munna Chak, Patna",
    "addressRegion": "Bihar",
    "addressCountry": "IN"
  },
  "areaServed": "Munna Chak, Patna, Bihar",
  "priceRange": "₹2500 - ₹33000"
}
</script>

<script>
function sendHeroWhatsAppLead(event, form) {
  event.preventDefault();
  var name = form.querySelector('[name="name"]').value;
  var phone = form.querySelector('[name="phone"]').value;
  var moveFrom = form.querySelector('[name="move_from"]').value;
  var moveTo = form.querySelector('[name="move_to"]').value;
  
  var message = "Hello Shree Ashirwad Packers,\n\nI would like a Shifting Quote for Munna Chak Patna:\n- Name: " + name + "\n- Phone: " + phone + "\n- Moving From: " + moveFrom + "\n- Moving To: " + moveTo;
  
  var whatsappUrl = "https://api.whatsapp.com/send?phone=918409531615&text=" + encodeURIComponent(message);
  window.open(whatsappUrl, '_blank');
}
</script>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
