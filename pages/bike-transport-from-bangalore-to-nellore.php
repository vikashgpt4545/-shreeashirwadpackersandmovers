<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "Bike Transport from Bangalore to Nellore | Call 8409531615";
$page_desc = "Looking for safe bike transport from Bangalore to Nellore? Get door-to-door two-wheeler shipping with 7-layer safety packaging, transit insurance, and instant WhatsApp quotes.";
$page_keywords = "bike transport from bangalore to nellore, best bike transport from bangalore to nellore, affordable bike transport from bangalore to nellore, packers and movers, packers and movers in ranchi, top bike transport from bangalore to nellore company, household shifting bike transport from bangalore to nellore, doorstep bike transport from bangalore to nellore, verified bike transport from bangalore to nellore services, shree ashirwad bike transport from bangalore to nellore";
$canonical_url = "https://shreeashirwadpackersandmovers.com/pages/bike-transport-from-bangalore-to-nellore.php";

$faq_list = [
    ['q' => 'What is the cost of bike transport from Bangalore to Nellore?', 'a' => 'Standard motorcycle transport charges from Bangalore to Nellore range between ₹2,500 and ₹4,500 depending on bike displacement and packaging requirements.'],
    ['q' => 'How long does bike parcel delivery take from Bangalore to Nellore?', 'a' => 'Estimated transit time for bike transport from Bangalore to Nellore is 1 to 2 days via enclosed container trucks.'],
    ['q' => 'Do you provide doorstep pickup for motorcycle shipping to Nellore?', 'a' => 'Yes, we offer doorstep pickup across all Bangalore localities including Whitefield, Electronic City, HSR Layout, and Indiranagar.'],
    ['q' => 'Is transit insurance included for Bangalore to Nellore bike shifting?', 'a' => 'Yes, optional full-value transit insurance is provided to safeguard your vehicle against any unforeseen damages.'],
    ['q' => 'What documents are required to book bike parcel from Bangalore to Nellore?', 'a' => 'You need to provide a photocopy of the vehicle RC, active insurance document, and a government ID proof (Aadhar Card or Driving License).']
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
            BANGALORE TO NELLORE INTERSTATE LOGISTICS
          </span>
          <h1 style="font-size: 2.7rem; font-weight: 800; line-height: 1.2; margin-bottom: 20px; color: #ffffff;">
            Professional <span style="color: #f59e0b;">Bike Transport from Bangalore to Nellore</span>
          </h1>
          <p style="font-size: 1.12rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 25px;">
            Safely relocate your scooter or motorcycle from Bangalore to Nellore with 7-layer specialized packaging, closed container transport, and doorstep delivery.
          </p>

          <div style="display: flex; gap: 15px; flex-wrap: wrap; margin-bottom: 30px;">
            <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Transport Desk" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
              <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call Desk: <?php echo SITE_PHONE; ?>
            </a>
            <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20a%20quote%20for%20bike%20transport%20from%20Bangalore%20to%20Nellore." title="Chat on WhatsApp" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
              <i class="fab fa-whatsapp" style="margin-right: 8px;"></i> Chat on WhatsApp
            </a>
          </div>

          <div style="display: flex; gap: 20px; font-size: 0.9rem; color: #94a3b8;">
            <span><strong style="color: #f59e0b;">100% Insured</strong> Shifting</span>
            <span><strong style="color: #f59e0b;">7-Layer</strong> Protection</span>
            <span><strong style="color: #f59e0b;">Door-to-Door</strong> Delivery</span>
          </div>
        </div>

        <!-- Hero Lead Form Column -->
        <div class="hero-form-card" style="background: rgba(255, 255, 255, 0.05); backdrop-filter: blur(10px); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 16px; padding: 30px; box-shadow: 0 15px 35px rgba(0,0,0,0.4);">
          <h2 style="font-size: 1.4rem; color: #ffffff; margin-bottom: 8px; font-weight: 700; text-align: center;">Get Instant Shifting Quote</h2>
          <p style="font-size: 0.85rem; color: #94a3b8; text-align: center; margin-bottom: 20px;">Receive transparent cost estimation on WhatsApp in 2 minutes</p>

          <form action="#" method="POST" onsubmit="sendHeroWhatsAppLead(event, this);">
            <div style="margin-bottom: 14px;">
              <input type="text" name="name" class="form-control" placeholder="Your Full Name" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="margin-bottom: 14px;">
              <input type="tel" name="phone" class="form-control" placeholder="10-Digit Phone Number" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 10px; margin-bottom: 14px;">
              <input type="text" name="move_from" class="form-control" value="Bangalore" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
              <input type="text" name="move_to" class="form-control" value="Nellore" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
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
          <h3 style="color: #f59e0b; font-size: 1.8rem; font-weight: 800; margin: 0;">385+ km</h3>
          <p style="color: #94a3b8; font-size: 0.85rem; margin-top: 5px;">Bangalore - Nellore Route</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); padding: 20px; border-radius: 12px; border: 1px solid rgba(245,158,11,0.2);">
          <h3 style="color: #f59e0b; font-size: 1.8rem; font-weight: 800; margin: 0;">1 - 2 Days</h3>
          <p style="color: #94a3b8; font-size: 0.85rem; margin-top: 5px;">Express Transit Time</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); padding: 20px; border-radius: 12px; border: 1px solid rgba(245,158,11,0.2);">
          <h3 style="color: #f59e0b; font-size: 1.8rem; font-weight: 800; margin: 0;">100% Insured</h3>
          <p style="color: #94a3b8; font-size: 0.85rem; margin-top: 5px;">Safety Assurance</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); padding: 20px; border-radius: 12px; border: 1px solid rgba(245,158,11,0.2);">
          <h3 style="color: #f59e0b; font-size: 1.8rem; font-weight: 800; margin: 0;">4.9 / 5.0</h3>
          <p style="color: #94a3b8; font-size: 0.85rem; margin-top: 5px;">Verified Rating</p>
        </div>
      </div>
    </div>
  </section>

  <!-- 4. Value-Proposition 6-Card Grid -->
  <section style="padding: 70px 0; background: #0b132b; color: #ffffff;">
    <div class="container">
      <div style="text-align: center; margin-bottom: 45px;">
        <span style="color: #f59e0b; font-weight: 700; text-transform: uppercase; font-size: 0.85rem; letter-spacing: 1px;">Service Features</span>
        <h2 style="font-size: 2.2rem; font-weight: 800; margin-top: 8px;">Why Choose Us for <span style="color: #f59e0b;">Bangalore to Nellore Shifting</span></h2>
      </div>
      <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 25px;">
        <div style="background: #172a54; padding: 25px; border-radius: 12px; border: 1px solid rgba(245,158,11,0.25);">
          <h3 style="color: #f59e0b; font-size: 1.2rem; font-weight: 700; margin-bottom: 10px;"><i class="fas fa-truck-moving" style="margin-right: 8px;"></i> Covered Container Trucks</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.6;">Weatherproof closed carriers protect bikes from dust, rain, and highway debris during transport.</p>
        </div>
        <div style="background: #172a54; padding: 25px; border-radius: 12px; border: 1px solid rgba(245,158,11,0.25);">
          <h3 style="color: #f59e0b; font-size: 1.2rem; font-weight: 700; margin-bottom: 10px;"><i class="fas fa-box-open" style="margin-right: 8px;"></i> 7-Layer Packing</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.6;">High-grade air bubble wrap, corrugated sheets, and stretch film to shield body panels and paint.</p>
        </div>
        <div style="background: #172a54; padding: 25px; border-radius: 12px; border: 1px solid rgba(245,158,11,0.25);">
          <h3 style="color: #f59e0b; font-size: 1.2rem; font-weight: 700; margin-bottom: 10px;"><i class="fas fa-map-marker-alt" style="margin-right: 8px;"></i> Doorstep Pickup &amp; Drop</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.6;">Hassle-free collection from your residence in Bangalore and direct delivery at Nellore location.</p>
        </div>
        <div style="background: #172a54; padding: 25px; border-radius: 12px; border: 1px solid rgba(245,158,11,0.25);">
          <h3 style="color: #f59e0b; font-size: 1.2rem; font-weight: 700; margin-bottom: 10px;"><i class="fas fa-shield-alt" style="margin-right: 8px;"></i> Complete Transit Coverage</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.7;">Comprehensive insurance policy covering vehicle value during interstate transit.</p>
        </div>
        <div style="background: #172a54; padding: 25px; border-radius: 12px; border: 1px solid rgba(245,158,11,0.25);">
          <h3 style="color: #f59e0b; font-size: 1.2rem; font-weight: 700; margin-bottom: 10px;"><i class="fas fa-file-invoice" style="margin-right: 8px;"></i> Clear GST Invoice</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.6;">Transparent pricing with detailed GST billing suitable for official employee relocation claims.</p>
        </div>
        <div style="background: #172a54; padding: 25px; border-radius: 12px; border: 1px solid rgba(245,158,11,0.25);">
          <h3 style="color: #f59e0b; font-size: 1.2rem; font-weight: 700; margin-bottom: 10px;"><i class="fas fa-headset" style="margin-right: 8px;"></i> Dedicated Support</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.6;">Real-time shipment updates via WhatsApp and phone from dispatch to final delivery.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- 5. Shifting Cost Table -->
  <section style="padding: 60px 0; background: #070d1e; color: #ffffff;">
    <div class="container" style="max-width: 900px;">
      <div style="text-align: center; margin-bottom: 35px;">
        <span style="color: #f59e0b; font-weight: 700; text-transform: uppercase; font-size: 0.85rem;">Tariff Estimate</span>
        <h2 style="font-size: 2rem; font-weight: 800; margin-top: 8px;">Bangalore to Nellore Bike Transport Charges</h2>
      </div>
      <div style="overflow-x: auto; background: #172a54; border-radius: 12px; padding: 5px; border: 1px solid rgba(245,158,11,0.3);">
        <table style="width: 100%; border-collapse: collapse; text-align: left; color: #cbd5e1;">
          <thead>
            <tr style="background: rgba(245, 158, 11, 0.15); color: #f59e0b; border-bottom: 1px solid rgba(245,158,11,0.3);">
              <th style="padding: 14px 18px;">Two-Wheeler Type</th>
              <th style="padding: 14px 18px;">Packaging Included</th>
              <th style="padding: 14px 18px;">Estimated Cost</th>
              <th style="padding: 14px 18px;">Estimated Transit</th>
            </tr>
          </thead>
          <tbody>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.08);">
              <td style="padding: 14px 18px; font-weight: 600; color: #fff;">Scooters (Activa, Access, Jupiter)</td>
              <td style="padding: 14px 18px;">7-Layer Bubble &amp; Foam</td>
              <td style="padding: 14px 18px; color: #f59e0b; font-weight: 700;">₹2,500 - ₹3,200</td>
              <td style="padding: 14px 18px;">1 - 2 Days</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.08);">
              <td style="padding: 14px 18px; font-weight: 600; color: #fff;">Standard Commuter Bikes (100cc - 150cc)</td>
              <td style="padding: 14px 18px;">Multi-Layer Heavy Wrap</td>
              <td style="padding: 14px 18px; color: #f59e0b; font-weight: 700;">₹2,800 - ₹3,600</td>
              <td style="padding: 14px 18px;">1 - 2 Days</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.08);">
              <td style="padding: 14px 18px; font-weight: 600; color: #fff;">Sports &amp; Premium Bikes (180cc - 350cc)</td>
              <td style="padding: 14px 18px;">Bubble + Corrugated Board</td>
              <td style="padding: 14px 18px; color: #f59e0b; font-weight: 700;">₹3,500 - ₹4,500</td>
              <td style="padding: 14px 18px;">1 - 2 Days</td>
            </tr>
            <tr>
              <td style="padding: 14px 18px; font-weight: 600; color: #fff;">Cruisers &amp; Royal Enfield Models</td>
              <td style="padding: 14px 18px;">Custom Wooden Crate / Heavy Duty Wrap</td>
              <td style="padding: 14px 18px; color: #f59e0b; font-weight: 700;">₹4,200 - ₹5,200</td>
              <td style="padding: 14px 18px;">1 - 2 Days</td>
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
        <span style="color: #f59e0b; font-weight: 700; text-transform: uppercase; font-size: 0.85rem;">Safety Standard</span>
        <h2 style="font-size: 2.2rem; font-weight: 800; margin-top: 8px;">Our 7-Layer Bike Protection Framework</h2>
      </div>
      <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 20px;">
        <div style="background: #172a54; padding: 20px; border-radius: 10px; border: 1px solid rgba(245,158,11,0.2);">
          <h4 style="color: #f59e0b; margin-bottom: 8px;"><i class="fas fa-layer-group" style="margin-right: 6px;"></i> Layer 1: Stretch Film Base</h4>
          <p style="color: #cbd5e1; font-size: 0.9rem; margin: 0;">Initial moisture seal layer protecting original paint finish from scratches.</p>
        </div>
        <div style="background: #172a54; padding: 20px; border-radius: 10px; border: 1px solid rgba(245,158,11,0.2);">
          <h4 style="color: #f59e0b; margin-bottom: 8px;"><i class="fas fa-box" style="margin-right: 6px;"></i> Layer 2: 80-GSM Air Bubble Wrap</h4>
          <p style="color: #cbd5e1; font-size: 0.9rem; margin: 0;">High-density shock-absorbing cushion covering fuel tank, handlebars, and fairings.</p>
        </div>
        <div style="background: #172a54; padding: 20px; border-radius: 10px; border: 1px solid rgba(245,158,11,0.2);">
          <h4 style="color: #f59e0b; margin-bottom: 8px;"><i class="fas fa-scroll" style="margin-right: 6px;"></i> Layer 3: Corrugated Fiberboard Sheets</h4>
          <p style="color: #cbd5e1; font-size: 0.9rem; margin: 0;">Heavy cardboard panels wrapped around mirrors, silencer, and engine components.</p>
        </div>
        <div style="background: #172a54; padding: 20px; border-radius: 10px; border: 1px solid rgba(245,158,11,0.2);">
          <h4 style="color: #f59e0b; margin-bottom: 8px;"><i class="fas fa-lock" style="margin-right: 6px;"></i> Layer 4: Heavy Belts &amp; Corner Guard Support</h4>
          <p style="color: #cbd5e1; font-size: 0.9rem; margin: 0;">High-tensile lashing belts secure vehicle inside closed container truck.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- 7. Route Coverage -->
  <section style="padding: 60px 0; background: #070d1e; color: #ffffff;">
    <div class="container" style="max-width: 900px; text-align: center;">
      <span style="color: #f59e0b; font-weight: 700; text-transform: uppercase; font-size: 0.85rem;">Coverage &amp; Network</span>
      <h2 style="font-size: 2rem; font-weight: 800; margin-top: 8px; margin-bottom: 25px;">Bangalore Pickup &amp; Nellore Delivery Areas</h2>
      <p style="color: #cbd5e1; font-size: 1rem; line-height: 1.8;">
        Pickup across all Bangalore hubs (Whitefield, Koramangala, Indiranagar, Electronic City, HSR Layout, Marathahalli, Bellandur) and delivery across Nellore town (Vedayapalem, Dargamitta, Magunta Layout, Podalakur Road, Subhedarpet).
      </p>
    </div>
  </section>

  <!-- 8. IBA & Compliance -->
  <section style="padding: 60px 0; background: #0b132b; color: #ffffff; text-align: center;">
    <div class="container" style="max-width: 800px;">
      <h2 style="font-size: 1.8rem; font-weight: 800; color: #f59e0b; margin-bottom: 15px;">Corporate Claim &amp; GST Compliant Billing</h2>
      <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.7;">
        We issue valid GST invoices, consignment notes (LR copy), and transit insurance policies required for company reimbursement.
      </p>
    </div>
  </section>

  <!-- 9. FAQ Section with Schema -->
  <section style="padding: 70px 0; background: #070d1e; color: #ffffff;">
    <div class="container" style="max-width: 900px;">
      <div class="text-center" style="margin-bottom: 45px;">
        <span style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem;">Questions &amp; Answers</span>
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin-top: 10px;">
          Frequently Asked Questions About <span style="color: #f59e0b;">Bangalore to Nellore Bike Transport</span>
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
        Book Bike Transport from Bangalore to Nellore Today
      </h2>
      <p style="font-size: 1.05rem; color: #cbd5e1; max-width: 750px; margin: 0 auto 30px auto; line-height: 1.7;">
        Get instant WhatsApp estimate, doorstep pickup, 7-layer packaging, and insured delivery to Nellore.
      </p>

      <div style="display: flex; gap: 15px; justify-content: center; flex-wrap: wrap;">
        <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Now" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 30px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1.05rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
          <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call Desk: <?php echo SITE_PHONE; ?>
        </a>
        <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20a%20quote%20for%20bike%20transport%20from%20Bangalore%20to%20Nellore." title="Chat on WhatsApp" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 30px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1.05rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
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

