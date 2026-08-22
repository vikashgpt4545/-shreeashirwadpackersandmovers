<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "Car Packers and Movers in Patna | Enclosed Car Carrier Transport";
$page_desc = "Looking for car packers and movers in Patna? Shree Ashirwad Packers provides zero-scratch enclosed hydraulic car carrier transport, doorstep pickup, and transit insurance.";
$page_keywords = "car packers and movers in patna, car carrier patna, car transport patna, enclosed car trailer patna, car relocation patna";
$page_city = "Patna, Bihar";

$faq_list = [
    [
        'q' => 'How are cars safely transported from Patna by Shree Ashirwad Packers?',
        'a' => 'Cars are transported inside specialized covered single or multi-car hydraulic container trailers equipped with wheel chocks, soft safety belts, and ramp loading.'
    ],
    [
        'q' => 'What is the cost for car shipping from Patna to major Indian cities?',
        'a' => 'Local car transfer costs ₹4,500 to ₹7,200, intercity car shipping up to 500 km ranges from ₹9,000 to ₹15,000, and long-distance interstate transport ranges from ₹14,000 to ₹24,000.'
    ],
    [
        'q' => 'Is doorstep pickup and delivery included for car shipping in Patna?',
        'a' => 'Yes, our drivers pick up your vehicle directly from your home across Boring Road, Kankarbagh, Danapur, Bailey Road, Patliputra Colony, Ashiana Nagar, Exhibition Road, and Bihta.'
    ],
    [
        'q' => 'What documents are required to book car transport from Patna?',
        'a' => 'Required documents include Vehicle Registration Certificate (RC), valid insurance policy, driver license copy, and owner ID proof (Aadhaar/PAN).'
    ],
    [
        'q' => 'Is transit insurance provided for car transport?',
        'a' => 'Yes, comprehensive marine/transit insurance policy coverage protecting your car value against highway risks is issued prior to transit.'
    ],
    [
        'q' => 'Can I store personal belongings inside the car trunk during transport?',
        'a' => 'Up to 30-50 kg of personal luggage or non-hazardous household items can be placed in the car trunk with prior inspection.'
    ],
    [
        'q' => 'Do you provide real-time GPS tracking for car carriers?',
        'a' => 'Yes, live GPS location links and driver phone contact updates are provided throughout the transit.'
    ],
    [
        'q' => 'Are IBA approved GST bills issued for car relocation claims?',
        'a' => 'Yes, official IBA consignment notes (LR copy) and GST invoices are provided for bank and corporate claim reimbursements.'
    ],
    [
        'q' => 'How long does intercity car transport take from Patna?',
        'a' => 'Nearby state transit takes 24–48 hours, while long-distance shipment to metro cities takes 3 to 5 days.'
    ],
    [
        'q' => 'How can I get an instant quote for car transport in Patna?',
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
  <section class="hero-section" style="background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%); padding: 60px 0; color: #ffffff;">
    <div class="container">
      <div class="hero-grid" style="display: grid; grid-template-columns: 1.2fr 0.8fr; gap: 40px; align-items: center;">
        
        <!-- Hero Text Column -->
        <div class="hero-text">
          <span class="section-tag" style="background: rgba(14, 165, 233, 0.15); color: #0ea5e9; border: 1px solid rgba(14, 165, 233, 0.4); padding: 6px 16px; border-radius: 20px; font-size: 0.85rem; font-weight: 700; text-transform: uppercase; display: inline-block; margin-bottom: 15px;">
            CAR CARRIER SPECIALIST PATNA
          </span>
          <h1 style="font-size: 2.7rem; font-weight: 800; line-height: 1.2; margin-bottom: 20px; color: #ffffff;">
            Enclosed <span style="color: #0ea5e9;">Car Packers and Movers in Patna</span>
          </h1>
          <p style="font-size: 1.12rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 25px;">
            Shree Ashirwad Packers and Movers offers professional hatchback, sedan, and SUV car carrier transport in Patna. Enjoy enclosed hydraulic trailers, zero-scratch guarantees, live GPS tracking, and IBA-approved GST bills.
          </p>

          <div style="display: flex; gap: 15px; flex-wrap: wrap; margin-bottom: 30px;">
            <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Now" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
              <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call Now: <?php echo SITE_PHONE; ?>
            </a>
            <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20a%20car%20transport%20quote%20for%20Patna." title="Chat on WhatsApp" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
              <i class="fab fa-whatsapp" style="margin-right: 8px;"></i> Chat on WhatsApp
            </a>
          </div>

          <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 15px; border-top: 1px solid rgba(255, 255, 255, 0.1); padding-top: 20px;">
            <div>
              <h4 style="color: #0ea5e9; font-size: 1.3rem; margin-bottom: 2px;">Enclosed</h4>
              <p style="font-size: 0.85rem; color: #94a3b8; margin: 0;">Hydraulic Trailer</p>
            </div>
            <div>
              <h4 style="color: #0ea5e9; font-size: 1.3rem; margin-bottom: 2px;">Zero Scratch</h4>
              <p style="font-size: 0.85rem; color: #94a3b8; margin: 0;">Insured Transit</p>
            </div>
            <div>
              <h4 style="color: #0ea5e9; font-size: 1.3rem; margin-bottom: 2px;">IBA Approved</h4>
              <p style="font-size: 0.85rem; color: #94a3b8; margin: 0;">GST Invoice</p>
            </div>
          </div>
        </div>

        <!-- Hero Form Column -->
        <div class="hero-form-wrapper" style="background: rgba(255, 255, 255, 0.05); backdrop-filter: blur(10px); border: 1px solid rgba(255, 255, 255, 0.1); padding: 30px; border-radius: 16px;">
          <h3 style="font-size: 1.4rem; color: #ffffff; margin-bottom: 20px; text-align: center;">Get Car Carrier Quote</h3>
          <form id="heroLeadForm" onsubmit="sendHeroWhatsAppLead(event)" style="display: flex; flex-direction: column; gap: 15px;">
            <input type="text" id="hero_name" placeholder="Your Full Name *" required style="width: 100%; padding: 12px 15px; border-radius: 8px; border: 1px solid rgba(255, 255, 255, 0.2); background: rgba(0, 0, 0, 0.3); color: #ffffff; font-size: 0.95rem;">
            <input type="tel" id="hero_phone" placeholder="Mobile / WhatsApp Number *" required pattern="[0-9]{10}" style="width: 100%; padding: 12px 15px; border-radius: 8px; border: 1px solid rgba(255, 255, 255, 0.2); background: rgba(0, 0, 0, 0.3); color: #ffffff; font-size: 0.95rem;">
            <input type="text" id="hero_from" placeholder="Pickup Locality in Patna *" required style="width: 100%; padding: 12px 15px; border-radius: 8px; border: 1px solid rgba(255, 255, 255, 0.2); background: rgba(0, 0, 0, 0.3); color: #ffffff; font-size: 0.95rem;">
            <input type="text" id="hero_to" placeholder="Destination City *" required style="width: 100%; padding: 12px 15px; border-radius: 8px; border: 1px solid rgba(255, 255, 255, 0.2); background: rgba(0, 0, 0, 0.3); color: #ffffff; font-size: 0.95rem;">
            <select id="hero_service" required style="width: 100%; padding: 12px 15px; border-radius: 8px; border: 1px solid rgba(255, 255, 255, 0.2); background: #1e293b; color: #ffffff; font-size: 0.95rem;">
              <option value="Hatchback Car Transport">Hatchback Car Transport</option>
              <option value="Sedan Car Transport">Sedan Car Transport</option>
              <option value="SUV / MUV Car Transport">SUV / MUV Car Transport</option>
              <option value="Luxury Car Closed Container">Luxury Car Closed Container</option>
            </select>
            <button type="submit" style="width: 100%; padding: 14px; background: linear-gradient(135deg, #0ea5e9 0%, #0284c7 100%); color: #ffffff; border: none; border-radius: 8px; font-weight: 700; font-size: 1rem; cursor: pointer; transition: all 0.3s ease;">
              Get Car Quote on WhatsApp <i class="fab fa-whatsapp" style="margin-left: 6px;"></i>
            </button>
          </form>
        </div>

      </div>
    </div>
  </section>

  <!-- Car Guide Section -->
  <section class="car-guide" style="padding: 60px 0; background: #f8fafc;">
    <div class="container">
      <div style="max-width: 900px; margin: 0 auto; background: #ffffff; padding: 40px; border-radius: 12px; box-shadow: 0 4px 20px rgba(0,0,0,0.05);">
        
        <h2 style="font-size: 2rem; color: #0f172a; margin-bottom: 20px; font-weight: 800;">
          Enclosed Hydraulic Car Carrier Services in Patna
        </h2>
        
        <p style="font-size: 1.05rem; line-height: 1.8; color: #334155; margin-bottom: 20px;">
          Transporting your personal car from <strong>Patna (Bihar)</strong> requires specialized enclosed car trailers that protect paintwork from highway dust, weather elements, and road debris. Shree Ashirwad Packers provides car transport across <strong>Boring Road, Kankarbagh, Danapur, Bailey Road, Patliputra Colony, Ashiana Nagar, Exhibition Road, Rajendra Nagar, and Bihta</strong>.
        </p>

        <h3 style="font-size: 1.4rem; color: #1e293b; margin: 25px 0 15px; font-weight: 700;">
          Automobile Transport Features
        </h3>
        
        <ul style="line-height: 1.8; color: #334155; margin-bottom: 25px; padding-left: 20px;">
          <li><strong>Pre-Loading Inspection Report:</strong> Comprehensive condition photo audit capturing mileage and body status.</li>
          <li><strong>Hydraulic Loading Ramp:</strong> Smooth low-angle loading preventing bumper scrape on low clearance cars.</li>
          <li><strong>Wheel Chock Safety Belts:</strong> Synthetic tire locks securing wheels to trailer floor without chassis strain.</li>
          <li><strong>Doorstep Handover:</strong> Vehicle handed over directly at your new home address.</li>
        </ul>

      </div>
    </div>
  </section>

  <!-- Rate Matrix Table -->
  <section class="rate-matrix" style="padding: 60px 0; background: #ffffff;">
    <div class="container">
      <div style="text-align: center; max-width: 700px; margin: 0 auto 40px;">
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #0f172a;">Car Carrier Tariff Matrix (Patna)</h2>
        <p style="color: #64748b; font-size: 1.05rem;">Estimated rates for enclosed car carrier shipping from Patna.</p>
      </div>

      <div style="max-width: 950px; margin: 0 auto; overflow-x: auto;">
        <table style="width: 100%; border-collapse: collapse; background: #ffffff; border-radius: 8px; overflow: hidden; box-shadow: 0 4px 15px rgba(0,0,0,0.06);">
          <thead>
            <tr style="background: #0f172a; color: #ffffff; text-align: left;">
              <th style="padding: 16px 20px; font-size: 0.95rem;">Car Model Type</th>
              <th style="padding: 16px 20px; font-size: 0.95rem;">Local Patna Transport</th>
              <th style="padding: 16px 20px; font-size: 0.95rem;">Intercity (Up to 500 km)</th>
              <th style="padding: 16px 20px; font-size: 0.95rem;">Interstate Relocation</th>
            </tr>
          </thead>
          <tbody>
            <tr style="border-bottom: 1px solid #e2e8f0;">
              <td style="padding: 16px 20px; font-weight: 600; color: #1e293b;">Hatchback Car (Alto, Swift, i10)</td>
              <td style="padding: 16px 20px; color: #059669; font-weight: 700;">₹4,500 - ₹6,000</td>
              <td style="padding: 16px 20px; color: #3b82f6; font-weight: 700;">₹8,500 - ₹13,000</td>
              <td style="padding: 16px 20px; color: #6366f1; font-weight: 700;">₹13,500 - ₹20,000</td>
            </tr>
            <tr style="border-bottom: 1px solid #e2e8f0; background: #f8fafc;">
              <td style="padding: 16px 20px; font-weight: 600; color: #1e293b;">Sedan Car (Dzire, City, Verna)</td>
              <td style="padding: 16px 20px; color: #059669; font-weight: 700;">₹5,200 - ₹6,800</td>
              <td style="padding: 16px 20px; color: #3b82f6; font-weight: 700;">₹9,500 - ₹14,500</td>
              <td style="padding: 16px 20px; color: #6366f1; font-weight: 700;">₹15,000 - ₹22,500</td>
            </tr>
            <tr style="border-bottom: 1px solid #e2e8f0;">
              <td style="padding: 16px 20px; font-weight: 600; color: #1e293b;">SUV / MUV (Creta, Innova, Thar)</td>
              <td style="padding: 16px 20px; color: #059669; font-weight: 700;">₹6,000 - ₹7,800</td>
              <td style="padding: 16px 20px; color: #3b82f6; font-weight: 700;">₹11,000 - ₹16,500</td>
              <td style="padding: 16px 20px; color: #6366f1; font-weight: 700;">₹17,000 - ₹25,500</td>
            </tr>
            <tr>
              <td style="padding: 16px 20px; font-weight: 600; color: #1e293b;">Luxury Car (BMW, Audi, Mercedes)</td>
              <td style="padding: 16px 20px; color: #059669; font-weight: 700;">₹8,000 - ₹10,500</td>
              <td style="padding: 16px 20px; color: #3b82f6; font-weight: 700;">₹15,000 - ₹22,000</td>
              <td style="padding: 16px 20px; color: #6366f1; font-weight: 700;">₹23,000 - ₹34,000</td>
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
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #0f172a;">Frequently Asked Questions (Car Transport Patna)</h2>
        <p style="color: #64748b; font-size: 1.05rem;">Questions about enclosed car carrier transport services in Patna.</p>
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
  "description": "Car packers and movers in Patna offering zero-scratch enclosed hydraulic car carrier transport, doorstep pickup, and IBA GST bills.",
  "url": "<?php echo SITE_URL; ?>/car-packers-and-movers-in-patna.php",
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
    "I would like to request a *Car Carrier Quote* for Patna:%0A" +
    "*Name:* " + encodeURIComponent(name) + "%0A" +
    "*Phone:* " + encodeURIComponent(phone) + "%0A" +
    "*Pickup Locality:* " + encodeURIComponent(from) + "%0A" +
    "*Destination City:* " + encodeURIComponent(to) + "%0A" +
    "*Car Model/Service:* " + encodeURIComponent(service) + "%0A%0A" +
    "Please send me a car transport cost estimate on WhatsApp.";

  window.open("https://wa.me/918409531615?text=" + message, "_blank");
}
</script>

<?php 
require_once __DIR__ . '/../includes/footer.php'; 
?>
