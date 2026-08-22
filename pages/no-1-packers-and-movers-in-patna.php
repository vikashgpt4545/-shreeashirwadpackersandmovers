<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "No. 1 Packers and Movers in Patna | Top Ranked Relocation Company";
$page_desc = "Hire Patna's No. 1 packers and movers. Shree Ashirwad Packers offers top-ranked household shifting, 7-layer protective packaging, zero-scratch vehicle transport, and IBA GST bills.";
$page_keywords = "no 1 packers and movers in patna, top ranked packers and movers patna, no 1 relocation company patna, best movers patna, verified no 1 packers patna";
$page_city = "Patna, Bihar";

$faq_list = [
    [
        'q' => 'Why is Shree Ashirwad ranked as the No. 1 packers and movers in Patna?',
        'a' => 'We hold Patna’s highest client satisfaction rating through 7-layer protective packing, 99.8% zero-damage execution, dedicated container trucks, and official IBA-compliant GST billing.'
    ],
    [
        'q' => 'What is the starting price for No. 1 rated household shifting in Patna?',
        'a' => 'Local 1BHK household shifting starts from ₹4,500, 2BHK moves range from ₹6,500 to ₹9,500, and 3BHK household relocation ranges from ₹9,500 to ₹14,500.'
    ],
    [
        'q' => 'Do you serve all major residential areas across Patna city?',
        'a' => 'Yes, our No. 1 team provides doorstep pickup and delivery across Boring Road, Kankarbagh, Danapur, Bailey Road, Patliputra Colony, Ashiana Nagar, Exhibition Road, and Bihta.'
    ],
    [
        'q' => 'How does the No. 1 moving service handle fragile furniture and glass items?',
        'a' => 'Fragile items undergo 7-layer protection including high-density air bubble wrap, 5-ply corrugated sheets, foam edge blocks, and custom wooden crating.'
    ],
    [
        'q' => 'Do you supply genuine IBA-approved GST bills for employer claim reimbursement?',
        'a' => 'Yes, 100% genuine IBA consignment notes, GST invoices, and stamped payment receipts are provided for bank and government employer claims.'
    ],
    [
        'q' => 'How are cars and bikes transported by Patna’s No. 1 relocation company?',
        'a' => 'Vehicles are shipped inside enclosed hydraulic car trailers and custom wooden/metal bike crates with soft padding and safety wheel locks.'
    ],
    [
        'q' => 'Is transit insurance included with No. 1 shifting packages?',
        'a' => 'Yes, comprehensive transit insurance policies covering full declared goods value are issued before vehicle dispatch.'
    ],
    [
        'q' => 'Can I track my container truck during highway transit?',
        'a' => 'Yes, real-time GPS tracking and driver contact updates are provided throughout the journey.'
    ],
    [
        'q' => 'Does the shifting crew handle unpacking and furniture assembly at destination?',
        'a' => 'Yes, complete unpacking, bed assembly, wardrobe positioning, and dining setup are included in our top-tier packages.'
    ],
    [
        'q' => 'How can I get an instant quote from Patna’s No. 1 packers and movers?',
        'a' => 'Call +91 8409531615 or submit your relocation details via WhatsApp for an immediate itemized estimate.'
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
          <span class="section-tag" style="background: rgba(245, 158, 11, 0.15); color: #f59e0b; border: 1px solid rgba(245, 158, 11, 0.4); padding: 6px 16px; border-radius: 20px; font-size: 0.85rem; font-weight: 700; text-transform: uppercase; display: inline-block; margin-bottom: 15px;">
            NO. 1 RATED RELOCATION PATNA
          </span>
          <h1 style="font-size: 2.7rem; font-weight: 800; line-height: 1.2; margin-bottom: 20px; color: #ffffff;">
            Patna's <span style="color: #f59e0b;">No. 1 Packers and Movers</span>
          </h1>
          <p style="font-size: 1.12rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 25px;">
            Shree Ashirwad Packers and Movers is recognized as Patna's premier relocation provider. Experience 7-layer safety packaging, zero-scratch vehicle shipping, 24/7 GPS tracking, and IBA-approved GST billing.
          </p>

          <div style="display: flex; gap: 15px; flex-wrap: wrap; margin-bottom: 30px;">
            <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Now" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
              <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call Now: <?php echo SITE_PHONE; ?>
            </a>
            <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20a%20No.%201%20shifting%20quote%20for%20Patna." title="Chat on WhatsApp" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
              <i class="fab fa-whatsapp" style="margin-right: 8px;"></i> Chat on WhatsApp
            </a>
          </div>

          <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 15px; border-top: 1px solid rgba(255, 255, 255, 0.1); padding-top: 20px;">
            <div>
              <h4 style="color: #f59e0b; font-size: 1.3rem; margin-bottom: 2px;">No. 1 Rank</h4>
              <p style="font-size: 0.85rem; color: #94a3b8; margin: 0;">Client Ratings</p>
            </div>
            <div>
              <h4 style="color: #f59e0b; font-size: 1.3rem; margin-bottom: 2px;">99.8%</h4>
              <p style="font-size: 0.85rem; color: #94a3b8; margin: 0;">Safe Record</p>
            </div>
            <div>
              <h4 style="color: #f59e0b; font-size: 1.3rem; margin-bottom: 2px;">IBA Approved</h4>
              <p style="font-size: 0.85rem; color: #94a3b8; margin: 0;">GST Invoice</p>
            </div>
          </div>
        </div>

        <!-- Hero Form Column -->
        <div class="hero-form-wrapper" style="background: rgba(255, 255, 255, 0.05); backdrop-filter: blur(10px); border: 1px solid rgba(255, 255, 255, 0.1); padding: 30px; border-radius: 16px;">
          <h3 style="font-size: 1.4rem; color: #ffffff; margin-bottom: 20px; text-align: center;">Get No. 1 Shifting Quote</h3>
          <form id="heroLeadForm" onsubmit="sendHeroWhatsAppLead(event)" style="display: flex; flex-direction: column; gap: 15px;">
            <input type="text" id="hero_name" placeholder="Your Full Name *" required style="width: 100%; padding: 12px 15px; border-radius: 8px; border: 1px solid rgba(255, 255, 255, 0.2); background: rgba(0, 0, 0, 0.3); color: #ffffff; font-size: 0.95rem;">
            <input type="tel" id="hero_phone" placeholder="Mobile / WhatsApp Number *" required pattern="[0-9]{10}" style="width: 100%; padding: 12px 15px; border-radius: 8px; border: 1px solid rgba(255, 255, 255, 0.2); background: rgba(0, 0, 0, 0.3); color: #ffffff; font-size: 0.95rem;">
            <input type="text" id="hero_from" placeholder="Pickup Locality in Patna *" required style="width: 100%; padding: 12px 15px; border-radius: 8px; border: 1px solid rgba(255, 255, 255, 0.2); background: rgba(0, 0, 0, 0.3); color: #ffffff; font-size: 0.95rem;">
            <input type="text" id="hero_to" placeholder="Destination City / Locality *" required style="width: 100%; padding: 12px 15px; border-radius: 8px; border: 1px solid rgba(255, 255, 255, 0.2); background: rgba(0, 0, 0, 0.3); color: #ffffff; font-size: 0.95rem;">
            <select id="hero_service" required style="width: 100%; padding: 12px 15px; border-radius: 8px; border: 1px solid rgba(255, 255, 255, 0.2); background: #1e293b; color: #ffffff; font-size: 0.95rem;">
              <option value="No. 1 Household Relocation">No. 1 Household Relocation</option>
              <option value="No. 1 Office Relocation">No. 1 Office Relocation</option>
              <option value="No. 1 Car Transport">No. 1 Enclosed Car Carrier</option>
              <option value="No. 1 Bike Transport">No. 1 Crated Bike Shipping</option>
            </select>
            <button type="submit" style="width: 100%; padding: 14px; background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%); color: #ffffff; border: none; border-radius: 8px; font-weight: 700; font-size: 1rem; cursor: pointer; transition: all 0.3s ease;">
              Get No. 1 Quote on WhatsApp <i class="fab fa-whatsapp" style="margin-left: 6px;"></i>
            </button>
          </form>
        </div>

      </div>
    </div>
  </section>

  <!-- Track Record Guide Section -->
  <section class="trackrecord-guide" style="padding: 60px 0; background: #f8fafc;">
    <div class="container">
      <div style="max-width: 900px; margin: 0 auto; background: #ffffff; padding: 40px; border-radius: 12px; box-shadow: 0 4px 20px rgba(0,0,0,0.05);">
        
        <h2 style="font-size: 2rem; color: #0f172a; margin-bottom: 20px; font-weight: 800;">
          Patna's Highest Rated Relocation Service
        </h2>
        
        <p style="font-size: 1.05rem; line-height: 1.8; color: #334155; margin-bottom: 20px;">
          Earning the No. 1 position among movers in <strong>Patna (Bihar)</strong> is built on years of punctual, damage-free service across <strong>Boring Road, Kankarbagh, Danapur, Bailey Road, Patliputra Colony, Ashiana Nagar, Exhibition Road, and Bihta</strong>.
        </p>

        <h3 style="font-size: 1.4rem; color: #1e293b; margin: 25px 0 15px; font-weight: 700;">
          Our Service Guarantees
        </h3>
        
        <ul style="line-height: 1.8; color: #334155; margin-bottom: 25px; padding-left: 20px;">
          <li><strong>7-Layer Safety Wrap Spec:</strong> Multi-layer bubble film, 5-ply corrugated sheets, and stretch wrap on every item.</li>
          <li><strong>Punctual Doorstep Dispatch:</strong> On-time crew arrival with dedicated container trucks.</li>
          <li><strong>Zero Damage Track Record:</strong> 99.8% safe execution rate backed by full transit insurance policies.</li>
          <li><strong>IBA GST Documentation:</strong> Approved billing for bank, military, and government employees.</li>
        </ul>

      </div>
    </div>
  </section>

  <!-- Rate Matrix Table -->
  <section class="rate-matrix" style="padding: 60px 0; background: #ffffff;">
    <div class="container">
      <div style="text-align: center; max-width: 700px; margin: 0 auto 40px;">
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #0f172a;">No. 1 Relocation Rate Matrix (Patna)</h2>
        <p style="color: #64748b; font-size: 1.05rem;">Standard estimated rates for top-ranked shifting services in Patna.</p>
      </div>

      <div style="max-width: 950px; margin: 0 auto; overflow-x: auto;">
        <table style="width: 100%; border-collapse: collapse; background: #ffffff; border-radius: 8px; overflow: hidden; box-shadow: 0 4px 15px rgba(0,0,0,0.06);">
          <thead>
            <tr style="background: #0f172a; color: #ffffff; text-align: left;">
              <th style="padding: 16px 20px; font-size: 0.95rem;">Shifting Category</th>
              <th style="padding: 16px 20px; font-size: 0.95rem;">Local Patna Move</th>
              <th style="padding: 16px 20px; font-size: 0.95rem;">Intercity (Up to 500 km)</th>
              <th style="padding: 16px 20px; font-size: 0.95rem;">Interstate Relocation</th>
            </tr>
          </thead>
          <tbody>
            <tr style="border-bottom: 1px solid #e2e8f0;">
              <td style="padding: 16px 20px; font-weight: 600; color: #1e293b;">1 BHK Household Move</td>
              <td style="padding: 16px 20px; color: #059669; font-weight: 700;">₹4,500 - ₹6,800</td>
              <td style="padding: 16px 20px; color: #3b82f6; font-weight: 700;">₹9,500 - ₹15,000</td>
              <td style="padding: 16px 20px; color: #6366f1; font-weight: 700;">₹14,500 - ₹21,000</td>
            </tr>
            <tr style="border-bottom: 1px solid #e2e8f0; background: #f8fafc;">
              <td style="padding: 16px 20px; font-weight: 600; color: #1e293b;">2 BHK Household Move</td>
              <td style="padding: 16px 20px; color: #059669; font-weight: 700;">₹6,500 - ₹9,500</td>
              <td style="padding: 16px 20px; color: #3b82f6; font-weight: 700;">₹14,000 - ₹22,000</td>
              <td style="padding: 16px 20px; color: #6366f1; font-weight: 700;">₹21,000 - ₹31,000</td>
            </tr>
            <tr style="border-bottom: 1px solid #e2e8f0;">
              <td style="padding: 16px 20px; font-weight: 600; color: #1e293b;">3 BHK Household Move</td>
              <td style="padding: 16px 20px; color: #059669; font-weight: 700;">₹9,500 - ₹14,500</td>
              <td style="padding: 16px 20px; color: #3b82f6; font-weight: 700;">₹21,000 - ₹32,000</td>
              <td style="padding: 16px 20px; color: #6366f1; font-weight: 700;">₹30,000 - ₹46,000</td>
            </tr>
            <tr style="border-bottom: 1px solid #e2e8f0; background: #f8fafc;">
              <td style="padding: 16px 20px; font-weight: 600; color: #1e293b;">Bike Crate Shipping</td>
              <td style="padding: 16px 20px; color: #059669; font-weight: 700;">₹2,200 - ₹3,500</td>
              <td style="padding: 16px 20px; color: #3b82f6; font-weight: 700;">₹3,800 - ₹5,800</td>
              <td style="padding: 16px 20px; color: #6366f1; font-weight: 700;">₹5,500 - ₹8,500</td>
            </tr>
            <tr>
              <td style="padding: 16px 20px; font-weight: 600; color: #1e293b;">Enclosed Car Transport</td>
              <td style="padding: 16px 20px; color: #059669; font-weight: 700;">₹5,000 - ₹7,500</td>
              <td style="padding: 16px 20px; color: #3b82f6; font-weight: 700;">₹9,500 - ₹15,500</td>
              <td style="padding: 16px 20px; color: #6366f1; font-weight: 700;">₹14,500 - ₹24,000</td>
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
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #0f172a;">Frequently Asked Questions (No. 1 Movers Patna)</h2>
        <p style="color: #64748b; font-size: 1.05rem;">Questions about Patna's top-ranked packing and moving services.</p>
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
  "description": "Patna's No. 1 packers and movers providing top-ranked 7-layer safety packaging, home relocation, and enclosed vehicle transport.",
  "url": "<?php echo SITE_URL; ?>/no-1-packers-and-movers-in-patna.php",
  "telephone": "<?php echo SITE_PHONE_RAW; ?>",
  "address": {
    "@type": "PostalAddress",
    "addressLocality": "Patna",
    "addressRegion": "Bihar",
    "addressCountry": "IN"
  },
  "areaServed": "Patna, Bihar",
  "priceRange": "₹4500 - ₹46000"
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
    "I would like to request a *No. 1 Shifting Quote* for Patna:%0A" +
    "*Name:* " + encodeURIComponent(name) + "%0A" +
    "*Phone:* " + encodeURIComponent(phone) + "%0A" +
    "*Pickup Locality:* " + encodeURIComponent(from) + "%0A" +
    "*Destination:* " + encodeURIComponent(to) + "%0A" +
    "*Service Type:* " + encodeURIComponent(service) + "%0A%0A" +
    "Please send me a top-ranked relocation estimate on WhatsApp.";

  window.open("https://wa.me/918409531615?text=" + message, "_blank");
}
</script>

<?php 
require_once __DIR__ . '/../includes/footer.php'; 
?>
