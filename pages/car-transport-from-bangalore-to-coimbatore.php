<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "Car Transport from Bangalore to Coimbatore | Express Car Carrier";
$page_desc = "Professional car transport from Bangalore to Coimbatore by Shree Ashirwad Packers and Movers. Express 24-36 hour delivery via NH44 corridor, 100% all-risk transit insurance & door pickup across Bengaluru to Coimbatore.";
$page_keywords = "car transport from bangalore to coimbatore, car shifting services, vehicle relocation, affordable car transport, automobile transport, doorstep car transport";
$canonical_url = "https://shreeashirwadpackersandmovers.com/pages/car-transport-from-bangalore-to-coimbatore.php";

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
            BANGALORE TO COIMBATORE CAR SHIFTING SPECIALISTS
          </span>
          <h1 style="font-size: 2.5rem; font-weight: 800; line-height: 1.2; margin-bottom: 20px; color: #ffffff;">
            Professional <span style="color: #f59e0b;">Car Transport from Bangalore to Coimbatore</span>
          </h1>
          <p style="font-size: 1.1rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 25px;">
            Relocating your vehicle ~365 km from Bangalore to Coimbatore? Trust Shree Ashirwad Packers and Movers for express 24-36 hour transit via NH44 highway corridor. Expert <strong>car shifting services</strong>, enclosed multi-car trailers, 100% all-risk transit insurance, and doorstep pickup.
          </p>

          <div style="display: flex; gap: 15px; flex-wrap: wrap; margin-bottom: 30px;">
            <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Now" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
              <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call Now: <?php echo SITE_PHONE; ?>
            </a>
            <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20a%20car%20transport%20quote%20from%20Bangalore%20to%20Coimbatore." title="Chat on WhatsApp" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
              <i class="fab fa-whatsapp" style="margin-right: 8px;"></i> Chat on WhatsApp
            </a>
          </div>

          <div style="display: flex; gap: 20px; font-size: 0.9rem; color: #94a3b8; flex-wrap: wrap;">
            <span><strong style="color: #f59e0b;">Express 24-36 Hr</strong> Delivery</span>
            <span><strong style="color: #f59e0b;">100% Insured</strong> Transport</span>
            <span><strong style="color: #f59e0b;">Doorstep</strong> Delivery</span>
          </div>
        </div>

        <!-- Hero Lead Form Column -->
        <div class="hero-form-card" style="background: rgba(255, 255, 255, 0.05); backdrop-filter: blur(10px); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 16px; padding: 30px; box-shadow: 0 15px 35px rgba(0,0,0,0.4);">
          <h2 style="font-size: 1.4rem; color: #ffffff; margin-bottom: 8px; font-weight: 700; text-align: center;">Get Bangalore to Coimbatore Quote</h2>
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
              <input type="text" name="move_to" class="form-control" value="Coimbatore" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
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
            MASTER GUIDE &bull; BANGALORE TO COIMBATORE CAR TRANSPORT
          </span>
          <div style="font-size: 0.85rem; color: #94a3b8; display: flex; gap: 15px;">
            <span><i class="far fa-user" style="color: #f59e0b; margin-right: 5px;"></i> Shree Ashirwad Vehicle Logistics</span>
            <span><i class="far fa-clock" style="color: #f59e0b; margin-right: 5px;"></i> 6 Min Read</span>
          </div>
        </div>

        <h2 style="font-size: 2.1rem; font-weight: 800; color: #ffffff; line-height: 1.35; margin-bottom: 18px;">
          Complete Guide: Car Transport from Bangalore to Coimbatore
        </h2>

        <p style="font-size: 1.05rem; color: #cbd5e1; line-height: 1.75; margin: 0;">
          Shipping vehicles ~365 km between <strong>Bangalore</strong> and <strong>Coimbatore</strong> demands professional <strong>vehicle relocation</strong> and high-performance multi-car trailers. Shree Ashirwad Packers and Movers offers express 24-36 hour door-to-door car transport with 100% all-risk transit insurance.
        </p>

        <!-- Key Highlights Box -->
        <div style="background: rgba(245, 158, 11, 0.08); border-left: 4px solid #f59e0b; border-radius: 8px; padding: 20px 22px; margin-top: 25px;">
          <h3 style="font-size: 1.05rem; font-weight: 700; color: #f59e0b; margin-bottom: 10px; text-transform: uppercase; letter-spacing: 0.5px;">
            <i class="fas fa-star" style="margin-right: 8px;"></i> Key Service Features
          </h3>
          <ul style="margin: 0; padding-left: 20px; color: #cbd5e1; font-size: 0.93rem; line-height: 1.75;">
            <li>Express 24 to 36 hour transit via NH44 (Hosur - Salem - Erode - Coimbatore).</li>
            <li>Detailed 25-point visual pre-pickup condition reporting covering body and odometer readings.</li>
            <li>Enclosed container trailer options protecting cars from road dust and weather elements.</li>
            <li>Karnataka to Tamil Nadu interstate RTO paperwork &amp; e-Way Bill support.</li>
          </ul>
        </div>

      </div>

      <!-- Main Content Body -->
      <div style="background: #0f172a; border: 1.5px solid rgba(255, 255, 255, 0.08); border-radius: 16px; padding: 40px 35px; line-height: 1.8; color: #cbd5e1; font-size: 1rem; box-shadow: 0 10px 30px rgba(0,0,0,0.3);">
        
        <!-- Section 1: Route & Logistics -->
        <section style="margin-bottom: 35px;">
          <h2 style="font-size: 1.6rem; font-weight: 800; color: #ffffff; margin-bottom: 16px; padding-bottom: 10px; border-bottom: 2px solid rgba(245, 158, 11, 0.4);">
            1. Bangalore to Coimbatore Route Logistics &amp; Transit Time
          </h2>
          <p>
            The highway corridor connecting Bangalore to Coimbatore covers approximately 365 kilometers via NH44, traveling past Hosur, Dharmapuri, Salem, and Erode. Estimated transit duration is <strong>24 to 36 hours</strong>.
          </p>
          <p style="margin-top: 12px;">
            We pick up vehicles across all Bangalore tech parks and residential sectors (Koramangala, Indiranagar, Whitefield, HSR Layout, Electronic City) and deliver across all Coimbatore hubs (Gandhipuram, RS Puram, Peelamedu, Saravanampatti, Singanallur, Eachanari).
          </p>
        </section>

        <!-- Section 2: Estimated Car Shipping Cost Breakdown -->
        <section style="margin-bottom: 35px;">
          <h2 style="font-size: 1.6rem; font-weight: 800; color: #ffffff; margin-bottom: 16px; padding-bottom: 10px; border-bottom: 2px solid rgba(245, 158, 11, 0.4);">
            2. Estimated Car Transport Cost: Bangalore to Coimbatore
          </h2>
          <p>
            Here is our transparent cost breakdown for <strong>affordable car transport</strong> from Bangalore to Coimbatore across open multi-car trailers and enclosed container carriers:
          </p>

          <div style="overflow-x: auto; margin: 25px 0;">
            <table style="width: 100%; border-collapse: collapse; text-align: left; font-size: 0.95rem; color: #cbd5e1;">
              <thead>
                <tr style="background: #1e293b; color: #f59e0b; border-bottom: 2px solid rgba(245, 158, 11, 0.5);">
                  <th style="padding: 14px 16px;">Vehicle Category</th>
                  <th style="padding: 14px 16px;">Open Trailer Carrier</th>
                  <th style="padding: 14px 16px;">Enclosed Container Carrier</th>
                  <th style="padding: 14px 16px;">Estimated Transit</th>
                </tr>
              </thead>
              <tbody>
                <tr style="border-bottom: 1px solid rgba(255,255,255,0.08);">
                  <td style="padding: 14px 16px; font-weight: 600; color: #ffffff;">Hatchback (Swift, Alto, i10)</td>
                  <td style="padding: 14px 16px;">₹6,000 - ₹8,000</td>
                  <td style="padding: 14px 16px;">₹9,000 - ₹11,500</td>
                  <td style="padding: 14px 16px;">24 Hours</td>
                </tr>
                <tr style="border-bottom: 1px solid rgba(255,255,255,0.08); background: rgba(255,255,255,0.02);">
                  <td style="padding: 14px 16px; font-weight: 600; color: #ffffff;">Sedan (City, Verna, Ciaz)</td>
                  <td style="padding: 14px 16px;">₹7,000 - ₹9,000</td>
                  <td style="padding: 14px 16px;">₹10,500 - ₹13,000</td>
                  <td style="padding: 14px 16px;">24 Hours</td>
                </tr>
                <tr style="border-bottom: 1px solid rgba(255,255,255,0.08);">
                  <td style="padding: 14px 16px; font-weight: 600; color: #ffffff;">Compact SUV (Nexon, Creta, Brezza)</td>
                  <td style="padding: 14px 16px;">₹8,000 - ₹10,500</td>
                  <td style="padding: 14px 16px;">₹12,000 - ₹14,500</td>
                  <td style="padding: 14px 16px;">24 - 36 Hours</td>
                </tr>
                <tr style="border-bottom: 1px solid rgba(255,255,255,0.08); background: rgba(255,255,255,0.02);">
                  <td style="padding: 14px 16px; font-weight: 600; color: #ffffff;">Luxury SUV / Premium (Fortuner, BMW, Audi)</td>
                  <td style="padding: 14px 16px;">₹10,000 - ₹13,000</td>
                  <td style="padding: 14px 16px;">₹15,000 - ₹18,500</td>
                  <td style="padding: 14px 16px;">24 - 36 Hours</td>
                </tr>
              </tbody>
            </table>
          </div>
        </section>

        <!-- Section 3: Safety Protocols -->
        <section style="margin-bottom: 35px;">
          <h2 style="font-size: 1.6rem; font-weight: 800; color: #ffffff; margin-bottom: 16px; padding-bottom: 10px; border-bottom: 2px solid rgba(245, 158, 11, 0.4);">
            3. Safety &amp; Protection Standards in Automobile Transport
          </h2>
          <p>
            Our specialized <strong>automobile transport</strong> infrastructure incorporates hydraulic loading ramps, wheel tie-down safety clamps, and protective body wrapping to guarantee zero scratches or mechanical strain.
          </p>
        </section>

        <!-- Section 4: Mandatory Documents -->
        <section style="margin-bottom: 35px;">
          <h2 style="font-size: 1.6rem; font-weight: 800; color: #ffffff; margin-bottom: 16px; padding-bottom: 10px; border-bottom: 2px solid rgba(245, 158, 11, 0.4);">
            4. Required Documents for Interstate Transport
          </h2>
          <p>Provide copies of RC Smart Card, valid Insurance, PUC certificate, and Owner ID proof for hassle-free checkpost clearance.</p>
        </section>

        <!-- Section 5: Step-by-Step Relocation Process -->
        <section style="margin-bottom: 35px;">
          <h2 style="font-size: 1.6rem; font-weight: 800; color: #ffffff; margin-bottom: 16px; padding-bottom: 10px; border-bottom: 2px solid rgba(245, 158, 11, 0.4);">
            5. Step-by-Step Bangalore to Coimbatore Car Relocation Process
          </h2>
          <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 20px; margin-top: 20px;">
            <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.1); border-radius: 10px; padding: 20px;">
              <div style="color: #f59e0b; font-weight: 800; font-size: 1.2rem; margin-bottom: 8px;">STEP 1</div>
              <h4 style="color: #fff; margin-bottom: 8px;">Door Inspection</h4>
              <p style="font-size: 0.88rem; color: #94a3b8; margin: 0;">25-point visual checklist conducted at your Bangalore address.</p>
            </div>
            <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.1); border-radius: 10px; padding: 20px;">
              <div style="color: #f59e0b; font-weight: 800; font-size: 1.2rem; margin-bottom: 8px;">STEP 2</div>
              <h4 style="color: #fff; margin-bottom: 8px;">Hydraulic Loading</h4>
              <p style="font-size: 0.88rem; color: #94a3b8; margin: 0;">Loaded using non-scraping hydraulic ramps and wheel harnesses.</p>
            </div>
            <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.1); border-radius: 10px; padding: 20px;">
              <div style="color: #f59e0b; font-weight: 800; font-size: 1.2rem; margin-bottom: 8px;">STEP 3</div>
              <h4 style="color: #fff; margin-bottom: 8px;">NH44 Transit</h4>
              <p style="font-size: 0.88rem; color: #94a3b8; margin: 0;">Fast transit with regular WhatsApp status updates sent to owner.</p>
            </div>
            <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.1); border-radius: 10px; padding: 20px;">
              <div style="color: #f59e0b; font-weight: 800; font-size: 1.2rem; margin-bottom: 8px;">STEP 4</div>
              <h4 style="color: #fff; margin-bottom: 8px;">Coimbatore Delivery</h4>
              <p style="font-size: 0.88rem; color: #94a3b8; margin: 0;">Safe doorstep handover in Coimbatore after visual verification.</p>
            </div>
          </div>
        </section>

        <!-- Section 6: Factors Influencing Rates -->
        <section style="margin-bottom: 35px;">
          <h2 style="font-size: 1.6rem; font-weight: 800; color: #ffffff; margin-bottom: 16px; padding-bottom: 10px; border-bottom: 2px solid rgba(245, 158, 11, 0.4);">
            6. Factors Influencing Car Relocation Tariffs
          </h2>
          <p>Cost varies based on vehicle size, open trailer vs enclosed container preference, and pickup proximity to major national highways.</p>
        </section>

        <!-- Section 7: Local Coverage Areas -->
        <section style="margin-bottom: 35px;">
          <h2 style="font-size: 1.6rem; font-weight: 800; color: #ffffff; margin-bottom: 16px; padding-bottom: 10px; border-bottom: 2px solid rgba(245, 158, 11, 0.4);">
            7. Complete Coverage: Bangalore to Coimbatore
          </h2>
          <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-top: 15px;">
            <div style="background: rgba(255,255,255,0.02); padding: 18px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.08);">
              <h4 style="color: #f59e0b; margin-bottom: 10px;">Bangalore Pickup Hubs</h4>
              <p style="font-size: 0.9rem; color: #94a3b8; margin: 0; line-height: 1.6;">
                Koramangala, Indiranagar, Whitefield, HSR Layout, Electronic City, Yelahanka, Bellandur, Marathahalli.
              </p>
            </div>
            <div style="background: rgba(255,255,255,0.02); padding: 18px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.08);">
              <h4 style="color: #f59e0b; margin-bottom: 10px;">Coimbatore Delivery Hubs</h4>
              <p style="font-size: 0.9rem; color: #94a3b8; margin: 0; line-height: 1.6;">
                Gandhipuram, RS Puram, Peelamedu, Saravanampatti, Singanallur, Eachanari, Vadavalli, Thudiyalur.
              </p>
            </div>
          </div>
        </section>

        <!-- Section 8: FAQ Section -->
        <section style="margin-bottom: 35px;">
          <h2 style="font-size: 1.6rem; font-weight: 800; color: #ffffff; margin-bottom: 20px; padding-bottom: 10px; border-bottom: 2px solid rgba(245, 158, 11, 0.4);">
            8. Frequently Asked Questions: Bangalore to Coimbatore Car Shipping
          </h2>

          <div style="display: flex; flex-direction: column; gap: 15px;">
            <div style="background: rgba(255,255,255,0.03); border-radius: 8px; padding: 18px 20px; border: 1px solid rgba(255,255,255,0.08);">
              <h4 style="color: #f59e0b; margin-bottom: 8px; font-size: 1.05rem;">Q1: How much does car transport from Bangalore to Coimbatore cost?</h4>
              <p style="margin: 0; font-size: 0.95rem; color: #cbd5e1;">
                Car shipping rates range from ₹6,000 to ₹10,500 for open multi-car carriers and ₹9,000 to ₹15,000 for enclosed container carriers.
              </p>
            </div>

            <div style="background: rgba(255,255,255,0.03); border-radius: 8px; padding: 18px 20px; border: 1px solid rgba(255,255,255,0.08);">
              <h4 style="color: #f59e0b; margin-bottom: 8px; font-size: 1.05rem;">Q2: What is the transit duration between Bangalore and Coimbatore?</h4>
              <p style="margin: 0; font-size: 0.95rem; color: #cbd5e1;">
                Vehicle delivery along the 365 km NH44 highway corridor takes approximately 24 to 36 hours.
              </p>
            </div>
          </div>
        </section>

        <!-- Section 9: Why Choose Us -->
        <section style="margin-bottom: 35px;">
          <h2 style="font-size: 1.6rem; font-weight: 800; color: #ffffff; margin-bottom: 16px; padding-bottom: 10px; border-bottom: 2px solid rgba(245, 158, 11, 0.4);">
            9. Why Choose Shree Ashirwad Packers and Movers?
          </h2>
          <p>Dedicated daily car transport runs between Bangalore and Coimbatore with 100% all-risk transit insurance and transparent tariffs.</p>
        </section>

        <!-- Section 10: Call to Action (CTA) Box -->
        <section style="background: linear-gradient(135deg, #1c2541 0%, #0b132b 100%); border: 1.5px solid rgba(245, 158, 11, 0.4); border-radius: 12px; padding: 30px; text-align: center; margin-top: 40px;">
          <h3 style="font-size: 1.6rem; color: #ffffff; font-weight: 800; margin-bottom: 10px;">
            Book Car Transport from Bangalore to Coimbatore Today!
          </h3>
          <p style="color: #cbd5e1; font-size: 0.98rem; max-width: 700px; margin: 0 auto 20px;">
            Get transparent cost estimation, doorstep inspection, and 100% insured vehicle transport.
          </p>
          <div style="display: flex; gap: 15px; justify-content: center; flex-wrap: wrap;">
            <a href="tel:<?php echo SITE_PHONE_RAW; ?>" style="padding: 12px 30px; background: #e11d48; color: #fff; border-radius: 30px; font-weight: 700; text-decoration: none;">
              <i class="fas fa-phone-alt" style="margin-right: 6px;"></i> Call <?php echo SITE_PHONE; ?>
            </a>
            <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20a%20car%20transport%20quote%20from%20Bangalore%20to%20Coimbatore." target="_blank" style="padding: 12px 30px; background: #10b981; color: #fff; border-radius: 30px; font-weight: 700; text-decoration: none;">
              <i class="fab fa-whatsapp" style="margin-right: 6px;"></i> Instant WhatsApp Quote
            </a>
          </div>
        </section>

      </div>

    </div>
  </article>

</main>

<!-- Section 11: Structured FAQ Schema Markup (JSON-LD) -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "How much does car transport from Bangalore to Coimbatore cost?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Car shipping rates range from ₹6,000 to ₹10,500 for open multi-car carriers and ₹9,000 to ₹15,000 for enclosed container carriers."
      }
    },
    {
      "@type": "Question",
      "name": "What is the transit duration between Bangalore and Coimbatore?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Vehicle delivery along the 365 km NH44 highway corridor takes approximately 24 to 36 hours."
      }
    }
  ]
}
</script>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
