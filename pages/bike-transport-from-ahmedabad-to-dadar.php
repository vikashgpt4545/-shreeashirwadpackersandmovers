<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "Bike Transport from Ahmedabad to Dadar | Call 8409531615";
$page_desc = "Planning bike transport from Ahmedabad to Dadar Mumbai? Get safe, insured, and doorstep motorcycle shipping services. View estimated charges, transit times, and packaging details with Shree Ashirwad Packers and Movers.";
$page_keywords = "bike transport from ahmedabad to dadar, best bike transport from ahmedabad to dadar, affordable bike transport from ahmedabad to dadar, packers and movers, packers and movers in ranchi, top bike transport from ahmedabad to dadar company, household shifting bike transport from ahmedabad to dadar, doorstep bike transport from ahmedabad to dadar, verified bike transport from ahmedabad to dadar services, shree ashirwad bike transport from ahmedabad to dadar";
$canonical_url = "https://shreeashirwadpackersandmovers.com/pages/bike-transport-from-ahmedabad-to-dadar.php";

$faq_list = [
    ['q' => 'What is the cost of transporting a bike from Ahmedabad to Dadar?', 'a' => 'Bike transport charges from Ahmedabad to Dadar (Mumbai) range from ₹2,500 to ₹5,200 depending on vehicle cubic capacity and packaging level.'],
    ['q' => 'How long does bike delivery take from Ahmedabad to Dadar?', 'a' => 'Express transit from Ahmedabad to Dadar takes approximately 24 to 48 hours via direct highway logistics.'],
    ['q' => 'Is doorstep pickup available in Ahmedabad and doorstep delivery in Dadar?', 'a' => 'Yes, doorstep pickup is provided across all areas in Ahmedabad with direct doorstep delivery in Dadar East and Dadar West.'],
    ['q' => 'Is insurance provided for Ahmedabad to Dadar bike transport?', 'a' => 'Yes, full transit insurance coverage is included to guarantee financial protection for your vehicle.'],
    ['q' => 'What documents are required for shipping a motorcycle from Ahmedabad to Dadar?', 'a' => 'Documents required are bike RC copy, valid insurance copy, government ID proof, and consignment agreement.']
];

require_once __DIR__ . '/../includes/header.php';
?>

<main class="site-main">

  <!-- 1. Visual Breadcrumb Navigation Bar -->
  <div class="breadcrumb-wrapper">
    <div class="container">
      <div class="breadcrumb-list">
        <span class="breadcrumb-item"><a href="<?php echo SITE_URL; ?>" title="Home">Home</a></span>
        <span class="breadcrumb-separator">/</span>
        <span class="breadcrumb-item active"><?php echo htmlspecialchars($page_title); ?></span>
      </div>
    </div>
  </div>

  <!-- 2. Hero Section with Lead Form -->
  <section class="hero-section" style="background: linear-gradient(135deg, #0b132b 0%, #1c2541 100%); padding: 60px 0; color: #ffffff;">
    <div class="container">
      <div class="hero-grid" style="display: grid; grid-template-columns: 1.2fr 0.8fr; gap: 40px; align-items: center;">
        
        <!-- Hero Text Column -->
        <div class="hero-text">
          <span class="section-tag" style="background: rgba(245, 158, 11, 0.15); color: #f59e0b; border: 1px solid rgba(245, 158, 11, 0.4); padding: 6px 16px; border-radius: 20px; font-size: 0.85rem; font-weight: 700; text-transform: uppercase; display: inline-block; margin-bottom: 15px;">
            AHMEDABAD TO DADAR EXPRESS RELOCATION
          </span>
          <h1 style="font-size: 2.5rem; font-weight: 800; line-height: 1.2; margin-bottom: 20px; color: #ffffff;">
            Bike Transport from <span style="color: #f59e0b;">Ahmedabad to Dadar</span>
          </h1>
          <p style="font-size: 1.1rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 25px;">
            Planning bike transport from Ahmedabad to Dadar (Mumbai)? Get safe, insured, and doorstep motorcycle shipping services with 7-layer foam wrapping and overnight express transit.
          </p>

          <div style="display: flex; gap: 15px; flex-wrap: wrap; margin-bottom: 30px;">
            <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Transport Desk" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
              <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call Desk: <?php echo SITE_PHONE; ?>
            </a>
            <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20a%20quote%20for%20bike%20transport%20from%20Ahmedabad%20to%20Dadar." title="Chat on WhatsApp" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
              <i class="fab fa-whatsapp" style="margin-right: 8px;"></i> Chat on WhatsApp
            </a>
          </div>

          <div style="display: flex; gap: 20px; font-size: 0.9rem; color: #94a3b8;">
            <span><strong style="color: #f59e0b;">100% Insured</strong> Transit</span>
            <span><strong style="color: #f59e0b;">24-48 Hours</strong> Express Delivery</span>
            <span><strong style="color: #f59e0b;">Doorstep</strong> Pickup &amp; Drop</span>
          </div>
        </div>

        <!-- Hero Lead Form Column -->
        <div class="hero-form-card" style="background: rgba(255, 255, 255, 0.05); backdrop-filter: blur(10px); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 16px; padding: 30px; box-shadow: 0 15px 35px rgba(0,0,0,0.4);">
          <h2 style="font-size: 1.4rem; color: #ffffff; margin-bottom: 8px; font-weight: 700; text-align: center;">Get Ahmedabad to Dadar Quote</h2>
          <p style="font-size: 0.85rem; color: #94a3b8; text-align: center; margin-bottom: 20px;">Receive transparent cost estimation on WhatsApp in 2 minutes</p>

          <form action="#" method="POST" onsubmit="sendHeroWhatsAppLead(event, this);">
            <div style="margin-bottom: 14px;">
              <input type="text" name="name" class="form-control" placeholder="Your Full Name" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="margin-bottom: 14px;">
              <input type="tel" name="phone" class="form-control" placeholder="10-Digit Phone Number" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 10px; margin-bottom: 14px;">
              <input type="text" name="move_from" class="form-control" value="Ahmedabad" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
              <input type="text" name="move_to" class="form-control" value="Dadar" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <button type="submit" style="width: 100%; padding: 14px; background: linear-gradient(135deg, #d32f2f 0%, #f59e0b 100%); color: #ffffff; border: none; border-radius: 50px; font-weight: 700; font-size: 1rem; cursor: pointer;">
              Get Instant Estimate Now &rarr;
            </button>
          </form>
        </div>

      </div>
    </div>
  </section>

  <!-- 3. Key Stats Highlight Bar -->
  <section style="background: #070d1e; padding: 30px 0; border-bottom: 1px solid rgba(255,255,255,0.08);">
    <div class="container">
      <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 20px; text-align: center;">
        <div style="background: rgba(255,255,255,0.03); padding: 20px; border-radius: 12px; border: 1px solid rgba(245,158,11,0.2);">
          <h3 style="color: #f59e0b; font-size: 1.8rem; font-weight: 800; margin: 0;">530+ km</h3>
          <p style="color: #94a3b8; font-size: 0.85rem; margin-top: 5px;">Highway Distance</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); padding: 20px; border-radius: 12px; border: 1px solid rgba(245,158,11,0.2);">
          <h3 style="color: #f59e0b; font-size: 1.8rem; font-weight: 800; margin: 0;">24 - 48 Hrs</h3>
          <p style="color: #94a3b8; font-size: 0.85rem; margin-top: 5px;">Express Delivery</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); padding: 20px; border-radius: 12px; border: 1px solid rgba(245,158,11,0.2);">
          <h3 style="color: #f59e0b; font-size: 1.8rem; font-weight: 800; margin: 0;">100% Insured</h3>
          <p style="color: #94a3b8; font-size: 0.85rem; margin-top: 5px;">Comprehensive Policy</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); padding: 20px; border-radius: 12px; border: 1px solid rgba(245,158,11,0.2);">
          <h3 style="color: #f59e0b; font-size: 1.8rem; font-weight: 800; margin: 0;">4.9 / 5.0</h3>
          <p style="color: #94a3b8; font-size: 0.85rem; margin-top: 5px;">Customer Rating</p>
        </div>
      </div>
    </div>
  </section>

  <!-- 4. Value-Proposition 6-Card Grid -->
  <section style="padding: 70px 0; background: #0b132b; color: #ffffff;">
    <div class="container">
      <div style="text-align: center; margin-bottom: 45px;">
        <span style="color: #f59e0b; font-weight: 700; text-transform: uppercase; font-size: 0.85rem; letter-spacing: 1px;">Service Benefits</span>
        <h2 style="font-size: 2.2rem; font-weight: 800; margin-top: 8px;">Why Choose Us for <span style="color: #f59e0b;">Ahmedabad to Dadar Bike Shipping</span></h2>
      </div>
      <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 25px;">
        <div style="background: #172a54; padding: 25px; border-radius: 12px; border: 1px solid rgba(245,158,11,0.25);">
          <h3 style="color: #f59e0b; font-size: 1.2rem; font-weight: 700; margin-bottom: 10px;"><i class="fas fa-shield-alt" style="margin-right: 8px;"></i> 7-Layer Foam &amp; Bubble Protection</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.6;">Bubble wrap, foam padding, and stretch film protect bodywork from scratches and dust.</p>
        </div>
        <div style="background: #172a54; padding: 25px; border-radius: 12px; border: 1px solid rgba(245,158,11,0.25);">
          <h3 style="color: #f59e0b; font-size: 1.2rem; font-weight: 700; margin-bottom: 10px;"><i class="fas fa-truck-moving" style="margin-right: 8px;"></i> Covered Vehicle Container</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.6;">Closed container trucks protect your motorcycle from rain, dust, and highway hazards.</p>
        </div>
        <div style="background: #172a54; padding: 25px; border-radius: 12px; border: 1px solid rgba(245,158,11,0.25);">
          <h3 style="color: #f59e0b; font-size: 1.2rem; font-weight: 700; margin-bottom: 10px;"><i class="fas fa-home" style="margin-right: 8px;"></i> Doorstep Pickup &amp; Delivery</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.6;">Doorstep pickup across Ahmedabad and direct doorstep drop in Dadar East &amp; Dadar West.</p>
        </div>
        <div style="background: #172a54; padding: 25px; border-radius: 12px; border: 1px solid rgba(245,158,11,0.25);">
          <h3 style="color: #f59e0b; font-size: 1.2rem; font-weight: 700; margin-bottom: 10px;"><i class="fas fa-file-invoice" style="margin-right: 8px;"></i> Transit Insurance Policy</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.6;">Comprehensive insurance policy covering declared vehicle market value.</p>
        </div>
        <div style="background: #172a54; padding: 25px; border-radius: 12px; border: 1px solid rgba(245,158,11,0.25);">
          <h3 style="color: #f59e0b; font-size: 1.2rem; font-weight: 700; margin-bottom: 10px;"><i class="fas fa-clock" style="margin-right: 8px;"></i> Express 24-48 Hr Service</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.6;">Daily route departures between Ahmedabad and Mumbai ensure rapid transit.</p>
        </div>
        <div style="background: #172a54; padding: 25px; border-radius: 12px; border: 1px solid rgba(245,158,11,0.25);">
          <h3 style="color: #f59e0b; font-size: 1.2rem; font-weight: 700; margin-bottom: 10px;"><i class="fas fa-rupee-sign" style="margin-right: 8px;"></i> Transparent Pricing</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.6;">Clear tariff estimates with zero unexpected surcharges or hidden toll fees.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- 5. Shifting Cost Table -->
  <section style="padding: 60px 0; background: #070d1e; color: #ffffff;">
    <div class="container" style="max-width: 900px;">
      <div style="text-align: center; margin-bottom: 35px;">
        <span style="color: #f59e0b; font-weight: 700; text-transform: uppercase; font-size: 0.85rem;">Tariff Table</span>
        <h2 style="font-size: 2rem; font-weight: 800; margin-top: 8px;">Ahmedabad to Dadar Bike Transport Rates</h2>
      </div>
      <div style="overflow-x: auto; background: #172a54; border-radius: 12px; padding: 5px; border: 1px solid rgba(245,158,11,0.3);">
        <table style="width: 100%; border-collapse: collapse; text-align: left; color: #cbd5e1;">
          <thead>
            <tr style="background: rgba(245, 158, 11, 0.15); color: #f59e0b; border-bottom: 1px solid rgba(245,158,11,0.3);">
              <th style="padding: 14px 18px;">Two-Wheeler Type</th>
              <th style="padding: 14px 18px;">Distance</th>
              <th style="padding: 14px 18px;">Estimated Rate</th>
              <th style="padding: 14px 18px;">Transit Time</th>
            </tr>
          </thead>
          <tbody>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.08);">
              <td style="padding: 14px 18px; font-weight: 600; color: #fff;">Standard Scooters (Activa, Jupiter)</td>
              <td style="padding: 14px 18px;">~530 km</td>
              <td style="padding: 14px 18px; color: #f59e0b; font-weight: 700;">₹2,500 - ₹3,400</td>
              <td style="padding: 14px 18px;">24 - 48 Hours</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.08);">
              <td style="padding: 14px 18px; font-weight: 600; color: #fff;">Commuter Bikes (Splendor, Pulsar)</td>
              <td style="padding: 14px 18px;">~530 km</td>
              <td style="padding: 14px 18px; color: #f59e0b; font-weight: 700;">₹3,000 - ₹3,800</td>
              <td style="padding: 14px 18px;">24 - 48 Hours</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.08);">
              <td style="padding: 14px 18px; font-weight: 600; color: #fff;">Cruiser / Sports (Royal Enfield, Duke)</td>
              <td style="padding: 14px 18px;">~530 km</td>
              <td style="padding: 14px 18px; color: #f59e0b; font-weight: 700;">₹3,800 - ₹5,200</td>
              <td style="padding: 14px 18px;">24 - 48 Hours</td>
            </tr>
            <tr>
              <td style="padding: 14px 18px; font-weight: 600; color: #fff;">Superbikes (Wooden Crate Packing)</td>
              <td style="padding: 14px 18px;">~530 km</td>
              <td style="padding: 14px 18px; color: #f59e0b; font-weight: 700;">₹6,000 - ₹8,500</td>
              <td style="padding: 14px 18px;">24 - 48 Hours</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </section>

  <!-- 6. 7-Layer Packaging Protocol -->
  <section style="padding: 70px 0; background: #0b132b; color: #ffffff;">
    <div class="container" style="max-width: 950px;">
      <div style="text-align: center; margin-bottom: 40px;">
        <span style="color: #f59e0b; font-weight: 700; text-transform: uppercase; font-size: 0.85rem;">Safety Protocol</span>
        <h2 style="font-size: 2.2rem; font-weight: 800; margin-top: 8px;">7-Layer Vehicle Protection Process</h2>
      </div>
      <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 20px;">
        <div style="background: #172a54; padding: 20px; border-radius: 10px; border: 1px solid rgba(245,158,11,0.2);">
          <h4 style="color: #f59e0b; margin-bottom: 8px;"><i class="fas fa-layer-group" style="margin-right: 6px;"></i> Layer 1: Air Bubble Wrap</h4>
          <p style="color: #cbd5e1; font-size: 0.9rem; margin: 0;">Covers tank, mirrors, headlights, and body panels.</p>
        </div>
        <div style="background: #172a54; padding: 20px; border-radius: 10px; border: 1px solid rgba(245,158,11,0.2);">
          <h4 style="color: #f59e0b; margin-bottom: 8px;"><i class="fas fa-box" style="margin-right: 6px;"></i> Layer 2: Corrugated Sheet Padding</h4>
          <p style="color: #cbd5e1; font-size: 0.9rem; margin: 0;">Heavy cardboard wraps around engine guard and exhaust pipe.</p>
        </div>
        <div style="background: #172a54; padding: 20px; border-radius: 10px; border: 1px solid rgba(245,158,11,0.2);">
          <h4 style="color: #f59e0b; margin-bottom: 8px;"><i class="fas fa-tape" style="margin-right: 6px;"></i> Layer 3: Stretch Film Seal</h4>
          <p style="color: #cbd5e1; font-size: 0.9rem; margin: 0;">Seals packaging layers securely against dust and moisture.</p>
        </div>
        <div style="background: #172a54; padding: 20px; border-radius: 10px; border: 1px solid rgba(245,158,11,0.2);">
          <h4 style="color: #f59e0b; margin-bottom: 8px;"><i class="fas fa-truck-loading" style="margin-right: 6px;"></i> Layer 4: Heavy Belting Anchorage</h4>
          <p style="color: #cbd5e1; font-size: 0.9rem; margin: 0;">Tied inside covered carrier truck to maintain stability during transit.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- 7. Route Coverage -->
  <section style="padding: 60px 0; background: #070d1e; color: #ffffff;">
    <div class="container" style="max-width: 900px; text-align: center;">
      <span style="color: #f59e0b; font-weight: 700; text-transform: uppercase; font-size: 0.85rem;">Local Pickup Network</span>
      <h2 style="font-size: 2rem; font-weight: 800; margin-top: 8px; margin-bottom: 25px;">Ahmedabad Pickup &amp; Dadar Delivery Areas</h2>
      <p style="color: #cbd5e1; font-size: 1rem; line-height: 1.8;">
        Doorstep pickup across Satellite, Bodakdev, SG Highway, Navrangpura, Maninagar, Chandkheda, and Bopal in Ahmedabad with direct delivery in Dadar East, Dadar West, Matunga, Worli, and Prabhadevi.
      </p>
    </div>
  </section>

  <!-- 8. IBA & Compliance -->
  <section style="padding: 60px 0; background: #0b132b; color: #ffffff; text-align: center;">
    <div class="container" style="max-width: 800px;">
      <h2 style="font-size: 1.8rem; font-weight: 800; color: #f59e0b; margin-bottom: 15px;">IBA Approved Invoices &amp; Consignment Paperwork</h2>
      <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.7;">
        Full GST bills, vehicle condition reports, and official consignment notes for hassle-free corporate relocation reimbursements.
      </p>
    </div>
  </section>

  <!-- 9. FAQ Section with Schema -->
  <section style="padding: 70px 0; background: #070d1e; color: #ffffff;">
    <div class="container" style="max-width: 900px;">
      <div class="text-center" style="margin-bottom: 45px;">
        <span style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem;">Questions &amp; Answers</span>
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin-top: 10px;">
          Frequently Asked Questions About <span style="color: #f59e0b;">Ahmedabad to Dadar Bike Transport</span>
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

  <!-- 10. Call to Action Footer -->
  <section style="padding: 60px 0; background: linear-gradient(135deg, #172a54 0%, #0b132b 100%); border-top: 1.5px solid rgba(245, 158, 11, 0.4); color: #ffffff;">
    <div class="container" style="max-width: 900px; text-align: center;">
      <h2 style="font-size: 2.2rem; font-weight: 800; margin-bottom: 15px;">
        Book Bike Transport from Ahmedabad to Dadar
      </h2>
      <p style="font-size: 1.05rem; color: #cbd5e1; max-width: 750px; margin: 0 auto 30px auto; line-height: 1.7;">
        7-layer foam wrapping, doorstep pickup, GPS tracking, and insurance for 100% damage-free delivery.
      </p>

      <div style="display: flex; gap: 15px; justify-content: center; flex-wrap: wrap;">
        <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Now" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 30px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1.05rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
          <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call Desk: <?php echo SITE_PHONE; ?>
        </a>
        <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20a%20quote%20for%20bike%20transport%20from%20Ahmedabad%20to%20Dadar." title="Chat on WhatsApp" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 30px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1.05rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
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

