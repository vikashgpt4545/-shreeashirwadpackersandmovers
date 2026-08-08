<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "Complete Packers and Movers Dumka Cost & Tariff Guide";
$page_desc = "Detailed cost breakdown for household shifting, vehicle transport, and warehousing in Dumka. Learn transparent 1BHK, 2BHK, 3BHK rate estimates.";
$page_keywords = "packers movers dumka cost guide, shifting charges dumka, house relocation cost dumka, 1bhk shifting rate dumka, 2bhk moving cost dumka, 3bhk shifting charges dumka, bike transport rate dumka, car carrier cost dumka, local moving charges dumka, intercity tariff dumka, IBA billing cost dumka, transparent moving estimate dumka, packing material rate dumka, shifting price list dumka, relocation budget dumka";

$page_city = "Dumka";
$page_locality = "District-wide Dumka";

$faq_list = [
    [
        'q' => 'What factors determine the cost of packers and movers in Dumka?',
        'a' => 'Shifting costs in Dumka depend on cargo volume (number of rooms), quality of packing materials selected, transport distance, truck size (14ft, 17ft, 19ft container), floor height and availability of elevators, labor crew requirement, and transit insurance.'
    ],
    [
        'q' => 'What is the local 1BHK household shifting charge in Dumka?',
        'a' => 'Local 1BHK household shifting in Dumka typically ranges from ₹3,000 to ₹5,500 including standard 3-layer packaging, loading, 11ft covered truck transport, unloading, and basic setup.'
    ],
    [
        'q' => 'How much does it cost to shift a 2BHK home within Dumka?',
        'a' => 'Shifting a 2BHK home locally within Dumka ranges from ₹5,500 to ₹9,500 depending on total furniture volume, floor elevation, and premium 5-layer protective wrapping requirements.'
    ],
    [
        'q' => 'What are the charges for 3BHK home relocation in Dumka?',
        'a' => 'A 3BHK home relocation in Dumka costs between ₹9,500 and ₹15,000 for local intra-city moves. Intercity moves to cities like Ranchi or Patna vary based on highway mileage and toll charges.'
    ],
    [
        'q' => 'How are intercity moving charges calculated from Dumka?',
        'a' => 'Intercity moving tariffs from Dumka are calculated using base freight cost per kilometer, dedicated vs shared container vehicle type, toll tax surcharges, professional packing materials, and 3% transit insurance coverage.'
    ],
    [
        'q' => 'What is the cost of shipping a motorcycle or scooter from Dumka?',
        'a' => 'Two-wheeler bike transport from Dumka costs between ₹1,800 and ₹3,500 depending on bike displacement (100cc to 350cc+), distance to destination, and multi-layer protective packaging.'
    ],
    [
        'q' => 'How much does car transport cost from Dumka to other cities?',
        'a' => 'Car transport from Dumka in covered hydraulic car carriers ranges from ₹4,500 to ₹8,500 for regional routes (e.g., Dumka to Ranchi or Patna) and up to ₹14,000+ for long-distance metros.'
    ],
    [
        'q' => 'Are there extra charges for loading goods in buildings without elevators in Dumka?',
        'a' => 'For multistory buildings without elevator access, a small floor-carry charge (approx. ₹300-₹500 per floor) may apply to cover additional labor exertion.'
    ],
    [
        'q' => 'Do your shifting quotes in Dumka include GST and toll charges?',
        'a' => 'Yes, our written quotation provides an itemized breakdown including 18% GST for official reimbursement billing, toll fees, packing material fees, and labor charges with zero hidden surprises.'
    ],
    [
        'q' => 'How can I lower my household shifting costs in Dumka?',
        'a' => 'You can reduce shifting expenses by decluttering unwanted items before moving, scheduling your move on weekdays instead of peak weekends, and booking 3 to 5 days in advance.'
    ],
    [
        'q' => 'What are the rates for short-term warehouse storage in Dumka?',
        'a' => 'Household goods warehouse storage in Dumka starts from ₹1,500 to ₹3,500 per month depending on storage volume, security requirements, and duration.'
    ],
    [
        'q' => 'Is optional furniture disassembly and carpentry reassembly charged extra in Dumka?',
        'a' => 'Basic furniture unbolting and reassembly of double beds and wardrobes is included in our standard shifting quotation. Complex custom woodwork may incur a nominal technician fee.'
    ],
    [
        'q' => 'What is the cost of custom wooden crating for Smart TVs in Dumka?',
        'a' => 'Custom wooden crating for large LED TVs, glass tabletops, and delicate artwork ranges between ₹600 and ₹1,200 per unit.'
    ],
    [
        'q' => 'How much does transit insurance cost for long-distance moves from Dumka?',
        'a' => 'Transit insurance is calculated at 3% of the declared value of your household consignment, giving 100% financial protection against road hazards.'
    ],
    [
        'q' => 'What is the price difference between part-load and full container truck shifting in Dumka?',
        'a' => 'Part-load (shared truck) shifting is 40-50% cheaper for small luggage or single furniture items, while full dedicated containers are recommended for complete house shifting with zero transit delay.'
    ],
    [
        'q' => 'Are packing materials billed separately or included in the Dumka quote?',
        'a' => 'All packing materials—air-bubble wrap, 5-ply corrugated boxes, stretch wrap, tape, and foam edge guards—are included in our transparent binding quote.'
    ],
    [
        'q' => 'Do you charge booking fees in advance for shifting in Dumka?',
        'a' => 'We require a nominal token booking deposit (10-20%) upon quote confirmation to reserve your truck and packing crew, with balance payable upon dispatch or delivery.'
    ],
    [
        'q' => 'How do IBA-approved shifting bills help government employees save money in Dumka?',
        'a' => 'IBA-compliant bills are 100% reimbursable through government, bank, and PSU employer transfer allowances, effectively reimbursing your shifting cost.'
    ],
    [
        'q' => 'Will I receive a formal written binding quote before moving day in Dumka?',
        'a' => 'Yes, our supervisor conducts a physical or digital survey and issues a signed, written quotation that guarantees fixed rates with zero price hikes.'
    ],
    [
        'q' => 'How can I request a free cost estimate for my move in Dumka?',
        'a' => 'Call our hotline at +91 8409531615 or submit your moving details on our official website form for an instant price estimate.'
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
          <li class="breadcrumb-item active" aria-current="page" style="color: #1e293b; font-weight: 600;"><span style="margin: 0 4px;">/</span> Cost &amp; Tariff Guide</li>
        </ol>
      </nav>
    </div>
  </div>

  <!-- Hero Section -->
  <section class="hero-section" style="background: linear-gradient(135deg, #0f172a 0%, #1e3a8a 100%); color: #ffffff; padding: 60px 0; position: relative;" id="hero-cost-guide">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 15px; display: flex; flex-wrap: wrap; align-items: center; justify-content: space-between; gap: 40px;">
      
      <div class="hero-content" style="flex: 1 1 500px;">
        <span style="display: inline-block; background: rgba(37, 99, 235, 0.25); color: #60a5fa; border: 1px solid rgba(96, 165, 250, 0.3); padding: 6px 16px; border-radius: 50px; font-size: 0.85rem; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 20px;">
          Transparent Relocation Pricing Guide
        </span>
        <h1 style="font-size: 2.6rem; font-weight: 800; line-height: 1.2; margin-bottom: 20px; color: #ffffff;">
          Packers and Movers Dumka Cost &amp; Rate Breakdown Guide
        </h1>
        <p style="font-size: 1.15rem; line-height: 1.8; color: #94a3b8; margin-bottom: 30px;">
          Want to know exact house shifting charges, vehicle shipping rates, and warehousing costs in Dumka? Read our complete, transparent tariff guide to plan your moving budget without hidden fees.
        </p>
        
        <div class="hero-cta-buttons" style="display: flex; flex-wrap: wrap; gap: 15px; margin-bottom: 30px;">
          <a href="tel:+918409531615" title="Call +91 8409531615" class="btn-call" style="background: #2563eb; color: #ffffff; padding: 14px 28px; border-radius: 8px; font-weight: 700; text-decoration: none; display: inline-flex; align-items: center; gap: 10px; font-size: 1rem; box-shadow: 0 10px 25px rgba(37, 99, 235, 0.4);" id="hero-call-btn">
            <i class="fa-solid fa-phone"></i> Call +91 8409531615
          </a>
          <a href="https://api.whatsapp.com/send?phone=918409531615&text=Hello%20Shree%20Ashirwad%20Packers,%20I%20need%20a%20cost%20estimate%20in%20Dumka." title="WhatsApp Estimate" class="btn-whatsapp" style="background: #22c55e; color: #ffffff; padding: 14px 28px; border-radius: 8px; font-weight: 700; text-decoration: none; display: inline-flex; align-items: center; gap: 10px; font-size: 1rem; box-shadow: 0 10px 25px rgba(34, 197, 94, 0.4);" id="hero-wa-btn">
            <i class="fa-brands fa-whatsapp"></i> WhatsApp Estimate
          </a>
        </div>
      </div>

      <!-- Quick Lead Form -->
      <div class="hero-form-card" style="flex: 0 1 420px; background: #ffffff; border-radius: 12px; padding: 30px; color: #1e293b; box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);" id="cost-form-box">
        <h3 style="font-size: 1.4rem; font-weight: 700; margin-bottom: 8px; color: #0f172a;">Calculate Moving Cost</h3>
        <p style="font-size: 0.88rem; color: #64748b; margin-bottom: 20px;">Instant transparent rate calculation!</p>
        
        <form onsubmit="sendHeroWhatsAppLead(event, this);" id="cost-lead-form">
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
            <textarea name="message" placeholder="Details (e.g., 1BHK, 2BHK, Bike, Car)" rows="3" style="width: 100%; padding: 12px 14px; border: 1px solid #cbd5e1; border-radius: 6px; font-size: 0.95rem; box-sizing: border-box;"></textarea>
          </div>
          <button type="submit" style="width: 100%; background: #2563eb; color: #ffffff; border: none; padding: 14px; border-radius: 6px; font-size: 1rem; font-weight: 700; cursor: pointer;" id="submit-cost-btn">
            Get Instant Rate Quote <i class="fa-solid fa-arrow-right" style="margin-left: 6px;"></i>
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
      
      <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px; display: inline-block; margin-bottom: 10px;">Cost Dynamics &amp; Factors</span>
      <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin: 0 0 20px 0;">
        Understanding Relocation Cost Drivers in Dumka
      </h2>

      <p style="font-size: 1.05rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 20px;">
        Calculating household shifting costs involves evaluating several operational variables. At Shree Ashirwad Packers and Movers, we ensure every cost item—from packing material selection to truck fuel and highway tolls—is itemized transparently in your official quotation before work begins.
      </p>

      <p style="font-size: 1.05rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 30px;">
        Whether you are moving locally within Dumka town sectors or transferring intercity across NH-114A and SH-17, our fixed rate policy protects you from unexpected price hikes or hidden labor surcharges on moving day.
      </p>

      <!-- 6 Cards Grid (3x2 Layout) -->
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 24px; margin: 35px 0;">
        
        <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 24px; box-shadow: 0 10px 25px rgba(0,0,0,0.3);">
          <div style="background: rgba(245, 158, 11, 0.15); width: 46px; height: 46px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.3rem; color: #f59e0b; margin-bottom: 14px;">📦</div>
          <h3 style="font-size: 1.15rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">Packing Material Grade</h3>
          <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.6; margin: 0;">
            Choice between standard 3-layer protection and premium 7-layer wrapping with custom TV crates directly influences material cost allocation.
          </p>
        </div>

        <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 24px; box-shadow: 0 10px 25px rgba(0,0,0,0.3);">
          <div style="background: rgba(245, 158, 11, 0.15); width: 46px; height: 46px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.3rem; color: #f59e0b; margin-bottom: 14px;">🚚</div>
          <h3 style="font-size: 1.15rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">Container Vehicle Type</h3>
          <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.6; margin: 0;">
            Selecting 14ft, 17ft, 19ft, or 22ft enclosed container trucks determines base vehicle freight rates based on cubic feet requirements.
          </p>
        </div>

        <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 24px; box-shadow: 0 10px 25px rgba(0,0,0,0.3);">
          <div style="background: rgba(245, 158, 11, 0.15); width: 46px; height: 46px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.3rem; color: #f59e0b; margin-bottom: 14px;">🏢</div>
          <h3 style="font-size: 1.15rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">Floor Elevation &amp; Elevator Access</h3>
          <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.6; margin: 0;">
            Ground floor pickups are standard; high-rise buildings without operational elevators require minimal stair-carry labor surcharges.
          </p>
        </div>

        <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 24px; box-shadow: 0 10px 25px rgba(0,0,0,0.3);">
          <div style="background: rgba(245, 158, 11, 0.15); width: 46px; height: 46px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.3rem; color: #f59e0b; margin-bottom: 14px;">🛣️</div>
          <h3 style="font-size: 1.15rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">Highway Mileage &amp; Toll Surcharges</h3>
          <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.6; margin: 0;">
            Intercity highway mileage along state corridors and national toll taxes are calculated transparently into intercity tariffs.
          </p>
        </div>

        <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 24px; box-shadow: 0 10px 25px rgba(0,0,0,0.3);">
          <div style="background: rgba(245, 158, 11, 0.15); width: 46px; height: 46px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.3rem; color: #f59e0b; margin-bottom: 14px;">🛡️</div>
          <h3 style="font-size: 1.15rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">Transit Insurance (3% Declared Value)</h3>
          <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.6; margin: 0;">
            Full transit insurance coverage calculated at 3% of total goods valuation protects against road risk with official policy documentation.
          </p>
        </div>

        <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 24px; box-shadow: 0 10px 25px rgba(0,0,0,0.3);">
          <div style="background: rgba(245, 158, 11, 0.15); width: 46px; height: 46px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.3rem; color: #f59e0b; margin-bottom: 14px;">👨‍🔧</div>
          <h3 style="font-size: 1.15rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">Specialized Technician &amp; Carpentry Services</h3>
          <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.6; margin: 0;">
            Standard furniture unbolting is included; specialized AC dismantling or custom carpentry reassembly is priced transparently.
          </p>
        </div>

      </div>

    </div>
  </section>

  <!-- Section 4: 4-Protocol Zero-Damage Execution System -->
  <section style="padding: 70px 0; background: #070d1e; color: #ffffff; border-top: 1px solid rgba(245, 158, 11, 0.15);" id="safety-protocols-section">
    <div class="container" style="max-width: 1100px; margin: 0 auto; padding: 0 15px;">
      
      <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px; display: inline-block; margin-bottom: 10px;">Pricing Safeguards</span>
      <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin: 0 0 20px 0;">
        Our 4-Protocol Pricing Integrity Safeguards
      </h2>
      <p style="font-size: 1.05rem; color: #cbd5e1; line-height: 1.7; margin-bottom: 30px;">
        To protect clients from moving industry scams and unexpected demands on loading day, Shree Ashirwad Packers and Movers enforces 4 mandatory pricing safeguards:
      </p>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 24px;">
        
        <div style="background: #101c40; padding: 26px; border-radius: 12px; border: 1.5px solid rgba(245, 158, 11, 0.25);">
          <div style="font-size: 1.3rem; font-weight: 800; color: #f59e0b; margin-bottom: 12px;">Safeguard 1: Pre-Move Binding Survey Quote</div>
          <p style="font-size: 0.95rem; color: #cbd5e1; line-height: 1.7; margin: 0;">
            Our supervisor inspects inventory in-person or via video call and provides a written, binding quotation. Once accepted, rates remain 100% fixed without unexpected surcharges.
          </p>
        </div>

        <div style="background: #101c40; padding: 26px; border-radius: 12px; border: 1.5px solid rgba(245, 158, 11, 0.25);">
          <div style="font-size: 1.3rem; font-weight: 800; color: #f59e0b; margin-bottom: 12px;">Safeguard 2: Itemized Cost Breakdown</div>
          <p style="font-size: 0.95rem; color: #cbd5e1; line-height: 1.7; margin: 0;">
            Every quote provides separate line items for packing materials, labor charges, vehicle freight, toll taxes, and GST, allowing complete financial clarity.
          </p>
        </div>

        <div style="background: #101c40; padding: 26px; border-radius: 12px; border: 1.5px solid rgba(245, 158, 11, 0.25);">
          <div style="font-size: 1.3rem; font-weight: 800; color: #f59e0b; margin-bottom: 12px;">Safeguard 3: 100% Reimbursable IBA Bill Guarantee</div>
          <p style="font-size: 0.95rem; color: #cbd5e1; line-height: 1.7; margin: 0;">
            For government, bank, and corporate employees, our official 18% GST invoices and LR documents strictly adhere to IBA formats to guarantee 100% claim approval.
          </p>
        </div>

        <div style="background: #101c40; padding: 26px; border-radius: 12px; border: 1.5px solid rgba(245, 158, 11, 0.25);">
          <div style="font-size: 1.3rem; font-weight: 800; color: #f59e0b; margin-bottom: 12px;">Safeguard 4: Zero Hidden Demands Policy</div>
          <p style="font-size: 0.95rem; color: #cbd5e1; line-height: 1.7; margin: 0;">
            We guarantee our moving crew will never ask for extra tips, unquoted loading fees, or unexpected gate pass charges during transit or delivery.
          </p>
        </div>

      </div>

    </div>
  </section>

  <!-- Section 5: Transparent Pricing Matrix Table -->
  <section style="padding: 70px 0; background: #0b132b; color: #ffffff;" id="pricing-matrix-section">
    <div class="container" style="max-width: 1100px; margin: 0 auto; padding: 0 15px;">
      
      <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px; display: inline-block; margin-bottom: 10px;">Master Price Matrix</span>
      <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin: 0 0 20px 0;">
        Master Tariff Matrix: Dumka Shifting &amp; Transport Services
      </h2>
      <p style="font-size: 1.05rem; color: #cbd5e1; line-height: 1.7; margin-bottom: 25px;">
        Review our detailed baseline tariff table for household shifting, vehicle transportation, and warehousing services in Dumka:
      </p>

      <div style="overflow-x: auto; margin-bottom: 30px;">
        <table style="width: 100%; border-collapse: collapse; background: #172a54; border-radius: 12px; overflow: hidden; border: 1px solid rgba(245, 158, 11, 0.3);">
          <thead>
            <tr style="background: linear-gradient(135deg, #1c2541 0%, #0b132b 100%); color: #f59e0b; text-align: left; font-size: 0.95rem;">
              <th style="padding: 16px 20px; border-bottom: 2px solid rgba(245, 158, 11, 0.4);">Service Category / Inventory Size</th>
              <th style="padding: 16px 20px; border-bottom: 2px solid rgba(245, 158, 11, 0.4);">Packaging Standard</th>
              <th style="padding: 16px 20px; border-bottom: 2px solid rgba(245, 158, 11, 0.4);">Vehicle / Logistics Mode</th>
              <th style="padding: 16px 20px; border-bottom: 2px solid rgba(245, 158, 11, 0.4);">Local Rate (₹)</th>
              <th style="padding: 16px 20px; border-bottom: 2px solid rgba(245, 158, 11, 0.4);">Intercity Base Rate (₹)</th>
            </tr>
          </thead>
          <tbody style="color: #cbd5e1; font-size: 0.9rem; line-height: 1.6;">
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.08);">
              <td style="padding: 14px 20px; font-weight: 700; color: #ffffff;">1 BHK Small Flat / Quarter</td>
              <td style="padding: 14px 20px;">Standard 3-Layer Wrap</td>
              <td style="padding: 14px 20px;">11 ft Covered Truck</td>
              <td style="padding: 14px 20px; font-weight: 700; color: #f59e0b;">₹3,000 - ₹5,500</td>
              <td style="padding: 14px 20px; font-weight: 700; color: #f59e0b;">₹8,500 - ₹14,000</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.08); background: rgba(255,255,255,0.02);">
              <td style="padding: 14px 20px; font-weight: 700; color: #ffffff;">2 BHK Standard Residence</td>
              <td style="padding: 14px 20px;">Premium 5-Layer Protection</td>
              <td style="padding: 14px 20px;">14 ft Enclosed Container</td>
              <td style="padding: 14px 20px; font-weight: 700; color: #f59e0b;">₹5,500 - ₹9,500</td>
              <td style="padding: 14px 20px; font-weight: 700; color: #f59e0b;">₹12,500 - ₹22,000</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.08);">
              <td style="padding: 14px 20px; font-weight: 700; color: #ffffff;">3 BHK Large Family Home</td>
              <td style="padding: 14px 20px;">7-Layer Wrap + TV Crate</td>
              <td style="padding: 14px 20px;">17/19 ft Dedicated Container</td>
              <td style="padding: 14px 20px; font-weight: 700; color: #f59e0b;">₹9,500 - ₹15,000</td>
              <td style="padding: 14px 20px; font-weight: 700; color: #f59e0b;">₹18,000 - ₹32,000</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.08); background: rgba(255,255,255,0.02);">
              <td style="padding: 14px 20px; font-weight: 700; color: #ffffff;">4 BHK Independent Villa / Duplex</td>
              <td style="padding: 14px 20px;">Full Heavy Wrap &amp; Crating</td>
              <td style="padding: 14px 20px;">22 ft High-Cube Container</td>
              <td style="padding: 14px 20px; font-weight: 700; color: #f59e0b;">₹15,000 - ₹24,000</td>
              <td style="padding: 14px 20px; font-weight: 700; color: #f59e0b;">₹28,000 - ₹45,000</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.08);">
              <td style="padding: 14px 20px; font-weight: 700; color: #ffffff;">Bike Transport (100cc-350cc+)</td>
              <td style="padding: 14px 20px;">Bubble + Corrugated + Paddy</td>
              <td style="padding: 14px 20px;">Enclosed Bike Carrier</td>
              <td style="padding: 14px 20px; font-weight: 700; color: #f59e0b;">₹1,500 - ₹2,500</td>
              <td style="padding: 14px 20px; font-weight: 700; color: #f59e0b;">₹2,500 - ₹5,500</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.08); background: rgba(255,255,255,0.02);">
              <td style="padding: 14px 20px; font-weight: 700; color: #ffffff;">Car Transport (Sedan / SUV)</td>
              <td style="padding: 14px 20px;">Car Cover &amp; Wheel Locks</td>
              <td style="padding: 14px 20px;">Hydraulic Covered Trailer</td>
              <td style="padding: 14px 20px; font-weight: 700; color: #f59e0b;">₹3,500 - ₹5,500</td>
              <td style="padding: 14px 20px; font-weight: 700; color: #f59e0b;">₹6,500 - ₹16,000</td>
            </tr>
            <tr style="background: rgba(255,255,255,0.04);">
              <td style="padding: 14px 20px; font-weight: 700; color: #ffffff;">Warehouse Storage (Per Month)</td>
              <td style="padding: 14px 20px;">Moisture-Proof Storage Wrap</td>
              <td style="padding: 14px 20px;">CCTV Monitored Facility</td>
              <td style="padding: 14px 20px; font-weight: 700; color: #f59e0b;">₹1,500 - ₹3,500</td>
              <td style="padding: 14px 20px; font-weight: 700; color: #f59e0b;">N/A</td>
            </tr>
          </tbody>
        </table>
      </div>

    </div>
  </section>

  <!-- Section 6: 5-Stage Relocation Workflow -->
  <section style="padding: 70px 0; background: #070d1e; color: #ffffff; border-top: 1px solid rgba(245, 158, 11, 0.15);" id="workflow-section">
    <div class="container" style="max-width: 1100px; margin: 0 auto; padding: 0 15px;">
      
      <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px; display: inline-block; margin-bottom: 10px;">Cost Assessment Workflow</span>
      <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin: 0 0 20px 0;">
        5-Stage Quote Estimation &amp; Execution Workflow
      </h2>
      <p style="font-size: 1.05rem; color: #cbd5e1; line-height: 1.7; margin-bottom: 35px;">
        Follow our simple 5-stage survey and quotation workflow to secure guaranteed shifting rates in Dumka:
      </p>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 24px;">
        
        <div style="background: linear-gradient(145deg, #101c40 0%, #09122b 100%); padding: 26px; border-radius: 12px; border: 1.5px solid rgba(245, 158, 11, 0.25); position: relative;">
          <span style="font-size: 2rem; font-weight: 900; color: rgba(245, 158, 11, 0.3); position: absolute; right: 20px; top: 15px;">01</span>
          <h3 style="font-size: 1.2rem; font-weight: 700; color: #f59e0b; margin-bottom: 12px; padding-right: 40px;">Stage 1: Initial Inquiry &amp; Free Survey Request</h3>
          <p style="font-size: 0.93rem; color: #cbd5e1; line-height: 1.7; margin: 0;">
            Contact us via phone (+91 8409531615) or online WhatsApp form to request a free physical or digital pre-move home survey.
          </p>
        </div>

        <div style="background: linear-gradient(145deg, #101c40 0%, #09122b 100%); padding: 26px; border-radius: 12px; border: 1.5px solid rgba(245, 158, 11, 0.25); position: relative;">
          <span style="font-size: 2rem; font-weight: 900; color: rgba(245, 158, 11, 0.3); position: absolute; right: 20px; top: 15px;">02</span>
          <h3 style="font-size: 1.2rem; font-weight: 700; color: #f59e0b; margin-bottom: 12px; padding-right: 40px;">Stage 2: Inventory Audit &amp; Binding Written Quote</h3>
          <p style="font-size: 0.93rem; color: #cbd5e1; line-height: 1.7; margin: 0;">
            Our move coordinator evaluates item volume, packaging materials, container size, and floor elevation, issuing a signed fixed-rate estimate.
          </p>
        </div>

        <div style="background: linear-gradient(145deg, #101c40 0%, #09122b 100%); padding: 26px; border-radius: 12px; border: 1.5px solid rgba(245, 158, 11, 0.25); position: relative;">
          <span style="font-size: 2rem; font-weight: 900; color: rgba(245, 158, 11, 0.3); position: absolute; right: 20px; top: 15px;">03</span>
          <h3 style="font-size: 1.2rem; font-weight: 700; color: #f59e0b; margin-bottom: 12px; padding-right: 40px;">Stage 3: Token Booking &amp; Slot Reservation</h3>
          <p style="font-size: 0.93rem; color: #cbd5e1; line-height: 1.7; margin: 0;">
            Pay a small token advance to lock in your moving date, reserved container vehicle, and dedicated packing team.
          </p>
        </div>

        <div style="background: linear-gradient(145deg, #101c40 0%, #09122b 100%); padding: 26px; border-radius: 12px; border: 1.5px solid rgba(245, 158, 11, 0.25); position: relative;">
          <span style="font-size: 2rem; font-weight: 900; color: rgba(245, 158, 11, 0.3); position: absolute; right: 20px; top: 15px;">04</span>
          <h3 style="font-size: 1.2rem; font-weight: 700; color: #f59e0b; margin-bottom: 12px; padding-right: 40px;">Stage 4: Execution &amp; Mileage GPS Tracking</h3>
          <p style="font-size: 0.93rem; color: #cbd5e1; line-height: 1.7; margin: 0;">
            Our packing crew executes multi-layer wrapping, container anchorage, and highway transit under live satellite GPS tracking.
          </p>
        </div>

        <div style="background: linear-gradient(145deg, #101c40 0%, #09122b 100%); padding: 26px; border-radius: 12px; border: 1.5px solid rgba(245, 158, 11, 0.25); position: relative;">
          <span style="font-size: 2rem; font-weight: 900; color: rgba(245, 158, 11, 0.3); position: absolute; right: 20px; top: 15px;">05</span>
          <h3 style="font-size: 1.2rem; font-weight: 700; color: #f59e0b; margin-bottom: 12px; padding-right: 40px;">Stage 5: Final Delivery &amp; IBA Claim Documentation</h3>
          <p style="font-size: 0.93rem; color: #cbd5e1; line-height: 1.7; margin: 0;">
            After unloading and furniture reassembly at your new destination, receive your complete 100% claimable IBA GST invoice and LR documentation.
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
        100% Claimable IBA Relocation Billing Documents: Dumka
      </h2>
      <p style="font-size: 1.05rem; color: #cbd5e1; line-height: 1.7; margin-bottom: 35px;">
        Every official quote includes standard 100% claimable relocation documentation for government, bank, and PSU employer reimbursement claims:
      </p>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 24px;">
        
        <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); padding: 26px; border-radius: 12px; border: 1.5px solid rgba(245, 158, 11, 0.3);">
          <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 14px;">
            <div style="background: rgba(245, 158, 11, 0.2); width: 42px; height: 42px; border-radius: 8px; display: flex; align-items: center; justify-content: center; color: #f59e0b; font-size: 1.2rem; font-weight: 800;">📄</div>
            <h3 style="font-size: 1.15rem; font-weight: 700; color: #ffffff; margin: 0;">Original GST Tax Invoice</h3>
          </div>
          <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.6; margin: 0;">
            Official 18% GST tax invoice with valid 15-digit GSTIN, SAC code (996511), and clear cost breakdowns for official claims.
          </p>
        </div>

        <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); padding: 26px; border-radius: 12px; border: 1.5px solid rgba(245, 158, 11, 0.3);">
          <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 14px;">
            <div style="background: rgba(245, 158, 11, 0.2); width: 42px; height: 42px; border-radius: 8px; display: flex; align-items: center; justify-content: center; color: #f59e0b; font-size: 1.2rem; font-weight: 800;">🚚</div>
            <h3 style="font-size: 1.15rem; font-weight: 700; color: #ffffff; margin: 0;">Consignment Lorry Receipt (LR)</h3>
          </div>
          <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.6; margin: 0;">
            Official stamped transport Lorry Receipt recording vehicle registration number, route details, and weight certificates.
          </p>
        </div>

        <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); padding: 26px; border-radius: 12px; border: 1.5px solid rgba(245, 158, 11, 0.3);">
          <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 14px;">
            <div style="background: rgba(245, 158, 11, 0.2); width: 42px; height: 42px; border-radius: 8px; display: flex; align-items: center; justify-content: center; color: #f59e0b; font-size: 1.2rem; font-weight: 800;">📋</div>
            <h3 style="font-size: 1.15rem; font-weight: 700; color: #ffffff; margin: 0;">Itemized Inventory Packing Sheet</h3>
          </div>
          <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.6; margin: 0;">
            Box-by-box itemized inventory list declaring all packed furniture, appliances, and personal effects signed by supervisor.
          </p>
        </div>

        <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); padding: 26px; border-radius: 12px; border: 1.5px solid rgba(245, 158, 11, 0.3);">
          <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 14px;">
            <div style="background: rgba(245, 158, 11, 0.2); width: 42px; height: 42px; border-radius: 8px; display: flex; align-items: center; justify-content: center; color: #f59e0b; font-size: 1.2rem; font-weight: 800;">💳</div>
            <h3 style="font-size: 1.15rem; font-weight: 700; color: #ffffff; margin: 0;">Stamped Payment Money Receipt</h3>
          </div>
          <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.6; margin: 0;">
            Stamped financial money receipt specifying advance booking payment and final bill settlement confirmation.
          </p>
        </div>

        <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); padding: 26px; border-radius: 12px; border: 1.5px solid rgba(245, 158, 11, 0.3);">
          <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 14px;">
            <div style="background: rgba(245, 158, 11, 0.2); width: 42px; height: 42px; border-radius: 8px; display: flex; align-items: center; justify-content: center; color: #f59e0b; font-size: 1.2rem; font-weight: 800;">🛡️</div>
            <h3 style="font-size: 1.15rem; font-weight: 700; color: #ffffff; margin: 0;">Valid Transit Insurance Policy</h3>
          </div>
          <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.6; margin: 0;">
            Original 100% full-value transit insurance policy document protecting consignment against road damage or accidents.
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
        Explore More Dumka Shifting Guides &amp; Services
      </h2>
      <p style="font-size: 1.05rem; color: #cbd5e1; line-height: 1.7; margin-bottom: 35px;">
        Navigate through our dedicated Dumka relocation hub pages and specialized service guides:
      </p>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 20px;">
        
        <a href="<?php echo SITE_URL; ?>packers-and-movers-in-dumka" title="Packers and Movers in Dumka Main city hub relocation services &amp; booking" style="text-decoration: none; display: block; background: #101c40; padding: 20px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.25); transition: transform 0.2s;" id="link-dumka-main">
          <div style="font-size: 1.1rem; font-weight: 700; color: #f59e0b; margin-bottom: 6px;">Packers and Movers in Dumka</div>
          <div style="font-size: 0.88rem; color: #94a3b8;">Main city hub relocation services &amp; booking</div>
        </a>

        <a href="<?php echo SITE_URL; ?>how-to-choose-best-packers-and-movers-in-dumka" title="How to Choose Best Movers Expert selection guide &amp; verification checklist" style="text-decoration: none; display: block; background: #101c40; padding: 20px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.25); transition: transform 0.2s;" id="link-choose-movers">
          <div style="font-size: 1.1rem; font-weight: 700; color: #f59e0b; margin-bottom: 6px;">How to Choose Best Movers</div>
          <div style="font-size: 0.88rem; color: #94a3b8;">Expert selection guide &amp; verification checklist</div>
        </a>

        <a href="<?php echo SITE_URL; ?>household-shifting-checklist-dumka" title="Household Shifting Checklist Step-by-step 30-day pre-move planner" style="text-decoration: none; display: block; background: #101c40; padding: 20px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.25); transition: transform 0.2s;" id="link-shifting-checklist">
          <div style="font-size: 1.1rem; font-weight: 700; color: #f59e0b; margin-bottom: 6px;">Household Shifting Checklist</div>
          <div style="font-size: 0.88rem; color: #94a3b8;">Step-by-step 30-day pre-move planner</div>
        </a>

        <a href="<?php echo SITE_URL; ?>car-and-bike-transport-guide-dumka" title="Car &amp; Bike Transport Guide Safe vehicle shipping rates &amp; process" style="text-decoration: none; display: block; background: #101c40; padding: 20px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.25); transition: transform 0.2s;" id="link-vehicle-guide">
          <div style="font-size: 1.1rem; font-weight: 700; color: #f59e0b; margin-bottom: 6px;">Car &amp; Bike Transport Guide</div>
          <div style="font-size: 0.88rem; color: #94a3b8;">Safe vehicle shipping rates &amp; process</div>
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
  <section class="content-guide-section" style="background: #ffffff; padding: 60px 0;" id="detailed-cost-guide">
    <div class="container" style="max-width: 1100px; margin: 0 auto; padding: 0 15px; color: #334155; line-height: 1.8;">
      
      <h2 style="font-size: 2.2rem; font-weight: 800; color: #0f172a; margin-bottom: 25px;">
        Detailed Shifting Rate Structure &amp; Budgeting Guide for Dumka
      </h2>

      <p style="font-size: 1.05rem; margin-bottom: 20px;">
        Understanding how packers and movers calculate shifting charges in Dumka is essential for budgeting a smooth, stress-free move. Relocation charges are composed of direct operational inputs, including packaging materials, trained packing labor, enclosed container vehicle freight, transit insurance, and administrative documentation taxes.
      </p>

      <h3 style="font-size: 1.6rem; font-weight: 700; color: #1e293b; margin-top: 30px; margin-bottom: 15px;">
        1. Local Shifting Rates within Dumka Town Sectors
      </h3>
      <p style="margin-bottom: 20px;">
        For intra-city moves within Dumka (such as moving from Dudhani to Rasikpur, or Court Road to Sido Kanhu Murmu University area), charges are primarily governed by cargo volume and packing material quality. Standard 1BHK moves range from ₹3,000 to ₹5,500, while larger 3BHK homes range from ₹9,500 to ₹15,000. These local rates include full packing, loading, local pickup truck transport, unloading, and basic room setup.
      </p>

      <h3 style="font-size: 1.6rem; font-weight: 700; color: #1e293b; margin-top: 30px; margin-bottom: 15px;">
        2. Intercity Highway Relocation Tariffs from Dumka
      </h3>
      <p style="margin-bottom: 20px;">
        Intercity relocations connecting Dumka to state capitals like Ranchi, Patna, Kolkata, or Deoghar are priced based on container truck volume and highway mileage. We utilize dedicated weather-proof container vehicles (14ft to 22ft) to ensure goods travel directly without transshipment delays or mixing cargo with other clients.
      </p>

      <h3 style="font-size: 1.6rem; font-weight: 700; color: #1e293b; margin-top: 30px; margin-bottom: 15px;">
        3. Vehicle Transportation Tariff (Cars &amp; Two-Wheelers)
      </h3>
      <p style="margin-bottom: 20px;">
        Shipping motorcycles, scooters, or personal cars from Dumka involves specialized carrier logistics. Two-wheeler shipping rates range between ₹1,800 and ₹3,500 based on bike engine capacity and destination distance. Car shipping inside covered hydraulic car trailers ranges from ₹4,500 to ₹8,500 for regional routes.
      </p>

    </div>
  </section>

  <!-- Section 10: 20-FAQ Accordion -->
  <section class="faq-section" style="background: #f8fafc; padding: 60px 0; border-top: 1px solid #e2e8f0;" id="faqs">
    <div class="container" style="max-width: 1000px; margin: 0 auto; padding: 0 15px;">
      <div style="text-align: center; margin-bottom: 45px;">
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #0f172a; margin-bottom: 10px;">Frequently Asked Questions (FAQs)</h2>
        <p style="color: #64748b; font-size: 1rem;">Clear answers to common questions about shifting rates and tariffs in Dumka.</p>
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
      <h2 style="font-size: 2.2rem; font-weight: 800; margin-bottom: 15px; color: #ffffff;">Get Guaranteed Shifting Rates in Dumka Today!</h2>
      <p style="font-size: 1.1rem; color: #cbd5e1; margin-bottom: 30px; line-height: 1.7;">
        Call Shree Ashirwad Packers and Movers for transparent binding quotes, 7-layer packaging, and IBA GST bills!
      </p>
      <div style="display: flex; justify-content: center; gap: 15px; flex-wrap: wrap;">
        <a href="tel:+918409531615" title="Call +91 8409531615" style="background: #2563eb; color: #ffffff; padding: 14px 30px; border-radius: 8px; font-weight: 700; text-decoration: none; display: inline-flex; align-items: center; gap: 10px; font-size: 1.05rem;" id="cta-call-btn">
          <i class="fa-solid fa-phone"></i> Call +91 8409531615
        </a>
        <a href="https://api.whatsapp.com/send?phone=918409531615&text=Hello%20Shree%20Ashirwad%20Packers,%20I%20need%20a%20moving%20quote%20in%20Dumka." title="Chat on WhatsApp" style="background: #22c55e; color: #ffffff; padding: 14px 30px; border-radius: 8px; font-weight: 700; text-decoration: none; display: inline-flex; align-items: center; gap: 10px; font-size: 1.05rem;" id="cta-wa-btn">
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
