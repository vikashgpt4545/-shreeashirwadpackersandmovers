<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "Home Packers and Movers in Patna | Complete Household Relocation";
$page_desc = "Looking for home packers and movers in Patna? Enjoy safe residential household shifting, 7-layer safety packaging, furniture assembly, and IBA-approved GST bills.";
$page_keywords = "home packers and movers in patna, household shifting patna, residential movers patna, house packing patna, flat shifting patna";
$page_city = "Patna, Bihar";

$faq_list = [
    [
        'q' => 'What services are included in home packers and movers in Patna?',
        'a' => 'Home shifting packages include doorstep physical audit, 7-layer itemized wrapping, container loading, transport, unloading, unpacking, and furniture re-assembly.'
    ],
    [
        'q' => 'How much does home shifting cost in Patna for a 2BHK flat?',
        'a' => 'Local 2BHK home shifting in Patna ranges from ₹6,500 to ₹9,500, while intercity 2BHK relocation ranges from ₹14,000 to ₹22,000 depending on distance.'
    ],
    [
        'q' => 'Which residential localities in Patna are covered for home shifting?',
        'a' => 'Services cover Boring Road, Kankarbagh, Danapur, Bailey Road, Patliputra Colony, Ashiana Nagar, Exhibition Road, Rajendra Nagar, and Bihta.'
    ],
    [
        'q' => 'How are heavy appliances like refrigerators, ACs, and washing machines packed?',
        'a' => 'Appliances are disconnected, drained, wrapped in heavy-duty bubble wrap, fitted with foam edge guards, and encased in 5-ply corrugated sheets.'
    ],
    [
        'q' => 'Do you provide dismantling and re-assembly for wooden beds and wardrobes?',
        'a' => 'Yes, trained carpenters dismantle beds and modular wardrobes before loading and re-assemble them perfectly at your new residence.'
    ],
    [
        'q' => 'Are IBA approved GST invoices provided for home relocation claim reimbursement?',
        'a' => 'Yes, official IBA-format consignment notes, GST invoices, and stamped payment receipts are provided for bank and government employer claims.'
    ],
    [
        'q' => 'Is transit insurance available for household items during home shifting?',
        'a' => 'Yes, full transit insurance coverage protecting your household goods against highway risks is issued prior to vehicle dispatch.'
    ],
    [
        'q' => 'Can I move my home on weekends or holidays in Patna?',
        'a' => 'Yes, our residential relocation crews operate 7 days a week, including weekends and public holidays.'
    ],
    [
        'q' => 'How long does a local home relocation take in Patna?',
        'a' => 'Most local home relocations within Patna are completed in 4 to 8 hours on the same day.'
    ],
    [
        'q' => 'How can I get a free home inspection and quote in Patna?',
        'a' => 'Call +91 8409531615 or submit your home address on WhatsApp for an immediate doorstep inspection or video estimate.'
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
            HOUSEHOLD RELOCATION PATNA
          </span>
          <h1 style="font-size: 2.7rem; font-weight: 800; line-height: 1.2; margin-bottom: 20px; color: #ffffff;">
            Expert <span style="color: #10b981;">Home Packers and Movers in Patna</span>
          </h1>
          <p style="font-size: 1.12rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 25px;">
            Shree Ashirwad Packers and Movers offers complete residential home shifting in Patna. Enjoy 7-layer safety wrapping, furniture dismantling & re-assembly, insured container transport, and IBA-approved GST bills.
          </p>

          <div style="display: flex; gap: 15px; flex-wrap: wrap; margin-bottom: 30px;">
            <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Now" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
              <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call Now: <?php echo SITE_PHONE; ?>
            </a>
            <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20a%20home%20shifting%20quote%20for%20Patna." title="Chat on WhatsApp" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
              <i class="fab fa-whatsapp" style="margin-right: 8px;"></i> Chat on WhatsApp
            </a>
          </div>

          <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 15px; border-top: 1px solid rgba(255, 255, 255, 0.1); padding-top: 20px;">
            <div>
              <h4 style="color: #10b981; font-size: 1.3rem; margin-bottom: 2px;">100% Care</h4>
              <p style="font-size: 0.85rem; color: #94a3b8; margin: 0;">Furniture Assembly</p>
            </div>
            <div>
              <h4 style="color: #10b981; font-size: 1.3rem; margin-bottom: 2px;">7-Layer</h4>
              <p style="font-size: 0.85rem; color: #94a3b8; margin: 0;">Safety Wrap Spec</p>
            </div>
            <div>
              <h4 style="color: #10b981; font-size: 1.3rem; margin-bottom: 2px;">IBA Approved</h4>
              <p style="font-size: 0.85rem; color: #94a3b8; margin: 0;">GST Invoice</p>
            </div>
          </div>
        </div>

        <!-- Hero Form Column -->
        <div class="hero-form-wrapper" style="background: rgba(255, 255, 255, 0.05); backdrop-filter: blur(10px); border: 1px solid rgba(255, 255, 255, 0.1); padding: 30px; border-radius: 16px;">
          <h3 style="font-size: 1.4rem; color: #ffffff; margin-bottom: 20px; text-align: center;">Get Home Shifting Quote</h3>
          <form id="heroLeadForm" onsubmit="sendHeroWhatsAppLead(event)" style="display: flex; flex-direction: column; gap: 15px;">
            <input type="text" id="hero_name" placeholder="Your Full Name *" required style="width: 100%; padding: 12px 15px; border-radius: 8px; border: 1px solid rgba(255, 255, 255, 0.2); background: rgba(0, 0, 0, 0.3); color: #ffffff; font-size: 0.95rem;">
            <input type="tel" id="hero_phone" placeholder="Mobile / WhatsApp Number *" required pattern="[0-9]{10}" style="width: 100%; padding: 12px 15px; border-radius: 8px; border: 1px solid rgba(255, 255, 255, 0.2); background: rgba(0, 0, 0, 0.3); color: #ffffff; font-size: 0.95rem;">
            <input type="text" id="hero_from" placeholder="Pickup Address in Patna *" required style="width: 100%; padding: 12px 15px; border-radius: 8px; border: 1px solid rgba(255, 255, 255, 0.2); background: rgba(0, 0, 0, 0.3); color: #ffffff; font-size: 0.95rem;">
            <input type="text" id="hero_to" placeholder="Destination City / Address *" required style="width: 100%; padding: 12px 15px; border-radius: 8px; border: 1px solid rgba(255, 255, 255, 0.2); background: rgba(0, 0, 0, 0.3); color: #ffffff; font-size: 0.95rem;">
            <select id="hero_service" required style="width: 100%; padding: 12px 15px; border-radius: 8px; border: 1px solid rgba(255, 255, 255, 0.2); background: #1e293b; color: #ffffff; font-size: 0.95rem;">
              <option value="Home Shifting 1BHK Flat">Home Shifting 1BHK Flat</option>
              <option value="Home Shifting 2BHK Flat">Home Shifting 2BHK Flat</option>
              <option value="Home Shifting 3BHK / Independent House">Home Shifting 3BHK / Independent House</option>
              <option value="Home Villa / Bungalow Move">Home Villa / Bungalow Move</option>
            </select>
            <button type="submit" style="width: 100%; padding: 14px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border: none; border-radius: 8px; font-weight: 700; font-size: 1rem; cursor: pointer; transition: all 0.3s ease;">
              Get Home Quote on WhatsApp <i class="fab fa-whatsapp" style="margin-left: 6px;"></i>
            </button>
          </form>
        </div>

      </div>
    </div>
  </section>

  <!-- Home Shifting Guide Section -->
  <section class="home-guide" style="padding: 60px 0; background: #f8fafc;">
    <div class="container">
      <div style="max-width: 900px; margin: 0 auto; background: #ffffff; padding: 40px; border-radius: 12px; box-shadow: 0 4px 20px rgba(0,0,0,0.05);">
        
        <h2 style="font-size: 2rem; color: #0f172a; margin-bottom: 20px; font-weight: 800;">
          Complete Household Relocation Guide for Patna Residents
        </h2>
        
        <p style="font-size: 1.05rem; line-height: 1.8; color: #334155; margin-bottom: 20px;">
          Relocating your home in <strong>Patna (Bihar)</strong> is effortless with Shree Ashirwad Packers and Movers. We provide end-to-end residential shifting across <strong>Boring Road, Kankarbagh, Danapur, Bailey Road, Patliputra Colony, Ashiana Nagar, Exhibition Road, Rajendra Nagar, and Bihta</strong>.
        </p>

        <h3 style="font-size: 1.4rem; color: #1e293b; margin: 25px 0 15px; font-weight: 700;">
          Residential Home Shifting Process
        </h3>
        
        <ol style="line-height: 1.8; color: #334155; margin-bottom: 25px; padding-left: 20px;">
          <li><strong>Pre-Move Inventory Assessment:</strong> Room-by-room audit to select packing materials and box counts.</li>
          <li><strong>Systematic Room Packing:</strong> Color-coded labeling for kitchenware, electronics, clothing, and books.</li>
          <li><strong>Heavy Furniture Dismantling:</strong> Experienced technicians dismantle beds, wardrobes, and TV units safely.</li>
          <li><strong>Destination Re-Assembly:</strong> Unpacking and setting up furniture in specified rooms at your new home.</li>
        </ol>

      </div>
    </div>
  </section>

  <!-- Rate Matrix Table -->
  <section class="rate-matrix" style="padding: 60px 0; background: #ffffff;">
    <div class="container">
      <div style="text-align: center; max-width: 700px; margin: 0 auto 40px;">
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #0f172a;">Home Shifting Rate Matrix (Patna)</h2>
        <p style="color: #64748b; font-size: 1.05rem;">Estimated rates for local and long-distance home relocation in Patna.</p>
      </div>

      <div style="max-width: 950px; margin: 0 auto; overflow-x: auto;">
        <table style="width: 100%; border-collapse: collapse; background: #ffffff; border-radius: 8px; overflow: hidden; box-shadow: 0 4px 15px rgba(0,0,0,0.06);">
          <thead>
            <tr style="background: #0f172a; color: #ffffff; text-align: left;">
              <th style="padding: 16px 20px; font-size: 0.95rem;">Home Configuration</th>
              <th style="padding: 16px 20px; font-size: 0.95rem;">Local Patna Move</th>
              <th style="padding: 16px 20px; font-size: 0.95rem;">Intercity (Up to 500 km)</th>
              <th style="padding: 16px 20px; font-size: 0.95rem;">Interstate Relocation</th>
            </tr>
          </thead>
          <tbody>
            <tr style="border-bottom: 1px solid #e2e8f0;">
              <td style="padding: 16px 20px; font-weight: 600; color: #1e293b;">1 BHK Flat / Apartment</td>
              <td style="padding: 16px 20px; color: #059669; font-weight: 700;">₹4,200 - ₹6,500</td>
              <td style="padding: 16px 20px; color: #3b82f6; font-weight: 700;">₹9,000 - ₹14,500</td>
              <td style="padding: 16px 20px; color: #6366f1; font-weight: 700;">₹14,000 - ₹20,500</td>
            </tr>
            <tr style="border-bottom: 1px solid #e2e8f0; background: #f8fafc;">
              <td style="padding: 16px 20px; font-weight: 600; color: #1e293b;">2 BHK Flat / Apartment</td>
              <td style="padding: 16px 20px; color: #059669; font-weight: 700;">₹6,500 - ₹9,500</td>
              <td style="padding: 16px 20px; color: #3b82f6; font-weight: 700;">₹14,000 - ₹22,000</td>
              <td style="padding: 16px 20px; color: #6366f1; font-weight: 700;">₹21,000 - ₹31,000</td>
            </tr>
            <tr style="border-bottom: 1px solid #e2e8f0;">
              <td style="padding: 16px 20px; font-weight: 600; color: #1e293b;">3 BHK Flat / Apartment</td>
              <td style="padding: 16px 20px; color: #059669; font-weight: 700;">₹9,500 - ₹14,500</td>
              <td style="padding: 16px 20px; color: #3b82f6; font-weight: 700;">₹21,000 - ₹32,000</td>
              <td style="padding: 16px 20px; color: #6366f1; font-weight: 700;">₹30,000 - ₹46,000</td>
            </tr>
            <tr style="border-bottom: 1px solid #e2e8f0; background: #f8fafc;">
              <td style="padding: 16px 20px; font-weight: 600; color: #1e293b;">Independent House / Villa</td>
              <td style="padding: 16px 20px; color: #059669; font-weight: 700;">₹12,500 - ₹18,000</td>
              <td style="padding: 16px 20px; color: #3b82f6; font-weight: 700;">₹26,000 - ₹38,000</td>
              <td style="padding: 16px 20px; color: #6366f1; font-weight: 700;">₹38,000 - ₹55,000</td>
            </tr>
            <tr>
              <td style="padding: 16px 20px; font-weight: 600; color: #1e293b;">Household + Vehicle Move</td>
              <td style="padding: 16px 20px; color: #059669; font-weight: 700;">₹9,500 - ₹16,000</td>
              <td style="padding: 16px 20px; color: #3b82f6; font-weight: 700;">₹22,000 - ₹36,000</td>
              <td style="padding: 16px 20px; color: #6366f1; font-weight: 700;">₹32,000 - ₹52,000</td>
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
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #0f172a;">Frequently Asked Questions (Home Shifting Patna)</h2>
        <p style="color: #64748b; font-size: 1.05rem;">Questions about residential household packing and moving in Patna.</p>
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
    "I would like to request a *Home Shifting Quote* for Patna:%0A" +
    "*Name:* " + encodeURIComponent(name) + "%0A" +
    "*Phone:* " + encodeURIComponent(phone) + "%0A" +
    "*Pickup Address:* " + encodeURIComponent(from) + "%0A" +
    "*Destination Address:* " + encodeURIComponent(to) + "%0A" +
    "*Service Type:* " + encodeURIComponent(service) + "%0A%0A" +
    "Please send me a residential household shifting estimate on WhatsApp.";

  window.open("https://wa.me/918409531615?text=" + message, "_blank");
}
</script>

<?php 
require_once __DIR__ . '/../includes/footer.php'; 
?>
