<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "Is It Advisable to Transport Your Bike? | Riding vs. Shipping Guide";
$page_desc = "Comprehensive analysis: Should you ride your bike long distance or hire professional bike transport? Compare fuel costs, highway safety risks, engine wear and tear, and container shipping benefits with Shree Ashirwad Packers.";
$page_keywords = "advisable to transport bike, ride vs ship motorcycle, bike transport vs riding long distance, two wheeler shipping benefits, motorcycle relocation guide";
$canonical_url = "https://shreeashirwadpackersandmovers.com/pages/advisable-to-transport-bike.php";

$faq_list = [
    ['q' => 'Is it more economical to ride a bike long distance or transport it by truck?', 'a' => 'For distances over 300 km, professional bike transport is generally more economical when considering fuel expenses, highway toll charges, food, hotel stays, and bike engine wear-and-tear.'],
    ['q' => 'What are the main safety risks of riding a bike 500+ km instead of shipping?', 'a' => 'Long-distance rides carry high risks of rider fatigue, unpredictable monsoon highway conditions, night driving hazards, tyre punctures in remote stretches, and accelerated engine overheating.'],
    ['q' => 'Will transporting my bike cause scratches or mechanical damage?', 'a' => 'When handled by professional packers using multi-layer bubble wrap, corrugated sheets, handle lock cushions, and dedicated container tie-down straps, damage risk is practically eliminated.'],
    ['q' => 'Is train cargo better than specialized logistics truck transport?', 'a' => 'Train cargo is cost-effective but requires self-loading at railway platforms, strict oil tank drainage, and platform waiting times. Professional truck containers offer door-to-door pickup and delivery with full insurance coverage.'],
    ['q' => 'Should premium/sports bikes (above 300cc) be ridden or transported?', 'a' => 'High-performance bikes incur high per-kilometer maintenance, tyre degradation, and engine oil stress. Transporting them in enclosed covered containers preserves resale value and mechanical health.']
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
            CONSUMER RELOCATION DECISION GUIDE
          </span>
          <h1 style="font-size: 2.5rem; font-weight: 800; line-height: 1.2; margin-bottom: 20px; color: #ffffff;">
            Is It Advisable to <span style="color: #f59e0b;">Transport Your Bike?</span>
          </h1>
          <p style="font-size: 1.1rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 25px;">
            Relocating to a new city? Weighing whether to ride your two-wheeler or hire a professional bike transport service? Read our expert comparison on financial costs, rider fatigue, engine longevity, and safety risks.
          </p>

          <div style="display: flex; gap: 15px; flex-wrap: wrap; margin-bottom: 30px;">
            <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Transport Advisor" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
              <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Talk to Advisor: <?php echo SITE_PHONE; ?>
            </a>
            <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20to%20know%20bike%20transport%20charges." title="Chat on WhatsApp" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
              <i class="fab fa-whatsapp" style="margin-right: 8px;"></i> Chat on WhatsApp
            </a>
          </div>

          <div style="display: flex; gap: 20px; font-size: 0.9rem; color: #94a3b8;">
            <span><strong style="color: #f59e0b;">Zero Wear</strong> &amp; Tear</span>
            <span><strong style="color: #f59e0b;">Safe Closed</strong> Container</span>
            <span><strong style="color: #f59e0b;">Doorstep</strong> Pickup/Delivery</span>
          </div>
        </div>

        <!-- Hero Lead Form Column -->
        <div class="hero-form-card" style="background: rgba(255, 255, 255, 0.05); backdrop-filter: blur(10px); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 16px; padding: 30px; box-shadow: 0 15px 35px rgba(0,0,0,0.4);">
          <h2 style="font-size: 1.4rem; color: #ffffff; margin-bottom: 8px; font-weight: 700; text-align: center;">Get Bike Transport Quote</h2>
          <p style="font-size: 0.85rem; color: #94a3b8; text-align: center; margin-bottom: 20px;">Compare door-to-door shipping cost on WhatsApp in 2 minutes</p>

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

  <!-- Section: Detailed Comparison Analysis -->
  <section style="padding: 70px 0; background: #0b132b; color: #e2e8f0; line-height: 1.8;">
    <div class="container" style="max-width: 950px;">
      
      <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Riding vs. Transporting</span>
      <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin: 10px 0 25px 0;">
        Detailed Comparison: Riding Long Distance vs. Professional Transport
      </h2>
      
      <p style="font-size: 1.05rem; color: #cbd5e1; margin-bottom: 30px;">
        When moving across cities or states, many bike owners evaluate riding their motorcycle instead of booking a carrier. Here is how key parameters stack up:
      </p>

      <div style="overflow-x: auto; margin-bottom: 45px;">
        <table style="width: 100%; border-collapse: collapse; background: #172a54; border-radius: 12px; overflow: hidden; font-size: 0.95rem;">
          <thead>
            <tr style="background: #1e3a8a; color: #f59e0b; text-align: left;">
              <th style="padding: 16px; border-bottom: 2px solid rgba(245,158,11,0.3);">Evaluation Parameter</th>
              <th style="padding: 16px; border-bottom: 2px solid rgba(245,158,11,0.3);">Riding Long Distance (&gt;400 km)</th>
              <th style="padding: 16px; border-bottom: 2px solid rgba(245,158,11,0.3);">Professional Container Transport</th>
            </tr>
          </thead>
          <tbody>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.08);">
              <td style="padding: 14px 16px; font-weight: 700; color: #ffffff;">Financial Expenditure</td>
              <td style="padding: 14px 16px; color: #fca5a5;">High (Fuel + Tolls + Food + Overnight Hotel + Servicing)</td>
              <td style="padding: 14px 16px; color: #6ee7b7; font-weight: 700;">Economical (Flat fixed rate with all charges included)</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.08);">
              <td style="padding: 14px 16px; font-weight: 700; color: #ffffff;">Engine &amp; Tyre Wear</td>
              <td style="padding: 14px 16px; color: #fca5a5;">Severe (Adds 500-1500 km to odometer, reduces resale value)</td>
              <td style="padding: 14px 16px; color: #6ee7b7; font-weight: 700;">Zero (Bike remains stationary in secure container)</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.08);">
              <td style="padding: 14px 16px; font-weight: 700; color: #ffffff;">Rider Safety &amp; Fatigue</td>
              <td style="padding: 14px 16px; color: #fca5a5;">High Risk (Extreme fatigue, monsoon road hazards, highway traffic)</td>
              <td style="padding: 14px 16px; color: #6ee7b7; font-weight: 700;">100% Safe (You travel comfortably via train or flight)</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.08);">
              <td style="padding: 14px 16px; font-weight: 700; color: #ffffff;">Time Commitment</td>
              <td style="padding: 14px 16px; color: #fca5a5;">1 to 3 full days of arduous driving</td>
              <td style="padding: 14px 16px; color: #6ee7b7;">Zero personal time required (Doorstep pickup)</td>
            </tr>
            <tr>
              <td style="padding: 14px 16px; font-weight: 700; color: #ffffff;">Insurance Protection</td>
              <td style="padding: 14px 16px; color: #cbd5e1;">Standard third-party or comprehensive auto policy</td>
              <td style="padding: 14px 16px; color: #6ee7b7;">Full declared-value transit insurance policy included</td>
            </tr>
          </tbody>
        </table>
      </div>

      <div style="background: #172a54; padding: 28px; border-radius: 14px; border: 1.5px solid rgba(245,158,11,0.3);">
        <h3 style="font-size: 1.3rem; color: #f59e0b; margin-bottom: 15px;">Verdict: When Is Transporting Highly Advisable?</h3>
        <ul style="margin: 0; padding-left: 20px; color: #cbd5e1;">
          <li style="margin-bottom: 10px;"><strong>Intercity Moves Beyond 300 KM:</strong> Transporting saves money, time, and physical strain.</li>
          <li style="margin-bottom: 10px;"><strong>Monsoon or Severe Winter Relocations:</strong> Slippery highways and low visibility make long rides dangerous.</li>
          <li style="margin-bottom: 10px;"><strong>Premium &amp; Superbike Relocations:</strong> Protect expensive tyres, electronics, and bodywork from highway gravel and debris.</li>
          <li style="margin-bottom: 0;"><strong>Family Shifting:</strong> When relocating entire household belongings, sending your bike in the same logistics workflow ensures synchronized arrival.</li>
        </ul>
      </div>

    </div>
  </section>

  <!-- Section: Frequently Asked Questions -->
  <section style="padding: 70px 0; background: #070d1e; color: #ffffff;">
    <div class="container" style="max-width: 900px;">
      
      <div class="text-center" style="margin-bottom: 45px;">
        <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem;">Decision FAQs</span>
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin-top: 10px;">
          Frequently Asked Questions About <span style="color: #f59e0b;">Bike Transport Feasibility</span>
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
        Transport Your Bike Safely with <span style="color: #f59e0b;">Shree Ashirwad Packers</span>
      </h2>
      <p style="font-size: 1.05rem; color: #cbd5e1; max-width: 750px; margin: 0 auto 30px auto; line-height: 1.7;">
        Save fuel costs, prevent bike wear, and enjoy safe door-to-door container shipping across India.
      </p>

      <div style="display: flex; gap: 15px; justify-content: center; flex-wrap: wrap;">
        <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Now" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 30px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1.05rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
          <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call Now: <?php echo SITE_PHONE; ?>
        </a>
        <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20bike%20transport%20quote." title="Chat on WhatsApp" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 30px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1.05rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
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

