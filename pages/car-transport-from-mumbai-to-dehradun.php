<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "Car Transport from Mumbai to Dehradun | Secure Shifting";
$page_desc = "Secure car transport from Mumbai to Dehradun by Shree Ashirwad Packers and Movers. Express 4-5 day highway transit via Jaipur & Delhi NCR (~1,650 km), 100% all-risk transit insurance & doorstep pickup across Mumbai to Dehradun.";
$page_keywords = "car transport from mumbai to dehradun, best car transport from mumbai to dehradun, affordable car transport from mumbai to dehradun, doorstep car transport from mumbai to dehradun, mumbai to dehradun car shipping cost, vehicle transport";
$canonical_url = "https://shreeashirwadpackersandmovers.com/pages/car-transport-from-mumbai-to-dehradun.php";

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
            MUMBAI TO DEHRADUN CAR RELOCATION SPECIALISTS
          </span>
          <h1 style="font-size: 2.5rem; font-weight: 800; line-height: 1.2; margin-bottom: 20px; color: #ffffff;">
            Professional <span style="color: #f59e0b;">Car Transport from Mumbai to Dehradun</span>
          </h1>
          <p style="font-size: 1.1rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 25px;">
            Relocating your vehicle ~1,650 km from Mumbai (Maharashtra) to Dehradun (Uttarakhand)? Trust Shree Ashirwad Packers and Movers for the <strong>best car transport from mumbai to dehradun</strong>. Express 4-5 day transit via NH48 &amp; NH307, <strong>doorstep car transport from mumbai to dehradun</strong>, 100% all-risk transit insurance, and enclosed multi-car carriers.
          </p>

          <div style="display: flex; gap: 15px; flex-wrap: wrap; margin-bottom: 30px;">
            <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Now" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
              <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call Now: <?php echo SITE_PHONE; ?>
            </a>
            <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20a%20car%20transport%20quote%20from%20Mumbai%20to%20Dehradun." title="Chat on WhatsApp" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
              <i class="fab fa-whatsapp" style="margin-right: 8px;"></i> Chat on WhatsApp
            </a>
          </div>

          <div style="display: flex; gap: 20px; font-size: 0.9rem; color: #94a3b8; flex-wrap: wrap;">
            <span><strong style="color: #f59e0b;">Express 4-5 Day</strong> Transit</span>
            <span><strong style="color: #f59e0b;">100% Insured</strong> Transport</span>
            <span><strong style="color: #f59e0b;">Doorstep</strong> Delivery</span>
          </div>
        </div>

        <!-- Hero Lead Form Column -->
        <div class="hero-form-card" style="background: rgba(255, 255, 255, 0.05); backdrop-filter: blur(10px); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 16px; padding: 30px; box-shadow: 0 15px 35px rgba(0,0,0,0.4);">
          <h2 style="font-size: 1.4rem; color: #ffffff; margin-bottom: 8px; font-weight: 700; text-align: center;">Get Mumbai to Dehradun Quote</h2>
          <p style="font-size: 0.85rem; color: #94a3b8; text-align: center; margin-bottom: 20px;">Receive transparent cost estimation on WhatsApp in 2 minutes</p>

          <form action="#" method="POST" onsubmit="sendHeroWhatsAppLead(event, this);">
            <div style="margin-bottom: 14px;">
              <input type="text" name="name" class="form-control" placeholder="Your Full Name" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="margin-bottom: 14px;">
              <input type="tel" name="phone" class="form-control" placeholder="10-Digit Phone Number" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 10px; margin-bottom: 14px;">
              <input type="text" name="move_from" class="form-control" value="Mumbai" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
              <input type="text" name="move_to" class="form-control" value="Dehradun" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
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
            MASTER GUIDE &bull; MUMBAI TO DEHRADUN CAR TRANSPORT
          </span>
          <div style="font-size: 0.85rem; color: #94a3b8; display: flex; gap: 15px;">
            <span><i class="far fa-user" style="color: #f59e0b; margin-right: 5px;"></i> Shree Ashirwad Vehicle Logistics</span>
            <span><i class="far fa-clock" style="color: #f59e0b; margin-right: 5px;"></i> 7 Min Read</span>
          </div>
        </div>

        <h2 style="font-size: 2.1rem; font-weight: 800; color: #ffffff; line-height: 1.35; margin-bottom: 18px;">
          Complete Guide: Car Transport from Mumbai to Dehradun
        </h2>

        <p style="font-size: 1.05rem; color: #cbd5e1; line-height: 1.75; margin: 0;">
          Shipping vehicles ~1,650 km between <strong>Mumbai</strong> and <strong>Dehradun</strong> requires <strong>affordable car transport from mumbai to dehradun</strong>. Shree Ashirwad Packers and Movers provides express 4-5 day door-to-door car carrier services with 100% all-risk transit protection.
        </p>

        <!-- Key Highlights Box -->
        <div style="background: rgba(245, 158, 11, 0.08); border-left: 4px solid #f59e0b; border-radius: 8px; padding: 20px 22px; margin-top: 25px;">
          <h3 style="font-size: 1.05rem; font-weight: 700; color: #f59e0b; margin-bottom: 10px; text-transform: uppercase; letter-spacing: 0.5px;">
            <i class="fas fa-star" style="margin-right: 8px;"></i> Key Service Features
          </h3>
          <ul style="margin: 0; padding-left: 20px; color: #cbd5e1; font-size: 0.93rem; line-height: 1.75;">
            <li>Express 4 to 5 day transit duration via Vadodara, Jaipur, Delhi NCR, &amp; Saharanpur (~1,650 km).</li>
            <li>Detailed 25-point visual condition report and odometer reading documentation before loading.</li>
            <li>Enclosed container options shielding vehicles against long-distance highway weather &amp; mountain road terrain.</li>
            <li>Full assistance with Maharashtra to Uttarakhand checkpost paperwork and e-Way Bills.</li>
          </ul>
        </div>

      </div>

      <!-- Main Content Body -->
      <div style="background: #0f172a; border: 1.5px solid rgba(255, 255, 255, 0.08); border-radius: 16px; padding: 40px 35px; line-height: 1.8; color: #cbd5e1; font-size: 1rem; box-shadow: 0 10px 30px rgba(0,0,0,0.3);">
        
        <!-- Section 1: Route & Logistics -->
        <section style="margin-bottom: 35px;">
          <h2 style="font-size: 1.6rem; font-weight: 800; color: #ffffff; margin-bottom: 16px; padding-bottom: 10px; border-bottom: 2px solid rgba(245, 158, 11, 0.4);">
            1. Mumbai to Dehradun Route Logistics &amp; Transit Time
          </h2>
          <p>
            The highway corridor connecting Mumbai to Dehradun covers approximately 1,650 kilometers passing through Vadodara, Ahmedabad, Jaipur, Delhi NCR, and Saharanpur via NH48 and NH307. Estimated transit duration is <strong>4 to 5 business days</strong>.
          </p>
          <p style="margin-top: 12px;">
            We collect vehicles directly across Mumbai (Andheri, Bandra, Thane, Navi Mumbai, Powai, Borivali, Dadar, Chembur) and deliver across Dehradun (Rajpur Road, Clement Town, Jakhan, Vasant Vihar, Dalanwala, ISBT Area).
          </p>
        </section>

        <!-- Section 2: Estimated Car Shipping Cost Breakdown -->
        <section style="margin-bottom: 35px;">
          <h2 style="font-size: 1.6rem; font-weight: 800; color: #ffffff; margin-bottom: 16px; padding-bottom: 10px; border-bottom: 2px solid rgba(245, 158, 11, 0.4);">
            2. Estimated Cost Breakdown: Mumbai to Dehradun Car Transport
          </h2>
          <p>
            Here is our transparent rate table for shipping cars between Mumbai and Dehradun:
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
                  <td style="padding: 14px 16px; font-weight: 600; color: #ffffff;">Hatchback (Swift, WagonR, i10)</td>
                  <td style="padding: 14px 16px;">₹11,500 - ₹14,500</td>
                  <td style="padding: 14px 16px;">₹15,000 - ₹18,500</td>
                  <td style="padding: 14px 16px;">4 - 5 Days</td>
                </tr>
                <tr style="border-bottom: 1px solid rgba(255,255,255,0.08); background: rgba(255,255,255,0.02);">
                  <td style="padding: 14px 16px; font-weight: 600; color: #ffffff;">Sedan (City, Verna, Ciaz)</td>
                  <td style="padding: 14px 16px;">₹13,500 - ₹16,500</td>
                  <td style="padding: 14px 16px;">₹17,500 - ₹21,500</td>
                  <td style="padding: 14px 16px;">4 - 5 Days</td>
                </tr>
                <tr style="border-bottom: 1px solid rgba(255,255,255,0.08);">
                  <td style="padding: 14px 16px; font-weight: 600; color: #ffffff;">Compact SUV (Nexon, Creta, Brezza)</td>
                  <td style="padding: 14px 16px;">₹15,500 - ₹19,500</td>
                  <td style="padding: 14px 16px;">₹20,000 - ₹25,500</td>
                  <td style="padding: 14px 16px;">4 - 5 Days</td>
                </tr>
                <tr style="border-bottom: 1px solid rgba(255,255,255,0.08); background: rgba(255,255,255,0.02);">
                  <td style="padding: 14px 16px; font-weight: 600; color: #ffffff;">Luxury SUV / Premium (Fortuner, BMW, Audi)</td>
                  <td style="padding: 14px 16px;">₹19,000 - ₹24,000</td>
                  <td style="padding: 14px 16px;">₹25,000 - ₹31,500</td>
                  <td style="padding: 14px 16px;">4 - 5 Days</td>
                </tr>
              </tbody>
            </table>
          </div>
        </section>

        <!-- Section 3: Safety Protocols -->
        <section style="margin-bottom: 35px;">
          <h2 style="font-size: 1.6rem; font-weight: 800; color: #ffffff; margin-bottom: 16px; padding-bottom: 10px; border-bottom: 2px solid rgba(245, 158, 11, 0.4);">
            3. Safety &amp; Protection Standards
          </h2>
          <p>
            Vehicles are loaded using non-scratch hydraulic ramps and locked securely using 4-point wheel tie-down safety belts.
          </p>
        </section>

        <!-- Section 4: Mandatory Documents -->
        <section style="margin-bottom: 35px;">
          <h2 style="font-size: 1.6rem; font-weight: 800; color: #ffffff; margin-bottom: 16px; padding-bottom: 10px; border-bottom: 2px solid rgba(245, 158, 11, 0.4);">
            4. Required Documents for Interstate Transport
          </h2>
          <p>Provide copies of RC Smart Card, valid Insurance policy, PUC certificate, Owner ID proof, and e-Way Bill generated by our team.</p>
        </section>

        <!-- Section 5: Step-by-Step Relocation Process -->
        <section style="margin-bottom: 35px;">
          <h2 style="font-size: 1.6rem; font-weight: 800; color: #ffffff; margin-bottom: 16px; padding-bottom: 10px; border-bottom: 2px solid rgba(245, 158, 11, 0.4);">
            5. Step-by-Step Mumbai to Dehradun Process
          </h2>
          <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 20px; margin-top: 20px;">
            <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.1); border-radius: 10px; padding: 20px;">
              <div style="color: #f59e0b; font-weight: 800; font-size: 1.2rem; margin-bottom: 8px;">STEP 1</div>
              <h4 style="color: #fff; margin-bottom: 8px;">Door Inspection</h4>
              <p style="font-size: 0.88rem; color: #94a3b8; margin: 0;">25-point visual check conducted at your Mumbai address.</p>
            </div>
            <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.1); border-radius: 10px; padding: 20px;">
              <div style="color: #f59e0b; font-weight: 800; font-size: 1.2rem; margin-bottom: 8px;">STEP 2</div>
              <h4 style="color: #fff; margin-bottom: 8px;">Trailer Loading</h4>
              <p style="font-size: 0.88rem; color: #94a3b8; margin: 0;">Loaded using non-scraping hydraulic ramps and wheel safety clamps.</p>
            </div>
            <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.1); border-radius: 10px; padding: 20px;">
              <div style="color: #f59e0b; font-weight: 800; font-size: 1.2rem; margin-bottom: 8px;">STEP 3</div>
              <h4 style="color: #fff; margin-bottom: 8px;">NH48 Highway Transit</h4>
              <p style="font-size: 0.88rem; color: #94a3b8; margin: 0;">NH48 highway transit with direct SMS / WhatsApp location updates.</p>
            </div>
            <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.1); border-radius: 10px; padding: 20px;">
              <div style="color: #f59e0b; font-weight: 800; font-size: 1.2rem; margin-bottom: 8px;">STEP 4</div>
              <h4 style="color: #fff; margin-bottom: 8px;">Dehradun Handover</h4>
              <p style="font-size: 0.88rem; color: #94a3b8; margin: 0;">Door delivery in Dehradun after final physical inspection.</p>
            </div>
          </div>
        </section>

        <!-- Section 6: Factors Influencing Cost -->
        <section style="margin-bottom: 35px;">
          <h2 style="font-size: 1.6rem; font-weight: 800; color: #ffffff; margin-bottom: 16px; padding-bottom: 10px; border-bottom: 2px solid rgba(245, 158, 11, 0.4);">
            6. Factors Influencing Vehicle Shifting Tariffs
          </h2>
          <p>Key cost factors include carrier selection (open trailer vs enclosed container), car size category, and pickup location accessibility.</p>
        </section>

        <!-- Section 7: Local Coverage Areas -->
        <section style="margin-bottom: 35px;">
          <h2 style="font-size: 1.6rem; font-weight: 800; color: #ffffff; margin-bottom: 16px; padding-bottom: 10px; border-bottom: 2px solid rgba(245, 158, 11, 0.4);">
            7. Complete Coverage: Mumbai to Dehradun
          </h2>
          <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-top: 15px;">
            <div style="background: rgba(255,255,255,0.02); padding: 18px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.08);">
              <h4 style="color: #f59e0b; margin-bottom: 10px;">Mumbai Pickup Areas</h4>
              <p style="font-size: 0.9rem; color: #94a3b8; margin: 0; line-height: 1.6;">
                Andheri, Bandra, Thane, Navi Mumbai, Powai, Borivali, Dadar, Chembur.
              </p>
            </div>
            <div style="background: rgba(255,255,255,0.02); padding: 18px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.08);">
              <h4 style="color: #f59e0b; margin-bottom: 10px;">Dehradun Delivery Areas</h4>
              <p style="font-size: 0.9rem; color: #94a3b8; margin: 0; line-height: 1.6;">
                Rajpur Road, Clement Town, Jakhan, Vasant Vihar, Dalanwala, ISBT Area, Prem Nagar.
              </p>
            </div>
          </div>
        </section>

        <!-- Section 8: FAQ Section -->
        <section style="margin-bottom: 35px;">
          <h2 style="font-size: 1.6rem; font-weight: 800; color: #ffffff; margin-bottom: 20px; padding-bottom: 10px; border-bottom: 2px solid rgba(245, 158, 11, 0.4);">
            8. Frequently Asked Questions: Mumbai to Dehradun Car Transport
          </h2>

          <div style="display: flex; flex-direction: column; gap: 15px;">
            <div style="background: rgba(255,255,255,0.03); border-radius: 8px; padding: 18px 20px; border: 1px solid rgba(255,255,255,0.08);">
              <h4 style="color: #f59e0b; margin-bottom: 8px; font-size: 1.05rem;">Q1: What is the car transport cost from Mumbai to Dehradun?</h4>
              <p style="margin: 0; font-size: 0.95rem; color: #cbd5e1;">
                Average car shipping rates range from ₹11,500 to ₹19,500 for open trailers and ₹15,000 to ₹31,500 for enclosed container carriers.
              </p>
            </div>

            <div style="background: rgba(255,255,255,0.03); border-radius: 8px; padding: 18px 20px; border: 1px solid rgba(255,255,255,0.08);">
              <h4 style="color: #f59e0b; margin-bottom: 8px; font-size: 1.05rem;">Q2: What is the transit duration between Mumbai and Dehradun?</h4>
              <p style="margin: 0; font-size: 0.95rem; color: #cbd5e1;">
                Vehicle delivery along the ~1,650 km highway corridor takes approximately 4 to 5 business days.
              </p>
            </div>
          </div>
        </section>

        <!-- Section 9: Why Choose Us -->
        <section style="margin-bottom: 35px;">
          <h2 style="font-size: 1.6rem; font-weight: 800; color: #ffffff; margin-bottom: 16px; padding-bottom: 10px; border-bottom: 2px solid rgba(245, 158, 11, 0.4);">
            9. Why Choose Shree Ashirwad Packers and Movers?
          </h2>
          <p>Over 15+ years of nationwide vehicle relocation experience, 100% insured transit, and transparent tariffs.</p>
        </section>

        <!-- Section 10: Call to Action (CTA) Box -->
        <section style="background: linear-gradient(135deg, #1c2541 0%, #0b132b 100%); border: 1.5px solid rgba(245, 158, 11, 0.4); border-radius: 12px; padding: 30px; text-align: center; margin-top: 40px;">
          <h3 style="font-size: 1.6rem; color: #ffffff; font-weight: 800; margin-bottom: 10px;">
            Book Car Transport from Mumbai to Dehradun Today!
          </h3>
          <p style="color: #cbd5e1; font-size: 0.98rem; max-width: 700px; margin: 0 auto 20px;">
            Get exact pricing breakdown, free doorstep vehicle inspection, and 100% insured transport.
          </p>
          <div style="display: flex; gap: 15px; justify-content: center; flex-wrap: wrap;">
            <a href="tel:<?php echo SITE_PHONE_RAW; ?>" style="padding: 12px 30px; background: #e11d48; color: #fff; border-radius: 30px; font-weight: 700; text-decoration: none;">
              <i class="fas fa-phone-alt" style="margin-right: 6px;"></i> Call <?php echo SITE_PHONE; ?>
            </a>
            <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20a%20car%20transport%20quote%20from%20Mumbai%20to%20Dehradun." target="_blank" style="padding: 12px 30px; background: #10b981; color: #fff; border-radius: 30px; font-weight: 700; text-decoration: none;">
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
      "name": "What is the car transport cost from Mumbai to Dehradun?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Average car shipping rates range from ₹11,500 to ₹19,500 for open trailers and ₹15,000 to ₹31,500 for enclosed container carriers."
      }
    },
    {
      "@type": "Question",
      "name": "What is the transit duration between Mumbai and Dehradun?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Vehicle delivery along the ~1,650 km highway corridor takes approximately 4 to 5 business days."
      }
    }
  ]
}
</script>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
