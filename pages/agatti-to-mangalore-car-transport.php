<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "Agatti Island to Mangalore Car Shifting & Maritime Transport";
$page_desc = "Professional car shifting service from Agatti Island, Lakshadweep to Mangalore. Featuring anti-corrosive salt-air vehicle wrapping, maritime cargo barge loading, port clearance, and doorstep delivery across Karnataka.";
$page_keywords = "agatti to mangalore car transport, lakshadweep vehicle shifting, island car logistics india, agatti island car transport service";
$canonical_url = "https://shreeashirwadpackersandmovers.com/pages/agatti-to-mangalore-car-transport.php";

$faq_list = [
    ['q' => 'How do you protect cars against salt air and corrosion during sea transit from Agatti?', 'a' => 'All vehicles shipped from Agatti Island undergo specialized anti-corrosion prep: bodywork is covered with UV-resistant marine tarpaulin, rubber seals are treated, and underbody components receive protective film wrapping.'],
    ['q' => 'What is the procedure for vehicle handover at Agatti Jetty?', 'a' => 'Our local port team conducts a joint physical inspection, records current battery charge and tyre pressures, verifies 15-20% fuel level compliance for sea safety, and issues a signed bill of lading.'],
    ['q' => 'Can you deliver the car to cities beyond Mangalore once it reaches the mainland?', 'a' => 'Yes. Once offloaded at New Mangalore Port, we load your car onto covered multi-car carriers for direct delivery to Bangalore, Mysuru, Hyderabad, Chennai, or any destination city across India.'],
    ['q' => 'How do I track my car while it is on the sea vessel?', 'a' => 'We provide regular vessel sailing updates via WhatsApp, including port departure confirmations, estimated Arabian Sea arrival times, and port gate release status.']
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
            SAFE ISLAND VEHICLE SHIPPING
          </span>
          <h1 style="font-size: 2.5rem; font-weight: 800; line-height: 1.2; margin-bottom: 20px; color: #ffffff;">
            Agatti Island to Mangalore <span style="color: #f59e0b;">Car Shifting Service</span>
          </h1>
          <p style="font-size: 1.1rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 25px;">
            Need to shift your car from Agatti Island to Mangalore? Experience hassle-free maritime transport with anti-salt protection, Lakshadweep port clearance, marine insurance, and nationwide onward delivery with Shree Ashirwad Packers.
          </p>

          <div style="display: flex; gap: 15px; flex-wrap: wrap; margin-bottom: 30px;">
            <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Transport Desk" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
              <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call Logistics Desk: <?php echo SITE_PHONE; ?>
            </a>
            <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20Agatti%20to%20Mangalore%20car%20shifting%20quote." title="Chat on WhatsApp" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
              <i class="fab fa-whatsapp" style="margin-right: 8px;"></i> Chat on WhatsApp
            </a>
          </div>

          <div style="display: flex; gap: 20px; font-size: 0.9rem; color: #94a3b8;">
            <span><strong style="color: #f59e0b;">Anti-Corrosion</strong> Wrap</span>
            <span><strong style="color: #f59e0b;">Lakshadweep Port</strong> Clearance</span>
            <span><strong style="color: #f59e0b;">Doorstep</strong> Delivery</span>
          </div>
        </div>

        <!-- Hero Lead Form Column -->
        <div class="hero-form-card" style="background: rgba(255, 255, 255, 0.05); backdrop-filter: blur(10px); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 16px; padding: 30px; box-shadow: 0 15px 35px rgba(0,0,0,0.4);">
          <h2 style="font-size: 1.4rem; color: #ffffff; margin-bottom: 8px; font-weight: 700; text-align: center;">Get Agatti Car Shifting Quote</h2>
          <p style="font-size: 0.85rem; color: #94a3b8; text-align: center; margin-bottom: 20px;">Receive complete shipping estimation on WhatsApp in 2 minutes</p>

          <form action="#" method="POST" onsubmit="sendHeroWhatsAppLead(event, this);">
            <div style="margin-bottom: 14px;">
              <input type="text" name="name" class="form-control" placeholder="Your Full Name" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="margin-bottom: 14px;">
              <input type="tel" name="phone" class="form-control" placeholder="10-Digit Phone Number" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 10px; margin-bottom: 14px;">
              <input type="text" name="move_from" class="form-control" value="Agatti Island" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
              <input type="text" name="move_to" class="form-control" value="Mangalore" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <button type="submit" style="width: 100%; padding: 14px; background: linear-gradient(135deg, #d32f2f 0%, #f59e0b 100%); color: #ffffff; border: none; border-radius: 50px; font-weight: 700; font-size: 1rem; cursor: pointer;">
              Get Instant Estimate Now &rarr;
            </button>
          </form>
        </div>

      </div>
    </div>
  </section>

  <!-- Detailed Service Feature Section -->
  <section style="padding: 70px 0; background: #0b132b; color: #e2e8f0; line-height: 1.8;">
    <div class="container" style="max-width: 950px;">
      
      <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Safety Protocols</span>
      <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin: 10px 0 25px 0;">
        Specialized Features for Agatti Island Car Transport
      </h2>
      
      <p style="font-size: 1.05rem; color: #cbd5e1; margin-bottom: 30px;">
        Maritime transportation requires extra vigilance to guard against salt spray, ocean humidity, and rough vessel motion. Our service includes:
      </p>

      <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 20px; margin-bottom: 40px;">
        
        <div style="background: #172a54; padding: 22px; border-radius: 12px; border: 1px solid rgba(245,158,11,0.25);">
          <h3 style="font-size: 1.15rem; color: #f59e0b; margin-bottom: 10px;"><i class="fas fa-shield-alt" style="margin-right: 8px;"></i> Salt Air Anti-Rust Protection</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.6;">
            Heavy-duty plastic shrink wrapping and anti-salt protective sheets cover the vehicle body during open sea voyage.
          </p>
        </div>

        <div style="background: #172a54; padding: 22px; border-radius: 12px; border: 1px solid rgba(245,158,11,0.25);">
          <h3 style="font-size: 1.15rem; color: #f59e0b; margin-bottom: 10px;"><i class="fas fa-ship" style="margin-right: 8px;"></i> Vessel Deck Wheel Lashing</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.6;">
            Four-point heavy webbing straps anchor all four wheels directly to ship deck cleats, eliminating lateral rolling.
          </p>
        </div>

        <div style="background: #172a54; padding: 22px; border-radius: 12px; border: 1px solid rgba(245,158,11,0.25);">
          <h3 style="font-size: 1.15rem; color: #f59e0b; margin-bottom: 10px;"><i class="fas fa-passport" style="margin-right: 8px;"></i> Port Permits &amp; Gate Pass</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.6;">
            Our dedicated island handling agents manage all paperwork with Lakshadweep Administration and customs authorities.
          </p>
        </div>

        <div style="background: #172a54; padding: 22px; border-radius: 12px; border: 1px solid rgba(245,158,11,0.25);">
          <h3 style="font-size: 1.15rem; color: #f59e0b; margin-bottom: 10px;"><i class="fas fa-truck" style="margin-right: 8px;"></i> Onward Mainland Shipping</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.6;">
            Seamless transfer from New Mangalore Port directly onto enclosed car carrier trucks bound for your final city.
          </p>
        </div>

      </div>

    </div>
  </section>

  <!-- Section: Frequently Asked Questions -->
  <section style="padding: 70px 0; background: #070d1e; color: #ffffff;">
    <div class="container" style="max-width: 900px;">
      
      <div class="text-center" style="margin-bottom: 45px;">
        <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem;">Service FAQs</span>
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin-top: 10px;">
          Frequently Asked Questions About <span style="color: #f59e0b;">Agatti to Mangalore Shifting</span>
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
        Book Agatti to Mangalore Car Transport with <span style="color: #f59e0b;">Shree Ashirwad Packers</span>
      </h2>
      <p style="font-size: 1.05rem; color: #cbd5e1; max-width: 750px; margin: 0 auto 30px auto; line-height: 1.7;">
        Complete island logistics, port clearance, and insured door-to-door delivery.
      </p>

      <div style="display: flex; gap: 15px; justify-content: center; flex-wrap: wrap;">
        <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Now" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 30px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1.05rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
          <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call Now: <?php echo SITE_PHONE; ?>
        </a>
        <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20Agatti%20to%20Mangalore%20car%20shifting%20quote." title="Chat on WhatsApp" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 30px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1.05rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
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
  
  var message = "Hello Shree Ashirwad Packers & Movers,\n\nI would like to request an Agatti to Mangalore Car Shifting Quote:\n- Name: " + name + "\n- Phone: " + phone + "\n- Pickup City: " + moveFrom + "\n- Destination City: " + moveTo;
  
  var whatsappUrl = "https://api.whatsapp.com/send?phone=918409531615&text=" + encodeURIComponent(message);
  window.location.href = whatsappUrl;
}
</script>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>

