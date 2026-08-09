<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "Packers and Movers in Shahpur Patna | 8409531615";
$page_desc = "Hire certified packers and movers in Shahpur Patna. Shree Ashirwad Packers and Movers offers secure household shifting, office relocations, room moving, Danapur-Khagaul area transport, and IBA claim bills with zero hidden costs. Call (+91) 8409531615.";
$page_keywords = "packers and movers in shahpur patna, packers and movers shahpur patna, movers and packers in patna shahpur, house shifting in shahpur patna, best packers and movers in shahpur patna, packers and movers service in patna, movers and packers in patna";

$page_city = "Patna";

$faq_list = [
    ['q' => 'Do you provide same-day household shifting in Shahpur, Patna?', 'a' => 'Yes, local shifting within Shahpur or to nearby locations like Danapur Cantt, Khagaul, Saguna More, and Gola Road is fully completed in a single day, including complete packing, transit, loading, and unpacking.'],
    ['q' => 'What are the packers and movers charges in Shahpur Patna?', 'a' => 'Relocation charges are completely dynamic and calculated depending on the volume of goods, type of packing material, floor levels, lift availability, and exact distance. Please request a free video survey for a detailed customized quote.'],
    ['q' => 'How do you protect delicate goods during transit in Shahpur?', 'a' => 'We wrap all glassware, electronics, and delicate decorative items in bubble wrap and foam cushioning sheets, packing them into heavy-duty corrugated cartons.'],
    ['q' => 'Do you offer commercial and office shifting services in Shahpur Patna?', 'a' => 'Yes, we provide specialized commercial and office relocation services including secure packaging for server racks, computers, office files, and modular furniture.'],
    ['q' => 'Are your GST bills valid for PSU, bank, and govt employee transfer claims?', 'a' => 'Yes, Shree Ashirwad Packers provides 100% genuine IBA-compliant GST invoices, LR copies, money receipts, and itemized inventory lists accepted by all govt departments, banks, and corporate firms.'],
    ['q' => 'How early should I book shifting in Shahpur Patna?', 'a' => 'Booking 1 to 2 days in advance helps us reserve optimal container vehicles and specialized packing crews for your preferred moving time.'],
    ['q' => 'Do your movers handle furniture dismantling and reassembly in Shahpur?', 'a' => 'Yes, our expert carpenters dismantle double beds, wooden wardrobes, modular dining tables, and reassemble them neatly at your new location.']
];

require_once __DIR__ . '/../includes/header.php';
?>

<main class="site-main">
  <div class="breadcrumb-wrapper">
    <div class="container">
      <div class="breadcrumb-list">
        <span class="breadcrumb-item"><a href="<?php echo SITE_URL; ?>" title="Home">Home</a></span>
        <span class="breadcrumb-separator">/</span>
        <span class="breadcrumb-item"><a href="<?php echo SITE_URL; ?>packers-and-movers-in-patna" title="Patna">Patna</a></span>
        <span class="breadcrumb-separator">/</span>
        <span class="breadcrumb-item active">Packers and Movers in Shahpur Patna</span>
      </div>
    </div>
  </div>

  <section class="hero-section" style="background: linear-gradient(135deg, #0b132b 0%, #1c2541 100%); padding: 60px 0; color: #ffffff;">
    <div class="container">
      <div class="hero-grid" style="display: grid; grid-template-columns: 1.2fr 0.8fr; gap: 40px; align-items: center;">
        <div class="hero-text">
          <span class="section-tag" style="background: rgba(245, 158, 11, 0.15); color: #f59e0b; border: 1px solid rgba(245, 158, 11, 0.4); padding: 6px 16px; border-radius: 20px; font-size: 0.85rem; font-weight: 700; text-transform: uppercase; display: inline-block; margin-bottom: 15px;">
            Shahpur Relocations Specialist
          </span>
          <h1 style="font-size: 2.8rem; font-weight: 800; line-height: 1.2; margin-bottom: 20px; color: #ffffff;">
            Trusted <span style="color: #f59e0b;">Packers and Movers in Shahpur Patna</span>
          </h1>
          <p style="font-size: 1.1rem; color: #cbd5e1; line-height: 1.7; margin-bottom: 25px;">
            Shree Ashirwad Packers and Movers provides certified household shifting, commercial relocation, room moving, and bike transport in Shahpur Patna. 7-layer protective packaging, zero hidden fees, and 100% IBA GST claim bills.
          </p>
          <div style="display: flex; gap: 15px; flex-wrap: wrap; margin-bottom: 30px;">
            <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Us Now" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; text-decoration: none;"><i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call: <?php echo SITE_PHONE; ?></a>
            <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20need%20a%20shifting%20quote%20in%20Shahpur%20Patna." title="WhatsApp Chat" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; text-decoration: none;"><i class="fab fa-whatsapp" style="margin-right: 8px;"></i> WhatsApp Quote</a>
          </div>
        </div>

        <div class="hero-form-card" style="background: rgba(255, 255, 255, 0.05); backdrop-filter: blur(10px); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 16px; padding: 30px;">
          <h2 style="font-size: 1.4rem; color: #ffffff; margin-bottom: 8px; font-weight: 700; text-align: center;">Get Shahpur Quote</h2>
          <form action="#" method="POST" onsubmit="sendHeroWhatsAppLead(event, this);">
            <div style="margin-bottom: 14px;"><input type="text" name="name" class="form-control" placeholder="Your Full Name" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;"></div>
            <div style="margin-bottom: 14px;"><input type="tel" name="phone" class="form-control" placeholder="Phone Number" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;"></div>
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 10px; margin-bottom: 14px;">
              <input type="text" name="move_from" class="form-control" value="Shahpur, Patna" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
              <input type="text" name="move_to" class="form-control" placeholder="Destination City/Area" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="margin-bottom: 16px;"><textarea name="message" class="form-control" rows="2" placeholder="Items List / Shifting Details" style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;"></textarea></div>
            <button type="submit" class="btn btn-primary" style="width: 100%; padding: 14px; font-weight: 700; border-radius: 8px; background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%); border: none; color: #000;">Get Free Instant Quote</button>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- Detailed Overview -->
  <section style="padding: 70px 0; background: #0b132b; color: #e2e8f0; line-height: 1.8;">
    <div class="container" style="max-width: 950px;">
      <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem;">Local Shifting Experts</span>
      <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin: 10px 0 20px 0;">Get Certified Shifting Services in <span style="color: #f59e0b;">Shahpur Patna</span></h2>
      
      <p style="font-size: 1.05rem; color: #cbd5e1; margin-bottom: 20px;">
        Shahpur is a expanding residential locality situated near Danapur and Khagaul in Western Patna, offering suburban housing developments and connectivity to major bypass roads. Safe handling of household items, heavy wardrobes, and delicate glass setups needs experienced professionals. Hiring dedicated <strong>packers and movers in Shahpur Patna</strong> ensures your relocation is managed systematically and damage-free.
      </p>
      <p style="font-size: 1.05rem; color: #cbd5e1; margin-bottom: 20px;">
        At <strong>Shree Ashirwad Packers and Movers</strong>, we operate with a dedicated team of loaders and packing specialists. We use high-quality bubble sheets, foam sheets, corrugated rolls, and stretch wraps to safeguard your electronics and furniture from transport friction.
      </p>
      <p style="font-size: 1.05rem; color: #cbd5e1; margin-bottom: 20px;">
        Whether you are planning moves with the <a href="<?php echo SITE_URL; ?>packers-and-movers-in-patna" title="Best Packers and Movers in Patna" style="color: #f59e0b; text-decoration: underline; font-weight: 600;">best packers and movers in Patna</a>, local household shifting, or need <a href="<?php echo SITE_URL; ?>packers-and-movers-in-patna" title="Room Shifting Patna" style="color: #f59e0b; text-decoration: underline; font-weight: 600;">room shifting</a> assistance, our team manages the complete process from our central Patna hub.
      </p>

      <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px; margin: 35px 0;">
        <div style="background: #172a54; padding: 20px; border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.3);">
          <h3 style="color: #fff; font-size: 1.1rem; font-weight: 700;"><i class="fas fa-home"></i> Local Household Shifting</h3>
          <p style="font-size: 0.9rem; color: #cbd5e1; margin-top: 8px;">Complete 1/2/3 BHK flat relocation across Shahpur & Danapur areas with zero damage.</p>
        </div>
        <div style="background: #172a54; padding: 20px; border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.3);">
          <h3 style="color: #fff; font-size: 1.1rem; font-weight: 700;"><i class="fas fa-shield-alt"></i> IBA Compliant Bills</h3>
          <p style="font-size: 0.9rem; color: #cbd5e1; margin-top: 8px;">Official GST invoices and LR copies for employee transfer claim reimbursement.</p>
        </div>
        <div style="background: #172a54; padding: 20px; border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.3);">
          <h3 style="color: #fff; font-size: 1.1rem; font-weight: 700;"><i class="fas fa-box"></i> 7-Layer Packaging</h3>
          <p style="font-size: 0.9rem; color: #cbd5e1; margin-top: 8px;">Air bubble rolls, corrugated sheets, stretch wrap, and wooden crates.</p>
        </div>
        <div style="background: #172a54; padding: 20px; border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.3);">
          <h3 style="color: #fff; font-size: 1.1rem; font-weight: 700;">🛵 Bike Carrier Service</h3>
          <p style="font-size: 0.9rem; color: #cbd5e1; margin-top: 8px;">Enclosed multi-layer bubble wrapped motorcycle shipping to any city.</p>
        </div>
        <div style="background: #172a54; padding: 20px; border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.3);">
          <h3 style="color: #fff; font-size: 1.1rem; font-weight: 700;"><i class="fas fa-building"></i> Commercial Office Move</h3>
          <p style="font-size: 0.9rem; color: #cbd5e1; margin-top: 8px;">Corporate IT desks, server racks, files, and office furniture transport.</p>
        </div>
        <div style="background: #172a54; padding: 20px; border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.3);">
          <h3 style="color: #fff; font-size: 1.1rem; font-weight: 700;"><i class="fas fa-user-cog"></i> Dismantling & Assembly</h3>
          <p style="font-size: 0.9rem; color: #cbd5e1; margin-top: 8px;">Expert carpenters for dismantling beds & reassembling furniture at destination.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Step-by-Step Shifting Methodology -->
  <section style="padding: 70px 0; background: #070d1e; color: #ffffff; border-top: 1px solid rgba(245, 158, 11, 0.15);">
    <div class="container" style="max-width: 950px;">
      <div class="section-header text-center" style="margin-bottom: 45px;">
        <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Our Methodology</span>
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin-top: 10px;">Step-by-Step Shifting Process in Shahpur</h2>
        <p style="color: #cbd5e1; margin-top: 10px;">How we execute damage-free relocations for residences and offices in Shahpur, Patna.</p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 20px;">
        <div style="background: #101c40; padding: 24px; border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <span style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; display: block; margin-bottom: 10px;">01</span>
          <h3 style="font-size: 1.1rem; color: #ffffff; margin-bottom: 8px; font-weight: 700;">Pre-Move Assessment</h3>
          <p style="font-size: 0.88rem; color: #cbd5e1; line-height: 1.6; margin: 0;">We perform a thorough evaluation of all household assets via video survey or physical visit to estimate packing requirements.</p>
        </div>
        <div style="background: #101c40; padding: 24px; border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <span style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; display: block; margin-bottom: 10px;">02</span>
          <h3 style="font-size: 1.1rem; color: #ffffff; margin-bottom: 8px; font-weight: 700;">Multi-Layer Packaging</h3>
          <p style="font-size: 0.88rem; color: #cbd5e1; line-height: 1.6; margin: 0;">Delicate glassware, heavy wardrobes, beds, and electronics are wrapped in high-density bubble sheets, cartons, and stretch film.</p>
        </div>
        <div style="background: #101c40; padding: 24px; border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <span style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; display: block; margin-bottom: 10px;">03</span>
          <h3 style="font-size: 1.1rem; color: #ffffff; margin-bottom: 8px; font-weight: 700;">Safe Loading & Transit</h3>
          <p style="font-size: 0.88rem; color: #cbd5e1; line-height: 1.6; margin: 0;">Using specialized loading equipment, we secure goods inside closed container trucks to eliminate friction during transit.</p>
        </div>
        <div style="background: #101c40; padding: 24px; border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <span style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; display: block; margin-bottom: 10px;">04</span>
          <h3 style="font-size: 1.1rem; color: #ffffff; margin-bottom: 8px; font-weight: 700;">Unpacking & Assembly</h3>
          <p style="font-size: 0.88rem; color: #cbd5e1; line-height: 1.6; margin: 0;">At your new location, we lift, unload, unpack, and reassemble heavy furniture modular pieces according to your layout preferences.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Local Interlinking Network -->
  <section style="padding: 70px 0; background: #0b132b; color: #ffffff;">
    <div class="container" style="max-width: 950px;">
      <div style="background: linear-gradient(135deg, #172a54 0%, #101c40 100%); border-radius: 20px; padding: 35px; border: 1px solid rgba(245, 158, 11, 0.3);">
        <h3 style="font-size: 1.8rem; font-weight: 800; margin-bottom: 15px; color: #ffffff;">Aggressive Local Relocation Network across Patna</h3>
        <p style="font-size: 1rem; color: #cbd5e1; line-height: 1.7; margin-bottom: 25px;">
          Our transport network links all key residential sectors across Patna. We maintain localized teams in neighboring zones to ensure quick dispatch and coordinate local clearances. If you are shifting to or from other areas, explore our detailed guides:
        </p>
        <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 15px; font-size: 0.9rem; font-weight: 600;">
          <a href="<?php echo SITE_URL; ?>packers-and-movers-in-danapur-patna" title="Danapur Shifting" style="color: #f59e0b; text-decoration: underline;">Danapur Shifting</a>
          <a href="<?php echo SITE_URL; ?>packers-and-movers-in-khagaul-patna" title="Khagaul Shifting" style="color: #f59e0b; text-decoration: underline;">Khagaul Shifting</a>
          <a href="<?php echo SITE_URL; ?>packers-and-movers-in-saguna-more-patna" title="Saguna More Shifting" style="color: #f59e0b; text-decoration: underline;">Saguna More Shifting</a>
          <a href="<?php echo SITE_URL; ?>packers-and-movers-in-bailey-road-patna" title="Bailey Road Shifting" style="color: #f59e0b; text-decoration: underline;">Bailey Road Shifting</a>
          <a href="<?php echo SITE_URL; ?>packers-and-movers-in-patna-city" title="Patna City Shifting" style="color: #f59e0b; text-decoration: underline;">Patna City Shifting</a>
          <a href="<?php echo SITE_URL; ?>packers-and-movers-in-kankarbagh-patna" title="Kankarbagh Shifting" style="color: #f59e0b; text-decoration: underline;">Kankarbagh Shifting</a>
          <a href="<?php echo SITE_URL; ?>packers-and-movers-in-patna" title="Local Packers Patna" style="color: #f59e0b; text-decoration: underline;">Local Packers Patna</a>
          <a href="<?php echo SITE_URL; ?>packers-and-movers-in-boring-road-patna" title="Boring Road Shifting" style="color: #f59e0b; text-decoration: underline;">Boring Road Shifting</a>
        </div>
      </div>
    </div>
  </section>

  <!-- Locality Specific Logistics Infrastructure -->
  <section style="padding: 70px 0; background: #070d1e; color: #ffffff; border-top: 1px solid rgba(245, 158, 11, 0.15);">
    <div class="container" style="max-width: 950px;">
      <h3 style="font-size: 2rem; font-weight: 800; color: #ffffff; margin-bottom: 20px;">
        Shahpur Shifting Challenges & Solutions
      </h3>
      <div style="font-size: 1.05rem; color: #cbd5e1; line-height: 1.8;">
        <p style="margin-bottom: 16px;">
          Shahpur features mixed residential and semi-commercial roads branching off the main Danapur-Khagaul highway network. Carrying out a major household or corporate office relocation here requires careful navigation of local access roads and planning truck arrival times.
        </p>
        <p style="margin-bottom: 16px;">
          Moreover, newly constructed housing societies along Shahpur often feature tight building entrances and narrow stairwells. Moving large items like double door refrigerators, heavy wooden wardrobes, and king-size beds requires specialized loading strategies. Our handlers use premium hoisting ropes and safety nets to lift heavy cargo safely through balconies or staircases when lift space is limited.
        </p>
        <p style="margin-bottom: 0;">
          If you are planning to relocate, review our customized <a href="<?php echo SITE_URL; ?>services" title="Relocation Services" style="color: #f59e0b; text-decoration: underline; font-weight: 600;">relocation services</a> plans, read more <a href="<?php echo SITE_URL; ?>about" title="About Us" style="color: #f59e0b; text-decoration: underline; font-weight: 600;">About Shree Ashirwad Packers and Movers</a>, or visit our <a href="<?php echo SITE_URL; ?>contact" title="Contact Us" style="color: #f59e0b; text-decoration: underline; font-weight: 600;">Contact us</a> page to secure your shifting date with Bihar's leading logistics provider.
        </p>
      </div>
    </div>
  </section>

  <!-- Rate Table Section -->
  <section style="padding: 70px 0; background: #0b132b; color: #ffffff;">
    <div class="container" style="max-width: 950px;">
      <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin-bottom: 20px;">Estimated Shahpur Shifting Rates</h2>
      <div style="overflow-x: auto; margin-top: 20px;">
        <table style="width: 100%; border-collapse: collapse; background: #172a54; border-radius: 10px; overflow: hidden;">
          <thead>
            <tr style="background: #1c2541; color: #f59e0b;">
              <th style="padding: 14px; text-align: left;">Shifting Type</th>
              <th style="padding: 14px; text-align: left;">Packaging Material</th>
              <th style="padding: 14px; text-align: left;">Transit Duration</th>
              <th style="padding: 14px; text-align: left;">Estimated Charges (&#8377;)</th>
            </tr>
          </thead>
          <tbody style="color: #cbd5e1; font-size: 0.95rem;">
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.08);"><td style="padding: 14px; font-weight: 700; color: #fff;">1 BHK Flat Local Shifting</td><td style="padding: 14px;">3-Layer Bubble Wrap</td><td style="padding: 14px;">4 - 6 Hours</td><td style="padding: 14px; color: #f59e0b; font-weight: 700;">&#8377;3,500 - &#8377;6,500</td></tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.08);"><td style="padding: 14px; font-weight: 700; color: #fff;">2 BHK House Shifting</td><td style="padding: 14px;">5-Layer Heavy Duty</td><td style="padding: 14px;">6 - 8 Hours</td><td style="padding: 14px; color: #f59e0b; font-weight: 700;">&#8377;5,500 - &#8377;9,500</td></tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.08);"><td style="padding: 14px; font-weight: 700; color: #fff;">3 BHK Villa / House</td><td style="padding: 14px;">7-Layer + Wood Crating</td><td style="padding: 14px;">Same Day Complete</td><td style="padding: 14px; color: #f59e0b; font-weight: 700;">&#8377;8,500 - &#8377;14,500</td></tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.08);"><td style="padding: 14px; font-weight: 700; color: #fff;">Single Room / Student Shifting</td><td style="padding: 14px;">Standard Cartons</td><td style="padding: 14px;">2 - 4 Hours</td><td style="padding: 14px; color: #f59e0b; font-weight: 700;">&#8377;2,500 - &#8377;4,500</td></tr>
            <tr><td style="padding: 14px; font-weight: 700; color: #fff;">Local Office & Commercial</td><td style="padding: 14px;">Heavy Electronics Wrap</td><td style="padding: 14px;">Custom Schedule</td><td style="padding: 14px; color: #f59e0b; font-weight: 700;">&#8377;7,000 - &#8377;18,000</td></tr>
          </tbody>
        </table>
      </div>
    </div>
  </section>

  <!-- FAQ Section -->
  <section style="padding: 70px 0; background: #070d1e; color: #ffffff;">
    <div class="container" style="max-width: 900px;">
      <h2 style="font-size: 2.2rem; font-weight: 800; text-align: center; margin-bottom: 35px; color: #ffffff;">FAQs – Shifting in Shahpur Patna</h2>
      <?php foreach ($faq_list as $index => $faq): ?>
      <div style="background: #101c40; padding: 20px 24px; border-radius: 12px; margin-bottom: 16px; border: 1px solid rgba(245,158,11,0.2);">
        <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Q<?php echo ($index + 1); ?>: <?php echo htmlspecialchars($faq['q']); ?></h3>
        <p style="font-size: 0.98rem; color: #cbd5e1; margin: 0; line-height: 1.7;"><?php echo htmlspecialchars($faq['a']); ?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </section>

  <!-- CTA Banner -->
  <section class="cta-banner-section" style="padding: 70px 0; background: linear-gradient(135deg, #172a54 0%, #0b132b 100%); text-align: center; color: #ffffff;">
    <div class="container" style="max-width: 900px;">
      <h2 style="font-size: 2.3rem; font-weight: 800; margin-bottom: 15px;">Book Safe Household Shifting in <span style="color: #f59e0b;">Shahpur Patna</span></h2>
      <p style="font-size: 1.05rem; color: #cbd5e1; margin-bottom: 25px;">Get written binding price quotes and 100% IBA-compliant bills today.</p>
      <div style="display: flex; gap: 15px; justify-content: center; flex-wrap: wrap;">
        <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Us" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 30px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1.05rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);"><i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call: <?php echo SITE_PHONE; ?></a>
        <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20need%20a%20shifting%20quote%20in%20Shahpur%20Patna." title="WhatsApp" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 30px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1.05rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);"><i class="fab fa-whatsapp" style="margin-right: 8px;"></i> WhatsApp</a>
        <a href="<?php echo SITE_URL; ?>contact" title="Contact Office" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 30px; background: linear-gradient(135deg, #1e293b 0%, #0f172a 100%); border: 1.5px solid #f59e0b; color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1.05rem; text-decoration: none; box-shadow: 0 4px 15px rgba(245, 158, 11, 0.2);"><i class="fas fa-building" style="margin-right: 8px;"></i> Contact Office</a>
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
  var message = "Hello Shree Ashirwad Packers & Movers,\n\nI need a Shifting Quote:\n- Name: " + name + "\n- Phone: " + phone + "\n- From: " + moveFrom + "\n- To: " + moveTo;
  if (extraMsg && extraMsg.trim() !== '') { message += "\n- Details: " + extraMsg; }
  window.location.href = "https://api.whatsapp.com/send?phone=918409531615&text=" + encodeURIComponent(message);
}
</script>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
