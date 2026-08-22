<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "Specialized Recumbent Bike Transport Guide & Shipping Services";
$page_desc = "Expert guide on shipping recumbent bikes, long-wheelbase cycles, and ergonomic trikes across India. Learn custom wooden crating, handlebar disassembly, mesh seat protection, and nationwide container transit with Shree Ashirwad Packers.";
$page_keywords = "recumbent bike transport, specialty bicycle shipping India, long wheelbase cycle packing, recumbent trike relocation, custom bike crate transport";
$canonical_url = "https://shreeashirwadpackersandmovers.com/pages/advanced-transportation-products-recumbent-bike.php";

$faq_list = [
    ['q' => 'Why do recumbent bikes require specialized shipping procedures compared to standard bicycles?', 'a' => 'Recumbent bicycles feature extended wheelbases (often exceeding 60 to 70 inches), ergonomic mesh seating frames, complex steering linkage, and under-seat steering bars that exceed standard bicycle shipping box dimensions.'],
    ['q' => 'How are recumbent bikes packed for long-distance transit?', 'a' => 'We remove pedals, loosen steering boom linkages, detach mesh seat cushions, cushion the long chainline with foam tubing, and construct a custom wooden crate with internal tie-down anchors.'],
    ['q' => 'Can recumbent trikes (3-wheel recumbents) be shipped intercity?', 'a' => 'Yes. Tadpole and delta recumbent trikes are secured on dedicated wooden pallets using wide soft-wheel chocks and ratchet lashing inside closed logistics containers.'],
    ['q' => 'Is transit insurance available for high-value recumbent and custom bikes?', 'a' => 'Yes. We issue full transit risk insurance policies based on the declared invoice value of your custom recumbent or specialized cycling equipment.'],
    ['q' => 'Do I need to fully disassemble the chain drive before pickup?', 'a' => 'No. Our specialized packers wrap the extended chain tubes and derailleur in oil-resistant plastic sleeving and heavy bubble wrap without unlinking the drive chain.']
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
            SPECIALTY BICYCLE RELOCATION EXPERTS
          </span>
          <h1 style="font-size: 2.5rem; font-weight: 800; line-height: 1.2; margin-bottom: 20px; color: #ffffff;">
            Advanced Recumbent Bike <span style="color: #f59e0b;">Transport &amp; Shipping Services</span>
          </h1>
          <p style="font-size: 1.1rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 25px;">
            Shipping an advanced recumbent bike, ergonomic trike, or long-wheelbase custom cycle? Shree Ashirwad Packers provides specialized custom wooden crating, chainline protection, mesh seat padding, and insured intercity container transport across India.
          </p>

          <div style="display: flex; gap: 15px; flex-wrap: wrap; margin-bottom: 30px;">
            <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Cycling Transport Specialist" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
              <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call Specialist: <?php echo SITE_PHONE; ?>
            </a>
            <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20recumbent%20bike%20shipping%20quote." title="Chat on WhatsApp" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
              <i class="fab fa-whatsapp" style="margin-right: 8px;"></i> Chat on WhatsApp
            </a>
          </div>

          <div style="display: flex; gap: 20px; font-size: 0.9rem; color: #94a3b8;">
            <span><strong style="color: #f59e0b;">Custom Wooden</strong> Crating</span>
            <span><strong style="color: #f59e0b;">Chainline</strong> Protection</span>
            <span><strong style="color: #f59e0b;">Full Value</strong> Insurance</span>
          </div>
        </div>

        <!-- Hero Lead Form Column -->
        <div class="hero-form-card" style="background: rgba(255, 255, 255, 0.05); backdrop-filter: blur(10px); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 16px; padding: 30px; box-shadow: 0 15px 35px rgba(0,0,0,0.4);">
          <h2 style="font-size: 1.4rem; color: #ffffff; margin-bottom: 8px; font-weight: 700; text-align: center;">Get Recumbent Shipping Estimate</h2>
          <p style="font-size: 0.85rem; color: #94a3b8; text-align: center; margin-bottom: 20px;">Safe crating and door-to-door transit cost in 2 minutes</p>

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

  <!-- Detailed Service Feature Section -->
  <section style="padding: 70px 0; background: #0b132b; color: #e2e8f0; line-height: 1.8;">
    <div class="container" style="max-width: 950px;">
      
      <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Packaging Protocols</span>
      <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin: 10px 0 25px 0;">
        Specialized Handling for Recumbent &amp; Custom Bicycles
      </h2>
      
      <p style="font-size: 1.05rem; color: #cbd5e1; margin-bottom: 30px;">
        Standard bicycle cardboard boxes cannot accommodate extended recumbent frames. Our logistics team employs bespoke wooden crating and protective wrapping designed for high-performance and ergonomic cycles:
      </p>

      <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 20px; margin-bottom: 40px;">
        
        <div style="background: #172a54; padding: 22px; border-radius: 12px; border: 1px solid rgba(245,158,11,0.25);">
          <h3 style="font-size: 1.15rem; color: #f59e0b; margin-bottom: 10px;"><i class="fas fa-box" style="margin-right: 8px;"></i> Custom Wooden Crate Construction</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.6;">
            We build heavy-duty plywood crates matching the exact wheelbase length and width profile of your recumbent bike or trike.
          </p>
        </div>

        <div style="background: #172a54; padding: 22px; border-radius: 12px; border: 1px solid rgba(245,158,11,0.25);">
          <h3 style="font-size: 1.15rem; color: #f59e0b; margin-bottom: 10px;"><i class="fas fa-cogs" style="margin-right: 8px;"></i> Steering Linkage Protection</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.6;">
            Under-seat steering rods and long handlebar booms are padded with high-density EPE foam armor to eliminate movement stress.
          </p>
        </div>

        <div style="background: #172a54; padding: 22px; border-radius: 12px; border: 1px solid rgba(245,158,11,0.25);">
          <h3 style="font-size: 1.15rem; color: #f59e0b; margin-bottom: 10px;"><i class="fas fa-chair" style="margin-right: 8px;"></i> Seat &amp; Cushion Armor</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.6;">
            Ergonomic mesh seat frames are wrapped in waterproof stretch film and thick bubble wrap to prevent fabric tearing or corrosion.
          </p>
        </div>

        <div style="background: #172a54; padding: 22px; border-radius: 12px; border: 1px solid rgba(245,158,11,0.25);">
          <h3 style="font-size: 1.15rem; color: #f59e0b; margin-bottom: 10px;"><i class="fas fa-shield-alt" style="margin-right: 8px;"></i> Closed Vehicle Container Shipping</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.6;">
            Crated bikes are loaded onto covered container trucks, insulated against rain, dust, road debris, and weather fluctuations.
          </p>
        </div>

      </div>

    </div>
  </section>

  <!-- Section: Frequently Asked Questions -->
  <section style="padding: 70px 0; background: #070d1e; color: #ffffff;">
    <div class="container" style="max-width: 900px;">
      
      <div class="text-center" style="margin-bottom: 45px;">
        <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem;">Shipping FAQs</span>
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin-top: 10px;">
          Frequently Asked Questions About <span style="color: #f59e0b;">Recumbent Bike Shipping</span>
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
        Ship Your Recumbent Bike Safely with <span style="color: #f59e0b;">Shree Ashirwad Packers</span>
      </h2>
      <p style="font-size: 1.05rem; color: #cbd5e1; max-width: 750px; margin: 0 auto 30px auto; line-height: 1.7;">
        Bespoke wooden crating, insured intercity transit, and doorstep pickup across major Indian cities.
      </p>

      <div style="display: flex; gap: 15px; justify-content: center; flex-wrap: wrap;">
        <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Now" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 30px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1.05rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
          <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call Now: <?php echo SITE_PHONE; ?>
        </a>
        <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20recumbent%20bike%20shipping%20quote." title="Chat on WhatsApp" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 30px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1.05rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
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
  
  var message = "Hello Shree Ashirwad Packers & Movers,\n\nI would like to request a Recumbent Bike Shipping Quote:\n- Name: " + name + "\n- Phone: " + phone + "\n- Pickup City: " + moveFrom + "\n- Destination City: " + moveTo;
  
  var whatsappUrl = "https://api.whatsapp.com/send?phone=918409531615&text=" + encodeURIComponent(message);
  window.location.href = whatsappUrl;
}
</script>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>

