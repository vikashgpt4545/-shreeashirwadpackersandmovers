<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "Bike Packers and Movers in Patna | Safe Two-Wheeler Transport";
$page_desc = "Looking for bike packers and movers in Patna? Shree Ashirwad Packers offers zero-scratch motorcycle and scooter transport with 7-layer foam crating, insurance, and doorstep delivery.";
$page_keywords = "bike packers and movers in patna, motorcycle transport patna, scooter shifting patna, bike crate shipping patna, insured bike transport patna";
$page_city = "Patna, Bihar";

$faq_list = [
    [
        'q' => 'How are motorcycles and bikes packed for transport in Patna?',
        'a' => 'Bikes are wrapped in multi-layer bubble film, corrugated sheets, foam edge blocks, and secured inside wooden or metal transport crates with tie-down straps.'
    ],
    [
        'q' => 'What is the cost for bike packing and transport from Patna?',
        'a' => 'Local within-city bike transfer costs ₹1,500 to ₹2,500, while intercity bike shipping up to 500 km ranges from ₹3,500 to ₹5,500.'
    ],
    [
        'q' => 'Do I need to drain fuel before handing over my bike in Patna?',
        'a' => 'Yes, fuel levels must be reduced to less than 1 liter for transport safety compliance.'
    ],
    [
        'q' => 'Which documents are required for bike transport from Patna?',
        'a' => 'You need to provide a copy of the Vehicle Registration Certificate (RC), valid insurance document, and government ID proof (Aadhaar/PAN).'
    ],
    [
        'q' => 'Do you provide doorstep pickup and delivery for bikes in Patna?',
        'a' => 'Yes, doorstep bike pickup is active across Boring Road, Kankarbagh, Danapur, Bailey Road, Patliputra Colony, Ashiana Nagar, Exhibition Road, and Bihta.'
    ],
    [
        'q' => 'Is transit insurance included for bike shipping from Patna?',
        'a' => 'Yes, transit insurance policies covering declared vehicle value against highway risks are issued prior to loading.'
    ],
    [
        'q' => 'Are IBA approved GST invoices provided for bike transport claims?',
        'a' => 'Yes, official IBA consignment notes (LR copies) and GST tax invoices are provided for corporate and government claim reimbursements.'
    ],
    [
        'q' => 'How long does intercity bike transport take from Patna?',
        'a' => 'Nearby state transit takes 24–48 hours, while long-distance shipment to metro cities takes 3 to 5 days.'
    ],
    [
        'q' => 'Can sports bikes and premium motorcycles be transported safely?',
        'a' => 'Yes, premium sports bikes receive extra foam padding, custom wooden crating, and dedicated tie-downs.'
    ],
    [
        'q' => 'How can I get an instant quote for bike transport in Patna?',
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
  <section class="hero-section" style="background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%); padding: 60px 0; color: #ffffff;">
    <div class="container">
      <div class="hero-grid" style="display: grid; grid-template-columns: 1.2fr 0.8fr; gap: 40px; align-items: center;">
        
        <!-- Hero Text Column -->
        <div class="hero-text">
          <span class="section-tag" style="background: rgba(16, 185, 129, 0.15); color: #10b981; border: 1px solid rgba(16, 185, 129, 0.4); padding: 6px 16px; border-radius: 20px; font-size: 0.85rem; font-weight: 700; text-transform: uppercase; display: inline-block; margin-bottom: 15px;">
            BIKE TRANSPORT SPECIALIST PATNA
          </span>
          <h1 style="font-size: 2.7rem; font-weight: 800; line-height: 1.2; margin-bottom: 20px; color: #ffffff;">
            Safe <span style="color: #10b981;">Bike Packers and Movers in Patna</span>
          </h1>
          <p style="font-size: 1.12rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 25px;">
            Shree Ashirwad Packers and Movers offers professional motorcycle, scooter, and sports bike transport in Patna. Enjoy 7-layer foam crating, zero-scratch guarantees, transit insurance, and IBA GST billing.
          </p>

          <div style="display: flex; gap: 15px; flex-wrap: wrap; margin-bottom: 30px;">
            <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Now" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
              <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call Now: <?php echo SITE_PHONE; ?>
            </a>
            <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20a%20bike%20transport%20quote%20for%20Patna." title="Chat on WhatsApp" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
              <i class="fab fa-whatsapp" style="margin-right: 8px;"></i> Chat on WhatsApp
            </a>
          </div>

          <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 15px; border-top: 1px solid rgba(255, 255, 255, 0.1); padding-top: 20px;">
            <div>
              <h4 style="color: #10b981; font-size: 1.3rem; margin-bottom: 2px;">Crate Packing</h4>
              <p style="font-size: 0.85rem; color: #94a3b8; margin: 0;">Wooden / Metal Frame</p>
            </div>
            <div>
              <h4 style="color: #10b981; font-size: 1.3rem; margin-bottom: 2px;">Zero Scratch</h4>
              <p style="font-size: 0.85rem; color: #94a3b8; margin: 0;">Insured Transit</p>
            </div>
            <div>
              <h4 style="color: #10b981; font-size: 1.3rem; margin-bottom: 2px;">IBA Approved</h4>
              <p style="font-size: 0.85rem; color: #94a3b8; margin: 0;">GST Invoice</p>
            </div>
          </div>
        </div>

        <!-- Hero Form Column -->
        <div class="hero-form-wrapper" style="background: rgba(255, 255, 255, 0.05); backdrop-filter: blur(10px); border: 1px solid rgba(255, 255, 255, 0.1); padding: 30px; border-radius: 16px;">
          <h3 style="font-size: 1.4rem; color: #ffffff; margin-bottom: 20px; text-align: center;">Get Bike Transport Quote</h3>
          <form id="heroLeadForm" onsubmit="sendHeroWhatsAppLead(event)" style="display: flex; flex-direction: column; gap: 15px;">
            <input type="text" id="hero_name" placeholder="Your Full Name *" required style="width: 100%; padding: 12px 15px; border-radius: 8px; border: 1px solid rgba(255, 255, 255, 0.2); background: rgba(0, 0, 0, 0.3); color: #ffffff; font-size: 0.95rem;">
            <input type="tel" id="hero_phone" placeholder="Mobile / WhatsApp Number *" required pattern="[0-9]{10}" style="width: 100%; padding: 12px 15px; border-radius: 8px; border: 1px solid rgba(255, 255, 255, 0.2); background: rgba(0, 0, 0, 0.3); color: #ffffff; font-size: 0.95rem;">
            <input type="text" id="hero_from" placeholder="Pickup Locality in Patna *" required style="width: 100%; padding: 12px 15px; border-radius: 8px; border: 1px solid rgba(255, 255, 255, 0.2); background: rgba(0, 0, 0, 0.3); color: #ffffff; font-size: 0.95rem;">
            <input type="text" id="hero_to" placeholder="Destination City *" required style="width: 100%; padding: 12px 15px; border-radius: 8px; border: 1px solid rgba(255, 255, 255, 0.2); background: rgba(0, 0, 0, 0.3); color: #ffffff; font-size: 0.95rem;">
            <select id="hero_service" required style="width: 100%; padding: 12px 15px; border-radius: 8px; border: 1px solid rgba(255, 255, 255, 0.2); background: #1e293b; color: #ffffff; font-size: 0.95rem;">
              <option value="Standard Commuter Bike Transport">Standard Commuter Bike</option>
              <option value="Scooter / Scooty Transport">Scooter / Scooty Transport</option>
              <option value="Sports / Cruiser Bike Transport">Sports / Cruiser Bike</option>
              <option value="Royal Enfield / Heavy Bike">Royal Enfield / Heavy Bike</option>
            </select>
            <button type="submit" style="width: 100%; padding: 14px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border: none; border-radius: 8px; font-weight: 700; font-size: 1rem; cursor: pointer; transition: all 0.3s ease;">
              Get Bike Quote on WhatsApp <i class="fab fa-whatsapp" style="margin-left: 6px;"></i>
            </button>
          </form>
        </div>

      </div>
    </div>
  </section>

  <!-- Bike Guide Section -->
  <section class="bike-guide" style="padding: 60px 0; background: #f8fafc;">
    <div class="container">
      <div style="max-width: 900px; margin: 0 auto; background: #ffffff; padding: 40px; border-radius: 12px; box-shadow: 0 4px 20px rgba(0,0,0,0.05);">
        
        <h2 style="font-size: 2rem; color: #0f172a; margin-bottom: 20px; font-weight: 800;">
          Professional Two-Wheeler Shipping Guide in Patna
        </h2>
        
        <p style="font-size: 1.05rem; line-height: 1.8; color: #334155; margin-bottom: 20px;">
          Transporting your motorcycle or scooter safely out of <strong>Patna (Bihar)</strong> requires heavy-duty protective padding and specialized crating. Shree Ashirwad Packers serves all Patna localities including <strong>Boring Road, Kankarbagh, Danapur, Bailey Road, Patliputra Colony, Ashiana Nagar, Exhibition Road, Rajendra Nagar, and Bihta</strong>.
        </p>

        <h3 style="font-size: 1.4rem; color: #1e293b; margin: 25px 0 15px; font-weight: 700;">
          Our 4-Step Bike Safety Protocol
        </h3>
        
        <ol style="line-height: 1.8; color: #334155; margin-bottom: 25px; padding-left: 20px;">
          <li><strong>Pre-Loading Condition Audit:</strong> Physical inspection documenting odometer reading and existing vehicle condition.</li>
          <li><strong>Multi-Layer Cushioning:</strong> Handlebars, mirrors, tank, and indicators wrapped in thick bubble wrap and foam guards.</li>
          <li><strong>Enclosed Crate Anchoring:</strong> Vehicle wheel-locked inside covered container trucks with soft synthetic belts.</li>
          <li><strong>Doorstep Delivery & Uncrating:</strong> Safe uncrating and inspection at destination doorstep.</li>
        </ol>

      </div>
    </div>
  </section>

  <!-- Rate Matrix Table -->
  <section class="rate-matrix" style="padding: 60px 0; background: #ffffff;">
    <div class="container">
      <div style="text-align: center; max-width: 700px; margin: 0 auto 40px;">
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #0f172a;">Bike Shipping Tariff Matrix (Patna)</h2>
        <p style="color: #64748b; font-size: 1.05rem;">Estimated rates for two-wheeler transport from Patna.</p>
      </div>

      <div style="max-width: 950px; margin: 0 auto; overflow-x: auto;">
        <table style="width: 100%; border-collapse: collapse; background: #ffffff; border-radius: 8px; overflow: hidden; box-shadow: 0 4px 15px rgba(0,0,0,0.06);">
          <thead>
            <tr style="background: #0f172a; color: #ffffff; text-align: left;">
              <th style="padding: 16px 20px; font-size: 0.95rem;">Vehicle Type</th>
              <th style="padding: 16px 20px; font-size: 0.95rem;">Local Patna Transport</th>
              <th style="padding: 16px 20px; font-size: 0.95rem;">Intercity (Up to 500 km)</th>
              <th style="padding: 16px 20px; font-size: 0.95rem;">Interstate Relocation</th>
            </tr>
          </thead>
          <tbody>
            <tr style="border-bottom: 1px solid #e2e8f0;">
              <td style="padding: 16px 20px; font-weight: 600; color: #1e293b;">Scooter / Scooty</td>
              <td style="padding: 16px 20px; color: #059669; font-weight: 700;">₹1,500 - ₹2,200</td>
              <td style="padding: 16px 20px; color: #3b82f6; font-weight: 700;">₹3,200 - ₹4,500</td>
              <td style="padding: 16px 20px; color: #6366f1; font-weight: 700;">₹4,800 - ₹6,800</td>
            </tr>
            <tr style="border-bottom: 1px solid #e2e8f0; background: #f8fafc;">
              <td style="padding: 16px 20px; font-weight: 600; color: #1e293b;">Standard Commuter Bike (100-150cc)</td>
              <td style="padding: 16px 20px; color: #059669; font-weight: 700;">₹1,800 - ₹2,500</td>
              <td style="padding: 16px 20px; color: #3b82f6; font-weight: 700;">₹3,500 - ₹5,200</td>
              <td style="padding: 16px 20px; color: #6366f1; font-weight: 700;">₹5,200 - ₹7,500</td>
            </tr>
            <tr style="border-bottom: 1px solid #e2e8f0;">
              <td style="padding: 16px 20px; font-weight: 600; color: #1e293b;">Royal Enfield / Cruiser (200-500cc)</td>
              <td style="padding: 16px 20px; color: #059669; font-weight: 700;">₹2,200 - ₹3,000</td>
              <td style="padding: 16px 20px; color: #3b82f6; font-weight: 700;">₹4,200 - ₹6,200</td>
              <td style="padding: 16px 20px; color: #6366f1; font-weight: 700;">₹6,200 - ₹8,800</td>
            </tr>
            <tr>
              <td style="padding: 16px 20px; font-weight: 600; color: #1e293b;">Sports Bike / Superbike (500cc+)</td>
              <td style="padding: 16px 20px; color: #059669; font-weight: 700;">₹2,800 - ₹3,800</td>
              <td style="padding: 16px 20px; color: #3b82f6; font-weight: 700;">₹5,500 - ₹8,000</td>
              <td style="padding: 16px 20px; color: #6366f1; font-weight: 700;">₹8,000 - ₹12,000</td>
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
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #0f172a;">Frequently Asked Questions (Bike Transport Patna)</h2>
        <p style="color: #64748b; font-size: 1.05rem;">Questions about motorcycle packing and shipping in Patna.</p>
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
  "description": "Bike packers and movers in Patna providing zero-scratch motorcycle and scooter transport with wooden crate packing and insurance.",
  "url": "<?php echo SITE_URL; ?>/bike-packers-and-movers-in-patna.php",
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
    "I would like to request a *Bike Transport Quote* for Patna:%0A" +
    "*Name:* " + encodeURIComponent(name) + "%0A" +
    "*Phone:* " + encodeURIComponent(phone) + "%0A" +
    "*Pickup Locality:* " + encodeURIComponent(from) + "%0A" +
    "*Destination City:* " + encodeURIComponent(to) + "%0A" +
    "*Bike Model/Service:* " + encodeURIComponent(service) + "%0A%0A" +
    "Please send me a bike shipping cost estimate on WhatsApp.";

  window.open("https://wa.me/918409531615?text=" + message, "_blank");
}
</script>

<?php 
require_once __DIR__ . '/../includes/footer.php'; 
?>
