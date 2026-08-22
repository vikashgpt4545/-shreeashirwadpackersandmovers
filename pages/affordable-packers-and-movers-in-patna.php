<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "Affordable Packers and Movers in Patna | Price Match Guarantee & Charges";
$page_desc = "Looking for affordable packers and movers in Patna? Enjoy value-for-money household shifting, price-match assurance, 7-layer packaging, and IBA-approved GST bills.";
$page_keywords = "affordable packers and movers in patna, low cost shifting patna, budget friendly movers patna, price match packers patna, transparent moving charges patna";
$page_city = "Patna, Bihar";
$canonical_url = "https://shreeashirwadpackersandmovers.com/affordable-packers-and-movers-in-patna";

$faq_list = [
    [
        'q' => 'What makes relocation affordable with Shree Ashirwad Packers in Patna?',
        'a' => 'We offer itemized binding estimates, price-match guarantees, part-load vehicle sharing, and off-peak mid-month discounts to deliver maximum value without cutting corners.'
    ],
    [
        'q' => 'What is the average cost for affordable household shifting in Patna?',
        'a' => 'Local 1BHK shifting ranges from ₹3,500 to ₹5,800, 2BHK ranges from ₹5,800 to ₹8,800, and 3BHK household relocation ranges from ₹8,800 to ₹13,000.'
    ],
    [
        'q' => 'Do affordable moving services include packing materials and labor?',
        'a' => 'Yes, all quotes cover 5-ply corrugated boxes, bubble wrap, loading/unloading labor, truck freight, toll taxes, and GST billing.'
    ],
    [
        'q' => 'Which areas in Patna receive affordable doorstep relocation support?',
        'a' => 'Doorstep services are active across Boring Road, Kankarbagh, Danapur, Bailey Road, Patliputra Colony, Ashiana Nagar, Exhibition Road, and Bihta.'
    ],
    [
        'q' => 'How does part-load or shared truck shipping save money for vehicle transport?',
        'a' => 'By sharing container space with other verified shipments on major highway corridors (NH-30, NH-31, NH-19), transit costs are reduced by up to 40%.'
    ],
    [
        'q' => 'Are IBA approved GST invoices provided for government or bank relocation claims?',
        'a' => 'Yes, official IBA-format consignment notes, GST invoices, and payment receipts are supplied for employer claim reimbursements.'
    ],
    [
        'q' => 'Is transit insurance included in affordable shifting packages?',
        'a' => 'Yes, full transit insurance coverage protecting your household items and vehicles against highway transit risks is issued prior to vehicle dispatch.'
    ],
    [
        'q' => 'Can I get a binding price quote that will not increase on moving day?',
        'a' => 'Yes, our written written estimate is fixed and binding based on the agreed inventory list with zero surprise surcharges.'
    ],
    [
        'q' => 'What is the best time of the month to book affordable packers and movers in Patna?',
        'a' => 'Booking your move between the 5th and 24th of the month avoids peak month-end surcharges, saving you 10% to 15% on overall shifting charges.'
    ],
    [
        'q' => 'How can I get an instant affordable quote for my move in Patna?',
        'a' => 'Call +91 8409531615 or submit your requirements on WhatsApp for an immediate itemized cost estimate.'
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
            PRICE ASSURANCE PATNA
          </span>
          <h1 style="font-size: 2.7rem; font-weight: 800; line-height: 1.2; margin-bottom: 20px; color: #ffffff;">
            Affordable <span style="color: #0ea5e9;">Packers and Movers in Patna</span>
          </h1>
          <p style="font-size: 1.12rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 25px;">
            Shree Ashirwad Packers and Movers provides value-driven household relocation, bike shipping, and car transport across Patna with transparent rates, price-match guarantees, and IBA-approved GST billing.
          </p>

          <div style="display: flex; gap: 15px; flex-wrap: wrap; margin-bottom: 30px;">
            <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Now" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
              <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call Now: <?php echo SITE_PHONE; ?>
            </a>
            <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20an%20affordable%20shifting%20quote%20for%20Patna." title="Chat on WhatsApp" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
              <i class="fab fa-whatsapp" style="margin-right: 8px;"></i> Chat on WhatsApp
            </a>
          </div>

          <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 15px; border-top: 1px solid rgba(255, 255, 255, 0.1); padding-top: 20px;">
            <div>
              <h4 style="color: #0ea5e9; font-size: 1.3rem; margin-bottom: 2px;">Price Match</h4>
              <p style="font-size: 0.85rem; color: #94a3b8; margin: 0;">Guarantee Promise</p>
            </div>
            <div>
              <h4 style="color: #0ea5e9; font-size: 1.3rem; margin-bottom: 2px;">0% Hidden</h4>
              <p style="font-size: 0.85rem; color: #94a3b8; margin: 0;">Fixed Written Quote</p>
            </div>
            <div>
              <h4 style="color: #0ea5e9; font-size: 1.3rem; margin-bottom: 2px;">IBA Approved</h4>
              <p style="font-size: 0.85rem; color: #94a3b8; margin: 0;">GST Invoice</p>
            </div>
          </div>
        </div>

        <!-- Hero Form Column -->
        <div class="hero-form-wrapper" style="background: rgba(255, 255, 255, 0.05); backdrop-filter: blur(10px); border: 1px solid rgba(255, 255, 255, 0.1); padding: 30px; border-radius: 16px;">
          <h3 style="font-size: 1.4rem; color: #ffffff; margin-bottom: 20px; text-align: center;">Get Affordable Quote</h3>
          <form id="heroLeadForm" onsubmit="sendHeroWhatsAppLead(event)" style="display: flex; flex-direction: column; gap: 15px;">
            <input type="text" id="hero_name" placeholder="Your Full Name *" required style="width: 100%; padding: 12px 15px; border-radius: 8px; border: 1px solid rgba(255, 255, 255, 0.2); background: rgba(0, 0, 0, 0.3); color: #ffffff; font-size: 0.95rem;">
            <input type="tel" id="hero_phone" placeholder="Mobile / WhatsApp Number *" required pattern="[0-9]{10}" style="width: 100%; padding: 12px 15px; border-radius: 8px; border: 1px solid rgba(255, 255, 255, 0.2); background: rgba(0, 0, 0, 0.3); color: #ffffff; font-size: 0.95rem;">
            <input type="text" id="hero_from" placeholder="Pickup Locality in Patna *" required style="width: 100%; padding: 12px 15px; border-radius: 8px; border: 1px solid rgba(255, 255, 255, 0.2); background: rgba(0, 0, 0, 0.3); color: #ffffff; font-size: 0.95rem;">
            <input type="text" id="hero_to" placeholder="Destination City / Locality *" required style="width: 100%; padding: 12px 15px; border-radius: 8px; border: 1px solid rgba(255, 255, 255, 0.2); background: rgba(0, 0, 0, 0.3); color: #ffffff; font-size: 0.95rem;">
            <select id="hero_service" required style="width: 100%; padding: 12px 15px; border-radius: 8px; border: 1px solid rgba(255, 255, 255, 0.2); background: #1e293b; color: #ffffff; font-size: 0.95rem;">
              <option value="Affordable 1BHK Relocation">Affordable 1BHK Relocation</option>
              <option value="Affordable 2BHK Relocation">Affordable 2BHK Relocation</option>
              <option value="Affordable 3BHK Relocation">Affordable 3BHK Relocation</option>
              <option value="Shared Car Transport">Shared Car Transport</option>
              <option value="Part-Load Bike Transport">Part-Load Bike Transport</option>
            </select>
            <button type="submit" style="width: 100%; padding: 14px; background: linear-gradient(135deg, #0ea5e9 0%, #0284c7 100%); color: #ffffff; border: none; border-radius: 8px; font-weight: 700; font-size: 1rem; cursor: pointer; transition: all 0.3s ease;">
              Get Value Quote on WhatsApp <i class="fab fa-whatsapp" style="margin-left: 6px;"></i>
            </button>
          </form>
        </div>

      </div>
    </div>
  </section>

  <!-- Affordable Guide Section -->
  <section class="affordable-guide" style="padding: 60px 0; background: #f8fafc;">
    <div class="container">
      <div style="max-width: 900px; margin: 0 auto; background: #ffffff; padding: 40px; border-radius: 12px; box-shadow: 0 4px 20px rgba(0,0,0,0.05);">
        
        <h2 style="font-size: 2rem; color: #0f172a; margin-bottom: 20px; font-weight: 800;">
          Affordable & Value-Driven Relocation Guide for Patna
        </h2>
        
        <p style="font-size: 1.05rem; line-height: 1.8; color: #334155; margin-bottom: 20px;">
          Affordable shifting means getting maximum security and top-quality packaging at fair market rates. Shree Ashirwad Packers and Movers serves all residential areas in <strong>Patna (Bihar)</strong> including <strong>Boring Road, Kankarbagh, Danapur, Bailey Road, Patliputra Colony, Ashiana Nagar, Exhibition Road, and Bihta</strong>.
        </p>

        <h3 style="font-size: 1.4rem; color: #1e293b; margin: 25px 0 15px; font-weight: 700;">
          How We Guarantee Value-for-Money Moving
        </h3>
        
        <ul style="line-height: 1.8; color: #334155; margin-bottom: 25px; padding-left: 20px;">
          <li><strong>Price-Match Assurance:</strong> Show us any genuine written quote from a verified mover and we will optimize it.</li>
          <li><strong>Shared Transport Route Optimization:</strong> Part-load vehicle consolidation cuts highway freight costs by up to 40%.</li>
          <li><strong>No Hidden Labor Charges:</strong> Floor loading, staircase carrying, and unloading costs are locked in writing.</li>
          <li><strong>Flexible Packaging Tiers:</strong> Choose between standard economy or heavy multi-layer packing based on your item sensitivity.</li>
        </ul>

      </div>
    </div>
  </section>

  <!-- Rate Matrix Table -->
  <section class="rate-matrix" style="padding: 60px 0; background: #ffffff;">
    <div class="container">
      <div style="text-align: center; max-width: 700px; margin: 0 auto 40px;">
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #0f172a;">Affordable Shifting Tariff Matrix (Patna)</h2>
        <p style="color: #64748b; font-size: 1.05rem;">Estimated value-focused shifting rates in Patna.</p>
      </div>

      <div style="max-width: 950px; margin: 0 auto; overflow-x: auto;">
        <table style="width: 100%; border-collapse: collapse; background: #ffffff; border-radius: 8px; overflow: hidden; box-shadow: 0 4px 15px rgba(0,0,0,0.06);">
          <thead>
            <tr style="background: #0f172a; color: #ffffff; text-align: left;">
              <th style="padding: 16px 20px; font-size: 0.95rem;">Property Size</th>
              <th style="padding: 16px 20px; font-size: 0.95rem;">Local Patna Shifting</th>
              <th style="padding: 16px 20px; font-size: 0.95rem;">Intercity (Up to 500 km)</th>
              <th style="padding: 16px 20px; font-size: 0.95rem;">Interstate Relocation</th>
            </tr>
          </thead>
          <tbody>
            <tr style="border-bottom: 1px solid #e2e8f0;">
              <td style="padding: 16px 20px; font-weight: 600; color: #1e293b;">1 BHK Household Move</td>
              <td style="padding: 16px 20px; color: #059669; font-weight: 700;">₹3,500 - ₹5,800</td>
              <td style="padding: 16px 20px; color: #3b82f6; font-weight: 700;">₹8,500 - ₹13,800</td>
              <td style="padding: 16px 20px; color: #6366f1; font-weight: 700;">₹13,000 - ₹19,000</td>
            </tr>
            <tr style="border-bottom: 1px solid #e2e8f0; background: #f8fafc;">
              <td style="padding: 16px 20px; font-weight: 600; color: #1e293b;">2 BHK Household Move</td>
              <td style="padding: 16px 20px; color: #059669; font-weight: 700;">₹5,800 - ₹8,800</td>
              <td style="padding: 16px 20px; color: #3b82f6; font-weight: 700;">₹13,000 - ₹20,000</td>
              <td style="padding: 16px 20px; color: #6366f1; font-weight: 700;">₹19,500 - ₹28,000</td>
            </tr>
            <tr style="border-bottom: 1px solid #e2e8f0;">
              <td style="padding: 16px 20px; font-weight: 600; color: #1e293b;">3 BHK Household Move</td>
              <td style="padding: 16px 20px; color: #059669; font-weight: 700;">₹8,800 - ₹13,000</td>
              <td style="padding: 16px 20px; color: #3b82f6; font-weight: 700;">₹19,500 - ₹29,000</td>
              <td style="padding: 16px 20px; color: #6366f1; font-weight: 700;">₹27,000 - ₹41,000</td>
            </tr>
            <tr style="border-bottom: 1px solid #e2e8f0; background: #f8fafc;">
              <td style="padding: 16px 20px; font-weight: 600; color: #1e293b;">Bike Shipping (Part-Load)</td>
              <td style="padding: 16px 20px; color: #059669; font-weight: 700;">₹1,800 - ₹2,800</td>
              <td style="padding: 16px 20px; color: #3b82f6; font-weight: 700;">₹3,000 - ₹4,800</td>
              <td style="padding: 16px 20px; color: #6366f1; font-weight: 700;">₹4,500 - ₹7,000</td>
            </tr>
            <tr>
              <td style="padding: 16px 20px; font-weight: 600; color: #1e293b;">Car Transport (Shared Carrier)</td>
              <td style="padding: 16px 20px; color: #059669; font-weight: 700;">₹4,200 - ₹6,500</td>
              <td style="padding: 16px 20px; color: #3b82f6; font-weight: 700;">₹8,200 - ₹13,500</td>
              <td style="padding: 16px 20px; color: #6366f1; font-weight: 700;">₹12,500 - ₹20,000</td>
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
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #0f172a;">Frequently Asked Questions (Affordable Patna Shifting)</h2>
        <p style="color: #64748b; font-size: 1.05rem;">Common questions about affordable moving rates and price assurances in Patna.</p>
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
  "description": "Affordable packers and movers in Patna providing value-for-money home relocation, bike shipping, and car transport.",
  "url": "<?php echo SITE_URL; ?>/affordable-packers-and-movers-in-patna.php",
  "telephone": "<?php echo SITE_PHONE_RAW; ?>",
  "address": {
    "@type": "PostalAddress",
    "addressLocality": "Patna",
    "addressRegion": "Bihar",
    "addressCountry": "IN"
  },
  "areaServed": "Patna, Bihar",
  "priceRange": "₹3500 - ₹41000"
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
    "I would like to request an *Affordable Shifting Quote* for Patna:%0A" +
    "*Name:* " + encodeURIComponent(name) + "%0A" +
    "*Phone:* " + encodeURIComponent(phone) + "%0A" +
    "*Pickup Locality:* " + encodeURIComponent(from) + "%0A" +
    "*Destination:* " + encodeURIComponent(to) + "%0A" +
    "*Service Type:* " + encodeURIComponent(service) + "%0A%0A" +
    "Please send me an affordable price estimate on WhatsApp.";

  window.open("https://wa.me/918409531615?text=" + message, "_blank");
}
</script>

<?php 
require_once __DIR__ . '/../includes/footer.php'; 
?>
