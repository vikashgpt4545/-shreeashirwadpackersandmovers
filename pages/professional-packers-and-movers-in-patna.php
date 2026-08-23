<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "Professional Packers and Movers in Patna | Experienced Crew";
$page_desc = "Hire professional packers and movers in Patna. Shree Ashirwad Packers offers trained uniform crews, 7-layer packaging, IBA-approved GST bills, and safe relocation.";
$page_keywords = "professional packers and movers in patna, professional movers patna, trained packers patna, expert home shifting patna, IBA approved movers patna";
$canonical_url = "https://shreeashirwadpackersandmovers.com/pages/professional-packers-and-movers-in-patna.php";

$page_city = "Patna, Bihar";

$faq_list = [
    [
        'q' => 'What makes Shree Ashirwad professional packers and movers in Patna?',
        'a' => 'Our in-house uniform trained staff, heavy-duty packing material, modern hydraulic car carriers, and 100% IBA GST compliance.'
    ],
    [
        'q' => 'What are the charges for professional packers and movers in Patna?',
        'a' => 'Local 1BHK relocation ranges from ₹4,200 to ₹6,500, 2BHK ranges from ₹6,500 to ₹9,500, and 3BHK household moving costs ₹9,500 to ₹14,500.'
    ],
    [
        'q' => 'Which areas in Patna receive professional relocation services?',
        'a' => 'Doorstep services are active across Boring Road, Kankarbagh, Danapur, Bailey Road, Patliputra Colony, Ashiana Nagar, Exhibition Road, and Bihta.'
    ],
    [
        'q' => 'Do professional movers provide transit insurance coverage?',
        'a' => 'Yes, 100% full transit insurance coverage (1.5% declared value) is issued prior to packing to safeguard your goods during transit.'
    ],
    [
        'q' => 'Are IBA-approved GST bills provided for corporate employee reimbursement?',
        'a' => 'Yes, official IBA consignment notes, GST invoices, and money receipts are provided for corporate claim submissions.'
    ],
    [
        'q' => 'What safety standards are used for packing fragile furniture and electronics?',
        'a' => 'We use 7-layer safety packaging including 80-GSM bubble wrap, corrugated sheets, foam corner guards, and wooden crates.'
    ],
    [
        'q' => 'Can professional movers transport my car or bike along with household items?',
        'a' => 'Yes, we provide specialized enclosed car carrier transport and two-wheeler bike crate packing services.'
    ],
    [
        'q' => 'How long does intercity household shifting take from Patna?',
        'a' => 'Intercity shipments to neighboring states take 24–48 hours, while transport to metros like Delhi, Mumbai, or Bangalore takes 3 to 5 days.'
    ],
    [
        'q' => 'Do professional packers handle unboxing and furniture reassembly at destination?',
        'a' => 'Yes, full unboxing, furniture reassembly, bed setup, and appliance positioning are included in our premium services.'
    ],
    [
        'q' => 'How can I get a professional price quotation for packing and moving in Patna?',
        'a' => 'Call +91 8409531615 or submit your moving details on WhatsApp for an immediate itemized cost estimate.'
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
            PATNA PROFESSIONAL MOVERS EXPERTS
          </span>
          <h1 style="font-size: 2.7rem; font-weight: 800; line-height: 1.2; margin-bottom: 20px; color: #ffffff;">
            Highly <span style="color: #0ea5e9;">Professional Packers and Movers in Patna</span>
          </h1>
          <p style="font-size: 1.12rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 25px;">
            Shree Ashirwad Packers and Movers delivers professional household shifting, corporate office relocation, and vehicle shipping in Patna. Enjoy 7-layer safety packaging, trained staff, 100% transit insurance, and IBA-approved GST bills.
          </p>

          <div style="display: flex; gap: 15px; flex-wrap: wrap; margin-bottom: 30px;">
            <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Now" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
              <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call Now: <?php echo SITE_PHONE; ?>
            </a>
            <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20a%20Professional%20Movers%20quote%20for%20Patna." title="Chat on WhatsApp" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
              <i class="fab fa-whatsapp" style="margin-right: 8px;"></i> Chat on WhatsApp
            </a>
          </div>

          <div style="display: flex; gap: 20px; font-size: 0.9rem; color: #94a3b8;">
            <span><strong style="color: #0ea5e9;">Trained Uniform</strong> Crew</span>
            <span><strong style="color: #0ea5e9;">100% Insured</strong> Transport</span>
            <span><strong style="color: #0ea5e9;">IBA Approved</strong> GST Bill</span>
          </div>
        </div>

        <!-- Hero Lead Form Column -->
        <div class="hero-form-card" style="background: rgba(255, 255, 255, 0.05); backdrop-filter: blur(10px); border: 1.5px solid rgba(14, 165, 233, 0.3); border-radius: 16px; padding: 30px; box-shadow: 0 15px 35px rgba(0,0,0,0.4);">
          <h2 style="font-size: 1.4rem; color: #ffffff; margin-bottom: 8px; font-weight: 700; text-align: center;">Get Professional Quote</h2>
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
        PROFESSIONAL RELOCATION LOGISTICS
      </span>
      <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin: 10px 0 20px 0;">
        Professional Packers and Movers in <span style="color: #0ea5e9;">Patna</span>
      </h2>
      
      <p style="font-size: 1.05rem; color: #cbd5e1; margin-bottom: 25px;">
        Shree Ashirwad Packers provides professional packing, loading, transport, and unloading services across all major localities in Patna including Boring Road, Kankarbagh, Danapur, Bailey Road, Patliputra Colony, Ashiana Nagar, Exhibition Road, and Bihta.
      </p>

      <!-- Rate Matrix Table -->
      <div style="overflow-x: auto; margin: 40px 0;">
        <h3 style="font-size: 1.5rem; color: #ffffff; font-weight: 700; margin-bottom: 15px;">
          Estimated Professional Shifting Charges in Patna
        </h3>
        <table style="width: 100%; border-collapse: collapse; background: #172a54; border-radius: 10px; overflow: hidden; border: 1px solid rgba(14, 165, 233, 0.3);">
          <thead>
            <tr style="background: #1e3a8a; color: #0ea5e9; text-align: left;">
              <th style="padding: 14px 16px;">Move Type</th>
              <th style="padding: 14px 16px;">Local Patna Shift</th>
              <th style="padding: 14px 16px;">Intercity (Up to 500 km)</th>
              <th style="padding: 14px 16px;">Interstate Relocation</th>
            </tr>
          </thead>
          <tbody>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.08);">
              <td style="padding: 12px 16px; font-weight: 700; color: #fff;">1 BHK Household Move</td>
              <td style="padding: 12px 16px; color: #6ee7b7;">₹4,200 - ₹6,500</td>
              <td style="padding: 12px 16px; color: #cbd5e1;">₹9,000 - ₹14,500</td>
              <td style="padding: 12px 16px; color: #cbd5e1;">₹14,000 - ₹20,500</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.08);">
              <td style="padding: 12px 16px; font-weight: 700; color: #fff;">2 BHK Household Move</td>
              <td style="padding: 12px 16px; color: #6ee7b7;">₹6,500 - ₹9,500</td>
              <td style="padding: 12px 16px; color: #cbd5e1;">₹14,000 - ₹22,000</td>
              <td style="padding: 12px 16px; color: #cbd5e1;">₹21,000 - ₹31,000</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.08);">
              <td style="padding: 12px 16px; font-weight: 700; color: #fff;">3 BHK / Villa Move</td>
              <td style="padding: 12px 16px; color: #6ee7b7;">₹9,500 - ₹14,500</td>
              <td style="padding: 12px 16px; color: #cbd5e1;">₹21,000 - ₹32,000</td>
              <td style="padding: 12px 16px; color: #cbd5e1;">₹30,000 - ₹46,000</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.08);">
              <td style="padding: 12px 16px; font-weight: 700; color: #fff;">Bike Crate Shipping</td>
              <td style="padding: 12px 16px; color: #6ee7b7;">₹2,000 - ₹3,200</td>
              <td style="padding: 12px 16px; color: #cbd5e1;">₹3,500 - ₹5,500</td>
              <td style="padding: 12px 16px; color: #cbd5e1;">₹5,200 - ₹8,000</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.08);">
              <td style="padding: 12px 16px; font-weight: 700; color: #fff;">Enclosed Car Carrier</td>
              <td style="padding: 12px 16px; color: #6ee7b7;">₹4,500 - ₹7,200</td>
              <td style="padding: 12px 16px; color: #cbd5e1;">₹9,000 - ₹15,000</td>
              <td style="padding: 12px 16px; color: #cbd5e1;">₹14,000 - ₹24,000</td>
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
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff;">Frequently Asked Questions (Professional Movers Patna)</h2>
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
  "description": "Professional packers and movers in Patna providing uniform trained crews, 7-layer packaging, vehicle shipping, and IBA GST bills.",
  "url": "<?php echo $canonical_url; ?>",
  "telephone": "<?php echo SITE_PHONE_RAW; ?>",
  "address": {
    "@type": "PostalAddress",
    "addressLocality": "Patna",
    "addressRegion": "Bihar",
    "addressCountry": "IN"
  },
  "areaServed": "Patna, Bihar",
  "priceRange": "₹4200 - ₹46000"
}
</script>

<script>
function sendHeroWhatsAppLead(event, form) {
  event.preventDefault();
  var name = form.querySelector('[name="name"]').value;
  var phone = form.querySelector('[name="phone"]').value;
  var moveFrom = form.querySelector('[name="move_from"]').value;
  var moveTo = form.querySelector('[name="move_to"]').value;
  
  var message = "Hello Shree Ashirwad Packers,\n\nI would like a Professional Movers Quote for Patna:\n- Name: " + name + "\n- Phone: " + phone + "\n- Moving From: " + moveFrom + "\n- Moving To: " + moveTo;
  
  var whatsappUrl = "https://api.whatsapp.com/send?phone=918409531615&text=" + encodeURIComponent(message);
  window.open(whatsappUrl, '_blank');
}
</script>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
