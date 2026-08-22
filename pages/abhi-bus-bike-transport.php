<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "Abhi Bus Bike Transport | Bike Shifting Rules & Alternatives";
$page_desc = "Complete guide on Abhi Bus bike parcel transport rules, luggage cargo charges, packaging requirements, and professional bike carrier alternatives across India.";
$page_keywords = "Abhi bus bike transport, send bike in bus, bike parcel in sleeper bus, two wheeler bus luggage charges, professional bike transport service";
$canonical_url = "https://shreeashirwadpackersandmovers.com/pages/abhi-bus-bike-transport.php";

$faq_list = [
    ['q' => 'Can I transport my motorcycle or scooter in a sleeper bus luggage boot?', 'a' => 'Yes, select private bus operators on booking portals permit two-wheelers in the lower luggage trunk provided the fuel tank is completely drained, mirrors are unbolted, and the bike is wrapped in protective foam.'],
    ['q' => 'What are the charges for sending a bike via bus cargo in India?', 'a' => 'Bus operators typically charge between ₹1,500 to ₹3,500 depending on route distance (e.g. 300km to 800km) plus loading/unloading tips to luggage porters.'],
    ['q' => 'What are the risks of shipping a bike in a bus luggage boot?', 'a' => 'Bus trunks carry heavy passenger suitcases and cargo boxes that can shift during highway braking, leading to fairing scratches, broken indicators, bent brake levers, or fuel leakage risks.'],
    ['q' => 'Is fuel draining mandatory for bus bike transport?', 'a' => 'Yes. For fire safety compliance under motor transport regulations, all gasoline must be completely siphoned from the fuel tank before loading into any passenger bus boot.'],
    ['q' => 'Why choose professional bike movers over bus parcel shipping?', 'a' => 'Professional movers like Shree Ashirwad use specialized multi-layer corrugated box packing, closed container trucks, door-to-door pickup/delivery, and official transit insurance covering full vehicle value.']
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
            BIKE SHIFTING VIA BUS &amp; CONTAINER CARRIERS
          </span>
          <h1 style="font-size: 2.5rem; font-weight: 800; line-height: 1.2; margin-bottom: 20px; color: #ffffff;">
            Abhi Bus Bike Transport <span style="color: #f59e0b;">Rules, Rates &amp; Safety Guide</span>
          </h1>
          <p style="font-size: 1.1rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 25px;">
            Planning to transport your motorcycle or scooter via intercity bus services? Understand the luggage boot height limits, fuel draining protocols, handling risks, and professional door-to-door container carrier alternatives.
          </p>

          <div style="display: flex; gap: 15px; flex-wrap: wrap; margin-bottom: 30px;">
            <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Transport Expert" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
              <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call Expert: <?php echo SITE_PHONE; ?>
            </a>
            <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20bike%20transport%20quote." title="Chat on WhatsApp" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
              <i class="fab fa-whatsapp" style="margin-right: 8px;"></i> Chat on WhatsApp
            </a>
          </div>

          <div style="display: flex; gap: 20px; font-size: 0.9rem; color: #94a3b8;">
            <span><strong style="color: #f59e0b;">5-Layer</strong> Foam Wrap</span>
            <span><strong style="color: #f59e0b;">Zero Scratch</strong> Guarantee</span>
            <span><strong style="color: #f59e0b;">Doorstep</strong> Delivery</span>
          </div>
        </div>

        <!-- Hero Lead Form Column -->
        <div class="hero-form-card" style="background: rgba(255, 255, 255, 0.05); backdrop-filter: blur(10px); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 16px; padding: 30px; box-shadow: 0 15px 35px rgba(0,0,0,0.4);">
          <h2 style="font-size: 1.4rem; color: #ffffff; margin-bottom: 8px; font-weight: 700; text-align: center;">Get Professional Bike Shipping Quote</h2>
          <p style="font-size: 0.85rem; color: #94a3b8; text-align: center; margin-bottom: 20px;">Safe container truck shipping estimation in 2 minutes</p>

          <form action="#" method="POST" onsubmit="sendHeroWhatsAppLead(event, this);">
            <div style="margin-bottom: 14px;">
              <input type="text" name="name" class="form-control" placeholder="Your Full Name" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="margin-bottom: 14px;">
              <input type="tel" name="phone" class="form-control" placeholder="10-Digit Phone Number" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 10px; margin-bottom: 14px;">
              <input type="text" name="move_from" class="form-control" placeholder="Pickup City" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
              <input type="text" name="move_to" class="form-control" placeholder="Destination City" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <button type="submit" style="width: 100%; padding: 14px; background: linear-gradient(135deg, #d32f2f 0%, #f59e0b 100%); color: #ffffff; border: none; border-radius: 50px; font-weight: 700; font-size: 1rem; cursor: pointer;">
              Get Instant Estimate Now &rarr;
            </button>
          </form>
        </div>

      </div>
    </div>
  </section>

  <!-- Informational Section: Bus Cargo vs Container Transport -->
  <section style="padding: 70px 0; background: #0b132b; color: #e2e8f0; line-height: 1.8;">
    <div class="container" style="max-width: 950px;">
      
      <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Logistics Analysis</span>
      <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin: 10px 0 25px 0;">
        Sending Bike by Bus Cargo vs. Dedicated Bike Packers
      </h2>
      
      <p style="font-size: 1.05rem; color: #cbd5e1; margin-bottom: 30px;">
        While passenger bus operators offering cargo space provide quick short-distance transport between major bus stands, transporting heavy commuting motorcycles or sports bikes requires careful evaluation of safety risks:
      </p>

      <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 24px; margin-bottom: 40px;">
        
        <div style="background: #172a54; padding: 25px; border-radius: 12px; border-top: 4px solid #f59e0b;">
          <h3 style="font-size: 1.2rem; color: #ffffff; font-weight: 700; margin-bottom: 12px;">Bus Luggage Boot Shifting</h3>
          <ul style="color: #cbd5e1; font-size: 0.95rem; padding-left: 20px; line-height: 1.7;">
            <li>Self-delivery &amp; self-pickup required at busy bus terminals</li>
            <li>Mandatory complete fuel tank draining on the spot</li>
            <li>Risk of scratches from passenger luggage shifting inside boot</li>
            <li>No official transit insurance coverage for body damage</li>
            <li>Limited vertical height clearance for tall windshields</li>
          </ul>
        </div>

        <div style="background: #172a54; padding: 25px; border-radius: 12px; border-top: 4px solid #10b981;">
          <h3 style="font-size: 1.2rem; color: #ffffff; font-weight: 700; margin-bottom: 12px;">Professional Container Shifting</h3>
          <ul style="color: #cbd5e1; font-size: 0.95rem; padding-left: 20px; line-height: 1.7;">
            <li>100% Doorstep pickup from your home &amp; doorstep delivery</li>
            <li>5-layer bubble sheet, foam guard &amp; corrugated box wrapping</li>
            <li>Dedicated closed vehicle container trucks with wheel locks</li>
            <li>Full transit insurance policy covering market value</li>
            <li>Official consignment bill &amp; live GPS shipment tracking</li>
          </ul>
        </div>

      </div>

    </div>
  </section>

  <!-- Section: Frequently Asked Questions -->
  <section style="padding: 70px 0; background: #070d1e; color: #ffffff;">
    <div class="container" style="max-width: 900px;">
      
      <div class="text-center" style="margin-bottom: 45px;">
        <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem;">Bike Transport FAQs</span>
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin-top: 10px;">
          Frequently Asked Questions About <span style="color: #f59e0b;">Bike Transport</span>
        </h2>
      </div>

      <div style="display: flex; flex-direction: column; gap: 16px;">
        <?php foreach ($faq_list as $faq): ?>
          <div style="background: #172a54; padding: 20px 24px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
            <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;"><?php echo htmlspecialchars($faq['q']); ?></h3>
            <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.7;"><?php echo htmlspecialchars($faq['a']); ?></p>
          </div>
        <?php endforeach; ?>
      </div>

    </div>
  </section>

  <!-- Call to Action Banner -->
  <section style="padding: 60px 0; background: linear-gradient(135deg, #172a54 0%, #0b132b 100%); border-top: 1.5px solid rgba(245, 158, 11, 0.4); color: #ffffff;">
    <div class="container" style="max-width: 900px; text-align: center;">
      <h2 style="font-size: 2.2rem; font-weight: 800; margin-bottom: 15px;">
        Ship Your Motorcycle Safely with <span style="color: #f59e0b;">Shree Ashirwad Packers</span>
      </h2>
      <p style="font-size: 1.05rem; color: #cbd5e1; max-width: 750px; margin: 0 auto 30px auto; line-height: 1.7;">
        Multi-layer damage-proof packing, closed container truck transport, doorstep pickup, and full insurance coverage across India.
      </p>

      <div style="display: flex; gap: 15px; justify-content: center; flex-wrap: wrap;">
        <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Now" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 30px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1.05rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
          <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call Now: <?php echo SITE_PHONE; ?>
        </a>
        <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20a%20safe%20bike%20transport%20quote." title="Chat on WhatsApp" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 30px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1.05rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
          <i class="fab fa-whatsapp" style="margin-right: 8px;"></i> Chat on WhatsApp
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
  
  var message = "Hello Shree Ashirwad Packers & Movers,\n\nI would like to request a Bike Transport Quote:\n- Name: " + name + "\n- Phone: " + phone + "\n- Pickup City: " + moveFrom + "\n- Destination City: " + moveTo;
  
  var whatsappUrl = "https://api.whatsapp.com/send?phone=918409531615&text=" + encodeURIComponent(message);
  window.location.href = whatsappUrl;
}
</script>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>

