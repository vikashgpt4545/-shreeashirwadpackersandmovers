<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "Ultimate Household Shifting Checklist for Chatra Relocation";
$page_desc = "Complete step-by-step household shifting checklist for residents in Chatra. Plan your move 30 days ahead with expert packing and moving tips.";
$page_keywords = "household shifting checklist chatra, house moving checklist chatra, home relocation guide chatra, shifting planner chatra, packing tips chatra, moving preparation chatra, pre move checklist chatra, smooth shifting guide, stress free moving chatra, luggage packing list chatra, utility transfer checklist, moving day guide chatra, inventory list packing, home shifting schedule, relocation checklist chatra";

$page_city = "Chatra";

$faq_list = [
    [
        'q' => 'How many weeks prior to my Chatra move should I start planning?',
        'a' => 'We recommend starting your relocation planning 4 weeks (30 days) prior to your target moving date to allow ample time for decluttering, utility transfers, and booking verified packers.'
    ],
    [
        'q' => 'What is the most important task on a pre-move checklist?',
        'a' => 'Decluttering and sorting your household articles is the single most effective task. Getting rid of unwanted items reduces packing volume, lowers moving costs, and saves time.'
    ],
    [
        'q' => 'How should I organize essential documents and jewelry during the move?',
        'a' => 'Personal identification documents, property deeds, bank passbooks, jewelry, and cash should never be loaded into transport trucks. Carry them personally in a secure hand carry bag.'
    ],
    [
        'q' => 'What utility services should I transfer or disconnect before moving in Chatra?',
        'a' => 'Arrange for electricity meter disconnects, LPG gas cylinder transfers, broadband internet disconnections, cable TV transfers, and postal address updates 5 days before moving.'
    ],
    [
        'q' => 'How can I prepare my refrigerator for packing on moving day?',
        'a' => 'Defrost, clean, and dry your refrigerator completely at least 24 hours prior to loading. Secure internal shelves and leave doors slightly open to prevent mold and odor buildup.'
    ],
    [
        'q' => 'What items should be packed in an "First Night Survival Kit"?',
        'a' => 'Pack toiletries, basic medicines, change of clothing, bedsheets, phone chargers, snacks, bottled water, and basic tools in a clearly labeled box marked "Open First".'
    ],
    [
        'q' => 'How do I prepare washing machines and water purifiers for shifting?',
        'a' => 'Drain all water from washing machine hoses, secure the internal drum with transport bolts, and get water purifiers unmounted and drained by a qualified technician.'
    ],
    [
        'q' => 'Should I pack items myself or let professional packers handle everything?',
        'a' => 'Let professional packing crews handle furniture, electronics, and fragile items using 7-layer protective materials. You should only pack personal clothing and confidential files.'
    ],
    [
        'q' => 'How do I create an inventory packing list during loading in Chatra?',
        'a' => 'Our move supervisor assigns numbered box tags and creates a detailed article-by-article master inventory list. Cross-check each item number as boxes are loaded into the truck.'
    ],
    [
        'q' => 'What measures should I take on moving day to avoid confusion?',
        'a' => 'Designate one family member as point of contact, ensure clear pathways for loaders, double-check all empty rooms/drawers, and lock all doors before leaving.'
    ],
    [
        'q' => 'How do I safely pack indoor plants and garden pots for short moves?',
        'a' => 'Prune plants 2 days ahead, water lightly the day before, and pack individual pots in open-top cardboard boxes cushioned with newspaper.'
    ],
    [
        'q' => 'What is the best way to handle pets during house shifting in Chatra?',
        'a' => 'Keep pets in a quiet, closed room or at a friend\'s house on packing day to prevent stress or escape while doors are open.'
    ],
    [
        'q' => 'How can I label packed boxes for easy unpacking at my new Chatra home?',
        'a' => 'Label each box on top and sides with the target room name (e.g., "Master Bedroom", "Kitchen Fragile") and a brief description of contents.'
    ],
    [
        'q' => 'What should I check before signing the final delivery document?',
        'a' => 'Cross-verify all box numbers against your master inventory list, inspect major electronics and glass items for damage, and confirm truck seal integrity.'
    ],
    [
        'q' => 'How do I handle LPG gas connection transfer during relocation in Chatra?',
        'a' => 'Surrender your gas cylinder to your local Chatra distributor against a Transfer Certificate (SV document), which can be re-issued at your new city distributor.'
    ],
    [
        'q' => 'What pre-move preparations are needed for parking transport trucks in Chatra?',
        'a' => 'Inform your apartment building society or local Chatra municipality ward authorities to reserve parking space for the moving container truck near your gate.'
    ],
    [
        'q' => 'How do I protect my house flooring and walls during heavy loading?',
        'a' => 'Our loading crew lays down heavy floor protective sheets, cardboard runners, and edge guards across doorways and stair rails.'
    ],
    [
        'q' => 'Can I request unpacking and room placement assistance at my new location?',
        'a' => 'Yes, our full-service relocation packages include complete unboxing, furniture reassembly, and positioning of heavy articles in designated rooms.'
    ],
    [
        'q' => 'What should I do if an item is found missing or damaged during delivery?',
        'a' => 'Note the discrepancy immediately on the Lorry Receipt (LR) delivery copy, take clear photos, and notify our customer service desk within 24 hours to initiate insurance claim processing.'
    ],
    [
        'q' => 'Why is Shree Ashirwad Packers the best choice for organized shifting in Chatra?',
        'a' => 'We provide structured shifting checklists, 7-layer safety packaging, digital inventory tracking, 100% IBA GST bill compliance, and dedicated move coordinators.'
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
          <li class="breadcrumb-item active" aria-current="page" style="color: #1e293b; font-weight: 600;"><span style="margin: 0 4px;">/</span> Shifting Checklist</li>
        </ol>
      </nav>
    </div>
  </div>

  <!-- Hero Section -->
  <section class="hero-section" style="background: linear-gradient(135deg, #0f172a 0%, #1e3a8a 100%); color: #ffffff; padding: 60px 0; position: relative;" id="hero-checklist">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 15px; display: flex; flex-wrap: wrap; align-items: center; justify-content: space-between; gap: 40px;">
      
      <div class="hero-content" style="flex: 1 1 500px;">
        <span style="display: inline-block; background: rgba(37, 99, 235, 0.25); color: #60a5fa; border: 1px solid rgba(96, 165, 250, 0.3); padding: 6px 16px; border-radius: 50px; font-size: 0.85rem; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 20px;">
          Master Relocation Planner 2026
        </span>
        <h1 style="font-size: 2.6rem; font-weight: 800; line-height: 1.2; margin-bottom: 20px; color: #ffffff;">
          Household Shifting Checklist &amp; Guide for Chatra
        </h1>
        <p style="font-size: 1.15rem; line-height: 1.8; color: #94a3b8; margin-bottom: 30px;">
          Planning a house move in Chatra? Follow our step-by-step 30-day relocation timeline to eliminate moving stress, organize inventory, coordinate utility transfers, and ensure a 100% smooth, damage-free moving experience with Shree Ashirwad Packers and Movers.
        </p>
        
        <div class="hero-cta-buttons" style="display: flex; flex-wrap: wrap; gap: 15px; margin-bottom: 30px;">
          <a href="tel:+918409531615" class="btn-call" style="background: #2563eb; color: #ffffff; padding: 14px 28px; border-radius: 8px; font-weight: 700; text-decoration: none; display: inline-flex; align-items: center; gap: 10px; font-size: 1rem; box-shadow: 0 10px 25px rgba(37, 99, 235, 0.4);" id="hero-call-btn">
            <i class="fa-solid fa-phone"></i> Call +91 8409531615
          </a>
          <a href="https://api.whatsapp.com/send?phone=918409531615&text=Hello%20Shree%20Ashirwad%20Packers,%20send%20me%20the%20shifting%20checklist." class="btn-whatsapp" style="background: #22c55e; color: #ffffff; padding: 14px 28px; border-radius: 8px; font-weight: 700; text-decoration: none; display: inline-flex; align-items: center; gap: 10px; font-size: 1rem; box-shadow: 0 10px 25px rgba(34, 197, 94, 0.4);" id="hero-wa-btn">
            <i class="fa-brands fa-whatsapp"></i> Get PDF Checklist
          </a>
        </div>
      </div>

      <!-- Quick Form -->
      <div class="hero-form-card" style="flex: 0 1 420px; background: #ffffff; border-radius: 12px; padding: 30px; color: #1e293b; box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);" id="checklist-form-box">
        <h3 style="font-size: 1.4rem; font-weight: 700; margin-bottom: 8px; color: #0f172a;">Plan Your Move Today</h3>
        <p style="font-size: 0.88rem; color: #64748b; margin-bottom: 20px;">Book your shifting date with professional experts!</p>
        
        <form onsubmit="sendHeroWhatsAppLead(event, this);" id="checklist-lead-form">
          <div style="margin-bottom: 14px;">
            <input type="text" name="name" placeholder="Your Name" required style="width: 100%; padding: 12px 14px; border: 1px solid #cbd5e1; border-radius: 6px; font-size: 0.95rem; box-sizing: border-box;">
          </div>
          <div style="margin-bottom: 14px;">
            <input type="tel" name="phone" placeholder="Mobile Number" required style="width: 100%; padding: 12px 14px; border: 1px solid #cbd5e1; border-radius: 6px; font-size: 0.95rem; box-sizing: border-box;">
          </div>
          <div style="margin-bottom: 14px;">
            <input type="text" name="move_from" placeholder="Pickup Area in Chatra" required style="width: 100%; padding: 12px 14px; border: 1px solid #cbd5e1; border-radius: 6px; font-size: 0.95rem; box-sizing: border-box;">
          </div>
          <div style="margin-bottom: 14px;">
            <input type="text" name="move_to" placeholder="Destination City" required style="width: 100%; padding: 12px 14px; border: 1px solid #cbd5e1; border-radius: 6px; font-size: 0.95rem; box-sizing: border-box;">
          </div>
          <div style="margin-bottom: 18px;">
            <textarea name="message" placeholder="Details of move (Target date, house size)" rows="3" style="width: 100%; padding: 12px 14px; border: 1px solid #cbd5e1; border-radius: 6px; font-size: 0.95rem; box-sizing: border-box;"></textarea>
          </div>
          <button type="submit" style="width: 100%; background: #2563eb; color: #ffffff; border: none; padding: 14px; border-radius: 6px; font-size: 1rem; font-weight: 700; cursor: pointer;" id="submit-plan-btn">
            Lock Shifting Date <i class="fa-solid fa-arrow-right" style="margin-left: 6px;"></i>
          </button>
        </form>
      </div>

    </div>
  </section>

  <!-- Step-by-Step Checklist Content Guide (1800+ words) -->
  
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
        Technical Relocation Logistics & Service Standards in Household Shifting Checklist Chatra
      </h2>

      <p style="font-size: 1.05rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 20px;">
        Managing household shifting, office relocation, and vehicle shipping in Household Shifting Checklist Chatra requires experienced logistics coordination. Shree Ashirwad Packers and Movers delivers end-to-end relocation services across Household Shifting Checklist Chatra with dedicated container vehicles, 7-layer protective packaging, and 100% claimable IBA GST invoices.
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
        Estimated Shifting Charges & Tariff Breakdown: Household Shifting Checklist Chatra
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



  <section class="content-guide-section" style="background: #ffffff; padding: 60px 0;" id="detailed-checklist-guide">
    <div class="container" style="max-width: 1100px; margin: 0 auto; padding: 0 15px; color: #334155; line-height: 1.8;">
      
      <h2 style="font-size: 2.2rem; font-weight: 800; color: #0f172a; margin-bottom: 25px;">30-Day Step-by-Step Household Shifting Timeline</h2>

      <p style="font-size: 1.05rem; margin-bottom: 20px;">
        Relocating a household involves dozens of interconnected tasks, from sorting wardrobes and disconnecting electronic appliances to securing official IBA-compliant GST bills and organizing transit insurance. To ensure nothing is overlooked, follow our structured 30-day relocation checklist designed specifically for Chatra residents:
      </p>

      <div style="background: #f8fafc; border-left: 4px solid #2563eb; padding: 25px; border-radius: 0 8px 8px 0; margin-bottom: 35px;">
        <h3 style="font-size: 1.5rem; font-weight: 700; color: #0f172a; margin-bottom: 12px;">Phase 1: 30 to 20 Days Before Moving (Planning &amp; Survey)</h3>
        <ul style="padding-left: 20px; margin: 0;">
          <li style="margin-bottom: 10px;"><strong>Declutter Unwanted Articles:</strong> Inspect room-by-room, sell or donate unused furniture, old clothing, and surplus electronics to reduce packing volume.</li>
          <li style="margin-bottom: 10px;"><strong>Book Pre-Move Inspection:</strong> Contact Shree Ashirwad Packers to schedule a free physical or video home survey in Chatra.</li>
          <li style="margin-bottom: 10px;"><strong>Organize Important Documents:</strong> Gather Aadhar cards, property papers, insurance files, school certificates, and medical records in a portable file binder.</li>
          <li style="margin-bottom: 10px;"><strong>Check Employer Relocation Norms:</strong> If claiming shifting expenses, confirm IBA billing guidelines with your HR or accounts department.</li>
        </ul>
      </div>

      <div style="background: #f8fafc; border-left: 4px solid #2563eb; padding: 25px; border-radius: 0 8px 8px 0; margin-bottom: 35px;">
        <h3 style="font-size: 1.5rem; font-weight: 700; color: #0f172a; margin-bottom: 12px;">Phase 2: 15 to 7 Days Before Moving (Logistics &amp; Utility Prep)</h3>
        <ul style="padding-left: 20px; margin: 0;">
          <li style="margin-bottom: 10px;"><strong>Address Update &amp; Utility Transfers:</strong> Submit transfer applications for broadband internet, LPG gas connections, DTH TV, and bank postal addresses.</li>
          <li style="margin-bottom: 10px;"><strong>Service Household Appliances:</strong> Arrange technician visits for AC uninstallation, water purifier dismantling, and washing machine drum lock securing.</li>
          <li style="margin-bottom: 10px;"><strong>Lock Moving Slot &amp; Written Quote:</strong> Finalize moving terms, confirm container truck availability, and receive signed written quotation.</li>
          <li style="margin-bottom: 10px;"><strong>Notify Apartment Management:</strong> Secure elevator usage permissions and gate entry passes for packing crews on moving day.</li>
        </ul>
      </div>

      <div style="background: #f8fafc; border-left: 4px solid #2563eb; padding: 25px; border-radius: 0 8px 8px 0; margin-bottom: 35px;">
        <h3 style="font-size: 1.5rem; font-weight: 700; color: #0f172a; margin-bottom: 12px;">Phase 3: 2 to 1 Days Before Moving (Final Preparation)</h3>
        <ul style="padding-left: 20px; margin: 0;">
          <li style="margin-bottom: 10px;"><strong>Defrost Refrigerator:</strong> Clean and dry fridge compartments at least 24 hours prior to loading to prevent water leaks inside the truck.</li>
          <li style="margin-bottom: 10px;"><strong>Pack Personal Valuables:</strong> Keep gold jewelry, cash, laptops, camera gear, and vital medicine boxes separate to carry personally.</li>
          <li style="margin-bottom: 10px;"><strong>Prepare "Open First" Box:</strong> Pack essential toiletries, towels, nightwear, basic utensils, tea/coffee mix, and phone chargers.</li>
          <li style="margin-bottom: 10px;"><strong>Confirm Crew Arrival Time:</strong> Reconfirm morning arrival time with your dedicated Chatra move supervisor.</li>
        </ul>
      </div>

      <div style="background: #f8fafc; border-left: 4px solid #2563eb; padding: 25px; border-radius: 0 8px 8px 0; margin-bottom: 35px;">
        <h3 style="font-size: 1.5rem; font-weight: 700; color: #0f172a; margin-bottom: 12px;">Phase 4: Moving Day Execution &amp; Unloading</h3>
        <ul style="padding-left: 20px; margin: 0;">
          <li style="margin-bottom: 10px;"><strong>Supervise 7-Layer Packing:</strong> Monitor the application of bubble wrap, corrugated sheets, stretch film, and wooden crating for TV/glass.</li>
          <li style="margin-bottom: 10px;"><strong>Master Inventory List Verification:</strong> Cross-check box tags as items are loaded into the container truck and sign the LR copy.</li>
          <li style="margin-bottom: 10px;"><strong>Final Property Inspection:</strong> Inspect all cupboards, drawers, balconies, and switchboards before locking your Chatra residence.</li>
          <li style="margin-bottom: 10px;"><strong>Unloading &amp; Reassembly:</strong> Verify box counts upon delivery at your new home, inspect major items, and oversee furniture reassembly.</li>
        </ul>
      </div>

    </div>
  </section>

  <!-- FAQs Section -->
  <section class="faq-section" style="background: #f8fafc; padding: 60px 0; border-top: 1px solid #e2e8f0;" id="faqs">
    <div class="container" style="max-width: 1000px; margin: 0 auto; padding: 0 15px;">
      <div style="text-align: center; margin-bottom: 45px;">
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #0f172a; margin-bottom: 10px;">Frequently Asked Questions</h2>
        <p style="color: #64748b; font-size: 1rem;">Solutions for organized household relocation in Chatra.</p>
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

  <!-- Bottom CTA Banner -->
  <section class="cta-banner" style="background: linear-gradient(135deg, #1e3a8a 0%, #0f172a 100%); color: #ffffff; padding: 50px 0; text-align: center;" id="bottom-cta">
    <div class="container" style="max-width: 900px; margin: 0 auto; padding: 0 15px;">
      <h2 style="font-size: 2.2rem; font-weight: 800; margin-bottom: 15px; color: #ffffff;">Start Your Organized Move in Chatra Today!</h2>
      <p style="font-size: 1.1rem; color: #cbd5e1; margin-bottom: 30px; line-height: 1.7;">
        Call Shree Ashirwad Packers and Movers for a hassle-free, perfectly planned household relocation!
      </p>
      <div style="display: flex; justify-content: center; gap: 15px; flex-wrap: wrap;">
        <a href="tel:+918409531615" style="background: #2563eb; color: #ffffff; padding: 14px 30px; border-radius: 8px; font-weight: 700; text-decoration: none; display: inline-flex; align-items: center; gap: 10px; font-size: 1.05rem;" id="cta-call-btn">
          <i class="fa-solid fa-phone"></i> Call +91 8409531615
        </a>
        <a href="https://api.whatsapp.com/send?phone=918409531615&text=Hello%20Shree%20Ashirwad%20Packers,%20send%20me%20the%20shifting%20checklist." style="background: #22c55e; color: #ffffff; padding: 14px 30px; border-radius: 8px; font-weight: 700; text-decoration: none; display: inline-flex; align-items: center; gap: 10px; font-size: 1.05rem;" id="cta-wa-btn">
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
