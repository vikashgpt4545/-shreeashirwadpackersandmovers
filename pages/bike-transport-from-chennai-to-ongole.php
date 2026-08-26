<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "Bike Transport from Chennai to Ongole | Safe Two-Wheeler Shifting";
$page_desc = "Reliable & fast bike transport from Chennai to Ongole (300 km via NH16). 100% insured transit, 7-layer bubble wrapping, doorstep pickup in Chennai & delivery in Ongole. Get free quote.";
$page_keywords = "bike transport from chennai to ongole, motorcycle shipping chennai to ongole, two wheeler transport chennai ongole, bike packers movers chennai ongole, bike shifting charges chennai ongole";
$canonical_url = "https://shreeashirwadpackersandmovers.com/pages/bike-transport-from-chennai-to-ongole.php";

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
        <span class="breadcrumb-item active" style="color: #ffffff;">Bike Transport from Chennai to Ongole</span>
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
            CHENNAI TO ONGOLE RELOCATION SPECIALISTS
          </span>
          <h1 style="font-size: 2.5rem; font-weight: 800; line-height: 1.2; margin-bottom: 20px; color: #ffffff;">
            Safe &amp; Insured <span style="color: #f59e0b;">Bike Transport from Chennai to Ongole</span>
          </h1>
          <p style="font-size: 1.05rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 25px;">
            Shipping your motorcycle 300 km from Chennai to Ongole? Shree Ashirwad Packers and Movers provides safe 7-layer bubble packaging, enclosed container carriers along NH16, and full doorstep delivery in Lawyerpet, Bhagya Nagar, and Trunk Road.
          </p>

          <div style="display: flex; gap: 15px; flex-wrap: wrap; margin-bottom: 30px;">
            <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Now" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
              <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call Now: <?php echo SITE_PHONE; ?>
            </a>
            <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20a%20quote%20for%20bike%20transport%20from%20Chennai%20to%20Ongole." title="Chat on WhatsApp" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
              <i class="fab fa-whatsapp" style="margin-right: 8px;"></i> Chat on WhatsApp
            </a>
          </div>

          <div style="display: flex; gap: 20px; font-size: 0.9rem; color: #94a3b8;">
            <span><strong style="color: #f59e0b;">100% Insured</strong> Shifting</span>
            <span><strong style="color: #f59e0b;">7-Layer</strong> Protection</span>
            <span><strong style="color: #f59e0b;">18 - 24 Hrs</strong> Delivery</span>
          </div>
        </div>

        <!-- Hero Lead Form Column -->
        <div class="hero-form-card" style="background: rgba(255, 255, 255, 0.04); backdrop-filter: blur(10px); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 16px; padding: 30px; box-shadow: 0 15px 35px rgba(0,0,0,0.4);">
          <h2 style="font-size: 1.3rem; color: #ffffff; margin-bottom: 8px; font-weight: 700; text-align: center;">Get Instant Bike Shifting Quote</h2>
          <p style="font-size: 0.85rem; color: #94a3b8; text-align: center; margin-bottom: 20px;">Transparent pricing for Chennai to Ongole motorcycle shipping</p>

          <form action="#" method="POST" onsubmit="sendHeroWhatsAppLead(event, this);">
            <div style="margin-bottom: 14px;">
              <input type="text" name="name" class="form-control" placeholder="Your Full Name" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="margin-bottom: 14px;">
              <input type="tel" name="phone" class="form-control" placeholder="10-Digit Mobile Number" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 10px; margin-bottom: 14px;">
              <input type="text" name="move_from" class="form-control" value="Chennai" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
              <input type="text" name="move_to" class="form-control" value="Ongole" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
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
          <h3 style="font-size: 2rem; color: #f59e0b; margin-bottom: 5px; font-weight: 800;">300 km</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; margin: 0;">NH16 Highway Corridor</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(245, 158, 11, 0.2); border-radius: 12px; padding: 20px;">
          <h3 style="font-size: 2rem; color: #f59e0b; margin-bottom: 5px; font-weight: 800;">18 - 24 Hrs</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; margin: 0;">Express Delivery Window</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(245, 158, 11, 0.2); border-radius: 12px; padding: 20px;">
          <h3 style="font-size: 2rem; color: #f59e0b; margin-bottom: 5px; font-weight: 800;">2,900+</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; margin: 0;">Bikes Delivered to Ongole</p>
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
        Why Choose Our <span style="color: #f59e0b;">Chennai to Ongole Bike Transport</span>
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
          <p style="color: #94a3b8; font-size: 0.92rem; line-height: 1.6; margin: 0;">Complete doorstep pickup from any location in Chennai and direct delivery to Lawyerpet, Bhagya Nagar, or Trunk Road in Ongole.</p>
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
        Bike Transport Charges from <span style="color: #f59e0b;">Chennai to Ongole</span>
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
              <td style="padding: 16px 20px; color: #f59e0b; font-weight: 700;">₹2,500 - ₹3,300</td>
              <td style="padding: 16px 20px;">18 - 24 Hours</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.05); background: rgba(255,255,255,0.02);">
              <td style="padding: 16px 20px;">Standard Commuter Bikes</td>
              <td style="padding: 16px 20px;">100cc - 150cc</td>
              <td style="padding: 16px 20px; color: #f59e0b; font-weight: 700;">₹3,200 - ₹4,000</td>
              <td style="padding: 16px 20px;">18 - 24 Hours</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.05);">
              <td style="padding: 16px 20px;">Executive &amp; Sports Bikes</td>
              <td style="padding: 16px 20px;">150cc - 250cc</td>
              <td style="padding: 16px 20px; color: #f59e0b; font-weight: 700;">₹3,800 - ₹4,900</td>
              <td style="padding: 16px 20px;">18 - 24 Hours</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.05); background: rgba(255,255,255,0.02);">
              <td style="padding: 16px 20px;">Cruisers &amp; Royal Enfield</td>
              <td style="padding: 16px 20px;">350cc - 500cc</td>
              <td style="padding: 16px 20px; color: #f59e0b; font-weight: 700;">₹4,600 - ₹6,200</td>
              <td style="padding: 16px 20px;">18 - 24 Hours</td>
            </tr>
            <tr>
              <td style="padding: 16px 20px;">Premium Superbikes</td>
              <td style="padding: 16px 20px;">500cc+ / Premium</td>
              <td style="padding: 16px 20px; color: #f59e0b; font-weight: 700;">₹7,000 - ₹10,500</td>
              <td style="padding: 16px 20px;">18 - 24 Hours</td>
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
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6; margin: 0;">We inspect your bike condition in Chennai, record odometer readings, and issue a transparent quote.</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 12px; padding: 25px; text-align: center;">
          <div style="width: 50px; height: 50px; background: rgba(245, 158, 11, 0.2); color: #f59e0b; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.3rem; font-weight: 800; margin: 0 auto 15px;">2</div>
          <h3 style="font-size: 1.1rem; color: #ffffff; margin-bottom: 10px; font-weight: 700;">7-Layer Packaging</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6; margin: 0;">Our technicians drain excess fuel and wrap your two-wheeler with multi-layer protective packaging.</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 12px; padding: 25px; text-align: center;">
          <div style="width: 50px; height: 50px; background: rgba(245, 158, 11, 0.2); color: #f59e0b; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.3rem; font-weight: 800; margin: 0 auto 15px;">3</div>
          <h3 style="font-size: 1.1rem; color: #ffffff; margin-bottom: 10px; font-weight: 700;">Container Transit</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6; margin: 0;">Your bike is safely strapped inside covered carriers for smooth transit along NH16 corridor.</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 12px; padding: 25px; text-align: center;">
          <div style="width: 50px; height: 50px; background: rgba(245, 158, 11, 0.2); color: #f59e0b; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.3rem; font-weight: 800; margin: 0 auto 15px;">4</div>
          <h3 style="font-size: 1.1rem; color: #ffffff; margin-bottom: 10px; font-weight: 700;">Doorstep Delivery</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6; margin: 0;">Unpacking and final joint inspection at your requested destination address in Ongole.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- 8. Locality Coverage -->
  <section style="padding: 60px 0; background: #0b132b; color: #ffffff;">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 15px;">
      <h2 style="font-size: 2rem; text-align: center; font-weight: 700; margin-bottom: 30px;">
        Locality Coverage: <span style="color: #f59e0b;">Chennai Pickup &amp; Ongole Delivery</span>
      </h2>
      <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 30px;">
        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 12px; padding: 25px;">
          <h3 style="color: #f59e0b; font-size: 1.2rem; margin-bottom: 15px; font-weight: 700;">Chennai Pickup Localities</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.8; margin: 0;">
            Anna Nagar, Velachery, Guindy, T. Nagar, OMR, Porur, Tambaram, Adyar, Mylapore, Ambattur, Red Hills.
          </p>
        </div>
        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 12px; padding: 25px;">
          <h3 style="color: #f59e0b; font-size: 1.2rem; margin-bottom: 15px; font-weight: 700;">Ongole Delivery Localities</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.8; margin: 0;">
            Lawyerpet, Kothapatnam Bus Stand Road, Bhagya Nagar, Trunk Road, Housing Board Colony, Annavarappadu, Kurnool Road.
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
        <a href="<?php echo SITE_URL; ?>/pages/bike-transport-from-chennai-to-nellore.php" style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 18px; border-radius: 10px; color: #ffffff; text-decoration: none; display: flex; align-items: center; justify-content: space-between;">
          <span>Chennai to Nellore</span> <i class="fas fa-arrow-right" style="color: #f59e0b;"></i>
        </a>
        <a href="<?php echo SITE_URL; ?>/pages/bike-transport-from-chennai-to-vijayawada.php" style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 18px; border-radius: 10px; color: #ffffff; text-decoration: none; display: flex; align-items: center; justify-content: space-between;">
          <span>Chennai to Vijayawada</span> <i class="fas fa-arrow-right" style="color: #f59e0b;"></i>
        </a>
        <a href="<?php echo SITE_URL; ?>/pages/bike-transport-from-chennai-to-tirupathi.php" style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 18px; border-radius: 10px; color: #ffffff; text-decoration: none; display: flex; align-items: center; justify-content: space-between;">
          <span>Chennai to Tirupati</span> <i class="fas fa-arrow-right" style="color: #f59e0b;"></i>
        </a>
        <a href="<?php echo SITE_URL; ?>/pages/bike-transport-from-chennai-to-hyderabad.php" style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 18px; border-radius: 10px; color: #ffffff; text-decoration: none; display: flex; align-items: center; justify-content: space-between;">
          <span>Chennai to Hyderabad</span> <i class="fas fa-arrow-right" style="color: #f59e0b;"></i>
        </a>
        <a href="<?php echo SITE_URL; ?>/pages/bike-transport-from-chennai-to-bangalore.php" style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 18px; border-radius: 10px; color: #ffffff; text-decoration: none; display: flex; align-items: center; justify-content: space-between;">
          <span>Chennai to Bangalore</span> <i class="fas fa-arrow-right" style="color: #f59e0b;"></i>
        </a>
        <a href="<?php echo SITE_URL; ?>/pages/bike-transport-from-chennai-to-kolkata.php" style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 18px; border-radius: 10px; color: #ffffff; text-decoration: none; display: flex; align-items: center; justify-content: space-between;">
          <span>Chennai to Kolkata</span> <i class="fas fa-arrow-right" style="color: #f59e0b;"></i>
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
          <h3 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 10px; font-weight: 700;">How long does bike transport from Chennai to Ongole take?</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.6; margin: 0;">Bike transport between Chennai and Ongole typically takes 18 to 24 hours via NH16.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 10px; padding: 20px;">
          <h3 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 10px; font-weight: 700;">Is transit insurance included for two-wheeler transport?</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.6; margin: 0;">Yes, we provide 100% all-risk transit insurance policy protection during vehicle transit.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 10px; padding: 20px;">
          <h3 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 10px; font-weight: 700;">What documents must I submit for booking?</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.6; margin: 0;">Required documents include vehicle RC copy, active insurance document, and owner's government ID proof.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 10px; padding: 20px;">
          <h3 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 10px; font-weight: 700;">Do I need to empty the fuel tank before transport?</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.6; margin: 0;">Yes, fuel levels should be kept under 1-2 liters for highway transit safety compliance.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 10px; padding: 20px;">
          <h3 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 10px; font-weight: 700;">Is doorstep delivery available in all areas of Ongole?</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.6; margin: 0;">Yes, doorstep delivery covers Lawyerpet, Bhagya Nagar, Housing Board Colony, Trunk Road, Kurnool Road, and all regions of Ongole.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 10px; padding: 20px;">
          <h3 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 10px; font-weight: 700;">Can I transport sports bikes or Royal Enfield to Ongole?</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.6; margin: 0;">Yes, cruisers and heavy sports bikes are transported in closed containers using polypropylene safety straps and wheel clamps.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 10px; padding: 20px;">
          <h3 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 10px; font-weight: 700;">What are the bike transport charges from Chennai to Ongole?</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.6; margin: 0;">Scooters start from ₹2,500 - ₹3,300, commuter bikes range from ₹3,200 - ₹4,000, and Royal Enfield/cruisers range between ₹4,600 and ₹6,200.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 10px; padding: 20px;">
          <h3 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 10px; font-weight: 700;">How can I track my bike shipment to Ongole?</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.6; margin: 0;">You receive regular WhatsApp & SMS location updates along with dedicated driver contacts for real-time monitoring along NH16.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 10px; padding: 20px;">
          <h3 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 10px; font-weight: 700;">Is doorstep pickup available in all Chennai localities?</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.6; margin: 0;">Yes, pickup is available in Anna Nagar, Velachery, Guindy, OMR, Porur, Tambaram, Adyar, and Red Hills.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 10px; padding: 20px;">
          <h3 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 10px; font-weight: 700;">Can riding helmets or accessories be packed along with the bike?</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.6; margin: 0;">Yes, helmets and riding gear can be safely boxed and strapped to the rear seat of your bike prior to loading.</p>
        </div>

      </div>
    </div>
  </section>

  <!-- 12. Call to Action / Bottom Banner -->
  <section style="padding: 50px 0; background: linear-gradient(135deg, #1e293b 0%, #0f172a 100%); text-align: center; color: #ffffff; border-top: 1px solid rgba(245, 158, 11, 0.3);">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 15px;">
      <h2 style="font-size: 2.2rem; font-weight: 800; margin-bottom: 15px;">Book Bike Transport from Chennai to Ongole Today</h2>
      <p style="font-size: 1.1rem; color: #cbd5e1; max-width: 700px; margin: 0 auto 30px;">
        Fast door-to-door delivery, 7-layer packing, and 100% insured transit down NH16.
      </p>
      <div style="display: flex; gap: 15px; justify-content: center; flex-wrap: wrap;">
        <a href="tel:<?php echo SITE_PHONE_RAW; ?>" style="padding: 14px 32px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #fff; border-radius: 50px; font-weight: 700; text-decoration: none;">
          <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call: <?php echo SITE_PHONE; ?>
        </a>
        <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20to%20book%20bike%20transport%20from%20Chennai%20to%20Ongole." target="_blank" style="padding: 14px 32px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #fff; border-radius: 50px; font-weight: 700; text-decoration: none;">
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
      "name": "How long does bike transport from Chennai to Ongole take?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Bike transport between Chennai and Ongole typically takes 18 to 24 hours via NH16."
      }
    },
    {
      "@type": "Question",
      "name": "Is transit insurance included for two-wheeler transport?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, we provide 100% all-risk transit insurance policy protection during vehicle transit."
      }
    },
    {
      "@type": "Question",
      "name": "What documents must I submit for booking?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Required documents include vehicle RC copy, active insurance document, and owner's government ID proof."
      }
    },
    {
      "@type": "Question",
      "name": "Do I need to empty the fuel tank before transport?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, fuel levels should be kept under 1-2 liters for highway transit safety compliance."
      }
    },
    {
      "@type": "Question",
      "name": "Is doorstep delivery available in all areas of Ongole?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, doorstep delivery covers Lawyerpet, Bhagya Nagar, Housing Board Colony, Trunk Road, Kurnool Road, and all regions of Ongole."
      }
    },
    {
      "@type": "Question",
      "name": "Can I transport sports bikes or Royal Enfield to Ongole?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, cruisers and heavy sports bikes are transported in closed containers using polypropylene safety straps and wheel clamps."
      }
    },
    {
      "@type": "Question",
      "name": "What are the bike transport charges from Chennai to Ongole?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Scooters start from ₹2,500 - ₹3,300, commuter bikes range from ₹3,200 - ₹4,000, and Royal Enfield/cruisers range between ₹4,600 and ₹6,200."
      }
    },
    {
      "@type": "Question",
      "name": "How can I track my bike shipment to Ongole?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "You receive regular WhatsApp & SMS location updates along with dedicated driver contacts for real-time monitoring along NH16."
      }
    },
    {
      "@type": "Question",
      "name": "Is doorstep pickup available in all Chennai localities?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, pickup is available in Anna Nagar, Velachery, Guindy, OMR, Porur, Tambaram, Adyar, and Red Hills."
      }
    },
    {
      "@type": "Question",
      "name": "Can riding helmets or accessories be packed along with the bike?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, helmets and riding gear can be safely boxed and strapped to the rear seat of your bike prior to loading."
      }
    }
  ]
}
</script>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
