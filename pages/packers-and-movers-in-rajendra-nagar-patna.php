<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "Packers and Movers in Rajendra Nagar Patna | Safe Local House Shifting";
$page_desc = "Top-rated packers and movers in Rajendra Nagar, Patna. Reliable local household shifting, office relocation, bike & car transportation with 100% IBA-approved GST billing.";
$page_keywords = "packers and movers in rajendra nagar patna, best packers and movers rajendra nagar, movers and packers rajendra nagar patna, local shifting rajendra nagar, house shifting services rajendra nagar";
$canonical_url = "https://shreeashirwadpackersandmovers.com/pages/packers-and-movers-in-rajendra-nagar-patna.php";

$page_city = "Rajendra Nagar, Patna, Bihar";

$faq_list = [
    [
        'q' => 'How are local house shifting services charged in Rajendra Nagar, Patna?',
        'a' => 'Local shifting within Rajendra Nagar and nearby areas like Kadamkuan, Saidpur, or Naya Tola ranges from ₹2,500–₹5,500 for 1BHK/2BHK apartments, and ₹6,500–₹12,500 for 3BHK/independent houses including packing, loading, transport, and unloading.'
    ],
    [
        'q' => 'Which sub-localities in Rajendra Nagar do you cover for doorstep packing & pickup?',
        'a' => 'We cover all residential sectors around Rajendra Nagar including Rajendra Nagar Terminal area, Kadamkuan, Saidpur, Naya Tola, Machhua Toli, Dinkar Golambar, and Stadium road.'
    ],
    [
        'q' => 'What packing materials are used for household items during local Rajendra Nagar shifting?',
        'a' => 'We use multi-layer bubble wrap, heavy corrugated box sheets, stretch film wrap, edge guards, and waterproof tarpaulin sheets to guarantee zero damage during handling and transport.'
    ],
    [
        'q' => 'Can you handle same-day urgent house shifting within Rajendra Nagar?',
        'a' => 'Yes, for local intra-city moves within Patna, we offer rapid same-day packing and moving services with dedicated vehicle dispatch.'
    ],
    [
        'q' => 'Do you provide IBA approved GST bills for corporate/government employee relocation claims?',
        'a' => 'Yes, 100% genuine IBA-compliant GST tax invoices, consignment notes (LR), itemized packing lists, and payment receipts are issued for employer reimbursement.'
    ],
    [
        'q' => 'How do you handle moves near Rajendra Nagar Terminal Railway Station congestion?',
        'a' => 'We coordinate movement times outside peak railway passenger hours and utilize designated secondary access routes to ensure quick loading and transit.'
    ],
    [
        'q' => 'Is vehicle transportation (bike/car) available alongside household shifting from Rajendra Nagar?',
        'a' => 'Yes, we provide integrated vehicle shipping using specialized enclosed car carriers and two-wheeler hydraulic ramps for moves from Rajendra Nagar to anywhere in India.'
    ],
    [
        'q' => 'What insurance coverage is available for household items during transit?',
        'a' => 'We offer full-value transit insurance (1.5% of declared goods value) covering accidental damage, fire, or transit hazards during relocation.'
    ],
    [
        'q' => 'What items are restricted from packing during home relocation?',
        'a' => 'Combustible liquids, gas cylinders, fireworks, cash, jewellery, and hazardous chemicals cannot be packed into moving vehicles per safety regulations.'
    ],
    [
        'q' => 'How can I book Packers and Movers in Rajendra Nagar Patna?',
        'a' => 'Call +91 8409531615 or submit your relocation details via WhatsApp for a free home survey and instant transparent quotation.'
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
            PACKERS AND MOVERS RAJENDRA NAGAR PATNA
          </span>
          <h1 style="font-size: 2.5rem; font-weight: 800; line-height: 1.2; margin-bottom: 20px; color: #ffffff;">
            Reliable & Safe <span style="color: #f59e0b;">Packers and Movers in Rajendra Nagar Patna</span>
          </h1>
          <p style="font-size: 1.08rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 25px;">
            Shree Ashirwad Packers and Movers provides top-rated household shifting, office relocation, and vehicle transport across Rajendra Nagar, Patna. Serving Terminal area, Kadamkuan, Saidpur, Naya Tola, Machhua Toli, and Stadium road with 100% IBA-compliant GST billing.
          </p>

          <div style="display: flex; gap: 15px; flex-wrap: wrap; margin-bottom: 30px;">
            <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Now" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
              <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call Now: <?php echo SITE_PHONE; ?>
            </a>
            <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20a%20shifting%20quote%20for%20Rajendra%20Nagar%20Patna." title="Chat on WhatsApp" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
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
          <h2 style="font-size: 1.4rem; color: #ffffff; margin-bottom: 8px; font-weight: 700; text-align: center;">Get Rajendra Nagar Quote</h2>
          <p style="font-size: 0.85rem; color: #94a3b8; text-align: center; margin-bottom: 20px;">Fast, transparent cost estimation via WhatsApp</p>

          <form action="#" method="POST" onsubmit="sendHeroWhatsAppLead(event, this);">
            <div style="margin-bottom: 14px;">
              <input type="text" name="name" class="form-control" placeholder="Your Full Name" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="margin-bottom: 14px;">
              <input type="tel" name="phone" class="form-control" placeholder="10-Digit Mobile Number" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 10px; margin-bottom: 14px;">
              <input type="text" name="move_from" class="form-control" value="Rajendra Nagar, Patna" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
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
        RAJENDRA NAGAR NEIGHBORHOOD LOGISTICS
      </span>
      <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin: 10px 0 20px 0;">
        Doorstep House & Office Relocation in <span style="color: #f59e0b;">Rajendra Nagar, Patna</span>
      </h2>
      <p style="font-size: 1.05rem; color: #cbd5e1; margin-bottom: 20px;">
        Rajendra Nagar is a prominent residential and educational neighborhood centered around Moin-ul-Haq Stadium and Rajendra Nagar Terminal. Shree Ashirwad Packers and Movers deploys trained packing crews and specialized transport fleets across Terminal area, Kadamkuan, Saidpur, Naya Tola, and Machhua Toli.
      </p>
      <p style="font-size: 1.05rem; color: #cbd5e1;">
        Our experienced movers ensure zero damage to furniture, IT hardware, and household items during local or intercity relocations.
      </p>
    </div>
  </section>

  <!-- Section 4: Comprehensive Services Breakdown -->
  <section style="padding: 60px 0; background: #070d1e; color: #ffffff;">
    <div class="container" style="max-width: 1100px;">
      <div style="text-align: center; margin-bottom: 45px;">
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff;">Our Core Services in Rajendra Nagar Patna</h2>
        <p style="color: #94a3b8; font-size: 1rem;">End-to-end relocation solutions crafted for residential and commercial clients</p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 25px;">
        <div style="background: #101c40; padding: 25px; border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <i class="fas fa-home" style="font-size: 2rem; color: #f59e0b; margin-bottom: 15px;"></i>
          <h3 style="font-size: 1.3rem; font-weight: 700; color: #ffffff; margin-bottom: 10px;">Household Shifting</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.6;">Complete house and apartment packing using 7-layer materials. Multi-layer wrapping for sofas, wooden beds, dining sets, and electronic appliances.</p>
        </div>

        <div style="background: #101c40; padding: 25px; border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <i class="fas fa-graduation-cap" style="font-size: 2rem; color: #f59e0b; margin-bottom: 15px;"></i>
          <h3 style="font-size: 1.3rem; font-weight: 700; color: #ffffff; margin-bottom: 10px;">Hostel & Student Relocation</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.6;">Budget single room and study luggage relocation for students and coaching faculties around Rajendra Nagar.</p>
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
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin-top: 10px;">Relocation Rate Card - Rajendra Nagar Patna</h2>
        <p style="color: #94a3b8; font-size: 0.95rem;">Clear, itemized pricing with zero hidden fees</p>
      </div>

      <div style="overflow-x: auto;">
        <table style="width: 100%; border-collapse: collapse; background: #172a54; border-radius: 10px; overflow: hidden; border: 1px solid rgba(245, 158, 11, 0.3);">
          <thead>
            <tr style="background: #1e3a8a; color: #f59e0b; text-align: left;">
              <th style="padding: 14px 16px;">Move Type / Volume</th>
              <th style="padding: 14px 16px;">Local Within Patna (Rajendra Nagar)</th>
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
        <p style="color: #94a3b8;">Methodical execution for seamless shifting in Rajendra Nagar</p>
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
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff;">Why Hire Shree Ashirwad in Rajendra Nagar?</h2>
      </div>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 20px;">
        <div style="background: #172a54; padding: 20px; border-radius: 10px;">
          <h4 style="color: #f59e0b; font-weight: 700; margin-bottom: 8px;"><i class="fas fa-check-circle" style="margin-right: 8px;"></i>Terminal Hub Route Logistics</h4>
          <p style="color: #cbd5e1; font-size: 0.92rem; margin: 0;">Specialized route planning to bypass Rajendra Nagar Terminal traffic choke points.</p>
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
        <h2 style="font-size: 2rem; font-weight: 800; color: #ffffff;">Popular Relocation Routes from Rajendra Nagar Patna</h2>
        <p style="color: #94a3b8; font-size: 0.95rem;">Frequent intercity moving destinations</p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 15px; text-align: center;">
        <div style="background: #101c40; padding: 15px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.05); color: #6ee7b7; font-weight: 600;">
          Rajendra Nagar to Delhi NCR
        </div>
        <div style="background: #101c40; padding: 15px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.05); color: #6ee7b7; font-weight: 600;">
          Rajendra Nagar to Bangalore
        </div>
        <div style="background: #101c40; padding: 15px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.05); color: #6ee7b7; font-weight: 600;">
          Rajendra Nagar to Kolkata
        </div>
        <div style="background: #101c40; padding: 15px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.05); color: #6ee7b7; font-weight: 600;">
          Rajendra Nagar to Ranchi
        </div>
        <div style="background: #101c40; padding: 15px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.05); color: #6ee7b7; font-weight: 600;">
          Rajendra Nagar to Mumbai
        </div>
        <div style="background: #101c40; padding: 15px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.05); color: #6ee7b7; font-weight: 600;">
          Rajendra Nagar to Hyderabad
        </div>
      </div>
    </div>
  </section>

  <!-- Section 9: FAQ Accordion Section -->
  <section class="faq-section" style="padding: 60px 0; background: #0b132b; color: #ffffff;">
    <div class="container" style="max-width: 900px;">
      <div style="text-align: center; margin-bottom: 40px;">
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff;">Frequently Asked Questions (Rajendra Nagar Patna)</h2>
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
      <h2 style="font-size: 2.2rem; font-weight: 800; margin-bottom: 15px; color: #ffffff;">Planning to Shift in Rajendra Nagar Patna?</h2>
      <p style="font-size: 1.1rem; color: #e2e8f0; margin-bottom: 30px;">Book certified packers and movers today. Get 100% safe packing, free pre-move survey, and instant estimates.</p>
      <div style="display: flex; gap: 15px; justify-content: center; flex-wrap: wrap;">
        <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Us Now" style="padding: 14px 30px; background: #f59e0b; color: #000000; border-radius: 50px; font-weight: 700; text-decoration: none; font-size: 1rem;">
          <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call: <?php echo SITE_PHONE; ?>
        </a>
        <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20need%20moving%20services%20in%20Rajendra%20Nagar%20Patna." title="WhatsApp Inquiry" target="_blank" style="padding: 14px 30px; background: #10b981; color: #ffffff; border-radius: 50px; font-weight: 700; text-decoration: none; font-size: 1rem;">
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
  "description": "Top-rated packers and movers in Rajendra Nagar, Patna with doorstep pickup and transit insurance.",
  "url": "<?php echo $canonical_url; ?>",
  "telephone": "<?php echo SITE_PHONE_RAW; ?>",
  "address": {
    "@type": "PostalAddress",
    "addressLocality": "Rajendra Nagar, Patna",
    "addressRegion": "Bihar",
    "addressCountry": "IN"
  },
  "areaServed": "Rajendra Nagar, Patna, Bihar",
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
  
  var message = "Hello Shree Ashirwad Packers,\n\nI would like a Shifting Quote for Rajendra Nagar Patna:\n- Name: " + name + "\n- Phone: " + phone + "\n- Moving From: " + moveFrom + "\n- Moving To: " + moveTo;
  
  var whatsappUrl = "https://api.whatsapp.com/send?phone=918409531615&text=" + encodeURIComponent(message);
  window.open(whatsappUrl, '_blank');
}
</script>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
