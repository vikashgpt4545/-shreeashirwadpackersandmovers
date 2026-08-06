<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "Complete Packers and Movers Chatra Cost & Tariff Guide";
$page_desc = "Detailed cost breakdown for household shifting, vehicle transport, and warehousing in Chatra. Learn transparent 1BHK, 2BHK, 3BHK rate estimates.";
$page_keywords = "packers movers chatra cost guide, shifting charges chatra, house relocation cost chatra, 1bhk shifting rate chatra, 2bhk moving cost chatra, 3bhk shifting charges chatra, bike transport rate chatra, car carrier cost chatra, local moving charges chatra, intercity tariff chatra, IBA billing cost chatra, transparent moving estimate chatra, packing material rate chatra, shifting price list chatra, relocation budget chatra";

$page_city = "Chatra";

$faq_list = [
    [
        'q' => 'What is the average cost of local house shifting in Chatra?',
        'a' => 'Local house shifting in Chatra typically costs between ₹3,000 and ₹5,500 for a 1BHK, ₹5,500 to ₹9,500 for a 2BHK, and ₹9,500 to ₹15,000 for a 3BHK residence, depending on volume and packing material quality.'
    ],
    [
        'q' => 'How are intercity shifting charges calculated from Chatra?',
        'a' => 'Intercity shifting charges from Chatra depend on total distance in kilometers, truck type (shared vs dedicated container), volume of goods, toll taxes, packing materials, and transit insurance.'
    ],
    [
        'q' => 'What is the cost of transporting a bike or scooter from Chatra?',
        'a' => 'Bike transport from Chatra to nearby cities like Ranchi or Patna ranges from ₹2,500 to ₹3,500, while long-distance shipping to Delhi, Bangalore, or Mumbai costs ₹4,500 to ₹6,500.'
    ],
    [
        'q' => 'How much does car transport cost from Chatra to other states?',
        'a' => 'Car transport in covered hydraulic car trailers costs ₹7,500 to ₹12,000 for regional routes (Ranchi/Patna/Kolkata) and ₹14,000 to ₹22,000 for long-distance metros.'
    ],
    [
        'q' => 'Are packing material costs included in the initial moving estimate?',
        'a' => 'Yes, all standard packing materials such as bubble wrap, corrugated boxes, stretch film, and tapes are included in our transparent written quotes.'
    ],
    [
        'q' => 'What are the charges for warehouse storage in Chatra?',
        'a' => 'Household goods storage charges in Chatra range from ₹100 to ₹250 per day (or ₹3,000 to ₹6,000 per month) based on storage volume and security requirements.'
    ],
    [
        'q' => 'Is transit insurance mandatory and how much does it cost?',
        'a' => 'Transit insurance is highly recommended. It typically costs 3% of the declared value of your household goods, providing 100% financial protection against road risks.'
    ],
    [
        'q' => 'Do stair-climbing or floor elevation charges apply in Chatra?',
        'a' => 'If a building lacks an elevator, a minimal floor charge (₹300 to ₹600 per floor) is added to account for additional manual labor.'
    ],
    [
        'q' => 'How much extra is charged for AC uninstallation and reinstallation in Chatra?',
        'a' => 'Split AC uninstallation and reinstallation costs ₹1,200 to ₹2,200 per unit, which includes gas checking and safety unmounting.'
    ],
    [
        'q' => 'Can I get a fixed price quote before booking shifting services in Chatra?',
        'a' => 'Yes, after a pre-move home survey or WhatsApp photo assessment, we issue a binding written quote with zero hidden fees.'
    ],
    [
        'q' => 'What factors cause price variations between different packers in Chatra?',
        'a' => 'Price variations stem from packing material quality (7-layer vs single bubble), truck type (dedicated container vs open pick-up), labor experience, and official IBA GST compliance.'
    ],
    [
        'q' => 'How much does single furniture or single appliance moving cost in Chatra?',
        'a' => 'Single item or partial load shifting within Chatra ranges from ₹1,200 to ₹2,500 depending on weight and distance.'
    ],
    [
        'q' => 'What is the GST rate applicable on packers and movers services in Chatra?',
        'a' => 'GST is charged at 18% for full-service packing and moving. For government and corporate employees, this GST amount is 100% claimable via official invoices.'
    ],
    [
        'q' => 'Are toll taxes and green taxes included in intercity relocation quotes?',
        'a' => 'Yes, our all-inclusive intercity moving quotes cover all state border taxes, highway tolls, and driver allowances.'
    ],
    [
        'q' => 'How do weekend and month-end dates impact shifting charges in Chatra?',
        'a' => 'Peak dates such as month-ends and national holidays may see high demand. Booking 4 to 7 days in advance locks in standard non-peak rates.'
    ],
    [
        'q' => 'What is the cost of professional wooden crating for TV and glass items?',
        'a' => 'Custom wooden crating for large LED TVs, glass tables, and expensive artwork ranges from ₹800 to ₹1,800 per box.'
    ],
    [
        'q' => 'Do you charge extra for loading heavy double beds or wardrobes?',
        'a' => 'Furniture dismantling, heavy handling, and reassembly are fully included in the standard labor component of your quote.'
    ],
    [
        'q' => 'What payment methods do you accept for shifting bills in Chatra?',
        'a' => 'We accept Cash, UPI (PhonePe/Google Pay/Paytm), Bank NEFT/RTGS, and Credit/Debit cards.'
    ],
    [
        'q' => 'Is there any cancellation fee if I reschedule my move in Chatra?',
        'a' => 'No cancellation or rescheduling fees apply if you notify us at least 24 hours prior to the scheduled packing time.'
    ],
    [
        'q' => 'How can I save money on household shifting in Chatra?',
        'a' => 'You can save by decluttering unused items, moving on weekdays, booking in advance, and opting for shared container trucks for long-distance routes.'
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
          <li class="breadcrumb-item"><a href="<?php echo SITE_URL; ?>" style="color: #2563eb; text-decoration: none;">Home</a></li>
          <li class="breadcrumb-item"><a href="<?php echo SITE_URL; ?>packers-and-movers-in-chatra" style="color: #2563eb; text-decoration: none;">Chatra</a></li>
          <li class="breadcrumb-item active" aria-current="page" style="color: #1e293b; font-weight: 600;"><span style="margin: 0 4px;">/</span> Chatra Cost Guide</li>
        </ol>
      </nav>
    </div>
  </div>

  <!-- Hero Section -->
  <section class="hero-section" style="background: linear-gradient(135deg, #0f172a 0%, #1e3a8a 100%); color: #ffffff; padding: 60px 0; position: relative;" id="hero-cost-guide">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 15px; display: flex; flex-wrap: wrap; align-items: center; justify-content: space-between; gap: 40px;">
      
      <div class="hero-content" style="flex: 1 1 500px;">
        <span style="display: inline-block; background: rgba(37, 99, 235, 0.25); color: #60a5fa; border: 1px solid rgba(96, 165, 250, 0.3); padding: 6px 16px; border-radius: 50px; font-size: 0.85rem; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 20px;">
          Transparent Tariff & Cost Calculator 2026
        </span>
        <h1 style="font-size: 2.6rem; font-weight: 800; line-height: 1.2; margin-bottom: 20px; color: #ffffff;">
          Packers and Movers Chatra Cost &amp; Rate Guide
        </h1>
        <p style="font-size: 1.15rem; line-height: 1.8; color: #94a3b8; margin-bottom: 30px;">
          Planning a move in Chatra? Understand complete pricing structures for local house shifting, intercity vehicle shipping, packing material charges, and warehouse storage. Shree Ashirwad Packers and Movers guarantees 100% price transparency with no hidden costs and IBA-compliant GST billing.
        </p>
        
        <div class="hero-cta-buttons" style="display: flex; flex-wrap: wrap; gap: 15px; margin-bottom: 30px;">
          <a href="tel:+918409531615" class="btn-call" style="background: #2563eb; color: #ffffff; padding: 14px 28px; border-radius: 8px; font-weight: 700; text-decoration: none; display: inline-flex; align-items: center; gap: 10px; font-size: 1rem; box-shadow: 0 10px 25px rgba(37, 99, 235, 0.4);" id="hero-call-btn">
            <i class="fa-solid fa-phone"></i> Call +91 8409531615
          </a>
          <a href="https://api.whatsapp.com/send?phone=918409531615&text=Hello%20Shree%20Ashirwad%20Packers%20and%20Movers,%20I%20want%20a%20cost%20estimate%20for%20Chatra." class="btn-whatsapp" style="background: #22c55e; color: #ffffff; padding: 14px 28px; border-radius: 8px; font-weight: 700; text-decoration: none; display: inline-flex; align-items: center; gap: 10px; font-size: 1rem; box-shadow: 0 10px 25px rgba(34, 197, 94, 0.4);" id="hero-wa-btn">
            <i class="fa-brands fa-whatsapp"></i> Get Price Estimate
          </a>
        </div>
      </div>

      <!-- Lead Form Box -->
      <div class="hero-form-card" style="flex: 0 1 420px; background: #ffffff; border-radius: 12px; padding: 30px; color: #1e293b; box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);" id="cost-guide-form-box">
        <h3 style="font-size: 1.4rem; font-weight: 700; margin-bottom: 8px; color: #0f172a;">Instant Cost Estimator</h3>
        <p style="font-size: 0.88rem; color: #64748b; margin-bottom: 20px;">Receive an itemized quote within minutes!</p>
        
        <form onsubmit="sendHeroWhatsAppLead(event, this);" id="cost-estimator-form">
          <div style="margin-bottom: 14px;">
            <input type="text" name="name" placeholder="Your Name" required style="width: 100%; padding: 12px 14px; border: 1px solid #cbd5e1; border-radius: 6px; font-size: 0.95rem; box-sizing: border-box;">
          </div>
          <div style="margin-bottom: 14px;">
            <input type="tel" name="phone" placeholder="Mobile Number" required style="width: 100%; padding: 12px 14px; border: 1px solid #cbd5e1; border-radius: 6px; font-size: 0.95rem; box-sizing: border-box;">
          </div>
          <div style="margin-bottom: 14px;">
            <input type="text" name="move_from" placeholder="Pickup Location (e.g. Chatra)" required style="width: 100%; padding: 12px 14px; border: 1px solid #cbd5e1; border-radius: 6px; font-size: 0.95rem; box-sizing: border-box;">
          </div>
          <div style="margin-bottom: 14px;">
            <input type="text" name="move_to" placeholder="Drop Destination" required style="width: 100%; padding: 12px 14px; border: 1px solid #cbd5e1; border-radius: 6px; font-size: 0.95rem; box-sizing: border-box;">
          </div>
          <div style="margin-bottom: 18px;">
            <textarea name="message" placeholder="Describe Items (e.g., 2BHK, Bike, Fridge)" rows="3" style="width: 100%; padding: 12px 14px; border: 1px solid #cbd5e1; border-radius: 6px; font-size: 0.95rem; box-sizing: border-box;"></textarea>
          </div>
          <button type="submit" style="width: 100%; background: #2563eb; color: #ffffff; border: none; padding: 14px; border-radius: 6px; font-size: 1rem; font-weight: 700; cursor: pointer;" id="estimate-btn">
            Get Instant Rate Card <i class="fa-solid fa-arrow-right" style="margin-left: 6px;"></i>
          </button>
        </form>
      </div>

    </div>
  </section>

  <!-- Detailed Pricing Tables Section -->
  <section class="pricing-tables-section" style="background: #ffffff; padding: 60px 0;" id="pricing-tables">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 15px;">
      
      <div style="text-align: center; margin-bottom: 45px;">
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #0f172a; margin-bottom: 12px;">Detailed Shifting Price Charts in Chatra</h2>
        <p style="font-size: 1.05rem; color: #64748b; max-width: 750px; margin: 0 auto;">Comprehensive cost breakdown for local home shifting, intercity moving, vehicle shipping, and storage services.</p>
      </div>

      <!-- Table 1: Local Shifting Charges -->
      <div style="background: #ffffff; border-radius: 10px; border: 1px solid #e2e8f0; overflow: hidden; margin-bottom: 45px; box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05);">
        <div style="background: #0f172a; color: #ffffff; padding: 18px 25px; font-size: 1.2rem; font-weight: 700;">
          <i class="fa-solid fa-house" style="color: #60a5fa; margin-right: 10px;"></i> 1. Local House Shifting Rates in Chatra
        </div>
        <div style="overflow-x: auto;">
          <table style="width: 100%; border-collapse: collapse; text-align: left; font-size: 0.95rem;">
            <thead>
              <tr style="background: #f1f5f9; color: #1e293b; font-weight: 700; border-bottom: 1px solid #e2e8f0;">
                <th style="padding: 15px 20px;">House Type</th>
                <th style="padding: 15px 20px;">Packing Materials</th>
                <th style="padding: 15px 20px;">Labor &amp; Handling</th>
                <th style="padding: 15px 20px;">Local Transport</th>
                <th style="padding: 15px 20px;">Estimated Total Cost</th>
              </tr>
            </thead>
            <tbody style="color: #475569;">
              <tr style="border-bottom: 1px solid #f1f5f9;">
                <td style="padding: 15px 20px; font-weight: 600; color: #0f172a;">1 BHK Flat / Small House</td>
                <td style="padding: 15px 20px;">₹1,200 - ₹2,000</td>
                <td style="padding: 15px 20px;">₹1,000 - ₹1,800</td>
                <td style="padding: 15px 20px;">₹1,500 - ₹2,200</td>
                <td style="padding: 15px 20px; font-weight: 700; color: #2563eb;">₹3,000 - ₹5,500</td>
              </tr>
              <tr style="border-bottom: 1px solid #f1f5f9; background: #fafafa;">
                <td style="padding: 15px 20px; font-weight: 600; color: #0f172a;">2 BHK Apartment</td>
                <td style="padding: 15px 20px;">₹2,200 - ₹3,500</td>
                <td style="padding: 15px 20px;">₹1,800 - ₹3,000</td>
                <td style="padding: 15px 20px;">₹2,200 - ₹3,500</td>
                <td style="padding: 15px 20px; font-weight: 700; color: #2563eb;">₹5,500 - ₹9,500</td>
              </tr>
              <tr style="border-bottom: 1px solid #f1f5f9;">
                <td style="padding: 15px 20px; font-weight: 600; color: #0f172a;">3 BHK / Large Villa</td>
                <td style="padding: 15px 20px;">₹3,500 - ₹5,500</td>
                <td style="padding: 15px 20px;">₹3,000 - ₹4,500</td>
                <td style="padding: 15px 20px;">₹3,500 - ₹5,000</td>
                <td style="padding: 15px 20px; font-weight: 700; color: #2563eb;">₹9,500 - ₹15,000</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

      <!-- Table 2: Intercity Moving Rates -->
      <div style="background: #ffffff; border-radius: 10px; border: 1px solid #e2e8f0; overflow: hidden; margin-bottom: 45px; box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05);">
        <div style="background: #0f172a; color: #ffffff; padding: 18px 25px; font-size: 1.2rem; font-weight: 700;">
          <i class="fa-solid fa-truck-fast" style="color: #60a5fa; margin-right: 10px;"></i> 2. Intercity Moving Rates from Chatra
        </div>
        <div style="overflow-x: auto;">
          <table style="width: 100%; border-collapse: collapse; text-align: left; font-size: 0.95rem;">
            <thead>
              <tr style="background: #f1f5f9; color: #1e293b; font-weight: 700; border-bottom: 1px solid #e2e8f0;">
                <th style="padding: 15px 20px;">Destination Route</th>
                <th style="padding: 15px 20px;">Distance</th>
                <th style="padding: 15px 20px;">1 BHK Move</th>
                <th style="padding: 15px 20px;">2 BHK Move</th>
                <th style="padding: 15px 20px;">3 BHK Move</th>
              </tr>
            </thead>
            <tbody style="color: #475569;">
              <tr style="border-bottom: 1px solid #f1f5f9;">
                <td style="padding: 15px 20px; font-weight: 600; color: #0f172a;">Chatra to Ranchi</td>
                <td style="padding: 15px 20px;">~140 km</td>
                <td style="padding: 15px 20px;">₹6,500 - ₹9,500</td>
                <td style="padding: 15px 20px;">₹10,500 - ₹15,500</td>
                <td style="padding: 15px 20px; font-weight: 700; color: #2563eb;">₹16,000 - ₹22,000</td>
              </tr>
              <tr style="border-bottom: 1px solid #f1f5f9; background: #fafafa;">
                <td style="padding: 15px 20px; font-weight: 600; color: #0f172a;">Chatra to Patna</td>
                <td style="padding: 15px 20px;">~190 km</td>
                <td style="padding: 15px 20px;">₹8,500 - ₹12,000</td>
                <td style="padding: 15px 20px;">₹13,500 - ₹18,500</td>
                <td style="padding: 15px 20px; font-weight: 700; color: #2563eb;">₹19,000 - ₹26,000</td>
              </tr>
              <tr style="border-bottom: 1px solid #f1f5f9;">
                <td style="padding: 15px 20px; font-weight: 600; color: #0f172a;">Chatra to Kolkata</td>
                <td style="padding: 15px 20px;">~450 km</td>
                <td style="padding: 15px 20px;">₹12,000 - ₹16,500</td>
                <td style="padding: 15px 20px;">₹18,000 - ₹25,000</td>
                <td style="padding: 15px 20px; font-weight: 700; color: #2563eb;">₹26,000 - ₹36,000</td>
              </tr>
              <tr style="background: #fafafa;">
                <td style="padding: 15px 20px; font-weight: 600; color: #0f172a;">Chatra to Delhi NCR</td>
                <td style="padding: 15px 20px;">~1,020 km</td>
                <td style="padding: 15px 20px;">₹16,000 - ₹22,000</td>
                <td style="padding: 15px 20px;">₹24,000 - ₹34,000</td>
                <td style="padding: 15px 20px; font-weight: 700; color: #2563eb;">₹35,000 - ₹48,000</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

    </div>
  </section>

  <!-- Comprehensive Content Guide -->
  
  <!-- Section 2: Trust Counter & Live Achievements -->
  <section class="stats-section" style="padding: 45px 0; background: #070d1e; border-bottom: 1px solid rgba(245, 158, 11, 0.2);" id="trust-counter-bar">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 15px;">
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 20px; text-align: center;">
        <div style="padding: 22px; background: rgba(23, 42, 84, 0.5); border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">3,850+</div>
          <div style="font-size: 0.9rem; color: #cbd5e1; margin-top: 5px;">Relocations Completed</div>
        </div>
        <div style="padding: 22px; background: rgba(23, 42, 84, 0.5); border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">Express Transit</div>
          <div style="font-size: 0.9rem; color: #cbd5e1; margin-top: 5px;">Dedicated GPS Container Fleet</div>
        </div>
        <div style="padding: 22px; background: rgba(23, 42, 84, 0.5); border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">100%</div>
          <div style="font-size: 0.9rem; color: #cbd5e1; margin-top: 5px;">Safe 7-Layer Protection</div>
        </div>
        <div style="padding: 22px; background: rgba(23, 42, 84, 0.5); border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">IBA Approved</div>
          <div style="font-size: 0.9rem; color: #cbd5e1; margin-top: 5px;">GST Invoice &amp; Employee Claims</div>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 3: Technical Overview & 6-Card Feature Grid -->
  <section style="padding: 70px 0; background: #0b132b; color: #e2e8f0; line-height: 1.8;" id="technical-overview-section">
    <div class="container" style="max-width: 1100px; margin: 0 auto; padding: 0 15px;">
      
      <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px; display: inline-block; margin-bottom: 10px;">Technical Route Overview</span>
      <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin: 0 0 20px 0;">
        Technical Relocation Logistics & Service Standards in Chatra Cost Guide
      </h2>

      <p style="font-size: 1.05rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 20px;">
        Managing household shifting, office relocation, and vehicle shipping in Chatra Cost Guide requires experienced logistics coordination. Shree Ashirwad Packers and Movers delivers end-to-end relocation services across Chatra Cost Guide with dedicated container vehicles, 7-layer protective packaging, and 100% claimable IBA GST invoices.
      </p>

      <p style="font-size: 1.05rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 30px;">
        At <strong>Shree Ashirwad Packers and Movers</strong>, we maintain high engineering and safety standards for every move. Whether you are transferring corporate executive households, shipping high-value two-wheelers and cars, or relocating residential goods, our trained move crews manage every detail from origin loading to destination unboxing and carpentry reassembly.
      </p>

      <!-- 6 Cards Grid (3x2 Layout) -->
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 24px; margin: 35px 0;">
        
        <!-- Card 1 -->
        <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 24px; box-shadow: 0 10px 25px rgba(0,0,0,0.3);">
          <div style="background: rgba(245, 158, 11, 0.15); width: 46px; height: 46px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.3rem; color: #f59e0b; margin-bottom: 14px;">🚚</div>
          <h3 style="font-size: 1.15rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">Dedicated Enclosed Containers</h3>
          <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.6; margin: 0;">
            Weatherproof sealed container trucks (14ft, 17ft, 19ft, 22ft) protecting goods against rain, highway dust, and transit vibration with zero transshipment.
          </p>
        </div>

        <!-- Card 2 -->
        <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 24px; box-shadow: 0 10px 25px rgba(0,0,0,0.3);">
          <div style="background: rgba(245, 158, 11, 0.15); width: 46px; height: 46px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.3rem; color: #f59e0b; margin-bottom: 14px;">🏙️</div>
          <h3 style="font-size: 1.15rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">Complete Doorstep Service</h3>
          <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.6; margin: 0;">
            Complete origin pickup, ground floor to high-rise loading, highway express transit, and destination doorstep delivery with zero hassle.
          </p>
        </div>

        <!-- Card 3 -->
        <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 24px; box-shadow: 0 10px 25px rgba(0,0,0,0.3);">
          <div style="background: rgba(245, 158, 11, 0.15); width: 46px; height: 46px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.3rem; color: #f59e0b; margin-bottom: 14px;">🛡️</div>
          <h3 style="font-size: 1.15rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">IBA Approved GST Billing</h3>
          <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.6; margin: 0;">
            100% claimable IBA-compliant relocation bills, Lorry Receipts (LR), money receipts, and itemized inventory lists for corporate & employee reimbursement.
          </p>
        </div>

        <!-- Card 4 -->
        <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 24px; box-shadow: 0 10px 25px rgba(0,0,0,0.3);">
          <div style="background: rgba(245, 158, 11, 0.15); width: 46px; height: 46px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.3rem; color: #f59e0b; margin-bottom: 14px;">📦</div>
          <h3 style="font-size: 1.15rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">7-Layer Heavy Packaging</h3>
          <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.6; margin: 0;">
            Multi-layer shock protection combining heavy bubble wrap, 5-ply corrugated fiberboard, stretch wrap, foam corner guards, and timber crating.
          </p>
        </div>

        <!-- Card 5 -->
        <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 24px; box-shadow: 0 10px 25px rgba(0,0,0,0.3);">
          <div style="background: rgba(245, 158, 11, 0.15); width: 46px; height: 46px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.3rem; color: #f59e0b; margin-bottom: 14px;">🚗</div>
          <h3 style="font-size: 1.15rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">Covered Vehicle Carriers</h3>
          <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.6; margin: 0;">
            Specialized covered car trailers with wheel-chock safety locks and padded motorcycle container transport for scratch-free delivery.
          </p>
        </div>

        <!-- Card 6 -->
        <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 24px; box-shadow: 0 10px 25px rgba(0,0,0,0.3);">
          <div style="background: rgba(245, 158, 11, 0.15); width: 46px; height: 46px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.3rem; color: #f59e0b; margin-bottom: 14px;">👨‍🔧</div>
          <h3 style="font-size: 1.15rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">Carpentry &amp; Assembly Included</h3>
          <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.6; margin: 0;">
            Experienced move crews dismantle double beds, wardrobes, and dining tables at origin and reassemble every item at destination.
          </p>
        </div>

      </div>

    </div>
  </section>

  <!-- Section 4: 4-Protocol Zero-Damage Safety System -->
  <section style="padding: 70px 0; background: #070d1e; color: #ffffff; border-top: 1px solid rgba(245, 158, 11, 0.15);" id="safety-protocols-section">
    <div class="container" style="max-width: 1100px; margin: 0 auto; padding: 0 15px;">
      
      <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px; display: inline-block; margin-bottom: 10px;">Safety Protocols</span>
      <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin: 0 0 20px 0;">
        Our 4-Protocol Zero-Damage Execution System
      </h2>
      <p style="font-size: 1.05rem; color: #cbd5e1; line-height: 1.7; margin-bottom: 30px;">
        Transporting valuable household goods, commercial cargo, and personal vehicles demands rigorous safety engineering. At Shree Ashirwad Packers and Movers, we enforce a mandatory 4-protocol safety system for every move:
      </p>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 24px;">
        
        <!-- Protocol 1 -->
        <div style="background: #101c40; padding: 26px; border-radius: 12px; border: 1.5px solid rgba(245, 158, 11, 0.25);">
          <div style="font-size: 1.3rem; font-weight: 800; color: #f59e0b; margin-bottom: 12px;">Protocol 1: Multi-Layer Material Shielding</div>
          <p style="font-size: 0.95rem; color: #cbd5e1; line-height: 1.7; margin: 0;">
            Every household item undergoes multi-layer wrapping combining air-bubble film, waterproof shrink wrap, 5-ply corrugated sheets, and foam corner guards. Fragile Smart TVs, glass tops, and mirrors receive custom wooden crating built on-site before vehicle loading.
          </p>
        </div>

        <!-- Protocol 2 -->
        <div style="background: #101c40; padding: 26px; border-radius: 12px; border: 1.5px solid rgba(245, 158, 11, 0.25);">
          <div style="font-size: 1.3rem; font-weight: 800; color: #f59e0b; margin-bottom: 12px;">Protocol 2: Container Anchorage System</div>
          <p style="font-size: 0.95rem; color: #cbd5e1; line-height: 1.7; margin: 0;">
            Inside our closed container trucks, goods are anchored using heavy-duty nylon safety belts tied to internal wall rings. This eliminates cargo sliding, friction scuffs, or tipping over during highway acceleration and sudden braking.
          </p>
        </div>

        <!-- Protocol 3 -->
        <div style="background: #101c40; padding: 26px; border-radius: 12px; border: 1.5px solid rgba(245, 158, 11, 0.25);">
          <div style="font-size: 1.3rem; font-weight: 800; color: #f59e0b; margin-bottom: 12px;">Protocol 3: Live Satellite GPS Tracking</div>
          <p style="font-size: 0.95rem; color: #cbd5e1; line-height: 1.7; margin: 0;">
            Our vehicles are fitted with real-time satellite GPS tracking hardware. Clients receive direct location updates on WhatsApp, allowing complete peace of mind while your container truck travels to its destination.
          </p>
        </div>

        <!-- Protocol 4 -->
        <div style="background: #101c40; padding: 26px; border-radius: 12px; border: 1.5px solid rgba(245, 158, 11, 0.25);">
          <div style="font-size: 1.3rem; font-weight: 800; color: #f59e0b; margin-bottom: 12px;">Protocol 4: Comprehensive Transit Insurance</div>
          <p style="font-size: 0.95rem; color: #cbd5e1; line-height: 1.7; margin: 0;">
            We back every shipment with 100% full-value transit insurance policy documentation. In the unlikely event of any highway incident, claims are processed promptly with zero financial loss to you.
          </p>
        </div>

      </div>

    </div>
  </section>

  <!-- Section 5: Transparent Pricing Matrix Table -->
  <section style="padding: 70px 0; background: #0b132b; color: #ffffff;" id="pricing-matrix-section">
    <div class="container" style="max-width: 1100px; margin: 0 auto; padding: 0 15px;">
      
      <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px; display: inline-block; margin-bottom: 10px;">Transparent Pricing</span>
      <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin: 0 0 20px 0;">
        Estimated Shifting Charges & Tariff Breakdown: Chatra Cost Guide
      </h2>
      <p style="font-size: 1.05rem; color: #cbd5e1; line-height: 1.7; margin-bottom: 25px;">
        We believe in 100% transparent pricing with zero hidden fees or surprise surcharges. Below is our baseline tariff breakdown for household shifting, vehicle transport, and luggage items:
      </p>

      <div style="overflow-x: auto; margin-bottom: 30px;">
        <table style="width: 100%; border-collapse: collapse; background: #172a54; border-radius: 12px; overflow: hidden; border: 1px solid rgba(245, 158, 11, 0.3);">
          <thead>
            <tr style="background: linear-gradient(135deg, #1c2541 0%, #0b132b 100%); color: #f59e0b; text-align: left; font-size: 0.95rem;">
              <th style="padding: 16px 20px; border-bottom: 2px solid rgba(245, 158, 11, 0.4);">Shifting Type / House Size</th>
              <th style="padding: 16px 20px; border-bottom: 2px solid rgba(245, 158, 11, 0.4);">Packaging &amp; Material</th>
              <th style="padding: 16px 20px; border-bottom: 2px solid rgba(245, 158, 11, 0.4);">Truck Type &amp; Vehicle</th>
              <th style="padding: 16px 20px; border-bottom: 2px solid rgba(245, 158, 11, 0.4);">Estimated Cost (₹)</th>
            </tr>
          </thead>
          <tbody style="color: #cbd5e1; font-size: 0.9rem; line-height: 1.6;">
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.08);">
              <td style="padding: 14px 20px; font-weight: 700; color: #ffffff;">1 BHK Small House / Studio</td>
              <td style="padding: 14px 20px;">Standard 3-Layer Packaging</td>
              <td style="padding: 14px 20px;">11 ft Covered Pickup Truck</td>
              <td style="padding: 14px 20px; font-weight: 700; color: #f59e0b;">₹3,500 - ₹6,500</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.08); background: rgba(255,255,255,0.02);">
              <td style="padding: 14px 20px; font-weight: 700; color: #ffffff;">2 BHK Standard Apartment</td>
              <td style="padding: 14px 20px;">Premium 5-Layer Packaging</td>
              <td style="padding: 14px 20px;">14 ft Sealed Container Truck</td>
              <td style="padding: 14px 20px; font-weight: 700; color: #f59e0b;">₹6,500 - ₹11,500</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.08);">
              <td style="padding: 14px 20px; font-weight: 700; color: #ffffff;">3 BHK Large Residence</td>
              <td style="padding: 14px 20px;">7-Layer Packaging + TV Crate</td>
              <td style="padding: 14px 20px;">17/19 ft Container Truck</td>
              <td style="padding: 14px 20px; font-weight: 700; color: #f59e0b;">₹11,500 - ₹17,500</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.08); background: rgba(255,255,255,0.02);">
              <td style="padding: 14px 20px; font-weight: 700; color: #ffffff;">4 BHK Independent Villa / Duplex</td>
              <td style="padding: 14px 20px;">Full Heavy Packaging &amp; Wooden Crating</td>
              <td style="padding: 14px 20px;">22 ft Dedicated Container Truck</td>
              <td style="padding: 14px 20px; font-weight: 700; color: #f59e0b;">₹17,500 - ₹25,000</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.08);">
              <td style="padding: 14px 20px; font-weight: 700; color: #ffffff;">Bike Transport (100cc - 350cc+)</td>
              <td style="padding: 14px 20px;">Bubble + Corrugated + Paddy Padding</td>
              <td style="padding: 14px 20px;">Enclosed Bike Carrier Vehicle</td>
              <td style="padding: 14px 20px; font-weight: 700; color: #f59e0b;">₹1,800 - ₹3,500</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.08); background: rgba(255,255,255,0.02);">
              <td style="padding: 14px 20px; font-weight: 700; color: #ffffff;">Car Transport (Hatchback/Sedan/SUV)</td>
              <td style="padding: 14px 20px;">Car Cover &amp; Wheel Chock Safety Locks</td>
              <td style="padding: 14px 20px;">Covered Hydraulic Car Carrier Trailer</td>
              <td style="padding: 14px 20px; font-weight: 700; color: #f59e0b;">₹4,500 - ₹8,500</td>
            </tr>
            <tr style="background: rgba(255,255,255,0.04);">
              <td style="padding: 14px 20px; font-weight: 700; color: #ffffff;">Part-Load Luggage / Single Item</td>
              <td style="padding: 14px 20px;">Standard Protection Wrapping</td>
              <td style="padding: 14px 20px;">Shared Express Container Truck</td>
              <td style="padding: 14px 20px; font-weight: 700; color: #f59e0b;">₹1,500 - ₹3,800</td>
            </tr>
          </tbody>
        </table>
      </div>

      <p style="font-size: 0.88rem; color: #94a3b8; line-height: 1.6; margin: 0;">
        *Note: Final price estimates depend on total inventory volume, selected packaging materials, origin/destination floor elevation (elevator availability), and specific insurance requirements. Contact us at <strong>+91 8409531615</strong> for a fixed written quotation.
      </p>

    </div>
  </section>



  <section class="content-guide-section" style="background: #f8fafc; padding: 60px 0;" id="cost-factors-guide">
    <div class="container" style="max-width: 1100px; margin: 0 auto; padding: 0 15px; color: #334155; line-height: 1.8;">
      
      <h2 style="font-size: 2.2rem; font-weight: 800; color: #0f172a; margin-bottom: 25px;">Factors Influencing Shifting Charges in Chatra</h2>

      <p style="font-size: 1.05rem; margin-bottom: 20px;">
        Understanding how packers and movers calculate moving rates empowers homeowners and corporate clients to plan their relocation budget effectively without encountering unexpected expenses. At Shree Ashirwad Packers and Movers, we maintain total transparency across all pricing models. Several key factors determine your final shifting bill:
      </p>

      <h3 style="font-size: 1.6rem; font-weight: 700; color: #1e293b; margin-top: 30px; margin-bottom: 15px;">1. Quantity and Volume of Goods</h3>
      <p style="margin-bottom: 20px;">
        The primary cost driver is the overall volume of items to be packed and transported. A compact 1BHK home requires fewer packing materials, fewer cardboard boxes, and a smaller transport vehicle (like a Tata Ace or Pickup truck). In contrast, a 3BHK house with heavy wooden furniture, modular wardrobes, and multiple appliances requires a larger 17ft or 19ft container truck along with a larger packing crew.
      </p>

      <h3 style="font-size: 1.6rem; font-weight: 700; color: #1e293b; margin-top: 30px; margin-bottom: 15px;">2. Quality of Packaging Materials</h3>
      <p style="margin-bottom: 20px;">
        Cheap moving services reduce quotes by using low-grade single-layer bubble rolls or recycled boxes. We utilize a rigid 7-layer safety packing framework—including heavy-duty air-bubble sheets, 5-ply corrugated fiberboard boxes, stretch wrap film, edge protectors, and custom wooden crates for glass tabletops and smart TVs.
      </p>

      <h3 style="font-size: 1.6rem; font-weight: 700; color: #1e293b; margin-top: 30px; margin-bottom: 15px;">3. Distance and Route Infrastructure</h3>
      <p style="margin-bottom: 20px;">
        For local moves within Chatra town, distance plays a minor role. However, for intercity moves along NH-22 or NH-19 (GT Road) toward Ranchi, Patna, Kolkata, or Delhi, fuel consumption, driver allowances, state border taxes, and highway tolls are factored into the overall tariff.
      </p>

      <h3 style="font-size: 1.6rem; font-weight: 700; color: #1e293b; margin-top: 30px; margin-bottom: 15px;">4. IBA GST Invoice &amp; Transit Insurance</h3>
      <p style="margin-bottom: 20px;">
        Government employees, police officers, and corporate staff in Chatra who claim shifting allowances receive 100% genuine IBA-compliant GST invoices. Adding transit insurance (typically 3% of declared consignment value) guarantees complete risk coverage during transit.
      </p>

    </div>
  </section>

  <!-- FAQs Section -->
  <section class="faq-section" style="background: #ffffff; padding: 60px 0; border-top: 1px solid #e2e8f0;" id="faqs">
    <div class="container" style="max-width: 1000px; margin: 0 auto; padding: 0 15px;">
      <div style="text-align: center; margin-bottom: 45px;">
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #0f172a; margin-bottom: 10px;">Frequently Asked Questions About Chatra Shifting Costs</h2>
        <p style="color: #64748b; font-size: 1rem;">Clear answers to common questions about moving quotes and tariff rates.</p>
      </div>

      <div style="display: flex; flex-direction: column; gap: 15px;">
        <?php foreach ($faq_list as $index => $faq): ?>
          <div style="border: 1px solid #e2e8f0; border-radius: 8px; overflow: hidden; background: #f8fafc;">
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

  <!-- Bottom CTA Banner -->
  <section class="cta-banner" style="background: linear-gradient(135deg, #1e3a8a 0%, #0f172a 100%); color: #ffffff; padding: 50px 0; text-align: center;" id="bottom-cta">
    <div class="container" style="max-width: 900px; margin: 0 auto; padding: 0 15px;">
      <h2 style="font-size: 2.2rem; font-weight: 800; margin-bottom: 15px; color: #ffffff;">Get Your Exact Shifting Quote in Chatra Today!</h2>
      <p style="font-size: 1.1rem; color: #cbd5e1; margin-bottom: 30px; line-height: 1.7;">
        Call our move coordinators now or request an instant rate breakdown on WhatsApp. Zero hidden charges, 100% price guarantee!
      </p>
      <div style="display: flex; justify-content: center; gap: 15px; flex-wrap: wrap;">
        <a href="tel:+918409531615" style="background: #2563eb; color: #ffffff; padding: 14px 30px; border-radius: 8px; font-weight: 700; text-decoration: none; display: inline-flex; align-items: center; gap: 10px; font-size: 1.05rem;" id="cta-call-btn">
          <i class="fa-solid fa-phone"></i> Call +91 8409531615
        </a>
        <a href="https://api.whatsapp.com/send?phone=918409531615&text=Hello%20Shree%20Ashirwad%20Packers%20and%20Movers,%20I%20want%20a%20cost%20estimate%20for%20Chatra." style="background: #22c55e; color: #ffffff; padding: 14px 30px; border-radius: 8px; font-weight: 700; text-decoration: none; display: inline-flex; align-items: center; gap: 10px; font-size: 1.05rem;" id="cta-wa-btn">
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
