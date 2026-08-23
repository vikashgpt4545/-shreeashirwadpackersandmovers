<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "Movers and Packers in Boring Road Patna | Verified Local Shifting";
$page_desc = "Top-rated movers and packers in Boring Road Patna. Professional home, office, and vehicle relocation services with 7-layer safety packaging, transit insurance, and IBA-approved bills.";
$page_keywords = "movers and packers in patna boring road, packers and movers boring road patna, home shifting boring road, office relocation boring road patna";
$canonical_url = "https://shreeashirwadpackersandmovers.com/pages/movers-and-packers-in-patna-boring-road.php";

$page_city = "Boring Road, Patna";

$faq_list = [
    [
        'q' => 'Why choose Shree Ashirwad Movers and Packers in Boring Road Patna?',
        'a' => 'We offer local door-to-door shifting in Boring Road with multi-layer bubble wrapping, GPS-enabled container vehicles, zero-damage guarantees, and transparent pricing.'
    ],
    [
        'q' => 'What are the local home shifting charges in Boring Road Patna?',
        'a' => '1 BHK local shifting costs ₹3,500–₹6,500, 2 BHK ranges from ₹6,500–₹11,500, and 3 BHK home shifting costs ₹10,500–₹16,500.'
    ],
    [
        'q' => 'Do you handle shifting in congested lanes around Boring Canal Road and Panch Mukhi Hanuman Mandir?',
        'a' => 'Yes, our crew uses specialized small pickup vehicles (Bolero Pickup, Tata Ace) to easily navigate narrow residential alleys in Boring Road.'
    ],
    [
        'q' => 'How early should I book movers and packers in Boring Road Patna?',
        'a' => 'Booking 24 to 48 hours in advance is recommended to ensure your preferred time slot and vehicle allocation.'
    ],
    [
        'q' => 'Are packing materials provided by your team?',
        'a' => 'Yes, we bring heavy-duty 5-ply corrugated boxes, 80-GSM bubble wraps, stretch film rolls, edge guards, and waterproof tarpaulins.'
    ],
    [
        'q' => 'Do you provide IBA-approved invoices for company relocation claims?',
        'a' => 'Yes, 100% genuine IBA-approved GST invoices and LR consignment notes are issued for bank and government employer reimbursements.'
    ],
    [
        'q' => 'Is transit insurance included for household shifting from Boring Road?',
        'a' => 'Yes, full transit insurance (1.5% declared item value) is provided to protect your belongings against unforeseen transit risks.'
    ],
    [
        'q' => 'Do you offer disassembly and reassembly of ACs, beds, and modular furniture?',
        'a' => 'Yes, skilled carpenters and technicians handle dismantling and reassembling of double beds, wardrobes, wall-mounted TVs, and split AC units.'
    ],
    [
        'q' => 'Can you relocate offices and coaching centers in Boring Road?',
        'a' => 'Yes, we specialize in overnight office and coaching institute shifting, moving computer systems, desks, whiteboards, and heavy documentation safely.'
    ],
    [
        'q' => 'How can I get an instant cost quote for Boring Road relocation?',
        'a' => 'Call +91 8409531615 or submit your pickup/drop details on WhatsApp for a 2-minute instant estimate.'
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
            BORING ROAD PATNA RELOCATION SPECIALISTS
          </span>
          <h1 style="font-size: 2.7rem; font-weight: 800; line-height: 1.2; margin-bottom: 20px; color: #ffffff;">
            Verified <span style="color: #f59e0b;">Movers & Packers in Boring Road Patna</span>
          </h1>
          <p style="font-size: 1.12rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 25px;">
            Shree Ashirwad Packers and Movers provides premier household, office, and vehicle relocation services in Boring Road Patna. Enjoy 7-layer bubble wrapping, transit insurance, and IBA-approved GST bills.
          </p>

          <div style="display: flex; gap: 15px; flex-wrap: wrap; margin-bottom: 30px;">
            <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Now" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
              <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call Now: <?php echo SITE_PHONE; ?>
            </a>
            <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20a%20Movers%20and%20Packers%20quote%20for%20Boring%20Road%20Patna." title="Chat on WhatsApp" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
              <i class="fab fa-whatsapp" style="margin-right: 8px;"></i> Chat on WhatsApp
            </a>
          </div>

          <div style="display: flex; gap: 20px; font-size: 0.9rem; color: #94a3b8;">
            <span><strong style="color: #f59e0b;">7-Layer</strong> Bubble Wrapping</span>
            <span><strong style="color: #f59e0b;">100% Insured</strong> Shifting</span>
            <span><strong style="color: #f59e0b;">IBA Approved</strong> GST Bill</span>
          </div>
        </div>

        <!-- Hero Lead Form Column -->
        <div class="hero-form-card" style="background: rgba(255, 255, 255, 0.05); backdrop-filter: blur(10px); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 16px; padding: 30px; box-shadow: 0 15px 35px rgba(0,0,0,0.4);">
          <h2 style="font-size: 1.4rem; color: #ffffff; margin-bottom: 8px; font-weight: 700; text-align: center;">Get Boring Road Shifting Quote</h2>
          <p style="font-size: 0.85rem; color: #94a3b8; text-align: center; margin-bottom: 20px;">Receive instant transparent price on WhatsApp</p>

          <form action="#" method="POST" onsubmit="sendHeroWhatsAppLead(event, this);">
            <div style="margin-bottom: 14px;">
              <input type="text" name="name" class="form-control" placeholder="Your Full Name" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="margin-bottom: 14px;">
              <input type="tel" name="phone" class="form-control" placeholder="10-Digit Phone Number" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 10px; margin-bottom: 14px;">
              <input type="text" name="move_from" class="form-control" value="Boring Road Patna" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
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
        PREMIER BORING ROAD RELOCATION SERVICES
      </span>
      <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin: 10px 0 20px 0;">
        Reliable Packers & Movers in <span style="color: #f59e0b;">Boring Road Patna</span>
      </h2>
      
      <p style="font-size: 1.05rem; color: #cbd5e1; margin-bottom: 25px;">
        Boring Road is one of Patna’s premier commercial and educational hubs, home to coaching institutes, student hostels, apartments, and corporate offices. Shree Ashirwad Packers provides specialized local and long-distance relocation across Boring Road, Boring Canal Road, Nageshwar Colony, and East Boring Canal Road.
      </p>

      <!-- Rate Matrix Table -->
      <div style="overflow-x: auto; margin: 40px 0;">
        <h3 style="font-size: 1.5rem; color: #ffffff; font-weight: 700; margin-bottom: 15px;">
          Estimated Relocation Charges in Boring Road Patna
        </h3>
        <table style="width: 100%; border-collapse: collapse; background: #172a54; border-radius: 10px; overflow: hidden; border: 1px solid rgba(245, 158, 11, 0.3);">
          <thead>
            <tr style="background: #1e3a8a; color: #f59e0b; text-align: left;">
              <th style="padding: 14px 16px;">Shifting Type</th>
              <th style="padding: 14px 16px;">Packing & Loading</th>
              <th style="padding: 14px 16px;">Transport Charge</th>
              <th style="padding: 14px 16px;">Total Approx Cost</th>
            </tr>
          </thead>
          <tbody>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.08);">
              <td style="padding: 12px 16px; font-weight: 700; color: #fff;">1 BHK Home Shifting</td>
              <td style="padding: 12px 16px; color: #cbd5e1;">₹1,800 - ₹2,800</td>
              <td style="padding: 12px 16px; color: #cbd5e1;">₹1,700 - ₹3,700</td>
              <td style="padding: 12px 16px; color: #6ee7b7;">₹3,500 - ₹6,500</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.08);">
              <td style="padding: 12px 16px; font-weight: 700; color: #fff;">2 BHK Home Shifting</td>
              <td style="padding: 12px 16px; color: #cbd5e1;">₹3,200 - ₹5,200</td>
              <td style="padding: 12px 16px; color: #cbd5e1;">₹3,300 - ₹6,300</td>
              <td style="padding: 12px 16px; color: #6ee7b7;">₹6,500 - ₹11,500</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.08);">
              <td style="padding: 12px 16px; font-weight: 700; color: #fff;">3 BHK / Villa Shifting</td>
              <td style="padding: 12px 16px; color: #cbd5e1;">₹5,200 - ₹8,200</td>
              <td style="padding: 12px 16px; color: #cbd5e1;">₹5,300 - ₹8,300</td>
              <td style="padding: 12px 16px; color: #6ee7b7;">₹10,500 - ₹16,500</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.08);">
              <td style="padding: 12px 16px; font-weight: 700; color: #fff;">Office / Commercial Relocation</td>
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
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff;">Frequently Asked Questions (Boring Road Patna)</h2>
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
  "description": "Professional movers and packers in Boring Road Patna offering household, office, and vehicle relocation services.",
  "url": "<?php echo $canonical_url; ?>",
  "telephone": "<?php echo SITE_PHONE_RAW; ?>",
  "address": {
    "@type": "PostalAddress",
    "addressLocality": "Boring Road, Patna",
    "addressRegion": "Bihar",
    "addressCountry": "IN"
  },
  "areaServed": "Boring Road, Patna, Bihar",
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
  
  var message = "Hello Shree Ashirwad Packers,\n\nI would like a Movers & Packers Quote for Boring Road Patna:\n- Name: " + name + "\n- Phone: " + phone + "\n- Moving From: " + moveFrom + "\n- Moving To: " + moveTo;
  
  var whatsappUrl = "https://api.whatsapp.com/send?phone=918409531615&text=" + encodeURIComponent(message);
  window.open(whatsappUrl, '_blank');
}
</script>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
