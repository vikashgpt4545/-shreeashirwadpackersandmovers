<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "Bike Transportation in Mavoor | Secure Two-Wheeler Shifting Kozhikode Kerala";
$page_desc = "Top-rated bike transportation in Mavoor (Kozhikode district, Chaliyar river region, Calicut airport road, Malabar belt, Kerala). Professional 7-layer monsoon-proof bubble packaging, covered container trucks, doorstep pickup & delivery, and 100% transit insurance.";
$page_keywords = "bike transportation in mavoor, bike shifting services mavoor kozhikode, two wheeler transport calicut malabar, motorcycle shipping mavoor kerala, insured bike transport kozhikode, shree ashirwad packers and movers";
$canonical_url = "https://shreeashirwadpackersandmovers.com/pages/bike-transportation-in-mavoor.php";

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
        <span class="breadcrumb-item active">Bike Transportation in Mavoor</span>
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
            Mavoor Kozhikode Two-Wheeler Relocation Experts
          </span>
          <h1 style="font-size: 2.5rem; font-weight: 800; line-height: 1.2; margin-bottom: 20px; color: #ffffff;">
            Reliable & Insured <span style="color: #f59e0b;">Bike Transportation in Mavoor</span>
          </h1>
          <p style="font-size: 1.05rem; color: #cbd5e1; line-height: 1.7; margin-bottom: 25px;">
            Transport your motorcycle or scooter safely from Mavoor (Kozhikode district, Chaliyar river belt, Calicut Bypass corridor, Peruvayal area, Malabar region, Kerala) to anywhere across India. We offer 7-layer monsoon-proof packaging, closed container carriers, real-time GPS tracking, and 100% transit insurance.
          </p>

          <div style="display: flex; gap: 15px; flex-wrap: wrap; margin-bottom: 30px;">
            <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Now" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
              <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call: <?php echo SITE_PHONE; ?>
            </a>
            <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20a%20bike%20transportation%20quote%20for%20Mavoor." title="Chat on WhatsApp" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
              <i class="fab fa-whatsapp" style="margin-right: 8px;"></i> WhatsApp Quote
            </a>
          </div>

          <div style="display: flex; gap: 20px; font-size: 0.9rem; color: #94a3b8; flex-wrap: wrap;">
            <span><strong style="color: #f59e0b;"><i class="fas fa-shield-alt"></i> 100% Insured</strong> Transit</span>
            <span><strong style="color: #f59e0b;"><i class="fas fa-cloud-rain"></i> Monsoon Proof</strong> Wrapping</span>
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
              <input type="text" name="move_from" class="form-control" value="Mavoor" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
              <input type="text" name="move_to" class="form-control" placeholder="Destination City" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="margin-bottom: 14px;">
              <input type="text" name="bike_model" class="form-control" placeholder="Bike Model (e.g., Royal Enfield, KTM, Activa, Pulsar)" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
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
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b;">2,840+</div>
          <div style="color: #cbd5e1; font-size: 0.9rem; margin-top: 5px;">Bikes Transported</div>
        </div>
        <div style="padding: 20px; background: rgba(255,255,255,0.03); border-radius: 12px; border: 1px solid rgba(245,158,11,0.2);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b;">99.9%</div>
          <div style="color: #cbd5e1; font-size: 0.9rem; margin-top: 5px;">Zero Damage Delivery</div>
        </div>
        <div style="padding: 20px; background: rgba(255,255,255,0.03); border-radius: 12px; border: 1px solid rgba(245,158,11,0.2);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b;">100%</div>
          <div style="color: #cbd5e1; font-size: 0.9rem; margin-top: 5px;">Transit Insurance Cover</div>
        </div>
        <div style="padding: 20px; background: rgba(255,255,255,0.03); border-radius: 12px; border: 1px solid rgba(245,158,11,0.2);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b;">IBA Approved</div>
          <div style="color: #cbd5e1; font-size: 0.9rem; margin-top: 5px;">GST Invoice & Claims</div>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 4: 6-Card Feature Grid -->
  <section class="features-grid" style="padding: 60px 0; background: #1c2541;">
    <div class="container">
      <h2 style="text-align: center; font-size: 2rem; color: #ffffff; margin-bottom: 40px; font-weight: 800;">
        Why Choose Shree Ashirwad for <span style="color: #f59e0b;">Bike Transport in Mavoor</span>
      </h2>
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 25px;">
        <div style="background: rgba(255,255,255,0.04); padding: 25px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.08);">
          <div style="font-size: 1.8rem; color: #f59e0b; margin-bottom: 12px;"><i class="fas fa-cloud-rain"></i></div>
          <h3 style="color: #fff; font-size: 1.2rem; margin-bottom: 10px;">7-Layer Monsoon Proofing</h3>
          <p style="color: #94a3b8; font-size: 0.95rem; line-height: 1.6;">Monsoon-resistant heavy stretch film, 80-GSM bubble wrap, corrugated sheets, and moisture barrier sealing tailored for Malabar coastal weather.</p>
        </div>
        <div style="background: rgba(255,255,255,0.04); padding: 25px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.08);">
          <div style="font-size: 1.8rem; color: #f59e0b; margin-bottom: 12px;"><i class="fas fa-truck-moving"></i></div>
          <h3 style="color: #fff; font-size: 1.2rem; margin-bottom: 10px;">Enclosed Container Shipping</h3>
          <p style="color: #94a3b8; font-size: 0.95rem; line-height: 1.6;">Weatherproof closed container trucks prevent exposure to sea air, dust, and heavy rains along National Highway corridors.</p>
        </div>
        <div style="background: rgba(255,255,255,0.04); padding: 25px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.08);">
          <div style="font-size: 1.8rem; color: #f59e0b; margin-bottom: 12px;"><i class="fas fa-door-open"></i></div>
          <h3 style="color: #fff; font-size: 1.2rem; margin-bottom: 10px;">Doorstep Pick & Delivery</h3>
          <p style="color: #94a3b8; font-size: 0.95rem; line-height: 1.6;">Free home pickup across Mavoor town, Peruvayal, Cheruvatta, Calicut Bypass, and direct delivery across any state in India.</p>
        </div>
        <div style="background: rgba(255,255,255,0.04); padding: 25px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.08);">
          <div style="font-size: 1.8rem; color: #f59e0b; margin-bottom: 12px;"><i class="fas fa-shield-alt"></i></div>
          <h3 style="color: #fff; font-size: 1.2rem; margin-bottom: 10px;">Full Transit Insurance</h3>
          <p style="color: #94a3b8; font-size: 0.95rem; line-height: 1.6;">Complete financial indemnification covering declared motorcycle valuation with hassle-free claim support during interstate transport.</p>
        </div>
        <div style="background: rgba(255,255,255,0.04); padding: 25px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.08);">
          <div style="font-size: 1.8rem; color: #f59e0b; margin-bottom: 12px;"><i class="fas fa-map-marked-alt"></i></div>
          <h3 style="color: #fff; font-size: 1.2rem; margin-bottom: 10px;">Live GPS Tracking</h3>
          <p style="color: #94a3b8; font-size: 0.95rem; line-height: 1.6;">Stay informed with 24/7 GPS location updates from Kozhikode pickup point to destination handover.</p>
        </div>
        <div style="background: rgba(255,255,255,0.04); padding: 25px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.08);">
          <div style="font-size: 1.8rem; color: #f59e0b; margin-bottom: 12px;"><i class="fas fa-file-invoice"></i></div>
          <h3 style="color: #fff; font-size: 1.2rem; margin-bottom: 10px;">IBA Approved Claim Bills</h3>
          <p style="color: #94a3b8; font-size: 0.95rem; line-height: 1.6;">100% valid GST bills, Lorry Receipts (LR), and vehicle inspection reports accepted by IT companies, public sector banks, and government departments.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 5: Service Breakdown -->
  <section class="service-breakdown" style="padding: 60px 0; background: #0b132b;">
    <div class="container">
      <h2 style="text-align: center; font-size: 2rem; color: #ffffff; margin-bottom: 40px; font-weight: 800;">
        Specialized Two-Wheeler Logistics Services in Mavoor
      </h2>
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 25px;">
        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(245,158,11,0.2); border-radius: 12px; padding: 25px;">
          <h3 style="color: #f59e0b; font-size: 1.2rem; margin-bottom: 10px;">Commuter Motorcycles</h3>
          <p style="color: #cbd5e1; font-size: 0.9rem; line-height: 1.6;">Cost-effective, secure shifting for Honda Shine, Hero Splendor, Bajaj Pulsar, TVS Apache, and Yamaha FZ with multi-tier bubble wrap.</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(245,158,11,0.2); border-radius: 12px; padding: 25px;">
          <h3 style="color: #f59e0b; font-size: 1.2rem; margin-bottom: 10px;">Cruisers & Royal Enfield</h3>
          <p style="color: #cbd5e1; font-size: 0.9rem; line-height: 1.6;">Expert handling for Royal Enfield Hunter 350, Classic, Bullet, Interceptor, and Jawa cruisers with heavy-duty ratchet belt harness.</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(245,158,11,0.2); border-radius: 12px; padding: 25px;">
          <h3 style="color: #f59e0b; font-size: 1.2rem; margin-bottom: 10px;">Scooters & Electric Vehicles</h3>
          <p style="color: #cbd5e1; font-size: 0.9rem; line-height: 1.6;">Moisture-sealed transport for Honda Activa, TVS Jupiter, Suzuki Access, Ola S1, Ather 450X, and EV scooters with battery protocol.</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(245,158,11,0.2); border-radius: 12px; padding: 25px;">
          <h3 style="color: #f59e0b; font-size: 1.2rem; margin-bottom: 10px;">IT & Government Job Relocations</h3>
          <p style="color: #cbd5e1; font-size: 0.9rem; line-height: 1.6;">Customized bike shifting solutions with IBA GST bills for techies and government staff moving from Mavoor/Kozhikode to Bangalore, Chennai, or Hyderabad.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 6: 7-Layer Packaging -->
  <section class="packaging-framework" style="padding: 60px 0; background: #1c2541;">
    <div class="container">
      <h2 style="text-align: center; font-size: 2rem; color: #ffffff; margin-bottom: 15px; font-weight: 800;">
        7-Layer Monsoon & Coastal Protective Packaging Framework
      </h2>
      <p style="text-align: center; color: #94a3b8; max-width: 700px; margin: 0 auto 40px auto; font-size: 0.95rem;">
        Engineered specifically for Kerala coastal climate to eliminate moisture ingress and highway shock.
      </p>
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 20px;">
        <div style="background: rgba(255,255,255,0.04); padding: 20px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #fff; margin-bottom: 5px;">Layer 1: Anti-Corrosion Film</h4>
          <p style="color: #94a3b8; font-size: 0.85rem;">Protective film guard preventing salt air humidity from tarnishing metal parts.</p>
        </div>
        <div style="background: rgba(255,255,255,0.04); padding: 20px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #fff; margin-bottom: 5px;">Layer 2: 80-GSM Air Bubble Wrap</h4>
          <p style="color: #94a3b8; font-size: 0.85rem;">Heavy-gauge air bubble cushion wrapped securely around fuel tank and side panels.</p>
        </div>
        <div style="background: rgba(255,255,255,0.04); padding: 20px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #fff; margin-bottom: 5px;">Layer 3: Corrugated Cardboard Armor</h4>
          <p style="color: #94a3b8; font-size: 0.85rem;">Pre-cut heavy corrugated sheets fitted over silencer, engine guards, and fairing.</p>
        </div>
        <div style="background: rgba(255,255,255,0.04); padding: 20px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #fff; margin-bottom: 5px;">Layer 4: Handlebar & Lever Foam</h4>
          <p style="color: #94a3b8; font-size: 0.85rem;">Dense EVA foam caps over brake levers, clutch assembly, and rear-view mirror mounts.</p>
        </div>
        <div style="background: rgba(255,255,255,0.04); padding: 20px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #fff; margin-bottom: 5px;">Layer 5: Waterproof Stretch Binding</h4>
          <p style="color: #94a3b8; font-size: 0.85rem;">Tightly wrapped heavy plastic film sealing all layers against Kerala monsoon water.</p>
        </div>
        <div style="background: rgba(255,255,255,0.04); padding: 20px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #fff; margin-bottom: 5px;">Layer 6: Rubber Wheel Chocks</h4>
          <p style="color: #94a3b8; font-size: 0.85rem;">Heavy rubber chocks locked around front and rear tires on truck floor.</p>
        </div>
        <div style="background: rgba(255,255,255,0.04); padding: 20px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #fff; margin-bottom: 5px;">Layer 7: Ratchet Strap Harness</h4>
          <p style="color: #94a3b8; font-size: 0.85rem;">Multi-point industrial nylon belt harness securing bike upright during travel.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 7 & 8: Localities & Routes -->
  <section class="coverage-network" style="padding: 60px 0; background: #0b132b;">
    <div class="container">
      <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 40px;">
        <div>
          <h3 style="color: #f59e0b; font-size: 1.4rem; margin-bottom: 20px; font-weight: 700;">Mavoor & Kozhikode Localities Covered</h3>
          <ul style="list-style: none; padding: 0; display: grid; grid-template-columns: 1fr 1fr; gap: 10px; color: #cbd5e1; font-size: 0.9rem;">
            <li style="padding: 8px; background: rgba(255,255,255,0.03); border-radius: 6px;"><i class="fas fa-check-circle" style="color: #f59e0b; margin-right: 6px;"></i> Mavoor Town</li>
            <li style="padding: 8px; background: rgba(255,255,255,0.03); border-radius: 6px;"><i class="fas fa-check-circle" style="color: #f59e0b; margin-right: 6px;"></i> Peruvayal Sector</li>
            <li style="padding: 8px; background: rgba(255,255,255,0.03); border-radius: 6px;"><i class="fas fa-check-circle" style="color: #f59e0b; margin-right: 6px;"></i> Cheruvatta Area</li>
            <li style="padding: 8px; background: rgba(255,255,255,0.03); border-radius: 6px;"><i class="fas fa-check-circle" style="color: #f59e0b; margin-right: 6px;"></i> Calicut Bypass Corridor</li>
            <li style="padding: 8px; background: rgba(255,255,255,0.03); border-radius: 6px;"><i class="fas fa-check-circle" style="color: #f59e0b; margin-right: 6px;"></i> Kunnamangalam Belt</li>
            <li style="padding: 8px; background: rgba(255,255,255,0.03); border-radius: 6px;"><i class="fas fa-check-circle" style="color: #f59e0b; margin-right: 6px;"></i> Medical College Junction</li>
          </ul>
        </div>
        <div>
          <h3 style="color: #f59e0b; font-size: 1.4rem; margin-bottom: 20px; font-weight: 700;">Popular Transport Routes from Mavoor</h3>
          <ul style="list-style: none; padding: 0; display: grid; grid-template-columns: 1fr 1fr; gap: 10px; color: #cbd5e1; font-size: 0.9rem;">
            <li style="padding: 8px; background: rgba(255,255,255,0.03); border-radius: 6px;"><i class="fas fa-arrow-right" style="color: #f59e0b; margin-right: 6px;"></i> Mavoor to Bangalore / Mysore</li>
            <li style="padding: 8px; background: rgba(255,255,255,0.03); border-radius: 6px;"><i class="fas fa-arrow-right" style="color: #f59e0b; margin-right: 6px;"></i> Mavoor to Chennai / Coimbatore</li>
            <li style="padding: 8px; background: rgba(255,255,255,0.03); border-radius: 6px;"><i class="fas fa-arrow-right" style="color: #f59e0b; margin-right: 6px;"></i> Mavoor to Ernakulam / Trivandrum</li>
            <li style="padding: 8px; background: rgba(255,255,255,0.03); border-radius: 6px;"><i class="fas fa-arrow-right" style="color: #f59e0b; margin-right: 6px;"></i> Mavoor to Mumbai / Pune</li>
            <li style="padding: 8px; background: rgba(255,255,255,0.03); border-radius: 6px;"><i class="fas fa-arrow-right" style="color: #f59e0b; margin-right: 6px;"></i> Mavoor to Hyderabad / Vizag</li>
            <li style="padding: 8px; background: rgba(255,255,255,0.03); border-radius: 6px;"><i class="fas fa-arrow-right" style="color: #f59e0b; margin-right: 6px;"></i> Mavoor to Delhi NCR / Jaipur</li>
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
        Relocating for IT company transfers or government job postings? We supply official IBA-approved bills, GST tax invoices, Consignment Notes (LR), and vehicle inspection reports required for hassle-free employer reimbursement.
      </p>
    </div>
  </section>

  <!-- Section 10: FAQ Schema -->
  <section class="faq-section" style="padding: 60px 0; background: #0b132b;">
    <div class="container">
      <h2 style="text-align: center; font-size: 2rem; color: #ffffff; margin-bottom: 40px; font-weight: 800;">
        Frequently Asked Questions — <span style="color: #f59e0b;">Bike Transport in Mavoor</span>
      </h2>
      <div style="max-width: 850px; margin: 0 auto; display: flex; flex-direction: column; gap: 15px;">
        <div style="background: rgba(255,255,255,0.03); padding: 20px; border-radius: 10px; border: 1px solid rgba(255,255,255,0.08);">
          <h4 style="color: #f59e0b; margin-bottom: 8px; font-size: 1.05rem;">Q: How much does bike transport cost from Mavoor (Kozhikode)?</h4>
          <p style="color: #cbd5e1; font-size: 0.9rem; line-height: 1.6;">Interstate bike shipping from Mavoor to Bangalore or Mysore ranges between ₹3,200–₹4,800, while long-distance routes to Mumbai, Delhi, or Hyderabad cost ₹5,200–₹9,800 depending on bike model and distance.</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); padding: 20px; border-radius: 10px; border: 1px solid rgba(255,255,255,0.08);">
          <h4 style="color: #f59e0b; margin-bottom: 8px; font-size: 1.05rem;">Q: Do you offer home pickup in Mavoor and Kozhikode suburbs?</h4>
          <p style="color: #cbd5e1; font-size: 0.9rem; line-height: 1.6;">Yes, we provide doorstep pickup from Mavoor, Peruvayal, Cheruvatta, Kunnamangalam, and all Kozhikode areas with complete pre-loading inspection documentation.</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); padding: 20px; border-radius: 10px; border: 1px solid rgba(255,255,255,0.08);">
          <h4 style="color: #f59e0b; margin-bottom: 8px; font-size: 1.05rem;">Q: What documents do I need to submit before bike dispatch?</h4>
          <p style="color: #cbd5e1; font-size: 0.9rem; line-height: 1.6;">You need to provide a copy of your bike Registration Certificate (RC), valid insurance document, owner photo ID proof (Aadhaar/PAN), and bike keys.</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); padding: 20px; border-radius: 10px; border: 1px solid rgba(255,255,255,0.08);">
          <h4 style="color: #f59e0b; margin-bottom: 8px; font-size: 1.05rem;">Q: How are bikes shielded from heavy rain during Kerala transit?</h4>
          <p style="color: #cbd5e1; font-size: 0.9rem; line-height: 1.6;">We wrap bikes in multi-tier waterproof stretch film over bubble padding and transport them exclusively inside covered weatherproof container trucks.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 11: CTA Footer -->
  <section class="cta-section" style="padding: 50px 0; background: linear-gradient(135deg, #1c2541 0%, #0b132b 100%); text-align: center; border-top: 1px solid rgba(245,158,11,0.3);">
    <div class="container">
      <h2 style="font-size: 2.2rem; color: #ffffff; margin-bottom: 15px; font-weight: 800;">
        Book Insured <span style="color: #f59e0b;">Bike Transportation in Mavoor</span> Today
      </h2>
      <p style="color: #cbd5e1; font-size: 1.05rem; margin-bottom: 30px;">
        Enjoy 100% insured, IBA-approved doorstep two-wheeler shifting from Kozhikode across India.
      </p>
      <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap;">
        <a href="tel:<?php echo SITE_PHONE_RAW; ?>" style="padding: 15px 35px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #fff; border-radius: 50px; font-weight: 700; text-decoration: none; font-size: 1.1rem; box-shadow: 0 4px 15px rgba(225,29,72,0.4);">
          <i class="fas fa-phone-alt"></i> Call <?php echo SITE_PHONE; ?>
        </a>
        <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20to%20book%20bike%20transport%20from%20Mavoor." target="_blank" style="padding: 15px 35px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #fff; border-radius: 50px; font-weight: 700; text-decoration: none; font-size: 1.1rem; box-shadow: 0 4px 15px rgba(16,185,129,0.4);">
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
      "name": "How much does bike transport cost from Mavoor (Kozhikode)?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Interstate bike shipping from Mavoor to Bangalore or Mysore ranges between ₹3,200–₹4,800, while long-distance routes to Mumbai, Delhi, or Hyderabad cost ₹5,200–₹9,800 depending on bike model and distance."
      }
    },
    {
      "@type": "Question",
      "name": "Do you offer home pickup in Mavoor and Kozhikode suburbs?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, we provide doorstep pickup from Mavoor, Peruvayal, Cheruvatta, Kunnamangalam, and all Kozhikode areas with complete pre-loading inspection documentation."
      }
    },
    {
      "@type": "Question",
      "name": "What documents do I need to submit before bike dispatch?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "You need to provide a copy of your bike Registration Certificate (RC), valid insurance document, owner photo ID proof (Aadhaar/PAN), and bike keys."
      }
    },
    {
      "@type": "Question",
      "name": "How are bikes shielded from heavy rain during Kerala transit?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "We wrap bikes in multi-tier waterproof stretch film over bubble padding and transport them exclusively inside covered weatherproof container trucks."
      }
    }
  ]
}
</script>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
