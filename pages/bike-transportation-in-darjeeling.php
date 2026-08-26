<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "Bike Transportation in Darjeeling | Safe Two-Wheeler Shifting WB-77";
$page_desc = "Professional bike transportation in Darjeeling (WB-77 RTO), West Bengal. Insured doorstep motorcycle relocation from hill town & Siliguri hub via Hill Cart Road & NH-110.";
$page_keywords = "bike transportation in darjeeling, best bike transportation in darjeeling, affordable bike shifting darjeeling, bike packers and movers darjeeling, doorstep bike transport darjeeling";
$canonical_url = "https://shreeashirwadpackersandmovers.com/pages/bike-transportation-in-darjeeling.php";

$page_city = "Darjeeling, West Bengal";

$faq_list = [
    [
        'q' => 'How is bike transportation safely managed from mountain terrain in Darjeeling (WB-77)?',
        'a' => 'Two-wheelers undergo hill-descent transit check, fuel draining under 1 liter, 7-layer bubble wrapping, handlebar foam cushioning, and heavy belt anchorage inside specialized container carriers operating via Hill Cart Road and Siliguri hub.'
    ],
    [
        'q' => 'What are the motorcycle transport charges from Darjeeling to Siliguri, Kolkata, or Delhi?',
        'a' => 'Hill-to-plain transport charges to Siliguri range from ₹2,200 to ₹3,500, while long-distance transport to Kolkata, Delhi, or Bengaluru ranges from ₹4,800 to ₹8,500.'
    ],
    [
        'q' => 'Which major highway routes connect Darjeeling for bike transit?',
        'a' => 'Key corridors include NH-110 (Hill Cart Road), Rohini Road bypass, Matigara-Kurseong route, and NH-27 Siliguri logistics corridor.'
    ],
    [
        'q' => 'Do you pick up bikes from all Darjeeling hill town localities?',
        'a' => 'Yes, doorstep pickup is available across Mall Road, Chowrasta, Ghoom, Kurseong, Jorebunglow, Lebong, Takdah, and Sonada.'
    ],
    [
        'q' => 'Is transit insurance included for motorcycle transport from Darjeeling?',
        'a' => 'Yes, 100% full-value transit insurance policies (1.5% to 3% of declared motorcycle valuation) are provided covering hill transit risks.'
    ],
    [
        'q' => 'How many days does bike delivery take from Darjeeling to Indian metros?',
        'a' => 'Transit to Siliguri or Kolkata takes 24–48 hours, while interstate transit to Delhi, Mumbai, or Bengaluru takes 4–6 days.'
    ],
    [
        'q' => 'What documents are required for shipping a bike from Darjeeling?',
        'a' => 'Required documents comprise vehicle RC copy, active insurance policy copy, owner ID proof (Aadhaar/PAN), and signed vehicle inspection sheet.'
    ],
    [
        'q' => 'Why must fuel be drained before hill bike dispatch from Darjeeling?',
        'a' => 'Draining petrol under 1 liter prevents fuel leakage, vapor lock, and fire hazards during steep incline truck transit.'
    ],
    [
        'q' => 'Do you provide IBA approved GST bills for official claims?',
        'a' => 'Yes, official IBA-compliant GST consignment bills, LR copies, and payment receipts are supplied for government and corporate relocation reimbursements.'
    ],
    [
        'q' => 'How do I book Darjeeling bike shifting services?',
        'a' => 'Call +91 8409531615 or submit your motorcycle details on WhatsApp for an immediate transparent price quote.'
    ]
];

require_once __DIR__ . '/../includes/header.php';
?>

<main class="site-main">

  <!-- 1. Visual Breadcrumb Navigation Bar -->
  <div class="breadcrumb-wrapper" style="background: #070d1e; padding: 12px 0; border-bottom: 1px solid rgba(255,255,255,0.08);">
    <div class="container">
      <div class="breadcrumb-list" style="display: flex; gap: 8px; font-size: 0.88rem; color: #94a3b8;">
        <span class="breadcrumb-item"><a href="<?php echo SITE_URL; ?>" title="Home" style="color: #cbd5e1; text-decoration: none;">Home</a></span>
        <span class="breadcrumb-separator">/</span>
        <span class="breadcrumb-item"><a href="<?php echo SITE_URL; ?>/pages/bike-transportation.php" title="Bike Transportation" style="color: #cbd5e1; text-decoration: none;">Bike Transportation</a></span>
        <span class="breadcrumb-separator">/</span>
        <span class="breadcrumb-item active" style="color: #f59e0b; font-weight: 600;"><?php echo htmlspecialchars($page_title); ?></span>
      </div>
    </div>
  </div>

  <!-- 2. Hero Section & Instant WhatsApp Lead Form -->
  <section class="hero-section" style="background: linear-gradient(135deg, #0b132b 0%, #1c2541 100%); padding: 60px 0; color: #ffffff;">
    <div class="container">
      <div class="hero-grid" style="display: grid; grid-template-columns: 1.2fr 0.8fr; gap: 40px; align-items: center;">
        
        <!-- Hero Text Column -->
        <div class="hero-text">
          <span class="section-tag" style="background: rgba(245, 158, 11, 0.15); color: #f59e0b; border: 1px solid rgba(245, 158, 11, 0.4); padding: 6px 16px; border-radius: 20px; font-size: 0.85rem; font-weight: 700; text-transform: uppercase; display: inline-block; margin-bottom: 15px;">
            BIKE TRANSPORTATION DARJEELING (WB-77 HILLS)
          </span>
          <h1 style="font-size: 2.7rem; font-weight: 800; line-height: 1.2; margin-bottom: 20px; color: #ffffff;">
            Professional <span style="color: #f59e0b;">Bike Transportation in Darjeeling</span>
          </h1>
          <p style="font-size: 1.12rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 25px;">
            Shree Ashirwad Packers and Movers delivers safe, insured, and doorstep motorcycle transport across Darjeeling (WB-77) and Siliguri gateway via Hill Cart Road (NH-110). Equipped with 7-layer bubble wrapping, enclosed container trucks, and 100% IBA-approved GST bills.
          </p>

          <div style="display: flex; gap: 15px; flex-wrap: wrap; margin-bottom: 30px;">
            <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Now" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
              <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call Now: <?php echo SITE_PHONE; ?>
            </a>
            <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20a%20bike%20transport%20quote%20for%20Darjeeling." title="Chat on WhatsApp" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
              <i class="fab fa-whatsapp" style="margin-right: 8px;"></i> Chat on WhatsApp
            </a>
          </div>

          <div style="display: flex; gap: 20px; font-size: 0.9rem; color: #94a3b8;">
            <span><strong style="color: #f59e0b;">100% Insured</strong> Shifting</span>
            <span><strong style="color: #f59e0b;">7-Layer</strong> Packaging</span>
            <span><strong style="color: #f59e0b;">Doorstep</strong> Delivery</span>
          </div>
        </div>

        <!-- Hero Lead Form Column -->
        <div class="hero-form-card" style="background: rgba(255, 255, 255, 0.05); backdrop-filter: blur(10px); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 16px; padding: 30px; box-shadow: 0 15px 35px rgba(0,0,0,0.4);">
          <h2 style="font-size: 1.4rem; color: #ffffff; margin-bottom: 8px; font-weight: 700; text-align: center;">Get Darjeeling Bike Quote</h2>
          <p style="font-size: 0.85rem; color: #94a3b8; text-align: center; margin-bottom: 20px;">Receive transparent cost estimation on WhatsApp</p>

          <form action="#" method="POST" onsubmit="sendHeroWhatsAppLead(event, this);">
            <div style="margin-bottom: 14px;">
              <input type="text" name="name" class="form-control" placeholder="Your Full Name" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="margin-bottom: 14px;">
              <input type="tel" name="phone" class="form-control" placeholder="10-Digit Phone Number" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 10px; margin-bottom: 14px;">
              <input type="text" name="move_from" class="form-control" value="Darjeeling" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
              <input type="text" name="move_to" class="form-control" placeholder="Destination City" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <button type="submit" style="width: 100%; padding: 14px; background: linear-gradient(135deg, #d32f2f 0%, #f59e0b 100%); color: #ffffff; border: none; border-radius: 50px; font-weight: 700; font-size: 1rem; cursor: pointer;">
              Get Instant Bike Estimate &rarr;
            </button>
          </form>
        </div>

      </div>
    </div>
  </section>

  <!-- 3. Key Stats Counter Bar -->
  <section style="background: #070d1e; padding: 30px 0; border-bottom: 1px solid rgba(255,255,255,0.08);">
    <div class="container">
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 20px; text-align: center;">
        <div style="background: #101c40; padding: 20px; border-radius: 12px; border: 1px solid rgba(245,158,11,0.2);">
          <div style="font-size: 2rem; font-weight: 800; color: #f59e0b;">9,800+</div>
          <div style="font-size: 0.88rem; color: #cbd5e1; margin-top: 5px;">Himalayan Relocations</div>
        </div>
        <div style="background: #101c40; padding: 20px; border-radius: 12px; border: 1px solid rgba(245,158,11,0.2);">
          <div style="font-size: 2rem; font-weight: 800; color: #f59e0b;">WB-77 RTO</div>
          <div style="font-size: 0.88rem; color: #cbd5e1; margin-top: 5px;">Darjeeling Hill Logistics</div>
        </div>
        <div style="background: #101c40; padding: 20px; border-radius: 12px; border: 1px solid rgba(245,158,11,0.2);">
          <div style="font-size: 2rem; font-weight: 800; color: #f59e0b;">100% Insured</div>
          <div style="font-size: 0.88rem; color: #cbd5e1; margin-top: 5px;">Full Value Transit Policy</div>
        </div>
        <div style="background: #101c40; padding: 20px; border-radius: 12px; border: 1px solid rgba(245,158,11,0.2);">
          <div style="font-size: 2rem; font-weight: 800; color: #f59e0b;">IBA Approved</div>
          <div style="font-size: 0.88rem; color: #cbd5e1; margin-top: 5px;">GST Invoices & Claims</div>
        </div>
      </div>
    </div>
  </section>

  <!-- 4. 6-Card Feature Grid -->
  <section style="padding: 60px 0; background: #0b132b; color: #ffffff;">
    <div class="container">
      <div style="text-align: center; max-width: 700px; margin: 0 auto 40px auto;">
        <span style="color: #f59e0b; font-weight: 700; text-transform: uppercase; font-size: 0.85rem;">WHY CHOOSE US IN DARJEELING</span>
        <h2 style="font-size: 2.2rem; font-weight: 800; margin-top: 10px;">6 Core Advantages of Our Bike Shifting</h2>
      </div>
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 25px;">
        <div style="background: #101c40; padding: 25px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.08);">
          <h3 style="font-size: 1.2rem; color: #f59e0b; margin-bottom: 10px;">Enclosed Container Trucks</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.6;">Weatherproof covered container carriers protecting your vehicle against heavy hill rains, fog, and mountain dust.</p>
        </div>
        <div style="background: #101c40; padding: 25px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.08);">
          <h3 style="font-size: 1.2rem; color: #f59e0b; margin-bottom: 10px;">7-Layer Protection</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.6;">Heavy 80-GSM bubble wrap, corrugated sheets, foam cushions, and stretch film safeguard paint and bodywork.</p>
        </div>
        <div style="background: #101c40; padding: 25px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.08);">
          <h3 style="font-size: 1.2rem; color: #f59e0b; margin-bottom: 10px;">Hill Doorstep Pickup</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.6;">Specialized pickup across Darjeeling hill town, Ghoom, Kurseong, and Lebong tea estate areas.</p>
        </div>
        <div style="background: #101c40; padding: 25px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.08);">
          <h3 style="font-size: 1.2rem; color: #f59e0b; margin-bottom: 10px;">Full Transit Insurance</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.6;">Comprehensive transit policy covering declared vehicle value against mountain highway hazards.</p>
        </div>
        <div style="background: #101c40; padding: 25px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.08);">
          <h3 style="font-size: 1.2rem; color: #f59e0b; margin-bottom: 10px;">GPS Express Tracking</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.6;">Real-time GPS vehicle tracking and daily WhatsApp status updates from hill dispatch to destination.</p>
        </div>
        <div style="background: #101c40; padding: 25px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.08);">
          <h3 style="font-size: 1.2rem; color: #f59e0b; margin-bottom: 10px;">IBA Approved Billing</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.6;">Official GST bills, consignment notes, and LR receipts accepted by corporate and defense sector employers.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- 5. Specialized Services Breakdown -->
  <section style="padding: 60px 0; background: #070d1e; color: #ffffff;">
    <div class="container">
      <div style="text-align: center; max-width: 700px; margin: 0 auto 40px auto;">
        <span style="color: #f59e0b; font-weight: 700; text-transform: uppercase; font-size: 0.85rem;">OUR VEHICLE SOLUTIONS</span>
        <h2 style="font-size: 2.2rem; font-weight: 800; margin-top: 10px;">Specialized Bike Shifting Services</h2>
      </div>
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 20px;">
        <div style="background: #101c40; padding: 20px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <h4 style="font-size: 1.1rem; color: #ffffff; margin-bottom: 8px;">Commuter Motorcycles</h4>
          <p style="color: #cbd5e1; font-size: 0.9rem;">Affordable, secure shifting for Splendor, Shine, Pulsar, and Apache bikes from hill town to metros.</p>
        </div>
        <div style="background: #101c40; padding: 20px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <h4 style="font-size: 1.1rem; color: #ffffff; margin-bottom: 8px;">Royal Enfield & Touring Bikes</h4>
          <p style="color: #cbd5e1; font-size: 0.9rem;">Custom wooden crating and extra padding for Himalayan, Bullet, KTM, and adventure bikes.</p>
        </div>
        <div style="background: #101c40; padding: 20px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <h4 style="font-size: 1.1rem; color: #ffffff; margin-bottom: 8px;">Scooters & Mopeds</h4>
          <p style="color: #cbd5e1; font-size: 0.9rem;">Gentle tie-down and fiber body protection for Activa, Jupiter, Access, and Vespas.</p>
        </div>
        <div style="background: #101c40; padding: 20px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <h4 style="font-size: 1.1rem; color: #ffffff; margin-bottom: 8px;">Defence & Corporate Transfers</h4>
          <p style="color: #cbd5e1; font-size: 0.9rem;">Official IBA bills and insurance documentation for army personnel and government relocations.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- 6. 7-Layer Safety Packaging Framework -->
  <section style="padding: 60px 0; background: #0b132b; color: #ffffff;">
    <div class="container" style="max-width: 900px;">
      <div style="text-align: center; margin-bottom: 40px;">
        <span style="color: #f59e0b; font-weight: 700; text-transform: uppercase; font-size: 0.85rem;">ZERO DAMAGE GUARANTEE</span>
        <h2 style="font-size: 2.2rem; font-weight: 800; margin-top: 10px;">7-Layer Safety Packaging Framework</h2>
      </div>
      <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
        <div style="background: #101c40; padding: 15px 20px; border-radius: 8px;">
          <strong style="color: #f59e0b;">Layer 1:</strong> Foam padding on handlebars & rear view mirrors
        </div>
        <div style="background: #101c40; padding: 15px 20px; border-radius: 8px;">
          <strong style="color: #f59e0b;">Layer 2:</strong> 80-GSM heavy duty bubble wrap wrapping
        </div>
        <div style="background: #101c40; padding: 15px 20px; border-radius: 8px;">
          <strong style="color: #f59e0b;">Layer 3:</strong> Heavy corrugated cardboard sheets on petrol tank & side panels
        </div>
        <div style="background: #101c40; padding: 15px 20px; border-radius: 8px;">
          <strong style="color: #f59e0b;">Layer 4:</strong> Industrial stretch film wrap for moisture & dust proofing
        </div>
        <div style="background: #101c40; padding: 15px 20px; border-radius: 8px;">
          <strong style="color: #f59e0b;">Layer 5:</strong> Corner edge guards on silencer & front mudguard
        </div>
        <div style="background: #101c40; padding: 15px 20px; border-radius: 8px;">
          <strong style="color: #f59e0b;">Layer 6:</strong> Heavy-duty nylon belt anchorage inside truck chassis
        </div>
        <div style="background: #101c40; padding: 15px 20px; border-radius: 8px; grid-column: span 2;">
          <strong style="color: #f59e0b;">Layer 7:</strong> Waterproof tarpaulin cover inside sealed container truck
        </div>
      </div>
    </div>
  </section>

  <!-- 7. Origin Pickup Locality Grid -->
  <section style="padding: 60px 0; background: #070d1e; color: #ffffff;">
    <div class="container">
      <div style="text-align: center; margin-bottom: 30px;">
        <h2 style="font-size: 2rem; font-weight: 800;">Darjeeling Hill Doorstep Pickup Localities</h2>
        <p style="color: #cbd5e1; font-size: 0.95rem;">Doorstep pickup available across all major Darjeeling hill sectors</p>
      </div>
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 15px; text-align: center;">
        <div style="background: #101c40; padding: 15px; border-radius: 8px; color: #cbd5e1;">Mall Road & Chowrasta</div>
        <div style="background: #101c40; padding: 15px; border-radius: 8px; color: #cbd5e1;">Ghoom & Jorebunglow</div>
        <div style="background: #101c40; padding: 15px; border-radius: 8px; color: #cbd5e1;">Kurseong & Sonada</div>
        <div style="background: #101c40; padding: 15px; border-radius: 8px; color: #cbd5e1;">Lebong & Takdah</div>
        <div style="background: #101c40; padding: 15px; border-radius: 8px; color: #cbd5e1;">Sukhiapokhri</div>
        <div style="background: #101c40; padding: 15px; border-radius: 8px; color: #cbd5e1;">Mirik & Tindharia</div>
        <div style="background: #101c40; padding: 15px; border-radius: 8px; color: #cbd5e1;">Matigara & Siliguri Hub</div>
        <div style="background: #101c40; padding: 15px; border-radius: 8px; color: #cbd5e1;">Rohini Road Junction</div>
      </div>
    </div>
  </section>

  <!-- 8. Intercity Route Network Grid -->
  <section style="padding: 60px 0; background: #0b132b; color: #ffffff;">
    <div class="container">
      <div style="text-align: center; margin-bottom: 30px;">
        <h2 style="font-size: 2rem; font-weight: 800;">Popular Intercity Routes from Darjeeling</h2>
      </div>
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 15px; text-align: center;">
        <a href="<?php echo SITE_URL; ?>/pages/bike-transport-from-bangalore-to-siliguri.php" style="background: #101c40; padding: 15px; border-radius: 8px; color: #f59e0b; text-decoration: none; font-weight: 600;">Darjeeling → Siliguri</a>
        <a href="<?php echo SITE_URL; ?>/pages/bike-transport-from-kolkata-to-bangalore.php" style="background: #101c40; padding: 15px; border-radius: 8px; color: #f59e0b; text-decoration: none; font-weight: 600;">Darjeeling → Kolkata</a>
        <a href="<?php echo SITE_URL; ?>/pages/bike-transport-from-delhi-to-bangalore.php" style="background: #101c40; padding: 15px; border-radius: 8px; color: #f59e0b; text-decoration: none; font-weight: 600;">Darjeeling → Delhi</a>
        <a href="<?php echo SITE_URL; ?>/pages/bike-transport-from-bangalore-to-bagdogra.php" style="background: #101c40; padding: 15px; border-radius: 8px; color: #f59e0b; text-decoration: none; font-weight: 600;">Darjeeling → Bengaluru</a>
      </div>
    </div>
  </section>

  <!-- 9. IBA Approved GST Billing Documentation -->
  <section style="padding: 60px 0; background: #070d1e; color: #ffffff;">
    <div class="container" style="max-width: 900px;">
      <div style="text-align: center; margin-bottom: 30px;">
        <span style="color: #f59e0b; font-weight: 700; text-transform: uppercase; font-size: 0.85rem;">100% REIMBURSEMENT READY</span>
        <h2 style="font-size: 2.2rem; font-weight: 800; margin-top: 10px;">IBA Approved GST Billing & Documents</h2>
      </div>
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 20px;">
        <div style="background: #101c40; padding: 20px; border-radius: 8px; border: 1px solid rgba(245,158,11,0.2);">
          <h4 style="color: #f59e0b; font-size: 1.05rem;">GST Tax Invoice</h4>
          <p style="color: #cbd5e1; font-size: 0.9rem; margin-top: 5px;">Official GST invoice mentioning SAC code 9965 and vehicle registration number.</p>
        </div>
        <div style="background: #101c40; padding: 20px; border-radius: 8px; border: 1px solid rgba(245,158,11,0.2);">
          <h4 style="color: #f59e0b; font-size: 1.05rem;">Lorrey Receipt (LR Copy)</h4>
          <p style="color: #cbd5e1; font-size: 0.9rem; margin-top: 5px;">Consignment LR copy signed by dispatch officer for official record.</p>
        </div>
        <div style="background: #101c40; padding: 20px; border-radius: 8px; border: 1px solid rgba(245,158,11,0.2);">
          <h4 style="color: #f59e0b; font-size: 1.05rem;">Transit Policy Document</h4>
          <p style="color: #cbd5e1; font-size: 0.9rem; margin-top: 5px;">Valid transit insurance policy cover note issued before vehicle dispatch.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- 10. Detailed FAQs -->
  <section class="faq-section" style="padding: 60px 0; background: #0b132b; color: #ffffff;">
    <div class="container" style="max-width: 900px;">
      <div style="text-align: center; margin-bottom: 40px;">
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff;">Frequently Asked Questions (Bike Transport Darjeeling)</h2>
      </div>

      <div style="display: flex; flex-direction: column; gap: 15px;">
        <?php foreach ($faq_list as $index => $faq): ?>
          <div style="background: #101c40; padding: 20px; border-radius: 8px; border: 1px solid rgba(245, 158, 11, 0.2);">
            <h4 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 8px; font-weight: 700;">
              <?php echo ($index + 1) . '. ' . htmlspecialchars($faq['q']); ?>
            </h4>
            <p style="font-size: 0.98rem; color: #cbd5e1; line-height: 1.7; margin: 0;">
              <?php echo htmlspecialchars($faq['a']); ?>
            </p>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- 11. Call-To-Action (CTA) Conversion Footer -->
  <section style="padding: 60px 0; background: linear-gradient(135deg, #1e3a8a 0%, #0b132b 100%); color: #ffffff; text-align: center;">
    <div class="container" style="max-width: 800px;">
      <h2 style="font-size: 2.3rem; font-weight: 800; margin-bottom: 15px;">Ready to Transport Your Bike from Darjeeling?</h2>
      <p style="font-size: 1.1rem; color: #cbd5e1; margin-bottom: 30px;">Get 100% safe, insured two-wheeler relocation with instant pricing & free pickup.</p>
      <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap;">
        <a href="tel:<?php echo SITE_PHONE_RAW; ?>" style="padding: 15px 35px; background: #e11d48; color: #fff; border-radius: 50px; font-weight: 700; text-decoration: none; font-size: 1.1rem;">
          Call: <?php echo SITE_PHONE; ?>
        </a>
        <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20a%20bike%20transport%20quote%20for%20Darjeeling." target="_blank" style="padding: 15px 35px; background: #10b981; color: #fff; border-radius: 50px; font-weight: 700; text-decoration: none; font-size: 1.1rem;">
          WhatsApp Us Now
        </a>
      </div>
    </div>
  </section>

</main>

<!-- Inline JSON-LD Structured Data Schema -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    <?php 
    $schema_faqs = [];
    foreach ($faq_list as $faq) {
        $schema_faqs[] = '{
          "@type": "Question",
          "name": ' . json_encode($faq['q']) . ',
          "acceptedAnswer": {
            "@type": "Answer",
            "text": ' . json_encode($faq['a']) . '
          }
        }';
    }
    echo implode(',', $schema_faqs);
    ?>
  ]
}
</script>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "MovingCompany",
  "name": "Shree Ashirwad Packers and Movers",
  "description": "Professional bike transportation in Darjeeling, West Bengal with doorstep pickup and transit insurance.",
  "url": "<?php echo $canonical_url; ?>",
  "telephone": "<?php echo SITE_PHONE_RAW; ?>",
  "address": {
    "@type": "PostalAddress",
    "addressLocality": "Darjeeling",
    "addressRegion": "West Bengal",
    "addressCountry": "IN"
  },
  "areaServed": "Darjeeling, West Bengal",
  "priceRange": "₹2200 - ₹8500"
}
</script>

<script>
function sendHeroWhatsAppLead(event, form) {
  event.preventDefault();
  var name = form.querySelector('[name="name"]').value;
  var phone = form.querySelector('[name="phone"]').value;
  var moveFrom = form.querySelector('[name="move_from"]').value;
  var moveTo = form.querySelector('[name="move_to"]').value;
  
  var message = "Hello Shree Ashirwad Packers,\n\nI would like a Bike Transport Quote for Darjeeling:\n- Name: " + name + "\n- Phone: " + phone + "\n- Moving From: " + moveFrom + "\n- Moving To: " + moveTo;
  
  var whatsappUrl = "https://api.whatsapp.com/send?phone=918409531615&text=" + encodeURIComponent(message);
  window.open(whatsappUrl, '_blank');
}
</script>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
