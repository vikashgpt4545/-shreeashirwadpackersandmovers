<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "Bike Transport from Ranchi to Bangalore | Safe Two-Wheeler Shifting";
$page_desc = "Planning bike transport from Ranchi to Bangalore? Get safe, insured, and doorstep motorcycle shipping services. View estimated charges (~1,850 km), transit times (4-5 days), and 7-layer packaging details across Lalpur, Harmu, Kanke Road, Main Road, Ratu Road, Bariatu, Doranda to Bangalore.";
$page_keywords = "bike transport from ranchi to bangalore, best bike transport from ranchi to bangalore, affordable bike transport from ranchi to bangalore, packers and movers, packers and movers in ranchi, bike shipping ranchi to bangalore, doorstep bike transport from ranchi to bangalore, verified bike transport from ranchi to bangalore services, shree ashirwad bike transport";
$canonical_url = "https://shreeashirwadpackersandmovers.com/pages/bike-transport-from-ranchi-to-bangalore.php";

require_once __DIR__ . '/../includes/header.php';
?>

<main class="site-main dark-theme-override">

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
            RANCHI TO BANGALORE BIKE RELOCATION SPECIALISTS
          </span>
          <h1 style="font-size: 2.5rem; font-weight: 800; line-height: 1.2; margin-bottom: 20px; color: #ffffff;">
            Professional <span style="color: #f59e0b;">Bike Transport from Ranchi to Bangalore</span>
          </h1>
          <p style="font-size: 1.1rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 25px;">
            Shipping your motorcycle from Ranchi to Bangalore (~1,850 km distance) requires dedicated long-haul container logistics and multi-layer protective packaging. Shree Ashirwad Packers and Movers provides express 4-5 day transit with 100% insurance coverage, IBA-approved bills, and complete doorstep pickup across Lalpur, Harmu, Kanke Road, Main Road, Ratu Road, Bariatu, Doranda, with drop-off to Whitefield, Electronic City, Indiranagar, and HSR Layout in Bangalore.
          </p>

          <div style="display: flex; gap: 15px; flex-wrap: wrap; margin-bottom: 30px;">
            <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Now" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
              <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call Now: <?php echo SITE_PHONE; ?>
            </a>
            <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20a%20quote%20for%20Bike%20Transport%20from%20Ranchi%20to%20Bangalore." title="Chat on WhatsApp" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
              <i class="fab fa-whatsapp" style="margin-right: 8px;"></i> Chat on WhatsApp
            </a>
          </div>

          <div style="display: flex; gap: 20px; font-size: 0.9rem; color: #94a3b8; flex-wrap: wrap;">
            <span><strong style="color: #f59e0b;">100% Insured</strong> Transit</span>
            <span><strong style="color: #f59e0b;">7-Layer</strong> Bubble Packaging</span>
            <span><strong style="color: #f59e0b;">4-5 Days</strong> Delivery</span>
          </div>
        </div>

        <!-- Hero Lead Form Column -->
        <div class="hero-form-card" style="background: rgba(255, 255, 255, 0.05); backdrop-filter: blur(10px); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 16px; padding: 30px; box-shadow: 0 15px 35px rgba(0,0,0,0.4);">
          <h2 style="font-size: 1.35rem; color: #ffffff; margin-bottom: 8px; font-weight: 700; text-align: center;">Get Instant Route Quote</h2>
          <p style="font-size: 0.85rem; color: #94a3b8; text-align: center; margin-bottom: 20px;">Ranchi → Bangalore Shifting Estimate in 2 Mins</p>

          <form action="#" method="POST" onsubmit="sendHeroWhatsAppLead(event, this);">
            <div style="margin-bottom: 14px;">
              <input type="text" name="name" class="form-control" placeholder="Your Full Name" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="margin-bottom: 14px;">
              <input type="tel" name="phone" class="form-control" placeholder="10-Digit Phone Number" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 10px; margin-bottom: 14px;">
              <input type="text" name="move_from" class="form-control" value="Ranchi" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
              <input type="text" name="move_to" class="form-control" value="Bangalore" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
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
          <div style="font-size: 1.8rem; font-weight: 800; color: #f59e0b;">3,400+</div>
          <div style="font-size: 0.85rem; color: #94a3b8; margin-top: 5px;">Bikes Transported to Bangalore</div>
        </div>
        <div style="padding: 15px; background: rgba(255,255,255,0.03); border-radius: 10px; border: 1px solid rgba(255,255,255,0.05);">
          <div style="font-size: 1.8rem; font-weight: 800; color: #f59e0b;">~1,850 KM</div>
          <div style="font-size: 0.85rem; color: #94a3b8; margin-top: 5px;">National Highway Route</div>
        </div>
        <div style="padding: 15px; background: rgba(255,255,255,0.03); border-radius: 10px; border: 1px solid rgba(255,255,255,0.05);">
          <div style="font-size: 1.8rem; font-weight: 800; color: #f59e0b;">4-5 Days</div>
          <div style="font-size: 0.85rem; color: #94a3b8; margin-top: 5px;">Express Transit Schedule</div>
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
        <h2 style="font-size: 2rem; font-weight: 800; color: #ffffff;">Why Choose Us for Ranchi to Bangalore Bike Shipping?</h2>
        <p style="color: #94a3b8; margin-top: 10px;">End-to-end relocation protocols tailored for two-wheeler transport along Ranchi-Bangalore routes.</p>
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
          <h3 style="font-size: 1.2rem; color: #fff; margin-bottom: 10px;">Doorstep Delivery in Bangalore</h3>
          <p style="font-size: 0.9rem; color: #94a3b8; line-height: 1.6;">Seamless door collection in Ranchi and delivery across Whitefield, Electronic City, Indiranagar, Koramangala, HSR Layout.</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); padding: 25px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.08);">
          <i class="fas fa-file-invoice" style="font-size: 2rem; color: #f59e0b; margin-bottom: 15px;"></i>
          <h3 style="font-size: 1.2rem; color: #fff; margin-bottom: 10px;">IBA Approved Billing</h3>
          <p style="font-size: 0.9rem; color: #94a3b8; line-height: 1.6;">Official GST bills and consignment notes compatible with corporate relocation reimbursement programs.</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); padding: 25px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.08);">
          <i class="fas fa-bolt" style="font-size: 2rem; color: #f59e0b; margin-bottom: 15px;"></i>
          <h3 style="font-size: 1.2rem; color: #fff; margin-bottom: 10px;">Express Long-Distance Timelines</h3>
          <p style="font-size: 0.9rem; color: #94a3b8; line-height: 1.6;">Direct highway logistics ensuring your vehicle reaches Bangalore within 4-5 days of loading.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 5: Specialized Services Breakdown & Tariff Table -->
  <section style="background: #0f172a; padding: 60px 0; color: #ffffff;">
    <div class="container">
      <div style="text-align: center; margin-bottom: 40px;">
        <h2 style="font-size: 2rem; font-weight: 800; color: #ffffff;">Ranchi to Bangalore Bike Transport Charges</h2>
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
              <td style="padding: 15px; color: #f59e0b; font-weight: 700;">₹4,500 - ₹5,800</td>
              <td style="padding: 15px;">₹5,800 - ₹6,800</td>
              <td style="padding: 15px;">4 - 5 Days</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.05);">
              <td style="padding: 15px;">Commuter Motorcycles</td>
              <td style="padding: 15px;">125cc - 180cc</td>
              <td style="padding: 15px; color: #f59e0b; font-weight: 700;">₹5,200 - ₹6,800</td>
              <td style="padding: 15px;">₹6,800 - ₹8,000</td>
              <td style="padding: 15px;">4 - 5 Days</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.05);">
              <td style="padding: 15px;">Sports / Cruiser Bikes</td>
              <td style="padding: 15px;">200cc - 500cc</td>
              <td style="padding: 15px; color: #f59e0b; font-weight: 700;">₹6,800 - ₹8,800</td>
              <td style="padding: 15px;">₹8,800 - ₹10,500</td>
              <td style="padding: 15px;">4 - 5 Days</td>
            </tr>
            <tr>
              <td style="padding: 15px;">Superbikes / Premium Cruisers</td>
              <td style="padding: 15px;">500cc+</td>
              <td style="padding: 15px; color: #f59e0b; font-weight: 700;">₹9,500 - ₹13,500</td>
              <td style="padding: 15px;">₹13,500 - ₹17,000</td>
              <td style="padding: 15px;">4 - 5 Days</td>
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
        <h2 style="font-size: 1.8rem; font-weight: 800; color: #ffffff;">Bangalore Drop Hubs & Ranchi Pickup Areas</h2>
        <p style="color: #94a3b8; margin-top: 8px;">Doorstep coverage across Ranchi and major IT tech corridors in Bangalore.</p>
      </div>
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 15px;">
        <div style="background: rgba(255,255,255,0.03); padding: 15px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.05); text-align: center; color: #cbd5e1;">Lalpur & Harmu</div>
        <div style="background: rgba(255,255,255,0.03); padding: 15px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.05); text-align: center; color: #cbd5e1;">Kanke Road & Main Road</div>
        <div style="background: rgba(255,255,255,0.03); padding: 15px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.05); text-align: center; color: #cbd5e1;">Whitefield & Electronic City</div>
        <div style="background: rgba(255,255,255,0.03); padding: 15px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.05); text-align: center; color: #cbd5e1;">Indiranagar & Koramangala</div>
        <div style="background: rgba(255,255,255,0.03); padding: 15px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.05); text-align: center; color: #cbd5e1;">HSR Layout & Marathahalli</div>
        <div style="background: rgba(255,255,255,0.03); padding: 15px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.05); text-align: center; color: #cbd5e1;">Yelahanka & Hebbal</div>
      </div>
    </div>
  </section>

  <!-- Section 8: Intercity Route Network Grid -->
  <section style="background: #0b132b; padding: 60px 0; color: #ffffff;">
    <div class="container">
      <div style="text-align: center; margin-bottom: 40px;">
        <h2 style="font-size: 1.8rem; font-weight: 800; color: #ffffff;">Related Interstate Routes</h2>
        <p style="color: #94a3b8; margin-top: 8px;">Explore other major long-distance two-wheeler transport corridors.</p>
      </div>
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); gap: 15px;">
        <a href="<?php echo SITE_URL; ?>/pages/bike-transport-from-ranchi-to-delhi.php" style="display: block; padding: 15px; background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 8px; color: #f59e0b; text-decoration: none; text-align: center;">Ranchi → Delhi</a>
        <a href="<?php echo SITE_URL; ?>/pages/bike-transport-from-bokaro-to-bangalore.php" style="display: block; padding: 15px; background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 8px; color: #f59e0b; text-decoration: none; text-align: center;">Bokaro → Bangalore</a>
        <a href="<?php echo SITE_URL; ?>/pages/bike-transport-from-patna-to-bangalore.php" style="display: block; padding: 15px; background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 8px; color: #f59e0b; text-decoration: none; text-align: center;">Patna → Bangalore</a>
        <a href="<?php echo SITE_URL; ?>/pages/bike-transport-from-jamshedpur-to-bangalore.php" style="display: block; padding: 15px; background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 8px; color: #f59e0b; text-decoration: none; text-align: center;">Jamshedpur → Bangalore</a>
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
        <p style="color: #94a3b8; margin-top: 10px;">Everything you need to know about bike transport from Ranchi to Bangalore.</p>
      </div>

      <div style="max-width: 800px; margin: 0 auto; display: grid; gap: 15px;">
        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 10px; padding: 20px;">
          <h3 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 10px;">How long does bike transport from Ranchi to Bangalore take?</h3>
          <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.6;">Transit typically takes 4 to 5 days via express covered carriers using NH16 / NH44 national highways.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 10px; padding: 20px;">
          <h3 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 10px;">What documents are required for bike transport from Ranchi?</h3>
          <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.6;">You need to provide a copy of your Bike Registration Certificate (RC), valid Insurance copy, Pollution Certificate (PUC), and Govt ID proof.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 10px; padding: 20px;">
          <h3 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 10px;">Is doorstep pickup available across Ranchi?</h3>
          <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.6;">Yes, we offer doorstep bike pickup across Ranchi including Lalpur, Harmu, Kanke Road, Main Road, Ratu Road, Bariatu, and Doranda.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 10px; padding: 20px;">
          <h3 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 10px;">Is transit insurance included in the shipping charge?</h3>
          <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.6;">Comprehensive transit insurance is provided based on the declared vehicle value to cover accidental risks.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 10px; padding: 20px;">
          <h3 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 10px;">What are the charges for moving a motorcycle from Ranchi to Bangalore?</h3>
          <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.6;">Charges range from ₹4,500 to ₹10,500 depending on vehicle engine capacity, weight, and packaging type chosen.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 10px; padding: 20px;">
          <h3 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 10px;">Do you deliver to all IT parks and residential areas in Bangalore?</h3>
          <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.6;">Yes, we cover Whitefield, Electronic City, Indiranagar, Koramangala, HSR Layout, Marathahalli, and all outer Ring Road hubs.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 10px; padding: 20px;">
          <h3 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 10px;">How is the bike secured during long-distance transit?</h3>
          <p style="color: #cbd5e1; font-size: 0.92rem; line-height: 1.6;">Bikes are secured vertically using 4-point heavy-duty nylon ratchet straps and wheel chocks inside covered containers.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 10px; padding: 20px;">
          <h3 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 10px;">Can I get an IBA-approved GST bill for company reimbursement?</h3>
          <p style="color: #cbd5e1; font-size: 0.92rem; line-height: 1.6;">Yes, valid 18% GST tax invoices with Consignment (LR) copies are issued for employer relocation allowance.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 10px; padding: 20px;">
          <h3 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 10px;">How much fuel should be kept in the bike tank?</h3>
          <p style="color: #cbd5e1; font-size: 0.92rem; line-height: 1.6;">Please keep less than 1 liter of petrol in the fuel tank to adhere to highway container transport safety norms.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 10px; padding: 20px;">
          <h3 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 10px;">Is wooden crating available for premium sports bikes?</h3>
          <p style="color: #cbd5e1; font-size: 0.92rem; line-height: 1.6;">Yes, custom wooden crate packaging is available for Royal Enfield, KTM, BMW, and premium superbike relocation.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 11: Call-To-Action Conversion Footer -->
  <section style="background: linear-gradient(135deg, #1c2541 0%, #0b132b 100%); padding: 60px 0; text-align: center; color: #ffffff; border-top: 1px solid rgba(245, 158, 11, 0.3);">
    <div class="container">
      <h2 style="font-size: 2.2rem; font-weight: 800; margin-bottom: 15px;">Book Your Bike Transport from Ranchi to Bangalore Today</h2>
      <p style="font-size: 1.1rem; color: #cbd5e1; max-width: 700px; margin: 0 auto 30px; line-height: 1.7;">
        Safe, IBA-approved, and insured two-wheeler relocation. Get your free estimate now!
      </p>
      <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap;">
        <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Us Now" style="padding: 15px 35px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #fff; border-radius: 50px; font-weight: 700; text-decoration: none; font-size: 1.05rem; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
          <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call: <?php echo SITE_PHONE; ?>
        </a>
        <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20to%20book%20Bike%20Transport%20from%20Ranchi%20to%20Bangalore." target="_blank" title="WhatsApp Us" style="padding: 15px 35px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #fff; border-radius: 50px; font-weight: 700; text-decoration: none; font-size: 1.05rem; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
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
      "name": "How long does bike transport from Ranchi to Bangalore take?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Transit typically takes 4 to 5 days via express covered carriers using NH16 / NH44 national highways."
      }
    },
    {
      "@type": "Question",
      "name": "What documents are required for bike transport from Ranchi?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "You need to provide a copy of your Bike Registration Certificate (RC), valid Insurance copy, Pollution Certificate (PUC), and Govt ID proof."
      }
    },
    {
      "@type": "Question",
      "name": "Is doorstep pickup available across Ranchi?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, we offer doorstep bike pickup across Ranchi including Lalpur, Harmu, Kanke Road, Main Road, Ratu Road, Bariatu, and Doranda."
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
      "name": "What are the charges for moving a motorcycle from Ranchi to Bangalore?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Charges range from ₹4,500 to ₹10,500 depending on vehicle engine capacity, weight, and packaging type chosen."
      }
    },
    {
      "@type": "Question",
      "name": "Do you deliver to all IT parks and residential areas in Bangalore?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, we cover Whitefield, Electronic City, Indiranagar, Koramangala, HSR Layout, Marathahalli, and all outer Ring Road hubs."
      }
    },
    {
      "@type": "Question",
      "name": "How is the bike secured during long-distance transit?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Bikes are secured vertically using 4-point heavy-duty nylon ratchet straps and wheel chocks inside covered containers."
      }
    },
    {
      "@type": "Question",
      "name": "Can I get an IBA-approved GST bill for company reimbursement?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, valid 18% GST tax invoices with Consignment (LR) copies are issued for employer relocation allowance."
      }
    },
    {
      "@type": "Question",
      "name": "How much fuel should be kept in the bike tank?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Please keep less than 1 liter of petrol in the fuel tank to adhere to highway container transport safety norms."
      }
    },
    {
      "@type": "Question",
      "name": "Is wooden crating available for premium sports bikes?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, custom wooden crate packaging is available for Royal Enfield, KTM, BMW, and premium superbike relocation."
      }
    }
  ]
}
</script>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
