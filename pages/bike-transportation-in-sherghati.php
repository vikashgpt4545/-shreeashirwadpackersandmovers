<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "Bike Transportation in Sherghati | Secure Relocation Bihar";
$page_desc = "Professional two-wheeler shifting in Sherghati, Bihar. Secure door-to-door transit with 4-layer packaging, enclosed container carriers & transparent rates.";
$page_keywords = "bike transportation in sherghati, bike shifting sherghati, two wheeler transport sherghati, bike packers and movers sherghati, insured bike courier sherghati, shree ashirwad bike transport";
$canonical_url = "https://shreeashirwadpackersandmovers.com/pages/bike-transportation-in-sherghati.php";

// Define 10-Item FAQ Array for Dynamic Schema and On-Page Render
$faq_list = [
    [
        "question" => "How is bike transportation handled in Sherghati, Bihar?",
        "answer" => "We provide complete doorstep bike transport in Sherghati. Our team picks up your vehicle, applies 4-layer bubble packaging, loads it securely into covered container carriers, and delivers it safely across India."
    ],
    [
        "question" => "What is the estimated cost of bike transport from Sherghati?",
        "answer" => "Bike transport charges from Sherghati range between ₹1,800 and ₹3,800 for regional routes (such as Gaya, Patna, Ranchi, or Varanasi) and ₹3,500 to ₹9,500 for interstate relocation."
    ],
    [
        "question" => "What documents are required to shift a bike from Sherghati?",
        "answer" => "You need to submit copies of your Registration Certificate (RC), valid Bike Insurance, photo ID proof (Aadhaar Card or PAN Card), and a signed consignment declaration."
    ],
    [
        "question" => "Do you provide transit insurance for bike transport in Sherghati?",
        "answer" => "Yes, we offer 100% full-value transit insurance to shield your bike against accidental damage, fire, or loss during highway transit."
    ],
    [
        "question" => "How long does bike delivery take from Sherghati?",
        "answer" => "Delivery to neighboring cities in Bihar and Jharkhand takes 1 to 3 days, while transport to distant metros like Delhi NCR, Mumbai, Bangalore, or Kolkata takes 3 to 6 days."
    ],
    [
        "question" => "Is fuel required in the bike during transit?",
        "answer" => "No, for safety compliance on enclosed transport trucks, fuel tanks must be kept nearly empty (under 1 to 2 liters) to prevent fire hazards."
    ],
    [
        "question" => "Can I transport heavy cruisers and Royal Enfield bikes from Sherghati?",
        "answer" => "Yes, we construct custom wooden crates with internal nylon tie-down straps specifically designed for Royal Enfield cruisers, touring bikes, and sports bikes."
    ],
    [
        "question" => "Which locations in Sherghati are covered for doorstep pickup?",
        "answer" => "We cover all key areas in Sherghati including GT Road area, Hamzapur, Sub-Division Complex, Main Market, Station Road, and surrounding rural sectors."
    ],
    [
        "question" => "How do you protect bikes against dust and road vibration in Sherghati?",
        "answer" => "We apply heavy bubble wrap, thick corrugated cardboard, weatherproof stretch wrap, and secure wheels with heavy nylon ratchet belts inside covered container trucks."
    ],
    [
        "question" => "How do I book a bike transport service in Sherghati?",
        "answer" => "You can book instantly by submitting the lead form on this page, calling our helpline at " . SITE_PHONE . ", or contacting us directly via WhatsApp."
    ]
];

require_once __DIR__ . '/../includes/header.php';
?>

<main class="site-main">

  <!-- Visual Breadcrumb Navigation Bar -->
  <div class="breadcrumb-wrapper" style="background: #0f172a; padding: 12px 0; border-bottom: 1px solid rgba(255,255,255,0.1);">
    <div class="container">
      <div class="breadcrumb-list" style="display: flex; align-items: center; gap: 8px; font-size: 0.9rem; color: #94a3b8;">
        <span class="breadcrumb-item"><a href="<?php echo SITE_URL; ?>" title="Home" style="color: #cbd5e1; text-decoration: none;">Home</a></span>
        <span class="breadcrumb-separator">/</span>
        <span class="breadcrumb-item"><a href="<?php echo SITE_URL; ?>/pages/bike-transportation.php" title="Bike Transportation" style="color: #cbd5e1; text-decoration: none;">Bike Transportation</a></span>
        <span class="breadcrumb-separator">/</span>
        <span class="breadcrumb-item active" style="color: #f59e0b; font-weight: 600;">Sherghati</span>
      </div>
    </div>
  </div>

  <!-- 1. Hero Section with Lead Form -->
  <section class="hero-section" style="background: linear-gradient(135deg, #0b132b 0%, #1c2541 100%); padding: 60px 0; color: #ffffff;">
    <div class="container">
      <div class="hero-grid" style="display: grid; grid-template-columns: 1.2fr 0.8fr; gap: 40px; align-items: center;">
        
        <!-- Hero Text Column -->
        <div class="hero-text">
          <span class="section-tag" style="background: rgba(245, 158, 11, 0.15); color: #f59e0b; border: 1px solid rgba(245, 158, 11, 0.4); padding: 6px 16px; border-radius: 20px; font-size: 0.85rem; font-weight: 700; text-transform: uppercase; display: inline-block; margin-bottom: 15px;">
            BIKE TRANSPORTATION SHERGHATI RELOCATION SPECIALISTS
          </span>
          <h1 style="font-size: 2.5rem; font-weight: 800; line-height: 1.2; margin-bottom: 20px; color: #ffffff;">
            Professional <span style="color: #f59e0b;">Bike Transportation in Sherghati</span>
          </h1>
          <p style="font-size: 1.1rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 25px;">
            Safe, insured, and scratch-free two-wheeler transportation in Sherghati, Bihar. We provide 4-layer protective bubble wrapping, custom wooden crating, covered container transport, and doorstep delivery across India.
          </p>

          <div style="display: flex; gap: 15px; flex-wrap: wrap; margin-bottom: 30px;">
            <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Now" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
              <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call Now: <?php echo SITE_PHONE; ?>
            </a>
            <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20a%20bike%20transport%20quote%20for%20Sherghati." title="Chat on WhatsApp" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
              <i class="fab fa-whatsapp" style="margin-right: 8px;"></i> Chat on WhatsApp
            </a>
          </div>

          <div style="display: flex; gap: 20px; font-size: 0.9rem; color: #94a3b8; flex-wrap: wrap;">
            <span><strong style="color: #f59e0b;">100% Insured</strong> Transit</span>
            <span><strong style="color: #f59e0b;">4-Layer</strong> Cushion Packaging</span>
            <span><strong style="color: #f59e0b;">Door-to-Door</strong> Pickup & Delivery</span>
          </div>
        </div>

        <!-- Hero Lead Form Column -->
        <div class="hero-form-card" style="background: rgba(255, 255, 255, 0.05); backdrop-filter: blur(10px); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 16px; padding: 30px; box-shadow: 0 15px 35px rgba(0,0,0,0.4);">
          <h2 style="font-size: 1.4rem; color: #ffffff; margin-bottom: 8px; font-weight: 700; text-align: center;">Get Sherghati Shifting Quote</h2>
          <p style="font-size: 0.85rem; color: #94a3b8; text-align: center; margin-bottom: 20px;">Receive transparent cost estimation on WhatsApp in 2 minutes</p>

          <form action="#" method="POST" onsubmit="sendHeroWhatsAppLead(event, this);">
            <div style="margin-bottom: 14px;">
              <input type="text" name="name" class="form-control" placeholder="Your Full Name" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="margin-bottom: 14px;">
              <input type="tel" name="phone" class="form-control" placeholder="10-Digit Phone Number" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 10px; margin-bottom: 14px;">
              <input type="text" name="move_from" class="form-control" value="Sherghati" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
              <input type="text" name="move_to" class="form-control" placeholder="Moving To (City/Area)" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="margin-bottom: 14px;">
              <input type="text" name="bike_model" class="form-control" placeholder="Bike Model (e.g. Royal Enfield, Pulsar)" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <button type="submit" style="width: 100%; padding: 14px; background: linear-gradient(135deg, #d32f2f 0%, #f59e0b 100%); color: #ffffff; border: none; border-radius: 50px; font-weight: 700; font-size: 1rem; cursor: pointer; transition: all 0.3s ease;">
              Get Instant Quote Now &rarr;
            </button>
          </form>
        </div>

      </div>
    </div>
  </section>

  <!-- 2. Trusted Relocation Track Record & Key Performance Indicators -->
  <section style="background: #0f172a; padding: 40px 0; border-bottom: 1px solid rgba(255,255,255,0.05);">
    <div class="container">
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 20px; text-align: center;">
        <div style="background: rgba(255,255,255,0.03); padding: 25px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.08);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; margin-bottom: 5px;">4,800+</div>
          <div style="font-size: 0.95rem; color: #cbd5e1;">Bikes Safely Transported</div>
        </div>
        <div style="background: rgba(255,255,255,0.03); padding: 25px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.08);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #10b981; margin-bottom: 5px;">99.6%</div>
          <div style="font-size: 0.95rem; color: #cbd5e1;">Zero-Damage Delivery Record</div>
        </div>
        <div style="background: rgba(255,255,255,0.03); padding: 25px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.08);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #3b82f6; margin-bottom: 5px;">100%</div>
          <div style="font-size: 0.95rem; color: #cbd5e1;">Transit Insurance Coverage</div>
        </div>
        <div style="background: rgba(255,255,255,0.03); padding: 25px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.08);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #e11d48; margin-bottom: 5px;">4.9 / 5</div>
          <div style="font-size: 0.95rem; color: #cbd5e1;">Verified Customer Rating</div>
        </div>
      </div>
    </div>
  </section>

  <!-- 3. Comprehensive Bike Shifting & Two-Wheeler Transport Solutions in Sherghati -->
  <section style="background: #0b132b; padding: 60px 0; color: #ffffff;">
    <div class="container">
      <div style="text-align: center; max-width: 750px; margin: 0 auto 45px;">
        <h2 style="font-size: 2rem; font-weight: 800; color: #ffffff; margin-bottom: 15px;">
          Premium Two-Wheeler Shifting Solutions in Sherghati
        </h2>
        <p style="color: #94a3b8; font-size: 1rem; line-height: 1.7;">
          Whether moving a daily commuter scooty, high-end sports bike, or Royal Enfield cruiser from Sherghati, we offer specialized vehicle transport engineered for maximum safety.
        </p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px;">
        <div style="background: rgba(255,255,255,0.04); padding: 30px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.08);">
          <div style="width: 50px; height: 50px; background: rgba(245, 158, 11, 0.15); border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.5rem; color: #f59e0b; margin-bottom: 20px;">
            <i class="fas fa-box-open"></i>
          </div>
          <h3 style="font-size: 1.25rem; font-weight: 700; color: #ffffff; margin-bottom: 12px;">4-Layer Protective Cushioning</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.6;">
            Every vehicle is wrapped in bubble film, corrugated sheets, stretch wrap, and edge guards to shield against paint scratches, dust, and transit vibration.
          </p>
        </div>

        <div style="background: rgba(255,255,255,0.04); padding: 30px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.08);">
          <div style="width: 50px; height: 50px; background: rgba(16, 185, 129, 0.15); border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.5rem; color: #10b981; margin-bottom: 20px;">
            <i class="fas fa-truck-monster"></i>
          </div>
          <h3 style="font-size: 1.25rem; font-weight: 700; color: #ffffff; margin-bottom: 12px;">Enclosed Vehicle Carriers</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.6;">
            We utilize enclosed auto-transporters equipped with hydraulic tail-lifts and wheel chocks to prevent vehicle movement during highway transit.
          </p>
        </div>

        <div style="background: rgba(255,255,255,0.04); padding: 30px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.08);">
          <div style="width: 50px; height: 50px; background: rgba(59, 130, 246, 0.15); border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.5rem; color: #3b82f6; margin-bottom: 20px;">
            <i class="fas fa-shield-alt"></i>
          </div>
          <h3 style="font-size: 1.25rem; font-weight: 700; color: #ffffff; margin-bottom: 12px;">Full Value Transit Insurance</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.6;">
            Comprehensive insurance policies cover unexpected transit mishaps, offering hassle-free claim resolution for total customer protection.
          </p>
        </div>

        <div style="background: rgba(255,255,255,0.04); padding: 30px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.08);">
          <div style="width: 50px; height: 50px; background: rgba(225, 29, 72, 0.15); border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.5rem; color: #e11d48; margin-bottom: 20px;">
            <i class="fas fa-map-marked-alt"></i>
          </div>
          <h3 style="font-size: 1.25rem; font-weight: 700; color: #ffffff; margin-bottom: 12px;">Real-Time GPS Tracking</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.6;">
            Stay updated with live location tracking and continuous SMS/WhatsApp progress notifications from pickup to doorstep delivery.
          </p>
        </div>

        <div style="background: rgba(255,255,255,0.04); padding: 30px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.08);">
          <div style="width: 50px; height: 50px; background: rgba(168, 85, 247, 0.15); border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.5rem; color: #a855f7; margin-bottom: 20px;">
            <i class="fas fa-hammer"></i>
          </div>
          <h3 style="font-size: 1.25rem; font-weight: 700; color: #ffffff; margin-bottom: 12px;">Customized Wooden Crating</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.6;">
            For super-bikes and luxury cruisers, we construct customized wooden crates with internal tie-downs for maximum structural defense.
          </p>
        </div>

        <div style="background: rgba(255,255,255,0.04); padding: 30px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.08);">
          <div style="width: 50px; height: 50px; background: rgba(245, 158, 11, 0.15); border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.5rem; color: #f59e0b; margin-bottom: 20px;">
            <i class="fas fa-home"></i>
          </div>
          <h3 style="font-size: 1.25rem; font-weight: 700; color: #ffffff; margin-bottom: 12px;">Doorstep Pickup & Delivery</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.6;">
            Direct door-to-door convenience across all local sectors in Sherghati and destination cities across India.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- 4. Transparent Bike Transportation Rate Card for Sherghati -->
  <section style="background: #0f172a; padding: 60px 0; color: #ffffff;">
    <div class="container">
      <div style="text-align: center; max-width: 750px; margin: 0 auto 40px;">
        <h2 style="font-size: 2rem; font-weight: 800; color: #ffffff; margin-bottom: 12px;">
          Bike Transportation Charges from Sherghati
        </h2>
        <p style="color: #94a3b8; font-size: 1rem;">
          Transparent rate estimates based on vehicle class and transit distance. No hidden charges or unexpected costs.
        </p>
      </div>

      <div style="overflow-x: auto; background: rgba(255,255,255,0.02); border-radius: 12px; border: 1px solid rgba(255,255,255,0.08);">
        <table style="width: 100%; border-collapse: collapse; text-align: left; font-size: 0.95rem;">
          <thead>
            <tr style="background: rgba(245, 158, 11, 0.15); color: #f59e0b; border-bottom: 1px solid rgba(255,255,255,0.1);">
              <th style="padding: 16px 20px;">Destination Region</th>
              <th style="padding: 16px 20px;">Scooty / Standard Bike</th>
              <th style="padding: 16px 20px;">Sports / Royal Enfield</th>
              <th style="padding: 16px 20px;">Premium Cruiser / Superbike</th>
              <th style="padding: 16px 20px;">Estimated Delivery</th>
            </tr>
          </thead>
          <tbody style="color: #cbd5e1;">
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.05);">
              <td style="padding: 16px 20px; font-weight: 600; color: #fff;">Within Bihar & Jharkhand (e.g. Gaya, Patna, Ranchi)</td>
              <td style="padding: 16px 20px;">₹1,800 – ₹3,000</td>
              <td style="padding: 16px 20px;">₹2,800 – ₹3,800</td>
              <td style="padding: 16px 20px;">₹3,800 – ₹5,200</td>
              <td style="padding: 16px 20px;">1 – 2 Days</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.05);">
              <td style="padding: 16px 20px; font-weight: 600; color: #fff;">Neighboring States (e.g. UP, WB, Odisha)</td>
              <td style="padding: 16px 20px;">₹2,500 – ₹3,800</td>
              <td style="padding: 16px 20px;">₹3,500 – ₹5,000</td>
              <td style="padding: 16px 20px;">₹5,000 – ₹6,800</td>
              <td style="padding: 16px 20px;">2 – 3 Days</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.05);">
              <td style="padding: 16px 20px; font-weight: 600; color: #fff;">North & Central (e.g. Delhi NCR, Jaipur, MP)</td>
              <td style="padding: 16px 20px;">₹3,200 – ₹4,800</td>
              <td style="padding: 16px 20px;">₹4,200 – ₹6,500</td>
              <td style="padding: 16px 20px;">₹6,500 – ₹8,800</td>
              <td style="padding: 16px 20px;">3 – 5 Days</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.05);">
              <td style="padding: 16px 20px; font-weight: 600; color: #fff;">West India (e.g. Mumbai, Pune, Gujarat)</td>
              <td style="padding: 16px 20px;">₹3,600 – ₹5,200</td>
              <td style="padding: 16px 20px;">₹4,600 – ₹6,800</td>
              <td style="padding: 16px 20px;">₹6,800 – ₹9,200</td>
              <td style="padding: 16px 20px;">4 – 5 Days</td>
            </tr>
            <tr>
              <td style="padding: 16px 20px; font-weight: 600; color: #fff;">South India (e.g. Bangalore, Hyderabad, Chennai)</td>
              <td style="padding: 16px 20px;">₹3,800 – ₹5,800</td>
              <td style="padding: 16px 20px;">₹4,800 – ₹7,500</td>
              <td style="padding: 16px 20px;">₹7,500 – ₹10,500</td>
              <td style="padding: 16px 20px;">4 – 6 Days</td>
            </tr>
          </tbody>
        </table>
      </div>
      <p style="font-size: 0.85rem; color: #94a3b8; margin-top: 15px; text-align: center;">
        *Note: Rates vary based on specific destination distance, vehicle type, and insurance declaration.
      </p>
    </div>
  </section>

  <!-- 5. Our Step-by-Step 4-Layer Safe Bike Packaging Protocol -->
  <section style="background: #0b132b; padding: 60px 0; color: #ffffff;">
    <div class="container">
      <div style="text-align: center; max-width: 750px; margin: 0 auto 45px;">
        <h2 style="font-size: 2rem; font-weight: 800; color: #ffffff; margin-bottom: 15px;">
          Our 4-Layer Protective Packaging Protocol
        </h2>
        <p style="color: #94a3b8; font-size: 1rem;">
          Engineered protection guarding your bike against scratch marks, vibration, and weather elements.
        </p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(230px, 1fr)); gap: 20px;">
        <div style="background: rgba(255,255,255,0.03); padding: 25px; border-radius: 12px; border-left: 4px solid #f59e0b;">
          <div style="font-size: 1.5rem; font-weight: 800; color: #f59e0b; margin-bottom: 10px;">Layer 1</div>
          <h3 style="font-size: 1.1rem; font-weight: 700; color: #fff; margin-bottom: 8px;">Heavy-Duty Bubble Wrap</h3>
          <p style="color: #cbd5e1; font-size: 0.9rem; line-height: 1.5;">
            Primary shock-absorbing cushion applied directly over painted bodywork, meters, lights, and mirrors.
          </p>
        </div>

        <div style="background: rgba(255,255,255,0.03); padding: 25px; border-radius: 12px; border-left: 4px solid #10b981;">
          <div style="font-size: 1.5rem; font-weight: 800; color: #10b981; margin-bottom: 10px;">Layer 2</div>
          <h3 style="font-size: 1.1rem; font-weight: 700; color: #fff; margin-bottom: 8px;">Corrugated Cardboard</h3>
          <p style="color: #cbd5e1; font-size: 0.9rem; line-height: 1.5;">
            Thick cardboard sheets wrapped around handlebars, fuel tank, side cowls, and exhaust pipe.
          </p>
        </div>

        <div style="background: rgba(255,255,255,0.03); padding: 25px; border-radius: 12px; border-left: 4px solid #3b82f6;">
          <div style="font-size: 1.5rem; font-weight: 800; color: #3b82f6; margin-bottom: 10px;">Layer 3</div>
          <h3 style="font-size: 1.1rem; font-weight: 700; color: #fff; margin-bottom: 8px;">High-Tension Stretch Film</h3>
          <p style="color: #cbd5e1; font-size: 0.9rem; line-height: 1.5;">
            Weatherproof plastic film sealed tightly around the bike to prevent rain penetration and moisture ingress.
          </p>
        </div>

        <div style="background: rgba(255,255,255,0.03); padding: 25px; border-radius: 12px; border-left: 4px solid #e11d48;">
          <div style="font-size: 1.5rem; font-weight: 800; color: #e11d48; margin-bottom: 10px;">Layer 4</div>
          <h3 style="font-size: 1.1rem; font-weight: 700; color: #fff; margin-bottom: 8px;">Nylon Belt Strapping</h3>
          <p style="color: #cbd5e1; font-size: 0.9rem; line-height: 1.5;">
            Heavy-duty nylon ratchet straps anchoring wheels and frame securely inside the enclosed carrier.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- 6. Step-by-Step Two-Wheeler Transport Workflow from Sherghati -->
  <section style="background: #0f172a; padding: 60px 0; color: #ffffff;">
    <div class="container">
      <div style="text-align: center; max-width: 750px; margin: 0 auto 45px;">
        <h2 style="font-size: 2rem; font-weight: 800; color: #ffffff; margin-bottom: 15px;">
          Seamless 4-Step Bike Relocation Process
        </h2>
        <p style="color: #94a3b8; font-size: 1rem;">
          Simple, transparent, and efficient vehicle transport execution from Sherghati.
        </p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 25px; position: relative;">
        <div style="background: rgba(255,255,255,0.03); padding: 30px 20px; border-radius: 12px; text-align: center; border: 1px solid rgba(255,255,255,0.08);">
          <div style="width: 50px; height: 50px; background: #f59e0b; color: #000; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.3rem; font-weight: 800; margin: 0 auto 15px;">1</div>
          <h3 style="font-size: 1.1rem; font-weight: 700; color: #fff; margin-bottom: 8px;">Submit Quote</h3>
          <p style="color: #cbd5e1; font-size: 0.88rem; line-height: 1.5;">Fill out our online lead form or call us to receive an instant transparent quote.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); padding: 30px 20px; border-radius: 12px; text-align: center; border: 1px solid rgba(255,255,255,0.08);">
          <div style="width: 50px; height: 50px; background: #10b981; color: #000; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.3rem; font-weight: 800; margin: 0 auto 15px;">2</div>
          <h3 style="font-size: 1.1rem; font-weight: 700; color: #fff; margin-bottom: 8px;">Doorstep Inspection</h3>
          <p style="color: #cbd5e1; font-size: 0.88rem; line-height: 1.5;">Our crew arrives in Sherghati to inspect vehicle condition, document, and pack.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); padding: 30px 20px; border-radius: 12px; text-align: center; border: 1px solid rgba(255,255,255,0.08);">
          <div style="width: 50px; height: 50px; background: #3b82f6; color: #fff; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.3rem; font-weight: 800; margin: 0 auto 15px;">3</div>
          <h3 style="font-size: 1.1rem; font-weight: 700; color: #fff; margin-bottom: 8px;">Enclosed Transit</h3>
          <p style="color: #cbd5e1; font-size: 0.88rem; line-height: 1.5;">Your bike travels safely inside covered containers with real-time GPS tracking updates.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); padding: 30px 20px; border-radius: 12px; text-align: center; border: 1px solid rgba(255,255,255,0.08);">
          <div style="width: 50px; height: 50px; background: #e11d48; color: #fff; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.3rem; font-weight: 800; margin: 0 auto 15px;">4</div>
          <h3 style="font-size: 1.1rem; font-weight: 700; color: #fff; margin-bottom: 8px;">Safe Delivery</h3>
          <p style="color: #cbd5e1; font-size: 0.88rem; line-height: 1.5;">We unpack your bike at your target address and verify condition before final signoff.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- 7. Key Documents Required for Safe Bike Relocation -->
  <section style="background: #0b132b; padding: 50px 0; color: #ffffff;">
    <div class="container">
      <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(245, 158, 11, 0.3); border-radius: 16px; padding: 35px;">
        <h3 style="font-size: 1.4rem; font-weight: 700; color: #f59e0b; margin-bottom: 20px; text-align: center;">
          <i class="fas fa-file-alt" style="margin-right: 10px;"></i> Essential Documentation for Bike Shifting
        </h3>
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 20px; text-align: center;">
          <div style="background: rgba(0,0,0,0.2); padding: 15px; border-radius: 8px;">
            <strong style="color: #fff; display: block; margin-bottom: 5px;">Registration Certificate</strong>
            <span style="font-size: 0.85rem; color: #cbd5e1;">Photocopy of Vehicle RC Book/Card</span>
          </div>
          <div style="background: rgba(0,0,0,0.2); padding: 15px; border-radius: 8px;">
            <strong style="color: #fff; display: block; margin-bottom: 5px;">Valid Insurance Policy</strong>
            <span style="font-size: 0.85rem; color: #cbd5e1;">Copy of Active Insurance Cover</span>
          </div>
          <div style="background: rgba(0,0,0,0.2); padding: 15px; border-radius: 8px;">
            <strong style="color: #fff; display: block; margin-bottom: 5px;">Owner Photo ID Proof</strong>
            <span style="font-size: 0.85rem; color: #cbd5e1;">Aadhaar Card or PAN Card</span>
          </div>
          <div style="background: rgba(0,0,0,0.2); padding: 15px; border-radius: 8px;">
            <strong style="color: #fff; display: block; margin-bottom: 5px;">Delivery Authorization</strong>
            <span style="font-size: 0.85rem; color: #cbd5e1;">Signed Consignment Note</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 8. Why Choose Shree Ashirwad Packers and Movers in Sherghati -->
  <section style="background: #0f172a; padding: 60px 0; color: #ffffff;">
    <div class="container">
      <div style="text-align: center; max-width: 750px; margin: 0 auto 40px;">
        <h2 style="font-size: 2rem; font-weight: 800; color: #ffffff; margin-bottom: 12px;">
          Why Choose Shree Ashirwad Packers in Sherghati
        </h2>
        <p style="color: #94a3b8; font-size: 1rem;">
          Your reliable vehicle logistics partner for two-wheeler transport across India.
        </p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 25px;">
        <div style="background: rgba(255,255,255,0.03); padding: 25px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.06);">
          <i class="fas fa-award" style="font-size: 2rem; color: #f59e0b; margin-bottom: 15px; display: block;"></i>
          <h3 style="font-size: 1.15rem; font-weight: 700; color: #fff; margin-bottom: 8px;">Zero Damage Guarantee</h3>
          <p style="color: #cbd5e1; font-size: 0.9rem; line-height: 1.6;">Our rigorous multi-layer packing protocol keeps your bike immune to scratches or denting.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); padding: 25px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.06);">
          <i class="fas fa-user-shield" style="font-size: 2rem; color: #10b981; margin-bottom: 15px; display: block;"></i>
          <h3 style="font-size: 1.15rem; font-weight: 700; color: #fff; margin-bottom: 8px;">Experienced Vehicle Crew</h3>
          <p style="color: #cbd5e1; font-size: 0.9rem; line-height: 1.6;">Trained handlers adept at securing all types of two-wheelers, from scooties to heavy cruisers.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); padding: 25px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.06);">
          <i class="fas fa-calculator" style="font-size: 2rem; color: #3b82f6; margin-bottom: 15px; display: block;"></i>
          <h3 style="font-size: 1.15rem; font-weight: 700; color: #fff; margin-bottom: 8px;">Fixed Transparent Quotation</h3>
          <p style="color: #cbd5e1; font-size: 0.9rem; line-height: 1.6;">Clear pricing structures up front with zero surprise add-on fees upon delivery.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); padding: 25px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.06);">
          <i class="fas fa-headset" style="font-size: 2rem; color: #e11d48; margin-bottom: 15px; display: block;"></i>
          <h3 style="font-size: 1.15rem; font-weight: 700; color: #fff; margin-bottom: 8px;">Dedicated Support Manager</h3>
          <p style="color: #cbd5e1; font-size: 0.9rem; line-height: 1.6;">Single point of contact answering queries and sending live transit updates until delivery.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- 9. Frequently Asked Questions (FAQ) -->
  <section style="background: #0b132b; padding: 60px 0; color: #ffffff;">
    <div class="container">
      <div style="text-align: center; max-width: 750px; margin: 0 auto 45px;">
        <h2 style="font-size: 2rem; font-weight: 800; color: #ffffff; margin-bottom: 12px;">
          Frequently Asked Questions — Bike Transport Sherghati
        </h2>
        <p style="color: #94a3b8; font-size: 1rem;">
          Get answers to common queries regarding two-wheeler transport in Sherghati, Bihar.
        </p>
      </div>

      <div style="max-width: 900px; margin: 0 auto; display: flex; flex-direction: column; gap: 15px;">
        <?php foreach ($faq_list as $index => $faq): ?>
          <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 10px; padding: 20px 25px;">
            <h3 style="font-size: 1.1rem; font-weight: 700; color: #f59e0b; margin-bottom: 8px;">
              <?php echo ($index + 1) . '. ' . htmlspecialchars($faq['question']); ?>
            </h3>
            <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.6; margin: 0;">
              <?php echo htmlspecialchars($faq['answer']); ?>
            </p>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- 10. Popular Bike Transportation Routes from Sherghati -->
  <section style="background: #0f172a; padding: 60px 0; color: #ffffff;">
    <div class="container">
      <div style="text-align: center; max-width: 750px; margin: 0 auto 40px;">
        <h2 style="font-size: 1.8rem; font-weight: 800; color: #ffffff; margin-bottom: 12px;">
          Popular Bike Transportation Routes from Sherghati
        </h2>
        <p style="color: #94a3b8; font-size: 0.95rem;">
          We connect Sherghati with major commercial hubs and metropolitan cities nationwide.
        </p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 15px; text-align: center;">
        <div style="background: rgba(255,255,255,0.03); padding: 15px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.05); color: #cbd5e1; font-weight: 600;">
          Sherghati to Gaya
        </div>
        <div style="background: rgba(255,255,255,0.03); padding: 15px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.05); color: #cbd5e1; font-weight: 600;">
          Sherghati to Patna
        </div>
        <div style="background: rgba(255,255,255,0.03); padding: 15px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.05); color: #cbd5e1; font-weight: 600;">
          Sherghati to Ranchi
        </div>
        <div style="background: rgba(255,255,255,0.03); padding: 15px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.05); color: #cbd5e1; font-weight: 600;">
          Sherghati to Kolkata
        </div>
        <div style="background: rgba(255,255,255,0.03); padding: 15px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.05); color: #cbd5e1; font-weight: 600;">
          Sherghati to Varanasi
        </div>
        <div style="background: rgba(255,255,255,0.03); padding: 15px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.05); color: #cbd5e1; font-weight: 600;">
          Sherghati to Delhi NCR
        </div>
        <div style="background: rgba(255,255,255,0.03); padding: 15px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.05); color: #cbd5e1; font-weight: 600;">
          Sherghati to Mumbai
        </div>
        <div style="background: rgba(255,255,255,0.03); padding: 15px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.05); color: #cbd5e1; font-weight: 600;">
          Sherghati to Bangalore
        </div>
        <div style="background: rgba(255,255,255,0.03); padding: 15px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.05); color: #cbd5e1; font-weight: 600;">
          Sherghati to Dhanbad
        </div>
        <div style="background: rgba(255,255,255,0.03); padding: 15px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.05); color: #cbd5e1; font-weight: 600;">
          Sherghati to Jamshedpur
        </div>
      </div>
    </div>
  </section>

  <!-- 11. Bottom Conversion CTA Bar -->
  <section style="background: linear-gradient(135deg, #1e293b 0%, #0f172a 100%); padding: 50px 0; text-align: center; border-top: 1px solid rgba(245, 158, 11, 0.3);">
    <div class="container">
      <h2 style="font-size: 2rem; font-weight: 800; color: #ffffff; margin-bottom: 15px;">
        Ready to Transport Your Bike from Sherghati?
      </h2>
      <p style="color: #cbd5e1; font-size: 1.05rem; max-width: 650px; margin: 0 auto 30px; line-height: 1.7;">
        Get in touch with Shree Ashirwad Packers and Movers today for 100% safe, insured, and scratch-free two-wheeler transport with instant quotes.
      </p>

      <div style="display: flex; justify-content: center; gap: 20px; flex-wrap: wrap;">
        <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Now" style="padding: 15px 35px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1.05rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
          <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call Helpline: <?php echo SITE_PHONE; ?>
        </a>
        <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20a%20bike%20transport%20quote%20for%20Sherghati." title="WhatsApp Chat" target="_blank" style="padding: 15px 35px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1.05rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
          <i class="fab fa-whatsapp" style="margin-right: 8px;"></i> WhatsApp Quote
        </a>
      </div>
    </div>
  </section>

</main>

<!-- Dynamic FAQPage JSON-LD Schema -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    <?php 
    $schema_items = [];
    foreach ($faq_list as $faq) {
        $schema_items[] = json_encode([
            "@type" => "Question",
            "name" => $faq['question'],
            "acceptedAnswer" => [
                "@type" => "Answer",
                "text" => $faq['answer']
            ]
        ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
    }
    echo implode(",\n    ", $schema_items);
    ?>

  ]
}
</script>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
