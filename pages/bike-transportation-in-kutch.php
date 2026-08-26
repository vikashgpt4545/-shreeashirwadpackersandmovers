<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "Bike Transportation in Kutch | Safe & Insured Shifting Gujarat";
$page_desc = "Top-rated bike transportation in Kutch (Bhuj, Gandhidham, Mundra), Gujarat. Professional 7-layer bubble packaging, enclosed carrier transport, doorstep pickup/delivery, and full transit insurance.";
$page_keywords = "bike transportation in kutch, bike shifting services kutch bhuj, two wheeler transport gandhidham kutch, motorcycle moving service mundra, insured bike transport gujarat, shree ashirwad packers and movers";
$canonical_url = "https://shreeashirwadpackersandmovers.com/pages/bike-transportation-in-kutch.php";

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
        <span class="breadcrumb-item active">Bike Transportation in Kutch</span>
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
            Kutch Two-Wheeler Shifting Experts
          </span>
          <h1 style="font-size: 2.5rem; font-weight: 800; line-height: 1.2; margin-bottom: 20px; color: #ffffff;">
            Reliable & Insured <span style="color: #f59e0b;">Bike Transportation in Kutch</span>
          </h1>
          <p style="font-size: 1.05rem; color: #cbd5e1; line-height: 1.7; margin-bottom: 25px;">
            Transport your motorcycle or scooter safely from Kutch (Bhuj, Gandhidham, Mundra, Anjar) to anywhere across India. We offer 7-layer protective packaging, enclosed covered carriers, GPS tracking, and 100% transit insurance.
          </p>

          <div style="display: flex; gap: 15px; flex-wrap: wrap; margin-bottom: 30px;">
            <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Now" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
              <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call: <?php echo SITE_PHONE; ?>
            </a>
            <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20a%20bike%20transportation%20quote%20for%20Kutch." title="Chat on WhatsApp" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
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
              <input type="text" name="move_from" class="form-control" value="Kutch" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
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
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b;">6,400+</div>
          <div style="color: #cbd5e1; font-size: 0.9rem; margin-top: 5px;">Bikes Transported</div>
        </div>
        <div style="padding: 20px; background: rgba(255,255,255,0.03); border-radius: 12px; border: 1px solid rgba(245,158,11,0.2);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b;">99.9%</div>
          <div style="color: #cbd5e1; font-size: 0.9rem; margin-top: 5px;">Damage-Free Ratio</div>
        </div>
        <div style="padding: 20px; background: rgba(255,255,255,0.03); border-radius: 12px; border: 1px solid rgba(245,158,11,0.2);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b;">100%</div>
          <div style="color: #cbd5e1; font-size: 0.9rem; margin-top: 5px;">IBA-Compliant Invoice</div>
        </div>
        <div style="padding: 20px; background: rgba(255,255,255,0.03); border-radius: 12px; border: 1px solid rgba(245,158,11,0.2);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b;">24/7</div>
          <div style="color: #cbd5e1; font-size: 0.9rem; margin-top: 5px;">GPS Tracking Support</div>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 4: 6-Feature Grid -->
  <section class="features-grid-section" style="background: #1c2541; padding: 60px 0; color: #ffffff;">
    <div class="container">
      <div style="text-align: center; max-width: 700px; margin: 0 auto 45px;">
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff;">Why Choose Our <span style="color: #f59e0b;">Kutch Bike Transport</span>?</h2>
        <p style="color: #94a3b8; font-size: 1rem; margin-top: 10px;">We take extreme care in handling every vehicle with professional packaging and dedicated covered transportation.</p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px;">
        <div style="background: rgba(255,255,255,0.04); padding: 30px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.1);">
          <i class="fas fa-layer-group" style="font-size: 2.2rem; color: #f59e0b; margin-bottom: 15px;"></i>
          <h3 style="font-size: 1.25rem; font-weight: 700; margin-bottom: 10px; color: #ffffff;">7-Layer Security Packing</h3>
          <p style="color: #cbd5e1; font-size: 0.92rem; line-height: 1.6;">High-density foam, heavy bubble wrap, corrugated sheets, and film wrap prevent scratches and transit dents.</p>
        </div>

        <div style="background: rgba(255,255,255,0.04); padding: 30px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.1);">
          <i class="fas fa-truck" style="font-size: 2.2rem; color: #f59e0b; margin-bottom: 15px;"></i>
          <h3 style="font-size: 1.25rem; font-weight: 700; margin-bottom: 10px; color: #ffffff;">Covered Vehicle Carriers</h3>
          <p style="color: #cbd5e1; font-size: 0.92rem; line-height: 1.6;">Weather-proof enclosed transport trucks safeguard your bike from rain, dust, and environmental exposure.</p>
        </div>

        <div style="background: rgba(255,255,255,0.04); padding: 30px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.1);">
          <i class="fas fa-home" style="font-size: 2.2rem; color: #f59e0b; margin-bottom: 15px;"></i>
          <h3 style="font-size: 1.25rem; font-weight: 700; margin-bottom: 10px; color: #ffffff;">Doorstep Pick & Delivery</h3>
          <p style="color: #cbd5e1; font-size: 0.92rem; line-height: 1.6;">Hassle-free doorstep pickup from Bhuj, Gandhidham, Mundra, Anjar, and direct delivery across India.</p>
        </div>

        <div style="background: rgba(255,255,255,0.04); padding: 30px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.1);">
          <i class="fas fa-shield-alt" style="font-size: 2.2rem; color: #f59e0b; margin-bottom: 15px;"></i>
          <h3 style="font-size: 1.25rem; font-weight: 700; margin-bottom: 10px; color: #ffffff;">Full Transit Insurance</h3>
          <p style="color: #cbd5e1; font-size: 0.92rem; line-height: 1.6;">Comprehensive transit insurance covering unforeseen road risks, providing complete peace of mind.</p>
        </div>

        <div style="background: rgba(255,255,255,0.04); padding: 30px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.1);">
          <i class="fas fa-map-marker-alt" style="font-size: 2.2rem; color: #f59e0b; margin-bottom: 15px;"></i>
          <h3 style="font-size: 1.25rem; font-weight: 700; margin-bottom: 10px; color: #ffffff;">Live GPS Updates</h3>
          <p style="color: #cbd5e1; font-size: 0.92rem; line-height: 1.6;">Stay connected with real-time location tracking updates throughout the entire journey of your vehicle.</p>
        </div>

        <div style="background: rgba(255,255,255,0.04); padding: 30px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.1);">
          <i class="fas fa-file-invoice" style="font-size: 2.2rem; color: #f59e0b; margin-bottom: 15px;"></i>
          <h3 style="font-size: 1.25rem; font-weight: 700; margin-bottom: 10px; color: #ffffff;">IBA Approved Bills</h3>
          <p style="color: #cbd5e1; font-size: 0.92rem; line-height: 1.6;">Official GST bills and consignment notes compatible with corporate and government reimbursement policies.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 5: Services Breakdown -->
  <section class="services-breakdown" style="background: #0b132b; padding: 60px 0; color: #ffffff;">
    <div class="container">
      <div style="max-width: 800px; margin: 0 auto 40px; text-align: center;">
        <h2 style="font-size: 2.2rem; font-weight: 800;">Specialized Two-Wheeler Shifting Options</h2>
        <p style="color: #94a3b8; margin-top: 10px;">Tailored logistics solutions for every type of two-wheeler in Kutch region.</p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 25px;">
        <div style="border: 1px solid rgba(245,158,11,0.3); border-radius: 12px; padding: 25px; background: rgba(255,255,255,0.02);">
          <h3 style="color: #f59e0b; font-size: 1.2rem; font-weight: 700; margin-bottom: 12px;">Standard Commuter Bikes</h3>
          <p style="color: #cbd5e1; font-size: 0.9rem; line-height: 1.6;">Economical yet secure shifting for 100cc-150cc motorcycles with complete protective padding and fast transit.</p>
        </div>

        <div style="border: 1px solid rgba(245,158,11,0.3); border-radius: 12px; padding: 25px; background: rgba(255,255,255,0.02);">
          <h3 style="color: #f59e0b; font-size: 1.2rem; font-weight: 700; margin-bottom: 12px;">Premium & Sports Bikes</h3>
          <p style="color: #cbd5e1; font-size: 0.9rem; line-height: 1.6;">Specialized handling for Royal Enfield, KTM, BMW, and sports bikes using customized wheel locks and extra padding.</p>
        </div>

        <div style="border: 1px solid rgba(245,158,11,0.3); border-radius: 12px; padding: 25px; background: rgba(255,255,255,0.02);">
          <h3 style="color: #f59e0b; font-size: 1.2rem; font-weight: 700; margin-bottom: 12px;">Scooters & Scooty</h3>
          <p style="color: #cbd5e1; font-size: 0.9rem; line-height: 1.6;">Safe packing and transport for Honda Activa, Vespa, Jupiter, and EV scooters with body shell protection.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 6: 7-Layer Safety Packaging -->
  <section class="packaging-section" style="background: #1c2541; padding: 60px 0; color: #ffffff;">
    <div class="container">
      <div style="text-align: center; max-width: 700px; margin: 0 auto 40px;">
        <h2 style="font-size: 2.2rem; font-weight: 800;">7-Layer Safety Packaging Protocol</h2>
        <p style="color: #94a3b8; margin-top: 10px;">Our proven packaging technique guarantees maximum protection against road vibrations and shocks.</p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 20px;">
        <div style="background: rgba(255,255,255,0.03); padding: 20px; border-radius: 10px; text-align: center; border-top: 3px solid #f59e0b;">
          <h4 style="color: #f59e0b; margin-bottom: 8px;">Layer 1</h4>
          <p style="color: #cbd5e1; font-size: 0.88rem;">Soft Stretch Film to prevent dust and surface friction</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); padding: 20px; border-radius: 10px; text-align: center; border-top: 3px solid #f59e0b;">
          <h4 style="color: #f59e0b; margin-bottom: 8px;">Layer 2</h4>
          <p style="color: #cbd5e1; font-size: 0.88rem;">High-Density Foam Guard for delicate body panels</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); padding: 20px; border-radius: 10px; text-align: center; border-top: 3px solid #f59e0b;">
          <h4 style="color: #f59e0b; margin-bottom: 8px;">Layer 3</h4>
          <p style="color: #cbd5e1; font-size: 0.88rem;">Heavy-Duty Air Bubble Wrap for shock absorption</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); padding: 20px; border-radius: 10px; text-align: center; border-top: 3px solid #f59e0b;">
          <h4 style="color: #f59e0b; margin-bottom: 8px;">Layer 4</h4>
          <p style="color: #cbd5e1; font-size: 0.88rem;">Corrugated Fiber Sheets for structural rigidity</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); padding: 20px; border-radius: 10px; text-align: center; border-top: 3px solid #f59e0b;">
          <h4 style="color: #f59e0b; margin-bottom: 8px;">Layer 5</h4>
          <p style="color: #cbd5e1; font-size: 0.88rem;">Corner & Edge Protectors for vulnerable parts</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); padding: 20px; border-radius: 10px; text-align: center; border-top: 3px solid #f59e0b;">
          <h4 style="color: #f59e0b; margin-bottom: 8px;">Layer 6</h4>
          <p style="color: #cbd5e1; font-size: 0.88rem;">Waterproof Lamination Outer Wrapping</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); padding: 20px; border-radius: 10px; text-align: center; border-top: 3px solid #f59e0b;">
          <h4 style="color: #f59e0b; margin-bottom: 8px;">Layer 7</h4>
          <p style="color: #cbd5e1; font-size: 0.88rem;">Heavy-Duty Belt Tying & Wheel Chock Anchoring</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 7: Localities Grid -->
  <section class="localities-section" style="background: #0b132b; padding: 60px 0; color: #ffffff;">
    <div class="container">
      <div style="text-align: center; max-width: 700px; margin: 0 auto 35px;">
        <h2 style="font-size: 2rem; font-weight: 800;">Key Towns Served Across Kutch District</h2>
        <p style="color: #94a3b8; font-size: 0.95rem; margin-top: 8px;">Doorstep bike pickup and delivery available across all major industrial and residential hubs in Kutch.</p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(200px, 1fr)); gap: 15px; text-align: center;">
        <div style="background: rgba(255,255,255,0.03); padding: 15px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.08); color: #cbd5e1;">Bhuj Town</div>
        <div style="background: rgba(255,255,255,0.03); padding: 15px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.08); color: #cbd5e1;">Gandhidham</div>
        <div style="background: rgba(255,255,255,0.03); padding: 15px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.08); color: #cbd5e1;">Anjar</div>
        <div style="background: rgba(255,255,255,0.03); padding: 15px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.08); color: #cbd5e1;">Mundra Port Area</div>
        <div style="background: rgba(255,255,255,0.03); padding: 15px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.08); color: #cbd5e1;">Mandvi</div>
        <div style="background: rgba(255,255,255,0.03); padding: 15px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.08); color: #cbd5e1;">Kandla</div>
        <div style="background: rgba(255,255,255,0.03); padding: 15px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.08); color: #cbd5e1;">Adipur</div>
        <div style="background: rgba(255,255,255,0.03); padding: 15px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.08); color: #cbd5e1;">Bhachau</div>
        <div style="background: rgba(255,255,255,0.03); padding: 15px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.08); color: #cbd5e1;">Rapar</div>
        <div style="background: rgba(255,255,255,0.03); padding: 15px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.08); color: #cbd5e1;">Nakhatrana</div>
      </div>
    </div>
  </section>

  <!-- Section 8: Intercity Routes -->
  <section class="routes-section" style="background: #1c2541; padding: 60px 0; color: #ffffff;">
    <div class="container">
      <div style="text-align: center; max-width: 700px; margin: 0 auto 35px;">
        <h2 style="font-size: 2rem; font-weight: 800;">Popular Bike Transport Routes from Kutch</h2>
        <p style="color: #94a3b8; font-size: 0.95rem; margin-top: 8px;">Seamless intercity vehicle dispatch connecting Kutch to major cities across Gujarat and India.</p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 20px;">
        <div style="background: rgba(255,255,255,0.03); padding: 20px; border-radius: 10px; border: 1px solid rgba(245,158,11,0.2);">
          <strong style="color: #f59e0b;">Kutch to Ahmedabad</strong>
          <p style="color: #94a3b8; font-size: 0.88rem; margin-top: 5px;">Daily direct container shuttle (1-2 days)</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); padding: 20px; border-radius: 10px; border: 1px solid rgba(245,158,11,0.2);">
          <strong style="color: #f59e0b;">Kutch to Mumbai / Pune</strong>
          <p style="color: #94a3b8; font-size: 0.88rem; margin-top: 5px;">Express door-to-door delivery (2-3 days)</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); padding: 20px; border-radius: 10px; border: 1px solid rgba(245,158,11,0.2);">
          <strong style="color: #f59e0b;">Kutch to Jaipur / Delhi NCR</strong>
          <p style="color: #94a3b8; font-size: 0.88rem; margin-top: 5px;">Insured covered carrier transport (3-5 days)</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); padding: 20px; border-radius: 10px; border: 1px solid rgba(245,158,11,0.2);">
          <strong style="color: #f59e0b;">Kutch to Surat / Vadodara</strong>
          <p style="color: #94a3b8; font-size: 0.88rem; margin-top: 5px;">Fast intra-state transport (1-2 days)</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); padding: 20px; border-radius: 10px; border: 1px solid rgba(245,158,11,0.2);">
          <strong style="color: #f59e0b;">Kutch to Bangalore / Hyderabad</strong>
          <p style="color: #94a3b8; font-size: 0.88rem; margin-top: 5px;">Long-distance covered container transit (4-6 days)</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); padding: 20px; border-radius: 10px; border: 1px solid rgba(245,158,11,0.2);">
          <strong style="color: #f59e0b;">Kutch to Rajkot / Jamnagar</strong>
          <p style="color: #94a3b8; font-size: 0.88rem; margin-top: 5px;">Saurashtra regional quick delivery (24 hours)</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 9: IBA-Compliant Billing & Documentation -->
  <section class="docs-section" style="background: #0b132b; padding: 60px 0; color: #ffffff;">
    <div class="container">
      <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 40px; align-items: center;">
        <div>
          <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin-bottom: 20px;">IBA-Approved Billing & Paperwork</h2>
          <p style="color: #cbd5e1; line-height: 1.7; margin-bottom: 15px;">
            We provide official, 100% compliant documentation required for claim reimbursements from central/state government departments, port authorities, IT firms, and corporate organizations.
          </p>
          <ul style="color: #cbd5e1; line-height: 2; padding-left: 20px;">
            <li><strong style="color: #f59e0b;">GST Tax Invoice:</strong> Official bill with valid GSTIN breakdown.</li>
            <li><strong style="color: #f59e0b;">Consignment Note (LR Copy):</strong> Standardized Lorry Receipt for transit proof.</li>
            <li><strong style="color: #f59e0b;">Vehicle Condition Report:</strong> Pre-transport inspection checklist detailing vehicle state.</li>
            <li><strong style="color: #f59e0b;">Transit Insurance Policy:</strong> Insurance policy document covering vehicle value.</li>
          </ul>
        </div>
        <div style="background: rgba(255,255,255,0.03); padding: 35px; border-radius: 16px; border: 1px solid rgba(245,158,11,0.3);">
          <h3 style="color: #f59e0b; font-size: 1.4rem; font-weight: 700; margin-bottom: 15px;">Mandatory Documents Required for Booking</h3>
          <ol style="color: #cbd5e1; line-height: 1.9; padding-left: 20px;">
            <li>Registration Certificate (RC) Copy</li>
            <li>Valid Vehicle Insurance Copy</li>
            <li>Owner's Government ID Proof (Aadhaar / Driving License / PAN)</li>
            <li>Pollution Under Control (PUC) Certificate Copy</li>
          </ol>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 10: 10-Item FAQ Section with Schema -->
  <section class="faq-section" style="background: #1c2541; padding: 60px 0; color: #ffffff;">
    <div class="container">
      <div style="text-align: center; max-width: 700px; margin: 0 auto 40px;">
        <h2 style="font-size: 2.2rem; font-weight: 800;">Frequently Asked Questions</h2>
        <p style="color: #94a3b8; margin-top: 10px;">Everything you need to know about bike shifting in Kutch.</p>
      </div>

      <div style="max-width: 900px; margin: 0 auto; display: grid; gap: 15px;">
        <details style="background: rgba(255,255,255,0.04); padding: 18px 24px; border-radius: 10px; border: 1px solid rgba(255,255,255,0.1); cursor: pointer;">
          <summary style="font-size: 1.05rem; font-weight: 700; color: #f59e0b;">How much does bike transportation from Kutch cost?</summary>
          <p style="color: #cbd5e1; margin-top: 12px; font-size: 0.95rem; line-height: 1.6;">Bike transportation rates depend on vehicle model, transport distance, and packaging tier. Regional shifting within Gujarat costs ₹2,000 – ₹4,000, while interstate transport (to Mumbai, Delhi, Bangalore) ranges from ₹4,500 – ₹9,500.</p>
        </details>

        <details style="background: rgba(255,255,255,0.04); padding: 18px 24px; border-radius: 10px; border: 1px solid rgba(255,255,255,0.1); cursor: pointer;">
          <summary style="font-size: 1.05rem; font-weight: 700; color: #f59e0b;">Do you offer doorstep pickup from Bhuj, Gandhidham, and Mundra?</summary>
          <p style="color: #cbd5e1; margin-top: 12px; font-size: 0.95rem; line-height: 1.6;">Yes, we provide doorstep pickup from all major towns in Kutch including Bhuj, Gandhidham, Mundra, Anjar, Mandvi, and Kandla, delivering directly to your destination city.</p>
        </details>

        <details style="background: rgba(255,255,255,0.04); padding: 18px 24px; border-radius: 10px; border: 1px solid rgba(255,255,255,0.1); cursor: pointer;">
          <summary style="font-size: 1.05rem; font-weight: 700; color: #f59e0b;">How is my bike protected against weather and dust during transit?</summary>
          <p style="color: #cbd5e1; margin-top: 12px; font-size: 0.95rem; line-height: 1.6;">We apply 7-layer protective packaging (foam, bubble wrap, corrugated sheets, stretch lamination) and transport vehicles inside enclosed, weather-proof container trucks.</p>
        </details>

        <details style="background: rgba(255,255,255,0.04); padding: 18px 24px; border-radius: 10px; border: 1px solid rgba(255,255,255,0.1); cursor: pointer;">
          <summary style="font-size: 1.05rem; font-weight: 700; color: #f59e0b;">How long does bike transport from Kutch take?</summary>
          <p style="color: #cbd5e1; margin-top: 12px; font-size: 0.95rem; line-height: 1.6;">Transit within Gujarat takes 1-2 days. Deliveries to Mumbai/Pune take 2-3 days, while shipments to Delhi or South India take 3-6 days.</p>
        </details>

        <details style="background: rgba(255,255,255,0.04); padding: 18px 24px; border-radius: 10px; border: 1px solid rgba(255,255,255,0.1); cursor: pointer;">
          <summary style="font-size: 1.05rem; font-weight: 700; color: #f59e0b;">Is transit insurance included in the quote?</summary>
          <p style="color: #cbd5e1; margin-top: 12px; font-size: 0.95rem; line-height: 1.6;">Yes, we offer comprehensive transit insurance policy coverage based on declared market value for full financial protection.</p>
        </details>

        <details style="background: rgba(255,255,255,0.04); padding: 18px 24px; border-radius: 10px; border: 1px solid rgba(255,255,255,0.1); cursor: pointer;">
          <summary style="font-size: 1.05rem; font-weight: 700; color: #f59e0b;">What documents must I provide for bike shifting?</summary>
          <p style="color: #cbd5e1; margin-top: 12px; font-size: 0.95rem; line-height: 1.6;">We require copies of the Registration Certificate (RC), valid insurance document, owner ID (Aadhaar or Driving License), and PUC certificate.</p>
        </details>

        <details style="background: rgba(255,255,255,0.04); padding: 18px 24px; border-radius: 10px; border: 1px solid rgba(255,255,255,0.1); cursor: pointer;">
          <summary style="font-size: 1.05rem; font-weight: 700; color: #f59e0b;">Should the fuel tank be emptied before loading?</summary>
          <p style="color: #cbd5e1; margin-top: 12px; font-size: 0.95rem; line-height: 1.6;">Yes, fuel levels should be kept under 1-2 liters to ensure transport safety regulations are met during transit.</p>
        </details>

        <details style="background: rgba(255,255,255,0.04); padding: 18px 24px; border-radius: 10px; border: 1px solid rgba(255,255,255,0.1); cursor: pointer;">
          <summary style="font-size: 1.05rem; font-weight: 700; color: #f59e0b;">Can you transport heavy cruisers and sports bikes safely?</summary>
          <p style="color: #cbd5e1; margin-top: 12px; font-size: 0.95rem; line-height: 1.6;">Yes, we specialize in high-displacement motorcycles such as Royal Enfield, Harley-Davidson, KTM, and Kawasaki using dedicated tie-down straps and wheel chocks.</p>
        </details>

        <details style="background: rgba(255,255,255,0.04); padding: 18px 24px; border-radius: 10px; border: 1px solid rgba(255,255,255,0.1); cursor: pointer;">
          <summary style="font-size: 1.05rem; font-weight: 700; color: #f59e0b;">Do you issue official GST bills for company relocation claims?</summary>
          <p style="color: #cbd5e1; margin-top: 12px; font-size: 0.95rem; line-height: 1.6;">Yes, we issue IBA-compliant GST tax invoices and consignment receipts valid for corporate and government reimbursement claims.</p>
        </details>

        <details style="background: rgba(255,255,255,0.04); padding: 18px 24px; border-radius: 10px; border: 1px solid rgba(255,255,255,0.1); cursor: pointer;">
          <summary style="font-size: 1.05rem; font-weight: 700; color: #f59e0b;">How can I track my vehicle status during transit?</summary>
          <p style="color: #cbd5e1; margin-top: 12px; font-size: 0.95rem; line-height: 1.6;">We provide live tracking updates on WhatsApp and phone support through dedicated logistics coordinators.</p>
        </details>
      </div>
    </div>
  </section>

  <!-- FAQ Schema JSON-LD -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "mainEntity": [
      {
        "@type": "Question",
        "name": "How much does bike transportation from Kutch cost?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Bike transportation rates depend on vehicle model, transport distance, and packaging tier. Regional shifting within Gujarat costs ₹2,000 – ₹4,000, while interstate transport (to Mumbai, Delhi, Bangalore) ranges from ₹4,500 – ₹9,500."
        }
      },
      {
        "@type": "Question",
        "name": "Do you offer doorstep pickup from Bhuj, Gandhidham, and Mundra?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Yes, we provide doorstep pickup from all major towns in Kutch including Bhuj, Gandhidham, Mundra, Anjar, Mandvi, and Kandla, delivering directly to your destination city."
        }
      },
      {
        "@type": "Question",
        "name": "How is my bike protected against weather and dust during transit?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "We apply 7-layer protective packaging (foam, bubble wrap, corrugated sheets, stretch lamination) and transport vehicles inside enclosed, weather-proof container trucks."
        }
      },
      {
        "@type": "Question",
        "name": "How long does bike transport from Kutch take?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Transit within Gujarat takes 1-2 days. Deliveries to Mumbai/Pune take 2-3 days, while shipments to Delhi or South India take 3-6 days."
        }
      },
      {
        "@type": "Question",
        "name": "Is transit insurance included in the quote?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Yes, we offer comprehensive transit insurance policy coverage based on declared market value for full financial protection."
        }
      },
      {
        "@type": "Question",
        "name": "What documents must I provide for bike shifting?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "We require copies of the Registration Certificate (RC), valid insurance document, owner ID (Aadhaar or Driving License), and PUC certificate."
        }
      },
      {
        "@type": "Question",
        "name": "Should the fuel tank be emptied before loading?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Yes, fuel levels should be kept under 1-2 liters to ensure transport safety regulations are met during transit."
        }
      },
      {
        "@type": "Question",
        "name": "Can you transport heavy cruisers and sports bikes safely?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Yes, we specialize in high-displacement motorcycles such as Royal Enfield, Harley-Davidson, KTM, and Kawasaki using dedicated tie-down straps and wheel chocks."
        }
      },
      {
        "@type": "Question",
        "name": "Do you issue official GST bills for company relocation claims?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Yes, we issue IBA-compliant GST tax invoices and consignment receipts valid for corporate and government reimbursement claims."
        }
      },
      {
        "@type": "Question",
        "name": "How can I track my vehicle status during transit?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "We provide live tracking updates on WhatsApp and phone support through dedicated logistics coordinators."
        }
      }
    ]
  }
  </script>

  <!-- Section 11: Conversion-Focused Footer CTA -->
  <section class="footer-cta-section" style="background: linear-gradient(135deg, #1c2541 0%, #0b132b 100%); padding: 60px 0; text-align: center; color: #ffffff; border-top: 1px solid rgba(245,158,11,0.3);">
    <div class="container" style="max-width: 800px; margin: 0 auto;">
      <h2 style="font-size: 2.3rem; font-weight: 800; margin-bottom: 15px;">Ready to Transport Your Bike from Kutch?</h2>
      <p style="color: #cbd5e1; font-size: 1.05rem; line-height: 1.6; margin-bottom: 30px;">
        Book your two-wheeler relocation today with Shree Ashirwad Packers and Movers. Enjoy 7-layer safety packaging, 100% insurance coverage, and reliable doorstep pickup.
      </p>

      <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap;">
        <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Us Now" style="padding: 15px 35px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1.05rem; text-decoration: none; box-shadow: 0 4px 20px rgba(225, 29, 72, 0.4);">
          <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call <?php echo SITE_PHONE; ?>
        </a>
        <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20to%20book%20bike%20transportation%20in%20Kutch." title="WhatsApp Booking" target="_blank" style="padding: 15px 35px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1.05rem; text-decoration: none; box-shadow: 0 4px 20px rgba(16, 185, 129, 0.4);">
          <i class="fab fa-whatsapp" style="margin-right: 8px;"></i> WhatsApp Booking
        </a>
      </div>
    </div>
  </section>

</main>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
