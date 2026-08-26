<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "Bike Transportation in Kochi | Safe Two-Wheeler Shifting Cochin";
$page_desc = "Professional bike transportation in Kochi (Cochin, Ernakulam KL-07 RTO). Doorstep motorcycle parcel service via NH-66 & NH-544 with 7-layer bubble wrap & transit insurance.";
$page_keywords = "bike transportation in kochi, bike transport cochin, motorcycle parcel ernakulam, bike shipping bangalore chennai mumbai";
$canonical_url = "https://shreeashirwadpackersandmovers.com/pages/bike-transportation-in-kochi.php";

$page_city = "Kochi, Ernakulam, Kerala";

$faq_list = [
    [
        'q' => 'How is motorcycle transportation safely executed in Kochi (Cochin)?',
        'a' => 'Vehicles undergo thorough inspection, fuel draining under 1 liter, 7-layer bubble wrap and corrugated sheet casing, handlebar mirror guards, and belt tying inside covered container carriers.'
    ],
    [
        'q' => 'What are the charges for bike transport from Kochi to Bangalore, Chennai, or Delhi?',
        'a' => 'Interstate shipping to Bangalore or Chennai costs ₹3,200 – ₹6,500, while long-distance routes to Mumbai, Delhi, Kolkata, or Ahmedabad range from ₹5,500 to ₹12,000 depending on vehicle CC.'
    ],
    [
        'q' => 'Which highways connect Kochi for interstate bike transportation?',
        'a' => 'Major express corridors include National Highway 66 (NH-66 Coastal Corridor to Mangalore/Mumbai) and National Highway 544 (NH-544 to Coimbatore/Bangalore).'
    ],
    [
        'q' => 'Do you offer doorstep motorcycle collection in Ernakulam & Kochi port areas?',
        'a' => 'Yes, free doorstep pickup is available across Kakkanad InfoPark, MG Road, Edappally, Vyttila, Fort Kochi, Kalamassery, and Aluva.'
    ],
    [
        'q' => 'Is transit insurance provided for motorcycle transport from Kochi?',
        'a' => 'Yes, 100% transit insurance cover (1.5% to 3% of declared motorcycle market value) protects against highway transit risks.'
    ],
    [
        'q' => 'What is the estimated delivery time from Kochi to major Indian cities?',
        'a' => 'Deliveries to Bangalore, Chennai, or Coimbatore take 1–3 days, while shipments to Mumbai, Pune, Delhi, or Hyderabad take 3–6 days.'
    ],
    [
        'q' => 'What documents are required to dispatch a bike from Kochi?',
        'a' => 'Required documents include motorcycle Registration Certificate (RC) copy, active insurance policy copy, owner ID card (Aadhaar/PAN), and inspection form.'
    ],
    [
        'q' => 'Why is petrol drained before transporting the motorcycle from Cochin?',
        'a' => 'Petrol is drained under 1 liter as mandated by transport safety regulations to prevent fire hazards in sealed container trucks.'
    ],
    [
        'q' => 'Do you provide IBA approved GST bills for IT, defense, & marine relocations in Kochi?',
        'a' => 'Yes, 100% valid IBA-compliant GST consignment invoices, LR receipts, and condition reports are provided for company reimbursement claims.'
    ],
    [
        'q' => 'How can I book bike transport service in Kochi, Kerala?',
        'a' => 'Call +91 8409531615 or submit your motorcycle details on WhatsApp for an immediate transparent quote.'
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
            BIKE TRANSPORTATION KOCHI (KL-07 ERNAKULAM)
          </span>
          <h1 style="font-size: 2.7rem; font-weight: 800; line-height: 1.2; margin-bottom: 20px; color: #ffffff;">
            Professional <span style="color: #f59e0b;">Bike Transportation in Kochi</span>
          </h1>
          <p style="font-size: 1.12rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 25px;">
            Shree Ashirwad Packers and Movers provides safe, scratch-free, and doorstep motorcycle transport across Kochi (Cochin), Ernakulam, Kerala, and all pan-India interstate routes. Equipped with 7-layer bubble wrapping and IBA-approved GST bills.
          </p>

          <div style="display: flex; gap: 15px; flex-wrap: wrap; margin-bottom: 30px;">
            <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Now" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
              <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call Now: <?php echo SITE_PHONE; ?>
            </a>
            <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20a%20bike%20transport%20quote%20for%20Kochi." title="Chat on WhatsApp" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
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
          <h2 style="font-size: 1.4rem; color: #ffffff; margin-bottom: 8px; font-weight: 700; text-align: center;">Get Kochi Bike Quote</h2>
          <p style="font-size: 0.85rem; color: #94a3b8; text-align: center; margin-bottom: 20px;">Receive instant cost estimation on WhatsApp</p>

          <form action="#" method="POST" onsubmit="sendHeroWhatsAppLead(event, this);">
            <div style="margin-bottom: 14px;">
              <input type="text" name="name" class="form-control" placeholder="Your Full Name" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="margin-bottom: 14px;">
              <input type="tel" name="phone" class="form-control" placeholder="10-Digit Phone Number" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 10px; margin-bottom: 14px;">
              <input type="text" name="move_from" class="form-control" value="Kochi, Kerala" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
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
          <div style="font-size: 2rem; font-weight: 800; color: #f59e0b;">3,850+</div>
          <div style="font-size: 0.88rem; color: #cbd5e1; margin-top: 5px;">Bikes Relocated Safely</div>
        </div>
        <div style="background: #101c40; padding: 20px; border-radius: 12px; border: 1px solid rgba(245,158,11,0.2);">
          <div style="font-size: 2rem; font-weight: 800; color: #f59e0b;">KL-07 RTO</div>
          <div style="font-size: 0.88rem; color: #cbd5e1; margin-top: 5px;">Ernakulam Network</div>
        </div>
        <div style="background: #101c40; padding: 20px; border-radius: 12px; border: 1px solid rgba(245,158,11,0.2);">
          <div style="font-size: 2rem; font-weight: 800; color: #f59e0b;">100% Insured</div>
          <div style="font-size: 0.88rem; color: #cbd5e1; margin-top: 5px;">Zero-Risk Highway Cover</div>
        </div>
        <div style="background: #101c40; padding: 20px; border-radius: 12px; border: 1px solid rgba(245,158,11,0.2);">
          <div style="font-size: 2rem; font-weight: 800; color: #f59e0b;">IBA Approved</div>
          <div style="font-size: 0.88rem; color: #cbd5e1; margin-top: 5px;">IT, Marine & Corporate</div>
        </div>
      </div>
    </div>
  </section>

  <!-- 4. 6-Card Feature Grid -->
  <section style="padding: 60px 0; background: #0b132b; color: #ffffff;">
    <div class="container">
      <div style="text-align: center; max-width: 700px; margin: 0 auto 40px auto;">
        <span style="color: #f59e0b; font-weight: 700; text-transform: uppercase; font-size: 0.85rem;">WHY CHOOSE US IN KOCHI</span>
        <h2 style="font-size: 2.2rem; font-weight: 800; margin-top: 10px;">6 Key Advantages of Our Bike Transport</h2>
      </div>
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 25px;">
        <div style="background: #101c40; padding: 25px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.08);">
          <h3 style="font-size: 1.2rem; color: #f59e0b; margin-bottom: 10px;">Enclosed Container Carriers</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.6;">Weatherproof covered container trucks protecting your motorcycle from coastal rain and highway debris.</p>
        </div>
        <div style="background: #101c40; padding: 25px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.08);">
          <h3 style="font-size: 1.2rem; color: #f59e0b; margin-bottom: 10px;">7-Layer Safety Wrap</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.6;">High-density 80-GSM bubble wrap, corrugated cardboard, foam pads, and stretch film safeguard body paint.</p>
        </div>
        <div style="background: #101c40; padding: 25px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.08);">
          <h3 style="font-size: 1.2rem; color: #f59e0b; margin-bottom: 10px;">Free Doorstep Pickup</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.6;">Door-to-door pickup across Kakkanad InfoPark, Edappally, Vyttila, MG Road, and Aluva.</p>
        </div>
        <div style="background: #101c40; padding: 25px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.08);">
          <h3 style="font-size: 1.2rem; color: #f59e0b; margin-bottom: 10px;">Transit Insurance</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.6;">Comprehensive transit policy covering declared vehicle value against transit or highway accidents.</p>
        </div>
        <div style="background: #101c40; padding: 25px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.08);">
          <h3 style="font-size: 1.2rem; color: #f59e0b; margin-bottom: 10px;">Real-Time GPS Tracking</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.6;">Live GPS vehicle tracking and regular WhatsApp status updates from pickup to final delivery.</p>
        </div>
        <div style="background: #101c40; padding: 25px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.08);">
          <h3 style="font-size: 1.2rem; color: #f59e0b; margin-bottom: 10px;">IBA Approved Invoices</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.6;">Official GST invoices and consignment notes valid for IT employees, defense, and corporate claims.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- 5. Specialized Services Breakdown -->
  <section style="padding: 60px 0; background: #070d1e; color: #ffffff;">
    <div class="container">
      <div style="text-align: center; max-width: 700px; margin: 0 auto 40px auto;">
        <span style="color: #f59e0b; font-weight: 700; text-transform: uppercase; font-size: 0.85rem;">OUR VEHICLE SOLUTIONS</span>
        <h2 style="font-size: 2.2rem; font-weight: 800; margin-top: 10px;">Specialized Bike Relocation Services</h2>
      </div>
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 20px;">
        <div style="background: #101c40; padding: 20px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <h4 style="font-size: 1.1rem; color: #ffffff; margin-bottom: 8px;">Commuter Motorcycles</h4>
          <p style="color: #cbd5e1; font-size: 0.9rem;">Affordable, secure shifting for Splendor, Pulsar, Shine, and Apache bikes with full body padding.</p>
        </div>
        <div style="background: #101c40; padding: 20px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <h4 style="font-size: 1.1rem; color: #ffffff; margin-bottom: 8px;">Premium & Cruiser Bikes</h4>
          <p style="color: #cbd5e1; font-size: 0.9rem;">Custom wooden crating and extra padding for Royal Enfield Bullet, Classic, Himalayan, and Duke bikes.</p>
        </div>
        <div style="background: #101c40; padding: 20px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <h4 style="font-size: 1.1rem; color: #ffffff; margin-bottom: 8px;">Scooters & Mopeds</h4>
          <p style="color: #cbd5e1; font-size: 0.9rem;">Gentle tie-down and panel protection for Activa, Jupiter, Access, and Burgman scooters.</p>
        </div>
        <div style="background: #101c40; padding: 20px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <h4 style="font-size: 1.1rem; color: #ffffff; margin-bottom: 8px;">NH-66 & NH-544 Corridors</h4>
          <p style="color: #cbd5e1; font-size: 0.9rem;">Fast-track vehicle shipping connecting Kochi directly to Bangalore, Chennai, Mumbai, & Delhi.</p>
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
        <h2 style="font-size: 2rem; font-weight: 800;">Kochi Doorstep Pickup Localities</h2>
        <p style="color: #cbd5e1; font-size: 0.95rem;">Free doorstep pickup across Kochi & Ernakulam district</p>
      </div>
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 15px; text-align: center;">
        <div style="background: #101c40; padding: 15px; border-radius: 8px; color: #cbd5e1;">Kakkanad (InfoPark)</div>
        <div style="background: #101c40; padding: 15px; border-radius: 8px; color: #cbd5e1;">Edappally Hub</div>
        <div style="background: #101c40; padding: 15px; border-radius: 8px; color: #cbd5e1;">Vyttila Mobility Hub</div>
        <div style="background: #101c40; padding: 15px; border-radius: 8px; color: #cbd5e1;">MG Road & Marine Drive</div>
        <div style="background: #101c40; padding: 15px; border-radius: 8px; color: #cbd5e1;">Kalamassery & Aluva</div>
        <div style="background: #101c40; padding: 15px; border-radius: 8px; color: #cbd5e1;">Fort Kochi & Mattancherry</div>
        <div style="background: #101c40; padding: 15px; border-radius: 8px; color: #cbd5e1;">Palarivattom</div>
        <div style="background: #101c40; padding: 15px; border-radius: 8px; color: #cbd5e1;">Tripunithura Sector</div>
      </div>
    </div>
  </section>

  <!-- 8. Intercity Route Network Grid -->
  <section style="padding: 60px 0; background: #0b132b; color: #ffffff;">
    <div class="container">
      <div style="text-align: center; margin-bottom: 30px;">
        <h2 style="font-size: 2rem; font-weight: 800;">Popular Intercity Routes from Kochi</h2>
      </div>
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 15px; text-align: center;">
        <a href="<?php echo SITE_URL; ?>/pages/bike-transport-from-kochi-to-bangalore.php" style="background: #101c40; padding: 15px; border-radius: 8px; color: #f59e0b; text-decoration: none; font-weight: 600;">Kochi → Bangalore</a>
        <a href="<?php echo SITE_URL; ?>/pages/bike-transport-from-kochi-to-pune.php" style="background: #101c40; padding: 15px; border-radius: 8px; color: #f59e0b; text-decoration: none; font-weight: 600;">Kochi → Pune</a>
        <a href="<?php echo SITE_URL; ?>/pages/bike-transport-from-delhi-to-bangalore.php" style="background: #101c40; padding: 15px; border-radius: 8px; color: #f59e0b; text-decoration: none; font-weight: 600;">Kochi → Delhi</a>
        <a href="<?php echo SITE_URL; ?>/pages/bike-transport-from-mumbai-to-nagpur.php" style="background: #101c40; padding: 15px; border-radius: 8px; color: #f59e0b; text-decoration: none; font-weight: 600;">Kochi → Chennai</a>
      </div>
    </div>
  </section>

  <!-- 9. IBA Approved GST Billing Documentation -->
  <section style="padding: 60px 0; background: #070d1e; color: #ffffff;">
    <div class="container" style="max-width: 900px;">
      <div style="text-align: center; margin-bottom: 35px;">
        <span style="color: #f59e0b; font-weight: 700; text-transform: uppercase; font-size: 0.85rem;">100% REIMBURSEMENT READY</span>
        <h2 style="font-size: 2.2rem; font-weight: 800; margin-top: 10px;">IBA Approved GST Billing & Documents</h2>
        <p style="color: #cbd5e1; font-size: 0.95rem; margin-top: 10px;">Complete documentation set for IT professionals, defense personnel, marine staff, and corporate claim reimbursements.</p>
      </div>
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 20px;">
        <div style="background: #101c40; padding: 20px; border-radius: 10px; border: 1px solid rgba(255,255,255,0.08);">
          <h4 style="color: #f59e0b; margin-bottom: 8px;">Official GST Invoice</h4>
          <p style="color: #cbd5e1; font-size: 0.9rem;">Itemized GST bill with 18% tax breakdown and SAC code.</p>
        </div>
        <div style="background: #101c40; padding: 20px; border-radius: 10px; border: 1px solid rgba(255,255,255,0.08);">
          <h4 style="color: #f59e0b; margin-bottom: 8px;">Consignment Note (LR)</h4>
          <p style="color: #cbd5e1; font-size: 0.9rem;">Numbered Lorry Receipt with destination tracking details.</p>
        </div>
        <div style="background: #101c40; padding: 20px; border-radius: 10px; border: 1px solid rgba(255,255,255,0.08);">
          <h4 style="color: #f59e0b; margin-bottom: 8px;">Pre-Transport Audit Sheet</h4>
          <p style="color: #cbd5e1; font-size: 0.9rem;">Documented initial bike condition, odometer reading, and scratches.</p>
        </div>
        <div style="background: #101c40; padding: 20px; border-radius: 10px; border: 1px solid rgba(255,255,255,0.08);">
          <h4 style="color: #f59e0b; margin-bottom: 8px;">Insurance Policy Certificate</h4>
          <p style="color: #cbd5e1; font-size: 0.9rem;">Direct transit policy cover document protecting full declared bike value.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- 10. Detailed FAQs -->
  <section style="padding: 60px 0; background: #0b132b; color: #ffffff;">
    <div class="container" style="max-width: 900px;">
      <div style="text-align: center; margin-bottom: 40px;">
        <span style="color: #f59e0b; font-weight: 700; text-transform: uppercase; font-size: 0.85rem;">FREQUENTLY ASKED QUESTIONS</span>
        <h2 style="font-size: 2.2rem; font-weight: 800; margin-top: 10px;">Got Questions About Kochi Bike Transport?</h2>
      </div>
      <div class="faq-accordion">
        <?php foreach ($faq_list as $index => $faq): ?>
          <div style="background: #101c40; border-radius: 10px; margin-bottom: 15px; padding: 20px; border: 1px solid rgba(255,255,255,0.08);">
            <h3 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 10px; font-weight: 700;">
              Q<?php echo $index + 1; ?>: <?php echo htmlspecialchars($faq['q']); ?>
            </h3>
            <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.6; margin: 0;">
              <?php echo htmlspecialchars($faq['a']); ?>
            </p>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- 11. Call-To-Action (CTA) Conversion Footer -->
  <section style="padding: 60px 0; background: linear-gradient(135deg, #1c2541 0%, #0b132b 100%); color: #ffffff; text-align: center; border-top: 1px solid rgba(245,158,11,0.3);">
    <div class="container" style="max-width: 800px;">
      <h2 style="font-size: 2.3rem; font-weight: 800; margin-bottom: 15px;">Book Your Kochi Bike Transport Today</h2>
      <p style="font-size: 1.1rem; color: #cbd5e1; margin-bottom: 30px;">Safe 7-layer packaging, doorstep pickup, transparent pricing, and IBA approved bills across Kerala.</p>
      <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap;">
        <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Us Immediately" style="padding: 15px 35px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1.05rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
          <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call <?php echo SITE_PHONE; ?>
        </a>
        <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20to%20book%20bike%20transport%20in%20Kochi." title="Instant WhatsApp Booking" target="_blank" style="padding: 15px 35px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1.05rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
          <i class="fab fa-whatsapp" style="margin-right: 8px;"></i> WhatsApp Quick Booking
        </a>
      </div>
    </div>
  </section>

</main>

<!-- Schema.org JSON-LD Structured Data -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "MovingCompany",
      "@id": "https://shreeashirwadpackersandmovers.com/#organization",
      "name": "Shree Ashirwad Packers and Movers",
      "url": "https://shreeashirwadpackersandmovers.com",
      "logo": "https://shreeashirwadpackersandmovers.com/images/logo.png",
      "telephone": "+918409531615",
      "priceRange": "₹3200 - ₹15000",
      "address": {
        "@type": "PostalAddress",
        "addressLocality": "Kochi",
        "addressRegion": "Kerala",
        "addressCountry": "IN"
      }
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        <?php foreach ($faq_list as $i => $faq): ?>
        {
          "@type": "Question",
          "name": <?php echo json_encode($faq['q']); ?>,
          "acceptedAnswer": {
            "@type": "Answer",
            "text": <?php echo json_encode($faq['a']); ?>
          }
        }<?php echo ($i < count($faq_list) - 1) ? ',' : ''; ?>
        <?php endforeach; ?>
      ]
    }
  ]
}
</script>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
