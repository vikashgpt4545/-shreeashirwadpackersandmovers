<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "Bike Transportation in Patna | Safe Two-Wheeler Shipping Services";
$page_desc = "Professional bike transportation in Patna, Bihar. Secure door-to-door motorcycle and scooter shifting with 7-layer foam crating, transit insurance, and IBA-approved GST bills.";
$page_keywords = "bike transportation in patna, motorcycle transport patna, scooter shifting patna, two wheeler parcel patna, insured bike transport patna";
$canonical_url = "https://shreeashirwadpackersandmovers.com/pages/bike-transportation-in-patna.php";

$page_city = "Patna, Bihar";

$faq_list = [
    [
        'q' => 'How are bikes transported safely from Patna by Shree Ashirwad Packers?',
        'a' => 'Bikes undergo multi-layer bubble wrapping, foam edge shielding, corrugated sheet encasing, and wheel-anchoring inside dedicated closed transport containers.'
    ],
    [
        'q' => 'What is the cost of bike transportation from Patna to other cities?',
        'a' => 'Local within-city bike transfer costs ₹1,500–₹2,500, intercity bike shipping up to 500 km ranges from ₹3,500–₹5,500, and long-distance interstate shipping ranges from ₹5,200–₹8,000.'
    ],
    [
        'q' => 'Is doorstep pickup and delivery included for bike shipping in Patna?',
        'a' => 'Yes, doorstep pickup is active across Boring Road, Kankarbagh, Danapur, Bailey Road, Patliputra Colony, Ashiana Nagar, Exhibition Road, and Bihta.'
    ],
    [
        'q' => 'What documents are needed to send a bike via transport from Patna?',
        'a' => 'A valid copy of the Vehicle Registration Certificate (RC), current insurance policy, driver license copy, and government ID proof (Aadhaar/PAN) are required.'
    ],
    [
        'q' => 'Do I need to drain fuel before handing over the bike?',
        'a' => 'Yes, fuel levels must be kept below 1 liter to comply with national highway transport safety standards.'
    ],
    [
        'q' => 'Is transit insurance provided for bike shipping?',
        'a' => 'Yes, full transit insurance coverage (1.5% declared value) protecting against highway accidents or theft is issued prior to loading.'
    ],
    [
        'q' => 'Are IBA-approved GST invoices provided for official bike transport claims?',
        'a' => 'Yes, 100% genuine IBA consignment notes (LR copies) and GST tax invoices are provided for bank and government employer claims.'
    ],
    [
        'q' => 'Can sports bikes and heavy cruisers (Royal Enfield, Harley) be transported safely?',
        'a' => 'Yes, heavy cruisers and sports bikes receive custom wooden crating, heavy-duty foam blocks, and dedicated nylon tie-downs.'
    ],
    [
        'q' => 'How long does it take for a bike parcel to reach major metros from Patna?',
        'a' => 'Nearby state transport takes 24–48 hours, while shipments to Delhi, Mumbai, Bangalore, and Kolkata take 3 to 5 days.'
    ],
    [
        'q' => 'How can I book bike transportation in Patna?',
        'a' => 'Call +91 8409531615 or submit your motorcycle model and destination details on WhatsApp for an immediate price estimate.'
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
            PATNA BIKE TRANSPORT SPECIALISTS
          </span>
          <h1 style="font-size: 2.7rem; font-weight: 800; line-height: 1.2; margin-bottom: 20px; color: #ffffff;">
            Professional <span style="color: #f59e0b;">Bike Transportation in Patna</span>
          </h1>
          <p style="font-size: 1.12rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 25px;">
            Shree Ashirwad Packers and Movers offers secure, zero-scratch motorcycle, scooter, and sports bike transport in Patna. Enjoy wooden crate packing, transit insurance, and 100% IBA-approved GST bills.
          </p>

          <div style="display: flex; gap: 15px; flex-wrap: wrap; margin-bottom: 30px;">
            <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Now" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
              <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call Now: <?php echo SITE_PHONE; ?>
            </a>
            <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20a%20Bike%20Transportation%20quote%20for%20Patna." title="Chat on WhatsApp" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
              <i class="fab fa-whatsapp" style="margin-right: 8px;"></i> Chat on WhatsApp
            </a>
          </div>

          <div style="display: flex; gap: 20px; font-size: 0.9rem; color: #94a3b8;">
            <span><strong style="color: #f59e0b;">Wooden Crate</strong> Packing</span>
            <span><strong style="color: #f59e0b;">100% Insured</strong> Transit</span>
            <span><strong style="color: #f59e0b;">IBA Approved</strong> GST Bill</span>
          </div>
        </div>

        <!-- Hero Lead Form Column -->
        <div class="hero-form-card" style="background: rgba(255, 255, 255, 0.05); backdrop-filter: blur(10px); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 16px; padding: 30px; box-shadow: 0 15px 35px rgba(0,0,0,0.4);">
          <h2 style="font-size: 1.4rem; color: #ffffff; margin-bottom: 8px; font-weight: 700; text-align: center;">Get Bike Transport Quote</h2>
          <p style="font-size: 0.85rem; color: #94a3b8; text-align: center; margin-bottom: 20px;">Receive instant transparent price on WhatsApp</p>

          <form action="#" method="POST" onsubmit="sendHeroWhatsAppLead(event, this);">
            <div style="margin-bottom: 14px;">
              <input type="text" name="name" class="form-control" placeholder="Your Full Name" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="margin-bottom: 14px;">
              <input type="tel" name="phone" class="form-control" placeholder="10-Digit Phone Number" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 10px; margin-bottom: 14px;">
              <input type="text" name="move_from" class="form-control" value="Patna (Pickup)" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
              <input type="text" name="move_to" class="form-control" placeholder="Destination City" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <button type="submit" style="width: 100%; padding: 14px; background: linear-gradient(135deg, #d32f2f 0%, #f59e0b 100%); color: #ffffff; border: none; border-radius: 50px; font-weight: 700; font-size: 1rem; cursor: pointer;">
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
      
      <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">
        TWO-WHEELER PARCEL SPECIALISTS
      </span>
      <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin: 10px 0 20px 0;">
        Safe Bike Transportation Services in <span style="color: #f59e0b;">Patna</span>
      </h2>
      
      <p style="font-size: 1.05rem; color: #cbd5e1; margin-bottom: 25px;">
        Whether you are moving a commuter motorcycle, a Scooty, or a premium Royal Enfield / sports bike out of Patna, Shree Ashirwad Packers and Movers provides zero-scratch transportation in enclosed container trucks across all Patna districts.
      </p>

      <!-- Rate Matrix Table -->
      <div style="overflow-x: auto; margin: 40px 0;">
        <h3 style="font-size: 1.5rem; color: #ffffff; font-weight: 700; margin-bottom: 15px;">
          Estimated Bike Transportation Rates from Patna
        </h3>
        <table style="width: 100%; border-collapse: collapse; background: #172a54; border-radius: 10px; overflow: hidden; border: 1px solid rgba(245, 158, 11, 0.3);">
          <thead>
            <tr style="background: #1e3a8a; color: #f59e0b; text-align: left;">
              <th style="padding: 14px 16px;">Two-Wheeler Model</th>
              <th style="padding: 14px 16px;">Local Within Patna</th>
              <th style="padding: 14px 16px;">Intercity (Up to 500 km)</th>
              <th style="padding: 14px 16px;">Interstate Shipping</th>
            </tr>
          </thead>
          <tbody>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.08);">
              <td style="padding: 12px 16px; font-weight: 700; color: #fff;">Scooter / Scooty (Activa, Jupiter)</td>
              <td style="padding: 12px 16px; color: #6ee7b7;">₹1,500 - ₹2,200</td>
              <td style="padding: 12px 16px; color: #cbd5e1;">₹3,200 - ₹4,500</td>
              <td style="padding: 12px 16px; color: #cbd5e1;">₹4,800 - ₹6,800</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.08);">
              <td style="padding: 12px 16px; font-weight: 700; color: #fff;">Standard Commuter Bike (100-150cc)</td>
              <td style="padding: 12px 16px; color: #6ee7b7;">₹1,800 - ₹2,500</td>
              <td style="padding: 12px 16px; color: #cbd5e1;">₹3,500 - ₹5,200</td>
              <td style="padding: 12px 16px; color: #cbd5e1;">₹5,200 - ₹7,500</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.08);">
              <td style="padding: 12px 16px; font-weight: 700; color: #fff;">Royal Enfield / Cruiser (200-500cc)</td>
              <td style="padding: 12px 16px; color: #6ee7b7;">₹2,200 - ₹3,000</td>
              <td style="padding: 12px 16px; color: #cbd5e1;">₹4,200 - ₹6,200</td>
              <td style="padding: 12px 16px; color: #cbd5e1;">₹6,200 - ₹8,800</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.08);">
              <td style="padding: 12px 16px; font-weight: 700; color: #fff;">Sports Bike / Superbike (500cc+)</td>
              <td style="padding: 12px 16px; color: #6ee7b7;">₹2,800 - ₹3,800</td>
              <td style="padding: 12px 16px; color: #cbd5e1;">₹5,500 - ₹8,000</td>
              <td style="padding: 12px 16px; color: #cbd5e1;">₹8,000 - ₹12,000</td>
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
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff;">Frequently Asked Questions (Bike Transport Patna)</h2>
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
  "description": "Bike transportation specialists in Patna offering safe two-wheeler shipping, wooden crate packing, and transit insurance.",
  "url": "<?php echo $canonical_url; ?>",
  "telephone": "<?php echo SITE_PHONE_RAW; ?>",
  "address": {
    "@type": "PostalAddress",
    "addressLocality": "Patna",
    "addressRegion": "Bihar",
    "addressCountry": "IN"
  },
  "areaServed": "Patna, Bihar",
  "priceRange": "₹1500 - ₹12000"
}
</script>

<script>
function sendHeroWhatsAppLead(event, form) {
  event.preventDefault();
  var name = form.querySelector('[name="name"]').value;
  var phone = form.querySelector('[name="phone"]').value;
  var moveFrom = form.querySelector('[name="move_from"]').value;
  var moveTo = form.querySelector('[name="move_to"]').value;
  
  var message = "Hello Shree Ashirwad Packers,\n\nI would like a Bike Transportation Quote in Patna:\n- Name: " + name + "\n- Phone: " + phone + "\n- Moving From: " + moveFrom + "\n- Moving To: " + moveTo;
  
  var whatsappUrl = "https://api.whatsapp.com/send?phone=918409531615&text=" + encodeURIComponent(message);
  window.open(whatsappUrl, '_blank');
}
</script>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
