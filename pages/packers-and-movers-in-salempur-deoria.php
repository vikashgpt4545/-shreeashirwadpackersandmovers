<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "Packers and Movers in Salempur Deoria | Safe Home Relocation";
$page_desc = "Top-rated packers and movers in Salempur, Deoria. Household shifting, vehicle transport, 7-layer bubble wrapping & 100% IBA approved GST bills. Call 8409531615.";
$page_keywords = "packers and movers in salempur deoria, house shifting salempur, movers and packers salempur, bike transport salempur, IBA approved packers deoria";
$canonical_url = "https://shreeashirwadpackersandmovers.com/packers-and-movers-in-salempur-deoria";

$page_city = "Salempur, Deoria, Uttar Pradesh";

$faq_list = [
    ['q' => 'What services are provided by packers and movers in Salempur Deoria?', 'a' => 'We provide full home relocation, office shifting, motorcycle and car transport, luggage shipping, 7-layer protective packaging, loading, unloading, and transit insurance.'],
    ['q' => 'What is the cost of house shifting in Salempur Deoria?', 'a' => 'Local shifting within Salempur starts between ₹3,500 and ₹11,000 based on goods volume (1BHK/2BHK/3BHK). Intercity move prices depend on distance and vehicle container size.'],
    ['q' => 'Do you provide IBA approved GST bills in Salempur?', 'a' => 'Yes, we provide 100% genuine IBA-approved GST bills, consignment Lorry Receipts (LR), and itemized inventory lists for corporate and government claims.'],
    ['q' => 'How are cars and bikes transported safely from Salempur?', 'a' => 'Vehicles are packed with heavy bubble wraps, corner pads, and loaded onto enclosed container trucks equipped with wheel locking straps and transit insurance.'],
    ['q' => 'Is doorstep packing and pickup available in Salempur Deoria?', 'a' => 'Yes, our trained moving team provides complete doorstep packing, loading, and transport across Salempur town and nearby areas.'],
    ['q' => 'How far in advance should I book shifting in Salempur?', 'a' => 'Booking 2 to 4 days before your planned moving date is recommended. Emergency same-day shifting options are also available.'],
    ['q' => 'Is transit insurance included with home relocation from Salempur?', 'a' => 'Yes, full transit insurance coverage (1.5% to 3% of declared value) is arranged to protect your household goods against highway damage.'],
    ['q' => 'What packing materials are used for fragile items in Salempur?', 'a' => 'We use 80-GSM bubble wraps, corrugated boxes, stretch film, foam corner protectors, and wooden crates for delicate items.'],
    ['q' => 'Can I track my container truck while moving from Salempur?', 'a' => 'Yes, all our transport trucks feature live GPS tracking, and our support team provides daily updates on WhatsApp.'],
    ['q' => 'How can I get an instant price quotation for Salempur shifting?', 'a' => 'Call +91 8409531615 or submit your moving details on our website lead form to get a quick written quotation on WhatsApp.']
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
        <span class="breadcrumb-item"><a href="<?php echo SITE_URL; ?>packers-and-movers-in-deoria" title="Deoria Packers">Deoria</a></span>
        <span class="breadcrumb-separator">/</span>
        <span class="breadcrumb-item active">Packers and Movers in Salempur Deoria</span>
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
            IBA Approved Packers &amp; Movers Salempur
          </span>
          <h1 style="font-size: 2.6rem; font-weight: 800; line-height: 1.2; margin-bottom: 20px; color: #ffffff;">
            Packers and Movers in <span style="color: #f59e0b;">Salempur Deoria</span>
          </h1>
          <p style="font-size: 1.05rem; color: #cbd5e1; line-height: 1.7; margin-bottom: 25px;">
            Shree Ashirwad Packers and Movers offers reliable home shifting, bike shipping, car transport, and office relocation in Salempur, Deoria. Features 7-layer bubble wrapping, enclosed container trucks, full transit insurance, and 100% IBA-approved GST bills.
          </p>

          <div style="display: flex; gap: 15px; flex-wrap: wrap; margin-bottom: 30px;">
            <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Now" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
              <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call Now: <?php echo SITE_PHONE; ?>
            </a>
            <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20information%20about%20shifting%20in%20Salempur%20Deoria." title="Chat on WhatsApp" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
              <i class="fab fa-whatsapp" style="margin-right: 8px;"></i> Chat on WhatsApp
            </a>
          </div>

          <div style="display: flex; gap: 20px; font-size: 0.9rem; color: #94a3b8;">
            <span><strong style="color: #f59e0b;">740+</strong> Relocations</span>
            <span><strong style="color: #f59e0b;">7-Layer</strong> Safety Packing</span>
            <span><strong style="color: #f59e0b;">100%</strong> IBA GST Bills</span>
          </div>
        </div>

        <!-- Hero Lead Form Column -->
        <div class="hero-form-card" style="background: rgba(255, 255, 255, 0.05); backdrop-filter: blur(10px); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 16px; padding: 30px; box-shadow: 0 15px 35px rgba(0,0,0,0.4);">
          <h2 style="font-size: 1.4rem; color: #ffffff; margin-bottom: 8px; font-weight: 700; text-align: center;">Get Instant Shifting Quote</h2>
          <p style="font-size: 0.85rem; color: #94a3b8; text-align: center; margin-bottom: 20px;">Get exact cost estimate on WhatsApp in 2 minutes</p>

          <form action="#" method="POST" onsubmit="sendHeroWhatsAppLead(event, this);">
            <div style="margin-bottom: 14px;">
              <input type="text" name="name" class="form-control" placeholder="Your Full Name" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="margin-bottom: 14px;">
              <input type="tel" name="phone" class="form-control" placeholder="10-Digit Phone / WhatsApp Number" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 10px; margin-bottom: 14px;">
              <input type="text" name="move_from" class="form-control" placeholder="Pickup (Salempur)" value="Salempur Deoria" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
              <input type="text" name="move_to" class="form-control" placeholder="Destination City" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="margin-bottom: 16px;">
              <textarea name="message" class="form-control" rows="2" placeholder="List items (e.g. 2BHK House, Bike, TV, Washing Machine)" style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;"></textarea>
            </div>
            <button type="submit" class="btn btn-primary" style="width: 100%; padding: 14px; font-weight: 700; font-size: 1rem; border-radius: 8px; background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%); border: none; color: #fff;">
              Get Free Quote on WhatsApp
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
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">740+</div>
          <div style="font-size: 0.9rem; color: #cbd5e1; margin-top: 5px;">Salempur Moves Completed</div>
        </div>
        <div style="padding: 20px; background: rgba(23, 42, 84, 0.5); border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">100%</div>
          <div style="font-size: 0.9rem; color: #cbd5e1; margin-top: 5px;">Safe Goods Transit Record</div>
        </div>
        <div style="padding: 20px; background: rgba(23, 42, 84, 0.5); border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">7-Layer</div>
          <div style="font-size: 0.9rem; color: #cbd5e1; margin-top: 5px;">Heavy Protective Packaging</div>
        </div>
        <div style="padding: 20px; background: rgba(23, 42, 84, 0.5); border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">IBA Approved</div>
          <div style="font-size: 0.9rem; color: #cbd5e1; margin-top: 5px;">Official GST Invoice Provider</div>
        </div>
      </div>
    </div>
  </section>

  <!-- 4. 6-Card Feature Grid (3x2 Layout) -->
  <section style="padding: 65px 0; background: #0b132b; color: #e2e8f0; line-height: 1.8;">
    <div class="container">
      
      <div style="max-width: 950px; margin: 0 auto;">
        <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Why We Are #1</span>
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin: 10px 0 20px 0;">
          Why Choose Us in <span style="color: #f59e0b;">Salempur Deoria</span>?
        </h2>

        <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px; margin: 30px 0;">
          
          <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px;">
            <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;"><i class="fas fa-truck"></i></div>
            <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">Enclosed Container Fleet</h3>
            <p style="font-size: 0.9rem; color: #cbd5e1; margin: 0;">
              Weatherproof steel container trucks ensure complete safety against dust, rain, and highway vibrations.
            </p>
          </div>

          <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px;">
            <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;"><i class="fas fa-boxes"></i></div>
            <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">7-Layer Safety Wrap</h3>
            <p style="font-size: 0.9rem; color: #cbd5e1; margin: 0;">
              80-GSM bubble wraps, corrugated sheets, and foam corner guards protect fragile glass and furniture.
            </p>
          </div>

          <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px;">
            <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;"><i class="fas fa-file-invoice-dollar"></i></div>
            <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">100% IBA GST Billing</h3>
            <p style="font-size: 0.9rem; color: #cbd5e1; margin: 0;">
              Genuine IBA approved consignment invoices for bank, government, defence, and corporate claim reimbursements.
            </p>
          </div>

          <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px;">
            <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;"><i class="fas fa-shield-alt"></i></div>
            <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">Full Transit Insurance</h3>
            <p style="font-size: 0.9rem; color: #cbd5e1; margin: 0;">
              Comprehensive transit insurance covers declared inventory against accidental damage or loss on highway routes.
            </p>
          </div>

          <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px;">
            <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;"><i class="fas fa-user-shield"></i></div>
            <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">Trained Loading Staff</h3>
            <p style="font-size: 0.9rem; color: #cbd5e1; margin: 0;">
              Verified, background-checked moving technicians handle heavy furniture and delicate electronics carefully.
            </p>
          </div>

          <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px;">
            <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;"><i class="fas fa-map-marked-alt"></i></div>
            <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">Live GPS Tracking</h3>
            <p style="font-size: 0.9rem; color: #cbd5e1; margin: 0;">
              Real-time GPS updates sent to your mobile phone throughout the intercity transit from Salempur.
            </p>
          </div>

        </div>

      </div>

    </div>
  </section>

  <!-- 5. Specialized Services Breakdown (6 Cards) -->
  <section style="padding: 60px 0; background: #070d1e; color: #ffffff;">
    <div class="container" style="max-width: 950px;">
      
      <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Service Spectrum</span>
      <h2 style="font-size: 2.1rem; font-weight: 800; color: #ffffff; margin: 10px 0 25px 0;">
        Specialized Shifting Services in <span style="color: #f59e0b;">Salempur Deoria</span>
      </h2>

      <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px;">
        <div style="background: #101c40; padding: 20px; border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #f59e0b; font-size: 1.05rem; margin-bottom: 8px;">Household Shifting</h4>
          <p style="font-size: 0.88rem; color: #cbd5e1; margin: 0;">Complete 1BHK, 2BHK, 3BHK home packing, loading, transport, and setup.</p>
        </div>

        <div style="background: #101c40; padding: 20px; border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #f59e0b; font-size: 1.05rem; margin-bottom: 8px;">Bike Transportation</h4>
          <p style="font-size: 0.88rem; color: #cbd5e1; margin: 0;">4-layer protective bubble packaging for motorcycles and scooters.</p>
        </div>

        <div style="background: #101c40; padding: 20px; border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #f59e0b; font-size: 1.05rem; margin-bottom: 8px;">Car Transportation</h4>
          <p style="font-size: 0.88rem; color: #cbd5e1; margin: 0;">Enclosed hydraulic car carrier trailers with wheel tie-down safety.</p>
        </div>

        <div style="background: #101c40; padding: 20px; border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #f59e0b; font-size: 1.05rem; margin-bottom: 8px;">Office Relocation</h4>
          <p style="font-size: 0.88rem; color: #cbd5e1; margin: 0;">Systematic packing of IT equipment, furniture, and office records.</p>
        </div>

        <div style="background: #101c40; padding: 20px; border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #f59e0b; font-size: 1.05rem; margin-bottom: 8px;">Luggage Parcel Service</h4>
          <p style="font-size: 0.88rem; color: #cbd5e1; margin: 0;">Part-load luggage, student bags, and small item transport service.</p>
        </div>

        <div style="background: #101c40; padding: 20px; border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #f59e0b; font-size: 1.05rem; margin-bottom: 8px;">Warehouse Storage</h4>
          <p style="font-size: 0.88rem; color: #cbd5e1; margin: 0;">24/7 CCTV monitored clean, pest-controlled storage facilities.</p>
        </div>
      </div>

    </div>
  </section>

  <!-- 6. 7-Layer Safety Packaging Framework -->
  <section style="padding: 60px 0; background: #0b132b; color: #ffffff;">
    <div class="container" style="max-width: 950px;">
      
      <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Packaging Excellence</span>
      <h2 style="font-size: 2.1rem; font-weight: 800; color: #ffffff; margin: 10px 0 25px 0;">
        Our 7-Layer Safety Packaging System
      </h2>

      <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 15px;">
        <div style="background: #172a54; padding: 18px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <div style="font-size: 0.8rem; color: #f59e0b; font-weight: 700;">LAYER 01</div>
          <h4 style="font-size: 0.95rem; color: #fff; margin: 4px 0;">Stretch Film Layer</h4>
          <p style="font-size: 0.82rem; color: #cbd5e1; margin: 0;">Initial moisture-proof and dust-proof thin barrier wrapping.</p>
        </div>

        <div style="background: #172a54; padding: 18px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <div style="font-size: 0.8rem; color: #f59e0b; font-weight: 700;">LAYER 02</div>
          <h4 style="font-size: 0.95rem; color: #fff; margin: 4px 0;">80-GSM Bubble Wrap</h4>
          <p style="font-size: 0.82rem; color: #cbd5e1; margin: 0;">High-density shock-absorbing air cushion wrapping for furniture.</p>
        </div>

        <div style="background: #172a54; padding: 18px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <div style="font-size: 0.8rem; color: #f59e0b; font-weight: 700;">LAYER 03</div>
          <h4 style="font-size: 0.95rem; color: #fff; margin: 4px 0;">Corrugated Sheet Casing</h4>
          <p style="font-size: 0.82rem; color: #cbd5e1; margin: 0;">Heavy cardboard sheet casing cut and fitted around wooden corners.</p>
        </div>

        <div style="background: #172a54; padding: 18px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <div style="font-size: 0.8rem; color: #f59e0b; font-weight: 700;">LAYER 04</div>
          <h4 style="font-size: 0.95rem; color: #fff; margin: 4px 0;">HDPE Outer Shield</h4>
          <p style="font-size: 0.82rem; color: #cbd5e1; margin: 0;">Waterproof woven outer layer securing sofa sets and mattress bags.</p>
        </div>

        <div style="background: #172a54; padding: 18px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <div style="font-size: 0.8rem; color: #f59e0b; font-weight: 700;">LAYER 05</div>
          <h4 style="font-size: 0.95rem; color: #fff; margin: 4px 0;">Foam Corner Protectors</h4>
          <p style="font-size: 0.82rem; color: #cbd5e1; margin: 0;">Thick L-shaped foam guards fitted to glass tables and cabinets.</p>
        </div>

        <div style="background: #172a54; padding: 18px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <div style="font-size: 0.8rem; color: #f59e0b; font-weight: 700;">LAYER 06</div>
          <h4 style="font-size: 0.95rem; color: #fff; margin: 4px 0;">Custom Wooden Crating</h4>
          <p style="font-size: 0.82rem; color: #cbd5e1; margin: 0;">Rigid wooden boxes for TV screens, mirrors, and glass artwork.</p>
        </div>

        <div style="background: #172a54; padding: 18px; border-radius: 10px; border-left: 4px solid #f59e0b; grid-column: span 2;">
          <div style="font-size: 0.8rem; color: #f59e0b; font-weight: 700;">LAYER 07</div>
          <h4 style="font-size: 0.95rem; color: #fff; margin: 4px 0;">Nylon Cargo Lashing Straps</h4>
          <p style="font-size: 0.82rem; color: #cbd5e1; margin: 0;">Industrial ratchet belts locking all items to container walls inside the truck.</p>
        </div>
      </div>

    </div>
  </section>

  <!-- 7. Origin Pickup Locality Grid -->
  <section style="padding: 60px 0; background: #070d1e; color: #ffffff;">
    <div class="container" style="max-width: 900px;">
      
      <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Deoria Regional Network</span>
      <h2 style="font-size: 2.1rem; font-weight: 800; color: #ffffff; margin: 10px 0 20px 0;">
        Serving Salempur &amp; Nearby <span style="color: #f59e0b;">Deoria Sectors</span>
      </h2>

      <p style="font-size: 1rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 20px;">
        We offer doorstep pickup and delivery across Salempur town and connecting hubs in Deoria district:
      </p>

      <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 16px; margin-bottom: 25px;">
        <div style="background: #101c40; padding: 18px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #ffffff; font-size: 1.05rem; margin-bottom: 6px;">Deoria Master Hub</h4>
          <p style="font-size: 0.88rem; color: #94a3b8; margin-bottom: 8px;">Main warehouse and dispatch headquarters in Deoria district.</p>
          <a href="<?php echo SITE_URL; ?>packers-and-movers-in-deoria" title="Packers Movers Deoria Hub →" style="color: #f59e0b; text-decoration: underline; font-weight: 600; font-size: 0.88rem;">
            Packers Movers Deoria Hub →
          </a>
        </div>

        <div style="background: #101c40; padding: 18px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #ffffff; font-size: 1.05rem; margin-bottom: 6px;">Salempur Town</h4>
          <p style="font-size: 0.88rem; color: #94a3b8; margin-bottom: 8px;">Doorstep home shifting service near Salempur railway station area.</p>
        </div>

        <div style="background: #101c40; padding: 18px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #ffffff; font-size: 1.05rem; margin-bottom: 6px;">Bhatpar Rani Sector</h4>
          <p style="font-size: 0.88rem; color: #94a3b8; margin-bottom: 8px;">House relocation and vehicle transport near Bhatpar Rani road.</p>
        </div>

        <div style="background: #101c40; padding: 18px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #ffffff; font-size: 1.05rem; margin-bottom: 6px;">Barhaj Sector</h4>
          <p style="font-size: 0.88rem; color: #94a3b8; margin-bottom: 8px;">Relocation and packing services near Barhaj riverside town.</p>
        </div>
      </div>

    </div>
  </section>

  <!-- 8. Intercity Route Network Grid -->
  <section style="padding: 60px 0; background: #0b132b; color: #ffffff;">
    <div class="container" style="max-width: 900px;">
      
      <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Major Transport Corridors</span>
      <h2 style="font-size: 2.1rem; font-weight: 800; color: #ffffff; margin: 10px 0 20px 0;">
        Popular Routes from <span style="color: #f59e0b;">Salempur Deoria</span>
      </h2>

      <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 16px; margin-bottom: 25px;">
        <div style="background: #172a54; padding: 18px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #ffffff; font-size: 1.05rem; margin-bottom: 6px;">Salempur to Gorakhpur / Lucknow</h4>
          <p style="font-size: 0.88rem; color: #94a3b8; margin-bottom: 8px;">Daily home shifting container trucks connecting to state capital.</p>
        </div>

        <div style="background: #172a54; padding: 18px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #ffffff; font-size: 1.05rem; margin-bottom: 6px;">Salempur to Delhi NCR</h4>
          <p style="font-size: 0.88rem; color: #94a3b8; margin-bottom: 8px;">Direct express relocation to Delhi, Noida, Gurgaon, &amp; Ghaziabad.</p>
        </div>

        <div style="background: #172a54; padding: 18px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #ffffff; font-size: 1.05rem; margin-bottom: 6px;">Salempur to Patna / Bihar</h4>
          <p style="font-size: 0.88rem; color: #94a3b8; margin-bottom: 8px;">Interstate shifting via Siwan and Gopalganj highway.</p>
        </div>

        <div style="background: #172a54; padding: 18px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #ffffff; font-size: 1.05rem; margin-bottom: 6px;">Salempur to Mumbai / Pune / South</h4>
          <p style="font-size: 0.88rem; color: #94a3b8; margin-bottom: 8px;">Long-distance sealed container truck service across India.</p>
        </div>
      </div>

    </div>
  </section>

  <!-- 9. IBA Approved GST Billing Documentation -->
  <section style="padding: 60px 0; background: #070d1e; color: #ffffff;">
    <div class="container" style="max-width: 900px;">
      
      <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Reimbursement Ready</span>
      <h2 style="font-size: 2.1rem; font-weight: 800; color: #ffffff; margin: 10px 0 20px 0;">
        IBA Approved GST Billing in Salempur Deoria
      </h2>

      <div style="background: #101c40; border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 12px; padding: 25px;">
        <h4 style="color: #f59e0b; font-size: 1.1rem; margin-bottom: 12px; font-weight: 700;">Complete 6-Piece Claim Document Bundle Provided:</h4>
        <ol style="margin: 0; padding-left: 20px; color: #cbd5e1; line-height: 1.8; font-size: 0.95rem;">
          <li><strong>Official GST Consignment Invoice</strong> with SAC code 9986 itemization.</li>
          <li><strong>Consignment Lorry Receipt (LR Copy)</strong> carrying driver details &amp; truck registration.</li>
          <li><strong>Itemized Household Inventory Packing List</strong> signed at loading time.</li>
          <li><strong>IBA Approved Stamp &amp; Registration Certificate</strong> on official letterhead.</li>
          <li><strong>Transit Insurance Policy Document</strong> covering declared inventory valuation.</li>
          <li><strong>Official Stamped Payment Receipt</strong> required for employer reimbursement claims.</li>
        </ol>
      </div>

    </div>
  </section>

  <!-- 10. FAQs with Valid JSON-LD FAQPage Schema -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "mainEntity": [
      <?php 
      $schema_items = [];
      foreach ($faq_list as $faq) {
          $schema_items[] = '{
            "@type": "Question",
            "name": ' . json_encode($faq['q']) . ',
            "acceptedAnswer": {
              "@type": "Answer",
              "text": ' . json_encode($faq['a']) . '
            }
          }';
      }
      echo implode(',', $schema_items);
      ?>
    ]
  }
  </script>

  <section style="padding: 60px 0; background: #0b132b; color: #ffffff;">
    <div class="container" style="max-width: 900px;">
      
      <div class="section-header text-center" style="margin-bottom: 40px;">
        <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Got Questions?</span>
        <h2 style="font-size: 2.1rem; font-weight: 800; color: #ffffff; margin-top: 10px;">
          Frequently Asked Questions About <span style="color: #f59e0b;">Salempur Shifting</span>
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

  <!-- 11. CTA Conversion Footer -->
  <section style="padding: 60px 0; background: linear-gradient(135deg, #172a54 0%, #0b132b 100%); border-top: 1.5px solid rgba(245, 158, 11, 0.4); color: #ffffff;">
    <div class="container" style="max-width: 900px; text-align: center;">
      
      <span class="section-tag" style="background: rgba(245, 158, 11, 0.2); color: #f59e0b; padding: 6px 16px; border-radius: 20px; font-size: 0.85rem; font-weight: 700; text-transform: uppercase;">
        Book Your Move Today
      </span>

      <h2 style="font-size: 2.2rem; font-weight: 800; margin: 15px 0 15px 0; color: #ffffff;">
        Planning a Move in <span style="color: #f59e0b;">Salempur Deoria</span>?
      </h2>

      <p style="font-size: 1.05rem; color: #cbd5e1; max-width: 750px; margin: 0 auto 30px auto; line-height: 1.7;">
        Get in touch with our Salempur team for transparent pricing, hassle-free packing, and 100% insured door-to-door delivery.
      </p>

      <div style="display: flex; gap: 15px; justify-content: center; flex-wrap: wrap;">
        <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Now" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 30px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1.05rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
          <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call Now: <?php echo SITE_PHONE; ?>
        </a>
        <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20a%20shifting%20quote%20for%20Salempur%20Deoria." title="Chat on WhatsApp" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 30px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1.05rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
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
  
  var message = "Hello Shree Ashirwad Packers & Movers,\n\nI would like to request a Shifting Quote for Salempur Deoria:\n- Name: " + name + "\n- Phone: " + phone + "\n- Moving From: " + moveFrom + "\n- Moving To: " + moveTo;
  
  if (extraMsg && extraMsg.trim() !== '') {
    message += "\n- Details: " + extraMsg;
  }
  
  var whatsappUrl = "https://api.whatsapp.com/send?phone=918409531615&text=" + encodeURIComponent(message);
  window.location.href = whatsappUrl;
}
</script>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
