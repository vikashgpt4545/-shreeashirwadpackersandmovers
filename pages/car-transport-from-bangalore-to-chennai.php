<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "Car Transport from Bangalore to Chennai | Express Carrier Service";
$page_desc = "Safe car transport from Bangalore to Chennai by Shree Ashirwad Packers and Movers. Express 1-2 day transit via NH44 corridor, 100% all-risk transit insurance & door pickup across Bengaluru to Chennai.";
$page_keywords = "car transport from bangalore to chennai, bangalore to chennai car transport cost, car carrier service, interstate car transport, relocation cars, doorstep car transport";
$canonical_url = "https://shreeashirwadpackersandmovers.com/pages/car-transport-from-bangalore-to-chennai.php";

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
            BANGALORE TO CHENNAI CAR SHIFTING SPECIALISTS
          </span>
          <h1 style="font-size: 2.5rem; font-weight: 800; line-height: 1.2; margin-bottom: 20px; color: #ffffff;">
            Professional <span style="color: #f59e0b;">Car Transport from Bangalore to Chennai</span>
          </h1>
          <p style="font-size: 1.1rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 25px;">
            Relocating your vehicle ~350 km from Bangalore to Chennai? Trust Shree Ashirwad Packers and Movers for express 1-2 day transit via the NH44 highway corridor. Professional multi-car <strong>car carrier service</strong>, transparent <strong>bangalore to chennai car transport cost</strong>, 100% all-risk transit insurance, and doorstep pickup.
          </p>

          <div style="display: flex; gap: 15px; flex-wrap: wrap; margin-bottom: 30px;">
            <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Now" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
              <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call Now: <?php echo SITE_PHONE; ?>
            </a>
            <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20a%20car%20transport%20quote%20from%20Bangalore%20to%20Chennai." title="Chat on WhatsApp" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
              <i class="fab fa-whatsapp" style="margin-right: 8px;"></i> Chat on WhatsApp
            </a>
          </div>

          <div style="display: flex; gap: 20px; font-size: 0.9rem; color: #94a3b8; flex-wrap: wrap;">
            <span><strong style="color: #f59e0b;">Express 24-48 Hr</strong> Delivery</span>
            <span><strong style="color: #f59e0b;">100% Insured</strong> Transport</span>
            <span><strong style="color: #f59e0b;">Doorstep</strong> Delivery</span>
          </div>
        </div>

        <!-- Hero Lead Form Column -->
        <div class="hero-form-card" style="background: rgba(255, 255, 255, 0.05); backdrop-filter: blur(10px); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 16px; padding: 30px; box-shadow: 0 15px 35px rgba(0,0,0,0.4);">
          <h2 style="font-size: 1.4rem; color: #ffffff; margin-bottom: 8px; font-weight: 700; text-align: center;">Get Bangalore to Chennai Quote</h2>
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
              <input type="text" name="move_to" class="form-control" value="Chennai" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
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
            MASTER GUIDE &bull; BANGALORE TO CHENNAI CAR TRANSPORT
          </span>
          <div style="font-size: 0.85rem; color: #94a3b8; display: flex; gap: 15px;">
            <span><i class="far fa-user" style="color: #f59e0b; margin-right: 5px;"></i> Shree Ashirwad Vehicle Logistics</span>
            <span><i class="far fa-clock" style="color: #f59e0b; margin-right: 5px;"></i> 6 Min Read</span>
          </div>
        </div>

        <h2 style="font-size: 2.1rem; font-weight: 800; color: #ffffff; line-height: 1.35; margin-bottom: 18px;">
          Complete Guide: Car Transport from Bangalore to Chennai
        </h2>

        <p style="font-size: 1.05rem; color: #cbd5e1; line-height: 1.75; margin: 0;">
          Relocating <strong>relocation cars</strong> ~350 km between the southern tech capitals of <strong>Bangalore</strong> and <strong>Chennai</strong> requires reliable <strong>interstate car transport</strong>. Shree Ashirwad Packers and Movers provides express 24-48 hour delivery via NH44, hydraulic container car carriers, pre-pickup inspection checks, and 100% all-risk transit insurance.
        </p>

        <!-- Key Highlights Box -->
        <div style="background: rgba(245, 158, 11, 0.08); border-left: 4px solid #f59e0b; border-radius: 8px; padding: 20px 22px; margin-top: 25px;">
          <h3 style="font-size: 1.05rem; font-weight: 700; color: #f59e0b; margin-bottom: 10px; text-transform: uppercase; letter-spacing: 0.5px;">
            <i class="fas fa-star" style="margin-right: 8px;"></i> Key Service Features
          </h3>
          <ul style="margin: 0; padding-left: 20px; color: #cbd5e1; font-size: 0.93rem; line-height: 1.75;">
            <li>Express 24 to 48 hour delivery via NH44 highway corridor (Hosur - Krishnagiri - Vellore).</li>
            <li>Detailed 25-point visual pre-pickup condition reporting covering exterior body and odometer readings.</li>
            <li>Enclosed container trailer options protecting cars from dust, rain, and highway gravel.</li>
            <li>Full assistance with Karnataka to Tamil Nadu interstate paperwork &amp; e-Way Bill compliance.</li>
          </ul>
        </div>

      </div>

      <!-- Main Content Body -->
      <div style="background: #0f172a; border: 1.5px solid rgba(255, 255, 255, 0.08); border-radius: 16px; padding: 40px 35px; line-height: 1.8; color: #cbd5e1; font-size: 1rem; box-shadow: 0 10px 30px rgba(0,0,0,0.3);">
        
        <!-- Section 1: Route & Logistics -->
        <section style="margin-bottom: 35px;">
          <h2 style="font-size: 1.6rem; font-weight: 800; color: #ffffff; margin-bottom: 16px; padding-bottom: 10px; border-bottom: 2px solid rgba(245, 158, 11, 0.4);">
            1. Bangalore to Chennai Route Logistics &amp; Transit Duration
          </h2>
          <p>
            The highway route connecting Bangalore to Chennai covers approximately 350 kilometers passing through Hosur, Krishnagiri, Ambur, and Vellore via NH44 and NH48. Estimated vehicle transit duration is <strong>24 to 48 hours</strong>.
          </p>
          <p style="margin-top: 12px;">
            We collect vehicles directly across Bangalore (Koramangala, Indiranagar, Whitefield, HSR Layout, Electronic City, Sarjapur) and deliver across all Chennai hubs (Velachery, Anna Nagar, T. Nagar, OMR, Adyar, Tambaram, Porur).
          </p>
        </section>

        <!-- Section 2: Estimated Car Shipping Cost Breakdown -->
        <section style="margin-bottom: 35px;">
          <h2 style="font-size: 1.6rem; font-weight: 800; color: #ffffff; margin-bottom: 16px; padding-bottom: 10px; border-bottom: 2px solid rgba(245, 158, 11, 0.4);">
            2. Estimated Bangalore to Chennai Car Transport Cost Table
          </h2>
          <p>
            The <strong>bangalore to chennai car transport cost</strong> depends on vehicle type and carrier preference. Below is our standard rate breakdown:
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
                  <td style="padding: 14px 16px;">₹5,500 - ₹7,500</td>
                  <td style="padding: 14px 16px;">₹8,500 - ₹10,500</td>
                  <td style="padding: 14px 16px;">24 Hours</td>
                </tr>
                <tr style="border-bottom: 1px solid rgba(255,255,255,0.08); background: rgba(255,255,255,0.02);">
                  <td style="padding: 14px 16px; font-weight: 600; color: #ffffff;">Sedan (City, Verna, Ciaz)</td>
                  <td style="padding: 14px 16px;">₹6,500 - ₹8,500</td>
                  <td style="padding: 14px 16px;">₹9,500 - ₹12,000</td>
                  <td style="padding: 14px 16px;">24 Hours</td>
                </tr>
                <tr style="border-bottom: 1px solid rgba(255,255,255,0.08);">
                  <td style="padding: 14px 16px; font-weight: 600; color: #ffffff;">Compact SUV (Nexon, Creta, Brezza)</td>
                  <td style="padding: 14px 16px;">₹7,500 - ₹9,500</td>
                  <td style="padding: 14px 16px;">₹11,000 - ₹13,500</td>
                  <td style="padding: 14px 16px;">24 - 36 Hours</td>
                </tr>
                <tr style="border-bottom: 1px solid rgba(255,255,255,0.08); background: rgba(255,255,255,0.02);">
                  <td style="padding: 14px 16px; font-weight: 600; color: #ffffff;">Luxury SUV / Premium (Fortuner, BMW, Mercedes)</td>
                  <td style="padding: 14px 16px;">₹9,500 - ₹12,500</td>
                  <td style="padding: 14px 16px;">₹14,000 - ₹17,500</td>
                  <td style="padding: 14px 16px;">24 - 36 Hours</td>
                </tr>
              </tbody>
            </table>
          </div>
        </section>

        <!-- Section 3: Safety & Enclosed Trailer Protection -->
        <section style="margin-bottom: 35px;">
          <h2 style="font-size: 1.6rem; font-weight: 800; color: #ffffff; margin-bottom: 16px; padding-bottom: 10px; border-bottom: 2px solid rgba(245, 158, 11, 0.4);">
            3. Specialized Car Carrier Service Safety Features
          </h2>
          <p>
            Our dedicated <strong>car carrier service</strong> ensures maximum safety during transit:
          </p>
          <ul style="padding-left: 20px; margin-top: 12px; line-height: 1.8;">
            <li><strong>Hydraulic Ramps:</strong> Gentle angle loading ensuring low ground-clearance sedans do not scrape.</li>
            <li><strong>Wheel Safety Harnesses:</strong> Non-abrasive webbed straps anchoring all four wheels to the trailer floor.</li>
            <li><strong>Transit Bubble Wrap:</strong> Protective wrapping around side mirrors, door handles, and lights.</li>
            <li><strong>Full Enclosed Container Deck:</strong> Shields high-value cars from coastal rain and highway road debris.</li>
          </ul>
        </section>

        <!-- Section 4: Mandatory Paperwork & RTO Guidelines -->
        <section style="margin-bottom: 35px;">
          <h2 style="font-size: 1.6rem; font-weight: 800; color: #ffffff; margin-bottom: 16px; padding-bottom: 10px; border-bottom: 2px solid rgba(245, 158, 11, 0.4);">
            4. Mandatory Documents for Interstate Car Relocation
          </h2>
          <p>
            For seamless crossing at Karnataka - Tamil Nadu border checkposts, provide clear copies of:
          </p>
          <ol style="padding-left: 20px; margin-top: 12px; line-height: 1.8;">
            <li>Vehicle Registration Certificate (RC).</li>
            <li>Valid Insurance Policy copy.</li>
            <li>Pollution Under Control (PUC) Certificate.</li>
            <li>Govt Identity Proof of vehicle owner.</li>
          </ol>
        </section>

        <!-- Section 5: Step-by-Step Relocation Process -->
        <section style="margin-bottom: 35px;">
          <h2 style="font-size: 1.6rem; font-weight: 800; color: #ffffff; margin-bottom: 16px; padding-bottom: 10px; border-bottom: 2px solid rgba(245, 158, 11, 0.4);">
            5. Step-by-Step Bangalore to Chennai Relocation Process
          </h2>
          <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 20px; margin-top: 20px;">
            <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.1); border-radius: 10px; padding: 20px;">
              <div style="color: #f59e0b; font-weight: 800; font-size: 1.2rem; margin-bottom: 8px;">STEP 1</div>
              <h4 style="color: #fff; margin-bottom: 8px;">Doorstep Inspection</h4>
              <p style="font-size: 0.88rem; color: #94a3b8; margin: 0;">Our executive performs a 25-point visual inspection at your Bangalore home.</p>
            </div>
            <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.1); border-radius: 10px; padding: 20px;">
              <div style="color: #f59e0b; font-weight: 800; font-size: 1.2rem; margin-bottom: 8px;">STEP 2</div>
              <h4 style="color: #fff; margin-bottom: 8px;">Hydraulic Loading</h4>
              <p style="font-size: 0.88rem; color: #94a3b8; margin: 0;">Vehicle loaded onto multi-car carrier deck with wheel lock clamps.</p>
            </div>
            <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.1); border-radius: 10px; padding: 20px;">
              <div style="color: #f59e0b; font-weight: 800; font-size: 1.2rem; margin-bottom: 8px;">STEP 3</div>
              <h4 style="color: #fff; margin-bottom: 8px;">Express Transit</h4>
              <p style="font-size: 0.88rem; color: #94a3b8; margin: 0;">Transit via NH44 corridor with direct SMS / WhatsApp location updates.</p>
            </div>
            <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.1); border-radius: 10px; padding: 20px;">
              <div style="color: #f59e0b; font-weight: 800; font-size: 1.2rem; margin-bottom: 8px;">STEP 4</div>
              <h4 style="color: #fff; margin-bottom: 8px;">Chennai Handover</h4>
              <p style="font-size: 0.88rem; color: #94a3b8; margin: 0;">Door delivery in Chennai with joint inspection against initial report.</p>
            </div>
          </div>
        </section>

        <!-- Section 6: Key Factors Influencing Cost -->
        <section style="margin-bottom: 35px;">
          <h2 style="font-size: 1.6rem; font-weight: 800; color: #ffffff; margin-bottom: 16px; padding-bottom: 10px; border-bottom: 2px solid rgba(245, 158, 11, 0.4);">
            6. Factors Affecting Bangalore to Chennai Car Transport Rates
          </h2>
          <p>
            Key variables influencing transport tariffs include vehicle class, carrier type (open multi-car vs closed container), pickup location distance, and insurance declaration values.
          </p>
        </section>

        <!-- Section 7: Local Coverage Areas -->
        <section style="margin-bottom: 35px;">
          <h2 style="font-size: 1.6rem; font-weight: 800; color: #ffffff; margin-bottom: 16px; padding-bottom: 10px; border-bottom: 2px solid rgba(245, 158, 11, 0.4);">
            7. Complete Doorstep Coverage: Bangalore to Chennai
          </h2>
          <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-top: 15px;">
            <div style="background: rgba(255,255,255,0.02); padding: 18px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.08);">
              <h4 style="color: #f59e0b; margin-bottom: 10px;">Bangalore Pickup Areas</h4>
              <p style="font-size: 0.9rem; color: #94a3b8; margin: 0; line-height: 1.6;">
                Koramangala, Indiranagar, Whitefield, HSR Layout, Electronic City, Yelahanka, Bellandur, Marathahalli, Sarjapur Road, Jayanagar.
              </p>
            </div>
            <div style="background: rgba(255,255,255,0.02); padding: 18px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.08);">
              <h4 style="color: #f59e0b; margin-bottom: 10px;">Chennai Delivery Areas</h4>
              <p style="font-size: 0.9rem; color: #94a3b8; margin: 0; line-height: 1.6;">
                Velachery, Anna Nagar, T. Nagar, OMR (Old Mahabalipuram Road), Adyar, Tambaram, Porur, Guindy, Nungambakkam, Chromepet.
              </p>
            </div>
          </div>
        </section>

        <!-- Section 8: Frequently Asked Questions (FAQ) -->
        <section style="margin-bottom: 35px;">
          <h2 style="font-size: 1.6rem; font-weight: 800; color: #ffffff; margin-bottom: 20px; padding-bottom: 10px; border-bottom: 2px solid rgba(245, 158, 11, 0.4);">
            8. Frequently Asked Questions: Bangalore to Chennai Car Transport
          </h2>

          <div style="display: flex; flex-direction: column; gap: 15px;">
            <div style="background: rgba(255,255,255,0.03); border-radius: 8px; padding: 18px 20px; border: 1px solid rgba(255,255,255,0.08);">
              <h4 style="color: #f59e0b; margin-bottom: 8px; font-size: 1.05rem;">Q1: What is the cost of car transport from Bangalore to Chennai?</h4>
              <p style="margin: 0; font-size: 0.95rem; color: #cbd5e1;">
                Car shipping cost ranges from ₹5,500 to ₹9,500 for open trailers and ₹8,500 to ₹14,000 for enclosed container carriers based on car model.
              </p>
            </div>

            <div style="background: rgba(255,255,255,0.03); border-radius: 8px; padding: 18px 20px; border: 1px solid rgba(255,255,255,0.08);">
              <h4 style="color: #f59e0b; margin-bottom: 8px; font-size: 1.05rem;">Q2: How fast is car delivery from Bangalore to Chennai?</h4>
              <p style="margin: 0; font-size: 0.95rem; color: #cbd5e1;">
                Because the distance is ~350 km via NH44, express vehicle delivery is completed within 24 to 48 hours.
              </p>
            </div>

            <div style="background: rgba(255,255,255,0.03); border-radius: 8px; padding: 18px 20px; border: 1px solid rgba(255,255,255,0.08);">
              <h4 style="color: #f59e0b; margin-bottom: 8px; font-size: 1.05rem;">Q3: Is door pickup available across all Bengaluru sectors?</h4>
              <p style="margin: 0; font-size: 0.95rem; color: #cbd5e1;">
                Yes, our doorstep car transport team picks up vehicles directly from any apartment or office address in Bangalore.
              </p>
            </div>
          </div>
        </section>

        <!-- Section 9: Why Choose Shree Ashirwad Packers and Movers -->
        <section style="margin-bottom: 35px;">
          <h2 style="font-size: 1.6rem; font-weight: 800; color: #ffffff; margin-bottom: 16px; padding-bottom: 10px; border-bottom: 2px solid rgba(245, 158, 11, 0.4);">
            9. Why Choose Shree Ashirwad Packers and Movers?
          </h2>
          <p>
            We operate direct daily car carrier runs between Bangalore and Chennai with 100% all-risk insurance protection and real-time transit tracking.
          </p>
        </section>

        <!-- Section 10: Call to Action (CTA) Box -->
        <section style="background: linear-gradient(135deg, #1c2541 0%, #0b132b 100%); border: 1.5px solid rgba(245, 158, 11, 0.4); border-radius: 12px; padding: 30px; text-align: center; margin-top: 40px;">
          <h3 style="font-size: 1.6rem; color: #ffffff; font-weight: 800; margin-bottom: 10px;">
            Book Express Car Transport from Bangalore to Chennai Now!
          </h3>
          <p style="color: #cbd5e1; font-size: 0.98rem; max-width: 700px; margin: 0 auto 20px;">
            Get instant price estimates, free doorstep pickup, and 100% insured vehicle transport.
          </p>
          <div style="display: flex; gap: 15px; justify-content: center; flex-wrap: wrap;">
            <a href="tel:<?php echo SITE_PHONE_RAW; ?>" style="padding: 12px 30px; background: #e11d48; color: #fff; border-radius: 30px; font-weight: 700; text-decoration: none;">
              <i class="fas fa-phone-alt" style="margin-right: 6px;"></i> Call <?php echo SITE_PHONE; ?>
            </a>
            <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20a%20car%20transport%20quote%20from%20Bangalore%20to%20Chennai." target="_blank" style="padding: 12px 30px; background: #10b981; color: #fff; border-radius: 30px; font-weight: 700; text-decoration: none;">
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
      "name": "What is the cost of car transport from Bangalore to Chennai?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Car shipping cost ranges from ₹5,500 to ₹9,500 for open trailers and ₹8,500 to ₹14,000 for enclosed container carriers based on car model."
      }
    },
    {
      "@type": "Question",
      "name": "How fast is car delivery from Bangalore to Chennai?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Because the distance is ~350 km via NH44, express vehicle delivery is completed within 24 to 48 hours."
      }
    },
    {
      "@type": "Question",
      "name": "Is door pickup available across all Bengaluru sectors?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, our doorstep car transport team picks up vehicles directly from any apartment or office address in Bangalore."
      }
    }
  ]
}
</script>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
