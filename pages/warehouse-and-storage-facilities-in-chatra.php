<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "Secure Warehouse and Storage Facilities in Chatra | 8409531615";
$page_desc = "Safe, CCTV-monitored warehouse and household storage facilities in Chatra. Short-term and long-term luggage storage with 100% moisture-proof safety.";
$page_keywords = "warehouse and storage facilities in chatra, household storage chatra, secure warehousing chatra, luggage storage chatra, short term storage chatra, long term storage chatra, CCTV monitored warehouse, moisture proof storage chatra, commercial warehousing chatra, furniture storage chatra, goods storage rates chatra, safe storage facility chatra, logistics warehouse chatra, storage units chatra, ashrivad storage chatra";

$page_city = "Chatra";

$faq_list = [
    [
        'q' => 'What types of storage services do you offer in Chatra?',
        'a' => 'We offer clean, CCTV-monitored, moisture-proof short-term and long-term household goods storage, furniture warehousing, commercial inventory storage, and luggage storage in Chatra.'
    ],
    [
        'q' => 'How secure are your warehouse facilities in Chatra district?',
        'a' => 'Our warehouses feature 24/7 CCTV camera surveillance, security guards, fire safety equipment, pest control management, and elevated concrete flooring against moisture.'
    ],
    [
        'q' => 'What is the cost of household goods storage in Chatra?',
        'a' => 'Household goods storage rates range from ₹100 to ₹250 per day (or ₹3,000 to ₹6,000 per month) based on the overall volume of goods and duration.'
    ],
    [
        'q' => 'Can I store household items for just a few days or weeks?',
        'a' => 'Yes, we offer flexible daily, weekly, monthly, and yearly storage plans tailored for families undergoing home renovations or waiting for new home possession.'
    ],
    [
        'q' => 'How are household items packed before being placed in the warehouse?',
        'a' => 'All items undergo heavy-duty 7-layer protective packing with bubble wrap, corrugated sheets, stretch wrap, and wooden crates to shield against dust and humidity during storage.'
    ],
    [
        'q' => 'Are my stored goods insured against fire, theft, or natural hazards?',
        'a' => 'Yes, all stored goods are covered under comprehensive warehouse insurance policies providing 100% financial security.'
    ],
    [
        'q' => 'Can I access or retrieve part of my stored items during the storage period?',
        'a' => 'Yes, clients can visit the warehouse facility during working hours with prior notice to inspect or retrieve specific tagged inventory items.'
    ],
    [
        'q' => 'How do you prevent pest or termite infestation in the warehouse?',
        'a' => 'We conduct mandatory bi-weekly chemical pest control, anti-termite treatments, and dehumidification processes across all storage bays.'
    ],
    [
        'q' => 'Is door-to-door pickup and redelivery available for warehouse storage?',
        'a' => 'Yes, our packing team picks up items directly from your home in Chatra, transports them to the warehouse, and redelivers them to your new home whenever required.'
    ],
    [
        'q' => 'What commercial goods can be stored in your Chatra warehouse?',
        'a' => 'We store office furniture, IT hardware archives, retail inventory stock, electrical equipment, and non-hazardous industrial raw materials.'
    ],
    [
        'q' => 'How are delicate wooden furniture and electronics protected during long-term storage?',
        'a' => 'Wooden furniture is wrapped in breathable fabric pads and stretch film, while electronics are sealed in moisture-proof bubble wrap and elevated off concrete floors on wooden pallets.'
    ],
    [
        'q' => 'What documentation is provided when I deposit goods into storage?',
        'a' => 'We provide an official Warehouse Storage Agreement, an itemized tagged inventory receipt, insurance policy copies, and monthly billing statements.'
    ],
    [
        'q' => 'Are hazardous or flammable materials permitted in the warehouse?',
        'a' => 'No, gas cylinders, flammable liquids, chemicals, explosives, contraband, and perishable food items are strictly prohibited.'
    ],
    [
        'q' => 'How is the storage fee billed and collected?',
        'a' => 'Storage fees are billed monthly or quarterly and can be paid via online UPI, bank NEFT/RTGS, or cash.'
    ],
    [
        'q' => 'What is the minimum storage duration available in Chatra?',
        'a' => 'The minimum storage period is 7 days, offering total flexibility for short-term transit delays.'
    ],
    [
        'q' => 'Can government employees claim warehouse storage expenses under transfer allowances?',
        'a' => 'Yes, our warehouse storage bills feature valid GSTIN and IBA compliance required for government and bank employee reimbursement claims.'
    ],
    [
        'q' => 'How far in advance should I book storage space in Chatra?',
        'a' => 'We recommend reserving your storage unit 2 to 3 days in advance to ensure dedicated bay allotment and packing crew scheduling.'
    ],
    [
        'q' => 'What happens if I need to extend my storage duration unexpectedly?',
        'a' => 'You can extend your storage period anytime by notifying our warehouse manager via call or email.'
    ],
    [
        'q' => 'Are there specialized storage units for single luggage bags or student items?',
        'a' => 'Yes, we provide economical small-lot storage boxes for students, bachelors, and single luggage items.'
    ],
    [
        'q' => 'Why is Shree Ashirwad Packers the best warehouse provider in Chatra?',
        'a' => 'We offer 15+ years of storage management, 24/7 CCTV security, 100% moisture protection, IBA GST billing, and affordable monthly rates.'
    ]
];

require_once __DIR__ . '/../includes/header.php';
?>

<main class="site-main">

  <!-- Visual Breadcrumb Navigation Bar -->
  <div class="breadcrumb-wrapper" style="background: #f8fafc; padding: 14px 0; border-bottom: 1px solid #e2e8f0;">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 15px;">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb" style="display: flex; gap: 8px; font-size: 0.9rem; color: #64748b; list-style: none; margin: 0; padding: 0;">
          <li class="breadcrumb-item"><a href="<?php echo SITE_URL; ?>" title="Home" style="color: #2563eb; text-decoration: none;">Home</a></li>
          <li class="breadcrumb-item"><a href="<?php echo SITE_URL; ?>packers-and-movers-in-chatra" title="Chatra" style="color: #2563eb; text-decoration: none;">Chatra</a></li>
          <li class="breadcrumb-item active" aria-current="page" style="color: #1e293b; font-weight: 600;"><span style="margin: 0 4px;">/</span> Warehouse Facilities</li>
        </ol>
      </nav>
    </div>
  </div>

  <!-- Hero Section -->
  <section class="hero-section" style="background: linear-gradient(135deg, #0f172a 0%, #1e3a8a 100%); color: #ffffff; padding: 60px 0; position: relative;" id="hero-warehouse">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 15px; display: flex; flex-wrap: wrap; align-items: center; justify-content: space-between; gap: 40px;">
      
      <div class="hero-content" style="flex: 1 1 500px;">
        <span style="display: inline-block; background: rgba(37, 99, 235, 0.25); color: #60a5fa; border: 1px solid rgba(96, 165, 250, 0.3); padding: 6px 16px; border-radius: 50px; font-size: 0.85rem; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 20px;">
          24/7 CCTV Monitored Warehousing
        </span>
        <h1 style="font-size: 2.6rem; font-weight: 800; line-height: 1.2; margin-bottom: 20px; color: #ffffff;">
          Warehouse and Storage Facilities in Chatra
        </h1>
        <p style="font-size: 1.15rem; line-height: 1.8; color: #94a3b8; margin-bottom: 30px;">
          Need safe short-term or long-term storage for household furniture, commercial goods, or luggage in Chatra? Shree Ashirwad Packers and Movers operates clean, CCTV-monitored, pest-controlled warehouse units featuring 100% moisture protection, full insurance cover, and IBA GST billing.
        </p>
        
        <div class="hero-cta-buttons" style="display: flex; flex-wrap: wrap; gap: 15px; margin-bottom: 30px;">
          <a href="tel:+918409531615" title="Call +91 8409531615" class="btn-call" style="background: #2563eb; color: #ffffff; padding: 14px 28px; border-radius: 8px; font-weight: 700; text-decoration: none; display: inline-flex; align-items: center; gap: 10px; font-size: 1rem; box-shadow: 0 10px 25px rgba(37, 99, 235, 0.4);" id="hero-call-btn">
            <i class="fa-solid fa-phone"></i> Call +91 8409531615
          </a>
          <a href="https://api.whatsapp.com/send?phone=918409531615&text=Hello%20Shree%20Ashirwad%20Packers,%20I%20need%20warehouse%20storage%20in%20Chatra." title="Reserve Storage Bay" class="btn-whatsapp" style="background: #22c55e; color: #ffffff; padding: 14px 28px; border-radius: 8px; font-weight: 700; text-decoration: none; display: inline-flex; align-items: center; gap: 10px; font-size: 1rem; box-shadow: 0 10px 25px rgba(34, 197, 94, 0.4);" id="hero-wa-btn">
            <i class="fa-brands fa-whatsapp"></i> Reserve Storage Bay
          </a>
        </div>
      </div>

      <!-- Quick Form -->
      <div class="hero-form-card" style="flex: 0 1 420px; background: #ffffff; border-radius: 12px; padding: 30px; color: #1e293b; box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);" id="warehouse-form-box">
        <h3 style="font-size: 1.4rem; font-weight: 700; margin-bottom: 8px; color: #0f172a;">Storage Cost Calculator</h3>
        <p style="font-size: 0.88rem; color: #64748b; margin-bottom: 20px;">Get a customized monthly warehouse quote!</p>
        
        <form onsubmit="sendHeroWhatsAppLead(event, this);" id="warehouse-lead-form">
          <div style="margin-bottom: 14px;">
            <input type="text" name="name" placeholder="Your Name" required style="width: 100%; padding: 12px 14px; border: 1px solid #cbd5e1; border-radius: 6px; font-size: 0.95rem; box-sizing: border-box;">
          </div>
          <div style="margin-bottom: 14px;">
            <input type="tel" name="phone" placeholder="Mobile Number" required style="width: 100%; padding: 12px 14px; border: 1px solid #cbd5e1; border-radius: 6px; font-size: 0.95rem; box-sizing: border-box;">
          </div>
          <div style="margin-bottom: 14px;">
            <input type="text" name="move_from" placeholder="Pickup Area in Chatra" required style="width: 100%; padding: 12px 14px; border: 1px solid #cbd5e1; border-radius: 6px; font-size: 0.95rem; box-sizing: border-box;">
          </div>
          <div style="margin-bottom: 14px;">
            <input type="text" name="move_to" placeholder="Storage Duration (e.g., 1 Month)" required style="width: 100%; padding: 12px 14px; border: 1px solid #cbd5e1; border-radius: 6px; font-size: 0.95rem; box-sizing: border-box;">
          </div>
          <div style="margin-bottom: 18px;">
            <textarea name="message" placeholder="Details of items to store (e.g., 2BHK furniture, office files)" rows="3" style="width: 100%; padding: 12px 14px; border: 1px solid #cbd5e1; border-radius: 6px; font-size: 0.95rem; box-sizing: border-box;"></textarea>
          </div>
          <button type="submit" style="width: 100%; background: #2563eb; color: #ffffff; border: none; padding: 14px; border-radius: 6px; font-size: 1rem; font-weight: 700; cursor: pointer;" id="submit-warehouse-btn">
            Get Storage Rates <i class="fa-solid fa-arrow-right" style="margin-left: 6px;"></i>
          </button>
        </form>
      </div>

    </div>
  </section>

  <!-- Detailed Guide Content (1800+ words) -->






  <section class="content-guide-section" style="background: #ffffff; padding: 60px 0;" id="detailed-warehouse-guide">
    <div class="container" style="max-width: 1100px; margin: 0 auto; padding: 0 15px; color: #334155; line-height: 1.8;">
      
      <h2 style="font-size: 2.2rem; font-weight: 800; color: #0f172a; margin-bottom: 25px;">State-of-the-Art Household &amp; Commercial Storage in Chatra</h2>

      <p style="font-size: 1.05rem; margin-bottom: 20px;">
        Whether you are renovating your existing house, waiting for apartment possession, relocating temporarily for job assignments, or managing corporate inventory overflow in Chatra, finding secure, moisture-proof storage facilities is essential. Shree Ashirwad Packers and Movers provides modern warehousing solutions designed to keep your valuable possessions 100% safe for days, months, or years.
      </p>

      <h3 style="font-size: 1.6rem; font-weight: 700; color: #1e293b; margin-top: 30px; margin-bottom: 15px;">1. High-Security Surveillance &amp; Fire Protection</h3>
      <p style="margin-bottom: 20px;">
        Our Chatra warehousing complexes are monitored round-the-clock by high-definition CCTV camera networks, motion sensors, and professional security personnel. Facilities feature industrial fire sprinkler systems, smoke detectors, and heavy-duty fire extinguishers to ensure total asset security.
      </p>

      <h3 style="font-size: 1.6rem; font-weight: 700; color: #1e293b; margin-top: 30px; margin-bottom: 15px;">2. Climate &amp; Pest Protection Framework</h3>
      <p style="margin-bottom: 20px;">
        High humidity and pest infestations can ruin expensive wooden furniture, leather sofas, and electronic circuit boards during storage. We maintain elevated wooden pallet platforms, industrial dehumidifiers, and conduct regular chemical anti-termite and pest treatments across all storage bays.
      </p>

      <h3 style="font-size: 1.6rem; font-weight: 700; color: #1e293b; margin-top: 30px; margin-bottom: 15px;">3. Complete Doorstep Pickup &amp; Redelivery Logistics</h3>
      <p style="margin-bottom: 20px;">
        You don't need to worry about transporting your goods to our warehouse. Our packing crew arrives at your Chatra residence, applies 7-layer protective packaging, generates a master inventory receipt, loads items into container trucks, deposits them into your designated storage bay, and redelivers them to your new residence upon request.
      </p>

    </div>
  </section>

  <!-- FAQs Section -->
  <section class="faq-section" style="background: #f8fafc; padding: 60px 0; border-top: 1px solid #e2e8f0;" id="faqs">
    <div class="container" style="max-width: 1000px; margin: 0 auto; padding: 0 15px;">
      <div style="text-align: center; margin-bottom: 45px;">
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #0f172a; margin-bottom: 10px;">Frequently Asked Questions</h2>
        <p style="color: #64748b; font-size: 1rem;">Everything about warehouse storage in Chatra.</p>
      </div>

      <div style="display: flex; flex-direction: column; gap: 15px;">
        <?php foreach ($faq_list as $index => $faq): ?>
          <div style="border: 1px solid #e2e8f0; border-radius: 8px; overflow: hidden; background: #ffffff;">
            <div style="padding: 18px 22px; font-weight: 700; font-size: 1.05rem; color: #0f172a; cursor: pointer; display: flex; justify-content: space-between; align-items: center;" onclick="this.nextElementSibling.style.display = this.nextElementSibling.style.display === 'block' ? 'none' : 'block';">
              <span><?php echo ($index + 1) . '. ' . htmlspecialchars($faq['q']); ?></span>
              <i class="fa-solid fa-chevron-down" style="font-size: 0.9rem; color: #2563eb;"></i>
            </div>
            <div style="padding: 0 22px 18px 22px; font-size: 0.95rem; color: #475569; line-height: 1.7; display: <?php echo $index === 0 ? 'block' : 'none'; ?>;">
              <?php echo htmlspecialchars($faq['a']); ?>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- Bottom CTA Banner -->
  <section class="cta-banner" style="background: linear-gradient(135deg, #1e3a8a 0%, #0f172a 100%); color: #ffffff; padding: 50px 0; text-align: center;" id="bottom-cta">
    <div class="container" style="max-width: 900px; margin: 0 auto; padding: 0 15px;">
      <h2 style="font-size: 2.2rem; font-weight: 800; margin-bottom: 15px; color: #ffffff;">Reserve Safe Warehouse Storage in Chatra Today!</h2>
      <p style="font-size: 1.1rem; color: #cbd5e1; margin-bottom: 30px; line-height: 1.7;">
        Call Shree Ashirwad Packers and Movers for flexible daily, monthly, or annual household storage packages!
      </p>
      <div style="display: flex; justify-content: center; gap: 15px; flex-wrap: wrap;">
        <a href="tel:+918409531615" title="Call +91 8409531615" style="background: #2563eb; color: #ffffff; padding: 14px 30px; border-radius: 8px; font-weight: 700; text-decoration: none; display: inline-flex; align-items: center; gap: 10px; font-size: 1.05rem;" id="cta-call-btn">
          <i class="fa-solid fa-phone"></i> Call +91 8409531615
        </a>
        <a href="https://api.whatsapp.com/send?phone=918409531615&text=Hello%20Shree%20Ashirwad%20Packers,%20I%20need%20warehouse%20storage%20in%20Chatra." title="Chat on WhatsApp" style="background: #22c55e; color: #ffffff; padding: 14px 30px; border-radius: 8px; font-weight: 700; text-decoration: none; display: inline-flex; align-items: center; gap: 10px; font-size: 1.05rem;" id="cta-wa-btn">
          <i class="fa-brands fa-whatsapp"></i> Chat on WhatsApp
        </a>
      </div>
    </div>
  </section>

</main>

<script>
function sendHeroWhatsAppLead(event, form) {
  event.preventDefault();
  var name = form.querySelector('[name="name"]').value;
  var phone = form.querySelector('[name="phone"]').value;
  var moveFrom = form.querySelector('[name="move_from"]').value;
  var moveTo = form.querySelector('[name="move_to"]').value;
  var extraMsg = form.querySelector('[name="message"]').value;
  
  var message = "Hello Shree Ashirwad Packers & Movers,\n\nI would like to request a Shifting Quote:\n- Name: " + name + "\n- Phone: " + phone + "\n- Moving From: " + moveFrom + "\n- Moving To: " + moveTo;
  
  if (extraMsg && extraMsg.trim() !== '') {
    message += "\n- Details: " + extraMsg;
  }
  
  var whatsappUrl = "https://api.whatsapp.com/send?phone=918409531615&text=" + encodeURIComponent(message);
  window.location.href = whatsappUrl;
}
</script>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
