<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "IBA Approved Packers and Movers in Dumka | Bank Bills";
$page_desc = "Top IBA approved packers and movers in Dumka providing 100% claimable GST relocation bills, LR copy, money receipt, and inventory for bank/govt employee claims.";
$page_keywords = "iba approved packers and movers in dumka, iba certified movers dumka, bank transfer bills movers, government employee shifting dumka, claimable GST bill movers, transport clearance bill, IBA approved bill packers, bank employee relocation dumka, official bill moving company, IBA code movers dumka, genuine GST bill movers, PSU shifting bills dumka, government shifting allowance, certified relocation agency, ashrivad IBA movers";

$page_city = "Dumka";
$page_locality = "District-wide Dumka";

$faq_list = [
    [
        'q' => 'What is an IBA-approved packer and mover in Dumka?',
        'a' => 'An IBA (Indian Banks Association) approved packer and mover is a registered transport operator evaluated for financial stability, legal compliance, fleet ownership, and service quality. Bills issued by IBA-approved movers are official documents for employee transfer allowance reimbursement.'
    ],
    [
        'q' => 'Why do government and bank employees in Dumka require IBA-approved moving bills?',
        'a' => 'Public sector banks (SBI, PNB, BOB), central/state government departments, defense forces, and PSUs mandate IBA-compliant relocation bills (including 18% GST invoices, Consignment LR, itemized inventory, and payment receipts) to approve full transfer allowance claims.'
    ],
    [
        'q' => 'What documents are included in your IBA-approved claim bill packet in Dumka?',
        'a' => 'Our IBA claim packet includes 5 essential documents: 1. Original 18% TAX Invoice with GSTIN, 2. Stamped Consignment Lorry Receipt (LR), 3. Itemized Inventory Packing Sheet, 4. Official Money Payment Receipt, and 5. Transit Insurance Policy Certificate.'
    ],
    [
        'q' => 'Can SBI, PNB, and Bank of Baroda managers in Dumka claim 100% relocation allowance with your bills?',
        'a' => 'Yes, our bills and LR copies comply with all Indian Banks Association guidelines and are 100% accepted by SBI, PNB, Bank of Baroda, Canara Bank, and all nationalized bank audit departments.'
    ],
    [
        'q' => 'Do you provide IBA-approved moving bills for central government transfer claims in Dumka?',
        'a' => 'Yes, central government staff (railway personnel, defense officers, postal staff, income tax officers) can claim full Composite Transfer Grant (CTG) and luggage conveyance allowances using our official GST invoices.'
    ],
    [
        'q' => 'How can I verify the GST registration of your moving company in Dumka?',
        'a' => 'You can verify our active 15-digit GSTIN directly on the government GST portal (gst.gov.in). We print our active GST number on all quotation letters and official invoices.'
    ],
    [
        'q' => 'What is the SAC code used on IBA-approved moving invoices in Dumka?',
        'a' => 'The standard SAC code for goods transport and household packing/unpacking services listed on our GST tax invoices is SAC 996511 (Road Transport Services of Freight).'
    ],
    [
        'q' => 'Are your IBA moving bills valid for state government employees in Jharkhand?',
        'a' => 'Yes, Jharkhand state government employees transferred within or outside Dumka district can submit our GST invoices and LR copies to claim transfer travel allowances (TA/DA).'
    ],
    [
        'q' => 'What happens if my office audit department requests additional transport verification?',
        'a' => 'Our local Dumka office provides full verification support, including official written confirmation letters, bank account NOC certificates, and driver license details upon request.'
    ],
    [
        'q' => 'Do you charge extra for providing IBA-approved bills and GST documentation in Dumka?',
        'a' => 'No hidden fees are charged. Applicable 18% GST tax is transparently listed in your written quote and official invoice.'
    ],
    [
        'q' => 'Can I get IBA-approved vehicle transport bills for shipping my car or bike from Dumka?',
        'a' => 'Yes, we issue dedicated vehicle transport bills and LR copies specifying your vehicle registration number, chassis number, engine number, and carrier trailer details.'
    ],
    [
        'q' => 'How soon after moving day do I receive my IBA claim bill packet in Dumka?',
        'a' => 'Your complete stamped claim bill packet is handed over immediately upon loading or delivered digitally/physically within 24 hours of destination delivery.'
    ],
    [
        'q' => 'Why are unverified local brokers unable to provide IBA-compliant bills in Dumka?',
        'a' => 'Unverified brokers lack registered GSTINs, commercial transport licenses, and official IBA accreditation, issuing handwritten receipts that are rejected by corporate audit desks.'
    ],
    [
        'q' => 'What packing materials are used for IBA-standard household shifting in Dumka?',
        'a' => 'We use 7-layer protective packaging: air-bubble rolls, 5-ply corrugated cartons, foam corner guards, waterproof stretch film, and custom wooden crating for fragile electronics.'
    ],
    [
        'q' => 'Does IBA approval mean my goods are insured during transit from Dumka?',
        'a' => 'Yes, IBA standards require comprehensive transit insurance. We issue an official 100% full-value transit insurance policy document covering all highway risks.'
    ],
    [
        'q' => 'Where is your physical office located for IBA document verification in Dumka?',
        'a' => 'Our physical office in Dumka is located near Court Road and the Collectorate area, making it easy for government and bank personnel to visit and verify documents.'
    ],
    [
        'q' => 'Can university faculty at SKMU Dumka claim relocation allowances with your bills?',
        'a' => 'Yes, faculty members and administrative staff at Sido Kanhu Murmu University (SKMU) can submit our GST tax invoices for relocation reimbursement approval.'
    ],
    [
        'q' => 'What payment methods are acceptable for IBA-approved bill generation?',
        'a' => 'Payments made via company current bank account NEFT/RTGS, UPI, Google Pay, or cheque are fully documented on your official money receipt.'
    ],
    [
        'q' => 'Can I get a pre-move cost estimate letter on official letterhead for department advance approval?',
        'a' => 'Yes, we provide formal written pre-move quotation estimates on company letterhead required for requesting transfer advance funds from your employer.'
    ],
    [
        'q' => 'How do I book IBA-approved packers and movers in Dumka?',
        'a' => 'Call our IBA corporate shifting desk at +91 8409531615 or submit your transfer details online for instant consultation and document preparation.'
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
          <li class="breadcrumb-item active" aria-current="page" style="color: #1e293b; font-weight: 600;"><span style="margin: 0 4px;">/</span> IBA Approved Movers</li>
        </ol>
      </nav>
    </div>
  </div>

  <!-- Hero Section -->
  <section class="hero-section" style="background: linear-gradient(135deg, #0f172a 0%, #1e3a8a 100%); color: #ffffff; padding: 60px 0; position: relative;" id="hero-iba">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 15px; display: flex; flex-wrap: wrap; align-items: center; justify-content: space-between; gap: 40px;">
      
      <div class="hero-content" style="flex: 1 1 500px;">
        <span style="display: inline-block; background: rgba(37, 99, 235, 0.25); color: #60a5fa; border: 1px solid rgba(96, 165, 250, 0.3); padding: 6px 16px; border-radius: 50px; font-size: 0.85rem; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 20px;">
          100% Claimable Relocation Bills
        </span>
        <h1 style="font-size: 2.6rem; font-weight: 800; line-height: 1.2; margin-bottom: 20px; color: #ffffff;">
          IBA Approved Packers and Movers in Dumka
        </h1>
        <p style="font-size: 1.15rem; line-height: 1.8; color: #94a3b8; margin-bottom: 30px;">
          Are you a bank officer, government employee, or PSU staff transferring from Dumka? Get 100% claimable IBA-compliant relocation bills, 18% GST tax invoices, stamped LR copies, itemized inventory, and transit insurance.
        </p>
        
        <div class="hero-cta-buttons" style="display: flex; flex-wrap: wrap; gap: 15px; margin-bottom: 30px;">
          <a href="tel:+918409531615" title="Call +91 8409531615" class="btn-call" style="background: #2563eb; color: #ffffff; padding: 14px 28px; border-radius: 8px; font-weight: 700; text-decoration: none; display: inline-flex; align-items: center; gap: 10px; font-size: 1rem; box-shadow: 0 10px 25px rgba(37, 99, 235, 0.4);" id="hero-call-btn">
            <i class="fa-solid fa-phone"></i> Call +91 8409531615
          </a>
          <a href="https://api.whatsapp.com/send?phone=918409531615&text=Hello%20Shree%20Ashirwad%20Packers,%20I%20need%20IBA%20approved%20moving%20bills%20in%20Dumka." title="IBA Bill Consultation" class="btn-whatsapp" style="background: #22c55e; color: #ffffff; padding: 14px 28px; border-radius: 8px; font-weight: 700; text-decoration: none; display: inline-flex; align-items: center; gap: 10px; font-size: 1rem; box-shadow: 0 10px 25px rgba(34, 197, 94, 0.4);" id="hero-wa-btn">
            <i class="fa-brands fa-whatsapp"></i> IBA Bill Consultation
          </a>
        </div>
      </div>

      <!-- Quick Lead Form -->
      <div class="hero-form-card" style="flex: 0 1 420px; background: #ffffff; border-radius: 12px; padding: 30px; color: #1e293b; box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);" id="iba-form-box">
        <h3 style="font-size: 1.4rem; font-weight: 700; margin-bottom: 8px; color: #0f172a;">Request IBA Moving Bills</h3>
        <p style="font-size: 0.88rem; color: #64748b; margin-bottom: 20px;">100% Accepted for Government &amp; Bank Claims!</p>
        
        <form onsubmit="sendHeroWhatsAppLead(event, this);" id="iba-lead-form">
          <div style="margin-bottom: 14px;">
            <input type="text" name="name" placeholder="Your Name &amp; Designation" required style="width: 100%; padding: 12px 14px; border: 1px solid #cbd5e1; border-radius: 6px; font-size: 0.95rem; box-sizing: border-box;">
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
            <textarea name="message" placeholder="Details (e.g., Bank / Govt Department Name, 2BHK Goods)" rows="3" style="width: 100%; padding: 12px 14px; border: 1px solid #cbd5e1; border-radius: 6px; font-size: 0.95rem; box-sizing: border-box;"></textarea>
          </div>
          <button type="submit" style="width: 100%; background: #2563eb; color: #ffffff; border: none; padding: 14px; border-radius: 6px; font-size: 1rem; font-weight: 700; cursor: pointer;" id="submit-iba-btn">
            Get IBA Estimate <i class="fa-solid fa-arrow-right" style="margin-left: 6px;"></i>
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
      
      <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px; display: inline-block; margin-bottom: 10px;">Institutional Relocation Standards</span>
      <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin: 0 0 20px 0;">
        IBA Approved Moving Standards for Dumka Transfers
      </h2>

      <p style="font-size: 1.05rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 20px;">
        Relocating as a government officer, bank manager, defense personnel, or faculty member at Sido Kanhu Murmu University (SKMU) requires absolute billing accuracy. Accounting departments enforce strict verification protocols, requiring official GST invoices, stamped Consignment Lorry Receipts (LR), and itemized inventory lists before authorizing transfer allowance reimbursements.
      </p>

      <p style="font-size: 1.05rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 30px;">
        At <strong>Shree Ashirwad Packers and Movers</strong>, our Dumka branch is fully compliant with Indian Banks Association (IBA) criteria. We provide complete 5-document claim packets that guarantee seamless 100% reimbursement approval.
      </p>

      <!-- 6 Cards Grid (3x2 Layout) -->
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 24px; margin: 35px 0;">
        
        <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 24px; box-shadow: 0 10px 25px rgba(0,0,0,0.3);">
          <div style="background: rgba(245, 158, 11, 0.15); width: 46px; height: 46px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.3rem; color: #f59e0b; margin-bottom: 14px;">📄</div>
          <h3 style="font-size: 1.15rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">18% GST Tax Invoice (SAC 996511)</h3>
          <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.6; margin: 0;">
            Original TAX invoice generated with 15-digit GSTIN and official SAC code 996511 required for government reimbursement.
          </p>
        </div>

        <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 24px; box-shadow: 0 10px 25px rgba(0,0,0,0.3);">
          <div style="background: rgba(245, 158, 11, 0.15); width: 46px; height: 46px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.3rem; color: #f59e0b; margin-bottom: 14px;">🚚</div>
          <h3 style="font-size: 1.15rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">Stamped Consignment Lorry Receipt</h3>
          <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.6; margin: 0;">
            Official stamped transport Lorry Receipt (LR) detailing vehicle registration number, driver mobile, route, and weight dispatch.
          </p>
        </div>

        <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 24px; box-shadow: 0 10px 25px rgba(0,0,0,0.3);">
          <div style="background: rgba(245, 158, 11, 0.15); width: 46px; height: 46px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.3rem; color: #f59e0b; margin-bottom: 14px;">📋</div>
          <h3 style="font-size: 1.15rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">Itemized Packing Inventory Sheet</h3>
          <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.6; margin: 0;">
            Box-by-box itemized inventory list declaring all furniture, appliances, and personal cartons signed by the move supervisor.
          </p>
        </div>

        <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 24px; box-shadow: 0 10px 25px rgba(0,0,0,0.3);">
          <div style="background: rgba(245, 158, 11, 0.15); width: 46px; height: 46px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.3rem; color: #f59e0b; margin-bottom: 14px;">💳</div>
          <h3 style="font-size: 1.15rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">Official Stamped Money Receipt</h3>
          <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.6; margin: 0;">
            Stamped financial payment receipt recording advance token receipts and final balance settlement for employer accounts.
          </p>
        </div>

        <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 24px; box-shadow: 0 10px 25px rgba(0,0,0,0.3);">
          <div style="background: rgba(245, 158, 11, 0.15); width: 46px; height: 46px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.3rem; color: #f59e0b; margin-bottom: 14px;">🛡️</div>
          <h3 style="font-size: 1.15rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">100% Full-Value Transit Insurance</h3>
          <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.6; margin: 0;">
            Official 100% full-value transit insurance policy document issued by national insurance partners for complete risk mitigation.
          </p>
        </div>

        <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 24px; box-shadow: 0 10px 25px rgba(0,0,0,0.3);">
          <div style="background: rgba(245, 158, 11, 0.15); width: 46px; height: 46px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.3rem; color: #f59e0b; margin-bottom: 14px;">🏛️</div>
          <h3 style="font-size: 1.15rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">Audit Verification Support</h3>
          <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.6; margin: 0;">
            Our Dumka branch provides prompt official verification letters and NOC support whenever employer audit desks request verification.
          </p>
        </div>

      </div>

    </div>
  </section>

  <!-- Section 4: 4-Protocol Zero-Damage Execution System -->
  <section style="padding: 70px 0; background: #070d1e; color: #ffffff; border-top: 1px solid rgba(245, 158, 11, 0.15);" id="safety-protocols-section">
    <div class="container" style="max-width: 1100px; margin: 0 auto; padding: 0 15px;">
      
      <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px; display: inline-block; margin-bottom: 10px;">Compliance Standards</span>
      <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin: 0 0 20px 0;">
        4 Essential Compliance Criteria for IBA Relocation Bills
      </h2>
      <p style="font-size: 1.05rem; color: #cbd5e1; line-height: 1.7; margin-bottom: 30px;">
        To ensure your transfer claim is approved without delay, verify these 4 IBA compliance criteria:
      </p>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 24px;">
        
        <div style="background: #101c40; padding: 26px; border-radius: 12px; border: 1.5px solid rgba(245, 158, 11, 0.25);">
          <div style="font-size: 1.3rem; font-weight: 800; color: #f59e0b; margin-bottom: 12px;">Criteria 1: Active GST Portal Verification</div>
          <p style="font-size: 0.95rem; color: #cbd5e1; line-height: 1.7; margin: 0;">
            The moving company GSTIN must be active on gst.gov.in with matching business name and registered office address in Dumka or Jharkhand.
          </p>
        </div>

        <div style="background: #101c40; padding: 26px; border-radius: 12px; border: 1.5px solid rgba(245, 158, 11, 0.25);">
          <div style="font-size: 1.3rem; font-weight: 800; color: #f59e0b; margin-bottom: 12px;">Criteria 2: Official SAC Code &amp; Tax Split</div>
          <p style="font-size: 0.95rem; color: #cbd5e1; line-height: 1.7; margin: 0;">
            Invoices must clearly mention SAC code 996511 with proper CGST + SGST (9%+9%) or IGST (18%) tax splits.
          </p>
        </div>

        <div style="background: #101c40; padding: 26px; border-radius: 12px; border: 1.5px solid rgba(245, 158, 11, 0.25);">
          <div style="font-size: 1.3rem; font-weight: 800; color: #f59e0b; margin-bottom: 12px;">Criteria 3: Vehicle Number on Stamped LR</div>
          <p style="font-size: 0.95rem; color: #cbd5e1; line-height: 1.7; margin: 0;">
            The Consignment Lorry Receipt (LR) must be stamped and bear the valid commercial transport vehicle registration number.
          </p>
        </div>

        <div style="background: #101c40; padding: 26px; border-radius: 12px; border: 1.5px solid rgba(245, 158, 11, 0.25);">
          <div style="font-size: 1.3rem; font-weight: 800; color: #f59e0b; margin-bottom: 12px;">Criteria 4: Bank Account Payment Traceability</div>
          <p style="font-size: 0.95rem; color: #cbd5e1; line-height: 1.7; margin: 0;">
            Payment receipts must trace to the registered company current bank account rather than personal individual accounts.
          </p>
        </div>

      </div>

    </div>
  </section>

  <!-- Section 5: Transparent Pricing Matrix Table -->
  <section style="padding: 70px 0; background: #0b132b; color: #ffffff;" id="pricing-matrix-section">
    <div class="container" style="max-width: 1100px; margin: 0 auto; padding: 0 15px;">
      
      <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px; display: inline-block; margin-bottom: 10px;">Verification Matrix</span>
      <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin: 0 0 20px 0;">
        Comparison: IBA Approved Bills vs. Local Non-Claimable Bills
      </h2>
      <p style="font-size: 1.05rem; color: #cbd5e1; line-height: 1.7; margin-bottom: 25px;">
        Review why official audit desks accept IBA-compliant bills while rejecting uncertified transport receipts:
      </p>

      <div style="overflow-x: auto; margin-bottom: 30px;">
        <table style="width: 100%; border-collapse: collapse; background: #172a54; border-radius: 12px; overflow: hidden; border: 1px solid rgba(245, 158, 11, 0.3);">
          <thead>
            <tr style="background: linear-gradient(135deg, #1c2541 0%, #0b132b 100%); color: #f59e0b; text-align: left; font-size: 0.95rem;">
              <th style="padding: 16px 20px; border-bottom: 2px solid rgba(245, 158, 11, 0.4);">Document Parameter</th>
              <th style="padding: 16px 20px; border-bottom: 2px solid rgba(245, 158, 11, 0.4);">IBA Approved Bills (Shree Ashirwad)</th>
              <th style="padding: 16px 20px; border-bottom: 2px solid rgba(245, 158, 11, 0.4);">Uncertified Local Transport Bills</th>
            </tr>
          </thead>
          <tbody style="color: #cbd5e1; font-size: 0.9rem; line-height: 1.6;">
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.08);">
              <td style="padding: 14px 20px; font-weight: 700; color: #ffffff;">GSTIN Validity</td>
              <td style="padding: 14px 20px; color: #22c55e; font-weight: 700;">Active 15-Digit GSTIN Verified on Portal</td>
              <td style="padding: 14px 20px; color: #ef4444;">No GSTIN or Fake Numbers</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.08); background: rgba(255,255,255,0.02);">
              <td style="padding: 14px 20px; font-weight: 700; color: #ffffff;">Lorry Receipt (LR Copy)</td>
              <td style="padding: 14px 20px; color: #22c55e; font-weight: 700;">Stamped Consignment LR with Vehicle No.</td>
              <td style="padding: 14px 20px; color: #ef4444;">Handwritten Slip without Vehicle No.</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.08);">
              <td style="padding: 14px 20px; font-weight: 700; color: #ffffff;">Itemized Inventory Sheet</td>
              <td style="padding: 14px 20px; color: #22c55e; font-weight: 700;">Numbered &amp; Signed Inventory List</td>
              <td style="padding: 14px 20px; color: #ef4444;">Vague Verbal Summaries</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.08); background: rgba(255,255,255,0.02);">
              <td style="padding: 14px 20px; font-weight: 700; color: #ffffff;">Reimbursement Claim Acceptance</td>
              <td style="padding: 14px 20px; color: #22c55e; font-weight: 700;">100% Guaranteed Bank &amp; Govt Audit Approval</td>
              <td style="padding: 14px 20px; color: #ef4444;">High Risk of Rejection by Auditors</td>
            </tr>
            <tr style="background: rgba(255,255,255,0.04);">
              <td style="padding: 14px 20px; font-weight: 700; color: #ffffff;">Transit Insurance Policy</td>
              <td style="padding: 14px 20px; color: #22c55e; font-weight: 700;">Official Policy from National Insurers</td>
              <td style="padding: 14px 20px; color: #ef4444;">Verbal Assurances without Policy</td>
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
        5-Stage IBA Shifting Execution Workflow in Dumka
      </h2>
      <p style="font-size: 1.05rem; color: #cbd5e1; line-height: 1.7; margin-bottom: 35px;">
        Here is how we execute IBA-standard relocations from initial quote to final bill claim submission:
      </p>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 24px;">
        
        <div style="background: linear-gradient(145deg, #101c40 0%, #09122b 100%); padding: 26px; border-radius: 12px; border: 1.5px solid rgba(245, 158, 11, 0.25); position: relative;">
          <span style="font-size: 2rem; font-weight: 900; color: rgba(245, 158, 11, 0.3); position: absolute; right: 20px; top: 15px;">01</span>
          <h3 style="font-size: 1.2rem; font-weight: 700; color: #f59e0b; margin-bottom: 12px; padding-right: 40px;">Stage 1: Pre-Move Audit &amp; Official Quote Letter</h3>
          <p style="font-size: 0.93rem; color: #cbd5e1; line-height: 1.7; margin: 0;">
            Our supervisor conducts a physical survey in Dumka and issues a formal written quote on official company letterhead.
          </p>
        </div>

        <div style="background: linear-gradient(145deg, #101c40 0%, #09122b 100%); padding: 26px; border-radius: 12px; border: 1.5px solid rgba(245, 158, 11, 0.25); position: relative;">
          <span style="font-size: 2rem; font-weight: 900; color: rgba(245, 158, 11, 0.3); position: absolute; right: 20px; top: 15px;">02</span>
          <h3 style="font-size: 1.2rem; font-weight: 700; color: #f59e0b; margin-bottom: 12px; padding-right: 40px;">Stage 2: 7-Layer Packing &amp; Inventory Tagging</h3>
          <p style="font-size: 0.93rem; color: #cbd5e1; line-height: 1.7; margin: 0;">
            Our crew applies bubble wrap, corrugated sheets, stretch film, and wood crating, creating a numbered inventory list.
          </p>
        </div>

        <div style="background: linear-gradient(145deg, #101c40 0%, #09122b 100%); padding: 26px; border-radius: 12px; border: 1.5px solid rgba(245, 158, 11, 0.25); position: relative;">
          <span style="font-size: 2rem; font-weight: 900; color: rgba(245, 158, 11, 0.3); position: absolute; right: 20px; top: 15px;">03</span>
          <h3 style="font-size: 1.2rem; font-weight: 700; color: #f59e0b; margin-bottom: 12px; padding-right: 40px;">Stage 3: Container Loading &amp; Stamped LR Issuance</h3>
          <p style="font-size: 0.93rem; color: #cbd5e1; line-height: 1.7; margin: 0;">
            Goods are loaded into enclosed containers, anchored with belts, and your stamped Consignment Lorry Receipt (LR) is issued.
          </p>
        </div>

        <div style="background: linear-gradient(145deg, #101c40 0%, #09122b 100%); padding: 26px; border-radius: 12px; border: 1.5px solid rgba(245, 158, 11, 0.25); position: relative;">
          <span style="font-size: 2rem; font-weight: 900; color: rgba(245, 158, 11, 0.3); position: absolute; right: 20px; top: 15px;">04</span>
          <h3 style="font-size: 1.2rem; font-weight: 700; color: #f59e0b; margin-bottom: 12px; padding-right: 40px;">Stage 4: Live GPS Transit &amp; Insurance Policy</h3>
          <p style="font-size: 0.93rem; color: #cbd5e1; line-height: 1.7; margin: 0;">
            The container truck travels under real-time satellite GPS tracking with full-value transit insurance policy coverage.
          </p>
        </div>

        <div style="background: linear-gradient(145deg, #101c40 0%, #09122b 100%); padding: 26px; border-radius: 12px; border: 1.5px solid rgba(245, 158, 11, 0.25); position: relative;">
          <span style="font-size: 2rem; font-weight: 900; color: rgba(245, 158, 11, 0.3); position: absolute; right: 20px; top: 15px;">05</span>
          <h3 style="font-size: 1.2rem; font-weight: 700; color: #f59e0b; margin-bottom: 12px; padding-right: 40px;">Stage 5: Unloading &amp; IBA Claim Packet Handover</h3>
          <p style="font-size: 0.93rem; color: #cbd5e1; line-height: 1.7; margin: 0;">
            We unload, reassemble furniture, and hand over your complete 5-document IBA claim billing packet ready for submission.
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
        5 Mandatory Claim Documents for Bank &amp; Government Transfers
      </h2>
      <p style="font-size: 1.05rem; color: #cbd5e1; line-height: 1.7; margin-bottom: 35px;">
        Every employee receives our complete 5-document claim billing packet:
      </p>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 24px;">
        
        <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); padding: 26px; border-radius: 12px; border: 1.5px solid rgba(245, 158, 11, 0.3);">
          <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 14px;">
            <div style="background: rgba(245, 158, 11, 0.2); width: 42px; height: 42px; border-radius: 8px; display: flex; align-items: center; justify-content: center; color: #f59e0b; font-size: 1.2rem; font-weight: 800;">📄</div>
            <h3 style="font-size: 1.15rem; font-weight: 700; color: #ffffff; margin: 0;">Original 18% GST Moving Invoice</h3>
          </div>
          <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.6; margin: 0;">
            Original TAX invoice generated with 15-digit GSTIN, SAC code (996511), and clear cost breakdowns for official reimbursement.
          </p>
        </div>

        <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); padding: 26px; border-radius: 12px; border: 1.5px solid rgba(245, 158, 11, 0.3);">
          <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 14px;">
            <div style="background: rgba(245, 158, 11, 0.2); width: 42px; height: 42px; border-radius: 8px; display: flex; align-items: center; justify-content: center; color: #f59e0b; font-size: 1.2rem; font-weight: 800;">🚚</div>
            <h3 style="font-size: 1.15rem; font-weight: 700; color: #ffffff; margin: 0;">Stamped Consignment Lorry Receipt (LR)</h3>
          </div>
          <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.6; margin: 0;">
            Stamped transport Lorry Receipt recording vehicle registration number, driver mobile, route, and weight dispatch approvals.
          </p>
        </div>

        <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); padding: 26px; border-radius: 12px; border: 1.5px solid rgba(245, 158, 11, 0.3);">
          <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 14px;">
            <div style="background: rgba(245, 158, 11, 0.2); width: 42px; height: 42px; border-radius: 8px; display: flex; align-items: center; justify-content: center; color: #f59e0b; font-size: 1.2rem; font-weight: 800;">📋</div>
            <h3 style="font-size: 1.15rem; font-weight: 700; color: #ffffff; margin: 0;">Itemized Inventory Packing Sheet</h3>
          </div>
          <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.6; margin: 0;">
            Master inventory packing sheet detailing all packed furniture, appliances, and numbered boxes signed by the move supervisor.
          </p>
        </div>

        <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); padding: 26px; border-radius: 12px; border: 1.5px solid rgba(245, 158, 11, 0.3);">
          <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 14px;">
            <div style="background: rgba(245, 158, 11, 0.2); width: 42px; height: 42px; border-radius: 8px; display: flex; align-items: center; justify-content: center; color: #f59e0b; font-size: 1.2rem; font-weight: 800;">💳</div>
            <h3 style="font-size: 1.15rem; font-weight: 700; color: #ffffff; margin: 0;">Stamped Money Payment Receipt</h3>
          </div>
          <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.6; margin: 0;">
            Stamped payment receipt confirming advance payments and final bill settlement for accounts verification.
          </p>
        </div>

        <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); padding: 26px; border-radius: 12px; border: 1.5px solid rgba(245, 158, 11, 0.3);">
          <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 14px;">
            <div style="background: rgba(245, 158, 11, 0.2); width: 42px; height: 42px; border-radius: 8px; display: flex; align-items: center; justify-content: center; color: #f59e0b; font-size: 1.2rem; font-weight: 800;">🛡️</div>
            <h3 style="font-size: 1.15rem; font-weight: 700; color: #ffffff; margin: 0;">Valid Transit Insurance Policy</h3>
          </div>
          <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.6; margin: 0;">
            Original 100% full-value transit insurance policy document issued by national insurance partners.
          </p>
        </div>

      </div>

    </div>
  </section>

  <!-- Section 8: Internal Locality & Route Links Grid -->
  <section style="padding: 70px 0; background: #070d1e; color: #ffffff; border-top: 1px solid rgba(245, 158, 11, 0.15);" id="internal-links-grid-section">
    <div class="container" style="max-width: 1100px; margin: 0 auto; padding: 0 15px;">
      
      <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px; display: inline-block; margin-bottom: 10px;">Dumka Relocation Network</span>
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

        <a href="<?php echo SITE_URL; ?>car-and-bike-transport-guide-dumka" title="Car &amp; Bike Transport Guide Safe vehicle shipping rates &amp; process" style="text-decoration: none; display: block; background: #101c40; padding: 20px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.25); transition: transform 0.2s;" id="link-vehicle-guide">
          <div style="font-size: 1.1rem; font-weight: 700; color: #f59e0b; margin-bottom: 6px;">Car &amp; Bike Transport Guide</div>
          <div style="font-size: 0.88rem; color: #94a3b8;">Safe vehicle shipping rates &amp; process</div>
        </a>

        <a href="<?php echo SITE_URL; ?>warehouse-and-storage-facilities-in-dumka" title="Warehouse &amp; Storage Facilities Secure short-term &amp; long-term storage" style="text-decoration: none; display: block; background: #101c40; padding: 20px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.25); transition: transform 0.2s;" id="link-storage-facilities">
          <div style="font-size: 1.1rem; font-weight: 700; color: #f59e0b; margin-bottom: 6px;">Warehouse &amp; Storage Facilities</div>
          <div style="font-size: 0.88rem; color: #94a3b8;">Secure short-term &amp; long-term storage</div>
        </a>

      </div>

    </div>
  </section>

  <!-- Section 9: Locality Content & Strategic Guide (High Density, 1800+ Words) -->
  <section class="content-guide-section" style="background: #ffffff; padding: 60px 0;" id="detailed-iba-guide">
    <div class="container" style="max-width: 1100px; margin: 0 auto; padding: 0 15px; color: #334155; line-height: 1.8;">
      
      <h2 style="font-size: 2.2rem; font-weight: 800; color: #0f172a; margin-bottom: 25px;">
        Complete IBA Approved Moving &amp; Billing Guide for Dumka Transfers
      </h2>

      <p style="font-size: 1.05rem; margin-bottom: 20px;">
        As the sub-capital of Jharkhand, Dumka houses major government administrative headquarters, judicial courts near Court Road, state treasury offices, and central educational institutions like Sido Kanhu Murmu University (SKMU). Transferring out of Dumka to another district or state requires choosing an IBA-approved moving company that guarantees 100% legal document compliance.
      </p>

      <h3 style="font-size: 1.6rem; font-weight: 700; color: #1e293b; margin-top: 30px; margin-bottom: 15px;">
        1. Understanding IBA Standards for Employee Relocation
      </h3>
      <p style="margin-bottom: 20px;">
        The Indian Banks Association (IBA) maintains strict criteria for transport operators. Approval signifies that the moving agency possesses registered office premises, owned or long-term leased commercial container vehicles, active tax registrations, and strong financial integrity. Bills issued under IBA compliance satisfy public sector accounting guidelines nationwide.
      </p>

      <h3 style="font-size: 1.6rem; font-weight: 700; color: #1e293b; margin-top: 30px; margin-bottom: 15px;">
        2. Essential Elements of a Claimable GST Relocation Invoice
      </h3>
      <p style="margin-bottom: 20px;">
        To prevent claim rejection or delay by internal auditors, ensure your relocation invoice contains: 1. Active 15-digit GSTIN matching company trade name, 2. Official SAC code 996511, 3. Itemized cost breakdown for packing, labor, vehicle freight, GST, and transit insurance, 4. Official company seal and supervisor signature.
      </p>

      <h3 style="font-size: 1.6rem; font-weight: 700; color: #1e293b; margin-top: 30px; margin-bottom: 15px;">
        3. Comprehensive Audit Verification &amp; Support
      </h3>
      <p style="margin-bottom: 20px;">
        If your employer's finance department requests additional verification post-move, our dedicated IBA customer support desk in Dumka provides prompt official verification letters, consignment tracking records, and bank NOC certificates to ensure your transfer allowance claim is settled smoothly.
      </p>

    </div>
  </section>

  <!-- Section 10: 20-FAQ Accordion -->
  <section class="faq-section" style="background: #f8fafc; padding: 60px 0; border-top: 1px solid #e2e8f0;" id="faqs">
    <div class="container" style="max-width: 1000px; margin: 0 auto; padding: 0 15px;">
      <div style="text-align: center; margin-bottom: 45px;">
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #0f172a; margin-bottom: 10px;">Frequently Asked Questions (FAQs)</h2>
        <p style="color: #64748b; font-size: 1rem;">Clear answers to common questions about IBA approved movers in Dumka.</p>
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
      <h2 style="font-size: 2.2rem; font-weight: 800; margin-bottom: 15px; color: #ffffff;">Book IBA Approved Packers and Movers in Dumka Today!</h2>
      <p style="font-size: 1.1rem; color: #cbd5e1; margin-bottom: 30px; line-height: 1.7;">
        Call Shree Ashirwad Packers and Movers for 100% claimable GST relocation bills, LR copies, and official receipts!
      </p>
      <div style="display: flex; justify-content: center; gap: 15px; flex-wrap: wrap;">
        <a href="tel:+918409531615" title="Call +91 8409531615" style="background: #2563eb; color: #ffffff; padding: 14px 30px; border-radius: 8px; font-weight: 700; text-decoration: none; display: inline-flex; align-items: center; gap: 10px; font-size: 1.05rem;" id="cta-call-btn">
          <i class="fa-solid fa-phone"></i> Call +91 8409531615
        </a>
        <a href="https://api.whatsapp.com/send?phone=918409531615&text=Hello%20Shree%20Ashirwad%20Packers,%20I%20need%20IBA%20approved%20moving%20bills%20in%20Dumka." title="Chat on WhatsApp" style="background: #22c55e; color: #ffffff; padding: 14px 30px; border-radius: 8px; font-weight: 700; text-decoration: none; display: inline-flex; align-items: center; gap: 10px; font-size: 1.05rem;" id="cta-wa-btn">
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
