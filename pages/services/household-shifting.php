<?php
$root_dir = dirname(__DIR__, 2);
require_once file_exists(__DIR__ . '/../../includes/config.php') ? __DIR__ . '/../../includes/config.php' : $root_dir . '/includes/config.php';

$page_title = "Household Shifting Services in India | Best Home Relocation Packers Movers";
$page_desc = "Complete 360-degree household shifting services in India by IBA-approved Shree Ashirwad Packers and Movers. 7-layer bubble wrap packaging, custom wooden crating, transit insurance, and zero-damage home relocation. Get instant shifting quote!";
$page_keywords = "household shifting services, home relocation india, packers and movers household shifting, house moving services, IBA approved household shifting, best home packers movers ranchi jamshedpur, intercity house shifting cost";
$canonical_url = SITE_URL . "services/household-shifting";

require_once file_exists(__DIR__ . '/../../includes/header.php') ? __DIR__ . '/../../includes/header.php' : $root_dir . '/includes/header.php';
?>

<main class="site-main" style="background: #070d19; color: #ffffff; min-height: 100vh; padding-bottom: 60px;">

  <!-- Visual Breadcrumb Navigation Bar -->
  <div class="breadcrumb-wrapper" style="padding: 15px 0; background: #0f172a; border-bottom: 1px solid rgba(255,255,255,0.08);">
    <div class="container" style="max-width: 1140px; margin: 0 auto; padding: 0 15px;">
      <div class="breadcrumb-list" style="font-size: 0.9rem; color: #94a3b8;">
        <a href="<?php echo SITE_URL; ?>" title="Home" style="color: #f59e0b; text-decoration: none;">Home</a>
        <span style="margin: 0 8px;">/</span>
        <a href="<?php echo SITE_URL; ?>services" title="Services" style="color: #f59e0b; text-decoration: none;">Services</a>
        <span style="margin: 0 8px;">/</span>
        <span style="color: #cbd5e1;">Household Shifting Services</span>
      </div>
    </div>
  </div>

  <!-- SECTION 1: Hero Section with Lead Form -->
  <section class="hero-section" style="background: linear-gradient(135deg, #0f172a 0%, #1e1b4b 100%); padding: 65px 0; border-bottom: 1px solid rgba(255,255,255,0.08);">
    <div class="container" style="max-width: 1140px; margin: 0 auto; padding: 0 15px;">
      <div style="display: grid; grid-template-columns: 1.2fr 0.8fr; gap: 40px; align-items: center;">
        
        <!-- Hero Left Content -->
        <div>
          <span style="background: rgba(245, 158, 11, 0.15); color: #f59e0b; border: 1.5px solid rgba(245, 158, 11, 0.4); padding: 6px 18px; border-radius: 30px; font-size: 0.82rem; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; display: inline-block; margin-bottom: 18px;">
            IBA APPROVED &bull; ISO 9001:2015 CERTIFIED HOUSEHOLD MOVERS
          </span>
          <h1 style="font-size: 2.8rem; font-weight: 800; line-height: 1.2; color: #ffffff; margin-bottom: 20px;">
            Seamless &amp; Safe <span style="color: #f59e0b;">Household Shifting Services</span> Across India
          </h1>
          <p style="font-size: 1.1rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 25px;">
            Relocating your home is more than moving furniture — it is moving your life's memories and valuable personal assets. <strong>Shree Ashirwad Packers and Movers</strong> provides end-to-end household shifting solutions utilizing 7-layer bubble wrap protection, heavy-duty corrugated cartons, custom TV &amp; glass wooden crating, dedicated weather-proof container vehicles, and 100% transit insurance coverage.
          </p>

          <div style="display: flex; gap: 15px; flex-wrap: wrap; margin-bottom: 30px;">
            <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Official Support" style="padding: 14px 28px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; text-decoration: none; display: inline-flex; align-items: center; gap: 10px; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
              <i class="fas fa-phone-alt"></i> Call Now: <?php echo SITE_PHONE; ?>
            </a>
            <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20a%20household%20shifting%20quote." title="Chat on WhatsApp" target="_blank" style="padding: 14px 28px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; text-decoration: none; display: inline-flex; align-items: center; gap: 10px; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
              <i class="fab fa-whatsapp"></i> Chat on WhatsApp
            </a>
          </div>

          <div style="display: flex; gap: 20px; font-size: 0.88rem; color: #94a3b8; flex-wrap: wrap;">
            <span><strong style="color: #f59e0b;">100% Insured</strong> Shifting</span>
            <span><strong style="color: #f59e0b;">7-Layer</strong> Multi-Paddy Packaging</span>
            <span><strong style="color: #f59e0b;">IBA Approved</strong> GST Bill</span>
          </div>
        </div>

        <!-- Hero Right Form -->
        <div style="background: rgba(15, 23, 42, 0.85); backdrop-filter: blur(12px); border: 1.5px solid rgba(245, 158, 11, 0.35); border-radius: 20px; padding: 32px 28px; box-shadow: 0 20px 45px rgba(0,0,0,0.5);">
          <h2 style="font-size: 1.45rem; color: #ffffff; margin-bottom: 8px; font-weight: 800; text-align: center;">Get Instant Household Shifting Quote</h2>
          <p style="font-size: 0.85rem; color: #94a3b8; text-align: center; margin-bottom: 22px;">Receive exact transparent cost estimation on WhatsApp in 2 minutes</p>

          <form action="#" method="POST" onsubmit="sendHeroWhatsAppLead(event, this);">
            <div style="margin-bottom: 14px;">
              <input type="text" name="name" class="form-control" placeholder="Your Full Name *" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.4); color: #fff; font-size: 0.95rem;">
            </div>
            <div style="margin-bottom: 14px;">
              <input type="tel" name="phone" class="form-control" placeholder="10-Digit Mobile Number *" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.4); color: #fff; font-size: 0.95rem;">
            </div>
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 12px; margin-bottom: 14px;">
              <input type="text" name="move_from" class="form-control" placeholder="Moving From (City) *" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.4); color: #fff; font-size: 0.95rem;">
              <input type="text" name="move_to" class="form-control" placeholder="Moving To (City) *" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.4); color: #fff; font-size: 0.95rem;">
            </div>
            <div style="margin-bottom: 16px;">
              <select name="home_size" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: #0f172a; color: #fff; font-size: 0.95rem;">
                <option value="" disabled selected>Select Home Size / Inventory Type *</option>
                <option value="1 BHK / Few Items">1 BHK / Few Household Goods</option>
                <option value="2 BHK Complete House">2 BHK Complete House Shifting</option>
                <option value="3 BHK Complete House">3 BHK Complete House Shifting</option>
                <option value="4+ BHK / Villa / Independent House">4+ BHK / Villa / Bungalow</option>
              </select>
            </div>
            <button type="submit" style="width: 100%; padding: 14px; background: linear-gradient(135deg, #d32f2f 0%, #f59e0b 100%); color: #ffffff; border: none; border-radius: 50px; font-weight: 800; font-size: 1rem; cursor: pointer; transition: all 0.3s ease;">
              Calculate My Shifting Cost &rarr;
            </button>
          </form>
        </div>

      </div>
    </div>
  </section>

  <!-- SECTION 2: Complete Operational Philosophy & Industry Overview -->
  <section style="padding: 70px 0; background: #070d19;">
    <div class="container" style="max-width: 1140px; margin: 0 auto; padding: 0 15px;">
      
      <div style="max-width: 900px; margin: 0 auto; text-align: center; margin-bottom: 50px;">
        <span style="color: #f59e0b; font-size: 0.85rem; font-weight: 700; text-transform: uppercase; letter-spacing: 1.5px;">THE SHREE ASHIRWAD DIFFERENCE</span>
        <h2 style="font-size: 2.3rem; font-weight: 800; color: #ffffff; margin-top: 10px;">Why Professional Household Shifting Demands Uncompromising Quality</h2>
        <p style="color: #cbd5e1; font-size: 1.05rem; line-height: 1.8; margin-top: 15px;">
          Domestic household relocation involves thousands of distinct variables: delicate chinaware, heavy double beds, sensitive LED televisions, bulky refrigerators, expensive designer sofas, and irreplaceable personal memories. Entrusting your home to unorganized local laborers or unverified transporters frequently leads to broken items, scratched furniture, hidden fee surprises, and severe mental stress.
        </p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 30px;">
        
        <div style="background: #0f172a; border: 1px solid rgba(255,255,255,0.08); border-radius: 18px; padding: 32px 26px; box-shadow: 0 10px 30px rgba(0,0,0,0.3);">
          <div style="width: 50px; height: 50px; background: rgba(245, 158, 11, 0.15); border-radius: 12px; display: flex; align-items: center; justify-content: center; color: #f59e0b; font-size: 1.3rem; margin-bottom: 20px;">
            <i class="fas fa-shield-alt"></i>
          </div>
          <h3 style="font-size: 1.3rem; font-weight: 700; color: #ffffff; margin-bottom: 12px;">Zero-Damage Guarantee</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.75;">
            Our standardized packing protocols utilize 7-layer insulation, heavy-gauge bubble wrap, foam corner protectors, stretch wrapping film, and custom-built wooden crates for high-value items, eliminating scratches, dents, and breakage during transit.
          </p>
        </div>

        <div style="background: #0f172a; border: 1px solid rgba(255,255,255,0.08); border-radius: 18px; padding: 32px 26px; box-shadow: 0 10px 30px rgba(0,0,0,0.3);">
          <div style="width: 50px; height: 50px; background: rgba(245, 158, 11, 0.15); border-radius: 12px; display: flex; align-items: center; justify-content: center; color: #f59e0b; font-size: 1.3rem; margin-bottom: 20px;">
            <i class="fas fa-file-invoice"></i>
          </div>
          <h3 style="font-size: 1.3rem; font-weight: 700; color: #ffffff; margin-bottom: 12px;">100% Transparent Quotations</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.75;">
            We operate on a strict zero-hidden-fee policy. The formal estimate provided after our pre-move survey includes packing materials, labor charges, vehicle freight, toll charges, GST, and transit insurance. No last-minute extra charges on unloading day.
          </p>
        </div>

        <div style="background: #0f172a; border: 1px solid rgba(255,255,255,0.08); border-radius: 18px; padding: 32px 26px; box-shadow: 0 10px 30px rgba(0,0,0,0.3);">
          <div style="width: 50px; height: 50px; background: rgba(245, 158, 11, 0.15); border-radius: 12px; display: flex; align-items: center; justify-content: center; color: #f59e0b; font-size: 1.3rem; margin-bottom: 20px;">
            <i class="fas fa-stamp"></i>
          </div>
          <h3 style="font-size: 1.3rem; font-weight: 700; color: #ffffff; margin-bottom: 12px;">IBA Approved &amp; GST Compliant</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.75;">
            We issue official IBA-approved bills, GST invoices, consignment notes (LR copies), and itemized inventory sheets accepted by Indian Armed Forces, Central Government departments, Public Sector Banks, and MNCs for 100% shifting claim reimbursement.
          </p>
        </div>

      </div>

    </div>
  </section>

  <!-- SECTION 3: 7-Layer Packaging Standard Deep Dive -->
  <section style="padding: 70px 0; background: #0f172a; border-top: 1px solid rgba(255,255,255,0.08); border-bottom: 1px solid rgba(255,255,255,0.08);">
    <div class="container" style="max-width: 1140px; margin: 0 auto; padding: 0 15px;">
      
      <div style="text-align: center; margin-bottom: 50px;">
        <span style="color: #f59e0b; font-size: 0.85rem; font-weight: 700; text-transform: uppercase; letter-spacing: 1.5px;">PACKAGING EXCELLENCE</span>
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin-top: 8px;">Our Signature 7-Layer Heavy Duty Protective Shield</h2>
        <p style="color: #cbd5e1; font-size: 1rem; max-width: 800px; margin: 12px auto 0 auto; line-height: 1.7;">
          Standard cardboard boxes and single-layer plastic rolls fail when transporting goods across national highways, rough terrain, and unpredictable monsoon weather. Here is how our 7-layer defense system protects your belongings:
        </p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(340px, 1fr)); gap: 25px;">
        
        <div style="background: #070d19; border: 1.5px solid rgba(245, 158, 11, 0.25); border-radius: 16px; padding: 25px;">
          <div style="font-size: 0.85rem; font-weight: 800; color: #f59e0b; margin-bottom: 6px;">LAYER 1: PRIMARY SURFACE WRAPPING</div>
          <h4 style="font-size: 1.15rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">High-Density PE Stretch Film</h4>
          <p style="color: #cbd5e1; font-size: 0.9rem; line-height: 1.65;">
            Applied directly onto polished wooden furniture, leather sofas, and glossy appliances to seal out dust, humidity, oil spots, and surface friction scratches.
          </p>
        </div>

        <div style="background: #070d19; border: 1.5px solid rgba(245, 158, 11, 0.25); border-radius: 16px; padding: 25px;">
          <div style="font-size: 0.85rem; font-weight: 800; color: #f59e0b; margin-bottom: 6px;">LAYER 2: IMPACT ABSORPTION</div>
          <h4 style="font-size: 1.15rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">Heavy Duty 100 GSM Air Bubble Wrap</h4>
          <p style="color: #cbd5e1; font-size: 0.9rem; line-height: 1.65;">
            Double-wrapped around electronics, glass items, mirrors, and wooden edges to absorb severe kinetic shocks, bumps, and sudden braking forces.
          </p>
        </div>

        <div style="background: #070d19; border: 1.5px solid rgba(245, 158, 11, 0.25); border-radius: 16px; padding: 25px;">
          <div style="font-size: 0.85rem; font-weight: 800; color: #f59e0b; margin-bottom: 6px;">LAYER 3: EDGE &amp; CORNER REINFORCEMENT</div>
          <h4 style="font-size: 1.15rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">L-Shaped Heavy Foam &amp; Fiber Edge Guards</h4>
          <p style="color: #cbd5e1; font-size: 0.9rem; line-height: 1.65;">
            Fitted onto bed corners, dining table edges, wardrobe fronts, and washing machines to prevent chipping, structural bending, or crushed corners during handling.
          </p>
        </div>

        <div style="background: #070d19; border: 1.5px solid rgba(245, 158, 11, 0.25); border-radius: 16px; padding: 25px;">
          <div style="font-size: 0.85rem; font-weight: 800; color: #f59e0b; margin-bottom: 6px;">LAYER 4: RIGID SHELL ENCLOSURE</div>
          <h4 style="font-size: 1.15rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">5-Ply &amp; 7-Ply Heavy Corrugated Sheets</h4>
          <p style="color: #cbd5e1; font-size: 0.9rem; line-height: 1.65;">
            Custom-cut corrugated cardboard sheets wrapped around large items (refrigerators, sofas, mattresses) to provide rigid structural armor against external pressure.
          </p>
        </div>

        <div style="background: #070d19; border: 1.5px solid rgba(245, 158, 11, 0.25); border-radius: 16px; padding: 25px;">
          <div style="font-size: 0.85rem; font-weight: 800; color: #f59e0b; margin-bottom: 6px;">LAYER 5: WATERPROOF WEATHER BARRIER</div>
          <h4 style="font-size: 1.15rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">Industrial HD Tarpaulin &amp; Shrink Wrap</h4>
          <p style="color: #cbd5e1; font-size: 0.9rem; line-height: 1.65;">
            Wraps the entire package in a 100% moisture-proof outer barrier, shielding your goods from heavy rain, monsoon moisture, highway road dust, and mud spray.
          </p>
        </div>

        <div style="background: #070d19; border: 1.5px solid rgba(245, 158, 11, 0.25); border-radius: 16px; padding: 25px;">
          <div style="font-size: 0.85rem; font-weight: 800; color: #f59e0b; margin-bottom: 6px;">LAYER 6 &amp; 7: FRAGILE SPECIALTY CRATING</div>
          <h4 style="font-size: 1.15rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">Custom Wooden Box Crating &amp; Strapping</h4>
          <p style="color: #cbd5e1; font-size: 0.9rem; line-height: 1.65;">
            For large OLED/QLED TVs, marble tops, glass tables, and chandeliers, we fabricate custom wooden frame crates on-site with high-tension nylon strapping.
          </p>
        </div>

      </div>

    </div>
  </section>

  <!-- SECTION 4: Step-by-Step Relocation Workflow -->
  <section style="padding: 70px 0; background: #070d19;">
    <div class="container" style="max-width: 1140px; margin: 0 auto; padding: 0 15px;">
      
      <div style="text-align: center; margin-bottom: 50px;">
        <span style="color: #f59e0b; font-size: 0.85rem; font-weight: 700; text-transform: uppercase; letter-spacing: 1.5px;">SYSTEMATIC EXECUTION</span>
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin-top: 8px;">Our 5-Phase House Relocation Workflow</h2>
        <p style="color: #cbd5e1; font-size: 1rem; max-width: 800px; margin: 10px auto 0 auto;">
          We eliminate confusion, delays, and miscommunication through a disciplined, 5-stage moving framework monitored by a dedicated Move Coordinator.
        </p>
      </div>

      <div style="display: flex; flex-direction: column; gap: 24px; max-width: 950px; margin: 0 auto;">
        
        <div style="background: #0f172a; border-left: 5px solid #f59e0b; border-radius: 12px; padding: 24px 30px;">
          <h4 style="font-size: 1.25rem; font-weight: 700; color: #f59e0b; margin-bottom: 8px;">PHASE 1: Free Pre-Move Survey &amp; Itemized Inventory Assessment</h4>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.7;">
            Our expert surveyor visits your residence (or conducts a detailed video survey) to evaluate cubic feet volume, heavy furniture dismantling requirements, fragile items counting, floor elevation, elevator availability, and parking logistics. We present an all-inclusive formal quotation with zero hidden clauses.
          </p>
        </div>

        <div style="background: #0f172a; border-left: 5px solid #f59e0b; border-radius: 12px; padding: 24px 30px;">
          <h4 style="font-size: 1.25rem; font-weight: 700; color: #f59e0b; margin-bottom: 8px;">PHASE 2: Room-by-Room Packing &amp; Color-Coded Tagging</h4>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.7;">
            On moving day, our uniformed packing crew arrives with fresh, multi-ply boxes and specialized packing materials. Every box is packed room-by-room (Kitchen, Master Bedroom, Kids Room, Living Room) and labeled with a detailed inventory tag and color code for seamless identification at your destination home.
          </p>
        </div>

        <div style="background: #0f172a; border-left: 5px solid #f59e0b; border-radius: 12px; padding: 24px 30px;">
          <h4 style="font-size: 1.25rem; font-weight: 700; color: #f59e0b; margin-bottom: 8px;">PHASE 3: Scientific Container Loading &amp; Transit Securing</h4>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.7;">
            Using hydraulic tailgate ramps and heavy-duty trolley jacks, heavy furniture items (sofas, almirahs, beds) are loaded first at the container base, followed by medium cartons and fragile items on top. Cargo is tied using internal vehicle wall belts to eliminate movement during transit.
          </p>
        </div>

        <div style="background: #0f172a; border-left: 5px solid #f59e0b; border-radius: 12px; padding: 24px 30px;">
          <h4 style="font-size: 1.25rem; font-weight: 700; color: #f59e0b; margin-bottom: 8px;">PHASE 4: Live Satellite GPS Transit &amp; Dedicated Route Tracking</h4>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.7;">
            Your shipment travels in dedicated, fully enclosed container trucks. Customers receive live GPS tracking access and daily status updates from our central logistics desk, ensuring complete peace of mind until the vehicle arrives at the destination city.
          </p>
        </div>

        <div style="background: #0f172a; border-left: 5px solid #f59e0b; border-radius: 12px; padding: 24px 30px;">
          <h4 style="font-size: 1.25rem; font-weight: 700; color: #f59e0b; margin-bottom: 8px;">PHASE 5: Unloading, Furniture Re-Assembly &amp; Debris Disposal</h4>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.7;">
            Our unloading crew carefully carries every box and furniture item to its designated room according to your color-coded layout. Beds, dining tables, and wardrobes are re-assembled by skilled carpenters. We inspect all items against the inventory list and clean up unpacked packaging debris before leaving.
          </p>
        </div>

      </div>

    </div>
  </section>

  <!-- SECTION 5: Household Shifting Cost Estimation Matrix -->
  <section style="padding: 70px 0; background: #0f172a; border-top: 1px solid rgba(255,255,255,0.08); border-bottom: 1px solid rgba(255,255,255,0.08);">
    <div class="container" style="max-width: 1140px; margin: 0 auto; padding: 0 15px;">
      
      <div style="text-align: center; margin-bottom: 40px;">
        <span style="color: #f59e0b; font-size: 0.85rem; font-weight: 700; text-transform: uppercase; letter-spacing: 1.5px;">TRANSPARENT PRICING MATRIX</span>
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin-top: 8px;">Estimated Household Shifting Rate Card (2026 Updated)</h2>
        <p style="color: #cbd5e1; font-size: 0.98rem; max-width: 750px; margin: 10px auto 0 auto;">
          Prices vary based on distance, floor level, elevator availability, and custom wooden crating requirements. Contact us for an exact itemized survey quote.
        </p>
      </div>

      <div style="overflow-x: auto; margin-bottom: 30px;">
        <table style="width: 100%; border-collapse: collapse; text-align: left; background: #070d19; border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 12px; overflow: hidden;">
          <thead>
            <tr style="background: linear-gradient(135deg, #1e1b4b 0%, #0f172a 100%); color: #f59e0b; border-bottom: 2px solid rgba(245, 158, 11, 0.4);">
              <th style="padding: 16px 20px; font-weight: 700; font-size: 1rem;">Home Configuration</th>
              <th style="padding: 16px 20px; font-weight: 700; font-size: 1rem;">Local Shifting (Within City)</th>
              <th style="padding: 16px 20px; font-weight: 700; font-size: 1rem;">Intercity (100 - 500 KM)</th>
              <th style="padding: 16px 20px; font-weight: 700; font-size: 1rem;">Long Distance (500 - 1500+ KM)</th>
              <th style="padding: 16px 20px; font-weight: 700; font-size: 1rem;">Estimated Packing Time</th>
            </tr>
          </thead>
          <tbody style="color: #cbd5e1; font-size: 0.92rem; line-height: 1.6;">
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.08);">
              <td style="padding: 16px 20px; font-weight: 700; color: #ffffff;">1 BHK / Studio Apartment</td>
              <td style="padding: 16px 20px;">₹4,500 - ₹7,500</td>
              <td style="padding: 16px 20px;">₹11,000 - ₹18,000</td>
              <td style="padding: 16px 20px;">₹16,000 - ₹26,000</td>
              <td style="padding: 16px 20px;">3 - 5 Hours</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.08); background: rgba(255,255,255,0.02);">
              <td style="padding: 16px 20px; font-weight: 700; color: #ffffff;">2 BHK Complete Flat</td>
              <td style="padding: 16px 20px;">₹7,500 - ₹12,500</td>
              <td style="padding: 16px 20px;">₹16,000 - ₹26,000</td>
              <td style="padding: 16px 20px;">₹24,000 - ₹38,000</td>
              <td style="padding: 16px 20px;">5 - 7 Hours</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.08);">
              <td style="padding: 16px 20px; font-weight: 700; color: #ffffff;">3 BHK Complete Apartment</td>
              <td style="padding: 16px 20px;">₹11,500 - ₹18,000</td>
              <td style="padding: 16px 20px;">₹22,000 - ₹35,000</td>
              <td style="padding: 16px 20px;">₹32,000 - ₹52,000</td>
              <td style="padding: 16px 20px;">1 Full Day</td>
            </tr>
            <tr>
              <td style="padding: 16px 20px; font-weight: 700; color: #ffffff;">4+ BHK / Villa / Independent House</td>
              <td style="padding: 16px 20px;">₹16,000 - ₹25,000+</td>
              <td style="padding: 16px 20px;">₹30,000 - ₹48,000+</td>
              <td style="padding: 16px 20px;">₹45,000 - ₹75,000+</td>
              <td style="padding: 16px 20px;">1 - 2 Days</td>
            </tr>
          </tbody>
        </table>
      </div>

      <div style="background: rgba(245, 158, 11, 0.08); border: 1px dashed rgba(245, 158, 11, 0.4); border-radius: 12px; padding: 18px 24px; text-align: center; color: #cbd5e1; font-size: 0.9rem;">
        <strong style="color: #f59e0b;">Note:</strong> All rates include labor, loading, unloading, packing material, and basic vehicle freight. Transit Risk Insurance (3% of declared goods value) and 18% GST (claimable with GST invoice) are charged as per statutory guidelines.
      </div>

    </div>
  </section>

  <!-- SECTION 6: Room-by-Room Packing Protocols -->
  <section style="padding: 70px 0; background: #070d19;">
    <div class="container" style="max-width: 1140px; margin: 0 auto; padding: 0 15px;">
      
      <div style="text-align: center; margin-bottom: 50px;">
        <span style="color: #f59e0b; font-size: 0.85rem; font-weight: 700; text-transform: uppercase; letter-spacing: 1.5px;">SPECIALIZED CARE PROTOCOLS</span>
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin-top: 8px;">Room-by-Room Packing &amp; Handling Mastery</h2>
      </div>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 28px;">
        
        <div style="background: #0f172a; border: 1px solid rgba(255,255,255,0.08); border-radius: 16px; padding: 28px;">
          <h3 style="font-size: 1.25rem; font-weight: 700; color: #f59e0b; margin-bottom: 14px;">1. Living Room &amp; Electronics</h3>
          <p style="color: #cbd5e1; font-size: 0.92rem; line-height: 1.7;">
            Large LED/OLED Smart TVs are unmounted, wrapped in anti-static foam, bubble wrapped, and placed inside custom wooden frames. Leather sofas and recliners receive stretch wrap and corrugated shell guards to protect against upholstery tearing or fabric stains.
          </p>
        </div>

        <div style="background: #0f172a; border: 1px solid rgba(255,255,255,0.08); border-radius: 16px; padding: 28px;">
          <h3 style="font-size: 1.25rem; font-weight: 700; color: #f59e0b; margin-bottom: 14px;">2. Master Bedroom &amp; Wardrobes</h3>
          <p style="color: #cbd5e1; font-size: 0.92rem; line-height: 1.7;">
            King &amp; Queen beds are dismantled by our in-house carpenters. Nuts and bolts are stored in sealed bags taped to the bed frame. Mattresses are encased in heavy-duty waterproof polythene covers to keep them spotless during transit.
          </p>
        </div>

        <div style="background: #0f172a; border: 1px solid rgba(255,255,255,0.08); border-radius: 16px; padding: 28px;">
          <h3 style="font-size: 1.25rem; font-weight: 700; color: #f59e0b; margin-bottom: 14px;">3. Kitchen &amp; Crockery Items</h3>
          <p style="color: #cbd5e1; font-size: 0.92rem; line-height: 1.7;">
            Glassware, ceramic plates, microwave bowls, and delicate chinaware are individually double-wrapped in bubble sheet and newsprint paper. They are placed vertically inside heavy 5-ply cartons with foam divider partitions to prevent clinking or shock breakage.
          </p>
        </div>

      </div>

    </div>
  </section>

  <!-- SECTION 7: IBA Approved Bills & Government / Defense Claims -->
  <section style="padding: 70px 0; background: #0f172a; border-top: 1px solid rgba(255,255,255,0.08); border-bottom: 1px solid rgba(255,255,255,0.08);">
    <div class="container" style="max-width: 1140px; margin: 0 auto; padding: 0 15px;">
      
      <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 40px; align-items: center;">
        <div>
          <span style="color: #f59e0b; font-size: 0.85rem; font-weight: 700; text-transform: uppercase; letter-spacing: 1.5px;">CLAIM ELIGIBLE DOCUMENTATION</span>
          <h2 style="font-size: 2.1rem; font-weight: 800; color: #ffffff; margin: 10px 0 20px 0;">Official IBA Approved Bills for 100% Shifting Reimbursement</h2>
          <p style="color: #cbd5e1; font-size: 1rem; line-height: 1.8; margin-bottom: 20px;">
            Are you a government employee, defense personnel (Army, Navy, Air Force), PSU bank officer, or MNC corporate employee entitled to house relocation reimbursement? We provide 100% genuine, claimable shifting documents accepted across all government departments.
          </p>
          <ul style="list-style: none; padding: 0; margin: 0; color: #cbd5e1; font-size: 0.95rem; line-height: 2.2;">
            <li><i class="fas fa-check-circle" style="color: #f59e0b; margin-right: 10px;"></i> <strong>GST Invoice Bill:</strong> Official invoice with valid GSTIN number.</li>
            <li><i class="fas fa-check-circle" style="color: #f59e0b; margin-right: 10px;"></i> <strong>Consignment Note (LR Copy):</strong> Transporter copy signed and stamped.</li>
            <li><i class="fas fa-check-circle" style="color: #f59e0b; margin-right: 10px;"></i> <strong>Itemized Packing Inventory List:</strong> Detailed room-by-room items list.</li>
            <li><i class="fas fa-check-circle" style="color: #f59e0b; margin-right: 10px;"></i> <strong>Money Receipt:</strong> Stamped payment receipt with advance &amp; balance breakdown.</li>
            <li><i class="fas fa-check-circle" style="color: #f59e0b; margin-right: 10px;"></i> <strong>Vehicle Weight Slip &amp; Toll Receipts:</strong> Complete transit proof.</li>
          </ul>
        </div>

        <div style="background: #070d19; border: 1.5px solid rgba(245, 158, 11, 0.35); border-radius: 20px; padding: 35px 30px; box-shadow: 0 15px 35px rgba(0,0,0,0.4);">
          <h3 style="font-size: 1.4rem; font-weight: 800; color: #f59e0b; margin-bottom: 16px; text-align: center;">Who Accepts Our Shifting Bills?</h3>
          <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 14px; text-align: center;">
            <div style="background: #0f172a; padding: 16px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.06); font-weight: 700; color: #ffffff; font-size: 0.9rem;">
              Indian Armed Forces &amp; Defence
            </div>
            <div style="background: #0f172a; padding: 16px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.06); font-weight: 700; color: #ffffff; font-size: 0.9rem;">
              Public Sector Banks (SBI, PNB, etc.)
            </div>
            <div style="background: #0f172a; padding: 16px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.06); font-weight: 700; color: #ffffff; font-size: 0.9rem;">
              Central &amp; State Govt Depts
            </div>
            <div style="background: #0f172a; padding: 16px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.06); font-weight: 700; color: #ffffff; font-size: 0.9rem;">
              MNC Corporates &amp; IT Firms
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>

  <!-- SECTION 8: Comparison Matrix -->
  <section style="padding: 70px 0; background: #070d19;">
    <div class="container" style="max-width: 1140px; margin: 0 auto; padding: 0 15px;">
      
      <div style="text-align: center; margin-bottom: 40px;">
        <span style="color: #f59e0b; font-size: 0.85rem; font-weight: 700; text-transform: uppercase; letter-spacing: 1.5px;">SMART SELECTION GUIDE</span>
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin-top: 8px;">Shree Ashirwad vs Local Casual Packers vs DIY Shifting</h2>
      </div>

      <div style="overflow-x: auto;">
        <table style="width: 100%; border-collapse: collapse; text-align: left; background: #0f172a; border: 1px solid rgba(255,255,255,0.08); border-radius: 12px; overflow: hidden;">
          <thead>
            <tr style="background: #1e1b4b; color: #ffffff;">
              <th style="padding: 16px 20px; font-weight: 700;">Service Feature</th>
              <th style="padding: 16px 20px; font-weight: 700; color: #f59e0b;">Shree Ashirwad Packers</th>
              <th style="padding: 16px 20px; font-weight: 700; color: #94a3b8;">Local Casual Packers</th>
              <th style="padding: 16px 20px; font-weight: 700; color: #94a3b8;">DIY (Self Shifting)</th>
            </tr>
          </thead>
          <tbody style="color: #cbd5e1; font-size: 0.92rem; line-height: 1.6;">
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.08);">
              <td style="padding: 16px 20px; font-weight: 700; color: #ffffff;">Packaging Standard</td>
              <td style="padding: 16px 20px; color: #10b981; font-weight: 700;">7-Layer Heavy Duty Bubble &amp; Wooden Crating</td>
              <td style="padding: 16px 20px; color: #ef4444;">1-Layer Basic Old Blankets</td>
              <td style="padding: 16px 20px; color: #ef4444;">Used Newspaper &amp; Old Cloths</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.08); background: rgba(255,255,255,0.02);">
              <td style="padding: 16px 20px; font-weight: 700; color: #ffffff;">Damage Insurance</td>
              <td style="padding: 16px 20px; color: #10b981; font-weight: 700;">100% Full Transit Policy Protection</td>
              <td style="padding: 16px 20px; color: #ef4444;">No Insurance / Verbal Promises</td>
              <td style="padding: 16px 20px; color: #ef4444;">Zero Protection (Self Risk)</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.08);">
              <td style="padding: 16px 20px; font-weight: 700; color: #ffffff;">IBA &amp; GST Bill Claim</td>
              <td style="padding: 16px 20px; color: #10b981; font-weight: 700;">Official IBA Approved GST Bills</td>
              <td style="padding: 16px 20px; color: #ef4444;">Fake / Unrecognized Hand Receipts</td>
              <td style="padding: 16px 20px; color: #ef4444;">No Bill Available</td>
            </tr>
            <tr>
              <td style="padding: 16px 20px; font-weight: 700; color: #ffffff;">Transit Vehicle</td>
              <td style="padding: 16px 20px; color: #10b981; font-weight: 700;">Weatherproof Enclosed Container Truck with GPS</td>
              <td style="padding: 16px 20px; color: #ef4444;">Open Local Tempo with Ropes</td>
              <td style="padding: 16px 20px; color: #ef4444;">Hired Casual Vehicle</td>
            </tr>
          </tbody>
        </table>
      </div>

    </div>
  </section>

  <!-- SECTION 9: Comprehensive FAQ Section -->
  <section style="padding: 70px 0; background: #0f172a; border-top: 1px solid rgba(255,255,255,0.08); border-bottom: 1px solid rgba(255,255,255,0.08);">
    <div class="container" style="max-width: 900px; margin: 0 auto; padding: 0 15px;">
      
      <div style="text-align: center; margin-bottom: 45px;">
        <span style="color: #f59e0b; font-size: 0.85rem; font-weight: 700; text-transform: uppercase; letter-spacing: 1.5px;">FREQUENTLY ASKED QUESTIONS</span>
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin-top: 8px;">Got Questions About Household Shifting?</h2>
      </div>

      <div style="display: flex; flex-direction: column; gap: 18px;">
        
        <div style="background: #070d19; border: 1px solid rgba(255,255,255,0.08); border-radius: 12px; padding: 22px 25px;">
          <h4 style="font-size: 1.1rem; font-weight: 700; color: #f59e0b; margin-bottom: 8px;">Q1: How early should I book household shifting services with Shree Ashirwad Packers?</h4>
          <p style="color: #cbd5e1; font-size: 0.92rem; line-height: 1.7;">
            We recommend booking your home relocation at least 3 to 7 days in advance for local shifting, and 7 to 10 days in advance for long-distance intercity moves. This ensures guaranteed slot allocation, fresh custom packing materials delivery, and vehicle scheduling.
          </p>
        </div>

        <div style="background: #070d19; border: 1px solid rgba(255,255,255,0.08); border-radius: 12px; padding: 22px 25px;">
          <h4 style="font-size: 1.1rem; font-weight: 700; color: #f59e0b; margin-bottom: 8px;">Q2: What items are NOT allowed to be packed during household shifting?</h4>
          <p style="color: #cbd5e1; font-size: 0.92rem; line-height: 1.7;">
            For safety and legal compliance, we cannot transport hazardous items like gas cylinders, petrol/diesel, fireworks, corrosive chemicals, perishable food items, cash, jewelry, and personal legal documents. Customers should transport jewelry and personal cash independently.
          </p>
        </div>

        <div style="background: #070d19; border: 1px solid rgba(255,255,255,0.08); border-radius: 12px; padding: 22px 25px;">
          <h4 style="font-size: 1.1rem; font-weight: 700; color: #f59e0b; margin-bottom: 8px;">Q3: Are there any hidden extra charges after the quote is provided?</h4>
          <p style="color: #cbd5e1; font-size: 0.92rem; line-height: 1.7;">
            No! Our written quotations are 100% fixed and transparent based on the pre-move survey item list. No extra money is demanded for labor, floor stair handling, or unloading unless additional unlisted items are added on moving day.
          </p>
        </div>

        <div style="background: #070d19; border: 1px solid rgba(255,255,255,0.08); border-radius: 12px; padding: 22px 25px;">
          <h4 style="font-size: 1.1rem; font-weight: 700; color: #f59e0b; margin-bottom: 8px;">Q4: How does transit insurance work for household goods?</h4>
          <p style="color: #cbd5e1; font-size: 0.92rem; line-height: 1.7;">
            We offer full Transit Risk Insurance (typically 3% of declared goods valuation). In the rare event of damage due to accident or natural catastrophe during transit, insurance claims are processed directly with recognized insurance partners for 100% financial compensation.
          </p>
        </div>

        <div style="background: #070d19; border: 1px solid rgba(255,255,255,0.08); border-radius: 12px; padding: 22px 25px;">
          <h4 style="font-size: 1.1rem; font-weight: 700; color: #f59e0b; margin-bottom: 8px;">Q5: Do you dismantle and re-assemble beds, wardrobes, and ACs?</h4>
          <p style="color: #cbd5e1; font-size: 0.92rem; line-height: 1.7;">
            Yes, basic furniture dismantling and re-assembly (wooden beds, dining tables, wardrobes) are included in our standard package. For split AC uninstallation/installation, geyser, and water purifier setup, specialized technicians can be arranged upon request.
          </p>
        </div>

      </div>

    </div>
  </section>

  <!-- SECTION 10: Call to Action Banner -->
  <section style="padding: 60px 0; background: linear-gradient(135deg, #1e1b4b 0%, #0f172a 100%); text-align: center;">
    <div class="container" style="max-width: 900px; margin: 0 auto; padding: 0 15px;">
      <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin-bottom: 14px;">Book Your Household Shifting Today with India’s Most Trusted Packers</h2>
      <p style="color: #cbd5e1; font-size: 1.05rem; margin-bottom: 28px; line-height: 1.7;">
        Enjoy zero damage, IBA approved billing, and stress-free home relocation. Speak directly with our Move Specialists now!
      </p>
      <div style="display: flex; gap: 15px; justify-content: center; flex-wrap: wrap;">
        <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Us Now" style="padding: 15px 34px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 800; font-size: 1.05rem; text-decoration: none; display: inline-flex; align-items: center; gap: 10px; box-shadow: 0 6px 20px rgba(225, 29, 72, 0.4);">
          <i class="fas fa-phone-alt"></i> Call Helpline: <?php echo SITE_PHONE; ?>
        </a>
        <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20to%20book%20my%20household%20shifting." title="WhatsApp Booking" target="_blank" style="padding: 15px 34px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 800; font-size: 1.05rem; text-decoration: none; display: inline-flex; align-items: center; gap: 10px; box-shadow: 0 6px 20px rgba(16, 185, 129, 0.4);">
          <i class="fab fa-whatsapp"></i> Chat on WhatsApp
        </a>
      </div>
    </div>
  </section>

</main>

<?php require_once file_exists(__DIR__ . '/../../includes/footer.php') ? __DIR__ . '/../../includes/footer.php' : $root_dir . '/includes/footer.php'; ?>
