<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "Car Transportation in Patna | Enclosed Vehicle Carrier Services";
$page_desc = "Reliable car transportation in Patna. Shree Ashirwad Packers and Movers offers enclosed car carriers, zero-scratch guarantees, transit insurance, and IBA-approved GST bills.";
$page_keywords = "car transportation in patna, car carrier patna, enclosed car transport patna, car shifting patna, vehicle transport patna";
$canonical_url = "https://shreeashirwadpackersandmovers.com/pages/car-transportation-in-patna.php";

$page_city = "Patna, Bihar";

$faq_list = [
    [
        'q' => 'How are cars transported safely from Patna by Shree Ashirwad Packers?',
        'a' => 'Cars are loaded into covered hydraulic single-car or multi-car carrier trailers equipped with synthetic wheel locks, ramp loading, and soft chassis straps.'
    ],
    [
        'q' => 'What is the cost of car transportation from Patna to major Indian cities?',
        'a' => 'Local car transfer costs ₹4,500 to ₹7,200, intercity car transport up to 500 km ranges from ₹9,000 to ₹15,000, and long-distance interstate transport ranges from ₹14,000 to ₹24,000.'
    ],
    [
        'q' => 'Is doorstep car pickup and delivery available across Patna?',
        'a' => 'Yes, our experienced drivers pick up your vehicle directly from your home address across Boring Road, Kankarbagh, Danapur, Bailey Road, Patliputra Colony, Ashiana Nagar, Exhibition Road, and Bihta.'
    ],
    [
        'q' => 'What documents are required to book car transportation in Patna?',
        'a' => 'Required documents include Vehicle Registration Certificate (RC), valid insurance policy, driver license copy, and owner ID proof (Aadhaar/PAN).'
    ],
    [
        'q' => 'Do you provide transit insurance for car transportation?',
        'a' => 'Yes, comprehensive marine/transit insurance coverage protecting your vehicle declared value against highway risks is issued prior to transit.'
    ],
    [
        'q' => 'Can personal luggage be kept in the car trunk during transport?',
        'a' => 'Up to 30-50 kg of non-hazardous personal luggage or household boxes can be placed in the car trunk following physical inspection.'
    ],
    [
        'q' => 'Do you provide real-time GPS tracking for car carrier trailers?',
        'a' => 'Yes, live GPS tracking links and direct phone contact with the container driver are provided throughout transit.'
    ],
    [
        'q' => 'Are IBA-approved GST bills provided for car transport reimbursements?',
        'a' => 'Yes, official IBA consignment notes (LR copy) and GST invoices are provided for bank and corporate claim reimbursements.'
    ],
    [
        'q' => 'How long does intercity car shipping take from Patna?',
        'a' => 'Regional state transit takes 24–48 hours, while long-distance transport to metros like Delhi, Mumbai, Bangalore, and Pune takes 3 to 5 days.'
    ],
    [
        'q' => 'How can I get an instant quote for car transportation in Patna?',
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
            PATNA CAR TRANSPORT SPECIALISTS
          </span>
          <h1 style="font-size: 2.7rem; font-weight: 800; line-height: 1.2; margin-bottom: 20px; color: #ffffff;">
            Enclosed <span style="color: #0ea5e9;">Car Transportation in Patna</span>
          </h1>
          <p style="font-size: 1.12rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 25px;">
            Shree Ashirwad Packers and Movers provides safe hatchback, sedan, and SUV car carrier transport in Patna. Enjoy covered hydraulic trailers, zero-scratch guarantees, live GPS tracking, and IBA-approved GST bills.
          </p>

          <div style="display: flex; gap: 15px; flex-wrap: wrap; margin-bottom: 30px;">
            <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Now" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
              <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call Now: <?php echo SITE_PHONE; ?>
            </a>
            <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20a%20Car%20Transportation%20quote%20for%20Patna." title="Chat on WhatsApp" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
              <i class="fab fa-whatsapp" style="margin-right: 8px;"></i> Chat on WhatsApp
            </a>
          </div>

          <div style="display: flex; gap: 20px; font-size: 0.9rem; color: #94a3b8;">
            <span><strong style="color: #0ea5e9;">Enclosed</strong> Hydraulic Carrier</span>
            <span><strong style="color: #0ea5e9;">Zero Scratch</strong> Guarantee</span>
            <span><strong style="color: #0ea5e9;">IBA Approved</strong> GST Bill</span>
          </div>
        </div>

        <!-- Hero Lead Form Column -->
        <div class="hero-form-card" style="background: rgba(255, 255, 255, 0.05); backdrop-filter: blur(10px); border: 1.5px solid rgba(14, 165, 233, 0.3); border-radius: 16px; padding: 30px; box-shadow: 0 15px 35px rgba(0,0,0,0.4);">
          <h2 style="font-size: 1.4rem; color: #ffffff; margin-bottom: 8px; font-weight: 700; text-align: center;">Get Car Transport Quote</h2>
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
        AUTOMOBILE RELOCATION SPECIALISTS
      </span>
      <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin: 10px 0 20px 0;">
        Enclosed Car Carrier Services in <span style="color: #0ea5e9;">Patna</span>
      </h2>
      
      <p style="font-size: 1.05rem; color: #cbd5e1; margin-bottom: 25px;">
        Transporting your sedan, hatchback, or SUV out of Patna requires enclosed car container trailers to protect paintwork against highway dust, gravel, and changing weather conditions. Shree Ashirwad Packers serves all residential zones in Patna.
      </p>

      <!-- Rate Matrix Table -->
      <div style="overflow-x: auto; margin: 40px 0;">
        <h3 style="font-size: 1.5rem; color: #ffffff; font-weight: 700; margin-bottom: 15px;">
          Estimated Car Carrier Rates from Patna
        </h3>
        <table style="width: 100%; border-collapse: collapse; background: #172a54; border-radius: 10px; overflow: hidden; border: 1px solid rgba(14, 165, 233, 0.3);">
          <thead>
            <tr style="background: #1e3a8a; color: #0ea5e9; text-align: left;">
              <th style="padding: 14px 16px;">Car Model Category</th>
              <th style="padding: 14px 16px;">Local Within Patna</th>
              <th style="padding: 14px 16px;">Intercity (Up to 500 km)</th>
              <th style="padding: 14px 16px;">Interstate Transport</th>
            </tr>
          </thead>
          <tbody>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.08);">
              <td style="padding: 12px 16px; font-weight: 700; color: #fff;">Hatchback Car (Alto, Swift, i10)</td>
              <td style="padding: 12px 16px; color: #6ee7b7;">₹4,500 - ₹6,000</td>
              <td style="padding: 12px 16px; color: #cbd5e1;">₹8,500 - ₹13,000</td>
              <td style="padding: 12px 16px; color: #cbd5e1;">₹13,500 - ₹20,000</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.08);">
              <td style="padding: 12px 16px; font-weight: 700; color: #fff;">Sedan Car (Dzire, City, Verna)</td>
              <td style="padding: 12px 16px; color: #6ee7b7;">₹5,200 - ₹6,800</td>
              <td style="padding: 12px 16px; color: #cbd5e1;">₹9,500 - ₹14,500</td>
              <td style="padding: 12px 16px; color: #cbd5e1;">₹15,000 - ₹22,500</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.08);">
              <td style="padding: 12px 16px; font-weight: 700; color: #fff;">SUV / MUV (Creta, Innova, Thar)</td>
              <td style="padding: 12px 16px; color: #6ee7b7;">₹6,000 - ₹7,800</td>
              <td style="padding: 12px 16px; color: #cbd5e1;">₹11,000 - ₹16,500</td>
              <td style="padding: 12px 16px; color: #cbd5e1;">₹17,000 - ₹25,500</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.08);">
              <td style="padding: 12px 16px; font-weight: 700; color: #fff;">Luxury Car (BMW, Audi, Mercedes)</td>
              <td style="padding: 12px 16px; color: #6ee7b7;">₹8,000 - ₹10,500</td>
              <td style="padding: 12px 16px; color: #cbd5e1;">₹15,000 - ₹22,000</td>
              <td style="padding: 12px 16px; color: #cbd5e1;">₹23,000 - ₹34,000</td>
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
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff;">Frequently Asked Questions (Car Transport Patna)</h2>
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
  "description": "Car transportation specialists in Patna offering enclosed hydraulic car carrier shipping, doorstep pickup, and IBA GST bills.",
  "url": "<?php echo $canonical_url; ?>",
  "telephone": "<?php echo SITE_PHONE_RAW; ?>",
  "address": {
    "@type": "PostalAddress",
    "addressLocality": "Patna",
    "addressRegion": "Bihar",
    "addressCountry": "IN"
  },
  "areaServed": "Patna, Bihar",
  "priceRange": "₹4500 - ₹34000"
}
</script>

<script>
function sendHeroWhatsAppLead(event, form) {
  event.preventDefault();
  var name = form.querySelector('[name="name"]').value;
  var phone = form.querySelector('[name="phone"]').value;
  var moveFrom = form.querySelector('[name="move_from"]').value;
  var moveTo = form.querySelector('[name="move_to"]').value;
  
  var message = "Hello Shree Ashirwad Packers,\n\nI would like a Car Transportation Quote in Patna:\n- Name: " + name + "\n- Phone: " + phone + "\n- Moving From: " + moveFrom + "\n- Moving To: " + moveTo;
  
  var whatsappUrl = "https://api.whatsapp.com/send?phone=918409531615&text=" + encodeURIComponent(message);
  window.open(whatsappUrl, '_blank');
}
</script>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
