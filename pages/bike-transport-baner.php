<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "Bike Transport in Baner Pune | Safe Two-Wheeler Shifting";
$page_desc = "Planning bike transport in Baner, Pune? Get safe, insured, and doorstep motorcycle shipping services. View estimated charges, transit times, and 7-layer packaging details across Baner-Pashan Link Road, Balewadi High Street, Veerbhadra Nagar, and Baner Hill.";
$page_keywords = "bike transport baner, best bike transport baner, affordable bike transport baner, packers and movers baner, top bike transport baner company, doorstep bike transport baner, verified bike transport baner services, shree ashirwad bike transport";
$canonical_url = "https://shreeashirwadpackersandmovers.com/pages/bike-transport-baner.php";

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
            BANER PUNE BIKE RELOCATION SPECIALISTS
          </span>
          <h1 style="font-size: 2.5rem; font-weight: 800; line-height: 1.2; margin-bottom: 20px; color: #ffffff;">
            Professional <span style="color: #f59e0b;">Bike Transport in Baner (Pune)</span>
          </h1>
          <p style="font-size: 1.1rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 25px;">
            Shree Ashirwad Packers offers top-tier two-wheeler relocation services in Baner, Pune. Serving IT professionals and residents with 7-layer protective packaging, dedicated closed vehicle carriers, and 100% transit insurance across Baner-Pashan Link Road, Balewadi High Street, Veerbhadra Nagar, and Baner Hill.
          </p>

          <div style="display: flex; gap: 15px; flex-wrap: wrap; margin-bottom: 30px;">
            <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Now" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
              <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call Now: <?php echo SITE_PHONE; ?>
            </a>
            <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20a%20quote%20for%20Bike%20Transport%20in%20Baner." title="Chat on WhatsApp" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
              <i class="fab fa-whatsapp" style="margin-right: 8px;"></i> Chat on WhatsApp
            </a>
          </div>

          <div style="display: flex; gap: 20px; font-size: 0.9rem; color: #94a3b8; flex-wrap: wrap;">
            <span><strong style="color: #f59e0b;">100% Insured</strong> Transit</span>
            <span><strong style="color: #f59e0b;">7-Layer</strong> Bubble Wrapping</span>
            <span><strong style="color: #f59e0b;">Doorstep</strong> Pickup & Delivery</span>
          </div>
        </div>

        <!-- Hero Lead Form Column -->
        <div class="hero-form-card" style="background: rgba(255, 255, 255, 0.05); backdrop-filter: blur(10px); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 16px; padding: 30px; box-shadow: 0 15px 35px rgba(0,0,0,0.4);">
          <h2 style="font-size: 1.35rem; color: #ffffff; margin-bottom: 8px; font-weight: 700; text-align: center;">Get Instant Shifting Quote</h2>
          <p style="font-size: 0.85rem; color: #94a3b8; text-align: center; margin-bottom: 20px;">Baner Bike Transport Estimate in 2 Mins</p>

          <form action="#" method="POST" onsubmit="sendHeroWhatsAppLead(event, this);">
            <div style="margin-bottom: 14px;">
              <input type="text" name="name" class="form-control" placeholder="Your Full Name" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="margin-bottom: 14px;">
              <input type="tel" name="phone" class="form-control" placeholder="10-Digit Phone Number" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 10px; margin-bottom: 14px;">
              <input type="text" name="move_from" class="form-control" value="Baner (Pune)" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
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

  <!-- Section 3: Key Stats Counter Bar -->
  <section style="background: #0f172a; padding: 35px 0; border-bottom: 1px solid rgba(255,255,255,0.05);">
    <div class="container">
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 20px; text-align: center;">
        <div style="padding: 15px; background: rgba(255,255,255,0.03); border-radius: 10px; border: 1px solid rgba(255,255,255,0.05);">
          <div style="font-size: 1.8rem; font-weight: 800; color: #f59e0b;">5,800+</div>
          <div style="font-size: 0.85rem; color: #94a3b8; margin-top: 5px;">Bikes Transported in Baner/Wakad</div>
        </div>
        <div style="padding: 15px; background: rgba(255,255,255,0.03); border-radius: 10px; border: 1px solid rgba(255,255,255,0.05);">
          <div style="font-size: 1.8rem; font-weight: 800; color: #f59e0b;">100% Insured</div>
          <div style="font-size: 0.85rem; color: #94a3b8; margin-top: 5px;">Full Transit Protection</div>
        </div>
        <div style="padding: 15px; background: rgba(255,255,255,0.03); border-radius: 10px; border: 1px solid rgba(255,255,255,0.05);">
          <div style="font-size: 1.8rem; font-weight: 800; color: #f59e0b;">Same-Day</div>
          <div style="font-size: 0.85rem; color: #94a3b8; margin-top: 5px;">Doorstep Pickup Available</div>
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
        <h2 style="font-size: 2rem; font-weight: 800; color: #ffffff;">Why Choose Us for Bike Transport in Baner?</h2>
        <p style="color: #94a3b8; margin-top: 10px;">End-to-end relocation protocols tailored for high-value two-wheeler shipping.</p>
      </div>
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 25px;">
        <div style="background: rgba(255,255,255,0.03); padding: 25px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.08);">
          <i class="fas fa-truck-moving" style="font-size: 2rem; color: #f59e0b; margin-bottom: 15px;"></i>
          <h3 style="font-size: 1.2rem; color: #fff; margin-bottom: 10px;">Covered Container Carriers</h3>
          <p style="font-size: 0.9rem; color: #94a3b8; line-height: 1.6;">Enclosed vehicle trucks protecting your bike from weather, road dust, and long-distance transit risks.</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); padding: 25px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.08);">
          <i class="fas fa-box-open" style="font-size: 2rem; color: #f59e0b; margin-bottom: 15px;"></i>
          <h3 style="font-size: 1.2rem; color: #fff; margin-bottom: 10px;">7-Layer Safety Packaging</h3>
          <p style="font-size: 0.9rem; color: #94a3b8; line-height: 1.6;">Bubble wrap, foam sheets, corrugated cardboard, and stretch film safeguard paintwork against scratches.</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); padding: 25px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.08);">
          <i class="fas fa-shield-alt" style="font-size: 2rem; color: #f59e0b; margin-bottom: 15px;"></i>
          <h3 style="font-size: 1.2rem; color: #fff; margin-bottom: 10px;">Full Transit Insurance</h3>
          <p style="font-size: 0.9rem; color: #94a3b8; line-height: 1.6;">Complete insurance coverage for peace of mind from pickup point to final delivery destination.</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); padding: 25px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.08);">
          <i class="fas fa-map-marked-alt" style="font-size: 2rem; color: #f59e0b; margin-bottom: 15px;"></i>
          <h3 style="font-size: 1.2rem; color: #fff; margin-bottom: 10px;">Doorstep Pickup & Delivery</h3>
          <p style="font-size: 0.9rem; color: #94a3b8; line-height: 1.6;">Hassle-free collection from your apartment/society in Baner and direct drop at your destination.</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); padding: 25px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.08);">
          <i class="fas fa-file-invoice" style="font-size: 2rem; color: #f59e0b; margin-bottom: 15px;"></i>
          <h3 style="font-size: 1.2rem; color: #fff; margin-bottom: 10px;">IBA Approved Billing</h3>
          <p style="font-size: 0.9rem; color: #94a3b8; line-height: 1.6;">Official GST invoices and consignment documentation accepted for corporate claim reimbursements.</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); padding: 25px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.08);">
          <i class="fas fa-clock" style="font-size: 2rem; color: #f59e0b; margin-bottom: 15px;"></i>
          <h3 style="font-size: 1.2rem; color: #fff; margin-bottom: 10px;">Fast Express Schedules</h3>
          <p style="font-size: 0.9rem; color: #94a3b8; line-height: 1.6;">Scheduled departures ensuring your motorcycle reaches its destination quickly and safely.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 5: Specialized Services Breakdown & Tariff Table -->
  <section style="background: #0f172a; padding: 60px 0; color: #ffffff;">
    <div class="container">
      <div style="text-align: center; margin-bottom: 40px;">
        <h2 style="font-size: 2rem; font-weight: 800; color: #ffffff;">Bike Transport Charges in Baner (Pune)</h2>
        <p style="color: #94a3b8; margin-top: 10px;">Estimated tariffs based on bike model, displacement, and distance.</p>
      </div>

      <div style="overflow-x: auto; margin-bottom: 30px;">
        <table style="width: 100%; border-collapse: collapse; background: rgba(255,255,255,0.02); border: 1px solid rgba(255,255,255,0.08); text-align: left; font-size: 0.95rem;">
          <thead>
            <tr style="background: rgba(245, 158, 11, 0.15); color: #f59e0b; border-bottom: 1px solid rgba(245, 158, 11, 0.3);">
              <th style="padding: 15px; font-weight: 700;">Vehicle Category</th>
              <th style="padding: 15px; font-weight: 700;">Engine Capacity</th>
              <th style="padding: 15px; font-weight: 700;">Standard Packaging</th>
              <th style="padding: 15px; font-weight: 700;">Premium Crate Pack</th>
              <th style="padding: 15px; font-weight: 700;">Est. Transit Time</th>
            </tr>
          </thead>
          <tbody style="color: #cbd5e1;">
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.05);">
              <td style="padding: 15px;">Standard Scooters / Mopeds</td>
              <td style="padding: 15px;">100cc - 125cc</td>
              <td style="padding: 15px; color: #f59e0b; font-weight: 700;">₹2,500 - ₹3,500</td>
              <td style="padding: 15px;">₹3,500 - ₹4,500</td>
              <td style="padding: 15px;">24 - 48 Hours</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.05);">
              <td style="padding: 15px;">Commuter Motorcycles</td>
              <td style="padding: 15px;">125cc - 180cc</td>
              <td style="padding: 15px; color: #f59e0b; font-weight: 700;">₹3,000 - ₹4,200</td>
              <td style="padding: 15px;">₹4,200 - ₹5,500</td>
              <td style="padding: 15px;">24 - 48 Hours</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.05);">
              <td style="padding: 15px;">Sports / Cruiser Bikes</td>
              <td style="padding: 15px;">200cc - 500cc</td>
              <td style="padding: 15px; color: #f59e0b; font-weight: 700;">₹4,000 - ₹5,800</td>
              <td style="padding: 15px;">₹5,800 - ₹7,200</td>
              <td style="padding: 15px;">2 - 4 Days</td>
            </tr>
            <tr>
              <td style="padding: 15px;">Superbikes / Premium Cruisers</td>
              <td style="padding: 15px;">500cc+</td>
              <td style="padding: 15px; color: #f59e0b; font-weight: 700;">₹6,500 - ₹9,500</td>
              <td style="padding: 15px;">₹9,500 - ₹13,000</td>
              <td style="padding: 15px;">2 - 4 Days</td>
            </tr>
          </tbody>
        </table>
      </div>
      <p style="font-size: 0.85rem; color: #94a3b8; text-align: center;">*Final charges depend on route distance, packaging choices, and specific pickup location.</p>
    </div>
  </section>

  <!-- Section 6: 7-Layer Safety Packaging Framework -->
  <section style="background: #0b132b; padding: 60px 0; color: #ffffff;">
    <div class="container">
      <div style="text-align: center; margin-bottom: 40px;">
        <h2 style="font-size: 2rem; font-weight: 800; color: #ffffff;">7-Layer Protective Packaging System</h2>
        <p style="color: #94a3b8; margin-top: 10px;">Every motorcycle is wrapped meticulously before loading onto carriers.</p>
      </div>
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 20px;">
        <div style="padding: 20px; background: rgba(255,255,255,0.03); border-radius: 10px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #fff; font-size: 1.1rem; margin-bottom: 8px;">Layer 1: Stretch Film Wrap</h4>
          <p style="font-size: 0.88rem; color: #94a3b8;">Protects original body paint from dust, moisture, and fine particles.</p>
        </div>
        <div style="padding: 20px; background: rgba(255,255,255,0.03); border-radius: 10px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #fff; font-size: 1.1rem; margin-bottom: 8px;">Layer 2: 80-GSM Bubble Wrap</h4>
          <p style="font-size: 0.88rem; color: #94a3b8;">High-density shock absorption covering tank, engine panels, and lights.</p>
        </div>
        <div style="padding: 20px; background: rgba(255,255,255,0.03); border-radius: 10px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #fff; font-size: 1.1rem; margin-bottom: 8px;">Layer 3: Corrugated Cardboard</h4>
          <p style="font-size: 0.88rem; color: #94a3b8;">Heavy cardboard shields exhaust pipes, handle grips, and side guards.</p>
        </div>
        <div style="padding: 20px; background: rgba(255,255,255,0.03); border-radius: 10px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #fff; font-size: 1.1rem; margin-bottom: 8px;">Layer 4: Foam Edge Protectors</h4>
          <p style="font-size: 0.88rem; color: #94a3b8;">Custom foam buffers for brake levers, rear-view mirrors, and indicators.</p>
        </div>
        <div style="padding: 20px; background: rgba(255,255,255,0.03); border-radius: 10px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #fff; font-size: 1.1rem; margin-bottom: 8px;">Layer 5: Waterproof Poly-Cover</h4>
          <p style="font-size: 0.88rem; color: #94a3b8;">Outer rain and weather shield guarding against environmental exposure.</p>
        </div>
        <div style="padding: 20px; background: rgba(255,255,255,0.03); border-radius: 10px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #fff; font-size: 1.1rem; margin-bottom: 8px;">Layer 6: Ratchet Tie-Down Belts</h4>
          <p style="font-size: 0.88rem; color: #94a3b8;">Four-point heavy nylon belts anchoring bike firmly inside the container vehicle.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 7: Origin Pickup Locality Grid -->
  <section style="background: #0f172a; padding: 60px 0; color: #ffffff;">
    <div class="container">
      <div style="text-align: center; margin-bottom: 40px;">
        <h2 style="font-size: 1.8rem; font-weight: 800; color: #ffffff;">Baner Sub-Locality Coverage</h2>
        <p style="color: #94a3b8; margin-top: 8px;">Doorstep bike collection available across all residential and IT tech park zones in Baner.</p>
      </div>
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 15px;">
        <div style="background: rgba(255,255,255,0.03); padding: 15px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.05); text-align: center; color: #cbd5e1;">Baner Road & Mohan Nagar</div>
        <div style="background: rgba(255,255,255,0.03); padding: 15px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.05); text-align: center; color: #cbd5e1;">Baner-Pashan Link Road</div>
        <div style="background: rgba(255,255,255,0.03); padding: 15px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.05); text-align: center; color: #cbd5e1;">Balewadi High Street</div>
        <div style="background: rgba(255,255,255,0.03); padding: 15px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.05); text-align: center; color: #cbd5e1;">Veerbhadra Nagar & Pancard Club Road</div>
        <div style="background: rgba(255,255,255,0.03); padding: 15px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.05); text-align: center; color: #cbd5e1;">Cummins India Office Area</div>
        <div style="background: rgba(255,255,255,0.03); padding: 15px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.05); text-align: center; color: #cbd5e1;">Baner Hill & Sutarwadi</div>
      </div>
    </div>
  </section>

  <!-- Section 8: Intercity Route Network Grid -->
  <section style="background: #0b132b; padding: 60px 0; color: #ffffff;">
    <div class="container">
      <div style="text-align: center; margin-bottom: 40px;">
        <h2 style="font-size: 1.8rem; font-weight: 800; color: #ffffff;">Popular Bike Routes from Baner (Pune)</h2>
        <p style="color: #94a3b8; margin-top: 8px;">Explore major intercity bike shifting corridors from Baner, Pune.</p>
      </div>
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); gap: 15px;">
        <a href="<?php echo SITE_URL; ?>/pages/bike-transport-from-pune-to-bangalore.php" style="display: block; padding: 15px; background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 8px; color: #f59e0b; text-decoration: none; text-align: center;">Pune → Bangalore</a>
        <a href="<?php echo SITE_URL; ?>/pages/bike-transport-from-pune-to-hyderabad-in-train.php" style="display: block; padding: 15px; background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 8px; color: #f59e0b; text-decoration: none; text-align: center;">Pune → Hyderabad</a>
        <a href="<?php echo SITE_URL; ?>/pages/bike-transport-from-pune-to-delhi.php" style="display: block; padding: 15px; background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 8px; color: #f59e0b; text-decoration: none; text-align: center;">Pune → Delhi</a>
        <a href="<?php echo SITE_URL; ?>/pages/bike-transport-from-pune-to-nagpur-via-train.php" style="display: block; padding: 15px; background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 8px; color: #f59e0b; text-decoration: none; text-align: center;">Pune → Nagpur</a>
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
          <p style="font-size: 0.88rem; color: #94a3b8;">18% GST itemized invoice accepted across IT corporate relocation portals.</p>
        </div>
        <div style="padding: 20px; background: rgba(255,255,255,0.03); border-radius: 10px; border: 1px solid rgba(255,255,255,0.08);">
          <i class="fas fa-truck-loading" style="font-size: 1.8rem; color: #f59e0b; margin-bottom: 12px;"></i>
          <h4 style="color: #fff; margin-bottom: 8px;">Consignment Note (LR)</h4>
          <p style="font-size: 0.88rem; color: #94a3b8;">Official Lorry Receipt specifying bike registration details, engine number, and vehicle condition.</p>
        </div>
        <div style="padding: 20px; background: rgba(255,255,255,0.03); border-radius: 10px; border: 1px solid rgba(255,255,255,0.08);">
          <i class="fas fa-clipboard-check" style="font-size: 1.8rem; color: #f59e0b; margin-bottom: 12px;"></i>
          <h4 style="color: #fff; margin-bottom: 8px;">Pre-Pickup Inspection Report</h4>
          <p style="font-size: 0.88rem; color: #94a3b8;">Detailed inspection documenting existing scratches, fuel level, and odometer reading before loading.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 10: Detailed FAQs with JSON-LD Schema -->
  <section style="background: #0b132b; padding: 60px 0; color: #ffffff;">
    <div class="container">
      <div style="text-align: center; margin-bottom: 40px;">
        <h2 style="font-size: 2rem; font-weight: 800; color: #ffffff;">Frequently Asked Questions</h2>
        <p style="color: #94a3b8; margin-top: 10px;">Common queries regarding bike transport services in Baner, Pune.</p>
      </div>

      <div style="max-width: 800px; margin: 0 auto; display: grid; gap: 15px;">
        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 10px; padding: 20px;">
          <h3 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 10px;">How is bike transport from Baner handled?</h3>
          <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.6;">Our team arrives at your society in Baner, applies 7 layers of shockproof packaging, loads the bike onto enclosed container carriers, and delivers it safely to your destination city.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 10px; padding: 20px;">
          <h3 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 10px;">What documents are needed for bike shipping in Baner?</h3>
          <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.6;">You need to provide a photocopy of your Bike Registration Certificate (RC), active insurance, PUC certificate, and photo ID proof.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 10px; padding: 20px;">
          <h3 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 10px;">Is doorstep pickup available in Balewadi High Street and Pancard Club Road?</h3>
          <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.6;">Yes, doorstep collection is provided across all areas of Baner including Balewadi High Street, Pancard Club Road, Baner-Pashan Link Road, and Veerbhadra Nagar.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 10px; padding: 20px;">
          <h3 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 10px;">Do you provide corporate relocation GST bills?</h3>
          <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.6;">Yes, we provide 100% IBA-approved GST invoices eligible for company relocation claims.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 11: Call-To-Action Conversion Footer -->
  <section style="background: linear-gradient(135deg, #1c2541 0%, #0b132b 100%); padding: 60px 0; text-align: center; color: #ffffff; border-top: 1px solid rgba(245, 158, 11, 0.3);">
    <div class="container">
      <h2 style="font-size: 2.2rem; font-weight: 800; margin-bottom: 15px;">Book Your Bike Transport in Baner Today</h2>
      <p style="font-size: 1.1rem; color: #cbd5e1; max-width: 700px; margin: 0 auto 30px; line-height: 1.7;">
        Safe, IBA-approved, and insured two-wheeler relocation. Get your free estimate now!
      </p>
      <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap;">
        <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Us Now" style="padding: 15px 35px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #fff; border-radius: 50px; font-weight: 700; text-decoration: none; font-size: 1.05rem; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
          <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call: <?php echo SITE_PHONE; ?>
        </a>
        <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20to%20book%20Bike%20Transport%20in%20Baner." target="_blank" title="WhatsApp Us" style="padding: 15px 35px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #fff; border-radius: 50px; font-weight: 700; text-decoration: none; font-size: 1.05rem; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
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
      "name": "How is bike transport from Baner handled?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Our team arrives at your society in Baner, applies 7 layers of shockproof packaging, loads the bike onto enclosed container carriers, and delivers it safely to your destination city."
      }
    },
    {
      "@type": "Question",
      "name": "What documents are needed for bike shipping in Baner?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "You need to provide a photocopy of your Bike Registration Certificate (RC), active insurance, PUC certificate, and photo ID proof."
      }
    },
    {
      "@type": "Question",
      "name": "Is doorstep pickup available in Balewadi High Street and Pancard Club Road?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, doorstep collection is provided across all areas of Baner including Balewadi High Street, Pancard Club Road, Baner-Pashan Link Road, and Veerbhadra Nagar."
      }
    },
    {
      "@type": "Question",
      "name": "Do you provide corporate relocation GST bills?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, we provide 100% IBA-approved GST invoices eligible for company relocation claims."
      }
    }
  ]
}
</script>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
