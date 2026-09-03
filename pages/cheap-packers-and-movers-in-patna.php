<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "Cheap Packers and Movers in Patna | Budget Household & Vehicle Shifting Rates";
$page_desc = "Looking for cheap packers and movers in Patna? Get transparent, budget-friendly household shifting, bike transport, and car carrier services across Patna with zero hidden fees.";
$page_keywords = "cheap packers and movers in patna, budget packers and movers in patna, low cost shifting patna, affordable packers and movers patna, cheap household relocation patna, part load bike transport patna, shared car carrier patna";
$page_city = "Patna, Bihar";

$faq_list = [
    [
        'q' => 'How to get cheap packers and movers in Patna without compromising quality?',
        'a' => 'Choose part-load shared trucks for small moves, book during mid-month off-peak days, dismantle basic furniture yourself, and request itemized binding quotes to avoid hidden surcharge fees.'
    ],
    [
        'q' => 'What is the starting price for cheap household shifting in Patna?',
        'a' => 'Local 1BHK shifting within Patna starts from ₹3,000 to ₹5,500, 2BHK moves range from ₹5,500 to ₹8,500, and 3BHK household relocation ranges from ₹8,500 to ₹12,500 depending on volume.'
    ],
    [
        'q' => 'Are there hidden charges in cheap relocation packages in Patna?',
        'a' => 'No. Shree Ashirwad Packers provides 100% transparent binding estimates including loading, unloading, transit, GST billing, and toll charges upfront with zero hidden costs.'
    ],
    [
        'q' => 'Can I transport my bike or car at budget rates from Patna?',
        'a' => 'Yes, shared car carriers and part-load bike shipping routes reduce vehicle transport costs significantly across NH-30, NH-31, and NH-19 corridors.'
    ],
    [
        'q' => 'Which areas in Patna receive low-cost doorstep packing and moving services?',
        'a' => 'Doorstep pickup and delivery are available across Boring Road, Kankarbagh, Danapur, Bailey Road, Anisabad, Patna Sahib, Rajendra Nagar, and Bihta.'
    ],
    [
        'q' => 'What is part-load or shared truck relocation in Patna?',
        'a' => 'Part-load relocation allows multiple clients sharing highway truck space heading in the same direction, reducing intercity shipping costs by 30% to 50%.'
    ],
    [
        'q' => 'Does budget shifting in Patna include packing materials?',
        'a' => 'Yes, economy packages include essential corrugated boxes, stretch film, bubble wrap, and adhesive tapes for complete item protection.'
    ],
    [
        'q' => 'How far in advance should I book cheap packers and movers in Patna?',
        'a' => 'Booking 3 to 5 days prior to your preferred shifting date secures early-bird budget slots and lower off-peak transportation rates.'
    ],
    [
        'q' => 'Are IBA approved GST bills available for budget corporate/govt relocation claims?',
        'a' => 'Yes, 100% official IBA-compliant GST consignment bills and itemized invoices are supplied for bank and government employer claim reimbursements.'
    ],
    [
        'q' => 'How can I get an immediate budget moving quote for Patna?',
        'a' => 'Call +91 8409531615 or click the WhatsApp button to get an instant itemized budget cost estimate for your move in Patna.'
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
  <section class="hero-section" style="background: linear-gradient(135deg, #0b132b 0%, #1c2541 100%); padding: 60px 0; color: #ffffff;">
    <div class="container">
      <div class="hero-grid" style="display: grid; grid-template-columns: 1.2fr 0.8fr; gap: 40px; align-items: center;">
        
        <!-- Hero Text Column -->
        <div class="hero-text">
          <span class="section-tag" style="background: rgba(245, 158, 11, 0.15); color: #f59e0b; border: 1px solid rgba(245, 158, 11, 0.4); padding: 6px 16px; border-radius: 20px; font-size: 0.85rem; font-weight: 700; text-transform: uppercase; display: inline-block; margin-bottom: 15px;">
            BUDGET SHIFTING PATNA (BIHAR)
          </span>
          <h1 style="font-size: 2.7rem; font-weight: 800; line-height: 1.2; margin-bottom: 20px; color: #ffffff;">
            Cheap & Reliable <span style="color: #f59e0b;">Packers and Movers in Patna</span>
          </h1>
          <p style="font-size: 1.12rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 25px;">
            Shree Ashirwad Packers and Movers provides budget-friendly, transparent household shifting, bike transport, and car relocation across Patna. Enjoy part-load savings, zero hidden charges, 100% safe handling, and IBA-compliant GST billing.
          </p>

          <div style="display: flex; gap: 15px; flex-wrap: wrap; margin-bottom: 30px;">
            <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Now" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
              <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call Now: <?php echo SITE_PHONE; ?>
            </a>
            <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20a%20cheap%20budget%20shifting%20quote%20for%20Patna." title="Chat on WhatsApp" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
              <i class="fab fa-whatsapp" style="margin-right: 8px;"></i> Chat on WhatsApp
            </a>
          </div>

          <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 15px; border-top: 1px solid rgba(255, 255, 255, 0.1); padding-top: 20px;">
            <div>
              <h4 style="color: #f59e0b; font-size: 1.3rem; margin-bottom: 2px;">100%</h4>
              <p style="font-size: 0.85rem; color: #94a3b8; margin: 0;">Fixed Price Promise</p>
            </div>
            <div>
              <h4 style="color: #f59e0b; font-size: 1.3rem; margin-bottom: 2px;">30-50%</h4>
              <p style="font-size: 0.85rem; color: #94a3b8; margin: 0;">Part-Load Savings</p>
            </div>
            <div>
              <h4 style="color: #f59e0b; font-size: 1.3rem; margin-bottom: 2px;">IBA Approved</h4>
              <p style="font-size: 0.85rem; color: #94a3b8; margin: 0;">GST Invoice Included</p>
            </div>
          </div>
        </div>

        <!-- Hero Form Column -->
        <div class="hero-form-wrapper" style="background: rgba(255, 255, 255, 0.05); backdrop-filter: blur(10px); border: 1px solid rgba(255, 255, 255, 0.1); padding: 30px; border-radius: 16px;">
          <h3 style="font-size: 1.4rem; color: #ffffff; margin-bottom: 20px; text-align: center;">Get Cheap Shifting Quote</h3>
          <form id="heroLeadForm" onsubmit="sendHeroWhatsAppLead(event)" style="display: flex; flex-direction: column; gap: 15px;">
            <input type="text" id="hero_name" placeholder="Your Full Name *" required style="width: 100%; padding: 12px 15px; border-radius: 8px; border: 1px solid rgba(255, 255, 255, 0.2); background: rgba(0, 0, 0, 0.3); color: #ffffff; font-size: 0.95rem;">
            <input type="tel" id="hero_phone" placeholder="Mobile / WhatsApp Number *" required pattern="[0-9]{10}" style="width: 100%; padding: 12px 15px; border-radius: 8px; border: 1px solid rgba(255, 255, 255, 0.2); background: rgba(0, 0, 0, 0.3); color: #ffffff; font-size: 0.95rem;">
            <input type="text" id="hero_from" placeholder="Pickup Locality in Patna *" required style="width: 100%; padding: 12px 15px; border-radius: 8px; border: 1px solid rgba(255, 255, 255, 0.2); background: rgba(0, 0, 0, 0.3); color: #ffffff; font-size: 0.95rem;">
            <input type="text" id="hero_to" placeholder="Destination City / Locality *" required style="width: 100%; padding: 12px 15px; border-radius: 8px; border: 1px solid rgba(255, 255, 255, 0.2); background: rgba(0, 0, 0, 0.3); color: #ffffff; font-size: 0.95rem;">
            <select id="hero_service" required style="width: 100%; padding: 12px 15px; border-radius: 8px; border: 1px solid rgba(255, 255, 255, 0.2); background: #1c2541; color: #ffffff; font-size: 0.95rem;">
              <option value="Cheap 1BHK Shifting">Cheap 1BHK Household Move</option>
              <option value="Budget 2BHK Shifting">Budget 2BHK Household Move</option>
              <option value="Economy 3BHK Shifting">Economy 3BHK Household Move</option>
              <option value="Part-Load Bike Transport">Part-Load Bike Transport</option>
              <option value="Shared Car Transport">Shared Car Carrier Transport</option>
            </select>
            <button type="submit" style="width: 100%; padding: 14px; background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%); color: #ffffff; border: none; border-radius: 8px; font-weight: 700; font-size: 1rem; cursor: pointer; transition: all 0.3s ease;">
              Calculate Budget Price on WhatsApp <i class="fab fa-whatsapp" style="margin-left: 6px;"></i>
            </button>
          </form>
        </div>

      </div>
    </div>
  </section>

  <!-- Localized Logistics & Budget Relocation Guide Section -->
  <section class="logistics-guide" style="padding: 60px 0; background: #f8fafc;">
    <div class="container">
      <div style="max-width: 900px; margin: 0 auto; background: #ffffff; padding: 40px; border-radius: 12px; box-shadow: 0 4px 20px rgba(0,0,0,0.05);">
        
        <h2 style="font-size: 2rem; color: #0f172a; margin-bottom: 20px; font-weight: 800;">
          Guide to Cheap & Transparent Packers and Movers in Patna
        </h2>
        
        <p style="font-size: 1.05rem; line-height: 1.8; color: #334155; margin-bottom: 20px;">
          Relocating on a budget in <strong>Patna (Bihar)</strong> does not mean compromising on safety or reliability. Shree Ashirwad Packers and Movers offers structured, cost-optimized moving packages across all major residential and commercial hubs in Patna including <strong>Boring Road, Kankarbagh, Danapur, Bailey Road, Anisabad, Patna Sahib, Rajendra Nagar, and Bihta</strong>.
        </p>

        <h3 style="font-size: 1.4rem; color: #1e293b; margin: 25px 0 15px; font-weight: 700;">
          How We Deliver Cheap Shifting Rates in Patna
        </h3>
        
        <ul style="line-height: 1.8; color: #334155; margin-bottom: 25px; padding-left: 20px;">
          <li><strong>Shared Truck & Part-Load Container Options:</strong> Save up to 40% on interstate routes to Delhi, Kolkata, Ranchi, and Bangalore by consolidating vehicle space.</li>
          <li><strong>Zero Hidden Costs:</strong> Every quote is itemized, covering packing materials, labor, loading, freight, toll taxes, and GST upfront.</li>
          <li><strong>Standardized Economy Packaging:</strong> Multi-use corrugated boxes, bubble wraps, and stretch film deliver maximum item protection at budget rates.</li>
          <li><strong>Off-Peak Date Discounting:</strong> Booking your move mid-month (5th to 24th) unlocks an extra 10% to 15% discount on vehicle transportation.</li>
        </ul>

        <div style="background: #eff6ff; border-left: 4px solid #2563eb; padding: 20px; border-radius: 0 8px 8px 0; margin-bottom: 25px;">
          <h4 style="margin: 0 0 10px 0; color: #1e40af; font-size: 1.1rem;">Patna National Highway Transit Corridors</h4>
          <p style="margin: 0; color: #1e3a8a; font-size: 0.95rem; line-height: 1.6;">
            Intercity budget transport operates seamlessly via <strong>NH-30 (Patna-Baktiyarpur-Mokama), NH-31 (Patna-Ranchi-Hazaribagh), and NH-19 (Delhi-Kolkata corridor via Dobhi)</strong>, ensuring fast delivery and optimized fuel economy.
          </p>
        </div>

      </div>
    </div>
  </section>

  <!-- Economy Tariff & Rate Matrix Table -->
  <section class="rate-matrix" style="padding: 60px 0; background: #ffffff;">
    <div class="container">
      <div style="text-align: center; max-width: 700px; margin: 0 auto 40px;">
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #0f172a;">Cheap Packers and Movers Rate Matrix (Patna)</h2>
        <p style="color: #64748b; font-size: 1.05rem;">Transparent, estimated price breakdown for local and intercity budget shifting from Patna.</p>
      </div>

      <div style="max-width: 950px; margin: 0 auto; overflow-x: auto;">
        <table style="width: 100%; border-collapse: collapse; background: #ffffff; border-radius: 8px; overflow: hidden; box-shadow: 0 4px 15px rgba(0,0,0,0.06);">
          <thead>
            <tr style="background: #0b132b; color: #ffffff; text-align: left;">
              <th style="padding: 16px 20px; font-size: 0.95rem;">Shifting Type / Service</th>
              <th style="padding: 16px 20px; font-size: 0.95rem;">Local Patna Shifting</th>
              <th style="padding: 16px 20px; font-size: 0.95rem;">Intercity (Up to 500 km)</th>
              <th style="padding: 16px 20px; font-size: 0.95rem;">Long Distance (500+ km)</th>
            </tr>
          </thead>
          <tbody>
            <tr style="border-bottom: 1px solid #e2e8f0;">
              <td style="padding: 16px 20px; font-weight: 600; color: #1e293b;">1 BHK Economy Household Move</td>
              <td style="padding: 16px 20px; color: #059669; font-weight: 700;">₹3,000 - ₹5,500</td>
              <td style="padding: 16px 20px; color: #3b82f6; font-weight: 700;">₹7,500 - ₹13,000</td>
              <td style="padding: 16px 20px; color: #6366f1; font-weight: 700;">₹12,000 - ₹18,000</td>
            </tr>
            <tr style="border-bottom: 1px solid #e2e8f0; background: #f8fafc;">
              <td style="padding: 16px 20px; font-weight: 600; color: #1e293b;">2 BHK Budget Household Move</td>
              <td style="padding: 16px 20px; color: #059669; font-weight: 700;">₹5,500 - ₹8,500</td>
              <td style="padding: 16px 20px; color: #3b82f6; font-weight: 700;">₹12,000 - ₹19,000</td>
              <td style="padding: 16px 20px; color: #6366f1; font-weight: 700;">₹18,000 - ₹26,000</td>
            </tr>
            <tr style="border-bottom: 1px solid #e2e8f0;">
              <td style="padding: 16px 20px; font-weight: 600; color: #1e293b;">3 BHK Standard Relocation</td>
              <td style="padding: 16px 20px; color: #059669; font-weight: 700;">₹8,500 - ₹12,500</td>
              <td style="padding: 16px 20px; color: #3b82f6; font-weight: 700;">₹18,000 - ₹26,000</td>
              <td style="padding: 16px 20px; color: #6366f1; font-weight: 700;">₹25,000 - ₹38,000</td>
            </tr>
            <tr style="border-bottom: 1px solid #e2e8f0; background: #f8fafc;">
              <td style="padding: 16px 20px; font-weight: 600; color: #1e293b;">Bike Transportation (Part-Load)</td>
              <td style="padding: 16px 20px; color: #059669; font-weight: 700;">₹1,500 - ₹2,500</td>
              <td style="padding: 16px 20px; color: #3b82f6; font-weight: 700;">₹2,800 - ₹4,500</td>
              <td style="padding: 16px 20px; color: #6366f1; font-weight: 700;">₹4,200 - ₹6,500</td>
            </tr>
            <tr>
              <td style="padding: 16px 20px; font-weight: 600; color: #1e293b;">Car Carrier Transport (Shared)</td>
              <td style="padding: 16px 20px; color: #059669; font-weight: 700;">₹3,500 - ₹5,500</td>
              <td style="padding: 16px 20px; color: #3b82f6; font-weight: 700;">₹7,500 - ₹12,500</td>
              <td style="padding: 16px 20px; color: #6366f1; font-weight: 700;">₹11,000 - ₹18,500</td>
            </tr>
          </tbody>
        </table>
      </div>
      <p style="text-align: center; font-size: 0.85rem; color: #94a3b8; margin-top: 15px;">*Final charges depend on goods volume, packing tier, floor height, elevator access, and destination distance.</p>
    </div>
  </section>

  <!-- FAQ Section with Schema Support -->
  <section class="faq-section" style="padding: 60px 0; background: #f8fafc;">
    <div class="container">
      <div style="text-align: center; max-width: 700px; margin: 0 auto 40px;">
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #0f172a;">Frequently Asked Questions (Cheap Patna Shifting)</h2>
        <p style="color: #64748b; font-size: 1.05rem;">Common questions about budget moving rates and transparent packing services in Patna.</p>
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
    "I would like to request a *Cheap Budget Moving Quote* for Patna:%0A" +
    "*Name:* " + encodeURIComponent(name) + "%0A" +
    "*Phone:* " + encodeURIComponent(phone) + "%0A" +
    "*Pickup Locality:* " + encodeURIComponent(from) + "%0A" +
    "*Destination:* " + encodeURIComponent(to) + "%0A" +
    "*Service Type:* " + encodeURIComponent(service) + "%0A%0A" +
    "Please send me an itemized budget estimate on WhatsApp.";

  window.open("https://wa.me/918409531615?text=" + message, "_blank");
}
</script>

<?php 
require_once __DIR__ . '/../includes/footer.php'; 
?>
