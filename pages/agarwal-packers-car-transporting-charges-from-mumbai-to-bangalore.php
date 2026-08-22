<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "Mumbai to Bangalore Car Transport Charges & Cost Breakdown Guide";
$page_desc = "Complete rate card and cost comparison for transporting cars from Mumbai to Bangalore via NH 48. Learn typical vehicle shipping charges for hatchbacks, sedans, and SUVs, toll fees, insurance rates, and door-to-door delivery timelines.";
$page_keywords = "car transport charges mumbai to bangalore, car carrier cost mumbai to bangalore, vehicle shipping rate card, open carrier vs enclosed car transport cost";
$canonical_url = "https://shreeashirwadpackersandmovers.com/pages/agarwal-packers-car-transporting-charges-from-mumbai-to-bangalore.php";

$faq_list = [
    ['q' => 'What is the average cost of transporting a car from Mumbai to Bangalore?', 'a' => 'Car transport charges from Mumbai to Bangalore (approx. 980 km via NH 48) range between ₹9,500 and ₹14,500 for standard hatchbacks and sedans in open multi-car carriers. Enclosed carriers and SUVs cost between ₹14,000 and ₹22,000.'],
    ['q' => 'What hidden charges should I check for in car transport quotes?', 'a' => 'Always verify if the quote includes GST (18%), transit risk insurance (typically 0.9% of declared vehicle value), doorstep pickup/delivery fuel surcharges, and FASTag toll fees.'],
    ['q' => 'How many days does it take to ship a car from Mumbai to Bangalore?', 'a' => 'Car container trailers typically take 3 to 5 business days for door-to-door transit between Mumbai and Bangalore depending on weather and check-post clearance.'],
    ['q' => 'Can I keep personal belongings inside the car during transit?', 'a' => 'Logistics regulations allow up to 20-30 kg of non-valuable personal items (like spare tyres or soft bags) in the boot, but expensive electronics or cash are strictly prohibited.'],
    ['q' => 'How is transit insurance calculated for car transport?', 'a' => 'Transit insurance is calculated as 0.9% to 1.2% of the declared current IDV (Insured Declared Value) of your car, covering accidental damage or total loss during transit.']
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
            MUMBAI TO BANGALORE ROUTE GUIDE
          </span>
          <h1 style="font-size: 2.5rem; font-weight: 800; line-height: 1.2; margin-bottom: 20px; color: #ffffff;">
            Mumbai to Bangalore <span style="color: #f59e0b;">Car Transport Charges Guide</span>
          </h1>
          <p style="font-size: 1.1rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 25px;">
            Planning to ship your car from Mumbai to Bangalore? Compare transparent rate cards, open vs. enclosed carrier pricing, transit insurance costs, and door-to-door delivery schedules across the 980 km NH 48 corridor with Shree Ashirwad Packers.
          </p>

          <div style="display: flex; gap: 15px; flex-wrap: wrap; margin-bottom: 30px;">
            <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Car Transport Desk" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
              <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call Rate Desk: <?php echo SITE_PHONE; ?>
            </a>
            <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20car%20transport%20charges%20from%20Mumbai%20to%20Bangalore." title="Chat on WhatsApp" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
              <i class="fab fa-whatsapp" style="margin-right: 8px;"></i> Chat on WhatsApp
            </a>
          </div>

          <div style="display: flex; gap: 20px; font-size: 0.9rem; color: #94a3b8;">
            <span><strong style="color: #f59e0b;">980 KM</strong> NH 48 Route</span>
            <span><strong style="color: #f59e0b;">3-5 Days</strong> Door Transit</span>
            <span><strong style="color: #f59e0b;">100% Insured</strong> Carrier</span>
          </div>
        </div>

        <!-- Hero Lead Form Column -->
        <div class="hero-form-card" style="background: rgba(255, 255, 255, 0.05); backdrop-filter: blur(10px); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 16px; padding: 30px; box-shadow: 0 15px 35px rgba(0,0,0,0.4);">
          <h2 style="font-size: 1.4rem; color: #ffffff; margin-bottom: 8px; font-weight: 700; text-align: center;">Get Mumbai to Bangalore Quote</h2>
          <p style="font-size: 0.85rem; color: #94a3b8; text-align: center; margin-bottom: 20px;">Receive official cost breakdown on WhatsApp in 2 minutes</p>

          <form action="#" method="POST" onsubmit="sendHeroWhatsAppLead(event, this);">
            <div style="margin-bottom: 14px;">
              <input type="text" name="name" class="form-control" placeholder="Your Full Name" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="margin-bottom: 14px;">
              <input type="tel" name="phone" class="form-control" placeholder="10-Digit Phone Number" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 10px; margin-bottom: 14px;">
              <input type="text" name="move_from" class="form-control" value="Mumbai" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
              <input type="text" name="move_to" class="form-control" value="Bangalore" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <button type="submit" style="width: 100%; padding: 14px; background: linear-gradient(135deg, #d32f2f 0%, #f59e0b 100%); color: #ffffff; border: none; border-radius: 50px; font-weight: 700; font-size: 1rem; cursor: pointer;">
              Get Instant Estimate Now &rarr;
            </button>
          </form>
        </div>

      </div>
    </div>
  </section>

  <!-- Detailed Rate Card & Price Table Section -->
  <section style="padding: 70px 0; background: #0b132b; color: #e2e8f0; line-height: 1.8;">
    <div class="container" style="max-width: 950px;">
      
      <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Pricing Transparency</span>
      <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin: 10px 0 25px 0;">
        Mumbai to Bangalore Car Shipping Rate Card
      </h2>
      
      <p style="font-size: 1.05rem; color: #cbd5e1; margin-bottom: 30px;">
        Vehicle transport rates between Mumbai and Bangalore depend primarily on car dimensions, carrier type (open vs enclosed), and declared insurance value:
      </p>

      <div style="overflow-x: auto; margin-bottom: 45px;">
        <table style="width: 100%; border-collapse: collapse; background: #172a54; border-radius: 12px; overflow: hidden; font-size: 0.95rem;">
          <thead>
            <tr style="background: #1e3a8a; color: #f59e0b; text-align: left;">
              <th style="padding: 16px; border-bottom: 2px solid rgba(245,158,11,0.3);">Vehicle Category</th>
              <th style="padding: 16px; border-bottom: 2px solid rgba(245,158,11,0.3);">Example Models</th>
              <th style="padding: 16px; border-bottom: 2px solid rgba(245,158,11,0.3);">Open Trailer Charges</th>
              <th style="padding: 16px; border-bottom: 2px solid rgba(245,158,11,0.3);">Enclosed Container Charges</th>
            </tr>
          </thead>
          <tbody>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.08);">
              <td style="padding: 14px 16px; font-weight: 700; color: #ffffff;">Compact Hatchback</td>
              <td style="padding: 14px 16px; color: #cbd5e1;">Maruti Swift, Hyundai i10, WagonR</td>
              <td style="padding: 14px 16px; color: #6ee7b7; font-weight: 700;">₹9,500 - ₹11,500</td>
              <td style="padding: 14px 16px; color: #fca5a5;">₹14,000 - ₹16,500</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.08);">
              <td style="padding: 14px 16px; font-weight: 700; color: #ffffff;">Sedan / Compact SUV</td>
              <td style="padding: 14px 16px; color: #cbd5e1;">Honda City, Hyundai Creta, Brezza</td>
              <td style="padding: 14px 16px; color: #6ee7b7; font-weight: 700;">₹11,500 - ₹13,500</td>
              <td style="padding: 14px 16px; color: #fca5a5;">₹16,500 - ₹19,000</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.08);">
              <td style="padding: 14px 16px; font-weight: 700; color: #ffffff;">Full-Size SUV / MUV</td>
              <td style="padding: 14px 16px; color: #cbd5e1;">Toyota Innova, Mahindra XUV700, Fortuner</td>
              <td style="padding: 14px 16px; color: #6ee7b7; font-weight: 700;">₹13,500 - ₹16,000</td>
              <td style="padding: 14px 16px; color: #fca5a5;">₹19,000 - ₹22,500</td>
            </tr>
            <tr>
              <td style="padding: 14px 16px; font-weight: 700; color: #ffffff;">Luxury Sports / Exotic</td>
              <td style="padding: 14px 16px; color: #cbd5e1;">BMW 5 Series, Mercedes E-Class, Audi A6</td>
              <td style="padding: 14px 16px; color: #cbd5e1;">Not Recommended</td>
              <td style="padding: 14px 16px; color: #6ee7b7; font-weight: 700;">₹24,000 - ₹32,000 (Single-Car Covered)</td>
            </tr>
          </tbody>
        </table>
      </div>

    </div>
  </section>

  <!-- Section: Frequently Asked Questions -->
  <section style="padding: 70px 0; background: #070d1e; color: #ffffff;">
    <div class="container" style="max-width: 900px;">
      
      <div class="text-center" style="margin-bottom: 45px;">
        <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem;">Pricing FAQs</span>
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin-top: 10px;">
          Frequently Asked Questions About <span style="color: #f59e0b;">Mumbai to Bangalore Charges</span>
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
        Book Mumbai to Bangalore Car Transport with <span style="color: #f59e0b;">Shree Ashirwad Packers</span>
      </h2>
      <p style="font-size: 1.05rem; color: #cbd5e1; max-width: 750px; margin: 0 auto 30px auto; line-height: 1.7;">
        Insured open and enclosed car carriers, GPS tracking, and guaranteed door-to-door delivery.
      </p>

      <div style="display: flex; gap: 15px; justify-content: center; flex-wrap: wrap;">
        <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Now" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 30px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1.05rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
          <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call Now: <?php echo SITE_PHONE; ?>
        </a>
        <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20car%20transport%20quote%20from%20Mumbai%20to%20Bangalore." title="Chat on WhatsApp" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 30px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1.05rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
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
  
  var message = "Hello Shree Ashirwad Packers & Movers,\n\nI would like to request a Car Transport Quote (Mumbai to Bangalore):\n- Name: " + name + "\n- Phone: " + phone + "\n- Pickup City: " + moveFrom + "\n- Destination City: " + moveTo;
  
  var whatsappUrl = "https://api.whatsapp.com/send?phone=918409531615&text=" + encodeURIComponent(message);
  window.location.href = whatsappUrl;
}
</script>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>

