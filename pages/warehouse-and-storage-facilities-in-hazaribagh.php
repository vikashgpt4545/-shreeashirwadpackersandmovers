<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "Warehouse and Storage Facilities in Hazaribagh | Household & Commercial Storage";
$page_desc = "Secure warehouse and household storage facilities in Hazaribagh (JH-02). 24/7 CCTV surveillance, climate-controlled units, pest management, and flexible monthly plans for BSF Meru & local residents. Call 8409531615.";
$page_keywords = "warehouse and storage facilities in hazaribagh, household storage hazaribagh, luggage storage hazaribagh, luggage godown hazaribagh, commercial warehouse hazaribagh, BSF Meru storage, IBA approved warehouse hazaribagh, shree ashirwad storage";
$canonical_url = "https://shreeashirwadpackersandmovers.com/pages/warehouse-and-storage-facilities-in-hazaribagh.php";

$page_city = 'Hazaribagh';

$faq_list = [
    [
        'q' => 'What warehouse and storage services are available in Hazaribagh?',
        'a' => 'Shree Ashirwad Packers offers secure short-term and long-term storage facilities in Hazaribagh for household furniture, electronics, commercial goods, office archives, and vehicles. Our facilities feature 24/7 CCTV, elevated wooden pallet racks, and regular pest control.'
    ],
    [
        'q' => 'How much does monthly household storage cost in Hazaribagh?',
        'a' => 'Monthly household storage charges range from ₹2,000 to ₹3,500 for 1BHK volume, ₹3,500 to ₹6,000 for 2BHK volume, and ₹6,000 to ₹10,000 for 3BHK volume depending on square footage and storage duration.'
    ],
    [
        'q' => 'Is our goods safe from moisture and pest damage in your Hazaribagh warehouse?',
        'a' => 'Yes, all items are elevated off concrete floors using wooden pallets, wrapped in heavy moisture-proof stretch wrap, and stored in weatherproof units subject to monthly professional pest control treatments.'
    ],
    [
        'q' => 'How are items packed before being placed into warehouse storage?',
        'a' => 'We apply 5-to-7 layer protective packaging (bubble wrap, corrugated sheets, stretch wrap, edge guards) specifically engineered for long-duration storage to prevent dust accumulation and friction scratches.'
    ],
    [
        'q' => 'Can military personnel at BSF Meru Camp store goods during long deployments?',
        'a' => 'Yes, defense personnel frequently utilize our Hazaribagh storage facilities during multi-month deployments. We provide discounted long-term storage rates and official IBA-compliant bills for claim reimbursement.'
    ],
    [
        'q' => 'Is 24/7 security surveillance provided at the Hazaribagh warehouse?',
        'a' => 'Yes, our facility is equipped with continuous 24/7 HD CCTV camera recording, fire suppression systems, and round-the-clock physical security guards.'
    ],
    [
        'q' => 'What is the minimum storage duration option in Hazaribagh?',
        'a' => 'We offer flexible storage plans starting from 15 days up to multi-year contracts with prorated monthly billing.'
    ],
    [
        'q' => 'Can I store my car or motorcycle at your Hazaribagh storage facility?',
        'a' => 'Yes, we have covered vehicle storage bays for cars and two-wheelers with wheel chocks, dust covers, and periodic engine battery maintenance.'
    ],
    [
        'q' => 'Do I receive an itemized inventory list of stored items?',
        'a' => 'Yes, our warehouse supervisors generate a barcode-tagged inventory list during pickup. Each item is logged and signed for before placement into storage.'
    ],
    [
        'q' => 'Can I access or retrieve part of my stored household items before full contract completion?',
        'a' => 'Yes, clients can visit during operational warehouse hours with 24 hours prior notice to retrieve specific tagged boxes or items.'
    ],
    [
        'q' => 'Is transit and warehouse fire/burglary insurance available?',
        'a' => 'Yes, full warehouse storage insurance covering fire, flood, theft, and natural perils is available at nominal premium rates based on declared inventory value.'
    ],
    [
        'q' => 'How does the payment schedule work for long-term warehouse storage in Hazaribagh?',
        'a' => 'Initial payment covers pickup, packing, loading, and first month rent. Subsequent rent can be conveniently paid online monthly or quarterly.'
    ],
    [
        'q' => 'Are commercial goods and retail stock allowed in your Hazaribagh storage units?',
        'a' => 'Yes, we provide dedicated commercial storage bays for corporate archives, trade goods, raw materials, and promotional material.'
    ],
    [
        'q' => 'What items are strictly prohibited in the warehouse facility?',
        'a' => 'Perishable food items, hazardous chemicals, explosives, flammables, contraband, live animals, and illegal substances are strictly prohibited.'
    ],
    [
        'q' => 'Where is Shree Ashirwad’s primary storage facility located in Hazaribagh?',
        'a' => 'Our primary warehouse hub is conveniently situated near NH-33 bypass with easy heavy container truck access, serving Matwari, Korrah, Demotand, and BSF Meru Camp.'
    ],
    [
        'q' => 'Do you provide pickup and redelivery from our home to the warehouse?',
        'a' => 'Yes, our team handles end-to-end door-to-warehouse pickup and final doorstep delivery upon contract completion.'
    ],
    [
        'q' => 'What happens if I need to extend my storage period unexpectedly?',
        'a' => 'Storage extensions can be seamlessly renewed via WhatsApp or phone call without penalty by updating your monthly billing agreement.'
    ],
    [
        'q' => 'Are IBA-approved GST bills issued for warehouse storage expense claims?',
        'a' => 'Yes, we provide 100% official 18% GST invoices (SAC code 996729) accepted by central/state government departments and corporate HRs.'
    ],
    [
        'q' => 'How does weatherproofing protect wooden furniture during monsoon season in Hazaribagh?',
        'a' => 'Furniture is wrapped in breathable silica gel packs and airtight plastic shrink wraps to eliminate ambient humidity absorption and mold growth.'
    ],
    [
        'q' => 'How do I book a warehouse storage survey in Hazaribagh?',
        'a' => 'Call +91 8409531615 or submit our quick online form to schedule a free pre-storage volume assessment by our Senior Move Manager.'
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
            SECURE GOODS STORAGE HAZARIBAGH
          </span>
          <h1 style="font-size: 2.7rem; font-weight: 800; line-height: 1.2; margin-bottom: 20px; color: #ffffff;">
            Warehouse &amp; Storage <span style="color: #f59e0b;">Facilities in Hazaribagh</span>
          </h1>
          <p style="font-size: 1.12rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 25px;">
            Need safe, climate-controlled, short-term or long-term household and commercial goods storage in Hazaribagh? Shree Ashirwad Packers provides 24/7 CCTV guarded, fireproof, pest-managed warehouse facilities with elevated pallet racking, door-to-godown pickup, and 100% IBA-approved GST bills. Call 8409531615.
          </p>

          <div style="display: flex; gap: 15px; flex-wrap: wrap; margin-bottom: 30px;">
            <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Now" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
              <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call Now: <?php echo SITE_PHONE; ?>
            </a>
            <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20need%20Warehouse%20and%20Storage%20services%20in%20Hazaribagh." title="Chat on WhatsApp" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
              <i class="fab fa-whatsapp" style="margin-right: 8px;"></i> Book Storage on WhatsApp
            </a>
          </div>

          <div style="display: flex; gap: 20px; font-size: 0.9rem; color: #94a3b8;">
            <span><strong style="color: #f59e0b;">24/7 CCTV</strong> Surveillance</span>
            <span><strong style="color: #f59e0b;">Pest Controlled</strong> Bays</span>
            <span><strong style="color: #f59e0b;">IBA GST</strong> Claim Bills</span>
          </div>
        </div>

        <!-- Hero Lead Form Column -->
        <div class="hero-form-card" style="background: rgba(255, 255, 255, 0.05); backdrop-filter: blur(10px); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 16px; padding: 30px; box-shadow: 0 15px 35px rgba(0,0,0,0.4);">
          <h2 style="font-size: 1.4rem; color: #ffffff; margin-bottom: 8px; font-weight: 700; text-align: center;">Storage Plan Estimator</h2>
          <p style="font-size: 0.85rem; color: #94a3b8; text-align: center; margin-bottom: 20px;">Receive instant monthly storage rates on WhatsApp</p>

          <form action="#" method="POST" onsubmit="sendHeroWhatsAppLead(event, this);">
            <div style="margin-bottom: 14px;">
              <input type="text" name="name" class="form-control" placeholder="Your Full Name" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="margin-bottom: 14px;">
              <input type="tel" name="phone" class="form-control" placeholder="10-Digit Phone Number" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 10px; margin-bottom: 14px;">
              <input type="text" name="move_from" class="form-control" value="Hazaribagh Location" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
              <input type="text" name="move_to" class="form-control" placeholder="Duration (e.g. 3 Months)" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="margin-bottom: 16px;">
              <textarea name="message" class="form-control" rows="2" placeholder="Storage Items (e.g. 2BHK Household, Sofa, Bike)" style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;"></textarea>
            </div>
            <button type="submit" style="width: 100%; padding: 14px; background: linear-gradient(135deg, #d32f2f 0%, #f59e0b 100%); color: #ffffff; border: none; border-radius: 50px; font-weight: 700; font-size: 1rem; cursor: pointer;">
              Get Storage Tariff &rarr;
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
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b;">24/7</div>
          <div style="font-size: 0.9rem; color: #cbd5e1; margin-top: 5px;">HD CCTV &amp; Guarded</div>
        </div>
        <div style="padding: 20px; background: rgba(23, 42, 84, 0.5); border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b;">100%</div>
          <div style="font-size: 0.9rem; color: #cbd5e1; margin-top: 5px;">Moisture &amp; Pest Proof</div>
        </div>
        <div style="padding: 20px; background: rgba(23, 42, 84, 0.5); border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b;">Elevated</div>
          <div style="font-size: 0.9rem; color: #cbd5e1; margin-top: 5px;">Wooden Pallet Bays</div>
        </div>
        <div style="padding: 20px; background: rgba(23, 42, 84, 0.5); border-radius: 12px; border: 1.5px solid rgba(245, 158, 11, 0.2);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b;">Barcoded</div>
          <div style="font-size: 0.9rem; color: #cbd5e1; margin-top: 5px;">Itemized Inventory</div>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 3: Technical Overview & 6-Card Grid -->
  <section style="padding: 70px 0; background: #0b132b; color: #e2e8f0; line-height: 1.8;">
    <div class="container" style="max-width: 950px;">
      
      <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Storage Standard Protocols</span>
      <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin: 10px 0 20px 0;">
        State-of-the-Art Goods Warehouse in <span style="color: #f59e0b;">Hazaribagh</span>
      </h2>

      <p style="font-size: 1.05rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 20px;">
        Whether you are a BSF Meru defense officer going on deployment, a family waiting for new house possession in Matwari or Korrah, or a commercial enterprise seeking safe inventory storage, <strong>Shree Ashirwad Packers and Movers</strong> provides fully managed warehouse solutions in Hazaribagh (JH-02).
      </p>

      <p style="font-size: 1.05rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 20px;">
        Unlike informal godowns, our specialized warehouse facilities are designed to protect wooden furniture, electronic appliances, and confidential documents from dust, humidity, pest infestations, and unauthorized access.
      </p>

      <!-- 6 Cards Grid (3x2 Layout) -->
      <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px; margin: 35px 0;">
        
        <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px; box-shadow: 0 10px 25px rgba(0,0,0,0.3);">
          <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;"><i class="fas fa-video"></i></div>
          <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">1. 24/7 CCTV &amp; Guards</h3>
          <p style="font-size: 0.9rem; color: #cbd5e1; line-height: 1.6; margin: 0;">
            Continuous digital video recording with 30-day backup and round-the-clock physical security guards.
          </p>
        </div>

        <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px; box-shadow: 0 10px 25px rgba(0,0,0,0.3);">
          <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;"><i class="fas fa-pallet"></i></div>
          <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">2. Wooden Pallet Racking</h3>
          <p style="font-size: 0.9rem; color: #cbd5e1; line-height: 1.6; margin: 0;">
            All goods are kept elevated off raw concrete floors to eliminate ground moisture and capillary dampness.
          </p>
        </div>

        <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px; box-shadow: 0 10px 25px rgba(0,0,0,0.3);">
          <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;"><i class="fas fa-bug"></i></div>
          <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">3. Monthly Pest Control</h3>
          <p style="font-size: 0.9rem; color: #cbd5e1; line-height: 1.6; margin: 0;">
            Regular professional fumigation and pest management to safeguard wooden and textile assets.
          </p>
        </div>

        <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px; box-shadow: 0 10px 25px rgba(0,0,0,0.3);">
          <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;"><i class="fas fa-barcode"></i></div>
          <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">4. Barcode Tagging</h3>
          <p style="font-size: 0.9rem; color: #cbd5e1; line-height: 1.6; margin: 0;">
            Every single box and furniture unit is labeled with a unique inventory code for 100% item auditability.
          </p>
        </div>

        <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px; box-shadow: 0 10px 25px rgba(0,0,0,0.3);">
          <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;"><i class="fas fa-fire-extinguisher"></i></div>
          <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">5. Fire Protection</h3>
          <p style="font-size: 0.9rem; color: #cbd5e1; line-height: 1.6; margin: 0;">
            Commercial smoke detectors, overhead fire extinguishers, and strict zero-flammability protocols.
          </p>
        </div>

        <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px; box-shadow: 0 10px 25px rgba(0,0,0,0.3);">
          <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;"><i class="fas fa-file-invoice"></i></div>
          <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">6. IBA GST Invoice</h3>
          <p style="font-size: 0.9rem; color: #cbd5e1; line-height: 1.6; margin: 0;">
            Official 18% GST invoices (SAC 996729) compliant with government and bank relocation allowances.
          </p>
        </div>

      </div>

    </div>
  </section>

  <!-- Section 4: Storage Tariff Benchmark Table -->
  <section style="padding: 70px 0; background: #070d1e; color: #ffffff;">
    <div class="container" style="max-width: 950px;">
      
      <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Rate Card</span>
      <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin: 10px 0 20px 0;">
        Monthly Warehouse Storage Tariff in <span style="color: #f59e0b;">Hazaribagh</span>
      </h2>

      <div style="overflow-x: auto; margin-bottom: 30px;">
        <table style="width: 100%; border-collapse: collapse; background: #172a54; border-radius: 12px; overflow: hidden; border: 1px solid rgba(245, 158, 11, 0.3);">
          <thead>
            <tr style="background: linear-gradient(135deg, #1c2541 0%, #0b132b 100%); color: #f59e0b; text-align: left; font-size: 0.95rem;">
              <th style="padding: 16px 20px; border-bottom: 2px solid rgba(245, 158, 11, 0.4);">Storage Category</th>
              <th style="padding: 16px 20px; border-bottom: 2px solid rgba(245, 158, 11, 0.4);">Space Allocation</th>
              <th style="padding: 16px 20px; border-bottom: 2px solid rgba(245, 158, 11, 0.4);">Packaging Grade</th>
              <th style="padding: 16px 20px; border-bottom: 2px solid rgba(245, 158, 11, 0.4);">Monthly Rental Range</th>
            </tr>
          </thead>
          <tbody style="color: #cbd5e1; font-size: 0.9rem; line-height: 1.6;">
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.08);">
              <td style="padding: 14px 20px; font-weight: 700; color: #ffffff;">1 BHK Household Storage</td>
              <td style="padding: 14px 20px;">150 - 250 sq.ft.</td>
              <td style="padding: 14px 20px;">5-Layer Moisture Wrap</td>
              <td style="padding: 14px 20px; font-weight: 700; color: #f59e0b;">₹2,000 - ₹3,500 / month</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.08); background: rgba(255,255,255,0.02);">
              <td style="padding: 14px 20px; font-weight: 700; color: #ffffff;">2 BHK Household Storage</td>
              <td style="padding: 14px 20px;">300 - 450 sq.ft.</td>
              <td style="padding: 14px 20px;">7-Layer Heavy Duty Armor</td>
              <td style="padding: 14px 20px; font-weight: 700; color: #f59e0b;">₹3,500 - ₹6,000 / month</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.08);">
              <td style="padding: 14px 20px; font-weight: 700; color: #ffffff;">3 BHK Household Storage</td>
              <td style="padding: 14px 20px;">500 - 750 sq.ft.</td>
              <td style="padding: 14px 20px;">7-Layer + Custom Crating</td>
              <td style="padding: 14px 20px; font-weight: 700; color: #f59e0b;">₹6,000 - ₹10,000 / month</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.08); background: rgba(255,255,255,0.02);">
              <td style="padding: 14px 20px; font-weight: 700; color: #ffffff;">Bike / Two-Wheeler Storage</td>
              <td style="padding: 14px 20px;">Dedicated Bay</td>
              <td style="padding: 14px 20px;">4-Layer Body Wrap &amp; Cover</td>
              <td style="padding: 14px 20px; font-weight: 700; color: #f59e0b;">₹800 - ₹1,500 / month</td>
            </tr>
            <tr style="background: rgba(255,255,255,0.04);">
              <td style="padding: 14px 20px; font-weight: 700; color: #ffffff;">Commercial Inventory / Goods</td>
              <td style="padding: 14px 20px;">Custom Pallet Racks</td>
              <td style="padding: 14px 20px;">Stretch Wrapped Pallets</td>
              <td style="padding: 14px 20px; font-weight: 700; color: #f59e0b;">₹15 - ₹25 / sq.ft. / month</td>
            </tr>
          </tbody>
        </table>
      </div>

    </div>
  </section>

  <!-- Section 5: Contextual Internal Links -->
  <section style="padding: 70px 0; background: #0b132b; color: #ffffff;">
    <div class="container" style="max-width: 950px;">
      
      <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Related Service Guides</span>
      <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin: 10px 0 20px 0;">
        Explore Dedicated Relocation Hubs in <span style="color: #f59e0b;">Hazaribagh</span>
      </h2>

      <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 16px; margin-bottom: 30px;">
        <div style="background: #101c40; padding: 18px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #ffffff; font-size: 1.1rem; margin-bottom: 8px;">Main Hazaribagh Packers Hub</h4>
          <p style="font-size: 0.9rem; color: #94a3b8; margin-bottom: 10px;">Primary verified packing and shifting services hub in Hazaribagh.</p>
          <a href="<?php echo SITE_URL; ?>packers-and-movers-in-hazaribagh" title="Packers and Movers in Hazaribagh →" style="color: #f59e0b; text-decoration: underline; font-weight: 600; font-size: 0.9rem;">
            Packers and Movers in Hazaribagh →
          </a>
        </div>

        <div style="background: #101c40; padding: 18px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #ffffff; font-size: 1.1rem; margin-bottom: 8px;">IBA Approved Movers Hazaribagh</h4>
          <p style="font-size: 0.9rem; color: #94a3b8; margin-bottom: 10px;">100% claimable GST bill documentation for BSF Meru &amp; gov staff.</p>
          <a href="<?php echo SITE_URL; ?>pages/iba-approved-packers-and-movers-in-hazaribagh.php" title="IBA Approved Packers in Hazaribagh →" style="color: #f59e0b; text-decoration: underline; font-weight: 600; font-size: 0.9rem;">
            IBA Approved Packers in Hazaribagh →
          </a>
        </div>

        <div style="background: #101c40; padding: 18px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #ffffff; font-size: 1.1rem; margin-bottom: 8px;">Local vs Intercity Shifting Charges</h4>
          <p style="font-size: 0.9rem; color: #94a3b8; margin-bottom: 10px;">Detailed tariff breakdown for local moves and long-distance routes.</p>
          <a href="<?php echo SITE_URL; ?>pages/local-vs-intercity-shifting-charges-hazaribagh.php" title="Local vs Intercity Charges Hazaribagh →" style="color: #f59e0b; text-decoration: underline; font-weight: 600; font-size: 0.9rem;">
            Local vs Intercity Charges Hazaribagh →
          </a>
        </div>

        <div style="background: #101c40; padding: 18px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #ffffff; font-size: 1.1rem; margin-bottom: 8px;">Office Relocation Hazaribagh</h4>
          <p style="font-size: 0.9rem; color: #94a3b8; margin-bottom: 10px;">Commercial corporate shifting and IT equipment packing.</p>
          <a href="<?php echo SITE_URL; ?>pages/office-relocation-services-in-hazaribagh.php" title="Office Relocation Hazaribagh →" style="color: #f59e0b; text-decoration: underline; font-weight: 600; font-size: 0.9rem;">
            Office Relocation Hazaribagh →
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
          Frequently Asked Questions About <span style="color: #f59e0b;">Hazaribagh Storage</span>
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
        Book Safe Warehouse Storage
      </span>

      <h2 style="font-size: 2.3rem; font-weight: 800; margin: 15px 0 15px 0; color: #ffffff;">
        Need Secure Storage for Your Household Goods in <span style="color: #f59e0b;">Hazaribagh</span>?
      </h2>

      <p style="font-size: 1.05rem; color: #cbd5e1; max-width: 750px; margin: 0 auto 30px auto; line-height: 1.7;">
        Reserve your private CCTV-guarded warehouse bay today with door-to-godown pickup and 100% IBA GST claim support.
      </p>

      <div style="display: flex; gap: 15px; justify-content: center; flex-wrap: wrap; margin-bottom: 25px;">
        <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Now" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 30px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1.05rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
          <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call Now: <?php echo SITE_PHONE; ?>
        </a>
        <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20need%20Warehouse%20and%20Storage%20services%20in%20Hazaribagh." title="Chat on WhatsApp" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 30px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1.05rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
          <i class="fab fa-whatsapp" style="margin-right: 8px;"></i> Book Storage on WhatsApp
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
  
  var message = "Hello Shree Ashirwad Packers & Movers,\n\nI would like to request a Warehouse Storage Quote:\n- Name: " + name + "\n- Phone: " + phone + "\n- Pickup Location: " + moveFrom + "\n- Duration: " + moveTo;
  
  if (extraMsg && extraMsg.trim() !== '') {
    message += "\n- Storage Details: " + extraMsg;
  }
  
  var whatsappUrl = "https://api.whatsapp.com/send?phone=918409531615&text=" + encodeURIComponent(message);
  window.location.href = whatsappUrl;
}
</script>

<?php require_once __DIR__ . '/../includes/header.php'; ?>


