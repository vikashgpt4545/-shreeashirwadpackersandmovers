<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "Car Transportation in Kot Kapura | Covered & Open Car Carriers";
$page_desc = "Safe car transportation in kot kapura by Shree Ashirwad Packers and Movers. Recognized among best vehicle transport companies offering insured car carrier service & transparent car shifting charges across Punjab and India.";
$page_keywords = "car transportation in kot kapura, car transport, auto transport, car carrier service, car shifting charges, best vehicle transport companies, car transport punjab";
$canonical_url = "https://shreeashirwadpackersandmovers.com/pages/car-transportation-in-kot-kapura.php";

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
            KOT KAPURA &amp; FARIDKOT CAR RELOCATION SPECIALISTS
          </span>
          <h1 style="font-size: 2.5rem; font-weight: 800; line-height: 1.2; margin-bottom: 20px; color: #ffffff;">
            Professional <span style="color: #f59e0b;">Car Transportation in Kot Kapura</span>
          </h1>
          <p style="font-size: 1.05rem; color: #cbd5e1; line-height: 1.7; margin-bottom: 25px;">
            Shree Ashirwad Packers and Movers provides top-tier <strong>car transportation in kot kapura</strong>. Recognized among the <strong>best vehicle transport companies</strong> in Malwa Punjab, our dedicated <strong>car carrier service</strong> ensures safe, insured, and doorstep <strong>auto transport</strong> for luxury sedans, hatchbacks, and SUVs across India.
          </p>

          <div style="display: flex; gap: 15px; flex-wrap: wrap; margin-bottom: 30px;">
            <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Now" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
              <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call Now: <?php echo SITE_PHONE; ?>
            </a>
            <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20a%20car%20transport%20quote%20for%20Kot%20Kapura." title="Chat on WhatsApp" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
              <i class="fab fa-whatsapp" style="margin-right: 8px;"></i> Chat on WhatsApp
            </a>
          </div>

          <div style="display: flex; gap: 20px; font-size: 0.9rem; color: #94a3b8; flex-wrap: wrap;">
            <span><strong style="color: #f59e0b;">100% Insured</strong> Transport</span>
            <span><strong style="color: #f59e0b;">Malwa Trunk</strong> Highway Route</span>
            <span><strong style="color: #f59e0b;">Door-to-Door</strong> Pickup</span>
          </div>
        </div>

        <!-- Hero Lead Form Column -->
        <div class="hero-form-card" style="background: rgba(255, 255, 255, 0.05); backdrop-filter: blur(10px); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 16px; padding: 30px; box-shadow: 0 15px 35px rgba(0,0,0,0.4);">
          <h2 style="font-size: 1.4rem; color: #ffffff; margin-bottom: 8px; font-weight: 700; text-align: center;">Get Kot Kapura Car Quote</h2>
          <p style="font-size: 0.85rem; color: #94a3b8; text-align: center; margin-bottom: 20px;">Calculate transparent <strong>car shifting charges</strong> on WhatsApp</p>

          <form action="#" method="POST" onsubmit="sendHeroWhatsAppLead(event, this);">
            <div style="margin-bottom: 14px;">
              <input type="text" name="name" class="form-control" placeholder="Your Full Name" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="margin-bottom: 14px;">
              <input type="tel" name="phone" class="form-control" placeholder="10-Digit Phone Number" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 10px; margin-bottom: 14px;">
              <input type="text" name="move_from" class="form-control" value="Kot Kapura" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
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
            MASTER GUIDE &bull; KOT KAPURA CAR RELOCATION
          </span>
          <div style="font-size: 0.85rem; color: #94a3b8; display: flex; gap: 15px;">
            <span><i class="far fa-user" style="color: #f59e0b; margin-right: 5px;"></i> Shree Ashirwad Logistics</span>
            <span><i class="far fa-clock" style="color: #f59e0b; margin-right: 5px;"></i> 6 Min Read</span>
          </div>
        </div>

        <h2 style="font-size: 2.1rem; font-weight: 800; color: #ffffff; line-height: 1.35; margin-bottom: 18px;">
          Complete Consumer Guide: Car Transportation in Kot Kapura
        </h2>

        <p style="font-size: 1.05rem; color: #cbd5e1; line-height: 1.75; margin: 0;">
          Kot Kapura is a major historical and commercial junction in Faridkot district, connecting key highway arteries between Bathinda, Moga, Firozpur, and Ludhiana. Securing safe <strong>car transport</strong> out of Kot Kapura requires expert handling, zero-damage hydraulic loading, and continuous tracking.
        </p>

        <!-- Key Highlights Box -->
        <div style="background: rgba(245, 158, 11, 0.08); border-left: 4px solid #f59e0b; border-radius: 8px; padding: 20px 22px; margin-top: 25px;">
          <h3 style="font-size: 1.05rem; font-weight: 700; color: #f59e0b; margin-bottom: 10px; text-transform: uppercase; letter-spacing: 0.5px;">
            <i class="fas fa-star" style="margin-right: 8px;"></i> Key Service Features
          </h3>
          <ul style="margin: 0; padding-left: 20px; color: #cbd5e1; font-size: 0.93rem; line-height: 1.75;">
            <li>Doorstep vehicle pickup across Kot Kapura town, Faridkot Road, and Moga Highway.</li>
            <li>Enclosed container trailers protecting vehicles from dust, stones, and weather.</li>
            <li>Pre-loading 25-point visual condition check with digital documentation.</li>
            <li>Full support for Punjab RTO paperwork, e-Way bills, and transit insurance.</li>
          </ul>
        </div>

      </div>

      <!-- Main Content Body -->
      <div style="background: #0f172a; border: 1.5px solid rgba(255, 255, 255, 0.08); border-radius: 16px; padding: 40px 35px; line-height: 1.8; color: #cbd5e1; font-size: 1rem; box-shadow: 0 10px 30px rgba(0,0,0,0.3);">
        
        <!-- Section 1: Route & Logistics -->
        <section style="margin-bottom: 35px;">
          <h2 style="font-size: 1.6rem; font-weight: 800; color: #ffffff; margin-bottom: 16px; padding-bottom: 10px; border-bottom: 2px solid rgba(245, 158, 11, 0.4);">
            1. Kot Kapura Route Logistics &amp; Highway Connectivity
          </h2>
          <p>
            With direct highway routes connecting to Bathinda (50 km), Moga (30 km), and Ludhiana (100 km), Kot Kapura is an ideal hub for vehicle freight. Our open multi-deck carriers and covered containers depart regularly from Kot Kapura to Delhi NCR, Mumbai, Pune, Bangalore, and South India.
          </p>
        </section>

        <!-- Section 2: Estimated Rate Matrix -->
        <section style="margin-bottom: 35px;">
          <h2 style="font-size: 1.6rem; font-weight: 800; color: #ffffff; margin-bottom: 16px; padding-bottom: 10px; border-bottom: 2px solid rgba(245, 158, 11, 0.4);">
            2. Estimated Car Shifting Charges from Kot Kapura
          </h2>
          <p>
            Understanding clear <strong>car shifting charges</strong> prevents hidden fees during relocation. Below is our transparent rate card for Kot Kapura car shipping:
          </p>

          <div style="overflow-x: auto; margin: 25px 0;">
            <table style="width: 100%; border-collapse: collapse; text-align: left; font-size: 0.9rem; color: #cbd5e1;">
              <thead>
                <tr style="background: #1e293b; color: #f59e0b;">
                  <th style="padding: 12px; border: 1px solid rgba(255,255,255,0.1);">Car Category</th>
                  <th style="padding: 12px; border: 1px solid rgba(255,255,255,0.1);">Open Carrier Rate</th>
                  <th style="padding: 12px; border: 1px solid rgba(255,255,255,0.1);">Enclosed Container Rate</th>
                  <th style="padding: 12px; border: 1px solid rgba(255,255,255,0.1);">Est. Delivery Time</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="padding: 12px; border: 1px solid rgba(255,255,255,0.1); font-weight: 700;">Hatchback (Swift, Tiago, WagonR)</td>
                  <td style="padding: 12px; border: 1px solid rgba(255,255,255,0.1);">₹6,500 – ₹11,000</td>
                  <td style="padding: 12px; border: 1px solid rgba(255,255,255,0.1);">₹9,500 – ₹14,500</td>
                  <td style="padding: 12px; border: 1px solid rgba(255,255,255,0.1);">3 – 5 Days</td>
                </tr>
                <tr style="background: rgba(255,255,255,0.02);">
                  <td style="padding: 12px; border: 1px solid rgba(255,255,255,0.1); font-weight: 700;">Sedan (Dzire, Verna, Slavia)</td>
                  <td style="padding: 12px; border: 1px solid rgba(255,255,255,0.1);">₹8,500 – ₹13,000</td>
                  <td style="padding: 12px; border: 1px solid rgba(255,255,255,0.1);">₹11,500 – ₹16,500</td>
                  <td style="padding: 12px; border: 1px solid rgba(255,255,255,0.1);">3 – 5 Days</td>
                </tr>
                <tr>
                  <td style="padding: 12px; border: 1px solid rgba(255,255,255,0.1); font-weight: 700;">SUV / MUV (Creta, Endeavour, Thar)</td>
                  <td style="padding: 12px; border: 1px solid rgba(255,255,255,0.1);">₹10,500 – ₹16,000</td>
                  <td style="padding: 12px; border: 1px solid rgba(255,255,255,0.1);">₹14,500 – ₹20,500</td>
                  <td style="padding: 12px; border: 1px solid rgba(255,255,255,0.1);">3 – 5 Days</td>
                </tr>
              </tbody>
            </table>
          </div>
        </section>

        <!-- Section 3: Statutory & RTO Rules -->
        <section style="margin-bottom: 35px;">
          <h2 style="font-size: 1.6rem; font-weight: 800; color: #ffffff; margin-bottom: 16px; padding-bottom: 10px; border-bottom: 2px solid rgba(245, 158, 11, 0.4);">
            3. RTO Clearance &amp; Document Requirements
          </h2>
          <p>
            For vehicle transport from Kot Kapura (PB-04 RTO zone), clients must provide the following valid paperwork:
          </p>
          <ul style="padding-left: 20px; margin-top: 10px; line-height: 1.85;">
            <li><strong>Vehicle RC Card:</strong> Photocopy or original RC smartcard.</li>
            <li><strong>Motor Insurance:</strong> Valid comprehensive policy document.</li>
            <li><strong>Emission Certificate (PUC):</strong> Active PUC certificate.</li>
            <li><strong>Owner Identity Proof:</strong> Aadhaar Card or Passport copy.</li>
            <li><strong>Lorry Receipt (LR):</strong> Official tracking note provided by Shree Ashirwad.</li>
          </ul>
        </section>

        <!-- Section 4: Safety & Loading Framework -->
        <section style="margin-bottom: 35px;">
          <h2 style="font-size: 1.6rem; font-weight: 800; color: #ffffff; margin-bottom: 16px; padding-bottom: 10px; border-bottom: 2px solid rgba(245, 158, 11, 0.4);">
            4. Zero-Contact Hydraulic Ramp &amp; Securing Protocols
          </h2>
          <p>
            Loading is conducted carefully using hydraulic ramps to safeguard low-ground-clearance vehicles. High-tensile nylon tie-down belts and individual wheel stoppers lock down the vehicle completely.
          </p>
        </section>

        <!-- Section 5: Why Choose Shree Ashirwad -->
        <section style="margin-bottom: 35px;">
          <h2 style="font-size: 1.6rem; font-weight: 800; color: #ffffff; margin-bottom: 16px; padding-bottom: 10px; border-bottom: 2px solid rgba(245, 158, 11, 0.4);">
            5. Why Choose Shree Ashirwad for Kot Kapura Car Relocation?
          </h2>
          <div style="background: #070d19; border: 1.5px solid rgba(245, 158, 11, 0.4); border-radius: 14px; padding: 25px;">
            <ul style="padding-left: 20px; margin: 0; line-height: 1.85; color: #cbd5e1;">
              <li><strong>Government Approved Firm:</strong> Valid GST invoices for Defence &amp; Government employee relocation claims.</li>
              <li><strong>Malwa Network Advantage:</strong> Daily container dispatches connecting Bathinda, Moga, and Ludhiana lines.</li>
              <li><strong>100% Transit Insurance:</strong> All-risk coverage policy generated before dispatch.</li>
              <li><strong>Doorstep Delivery:</strong> Complete pick and drop service at your door in Kot Kapura.</li>
            </ul>
          </div>
        </section>

        <!-- Section 6: Regional Coverage Grid -->
        <section style="margin-bottom: 20px;">
          <h2 style="font-size: 1.6rem; font-weight: 800; color: #ffffff; margin-bottom: 16px; padding-bottom: 10px; border-bottom: 2px solid rgba(245, 158, 11, 0.4);">
            6. Kot Kapura &amp; Faridkot Regional Service Areas
          </h2>
          <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(180px, 1fr)); gap: 12px; margin-top: 15px;">
            <div style="background: rgba(255,255,255,0.03); padding: 12px; border-radius: 8px; text-align: center; border: 1px solid rgba(255,255,255,0.1);">Kot Kapura Town</div>
            <div style="background: rgba(255,255,255,0.03); padding: 12px; border-radius: 8px; text-align: center; border: 1px solid rgba(255,255,255,0.1);">Faridkot City</div>
            <div style="background: rgba(255,255,255,0.03); padding: 12px; border-radius: 8px; text-align: center; border: 1px solid rgba(255,255,255,0.1);">Jaitu</div>
            <div style="background: rgba(255,255,255,0.03); padding: 12px; border-radius: 8px; text-align: center; border: 1px solid rgba(255,255,255,0.1);">Baghapurana</div>
            <div style="background: rgba(255,255,255,0.03); padding: 12px; border-radius: 8px; text-align: center; border: 1px solid rgba(255,255,255,0.1);">Sadiq</div>
            <div style="background: rgba(255,255,255,0.03); padding: 12px; border-radius: 8px; text-align: center; border: 1px solid rgba(255,255,255,0.1);">Bathinda Road</div>
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
      "name": "How much does car transportation in Kot Kapura cost?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Car transport charges in Kot Kapura start from ₹6,500 for hatchbacks on open multi-car carriers and vary depending on destination distance and carrier option."
      }
    },
    {
      "@type": "Question",
      "name": "Do you offer door-to-door car pickup in Kot Kapura?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, we provide doorstep pickup and delivery across Kot Kapura town, Faridkot Road, and surrounding Malwa region."
      }
    },
    {
      "@type": "Question",
      "name": "Is transit insurance included for car transport from Kot Kapura?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "We provide 100% all-risk transit insurance policy protection to cover your vehicle against unforeseen road hazards during long-distance transit."
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
          Questions About <span style="color: #f59e0b;">Car Transportation in Kot Kapura</span>
        </h2>
      </div>

      <div style="display: flex; flex-direction: column; gap: 14px;">
        
        <details style="background: #0f172a; border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 12px; overflow: hidden;">
          <summary style="padding: 18px 22px; color: #ffffff; font-weight: 700; font-size: 1rem; cursor: pointer; display: flex; justify-content: space-between; align-items: center;">
            <span><strong style="color: #f59e0b; margin-right: 8px;">Q1.</strong> How much does car transportation in Kot Kapura cost?</span>
            <span style="color: #f59e0b; font-size: 1.2rem; font-weight: 800;">&#43;</span>
          </summary>
          <div style="padding: 15px 22px 20px 22px; color: #cbd5e1; font-size: 0.93rem; line-height: 1.7; border-top: 1px solid rgba(255,255,255,0.08);">
            Car transport charges in Kot Kapura start from ₹6,500 for hatchbacks on open multi-car carriers and vary depending on destination distance and carrier option.
          </div>
        </details>

        <details style="background: #0f172a; border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 12px; overflow: hidden;">
          <summary style="padding: 18px 22px; color: #ffffff; font-weight: 700; font-size: 1rem; cursor: pointer; display: flex; justify-content: space-between; align-items: center;">
            <span><strong style="color: #f59e0b; margin-right: 8px;">Q2.</strong> Do you offer door-to-door car pickup in Kot Kapura?</span>
            <span style="color: #f59e0b; font-size: 1.2rem; font-weight: 800;">&#43;</span>
          </summary>
          <div style="padding: 15px 22px 20px 22px; color: #cbd5e1; font-size: 0.93rem; line-height: 1.7; border-top: 1px solid rgba(255,255,255,0.08);">
            Yes, we provide doorstep pickup and delivery across Kot Kapura town, Faridkot Road, and surrounding Malwa region.
          </div>
        </details>

        <details style="background: #0f172a; border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 12px; overflow: hidden;">
          <summary style="padding: 18px 22px; color: #ffffff; font-weight: 700; font-size: 1rem; cursor: pointer; display: flex; justify-content: space-between; align-items: center;">
            <span><strong style="color: #f59e0b; margin-right: 8px;">Q3.</strong> Is transit insurance included for car transport from Kot Kapura?</span>
            <span style="color: #f59e0b; font-size: 1.2rem; font-weight: 800;">&#43;</span>
          </summary>
          <div style="padding: 15px 22px 20px 22px; color: #cbd5e1; font-size: 0.93rem; line-height: 1.7; border-top: 1px solid rgba(255,255,255,0.08);">
            We provide 100% all-risk transit insurance policy protection to cover your vehicle against unforeseen road hazards during long-distance transit.
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
          SAFE KOT KAPURA CAR RELOCATION
        </span>
        
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin-bottom: 18px; line-height: 1.3;">
          Book <span style="color: #f59e0b;">Car Transportation in Kot Kapura</span> Today!
        </h2>
        
        <p style="font-size: 1.05rem; color: #cbd5e1; max-width: 800px; margin: 0 auto 30px auto; line-height: 1.7;">
          Contact Shree Ashirwad Packers and Movers now for insured car carrier service, instant rate quote, and doorstep pickup.
        </p>

        <div style="display: flex; flex-wrap: wrap; justify-content: center; gap: 15px; margin-bottom: 30px;">
          <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Now" style="padding: 14px 28px; background: linear-gradient(135deg, #e11d48 0%, #f59e0b 100%); color: #ffffff; border-radius: 30px; font-weight: 700; font-size: 1rem; text-decoration: none; display: inline-flex; align-items: center; gap: 8px; box-shadow: 0 6px 20px rgba(225, 29, 72, 0.4);">
            <i class="fas fa-phone-alt"></i> Call <?php echo SITE_PHONE; ?>
          </a>
          
          <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad,%20I%20want%20to%20book%20car%20transportation%20in%20Kot%20Kapura." title="Chat on WhatsApp" target="_blank" style="padding: 14px 28px; background: #25D366; color: #ffffff; border-radius: 30px; font-weight: 700; font-size: 1rem; text-decoration: none; display: inline-flex; align-items: center; gap: 8px; box-shadow: 0 6px 20px rgba(37, 211, 102, 0.4);">
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
  
  var message = "Hello Shree Ashirwad Packers & Movers,\n\nI am requesting a Car Transport Quote for Kot Kapura:\n- Name: " + name + "\n- Phone: " + phone + "\n- Pickup City: " + moveFrom + "\n- Destination City: " + moveTo;
  
  var whatsappUrl = "https://api.whatsapp.com/send?phone=918409531615&text=" + encodeURIComponent(message);
  window.location.href = whatsappUrl;
}
</script>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
