<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "Best Movers and Packers in Patna | Top Rated Shifting Services";
$page_desc = "Looking for the best movers and packers in Patna? Enjoy top-rated home relocation, 7-layer packaging, IBA-approved bills, and zero-scratch vehicle transport.";
$page_keywords = "best movers and packers in patna, top rated movers patna, professional movers and packers patna, home shifting patna, vehicle transport patna";
$page_city = "Patna, Bihar";

$faq_list = [
    [
        'q' => 'What makes Shree Ashirwad the best movers and packers in Patna?',
        'a' => 'Our 7-layer safety packaging, experienced full-time packing crew, enclosed container transport trucks, and 100% IBA-approved GST bill compliance.'
    ],
    [
        'q' => 'How much do the best movers and packers in Patna charge for local shifting?',
        'a' => 'Local 1BHK shifting starts from ₹4,500, 2BHK ranges from ₹6,500 to ₹9,500, and 3BHK household relocation ranges from ₹9,500 to ₹14,500.'
    ],
    [
        'q' => 'Do you provide transit insurance for household goods shifting from Patna?',
        'a' => 'Yes, full transit insurance coverage is issued protecting your household items and vehicles against highway transit risks.'
    ],
    [
        'q' => 'Which localities in Patna receive doorstep packing and moving services?',
        'a' => 'Doorstep services are active in Boring Road, Kankarbagh, Danapur, Bailey Road, Patliputra Colony, Ashiana Nagar, Exhibition Road, and Rajendra Nagar.'
    ],
    [
        'q' => 'How are delicate glassware and electronic appliances packed?',
        'a' => 'Glassware is wrapped in heavy bubble wrap and packed into wooden crates or heavy-duty 5-ply corrugated boxes filled with shock-absorbing foam peanuts.'
    ],
    [
        'q' => 'Can I shift my two-wheeler or car along with household goods?',
        'a' => 'Yes, we provide joint package solutions for combined household goods, bike shipping, and car transport.'
    ],
    [
        'q' => 'Are IBA approved GST invoices provided for government/bank employee claim reimbursements?',
        'a' => 'Yes, official IBA-format consignment notes, GST invoices, and stamped payment receipts are provided for claim submission.'
    ],
    [
        'q' => 'How long does intercity shifting take from Patna to major Indian cities?',
        'a' => 'Transit to Ranchi or Kolkata takes 24–48 hours, while long-distance transport to Delhi, Mumbai, or Bangalore takes 3 to 5 days.'
    ],
    [
        'q' => 'Do your movers handle unpacking and furniture setup at the destination?',
        'a' => 'Yes, full unpacking, furniture positioning, bed assembly, and wardrobe setup are included in our premium packages.'
    ],
    [
        'q' => 'How can I get an instant quote from the best movers and packers in Patna?',
        'a' => 'Call +91 8409531615 or submit your requirements on WhatsApp for an immediate itemized cost estimate.'
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
            TOP RATED MOVERS PATNA
          </span>
          <h1 style="font-size: 2.7rem; font-weight: 800; line-height: 1.2; margin-bottom: 20px; color: #ffffff;">
            The <span style="color: #f59e0b;">Best Movers and Packers</span> in Patna
          </h1>
          <p style="font-size: 1.12rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 25px;">
            Shree Ashirwad Packers and Movers delivers hassle-free, top-rated home relocation, bike shipping, and car transport services across Patna with 7-layer safety wrapping and IBA GST billing.
          </p>

          <div style="display: flex; gap: 15px; flex-wrap: wrap; margin-bottom: 30px;">
            <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Now" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
              <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call Now: <?php echo SITE_PHONE; ?>
            </a>
            <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20the%20best%20movers%20and%20packers%20quote%20for%20Patna." title="Chat on WhatsApp" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
              <i class="fab fa-whatsapp" style="margin-right: 8px;"></i> Chat on WhatsApp
            </a>
          </div>

          <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 15px; border-top: 1px solid rgba(255, 255, 255, 0.1); padding-top: 20px;">
            <div>
              <h4 style="color: #f59e0b; font-size: 1.3rem; margin-bottom: 2px;">7-Layer</h4>
              <p style="font-size: 0.85rem; color: #94a3b8; margin: 0;">Multi-Layer Packing</p>
            </div>
            <div>
              <h4 style="color: #f59e0b; font-size: 1.3rem; margin-bottom: 2px;">100%</h4>
              <p style="font-size: 0.85rem; color: #94a3b8; margin: 0;">Insured Transit</p>
            </div>
            <div>
              <h4 style="color: #f59e0b; font-size: 1.3rem; margin-bottom: 2px;">IBA Approved</h4>
              <p style="font-size: 0.85rem; color: #94a3b8; margin: 0;">GST Invoice</p>
            </div>
          </div>
        </div>

        <!-- Hero Form Column -->
        <div class="hero-form-wrapper" style="background: rgba(255, 255, 255, 0.05); backdrop-filter: blur(10px); border: 1px solid rgba(255, 255, 255, 0.1); padding: 30px; border-radius: 16px;">
          <h3 style="font-size: 1.4rem; color: #ffffff; margin-bottom: 20px; text-align: center;">Get Best Movers Estimate</h3>
          <form id="heroLeadForm" onsubmit="sendHeroWhatsAppLead(event)" style="display: flex; flex-direction: column; gap: 15px;">
            <input type="text" id="hero_name" placeholder="Your Full Name *" required style="width: 100%; padding: 12px 15px; border-radius: 8px; border: 1px solid rgba(255, 255, 255, 0.2); background: rgba(0, 0, 0, 0.3); color: #ffffff; font-size: 0.95rem;">
            <input type="tel" id="hero_phone" placeholder="Mobile / WhatsApp Number *" required pattern="[0-9]{10}" style="width: 100%; padding: 12px 15px; border-radius: 8px; border: 1px solid rgba(255, 255, 255, 0.2); background: rgba(0, 0, 0, 0.3); color: #ffffff; font-size: 0.95rem;">
            <input type="text" id="hero_from" placeholder="Pickup Locality in Patna *" required style="width: 100%; padding: 12px 15px; border-radius: 8px; border: 1px solid rgba(255, 255, 255, 0.2); background: rgba(0, 0, 0, 0.3); color: #ffffff; font-size: 0.95rem;">
            <input type="text" id="hero_to" placeholder="Destination City / Locality *" required style="width: 100%; padding: 12px 15px; border-radius: 8px; border: 1px solid rgba(255, 255, 255, 0.2); background: rgba(0, 0, 0, 0.3); color: #ffffff; font-size: 0.95rem;">
            <select id="hero_service" required style="width: 100%; padding: 12px 15px; border-radius: 8px; border: 1px solid rgba(255, 255, 255, 0.2); background: #1e293b; color: #ffffff; font-size: 0.95rem;">
              <option value="Best 1BHK Household Move">Best 1BHK Household Move</option>
              <option value="Best 2BHK Household Move">Best 2BHK Household Move</option>
              <option value="Best 3BHK / Villa Move">Best 3BHK / Villa Move</option>
              <option value="Car Transport Service">Enclosed Car Transport</option>
              <option value="Bike Transport Service">Crated Bike Transport</option>
            </select>
            <button type="submit" style="width: 100%; padding: 14px; background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%); color: #ffffff; border: none; border-radius: 8px; font-weight: 700; font-size: 1rem; cursor: pointer; transition: all 0.3s ease;">
              Get Best Quote on WhatsApp <i class="fab fa-whatsapp" style="margin-left: 6px;"></i>
            </button>
          </form>
        </div>

      </div>
    </div>
  </section>

  <!-- Movers Guide Section -->
  <section class="movers-guide" style="padding: 60px 0; background: #f8fafc;">
    <div class="container">
      <div style="max-width: 900px; margin: 0 auto; background: #ffffff; padding: 40px; border-radius: 12px; box-shadow: 0 4px 20px rgba(0,0,0,0.05);">
        
        <h2 style="font-size: 2rem; color: #0f172a; margin-bottom: 20px; font-weight: 800;">
          Professional Moving & Packing Guide for Patna
        </h2>
        
        <p style="font-size: 1.05rem; line-height: 1.8; color: #334155; margin-bottom: 20px;">
          Relocating your home or office in <strong>Patna (Bihar)</strong> is seamless when you work with experienced movers and packers. Shree Ashirwad Packers and Movers provides end-to-end relocation solutions across <strong>Boring Road, Kankarbagh, Danapur, Bailey Road, Patliputra Colony, Ashiana Nagar, Exhibition Road, and Bihta</strong>.
        </p>

        <h3 style="font-size: 1.4rem; color: #1e293b; margin: 25px 0 15px; font-weight: 700;">
          Step-by-Step Moving & Relocation Process
        </h3>
        
        <ol style="line-height: 1.8; color: #334155; margin-bottom: 25px; padding-left: 20px;">
          <li><strong>Free Doorstep Inventory Audit:</strong> Physical or virtual inspection to assess volume and packing material needs.</li>
          <li><strong>Multi-Layer Expert Packing:</strong> Furniture dismantling, bubble wrapping, edge foaming, and stretch film sealing.</li>
          <li><strong>Weatherproof Container Loading:</strong> Heavy items secured at the bottom with cargo tie-down straps.</li>
          <li><strong>Highway GPS Tracking & Unpacking:</strong> Real-time location updates and destination unpacking/assembly.</li>
        </ol>

      </div>
    </div>
  </section>

  <!-- Rate Matrix Table -->
  <section class="rate-matrix" style="padding: 60px 0; background: #ffffff;">
    <div class="container">
      <div style="text-align: center; max-width: 700px; margin: 0 auto 40px;">
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #0f172a;">Best Movers Shifting Rate Matrix (Patna)</h2>
        <p style="color: #64748b; font-size: 1.05rem;">Estimated rates for local and intercity household moving in Patna.</p>
      </div>

      <div style="max-width: 950px; margin: 0 auto; overflow-x: auto;">
        <table style="width: 100%; border-collapse: collapse; background: #ffffff; border-radius: 8px; overflow: hidden; box-shadow: 0 4px 15px rgba(0,0,0,0.06);">
          <thead>
            <tr style="background: #0f172a; color: #ffffff; text-align: left;">
              <th style="padding: 16px 20px; font-size: 0.95rem;">Property Size</th>
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
              <td style="padding: 16px 20px; font-weight: 600; color: #1e293b;">3 BHK / Villa Move</td>
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
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #0f172a;">Frequently Asked Questions (Best Movers Patna)</h2>
        <p style="color: #64748b; font-size: 1.05rem;">Common questions about professional packing and moving services in Patna.</p>
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
    "I would like to request a *Best Movers Quote* for Patna:%0A" +
    "*Name:* " + encodeURIComponent(name) + "%0A" +
    "*Phone:* " + encodeURIComponent(phone) + "%0A" +
    "*Pickup Locality:* " + encodeURIComponent(from) + "%0A" +
    "*Destination:* " + encodeURIComponent(to) + "%0A" +
    "*Service Type:* " + encodeURIComponent(service) + "%0A%0A" +
    "Please send me a top-rated movers quote on WhatsApp.";

  window.open("https://wa.me/918409531615?text=" + message, "_blank");
}
</script>

<?php 
require_once __DIR__ . '/../includes/footer.php'; 
?>
