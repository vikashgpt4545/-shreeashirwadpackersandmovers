<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "Car and Bike Transport Guide in Chatra: Safe Vehicle Shipping";
$page_desc = "Comprehensive guide to car and bike transportation from Chatra. Discover hydraulic car trailers, belt-secured bike packing, costs, and insurance.";
$page_keywords = "car and bike transport guide chatra, vehicle shipping chatra, bike transport chatra, car carrier service chatra, hydraulic car trailer chatra, enclosed bike container chatra, vehicle relocation cost chatra, safe bike moving chatra, scratch free car transport, auto shipping chatra, vehicle transit insurance chatra, two wheeler shipping chatra, four wheeler carrier chatra, vehicle transport process, ashrivad vehicle moving";

$page_city = "Chatra";

$faq_list = [
    [
        'q' => 'How are cars transported safely from Chatra to other states?',
        'a' => 'Cars are transported in specialized covered hydraulic car carrier trailers. The vehicle is securely locked using wheel chocks, safety belts, and ramp clamps to prevent movement during highway transit.'
    ],
    [
        'q' => 'How do you pack bikes and two-wheelers for damage-free shipping?',
        'a' => 'Bikes undergo a 5-layer packing process: fuel tank draining, handle/mirror foam wrapping, bubble sheet wrapping, 5-ply corrugated sheet boxing, and nylon belt anchoring inside enclosed container trucks.'
    ],
    [
        'q' => 'What documents are required for car or bike transport from Chatra?',
        'a' => 'You need to provide a copy of the Vehicle Registration Certificate (RC), valid Vehicle Insurance policy, PUC (Pollution Certificate), owner\'s ID proof (Aadhar/PAN), and signed handover inspection sheet.'
    ],
    [
        'q' => 'How much fuel should be left in the vehicle before hand-over?',
        'a' => 'Keep approximately 2 to 3 liters of fuel in the tank—just enough for loading onto trailers and driving to the final delivery destination.'
    ],
    [
        'q' => 'Is transit insurance mandatory for car and bike shipping?',
        'a' => 'Yes, full value transit insurance is strongly recommended. It covers vehicle body damage, fire, or accidental risks during long-distance transit.'
    ],
    [
        'q' => 'What is the estimated cost of transporting a bike from Chatra to Delhi or Bangalore?',
        'a' => 'Bike shipping from Chatra to regional cities (Ranchi/Patna) costs ₹2,500 to ₹3,500, while long-distance routes to Delhi, Bangalore, or Mumbai range from ₹4,500 to ₹6,500.'
    ],
    [
        'q' => 'How much does covered car carrier transport cost from Chatra?',
        'a' => 'Car shipping in covered hydraulic carriers ranges from ₹7,500 to ₹12,000 for regional routes and ₹14,000 to ₹22,000 for interstate metro destinations.'
    ],
    [
        'q' => 'Can personal luggage or household items be kept inside the car during transport?',
        'a' => 'Minor personal belongings (up to 20-30 kg in trunk) are permitted, provided they are safely secured and declared in the vehicle condition report.'
    ],
    [
        'q' => 'Do you offer doorstep pickup and delivery for vehicles in Chatra?',
        'a' => 'Yes, our car drivers and bike pickup trucks pick up the vehicle directly from your home in Chatra and deliver it to your doorstep at the destination.'
    ],
    [
        'q' => 'How can I track my vehicle during highway transit from Chatra?',
        'a' => 'All our vehicle transport trailers and container trucks are equipped with active GPS hardware for live tracking updates.'
    ],
    [
        'q' => 'What inspection steps are carried out before vehicle loading?',
        'a' => 'Our supervisor conducts a joint pre-loading inspection, records existing scratches or odometer reading, takes photos, and issues a signed Vehicle Condition Report.'
    ],
    [
        'q' => 'How long does vehicle delivery take from Chatra to major Indian cities?',
        'a' => 'Delivery to Ranchi/Patna takes 1 to 2 days, to Kolkata takes 2 to 3 days, and to Delhi, Mumbai, or Bangalore takes 4 to 6 days.'
    ],
    [
        'q' => 'What happens if my car or bike is damaged during transit?',
        'a' => 'If damage occurs, record it on the delivery receipt copy immediately. Our insurance support desk assists with full surveyor inspection and claim reimbursement.'
    ],
    [
        'q' => 'Can sports bikes or premium luxury cars be transported safely?',
        'a' => 'Yes, we provide specialized enclosed single-car carriers and customized wooden crating for luxury sports bikes and cars.'
    ],
    [
        'q' => 'Do you provide IBA GST bills for vehicle transport expense claims?',
        'a' => 'Yes, we issue 100% genuine IBA-compliant GST invoices, LR copies, and money receipts for government and corporate vehicle allowance claims.'
    ],
    [
        'q' => 'Are open car trailers used for vehicle shipping from Chatra?',
        'a' => 'We strictly utilize covered car trailers to shield vehicles from highway dust, gravel chips, weather exposure, and roadside hazards.'
    ],
    [
        'q' => 'What precautions are taken for battery and alarm systems during transit?',
        'a' => 'Car anti-theft alarms are deactivated, and battery terminals are inspected to prevent power drainage during multi-day highway transit.'
    ],
    [
        'q' => 'Can non-operational or damaged vehicles be transported from Chatra?',
        'a' => 'Yes, non-running vehicles can be loaded using specialized hydraulic winches and tow cranes.'
    ],
    [
        'q' => 'What is the payment process for car and bike relocation?',
        'a' => 'A small booking advance is paid at pickup, and the remaining balance is settled upon safe vehicle delivery.'
    ],
    [
        'q' => 'Why is Shree Ashirwad Packers the best vehicle transport service in Chatra?',
        'a' => 'We offer 15+ years of vehicle shipping experience, covered hydraulic carriers, 5-layer bike packing, real-time GPS tracking, and zero scratch guarantees.'
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
          <li class="breadcrumb-item"><a href="<?php echo SITE_URL; ?>" style="color: #2563eb; text-decoration: none;">Home</a></li>
          <li class="breadcrumb-item"><a href="<?php echo SITE_URL; ?>packers-and-movers-in-chatra" style="color: #2563eb; text-decoration: none;">Chatra</a></li>
          <li class="breadcrumb-item active" aria-current="page" style="color: #1e293b; font-weight: 600;"><span style="margin: 0 4px;">/</span> Vehicle Transport Guide</li>
        </ol>
      </nav>
    </div>
  </div>

  <!-- Hero Section -->
  <section class="hero-section" style="background: linear-gradient(135deg, #0f172a 0%, #1e3a8a 100%); color: #ffffff; padding: 60px 0; position: relative;" id="hero-vehicle-guide">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 15px; display: flex; flex-wrap: wrap; align-items: center; justify-content: space-between; gap: 40px;">
      
      <div class="hero-content" style="flex: 1 1 500px;">
        <span style="display: inline-block; background: rgba(37, 99, 235, 0.25); color: #60a5fa; border: 1px solid rgba(96, 165, 250, 0.3); padding: 6px 16px; border-radius: 50px; font-size: 0.85rem; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 20px;">
          Scratch-Free Car &amp; Bike Shipping
        </span>
        <h1 style="font-size: 2.6rem; font-weight: 800; line-height: 1.2; margin-bottom: 20px; color: #ffffff;">
          Car and Bike Transport Guide in Chatra
        </h1>
        <p style="font-size: 1.15rem; line-height: 1.8; color: #94a3b8; margin-bottom: 30px;">
          Looking to transport your car or motorcycle from Chatra to any city in India? Discover covered hydraulic car trailers, 5-layer two-wheeler packing protocols, transit insurance coverage, required RC documentation, and transparent freight rates with Shree Ashirwad Packers and Movers.
        </p>
        
        <div class="hero-cta-buttons" style="display: flex; flex-wrap: wrap; gap: 15px; margin-bottom: 30px;">
          <a href="tel:+918409531615" class="btn-call" style="background: #2563eb; color: #ffffff; padding: 14px 28px; border-radius: 8px; font-weight: 700; text-decoration: none; display: inline-flex; align-items: center; gap: 10px; font-size: 1rem; box-shadow: 0 10px 25px rgba(37, 99, 235, 0.4);" id="hero-call-btn">
            <i class="fa-solid fa-phone"></i> Call +91 8409531615
          </a>
          <a href="https://api.whatsapp.com/send?phone=918409531615&text=Hello%20Shree%20Ashirwad%20Packers,%20I%20need%20a%20car/bike%20transport%20quote%20from%20Chatra." class="btn-whatsapp" style="background: #22c55e; color: #ffffff; padding: 14px 28px; border-radius: 8px; font-weight: 700; text-decoration: none; display: inline-flex; align-items: center; gap: 10px; font-size: 1rem; box-shadow: 0 10px 25px rgba(34, 197, 94, 0.4);" id="hero-wa-btn">
            <i class="fa-brands fa-whatsapp"></i> Vehicle Quote
          </a>
        </div>
      </div>

      <!-- Quick Lead Form -->
      <div class="hero-form-card" style="flex: 0 1 420px; background: #ffffff; border-radius: 12px; padding: 30px; color: #1e293b; box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);" id="vehicle-form-box">
        <h3 style="font-size: 1.4rem; font-weight: 700; margin-bottom: 8px; color: #0f172a;">Vehicle Shipping Quote</h3>
        <p style="font-size: 0.88rem; color: #64748b; margin-bottom: 20px;">Safe doorstep pickup &amp; delivery!</p>
        
        <form onsubmit="sendHeroWhatsAppLead(event, this);" id="vehicle-lead-form">
          <div style="margin-bottom: 14px;">
            <input type="text" name="name" placeholder="Your Full Name" required style="width: 100%; padding: 12px 14px; border: 1px solid #cbd5e1; border-radius: 6px; font-size: 0.95rem; box-sizing: border-box;">
          </div>
          <div style="margin-bottom: 14px;">
            <input type="tel" name="phone" placeholder="Mobile Number" required style="width: 100%; padding: 12px 14px; border: 1px solid #cbd5e1; border-radius: 6px; font-size: 0.95rem; box-sizing: border-box;">
          </div>
          <div style="margin-bottom: 14px;">
            <input type="text" name="move_from" placeholder="Pickup Location (e.g. Chatra)" required style="width: 100%; padding: 12px 14px; border: 1px solid #cbd5e1; border-radius: 6px; font-size: 0.95rem; box-sizing: border-box;">
          </div>
          <div style="margin-bottom: 14px;">
            <input type="text" name="move_to" placeholder="Destination City (e.g. Delhi / Bangalore)" required style="width: 100%; padding: 12px 14px; border: 1px solid #cbd5e1; border-radius: 6px; font-size: 0.95rem; box-sizing: border-box;">
          </div>
          <div style="margin-bottom: 18px;">
            <textarea name="message" placeholder="Vehicle Details (e.g. Swift Car, Royal Enfield Bike)" rows="3" style="width: 100%; padding: 12px 14px; border: 1px solid #cbd5e1; border-radius: 6px; font-size: 0.95rem; box-sizing: border-box;"></textarea>
          </div>
          <button type="submit" style="width: 100%; background: #2563eb; color: #ffffff; border: none; padding: 14px; border-radius: 6px; font-size: 1rem; font-weight: 700; cursor: pointer;" id="submit-vehicle-btn">
            Calculate Vehicle Freight <i class="fa-solid fa-arrow-right" style="margin-left: 6px;"></i>
          </button>
        </form>
      </div>

    </div>
  </section>

  <!-- Content Guide Section (1800+ words) -->
  
  <!-- Section 2: Trust Counter & Live Achievements -->
  <section class="stats-section" style="padding: 45px 0; background: #070d1e; border-bottom: 1px solid rgba(245, 158, 11, 0.2);" id="trust-counter-bar">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 15px;">
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 20px; text-align: center;">
        <div style="padding: 22px; background: rgba(23, 42, 84, 0.5); border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">3,850+</div>
          <div style="font-size: 0.9rem; color: #cbd5e1; margin-top: 5px;">Relocations Completed</div>
        </div>
        <div style="padding: 22px; background: rgba(23, 42, 84, 0.5); border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">Express Transit</div>
          <div style="font-size: 0.9rem; color: #cbd5e1; margin-top: 5px;">Dedicated GPS Container Fleet</div>
        </div>
        <div style="padding: 22px; background: rgba(23, 42, 84, 0.5); border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">100%</div>
          <div style="font-size: 0.9rem; color: #cbd5e1; margin-top: 5px;">Safe 7-Layer Protection</div>
        </div>
        <div style="padding: 22px; background: rgba(23, 42, 84, 0.5); border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">IBA Approved</div>
          <div style="font-size: 0.9rem; color: #cbd5e1; margin-top: 5px;">GST Invoice &amp; Employee Claims</div>
        </div>
      </div>
    </div>
  </section>

  <section class="content-guide-section" style="background: #ffffff; padding: 60px 0;" id="detailed-vehicle-guide">
    <div class="container" style="max-width: 1100px; margin: 0 auto; padding: 0 15px; color: #334155; line-height: 1.8;">
      
      <h2 style="font-size: 2.2rem; font-weight: 800; color: #0f172a; margin-bottom: 25px;">Comprehensive Vehicle Logistics in Chatra</h2>

      <p style="font-size: 1.05rem; margin-bottom: 20px;">
        Transporting a personal car or motorcycle across long distances involves severe risks if managed by unorganized road transporters. Highway gravel chips, bad road surfaces, weather exposure, and unanchored truck loads often result in dented bodywork, scratched paint, or mechanical damage. At Shree Ashirwad Packers and Movers, we operate specialized vehicle shipping infrastructure engineered to deliver zero-scratch safety for cars and two-wheelers originating from Chatra.
      </p>

      <h3 style="font-size: 1.6rem; font-weight: 700; color: #1e293b; margin-top: 30px; margin-bottom: 15px;">1. Covered Hydraulic Car Carrier Trailers</h3>
      <p style="margin-bottom: 20px;">
        Unlike open car haulers that leave vehicles vulnerable to dust and weather elements, we transport cars in fully enclosed double-deck hydraulic car carrier trailers. Your car is driven up gentle hydraulic ramps, positioned on non-slip steel tracks, locked down with heavy rubber wheel chocks, and anchored with high-tensile safety belts. This ensures the car remains completely stationary during long-distance highway travel along NH-22 and GT Road NH-19.
      </p>

      <h3 style="font-size: 1.6rem; font-weight: 700; color: #1e293b; margin-top: 30px; margin-bottom: 15px;">2. 5-Layer Motorcycle &amp; Scooter Protection Protocol</h3>
      <p style="margin-bottom: 20px;">
        Two-wheelers receive multi-layered protective packing before loading into our specialized container trucks:
      </p>
      <ul style="padding-left: 20px; margin-bottom: 20px;">
        <li style="margin-bottom: 8px;"><strong>Layer 1:</strong> Fuel draining and battery disconnect inspection.</li>
        <li style="margin-bottom: 8px;"><strong>Layer 2:</strong> Heavy foam wrapping on handlebars, mirrors, fuel tank, and silencer.</li>
        <li style="margin-bottom: 8px;"><strong>Layer 3:</strong> High-density air-bubble wrapping across the entire body frame.</li>
        <li style="margin-bottom: 8px;"><strong>Layer 4:</strong> 5-ply corrugated fiberboard sheet encasement for impact absorption.</li>
        <li style="margin-bottom: 8px;"><strong>Layer 5:</strong> Heavy-duty nylon belt tying inside enclosed container trucks.</li>
      </ul>

      <h3 style="font-size: 1.6rem; font-weight: 700; color: #1e293b; margin-top: 30px; margin-bottom: 15px;">3. Mandatory Documentation &amp; Joint Inspection Report</h3>
      <p style="margin-bottom: 20px;">
        Before vehicle hand-over in Chatra, our supervisor conducts a joint physical inspection with the owner. Existing scratches, fuel levels, and odometer readings are documented on an official Vehicle Condition Report. Customers receive a copy along with the Lorry Receipt (LR) and transit insurance policy document.
      </p>

    </div>
  </section>

  <!-- FAQs Section -->
  <section class="faq-section" style="background: #f8fafc; padding: 60px 0; border-top: 1px solid #e2e8f0;" id="faqs">
    <div class="container" style="max-width: 1000px; margin: 0 auto; padding: 0 15px;">
      <div style="text-align: center; margin-bottom: 45px;">
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #0f172a; margin-bottom: 10px;">Frequently Asked Questions</h2>
        <p style="color: #64748b; font-size: 1rem;">Everything you need to know about vehicle transport from Chatra.</p>
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
      <h2 style="font-size: 2.2rem; font-weight: 800; margin-bottom: 15px; color: #ffffff;">Ship Your Vehicle Safely from Chatra Today!</h2>
      <p style="font-size: 1.1rem; color: #cbd5e1; margin-bottom: 30px; line-height: 1.7;">
        Call our vehicle logistics team for instant covered car carrier and bike shipping quotes across India!
      </p>
      <div style="display: flex; justify-content: center; gap: 15px; flex-wrap: wrap;">
        <a href="tel:+918409531615" style="background: #2563eb; color: #ffffff; padding: 14px 30px; border-radius: 8px; font-weight: 700; text-decoration: none; display: inline-flex; align-items: center; gap: 10px; font-size: 1.05rem;" id="cta-call-btn">
          <i class="fa-solid fa-phone"></i> Call +91 8409531615
        </a>
        <a href="https://api.whatsapp.com/send?phone=918409531615&text=Hello%20Shree%20Ashirwad%20Packers,%20I%20need%20a%20car/bike%20transport%20quote%20from%20Chatra." style="background: #22c55e; color: #ffffff; padding: 14px 30px; border-radius: 8px; font-weight: 700; text-decoration: none; display: inline-flex; align-items: center; gap: 10px; font-size: 1.05rem;" id="cta-wa-btn">
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
