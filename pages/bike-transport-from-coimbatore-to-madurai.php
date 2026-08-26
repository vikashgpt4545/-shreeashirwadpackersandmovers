<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "Bike Transport from Coimbatore to Madurai | Safe Two-Wheeler Shifting";
$page_desc = "Safe & fast bike transport from Coimbatore to Madurai (215 km via NH83/NH84). Express same-day / 12-hr delivery, 100% insured transit, 7-layer bubble wrapping, doorstep pick & drop. Free quote.";
$page_keywords = "bike transport from coimbatore to madurai, motorcycle shipping coimbatore to madurai, two wheeler transport coimbatore madurai, bike packers movers coimbatore madurai, bike shifting charges coimbatore madurai";
$canonical_url = "https://shreeashirwadpackersandmovers.com/pages/bike-transport-from-coimbatore-to-madurai.php";

require_once __DIR__ . '/../includes/header.php';
?>

<main class="site-main" style="background-color: #0b132b; color: #cbd5e1; font-family: 'Inter', sans-serif;">

  <!-- 1. Visual Breadcrumb Navigation Bar -->
  <div class="breadcrumb-wrapper" style="background: #1c2541; padding: 12px 0; border-bottom: 1px solid rgba(245, 158, 11, 0.2);">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 15px;">
      <div class="breadcrumb-list" style="font-size: 0.88rem; color: #94a3b8;">
        <span class="breadcrumb-item"><a href="<?php echo SITE_URL; ?>" title="Home" style="color: #f59e0b; text-decoration: none;">Home</a></span>
        <span class="breadcrumb-separator" style="margin: 0 8px; color: #64748b;">/</span>
        <span class="breadcrumb-item"><a href="<?php echo SITE_URL; ?>/pages/bike-transportation.php" title="Bike Transport" style="color: #f59e0b; text-decoration: none;">Bike Transport</a></span>
        <span class="breadcrumb-separator" style="margin: 0 8px; color: #64748b;">/</span>
        <span class="breadcrumb-item active" style="color: #ffffff;">Bike Transport from Coimbatore to Madurai</span>
      </div>
    </div>
  </div>

  <!-- 2. Hero Section with Lead Form -->
  <section class="hero-section" style="background: linear-gradient(135deg, #0b132b 0%, #1c2541 100%); padding: 60px 0; color: #ffffff; border-bottom: 1px solid rgba(255, 255, 255, 0.05);">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 15px;">
      <div class="hero-grid" style="display: grid; grid-template-columns: 1.2fr 0.8fr; gap: 40px; align-items: center;">
        
        <!-- Hero Text Column -->
        <div class="hero-text">
          <span class="section-tag" style="background: rgba(245, 158, 11, 0.15); color: #f59e0b; border: 1px solid rgba(245, 158, 11, 0.4); padding: 6px 16px; border-radius: 20px; font-size: 0.85rem; font-weight: 700; text-transform: uppercase; display: inline-block; margin-bottom: 15px;">
            COIMBATORE TO MADURAI RELOCATION SPECIALISTS
          </span>
          <h1 style="font-size: 2.5rem; font-weight: 800; line-height: 1.2; margin-bottom: 20px; color: #ffffff;">
            Express Same-Day <span style="color: #f59e0b;">Bike Transport from Coimbatore to Madurai</span>
          </h1>
          <p style="font-size: 1.05rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 25px;">
            Transport your bike 215 km from Coimbatore to Madurai with express same-day delivery via NH83/NH84. Shree Ashirwad Packers and Movers provides 7-layer protective packaging, enclosed container trucks, GPS tracking, and doorstep pickup/delivery.
          </p>

          <div style="display: flex; gap: 15px; flex-wrap: wrap; margin-bottom: 30px;">
            <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Now" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
              <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call Now: <?php echo SITE_PHONE; ?>
            </a>
            <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20a%20quote%20for%20bike%20transport%20from%20Coimbatore%20to%20Madurai." title="Chat on WhatsApp" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
              <i class="fab fa-whatsapp" style="margin-right: 8px;"></i> Chat on WhatsApp
            </a>
          </div>

          <div style="display: flex; gap: 20px; font-size: 0.9rem; color: #94a3b8;">
            <span><strong style="color: #f59e0b;">100% Insured</strong> Shifting</span>
            <span><strong style="color: #f59e0b;">7-Layer</strong> Protection</span>
            <span><strong style="color: #f59e0b;">Same Day</strong> Delivery</span>
          </div>
        </div>

        <!-- Hero Lead Form Column -->
        <div class="hero-form-card" style="background: rgba(255, 255, 255, 0.04); backdrop-filter: blur(10px); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 16px; padding: 30px; box-shadow: 0 15px 35px rgba(0,0,0,0.4);">
          <h2 style="font-size: 1.3rem; color: #ffffff; margin-bottom: 8px; font-weight: 700; text-align: center;">Get Instant Bike Shifting Quote</h2>
          <p style="font-size: 0.85rem; color: #94a3b8; text-align: center; margin-bottom: 20px;">Transparent pricing for Coimbatore to Madurai motorcycle shipping</p>

          <form action="#" method="POST" onsubmit="sendHeroWhatsAppLead(event, this);">
            <div style="margin-bottom: 14px;">
              <input type="text" name="name" class="form-control" placeholder="Your Full Name" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="margin-bottom: 14px;">
              <input type="tel" name="phone" class="form-control" placeholder="10-Digit Mobile Number" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 10px; margin-bottom: 14px;">
              <input type="text" name="move_from" class="form-control" value="Coimbatore" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
              <input type="text" name="move_to" class="form-control" value="Madurai" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <button type="submit" style="width: 100%; padding: 14px; background: linear-gradient(135deg, #d32f2f 0%, #f59e0b 100%); color: #ffffff; border: none; border-radius: 50px; font-weight: 700; font-size: 1rem; cursor: pointer;">
              Get Instant Estimate &rarr;
            </button>
          </form>
        </div>

      </div>
    </div>
  </section>

  <!-- 3. Key Stats Bar -->
  <section style="background: #0f172a; padding: 35px 0; border-bottom: 1px solid rgba(255,255,255,0.05);">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 15px;">
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 20px; text-align: center;">
        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(245, 158, 11, 0.2); border-radius: 12px; padding: 20px;">
          <h3 style="font-size: 2rem; color: #f59e0b; margin-bottom: 5px; font-weight: 800;">215 km</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; margin: 0;">NH83/NH84 Express Route</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(245, 158, 11, 0.2); border-radius: 12px; padding: 20px;">
          <h3 style="font-size: 2rem; color: #f59e0b; margin-bottom: 5px; font-weight: 800;">Same Day</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; margin: 0;">Express Delivery (12 Hours)</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(245, 158, 11, 0.2); border-radius: 12px; padding: 20px;">
          <h3 style="font-size: 2rem; color: #f59e0b; margin-bottom: 5px; font-weight: 800;">2,900+</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; margin: 0;">Bikes Delivered to Madurai</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(245, 158, 11, 0.2); border-radius: 12px; padding: 20px;">
          <h3 style="font-size: 2rem; color: #f59e0b; margin-bottom: 5px; font-weight: 800;">100% Insured</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; margin: 0;">All-Risk Policy Coverage</p>
        </div>
      </div>
    </div>
  </section>

  <!-- 4. Core Features & Benefits -->
  <section style="padding: 60px 0; background: #0b132b; color: #ffffff;">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 15px;">
      <h2 style="font-size: 2rem; text-align: center; font-weight: 700; margin-bottom: 40px;">
        Why Choose Our <span style="color: #f59e0b;">Coimbatore to Madurai Bike Transport</span>
      </h2>
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 25px;">
        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 12px; padding: 25px;">
          <div style="color: #f59e0b; font-size: 1.5rem; margin-bottom: 12px;"><i class="fas fa-shield-alt"></i></div>
          <h3 style="font-size: 1.2rem; color: #ffffff; margin-bottom: 10px; font-weight: 700;">7-Layer Protection</h3>
          <p style="color: #94a3b8; font-size: 0.92rem; line-height: 1.6; margin: 0;">High-density bubble wrapping, corrugated sheets, foam edge protectors, and stretch wrapping prevent scratches and damage.</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 12px; padding: 25px;">
          <div style="color: #f59e0b; font-size: 1.5rem; margin-bottom: 12px;"><i class="fas fa-truck-moving"></i></div>
          <h3 style="font-size: 1.2rem; color: #ffffff; margin-bottom: 10px; font-weight: 700;">Enclosed Bike Carriers</h3>
          <p style="color: #94a3b8; font-size: 0.92rem; line-height: 1.6; margin: 0;">Specialized closed container trucks equipped with safety harness belts prevent movement and weather damage during transit.</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 12px; padding: 25px;">
          <div style="color: #f59e0b; font-size: 1.5rem; margin-bottom: 12px;"><i class="fas fa-map-marker-alt"></i></div>
          <h3 style="font-size: 1.2rem; color: #ffffff; margin-bottom: 10px; font-weight: 700;">Doorstep Pick &amp; Drop</h3>
          <p style="color: #94a3b8; font-size: 0.92rem; line-height: 1.6; margin: 0;">Complete doorstep pickup from any location in Coimbatore and direct delivery to KK Nagar, Anna Nagar, or SS Colony in Madurai.</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 12px; padding: 25px;">
          <div style="color: #f59e0b; font-size: 1.5rem; margin-bottom: 12px;"><i class="fas fa-file-invoice"></i></div>
          <h3 style="font-size: 1.2rem; color: #ffffff; margin-bottom: 10px; font-weight: 700;">Transparent GST Billing</h3>
          <p style="color: #94a3b8; font-size: 0.92rem; line-height: 1.6; margin: 0;">Official IBA-approved consignment notes, transparent rate cards, and full tax invoices with no hidden charges.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- 5. Pricing Matrix Table -->
  <section style="padding: 60px 0; background: #1c2541; color: #ffffff;">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 15px;">
      <h2 style="font-size: 2rem; text-align: center; font-weight: 700; margin-bottom: 10px;">
        Bike Transport Charges from <span style="color: #f59e0b;">Coimbatore to Madurai</span>
      </h2>
      <p style="text-align: center; color: #94a3b8; margin-bottom: 40px;">Estimated cost breakdown based on engine capacity and vehicle type</p>

      <div style="overflow-x: auto; max-width: 900px; margin: 0 auto;">
        <table style="width: 100%; border-collapse: collapse; background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.1); border-radius: 12px; overflow: hidden;">
          <thead>
            <tr style="background: rgba(245, 158, 11, 0.2); color: #f59e0b; text-align: left;">
              <th style="padding: 16px 20px; border-bottom: 1px solid rgba(255,255,255,0.1);">Vehicle Category</th>
              <th style="padding: 16px 20px; border-bottom: 1px solid rgba(255,255,255,0.1);">Engine Capacity</th>
              <th style="padding: 16px 20px; border-bottom: 1px solid rgba(255,255,255,0.1);">Estimated Price Range</th>
              <th style="padding: 16px 20px; border-bottom: 1px solid rgba(255,255,255,0.1);">Transit Time</th>
            </tr>
          </thead>
          <tbody>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.05);">
              <td style="padding: 16px 20px;">Scooters &amp; Mopeds</td>
              <td style="padding: 16px 20px;">Up to 125cc</td>
              <td style="padding: 16px 20px; color: #f59e0b; font-weight: 700;">₹2,400 - ₹3,200</td>
              <td style="padding: 16px 20px;">Same Day (12 Hrs)</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.05); background: rgba(255,255,255,0.02);">
              <td style="padding: 16px 20px;">Standard Commuter Bikes</td>
              <td style="padding: 16px 20px;">100cc - 150cc</td>
              <td style="padding: 16px 20px; color: #f59e0b; font-weight: 700;">₹2,900 - ₹3,800</td>
              <td style="padding: 16px 20px;">Same Day (12 Hrs)</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.05);">
              <td style="padding: 16px 20px;">Executive &amp; Sports Bikes</td>
              <td style="padding: 16px 20px;">150cc - 250cc</td>
              <td style="padding: 16px 20px; color: #f59e0b; font-weight: 700;">₹3,600 - ₹4,600</td>
              <td style="padding: 16px 20px;">Same Day (12 Hrs)</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.05); background: rgba(255,255,255,0.02);">
              <td style="padding: 16px 20px;">Cruisers &amp; Royal Enfield</td>
              <td style="padding: 16px 20px;">350cc - 500cc</td>
              <td style="padding: 16px 20px; color: #f59e0b; font-weight: 700;">₹4,400 - ₹5,800</td>
              <td style="padding: 16px 20px;">Same Day (12 Hrs)</td>
            </tr>
            <tr>
              <td style="padding: 16px 20px;">Premium Superbikes</td>
              <td style="padding: 16px 20px;">500cc+ / Premium</td>
              <td style="padding: 16px 20px; color: #f59e0b; font-weight: 700;">₹6,800 - ₹9,800</td>
              <td style="padding: 16px 20px;">Same Day (12 Hrs)</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </section>

  <!-- 6. 7-Layer Safety Packaging Framework -->
  <section style="padding: 60px 0; background: #0b132b; color: #ffffff;">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 15px;">
      <h2 style="font-size: 2rem; text-align: center; font-weight: 700; margin-bottom: 40px;">
        Our Signature <span style="color: #f59e0b;">7-Layer Safety Packaging</span> Framework
      </h2>
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 25px;">
        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 12px; padding: 25px;">
          <div style="color: #f59e0b; font-weight: 800; font-size: 1.2rem; margin-bottom: 10px;">Layer 1: Stretch Film Wrapping</div>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.6; margin: 0;">Initial dust-proof barrier guarding body paint, chrome panels, and mirrors against moisture and road dust.</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 12px; padding: 25px;">
          <div style="color: #f59e0b; font-weight: 800; font-size: 1.2rem; margin-bottom: 10px;">Layer 2: Heavy-Duty Bubble Wrap</div>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.6; margin: 0;">High-density air cushion layer covering fuel tank, side panels, headlights, and tail lamps against shocks.</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 12px; padding: 25px;">
          <div style="color: #f59e0b; font-weight: 800; font-size: 1.2rem; margin-bottom: 10px;">Layer 3: EVA Foam Sheet Guards</div>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.6; margin: 0;">Thick foam strips placed around sensitive engine components, exhaust pipes, and handlebars.</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 12px; padding: 25px;">
          <div style="color: #f59e0b; font-weight: 800; font-size: 1.2rem; margin-bottom: 10px;">Layer 4: Corrugated Sheet Sheathing</div>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.6; margin: 0;">Custom-cut heavy cardboard sheets molded around the bike body to absorb external impact.</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 12px; padding: 25px;">
          <div style="color: #f59e0b; font-weight: 800; font-size: 1.2rem; margin-bottom: 10px;">Layer 5: Edge &amp; Corner Protectors</div>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.6; margin: 0;">Reinforced hardboard corner strips fitted to brake levers, indicator lights, and mudguards.</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 12px; padding: 25px;">
          <div style="color: #f59e0b; font-weight: 800; font-size: 1.2rem; margin-bottom: 10px;">Layer 6: Harness &amp; Belt Anchoring</div>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.6; margin: 0;">Heavy polypropylene straps secure the bike inside covered containers to eliminate movement.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- 7. Step-by-Step Shifting Process -->
  <section style="padding: 60px 0; background: #1c2541; color: #ffffff;">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 15px;">
      <h2 style="font-size: 2rem; text-align: center; font-weight: 700; margin-bottom: 40px;">
        Our Step-by-Step <span style="color: #f59e0b;">Bike Transport Process</span>
      </h2>
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); gap: 25px;">
        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 12px; padding: 25px; text-align: center;">
          <div style="width: 50px; height: 50px; background: rgba(245, 158, 11, 0.2); color: #f59e0b; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.3rem; font-weight: 800; margin: 0 auto 15px;">1</div>
          <h3 style="font-size: 1.1rem; color: #ffffff; margin-bottom: 10px; font-weight: 700;">Inspection &amp; Quote</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6; margin: 0;">We inspect your bike condition in Coimbatore, record odometer readings, and issue a transparent quote.</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 12px; padding: 25px; text-align: center;">
          <div style="width: 50px; height: 50px; background: rgba(245, 158, 11, 0.2); color: #f59e0b; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.3rem; font-weight: 800; margin: 0 auto 15px;">2</div>
          <h3 style="font-size: 1.1rem; color: #ffffff; margin-bottom: 10px; font-weight: 700;">7-Layer Packaging</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6; margin: 0;">Our technicians drain excess fuel and wrap your two-wheeler with multi-layer protective packaging.</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 12px; padding: 25px; text-align: center;">
          <div style="width: 50px; height: 50px; background: rgba(245, 158, 11, 0.2); color: #f59e0b; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.3rem; font-weight: 800; margin: 0 auto 15px;">3</div>
          <h3 style="font-size: 1.1rem; color: #ffffff; margin-bottom: 10px; font-weight: 700;">Container Transit</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6; margin: 0;">Your bike is safely strapped inside covered carriers for smooth transit along NH83/NH84 corridor.</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 12px; padding: 25px; text-align: center;">
          <div style="width: 50px; height: 50px; background: rgba(245, 158, 11, 0.2); color: #f59e0b; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.3rem; font-weight: 800; margin: 0 auto 15px;">4</div>
          <h3 style="font-size: 1.1rem; color: #ffffff; margin-bottom: 10px; font-weight: 700;">Doorstep Delivery</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6; margin: 0;">Unpacking and final joint inspection at your requested destination address in Madurai.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- 8. Locality Coverage -->
  <section style="padding: 60px 0; background: #0b132b; color: #ffffff;">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 15px;">
      <h2 style="font-size: 2rem; text-align: center; font-weight: 700; margin-bottom: 30px;">
        Locality Coverage: <span style="color: #f59e0b;">Coimbatore Pickup &amp; Madurai Delivery</span>
      </h2>
      <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 30px;">
        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 12px; padding: 25px;">
          <h3 style="color: #f59e0b; font-size: 1.2rem; margin-bottom: 15px; font-weight: 700;">Coimbatore Pickup Localities</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.8; margin: 0;">
            Gandhipuram, Peelamedu, RS Puram, Saravanampatti, Singanallur, Saibaba Colony, Kovaipudur.
          </p>
        </div>
        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 12px; padding: 25px;">
          <h3 style="color: #f59e0b; font-size: 1.2rem; margin-bottom: 15px; font-weight: 700;">Madurai Delivery Localities</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.8; margin: 0;">
            KK Nagar, Anna Nagar, Simmakkal, SS Colony, TVS Nagar, Mattuthavani, Sellur, Ellis Nagar.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- 9. Documentation Checklist -->
  <section style="padding: 60px 0; background: #1c2541; color: #ffffff;">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 15px;">
      <h2 style="font-size: 2rem; text-align: center; font-weight: 700; margin-bottom: 40px;">
        Required <span style="color: #f59e0b;">Documentation Checklist</span>
      </h2>
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); gap: 25px;">
        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 12px; padding: 25px;">
          <div style="color: #f59e0b; font-size: 1.3rem; margin-bottom: 10px;"><i class="fas fa-id-card"></i></div>
          <h3 style="font-size: 1.1rem; color: #ffffff; margin-bottom: 8px; font-weight: 700;">Government ID Proof</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6; margin: 0;">Self-attested copy of Aadhaar Card, Driving License, or Passport for sender identity verification.</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 12px; padding: 25px;">
          <div style="color: #f59e0b; font-size: 1.3rem; margin-bottom: 10px;"><i class="fas fa-file-contract"></i></div>
          <h3 style="font-size: 1.1rem; color: #ffffff; margin-bottom: 8px; font-weight: 700;">Vehicle Registration (RC)</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6; margin: 0;">Copy of valid Registration Certificate confirming ownership details of the two-wheeler.</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 12px; padding: 25px;">
          <div style="color: #f59e0b; font-size: 1.3rem; margin-bottom: 10px;"><i class="fas fa-shield-alt"></i></div>
          <h3 style="font-size: 1.1rem; color: #ffffff; margin-bottom: 8px; font-weight: 700;">Vehicle Insurance Copy</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6; margin: 0;">Photocopy of active motor insurance policy required for processing transit coverage.</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 12px; padding: 25px;">
          <div style="color: #f59e0b; font-size: 1.3rem; margin-bottom: 10px;"><i class="fas fa-key"></i></div>
          <h3 style="font-size: 1.1rem; color: #ffffff; margin-bottom: 8px; font-weight: 700;">Key &amp; Inspection Sheet</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6; margin: 0;">Original key handover along with signed initial condition and odometer inspection sheet.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- 10. Related Route Network Grid -->
  <section style="padding: 60px 0; background: #0b132b; color: #ffffff;">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 15px;">
      <h2 style="font-size: 2rem; text-align: center; font-weight: 700; margin-bottom: 40px;">
        Popular Intercity <span style="color: #f59e0b;">Bike Transport Routes</span>
      </h2>
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 20px;">
        <a href="<?php echo SITE_URL; ?>/pages/bike-transport-from-coimbatore-to-chennai.php" style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 18px; border-radius: 10px; color: #ffffff; text-decoration: none; display: flex; align-items: center; justify-content: space-between;">
          <span>Coimbatore to Chennai</span> <i class="fas fa-arrow-right" style="color: #f59e0b;"></i>
        </a>
        <a href="<?php echo SITE_URL; ?>/pages/bike-transport-from-coimbatore-to-bangalore.php" style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 18px; border-radius: 10px; color: #ffffff; text-decoration: none; display: flex; align-items: center; justify-content: space-between;">
          <span>Coimbatore to Bangalore</span> <i class="fas fa-arrow-right" style="color: #f59e0b;"></i>
        </a>
        <a href="<?php echo SITE_URL; ?>/pages/bike-transport-from-chennai-to-madurai.php" style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 18px; border-radius: 10px; color: #ffffff; text-decoration: none; display: flex; align-items: center; justify-content: space-between;">
          <span>Chennai to Madurai</span> <i class="fas fa-arrow-right" style="color: #f59e0b;"></i>
        </a>
        <a href="<?php echo SITE_URL; ?>/pages/bike-transport-from-madurai-to-coimbatore.php" style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 18px; border-radius: 10px; color: #ffffff; text-decoration: none; display: flex; align-items: center; justify-content: space-between;">
          <span>Madurai to Coimbatore</span> <i class="fas fa-arrow-right" style="color: #f59e0b;"></i>
        </a>
        <a href="<?php echo SITE_URL; ?>/pages/bike-transport-from-chennai-to-coimbatore.php" style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 18px; border-radius: 10px; color: #ffffff; text-decoration: none; display: flex; align-items: center; justify-content: space-between;">
          <span>Chennai to Coimbatore</span> <i class="fas fa-arrow-right" style="color: #f59e0b;"></i>
        </a>
        <a href="<?php echo SITE_URL; ?>/pages/bike-transport-from-chennai-to-trichy.php" style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 18px; border-radius: 10px; color: #ffffff; text-decoration: none; display: flex; align-items: center; justify-content: space-between;">
          <span>Chennai to Trichy</span> <i class="fas fa-arrow-right" style="color: #f59e0b;"></i>
        </a>
      </div>
    </div>
  </section>

  <!-- 11. FAQ Accordion Section -->
  <section style="padding: 60px 0; background: #1c2541; color: #ffffff;">
    <div class="container" style="max-width: 900px; margin: 0 auto; padding: 0 15px;">
      <h2 style="font-size: 2rem; text-align: center; font-weight: 700; margin-bottom: 40px;">
        Frequently Asked <span style="color: #f59e0b;">Questions</span>
      </h2>
      <div style="display: flex; flex-direction: column; gap: 15px;">
        
        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 10px; padding: 20px;">
          <h3 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 10px; font-weight: 700;">How long does bike transport from Coimbatore to Madurai take?</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.6; margin: 0;">Due to the short distance of 215 km, bike delivery from Coimbatore to Madurai is completed within 12 hours / same day.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 10px; padding: 20px;">
          <h3 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 10px; font-weight: 700;">Is transit insurance included in the price?</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.6; margin: 0;">Yes, 100% all-risk transit insurance is included in the quotation for complete safety.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 10px; padding: 20px;">
          <h3 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 10px; font-weight: 700;">What documents are required for shipping?</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.6; margin: 0;">You need vehicle RC copy, active insurance document, and government-issued photo ID of the owner.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 10px; padding: 20px;">
          <h3 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 10px; font-weight: 700;">Is doorstep pickup available in Coimbatore?</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.6; margin: 0;">Yes, we pick up your vehicle from any location in Coimbatore including RS Puram, Peelamedu, Gandhipuram, Saravanampatti, and Kovaipudur.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 10px; padding: 20px;">
          <h3 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 10px; font-weight: 700;">Which areas in Madurai do you deliver to?</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.6; margin: 0;">We deliver across KK Nagar, Anna Nagar, Simmakkal, SS Colony, TVS Nagar, Mattuthavani, Sellur, and Ellis Nagar.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 10px; padding: 20px;">
          <h3 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 10px; font-weight: 700;">What are the bike transport charges from Coimbatore to Madurai?</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.6; margin: 0;">Scooters start from ₹2,400 - ₹3,200, commuter bikes cost ₹2,900 - ₹3,800, and Royal Enfield cruisers range between ₹4,400 and ₹5,800.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 10px; padding: 20px;">
          <h3 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 10px; font-weight: 700;">What 7-layer wrapping materials are applied?</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.6; margin: 0;">Our multi-layer packing uses stretch wrap, bubble wrap, EVA foam padding, and corrugated sheets for scratch-proof transportation.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 10px; padding: 20px;">
          <h3 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 10px; font-weight: 700;">How much petrol should remain in the tank?</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.6; margin: 0;">Keep approximately 1 liter of petrol in the vehicle for loading and unloading onto ramps.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 10px; padding: 20px;">
          <h3 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 10px; font-weight: 700;">Do you provide live tracking on NH83/NH84?</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.6; margin: 0;">Yes, continuous updates are sent via WhatsApp along with truck driver contact details.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 10px; padding: 20px;">
          <h3 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 10px; font-weight: 700;">Can riding helmets be packed with the bike?</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.6; margin: 0;">Yes, helmet boxes can be firmly tied to the rear pillion seat during 7-layer wrapping.</p>
        </div>

      </div>
    </div>
  </section>

  <!-- 12. Call to Action / Bottom Banner -->
  <section style="padding: 50px 0; background: linear-gradient(135deg, #1e293b 0%, #0f172a 100%); text-align: center; color: #ffffff; border-top: 1px solid rgba(245, 158, 11, 0.3);">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 15px;">
      <h2 style="font-size: 2.2rem; font-weight: 800; margin-bottom: 15px;">Book Bike Transport from Coimbatore to Madurai Today</h2>
      <p style="font-size: 1.1rem; color: #cbd5e1; max-width: 700px; margin: 0 auto 30px;">
        Fast door-to-door delivery, 7-layer packing, and 100% insured transit down NH83/NH84.
      </p>
      <div style="display: flex; gap: 15px; justify-content: center; flex-wrap: wrap;">
        <a href="tel:<?php echo SITE_PHONE_RAW; ?>" style="padding: 14px 32px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #fff; border-radius: 50px; font-weight: 700; text-decoration: none;">
          <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call: <?php echo SITE_PHONE; ?>
        </a>
        <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20to%20book%20bike%20transport%20from%20Coimbatore%20to%20Madurai." target="_blank" style="padding: 14px 32px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #fff; border-radius: 50px; font-weight: 700; text-decoration: none;">
          <i class="fab fa-whatsapp" style="margin-right: 8px;"></i> WhatsApp Quick Quote
        </a>
      </div>
    </div>
  </section>

</main>

<!-- Structured Data JSON-LD Schema (FAQPage) -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "How long does bike transport from Coimbatore to Madurai take?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Due to the short distance of 215 km, bike delivery from Coimbatore to Madurai is completed within 12 hours / same day."
      }
    },
    {
      "@type": "Question",
      "name": "Is transit insurance included in the price?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, 100% all-risk transit insurance is included in the quotation for complete safety."
      }
    },
    {
      "@type": "Question",
      "name": "What documents are required for shipping?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "You need vehicle RC copy, active insurance document, and government-issued photo ID of the owner."
      }
    },
    {
      "@type": "Question",
      "name": "Is doorstep pickup available in Coimbatore?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, we pick up your vehicle from any location in Coimbatore including RS Puram, Peelamedu, Gandhipuram, Saravanampatti, and Kovaipudur."
      }
    },
    {
      "@type": "Question",
      "name": "Which areas in Madurai do you deliver to?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "We deliver across KK Nagar, Anna Nagar, Simmakkal, SS Colony, TVS Nagar, Mattuthavani, Sellur, and Ellis Nagar."
      }
    },
    {
      "@type": "Question",
      "name": "What are the bike transport charges from Coimbatore to Madurai?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Scooters start from ₹2,400 - ₹3,200, commuter bikes cost ₹2,900 - ₹3,800, and Royal Enfield cruisers range between ₹4,400 and ₹5,800."
      }
    },
    {
      "@type": "Question",
      "name": "What 7-layer wrapping materials are applied?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Our multi-layer packing uses stretch wrap, bubble wrap, EVA foam padding, and corrugated sheets for scratch-proof transportation."
      }
    },
    {
      "@type": "Question",
      "name": "How much petrol should remain in the tank?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Keep approximately 1 liter of petrol in the vehicle for loading and unloading onto ramps."
      }
    },
    {
      "@type": "Question",
      "name": "Do you provide live tracking on NH83/NH84?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, continuous updates are sent via WhatsApp along with truck driver contact details."
      }
    },
    {
      "@type": "Question",
      "name": "Can riding helmets be packed with the bike?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, helmet boxes can be firmly tied to the rear pillion seat during 7-layer wrapping."
      }
    }
  ]
}
</script>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
