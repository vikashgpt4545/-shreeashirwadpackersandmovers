<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "Bike Transport from Udaipur to Bhavnagar | Safe Two-Wheeler Shifting";
$page_desc = "Planning bike transport from Udaipur to Bhavnagar? Get safe, insured, and doorstep motorcycle shipping services. View estimated charges, transit times, and packaging details. Complete door-to-door relocation coverage across Sukher, Hiran Magri, Panchwati, Fatehpura to Waghawadi Road, Ghogha Circle, Kaliyabid, Subhashnagar.";
$page_keywords = "bike transport from udaipur to bhavnagar, best bike transport from udaipur to bhavnagar, affordable bike transport from udaipur to bhavnagar, packers and movers, top bike transport from udaipur to bhavnagar company, doorstep bike transport from udaipur to bhavnagar, verified bike transport from udaipur to bhavnagar services, shree ashirwad bike transport from udaipur to bhavnagar";
$canonical_url = "https://shreeashirwadpackersandmovers.com/pages/bike-transport-from-udaipur-to-bhavnagar.php";

require_once __DIR__ . '/../includes/header.php';
?>

<main class="site-main">

  <!-- Section 1: Visual Breadcrumb Navigation Bar -->
  <div class="breadcrumb-wrapper" style="background: #0b132b; padding: 12px 0; border-bottom: 1px solid rgba(255,255,255,0.08);">
    <div class="container">
      <div class="breadcrumb-list" style="font-size: 0.88rem; color: #94a3b8;">
        <span class="breadcrumb-item"><a href="<?php echo SITE_URL; ?>" title="Home" style="color: #f59e0b; text-decoration: none;">Home</a></span>
        <span class="breadcrumb-separator" style="margin: 0 8px; color: #475569;">/</span>
        <span class="breadcrumb-item"><a href="<?php echo SITE_URL; ?>/pages/services.php" title="Services" style="color: #f59e0b; text-decoration: none;">Services</a></span>
        <span class="breadcrumb-separator" style="margin: 0 8px; color: #475569;">/</span>
        <span class="breadcrumb-item active" style="color: #cbd5e1;"><?php echo htmlspecialchars($page_title); ?></span>
      </div>
    </div>
  </div>

  <!-- Section 2: Hero Section & Instant WhatsApp Lead Form -->
  <section class="hero-section" style="background: linear-gradient(135deg, #0b132b 0%, #1c2541 100%); padding: 60px 0; color: #ffffff;">
    <div class="container">
      <div class="hero-grid" style="display: grid; grid-template-columns: 1.2fr 0.8fr; gap: 40px; align-items: center;">
        
        <!-- Hero Text Column -->
        <div class="hero-text">
          <span class="section-tag" style="background: rgba(245, 158, 11, 0.15); color: #f59e0b; border: 1px solid rgba(245, 158, 11, 0.4); padding: 6px 16px; border-radius: 20px; font-size: 0.85rem; font-weight: 700; text-transform: uppercase; display: inline-block; margin-bottom: 15px;">
            UDAIPUR TO BHAVNAGAR BIKE RELOCATION SPECIALISTS
          </span>
          <h1 style="font-size: 2.5rem; font-weight: 800; line-height: 1.2; margin-bottom: 20px; color: #ffffff;">
            Professional <span style="color: #f59e0b;">Bike Transport from Udaipur to Bhavnagar</span>
          </h1>
          <p style="font-size: 1.1rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 25px;">
            Transporting your two-wheeler from Udaipur to Bhavnagar (~460 km via NH48/NH51 corridor) requires specialized covered container carriers, 7-layer shockproof wrapping, and full transit insurance. Shree Ashirwad Packers and Movers delivers fast 24 to 48-hour door-to-door bike shipping with IBA-approved GST documentation.
          </p>

          <div style="display: flex; gap: 15px; flex-wrap: wrap; margin-bottom: 30px;">
            <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Now" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
              <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call Now: <?php echo SITE_PHONE; ?>
            </a>
            <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20a%20quote%20for%20Bike%20Transport%20from%20Udaipur%20to%20Bhavnagar." title="Chat on WhatsApp" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
              <i class="fab fa-whatsapp" style="margin-right: 8px;"></i> Chat on WhatsApp
            </a>
          </div>

          <div style="display: flex; gap: 20px; font-size: 0.9rem; color: #94a3b8; flex-wrap: wrap;">
            <span><strong style="color: #f59e0b;">100% Insured</strong> Transit</span>
            <span><strong style="color: #f59e0b;">7-Layer</strong> Bubble Wrapping</span>
            <span><strong style="color: #f59e0b;">24-48 Hrs</strong> Express Delivery</span>
          </div>
        </div>

        <!-- Hero Lead Form Column -->
        <div class="hero-form-card" style="background: rgba(255, 255, 255, 0.05); backdrop-filter: blur(10px); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 16px; padding: 30px; box-shadow: 0 15px 35px rgba(0,0,0,0.4);">
          <h2 style="font-size: 1.35rem; color: #ffffff; margin-bottom: 8px; font-weight: 700; text-align: center;">Get Instant Route Quote</h2>
          <p style="font-size: 0.85rem; color: #94a3b8; text-align: center; margin-bottom: 20px;">Udaipur → Bhavnagar Shifting Estimate in 2 Mins</p>

          <form action="#" method="POST" onsubmit="sendHeroWhatsAppLead(event, this);">
            <div style="margin-bottom: 14px;">
              <input type="text" name="name" class="form-control" placeholder="Your Full Name" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="margin-bottom: 14px;">
              <input type="tel" name="phone" class="form-control" placeholder="10-Digit Phone Number" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 10px; margin-bottom: 14px;">
              <input type="text" name="move_from" class="form-control" value="Udaipur" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
              <input type="text" name="move_to" class="form-control" value="Bhavnagar" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <button type="submit" style="width: 100%; padding: 14px; background: linear-gradient(135deg, #d32f2f 0%, #f59e0b 100%); color: #ffffff; border: none; border-radius: 50px; font-weight: 700; font-size: 1rem; cursor: pointer;">
              Get Free Estimate Now &rarr;
            </button>
          </form>
        </div>

      </div>
    </div>
  </section>

  <!-- Section 3: Key Stats Counter Bar -->
  <section style="background: #0f172a; padding: 35px 0; border-bottom: 1px solid rgba(255,255,255,0.05);">
    <div class="container">
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 20px; text-align: center;">
        <div style="padding: 15px; background: rgba(255,255,255,0.03); border-radius: 10px; border: 1px solid rgba(255,255,255,0.05);">
          <div style="font-size: 1.8rem; font-weight: 800; color: #f59e0b;">3,500+</div>
          <div style="font-size: 0.85rem; color: #94a3b8; margin-top: 5px;">Bikes Transported to Bhavnagar</div>
        </div>
        <div style="padding: 15px; background: rgba(255,255,255,0.03); border-radius: 10px; border: 1px solid rgba(255,255,255,0.05);">
          <div style="font-size: 1.8rem; font-weight: 800; color: #f59e0b;">~460 KM</div>
          <div style="font-size: 0.85rem; color: #94a3b8; margin-top: 5px;">Udaipur → Bhavnagar Route</div>
        </div>
        <div style="padding: 15px; background: rgba(255,255,255,0.03); border-radius: 10px; border: 1px solid rgba(255,255,255,0.05);">
          <div style="font-size: 1.8rem; font-weight: 800; color: #f59e0b;">24 - 48 Hours</div>
          <div style="font-size: 0.85rem; color: #94a3b8; margin-top: 5px;">Express Transit Time</div>
        </div>
        <div style="padding: 15px; background: rgba(255,255,255,0.03); border-radius: 10px; border: 1px solid rgba(255,255,255,0.05);">
          <div style="font-size: 1.8rem; font-weight: 800; color: #f59e0b;">IBA GST</div>
          <div style="font-size: 0.85rem; color: #94a3b8; margin-top: 5px;">Approved Billing & Claims</div>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 4: 6-Card Feature Grid -->
  <section style="background: #0b132b; padding: 60px 0; color: #ffffff;">
    <div class="container">
      <div style="text-align: center; margin-bottom: 40px;">
        <h2 style="font-size: 2rem; font-weight: 800; color: #ffffff;">Why Choose Us for Udaipur to Bhavnagar Bike Shipping?</h2>
        <p style="color: #94a3b8; margin-top: 10px;">End-to-end relocation protocols tailored for two-wheeler transport between Rajasthan and Saurashtra.</p>
      </div>
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 25px;">
        <div style="background: rgba(255,255,255,0.03); padding: 25px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.08);">
          <i class="fas fa-truck-moving" style="font-size: 2rem; color: #f59e0b; margin-bottom: 15px;"></i>
          <h3 style="font-size: 1.2rem; color: #fff; margin-bottom: 10px;">Covered Container Trucks</h3>
          <p style="font-size: 0.9rem; color: #94a3b8; line-height: 1.6;">Weatherproof closed bike carriers protecting your vehicle against highway dust, rain, and gravel during transit.</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); padding: 25px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.08);">
          <i class="fas fa-box-open" style="font-size: 2rem; color: #f59e0b; margin-bottom: 15px;"></i>
          <h3 style="font-size: 1.2rem; color: #fff; margin-bottom: 10px;">7-Layer Safety Wrap</h3>
          <p style="font-size: 0.9rem; color: #94a3b8; line-height: 1.6;">High-density foam, heavy-duty bubble wrap, corrugated sheets, and stretch film guard paintwork against scratches.</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); padding: 25px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.08);">
          <i class="fas fa-shield-alt" style="font-size: 2rem; color: #f59e0b; margin-bottom: 15px;"></i>
          <h3 style="font-size: 1.2rem; color: #fff; margin-bottom: 10px;">Full Transit Insurance</h3>
          <p style="font-size: 0.9rem; color: #94a3b8; line-height: 1.6;">Complete financial coverage for any accidental damage or unforeseen highway risks from pickup to final drop.</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); padding: 25px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.08);">
          <i class="fas fa-map-marked-alt" style="font-size: 2rem; color: #f59e0b; margin-bottom: 15px;"></i>
          <h3 style="font-size: 1.2rem; color: #fff; margin-bottom: 10px;">Door-to-Door Pickup</h3>
          <p style="font-size: 0.9rem; color: #94a3b8; line-height: 1.6;">Direct doorstep pickup across Sukher, Hiran Magri, Panchwati, Fatehpura, and delivery across Bhavnagar.</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); padding: 25px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.08);">
          <i class="fas fa-file-invoice" style="font-size: 2rem; color: #f59e0b; margin-bottom: 15px;"></i>
          <h3 style="font-size: 1.2rem; color: #fff; margin-bottom: 10px;">IBA Approved Billing</h3>
          <p style="font-size: 0.9rem; color: #94a3b8; line-height: 1.6;">Official GST bills and consignment notes compatible with corporate relocation reimbursement programs.</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); padding: 25px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.08);">
          <i class="fas fa-clock" style="font-size: 2rem; color: #f59e0b; margin-bottom: 15px;"></i>
          <h3 style="font-size: 1.2rem; color: #fff; margin-bottom: 10px;">Fast Express Timelines</h3>
          <p style="font-size: 0.9rem; color: #94a3b8; line-height: 1.6;">Structured daily departures ensuring your bike reaches Bhavnagar within the committed 24 to 48-hour window.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 5: Specialized Services Breakdown & Tariff Table -->
  <section style="background: #0f172a; padding: 60px 0; color: #ffffff;">
    <div class="container">
      <div style="text-align: center; margin-bottom: 40px;">
        <h2 style="font-size: 2rem; font-weight: 800; color: #ffffff;">Udaipur to Bhavnagar Bike Transport Charges</h2>
        <p style="color: #94a3b8; margin-top: 10px;">Estimated tariffs based on engine displacement and packaging choices.</p>
      </div>

      <div style="overflow-x: auto; margin-bottom: 30px;">
        <table style="width: 100%; border-collapse: collapse; background: rgba(255,255,255,0.02); border: 1px solid rgba(255,255,255,0.08); text-align: left; font-size: 0.95rem;">
          <thead>
            <tr style="background: rgba(245, 158, 11, 0.15); color: #f59e0b; border-bottom: 1px solid rgba(245, 158, 11, 0.3);">
              <th style="padding: 15px; font-weight: 700;">Vehicle Category</th>
              <th style="padding: 15px; font-weight: 700;">Engine Capacity</th>
              <th style="padding: 15px; font-weight: 700;">Standard Freight</th>
              <th style="padding: 15px; font-weight: 700;">Premium Crate Pack</th>
              <th style="padding: 15px; font-weight: 700;">Transit Time</th>
            </tr>
          </thead>
          <tbody style="color: #cbd5e1;">
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.05);">
              <td style="padding: 15px;">Standard Scooters / Mopeds</td>
              <td style="padding: 15px;">100cc - 125cc</td>
              <td style="padding: 15px; color: #f59e0b; font-weight: 700;">₹2,800 - ₹3,600</td>
              <td style="padding: 15px;">₹3,800 - ₹4,600</td>
              <td style="padding: 15px;">24 - 36 Hours</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.05);">
              <td style="padding: 15px;">Commuter Motorcycles</td>
              <td style="padding: 15px;">125cc - 180cc</td>
              <td style="padding: 15px; color: #f59e0b; font-weight: 700;">₹3,200 - ₹4,200</td>
              <td style="padding: 15px;">₹4,400 - ₹5,400</td>
              <td style="padding: 15px;">24 - 36 Hours</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.05);">
              <td style="padding: 15px;">Sports / Cruiser Bikes</td>
              <td style="padding: 15px;">200cc - 500cc</td>
              <td style="padding: 15px; color: #f59e0b; font-weight: 700;">₹4,200 - ₹5,500</td>
              <td style="padding: 15px;">₹5,600 - ₹6,800</td>
              <td style="padding: 15px;">24 - 48 Hours</td>
            </tr>
            <tr>
              <td style="padding: 15px;">Superbikes / Premium Cruisers</td>
              <td style="padding: 15px;">500cc+</td>
              <td style="padding: 15px; color: #f59e0b; font-weight: 700;">₹6,200 - ₹8,800</td>
              <td style="padding: 15px;">₹8,200 - ₹11,000</td>
              <td style="padding: 15px;">24 - 48 Hours</td>
            </tr>
          </tbody>
        </table>
      </div>
      <p style="font-size: 0.85rem; color: #94a3b8; text-align: center;">*Prices subject to seasonal variations, fuel surcharges, and optional door pickup requirements.</p>
    </div>
  </section>

  <!-- Section 6: 7-Layer Safety Packaging Framework -->
  <section style="background: #0b132b; padding: 60px 0; color: #ffffff;">
    <div class="container">
      <div style="text-align: center; margin-bottom: 40px;">
        <h2 style="font-size: 2rem; font-weight: 800; color: #ffffff;">Our 7-Layer Protection Standard</h2>
        <p style="color: #94a3b8; margin-top: 10px;">Every bike is packed meticulously before loading into enclosed carriers.</p>
      </div>
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 20px;">
        <div style="padding: 20px; background: rgba(255,255,255,0.03); border-radius: 10px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #fff; font-size: 1.1rem; margin-bottom: 8px;">Layer 1: Stretch Film Wrapping</h4>
          <p style="font-size: 0.88rem; color: #94a3b8;">Initial dust barrier protecting paint from ambient humidity and micro-particles.</p>
        </div>
        <div style="padding: 20px; background: rgba(255,255,255,0.03); border-radius: 10px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #fff; font-size: 1.1rem; margin-bottom: 8px;">Layer 2: 80-GSM Bubble Wrap</h4>
          <p style="font-size: 0.88rem; color: #94a3b8;">High-density shock absorption around fuel tank, headlamps, and side panels.</p>
        </div>
        <div style="padding: 20px; background: rgba(255,255,255,0.03); border-radius: 10px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #fff; font-size: 1.1rem; margin-bottom: 8px;">Layer 3: Corrugated Sheets</h4>
          <p style="font-size: 0.88rem; color: #94a3b8;">Heavy-duty cardboard padding around exhaust pipes, engine guards, and handlebars.</p>
        </div>
        <div style="padding: 20px; background: rgba(255,255,255,0.03); border-radius: 10px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #fff; font-size: 1.1rem; margin-bottom: 8px;">Layer 4: Foam Edge Protectors</h4>
          <p style="font-size: 0.88rem; color: #94a3b8;">Custom foam strips guarding brake levers, mirrors, and footpegs.</p>
        </div>
        <div style="padding: 20px; background: rgba(255,255,255,0.03); border-radius: 10px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #fff; font-size: 1.1rem; margin-bottom: 8px;">Layer 5: Waterproof Poly-Cover</h4>
          <p style="font-size: 0.88rem; color: #94a3b8;">Complete moisture barrier ensuring protection against monsoon spills and weather changes.</p>
        </div>
        <div style="padding: 20px; background: rgba(255,255,255,0.03); border-radius: 10px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #fff; font-size: 1.1rem; margin-bottom: 8px;">Layer 6: Heavy Nylon Belts</h4>
          <p style="font-size: 0.88rem; color: #94a3b8;">Four-point ratchet tie-downs securing bike frame inside the carrier wheel locks.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 7: Origin Pickup Locality Grid -->
  <section style="background: #0f172a; padding: 60px 0; color: #ffffff;">
    <div class="container">
      <div style="text-align: center; margin-bottom: 40px;">
        <h2 style="font-size: 1.8rem; font-weight: 800; color: #ffffff;">Udaipur Pickup Hubs</h2>
        <p style="color: #94a3b8; margin-top: 8px;">Free door pickup across major regions in Udaipur.</p>
      </div>
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 15px;">
        <div style="background: rgba(255,255,255,0.03); padding: 15px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.05); text-align: center; color: #cbd5e1;">Sukher & NH8 Corridor</div>
        <div style="background: rgba(255,255,255,0.03); padding: 15px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.05); text-align: center; color: #cbd5e1;">Hiran Magri (Sectors 1-14)</div>
        <div style="background: rgba(255,255,255,0.03); padding: 15px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.05); text-align: center; color: #cbd5e1;">Panchwati & Fatehpura</div>
        <div style="background: rgba(255,255,255,0.03); padding: 15px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.05); text-align: center; color: #cbd5e1;">Shobhagpura & New Bhupalpura</div>
        <div style="background: rgba(255,255,255,0.03); padding: 15px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.05); text-align: center; color: #cbd5e1;">Madri Industrial Area</div>
        <div style="background: rgba(255,255,255,0.03); padding: 15px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.05); text-align: center; color: #cbd5e1;">Pratap Nagar & Airport Road</div>
      </div>
    </div>
  </section>

  <!-- Section 8: Intercity Route Network Grid -->
  <section style="background: #0b132b; padding: 60px 0; color: #ffffff;">
    <div class="container">
      <div style="text-align: center; margin-bottom: 40px;">
        <h2 style="font-size: 1.8rem; font-weight: 800; color: #ffffff;">Related Interstate & Regional Routes</h2>
        <p style="color: #94a3b8; margin-top: 8px;">Explore other major long-distance two-wheeler transport corridors.</p>
      </div>
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); gap: 15px;">
        <a href="<?php echo SITE_URL; ?>/pages/bike-transport-from-vadodara-to-porbandar.php" style="display: block; padding: 15px; background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 8px; color: #f59e0b; text-decoration: none; text-align: center;">Vadodara → Porbandar</a>
        <a href="<?php echo SITE_URL; ?>/pages/bike-transport-from-rajkot-to-ahmedabad.php" style="display: block; padding: 15px; background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 8px; color: #f59e0b; text-decoration: none; text-align: center;">Rajkot → Ahmedabad</a>
        <a href="<?php echo SITE_URL; ?>/pages/bike-transport-from-vadodara-to-delhi.php" style="display: block; padding: 15px; background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 8px; color: #f59e0b; text-decoration: none; text-align: center;">Vadodara → Delhi</a>
        <a href="<?php echo SITE_URL; ?>/pages/bike-transport-from-surat-to-ahmedabad.php" style="display: block; padding: 15px; background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 8px; color: #f59e0b; text-decoration: none; text-align: center;">Surat → Ahmedabad</a>
      </div>
    </div>
  </section>

  <!-- Section 9: IBA Approved GST Billing Documentation -->
  <section style="background: #0f172a; padding: 60px 0; color: #ffffff;">
    <div class="container">
      <div style="text-align: center; margin-bottom: 40px;">
        <h2 style="font-size: 1.8rem; font-weight: 800; color: #ffffff;">Official Documentation & Claims</h2>
        <p style="color: #94a3b8; margin-top: 8px;">Complete legal compliance for corporate reimbursement and insurance claims.</p>
      </div>
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 20px;">
        <div style="padding: 20px; background: rgba(255,255,255,0.03); border-radius: 10px; border: 1px solid rgba(255,255,255,0.08);">
          <i class="fas fa-file-invoice-dollar" style="font-size: 1.8rem; color: #f59e0b; margin-bottom: 12px;"></i>
          <h4 style="color: #fff; margin-bottom: 8px;">GST-Compliant Invoice</h4>
          <p style="font-size: 0.88rem; color: #94a3b8;">18% GST itemized invoice accepted across PSU, MNC, and Defense relocation portals.</p>
        </div>
        <div style="padding: 20px; background: rgba(255,255,255,0.03); border-radius: 10px; border: 1px solid rgba(255,255,255,0.08);">
          <i class="fas fa-truck-loading" style="font-size: 1.8rem; color: #f59e0b; margin-bottom: 12px;"></i>
          <h4 style="color: #fff; margin-bottom: 8px;">Consignment Note (LR)</h4>
          <p style="font-size: 0.88rem; color: #94a3b8;">Official Lorry Receipt specifying bike model, chassis number, and driver details.</p>
        </div>
        <div style="padding: 20px; background: rgba(255,255,255,0.03); border-radius: 10px; border: 1px solid rgba(255,255,255,0.08);">
          <i class="fas fa-clipboard-check" style="font-size: 1.8rem; color: #f59e0b; margin-bottom: 12px;"></i>
          <h4 style="color: #fff; margin-bottom: 8px;">Pre-Pickup Inspection</h4>
          <p style="font-size: 0.88rem; color: #94a3b8;">Detailed condition report noting fuel level, odometer reading, and scratches before loading.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 10: Detailed FAQs with JSON-LD Schema -->
  <section style="background: #0b132b; padding: 60px 0; color: #ffffff;">
    <div class="container">
      <div style="text-align: center; margin-bottom: 40px;">
        <h2 style="font-size: 2rem; font-weight: 800; color: #ffffff;">Frequently Asked Questions</h2>
        <p style="color: #94a3b8; margin-top: 10px;">Everything you need to know about bike transport from Udaipur to Bhavnagar.</p>
      </div>

      <div style="max-width: 800px; margin: 0 auto; display: grid; gap: 15px;">
        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 10px; padding: 20px;">
          <h3 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 10px;">How long does bike transport from Udaipur to Bhavnagar take?</h3>
          <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.6;">Transit typically takes 24 to 48 hours via covered container trucks on the NH48/NH51 corridor.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 10px; padding: 20px;">
          <h3 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 10px;">What documents are required for bike transport from Udaipur?</h3>
          <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.6;">You need to provide a copy of your Bike Registration Certificate (RC), valid Insurance copy, Pollution Certificate (PUC), and Govt ID proof.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 10px; padding: 20px;">
          <h3 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 10px;">Is doorstep pickup available in Udaipur?</h3>
          <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.6;">Yes, we offer doorstep bike pickup from all locations in Udaipur including Sukher, Hiran Magri, Panchwati, Fatehpura, and Shobhagpura.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 10px; padding: 20px;">
          <h3 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 10px;">Is transit insurance included in the shipping charge?</h3>
          <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.6;">Comprehensive transit insurance is provided based on the declared vehicle value to cover accidental risks.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 10px; padding: 20px;">
          <h3 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 10px;">What are the bike transport rates from Udaipur to Bhavnagar?</h3>
          <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.6;">Estimated tariffs range from ₹2,800 to ₹11,000 based on bike type, displacement, and packaging option selected.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 10px; padding: 20px;">
          <h3 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 10px;">Do you deliver to all areas across Bhavnagar?</h3>
          <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.6;">Yes, doorstep delivery spans Waghawadi Road, Ghogha Circle, Kaliyabid, Subhashnagar, and Chitra GIDC.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 10px; padding: 20px;">
          <h3 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 10px;">How is the motorcycle protected during the trip?</h3>
          <p style="color: #cbd5e1; font-size: 0.92rem; line-height: 1.6;">We wrap your bike in 7 layers including bubble wrap, foam guards, corrugated sheets, and secure it with heavy nylon belts.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 10px; padding: 20px;">
          <h3 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 10px;">Can I get official GST bills for corporate relocation claims?</h3>
          <p style="color: #cbd5e1; font-size: 0.92rem; line-height: 1.6;">Yes, IBA-compliant 18% GST tax invoices and Consignment Notes (LR) are issued for official reimbursement.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 10px; padding: 20px;">
          <h3 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 10px;">Should I drain fuel from the bike before pickup?</h3>
          <p style="color: #cbd5e1; font-size: 0.92rem; line-height: 1.6;">Maintain minimal fuel (under 1 liter) in the tank as per vehicle transit safety standards.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 10px; padding: 20px;">
          <h3 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 10px;">Are custom wooden crates available for heavy cruisers?</h3>
          <p style="color: #cbd5e1; font-size: 0.92rem; line-height: 1.6;">Yes, custom wooden crating provides complete 360-degree protection for high-value bikes and heavy cruisers.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 11: Call-To-Action Conversion Footer -->
  <section style="background: linear-gradient(135deg, #1c2541 0%, #0b132b 100%); padding: 60px 0; text-align: center; color: #ffffff; border-top: 1px solid rgba(245, 158, 11, 0.3);">
    <div class="container">
      <h2 style="font-size: 2.2rem; font-weight: 800; margin-bottom: 15px;">Book Your Bike Transport from Udaipur to Bhavnagar Today</h2>
      <p style="font-size: 1.1rem; color: #cbd5e1; max-width: 700px; margin: 0 auto 30px; line-height: 1.7;">
        Safe, IBA-approved, and insured two-wheeler relocation across Gujarat and Rajasthan. Get your free estimate now!
      </p>
      <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap;">
        <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Us Now" style="padding: 15px 35px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #fff; border-radius: 50px; font-weight: 700; text-decoration: none; font-size: 1.05rem; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
          <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call: <?php echo SITE_PHONE; ?>
        </a>
        <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20to%20book%20Bike%20Transport%20from%20Udaipur%20to%20Bhavnagar." target="_blank" title="WhatsApp Us" style="padding: 15px 35px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #fff; border-radius: 50px; font-weight: 700; text-decoration: none; font-size: 1.05rem; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
          <i class="fab fa-whatsapp" style="margin-right: 8px;"></i> WhatsApp Quote
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
      "name": "How long does bike transport from Udaipur to Bhavnagar take?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Transit typically takes 24 to 48 hours via covered container trucks on the NH48/NH51 corridor."
      }
    },
    {
      "@type": "Question",
      "name": "What documents are required for bike transport from Udaipur?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "You need to provide a copy of your Bike Registration Certificate (RC), valid Insurance copy, Pollution Certificate (PUC), and Govt ID proof."
      }
    },
    {
      "@type": "Question",
      "name": "Is doorstep pickup available in Udaipur?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, we offer doorstep bike pickup from all locations in Udaipur including Sukher, Hiran Magri, Panchwati, Fatehpura, and Shobhagpura."
      }
    },
    {
      "@type": "Question",
      "name": "Is transit insurance included in the shipping charge?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Comprehensive transit insurance is provided based on the declared vehicle value to cover accidental risks."
      }
    },
    {
      "@type": "Question",
      "name": "What are the bike transport rates from Udaipur to Bhavnagar?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Estimated tariffs range from ₹2,800 to ₹11,000 based on bike type, displacement, and packaging option selected."
      }
    },
    {
      "@type": "Question",
      "name": "Do you deliver to all areas across Bhavnagar?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, doorstep delivery spans Waghawadi Road, Ghogha Circle, Kaliyabid, Subhashnagar, and Chitra GIDC."
      }
    },
    {
      "@type": "Question",
      "name": "How is the motorcycle protected during the trip?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "We wrap your bike in 7 layers including bubble wrap, foam guards, corrugated sheets, and secure it with heavy nylon belts."
      }
    },
    {
      "@type": "Question",
      "name": "Can I get official GST bills for corporate relocation claims?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, IBA-compliant 18% GST tax invoices and Consignment Notes (LR) are issued for official reimbursement."
      }
    },
    {
      "@type": "Question",
      "name": "Should I drain fuel from the bike before pickup?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Maintain minimal fuel (under 1 liter) in the tank as per vehicle transit safety standards."
      }
    },
    {
      "@type": "Question",
      "name": "Are custom wooden crates available for heavy cruisers?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, custom wooden crating provides complete 360-degree protection for high-value bikes and heavy cruisers."
      }
    }
  ]
}
</script>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>

