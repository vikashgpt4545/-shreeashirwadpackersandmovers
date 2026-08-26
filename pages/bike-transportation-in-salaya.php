<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "Bike Transportation in Salaya | Secure Shifting Devbhumi Dwarka";
$page_desc = "Professional bike transportation in Salaya, Gujarat. Secure door-to-door two-wheeler shifting with 7-layer saline-corrosion, coastal-sand & refinery-dust proof packaging.";
$page_keywords = "bike transportation in salaya, bike shifting services salaya, motorcycle transport devbhumi dwarka, bike packers movers salaya gujarat, two wheeler parcel salaya to ahmedabad, bike carrier service jamnagar khambhalia";
$canonical_url = "https://shreeashirwadpackersandmovers.com/pages/bike-transportation-in-salaya.php";

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
        <span class="breadcrumb-item active">Salaya</span>
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
            SALAYA RELOCATION & TWO-WHEELER LOGISTICS SPECIALISTS
          </span>
          <h1 style="font-size: 2.7rem; font-weight: 800; line-height: 1.2; margin-bottom: 20px; color: #ffffff;">
            Professional <span style="color: #f59e0b;">Bike Transportation in Salaya</span>
          </h1>
          <p style="font-size: 1.12rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 25px;">
            Leading two-wheeler shifting service in Salaya & Devbhumi Dwarka district. Complete zero-scratch guarantee with 7-layer saline-salt spray, marine humidity, and refinery-soot proof protective wrapping for safe nationwide transit.
          </p>

          <div style="display: flex; gap: 15px; flex-wrap: wrap; margin-bottom: 30px;">
            <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Now" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
              <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call Now: <?php echo SITE_PHONE; ?>
            </a>
            <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20a%20bike%20shifting%20quote%20from%20Salaya." title="Chat on WhatsApp" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
              <i class="fab fa-whatsapp" style="margin-right: 8px;"></i> Chat on WhatsApp
            </a>
          </div>

          <div style="display: flex; gap: 20px; font-size: 0.9rem; color: #94a3b8;">
            <span><strong style="color: #f59e0b;">100% Transit Insured</strong> Shifting</span>
            <span><strong style="color: #f59e0b;">7-Layer</strong> Anti-Salt Wrap</span>
            <span><strong style="color: #f59e0b;">Door-to-Door</strong> Delivery</span>
          </div>
        </div>

        <!-- Hero Lead Form Column -->
        <div class="hero-form-card" style="background: rgba(255, 255, 255, 0.05); backdrop-filter: blur(10px); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 16px; padding: 30px; box-shadow: 0 15px 35px rgba(0,0,0,0.4);">
          <h2 style="font-size: 1.4rem; color: #ffffff; margin-bottom: 8px; font-weight: 700; text-align: center;">Get Salaya Bike Shifting Quote</h2>
          <p style="font-size: 0.85rem; color: #94a3b8; text-align: center; margin-bottom: 20px;">Transparent pricing delivered to your WhatsApp in 2 minutes</p>

          <form action="#" method="POST" onsubmit="sendHeroWhatsAppLead(event, this);">
            <div style="margin-bottom: 14px;">
              <input type="text" name="name" class="form-control" placeholder="Your Full Name" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="margin-bottom: 14px;">
              <input type="tel" name="phone" class="form-control" placeholder="10-Digit Phone Number" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 10px; margin-bottom: 14px;">
              <input type="text" name="move_from" class="form-control" value="Salaya" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
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
          <span style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; display: block;">1,850+</span>
          <span style="font-size: 0.88rem; color: #94a3b8; text-transform: uppercase; letter-spacing: 0.5px;">Bikes Transported in Salaya</span>
        </div>
        <div class="stat-card" style="padding: 15px; background: rgba(255,255,255,0.02); border-radius: 12px; border: 1px solid rgba(255,255,255,0.05);">
          <span style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; display: block;">99.8%</span>
          <span style="font-size: 0.88rem; color: #94a3b8; text-transform: uppercase; letter-spacing: 0.5px;">Zero-Scratch Record</span>
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
          Why Choose Our <span style="color: #f59e0b;">Salaya Bike Shifting Services?</span>
        </h2>
        <p style="font-size: 1rem; color: #94a3b8; max-width: 650px; margin: 0 auto;">
          Engineered for coastal maritime environments and industrial transport requirements across Devbhumi Dwarka district.
        </p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 25px;">
        <div class="feature-card" style="background: #1c2541; padding: 30px; border-radius: 14px; border: 1px solid rgba(255,255,255,0.08); transition: transform 0.3s ease;">
          <div style="font-size: 2rem; color: #f59e0b; margin-bottom: 15px;"><i class="fas fa-shield-virus"></i></div>
          <h3 style="font-size: 1.25rem; font-weight: 700; color: #ffffff; margin-bottom: 10px;">Saline Corrosion & Salt Spray Guard</h3>
          <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.6;">
            Salaya's coastal port environment exposes vehicles to heavy marine salt air. Our specialized stretch films seal chromes and electricals against oxidation during transit.
          </p>
        </div>

        <div class="feature-card" style="background: #1c2541; padding: 30px; border-radius: 14px; border: 1px solid rgba(255,255,255,0.08); transition: transform 0.3s ease;">
          <div style="font-size: 2rem; color: #f59e0b; margin-bottom: 15px;"><i class="fas fa-truck-loading"></i></div>
          <h3 style="font-size: 1.25rem; font-weight: 700; color: #ffffff; margin-bottom: 10px;">Enclosed Hydraulic Vehicle Carriers</h3>
          <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.6;">
            We transport two-wheelers in fully enclosed, weather-proof covered car/bike trailers fitted with pneumatic tie-down belts and custom wheel locks.
          </p>
        </div>

        <div class="feature-card" style="background: #1c2541; padding: 30px; border-radius: 14px; border: 1px solid rgba(255,255,255,0.08); transition: transform 0.3s ease;">
          <div style="font-size: 2rem; color: #f59e0b; margin-bottom: 15px;"><i class="fas fa-satellite"></i></div>
          <h3 style="font-size: 1.25rem; font-weight: 700; color: #ffffff; margin-bottom: 10px;">GPS Real-Time Tracking Updates</h3>
          <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.6;">
            Stay completely updated throughout the journey. Receive direct WhatsApp tracking links and milestone updates as your vehicle travels across state borders.
          </p>
        </div>

        <div class="feature-card" style="background: #1c2541; padding: 30px; border-radius: 14px; border: 1px solid rgba(255,255,255,0.08); transition: transform 0.3s ease;">
          <div style="font-size: 2rem; color: #f59e0b; margin-bottom: 15px;"><i class="fas fa-file-contract"></i></div>
          <h3 style="font-size: 1.25rem; font-weight: 700; color: #ffffff; margin-bottom: 10px;">Zero-Deductible All-Risk Insurance</h3>
          <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.6;">
            Comprehensive insurance backed by leading national underwriters covering transit risks, accidental damage, and theft with instant digital policy generation.
          </p>
        </div>

        <div class="feature-card" style="background: #1c2541; padding: 30px; border-radius: 14px; border: 1px solid rgba(255,255,255,0.08); transition: transform 0.3s ease;">
          <div style="font-size: 2rem; color: #f59e0b; margin-bottom: 15px;"><i class="fas fa-motorcycle"></i></div>
          <h3 style="font-size: 1.25rem; font-weight: 700; color: #ffffff; margin-bottom: 10px;">Superbike & Premium Bike Expertise</h3>
          <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.6;">
            Customized cradles and padded harnesses tailored for heavy cruisers, sports bikes, and luxury two-wheelers requiring specialized handling.
          </p>
        </div>

        <div class="feature-card" style="background: #1c2541; padding: 30px; border-radius: 14px; border: 1px solid rgba(255,255,255,0.08); transition: transform 0.3s ease;">
          <div style="font-size: 2rem; color: #f59e0b; margin-bottom: 15px;"><i class="fas fa-building"></i></div>
          <h3 style="font-size: 1.25rem; font-weight: 700; color: #ffffff; margin-bottom: 10px;">GST Invoice & Corporate Billing</h3>
          <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.6;">
            Full corporate relocation support with GST-compliant billing, IBA-approved documentation, and official consignment notes for easy employer claim reimbursement.
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
          Tailored Two-Wheeler Shifting Options in <span style="color: #f59e0b;">Salaya</span>
        </h2>
        <p style="font-size: 1rem; color: #94a3b8; text-align: center; margin-bottom: 45px;">
          Whether moving locally across Devbhumi Dwarka district or inter-state to major Indian metros, we offer specialized logistics tailored to your exact budget and timeframe.
        </p>

        <div style="display: grid; gap: 25px;">
          <div style="background: #1e293b; padding: 25px; border-radius: 12px; border-left: 4px solid #f59e0b;">
            <h3 style="font-size: 1.3rem; font-weight: 700; color: #ffffff; margin-bottom: 8px;">Door-to-Door Pickup & Delivery across Salaya</h3>
            <p style="font-size: 0.95rem; color: #cbd5e1; line-height: 1.7;">
              Our trained loading crew visits your home, office, or port office location in Salaya with custom packing materials. After complete pre-transport inspection and documentation, your bike is loaded directly into our dedicated vehicle carrier and delivered right to your destination doorstep in any city.
            </p>
          </div>

          <div style="background: #1e293b; padding: 25px; border-radius: 12px; border-left: 4px solid #10b981;">
            <h3 style="font-size: 1.3rem; font-weight: 700; color: #ffffff; margin-bottom: 8px;">Intercity & Interstate Express Transport</h3>
            <p style="font-size: 0.95rem; color: #cbd5e1; line-height: 1.7;">
              Connecting Salaya & Khambhalia to major industrial and corporate hubs like Ahmedabad, Rajkot, Surat, Vadodara, Mumbai, Pune, Delhi, Bengaluru, and Hyderabad. Daily scheduled dispatch ensures fast transit timelines with minimal waiting period.
            </p>
          </div>

          <div style="background: #1e293b; padding: 25px; border-radius: 12px; border-left: 4px solid #e11d48;">
            <h3 style="font-size: 1.3rem; font-weight: 700; color: #ffffff; margin-bottom: 8px;">Port & Refinery Employee Relocation Packages</h3>
            <p style="font-size: 0.95rem; color: #cbd5e1; line-height: 1.7;">
              Specialized services for engineers, maritime personnel, and refinery staff transferred between Salaya, Jamnagar, Sikka, and other industrial clusters across Gujarat and India. We provide formal GST bills and IBA-format documentation for quick claim processing.
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
          Designed specifically to combat coastal salt exposure, sand abrasion, and long-distance highway vibrations.
        </p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 20px;">
        <div style="background: #1c2541; padding: 20px; border-radius: 12px; text-align: center; border: 1px solid rgba(255,255,255,0.05);">
          <span style="display: inline-block; width: 40px; height: 40px; line-height: 40px; background: #f59e0b; color: #000; font-weight: 800; border-radius: 50%; margin-bottom: 12px;">L1</span>
          <h4 style="color: #fff; font-weight: 700; margin-bottom: 6px;">Stretch Film Wrap</h4>
          <p style="color: #94a3b8; font-size: 0.85rem;">Seals bodywork against marine salt vapor & humidity.</p>
        </div>
        <div style="background: #1c2541; padding: 20px; border-radius: 12px; text-align: center; border: 1px solid rgba(255,255,255,0.05);">
          <span style="display: inline-block; width: 40px; height: 40px; line-height: 40px; background: #f59e0b; color: #000; font-weight: 800; border-radius: 50%; margin-bottom: 12px;">L2</span>
          <h4 style="color: #fff; font-weight: 700; margin-bottom: 6px;">High-Density Foam</h4>
          <p style="color: #94a3b8; font-size: 0.85rem;">Protects delicate fairings, headlights & digital displays.</p>
        </div>
        <div style="background: #1c2541; padding: 20px; border-radius: 12px; text-align: center; border: 1px solid rgba(255,255,255,0.05);">
          <span style="display: inline-block; width: 40px; height: 40px; line-height: 40px; background: #f59e0b; color: #000; font-weight: 800; border-radius: 50%; margin-bottom: 12px;">L3</span>
          <h4 style="color: #fff; font-weight: 700; margin-bottom: 6px;">Bubble Wrap Layer</h4>
          <p style="color: #94a3b8; font-size: 0.85rem;">Shock-absorbing air cushion for fuel tanks and chrome parts.</p>
        </div>
        <div style="background: #1c2541; padding: 20px; border-radius: 12px; text-align: center; border: 1px solid rgba(255,255,255,0.05);">
          <span style="display: inline-block; width: 40px; height: 40px; line-height: 40px; background: #f59e0b; color: #000; font-weight: 800; border-radius: 50%; margin-bottom: 12px;">L4</span>
          <h4 style="color: #fff; font-weight: 700; margin-bottom: 6px;">Heavy Corrugated Sheets</h4>
          <p style="color: #94a3b8; font-size: 0.85rem;">Impact-resistant outer armor shielding against external bumps.</p>
        </div>
        <div style="background: #1c2541; padding: 20px; border-radius: 12px; text-align: center; border: 1px solid rgba(255,255,255,0.05);">
          <span style="display: inline-block; width: 40px; height: 40px; line-height: 40px; background: #f59e0b; color: #000; font-weight: 800; border-radius: 50%; margin-bottom: 12px;">L5</span>
          <h4 style="color: #fff; font-weight: 700; margin-bottom: 6px;">Corner Guard Pads</h4>
          <p style="color: #94a3b8; font-size: 0.85rem;">Reinforced padding for silencers, mirrors, & brake levers.</p>
        </div>
        <div style="background: #1c2541; padding: 20px; border-radius: 12px; text-align: center; border: 1px solid rgba(255,255,255,0.05);">
          <span style="display: inline-block; width: 40px; height: 40px; line-height: 40px; background: #f59e0b; color: #000; font-weight: 800; border-radius: 50%; margin-bottom: 12px;">L6</span>
          <h4 style="color: #fff; font-weight: 700; margin-bottom: 6px;">Waterproof Tarpaulin</h4>
          <p style="color: #94a3b8; font-size: 0.85rem;">100% moisture-proof outer cover against heavy coastal rain.</p>
        </div>
        <div style="background: #1c2541; padding: 20px; border-radius: 12px; text-align: center; border: 1px solid rgba(255,255,255,0.05); grid-column: span 2;">
          <span style="display: inline-block; width: 40px; height: 40px; line-height: 40px; background: #f59e0b; color: #000; font-weight: 800; border-radius: 50%; margin-bottom: 12px;">L7</span>
          <h4 style="color: #fff; font-weight: 700; margin-bottom: 6px;">Pneumatic Strap Anchoring</h4>
          <p style="color: #94a3b8; font-size: 0.85rem;">Heavy-duty ratchet belt locking to prevent any movement inside enclosed truck.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 7: Localities Covered Grid -->
  <section class="localities-grid-section" style="background: #0f172a; padding: 60px 0;">
    <div class="container">
      <div style="text-align: center; margin-bottom: 40px;">
        <h2 style="font-size: 2.1rem; font-weight: 800; color: #ffffff; margin-bottom: 10px;">
          Salaya & Devbhumi Dwarka <span style="color: #f59e0b;">Doorstep Pickup Locations</span>
        </h2>
        <p style="font-size: 0.95rem; color: #94a3b8;">
          Prompt pickup services across all prominent sectors, residential hubs, and port facilities in Salaya.
        </p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 15px;">
        <div style="background: rgba(255,255,255,0.03); padding: 14px 18px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.06); color: #cbd5e1; font-size: 0.9rem;">
          <i class="fas fa-map-marker-alt" style="color: #f59e0b; margin-right: 8px;"></i> Salaya Port Area
        </div>
        <div style="background: rgba(255,255,255,0.03); padding: 14px 18px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.06); color: #cbd5e1; font-size: 0.9rem;">
          <i class="fas fa-map-marker-alt" style="color: #f59e0b; margin-right: 8px;"></i> Main Bazaar Salaya
        </div>
        <div style="background: rgba(255,255,255,0.03); padding: 14px 18px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.06); color: #cbd5e1; font-size: 0.9rem;">
          <i class="fas fa-map-marker-alt" style="color: #f59e0b; margin-right: 8px;"></i> Jamnagar-Salaya Highway
        </div>
        <div style="background: rgba(255,255,255,0.03); padding: 14px 18px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.06); color: #cbd5e1; font-size: 0.9rem;">
          <i class="fas fa-map-marker-alt" style="color: #f59e0b; margin-right: 8px;"></i> Khambhalia Road Corridor
        </div>
        <div style="background: rgba(255,255,255,0.03); padding: 14px 18px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.06); color: #cbd5e1; font-size: 0.9rem;">
          <i class="fas fa-map-marker-alt" style="color: #f59e0b; margin-right: 8px;"></i> Custom House Circle
        </div>
        <div style="background: rgba(255,255,255,0.03); padding: 14px 18px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.06); color: #cbd5e1; font-size: 0.9rem;">
          <i class="fas fa-map-marker-alt" style="color: #f59e0b; margin-right: 8px;"></i> Jetty & Docks Area
        </div>
        <div style="background: rgba(255,255,255,0.03); padding: 14px 18px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.06); color: #cbd5e1; font-size: 0.9rem;">
          <i class="fas fa-map-marker-alt" style="color: #f59e0b; margin-right: 8px;"></i> Marine Drive Salaya
        </div>
        <div style="background: rgba(255,255,255,0.03); padding: 14px 18px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.06); color: #cbd5e1; font-size: 0.9rem;">
          <i class="fas fa-map-marker-alt" style="color: #f59e0b; margin-right: 8px;"></i> Refinery Township Access
        </div>
      </div>
    </div>
  </section>

  <!-- Section 8: Intercity Route Network -->
  <section class="routes-network-section" style="background: #0b132b; padding: 60px 0;">
    <div class="container">
      <div style="text-align: center; margin-bottom: 40px;">
        <h2 style="font-size: 2.1rem; font-weight: 800; color: #ffffff; margin-bottom: 10px;">
          Popular <span style="color: #f59e0b;">Bike Transport Routes from Salaya</span>
        </h2>
        <p style="font-size: 0.95rem; color: #94a3b8;">
          Daily scheduled express car & bike carrier departures connecting Salaya to key hubs.
        </p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px;">
        <div style="background: #1c2541; padding: 20px; border-radius: 10px; border: 1px solid rgba(255,255,255,0.05); display: flex; justify-content: space-between; align-items: center;">
          <span style="color: #fff; font-weight: 600;">Salaya to Ahmedabad</span>
          <span style="color: #10b981; font-weight: 700; font-size: 0.88rem;">24-36 Hours</span>
        </div>
        <div style="background: #1c2541; padding: 20px; border-radius: 10px; border: 1px solid rgba(255,255,255,0.05); display: flex; justify-content: space-between; align-items: center;">
          <span style="color: #fff; font-weight: 600;">Salaya to Rajkot</span>
          <span style="color: #10b981; font-weight: 700; font-size: 0.88rem;">Same Day / 24 hrs</span>
        </div>
        <div style="background: #1c2541; padding: 20px; border-radius: 10px; border: 1px solid rgba(255,255,255,0.05); display: flex; justify-content: space-between; align-items: center;">
          <span style="color: #fff; font-weight: 600;">Salaya to Jamnagar</span>
          <span style="color: #10b981; font-weight: 700; font-size: 0.88rem;">Same Day Delivery</span>
        </div>
        <div style="background: #1c2541; padding: 20px; border-radius: 10px; border: 1px solid rgba(255,255,255,0.05); display: flex; justify-content: space-between; align-items: center;">
          <span style="color: #fff; font-weight: 600;">Salaya to Surat</span>
          <span style="color: #10b981; font-weight: 700; font-size: 0.88rem;">2-3 Days</span>
        </div>
        <div style="background: #1c2541; padding: 20px; border-radius: 10px; border: 1px solid rgba(255,255,255,0.05); display: flex; justify-content: space-between; align-items: center;">
          <span style="color: #fff; font-weight: 600;">Salaya to Vadodara</span>
          <span style="color: #10b981; font-weight: 700; font-size: 0.88rem;">2 Days</span>
        </div>
        <div style="background: #1c2541; padding: 20px; border-radius: 10px; border: 1px solid rgba(255,255,255,0.05); display: flex; justify-content: space-between; align-items: center;">
          <span style="color: #fff; font-weight: 600;">Salaya to Mumbai</span>
          <span style="color: #10b981; font-weight: 700; font-size: 0.88rem;">3-4 Days</span>
        </div>
        <div style="background: #1c2541; padding: 20px; border-radius: 10px; border: 1px solid rgba(255,255,255,0.05); display: flex; justify-content: space-between; align-items: center;">
          <span style="color: #fff; font-weight: 600;">Salaya to Pune</span>
          <span style="color: #10b981; font-weight: 700; font-size: 0.88rem;">3-4 Days</span>
        </div>
        <div style="background: #1c2541; padding: 20px; border-radius: 10px; border: 1px solid rgba(255,255,255,0.05); display: flex; justify-content: space-between; align-items: center;">
          <span style="color: #fff; font-weight: 600;">Salaya to Delhi / NCR</span>
          <span style="color: #10b981; font-weight: 700; font-size: 0.88rem;">4-5 Days</span>
        </div>
        <div style="background: #1c2541; padding: 20px; border-radius: 10px; border: 1px solid rgba(255,255,255,0.05); display: flex; justify-content: space-between; align-items: center;">
          <span style="color: #fff; font-weight: 600;">Salaya to Bengaluru</span>
          <span style="color: #10b981; font-weight: 700; font-size: 0.88rem;">5-6 Days</span>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 9: Documentation & Compliance Framework -->
  <section class="documentation-section" style="background: #0f172a; padding: 60px 0;">
    <div class="container">
      <div style="max-width: 850px; margin: 0 auto; background: #1e293b; padding: 35px; border-radius: 14px; border: 1px solid rgba(255,255,255,0.08);">
        <h2 style="font-size: 1.8rem; font-weight: 800; color: #ffffff; margin-bottom: 20px; text-align: center;">
          Required Documents for <span style="color: #f59e0b;">Bike Transportation in Salaya</span>
        </h2>
        <p style="font-size: 0.95rem; color: #cbd5e1; line-height: 1.7; margin-bottom: 25px; text-align: center;">
          To ensure seamless checkpoint clearance across state borders and complete insurance coverage, we collect clear photocopies of:
        </p>

        <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 20px;">
          <div style="display: flex; align-items: flex-start; gap: 12px;">
            <i class="fas fa-check-circle" style="color: #10b981; font-size: 1.2rem; margin-top: 3px;"></i>
            <div>
              <h4 style="color: #fff; font-weight: 700; font-size: 1rem; margin-bottom: 4px;">Vehicle Registration Certificate (RC)</h4>
              <p style="color: #94a3b8; font-size: 0.88rem;">Clear copy of original RC smartcard or digital MParivahan RC.</p>
            </div>
          </div>
          <div style="display: flex; align-items: flex-start; gap: 12px;">
            <i class="fas fa-check-circle" style="color: #10b981; font-size: 1.2rem; margin-top: 3px;"></i>
            <div>
              <h4 style="color: #fff; font-weight: 700; font-size: 1rem; margin-bottom: 4px;">Valid Vehicle Insurance Policy</h4>
              <p style="color: #94a3b8; font-size: 0.88rem;">Active third-party or comprehensive insurance document.</p>
            </div>
          </div>
          <div style="display: flex; align-items: flex-start; gap: 12px;">
            <i class="fas fa-check-circle" style="color: #10b981; font-size: 1.2rem; margin-top: 3px;"></i>
            <div>
              <h4 style="color: #fff; font-weight: 700; font-size: 1rem; margin-bottom: 4px;">Owner Govt ID Proof</h4>
              <p style="color: #94a3b8; font-size: 0.88rem;">Aadhaar Card, Driving License, or Passport photocopy.</p>
            </div>
          </div>
          <div style="display: flex; align-items: flex-start; gap: 12px;">
            <i class="fas fa-check-circle" style="color: #10b981; font-size: 1.2rem; margin-top: 3px;"></i>
            <div>
              <h4 style="color: #fff; font-weight: 700; font-size: 1rem; margin-bottom: 4px;">Official Consignment Note & Invoice</h4>
              <p style="color: #94a3b8; font-size: 0.88rem;">Generated by Shree Ashirwad Packers for transit & GST claim verification.</p>
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
          Frequently Asked Questions (<span style="color: #f59e0b;">Bike Transport Salaya</span>)
        </h2>
        <p style="font-size: 1rem; color: #94a3b8;">Everything you need to know about booking two-wheeler transport in Salaya & Devbhumi Dwarka.</p>
      </div>

      <div style="max-width: 850px; margin: 0 auto; display: grid; gap: 15px;">
        
        <div style="background: #1c2541; padding: 22px; border-radius: 10px; border: 1px solid rgba(255,255,255,0.06);">
          <h3 style="font-size: 1.1rem; font-weight: 700; color: #ffffff; margin-bottom: 8px;">Q1: How much does bike transportation from Salaya cost?</h3>
          <p style="font-size: 0.93rem; color: #cbd5e1; line-height: 1.6;">
            Intercity bike transportation rates from Salaya start around ₹2,200 to ₹3,500 for nearby Gujarat cities like Rajkot or Ahmedabad, and between ₹4,500 to ₹8,500 for longer routes such as Salaya to Delhi, Mumbai, or Bengaluru, depending on bike engine CC and distance.
          </p>
        </div>

        <div style="background: #1c2541; padding: 22px; border-radius: 10px; border: 1px solid rgba(255,255,255,0.06);">
          <h3 style="font-size: 1.1rem; font-weight: 700; color: #ffffff; margin-bottom: 8px;">Q2: How do you protect bikes against salt air and rust in Salaya?</h3>
          <p style="font-size: 0.93rem; color: #cbd5e1; line-height: 1.6;">
            We apply an initial layer of anti-corrosion stretch wrap that completely seals chromium components, exposed electrical wiring, and metal surfaces from moist marine salt spray before applying foam, bubble wrap, and corrugated outer protection.
          </p>
        </div>

        <div style="background: #1c2541; padding: 22px; border-radius: 10px; border: 1px solid rgba(255,255,255,0.06);">
          <h3 style="font-size: 1.1rem; font-weight: 700; color: #ffffff; margin-bottom: 8px;">Q3: How many days will it take to transport my bike from Salaya to Ahmedabad or Mumbai?</h3>
          <p style="font-size: 0.93rem; color: #cbd5e1; line-height: 1.6;">
            Transit to Ahmedabad or Rajkot takes approximately 24 to 36 hours. Delivery to Mumbai or Pune usually takes 3 to 4 days via our daily scheduled enclosed vehicle carriers.
          </p>
        </div>

        <div style="background: #1c2541; padding: 22px; border-radius: 10px; border: 1px solid rgba(255,255,255,0.06);">
          <h3 style="font-size: 1.1rem; font-weight: 700; color: #ffffff; margin-bottom: 8px;">Q4: Is door pickup available in all areas of Salaya and Khambhalia?</h3>
          <p style="font-size: 0.93rem; color: #cbd5e1; line-height: 1.6;">
            Yes! We provide complete door pickup across Salaya Port Area, Custom House Road, Main Bazaar, Jetty Area, and neighboring Khambhalia and Jamnagar areas.
          </p>
        </div>

        <div style="background: #1c2541; padding: 22px; border-radius: 10px; border: 1px solid rgba(255,255,255,0.06);">
          <h3 style="font-size: 1.1rem; font-weight: 700; color: #ffffff; margin-bottom: 8px;">Q5: Is transit insurance mandatory for bike shifting?</h3>
          <p style="font-size: 0.93rem; color: #cbd5e1; line-height: 1.6;">
            We strongly recommend full-risk transit insurance. We issue instantaneous digital insurance policies covering all transit damages, theft, or unforeseen road accidents.
          </p>
        </div>

        <div style="background: #1c2541; padding: 22px; border-radius: 10px; border: 1px solid rgba(255,255,255,0.06);">
          <h3 style="font-size: 1.1rem; font-weight: 700; color: #ffffff; margin-bottom: 8px;">Q6: How much petrol should be left in the fuel tank before packing?</h3>
          <p style="font-size: 0.93rem; color: #cbd5e1; line-height: 1.6;">
            For safety compliance in enclosed vehicle containers, fuel tanks must be drained down to 1-2 liters maximum to prevent fire hazards during long-distance highway travel.
          </p>
        </div>

        <div style="background: #1c2541; padding: 22px; border-radius: 10px; border: 1px solid rgba(255,255,255,0.06);">
          <h3 style="font-size: 1.1rem; font-weight: 700; color: #ffffff; margin-bottom: 8px;">Q7: Can I transport my superbike or Royal Enfield Bullet from Salaya safely?</h3>
          <p style="font-size: 0.93rem; color: #cbd5e1; line-height: 1.6;">
            Yes, we feature specialized hydraulic lifting equipment and heavy-duty wheel chocks specifically designed for heavy cruisers, Royal Enfields, and luxury sports bikes.
          </p>
        </div>

        <div style="background: #1c2541; padding: 22px; border-radius: 10px; border: 1px solid rgba(255,255,255,0.06);">
          <h3 style="font-size: 1.1rem; font-weight: 700; color: #ffffff; margin-bottom: 8px;">Q8: Do you provide GST bills for company relocation reimbursement?</h3>
          <p style="font-size: 0.93rem; color: #cbd5e1; line-height: 1.6;">
            Yes, we provide 100% legal GST invoices, consignment notes (Bilty), and IBA-compliant paperwork accepted by all corporate offices and government departments.
          </p>
        </div>

        <div style="background: #1c2541; padding: 22px; border-radius: 10px; border: 1px solid rgba(255,255,255,0.06);">
          <h3 style="font-size: 1.1rem; font-weight: 700; color: #ffffff; margin-bottom: 8px;">Q9: Can I track my bike position during transit?</h3>
          <p style="font-size: 0.93rem; color: #cbd5e1; line-height: 1.6;">
            Yes, all our primary transport carriers are equipped with real-time GPS tracking devices, and updates are shared directly to your mobile phone via WhatsApp.
          </p>
        </div>

        <div style="background: #1c2541; padding: 22px; border-radius: 10px; border: 1px solid rgba(255,255,255,0.06);">
          <h3 style="font-size: 1.1rem; font-weight: 700; color: #ffffff; margin-bottom: 8px;">Q10: How do I book a bike transport service in Salaya?</h3>
          <p style="font-size: 0.93rem; color: #cbd5e1; line-height: 1.6;">
            Simply submit your name and phone number on our instant lead form above or call/WhatsApp us directly at <?php echo SITE_PHONE; ?>. Our Salaya team will schedule door pickup at your convenient time.
          </p>
        </div>

      </div>
    </div>
  </section>

  <!-- Section 11: Call to Action Footer CTA -->
  <section class="cta-footer-section" style="background: linear-gradient(135deg, #d32f2f 0%, #0b132b 100%); padding: 60px 0; text-align: center; color: #ffffff;">
    <div class="container">
      <h2 style="font-size: 2.3rem; font-weight: 800; margin-bottom: 15px;">
        Book Safe & Insured Bike Transport in Salaya Today!
      </h2>
      <p style="font-size: 1.1rem; color: #e2e8f0; max-width: 650px; margin: 0 auto 30px;">
        Experience seamless door-to-door vehicle shifting backed by 7-layer protective packaging and real-time tracking.
      </p>
      <div style="display: flex; justify-content: center; gap: 20px; flex-wrap: wrap;">
        <a href="tel:<?php echo SITE_PHONE_RAW; ?>" style="padding: 15px 35px; background: #f59e0b; color: #000000; font-weight: 800; border-radius: 50px; text-decoration: none; font-size: 1.05rem; box-shadow: 0 4px 15px rgba(245, 158, 11, 0.4);">
          <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call <?php echo SITE_PHONE; ?>
        </a>
        <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20to%20book%20bike%20transportation%20in%20Salaya." target="_blank" style="padding: 15px 35px; background: #10b981; color: #ffffff; font-weight: 800; border-radius: 50px; text-decoration: none; font-size: 1.05rem; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
          <i class="fab fa-whatsapp" style="margin-right: 8px;"></i> WhatsApp Quick Booking
        </a>
      </div>
    </div>
  </section>

</main>

<!-- Structured Data: FAQPage & MovingCompany JSON-LD -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "MovingCompany",
      "@id": "https://shreeashirwadpackersandmovers.com/#organization",
      "name": "Shree Ashirwad Packers and Movers Salaya",
      "url": "https://shreeashirwadpackersandmovers.com/",
      "logo": "https://shreeashirwadpackersandmovers.com/assets/images/logo.png",
      "telephone": "<?php echo SITE_PHONE_RAW; ?>",
      "priceRange": "₹₹",
      "address": {
        "@type": "PostalAddress",
        "addressLocality": "Salaya",
        "addressRegion": "Gujarat",
        "addressCountry": "IN"
      },
      "areaServed": [
        {
          "@type": "AdministrativeArea",
          "name": "Salaya"
        },
        {
          "@type": "AdministrativeArea",
          "name": "Devbhumi Dwarka"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "How much does bike transportation from Salaya cost?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Intercity bike transportation rates from Salaya start around ₹2,200 to ₹3,500 for nearby Gujarat cities like Rajkot or Ahmedabad, and between ₹4,500 to ₹8,500 for longer routes such as Salaya to Delhi, Mumbai, or Bengaluru."
          }
        },
        {
          "@type": "Question",
          "name": "How do you protect bikes against salt air and rust in Salaya?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "We apply an initial layer of anti-corrosion stretch wrap that completely seals chromium components, exposed electrical wiring, and metal surfaces from moist marine salt spray before applying foam, bubble wrap, and corrugated outer protection."
          }
        },
        {
          "@type": "Question",
          "name": "How many days will it take to transport my bike from Salaya to Ahmedabad or Mumbai?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Transit to Ahmedabad or Rajkot takes approximately 24 to 36 hours. Delivery to Mumbai or Pune usually takes 3 to 4 days via our daily scheduled enclosed vehicle carriers."
          }
        },
        {
          "@type": "Question",
          "name": "Is door pickup available in all areas of Salaya and Khambhalia?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes! We provide complete door pickup across Salaya Port Area, Custom House Road, Main Bazaar, Jetty Area, and neighboring Khambhalia and Jamnagar areas."
          }
        },
        {
          "@type": "Question",
          "name": "Is transit insurance mandatory for bike shifting?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "We strongly recommend full-risk transit insurance. We issue instantaneous digital insurance policies covering all transit damages, theft, or unforeseen road accidents."
          }
        },
        {
          "@type": "Question",
          "name": "How much petrol should be left in the fuel tank before packing?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "For safety compliance in enclosed vehicle containers, fuel tanks must be drained down to 1-2 liters maximum to prevent fire hazards during long-distance highway travel."
          }
        },
        {
          "@type": "Question",
          "name": "Can I transport my superbike or Royal Enfield Bullet from Salaya safely?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, we feature specialized hydraulic lifting equipment and heavy-duty wheel chocks specifically designed for heavy cruisers, Royal Enfields, and luxury sports bikes."
          }
        },
        {
          "@type": "Question",
          "name": "Do you provide GST bills for company relocation reimbursement?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, we provide 100% legal GST invoices, consignment notes (Bilty), and IBA-compliant paperwork accepted by all corporate offices and government departments."
          }
        },
        {
          "@type": "Question",
          "name": "Can I track my bike position during transit?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, all our primary transport carriers are equipped with real-time GPS tracking devices, and updates are shared directly to your mobile phone via WhatsApp."
          }
        },
        {
          "@type": "Question",
          "name": "How do I book a bike transport service in Salaya?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Simply submit your name and phone number on our instant lead form above or call/WhatsApp us directly at <?php echo SITE_PHONE; ?>. Our Salaya team will schedule door pickup at your convenient time."
          }
        }
      ]
    }
  ]
}
</script>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
