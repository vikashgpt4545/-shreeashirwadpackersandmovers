<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "Bike Transportation in Ranchi | Secure Shifting Jharkhand";
$page_desc = "Professional bike transportation in Ranchi, Jharkhand (JH-01). Secure door-to-door two-wheeler shifting across Lalpur, Harmu, Kanke Road, Main Road, Ratu Road, Bariatu & Doranda with 4-layer packaging and IBA GST bills. Call 8409531615.";
$page_keywords = "bike transportation in ranchi, best bike transportation in ranchi, affordable bike transportation in ranchi, packers and movers, top bike transportation in ranchi company, household shifting bike transportation in ranchi, doorstep bike transportation in ranchi, verified bike transportation in ranchi services, shree ashirwad bike transportation in ranchi";
$canonical_url = "https://shreeashirwadpackersandmovers.com/pages/bike-transportation-in-ranchi.php";

$faq_list = [
    [
        'q' => 'Why choose Shree Ashirwad Packers for bike transportation in Ranchi?',
        'a' => 'We provide 4-layer shockproof armor wrapping (EPE foam, bubble cushion, corrugated sheets, stretch film), doorstep pickup across all Ranchi neighborhoods (Lalpur, Harmu, Kanke Road, Doranda), enclosed container carriers, 100% IBA-compliant GST billing, and transit insurance.'
    ],
    [
        'q' => 'How much does bike shipping cost from Ranchi to major Indian cities?',
        'a' => 'Intercity bike transport rates from Ranchi start at ₹2,500 for scooters and commuter bikes (up to 400 km), ₹3,800 for sports bikes, and ₹5,000+ for heavy cruisers depending on distance.'
    ],
    [
        'q' => 'What is your 4-layer bike packaging protocol in Ranchi?',
        'a' => 'We apply: Layer 1: High-density EPE foam on mirrors & mudguards; Layer 2: Heavy-duty air-bubble cushion; Layer 3: Corrugated armor sheets around body panels; Layer 4: Waterproof stretch film lashing.'
    ],
    [
        'q' => 'Should I drain petrol from my motorcycle before shipping from Ranchi?',
        'a' => 'Yes, safety regulations mandate draining fuel tanks down to less than 1 liter to prevent volatile vapor ignition during long-haul highway transit along NH-33 / NH-75.'
    ],
    [
        'q' => 'Can state government, public sector, and IT professionals in Ranchi claim bike shifting expenses?',
        'a' => 'Yes, we provide 100% official 18% GST bills (SAC 996511), vehicle inspection receipts, LR consignment notes, and payment vouchers accepted by all government and corporate audit desks.'
    ],
    [
        'q' => 'What documents are required to ship a bike from Ranchi?',
        'a' => 'Required documents include a photocopy of the Vehicle RC (JH-01), valid insurance policy, photo ID proof (Aadhaar/PAN), and a signed vehicle condition checklist.'
    ],
    [
        'q' => 'Do you collect two-wheelers directly from homes across Ranchi?',
        'a' => 'Yes, we offer doorstep pickup across Lalpur, Harmu, Kanke Road, Main Road, Ratu Road, Bariatu, Doranda, Hinoo, Ashok Nagar, and Namkum.'
    ],
    [
        'q' => 'How are bikes secured inside the transport container in Ranchi?',
        'a' => 'Bikes are anchored upright using heavy-duty nylon ratcheting belts attached to container floor chassis rings, keeping the vehicle completely steady.'
    ],
    [
        'q' => 'How long does bike delivery take from Ranchi to Delhi, Mumbai, or Bangalore?',
        'a' => 'Transit to nearby cities like Patna or Kolkata takes 24 to 36 hours; delivery to Delhi, Bangalore, Hyderabad, or Mumbai takes 3 to 5 days.'
    ],
    [
        'q' => 'Can I send a helmet or bike accessories with the motorcycle from Ranchi?',
        'a' => 'Yes, one helmet and basic riding gear can be securely packed with the bike inside the corrugated wrapping at no extra charge.'
    ],
    [
        'q' => 'Is transit insurance included with bike transport from Ranchi?',
        'a' => 'Yes, optional full-value transit insurance is provided to safeguard your two-wheeler against physical damage, accidents, or transit risks.'
    ],
    [
        'q' => 'Do you transport scooty, electric scooters, and heavy cruisers in Ranchi?',
        'a' => 'Yes, we transport all two-wheeler types including Honda Activa, Ola/Ather EVs, Royal Enfield Bullet 350, and sports bikes.'
    ],
    [
        'q' => 'How can I track my bike during transit from Ranchi?',
        'a' => 'We provide real-time location updates via WhatsApp and phone through our central tracking desk until final doorstep delivery.'
    ],
    [
        'q' => 'What if my bike gets scratched during shifting from Ranchi?',
        'a' => 'Our 4-layer armor wrap guarantees zero scratch delivery. In the rare event of transit damage, our transit insurance ensures hassle-free claim settlement.'
    ],
    [
        'q' => 'What pre-checks are conducted before loading my bike in Ranchi?',
        'a' => 'Our driver conducts a joint inspection, logs existing scratches/dents, notes fuel levels, checks engine number/chassis number, and issues a signed checklist.'
    ],
    [
        'q' => 'Can I pay after my bike is delivered at the destination?',
        'a' => 'We require a nominal booking/pickup deposit, with the balance payable upon delivery before final vehicle offloading.'
    ],
    [
        'q' => 'Are there any extra charges for pickup from outlying Ranchi suburbs?',
        'a' => 'Pickup costs across Ranchi Municipal Corporation limits are included in the quote. Nominal local transport charges apply for far outlying rural villages.'
    ],
    [
        'q' => 'What payment options are accepted for Ranchi bike shifting?',
        'a' => 'We accept UPI (PhonePe, Google Pay, Paytm), Net Banking, credit/debit cards, and cash.'
    ],
    [
        'q' => 'Do you offer bike storage facilities in Ranchi if destination isn\'t ready?',
        'a' => 'Yes, safe short-term warehouse storage is available at our central Ranchi hub if you need delayed delivery.'
    ],
    [
        'q' => 'How do I book bike transportation in Ranchi today?',
        'a' => 'Call +91 8409531615 or submit your bike model and pickup/destination details in our WhatsApp lead form for an instant fixed quote.'
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
        <span class="breadcrumb-item"><a href="<?php echo SITE_URL; ?>packers-and-movers-in-ranchi" title="Ranchi">Ranchi</a></span>
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
            BIKE TRANSPORTATION RANCHI SPECIALISTS
          </span>
          <h1 style="font-size: 2.7rem; font-weight: 800; line-height: 1.2; margin-bottom: 20px; color: #ffffff;">
            Professional <span style="color: #f59e0b;">Bike Transportation in Ranchi</span>
          </h1>
          <p style="font-size: 1.12rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 25px;">
            Shree Ashirwad Packers and Movers offers safe two-wheeler transport in capital city Ranchi (JH-01). 4-layer shockproof armor packaging, doorstep pickup across Lalpur, Harmu, Kanke Road, Doranda &amp; Bariatu, 100% transit insurance, and IBA-approved GST bills. Call 8409531615.
          </p>

          <div style="display: flex; gap: 15px; flex-wrap: wrap; margin-bottom: 30px;">
            <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Now" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
              <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call Now: <?php echo SITE_PHONE; ?>
            </a>
            <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20need%20a%20bike%20transport%20quote%20in%20Ranchi." title="Chat on WhatsApp" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
              <i class="fab fa-whatsapp" style="margin-right: 8px;"></i> Chat on WhatsApp
            </a>
          </div>

          <div style="display: flex; gap: 20px; font-size: 0.9rem; color: #94a3b8;">
            <span><strong style="color: #f59e0b;">4-Layer Armor</strong> Wrap</span>
            <span><strong style="color: #f59e0b;">100% Insured</strong> Transit</span>
            <span><strong style="color: #f59e0b;">Doorstep</strong> Pickup &amp; Drop</span>
          </div>
        </div>

        <!-- Hero Lead Form Column -->
        <div class="hero-form-card" style="background: rgba(255, 255, 255, 0.05); backdrop-filter: blur(10px); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 16px; padding: 30px; box-shadow: 0 15px 35px rgba(0,0,0,0.4);">
          <h2 style="font-size: 1.4rem; color: #ffffff; margin-bottom: 8px; font-weight: 700; text-align: center;">Get Ranchi Bike Quote</h2>
          <p style="font-size: 0.85rem; color: #94a3b8; text-align: center; margin-bottom: 20px;">Receive transparent cost estimation on WhatsApp in 2 minutes</p>

          <form action="#" method="POST" onsubmit="sendHeroWhatsAppLead(event, this);">
            <div style="margin-bottom: 14px;">
              <input type="text" name="name" class="form-control" placeholder="Your Full Name" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="margin-bottom: 14px;">
              <input type="tel" name="phone" class="form-control" placeholder="10-Digit Phone Number" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 10px; margin-bottom: 14px;">
              <input type="text" name="move_from" class="form-control" value="Ranchi" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
              <input type="text" name="move_to" class="form-control" placeholder="Destination City" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="margin-bottom: 16px;">
              <textarea name="message" class="form-control" rows="2" placeholder="Bike Model (e.g., Splendor, Activa, Pulsar, Bullet 350)" style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;"></textarea>
            </div>
            <button type="submit" style="width: 100%; padding: 14px; background: linear-gradient(135deg, #d32f2f 0%, #f59e0b 100%); color: #ffffff; border: none; border-radius: 50px; font-weight: 700; font-size: 1rem; cursor: pointer;">
              Get Instant Bike Quote &rarr;
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
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">2,450+</div>
          <div style="font-size: 0.9rem; color: #cbd5e1; margin-top: 5px;">Ranchi Bikes Relocated</div>
        </div>
        <div style="padding: 20px; background: rgba(23, 42, 84, 0.5); border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">4-Layer</div>
          <div style="font-size: 0.9rem; color: #cbd5e1; margin-top: 5px;">Armor Bubble Packing</div>
        </div>
        <div style="padding: 20px; background: rgba(23, 42, 84, 0.5); border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">Zero-Scratch</div>
          <div style="font-size: 0.9rem; color: #cbd5e1; margin-top: 5px;">Chassis Belt Lock</div>
        </div>
        <div style="padding: 20px; background: rgba(23, 42, 84, 0.5); border-radius: 12px; border: 1.5px solid rgba(245, 158, 11, 0.2);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">IBA GST</div>
          <div style="font-size: 0.9rem; color: #cbd5e1; margin-top: 5px;">Claimable Ranchi Bills</div>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 3: Technical Overview & 6-Card Grid -->
  <section style="padding: 70px 0; background: #0b132b; color: #e2e8f0; line-height: 1.8;">
    <div class="container" style="max-width: 950px;">
      
      <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Capital City Two-Wheeler Logistics Hub</span>
      <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin: 10px 0 20px 0;">
        Professional Two-Wheeler Shifting in <span style="color: #f59e0b;">Ranchi (JH-01)</span>
      </h2>

      <p style="font-size: 1.05rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 20px;">
        As the capital city of Jharkhand, Ranchi is the primary hub for administrative, educational, IT, and medical professionals. Moving motorcycles and scooters safely from Ranchi across India requires multi-layer armor packaging and closed container transport to prevent damage during long-distance highway hauling.
      </p>

      <p style="font-size: 1.05rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 20px;">
        At <strong>Shree Ashirwad Packers and Movers</strong>, we provide door-to-door bike transportation across Lalpur, Harmu, Kanke Road, Main Road, Ratu Road, Bariatu, Doranda, Hinoo, Ashok Nagar, and Namkum with 4-layer shockproof packaging and full transit insurance protection.
      </p>

      <!-- 6 Cards Grid (3x2 Layout) -->
      <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px; margin: 35px 0;">
        
        <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px; box-shadow: 0 10px 25px rgba(0,0,0,0.3);">
          <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;"><i class="fas fa-box-open"></i></div>
          <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">4-Layer Armor Wrap</h3>
          <p style="font-size: 0.9rem; color: #cbd5e1; line-height: 1.6; margin: 0;">
            EPE foam, air bubble wrap, corrugated sheets, and stretch film protect handlebars, tank, and indicators.
          </p>
        </div>

        <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px; box-shadow: 0 10px 25px rgba(0,0,0,0.3);">
          <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;"><i class="fas fa-gas-pump"></i></div>
          <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">Safe Fuel Draining</h3>
          <p style="font-size: 0.9rem; color: #cbd5e1; line-height: 1.6; margin: 0;">
            Petrol tanks are drained down to safe levels (&lt; 1L) to prevent volatile vapor accumulation during long-distance highway hauling.
          </p>
        </div>

        <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px; box-shadow: 0 10px 25px rgba(0,0,0,0.3);">
          <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;"><i class="fas fa-motorcycle"></i></div>
          <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">Chassis Belt Lashing</h3>
          <p style="font-size: 0.9rem; color: #cbd5e1; line-height: 1.6; margin: 0;">
            Heavy-duty ratcheting straps bind your bike upright to closed container floor anchor points.
          </p>
        </div>

        <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px; box-shadow: 0 10px 25px rgba(0,0,0,0.3);">
          <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;"><i class="fas fa-file-invoice"></i></div>
          <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">100% IBA GST Bills</h3>
          <p style="font-size: 0.9rem; color: #cbd5e1; line-height: 1.6; margin: 0;">
            Official 18% GST invoices (SAC 996511), LR consignment notes, and inspection sheets for gov/corporate reimbursement.
          </p>
        </div>

        <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px; box-shadow: 0 10px 25px rgba(0,0,0,0.3);">
          <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;"><i class="fas fa-shield-alt"></i></div>
          <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">Full Transit Insurance</h3>
          <p style="font-size: 0.9rem; color: #cbd5e1; line-height: 1.6; margin: 0;">
            Complete insurance policy documentation protecting your bike against accidental risks or transit damage.
          </p>
        </div>

        <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px; box-shadow: 0 10px 25px rgba(0,0,0,0.3);">
          <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;"><i class="fas fa-home"></i></div>
          <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">Doorstep Ranchi Pickup</h3>
          <p style="font-size: 0.9rem; color: #cbd5e1; line-height: 1.6; margin: 0;">
            Direct door pickup across Lalpur, Harmu, Kanke Road, Doranda, Bariatu, Ashok Nagar, and Namkum.
          </p>
        </div>

      </div>

    </div>
  </section>

  <!-- Section 4: 4-Layer Motorcycle Armor Wrapping Protocol -->
  <section style="padding: 70px 0; background: #070d1e; color: #ffffff; border-top: 1px solid rgba(245, 158, 11, 0.15);">
    <div class="container" style="max-width: 950px;">
      
      <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Packaging Excellence</span>
      <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin: 10px 0 20px 0;">
        4-Layer Motorcycle Armor Packaging Protocol
      </h2>
      <p style="font-size: 1.05rem; color: #cbd5e1; line-height: 1.7; margin-bottom: 30px;">
        Our Ranchi two-wheeler packing team follows a rigid 4-step packaging process to guarantee scratch-free delivery:
      </p>

      <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 24px;">
        
        <div style="background: #101c40; padding: 25px; border-radius: 12px; border: 1.5px solid rgba(245, 158, 11, 0.25);">
          <div style="font-size: 1.3rem; font-weight: 800; color: #f59e0b; margin-bottom: 10px;">Layer 1: High-Density EPE Foam</div>
          <p style="font-size: 0.95rem; color: #cbd5e1; line-height: 1.7; margin: 0;">
            Applied to vulnerable components including rear-view mirrors, indicators, front fork mudguards, and exhaust shields.
          </p>
        </div>

        <div style="background: #101c40; padding: 25px; border-radius: 12px; border: 1.5px solid rgba(245, 158, 11, 0.25);">
          <div style="font-size: 1.3rem; font-weight: 800; color: #f59e0b; margin-bottom: 10px;">Layer 2: Heavy Air-Bubble Cushioning</div>
          <p style="font-size: 0.95rem; color: #cbd5e1; line-height: 1.7; margin: 0;">
            Thick air-bubble wrap encasing the fuel tank, side cowls, headlamp assembly, and speedometer console against impact.
          </p>
        </div>

        <div style="background: #101c40; padding: 25px; border-radius: 12px; border: 1.5px solid rgba(245, 158, 11, 0.25);">
          <div style="font-size: 1.3rem; font-weight: 800; color: #f59e0b; margin-bottom: 10px;">Layer 3: Heavy Corrugated Sheet Armor</div>
          <p style="font-size: 0.95rem; color: #cbd5e1; line-height: 1.7; margin: 0;">
            Custom-cut heavy-duty corrugated board sheets wrapped over outer body contours to deflect scrapes and external knocks.
          </p>
        </div>

        <div style="background: #101c40; padding: 25px; border-radius: 12px; border: 1.5px solid rgba(245, 158, 11, 0.25);">
          <div style="font-size: 1.3rem; font-weight: 800; color: #f59e0b; margin-bottom: 10px;">Layer 4: Waterproof Stretch Film Lashing</div>
          <p style="font-size: 0.95rem; color: #cbd5e1; line-height: 1.7; margin: 0;">
            High-grade stretch film seals all layers tightly, keeping moisture, highway dust, and rain water away from electrical wiring.
          </p>
        </div>

      </div>

    </div>
  </section>

  <!-- Section 5: Transparent Pricing Matrix Table -->
  <section style="padding: 70px 0; background: #0b132b; color: #ffffff;">
    <div class="container" style="max-width: 950px;">
      
      <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Transparent Bike Tariff</span>
      <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin: 10px 0 20px 0;">
        Estimated <span style="color: #f59e0b;">Bike Shipping Rates from Ranchi</span>
      </h2>
      <p style="font-size: 1.05rem; color: #cbd5e1; line-height: 1.7; margin-bottom: 25px;">
        Review baseline two-wheeler transportation rates from Ranchi to key destination distances:
      </p>

      <div style="overflow-x: auto; margin-bottom: 30px;">
        <table style="width: 100%; border-collapse: collapse; background: #172a54; border-radius: 12px; overflow: hidden; border: 1px solid rgba(245, 158, 11, 0.3);">
          <thead>
            <tr style="background: linear-gradient(135deg, #1c2541 0%, #0b132b 100%); color: #f59e0b; text-align: left; font-size: 0.95rem;">
              <th style="padding: 16px 20px; border-bottom: 2px solid rgba(245, 158, 11, 0.4);">Vehicle Category</th>
              <th style="padding: 16px 20px; border-bottom: 2px solid rgba(245, 158, 11, 0.4);">Short Distance (Up to 400 km)</th>
              <th style="padding: 16px 20px; border-bottom: 2px solid rgba(245, 158, 11, 0.4);">Medium Distance (500 - 1000 km)</th>
              <th style="padding: 16px 20px; border-bottom: 2px solid rgba(245, 158, 11, 0.4);">Long Distance (1000+ km)</th>
            </tr>
          </thead>
          <tbody style="color: #cbd5e1; font-size: 0.9rem; line-height: 1.6;">
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.08);">
              <td style="padding: 14px 20px; font-weight: 700; color: #ffffff;">Scooter / EV (Activa, Jupiter, Ola, Ather)</td>
              <td style="padding: 14px 20px; font-weight: 700; color: #f59e0b;">₹2,400 - ₹3,000</td>
              <td style="padding: 14px 20px; font-weight: 700; color: #f59e0b;">₹3,400 - ₹4,600</td>
              <td style="padding: 14px 20px; font-weight: 700; color: #f59e0b;">₹5,000 - ₹6,500</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.08); background: rgba(255,255,255,0.02);">
              <td style="padding: 14px 20px; font-weight: 700; color: #ffffff;">Commuter Bike (100cc - 150cc: Splendor, Pulsar, Shine)</td>
              <td style="padding: 14px 20px; font-weight: 700; color: #f59e0b;">₹2,600 - ₹3,400</td>
              <td style="padding: 14px 20px; font-weight: 700; color: #f59e0b;">₹3,800 - ₹5,000</td>
              <td style="padding: 14px 20px; font-weight: 700; color: #f59e0b;">₹5,500 - ₹7,200</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.08);">
              <td style="padding: 14px 20px; font-weight: 700; color: #ffffff;">Sports / Executive Bike (Apache, Duke, R15, FZ)</td>
              <td style="padding: 14px 20px; font-weight: 700; color: #f59e0b;">₹3,400 - ₹4,200</td>
              <td style="padding: 14px 20px; font-weight: 700; color: #f59e0b;">₹4,600 - ₹6,000</td>
              <td style="padding: 14px 20px; font-weight: 700; color: #f59e0b;">₹6,500 - ₹8,500</td>
            </tr>
            <tr style="background: rgba(255,255,255,0.04);">
              <td style="padding: 14px 20px; font-weight: 700; color: #ffffff;">Cruiser / Superbike (Bullet 350, Jawa, Dominar, RE Classic)</td>
              <td style="padding: 14px 20px; font-weight: 700; color: #f59e0b;">₹4,000 - ₹5,200</td>
              <td style="padding: 14px 20px; font-weight: 700; color: #f59e0b;">₹5,500 - ₹7,200</td>
              <td style="padding: 14px 20px; font-weight: 700; color: #f59e0b;">₹7,800 - ₹10,000</td>
            </tr>
          </tbody>
        </table>
      </div>

    </div>
  </section>

  <!-- Section 6: Contextual Links to Nearby Hubs -->
  <section style="padding: 70px 0; background: #070d1e; color: #ffffff;">
    <div class="container" style="max-width: 950px;">
      
      <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Capital Freight Network</span>
      <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin: 10px 0 20px 0;">
        Explore Nearby Relocation Hubs in <span style="color: #f59e0b;">Jharkhand</span>
      </h2>

      <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 16px; margin-bottom: 30px;">
        <div style="background: #101c40; padding: 18px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #ffffff; font-size: 1.1rem; margin-bottom: 8px;">Main Ranchi Hub</h4>
          <p style="font-size: 0.9rem; color: #94a3b8; margin-bottom: 10px;">Primary household &amp; vehicle relocation headquarters.</p>
          <a href="<?php echo SITE_URL; ?>packers-and-movers-in-ranchi" title="Packers and Movers in Ranchi →" style="color: #f59e0b; text-decoration: underline; font-weight: 600; font-size: 0.9rem;">
            Packers and Movers in Ranchi →
          </a>
        </div>

        <div style="background: #101c40; padding: 18px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #ffffff; font-size: 1.1rem; margin-bottom: 8px;">Ramgarh Bike Transport</h4>
          <p style="font-size: 0.9rem; color: #94a3b8; margin-bottom: 10px;">Military cantt &amp; mining belt bike transport.</p>
          <a href="<?php echo SITE_URL; ?>pages/bike-transportation-in-ramgarh.php" title="Bike Transportation in Ramgarh →" style="color: #f59e0b; text-decoration: underline; font-weight: 600; font-size: 0.9rem;">
            Bike Transportation in Ramgarh →
          </a>
        </div>

        <div style="background: #101c40; padding: 18px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #ffffff; font-size: 1.1rem; margin-bottom: 8px;">Khunti Bike Transport</h4>
          <p style="font-size: 0.9rem; color: #94a3b8; margin-bottom: 10px;">Southern Ranchi region motorcycle transport.</p>
          <a href="<?php echo SITE_URL; ?>pages/bike-transportation-in-khunti.php" title="Bike Transportation in Khunti →" style="color: #f59e0b; text-decoration: underline; font-weight: 600; font-size: 0.9rem;">
            Bike Transportation in Khunti →
          </a>
        </div>

        <div style="background: #101c40; padding: 18px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #ffffff; font-size: 1.1rem; margin-bottom: 8px;">Hazaribagh Car Transport</h4>
          <p style="font-size: 0.9rem; color: #94a3b8; margin-bottom: 10px;">Car carrier services in neighboring Hazaribagh.</p>
          <a href="<?php echo SITE_URL; ?>pages/car-transportation-in-hazaribagh.php" title="Car Transportation in Hazaribagh →" style="color: #f59e0b; text-decoration: underline; font-weight: 600; font-size: 0.9rem;">
            Car Transportation in Hazaribagh →
          </a>
        </div>
      </div>

    </div>
  </section>

  <!-- Section 7: Frequently Asked Questions (20 Detailed FAQs) -->
  <section style="padding: 70px 0; background: #0b132b; color: #ffffff;">
    <div class="container" style="max-width: 950px;">
      
      <div class="section-header text-center" style="margin-bottom: 45px;">
        <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Got Questions?</span>
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin-top: 10px;">
          Frequently Asked Questions About <span style="color: #f59e0b;">Bike Shipping in Ranchi</span>
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

  <!-- Section 8: Call To Action Banner -->
  <section class="cta-banner-section" style="padding: 70px 0; background: linear-gradient(135deg, #172a54 0%, #0b132b 100%); border-top: 1.5px solid rgba(245, 158, 11, 0.4); color: #ffffff;">
    <div class="container" style="max-width: 900px; text-align: center;">
      
      <span class="section-tag" style="background: rgba(245, 158, 11, 0.2); color: #f59e0b; padding: 6px 16px; border-radius: 20px; font-size: 0.85rem; font-weight: 700; text-transform: uppercase;">
        Book Ranchi Bike Transport
      </span>

      <h2 style="font-size: 2.3rem; font-weight: 800; margin: 15px 0 15px 0; color: #ffffff;">
        Need Professional Two-Wheeler Shifting from <span style="color: #f59e0b;">Ranchi</span>?
      </h2>

      <p style="font-size: 1.05rem; color: #cbd5e1; max-width: 750px; margin: 0 auto 30px auto; line-height: 1.7;">
        Contact our two-wheeler packing experts for an instant free quotation and enjoy 4-layer armor protected bike shipping with doorstep delivery.
      </p>

      <div style="display: flex; gap: 15px; justify-content: center; flex-wrap: wrap; margin-bottom: 25px;">
        <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Now" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 30px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1.05rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
          <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call Now: <?php echo SITE_PHONE; ?>
        </a>
        <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20need%20a%20bike%20transport%20quote%20in%20Ranchi." title="Chat on WhatsApp" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 30px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1.05rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
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
  
  var message = "Hello Shree Ashirwad Packers & Movers,\n\nI would like to request a Bike Transport Quote:\n- Name: " + name + "\n- Phone: " + phone + "\n- Pickup Location: " + moveFrom + "\n- Destination City: " + moveTo;
  
  if (extraMsg && extraMsg.trim() !== '') {
    message += "\n- Bike Details: " + extraMsg;
  }
  
  var whatsappUrl = "https://api.whatsapp.com/send?phone=918409531615&text=" + encodeURIComponent(message);
  window.location.href = whatsappUrl;
}
</script>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>

