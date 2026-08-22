<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "Car Transportation in Malda | Professional Car Carrier WB-66";
$page_desc = "Reliable car transportation in Malda (English Bazar WB-66 RTO), West Bengal. Open & enclosed hydraulic car carriers, doorstep pick-up, and full transit insurance via NH-12 & NH-81 corridors.";
$page_keywords = "car transportation in malda, best car carrier malda, affordable car shipping malda, car movers malda, doorstep car delivery malda";
$canonical_url = "https://shreeashirwadpackersandmovers.com/pages/car-transportation-in-malda.php";

$page_city = "Malda, West Bengal";

$faq_list = [
    [
        'q' => 'How are cars safely transported to/from Malda (WB-66 RTO)?',
        'a' => 'Vehicles are loaded via hydraulic ramps onto multi-car open trailers or single-car enclosed containers, secured with 4-point wheel tie-down belts and rubber tire stoppers.'
    ],
    [
        'q' => 'What are the car transport rates from Malda to Kolkata, Siliguri, or Delhi?',
        'a' => 'Regional car transport to Kolkata or Siliguri starts at ₹4,500–₹7,500 for hatchbacks, while long-distance interstate transport to Delhi, Mumbai, or Bengaluru ranges from ₹9,500 to ₹19,500.'
    ],
    [
        'q' => 'Which major transport highways serve Malda car shipping?',
        'a' => 'Car carriers travel via NH-12 (Kolkata-Malda-Siliguri highway), NH-81 (Malda-Katihar road), English Bazar bypass, and Rathbari junction.'
    ],
    [
        'q' => 'Do you pick up cars directly from residences in Malda?',
        'a' => 'Yes, free doorstep pickup is available across English Bazar, Rathbari, Mangalbari, Foara More, Mahanandapally, Mokdumpur, and Old Malda.'
    ],
    [
        'q' => 'Is transit insurance included during Malda car shipping?',
        'a' => 'Yes, full-value transit insurance policies are arranged covering your car against highway damage, fire, or accidental loss during transit.'
    ],
    [
        'q' => 'Can I store personal items inside the car trunk during transport?',
        'a' => 'Up to 30–40 kg of non-hazardous household items can be packed in the car trunk, provided they are safely locked.'
    ],
    [
        'q' => 'What documentation is required to ship a car from Malda?',
        'a' => 'Required documents are original RC copy, active car insurance policy, owner Aadhaar card copy, and signed vehicle inspection sheet.'
    ],
    [
        'q' => 'How long does car carrier delivery take from Malda?',
        'a' => 'Intercity transit within West Bengal and North Bengal takes 24–48 hours, while long-distance deliveries to Mumbai, Bengaluru, or Chennai take 4–6 days.'
    ],
    [
        'q' => 'Do you provide IBA approved GST bills for corporate/govt car transport claim?',
        'a' => 'Yes, 100% genuine IBA-compliant GST consignment invoices, car condition sheets, and payment receipts are supplied.'
    ],
    [
        'q' => 'How can I book car carrier service in Malda?',
        'a' => 'Call +91 8409531615 or submit your vehicle details on WhatsApp for instant quote generation and vehicle carrier slot reservation.'
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
            CAR TRANSPORTATION MALDA (ENGLISH BAZAR WB-66)
          </span>
          <h1 style="font-size: 2.7rem; font-weight: 800; line-height: 1.2; margin-bottom: 20px; color: #ffffff;">
            Professional <span style="color: #f59e0b;">Car Transportation in Malda</span>
          </h1>
          <p style="font-size: 1.12rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 25px;">
            Shree Ashirwad Packers and Movers provides doorstep car carrier services across Malda (English Bazar WB-66 RTO) via NH-12 and NH-81 corridors. Featuring open-trailer and enclosed car container shipping, hydraulic ramp loading, 4-point wheel locks, and 100% IBA-compliant GST billing.
          </p>

          <div style="display: flex; gap: 15px; flex-wrap: wrap; margin-bottom: 30px;">
            <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Now" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
              <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call Now: <?php echo SITE_PHONE; ?>
            </a>
            <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20a%20car%20transport%20quote%20for%20Malda." title="Chat on WhatsApp" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
              <i class="fab fa-whatsapp" style="margin-right: 8px;"></i> Chat on WhatsApp
            </a>
          </div>

          <div style="display: flex; gap: 20px; font-size: 0.9rem; color: #94a3b8;">
            <span><strong style="color: #f59e0b;">100% Insured</strong> Shifting</span>
            <span><strong style="color: #f59e0b;">Hydraulic Ramp</strong> Loading</span>
            <span><strong style="color: #f59e0b;">Door-to-Door</strong> Pick & Drop</span>
          </div>
        </div>

        <!-- Hero Lead Form Column -->
        <div class="hero-form-card" style="background: rgba(255, 255, 255, 0.05); backdrop-filter: blur(10px); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 16px; padding: 30px; box-shadow: 0 15px 35px rgba(0,0,0,0.4);">
          <h2 style="font-size: 1.4rem; color: #ffffff; margin-bottom: 8px; font-weight: 700; text-align: center;">Get Malda Car Quote</h2>
          <p style="font-size: 0.85rem; color: #94a3b8; text-align: center; margin-bottom: 20px;">Receive transparent cost estimation on WhatsApp</p>

          <form action="#" method="POST" onsubmit="sendHeroWhatsAppLead(event, this);">
            <div style="margin-bottom: 14px;">
              <input type="text" name="name" class="form-control" placeholder="Your Full Name" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="margin-bottom: 14px;">
              <input type="tel" name="phone" class="form-control" placeholder="10-Digit Phone Number" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 10px; margin-bottom: 14px;">
              <input type="text" name="move_from" class="form-control" value="Malda" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
              <input type="text" name="move_to" class="form-control" placeholder="Destination City" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <button type="submit" style="width: 100%; padding: 14px; background: linear-gradient(135deg, #d32f2f 0%, #f59e0b 100%); color: #ffffff; border: none; border-radius: 50px; font-weight: 700; font-size: 1rem; cursor: pointer;">
              Get Instant Car Estimate &rarr;
            </button>
          </form>
        </div>

      </div>
    </div>
  </section>

  <!-- Detailed Service & Rate Matrix Section -->
  <section style="padding: 60px 0; background: #0b132b; color: #e2e8f0; line-height: 1.8;">
    <div class="container" style="max-width: 1000px;">
      
      <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">
        MALDA VEHICLE LOGISTICS
      </span>
      <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin: 10px 0 20px 0;">
        Doorstep Car Carrier Shipping in <span style="color: #f59e0b;">Malda</span>
      </h2>
      
      <p style="font-size: 1.05rem; color: #cbd5e1; margin-bottom: 25px;">
        Shree Ashirwad Packers and Movers provides safe car transportation across English Bazar, Rathbari, Mangalbari, Foara More, Mahanandapally, Mokdumpur, and Old Malda. We utilize open multi-car trailers and single-car enclosed hydraulic containers equipped with 4-point wheel tie-down safety locks.
      </p>

      <!-- Rate Matrix Table -->
      <div style="overflow-x: auto; margin: 40px 0;">
        <h3 style="font-size: 1.5rem; color: #ffffff; font-weight: 700; margin-bottom: 15px;">
          Estimated Car Carrier Rates for Malda
        </h3>
        <table style="width: 100%; border-collapse: collapse; background: #172a54; border-radius: 10px; overflow: hidden; border: 1px solid rgba(245, 158, 11, 0.3);">
          <thead>
            <tr style="background: #1e3a8a; color: #f59e0b; text-align: left;">
              <th style="padding: 14px 16px;">Vehicle Category</th>
              <th style="padding: 14px 16px;">Regional Transit (Kolkata / Siliguri / Raiganj)</th>
              <th style="padding: 14px 16px;">Interstate Metros (Delhi / Mumbai / Kolkata)</th>
            </tr>
          </thead>
          <tbody>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.08);">
              <td style="padding: 12px 16px; font-weight: 700; color: #fff;">Hatchback (Alto, Swift, WagonR)</td>
              <td style="padding: 12px 16px; color: #6ee7b7;">₹4,500 - ₹6,500</td>
              <td style="padding: 12px 16px; color: #cbd5e1;">₹9,500 - ₹14,500</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.08);">
              <td style="padding: 12px 16px; font-weight: 700; color: #fff;">Sedan (Dzire, City, Verna)</td>
              <td style="padding: 12px 16px; color: #6ee7b7;">₹5,500 - ₹7,500</td>
              <td style="padding: 12px 16px; color: #cbd5e1;">₹11,500 - ₹17,000</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.08);">
              <td style="padding: 12px 16px; font-weight: 700; color: #fff;">SUV / MUV (Creta, Fortuner, Innova)</td>
              <td style="padding: 12px 16px; color: #6ee7b7;">₹6,800 - ₹9,500</td>
              <td style="padding: 12px 16px; color: #cbd5e1;">₹13,500 - ₹21,000</td>
            </tr>
          </tbody>
        </table>
      </div>

    </div>
  </section>

  <!-- FAQ Section with Schema Support -->
  <section class="faq-section" style="padding: 60px 0; background: #070d1e; color: #ffffff;">
    <div class="container" style="max-width: 900px;">
      <div style="text-align: center; margin-bottom: 40px;">
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff;">Frequently Asked Questions (Car Transport Malda)</h2>
      </div>

      <div style="display: flex; flex-direction: column; gap: 15px;">
        <?php foreach ($faq_list as $index => $faq): ?>
          <div style="background: #101c40; padding: 20px; border-radius: 8px; border: 1px solid rgba(245, 158, 11, 0.2);">
            <h4 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 8px; font-weight: 700;">
              <?php echo ($index + 1) . '. ' . htmlspecialchars($faq['q']); ?>
            </h4>
            <p style="font-size: 0.98rem; color: #cbd5e1; line-height: 1.7; margin: 0;">
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
  "description": "Professional car transportation in Malda, West Bengal with doorstep pickup and transit insurance.",
  "url": "<?php echo $canonical_url; ?>",
  "telephone": "<?php echo SITE_PHONE_RAW; ?>",
  "address": {
    "@type": "PostalAddress",
    "addressLocality": "Malda",
    "addressRegion": "West Bengal",
    "addressCountry": "IN"
  },
  "areaServed": "Malda, West Bengal",
  "priceRange": "₹4500 - ₹21000"
}
</script>

<script>
function sendHeroWhatsAppLead(event, form) {
  event.preventDefault();
  var name = form.querySelector('[name="name"]').value;
  var phone = form.querySelector('[name="phone"]').value;
  var moveFrom = form.querySelector('[name="move_from"]').value;
  var moveTo = form.querySelector('[name="move_to"]').value;
  
  var message = "Hello Shree Ashirwad Packers,\n\nI would like a Car Transport Quote for Malda:\n- Name: " + name + "\n- Phone: " + phone + "\n- Moving From: " + moveFrom + "\n- Moving To: " + moveTo;
  
  var whatsappUrl = "https://api.whatsapp.com/send?phone=918409531615?text=" + encodeURIComponent(message);
  window.open(whatsappUrl, '_blank');
}
</script>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
