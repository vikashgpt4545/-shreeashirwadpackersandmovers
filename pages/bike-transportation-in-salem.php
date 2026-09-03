<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "Bike Transportation in Salem | Secure Shifting Tamil Nadu";
$page_desc = "Professional bike transportation in Salem, Tamil Nadu. Secure door-to-door two-wheeler shifting with 7-layer steel-dust, industrial-grit & highway-vibration proof packaging.";
$page_keywords = "bike transportation in salem, bike shifting services salem, motorcycle transport salem tamil nadu, bike packers movers salem, two wheeler parcel salem to chennai, bike carrier service salem to bengaluru";
$faq_list = [
    ['q' => 'How much does bike transportation from Salem to Bengaluru or Chennai cost?', 'a' => 'Intercity bike transportation rates from Salem start around ₹2,500 to ₹3,800 for nearby destinations like Bengaluru or Chennai, and ₹4,500 to ₹8,000 for long-distance routes like Salem to Delhi, Mumbai, or Hyderabad.'],
    ['q' => 'How do you protect vehicles from industrial dust and heat in Salem?', 'a' => 'We wrap vehicles in multi-layer stretch film, high-density foam padding, and bubble sheets to shield painted surfaces, chrome parts, and engine components from abrasive industrial particulates and solar heat.'],
    ['q' => 'How many days does bike transport take from Salem to Chennai or Bengaluru?', 'a' => 'Transit to Bengaluru or Chennai takes approximately 24 hours. Deliveries to Mumbai, Delhi, or Kolkata take 3 to 5 days via our daily enclosed vehicle logistics network.'],
    ['q' => 'Is doorstep pickup available in Hasthampatti, Fairlands, and Suramangalam?', 'a' => 'Yes! We offer doorstep pickup across all areas of Salem, including Hasthampatti, Fairlands, Suramangalam, Ammapet, Steel Plant Township, and Salem Junction.'],
    ['q' => 'Is transit insurance included with the bike transport cost?', 'a' => 'Full-risk transit insurance is provided for a nominal policy fee. It guarantees 100% financial compensation for any unexpected transit damage or accident.'],
    ['q' => 'Should I drain fuel from my bike before transport?', 'a' => 'Yes, safety regulations mandate that fuel levels be reduced to 1-2 liters to prevent hazardous leaks or flammable fumes inside closed vehicle containers.'],
    ['q' => 'Can I ship a Royal Enfield or heavy sports bike from Salem?', 'a' => 'Yes, our team is equipped with specialized ramps, heavy-duty wheel locks, and reinforced tie-down straps specifically designed for Royal Enfields, cruisers, and premium motorcycles.'],
    ['q' => 'Do you provide GST bills for company relocation reimbursement?', 'a' => 'Yes, we provide official GST bills, IBA-format consignment notes, and itemized receipts required for corporate reimbursement.'],
    ['q' => 'Can I track my vehicle live during transit?', 'a' => 'Yes, all our long-distance transport carriers feature GPS tracking, and real-time movement updates are sent directly to your WhatsApp.'],
    ['q' => 'How do I book a bike transport slot in Salem?', 'a' => 'Fill out the quick quote form above or call/WhatsApp us directly at +91 8409531615. Our Salem logistics team will arrange doorstep pickup at your scheduled time.']
];

require_once __DIR__ . '/../includes/header.php';
?>

<main class="site-main dark-theme-override">

  <!-- Visual Breadcrumb Navigation Bar -->
  <div class="breadcrumb-wrapper">
    <div class="container">
      <div class="breadcrumb-list">
        <span class="breadcrumb-item"><a href="<?php echo SITE_URL; ?>" title="Home">Home</a></span>
        <span class="breadcrumb-separator">/</span>
        <span class="breadcrumb-item"><a href="<?php echo SITE_URL; ?>pages/bike-transportation.php" title="Bike Transportation">Bike Transportation</a></span>
        <span class="breadcrumb-separator">/</span>
        <span class="breadcrumb-item active">Salem</span>
      </div>
    </div>
  </div>

  <!-- Hero Section with WhatsApp Lead Form -->
  <section class="hero-section" style="background: linear-gradient(135deg, #0b132b 0%, #1c2541 100%); padding: 60px 0; color: #ffffff;">
    <div class="container">
      <div class="hero-grid" style="display: grid; grid-template-columns: 1.2fr 0.8fr; gap: 40px; align-items: center;">
        
        <!-- Hero Text Column -->
        <div class="hero-text">
          <span class="section-tag" style="background: rgba(245, 158, 11, 0.15); color: #f59e0b; border: 1px solid rgba(245, 158, 11, 0.4); padding: 6px 16px; border-radius: 20px; font-size: 0.85rem; font-weight: 700; text-transform: uppercase; display: inline-block; margin-bottom: 15px;">
            SALEM RELOCATION & TWO-WHEELER LOGISTICS SPECIALISTS
          </span>
          <h1 style="font-size: 2.7rem; font-weight: 800; line-height: 1.2; margin-bottom: 20px; color: #ffffff;">
            Professional <span style="color: #f59e0b;">Bike Transportation in Salem</span>
          </h1>
          <p style="font-size: 1.12rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 25px;">
            Premier two-wheeler shifting company in Salem, Tamil Nadu. Guaranteed zero-scratch protection with 7-layer industrial steel-dust, grit, and heat-resistant protective wrapping for safe nationwide bike transport.
          </p>

          <div style="display: flex; gap: 15px; flex-wrap: wrap; margin-bottom: 30px;">
            <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Now" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
              <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call Now: <?php echo SITE_PHONE; ?>
            </a>
            <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20a%20bike%20shifting%20quote%20from%20Salem." title="Chat on WhatsApp" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
              <i class="fab fa-whatsapp" style="margin-right: 8px;"></i> Chat on WhatsApp
            </a>
          </div>

          <div style="display: flex; gap: 20px; font-size: 0.9rem; color: #94a3b8;">
            <span><strong style="color: #f59e0b;">100% Transit Insured</strong> Shifting</span>
            <span><strong style="color: #f59e0b;">7-Layer</strong> Protective Wrap</span>
            <span><strong style="color: #f59e0b;">Door-to-Door</strong> Pickup & Delivery</span>
          </div>
        </div>

        <!-- Hero Lead Form Column -->
        <div class="hero-form-card" style="background: rgba(255, 255, 255, 0.05); backdrop-filter: blur(10px); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 16px; padding: 30px; box-shadow: 0 15px 35px rgba(0,0,0,0.4);">
          <h2 style="font-size: 1.4rem; color: #ffffff; margin-bottom: 8px; font-weight: 700; text-align: center;">Get Salem Bike Shifting Quote</h2>
          <p style="font-size: 0.85rem; color: #94a3b8; text-align: center; margin-bottom: 20px;">Transparent pricing delivered to your WhatsApp in 2 minutes</p>

          <form action="#" method="POST" onsubmit="sendHeroWhatsAppLead(event, this);">
            <div style="margin-bottom: 14px;">
              <input type="text" name="name" class="form-control" placeholder="Your Full Name" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="margin-bottom: 14px;">
              <input type="tel" name="phone" class="form-control" placeholder="10-Digit Phone Number" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 10px; margin-bottom: 14px;">
              <input type="text" name="move_from" class="form-control" value="Salem" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
              <input type="text" name="move_to" class="form-control" placeholder="Destination City" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <button type="submit" style="width: 100%; padding: 14px; background: linear-gradient(135deg, #d32f2f 0%, #f59e0b 100%); color: #ffffff; border: none; border-radius: 50px; font-weight: 700; font-size: 1rem; cursor: pointer;">
              Get Free Estimate Now &rarr;
            </button>
          </form>
        </div>

      </div>
    </div>
  </section>

  <!-- Section 3: Key Performance Counter Bar -->
  <section class="stats-counter-section" style="background: #0f172a; padding: 35px 0; border-bottom: 1px solid rgba(255,255,255,0.05);">
    <div class="container">
      <div class="stats-grid" style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 20px; text-align: center;">
        <div class="stat-card" style="padding: 15px; background: rgba(255,255,255,0.02); border-radius: 12px; border: 1px solid rgba(255,255,255,0.05);">
          <span style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; display: block;">3,200+</span>
          <span style="font-size: 0.88rem; color: #94a3b8; text-transform: uppercase; letter-spacing: 0.5px;">Bikes Transported in Salem</span>
        </div>
        <div class="stat-card" style="padding: 15px; background: rgba(255,255,255,0.02); border-radius: 12px; border: 1px solid rgba(255,255,255,0.05);">
          <span style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; display: block;">99.9%</span>
          <span style="font-size: 0.88rem; color: #94a3b8; text-transform: uppercase; letter-spacing: 0.5px;">Zero-Scratch Delivery Record</span>
        </div>
        <div class="stat-card" style="padding: 15px; background: rgba(255,255,255,0.02); border-radius: 12px; border: 1px solid rgba(255,255,255,0.05);">
          <span style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; display: block;">100%</span>
          <span style="font-size: 0.88rem; color: #94a3b8; text-transform: uppercase; letter-spacing: 0.5px;">All-Risk Transit Insured</span>
        </div>
        <div class="stat-card" style="padding: 15px; background: rgba(255,255,255,0.02); border-radius: 12px; border: 1px solid rgba(255,255,255,0.05);">
          <span style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; display: block;">24/7</span>
          <span style="font-size: 0.88rem; color: #94a3b8; text-transform: uppercase; letter-spacing: 0.5px;">GPS Live Route Tracking</span>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 4: 6-Card Feature Grid -->
  <section class="features-grid-section" style="background: #0b132b; padding: 70px 0;">
    <div class="container">
      <div class="section-title text-center" style="text-align: center; margin-bottom: 50px;">
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin-bottom: 12px;">
          Why Choose Our <span style="color: #f59e0b;">Salem Bike Shifting Services?</span>
        </h2>
        <p style="font-size: 1rem; color: #94a3b8; max-width: 650px; margin: 0 auto;">
          Customized for industrial personnel, steel plant executives, students, and residents relocating across Tamil Nadu & India.
        </p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 25px;">
        <div class="feature-card" style="background: #1c2541; padding: 30px; border-radius: 14px; border: 1px solid rgba(255,255,255,0.08); transition: transform 0.3s ease;">
          <div style="font-size: 2rem; color: #f59e0b; margin-bottom: 15px;"><i class="fas fa-industry"></i></div>
          <h3 style="font-size: 1.25rem; font-weight: 700; color: #ffffff; margin-bottom: 10px;">Industrial Steel Dust & Heat Protection</h3>
          <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.6;">
            Salem's steel plant and manufacturing environment produces abrasive particulate matter. Our multi-layer stretch film protects painted and mechanical components.
          </p>
        </div>

        <div class="feature-card" style="background: #1c2541; padding: 30px; border-radius: 14px; border: 1px solid rgba(255,255,255,0.08); transition: transform 0.3s ease;">
          <div style="font-size: 2rem; color: #f59e0b; margin-bottom: 15px;"><i class="fas fa-truck-moving"></i></div>
          <h3 style="font-size: 1.25rem; font-weight: 700; color: #ffffff; margin-bottom: 10px;">Enclosed Hydraulic Auto-Carriers</h3>
          <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.6;">
            All bikes are transported inside closed hydraulic car/bike transport vehicles fitted with pneumatic tie-down belts and rubberized wheel chocks.
          </p>
        </div>

        <div class="feature-card" style="background: #1c2541; padding: 30px; border-radius: 14px; border: 1px solid rgba(255,255,255,0.08); transition: transform 0.3s ease;">
          <div style="font-size: 2rem; color: #f59e0b; margin-bottom: 15px;"><i class="fas fa-satellite"></i></div>
          <h3 style="font-size: 1.25rem; font-weight: 700; color: #ffffff; margin-bottom: 10px;">GPS Real-Time Location Updates</h3>
          <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.6;">
            Receive continuous vehicle tracking updates on WhatsApp as your bike travels along NH-44 and major national highways.
          </p>
        </div>

        <div class="feature-card" style="background: #1c2541; padding: 30px; border-radius: 14px; border: 1px solid rgba(255,255,255,0.08); transition: transform 0.3s ease;">
          <div style="font-size: 2rem; color: #f59e0b; margin-bottom: 15px;"><i class="fas fa-file-contract"></i></div>
          <h3 style="font-size: 1.25rem; font-weight: 700; color: #ffffff; margin-bottom: 10px;">Zero-Deductible Transit Insurance</h3>
          <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.6;">
            Comprehensive insurance backed by top national underwriters providing 100% financial security against accidents, scratch damage, or road hazards.
          </p>
        </div>

        <div class="feature-card" style="background: #1c2541; padding: 30px; border-radius: 14px; border: 1px solid rgba(255,255,255,0.08); transition: transform 0.3s ease;">
          <div style="font-size: 2rem; color: #f59e0b; margin-bottom: 15px;"><i class="fas fa-motorcycle"></i></div>
          <h3 style="font-size: 1.25rem; font-weight: 700; color: #ffffff; margin-bottom: 10px;">Superbike & Premium Bike Expertise</h3>
          <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.6;">
            Customized cradles and padded harnesses tailored for Royal Enfield Bullet, KTM, BMW, Harley-Davidson, and luxury sports bikes.
          </p>
        </div>

        <div class="feature-card" style="background: #1c2541; padding: 30px; border-radius: 14px; border: 1px solid rgba(255,255,255,0.08); transition: transform 0.3s ease;">
          <div style="font-size: 2rem; color: #f59e0b; margin-bottom: 15px;"><i class="fas fa-building"></i></div>
          <h3 style="font-size: 1.25rem; font-weight: 700; color: #ffffff; margin-bottom: 10px;">GST Invoice & Corporate Billing</h3>
          <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.6;">
            Complete corporate transfer assistance with GST-compliant billing, IBA-format consignment notes, and official invoices for prompt employer reimbursement.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 5: Comprehensive Bike Shifting Services Breakdown -->
  <section class="services-detail-section" style="background: #0f172a; padding: 70px 0;">
    <div class="container">
      <div style="max-width: 900px; margin: 0 auto;">
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; text-align: center; margin-bottom: 15px;">
          Tailored Two-Wheeler Shifting Options in <span style="color: #f59e0b;">Salem</span>
        </h2>
        <p style="font-size: 1rem; color: #94a3b8; text-align: center; margin-bottom: 45px;">
          Designed to cater to corporate relocations, industrial transfers, and student shifting requirements.
        </p>

        <div style="display: grid; gap: 25px;">
          <div style="background: #1e293b; padding: 25px; border-radius: 12px; border-left: 4px solid #f59e0b;">
            <h3 style="font-size: 1.3rem; font-weight: 700; color: #ffffff; margin-bottom: 8px;">Door-to-Door Pickup & Delivery across Salem</h3>
            <p style="font-size: 0.95rem; color: #cbd5e1; line-height: 1.7;">
              Our trained packing crew arrives at your residence, hostel, or workplace in Salem with high-grade protective materials. Your two-wheeler is inspected, wrapped, and safely loaded into our enclosed vehicle carrier for direct doorstep delivery anywhere in India.
            </p>
          </div>

          <div style="background: #1e293b; padding: 25px; border-radius: 12px; border-left: 4px solid #10b981;">
            <h3 style="font-size: 1.3rem; font-weight: 700; color: #ffffff; margin-bottom: 8px;">Intercity & Interstate Express Transport</h3>
            <p style="font-size: 0.95rem; color: #cbd5e1; line-height: 1.7;">
              Direct routes connecting Salem to major metropolitan and tech centers such as Bengaluru, Chennai, Coimbatore, Madurai, Hyderabad, Pune, Mumbai, and Delhi. Daily carrier departures ensure rapid, scheduled deliveries.
            </p>
          </div>

          <div style="background: #1e293b; padding: 25px; border-radius: 12px; border-left: 4px solid #e11d48;">
            <h3 style="font-size: 1.3rem; font-weight: 700; color: #ffffff; margin-bottom: 8px;">Steel Plant & Industrial Relocation Packages</h3>
            <p style="font-size: 0.95rem; color: #cbd5e1; line-height: 1.7;">
              Specialized services for SAIL employees, industrial engineers, healthcare professionals, and government staff transferred out of Salem. Complete documentation, IBA-format consignment notes, and GST invoices provided.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 6: 7-Layer Packaging Framework -->
  <section class="packaging-framework-section" style="background: #0b132b; padding: 70px 0;">
    <div class="container">
      <div class="section-title text-center" style="text-align: center; margin-bottom: 50px;">
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin-bottom: 12px;">
          Our Exclusive <span style="color: #f59e0b;">7-Layer Anti-Damage Packaging</span>
        </h2>
        <p style="font-size: 1rem; color: #94a3b8; max-width: 700px; margin: 0 auto;">
          Engineered to combat industrial dust, highway grit, and long-distance transport vibrations.
        </p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 20px;">
        <div style="background: #1c2541; padding: 20px; border-radius: 12px; text-align: center; border: 1px solid rgba(255,255,255,0.05);">
          <span style="display: inline-block; width: 40px; height: 40px; line-height: 40px; background: #f59e0b; color: #000; font-weight: 800; border-radius: 50%; margin-bottom: 12px;">L1</span>
          <h4 style="color: #fff; font-weight: 700; margin-bottom: 6px;">Dust-Proof Stretch Wrap</h4>
          <p style="color: #94a3b8; font-size: 0.85rem;">Seals body panels against industrial dust & particulate grime.</p>
        </div>
        <div style="background: #1c2541; padding: 20px; border-radius: 12px; text-align: center; border: 1px solid rgba(255,255,255,0.05);">
          <span style="display: inline-block; width: 40px; height: 40px; line-height: 40px; background: #f59e0b; color: #000; font-weight: 800; border-radius: 50%; margin-bottom: 12px;">L2</span>
          <h4 style="color: #fff; font-weight: 700; margin-bottom: 6px;">High-Density Foam</h4>
          <p style="color: #94a3b8; font-size: 0.85rem;">Protects delicate fairings, headlights & digital instrument clusters.</p>
        </div>
        <div style="background: #1c2541; padding: 20px; border-radius: 12px; text-align: center; border: 1px solid rgba(255,255,255,0.05);">
          <span style="display: inline-block; width: 40px; height: 40px; line-height: 40px; background: #f59e0b; color: #000; font-weight: 800; border-radius: 50%; margin-bottom: 12px;">L3</span>
          <h4 style="color: #fff; font-weight: 700; margin-bottom: 6px;">Bubble Cushion Layer</h4>
          <p style="color: #94a3b8; font-size: 0.85rem;">Shock-absorbing air cushion for fuel tank and chrome elements.</p>
        </div>
        <div style="background: #1c2541; padding: 20px; border-radius: 12px; text-align: center; border: 1px solid rgba(255,255,255,0.05);">
          <span style="display: inline-block; width: 40px; height: 40px; line-height: 40px; background: #f59e0b; color: #000; font-weight: 800; border-radius: 50%; margin-bottom: 12px;">L4</span>
          <h4 style="color: #fff; font-weight: 700; margin-bottom: 6px;">Corrugated Fiber Sheets</h4>
          <p style="color: #94a3b8; font-size: 0.85rem;">Impact-resistant outer shield protecting against external impacts.</p>
        </div>
        <div style="background: #1c2541; padding: 20px; border-radius: 12px; text-align: center; border: 1px solid rgba(255,255,255,0.05);">
          <span style="display: inline-block; width: 40px; height: 40px; line-height: 40px; background: #f59e0b; color: #000; font-weight: 800; border-radius: 50%; margin-bottom: 12px;">L5</span>
          <h4 style="color: #fff; font-weight: 700; margin-bottom: 6px;">Corner & Lever Guards</h4>
          <p style="color: #94a3b8; font-size: 0.85rem;">Extra padding for brake levers, rear-view mirrors, & silencer tip.</p>
        </div>
        <div style="background: #1c2541; padding: 20px; border-radius: 12px; text-align: center; border: 1px solid rgba(255,255,255,0.05);">
          <span style="display: inline-block; width: 40px; height: 40px; line-height: 40px; background: #f59e0b; color: #000; font-weight: 800; border-radius: 50%; margin-bottom: 12px;">L6</span>
          <h4 style="color: #fff; font-weight: 700; margin-bottom: 6px;">HDPE Weather Cover</h4>
          <p style="color: #94a3b8; font-size: 0.85rem;">100% water and dust-proof outer shell for monsoon transit.</p>
        </div>
        <div style="background: #1c2541; padding: 20px; border-radius: 12px; text-align: center; border: 1px solid rgba(255,255,255,0.05); grid-column: span 2;">
          <span style="display: inline-block; width: 40px; height: 40px; line-height: 40px; background: #f59e0b; color: #000; font-weight: 800; border-radius: 50%; margin-bottom: 12px;">L7</span>
          <h4 style="color: #fff; font-weight: 700; margin-bottom: 6px;">Pneumatic Strap Anchoring</h4>
          <p style="color: #94a3b8; font-size: 0.85rem;">Heavy-duty ratchet belt locking to eliminate movement inside enclosed carrier.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 7: Localities Covered Grid -->
  <section class="localities-grid-section" style="background: #0f172a; padding: 60px 0;">
    <div class="container">
      <div style="text-align: center; margin-bottom: 40px;">
        <h2 style="font-size: 2.1rem; font-weight: 800; color: #ffffff; margin-bottom: 10px;">
          Salem City & Suburb <span style="color: #f59e0b;">Doorstep Pickup Hubs</span>
        </h2>
        <p style="font-size: 0.95rem; color: #94a3b8;">
          Prompt doorstep pickup services across all major localities and industrial hubs in Salem.
        </p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 15px;">
        <div style="background: rgba(255,255,255,0.03); padding: 14px 18px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.06); color: #cbd5e1; font-size: 0.9rem;">
          <i class="fas fa-map-marker-alt" style="color: #f59e0b; margin-right: 8px;"></i> Hasthampatti
        </div>
        <div style="background: rgba(255,255,255,0.03); padding: 14px 18px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.06); color: #cbd5e1; font-size: 0.9rem;">
          <i class="fas fa-map-marker-alt" style="color: #f59e0b; margin-right: 8px;"></i> Fairlands
        </div>
        <div style="background: rgba(255,255,255,0.03); padding: 14px 18px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.06); color: #cbd5e1; font-size: 0.9rem;">
          <i class="fas fa-map-marker-alt" style="color: #f59e0b; margin-right: 8px;"></i> Suramangalam
        </div>
        <div style="background: rgba(255,255,255,0.03); padding: 14px 18px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.06); color: #cbd5e1; font-size: 0.9rem;">
          <i class="fas fa-map-marker-alt" style="color: #f59e0b; margin-right: 8px;"></i> Ammapet
        </div>
        <div style="background: rgba(255,255,255,0.03); padding: 14px 18px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.06); color: #cbd5e1; font-size: 0.9rem;">
          <i class="fas fa-map-marker-alt" style="color: #f59e0b; margin-right: 8px;"></i> Shevapet
        </div>
        <div style="background: rgba(255,255,255,0.03); padding: 14px 18px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.06); color: #cbd5e1; font-size: 0.9rem;">
          <i class="fas fa-map-marker-alt" style="color: #f59e0b; margin-right: 8px;"></i> Salem Junction Area
        </div>
        <div style="background: rgba(255,255,255,0.03); padding: 14px 18px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.06); color: #cbd5e1; font-size: 0.9rem;">
          <i class="fas fa-map-marker-alt" style="color: #f59e0b; margin-right: 8px;"></i> Steel Plant Township
        </div>
        <div style="background: rgba(255,255,255,0.03); padding: 14px 18px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.06); color: #cbd5e1; font-size: 0.9rem;">
          <i class="fas fa-map-marker-alt" style="color: #f59e0b; margin-right: 8px;"></i> Kondalampatti
        </div>
      </div>
    </div>
  </section>

  <!-- Section 8: Intercity Route Network -->
  <section class="routes-network-section" style="background: #0b132b; padding: 60px 0;">
    <div class="container">
      <div style="text-align: center; margin-bottom: 40px;">
        <h2 style="font-size: 2.1rem; font-weight: 800; color: #ffffff; margin-bottom: 10px;">
          Popular <span style="color: #f59e0b;">Bike Transport Routes from Salem</span>
        </h2>
        <p style="font-size: 0.95rem; color: #94a3b8;">
          Daily scheduled express vehicle carrier departures from Salem to major hubs across India.
        </p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px;">
        <div style="background: #1c2541; padding: 20px; border-radius: 10px; border: 1px solid rgba(255,255,255,0.05); display: flex; justify-content: space-between; align-items: center;">
          <span style="color: #fff; font-weight: 600;">Salem to Chennai</span>
          <span style="color: #10b981; font-weight: 700; font-size: 0.88rem;">24 Hours</span>
        </div>
        <div style="background: #1c2541; padding: 20px; border-radius: 10px; border: 1px solid rgba(255,255,255,0.05); display: flex; justify-content: space-between; align-items: center;">
          <span style="color: #fff; font-weight: 600;">Salem to Bengaluru</span>
          <span style="color: #10b981; font-weight: 700; font-size: 0.88rem;">Same Day / 24 hrs</span>
        </div>
        <div style="background: #1c2541; padding: 20px; border-radius: 10px; border: 1px solid rgba(255,255,255,0.05); display: flex; justify-content: space-between; align-items: center;">
          <span style="color: #fff; font-weight: 600;">Salem to Coimbatore</span>
          <span style="color: #10b981; font-weight: 700; font-size: 0.88rem;">Same Day Delivery</span>
        </div>
        <div style="background: #1c2541; padding: 20px; border-radius: 10px; border: 1px solid rgba(255,255,255,0.05); display: flex; justify-content: space-between; align-items: center;">
          <span style="color: #fff; font-weight: 600;">Salem to Madurai</span>
          <span style="color: #10b981; font-weight: 700; font-size: 0.88rem;">24 Hours</span>
        </div>
        <div style="background: #1c2541; padding: 20px; border-radius: 10px; border: 1px solid rgba(255,255,255,0.05); display: flex; justify-content: space-between; align-items: center;">
          <span style="color: #fff; font-weight: 600;">Salem to Hyderabad</span>
          <span style="color: #10b981; font-weight: 700; font-size: 0.88rem;">2-3 Days</span>
        </div>
        <div style="background: #1c2541; padding: 20px; border-radius: 10px; border: 1px solid rgba(255,255,255,0.05); display: flex; justify-content: space-between; align-items: center;">
          <span style="color: #fff; font-weight: 600;">Salem to Kochi / Kerala</span>
          <span style="color: #10b981; font-weight: 700; font-size: 0.88rem;">2-3 Days</span>
        </div>
        <div style="background: #1c2541; padding: 20px; border-radius: 10px; border: 1px solid rgba(255,255,255,0.05); display: flex; justify-content: space-between; align-items: center;">
          <span style="color: #fff; font-weight: 600;">Salem to Pune</span>
          <span style="color: #10b981; font-weight: 700; font-size: 0.88rem;">3-4 Days</span>
        </div>
        <div style="background: #1c2541; padding: 20px; border-radius: 10px; border: 1px solid rgba(255,255,255,0.05); display: flex; justify-content: space-between; align-items: center;">
          <span style="color: #fff; font-weight: 600;">Salem to Mumbai</span>
          <span style="color: #10b981; font-weight: 700; font-size: 0.88rem;">3-4 Days</span>
        </div>
        <div style="background: #1c2541; padding: 20px; border-radius: 10px; border: 1px solid rgba(255,255,255,0.05); display: flex; justify-content: space-between; align-items: center;">
          <span style="color: #fff; font-weight: 600;">Salem to Delhi / NCR</span>
          <span style="color: #10b981; font-weight: 700; font-size: 0.88rem;">4-5 Days</span>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 9: Documentation & Compliance Framework -->
  <section class="documentation-section" style="background: #0f172a; padding: 60px 0;">
    <div class="container">
      <div style="max-width: 850px; margin: 0 auto; background: #1e293b; padding: 35px; border-radius: 14px; border: 1px solid rgba(255,255,255,0.08);">
        <h2 style="font-size: 1.8rem; font-weight: 800; color: #ffffff; margin-bottom: 20px; text-align: center;">
          Required Documents for <span style="color: #f59e0b;">Bike Transportation in Salem</span>
        </h2>
        <p style="font-size: 0.95rem; color: #cbd5e1; line-height: 1.7; margin-bottom: 25px; text-align: center;">
          To ensure hassle-free transit clearance at RTO checkpoints and valid insurance coverage, we request clear photocopies of:
        </p>

        <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 20px;">
          <div style="display: flex; align-items: flex-start; gap: 12px;">
            <i class="fas fa-check-circle" style="color: #10b981; font-size: 1.2rem; margin-top: 3px;"></i>
            <div>
              <h4 style="color: #fff; font-weight: 700; font-size: 1rem; margin-bottom: 4px;">Vehicle Registration Certificate (RC)</h4>
              <p style="color: #94a3b8; font-size: 0.88rem;">Photocopy of original RC smartcard or digital MParivahan RC.</p>
            </div>
          </div>
          <div style="display: flex; align-items: flex-start; gap: 12px;">
            <i class="fas fa-check-circle" style="color: #10b981; font-size: 1.2rem; margin-top: 3px;"></i>
            <div>
              <h4 style="color: #fff; font-weight: 700; font-size: 1rem; margin-bottom: 4px;">Valid Vehicle Insurance Policy</h4>
              <p style="color: #94a3b8; font-size: 0.88rem;">Active third-party or comprehensive insurance certificate.</p>
            </div>
          </div>
          <div style="display: flex; align-items: flex-start; gap: 12px;">
            <i class="fas fa-check-circle" style="color: #10b981; font-size: 1.2rem; margin-top: 3px;"></i>
            <div>
              <h4 style="color: #fff; font-weight: 700; font-size: 1rem; margin-bottom: 4px;">Owner Govt Photo ID</h4>
              <p style="color: #94a3b8; font-size: 0.88rem;">Aadhaar Card, Driving License, or Voter ID photocopy.</p>
            </div>
          </div>
          <div style="display: flex; align-items: flex-start; gap: 12px;">
            <i class="fas fa-check-circle" style="color: #10b981; font-size: 1.2rem; margin-top: 3px;"></i>
            <div>
              <h4 style="color: #fff; font-weight: 700; font-size: 1rem; margin-bottom: 4px;">Consignment Note & GST Bill</h4>
              <p style="color: #94a3b8; font-size: 0.88rem;">Official consignment note issued by Shree Ashirwad Packers for company reimbursement.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 10: 10-Item FAQ with JSON-LD Schema -->
  <section class="faq-section" style="background: #0b132b; padding: 70px 0;">
    <div class="container">
      <div style="text-align: center; margin-bottom: 45px;">
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin-bottom: 12px;">
          Frequently Asked Questions (<span style="color: #f59e0b;">Bike Transport Salem</span>)
        </h2>
        <p style="font-size: 1rem; color: #94a3b8;">Everything you need to know about booking two-wheeler transport in Salem, Tamil Nadu.</p>
      </div>

      <div style="max-width: 850px; margin: 0 auto; display: grid; gap: 15px;">
        
        <div style="background: #1c2541; padding: 22px; border-radius: 10px; border: 1px solid rgba(255,255,255,0.06);">
          <h3 style="font-size: 1.1rem; font-weight: 700; color: #ffffff; margin-bottom: 8px;">Q1: How much does bike transportation from Salem to Bengaluru or Chennai cost?</h3>
          <p style="font-size: 0.93rem; color: #cbd5e1; line-height: 1.6;">
            Intercity bike transportation rates from Salem start around ₹2,500 to ₹3,800 for nearby destinations like Bengaluru or Chennai, and ₹4,500 to ₹8,000 for long-distance routes like Salem to Delhi, Mumbai, or Hyderabad.
          </p>
        </div>

        <div style="background: #1c2541; padding: 22px; border-radius: 10px; border: 1px solid rgba(255,255,255,0.06);">
          <h3 style="font-size: 1.1rem; font-weight: 700; color: #ffffff; margin-bottom: 8px;">Q2: How do you protect vehicles from industrial dust and heat in Salem?</h3>
          <p style="font-size: 0.93rem; color: #cbd5e1; line-height: 1.6;">
            We wrap vehicles in multi-layer stretch film, high-density foam padding, and bubble sheets to shield painted surfaces, chrome parts, and engine components from abrasive industrial particulates and solar heat.
          </p>
        </div>

        <div style="background: #1c2541; padding: 22px; border-radius: 10px; border: 1px solid rgba(255,255,255,0.06);">
          <h3 style="font-size: 1.1rem; font-weight: 700; color: #ffffff; margin-bottom: 8px;">Q3: How many days does bike transport take from Salem to Chennai or Bengaluru?</h3>
          <p style="font-size: 0.93rem; color: #cbd5e1; line-height: 1.6;">
            Transit to Bengaluru or Chennai takes approximately 24 hours. Deliveries to Mumbai, Delhi, or Kolkata take 3 to 5 days via our daily enclosed vehicle logistics network.
          </p>
        </div>

        <div style="background: #1c2541; padding: 22px; border-radius: 10px; border: 1px solid rgba(255,255,255,0.06);">
          <h3 style="font-size: 1.1rem; font-weight: 700; color: #ffffff; margin-bottom: 8px;">Q4: Is doorstep pickup available in Hasthampatti, Fairlands, and Suramangalam?</h3>
          <p style="font-size: 0.93rem; color: #cbd5e1; line-height: 1.6;">
            Yes! We offer doorstep pickup across all areas of Salem, including Hasthampatti, Fairlands, Suramangalam, Ammapet, Steel Plant Township, and Salem Junction.
          </p>
        </div>

        <div style="background: #1c2541; padding: 22px; border-radius: 10px; border: 1px solid rgba(255,255,255,0.06);">
          <h3 style="font-size: 1.1rem; font-weight: 700; color: #ffffff; margin-bottom: 8px;">Q5: Is transit insurance included with the bike transport cost?</h3>
          <p style="font-size: 0.93rem; color: #cbd5e1; line-height: 1.6;">
            Full-risk transit insurance is provided for a nominal policy fee. It guarantees 100% financial compensation for any unexpected transit damage or accident.
          </p>
        </div>

        <div style="background: #1c2541; padding: 22px; border-radius: 10px; border: 1px solid rgba(255,255,255,0.06);">
          <h3 style="font-size: 1.1rem; font-weight: 700; color: #ffffff; margin-bottom: 8px;">Q6: Should I drain fuel from my bike before transport?</h3>
          <p style="font-size: 0.93rem; color: #cbd5e1; line-height: 1.6;">
            Yes, safety regulations mandate that fuel levels be reduced to 1-2 liters to prevent hazardous leaks or flammable fumes inside closed vehicle containers.
          </p>
        </div>

        <div style="background: #1c2541; padding: 22px; border-radius: 10px; border: 1px solid rgba(255,255,255,0.06);">
          <h3 style="font-size: 1.1rem; font-weight: 700; color: #ffffff; margin-bottom: 8px;">Q7: Can I ship a Royal Enfield or heavy sports bike from Salem?</h3>
          <p style="font-size: 0.93rem; color: #cbd5e1; line-height: 1.6;">
            Yes, our team is equipped with specialized ramps, heavy-duty wheel locks, and reinforced tie-down straps specifically designed for Royal Enfields, cruisers, and premium motorcycles.
          </p>
        </div>

        <div style="background: #1c2541; padding: 22px; border-radius: 10px; border: 1px solid rgba(255,255,255,0.06);">
          <h3 style="font-size: 1.1rem; font-weight: 700; color: #ffffff; margin-bottom: 8px;">Q8: Do you provide GST bills for company relocation reimbursement?</h3>
          <p style="font-size: 0.93rem; color: #cbd5e1; line-height: 1.6;">
            Yes, we provide official GST bills, IBA-format consignment notes, and itemized receipts required for corporate reimbursement.
          </p>
        </div>

        <div style="background: #1c2541; padding: 22px; border-radius: 10px; border: 1px solid rgba(255,255,255,0.06);">
          <h3 style="font-size: 1.1rem; font-weight: 700; color: #ffffff; margin-bottom: 8px;">Q9: Can I track my vehicle live during transit?</h3>
          <p style="font-size: 0.93rem; color: #cbd5e1; line-height: 1.6;">
            Yes, all our long-distance transport carriers feature GPS tracking, and real-time movement updates are sent directly to your WhatsApp.
          </p>
        </div>

        <div style="background: #1c2541; padding: 22px; border-radius: 10px; border: 1px solid rgba(255,255,255,0.06);">
          <h3 style="font-size: 1.1rem; font-weight: 700; color: #ffffff; margin-bottom: 8px;">Q10: How do I book a bike transport slot in Salem?</h3>
          <p style="font-size: 0.93rem; color: #cbd5e1; line-height: 1.6;">
            Fill out the quick quote form above or call/WhatsApp us directly at <?php echo SITE_PHONE; ?>. Our Salem logistics team will arrange doorstep pickup at your scheduled time.
          </p>
        </div>

      </div>
    </div>
  </section>

  <!-- Section 11: Call to Action Footer CTA -->
  <section class="cta-footer-section" style="background: linear-gradient(135deg, #d32f2f 0%, #0b132b 100%); padding: 60px 0; text-align: center; color: #ffffff;">
    <div class="container">
      <h2 style="font-size: 2.3rem; font-weight: 800; margin-bottom: 15px;">
        Book Safe & Insured Bike Transport in Salem Today!
      </h2>
      <p style="font-size: 1.1rem; color: #e2e8f0; max-width: 650px; margin: 0 auto 30px;">
        Enjoy hassle-free door-to-door bike shifting backed by 7-layer protective packaging and real-time tracking.
      </p>
      <div style="display: flex; justify-content: center; gap: 20px; flex-wrap: wrap;">
        <a href="tel:<?php echo SITE_PHONE_RAW; ?>" style="padding: 15px 35px; background: #f59e0b; color: #000000; font-weight: 800; border-radius: 50px; text-decoration: none; font-size: 1.05rem; box-shadow: 0 4px 15px rgba(245, 158, 11, 0.4);">
          <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call <?php echo SITE_PHONE; ?>
        </a>
        <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20to%20book%20bike%20transportation%20in%20Salem." target="_blank" style="padding: 15px 35px; background: #10b981; color: #ffffff; font-weight: 800; border-radius: 50px; text-decoration: none; font-size: 1.05rem; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
          <i class="fab fa-whatsapp" style="margin-right: 8px;"></i> WhatsApp Quick Booking
        </a>
      </div>
    </div>
  </section>

</main>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
