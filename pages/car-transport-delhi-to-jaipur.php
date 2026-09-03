<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "Car Transport Delhi to Jaipur | Express Flatbed & Carrier";
$page_desc = "Fast, safe car transport Delhi to Jaipur by Shree Ashirwad Packers and Movers. Express 24-48 hr delivery, enclosed container & single flatbed tow options, 100% insurance & door pickup. Book now!";
$page_keywords = "car transport delhi to jaipur, car transport in jaipur, car delivery service, best vehicle transport services, car carrier service, vehicle transport carriers, car shifting delhi to jaipur";
$canonical_url = "https://shreeashirwadpackersandmovers.com/pages/car-transport-delhi-to-jaipur.php";

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
            DELHI TO JAIPUR CAR SHIFTING SPECIALISTS
          </span>
          <h1 style="font-size: 2.5rem; font-weight: 800; line-height: 1.2; margin-bottom: 20px; color: #ffffff;">
            Express <span style="color: #f59e0b;">Car Transport Delhi to Jaipur</span>
          </h1>
          <p style="font-size: 1.1rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 25px;">
            Need fast car transport across ~280 km from Delhi NCR to Pink City Jaipur? Trust Shree Ashirwad Packers and Movers for express 24-48 hour delivery via NH48 / Delhi-Mumbai Expressway. Enclosed container trailers and single-car flatbed tow trucks with 100% insurance.
          </p>

          <div style="display: flex; gap: 15px; flex-wrap: wrap; margin-bottom: 30px;">
            <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Now" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
              <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call Now: <?php echo SITE_PHONE; ?>
            </a>
            <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20a%20car%20transport%20quote%20from%20Delhi%20to%20Jaipur." title="Chat on WhatsApp" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
              <i class="fab fa-whatsapp" style="margin-right: 8px;"></i> Chat on WhatsApp
            </a>
          </div>

          <div style="display: flex; gap: 20px; font-size: 0.9rem; color: #94a3b8; flex-wrap: wrap;">
            <span><strong style="color: #f59e0b;">Express 24-48 Hr</strong> Delivery</span>
            <span><strong style="color: #f59e0b;">100% Insured</strong> Shifting</span>
            <span><strong style="color: #f59e0b;">Door-to-Door</strong> Service</span>
          </div>
        </div>

        <!-- Hero Lead Form Column -->
        <div class="hero-form-card" style="background: rgba(255, 255, 255, 0.05); backdrop-filter: blur(10px); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 16px; padding: 30px; box-shadow: 0 15px 35px rgba(0,0,0,0.4);">
          <h2 style="font-size: 1.4rem; color: #ffffff; margin-bottom: 8px; font-weight: 700; text-align: center;">Get Jaipur Shifting Quote</h2>
          <p style="font-size: 0.85rem; color: #94a3b8; text-align: center; margin-bottom: 20px;">Receive transparent cost estimation on WhatsApp in 2 minutes</p>

          <form action="#" method="POST" onsubmit="sendHeroWhatsAppLead(event, this);">
            <div style="margin-bottom: 14px;">
              <input type="text" name="name" class="form-control" placeholder="Your Full Name" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="margin-bottom: 14px;">
              <input type="tel" name="phone" class="form-control" placeholder="10-Digit Phone Number" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 10px; margin-bottom: 14px;">
              <input type="text" name="move_from" class="form-control" value="Delhi" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
              <input type="text" name="move_to" class="form-control" value="Jaipur" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
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
            MASTER GUIDE &bull; DELHI TO JAIPUR CAR TRANSPORT
          </span>
          <div style="font-size: 0.85rem; color: #94a3b8; display: flex; gap: 15px;">
            <span><i class="far fa-user" style="color: #f59e0b; margin-right: 5px;"></i> Shree Ashirwad Vehicle Logistics</span>
            <span><i class="far fa-clock" style="color: #f59e0b; margin-right: 5px;"></i> 7 Min Read</span>
          </div>
        </div>

        <h2 style="font-size: 2.1rem; font-weight: 800; color: #ffffff; line-height: 1.35; margin-bottom: 18px;">
          Complete Guide: Car Transport Delhi to Jaipur
        </h2>

        <p style="font-size: 1.05rem; color: #cbd5e1; line-height: 1.75; margin: 0;">
          Relocating a car across ~280 km from <strong>Delhi NCR</strong> to <strong>Jaipur, Rajasthan</strong> via NH48 / Delhi-Mumbai Expressway is seamless with dedicated car carriers and single-vehicle flatbed tow trucks. Shree Ashirwad Packers and Movers ensures safe door-to-door vehicle delivery.
        </p>

        <!-- Key Highlights Box -->
        <div style="background: rgba(245, 158, 11, 0.08); border-left: 4px solid #f59e0b; border-radius: 8px; padding: 20px 22px; margin-top: 25px;">
          <h3 style="font-size: 1.05rem; font-weight: 700; color: #f59e0b; margin-bottom: 10px; text-transform: uppercase; letter-spacing: 0.5px;">
            <i class="fas fa-star" style="margin-right: 8px;"></i> Key Service Features
          </h3>
          <ul style="margin: 0; padding-left: 20px; color: #cbd5e1; font-size: 0.93rem; line-height: 1.75;">
            <li>Express 24 to 48-hour delivery across Delhi-Jaipur highway corridor.</li>
            <li>Detailed 25-point visual pre-pickup condition reporting covering exterior and odometer readings.</li>
            <li>Single-car flatbed tow trucks for luxury, vintage, or non-running cars.</li>
            <li>Full support for Delhi to Rajasthan interstate RTO &amp; e-Way Bill documents.</li>
          </ul>
        </div>

      </div>

      <!-- Main Content Body -->
      <div style="background: #0f172a; border: 1.5px solid rgba(255, 255, 255, 0.08); border-radius: 16px; padding: 40px 35px; line-height: 1.8; color: #cbd5e1; font-size: 1rem; box-shadow: 0 10px 30px rgba(0,0,0,0.3);">
        
        <!-- Section 1: Route & Logistics -->
        <section style="margin-bottom: 35px;">
          <h2 style="font-size: 1.6rem; font-weight: 800; color: #ffffff; margin-bottom: 16px; padding-bottom: 10px; border-bottom: 2px solid rgba(245, 158, 11, 0.4);">
            1. Delhi to Jaipur Route Logistics &amp; Transit Time
          </h2>
          <p>
            The national highway corridor connecting Delhi NCR to Jaipur covers approximately 280 kilometers via Gurgaon, Behror, and Kotputli along NH48 / Delhi-Mumbai Expressway. Estimated vehicle transit duration is <strong>1 to 2 business days</strong> (express flatbed tow offers same-day delivery).
          </p>
          <p style="margin-top: 12px;">
            We collect vehicles from all parts of Delhi NCR (Connaught Place, Dwarka, Rohini, South Ext, Janakpuri, Laxmi Nagar, Gurgaon, Noida) and deliver directly across Jaipur (Vaishali Nagar, Malviya Nagar, Mansarovar, Raja Park, C-Scheme, Tonk Road, Jagatpura).
          </p>
        </section>

        <!-- Section 2: Estimated Car Shipping Cost Breakdown -->
        <section style="margin-bottom: 35px;">
          <h2 style="font-size: 1.6rem; font-weight: 800; color: #ffffff; margin-bottom: 16px; padding-bottom: 10px; border-bottom: 2px solid rgba(245, 158, 11, 0.4);">
            2. Estimated Car Shifting Cost Table: Delhi to Jaipur
          </h2>
          <p>
            Below is the standard price matrix for car shipping from Delhi to Jaipur across open trailers, enclosed containers, and flatbed tow trucks:
          </p>

          <div style="overflow-x: auto; margin: 25px 0;">
            <table style="width: 100%; border-collapse: collapse; text-align: left; font-size: 0.9rem; color: #cbd5e1;">
              <thead>
                <tr style="background: #1e293b; color: #f59e0b;">
                  <th style="padding: 12px; border: 1px solid rgba(255,255,255,0.1);">Vehicle Category</th>
                  <th style="padding: 12px; border: 1px solid rgba(255,255,255,0.1);">Open Car Carrier Tariff</th>
                  <th style="padding: 12px; border: 1px solid rgba(255,255,255,0.1);">Enclosed Container / Flatbed</th>
                  <th style="padding: 12px; border: 1px solid rgba(255,255,255,0.1);">Est. Transit Time</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="padding: 12px; border: 1px solid rgba(255,255,255,0.1); font-weight: 700;">Hatchback (Alto, Swift, Tiago)</td>
                  <td style="padding: 12px; border: 1px solid rgba(255,255,255,0.1);">₹5,500 – ₹7,500</td>
                  <td style="padding: 12px; border: 1px solid rgba(255,255,255,0.1);">₹8,500 – ₹11,500</td>
                  <td style="padding: 12px; border: 1px solid rgba(255,255,255,0.1);">1 – 2 Days</td>
                </tr>
                <tr style="background: rgba(255,255,255,0.02);">
                  <td style="padding: 12px; border: 1px solid rgba(255,255,255,0.1); font-weight: 700;">Sedan (City, Verna, Virtus)</td>
                  <td style="padding: 12px; border: 1px solid rgba(255,255,255,0.1);">₹6,500 – ₹8,500</td>
                  <td style="padding: 12px; border: 1px solid rgba(255,255,255,0.1);">₹9,500 – ₹12,500</td>
                  <td style="padding: 12px; border: 1px solid rgba(255,255,255,0.1);">1 – 2 Days</td>
                </tr>
                <tr>
                  <td style="padding: 12px; border: 1px solid rgba(255,255,255,0.1); font-weight: 700;">Compact / Full SUV (Creta, Fortuner)</td>
                  <td style="padding: 12px; border: 1px solid rgba(255,255,255,0.1);">₹7,500 – ₹10,000</td>
                  <td style="padding: 12px; border: 1px solid rgba(255,255,255,0.1);">₹11,000 – ₹14,500</td>
                  <td style="padding: 12px; border: 1px solid rgba(255,255,255,0.1);">1 – 2 Days</td>
                </tr>
                <tr style="background: rgba(255,255,255,0.02);">
                  <td style="padding: 12px; border: 1px solid rgba(255,255,255,0.1); font-weight: 700;">Luxury &amp; Premium Vehicles</td>
                  <td style="padding: 12px; border: 1px solid rgba(255,255,255,0.1);">Not Recommended</td>
                  <td style="padding: 12px; border: 1px solid rgba(255,255,255,0.1);">₹15,000 – ₹20,000</td>
                  <td style="padding: 12px; border: 1px solid rgba(255,255,255,0.1);">Same Day / 24 Hours</td>
                </tr>
              </tbody>
            </table>
          </div>
          <p style="font-size: 0.85rem; color: #94a3b8;">*Note: All-risk transit insurance (0.3% of car declared value) and 18% GST apply per official quotation.</p>
        </section>

        <!-- Section 3: Statutory & RTO Rules -->
        <section style="margin-bottom: 35px;">
          <h2 style="font-size: 1.6rem; font-weight: 800; color: #ffffff; margin-bottom: 16px; padding-bottom: 10px; border-bottom: 2px solid rgba(245, 158, 11, 0.4);">
            3. RTO Documentation &amp; Statutory Requirements
          </h2>
          <p>
            Transporting a car from Delhi NCR into Rajasthan requires standard documentation:
          </p>
          <ul style="padding-left: 20px; margin-top: 10px; line-height: 1.85;">
            <li><strong>Vehicle Registration Certificate (RC):</strong> Original or self-attested clear copy.</li>
            <li><strong>Valid Motor Insurance Policy:</strong> Active third-party or comprehensive policy document.</li>
            <li><strong>Pollution Under Control (PUC) Certificate:</strong> Active emission clearance document.</li>
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
            We adhere to strict physical security protocols for all cars in transit:
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
            5. Why Choose Shree Ashirwad for Delhi to Jaipur Car Shifting?
          </h2>
          <div style="background: #070d19; border: 1.5px solid rgba(245, 158, 11, 0.4); border-radius: 14px; padding: 25px;">
            <ul style="padding-left: 20px; margin: 0; line-height: 1.85; color: #cbd5e1;">
              <li><strong>Government &amp; IBA Approved Firm:</strong> 100% valid GST invoice eligible for company relocation claims.</li>
              <li><strong>Express 24-48 Hr Shifting:</strong> Fast delivery on the NH48 / Delhi-Mumbai Expressway corridor.</li>
              <li><strong>100% Insurance Protection:</strong> All-risk transit insurance protecting against damage or highway accidents.</li>
              <li><strong>Door-to-Door Service:</strong> Pickup directly from your residence in Delhi NCR and delivery at your doorstep in Jaipur.</li>
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
      "name": "How much does it cost to transport a car from Delhi to Jaipur?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Car transport charges from Delhi to Jaipur range between ₹5,500 and ₹14,500 depending on vehicle category (hatchback, sedan, SUV) and carrier choice."
      }
    },
    {
      "@type": "Question",
      "name": "How long does car shipping take from Delhi to Jaipur?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Car transport from Delhi to Jaipur takes 1 to 2 business days via NH48 / Delhi-Mumbai Expressway."
      }
    },
    {
      "@type": "Question",
      "name": "Is single-car flatbed towing available for Delhi to Jaipur?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, we provide single-car flatbed towing for luxury, premium, or non-running vehicles with same-day turnaround."
      }
    },
    {
      "@type": "Question",
      "name": "What documents are required to ship a car to Jaipur?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Required documents include vehicle RC copy, active motor insurance policy, PUC certificate, owner ID proof, and our Lorry Receipt (LR)."
      }
    },
    {
      "@type": "Question",
      "name": "Do you deliver cars to all localities in Jaipur?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, we provide door-to-door delivery across all Jaipur localities including Vaishali Nagar, Malviya Nagar, Mansarovar, Raja Park, C-Scheme, and Tonk Road."
      }
    },
    {
      "@type": "Question",
      "name": "Why choose an enclosed carrier over driving?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Using an enclosed carrier saves your vehicle from wear and tear, highway mileage, and potential stone chip damage along the highway."
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
          Questions About <span style="color: #f59e0b;">Delhi to Jaipur Car Transport</span>
        </h2>
      </div>

      <div style="display: flex; flex-direction: column; gap: 14px;">
        
        <details style="background: #0f172a; border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 12px; overflow: hidden;">
          <summary style="padding: 18px 22px; color: #ffffff; font-weight: 700; font-size: 1rem; cursor: pointer; display: flex; justify-content: space-between; align-items: center;">
            <span><strong style="color: #f59e0b; margin-right: 8px;">Q1.</strong> How much does it cost to transport a car from Delhi to Jaipur?</span>
            <span style="color: #f59e0b; font-size: 1.2rem; font-weight: 800;">&#43;</span>
          </summary>
          <div style="padding: 15px 22px 20px 22px; color: #cbd5e1; font-size: 0.93rem; line-height: 1.7; border-top: 1px solid rgba(255,255,255,0.08);">
            Car transport charges from Delhi to Jaipur range between ₹5,500 and ₹14,500 depending on vehicle category (hatchback, sedan, SUV) and carrier choice.
          </div>
        </details>

        <details style="background: #0f172a; border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 12px; overflow: hidden;">
          <summary style="padding: 18px 22px; color: #ffffff; font-weight: 700; font-size: 1rem; cursor: pointer; display: flex; justify-content: space-between; align-items: center;">
            <span><strong style="color: #f59e0b; margin-right: 8px;">Q2.</strong> How long does car shipping take from Delhi to Jaipur?</span>
            <span style="color: #f59e0b; font-size: 1.2rem; font-weight: 800;">&#43;</span>
          </summary>
          <div style="padding: 15px 22px 20px 22px; color: #cbd5e1; font-size: 0.93rem; line-height: 1.7; border-top: 1px solid rgba(255,255,255,0.08);">
            Car transport from Delhi to Jaipur takes 1 to 2 business days via NH48 / Delhi-Mumbai Expressway.
          </div>
        </details>

        <details style="background: #0f172a; border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 12px; overflow: hidden;">
          <summary style="padding: 18px 22px; color: #ffffff; font-weight: 700; font-size: 1rem; cursor: pointer; display: flex; justify-content: space-between; align-items: center;">
            <span><strong style="color: #f59e0b; margin-right: 8px;">Q3.</strong> Is single-car flatbed towing available for Delhi to Jaipur?</span>
            <span style="color: #f59e0b; font-size: 1.2rem; font-weight: 800;">&#43;</span>
          </summary>
          <div style="padding: 15px 22px 20px 22px; color: #cbd5e1; font-size: 0.93rem; line-height: 1.7; border-top: 1px solid rgba(255,255,255,0.08);">
            Yes, we provide single-car flatbed towing for luxury, premium, or non-running vehicles with same-day turnaround.
          </div>
        </details>

        <details style="background: #0f172a; border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 12px; overflow: hidden;">
          <summary style="padding: 18px 22px; color: #ffffff; font-weight: 700; font-size: 1rem; cursor: pointer; display: flex; justify-content: space-between; align-items: center;">
            <span><strong style="color: #f59e0b; margin-right: 8px;">Q4.</strong> What documents are required to ship a car to Jaipur?</span>
            <span style="color: #f59e0b; font-size: 1.2rem; font-weight: 800;">&#43;</span>
          </summary>
          <div style="padding: 15px 22px 20px 22px; color: #cbd5e1; font-size: 0.93rem; line-height: 1.7; border-top: 1px solid rgba(255,255,255,0.08);">
            Required documents include vehicle RC copy, active motor insurance policy, PUC certificate, owner ID proof, and our Lorry Receipt (LR).
          </div>
        </details>

        <details style="background: #0f172a; border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 12px; overflow: hidden;">
          <summary style="padding: 18px 22px; color: #ffffff; font-weight: 700; font-size: 1rem; cursor: pointer; display: flex; justify-content: space-between; align-items: center;">
            <span><strong style="color: #f59e0b; margin-right: 8px;">Q5.</strong> Do you deliver cars to all localities in Jaipur?</span>
            <span style="color: #f59e0b; font-size: 1.2rem; font-weight: 800;">&#43;</span>
          </summary>
          <div style="padding: 15px 22px 20px 22px; color: #cbd5e1; font-size: 0.93rem; line-height: 1.7; border-top: 1px solid rgba(255,255,255,0.08);">
            Yes, we provide door-to-door delivery across all Jaipur localities including Vaishali Nagar, Malviya Nagar, Mansarovar, Raja Park, C-Scheme, and Tonk Road.
          </div>
        </details>

        <details style="background: #0f172a; border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 12px; overflow: hidden;">
          <summary style="padding: 18px 22px; color: #ffffff; font-weight: 700; font-size: 1rem; cursor: pointer; display: flex; justify-content: space-between; align-items: center;">
            <span><strong style="color: #f59e0b; margin-right: 8px;">Q6.</strong> Why choose an enclosed carrier over driving?</span>
            <span style="color: #f59e0b; font-size: 1.2rem; font-weight: 800;">&#43;</span>
          </summary>
          <div style="padding: 15px 22px 20px 22px; color: #cbd5e1; font-size: 0.93rem; line-height: 1.7; border-top: 1px solid rgba(255,255,255,0.08);">
            Using an enclosed carrier saves your vehicle from wear and tear, highway mileage, and potential stone chip damage along the highway.
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
          Book <span style="color: #f59e0b;">Delhi to Jaipur Car Shipping</span> Today!
        </h2>
        
        <p style="font-size: 1.05rem; color: #cbd5e1; max-width: 800px; margin: 0 auto 30px auto; line-height: 1.7;">
          Join 10,000+ satisfied car owners. Get 100% safe enclosed car transport, real-time GPS tracking, and door-to-door service with zero hidden charges.
        </p>

        <div style="display: flex; flex-wrap: wrap; justify-content: center; gap: 15px; margin-bottom: 30px;">
          <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Now" style="padding: 14px 28px; background: linear-gradient(135deg, #e11d48 0%, #f59e0b 100%); color: #ffffff; border-radius: 30px; font-weight: 700; font-size: 1rem; text-decoration: none; display: inline-flex; align-items: center; gap: 8px; box-shadow: 0 6px 20px rgba(225, 29, 72, 0.4);">
            <i class="fas fa-phone-alt"></i> Call <?php echo SITE_PHONE; ?>
          </a>
          
          <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad,%20I%20want%20to%20book%20car%20transport%20from%20Delhi%20to%20Jaipur." title="Chat on WhatsApp" target="_blank" style="padding: 14px 28px; background: #25D366; color: #ffffff; border-radius: 30px; font-weight: 700; font-size: 1rem; text-decoration: none; display: inline-flex; align-items: center; gap: 8px; box-shadow: 0 6px 20px rgba(37, 211, 102, 0.4);">
            <i class="fab fa-whatsapp"></i> Chat on WhatsApp
          </a>
        </div>

        <div style="border-top: 1px solid rgba(255, 255, 255, 0.1); margin-top: 25px; padding-top: 20px; display: flex; flex-wrap: wrap; justify-content: center; gap: 25px; font-size: 0.88rem; color: #cbd5e1; font-weight: 600;">
          <div><span style="color: #f59e0b; margin-right: 6px;">&check;</span> Express 24-48 Hr Shifting</div>
          <div><span style="color: #f59e0b; margin-right: 6px;">&check;</span> Door-to-Door Service</div>
          <div><span style="color: #f59e0b; margin-right: 6px;">&check;</span> Live GPS Tracking</div>
          <div><span style="color: #f59e0b; margin-right: 6px;">&check;</span> Fixed Price Guarantee</div>
        </div>

      </div>

    </div>
  </section>

</main>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>

