<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "Packers and Movers in Jamshedpur | 8409531615";
$page_desc = "Packers and Movers in Jamshedpur offering safe, reliable, and affordable packing, moving, home relocation, and vehicle transportation services. Call (+91) 8409531615.";
$page_keywords = "packers and movers in jamshedpur, packers and movers jamshedpur, best packers and movers in jamshedpur, top packers and movers in jamshedpur, household shifting in jamshedpur, home relocation services jamshedpur, office shifting services jamshedpur, car transport in jamshedpur, bike transport jamshedpur, local packers and movers jamshedpur, intercity movers in jamshedpur, movers and packers jamshedpur contact number, packers and movers jamshedpur charges, house relocation in jamshedpur, luggage transport service jamshedpur, relocation services jamshedpur, warehouse and storage in jamshedpur, safe packing and moving jamshedpur, packers and movers in jharkhand";

require_once __DIR__ . '/../includes/header.php';
?>

<main class="site-main">

  <!-- Hero Section with Lead Form -->
  <section class="hero-section" style="background: linear-gradient(135deg, #0b132b 0%, #1c2541 100%); padding: 60px 0; color: #ffffff;">
    <div class="container">
      <div class="hero-grid" style="display: grid; grid-template-columns: 1.2fr 0.8fr; gap: 40px; align-items: center;">
        
        <!-- Hero Text Column -->
        <div class="hero-text">
          <span class="section-tag" style="background: rgba(245, 158, 11, 0.15); color: #f59e0b; border: 1px solid rgba(245, 158, 11, 0.4); padding: 6px 16px; border-radius: 20px; font-size: 0.85rem; font-weight: 700; text-transform: uppercase; display: inline-block; margin-bottom: 15px;">
            IBA Approved &amp; ISO Certified Relocation Experts
          </span>
          <h1 style="font-size: 2.8rem; font-weight: 800; line-height: 1.2; margin-bottom: 20px; color: #ffffff;">
            Professional <span style="color: #f59e0b;">Packers and Movers in Jamshedpur</span>
          </h1>
          <p style="font-size: 1.1rem; color: #cbd5e1; line-height: 1.7; margin-bottom: 25px;">
            Are you searching for trusted, reliable, and verified <a href="<?php echo SITE_URL; ?>packers-and-movers-in-jamshedpur" style="color: #f59e0b; text-decoration: underline;"><strong>packers and movers in jamshedpur</strong></a>? Shree Ashirwad Packers and Movers is Steel City Jamshedpur's premier shifting company providing zero-damage household relocation, corporate office shifting, car carrier transport, bike logistics, and secure warehouse storage across Jamshedpur and pan-India routes.
          </p>

          <div style="display: flex; gap: 15px; flex-wrap: wrap; margin-bottom: 30px;">
            <a href="tel:<?php echo SITE_PHONE_RAW; ?>" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #d32f2f 0%, #f59e0b 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(211, 47, 47, 0.4);">
              📞 Call Now: <?php echo SITE_PHONE; ?>
            </a>
            <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers%20and%20Movers,%20I%20want%20information%20about%20your%20shifting%20services%20in%20Jamshedpur." target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
              💬 Chat on WhatsApp
            </a>
          </div>

          <div style="display: flex; gap: 20px; font-size: 0.9rem; color: #94a3b8;">
            <span><strong style="color: #f59e0b;">12,500+</strong> Homes Shifted</span>
            <span><strong style="color: #f59e0b;">15+ Years</strong> Experience</span>
            <span><strong style="color: #f59e0b;">100%</strong> IBA GST Invoice</span>
          </div>
        </div>

        <!-- Hero Lead Form Column -->
        <div class="hero-form-card" style="background: rgba(255, 255, 255, 0.05); backdrop-filter: blur(10px); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 16px; padding: 30px; box-shadow: 0 15px 35px rgba(0,0,0,0.4);">
          <h2 style="font-size: 1.4rem; color: #ffffff; margin-bottom: 8px; font-weight: 700; text-align: center;">Get Instant Shifting Quote</h2>
          <p style="font-size: 0.85rem; color: #94a3b8; text-align: center; margin-bottom: 20px;">Receive transparent cost estimation on WhatsApp in 2 minutes</p>

          <form action="#" method="POST" onsubmit="sendHeroWhatsAppLead(event, this);">
            <div style="margin-bottom: 14px;">
              <input type="text" name="name" class="form-control" placeholder="Your Full Name" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="margin-bottom: 14px;">
              <input type="tel" name="phone" class="form-control" placeholder="10-Digit Phone / WhatsApp Number" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 10px; margin-bottom: 14px;">
              <input type="text" name="move_from" class="form-control" placeholder="Moving From (e.g. Bistupur)" value="Jamshedpur" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
              <input type="text" name="move_to" class="form-control" placeholder="Moving To (City)" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="margin-bottom: 18px;">
              <select name="service_type" class="form-control" style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.8); color: #fff;">
                <option value="Household Shifting">Household Shifting</option>
                <option value="Office Relocation">Office Relocation</option>
                <option value="Car Transportation">Car Transportation</option>
                <option value="Bike Transport">Bike Transport</option>
                <option value="Warehouse Storage">Warehouse Storage</option>
              </select>
            </div>
            <button type="submit" style="width: 100%; padding: 14px; background: linear-gradient(135deg, #d32f2f 0%, #f59e0b 100%); color: #ffffff; border: none; border-radius: 50px; font-weight: 700; font-size: 1rem; cursor: pointer; transition: all 0.3s ease;">
              Get Instant Estimate Now ➔
            </button>
          </form>
        </div>

      </div>
    </div>
  </section>

  <!-- Section 2: Trust Counter Stats -->
  <section style="padding: 40px 0; background: #070d19; border-bottom: 1px solid rgba(245, 158, 11, 0.2);">
    <div class="container">
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 20px; text-align: center;">
        <div style="padding: 20px; background: rgba(255, 255, 255, 0.03); border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.15);">
          <h3 style="font-size: 2.2rem; color: #f59e0b; font-weight: 800; margin-bottom: 5px;">15+</h3>
          <p style="color: #cbd5e1; font-size: 0.9rem;">Years of Shifting Excellence</p>
        </div>
        <div style="padding: 20px; background: rgba(255, 255, 255, 0.03); border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.15);">
          <h3 style="font-size: 2.2rem; color: #f59e0b; font-weight: 800; margin-bottom: 5px;">12,500+</h3>
          <p style="color: #cbd5e1; font-size: 0.9rem;">Satisfied Home Relocations</p>
        </div>
        <div style="padding: 20px; background: rgba(255, 255, 255, 0.03); border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.15);">
          <h3 style="font-size: 2.2rem; color: #f59e0b; font-weight: 800; margin-bottom: 5px;">50+</h3>
          <p style="color: #cbd5e1; font-size: 0.9rem;">GPS Container Trucks</p>
        </div>
        <div style="padding: 20px; background: rgba(255, 255, 255, 0.03); border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.15);">
          <h3 style="font-size: 2.2rem; color: #f59e0b; font-weight: 800; margin-bottom: 5px;">100%</h3>
          <p style="color: #cbd5e1; font-size: 0.9rem;">IBA Approved GST Bills</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 3: 6-Card 3x2 Grid Overview Layout -->
  <section style="padding: 60px 0; background: #f8fafc;">
    <div class="container">
      <div style="text-align: center; max-width: 800px; margin: 0 auto 45px auto;">
        <span style="color: #d32f2f; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; font-size: 0.85rem;">Why Choose Shree Ashirwad</span>
        <h2 style="font-size: 2.2rem; color: #0b132b; font-weight: 800; margin-top: 5px;">
          Premier Choice for <span style="color: #d32f2f;">Packers and Movers in Jamshedpur</span>
        </h2>
        <p style="color: #64748b; font-size: 1rem; margin-top: 10px;">
          Relocating homes or corporate offices in Steel City Jamshedpur requires specialized logistics, heavy-duty protective packaging, and local route expertise. Here is why thousands of families and industrial executives trust Shree Ashirwad Packers and Movers in Jamshedpur.
        </p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 25px;">
        
        <!-- Card 1 -->
        <div style="background: #ffffff; padding: 30px; border-radius: 12px; box-shadow: 0 5px 20px rgba(0,0,0,0.05); border-top: 4px solid #d32f2f;">
          <div style="width: 50px; height: 50px; background: rgba(211, 47, 47, 0.1); border-radius: 10px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px; color: #d32f2f;">
            <svg width="24" height="24" fill="currentColor" viewBox="0 0 24 24"><path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-5.45 9-12V5l-9-4zm-2 16l-4-4 1.41-1.41L10 14.17l6.59-6.59L18 9l-8 8z"/></svg>
          </div>
          <h3 style="font-size: 1.2rem; color: #0b132b; margin-bottom: 10px; font-weight: 700;">IBA Approved &amp; GST Compliant</h3>
          <p style="color: #64748b; font-size: 0.92rem; line-height: 1.6;">
            We issue 100% genuine IBA-approved GST bills and consignment notes for hassle-free corporate and defense employee reimbursement claims across Jamshedpur.
          </p>
        </div>

        <!-- Card 2 -->
        <div style="background: #ffffff; padding: 30px; border-radius: 12px; box-shadow: 0 5px 20px rgba(0,0,0,0.05); border-top: 4px solid #f59e0b;">
          <div style="width: 50px; height: 50px; background: rgba(245, 158, 11, 0.1); border-radius: 10px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px; color: #f59e0b;">
            <svg width="24" height="24" fill="currentColor" viewBox="0 0 24 24"><path d="M20 8h-3V4H3c-1.1 0-2 .9-2 2v11h2c0 1.66 1.34 3 3 3s3-1.34 3-3h6c0 1.66 1.34 3 3 3s3-1.34 3-3h2v-5l-3-4z"/></svg>
          </div>
          <h3 style="font-size: 1.2rem; color: #0b132b; margin-bottom: 10px; font-weight: 700;">7-Layer Multi-Level Packaging</h3>
          <p style="color: #64748b; font-size: 0.92rem; line-height: 1.6;">
            Every household item is wrapped with bubble film, corrugated sheets, stretch wraps, foam corners, and customized wooden crates for maximum transit safety.
          </p>
        </div>

        <!-- Card 3 -->
        <div style="background: #ffffff; padding: 30px; border-radius: 12px; box-shadow: 0 5px 20px rgba(0,0,0,0.05); border-top: 4px solid #d32f2f;">
          <div style="width: 50px; height: 50px; background: rgba(211, 47, 47, 0.1); border-radius: 10px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px; color: #d32f2f;">
            <svg width="24" height="24" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg>
          </div>
          <h3 style="font-size: 1.2rem; color: #0b132b; margin-bottom: 10px; font-weight: 700;">Complete Jamshedpur Coverage</h3>
          <p style="color: #64748b; font-size: 0.92rem; line-height: 1.6;">
            From Bistupur, Sakchi, and Mango to Adityapur, Kadma, Telco, Jugsalai, and Golmuri, our local crew handles relocations across all Jamshedpur sectors effortlessly.
          </p>
        </div>

        <!-- Card 4 -->
        <div style="background: #ffffff; padding: 30px; border-radius: 12px; box-shadow: 0 5px 20px rgba(0,0,0,0.05); border-top: 4px solid #f59e0b;">
          <div style="width: 50px; height: 50px; background: rgba(245, 158, 11, 0.1); border-radius: 10px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px; color: #f59e0b;">
            <svg width="24" height="24" fill="currentColor" viewBox="0 0 24 24"><path d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8zm.5-13H11v6l5.25 3.15.75-1.23-4.5-2.67z"/></svg>
          </div>
          <h3 style="font-size: 1.2rem; color: #0b132b; margin-bottom: 10px; font-weight: 700;">Live GPS Consignment Tracking</h3>
          <p style="color: #64748b; font-size: 0.92rem; line-height: 1.6;">
            Our company-owned container trucks are equipped with satellite GPS trackers so you can monitor your goods during local or intercity transit 24/7.
          </p>
        </div>

        <!-- Card 5 -->
        <div style="background: #ffffff; padding: 30px; border-radius: 12px; box-shadow: 0 5px 20px rgba(0,0,0,0.05); border-top: 4px solid #d32f2f;">
          <div style="width: 50px; height: 50px; background: rgba(211, 47, 47, 0.1); border-radius: 10px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px; color: #d32f2f;">
            <svg width="24" height="24" fill="currentColor" viewBox="0 0 24 24"><path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/></svg>
          </div>
          <h3 style="font-size: 1.2rem; color: #0b132b; margin-bottom: 10px; font-weight: 700;">Trained Background-Verified Crew</h3>
          <p style="color: #64748b; font-size: 0.92rem; line-height: 1.6;">
            Our permanent team of packers, loaders, and carpenters are background-verified professionals trained to handle delicate glassware, heavy sofas, and smart TVs safely.
          </p>
        </div>

        <!-- Card 6 -->
        <div style="background: #ffffff; padding: 30px; border-radius: 12px; box-shadow: 0 5px 20px rgba(0,0,0,0.05); border-top: 4px solid #f59e0b;">
          <div style="width: 50px; height: 50px; background: rgba(245, 158, 11, 0.1); border-radius: 10px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px; color: #f59e0b;">
            <svg width="24" height="24" fill="currentColor" viewBox="0 0 24 24"><path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-5 14H7v-2h7v2zm3-4H7v-2h10v2zm0-4H7V7h10v2z"/></svg>
          </div>
          <h3 style="font-size: 1.2rem; color: #0b132b; margin-bottom: 10px; font-weight: 700;">Transparent Rates &amp; Zero Hidden Fees</h3>
          <p style="color: #64748b; font-size: 0.92rem; line-height: 1.6;">
            We offer upfront, itemized price estimates with clear cost parameters. You pay strictly for what is agreed upon with no last-minute surcharge surprises.
          </p>
        </div>

      </div>
    </div>
  </section>

  <!-- Section 4: Comprehensive Shifting Services -->
  <section style="padding: 60px 0; background: #ffffff;">
    <div class="container">
      <div style="text-align: center; max-width: 800px; margin: 0 auto 45px auto;">
        <span style="color: #d32f2f; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; font-size: 0.85rem;">End-to-End Solutions</span>
        <h2 style="font-size: 2.2rem; color: #0b132b; font-weight: 800; margin-top: 5px;">
          Our Relocation Services in <span style="color: #d32f2f;">Jamshedpur</span>
        </h2>
        <p style="color: #64748b; font-size: 1rem; margin-top: 10px;">
          Whether you need local apartment shifting within Jamshedpur or intercity transport across India, we provide customized packing and moving solutions tailored to your requirements.
        </p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 30px;">
        
        <!-- Service 1 -->
        <div style="background: #f8fafc; border-radius: 12px; padding: 30px; border: 1px solid #e2e8f0;">
          <h3 style="font-size: 1.3rem; color: #0b132b; margin-bottom: 12px; font-weight: 700;">🏡 Household Goods Relocation</h3>
          <p style="color: #64748b; font-size: 0.94rem; line-height: 1.6; margin-bottom: 15px;">
            Complete home shifting services covering furniture dismantling, clothing box packing, kitchen glassware wrapping, electrical appliance uninstallation, loading, transit, unloading, and reassembly at your new Jamshedpur residence.
          </p>
          <ul style="color: #475569; font-size: 0.88rem; display: flex; flex-direction: column; gap: 8px;">
            <li>✓ Heavy-duty double wall cartons for clothes &amp; books</li>
            <li>✓ Bubble wrap &amp; foam protection for LED TVs &amp; fridges</li>
            <li>✓ Specialized carpenter disassembly of beds &amp; wardrobes</li>
          </ul>
        </div>

        <!-- Service 2 -->
        <div style="background: #f8fafc; border-radius: 12px; padding: 30px; border: 1px solid #e2e8f0;">
          <h3 style="font-size: 1.3rem; color: #0b132b; margin-bottom: 12px; font-weight: 700;">🏢 Commercial &amp; Office Shifting</h3>
          <p style="color: #64748b; font-size: 0.94rem; line-height: 1.6; margin-bottom: 15px;">
            Zero-downtime corporate office relocation for industrial firms, corporate offices, IT setups, and banks across Jamshedpur. Weekend and overnight shifting schedules available for uninterrupted business operations.
          </p>
          <ul style="color: #475569; font-size: 0.88rem; display: flex; flex-direction: column; gap: 8px;">
            <li>✓ Color-coded document &amp; file archiving crates</li>
            <li>✓ Anti-static bubble packaging for IT servers &amp; computers</li>
            <li>✓ Modular furniture disassembly and workstation setup</li>
          </ul>
        </div>

        <!-- Service 3 -->
        <div style="background: #f8fafc; border-radius: 12px; padding: 30px; border: 1px solid #e2e8f0;">
          <h3 style="font-size: 1.3rem; color: #0b132b; margin-bottom: 12px; font-weight: 700;">🚗 Closed Car Carrier Transport</h3>
          <p style="color: #64748b; font-size: 0.94rem; line-height: 1.6; margin-bottom: 15px;">
            Scratch-free car transportation from Jamshedpur to any city in India using covered hydraulic car carrier trailers. Doorstep pickup and delivery with real-time GPS tracking and transit insurance.
          </p>
          <ul style="color: #475569; font-size: 0.88rem; display: flex; flex-direction: column; gap: 8px;">
            <li>✓ Covered car container trailers with safety wheel locks</li>
            <li>✓ Detailed pre-loading car condition report</li>
            <li>✓ Full transit insurance for total financial protection</li>
          </ul>
        </div>

        <!-- Service 4 -->
        <div style="background: #f8fafc; border-radius: 12px; padding: 30px; border: 1px solid #e2e8f0;">
          <h3 style="font-size: 1.3rem; color: #0b132b; margin-bottom: 12px; font-weight: 700;">🏍️ Bike &amp; Two-Wheeler Shipping</h3>
          <p style="color: #64748b; font-size: 0.94rem; line-height: 1.6; margin-bottom: 15px;">
            Specialized motorcycle and scooter transport with multi-layer straw padding, corrugated sheet wrapping, and wooden framing to prevent dents and scratches during long-distance transit.
          </p>
          <ul style="color: #475569; font-size: 0.88rem; display: flex; flex-direction: column; gap: 8px;">
            <li>✓ Paddy straw cushioning &amp; heavy shrink wrapping</li>
            <li>✓ Drain fuel safety protocol before loading</li>
            <li>✓ Dedicated vehicle tie-down straps inside truck</li>
          </ul>
        </div>

        <!-- Service 5 -->
        <div style="background: #f8fafc; border-radius: 12px; padding: 30px; border: 1px solid #e2e8f0;">
          <h3 style="font-size: 1.3rem; color: #0b132b; margin-bottom: 12px; font-weight: 700;">📦 Heavy Wooden Crate Packaging</h3>
          <p style="color: #64748b; font-size: 0.94rem; line-height: 1.6; margin-bottom: 15px;">
            Custom wooden box crate framing for extra fragile goods like marble statues, large glass tabletops, chandeliers, curved TVs, and industrial equipment in Jamshedpur.
          </p>
          <ul style="color: #475569; font-size: 0.88rem; display: flex; flex-direction: column; gap: 8px;">
            <li>✓ Tailor-made wooden frame sizing for fragile items</li>
            <li>✓ Internal high-density foam padding lining</li>
            <li>✓ Heavy shock-resistant outer wooden casing</li>
          </ul>
        </div>

        <!-- Service 6 -->
        <div style="background: #f8fafc; border-radius: 12px; padding: 30px; border: 1px solid #e2e8f0;">
          <h3 style="font-size: 1.3rem; color: #0b132b; margin-bottom: 12px; font-weight: 700;">🏬 Secure Warehouse &amp; Storage</h3>
          <p style="color: #64748b; font-size: 0.94rem; line-height: 1.6; margin-bottom: 15px;">
            Clean, climate-controlled, pest-managed, and 24/7 CCTV surveillance warehouse facilities in Jamshedpur for short-term and long-term storage of household goods and office inventory.
          </p>
          <ul style="color: #475569; font-size: 0.88rem; display: flex; flex-direction: column; gap: 8px;">
            <li>✓ 24/7 CCTV security &amp; fire protection systems</li>
            <li>✓ Palletized moisture-free elevated storage racks</li>
            <li>✓ Flexible monthly or weekly storage rental plans</li>
          </ul>
        </div>

      </div>
    </div>
  </section>

  <!-- Section 5: 7-Layer Packaging Standard -->
  <section style="padding: 60px 0; background: #070d19; color: #ffffff;">
    <div class="container">
      <div style="text-align: center; max-width: 800px; margin: 0 auto 45px auto;">
        <span style="color: #f59e0b; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; font-size: 0.85rem;">Zero-Damage Guarantee</span>
        <h2 style="font-size: 2.2rem; color: #ffffff; font-weight: 800; margin-top: 5px;">
          Our 7-Layer Packaging Standard in <span style="color: #f59e0b;">Jamshedpur</span>
        </h2>
        <p style="color: #cbd5e1; font-size: 1rem; margin-top: 10px;">
          Proper protective packaging is the backbone of safe relocation. We utilize a strict 7-layer safety shield for all household items.
        </p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 20px;">
        
        <div style="background: rgba(255,255,255,0.03); padding: 20px; border-radius: 8px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #f59e0b; font-size: 1.1rem; margin-bottom: 6px;">Layer 1: High-Density Stretch Film</h4>
          <p style="color: #94a3b8; font-size: 0.88rem; line-height: 1.5;">Initial dust-proof, moisture-resistant plastic stretch wrapping applied directly over furniture wood and fabric.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); padding: 20px; border-radius: 8px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #f59e0b; font-size: 1.1rem; margin-bottom: 6px;">Layer 2: Air-Bubble Cushion Roll</h4>
          <p style="color: #94a3b8; font-size: 0.88rem; line-height: 1.5;">Shock-absorbing heavy bubble wrap layer wrapped around electronics, appliances, and wooden furniture edges.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); padding: 20px; border-radius: 8px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #f59e0b; font-size: 1.1rem; margin-bottom: 6px;">Layer 3: Heavy Corrugated Sheets</h4>
          <p style="color: #94a3b8; font-size: 0.88rem; line-height: 1.5;">Thick 5-ply corrugated cardboard sheets tailored around furniture corners to protect against impact and friction.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); padding: 20px; border-radius: 8px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #f59e0b; font-size: 1.1rem; margin-bottom: 6px;">Layer 4: High-Density Foam Corners</h4>
          <p style="color: #94a3b8; font-size: 0.88rem; line-height: 1.5;">L-shaped rigid foam corner guards fitted onto dining tables, TV screens, mirrors, and glass cabinets.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); padding: 20px; border-radius: 8px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #f59e0b; font-size: 1.1rem; margin-bottom: 6px;">Layer 5: Water-Proof Fabric Blankets</h4>
          <p style="color: #94a3b8; font-size: 0.88rem; line-height: 1.5;">Heavy quilted moving blankets wrapped over large sofas, washing machines, and refrigerators for rain protection.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); padding: 20px; border-radius: 8px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #f59e0b; font-size: 1.1rem; margin-bottom: 6px;">Layer 6: Branded Security Sealing Tape</h4>
          <p style="color: #94a3b8; font-size: 0.88rem; line-height: 1.5;">High-tack tamper-evident official sealing tape binding all protective layers tightly to eliminate slippage.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); padding: 20px; border-radius: 8px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #f59e0b; font-size: 1.1rem; margin-bottom: 6px;">Layer 7: Custom Outer Wooden Crating</h4>
          <p style="color: #94a3b8; font-size: 0.88rem; line-height: 1.5;">External wooden crate box encapsulation for high-value artwork, glass items, and fragile electronic equipment.</p>
        </div>

      </div>
    </div>
  </section>

  <!-- Section 6 & 7: Internal Links Grid (8 Contextual Body Links) -->
  <section style="padding: 60px 0; background: #f8fafc;">
    <div class="container">
      <div style="text-align: center; max-width: 800px; margin: 0 auto 40px auto;">
        <span style="color: #d32f2f; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; font-size: 0.85rem;">Local &amp; Intercity Network</span>
        <h2 style="font-size: 2rem; color: #0b132b; font-weight: 800; margin-top: 5px;">
          Explore Our <span style="color: #d32f2f;">Jamshedpur Shifting Routes</span>
        </h2>
        <p style="color: #64748b; font-size: 0.95rem; margin-top: 8px;">
          We operate across every neighborhood of Steel City Jamshedpur and connect to all major cities across Jharkhand and pan-India highways.
        </p>
      </div>

      <!-- Grid 1: Local Areas -->
      <div style="margin-bottom: 35px;">
        <h3 style="font-size: 1.15rem; color: #0b132b; margin-bottom: 15px; font-weight: 700; border-bottom: 2px solid #f59e0b; padding-bottom: 6px; width: fit-content;">
          Popular Jamshedpur Locality Services:
        </h3>
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); gap: 15px;">
          <a href="<?php echo SITE_URL; ?>packers-and-movers-bistupur-jamshedpur" style="background: #ffffff; padding: 14px; border-radius: 8px; border: 1px solid #e2e8f0; color: #0b132b; font-weight: 600; text-decoration: none; display: flex; align-items: center; justify-content: space-between; transition: all 0.3s ease;">
            <span>📍 Movers in Bistupur</span>
            <span style="color: #f59e0b;">➔</span>
          </a>
          <a href="<?php echo SITE_URL; ?>packers-and-movers-sakchi-jamshedpur" style="background: #ffffff; padding: 14px; border-radius: 8px; border: 1px solid #e2e8f0; color: #0b132b; font-weight: 600; text-decoration: none; display: flex; align-items: center; justify-content: space-between; transition: all 0.3s ease;">
            <span>📍 Movers in Sakchi</span>
            <span style="color: #f59e0b;">➔</span>
          </a>
          <a href="<?php echo SITE_URL; ?>packers-and-movers-mango-jamshedpur" style="background: #ffffff; padding: 14px; border-radius: 8px; border: 1px solid #e2e8f0; color: #0b132b; font-weight: 600; text-decoration: none; display: flex; align-items: center; justify-content: space-between; transition: all 0.3s ease;">
            <span>📍 Movers in Mango</span>
            <span style="color: #f59e0b;">➔</span>
          </a>
          <a href="<?php echo SITE_URL; ?>packers-and-movers-adityapur-jamshedpur" style="background: #ffffff; padding: 14px; border-radius: 8px; border: 1px solid #e2e8f0; color: #0b132b; font-weight: 600; text-decoration: none; display: flex; align-items: center; justify-content: space-between; transition: all 0.3s ease;">
            <span>📍 Movers in Adityapur</span>
            <span style="color: #f59e0b;">➔</span>
          </a>
        </div>
      </div>

      <!-- Grid 2: Intercity Routes -->
      <div>
        <h3 style="font-size: 1.15rem; color: #0b132b; margin-bottom: 15px; font-weight: 700; border-bottom: 2px solid #d32f2f; padding-bottom: 6px; width: fit-content;">
          Popular Intercity Shifting Routes:
        </h3>
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); gap: 15px;">
          <a href="<?php echo SITE_URL; ?>packers-and-movers-jamshedpur-to-ranchi" style="background: #ffffff; padding: 14px; border-radius: 8px; border: 1px solid #e2e8f0; color: #0b132b; font-weight: 600; text-decoration: none; display: flex; align-items: center; justify-content: space-between; transition: all 0.3s ease;">
            <span>🚛 Jamshedpur to Ranchi</span>
            <span style="color: #d32f2f;">➔</span>
          </a>
          <a href="<?php echo SITE_URL; ?>packers-and-movers-jamshedpur-to-kolkata" style="background: #ffffff; padding: 14px; border-radius: 8px; border: 1px solid #e2e8f0; color: #0b132b; font-weight: 600; text-decoration: none; display: flex; align-items: center; justify-content: space-between; transition: all 0.3s ease;">
            <span>🚛 Jamshedpur to Kolkata</span>
            <span style="color: #d32f2f;">➔</span>
          </a>
          <a href="<?php echo SITE_URL; ?>packers-and-movers-jamshedpur-to-patna" style="background: #ffffff; padding: 14px; border-radius: 8px; border: 1px solid #e2e8f0; color: #0b132b; font-weight: 600; text-decoration: none; display: flex; align-items: center; justify-content: space-between; transition: all 0.3s ease;">
            <span>🚛 Jamshedpur to Patna</span>
            <span style="color: #d32f2f;">➔</span>
          </a>
          <a href="<?php echo SITE_URL; ?>packers-and-movers-jamshedpur-to-dhanbad" style="background: #ffffff; padding: 14px; border-radius: 8px; border: 1px solid #e2e8f0; color: #0b132b; font-weight: 600; text-decoration: none; display: flex; align-items: center; justify-content: space-between; transition: all 0.3s ease;">
            <span>🚛 Jamshedpur to Dhanbad</span>
            <span style="color: #d32f2f;">➔</span>
          </a>
        </div>
      </div>

    </div>
  </section>

  <!-- Section 8: Step-by-Step Process -->
  <section style="padding: 60px 0; background: #ffffff;">
    <div class="container">
      <div style="text-align: center; max-width: 800px; margin: 0 auto 45px auto;">
        <span style="color: #d32f2f; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; font-size: 0.85rem;">Simplified Shifting</span>
        <h2 style="font-size: 2.2rem; color: #0b132b; font-weight: 800; margin-top: 5px;">
          Our 5-Step Relocation Execution Process
        </h2>
        <p style="color: #64748b; font-size: 1rem; margin-top: 10px;">
          How Shree Ashirwad Packers and Movers executes seamless household and commercial moves in Jamshedpur.
        </p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 20px;">
        
        <div style="text-align: center; padding: 25px; background: #f8fafc; border-radius: 12px; border: 1px solid #e2e8f0;">
          <div style="width: 45px; height: 45px; background: #d32f2f; color: #ffffff; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 800; font-size: 1.1rem; margin: 0 auto 15px auto;">01</div>
          <h4 style="font-size: 1.1rem; color: #0b132b; margin-bottom: 8px; font-weight: 700;">Pre-Move Survey</h4>
          <p style="color: #64748b; font-size: 0.88rem; line-height: 1.5;">Physical or video inspection of goods to assess inventory size and truck requirements.</p>
        </div>

        <div style="text-align: center; padding: 25px; background: #f8fafc; border-radius: 12px; border: 1px solid #e2e8f0;">
          <div style="width: 45px; height: 45px; background: #f59e0b; color: #ffffff; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 800; font-size: 1.1rem; margin: 0 auto 15px auto;">02</div>
          <h4 style="font-size: 1.1rem; color: #0b132b; margin-bottom: 8px; font-weight: 700;">Multi-Layer Packing</h4>
          <p style="color: #64748b; font-size: 0.88rem; line-height: 1.5;">Expert packing of all furniture, electronics, and kitchenware using 7-layer materials.</p>
        </div>

        <div style="text-align: center; padding: 25px; background: #f8fafc; border-radius: 12px; border: 1px solid #e2e8f0;">
          <div style="width: 45px; height: 45px; background: #d32f2f; color: #ffffff; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 800; font-size: 1.1rem; margin: 0 auto 15px auto;">03</div>
          <h4 style="font-size: 1.1rem; color: #0b132b; margin-bottom: 8px; font-weight: 700;">Systematic Loading</h4>
          <p style="color: #64748b; font-size: 0.88rem; line-height: 1.5;">Careful handling and loading into enclosed weather-proof GPS container trucks.</p>
        </div>

        <div style="text-align: center; padding: 25px; background: #f8fafc; border-radius: 12px; border: 1px solid #e2e8f0;">
          <div style="width: 45px; height: 45px; background: #f59e0b; color: #ffffff; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 800; font-size: 1.1rem; margin: 0 auto 15px auto;">04</div>
          <h4 style="font-size: 1.1rem; color: #0b132b; margin-bottom: 8px; font-weight: 700;">Safe GPS Transit</h4>
          <p style="color: #64748b; font-size: 0.88rem; line-height: 1.5;">Express highway transit via NH-33 / NH-49 with 24/7 satellite consignment tracking.</p>
        </div>

        <div style="text-align: center; padding: 25px; background: #f8fafc; border-radius: 12px; border: 1px solid #e2e8f0;">
          <div style="width: 45px; height: 45px; background: #d32f2f; color: #ffffff; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 800; font-size: 1.1rem; margin: 0 auto 15px auto;">05</div>
          <h4 style="font-size: 1.1rem; color: #0b132b; margin-bottom: 8px; font-weight: 700;">Unpacking &amp; Setup</h4>
          <p style="color: #64748b; font-size: 0.88rem; line-height: 1.5;">Unloading, unpacking, and furniture re-assembly at your new destination home.</p>
        </div>

      </div>
    </div>
  </section>

  <!-- Section 9: 10 Localized FAQs -->
  <section style="padding: 60px 0; background: #f8fafc;">
    <div class="container">
      <div style="text-align: center; max-width: 800px; margin: 0 auto 45px auto;">
        <span style="color: #d32f2f; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; font-size: 0.85rem;">Helpful Information</span>
        <h2 style="font-size: 2.2rem; color: #0b132b; font-weight: 800; margin-top: 5px;">
          Frequently Asked Questions (FAQs)
        </h2>
        <p style="color: #64748b; font-size: 1rem; margin-top: 10px;">
          Got questions about hiring packers and movers in Jamshedpur? Here are answers to common queries.
        </p>
      </div>

      <div style="max-width: 900px; margin: 0 auto; display: flex; flex-direction: column; gap: 15px;">
        
        <div style="background: #ffffff; padding: 20px 25px; border-radius: 10px; border: 1px solid #e2e8f0;">
          <h4 style="font-size: 1.05rem; color: #0b132b; margin-bottom: 8px; font-weight: 700;">Q1: How early should I book packers and movers in Jamshedpur?</h4>
          <p style="color: #64748b; font-size: 0.92rem; line-height: 1.6;">We recommend booking 3 to 5 days in advance for local shifting within Jamshedpur (Bistupur, Sakchi, Mango, Adityapur), and 7 days prior for intercity relocations across India to secure optimal container trucks.</p>
        </div>

        <div style="background: #ffffff; padding: 20px 25px; border-radius: 10px; border: 1px solid #e2e8f0;">
          <h4 style="font-size: 1.05rem; color: #0b132b; margin-bottom: 8px; font-weight: 700;">Q2: Are your shifting bills eligible for corporate and government claims?</h4>
          <p style="color: #64748b; font-size: 0.92rem; line-height: 1.6;">Yes, absolutely! Shree Ashirwad Packers and Movers provides 100% genuine IBA-approved GST invoices, money receipts, lorry receipts (LR), and itemized consignment lists accepted by all TATA group companies, defense departments, banks, and government organizations.</p>
        </div>

        <div style="background: #ffffff; padding: 20px 25px; border-radius: 10px; border: 1px solid #e2e8f0;">
          <h4 style="font-size: 1.05rem; color: #0b132b; margin-bottom: 8px; font-weight: 700;">Q3: How are shifting charges determined for Jamshedpur relocations?</h4>
          <p style="color: #64748b; font-size: 0.92rem; line-height: 1.6;">Relocation costs depend on the volume of household goods (1BHK, 2BHK, 3BHK, Villa), distance to the destination, floor level, availability of lift service, and requirement for specialized wooden crating or vehicle transport.</p>
        </div>

        <div style="background: #ffffff; padding: 20px 25px; border-radius: 10px; border: 1px solid #e2e8f0;">
          <h4 style="font-size: 1.05rem; color: #0b132b; margin-bottom: 8px; font-weight: 700;">Q4: Do you offer transit insurance for household goods?</h4>
          <p style="color: #64748b; font-size: 0.92rem; line-height: 1.6;">Yes, we offer comprehensive transit insurance covering your furniture, electronics, and personal belongings against unexpected road mishaps or natural elements during long-distance intercity transit.</p>
        </div>

        <div style="background: #ffffff; padding: 20px 25px; border-radius: 10px; border: 1px solid #e2e8f0;">
          <h4 style="font-size: 1.05rem; color: #0b132b; margin-bottom: 8px; font-weight: 700;">Q5: How do you protect fragile items like glass dining tables and LED TVs?</h4>
          <p style="color: #64748b; font-size: 0.92rem; line-height: 1.6;">Fragile items are packed using high-density bubble wrap, foam corner guards, heavy corrugated sheets, waterproof quilted blankets, and custom wooden box crating for ultimate safety.</p>
        </div>

        <div style="background: #ffffff; padding: 20px 25px; border-radius: 10px; border: 1px solid #e2e8f0;">
          <h4 style="font-size: 1.05rem; color: #0b132b; margin-bottom: 8px; font-weight: 700;">Q6: Can I transport my car or motorcycle alongside household goods?</h4>
          <p style="color: #64748b; font-size: 0.92rem; line-height: 1.6;">Yes, we operate closed car container trailers and dedicated bike transport vehicles equipped with safety wheel locks and soft padding to transport your vehicles scratch-free from Jamshedpur.</p>
        </div>

        <div style="background: #ffffff; padding: 20px 25px; border-radius: 10px; border: 1px solid #e2e8f0;">
          <h4 style="font-size: 1.05rem; color: #0b132b; margin-bottom: 8px; font-weight: 700;">Q7: Which areas in Jamshedpur do you serve?</h4>
          <p style="color: #64748b; font-size: 0.92rem; line-height: 1.6;">We cover all major locations in Jamshedpur including Bistupur, Sakchi, Mango, Adityapur, Kadma, Jugsalai, Telco, Golmuri, Baridih, Sonari, Sidhgora, Parsudih, Bagbera, Sundernagar, Dimna Road, and Seraikela Kharsawan.</p>
        </div>

        <div style="background: #ffffff; padding: 20px 25px; border-radius: 10px; border: 1px solid #e2e8f0;">
          <h4 style="font-size: 1.05rem; color: #0b132b; margin-bottom: 8px; font-weight: 700;">Q8: Do you provide unpacking and furniture re-assembly at the destination?</h4>
          <p style="color: #64748b; font-size: 0.92rem; line-height: 1.6;">Yes, our experienced move crew unloads, unpacks, and re-assembles beds, wardrobes, dining tables, and modular furniture at your new home as part of our full-service relocation package.</p>
        </div>

        <div style="background: #ffffff; padding: 20px 25px; border-radius: 10px; border: 1px solid #e2e8f0;">
          <h4 style="font-size: 1.05rem; color: #0b132b; margin-bottom: 8px; font-weight: 700;">Q9: Is warehouse storage available in Jamshedpur?</h4>
          <p style="color: #64748b; font-size: 0.92rem; line-height: 1.6;">Yes, we offer secure, pest-controlled, 24/7 CCTV monitored storage facilities in Jamshedpur for short-term and long-term household and industrial goods storage.</p>
        </div>

        <div style="background: #ffffff; padding: 20px 25px; border-radius: 10px; border: 1px solid #e2e8f0;">
          <h4 style="font-size: 1.05rem; color: #0b132b; margin-bottom: 8px; font-weight: 700;">Q10: How can I request an instant relocation estimate?</h4>
          <p style="color: #64748b; font-size: 0.92rem; line-height: 1.6;">Simply call our team directly at <strong>+91 8409531615</strong> or click the WhatsApp button on our website to share your shifting details for an instant transparent quote.</p>
        </div>

      </div>
    </div>
  </section>

  <!-- Section 10: Final CTA Banner -->
  <section class="cta-banner-section" style="padding: 60px 0; background: linear-gradient(135deg, #0b132b 0%, #1c2541 100%); color: #ffffff;">
    <div class="container">
      <div style="text-align: center; max-width: 800px; margin: 0 auto;">
        <span style="background: rgba(245, 158, 11, 0.15); color: #f59e0b; border: 1px solid rgba(245, 158, 11, 0.4); padding: 6px 16px; border-radius: 20px; font-size: 0.85rem; font-weight: 700; text-transform: uppercase; display: inline-block; margin-bottom: 15px;">
          Book Jamshedpur's Most Trusted Movers
        </span>
        <h2 style="font-size: 2.3rem; font-weight: 800; line-height: 1.3; margin-bottom: 15px; color: #ffffff;">
          Ready to Move With <span style="color: #f59e0b;">Packers and Movers in Jamshedpur</span>?
        </h2>
        <p style="font-size: 1.05rem; color: #cbd5e1; margin-bottom: 30px; line-height: 1.6;">
          Experience stress-free, 100% damage-free household and commercial relocation. Call our Jamshedpur helpline now for an instant transparent rate estimate.
        </p>

        <div style="display: flex; gap: 15px; justify-content: center; flex-wrap: wrap;">
          <a href="tel:<?php echo SITE_PHONE_RAW; ?>" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 30px; background: linear-gradient(135deg, #d32f2f 0%, #f59e0b 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(211, 47, 47, 0.4);">
            📞 Call Helpline: <?php echo SITE_PHONE; ?>
          </a>
          <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers%20and%20Movers,%20I%20want%20information%20about%20your%20shifting%20services%20in%20Jamshedpur." target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 30px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
            💬 Instant WhatsApp Quote
          </a>
        </div>
      </div>
    </div>
  </section>

</main>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
