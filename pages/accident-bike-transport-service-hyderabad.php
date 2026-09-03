<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "Accident Bike Transport Service Hyderabad | 24/7 Emergency Towing";
$page_desc = "24/7 emergency accident bike transport and motorcycle flatbed towing in Hyderabad. Safe winched transit to authorized service centers & insurance yards across Hitech City, Gachibowli, Kukatpally, Madhapur & ORR. Call 8409531615.";
$page_keywords = "accident bike transport hyderabad, bike parcel service hyderabad, motorcycle towing service hyderabad, flatbed bike carrier hyderabad, emergency bike recovery, damaged two wheeler transport, transport charges extra";
$canonical_url = "https://shreeashirwadpackersandmovers.com/pages/accident-bike-transport-service-hyderabad.php";

$faq_list = [
    ['q' => 'How fast can an emergency flatbed bike towing carrier reach my spot in Hyderabad?', 'a' => 'Our 24/7 emergency response towing trucks cover major Hyderabad corridors (Hitech City, Gachibowli, ORR, Kukatpally, Secunderabad, Madhapur) with an average dispatch arrival time of 30 to 45 minutes.'],
    ['q' => 'How are non-rollable or severely jammed accident bikes loaded onto the truck?', 'a' => 'We utilize specialized hydraulic flatbed trucks fitted with synthetic soft-rope electric winches, wheel chocks, and 4-point soft-loop harness straps to safely haul and anchor non-rollable motorcycles without secondary frame damage.'],
    ['q' => 'Can you transport my damaged bike directly to an authorized workshop or insurance survey yard?', 'a' => 'Yes. We provide direct point-to-point transit from accident spots or police stations directly to authorized brand service centers (e.g. Hero, Honda, Royal Enfield, KTM, BMW Motorrad, Kawasaki) or insurance survey yards across Hyderabad.'],
    ['q' => 'What documents are required to transport an accident-involved motorcycle in Hyderabad?', 'a' => 'You need a photocopy of the Vehicle Registration Certificate (RC), driver license, insurance policy copy, and an Police Spot Memo / FIR copy if legally mandated for vehicle towing.'],
    ['q' => 'Are emergency motorcycle recovery services available late at night on Hyderabad ORR?', 'a' => 'Yes! Our emergency dispatch helpline operates 24/7, 365 days a year across the entire Outer Ring Road (ORR) network, PVNR Expressway, and National Highways connecting Hyderabad.'],
    ['q' => 'Is flatbed hydraulic towing safer than traditional rope pulling for damaged motorcycles?', 'a' => 'Absolutely. Flatbed hydraulic carriers eliminate road friction and balance risks entirely. Your bike is completely lifted onto a stationary bed, preventing further wheel, fork, or transmission damage.'],
    ['q' => 'Can you transport an accident bike from Hyderabad to another city like Vijayawada, Vizag, or Bengaluru?', 'a' => 'Yes. We provide both local Hyderabad emergency towing and long-distance intercity covered container transport for damaged bikes heading to home cities or specialized repair facilities.'],
    ['q' => 'How are fairings and delicate parts protected on a damaged bike during transport?', 'a' => 'Our crew applies soft-pad foam wrapping and protective stretch film around exposed plastics, fuel tanks, and handles before winching to prevent any secondary scratches.'],
    ['q' => 'Do insurance companies reimburse flatbed bike towing charges in Hyderabad?', 'a' => 'Yes! We issue official itemized GST tax invoices (SAC code 996511) and towing receipts accepted by all major general insurance companies for cashless or claim reimbursement.'],
    ['q' => 'How can I request immediate emergency bike towing in Hyderabad?', 'a' => 'Call +91 8409531615 or share your live GPS location on WhatsApp to dispatch our nearest flatbed recovery vehicle immediately.']
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
        <span class="breadcrumb-item active">Accident Bike Transport Hyderabad</span>
      </div>
    </div>
  </div>

  <!-- 2. Hero Section & Instant WhatsApp Lead Form -->
  <section class="hero-section" style="background: linear-gradient(135deg, #0b132b 0%, #1c2541 100%); padding: 60px 0; color: #ffffff;">
    <div class="container">
      <div class="hero-grid" style="display: grid; grid-template-columns: 1.2fr 0.8fr; gap: 40px; align-items: center;">
        
        <!-- Hero Text Column -->
        <div class="hero-text">
          <span class="section-tag" style="background: rgba(225, 29, 72, 0.2); color: #f43f5e; border: 1px solid rgba(244, 63, 94, 0.4); padding: 6px 16px; border-radius: 20px; font-size: 0.85rem; font-weight: 700; text-transform: uppercase; display: inline-block; margin-bottom: 15px;">
            24/7 EMERGENCY RECOVERY &amp; TOWING HYDERABAD
          </span>
          <h1 style="font-size: 2.6rem; font-weight: 800; line-height: 1.2; margin-bottom: 20px; color: #ffffff;">
            Accident Bike Transport Service <span style="color: #f59e0b;">Hyderabad</span>
          </h1>
          <p style="font-size: 1.05rem; color: #cbd5e1; line-height: 1.7; margin-bottom: 25px;">
            Met with a road mishap or mechanical breakdown in Hyderabad? Shree Ashirwad Packers and Movers provides 24/7 emergency flatbed motorcycle towing, winched loading for non-rollable bikes, and safe transit to service centers across Hitech City, Gachibowli, Madhapur, Kukatpally, Secunderabad, and ORR.
          </p>

          <div style="display: flex; gap: 15px; flex-wrap: wrap; margin-bottom: 30px;">
            <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Emergency Dispatch" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
              <i class="fas fa-ambulance" style="margin-right: 8px;"></i> Call Helpline: <?php echo SITE_PHONE; ?>
            </a>
            <a href="https://wa.me/918409531615?text=URGENT:%20I%20need%20accident%20bike%20towing%20in%20Hyderabad." title="Chat on WhatsApp" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
              <i class="fab fa-whatsapp" style="margin-right: 8px;"></i> WhatsApp Location
            </a>
          </div>

          <div style="display: flex; gap: 20px; font-size: 0.9rem; color: #94a3b8;">
            <span><strong style="color: #f59e0b;">24/7</strong> Helpline</span>
            <span><strong style="color: #f59e0b;">Hydraulic</strong> Winch Loading</span>
            <span><strong style="color: #f59e0b;">Zero Extra Damage</strong> Guarantee</span>
          </div>
        </div>

        <!-- Hero Lead Form Column -->
        <div class="hero-form-card" style="background: rgba(255, 255, 255, 0.05); backdrop-filter: blur(10px); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 16px; padding: 30px; box-shadow: 0 15px 35px rgba(0,0,0,0.4);">
          <h2 style="font-size: 1.4rem; color: #ffffff; margin-bottom: 8px; font-weight: 700; text-align: center;">Request Emergency Towing</h2>
          <p style="font-size: 0.85rem; color: #94a3b8; text-align: center; margin-bottom: 20px;">Immediate dispatch confirmation across Greater Hyderabad</p>

          <form action="#" method="POST" onsubmit="sendHeroWhatsAppLead(event, this);">
            <div style="margin-bottom: 14px;">
              <input type="text" name="name" class="form-control" placeholder="Your Full Name" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="margin-bottom: 14px;">
              <input type="tel" name="phone" class="form-control" placeholder="10-Digit Mobile Number" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 10px; margin-bottom: 14px;">
              <input type="text" name="move_from" class="form-control" placeholder="Current Spot (Hyderabad)" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
              <input type="text" name="move_to" class="form-control" placeholder="Workshop / Destination" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="margin-bottom: 16px;">
              <textarea name="message" class="form-control" rows="2" placeholder="Bike Condition (e.g. Jammed Wheel / Frame Damage / Rollable)" style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;"></textarea>
            </div>
            <button type="submit" class="btn btn-primary" style="width: 100%; padding: 14px; font-weight: 700; font-size: 1rem; border-radius: 8px;">
              Dispatch Flatbed Truck Now &rarr;
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
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">30 Mins</div>
          <div style="font-size: 0.9rem; color: #cbd5e1; margin-top: 5px;">Average Hyderabad Dispatch Time</div>
        </div>
        <div style="padding: 20px; background: rgba(23, 42, 84, 0.5); border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">Flatbed</div>
          <div style="font-size: 0.9rem; color: #cbd5e1; margin-top: 5px;">Hydraulic Winch Carrier Beds</div>
        </div>
        <div style="padding: 20px; background: rgba(23, 42, 84, 0.5); border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">24 / 7</div>
          <div style="font-size: 0.9rem; color: #cbd5e1; margin-top: 5px;">Round-the-Clock Dispatch Unit</div>
        </div>
        <div style="padding: 20px; background: rgba(23, 42, 84, 0.5); border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">GST Bills</div>
          <div style="font-size: 0.9rem; color: #cbd5e1; margin-top: 5px;">Reimbursable Towing Receipts</div>
        </div>
      </div>
    </div>
  </section>

  <!-- 4. 6-Card Feature Grid (3x2 Layout) -->
  <section style="padding: 65px 0; background: #0b132b; color: #e2e8f0; line-height: 1.8;">
    <div class="container">
      
      <div style="max-width: 950px; margin: 0 auto;">
        <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Recovery Features</span>
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin: 10px 0 20px 0;">
          Why Choose Us for <span style="color: #f59e0b;">Accident Bike Towing in Hyderabad</span>
        </h2>

        <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px; margin: 30px 0;">
          
          <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px;">
            <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;"><i class="fas fa-truck-monster"></i></div>
            <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">Hydraulic Flatbed Carriers</h3>
            <p style="font-size: 0.9rem; color: #cbd5e1; margin: 0;">
              Zero road drag or wheel friction. Platforms tilt to ground level for effortless loading.
            </p>
          </div>

          <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px;">
            <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;"><i class="fas fa-cogs"></i></div>
            <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">Synthetic Soft Winches</h3>
            <p style="font-size: 0.9rem; color: #cbd5e1; margin: 0;">
              Gently hauls non-rollable bikes with locked wheels, bent forks, or broken chains onto flatbed.
            </p>
          </div>

          <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px;">
            <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;"><i class="fas fa-shield-alt"></i></div>
            <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">Zero Secondary Damage</h3>
            <p style="font-size: 0.9rem; color: #cbd5e1; margin: 0;">
              Soft-loop nylon harness straps prevent scratch or dent damage during emergency hauling.
            </p>
          </div>

          <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px;">
            <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;"><i class="fas fa-file-invoice-dollar"></i></div>
            <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">Insurance Towing Invoice</h3>
            <p style="font-size: 0.9rem; color: #cbd5e1; margin: 0;">
              GST invoices (SAC 996511) accepted by all major auto insurance companies for full claim refund.
            </p>
          </div>

          <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px;">
            <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;"><i class="fas fa-clock"></i></div>
            <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">24/7 Night Dispatch</h3>
            <p style="font-size: 0.9rem; color: #cbd5e1; margin: 0;">
              Active hotline and immediate emergency dispatch across Hyderabad Outer Ring Road &amp; Expressways.
            </p>
          </div>

          <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px;">
            <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;"><i class="fas fa-warehouse"></i></div>
            <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">Service Center Handover</h3>
            <p style="font-size: 0.9rem; color: #cbd5e1; margin: 0;">
              Direct delivery &amp; official job card handover at authorized workshops or survey yards.
            </p>
          </div>

        </div>

      </div>

    </div>
  </section>

  <!-- 5. Specialized Transport Modes -->
  <section style="padding: 60px 0; background: #070d1e; color: #ffffff;">
    <div class="container" style="max-width: 950px;">
      
      <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Transportation Options</span>
      <h2 style="font-size: 2.1rem; font-weight: 800; color: #ffffff; margin: 10px 0 25px 0;">
        Specialized Recovery Solutions for Damaged Vehicles
      </h2>

      <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px;">
        <div style="background: #101c40; padding: 20px; border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #f59e0b; font-size: 1.05rem; margin-bottom: 8px;">Flatbed Hydraulic Towing</h4>
          <p style="font-size: 0.88rem; color: #cbd5e1; margin: 0;">Tilting flatbed platform for zero ground drag. Recommended for heavy cruisers &amp; superbikes.</p>
        </div>

        <div style="background: #101c40; padding: 20px; border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #f59e0b; font-size: 1.05rem; margin-bottom: 8px;">Winched Recovery Bed</h4>
          <p style="font-size: 0.88rem; color: #cbd5e1; margin: 0;">High-torque electric winch setup designed for bikes with locked wheels or smashed forks.</p>
        </div>

        <div style="background: #101c40; padding: 20px; border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #f59e0b; font-size: 1.05rem; margin-bottom: 8px;">Intercity Covered Carrier</h4>
          <p style="font-size: 0.88rem; color: #cbd5e1; margin: 0;">Long-distance intercity container shipping for damaged bikes returning to home states.</p>
        </div>
      </div>

    </div>
  </section>

  <!-- 6. 7-Layer Bike Safety Protocol -->
  <section style="padding: 60px 0; background: #0b132b; color: #ffffff;">
    <div class="container" style="max-width: 950px;">
      
      <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Safety Protocol</span>
      <h2 style="font-size: 2.1rem; font-weight: 800; color: #ffffff; margin: 10px 0 25px 0;">
        Our Accident Recovery &amp; Hauling Protocol
      </h2>

      <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 15px;">
        <div style="background: #172a54; padding: 18px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <div style="font-size: 0.8rem; color: #f59e0b; font-weight: 700;">STEP 01</div>
          <h4 style="font-size: 0.95rem; color: #fff; margin: 4px 0;">Emergency Spot Audit</h4>
          <p style="font-size: 0.82rem; color: #cbd5e1; margin: 0;">Assessing vehicle condition, wheel rollability, &amp; fluid leaks at mishap site.</p>
        </div>

        <div style="background: #172a54; padding: 18px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <div style="font-size: 0.8rem; color: #f59e0b; font-weight: 700;">STEP 02</div>
          <h4 style="font-size: 0.95rem; color: #fff; margin: 4px 0;">Protective Padding</h4>
          <p style="font-size: 0.82rem; color: #cbd5e1; margin: 0;">Wrapping bubble sheet &amp; soft pads around intact fairings and fuel tank.</p>
        </div>

        <div style="background: #172a54; padding: 18px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <div style="font-size: 0.8rem; color: #f59e0b; font-weight: 700;">STEP 03</div>
          <h4 style="font-size: 0.95rem; color: #fff; margin: 4px 0;">Hydraulic Bed Lowering</h4>
          <p style="font-size: 0.82rem; color: #cbd5e1; margin: 0;">Tilting flatbed platform flat to ground level to eliminate incline resistance.</p>
        </div>

        <div style="background: #172a54; padding: 18px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <div style="font-size: 0.8rem; color: #f59e0b; font-weight: 700;">STEP 04</div>
          <h4 style="font-size: 0.95rem; color: #fff; margin: 4px 0;">Winched Loading</h4>
          <p style="font-size: 0.82rem; color: #cbd5e1; margin: 0;">Securing soft nylon winch straps and pulling bike onto carrier bed.</p>
        </div>

        <div style="background: #172a54; padding: 18px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <div style="font-size: 0.8rem; color: #f59e0b; font-weight: 700;">STEP 05</div>
          <h4 style="font-size: 0.8rem; color: #f59e0b; font-weight: 700;">4-Point Ratchet Lock</h4>
          <p style="font-size: 0.82rem; color: #cbd5e1; margin: 0;">Anchoring handlebar clamps &amp; swingarm to bed using heavy ratchet straps.</p>
        </div>

        <div style="background: #172a54; padding: 18px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <div style="font-size: 0.8rem; color: #f59e0b; font-weight: 700;">STEP 06</div>
          <h4 style="font-size: 0.95rem; color: #fff; margin: 4px 0;">Direct Transit</h4>
          <p style="font-size: 0.82rem; color: #cbd5e1; margin: 0;">Non-stop GPS tracked delivery directly to designated workshop or survey yard.</p>
        </div>

        <div style="background: #172a54; padding: 18px; border-radius: 10px; border-left: 4px solid #f59e0b; grid-column: span 2;">
          <div style="font-size: 0.8rem; color: #f59e0b; font-weight: 700;">STEP 07</div>
          <h4 style="font-size: 0.95rem; color: #fff; margin: 4px 0;">Workshop Handover &amp; Receipt</h4>
          <p style="font-size: 0.82rem; color: #cbd5e1; margin: 0;">Obtaining official service advisor acknowledgment signature &amp; GST bill issuance.</p>
        </div>
      </div>

    </div>
  </section>

  <!-- 7. Greater Hyderabad Emergency Zones -->
  <section style="padding: 60px 0; background: #070d1e; color: #ffffff;">
    <div class="container" style="max-width: 900px;">
      
      <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Coverage Area</span>
      <h2 style="font-size: 2.1rem; font-weight: 800; color: #ffffff; margin: 10px 0 20px 0;">
        Serving All Major <span style="color: #f59e0b;">Hyderabad Emergency Zones</span>
      </h2>

      <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 16px; margin-bottom: 25px;">
        <div style="background: #101c40; padding: 18px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #ffffff; font-size: 1.05rem; margin-bottom: 6px;">IT Corridor &amp; Financial District</h4>
          <p style="font-size: 0.88rem; color: #94a3b8; margin: 0;">Hitech City, Gachibowli, Madhapur, Kondapur, RAIDURG, Nanakramguda, Kokapet.</p>
        </div>

        <div style="background: #101c40; padding: 18px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #ffffff; font-size: 1.05rem; margin-bottom: 6px;">Expressway &amp; Outer Ring Road (ORR)</h4>
          <p style="font-size: 0.88rem; color: #94a3b8; margin: 0;">PVNR Expressway, ORR Toll Gates (Exits 1-19), Shamshabad Airport Road, NH-44 Corridor.</p>
        </div>

        <div style="background: #101c40; padding: 18px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #ffffff; font-size: 1.05rem; margin-bottom: 6px;">North &amp; West Hyderabad Suburbs</h4>
          <p style="font-size: 0.88rem; color: #94a3b8; margin: 0;">Kukatpally, Miyapur, Bachupally, Nizampet, Chanda Nagar, Patancheru, Medchal.</p>
        </div>

        <div style="background: #101c40; padding: 18px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #ffffff; font-size: 1.05rem; margin-bottom: 6px;">Central &amp; Secunderabad Belt</h4>
          <p style="font-size: 0.88rem; color: #94a3b8; margin: 0;">Banjara Hills, Jubilee Hills, Begumpet, Secunderabad, Ameerpet, Himayatnagar, Uppal.</p>
        </div>
      </div>

    </div>
  </section>

  <!-- 8. Workshop & Authorized Center Routes -->
  <section style="padding: 60px 0; background: #0b132b; color: #ffffff;">
    <div class="container" style="max-width: 900px;">
      
      <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Workshop Transit</span>
      <h2 style="font-size: 2.1rem; font-weight: 800; color: #ffffff; margin: 10px 0 20px 0;">
        Direct Transit to Authorized Service Centers
      </h2>

      <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 16px; margin-bottom: 25px;">
        <div style="background: #172a54; padding: 18px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #ffffff; font-size: 1.05rem; margin-bottom: 6px;">Superbike &amp; Premium Brand Centers</h4>
          <p style="font-size: 0.88rem; color: #94a3b8; margin: 0;">Direct flatbed drop-off at Kawasaki, Ducati, BMW Motorrad, Triumph &amp; Harley Hubs.</p>
        </div>

        <div style="background: #172a54; padding: 18px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #ffffff; font-size: 1.05rem; margin-bottom: 6px;">Commuter &amp; Performance Workshops</h4>
          <p style="font-size: 0.88rem; color: #94a3b8; margin: 0;">Hero, Honda, Royal Enfield, KTM, TVS &amp; Yamaha authorized centers across Cyberabad.</p>
        </div>

        <div style="background: #172a54; padding: 18px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #ffffff; font-size: 1.05rem; margin-bottom: 6px;">Insurance Claim Assessment Yards</h4>
          <p style="font-size: 0.88rem; color: #94a3b8; margin: 0;">Direct delivery to designated insurance surveyor inspection stations.</p>
        </div>

        <div style="background: #172a54; padding: 18px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #ffffff; font-size: 1.05rem; margin-bottom: 6px;">Police Station &amp; Legal Spot Transfers</h4>
          <p style="font-size: 0.88rem; color: #94a3b8; margin: 0;">Safe vehicle transfer from police impound yards following legal clearances.</p>
        </div>
      </div>

    </div>
  </section>

  <!-- 9. Official Claims Documentation -->
  <section style="padding: 60px 0; background: #070d1e; color: #ffffff;">
    <div class="container" style="max-width: 900px;">
      
      <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Insurance Claims</span>
      <h2 style="font-size: 2.1rem; font-weight: 800; color: #ffffff; margin: 10px 0 20px 0;">
        100% Reimbursable Towing Documentation Package
      </h2>

      <div style="background: #101c40; border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 12px; padding: 25px;">
        <h4 style="color: #f59e0b; font-size: 1.1rem; margin-bottom: 12px; font-weight: 700;">Complete Towing Reimbursement Documents:</h4>
        <ol style="margin: 0; padding-left: 20px; color: #cbd5e1; line-height: 1.8; font-size: 0.95rem;">
          <li><strong>Itemized GST Towing Invoice</strong> (SAC 996511) accepted by all general insurance firms.</li>
          <li><strong>Spot Recovery &amp; Flatbed Towing Bill</strong>.</li>
          <li><strong>Pre-Loading Vehicle Condition Audit Sheet</strong>.</li>
          <li><strong>Workshop Delivery Acknowledgment Slip</strong>.</li>
          <li><strong>Official Payment Receipt</strong> for cash or online payments.</li>
        </ol>
      </div>

    </div>
  </section>

  <!-- 10. 10 Detailed FAQs + Valid JSON-LD FAQPage Schema -->
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
          Frequently Asked Questions About <span style="color: #f59e0b;">Accident Bike Towing</span>
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
      
      <span class="section-tag" style="background: rgba(225, 29, 72, 0.2); color: #f43f5e; padding: 6px 16px; border-radius: 20px; font-size: 0.85rem; font-weight: 700; text-transform: uppercase;">
        24/7 Emergency Dispatch Line
      </span>

      <h2 style="font-size: 2.2rem; font-weight: 800; margin: 15px 0 15px 0; color: #ffffff;">
        Need Emergency Bike Towing in <span style="color: #f59e0b;">Hyderabad</span>?
      </h2>

      <p style="font-size: 1.05rem; color: #cbd5e1; max-width: 750px; margin: 0 auto 30px auto; line-height: 1.7;">
        Call our 24/7 Hyderabad towing unit now. Hydraulic flatbed trucks standing by across Hitech City, Gachibowli, Kukatpally, ORR, and Secunderabad for instant dispatch.
      </p>

      <div style="display: flex; gap: 15px; justify-content: center; flex-wrap: wrap;">
        <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Emergency Dispatch" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 30px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1.05rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
          <i class="fas fa-ambulance"></i> Call Helpline: <?php echo SITE_PHONE; ?>
        </a>
        <a href="https://wa.me/918409531615?text=URGENT:%20Accident%20bike%20towing%20required%20in%20Hyderabad." title="Chat on WhatsApp" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 30px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1.05rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
          <i class="fab fa-whatsapp"></i> WhatsApp Location
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
  
  var message = "URGENT: Accident Bike Towing Request (Hyderabad):\n- Name: " + name + "\n- Phone: " + phone + "\n- Spot Location: " + moveFrom + "\n- Destination: " + moveTo;
  
  if (extraMsg && extraMsg.trim() !== '') {
    message += "\n- Bike Condition: " + extraMsg;
  }
  
  var whatsappUrl = "https://api.whatsapp.com/send?phone=918409531615&text=" + encodeURIComponent(message);
  window.location.href = whatsappUrl;
}
</script>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
