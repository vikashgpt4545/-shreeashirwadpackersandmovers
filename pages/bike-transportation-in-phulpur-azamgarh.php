<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "Bike Transportation in Phulpur Azamgarh | Safe Two-Wheeler Shifting";
$page_desc = "Professional bike transportation in Phulpur, Azamgarh (Uttar Pradesh). Doorstep motorcycle shifting with 7-layer bubble packing, full transit insurance, and GPS tracking. Call 8409531615.";
$page_keywords = "bike transportation in phulpur azamgarh, best bike transportation in phulpur, motorcycle shipping phulpur azamgarh, bike carrier service phulpur up, IBA approved bike transport phulpur";
$canonical_url = "https://shreeashirwadpackersandmovers.com/bike-transportation-in-phulpur-azamgarh";

$page_city = "Phulpur, Azamgarh, Uttar Pradesh";

$faq_list = [
    ['q' => 'How are bike transportation charges calculated in Phulpur, Azamgarh?', 'a' => 'Bike shipping rates from Phulpur depend on engine capacity (100cc to 500cc+ premium bikes) and destination distance. Inter-state bike transport ranges from ₹3,500 to ₹6,500 with 7-layer packing and insurance.'],
    ['q' => 'What packing materials are used for bike transport in Phulpur?', 'a' => 'We use 80-GSM heavy bubble wrap, corrugated sheets, foam edge guards, stretch film, and handle/mirror wrapping to prevent any scratches or dents.'],
    ['q' => 'Do you provide doorstep pickup and delivery for bikes in Phulpur Tehsil?', 'a' => 'Yes, our team provides doorstep motorcycle pickup from anywhere in Phulpur town, Ambari Road, Pawai Road, or Saraimeer and safe delivery right to your destination address across India.'],
    ['q' => 'Is fuel drained before bike transportation?', 'a' => 'Yes, for safety compliance during container transport, fuel level is reduced to approximately 1 liter to prevent leakage or fire hazards.'],
    ['q' => 'What documents are required for motorcycle shipping from Phulpur?', 'a' => 'Required documents include RC copy, bike insurance certificate, owner ID proof, and consignment note (LR copy).'],
    ['q' => 'Is transit insurance provided for two-wheeler transport in Phulpur?', 'a' => 'Yes, full-value transit insurance coverage (1.5% of declared vehicle value) is provided covering scratch, accident, or transit damages.'],
    ['q' => 'How is the bike secured inside the transport truck?', 'a' => 'Bikes are loaded using hydraulic ramps and locked upright inside covered container trucks using heavy-duty nylon wheel belts and side wall harnesses.'],
    ['q' => 'How long does bike transportation from Phulpur take?', 'a' => 'Local regional moves take 24–48 hours, while long-distance interstate bike shipping (e.g. to Delhi, Mumbai, Bangalore) takes 3 to 6 days.'],
    ['q' => 'Can I transport a scooter or heavy cruiser bike from Phulpur?', 'a' => 'Yes, we transport all two-wheelers including mopeds, scooters, commuter bikes, and heavy premium motorcycles (Royal Enfield, KTM, BMW, etc.).'],
    ['q' => 'How do I book Bike Transportation in Phulpur Azamgarh?', 'a' => 'Call +91 8409531615 or submit your bike details via WhatsApp for an instant free quote and doorstep pickup schedule.']
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
        <span class="breadcrumb-item"><a href="<?php echo SITE_URL; ?>packers-and-movers-in-azamgarh" title="Azamgarh">Azamgarh</a></span>
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
            BIKE TRANSPORTATION PHULPUR (AZAMGARH)
          </span>
          <h1 style="font-size: 2.6rem; font-weight: 800; line-height: 1.2; margin-bottom: 20px; color: #ffffff;">
            Professional <span style="color: #f59e0b;">Bike Transportation in Phulpur Azamgarh</span>
          </h1>
          <p style="font-size: 1.05rem; color: #cbd5e1; line-height: 1.7; margin-bottom: 25px;">
            Shree Ashirwad Packers and Movers provides top-rated two-wheeler shipping services across Phulpur Tehsil (Azamgarh). Featuring 7-layer bubble packaging, enclosed container vehicle carriers, doorstep pickup/delivery, and 100% transit insurance.
          </p>

          <div style="display: flex; gap: 15px; flex-wrap: wrap; margin-bottom: 30px;">
            <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Now" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
              <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call Now: <?php echo SITE_PHONE; ?>
            </a>
            <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20a%20bike%20transportation%20quote%20for%20Phulpur%20Azamgarh." title="Chat on WhatsApp" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
              <i class="fab fa-whatsapp" style="margin-right: 8px;"></i> Chat on WhatsApp
            </a>
          </div>

          <div style="display: flex; gap: 20px; font-size: 0.9rem; color: #94a3b8;">
            <span><strong style="color: #f59e0b;">820+</strong> Bikes Shifted</span>
            <span><strong style="color: #f59e0b;">7-Layer</strong> Bubble Wrapping</span>
            <span><strong style="color: #f59e0b;">100%</strong> Transit Insurance</span>
          </div>
        </div>

        <!-- Hero Lead Form Column -->
        <div class="hero-form-card" style="background: rgba(255, 255, 255, 0.05); backdrop-filter: blur(10px); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 16px; padding: 30px; box-shadow: 0 15px 35px rgba(0,0,0,0.4);">
          <h2 style="font-size: 1.4rem; color: #ffffff; margin-bottom: 8px; font-weight: 700; text-align: center;">Get Phulpur Bike Quote</h2>
          <p style="font-size: 0.85rem; color: #94a3b8; text-align: center; margin-bottom: 20px;">Receive transparent motorcycle transport rates on WhatsApp</p>

          <form action="#" method="POST" onsubmit="sendHeroWhatsAppLead(event, this);">
            <div style="margin-bottom: 14px;">
              <input type="text" name="name" class="form-control" placeholder="Your Full Name" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="margin-bottom: 14px;">
              <input type="tel" name="phone" class="form-control" placeholder="10-Digit Phone / WhatsApp Number" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 10px; margin-bottom: 14px;">
              <input type="text" name="move_from" class="form-control" placeholder="Pickup Location" value="Phulpur, Azamgarh" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
              <input type="text" name="move_to" class="form-control" placeholder="Destination City" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="margin-bottom: 16px;">
              <textarea name="message" class="form-control" rows="2" placeholder="Bike Model (e.g. Hero Splendor, Royal Enfield Classic 350, Honda Activa)" style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;"></textarea>
            </div>
            <button type="submit" class="btn btn-primary" style="width: 100%; padding: 14px; background: linear-gradient(135deg, #d32f2f 0%, #f59e0b 100%); color: #ffffff; border: none; border-radius: 50px; font-weight: 700; font-size: 1rem; cursor: pointer;">
              Get Bike Shipping Quote &rarr;
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
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">820+</div>
          <div style="font-size: 0.9rem; color: #cbd5e1; margin-top: 5px;">Bikes Transported from Phulpur</div>
        </div>
        <div style="padding: 20px; background: rgba(23, 42, 84, 0.5); border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">7-Layer</div>
          <div style="font-size: 0.9rem; color: #cbd5e1; margin-top: 5px;">Bubble Wrap Protection</div>
        </div>
        <div style="padding: 20px; background: rgba(23, 42, 84, 0.5); border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">100%</div>
          <div style="font-size: 0.9rem; color: #cbd5e1; margin-top: 5px;">Transit Insurance Cover</div>
        </div>
        <div style="padding: 20px; background: rgba(23, 42, 84, 0.5); border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">IBA Approved</div>
          <div style="font-size: 0.9rem; color: #cbd5e1; margin-top: 5px;">Official Tax Invoice</div>
        </div>
      </div>
    </div>
  </section>

  <!-- 4. 6-Card Feature Grid (3x2 Layout) -->
  <section style="padding: 65px 0; background: #0b132b; color: #e2e8f0; line-height: 1.8;">
    <div class="container">
      
      <div style="max-width: 950px; margin: 0 auto;">
        <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Safety Features</span>
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin: 10px 0 20px 0;">
          Why Transport Bike with Us in <span style="color: #f59e0b;">Phulpur, Azamgarh</span>?
        </h2>

        <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px; margin: 30px 0;">
          
          <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px;">
            <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;"><i class="fas fa-motorcycle"></i></div>
            <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">7-Layer Bubble Wrap</h3>
            <p style="font-size: 0.9rem; color: #cbd5e1; margin: 0;">
              Thick 80-GSM bubble sheet, corrugated board, foam edge covers, and stretch wrap shielding all painted surfaces.
            </p>
          </div>

          <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px;">
            <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;"><i class="fas fa-truck"></i></div>
            <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">Covered Container Trucks</h3>
            <p style="font-size: 0.9rem; color: #cbd5e1; margin: 0;">
              Weatherproof closed trucks protecting your motorcycle from rain, highway dust, and sun exposure.
            </p>
          </div>

          <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px;">
            <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;"><i class="fas fa-shield-alt"></i></div>
            <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">Full Transit Insurance</h3>
            <p style="font-size: 0.9rem; color: #cbd5e1; margin: 0;">
              Comprehensive transit policy protection covering complete bike valuation against highway damage.
            </p>
          </div>

          <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px;">
            <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;"><i class="fas fa-grip-lines"></i></div>
            <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">Wheel Belt Tie-Down</h3>
            <p style="font-size: 0.9rem; color: #cbd5e1; margin: 0;">
              Heavy nylon harness belts locking motorcycle wheels in an upright position inside the vehicle.
            </p>
          </div>

          <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px;">
            <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;"><i class="fas fa-map-marked-alt"></i></div>
            <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">Real-Time GPS Tracking</h3>
            <p style="font-size: 0.9rem; color: #cbd5e1; margin: 0;">
              Consignment status updates sent on WhatsApp from pickup in Phulpur to final destination delivery.
            </p>
          </div>

          <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px;">
            <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;"><i class="fas fa-door-open"></i></div>
            <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">Doorstep Pickup &amp; Drop</h3>
            <p style="font-size: 0.9rem; color: #cbd5e1; margin: 0;">
              Doorstep collection from any residential colony or office location in Phulpur with instant LR copy.
            </p>
          </div>

        </div>

      </div>

    </div>
  </section>

  <!-- 5. Specialized Services Breakdown -->
  <section style="padding: 60px 0; background: #070d1e; color: #ffffff;">
    <div class="container" style="max-width: 950px;">
      
      <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Vehicle Portfolio</span>
      <h2 style="font-size: 2.1rem; font-weight: 800; color: #ffffff; margin: 10px 0 25px 0;">
        Specialized Two-Wheeler Transport Services in <span style="color: #f59e0b;">Phulpur</span>
      </h2>

      <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px;">
        <div style="background: #101c40; padding: 20px; border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #f59e0b; font-size: 1.05rem; margin-bottom: 8px;">Commuter Bike Shipping</h4>
          <p style="font-size: 0.88rem; color: #cbd5e1; margin: 0;">Affordable 100cc-150cc bike transport with 7-layer bubble wrapping.</p>
        </div>

        <div style="background: #101c40; padding: 20px; border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #f59e0b; font-size: 1.05rem; margin-bottom: 8px;">Premium &amp; Sports Bike</h4>
          <p style="font-size: 0.88rem; color: #cbd5e1; margin: 0;">Enclosed container shipping for Royal Enfield, KTM, Jawa, &amp; BMW motorcycles.</p>
        </div>

        <div style="background: #101c40; padding: 20px; border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #f59e0b; font-size: 1.05rem; margin-bottom: 8px;">Scooter &amp; Moped Move</h4>
          <p style="font-size: 0.88rem; color: #cbd5e1; margin: 0;">Safe gearless scooter transport (Activa, Jupiter, Access) with fiber body wrapping.</p>
        </div>

        <div style="background: #101c40; padding: 20px; border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #f59e0b; font-size: 1.05rem; margin-bottom: 8px;">Government &amp; Defense Bills</h4>
          <p style="font-size: 0.88rem; color: #cbd5e1; margin: 0;">Official IBA-compliant GST tax invoice &amp; LR receipts for employee reimbursement.</p>
        </div>

        <div style="background: #101c40; padding: 20px; border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #f59e0b; font-size: 1.05rem; margin-bottom: 8px;">Interstate Bike Freight</h4>
          <p style="font-size: 0.88rem; color: #cbd5e1; margin: 0;">Direct long-distance bike shipping from Phulpur to Delhi, Mumbai, Bangalore, Kolkata.</p>
        </div>

        <div style="background: #101c40; padding: 20px; border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #f59e0b; font-size: 1.05rem; margin-bottom: 8px;">Combined House + Bike</h4>
          <p style="font-size: 0.88rem; color: #cbd5e1; margin: 0;">Integrated package combining household shifting and motorcycle shipping.</p>
        </div>
      </div>

    </div>
  </section>

  <!-- 6. 7-Layer Safety Packaging Framework -->
  <section style="padding: 60px 0; background: #0b132b; color: #ffffff;">
    <div class="container" style="max-width: 950px;">
      
      <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Packaging Protocol</span>
      <h2 style="font-size: 2.1rem; font-weight: 800; color: #ffffff; margin: 10px 0 25px 0;">
        7-Layer Damage-Proof Motorcycle Packaging
      </h2>

      <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 15px;">
        <div style="background: #172a54; padding: 18px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <div style="font-size: 0.8rem; color: #f59e0b; font-weight: 700;">LAYER 01</div>
          <h4 style="font-size: 0.95rem; color: #fff; margin: 4px 0;">Mirror &amp; Handle Wrap</h4>
          <p style="font-size: 0.82rem; color: #cbd5e1; margin: 0;">Foam padding over rear view mirrors, levers, and indicators.</p>
        </div>

        <div style="background: #172a54; padding: 18px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <div style="font-size: 0.8rem; color: #f59e0b; font-weight: 700;">LAYER 02</div>
          <h4 style="font-size: 0.95rem; color: #fff; margin: 4px 0;">Fuel Tank Casing</h4>
          <p style="font-size: 0.82rem; color: #cbd5e1; margin: 0;">Soft blanket layer over painted petrol tank to prevent scratches.</p>
        </div>

        <div style="background: #172a54; padding: 18px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <div style="font-size: 0.8rem; color: #f59e0b; font-weight: 700;">LAYER 03</div>
          <h4 style="font-size: 0.95rem; color: #fff; margin: 4px 0;">80-GSM Bubble Wrap</h4>
          <p style="font-size: 0.82rem; color: #cbd5e1; margin: 0;">Dense bubble sheet covering headlights, silencer, and side body.</p>
        </div>

        <div style="background: #172a54; padding: 18px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <div style="font-size: 0.8rem; color: #f59e0b; font-weight: 700;">LAYER 04</div>
          <h4 style="font-size: 0.95rem; color: #fff; margin: 4px 0;">Corrugated Sheet Board</h4>
          <p style="font-size: 0.82rem; color: #cbd5e1; margin: 0;">Heavy cardboard sheet outer wrapping for impact absorption.</p>
        </div>

        <div style="background: #172a54; padding: 18px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <div style="font-size: 0.8rem; color: #f59e0b; font-weight: 700;">LAYER 05</div>
          <h4 style="font-size: 0.95rem; color: #fff; margin: 4px 0;">Waterproof Stretch Film</h4>
          <p style="font-size: 0.82rem; color: #cbd5e1; margin: 0;">Water-resistant shrink film sealing all inner layers from moisture.</p>
        </div>

        <div style="background: #172a54; padding: 18px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <div style="font-size: 0.8rem; color: #f59e0b; font-weight: 700;">LAYER 06</div>
          <h4 style="font-size: 0.95rem; color: #fff; margin: 4px 0;">Truck Wheel Anchorage</h4>
          <p style="font-size: 0.82rem; color: #cbd5e1; margin: 0;">Tying both wheels securely to vehicle container side tracks.</p>
        </div>

        <div style="background: #172a54; padding: 18px; border-radius: 10px; border-left: 4px solid #f59e0b; grid-column: span 2;">
          <div style="font-size: 0.8rem; color: #f59e0b; font-weight: 700;">LAYER 07</div>
          <h4 style="font-size: 0.95rem; color: #fff; margin: 4px 0;">Doorstep Unpacking</h4>
          <p style="font-size: 0.82rem; color: #cbd5e1; margin: 0;">Joint inspection and careful unwrapping at final destination.</p>
        </div>
      </div>

    </div>
  </section>

  <!-- 7. Origin Pickup Locality Grid -->
  <section style="padding: 60px 0; background: #070d1e; color: #ffffff;">
    <div class="container" style="max-width: 900px;">
      
      <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Azamgarh District Network</span>
      <h2 style="font-size: 2.1rem; font-weight: 800; color: #ffffff; margin: 10px 0 20px 0;">
        Locality Coverage Across <span style="color: #f59e0b;">Azamgarh District</span>
      </h2>

      <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 16px; margin-bottom: 25px;">
        <div style="background: #101c40; padding: 18px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #ffffff; font-size: 1.05rem; margin-bottom: 6px;">Azamgarh Master Hub</h4>
          <p style="font-size: 0.88rem; color: #94a3b8; margin-bottom: 8px;">Main district hub serving Chowk &amp; Civil Lines.</p>
          <a href="<?php echo SITE_URL; ?>packers-and-movers-in-azamgarh" title="Packers Movers Azamgarh Master Hub →" style="color: #f59e0b; text-decoration: underline; font-weight: 600; font-size: 0.88rem;">
            Packers Movers Azamgarh Master Hub →
          </a>
        </div>

        <div style="background: #101c40; padding: 18px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #ffffff; font-size: 1.05rem; margin-bottom: 6px;">Phulpur Shifting Sector</h4>
          <p style="font-size: 0.88rem; color: #94a3b8; margin-bottom: 8px;">Doorstep household packing &amp; local relocation.</p>
          <a href="<?php echo SITE_URL; ?>packers-and-movers-in-phulpur-azamgarh" title="Packers Movers Phulpur Azamgarh →" style="color: #f59e0b; text-decoration: underline; font-weight: 600; font-size: 0.88rem;">
            Packers Movers Phulpur Azamgarh →
          </a>
        </div>

        <div style="background: #101c40; padding: 18px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #ffffff; font-size: 1.05rem; margin-bottom: 6px;">Phulpur Car Carrier</h4>
          <p style="font-size: 0.88rem; color: #94a3b8; margin-bottom: 8px;">Doorstep car shipping from Phulpur Tehsil.</p>
          <a href="<?php echo SITE_URL; ?>car-transportation-in-phulpur-azamgarh" title="Car Transportation Phulpur Azamgarh →" style="color: #f59e0b; text-decoration: underline; font-weight: 600; font-size: 0.88rem;">
            Car Transportation Phulpur Azamgarh →
          </a>
        </div>

        <div style="background: #101c40; padding: 18px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #ffffff; font-size: 1.05rem; margin-bottom: 6px;">Azamgarh Bike Carrier</h4>
          <p style="font-size: 0.88rem; color: #94a3b8; margin-bottom: 8px;">Doorstep motorcycle shipping &amp; 7-layer bubble wrap.</p>
          <a href="<?php echo SITE_URL; ?>bike-transportation-in-azamgarh" title="Bike Transportation Azamgarh →" style="color: #f59e0b; text-decoration: underline; font-weight: 600; font-size: 0.88rem;">
            Bike Transportation Azamgarh →
          </a>
        </div>
      </div>

    </div>
  </section>

  <!-- 8. Intercity Route Network Grid -->
  <section style="padding: 60px 0; background: #0b132b; color: #ffffff;">
    <div class="container" style="max-width: 900px;">
      
      <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Major Highway Corridors</span>
      <h2 style="font-size: 2.1rem; font-weight: 800; color: #ffffff; margin: 10px 0 20px 0;">
        Popular Bike Shipping Routes from <span style="color: #f59e0b;">Phulpur</span>
      </h2>

      <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 16px; margin-bottom: 25px;">
        <div style="background: #172a54; padding: 18px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #ffffff; font-size: 1.05rem; margin-bottom: 6px;">Phulpur to Delhi-NCR</h4>
          <p style="font-size: 0.88rem; color: #94a3b8; margin-bottom: 8px;">Express motorcycle shipping to Delhi, Noida &amp; Gurgaon via Purvanchal Expressway.</p>
        </div>

        <div style="background: #172a54; padding: 18px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #ffffff; font-size: 1.05rem; margin-bottom: 6px;">Phulpur to Mumbai / Pune</h4>
          <p style="font-size: 0.88rem; color: #94a3b8; margin-bottom: 8px;">Long-distance insured bike transport to Maharashtra.</p>
        </div>

        <div style="background: #172a54; padding: 18px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #ffffff; font-size: 1.05rem; margin-bottom: 6px;">Phulpur to Bangalore / Hyderabad</h4>
          <p style="font-size: 0.88rem; color: #94a3b8; margin-bottom: 8px;">South India express bike carrier service with GPS tracking.</p>
        </div>

        <div style="background: #172a54; padding: 18px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #ffffff; font-size: 1.05rem; margin-bottom: 6px;">Phulpur to Lucknow / Varanasi</h4>
          <p style="font-size: 0.88rem; color: #94a3b8; margin-bottom: 8px;">Regional two-wheeler transport along state highways.</p>
        </div>
      </div>

    </div>
  </section>

  <!-- 9. IBA Approved GST Billing Documentation -->
  <section style="padding: 60px 0; background: #070d1e; color: #ffffff;">
    <div class="container" style="max-width: 900px;">
      
      <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Official Claims Documentation</span>
      <h2 style="font-size: 2.1rem; font-weight: 800; color: #ffffff; margin: 10px 0 20px 0;">
        IBA Approved GST Bike Transport Billing
      </h2>

      <div style="background: #101c40; border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 12px; padding: 25px;">
        <h4 style="color: #f59e0b; font-size: 1.1rem; margin-bottom: 12px; font-weight: 700;">Government &amp; Defense Claim Paperwork Issued:</h4>
        <ol style="margin: 0; padding-left: 20px; color: #cbd5e1; line-height: 1.8; font-size: 0.95rem;">
          <li><strong>Official Motorcycle Freight GST Tax Invoice</strong> with clear GSTIN details.</li>
          <li><strong>Bike Inspection &amp; Scratch Audit Record</strong> recorded at pickup.</li>
          <li><strong>Consignment Lorry Receipt (LR Copy)</strong> with carrier truck number.</li>
          <li><strong>IBA Approved Stamp &amp; Registration License Code</strong>.</li>
          <li><strong>Comprehensive Transit Insurance Certificate Copy</strong>.</li>
          <li><strong>Stamped Money Receipt</strong> for employee claim reimbursement.</li>
        </ol>
      </div>

    </div>
  </section>

  <!-- 10. 10 to 15 Detailed FAQs + Valid JSON-LD FAQPage Schema -->
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

  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "MovingCompany",
    "name": "Shree Ashirwad Packers and Movers",
    "description": "Professional bike transportation in Phulpur, Azamgarh with 7-layer bubble wrapping and transit insurance.",
    "url": "<?php echo $canonical_url; ?>",
    "telephone": "<?php echo SITE_PHONE_RAW; ?>",
    "address": {
      "@type": "PostalAddress",
      "addressLocality": "Phulpur, Azamgarh",
      "addressRegion": "Uttar Pradesh",
      "addressCountry": "IN"
    },
    "areaServed": "Phulpur, Azamgarh, Uttar Pradesh",
    "priceRange": "₹3500 - ₹6500"
  }
  </script>

  <section style="padding: 60px 0; background: #0b132b; color: #ffffff;">
    <div class="container" style="max-width: 900px;">
      
      <div class="section-header text-center" style="margin-bottom: 40px;">
        <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Got Questions?</span>
        <h2 style="font-size: 2.1rem; font-weight: 800; color: #ffffff; margin-top: 10px;">
          Frequently Asked Questions About <span style="color: #f59e0b;">Bike Shipping in Phulpur</span>
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

  <!-- 11. Call-To-Action (CTA) Conversion Footer -->
  <section style="padding: 60px 0; background: linear-gradient(135deg, #172a54 0%, #0b132b 100%); border-top: 1.5px solid rgba(245, 158, 11, 0.4); color: #ffffff;">
    <div class="container" style="max-width: 900px; text-align: center;">
      
      <span class="section-tag" style="background: rgba(245, 158, 11, 0.2); color: #f59e0b; padding: 6px 16px; border-radius: 20px; font-size: 0.85rem; font-weight: 700; text-transform: uppercase;">
        Book Bike Transport in Phulpur
      </span>

      <h2 style="font-size: 2.2rem; font-weight: 800; margin: 15px 0 15px 0; color: #ffffff;">
        Need Safe <span style="color: #f59e0b;">Bike Transportation in Phulpur Azamgarh</span>?
      </h2>

      <p style="font-size: 1.05rem; color: #cbd5e1; max-width: 750px; margin: 0 auto 30px auto; line-height: 1.7;">
        Contact our Phulpur two-wheeler transport team today for 7-layer bubble wrapped motorcycle shipping across India.
      </p>

      <div style="display: flex; gap: 15px; justify-content: center; flex-wrap: wrap;">
        <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Now" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 30px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1.05rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
          <i class="fas fa-phone-alt"></i> Call Now: <?php echo SITE_PHONE; ?>
        </a>
        <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20a%20bike%20transportation%20quote%20for%20Phulpur%20Azamgarh." title="Chat on WhatsApp" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 30px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1.05rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
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
  var extraMsg = form.querySelector('[name="message"]').value;
  
  var message = "Hello Shree Ashirwad Packers & Movers,\n\nI would like to request a Bike Shipping Quote for Phulpur Azamgarh:\n- Name: " + name + "\n- Phone: " + phone + "\n- Pickup Location: " + moveFrom + "\n- Moving To: " + moveTo;
  
  if (extraMsg && extraMsg.trim() !== '') {
    message += "\n- Bike Model: " + extraMsg;
  }
  
  var whatsappUrl = "https://api.whatsapp.com/send?phone=918409531615&text=" + encodeURIComponent(message);
  window.location.href = whatsappUrl;
}
</script>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
