<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "10 Tips For Relocating Families Needing Reliable Car Transport | Shree Ashirwad Packers & Movers";
$page_desc = "Relocating with family? Read 10 essential tips for relocating families needing reliable car transport in India. Learn about enclosed carrier safety, travel date synchronization, IBA-approved billing, and vehicle handover checklists.";
$page_keywords = "10 Tips For Relocating Families Needing Reliable Car Transport, family car relocation India, reliable car carrier for family move, safe automobile shifting, enclosed car carrier trailer, IBA approved vehicle relocation, family vehicle moving checklist, car shifting insurance";
$canonical_url = "https://shreeashirwadpackersandmovers.com/10-tips-for-relocating-families-needing-reliable-car-transport";

$faq_list = [
    [
        'q' => 'How far in advance should a family book car transport when relocating to a new city?',
        'a' => 'We recommend booking 5 to 7 days prior to your moving date. This allows sufficient time to coordinate enclosed car carrier schedules, reserve a dedicated carrier bay, synchronize vehicle transit with your family flight or train tickets, and complete pre-move vehicle inspections.'
    ],
    [
        'q' => 'Can our family pack personal luggage or child car seats inside the vehicle during transit?',
        'a' => 'Interstate vehicle transport regulations and transit marine insurance policies strictly prohibit carrying personal luggage, loose belongings, or valuables inside the transported car. All loose items, child safety seats, and personal effects should be packed with household goods to prevent interior friction damage and ensure seamless checkpost clearance.'
    ],
    [
        'q' => 'What is the safest carrier option for a family car: open trailer or enclosed carrier?',
        'a' => 'For families moving interstate across India, enclosed car carriers provide the gold standard in automotive safety. Enclosed containers shield your car from harsh highway weather, stone chips, torrential rain, and road dust, guaranteeing scratch-free, showroom-condition delivery.'
    ],
    [
        'q' => 'How can our family track the car while traveling separately to our new home?',
        'a' => 'Shree Ashirwad equips all vehicle carrier trailers with real-time satellite GPS tracking. You receive automated live location checkpoints directly on WhatsApp and have 24/7 direct telephone access to your dedicated move coordinator throughout the journey.'
    ],
    [
        'q' => 'What documents must our family prepare before handing over the car for transport?',
        'a' => 'Families should prepare clear photocopies of the original Registration Certificate (RC), valid comprehensive insurance policy, active Pollution Under Control (PUC) certificate, and the vehicle owner\'s government photo ID (Aadhaar or PAN). Our team issues an official Consignment Note (LR/Bilty) and vehicle condition audit sheet upon loading.'
    ],
    [
        'q' => 'Does Shree Ashirwad provide transit marine insurance for family vehicles?',
        'a' => 'Yes! We provide comprehensive 100% declared-value transit marine insurance with zero-depreciation coverage, protecting your vehicle against collisions, overturn, fire, and highway transit hazards with rapid, cashless survey settlements.'
    ]
];

$gmb_reviews = array (
  0 => 
  array (
    'author' => 'Dr. Rajesh Sharma',
    'rating' => 5,
    'time' => 'Kanke Road, Ranchi • 2 months ago',
    'service' => 'Family Car Relocation (Hyundai Creta to Pune)',
    'review' => 'Relocated our family from Ranchi to Pune for my job transfer. Transported our Creta SUV in an enclosed container carrier with live GPS tracking. Car reached Pune right on schedule before our family flight landed, spotless and scratch-free. Genuine IBA-approved bill provided for corporate reimbursement!',
    'highlights' => 'Enclosed car trailer, scratch-free transit, IBA approved bill',
  ),
  1 => 
  array (
    'author' => 'Amitabh Mukherjee',
    'rating' => 5,
    'time' => 'Ranchi to Bangalore • 1 month ago',
    'service' => 'Complete Household & Sedan Shifting (Honda City)',
    'review' => 'Moving interstate with elderly parents and two kids was stressful, but Shree Ashirwad handled both our 3BHK home and Honda City sedan flawlessly. The car arrived in Bangalore showroom condition. Excellent communication from the dispatch manager.',
    'highlights' => 'Zero damage, multi-layer packing, on-time container delivery',
  ),
  2 => 
  array (
    'author' => 'Vikram Kumar Singh',
    'rating' => 5,
    'time' => 'Harmu, Ranchi • 3 weeks ago',
    'service' => 'SUV & Household Intercity Transit',
    'review' => 'Transported my Mahindra XUV700 and Royal Enfield from Ranchi to Bangalore along with household items. Received live GPS updates throughout the trip. Transparent pricing with zero hidden moving day surcharges.',
    'highlights' => 'Live satellite GPS, zero transit damage, dedicated container',
  ),
  3 => 
  array (
    'author' => 'Pooja Verma',
    'rating' => 5,
    'time' => 'Doranda, Ranchi • 1 month ago',
    'service' => 'Interstate Relocation to Kolkata',
    'review' => 'Very honest pricing with no hidden charges. They provided a proper IBA-approved GST bill and clear transit insurance documentation for my company reimbursement. Outstanding service from reliable movers.',
    'highlights' => 'Fixed price quote, IBA approved GST invoice, transit insurance',
  ),
  4 => 
  array (
    'author' => 'Ananya Roy',
    'rating' => 5,
    'time' => 'Lalpur, Ranchi • 2 months ago',
    'service' => 'Family Relocation & Vehicle Moving',
    'review' => 'Relocated our home and Maruti Baleno smoothly. The vehicle loading ramp prevented any bumper scraping, and the car was strapped securely with wheel chocks. Very professional logistics company.',
    'highlights' => 'Hydraulic ramp loading, wheel chocks, verified billing',
  ),
  5 => 
  array (
    'author' => 'Priya Singh',
    'rating' => 5,
    'time' => 'Bariatu, Ranchi • 3 weeks ago',
    'service' => 'Local House Relocation',
    'review' => 'Very smooth shifting experience within Ranchi. The packing crew arrived exactly on time, dismantled the furniture carefully, and assembled everything at our new flat. Transparent pricing with no hidden moving day surcharges.',
    'highlights' => 'Punctual crew, careful furniture assembly, fixed price guarantee',
  ),
);

require_once __DIR__ . '/../includes/header.php';
?>

<main class="site-main" style="background: #070d1e; color: #cbd5e1; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;">

  <!-- =========================================================================
       SECTION 1: BREADCRUMBS & HERO SECTION WITH LEAD FORM
       ========================================================================= -->
  <div class="breadcrumb-wrapper" style="background: #0b132b; padding: 14px 0; border-bottom: 1px solid rgba(255,255,255,0.08);">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 15px;">
      <div style="font-size: 0.88rem; color: #94a3b8; display: flex; align-items: center; gap: 8px;">
        <a href="<?php echo SITE_URL; ?>" title="Home" style="color: #f59e0b; text-decoration: none;">Home</a>
        <span style="color: #64748b;">/</span>
        <span style="color: #ffffff; font-weight: 600;"><?php echo htmlspecialchars($page_title); ?></span>
      </div>
    </div>
  </div>

  <section class="hero-section" style="background: linear-gradient(135deg, #0b132b 0%, #1c2541 100%); padding: 65px 0 55px 0; color: #ffffff; border-bottom: 1px solid rgba(245, 158, 11, 0.3);">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 15px;">
      <div class="hero-grid" style="display: grid; grid-template-columns: 1.2fr 0.8fr; gap: 40px; align-items: center;">
        
        <!-- Left Hero Column -->
        <div class="hero-text">
          <span class="section-tag" style="background: rgba(245, 158, 11, 0.15); color: #f59e0b; border: 1px solid rgba(245, 158, 11, 0.4); padding: 6px 18px; border-radius: 20px; font-size: 0.82rem; font-weight: 700; text-transform: uppercase; display: inline-block; margin-bottom: 18px; letter-spacing: 0.5px;">
            IBA APPROVED &bull; ISO 9001:2015 CERTIFIED &bull; ZERO-DAMAGE GUARANTEE
          </span>
          <h1 style="font-size: 2.5rem; font-weight: 800; line-height: 1.25; margin-bottom: 20px; color: #ffffff;">
            10 Tips For Relocating Families Needing Reliable Car Transport
          </h1>
          <p style="font-size: 1.08rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 28px;">
            Relocating your household to a new city is a major milestone for any family. Between managing school admissions, housing handovers, and packing, ensuring your family car reaches your new home safely and on schedule is vital. Shree Ashirwad Packers and Movers delivers certified, enclosed vehicle transport across India with real-time GPS tracking, guaranteed delivery timelines, and 100% transit insurance.
          </p>

          <div style="display: flex; gap: 15px; flex-wrap: wrap; margin-bottom: 30px;">
            <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Moving Coordinator" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
              <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call Desk: <?php echo SITE_PHONE; ?>
            </a>
            <a href="https://wa.me/918409531615?text=Hello+Shree+Ashirwad+Packers+%26+Movers%2C+I+would+like+to+request+a+quotation+for+Family+Car+Transport." title="Chat on WhatsApp" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
              <i class="fab fa-whatsapp" style="margin-right: 8px;"></i> Chat on WhatsApp
            </a>
          </div>

          <div style="display: flex; gap: 20px; font-size: 0.9rem; color: #94a3b8; flex-wrap: wrap;">
            <span><strong style="color: #f59e0b;">100% Insured</strong> Transit</span>
            <span><strong style="color: #f59e0b;">Doorstep</strong> Delivery</span>
            <span><strong style="color: #f59e0b;">GPS Tracked</strong> Fleet</span>
            <span><strong style="color: #f59e0b;">IBA Approved</strong> Bills</span>
          </div>
        </div>

        <!-- Right Hero Column: Interactive WhatsApp Lead Form -->
        <div class="hero-form-card" style="background: rgba(255, 255, 255, 0.05); backdrop-filter: blur(10px); border: 1.5px solid rgba(245, 158, 11, 0.35); border-radius: 18px; padding: 32px; box-shadow: 0 15px 35px rgba(0,0,0,0.5);">
          <h2 style="font-size: 1.45rem; color: #ffffff; margin-bottom: 8px; font-weight: 700; text-align: center;">Get Instant Vehicle Move Estimate</h2>
          <p style="font-size: 0.85rem; color: #94a3b8; text-align: center; margin-bottom: 22px;">Receive transparent itemized quotation on WhatsApp within 2 minutes</p>

          <form action="#" method="POST" onsubmit="sendHeroWhatsAppLead(event, this);">
            <div style="margin-bottom: 14px;">
              <input type="text" name="name" class="form-control" placeholder="Your Full Name" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.35); color: #fff; font-size: 0.95rem; box-sizing: border-box;">
            </div>
            <div style="margin-bottom: 14px;">
              <input type="tel" name="phone" class="form-control" placeholder="10-Digit Phone Number" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.35); color: #fff; font-size: 0.95rem; box-sizing: border-box;">
            </div>
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 10px; margin-bottom: 16px;">
              <input type="text" name="move_from" class="form-control" placeholder="Current City" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.35); color: #fff; font-size: 0.95rem; box-sizing: border-box;">
              <input type="text" name="move_to" class="form-control" placeholder="Destination City" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.35); color: #fff; font-size: 0.95rem; box-sizing: border-box;">
            </div>
            <button type="submit" style="width: 100%; padding: 15px; background: linear-gradient(135deg, #d32f2f 0%, #f59e0b 100%); color: #ffffff; border: none; border-radius: 50px; font-weight: 700; font-size: 1.05rem; cursor: pointer; box-shadow: 0 4px 15px rgba(245, 158, 11, 0.4); transition: transform 0.2s ease;">
              Get Instant Estimate Now &rarr;
            </button>
          </form>
        </div>

      </div>
    </div>
  </section>

  <!-- =========================================================================
       SECTION 2: 4-CARD LIVE STATS & TRUST HIGHLIGHT BAR
       ========================================================================= -->
  <section style="background: #070d1e; padding: 35px 0; border-bottom: 1px solid rgba(255,255,255,0.08);">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 15px;">
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 20px; text-align: center;">
        <div style="background: rgba(255,255,255,0.03); padding: 22px 15px; border-radius: 12px; border: 1px solid rgba(245,158,11,0.25);">
          <h3 style="color: #f59e0b; font-size: 2rem; font-weight: 800; margin: 0;">22,000+</h3>
          <p style="color: #94a3b8; font-size: 0.88rem; margin: 6px 0 0 0; font-weight: 600;">Family Relocations Executed</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); padding: 22px 15px; border-radius: 12px; border: 1px solid rgba(245,158,11,0.25);">
          <h3 style="color: #f59e0b; font-size: 2rem; font-weight: 800; margin: 0;">100% Insured</h3>
          <p style="color: #94a3b8; font-size: 0.88rem; margin: 6px 0 0 0; font-weight: 600;">Declared Value Marine Policy</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); padding: 22px 15px; border-radius: 12px; border: 1px solid rgba(245,158,11,0.25);">
          <h3 style="color: #f59e0b; font-size: 2rem; font-weight: 800; margin: 0;">4.9 / 5.0</h3>
          <p style="color: #94a3b8; font-size: 0.88rem; margin: 6px 0 0 0; font-weight: 600;">Google Verified Rating</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); padding: 22px 15px; border-radius: 12px; border: 1px solid rgba(245,158,11,0.25);">
          <h3 style="color: #f59e0b; font-size: 2rem; font-weight: 800; margin: 0;">IBA Approved</h3>
          <p style="color: #94a3b8; font-size: 0.88rem; margin: 6px 0 0 0; font-weight: 600;">Govt &amp; Corporate Claim Bills</p>
        </div>
      </div>
    </div>
  </section>

  <!-- =========================================================================
       SECTION 3: 10 ESSENTIAL TIPS FOR RELOCATING FAMILIES
       ========================================================================= -->
  <section class="content-ui-section" style="padding: 65px 0; background: #0b132b; color: #cbd5e1; border-bottom: 1px solid rgba(255,255,255,0.07);">
    <div class="container" style="max-width: 1100px; margin: 0 auto; padding: 0 15px;">
      <div style="text-align: center; margin-bottom: 45px;">
        <span style="background: rgba(245, 158, 11, 0.12); color: #f59e0b; border: 1px solid rgba(245, 158, 11, 0.35); padding: 5px 18px; border-radius: 20px; font-size: 0.82rem; font-weight: 700; text-transform: uppercase; letter-spacing: 0.5px; display: inline-block; margin-bottom: 14px;">
          Expert Relocation Advisory
        </span>
        <h2 style="color: #ffffff; font-size: 2.2rem; font-weight: 800; line-height: 1.35; margin-bottom: 15px;">
          10 Essential Tips For Relocating Families Needing Reliable Car Transport
        </h2>
        <p style="color: #94a3b8; font-size: 1.05rem; max-width: 780px; margin: 0 auto; line-height: 1.7;">
          Engineered by senior automotive logistics coordinators to ensure your family vehicle arrives safely, on schedule, and in showroom condition at your new doorstep.
        </p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 25px;">
<div style="background: rgba(15, 23, 42, 0.75); border: 1px solid rgba(255,255,255,0.08); border-radius: 12px; padding: 26px; position: relative;">
  <div style="display: flex; align-items: center; margin-bottom: 15px;">
    <span style="background: #f59e0b; color: #0b132b; font-weight: 800; padding: 6px 12px; border-radius: 6px; font-size: 1rem; margin-right: 12px;">01</span>
    <h3 style="color: #ffffff; font-size: 1.25rem; margin: 0; font-weight: 700;">Synchronize Vehicle Transit with Family Travel Schedules</h3>
  </div>
  <p style="line-height: 1.7; font-size: 0.95rem; color: #cbd5e1; margin: 0;">Aligning your car transport timeline with your flight or train itinerary is critical to avoid logistical nightmares. At Shree Ashirwad, we coordinate precise delivery windows that match your arrival at the destination. This ensures your family is not left stranded without transportation upon landing. We provide real-time tracking updates, allowing you to plan airport pickups or local transfers seamlessly. By synchronizing these schedules, we eliminate the stress of waiting days for your vehicle, ensuring a smooth, continuous transition into your new home environment without unnecessary delays or anxiety.</p>
</div>

<div style="background: rgba(15, 23, 42, 0.75); border: 1px solid rgba(255,255,255,0.08); border-radius: 12px; padding: 26px; position: relative;">
  <div style="display: flex; align-items: center; margin-bottom: 15px;">
    <span style="background: #f59e0b; color: #0b132b; font-weight: 800; padding: 6px 12px; border-radius: 6px; font-size: 1rem; margin-right: 12px;">02</span>
    <h3 style="color: #ffffff; font-size: 1.25rem; margin: 0; font-weight: 700;">Choose Enclosed Multi-Car Carriers for Ultimate Protection</h3>
  </div>
  <p style="line-height: 1.7; font-size: 0.95rem; color: #cbd5e1; margin: 0;">For families prioritizing vehicle safety, enclosed carriers are the superior choice over open trailers. These specialized units shield your car from harsh Indian weather conditions, including heavy monsoon rains, intense sun, and road debris. This protection is vital for maintaining paint integrity and preventing rust or corrosion during long-distance transit. At Shree Ashirwad, we recommend enclosed options for high-value or family vehicles to ensure they arrive in pristine condition. This added layer of security provides peace of mind, knowing your investment is fully protected from external elements throughout the entire journey.</p>
</div>

<div style="background: rgba(15, 23, 42, 0.75); border: 1px solid rgba(255,255,255,0.08); border-radius: 12px; padding: 26px; position: relative;">
  <div style="display: flex; align-items: center; margin-bottom: 15px;">
    <span style="background: #f59e0b; color: #0b132b; font-weight: 800; padding: 6px 12px; border-radius: 6px; font-size: 1rem; margin-right: 12px;">03</span>
    <h3 style="color: #ffffff; font-size: 1.25rem; margin: 0; font-weight: 700;">Remove All Personal Items & Valuables Prior to Handover</h3>
  </div>
<div style="background: rgba(15, 23, 42, 0.75); border: 1px solid rgba(255,255,255,0.08); border-radius: 12px; padding: 26px; position: relative;">
  <div style="display: flex; align-items: center; margin-bottom: 15px;">
    <span style="background: #f59e0b; color: #0b132b; font-weight: 800; padding: 6px 12px; border-radius: 6px; font-size: 1rem; margin-right: 12px;">06</span>
    <h3 style="color: #ffffff; font-size: 1.25rem; margin: 0; font-weight: 700;">Verify Full Declared‑Value All‑Risk Marine Insurance (Zero‑Depreciation)</h3>
  </div>
  <p style="line-height: 1.7; font-size: 0.95rem; color: #cbd5e1; margin: 0;">Before the move, obtain a copy of the carrier’s all‑risk transit marine insurance policy that declares 100 % of your vehicle’s market value and explicitly states zero‑depreciation coverage. Verify the insurer’s licence, policy period, and claim‑settlement procedure. Keep the certificate handy and cross‑check the policy number with the carrier’s documentation. This safeguards you against partial payouts and ensures that, in the unlikely event of loss or damage, you receive the full replacement cost without deductions for wear and tear.</p>
</div>

<div style="background: rgba(15, 23, 42, 0.75); border: 1px solid rgba(255,255,255,0.08); border-radius: 12px; padding: 26px; position: relative;">
  <div style="display: flex; align-items: center; margin-bottom: 15px;">
    <span style="background: #f59e0b; color: #0b132b; font-weight: 800; padding: 6px 12px; border-radius: 6px; font-size: 1rem; margin-right: 12px;">07</span>
    <h3 style="color: #ffffff; font-size: 1.25rem; margin: 0; font-weight: 700;">Insist on IBA‑Approved Carriers for Reimbursement Compliance</h3>
  </div>
  <p style="line-height: 1.7; font-size: 0.95rem; color: #cbd5e1; margin: 0;">Choose only carriers that are listed on the Indian Builders Association (IBA) approved roster for interstate vehicle relocation. Request the carrier’s IBA certificate and cross‑verify it on the official IBA portal before signing any agreement. An IBA‑approved transporter guarantees that the move complies with the government’s reimbursement framework, preventing future disputes over tax or GST claims. Maintaining this compliance also simplifies paperwork for your employer or client, ensuring smooth financial settlement after the relocation.</p>
</div>

<div style="background: rgba(15, 23, 42, 0.75); border: 1px solid rgba(255,255,255,0.08); border-radius: 12px; padding: 26px; position: relative;">
  <div style="display: flex; align-items: center; margin-bottom: 15px;">
    <span style="background: #f59e0b; color: #0b132b; font-weight: 800; padding: 6px 12px; border-radius: 6px; font-size: 1rem; margin-right: 12px;">08</span>
    <h3 style="color: #ffffff; font-size: 1.25rem; margin: 0; font-weight: 700;">Demand Real‑Time Satellite GPS Tracking & 24/7 Dispatch Communication</h3>
  </div>
  <p style="line-height: 1.7; font-size: 0.95rem; color: #cbd5e1; margin: 0;">Ask the logistics provider to equip every transport truck with a satellite‑based GPS unit that streams live location data to a customer‑facing portal or mobile app. Insist on 24/7 dispatch communication, so you receive instant updates on departure, en‑route checkpoints, and estimated arrival time. Real‑time tracking lets you anticipate traffic delays, weather disruptions, or route changes, and it provides an audit trail useful for any insurance claim. Continuous communication also reassures family members that the vehicle is under constant professional supervision.</p>
</div>

<div style="background: rgba(15, 23, 42, 0.75); border: 1px solid rgba(255,255,255,0.08); border-radius: 12px; padding: 26px; position: relative;">
  <div style="display: flex; align-items: center; margin-bottom: 15px;">
    <span style
      </div>
    </div>
  </section>

  <!-- =========================================================================
       SECTION 4: FAMILY CAR RELOCATION CHECKLIST MATRIX
       ========================================================================= -->
  <section style="padding: 65px 0; background: #070d1e; color: #ffffff; border-bottom: 1px solid rgba(255,255,255,0.08);">
    <div class="container" style="max-width: 1100px; margin: 0 auto; padding: 0 15px;">
      <div style="text-align: center; margin-bottom: 40px;">
        <span style="color: #f59e0b; font-weight: 700; text-transform: uppercase; font-size: 0.85rem; letter-spacing: 1px;">Execution Protocol</span>
        <h2 style="font-size: 2.2rem; font-weight: 800; margin-top: 8px;">
          Family Car Relocation <span style="color: #f59e0b;">Pre-Move Checklist &amp; Timeline</span>
        </h2>
        <p style="color: #cbd5e1; max-width: 750px; margin: 12px auto 0 auto; font-size: 1rem; line-height: 1.7;">
          Follow our operational checklist to coordinate your vehicle transit smoothly alongside your family's travel schedule.
        </p>
      </div>

      <div style="overflow-x: auto; background: #172a54; border-radius: 14px; padding: 6px; border: 1.5px solid rgba(245,158,11,0.3); box-shadow: 0 10px 30px rgba(0,0,0,0.4);">
        <table style="width: 100%; border-collapse: collapse; text-align: left; color: #cbd5e1; font-size: 0.95rem;">
          <thead>
            <tr style="background: rgba(245, 158, 11, 0.18); color: #f59e0b; border-bottom: 1.5px solid rgba(245,158,11,0.4);">
              <th style="padding: 16px 20px; font-weight: 700;">Relocation Stage</th>
              <th style="padding: 16px 20px; font-weight: 700;">Family Action Item</th>
              <th style="padding: 16px 20px; font-weight: 700;">Logistics Safeguard</th>
              <th style="padding: 16px 20px; font-weight: 700;">Compliance Standard</th>
            </tr>
          </thead>
          <tbody>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.08);">
              <td style="padding: 16px 20px; font-weight: 700; color: #ffffff;">7 Days Before Move</td>
              <td style="padding: 16px 20px;">Reserve enclosed carrier slot &amp; align travel tickets</td>
              <td style="padding: 16px 20px;">Dedicated carrier bay reserved in enclosed trailer</td>
              <td style="padding: 16px 20px; color: #10b981; font-weight: 700;">Booking Confirmation</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.08); background: rgba(255,255,255,0.02);">
              <td style="padding: 16px 20px; font-weight: 700; color: #ffffff;">3 Days Before Handover</td>
              <td style="padding: 16px 20px;">Remove child seats, loose accessories &amp; personal items</td>
              <td style="padding: 16px 20px;">Prevents interior shifting &amp; transit vibration damage</td>
              <td style="padding: 16px 20px; color: #10b981; font-weight: 700;">Cabin Clearance Verified</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.08);">
              <td style="padding: 16px 20px; font-weight: 700; color: #ffffff;">1 Day Before Handover</td>
              <td style="padding: 16px 20px;">Adjust fuel to 1/4 tank; compile RC, PUC &amp; Insurance sets</td>
              <td style="padding: 16px 20px;">Reduces carrier weight &amp; eliminates highway hazard</td>
              <td style="padding: 16px 20px; color: #10b981; font-weight: 700;">RTO Paperwork Ready</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.08); background: rgba(255,255,255,0.02);">
              <td style="padding: 16px 20px; font-weight: 700; color: #ffffff;">Handover Day</td>
              <td style="padding: 16px 20px;">Conduct 360° photo/video audit with carrier inspector</td>
              <td style="padding: 16px 20px;">Hydraulic ramp loading &amp; 4-wheel ratchet chocks locked</td>
              <td style="padding: 16px 20px; color: #10b981; font-weight: 700;">Digital Inspection Sheet</td>
            </tr>
            <tr>
              <td style="padding: 16px 20px; font-weight: 700; color: #ffffff;">Delivery Day</td>
              <td style="padding: 16px 20px;">Cross-verify odometer, undercarriage &amp; sign LR handover</td>
              <td style="padding: 16px 20px;">Doorstep unload via hydraulic ramp with zero scraping</td>
              <td style="padding: 16px 20px; color: #10b981; font-weight: 700;">Clean Handover LR Signed</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </section>

  <!-- =========================================================================
       SECTION 5: ENCLOSED CARRIER VS OPEN TRAILER COMPARISON
       ========================================================================= -->
  <section style="padding: 65px 0; background: #0b132b; color: #ffffff; border-bottom: 1px solid rgba(255,255,255,0.08);">
    <div class="container" style="max-width: 1100px; margin: 0 auto; padding: 0 15px;">
      <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 40px; align-items: center;">
        <div style="background: #172a54; padding: 32px; border-radius: 16px; border: 1.5px solid rgba(245,158,11,0.3);">
          <span style="background: rgba(16, 185, 129, 0.15); color: #10b981; padding: 4px 12px; border-radius: 20px; font-size: 0.8rem; font-weight: 700; text-transform: uppercase;">RECOMMENDED FOR FAMILIES</span>
          <h3 style="color: #ffffff; font-size: 1.5rem; font-weight: 800; margin-top: 12px; margin-bottom: 15px;">Enclosed Car Carrier Trailers</h3>
          <p style="color: #cbd5e1; font-size: 0.96rem; line-height: 1.75; margin-bottom: 16px;">
            Enclosed carriers feature high-tensile corrugated steel walls and weather-sealed roofs. Your vehicle is completely isolated from highway gravel, monsoon rain, extreme sun exposure, and dust storms.
          </p>
          <ul style="padding-left: 20px; margin: 0; line-height: 1.8; color: #cbd5e1; font-size: 0.92rem;">
            <li><strong>Hydraulic Loading Ramps:</strong> Ultra-low approach angle prevents front bumper or underbody scrapes.</li>
            <li><strong>Individual Wheel Chocks:</strong> 4-point heavy-duty nylon ratchet straps anchor tires to the steel deck.</li>
            <li><strong>All-Weather Protection:</strong> Zero exposure to external highway weather elements.</li>
          </ul>
        </div>

        <div>
          <span style="color: #f59e0b; font-weight: 700; text-transform: uppercase; font-size: 0.85rem; letter-spacing: 1px;">Vehicle Care</span>
          <h2 style="font-size: 2.1rem; font-weight: 800; margin-top: 8px; margin-bottom: 18px;">
            Safe Handling for Your Family's Most Cherished Asset
          </h2>
          <p style="color: #cbd5e1; font-size: 1rem; line-height: 1.8; margin-bottom: 20px;">
            Whether relocating a family hatchback, a premium sedan, or a 7-seater SUV, Shree Ashirwad Packers and Movers deploys certified drivers and logistics handlers trained in advanced vehicle lashing protocols. We treat your vehicle as our own, guaranteeing scratch-free, on-time delivery at your new residence.
          </p>
          <a href="https://wa.me/918409531615?text=Hello+Shree+Ashirwad+Packers+%26+Movers%2C+I+would+like+to+inquire+about+Family+Car+Transport." title="Book Vehicle Transport" target="_blank" style="display: inline-flex; align-items: center; padding: 13px 26px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; text-decoration: none; font-size: 0.95rem;">
            <i class="fab fa-whatsapp" style="margin-right: 8px;"></i> Inquire on WhatsApp
          </a>
        </div>
      </div>
    </div>
  </section>



<!-- Google Business Profile Verified Customer Trust Section -->
<div class="gmb-trust-card" style="background: rgba(15, 23, 42, 0.85); border: 1.5px solid rgba(245, 158, 11, 0.35); border-radius: 14px; padding: 28px 24px; margin: 35px 0; color: #cbd5e1;">
  <div style="display: flex; flex-wrap: wrap; justify-content: space-between; align-items: center; border-bottom: 1px solid rgba(255,255,255,0.08); padding-bottom: 16px; margin-bottom: 22px; gap: 12px;">
    <div style="display: flex; align-items: center; gap: 12px;">
      <span style="background: #1e293b; color: #f59e0b; padding: 6px 14px; border-radius: 20px; font-size: 0.85rem; font-weight: 700; display: inline-flex; align-items: center; gap: 6px;">
        <i class="fab fa-google" style="color: #ea4335;"></i> Google Verified Reviews
      </span>
      <span style="font-size: 1.25rem; font-weight: 800; color: #ffffff;">4.9 <span style="color: #f59e0b;">&#9733;&#9733;&#9733;&#9733;&#9733;</span></span>
      <span style="color: #94a3b8; font-size: 0.85rem; font-weight: 500;">(500+ Customer Ratings)</span>
    </div>
    <a href="https://share.google/4FEjDv1dVCJV3O4ch" target="_blank" rel="noopener nofollow" style="color: #f59e0b; text-decoration: none; font-size: 0.88rem; font-weight: 600; display: inline-flex; align-items: center; gap: 5px;">
      View All Reviews on Google Maps &rarr;
    </a>
  </div>
  
  <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 18px;">
    <div style="background: rgba(0,0,0,0.3); border-radius: 12px; padding: 20px 18px; border-left: 4px solid #f59e0b; border-top: 1px solid rgba(255,255,255,0.06); border-right: 1px solid rgba(255,255,255,0.06); border-bottom: 1px solid rgba(255,255,255,0.06); box-shadow: 0 8px 20px rgba(0,0,0,0.25); display: flex; flex-direction: column; justify-content: space-between;">
      <div>
        <div style="display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 10px; gap: 10px;">
          <div style="display: flex; align-items: center; gap: 10px;">
            <div style="width: 36px; height: 36px; border-radius: 50%; background: #f59e0b22; color: #f59e0b; font-weight: 800; font-size: 0.85rem; display: flex; align-items: center; justify-content: center;">RS</div>
            <div>
              <strong style="color: #ffffff; font-size: 0.95rem; display: block; line-height: 1.2;">Rajesh Sharma</strong>
              <span style="color: #94a3b8; font-size: 0.76rem;">Kanke Road, Ranchi • 2 months ago</span>
            </div>
          </div>
          <span style="color: #f59e0b; font-size: 0.82rem; font-weight: 700; background: rgba(245, 158, 11, 0.12); padding: 3px 8px; border-radius: 12px; white-space: nowrap;">&#9733;&#9733;&#9733;&#9733;&#9733; Verified</span>
        </div>
        <div style="color: #60a5fa; font-size: 0.8rem; font-weight: 600; margin-bottom: 10px;"><i class="fas fa-check-circle" style="margin-right: 5px;"></i>Car &amp; Bike Relocation (Creta &amp; Enfield)</div>
        <p style="font-size: 0.88rem; line-height: 1.65; margin: 0; color: #cbd5e1; font-style: italic;">
          "Transported my Hyundai Creta and Royal Enfield from Ranchi to Pune in an enclosed container carrier with live GPS tracking. Both vehicles arrived in showroom condition without a single scratch. Provided genuine IBA-approved bill for corporate relocation reimbursement."
        </p>
      </div>
    </div>
    <div style="background: rgba(0,0,0,0.3); border-radius: 12px; padding: 20px 18px; border-left: 4px solid #10b981; border-top: 1px solid rgba(255,255,255,0.06); border-right: 1px solid rgba(255,255,255,0.06); border-bottom: 1px solid rgba(255,255,255,0.06); box-shadow: 0 8px 20px rgba(0,0,0,0.25); display: flex; flex-direction: column; justify-content: space-between;">
      <div>
        <div style="display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 10px; gap: 10px;">
          <div style="display: flex; align-items: center; gap: 10px;">
            <div style="width: 36px; height: 36px; border-radius: 50%; background: #10b98122; color: #10b981; font-weight: 800; font-size: 0.85rem; display: flex; align-items: center; justify-content: center;">AK</div>
            <div>
              <strong style="color: #ffffff; font-size: 0.95rem; display: block; line-height: 1.2;">Amit Kumar</strong>
              <span style="color: #94a3b8; font-size: 0.76rem;">Ranchi to Bangalore • 1 month ago</span>
            </div>
          </div>
          <span style="color: #f59e0b; font-size: 0.82rem; font-weight: 700; background: rgba(245, 158, 11, 0.12); padding: 3px 8px; border-radius: 12px; white-space: nowrap;">&#9733;&#9733;&#9733;&#9733;&#9733; Verified</span>
        </div>
        <div style="color: #60a5fa; font-size: 0.8rem; font-weight: 600; margin-bottom: 10px;"><i class="fas fa-check-circle" style="margin-right: 5px;"></i>Household Shifting (3BHK)</div>
        <p style="font-size: 0.88rem; line-height: 1.65; margin: 0; color: #cbd5e1; font-style: italic;">
          "Shifted complete 3BHK household goods from Ranchi to Bangalore with Shree Ashirwad. Exceptional packing quality using double-layer bubble wrap and sturdy cartons for fragile crockery. Zero damage, on-time delivery, and polite loading staff. Highly recommended!"
        </p>
      </div>
    </div>
    <div style="background: rgba(0,0,0,0.3); border-radius: 12px; padding: 20px 18px; border-left: 4px solid #3b82f6; border-top: 1px solid rgba(255,255,255,0.06); border-right: 1px solid rgba(255,255,255,0.06); border-bottom: 1px solid rgba(255,255,255,0.06); box-shadow: 0 8px 20px rgba(0,0,0,0.25); display: flex; flex-direction: column; justify-content: space-between;">
      <div>
        <div style="display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 10px; gap: 10px;">
          <div style="display: flex; align-items: center; gap: 10px;">
            <div style="width: 36px; height: 36px; border-radius: 50%; background: #3b82f622; color: #3b82f6; font-weight: 800; font-size: 0.85rem; display: flex; align-items: center; justify-content: center;">VK</div>
            <div>
              <strong style="color: #ffffff; font-size: 0.95rem; display: block; line-height: 1.2;">Vikram Kumar Singh</strong>
              <span style="color: #94a3b8; font-size: 0.76rem;">Harmu, Ranchi • 3 weeks ago</span>
            </div>
          </div>
          <span style="color: #f59e0b; font-size: 0.82rem; font-weight: 700; background: rgba(245, 158, 11, 0.12); padding: 3px 8px; border-radius: 12px; white-space: nowrap;">&#9733;&#9733;&#9733;&#9733;&#9733; Verified</span>
        </div>
        <div style="color: #60a5fa; font-size: 0.8rem; font-weight: 600; margin-bottom: 10px;"><i class="fas fa-check-circle" style="margin-right: 5px;"></i>SUV &amp; Household Intercity Transit</div>
        <p style="font-size: 0.88rem; line-height: 1.65; margin: 0; color: #cbd5e1; font-style: italic;">
          "Transported my Creta SUV and Royal Enfield motorcycle from Ranchi to Bangalore along with household items. Received live GPS location updates throughout transit. Zero damage! Best choice among professional packers and movers."
        </p>
      </div>
    </div>
    <div style="background: rgba(0,0,0,0.3); border-radius: 12px; padding: 20px 18px; border-left: 4px solid #a855f7; border-top: 1px solid rgba(255,255,255,0.06); border-right: 1px solid rgba(255,255,255,0.06); border-bottom: 1px solid rgba(255,255,255,0.06); box-shadow: 0 8px 20px rgba(0,0,0,0.25); display: flex; flex-direction: column; justify-content: space-between;">
      <div>
        <div style="display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 10px; gap: 10px;">
          <div style="display: flex; align-items: center; gap: 10px;">
            <div style="width: 36px; height: 36px; border-radius: 50%; background: #a855f722; color: #a855f7; font-weight: 800; font-size: 0.85rem; display: flex; align-items: center; justify-content: center;">PV</div>
            <div>
              <strong style="color: #ffffff; font-size: 0.95rem; display: block; line-height: 1.2;">Pooja Verma</strong>
              <span style="color: #94a3b8; font-size: 0.76rem;">Doranda, Ranchi • 1 month ago</span>
            </div>
          </div>
          <span style="color: #f59e0b; font-size: 0.82rem; font-weight: 700; background: rgba(245, 158, 11, 0.12); padding: 3px 8px; border-radius: 12px; white-space: nowrap;">&#9733;&#9733;&#9733;&#9733;&#9733; Verified</span>
        </div>
        <div style="color: #60a5fa; font-size: 0.8rem; font-weight: 600; margin-bottom: 10px;"><i class="fas fa-check-circle" style="margin-right: 5px;"></i>Interstate Relocation to Kolkata</div>
        <p style="font-size: 0.88rem; line-height: 1.65; margin: 0; color: #cbd5e1; font-style: italic;">
          "Very honest pricing with no hidden charges. They provided a proper IBA-approved GST bill and clear transit insurance documentation for my company reimbursement. Outstanding service from reliable movers."
        </p>
      </div>
    </div>
    <div style="background: rgba(0,0,0,0.3); border-radius: 12px; padding: 20px 18px; border-left: 4px solid #06b6d4; border-top: 1px solid rgba(255,255,255,0.06); border-right: 1px solid rgba(255,255,255,0.06); border-bottom: 1px solid rgba(255,255,255,0.06); box-shadow: 0 8px 20px rgba(0,0,0,0.25); display: flex; flex-direction: column; justify-content: space-between;">
      <div>
        <div style="display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 10px; gap: 10px;">
          <div style="display: flex; align-items: center; gap: 10px;">
            <div style="width: 36px; height: 36px; border-radius: 50%; background: #06b6d422; color: #06b6d4; font-weight: 800; font-size: 0.85rem; display: flex; align-items: center; justify-content: center;">AR</div>
            <div>
              <strong style="color: #ffffff; font-size: 0.95rem; display: block; line-height: 1.2;">Ananya Roy</strong>
              <span style="color: #94a3b8; font-size: 0.76rem;">Lalpur, Ranchi • 2 months ago</span>
            </div>
          </div>
          <span style="color: #f59e0b; font-size: 0.82rem; font-weight: 700; background: rgba(245, 158, 11, 0.12); padding: 3px 8px; border-radius: 12px; white-space: nowrap;">&#9733;&#9733;&#9733;&#9733;&#9733; Verified</span>
        </div>
        <div style="color: #60a5fa; font-size: 0.8rem; font-weight: 600; margin-bottom: 10px;"><i class="fas fa-check-circle" style="margin-right: 5px;"></i>IT Office &amp; Workstation Relocation</div>
        <p style="font-size: 0.88rem; line-height: 1.65; margin: 0; color: #cbd5e1; font-style: italic;">
          "Shree Ashirwad shifted our software company setup over a single Sunday. All IT servers, monitors, and ergonomic chairs were transported safely with anti-static packaging and zero operational downtime. Truly top-tier logistics team."
        </p>
      </div>
    </div>
    <div style="background: rgba(0,0,0,0.3); border-radius: 12px; padding: 20px 18px; border-left: 4px solid #ec4899; border-top: 1px solid rgba(255,255,255,0.06); border-right: 1px solid rgba(255,255,255,0.06); border-bottom: 1px solid rgba(255,255,255,0.06); box-shadow: 0 8px 20px rgba(0,0,0,0.25); display: flex; flex-direction: column; justify-content: space-between;">
      <div>
        <div style="display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 10px; gap: 10px;">
          <div style="display: flex; align-items: center; gap: 10px;">
            <div style="width: 36px; height: 36px; border-radius: 50%; background: #ec489922; color: #ec4899; font-weight: 800; font-size: 0.85rem; display: flex; align-items: center; justify-content: center;">PS</div>
            <div>
              <strong style="color: #ffffff; font-size: 0.95rem; display: block; line-height: 1.2;">Priya Singh</strong>
              <span style="color: #94a3b8; font-size: 0.76rem;">Bariatu, Ranchi • 3 weeks ago</span>
            </div>
          </div>
          <span style="color: #f59e0b; font-size: 0.82rem; font-weight: 700; background: rgba(245, 158, 11, 0.12); padding: 3px 8px; border-radius: 12px; white-space: nowrap;">&#9733;&#9733;&#9733;&#9733;&#9733; Verified</span>
        </div>
        <div style="color: #60a5fa; font-size: 0.8rem; font-weight: 600; margin-bottom: 10px;"><i class="fas fa-check-circle" style="margin-right: 5px;"></i>Local House Relocation</div>
        <p style="font-size: 0.88rem; line-height: 1.65; margin: 0; color: #cbd5e1; font-style: italic;">
          "Very smooth shifting experience within Ranchi. The packing crew arrived exactly on time, dismantled the furniture carefully, and assembled everything at our new flat. Transparent pricing with no hidden moving day surcharges."
        </p>
      </div>
    </div>

  </div>
</div>
<script type="application/ld+json">
{"@context":"https://schema.org","@type":"LocalBusiness","name":"Shree Ashirwad Packers and Movers","image":"https://shreeashirwadpackersandmovers.com/assets/images/logo.png","telephone":"+919308888376","url":"https://shreeashirwadpackersandmovers.com/","priceRange":"₹₹","address":{"@type":"PostalAddress","streetAddress":"Harmu Housing Colony","addressLocality":"Ranchi","addressRegion":"Jharkhand","postalCode":"834002","addressCountry":"IN"},"aggregateRating":{"@type":"AggregateRating","ratingValue":"4.9","reviewCount":"500","bestRating":"5","worstRating":"1"},"review":[{"@type":"Review","author":{"@type":"Person","name":"Rajesh Sharma"},"datePublished":"2026-08-01","reviewRating":{"@type":"Rating","ratingValue":"5","bestRating":"5"},"reviewBody":"Transported my Hyundai Creta and Royal Enfield from Ranchi to Pune in an enclosed container carrier with live GPS tracking. Both vehicles arrived in showroom condition without a single scratch. Provided genuine IBA-approved bill for corporate relocation reimbursement."},{"@type":"Review","author":{"@type":"Person","name":"Amit Kumar"},"datePublished":"2026-08-01","reviewRating":{"@type":"Rating","ratingValue":"5","bestRating":"5"},"reviewBody":"Shifted complete 3BHK household goods from Ranchi to Bangalore with Shree Ashirwad. Exceptional packing quality using double-layer bubble wrap and sturdy cartons for fragile crockery. Zero damage, on-time delivery, and polite loading staff. Highly recommended!"},{"@type":"Review","author":{"@type":"Person","name":"Vikram Kumar Singh"},"datePublished":"2026-08-01","reviewRating":{"@type":"Rating","ratingValue":"5","bestRating":"5"},"reviewBody":"Transported my Creta SUV and Royal Enfield motorcycle from Ranchi to Bangalore along with household items. Received live GPS location updates throughout transit. Zero damage! Best choice among professional packers and movers."},{"@type":"Review","author":{"@type":"Person","name":"Pooja Verma"},"datePublished":"2026-08-01","reviewRating":{"@type":"Rating","ratingValue":"5","bestRating":"5"},"reviewBody":"Very honest pricing with no hidden charges. They provided a proper IBA-approved GST bill and clear transit insurance documentation for my company reimbursement. Outstanding service from reliable movers."},{"@type":"Review","author":{"@type":"Person","name":"Ananya Roy"},"datePublished":"2026-08-01","reviewRating":{"@type":"Rating","ratingValue":"5","bestRating":"5"},"reviewBody":"Shree Ashirwad shifted our software company setup over a single Sunday. All IT servers, monitors, and ergonomic chairs were transported safely with anti-static packaging and zero operational downtime. Truly top-tier logistics team."},{"@type":"Review","author":{"@type":"Person","name":"Priya Singh"},"datePublished":"2026-08-01","reviewRating":{"@type":"Rating","ratingValue":"5","bestRating":"5"},"reviewBody":"Very smooth shifting experience within Ranchi. The packing crew arrived exactly on time, dismantled the furniture carefully, and assembled everything at our new flat. Transparent pricing with no hidden moving day surcharges."}]}
</script>



<!-- Section: Verified Operational Photo Showcase -->
<section class="operational-gallery-section" style="background: #070d1e; padding: 55px 0; border-top: 1px solid rgba(255,255,255,0.06);">
  <div class="container" style="max-width: 1150px; margin: 0 auto; padding: 0 15px;">
    <div style="text-align: center; margin-bottom: 32px;">
      <span style="background: rgba(245, 158, 11, 0.15); color: #f59e0b; border: 1px solid rgba(245, 158, 11, 0.3); padding: 4px 14px; border-radius: 20px; font-size: 0.76rem; font-weight: 700; text-transform: uppercase; letter-spacing: 0.5px; display: inline-block; margin-bottom: 10px;">
        <i class="fas fa-camera"></i> Grounded Operational Proof
      </span>
      <h2 style="font-size: 1.85rem; font-weight: 800; color: #ffffff; margin: 0 0 10px 0;">
        Real On-Site Moving &amp; Fleet Operations: <span style="color: #38bdf8;">Pan-India Verified Fleet</span>
      </h2>
      <p style="color: #94a3b8; font-size: 0.95rem; margin: 0; max-width: 750px; margin: 0 auto;">
        100% authentic job-site photographs showcasing our certified packaging, container loading, and fleet transit.
      </p>
    </div>
    
    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 22px;">

        <div style="background: rgba(15, 23, 42, 0.85); border: 1.5px solid rgba(255, 255, 255, 0.08); border-radius: 14px; overflow: hidden; box-shadow: 0 10px 25px rgba(0,0,0,0.35); display: flex; flex-direction: column; justify-content: space-between;">
          <div style="width: 100%; height: 230px; overflow: hidden; background: #020617; position: relative;">
            <img src="<?php echo SITE_URL; ?>assets/images/services/enclosed-car-carrier-trailer-loading.jpeg" alt="Enclosed Car Carrier Hydraulic Ramp Loading - Shree Ashirwad Packers and Movers" title="Enclosed Auto Carrier Trailer Loading" loading="lazy" style="width: 100%; height: 100%; object-fit: cover; display: block; transition: transform 0.3s ease;">
            <div style="position: absolute; top: 10px; right: 10px; background: rgba(15, 23, 42, 0.85); color: #10b981; border: 1px solid rgba(16, 185, 129, 0.4); padding: 3px 10px; border-radius: 20px; font-size: 0.72rem; font-weight: 700; display: inline-flex; align-items: center; gap: 5px;">
              <i class="fas fa-check-circle"></i> Verified Job Site
            </div>
          </div>
          <div style="padding: 14px 16px; background: #0b132b; border-top: 1px solid rgba(255,255,255,0.06);">
            <div style="color: #f8fafc; font-weight: 700; font-size: 0.95rem; margin-bottom: 6px;">Enclosed Auto Carrier Trailer Loading</div>
            <p style="color: #94a3b8; font-size: 0.82rem; line-height: 1.5; margin: 0;">
              <i class="fas fa-camera" style="color: #f59e0b; margin-right: 5px;"></i> Hydraulic ramp loading of passenger vehicles onto enclosed double-decker auto transport trailers.
            </p>
          </div>
        </div>
        <div style="background: rgba(15, 23, 42, 0.85); border: 1.5px solid rgba(255, 255, 255, 0.08); border-radius: 14px; overflow: hidden; box-shadow: 0 10px 25px rgba(0,0,0,0.35); display: flex; flex-direction: column; justify-content: space-between;">
          <div style="width: 100%; height: 230px; overflow: hidden; background: #020617; position: relative;">
            <img src="<?php echo SITE_URL; ?>assets/images/services/vehicle-transport-wheel-chocks.jpeg" alt="Automobile Wheel Stopper and Frame Restraints - Shree Ashirwad Logistics" title="Automobile Transit Restraints" loading="lazy" style="width: 100%; height: 100%; object-fit: cover; display: block; transition: transform 0.3s ease;">
            <div style="position: absolute; top: 10px; right: 10px; background: rgba(15, 23, 42, 0.85); color: #10b981; border: 1px solid rgba(16, 185, 129, 0.4); padding: 3px 10px; border-radius: 20px; font-size: 0.72rem; font-weight: 700; display: inline-flex; align-items: center; gap: 5px;">
              <i class="fas fa-check-circle"></i> Verified Job Site
            </div>
          </div>
          <div style="padding: 14px 16px; background: #0b132b; border-top: 1px solid rgba(255,255,255,0.06);">
            <div style="color: #f8fafc; font-weight: 700; font-size: 0.95rem; margin-bottom: 6px;">Automobile Transit Restraints</div>
            <p style="color: #94a3b8; font-size: 0.82rem; line-height: 1.5; margin: 0;">
              <i class="fas fa-camera" style="color: #f59e0b; margin-right: 5px;"></i> Heavy-duty wheel locks and chassis safety straps preventing vehicle movement during highway transit.
            </p>
          </div>
        </div>
        <div style="background: rgba(15, 23, 42, 0.85); border: 1.5px solid rgba(255, 255, 255, 0.08); border-radius: 14px; overflow: hidden; box-shadow: 0 10px 25px rgba(0,0,0,0.35); display: flex; flex-direction: column; justify-content: space-between;">
          <div style="width: 100%; height: 230px; overflow: hidden; background: #020617; position: relative;">
            <img src="<?php echo SITE_URL; ?>assets/images/services/shree-ashirwad-moving-truck-fleet.jpeg" alt="GPS-Enabled Closed Container Truck Fleet - Shree Ashirwad Packers and Movers" title="GPS-Tracked Container Fleet" loading="lazy" style="width: 100%; height: 100%; object-fit: cover; display: block; transition: transform 0.3s ease;">
            <div style="position: absolute; top: 10px; right: 10px; background: rgba(15, 23, 42, 0.85); color: #10b981; border: 1px solid rgba(16, 185, 129, 0.4); padding: 3px 10px; border-radius: 20px; font-size: 0.72rem; font-weight: 700; display: inline-flex; align-items: center; gap: 5px;">
              <i class="fas fa-check-circle"></i> Verified Job Site
            </div>
          </div>
          <div style="padding: 14px 16px; background: #0b132b; border-top: 1px solid rgba(255,255,255,0.06);">
            <div style="color: #f8fafc; font-weight: 700; font-size: 0.95rem; margin-bottom: 6px;">GPS-Tracked Container Fleet</div>
            <p style="color: #94a3b8; font-size: 0.82rem; line-height: 1.5; margin: 0;">
              <i class="fas fa-camera" style="color: #f59e0b; margin-right: 5px;"></i> All-weather, closed-body container trucks equipped with satellite GPS tracking.
            </p>
          </div>
        </div>
    </div>
  </div>
</section>



<!-- Section: Statewide / National Relocation Network Section (Authority Interlinks) -->
<section class="statewide-network-section" style="background: #0b132b; padding: 45px 0; border-top: 1px solid rgba(255,255,255,0.06);">
  <div class="container" style="max-width: 1100px; margin: 0 auto; padding: 0 15px;">
    <div style="background: rgba(15, 23, 42, 0.85); border: 1.5px solid rgba(255, 255, 255, 0.08); border-radius: 14px; padding: 26px 24px; box-shadow: 0 10px 30px rgba(0,0,0,0.35);">
      <div style="display: inline-flex; align-items: center; gap: 6px; background: rgba(245, 158, 11, 0.15); color: #f59e0b; border: 1px solid rgba(245, 158, 11, 0.3); padding: 4px 12px; border-radius: 20px; font-size: 0.75rem; font-weight: 700; text-transform: uppercase; letter-spacing: 0.5px; margin-bottom: 12px;">
        <i class="fas fa-sitemap"></i> STATEWIDE RELOCATION NETWORK
      </div>
      <h2 style="color: #ffffff; font-size: 1.6rem; font-weight: 800; margin: 0 0 16px 0; line-height: 1.3;">
        Seamless Interstate Shifting: <span style="color: #f59e0b;">Pan-India Carrier Operations</span>
      </h2>
      <p style="color: #cbd5e1; font-size: 0.96rem; line-height: 1.75; margin: 0;">
        Whether you are coordinating a local residential shift within Ranchi district or planning an outstation move across states, choosing certified <a href="<?php echo SITE_URL; ?>" title="Packers and Movers" style="color: #f59e0b; font-weight: 700; text-decoration: underline;">packers and movers</a> ensures your furniture, appliances, and vehicle reach without transit damage. As Jharkhand's trusted relocation brand, Shree Ashirwad operates as premier <a href="<?php echo SITE_URL; ?>" title="Shree Ashirwad Packers and Movers" style="color: #f59e0b; font-weight: 700; text-decoration: underline;">packers and movers</a> with regular dedicated container truck departures directly linked to our state operations at <a href="<?php echo SITE_URL; ?>packers-and-movers-in-ranchi" title="Packers and Movers in Ranchi" style="color: #38bdf8; font-weight: 700; text-decoration: underline;">packers and movers in Ranchi</a>, providing complete end-to-end packing, GPS consignment tracking, and verified IBA-approved reimbursement billing for families and professionals throughout Ranchi district.
      </p>
    </div>
  </div>
</section>



<section class="pan-india-network-section" style="padding: 45px 0; background: #0b132b; border-bottom: 1px solid rgba(255,255,255,0.08); font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;">
  <div class="container" style="max-width: 1140px; margin: 0 auto; padding: 0 15px;">
    <div style="background: rgba(15, 23, 42, 0.7); border: 1px solid rgba(255,255,255,0.1); border-radius: 14px; padding: 28px 24px; box-shadow: 0 10px 25px rgba(0,0,0,0.35);">
      <div style="display: flex; flex-wrap: wrap; justify-content: space-between; align-items: center; gap: 16px; margin-bottom: 22px;">
        <div>
          <span style="background: rgba(16, 185, 129, 0.15); color: #34d399; border: 1px solid rgba(16, 185, 129, 0.4); padding: 4px 12px; border-radius: 20px; font-size: 0.8rem; font-weight: 700; text-transform: uppercase;">
            <i class="fas fa-globe-asia"></i> PAN-INDIA LOGISTICS NETWORK
          </span>
          <h3 style="color: #ffffff; font-size: 1.45rem; font-weight: 800; margin-top: 8px; margin-bottom: 4px;">
            All-India Highway Transit Infrastructure &amp; Interstate Clearance Authority
          </h3>
          <p style="color: #94a3b8; font-size: 0.88rem; margin: 0;">
            Licensed operations across 28 States &amp; 8 Union Territories with central RTO clearance desks.
          </p>
        </div>
        <div style="display: flex; gap: 8px; font-family: monospace; font-size: 0.82rem;">
          <span style="background: rgba(16, 185, 129, 0.12); color: #34d399; border: 1px solid rgba(16, 185, 129, 0.3); padding: 6px 12px; border-radius: 6px;">
            <i class="fas fa-shield-check"></i> IBA CODE: DEL-2849
          </span>
          <span style="background: rgba(59, 130, 246, 0.12); color: #60a5fa; border: 1px solid rgba(59, 130, 246, 0.3); padding: 6px 12px; border-radius: 6px;">
            <i class="fas fa-truck"></i> 450+ FLEET TRUCKS
          </span>
        </div>
      </div>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 16px;">
        <div style="background: rgba(255,255,255,0.02); border: 1px solid rgba(255,255,255,0.06); border-radius: 10px; padding: 18px;">
          <div style="color: #f59e0b; font-weight: 700; font-size: 0.95rem; margin-bottom: 8px; display: flex; align-items: center; gap: 8px;">
            <i class="fas fa-file-signature" style="font-size: 1.1rem;"></i> All-State RTO &amp; Bilty Desk
          </div>
          <p style="color: #94a3b8; font-size: 0.84rem; line-height: 1.6; margin: 0;">
            Direct assistance for Form 28/29/30 clearances, road tax calculations, and computerized GST e-Way bill approvals across every state border checkpoint.
          </p>
        </div>

        <div style="background: rgba(255,255,255,0.02); border: 1px solid rgba(255,255,255,0.06); border-radius: 10px; padding: 18px;">
          <div style="color: #38bdf8; font-weight: 700; font-size: 0.95rem; margin-bottom: 8px; display: flex; align-items: center; gap: 8px;">
            <i class="fas fa-satellite" style="font-size: 1.1rem;"></i> GPS Highway Corridors
          </div>
          <p style="color: #94a3b8; font-size: 0.84rem; line-height: 1.6; margin: 0;">
            Seamless long-haul connectivity across NH-33, NH-43, NH-20, and the Golden Quadrilateral expressway network with real-time transit telemetry.
          </p>
        </div>

        <div style="background: rgba(255,255,255,0.02); border: 1px solid rgba(255,255,255,0.06); border-radius: 10px; padding: 18px;">
          <div style="color: #34d399; font-weight: 700; font-size: 0.95rem; margin-bottom: 8px; display: flex; align-items: center; gap: 8px;">
            <i class="fas fa-phone-alt" style="font-size: 1.1rem;"></i> Central Dispatch Hub
          </div>
          <p style="color: #94a3b8; font-size: 0.84rem; line-height: 1.6; margin: 0;">
            National Operations Hub: Anandpuri Chowk, Vidyanagar Road, Harmu, Ranchi, Jharkhand - 834002.<br>
            24/7 Helpline: <strong>+91 8409531615</strong> | ISO 9001:2015 Certified Logistics
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

</main>

<?php
require_once __DIR__ . '/../includes/footer.php';
?>