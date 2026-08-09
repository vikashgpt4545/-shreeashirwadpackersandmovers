<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "Single Item Luggage Shifting Jamshedpur | Part Load | 8409531615";
$page_desc = "Professional Single Item & Luggage Shifting in Jamshedpur. Affordable part-load transport for sofas, beds, fridges, TVs, and student luggage. Call (+91) 8409531615.";
$page_keywords = "single item luggage shifting jamshedpur, part load home moving jamshedpur, single sofa bed fridge transport bistupur sakchi mango adityapur, student luggage courier jamshedpur";

$page_city = "Jamshedpur";

$faq_list = [
    ['q' => 'How are part-load charges calculated?', 'a' => 'Charges depend on item volume (cubic feet) and transport distance.'],
    ['q' => 'Will my single item be delivered directly to doorstep?', 'a' => 'Yes, complete doorstep pickup and doorstep delivery are provided.'],
    ['q' => 'How to book single item courier with Shree Ashirwad Packers?', 'a' => 'Call +91 8409531615 or message us on WhatsApp for instant quote booking.']
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
        <span class="breadcrumb-item"><a href="<?php echo SITE_URL; ?>packers-and-movers-in-jamshedpur" title="Jamshedpur">Jamshedpur</a></span>
        <span class="breadcrumb-separator">/</span>
        <span class="breadcrumb-item active">Single Item Luggage Shifting Jamshedpur</span>
      </div>
    </div>
  </div>


  <!-- Hero Section -->
  <section class="hero-section" style="background: linear-gradient(135deg, #0b132b 0%, #1c2541 100%); padding: 60px 0; color: #ffffff;">
    <div class="container">
      <div class="hero-grid" style="display: grid; grid-template-columns: 1.2fr 0.8fr; gap: 40px; align-items: center;">
        
        <div class="hero-text">
          <span class="section-tag" style="background: rgba(245, 158, 11, 0.15); color: #f59e0b; border: 1px solid rgba(245, 158, 11, 0.4); padding: 6px 16px; border-radius: 20px; font-size: 0.85rem; font-weight: 700; text-transform: uppercase; display: inline-block; margin-bottom: 15px;">
            Part-Load &amp; Luggage Logistics
          </span>
          <h1 style="font-size: 2.7rem; font-weight: 800; line-height: 1.2; margin-bottom: 20px; color: #ffffff;">
            Affordable <span style="color: #f59e0b;">Single Item &amp; Luggage Shifting Jamshedpur</span>
          </h1>
          <p style="font-size: 1.08rem; color: #cbd5e1; line-height: 1.7; margin-bottom: 25px;">
            Need to transport just a single sofa, double bed, refrigerator, LED TV, washing machine, or student luggage bags from Jamshedpur? Shree Ashirwad Packers offers cost-effective shared container part-load shifting with full door-to-door delivery across Bistupur, Sakchi, Mango, Adityapur, Telco, Sonari, and Kadma.
          </p>

          <div style="display: flex; gap: 15px; flex-wrap: wrap; margin-bottom: 30px;">
            <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Now:" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #d32f2f 0%, #f59e0b 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(211, 47, 47, 0.4);">
              <i class="fas fa-phone-alt"></i> Call Now: <?php echo SITE_PHONE; ?>
            </a>
            <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20need%20single%20item%20luggage%20shifting%20quote%20in%20Jamshedpur." title="Chat on WhatsApp" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
              <i class="fab fa-whatsapp"></i> Chat on WhatsApp
            </a>
          </div>
        </div>

        <div class="hero-form-card" style="background: rgba(255, 255, 255, 0.05); backdrop-filter: blur(10px); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 16px; padding: 30px; box-shadow: 0 15px 35px rgba(0,0,0,0.4);">
          <h2 style="font-size: 1.4rem; color: #ffffff; margin-bottom: 8px; font-weight: 700; text-align: center;">Get Part-Load Quote</h2>
          <p style="font-size: 0.85rem; color: #94a3b8; text-align: center; margin-bottom: 20px;">Receive low-cost parcel quote on WhatsApp in 2 minutes</p>

          <form action="#" method="POST" onsubmit="sendHeroWhatsAppLead(event, this);">
            <div style="margin-bottom: 14px;">
              <input type="text" name="name" class="form-control" placeholder="Your Full Name" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="margin-bottom: 14px;">
              <input type="tel" name="phone" class="form-control" placeholder="10-Digit Phone Number" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 10px; margin-bottom: 14px;">
              <input type="text" name="move_from" class="form-control" value="Jamshedpur" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
              <input type="text" name="move_to" class="form-control" placeholder="Destination City" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <button type="submit" style="width: 100%; padding: 14px; background: linear-gradient(135deg, #d32f2f 0%, #f59e0b 100%); color: #ffffff; border: none; border-radius: 50px; font-weight: 700; font-size: 1rem; cursor: pointer;">
              Get Instant Estimate Now ➔
            </button>
          </form>
        </div>

      </div>
    </div>
  </section>

  <!-- Specialized Single Item & Luggage Overview Box -->
  <section style="padding: 50px 0; background: linear-gradient(145deg, #0b132b 0%, #172a54 100%); border-bottom: 1px solid rgba(245, 158, 11, 0.3); color: #ffffff;">
    <div class="container" style="max-width: 950px;">
      <h3 style="color: #f59e0b; font-size: 1.4rem; font-weight: 700; margin-bottom: 14px;">Specialized Single Item &amp; Part-Load Luggage Shifting Jamshedpur</h3>
      <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.7; margin-bottom: 14px;">
        Transporting a single piece of furniture, a double-door refrigerator, a 65-inch LED TV, or a few student luggage trunks from Jamshedpur no longer requires paying for an entire dedicated moving truck. Shree Ashirwad Packers and Movers introduces budget-friendly <strong>single item luggage shifting in Jamshedpur</strong> utilizing our daily express shared container transport network connecting East Singhbhum to all major Indian cities.
      </p>
      <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.7; margin-bottom: 14px;">
        Our part-load parcel shifting services cover all residential and commercial localities across Jamshedpur, including Bistupur, Sakchi, Mango, Adityapur, Telco, Sonari, Kadma, Jugsalai, Golmuri, and Baridih. Whether you are a college student moving from XLRI Jamshedpur or NIT Jamshedpur, a working professional transferring jobs, or a family sending a single antique furniture piece to relatives, our service guarantees 100% safe doorstep pickup and doorstep delivery.
      </p>
      <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.7; margin-bottom: 14px;">
        Unlike unorganized luggage couriers, every single item handled by Shree Ashirwad Packers receives our signature 7-layer protective packaging—including heavy-duty air-bubble film, corrugated cardboard corner armor, poly-stretch film, and custom wooden box crating for glass and electronics. Each parcel is assigned a unique tracking consignment note (LR copy) backed by real-time satellite GPS truck monitoring.
      </p>
      <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.7; margin-bottom: 14px;">
        Our shared container trucks run daily schedules connecting Jamshedpur to Ranchi, Dhanbad, Bokaro, Kolkata, Patna, Bhubaneswar, Delhi NCR, Bangalore, Pune, and Mumbai. By consolidating multiple partial shipments into unified heavy transport vehicles, we drastically reduce transit costs while maintaining the highest level of security, handling care, and punctual delivery timelines.
      </p>
      <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.7; margin-bottom: 14px;">
        All part-load transactions are backed by official GST invoices, clear LR consignment bills, and dedicated customer support support representatives. We take away the hassle of hiring local tempos or negotiating with railway parcel offices by managing complete loading, lashing, transit, and door-step unloading at destination.
      </p>
      <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.7; margin: 0;">
        Experience seamless, low-cost part-load relocation with zero hidden charges. Review our single item rate charts, protective packaging standards, and booking procedure below.
      </p>
    </div>
  </section>

  <!-- Section 2: Stats -->
  <section style="padding: 35px 0; background: #070d19; border-bottom: 1px solid rgba(245, 158, 11, 0.2);">
    <div class="container">
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(160px, 1fr)); gap: 15px; text-align: center;">
        <div><h3 style="color: #f59e0b; font-size: 2rem; font-weight: 800;">Shared</h3><p style="color: #cbd5e1; font-size: 0.85rem;">Low-Cost Part Load Rates</p></div>
        <div><h3 style="color: #f59e0b; font-size: 2rem; font-weight: 800;">100%</h3><p style="color: #cbd5e1; font-size: 0.85rem;">Doorstep Pickup &amp; Delivery</p></div>
        <div><h3 style="color: #f59e0b; font-size: 2rem; font-weight: 800;">7-Layer</h3><p style="color: #cbd5e1; font-size: 0.85rem;">Bubble Film Cushioning</p></div>
        <div><h3 style="color: #f59e0b; font-size: 2rem; font-weight: 800;">GPS</h3><p style="color: #cbd5e1; font-size: 0.85rem;">Real-Time Truck Tracking</p></div>
        <div><h3 style="color: #f59e0b; font-size: 2rem; font-weight: 800;">Express</h3><p style="color: #cbd5e1; font-size: 0.85rem;">Daily Highway Containers</p></div>
        <div><h3 style="color: #f59e0b; font-size: 2rem; font-weight: 800;">LR Bill</h3><p style="color: #cbd5e1; font-size: 0.85rem;">Official Consignment Receipt</p></div>
      </div>
    </div>
  </section>

  <!-- Section 3: 6-Card Feature Grid -->
  <section style="padding: 60px 0; background: #ffffff;">
    <div class="container">
      <div style="text-align: center; max-width: 800px; margin: 0 auto 40px auto;">
        <span style="color: #d32f2f; font-weight: 700; text-transform: uppercase; font-size: 0.85rem;">Part-Load Capabilities</span>
        <h2 style="font-size: 2.1rem; color: #0b132b; font-weight: 800; margin-top: 5px;">
          Single Item &amp; Luggage Features in <span style="color: #d32f2f;">Jamshedpur</span>
        </h2>
        <p style="color: #64748b; font-size: 0.98rem; margin-top: 8px;">
          Tailored logistics options ensuring economical, safe, and swift transit for individual household items and personal baggage.
        </p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 25px; margin-bottom: 40px;">
        <div style="background: #f8fafc; padding: 25px; border-radius: 12px; border-top: 4px solid #d32f2f; box-shadow: 0 4px 15px rgba(0,0,0,0.05);">
          <h3 style="font-size: 1.15rem; color: #0b132b; margin-bottom: 8px; font-weight: 700;">Single Furniture Shifting</h3>
          <p style="color: #64748b; font-size: 0.9rem; line-height: 1.6;">Safe transport for individual king/queen beds, 3-seater sofas, dining tables, wooden wardrobes, and executive study desks.</p>
        </div>
        <div style="background: #f8fafc; padding: 25px; border-radius: 12px; border-top: 4px solid #f59e0b; box-shadow: 0 4px 15px rgba(0,0,0,0.05);">
          <h3 style="font-size: 1.15rem; color: #0b132b; margin-bottom: 8px; font-weight: 700;">Home Appliance Moving</h3>
          <p style="color: #64748b; font-size: 0.9rem; line-height: 1.6;">Dedicated bubble wrap and corrugated armor for double-door refrigerators, front-load washing machines, and microwave ovens.</p>
        </div>
        <div style="background: #f8fafc; padding: 25px; border-radius: 12px; border-top: 4px solid #d32f2f; box-shadow: 0 4px 15px rgba(0,0,0,0.05);">
          <h3 style="font-size: 1.15rem; color: #0b132b; margin-bottom: 8px; font-weight: 700;">Student &amp; Hostel Luggage Courier</h3>
          <p style="color: #64748b; font-size: 0.9rem; line-height: 1.6;">Budget-friendly luggage baggage parcel service for XLRI, NIT, and Arka Jain University students moving back home or to new job cities.</p>
        </div>
        <div style="background: #f8fafc; padding: 25px; border-radius: 12px; border-top: 4px solid #f59e0b; box-shadow: 0 4px 15px rgba(0,0,0,0.05);">
          <h3 style="font-size: 1.15rem; color: #0b132b; margin-bottom: 8px; font-weight: 700;">LED TV &amp; Electronics Crate Care</h3>
          <p style="color: #64748b; font-size: 0.9rem; line-height: 1.6;">On-site custom wooden crate box construction with foam corner guards for 55+ inch OLED/LED smart televisions and audio systems.</p>
        </div>
        <div style="background: #f8fafc; padding: 25px; border-radius: 12px; border-top: 4px solid #d32f2f; box-shadow: 0 4px 15px rgba(0,0,0,0.05);">
          <h3 style="font-size: 1.15rem; color: #0b132b; margin-bottom: 8px; font-weight: 700;">Shared Container Space Sharing</h3>
          <p style="color: #64748b; font-size: 0.9rem; line-height: 1.6;">Pay strictly for the volume (cubic feet) your item occupies in our shared daily container truck, saving up to 70% compared to full truck rental.</p>
        </div>
        <div style="background: #f8fafc; padding: 25px; border-radius: 12px; border-top: 4px solid #f59e0b; box-shadow: 0 4px 15px rgba(0,0,0,0.05);">
          <h3 style="font-size: 1.15rem; color: #0b132b; margin-bottom: 8px; font-weight: 700;">Doorstep Pick &amp; Drop Delivery</h3>
          <p style="color: #64748b; font-size: 0.9rem; line-height: 1.6;">Our loading team arrives at your Jamshedpur apartment, packs the item, loads it into the feeder vehicle, and delivers to the receiver's address.</p>
        </div>
      </div>

      <!-- Specialized Part-Load Categories Grid -->
      <div style="margin-bottom: 40px; background: linear-gradient(135deg, #070d19 0%, #172a54 100%); padding: 30px; border-radius: 16px; border: 1px solid rgba(245, 158, 11, 0.3); color: #ffffff;">
        <h3 style="color: #f59e0b; font-size: 1.4rem; font-weight: 800; text-align: center; margin-bottom: 20px;">
          Item Specific Packing &amp; Transport Protocols
        </h3>
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 20px;">
          <div style="background: rgba(255,255,255,0.04); padding: 18px; border-radius: 10px; border-left: 4px solid #d32f2f;">
            <h4 style="color: #ffffff; font-size: 1.05rem; margin: 0 0 6px 0;">Heavy Double Beds &amp; Wardrobes</h4>
            <p style="color: #cbd5e1; font-size: 0.88rem; line-height: 1.6; margin: 0;">Disassembled systematically by our carpenters, hardware stored in labeled pouches, wood panels bubble wrapped and edge guarded.</p>
          </div>
          <div style="background: rgba(255,255,255,0.04); padding: 18px; border-radius: 10px; border-left: 4px solid #f59e0b;">
            <h4 style="color: #ffffff; font-size: 1.05rem; margin: 0 0 6px 0;">Single / Double Door Refrigerators</h4>
            <p style="color: #cbd5e1; font-size: 0.88rem; line-height: 1.6; margin: 0;">Internal glass shelves padded with foam, compressor secured upright during transport, and body covered in 5-ply corrugated sheets.</p>
          </div>
          <div style="background: rgba(255,255,255,0.04); padding: 18px; border-radius: 10px; border-left: 4px solid #d32f2f;">
            <h4 style="color: #ffffff; font-size: 1.05rem; margin: 0 0 6px 0;">Sofa Sets &amp; Recliners</h4>
            <p style="color: #cbd5e1; font-size: 0.88rem; line-height: 1.6; margin: 0;">Wrapped in thick stretch film to prevent dirt accumulation, followed by heavy quilted blanket cushioning against truck container side-walls.</p>
          </div>
          <div style="background: rgba(255,255,255,0.04); padding: 18px; border-radius: 10px; border-left: 4px solid #f59e0b;">
            <h4 style="color: #ffffff; font-size: 1.05rem; margin: 0 0 6px 0;">Student Baggage &amp; Luggage Trunks</h4>
            <p style="color: #cbd5e1; font-size: 0.88rem; line-height: 1.6; margin: 0;">Suitcases and carton boxes sealed with heavy-duty waterproof tape, labeled with destination barcode tags, and loaded on upper decks.</p>
          </div>
        </div>
      </div>

      <!-- 7-Layer Protective Packaging Standards -->
      <div style="background: #070d19; padding: 35px; border-radius: 16px; border: 1px solid rgba(245, 158, 11, 0.3); color: #ffffff; margin-bottom: 40px;">
        <h3 style="color: #f59e0b; font-size: 1.5rem; font-weight: 800; text-align: center; margin-bottom: 20px;">
          7-Layer Part-Load Safety Packaging Standard
        </h3>
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 15px;">
          <div style="background: rgba(255,255,255,0.03); padding: 16px; border-radius: 8px; border-left: 4px solid #f59e0b;"><h4 style="color: #f59e0b; margin-bottom: 4px; font-size: 0.98rem;">Layer 1: Poly-Stretch Film Dust Protection</h4><p style="color: #cbd5e1; font-size: 0.85rem; line-height: 1.5; margin: 0;">Seals fabric, leather, and wood surfaces against dust, moisture, and fingerprints.</p></div>
          <div style="background: rgba(255,255,255,0.03); padding: 16px; border-radius: 8px; border-left: 4px solid #f59e0b;"><h4 style="color: #f59e0b; margin-bottom: 4px; font-size: 0.98rem;">Layer 2: Air-Bubble Cushioning Wrap</h4><p style="color: #cbd5e1; font-size: 0.85rem; line-height: 1.5; margin: 0;">Heavy air-bubble wrap shielding appliance bodies, glass mirrors, and polished surfaces.</p></div>
          <div style="background: rgba(255,255,255,0.03); padding: 16px; border-radius: 8px; border-left: 4px solid #f59e0b;"><h4 style="color: #f59e0b; margin-bottom: 4px; font-size: 0.98rem;">Layer 3: 5-Ply Corrugated Cardboard Armor</h4><p style="color: #cbd5e1; font-size: 0.85rem; line-height: 1.5; margin: 0;">Rigid outer cardboard sheets wrapped around fridge sides, washing machines, and beds.</p></div>
          <div style="background: rgba(255,255,255,0.03); padding: 16px; border-radius: 8px; border-left: 4px solid #f59e0b;"><h4 style="color: #f59e0b; margin-bottom: 4px; font-size: 0.98rem;">Layer 4: High-Density Foam Corner Guards</h4><p style="color: #cbd5e1; font-size: 0.85rem; line-height: 1.5; margin: 0;">L-shaped rigid foam buffers protecting sharp wooden corners and glass edges.</p></div>
          <div style="background: rgba(255,255,255,0.03); padding: 16px; border-radius: 8px; border-left: 4px solid #f59e0b;"><h4 style="color: #f59e0b; margin-bottom: 4px; font-size: 0.98rem;">Layer 5: Custom Wooden Crate Box Framing</h4><p style="color: #cbd5e1; font-size: 0.85rem; line-height: 1.5; margin: 0;">On-site timber crating built for smart TVs, glass top tables, and delicate marble pieces.</p></div>
          <div style="background: rgba(255,255,255,0.03); padding: 16px; border-radius: 8px; border-left: 4px solid #f59e0b;"><h4 style="color: #f59e0b; margin-bottom: 4px; font-size: 0.98rem;">Layer 6: Industrial Nylon Tie-Down Belts</h4><p style="color: #cbd5e1; font-size: 0.85rem; line-height: 1.5; margin: 0;">Ratcheted cargo belts anchoring your single item securely to the container wall.</p></div>
          <div style="background: rgba(255,255,255,0.03); padding: 16px; border-radius: 8px; border-left: 4px solid #f59e0b;"><h4 style="color: #f59e0b; margin-bottom: 4px; font-size: 0.98rem;">Layer 7: Consignment Barcode LR Tagging</h4><p style="color: #cbd5e1; font-size: 0.85rem; line-height: 1.5; margin: 0;">High-visibility barcode tagging ensuring your single parcel is never misplaced in transit.</p></div>
        </div>
      </div>
    </div>
  </section>

  <!-- Part-Load Pricing Matrix Section -->
  <section style="padding: 60px 0; background: #0b132b; color: #ffffff;">
    <div class="container" style="max-width: 950px;">
      <div style="text-align: center; margin-bottom: 40px;">
        <span style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Single Item Rate Guide</span>
        <h2 style="font-size: 2.1rem; font-weight: 800; color: #ffffff; margin-top: 8px;">
          Single Item &amp; Luggage Shifting Cost Estimates
        </h2>
        <p style="color: #cbd5e1; font-size: 0.95rem; margin-top: 8px;">
          Transparent, volume-based pricing for part-load shipping from Jamshedpur to major Indian cities.
        </p>
      </div>

      <!-- Pricing Table Box -->
      <div style="background: rgba(255,255,255,0.04); border: 1px solid rgba(245,158,11,0.25); border-radius: 12px; padding: 25px; margin-bottom: 35px;">
        <h3 style="color: #f59e0b; font-size: 1.25rem; font-weight: 700; margin-bottom: 16px;">Estimated Part-Load Price Matrix</h3>
        <div style="overflow-x: auto;">
          <table style="width: 100%; border-collapse: collapse; color: #cbd5e1; font-size: 0.9rem;">
            <thead>
              <tr style="background: rgba(245,158,11,0.15); color: #f59e0b; text-align: left;">
                <th style="padding: 12px; border: 1px solid rgba(245,158,11,0.3);">Item / Parcel Type</th>
                <th style="padding: 12px; border: 1px solid rgba(245,158,11,0.3);">Local (Within Jamshedpur)</th>
                <th style="padding: 12px; border: 1px solid rgba(245,158,11,0.3);">Intercity (Up to 500 KM)</th>
                <th style="padding: 12px; border: 1px solid rgba(245,158,11,0.3);">Intercity (500+ KM Metro)</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td style="padding: 10px; border: 1px solid rgba(255,255,255,0.1);">Single Bed / Mattress</td>
                <td style="padding: 10px; border: 1px solid rgba(255,255,255,0.1);">₹1,200 - ₹2,000</td>
                <td style="padding: 10px; border: 1px solid rgba(255,255,255,0.1);">₹3,000 - ₹5,000</td>
                <td style="padding: 10px; border: 1px solid rgba(255,255,255,0.1);">₹5,000 - ₹8,500</td>
              </tr>
              <tr style="background: rgba(255,255,255,0.02);">
                <td style="padding: 10px; border: 1px solid rgba(255,255,255,0.1);">3-Seater Sofa / Recliner</td>
                <td style="padding: 10px; border: 1px solid rgba(255,255,255,0.1);">₹1,500 - ₹2,500</td>
                <td style="padding: 10px; border: 1px solid rgba(255,255,255,0.1);">₹3,500 - ₹6,000</td>
                <td style="padding: 10px; border: 1px solid rgba(255,255,255,0.1);">₹6,000 - ₹9,500</td>
              </tr>
              <tr>
                <td style="padding: 10px; border: 1px solid rgba(255,255,255,0.1);">Single / Double Door Refrigerator</td>
                <td style="padding: 10px; border: 1px solid rgba(255,255,255,0.1);">₹1,000 - ₹1,800</td>
                <td style="padding: 10px; border: 1px solid rgba(255,255,255,0.1);">₹2,800 - ₹4,500</td>
                <td style="padding: 10px; border: 1px solid rgba(255,255,255,0.1);">₹4,500 - ₹7,500</td>
              </tr>
              <tr style="background: rgba(255,255,255,0.02);">
                <td style="padding: 10px; border: 1px solid rgba(255,255,255,0.1);">Washing Machine (Front/Top)</td>
                <td style="padding: 10px; border: 1px solid rgba(255,255,255,0.1);">₹800 - ₹1,500</td>
                <td style="padding: 10px; border: 1px solid rgba(255,255,255,0.1);">₹2,200 - ₹3,800</td>
                <td style="padding: 10px; border: 1px solid rgba(255,255,255,0.1);">₹3,800 - ₹6,000</td>
              </tr>
              <tr>
                <td style="padding: 10px; border: 1px solid rgba(255,255,255,0.1);">55"+ LED TV with Wooden Crate</td>
                <td style="padding: 10px; border: 1px solid rgba(255,255,255,0.1);">₹1,200 - ₹2,200</td>
                <td style="padding: 10px; border: 1px solid rgba(255,255,255,0.1);">₹3,000 - ₹5,500</td>
                <td style="padding: 10px; border: 1px solid rgba(255,255,255,0.1);">₹5,500 - ₹8,000</td>
              </tr>
              <tr style="background: rgba(255,255,255,0.02);">
                <td style="padding: 10px; border: 1px solid rgba(255,255,255,0.1);">Student Luggage (2 - 4 Cartons)</td>
                <td style="padding: 10px; border: 1px solid rgba(255,255,255,0.1);">₹800 - ₹1,400</td>
                <td style="padding: 10px; border: 1px solid rgba(255,255,255,0.1);">₹1,800 - ₹3,200</td>
                <td style="padding: 10px; border: 1px solid rgba(255,255,255,0.1);">₹3,200 - ₹5,000</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

      <!-- Detail Guide Grid -->
      <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 25px;">
        <div style="background: rgba(255,255,255,0.04); border: 1px solid rgba(245,158,11,0.2); padding: 22px; border-radius: 10px;">
          <h4 style="color: #f59e0b; font-size: 1.1rem; margin-bottom: 10px;">Part-Load Space Optimization</h4>
          <p style="color: #cbd5e1; font-size: 0.9rem; line-height: 1.6; margin: 0;">
            Our logistics coordinators calculate exact cubic feet volume so you only pay for the specific space consumed, eliminating full-truck rental burdens for small shipments.
          </p>
        </div>
        <div style="background: rgba(255,255,255,0.04); border: 1px solid rgba(245,158,11,0.2); padding: 22px; border-radius: 10px;">
          <h4 style="color: #f59e0b; font-size: 1.1rem; margin-bottom: 10px;">Consignment LR Copy Receipt</h4>
          <p style="color: #cbd5e1; font-size: 0.9rem; line-height: 1.6; margin: 0;">
            Every single item parcel receives a stamped official Lorry Receipt (LR) with consignment tracking ID, origin/destination details, and driver contact number.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- 4-Step Single Item Shifting Process -->
  <section style="padding: 60px 0; background: #ffffff;">
    <div class="container">
      <div style="text-align: center; max-width: 800px; margin: 0 auto 40px auto;">
        <span style="color: #d32f2f; font-weight: 700; text-transform: uppercase; font-size: 0.85rem;">Workflow</span>
        <h2 style="font-size: 2.1rem; color: #0b132b; font-weight: 800; margin-top: 5px;">
          4-Step Express Single Item Booking Roadmap
        </h2>
      </div>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 20px;">
        <div style="background: #f8fafc; padding: 25px; border-radius: 12px; border-left: 4px solid #d32f2f;">
          <span style="color: #f59e0b; font-weight: 800; font-size: 0.85rem;">STEP 1</span>
          <h3 style="font-size: 1.15rem; color: #0b132b; margin: 8px 0 6px 0; font-weight: 700;">Share Item Details</h3>
          <p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin: 0;">Send photos of your item and pickup/delivery address on WhatsApp at +91 8409531615 for an instant quote.</p>
        </div>
        <div style="background: #f8fafc; padding: 25px; border-radius: 12px; border-left: 4px solid #f59e0b;">
          <span style="color: #f59e0b; font-weight: 800; font-size: 0.85rem;">STEP 2</span>
          <h3 style="font-size: 1.15rem; color: #0b132b; margin: 8px 0 6px 0; font-weight: 700;">On-Site Doorstep Packing</h3>
          <p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin: 0;">Our packing crew arrives at your Jamshedpur location with bubble wrap, corrugated sheets, and stretch film to wrap the item securely.</p>
        </div>
        <div style="background: #f8fafc; padding: 25px; border-radius: 12px; border-left: 4px solid #d32f2f;">
          <span style="color: #f59e0b; font-weight: 800; font-size: 0.85rem;">STEP 3</span>
          <h3 style="font-size: 1.15rem; color: #0b132b; margin: 8px 0 6px 0; font-weight: 700;">Shared Container Dispatch</h3>
          <p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin: 0;">The item is loaded into our daily express container truck, locked with nylon belts, and dispatched with live GPS tracking.</p>
        </div>
        <div style="background: #f8fafc; padding: 25px; border-radius: 12px; border-left: 4px solid #f59e0b;">
          <span style="color: #f59e0b; font-weight: 800; font-size: 0.85rem;">STEP 4</span>
          <h3 style="font-size: 1.15rem; color: #0b132b; margin: 8px 0 6px 0; font-weight: 700;">Doorstep Unloading &amp; Setup</h3>
          <p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin: 0;">Unloaded at recipient's destination address, unpacked carefully, and inspected before final delivery sign-off.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 4: Contextual Internal Links -->
  <section style="padding: 50px 0; background: #f8fafc;">
    <div class="container">
      <div style="text-align: center; max-width: 800px; margin: 0 auto 30px auto;">
        <h3 style="font-size: 1.8rem; color: #0b132b; font-weight: 800;">Explore Related <span style="color: #d32f2f;">Shifting Services &amp; Routes</span></h3>
      </div>
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); gap: 15px;">
        <a href="<?php echo SITE_URL; ?>packers-and-movers-in-jamshedpur" title="Movers in Jamshedpur" style="background: #fff; padding: 14px; border-radius: 6px; border: 1px solid #e2e8f0; color: #0b132b; text-decoration: none; font-weight: 600; text-align: center; display: block;"><i class="fas fa-map-marker-alt"></i> Movers in Jamshedpur</a>
        <a href="<?php echo SITE_URL; ?>packers-and-movers-bistupur-jamshedpur" title="Movers in Bistupur" style="background: #fff; padding: 14px; border-radius: 6px; border: 1px solid #e2e8f0; color: #0b132b; text-decoration: none; font-weight: 600; text-align: center; display: block;"><i class="fas fa-map-marker-alt"></i> Movers in Bistupur</a>
        <a href="<?php echo SITE_URL; ?>packers-and-movers-sakchi-jamshedpur" title="Movers in Sakchi" style="background: #fff; padding: 14px; border-radius: 6px; border: 1px solid #e2e8f0; color: #0b132b; text-decoration: none; font-weight: 600; text-align: center; display: block;"><i class="fas fa-map-marker-alt"></i> Movers in Sakchi</a>
        <a href="<?php echo SITE_URL; ?>packers-and-movers-mango-jamshedpur" title="Movers in Mango" style="background: #fff; padding: 14px; border-radius: 6px; border: 1px solid #e2e8f0; color: #0b132b; text-decoration: none; font-weight: 600; text-align: center; display: block;"><i class="fas fa-map-marker-alt"></i> Movers in Mango</a>
        <a href="<?php echo SITE_URL; ?>bike-transport-guide-jamshedpur" title="Bike Transport Guide" style="background: #fff; padding: 14px; border-radius: 6px; border: 1px solid #e2e8f0; color: #0b132b; text-decoration: none; font-weight: 600; text-align: center; display: block;"><i class="fas fa-motorcycle"></i> Bike Transport Guide</a>
        <a href="<?php echo SITE_URL; ?>warehouse-storage-facilities-in-jamshedpur" title="🏭 Warehouse Storage" style="background: #fff; padding: 14px; border-radius: 6px; border: 1px solid #e2e8f0; color: #0b132b; text-decoration: none; font-weight: 600; text-align: center; display: block;">🏭 Warehouse Storage</a>
        <a href="<?php echo SITE_URL; ?>pet-relocation-services-jamshedpur" title="🐾 Pet Relocation" style="background: #fff; padding: 14px; border-radius: 6px; border: 1px solid #e2e8f0; color: #0b132b; text-decoration: none; font-weight: 600; text-align: center; display: block;">🐾 Pet Relocation</a>
        <a href="<?php echo SITE_URL; ?>plant-and-garden-shifting-jamshedpur" title="🌱 Plant Shifting" style="background: #fff; padding: 14px; border-radius: 6px; border: 1px solid #e2e8f0; color: #0b132b; text-decoration: none; font-weight: 600; text-align: center; display: block;">🌱 Plant Shifting</a>
      </div>
    </div>
  </section>

  <!-- Expanded 10-Item Single Item FAQs -->
  <section style="padding: 50px 0; background: #ffffff;">
    <div class="container">
      <div style="text-align: center; max-width: 800px; margin: 0 auto 35px auto;">
        <h2 style="font-size: 2rem; color: #0b132b; font-weight: 800;">Single Item &amp; Luggage Shifting FAQs</h2>
      </div>
      <div style="max-width: 850px; margin: 0 auto; display: flex; flex-direction: column; gap: 12px;">
        <div style="background: #f8fafc; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0;"><h4 style="color: #0b132b; font-weight: 700;">Q1: How are part-load single item charges calculated in Jamshedpur?</h4><p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin-top: 6px;">Charges depend strictly on the cubic feet volume occupied by your item in our shared container truck and the total transport distance from Jamshedpur.</p></div>
        <div style="background: #f8fafc; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0;"><h4 style="color: #0b132b; font-weight: 700;">Q2: Will my single furniture item or appliance be picked up from my doorstep?</h4><p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin-top: 6px;">Yes, we provide 100% complete doorstep pickup in Jamshedpur (Bistupur, Sakchi, Mango, Adityapur, Telco) and doorstep delivery to the destination address.</p></div>
        <div style="background: #f8fafc; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0;"><h4 style="color: #0b132b; font-weight: 700;">Q3: How do I book single item luggage shifting with Shree Ashirwad Packers?</h4><p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin-top: 6px;">Call <strong>+91 8409531615</strong> or send photos of your item on WhatsApp for an immediate part-load price quote and pickup scheduling.</p></div>
        <div style="background: #f8fafc; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0;"><h4 style="color: #0b132b; font-weight: 700;">Q4: Is protective packaging included for single items?</h4><p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin-top: 6px;">Yes, every single item receives multi-layer bubble wrap, foam corner guards, and corrugated cardboard wrapping before being loaded into the truck container.</p></div>
        <div style="background: #f8fafc; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0;"><h4 style="color: #0b132b; font-weight: 700;">Q5: Can college students ship luggage trunks and carton boxes?</h4><p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin-top: 6px;">Absolutedly. We offer specialized low-cost student luggage parcel services from XLRI, NIT Jamshedpur, and Arka Jain University campuses.</p></div>
        <div style="background: #f8fafc; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0;"><h4 style="color: #0b132b; font-weight: 700;">Q6: How long does part-load delivery take from Jamshedpur to major metro cities?</h4><p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin-top: 6px;">Intercity part-load delivery takes 2 to 4 days for regional routes (Kolkata, Patna, Ranchi) and 4 to 7 days for long-distance metros (Delhi, Bangalore, Mumbai).</p></div>
        <div style="background: #f8fafc; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0;"><h4 style="color: #0b132b; font-weight: 700;">Q7: Do you provide custom wooden crating for single LED TVs or glass mirrors?</h4><p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin-top: 6px;">Yes, smart LED televisions (55"+), glass dining table tops, and marble statues receive heavy custom wooden box crating built on-site before dispatch.</p></div>
        <div style="background: #f8fafc; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0;"><h4 style="color: #0b132b; font-weight: 700;">Q8: Will I receive an official receipt or consignment LR copy for my parcel?</h4><p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin-top: 6px;">Yes, an official consignment Lorry Receipt (LR) with tracking details and itemized inventory description is issued at the time of pickup.</p></div>
        <div style="background: #f8fafc; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0;"><h4 style="color: #0b132b; font-weight: 700;">Q9: Can transit insurance be added to single high-value furniture or appliances?</h4><p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin-top: 6px;">Yes, optional transit insurance policies covering fire, theft, and highway accident damages are available for all single-item shipments.</p></div>
        <div style="background: #f8fafc; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0;"><h4 style="color: #0b132b; font-weight: 700;">Q10: What items are restricted from single-item luggage shifting?</h4><p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin-top: 6px;">We do not transport hazardous materials, inflammable liquids, gas cylinders, illegal substances, or loose cash in part-load luggage shipments.</p></div>
        <div style="background: #f8fafc; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0;"><h4 style="color: #0b132b; font-weight: 700;">Q11: Can I send luggage parcels to remote towns outside main metro cities?</h4><p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin-top: 6px;">Yes, our extensive nationwide transport network connects Jamshedpur to Tier-2, Tier-3 towns, and rural districts with doorstep delivery or hub pickup options.</p></div>
        <div style="background: #f8fafc; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0;"><h4 style="color: #0b132b; font-weight: 700;">Q12: Is there a minimum weight or volume requirement for part-load booking?</h4><p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin-top: 6px;">No, there is no strict minimum. Whether you have a single 20 kg suitcase or a 250 kg double-door refrigerator, we accept part-load bookings of all sizes.</p></div>
      </div>
    </div>
  </section>

  <!-- Section 6: CTA Banner -->
  <section class="cta-banner-section" style="padding: 50px 0; background: linear-gradient(135deg, #0b132b 0%, #1c2541 100%); color: #ffffff;">
    <div class="container">
      <div style="text-align: center; max-width: 800px; margin: 0 auto;">
        <h2 style="font-size: 2.1rem; font-weight: 800; margin-bottom: 15px;">Book Single Item Shifting in Jamshedpur Today</h2>
        <p style="color: #cbd5e1; font-size: 0.98rem; margin-bottom: 25px;">Get low-cost doorstep part-load parcel delivery across India.</p>
        <div style="display: flex; gap: 15px; justify-content: center; flex-wrap: wrap;">
          <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call:" style="padding: 14px 32px; background: linear-gradient(135deg, #d32f2f 0%, #f59e0b 100%); color: #fff; border-radius: 50px; font-weight: 700; text-decoration: none;"><i class="fas fa-phone-alt"></i> Call: <?php echo SITE_PHONE; ?></a>
          <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20need%20single%20item%20shifting%20quote%20in%20Jamshedpur." title="WhatsApp Quote" target="_blank" style="padding: 14px 32px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #fff; border-radius: 50px; font-weight: 700; text-decoration: none;"><i class="fab fa-whatsapp"></i> WhatsApp Quote</a>
        </div>
      </div>
    </div>
  </section>

</main>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
