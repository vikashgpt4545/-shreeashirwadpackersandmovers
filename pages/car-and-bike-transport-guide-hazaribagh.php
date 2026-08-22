<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "Car and Bike Transport Guide Hazaribagh | Vehicle Relocation";
$page_desc = "Complete car and bike transport guide for Hazaribagh, Jharkhand (JH-02). Learn enclosed vehicle carrier options, 4-layer motorcycle packaging, tariffs, transit insurance, and IBA bill claim procedures. Call 8409531615.";
$page_keywords = "car and bike transport guide hazaribagh, vehicle shifting hazaribagh, bike transport hazaribagh, car carrier hazaribagh, shree ashirwad packers hazaribagh";
$canonical_url = "https://shreeashirwadpackersandmovers.com/pages/car-and-bike-transport-guide-hazaribagh.php";

$page_city = 'Hazaribagh';

$faq_list = [
    [
        'q' => 'How are cars and bikes transported safely from Hazaribagh to other cities?',
        'a' => 'Vehicles are shipped using specialized multi-car covered carriers or single-car containers. Bikes receive 4-layer bubble and corrugated wrapping before being secured with heavy-duty ratcheting straps.'
    ],
    [
        'q' => 'What is the cost of shipping a car from Hazaribagh to Delhi, Mumbai, or Bangalore?',
        'a' => 'Car transport rates from Hazaribagh range from ₹6,500 to ₹9,500 for hatchbacks, ₹8,500 to ₹12,500 for sedans, and ₹11,500 to ₹17,500 for SUVs depending on distance and carrier type.'
    ],
    [
        'q' => 'What is the cost of bike transport from Hazaribagh?',
        'a' => 'Two-wheeler shifting rates from Hazaribagh start at ₹2,200 for standard motorcycles (up to 150cc), ₹2,800 to ₹4,200 for sports bikes, and ₹4,500+ for premium cruisers.'
    ],
    [
        'q' => 'Do you collect vehicles directly from BSF Meru Camp and Matwari in Hazaribagh?',
        'a' => 'Yes, our pickup team provides direct doorstep vehicle collection across Matwari, Korrah, BSF Meru Camp, Demotand, Canary Hill Road, and Hazaribagh Lake area.'
    ],
    [
        'q' => 'Can military personnel and government officers in Hazaribagh claim vehicle shifting bills?',
        'a' => 'Yes, we issue 100% official 18% GST invoices (SAC 996511), vehicle inspection reports, and LR consignment receipts accepted by defense and central audit branches.'
    ],
    [
        'q' => 'What documents are required to transport a vehicle from Hazaribagh?',
        'a' => 'You must provide a copy of the Vehicle Registration Certificate (RC), valid insurance policy, government ID proof (Aadhaar/PAN), and a signed joint inspection sheet.'
    ],
    [
        'q' => 'Is transit insurance included with vehicle transport from Hazaribagh?',
        'a' => 'Yes, we provide 100% comprehensive transit insurance covering your vehicle against physical damage, road accidents, fire, and natural disasters during interstate transit.'
    ],
    [
        'q' => 'How is a car loaded onto the car carrier truck in Hazaribagh?',
        'a' => 'Cars are driven onto the carrier deck using low-incline hydraulic ramps. All four wheels are secured to the trailer floor with heavy-duty nylon wheel-chock tie-down belts.'
    ],
    [
        'q' => 'What packaging materials are used for bike protection?',
        'a' => 'Bikes receive 4-layer packaging: high-density foam padding on mirrors and handles, thick bubble wrap over tank/body panels, 5-ply corrugated sheets, and outer waterproof stretch film.'
    ],
    [
        'q' => 'Can I pack personal items inside my car during shipping?',
        'a' => 'Up to 15-20 kg of non-hazardous personal luggage or car accessories may be placed inside the boot trunk at owner risk.'
    ],
    [
        'q' => 'How long does vehicle transport take from Hazaribagh to major Indian metros?',
        'a' => 'Transit to nearby hubs (Kolkata, Patna, Ranchi) takes 24-36 hours, while delivery to Delhi, Mumbai, Hyderabad, or Bangalore takes 4 to 6 days.'
    ],
    [
        'q' => 'What is the difference between open trailers and enclosed car carriers?',
        'a' => 'Open trailers carry multiple cars cost-effectively, while enclosed containers shield your car completely from weather, highway dust, and flying stones.'
    ],
    [
        'q' => 'Can I track my vehicle while it is in transit from Hazaribagh?',
        'a' => 'Yes, all long-distance car trailers feature satellite GPS tracking, and our support team provides daily location updates on WhatsApp.'
    ],
    [
        'q' => 'What pre-loading checks are conducted on my vehicle in Hazaribagh?',
        'a' => 'We conduct a joint physical inspection, document existing scratches, note mileage/fuel level, and issue a signed Car/Bike Condition Checklist before handover.'
    ],
    [
        'q' => 'How should I prepare my bike before handover for transport?',
        'a' => 'Keep fuel tank below 1/4th level, clean the motorcycle exterior, remove loose mirrors or bags, and verify tire pressure.'
    ],
    [
        'q' => 'How should I prepare my car before loading in Hazaribagh?',
        'a' => 'Ensure fuel is at 1/4th level, remove all valuables and FASTag cards, turn off alarm systems, and keep spare keys ready.'
    ],
    [
        'q' => 'Do you handle luxury and low-ground-clearance cars safely?',
        'a' => 'Yes, our hydraulic ramps feature adjustable low angles to prevent underbody scraping on sports sedans and luxury SUVs.'
    ],
    [
        'q' => 'Are there any hidden costs like toll taxes or fuel surcharges?',
        'a' => 'No, our initial quotation is 100% all-inclusive with zero hidden costs, covering pickup, loading, transit, toll taxes, insurance, and doorstep delivery.'
    ],
    [
        'q' => 'What payment options do you support for vehicle shipping in Hazaribagh?',
        'a' => 'We accept UPI, Net Banking, credit/debit cards, and cash. A deposit is paid at pickup and the balance upon doorstep vehicle delivery.'
    ],
    [
        'q' => 'How can I book car or bike transportation in Hazaribagh today?',
        'a' => 'Call +91 8409531615 or submit your pickup/destination details in our WhatsApp lead form for an instant fixed quote.'
    ]
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
        <span class="breadcrumb-item"><a href="<?php echo SITE_URL; ?>packers-and-movers-in-hazaribagh" title="Hazaribagh">Hazaribagh</a></span>
        <span class="breadcrumb-separator">/</span>
        <span class="breadcrumb-item active"><?php echo htmlspecialchars($page_title); ?></span>
      </div>
    </div>
  </div>

  <!-- Section 1: Hero Section with Lead Form -->
  <section class="hero-section" style="background: linear-gradient(135deg, #0b132b 0%, #1c2541 100%); padding: 60px 0; color: #ffffff;">
    <div class="container">
      <div class="hero-grid" style="display: grid; grid-template-columns: 1.2fr 0.8fr; gap: 40px; align-items: center;">
        
        <!-- Hero Text Column -->
        <div class="hero-text">
          <span class="section-tag" style="background: rgba(245, 158, 11, 0.15); color: #f59e0b; border: 1px solid rgba(245, 158, 11, 0.4); padding: 6px 16px; border-radius: 20px; font-size: 0.85rem; font-weight: 700; text-transform: uppercase; display: inline-block; margin-bottom: 15px;">
            VEHICLE RELOCATION GUIDE HAZARIBAGH
          </span>
          <h1 style="font-size: 2.7rem; font-weight: 800; line-height: 1.2; margin-bottom: 20px; color: #ffffff;">
            Car and Bike <span style="color: #f59e0b;">Transport Guide Hazaribagh</span>
          </h1>
          <p style="font-size: 1.12rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 25px;">
            Comprehensive guide to safe vehicle transport in Hazaribagh (JH-02). Learn enclosed carrier options, 4-layer bike wrapping, transit insurance, rates, and IBA-approved GST bill claim procedures for BSF Meru &amp; town residents. Call 8409531615.
          </p>

          <div style="display: flex; gap: 15px; flex-wrap: wrap; margin-bottom: 30px;">
            <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Now" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
              <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call Now: <?php echo SITE_PHONE; ?>
            </a>
            <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20need%20a%20car/bike%20transport%20quote%20in%20Hazaribagh." title="Chat on WhatsApp" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
              <i class="fab fa-whatsapp" style="margin-right: 8px;"></i> Chat on WhatsApp
            </a>
          </div>

          <div style="display: flex; gap: 20px; font-size: 0.9rem; color: #94a3b8;">
            <span><strong style="color: #f59e0b;">Enclosed Covered</strong> Carriers</span>
            <span><strong style="color: #f59e0b;">4-Layer Bike</strong> Protection</span>
            <span><strong style="color: #f59e0b;">IBA GST</strong> Claim Bills</span>
          </div>
        </div>

        <!-- Hero Lead Form Column -->
        <div class="hero-form-card" style="background: rgba(255, 255, 255, 0.05); backdrop-filter: blur(10px); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 16px; padding: 30px; box-shadow: 0 15px 35px rgba(0,0,0,0.4);">
          <h2 style="font-size: 1.4rem; color: #ffffff; margin-bottom: 8px; font-weight: 700; text-align: center;">Vehicle Shifting Estimate</h2>
          <p style="font-size: 0.85rem; color: #94a3b8; text-align: center; margin-bottom: 20px;">Receive instant car/bike transport rates on WhatsApp</p>

          <form action="#" method="POST" onsubmit="sendHeroWhatsAppLead(event, this);">
            <div style="margin-bottom: 14px;">
              <input type="text" name="name" class="form-control" placeholder="Your Full Name" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="margin-bottom: 14px;">
              <input type="tel" name="phone" class="form-control" placeholder="10-Digit Phone Number" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 10px; margin-bottom: 14px;">
              <input type="text" name="move_from" class="form-control" value="Hazaribagh" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
              <input type="text" name="move_to" class="form-control" placeholder="Destination City" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="margin-bottom: 16px;">
              <textarea name="message" class="form-control" rows="2" placeholder="Vehicle Details (e.g., Swift Car, Royal Enfield Bike)" style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;"></textarea>
            </div>
            <button type="submit" style="width: 100%; padding: 14px; background: linear-gradient(135deg, #d32f2f 0%, #f59e0b 100%); color: #ffffff; border: none; border-radius: 50px; font-weight: 700; font-size: 1rem; cursor: pointer;">
              Get Instant Vehicle Quote &rarr;
            </button>
          </form>
        </div>

      </div>
    </div>
  </section>

  <!-- Section 2: Stats Counter Bar -->
  <section class="stats-section" style="padding: 45px 0; background: #070d1e; border-bottom: 1px solid rgba(245, 158, 11, 0.2);">
    <div class="container">
      <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 20px; text-align: center;">
        <div style="padding: 20px; background: rgba(23, 42, 84, 0.5); border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b;">1,250+</div>
          <div style="font-size: 0.9rem; color: #cbd5e1; margin-top: 5px;">Hazaribagh Vehicles Delivered</div>
        </div>
        <div style="padding: 20px; background: rgba(23, 42, 84, 0.5); border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b;">Hydraulic</div>
          <div style="font-size: 0.9rem; color: #cbd5e1; margin-top: 5px;">Ramp Loading System</div>
        </div>
        <div style="padding: 20px; background: rgba(23, 42, 84, 0.5); border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b;">4-Layer</div>
          <div style="font-size: 0.9rem; color: #cbd5e1; margin-top: 5px;">Motorcycle Packaging</div>
        </div>
        <div style="padding: 20px; background: rgba(23, 42, 84, 0.5); border-radius: 12px; border: 1.5px solid rgba(245, 158, 11, 0.2);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b;">100% Claimable</div>
          <div style="font-size: 0.9rem; color: #cbd5e1; margin-top: 5px;">IBA Approved GST Invoices</div>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 3: Technical Guide Overview & 6-Card Grid -->
  <section style="padding: 70px 0; background: #0b132b; color: #e2e8f0; line-height: 1.8;">
    <div class="container" style="max-width: 950px;">
      
      <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Hazaribagh Transport Manual</span>
      <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin: 10px 0 20px 0;">
        Essential Car &amp; Bike Transport Guidelines in <span style="color: #f59e0b;">Hazaribagh</span>
      </h2>

      <p style="font-size: 1.05rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 20px;">
        Transporting personal vehicles from Hazaribagh requires proper carrier selection, robust multi-layer wrapping, official transit insurance, and systematic pre-move inspections. Hazaribagh's strategic position along NH-33 linking Ranchi to NH-19 (GT Road) makes it a central transit junction for defense personnel at BSF Meru Camp, university staff at Vinoba Bhave University, and commercial vehicle owners.
      </p>

      <p style="font-size: 1.05rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 20px;">
        At <strong>Shree Ashirwad Packers and Movers</strong>, we operate specialized covered car trailers and dedicated motorcycle containers. Our door-to-door transport service covers Matwari, Korrah, BSF Meru Camp, Demotand, Canary Hill Road, and Hazaribagh Lake area.
      </p>

      <!-- 6 Cards Grid (3x2 Layout) -->
      <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px; margin: 35px 0;">
        
        <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px; box-shadow: 0 10px 25px rgba(0,0,0,0.3);">
          <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;"><i class="fas fa-truck-moving"></i></div>
          <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">Enclosed Covered Carriers</h3>
          <p style="font-size: 0.9rem; color: #cbd5e1; line-height: 1.6; margin: 0;">
            Enclosed single-car containers and multi-car covered trailers shield vehicles against weather and highway gravel.
          </p>
        </div>

        <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px; box-shadow: 0 10px 25px rgba(0,0,0,0.3);">
          <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;"><i class="fas fa-motorcycle"></i></div>
          <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">4-Layer Bike Wrapping</h3>
          <p style="font-size: 0.9rem; color: #cbd5e1; line-height: 1.6; margin: 0;">
            Motorcycles receive foam padding, air bubble wrap, 5-ply corrugated sheets, and outer waterproof stretch film.
          </p>
        </div>

        <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px; box-shadow: 0 10px 25px rgba(0,0,0,0.3);">
          <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;"><i class="fas fa-clipboard-check"></i></div>
          <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">Pre-Dispatch Inspection</h3>
          <p style="font-size: 0.9rem; color: #cbd5e1; line-height: 1.6; margin: 0;">
            We record body panel condition, odometer reading, and fuel levels on a signed joint inspection sheet before handover.
          </p>
        </div>

        <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px; box-shadow: 0 10px 25px rgba(0,0,0,0.3);">
          <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;"><i class="fas fa-file-invoice-dollar"></i></div>
          <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">IBA Approved Claim Bills</h3>
          <p style="font-size: 0.9rem; color: #cbd5e1; line-height: 1.6; margin: 0;">
            Official 18% GST invoices (SAC 996511), LR consignment notes, and inspection sheets for defense/gov reimbursement.
          </p>
        </div>

        <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px; box-shadow: 0 10px 25px rgba(0,0,0,0.3);">
          <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;"><i class="fas fa-shield-alt"></i></div>
          <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">Full Transit Insurance</h3>
          <p style="font-size: 0.9rem; color: #cbd5e1; line-height: 1.6; margin: 0;">
            100% transit policy coverage protecting your vehicle against physical damage or accidents during interstate transit.
          </p>
        </div>

        <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px; box-shadow: 0 10px 25px rgba(0,0,0,0.3);">
          <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;"><i class="fas fa-map-marker-alt"></i></div>
          <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">Doorstep Hazaribagh Pickup</h3>
          <p style="font-size: 0.9rem; color: #cbd5e1; line-height: 1.6; margin: 0;">
            Convenient pickup from Matwari, Korrah, Demotand, Canary Hill Road, Lake Road, and BSF Meru Camp.
          </p>
        </div>

      </div>

    </div>
  </section>

  <!-- Section 4: Vehicle Transport Tariff Matrix -->
  <section style="padding: 70px 0; background: #070d1e; color: #ffffff; border-top: 1px solid rgba(245, 158, 11, 0.15);">
    <div class="container" style="max-width: 950px;">
      
      <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Transparent Pricing Guide</span>
      <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin: 10px 0 20px 0;">
        Estimated <span style="color: #f59e0b;">Car &amp; Bike Shipping Rates from Hazaribagh</span>
      </h2>
      <p style="font-size: 1.05rem; color: #cbd5e1; line-height: 1.7; margin-bottom: 25px;">
        Review baseline vehicle transportation costs from Hazaribagh across various distance slabs:
      </p>

      <div style="overflow-x: auto; margin-bottom: 30px;">
        <table style="width: 100%; border-collapse: collapse; background: #172a54; border-radius: 12px; overflow: hidden; border: 1px solid rgba(245, 158, 11, 0.3);">
          <thead>
            <tr style="background: linear-gradient(135deg, #1c2541 0%, #0b132b 100%); color: #f59e0b; text-align: left; font-size: 0.95rem;">
              <th style="padding: 16px 20px; border-bottom: 2px solid rgba(245, 158, 11, 0.4);">Vehicle Type</th>
              <th style="padding: 16px 20px; border-bottom: 2px solid rgba(245, 158, 11, 0.4);">Short Distance (Up to 400 km)</th>
              <th style="padding: 16px 20px; border-bottom: 2px solid rgba(245, 158, 11, 0.4);">Medium Distance (500 - 1000 km)</th>
              <th style="padding: 16px 20px; border-bottom: 2px solid rgba(245, 158, 11, 0.4);">Long Distance (1000+ km)</th>
            </tr>
          </thead>
          <tbody style="color: #cbd5e1; font-size: 0.9rem; line-height: 1.6;">
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.08);">
              <td style="padding: 14px 20px; font-weight: 700; color: #ffffff;">Standard Motorcycle (Splendor, Pulsar, Shine)</td>
              <td style="padding: 14px 20px; font-weight: 700; color: #f59e0b;">₹2,200 - ₹3,200</td>
              <td style="padding: 14px 20px; font-weight: 700; color: #f59e0b;">₹3,500 - ₹4,800</td>
              <td style="padding: 14px 20px; font-weight: 700; color: #f59e0b;">₹5,200 - ₹6,800</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.08); background: rgba(255,255,255,0.02);">
              <td style="padding: 14px 20px; font-weight: 700; color: #ffffff;">Premium / Cruiser Bike (Royal Enfield, Duke, Jawa)</td>
              <td style="padding: 14px 20px; font-weight: 700; color: #f59e0b;">₹3,200 - ₹4,500</td>
              <td style="padding: 14px 20px; font-weight: 700; color: #f59e0b;">₹4,800 - ₹6,500</td>
              <td style="padding: 14px 20px; font-weight: 700; color: #f59e0b;">₹7,000 - ₹9,500</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.08);">
              <td style="padding: 14px 20px; font-weight: 700; color: #ffffff;">Hatchback Car (Alto, Swift, i10, Baleno)</td>
              <td style="padding: 14px 20px; font-weight: 700; color: #f59e0b;">₹5,800 - ₹7,500</td>
              <td style="padding: 14px 20px; font-weight: 700; color: #f59e0b;">₹8,800 - ₹12,000</td>
              <td style="padding: 14px 20px; font-weight: 700; color: #f59e0b;">₹13,000 - ₹17,500</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.08); background: rgba(255,255,255,0.02);">
              <td style="padding: 14px 20px; font-weight: 700; color: #ffffff;">Sedan Car (Dzire, Honda City, Verna, Ciaz)</td>
              <td style="padding: 14px 20px; font-weight: 700; color: #f59e0b;">₹7,200 - ₹9,500</td>
              <td style="padding: 14px 20px; font-weight: 700; color: #f59e0b;">₹10,500 - ₹14,500</td>
              <td style="padding: 14px 20px; font-weight: 700; color: #f59e0b;">₹15,500 - ₹20,000</td>
            </tr>
            <tr style="background: rgba(255,255,255,0.04);">
              <td style="padding: 14px 20px; font-weight: 700; color: #ffffff;">SUV / Luxury Car (Creta, Fortuner, Harrier, Innova)</td>
              <td style="padding: 14px 20px; font-weight: 700; color: #f59e0b;">₹8,800 - ₹12,500</td>
              <td style="padding: 14px 20px; font-weight: 700; color: #f59e0b;">₹13,500 - ₹18,500</td>
              <td style="padding: 14px 20px; font-weight: 700; color: #f59e0b;">₹19,500 - ₹25,000</td>
            </tr>
          </tbody>
        </table>
      </div>

    </div>
  </section>

  <!-- Section 5: Contextual Internal Links -->
  <section style="padding: 70px 0; background: #0b132b; color: #ffffff;">
    <div class="container" style="max-width: 950px;">
      
      <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Related Service Hubs</span>
      <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin: 10px 0 20px 0;">
        Explore Dedicated Relocation Services in <span style="color: #f59e0b;">Hazaribagh</span>
      </h2>

      <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 16px; margin-bottom: 30px;">
        <div style="background: #101c40; padding: 18px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #ffffff; font-size: 1.1rem; margin-bottom: 8px;">Hazaribagh Car Transport Hub</h4>
          <p style="font-size: 0.9rem; color: #94a3b8; margin-bottom: 10px;">Dedicated enclosed car carrier services in Hazaribagh.</p>
          <a href="<?php echo SITE_URL; ?>pages/car-transportation-in-hazaribagh.php" title="Car Transportation in Hazaribagh →" style="color: #f59e0b; text-decoration: underline; font-weight: 600; font-size: 0.9rem;">
            Car Transportation in Hazaribagh →
          </a>
        </div>

        <div style="background: #101c40; padding: 18px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #ffffff; font-size: 1.1rem; margin-bottom: 8px;">Hazaribagh Bike Transport Hub</h4>
          <p style="font-size: 0.9rem; color: #94a3b8; margin-bottom: 10px;">Protected motorcycle packaging and shipping in Hazaribagh.</p>
          <a href="<?php echo SITE_URL; ?>pages/bike-transportation-in-hazaribagh.php" title="Bike Transportation in Hazaribagh →" style="color: #f59e0b; text-decoration: underline; font-weight: 600; font-size: 0.9rem;">
            Bike Transportation in Hazaribagh →
          </a>
        </div>

        <div style="background: #101c40; padding: 18px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #ffffff; font-size: 1.1rem; margin-bottom: 8px;">Main Hazaribagh Shifting Hub</h4>
          <p style="font-size: 0.9rem; color: #94a3b8; margin-bottom: 10px;">Full household packing and relocation services in Hazaribagh.</p>
          <a href="<?php echo SITE_URL; ?>packers-and-movers-in-hazaribagh" title="Packers and Movers in Hazaribagh →" style="color: #f59e0b; text-decoration: underline; font-weight: 600; font-size: 0.9rem;">
            Packers and Movers in Hazaribagh →
          </a>
        </div>

        <div style="background: #101c40; padding: 18px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #ffffff; font-size: 1.1rem; margin-bottom: 8px;">Office Relocation Hazaribagh</h4>
          <p style="font-size: 0.9rem; color: #94a3b8; margin-bottom: 10px;">Corporate office and IT infrastructure shifting in Hazaribagh.</p>
          <a href="<?php echo SITE_URL; ?>pages/office-relocation-services-in-hazaribagh.php" title="Office Relocation in Hazaribagh →" style="color: #f59e0b; text-decoration: underline; font-weight: 600; font-size: 0.9rem;">
            Office Relocation in Hazaribagh →
          </a>
        </div>
      </div>

    </div>
  </section>

  <!-- Section 6: Frequently Asked Questions (20 Detailed FAQs) -->
  <section style="padding: 70px 0; background: #070d1e; color: #ffffff;">
    <div class="container" style="max-width: 950px;">
      
      <div class="section-header text-center" style="margin-bottom: 45px;">
        <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Got Questions?</span>
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin-top: 10px;">
          Frequently Asked Questions About <span style="color: #f59e0b;">Hazaribagh Vehicle Transport</span>
        </h2>
      </div>

      <div style="display: flex; flex-direction: column; gap: 16px;">
        
        <?php foreach ($faq_list as $index => $faq): ?>
        <div style="background: #101c40; padding: 20px 24px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Q<?php echo ($index + 1); ?>: <?php echo htmlspecialchars($faq['q']); ?></h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.7;">
            <?php echo htmlspecialchars($faq['a']); ?>
          </p>
        </div>
        <?php endforeach; ?>

      </div>

    </div>
  </section>

  <!-- Section 7: Call To Action Banner -->
  <section class="cta-banner-section" style="padding: 70px 0; background: linear-gradient(135deg, #172a54 0%, #0b132b 100%); border-top: 1.5px solid rgba(245, 158, 11, 0.4); color: #ffffff;">
    <div class="container" style="max-width: 900px; text-align: center;">
      
      <span class="section-tag" style="background: rgba(245, 158, 11, 0.2); color: #f59e0b; padding: 6px 16px; border-radius: 20px; font-size: 0.85rem; font-weight: 700; text-transform: uppercase;">
        Book Hazaribagh Vehicle Carrier
      </span>

      <h2 style="font-size: 2.3rem; font-weight: 800; margin: 15px 0 15px 0; color: #ffffff;">
        Need Safe Car or Bike Shifting from <span style="color: #f59e0b;">Hazaribagh</span>?
      </h2>

      <p style="font-size: 1.05rem; color: #cbd5e1; max-width: 750px; margin: 0 auto 30px auto; line-height: 1.7;">
        Get an instant transparent estimate for zero-scratch car carrier shipping and 4-layer protected bike transportation from Hazaribagh with door delivery.
      </p>

      <div style="display: flex; gap: 15px; justify-content: center; flex-wrap: wrap; margin-bottom: 25px;">
        <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Now" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 30px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1.05rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
          <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call Now: <?php echo SITE_PHONE; ?>
        </a>
        <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20need%20a%20car/bike%20transport%20quote%20in%20Hazaribagh." title="Chat on WhatsApp" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 30px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1.05rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
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
  var extraMsg = form.querySelector('[name="message"]').value;
  
  var message = "Hello Shree Ashirwad Packers & Movers,\n\nI would like to request a Vehicle Transport Quote:\n- Name: " + name + "\n- Phone: " + phone + "\n- Pickup Location: " + moveFrom + "\n- Destination City: " + moveTo;
  
  if (extraMsg && extraMsg.trim() !== '') {
    message += "\n- Vehicle Details: " + extraMsg;
  }
  
  var whatsappUrl = "https://api.whatsapp.com/send?phone=918409531615&text=" + encodeURIComponent(message);
  window.location.href = whatsappUrl;
}
</script>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
