<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "IBA Approved Packers and Movers in Ranchi | Official Government & Bank Billing";
$page_desc = "Hire IBA approved packers and movers in Ranchi. Shree Ashirwad Packers offers verified bank relocation bills, 100% claimable GST invoices, 7-layer safety packaging, and transit insurance.";
$page_keywords = "iba approved packers and movers in ranchi, official iba bill movers ranchi, bank claim shifting ranchi, govt employee relocation ranchi, verified iba packers ranchi";
$page_city = "Ranchi, Jharkhand";

$faq_list = [
    [
        'q' => 'What makes Shree Ashirwad an IBA approved packers and movers in Ranchi?',
        'a' => 'We issue 100% genuine IBA-compliant bills, consignment copies (LR copies), money receipts, and itemized inventory lists accepted by all public/private banks, PSUs, and defense organizations.'
    ],
    [
        'q' => 'Which documents are provided for bank and government relocation claim reimbursement in Ranchi?',
        'a' => 'We supply 1. IBA Consignment Note (LR Copy), 2. Official GST Tax Invoice, 3. Itemized Goods Packing List, 4. Stamped Cash/Bank Payment Receipt, and 5. Transit Insurance Policy.'
    ],
    [
        'q' => 'Are IBA approved bills accepted by SBI, Bank of Baroda, PNB, and Central Govt departments?',
        'a' => 'Yes, our documentation is 100% audit-compliant and universally accepted across all nationalized banks, state government departments, defense forces, and corporate organizations.'
    ],
    [
        'q' => 'What are the charges for IBA approved home shifting in Ranchi?',
        'a' => 'Local 1BHK shifting in Ranchi starts from ₹4,500, 2BHK ranges from ₹6,500 to ₹9,500, and 3BHK household relocation ranges from ₹9,500 to ₹14,500 with full IBA documentation.'
    ],
    [
        'q' => 'Do you provide IBA approved car and bike transport bills from Ranchi?',
        'a' => 'Yes, we provide official IBA vehicle consignment notes and car condition reports for claim approval.'
    ],
    [
        'q' => 'Which residential areas in Ranchi receive IBA doorstep packing services?',
        'a' => 'Our doorstep packing teams cover Lalpur, Harmu, Kanke Road, Main Road, Ratu Road, Bariatu, Doranda, Dhurwa, Hinoo, and Namkum.'
    ],
    [
        'q' => 'Is transit insurance included with IBA approved relocation packages?',
        'a' => 'Yes, comprehensive marine/transit insurance covering full declared goods value is attached to the IBA bill package.'
    ],
    [
        'q' => 'How does 7-layer safety packaging protect high-value electronic and glass items?',
        'a' => 'Items are packed using multi-layer bubble film, 5-ply corrugated sheets, foam edge blocks, stretch wrap, and custom wooden crating.'
    ],
    [
        'q' => 'Can I get a pre-move physical inspection for my IBA claim in Ranchi?',
        'a' => 'Yes, our supervisor visits your address in Ranchi to conduct a free survey and provide a binding written estimate on company letterhead.'
    ],
    [
        'q' => 'How can I get an instant IBA quotation for my transfer in Ranchi?',
        'a' => 'Call +91 8409531615 or submit your transfer details via WhatsApp for an immediate itemized cost estimate.'
    ]
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
        <span class="breadcrumb-item active"><?php echo htmlspecialchars($page_title); ?></span>
      </div>
    </div>
  </div>

  <!-- Hero Section with Lead Form -->
  <section class="hero-section" style="background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%); padding: 60px 0; color: #ffffff;">
    <div class="container">
      <div class="hero-grid" style="display: grid; grid-template-columns: 1.2fr 0.8fr; gap: 40px; align-items: center;">
        
        <!-- Hero Text Column -->
        <div class="hero-text">
          <span class="section-tag" style="background: rgba(245, 158, 11, 0.15); color: #f59e0b; border: 1px solid rgba(245, 158, 11, 0.4); padding: 6px 16px; border-radius: 20px; font-size: 0.85rem; font-weight: 700; text-transform: uppercase; display: inline-block; margin-bottom: 15px;">
            OFFICIAL IBA COMPLIANCE RANCHI
          </span>
          <h1 style="font-size: 2.7rem; font-weight: 800; line-height: 1.2; margin-bottom: 20px; color: #ffffff;">
            Official <span style="color: #f59e0b;">IBA Approved Packers and Movers in Ranchi</span>
          </h1>
          <p style="font-size: 1.12rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 25px;">
            Shree Ashirwad Packers and Movers provides 100% claimable IBA-compliant relocation documentation in Ranchi. Get official LR copies, GST invoices, transit insurance, and 7-layer safety packing for bank, PSU, and government employee transfers.
          </p>

          <div style="display: flex; gap: 15px; flex-wrap: wrap; margin-bottom: 30px;">
            <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Now" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
              <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call Now: <?php echo SITE_PHONE; ?>
            </a>
            <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20an%20IBA%20approved%20shifting%20quote%20for%20Ranchi." title="Chat on WhatsApp" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
              <i class="fab fa-whatsapp" style="margin-right: 8px;"></i> Chat on WhatsApp
            </a>
          </div>

          <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 15px; border-top: 1px solid rgba(255, 255, 255, 0.1); padding-top: 20px;">
            <div>
              <h4 style="color: #f59e0b; font-size: 1.3rem; margin-bottom: 2px;">100% Claim</h4>
              <p style="font-size: 0.85rem; color: #94a3b8; margin: 0;">Bank & Govt Approved</p>
            </div>
            <div>
              <h4 style="color: #f59e0b; font-size: 1.3rem; margin-bottom: 2px;">7-Layer</h4>
              <p style="font-size: 0.85rem; color: #94a3b8; margin: 0;">Safety Wrap Spec</p>
            </div>
            <div>
              <h4 style="color: #f59e0b; font-size: 1.3rem; margin-bottom: 2px;">IBA GST</h4>
              <p style="font-size: 0.85rem; color: #94a3b8; margin: 0;">Official LR Copy</p>
            </div>
          </div>
        </div>

        <!-- Hero Form Column -->
        <div class="hero-form-wrapper" style="background: rgba(255, 255, 255, 0.05); backdrop-filter: blur(10px); border: 1px solid rgba(255, 255, 255, 0.1); padding: 30px; border-radius: 16px;">
          <h3 style="font-size: 1.4rem; color: #ffffff; margin-bottom: 20px; text-align: center;">Get IBA Relocation Quote</h3>
          <form id="heroLeadForm" onsubmit="sendHeroWhatsAppLead(event)" style="display: flex; flex-direction: column; gap: 15px;">
            <input type="text" id="hero_name" placeholder="Your Full Name *" required style="width: 100%; padding: 12px 15px; border-radius: 8px; border: 1px solid rgba(255, 255, 255, 0.2); background: rgba(0, 0, 0, 0.3); color: #ffffff; font-size: 0.95rem;">
            <input type="tel" id="hero_phone" placeholder="Mobile / WhatsApp Number *" required pattern="[0-9]{10}" style="width: 100%; padding: 12px 15px; border-radius: 8px; border: 1px solid rgba(255, 255, 255, 0.2); background: rgba(0, 0, 0, 0.3); color: #ffffff; font-size: 0.95rem;">
            <input type="text" id="hero_from" placeholder="Pickup Address in Ranchi *" required style="width: 100%; padding: 12px 15px; border-radius: 8px; border: 1px solid rgba(255, 255, 255, 0.2); background: rgba(0, 0, 0, 0.3); color: #ffffff; font-size: 0.95rem;">
            <input type="text" id="hero_to" placeholder="Destination City *" required style="width: 100%; padding: 12px 15px; border-radius: 8px; border: 1px solid rgba(255, 255, 255, 0.2); background: rgba(0, 0, 0, 0.3); color: #ffffff; font-size: 0.95rem;">
            <select id="hero_service" required style="width: 100%; padding: 12px 15px; border-radius: 8px; border: 1px solid rgba(255, 255, 255, 0.2); background: #1e293b; color: #ffffff; font-size: 0.95rem;">
              <option value="IBA Bank Employee Shifting">IBA Bank Employee Shifting</option>
              <option value="IBA Govt / PSU Transfer">IBA Govt / PSU Transfer</option>
              <option value="IBA Defense Relocation">IBA Defense Relocation</option>
              <option value="IBA Corporate Transfer">IBA Corporate Transfer</option>
            </select>
            <button type="submit" style="width: 100%; padding: 14px; background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%); color: #ffffff; border: none; border-radius: 8px; font-weight: 700; font-size: 1rem; cursor: pointer; transition: all 0.3s ease;">
              Get IBA Quote on WhatsApp <i class="fab fa-whatsapp" style="margin-left: 6px;"></i>
            </button>
          </form>
        </div>

      </div>
    </div>
  </section>

  <!-- IBA Compliance Guide Section -->
  <section class="iba-guide" style="padding: 60px 0; background: #f8fafc;">
    <div class="container">
      <div style="max-width: 900px; margin: 0 auto; background: #ffffff; padding: 40px; border-radius: 12px; box-shadow: 0 4px 20px rgba(0,0,0,0.05);">
        
        <h2 style="font-size: 2rem; color: #0f172a; margin-bottom: 20px; font-weight: 800;">
          Official IBA Relocation Documentation & Claims in Ranchi
        </h2>
        
        <p style="font-size: 1.05rem; line-height: 1.8; color: #334155; margin-bottom: 20px;">
          For bank officials, central/state government personnel, and PSU officers transferred to or from <strong>Ranchi (Jharkhand)</strong>, claim reimbursement requires 100% audit-compliant documentation. Shree Ashirwad Packers serves all Ranchi residential zones including <strong>Lalpur, Harmu, Kanke Road, Main Road, Ratu Road, Bariatu, Doranda, Dhurwa, Hinoo, and Namkum</strong>.
        </p>

        <h3 style="font-size: 1.4rem; color: #1e293b; margin: 25px 0 15px; font-weight: 700;">
          Complete 5-Piece Claim Documentation Kit
        </h3>
        
        <ol style="line-height: 1.8; color: #334155; margin-bottom: 25px; padding-left: 20px;">
          <li><strong>IBA Format Consignment Note (LR Copy):</strong> Official consignment tracking slip with vehicle registration and weight details.</li>
          <li><strong>GST Tax Invoice:</strong> Verified invoice displaying company GSTIN and HSN code classification.</li>
          <li><strong>Itemized Goods Inventory Sheet:</strong> Numbered item list signed by client and supervisor.</li>
          <li><strong>Stamped Payment Cash/Bank Receipt:</strong> Official payment voucher matching full bill amount.</li>
          <li><strong>Cargo Transit Insurance Policy:</strong> Marine policy copy covering declared goods against transit risks.</li>
        </ol>

      </div>
    </div>
  </section>

  <!-- Rate Matrix Table -->
  <section class="rate-matrix" style="padding: 60px 0; background: #ffffff;">
    <div class="container">
      <div style="text-align: center; max-width: 700px; margin: 0 auto 40px;">
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #0f172a;">IBA Relocation Rate Matrix (Ranchi)</h2>
        <p style="color: #64748b; font-size: 1.05rem;">Government and bank approved tariff rates for Ranchi relocation.</p>
      </div>

      <div style="max-width: 950px; margin: 0 auto; overflow-x: auto;">
        <table style="width: 100%; border-collapse: collapse; background: #ffffff; border-radius: 8px; overflow: hidden; box-shadow: 0 4px 15px rgba(0,0,0,0.06);">
          <thead>
            <tr style="background: #0f172a; color: #ffffff; text-align: left;">
              <th style="padding: 16px 20px; font-size: 0.95rem;">Shifting Category</th>
              <th style="padding: 16px 20px; font-size: 0.95rem;">Local Ranchi Move</th>
              <th style="padding: 16px 20px; font-size: 0.95rem;">Intercity (Up to 500 km)</th>
              <th style="padding: 16px 20px; font-size: 0.95rem;">Interstate Relocation</th>
            </tr>
          </thead>
          <tbody>
            <tr style="border-bottom: 1px solid #e2e8f0;">
              <td style="padding: 16px 20px; font-weight: 600; color: #1e293b;">1 BHK Household Move</td>
              <td style="padding: 16px 20px; color: #059669; font-weight: 700;">₹4,500 - ₹6,800</td>
              <td style="padding: 16px 20px; color: #3b82f6; font-weight: 700;">₹9,500 - ₹15,000</td>
              <td style="padding: 16px 20px; color: #6366f1; font-weight: 700;">₹14,500 - ₹21,000</td>
            </tr>
            <tr style="border-bottom: 1px solid #e2e8f0; background: #f8fafc;">
              <td style="padding: 16px 20px; font-weight: 600; color: #1e293b;">2 BHK Household Move</td>
              <td style="padding: 16px 20px; color: #059669; font-weight: 700;">₹6,500 - ₹9,500</td>
              <td style="padding: 16px 20px; color: #3b82f6; font-weight: 700;">₹14,000 - ₹22,000</td>
              <td style="padding: 16px 20px; color: #6366f1; font-weight: 700;">₹21,000 - ₹31,000</td>
            </tr>
            <tr style="border-bottom: 1px solid #e2e8f0;">
              <td style="padding: 16px 20px; font-weight: 600; color: #1e293b;">3 BHK Household Move</td>
              <td style="padding: 16px 20px; color: #059669; font-weight: 700;">₹9,500 - ₹14,500</td>
              <td style="padding: 16px 20px; color: #3b82f6; font-weight: 700;">₹21,000 - ₹32,000</td>
              <td style="padding: 16px 20px; color: #6366f1; font-weight: 700;">₹30,000 - ₹46,000</td>
            </tr>
            <tr style="border-bottom: 1px solid #e2e8f0; background: #f8fafc;">
              <td style="padding: 16px 20px; font-weight: 600; color: #1e293b;">Bike Crate Shipping</td>
              <td style="padding: 16px 20px; color: #059669; font-weight: 700;">₹2,200 - ₹3,500</td>
              <td style="padding: 16px 20px; color: #3b82f6; font-weight: 700;">₹3,800 - ₹5,800</td>
              <td style="padding: 16px 20px; color: #6366f1; font-weight: 700;">₹5,500 - ₹8,500</td>
            </tr>
            <tr>
              <td style="padding: 16px 20px; font-weight: 600; color: #1e293b;">Enclosed Car Transport</td>
              <td style="padding: 16px 20px; color: #059669; font-weight: 700;">₹5,000 - ₹7,500</td>
              <td style="padding: 16px 20px; color: #3b82f6; font-weight: 700;">₹9,500 - ₹15,500</td>
              <td style="padding: 16px 20px; color: #6366f1; font-weight: 700;">₹14,500 - ₹24,000</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </section>

  <!-- FAQ Section with Schema Support -->
  <section class="faq-section" style="padding: 60px 0; background: #f8fafc;">
    <div class="container">
      <div style="text-align: center; max-width: 700px; margin: 0 auto 40px;">
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #0f172a;">Frequently Asked Questions (IBA Approved Ranchi)</h2>
        <p style="color: #64748b; font-size: 1.05rem;">Questions about IBA relocation claims and government transfer billing in Ranchi.</p>
      </div>

      <div style="max-width: 850px; margin: 0 auto; display: flex; flex-direction: column; gap: 15px;">
        <?php foreach ($faq_list as $index => $faq): ?>
          <div style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 8px; padding: 20px; box-shadow: 0 2px 5px rgba(0,0,0,0.02);">
            <h4 style="font-size: 1.1rem; color: #0f172a; margin-bottom: 10px; font-weight: 700;">
              <?php echo ($index + 1) . '. ' . htmlspecialchars($faq['q']); ?>
            </h4>
            <p style="font-size: 0.98rem; color: #475569; line-height: 1.7; margin: 0;">
              <?php echo htmlspecialchars($faq['a']); ?>
            </p>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

</main>

<!-- Inline JSON-LD Structured Data Schema -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    <?php 
    $schema_faqs = [];
    foreach ($faq_list as $faq) {
        $schema_faqs[] = '{
          "@type": "Question",
          "name": ' . json_encode($faq['q']) . ',
          "acceptedAnswer": {
            "@type": "Answer",
            "text": ' . json_encode($faq['a']) . '
          }
        }';
    }
    echo implode(',', $schema_faqs);
    ?>
  ]
}
</script>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "MovingCompany",
  "name": "Shree Ashirwad Packers and Movers",
  "description": "IBA approved packers and movers in Ranchi providing official bank claim bills, GST invoices, 7-layer packaging, and transit insurance.",
  "url": "<?php echo SITE_URL; ?>/iba-approved-packers-and-movers-in-ranchi.php",
  "telephone": "<?php echo SITE_PHONE_RAW; ?>",
  "address": {
    "@type": "PostalAddress",
    "addressLocality": "Ranchi",
    "addressRegion": "Jharkhand",
    "addressCountry": "IN"
  },
  "areaServed": "Ranchi, Jharkhand",
  "priceRange": "₹4500 - ₹46000"
}
</script>

<!-- Custom WhatsApp Lead Handler Script -->
<script>
function sendHeroWhatsAppLead(event) {
  event.preventDefault();
  
  var name = document.getElementById('hero_name').value.trim();
  var phone = document.getElementById('hero_phone').value.trim();
  var from = document.getElementById('hero_from').value.trim();
  var to = document.getElementById('hero_to').value.trim();
  var service = document.getElementById('hero_service').value;

  var message = "Hello Shree Ashirwad Packers,%0A%0A" +
    "I would like to request an *IBA Approved Relocation Quote* for Ranchi:%0A" +
    "*Name:* " + encodeURIComponent(name) + "%0A" +
    "*Phone:* " + encodeURIComponent(phone) + "%0A" +
    "*Pickup Address:* " + encodeURIComponent(from) + "%0A" +
    "*Destination City:* " + encodeURIComponent(to) + "%0A" +
    "*Service Type:* " + encodeURIComponent(service) + "%0A%0A" +
    "Please send me an official IBA claimable estimate on WhatsApp.";

  window.open("https://wa.me/918409531615?text=" + message, "_blank");
}
</script>

<?php 
require_once __DIR__ . '/../includes/footer.php'; 
?>
