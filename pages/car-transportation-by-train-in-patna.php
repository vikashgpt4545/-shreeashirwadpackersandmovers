<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "Car Transportation by Train in Patna | Indian Railways Auto Parcel";
$page_desc = "Affordable car transportation by train in Patna. Shree Ashirwad Packers handles Indian Railways auto parcel booking, station loading, securing, transit insurance, and doorstep delivery.";
$page_keywords = "car transportation by train in patna, car parcel by train patna, indian railways car transport patna, railway car carriage patna";
$canonical_url = "https://shreeashirwadpackersandmovers.com/pages/car-transportation-by-train-in-patna.php";

$page_city = "Patna, Bihar";

$faq_list = [
    [
        'q' => 'How does car transportation by train work in Patna?',
        'a' => 'Your car is picked up from your home in Patna, taken to Patna Junction or Danapur Railway Station parcel office, loaded into dedicated Indian Railways auto-VPU parcel rakes, and delivered to your destination city.'
    ],
    [
        'q' => 'What are the charges for car transport by train from Patna?',
        'a' => 'Railway car transport cost ranges from ₹8,500 to ₹16,500 depending on destination distance, railway parcel freight charges, and handling fees.'
    ],
    [
        'q' => 'What documents are required for shipping a car by train from Patna?',
        'a' => 'Required documents include original Vehicle Registration Certificate (RC), valid car insurance policy, owner ID copy, and driver license.'
    ],
    [
        'q' => 'Is doorstep pickup and delivery included for railway car transport?',
        'a' => 'Yes, our team handles home pickup in Patna, station documentation, loading onto train parcel wagons, destination station un-offloading, and home delivery.'
    ],
    [
        'q' => 'Should the car fuel tank be empty for railway transport?',
        'a' => 'Yes, Railway Parcel Safety Regulations mandate that the car fuel tank must have less than 1–2 liters of fuel during train transit.'
    ],
    [
        'q' => 'Do you provide transit insurance for railway car transportation?',
        'a' => 'Yes, comprehensive transit insurance policy receipts covering declared car value against transit risks are provided.'
    ],
    [
        'q' => 'How long does car shipping take by Indian Railways from Patna?',
        'a' => 'Transit time typically takes 2 to 4 days depending on train schedule and destination railway parcel node.'
    ],
    [
        'q' => 'Are IBA-approved GST bills provided for railway car transport reimbursements?',
        'a' => 'Yes, official IBA consignment notes, railway parcel receipts, and GST invoices are issued for corporate claim reimbursements.'
    ],
    [
        'q' => 'Can personal items be placed inside the car trunk during train transport?',
        'a' => 'Up to 30 kg of non-flammable personal luggage can be kept in the car trunk after physical railway inspection.'
    ],
    [
        'q' => 'How can I get an instant cost quote for railway car transport in Patna?',
        'a' => 'Call +91 8409531615 or submit your car model and destination details on WhatsApp for an immediate price estimate.'
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
          <span class="section-tag" style="background: rgba(14, 165, 233, 0.15); color: #0ea5e9; border: 1px solid rgba(14, 165, 233, 0.4); padding: 6px 16px; border-radius: 20px; font-size: 0.85rem; font-weight: 700; text-transform: uppercase; display: inline-block; margin-bottom: 15px;">
            INDIAN RAILWAYS AUTO PARCEL PATNA
          </span>
          <h1 style="font-size: 2.7rem; font-weight: 800; line-height: 1.2; margin-bottom: 20px; color: #ffffff;">
            Affordable <span style="color: #0ea5e9;">Car Transportation by Train in Patna</span>
          </h1>
          <p style="font-size: 1.12rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 25px;">
            Shree Ashirwad Packers and Movers provides reliable car transportation by train from Patna Junction and Danapur. Enjoy complete station handling, Indian Railways auto parcel booking, transit insurance, and doorstep delivery.
          </p>

          <div style="display: flex; gap: 15px; flex-wrap: wrap; margin-bottom: 30px;">
            <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Now" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
              <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call Now: <?php echo SITE_PHONE; ?>
            </a>
            <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20a%20Car%20Transport%20by%20Train%20quote%20for%20Patna." title="Chat on WhatsApp" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
              <i class="fab fa-whatsapp" style="margin-right: 8px;"></i> Chat on WhatsApp
            </a>
          </div>

          <div style="display: flex; gap: 20px; font-size: 0.9rem; color: #94a3b8;">
            <span><strong style="color: #0ea5e9;">Station-to-Door</strong> Handling</span>
            <span><strong style="color: #0ea5e9;">100% Insured</strong> Transport</span>
            <span><strong style="color: #0ea5e9;">IBA Approved</strong> GST Bill</span>
          </div>
        </div>

        <!-- Hero Lead Form Column -->
        <div class="hero-form-card" style="background: rgba(255, 255, 255, 0.05); backdrop-filter: blur(10px); border: 1.5px solid rgba(14, 165, 233, 0.3); border-radius: 16px; padding: 30px; box-shadow: 0 15px 35px rgba(0,0,0,0.4);">
          <h2 style="font-size: 1.4rem; color: #ffffff; margin-bottom: 8px; font-weight: 700; text-align: center;">Get Railway Car Transport Quote</h2>
          <p style="font-size: 0.85rem; color: #94a3b8; text-align: center; margin-bottom: 20px;">Receive instant transparent price on WhatsApp</p>

          <form action="#" method="POST" onsubmit="sendHeroWhatsAppLead(event, this);">
            <div style="margin-bottom: 14px;">
              <input type="text" name="name" class="form-control" placeholder="Your Full Name" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="margin-bottom: 14px;">
              <input type="tel" name="phone" class="form-control" placeholder="10-Digit Phone Number" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 10px; margin-bottom: 14px;">
              <input type="text" name="move_from" class="form-control" value="Patna Junction / Danapur" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
              <input type="text" name="move_to" class="form-control" placeholder="Destination City" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <button type="submit" style="width: 100%; padding: 14px; background: linear-gradient(135deg, #0ea5e9 0%, #0284c7 100%); color: #ffffff; border: none; border-radius: 50px; font-weight: 700; font-size: 1rem; cursor: pointer;">
              Get Instant Estimate &rarr;
            </button>
          </form>
        </div>

      </div>
    </div>
  </section>

  <!-- Detailed Service & Rate Matrix Section -->
  <section style="padding: 60px 0; background: #0b132b; color: #e2e8f0; line-height: 1.8;">
    <div class="container" style="max-width: 1000px;">
      
      <span class="section-tag" style="color: #0ea5e9; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">
        RAILWAY PARCEL RELOCATION SERVICES
      </span>
      <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin: 10px 0 20px 0;">
        Car Transportation by Train in <span style="color: #0ea5e9;">Patna</span>
      </h2>
      
      <p style="font-size: 1.05rem; color: #cbd5e1; margin-bottom: 25px;">
        Transporting your car by train from Patna via Indian Railways auto-VPU rake parcel services offers a safe, economical alternative to road transport. Shree Ashirwad Packers manages all documentation, loading at Patna Junction or Danapur Railway Station, and final doorstep delivery.
      </p>

      <!-- Rate Matrix Table -->
      <div style="overflow-x: auto; margin: 40px 0;">
        <h3 style="font-size: 1.5rem; color: #ffffff; font-weight: 700; margin-bottom: 15px;">
          Estimated Railway Car Transport Rates from Patna
        </h3>
        <table style="width: 100%; border-collapse: collapse; background: #172a54; border-radius: 10px; overflow: hidden; border: 1px solid rgba(14, 165, 233, 0.3);">
          <thead>
            <tr style="background: #1e3a8a; color: #0ea5e9; text-align: left;">
              <th style="padding: 14px 16px;">Car Category</th>
              <th style="padding: 14px 16px;">Regional Distance (up to 500km)</th>
              <th style="padding: 14px 16px;">Long Distance (500–1200km)</th>
              <th style="padding: 14px 16px;">Metro Interstate (>1200km)</th>
            </tr>
          </thead>
          <tbody>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.08);">
              <td style="padding: 12px 16px; font-weight: 700; color: #fff;">Hatchback Car (Alto, WagonR, i10)</td>
              <td style="padding: 12px 16px; color: #6ee7b7;">₹8,500 - ₹11,000</td>
              <td style="padding: 12px 16px; color: #cbd5e1;">₹11,000 - ₹14,500</td>
              <td style="padding: 12px 16px; color: #cbd5e1;">₹14,500 - ₹18,000</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.08);">
              <td style="padding: 12px 16px; font-weight: 700; color: #fff;">Sedan Car (Dzire, City, Verna)</td>
              <td style="padding: 12px 16px; color: #6ee7b7;">₹9,500 - ₹12,500</td>
              <td style="padding: 12px 16px; color: #cbd5e1;">₹12,500 - ₹16,000</td>
              <td style="padding: 12px 16px; color: #cbd5e1;">₹16,000 - ₹20,000</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.08);">
              <td style="padding: 12px 16px; font-weight: 700; color: #fff;">SUV / MUV (Creta, Innova, Thar)</td>
              <td style="padding: 12px 16px; color: #6ee7b7;">₹11,000 - ₹14,000</td>
              <td style="padding: 12px 16px; color: #cbd5e1;">₹14,000 - ₹18,500</td>
              <td style="padding: 12px 16px; color: #cbd5e1;">₹18,500 - ₹23,000</td>
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
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff;">Frequently Asked Questions (Car Transport by Train Patna)</h2>
      </div>

      <div style="display: flex; flex-direction: column; gap: 15px;">
        <?php foreach ($faq_list as $index => $faq): ?>
          <div style="background: #101c40; padding: 20px; border-radius: 8px; border: 1px solid rgba(14, 165, 233, 0.2);">
            <h4 style="font-size: 1.1rem; color: #0ea5e9; margin-bottom: 8px; font-weight: 700;">
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
  "description": "Car transportation by train in Patna providing Indian Railways parcel booking, station handling, doorstep pickup/delivery, and IBA GST bills.",
  "url": "<?php echo $canonical_url; ?>",
  "telephone": "<?php echo SITE_PHONE_RAW; ?>",
  "address": {
    "@type": "PostalAddress",
    "addressLocality": "Patna",
    "addressRegion": "Bihar",
    "addressCountry": "IN"
  },
  "areaServed": "Patna, Bihar",
  "priceRange": "₹8500 - ₹23000"
}
</script>

<script>
function sendHeroWhatsAppLead(event, form) {
  event.preventDefault();
  var name = form.querySelector('[name="name"]').value;
  var phone = form.querySelector('[name="phone"]').value;
  var moveFrom = form.querySelector('[name="move_from"]').value;
  var moveTo = form.querySelector('[name="move_to"]').value;
  
  var message = "Hello Shree Ashirwad Packers,\n\nI would like a Car Transport by Train Quote for Patna:\n- Name: " + name + "\n- Phone: " + phone + "\n- Moving From: " + moveFrom + "\n- Moving To: " + moveTo;
  
  var whatsappUrl = "https://api.whatsapp.com/send?phone=918409531615&text=" + encodeURIComponent(message);
  window.open(whatsappUrl, '_blank');
}
</script>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
