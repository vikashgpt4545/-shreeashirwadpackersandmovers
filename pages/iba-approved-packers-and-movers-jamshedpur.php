<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "IBA Approved Packers and Movers Jamshedpur | 8409531615";
$page_desc = "IBA Approved Packers and Movers Jamshedpur. Official GST bills, LR receipt, car & household shifting for bank, PSU & corporate officers. Call (+91) 8409531615.";
$page_keywords = "IBA approved packers and movers jamshedpur, bank approved movers jamshedpur, IBA code packers bistupur sakchi mango adityapur, GST bills claim relocation jamshedpur";

$page_city = "Jamshedpur";

$faq_list = [
    ['q' => 'Will bank management accept your shifting bills in Jamshedpur?', 'a' => 'Yes, 100% of our bills are formatted as per IBA and bank employee claim standards.'],
    ['q' => 'How long does it take to issue the final IBA bill set?', 'a' => 'Original hard copies are handed over on moving day or dispatched via speed post within 24 hours.'],
    ['q' => 'How to request IBA shifting documents from Shree Ashirwad Packers?', 'a' => 'Call +91 8409531615 or message us on WhatsApp for immediate IBA document generation.'],
    ['q' => 'What documents are included in the IBA bill set?', 'a' => 'The set includes official GST invoice, Consignment Lorry Receipt (LR copy), itemized packing inventory list, money receipt, and transit insurance certificate.']
];

require_once __DIR__ . '/../includes/header.php';
?>

<main class="site-main">

  <!-- Visual Breadcrumb Navigation Bar -->
  <div class="breadcrumb-wrapper">
    <div class="container">
      <div class="breadcrumb-list">
        <span class="breadcrumb-item"><a href="<?php echo SITE_URL; ?>" title="Home">Home</a></span>
        <span class="breadcrumb-separator">/</span>
        <span class="breadcrumb-item"><a href="<?php echo SITE_URL; ?>packers-and-movers-in-jamshedpur" title="Jamshedpur">Jamshedpur</a></span>
        <span class="breadcrumb-separator">/</span>
        <span class="breadcrumb-item active">IBA Approved Packers and Movers Jamshedpur</span>
      </div>
    </div>
  </div>

  <!-- Hero Section -->
  <section class="hero-section" style="background: linear-gradient(135deg, #0b132b 0%, #1c2541 100%); padding: 60px 0; color: #ffffff;">
    <div class="container">
      <div class="hero-grid" style="display: grid; grid-template-columns: 1.2fr 0.8fr; gap: 40px; align-items: center;">
        
        <div class="hero-text">
          <span class="section-tag" style="background: rgba(245, 158, 11, 0.15); color: #f59e0b; border: 1px solid rgba(245, 158, 11, 0.4); padding: 6px 16px; border-radius: 20px; font-size: 0.85rem; font-weight: 700; text-transform: uppercase; display: inline-block; margin-bottom: 15px;">
            Bank &amp; PSU Approved Logistics
          </span>
          <h1 style="font-size: 2.7rem; font-weight: 800; line-height: 1.2; margin-bottom: 20px; color: #ffffff;">
            Official <span style="color: #f59e0b;">IBA Approved Packers and Movers Jamshedpur</span>
          </h1>
          <p style="font-size: 1.08rem; color: #cbd5e1; line-height: 1.7; margin-bottom: 25px;">
            Transferring as a bank officer, PSU manager, Tata Steel executive, or government employee from Jamshedpur? Shree Ashirwad Packers provides 100% IBA-approved bills, genuine GST invoice receipts, Lorry Receipts (LR), and money receipts for smooth claim reimbursement across Bistupur, Sakchi, Mango, Adityapur, Telco, Sonari, and Kadma.
          </p>

          <div style="display: flex; gap: 15px; flex-wrap: wrap; margin-bottom: 30px;">
            <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call IBA Desk:" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #d32f2f 0%, #f59e0b 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(211, 47, 47, 0.4);">
              <i class="fas fa-phone-alt"></i> Call IBA Desk: <?php echo SITE_PHONE; ?>
            </a>
            <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20need%20IBA%20approved%20shifting%20bill%20and%20quote%20in%20Jamshedpur." title="Chat on WhatsApp" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
              <i class="fab fa-whatsapp"></i> Chat on WhatsApp
            </a>
          </div>
        </div>

        <div class="hero-form-card" style="background: rgba(255, 255, 255, 0.05); backdrop-filter: blur(10px); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 16px; padding: 30px; box-shadow: 0 15px 35px rgba(0,0,0,0.4);">
          <h2 style="font-size: 1.4rem; color: #ffffff; margin-bottom: 8px; font-weight: 700; text-align: center;">Get IBA Approved Estimate</h2>
          <p style="font-size: 0.85rem; color: #94a3b8; text-align: center; margin-bottom: 20px;">Receive official claim quotation on WhatsApp in 2 minutes</p>

          <form action="#" method="POST" onsubmit="sendHeroWhatsAppLead(event, this);">
            <div style="margin-bottom: 14px;">
              <input type="text" name="name" class="form-control" placeholder="Your Full Name" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="margin-bottom: 14px;">
              <input type="tel" name="phone" class="form-control" placeholder="10-Digit Phone Number" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 10px; margin-bottom: 14px;">
              <input type="text" name="move_from" class="form-control" value="Jamshedpur" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
              <input type="text" name="move_to" class="form-control" placeholder="Destination City" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <button type="submit" style="width: 100%; padding: 14px; background: linear-gradient(135deg, #d32f2f 0%, #f59e0b 100%); color: #ffffff; border: none; border-radius: 50px; font-weight: 700; font-size: 1rem; cursor: pointer;">
              Get IBA Estimate Now ➔
            </button>
          </form>
        </div>

      </div>
    </div>
  </section>

  <!-- Section 1: Overview Box -->
  <section style="padding: 50px 0; background: linear-gradient(145deg, #0b132b 0%, #172a54 100%); border-bottom: 1px solid rgba(245, 158, 11, 0.3); color: #ffffff;">
    <div class="container" style="max-width: 950px;">
      <h3 style="color: #f59e0b; font-size: 1.4rem; font-weight: 700; margin-bottom: 14px;">100% Valid IBA Approved Bills &amp; Bank Officer Shifting Documents in Jamshedpur</h3>
      <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.7; margin-bottom: 14px;">
        Public sector bank officers, PSU executives, defense personnel, and corporate managers transferring from Jamshedpur require official, verifiable shifting bills to claim complete relocation allowance reimbursements. Shree Ashirwad Packers and Movers provides <strong>IBA-approved packers and movers services in Jamshedpur</strong> equipped with authentic GST tax invoices, Consignment Lorry Receipts (LR), itemized inventory lists, money receipts, and valid transit insurance coverage.
      </p>
      <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.7; margin-bottom: 14px;">
        Our dedicated IBA documentation desk assists officers from State Bank of India (SBI), Punjab National Bank (PNB), Bank of Baroda (BOB), Canara Bank, Union Bank, Indian Bank, Central Bank, UCO Bank, and private banking institutions (HDFC, ICICI, Axis Bank) across Bistupur, Sakchi, Mango, Adityapur, Telco, Sonari, Kadma, Jugsalai, Golmuri, Baridih, and Sundarnagar.
      </p>
      <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.7; margin-bottom: 14px;">
        Bank relocation policy guidelines mandate that shifting bills must include active GST registration (GSTIN), standardized Service Accounting Codes (SAC 996511 for road transport freight and SAC 996729 for packing &amp; cargo handling), vehicle consignment note serial numbers, gross weight details, and driver license verification.
      </p>
      <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.7; margin-bottom: 14px;">
        In addition to bank staff, we specialize in official transfer shifting for executives at Tata Steel, Tata Motors, Tinplate, Tata Power, UCIL, Railway officers, Military/Defense personnel, and Central Government staff transferring from East Singhbhum to Ranchi, Patna, Kolkata, Delhi NCR, Mumbai, Pune, Hyderabad, and Bangalore.
      </p>
      <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.7; margin-bottom: 14px;">
        Unlike fake quotation operators who issue invalid hand-written bills that get rejected during HR audit checks, all our bills are computer-generated, digitally verified, and matched against actual bank transfer allowance claim caps, ensuring hassle-free 100% claim approval and fast fund credit.
      </p>
      <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.7; margin-bottom: 14px;">
        Our team also handles advance claim estimate documentation required by bank regional offices prior to packing day. We issue formal pre-move survey quotations, enabling officers to draw advance relocation allowances directly from their branch finance managers.
      </p>
      <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.7; margin-bottom: 14px;">
        Every IBA relocation project executed by Shree Ashirwad Packers comes with dedicated account executive support. If your bank auditor requests additional verification letters or breakdown schedules, our Jamshedpur office provides instant official responses within 2 hours.
      </p>
      <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.7; margin: 0;">
        Review our complete IBA document checklist, organization-wise claim rate matrix, 5-document billing package details, and IBA shifting FAQs below.
      </p>
    </div>
  </section>

  <!-- Section 2: Stats Bar -->
  <section style="padding: 35px 0; background: #070d19; border-bottom: 1px solid rgba(245, 158, 11, 0.2);">
    <div class="container">
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(160px, 1fr)); gap: 15px; text-align: center;">
        <div><h3 style="color: #f59e0b; font-size: 2rem; font-weight: 800;">100%</h3><p style="color: #cbd5e1; font-size: 0.85rem;">IBA &amp; Bank Compliant</p></div>
        <div><h3 style="color: #f59e0b; font-size: 2rem; font-weight: 800;">3,200+</h3><p style="color: #cbd5e1; font-size: 0.85rem;">Bank Staff Relocated</p></div>
        <div><h3 style="color: #f59e0b; font-size: 2rem; font-weight: 800;">SAC 996511</h3><p style="color: #cbd5e1; font-size: 0.85rem;">Valid GST Billing</p></div>
        <div><h3 style="color: #f59e0b; font-size: 2rem; font-weight: 800;">5-Doc</h3><p style="color: #cbd5e1; font-size: 0.85rem;">Complete Claim Set</p></div>
        <div><h3 style="color: #f59e0b; font-size: 2rem; font-weight: 800;">100%</h3><p style="color: #cbd5e1; font-size: 0.85rem;">Audit Approval Record</p></div>
        <div><h3 style="color: #f59e0b; font-size: 2rem; font-weight: 800;">Same Day</h3><p style="color: #cbd5e1; font-size: 0.85rem;">Bill Set Issuance</p></div>
      </div>
    </div>
  </section>

  <!-- Section 3: 6-Card Feature Grid -->
  <section style="padding: 60px 0; background: #ffffff;">
    <div class="container">
      <div style="text-align: center; max-width: 800px; margin: 0 auto 40px auto;">
        <span style="color: #d32f2f; font-weight: 700; text-transform: uppercase; font-size: 0.85rem;">Specialized Services</span>
        <h2 style="font-size: 2.1rem; color: #0b132b; font-weight: 800; margin-top: 5px;">
          IBA Approved Relocation Solutions in <span style="color: #d32f2f;">Jamshedpur</span>
        </h2>
        <p style="color: #64748b; font-size: 0.98rem; margin-top: 8px;">
          Customized shifting and official documentation built for public sector, government, and corporate transfers.
        </p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 25px; margin-bottom: 40px;">
        <div style="background: #f8fafc; padding: 25px; border-radius: 12px; border-top: 4px solid #d32f2f; box-shadow: 0 4px 15px rgba(0,0,0,0.05);">
          <h3 style="font-size: 1.15rem; color: #0b132b; margin-bottom: 8px; font-weight: 700;">PSU &amp; Nationalized Bank Officers</h3>
          <p style="color: #64748b; font-size: 0.9rem; line-height: 1.6;">Full household and vehicle relocation documentation formatted to SBI, PNB, BOB, and Canara Bank HR reimbursement caps.</p>
        </div>
        <div style="background: #f8fafc; padding: 25px; border-radius: 12px; border-top: 4px solid #f59e0b; box-shadow: 0 4px 15px rgba(0,0,0,0.05);">
          <h3 style="font-size: 1.15rem; color: #0b132b; margin-bottom: 8px; font-weight: 700;">Defense &amp; Military Transfer Shifting</h3>
          <p style="color: #64748b; font-size: 0.9rem; line-height: 1.6;">Official Army, Navy, Air Force, and paramilitary force (CRPF, BSF) transfer bill sets with consignment receipts and weight certificates.</p>
        </div>
        <div style="background: #f8fafc; padding: 25px; border-radius: 12px; border-top: 4px solid #d32f2f; box-shadow: 0 4px 15px rgba(0,0,0,0.05);">
          <h3 style="font-size: 1.15rem; color: #0b132b; margin-bottom: 8px; font-weight: 700;">Tata Group Corporate Executives</h3>
          <p style="color: #64748b; font-size: 0.9rem; line-height: 1.6;">Seamless corporate relocation for Tata Steel, Tata Motors, and Tinplate executives with direct company billing options.</p>
        </div>
        <div style="background: #f8fafc; padding: 25px; border-radius: 12px; border-top: 4px solid #f59e0b; box-shadow: 0 4px 15px rgba(0,0,0,0.05);">
          <h3 style="font-size: 1.15rem; color: #0b132b; margin-bottom: 8px; font-weight: 700;">Central &amp; State Government Employees</h3>
          <p style="color: #64748b; font-size: 0.9rem; line-height: 1.6;">Government grade TA/DA claim paperwork including money receipts, consignment notes, and transit insurance certificates.</p>
        </div>
        <div style="background: #f8fafc; padding: 25px; border-radius: 12px; border-top: 4px solid #d32f2f; box-shadow: 0 4px 15px rgba(0,0,0,0.05);">
          <h3 style="font-size: 1.15rem; color: #0b132b; margin-bottom: 8px; font-weight: 700;">GST Invoice &amp; SAC Code Billing</h3>
          <p style="color: #64748b; font-size: 0.9rem; line-height: 1.6;">Computerized GST invoices with SAC 996511 (freight) and SAC 996729 (packing) verified on the official GST portal.</p>
        </div>
        <div style="background: #f8fafc; padding: 25px; border-radius: 12px; border-top: 4px solid #f59e0b; box-shadow: 0 4px 15px rgba(0,0,0,0.05);">
          <h3 style="font-size: 1.15rem; color: #0b132b; margin-bottom: 8px; font-weight: 700;">Fast-Track Claim Assistance</h3>
          <p style="color: #64748b; font-size: 0.9rem; line-height: 1.6;">Same-day original hard copy document dispatch via courier or hand delivery so claim submission takes zero extra time.</p>
        </div>
      </div>

      <!-- Mandatory 5-Document IBA Billing Set -->
      <div style="background: #070d19; padding: 35px; border-radius: 16px; border: 1px solid rgba(245, 158, 11, 0.3); color: #ffffff; margin-bottom: 40px;">
        <h3 style="color: #f59e0b; font-size: 1.5rem; font-weight: 800; text-align: center; margin-bottom: 20px;">
          The 5-Document IBA Approved Billing Set
        </h3>
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); gap: 15px;">
          <div style="background: rgba(255,255,255,0.03); padding: 18px; border-radius: 8px; border-left: 4px solid #f59e0b;"><h4 style="color: #f59e0b; margin-bottom: 4px; font-size: 0.98rem;">Doc 1: GST Tax Invoice</h4><p style="color: #cbd5e1; font-size: 0.85rem; line-height: 1.5; margin: 0;">Itemized original GST invoice specifying freight, packing charges, GSTIN, and SAC codes.</p></div>
          <div style="background: rgba(255,255,255,0.03); padding: 18px; border-radius: 8px; border-left: 4px solid #f59e0b;"><h4 style="color: #f59e0b; margin-bottom: 4px; font-size: 0.98rem;">Doc 2: Consignment Lorry Receipt (LR)</h4><p style="color: #cbd5e1; font-size: 0.85rem; line-height: 1.5; margin: 0;">Numbered 4-copy consignment note detailing vehicle number, route, and cargo gross weight.</p></div>
          <div style="background: rgba(255,255,255,0.03); padding: 18px; border-radius: 8px; border-left: 4px solid #f59e0b;"><h4 style="color: #f59e0b; margin-bottom: 4px; font-size: 0.98rem;">Doc 3: Itemized Packing Inventory List</h4><p style="color: #cbd5e1; font-size: 0.85rem; line-height: 1.5; margin: 0;">Complete box-by-box furniture and appliance packing manifest signed by owner and supervisor.</p></div>
          <div style="background: rgba(255,255,255,0.03); padding: 18px; border-radius: 8px; border-left: 4px solid #f59e0b;"><h4 style="color: #f59e0b; margin-bottom: 4px; font-size: 0.98rem;">Doc 4: Stamped Payment Money Receipt</h4><p style="color: #cbd5e1; font-size: 0.85rem; line-height: 1.5; margin: 0;">Official stamped cash/online payment receipt acknowledging full settlement of freight invoice.</p></div>
          <div style="background: rgba(255,255,255,0.03); padding: 18px; border-radius: 8px; border-left: 4px solid #f59e0b;"><h4 style="color: #f59e0b; margin-bottom: 4px; font-size: 0.98rem;">Doc 5: Transit Insurance Certificate</h4><p style="color: #cbd5e1; font-size: 0.85rem; line-height: 1.5; margin: 0;">National insurance policy cover document matching cargo valuation for total transit safety.</p></div>
        </div>
      </div>
    </div>
  </section>

  <!-- Organization Allowance & Billing Comparison Table -->
  <section style="padding: 60px 0; background: #0b132b; color: #ffffff;">
    <div class="container" style="max-width: 950px;">
      <div style="text-align: center; margin-bottom: 40px;">
        <span style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Documentation Guidelines</span>
        <h2 style="font-size: 2.1rem; font-weight: 800; color: #ffffff; margin-top: 8px;">
          Organization-Wise Shifting Billing &amp; Claim Rules
        </h2>
        <p style="color: #cbd5e1; font-size: 0.95rem; margin-top: 8px;">
          Comparison of document requirements across major sectors operating in Jamshedpur.
        </p>
      </div>

      <div style="background: rgba(255,255,255,0.04); border: 1px solid rgba(245,158,11,0.25); border-radius: 12px; padding: 25px; margin-bottom: 35px;">
        <div style="overflow-x: auto;">
          <table style="width: 100%; border-collapse: collapse; color: #cbd5e1; font-size: 0.9rem;">
            <thead>
              <tr style="background: rgba(245,158,11,0.15); color: #f59e0b; text-align: left;">
                <th style="padding: 12px; border: 1px solid rgba(245,158,11,0.3);">Organization / Sector</th>
                <th style="padding: 12px; border: 1px solid rgba(245,158,11,0.3);">Required Documents</th>
                <th style="padding: 12px; border: 1px solid rgba(245,158,11,0.3);">GST &amp; SAC Code Rule</th>
                <th style="padding: 12px; border: 1px solid rgba(245,158,11,0.3);">Car / Bike Billing</th>
                <th style="padding: 12px; border: 1px solid rgba(245,158,11,0.3);">Claim Settlement Time</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td style="padding: 10px; border: 1px solid rgba(255,255,255,0.1);">PSU Banks (SBI, PNB, BOB)</td>
                <td style="padding: 10px; border: 1px solid rgba(255,255,255,0.1);">GST Bill, LR, Inventory, Money Receipt, Insurance</td>
                <td style="padding: 10px; border: 1px solid rgba(255,255,255,0.1);">SAC 996511 Mandatory</td>
                <td style="padding: 10px; border: 1px solid rgba(255,255,255,0.1);">Separate Vehicle LR</td>
                <td style="padding: 10px; border: 1px solid rgba(255,255,255,0.1);">7 - 14 Working Days</td>
              </tr>
              <tr style="background: rgba(255,255,255,0.02);">
                <td style="padding: 10px; border: 1px solid rgba(255,255,255,0.1);">Defense Forces (Army / CRPF)</td>
                <td style="padding: 10px; border: 1px solid rgba(255,255,255,0.1);">3 Quotations, GST Invoice, Consignment Note, Weight Slip</td>
                <td style="padding: 10px; border: 1px solid rgba(255,255,255,0.1);">18% GST Breakdown</td>
                <td style="padding: 10px; border: 1px solid rgba(255,255,255,0.1);">Included in TA Bill</td>
                <td style="padding: 10px; border: 1px solid rgba(255,255,255,0.1);">10 - 15 Working Days</td>
              </tr>
              <tr>
                <td style="padding: 10px; border: 1px solid rgba(255,255,255,0.1);">Tata Group Companies</td>
                <td style="padding: 10px; border: 1px solid rgba(255,255,255,0.1);">GST Tax Invoice, LR Copy, Packing List, Insurance Policy</td>
                <td style="padding: 10px; border: 1px solid rgba(255,255,255,0.1);">Company GSTIN Billing</td>
                <td style="padding: 10px; border: 1px solid rgba(255,255,255,0.1);">Covered Car Carrier LR</td>
                <td style="padding: 10px; border: 1px solid rgba(255,255,255,0.1);">Direct HR Settlement</td>
              </tr>
              <tr style="background: rgba(255,255,255,0.02);">
                <td style="padding: 10px; border: 1px solid rgba(255,255,255,0.1);">Central Govt (Railways/UCIL)</td>
                <td style="padding: 10px; border: 1px solid rgba(255,255,255,0.1);">GST Bill, LR Receipt, Money Receipt, Self-Declaration</td>
                <td style="padding: 10px; border: 1px solid rgba(255,255,255,0.1);">Active GST Status</td>
                <td style="padding: 10px; border: 1px solid rgba(255,255,255,0.1);">As per Grade Allowance</td>
                <td style="padding: 10px; border: 1px solid rgba(255,255,255,0.1);">15 - 20 Working Days</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

      <!-- Verification Guidelines -->
      <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 25px;">
        <div style="background: rgba(255,255,255,0.04); border: 1px solid rgba(245,158,11,0.2); padding: 22px; border-radius: 10px;">
          <h4 style="color: #f59e0b; font-size: 1.1rem; margin-bottom: 10px;">Why Fake Packers Bills Get Rejected</h4>
          <p style="color: #cbd5e1; font-size: 0.9rem; line-height: 1.6; margin: 0;">
            1. Inactive or canceled GSTIN numbers on government portal.<br>
            2. Missing SAC freight transport codes (996511).<br>
            3. Discrepancy between LR vehicle number and actual toll records.<br>
            4. Unstamped hand-written cash memo receipts.
          </p>
        </div>
        <div style="background: rgba(255,255,255,0.04); border: 1px solid rgba(245,158,11,0.2); padding: 22px; border-radius: 10px;">
          <h4 style="color: #f59e0b; font-size: 1.1rem; margin-bottom: 10px;">Shree Ashirwad IBA Assurance Guarantee</h4>
          <p style="color: #cbd5e1; font-size: 0.9rem; line-height: 1.6; margin: 0;">
            1. 100% active corporate GSTIN with verified portal status.<br>
            2. Pre-audited documentation matching your exact bank grade cap.<br>
            3. Free correction support if HR requests additional formats.<br>
            4. Direct phone confirmation to bank HR audit departments.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- 4-Step Claim Settlement Workflow -->
  <section style="padding: 60px 0; background: #ffffff;">
    <div class="container">
      <div style="text-align: center; max-width: 800px; margin: 0 auto 40px auto;">
        <span style="color: #d32f2f; font-weight: 700; text-transform: uppercase; font-size: 0.85rem;">Process Overview</span>
        <h2 style="font-size: 2.1rem; color: #0b132b; font-weight: 800; margin-top: 5px;">
          4-Step IBA Shifting &amp; Bill Generation Process
        </h2>
      </div>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 20px;">
        <div style="background: #f8fafc; padding: 25px; border-radius: 12px; border-left: 4px solid #d32f2f;">
          <span style="color: #f59e0b; font-weight: 800; font-size: 0.85rem;">STEP 1</span>
          <h3 style="font-size: 1.15rem; color: #0b132b; margin: 8px 0 6px 0; font-weight: 700;">Pre-Move Quotation &amp; Approval</h3>
          <p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin: 0;">We survey your household goods in Jamshedpur and provide 3 comparative written quotations as per bank HR policy rules.</p>
        </div>
        <div style="background: #f8fafc; padding: 25px; border-radius: 12px; border-left: 4px solid #f59e0b;">
          <span style="color: #f59e0b; font-weight: 800; font-size: 0.85rem;">STEP 2</span>
          <h3 style="font-size: 1.15rem; color: #0b132b; margin: 8px 0 6px 0; font-weight: 700;">7-Layer Packing &amp; Loading</h3>
          <p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin: 0;">Our crew executes premium 7-layer packing, creates an itemized inventory manifest, and loads goods into closed container trucks.</p>
        </div>
        <div style="background: #f8fafc; padding: 25px; border-radius: 12px; border-left: 4px solid #d32f2f;">
          <span style="color: #f59e0b; font-weight: 800; font-size: 0.85rem;">STEP 3</span>
          <h3 style="font-size: 1.15rem; color: #0b132b; margin: 8px 0 6px 0; font-weight: 700;">5-Document Bill Set Issuance</h3>
          <p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin: 0;">We issue the original 5-document bill set (GST invoice, LR copy, inventory, money receipt, insurance policy) upon payment.</p>
        </div>
        <div style="background: #f8fafc; padding: 25px; border-radius: 12px; border-left: 4px solid #f59e0b;">
          <span style="color: #f59e0b; font-weight: 800; font-size: 0.85rem;">STEP 4</span>
          <h3 style="font-size: 1.15rem; color: #0b132b; margin: 8px 0 6px 0; font-weight: 700;">HR Claim Approval &amp; Reimbursement</h3>
          <p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin: 0;">Submit the original document set to your bank HR/accounts department for 100% fast-track claim settlement.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 4: Contextual Internal Links -->
  <section style="padding: 50px 0; background: #f8fafc;">
    <div class="container">
      <div style="text-align: center; max-width: 800px; margin: 0 auto 30px auto;">
        <h3 style="font-size: 1.8rem; color: #0b132b; font-weight: 800;">Explore Related <span style="color: #d32f2f;">IBA &amp; Shifting Services</span></h3>
      </div>
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); gap: 15px;">
        <a href="<?php echo SITE_URL; ?>packers-and-movers-in-jamshedpur" title="Movers in Jamshedpur" style="background: #fff; padding: 14px; border-radius: 6px; border: 1px solid #e2e8f0; color: #0b132b; text-decoration: none; font-weight: 600; text-align: center; display: block;"><i class="fas fa-map-marker-alt"></i> Movers in Jamshedpur</a>
        <a href="<?php echo SITE_URL; ?>packers-and-movers-bistupur-jamshedpur" title="Movers in Bistupur" style="background: #fff; padding: 14px; border-radius: 6px; border: 1px solid #e2e8f0; color: #0b132b; text-decoration: none; font-weight: 600; text-align: center; display: block;"><i class="fas fa-map-marker-alt"></i> Movers in Bistupur</a>
        <a href="<?php echo SITE_URL; ?>how-to-choose-best-packers-and-movers-in-jamshedpur" title="⭐ How to Choose Movers" style="background: #fff; padding: 14px; border-radius: 6px; border: 1px solid #e2e8f0; color: #0b132b; text-decoration: none; font-weight: 600; text-align: center; display: block;">⭐ How to Choose Movers</a>
        <a href="<?php echo SITE_URL; ?>how-to-avoid-fraud-packers-movers-jamshedpur" title="Avoid Shifting Fraud" style="background: #fff; padding: 14px; border-radius: 6px; border: 1px solid #e2e8f0; color: #0b132b; text-decoration: none; font-weight: 600; text-align: center; display: block;"><i class="fas fa-shield-alt"></i> Avoid Shifting Fraud</a>
        <a href="<?php echo SITE_URL; ?>packers-and-movers-jamshedpur-cost-guide" title="💡 Shifting Cost Guide" style="background: #fff; padding: 14px; border-radius: 6px; border: 1px solid #e2e8f0; color: #0b132b; text-decoration: none; font-weight: 600; text-align: center; display: block;">💡 Shifting Cost Guide</a>
        <a href="<?php echo SITE_URL; ?>office-relocation-guide-jamshedpur" title="💼 Office Relocation Guide" style="background: #fff; padding: 14px; border-radius: 6px; border: 1px solid #e2e8f0; color: #0b132b; text-decoration: none; font-weight: 600; text-align: center; display: block;">💼 Office Relocation Guide</a>
        <a href="<?php echo SITE_URL; ?>transit-insurance-guide-packers-movers-jamshedpur" title="Transit Insurance Guide" style="background: #fff; padding: 14px; border-radius: 6px; border: 1px solid #e2e8f0; color: #0b132b; text-decoration: none; font-weight: 600; text-align: center; display: block;"><i class="fas fa-shield-alt"></i> Transit Insurance Guide</a>
        <a href="<?php echo SITE_URL; ?>packers-and-movers-sakchi-jamshedpur" title="Movers in Sakchi" style="background: #fff; padding: 14px; border-radius: 6px; border: 1px solid #e2e8f0; color: #0b132b; text-decoration: none; font-weight: 600; text-align: center; display: block;"><i class="fas fa-map-marker-alt"></i> Movers in Sakchi</a>
      </div>
    </div>
  </section>

  <!-- Expanded 20-Item IBA Approved Movers FAQs -->
  <section style="padding: 50px 0; background: #ffffff;">
    <div class="container">
      <div style="text-align: center; max-width: 800px; margin: 0 auto 35px auto;">
        <h2 style="font-size: 2rem; color: #0b132b; font-weight: 800;">IBA Approved Movers FAQs</h2>
      </div>
      <div style="max-width: 850px; margin: 0 auto; display: flex; flex-direction: column; gap: 12px;">
        <div style="background: #f8fafc; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0;"><h4 style="color: #0b132b; font-weight: 700;">Q1: Will bank management accept your shifting bills in Jamshedpur?</h4><p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin-top: 6px;">Yes, 100% of our bills are formatted strictly as per IBA (Indian Banks' Association) guidelines and bank employee transfer claim rules.</p></div>
        <div style="background: #f8fafc; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0;"><h4 style="color: #0b132b; font-weight: 700;">Q2: What documents are included in the complete IBA billing package?</h4><p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin-top: 6px;">The package contains original GST tax invoice, Consignment Lorry Receipt (LR copy), itemized packing inventory list, money receipt, and transit insurance policy certificate.</p></div>
        <div style="background: #f8fafc; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0;"><h4 style="color: #0b132b; font-weight: 700;">Q3: How long does it take to issue the final IBA document set?</h4><p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin-top: 6px;">Original hard copies are handed over on moving day or dispatched via registered speed post within 24 hours of service completion.</p></div>
        <div style="background: #f8fafc; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0;"><h4 style="color: #0b132b; font-weight: 700;">Q4: What SAC codes are used on the GST invoice for bank claims?</h4><p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin-top: 6px;">We print SAC 996511 (road freight transport) and SAC 996729 (packing, loading, and cargo handling services) as required by GST tax laws.</p></div>
        <div style="background: #f8fafc; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0;"><h4 style="color: #0b132b; font-weight: 700;">Q5: Can I get 3 comparative quotations for bank HR approval?</h4><p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin-top: 6px;">Yes, we supply 3 formal comparative written quotations matching bank tender submission rules upon request.</p></div>
        <div style="background: #f8fafc; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0;"><h4 style="color: #0b132b; font-weight: 700;">Q6: Do you provide car and bike transport bills for bank officers?</h4><p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin-top: 6px;">Yes, separate vehicle consignment notes (LR) and GST invoices are issued for car and motorcycle shipping as per officer entitlement caps.</p></div>
        <div style="background: #f8fafc; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0;"><h4 style="color: #0b132b; font-weight: 700;">Q7: Which public sector banks accept Shree Ashirwad Packers bills in Jamshedpur?</h4><p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin-top: 6px;">Our bills are regularly accepted by State Bank of India (SBI), Punjab National Bank (PNB), Bank of Baroda, Canara Bank, Union Bank, Indian Bank, UCO Bank, and Central Bank of India.</p></div>
        <div style="background: #f8fafc; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0;"><h4 style="color: #0b132b; font-weight: 700;">Q8: Are defense personnel (Army / CRPF) relocation claims covered?</h4><p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin-top: 6px;">Yes, we provide official government TA/DA claim bill sets including weight slips, consignment notes, and GST receipts for defense and police personnel.</p></div>
        <div style="background: #f8fafc; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0;"><h4 style="color: #0b132b; font-weight: 700;">Q9: Are Tata Steel executive transfer bills supported?</h4><p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin-top: 6px;">Yes, we provide corporate relocation billing tailored for Tata Steel, Tata Motors, Tinplate, and Tata Power employee claim reimbursement portals.</p></div>
        <div style="background: #f8fafc; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0;"><h4 style="color: #0b132b; font-weight: 700;">Q10: What if the bank HR department requests a document correction?</h4><p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin-top: 6px;">We provide free 100% prompt document re-issuance and revision support until your claim is fully sanctioned by accounts.</p></div>
        <div style="background: #f8fafc; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0;"><h4 style="color: #0b132b; font-weight: 700;">Q11: Can bank managers verify GST numbers online before booking?</h4><p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin-top: 6px;">Yes, our GSTIN is 100% active and verifiable on the official government GST portal (services.gst.gov.in).</p></div>
        <div style="background: #f8fafc; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0;"><h4 style="color: #0b132b; font-weight: 700;">Q12: Is transit insurance mandatory for IBA claim approval?</h4><p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin-top: 6px;">Yes, most bank HR policies require an official transit insurance policy certificate matching the declared declared value of household goods.</p></div>
        <div style="background: #f8fafc; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0;"><h4 style="color: #0b132b; font-weight: 700;">Q13: Do you provide door-to-door service across all localities in Jamshedpur?</h4><p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin-top: 6px;">Yes, we serve Bistupur, Sakchi, Mango, Adityapur, Telco, Sonari, Kadma, Jugsalai, Golmuri, Baridih, and Sundarnagar with doorstep packing and delivery.</p></div>
        <div style="background: #f8fafc; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0;"><h4 style="color: #0b132b; font-weight: 700;">Q14: How are consignment LR numbers generated for tracking?</h4><p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin-top: 6px;">Each consignment note has a unique pre-printed serial number linked to your moving vehicle and GPS tracking system.</p></div>
        <div style="background: #f8fafc; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0;"><h4 style="color: #0b132b; font-weight: 700;">Q15: What is the GST rate applied on household shifting bills?</h4><p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin-top: 6px;">Standard GST is 18% (9% CGST + 9% SGST for intrastate or 18% IGST for interstate moves) with full ITC tax credit breakdown.</p></div>
        <div style="background: #f8fafc; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0;"><h4 style="color: #0b132b; font-weight: 700;">Q16: Can I get bills generated in my company name?</h4><p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin-top: 6px;">Yes, we can issue invoices B2B directly with your employer's corporate name and GSTIN number on request.</p></div>
        <div style="background: #f8fafc; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0;"><h4 style="color: #0b132b; font-weight: 700;">Q17: What if my transfer is canceled after booking?</h4><p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin-top: 6px;">We offer flexible booking date adjustments or full advance refund if canceled 24 hours prior to packing day.</p></div>
        <div style="background: #f8fafc; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0;"><h4 style="color: #0b132b; font-weight: 700;">Q18: Are storage and warehousing bills IBA compliant?</h4><p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin-top: 6px;">Yes, warehouse storage invoices are issued under SAC 996729 with monthly rent receipts and safety insurance certificates.</p></div>
        <div style="background: #f8fafc; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0;"><h4 style="color: #0b132b; font-weight: 700;">Q19: How to verify genuine IBA approved packers in Jamshedpur?</h4><p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin-top: 6px;">Check for active GSTIN registration, permanent office address in Jamshedpur, pre-printed LR stationery, and official bank branch references.</p></div>
        <div style="background: #f8fafc; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0;"><h4 style="color: #0b132b; font-weight: 700;">Q20: How do I request IBA approved shifting service in Jamshedpur?</h4><p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin-top: 6px;">Call <strong>+91 8409531615</strong> or message us on WhatsApp for instant IBA document generation and home survey booking.</p></div>
        <div style="background: #f8fafc; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0;"><h4 style="color: #0b132b; font-weight: 700;">Q21: Are weight slips required for defense TA/DA shifting claims?</h4><p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin-top: 6px;">Yes, for defense and government officers claiming per-quintal weight rate allowances, we supply official weighbridge gross and tare weight slips.</p></div>
        <div style="background: #f8fafc; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0;"><h4 style="color: #0b132b; font-weight: 700;">Q22: Can bank officers pay online and receive e-receipts for HR filing?</h4><p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin-top: 6px;">Yes, online bank transfer, UPI, or credit card payment e-receipts with Transaction ID and UTR details are generated instantly for digital HR claim portals.</p></div>
        <div style="background: #f8fafc; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0;"><h4 style="color: #0b132b; font-weight: 700;">Q23: How does Shree Ashirwad Packers handle claim queries from bank auditors?</h4><p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin-top: 6px;">Our accounts team directly handles audit verification calls or email queries from bank regional HR offices, confirming bill authenticity and vehicle LR records.</p></div>
        <div style="background: #f8fafc; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0;"><h4 style="color: #0b132b; font-weight: 700;">Q24: What is the maximum luggage entitlement weight covered under bank IBA bills?</h4><p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin-top: 6px;">Entitlements depend on officer grade (e.g., Scale I to Scale VII), typically ranging from 3,000 kg to 6,000 kg. Our LR notes reflect your exact allowable limit.</p></div>
      </div>
    </div>
  </section>

  <!-- Section 6: CTA Banner -->
  <section class="cta-banner-section" style="padding: 50px 0; background: linear-gradient(135deg, #0b132b 0%, #1c2541 100%); color: #ffffff;">
    <div class="container">
      <div style="text-align: center; max-width: 800px; margin: 0 auto;">
        <h2 style="font-size: 2.1rem; font-weight: 800; margin-bottom: 15px;">Book IBA Approved Movers in Jamshedpur Today</h2>
        <p style="color: #cbd5e1; font-size: 0.98rem; margin-bottom: 25px;">100% valid GST bills, 5-document claim set, and guaranteed HR approval support.</p>
        <div style="display: flex; gap: 15px; justify-content: center; flex-wrap: wrap;">
          <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call IBA Desk:" style="padding: 14px 32px; background: linear-gradient(135deg, #d32f2f 0%, #f59e0b 100%); color: #fff; border-radius: 50px; font-weight: 700; text-decoration: none;"><i class="fas fa-phone-alt"></i> Call IBA Desk: <?php echo SITE_PHONE; ?></a>
          <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20need%20IBA%20approved%20shifting%20quote%20in%20Jamshedpur." title="WhatsApp Quote" target="_blank" style="padding: 14px 32px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #fff; border-radius: 50px; font-weight: 700; text-decoration: none;"><i class="fab fa-whatsapp"></i> WhatsApp Quote</a>
        </div>
      </div>
    </div>
  </section>

</main>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
