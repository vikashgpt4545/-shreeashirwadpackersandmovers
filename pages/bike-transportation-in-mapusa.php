<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "Bike Transportation in Mapusa | Secure Two-Wheeler Shifting Goa";
$page_desc = "Top-rated bike transportation in Mapusa (North Goa, Bardez taluka, NH66 Mumbai highway corridor, Calangute-Baga coastal region, Goa). Professional 7-layer bubble packaging, anti-salinity moisture barrier, enclosed container transport, doorstep pickup & delivery, and 100% transit insurance.";
$page_keywords = "bike transportation in mapusa, bike shifting services mapusa goa, two wheeler transport bardez nh66 panaji, motorcycle moving service mapusa, insured bike transport goa, shree ashirwad packers and movers";
$canonical_url = "https://shreeashirwadpackersandmovers.com/pages/bike-transportation-in-mapusa.php";

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
        <span class="breadcrumb-item active">Bike Transportation in Mapusa</span>
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
            Mapusa North Goa Two-Wheeler Shifting Experts
          </span>
          <h1 style="font-size: 2.5rem; font-weight: 800; line-height: 1.2; margin-bottom: 20px; color: #ffffff;">
            Reliable & Insured <span style="color: #f59e0b;">Bike Transportation in Mapusa</span>
          </h1>
          <p style="font-size: 1.05rem; color: #cbd5e1; line-height: 1.7; margin-bottom: 25px;">
            Transport your motorcycle, scooter, or cruiser safely from Mapusa (North Goa, Bardez taluka, Panaji-Mumbai highway NH66, Calangute, Anjuna, Baga coastal region, Goa) to anywhere across India. We offer 7-layer protective packaging with marine anti-salinity barrier, enclosed covered carriers, GPS tracking, and 100% transit insurance.
          </p>

          <div style="display: flex; gap: 15px; flex-wrap: wrap; margin-bottom: 30px;">
            <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Now" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
              <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call: <?php echo SITE_PHONE; ?>
            </a>
            <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20a%20bike%20transportation%20quote%20for%20Mapusa." title="Chat on WhatsApp" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
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
              <input type="text" name="move_from" class="form-control" value="Mapusa" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
              <input type="text" name="move_to" class="form-control" placeholder="Destination City" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="margin-bottom: 14px;">
              <input type="text" name="bike_model" class="form-control" placeholder="Bike Model (e.g., Royal Enfield, KTM, Activa)" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
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
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b;">5,200+</div>
          <div style="color: #cbd5e1; font-size: 0.9rem; margin-top: 5px;">Bikes Transported</div>
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
        Why Choose Shree Ashirwad for <span style="color: #f59e0b;">Bike Transport in Mapusa</span>
      </h2>
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 25px;">
        <div style="background: rgba(255,255,255,0.04); padding: 25px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.08);">
          <div style="font-size: 1.8rem; color: #f59e0b; margin-bottom: 12px;"><i class="fas fa-shield-alt"></i></div>
          <h3 style="color: #fff; font-size: 1.2rem; margin-bottom: 10px;">7-Layer Anti-Salinity Packaging</h3>
          <p style="color: #94a3b8; font-size: 0.95rem; line-height: 1.6;">Heavy-duty 80-GSM bubble wrap, corrugated sheets, waterproof anti-corrosion film, and wheel locking blocks to shield metal parts from coastal salt air.</p>
        </div>
        <div style="background: rgba(255,255,255,0.04); padding: 25px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.08);">
          <div style="font-size: 1.8rem; color: #f59e0b; margin-bottom: 12px;"><i class="fas fa-truck-moving"></i></div>
          <h3 style="color: #fff; font-size: 1.2rem; margin-bottom: 10px;">Enclosed Covered Carriers</h3>
          <p style="color: #94a3b8; font-size: 0.95rem; line-height: 1.6;">Weatherproof covered car & bike container trucks safeguard your two-wheeler from heavy Goa monsoons, sea spray, and highway dust during transit.</p>
        </div>
        <div style="background: rgba(255,255,255,0.04); padding: 25px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.08);">
          <div style="font-size: 1.8rem; color: #f59e0b; margin-bottom: 12px;"><i class="fas fa-door-open"></i></div>
          <h3 style="color: #fff; font-size: 1.2rem; margin-bottom: 10px;">Doorstep Pick & Drop</h3>
          <p style="color: #94a3b8; font-size: 0.95rem; line-height: 1.6;">Free home pickup across Mapusa city, Calangute, Baga, Anjuna, Porvorim, Panaji road, and direct delivery across India.</p>
        </div>
        <div style="background: rgba(255,255,255,0.04); padding: 25px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.08);">
          <div style="font-size: 1.8rem; color: #f59e0b; margin-bottom: 12px;"><i class="fas fa-file-invoice-dollar"></i></div>
          <h3 style="color: #fff; font-size: 1.2rem; margin-bottom: 10px;">100% Transit Insurance</h3>
          <p style="color: #94a3b8; font-size: 0.95rem; line-height: 1.6;">Full financial indemnification for your motorcycle or scooter with fast insurance claim assistance in case of unexpected events.</p>
        </div>
        <div style="background: rgba(255,255,255,0.04); padding: 25px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.08);">
          <div style="font-size: 1.8rem; color: #f59e0b; margin-bottom: 12px;"><i class="fas fa-map-marker-alt"></i></div>
          <h3 style="color: #fff; font-size: 1.2rem; margin-bottom: 10px;">Real-Time GPS Tracking</h3>
          <p style="color: #94a3b8; font-size: 0.95rem; line-height: 1.6;">Track your vehicle status 24/7 with dedicated customer support updates from pickup at Mapusa to destination delivery.</p>
        </div>
        <div style="background: rgba(255,255,255,0.04); padding: 25px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.08);">
          <div style="font-size: 1.8rem; color: #f59e0b; margin-bottom: 12px;"><i class="fas fa-building"></i></div>
          <h3 style="color: #fff; font-size: 1.2rem; margin-bottom: 10px;">IBA Approved Bills</h3>
          <p style="color: #94a3b8; font-size: 0.95rem; line-height: 1.6;">Official GST bills, consignment notes (LR), and vehicle inspection sheets accepted by defense personnel, government officers, and corporate employers.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 5: Service Breakdown -->
  <section class="service-breakdown" style="padding: 60px 0; background: #0b132b;">
    <div class="container">
      <h2 style="text-align: center; font-size: 2rem; color: #ffffff; margin-bottom: 40px; font-weight: 800;">
        Specialized Two-Wheeler Relocation Services in Mapusa
      </h2>
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 25px;">
        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(245,158,11,0.2); border-radius: 12px; padding: 25px;">
          <h3 style="color: #f59e0b; font-size: 1.2rem; margin-bottom: 10px;">Standard Commuter Bikes</h3>
          <p style="color: #cbd5e1; font-size: 0.9rem; line-height: 1.6;">Safe, budget-friendly transportation for Hero Splendor, Honda Shine, Bajaj Pulsar, TVS Apache, and Yamaha FZ with multi-layer wrap.</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(245,158,11,0.2); border-radius: 12px; padding: 25px;">
          <h3 style="color: #f59e0b; font-size: 1.2rem; margin-bottom: 10px;">Cruisers & Superbikes</h3>
          <p style="color: #cbd5e1; font-size: 0.9rem; line-height: 1.6;">Specialized handling for heavy Royal Enfield Bullet, Classic 350, Himalayan, Harley Davidson, Kawasaki, and sports bikes with custom tie-downs.</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(245,158,11,0.2); border-radius: 12px; padding: 25px;">
          <h3 style="color: #f59e0b; font-size: 1.2rem; margin-bottom: 10px;">Scooters & Tourist Rental Fleets</h3>
          <p style="color: #cbd5e1; font-size: 0.9rem; line-height: 1.6;">Protective shifting for Honda Activa, TVS Jupiter, Vespa, Ola S1, Ather, and EV scooters with battery safety measures.</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(245,158,11,0.2); border-radius: 12px; padding: 25px;">
          <h3 style="color: #f59e0b; font-size: 1.2rem; margin-bottom: 10px;">Defense & Govt Employee Shifting</h3>
          <p style="color: #cbd5e1; font-size: 0.9rem; line-height: 1.6;">Dedicated bike transport with official IBA claim bills for Army, Navy, Coast Guard personnel, and govt officers transferring from Goa.</p>
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
        Every vehicle loaded at Mapusa undergoes our multi-tier protective packing process to guarantee 100% damage-free transit.
      </p>
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 20px;">
        <div style="background: rgba(255,255,255,0.04); padding: 20px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #fff; margin-bottom: 5px;">Layer 1: Polythene Film</h4>
          <p style="color: #94a3b8; font-size: 0.85rem;">Waterproof stretch film to seal vehicle body paint from sea moisture and rain.</p>
        </div>
        <div style="background: rgba(255,255,255,0.04); padding: 20px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #fff; margin-bottom: 5px;">Layer 2: 80-GSM Bubble Wrap</h4>
          <p style="color: #94a3b8; font-size: 0.85rem;">High-density shock-absorbing bubble wrap around tank, mudguards, and engine.</p>
        </div>
        <div style="background: rgba(255,255,255,0.04); padding: 20px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #fff; margin-bottom: 5px;">Layer 3: Corrugated Sheets</h4>
          <p style="color: #94a3b8; font-size: 0.85rem;">Heavy corrugated sheets shielding side panels, silencer, and mirrors from impact.</p>
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
          <h3 style="color: #f59e0b; font-size: 1.4rem; margin-bottom: 20px; font-weight: 700;">Mapusa & North Goa Localities</h3>
          <ul style="list-style: none; padding: 0; display: grid; grid-template-columns: 1fr 1fr; gap: 10px; color: #cbd5e1; font-size: 0.9rem;">
            <li style="padding: 8px; background: rgba(255,255,255,0.03); border-radius: 6px;"><i class="fas fa-check-circle" style="color: #f59e0b; margin-right: 6px;"></i> Mapusa City Center</li>
            <li style="padding: 8px; background: rgba(255,255,255,0.03); border-radius: 6px;"><i class="fas fa-check-circle" style="color: #f59e0b; margin-right: 6px;"></i> Calangute / Baga</li>
            <li style="padding: 8px; background: rgba(255,255,255,0.03); border-radius: 6px;"><i class="fas fa-check-circle" style="color: #f59e0b; margin-right: 6px;"></i> Anjuna / Vagator</li>
            <li style="padding: 8px; background: rgba(255,255,255,0.03); border-radius: 6px;"><i class="fas fa-check-circle" style="color: #f59e0b; margin-right: 6px;"></i> Porvorim / Panaji Road</li>
            <li style="padding: 8px; background: rgba(255,255,255,0.03); border-radius: 6px;"><i class="fas fa-check-circle" style="color: #f59e0b; margin-right: 6px;"></i> Siolim / Pernem</li>
            <li style="padding: 8px; background: rgba(255,255,255,0.03); border-radius: 6px;"><i class="fas fa-check-circle" style="color: #f59e0b; margin-right: 6px;"></i> Thivim Railway Station</li>
          </ul>
        </div>
        <div>
          <h3 style="color: #f59e0b; font-size: 1.4rem; margin-bottom: 20px; font-weight: 700;">Popular Transport Routes from Mapusa</h3>
          <ul style="list-style: none; padding: 0; display: grid; grid-template-columns: 1fr 1fr; gap: 10px; color: #cbd5e1; font-size: 0.9rem;">
            <li style="padding: 8px; background: rgba(255,255,255,0.03); border-radius: 6px;"><i class="fas fa-arrow-right" style="color: #f59e0b; margin-right: 6px;"></i> Mapusa to Mumbai / Pune</li>
            <li style="padding: 8px; background: rgba(255,255,255,0.03); border-radius: 6px;"><i class="fas fa-arrow-right" style="color: #f59e0b; margin-right: 6px;"></i> Mapusa to Bangalore</li>
            <li style="padding: 8px; background: rgba(255,255,255,0.03); border-radius: 6px;"><i class="fas fa-arrow-right" style="color: #f59e0b; margin-right: 6px;"></i> Mapusa to Delhi NCR</li>
            <li style="padding: 8px; background: rgba(255,255,255,0.03); border-radius: 6px;"><i class="fas fa-arrow-right" style="color: #f59e0b; margin-right: 6px;"></i> Mapusa to Hyderabad</li>
            <li style="padding: 8px; background: rgba(255,255,255,0.03); border-radius: 6px;"><i class="fas fa-arrow-right" style="color: #f59e0b; margin-right: 6px;"></i> Mapusa to Ahmedabad / Surat</li>
            <li style="padding: 8px; background: rgba(255,255,255,0.03); border-radius: 6px;"><i class="fas fa-arrow-right" style="color: #f59e0b; margin-right: 6px;"></i> Mapusa to Kolkata</li>
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
        Moving for job transfer or defense relocation? We provide official IBA-approved bills, GST invoices, Lorry Receipts (LR), and pre/post vehicle inspection sheets required for 100% employer reimbursement.
      </p>
    </div>
  </section>

  <!-- Section 10: FAQ Schema -->
  <section class="faq-section" style="padding: 60px 0; background: #0b132b;">
    <div class="container">
      <h2 style="text-align: center; font-size: 2rem; color: #ffffff; margin-bottom: 40px; font-weight: 800;">
        Frequently Asked Questions — <span style="color: #f59e0b;">Bike Transport in Mapusa</span>
      </h2>
      <div style="max-width: 850px; margin: 0 auto; display: flex; flex-direction: column; gap: 15px;">
        <div style="background: rgba(255,255,255,0.03); padding: 20px; border-radius: 10px; border: 1px solid rgba(255,255,255,0.08);">
          <h4 style="color: #f59e0b; margin-bottom: 8px; font-size: 1.05rem;">Q: How much does bike transport cost from Mapusa Goa?</h4>
          <p style="color: #cbd5e1; font-size: 0.9rem; line-height: 1.6;">Bike shifting rates from Mapusa depend on destination distance and vehicle size. Moves to Mumbai or Pune start around ₹2,500–₹4,200, while long-distance transport to Bangalore, Delhi, or Hyderabad ranges between ₹4,500–₹9,500 with full packing and transit insurance.</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); padding: 20px; border-radius: 10px; border: 1px solid rgba(255,255,255,0.08);">
          <h4 style="color: #f59e0b; margin-bottom: 8px; font-size: 1.05rem;">Q: Do you pick up bikes directly from coastal areas near Mapusa?</h4>
          <p style="color: #cbd5e1; font-size: 0.9rem; line-height: 1.6;">Yes, our local North Goa team provides direct doorstep pickup from Mapusa town, Calangute, Baga, Anjuna, Vagator, Porvorim, and Siolim, along with door delivery at your destination.</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); padding: 20px; border-radius: 10px; border: 1px solid rgba(255,255,255,0.08);">
          <h4 style="color: #f59e0b; margin-bottom: 8px; font-size: 1.05rem;">Q: What documents are required for bike shifting from Goa?</h4>
          <p style="color: #cbd5e1; font-size: 0.9rem; line-height: 1.6;">You need a copy of the bike RC (Registration Certificate), active Insurance policy copy, owner's Govt ID proof (Aadhaar/PAN/Defense ID), and bike keys at pickup.</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); padding: 20px; border-radius: 10px; border: 1px solid rgba(255,255,255,0.08);">
          <h4 style="color: #f59e0b; margin-bottom: 8px; font-size: 1.05rem;">Q: How is my bike protected against sea air rust during transport from Goa?</h4>
          <p style="color: #cbd5e1; font-size: 0.9rem; line-height: 1.6;">We apply 7-layer packaging including anti-corrosion polythene film, 80-GSM bubble wrap, corrugated cardboard, stretch film, and transport it inside enclosed container trucks.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 11: CTA Footer -->
  <section class="cta-section" style="padding: 50px 0; background: linear-gradient(135deg, #1c2541 0%, #0b132b 100%); text-align: center; border-top: 1px solid rgba(245,158,11,0.3);">
    <div class="container">
      <h2 style="font-size: 2.2rem; color: #ffffff; margin-bottom: 15px; font-weight: 800;">
        Book Safe <span style="color: #f59e0b;">Bike Transportation in Mapusa</span> Today
      </h2>
      <p style="color: #cbd5e1; font-size: 1.05rem; margin-bottom: 30px;">
        Get 100% insured, IBA-approved doorstep two-wheeler shifting across India.
      </p>
      <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap;">
        <a href="tel:<?php echo SITE_PHONE_RAW; ?>" style="padding: 15px 35px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #fff; border-radius: 50px; font-weight: 700; text-decoration: none; font-size: 1.1rem; box-shadow: 0 4px 15px rgba(225,29,72,0.4);">
          <i class="fas fa-phone-alt"></i> Call <?php echo SITE_PHONE; ?>
        </a>
        <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20to%20book%20bike%20transport%20from%20Mapusa." target="_blank" style="padding: 15px 35px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #fff; border-radius: 50px; font-weight: 700; text-decoration: none; font-size: 1.1rem; box-shadow: 0 4px 15px rgba(16,185,129,0.4);">
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
      "name": "How much does bike transport cost from Mapusa Goa?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Bike shifting rates from Mapusa depend on destination distance and vehicle size. Moves to Mumbai or Pune start around ₹2,500–₹4,200, while long-distance transport to Bangalore, Delhi, or Hyderabad ranges between ₹4,500–₹9,500 with full packing and transit insurance."
      }
    },
    {
      "@type": "Question",
      "name": "Do you pick up bikes directly from coastal areas near Mapusa?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, our local North Goa team provides direct doorstep pickup from Mapusa town, Calangute, Baga, Anjuna, Vagator, Porvorim, and Siolim, along with door delivery at your destination."
      }
    },
    {
      "@type": "Question",
      "name": "What documents are required for bike shifting from Goa?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "You need a copy of the bike RC (Registration Certificate), active Insurance policy copy, owner's Govt ID proof (Aadhaar/PAN/Defense ID), and bike keys at pickup."
      }
    },
    {
      "@type": "Question",
      "name": "How is my bike protected against sea air rust during transport from Goa?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "We apply 7-layer packaging including anti-corrosion polythene film, 80-GSM bubble wrap, corrugated cardboard, stretch film, and transport it inside enclosed container trucks."
      }
    }
  ]
}
</script>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
