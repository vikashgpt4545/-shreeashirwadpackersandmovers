<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "Best Packers and Movers in Patna | Top-Rated Quality Relocation Services";
$page_desc = "Looking for the best packers and movers in Patna? Get top-rated household shifting, 7-layer safety packaging, enclosed car carrier transport, and IBA-approved GST billing.";
$page_keywords = "best packers and movers in patna, top rated packers and movers patna, premium shifting services patna, 7 layer packaging patna, best household relocation patna, top movers and packers patna";
$page_city = "Patna, Bihar";

$faq_list = [
    [
        'q' => 'Why is Shree Ashirwad rated among the best packers and movers in Patna?',
        'a' => 'We offer 7-layer protective packaging, zero-scratch vehicle shipping, 100% IBA-compliant GST billing, dedicated enclosed container trucks, and 24/7 real-time tracking.'
    ],
    [
        'q' => 'What packing materials are used for premium household relocation in Patna?',
        'a' => 'We use heavy-duty corrugated boxes, 50-micron bubble wraps, waterproof stretch film, foam corner guards, wooden crating for glass items, and padded blankets for furniture.'
    ],
    [
        'q' => 'How is zero damage guaranteed for luxury furniture and electronics during shifting?',
        'a' => 'Our trained technicians dismantle, individually pad, foam-wrap, and secure items with heavy nylon cargo straps inside weatherproof container trucks.'
    ],
    [
        'q' => 'What is the rate for premium 2BHK or 3BHK household shifting in Patna?',
        'a' => 'Local 2BHK premium moves in Patna range from ₹6,500 to ₹9,500, while 3BHK / Villa shifting ranges from ₹9,500 to ₹14,500 including complete unpacking and assembly.'
    ],
    [
        'q' => 'Which areas in Patna receive white-glove doorstep packing services?',
        'a' => 'Premium doorstep services cover Boring Road, Patliputra Colony, Kankarbagh, Bailey Road, Ashiana Nagar, Exhibition Road, Danapur, and Rajendra Nagar.'
    ],
    [
        'q' => 'Do you provide enclosed hydraulic car carriers for luxury vehicle transport from Patna?',
        'a' => 'Yes, custom enclosed hydraulic trailer carriers are used for luxury cars, ensuring 100% protection from road dust, gravel, and weather exposure.'
    ],
    [
        'q' => 'Are IBA approved GST bills provided for official corporate/bank reimbursement claims?',
        'a' => 'Yes, 100% genuine IBA-format consignment notes, GST invoices, and itemized receipts are supplied for bank and government employer claims.'
    ],
    [
        'q' => 'Is transit insurance included in top-tier relocation packages?',
        'a' => 'Yes, comprehensive transit insurance policies covering full declared goods value are issued prior to vehicle dispatch.'
    ],
    [
        'q' => 'Do you handle furniture disassembly and re-assembly at the new house?',
        'a' => 'Yes, expert carpenters dismantle beds, wardrobes, dining tables, and re-assemble them perfectly at your destination.'
    ],
    [
        'q' => 'How can I schedule a pre-shift home survey with the best movers in Patna?',
        'a' => 'Call +91 8409531615 or submit your request via WhatsApp for an immediate free doorstep physical or video survey.'
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
            TOP-RATED QUALITY RELOCATION PATNA
          </span>
          <h1 style="font-size: 2.7rem; font-weight: 800; line-height: 1.2; margin-bottom: 20px; color: #ffffff;">
            The <span style="color: #10b981;">Best Packers and Movers</span> in Patna
          </h1>
          <p style="font-size: 1.12rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 25px;">
            Shree Ashirwad Packers and Movers delivers premium, white-glove relocation services across Patna. Experience 7-layer safety wrapping, enclosed hydraulic vehicle carriers, 25-point condition audits, and 100% IBA-compliant GST billing.
          </p>

          <div style="display: flex; gap: 15px; flex-wrap: wrap; margin-bottom: 30px;">
            <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Now" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
              <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call Now: <?php echo SITE_PHONE; ?>
            </a>
            <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20the%20best%20premium%20shifting%20quote%20for%20Patna." title="Chat on WhatsApp" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
              <i class="fab fa-whatsapp" style="margin-right: 8px;"></i> Chat on WhatsApp
            </a>
          </div>

          <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 15px; border-top: 1px solid rgba(255, 255, 255, 0.1); padding-top: 20px;">
            <div>
              <h4 style="color: #10b981; font-size: 1.3rem; margin-bottom: 2px;">7-Layer</h4>
              <p style="font-size: 0.85rem; color: #94a3b8; margin: 0;">Safety Wrap Spec</p>
            </div>
            <div>
              <h4 style="color: #10b981; font-size: 1.3rem; margin-bottom: 2px;">Zero Damage</h4>
              <p style="font-size: 0.85rem; color: #94a3b8; margin: 0;">Insured Transit</p>
            </div>
            <div>
              <h4 style="color: #10b981; font-size: 1.3rem; margin-bottom: 2px;">IBA Approved</h4>
              <p style="font-size: 0.85rem; color: #94a3b8; margin: 0;">Official Billing</p>
            </div>
          </div>
        </div>

        <!-- Hero Form Column -->
        <div class="hero-form-wrapper" style="background: rgba(255, 255, 255, 0.05); backdrop-filter: blur(10px); border: 1px solid rgba(255, 255, 255, 0.1); padding: 30px; border-radius: 16px;">
          <h3 style="font-size: 1.4rem; color: #ffffff; margin-bottom: 20px; text-align: center;">Get Best VIP Shifting Quote</h3>
          <form id="heroLeadForm" onsubmit="sendHeroWhatsAppLead(event)" style="display: flex; flex-direction: column; gap: 15px;">
            <input type="text" id="hero_name" placeholder="Your Full Name *" required style="width: 100%; padding: 12px 15px; border-radius: 8px; border: 1px solid rgba(255, 255, 255, 0.2); background: rgba(0, 0, 0, 0.3); color: #ffffff; font-size: 0.95rem;">
            <input type="tel" id="hero_phone" placeholder="Mobile / WhatsApp Number *" required pattern="[0-9]{10}" style="width: 100%; padding: 12px 15px; border-radius: 8px; border: 1px solid rgba(255, 255, 255, 0.2); background: rgba(0, 0, 0, 0.3); color: #ffffff; font-size: 0.95rem;">
            <input type="text" id="hero_from" placeholder="Pickup Locality in Patna *" required style="width: 100%; padding: 12px 15px; border-radius: 8px; border: 1px solid rgba(255, 255, 255, 0.2); background: rgba(0, 0, 0, 0.3); color: #ffffff; font-size: 0.95rem;">
            <input type="text" id="hero_to" placeholder="Destination City / Locality *" required style="width: 100%; padding: 12px 15px; border-radius: 8px; border: 1px solid rgba(255, 255, 255, 0.2); background: rgba(0, 0, 0, 0.3); color: #ffffff; font-size: 0.95rem;">
            <select id="hero_service" required style="width: 100%; padding: 12px 15px; border-radius: 8px; border: 1px solid rgba(255, 255, 255, 0.2); background: #1e293b; color: #ffffff; font-size: 0.95rem;">
              <option value="Premium 1BHK VIP Relocation">Premium 1BHK VIP Relocation</option>
              <option value="Premium 2BHK VIP Relocation">Premium 2BHK VIP Relocation</option>
              <option value="Premium 3BHK/Villa VIP Relocation">Premium 3BHK / Villa VIP Relocation</option>
              <option value="Enclosed Car Carrier Transport">Enclosed Hydraulic Car Carrier</option>
              <option value="Premium Crated Bike Shipping">Premium Crated Bike Shipping</option>
            </select>
            <button type="submit" style="width: 100%; padding: 14px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border: none; border-radius: 8px; font-weight: 700; font-size: 1rem; cursor: pointer; transition: all 0.3s ease;">
              Get Best Quote on WhatsApp <i class="fab fa-whatsapp" style="margin-left: 6px;"></i>
            </button>
          </form>
        </div>

      </div>
    </div>
  </section>

  <!-- Premium Quality Standards & Safety Section -->
  <section class="quality-guide" style="padding: 60px 0; background: #f8fafc;">
    <div class="container">
      <div style="max-width: 900px; margin: 0 auto; background: #ffffff; padding: 40px; border-radius: 12px; box-shadow: 0 4px 20px rgba(0,0,0,0.05);">
        
        <h2 style="font-size: 2rem; color: #0f172a; margin-bottom: 20px; font-weight: 800;">
          Why We Are Recognized as the Best Packers and Movers in Patna
        </h2>
        
        <p style="font-size: 1.05rem; line-height: 1.8; color: #334155; margin-bottom: 20px;">
          When moving premium households, high-end electronics, or luxury vehicles in <strong>Patna (Bihar)</strong>, quality execution is paramount. Shree Ashirwad Packers and Movers sets the industry benchmark for safety, reliability, and white-glove service standards across <strong>Boring Road, Patliputra Colony, Kankarbagh, Bailey Road, Ashiana Nagar, Exhibition Road, Danapur, and Rajendra Nagar</strong>.
        </p>

        <h3 style="font-size: 1.4rem; color: #1e293b; margin: 25px 0 15px; font-weight: 700;">
          Our 7-Layer Quality & Safety Standards
        </h3>
        
        <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 20px; margin-bottom: 25px;">
          <div style="background: #f1f5f9; padding: 20px; border-radius: 8px;">
            <h4 style="color: #0f172a; margin: 0 0 8px; font-size: 1.1rem;">1. High-Density Bubble Wrap</h4>
            <p style="margin: 0; color: #475569; font-size: 0.92rem; line-height: 1.6;">50-micron air bubble film shields fragile glass, TV screens, and polished wooden surfaces.</p>
          </div>
          <div style="background: #f1f5f9; padding: 20px; border-radius: 8px;">
            <h4 style="color: #0f172a; margin: 0 0 8px; font-size: 1.1rem;">2. Heavy Corrugated Boarding</h4>
            <p style="margin: 0; color: #475569; font-size: 0.92rem; line-height: 1.6;">Custom-cut 5-ply corrugated sheets absorb high-speed highway transit vibration and impact.</p>
          </div>
          <div style="background: #f1f5f9; padding: 20px; border-radius: 8px;">
            <h4 style="color: #0f172a; margin: 0 0 8px; font-size: 1.1rem;">3. Waterproof Stretch Film</h4>
            <p style="margin: 0; color: #475569; font-size: 0.92rem; line-height: 1.6;">Multi-layer moisture barrier prevents dust, rain, and humidity during long-distance highway travel.</p>
          </div>
          <div style="background: #f1f5f9; padding: 20px; border-radius: 8px;">
            <h4 style="color: #0f172a; margin: 0 0 8px; font-size: 1.1rem;">4. Foam Edge Protectors</h4>
            <p style="margin: 0; color: #475569; font-size: 0.92rem; line-height: 1.6;">Polyethylene L-shaped foam guards protect delicate table corners, sofa edges, and cabinets.</p>
          </div>
        </div>

        <div style="background: #ecfdf5; border-left: 4px solid #10b981; padding: 20px; border-radius: 0 8px 8px 0;">
          <h4 style="margin: 0 0 10px 0; color: #065f46; font-size: 1.1rem;">25-Point Pre-Move & Condition Audit</h4>
          <p style="margin: 0; color: #047857; font-size: 0.95rem; line-height: 1.6;">
            Before loading, every item is cataloged, inspected, labeled, and photographed. You receive a digital inventory copy for 100% peace of mind.
          </p>
        </div>

      </div>
    </div>
  </section>

  <!-- Premium Service Rate Matrix Table -->
  <section class="rate-matrix" style="padding: 60px 0; background: #ffffff;">
    <div class="container">
      <div style="text-align: center; max-width: 700px; margin: 0 auto 40px;">
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #0f172a;">Best Packers and Movers Premium Rate Matrix (Patna)</h2>
        <p style="color: #64748b; font-size: 1.05rem;">Transparent pricing for top-rated, white-glove relocation services in Patna.</p>
      </div>

      <div style="max-width: 950px; margin: 0 auto; overflow-x: auto;">
        <table style="width: 100%; border-collapse: collapse; background: #ffffff; border-radius: 8px; overflow: hidden; box-shadow: 0 4px 15px rgba(0,0,0,0.06);">
          <thead>
            <tr style="background: #0f172a; color: #ffffff; text-align: left;">
              <th style="padding: 16px 20px; font-size: 0.95rem;">Premium Service Category</th>
              <th style="padding: 16px 20px; font-size: 0.95rem;">Local Patna Shifting</th>
              <th style="padding: 16px 20px; font-size: 0.95rem;">Intercity (Up to 500 km)</th>
              <th style="padding: 16px 20px; font-size: 0.95rem;">Interstate VIP Relocation</th>
            </tr>
          </thead>
          <tbody>
            <tr style="border-bottom: 1px solid #e2e8f0;">
              <td style="padding: 16px 20px; font-weight: 600; color: #1e293b;">1 BHK Premium VIP Move</td>
              <td style="padding: 16px 20px; color: #059669; font-weight: 700;">₹4,500 - ₹6,800</td>
              <td style="padding: 16px 20px; color: #3b82f6; font-weight: 700;">₹9,500 - ₹15,000</td>
              <td style="padding: 16px 20px; color: #6366f1; font-weight: 700;">₹14,500 - ₹21,000</td>
            </tr>
            <tr style="border-bottom: 1px solid #e2e8f0; background: #f8fafc;">
              <td style="padding: 16px 20px; font-weight: 600; color: #1e293b;">2 BHK White-Glove Move</td>
              <td style="padding: 16px 20px; color: #059669; font-weight: 700;">₹6,500 - ₹9,500</td>
              <td style="padding: 16px 20px; color: #3b82f6; font-weight: 700;">₹14,000 - ₹22,000</td>
              <td style="padding: 16px 20px; color: #6366f1; font-weight: 700;">₹21,000 - ₹31,000</td>
            </tr>
            <tr style="border-bottom: 1px solid #e2e8f0;">
              <td style="padding: 16px 20px; font-weight: 600; color: #1e293b;">3 BHK / Villa Luxury Move</td>
              <td style="padding: 16px 20px; color: #059669; font-weight: 700;">₹9,500 - ₹14,500</td>
              <td style="padding: 16px 20px; color: #3b82f6; font-weight: 700;">₹21,000 - ₹32,000</td>
              <td style="padding: 16px 20px; color: #6366f1; font-weight: 700;">₹30,000 - ₹46,000</td>
            </tr>
            <tr style="border-bottom: 1px solid #e2e8f0; background: #f8fafc;">
              <td style="padding: 16px 20px; font-weight: 600; color: #1e293b;">Premium Crated Bike Shipping</td>
              <td style="padding: 16px 20px; color: #059669; font-weight: 700;">₹2,200 - ₹3,500</td>
              <td style="padding: 16px 20px; color: #3b82f6; font-weight: 700;">₹3,800 - ₹5,800</td>
              <td style="padding: 16px 20px; color: #6366f1; font-weight: 700;">₹5,500 - ₹8,500</td>
            </tr>
            <tr>
              <td style="padding: 16px 20px; font-weight: 600; color: #1e293b;">Enclosed Hydraulic Car Carrier</td>
              <td style="padding: 16px 20px; color: #059669; font-weight: 700;">₹5,000 - ₹7,500</td>
              <td style="padding: 16px 20px; color: #3b82f6; font-weight: 700;">₹9,500 - ₹15,500</td>
              <td style="padding: 16px 20px; color: #6366f1; font-weight: 700;">₹14,500 - ₹24,000</td>
            </tr>
          </tbody>
        </table>
      </div>
      <p style="text-align: center; font-size: 0.85rem; color: #94a3b8; margin-top: 15px;">*Rates include 7-layer safety packing, unpacking, furniture positioning, transit insurance, and IBA GST invoice.</p>
    </div>
  </section>

  <!-- FAQ Section with Schema Support -->
  <section class="faq-section" style="padding: 60px 0; background: #f8fafc;">
    <div class="container">
      <div style="text-align: center; max-width: 700px; margin: 0 auto 40px;">
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #0f172a;">Frequently Asked Questions (Best Patna Shifting)</h2>
        <p style="color: #64748b; font-size: 1.05rem;">Common questions about top-rated relocation standards, safety guarantees, and IBA billing in Patna.</p>
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
  "description": "The best packers and movers in Patna providing top-rated 7-layer safety packaging, VIP household relocation, and enclosed car transport.",
  "url": "<?php echo SITE_URL; ?>/best-packers-and-movers-in-patna.php",
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
    "I would like to request a *Best VIP Shifting Quote* for Patna:%0A" +
    "*Name:* " + encodeURIComponent(name) + "%0A" +
    "*Phone:* " + encodeURIComponent(phone) + "%0A" +
    "*Pickup Locality:* " + encodeURIComponent(from) + "%0A" +
    "*Destination:* " + encodeURIComponent(to) + "%0A" +
    "*Service Type:* " + encodeURIComponent(service) + "%0A%0A" +
    "Please send me a top-rated VIP quote and 7-layer safety details on WhatsApp.";

  window.open("https://wa.me/918409531615?text=" + message, "_blank");
}
</script>

<?php 
require_once __DIR__ . '/../includes/footer.php'; 
?>
