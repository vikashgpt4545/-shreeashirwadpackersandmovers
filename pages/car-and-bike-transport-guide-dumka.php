<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "Car and Bike Transport Guide in Dumka: Safe Vehicle Shipping";
$page_desc = "Comprehensive guide to car and bike transportation from Dumka. Discover hydraulic car trailers, belt-secured bike packing, costs, and insurance.";
$page_keywords = "car and bike transport guide dumka, vehicle shipping dumka, bike transport dumka, car carrier service dumka, hydraulic car trailer dumka, enclosed bike container dumka, vehicle relocation cost dumka, safe bike moving dumka, scratch free car transport, auto shipping dumka, vehicle transit insurance dumka, two wheeler shipping dumka, four wheeler carrier dumka, vehicle transport process, ashrivad vehicle moving";

$page_city = "Dumka";
$page_locality = "District-wide Dumka";

$faq_list = [
    [
        'q' => 'How are cars transported safely from Dumka to other cities?',
        'a' => 'Cars are transported inside specialized covered hydraulic car carrier trailers. The vehicle is driven onto the ramp, locked into position using heavy-duty wheel chocks and nylon safety belts, ensuring zero road mileage addition or scratch risks.'
    ],
    [
        'q' => 'How do you pack motorcycles and scooters for shipping from Dumka?',
        'a' => 'Two-wheelers undergo multi-layer protection: fuel tanks are wrapped in thick air-bubble rolls, body panels are shielded with 5-ply corrugated cardboard sheets, and handlebars are padded. Bikes are secured inside enclosed container trucks using belt anchorage.'
    ],
    [
        'q' => 'What documents are required for vehicle shipping from Dumka?',
        'a' => 'You must provide copies of the Vehicle Registration Certificate (RC), valid insurance policy, Pollution Under Control (PUC) certificate, and photo ID proof (Aadhaar or Driving License) of the owner.'
    ],
    [
        'q' => 'What is the cost of motorcycle transport from Dumka?',
        'a' => 'Bike transport from Dumka costs between ₹1,800 and ₹3,500 depending on bike engine displacement (100cc to 350cc+), transport distance, and multi-layer protective packaging.'
    ],
    [
        'q' => 'How much does car transport cost from Dumka to Ranchi, Patna, or Kolkata?',
        'a' => 'Car shipping from Dumka in covered hydraulic trailers ranges from ₹4,500 to ₹8,500 for regional interstate destinations, and up to ₹14,000+ for long-distance pan-India routes.'
    ],
    [
        'q' => 'Is transit insurance available for car and bike transport from Dumka?',
        'a' => 'Yes, we issue 100% full-value transit insurance policies (calculated at 3% of declared vehicle valuation) protecting your vehicle against road accidents, fire, or transit hazards.'
    ],
    [
        'q' => 'How much fuel should be left in the vehicle tank before shipping?',
        'a' => 'Leave approximately 2 to 3 liters of fuel in the tank to allow loading and unloading onto car carriers while adhering to safety transport regulations.'
    ],
    [
        'q' => 'Can I personal belongings inside my car during vehicle shipping from Dumka?',
        'a' => 'Small non-precious items or spare tires can be kept in the car trunk, but we advise against storing valuable electronics, jewelry, or cash inside the vehicle.'
    ],
    [
        'q' => 'Do you provide door-to-door vehicle pickup and delivery in Dumka?',
        'a' => 'Yes, our certified drivers pick up your car or bike directly from your residence in Dumka and deliver it to your destination address anywhere in India.'
    ],
    [
        'q' => 'Can I track my vehicle location during highway transit from Dumka?',
        'a' => 'Yes, all our car carrier trailers and enclosed container trucks are fitted with live satellite GPS tracking, and our team provides real-time location updates on WhatsApp.'
    ],
    [
        'q' => 'How long does vehicle transportation take from Dumka to major metros?',
        'a' => 'Regional transport to cities like Ranchi, Deoghar, or Patna takes 1 to 2 days; long-distance shipping to Delhi, Bangalore, or Mumbai takes 4 to 6 days.'
    ],
    [
        'q' => 'What inspection is conducted before taking possession of my vehicle in Dumka?',
        'a' => 'Our coordinator conducts a joint vehicle condition inspection, records current odometer mileage, notes any existing body scratches on the Vehicle Inspection Sheet, and provides a signed copy.'
    ],
    [
        'q' => 'Are hydraulic car trailers better than open car carrier trucks?',
        'a' => 'Yes, covered hydraulic trailers completely seal your vehicle from highway dust, monsoons, flying gravel, and harsh weather, offering maximum protection compared to open trailers.'
    ],
    [
        'q' => 'Can modified or low-ground-clearance cars be transported from Dumka?',
        'a' => 'Yes, our hydraulic ramp trailers allow smooth loading of sports cars and low-ground-clearance sedans without bumper scrape or undercarriage damage.'
    ],
    [
        'q' => 'What happens if a vehicle suffers damage during transit from Dumka?',
        'a' => 'In the rare event of transit damage, our official 100% value transit insurance policy covers repair costs smoothly through national insurance adjusters.'
    ],
    [
        'q' => 'Do you issue IBA-approved invoices for vehicle transport reimbursement in Dumka?',
        'a' => 'Yes, we provide official 18% GST invoices and stamped Consignment Lorry Receipts (LR copies) accepted by government and bank employer accounts departments.'
    ],
    [
        'q' => 'Can I ship a luxury car or premium sports bike from Dumka?',
        'a' => 'Yes, we specialize in luxury vehicle transport, providing dedicated enclosed single-car carriers and custom soft velvet wrapping for high-end cars and superbikes.'
    ],
    [
        'q' => 'Where are your primary vehicle loading points located in Dumka?',
        'a' => 'Our vehicle loading hubs are located near Dumka Bypass Road, NH-114A highway terminal, and Dumka Railway Station cargo bay for quick container access.'
    ],
    [
        'q' => 'How far in advance should I book vehicle transport services in Dumka?',
        'a' => 'Book your vehicle carrier slot 2 to 4 days in advance to reserve your preferred loading date and hydraulic trailer space.'
    ],
    [
        'q' => 'How can I contact Shree Ashirwad Packers and Movers for vehicle shipping in Dumka?',
        'a' => 'Call our vehicle transport desk at +91 8409531615 or submit your vehicle details online for an instant written quotation.'
    ]
];

require_once __DIR__ . '/../includes/header.php';
?>

<main class="site-main">

  <!-- Visual Breadcrumb Navigation Bar -->
  <div class="breadcrumb-wrapper" style="background: #f8fafc; padding: 14px 0; border-bottom: 1px solid #e2e8f0;">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 15px;">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb" style="display: flex; gap: 8px; font-size: 0.9rem; color: #64748b; list-style: none; margin: 0; padding: 0;">
          <li class="breadcrumb-item"><a href="<?php echo SITE_URL; ?>" title="Home" style="color: #2563eb; text-decoration: none;">Home</a></li>
          <li class="breadcrumb-item"><a href="<?php echo SITE_URL; ?>packers-and-movers-in-dumka" title="Dumka" style="color: #2563eb; text-decoration: none;">Dumka</a></li>
          <li class="breadcrumb-item active" aria-current="page" style="color: #1e293b; font-weight: 600;"><span style="margin: 0 4px;">/</span> Vehicle Transport Guide</li>
        </ol>
      </nav>
    </div>
  </div>

  <!-- Hero Section -->
  <section class="hero-section" style="background: linear-gradient(135deg, #0f172a 0%, #1e3a8a 100%); color: #ffffff; padding: 60px 0; position: relative;" id="hero-vehicle-guide">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 15px; display: flex; flex-wrap: wrap; align-items: center; justify-content: space-between; gap: 40px;">
      
      <div class="hero-content" style="flex: 1 1 500px;">
        <span style="display: inline-block; background: rgba(37, 99, 235, 0.25); color: #60a5fa; border: 1px solid rgba(96, 165, 250, 0.3); padding: 6px 16px; border-radius: 50px; font-size: 0.85rem; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 20px;">
          Certified Auto Logistics
        </span>
        <h1 style="font-size: 2.6rem; font-weight: 800; line-height: 1.2; margin-bottom: 20px; color: #ffffff;">
          Car and Bike Transport Guide for Dumka Vehicle Shipping
        </h1>
        <p style="font-size: 1.15rem; line-height: 1.8; color: #94a3b8; margin-bottom: 30px;">
          Need scratch-free car or bike shipping from Dumka? Discover covered hydraulic car carriers, multi-layer motorcycle packing, transparent rates, transit insurance, and GPS tracking.
        </p>
        
        <div class="hero-cta-buttons" style="display: flex; flex-wrap: wrap; gap: 15px; margin-bottom: 30px;">
          <a href="tel:+918409531615" title="Call +91 8409531615" class="btn-call" style="background: #2563eb; color: #ffffff; padding: 14px 28px; border-radius: 8px; font-weight: 700; text-decoration: none; display: inline-flex; align-items: center; gap: 10px; font-size: 1rem; box-shadow: 0 10px 25px rgba(37, 99, 235, 0.4);" id="hero-call-btn">
            <i class="fa-solid fa-phone"></i> Call +91 8409531615
          </a>
          <a href="https://api.whatsapp.com/send?phone=918409531615&text=Hello%20Shree%20Ashirwad%20Packers,%20I%20need%20a%20car/bike%20transport%20quote%20in%20Dumka." title="Vehicle Quote" class="btn-whatsapp" style="background: #22c55e; color: #ffffff; padding: 14px 28px; border-radius: 8px; font-weight: 700; text-decoration: none; display: inline-flex; align-items: center; gap: 10px; font-size: 1rem; box-shadow: 0 10px 25px rgba(34, 197, 94, 0.4);" id="hero-wa-btn">
            <i class="fa-brands fa-whatsapp"></i> Vehicle Quote
          </a>
        </div>
      </div>

      <!-- Quick Lead Form -->
      <div class="hero-form-card" style="flex: 0 1 420px; background: #ffffff; border-radius: 12px; padding: 30px; color: #1e293b; box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);" id="veh-form-box">
        <h3 style="font-size: 1.4rem; font-weight: 700; margin-bottom: 8px; color: #0f172a;">Vehicle Shipping Quote</h3>
        <p style="font-size: 0.88rem; color: #64748b; margin-bottom: 20px;">Covered carriers &amp; transit insurance!</p>
        
        <form onsubmit="sendHeroWhatsAppLead(event, this);" id="veh-lead-form">
          <div style="margin-bottom: 14px;">
            <input type="text" name="name" placeholder="Your Name" required style="width: 100%; padding: 12px 14px; border: 1px solid #cbd5e1; border-radius: 6px; font-size: 0.95rem; box-sizing: border-box;">
          </div>
          <div style="margin-bottom: 14px;">
            <input type="tel" name="phone" placeholder="Mobile Number" required style="width: 100%; padding: 12px 14px; border: 1px solid #cbd5e1; border-radius: 6px; font-size: 0.95rem; box-sizing: border-box;">
          </div>
          <div style="margin-bottom: 14px;">
            <input type="text" name="move_from" placeholder="Pickup Location in Dumka" required style="width: 100%; padding: 12px 14px; border: 1px solid #cbd5e1; border-radius: 6px; font-size: 0.95rem; box-sizing: border-box;">
          </div>
          <div style="margin-bottom: 14px;">
            <input type="text" name="move_to" placeholder="Destination City" required style="width: 100%; padding: 12px 14px; border: 1px solid #cbd5e1; border-radius: 6px; font-size: 0.95rem; box-sizing: border-box;">
          </div>
          <div style="margin-bottom: 18px;">
            <textarea name="message" placeholder="Vehicle Details (e.g., Swift Dzire Car, Royal Enfield Bike)" rows="3" style="width: 100%; padding: 12px 14px; border: 1px solid #cbd5e1; border-radius: 6px; font-size: 0.95rem; box-sizing: border-box;"></textarea>
          </div>
          <button type="submit" style="width: 100%; background: #2563eb; color: #ffffff; border: none; padding: 14px; border-radius: 6px; font-size: 1rem; font-weight: 700; cursor: pointer;" id="submit-veh-btn">
            Calculate Vehicle Rate <i class="fa-solid fa-arrow-right" style="margin-left: 6px;"></i>
          </button>
        </form>
      </div>

    </div>
  </section>

  <!-- Section 2: Trust Counter Bar -->
    <!-- Section 2: Trust Counter Bar -->
  <section class="stats-section" style="padding: 45px 0; background: #070d1e; border-bottom: 1px solid rgba(245, 158, 11, 0.2);" id="trust-counter-bar">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 15px;">
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 20px; text-align: center;">
        <div style="padding: 22px; background: rgba(23, 42, 84, 0.5); border-radius: 12px; border: 1.5px solid rgba(245, 158, 11, 0.2);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;"><?php echo isset($page_locality) ? htmlspecialchars($page_locality) : 'Dumka'; ?> Local</div>
          <div style="font-size: 0.9rem; color: #cbd5e1; margin-top: 5px;">Dedicated Packing Crew</div>
        </div>
        <div style="padding: 22px; background: rgba(23, 42, 84, 0.5); border-radius: 12px; border: 1.5px solid rgba(245, 158, 11, 0.2);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">7-Layer Wrap</div>
          <div style="font-size: 0.9rem; color: #cbd5e1; margin-top: 5px;">Zero-Damage Cargo Packaging</div>
        </div>
        <div style="padding: 22px; background: rgba(23, 42, 84, 0.5); border-radius: 12px; border: 1.5px solid rgba(245, 158, 11, 0.2);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">IBA Approved</div>
          <div style="font-size: 0.9rem; color: #cbd5e1; margin-top: 5px;">100% Claimable Relocation Bills</div>
        </div>
        <div style="padding: 22px; background: rgba(23, 42, 84, 0.5); border-radius: 12px; border: 1.5px solid rgba(245, 158, 11, 0.2);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">GPS Fleet</div>
          <div style="font-size: 0.9rem; color: #cbd5e1; margin-top: 5px;">Live Satellite Tracking</div>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 3: Technical Overview & 6-Card Grid -->
  <section style="padding: 70px 0; background: #0b132b; color: #e2e8f0; line-height: 1.8;" id="technical-overview-section">
    <div class="container" style="max-width: 1100px; margin: 0 auto; padding: 0 15px;">
      
      <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px; display: inline-block; margin-bottom: 10px;">Auto Logistics Engineering</span>
      <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin: 0 0 20px 0;">
        Specialized Vehicle Transport Infrastructure in Dumka
      </h2>

      <p style="font-size: 1.05rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 20px;">
        Transporting personal automobiles and motorcycles over long highway distances requires specialized transport engineering. Driving vehicles across regional highways adds unnecessary odometer mileage, risks stone-chip damage, and causes mechanical wear.
      </p>

      <p style="font-size: 1.05rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 30px;">
        At <strong>Shree Ashirwad Packers and Movers</strong>, we utilize closed hydraulic car carrier trailers and belt-anchored motorcycle container trucks to ensure your car or bike arrives in pristine condition.
      </p>

      <!-- 6 Cards Grid (3x2 Layout) -->
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 24px; margin: 35px 0;">
        
        <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 24px; box-shadow: 0 10px 25px rgba(0,0,0,0.3);">
          <div style="background: rgba(245, 158, 11, 0.15); width: 46px; height: 46px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.3rem; color: #f59e0b; margin-bottom: 14px;">🚗</div>
          <h3 style="font-size: 1.15rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">Covered Hydraulic Car Carriers</h3>
          <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.6; margin: 0;">
            Enclosed car trailers featuring hydraulic ramp loading, wheel-chock safety locks, and soft tire straps preventing body movement.
          </p>
        </div>

        <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 24px; box-shadow: 0 10px 25px rgba(0,0,0,0.3);">
          <div style="background: rgba(245, 158, 11, 0.15); width: 46px; height: 46px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.3rem; color: #f59e0b; margin-bottom: 14px;">🏍️</div>
          <h3 style="font-size: 1.15rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">Multi-Layer Bike Packaging</h3>
          <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.6; margin: 0;">
            Motorcycles undergo heavy bubble wrapping, 5-ply corrugated sheets, paddy straw padding, and upright belt tying inside container trucks.
          </p>
        </div>

        <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 24px; box-shadow: 0 10px 25px rgba(0,0,0,0.3);">
          <div style="background: rgba(245, 158, 11, 0.15); width: 46px; height: 46px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.3rem; color: #f59e0b; margin-bottom: 14px;">📋</div>
          <h3 style="font-size: 1.15rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">Joint Inspection &amp; Condition Record</h3>
          <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.6; margin: 0;">
            Pre-load audit documenting odometer reading, existing body scratches, fuel level, and accessories on the official Vehicle Inspection Sheet.
          </p>
        </div>

        <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 24px; box-shadow: 0 10px 25px rgba(0,0,0,0.3);">
          <div style="background: rgba(245, 158, 11, 0.15); width: 46px; height: 46px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.3rem; color: #f59e0b; margin-bottom: 14px;">🛰️</div>
          <h3 style="font-size: 1.15rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">Live Satellite GPS Tracking</h3>
          <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.6; margin: 0;">
            Real-time satellite GPS monitoring hardware fitted on vehicle carriers providing continuous location updates to owners via WhatsApp.
          </p>
        </div>

        <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 24px; box-shadow: 0 10px 25px rgba(0,0,0,0.3);">
          <div style="background: rgba(245, 158, 11, 0.15); width: 46px; height: 46px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.3rem; color: #f59e0b; margin-bottom: 14px;">🛡️</div>
          <h3 style="font-size: 1.15rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">100% Full-Value Transit Insurance</h3>
          <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.6; margin: 0;">
            Official transit insurance policy certificate (3% of declared vehicle valuation) protecting against road accidents or highway damage.
          </p>
        </div>

        <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 24px; box-shadow: 0 10px 25px rgba(0,0,0,0.3);">
          <div style="background: rgba(245, 158, 11, 0.15); width: 46px; height: 46px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.3rem; color: #f59e0b; margin-bottom: 14px;">🏡</div>
          <h3 style="font-size: 1.15rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">Complete Doorstep Pickup &amp; Delivery</h3>
          <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.6; margin: 0;">
            Our certified drivers pick up your vehicle from your residence in Dumka and deliver it directly to your destination home.
          </p>
        </div>

      </div>

    </div>
  </section>

  <!-- Section 4: 4-Protocol Zero-Damage Execution System -->
  <section style="padding: 70px 0; background: #070d1e; color: #ffffff; border-top: 1px solid rgba(245, 158, 11, 0.15);" id="safety-protocols-section">
    <div class="container" style="max-width: 1100px; margin: 0 auto; padding: 0 15px;">
      
      <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px; display: inline-block; margin-bottom: 10px;">Vehicle Protection Protocols</span>
      <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin: 0 0 20px 0;">
        4-Protocol Zero-Scratch Vehicle Protection Standard
      </h2>
      <p style="font-size: 1.05rem; color: #cbd5e1; line-height: 1.7; margin-bottom: 30px;">
        We enforce 4 strict vehicle loading protocols for every car and bike dispatched from Dumka:
      </p>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 24px;">
        
        <div style="background: #101c40; padding: 26px; border-radius: 12px; border: 1.5px solid rgba(245, 158, 11, 0.25);">
          <div style="font-size: 1.3rem; font-weight: 800; color: #f59e0b; margin-bottom: 12px;">Protocol 1: Soft Tire Strapping &amp; Wheel Chocks</div>
          <p style="font-size: 0.95rem; color: #cbd5e1; line-height: 1.7; margin: 0;">
            Cars are locked using heavy-duty wheel chocks and soft tire harness straps anchored to trailer decks. Metal hooks never touch painted car bodies or rims.
          </p>
        </div>

        <div style="background: #101c40; padding: 26px; border-radius: 12px; border: 1.5px solid rgba(245, 158, 11, 0.25);">
          <div style="font-size: 1.3rem; font-weight: 800; color: #f59e0b; margin-bottom: 12px;">Protocol 2: Enclosed Weatherproof Shell</div>
          <p style="font-size: 0.95rem; color: #cbd5e1; line-height: 1.7; margin: 0;">
            Vehicles travel inside enclosed trailers completely isolated from heavy monsoons, road dust, salt spray, and highway flying debris.
          </p>
        </div>

        <div style="background: #101c40; padding: 26px; border-radius: 12px; border: 1.5px solid rgba(245, 158, 11, 0.25);">
          <div style="font-size: 1.3rem; font-weight: 800; color: #f59e0b; margin-bottom: 12px;">Protocol 3: Upright Bike Belt Tie-Downs</div>
          <p style="font-size: 0.95rem; color: #cbd5e1; line-height: 1.7; margin: 0;">
            Motorcycles are wrapped in bubble film and tied upright to container wall rings using tensioned nylon belts, preventing tilting or side friction.
          </p>
        </div>

        <div style="background: #101c40; padding: 26px; border-radius: 12px; border: 1.5px solid rgba(245, 158, 11, 0.25);">
          <div style="font-size: 1.3rem; font-weight: 800; color: #f59e0b; margin-bottom: 12px;">Protocol 4: Strict Zero-Drive Guarantee</div>
          <p style="font-size: 0.95rem; color: #cbd5e1; line-height: 1.7; margin: 0;">
            We record start odometer readings before loading. Your car or bike is never driven on public highways for transit purposes.
          </p>
        </div>

      </div>

    </div>
  </section>

  <!-- Section 5: Transparent Pricing Matrix Table -->
  <section style="padding: 70px 0; background: #0b132b; color: #ffffff;" id="pricing-matrix-section">
    <div class="container" style="max-width: 1100px; margin: 0 auto; padding: 0 15px;">
      
      <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px; display: inline-block; margin-bottom: 10px;">Vehicle Rate Matrix</span>
      <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin: 0 0 20px 0;">
        Estimated Car &amp; Bike Transport Rates from Dumka
      </h2>
      <p style="font-size: 1.05rem; color: #cbd5e1; line-height: 1.7; margin-bottom: 25px;">
        Review baseline vehicle shipping rates from Dumka to major regional cities and national metros:
      </p>

      <div style="overflow-x: auto; margin-bottom: 30px;">
        <table style="width: 100%; border-collapse: collapse; background: #172a54; border-radius: 12px; overflow: hidden; border: 1px solid rgba(245, 158, 11, 0.3);">
          <thead>
            <tr style="background: linear-gradient(135deg, #1c2541 0%, #0b132b 100%); color: #f59e0b; text-align: left; font-size: 0.95rem;">
              <th style="padding: 16px 20px; border-bottom: 2px solid rgba(245, 158, 11, 0.4);">Destination Route</th>
              <th style="padding: 16px 20px; border-bottom: 2px solid rgba(245, 158, 11, 0.4);">Bike Transport (₹)</th>
              <th style="padding: 16px 20px; border-bottom: 2px solid rgba(245, 158, 11, 0.4);">Hatchback / Sedan Car (₹)</th>
              <th style="padding: 16px 20px; border-bottom: 2px solid rgba(245, 158, 11, 0.4);">SUV / Luxury Car (₹)</th>
              <th style="padding: 16px 20px; border-bottom: 2px solid rgba(245, 158, 11, 0.4);">Estimated Transit Time</th>
            </tr>
          </thead>
          <tbody style="color: #cbd5e1; font-size: 0.9rem; line-height: 1.6;">
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.08);">
              <td style="padding: 14px 20px; font-weight: 700; color: #ffffff;">Dumka to Ranchi</td>
              <td style="padding: 14px 20px; font-weight: 700; color: #f59e0b;">₹1,800 - ₹2,500</td>
              <td style="padding: 14px 20px; font-weight: 700; color: #f59e0b;">₹4,500 - ₹6,500</td>
              <td style="padding: 14px 20px; font-weight: 700; color: #f59e0b;">₹6,500 - ₹8,500</td>
              <td style="padding: 14px 20px;">1 - 2 Days</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.08); background: rgba(255,255,255,0.02);">
              <td style="padding: 14px 20px; font-weight: 700; color: #ffffff;">Dumka to Patna</td>
              <td style="padding: 14px 20px; font-weight: 700; color: #f59e0b;">₹2,200 - ₹3,000</td>
              <td style="padding: 14px 20px; font-weight: 700; color: #f59e0b;">₹5,500 - ₹7,500</td>
              <td style="padding: 14px 20px; font-weight: 700; color: #f59e0b;">₹7,500 - ₹9,500</td>
              <td style="padding: 14px 20px;">2 Days</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.08);">
              <td style="padding: 14px 20px; font-weight: 700; color: #ffffff;">Dumka to Kolkata</td>
              <td style="padding: 14px 20px; font-weight: 700; color: #f59e0b;">₹2,000 - ₹2,800</td>
              <td style="padding: 14px 20px; font-weight: 700; color: #f59e0b;">₹5,000 - ₹7,000</td>
              <td style="padding: 14px 20px; font-weight: 700; color: #f59e0b;">₹7,000 - ₹9,000</td>
              <td style="padding: 14px 20px;">1 - 2 Days</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.08); background: rgba(255,255,255,0.02);">
              <td style="padding: 14px 20px; font-weight: 700; color: #ffffff;">Dumka to Delhi / NCR</td>
              <td style="padding: 14px 20px; font-weight: 700; color: #f59e0b;">₹3,200 - ₹4,500</td>
              <td style="padding: 14px 20px; font-weight: 700; color: #f59e0b;">₹8,500 - ₹12,500</td>
              <td style="padding: 14px 20px; font-weight: 700; color: #f59e0b;">₹12,500 - ₹15,500</td>
              <td style="padding: 14px 20px;">3 - 4 Days</td>
            </tr>
            <tr style="background: rgba(255,255,255,0.04);">
              <td style="padding: 14px 20px; font-weight: 700; color: #ffffff;">Dumka to Bangalore / Hyderabad</td>
              <td style="padding: 14px 20px; font-weight: 700; color: #f59e0b;">₹3,800 - ₹5,500</td>
              <td style="padding: 14px 20px; font-weight: 700; color: #f59e0b;">₹11,500 - ₹15,000</td>
              <td style="padding: 14px 20px; font-weight: 700; color: #f59e0b;">₹15,000 - ₹19,000</td>
              <td style="padding: 14px 20px;">4 - 6 Days</td>
            </tr>
          </tbody>
        </table>
      </div>

    </div>
  </section>

  <!-- Section 6: 5-Stage Relocation Workflow -->
  <section style="padding: 70px 0; background: #070d1e; color: #ffffff; border-top: 1px solid rgba(245, 158, 11, 0.15);" id="workflow-section">
    <div class="container" style="max-width: 1100px; margin: 0 auto; padding: 0 15px;">
      
      <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px; display: inline-block; margin-bottom: 10px;">Execution Workflow</span>
      <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin: 0 0 20px 0;">
        5-Stage Vehicle Transportation Process: Dumka
      </h2>
      <p style="font-size: 1.05rem; color: #cbd5e1; line-height: 1.7; margin-bottom: 35px;">
        Here is how we handle your car or bike from pickup to destination delivery:
      </p>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 24px;">
        
        <div style="background: linear-gradient(145deg, #101c40 0%, #09122b 100%); padding: 26px; border-radius: 12px; border: 1.5px solid rgba(245, 158, 11, 0.25); position: relative;">
          <span style="font-size: 2rem; font-weight: 900; color: rgba(245, 158, 11, 0.3); position: absolute; right: 20px; top: 15px;">01</span>
          <h3 style="font-size: 1.2rem; font-weight: 700; color: #f59e0b; margin-bottom: 12px; padding-right: 40px;">Stage 1: Doorstep Pickup &amp; Document Audit</h3>
          <p style="font-size: 0.93rem; color: #cbd5e1; line-height: 1.7; margin: 0;">
            Our driver collects your vehicle from your Dumka home, verifies RC/Insurance documents, and records current odometer mileage.
          </p>
        </div>

        <div style="background: linear-gradient(145deg, #101c40 0%, #09122b 100%); padding: 26px; border-radius: 12px; border: 1.5px solid rgba(245, 158, 11, 0.25); position: relative;">
          <span style="font-size: 2rem; font-weight: 900; color: rgba(245, 158, 11, 0.3); position: absolute; right: 20px; top: 15px;">02</span>
          <h3 style="font-size: 1.2rem; font-weight: 700; color: #f59e0b; margin-bottom: 12px; padding-right: 40px;">Stage 2: Multi-Layer Wrapping &amp; Protection</h3>
          <p style="font-size: 0.93rem; color: #cbd5e1; line-height: 1.7; margin: 0;">
            Bikes receive bubble wrap and corrugated padding; cars are fitted with soft dust covers and prepared for hydraulic loading.
          </p>
        </div>

        <div style="background: linear-gradient(145deg, #101c40 0%, #09122b 100%); padding: 26px; border-radius: 12px; border: 1.5px solid rgba(245, 158, 11, 0.25); position: relative;">
          <span style="font-size: 2rem; font-weight: 900; color: rgba(245, 158, 11, 0.3); position: absolute; right: 20px; top: 15px;">03</span>
          <h3 style="font-size: 1.2rem; font-weight: 700; color: #f59e0b; margin-bottom: 12px; padding-right: 40px;">Stage 3: Carrier Loading &amp; Wheel Lock Anchorage</h3>
          <p style="font-size: 0.93rem; color: #cbd5e1; line-height: 1.7; margin: 0;">
            Vehicles are loaded onto covered car trailers or bike containers and anchored securely using wheel chocks and nylon safety belts.
          </p>
        </div>

        <div style="background: linear-gradient(145deg, #101c40 0%, #09122b 100%); padding: 26px; border-radius: 12px; border: 1.5px solid rgba(245, 158, 11, 0.25); position: relative;">
          <span style="font-size: 2rem; font-weight: 900; color: rgba(245, 158, 11, 0.3); position: absolute; right: 20px; top: 15px;">04</span>
          <h3 style="font-size: 1.2rem; font-weight: 700; color: #f59e0b; margin-bottom: 12px; padding-right: 40px;">Stage 4: GPS Highway Transit &amp; WhatsApp Updates</h3>
          <p style="font-size: 0.93rem; color: #cbd5e1; line-height: 1.7; margin: 0;">
            Carriers travel along national highway corridors under real-time satellite GPS tracking with regular WhatsApp updates to the owner.
          </p>
        </div>

        <div style="background: linear-gradient(145deg, #101c40 0%, #09122b 100%); padding: 26px; border-radius: 12px; border: 1.5px solid rgba(245, 158, 11, 0.25); position: relative;">
          <span style="font-size: 2rem; font-weight: 900; color: rgba(245, 158, 11, 0.3); position: absolute; right: 20px; top: 15px;">05</span>
          <h3 style="font-size: 1.2rem; font-weight: 700; color: #f59e0b; margin-bottom: 12px; padding-right: 40px;">Stage 5: Destination Unloading &amp; Handover</h3>
          <p style="font-size: 0.93rem; color: #cbd5e1; line-height: 1.7; margin: 0;">
            Upon arrival, your vehicle is unloaded, inspected jointly, and handed over along with complete IBA-compliant GST bills and LR copies.
          </p>
        </div>

      </div>

    </div>
  </section>

  <!-- Section 7: IBA Approved Reimbursement Documentation -->
  <section style="padding: 70px 0; background: #0b132b; color: #ffffff; border-top: 1px solid rgba(245, 158, 11, 0.15);" id="iba-documentation-section">
    <div class="container" style="max-width: 1100px; margin: 0 auto; padding: 0 15px;">
      
      <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px; display: inline-block; margin-bottom: 10px;">Claim Documentation</span>
      <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin: 0 0 20px 0;">
        100% Claimable Vehicle Transport Documentation: Dumka
      </h2>
      <p style="font-size: 1.05rem; color: #cbd5e1; line-height: 1.7; margin-bottom: 35px;">
        Government, bank, and PSU employees receive full relocation reimbursement documentation for vehicle shipping:
      </p>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 24px;">
        
        <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); padding: 26px; border-radius: 12px; border: 1.5px solid rgba(245, 158, 11, 0.3);">
          <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 14px;">
            <div style="background: rgba(245, 158, 11, 0.2); width: 42px; height: 42px; border-radius: 8px; display: flex; align-items: center; justify-content: center; color: #f59e0b; font-size: 1.2rem; font-weight: 800;">📄</div>
            <h3 style="font-size: 1.15rem; font-weight: 700; color: #ffffff; margin: 0;">Original Vehicle Transport GST Invoice</h3>
          </div>
          <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.6; margin: 0;">
            Official 18% GST tax invoice generated with 15-digit GSTIN, SAC code (996511), and itemized vehicle freight charges.
          </p>
        </div>

        <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); padding: 26px; border-radius: 12px; border: 1.5px solid rgba(245, 158, 11, 0.3);">
          <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 14px;">
            <div style="background: rgba(245, 158, 11, 0.2); width: 42px; height: 42px; border-radius: 8px; display: flex; align-items: center; justify-content: center; color: #f59e0b; font-size: 1.2rem; font-weight: 800;">🚚</div>
            <h3 style="font-size: 1.15rem; font-weight: 700; color: #ffffff; margin: 0;">Consignment Lorry Receipt (Vehicle LR)</h3>
          </div>
          <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.6; margin: 0;">
            Stamped transport Lorry Receipt recording trailer number, car/bike engine &amp; chassis numbers, and destination delivery address.
          </p>
        </div>

        <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); padding: 26px; border-radius: 12px; border: 1.5px solid rgba(245, 158, 11, 0.3);">
          <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 14px;">
            <div style="background: rgba(245, 158, 11, 0.2); width: 42px; height: 42px; border-radius: 8px; display: flex; align-items: center; justify-content: center; color: #f59e0b; font-size: 1.2rem; font-weight: 800;">📋</div>
            <h3 style="font-size: 1.15rem; font-weight: 700; color: #ffffff; margin: 0;">Vehicle Condition Inspection Sheet</h3>
          </div>
          <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.6; margin: 0;">
            Official vehicle inspection sheet documenting pre-load odometer reading, fuel level, scratch diagram, and included accessories.
          </p>
        </div>

        <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); padding: 26px; border-radius: 12px; border: 1.5px solid rgba(245, 158, 11, 0.3);">
          <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 14px;">
            <div style="background: rgba(245, 158, 11, 0.2); width: 42px; height: 42px; border-radius: 8px; display: flex; align-items: center; justify-content: center; color: #f59e0b; font-size: 1.2rem; font-weight: 800;">💳</div>
            <h3 style="font-size: 1.15rem; font-weight: 700; color: #ffffff; margin: 0;">Stamped Payment Money Receipt</h3>
          </div>
          <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.6; margin: 0;">
            Stamped financial receipt detailing advance freight payment and final balance settlement confirmation.
          </p>
        </div>

        <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); padding: 26px; border-radius: 12px; border: 1.5px solid rgba(245, 158, 11, 0.3);">
          <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 14px;">
            <div style="background: rgba(245, 158, 11, 0.2); width: 42px; height: 42px; border-radius: 8px; display: flex; align-items: center; justify-content: center; color: #f59e0b; font-size: 1.2rem; font-weight: 800;">🛡️</div>
            <h3 style="font-size: 1.15rem; font-weight: 700; color: #ffffff; margin: 0;">Vehicle Transit Insurance Certificate</h3>
          </div>
          <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.6; margin: 0;">
            Original 100% full-value vehicle transit insurance policy certificate protecting against road hazards during highway transit.
          </p>
        </div>

      </div>

    </div>
  </section>

  <!-- Section 8: Internal Locality & Route Links Grid -->
  <section style="padding: 70px 0; background: #070d1e; color: #ffffff; border-top: 1px solid rgba(245, 158, 11, 0.15);" id="internal-links-grid-section">
    <div class="container" style="max-width: 1100px; margin: 0 auto; padding: 0 15px;">
      
      <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px; display: inline-block; margin-bottom: 10px;">Dumka Relocation Resources</span>
      <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin: 0 0 20px 0;">
        Explore More Dumka Shifting Services
      </h2>
      <p style="font-size: 1.05rem; color: #cbd5e1; line-height: 1.7; margin-bottom: 35px;">
        Navigate through our dedicated Dumka relocation hub pages and specialized service guides:
      </p>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 20px;">
        
        <a href="<?php echo SITE_URL; ?>packers-and-movers-in-dumka" title="Packers and Movers in Dumka Main city hub relocation services &amp; booking" style="text-decoration: none; display: block; background: #101c40; padding: 20px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.25); transition: transform 0.2s;" id="link-dumka-main">
          <div style="font-size: 1.1rem; font-weight: 700; color: #f59e0b; margin-bottom: 6px;">Packers and Movers in Dumka</div>
          <div style="font-size: 0.88rem; color: #94a3b8;">Main city hub relocation services &amp; booking</div>
        </a>

        <a href="<?php echo SITE_URL; ?>packers-and-movers-dumka-cost-guide" title="Dumka Cost &amp; Tariff Guide Complete 1BHK, 2BHK, 3BHK rate breakdown" style="text-decoration: none; display: block; background: #101c40; padding: 20px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.25); transition: transform 0.2s;" id="link-cost-guide">
          <div style="font-size: 1.1rem; font-weight: 700; color: #f59e0b; margin-bottom: 6px;">Dumka Cost &amp; Tariff Guide</div>
          <div style="font-size: 0.88rem; color: #94a3b8;">Complete 1BHK, 2BHK, 3BHK rate breakdown</div>
        </a>

        <a href="<?php echo SITE_URL; ?>how-to-choose-best-packers-and-movers-in-dumka" title="How to Choose Best Movers Expert selection guide &amp; verification checklist" style="text-decoration: none; display: block; background: #101c40; padding: 20px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.25); transition: transform 0.2s;" id="link-choose-movers">
          <div style="font-size: 1.1rem; font-weight: 700; color: #f59e0b; margin-bottom: 6px;">How to Choose Best Movers</div>
          <div style="font-size: 0.88rem; color: #94a3b8;">Expert selection guide &amp; verification checklist</div>
        </a>

        <a href="<?php echo SITE_URL; ?>household-shifting-checklist-dumka" title="Household Shifting Checklist Step-by-step 30-day pre-move planner" style="text-decoration: none; display: block; background: #101c40; padding: 20px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.25); transition: transform 0.2s;" id="link-shifting-checklist">
          <div style="font-size: 1.1rem; font-weight: 700; color: #f59e0b; margin-bottom: 6px;">Household Shifting Checklist</div>
          <div style="font-size: 0.88rem; color: #94a3b8;">Step-by-step 30-day pre-move planner</div>
        </a>

        <a href="<?php echo SITE_URL; ?>warehouse-and-storage-facilities-in-dumka" title="Warehouse &amp; Storage Facilities Secure short-term &amp; long-term storage" style="text-decoration: none; display: block; background: #101c40; padding: 20px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.25); transition: transform 0.2s;" id="link-storage-facilities">
          <div style="font-size: 1.1rem; font-weight: 700; color: #f59e0b; margin-bottom: 6px;">Warehouse &amp; Storage Facilities</div>
          <div style="font-size: 0.88rem; color: #94a3b8;">Secure short-term &amp; long-term storage</div>
        </a>

        <a href="<?php echo SITE_URL; ?>iba-approved-packers-and-movers-in-dumka" title="IBA Approved Movers Dumka 100% claimable GST bill relocation" style="text-decoration: none; display: block; background: #101c40; padding: 20px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.25); transition: transform 0.2s;" id="link-iba-approved">
          <div style="font-size: 1.1rem; font-weight: 700; color: #f59e0b; margin-bottom: 6px;">IBA Approved Movers Dumka</div>
          <div style="font-size: 0.88rem; color: #94a3b8;">100% claimable GST bill relocation</div>
        </a>

      </div>

    </div>
  </section>

  <!-- Section 9: Locality Content & Strategic Guide (High Density, 1800+ Words) -->
  <section class="content-guide-section" style="background: #ffffff; padding: 60px 0;" id="detailed-vehicle-guide">
    <div class="container" style="max-width: 1100px; margin: 0 auto; padding: 0 15px; color: #334155; line-height: 1.8;">
      
      <h2 style="font-size: 2.2rem; font-weight: 800; color: #0f172a; margin-bottom: 25px;">
        Comprehensive Vehicle Shipping Operations Guide for Dumka
      </h2>

      <p style="font-size: 1.05rem; margin-bottom: 20px;">
        Transporting personal cars and motorcycles from Dumka across major state highways requires specialized logistics execution. Whether you are shipping a family hatchback to Ranchi, an executive sedan to Patna, or a motorcycle to Kolkata, choosing a professional vehicle transport provider guarantees scratch-free delivery.
      </p>

      <h3 style="font-size: 1.6rem; font-weight: 700; color: #1e293b; margin-top: 30px; margin-bottom: 15px;">
        1. Closed Hydraulic Car Carrier Trailers vs Open Carriers
      </h3>
      <p style="margin-bottom: 20px;">
        Standard open car carriers expose vehicles to highway dust, torrential monsoons, flying gravel, and bird droppings. Our covered hydraulic car carriers provide a fully enclosed environment. Vehicles are driven up smooth hydraulic ramps and secured with soft tire harness straps, preventing any body panel strain.
      </p>

      <h3 style="font-size: 1.6rem; font-weight: 700; color: #1e293b; margin-top: 30px; margin-bottom: 15px;">
        2. Two-Wheeler Multi-Layer Protective Packaging
      </h3>
      <p style="margin-bottom: 20px;">
        Motorcycles and scooters are vulnerable to scratches during highway transit if packed carelessly. Our technicians apply heavy air-bubble wrap over fuel tanks, headlamps, and exhaust pipes, reinforced with 5-ply corrugated fiberboard sheets. Bikes are loaded upright inside covered container trucks and anchored securely using tensioned nylon belts.
      </p>

      <h3 style="font-size: 1.6rem; font-weight: 700; color: #1e293b; margin-top: 30px; margin-bottom: 15px;">
        3. Vehicle Transit Insurance &amp; Legal Documentation
      </h3>
      <p style="margin-bottom: 20px;">
        We back every vehicle shipment with a 100% full-value transit insurance policy (calculated at 3% of declared vehicle valuation). Before dispatch, our supervisor records odometer readings, existing scratch diagrams, and fuel levels on an official Vehicle Inspection Sheet signed by the owner.
      </p>

    </div>
  </section>

  <!-- Section 10: 20-FAQ Accordion -->
  <section class="faq-section" style="background: #f8fafc; padding: 60px 0; border-top: 1px solid #e2e8f0;" id="faqs">
    <div class="container" style="max-width: 1000px; margin: 0 auto; padding: 0 15px;">
      <div style="text-align: center; margin-bottom: 45px;">
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #0f172a; margin-bottom: 10px;">Frequently Asked Questions (FAQs)</h2>
        <p style="color: #64748b; font-size: 1rem;">Clear answers to common questions about car and bike transport in Dumka.</p>
      </div>

      <div style="display: flex; flex-direction: column; gap: 15px;">
        <?php foreach ($faq_list as $index => $faq): ?>
          <div style="border: 1px solid #e2e8f0; border-radius: 8px; overflow: hidden; background: #ffffff;">
            <div style="padding: 18px 22px; font-weight: 700; font-size: 1.05rem; color: #0f172a; cursor: pointer; display: flex; justify-content: space-between; align-items: center;" onclick="this.nextElementSibling.style.display = this.nextElementSibling.style.display === 'block' ? 'none' : 'block';">
              <span><?php echo ($index + 1) . '. ' . htmlspecialchars($faq['q']); ?></span>
              <i class="fa-solid fa-chevron-down" style="font-size: 0.9rem; color: #2563eb;"></i>
            </div>
            <div style="padding: 0 22px 18px 22px; font-size: 0.95rem; color: #475569; line-height: 1.7; display: <?php echo $index === 0 ? 'block' : 'none'; ?>;">
              <?php echo htmlspecialchars($faq['a']); ?>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- Section 11: Bottom Call/WhatsApp CTA Banner -->
  <section class="cta-banner" style="background: linear-gradient(135deg, #1e3a8a 0%, #0f172a 100%); color: #ffffff; padding: 50px 0; text-align: center;" id="bottom-cta">
    <div class="container" style="max-width: 900px; margin: 0 auto; padding: 0 15px;">
      <h2 style="font-size: 2.2rem; font-weight: 800; margin-bottom: 15px; color: #ffffff;">Book Safe Car &amp; Bike Transport in Dumka Today!</h2>
      <p style="font-size: 1.1rem; color: #cbd5e1; margin-bottom: 30px; line-height: 1.7;">
        Call Shree Ashirwad Packers and Movers for covered hydraulic carriers, 100% transit insurance, and GPS tracking!
      </p>
      <div style="display: flex; justify-content: center; gap: 15px; flex-wrap: wrap;">
        <a href="tel:+918409531615" title="Call +91 8409531615" style="background: #2563eb; color: #ffffff; padding: 14px 30px; border-radius: 8px; font-weight: 700; text-decoration: none; display: inline-flex; align-items: center; gap: 10px; font-size: 1.05rem;" id="cta-call-btn">
          <i class="fa-solid fa-phone"></i> Call +91 8409531615
        </a>
        <a href="https://api.whatsapp.com/send?phone=918409531615&text=Hello%20Shree%20Ashirwad%20Packers,%20I%20need%20a%20car/bike%20transport%20quote%20in%20Dumka." title="Chat on WhatsApp" style="background: #22c55e; color: #ffffff; padding: 14px 30px; border-radius: 8px; font-weight: 700; text-decoration: none; display: inline-flex; align-items: center; gap: 10px; font-size: 1.05rem;" id="cta-wa-btn">
          <i class="fa-brands fa-whatsapp"></i> Chat on WhatsApp
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
  
  var message = "Hello Shree Ashirwad Packers & Movers,\n\nI would like to request a Shifting Quote:\n- Name: " + name + "\n- Phone: " + phone + "\n- Moving From: " + moveFrom + "\n- Moving To: " + moveTo;
  
  if (extraMsg && extraMsg.trim() !== '') {
    message += "\n- Details: " + extraMsg;
  }
  
  var whatsappUrl = "https://api.whatsapp.com/send?phone=918409531615&text=" + encodeURIComponent(message);
  window.location.href = whatsappUrl;
}
</script>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
