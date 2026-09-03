<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "Car Transportation by Train in Patna | Railway Auto Parcel";
$page_desc = "Affordable car transportation by train in Patna by Shree Ashirwad Packers and Movers. Professional Indian Railways auto parcel booking, station loading at Patna Jn & Danapur, 100% transit insurance & doorstep delivery.";
$page_keywords = "car transportation by train in patna, car parcel by train patna, indian railways car transport patna, railway car carriage patna, Patna junction car loading";
$canonical_url = "https://shreeashirwadpackersandmovers.com/pages/car-transportation-by-train-in-patna.php";

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
            INDIAN RAILWAYS CAR PARCEL PATNA SPECIALISTS
          </span>
          <h1 style="font-size: 2.5rem; font-weight: 800; line-height: 1.2; margin-bottom: 20px; color: #ffffff;">
            Affordable <span style="color: #f59e0b;">Car Transportation by Train in Patna</span>
          </h1>
          <p style="font-size: 1.1rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 25px;">
            Looking for reliable <strong>car transportation by train in patna</strong>? Shree Ashirwad Packers and Movers provides end-to-end Indian Railways auto parcel (NMG / VPU) wagon bookings from Patna Junction and Danapur Station. Includes doorstep pickup in Patna, station loading &amp; securing, 100% all-risk transit insurance, and destination delivery.
          </p>

          <div style="display: flex; gap: 15px; flex-wrap: wrap; margin-bottom: 30px;">
            <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Now" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
              <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call Now: <?php echo SITE_PHONE; ?>
            </a>
            <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20a%20car%20transportation%20by%20train%20quote%20for%20Patna." title="Chat on WhatsApp" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
              <i class="fab fa-whatsapp" style="margin-right: 8px;"></i> Chat on WhatsApp
            </a>
          </div>

          <div style="display: flex; gap: 20px; font-size: 0.9rem; color: #94a3b8; flex-wrap: wrap;">
            <span><strong style="color: #f59e0b;">Railway</strong> Auto Rake</span>
            <span><strong style="color: #f59e0b;">100% Insured</strong> Shipping</span>
            <span><strong style="color: #f59e0b;">Door-to-Door</strong> Handling</span>
          </div>
        </div>

        <!-- Hero Lead Form Column -->
        <div class="hero-form-card" style="background: rgba(255, 255, 255, 0.05); backdrop-filter: blur(10px); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 16px; padding: 30px; box-shadow: 0 15px 35px rgba(0,0,0,0.4);">
          <h2 style="font-size: 1.4rem; color: #ffffff; margin-bottom: 8px; font-weight: 700; text-align: center;">Get Railway Car Quote</h2>
          <p style="font-size: 0.85rem; color: #94a3b8; text-align: center; margin-bottom: 20px;">Receive transparent cost estimation on WhatsApp in 2 minutes</p>

          <form action="#" method="POST" onsubmit="sendHeroWhatsAppLead(event, this);">
            <div style="margin-bottom: 14px;">
              <input type="text" name="name" class="form-control" placeholder="Your Full Name" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="margin-bottom: 14px;">
              <input type="tel" name="phone" class="form-control" placeholder="10-Digit Phone Number" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 10px; margin-bottom: 14px;">
              <input type="text" name="move_from" class="form-control" value="Patna Junction / Danapur" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
              <input type="text" name="move_to" class="form-control" placeholder="Moving To (City/State)" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
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
            MASTER GUIDE &bull; CAR TRANSPORTATION BY TRAIN IN PATNA
          </span>
          <div style="font-size: 0.85rem; color: #94a3b8; display: flex; gap: 15px;">
            <span><i class="far fa-user" style="color: #f59e0b; margin-right: 5px;"></i> Shree Ashirwad Vehicle Logistics</span>
            <span><i class="far fa-clock" style="color: #f59e0b; margin-right: 5px;"></i> 7 Min Read</span>
          </div>
        </div>

        <h2 style="font-size: 2.1rem; font-weight: 800; color: #ffffff; line-height: 1.35; margin-bottom: 18px;">
          Complete Guide: Car Transportation by Train in Patna
        </h2>

        <p style="font-size: 1.05rem; color: #cbd5e1; line-height: 1.75; margin: 0;">
          Transporting vehicles via Indian Railways auto parcel rakes from <strong>Patna Junction</strong> or <strong>Danapur Railway Station</strong> is a budget-friendly and weather-proof alternative to long-distance road driving. Shree Ashirwad Packers handles railway parcel clearance, wheel securing, transit insurance, and doorstep delivery.
        </p>

        <!-- Key Highlights Box -->
        <div style="background: rgba(245, 158, 11, 0.08); border-left: 4px solid #f59e0b; border-radius: 8px; padding: 20px 22px; margin-top: 25px;">
          <h3 style="font-size: 1.05rem; font-weight: 700; color: #f59e0b; margin-bottom: 10px; text-transform: uppercase; letter-spacing: 0.5px;">
            <i class="fas fa-star" style="margin-right: 8px;"></i> Key Service Features
          </h3>
          <ul style="margin: 0; padding-left: 20px; color: #cbd5e1; font-size: 0.93rem; line-height: 1.75;">
            <li>Direct pickup from home in Patna (B Bailey Road, Kankarbagh, Boring Road, Patliputra, Danapur).</li>
            <li>Complete station documentation and Indian Railways VPU / NMG auto-rake parcel booking.</li>
            <li>Zero road wear-and-tear &amp; complete weather protection inside locked railway parcel coaches.</li>
            <li>Official Railway Consignment Receipt (RR) and IBA-approved GST invoices.</li>
          </ul>
        </div>

      </div>

      <!-- Main Content Body -->
      <div style="background: #0f172a; border: 1.5px solid rgba(255, 255, 255, 0.08); border-radius: 16px; padding: 40px 35px; line-height: 1.8; color: #cbd5e1; font-size: 1rem; box-shadow: 0 10px 30px rgba(0,0,0,0.3);">
        
        <!-- Section 1: Route & Logistics -->
        <section style="margin-bottom: 35px;">
          <h2 style="font-size: 1.6rem; font-weight: 800; color: #ffffff; margin-bottom: 16px; padding-bottom: 10px; border-bottom: 2px solid rgba(245, 158, 11, 0.4);">
            1. Patna Railway Auto Parcel Logistics Overview
          </h2>
          <p>
            Patna Junction (PNBE) and Danapur (DNR) serve as major East Central Railway parcel nodes. Vehicles are transported in specialized covered NMG (New Modified Goods) or VP (Parcel Van) auto rakes attached to express passenger and dedicated parcel express trains.
          </p>
        </section>

        <!-- Section 2: Estimated Car Shipping Cost Breakdown -->
        <section style="margin-bottom: 35px;">
          <h2 style="font-size: 1.6rem; font-weight: 800; color: #ffffff; margin-bottom: 16px; padding-bottom: 10px; border-bottom: 2px solid rgba(245, 158, 11, 0.4);">
            2. Estimated Cost Breakdown: Car Transportation by Train from Patna
          </h2>
          <p>
            Here is our transparent rate table for shipping cars by train from Patna:
          </p>

          <div style="overflow-x: auto; margin: 25px 0;">
            <table style="width: 100%; border-collapse: collapse; text-align: left; font-size: 0.95rem; color: #cbd5e1;">
              <thead>
                <tr style="background: #1e293b; color: #f59e0b; border-bottom: 2px solid rgba(245, 158, 11, 0.5);">
                  <th style="padding: 14px 16px;">Car Model Category</th>
                  <th style="padding: 14px 16px;">Regional Routes (&lt;500 km)</th>
                  <th style="padding: 14px 16px;">Medium Routes (500–1200 km)</th>
                  <th style="padding: 14px 16px;">Metro Routes (&gt;1200 km)</th>
                </tr>
              </thead>
              <tbody>
                <tr style="border-bottom: 1px solid rgba(255,255,255,0.08);">
                  <td style="padding: 14px 16px; font-weight: 600; color: #ffffff;">Hatchback (Alto, WagonR, i10)</td>
                  <td style="padding: 14px 16px;">₹8,500 - ₹11,000</td>
                  <td style="padding: 14px 16px;">₹11,000 - ₹14,500</td>
                  <td style="padding: 14px 16px;">₹14,500 - ₹18,000</td>
                </tr>
                <tr style="border-bottom: 1px solid rgba(255,255,255,0.08); background: rgba(255,255,255,0.02);">
                  <td style="padding: 14px 16px; font-weight: 600; color: #ffffff;">Sedan (Dzire, City, Verna)</td>
                  <td style="padding: 14px 16px;">₹9,500 - ₹12,500</td>
                  <td style="padding: 14px 16px;">₹12,500 - ₹16,000</td>
                  <td style="padding: 14px 16px;">₹16,000 - ₹20,000</td>
                </tr>
                <tr style="border-bottom: 1px solid rgba(255,255,255,0.08);">
                  <td style="padding: 14px 16px; font-weight: 600; color: #ffffff;">Compact / Mid-SUV (Creta, Nexon, Brezza)</td>
                  <td style="padding: 14px 16px;">₹11,000 - ₹14,000</td>
                  <td style="padding: 14px 16px;">₹14,000 - ₹18,500</td>
                  <td style="padding: 14px 16px;">₹18,500 - ₹23,000</td>
                </tr>
                <tr style="border-bottom: 1px solid rgba(255,255,255,0.08); background: rgba(255,255,255,0.02);">
                  <td style="padding: 14px 16px; font-weight: 600; color: #ffffff;">Large SUV / Premium (Innova, Fortuner, XUV700)</td>
                  <td style="padding: 14px 16px;">₹13,000 - ₹16,500</td>
                  <td style="padding: 14px 16px;">₹16,500 - ₹21,000</td>
                  <td style="padding: 14px 16px;">₹21,000 - ₹26,000</td>
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
            Cars are driven into locked railway parcel coaches, secured with heavy-duty wooden chocks and wheel clamps. Per Railway safety mandates, fuel levels are reduced to less than 1-2 liters.
          </p>
        </section>

        <!-- Section 4: Mandatory Documents -->
        <section style="margin-bottom: 35px;">
          <h2 style="font-size: 1.6rem; font-weight: 800; color: #ffffff; margin-bottom: 16px; padding-bottom: 10px; border-bottom: 2px solid rgba(245, 158, 11, 0.4);">
            4. Required Documents for Railway Car Parcel
          </h2>
          <p>Original Vehicle Registration Certificate (RC), valid car insurance copy, Owner Government ID proof (Aadhaar/PAN), and Railway Parcel Declaration form filled by our team.</p>
        </section>

        <!-- Section 5: Step-by-Step Relocation Process -->
        <section style="margin-bottom: 35px;">
          <h2 style="font-size: 1.6rem; font-weight: 800; color: #ffffff; margin-bottom: 16px; padding-bottom: 10px; border-bottom: 2px solid rgba(245, 158, 11, 0.4);">
            5. Step-by-Step Railway Transport Process
          </h2>
          <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 20px; margin-top: 20px;">
            <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.1); border-radius: 10px; padding: 20px;">
              <div style="color: #f59e0b; font-weight: 800; font-size: 1.2rem; margin-bottom: 8px;">STEP 1</div>
              <h4 style="color: #fff; margin-bottom: 8px;">Home Pickup</h4>
              <p style="font-size: 0.88rem; color: #94a3b8; margin: 0;">Vehicle picked up from your address in Patna &amp; driven to station parcel hub.</p>
            </div>
            <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.1); border-radius: 10px; padding: 20px;">
              <div style="color: #f59e0b; font-weight: 800; font-size: 1.2rem; margin-bottom: 8px;">STEP 2</div>
              <h4 style="color: #fff; margin-bottom: 8px;">Station Loading</h4>
              <p style="font-size: 0.88rem; color: #94a3b8; margin: 0;">Inspection, fuel drainage, and loading into locked Indian Railways VPU rake.</p>
            </div>
            <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.1); border-radius: 10px; padding: 20px;">
              <div style="color: #f59e0b; font-weight: 800; font-size: 1.2rem; margin-bottom: 8px;">STEP 3</div>
              <h4 style="color: #fff; margin-bottom: 8px;">Rail Express Transit</h4>
              <p style="font-size: 0.88rem; color: #94a3b8; margin: 0;">Express transit with Railway Parcel consignment (RR) tracking number.</p>
            </div>
            <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.1); border-radius: 10px; padding: 20px;">
              <div style="color: #f59e0b; font-weight: 800; font-size: 1.2rem; margin-bottom: 8px;">STEP 4</div>
              <h4 style="color: #fff; margin-bottom: 8px;">Destination Unloading</h4>
              <p style="font-size: 0.88rem; color: #94a3b8; margin: 0;">Station clearance at destination &amp; door delivery to your doorstep.</p>
            </div>
          </div>
        </section>

        <!-- Section 6: Factors Influencing Cost -->
        <section style="margin-bottom: 35px;">
          <h2 style="font-size: 1.6rem; font-weight: 800; color: #ffffff; margin-bottom: 16px; padding-bottom: 10px; border-bottom: 2px solid rgba(245, 158, 11, 0.4);">
            6. Factors Influencing Railway Car Transport Tariffs
          </h2>
          <p>Railway freight distance slab, car cubic space requirement, station handling charges, and transit insurance valuation.</p>
        </section>

        <!-- Section 7: Local Coverage Areas -->
        <section style="margin-bottom: 35px;">
          <h2 style="font-size: 1.6rem; font-weight: 800; color: #ffffff; margin-bottom: 16px; padding-bottom: 10px; border-bottom: 2px solid rgba(245, 158, 11, 0.4);">
            7. Pickup Coverage in Patna Region
          </h2>
          <div style="background: rgba(255,255,255,0.02); padding: 18px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.08);">
            <h4 style="color: #f59e0b; margin-bottom: 10px;">Patna Pickup Zones</h4>
            <p style="font-size: 0.9rem; color: #94a3b8; margin: 0; line-height: 1.6;">
              Patna Junction, Danapur, Kankarbagh, Boring Road, Patliputra Colony, Bailey Road, Rajendra Nagar, Anisabad, Bihta.
            </p>
          </div>
        </section>

        <!-- Section 8: FAQ Section -->
        <section style="margin-bottom: 35px;">
          <h2 style="font-size: 1.6rem; font-weight: 800; color: #ffffff; margin-bottom: 20px; padding-bottom: 10px; border-bottom: 2px solid rgba(245, 158, 11, 0.4);">
            8. Frequently Asked Questions: Car Transport by Train in Patna
          </h2>

          <div style="display: flex; flex-direction: column; gap: 15px;">
            <div style="background: rgba(255,255,255,0.03); border-radius: 8px; padding: 18px 20px; border: 1px solid rgba(255,255,255,0.08);">
              <h4 style="color: #f59e0b; margin-bottom: 8px; font-size: 1.05rem;">Q1: How does car transportation by train work in Patna?</h4>
              <p style="margin: 0; font-size: 0.95rem; color: #cbd5e1;">
                Your car is picked up from your home in Patna, taken to Patna Junction or Danapur Railway Station parcel office, loaded into dedicated Indian Railways auto-VPU parcel rakes, and delivered to your destination city.
              </p>
            </div>

            <div style="background: rgba(255,255,255,0.03); border-radius: 8px; padding: 18px 20px; border: 1px solid rgba(255,255,255,0.08);">
              <h4 style="color: #f59e0b; margin-bottom: 8px; font-size: 1.05rem;">Q2: What are the charges for car transport by train from Patna?</h4>
              <p style="margin: 0; font-size: 0.95rem; color: #cbd5e1;">
                Railway car transport cost ranges from ₹8,500 to ₹18,000+ depending on destination distance, car model size, and railway parcel freight tariffs.
              </p>
            </div>

            <div style="background: rgba(255,255,255,0.03); border-radius: 8px; padding: 18px 20px; border: 1px solid rgba(255,255,255,0.08);">
              <h4 style="color: #f59e0b; margin-bottom: 8px; font-size: 1.05rem;">Q3: Should the car fuel tank be empty for railway transport?</h4>
              <p style="margin: 0; font-size: 0.95rem; color: #cbd5e1;">
                Yes, Railway Parcel Safety Regulations mandate that the car fuel tank must have less than 1–2 liters of fuel during train transit.
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
            Book Car Transportation by Train in Patna Today!
          </h3>
          <p style="color: #cbd5e1; font-size: 0.98rem; max-width: 700px; margin: 0 auto 20px;">
            Get exact pricing breakdown, free doorstep vehicle inspection, and 100% insured transport.
          </p>
          <div style="display: flex; gap: 15px; justify-content: center; flex-wrap: wrap;">
            <a href="tel:<?php echo SITE_PHONE_RAW; ?>" style="padding: 12px 30px; background: #e11d48; color: #fff; border-radius: 30px; font-weight: 700; text-decoration: none;">
              <i class="fas fa-phone-alt" style="margin-right: 6px;"></i> Call <?php echo SITE_PHONE; ?>
            </a>
            <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20a%20car%20transportation%20by%20train%20quote%20for%20Patna." target="_blank" style="padding: 12px 30px; background: #10b981; color: #fff; border-radius: 30px; font-weight: 700; text-decoration: none;">
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
      "name": "How does car transportation by train work in Patna?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Your car is picked up from your home in Patna, taken to Patna Junction or Danapur Railway Station parcel office, loaded into dedicated Indian Railways auto-VPU parcel rakes, and delivered to your destination city."
      }
    },
    {
      "@type": "Question",
      "name": "What are the charges for car transport by train from Patna?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Railway car transport cost ranges from ₹8,500 to ₹18,000+ depending on destination distance, car model size, and railway parcel freight tariffs."
      }
    },
    {
      "@type": "Question",
      "name": "Should the car fuel tank be empty for railway transport?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, Railway Parcel Safety Regulations mandate that the car fuel tank must have less than 1–2 liters of fuel during train transit."
      }
    }
  ]
}
</script>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
