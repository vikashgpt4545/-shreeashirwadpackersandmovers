<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "Bike Transport from Aurangabad to Mumbai | Safe Two-Wheeler Shifting";
$page_desc = "Planning bike transport from Aurangabad to Mumbai? Get safe, insured, and doorstep motorcycle shipping services. View estimated charges, transit times, and packaging details. Complete door-to-door relocation coverage across Andheri, Bandra, Thane, Navi Mumbai, Powai, Borivali, Dadar.";
$page_keywords = "bike transport from aurangabad to mumbai, best bike transport from aurangabad to mumbai, affordable bike transport from aurangabad to mumbai, packers and movers, top bike transport from aurangabad to mumbai company, doorstep bike transport from aurangabad to mumbai, verified bike transport from aurangabad to mumbai services, shree ashirwad bike transport from aurangabad to mumbai";
$canonical_url = "https://shreeashirwadpackersandmovers.com/pages/bike-transport-from-aurangabad-to-mumbai.php";

require_once __DIR__ . '/../includes/header.php';
?>

<main class="site-main">

  <!-- Visual Breadcrumb Navigation Bar -->
  <div class="breadcrumb-wrapper">
    <div class="container">
      <div class="breadcrumb-list">
        <span class="breadcrumb-item"><a href="<?php echo SITE_URL; ?>" title="Home">Home</a></span>
        <span class="breadcrumb-separator">/</span>
        <span class="breadcrumb-item active"><?php echo htmlspecialchars($page_title); ?></span>
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
            BIKE TRANSPORT FROM AURANGABAD TO MUMBAI SPECIALISTS
          </span>
          <h1 style="font-size: 2.7rem; font-weight: 800; line-height: 1.2; margin-bottom: 20px; color: #ffffff;">
            Professional <span style="color: #f59e0b;">Bike Transport from Aurangabad to Mumbai</span>
          </h1>
          <p style="font-size: 1.12rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 25px;">
            Planning bike transport from Aurangabad to Mumbai? Get safe, insured, and doorstep motorcycle shipping services. View estimated charges, transit times, and packaging details. Complete door-to-door relocation coverage across Andheri, Bandra, Thane, Navi Mumbai, Powai, Borivali, Dadar.
          </p>

          <div style="display: flex; gap: 15px; flex-wrap: wrap; margin-bottom: 30px;">
            <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Now" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
              <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call Now: <?php echo SITE_PHONE; ?>
            </a>
            <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20a%20quote%20for%20bike%20transport%20from%20Aurangabad%20to%20Mumbai." title="Chat on WhatsApp" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
              <i class="fab fa-whatsapp" style="margin-right: 8px;"></i> Chat on WhatsApp
            </a>
          </div>

          <div style="display: flex; gap: 20px; font-size: 0.9rem; color: #94a3b8;">
            <span><strong style="color: #f59e0b;">100% Insured</strong> Shifting</span>
            <span><strong style="color: #f59e0b;">7-Layer</strong> Bubble Packaging</span>
            <span><strong style="color: #f59e0b;">Door-to-Door</strong> Delivery</span>
          </div>
        </div>

        <!-- Hero Lead Form Column -->
        <div class="hero-form-card" style="background: rgba(255, 255, 255, 0.05); backdrop-filter: blur(10px); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 16px; padding: 30px; box-shadow: 0 15px 35px rgba(0,0,0,0.4);">
          <h2 style="font-size: 1.4rem; color: #ffffff; margin-bottom: 8px; font-weight: 700; text-align: center;">Get Aurangabad to Mumbai Quote</h2>
          <p style="font-size: 0.85rem; color: #94a3b8; text-align: center; margin-bottom: 20px;">Receive transparent cost estimation on WhatsApp in 2 minutes</p>

          <form action="#" method="POST" onsubmit="sendHeroWhatsAppLead(event, this);">
            <div style="margin-bottom: 14px;">
              <input type="text" name="name" class="form-control" placeholder="Your Full Name" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="margin-bottom: 14px;">
              <input type="tel" name="phone" class="form-control" placeholder="10-Digit Phone Number" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 10px; margin-bottom: 14px;">
              <input type="text" name="move_from" class="form-control" value="Aurangabad" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
              <input type="text" name="move_to" class="form-control" value="Mumbai" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <button type="submit" style="width: 100%; padding: 14px; background: linear-gradient(135deg, #d32f2f 0%, #f59e0b 100%); color: #ffffff; border: none; border-radius: 50px; font-weight: 700; font-size: 1rem; cursor: pointer;">
              Get Instant Estimate Now &rarr;
            </button>
          </form>
        </div>

      </div>
    </div>
  </section>

  <!-- Section 3: Key Stats Counter Bar -->
  <section style="background: #0f172a; padding: 30px 0; border-bottom: 1px solid rgba(255,255,255,0.05);">
    <div class="container">
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 20px; text-align: center;">
        <div style="padding: 15px; background: rgba(255,255,255,0.02); border-radius: 10px; border: 1px solid rgba(255,255,255,0.05);">
          <div style="font-size: 1.8rem; font-weight: 800; color: #f59e0b;">1,750+</div>
          <div style="font-size: 0.85rem; color: #94a3b8;">Bikes Transported to Mumbai</div>
        </div>
        <div style="padding: 15px; background: rgba(255,255,255,0.02); border-radius: 10px; border: 1px solid rgba(255,255,255,0.05);">
          <div style="font-size: 1.8rem; font-weight: 800; color: #f59e0b;">~340 KM</div>
          <div style="font-size: 0.85rem; color: #94a3b8;">Samruddhi Mahamarg Corridor</div>
        </div>
        <div style="padding: 15px; background: rgba(255,255,255,0.02); border-radius: 10px; border: 1px solid rgba(255,255,255,0.05);">
          <div style="font-size: 1.8rem; font-weight: 800; color: #f59e0b;">24 Hours</div>
          <div style="font-size: 0.85rem; color: #94a3b8;">Express Delivery</div>
        </div>
        <div style="padding: 15px; background: rgba(255,255,255,0.02); border-radius: 10px; border: 1px solid rgba(255,255,255,0.05);">
          <div style="font-size: 1.8rem; font-weight: 800; color: #f59e0b;">100% Insured</div>
          <div style="font-size: 0.85rem; color: #94a3b8;">IBA Approved Coverage</div>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 4: 6-Card Feature Grid -->
  <section style="background: #0b132b; padding: 60px 0; color: #ffffff;">
    <div class="container">
      <div style="text-align: center; margin-bottom: 40px;">
        <h2 style="font-size: 2rem; font-weight: 700; color: #ffffff;">Why Choose Our Aurangabad to Mumbai Bike Transport?</h2>
        <p style="color: #94a3b8; max-width: 650px; margin: 10px auto 0;">Dedicated enclosed vehicle carriers and multi-layer protective packaging for safe intercity transit.</p>
      </div>
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 25px;">
        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 12px; padding: 25px;">
          <i class="fas fa-truck-shield" style="font-size: 2rem; color: #f59e0b; margin-bottom: 15px;"></i>
          <h3 style="font-size: 1.2rem; color: #fff; margin-bottom: 10px;">Enclosed Covered Carriers</h3>
          <p style="font-size: 0.9rem; color: #94a3b8; line-height: 1.6;">Weatherproof covered container trucks protect your motorcycle from highway dust, rain, and debris along Samruddhi Expressway.</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 12px; padding: 25px;">
          <i class="fas fa-box-open" style="font-size: 2rem; color: #f59e0b; margin-bottom: 15px;"></i>
          <h3 style="font-size: 1.2rem; color: #fff; margin-bottom: 10px;">7-Layer Custom Packing</h3>
          <p style="font-size: 0.9rem; color: #94a3b8; line-height: 1.6;">High-density foam, 80-GSM bubble wrap, corrugated sheets, and stretch film guarantee scratch-free shipping.</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 12px; padding: 25px;">
          <i class="fas fa-map-marker-alt" style="font-size: 2rem; color: #f59e0b; margin-bottom: 15px;"></i>
          <h3 style="font-size: 1.2rem; color: #fff; margin-bottom: 10px;">Door Pickup & Delivery</h3>
          <p style="font-size: 0.9rem; color: #94a3b8; line-height: 1.6;">Doorstep pickup across CIDCO, Garkheda, Waluj MIDC Aurangabad with direct delivery to Andheri, Thane, Navi Mumbai, etc.</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 12px; padding: 25px;">
          <i class="fas fa-file-invoice" style="font-size: 2rem; color: #f59e0b; margin-bottom: 15px;"></i>
          <h3 style="font-size: 1.2rem; color: #fff; margin-bottom: 10px;">IBA Approved Billing</h3>
          <p style="font-size: 0.9rem; color: #94a3b8; line-height: 1.6;">100% GST-compliant invoices and consignment notes accepted for corporate and government employee relocation claims.</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 12px; padding: 25px;">
          <i class="fas fa-shield-alt" style="font-size: 2rem; color: #f59e0b; margin-bottom: 15px;"></i>
          <h3 style="font-size: 1.2rem; color: #fff; margin-bottom: 10px;">Full Transit Insurance</h3>
          <p style="font-size: 0.9rem; color: #94a3b8; line-height: 1.6;">Comprehensive transit insurance policy covering all accidental damages during highway movement from Aurangabad to Mumbai.</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 12px; padding: 25px;">
          <i class="fas fa-clock" style="font-size: 2rem; color: #f59e0b; margin-bottom: 15px;"></i>
          <h3 style="font-size: 1.2rem; color: #fff; margin-bottom: 10px;">Express Delivery</h3>
          <p style="font-size: 0.9rem; color: #94a3b8; line-height: 1.6;">Optimized expressway routing guarantees delivery within 24 hours of pickup.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 5: Specialized Services Breakdown -->
  <section style="background: #0f172a; padding: 60px 0; color: #ffffff;">
    <div class="container">
      <div style="text-align: center; margin-bottom: 40px;">
        <h2 style="font-size: 2rem; font-weight: 700; color: #ffffff;">Tailored Vehicle Shipping Options</h2>
        <p style="color: #94a3b8;">Customized shifting packages for every two-wheeler category.</p>
      </div>
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 20px;">
        <div style="background: rgba(255,255,255,0.02); padding: 20px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #fff; margin-bottom: 8px;">Standard Commuter Bikes</h4>
          <p style="font-size: 0.85rem; color: #94a3b8;">Economical shipping for 100cc-150cc motorcycles with multi-layer bubble wrap & corrugated protection.</p>
        </div>
        <div style="background: rgba(255,255,255,0.02); padding: 20px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #fff; margin-bottom: 8px;">Sports & Superbikes</h4>
          <p style="font-size: 0.85rem; color: #94a3b8;">Specialized wooden crate packaging and heavy-duty wheel harness tie-downs for high-value bikes.</p>
        </div>
        <div style="background: rgba(255,255,255,0.02); padding: 20px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #fff; margin-bottom: 8px;">Cruisers & Royal Enfield</h4>
          <p style="font-size: 0.85rem; color: #94a3b8;">Reinforced chassis anchoring and handlebar stabilization for heavy cruisers moving to Mumbai.</p>
        </div>
        <div style="background: rgba(255,255,255,0.02); padding: 20px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #fff; margin-bottom: 8px;">Electric Scooters & EV Bikes</h4>
          <p style="font-size: 0.85rem; color: #94a3b8;">Safe battery isolation protocols and climate-controlled covered transport for electric two-wheelers.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 6: 7-Layer Safety Packaging Framework -->
  <section style="background: #0b132b; padding: 60px 0; color: #ffffff;">
    <div class="container">
      <div style="text-align: center; margin-bottom: 40px;">
        <h2 style="font-size: 2rem; font-weight: 700; color: #ffffff;">Our 7-Layer Protective Packaging Standard</h2>
        <p style="color: #94a3b8;">Zero scratch guarantee from door pickup in Aurangabad to final delivery in Mumbai.</p>
      </div>
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 15px; text-align: center;">
        <div style="background: rgba(255,255,255,0.03); padding: 20px; border-radius: 10px;">
          <div style="color: #f59e0b; font-weight: 700; margin-bottom: 5px;">Layer 1</div>
          <div style="font-size: 0.9rem; color: #fff;">Soft Polythene Sheet</div>
        </div>
        <div style="background: rgba(255,255,255,0.03); padding: 20px; border-radius: 10px;">
          <div style="color: #f59e0b; font-weight: 700; margin-bottom: 5px;">Layer 2</div>
          <div style="font-size: 0.9rem; color: #fff;">80-GSM Heavy Bubble Wrap</div>
        </div>
        <div style="background: rgba(255,255,255,0.03); padding: 20px; border-radius: 10px;">
          <div style="color: #f59e0b; font-weight: 700; margin-bottom: 5px;">Layer 3</div>
          <div style="font-size: 0.9rem; color: #fff;">Corrugated Sheet Armor</div>
        </div>
        <div style="background: rgba(255,255,255,0.03); padding: 20px; border-radius: 10px;">
          <div style="color: #f59e0b; font-weight: 700; margin-bottom: 5px;">Layer 4</div>
          <div style="font-size: 0.9rem; color: #fff;">High-Density Foam Padding</div>
        </div>
        <div style="background: rgba(255,255,255,0.03); padding: 20px; border-radius: 10px;">
          <div style="color: #f59e0b; font-weight: 700; margin-bottom: 5px;">Layer 5</div>
          <div style="font-size: 0.9rem; color: #fff;">Stretch Film Waterproofing</div>
        </div>
        <div style="background: rgba(255,255,255,0.03); padding: 20px; border-radius: 10px;">
          <div style="color: #f59e0b; font-weight: 700; margin-bottom: 5px;">Layer 6</div>
          <div style="font-size: 0.9rem; color: #fff;">Chassis Safety Strapping</div>
        </div>
        <div style="background: rgba(255,255,255,0.03); padding: 20px; border-radius: 10px;">
          <div style="color: #f59e0b; font-weight: 700; margin-bottom: 5px;">Layer 7</div>
          <div style="font-size: 0.9rem; color: #fff;">Optional Wooden Crate</div>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 7: Origin Pickup Locality Grid -->
  <section style="background: #0f172a; padding: 50px 0; color: #ffffff;">
    <div class="container">
      <h3 style="font-size: 1.5rem; color: #fff; margin-bottom: 20px; text-align: center;">Aurangabad Doorstep Pickup Coverage</h3>
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 15px; text-align: center;">
        <div style="background: rgba(255,255,255,0.02); padding: 12px; border-radius: 8px; color: #cbd5e1; font-size: 0.9rem;">CIDCO</div>
        <div style="background: rgba(255,255,255,0.02); padding: 12px; border-radius: 8px; color: #cbd5e1; font-size: 0.9rem;">Garkheda</div>
        <div style="background: rgba(255,255,255,0.02); padding: 12px; border-radius: 8px; color: #cbd5e1; font-size: 0.9rem;">Waluj MIDC</div>
        <div style="background: rgba(255,255,255,0.02); padding: 12px; border-radius: 8px; color: #cbd5e1; font-size: 0.9rem;">Jalna Road</div>
      </div>
    </div>
  </section>

  <!-- Section 8: Intercity Route Network Grid -->
  <section style="background: #0b132b; padding: 50px 0; color: #ffffff;">
    <div class="container">
      <h3 style="font-size: 1.5rem; color: #fff; margin-bottom: 20px; text-align: center;">Popular Maharashtra to Mumbai Routes</h3>
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 15px; text-align: center;">
        <a href="<?php echo SITE_URL; ?>/pages/bike-transport-from-aurangabad-to-mumbai.php" style="background: rgba(245,158,11,0.1); border: 1px solid #f59e0b; padding: 12px; border-radius: 8px; color: #f59e0b; text-decoration: none; font-size: 0.9rem;">Aurangabad → Mumbai</a>
        <a href="<?php echo SITE_URL; ?>/pages/bike-transport-from-pune-to-mumbai.php" style="background: rgba(255,255,255,0.02); border: 1px solid rgba(255,255,255,0.08); padding: 12px; border-radius: 8px; color: #cbd5e1; text-decoration: none; font-size: 0.9rem;">Pune → Mumbai</a>
        <a href="<?php echo SITE_URL; ?>/pages/bike-transport-from-nashik-to-mumbai.php" style="background: rgba(255,255,255,0.02); border: 1px solid rgba(255,255,255,0.08); padding: 12px; border-radius: 8px; color: #cbd5e1; text-decoration: none; font-size: 0.9rem;">Nashik → Mumbai</a>
        <a href="<?php echo SITE_URL; ?>/pages/bike-transport-from-kolhapur-to-mumbai.php" style="background: rgba(255,255,255,0.02); border: 1px solid rgba(255,255,255,0.08); padding: 12px; border-radius: 8px; color: #cbd5e1; text-decoration: none; font-size: 0.9rem;">Kolhapur → Mumbai</a>
      </div>
    </div>
  </section>

  <!-- Section 9: IBA Approved GST Billing Documentation -->
  <section style="background: #0f172a; padding: 50px 0; color: #ffffff;">
    <div class="container">
      <div style="text-align: center; margin-bottom: 30px;">
        <h3 style="font-size: 1.5rem; color: #fff;">Required Intercity Transport Documents</h3>
        <p style="color: #94a3b8; font-size: 0.9rem;">Seamless check-post verification & insurance coverage.</p>
      </div>
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 15px; text-align: center;">
        <div style="background: rgba(255,255,255,0.02); padding: 15px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.05); color: #cbd5e1; font-size: 0.85rem;">Vehicle RC Copy</div>
        <div style="background: rgba(255,255,255,0.02); padding: 15px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.05); color: #cbd5e1; font-size: 0.85rem;">Valid Insurance Policy</div>
        <div style="background: rgba(255,255,255,0.02); padding: 15px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.05); color: #cbd5e1; font-size: 0.85rem;">Owner Govt ID (Aadhaar)</div>
        <div style="background: rgba(255,255,255,0.02); padding: 15px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.05); color: #cbd5e1; font-size: 0.85rem;">IBA Consignment Note</div>
      </div>
    </div>
  </section>

  <!-- Section 10: Detailed FAQs & JSON-LD Schema -->
  <section style="background: #0b132b; padding: 60px 0; color: #ffffff;">
    <div class="container">
      <div style="text-align: center; margin-bottom: 40px;">
        <h2 style="font-size: 2rem; font-weight: 700; color: #ffffff;">Frequently Asked Questions</h2>
        <p style="color: #94a3b8;">Everything you need to know about bike transport from Aurangabad to Mumbai.</p>
      </div>

      <div style="max-width: 800px; margin: 0 auto; display: flex; flex-direction: column; gap: 20px;">
        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 10px; padding: 20px;">
          <h4 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 8px;">What is the cost of bike transport from Aurangabad to Mumbai?</h4>
          <p style="font-size: 0.9rem; color: #cbd5e1; line-height: 1.6;">The estimated cost ranges from ₹2,500 to ₹4,800 depending on bike displacement, packaging choice, and insurance options.</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 10px; padding: 20px;">
          <h4 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 8px;">How long does transit take from Aurangabad to Mumbai?</h4>
          <p style="font-size: 0.9rem; color: #cbd5e1; line-height: 1.6;">With Samruddhi Expressway route connectivity, transit is completed within 24 hours.</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 10px; padding: 20px;">
          <h4 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 8px;">Is doorstep pickup provided in Aurangabad?</h4>
          <p style="font-size: 0.9rem; color: #cbd5e1; line-height: 1.6;">Yes, we pick up your motorcycle from any location in Aurangabad including CIDCO, Garkheda, Waluj MIDC, and Jalna Road.</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 10px; padding: 20px;">
          <h4 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 8px;">What documentation is required?</h4>
          <p style="font-size: 0.9rem; color: #cbd5e1; line-height: 1.6;">RC copy, valid bike insurance policy, and government photo identity proof of the sender are required.</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 10px; padding: 20px;">
          <h4 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 8px;">How is the motorcycle packaged for safety?</h4>
          <p style="font-size: 0.9rem; color: #cbd5e1; line-height: 1.6;">We use a 7-layer safety framework including high-density bubble wrap, corrugated sheets, foam, and stretch film.</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 10px; padding: 20px;">
          <h4 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 8px;">Is transit insurance included?</h4>
          <p style="font-size: 0.9rem; color: #cbd5e1; line-height: 1.6;">Yes, full transit insurance protection is provided to cover any unforeseen road damage.</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 10px; padding: 20px;">
          <h4 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 8px;">Which Mumbai areas do you deliver to?</h4>
          <p style="font-size: 0.9rem; color: #cbd5e1; line-height: 1.6;">We deliver across Mumbai including Andheri, Bandra, Thane, Navi Mumbai, Powai, Borivali, and Dadar.</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 10px; padding: 20px;">
          <h4 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 8px;">Are GST invoices provided for company claim reimbursement?</h4>
          <p style="font-size: 0.9rem; color: #cbd5e1; line-height: 1.6;">Yes, 100% GST-compliant IBA-approved bills are issued for corporate relocation claims.</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 10px; padding: 20px;">
          <h4 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 8px;">Can I transport sports bikes or Royal Enfield cruisers?</h4>
          <p style="font-size: 0.9rem; color: #cbd5e1; line-height: 1.6;">Yes, specialized crate packaging and chassis belt anchoring are available for heavy and premium motorcycles.</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 10px; padding: 20px;">
          <h4 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 8px;">How can I track my bike during transit?</h4>
          <p style="font-size: 0.9rem; color: #cbd5e1; line-height: 1.6;">Live GPS tracking and WhatsApp updates are maintained throughout the journey from Aurangabad to Mumbai.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 11: Call-To-Action (CTA) Conversion Footer -->
  <section style="background: linear-gradient(135deg, #1e293b 0%, #0f172a 100%); padding: 50px 0; text-align: center; color: #ffffff; border-top: 1px solid rgba(255,255,255,0.1);">
    <div class="container">
      <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin-bottom: 15px;">Book Your Bike Transport to Mumbai Today</h2>
      <p style="font-size: 1.1rem; color: #cbd5e1; max-width: 600px; margin: 0 auto 30px;">Safe, insured, and fast motorcycle shipping from Aurangabad to Mumbai with zero hassle.</p>
      <div style="display: flex; gap: 15px; justify-content: center; flex-wrap: wrap;">
        <a href="tel:<?php echo SITE_PHONE_RAW; ?>" style="padding: 14px 32px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #fff; border-radius: 50px; font-weight: 700; text-decoration: none;">Call Now: <?php echo SITE_PHONE; ?></a>
        <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20a%20quote%20for%20bike%20transport%20from%20Aurangabad%20to%20Mumbai." target="_blank" style="padding: 14px 32px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #fff; border-radius: 50px; font-weight: 700; text-decoration: none;">WhatsApp Quote</a>
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
      "name": "What is the cost of bike transport from Aurangabad to Mumbai?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "The estimated cost ranges from ₹2,500 to ₹4,800 depending on bike displacement, packaging choice, and insurance options."
      }
    },
    {
      "@type": "Question",
      "name": "How long does transit take from Aurangabad to Mumbai?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "With Samruddhi Expressway route connectivity, transit is completed within 24 hours."
      }
    },
    {
      "@type": "Question",
      "name": "Is doorstep pickup provided in Aurangabad?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, we pick up your motorcycle from any location in Aurangabad including CIDCO, Garkheda, Waluj MIDC, and Jalna Road."
      }
    },
    {
      "@type": "Question",
      "name": "What documentation is required?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "RC copy, valid bike insurance policy, and government photo identity proof of the sender are required."
      }
    },
    {
      "@type": "Question",
      "name": "How is the motorcycle packaged for safety?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "We use a 7-layer safety framework including high-density bubble wrap, corrugated sheets, foam, and stretch film."
      }
    },
    {
      "@type": "Question",
      "name": "Is transit insurance included?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, full transit insurance protection is provided to cover any unforeseen road damage."
      }
    },
    {
      "@type": "Question",
      "name": "Which Mumbai areas do you deliver to?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "We deliver across Mumbai including Andheri, Bandra, Thane, Navi Mumbai, Powai, Borivali, and Dadar."
      }
    },
    {
      "@type": "Question",
      "name": "Are GST invoices provided for company claim reimbursement?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, 100% GST-compliant IBA-approved bills are issued for corporate relocation claims."
      }
    },
    {
      "@type": "Question",
      "name": "Can I transport sports bikes or Royal Enfield cruisers?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, specialized crate packaging and chassis belt anchoring are available for heavy and premium motorcycles."
      }
    },
    {
      "@type": "Question",
      "name": "How can I track my bike during transit?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Live GPS tracking and WhatsApp updates are maintained throughout the journey from Aurangabad to Mumbai."
      }
    }
  ]
}
</script>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
