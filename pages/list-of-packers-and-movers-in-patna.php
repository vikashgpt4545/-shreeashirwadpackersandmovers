<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "List of Packers and Movers in Patna | Top Verified Moving Directory";
$page_desc = "Looking for a verified list of packers and movers in Patna? Compare top licensed moving companies, IBA-approved GST billers, pricing charts, and safety standards.";
$page_keywords = "list of packers and movers in patna, directory packers movers patna, verified movers list patna, top shifting companies patna, IBA bill movers list patna";
$page_city = "Patna, Bihar";

$faq_list = [
    [
        'q' => 'How can I verify a company from the list of packers and movers in Patna?',
        'a' => 'Check for a valid GSTIN registration, physical office location in Patna, IBA approval credentials, active transport licenses, and written binding estimates.'
    ],
    [
        'q' => 'What is the average market price for hiring packers and movers from the Patna directory?',
        'a' => 'Standard market rates in Patna start from ₹4,200 to ₹6,500 for 1BHK moves, ₹6,500 to ₹9,500 for 2BHK moves, and ₹9,500 to ₹14,500 for 3BHK household shifting.'
    ],
    [
        'q' => 'Why is Shree Ashirwad rated #1 on the list of packers and movers in Patna?',
        'a' => 'Shree Ashirwad leads the directory with 7-layer safety packaging, 100% genuine IBA GST bill compliance, own container vehicle fleet, and zero-scratch transit track record.'
    ],
    [
        'q' => 'Which localities in Patna are covered by top listed movers?',
        'a' => 'Doorstep shifting is available across Boring Road, Kankarbagh, Danapur, Bailey Road, Patliputra Colony, Ashiana Nagar, Exhibition Road, Rajendra Nagar, and Bihta.'
    ],
    [
        'q' => 'How can I avoid fake or unverified packers and movers in Patna?',
        'a' => 'Avoid movers who provide verbal quotes without home inspection, demand 100% advance cash payments, or lack a valid GST registration and physical office.'
    ],
    [
        'q' => 'Are IBA approved GST invoices provided by listed moving companies?',
        'a' => 'Verified movers like Shree Ashirwad provide official IBA consignment notes (LR copies) and GST tax invoices for bank and government employer claims.'
    ],
    [
        'q' => 'Do listed moving companies provide transit insurance?',
        'a' => 'Yes, licensed moving companies attach marine/cargo transit insurance policies covering declared household goods value prior to vehicle dispatch.'
    ],
    [
        'q' => 'Can I transport my car or bike along with household goods?',
        'a' => 'Yes, top listed movers offer combined household shifting, enclosed car carrier shipping, and wooden-crated bike transport.'
    ],
    [
        'q' => 'How long does intercity relocation take from Patna to major Indian cities?',
        'a' => 'Intercity relocation to neighboring states takes 24–48 hours, while long-distance transport to metros takes 3 to 5 days.'
    ],
    [
        'q' => 'How can I get an instant verified quote from Patna’s top listed movers?',
        'a' => 'Call +91 8409531615 or click the WhatsApp button to receive an immediate itemized cost breakdown from Shree Ashirwad Packers.'
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
          <span class="section-tag" style="background: rgba(14, 165, 233, 0.15); color: #0ea5e9; border: 1px solid rgba(14, 165, 233, 0.4); padding: 6px 16px; border-radius: 20px; font-size: 0.85rem; font-weight: 700; text-transform: uppercase; display: inline-block; margin-bottom: 15px;">
            VERIFIED MOVERS DIRECTORY PATNA
          </span>
          <h1 style="font-size: 2.7rem; font-weight: 800; line-height: 1.2; margin-bottom: 20px; color: #ffffff;">
            Verified <span style="color: #0ea5e9;">List of Packers and Movers in Patna</span>
          </h1>
          <p style="font-size: 1.12rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 25px;">
            Compare licensed moving companies in Patna. Shree Ashirwad Packers ranks #1 for transparent pricing, 7-layer protective packaging, insured container shipping, and IBA-approved GST bills.
          </p>

          <div style="display: flex; gap: 15px; flex-wrap: wrap; margin-bottom: 30px;">
            <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Now" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
              <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call Now: <?php echo SITE_PHONE; ?>
            </a>
            <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20a%20verified%20moving%20quote%20for%20Patna." title="Chat on WhatsApp" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
              <i class="fab fa-whatsapp" style="margin-right: 8px;"></i> Chat on WhatsApp
            </a>
          </div>

          <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 15px; border-top: 1px solid rgba(255, 255, 255, 0.1); padding-top: 20px;">
            <div>
              <h4 style="color: #0ea5e9; font-size: 1.3rem; margin-bottom: 2px;">#1 Directory</h4>
              <p style="font-size: 0.85rem; color: #94a3b8; margin: 0;">Ranked Leader</p>
            </div>
            <div>
              <h4 style="color: #0ea5e9; font-size: 1.3rem; margin-bottom: 2px;">100% Verified</h4>
              <p style="font-size: 0.85rem; color: #94a3b8; margin: 0;">GST & Office Audit</p>
            </div>
            <div>
              <h4 style="color: #0ea5e9; font-size: 1.3rem; margin-bottom: 2px;">IBA Approved</h4>
              <p style="font-size: 0.85rem; color: #94a3b8; margin: 0;">GST Invoice</p>
            </div>
          </div>
        </div>

        <!-- Hero Form Column -->
        <div class="hero-form-wrapper" style="background: rgba(255, 255, 255, 0.05); backdrop-filter: blur(10px); border: 1px solid rgba(255, 255, 255, 0.1); padding: 30px; border-radius: 16px;">
          <h3 style="font-size: 1.4rem; color: #ffffff; margin-bottom: 20px; text-align: center;">Get Verified Directory Quote</h3>
          <form id="heroLeadForm" onsubmit="sendHeroWhatsAppLead(event)" style="display: flex; flex-direction: column; gap: 15px;">
            <input type="text" id="hero_name" placeholder="Your Full Name *" required style="width: 100%; padding: 12px 15px; border-radius: 8px; border: 1px solid rgba(255, 255, 255, 0.2); background: rgba(0, 0, 0, 0.3); color: #ffffff; font-size: 0.95rem;">
            <input type="tel" id="hero_phone" placeholder="Mobile / WhatsApp Number *" required pattern="[0-9]{10}" style="width: 100%; padding: 12px 15px; border-radius: 8px; border: 1px solid rgba(255, 255, 255, 0.2); background: rgba(0, 0, 0, 0.3); color: #ffffff; font-size: 0.95rem;">
            <input type="text" id="hero_from" placeholder="Pickup Locality in Patna *" required style="width: 100%; padding: 12px 15px; border-radius: 8px; border: 1px solid rgba(255, 255, 255, 0.2); background: rgba(0, 0, 0, 0.3); color: #ffffff; font-size: 0.95rem;">
            <input type="text" id="hero_to" placeholder="Destination City / Locality *" required style="width: 100%; padding: 12px 15px; border-radius: 8px; border: 1px solid rgba(255, 255, 255, 0.2); background: rgba(0, 0, 0, 0.3); color: #ffffff; font-size: 0.95rem;">
            <select id="hero_service" required style="width: 100%; padding: 12px 15px; border-radius: 8px; border: 1px solid rgba(255, 255, 255, 0.2); background: #1e293b; color: #ffffff; font-size: 0.95rem;">
              <option value="Verified 1BHK Flat Move">Verified 1BHK Flat Move</option>
              <option value="Verified 2BHK Flat Move">Verified 2BHK Flat Move</option>
              <option value="Verified 3BHK / Villa Move">Verified 3BHK / Villa Move</option>
              <option value="Verified Vehicle Carrier">Verified Vehicle Carrier</option>
            </select>
            <button type="submit" style="width: 100%; padding: 14px; background: linear-gradient(135deg, #0ea5e9 0%, #0284c7 100%); color: #ffffff; border: none; border-radius: 8px; font-weight: 700; font-size: 1rem; cursor: pointer; transition: all 0.3s ease;">
              Get Verified Quote on WhatsApp <i class="fab fa-whatsapp" style="margin-left: 6px;"></i>
            </button>
          </form>
        </div>

      </div>
    </div>
  </section>

  <!-- Directory Guide Section -->
  <section class="directory-guide" style="padding: 60px 0; background: #f8fafc;">
    <div class="container">
      <div style="max-width: 900px; margin: 0 auto; background: #ffffff; padding: 40px; border-radius: 12px; box-shadow: 0 4px 20px rgba(0,0,0,0.05);">
        
        <h2 style="font-size: 2rem; color: #0f172a; margin-bottom: 20px; font-weight: 800;">
          Patna Packers and Movers Selection Directory & Audit Guide
        </h2>
        
        <p style="font-size: 1.05rem; line-height: 1.8; color: #334155; margin-bottom: 20px;">
          Selecting the right moving company from the list of packers and movers in <strong>Patna (Bihar)</strong> requires checking licensing, fleet ownership, and claim validity. Shree Ashirwad Packers serves all residential and commercial zones across <strong>Boring Road, Kankarbagh, Danapur, Bailey Road, Patliputra Colony, Ashiana Nagar, Exhibition Road, Rajendra Nagar, and Bihta</strong>.
        </p>

        <h3 style="font-size: 1.4rem; color: #1e293b; margin: 25px 0 15px; font-weight: 700;">
          5 Checklist Criteria for Choosing a Listed Mover
        </h3>
        
        <ol style="line-height: 1.8; color: #334155; margin-bottom: 25px; padding-left: 20px;">
          <li><strong>Active GSTIN & Company Registration:</strong> Verify official tax registration matching business address.</li>
          <li><strong>Physical Office Location:</strong> Confirm physical warehouse/office address in Patna for walk-in verification.</li>
          <li><strong>Itemized Written Estimate:</strong> Ensure all labor, loading, freight, and taxes are locked in writing.</li>
          <li><strong>IBA Compliance:</strong> Confirm IBA consignment note format for bank and government employer claims.</li>
          <li><strong>Own Transport Vehicles:</strong> Ensure company operates own dedicated weather-proof container fleet.</li>
        </ol>

      </div>
    </div>
  </section>

  <!-- Rate Matrix Table -->
  <section class="rate-matrix" style="padding: 60px 0; background: #ffffff;">
    <div class="container">
      <div style="text-align: center; max-width: 700px; margin: 0 auto 40px;">
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #0f172a;">Patna Directory Market Rate Comparison</h2>
        <p style="color: #64748b; font-size: 1.05rem;">Market rate comparison for verified movers in Patna.</p>
      </div>

      <div style="max-width: 950px; margin: 0 auto; overflow-x: auto;">
        <table style="width: 100%; border-collapse: collapse; background: #ffffff; border-radius: 8px; overflow: hidden; box-shadow: 0 4px 15px rgba(0,0,0,0.06);">
          <thead>
            <tr style="background: #0f172a; color: #ffffff; text-align: left;">
              <th style="padding: 16px 20px; font-size: 0.95rem;">Move Size</th>
              <th style="padding: 16px 20px; font-size: 0.95rem;">Local Patna Shifting</th>
              <th style="padding: 16px 20px; font-size: 0.95rem;">Intercity (Up to 500 km)</th>
              <th style="padding: 16px 20px; font-size: 0.95rem;">Interstate Relocation</th>
            </tr>
          </thead>
          <tbody>
            <tr style="border-bottom: 1px solid #e2e8f0;">
              <td style="padding: 16px 20px; font-weight: 600; color: #1e293b;">1 BHK Household Move</td>
              <td style="padding: 16px 20px; color: #059669; font-weight: 700;">₹4,200 - ₹6,500</td>
              <td style="padding: 16px 20px; color: #3b82f6; font-weight: 700;">₹9,000 - ₹14,500</td>
              <td style="padding: 16px 20px; color: #6366f1; font-weight: 700;">₹14,000 - ₹20,500</td>
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
              <td style="padding: 16px 20px; font-weight: 600; color: #1e293b;">Bike Shipping Service</td>
              <td style="padding: 16px 20px; color: #059669; font-weight: 700;">₹2,000 - ₹3,200</td>
              <td style="padding: 16px 20px; color: #3b82f6; font-weight: 700;">₹3,500 - ₹5,500</td>
              <td style="padding: 16px 20px; color: #6366f1; font-weight: 700;">₹5,200 - ₹8,000</td>
            </tr>
            <tr>
              <td style="padding: 16px 20px; font-weight: 600; color: #1e293b;">Enclosed Car Transport</td>
              <td style="padding: 16px 20px; color: #059669; font-weight: 700;">₹4,800 - ₹7,200</td>
              <td style="padding: 16px 20px; color: #3b82f6; font-weight: 700;">₹9,000 - ₹15,000</td>
              <td style="padding: 16px 20px; color: #6366f1; font-weight: 700;">₹14,000 - ₹23,000</td>
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
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #0f172a;">Frequently Asked Questions (Patna Directory Movers)</h2>
        <p style="color: #64748b; font-size: 1.05rem;">Questions about selecting verified moving companies in Patna.</p>
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
    "I would like to request a *Verified Directory Mover Quote* for Patna:%0A" +
    "*Name:* " + encodeURIComponent(name) + "%0A" +
    "*Phone:* " + encodeURIComponent(phone) + "%0A" +
    "*Pickup Locality:* " + encodeURIComponent(from) + "%0A" +
    "*Destination:* " + encodeURIComponent(to) + "%0A" +
    "*Service Type:* " + encodeURIComponent(service) + "%0A%0A" +
    "Please send me an itemized verified moving estimate on WhatsApp.";

  window.open("https://wa.me/918409531615?text=" + message, "_blank");
}
</script>

<?php 
require_once __DIR__ . '/../includes/footer.php'; 
?>
