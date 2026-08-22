<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "Affordable Bike Transportation in Ranchi | Lowest Price Match Guarantee";
$page_desc = "Get affordable bike transportation in Ranchi with 100% transparent pricing and price-match guarantee. Doorstep pickup in Lalpur, Harmu, Kanke Road, Bariatu with enclosed carrier safety.";
$page_keywords = "affordable bike transportation in ranchi, cheap bike courier ranchi, low cost two wheeler transport ranchi, budget bike shifting ranchi, best rate bike packers ranchi";
$page_city = "Ranchi, Jharkhand";

$faq_list = [
    [
        'q' => 'What is the starting price for bike transportation in Ranchi?',
        'a' => 'Local intra-city bike shifting in Ranchi starts at ₹1,500, while intercity bike transport (e.g., Ranchi to Patna/Kolkata) ranges from ₹2,500 to ₹4,500 depending on bike displacement and distance.'
    ],
    [
        'q' => 'How does the Price-Match Guarantee work for bike transport in Ranchi?',
        'a' => 'If you receive a lower written estimate from another licensed mover in Ranchi, present it to us and we will match or beat the quote while maintaining our premium 7-layer packaging.'
    ],
    [
        'q' => 'Are there any hidden fuel or loading charges added to the bill?',
        'a' => 'No. We provide binding written quotes that include all loading, unloading, 7-layer wrapping, toll taxes, and GST with zero hidden add-ons.'
    ],
    [
        'q' => 'Is doorstep pickup included in affordable bike transport packages in Ranchi?',
        'a' => 'Yes, free doorstep pickup is available across all Ranchi localities including Lalpur, Harmu, Kanke Road, Main Road, Ratu Road, Bariatu, Doranda, and Dhurwa.'
    ],
    [
        'q' => 'What packing materials are used for affordable bike shipping?',
        'a' => 'We use heavy-duty bubble wrap, corrugated sheets for fairings, foam corner guards, and stretch film to protect paintwork and mirrors.'
    ],
    [
        'q' => 'Is transit insurance included with affordable bike transport in Ranchi?',
        'a' => 'Yes, optional full-value transit insurance (1.5% to 3% of declared bike value) is available for complete financial protection.'
    ],
    [
        'q' => 'How long does bike transport take from Ranchi to major metros?',
        'a' => 'Transit to nearby cities (Patna, Kolkata, Dhanbad) takes 24–48 hours, while transport to Delhi, Bangalore, or Mumbai takes 4–6 days via enclosed car/bike carriers.'
    ],
    [
        'q' => 'Can I transport a sports bike or Bullet affordably without scratch risks?',
        'a' => 'Yes, premium bikes like Royal Enfield, KTM, and BMW are secured in dedicated wooden crates or hydraulic tie-down slots at competitive rates.'
    ],
    [
        'q' => 'What documents are required for bike transportation from Ranchi?',
        'a' => 'You need to provide a copy of the bike RC (Registration Certificate), valid insurance policy, owner ID proof (Aadhaar/PAN), and bike keys.'
    ],
    [
        'q' => 'How can I get an instant affordable bike transport estimate in Ranchi?',
        'a' => 'Submit your pickup location and bike model via our WhatsApp form or call +91 8409531615 for an immediate price-matched quote.'
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
            PRICE-MATCH ASSURANCE RANCHI
          </span>
          <h1 style="font-size: 2.7rem; font-weight: 800; line-height: 1.2; margin-bottom: 20px; color: #ffffff;">
            Affordable <span style="color: #10b981;">Bike Transportation in Ranchi</span>
          </h1>
          <p style="font-size: 1.12rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 25px;">
            Looking for low-cost, damage-free two-wheeler transport in Ranchi? Shree Ashirwad Packers offers guaranteed transparent rates, 7-layer protective wrapping, and doorstep pickup across Lalpur, Harmu, Kanke Road, and all Ranchi sectors.
          </p>

          <div style="display: flex; gap: 15px; flex-wrap: wrap; margin-bottom: 30px;">
            <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Now" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
              <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call Now: <?php echo SITE_PHONE; ?>
            </a>
            <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20an%20affordable%20bike%20transportation%20quote%20for%20Ranchi." title="Chat on WhatsApp" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
              <i class="fab fa-whatsapp" style="margin-right: 8px;"></i> Chat on WhatsApp
            </a>
          </div>

          <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 15px; border-top: 1px solid rgba(255, 255, 255, 0.1); padding-top: 20px;">
            <div>
              <h4 style="color: #10b981; font-size: 1.3rem; margin-bottom: 2px;">Lowest Rate</h4>
              <p style="font-size: 0.85rem; color: #94a3b8; margin: 0;">Price-Match Guarantee</p>
            </div>
            <div>
              <h4 style="color: #10b981; font-size: 1.3rem; margin-bottom: 2px;">Zero Damage</h4>
              <p style="font-size: 0.85rem; color: #94a3b8; margin: 0;">7-Layer Bubble Wrap</p>
            </div>
            <div>
              <h4 style="color: #10b981; font-size: 1.3rem; margin-bottom: 2px;">Doorstep</h4>
              <p style="font-size: 0.85rem; color: #94a3b8; margin: 0;">Pickup across Ranchi</p>
            </div>
          </div>
        </div>

        <!-- Hero Form Column -->
        <div class="hero-form-wrapper" style="background: rgba(255, 255, 255, 0.05); backdrop-filter: blur(10px); border: 1px solid rgba(255, 255, 255, 0.1); padding: 30px; border-radius: 16px;">
          <h3 style="font-size: 1.4rem; color: #ffffff; margin-bottom: 20px; text-align: center;">Get Price-Matched Quote</h3>
          <form id="heroLeadForm" onsubmit="sendHeroWhatsAppLead(event)" style="display: flex; flex-direction: column; gap: 15px;">
            <input type="text" id="hero_name" placeholder="Your Name *" required style="width: 100%; padding: 12px 15px; border-radius: 8px; border: 1px solid rgba(255, 255, 255, 0.2); background: rgba(0, 0, 0, 0.3); color: #ffffff; font-size: 0.95rem;">
            <input type="tel" id="hero_phone" placeholder="WhatsApp Number *" required pattern="[0-9]{10}" style="width: 100%; padding: 12px 15px; border-radius: 8px; border: 1px solid rgba(255, 255, 255, 0.2); background: rgba(0, 0, 0, 0.3); color: #ffffff; font-size: 0.95rem;">
            <input type="text" id="hero_from" placeholder="Pickup Address in Ranchi *" required style="width: 100%; padding: 12px 15px; border-radius: 8px; border: 1px solid rgba(255, 255, 255, 0.2); background: rgba(0, 0, 0, 0.3); color: #ffffff; font-size: 0.95rem;">
            <input type="text" id="hero_to" placeholder="Destination City *" required style="width: 100%; padding: 12px 15px; border-radius: 8px; border: 1px solid rgba(255, 255, 255, 0.2); background: rgba(0, 0, 0, 0.3); color: #ffffff; font-size: 0.95rem;">
            <input type="text" id="hero_bike" placeholder="Bike Model (e.g. Pulsar 220, Bullet 350) *" required style="width: 100%; padding: 12px 15px; border-radius: 8px; border: 1px solid rgba(255, 255, 255, 0.2); background: rgba(0, 0, 0, 0.3); color: #ffffff; font-size: 0.95rem;">
            <button type="submit" style="width: 100%; padding: 14px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border: none; border-radius: 8px; font-weight: 700; font-size: 1rem; cursor: pointer;">
              Get Best Rate on WhatsApp <i class="fab fa-whatsapp" style="margin-left: 6px;"></i>
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
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #0f172a;">Affordable Bike Transport Price Matrix</h2>
        <p style="color: #64748b; font-size: 1.05rem;">Transparent pricing for two-wheeler relocation to and from Ranchi.</p>
      </div>

      <div style="max-width: 950px; margin: 0 auto; overflow-x: auto;">
        <table style="width: 100%; border-collapse: collapse; background: #ffffff; border-radius: 8px; overflow: hidden; box-shadow: 0 4px 15px rgba(0,0,0,0.06);">
          <thead>
            <tr style="background: #0f172a; color: #ffffff; text-align: left;">
              <th style="padding: 16px 20px; font-size: 0.95rem;">Bike Category</th>
              <th style="padding: 16px 20px; font-size: 0.95rem;">Local Ranchi Shift</th>
              <th style="padding: 16px 20px; font-size: 0.95rem;">Up to 500 km (Patna/Kolkata)</th>
              <th style="padding: 16px 20px; font-size: 0.95rem;">Long Distance (Delhi/Bangalore)</th>
            </tr>
          </thead>
          <tbody>
            <tr style="border-bottom: 1px solid #e2e8f0;">
              <td style="padding: 16px 20px; font-weight: 600; color: #1e293b;">Standard Scooters (Activa, Jupiter)</td>
              <td style="padding: 16px 20px; color: #059669; font-weight: 700;">₹1,500 - ₹2,200</td>
              <td style="padding: 16px 20px; color: #3b82f6; font-weight: 700;">₹2,500 - ₹3,800</td>
              <td style="padding: 16px 20px; color: #6366f1; font-weight: 700;">₹4,200 - ₹6,500</td>
            </tr>
            <tr style="border-bottom: 1px solid #e2e8f0; background: #f8fafc;">
              <td style="padding: 16px 20px; font-weight: 600; color: #1e293b;">Commuter Bikes (100cc - 150cc)</td>
              <td style="padding: 16px 20px; color: #059669; font-weight: 700;">₹1,800 - ₹2,500</td>
              <td style="padding: 16px 20px; color: #3b82f6; font-weight: 700;">₹3,000 - ₹4,200</td>
              <td style="padding: 16px 20px; color: #6366f1; font-weight: 700;">₹4,800 - ₹7,000</td>
            </tr>
            <tr style="border-bottom: 1px solid #e2e8f0;">
              <td style="padding: 16px 20px; font-weight: 600; color: #1e293b;">Sports / Cruiser (Bullet, Apache, KTM)</td>
              <td style="padding: 16px 20px; color: #059669; font-weight: 700;">₹2,200 - ₹3,200</td>
              <td style="padding: 16px 20px; color: #3b82f6; font-weight: 700;">₹3,800 - ₹5,500</td>
              <td style="padding: 16px 20px; color: #6366f1; font-weight: 700;">₹5,800 - ₹8,500</td>
            </tr>
            <tr style="border-bottom: 1px solid #e2e8f0; background: #f8fafc;">
              <td style="padding: 16px 20px; font-weight: 600; color: #1e293b;">Superbikes / Premium Crate Packing</td>
              <td style="padding: 16px 20px; color: #059669; font-weight: 700;">₹3,500 - ₹5,000</td>
              <td style="padding: 16px 20px; color: #3b82f6; font-weight: 700;">₹6,000 - ₹8,500</td>
              <td style="padding: 16px 20px; color: #6366f1; font-weight: 700;">₹9,500 - ₹14,000</td>
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
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #0f172a;">Frequently Asked Questions (Affordable Bike Transport Ranchi)</h2>
        <p style="color: #64748b; font-size: 1.05rem;">Clear answers on pricing, safety, and booking for bike relocation in Ranchi.</p>
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
  "description": "Affordable bike transportation in Ranchi with lowest rate guarantee, 7-layer protective wrapping, and doorstep pickup.",
  "url": "<?php echo SITE_URL; ?>/affordable-bike-transportation-in-ranchi.php",
  "telephone": "<?php echo SITE_PHONE_RAW; ?>",
  "address": {
    "@type": "PostalAddress",
    "addressLocality": "Ranchi",
    "addressRegion": "Jharkhand",
    "addressCountry": "IN"
  },
  "areaServed": "Ranchi, Jharkhand",
  "priceRange": "₹1500 - ₹14000"
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
  var bike = document.getElementById('hero_bike').value.trim();

  var message = "Hello Shree Ashirwad Packers,%0A%0A" +
    "I would like to request an *Affordable Bike Transport Quote* for Ranchi:%0A" +
    "*Name:* " + encodeURIComponent(name) + "%0A" +
    "*Phone:* " + encodeURIComponent(phone) + "%0A" +
    "*Pickup Address:* " + encodeURIComponent(from) + "%0A" +
    "*Destination City:* " + encodeURIComponent(to) + "%0A" +
    "*Bike Model:* " + encodeURIComponent(bike) + "%0A%0A" +
    "Please send me your lowest price-matched estimate on WhatsApp.";

  window.open("https://wa.me/918409531615?text=" + message, "_blank");
}
</script>

<?php 
require_once __DIR__ . '/../includes/footer.php'; 
?>
