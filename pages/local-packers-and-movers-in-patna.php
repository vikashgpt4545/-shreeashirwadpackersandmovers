<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "Local Packers and Movers in Patna | Within-City Household Shifting";
$page_desc = "Looking for local packers and movers in Patna? Enjoy fast, same-day within-city household relocation, office moving, and bike transport across Patna at budget rates.";
$page_keywords = "local packers and movers in patna, within city shifting patna, same day movers patna, local household relocation patna, local office moving patna";
$page_city = "Patna, Bihar";

$faq_list = [
    [
        'q' => 'How fast can local packers and movers in Patna start my shifting?',
        'a' => 'Our local teams offer same-day or 2-hour rapid doorstep dispatch for within-city household and office moves in Patna.'
    ],
    [
        'q' => 'What are the charges for local household shifting within Patna?',
        'a' => 'Local 1BHK shifting ranges from ₹3,000 to ₹5,200, 2BHK ranges from ₹5,200 to ₹8,200, and 3BHK moves range from ₹8,200 to ₹12,000 depending on distance and floor height.'
    ],
    [
        'q' => 'Which areas in Patna receive local doorstep packing and moving services?',
        'a' => 'Full local doorstep service is active across Boring Road, Kankarbagh, Danapur, Bailey Road, Patliputra Colony, Ashiana Nagar, Exhibition Road, Rajendra Nagar, and Bihta.'
    ],
    [
        'q' => 'How do you handle narrow lanes and multi-story apartment buildings in Patna?',
        'a' => 'We deploy compact city feeder vehicles, specialized furniture hoisting equipment, and dedicated stair carrying teams.'
    ],
    [
        'q' => 'Are packing materials included for local city moves in Patna?',
        'a' => 'Yes, economy bubble wraps, stretch film, corrugated boxes, and protective blankets are included to ensure zero damage.'
    ],
    [
        'q' => 'Can you complete a local house move within a single day?',
        'a' => 'Yes, most local within-city relocations in Patna are packed, transported, and unpacked within 4 to 8 hours.'
    ],
    [
        'q' => 'Do you provide IBA-approved GST bills for local company/govt relocation claims?',
        'a' => 'Yes, official IBA-format consignment notes and GST tax invoices are provided for local employer claim submissions.'
    ],
    [
        'q' => 'Can I move my office or shop locally within Patna?',
        'a' => 'Yes, we handle local commercial office shifting, workstation dismantling, IT equipment packing, and file archive transport.'
    ],
    [
        'q' => 'Is local bike transport available within Patna city?',
        'a' => 'Yes, local two-wheeler pickup and transfer to any locality in Patna is available at minimal doorstep charges.'
    ],
    [
        'q' => 'How can I get an instant local quote for my move in Patna?',
        'a' => 'Call +91 8409531615 or submit your pickup/destination details on WhatsApp for an immediate itemized cost estimate.'
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
            LOCAL CITY SHIFTING PATNA
          </span>
          <h1 style="font-size: 2.7rem; font-weight: 800; line-height: 1.2; margin-bottom: 20px; color: #ffffff;">
            Fast <span style="color: #10b981;">Local Packers and Movers in Patna</span>
          </h1>
          <p style="font-size: 1.12rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 25px;">
            Shree Ashirwad Packers and Movers provides rapid, same-day within-city household and office shifting across Patna. Experience transparent local rates, narrow lane access solutions, and 100% safe handling.
          </p>

          <div style="display: flex; gap: 15px; flex-wrap: wrap; margin-bottom: 30px;">
            <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Now" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
              <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call Now: <?php echo SITE_PHONE; ?>
            </a>
            <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20a%20local%20shifting%20quote%20for%20Patna." title="Chat on WhatsApp" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
              <i class="fab fa-whatsapp" style="margin-right: 8px;"></i> Chat on WhatsApp
            </a>
          </div>

          <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 15px; border-top: 1px solid rgba(255, 255, 255, 0.1); padding-top: 20px;">
            <div>
              <h4 style="color: #10b981; font-size: 1.3rem; margin-bottom: 2px;">Same-Day</h4>
              <p style="font-size: 0.85rem; color: #94a3b8; margin: 0;">Local City Move</p>
            </div>
            <div>
              <h4 style="color: #10b981; font-size: 1.3rem; margin-bottom: 2px;">2-Hour</h4>
              <p style="font-size: 0.85rem; color: #94a3b8; margin: 0;">Rapid Dispatch</p>
            </div>
            <div>
              <h4 style="color: #10b981; font-size: 1.3rem; margin-bottom: 2px;">IBA Approved</h4>
              <p style="font-size: 0.85rem; color: #94a3b8; margin: 0;">GST Invoice</p>
            </div>
          </div>
        </div>

        <!-- Hero Form Column -->
        <div class="hero-form-wrapper" style="background: rgba(255, 255, 255, 0.05); backdrop-filter: blur(10px); border: 1px solid rgba(255, 255, 255, 0.1); padding: 30px; border-radius: 16px;">
          <h3 style="font-size: 1.4rem; color: #ffffff; margin-bottom: 20px; text-align: center;">Get Local Shifting Quote</h3>
          <form id="heroLeadForm" onsubmit="sendHeroWhatsAppLead(event)" style="display: flex; flex-direction: column; gap: 15px;">
            <input type="text" id="hero_name" placeholder="Your Full Name *" required style="width: 100%; padding: 12px 15px; border-radius: 8px; border: 1px solid rgba(255, 255, 255, 0.2); background: rgba(0, 0, 0, 0.3); color: #ffffff; font-size: 0.95rem;">
            <input type="tel" id="hero_phone" placeholder="Mobile / WhatsApp Number *" required pattern="[0-9]{10}" style="width: 100%; padding: 12px 15px; border-radius: 8px; border: 1px solid rgba(255, 255, 255, 0.2); background: rgba(0, 0, 0, 0.3); color: #ffffff; font-size: 0.95rem;">
            <input type="text" id="hero_from" placeholder="Pickup Locality in Patna *" required style="width: 100%; padding: 12px 15px; border-radius: 8px; border: 1px solid rgba(255, 255, 255, 0.2); background: rgba(0, 0, 0, 0.3); color: #ffffff; font-size: 0.95rem;">
            <input type="text" id="hero_to" placeholder="Destination Locality in Patna *" required style="width: 100%; padding: 12px 15px; border-radius: 8px; border: 1px solid rgba(255, 255, 255, 0.2); background: rgba(0, 0, 0, 0.3); color: #ffffff; font-size: 0.95rem;">
            <select id="hero_service" required style="width: 100%; padding: 12px 15px; border-radius: 8px; border: 1px solid rgba(255, 255, 255, 0.2); background: #1e293b; color: #ffffff; font-size: 0.95rem;">
              <option value="Local 1BHK Move Patna">Local 1BHK Move</option>
              <option value="Local 2BHK Move Patna">Local 2BHK Move</option>
              <option value="Local 3BHK Move Patna">Local 3BHK Move</option>
              <option value="Local Office Shifting Patna">Local Office Shifting</option>
              <option value="Local Bike Transport Patna">Local Bike Transport</option>
            </select>
            <button type="submit" style="width: 100%; padding: 14px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border: none; border-radius: 8px; font-weight: 700; font-size: 1rem; cursor: pointer; transition: all 0.3s ease;">
              Get Local Quote on WhatsApp <i class="fab fa-whatsapp" style="margin-left: 6px;"></i>
            </button>
          </form>
        </div>

      </div>
    </div>
  </section>

  <!-- Local Guide Section -->
  <section class="local-guide" style="padding: 60px 0; background: #f8fafc;">
    <div class="container">
      <div style="max-width: 900px; margin: 0 auto; background: #ffffff; padding: 40px; border-radius: 12px; box-shadow: 0 4px 20px rgba(0,0,0,0.05);">
        
        <h2 style="font-size: 2rem; color: #0f172a; margin-bottom: 20px; font-weight: 800;">
          Within-City Household & Office Relocation in Patna
        </h2>
        
        <p style="font-size: 1.05rem; line-height: 1.8; color: #334155; margin-bottom: 20px;">
          Moving locally within <strong>Patna (Bihar)</strong> requires fast execution and familiar knowledge of local traffic rules, narrow lane access, and apartment elevator regulations. We cover all micro-localities in Patna including <strong>Boring Road, Kankarbagh, Danapur, Bailey Road, Patliputra Colony, Ashiana Nagar, Exhibition Road, Rajendra Nagar, and Bihta</strong>.
        </p>

        <h3 style="font-size: 1.4rem; color: #1e293b; margin: 25px 0 15px; font-weight: 700;">
          Local Moving Advantages
        </h3>
        
        <ul style="line-height: 1.8; color: #334155; margin-bottom: 25px; padding-left: 20px;">
          <li><strong>Same-Day Execution:</strong> Packing, transport, unloading, and basic setup completed in 4 to 8 hours.</li>
          <li><strong>Compact Feeder Vans:</strong> Pickup vehicles suited for congested market areas and narrow residential lanes.</li>
          <li><strong>Dedicated Loading Crew:</strong> Experienced handlers trained in handling multi-story staircases and lifts.</li>
          <li><strong>Flat Doorstep Rates:</strong> Transparent kilometer-based billing with zero surprise fuel surcharges.</li>
        </ul>

      </div>
    </div>
  </section>

  <!-- Rate Matrix Table -->
  <section class="rate-matrix" style="padding: 60px 0; background: #ffffff;">
    <div class="container">
      <div style="text-align: center; max-width: 700px; margin: 0 auto 40px;">
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #0f172a;">Local Patna Shifting Tariff Matrix</h2>
        <p style="color: #64748b; font-size: 1.05rem;">Estimated charges for within-city relocation in Patna.</p>
      </div>

      <div style="max-width: 950px; margin: 0 auto; overflow-x: auto;">
        <table style="width: 100%; border-collapse: collapse; background: #ffffff; border-radius: 8px; overflow: hidden; box-shadow: 0 4px 15px rgba(0,0,0,0.06);">
          <thead>
            <tr style="background: #0f172a; color: #ffffff; text-align: left;">
              <th style="padding: 16px 20px; font-size: 0.95rem;">Shifting Type</th>
              <th style="padding: 16px 20px; font-size: 0.95rem;">Short Radius (Up to 10 km)</th>
              <th style="padding: 16px 20px; font-size: 0.95rem;">Medium Radius (10 - 25 km)</th>
              <th style="padding: 16px 20px; font-size: 0.95rem;">Outskirts / Suburbs (25+ km)</th>
            </tr>
          </thead>
          <tbody>
            <tr style="border-bottom: 1px solid #e2e8f0;">
              <td style="padding: 16px 20px; font-weight: 600; color: #1e293b;">1 BHK Household Move</td>
              <td style="padding: 16px 20px; color: #059669; font-weight: 700;">₹3,000 - ₹4,500</td>
              <td style="padding: 16px 20px; color: #3b82f6; font-weight: 700;">₹4,500 - ₹6,000</td>
              <td style="padding: 16px 20px; color: #6366f1; font-weight: 700;">₹6,000 - ₹8,500</td>
            </tr>
            <tr style="border-bottom: 1px solid #e2e8f0; background: #f8fafc;">
              <td style="padding: 16px 20px; font-weight: 600; color: #1e293b;">2 BHK Household Move</td>
              <td style="padding: 16px 20px; color: #059669; font-weight: 700;">₹5,200 - ₹7,200</td>
              <td style="padding: 16px 20px; color: #3b82f6; font-weight: 700;">₹7,200 - ₹9,500</td>
              <td style="padding: 16px 20px; color: #6366f1; font-weight: 700;">₹9,500 - ₹12,500</td>
            </tr>
            <tr style="border-bottom: 1px solid #e2e8f0;">
              <td style="padding: 16px 20px; font-weight: 600; color: #1e293b;">3 BHK Household Move</td>
              <td style="padding: 16px 20px; color: #059669; font-weight: 700;">₹8,200 - ₹11,000</td>
              <td style="padding: 16px 20px; color: #3b82f6; font-weight: 700;">₹11,000 - ₹14,500</td>
              <td style="padding: 16px 20px; color: #6366f1; font-weight: 700;">₹14,500 - ₹18,500</td>
            </tr>
            <tr style="border-bottom: 1px solid #e2e8f0; background: #f8fafc;">
              <td style="padding: 16px 20px; font-weight: 600; color: #1e293b;">Local Bike Transfer</td>
              <td style="padding: 16px 20px; color: #059669; font-weight: 700;">₹1,200 - ₹1,800</td>
              <td style="padding: 16px 20px; color: #3b82f6; font-weight: 700;">₹1,800 - ₹2,500</td>
              <td style="padding: 16px 20px; color: #6366f1; font-weight: 700;">₹2,500 - ₹3,500</td>
            </tr>
            <tr>
              <td style="padding: 16px 20px; font-weight: 600; color: #1e293b;">Local Car Transfer</td>
              <td style="padding: 16px 20px; color: #059669; font-weight: 700;">₹3,000 - ₹4,200</td>
              <td style="padding: 16px 20px; color: #3b82f6; font-weight: 700;">₹4,200 - ₹5,800</td>
              <td style="padding: 16px 20px; color: #6366f1; font-weight: 700;">₹5,800 - ₹8,000</td>
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
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #0f172a;">Frequently Asked Questions (Local Patna Movers)</h2>
        <p style="color: #64748b; font-size: 1.05rem;">Questions about local within-city relocation services in Patna.</p>
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
    "I would like to request a *Local Shifting Quote* for Patna:%0A" +
    "*Name:* " + encodeURIComponent(name) + "%0A" +
    "*Phone:* " + encodeURIComponent(phone) + "%0A" +
    "*Pickup Locality:* " + encodeURIComponent(from) + "%0A" +
    "*Destination Locality:* " + encodeURIComponent(to) + "%0A" +
    "*Service Type:* " + encodeURIComponent(service) + "%0A%0A" +
    "Please send me a local within-city estimate on WhatsApp.";

  window.open("https://wa.me/918409531615?text=" + message, "_blank");
}
</script>

<?php 
require_once __DIR__ . '/../includes/footer.php'; 
?>
