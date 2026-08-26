<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "Bike Transportation in Paradip | Secure Two-Wheeler Shifting Port Zone";
$page_desc = "Professional bike transportation in Paradip, Odisha. Secure door-to-door two-wheeler shifting with 4-layer salinity, coal-dust, and cyclone-proof packaging.";
$page_keywords = "bike transportation in paradip, best bike transportation in paradip, affordable bike transportation in paradip, packers and movers, packers and movers in ranchi, top bike transportation in paradip company, household shifting bike transportation in paradip, doorstep bike transportation in paradip, verified bike transportation in paradip services, shree ashirwad bike transportation in paradip";
$canonical_url = "https://shreeashirwadpackersandmovers.com/pages/bike-transportation-in-paradip.php";

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
            BIKE TRANSPORTATION PARADIP PORT RELOCATION SPECIALISTS
          </span>
          <h1 style="font-size: 2.7rem; font-weight: 800; line-height: 1.2; margin-bottom: 20px; color: #ffffff;">
            Professional <span style="color: #f59e0b;">Bike Transportation in Paradip</span>
          </h1>
          <p style="font-size: 1.12rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 25px;">
            Premier bike relocation across Paradip Port area, Jagatsinghpur, and national corridors. Specialized 7-layer anti-salinity stretch wrapping, closed container shipping, and full transit insurance.
          </p>

          <div style="display: flex; gap: 15px; flex-wrap: wrap; margin-bottom: 30px;">
            <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Now" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
              <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call Now: <?php echo SITE_PHONE; ?>
            </a>
            <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20a%20shifting%20quote%20for%20Paradip." title="Chat on WhatsApp" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
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
          <h2 style="font-size: 1.4rem; color: #ffffff; margin-bottom: 8px; font-weight: 700; text-align: center;">Get Paradip Shifting Quote</h2>
          <p style="font-size: 0.85rem; color: #94a3b8; text-align: center; margin-bottom: 20px;">Receive transparent cost estimation on WhatsApp in 2 minutes</p>

          <form action="#" method="POST" onsubmit="sendHeroWhatsAppLead(event, this);">
            <div style="margin-bottom: 14px;">
              <input type="text" name="name" class="form-control" placeholder="Your Full Name" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="margin-bottom: 14px;">
              <input type="tel" name="phone" class="form-control" placeholder="10-Digit Phone Number" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 10px; margin-bottom: 14px;">
              <input type="text" name="move_from" class="form-control" value="Paradip" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
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

  <!-- Key Stats Counter Bar -->
  <section style="background: #1c2541; padding: 40px 0; border-bottom: 1px solid rgba(255,255,255,0.1);">
    <div class="container">
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 20px; text-align: center;">
        <div style="background: rgba(255,255,255,0.03); padding: 20px; border-radius: 12px; border: 1px solid rgba(245,158,11,0.2);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b;">6,400+</div>
          <div style="color: #cbd5e1; font-size: 0.9rem; margin-top: 5px;">Bikes Transported from Paradip</div>
        </div>
        <div style="background: rgba(255,255,255,0.03); padding: 20px; border-radius: 12px; border: 1px solid rgba(245,158,11,0.2);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b;">100%</div>
          <div style="color: #cbd5e1; font-size: 0.9rem; margin-top: 5px;">Anti-Corrosion Moisture Seal</div>
        </div>
        <div style="background: rgba(255,255,255,0.03); padding: 20px; border-radius: 12px; border: 1px solid rgba(245,158,11,0.2);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b;">Zero</div>
          <div style="color: #cbd5e1; font-size: 0.9rem; margin-top: 5px;">Damage Record in Transit</div>
        </div>
        <div style="background: rgba(255,255,255,0.03); padding: 20px; border-radius: 12px; border: 1px solid rgba(245,158,11,0.2);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b;">IBA & GST</div>
          <div style="color: #cbd5e1; font-size: 0.9rem; margin-top: 5px;">Approved Billing Documentation</div>
        </div>
      </div>
    </div>
  </section>

  <!-- 6-Card Feature Grid -->
  <section style="background: #0b132b; padding: 60px 0; color: #fff;">
    <div class="container">
      <div style="text-align: center; margin-bottom: 40px;">
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #fff;">Why Choose Our <span style="color: #f59e0b;">Paradip Bike Shifting</span></h2>
        <p style="color: #94a3b8; max-width: 650px; margin: 10px auto 0;">Custom logistics for Paradip's maritime industrial hub environment.</p>
      </div>
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 25px;">
        <div style="background: #1c2541; padding: 25px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.08);">
          <i class="fas fa-shield-alt" style="font-size: 2rem; color: #f59e0b; margin-bottom: 15px;"></i>
          <h3 style="font-size: 1.2rem; color: #fff; margin-bottom: 10px;">Salt-Air Moisture Shielding</h3>
          <p style="color: #cbd5e1; font-size: 0.92rem; line-height: 1.6;">Double VCI anti-rust stretch film prevents chrome oxidation caused by sea air.</p>
        </div>
        <div style="background: #1c2541; padding: 25px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.08);">
          <i class="fas fa-truck-loading" style="font-size: 2rem; color: #f59e0b; margin-bottom: 15px;"></i>
          <h3 style="font-size: 1.2rem; color: #fff; margin-bottom: 10px;">Closed Hydraulic Carriers</h3>
          <p style="color: #cbd5e1; font-size: 0.92rem; line-height: 1.6;">Weatherproof covered car-and-bike transporters safeguard against industrial soot.</p>
        </div>
        <div style="background: #1c2541; padding: 25px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.08);">
          <i class="fas fa-box-open" style="font-size: 2rem; color: #f59e0b; margin-bottom: 15px;"></i>
          <h3 style="font-size: 1.2rem; color: #fff; margin-bottom: 10px;">7-Layer Multi-Guard Packing</h3>
          <p style="color: #cbd5e1; font-size: 0.92rem; line-height: 1.6;">HDPE bubble wrap, corrugated sheets, and foam corner pads ensure scratch-free transit.</p>
        </div>
        <div style="background: #1c2541; padding: 25px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.08);">
          <i class="fas fa-map-marked-alt" style="font-size: 2rem; color: #f59e0b; margin-bottom: 15px;"></i>
          <h3 style="font-size: 1.2rem; color: #fff; margin-bottom: 10px;">Port Township Doorstep Pickup</h3>
          <p style="color: #cbd5e1; font-size: 0.92rem; line-height: 1.6;">Free pickup from PPT Colony, Madhuban, Atharabanki, and Badapadia areas.</p>
        </div>
        <div style="background: #1c2541; padding: 25px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.08);">
          <i class="fas fa-file-invoice" style="font-size: 2rem; color: #f59e0b; margin-bottom: 15px;"></i>
          <h3 style="font-size: 1.2rem; color: #fff; margin-bottom: 10px;">IBA & Corporate Bills</h3>
          <p style="color: #cbd5e1; font-size: 0.92rem; line-height: 1.6;">Complete GST invoices and IBA bills for port authority and PSU employee reimbursement.</p>
        </div>
        <div style="background: #1c2541; padding: 25px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.08);">
          <i class="fas fa-headset" style="font-size: 2rem; color: #f59e0b; margin-bottom: 15px;"></i>
          <h3 style="font-size: 1.2rem; color: #fff; margin-bottom: 10px;">Dedicated Transit Manager</h3>
          <p style="color: #cbd5e1; font-size: 0.92rem; line-height: 1.6;">Personal tracking updates and 24x7 WhatsApp support throughout the journey.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Specialized Services Breakdown -->
  <section style="background: #1c2541; padding: 60px 0; color: #fff;">
    <div class="container">
      <div style="text-align: center; margin-bottom: 40px;">
        <h2 style="font-size: 2rem; font-weight: 800;">Specialized Two-Wheeler Shifting Options</h2>
      </div>
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 20px;">
        <div style="background: rgba(255,255,255,0.04); padding: 20px; border-radius: 10px;">
          <h4 style="color: #f59e0b; font-size: 1.1rem; margin-bottom: 8px;">Standard Commuter Bikes</h4>
          <p style="font-size: 0.88rem; color: #cbd5e1;">Cost-effective shared container transport with double-layer protective wrapping.</p>
        </div>
        <div style="background: rgba(255,255,255,0.04); padding: 20px; border-radius: 10px;">
          <h4 style="color: #f59e0b; font-size: 1.1rem; margin-bottom: 8px;">Sports & Premium Motorcycles</h4>
          <p style="font-size: 0.88rem; color: #cbd5e1;">Dedicated wheel locking clamps, soft harness straps, and wooden crate casing.</p>
        </div>
        <div style="background: rgba(255,255,255,0.04); padding: 20px; border-radius: 10px;">
          <h4 style="color: #f59e0b; font-size: 1.1rem; margin-bottom: 8px;">Scooters & EV Two-Wheelers</h4>
          <p style="font-size: 0.88rem; color: #cbd5e1;">Special battery insulation and underbody protection for electric & automatic scooters.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- 7-Layer Packaging Framework -->
  <section style="background: #0b132b; padding: 60px 0; color: #fff;">
    <div class="container">
      <div style="text-align: center; margin-bottom: 30px;">
        <h2 style="font-size: 2rem; font-weight: 800;">Our 7-Layer Safety Packaging Standard</h2>
      </div>
      <div style="max-width: 800px; margin: 0 auto; display: grid; gap: 12px;">
        <div style="background: #1c2541; padding: 14px 20px; border-radius: 8px; display: flex; align-items: center; gap: 15px;">
          <span style="background: #f59e0b; color: #000; font-weight: 800; padding: 4px 10px; border-radius: 50%;">1</span>
          <span>VCI Anti-Corrosion Film (Protection against sea-salt air oxidation)</span>
        </div>
        <div style="background: #1c2541; padding: 14px 20px; border-radius: 8px; display: flex; align-items: center; gap: 15px;">
          <span style="background: #f59e0b; color: #000; font-weight: 800; padding: 4px 10px; border-radius: 50%;">2</span>
          <span>80-GSM Heavy Bubble Wrap for Impact Cushioning</span>
        </div>
        <div style="background: #1c2541; padding: 14px 20px; border-radius: 8px; display: flex; align-items: center; gap: 15px;">
          <span style="background: #f59e0b; color: #000; font-weight: 800; padding: 4px 10px; border-radius: 50%;">3</span>
          <span>High-Density Foam Guard for Fuel Tank, Mirrors & Silencer</span>
        </div>
        <div style="background: #1c2541; padding: 14px 20px; border-radius: 8px; display: flex; align-items: center; gap: 15px;">
          <span style="background: #f59e0b; color: #000; font-weight: 800; padding: 4px 10px; border-radius: 50%;">4</span>
          <span>Corrugated Cardboard Sheet Encapsulation</span>
        </div>
        <div style="background: #1c2541; padding: 14px 20px; border-radius: 8px; display: flex; align-items: center; gap: 15px;">
          <span style="background: #f59e0b; color: #000; font-weight: 800; padding: 4px 10px; border-radius: 50%;">5</span>
          <span>Waterproof Polyethylene Stretch Outer Wrapping</span>
        </div>
        <div style="background: #1c2541; padding: 14px 20px; border-radius: 8px; display: flex; align-items: center; gap: 15px;">
          <span style="background: #f59e0b; color: #000; font-weight: 800; padding: 4px 10px; border-radius: 50%;">6</span>
          <span>Heavy-Duty Nylon Belt Strapping & Container Anchoring</span>
        </div>
        <div style="background: #1c2541; padding: 14px 20px; border-radius: 8px; display: flex; align-items: center; gap: 15px;">
          <span style="background: #f59e0b; color: #000; font-weight: 800; padding: 4px 10px; border-radius: 50%;">7</span>
          <span>Custom Wooden Crate Enclosure (Optional for Superbikes)</span>
        </div>
      </div>
    </div>
  </section>

  <!-- FAQs with Schema -->
  <section style="background: #1c2541; padding: 60px 0; color: #fff;">
    <div class="container" style="max-width: 900px;">
      <h2 style="text-align: center; font-size: 2rem; font-weight: 800; margin-bottom: 30px;">Frequently Asked Questions (Paradip)</h2>
      <div style="display: grid; gap: 15px;">
        <div style="background: #0b132b; padding: 20px; border-radius: 10px;">
          <h4 style="color: #f59e0b; margin-bottom: 8px;">What is the cost of bike transportation from Paradip?</h4>
          <p style="color: #cbd5e1; font-size: 0.9rem;">Bike shifting charges from Paradip typically range from ₹2,500 to ₹7,500 depending on destination distance and bike engine capacity.</p>
        </div>
        <div style="background: #0b132b; padding: 20px; border-radius: 10px;">
          <h4 style="color: #f59e0b; margin-bottom: 8px;">How do you protect bikes against salt air corrosion in Paradip port zone?</h4>
          <p style="color: #cbd5e1; font-size: 0.9rem;">We use specialized VCI anti-corrosion stretch film layer combined with heavy 80-GSM bubble wrap before shipping in enclosed trucks.</p>
        </div>
        <div style="background: #0b132b; padding: 20px; border-radius: 10px;">
          <h4 style="color: #f59e0b; margin-bottom: 8px;">Do you provide door pickup in Paradip township areas?</h4>
          <p style="color: #cbd5e1; font-size: 0.9rem;">Yes, we offer doorstep pickup across PPT Colony, Madhuban, Atharabanki, and all surrounding areas of Jagatsinghpur district.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA Footer -->
  <section style="background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); padding: 50px 0; text-align: center; color: #fff;">
    <div class="container">
      <h2 style="font-size: 2.2rem; font-weight: 800; margin-bottom: 15px;">Book Your Paradip Bike Shifting Today</h2>
      <p style="font-size: 1.1rem; max-width: 600px; margin: 0 auto 25px; color: #ffe4e6;">Safe, quick, and fully insured two-wheeler transport services.</p>
      <a href="tel:<?php echo SITE_PHONE_RAW; ?>" style="display: inline-block; padding: 15px 35px; background: #fff; color: #be123c; font-weight: 800; border-radius: 50px; text-decoration: none; font-size: 1.1rem; box-shadow: 0 5px 20px rgba(0,0,0,0.2);">
        <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call <?php echo SITE_PHONE; ?>
      </a>
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
      "name": "What is the cost of bike transportation from Paradip?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Bike shifting charges from Paradip typically range from ₹2,500 to ₹7,500 depending on destination distance and bike engine capacity."
      }
    },
    {
      "@type": "Question",
      "name": "How do you protect bikes against salt air corrosion in Paradip port zone?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "We use specialized VCI anti-corrosion stretch film layer combined with heavy 80-GSM bubble wrap before shipping in enclosed trucks."
      }
    },
    {
      "@type": "Question",
      "name": "Do you provide door pickup in Paradip township areas?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, we offer doorstep pickup across PPT Colony, Madhuban, Atharabanki, and all surrounding areas of Jagatsinghpur district."
      }
    }
  ]
}
</script>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
