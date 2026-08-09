<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "Packers and Movers in Ranchi | ${SITE_NAME}";
$page_desc = "Looking for the best packers and movers in Ranchi? Shree Ashirwad Packers and Movers (OPC) Pvt. Ltd. is an IBA approved, top-rated moving company in Ranchi, Jharkhand. Household shifting, office relocation, car & bike transport at affordable rates. Call for a free quote. Complete door-to-door relocation coverage across Lalpur, Harmu, Kanke Road, Main Road, Ratu Road, Bariatu, Doranda.";
$page_keywords = "packers and movers in ranchi, best packers and movers in ranchi, affordable packers and movers in ranchi, packers and movers, packers and movers in ranchi, top packers and movers in ranchi company, household shifting packers and movers in ranchi, doorstep packers and movers in ranchi, verified packers and movers in ranchi services, shree ashirwad packers and movers in ranchi";
$canonical_url = "https://shreeashirwadpackersandmovers.com/pages/packers-and-movers-in-ranchi.php";

require_once __DIR__ . '/../includes/header.php';
?>
?>

<main class="site-main">

  <!-- Visual Breadcrumb Navigation Bar -->
  <div class="breadcrumb-wrapper">
    <div class="container">
      <div class="breadcrumb-list">
        <span class="breadcrumb-item"><a href="<?php echo SITE_URL; ?>" title="Home">Home</a></span>
        <span class="breadcrumb-separator">/</span>
        <span class="breadcrumb-item active">Packers and Movers in Ranchi</span>
      </div>
    </div>
  </div>

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
            Professional <span style="color: #f59e0b;">Packers and Movers in Ranchi</span>
          </h1>
          <p style="font-size: 1.1rem; color: #cbd5e1; line-height: 1.7; margin-bottom: 25px;">
            Whether you are shifting within Lalpur, Hinoo, Doranda, Bariatu, Kanke Road, or moving out of Ranchi to another city, Shree Ashirwad Packers and Movers helps families, offices, and vehicle owners move with a clear plan, safe packing, and documented support. Our team covers local homes, office spaces, car and bike transport, and intercity relocation routes with practical packing and loading service that suits the needs of Ranchi residents.
          </p>

          <div style="display: flex; gap: 15px; flex-wrap: wrap; margin-bottom: 30px;">
            <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Now:" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
              <i class="fas fa-phone-alt"></i> Call Now: <?php echo SITE_PHONE; ?>
            </a>
            <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers%20and%20Movers,%20I%20want%20information%20about%20your%20shifting%20services." title="Chat on WhatsApp" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
              <i class="fab fa-whatsapp"></i> Chat on WhatsApp
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
              <input type="text" name="move_from" class="form-control" placeholder="Moving From (e.g. Ranchi)" value="Ranchi" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
              <input type="text" name="move_to" class="form-control" placeholder="Moving To (City)" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="margin-bottom: 16px;">
              <textarea name="message" class="form-control" rows="2" placeholder="Shifting Requirements (e.g. 2BHK Home, Bike, Car)" style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;"></textarea>
            </div>
            <button type="submit" class="btn btn-primary" style="width: 100%; padding: 14px; font-weight: 700; font-size: 1rem; border-radius: 8px;">
              Get Quote on WhatsApp
            </button>
          </form>
        </div>

      </div>
    </div>
  </section>

  <!-- Section: Trusted Relocation Track Record & Stats -->
  <section class="track-record-section" style="padding: 60px 0; background: #070d19; color: #ffffff; text-align: center;">
    <div class="container" style="max-width: 1100px; margin: 0 auto; padding: 0 15px;">
      
      <div style="margin-bottom: 40px;">
        <span class="pill-badge" style="background: rgba(245, 158, 11, 0.1); color: #f59e0b; border: 1.5px solid rgba(245, 158, 11, 0.3); padding: 6px 20px; border-radius: 30px; font-size: 0.82rem; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; display: inline-block; margin-bottom: 16px;">
          TRUSTED RELOCATION TRACK RECORD
        </span>
        <h2 style="font-size: 2.3rem; font-weight: 800; color: #ffffff; margin-bottom: 16px; line-height: 1.3;">
          Jharkhand's Most Dependable <span style="color: #f59e0b;">Packers and Movers in Ranchi</span>
        </h2>
        <p style="font-size: 1.05rem; color: #cbd5e1; max-width: 850px; margin: 0 auto; line-height: 1.7;">
          With over a decade of domain excellence, Shree Ashirwad Packers and Movers has established itself as the top choice for household relocation, commercial office shifting, and vehicle transport. As trusted <strong>packers and movers in ranchi</strong> specialists, we prioritize the safety of your valuable belongings using high-grade multi-layer packing materials and dedicated container trucks across Lalpur.
        </p>
      </div>

      <!-- 4 Stats Cards Grid -->
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(230px, 1fr)); gap: 20px; align-items: stretch;">
        
        <!-- Card 1 -->
        <div style="background: #0f172a; border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 28px 20px; text-align: center; box-shadow: 0 10px 25px rgba(0,0,0,0.3); transition: transform 0.3s ease;">
          <div style="width: 48px; height: 48px; background: rgba(245, 158, 11, 0.15); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 16px auto; color: #f59e0b; font-size: 1.2rem;">
            <i class="fas fa-chart-line"></i>
          </div>
          <h3 style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; margin-bottom: 4px;">10,000+</h3>
          <h4 style="font-size: 1.05rem; font-weight: 700; color: #ffffff; margin-bottom: 8px;">Successful Moves</h4>
          <p style="font-size: 0.88rem; color: #94a3b8; line-height: 1.5; margin: 0;">
            Completed household &amp; office shifting projects across Lalpur &amp; Jharkhand.
          </p>
        </div>

        <!-- Card 2 -->
        <div style="background: #0f172a; border: 1.5px solid rgba(245, 158, 11, 0.5); border-radius: 14px; padding: 28px 20px; text-align: center; box-shadow: 0 10px 30px rgba(245, 158, 11, 0.15); transition: transform 0.3s ease;">
          <div style="width: 48px; height: 48px; background: rgba(245, 158, 11, 0.2); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 16px auto; color: #f59e0b; font-size: 1.2rem;">
            <i class="fas fa-heart"></i>
          </div>
          <h3 style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; margin-bottom: 4px;">5,000+</h3>
          <h4 style="font-size: 1.05rem; font-weight: 700; color: #ffffff; margin-bottom: 8px;">Happy Clients</h4>
          <p style="font-size: 0.88rem; color: #94a3b8; line-height: 1.5; margin: 0;">
            Satisfied families and businesses who trust our <strong>packers and movers in ranchi</strong>.
          </p>
        </div>

        <!-- Card 3 -->
        <div style="background: #0f172a; border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 28px 20px; text-align: center; box-shadow: 0 10px 25px rgba(0,0,0,0.3); transition: transform 0.3s ease;">
          <div style="width: 48px; height: 48px; background: rgba(245, 158, 11, 0.15); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 16px auto; color: #f59e0b; font-size: 1.2rem;">
            <i class="fas fa-map-marker-alt"></i>
          </div>
          <h3 style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; margin-bottom: 4px;">100+</h3>
          <h4 style="font-size: 1.05rem; font-weight: 700; color: #ffffff; margin-bottom: 8px;">Cities Connected</h4>
          <p style="font-size: 0.88rem; color: #94a3b8; line-height: 1.5; margin: 0;">
            Seamless intercity relocation network linking Lalpur to major Indian metro cities.
          </p>
        </div>

        <!-- Card 4 -->
        <div style="background: #0f172a; border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 28px 20px; text-align: center; box-shadow: 0 10px 25px rgba(0,0,0,0.3); transition: transform 0.3s ease;">
          <div style="width: 48px; height: 48px; background: rgba(245, 158, 11, 0.15); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 16px auto; color: #f59e0b; font-size: 1.2rem;">
            <i class="fas fa-star"></i>
          </div>
          <h3 style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; margin-bottom: 4px;">24/7</h3>
          <h4 style="font-size: 1.05rem; font-weight: 700; color: #ffffff; margin-bottom: 8px;">Live Support</h4>
          <p style="font-size: 0.88rem; color: #94a3b8; line-height: 1.5; margin: 0;">
            Round-the-clock dedicated assistance from experienced <strong>packers and movers in ranchi</strong> specialists.
          </p>
        </div>

      </div>

    </div>
  </section>

  <!-- Section: Why Are We Ranked Among the Top -->
  <section class="top-ranked-section" style="padding: 50px 0; background: #0b132b; color: #ffffff;">
    <div class="container" style="max-width: 1100px; margin: 0 auto; padding: 0 15px;">
      
      <div style="background: linear-gradient(135deg, rgba(30, 41, 59, 0.7) 0%, rgba(15, 23, 42, 0.9) 100%); border: 1.5px solid rgba(245, 158, 11, 0.4); border-left: 5px solid #e11d48; border-radius: 16px; padding: 35px 40px; box-shadow: 0 15px 35px rgba(0,0,0,0.4);">
        
        <div style="display: flex; align-items: center; justify-content: space-between; gap: 30px; flex-wrap: wrap;">
          
          <div style="flex: 1; min-width: 300px;">
            <h3 style="font-size: 1.75rem; font-weight: 800; color: #ffffff; margin-bottom: 14px; line-height: 1.3;">
              Why Are We Ranked Among the Top <span style="color: #f59e0b;">Packers and Movers in Ranchi</span>?
            </h3>
            <p style="font-size: 1.02rem; color: #cbd5e1; line-height: 1.75; margin: 0;">
              Relocating your home or office doesn't have to be stressful. Our professional team handles every aspect of your move &mdash; from premium bubble-wrap packing and heavy furniture dismantling to safe container transport and unloading at your destination. When you choose our verified <strong>packers and movers in ranchi</strong> in Lalpur, you get 100% damage-free assurance, transparent billing, and zero hidden charges.
            </p>
          </div>

          <div style="flex-shrink: 0;">
            <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Now" style="padding: 16px 32px; background: linear-gradient(135deg, #e11d48 0%, #f59e0b 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1.05rem; text-decoration: none; display: inline-flex; align-items: center; justify-content: center; box-shadow: 0 6px 20px rgba(225, 29, 72, 0.4); white-space: nowrap;">
              <i class="fas fa-phone-alt" style="margin-right: 10px;"></i> Call (+91) 8409531615
            </a>
          </div>

        </div>

      </div>

    </div>
  </section>

  <!-- Section: Live Work Gallery -->
  <section class="gallery-showcase-section" style="padding: 60px 0; background: #070d19; color: #ffffff; text-align: center;">
    <div class="container" style="max-width: 1150px; margin: 0 auto; padding: 0 15px;">
      
      <div style="margin-bottom: 40px;">
        <span class="pill-badge" style="background: rgba(245, 158, 11, 0.1); color: #f59e0b; border: 1.5px solid rgba(245, 158, 11, 0.3); padding: 6px 20px; border-radius: 30px; font-size: 0.82rem; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; display: inline-block; margin-bottom: 16px;">
          REAL SHIFTING SHOWCASE
        </span>
        <h2 style="font-size: 2.3rem; font-weight: 800; color: #ffffff; margin-bottom: 16px; line-height: 1.3;">
          Live Work Gallery of Top <span style="color: #f59e0b;">Packers and Movers in Ranchi</span>
        </h2>
        <p style="font-size: 1.05rem; color: #cbd5e1; max-width: 850px; margin: 0 auto; line-height: 1.7;">
          Browse authentic photos of our professional team in action across Lalpur. From heavy-duty 7-layer household packaging to GPS container truck loading, see how our verified <strong>packers and movers in ranchi</strong> deliver 100% damage-free shifting.
        </p>
      </div>

      <!-- 4 Image Cards Grid -->
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); gap: 20px;">
        
        <!-- Gallery Card 1 -->
        <div style="background: #0f172a; border: 1.5px solid rgba(245, 158, 11, 0.4); border-radius: 14px; overflow: hidden; box-shadow: 0 10px 25px rgba(0,0,0,0.4); transition: transform 0.3s ease;">
          <img src="<?php echo SITE_URL; ?>assets/images/gallery/gallery-1.webp" alt="Bike Straw Padding &amp; Branded Tape" style="width: 100%; height: 220px; object-fit: cover; display: block;" loading="lazy">
          <div style="background: rgba(15, 23, 42, 0.95); padding: 12px 15px; text-align: center; color: #ffffff; font-weight: 700; font-size: 0.88rem; border-top: 1px solid rgba(245, 158, 11, 0.3);">
            Bike Straw Padding &amp; Branded Tape
          </div>
        </div>

        <!-- Gallery Card 2 -->
        <div style="background: #0f172a; border: 1.5px solid rgba(245, 158, 11, 0.4); border-radius: 14px; overflow: hidden; box-shadow: 0 10px 25px rgba(0,0,0,0.4); transition: transform 0.3s ease;">
          <img src="<?php echo SITE_URL; ?>assets/images/gallery/gallery-2.webp" alt="Cardboard &amp; Stretch Wrap Bike Packing" style="width: 100%; height: 220px; object-fit: cover; display: block;" loading="lazy">
          <div style="background: rgba(15, 23, 42, 0.95); padding: 12px 15px; text-align: center; color: #ffffff; font-weight: 700; font-size: 0.88rem; border-top: 1px solid rgba(245, 158, 11, 0.3);">
            Cardboard &amp; Stretch Wrap Bike Packing
          </div>
        </div>

        <!-- Gallery Card 3 -->
        <div style="background: #0f172a; border: 1.5px solid rgba(245, 158, 11, 0.4); border-radius: 14px; overflow: hidden; box-shadow: 0 10px 25px rgba(0,0,0,0.4); transition: transform 0.3s ease;">
          <img src="<?php echo SITE_URL; ?>assets/images/gallery/gallery-3.webp" alt="Custom Wooden Crate Box Framing" style="width: 100%; height: 220px; object-fit: cover; display: block;" loading="lazy">
          <div style="background: rgba(15, 23, 42, 0.95); padding: 12px 15px; text-align: center; color: #ffffff; font-weight: 700; font-size: 0.88rem; border-top: 1px solid rgba(245, 158, 11, 0.3);">
            Custom Wooden Crate Box Framing
          </div>
        </div>

        <!-- Gallery Card 4 -->
        <div style="background: #0f172a; border: 1.5px solid rgba(245, 158, 11, 0.4); border-radius: 14px; overflow: hidden; box-shadow: 0 10px 25px rgba(0,0,0,0.4); transition: transform 0.3s ease;">
          <img src="<?php echo SITE_URL; ?>assets/images/gallery/gallery-4.webp" alt="Smart TV Wooden Crate Packaging" style="width: 100%; height: 220px; object-fit: cover; display: block;" loading="lazy">
          <div style="background: rgba(15, 23, 42, 0.95); padding: 12px 15px; text-align: center; color: #ffffff; font-weight: 700; font-size: 0.88rem; border-top: 1px solid rgba(245, 158, 11, 0.3);">
            Smart TV Wooden Crate Packaging
          </div>
        </div>

      </div>

    </div>
  </section>

  <!-- Section: End-to-End Professional Shifting Services -->
  <section class="shifting-services-section" style="padding: 65px 0; background: #0b132b; color: #ffffff;">
    <div class="container" style="max-width: 1150px; margin: 0 auto; padding: 0 15px;">
      
      <div style="text-align: center; margin-bottom: 45px;">
        <span class="pill-badge" style="background: rgba(245, 158, 11, 0.1); color: #f59e0b; border: 1.5px solid rgba(245, 158, 11, 0.3); padding: 6px 20px; border-radius: 30px; font-size: 0.82rem; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; display: inline-block; margin-bottom: 16px;">
          END-TO-END RELOCATION SOLUTIONS
        </span>
        <h2 style="font-size: 2.3rem; font-weight: 800; color: #ffffff; margin-bottom: 16px; line-height: 1.3;">
          Professional Shifting Services by Top <span style="color: #f59e0b;">Packers and Movers in Ranchi</span>
        </h2>
        <p style="font-size: 1.05rem; color: #cbd5e1; max-width: 850px; margin: 0 auto; line-height: 1.7;">
          Whether you are moving your home within Lalpur or relocating your corporate office to another state, our certified <strong>packers and movers in ranchi</strong> deliver seamless, stress-free shifting backed by 100% damage-proof packaging and trained logistics personnel.
        </p>
      </div>

      <!-- 6 Services 3x2 Grid -->
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 25px;">
        
        <!-- Service Card 1 -->
        <div style="background: #0f172a; border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 16px; padding: 30px 25px; text-align: left; box-shadow: 0 10px 30px rgba(0,0,0,0.3); display: flex; flex-direction: column; justify-content: space-between;">
          <div>
            <div style="width: 48px; height: 48px; background: rgba(245, 158, 11, 0.15); border-radius: 12px; display: flex; align-items: center; justify-content: center; color: #f59e0b; font-size: 1.2rem; margin-bottom: 20px;">
              <i class="fas fa-home"></i>
            </div>
            <h3 style="font-size: 1.3rem; font-weight: 700; color: #ffffff; margin-bottom: 12px;">Household Goods Shifting</h3>
            <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.65; margin-bottom: 20px;">
              Complete home relocation services across Lalpur. Our expert <strong>packers and movers in ranchi</strong> disassemble heavy beds, pack kitchen glassware safely in sturdy boxes, wrap sofas in bubble film, and transport everything securely.
            </p>
            <ul style="list-style: none; padding: 0; margin: 0 0 25px 0; color: #cbd5e1; font-size: 0.88rem; line-height: 1.8;">
              <li><span style="color: #f59e0b; font-weight: 700; margin-right: 8px;">&check;</span> Multi-layer bubble wrapping &amp; foam sheets</li>
              <li><span style="color: #f59e0b; font-weight: 700; margin-right: 8px;">&check;</span> Furniture disassembly &amp; re-assembly</li>
              <li><span style="color: #f59e0b; font-weight: 700; margin-right: 8px;">&check;</span> Dedicated enclosed shifting vehicles</li>
            </ul>
          </div>
          <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad,%20I%20want%20to%20book%20Home%20Shifting%20in%20Lalpur" title="Book Home Shifting" target="_blank" style="width: 100%; padding: 12px; border: 1.5px solid #f59e0b; border-radius: 10px; background: transparent; color: #ffffff; font-weight: 700; font-size: 0.9rem; text-align: center; text-decoration: none; display: block; box-sizing: border-box;">
            Book Home Shifting
          </a>
        </div>

        <!-- Service Card 2 -->
        <div style="background: #0f172a; border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 16px; padding: 30px 25px; text-align: left; box-shadow: 0 10px 30px rgba(0,0,0,0.3); display: flex; flex-direction: column; justify-content: space-between;">
          <div>
            <div style="width: 48px; height: 48px; background: rgba(245, 158, 11, 0.15); border-radius: 12px; display: flex; align-items: center; justify-content: center; color: #f59e0b; font-size: 1.2rem; margin-bottom: 20px;">
              <i class="fas fa-building"></i>
            </div>
            <h3 style="font-size: 1.3rem; font-weight: 700; color: #ffffff; margin-bottom: 12px;">Office &amp; Commercial Shifting</h3>
            <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.65; margin-bottom: 20px;">
              Fast, zero-downtime corporate relocation for companies in Lalpur. As leading <strong>packers and movers in ranchi</strong>, we safely relocate IT servers, office desks, confidential files, and conference electronics on weekends or off-peak hours.
            </p>
            <ul style="list-style: none; padding: 0; margin: 0 0 25px 0; color: #cbd5e1; font-size: 0.88rem; line-height: 1.8;">
              <li><span style="color: #f59e0b; font-weight: 700; margin-right: 8px;">&check;</span> Tagged box labeling &amp; file inventory</li>
              <li><span style="color: #f59e0b; font-weight: 700; margin-right: 8px;">&check;</span> Anti-static packing for IT hardware</li>
              <li><span style="color: #f59e0b; font-weight: 700; margin-right: 8px;">&check;</span> Weekend &amp; overnight shifting execution</li>
            </ul>
          </div>
          <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad,%20I%20want%20to%20book%20Office%20Shifting%20in%20Lalpur" title="Book Office Shifting" target="_blank" style="width: 100%; padding: 12px; border: 1.5px solid #f59e0b; border-radius: 10px; background: transparent; color: #ffffff; font-weight: 700; font-size: 0.9rem; text-align: center; text-decoration: none; display: block; box-sizing: border-box;">
            Book Office Shifting
          </a>
        </div>

        <!-- Service Card 3 -->
        <div style="background: #0f172a; border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 16px; padding: 30px 25px; text-align: left; box-shadow: 0 10px 30px rgba(0,0,0,0.3); display: flex; flex-direction: column; justify-content: space-between;">
          <div>
            <div style="width: 48px; height: 48px; background: rgba(245, 158, 11, 0.15); border-radius: 12px; display: flex; align-items: center; justify-content: center; color: #f59e0b; font-size: 1.2rem; margin-bottom: 20px;">
              <i class="fas fa-car"></i>
            </div>
            <h3 style="font-size: 1.3rem; font-weight: 700; color: #ffffff; margin-bottom: 12px;">Car &amp; Bike Transportation</h3>
            <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.65; margin-bottom: 20px;">
              Safe vehicle carrier services connecting Lalpur to anywhere in India. Our experienced <strong>packers and movers in ranchi</strong> use hydraulic enclosed car trailers and specialized wheel-lock bike containers.
            </p>
            <ul style="list-style: none; padding: 0; margin: 0 0 25px 0; color: #cbd5e1; font-size: 0.88rem; line-height: 1.8;">
              <li><span style="color: #f59e0b; font-weight: 700; margin-right: 8px;">&check;</span> Covered hydraulic car container trailers</li>
              <li><span style="color: #f59e0b; font-weight: 700; margin-right: 8px;">&check;</span> Scratch-free bike foam wrapping &amp; belt locking</li>
              <li><span style="color: #f59e0b; font-weight: 700; margin-right: 8px;">&check;</span> Doorstep vehicle pickup &amp; delivery</li>
            </ul>
          </div>
          <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad,%20I%20want%20to%20book%20Vehicle%20Transport%20in%20Lalpur" title="Book Vehicle Transport" target="_blank" style="width: 100%; padding: 12px; border: 1.5px solid #f59e0b; border-radius: 10px; background: transparent; color: #ffffff; font-weight: 700; font-size: 0.9rem; text-align: center; text-decoration: none; display: block; box-sizing: border-box;">
            Book Vehicle Transport
          </a>
        </div>

        <!-- Service Card 4 -->
        <div style="background: #0f172a; border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 16px; padding: 30px 25px; text-align: left; box-shadow: 0 10px 30px rgba(0,0,0,0.3); display: flex; flex-direction: column; justify-content: space-between;">
          <div>
            <div style="width: 48px; height: 48px; background: rgba(245, 158, 11, 0.15); border-radius: 12px; display: flex; align-items: center; justify-content: center; color: #f59e0b; font-size: 1.2rem; margin-bottom: 20px;">
              <i class="fas fa-box-open"></i>
            </div>
            <h3 style="font-size: 1.3rem; font-weight: 700; color: #ffffff; margin-bottom: 12px;">Packing &amp; Unpacking Services</h3>
            <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.65; margin-bottom: 20px;">
              Professional packing and unboxing help in Lalpur. Relying on premium materials like heavy-duty cartons, stretch wrap, and wooden crates, our <strong>packers and movers in ranchi</strong> safeguard fragile goods completely.
            </p>
            <ul style="list-style: none; padding: 0; margin: 0 0 25px 0; color: #cbd5e1; font-size: 0.88rem; line-height: 1.8;">
              <li><span style="color: #f59e0b; font-weight: 700; margin-right: 8px;">&check;</span> Custom wooden crating for TV &amp; artwork</li>
              <li><span style="color: #f59e0b; font-weight: 700; margin-right: 8px;">&check;</span> High-density corrugated boxes &amp; tape</li>
              <li><span style="color: #f59e0b; font-weight: 700; margin-right: 8px;">&check;</span> Post-shifting unpacking &amp; placement support</li>
            </ul>
          </div>
          <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad,%20I%20want%20to%20book%20Packing%20Service%20in%20Lalpur" title="Book Packing Service" target="_blank" style="width: 100%; padding: 12px; border: 1.5px solid #f59e0b; border-radius: 10px; background: transparent; color: #ffffff; font-weight: 700; font-size: 0.9rem; text-align: center; text-decoration: none; display: block; box-sizing: border-box;">
            Book Packing Service
          </a>
        </div>

        <!-- Service Card 5 -->
        <div style="background: #0f172a; border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 16px; padding: 30px 25px; text-align: left; box-shadow: 0 10px 30px rgba(0,0,0,0.3); display: flex; flex-direction: column; justify-content: space-between;">
          <div>
            <div style="width: 48px; height: 48px; background: rgba(245, 158, 11, 0.15); border-radius: 12px; display: flex; align-items: center; justify-content: center; color: #f59e0b; font-size: 1.2rem; margin-bottom: 20px;">
              <i class="fas fa-warehouse"></i>
            </div>
            <h3 style="font-size: 1.3rem; font-weight: 700; color: #ffffff; margin-bottom: 12px;">Warehouse &amp; Goods Storage</h3>
            <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.65; margin-bottom: 20px;">
              Secure short-term and long-term storage units in Lalpur. Our <strong>packers and movers in ranchi</strong> offer CCTV-monitored, pest-controlled, and fire-safe warehouse facilities for your household goods and commercial stock.
            </p>
            <ul style="list-style: none; padding: 0; margin: 0 0 25px 0; color: #cbd5e1; font-size: 0.88rem; line-height: 1.8;">
              <li><span style="color: #f59e0b; font-weight: 700; margin-right: 8px;">&check;</span> 24/7 CCTV surveillance &amp; security guards</li>
              <li><span style="color: #f59e0b; font-weight: 700; margin-right: 8px;">&check;</span> Moisture-proof &amp; pest-controlled storage</li>
              <li><span style="color: #f59e0b; font-weight: 700; margin-right: 8px;">&check;</span> Flexible daily, weekly, or monthly plans</li>
            </ul>
          </div>
          <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad,%20I%20want%20to%20book%20Storage%20Space%20in%20Lalpur" title="Book Storage Space" target="_blank" style="width: 100%; padding: 12px; border: 1.5px solid #f59e0b; border-radius: 10px; background: transparent; color: #ffffff; font-weight: 700; font-size: 0.9rem; text-align: center; text-decoration: none; display: block; box-sizing: border-box;">
            Book Storage Space
          </a>
        </div>

        <!-- Service Card 6 -->
        <div style="background: #0f172a; border: 1.5px solid rgba(245, 158, 11, 0.6); border-radius: 16px; padding: 30px 25px; text-align: left; box-shadow: 0 10px 30px rgba(245, 158, 11, 0.15); display: flex; flex-direction: column; justify-content: space-between;">
          <div>
            <div style="width: 48px; height: 48px; background: rgba(245, 158, 11, 0.2); border-radius: 12px; display: flex; align-items: center; justify-content: center; color: #f59e0b; font-size: 1.2rem; margin-bottom: 20px;">
              <i class="fas fa-truck-moving"></i>
            </div>
            <h3 style="font-size: 1.3rem; font-weight: 700; color: #ffffff; margin-bottom: 12px;">Intercity &amp; Domestic Shifting</h3>
            <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.65; margin-bottom: 20px;">
              Smooth intercity shifting from Lalpur to Kolkata, Delhi, Patna, Bangalore, Mumbai, and all major cities. As experienced <strong>packers and movers in ranchi</strong>, we provide transit insurance and GPS vehicle tracking.
            </p>
            <ul style="list-style: none; padding: 0; margin: 0 0 25px 0; color: #cbd5e1; font-size: 0.88rem; line-height: 1.8;">
              <li><span style="color: #f59e0b; font-weight: 700; margin-right: 8px;">&check;</span> Pan-India intercity transport network</li>
              <li><span style="color: #f59e0b; font-weight: 700; margin-right: 8px;">&check;</span> Full transit insurance policy coverage</li>
              <li><span style="color: #f59e0b; font-weight: 700; margin-right: 8px;">&check;</span> Real-time GPS location updates</li>
            </ul>
          </div>
          <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad,%20I%20want%20to%20book%20Intercity%20Shifting%20from%20Lalpur" title="Book Intercity Shifting" target="_blank" style="width: 100%; padding: 12px; border: 1.5px solid #f59e0b; border-radius: 10px; background: transparent; color: #ffffff; font-weight: 700; font-size: 0.9rem; text-align: center; text-decoration: none; display: block; box-sizing: border-box;">
            Book Intercity Shifting
          </a>
        </div>

      </div>

    </div>
  </section>

  <!-- Section: Why We Are the Most Preferred -->
  <section class="most-preferred-section" style="padding: 65px 0; background: #070d19; color: #ffffff;">
    <div class="container" style="max-width: 1150px; margin: 0 auto; padding: 0 15px;">
      
      <div style="text-align: center; margin-bottom: 45px;">
        <span class="pill-badge" style="background: rgba(245, 158, 11, 0.1); color: #f59e0b; border: 1.5px solid rgba(245, 158, 11, 0.3); padding: 6px 20px; border-radius: 30px; font-size: 0.82rem; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; display: inline-block; margin-bottom: 16px;">
          UNMATCHED QUALITY &amp; TRUST
        </span>
        <h2 style="font-size: 2.3rem; font-weight: 800; color: #ffffff; margin-bottom: 16px; line-height: 1.3;">
          Why We Are the Most Preferred <span style="color: #f59e0b;">Packers and Movers in Ranchi</span>
        </h2>
        <p style="font-size: 1.05rem; color: #cbd5e1; max-width: 850px; margin: 0 auto; line-height: 1.7;">
          Selecting reliable <strong>packers and movers in ranchi</strong> shouldn't involve guesswork. At Shree Ashirwad, we combine licensed operational standards, transparent billing practices, and state-of-the-art vehicle tracking to guarantee 100% peace of mind during your relocation in Lalpur.
        </p>
      </div>

      <!-- 6 Trust Feature Cards 3x2 Grid -->
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 25px;">
        
        <!-- Trust Card 1 (Highlighted) -->
        <div style="background: #0f172a; border: 1.5px solid rgba(245, 158, 11, 0.6); border-radius: 16px; padding: 30px 25px; text-align: left; box-shadow: 0 10px 30px rgba(245, 158, 11, 0.15);">
          <div style="width: 48px; height: 48px; background: rgba(245, 158, 11, 0.2); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #f59e0b; font-size: 1.2rem; margin-bottom: 20px;">
            <i class="fas fa-shield-alt"></i>
          </div>
          <h3 style="font-size: 1.25rem; font-weight: 700; color: #ffffff; margin-bottom: 12px;">Govt. Registered &amp; IBA Approved</h3>
          <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.65; margin: 0;">
            We are fully licensed, GST-compliant <strong>packers and movers in ranchi</strong> providing valid IBA-approved bills for easy corporate or bank claim reimbursements across Lalpur.
          </p>
        </div>

        <!-- Trust Card 2 -->
        <div style="background: #0f172a; border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 16px; padding: 30px 25px; text-align: left; box-shadow: 0 10px 30px rgba(0,0,0,0.3);">
          <div style="width: 48px; height: 48px; background: rgba(245, 158, 11, 0.15); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #f59e0b; font-size: 1.2rem; margin-bottom: 20px;">
            <i class="fas fa-file-invoice-dollar"></i>
          </div>
          <h3 style="font-size: 1.25rem; font-weight: 700; color: #ffffff; margin-bottom: 12px;">Transparent &amp; Honest Pricing</h3>
          <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.65; margin: 0;">
            No hidden fees, surprise taxes, or moving-day price jumps. When you hire our <strong>packers and movers in ranchi</strong>, the quoted estimate remains fixed and transparent.
          </p>
        </div>

        <!-- Trust Card 3 -->
        <div style="background: #0f172a; border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 16px; padding: 30px 25px; text-align: left; box-shadow: 0 10px 30px rgba(0,0,0,0.3);">
          <div style="width: 48px; height: 48px; background: rgba(245, 158, 11, 0.15); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #f59e0b; font-size: 1.2rem; margin-bottom: 20px;">
            <i class="fas fa-map-marker-alt"></i>
          </div>
          <h3 style="font-size: 1.25rem; font-weight: 700; color: #ffffff; margin-bottom: 12px;">Real-Time GPS Tracking</h3>
          <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.65; margin: 0;">
            Track your shifting container truck live via satellite GPS. Our <strong>packers and movers in ranchi</strong> ensure you know your vehicle location every minute of the journey.
          </p>
        </div>

        <!-- Trust Card 4 -->
        <div style="background: #0f172a; border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 16px; padding: 30px 25px; text-align: left; box-shadow: 0 10px 30px rgba(0,0,0,0.3);">
          <div style="width: 48px; height: 48px; background: rgba(245, 158, 11, 0.15); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #f59e0b; font-size: 1.2rem; margin-bottom: 20px;">
            <i class="fas fa-box"></i>
          </div>
          <h3 style="font-size: 1.25rem; font-weight: 700; color: #ffffff; margin-bottom: 12px;">Multi-Layer Safe Packing</h3>
          <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.65; margin: 0;">
            Using heavy-duty bubble wraps, corrugated sheets, stretch films, and corner guards, our <strong>packers and movers in ranchi</strong> guarantee 100% damage-free delivery.
          </p>
        </div>

        <!-- Trust Card 5 -->
        <div style="background: #0f172a; border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 16px; padding: 30px 25px; text-align: left; box-shadow: 0 10px 30px rgba(0,0,0,0.3);">
          <div style="width: 48px; height: 48px; background: rgba(245, 158, 11, 0.15); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #f59e0b; font-size: 1.2rem; margin-bottom: 20px;">
            <i class="fas fa-clock"></i>
          </div>
          <h3 style="font-size: 1.25rem; font-weight: 700; color: #ffffff; margin-bottom: 12px;">Guaranteed On-Time Delivery</h3>
          <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.65; margin: 0;">
            We value your time. As punctual <strong>packers and movers in ranchi</strong>, our logistics team strictly meets all pickup times and promised delivery windows without delay.
          </p>
        </div>

        <!-- Trust Card 6 -->
        <div style="background: #0f172a; border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 16px; padding: 30px 25px; text-align: left; box-shadow: 0 10px 30px rgba(0,0,0,0.3);">
          <div style="width: 48px; height: 48px; background: rgba(245, 158, 11, 0.15); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #f59e0b; font-size: 1.2rem; margin-bottom: 20px;">
            <i class="fas fa-shield-virus"></i>
          </div>
          <h3 style="font-size: 1.25rem; font-weight: 700; color: #ffffff; margin-bottom: 12px;">Full Transit Insurance Protection</h3>
          <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.65; margin: 0;">
            For maximum financial security, our <strong>packers and movers in ranchi</strong> provide complete transit insurance policies to cover unforeseen transit risks.
          </p>
        </div>

      </div>

    </div>
  </section>

  <!-- Section: How Shifting Works Timeline -->
  <section class="shifting-process-section" style="padding: 65px 0; background: #0b132b; color: #ffffff;">
    <div class="container" style="max-width: 1150px; margin: 0 auto; padding: 0 15px;">
      
      <div style="text-align: center; margin-bottom: 45px;">
        <span class="pill-badge" style="background: rgba(245, 158, 11, 0.1); color: #f59e0b; border: 1.5px solid rgba(245, 158, 11, 0.3); padding: 6px 20px; border-radius: 30px; font-size: 0.82rem; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; display: inline-block; margin-bottom: 16px;">
          SIMPLE &amp; HASSLE-FREE JOURNEY
        </span>
        <h2 style="font-size: 2.3rem; font-weight: 800; color: #ffffff; margin-bottom: 16px; line-height: 1.3;">
          How Shifting Works with Top <span style="color: #f59e0b;">Packers and Movers in Ranchi</span>
        </h2>
        <p style="font-size: 1.05rem; color: #cbd5e1; max-width: 850px; margin: 0 auto; line-height: 1.7;">
          Relocating with Shree Ashirwad is fast and straightforward. Follow our simple 4-step moving timeline designed by expert <strong>packers and movers in ranchi</strong> to ensure an effortless shifting experience from pickup to final unboxing in Lalpur.
        </p>
      </div>

      <!-- 4 Timeline Step Cards Grid -->
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); gap: 25px; margin-top: 25px;">
        
        <!-- Step 01 -->
        <div style="background: #0f172a; border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 16px; padding: 30px 22px; text-align: left; position: relative; box-shadow: 0 10px 30px rgba(0,0,0,0.3);">
          <div style="position: absolute; top: -15px; right: 20px; width: 36px; height: 36px; background: linear-gradient(135deg, #e11d48 0%, #f59e0b 100%); color: #ffffff; border-radius: 50%; font-weight: 800; font-size: 0.9rem; display: flex; align-items: center; justify-content: center; box-shadow: 0 4px 12px rgba(225, 29, 72, 0.4);">
            01
          </div>
          <div style="width: 44px; height: 44px; background: rgba(245, 158, 11, 0.15); border-radius: 12px; display: flex; align-items: center; justify-content: center; color: #f59e0b; font-size: 1.15rem; margin-bottom: 20px;">
            <i class="fas fa-clipboard-list"></i>
          </div>
          <h3 style="font-size: 1.15rem; font-weight: 700; color: #ffffff; margin-bottom: 12px; line-height: 1.35;">Book &amp; Get Instant Estimate</h3>
          <p style="font-size: 0.9rem; color: #cbd5e1; line-height: 1.65; margin: 0;">
            Submit your moving details via website form or WhatsApp call. Our team of <strong>packers and movers in ranchi</strong> in Lalpur calculates a clear, transparent shifting estimate right away.
          </p>
        </div>

        <!-- Step 02 -->
        <div style="background: #0f172a; border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 16px; padding: 30px 22px; text-align: left; position: relative; box-shadow: 0 10px 30px rgba(0,0,0,0.3);">
          <div style="position: absolute; top: -15px; right: 20px; width: 36px; height: 36px; background: linear-gradient(135deg, #e11d48 0%, #f59e0b 100%); color: #ffffff; border-radius: 50%; font-weight: 800; font-size: 0.9rem; display: flex; align-items: center; justify-content: center; box-shadow: 0 4px 12px rgba(225, 29, 72, 0.4);">
            02
          </div>
          <div style="width: 44px; height: 44px; background: rgba(245, 158, 11, 0.15); border-radius: 12px; display: flex; align-items: center; justify-content: center; color: #f59e0b; font-size: 1.15rem; margin-bottom: 20px;">
            <i class="fas fa-box"></i>
          </div>
          <h3 style="font-size: 1.15rem; font-weight: 700; color: #ffffff; margin-bottom: 12px; line-height: 1.35;">Multi-Layer Safe Packing</h3>
          <p style="font-size: 0.9rem; color: #cbd5e1; line-height: 1.65; margin: 0;">
            On moving day, our professional packing crew arrives with premium bubble wrap, corrugated boxes, and foam sheets to protect all household items carefully.
          </p>
        </div>

        <!-- Step 03 -->
        <div style="background: #0f172a; border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 16px; padding: 30px 22px; text-align: left; position: relative; box-shadow: 0 10px 30px rgba(0,0,0,0.3);">
          <div style="position: absolute; top: -15px; right: 20px; width: 36px; height: 36px; background: linear-gradient(135deg, #e11d48 0%, #f59e0b 100%); color: #ffffff; border-radius: 50%; font-weight: 800; font-size: 0.9rem; display: flex; align-items: center; justify-content: center; box-shadow: 0 4px 12px rgba(225, 29, 72, 0.4);">
            03
          </div>
          <div style="width: 44px; height: 44px; background: rgba(245, 158, 11, 0.15); border-radius: 12px; display: flex; align-items: center; justify-content: center; color: #f59e0b; font-size: 1.15rem; margin-bottom: 20px;">
            <i class="fas fa-truck"></i>
          </div>
          <h3 style="font-size: 1.15rem; font-weight: 700; color: #ffffff; margin-bottom: 12px; line-height: 1.35;">Safe Loading &amp; Transit</h3>
          <p style="font-size: 0.9rem; color: #cbd5e1; line-height: 1.65; margin: 0;">
            Packed goods are loaded securely into enclosed container trucks. As trusted <strong>packers and movers in ranchi</strong> in Lalpur, we track vehicle transit via live satellite GPS.
          </p>
        </div>

        <!-- Step 04 -->
        <div style="background: #0f172a; border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 16px; padding: 30px 22px; text-align: left; position: relative; box-shadow: 0 10px 30px rgba(0,0,0,0.3);">
          <div style="position: absolute; top: -15px; right: 20px; width: 36px; height: 36px; background: linear-gradient(135deg, #e11d48 0%, #f59e0b 100%); color: #ffffff; border-radius: 50%; font-weight: 800; font-size: 0.9rem; display: flex; align-items: center; justify-content: center; box-shadow: 0 4px 12px rgba(225, 29, 72, 0.4);">
            04
          </div>
          <div style="width: 44px; height: 44px; background: rgba(245, 158, 11, 0.15); border-radius: 12px; display: flex; align-items: center; justify-content: center; color: #f59e0b; font-size: 1.15rem; margin-bottom: 20px;">
            <i class="fas fa-home"></i>
          </div>
          <h3 style="font-size: 1.15rem; font-weight: 700; color: #ffffff; margin-bottom: 12px; line-height: 1.35;">Unloading &amp; Final Setup</h3>
          <p style="font-size: 0.9rem; color: #cbd5e1; line-height: 1.65; margin: 0;">
            At your destination, our staff unloads, unboxes, and reassembles furniture in your designated rooms to complete a 100% successful move.
          </p>
        </div>

      </div>

    </div>
  </section>

  <!-- Section: Understanding Relocation Costs & Transparent Billing -->
  <section class="relocation-costs-section" style="padding: 65px 0; background: #070d19; color: #ffffff;">
    <div class="container" style="max-width: 1150px; margin: 0 auto; padding: 0 15px;">
      
      <div style="text-align: center; margin-bottom: 45px;">
        <span class="pill-badge" style="background: rgba(245, 158, 11, 0.1); color: #f59e0b; border: 1.5px solid rgba(245, 158, 11, 0.3); padding: 6px 20px; border-radius: 30px; font-size: 0.82rem; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; display: inline-block; margin-bottom: 16px;">
          TRANSPARENT BILLING &amp; COST FACTORS
        </span>
        <h2 style="font-size: 2.3rem; font-weight: 800; color: #ffffff; margin-bottom: 16px; line-height: 1.3;">
          Understanding Relocation Costs with <span style="color: #f59e0b;">Packers and Movers in Ranchi</span>
        </h2>
        <p style="font-size: 1.05rem; color: #cbd5e1; max-width: 850px; margin: 0 auto; line-height: 1.7;">
          We believe in complete financial transparency with zero hidden charges. Relocation rates depend on key logistical variables. Learn how our certified <strong>packers and movers in ranchi</strong> calculate fair, budget-friendly shifting estimates customized for your move in Lalpur.
        </p>
      </div>

      <!-- 4 Cost Factor Cards Grid -->
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); gap: 20px; margin-top: 25px;">
        
        <!-- Factor 1 -->
        <div style="background: #0f172a; border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 16px; padding: 25px 20px; text-align: left; box-shadow: 0 10px 30px rgba(0,0,0,0.3);">
          <div style="width: 42px; height: 42px; background: rgba(225, 29, 72, 0.2); border-radius: 10px; display: flex; align-items: center; justify-content: center; color: #e11d48; font-size: 1.1rem; margin-bottom: 18px;">
            <i class="fas fa-boxes"></i>
          </div>
          <h3 style="font-size: 1.15rem; font-weight: 700; color: #ffffff; margin-bottom: 12px; line-height: 1.35;">Volume of Household Goods</h3>
          <p style="font-size: 0.88rem; color: #cbd5e1; line-height: 1.65; margin: 0;">
            The overall size of your move (1 BHK, 2 BHK, 3 BHK, or villa) determines the size of the container truck required, volume of bubble film, and number of handling staff deployed by our <strong>packers and movers in ranchi</strong>.
          </p>
        </div>

        <!-- Factor 2 -->
        <div style="background: #0f172a; border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 16px; padding: 25px 20px; text-align: left; box-shadow: 0 10px 30px rgba(0,0,0,0.3);">
          <div style="width: 42px; height: 42px; background: rgba(225, 29, 72, 0.2); border-radius: 10px; display: flex; align-items: center; justify-content: center; color: #e11d48; font-size: 1.1rem; margin-bottom: 18px;">
            <i class="fas fa-route"></i>
          </div>
          <h3 style="font-size: 1.15rem; font-weight: 700; color: #ffffff; margin-bottom: 12px; line-height: 1.35;">Relocation Distance</h3>
          <p style="font-size: 0.88rem; color: #cbd5e1; line-height: 1.65; margin: 0;">
            Local shifting within Lalpur locality areas involves lower fuel costs compared to intercity moving across state borders, which includes highway toll taxes, state permits, and transit time considerations.
          </p>
        </div>

        <!-- Factor 3 -->
        <div style="background: #0f172a; border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 16px; padding: 25px 20px; text-align: left; box-shadow: 0 10px 30px rgba(0,0,0,0.3);">
          <div style="width: 42px; height: 42px; background: rgba(225, 29, 72, 0.2); border-radius: 10px; display: flex; align-items: center; justify-content: center; color: #e11d48; font-size: 1.1rem; margin-bottom: 18px;">
            <i class="fas fa-box-open"></i>
          </div>
          <h3 style="font-size: 1.15rem; font-weight: 700; color: #ffffff; margin-bottom: 12px; line-height: 1.35;">Packing Grade &amp; Custom Crating</h3>
          <p style="font-size: 0.88rem; color: #cbd5e1; line-height: 1.65; margin: 0;">
            Standard multi-layer packing vs premium wooden crating for delicate items like glass dining tables, LED TVs, and antique artwork is factored into the customized quotation by our <strong>packers and movers in ranchi</strong>.
          </p>
        </div>

        <!-- Factor 4 -->
        <div style="background: #0f172a; border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 16px; padding: 25px 20px; text-align: left; box-shadow: 0 10px 30px rgba(0,0,0,0.3);">
          <div style="width: 42px; height: 42px; background: rgba(225, 29, 72, 0.2); border-radius: 10px; display: flex; align-items: center; justify-content: center; color: #e11d48; font-size: 1.1rem; margin-bottom: 18px;">
            <i class="fas fa-building"></i>
          </div>
          <h3 style="font-size: 1.15rem; font-weight: 700; color: #ffffff; margin-bottom: 12px; line-height: 1.35;">Floor Level &amp; Elevator Access</h3>
          <p style="font-size: 0.88rem; color: #cbd5e1; line-height: 1.65; margin: 0;">
            Moving items from high-rise apartments without elevators requires extra manpower and manual carrying up flights of stairs, which is accounted for in your customized shifting quote.
          </p>
        </div>

      </div>

      <!-- 100% Fixed Price Guarantee Banner -->
      <div style="background: linear-gradient(135deg, rgba(30, 41, 59, 0.7) 0%, rgba(15, 23, 42, 0.9) 100%); border: 1.5px solid rgba(245, 158, 11, 0.6); border-left: 5px solid #e11d48; border-radius: 16px; padding: 30px 35px; margin-top: 35px; box-shadow: 0 15px 35px rgba(0,0,0,0.4); text-align: left;">
        <h3 style="font-size: 1.35rem; font-weight: 800; color: #f59e0b; margin-bottom: 10px;">
          100% Fixed Price Guarantee &amp; Transparent Quotations
        </h3>
        <p style="font-size: 0.95rem; color: #cbd5e1; line-height: 1.65; margin-bottom: 20px;">
          Unlike unverified local vendors who demand unexpected extra fees on moving day, our professional <strong>packers and movers in ranchi</strong> deliver itemized, written quotes before starting work. Every estimate includes loading, unloading, packing materials, transit insurance options, and GST billing.
        </p>
        
        <div style="display: flex; flex-wrap: wrap; gap: 20px; margin-bottom: 25px; font-size: 0.88rem; color: #ffffff; font-weight: 600;">
          <div><span style="color: #f59e0b; margin-right: 6px;">&check;</span> Written contract with zero hidden charges</div>
          <div><span style="color: #f59e0b; margin-right: 6px;">&check;</span> Free pre-move site survey or virtual consultation</div>
          <div><span style="color: #f59e0b; margin-right: 6px;">&check;</span> IBA-approved GST invoices for easy claim filing</div>
        </div>

        <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad,%20I%20want%20to%20request%20a%20Custom%20Price%20Estimate%20for%20Lalpur" title="Request Custom Price Estimate" target="_blank" style="padding: 12px 28px; background: linear-gradient(135deg, #d32f2f 0%, #f59e0b 100%); color: #ffffff; border-radius: 30px; font-weight: 700; font-size: 0.95rem; text-decoration: none; display: inline-block; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
          Request Custom Price Estimate
        </a>
      </div>

    </div>
  </section>

  <!-- Section: Operational Excellence & Shifting Logistics Fleet -->
  <section class="operational-excellence-section" style="padding: 65px 0; background: #0b132b; color: #ffffff;">
    <div class="container" style="max-width: 1150px; margin: 0 auto; padding: 0 15px;">
      
      <div style="text-align: center; margin-bottom: 45px;">
        <span class="pill-badge" style="background: rgba(245, 158, 11, 0.1); color: #f59e0b; border: 1.5px solid rgba(245, 158, 11, 0.3); padding: 6px 20px; border-radius: 30px; font-size: 0.82rem; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; display: inline-block; margin-bottom: 16px;">
          OPERATIONAL EXCELLENCE
        </span>
        <h2 style="font-size: 2.3rem; font-weight: 800; color: #ffffff; margin-bottom: 16px; line-height: 1.3;">
          Our Shifting Process &amp; Logistics Fleet with Top <span style="color: #f59e0b;">Packers and Movers in Ranchi</span>
        </h2>
        <p style="font-size: 1.05rem; color: #cbd5e1; max-width: 850px; margin: 0 auto; line-height: 1.7;">
          Take a look at how our experienced moving crews operate. As leading <strong>packers and movers in ranchi</strong>, we maintain a modern fleet of GPS-equipped covered container trucks, specialized vehicle trailers, and professional packing gear to ensure maximum safety across Lalpur.
        </p>
      </div>

      <!-- 6 Operational Stage Cards Grid -->
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 25px; margin-top: 25px;">
        
        <!-- Stage 01 -->
        <div style="background: #0f172a; border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 16px; padding: 28px 22px; text-align: left; box-shadow: 0 10px 30px rgba(0,0,0,0.3);">
          <span style="background: rgba(245, 158, 11, 0.1); color: #f59e0b; border: 1px solid rgba(245, 158, 11, 0.4); border-radius: 20px; font-size: 0.75rem; font-weight: 700; padding: 4px 14px; margin-bottom: 16px; display: inline-block;">
            Stage 01 &bull; Household Packing
          </span>
          <div style="width: 44px; height: 44px; background: rgba(245, 158, 11, 0.15); border-radius: 12px; display: flex; align-items: center; justify-content: center; color: #f59e0b; font-size: 1.15rem; margin-bottom: 18px;">
            <i class="fas fa-box"></i>
          </div>
          <h3 style="font-size: 1.2rem; font-weight: 700; color: #ffffff; margin-bottom: 12px; line-height: 1.35;">Multi-Layer Household Wrapping</h3>
          <p style="font-size: 0.9rem; color: #cbd5e1; line-height: 1.65; margin: 0;">
            Our expert <strong>packers and movers in ranchi</strong> wrap sofas, wooden wardrobes, and glass cabinets in multi-layer bubble film, heavy corrugated sheets, and stretch wrap to prevent scratches during transport.
          </p>
        </div>

        <!-- Stage 02 -->
        <div style="background: #0f172a; border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 16px; padding: 28px 22px; text-align: left; box-shadow: 0 10px 30px rgba(0,0,0,0.3);">
          <span style="background: rgba(245, 158, 11, 0.1); color: #f59e0b; border: 1px solid rgba(245, 158, 11, 0.4); border-radius: 20px; font-size: 0.75rem; font-weight: 700; padding: 4px 14px; margin-bottom: 16px; display: inline-block;">
            Stage 02 &bull; Heavy Loading
          </span>
          <div style="width: 44px; height: 44px; background: rgba(245, 158, 11, 0.15); border-radius: 12px; display: flex; align-items: center; justify-content: center; color: #f59e0b; font-size: 1.15rem; margin-bottom: 18px;">
            <i class="fas fa-dolly"></i>
          </div>
          <h3 style="font-size: 1.2rem; font-weight: 700; color: #ffffff; margin-bottom: 12px; line-height: 1.35;">Safe Cargo &amp; Furniture Loading</h3>
          <p style="font-size: 0.9rem; color: #cbd5e1; line-height: 1.65; margin: 0;">
            Trained loaders utilize ramps, sliders, and heavy-duty belts to safely lift double beds, refrigerators, and washing machines into closed trucks without damage.
          </p>
        </div>

        <!-- Stage 03 -->
        <div style="background: #0f172a; border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 16px; padding: 28px 22px; text-align: left; box-shadow: 0 10px 30px rgba(0,0,0,0.3);">
          <span style="background: rgba(245, 158, 11, 0.1); color: #f59e0b; border: 1px solid rgba(245, 158, 11, 0.4); border-radius: 20px; font-size: 0.75rem; font-weight: 700; padding: 4px 14px; margin-bottom: 16px; display: inline-block;">
            Stage 03 &bull; Container Transport
          </span>
          <div style="width: 44px; height: 44px; background: rgba(245, 158, 11, 0.15); border-radius: 12px; display: flex; align-items: center; justify-content: center; color: #f59e0b; font-size: 1.15rem; margin-bottom: 18px;">
            <i class="fas fa-truck"></i>
          </div>
          <h3 style="font-size: 1.2rem; font-weight: 700; color: #ffffff; margin-bottom: 12px; line-height: 1.35;">Enclosed GPS Shifting Fleet</h3>
          <p style="font-size: 0.9rem; color: #cbd5e1; line-height: 1.65; margin: 0;">
            Weatherproof, fully enclosed container trucks protecting your goods from rain, dust, and transit hazards while being tracked live via satellite GPS by our <strong>packers and movers in ranchi</strong>.
          </p>
        </div>

        <!-- Stage 04 -->
        <div style="background: #0f172a; border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 16px; padding: 28px 22px; text-align: left; box-shadow: 0 10px 30px rgba(0,0,0,0.3);">
          <span style="background: rgba(245, 158, 11, 0.1); color: #f59e0b; border: 1px solid rgba(245, 158, 11, 0.4); border-radius: 20px; font-size: 0.75rem; font-weight: 700; padding: 4px 14px; margin-bottom: 16px; display: inline-block;">
            Stage 04 &bull; Vehicle Transport
          </span>
          <div style="width: 44px; height: 44px; background: rgba(245, 158, 11, 0.15); border-radius: 12px; display: flex; align-items: center; justify-content: center; color: #f59e0b; font-size: 1.15rem; margin-bottom: 18px;">
            <i class="fas fa-car"></i>
          </div>
          <h3 style="font-size: 1.2rem; font-weight: 700; color: #ffffff; margin-bottom: 12px; line-height: 1.35;">Hydraulic Car &amp; Bike Carriers</h3>
          <p style="font-size: 0.9rem; color: #cbd5e1; line-height: 1.65; margin: 0;">
            Dedicated hydraulic car trailers and belt-locked bike containers ensuring scratch-free, zero-mileage transportation connecting Lalpur to any destination in India.
          </p>
        </div>

        <!-- Stage 05 -->
        <div style="background: #0f172a; border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 16px; padding: 28px 22px; text-align: left; box-shadow: 0 10px 30px rgba(0,0,0,0.3);">
          <span style="background: rgba(245, 158, 11, 0.1); color: #f59e0b; border: 1px solid rgba(245, 158, 11, 0.4); border-radius: 20px; font-size: 0.75rem; font-weight: 700; padding: 4px 14px; margin-bottom: 16px; display: inline-block;">
            Stage 05 &bull; Unpacking &amp; Setup
          </span>
          <div style="width: 44px; height: 44px; background: rgba(245, 158, 11, 0.15); border-radius: 12px; display: flex; align-items: center; justify-content: center; color: #f59e0b; font-size: 1.15rem; margin-bottom: 18px;">
            <i class="fas fa-home"></i>
          </div>
          <h3 style="font-size: 1.2rem; font-weight: 700; color: #ffffff; margin-bottom: 12px; line-height: 1.35;">Room-by-Room Setup &amp; Unboxing</h3>
          <p style="font-size: 0.9rem; color: #cbd5e1; line-height: 1.65; margin: 0;">
            Upon arrival, our professional <strong>packers and movers in ranchi</strong> unpack boxes, re-assemble beds and dining tables, and arrange furniture in your designated rooms.
          </p>
        </div>

        <!-- Stage 06 -->
        <div style="background: #0f172a; border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 16px; padding: 28px 22px; text-align: left; box-shadow: 0 10px 30px rgba(0,0,0,0.3);">
          <span style="background: rgba(245, 158, 11, 0.1); color: #f59e0b; border: 1px solid rgba(245, 158, 11, 0.4); border-radius: 20px; font-size: 0.75rem; font-weight: 700; padding: 4px 14px; margin-bottom: 16px; display: inline-block;">
            Stage 06 &bull; Storage Warehouse
          </span>
          <div style="width: 44px; height: 44px; background: rgba(245, 158, 11, 0.15); border-radius: 12px; display: flex; align-items: center; justify-content: center; color: #f59e0b; font-size: 1.15rem; margin-bottom: 18px;">
            <i class="fas fa-warehouse"></i>
          </div>
          <h3 style="font-size: 1.2rem; font-weight: 700; color: #ffffff; margin-bottom: 12px; line-height: 1.35;">Pest-Controlled Warehouse Storage</h3>
          <p style="font-size: 0.9rem; color: #cbd5e1; line-height: 1.65; margin: 0;">
            Safe short-term and long-term storage facility in Lalpur equipped with 24/7 CCTV surveillance, fire alarms, and moisture-controlled units for your household goods.
          </p>
        </div>

      </div>

    </div>
  </section>

  <!-- Section: Essential Moving Tips & Expert Shifting Guide -->
  <section class="moving-tips-section" style="padding: 65px 0; background: #070d19; color: #ffffff;">
    <div class="container" style="max-width: 1150px; margin: 0 auto; padding: 0 15px;">
      
      <div style="text-align: center; margin-bottom: 45px;">
        <span class="pill-badge" style="background: rgba(245, 158, 11, 0.1); color: #f59e0b; border: 1.5px solid rgba(245, 158, 11, 0.3); padding: 6px 20px; border-radius: 30px; font-size: 0.82rem; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; display: inline-block; margin-bottom: 16px;">
          SHIFTING GUIDE &amp; EXPERT ADVICE
        </span>
        <h2 style="font-size: 2.3rem; font-weight: 800; color: #ffffff; margin-bottom: 16px; line-height: 1.3;">
          Essential Moving Tips by Top <span style="color: #f59e0b;">Packers and Movers in Ranchi</span>
        </h2>
        <p style="font-size: 1.05rem; color: #cbd5e1; max-width: 850px; margin: 0 auto; line-height: 1.7;">
          Planning your upcoming household or office move? Read expert advice and packing guidelines prepared by experienced <strong>packers and movers in ranchi</strong> to ensure an organized, damage-free shifting journey in Lalpur.
        </p>
      </div>

      <!-- 4 Moving Tips Cards Grid (2x2) -->
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 25px; margin-top: 25px;">
        
        <!-- Tip Card 1 -->
        <div style="background: #0f172a; border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 16px; padding: 28px 25px; text-align: left; box-shadow: 0 10px 30px rgba(0,0,0,0.3);">
          <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 18px;">
            <span style="background: rgba(245, 158, 11, 0.1); color: #f59e0b; border: 1px solid rgba(245, 158, 11, 0.4); border-radius: 20px; font-size: 0.75rem; font-weight: 700; padding: 4px 14px; display: inline-block;">
              HOME SHIFTING
            </span>
            <span style="color: #94a3b8; font-size: 0.8rem;">
              <i class="far fa-clock" style="margin-right: 4px;"></i> 4 Min Read
            </span>
          </div>
          <h3 style="font-size: 1.25rem; font-weight: 700; color: #ffffff; margin-bottom: 14px; line-height: 1.35;">How to Prepare Household Items Before Shifting Day</h3>
          <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.65; margin: 0;">
            Declutter unused items room by room, defrost your refrigerator 24 hours prior, keep essential medical &amp; personal documents in a handbag, and label fragile boxes clearly before your <strong>packers and movers in ranchi</strong> arrive.
          </p>
        </div>

        <!-- Tip Card 2 -->
        <div style="background: #0f172a; border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 16px; padding: 28px 25px; text-align: left; box-shadow: 0 10px 30px rgba(0,0,0,0.3);">
          <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 18px;">
            <span style="background: rgba(245, 158, 11, 0.1); color: #f59e0b; border: 1px solid rgba(245, 158, 11, 0.4); border-radius: 20px; font-size: 0.75rem; font-weight: 700; padding: 4px 14px; display: inline-block;">
              SAFETY ADVICE
            </span>
            <span style="color: #94a3b8; font-size: 0.8rem;">
              <i class="far fa-clock" style="margin-right: 4px;"></i> 3 Min Read
            </span>
          </div>
          <h3 style="font-size: 1.25rem; font-weight: 700; color: #ffffff; margin-bottom: 14px; line-height: 1.35;">10 Items You Should Never Pack in a Shifting Truck</h3>
          <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.65; margin: 0;">
            Avoid loading hazardous liquids, gas cylinders, paint thinners, cash, or jewelry into general transit trucks. Professional <strong>packers and movers in ranchi</strong> recommend carrying personal valuables safely in your private vehicle.
          </p>
        </div>

        <!-- Tip Card 3 -->
        <div style="background: #0f172a; border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 16px; padding: 28px 25px; text-align: left; box-shadow: 0 10px 30px rgba(0,0,0,0.3);">
          <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 18px;">
            <span style="background: rgba(245, 158, 11, 0.1); color: #f59e0b; border: 1px solid rgba(245, 158, 11, 0.4); border-radius: 20px; font-size: 0.75rem; font-weight: 700; padding: 4px 14px; display: inline-block;">
              VERIFICATION CHECKLIST
            </span>
            <span style="color: #94a3b8; font-size: 0.8rem;">
              <i class="far fa-clock" style="margin-right: 4px;"></i> 5 Min Read
            </span>
          </div>
          <h3 style="font-size: 1.25rem; font-weight: 700; color: #ffffff; margin-bottom: 14px; line-height: 1.35;">How to Identify Authentic Registered Packers and Movers in Ranchi</h3>
          <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.65; margin: 0;">
            Verify official GST registration, IBA approval certificates, physical warehouse office in Lalpur, and demand written contracts to avoid unverified local brokers posing as genuine <strong>packers and movers in ranchi</strong>.
          </p>
        </div>

        <!-- Tip Card 4 -->
        <div style="background: #0f172a; border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 16px; padding: 28px 25px; text-align: left; box-shadow: 0 10px 30px rgba(0,0,0,0.3);">
          <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 18px;">
            <span style="background: rgba(245, 158, 11, 0.1); color: #f59e0b; border: 1px solid rgba(245, 158, 11, 0.4); border-radius: 20px; font-size: 0.75rem; font-weight: 700; padding: 4px 14px; display: inline-block;">
              VEHICLE SHIFTING
            </span>
            <span style="color: #94a3b8; font-size: 0.8rem;">
              <i class="far fa-clock" style="margin-right: 4px;"></i> 4 Min Read
            </span>
          </div>
          <h3 style="font-size: 1.25rem; font-weight: 700; color: #ffffff; margin-bottom: 14px; line-height: 1.35;">Car &amp; Bike Shifting Checklist: Preventing Transit Scratches</h3>
          <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.65; margin: 0;">
            Wash your vehicle to inspect pre-existing scratches, keep fuel tank level low (around 25%), remove personal accessories, and record odometer readings before handing over keys to your <strong>packers and movers in ranchi</strong>.
          </p>
        </div>

      </div>

    </div>
  </section>

  <!-- Section: Custom FAQ Accordion & Schema JSON-LD -->
  <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "What is the estimated cost of hiring packers and movers in ranchi in Lalpur?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Relocation costs in Lalpur depend on the volume of goods, transport distance, and packing quality. Local shifting in Lalpur typically starts from ₹3,000 to ₹12,000 for 1-3 BHK apartments, while intercity transport varies based on distance. We offer free, transparent, itemized estimates."
      }
    },
    {
      "@type": "Question",
      "name": "How early should I book packers and movers in ranchi for shifting in Lalpur?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "We recommend booking your move at least 2 to 4 days in advance for local shifting in Lalpur, and 5 to 7 days prior for peak weekend or month-end intercity relocations to secure dedicated container trucks."
      }
    },
    {
      "@type": "Question",
      "name": "Do your packers and movers in ranchi provide transit insurance coverage?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, we provide 100% full transit insurance coverage for household goods, commercial stock, and vehicles shifted across Lalpur and pan-India routes to safeguard against accidental damage or loss."
      }
    },
    {
      "@type": "Question",
      "name": "What multi-layer packing materials are used for fragile items in Lalpur?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Our moving crew in Lalpur uses heavy-duty bubble wraps, high-density corrugated boxes, stretch film, edge corner guards, and custom wooden crates for glass items, TVs, and electronic appliances."
      }
    },
    {
      "@type": "Question",
      "name": "Are there any hidden fees or surprise charges on moving day in Lalpur?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "No, Shree Ashirwad operates with a 100% Fixed Price Guarantee. All quotes provided by our certified packers and movers in ranchi in Lalpur are written and itemized, including loading, unloading, packing materials, and GST billing."
      }
    }
  ]
}
  </script>

  <section class="faq-section" style="padding: 65px 0; background: #0b132b; color: #ffffff;">
    <div class="container" style="max-width: 1000px; margin: 0 auto; padding: 0 15px;">
      
      <div style="text-align: center; margin-bottom: 45px;">
        <span class="pill-badge" style="background: rgba(245, 158, 11, 0.1); color: #f59e0b; border: 1.5px solid rgba(245, 158, 11, 0.3); padding: 6px 20px; border-radius: 30px; font-size: 0.82rem; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; display: inline-block; margin-bottom: 16px;">
          FREQUENTLY ASKED QUESTIONS
        </span>
        <h2 style="font-size: 2.3rem; font-weight: 800; color: #ffffff; margin-bottom: 16px; line-height: 1.3;">
          Got Questions About <span style="color: #f59e0b;">Packers and Movers in Ranchi</span> in Lalpur?
        </h2>
        <p style="font-size: 1.05rem; color: #cbd5e1; max-width: 850px; margin: 0 auto; line-height: 1.7;">
          Find detailed answers to common queries regarding shifting estimates, packing safety, insurance coverage, and booking procedures for <strong>packers and movers in ranchi</strong> in Lalpur.
        </p>
      </div>

      <!-- FAQ Accordion Container -->
      <div style="display: flex; flex-direction: column; gap: 15px;">
        
        <!-- FAQ Item 1 -->
        <details style="background: #0f172a; border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 12px; overflow: hidden; transition: all 0.3s ease;">
          <summary style="padding: 18px 24px; color: #ffffff; font-weight: 700; font-size: 1.05rem; cursor: pointer; outline: none; list-style: none; display: flex; justify-content: space-between; align-items: center;">
            <span><strong style="color: #f59e0b; margin-right: 8px;">Q1.</strong> What is the estimated cost of hiring packers and movers in ranchi in Lalpur?</span>
            <span style="color: #f59e0b; font-size: 1.2rem; font-weight: 800;">&#43;</span>
          </summary>
          <div style="padding: 0 24px 20px 24px; color: #cbd5e1; font-size: 0.95rem; line-height: 1.7; border-top: 1px solid rgba(255,255,255,0.08); margin-top: 10px; padding-top: 15px;">
            Relocation costs in Lalpur depend on the volume of goods, transport distance, and packing quality. Local shifting in Lalpur typically starts from ₹3,000 to ₹12,000 for 1-3 BHK apartments, while intercity transport varies based on distance. We offer free, transparent, itemized estimates.
          </div>
        </details>

        <!-- FAQ Item 2 -->
        <details style="background: #0f172a; border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 12px; overflow: hidden; transition: all 0.3s ease;">
          <summary style="padding: 18px 24px; color: #ffffff; font-weight: 700; font-size: 1.05rem; cursor: pointer; outline: none; list-style: none; display: flex; justify-content: space-between; align-items: center;">
            <span><strong style="color: #f59e0b; margin-right: 8px;">Q2.</strong> How early should I book packers and movers in ranchi for shifting in Lalpur?</span>
            <span style="color: #f59e0b; font-size: 1.2rem; font-weight: 800;">&#43;</span>
          </summary>
          <div style="padding: 0 24px 20px 24px; color: #cbd5e1; font-size: 0.95rem; line-height: 1.7; border-top: 1px solid rgba(255,255,255,0.08); margin-top: 10px; padding-top: 15px;">
            We recommend booking your move at least 2 to 4 days in advance for local shifting in Lalpur, and 5 to 7 days prior for peak weekend or month-end intercity relocations to secure dedicated container trucks.
          </div>
        </details>

        <!-- FAQ Item 3 -->
        <details style="background: #0f172a; border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 12px; overflow: hidden; transition: all 0.3s ease;">
          <summary style="padding: 18px 24px; color: #ffffff; font-weight: 700; font-size: 1.05rem; cursor: pointer; outline: none; list-style: none; display: flex; justify-content: space-between; align-items: center;">
            <span><strong style="color: #f59e0b; margin-right: 8px;">Q3.</strong> Do your packers and movers in ranchi provide transit insurance coverage?</span>
            <span style="color: #f59e0b; font-size: 1.2rem; font-weight: 800;">&#43;</span>
          </summary>
          <div style="padding: 0 24px 20px 24px; color: #cbd5e1; font-size: 0.95rem; line-height: 1.7; border-top: 1px solid rgba(255,255,255,0.08); margin-top: 10px; padding-top: 15px;">
            Yes, we provide 100% full transit insurance coverage for household goods, commercial stock, and vehicles shifted across Lalpur and pan-India routes to safeguard against accidental damage or loss.
          </div>
        </details>

        <!-- FAQ Item 4 -->
        <details style="background: #0f172a; border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 12px; overflow: hidden; transition: all 0.3s ease;">
          <summary style="padding: 18px 24px; color: #ffffff; font-weight: 700; font-size: 1.05rem; cursor: pointer; outline: none; list-style: none; display: flex; justify-content: space-between; align-items: center;">
            <span><strong style="color: #f59e0b; margin-right: 8px;">Q4.</strong> What multi-layer packing materials are used for fragile items in Lalpur?</span>
            <span style="color: #f59e0b; font-size: 1.2rem; font-weight: 800;">&#43;</span>
          </summary>
          <div style="padding: 0 24px 20px 24px; color: #cbd5e1; font-size: 0.95rem; line-height: 1.7; border-top: 1px solid rgba(255,255,255,0.08); margin-top: 10px; padding-top: 15px;">
            Our moving crew in Lalpur uses heavy-duty bubble wraps, high-density corrugated boxes, stretch film, edge corner guards, and custom wooden crates for glass items, TVs, and electronic appliances.
          </div>
        </details>

        <!-- FAQ Item 5 -->
        <details style="background: #0f172a; border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 12px; overflow: hidden; transition: all 0.3s ease;">
          <summary style="padding: 18px 24px; color: #ffffff; font-weight: 700; font-size: 1.05rem; cursor: pointer; outline: none; list-style: none; display: flex; justify-content: space-between; align-items: center;">
            <span><strong style="color: #f59e0b; margin-right: 8px;">Q5.</strong> Are there any hidden fees or surprise charges on moving day in Lalpur?</span>
            <span style="color: #f59e0b; font-size: 1.2rem; font-weight: 800;">&#43;</span>
          </summary>
          <div style="padding: 0 24px 20px 24px; color: #cbd5e1; font-size: 0.95rem; line-height: 1.7; border-top: 1px solid rgba(255,255,255,0.08); margin-top: 10px; padding-top: 15px;">
            No, Shree Ashirwad operates with a 100% Fixed Price Guarantee. All quotes provided by our certified packers and movers in ranchi in Lalpur are written and itemized, including loading, unloading, packing materials, and GST billing.
          </div>
        </details>

      </div>

    </div>
  </section>

  <!-- Section: Final Conversion Call to Action Banner -->
  <section class="smooth-move-cta-section" style="padding: 55px 0; background: #070d19; color: #ffffff;">
    <div class="container" style="max-width: 1150px; margin: 0 auto; padding: 0 15px;">
      
      <div style="background: linear-gradient(135deg, #1e1b4b 0%, #0f172a 50%, #070d19 100%); border: 1.5px solid rgba(245, 158, 11, 0.4); border-radius: 20px; padding: 50px 30px; text-align: center; box-shadow: 0 20px 40px rgba(0,0,0,0.5);">
        
        <span class="pill-badge" style="background: rgba(245, 158, 11, 0.1); color: #f59e0b; border: 1.5px solid rgba(245, 158, 11, 0.3); padding: 6px 20px; border-radius: 30px; font-size: 0.82rem; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; display: inline-block; margin-bottom: 20px;">
          READY FOR A SMOOTH MOVE?
        </span>
        
        <h2 style="font-size: 2.3rem; font-weight: 800; color: #ffffff; margin-bottom: 18px; line-height: 1.3;">
          Book Top Rated <span style="color: #f59e0b;">Packers and Movers in Ranchi</span> Today!
        </h2>
        
        <p style="font-size: 1.05rem; color: #cbd5e1; max-width: 850px; margin: 0 auto 30px auto; line-height: 1.7;">
          Join 10,000+ satisfied families and corporate clients across Lalpur. Get 100% safe packing, real-time GPS vehicle tracking, and zero hidden costs with our trusted <strong>packers and movers in ranchi</strong>.
        </p>

        <!-- CTA Buttons Row -->
        <div style="display: flex; flex-wrap: wrap; justify-content: center; gap: 15px; margin-bottom: 30px;">
          <a href="tel:+918409531615" title="Call Now" style="padding: 14px 28px; background: linear-gradient(135deg, #e11d48 0%, #f59e0b 100%); color: #ffffff; border-radius: 30px; font-weight: 700; font-size: 1rem; text-decoration: none; display: inline-flex; align-items: center; gap: 8px; box-shadow: 0 6px 20px rgba(225, 29, 72, 0.4);">
            <i class="fas fa-phone-alt"></i> Call (+91) 8409531615
          </a>
          
          <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad,%20I%20want%20to%20book%20Packers%20and%20Movers%20in%20Ranchi%20in%20Lalpur" title="Chat on WhatsApp" target="_blank" style="padding: 14px 28px; background: #25D366; color: #ffffff; border-radius: 30px; font-weight: 700; font-size: 1rem; text-decoration: none; display: inline-flex; align-items: center; gap: 8px; box-shadow: 0 6px 20px rgba(37, 211, 102, 0.4);">
            <i class="fab fa-whatsapp"></i> Chat on WhatsApp
          </a>

          <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad,%20I%20want%20to%20get%20a%20Shifting%20Estimate%20for%20Lalpur" title="Get Shifting Estimate" target="_blank" style="padding: 14px 28px; background: transparent; border: 1.5px solid #f59e0b; color: #ffffff; border-radius: 30px; font-weight: 700; font-size: 1rem; text-decoration: none; display: inline-flex; align-items: center; gap: 8px;">
            <i class="fas fa-calculator"></i> Get Shifting Estimate
          </a>
        </div>

        <!-- Horizontal Trust Highlights Divider -->
        <div style="border-top: 1px solid rgba(255, 255, 255, 0.1); margin-top: 25px; padding-top: 20px; display: flex; flex-wrap: wrap; justify-content: center; gap: 25px; font-size: 0.88rem; color: #cbd5e1; font-weight: 600;">
          <div><span style="color: #f59e0b; margin-right: 6px;">&check;</span> 100% Safe Multi-Layer Packing</div>
          <div><span style="color: #f59e0b; margin-right: 6px;">&check;</span> IBA Approved GST Billing</div>
          <div><span style="color: #f59e0b; margin-right: 6px;">&check;</span> Live Satellite GPS Tracking</div>
          <div><span style="color: #f59e0b; margin-right: 6px;">&check;</span> Guaranteed On-Time Shifting</div>
        </div>

      </div>

    </div>
  </section>












  <!-- Section 2: Trust Counter & Live Achievements -->
  <section class="stats-section" style="padding: 50px 0; background: #070d1e; border-bottom: 1px solid rgba(245, 158, 11, 0.2);">
    <div class="container">
      <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 20px; text-align: center;">
        <div style="padding: 20px; background: rgba(23, 42, 84, 0.5); border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">15+</div>
          <div style="font-size: 0.9rem; color: #cbd5e1; margin-top: 5px;">Years Operational Excellence</div>
        </div>
        <div style="padding: 20px; background: rgba(23, 42, 84, 0.5); border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">12,500+</div>
          <div style="font-size: 0.9rem; color: #cbd5e1; margin-top: 5px;">Satisfied Home Relocations</div>
        </div>
        <div style="padding: 20px; background: rgba(23, 42, 84, 0.5); border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">50+</div>
          <div style="font-size: 0.9rem; color: #cbd5e1; margin-top: 5px;">Weatherproof Moving Fleet</div>
        </div>
        <div style="padding: 20px; background: rgba(23, 42, 84, 0.5); border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">100%</div>
          <div style="font-size: 0.9rem; color: #cbd5e1; margin-top: 5px;">Claim-Ready IBA Documentation</div>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 3: Deep Comprehensive Content Section (Part 1 - Overview & Need) -->
  <section style="padding: 70px 0; background: #0b132b; color: #e2e8f0; line-height: 1.8;">
    <div class="container">
      
      <div style="max-width: 900px; margin: 0 auto;">
        <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Complete Relocation Guide</span>
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin: 10px 0 20px 0;">
          Why Choosing the <span style="color: #f59e0b;">Best Packers and Movers in Ranchi</span> Matters for Your Move
        </h2>

        <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px; margin: 30px 0;">
          
          <!-- Card 1 -->
          <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px; box-shadow: 0 10px 25px rgba(0,0,0,0.3);">
            <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;"><i class="fas fa-map-marker-alt"></i></div>
            <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">Capital Shifting Logistics</h3>
            <p style="font-size: 0.9rem; color: #cbd5e1; line-height: 1.6; margin: 0;">
              Relocating in Ranchi requires careful planning. From fragile glassware to navigating city traffic, hiring verified <strong>packers and movers in ranchi</strong> guarantees zero-damage, stress-free household relocation.
            </p>
          </div>

          <!-- Card 2 -->
          <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px; box-shadow: 0 10px 25px rgba(0,0,0,0.3);">
            <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;"><i class="fas fa-city"></i></div>
            <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">Hyper-Local Network</h3>
            <p style="font-size: 0.9rem; color: #cbd5e1; line-height: 1.6; margin: 0;">
              We cover all major Ranchi sectors including Lalpur, Harmu, Kanke Road, Ratu Road, Doranda, and Morabadi. Our <strong>top packers and movers in ranchi</strong> ensure prompt doorstep arrival and quick loading.
            </p>
          </div>

          <!-- Card 3 -->
          <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px; box-shadow: 0 10px 25px rgba(0,0,0,0.3);">
            <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;"><i class="fas fa-shield-alt"></i></div>
            <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">IBA Approved Claims</h3>
            <p style="font-size: 0.9rem; color: #cbd5e1; line-height: 1.6; margin: 0;">
              As an official <strong>iba approved packers and movers ranchi</strong>, we furnish 100% compliant GST consignment invoices, LR receipts, and packing lists accepted for defense and corporate transfer claims.
            </p>
          </div>

          <!-- Card 4 -->
          <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px; box-shadow: 0 10px 25px rgba(0,0,0,0.3);">
            <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;"><i class="fas fa-truck"></i></div>
            <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">Dedicated Moving Fleet</h3>
            <p style="font-size: 0.9rem; color: #cbd5e1; line-height: 1.6; margin: 0;">
              Our company operates 50+ weatherproof container trucks with real-time GPS tracking, heavy-duty ramp loading, and internal wall tie-downs for safe long-distance transit across Jharkhand and India.
            </p>
          </div>

          <!-- Card 5 -->
          <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px; box-shadow: 0 10px 25px rgba(0,0,0,0.3);">
            <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;"><i class="fas fa-box"></i></div>
            <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">7-Layer Safety Wrap</h3>
            <p style="font-size: 0.9rem; color: #cbd5e1; line-height: 1.6; margin: 0;">
              We shield your belongings with air-bubble film, corrugated sheets, corner foam guards, stretch wrapping, and custom wooden crates engineered to absorb heavy road shock and vibration.
            </p>
          </div>

          <!-- Card 6 -->
          <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px; box-shadow: 0 10px 25px rgba(0,0,0,0.3);">
            <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;"><i class="fas fa-user-cog"></i></div>
            <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">Trained Move Supervisors</h3>
            <p style="font-size: 0.9rem; color: #cbd5e1; line-height: 1.6; margin: 0;">
              Our uniformed supervisors and experienced carpenters manage bed disassembly, electronic wrapping, systematic truck packing, unloading, and furniture re-assembly at your new destination.
            </p>
          </div>

        </div>

        <!-- Feature Highlight Box -->
        <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border-left: 4px solid #f59e0b; padding: 25px; border-radius: 8px; margin: 35px 0;">
          <h3 style="color: #ffffff; font-size: 1.25rem; font-weight: 700; margin-bottom: 12px;">What Distinguishes Our Relocation Services in Ranchi?</h3>
          <ul style="list-style: none; padding: 0; margin: 0; display: grid; grid-template-columns: 1fr 1fr; gap: 12px; color: #cbd5e1;">
            <li><i class="fas fa-check-circle"></i> <strong>7-Layer Heavy Packaging</strong> for maximum shock protection.</li>
            <li><i class="fas fa-check-circle"></i> <strong>Zero Hidden Charges</strong> with transparent itemized estimates.</li>
            <li><i class="fas fa-check-circle"></i> <strong>GPS Satellite Tracking</strong> on all enclosed moving container trucks.</li>
            <li><i class="fas fa-check-circle"></i> <strong>IBA Approved GST Billing</strong> valid for all corporate & defense claims.</li>
            <li><i class="fas fa-check-circle"></i> <strong>Uniformed & Trained Staff</strong> skilled in furniture disassembly.</li>
            <li><i class="fas fa-check-circle"></i> <strong>24/7 Support Hotline</strong> for real-time shipment updates.</li>
          </ul>
        </div>

      </div>

    </div>
  </section>

  <!-- Section 4: Detailed Services Breakdown -->
  <section style="padding: 70px 0; background: linear-gradient(180deg, #0b132b 0%, #16203b 100%); color: #ffffff;">
    <div class="container">
      
      <div class="section-header text-center" style="margin-bottom: 50px;">
        <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Our Specialized Offerings</span>
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin-top: 10px;">
          Comprehensive Shifting Solutions by Premier <span style="color: #f59e0b;">Packers and Movers Ranchi</span>
        </h2>
        <p style="color: #94a3b8; max-width: 750px; margin: 10px auto 0 auto; font-size: 1rem;">
          We cater to diverse relocation needs across Jharkhand and nationwide destinations with tailored logistics packages.
        </p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 30px;">
        
        <!-- Service Box 1 -->
        <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 28px; transition: transform 0.3s ease;">
          <h3 style="font-size: 1.3rem; color: #f59e0b; font-weight: 700; margin-bottom: 14px;">1. Household Shifting in Ranchi</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; line-height: 1.7;">
            Our core expertise lies in <strong>household shifting in ranchi</strong> and <strong>home relocation services ranchi</strong>. From dismantling modular beds and wardrobes to packing kitchen crockery in shock-resistant bubblewrap and corrugated boxes, we handle every item with reverence. Our team ensures that your furniture, electronics, and personal heirlooms arrive at your new destination in pristine condition.
          </p>
        </div>

        <!-- Service Box 2 -->
        <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 28px; transition: transform 0.3s ease;">
          <h3 style="font-size: 1.3rem; color: #f59e0b; font-weight: 700; margin-bottom: 14px;">2. Office Shifting Services Ranchi</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; line-height: 1.7;">
            Minimizing business downtime is critical during commercial moves. Our specialized <strong>office shifting services ranchi</strong> team operates during weekend or evening hours to pack IT hardware, computer servers, office desks, ergonomic chairs, and confidential document archives systematically using color-coded inventory tags for swift re-assembly at your new location.
          </p>
        </div>

        <!-- Service Box 3 -->
        <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 28px; transition: transform 0.3s ease;">
          <h3 style="font-size: 1.3rem; color: #f59e0b; font-weight: 700; margin-bottom: 14px;">3. Car Transport in Ranchi</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; line-height: 1.7;">
            Relocating your vehicle across state lines requires dedicated specialized carriers. Our <strong>car transport in ranchi</strong> utilizes enclosed hydraulic car carrier trailers equipped with safety wheel clamps and safety belts, ensuring zero mileage addition, scratch protection, and timely doorstep pickup and delivery across India.
          </p>
        </div>

        <!-- Service Box 4 -->
        <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 28px; transition: transform 0.3s ease;">
          <h3 style="font-size: 1.3rem; color: #f59e0b; font-weight: 700; margin-bottom: 14px;">4. Bike Transport Ranchi</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; line-height: 1.7;">
            Protect your two-wheeler from transit scratches and weather elements. Our <strong>bike transport ranchi</strong> service applies paddy straw padding, heavy corrugated sheet wrapping, and high-tensile stretch film to shield gas tanks, rear mirrors, and body panels before securing your motorcycle inside enclosed trucks.
          </p>
        </div>

        <!-- Service Box 5 -->
        <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 28px; transition: transform 0.3s ease;">
          <h3 style="font-size: 1.3rem; color: #f59e0b; font-weight: 700; margin-bottom: 14px;">5. Wooden Crate & Heavy Packaging</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; line-height: 1.7;">
            High-value items such as large 75-inch Smart TVs, marble statues, glass dining tabletops, and chandeliers require custom protective structural framing. We build solid wooden crate boxes on-site to absorb road vibrations and shield delicate items during long-distance transit.
          </p>
        </div>

        <!-- Service Box 6 -->
        <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 28px; transition: transform 0.3s ease;">
          <h3 style="font-size: 1.3rem; color: #f59e0b; font-weight: 700; margin-bottom: 14px;">6. Warehouse & Storage in Ranchi</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; line-height: 1.7;">
            Need temporary storage while waiting for your new home or office keys? Our <strong>warehouse and storage in ranchi</strong> facilities provide 24/7 CCTV surveillance, pest control treatments, moisture protection, and flexible short-term or long-term rental options for household goods and commercial inventory.
          </p>
        </div>

      </div>

    </div>
  </section>

  <!-- Section 5: The 7-Layer Packaging Standard -->
  <section style="padding: 70px 0; background: #0b132b; color: #e2e8f0; border-top: 1px solid rgba(245, 158, 11, 0.15);">
    <div class="container" style="max-width: 900px;">
      
      <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Safety Protocol</span>
      <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin: 10px 0 20px 0;">
        Our Benchmark 7-Layer Material Protection System for <span style="color: #f59e0b;">Safe Packing and Moving Ranchi</span>
      </h2>

      <p style="font-size: 1.05rem; color: #cbd5e1; margin-bottom: 25px; line-height: 1.8;">
        The secret to zero-damage shifting lies in selecting high-grade packaging materials and adhering to disciplined wrapping protocols. As pioneers of <strong>safe packing and moving ranchi</strong>, we do not compromise on material quality. Every item moving out of your residence undergoes our multi-tier packaging process:
      </p>

      <div style="display: grid; grid-template-columns: 1fr; gap: 16px; margin-bottom: 35px;">
        <div style="background: rgba(23, 42, 84, 0.6); padding: 18px 22px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #ffffff; font-size: 1.1rem; margin-bottom: 6px;">Layer 1: Water-Resistant Stretch Film Wrap</h4>
          <p style="font-size: 0.92rem; color: #94a3b8; margin: 0;">Prevents dust accumulation, moisture penetration, and surface scratches during handling.</p>
        </div>

        <div style="background: rgba(23, 42, 84, 0.6); padding: 18px 22px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #ffffff; font-size: 1.1rem; margin-bottom: 6px;">Layer 2: High-Density Air-Bubble Cushioning</h4>
          <p style="font-size: 0.92rem; color: #94a3b8; margin: 0;">Absorbs shock, impacts, and vibrations for fragile glassware, electronics, and wooden polishes.</p>
        </div>

        <div style="background: rgba(23, 42, 84, 0.6); padding: 18px 22px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #ffffff; font-size: 1.1rem; margin-bottom: 6px;">Layer 3: Heavy-Duty Corrugated Board Sheeting</h4>
          <p style="font-size: 0.92rem; color: #94a3b8; margin: 0;">Forms a rigid outer armor around sofas, tables, washing machines, and refrigerator sides.</p>
        </div>

        <div style="background: rgba(23, 42, 84, 0.6); padding: 18px 22px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #ffffff; font-size: 1.1rem; margin-bottom: 6px;">Layer 4: Foam Edge & Corner Guards</h4>
          <p style="font-size: 0.92rem; color: #94a3b8; margin: 0;">Protects sharp wooden and glass corners from chipping during staircases or elevator transit.</p>
        </div>

        <div style="background: rgba(23, 42, 84, 0.6); padding: 18px 22px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #ffffff; font-size: 1.1rem; margin-bottom: 6px;">Layer 5: Custom Wooden Crate Framing (For Delicate Valuables)</h4>
          <p style="font-size: 0.92rem; color: #94a3b8; margin: 0;">Tailor-built solid wooden crates for 65+ inch televisions, mirrors, marble, and artwork.</p>
        </div>

        <div style="background: rgba(23, 42, 84, 0.6); padding: 18px 22px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #ffffff; font-size: 1.1rem; margin-bottom: 6px;">Layer 6: Branded Sealing Tape & Itemized Marking</h4>
          <p style="font-size: 0.92rem; color: #94a3b8; margin: 0;">Clear room-wise labeling and secure tamper-evident sealing tape for easy tracking and unboxing.</p>
        </div>

        <div style="background: rgba(23, 42, 84, 0.6); padding: 18px 22px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #ffffff; font-size: 1.1rem; margin-bottom: 6px;">Layer 7: Nylon Belt Tiedowns Inside Enclosed Container Trucks</h4>
          <p style="font-size: 0.92rem; color: #94a3b8; margin: 0;">Secures goods firmly to internal truck walls to prevent movement during highway transit.</p>
        </div>
      </div>

    </div>
  </section>

  <!-- Section 6: Ranchi Neighborhood Coverage & Local Geographic Logistics (Internal Linking Block 1) -->
  <section style="padding: 70px 0; background: #070d1e; color: #ffffff;">
    <div class="container" style="max-width: 900px;">
      
      <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Hyper-Local Network</span>
      <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin: 10px 0 20px 0;">
        Serving Every Neighborhood as Premier <span style="color: #f59e0b;">Local Packers and Movers Ranchi</span>
      </h2>

      <p style="font-size: 1.05rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 20px;">
        As established <strong>local packers and movers ranchi</strong>, our logistics network spans across all major residential sectors, commercial hubs, and suburban developments in the capital region. Our local move crews understand the traffic patterns, narrow residential lanes, apartment building hoist policies, and peak hours across Ranchi, enabling smooth execution.
      </p>

      <p style="font-size: 1.05rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 25px;">
        Whether you require immediate <strong>house relocation in ranchi</strong> or single-item <strong>luggage transport service ranchi</strong>, we provide active door-to-door coverage in:
      </p>

      <!-- Internal Link Grid 1 (4 Contextual Internal Links embedded) -->
      <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 16px; margin-bottom: 30px;">
        <div style="background: #101c40; padding: 18px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #ffffff; font-size: 1.1rem; margin-bottom: 8px;">Lalpur &amp; Commercial Hubs</h4>
          <p style="font-size: 0.9rem; color: #94a3b8; margin-bottom: 10px;">Fast local shifting in high-density areas near Circular Road and Plaza Chowk.</p>
          <a href="<?php echo SITE_URL; ?>packers-and-movers-lalpur-ranchi" title="Explore Packers and Movers Lalpur Ranchi →" style="color: #f59e0b; text-decoration: underline; font-weight: 600; font-size: 0.9rem;">
            Explore Packers and Movers Lalpur Ranchi →
          </a>
        </div>

        <div style="background: #101c40; padding: 18px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #ffffff; font-size: 1.1rem; margin-bottom: 8px;">Harmu &amp; Housing Board Colony</h4>
          <p style="font-size: 0.9rem; color: #94a3b8; margin-bottom: 10px;">Direct access from our Ranchi Head Office at Anandpuri Chowk, Harmu.</p>
          <a href="<?php echo SITE_URL; ?>packers-and-movers-harmu-ranchi" title="Explore Packers and Movers Harmu Ranchi →" style="color: #f59e0b; text-decoration: underline; font-weight: 600; font-size: 0.9rem;">
            Explore Packers and Movers Harmu Ranchi →
          </a>
        </div>

        <div style="background: #101c40; padding: 18px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #ffffff; font-size: 1.1rem; margin-bottom: 8px;">Kanke Road &amp; Premium Villas</h4>
          <p style="font-size: 0.9rem; color: #94a3b8; margin-bottom: 10px;">Specialized heavy furniture & luxury home shifting around Kanke Road.</p>
          <a href="<?php echo SITE_URL; ?>packers-and-movers-kanke-road-ranchi" title="Explore Packers and Movers Kanke Road Ranchi →" style="color: #f59e0b; text-decoration: underline; font-weight: 600; font-size: 0.9rem;">
            Explore Packers and Movers Kanke Road Ranchi →
          </a>
        </div>

        <div style="background: #101c40; padding: 18px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #ffffff; font-size: 1.1rem; margin-bottom: 8px;">Ratu Road &amp; Pandra Market</h4>
          <p style="font-size: 0.9rem; color: #94a3b8; margin-bottom: 10px;">Efficient packing & loading for residential & retail moves along Ratu Road.</p>
          <a href="<?php echo SITE_URL; ?>packers-and-movers-ratu-road-ranchi" title="Explore Packers and Movers Ratu Road Ranchi →" style="color: #f59e0b; text-decoration: underline; font-weight: 600; font-size: 0.9rem;">
            Explore Packers and Movers Ratu Road Ranchi →
          </a>
        </div>
      </div>

      <p style="font-size: 0.95rem; color: #cbd5e1;">
        We also regularly serve Doranda, Bariatu, Hinoo, Morabadi, Namkum, Kokar, Tupudana, Piska Nagri, Dhurwa, Kantatoli, Hatia, Hesag, Booty More, Ashok Nagar, Chutia, Kadru, Siramtoli, and main road sectors.
      </p>

    </div>
  </section>

  <!-- Section 7: Intercity Routes & Highway Networks from Ranchi (Internal Linking Block 2) -->
  <section style="padding: 70px 0; background: #0b132b; color: #ffffff;">
    <div class="container" style="max-width: 900px;">
      
      <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Long-Distance Express Logistics</span>
      <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin: 10px 0 20px 0;">
        Seamless Intercity Moving by Leading <span style="color: #f59e0b;">Intercity Movers in Ranchi</span>
      </h2>

      <p style="font-size: 1.05rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 20px;">
        Relocating across state lines or between major industrial centers requires heavy-duty vehicles, experienced long-haul drivers, transit permits, and live GPS tracking. As established <strong>intercity movers in ranchi</strong> and trusted <strong>packers and movers in jharkhand</strong>, we connect Ranchi directly to key regional and national hubs via National Highway networks (NH-33, NH-19, and GT Road).
      </p>

      <p style="font-size: 1.05rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 25px;">
        Our premier intercity transport corridors include:
      </p>

      <!-- Internal Link Grid 2 (4 Contextual Internal Links embedded) -->
      <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 16px; margin-bottom: 30px;">
        <div style="background: #172a54; padding: 18px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #ffffff; font-size: 1.1rem; margin-bottom: 8px;">Ranchi to Jamshedpur Corridor</h4>
          <p style="font-size: 0.9rem; color: #94a3b8; margin-bottom: 10px;">Daily container truck trips via NH-33 linking Ranchi to Steel City Jamshedpur &amp; Tatanagar.</p>
          <a href="<?php echo SITE_URL; ?>packers-and-movers-ranchi-to-jamshedpur" title="Ranchi to Jamshedpur Shifting Services →" style="color: #f59e0b; text-decoration: underline; font-weight: 600; font-size: 0.9rem;">
            Ranchi to Jamshedpur Shifting Services →
          </a>
        </div>

        <div style="background: #172a54; padding: 18px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #ffffff; font-size: 1.1rem; margin-bottom: 8px;">Ranchi to Dhanbad Route</h4>
          <p style="font-size: 0.9rem; color: #94a3b8; margin-bottom: 10px;">Punctual household &amp; commercial relocation connecting Ranchi to Dhanbad &amp; Bokaro.</p>
          <a href="<?php echo SITE_URL; ?>packers-and-movers-ranchi-to-dhanbad" title="Ranchi to Dhanbad Shifting Services →" style="color: #f59e0b; text-decoration: underline; font-weight: 600; font-size: 0.9rem;">
            Ranchi to Dhanbad Shifting Services →
          </a>
        </div>

        <div style="background: #172a54; padding: 18px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #ffffff; font-size: 1.1rem; margin-bottom: 8px;">Ranchi to Kolkata Express</h4>
          <p style="font-size: 0.9rem; color: #94a3b8; margin-bottom: 10px;">Direct interstate moving linking Jharkhand to West Bengal via GT Road &amp; NH-19.</p>
          <a href="<?php echo SITE_URL; ?>packers-and-movers-ranchi-to-kolkata" title="Ranchi to Kolkata Shifting Services →" style="color: #f59e0b; text-decoration: underline; font-weight: 600; font-size: 0.9rem;">
            Ranchi to Kolkata Shifting Services →
          </a>
        </div>

        <div style="background: #172a54; padding: 18px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #ffffff; font-size: 1.1rem; margin-bottom: 8px;">Ranchi to Patna Route</h4>
          <p style="font-size: 0.9rem; color: #94a3b8; margin-bottom: 10px;">Interstate relocation services connecting Ranchi to Patna, Bihar via NH-22.</p>
          <a href="<?php echo SITE_URL; ?>packers-and-movers-ranchi-to-patna" title="Ranchi to Patna Shifting Services →" style="color: #f59e0b; text-decoration: underline; font-weight: 600; font-size: 0.9rem;">
            Ranchi to Patna Shifting Services →
          </a>
        </div>
      </div>

    </div>
  </section>

  <!-- Section 8: Corporate Claims & IBA Approved Billing Standards -->
  <section style="padding: 70px 0; background: #070d1e; color: #ffffff;">
    <div class="container" style="max-width: 900px;">
      
      <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Corporate & Defense Documentation</span>
      <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin: 10px 0 20px 0;">
        IBA Approved GST Billing &amp; Claim Compliance in Ranchi
      </h2>

      <p style="font-size: 1.05rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 20px;">
        Employees working in defense forces, public sector undertakings (PSUs), nationalized banks, Indian Railways, central government departments, and private MNCs are entitled to relocation allowance claims upon job transfer. However, corporate HR and audit departments enforce strict documentation requirements for claim reimbursement.
      </p>

      <p style="font-size: 1.05rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 25px;">
        As trusted <strong>iba approved packers and movers ranchi</strong>, Shree Ashirwad Packers and Movers furnishes complete, claim-ready paper trails accepted by all auditing departments:
      </p>

      <div style="background: #101c40; border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 12px; padding: 25px; margin-bottom: 30px;">
        <h4 style="color: #f59e0b; font-size: 1.15rem; margin-bottom: 12px; font-weight: 700;">Complete Relocation Claim Document Set:</h4>
        <ol style="margin: 0; padding-left: 20px; color: #cbd5e1; line-height: 1.8;">
          <li><strong>Official GST Consignment Invoice</strong> detailing itemized packing & freight costs.</li>
          <li><strong>Consignment Lorry Receipt (LR Copy)</strong> with stamped vehicle registration number.</li>
          <li><strong>Itemized Goods Inventory Packing List</strong> with room-wise tag serial numbers.</li>
          <li><strong>IBA Approved Stamp &amp; Registration Number Verification</strong> on official letterhead.</li>
          <li><strong>Transit Insurance Policy Document</strong> issued by authorized insurance providers.</li>
          <li><strong>Money Receipt &amp; Payment Acknowledgement</strong> for audit verification.</li>
        </ol>
      </div>

    </div>
  </section>

  <!-- Section 9: Step-by-Step Relocation Execution Process -->
  <section style="padding: 70px 0; background: #0b132b; color: #ffffff; border-top: 1px solid rgba(245, 158, 11, 0.15);">
    <div class="container" style="max-width: 900px;">
      
      <div class="section-header text-center" style="margin-bottom: 45px;">
        <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Structured Workflow</span>
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin-top: 10px;">
          How Our Shifting Execution Works in <span style="color: #f59e0b;">Ranchi</span>
        </h2>
        <p style="color: #94a3b8; font-size: 1rem;">From first inquiry call to final room setup, we ensure total transparency.</p>
      </div>

      <div style="display: grid; grid-template-columns: 1fr; gap: 20px;">
        
        <div style="display: flex; gap: 20px; background: #172a54; padding: 24px; border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <div style="font-size: 2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">01</div>
          <div>
            <h3 style="font-size: 1.2rem; color: #ffffff; margin-bottom: 6px;">Initial Phone / WhatsApp Survey</h3>
            <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.6;">
              Contact our <strong>movers and packers ranchi contact number</strong> at <strong><?php echo SITE_PHONE; ?></strong> or submit our instant quote form. Our move coordinator evaluates your goods volume, floor levels, elevator availability, and destination route.
            </p>
          </div>
        </div>

        <div style="display: flex; gap: 20px; background: #172a54; padding: 24px; border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <div style="font-size: 2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">02</div>
          <div>
            <h3 style="font-size: 1.2rem; color: #ffffff; margin-bottom: 6px;">Clear Itemized Cost Estimation</h3>
            <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.6;">
              We explain all <strong>packers and movers ranchi charges</strong> in a written estimate. No last-minute surprises or unexpected door-delivery surcharges.
            </p>
          </div>
        </div>

        <div style="display: flex; gap: 20px; background: #172a54; padding: 24px; border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <div style="font-size: 2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">03</div>
          <div>
            <h3 style="font-size: 1.2rem; color: #ffffff; margin-bottom: 6px;">On-Site 7-Layer Packaging &amp; Labeling</h3>
            <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.6;">
              On move day, our uniformed crew arrives punctually with heavy bubble wrap, foam sheets, corrugated boxes, and wooden crates to wrap every single item systematically.
            </p>
          </div>
        </div>

        <div style="display: flex; gap: 20px; background: #172a54; padding: 24px; border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <div style="font-size: 2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">04</div>
          <div>
            <h3 style="font-size: 1.2rem; color: #ffffff; margin-bottom: 6px;">Container Truck Loading &amp; Live Tracking</h3>
            <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.6;">
              Goods are loaded into dedicated weather-proof container vehicles using nylon belts. You receive live GPS tracking updates until the truck reaches your new home.
            </p>
          </div>
        </div>

        <div style="display: flex; gap: 20px; background: #172a54; padding: 24px; border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <div style="font-size: 2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">05</div>
          <div>
            <h3 style="font-size: 1.2rem; color: #ffffff; margin-bottom: 6px;">Unloading, Unpacking &amp; Room Setup</h3>
            <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.6;">
              At destination, our crew unloads, unboxes, re-assembles beds and tables, and places furniture in designated rooms according to your layout preferences.
            </p>
          </div>
        </div>

      </div>

    </div>
  </section>

  <!-- Section 10: Frequently Asked Questions (10 Detailed SEO FAQs with Schema Markup) -->
  <section style="padding: 70px 0; background: #070d1e; color: #ffffff;">
    <div class="container" style="max-width: 900px;">
      
      <div class="section-header text-center" style="margin-bottom: 45px;">
        <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Got Questions?</span>
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin-top: 10px;">
          Frequently Asked Questions About <span style="color: #f59e0b;">Packers and Movers in Ranchi</span>
        </h2>
      </div>

      <div style="display: flex; flex-direction: column; gap: 16px;">
        
        <div style="background: #101c40; padding: 20px 24px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Q1: How are packers and movers ranchi charges evaluated for local shifting?</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.7;">
            Relocation estimates are determined based on the total volume of goods, packing material requirements (bubble wrap, corrugated sheets, wooden crates), floor numbers at pickup and delivery, availability of elevators, and total transit distance.
          </p>
        </div>

        <div style="background: #101c40; padding: 20px 24px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Q2: Do you provide IBA approved bills for corporate relocation claims in Ranchi?</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.7;">
            Yes! Shree Ashirwad Packers and Movers provides 100% compliant IBA-approved bills, GST consignment invoices, Lorry Receipts (LR), and itemized packing lists accepted by all government, PSU, defense, railway, and private corporate HR departments.
          </p>
        </div>

        <div style="background: #101c40; padding: 20px 24px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Q3: How many days in advance should I book my move in Ranchi?</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.7;">
            For local household shifting within Ranchi, booking 2 to 3 days in advance is recommended. For intercity or interstate long-distance moves, we advise booking 4 to 7 days in advance to reserve dedicated container trucks.
          </p>
        </div>

        <div style="background: #101c40; padding: 20px 24px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Q4: How do you protect fragile items like Smart LED TVs, glass tabletops, and artwork?</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.7;">
            We apply multi-layer protective packaging consisting of stretch film, high-density air-bubble wrap, foam corner guards, quilted blankets, and custom-built wooden crates to absorb transit shocks.
          </p>
        </div>

        <div style="background: #101c40; padding: 20px 24px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Q5: Can I track my moving truck during long-distance intercity transit?</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.7;">
            Yes, all our enclosed moving container trucks are outfitted with real-time satellite GPS tracking. You receive continuous status updates from your move supervisor.
          </p>
        </div>

        <div style="background: #101c40; padding: 20px 24px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Q6: Do you transport cars and bikes safely from Ranchi?</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.7;">
            Yes, we operate specialized hydraulic enclosed car carriers and wheel-locked bike containers with paddy-straw padded wrapping for scratch-free vehicle logistics across India.
          </p>
        </div>

        <div style="background: #101c40; padding: 20px 24px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Q7: Is transit insurance included with the shifting service?</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.7;">
            We offer comprehensive transit insurance coverage that protects your shipment against unforeseen environmental factors or road accidents during long-distance transit.
          </p>
        </div>

        <div style="background: #101c40; padding: 20px 24px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Q8: Do your packers disassemble and reassemble modular furniture?</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.7;">
            Yes, our trained carpenters and move staff dismantle double beds, wardrobes, modular desks, and dining tables at origin, and reassemble them at destination.
          </p>
        </div>

        <div style="background: #101c40; padding: 20px 24px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Q9: Are there any hidden fees added on move day?</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.7;">
            No! We maintain a strict policy of transparent billing. All cost factors are discussed and fixed prior to move day with zero hidden surcharges.
          </p>
        </div>

        <div style="background: #101c40; padding: 20px 24px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Q10: What is the contact number for packers and movers in ranchi inquiry?</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.7;">
            You can call or WhatsApp our official Ranchi Helpline at <strong><?php echo SITE_PHONE; ?></strong> (Raw: <strong><?php echo SITE_PHONE_RAW; ?></strong>) or email us at <strong><?php echo SITE_EMAIL; ?></strong> for immediate assistance.
          </p>
        </div>

      </div>

    </div>
  </section>

  
  <!-- Section: Google Map & Location Details -->
  <section style="padding: 50px 0; background: #070d1e; color: #ffffff; border-top: 1px solid rgba(245, 158, 11, 0.2);">
    <div class="container" style="max-width: 900px;">
      <div style="text-align: center; margin-bottom: 25px;">
        <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Service Location Map</span>
        <h2 style="font-size: 2rem; font-weight: 800; color: #ffffff; margin-top: 10px;">
          Find Our Service Network in <span style="color: #f59e0b;">Ranchi</span>
        </h2>
        <p style="color: #cbd5e1; font-size: 0.95rem;">Visit our head office at Anandpuri Chowk, Harmu Road or contact our local Ranchi team for fast shifting.</p>
      </div>
      <div style="background: rgba(23, 42, 84, 0.5); padding: 12px; border-radius: 16px; border: 1.5px solid rgba(245, 158, 11, 0.3); box-shadow: 0 10px 30px rgba(0,0,0,0.4);">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3662.628929729864!2d85.3124311!3d23.3654497!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f4e10116ddbf0d%3A0x8691aeef36f01174!2sShree%20Ashirwad%20Packers%20and%20Movers!5e0!3m2!1sen!2sin!4v1700000000000!5m2!1sen!2sin" width="100%" height="350" style="border:0; border-radius: 12px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>
  </section>

  <!-- Section 11: Final Call To Action Banner -->
  <section style="padding: 70px 0; background: linear-gradient(135deg, #172a54 0%, #0b132b 100%); border-top: 1.5px solid rgba(245, 158, 11, 0.4); color: #ffffff;">
    <div class="container" style="max-width: 900px; text-align: center;">
      
      <span class="section-tag" style="background: rgba(245, 158, 11, 0.2); color: #f59e0b; padding: 6px 16px; border-radius: 20px; font-size: 0.85rem; font-weight: 700; text-transform: uppercase;">
        Book Jharkhand's Top Rated Movers
      </span>

      <h2 style="font-size: 2.3rem; font-weight: 800; margin: 15px 0 15px 0; color: #ffffff;">
        Ready to Experience Zero-Damage Relocation with <span style="color: #f59e0b;">Packers and Movers in Ranchi</span>?
      </h2>

      <p style="font-size: 1.05rem; color: #cbd5e1; max-width: 750px; margin: 0 auto 30px auto; line-height: 1.7;">
        Contact our Ranchi Head Office at Anandpuri Chowk, Harmu Road today for a quick custom estimate and enjoy smooth, stress-free household or office shifting.
      </p>

      <div style="display: flex; gap: 15px; justify-content: center; flex-wrap: wrap; margin-bottom: 25px;">
        <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Now:" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 30px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1.05rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
          <i class="fas fa-phone-alt"></i> Call Now: <?php echo SITE_PHONE; ?>
        </a>
        <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers%20and%20Movers,%20I%20want%20a%20quote%20for%20relocation." title="Chat on WhatsApp" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 30px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1.05rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
          <i class="fab fa-whatsapp"></i> Chat on WhatsApp
        </a>
        <a href="<?php echo SITE_URL; ?>contact" title="Contact Office" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 30px; background: linear-gradient(135deg, #1e293b 0%, #0f172a 100%); border: 1.5px solid #f59e0b; color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1.05rem; text-decoration: none; box-shadow: 0 4px 15px rgba(245, 158, 11, 0.2);">
          <i class="fas fa-map-marker-alt"></i> Contact Office
        </a>
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
  
  var message = "Hello Shree Ashirwad Packers & Movers,\n\nI would like to request a Shifting Quote:\n- Name: " + name + "\n- Phone: " + phone + "\n- Moving From: " + moveFrom + "\n- Moving To: " + moveTo;
  
  if (extraMsg && extraMsg.trim() !== '') {
    message += "\n- Details: " + extraMsg;
  }
  
  var whatsappUrl = "https://api.whatsapp.com/send?phone=918409531615&text=" + encodeURIComponent(message);
  window.location.href = whatsappUrl;
}
</script>

  <section style="padding: 50px 0; background: #f8fafc; border-top: 1px solid #e2e8f0; border-bottom: 1px solid #e2e8f0;">
    <div class="container" style="max-width: 1140px; margin: 0 auto; padding: 0 15px;">
      <div style="display: grid; gap: 30px; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); align-items: center;">
        <div>
          <span style="display: inline-block; color: #d32f2f; font-weight: 700; text-transform: uppercase; font-size: 0.8rem; letter-spacing: 1px; margin-bottom: 10px;">
            <i class="fas fa-camera" style="margin-right: 5px;"></i> Real Moving Proof
          </span>
          <h3 style="font-size: 1.65rem; color: #0f172a; font-weight: 800; margin: 0 0 12px 0; line-height: 1.3;">Packing, loading, and vehicle handling that helps Ranchi families move with confidence</h3>
          <p style="font-size: 0.98rem; color: #475569; line-height: 1.8; margin: 0;">From fragile TV and glass protection to secure loading for household items and cars, our work is built around careful handling, clear documentation, and dependable movement support for local and intercity relocation.</p>
        </div>
        <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 14px;">
          <img title="Shree Ashirwad Packers and Movers" src="<?php echo SITE_URL; ?>assets/images/gallery/gallery-3.webp" alt="Wooden crate protection for fragile items in Ranchi shifting" style="width: 100%; height: 250px; object-fit: cover; border-radius: 12px; border: 1px solid #e2e8f0; box-shadow: 0 4px 12px rgba(0,0,0,0.08);" loading="lazy">
          <img title="Shree Ashirwad Packers and Movers" src="<?php echo SITE_URL; ?>assets/images/gallery/gallery-7.webp" alt="Container loading process for household shifting in Ranchi" style="width: 100%; height: 250px; object-fit: cover; border-radius: 12px; border: 1px solid #e2e8f0; box-shadow: 0 4px 12px rgba(0,0,0,0.08);" loading="lazy">
        </div>
      </div>
    </div>
  </section>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
