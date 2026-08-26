<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "Bike Transportation in Leh | Safe Motorcycle Shifting Ladakh";
$page_desc = "Top-rated bike transportation in Leh, Ladakh. Professional 7-layer bubble packaging, enclosed covered container transport, doorstep pickup & delivery, and 100% transit insurance for Ladakh bike expeditions & relocations.";
$page_keywords = "bike transportation in leh, bike shifting services leh ladakh, motorcycle transport leh manali srinagar, royal enfield transport leh, insured bike transport ladakh, shree ashirwad packers and movers";
$canonical_url = "https://shreeashirwadpackersandmovers.com/pages/bike-transportation-in-leh.php";

require_once __DIR__ . '/../includes/header.php';
?>

<main class="site-main">

  <!-- Visual Breadcrumb Navigation Bar -->
  <div class="breadcrumb-wrapper">
    <div class="container">
      <div class="breadcrumb-list">
        <span class="breadcrumb-item"><a href="<?php echo SITE_URL; ?>" title="Home">Home</a></span>
        <span class="breadcrumb-separator">/</span>
        <span class="breadcrumb-item"><a href="<?php echo SITE_URL; ?>#services" title="Services">Services</a></span>
        <span class="breadcrumb-separator">/</span>
        <span class="breadcrumb-item active">Bike Transportation in Leh</span>
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
            Leh Ladakh Motorcycle Shifting Specialists
          </span>
          <h1 style="font-size: 2.5rem; font-weight: 800; line-height: 1.2; margin-bottom: 20px; color: #ffffff;">
            Reliable & Insured <span style="color: #f59e0b;">Bike Transportation in Leh</span>
          </h1>
          <p style="font-size: 1.05rem; color: #cbd5e1; line-height: 1.7; margin-bottom: 25px;">
            Transport your motorcycle or tour bike safely to/from Leh (Ladakh) across India. Designed for Royal Enfield expedition riders, tourists, and residents with 7-layer protective packaging, enclosed covered containers, and 100% transit insurance.
          </p>

          <div style="display: flex; gap: 15px; flex-wrap: wrap; margin-bottom: 30px;">
            <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Now" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
              <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call: <?php echo SITE_PHONE; ?>
            </a>
            <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20a%20bike%20transportation%20quote%20for%20Leh." title="Chat on WhatsApp" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
              <i class="fab fa-whatsapp" style="margin-right: 8px;"></i> WhatsApp Quote
            </a>
          </div>

          <div style="display: flex; gap: 20px; font-size: 0.9rem; color: #94a3b8; flex-wrap: wrap;">
            <span><strong style="color: #f59e0b;"><i class="fas fa-shield-alt"></i> 100% Insured</strong> Transit</span>
            <span><strong style="color: #f59e0b;"><i class="fas fa-box"></i> 7-Layer</strong> Protection</span>
            <span><strong style="color: #f59e0b;"><i class="fas fa-truck-loading"></i> Doorstep</strong> Pick & Drop</span>
          </div>
        </div>

        <!-- Hero Lead Form Column -->
        <div class="hero-form-card" style="background: rgba(255, 255, 255, 0.05); backdrop-filter: blur(10px); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 16px; padding: 30px; box-shadow: 0 15px 35px rgba(0,0,0,0.4);">
          <h3 style="font-size: 1.4rem; color: #ffffff; margin-bottom: 8px; font-weight: 700; text-align: center;">Get Instant Bike Shifting Estimate</h3>
          <p style="font-size: 0.85rem; color: #94a3b8; text-align: center; margin-bottom: 20px;">Receive custom quote on WhatsApp in under 2 minutes</p>

          <form action="#" method="POST" onsubmit="sendHeroWhatsAppLead(event, this);">
            <div style="margin-bottom: 14px;">
              <input type="text" name="name" class="form-control" placeholder="Your Full Name" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="margin-bottom: 14px;">
              <input type="tel" name="phone" class="form-control" placeholder="10-Digit Phone Number" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 10px; margin-bottom: 14px;">
              <input type="text" name="move_from" class="form-control" value="Leh" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
              <input type="text" name="move_to" class="form-control" placeholder="Destination City" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="margin-bottom: 14px;">
              <input type="text" name="bike_model" class="form-control" placeholder="Bike Model (e.g., Royal Enfield Himalayan, BMW GS)" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <button type="submit" style="width: 100%; padding: 14px; background: linear-gradient(135deg, #d32f2f 0%, #f59e0b 100%); color: #ffffff; border: none; border-radius: 50px; font-weight: 700; font-size: 1rem; cursor: pointer; transition: all 0.3s ease;">
              Get Free WhatsApp Quote &rarr;
            </button>
          </form>
        </div>

      </div>
    </div>
  </section>

  <!-- Section 3: Stats Counter -->
  <section class="stats-counter" style="background: #0b132b; padding: 40px 0; border-bottom: 1px solid rgba(255,255,255,0.1);">
    <div class="container">
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 20px; text-align: center;">
        <div style="padding: 20px; background: rgba(255,255,255,0.03); border-radius: 12px; border: 1px solid rgba(245,158,11,0.2);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b;">4,500+</div>
          <div style="color: #cbd5e1; font-size: 0.9rem; margin-top: 5px;">Leh Expedition Bikes Shifted</div>
        </div>
        <div style="padding: 20px; background: rgba(255,255,255,0.03); border-radius: 12px; border: 1px solid rgba(245,158,11,0.2);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b;">99.9%</div>
          <div style="color: #cbd5e1; font-size: 0.9rem; margin-top: 5px;">Damage-Free Ratio</div>
        </div>
        <div style="padding: 20px; background: rgba(255,255,255,0.03); border-radius: 12px; border: 1px solid rgba(245,158,11,0.2);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b;">100%</div>
          <div style="color: #cbd5e1; font-size: 0.9rem; margin-top: 5px;">Transit Insurance Cover</div>
        </div>
        <div style="padding: 20px; background: rgba(255,255,255,0.03); border-radius: 12px; border: 1px solid rgba(245,158,11,0.2);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b;">IBA Approved</div>
          <div style="color: #cbd5e1; font-size: 0.9rem; margin-top: 5px;">GST Billing & Claims</div>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 4: 6-Card Feature Grid -->
  <section class="features-grid" style="padding: 60px 0; background: #1c2541;">
    <div class="container">
      <h2 style="text-align: center; font-size: 2rem; color: #ffffff; margin-bottom: 40px; font-weight: 800;">
        Why Choose Shree Ashirwad for <span style="color: #f59e0b;">Bike Transport in Leh</span>
      </h2>
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 25px;">
        <div style="background: rgba(255,255,255,0.04); padding: 25px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.08);">
          <div style="font-size: 1.8rem; color: #f59e0b; margin-bottom: 12px;"><i class="fas fa-shield-alt"></i></div>
          <h3 style="color: #fff; font-size: 1.2rem; margin-bottom: 10px;">7-Layer Safety Packaging</h3>
          <p style="color: #94a3b8; font-size: 0.95rem; line-height: 1.6;">Heavy-duty 80-GSM bubble wrap, corrugated sheets, stretch film, and wheel locking blocks to protect against scratches and high-altitude weather.</p>
        </div>
        <div style="background: rgba(255,255,255,0.04); padding: 25px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.08);">
          <div style="font-size: 1.8rem; color: #f59e0b; margin-bottom: 12px;"><i class="fas fa-truck-moving"></i></div>
          <h3 style="color: #fff; font-size: 1.2rem; margin-bottom: 10px;">Enclosed Covered Carriers</h3>
          <p style="color: #94a3b8; font-size: 0.95rem; line-height: 1.6;">Weatherproof covered car & bike container trucks safeguard your two-wheeler from rain, snow, dust, and mountain highway debris during transit.</p>
        </div>
        <div style="background: rgba(255,255,255,0.04); padding: 25px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.08);">
          <div style="font-size: 1.8rem; color: #f59e0b; margin-bottom: 12px;"><i class="fas fa-door-open"></i></div>
          <h3 style="color: #fff; font-size: 1.2rem; margin-bottom: 10px;">Doorstep Pick & Drop</h3>
          <p style="color: #94a3b8; font-size: 0.95rem; line-height: 1.6;">Free pickup from Leh market, Changspa, Choglamsar, Leh airport road, and direct doorstep delivery at your destination address.</p>
        </div>
        <div style="background: rgba(255,255,255,0.04); padding: 25px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.08);">
          <div style="font-size: 1.8rem; color: #f59e0b; margin-bottom: 12px;"><i class="fas fa-file-invoice-dollar"></i></div>
          <h3 style="color: #fff; font-size: 1.2rem; margin-bottom: 10px;">100% Transit Insurance</h3>
          <p style="color: #94a3b8; font-size: 0.95rem; line-height: 1.6;">Full financial indemnification for your motorcycle or scooter with fast insurance claim assistance in case of unexpected events.</p>
        </div>
        <div style="background: rgba(255,255,255,0.04); padding: 25px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.08);">
          <div style="font-size: 1.8rem; color: #f59e0b; margin-bottom: 12px;"><i class="fas fa-map-marker-alt"></i></div>
          <h3 style="color: #fff; font-size: 1.2rem; margin-bottom: 10px;">Real-Time GPS Tracking</h3>
          <p style="color: #94a3b8; font-size: 0.95rem; line-height: 1.6;">Track your vehicle status 24/7 with dedicated customer support updates from dispatch to final delivery.</p>
        </div>
        <div style="background: rgba(255,255,255,0.04); padding: 25px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.08);">
          <div style="font-size: 1.8rem; color: #f59e0b; margin-bottom: 12px;"><i class="fas fa-building"></i></div>
          <h3 style="color: #fff; font-size: 1.2rem; margin-bottom: 10px;">IBA Approved Bills</h3>
          <p style="color: #94a3b8; font-size: 0.95rem; line-height: 1.6;">Official GST bills, consignment notes (LR), and vehicle inspection sheets accepted by government, PSU, and corporate employers.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 5: Service Breakdown -->
  <section class="service-breakdown" style="padding: 60px 0; background: #0b132b;">
    <div class="container">
      <h2 style="text-align: center; font-size: 2rem; color: #ffffff; margin-bottom: 40px; font-weight: 800;">
        Specialized Two-Wheeler Relocation Services in Leh
      </h2>
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 25px;">
        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(245,158,11,0.2); border-radius: 12px; padding: 25px;">
          <h3 style="color: #f59e0b; font-size: 1.2rem; margin-bottom: 10px;">Royal Enfield & Himalayan Expedition Bikes</h3>
          <p style="color: #cbd5e1; font-size: 0.9rem; line-height: 1.6;">Specialized return transportation for Royal Enfield Bullet, Classic, Himalayan, Scram, and Interceptor after Leh road trips.</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(245,158,11,0.2); border-radius: 12px; padding: 25px;">
          <h3 style="color: #f59e0b; font-size: 1.2rem; margin-bottom: 10px;">Adventure & Tour Superbikes</h3>
          <p style="color: #cbd5e1; font-size: 0.9rem; line-height: 1.6;">Custom crate and harness transport for BMW GS, KTM Adventure, Triumph Tiger, and Suzuki V-Strom with zero-touch handling.</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(245,158,11,0.2); border-radius: 12px; padding: 25px;">
          <h3 style="color: #f59e0b; font-size: 1.2rem; margin-bottom: 10px;">Standard Commuter Motorcycles</h3>
          <p style="color: #cbd5e1; font-size: 0.9rem; line-height: 1.6;">Safe, budget-friendly transportation for Hero Pulsar, Honda CB350, Apache, and Yamaha bikes with multi-layer wrap.</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(245,158,11,0.2); border-radius: 12px; padding: 25px;">
          <h3 style="color: #f59e0b; font-size: 1.2rem; margin-bottom: 10px;">Scooters & Military/Defense Vehicles</h3>
          <p style="color: #cbd5e1; font-size: 0.9rem; line-height: 1.6;">Protective shifting for scooters and defense personnel personal two-wheelers stationed in Ladakh with official IBA documentation.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 6: 7-Layer Packaging -->
  <section class="packaging-framework" style="padding: 60px 0; background: #1c2541;">
    <div class="container">
      <h2 style="text-align: center; font-size: 2rem; color: #ffffff; margin-bottom: 15px; font-weight: 800;">
        7-Layer Safety Packaging Standard
      </h2>
      <p style="text-align: center; color: #94a3b8; max-width: 700px; margin: 0 auto 40px auto; font-size: 0.95rem;">
        Every vehicle loaded at Leh undergoes our multi-tier protective packing process to guarantee 100% damage-free transit across mountain passes.
      </p>
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 20px;">
        <div style="background: rgba(255,255,255,0.04); padding: 20px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #fff; margin-bottom: 5px;">Layer 1: Polythene Film</h4>
          <p style="color: #94a3b8; font-size: 0.85rem;">Waterproof stretch film to seal vehicle body paint from dust and cold weather condensation.</p>
        </div>
        <div style="background: rgba(255,255,255,0.04); padding: 20px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #fff; margin-bottom: 5px;">Layer 2: 80-GSM Bubble Wrap</h4>
          <p style="color: #94a3b8; font-size: 0.85rem;">High-density shock-absorbing bubble wrap around tank, mudguards, and engine.</p>
        </div>
        <div style="background: rgba(255,255,255,0.04); padding: 20px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #fff; margin-bottom: 5px;">Layer 3: Corrugated Sheets</h4>
          <p style="color: #94a3b8; font-size: 0.85rem;">Heavy corrugated sheets shielding side panels, silencer, and panniers from impact.</p>
        </div>
        <div style="background: rgba(255,255,255,0.04); padding: 20px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #fff; margin-bottom: 5px;">Layer 4: Foam Edge Protectors</h4>
          <p style="color: #94a3b8; font-size: 0.85rem;">High-density EVA foam padding on handle grips, levers, and footrests.</p>
        </div>
        <div style="background: rgba(255,255,255,0.04); padding: 20px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #fff; margin-bottom: 5px;">Layer 5: HD Stretch Wrap</h4>
          <p style="color: #94a3b8; font-size: 0.85rem;">Tight outer binding wrap securing all protective layers into a rigid unit.</p>
        </div>
        <div style="background: rgba(255,255,255,0.04); padding: 20px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #fff; margin-bottom: 5px;">Layer 6: Wheel Locking Chocks</h4>
          <p style="color: #94a3b8; font-size: 0.85rem;">Heavy-duty rubber chocks locking front and rear wheels firmly to container floor.</p>
        </div>
        <div style="background: rgba(255,255,255,0.04); padding: 20px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #fff; margin-bottom: 5px;">Layer 7: Nylon Belt Harness</h4>
          <p style="color: #94a3b8; font-size: 0.85rem;">Industrial nylon ratchet straps securing the bike upright to prevent swaying.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 7 & 8: Localities & Routes -->
  <section class="coverage-network" style="padding: 60px 0; background: #0b132b;">
    <div class="container">
      <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 40px;">
        <div>
          <h3 style="color: #f59e0b; font-size: 1.4rem; margin-bottom: 20px; font-weight: 700;">Leh & Ladakh Pickup Hubs</h3>
          <ul style="list-style: none; padding: 0; display: grid; grid-template-columns: 1fr 1fr; gap: 10px; color: #cbd5e1; font-size: 0.9rem;">
            <li style="padding: 8px; background: rgba(255,255,255,0.03); border-radius: 6px;"><i class="fas fa-check-circle" style="color: #f59e0b; margin-right: 6px;"></i> Leh Main Market</li>
            <li style="padding: 8px; background: rgba(255,255,255,0.03); border-radius: 6px;"><i class="fas fa-check-circle" style="color: #f59e0b; margin-right: 6px;"></i> Changspa Road</li>
            <li style="padding: 8px; background: rgba(255,255,255,0.03); border-radius: 6px;"><i class="fas fa-check-circle" style="color: #f59e0b; margin-right: 6px;"></i> Choglamsar</li>
            <li style="padding: 8px; background: rgba(255,255,255,0.03); border-radius: 6px;"><i class="fas fa-check-circle" style="color: #f59e0b; margin-right: 6px;"></i> Leh Airport Road</li>
            <li style="padding: 8px; background: rgba(255,255,255,0.03); border-radius: 6px;"><i class="fas fa-check-circle" style="color: #f59e0b; margin-right: 6px;"></i> Skara & Fort Road</li>
            <li style="padding: 8px; background: rgba(255,255,255,0.03); border-radius: 6px;"><i class="fas fa-check-circle" style="color: #f59e0b; margin-right: 6px;"></i> Spituk & Shey Belt</li>
          </ul>
        </div>
        <div>
          <h3 style="color: #f59e0b; font-size: 1.4rem; margin-bottom: 20px; font-weight: 700;">Popular Transport Routes from Leh</h3>
          <ul style="list-style: none; padding: 0; display: grid; grid-template-columns: 1fr 1fr; gap: 10px; color: #cbd5e1; font-size: 0.9rem;">
            <li style="padding: 8px; background: rgba(255,255,255,0.03); border-radius: 6px;"><i class="fas fa-arrow-right" style="color: #f59e0b; margin-right: 6px;"></i> Leh to Delhi NCR</li>
            <li style="padding: 8px; background: rgba(255,255,255,0.03); border-radius: 6px;"><i class="fas fa-arrow-right" style="color: #f59e0b; margin-right: 6px;"></i> Leh to Chandigarh</li>
            <li style="padding: 8px; background: rgba(255,255,255,0.03); border-radius: 6px;"><i class="fas fa-arrow-right" style="color: #f59e0b; margin-right: 6px;"></i> Leh to Manali</li>
            <li style="padding: 8px; background: rgba(255,255,255,0.03); border-radius: 6px;"><i class="fas fa-arrow-right" style="color: #f59e0b; margin-right: 6px;"></i> Leh to Mumbai</li>
            <li style="padding: 8px; background: rgba(255,255,255,0.03); border-radius: 6px;"><i class="fas fa-arrow-right" style="color: #f59e0b; margin-right: 6px;"></i> Leh to Bangalore</li>
            <li style="padding: 8px; background: rgba(255,255,255,0.03); border-radius: 6px;"><i class="fas fa-arrow-right" style="color: #f59e0b; margin-right: 6px;"></i> Leh to Pune</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 9: IBA GST Billing -->
  <section class="iba-billing" style="padding: 60px 0; background: #1c2541;">
    <div class="container">
      <h2 style="text-align: center; font-size: 2rem; color: #ffffff; margin-bottom: 20px; font-weight: 800;">
        IBA Approved & Government GST Billing Documentation
      </h2>
      <p style="text-align: center; color: #cbd5e1; max-width: 800px; margin: 0 auto 30px auto; font-size: 0.95rem;">
        Moving for defense posting, government transfer, or corporate assignment? We provide official IBA-approved bills, GST invoices, Lorry Receipts (LR), and pre/post vehicle inspection sheets required for 100% employer reimbursement.
      </p>
    </div>
  </section>

  <!-- Section 10: FAQ Schema -->
  <section class="faq-section" style="padding: 60px 0; background: #0b132b;">
    <div class="container">
      <h2 style="text-align: center; font-size: 2rem; color: #ffffff; margin-bottom: 40px; font-weight: 800;">
        Frequently Asked Questions — <span style="color: #f59e0b;">Bike Transport in Leh</span>
      </h2>
      <div style="max-width: 850px; margin: 0 auto; display: flex; flex-direction: column; gap: 15px;">
        <div style="background: rgba(255,255,255,0.03); padding: 20px; border-radius: 10px; border: 1px solid rgba(255,255,255,0.08);">
          <h4 style="color: #f59e0b; margin-bottom: 8px; font-size: 1.05rem;">Q: Can I ship my motorcycle back to my home city after completing a Ladakh bike tour?</h4>
          <p style="color: #cbd5e1; font-size: 0.9rem; line-height: 1.6;">Yes! We specialize in picking up expedition bikes in Leh after road trips and shipping them back in enclosed containers to Delhi, Mumbai, Bangalore, Pune, Kolkata, or any major city across India.</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); padding: 20px; border-radius: 10px; border: 1px solid rgba(255,255,255,0.08);">
          <h4 style="color: #f59e0b; margin-bottom: 8px; font-size: 1.05rem;">Q: How much does bike transport cost from Leh to Delhi/Chandigarh?</h4>
          <p style="color: #cbd5e1; font-size: 0.9rem; line-height: 1.6;">Transporting a motorcycle from Leh to Delhi/Chandigarh ranges between ₹6,500–₹11,500 depending on bike model, season/pass status, packaging, and transit insurance cover.</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); padding: 20px; border-radius: 10px; border: 1px solid rgba(255,255,255,0.08);">
          <h4 style="color: #f59e0b; margin-bottom: 8px; font-size: 1.05rem;">Q: What documents are required for bike transport from Leh?</h4>
          <p style="color: #cbd5e1; font-size: 0.9rem; line-height: 1.6;">You need a copy of the bike RC (Registration Certificate), active Insurance policy copy, owner's Govt ID proof (Aadhaar/PAN), and bike keys at pickup.</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); padding: 20px; border-radius: 10px; border: 1px solid rgba(255,255,255,0.08);">
          <h4 style="color: #f59e0b; margin-bottom: 8px; font-size: 1.05rem;">Q: How is my bike protected during transit across mountain passes?</h4>
          <p style="color: #cbd5e1; font-size: 0.9rem; line-height: 1.6;">We apply 7-layer packaging including 80-GSM bubble wrap, corrugated cardboard, stretch film, and secure it inside covered container trucks with wheel locks and nylon safety belts.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 11: CTA Footer -->
  <section class="cta-section" style="padding: 50px 0; background: linear-gradient(135deg, #1c2541 0%, #0b132b 100%); text-align: center; border-top: 1px solid rgba(245,158,11,0.3);">
    <div class="container">
      <h2 style="font-size: 2.2rem; color: #ffffff; margin-bottom: 15px; font-weight: 800;">
        Book Safe <span style="color: #f59e0b;">Bike Transportation in Leh</span> Today
      </h2>
      <p style="color: #cbd5e1; font-size: 1.05rem; margin-bottom: 30px;">
        Get 100% insured, IBA-approved doorstep two-wheeler shifting across India.
      </p>
      <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap;">
        <a href="tel:<?php echo SITE_PHONE_RAW; ?>" style="padding: 15px 35px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #fff; border-radius: 50px; font-weight: 700; text-decoration: none; font-size: 1.1rem; box-shadow: 0 4px 15px rgba(225,29,72,0.4);">
          <i class="fas fa-phone-alt"></i> Call <?php echo SITE_PHONE; ?>
        </a>
        <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20to%20book%20bike%20transport%20from%20Leh." target="_blank" style="padding: 15px 35px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #fff; border-radius: 50px; font-weight: 700; text-decoration: none; font-size: 1.1rem; box-shadow: 0 4px 15px rgba(16,185,129,0.4);">
          <i class="fab fa-whatsapp"></i> Instant WhatsApp Quote
        </a>
      </div>
    </div>
  </section>

</main>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "Can I ship my motorcycle back to my home city after completing a Ladakh bike tour?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes! We specialize in picking up expedition bikes in Leh after road trips and shipping them back in enclosed containers to Delhi, Mumbai, Bangalore, Pune, Kolkata, or any major city across India."
      }
    },
    {
      "@type": "Question",
      "name": "How much does bike transport cost from Leh to Delhi/Chandigarh?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Transporting a motorcycle from Leh to Delhi/Chandigarh ranges between ₹6,500–₹11,500 depending on bike model, season/pass status, packaging, and transit insurance cover."
      }
    },
    {
      "@type": "Question",
      "name": "What documents are required for bike transport from Leh?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "You need a copy of the bike RC (Registration Certificate), active Insurance policy copy, owner's Govt ID proof (Aadhaar/PAN), and bike keys at pickup."
      }
    },
    {
      "@type": "Question",
      "name": "How is my bike protected during transit across mountain passes?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "We apply 7-layer packaging including 80-GSM bubble wrap, corrugated cardboard, stretch film, and secure it inside covered container trucks with wheel locks and nylon safety belts."
      }
    }
  ]
}
</script>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
