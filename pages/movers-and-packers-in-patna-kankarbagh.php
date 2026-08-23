<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "Movers and Packers in Kankarbagh Patna | Verified Local Shifting";
$page_desc = "Top-rated movers and packers in Kankarbagh Patna. Professional home, office, and vehicle relocation services with multi-layer packaging, transit insurance, and IBA-approved bills.";
$page_keywords = "movers and packers in patna kankarbagh, packers and movers kankarbagh patna, home shifting kankarbagh, office relocation kankarbagh patna";
$canonical_url = "https://shreeashirwadpackersandmovers.com/pages/movers-and-packers-in-patna-kankarbagh.php";

$page_city = "Kankarbagh, Patna";

$faq_list = [
    [
        'q' => 'Why choose Shree Ashirwad Movers and Packers in Kankarbagh Patna?',
        'a' => 'We offer specialized local door-to-door shifting across all sectors of Kankarbagh with multi-layer bubble wrapping, GPS-tracked vehicles, zero-damage guarantees, and clear pricing.'
    ],
    [
        'q' => 'What are the local home shifting charges in Kankarbagh Patna?',
        'a' => '1 BHK local shifting costs ₹3,500–₹6,500, 2 BHK ranges from ₹6,500–₹11,500, and 3 BHK home shifting costs ₹10,500–₹16,500.'
    ],
    [
        'q' => 'Do you serve all major colonies and sectors in Kankarbagh?',
        'a' => 'Yes, we cover Lohia Nagar, Hanuman Nagar, PC Colony, Doctor’s Colony, Ashok Nagar, Rajendra Nagar Overbridge, and Kumhrar areas.'
    ],
    [
        'q' => 'How early should I book movers and packers in Kankarbagh Patna?',
        'a' => 'Booking 24 to 48 hours in advance is recommended to reserve dedicated vehicles and expert packing personnel.'
    ],
    [
        'q' => 'Are packing materials provided by your team?',
        'a' => 'Yes, we bring heavy-duty corrugated boxes, 80-GSM bubble wrap rolls, stretch film, corrugated sheets, and waterproof tarpaulins.'
    ],
    [
        'q' => 'Do you provide IBA-approved invoices for corporate relocation claims?',
        'a' => 'Yes, 100% genuine IBA-approved GST invoices, money receipts, and LR consignment notes are provided for bank and corporate claims.'
    ],
    [
        'q' => 'Is transit insurance included for household goods shifting?',
        'a' => 'Yes, full transit insurance coverage (1.5% declared value) is issued before vehicle departure to ensure financial protection.'
    ],
    [
        'q' => 'Do you dismantle and reassemble heavy furniture and home electronics?',
        'a' => 'Yes, trained carpenters safely dismantle and reassemble beds, wardrobes, dining tables, split ACs, and TV wall mounts.'
    ],
    [
        'q' => 'Do you handle commercial and medical office shifting in Kankarbagh?',
        'a' => 'Yes, we handle office setups, diagnostic clinic equipment, IT computers, and store inventory transfers with absolute care.'
    ],
    [
        'q' => 'How can I get an instant price quotation for Kankarbagh relocation?',
        'a' => 'Call +91 8409531615 or submit your shifting details on WhatsApp for an immediate quotation.'
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
            KANKARBAGH PATNA RELOCATION SPECIALISTS
          </span>
          <h1 style="font-size: 2.7rem; font-weight: 800; line-height: 1.2; margin-bottom: 20px; color: #ffffff;">
            Verified <span style="color: #0ea5e9;">Movers & Packers in Kankarbagh Patna</span>
          </h1>
          <p style="font-size: 1.12rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 25px;">
            Shree Ashirwad Packers and Movers provides top-rated household, office, and vehicle shifting services in Kankarbagh Patna. Enjoy multi-layer bubble wrapping, transit insurance, and IBA-approved GST bills.
          </p>

          <div style="display: flex; gap: 15px; flex-wrap: wrap; margin-bottom: 30px;">
            <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Now" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
              <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call Now: <?php echo SITE_PHONE; ?>
            </a>
            <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20a%20Movers%20and%20Packers%20quote%20for%20Kankarbagh%20Patna." title="Chat on WhatsApp" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
              <i class="fab fa-whatsapp" style="margin-right: 8px;"></i> Chat on WhatsApp
            </a>
          </div>

          <div style="display: flex; gap: 20px; font-size: 0.9rem; color: #94a3b8;">
            <span><strong style="color: #0ea5e9;">Multi-Layer</strong> Packaging</span>
            <span><strong style="color: #0ea5e9;">100% Insured</strong> Transport</span>
            <span><strong style="color: #0ea5e9;">IBA Approved</strong> GST Bill</span>
          </div>
        </div>

        <!-- Hero Lead Form Column -->
        <div class="hero-form-card" style="background: rgba(255, 255, 255, 0.05); backdrop-filter: blur(10px); border: 1.5px solid rgba(14, 165, 233, 0.3); border-radius: 16px; padding: 30px; box-shadow: 0 15px 35px rgba(0,0,0,0.4);">
          <h2 style="font-size: 1.4rem; color: #ffffff; margin-bottom: 8px; font-weight: 700; text-align: center;">Get Kankarbagh Shifting Quote</h2>
          <p style="font-size: 0.85rem; color: #94a3b8; text-align: center; margin-bottom: 20px;">Receive instant transparent price on WhatsApp</p>

          <form action="#" method="POST" onsubmit="sendHeroWhatsAppLead(event, this);">
            <div style="margin-bottom: 14px;">
              <input type="text" name="name" class="form-control" placeholder="Your Full Name" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="margin-bottom: 14px;">
              <input type="tel" name="phone" class="form-control" placeholder="10-Digit Phone Number" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 10px; margin-bottom: 14px;">
              <input type="text" name="move_from" class="form-control" value="Kankarbagh Patna" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
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
        KANKARBAGH RESIDENTIAL & COMMERCIAL RELOCATION
      </span>
      <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin: 10px 0 20px 0;">
        Trusted Packers & Movers in <span style="color: #0ea5e9;">Kankarbagh Patna</span>
      </h2>
      
      <p style="font-size: 1.05rem; color: #cbd5e1; margin-bottom: 25px;">
        As one of Asia's largest residential colonies, Kankarbagh requires dedicated packing and logistics expertise to navigate multi-story apartments and bustling commercial streets. Shree Ashirwad Packers handles home shifting, office moves, bike transport, and warehouse storage with absolute reliability.
      </p>

      <!-- Rate Matrix Table -->
      <div style="overflow-x: auto; margin: 40px 0;">
        <h3 style="font-size: 1.5rem; color: #ffffff; font-weight: 700; margin-bottom: 15px;">
          Estimated Relocation Charges in Kankarbagh Patna
        </h3>
        <table style="width: 100%; border-collapse: collapse; background: #172a54; border-radius: 10px; overflow: hidden; border: 1px solid rgba(14, 165, 233, 0.3);">
          <thead>
            <tr style="background: #1e3a8a; color: #0ea5e9; text-align: left;">
              <th style="padding: 14px 16px;">Shifting Category</th>
              <th style="padding: 14px 16px;">Packing & Handling</th>
              <th style="padding: 14px 16px;">Transport Fee</th>
              <th style="padding: 14px 16px;">Total Approx Charges</th>
            </tr>
          </thead>
          <tbody>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.08);">
              <td style="padding: 12px 16px; font-weight: 700; color: #fff;">1 BHK House Shifting</td>
              <td style="padding: 12px 16px; color: #cbd5e1;">₹1,800 - ₹2,800</td>
              <td style="padding: 12px 16px; color: #cbd5e1;">₹1,700 - ₹3,700</td>
              <td style="padding: 12px 16px; color: #6ee7b7;">₹3,500 - ₹6,500</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.08);">
              <td style="padding: 12px 16px; font-weight: 700; color: #fff;">2 BHK House Shifting</td>
              <td style="padding: 12px 16px; color: #cbd5e1;">₹3,200 - ₹5,200</td>
              <td style="padding: 12px 16px; color: #cbd5e1;">₹3,300 - ₹6,300</td>
              <td style="padding: 12px 16px; color: #6ee7b7;">₹6,500 - ₹11,500</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.08);">
              <td style="padding: 12px 16px; font-weight: 700; color: #fff;">3 BHK House / Bungalow</td>
              <td style="padding: 12px 16px; color: #cbd5e1;">₹5,200 - ₹8,200</td>
              <td style="padding: 12px 16px; color: #cbd5e1;">₹5,300 - ₹8,300</td>
              <td style="padding: 12px 16px; color: #6ee7b7;">₹10,500 - ₹16,500</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.08);">
              <td style="padding: 12px 16px; font-weight: 700; color: #fff;">Office / Shop Relocation</td>
              <td style="padding: 12px 16px; color: #cbd5e1;">₹6,000 - ₹12,000</td>
              <td style="padding: 12px 16px; color: #cbd5e1;">₹6,000 - ₹14,000</td>
              <td style="padding: 12px 16px; color: #6ee7b7;">₹12,000 - ₹26,000</td>
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
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff;">Frequently Asked Questions (Kankarbagh Patna)</h2>
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
  "description": "Professional movers and packers in Kankarbagh Patna offering household, office, and vehicle relocation services.",
  "url": "<?php echo $canonical_url; ?>",
  "telephone": "<?php echo SITE_PHONE_RAW; ?>",
  "address": {
    "@type": "PostalAddress",
    "addressLocality": "Kankarbagh, Patna",
    "addressRegion": "Bihar",
    "addressCountry": "IN"
  },
  "areaServed": "Kankarbagh, Patna, Bihar",
  "priceRange": "₹3500 - ₹26000"
}
</script>

<script>
function sendHeroWhatsAppLead(event, form) {
  event.preventDefault();
  var name = form.querySelector('[name="name"]').value;
  var phone = form.querySelector('[name="phone"]').value;
  var moveFrom = form.querySelector('[name="move_from"]').value;
  var moveTo = form.querySelector('[name="move_to"]').value;
  
  var message = "Hello Shree Ashirwad Packers,\n\nI would like a Movers & Packers Quote for Kankarbagh Patna:\n- Name: " + name + "\n- Phone: " + phone + "\n- Moving From: " + moveFrom + "\n- Moving To: " + moveTo;
  
  var whatsappUrl = "https://api.whatsapp.com/send?phone=918409531615&text=" + encodeURIComponent(message);
  window.open(whatsappUrl, '_blank');
}
</script>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
