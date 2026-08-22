<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "IBA Approved Movers and Packers in Patna | Official Relocation Billing";
$page_desc = "Looking for IBA approved movers and packers in Patna? Shree Ashirwad Packers offers verified bank and government employee relocation, GST invoices, and IBA consignment notes.";
$page_keywords = "iba approved movers and packers in patna, iba movers patna, bank shifting bill patna, official relocation billing patna, iba consignment note patna";
$page_city = "Patna, Bihar";

$faq_list = [
    [
        'q' => 'What is an IBA approved movers and packers service in Patna?',
        'a' => 'It is an official relocation service operating under Indian Banks’ Association (IBA) compliance guidelines, providing valid bills for 100% employer claim reimbursement.'
    ],
    [
        'q' => 'Which documents are provided for bank and government relocation claims?',
        'a' => 'We supply serial-numbered IBA consignment notes (LR copy), GST tax invoices, money receipts, itemized goods inventory lists, and transit insurance certificates.'
    ],
    [
        'q' => 'Are your relocation bills accepted by Public Sector Banks in Patna?',
        'a' => 'Yes, our bills are 100% accepted across SBI, PNB, Bank of Baroda, Canara Bank, Union Bank, Defense forces, Railways, and Central Govt departments.'
    ],
    [
        'q' => 'What are the charges for IBA approved shifting in Patna?',
        'a' => 'Local 1BHK moves start from ₹4,500, 2BHK moves range from ₹6,500 to ₹9,500, and 3BHK moves range from ₹9,500 to ₹14,500, following official distance tariff slabs.'
    ],
    [
        'q' => 'Which localities in Patna receive IBA doorstep relocation support?',
        'a' => 'Doorstep services are active across Boring Road, Kankarbagh, Danapur, Bailey Road, Patliputra Colony, Ashiana Nagar, Exhibition Road, and Bihta.'
    ],
    [
        'q' => 'Do you provide transit insurance for IBA household relocation?',
        'a' => 'Yes, comprehensive marine/cargo transit insurance policies covering declared goods value are attached to every official document set.'
    ],
    [
        'q' => 'Can defense and railway employees claim relocation expenses with your bills?',
        'a' => 'Yes, defense and railway personnel receive serial-numbered consignment bills conforming to Defense Travel/Relocation Rules.'
    ],
    [
        'q' => 'How are cars and bikes documented under IBA vehicle transport?',
        'a' => 'Vehicles are cataloged on dedicated vehicle consignment notes with chassis number, engine number, and pre-loading inspection photos.'
    ],
    [
        'q' => 'How long does intercity IBA shifting take from Patna?',
        'a' => 'Transit to Ranchi or Kolkata takes 24–48 hours, while long-distance transport to Delhi, Mumbai, or Bangalore takes 3 to 5 days.'
    ],
    [
        'q' => 'How can I request an official IBA quotation for my employer?',
        'a' => 'Call +91 8409531615 or submit your request via WhatsApp for an immediate official IBA estimate set.'
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
          <span class="section-tag" style="background: rgba(16, 185, 129, 0.15); color: #10b981; border: 1px solid rgba(16, 185, 129, 0.4); padding: 6px 16px; border-radius: 20px; font-size: 0.85rem; font-weight: 700; text-transform: uppercase; display: inline-block; margin-bottom: 15px;">
            IBA APPROVED MOVERS PATNA
          </span>
          <h1 style="font-size: 2.7rem; font-weight: 800; line-height: 1.2; margin-bottom: 20px; color: #ffffff;">
            IBA Approved <span style="color: #10b981;">Movers and Packers in Patna</span>
          </h1>
          <p style="font-size: 1.12rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 25px;">
            Shree Ashirwad Packers and Movers provides official IBA-compliant relocation services in Patna. Enjoy 100% genuine consignment notes, GST invoices, insurance coverage, and guaranteed employer claim approval.
          </p>

          <div style="display: flex; gap: 15px; flex-wrap: wrap; margin-bottom: 30px;">
            <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Now" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
              <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call Now: <?php echo SITE_PHONE; ?>
            </a>
            <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20an%20IBA%20approved%20movers%20quote%20for%20Patna." title="Chat on WhatsApp" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
              <i class="fab fa-whatsapp" style="margin-right: 8px;"></i> Chat on WhatsApp
            </a>
          </div>

          <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 15px; border-top: 1px solid rgba(255, 255, 255, 0.1); padding-top: 20px;">
            <div>
              <h4 style="color: #10b981; font-size: 1.3rem; margin-bottom: 2px;">100% Claim</h4>
              <p style="font-size: 0.85rem; color: #94a3b8; margin: 0;">Reimbursement Ready</p>
            </div>
            <div>
              <h4 style="color: #10b981; font-size: 1.3rem; margin-bottom: 2px;">IBA Format</h4>
              <p style="font-size: 0.85rem; color: #94a3b8; margin: 0;">Consignment Bills</p>
            </div>
            <div>
              <h4 style="color: #10b981; font-size: 1.3rem; margin-bottom: 2px;">GST Invoice</h4>
              <p style="font-size: 0.85rem; color: #94a3b8; margin: 0;">Stamped Receipts</p>
            </div>
          </div>
        </div>

        <!-- Hero Form Column -->
        <div class="hero-form-wrapper" style="background: rgba(255, 255, 255, 0.05); backdrop-filter: blur(10px); border: 1px solid rgba(255, 255, 255, 0.1); padding: 30px; border-radius: 16px;">
          <h3 style="font-size: 1.4rem; color: #ffffff; margin-bottom: 20px; text-align: center;">Get Official IBA Estimate</h3>
          <form id="heroLeadForm" onsubmit="sendHeroWhatsAppLead(event)" style="display: flex; flex-direction: column; gap: 15px;">
            <input type="text" id="hero_name" placeholder="Your Full Name *" required style="width: 100%; padding: 12px 15px; border-radius: 8px; border: 1px solid rgba(255, 255, 255, 0.2); background: rgba(0, 0, 0, 0.3); color: #ffffff; font-size: 0.95rem;">
            <input type="tel" id="hero_phone" placeholder="Mobile / WhatsApp Number *" required pattern="[0-9]{10}" style="width: 100%; padding: 12px 15px; border-radius: 8px; border: 1px solid rgba(255, 255, 255, 0.2); background: rgba(0, 0, 0, 0.3); color: #ffffff; font-size: 0.95rem;">
            <input type="text" id="hero_from" placeholder="Pickup Locality in Patna *" required style="width: 100%; padding: 12px 15px; border-radius: 8px; border: 1px solid rgba(255, 255, 255, 0.2); background: rgba(0, 0, 0, 0.3); color: #ffffff; font-size: 0.95rem;">
            <input type="text" id="hero_to" placeholder="Destination City / Locality *" required style="width: 100%; padding: 12px 15px; border-radius: 8px; border: 1px solid rgba(255, 255, 255, 0.2); background: rgba(0, 0, 0, 0.3); color: #ffffff; font-size: 0.95rem;">
            <select id="hero_service" required style="width: 100%; padding: 12px 15px; border-radius: 8px; border: 1px solid rgba(255, 255, 255, 0.2); background: #1e293b; color: #ffffff; font-size: 0.95rem;">
              <option value="IBA Bank Employee Shifting">IBA Bank Employee Shifting</option>
              <option value="IBA Defense Relocation">IBA Defense Relocation</option>
              <option value="IBA Govt Officer Relocation">IBA Govt Officer Relocation</option>
              <option value="IBA Vehicle Transport Bill">IBA Vehicle Transport Bill</option>
            </select>
            <button type="submit" style="width: 100%; padding: 14px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border: none; border-radius: 8px; font-weight: 700; font-size: 1rem; cursor: pointer; transition: all 0.3s ease;">
              Get Official IBA Quote on WhatsApp <i class="fab fa-whatsapp" style="margin-left: 6px;"></i>
            </button>
          </form>
        </div>

      </div>
    </div>
  </section>

  <!-- IBA Guide Section -->
  <section class="iba-guide" style="padding: 60px 0; background: #f8fafc;">
    <div class="container">
      <div style="max-width: 900px; margin: 0 auto; background: #ffffff; padding: 40px; border-radius: 12px; box-shadow: 0 4px 20px rgba(0,0,0,0.05);">
        
        <h2 style="font-size: 2rem; color: #0f172a; margin-bottom: 20px; font-weight: 800;">
          Verified IBA Approved Relocation Services in Patna
        </h2>
        
        <p style="font-size: 1.05rem; line-height: 1.8; color: #334155; margin-bottom: 20px;">
          Bank managers, public sector executives, and government employees in <strong>Patna (Bihar)</strong> require 100% authentic relocation documentation. Shree Ashirwad Packers and Movers serves all residential hubs in Patna including <strong>Boring Road, Kankarbagh, Danapur, Bailey Road, Patliputra Colony, Ashiana Nagar, Exhibition Road, and Bihta</strong>.
        </p>

        <h3 style="font-size: 1.4rem; color: #1e293b; margin: 25px 0 15px; font-weight: 700;">
          Why Employers Accept Our IBA Documents
        </h3>
        
        <ul style="line-height: 1.8; color: #334155; margin-bottom: 25px; padding-left: 20px;">
          <li><strong>Valid Registration Credentials:</strong> Active GSTIN and company registration details stamped on all documents.</li>
          <li><strong>Standardized LR Consignment Copies:</strong> Printed serial-numbered consignment notes matching audit rules.</li>
          <li><strong>Itemized Bill Breakdown:</strong> Clear split of packing materials, loading labor, freight, and GST tax.</li>
          <li><strong>Original Payment Receipts:</strong> Money receipts generated for accounts reimbursement audit approval.</li>
        </ul>

      </div>
    </div>
  </section>

  <!-- Rate Matrix Table -->
  <section class="rate-matrix" style="padding: 60px 0; background: #ffffff;">
    <div class="container">
      <div style="text-align: center; max-width: 700px; margin: 0 auto 40px;">
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #0f172a;">IBA Approved Tariff Rate Matrix (Patna)</h2>
        <p style="color: #64748b; font-size: 1.05rem;">Official tariff rates for government and bank employee relocation in Patna.</p>
      </div>

      <div style="max-width: 950px; margin: 0 auto; overflow-x: auto;">
        <table style="width: 100%; border-collapse: collapse; background: #ffffff; border-radius: 8px; overflow: hidden; box-shadow: 0 4px 15px rgba(0,0,0,0.06);">
          <thead>
            <tr style="background: #0f172a; color: #ffffff; text-align: left;">
              <th style="padding: 16px 20px; font-size: 0.95rem;">Official Relocation Category</th>
              <th style="padding: 16px 20px; font-size: 0.95rem;">Local Patna Move</th>
              <th style="padding: 16px 20px; font-size: 0.95rem;">Intercity (Up to 500 km)</th>
              <th style="padding: 16px 20px; font-size: 0.95rem;">Interstate IBA Move</th>
            </tr>
          </thead>
          <tbody>
            <tr style="border-bottom: 1px solid #e2e8f0;">
              <td style="padding: 16px 20px; font-weight: 600; color: #1e293b;">1 BHK IBA Relocation</td>
              <td style="padding: 16px 20px; color: #059669; font-weight: 700;">₹4,500 - ₹6,800</td>
              <td style="padding: 16px 20px; color: #3b82f6; font-weight: 700;">₹9,500 - ₹15,000</td>
              <td style="padding: 16px 20px; color: #6366f1; font-weight: 700;">₹14,500 - ₹21,000</td>
            </tr>
            <tr style="border-bottom: 1px solid #e2e8f0; background: #f8fafc;">
              <td style="padding: 16px 20px; font-weight: 600; color: #1e293b;">2 BHK IBA Relocation</td>
              <td style="padding: 16px 20px; color: #059669; font-weight: 700;">₹6,500 - ₹9,500</td>
              <td style="padding: 16px 20px; color: #3b82f6; font-weight: 700;">₹14,000 - ₹22,000</td>
              <td style="padding: 16px 20px; color: #6366f1; font-weight: 700;">₹21,000 - ₹31,000</td>
            </tr>
            <tr style="border-bottom: 1px solid #e2e8f0;">
              <td style="padding: 16px 20px; font-weight: 600; color: #1e293b;">3 BHK IBA Relocation</td>
              <td style="padding: 16px 20px; color: #059669; font-weight: 700;">₹9,500 - ₹14,500</td>
              <td style="padding: 16px 20px; color: #3b82f6; font-weight: 700;">₹21,000 - ₹32,000</td>
              <td style="padding: 16px 20px; color: #6366f1; font-weight: 700;">₹30,000 - ₹46,000</td>
            </tr>
            <tr style="border-bottom: 1px solid #e2e8f0; background: #f8fafc;">
              <td style="padding: 16px 20px; font-weight: 600; color: #1e293b;">IBA Bike Transport Bill</td>
              <td style="padding: 16px 20px; color: #059669; font-weight: 700;">₹2,200 - ₹3,500</td>
              <td style="padding: 16px 20px; color: #3b82f6; font-weight: 700;">₹3,800 - ₹5,800</td>
              <td style="padding: 16px 20px; color: #6366f1; font-weight: 700;">₹5,500 - ₹8,500</td>
            </tr>
            <tr>
              <td style="padding: 16px 20px; font-weight: 600; color: #1e293b;">IBA Car Transport Bill</td>
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
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #0f172a;">Frequently Asked Questions (IBA Movers Patna)</h2>
        <p style="color: #64748b; font-size: 1.05rem;">Common questions about official IBA relocation documents and claims in Patna.</p>
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
  "description": "IBA approved movers and packers in Patna providing genuine relocation bills, consignment notes, and GST invoices for bank and govt employee claims.",
  "url": "<?php echo SITE_URL; ?>/iba-approved-movers-and-packers-in-patna.php",
  "telephone": "<?php echo SITE_PHONE_RAW; ?>",
  "address": {
    "@type": "PostalAddress",
    "addressLocality": "Patna",
    "addressRegion": "Bihar",
    "addressCountry": "IN"
  },
  "areaServed": "Patna, Bihar",
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
    "I would like to request an *Official IBA Movers Quote* for Patna:%0A" +
    "*Name:* " + encodeURIComponent(name) + "%0A" +
    "*Phone:* " + encodeURIComponent(phone) + "%0A" +
    "*Pickup Locality:* " + encodeURIComponent(from) + "%0A" +
    "*Destination:* " + encodeURIComponent(to) + "%0A" +
    "*Service Type:* " + encodeURIComponent(service) + "%0A%0A" +
    "Please send me an official IBA estimate set on WhatsApp.";

  window.open("https://wa.me/918409531615?text=" + message, "_blank");
}
</script>

<?php 
require_once __DIR__ . '/../includes/footer.php'; 
?>
