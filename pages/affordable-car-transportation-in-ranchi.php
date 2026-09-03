<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "Affordable Car Transportation in Ranchi | Price Match Guarantee";
$page_desc = "Get affordable car transportation in Ranchi with enclosed car carriers, lowest price match assurance, and door-to-door pickup across Lalpur, Harmu, Kanke Road, Bariatu.";
$page_keywords = "affordable car transportation in ranchi, cheap car carrier ranchi, low cost car shipping ranchi, budget vehicle transport ranchi, best car mover charges ranchi";
$page_city = "Ranchi, Jharkhand";

$faq_list = [
    [
        'q' => 'What is the starting price for car transportation in Ranchi?',
        'a' => 'Local car relocation within Ranchi starts at ₹3,500, while intercity car shipping (e.g., Ranchi to Patna, Delhi, Bangalore) ranges from ₹7,500 to ₹16,500 depending on vehicle size and distance.'
    ],
    [
        'q' => 'How does the Price-Match Guarantee work for car transport in Ranchi?',
        'a' => 'If you receive a written quote from any licensed car carrier service in Ranchi, present it to us and we will match or beat the quote while delivering enclosed carrier transport.'
    ],
    [
        'q' => 'Are enclosed car carriers available at affordable pricing?',
        'a' => 'Yes, we operate enclosed hydraulic car trailers to protect vehicles from dust, weather, and road debris at standard open-carrier competitive rates.'
    ],
    [
        'q' => 'Is doorstep pickup and delivery included across all Ranchi localities?',
        'a' => 'Yes, free doorstep pickup is available in Lalpur, Harmu, Kanke Road, Main Road, Ratu Road, Bariatu, Doranda, Dhurwa, Hinoo, and Namkum.'
    ],
    [
        'q' => 'What documents are required to ship a car affordably from Ranchi?',
        'a' => 'You need a copy of the Car RC (Registration Certificate), active Insurance Certificate, owner ID proof (Aadhaar/PAN), and vehicle key set.'
    ],
    [
        'q' => 'Is transit insurance included with affordable car transport packages?',
        'a' => 'Yes, full transit insurance policy options (covering declared car value) are provided to ensure complete risk coverage.'
    ],
    [
        'q' => 'Can non-operational or accidental cars be transported affordably?',
        'a' => 'Yes, we deploy specialized hydraulic winch tow trucks to load non-operational or damaged vehicles safely at nominal charges.'
    ],
    [
        'q' => 'Is a pre-loading vehicle condition report provided?',
        'a' => 'Yes, a 25-point physical car inspection report detailing existing odometer readings, scratch checks, and tire conditions is signed before loading.'
    ],
    [
        'q' => 'How fast is car transport delivery from Ranchi to metro cities?',
        'a' => 'Transit times are 24–48 hours for regional routes (Patna, Kolkata) and 3–5 days for long-distance routes (Delhi, Mumbai, Bangalore).'
    ],
    [
        'q' => 'How can I get an instant affordable car carrier estimate in Ranchi?',
        'a' => 'Submit your car model and destination city via WhatsApp or call +91 8409531615 for an immediate binding price-matched quotation.'
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
            AFFORDABLE CAR CARRIER RANCHI
          </span>
          <h1 style="font-size: 2.7rem; font-weight: 800; line-height: 1.2; margin-bottom: 20px; color: #ffffff;">
            Affordable <span style="color: #10b981;">Car Transportation in Ranchi</span>
          </h1>
          <p style="font-size: 1.12rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 25px;">
            Move your car safely and affordably from Ranchi. Shree Ashirwad Packers offers enclosed hydraulic car carriers, lowest price-match guarantee, 25-point inspection sheets, and doorstep pickup across Lalpur, Harmu, Kanke Road, and all Ranchi sectors.
          </p>

          <div style="display: flex; gap: 15px; flex-wrap: wrap; margin-bottom: 30px;">
            <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Now" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
              <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call Now: <?php echo SITE_PHONE; ?>
            </a>
            <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20an%20affordable%20car%20transportation%20quote%20for%20Ranchi." title="Chat on WhatsApp" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
              <i class="fab fa-whatsapp" style="margin-right: 8px;"></i> Chat on WhatsApp
            </a>
          </div>

          <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 15px; border-top: 1px solid rgba(255, 255, 255, 0.1); padding-top: 20px;">
            <div>
              <h4 style="color: #10b981; font-size: 1.3rem; margin-bottom: 2px;">Enclosed</h4>
              <p style="font-size: 0.85rem; color: #94a3b8; margin: 0;">Hydraulic Carrier</p>
            </div>
            <div>
              <h4 style="color: #10b981; font-size: 1.3rem; margin-bottom: 2px;">Price Match</h4>
              <p style="font-size: 0.85rem; color: #94a3b8; margin: 0;">Guaranteed Low Rate</p>
            </div>
            <div>
              <h4 style="color: #10b981; font-size: 1.3rem; margin-bottom: 2px;">25-Point</h4>
              <p style="font-size: 0.85rem; color: #94a3b8; margin: 0;">Pre-Transit Audit</p>
            </div>
          </div>
        </div>

        <!-- Hero Form Column -->
        <div class="hero-form-wrapper" style="background: rgba(255, 255, 255, 0.05); backdrop-filter: blur(10px); border: 1px solid rgba(255, 255, 255, 0.1); padding: 30px; border-radius: 16px;">
          <h3 style="font-size: 1.4rem; color: #ffffff; margin-bottom: 20px; text-align: center;">Get Price-Matched Car Quote</h3>
          <form id="heroLeadForm" onsubmit="sendHeroWhatsAppLead(event)" style="display: flex; flex-direction: column; gap: 15px;">
            <input type="text" id="hero_name" placeholder="Your Full Name *" required style="width: 100%; padding: 12px 15px; border-radius: 8px; border: 1px solid rgba(255, 255, 255, 0.2); background: rgba(0, 0, 0, 0.3); color: #ffffff; font-size: 0.95rem;">
            <input type="tel" id="hero_phone" placeholder="Mobile / WhatsApp Number *" required pattern="[0-9]{10}" style="width: 100%; padding: 12px 15px; border-radius: 8px; border: 1px solid rgba(255, 255, 255, 0.2); background: rgba(0, 0, 0, 0.3); color: #ffffff; font-size: 0.95rem;">
            <input type="text" id="hero_from" placeholder="Pickup Address in Ranchi *" required style="width: 100%; padding: 12px 15px; border-radius: 8px; border: 1px solid rgba(255, 255, 255, 0.2); background: rgba(0, 0, 0, 0.3); color: #ffffff; font-size: 0.95rem;">
            <input type="text" id="hero_to" placeholder="Destination City *" required style="width: 100%; padding: 12px 15px; border-radius: 8px; border: 1px solid rgba(255, 255, 255, 0.2); background: rgba(0, 0, 0, 0.3); color: #ffffff; font-size: 0.95rem;">
            <input type="text" id="hero_car" placeholder="Car Model (e.g. Swift, Creta, Fortuner) *" required style="width: 100%; padding: 12px 15px; border-radius: 8px; border: 1px solid rgba(255, 255, 255, 0.2); background: rgba(0, 0, 0, 0.3); color: #ffffff; font-size: 0.95rem;">
            <button type="submit" style="width: 100%; padding: 14px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border: none; border-radius: 8px; font-weight: 700; font-size: 1rem; cursor: pointer;">
              Get Instant Price Match Quote <i class="fab fa-whatsapp" style="margin-left: 6px;"></i>
            </button>
          </form>
        </div>

      </div>
    </div>
  </section>

  <!-- Rate Matrix Table -->
  <section class="rate-matrix" style="padding: 60px 0; background: #ffffff;">
    <div class="container">
      <div style="text-align: center; max-width: 700px; margin: 0 auto 40px;">
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #0f172a;">Affordable Car Carrier Rate Matrix (Ranchi)</h2>
        <p style="color: #64748b; font-size: 1.05rem;">Transparent pricing for car transportation across different distance slabs.</p>
      </div>

      <div style="max-width: 950px; margin: 0 auto; overflow-x: auto;">
        <table style="width: 100%; border-collapse: collapse; background: #ffffff; border-radius: 8px; overflow: hidden; box-shadow: 0 4px 15px rgba(0,0,0,0.06);">
          <thead>
            <tr style="background: #0f172a; color: #ffffff; text-align: left;">
              <th style="padding: 16px 20px; font-size: 0.95rem;">Vehicle Category</th>
              <th style="padding: 16px 20px; font-size: 0.95rem;">Local Ranchi Tow</th>
              <th style="padding: 16px 20px; font-size: 0.95rem;">Regional Route (Up to 500 km)</th>
              <th style="padding: 16px 20px; font-size: 0.95rem;">Interstate Metros</th>
            </tr>
          </thead>
          <tbody>
            <tr style="border-bottom: 1px solid #e2e8f0;">
              <td style="padding: 16px 20px; font-weight: 600; color: #1e293b;">Hatchback (Alto, Swift, i10)</td>
              <td style="padding: 16px 20px; color: #059669; font-weight: 700;">₹3,500 - ₹5,000</td>
              <td style="padding: 16px 20px; color: #3b82f6; font-weight: 700;">₹7,500 - ₹11,000</td>
              <td style="padding: 16px 20px; color: #6366f1; font-weight: 700;">₹12,500 - ₹18,000</td>
            </tr>
            <tr style="border-bottom: 1px solid #e2e8f0; background: #f8fafc;">
              <td style="padding: 16px 20px; font-weight: 600; color: #1e293b;">Sedan (Dzire, City, Verna)</td>
              <td style="padding: 16px 20px; color: #059669; font-weight: 700;">₹4,200 - ₹5,800</td>
              <td style="padding: 16px 20px; color: #3b82f6; font-weight: 700;">₹9,000 - ₹13,000</td>
              <td style="padding: 16px 20px; color: #6366f1; font-weight: 700;">₹14,500 - ₹21,000</td>
            </tr>
            <tr style="border-bottom: 1px solid #e2e8f0;">
              <td style="padding: 16px 20px; font-weight: 600; color: #1e293b;">Compact SUV (Brezza, Nexon, Creta)</td>
              <td style="padding: 16px 20px; color: #059669; font-weight: 700;">₹4,800 - ₹6,500</td>
              <td style="padding: 16px 20px; color: #3b82f6; font-weight: 700;">₹10,500 - ₹15,000</td>
              <td style="padding: 16px 20px; color: #6366f1; font-weight: 700;">₹16,500 - ₹24,000</td>
            </tr>
            <tr style="border-bottom: 1px solid #e2e8f0; background: #f8fafc;">
              <td style="padding: 16px 20px; font-weight: 600; color: #1e293b;">Full Luxury SUV (Fortuner, Endeavour)</td>
              <td style="padding: 16px 20px; color: #059669; font-weight: 700;">₹6,000 - ₹8,500</td>
              <td style="padding: 16px 20px; color: #3b82f6; font-weight: 700;">₹13,000 - ₹18,500</td>
              <td style="padding: 16px 20px; color: #6366f1; font-weight: 700;">₹21,000 - ₹30,000</td>
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
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #0f172a;">Frequently Asked Questions (Affordable Car Transport Ranchi)</h2>
        <p style="color: #64748b; font-size: 1.05rem;">Questions regarding price matching, safety, and delivery timelines for car transport in Ranchi.</p>
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
  var car = document.getElementById('hero_car').value.trim();

  var message = "Hello Shree Ashirwad Packers,%0A%0A" +
    "I would like to request an *Affordable Car Transport Quote* for Ranchi:%0A" +
    "*Name:* " + encodeURIComponent(name) + "%0A" +
    "*Phone:* " + encodeURIComponent(phone) + "%0A" +
    "*Pickup Address:* " + encodeURIComponent(from) + "%0A" +
    "*Destination City:* " + encodeURIComponent(to) + "%0A" +
    "*Car Model:* " + encodeURIComponent(car) + "%0A%0A" +
    "Please send me your lowest price-matched estimate on WhatsApp.";

  window.open("https://wa.me/918409531615?text=" + message, "_blank");
}
</script>

<?php 
require_once __DIR__ . '/../includes/footer.php'; 
?>
