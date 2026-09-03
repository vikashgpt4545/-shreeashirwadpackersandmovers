<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "Car Transportation in Dalkhola (WB-59) | Professional Car Moving Service";
$page_desc = "Safe car transportation in Dalkhola (WB-59 RTO, NH-12 & NH-27 Junction) by Shree Ashirwad Packers and Movers. Professional car moving service, enclosed container carriers, doorstep pickup across Station Road, Dalkhola Bypass, Rail Gate Area, 100% transit insurance & IBA approved GST bills. Call 8409531615.";
$page_keywords = "car transportation in dalkhola, car moving service, car movers dalkhola, car carrier service dalkhola, enclosed car transport dalkhola, vehicle relocation west bengal, IBA approved car movers dalkhola, WB-59 car transport, Dalkhola car shifting";
$canonical_url = "https://shreeashirwadpackersandmovers.com/pages/car-transportation-in-dalkhola.php";

$page_city = "Dalkhola, West Bengal";

$faq_list = [
    ['q' => 'How does your car moving service operate in Dalkhola (WB-59 Region & NH-12 / NH-27 Hub)?', 'a' => 'Our car moving service provides direct doorstep pickup in Dalkhola (Station Road, Dalkhola Bypass, Rail Gate Area, Commercial Hub, Dalkhola Bazar) and safe transport via enclosed multi-car container trailers running on the NH-12 & NH-27 North Bengal trade highway corridor.'],
    ['q' => 'What is the cost of car shipping from Dalkhola to Siliguri, Kolkata, Patna, or Delhi-NCR?', 'a' => 'Regional car shipping from Dalkhola to Siliguri, Malda, or Raiganj ranges from ₹3,500 to ₹6,500. Interstate car moving service to Kolkata, Patna, Guwahati, or Delhi-NCR costs between ₹8,500 and ₹21,500 depending on vehicle model.'],
    ['q' => 'Is doorstep car pickup available across Station Road and Dalkhola Bypass?', 'a' => 'Yes, our certified driver crew provides doorstep pickup across Station Road, Dalkhola Bypass, Rail Gate Area, Commercial Hub, and Dalkhola Bazar.'],
    ['q' => 'Do you issue IBA approved GST bills for trade executives, railway officials & government staff in Dalkhola?', 'a' => 'Yes, we provide 100% authentic IBA-compliant GST tax invoices, pre-loading vehicle condition audit sheets, and consignment Lorry Receipts (LR) essential for official relocation claims and corporate reimbursements.'],
    ['q' => 'Is vehicle transit insurance included with your car moving service in Dalkhola WB?', 'a' => 'Yes, full declared-value transit insurance (0.3% of vehicle value) is activated before highway dispatch along NH-12/NH-27 to cover your car against any transit damage.'],
    ['q' => 'What documents are required for transporting a car from Dalkhola WB?', 'a' => 'Required documents include a copy of the Vehicle Registration Certificate (RC), valid insurance copy, owner ID proof (Aadhaar/PAN), and our joint vehicle inspection report.'],
    ['q' => 'Can personal luggage be stored inside the car boot during transport?', 'a' => 'Up to 25-30 kg of personal luggage or car accessories can be kept safely in the car boot. Cash, jewelry, flammables, and liquids are strictly prohibited.'],
    ['q' => 'How long does car delivery take from Dalkhola to major Indian cities?', 'a' => 'Transit to Siliguri or Malda takes 2 to 4 hours. Delivery to Kolkata, Patna, or Guwahati takes 1 to 2 days, while shipping to Delhi-NCR, Mumbai, or Bengaluru takes 4 to 6 days.'],
    ['q' => 'How can I track my car carrier container trailer during transit from Dalkhola?', 'a' => 'All enclosed multi-car container trailers feature real-time GPS tracking. Movement updates are pushed directly to your WhatsApp throughout transit.'],
    ['q' => 'How do I book a car moving service in Dalkhola WB with Shree Ashirwad Packers?', 'a' => 'Call +91 8409531615 or submit your vehicle details via WhatsApp for an instant transparent price quote and scheduled doorstep pickup.']
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
        <span class="breadcrumb-item active">Car Transportation in Dalkhola</span>
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
            IBA Approved Car Carrier (WB-59 Dalkhola NH-12/27 Hub)
          </span>
          <h1 style="font-size: 2.6rem; font-weight: 800; line-height: 1.2; margin-bottom: 20px; color: #ffffff;">
            Reliable <span style="color: #f59e0b;">Car Transportation in Dalkhola</span>
          </h1>
          <p style="font-size: 1.05rem; color: #cbd5e1; line-height: 1.7; margin-bottom: 25px;">
            Shree Ashirwad Packers and Movers delivers premier car shipping and trusted <strong>car moving service</strong> in Dalkhola (WB-59 RTO &amp; NH-12 / NH-27 East-West Expressway Junction). We provide enclosed container car carriers, doorstep pickup across Station Road, Dalkhola Bypass, Rail Gate Area, 100% transit insurance, and IBA-approved GST bills.
          </p>

          <div style="display: flex; gap: 15px; flex-wrap: wrap; margin-bottom: 30px;">
            <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Now" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
              <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call Now: <?php echo SITE_PHONE; ?>
            </a>
            <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20information%20about%20car%20transportation%20in%20Dalkhola." title="Chat on WhatsApp" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
              <i class="fab fa-whatsapp" style="margin-right: 8px;"></i> Chat on WhatsApp
            </a>
          </div>

          <div style="display: flex; gap: 20px; font-size: 0.9rem; color: #94a3b8;">
            <span><strong style="color: #f59e0b;">470+</strong> Cars Transported</span>
            <span><strong style="color: #f59e0b;">NH-12 / WB-59</strong> Corridor</span>
            <span><strong style="color: #f59e0b;">100%</strong> Insured Transit</span>
          </div>
        </div>

        <!-- Hero Lead Form Column -->
        <div class="hero-form-card" style="background: rgba(255, 255, 255, 0.05); backdrop-filter: blur(10px); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 16px; padding: 30px; box-shadow: 0 15px 35px rgba(0,0,0,0.4);">
          <h2 style="font-size: 1.4rem; color: #ffffff; margin-bottom: 8px; font-weight: 700; text-align: center;">Get Dalkhola Car Quote</h2>
          <p style="font-size: 0.85rem; color: #94a3b8; text-align: center; margin-bottom: 20px;">Receive transparent cost estimation on WhatsApp in 2 minutes</p>

          <form action="#" method="POST" onsubmit="sendHeroWhatsAppLead(event, this);">
            <div style="margin-bottom: 14px;">
              <input type="text" name="name" class="form-control" placeholder="Your Full Name" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="margin-bottom: 14px;">
              <input type="tel" name="phone" class="form-control" placeholder="10-Digit Phone / WhatsApp Number" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 10px; margin-bottom: 14px;">
              <input type="text" name="move_from" class="form-control" placeholder="Pickup (e.g. Dalkhola)" value="Dalkhola WB" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
              <input type="text" name="move_to" class="form-control" placeholder="Destination City" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="margin-bottom: 16px;">
              <textarea name="message" class="form-control" rows="2" placeholder="Car Model (e.g. Swift, Nexon, Creta, Fortuner)" style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;"></textarea>
            </div>
            <button type="submit" class="btn btn-primary" style="width: 100%; padding: 14px; font-weight: 700; font-size: 1rem; border-radius: 8px;">
              Get Quote on WhatsApp
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
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">470+</div>
          <div style="font-size: 0.9rem; color: #cbd5e1; margin-top: 5px;">Cars Transported from Dalkhola</div>
        </div>
        <div style="padding: 20px; background: rgba(23, 42, 84, 0.5); border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">NH-12 / NH-27</div>
          <div style="font-size: 0.9rem; color: #cbd5e1; margin-top: 5px;">North Bengal Highway Corridor</div>
        </div>
        <div style="padding: 20px; background: rgba(23, 42, 84, 0.5); border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">100%</div>
          <div style="font-size: 0.9rem; color: #cbd5e1; margin-top: 5px;">Transit Risk Covered</div>
        </div>
        <div style="padding: 20px; background: rgba(23, 42, 84, 0.5); border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">IBA Approved</div>
          <div style="font-size: 0.9rem; color: #cbd5e1; margin-top: 5px;">Official GST Invoice &amp; Bills</div>
        </div>
      </div>
    </div>
  </section>

  <!-- 4. 6-Card Feature Grid (3x2 Layout) -->
  <section style="padding: 65px 0; background: #0b132b; color: #e2e8f0; line-height: 1.8;">
    <div class="container">
      
      <div style="max-width: 950px; margin: 0 auto;">
        <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Service Highlights</span>
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin: 10px 0 20px 0;">
          Why Choose Our <span style="color: #f59e0b;">Car Moving Service in Dalkhola</span>?
        </h2>

        <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px; margin: 30px 0;">
          
          <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px;">
            <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;"><i class="fas fa-truck-pickup"></i></div>
            <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">Doorstep Pickup Service</h3>
            <p style="font-size: 0.9rem; color: #cbd5e1; margin: 0;">
              Our trained driver picks up your car directly from your residence anywhere in Dalkhola town.
            </p>
          </div>

          <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px;">
            <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;"><i class="fas fa-car-side"></i></div>
            <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">Enclosed Container Trucks</h3>
            <p style="font-size: 0.9rem; color: #cbd5e1; margin: 0;">
              Covered multi-car carrier trailers shielding your vehicle from dust, rain, &amp; highway gravel debris.
            </p>
          </div>

          <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px;">
            <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;"><i class="fas fa-shield-alt"></i></div>
            <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">100% Transit Insurance</h3>
            <p style="font-size: 0.9rem; color: #cbd5e1; margin: 0;">
              Comprehensive transit insurance policy protecting against any unexpected highway hazards.
            </p>
          </div>

          <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px;">
            <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;"><i class="fas fa-map-marker-alt"></i></div>
            <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">GPS Tracking Updates</h3>
            <p style="font-size: 0.9rem; color: #cbd5e1; margin: 0;">
              Real-time vehicle position tracking and continuous WhatsApp status notifications.
            </p>
          </div>

          <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px;">
            <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;"><i class="fas fa-file-invoice-dollar"></i></div>
            <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">Transparent Pricing</h3>
            <p style="font-size: 0.9rem; color: #cbd5e1; margin: 0;">
              Clear breakdown of <strong>car moving service</strong> rates with zero hidden fees or toll surcharges.
            </p>
          </div>

          <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px;">
            <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;"><i class="fas fa-award"></i></div>
            <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">IBA Approved Bills</h3>
            <p style="font-size: 0.9rem; color: #cbd5e1; margin: 0;">
              Official GST invoices for corporate reimbursements and bank/government relocation claims.
            </p>
          </div>

        </div>
      </div>

    </div>
  </section>

  <!-- 5. Specialized Services Breakdown Section -->
  <section style="padding: 65px 0; background: #070d1e; color: #cbd5e1; line-height: 1.8;">
    <div class="container">
      <div style="max-width: 950px; margin: 0 auto;">
        
        <h2 style="font-size: 2rem; font-weight: 800; color: #ffffff; margin-bottom: 20px;">
          Trusted <span style="color: #f59e0b;">Car Moving Service</span> in Dalkhola
        </h2>
        <p style="font-size: 1.05rem; margin-bottom: 25px;">
          As a vital highway junction linking Siliguri, Kolkata, Bihar, and the Northeast, Dalkhola demands a reliable <strong>car moving service</strong>. We provide secure door-to-door vehicle dispatch utilizing sealed multi-car container trailers.
        </p>

        <!-- Pricing Table -->
        <div style="overflow-x: auto; margin-bottom: 35px;">
          <table style="width: 100%; border-collapse: collapse; background: #0b132b; border: 1px solid rgba(245, 158, 11, 0.3); border-radius: 10px; text-align: left;">
            <thead>
              <tr style="background: rgba(245, 158, 11, 0.15); color: #f59e0b;">
                <th style="padding: 14px; border-bottom: 1px solid rgba(245, 158, 11, 0.3);">Route from Dalkhola</th>
                <th style="padding: 14px; border-bottom: 1px solid rgba(245, 158, 11, 0.3);">Vehicle Category</th>
                <th style="padding: 14px; border-bottom: 1px solid rgba(245, 158, 11, 0.3);">Estimated Car Shipping Cost</th>
                <th style="padding: 14px; border-bottom: 1px solid rgba(245, 158, 11, 0.3);">Transit Time</th>
              </tr>
            </thead>
            <tbody>
              <tr style="border-bottom: 1px solid rgba(255,255,255,0.08);">
                <td style="padding: 12px 14px; color: #fff;">Dalkhola to Siliguri / Malda</td>
                <td style="padding: 12px 14px;">Hatchback / Sedan</td>
                <td style="padding: 12px 14px; color: #f59e0b; font-weight: 700;">₹3,500 - ₹5,500</td>
                <td style="padding: 12px 14px;">Same Day</td>
              </tr>
              <tr style="border-bottom: 1px solid rgba(255,255,255,0.08);">
                <td style="padding: 12px 14px; color: #fff;">Dalkhola to Kolkata</td>
                <td style="padding: 12px 14px;">Sedan / SUV</td>
                <td style="padding: 12px 14px; color: #f59e0b; font-weight: 700;">₹8,500 - ₹12,500</td>
                <td style="padding: 12px 14px;">1 Day</td>
              </tr>
              <tr style="border-bottom: 1px solid rgba(255,255,255,0.08);">
                <td style="padding: 12px 14px; color: #fff;">Dalkhola to Patna / Purnea</td>
                <td style="padding: 12px 14px;">Hatchback / SUV</td>
                <td style="padding: 12px 14px; color: #f59e0b; font-weight: 700;">₹6,500 - ₹10,500</td>
                <td style="padding: 12px 14px;">1 Day</td>
              </tr>
              <tr style="border-bottom: 1px solid rgba(255,255,255,0.08);">
                <td style="padding: 12px 14px; color: #fff;">Dalkhola to Guwahati</td>
                <td style="padding: 12px 14px;">Sedan / Compact SUV</td>
                <td style="padding: 12px 14px; color: #f59e0b; font-weight: 700;">₹10,500 - ₹15,500</td>
                <td style="padding: 12px 14px;">2 Days</td>
              </tr>
              <tr>
                <td style="padding: 12px 14px; color: #fff;">Dalkhola to Delhi-NCR / Mumbai</td>
                <td style="padding: 12px 14px;">All Car Models</td>
                <td style="padding: 12px 14px; color: #f59e0b; font-weight: 700;">₹16,000 - ₹21,500</td>
                <td style="padding: 12px 14px;">4 - 6 Days</td>
              </tr>
            </tbody>
          </table>
        </div>

      </div>
    </div>
  </section>

  <!-- 6. 7-Layer Safety Packaging Framework -->
  <section style="padding: 65px 0; background: #0b132b; color: #cbd5e1; line-height: 1.8;">
    <div class="container">
      <div style="max-width: 950px; margin: 0 auto;">
        <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Safety Protocol</span>
        <h2 style="font-size: 2rem; font-weight: 800; color: #ffffff; margin: 10px 0 25px 0;">
          7-Layer Safety Framework for <span style="color: #f59e0b;">Car Moving Service</span>
        </h2>
        <p style="margin-bottom: 25px;">
          Our <strong>car moving service</strong> incorporates a strict 7-point safety protocol for every vehicle dispatch:
        </p>

        <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 20px;">
          <div style="background: #172a54; padding: 20px; border-radius: 10px; border-left: 4px solid #f59e0b;">
            <h3 style="font-size: 1.1rem; color: #fff; font-weight: 700; margin-bottom: 8px;">1. Pre-Loading Digital Audit</h3>
            <p style="font-size: 0.9rem; margin: 0;">Comprehensive 25-point inspection mapping odometer readings, scratches, and battery health.</p>
          </div>
          <div style="background: #172a54; padding: 20px; border-radius: 10px; border-left: 4px solid #f59e0b;">
            <h3 style="font-size: 1.1rem; color: #fff; font-weight: 700; margin-bottom: 8px;">2. Soft Foam Bumper Wrapping</h3>
            <p style="font-size: 0.9rem; margin: 0;">High-density foam padding applied to front bumpers, side mirrors, and rear guards.</p>
          </div>
          <div style="background: #172a54; padding: 20px; border-radius: 10px; border-left: 4px solid #f59e0b;">
            <h3 style="font-size: 1.1rem; color: #fff; font-weight: 700; margin-bottom: 8px;">3. 4-Wheel Nylon Belt Lock</h3>
            <p style="font-size: 0.9rem; margin: 0;">Heavy-duty non-abrasive wheel tie-down straps locked into container floor anchor tracks.</p>
          </div>
          <div style="background: #172a54; padding: 20px; border-radius: 10px; border-left: 4px solid #f59e0b;">
            <h3 style="font-size: 1.1rem; color: #fff; font-weight: 700; margin-bottom: 8px;">4. Rubber Wheel Chock Locks</h3>
            <p style="font-size: 0.9rem; margin: 0;">Heavy rubber chocks positioned before and behind each tire to prevent rolling during braking.</p>
          </div>
          <div style="background: #172a54; padding: 20px; border-radius: 10px; border-left: 4px solid #f59e0b;">
            <h3 style="font-size: 1.1rem; color: #fff; font-weight: 700; margin-bottom: 8px;">5. Dust-Proof Enclosed Container</h3>
            <p style="font-size: 0.9rem; margin: 0;">Fully covered car carrier trailers shielding vehicles from rain, dust, and highway debris.</p>
          </div>
          <div style="background: #172a54; padding: 20px; border-radius: 10px; border-left: 4px solid #f59e0b;">
            <h3 style="font-size: 1.1rem; color: #fff; font-weight: 700; margin-bottom: 8px;">6. GPS Live Tracking &amp; Insurance</h3>
            <p style="font-size: 0.9rem; margin: 0;">Continuous satellite positioning and active transit insurance policy for complete peace of mind.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 7. Local Coverage Grid -->
  <section style="padding: 65px 0; background: #070d1e; color: #cbd5e1; line-height: 1.8;">
    <div class="container">
      <div style="max-width: 950px; margin: 0 auto;">
        <h2 style="font-size: 2rem; font-weight: 800; color: #ffffff; margin-bottom: 15px;">
          Doorstep Pickup Localities in <span style="color: #f59e0b;">Dalkhola</span>
        </h2>
        <p style="margin-bottom: 25px;">
          We serve all residential, railway, and commercial zones in Dalkhola with direct driver pickup:
        </p>
        <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 15px;">
          <div style="background: #0b132b; padding: 15px; border-radius: 8px; border: 1px solid rgba(245,158,11,0.2);"><i class="fas fa-check" style="color: #f59e0b; margin-right: 8px;"></i> Station Road</div>
          <div style="background: #0b132b; padding: 15px; border-radius: 8px; border: 1px solid rgba(245,158,11,0.2);"><i class="fas fa-check" style="color: #f59e0b; margin-right: 8px;"></i> Dalkhola Bypass</div>
          <div style="background: #0b132b; padding: 15px; border-radius: 8px; border: 1px solid rgba(245,158,11,0.2);"><i class="fas fa-check" style="color: #f59e0b; margin-right: 8px;"></i> Rail Gate Area</div>
          <div style="background: #0b132b; padding: 15px; border-radius: 8px; border: 1px solid rgba(245,158,11,0.2);"><i class="fas fa-check" style="color: #f59e0b; margin-right: 8px;"></i> Commercial Hub</div>
          <div style="background: #0b132b; padding: 15px; border-radius: 8px; border: 1px solid rgba(245,158,11,0.2);"><i class="fas fa-check" style="color: #f59e0b; margin-right: 8px;"></i> Dalkhola Bazar</div>
          <div style="background: #0b132b; padding: 15px; border-radius: 8px; border: 1px solid rgba(245,158,11,0.2);"><i class="fas fa-check" style="color: #f59e0b; margin-right: 8px;"></i> NH-12 Junction</div>
        </div>
      </div>
    </div>
  </section>

  <!-- 8. Route Network Grid -->
  <section style="padding: 65px 0; background: #0b132b; color: #cbd5e1; line-height: 1.8;">
    <div class="container">
      <div style="max-width: 950px; margin: 0 auto;">
        <h2 style="font-size: 2rem; font-weight: 800; color: #ffffff; margin-bottom: 15px;">
          Popular <span style="color: #f59e0b;">Car Shipping Routes</span> from Dalkhola
        </h2>
        <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 15px;">
          <div style="background: #172a54; padding: 15px; border-radius: 8px;"><i class="fas fa-route" style="color: #f59e0b; margin-right: 10px;"></i> Dalkhola to Siliguri</div>
          <div style="background: #172a54; padding: 15px; border-radius: 8px;"><i class="fas fa-route" style="color: #f59e0b; margin-right: 10px;"></i> Dalkhola to Kolkata</div>
          <div style="background: #172a54; padding: 15px; border-radius: 8px;"><i class="fas fa-route" style="color: #f59e0b; margin-right: 10px;"></i> Dalkhola to Patna</div>
          <div style="background: #172a54; padding: 15px; border-radius: 8px;"><i class="fas fa-route" style="color: #f59e0b; margin-right: 10px;"></i> Dalkhola to Guwahati</div>
          <div style="background: #172a54; padding: 15px; border-radius: 8px;"><i class="fas fa-route" style="color: #f59e0b; margin-right: 10px;"></i> Dalkhola to Delhi-NCR</div>
          <div style="background: #172a54; padding: 15px; border-radius: 8px;"><i class="fas fa-route" style="color: #f59e0b; margin-right: 10px;"></i> Dalkhola to Mumbai</div>
        </div>
      </div>
    </div>
  </section>

  <!-- 9. Documentation Section -->
  <section style="padding: 65px 0; background: #070d1e; color: #cbd5e1; line-height: 1.8;">
    <div class="container">
      <div style="max-width: 950px; margin: 0 auto;">
        <h2 style="font-size: 2rem; font-weight: 800; color: #ffffff; margin-bottom: 15px;">
          IBA Approved GST Documentation &amp; Mandatory Papers
        </h2>
        <p>
          For complete regulatory compliance during highway transit across West Bengal and interstate borders, we process full documentation:
        </p>
        <ul style="list-style: none; padding-left: 0; margin-top: 15px;">
          <li style="margin-bottom: 10px;"><i class="fas fa-file-check" style="color: #f59e0b; margin-right: 10px;"></i> Vehicle Registration Certificate (RC Copy)</li>
          <li style="margin-bottom: 10px;"><i class="fas fa-file-check" style="color: #f59e0b; margin-right: 10px;"></i> Valid Motor Insurance Certificate</li>
          <li style="margin-bottom: 10px;"><i class="fas fa-file-check" style="color: #f59e0b; margin-right: 10px;"></i> Government ID Proof of Vehicle Owner (Aadhaar / PAN)</li>
          <li style="margin-bottom: 10px;"><i class="fas fa-file-check" style="color: #f59e0b; margin-right: 10px;"></i> IBA Approved Consignment Lorry Receipt (LR) &amp; Official GST Invoice</li>
        </ul>
      </div>
    </div>
  </section>

  <!-- 10. FAQ Section & FAQPage Schema -->
  <section style="padding: 65px 0; background: #0b132b; color: #cbd5e1; line-height: 1.8;">
    <div class="container">
      <div style="max-width: 950px; margin: 0 auto;">
        <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Help &amp; FAQs</span>
        <h2 style="font-size: 2rem; font-weight: 800; color: #ffffff; margin: 10px 0 25px 0;">
          Frequently Asked Questions on <span style="color: #f59e0b;">Car Moving Service</span>
        </h2>

        <div class="faq-accordion">
          <?php foreach ($faq_list as $index => $faq): ?>
            <div style="background: #172a54; border: 1px solid rgba(245,158,11,0.2); border-radius: 10px; margin-bottom: 15px; padding: 20px;">
              <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">
                <i class="far fa-question-circle" style="color: #f59e0b; margin-right: 8px;"></i>
                <?php echo htmlspecialchars($faq['q']); ?>
              </h3>
              <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.7;">
                <?php echo htmlspecialchars($faq['a']); ?>
              </p>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </section>

  <!-- JSON-LD FAQPage Schema -->
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
      echo implode(",\n", $schema_items);
      ?>
    ]
  }
  </script>

  <!-- 11. High-Converting Call-To-Action (CTA) Footer -->
  <section style="padding: 50px 0; background: linear-gradient(135deg, #1c2541 0%, #0b132b 100%); text-align: center; color: #ffffff; border-top: 1px solid rgba(245, 158, 11, 0.3);">
    <div class="container">
      <h2 style="font-size: 2.2rem; font-weight: 800; margin-bottom: 15px;">Book Car Moving Service in Dalkhola Today</h2>
      <p style="font-size: 1.1rem; color: #cbd5e1; max-width: 700px; margin: 0 auto 30px auto;">
        Get an accurate quote for our professional car moving service with door-to-door pickup across Dalkhola and 100% insured transit.
      </p>
      <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap;">
        <a href="tel:<?php echo SITE_PHONE_RAW; ?>" style="padding: 15px 32px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1.05rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
          <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call: <?php echo SITE_PHONE; ?>
        </a>
        <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20to%20book%20car%20transportation%20in%20Dalkhola." target="_blank" style="padding: 15px 32px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1.05rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
          <i class="fab fa-whatsapp" style="margin-right: 8px;"></i> Instant WhatsApp Estimate
        </a>
      </div>
    </div>
  </section>

</main>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
