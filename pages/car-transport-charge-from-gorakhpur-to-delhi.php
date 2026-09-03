<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "Car Transport Charge from Gorakhpur to Delhi | Shifting Rates";
$page_desc = "Get transparent car transport charge from Gorakhpur to Delhi with Shree Ashirwad Packers and Movers. Specialized enclosed car carriers, 100% all-risk transit insurance, live GPS tracking & door-to-door delivery across Delhi NCR. Request a free quote today!";
$page_keywords = "car transport charge from gorakhpur to delhi, car transport in delhi, car transport service delhi, car transport charges, car shipping cost, car shifting charges, car transport cost, vehicle transport services, car movers and packers, enclosed auto transport services";
$canonical_url = "https://shreeashirwadpackersandmovers.com/pages/car-transport-charge-from-gorakhpur-to-delhi.php";

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
            GORAKHPUR TO DELHI CAR SHIPPING RATES
          </span>
          <h1 style="font-size: 2.5rem; font-weight: 800; line-height: 1.2; margin-bottom: 20px; color: #ffffff;">
            Affordable <span style="color: #f59e0b;">Car Transport Charge from Gorakhpur to Delhi</span>
          </h1>
          <p style="font-size: 1.1rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 25px;">
            Looking for transparent car transport charges from Gorakhpur to Delhi? Shree Ashirwad Packers and Movers provides fast 2–3 day vehicle shipping via Purvanchal &amp; Yamuna Expressways (~780 km) with enclosed hydraulic container trucks, 100% all-risk transit insurance, and doorstep pickup.
          </p>

          <div style="display: flex; gap: 15px; flex-wrap: wrap; margin-bottom: 30px;">
            <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Now" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
              <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call Now: <?php echo SITE_PHONE; ?>
            </a>
            <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20a%20car%20transport%20quote%20from%20Gorakhpur%20to%20Delhi." title="Chat on WhatsApp" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
              <i class="fab fa-whatsapp" style="margin-right: 8px;"></i> Chat on WhatsApp
            </a>
          </div>

          <div style="display: flex; gap: 20px; font-size: 0.9rem; color: #94a3b8; flex-wrap: wrap;">
            <span><strong style="color: #f59e0b;">100% Insured</strong> Transport</span>
            <span><strong style="color: #f59e0b;">Hydraulic Ramp</strong> Loading</span>
            <span><strong style="color: #f59e0b;">Door-to-Door</strong> Delivery</span>
          </div>
        </div>

        <!-- Hero Lead Form Column -->
        <div class="hero-form-card" style="background: rgba(255, 255, 255, 0.05); backdrop-filter: blur(10px); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 16px; padding: 30px; box-shadow: 0 15px 35px rgba(0,0,0,0.4);">
          <h2 style="font-size: 1.4rem; color: #ffffff; margin-bottom: 8px; font-weight: 700; text-align: center;">Get Gorakhpur to Delhi Quote</h2>
          <p style="font-size: 0.85rem; color: #94a3b8; text-align: center; margin-bottom: 20px;">Get a transparent car shipping cost estimate on WhatsApp instantly</p>

          <form action="#" method="POST" onsubmit="sendHeroWhatsAppLead(event, this);">
            <div style="margin-bottom: 14px;">
              <input type="text" name="name" class="form-control" placeholder="Your Full Name" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="margin-bottom: 14px;">
              <input type="tel" name="phone" class="form-control" placeholder="10-Digit Phone Number" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 10px; margin-bottom: 14px;">
              <input type="text" name="move_from" class="form-control" value="Gorakhpur" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
              <input type="text" name="move_to" class="form-control" value="Delhi" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
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
            COMPREHENSIVE GUIDE &bull; GORAKHPUR TO DELHI CAR TRANSPORT
          </span>
          <div style="font-size: 0.85rem; color: #94a3b8; display: flex; gap: 15px;">
            <span><i class="far fa-user" style="color: #f59e0b; margin-right: 5px;"></i> Shree Ashirwad Vehicle Logistics</span>
            <span><i class="far fa-clock" style="color: #f59e0b; margin-right: 5px;"></i> 7 Min Read</span>
          </div>
        </div>

        <h2 style="font-size: 2.1rem; font-weight: 800; color: #ffffff; line-height: 1.35; margin-bottom: 18px;">
          Complete Guide for Car Transport Charges from Gorakhpur to Delhi
        </h2>

        <p style="font-size: 1.05rem; color: #cbd5e1; line-height: 1.75; margin: 0;">
          Relocating a vehicle over ~780 km from <strong>Gorakhpur, Uttar Pradesh</strong> to <strong>Delhi NCR</strong> requires trusted vehicle movers, fast expressway routing via Lucknow &amp; Agra, and transparent pricing. Customers evaluating the <em>car transport charge from gorakhpur to delhi</em> can rely on Shree Ashirwad Packers and Movers for binding estimates with zero hidden fees.
        </p>

        <!-- Key Highlights Box -->
        <div style="background: rgba(245, 158, 11, 0.08); border-left: 4px solid #f59e0b; border-radius: 8px; padding: 20px 22px; margin-top: 25px;">
          <h3 style="font-size: 1.05rem; font-weight: 700; color: #f59e0b; margin-bottom: 10px; text-transform: uppercase; letter-spacing: 0.5px;">
            <i class="fas fa-star" style="margin-right: 8px;"></i> Key Service Highlights
          </h3>
          <ul style="margin: 0; padding-left: 20px; color: #cbd5e1; font-size: 0.93rem; line-height: 1.75;">
            <li>Expressway transit via Purvanchal, Agra-Lucknow &amp; Yamuna Expressways (2–3 Days delivery).</li>
            <li>Enclosed Hydraulic Containers and open multi-car carrier trailers for complete vehicle safety.</li>
            <li>Pre-pickup 25-point visual condition report recording odometer reading and vehicle exterior status.</li>
            <li>100% written price quotation with zero unexpected tolls, fuel surcharges, or hidden costs.</li>
          </ul>
        </div>

      </div>

      <!-- Main Content Body -->
      <div style="background: #0f172a; border: 1.5px solid rgba(255, 255, 255, 0.08); border-radius: 16px; padding: 40px 35px; line-height: 1.8; color: #cbd5e1; font-size: 1rem; box-shadow: 0 10px 30px rgba(0,0,0,0.3);">
        
        <!-- Section 1: Route & Logistics -->
        <section style="margin-bottom: 35px;">
          <h2 style="font-size: 1.6rem; font-weight: 800; color: #ffffff; margin-bottom: 16px; padding-bottom: 10px; border-bottom: 2px solid rgba(245, 158, 11, 0.4);">
            1. Gorakhpur to Delhi Route Logistics &amp; Transit Time
          </h2>
          <p>
            The major highway corridor connecting Gorakhpur to Delhi NCR covers approximately 780 kilometers, traveling via Ayodhya, Lucknow, Kanpur, Agra, and Noida along high-speed expressways. Standard vehicle shipping takes just <strong>2 to 3 business days</strong>.
          </p>
          <p style="margin-top: 12px;">
            We offer direct doorstep pickup across all Gorakhpur localities (Golghar, Mohaddipur, Betiahata, Civil Lines, Taramandal, Medical College Road, Shahpur) and deliver directly to your residence across Delhi NCR (Connaught Place, Dwarka, Rohini, South Extension, Janakpuri, Laxmi Nagar, Noida, and Gurgaon).
          </p>
        </section>

        <!-- Section 2: Estimated Car Shipping Cost Breakdown -->
        <section style="margin-bottom: 35px;">
          <h2 style="font-size: 1.6rem; font-weight: 800; color: #ffffff; margin-bottom: 16px; padding-bottom: 10px; border-bottom: 2px solid rgba(245, 158, 11, 0.4);">
            2. Car Transport Charge Breakdown: Gorakhpur to Delhi
          </h2>
          <p>
            Car shifting rates between Gorakhpur and Delhi are calculated based on car category, dimensions, carrier specification (Open Carrier vs Covered Hydraulic Container), and insurance valuation. Below is an estimated tariff table:
          </p>

          <div style="overflow-x: auto; margin: 25px 0;">
            <table style="width: 100%; border-collapse: collapse; text-align: left; font-size: 0.9rem; color: #cbd5e1;">
              <thead>
                <tr style="background: #1e293b; color: #f59e0b;">
                  <th style="padding: 12px; border: 1px solid rgba(255,255,255,0.1);">Vehicle Category</th>
                  <th style="padding: 12px; border: 1px solid rgba(255,255,255,0.1);">Open Car Carrier Tariff</th>
                  <th style="padding: 12px; border: 1px solid rgba(255,255,255,0.1);">Enclosed Container Tariff</th>
                  <th style="padding: 12px; border: 1px solid rgba(255,255,255,0.1);">Est. Transit Time</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="padding: 12px; border: 1px solid rgba(255,255,255,0.1); font-weight: 700;">Hatchback (Alto, Swift, WagonR)</td>
                  <td style="padding: 12px; border: 1px solid rgba(255,255,255,0.1);">₹6,500 – ₹8,500</td>
                  <td style="padding: 12px; border: 1px solid rgba(255,255,255,0.1);">₹9,500 – ₹12,000</td>
                  <td style="padding: 12px; border: 1px solid rgba(255,255,255,0.1);">2 – 3 Days</td>
                </tr>
                <tr style="background: rgba(255,255,255,0.02);">
                  <td style="padding: 12px; border: 1px solid rgba(255,255,255,0.1); font-weight: 700;">Sedan (Dzire, City, Verna)</td>
                  <td style="padding: 12px; border: 1px solid rgba(255,255,255,0.1);">₹7,500 – ₹10,000</td>
                  <td style="padding: 12px; border: 1px solid rgba(255,255,255,0.1);">₹11,000 – ₹14,000</td>
                  <td style="padding: 12px; border: 1px solid rgba(255,255,255,0.1);">2 – 3 Days</td>
                </tr>
                <tr>
                  <td style="padding: 12px; border: 1px solid rgba(255,255,255,0.1); font-weight: 700;">Compact / Full SUV (Brezza, Creta, Fortuner)</td>
                  <td style="padding: 12px; border: 1px solid rgba(255,255,255,0.1);">₹9,500 – ₹13,000</td>
                  <td style="padding: 12px; border: 1px solid rgba(255,255,255,0.1);">₹14,000 – ₹17,500</td>
                  <td style="padding: 12px; border: 1px solid rgba(255,255,255,0.1);">2 – 3 Days</td>
                </tr>
                <tr style="background: rgba(255,255,255,0.02);">
                  <td style="padding: 12px; border: 1px solid rgba(255,255,255,0.1); font-weight: 700;">Luxury &amp; Premium Vehicles</td>
                  <td style="padding: 12px; border: 1px solid rgba(255,255,255,0.1);">Not Recommended</td>
                  <td style="padding: 12px; border: 1px solid rgba(255,255,255,0.1);">₹18,000 – ₹24,000</td>
                  <td style="padding: 12px; border: 1px solid rgba(255,255,255,0.1);">2 Days</td>
                </tr>
              </tbody>
            </table>
          </div>
          <p style="font-size: 0.85rem; color: #94a3b8;">*Note: All-risk transit insurance (0.3% of vehicle value) and statutory 18% GST apply as per final quotation.</p>
        </section>

        <!-- Section 3: Statutory & RTO Rules -->
        <section style="margin-bottom: 35px;">
          <h2 style="font-size: 1.6rem; font-weight: 800; color: #ffffff; margin-bottom: 16px; padding-bottom: 10px; border-bottom: 2px solid rgba(245, 158, 11, 0.4);">
            3. RTO &amp; Highway Documentation Requirements
          </h2>
          <p>
            Moving a car within UP to Delhi NCR requires key documentation for highway checkpoint clearance:
          </p>
          <ul style="padding-left: 20px; margin-top: 10px; line-height: 1.85;">
            <li><strong>Vehicle Registration Certificate (RC):</strong> Original or self-attested clear copy.</li>
            <li><strong>Valid Motor Insurance Policy:</strong> Active third-party or comprehensive policy copy.</li>
            <li><strong>Pollution Under Control (PUC) Certificate:</strong> Valid emission test clearance.</li>
            <li><strong>Owner Identity Proof:</strong> Aadhaar Card, PAN Card, or Driving License.</li>
            <li><strong>Consignment Lorry Receipt (LR Copy):</strong> Official document issued by Shree Ashirwad Packers detailing driver credentials and car inventory.</li>
          </ul>
        </section>

        <!-- Section 4: Safety & Loading Protocols -->
        <section style="margin-bottom: 35px;">
          <h2 style="font-size: 1.6rem; font-weight: 800; color: #ffffff; margin-bottom: 16px; padding-bottom: 10px; border-bottom: 2px solid rgba(245, 158, 11, 0.4);">
            4. Safety Protocols &amp; Hydraulic Ramp Loading
          </h2>
          <p>
            We strictly enforce physical protection standards for every car shipped from Gorakhpur:
          </p>
          <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 15px; margin-top: 20px;">
            <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(245,158,11,0.2); padding: 18px; border-radius: 10px;">
              <h4 style="color: #f59e0b; margin-bottom: 6px;">1. Joint Inspection</h4>
              <p style="font-size: 0.88rem; margin: 0;">Comprehensive 25-point visual check documenting existing body condition and odometer reading.</p>
            </div>
            <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(245,158,11,0.2); padding: 18px; border-radius: 10px;">
              <h4 style="color: #f59e0b; margin-bottom: 6px;">2. Hydraulic Ramp</h4>
              <p style="font-size: 0.88rem; margin: 0;">Smooth hydraulic drive-on loading eliminating ground clearance and bumper scrapes.</p>
            </div>
            <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(245,158,11,0.2); padding: 18px; border-radius: 10px;">
              <h4 style="color: #f59e0b; margin-bottom: 6px;">3. 4-Wheel Lock</h4>
              <p style="font-size: 0.88rem; margin: 0;">Heavy-duty wheel chocks and soft synthetic web tie-downs anchor wheels tightly during transit.</p>
            </div>
            <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(245,158,11,0.2); padding: 18px; border-radius: 10px;">
              <h4 style="color: #f59e0b; margin-bottom: 6px;">4. Edge Padding</h4>
              <p style="font-size: 0.88rem; margin: 0;">High-density foam protectors on mirrors, door edges, bumpers, and steering wheel.</p>
            </div>
          </div>
        </section>

        <!-- Section 5: Why Choose Shree Ashirwad -->
        <section style="margin-bottom: 20px;">
          <h2 style="font-size: 1.6rem; font-weight: 800; color: #ffffff; margin-bottom: 16px; padding-bottom: 10px; border-bottom: 2px solid rgba(245, 158, 11, 0.4);">
            5. Why Choose Shree Ashirwad for Gorakhpur to Delhi Car Shipping?
          </h2>
          <div style="background: #070d19; border: 1.5px solid rgba(245, 158, 11, 0.4); border-radius: 14px; padding: 25px;">
            <ul style="padding-left: 20px; margin: 0; line-height: 1.85; color: #cbd5e1;">
              <li><strong>Government &amp; IBA Approved Firm:</strong> 100% valid GST invoice eligible for company relocation claims.</li>
              <li><strong>24/7 Live GPS Tracking:</strong> Monitor your car container truck live along the Lucknow-Agra-Yamuna Expressways.</li>
              <li><strong>100% Insurance Protection:</strong> All-risk transit insurance protecting against damage, fire, or highway accidents.</li>
              <li><strong>Door-to-Door Service:</strong> Pickup directly from your residence in Gorakhpur and delivery at your doorstep in Delhi NCR.</li>
            </ul>
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
      "name": "What is the car transport charge from Gorakhpur to Delhi?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Car transport charges from Gorakhpur to Delhi range between ₹6,500 and ₹12,000 for hatchbacks and sedans, and ₹9,500 to ₹24,000 for SUVs and luxury vehicles in covered enclosed carriers."
      }
    },
    {
      "@type": "Question",
      "name": "How many days does it take to transport a car from Gorakhpur to Delhi?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Car transport from Gorakhpur to Delhi takes approximately 2 to 3 business days via Purvanchal and Yamuna Expressways."
      }
    },
    {
      "@type": "Question",
      "name": "Is transit insurance included in the Gorakhpur to Delhi car shipping quote?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, we offer comprehensive all-risk transit insurance calculated at 0.3% of your vehicle declared value to protect against any unexpected highway incidents."
      }
    },
    {
      "@type": "Question",
      "name": "What documents are required for shipping a car from Gorakhpur to Delhi?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Required documents include a copy of the Registration Certificate (RC), valid insurance policy, PUC certificate, owner ID proof, and our official Lorry Receipt (LR)."
      }
    },
    {
      "@type": "Question",
      "name": "Do you provide door-to-door car transport in Gorakhpur and Delhi NCR?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, we provide doorstep pickup across all Gorakhpur areas and door-to-door delivery across all Delhi NCR locations including Noida, Gurgaon, Ghaziabad, and Faridabad."
      }
    },
    {
      "@type": "Question",
      "name": "Why choose enclosed container trucks over open car carriers?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Enclosed container trucks shield your car completely from road dust, rain, flying stones, and bad weather during transit."
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
          Questions About <span style="color: #f59e0b;">Gorakhpur to Delhi Car Transport</span>
        </h2>
      </div>

      <div style="display: flex; flex-direction: column; gap: 14px;">
        
        <details style="background: #0f172a; border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 12px; overflow: hidden;">
          <summary style="padding: 18px 22px; color: #ffffff; font-weight: 700; font-size: 1rem; cursor: pointer; display: flex; justify-content: space-between; align-items: center;">
            <span><strong style="color: #f59e0b; margin-right: 8px;">Q1.</strong> What is the car transport charge from Gorakhpur to Delhi?</span>
            <span style="color: #f59e0b; font-size: 1.2rem; font-weight: 800;">&#43;</span>
          </summary>
          <div style="padding: 15px 22px 20px 22px; color: #cbd5e1; font-size: 0.93rem; line-height: 1.7; border-top: 1px solid rgba(255,255,255,0.08);">
            Car transport charges from Gorakhpur to Delhi range between ₹6,500 and ₹12,000 for hatchbacks and sedans, and ₹9,500 to ₹24,000 for SUVs and luxury vehicles in covered enclosed carriers.
          </div>
        </details>

        <details style="background: #0f172a; border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 12px; overflow: hidden;">
          <summary style="padding: 18px 22px; color: #ffffff; font-weight: 700; font-size: 1rem; cursor: pointer; display: flex; justify-content: space-between; align-items: center;">
            <span><strong style="color: #f59e0b; margin-right: 8px;">Q2.</strong> How many days does it take to transport a car from Gorakhpur to Delhi?</span>
            <span style="color: #f59e0b; font-size: 1.2rem; font-weight: 800;">&#43;</span>
          </summary>
          <div style="padding: 15px 22px 20px 22px; color: #cbd5e1; font-size: 0.93rem; line-height: 1.7; border-top: 1px solid rgba(255,255,255,0.08);">
            Car transport from Gorakhpur to Delhi takes approximately 2 to 3 business days via Purvanchal and Yamuna Expressways.
          </div>
        </details>

        <details style="background: #0f172a; border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 12px; overflow: hidden;">
          <summary style="padding: 18px 22px; color: #ffffff; font-weight: 700; font-size: 1rem; cursor: pointer; display: flex; justify-content: space-between; align-items: center;">
            <span><strong style="color: #f59e0b; margin-right: 8px;">Q3.</strong> Is transit insurance included in the Gorakhpur to Delhi car shipping quote?</span>
            <span style="color: #f59e0b; font-size: 1.2rem; font-weight: 800;">&#43;</span>
          </summary>
          <div style="padding: 15px 22px 20px 22px; color: #cbd5e1; font-size: 0.93rem; line-height: 1.7; border-top: 1px solid rgba(255,255,255,0.08);">
            Yes, we offer comprehensive all-risk transit insurance calculated at 0.3% of your vehicle declared value to protect against any unexpected highway incidents.
          </div>
        </details>

        <details style="background: #0f172a; border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 12px; overflow: hidden;">
          <summary style="padding: 18px 22px; color: #ffffff; font-weight: 700; font-size: 1rem; cursor: pointer; display: flex; justify-content: space-between; align-items: center;">
            <span><strong style="color: #f59e0b; margin-right: 8px;">Q4.</strong> What documents are required for shipping a car from Gorakhpur to Delhi?</span>
            <span style="color: #f59e0b; font-size: 1.2rem; font-weight: 800;">&#43;</span>
          </summary>
          <div style="padding: 15px 22px 20px 22px; color: #cbd5e1; font-size: 0.93rem; line-height: 1.7; border-top: 1px solid rgba(255,255,255,0.08);">
            Required documents include a copy of the Registration Certificate (RC), valid insurance policy, PUC certificate, owner ID proof, and our official Lorry Receipt (LR).
          </div>
        </details>

        <details style="background: #0f172a; border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 12px; overflow: hidden;">
          <summary style="padding: 18px 22px; color: #ffffff; font-weight: 700; font-size: 1rem; cursor: pointer; display: flex; justify-content: space-between; align-items: center;">
            <span><strong style="color: #f59e0b; margin-right: 8px;">Q5.</strong> Do you provide door-to-door car transport in Gorakhpur and Delhi NCR?</span>
            <span style="color: #f59e0b; font-size: 1.2rem; font-weight: 800;">&#43;</span>
          </summary>
          <div style="padding: 15px 22px 20px 22px; color: #cbd5e1; font-size: 0.93rem; line-height: 1.7; border-top: 1px solid rgba(255,255,255,0.08);">
            Yes, we provide doorstep pickup across all Gorakhpur areas and door-to-door delivery across all Delhi NCR locations including Noida, Gurgaon, Ghaziabad, and Faridabad.
          </div>
        </details>

        <details style="background: #0f172a; border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 12px; overflow: hidden;">
          <summary style="padding: 18px 22px; color: #ffffff; font-weight: 700; font-size: 1rem; cursor: pointer; display: flex; justify-content: space-between; align-items: center;">
            <span><strong style="color: #f59e0b; margin-right: 8px;">Q6.</strong> Why choose enclosed container trucks over open car carriers?</span>
            <span style="color: #f59e0b; font-size: 1.2rem; font-weight: 800;">&#43;</span>
          </summary>
          <div style="padding: 15px 22px 20px 22px; color: #cbd5e1; font-size: 0.93rem; line-height: 1.7; border-top: 1px solid rgba(255,255,255,0.08);">
            Enclosed container trucks shield your car completely from road dust, rain, flying stones, and bad weather during transit.
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
          READY FOR SAFE CAR TRANSPORT?
        </span>
        
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin-bottom: 18px; line-height: 1.3;">
          Book <span style="color: #f59e0b;">Gorakhpur to Delhi Car Shipping</span> Today!
        </h2>
        
        <p style="font-size: 1.05rem; color: #cbd5e1; max-width: 800px; margin: 0 auto 30px auto; line-height: 1.7;">
          Join 10,000+ satisfied vehicle owners. Get 100% safe enclosed car transport, real-time GPS tracking, and door-to-door service with zero hidden charges.
        </p>

        <div style="display: flex; flex-wrap: wrap; justify-content: center; gap: 15px; margin-bottom: 30px;">
          <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Now" style="padding: 14px 28px; background: linear-gradient(135deg, #e11d48 0%, #f59e0b 100%); color: #ffffff; border-radius: 30px; font-weight: 700; font-size: 1rem; text-decoration: none; display: inline-flex; align-items: center; gap: 8px; box-shadow: 0 6px 20px rgba(225, 29, 72, 0.4);">
            <i class="fas fa-phone-alt"></i> Call <?php echo SITE_PHONE; ?>
          </a>
          
          <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad,%20I%20want%20to%20book%20car%20transport%20from%20Gorakhpur%20to%20Delhi." title="Chat on WhatsApp" target="_blank" style="padding: 14px 28px; background: #25D366; color: #ffffff; border-radius: 30px; font-weight: 700; font-size: 1rem; text-decoration: none; display: inline-flex; align-items: center; gap: 8px; box-shadow: 0 6px 20px rgba(37, 211, 102, 0.4);">
            <i class="fab fa-whatsapp"></i> Chat on WhatsApp
          </a>
        </div>

        <div style="border-top: 1px solid rgba(255, 255, 255, 0.1); margin-top: 25px; padding-top: 20px; display: flex; flex-wrap: wrap; justify-content: center; gap: 25px; font-size: 0.88rem; color: #cbd5e1; font-weight: 600;">
          <div><span style="color: #f59e0b; margin-right: 6px;">&check;</span> Enclosed Car Carriers</div>
          <div><span style="color: #f59e0b; margin-right: 6px;">&check;</span> Door-to-Door Service</div>
          <div><span style="color: #f59e0b; margin-right: 6px;">&check;</span> Live GPS Tracking</div>
          <div><span style="color: #f59e0b; margin-right: 6px;">&check;</span> Fixed Price Guarantee</div>
        </div>

      </div>

    </div>
  </section>

</main>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>

