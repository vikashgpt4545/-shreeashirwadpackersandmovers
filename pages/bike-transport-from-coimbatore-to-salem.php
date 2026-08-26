<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "Bike Transport from Coimbatore to Salem | Safe Two-Wheeler Shifting";
$page_desc = "Safe & fast bike transport from Coimbatore to Salem (165 km via NH544). Express same-day / 12-hr delivery, 100% insured transit, 7-layer bubble wrapping, doorstep pick & drop. Free quote.";
$page_keywords = "bike transport from coimbatore to salem, motorcycle shipping coimbatore to salem, two wheeler transport coimbatore salem, bike packers movers coimbatore salem, bike shifting charges coimbatore salem";
$canonical_url = "https://shreeashirwadpackersandmovers.com/pages/bike-transport-from-coimbatore-to-salem.php";

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
        <span class="breadcrumb-item active" style="color: #ffffff;">Bike Transport from Coimbatore to Salem</span>
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
            COIMBATORE TO SALEM RELOCATION SPECIALISTS
          </span>
          <h1 style="font-size: 2.5rem; font-weight: 800; line-height: 1.2; margin-bottom: 20px; color: #ffffff;">
            Express Same-Day <span style="color: #f59e0b;">Bike Transport from Coimbatore to Salem</span>
          </h1>
          <p style="font-size: 1.05rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 25px;">
            Transport your bike 165 km from Coimbatore to Salem with express same-day delivery via NH544. Shree Ashirwad Packers and Movers provides 7-layer protective packaging, enclosed container trucks, GPS tracking, and doorstep pickup/delivery.
          </p>

          <div style="display: flex; gap: 15px; flex-wrap: wrap; margin-bottom: 30px;">
            <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Now" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
              <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call Now: <?php echo SITE_PHONE; ?>
            </a>
            <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20a%20quote%20for%20bike%20transport%20from%20Coimbatore%20to%20Salem." title="Chat on WhatsApp" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
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
          <p style="font-size: 0.85rem; color: #94a3b8; text-align: center; margin-bottom: 20px;">Transparent pricing for Coimbatore to Salem motorcycle shipping</p>

          <form action="#" method="POST" onsubmit="sendHeroWhatsAppLead(event, this);">
            <div style="margin-bottom: 14px;">
              <input type="text" name="name" class="form-control" placeholder="Your Full Name" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="margin-bottom: 14px;">
              <input type="tel" name="phone" class="form-control" placeholder="10-Digit Mobile Number" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 10px; margin-bottom: 14px;">
              <input type="text" name="move_from" class="form-control" value="Coimbatore" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
              <input type="text" name="move_to" class="form-control" value="Salem" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
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
          <h3 style="font-size: 2rem; color: #f59e0b; margin-bottom: 5px; font-weight: 800;">165 km</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; margin: 0;">NH544 Express Route</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(245, 158, 11, 0.2); border-radius: 12px; padding: 20px;">
          <h3 style="font-size: 2rem; color: #f59e0b; margin-bottom: 5px; font-weight: 800;">Same Day</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; margin: 0;">Express Delivery (12 Hours)</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(245, 158, 11, 0.2); border-radius: 12px; padding: 20px;">
          <h3 style="font-size: 2rem; color: #f59e0b; margin-bottom: 5px; font-weight: 800;">2,600+</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; margin: 0;">Bikes Delivered to Salem</p>
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
        Why Choose Our <span style="color: #f59e0b;">Coimbatore to Salem Bike Transport</span>
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
          <p style="color: #94a3b8; font-size: 0.92rem; line-height: 1.6; margin: 0;">Complete doorstep pickup from any location in Coimbatore and direct delivery to Fairlands, Hasthampatti, or Suramangalam in Salem.</p>
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
        Bike Transport Charges from <span style="color: #f59e0b;">Coimbatore to Salem</span>
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
              <td style="padding: 16px 20px; color: #f59e0b; font-weight: 700;">₹2,200 - ₹3,000</td>
              <td style="padding: 16px 20px;">Same Day (12 Hrs)</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.05); background: rgba(255,255,255,0.02);">
              <td style="padding: 16px 20px;">Standard Commuter Bikes</td>
              <td style="padding: 16px 20px;">100cc - 150cc</td>
              <td style="padding: 16px 20px; color: #f59e0b; font-weight: 700;">₹2,700 - ₹3,600</td>
              <td style="padding: 16px 20px;">Same Day (12 Hrs)</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.05);">
              <td style="padding: 16px 20px;">Executive &amp; Sports Bikes</td>
              <td style="padding: 16px 20px;">150cc - 250cc</td>
              <td style="padding: 16px 20px; color: #f59e0b; font-weight: 700;">₹3,400 - ₹4,400</td>
              <td style="padding: 16px 20px;">Same Day (12 Hrs)</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.05); background: rgba(255,255,255,0.02);">
              <td style="padding: 16px 20px;">Cruisers &amp; Royal Enfield</td>
              <td style="padding: 16px 20px;">350cc - 500cc</td>
              <td style="padding: 16px 20px; color: #f59e0b; font-weight: 700;">₹4,200 - ₹5,500</td>
              <td style="padding: 16px 20px;">Same Day (12 Hrs)</td>
            </tr>
            <tr>
              <td style="padding: 16px 20px;">Premium Superbikes</td>
              <td style="padding: 16px 20px;">500cc+ / Premium</td>
              <td style="padding: 16px 20px; color: #f59e0b; font-weight: 700;">₹6,500 - ₹9,500</td>
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
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6; margin: 0;">Your bike is safely strapped inside covered carriers for smooth transit along NH544 corridor.</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 12px; padding: 25px; text-align: center;">
          <div style="width: 50px; height: 50px; background: rgba(245, 158, 11, 0.2); color: #f59e0b; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.3rem; font-weight: 800; margin: 0 auto 15px;">4</div>
          <h3 style="font-size: 1.1rem; color: #ffffff; margin-bottom: 10px; font-weight: 700;">Doorstep Delivery</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6; margin: 0;">Unpacking and final joint inspection at your requested destination address in Salem.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- 8. Locality Coverage -->
  <section style="padding: 60px 0; background: #0b132b; color: #ffffff;">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 15px;">
      <h2 style="font-size: 2rem; text-align: center; font-weight: 700; margin-bottom: 30px;">
        Locality Coverage: <span style="color: #f59e0b;">Coimbatore Pickup &amp; Salem Delivery</span>
      </h2>
      <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 30px;">
        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 12px; padding: 25px;">
          <h3 style="color: #f59e0b; font-size: 1.2rem; margin-bottom: 15px; font-weight: 700;">Coimbatore Pickup Localities</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.8; margin: 0;">
            Gandhipuram, Peelamedu, RS Puram, Saravanampatti, Singanallur, Saibaba Colony, Kovaipudur.
          </p>
        </div>
        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 12px; padding: 25px;">
          <h3 style="color: #f59e0b; font-size: 1.2rem; margin-bottom: 15px; font-weight: 700;">Salem Delivery Localities</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.8; margin: 0;">
            Fairlands, Hasthampatti, Suramangalam, Ammapet, Alagapuram, Meyyanur, Shevapet, Kondalampatti.
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
        <a href="<?php echo SITE_URL; ?>/pages/bike-transport-from-chennai-to-salem.php" style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 18px; border-radius: 10px; color: #ffffff; text-decoration: none; display: flex; align-items: center; justify-content: space-between;">
          <span>Chennai to Salem</span> <i class="fas fa-arrow-right" style="color: #f59e0b;"></i>
        </a>
        <a href="<?php echo SITE_URL; ?>/pages/bike-transport-from-salem-to-coimbatore.php" style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 18px; border-radius: 10px; color: #ffffff; text-decoration: none; display: flex; align-items: center; justify-content: space-between;">
          <span>Salem to Coimbatore</span> <i class="fas fa-arrow-right" style="color: #f59e0b;"></i>
        </a>
        <a href="<?php echo SITE_URL; ?>/pages/bike-transport-from-coimbatore-to-madurai.php" style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 18px; border-radius: 10px; color: #ffffff; text-decoration: none; display: flex; align-items: center; justify-content: space-between;">
          <span>Coimbatore to Madurai</span> <i class="fas fa-arrow-right" style="color: #f59e0b;"></i>
        </a>
        <a href="<?php echo SITE_URL; ?>/pages/bike-transport-from-chennai-to-coimbatore.php" style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 18px; border-radius: 10px; color: #ffffff; text-decoration: none; display: flex; align-items: center; justify-content: space-between;">
          <span>Chennai to Coimbatore</span> <i class="fas fa-arrow-right" style="color: #f59e0b;"></i>
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
          <h3 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 10px; font-weight: 700;">How long does bike transport from Coimbatore to Salem take?</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.6; margin: 0;">Due to the short distance of 165 km, bike delivery from Coimbatore to Salem is completed within 12 hours / same day.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 10px; padding: 20px;">
          <h3 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 10px; font-weight: 700;">Is transit insurance included in the price quote?</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.6; margin: 0;">Yes, 100% all-risk transit insurance is included in our price quote for complete safety.</p>
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
          <h3 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 10px; font-weight: 700;">Which areas in Salem do you deliver to?</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.6; margin: 0;">We deliver across Fairlands, Hasthampatti, Suramangalam, Ammapet, Alagapuram, Meyyanur, Shevapet, and Kondalampatti.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 10px; padding: 20px;">
          <h3 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 10px; font-weight: 700;">What are the bike transport charges from Coimbatore to Salem?</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.6; margin: 0;">Scooters start from ₹2,200 - ₹3,000, commuter bikes cost ₹2,700 - ₹3,600, and Royal Enfield cruisers range between ₹4,200 and ₹5,500.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 10px; padding: 20px;">
          <h3 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 10px; font-weight: 700;">What 7-layer wrapping layers are used for 165 km distance?</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.6; margin: 0;">We use stretch wrapping, heavy bubble wrap, EVA foam edge protectors, and corrugated cardboards to guarantee scratch-free delivery.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 10px; padding: 20px;">
          <h3 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 10px; font-weight: 700;">How much petrol should remain in the tank?</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.6; margin: 0;">Please keep about 1 liter of fuel for loading onto our enclosed carriers and unloading at destination.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 10px; padding: 20px;">
          <h3 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 10px; font-weight: 700;">Do you provide live tracking on NH544?</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.6; margin: 0;">Yes, live tracking updates are shared via WhatsApp along with real-time driver contact details.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 10px; padding: 20px;">
          <h3 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 10px; font-weight: 700;">Can riding gear or helmets be shipped with the motorcycle?</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.6; margin: 0;">Yes, helmet boxes can be safely strapped to the pillion seat during multi-layer packaging.</p>
        </div>

      </div>
    </div>
  </section>

  <!-- 12. Call to Action / Bottom Banner -->
  <section style="padding: 50px 0; background: linear-gradient(135deg, #1e293b 0%, #0f172a 100%); text-align: center; color: #ffffff; border-top: 1px solid rgba(245, 158, 11, 0.3);">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 15px;">
      <h2 style="font-size: 2.2rem; font-weight: 800; margin-bottom: 15px;">Book Bike Transport from Coimbatore to Salem Today</h2>
      <p style="font-size: 1.1rem; color: #cbd5e1; max-width: 700px; margin: 0 auto 30px;">
        Fast door-to-door delivery, 7-layer packing, and 100% insured transit down NH544.
      </p>
      <div style="display: flex; gap: 15px; justify-content: center; flex-wrap: wrap;">
        <a href="tel:<?php echo SITE_PHONE_RAW; ?>" style="padding: 14px 32px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #fff; border-radius: 50px; font-weight: 700; text-decoration: none;">
          <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call: <?php echo SITE_PHONE; ?>
        </a>
        <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20to%20book%20bike%20transport%20from%20Coimbatore%20to%20Salem." target="_blank" style="padding: 14px 32px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #fff; border-radius: 50px; font-weight: 700; text-decoration: none;">
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
      "name": "How long does bike transport from Coimbatore to Salem take?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Due to the short distance of 165 km, bike delivery from Coimbatore to Salem is completed within 12 hours / same day."
      }
    },
    {
      "@type": "Question",
      "name": "Is transit insurance included in the price quote?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, 100% all-risk transit insurance is included in our price quote for complete safety."
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
      "name": "Which areas in Salem do you deliver to?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "We deliver across Fairlands, Hasthampatti, Suramangalam, Ammapet, Alagapuram, Meyyanur, Shevapet, and Kondalampatti."
      }
    },
    {
      "@type": "Question",
      "name": "What are the bike transport charges from Coimbatore to Salem?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Scooters start from ₹2,200 - ₹3,000, commuter bikes cost ₹2,700 - ₹3,600, and Royal Enfield cruisers range between ₹4,200 and ₹5,500."
      }
    },
    {
      "@type": "Question",
      "name": "What 7-layer wrapping layers are used for 165 km distance?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "We use stretch wrapping, heavy bubble wrap, EVA foam edge protectors, and corrugated cardboards to guarantee scratch-free delivery."
      }
    },
    {
      "@type": "Question",
      "name": "How much petrol should remain in the tank?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Please keep about 1 liter of fuel for loading onto our enclosed carriers and unloading at destination."
      }
    },
    {
      "@type": "Question",
      "name": "Do you provide live tracking on NH544?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, live tracking updates are shared via WhatsApp along with real-time driver contact details."
      }
    },
    {
      "@type": "Question",
      "name": "Can riding gear or helmets be shipped with the motorcycle?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, helmet boxes can be safely strapped to the pillion seat during multi-layer packaging."
      }
    }
  ]
}
</script>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
