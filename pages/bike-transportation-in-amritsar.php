<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "Bike Transportation in Amritsar | Safe Two-Wheeler Shifting Punjab";
$page_desc = "Looking for bike transportation in Amritsar, Punjab? Get safe, insured, and doorstep motorcycle shifting. High-quality multi-layer packing and real-time tracking.";
$page_keywords = "bike transportation in amritsar, best bike transportation in amritsar, affordable bike transportation in amritsar, packers and movers, top bike transportation in amritsar company, household shifting bike transportation in amritsar, doorstep bike transportation in amritsar, verified bike transportation in amritsar services, shree ashirwad bike transportation in amritsar";
$canonical_url = "https://shreeashirwadpackersandmovers.com/pages/bike-transportation-in-amritsar.php";

require_once __DIR__ . '/../includes/header.php';
?>

<main class="site-main dark-theme-override">

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
            BIKE TRANSPORTATION AMRITSAR RELOCATION SPECIALISTS
          </span>
          <h1 style="font-size: 2.7rem; font-weight: 800; line-height: 1.2; margin-bottom: 20px; color: #ffffff;">
            Professional <span style="color: #f59e0b;">Bike Transportation in Amritsar</span>
          </h1>
          <p style="font-size: 1.12rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 25px;">
            Planning bike transportation in Amritsar, Punjab? Shree Ashirwad Packers and Movers provides safe, insured two-wheeler shipping serving Ranjit Avenue, GT Road, Mall Road, Cantonment area, and Chheharta via NH-3 and NH-54 corridors.
          </p>

          <div style="display: flex; gap: 15px; flex-wrap: wrap; margin-bottom: 30px;">
            <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Now" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
              <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call Now: <?php echo SITE_PHONE; ?>
            </a>
            <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20a%20bike%20transport%20quote%20for%20Amritsar." title="Chat on WhatsApp" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
              <i class="fab fa-whatsapp" style="margin-right: 8px;"></i> Chat on WhatsApp
            </a>
          </div>

          <div style="display: flex; gap: 20px; font-size: 0.9rem; color: #94a3b8;">
            <span><strong style="color: #f59e0b;">100% Insured</strong> Shifting</span>
            <span><strong style="color: #f59e0b;">7-Layer</strong> Bubble Packaging</span>
            <span><strong style="color: #f59e0b;">Door-to-Door</strong> Delivery</span>
          </div>
        </div>

        <!-- Hero Lead Form Column -->
        <div class="hero-form-card" style="background: rgba(255, 255, 255, 0.05); backdrop-filter: blur(10px); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 16px; padding: 30px; box-shadow: 0 15px 35px rgba(0,0,0,0.4);">
          <h2 style="font-size: 1.4rem; color: #ffffff; margin-bottom: 8px; font-weight: 700; text-align: center;">Get Amritsar Bike Quote</h2>
          <p style="font-size: 0.85rem; color: #94a3b8; text-align: center; margin-bottom: 20px;">Receive transparent cost estimation on WhatsApp in 2 minutes</p>

          <form action="#" method="POST" onsubmit="sendHeroWhatsAppLead(event, this);">
            <div style="margin-bottom: 14px;">
              <input type="text" name="name" class="form-control" placeholder="Your Full Name" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="margin-bottom: 14px;">
              <input type="tel" name="phone" class="form-control" placeholder="10-Digit Phone Number" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 10px; margin-bottom: 14px;">
              <input type="text" name="move_from" class="form-control" value="Amritsar" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
              <input type="text" name="move_to" class="form-control" placeholder="Moving To (City/Area)" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <button type="submit" style="width: 100%; padding: 14px; background: linear-gradient(135deg, #d32f2f 0%, #f59e0b 100%); color: #ffffff; border: none; border-radius: 50px; font-weight: 700; font-size: 1rem; cursor: pointer;">
              Get Instant Estimate Now &rarr;
            </button>
          </form>
        </div>

      </div>
    </div>
  </section>

  <!-- 3. Trust Badges & Quick Stats Banner -->
  <section style="background: #0d1b2a; padding: 30px 0; border-bottom: 1px solid rgba(255,255,255,0.05);">
    <div class="container">
      <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 20px; text-align: center;">
        <div style="background: rgba(255,255,255,0.03); padding: 20px; border-radius: 12px; border: 1px solid rgba(245,158,11,0.2);">
          <div style="font-size: 2rem; font-weight: 800; color: #f59e0b;">100% Insured</div>
          <div style="font-size: 0.88rem; color: #94a3b8; margin-top: 4px;">Zero Financial Risk</div>
        </div>
        <div style="background: rgba(255,255,255,0.03); padding: 20px; border-radius: 12px; border: 1px solid rgba(245,158,11,0.2);">
          <div style="font-size: 2rem; font-weight: 800; color: #10b981;">7-Layer</div>
          <div style="font-size: 0.88rem; color: #94a3b8; margin-top: 4px;">Armor Shield Packing</div>
        </div>
        <div style="background: rgba(255,255,255,0.03); padding: 20px; border-radius: 12px; border: 1px solid rgba(245,158,11,0.2);">
          <div style="font-size: 2rem; font-weight: 800; color: #3b82f6;">Doorstep</div>
          <div style="font-size: 0.88rem; color: #94a3b8; margin-top: 4px;">Pickup & Delivery</div>
        </div>
        <div style="background: rgba(255,255,255,0.03); padding: 20px; border-radius: 12px; border: 1px solid rgba(245,158,11,0.2);">
          <div style="font-size: 2rem; font-weight: 800; color: #ec4899;">IBA Approved</div>
          <div style="font-size: 0.88rem; color: #94a3b8; margin-top: 4px;">GST Invoice Claims</div>
        </div>
      </div>
    </div>
  </section>

  <!-- 4. 6-Card Feature Grid -->
  <section style="background: #090d16; padding: 60px 0; color: #ffffff;">
    <div class="container">
      <div style="text-align: center; margin-bottom: 45px;">
        <h2 style="font-size: 2.1rem; font-weight: 800; color: #ffffff;">Why Choose Our Bike Transportation in Amritsar?</h2>
        <p style="color: #94a3b8; margin-top: 10px;">Engineered for zero-damage two-wheeler shipping from Amritsar, Punjab</p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 25px;">
        <div style="background: rgba(255,255,255,0.03); padding: 25px; border-radius: 14px; border: 1px solid rgba(255,255,255,0.08);">
          <div style="font-size: 1.3rem; font-weight: 700; color: #f59e0b; margin-bottom: 12px;">Enclosed Covered Carriers</div>
          <p style="color: #cbd5e1; font-size: 0.92rem; line-height: 1.6;">Weatherproof covered container trucks protecting bikes from heavy weather, highway dust, and sways.</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); padding: 25px; border-radius: 14px; border: 1px solid rgba(255,255,255,0.08);">
          <div style="font-size: 1.3rem; font-weight: 700; color: #10b981; margin-bottom: 12px;">Doorstep Pickup in Amritsar</div>
          <p style="color: #cbd5e1; font-size: 0.92rem; line-height: 1.6;">Free collection from Ranjit Avenue, GT Road, Mall Road, Cantonment area, and Chheharta.</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); padding: 25px; border-radius: 14px; border: 1px solid rgba(255,255,255,0.08);">
          <div style="font-size: 1.3rem; font-weight: 700; color: #3b82f6; margin-bottom: 12px;">Full Transit Insurance</div>
          <p style="color: #cbd5e1; font-size: 0.92rem; line-height: 1.6;">Full transit insurance coverage safeguards your motorcycle value against any unforeseen road hazards.</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); padding: 25px; border-radius: 14px; border: 1px solid rgba(255,255,255,0.08);">
          <div style="font-size: 1.3rem; font-weight: 700; color: #8b5cf6; margin-bottom: 12px;">Heavy-Duty Bubble Wrapping</div>
          <p style="color: #cbd5e1; font-size: 0.92rem; line-height: 1.6;">High-density 80-GSM bubble sheets, corrugated boxes, and foam pads prevent frame scratches.</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); padding: 25px; border-radius: 14px; border: 1px solid rgba(255,255,255,0.08);">
          <div style="font-size: 1.3rem; font-weight: 700; color: #ec4899; margin-bottom: 12px;">IBA & GST Tax Invoices</div>
          <p style="color: #cbd5e1; font-size: 0.92rem; line-height: 1.6;">Official GST bills and consignment notes valid for company relocation reimbursement.</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); padding: 25px; border-radius: 14px; border: 1px solid rgba(255,255,255,0.08);">
          <div style="font-size: 1.3rem; font-weight: 700; color: #06b6d4; margin-bottom: 12px;">Real-Time Tracking</div>
          <p style="color: #cbd5e1; font-size: 0.92rem; line-height: 1.6;">Direct updates via WhatsApp from loading in Amritsar to destination arrival.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- 5. Specialized Vehicle Shifting Services -->
  <section style="background: #0f172a; padding: 60px 0; color: #ffffff;">
    <div class="container">
      <div style="text-align: center; margin-bottom: 40px;">
        <h2 style="font-size: 2rem; font-weight: 800; color: #ffffff;">Specialized Vehicle Shifting Services in Amritsar</h2>
      </div>
      <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px;">
        <div style="background: rgba(255,255,255,0.02); border-radius: 12px; padding: 20px; border: 1px solid rgba(255,255,255,0.05);">
          <h3 style="font-size: 1.15rem; color: #f59e0b; margin-bottom: 8px;">Standard Commuter Bikes</h3>
          <p style="color: #cbd5e1; font-size: 0.88rem;">Safe transport for 100cc-150cc motorcycles with custom handle locking and body wrapping.</p>
        </div>
        <div style="background: rgba(255,255,255,0.02); border-radius: 12px; padding: 20px; border: 1px solid rgba(255,255,255,0.05);">
          <h3 style="font-size: 1.15rem; color: #f59e0b; margin-bottom: 8px;">Premium & Sports Bikes</h3>
          <p style="color: #cbd5e1; font-size: 0.88rem;">Enclosed wooden crate packing for Royal Enfield, KTM, BMW, and sports bikes.</p>
        </div>
        <div style="background: rgba(255,255,255,0.02); border-radius: 12px; padding: 20px; border: 1px solid rgba(255,255,255,0.05);">
          <h3 style="font-size: 1.15rem; color: #f59e0b; margin-bottom: 8px;">Scooters & Mopeds</h3>
          <p style="color: #cbd5e1; font-size: 0.88rem;">Special care for Activa, Access, and Jupiter scooters preventing fiber body damage.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- 6. 7-Layer Safety Packaging Framework -->
  <section style="background: #090d16; padding: 60px 0; color: #ffffff;">
    <div class="container">
      <div style="text-align: center; margin-bottom: 40px;">
        <h2 style="font-size: 2rem; font-weight: 800; color: #ffffff;">7-Layer Safety Packaging Framework</h2>
        <p style="color: #94a3b8;">Maximum protection against shock, dust, and highway vibrations</p>
      </div>
      <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 15px; text-align: center;">
        <div style="background: rgba(245, 158, 11, 0.08); padding: 15px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <div style="font-weight: 700; color: #f59e0b;">Layer 1</div>
          <div style="font-size: 0.85rem; color: #cbd5e1; margin-top: 5px;">Stretch Film Scratch Guard</div>
        </div>
        <div style="background: rgba(245, 158, 11, 0.08); padding: 15px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <div style="font-weight: 700; color: #f59e0b;">Layer 2</div>
          <div style="font-size: 0.85rem; color: #cbd5e1; margin-top: 5px;">80-GSM Bubble Wrap</div>
        </div>
        <div style="background: rgba(245, 158, 11, 0.08); padding: 15px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <div style="font-weight: 700; color: #f59e0b;">Layer 3</div>
          <div style="font-size: 0.85rem; color: #cbd5e1; margin-top: 5px;">Corrugated Sheet Armor</div>
        </div>
        <div style="background: rgba(245, 158, 11, 0.08); padding: 15px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <div style="font-weight: 700; color: #f59e0b;">Layer 4</div>
          <div style="font-size: 0.85rem; color: #cbd5e1; margin-top: 5px;">Foam Edge Protectors</div>
        </div>
      </div>
    </div>
  </section>

  <!-- 7. Origin Pickup Locality Grid -->
  <section style="background: #0f172a; padding: 50px 0; color: #ffffff;">
    <div class="container">
      <h3 style="font-size: 1.3rem; color: #f59e0b; margin-bottom: 20px;">Pickup Coverage in Amritsar & Nearby Areas</h3>
      <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 12px; font-size: 0.9rem;">
        <span style="color: #cbd5e1; background: rgba(255,255,255,0.03); padding: 10px 14px; border-radius: 6px;">Ranjit Avenue Amritsar</span>
        <span style="color: #cbd5e1; background: rgba(255,255,255,0.03); padding: 10px 14px; border-radius: 6px;">GT Road Corridor</span>
        <span style="color: #cbd5e1; background: rgba(255,255,255,0.03); padding: 10px 14px; border-radius: 6px;">Mall Road Area</span>
        <span style="color: #cbd5e1; background: rgba(255,255,255,0.03); padding: 10px 14px; border-radius: 6px;">Chheharta Industrial Area</span>
      </div>
    </div>
  </section>

  <!-- 8. Intercity Route Network Grid -->
  <section style="background: #090d16; padding: 50px 0; color: #ffffff;">
    <div class="container">
      <h3 style="font-size: 1.3rem; color: #f59e0b; margin-bottom: 20px;">Popular Bike Transport Routes from Amritsar</h3>
      <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 12px; font-size: 0.9rem;">
        <a href="<?php echo SITE_URL; ?>/pages/bike-transportation-in-delhi.php" style="color: #cbd5e1; text-decoration: none; background: rgba(255,255,255,0.03); padding: 10px 14px; border-radius: 6px;">Amritsar to Delhi</a>
        <a href="<?php echo SITE_URL; ?>/pages/bike-transportation-in-mumbai.php" style="color: #cbd5e1; text-decoration: none; background: rgba(255,255,255,0.03); padding: 10px 14px; border-radius: 6px;">Amritsar to Mumbai</a>
        <a href="<?php echo SITE_URL; ?>/pages/bike-transportation-in-bangalore.php" style="color: #cbd5e1; text-decoration: none; background: rgba(255,255,255,0.03); padding: 10px 14px; border-radius: 6px;">Amritsar to Bangalore</a>
        <a href="<?php echo SITE_URL; ?>/pages/bike-transportation-in-pune.php" style="color: #cbd5e1; text-decoration: none; background: rgba(255,255,255,0.03); padding: 10px 14px; border-radius: 6px;">Amritsar to Pune</a>
      </div>
    </div>
  </section>

  <!-- 9. IBA Approved GST Billing Documentation -->
  <section style="background: #0f172a; padding: 50px 0; color: #ffffff;">
    <div class="container">
      <h3 style="font-size: 1.3rem; color: #10b981; margin-bottom: 15px;">IBA & GST Compliant Relocation Documentation</h3>
      <p style="color: #cbd5e1; font-size: 0.92rem; line-height: 1.7;">We supply 100% genuine tax invoices, consignment bills (LR copies), vehicle inspection reports, and transit insurance certificates for claim submissions.</p>
    </div>
  </section>

  <!-- 10. Detailed FAQs & JSON-LD Schema -->
  <section style="background: #090d16; padding: 60px 0; color: #ffffff;">
    <div class="container">
      <div style="text-align: center; margin-bottom: 40px;">
        <h2 style="font-size: 2rem; font-weight: 800; color: #ffffff;">Frequently Asked Questions (FAQs)</h2>
      </div>

      <div style="max-width: 900px; margin: 0 auto; display: grid; gap: 15px;">
        <div style="background: rgba(255,255,255,0.03); padding: 20px; border-radius: 10px; border: 1px solid rgba(255,255,255,0.06);">
          <h4 style="color: #f59e0b; margin-bottom: 8px; font-size: 1.05rem;">How much does bike transportation in Amritsar cost?</h4>
          <p style="color: #cbd5e1; font-size: 0.9rem;">Charges depend on vehicle model and destination distance. Typically ranges between ₹2,200 and ₹6,500.</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); padding: 20px; border-radius: 10px; border: 1px solid rgba(255,255,255,0.06);">
          <h4 style="color: #f59e0b; margin-bottom: 8px; font-size: 1.05rem;">What documents are required for bike transport from Amritsar?</h4>
          <p style="color: #cbd5e1; font-size: 0.9rem;">You need a copy of the Vehicle RC, Insurance policy, and owner's photo ID proof.</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); padding: 20px; border-radius: 10px; border: 1px solid rgba(255,255,255,0.06);">
          <h4 style="color: #f59e0b; margin-bottom: 8px; font-size: 1.05rem;">Is doorstep pickup available across Amritsar city?</h4>
          <p style="color: #cbd5e1; font-size: 0.9rem;">Yes, we provide door-to-door pickup across Ranjit Avenue, GT Road, Mall Road, Cantonment, and Chheharta.</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); padding: 20px; border-radius: 10px; border: 1px solid rgba(255,255,255,0.06);">
          <h4 style="color: #f59e0b; margin-bottom: 8px; font-size: 1.05rem;">Is transit insurance included during bike transport from Amritsar?</h4>
          <p style="color: #cbd5e1; font-size: 0.9rem;">Yes, full transit insurance coverage is issued protecting your two-wheeler against any road transit risks.</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); padding: 20px; border-radius: 10px; border: 1px solid rgba(255,255,255,0.06);">
          <h4 style="color: #f59e0b; margin-bottom: 8px; font-size: 1.05rem;">How long does bike shifting take from Amritsar to Delhi or Mumbai?</h4>
          <p style="color: #cbd5e1; font-size: 0.9rem;">Transit to Delhi takes 24–48 hours, while interstate transit to Mumbai or South India takes 4–6 days.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- 11. CTA Footer -->
  <section style="background: linear-gradient(135deg, #1e1b4b 0%, #0f172a 100%); padding: 50px 0; text-align: center; color: #ffffff;">
    <div class="container">
      <h2 style="font-size: 2.2rem; font-weight: 800; margin-bottom: 15px;">Ready to Transport Your Bike from Amritsar?</h2>
      <p style="color: #cbd5e1; margin-bottom: 25px;">Contact our Amritsar two-wheeler shifting experts today for a free estimate.</p>
      <a href="tel:<?php echo SITE_PHONE_RAW; ?>" style="display: inline-block; padding: 15px 35px; background: #f59e0b; color: #000; border-radius: 50px; font-weight: 800; text-decoration: none; font-size: 1.1rem;">Call <?php echo SITE_PHONE; ?> Now</a>
    </div>
  </section>

</main>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "How much does bike transportation in Amritsar cost?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Charges depend on vehicle model and destination distance. Typically ranges between ₹2,200 and ₹6,500."
      }
    },
    {
      "@type": "Question",
      "name": "What documents are required for bike transport from Amritsar?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "You need a copy of the Vehicle RC, Insurance policy, and owner's photo ID proof."
      }
    },
    {
      "@type": "Question",
      "name": "Is doorstep pickup available across Amritsar city?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, we provide door-to-door pickup across Ranjit Avenue, GT Road, Mall Road, Cantonment, and Chheharta."
      }
    },
    {
      "@type": "Question",
      "name": "Is transit insurance included during bike transport from Amritsar?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, full transit insurance coverage is issued protecting your two-wheeler against any road transit risks."
      }
    },
    {
      "@type": "Question",
      "name": "How long does bike shifting take from Amritsar to Delhi or Mumbai?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Transit to Delhi takes 24–48 hours, while interstate transit to Mumbai or South India takes 4–6 days."
      }
    }
  ]
}
</script>

<script>
function sendHeroWhatsAppLead(event, form) {
  event.preventDefault();
  var name = form.querySelector('[name="name"]').value;
  var phone = form.querySelector('[name="phone"]').value;
  var moveFrom = form.querySelector('[name="move_from"]').value;
  var moveTo = form.querySelector('[name="move_to"]').value;
  
  var message = "Hello Shree Ashirwad Packers,\n\nI would like a Bike Transport Quote for Amritsar:\n- Name: " + name + "\n- Phone: " + phone + "\n- Moving From: " + moveFrom + "\n- Moving To: " + moveTo;
  
  var whatsappUrl = "https://api.whatsapp.com/send?phone=918409531615&text=" + encodeURIComponent(message);
  window.open(whatsappUrl, '_blank');
}
</script>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>

