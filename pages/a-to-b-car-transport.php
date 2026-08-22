<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "Reliable A to B Car Transport Services in India";
$page_desc = "Professional Point A to Point B car transport services in India. Direct door-to-door vehicle shipping using enclosed hydraulic car carriers with zero driving mileage additions, GPS tracking, and IBA-approved billing.";
$page_keywords = "A to B car transport, point to point vehicle shipping, direct car transport India, door to door car carrier service, intercity vehicle relocation";
$canonical_url = "https://shreeashirwadpackersandmovers.com/pages/a-to-b-car-transport.php";

$faq_list = [
    ['q' => 'What does "A to B Car Transport" mean?', 'a' => 'A to B car transport is a direct point-to-point vehicle shipping service where your car is collected directly from your origin address (Point A) and transported straight to your destination address (Point B) without unnecessary yard-hopping or secondary transfers.'],
    ['q' => 'How is my car protected against road wear during A to B transport?', 'a' => 'Your vehicle is loaded onto specialized enclosed hydraulic car carriers equipped with rubberized wheel chocks and nylon ratchet lashing belts. The car is never driven intercity, keeping your odometer unchanged.'],
    ['q' => 'What documents do I need for point-to-point car relocation?', 'a' => 'You need to provide copies of your vehicle Registration Certificate (RC), valid motor insurance policy, owner ID proof (Aadhaar or PAN), and key handover authorisation.'],
    ['q' => 'Can I track my car during transit from Point A to Point B?', 'a' => 'Yes. All our primary intercity car carrier trailers are fitted with satellite GPS devices, providing real-time location updates throughout the journey.'],
    ['q' => 'Are personal belongings allowed inside the car during transit?', 'a' => 'We advise removing all valuable personal items and loose accessories. Standard spare tires, jack, and factory toolkits should remain securely stowed in the trunk.'],
    ['q' => 'Is transit insurance included in A to B car shipping?', 'a' => 'Yes. We issue an official transit risk insurance policy covering the declared market value of your vehicle against physical damage or highway hazards during transit.']
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
            DIRECT POINT-TO-POINT CAR RELOCATION
          </span>
          <h1 style="font-size: 2.5rem; font-weight: 800; line-height: 1.2; margin-bottom: 20px; color: #ffffff;">
            Reliable <span style="color: #f59e0b;">A to B Car Transport Services</span> in India
          </h1>
          <p style="font-size: 1.1rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 25px;">
            Need to ship your hatchback, sedan, SUV, or luxury automobile directly from Point A to Point B? Shree Ashirwad Packers and Movers provides direct door-to-door vehicle transport using enclosed hydraulic car carriers with zero driving mileage, live GPS tracking, and complete transit insurance.
          </p>

          <div style="display: flex; gap: 15px; flex-wrap: wrap; margin-bottom: 30px;">
            <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Transport Expert" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
              <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call Expert: <?php echo SITE_PHONE; ?>
            </a>
            <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20A%20to%20B%20car%20transport%20quote." title="Chat on WhatsApp" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
              <i class="fab fa-whatsapp" style="margin-right: 8px;"></i> Chat on WhatsApp
            </a>
          </div>

          <div style="display: flex; gap: 20px; font-size: 0.9rem; color: #94a3b8;">
            <span><strong style="color: #f59e0b;">Door-to-Door</strong> Pickup</span>
            <span><strong style="color: #f59e0b;">Zero Driving</strong> Mileage</span>
            <span><strong style="color: #f59e0b;">GPS Live</strong> Tracking</span>
          </div>
        </div>

        <!-- Hero Lead Form Column -->
        <div class="hero-form-card" style="background: rgba(255, 255, 255, 0.05); backdrop-filter: blur(10px); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 16px; padding: 30px; box-shadow: 0 15px 35px rgba(0,0,0,0.4);">
          <h2 style="font-size: 1.4rem; color: #ffffff; margin-bottom: 8px; font-weight: 700; text-align: center;">Get Point A to B Transport Quote</h2>
          <p style="font-size: 0.85rem; color: #94a3b8; text-align: center; margin-bottom: 20px;">Transparent vehicle shipping estimate in 2 minutes</p>

          <form action="#" method="POST" onsubmit="sendHeroWhatsAppLead(event, this);">
            <div style="margin-bottom: 14px;">
              <input type="text" name="name" class="form-control" placeholder="Your Full Name" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="margin-bottom: 14px;">
              <input type="tel" name="phone" class="form-control" placeholder="10-Digit Phone Number" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 10px; margin-bottom: 14px;">
              <input type="text" name="move_from" class="form-control" placeholder="Point A (Origin City)" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
              <input type="text" name="move_to" class="form-control" placeholder="Point B (Destination City)" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
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
      
      <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Service Architecture</span>
      <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin: 10px 0 25px 0;">
        How Point A to Point B Car Transport Works
      </h2>
      
      <p style="font-size: 1.05rem; color: #cbd5e1; margin-bottom: 30px;">
        Unlike generic logistics providers that move vehicles through multiple third-party transit hubs and warehouses, our A to B car shipping model guarantees direct, dedicated transit from your pickup location to your final address.
      </p>

      <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 20px; margin-bottom: 40px;">
        
        <div style="background: #172a54; padding: 22px; border-radius: 12px; border: 1px solid rgba(245,158,11,0.25);">
          <h3 style="font-size: 1.15rem; color: #f59e0b; margin-bottom: 10px;"><i class="fas fa-home" style="margin-right: 8px;"></i> Doorstep Pickup at Point A</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.6;">
            Our inspection officer arrives at your specified address, documents vehicle mileage, captures scratch mapping, and issues an official handover slip.
          </p>
        </div>

        <div style="background: #172a54; padding: 22px; border-radius: 12px; border: 1px solid rgba(245,158,11,0.25);">
          <h3 style="font-size: 1.15rem; color: #f59e0b; margin-bottom: 10px;"><i class="fas fa-truck-monster" style="margin-right: 8px;"></i> Hydraulic Ramp Loading</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.6;">
            Cars are driven up smooth hydraulic ramps into specialized covered car carriers, avoiding undercarriage scraping or ground impact.
          </p>
        </div>

        <div style="background: #172a54; padding: 22px; border-radius: 12px; border: 1px solid rgba(245,158,11,0.25);">
          <h3 style="font-size: 1.15rem; color: #f59e0b; margin-bottom: 10px;"><i class="fas fa-shield-alt" style="margin-right: 8px;"></i> Wheel Chocks &amp; Ratchet Straps</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.6;">
            Heavy rubber chocks lock all four tires into floor tracks while high-tensile polyester belts secure the vehicle against highway vibration.
          </p>
        </div>

        <div style="background: #172a54; padding: 22px; border-radius: 12px; border: 1px solid rgba(245,158,11,0.25);">
          <h3 style="font-size: 1.15rem; color: #f59e0b; margin-bottom: 10px;"><i class="fas fa-map-marked-alt" style="margin-right: 8px;"></i> Doorstep Delivery at Point B</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.6;">
            Your vehicle is delivered directly to your new address at Point B, where a joint inspection is performed matching the pre-move condition report.
          </p>
        </div>

      </div>

    </div>
  </section>

  <!-- Section: Pricing Overview Matrix -->
  <section style="padding: 60px 0; background: #070d1e; color: #ffffff; border-top: 1px solid rgba(245, 158, 11, 0.2);">
    <div class="container" style="max-width: 900px;">
      
      <div class="text-center" style="margin-bottom: 35px;">
        <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem;">Estimated Rates</span>
        <h2 style="font-size: 2rem; font-weight: 800; color: #ffffff; margin-top: 10px;">
          Point A to B Car Shipping Cost Spectrum
        </h2>
      </div>

      <div style="overflow-x: auto;">
        <table style="width: 100%; border-collapse: collapse; background: #101c40; border-radius: 12px; overflow: hidden; border: 1px solid rgba(245, 158, 11, 0.3);">
          <thead>
            <tr style="background: #172a54; color: #f59e0b; font-size: 1rem; text-align: left;">
              <th style="padding: 16px; border-bottom: 2px solid rgba(245,158,11,0.3);">Distance Range</th>
              <th style="padding: 16px; border-bottom: 2px solid rgba(245,158,11,0.3);">Hatchback Cars</th>
              <th style="padding: 16px; border-bottom: 2px solid rgba(245,158,11,0.3);">Sedan Vehicles</th>
              <th style="padding: 16px; border-bottom: 2px solid rgba(245,158,11,0.3);">SUV / MUV Vehicles</th>
            </tr>
          </thead>
          <tbody style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.6;">
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.08);">
              <td style="padding: 14px 16px; font-weight: 600;">Short Route (up to 400 km)</td>
              <td style="padding: 14px 16px;">₹6,000 – ₹8,500</td>
              <td style="padding: 14px 16px;">₹7,500 – ₹10,000</td>
              <td style="padding: 14px 16px;">₹9,000 – ₹12,000</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.08);">
              <td style="padding: 14px 16px; font-weight: 600;">Medium Route (400 – 1,000 km)</td>
              <td style="padding: 14px 16px;">₹8,500 – ₹12,000</td>
              <td style="padding: 14px 16px;">₹10,500 – ₹14,500</td>
              <td style="padding: 14px 16px;">₹13,000 – ₹17,500</td>
            </tr>
            <tr>
              <td style="padding: 14px 16px; font-weight: 600;">Long Distance (1,000+ km)</td>
              <td style="padding: 14px 16px;">₹12,000 – ₹16,000</td>
              <td style="padding: 14px 16px;">₹14,500 – ₹19,500</td>
              <td style="padding: 14px 16px;">₹18,000 – ₹25,000</td>
            </tr>
          </tbody>
        </table>
      </div>

    </div>
  </section>

  <!-- Section: Frequently Asked Questions -->
  <section style="padding: 70px 0; background: #0b132b; color: #ffffff;">
    <div class="container" style="max-width: 900px;">
      
      <div class="text-center" style="margin-bottom: 45px;">
        <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem;">Car Relocation FAQs</span>
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin-top: 10px;">
          Frequently Asked Questions About <span style="color: #f59e0b;">A to B Car Transport</span>
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
        Ship Your Car Direct from Point A to Point B with <span style="color: #f59e0b;">Shree Ashirwad Packers</span>
      </h2>
      <p style="font-size: 1.05rem; color: #cbd5e1; max-width: 750px; margin: 0 auto 30px auto; line-height: 1.7;">
        Zero driving wear, doorstep pickup and delivery, live satellite GPS tracking, and IBA-approved billing across India.
      </p>

      <div style="display: flex; gap: 15px; justify-content: center; flex-wrap: wrap;">
        <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Now" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 30px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1.05rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
          <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call Now: <?php echo SITE_PHONE; ?>
        </a>
        <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20A%20to%20B%20car%20transport%20quote." title="Chat on WhatsApp" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 30px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1.05rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
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
  
  var message = "Hello Shree Ashirwad Packers & Movers,\n\nI would like to request an A to B Car Transport Quote:\n- Name: " + name + "\n- Phone: " + phone + "\n- Point A (Origin): " + moveFrom + "\n- Point B (Destination): " + moveTo;
  
  var whatsappUrl = "https://api.whatsapp.com/send?phone=918409531615&text=" + encodeURIComponent(message);
  window.location.href = whatsappUrl;
}
</script>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>

