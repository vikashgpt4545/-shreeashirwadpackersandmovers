<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "Car Transportation in Kodungallur | Enclosed & Open Carriers";
$page_desc = "Safe and insured car transportation in kodungallur by Shree Ashirwad Packers and Movers. Professional vehicle shifting services along NH66 Kerala coastal corridor with doorstep pickup, transit insurance & instant quotes.";
$page_keywords = "car transportation in kodungallur, car transport service, vehicle shifting services, car relocation services, car delivery quotes, enclosed auto transport services, car transport thrissur kerala";
$canonical_url = "https://shreeashirwadpackersandmovers.com/pages/car-transportation-in-kodungallur.php";

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
            KODUNGALLUR &amp; THRISSUR CAR RELOCATION SPECIALISTS
          </span>
          <h1 style="font-size: 2.5rem; font-weight: 800; line-height: 1.2; margin-bottom: 20px; color: #ffffff;">
            Professional <span style="color: #f59e0b;">Car Transportation in Kodungallur</span>
          </h1>
          <p style="font-size: 1.05rem; color: #cbd5e1; line-height: 1.7; margin-bottom: 25px;">
            Shree Ashirwad Packers and Movers provides top-rated <strong>car transportation in kodungallur</strong> and across Thrissur district. Operating via National Highway 66, our reliable <strong>car transport service</strong> utilizes enclosed auto transport carriers and specialized hydraulics to deliver seamless, damage-free vehicle delivery across Kerala and pan-India.
          </p>

          <div style="display: flex; gap: 15px; flex-wrap: wrap; margin-bottom: 30px;">
            <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Now" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
              <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call Now: <?php echo SITE_PHONE; ?>
            </a>
            <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20a%20car%20transport%20quote%20for%20Kodungallur." title="Chat on WhatsApp" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
              <i class="fab fa-whatsapp" style="margin-right: 8px;"></i> Chat on WhatsApp
            </a>
          </div>

          <div style="display: flex; gap: 20px; font-size: 0.9rem; color: #94a3b8; flex-wrap: wrap;">
            <span><strong style="color: #f59e0b;">100% Insured</strong> Transport</span>
            <span><strong style="color: #f59e0b;">NH66 Coastal</strong> Express Fleet</span>
            <span><strong style="color: #f59e0b;">Door-to-Door</strong> Pickup</span>
          </div>
        </div>

        <!-- Hero Lead Form Column -->
        <div class="hero-form-card" style="background: rgba(255, 255, 255, 0.05); backdrop-filter: blur(10px); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 16px; padding: 30px; box-shadow: 0 15px 35px rgba(0,0,0,0.4);">
          <h2 style="font-size: 1.4rem; color: #ffffff; margin-bottom: 8px; font-weight: 700; text-align: center;">Get Kodungallur Car Quote</h2>
          <p style="font-size: 0.85rem; color: #94a3b8; text-align: center; margin-bottom: 20px;">Receive instant <strong>car delivery quotes</strong> on WhatsApp</p>

          <form action="#" method="POST" onsubmit="sendHeroWhatsAppLead(event, this);">
            <div style="margin-bottom: 14px;">
              <input type="text" name="name" class="form-control" placeholder="Your Full Name" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="margin-bottom: 14px;">
              <input type="tel" name="phone" class="form-control" placeholder="10-Digit Phone Number" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 10px; margin-bottom: 14px;">
              <input type="text" name="move_from" class="form-control" value="Kodungallur" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
              <input type="text" name="move_to" class="form-control" placeholder="Destination City" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <button type="submit" style="width: 100%; padding: 14px; background: linear-gradient(135deg, #d32f2f 0%, #f59e0b 100%); color: #ffffff; border: none; border-radius: 50px; font-weight: 700; font-size: 1rem; cursor: pointer;">
              Get Instant Estimate Now &rarr;
            </button>
          </form>
        </div>

      </div>
    </div>
  </section>

  <!-- Detailed Informational Guide Section -->
  <article class="info-guide-article-section" style="padding: 60px 0; background: #070d19; color: #ffffff;">
    <div class="container" style="max-width: 980px; margin: 0 auto; padding: 0 15px;">
      
      <!-- Summary Card -->
      <div style="background: #0f172a; border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 16px; padding: 35px 30px; margin-bottom: 40px; box-shadow: 0 15px 35px rgba(0,0,0,0.4);">
        
        <div style="display: flex; flex-wrap: wrap; justify-content: space-between; align-items: center; gap: 15px; margin-bottom: 20px;">
          <span style="background: rgba(245, 158, 11, 0.1); color: #f59e0b; border: 1.5px solid rgba(245, 158, 11, 0.3); padding: 6px 20px; border-radius: 30px; font-size: 0.8rem; font-weight: 700; text-transform: uppercase; letter-spacing: 1px;">
            MASTER GUIDE &bull; KODUNGALLUR CAR RELOCATION
          </span>
          <div style="font-size: 0.85rem; color: #94a3b8; display: flex; gap: 15px;">
            <span><i class="far fa-user" style="color: #f59e0b; margin-right: 5px;"></i> Shree Ashirwad Logistics</span>
            <span><i class="far fa-clock" style="color: #f59e0b; margin-right: 5px;"></i> 6 Min Read</span>
          </div>
        </div>

        <h2 style="font-size: 2.1rem; font-weight: 800; color: #ffffff; line-height: 1.35; margin-bottom: 18px;">
          Complete Consumer Guide: Car Transportation in Kodungallur
        </h2>

        <p style="font-size: 1.05rem; color: #cbd5e1; line-height: 1.75; margin: 0;">
          Kodungallur, historically significant port town in Thrissur district, lies right on National Highway 66 connecting Ernakulam and Kozhikode. Managing premium <strong>vehicle shifting services</strong> in Kodungallur requires specialized covered car carriers, zero-drive pickup, and full insurance coverage.
        </p>

        <!-- Key Highlights Box -->
        <div style="background: rgba(245, 158, 11, 0.08); border-left: 4px solid #f59e0b; border-radius: 8px; padding: 20px 22px; margin-top: 25px;">
          <h3 style="font-size: 1.05rem; font-weight: 700; color: #f59e0b; margin-bottom: 10px; text-transform: uppercase; letter-spacing: 0.5px;">
            <i class="fas fa-star" style="margin-right: 8px;"></i> Key Service Features
          </h3>
          <ul style="margin: 0; padding-left: 20px; color: #cbd5e1; font-size: 0.93rem; line-height: 1.75;">
            <li>Doorstep vehicle pickup across Kodungallur, Methala, and North Paravur areas.</li>
            <li>Premium <strong>enclosed auto transport services</strong> for luxury sedans and SUVs.</li>
            <li>Comprehensive 25-point physical condition report prior to carrier loading.</li>
            <li>Full support for Kerala RTO state transit documents and insurance clearance.</li>
          </ul>
        </div>

      </div>

      <!-- Main Content Body -->
      <div style="background: #0f172a; border: 1.5px solid rgba(255, 255, 255, 0.08); border-radius: 16px; padding: 40px 35px; line-height: 1.8; color: #cbd5e1; font-size: 1rem; box-shadow: 0 10px 30px rgba(0,0,0,0.3);">
        
        <!-- Section 1: Route & Logistics -->
        <section style="margin-bottom: 35px;">
          <h2 style="font-size: 1.6rem; font-weight: 800; color: #ffffff; margin-bottom: 16px; padding-bottom: 10px; border-bottom: 2px solid rgba(245, 158, 11, 0.4);">
            1. Kodungallur Route Logistics &amp; Coastal Corridor Access
          </h2>
          <p>
            Positioned along the NH66 coastal trunk line, Kodungallur offers swift connectivity north to Thrissur (38 km) and Kozhikode, and south to Kochi/Ernakulam (35 km). Our specialized <strong>car relocation services</strong> operate regular closed and open car carriers across these vital Kerala corridors.
          </p>
          <p style="margin-top: 12px;">
            For interstate moves to Chennai, Bangalore, Hyderabad, or Mumbai, vehicles loaded in Kodungallur are routed through major hub terminals with continuous GPS tracking.
          </p>
        </section>

        <!-- Section 2: Tariff Breakdown Table -->
        <section style="margin-bottom: 35px;">
          <h2 style="font-size: 1.6rem; font-weight: 800; color: #ffffff; margin-bottom: 16px; padding-bottom: 10px; border-bottom: 2px solid rgba(245, 158, 11, 0.4);">
            2. Estimated Car Transport Charges from Kodungallur
          </h2>
          <p>
            When requesting <strong>car delivery quotes</strong>, clarity regarding vehicle size and carrier choice ensures transparent pricing. Below is our benchmark rate matrix for Kodungallur transport:
          </p>

          <div style="overflow-x: auto; margin: 25px 0;">
            <table style="width: 100%; border-collapse: collapse; text-align: left; font-size: 0.9rem; color: #cbd5e1;">
              <thead>
                <tr style="background: #1e293b; color: #f59e0b;">
                  <th style="padding: 12px; border: 1px solid rgba(255,255,255,0.1);">Vehicle Category</th>
                  <th style="padding: 12px; border: 1px solid rgba(255,255,255,0.1);">Open Multi-Car Carrier</th>
                  <th style="padding: 12px; border: 1px solid rgba(255,255,255,0.1);">Enclosed Container Truck</th>
                  <th style="padding: 12px; border: 1px solid rgba(255,255,255,0.1);">Est. Delivery Time</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="padding: 12px; border: 1px solid rgba(255,255,255,0.1); font-weight: 700;">Hatchback (Swift, Tiago, Baleno)</td>
                  <td style="padding: 12px; border: 1px solid rgba(255,255,255,0.1);">₹7,000 – ₹11,500</td>
                  <td style="padding: 12px; border: 1px solid rgba(255,255,255,0.1);">₹10,000 – ₹15,000</td>
                  <td style="padding: 12px; border: 1px solid rgba(255,255,255,0.1);">3 – 5 Days</td>
                </tr>
                <tr style="background: rgba(255,255,255,0.02);">
                  <td style="padding: 12px; border: 1px solid rgba(255,255,255,0.1); font-weight: 700;">Sedan (City, Ciaz, Virtus)</td>
                  <td style="padding: 12px; border: 1px solid rgba(255,255,255,0.1);">₹9,000 – ₹13,500</td>
                  <td style="padding: 12px; border: 1px solid rgba(255,255,255,0.1);">₹12,500 – ₹17,500</td>
                  <td style="padding: 12px; border: 1px solid rgba(255,255,255,0.1);">3 – 5 Days</td>
                </tr>
                <tr>
                  <td style="padding: 12px; border: 1px solid rgba(255,255,255,0.1); font-weight: 700;">SUV / MUV (Innova, Creta, Harrier)</td>
                  <td style="padding: 12px; border: 1px solid rgba(255,255,255,0.1);">₹11,000 – ₹16,500</td>
                  <td style="padding: 12px; border: 1px solid rgba(255,255,255,0.1);">₹15,000 – ₹21,000</td>
                  <td style="padding: 12px; border: 1px solid rgba(255,255,255,0.1);">3 – 5 Days</td>
                </tr>
              </tbody>
            </table>
          </div>
        </section>

        <!-- Section 3: RTO Rules -->
        <section style="margin-bottom: 35px;">
          <h2 style="font-size: 1.6rem; font-weight: 800; color: #ffffff; margin-bottom: 16px; padding-bottom: 10px; border-bottom: 2px solid rgba(245, 158, 11, 0.4);">
            3. Kerala RTO Mandatory Checklist
          </h2>
          <p>
            For transport originating from Kodungallur (KL-47 RTO jurisdiction), the following documents must be handed over for legal transit:
          </p>
          <ul style="padding-left: 20px; margin-top: 10px; line-height: 1.85;">
            <li><strong>Vehicle RC Copy:</strong> Original smartcard or clear digital copy.</li>
            <li><strong>Active Insurance:</strong> Comprehensive motor policy active throughout transit.</li>
            <li><strong>Valid PUC Certificate:</strong> Pollution under control certificate.</li>
            <li><strong>ID Proof of Owner:</strong> Aadhaar Card or Passport copy.</li>
            <li><strong>Consignment Note:</strong> Official LR document generated by Shree Ashirwad.</li>
          </ul>
        </section>

        <!-- Section 4: Safety & Loading Framework -->
        <section style="margin-bottom: 35px;">
          <h2 style="font-size: 1.6rem; font-weight: 800; color: #ffffff; margin-bottom: 16px; padding-bottom: 10px; border-bottom: 2px solid rgba(245, 158, 11, 0.4);">
            4. Advanced Loading Infrastructure &amp; Safety Protocol
          </h2>
          <p>
            Every vehicle loaded in Kodungallur undergoes strict zero-contact hydraulic ramp loading. Our custom car carriers feature individual wheel belts, floor lock-down clamps, and rubber bumper guards to ensure complete physical security.
          </p>
        </section>

        <!-- Section 5: Why Choose Shree Ashirwad -->
        <section style="margin-bottom: 35px;">
          <h2 style="font-size: 1.6rem; font-weight: 800; color: #ffffff; margin-bottom: 16px; padding-bottom: 10px; border-bottom: 2px solid rgba(245, 158, 11, 0.4);">
            5. Why Trust Shree Ashirwad for Kodungallur Car Shifting?
          </h2>
          <div style="background: #070d19; border: 1.5px solid rgba(245, 158, 11, 0.4); border-radius: 14px; padding: 25px;">
            <ul style="padding-left: 20px; margin: 0; line-height: 1.85; color: #cbd5e1;">
              <li><strong>Government Registered Company:</strong> GST bills for easy corporate relocation reimbursement.</li>
              <li><strong>Coastal Highway Expertise:</strong> Regular scheduled carrier dispatches via NH66.</li>
              <li><strong>100% Transit Insurance:</strong> All-risk insurance policy protection for your peace of mind.</li>
              <li><strong>Personalized Tracking:</strong> Dedicated customer support for regular vehicle updates.</li>
            </ul>
          </div>
        </section>

        <!-- Section 6: Regional Coverage Grid -->
        <section style="margin-bottom: 20px;">
          <h2 style="font-size: 1.6rem; font-weight: 800; color: #ffffff; margin-bottom: 16px; padding-bottom: 10px; border-bottom: 2px solid rgba(245, 158, 11, 0.4);">
            6. Kodungallur &amp; Thrissur District Service Localities
          </h2>
          <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(180px, 1fr)); gap: 12px; margin-top: 15px;">
            <div style="background: rgba(255,255,255,0.03); padding: 12px; border-radius: 8px; text-align: center; border: 1px solid rgba(255,255,255,0.1);">Kodungallur Town</div>
            <div style="background: rgba(255,255,255,0.03); padding: 12px; border-radius: 8px; text-align: center; border: 1px solid rgba(255,255,255,0.1);">Methala</div>
            <div style="background: rgba(255,255,255,0.03); padding: 12px; border-radius: 8px; text-align: center; border: 1px solid rgba(255,255,255,0.1);">North Paravur</div>
            <div style="background: rgba(255,255,255,0.03); padding: 12px; border-radius: 8px; text-align: center; border: 1px solid rgba(255,255,255,0.1);">Cranganore</div>
            <div style="background: rgba(255,255,255,0.03); padding: 12px; border-radius: 8px; text-align: center; border: 1px solid rgba(255,255,255,0.1);">Mala</div>
            <div style="background: rgba(255,255,255,0.03); padding: 12px; border-radius: 8px; text-align: center; border: 1px solid rgba(255,255,255,0.1);">Irinjalakuda</div>
          </div>
        </section>

      </div>

    </div>
  </article>

  <!-- FAQ Section with Schema Markup -->
  <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "How much does car transportation in Kodungallur cost?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Car transport charges from Kodungallur start from ₹7,000 for hatchbacks on open multi-car carriers and vary depending on destination distance and carrier option."
      }
    },
    {
      "@type": "Question",
      "name": "Do you provide enclosed car transport in Kodungallur?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, we offer premium enclosed container truck transport for luxury cars and high-value SUVs to protect them from weather and dust."
      }
    },
    {
      "@type": "Question",
      "name": "Is doorstep car pickup available in Kodungallur?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "We offer complete door-to-door pickup and delivery across Kodungallur, Methala, North Paravur, and surrounding Thrissur coastal areas."
      }
    }
  ]
}
  </script>

  <section class="info-article-faq-section" style="padding: 55px 0; background: #0b132b; color: #ffffff;">
    <div class="container" style="max-width: 980px; margin: 0 auto; padding: 0 15px;">
      
      <div style="text-align: center; margin-bottom: 35px;">
        <span class="pill-badge" style="background: rgba(245, 158, 11, 0.1); color: #f59e0b; border: 1.5px solid rgba(245, 158, 11, 0.3); padding: 5px 18px; border-radius: 30px; font-size: 0.8rem; font-weight: 700; text-transform: uppercase;">
          FREQUENTLY ASKED QUESTIONS
        </span>
        <h2 style="font-size: 2.05rem; font-weight: 800; color: #ffffff; margin-top: 14px;">
          Questions About <span style="color: #f59e0b;">Car Transportation in Kodungallur</span>
        </h2>
      </div>

      <div style="display: flex; flex-direction: column; gap: 14px;">
        
        <details style="background: #0f172a; border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 12px; overflow: hidden;">
          <summary style="padding: 18px 22px; color: #ffffff; font-weight: 700; font-size: 1rem; cursor: pointer; display: flex; justify-content: space-between; align-items: center;">
            <span><strong style="color: #f59e0b; margin-right: 8px;">Q1.</strong> How much does car transportation in Kodungallur cost?</span>
            <span style="color: #f59e0b; font-size: 1.2rem; font-weight: 800;">&#43;</span>
          </summary>
          <div style="padding: 15px 22px 20px 22px; color: #cbd5e1; font-size: 0.93rem; line-height: 1.7; border-top: 1px solid rgba(255,255,255,0.08);">
            Car transport charges from Kodungallur start from ₹7,000 for hatchbacks on open multi-car carriers and vary depending on destination distance and carrier option.
          </div>
        </details>

        <details style="background: #0f172a; border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 12px; overflow: hidden;">
          <summary style="padding: 18px 22px; color: #ffffff; font-weight: 700; font-size: 1rem; cursor: pointer; display: flex; justify-content: space-between; align-items: center;">
            <span><strong style="color: #f59e0b; margin-right: 8px;">Q2.</strong> Do you provide enclosed car transport in Kodungallur?</span>
            <span style="color: #f59e0b; font-size: 1.2rem; font-weight: 800;">&#43;</span>
          </summary>
          <div style="padding: 15px 22px 20px 22px; color: #cbd5e1; font-size: 0.93rem; line-height: 1.7; border-top: 1px solid rgba(255,255,255,0.08);">
            Yes, we offer premium enclosed container truck transport for luxury cars and high-value SUVs to protect them from weather and dust.
          </div>
        </details>

        <details style="background: #0f172a; border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 12px; overflow: hidden;">
          <summary style="padding: 18px 22px; color: #ffffff; font-weight: 700; font-size: 1rem; cursor: pointer; display: flex; justify-content: space-between; align-items: center;">
            <span><strong style="color: #f59e0b; margin-right: 8px;">Q3.</strong> Is doorstep car pickup available in Kodungallur?</span>
            <span style="color: #f59e0b; font-size: 1.2rem; font-weight: 800;">&#43;</span>
          </summary>
          <div style="padding: 15px 22px 20px 22px; color: #cbd5e1; font-size: 0.93rem; line-height: 1.7; border-top: 1px solid rgba(255,255,255,0.08);">
            We offer complete door-to-door pickup and delivery across Kodungallur, Methala, North Paravur, and surrounding Thrissur coastal areas.
          </div>
        </details>
        
      </div>

    </div>
  </section>

  <!-- CTA Section -->
  <section class="smooth-move-cta-section" style="padding: 55px 0; background: #070d19; color: #ffffff;">
    <div class="container" style="max-width: 980px; margin: 0 auto; padding: 0 15px;">
      
      <div style="background: linear-gradient(135deg, #1e1b4b 0%, #0f172a 50%, #070d19 100%); border: 1.5px solid rgba(245, 158, 11, 0.4); border-radius: 20px; padding: 45px 30px; text-align: center; box-shadow: 0 20px 40px rgba(0,0,0,0.5);">
        
        <span class="pill-badge" style="background: rgba(245, 158, 11, 0.1); color: #f59e0b; border: 1.5px solid rgba(245, 158, 11, 0.3); padding: 6px 20px; border-radius: 30px; font-size: 0.82rem; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; display: inline-block; margin-bottom: 20px;">
          SAFE KODUNGALLUR CAR RELOCATION
        </span>
        
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin-bottom: 18px; line-height: 1.3;">
          Book <span style="color: #f59e0b;">Car Transportation in Kodungallur</span> Today!
        </h2>
        
        <p style="font-size: 1.05rem; color: #cbd5e1; max-width: 800px; margin: 0 auto 30px auto; line-height: 1.7;">
          Contact Shree Ashirwad Packers and Movers now for insured car shifting, instant pricing quotes, and doorstep vehicle transport.
        </p>

        <div style="display: flex; flex-wrap: wrap; justify-content: center; gap: 15px; margin-bottom: 30px;">
          <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Now" style="padding: 14px 28px; background: linear-gradient(135deg, #e11d48 0%, #f59e0b 100%); color: #ffffff; border-radius: 30px; font-weight: 700; font-size: 1rem; text-decoration: none; display: inline-flex; align-items: center; gap: 8px; box-shadow: 0 6px 20px rgba(225, 29, 72, 0.4);">
            <i class="fas fa-phone-alt"></i> Call <?php echo SITE_PHONE; ?>
          </a>
          
          <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad,%20I%20want%20to%20book%20car%20transportation%20in%20Kodungallur." title="Chat on WhatsApp" target="_blank" style="padding: 14px 28px; background: #25D366; color: #ffffff; border-radius: 30px; font-weight: 700; font-size: 1rem; text-decoration: none; display: inline-flex; align-items: center; gap: 8px; box-shadow: 0 6px 20px rgba(37, 211, 102, 0.4);">
            <i class="fab fa-whatsapp"></i> Chat on WhatsApp
          </a>
        </div>

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
  
  var message = "Hello Shree Ashirwad Packers & Movers,\n\nI am requesting a Car Transport Quote for Kodungallur:\n- Name: " + name + "\n- Phone: " + phone + "\n- Pickup City: " + moveFrom + "\n- Destination City: " + moveTo;
  
  var whatsappUrl = "https://api.whatsapp.com/send?phone=918409531615&text=" + encodeURIComponent(message);
  window.location.href = whatsappUrl;
}
</script>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
