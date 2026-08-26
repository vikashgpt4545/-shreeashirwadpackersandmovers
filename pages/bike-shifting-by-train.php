<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "Bike Shifting by Train in India | Indian Railways Bike Parcel Guide";
$page_desc = "How to transfer bike by train in India? Read the complete guide on Indian Railways bike transport, IRCTC bike parcel booking process, required documents, rates, and 7-layer packaging tips.";
$page_keywords = "bike shifting by train, indian railways bike parcel, IRCTC bike parcel rate, bike transport by train cost, railway bike luggage booking, packers and movers bike transport";
$canonical_url = "https://shreeashirwadpackersandmovers.com/pages/bike-shifting-by-train.php";

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
            RAILWAY BIKE PARCEL & EXPRESS RELOCATION SPECIALISTS
          </span>
          <h1 style="font-size: 2.7rem; font-weight: 800; line-height: 1.2; margin-bottom: 20px; color: #ffffff;">
            Professional <span style="color: #f59e0b;">Bike Shifting by Train in India</span>
          </h1>
          <p style="font-size: 1.12rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 25px;">
            Want to transfer your motorcycle via Indian Railways or dedicated container logistics? Learn about IRCTC luggage vs parcel rates, railway station parcel office procedures, document checklists, and professional door-to-door packing services.
          </p>

          <div style="display: flex; gap: 15px; flex-wrap: wrap; margin-bottom: 30px;">
            <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Now" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
              <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call Now: <?php echo SITE_PHONE; ?>
            </a>
            <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20a%20bike%20shifting%20by%20train%20quote." title="Chat on WhatsApp" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
              <i class="fab fa-whatsapp" style="margin-right: 8px;"></i> Chat on WhatsApp
            </a>
          </div>

          <div style="display: flex; gap: 20px; font-size: 0.9rem; color: #94a3b8;">
            <span><strong style="color: #f59e0b;">Railway Parcel</strong> Assistance</span>
            <span><strong style="color: #f59e0b;">7-Layer</strong> Station Packing</span>
            <span><strong style="color: #f59e0b;">Door-to-Door</strong> Pickup & Delivery</span>
          </div>
        </div>

        <!-- Hero Lead Form Column -->
        <div class="hero-form-card" style="background: rgba(255, 255, 255, 0.05); backdrop-filter: blur(10px); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 16px; padding: 30px; box-shadow: 0 15px 35px rgba(0,0,0,0.4);">
          <h2 style="font-size: 1.4rem; color: #ffffff; margin-bottom: 8px; font-weight: 700; text-align: center;">Get Bike Shifting By Train Quote</h2>
          <p style="font-size: 0.85rem; color: #94a3b8; text-align: center; margin-bottom: 20px;">Receive transparent cost estimation on WhatsApp in 2 minutes</p>

          <form action="#" method="POST" onsubmit="sendHeroWhatsAppLead(event, this);">
            <div style="margin-bottom: 14px;">
              <input type="text" name="name" class="form-control" placeholder="Your Full Name" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="margin-bottom: 14px;">
              <input type="tel" name="phone" class="form-control" placeholder="10-Digit Phone Number" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 10px; margin-bottom: 14px;">
              <input type="text" name="move_from" class="form-control" placeholder="Origin Station / City" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
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

  <!-- Section 2: Operational Highlights -->
  <section style="padding: 45px 0; background: #1c2541; border-top: 1px solid rgba(255,255,255,0.05); border-bottom: 1px solid rgba(255,255,255,0.05);">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 25px; text-align: center;">
        
        <div style="padding: 20px; background: rgba(255,255,255,0.03); border-radius: 12px; border: 1px solid rgba(255,255,255,0.08);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; margin-bottom: 5px;">Indian Railways</div>
          <div style="font-size: 0.9rem; color: #94a3b8;">Parcel Office Coordination</div>
        </div>

        <div style="padding: 20px; background: rgba(255,255,255,0.03); border-radius: 12px; border: 1px solid rgba(255,255,255,0.08);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; margin-bottom: 5px;">Luggage vs Parcel</div>
          <div style="font-size: 0.9rem; color: #94a3b8;">Booking Guidance</div>
        </div>

        <div style="padding: 20px; background: rgba(255,255,255,0.03); border-radius: 12px; border: 1px solid rgba(255,255,255,0.08);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; margin-bottom: 5px;">7-Layer</div>
          <div style="font-size: 0.9rem; color: #94a3b8;">Gunny & Bubble Wrap</div>
        </div>

        <div style="padding: 20px; background: rgba(255,255,255,0.03); border-radius: 12px; border: 1px solid rgba(255,255,255,0.08);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; margin-bottom: 5px;">100%</div>
          <div style="font-size: 0.9rem; color: #94a3b8;">End-to-End Assistance</div>
        </div>

      </div>
    </div>
  </section>

  <!-- Section 3: Railway Bike Transport Cost Matrix -->
  <section style="padding: 60px 0; background: #0b132b;">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
      
      <div style="text-align: center; margin-bottom: 40px;">
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin-bottom: 12px;">
          Estimated Railway Bike Transport Charges in India
        </h2>
        <p style="color: #94a3b8; font-size: 1rem; max-width: 700px; margin: 0 auto;">
          Approximate cost breakdown for Indian Railways parcel vs luggage mode and professional container trucks.
        </p>
      </div>

      <div style="overflow-x: auto; background: #1c2541; border-radius: 14px; border: 1px solid rgba(255,255,255,0.1); padding: 10px;">
        <table style="width: 100%; border-collapse: collapse; text-align: left; font-size: 0.95rem; color: #e2e8f0;">
          <thead>
            <tr style="background: rgba(245, 158, 11, 0.15); border-bottom: 2px solid rgba(245, 158, 11, 0.3);">
              <th style="padding: 16px; color: #f59e0b; font-weight: 700;">Distance Range</th>
              <th style="padding: 16px; color: #f59e0b; font-weight: 700;">Railway Freight Charge</th>
              <th style="padding: 16px; color: #f59e0b; font-weight: 700;">Station Packing & Porter</th>
              <th style="padding: 16px; color: #f59e0b; font-weight: 700;">Total Estimated Cost</th>
            </tr>
          </thead>
          <tbody>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.05);">
              <td style="padding: 16px; font-weight: 600;">Up to 500 km</td>
              <td style="padding: 16px;">₹1,200 - ₹1,800</td>
              <td style="padding: 16px;">₹800 - ₹1,200</td>
              <td style="padding: 16px; color: #f59e0b; font-weight: 700;">₹2,000 - ₹3,000</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.05); background: rgba(255,255,255,0.02);">
              <td style="padding: 16px; font-weight: 600;">500 km - 1,000 km</td>
              <td style="padding: 16px;">₹1,800 - ₹2,800</td>
              <td style="padding: 16px;">₹1,000 - ₹1,500</td>
              <td style="padding: 16px; color: #f59e0b; font-weight: 700;">₹2,800 - ₹4,300</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.05);">
              <td style="padding: 16px; font-weight: 600;">1,000 km - 1,800 km</td>
              <td style="padding: 16px;">₹2,800 - ₹4,200</td>
              <td style="padding: 16px;">₹1,200 - ₹1,800</td>
              <td style="padding: 16px; color: #f59e0b; font-weight: 700;">₹4,000 - ₹6,000</td>
            </tr>
            <tr>
              <td style="padding: 16px; font-weight: 600;">Above 1,800 km</td>
              <td style="padding: 16px;">₹4,200 - ₹5,800</td>
              <td style="padding: 16px;">₹1,500 - ₹2,200</td>
              <td style="padding: 16px; color: #f59e0b; font-weight: 700;">₹5,700 - ₹8,000</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </section>

  <!-- Section 4: Key Service Features -->
  <section style="padding: 60px 0; background: #1c2541;">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
      
      <div style="text-align: center; margin-bottom: 45px;">
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin-bottom: 12px;">
          Key Advantages of Railway & Professional Bike Shifting
        </h2>
        <p style="color: #94a3b8; font-size: 1rem; max-width: 700px; margin: 0 auto;">
          Comprehensive support for Indian Railways parcel booking and private truck relocation.
        </p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 30px;">
        
        <div style="background: rgba(255,255,255,0.03); border-radius: 12px; padding: 30px; border: 1px solid rgba(255,255,255,0.08);">
          <div style="width: 50px; height: 50px; border-radius: 10px; background: rgba(245, 158, 11, 0.15); color: #f59e0b; display: flex; align-items: center; justify-content: center; font-size: 1.4rem; margin-bottom: 20px;">
            <i class="fas fa-train"></i>
          </div>
          <h3 style="font-size: 1.25rem; font-weight: 700; color: #ffffff; margin-bottom: 12px;">Railway Parcel Booking</h3>
          <p style="color: #94a3b8; font-size: 0.95rem; line-height: 1.7;">
            Assistance with filing railway parcel forms at the station parcel office, weight verification, and train allotment.
          </p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border-radius: 12px; padding: 30px; border: 1px solid rgba(255,255,255,0.08);">
          <div style="width: 50px; height: 50px; border-radius: 10px; background: rgba(245, 158, 11, 0.15); color: #f59e0b; display: flex; align-items: center; justify-content: center; font-size: 1.4rem; margin-bottom: 20px;">
            <i class="fas fa-suitcase font-icon"></i>
          </div>
          <h3 style="font-size: 1.25rem; font-weight: 700; color: #ffffff; margin-bottom: 12px;">Luggage Booking Option</h3>
          <p style="color: #94a3b8; font-size: 0.95rem; line-height: 1.7;">
            Book your bike as passenger luggage on the same train you are traveling on for immediate pickup upon arrival.
          </p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border-radius: 12px; padding: 30px; border: 1px solid rgba(255,255,255,0.08);">
          <div style="width: 50px; height: 50px; border-radius: 10px; background: rgba(245, 158, 11, 0.15); color: #f59e0b; display: flex; align-items: center; justify-content: center; font-size: 1.4rem; margin-bottom: 20px;">
            <i class="fas fa-box"></i>
          </div>
          <h3 style="font-size: 1.25rem; font-weight: 700; color: #ffffff; margin-bottom: 12px;">Station Gunny Bag Packing</h3>
          <p style="color: #94a3b8; font-size: 0.95rem; line-height: 1.7;">
            High-density gunny cloth padding, bubble wrap, and cardboard reinforcement tailored for railway parcel guidelines.
          </p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border-radius: 12px; padding: 30px; border: 1px solid rgba(255,255,255,0.08);">
          <div style="width: 50px; height: 50px; border-radius: 10px; background: rgba(245, 158, 11, 0.15); color: #f59e0b; display: flex; align-items: center; justify-content: center; font-size: 1.4rem; margin-bottom: 20px;">
            <i class="fas fa-home"></i>
          </div>
          <h3 style="font-size: 1.25rem; font-weight: 700; color: #ffffff; margin-bottom: 12px;">Door-to-Station Pickup</h3>
          <p style="color: #94a3b8; font-size: 0.95rem; line-height: 1.7;">
            We collect the bike from your residence, drain fuel, pack it professionally, and transport it safely to the station parcel office.
          </p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border-radius: 12px; padding: 30px; border: 1px solid rgba(255,255,255,0.08);">
          <div style="width: 50px; height: 50px; border-radius: 10px; background: rgba(245, 158, 11, 0.15); color: #f59e0b; display: flex; align-items: center; justify-content: center; font-size: 1.4rem; margin-bottom: 20px;">
            <i class="fas fa-shield-alt"></i>
          </div>
          <h3 style="font-size: 1.25rem; font-weight: 700; color: #ffffff; margin-bottom: 12px;">Transit Policy Assistance</h3>
          <p style="color: #94a3b8; font-size: 0.95rem; line-height: 1.7;">
            Full guidance on declaring vehicle valuation for official railway insurance coverage against theft or damage.
          </p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border-radius: 12px; padding: 30px; border: 1px solid rgba(255,255,255,0.08);">
          <div style="width: 50px; height: 50px; border-radius: 10px; background: rgba(245, 158, 11, 0.15); color: #f59e0b; display: flex; align-items: center; justify-content: center; font-size: 1.4rem; margin-bottom: 20px;">
            <i class="fas fa-truck font-icon"></i>
          </div>
          <h3 style="font-size: 1.25rem; font-weight: 700; color: #ffffff; margin-bottom: 12px;">Private Truck Alternative</h3>
          <p style="color: #94a3b8; font-size: 0.95rem; line-height: 1.7;">
            If railway parcel slots are unavailable, easily switch to our door-to-door enclosed container truck service.
          </p>
        </div>

      </div>
    </div>
  </section>

  <!-- Section 5: Packaging Protocol -->
  <section style="padding: 60px 0; background: #0b132b;">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
      
      <div style="text-align: center; margin-bottom: 45px;">
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin-bottom: 12px;">
          7-Layer Station & Truck Packaging Protocol
        </h2>
        <p style="color: #94a3b8; font-size: 1rem; max-width: 700px; margin: 0 auto;">
          Strict packing standards required by Indian Railways to prevent transit scratches and body panel damage.
        </p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 20px;">
        
        <div style="background: #1c2541; padding: 25px; border-radius: 12px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #ffffff; font-size: 1.1rem; font-weight: 700; margin-bottom: 8px;">Step 1: Fuel Tank Draining</h4>
          <p style="color: #94a3b8; font-size: 0.9rem; margin: 0;">Mandatory removal of all petrol from the fuel tank as mandated by railway safety norms.</p>
        </div>

        <div style="background: #1c2541; padding: 25px; border-radius: 12px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #ffffff; font-size: 1.1rem; font-weight: 700; margin-bottom: 8px;">Step 2: Mirror & Accessory Dismantling</h4>
          <p style="color: #94a3b8; font-size: 0.9rem; margin: 0;">Rear-view mirrors and windshields are removed and wrapped separately to prevent breakage.</p>
        </div>

        <div style="background: #1c2541; padding: 25px; border-radius: 12px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #ffffff; font-size: 1.1rem; font-weight: 700; margin-bottom: 8px;">Step 3: Bubble Wrap Shielding</h4>
          <p style="color: #94a3b8; font-size: 0.9rem; margin: 0;">High-density 80 GSM bubble wrap applied around fuel tank, engine guards, and silencer.</p>
        </div>

        <div style="background: #1c2541; padding: 25px; border-radius: 12px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #ffffff; font-size: 1.1rem; font-weight: 700; margin-bottom: 8px;">Step 4: Corrugated Box Cushioning</h4>
          <p style="color: #94a3b8; font-size: 0.9rem; margin: 0;">Heavy cardboard layers strapped around delicate plastic fiber parts and indicators.</p>
        </div>

        <div style="background: #1c2541; padding: 25px; border-radius: 12px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #ffffff; font-size: 1.1rem; font-weight: 700; margin-bottom: 8px;">Step 5: Outer Gunny Cloth Wrapping</h4>
          <p style="color: #94a3b8; font-size: 0.9rem; margin: 0;">Full outer stitching with jute gunny cloth as required by Indian Railways parcel rules.</p>
        </div>

        <div style="background: #1c2541; padding: 25px; border-radius: 12px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #ffffff; font-size: 1.1rem; font-weight: 700; margin-bottom: 8px;">Step 6: Stenciling & Labeling</h4>
          <p style="color: #94a3b8; font-size: 0.9rem; margin: 0;">Clear paint stenciling of sender/receiver name, PNR/parcel number, and destination station.</p>
        </div>

      </div>
    </div>
  </section>

  <!-- Section 6: Documents & GST Compliance -->
  <section style="padding: 60px 0; background: #1c2541;">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
      
      <div style="text-align: center; margin-bottom: 45px;">
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin-bottom: 12px;">
          Documents Required for Railway Bike Parcel
        </h2>
        <p style="color: #94a3b8; font-size: 1rem; max-width: 700px; margin: 0 auto;">
          Mandatory papers needed at the railway parcel counter and for corporate claim bills.
        </p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 25px;">
        <div style="background: rgba(255,255,255,0.03); padding: 25px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.08);">
          <h3 style="font-size: 1.15rem; color: #f59e0b; font-weight: 700; margin-bottom: 10px;">Railway Parcel Counter Documents</h3>
          <ul style="color: #cbd5e1; font-size: 0.9rem; line-height: 1.8; padding-left: 20px; margin: 0;">
            <li>Original Bike Registration Certificate (RC) + 2 Copies</li>
            <li>Government Photo ID (Aadhaar / Voter ID / Passport)</li>
            <li>Valid Bike Insurance Certificate Copy</li>
            <li>Train Ticket Copy (If booking as Passenger Luggage)</li>
          </ul>
        </div>

        <div style="background: rgba(255,255,255,0.03); padding: 25px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.08);">
          <h3 style="font-size: 1.15rem; color: #f59e0b; font-weight: 700; margin-bottom: 10px;">Packers & Movers Official GST Pack</h3>
          <ul style="color: #cbd5e1; font-size: 0.9rem; line-height: 1.8; padding-left: 20px; margin: 0;">
            <li>IBA Approved Railway/Truck Consignment Note</li>
            <li>Itemized 18% GST Tax Invoice Bill</li>
            <li>Official Payment Receipt with Rubber Stamp</li>
            <li>Pre-Delivery Condition & Inspection Slip</li>
          </ul>
        </div>
      </div>

    </div>
  </section>

  <!-- Section 7: FAQs with JSON-LD Schema -->
  <section style="padding: 60px 0; background: #0b132b;">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
      
      <div style="text-align: center; margin-bottom: 45px;">
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin-bottom: 12px;">
          Frequently Asked Questions (Bike Shifting by Train)
        </h2>
        <p style="color: #94a3b8; font-size: 1rem; max-width: 700px; margin: 0 auto;">
          Common queries about Indian Railways bike transport booking and packing.
        </p>
      </div>

      <div style="max-width: 900px; margin: 0 auto; display: grid; gap: 15px;">
        
        <div style="background: #1c2541; padding: 20px 25px; border-radius: 10px; border: 1px solid rgba(255,255,255,0.05);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">What is the difference between luggage and parcel booking in train?</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.6; margin: 0;">
            Luggage booking allows you to take your bike on the same train you are traveling on (if luggage van space is available). Parcel booking ships your bike on any available train assigned by the railway parcel office.
          </p>
        </div>

        <div style="background: #1c2541; padding: 20px 25px; border-radius: 10px; border: 1px solid rgba(255,255,255,0.05);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Is it mandatory to empty the petrol tank before booking on train?</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.6; margin: 0;">
            Yes, Indian Railways strictly requires complete draining of the petrol tank. Carrying petrol in a train luggage van is a punishable offense under the Railway Act.
          </p>
        </div>

        <div style="background: #1c2541; padding: 20px 25px; border-radius: 10px; border: 1px solid rgba(255,255,255,0.05);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">How long does it take for a bike parcel to reach by train?</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.6; margin: 0;">
            Depending on train schedule and availability, parcel transit takes 2 to 5 days. For passenger luggage mode, it arrives simultaneously with your train journey.
          </p>
        </div>

        <div style="background: #1c2541; padding: 20px 25px; border-radius: 10px; border: 1px solid rgba(255,255,255,0.05);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Does Shree Ashirwad Packers handle station packing and paperwork?</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.6; margin: 0;">
            Yes, we provide end-to-end door-to-door service including home pickup, professional gunny/bubble packing, parcel office form submission, and destination station delivery.
          </p>
        </div>

        <div style="background: #1c2541; padding: 20px 25px; border-radius: 10px; border: 1px solid rgba(255,255,255,0.05);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">What happens if I cannot collect the bike immediately at destination station?</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.6; margin: 0;">
            Railways allow a 6-hour free waiting window after train arrival. Afterwards, nominal demurrage/wharfage charges apply per hour. Our team can collect and store your bike safely in our warehouse if needed.
          </p>
        </div>

      </div>

    </div>
  </section>

  <!-- Section 8: CTA Conversion Footer -->
  <section style="padding: 50px 0; background: linear-gradient(135deg, #1c2541 0%, #0b132b 100%); text-align: center; border-top: 1px solid rgba(245, 158, 11, 0.2);">
    <div class="container" style="max-width: 900px; margin: 0 auto; padding: 0 20px;">
      <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin-bottom: 15px;">
        Book Professional Bike Shifting by Train Today
      </h2>
      <p style="font-size: 1.05rem; color: #cbd5e1; margin-bottom: 30px;">
        Get instant estimates, station booking assistance, and zero-scratch door-to-door delivery.
      </p>

      <div style="display: flex; gap: 15px; justify-content: center; flex-wrap: wrap;">
        <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Representative" style="padding: 15px 35px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
          <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call <?php echo SITE_PHONE; ?>
        </a>
        <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20to%20book%20bike%20shifting%20by%20train." title="WhatsApp Booking" target="_blank" style="padding: 15px 35px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
          <i class="fab fa-whatsapp" style="margin-right: 8px;"></i> WhatsApp Quick Booking
        </a>
      </div>
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
      "name": "What is the difference between luggage and parcel booking in train?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Luggage booking allows you to take your bike on the same train you are traveling on (if luggage van space is available). Parcel booking ships your bike on any available train assigned by the railway parcel office."
      }
    },
    {
      "@type": "Question",
      "name": "Is it mandatory to empty the petrol tank before booking on train?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, Indian Railways strictly requires complete draining of the petrol tank. Carrying petrol in a train luggage van is a punishable offense under the Railway Act."
      }
    },
    {
      "@type": "Question",
      "name": "How long does it take for a bike parcel to reach by train?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Depending on train schedule and availability, parcel transit takes 2 to 5 days. For passenger luggage mode, it arrives simultaneously with your train journey."
      }
    },
    {
      "@type": "Question",
      "name": "Does Shree Ashirwad Packers handle station packing and paperwork?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, we provide end-to-end door-to-door service including home pickup, professional gunny/bubble packing, parcel office form submission, and destination station delivery."
      }
    },
    {
      "@type": "Question",
      "name": "What happens if I cannot collect the bike immediately at destination station?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Railways allow a 6-hour free waiting window after train arrival. Afterwards, nominal demurrage/wharfage charges apply per hour. Our team can collect and store your bike safely in our warehouse if needed."
      }
    }
  ]
}
</script>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
