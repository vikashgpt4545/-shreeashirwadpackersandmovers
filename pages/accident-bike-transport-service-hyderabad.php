<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "Accident Bike Transport Service Hyderabad | 24/7 Emergency Towing";
$page_desc = "24/7 emergency accident bike transport and motorcycle flatbed towing in Hyderabad. Safe transit to authorized service centers and insurance survey yards across Hitech City, Gachibowli, Kukatpally, Madhapur, and ORR.";
$page_keywords = "accident bike transport Hyderabad, motorcycle towing service Hyderabad, flatbed bike carrier Hyderabad, emergency bike recovery, damaged two wheeler transport";
$canonical_url = "https://shreeashirwadpackersandmovers.com/pages/accident-bike-transport-service-hyderabad.php";

$faq_list = [
    ['q' => 'How fast can an emergency flatbed bike carrier reach my location in Hyderabad?', 'a' => 'Our local emergency response teams cover major Hyderabad corridors (Hitech City, Gachibowli, ORR, Kukatpally, Secunderabad) with an average dispatch time of 30 to 45 minutes.'],
    ['q' => 'How are non-rollable or severely damaged bikes loaded onto the truck?', 'a' => 'We use specialized hydraulic flatbed trucks equipped with electric winches, soft-strap harness rigs, and wheel chocks to lift and secure immobilized motorcycles without causing secondary frame or cosmetic damage.'],
    ['q' => 'Can you transport my damaged bike directly to an insurance survey yard or service center?', 'a' => 'Yes. We provide direct point-to-point transit from accident spots or police stations directly to authorized brand service centers (e.g. Hero, Honda, Royal Enfield, KTM, BMW Motorrad) or insurance claim survey yards in Hyderabad.'],
    ['q' => 'What documents are required to transport an accident-involved motorcycle?', 'a' => 'You need to present a copy of the vehicle RC, driver’s DL, insurance policy, and an FIR or police spot memo if required for legal transit clearance.'],
    ['q' => 'Are emergency bike towing services available late at night on Hyderabad ORR?', 'a' => 'Yes. Our emergency dispatch hotline operates 24/7, 365 days a year across the entire Outer Ring Road (ORR) network and Cyberabad Expressway routes.']
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
          <span class="section-tag" style="background: rgba(225, 29, 72, 0.2); color: #f43f5e; border: 1px solid rgba(244, 63, 94, 0.4); padding: 6px 16px; border-radius: 20px; font-size: 0.85rem; font-weight: 700; text-transform: uppercase; display: inline-block; margin-bottom: 15px;">
            24/7 EMERGENCY RECOVERY &amp; TOWING HYDERABAD
          </span>
          <h1 style="font-size: 2.5rem; font-weight: 800; line-height: 1.2; margin-bottom: 20px; color: #ffffff;">
            Accident Bike Transport Service <span style="color: #f59e0b;">Hyderabad</span>
          </h1>
          <p style="font-size: 1.1rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 25px;">
            Met with a road mishap or mechanical breakdown in Hyderabad? Shree Ashirwad Packers provides 24/7 emergency flatbed motorcycle towing, winched loading for non-rollable bikes, and safe transit to service centers across Hitech City, Gachibowli, Madhapur, Kukatpally, Banjara Hills, and ORR.
          </p>

          <div style="display: flex; gap: 15px; flex-wrap: wrap; margin-bottom: 30px;">
            <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Emergency Dispatch" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
              <i class="fas fa-ambulance" style="margin-right: 8px;"></i> Emergency Dispatch: <?php echo SITE_PHONE; ?>
            </a>
            <a href="https://wa.me/918409531615?text=URGENT:%20I%20need%20accident%20bike%20towing%20in%20Hyderabad." title="Chat on WhatsApp" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
              <i class="fab fa-whatsapp" style="margin-right: 8px;"></i> WhatsApp Location
            </a>
          </div>

          <div style="display: flex; gap: 20px; font-size: 0.9rem; color: #94a3b8;">
            <span><strong style="color: #f59e0b;">24/7</strong> Helpline</span>
            <span><strong style="color: #f59e0b;">Hydraulic</strong> Winch Lift</span>
            <span><strong style="color: #f59e0b;">Zero Extra Damage</strong> Protocol</span>
          </div>
        </div>

        <!-- Hero Lead Form Column -->
        <div class="hero-form-card" style="background: rgba(255, 255, 255, 0.05); backdrop-filter: blur(10px); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 16px; padding: 30px; box-shadow: 0 15px 35px rgba(0,0,0,0.4);">
          <h2 style="font-size: 1.4rem; color: #ffffff; margin-bottom: 8px; font-weight: 700; text-align: center;">Request Emergency Bike Towing</h2>
          <p style="font-size: 0.85rem; color: #94a3b8; text-align: center; margin-bottom: 20px;">Immediate dispatch confirmation across Hyderabad</p>

          <form action="#" method="POST" onsubmit="sendHeroWhatsAppLead(event, this);">
            <div style="margin-bottom: 14px;">
              <input type="text" name="name" class="form-control" placeholder="Your Full Name" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="margin-bottom: 14px;">
              <input type="tel" name="phone" class="form-control" placeholder="10-Digit Phone Number" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 10px; margin-bottom: 14px;">
              <input type="text" name="move_from" class="form-control" placeholder="Current Location (Hyderabad)" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
              <input type="text" name="move_to" class="form-control" placeholder="Drop Location / Workshop" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <button type="submit" style="width: 100%; padding: 14px; background: linear-gradient(135deg, #d32f2f 0%, #f59e0b 100%); color: #ffffff; border: none; border-radius: 50px; font-weight: 700; font-size: 1rem; cursor: pointer;">
              Dispatch Towing Truck Now &rarr;
            </button>
          </form>
        </div>

      </div>
    </div>
  </section>

  <!-- Detailed Service Feature Section -->
  <section style="padding: 70px 0; background: #0b132b; color: #e2e8f0; line-height: 1.8;">
    <div class="container" style="max-width: 950px;">
      
      <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Specialized Equipment</span>
      <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin: 10px 0 25px 0;">
        Specialized Accident Recovery Capabilities in Hyderabad
      </h2>
      
      <p style="font-size: 1.05rem; color: #cbd5e1; margin-bottom: 30px;">
        Transporting a damaged or jammed motorcycle requires specialised equipment to prevent secondary structural damage during transit:
      </p>

      <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 20px; margin-bottom: 40px;">
        
        <div style="background: #172a54; padding: 22px; border-radius: 12px; border: 1px solid rgba(245,158,11,0.25);">
          <h3 style="font-size: 1.15rem; color: #f59e0b; margin-bottom: 10px;"><i class="fas fa-truck-loading" style="margin-right: 8px;"></i> Hydraulic Tilting Flatbeds</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.6;">
            Flatbed platforms tilt flat to ground level, enabling smooth loading without risking undercarriage scrape or ground drag.
          </p>
        </div>

        <div style="background: #172a54; padding: 22px; border-radius: 12px; border: 1px solid rgba(245,158,11,0.25);">
          <h3 style="font-size: 1.15rem; color: #f59e0b; margin-bottom: 10px;"><i class="fas fa-cogs" style="margin-right: 8px;"></i> Electric Winch Pulling</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.6;">
            For non-rollable bikes with jammed wheels or bent forks, synthetic soft-rope electric winches gently pull the bike onto the bed.
          </p>
        </div>

        <div style="background: #172a54; padding: 22px; border-radius: 12px; border: 1px solid rgba(245,158,11,0.25);">
          <h3 style="font-size: 1.15rem; color: #f59e0b; margin-bottom: 10px;"><i class="fas fa-shield-alt" style="margin-right: 8px;"></i> Soft Harness Ties</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.6;">
            Nylon harness straps securely anchor handle bars and frame points without scratching painted fairings or alloy wheels.
          </p>
        </div>

        <div style="background: #172a54; padding: 22px; border-radius: 12px; border: 1px solid rgba(245,158,11,0.25);">
          <h3 style="font-size: 1.15rem; color: #f59e0b; margin-bottom: 10px;"><i class="fas fa-map-marker-alt" style="margin-right: 8px;"></i> Full Hyderabad Coverage</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.6;">
            Rapid response coverage across Hitech City, Gachibowli, Kondapur, Madhapur, Kukatpally, Miyapur, Secunderabad, and ORR Exits.
          </p>
        </div>

      </div>

    </div>
  </section>

  <!-- Section: Frequently Asked Questions -->
  <section style="padding: 70px 0; background: #070d1e; color: #ffffff;">
    <div class="container" style="max-width: 900px;">
      
      <div class="text-center" style="margin-bottom: 45px;">
        <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem;">Recovery FAQs</span>
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin-top: 10px;">
          Frequently Asked Questions About <span style="color: #f59e0b;">Accident Bike Towing</span>
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
        Need Immediate Bike Towing in Hyderabad? <span style="color: #f59e0b;">Call Now</span>
      </h2>
      <p style="font-size: 1.05rem; color: #cbd5e1; max-width: 750px; margin: 0 auto 30px auto; line-height: 1.7;">
        Available 24/7 across Cyberabad and Greater Hyderabad areas. Professional flatbed recovery trucks standing by.
      </p>

      <div style="display: flex; gap: 15px; justify-content: center; flex-wrap: wrap;">
        <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Dispatch" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 30px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1.05rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
          <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call Helpline: <?php echo SITE_PHONE; ?>
        </a>
        <a href="https://wa.me/918409531615?text=URGENT:%20Accident%20bike%20towing%20required%20in%20Hyderabad." title="Chat on WhatsApp" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 30px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1.05rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
          <i class="fab fa-whatsapp" style="margin-right: 8px;"></i> WhatsApp Location
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
  
  var message = "URGENT: Accident Bike Towing Request (Hyderabad):\n- Name: " + name + "\n- Phone: " + phone + "\n- Spot Location: " + moveFrom + "\n- Destination: " + moveTo;
  
  var whatsappUrl = "https://api.whatsapp.com/send?phone=918409531615&text=" + encodeURIComponent(message);
  window.location.href = whatsappUrl;
}
</script>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>

