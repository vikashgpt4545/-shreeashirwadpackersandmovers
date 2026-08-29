<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "Bike Transport Covers | Waterproof & Transit Protection Guide";
$page_desc = "Complete consumer guide to bike transport covers, heavy-duty waterproof canvas guards, dual rack covers, and multi-layer transit shielding. Learn how protective covers safeguard motorcycles during intercity transport.";
$page_keywords = "bike transport covers, motorcycle shipping cover, waterproof bike transit cover, bike rack covers, heavy duty bike packing shield, shree ashirwad bike transport";
$canonical_url = "https://shreeashirwadpackersandmovers.com/bike-transport-covers";

$page_city = "Pan-India / Ranchi / Patna";

$faq_list = [
    [
        'q' => 'Why are specialized bike transport covers necessary during vehicle transit?',
        'a' => 'Standard motorcycle body dust covers are not designed to withstand highway wind shear, rain, or road debris inside multi-car or bike carriers. Heavy-duty transit covers feature reinforced 600D polyester or heavy canvas with thermal exhaust guards and double-stitched tie-downs to ensure zero scratches, rust, or paint fading.'
    ],
    [
        'q' => 'What is the cost of adding heavy-duty transport covers and bubble wrapping for bike shipping?',
        'a' => 'Specialized heavy-duty bike transport cover wrapping costs between ₹450 and ₹1,200 depending on vehicle dimensions (commuter, cruiser, or superbike) and whether multi-layer bubble wrap casing is added.'
    ],
    [
        'q' => 'Are bike transport covers waterproof and weather-resistant?',
        'a' => 'Yes. Premium bike shipping covers utilize PU-coated waterproof Oxford fabric (up to 3000mm hydrostatic head) combined with heat-sealed seams that protect motorcycles against rain, road slush, dust storms, and UV radiation.'
    ],
    [
        'q' => 'Can bike covers fit cruisers like Royal Enfield Bullet or sports bikes with saddlebags?',
        'a' => 'Yes, specialized oversized transit covers accommodate high handlebars, tall windshields, side panniers, and rear top boxes on cruisers like Royal Enfield Classic, Himalayan, KTM Adventure, and BMW GS series.'
    ],
    [
        'q' => 'How are bike transport covers secured inside container trucks to prevent slipping?',
        'a' => 'Covers are anchored using heavy-duty elastic bottom hems, central quick-release buckle straps, and reinforced grommet eyelets fastened with nylon tie-downs to ensure the cover stays immovable during highway transit.'
    ],
    [
        'q' => 'Should the motorcycle engine be cool before putting on a transport cover?',
        'a' => 'Yes. A hot exhaust pipe can melt standard synthetic fabrics. Our wrapping team ensures the engine cools down completely, or applies heat-resistant aluminized exhaust shields before applying the full transport cover.'
    ],
    [
        'q' => 'What is the difference between single bike covers and dual bike rack covers?',
        'a' => 'Single bike covers enclose a single standalone motorcycle. Dual bike rack covers are larger protective shields designed for 2-tier transport racks or hitch-mounted bike racks used on car carriers.'
    ],
    [
        'q' => 'Do you provide transit insurance for bikes wrapped in protective covers?',
        'a' => 'Yes. All vehicle shipments handled by Shree Ashirwad Packers include optional 100% declared value transit risk insurance, providing complete financial security alongside physical cover protection.'
    ],
    [
        'q' => 'Can I buy or retain the bike transport cover after delivery?',
        'a' => 'Yes, custom-fitted heavy-duty transport covers provided during shifting can be retained by the owner for ongoing home parking or future long-distance travel protection.'
    ],
    [
        'q' => 'How can I request bike transport with premium cover protection?',
        'a' => 'Call +91 8409531615 or send your motorcycle model and destination city via WhatsApp for an immediate price estimate including full protective packaging.'
    ]
];

require_once __DIR__ . '/../includes/header.php';
?>

<main class="site-main">

  <!-- 1. Visual Breadcrumb Navigation Bar -->
  <div class="breadcrumb-wrapper">
    <div class="container">
      <div class="breadcrumb-list">
        <span class="breadcrumb-item"><a href="<?php echo SITE_URL; ?>" title="Home">Home</a></span>
        <span class="breadcrumb-separator">/</span>
        <span class="breadcrumb-item"><a href="<?php echo SITE_URL; ?>guides" title="Guides">Guides</a></span>
        <span class="breadcrumb-separator">/</span>
        <span class="breadcrumb-item active"><?php echo htmlspecialchars($page_title); ?></span>
      </div>
    </div>
  </div>

  <!-- 2. Hero Section & Instant WhatsApp Lead Form -->
  <section class="hero-section" style="background: linear-gradient(135deg, #0b132b 0%, #1c2541 100%); padding: 60px 0; color: #ffffff;">
    <div class="container">
      <div class="hero-grid" style="display: grid; grid-template-columns: 1.2fr 0.8fr; gap: 40px; align-items: center;">
        
        <!-- Hero Text Column -->
        <div class="hero-text">
          <span class="section-tag" style="background: rgba(245, 158, 11, 0.15); color: #f59e0b; border: 1px solid rgba(245, 158, 11, 0.4); padding: 6px 16px; border-radius: 20px; font-size: 0.85rem; font-weight: 700; text-transform: uppercase; display: inline-block; margin-bottom: 15px;">
            TRANSIT PROTECTION &amp; PACKAGING GUIDE
          </span>
          <h1 style="font-size: 2.6rem; font-weight: 800; line-height: 1.2; margin-bottom: 20px; color: #ffffff;">
            Heavy-Duty <span style="color: #f59e0b;">Bike Transport Covers</span> &amp; Shielding
          </h1>
          <p style="font-size: 1.08rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 25px;">
            Protect your valuable motorcycle against road dust, rain, stone chips, and friction scratches during transit. Shree Ashirwad Packers utilizes multi-layer 600D waterproof polyester canvas, heat-resistant exhaust shields, and double-stitched tie-down covers for 100% scratch-free bike shipping.
          </p>

          <div style="display: flex; gap: 15px; flex-wrap: wrap; margin-bottom: 30px;">
            <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Transport Specialist" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
              <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call Specialist: <?php echo SITE_PHONE; ?>
            </a>
            <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20a%20bike%20transport%20cover%20and%20shipping%20quote." title="Chat on WhatsApp" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
              <i class="fab fa-whatsapp" style="margin-right: 8px;"></i> Chat on WhatsApp
            </a>
          </div>

          <div style="display: flex; gap: 20px; font-size: 0.9rem; color: #94a3b8;">
            <span><strong style="color: #f59e0b;">600D Waterproof</strong> Polyester</span>
            <span><strong style="color: #f59e0b;">Thermal Exhaust</strong> Guard</span>
            <span><strong style="color: #f59e0b;">Zero-Scratch</strong> Warranty</span>
          </div>
        </div>

        <!-- Hero Lead Form Column -->
        <div class="hero-form-card" style="background: rgba(255, 255, 255, 0.05); backdrop-filter: blur(10px); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 16px; padding: 30px; box-shadow: 0 15px 35px rgba(0,0,0,0.4);">
          <h2 style="font-size: 1.4rem; color: #ffffff; margin-bottom: 8px; font-weight: 700; text-align: center;">Get Bike Transport Quote</h2>
          <p style="font-size: 0.85rem; color: #94a3b8; text-align: center; margin-bottom: 20px;">Includes 4-Layer Packaging &amp; Protective Covers</p>

          <form action="#" method="POST" onsubmit="sendHeroWhatsAppLead(event, this);">
            <div style="margin-bottom: 14px;">
              <input type="text" name="name" class="form-control" placeholder="Your Full Name" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="margin-bottom: 14px;">
              <input type="tel" name="phone" class="form-control" placeholder="10-Digit WhatsApp Phone" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 10px; margin-bottom: 14px;">
              <input type="text" name="move_from" class="form-control" placeholder="Pickup City" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
              <input type="text" name="move_to" class="form-control" placeholder="Destination City" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="margin-bottom: 16px;">
              <input type="text" name="bike_model" class="form-control" placeholder="Bike Model (e.g. Royal Enfield, Pulsar, KTM)" style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <button type="submit" style="width: 100%; padding: 14px; background: linear-gradient(135deg, #d32f2f 0%, #f59e0b 100%); color: #ffffff; border: none; border-radius: 50px; font-weight: 700; font-size: 1rem; cursor: pointer;">
              Get Protected Shipping Quote &rarr;
            </button>
          </form>
        </div>

      </div>
    </div>
  </section>

  <!-- 3. Key Stats Counter Bar -->
  <section class="stats-section" style="padding: 45px 0; background: #070d1e; border-bottom: 1px solid rgba(245, 158, 11, 0.2);">
    <div class="container">
      <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 20px; text-align: center;">
        <div style="padding: 20px; background: rgba(23, 42, 84, 0.5); border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">1,250+</div>
          <div style="font-size: 0.9rem; color: #cbd5e1; margin-top: 5px;">Covers Fitted</div>
        </div>
        <div style="padding: 20px; background: rgba(23, 42, 84, 0.5); border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">600D Canvas</div>
          <div style="font-size: 0.9rem; color: #cbd5e1; margin-top: 5px;">Heavy Duty Material</div>
        </div>
        <div style="padding: 20px; background: rgba(23, 42, 84, 0.5); border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">100% Water-Proof</div>
          <div style="font-size: 0.9rem; color: #cbd5e1; margin-top: 5px;">Hydrostatic Sealing</div>
        </div>
        <div style="padding: 20px; background: rgba(23, 42, 84, 0.5); border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">0 Scratch</div>
          <div style="font-size: 0.9rem; color: #cbd5e1; margin-top: 5px;">Transit Guarantee</div>
        </div>
      </div>
    </div>
  </section>

  <!-- 4. 6-Card Feature Grid (3x2 Layout) -->
  <section style="padding: 65px 0; background: #0b132b; color: #e2e8f0; line-height: 1.8;">
    <div class="container">
      
      <div style="max-width: 950px; margin: 0 auto;">
        <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Packaging Excellence</span>
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin: 10px 0 20px 0;">
          Why Specialized <span style="color: #f59e0b;">Bike Transport Covers</span> Matter
        </h2>

        <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px; margin: 30px 0;">
          
          <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px;">
            <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;"><i class="fas fa-shield-alt"></i></div>
            <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">600D Tear-Proof Fabric</h3>
            <p style="font-size: 0.9rem; color: #cbd5e1; margin: 0;">
              Constructed from heavy-duty Oxford polyester canvas resistant to tearing, wind flapping, and abrasive highway friction.
            </p>
          </div>

          <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px;">
            <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;"><i class="fas fa-tint-slash"></i></div>
            <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">PU Water Barrier</h3>
            <p style="font-size: 0.9rem; color: #cbd5e1; margin: 0;">
              Internal polyurethane coating preventing rain, mud spray, and monsoon humidity from touching chrome or electrical components.
            </p>
          </div>

          <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px;">
            <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;"><i class="fas fa-fire"></i></div>
            <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">Thermal Exhaust Shield</h3>
            <p style="font-size: 0.9rem; color: #cbd5e1; margin: 0;">
              Aluminized heat-resistant bottom lining protecting the cover fabric from scorching against warm silencers or engine blocks.
            </p>
          </div>

          <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px;">
            <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;"><i class="fas fa-lock"></i></div>
            <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">Buckle &amp; Eyelet Straps</h3>
            <p style="font-size: 0.9rem; color: #cbd5e1; margin: 0;">
              Integrated quick-release central buckles and corner grommets to fasten the cover immovable inside carrier trucks.
            </p>
          </div>

          <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px;">
            <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;"><i class="fas fa-sun"></i></div>
            <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">UV &amp; Dust Barrier</h3>
            <p style="font-size: 0.9rem; color: #cbd5e1; margin: 0;">
              Anti-UV treatment preventing fuel tank decal discoloration and rubber seal degradation under harsh open sun exposure.
            </p>
          </div>

          <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px;">
            <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;"><i class="fas fa-box-open"></i></div>
            <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">Custom Fitment Sizes</h3>
            <p style="font-size: 0.9rem; color: #cbd5e1; margin: 0;">
              Tailored dimensions ranging from Medium (scooters) to XXL (adventure touring bikes with panniers and top boxes).
            </p>
          </div>

        </div>

      </div>

    </div>
  </section>

  <!-- 5. Customized Tariff & Pricing Matrix -->
  <section style="padding: 60px 0; background: #070d1e; color: #ffffff;">
    <div class="container" style="max-width: 1000px;">
      
      <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Pricing Matrix</span>
      <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin: 10px 0 20px 0;">
        Bike Transport Cover &amp; Protective Packaging <span style="color: #f59e0b;">Tariff Rates</span>
      </h2>
      
      <p style="font-size: 1.05rem; color: #cbd5e1; margin-bottom: 25px;">
        Transparent, itemized pricing for motorcycle transport covers, multi-layer bubble wrapping, and wooden crating options across major vehicle categories:
      </p>

      <div style="overflow-x: auto; margin: 30px 0;">
        <table style="width: 100%; border-collapse: collapse; background: #172a54; border-radius: 10px; overflow: hidden; border: 1px solid rgba(245, 158, 11, 0.3);">
          <thead>
            <tr style="background: #1e3a8a; color: #f59e0b; text-align: left;">
              <th style="padding: 14px 16px;">Vehicle Category</th>
              <th style="padding: 14px 16px;">Standard 4-Layer Bubble Wrap</th>
              <th style="padding: 14px 16px;">600D Heavy Transit Cover</th>
              <th style="padding: 14px 16px;">Full Wooden Crate + Cover</th>
            </tr>
          </thead>
          <tbody>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.08);">
              <td style="padding: 12px 16px; font-weight: 700; color: #fff;">Scooter / Moped (Activa, Jupiter, Ola)</td>
              <td style="padding: 12px 16px; color: #6ee7b7;">₹350 - ₹500</td>
              <td style="padding: 12px 16px; color: #f59e0b;">₹650 - ₹850</td>
              <td style="padding: 12px 16px; color: #cbd5e1;">₹1,800 - ₹2,400</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.08);">
              <td style="padding: 12px 16px; font-weight: 700; color: #fff;">Commuter Bike (100cc - 160cc)</td>
              <td style="padding: 12px 16px; color: #6ee7b7;">₹400 - ₹600</td>
              <td style="padding: 12px 16px; color: #f59e0b;">₹750 - ₹950</td>
              <td style="padding: 12px 16px; color: #cbd5e1;">₹2,000 - ₹2,800</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.08);">
              <td style="padding: 12px 16px; font-weight: 700; color: #fff;">Cruiser / Sports (Royal Enfield, Duke, Jawa)</td>
              <td style="padding: 12px 16px; color: #6ee7b7;">₹550 - ₹750</td>
              <td style="padding: 12px 16px; color: #f59e0b;">₹950 - ₹1,250</td>
              <td style="padding: 12px 16px; color: #cbd5e1;">₹2,500 - ₹3,500</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.08);">
              <td style="padding: 12px 16px; font-weight: 700; color: #fff;">Superbike / Touring (BMW GS, Triumph, Ninja)</td>
              <td style="padding: 12px 16px; color: #6ee7b7;">₹800 - ₹1,100</td>
              <td style="padding: 12px 16px; color: #f59e0b;">₹1,400 - ₹1,800</td>
              <td style="padding: 12px 16px; color: #cbd5e1;">₹3,800 - ₹5,200</td>
            </tr>
          </tbody>
        </table>
      </div>

    </div>
  </section>

  <!-- 6. 7-Layer Packaging Framework -->
  <section style="padding: 60px 0; background: #0b132b; color: #ffffff;">
    <div class="container" style="max-width: 950px;">
      
      <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Step-by-Step Process</span>
      <h2 style="font-size: 2.1rem; font-weight: 800; color: #ffffff; margin: 10px 0 25px 0;">
        7-Step Zero-Scratch Bike Wrapping Protocol
      </h2>

      <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 15px;">
        <div style="background: #172a54; padding: 18px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <div style="font-size: 0.8rem; color: #f59e0b; font-weight: 700;">STEP 01</div>
          <h4 style="font-size: 0.95rem; color: #fff; margin: 4px 0;">Inspection &amp; Mirror Removal</h4>
          <p style="font-size: 0.82rem; color: #cbd5e1; margin: 0;">Photographing pre-existing conditions and safely removing rearview mirrors for separate padding.</p>
        </div>

        <div style="background: #172a54; padding: 18px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <div style="font-size: 0.8rem; color: #f59e0b; font-weight: 700;">STEP 02</div>
          <h4 style="font-size: 0.95rem; color: #fff; margin: 4px 0;">Foam Under-Layer</h4>
          <p style="font-size: 0.82rem; color: #cbd5e1; margin: 0;">Applying non-abrasive soft foam pads over fuel tank, headlamp, and fairing panels.</p>
        </div>

        <div style="background: #172a54; padding: 18px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <div style="font-size: 0.8rem; color: #f59e0b; font-weight: 700;">STEP 03</div>
          <h4 style="font-size: 0.95rem; color: #fff; margin: 4px 0;">80-GSM Bubble Wrap</h4>
          <p style="font-size: 0.82rem; color: #cbd5e1; margin: 0;">Wrapping 3-4 layers of high-density air bubble sheet around entire motorcycle body.</p>
        </div>

        <div style="background: #172a54; padding: 18px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <div style="font-size: 0.8rem; color: #f59e0b; font-weight: 700;">STEP 04</div>
          <h4 style="font-size: 0.95rem; color: #fff; margin: 4px 0;">Corrugated Sheet Board</h4>
          <p style="font-size: 0.82rem; color: #cbd5e1; margin: 0;">Forming a rigid corrugated cardboard shell around tank, seat, and side cowls.</p>
        </div>

        <div style="background: #172a54; padding: 18px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <div style="font-size: 0.8rem; color: #f59e0b; font-weight: 700;">STEP 05</div>
          <h4 style="font-size: 0.95rem; color: #fff; margin: 4px 0;">Stretch Film Sealing</h4>
          <p style="font-size: 0.82rem; color: #cbd5e1; margin: 0;">Tightly wrapping waterproof LLDPE stretch film to seal all packaging layers seamless.</p>
        </div>

        <div style="background: #172a54; padding: 18px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <div style="font-size: 0.8rem; color: #f59e0b; font-weight: 700;">STEP 06</div>
          <h4 style="font-size: 0.95rem; color: #fff; margin: 4px 0;">Outer 600D Cover Fitment</h4>
          <p style="font-size: 0.82rem; color: #cbd5e1; margin: 0;">Drapping heavy-duty canvas transport cover over the wrapped motorcycle and securing buckles.</p>
        </div>

        <div style="background: #172a54; padding: 18px; border-radius: 10px; border-left: 4px solid #f59e0b; grid-column: span 2;">
          <div style="font-size: 0.8rem; color: #f59e0b; font-weight: 700;">STEP 07</div>
          <h4 style="font-size: 0.95rem; color: #fff; margin: 4px 0;">Truck Container Anchoring</h4>
          <p style="font-size: 0.82rem; color: #cbd5e1; margin: 0;">Locking both wheels with nylon tie-down belts inside enclosed carrier vehicle for vibration-free transit.</p>
        </div>
      </div>

    </div>
  </section>

  <!-- 7. Major Service Locations & Hub Links -->
  <section style="padding: 60px 0; background: #070d1e; color: #ffffff;">
    <div class="container" style="max-width: 900px;">
      
      <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Regional Hubs</span>
      <h2 style="font-size: 2.1rem; font-weight: 800; color: #ffffff; margin: 10px 0 20px 0;">
        Popular Bike Shipping Hubs &amp; <span style="color: #f59e0b;">Guides</span>
      </h2>

      <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 16px; margin-bottom: 25px;">
        <div style="background: #101c40; padding: 18px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #ffffff; font-size: 1.05rem; margin-bottom: 6px;">Ranchi Bike Transport Hub</h4>
          <p style="font-size: 0.88rem; color: #94a3b8; margin-bottom: 8px;">Comprehensive bike shipping services in Ranchi.</p>
          <a href="<?php echo SITE_URL; ?>packers-and-movers-in-ranchi" title="Packers Movers Ranchi →" style="color: #f59e0b; text-decoration: underline; font-weight: 600; font-size: 0.88rem;">
            Packers Movers Ranchi Master Hub →
          </a>
        </div>

        <div style="background: #101c40; padding: 18px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #ffffff; font-size: 1.05rem; margin-bottom: 6px;">Patna Bike Transport Hub</h4>
          <p style="font-size: 0.88rem; color: #94a3b8; margin-bottom: 8px;">Doorstep motorcycle shipping &amp; packing in Patna.</p>
          <a href="<?php echo SITE_URL; ?>packers-and-movers-in-patna" title="Packers Movers Patna →" style="color: #f59e0b; text-decoration: underline; font-weight: 600; font-size: 0.88rem;">
            Packers Movers Patna Master Hub →
          </a>
        </div>

        <div style="background: #101c40; padding: 18px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #ffffff; font-size: 1.05rem; margin-bottom: 6px;">Jamshedpur Bike Parcel Hub</h4>
          <p style="font-size: 0.88rem; color: #94a3b8; margin-bottom: 8px;">Protected bike parcel services across Jamshedpur.</p>
          <a href="<?php echo SITE_URL; ?>packers-and-movers-in-jamshedpur" title="Packers Movers Jamshedpur →" style="color: #f59e0b; text-decoration: underline; font-weight: 600; font-size: 0.88rem;">
            Packers Movers Jamshedpur Hub →
          </a>
        </div>

        <div style="background: #101c40; padding: 18px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #ffffff; font-size: 1.05rem; margin-bottom: 6px;">Interstate Vehicle Shipping Guide</h4>
          <p style="font-size: 0.88rem; color: #94a3b8; margin-bottom: 8px;">Complete intercity vehicle transport procedures.</p>
          <a href="<?php echo SITE_URL; ?>guides" title="All Shifting & Shipping Guides →" style="color: #f59e0b; text-decoration: underline; font-weight: 600; font-size: 0.88rem;">
            All Consumer Guides Hub →
          </a>
        </div>
      </div>

    </div>
  </section>

  <!-- 8. Frequently Asked Questions (UI Rendered) -->
  <section style="padding: 60px 0; background: #0b132b; color: #ffffff;">
    <div class="container" style="max-width: 900px;">
      
      <div class="section-header text-center" style="margin-bottom: 40px;">
        <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Got Questions?</span>
        <h2 style="font-size: 2.1rem; font-weight: 800; color: #ffffff; margin-top: 10px;">
          Frequently Asked Questions About <span style="color: #f59e0b;">Bike Transport Covers</span>
        </h2>
      </div>

      <div style="display: flex; flex-direction: column; gap: 14px;">
        <?php foreach ($faq_list as $idx => $faq): ?>
          <div style="background: #101c40; padding: 20px 24px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
            <h3 style="font-size: 1.05rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Q<?php echo ($idx + 1); ?>: <?php echo htmlspecialchars($faq['q']); ?></h3>
            <p style="font-size: 0.92rem; color: #cbd5e1; margin: 0; line-height: 1.7;">
              <?php echo htmlspecialchars($faq['a']); ?>
            </p>
          </div>
        <?php endforeach; ?>
      </div>

    </div>
  </section>

  <!-- 9. Call-To-Action (CTA) Conversion Footer -->
  <section style="padding: 60px 0; background: linear-gradient(135deg, #172a54 0%, #0b132b 100%); border-top: 1.5px solid rgba(245, 158, 11, 0.4); color: #ffffff;">
    <div class="container" style="max-width: 900px; text-align: center;">
      
      <span class="section-tag" style="background: rgba(245, 158, 11, 0.2); color: #f59e0b; padding: 6px 16px; border-radius: 20px; font-size: 0.85rem; font-weight: 700; text-transform: uppercase;">
        Zero-Scratch Bike Shipping
      </span>

      <h2 style="font-size: 2.2rem; font-weight: 800; margin: 15px 0 15px 0; color: #ffffff;">
        Need Protected <span style="color: #f59e0b;">Bike Transport with Heavy Covers</span>?
      </h2>

      <p style="font-size: 1.05rem; color: #cbd5e1; max-width: 750px; margin: 0 auto 30px auto; line-height: 1.7;">
        Contact Shree Ashirwad Packers today for complete 4-layer packaging, heavy-duty 600D transport covers, and 100% insured door-to-door motorcycle shipping.
      </p>

      <div style="display: flex; gap: 15px; justify-content: center; flex-wrap: wrap;">
        <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Specialist Now" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 30px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1.05rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
          <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call Specialist: <?php echo SITE_PHONE; ?>
        </a>
        <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20a%20bike%20shipping%20quote%20with%20protective%20cover." title="Chat on WhatsApp" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 30px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1.05rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
          <i class="fab fa-whatsapp" style="margin-right: 8px;"></i> Chat on WhatsApp
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
  var model = form.querySelector('[name="bike_model"]').value;
  
  var message = "Hello Shree Ashirwad Packers & Movers,\n\nI would like a Protected Bike Transport Quote:\n- Name: " + name + "\n- Phone: " + phone + "\n- Pickup City: " + moveFrom + "\n- Destination City: " + moveTo;
  
  if (model && model.trim() !== '') {
    message += "\n- Bike Model: " + model;
  }
  
  var whatsappUrl = "https://api.whatsapp.com/send?phone=918409531615&text=" + encodeURIComponent(message);
  window.open(whatsappUrl, '_blank');
}
</script>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>

