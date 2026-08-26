<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "Bike Transportation in Thangadh | Insured Two-Wheeler Shifting Gujarat";
$page_desc = "Professional two-wheeler relocation in Thangadh, Gujarat. Insured doorstep bike transport with 4-layer packaging to guard against ceramic silica dust, extreme heat, and highway vibrations.";
$page_keywords = "bike transportation in thangadh, bike movers thangadh, two wheeler transport thangadh surendranagar, motorcycle shifting thangadh, bike parcel service thangadh, bike transport charges thangadh";
$canonical_url = "https://shreeashirwadpackersandmovers.com/pages/bike-transportation-in-thangadh.php";

require_once __DIR__ . '/../includes/header.php';
?>

<main class="site-main">

  <!-- 1. Visual Breadcrumb Navigation Bar -->
  <div class="breadcrumb-wrapper" style="background: #0f172a; padding: 14px 0; border-bottom: 1px solid rgba(255,255,255,0.08);">
    <div class="container">
      <div class="breadcrumb-list" style="display: flex; gap: 8px; font-size: 0.88rem; color: #94a3b8; align-items: center;">
        <span class="breadcrumb-item"><a href="<?php echo SITE_URL; ?>" title="Home" style="color: #cbd5e1; text-decoration: none;">Home</a></span>
        <span class="breadcrumb-separator">/</span>
        <span class="breadcrumb-item"><a href="<?php echo SITE_URL; ?>/pages/bike-transportation-in-ahmedabad.php" style="color: #cbd5e1; text-decoration: none;">Gujarat</a></span>
        <span class="breadcrumb-separator">/</span>
        <span class="breadcrumb-item active" style="color: #f59e0b; font-weight: 600;">Thangadh Bike Transport</span>
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
            BIKE TRANSPORTATION THANGADH RELOCATION SPECIALISTS
          </span>
          <h1 style="font-size: 2.5rem; font-weight: 800; line-height: 1.2; margin-bottom: 20px; color: #ffffff;">
            Professional <span style="color: #f59e0b;">Bike Transportation in Thangadh</span>
          </h1>
          <p style="font-size: 1.05rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 25px;">
            Insured two-wheeler shifting in Thangadh (Surendranagar district, Gujarat). Doorstep pickup, multi-layer shockproof packing, hydraulic ramp loading, and zero-scratch transit across India.
          </p>

          <div style="display: flex; gap: 15px; flex-wrap: wrap; margin-bottom: 30px;">
            <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Now" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
              <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call Now: <?php echo SITE_PHONE; ?>
            </a>
            <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20a%20bike%20shifting%20quote%20from%20Thangadh." title="Chat on WhatsApp" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
              <i class="fab fa-whatsapp" style="margin-right: 8px;"></i> Chat on WhatsApp
            </a>
          </div>

          <div style="display: flex; gap: 20px; font-size: 0.9rem; color: #94a3b8;">
            <span><strong style="color: #f59e0b;">100% Insured</strong> Shifting</span>
            <span><strong style="color: #f59e0b;">7-Layer</strong> Bubble Protection</span>
            <span><strong style="color: #f59e0b;">Door-to-Door</strong> Express Service</span>
          </div>
        </div>

        <!-- Hero Lead Form Column -->
        <div class="hero-form-card" style="background: rgba(255, 255, 255, 0.05); backdrop-filter: blur(10px); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 16px; padding: 30px; box-shadow: 0 15px 35px rgba(0,0,0,0.4);">
          <h2 style="font-size: 1.4rem; color: #ffffff; margin-bottom: 8px; font-weight: 700; text-align: center;">Get Thangadh Bike Quote</h2>
          <p style="font-size: 0.85rem; color: #94a3b8; text-align: center; margin-bottom: 20px;">Receive instant cost estimate on WhatsApp in 2 minutes</p>

          <form action="#" method="POST" onsubmit="sendHeroWhatsAppLead(event, this);">
            <div style="margin-bottom: 14px;">
              <input type="text" name="name" class="form-control" placeholder="Your Full Name" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="margin-bottom: 14px;">
              <input type="tel" name="phone" class="form-control" placeholder="10-Digit Phone Number" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 10px; margin-bottom: 14px;">
              <input type="text" name="move_from" class="form-control" value="Thangadh" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
              <input type="text" name="move_to" class="form-control" placeholder="Destination City" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <button type="submit" style="width: 100%; padding: 14px; background: linear-gradient(135deg, #d32f2f 0%, #f59e0b 100%); color: #ffffff; border: none; border-radius: 50px; font-weight: 700; font-size: 1rem; cursor: pointer;">
              Get Free Instant Estimate &rarr;
            </button>
          </form>
        </div>

      </div>
    </div>
  </section>

  <!-- 3. Key Stats Counter Bar -->
  <section style="background: #0f172a; padding: 35px 0; border-bottom: 1px solid rgba(255,255,255,0.08);">
    <div class="container">
      <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 20px; text-align: center;">
        <div style="padding: 15px; background: rgba(255,255,255,0.03); border-radius: 12px; border: 1px solid rgba(255,255,255,0.06);">
          <div style="font-size: 2rem; font-weight: 800; color: #f59e0b;">2,100+</div>
          <div style="font-size: 0.88rem; color: #94a3b8; margin-top: 4px;">Bikes Transported</div>
        </div>
        <div style="padding: 15px; background: rgba(255,255,255,0.03); border-radius: 12px; border: 1px solid rgba(255,255,255,0.06);">
          <div style="font-size: 2rem; font-weight: 800; color: #10b981;">100%</div>
          <div style="font-size: 0.88rem; color: #94a3b8; margin-top: 4px;">Transit Safety Record</div>
        </div>
        <div style="padding: 15px; background: rgba(255,255,255,0.03); border-radius: 12px; border: 1px solid rgba(255,255,255,0.06);">
          <div style="font-size: 2rem; font-weight: 800; color: #3b82f6;">4-Layer</div>
          <div style="font-size: 0.88rem; color: #94a3b8; margin-top: 4px;">Armor Shield Packing</div>
        </div>
        <div style="padding: 15px; background: rgba(255,255,255,0.03); border-radius: 12px; border: 1px solid rgba(255,255,255,0.06);">
          <div style="font-size: 2rem; font-weight: 800; color: #ec4899;">IBA/GST</div>
          <div style="font-size: 0.88rem; color: #94a3b8; margin-top: 4px;">Valid Bill Claims</div>
        </div>
      </div>
    </div>
  </section>

  <!-- 4. 6-Card Feature Grid -->
  <section style="background: #090d16; padding: 60px 0; color: #ffffff;">
    <div class="container">
      <div style="text-align: center; margin-bottom: 45px;">
        <h2 style="font-size: 2.1rem; font-weight: 800; color: #ffffff;">Why Choose Our Bike Parcel Service in Thangadh?</h2>
        <p style="color: #94a3b8; margin-top: 10px;">Engineered for zero-damage two-wheeler shipping from Thangadh, Gujarat</p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 25px;">
        <div style="background: rgba(255,255,255,0.03); padding: 25px; border-radius: 14px; border: 1px solid rgba(255,255,255,0.08);">
          <div style="font-size: 1.5rem; color: #f59e0b; margin-bottom: 12px;"><i class="fas fa-truck-container"></i> Closed Hydraulic Carriers</div>
          <p style="color: #cbd5e1; font-size: 0.92rem; line-height: 1.6;">Weather-proof enclosed car and bike carriers protecting vehicles against dust, rain, and highway flying debris.</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); padding: 25px; border-radius: 14px; border: 1px solid rgba(255,255,255,0.08);">
          <div style="font-size: 1.5rem; color: #10b981; margin-bottom: 12px;"><i class="fas fa-map-marker-alt"></i> Doorstep Pickup in Thangadh</div>
          <p style="color: #cbd5e1; font-size: 0.92rem; line-height: 1.6;">Our trained crew picks up your motorcycle directly from your residence or office anywhere in Thangadh region.</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); padding: 25px; border-radius: 14px; border: 1px solid rgba(255,255,255,0.08);">
          <div style="font-size: 1.5rem; color: #3b82f6; margin-bottom: 12px;"><i class="fas fa-shield-alt"></i> Complete Transit Insurance</div>
          <p style="color: #cbd5e1; font-size: 0.92rem; line-height: 1.6;">Full transit insurance coverage for peace of mind against unforeseen highway accidents or natural hazards.</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); padding: 25px; border-radius: 14px; border: 1px solid rgba(255,255,255,0.08);">
          <div style="font-size: 1.5rem; color: #8b5cf6; margin-bottom: 12px;"><i class="fas fa-box"></i> Heavy-Duty Bubble Wrapping</div>
          <p style="color: #cbd5e1; font-size: 0.92rem; line-height: 1.6;">High-density 80-GSM bubble sheets, corrugated boxes, and foam pads prevent frame scratches and mirror cracks.</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); padding: 25px; border-radius: 14px; border: 1px solid rgba(255,255,255,0.08);">
          <div style="font-size: 1.5rem; color: #ec4899; margin-bottom: 12px;"><i class="fas fa-receipt"></i> IBA & GST Tax Invoices</div>
          <p style="color: #cbd5e1; font-size: 0.92rem; line-height: 1.6;">Official GST bills and consignment notes compatible with company employee relocation allowance claims.</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); padding: 25px; border-radius: 14px; border: 1px solid rgba(255,255,255,0.08);">
          <div style="font-size: 1.5rem; color: #06b6d4; margin-bottom: 12px;"><i class="fas fa-headset"></i> Dedicated Tracking Updates</div>
          <p style="color: #cbd5e1; font-size: 0.92rem; line-height: 1.6;">Real-time status updates and WhatsApp tracking from pickup at Thangadh to final delivery at your destination.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- 5. Specialized Services Breakdown -->
  <section style="background: #0f172a; padding: 60px 0; color: #ffffff;">
    <div class="container">
      <div style="text-align: center; margin-bottom: 40px;">
        <h2 style="font-size: 2rem; font-weight: 800; color: #ffffff;">Specialized Vehicle Shifting Services in Thangadh</h2>
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
      <h3 style="font-size: 1.3rem; color: #f59e0b; margin-bottom: 20px;">Pickup Coverage in Thangadh & Nearby Areas</h3>
      <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 12px; font-size: 0.9rem;">
        <a href="#" style="color: #cbd5e1; text-decoration: none; background: rgba(255,255,255,0.03); padding: 10px 14px; border-radius: 6px;">Thangadh Industrial Area</a>
        <a href="#" style="color: #cbd5e1; text-decoration: none; background: rgba(255,255,255,0.03); padding: 10px 14px; border-radius: 6px;">Thangadh Railway Station</a>
        <a href="#" style="color: #cbd5e1; text-decoration: none; background: rgba(255,255,255,0.03); padding: 10px 14px; border-radius: 6px;">Surendranagar Road Junction</a>
        <a href="#" style="color: #cbd5e1; text-decoration: none; background: rgba(255,255,255,0.03); padding: 10px 14px; border-radius: 6px;">Ceramic Zone Belt</a>
      </div>
    </div>
  </section>

  <!-- 8. Intercity Route Network Grid -->
  <section style="background: #090d16; padding: 50px 0; color: #ffffff;">
    <div class="container">
      <h3 style="font-size: 1.3rem; color: #f59e0b; margin-bottom: 20px;">Popular Bike Transport Routes from Thangadh</h3>
      <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 12px; font-size: 0.9rem;">
        <a href="<?php echo SITE_URL; ?>/pages/bike-transportation-in-ahmedabad.php" style="color: #cbd5e1; text-decoration: none; background: rgba(255,255,255,0.03); padding: 10px 14px; border-radius: 6px;">Thangadh to Ahmedabad</a>
        <a href="<?php echo SITE_URL; ?>/pages/bike-transportation-in-rajkot.php" style="color: #cbd5e1; text-decoration: none; background: rgba(255,255,255,0.03); padding: 10px 14px; border-radius: 6px;">Thangadh to Rajkot</a>
        <a href="<?php echo SITE_URL; ?>/pages/bike-transportation-in-surat.php" style="color: #cbd5e1; text-decoration: none; background: rgba(255,255,255,0.03); padding: 10px 14px; border-radius: 6px;">Thangadh to Surat</a>
        <a href="<?php echo SITE_URL; ?>/pages/bike-transportation-in-vadodara.php" style="color: #cbd5e1; text-decoration: none; background: rgba(255,255,255,0.03); padding: 10px 14px; border-radius: 6px;">Thangadh to Vadodara</a>
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
          <h4 style="color: #f59e0b; margin-bottom: 8px; font-size: 1.05rem;">How much does bike transportation in Thangadh cost?</h4>
          <p style="color: #cbd5e1; font-size: 0.9rem;">Charges depend on vehicle engine size and distance. Typically ranges between ₹1,800 and ₹5,800 depending on destination.</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); padding: 20px; border-radius: 10px; border: 1px solid rgba(255,255,255,0.06);">
          <h4 style="color: #f59e0b; margin-bottom: 8px; font-size: 1.05rem;">What documents are required for bike transport from Thangadh?</h4>
          <p style="color: #cbd5e1; font-size: 0.9rem;">You need a copy of the Vehicle RC, Insurance policy, and ID proof of the owner.</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); padding: 20px; border-radius: 10px; border: 1px solid rgba(255,255,255,0.06);">
          <h4 style="color: #f59e0b; margin-bottom: 8px; font-size: 1.05rem;">Is doorstep pickup available in Thangadh?</h4>
          <p style="color: #cbd5e1; font-size: 0.9rem;">Yes, we provide door-to-door pickup and delivery across Thangadh and Surendranagar district.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- 11. CTA Footer -->
  <section style="background: linear-gradient(135deg, #1e1b4b 0%, #0f172a 100%); padding: 50px 0; text-align: center; color: #ffffff;">
    <div class="container">
      <h2 style="font-size: 2.2rem; font-weight: 800; margin-bottom: 15px;">Ready to Transport Your Bike from Thangadh?</h2>
      <p style="color: #cbd5e1; margin-bottom: 25px;">Contact our Thangadh two-wheeler shifting experts today for a free estimate.</p>
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
      "name": "How much does bike transportation in Thangadh cost?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Charges depend on vehicle engine size and distance. Typically ranges between ₹1,800 and ₹5,800 depending on destination."
      }
    },
    {
      "@type": "Question",
      "name": "What documents are required for bike transport from Thangadh?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "You need a copy of the Vehicle RC, Insurance policy, and ID proof of the owner."
      }
    },
    {
      "@type": "Question",
      "name": "Is doorstep pickup available in Thangadh?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, we provide door-to-door pickup and delivery across Thangadh and Surendranagar district."
      }
    }
  ]
}
</script>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
