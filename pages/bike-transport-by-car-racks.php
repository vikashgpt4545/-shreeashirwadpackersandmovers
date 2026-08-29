<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "How to Transport Bike by Car Racks | Hitch Mounts & Trunk Carrier Safety Guide";
$page_desc = "Complete guide on transporting motorcycles, scooters, and bicycles using car racks, hitch mounts, and trunk carriers. Compare roof racks, rear hitch carriers, tow bar mounts, highway safety rules, tie-down strap lashing, and professional vehicle transport alternatives.";
$page_keywords = "bike transport by car racks, car hitch bike carrier, motorcycle car rack transport, trunk mounted bike rack, tow bar bike carrier, car roof rack motorcycle, bike transport safety highway, professional bike transport service";

$faq_list = [
    ['q' => 'Can you transport a heavy motorcycle or scooter using a car rack?', 'a' => 'Standard bicycle car racks are designed for light pedal bikes (15-30 kg). Heavy motorcycles or scooters (100-200 kg) require heavy-duty class III or IV receiver hitch motorcycle carriers rated for high tongue weights, or professional enclosed carrier transport.'],
    ['q' => 'What is the safest type of car rack for transporting two-wheelers?', 'a' => 'Receiver hitch-mounted steel tray carriers with front wheel chocks and high-tensile ratchet straps offer maximum safety and stability on highway journeys.'],
    ['q' => 'Is it legal to carry a motorcycle or bicycle on a rear car rack in India?', 'a' => 'Yes, provided the rack does not obscure the vehicle number plate or rear tail lamps, and the total overhang stays within official RTO dimensional limits.'],
    ['q' => 'How do you secure a bike onto a car rack for long-distance highway travel?', 'a' => 'Use four heavy-duty polyester ratchet straps (two pulling forward and two pulling backward) anchored to frame structural points, combined with wheel safety pins.'],
    ['q' => 'Why choose professional enclosed carrier transport over DIY car rack mounting?', 'a' => 'Professional enclosed bike carriers shield your motorcycle from highway flying debris, bad weather, and accidental hitch failures while eliminating vehicle suspension strain.']
];

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
            TECHNICAL VEHICLE MOUNTING GUIDE
          </span>
          <h1 style="font-size: 2.7rem; font-weight: 800; line-height: 1.2; margin-bottom: 20px; color: #ffffff;">
            Master Guide to <span style="color: #f59e0b;">Bike Transport by Car Racks</span>
          </h1>
          <p style="font-size: 1.12rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 25px;">
            Transporting a motorcycle, scooter, or bicycle on a car using external mounting racks demands exact knowledge of tongue weight capacities, hitch receiver classes, ratchet strap anchoring, and RTO overhang rules. Explore the engineering behind hitch mounts, trunk carriers, and tow bar racks—or book professional enclosed vehicle shipping with zero vehicle wear.
          </p>

          <div style="display: flex; gap: 15px; flex-wrap: wrap; margin-bottom: 30px;">
            <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Transport Expert" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
              <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call Vehicle Expert: <?php echo SITE_PHONE; ?>
            </a>
            <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20information%20about%20bike%20transport%20services." title="Chat on WhatsApp" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
              <i class="fab fa-whatsapp" style="margin-right: 8px;"></i> Chat on WhatsApp
            </a>
          </div>

          <div style="display: flex; gap: 20px; font-size: 0.9rem; color: #94a3b8;">
            <span><strong style="color: #f59e0b;">Class III/IV</strong> Hitch Safety</span>
            <span><strong style="color: #f59e0b;">Ratchet</strong> Lashing</span>
            <span><strong style="color: #f59e0b;">Enclosed Fleet</strong> Alternative</span>
          </div>
        </div>

        <!-- Hero Lead Form Column -->
        <div class="hero-form-card" style="background: rgba(255, 255, 255, 0.05); backdrop-filter: blur(10px); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 16px; padding: 30px; box-shadow: 0 15px 35px rgba(0,0,0,0.4);">
          <h2 style="font-size: 1.4rem; color: #ffffff; margin-bottom: 8px; font-weight: 700; text-align: center;">Get Bike Transport Quote</h2>
          <p style="font-size: 0.85rem; color: #94a3b8; text-align: center; margin-bottom: 20px;">Safe enclosed motorcycle shipping quote on WhatsApp in 2 minutes</p>

          <form action="#" method="POST" onsubmit="sendHeroWhatsAppLead(event, this);">
            <div style="margin-bottom: 14px;">
              <input type="text" name="name" class="form-control" placeholder="Your Full Name" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="margin-bottom: 14px;">
              <input type="tel" name="phone" class="form-control" placeholder="10-Digit Phone Number" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 10px; margin-bottom: 14px;">
              <input type="text" name="move_from" class="form-control" placeholder="Pickup Locality / City" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
              <input type="text" name="move_to" class="form-control" placeholder="Destination City" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <button type="submit" style="width: 100%; padding: 14px; background: linear-gradient(135deg, #d32f2f 0%, #f59e0b 100%); color: #ffffff; border: none; border-radius: 50px; font-weight: 700; font-size: 1rem; cursor: pointer;">
              Get Instant Estimate Now &rarr;
            </button>
          </form>
        </div>

      </div>
    </div>
  </section>

  <!-- Section 2: Key Stats -->
  <section class="stats-section" style="padding: 50px 0; background: #070d1e; border-bottom: 1px solid rgba(245, 158, 11, 0.2);">
    <div class="container">
      <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 20px; text-align: center;">
        <div style="padding: 20px; background: rgba(23, 42, 84, 0.5); border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">Class III/IV</div>
          <div style="font-size: 0.9rem; color: #cbd5e1; margin-top: 5px;">Receiver Hitch Rating</div>
        </div>
        <div style="padding: 20px; background: rgba(23, 42, 84, 0.5); border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">4-Point</div>
          <div style="font-size: 0.9rem; color: #cbd5e1; margin-top: 5px;">Ratchet Lashing System</div>
        </div>
        <div style="padding: 20px; background: rgba(23, 42, 84, 0.5); border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">100% Legal</div>
          <div style="font-size: 0.9rem; color: #cbd5e1; margin-top: 5px;">RTO Overhang Standards</div>
        </div>
        <div style="padding: 20px; background: rgba(23, 42, 84, 0.5); border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">7-Layer</div>
          <div style="font-size: 0.9rem; color: #cbd5e1; margin-top: 5px;">Enclosed Fleet Alternative</div>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 3: 6-Pillar Grid on Car Racks & Mount Types -->
  <section style="padding: 70px 0; background: #0b132b; color: #e2e8f0; line-height: 1.8;">
    <div class="container">
      
      <div style="max-width: 950px; margin: 0 auto;">
        <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Car Mount Systems</span>
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin: 10px 0 20px 0;">
          6 Types of <span style="color: #f59e0b;">Car Racks for Bike Transport</span>
        </h2>
        <p style="font-size: 1.05rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 25px;">
          Depending on whether you are transporting a light bicycle, an electric bike, or a heavy motorcycle, selecting the correct mounting rack engineering prevents vehicle damage and highway accidents:
        </p>

        <!-- 6 Cards Grid (3x2 Layout) -->
        <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px; margin: 30px 0;">
          
          <!-- Card 1 -->
          <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px; box-shadow: 0 10px 25px rgba(0,0,0,0.3);">
            <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;"><i class="fas fa-truck-pickup"></i></div>
            <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">1. Hitch-Mounted Tray Racks</h3>
            <p style="font-size: 0.9rem; color: #cbd5e1; line-height: 1.6; margin: 0;">
              Attaches directly into a 2-inch Class III or IV rear receiver hitch. Supports heavy motorcycles (up to 200 kg) with integrated ramps.
            </p>
          </div>

          <!-- Card 2 -->
          <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px; box-shadow: 0 10px 25px rgba(0,0,0,0.3);">
            <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;"><i class="fas fa-car-alt"></i></div>
            <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">2. Trunk Strap Mounted Racks</h3>
            <p style="font-size: 0.9rem; color: #cbd5e1; line-height: 1.6; margin: 0;">
              Lightweight strap carriers resting on hatchback or sedan boot lids. Suitable strictly for light pedal bicycles under 35 kg total weight.
            </p>
          </div>

          <!-- Card 3 -->
          <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px; box-shadow: 0 10px 25px rgba(0,0,0,0.3);">
            <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;"><i class="fas fa-cloud-upload-alt"></i></div>
            <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">3. Roof-Mounted Crossbar Carriers</h3>
            <p style="font-size: 0.9rem; color: #cbd5e1; line-height: 1.6; margin: 0;">
              Mounted on SUV or car roof rails. Ideal for sports bicycles, but unsafe for heavy motorbikes due to high center of gravity and lifting limits.
            </p>
          </div>

          <!-- Card 4 -->
          <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px; box-shadow: 0 10px 25px rgba(0,0,0,0.3);">
            <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;">🔩</div>
            <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">4. Tow Bar Ball-Mounted Racks</h3>
            <p style="font-size: 0.9rem; color: #cbd5e1; line-height: 1.6; margin: 0;">
              Clamps directly onto European-style tow balls. Provides tilt-down features allowing boot opening while carrying e-bikes.
            </p>
          </div>

          <!-- Card 5 -->
          <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px; box-shadow: 0 10px 25px rgba(0,0,0,0.3);">
            <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;"><i class="fas fa-exclamation-triangle"></i></div>
            <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">5. Spare-Tire Mounted Racks</h3>
            <p style="font-size: 0.9rem; color: #cbd5e1; line-height: 1.6; margin: 0;">
              Attaches to rear-door spare wheels of 4x4 vehicles. Great for compact utility but requires strict weight monitoring of rear hinges.
            </p>
          </div>

          <!-- Card 6 -->
          <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px; box-shadow: 0 10px 25px rgba(0,0,0,0.3);">
            <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;"><i class="fas fa-shipping-fast"></i></div>
            <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">6. Professional Enclosed Fleet Alternative</h3>
            <p style="font-size: 0.9rem; color: #cbd5e1; line-height: 1.6; margin: 0;">
              Eliminate car rack strain altogether by shipping your bike inside covered specialized trucks with 7-layer wrapping and insurance.
            </p>
          </div>

        </div>

      </div>

    </div>
  </section>

  <!-- Section 4: Safety & RTO Compliance Guide -->
  <section style="padding: 70px 0; background: linear-gradient(180deg, #0b132b 0%, #16203b 100%); color: #ffffff;">
    <div class="container" style="max-width: 900px;">
      
      <div class="section-header text-center" style="margin-bottom: 45px;">
        <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Safety Rules</span>
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin-top: 10px;">
          Highway Safety &amp; <span style="color: #f59e0b;">RTO Legal Checklist</span>
        </h2>
      </div>

      <div style="background: #172a54; padding: 28px; border-radius: 14px; border: 1px solid rgba(245, 158, 11, 0.3); margin-bottom: 30px;">
        <h4 style="color: #f59e0b; font-size: 1.2rem; margin-bottom: 15px;">Critical Highway Safety Practices:</h4>
        <ul style="color: #cbd5e1; font-size: 0.98rem; line-height: 1.8; padding-left: 20px; margin: 0;">
          <li><strong>Number Plate Visibility:</strong> Never obscure your car's rear registration plate. Use an auxiliary license plate holder mounted on the rack.</li>
          <li><strong>Tail Light Clearance:</strong> Ensure brake lights and turn signals remain fully visible to trailing highway traffic.</li>
          <li><strong>Tongue Weight Calculations:</strong> Keep total rack + bike weight within 10% of your car's max tow capacity tongue weight.</li>
          <li><strong>Secondary Safety Chains:</strong> Always loop steel safety cables from the bike frame directly to the car frame chassis.</li>
          <li><strong>Speed Limitations:</strong> Reduce highway driving speeds to maximum 80-90 km/h when towing external bike racks.</li>
        </ul>
      </div>

    </div>
  </section>

  <!-- Section 5: Step-by-Step Installation Protocol -->
  <section style="padding: 70px 0; background: #0b132b; color: #e2e8f0; border-top: 1px solid rgba(245, 158, 11, 0.15);">
    <div class="container" style="max-width: 900px;">
      
      <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Step-by-Step</span>
      <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin: 10px 0 20px 0;">
        5 Steps to Mount a Bike on a Car Rack Safely
      </h2>

      <div style="display: grid; grid-template-columns: 1fr; gap: 16px; margin-top: 25px;">
        <div style="background: rgba(23, 42, 84, 0.6); padding: 20px 24px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #ffffff; font-size: 1.15rem; margin-bottom: 6px;">Step 1: Inspect Receiver Hitch &amp; Torque Bolts</h4>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0;">Insert hitch shank into the car's 2-inch receiver tube. Tighten anti-wobble lock pin to eliminate play.</p>
        </div>
        <div style="background: rgba(23, 42, 84, 0.6); padding: 20px 24px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #ffffff; font-size: 1.15rem; margin-bottom: 6px;">Step 2: Lower Loading Ramp &amp; Wheel Chocks</h4>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0;">Attach loading ramp to tray edge. Adjust front wheel cradle to fit your tire width.</p>
        </div>
        <div style="background: rgba(23, 42, 84, 0.6); padding: 20px 24px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #ffffff; font-size: 1.15rem; margin-bottom: 6px;">Step 3: Roll Bike onto Track &amp; Engage Front Wheel Lock</h4>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0;">Guide the bike slowly up the ramp into the steel channel until the front wheel locks firmly into position.</p>
        </div>
        <div style="background: rgba(23, 42, 84, 0.6); padding: 20px 24px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #ffffff; font-size: 1.15rem; margin-bottom: 6px;">Step 4: Attach 4-Point High-Tensile Ratchet Straps</h4>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0;">Anchor two straps to front handlebars and two to rear frame members. Compress bike suspension slightly for firm tension.</p>
        </div>
        <div style="background: rgba(23, 42, 84, 0.6); padding: 20px 24px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #ffffff; font-size: 1.15rem; margin-bottom: 6px;">Step 5: Perform Shake Test &amp; Highway Checkpoint Stops</h4>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0;">Vigorously shake the bike to confirm zero movement. Re-check strap tension after the first 25 km of highway driving.</p>
        </div>
      </div>

    </div>
  </section>

  <!-- Section 6: FAQ Section -->
  <section style="padding: 70px 0; background: #070d1e; color: #ffffff;">
    <div class="container" style="max-width: 900px;">
      
      <div class="section-header text-center" style="margin-bottom: 45px;">
        <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Expert FAQs</span>
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin-top: 10px;">
          Frequently Asked Questions About <span style="color: #f59e0b;">Car Rack Bike Shipping</span>
        </h2>
      </div>

      <div style="display: flex; flex-direction: column; gap: 16px;">
        <?php foreach ($faq_list as $index => $faq): ?>
        <div style="background: #101c40; padding: 20px 24px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Q<?php echo ($index + 1); ?>: <?php echo htmlspecialchars($faq['q']); ?></h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.7;"><?php echo htmlspecialchars($faq['a']); ?></p>
        </div>
        <?php endforeach; ?>
      </div>

    </div>
  </section>

  <!-- Section 7: CTA Banner -->
  <section style="padding: 70px 0; background: linear-gradient(135deg, #172a54 0%, #0b132b 100%); border-top: 1.5px solid rgba(245, 158, 11, 0.4); color: #ffffff;">
    <div class="container" style="max-width: 900px; text-align: center;">
      
      <span class="section-tag" style="background: rgba(245, 158, 11, 0.2); color: #f59e0b; padding: 6px 16px; border-radius: 20px; font-size: 0.85rem; font-weight: 700; text-transform: uppercase;">
        Zero Risk Bike Shipping
      </span>

      <h2 style="font-size: 2.3rem; font-weight: 800; margin: 15px 0 15px 0; color: #ffffff;">
        Prefer Professional Enclosed Transport? <span style="color: #f59e0b;">Shree Ashirwad Packers</span>
      </h2>

      <p style="font-size: 1.05rem; color: #cbd5e1; max-width: 750px; margin: 0 auto 30px auto; line-height: 1.7;">
        Avoid car rack hassle. Transport your motorcycle inside 100% covered container trucks with 7-layer wrapping and IBA billing.
      </p>

      <div style="display: flex; gap: 15px; justify-content: center; flex-wrap: wrap;">
        <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Transport Desk:" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 30px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1.05rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
          <i class="fas fa-phone-alt"></i> Call Transport Desk: <?php echo SITE_PHONE; ?>
        </a>
        <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20a%20professional%20bike%20transport%20quote." title="Chat on WhatsApp" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 30px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1.05rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
          <i class="fab fa-whatsapp"></i> Chat on WhatsApp
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
  
  var message = "Hello Shree Ashirwad Packers & Movers,\n\nI would like to request a Bike Transport Quote:\n- Name: " + name + "\n- Phone: " + phone + "\n- Pickup Locality: " + moveFrom + "\n- Destination City: " + moveTo;
  
  var whatsappUrl = "https://api.whatsapp.com/send?phone=918409531615&text=" + encodeURIComponent(message);
  window.location.href = whatsappUrl;
}
</script>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
