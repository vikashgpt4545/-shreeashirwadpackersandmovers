<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "Local vs Intercity Shifting Charges in Chatra Compared";
$page_desc = "Clear comparison between local house shifting rates and intercity long-distance relocation costs in Chatra. Learn distance factors and pricing models.";
$page_keywords = "local vs intercity shifting charges chatra, local moving rates chatra, long distance shifting cost chatra, domestic relocation comparison chatra, local house shifting rate, intercity transport cost chatra, distance price calculator chatra, highway moving charges chatra, local vs domestic packers, shifting tariff comparison, transparent moving rates, local truck rental cost, long distance truck charges, ashrivad rate comparison, relocation cost breakdown";

$page_city = "Chatra";

$faq_list = [
    [
        'q' => 'What is the main difference between local and intercity shifting charges in Chatra?',
        'a' => 'Local shifting charges within Chatra focus primarily on labor, packing material, and short-distance truck trips. Intercity shifting charges factor in total highway distance in kilometers, toll taxes, state border permits, driver allowances, and multi-layer transit packaging.'
    ],
    [
        'q' => 'How much does local shifting cost within Chatra town?',
        'a' => 'Local house shifting within Chatra ranges from ₹3,000 to ₹5,500 for a 1BHK, ₹5,500 to ₹9,500 for a 2BHK, and ₹9,500 to ₹15,000 for a 3BHK residence.'
    ],
    [
        'q' => 'How much does intercity shifting from Chatra to Ranchi or Patna cost?',
        'a' => 'Intercity relocation from Chatra to Ranchi (~140 km) costs ₹6,500 to ₹15,500, while moving to Patna (~190 km) costs ₹8,500 to ₹18,500 based on house size.'
    ],
    [
        'q' => 'Why are packing material requirements higher for intercity moves?',
        'a' => 'Intercity transport exposes goods to multi-hour highway vibrations, road bumps, and weather changes. Therefore, a rigid 7-layer protective pack with custom wooden crating is required, whereas local moves may require lighter 3-layer protection.'
    ],
    [
        'q' => 'What is the price difference between dedicated container trucks and shared trucks?',
        'a' => 'Dedicated container trucks provide direct express delivery with zero handling stops, costing 20-30% more than shared part-load container options.'
    ],
    [
        'q' => 'Are toll taxes included in local shifting charges in Chatra?',
        'a' => 'Local moves within Chatra town rarely encounter toll gates. For intercity moves along NH-22 or GT Road, toll taxes are fully detailed in the written quote.'
    ],
    [
        'q' => 'How does distance impact long-distance shifting costs from Chatra?',
        'a' => 'Freight charges increase incrementally per kilometer to cover diesel fuel, highway toll fees, interstate transit permits, and driver overtime.'
    ],
    [
        'q' => 'Is transit insurance required for local house shifting within Chatra?',
        'a' => 'Transit insurance is optional for short local moves but mandatory for intercity relocations to protect against highway collision risks.'
    ],
    [
        'q' => 'How do labor charges compare between local and intercity moves?',
        'a' => 'Local moves include loading and unloading labor at both ends on the same day. Intercity moves may involve separate destination unloading crews.'
    ],
    [
        'q' => 'What is the cost difference for bike transport in local vs intercity moves?',
        'a' => 'Local bike transfer within Chatra costs ₹800 to ₹1,500, whereas long-distance bike shipping in belt-anchored container trucks costs ₹2,500 to ₹6,500.'
    ],
    [
        'q' => 'Do intercity moves take longer to execute than local Chatra moves?',
        'a' => 'Yes, local moves are completed within 4 to 8 hours on the same day, while intercity moves take 1 to 5 days depending on destination distance.'
    ],
    [
        'q' => 'How can I calculate an estimated intercity shifting quote from Chatra?',
        'a' => 'Multiply total goods volume (in cubic feet or truck size) by distance rate per km, adding packing material fees, labor, GST (18%), and transit insurance (3%).'
    ],
    [
        'q' => 'Are floor elevation charges higher for intercity moves?',
        'a' => 'Stair carry charges per floor are identical, but intercity moves may involve two different floor elevations at pickup and drop locations.'
    ],
    [
        'q' => 'What payment options are available for local vs intercity shifting?',
        'a' => 'Local moves are typically settled upon unloading. Intercity moves require an advance payment at loading, with the balance settled prior to unloading.'
    ],
    [
        'q' => 'Are IBA GST bills valid for both local and intercity relocation expense claims?',
        'a' => 'Yes, our 100% claimable IBA GST invoices are valid for both local transfer allowances and long-distance intercity relocation claims.'
    ],
    [
        'q' => 'How does warehouse storage pricing compare between local and intercity moves?',
        'a' => 'Storage rates remain constant (₹100 to ₹250 per day), but intercity clients often use storage while waiting for new city possession.'
    ],
    [
        'q' => 'What items can be moved in local shifting but are restricted in intercity transport?',
        'a' => 'Perishable food items and open liquids can be moved locally but are strictly barred from multi-day intercity container trucks.'
    ],
    [
        'q' => 'Can I get a single binding written quote comparing both local and intercity rates?',
        'a' => 'Yes, our move coordinators issue clear, itemized rate cards comparing local vs intercity costs based on your planned destination options.'
    ],
    [
        'q' => 'How does seasonal demand affect local vs intercity pricing in Chatra?',
        'a' => 'Intercity truck availability experiences higher seasonal rate fluctuations during festivals and month-ends, whereas local rates remain relatively stable.'
    ],
    [
        'q' => 'Why is Shree Ashirwad Packers the best choice for both local and intercity moves in Chatra?',
        'a' => 'We offer transparent pricing models, 7-layer packing, GPS container fleets, 100% IBA GST compliance, and zero hidden charges for both local and national moves.'
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
          <li class="breadcrumb-item active" aria-current="page" style="color: #1e293b; font-weight: 600;"><span style="margin: 0 4px;">/</span> Local vs Intercity Charges</li>
        </ol>
      </nav>
    </div>
  </div>

  <!-- Hero Section -->
  <section class="hero-section" style="background: linear-gradient(135deg, #0f172a 0%, #1e3a8a 100%); color: #ffffff; padding: 60px 0; position: relative;" id="hero-local-vs-intercity">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 15px; display: flex; flex-wrap: wrap; align-items: center; justify-content: space-between; gap: 40px;">
      
      <div class="hero-content" style="flex: 1 1 500px;">
        <span style="display: inline-block; background: rgba(37, 99, 235, 0.25); color: #60a5fa; border: 1px solid rgba(96, 165, 250, 0.3); padding: 6px 16px; border-radius: 50px; font-size: 0.85rem; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 20px;">
          Tariff & Rate Comparison Guide
        </span>
        <h1 style="font-size: 2.6rem; font-weight: 800; line-height: 1.2; margin-bottom: 20px; color: #ffffff;">
          Local vs Intercity Shifting Charges in Chatra
        </h1>
        <p style="font-size: 1.15rem; line-height: 1.8; color: #94a3b8; margin-bottom: 30px;">
          Deciding between moving within Chatra town or relocating across state borders to Ranchi, Patna, Kolkata, or Delhi? Understand how labor costs, packing material layers, distance multipliers, toll taxes, and transit insurance differentiate local rates from intercity shifting budgets.
        </p>
        
        <div class="hero-cta-buttons" style="display: flex; flex-wrap: wrap; gap: 15px; margin-bottom: 30px;">
          <a href="tel:+918409531615" title="Call +91 8409531615" class="btn-call" style="background: #2563eb; color: #ffffff; padding: 14px 28px; border-radius: 8px; font-weight: 700; text-decoration: none; display: inline-flex; align-items: center; gap: 10px; font-size: 1rem; box-shadow: 0 10px 25px rgba(37, 99, 235, 0.4);" id="hero-call-btn">
            <i class="fa-solid fa-phone"></i> Call +91 8409531615
          </a>
          <a href="https://api.whatsapp.com/send?phone=918409531615&text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20to%20compare%20local%20vs%20intercity%20rates%20in%20Chatra." title="Compare Rates" class="btn-whatsapp" style="background: #22c55e; color: #ffffff; padding: 14px 28px; border-radius: 8px; font-weight: 700; text-decoration: none; display: inline-flex; align-items: center; gap: 10px; font-size: 1rem; box-shadow: 0 10px 25px rgba(34, 197, 94, 0.4);" id="hero-wa-btn">
            <i class="fa-brands fa-whatsapp"></i> Compare Rates
          </a>
        </div>
      </div>

      <!-- Quick Lead Form -->
      <div class="hero-form-card" style="flex: 0 1 420px; background: #ffffff; border-radius: 12px; padding: 30px; color: #1e293b; box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);" id="compare-form-box">
        <h3 style="font-size: 1.4rem; font-weight: 700; margin-bottom: 8px; color: #0f172a;">Rate Comparison Estimator</h3>
        <p style="font-size: 0.88rem; color: #64748b; margin-bottom: 20px;">Receive both local &amp; intercity estimates!</p>
        
        <form onsubmit="sendHeroWhatsAppLead(event, this);" id="compare-lead-form">
          <div style="margin-bottom: 14px;">
            <input type="text" name="name" placeholder="Your Name" required style="width: 100%; padding: 12px 14px; border: 1px solid #cbd5e1; border-radius: 6px; font-size: 0.95rem; box-sizing: border-box;">
          </div>
          <div style="margin-bottom: 14px;">
            <input type="tel" name="phone" placeholder="Mobile Number" required style="width: 100%; padding: 12px 14px; border: 1px solid #cbd5e1; border-radius: 6px; font-size: 0.95rem; box-sizing: border-box;">
          </div>
          <div style="margin-bottom: 14px;">
            <input type="text" name="move_from" placeholder="Pickup Location (e.g. Chatra)" required style="width: 100%; padding: 12px 14px; border: 1px solid #cbd5e1; border-radius: 6px; font-size: 0.95rem; box-sizing: border-box;">
          </div>
          <div style="margin-bottom: 14px;">
            <input type="text" name="move_to" placeholder="Destination City" required style="width: 100%; padding: 12px 14px; border: 1px solid #cbd5e1; border-radius: 6px; font-size: 0.95rem; box-sizing: border-box;">
          </div>
          <div style="margin-bottom: 18px;">
            <textarea name="message" placeholder="Details of items (e.g., 2BHK House, Bike)" rows="3" style="width: 100%; padding: 12px 14px; border: 1px solid #cbd5e1; border-radius: 6px; font-size: 0.95rem; box-sizing: border-box;"></textarea>
          </div>
          <button type="submit" style="width: 100%; background: #2563eb; color: #ffffff; border: none; padding: 14px; border-radius: 6px; font-size: 1rem; font-weight: 700; cursor: pointer;" id="submit-compare-btn">
            Get Dual Rate Card <i class="fa-solid fa-arrow-right" style="margin-left: 6px;"></i>
          </button>
        </form>
      </div>

    </div>
  </section>

  <!-- Detailed Guide Content (1800+ words) -->

  <section class="content-guide-section" style="background: #ffffff; padding: 60px 0;" id="detailed-comparison-guide">
    <div class="container" style="max-width: 1100px; margin: 0 auto; padding: 0 15px; color: #334155; line-height: 1.8;">
      
      <h2 style="font-size: 2.2rem; font-weight: 800; color: #0f172a; margin-bottom: 25px;">Detailed Breakdown: Local vs Intercity Relocation in Chatra</h2>

      <p style="font-size: 1.05rem; margin-bottom: 20px;">
        When evaluating moving expenses in Chatra, clients often wonder why intercity moving rates are significantly higher than local house shifting charges. While local moves within Chatra town focus primarily on loading labor, short-distance truck trips, and essential packing, long-distance intercity moves involve complex highway logistics, dedicated container vehicles, multi-layer protective packaging, toll taxes, and transit insurance policies.
      </p>

      <h3 style="font-size: 1.6rem; font-weight: 700; color: #1e293b; margin-top: 30px; margin-bottom: 15px;">Key Differences at a Glance</h3>

      <div style="background: #ffffff; border-radius: 10px; border: 1px solid #e2e8f0; overflow: hidden; margin-bottom: 35px; box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05);">
        <div style="overflow-x: auto;">
          <table style="width: 100%; border-collapse: collapse; text-align: left; font-size: 0.95rem;">
            <thead>
              <tr style="background: #0f172a; color: #ffffff; font-weight: 700;">
                <th style="padding: 15px 20px;">Feature / Parameter</th>
                <th style="padding: 15px 20px;">Local Shifting (Within Chatra)</th>
                <th style="padding: 15px 20px;">Intercity Shifting (Highway Routes)</th>
              </tr>
            </thead>
            <tbody style="color: #475569;">
              <tr style="border-bottom: 1px solid #f1f5f9;">
                <td style="padding: 15px 20px; font-weight: 600; color: #0f172a;">Primary Cost Factors</td>
                <td style="padding: 15px 20px;">Labor, basic packing, local truck trip</td>
                <td style="padding: 15px 20px;">Distance km, fuel, tolls, 7-layer pack, insurance</td>
              </tr>
              <tr style="border-bottom: 1px solid #f1f5f9; background: #fafafa;">
                <td style="padding: 15px 20px; font-weight: 600; color: #0f172a;">Packaging Standard</td>
                <td style="padding: 15px 20px;">3-layer basic bubble &amp; stretch wrap</td>
                <td style="padding: 15px 20px;">Rigid 7-layer pack + wooden crating</td>
              </tr>
              <tr style="border-bottom: 1px solid #f1f5f9;">
                <td style="padding: 15px 20px; font-weight: 600; color: #0f172a;">Transport Vehicle</td>
                <td style="padding: 15px 20px;">Open Pickup / Small 14ft truck</td>
                <td style="padding: 15px 20px;">Dedicated GPS-fitted container truck</td>
              </tr>
              <tr style="border-bottom: 1px solid #f1f5f9; background: #fafafa;">
                <td style="padding: 15px 20px; font-weight: 600; color: #0f172a;">Transit Duration</td>
                <td style="padding: 15px 20px;">4 to 8 hours (Same day)</td>
                <td style="padding: 15px 20px;">1 to 5 days (Doorstep delivery)</td>
              </tr>
              <tr style="border-bottom: 1px solid #f1f5f9;">
                <td style="padding: 15px 20px; font-weight: 600; color: #0f172a;">Transit Insurance</td>
                <td style="padding: 15px 20px;">Optional for short trips</td>
                <td style="padding: 15px 20px;">Mandatory (3% declared goods value)</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

    </div>
  </section>

  <!-- FAQs Section -->
  <section class="faq-section" style="background: #f8fafc; padding: 60px 0; border-top: 1px solid #e2e8f0;" id="faqs">
    <div class="container" style="max-width: 1000px; margin: 0 auto; padding: 0 15px;">
      <div style="text-align: center; margin-bottom: 45px;">
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #0f172a; margin-bottom: 10px;">Frequently Asked Questions</h2>
        <p style="color: #64748b; font-size: 1rem;">Comparing local vs intercity relocation costs in Chatra.</p>
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
      <h2 style="font-size: 2.2rem; font-weight: 800; margin-bottom: 15px; color: #ffffff;">Get Clear, Transparent Quotes for Local or Intercity Moves!</h2>
      <p style="font-size: 1.1rem; color: #cbd5e1; margin-bottom: 30px; line-height: 1.7;">
        Call Shree Ashirwad Packers and Movers today for binding written rate cards with zero hidden costs!
      </p>
      <div style="display: flex; justify-content: center; gap: 15px; flex-wrap: wrap;">
        <a href="tel:+918409531615" title="Call +91 8409531615" style="background: #2563eb; color: #ffffff; padding: 14px 30px; border-radius: 8px; font-weight: 700; text-decoration: none; display: inline-flex; align-items: center; gap: 10px; font-size: 1.05rem;" id="cta-call-btn">
          <i class="fa-solid fa-phone"></i> Call +91 8409531615
        </a>
        <a href="https://api.whatsapp.com/send?phone=918409531615&text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20to%20compare%20local%20vs%20intercity%20rates%20in%20Chatra." title="Chat on WhatsApp" style="background: #22c55e; color: #ffffff; padding: 14px 30px; border-radius: 8px; font-weight: 700; text-decoration: none; display: inline-flex; align-items: center; gap: 10px; font-size: 1.05rem;" id="cta-wa-btn">
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
