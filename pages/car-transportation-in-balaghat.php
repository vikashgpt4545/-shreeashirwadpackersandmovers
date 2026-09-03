<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "Car Transportation in Balaghat | Safe Automobile Carrier";
$page_desc = "Professional car transportation in Balaghat, Madhya Pradesh. Shree Ashirwad Packers and Movers provides top rated car transport service, specialized automobile carrier trucks, commercial vehicle transport, and 100% insurance. Call 8409531615.";
$page_keywords = "car transportation in balaghat, car transport service, automobile carrier, commercial vehicle transport, car moving service";
$canonical_url = "https://shreeashirwadpackersandmovers.com/pages/car-transportation-in-balaghat.php";

$page_city = "Balaghat, Madhya Pradesh";

$faq_list = [
    ['q' => 'What is the cost of car transportation in Balaghat to Bhopal, Delhi, or Bangalore?', 'a' => 'Car transport charges from Balaghat depend on vehicle type (hatchback, sedan, SUV) and destination distance. Standard rates range from ₹5,500 to ₹17,000 including 100% transit insurance and IBA GST bills.'],
    ['q' => 'What features does your automobile carrier offer for vehicle safety?', 'a' => 'Our specialized automobile carrier trucks feature hydraulic ramps, wheel-locking harness belts, rubber chocks, and fully enclosed container bodies protecting your vehicle from weather and road debris.'],
    ['q' => 'Do you provide commercial vehicle transport in Balaghat?', 'a' => 'Yes, we handle commercial vehicle transport for corporate fleets, commercial sedans, SUVs, and personal automobiles with complete legal documentation.'],
    ['q' => 'What is included in your professional car moving service?', 'a' => 'Our car moving service includes doorstep vehicle inspection, 7-layer protective bubble wrapping, enclosed container loading, transit insurance policy issuance, and doorstep home delivery.'],
    ['q' => 'What documents are required for car transport service in Balaghat?', 'a' => 'You need a copy of the vehicle Registration Certificate (RC), valid insurance policy, owner ID proof (Aadhaar/PAN), and PUC certificate.'],
    ['q' => 'Can personal items be stored in the car during transport?', 'a' => 'Up to 30-40 kg of personal luggage can be kept in the car boot, provided seats remain clear and no restricted items are packed.'],
    ['q' => 'How long does car transit take from Balaghat to major Indian cities?', 'a' => 'Transit to Bhopal/Jabalpur takes 1-2 days, Delhi NCR/Kolkata takes 3-4 days, and Bangalore/Mumbai takes 4-5 days.'],
    ['q' => 'Do you provide real-time GPS tracking for car moving service?', 'a' => 'Yes, all container car carrier trucks feature satellite GPS tracking with regular WhatsApp updates sent directly to customers.'],
    ['q' => 'Are IBA approved GST bills provided for corporate relocation reimbursement?', 'a' => 'Yes, we issue official IBA-approved GST tax invoices, consignment LR receipts, and pre-transit condition inspection reports.'],
    ['q' => 'How can I get an instant quote for car transportation in Balaghat?', 'a' => 'Call +91 8409531615 or submit your vehicle details via WhatsApp for an immediate price estimate and scheduled doorstep pickup.']
];

require_once __DIR__ . '/../includes/header.php';
?>

<main class="site-main">

  <!-- 1. Visual Breadcrumb Navigation Bar -->
  <div class="breadcrumb-wrapper">
    <div class="container">
      <div class="breadcrumb-list">
        <span class="breadcrumb-item"><a href="<?php echo SITE_URL; ?>" title="Home">Home</a></span>
        <span class="breadcrumb-separator">/</span>
        <span class="breadcrumb-item active"><?php echo htmlspecialchars($page_title); ?></span>
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
            MADHYA PRADESH CAR RELOCATION SPECIALISTS
          </span>
          <h1 style="font-size: 2.6rem; font-weight: 800; line-height: 1.2; margin-bottom: 20px; color: #ffffff;">
            Reliable <span style="color: #f59e0b;">Car Transportation in Balaghat</span>
          </h1>
          <p style="font-size: 1.05rem; color: #cbd5e1; line-height: 1.7; margin-bottom: 25px;">
            Shree Ashirwad Packers and Movers offers top-tier car transportation in Balaghat, Madhya Pradesh. Utilizing specialized automobile carrier trucks and enclosed containers, our car transport service ensures scratch-free commercial vehicle transport, private car relocation, and 100% transit risk protection.
          </p>

          <div style="display: flex; gap: 15px; flex-wrap: wrap; margin-bottom: 30px;">
            <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Now" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
              <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call Now: <?php echo SITE_PHONE; ?>
            </a>
            <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20need%20a%20car%20transportation%20quote%20for%20Balaghat." title="Chat on WhatsApp" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
              <i class="fab fa-whatsapp" style="margin-right: 8px;"></i> Chat on WhatsApp
            </a>
          </div>

          <div style="display: flex; gap: 20px; font-size: 0.9rem; color: #94a3b8;">
            <span><strong style="color: #f59e0b;">520+</strong> Cars Relocated</span>
            <span><strong style="color: #f59e0b;">Enclosed</strong> Automobile Carrier</span>
            <span><strong style="color: #f59e0b;">100%</strong> Risk Cover</span>
          </div>
        </div>

        <!-- Hero Lead Form Column -->
        <div class="hero-form-card" style="background: rgba(255, 255, 255, 0.05); backdrop-filter: blur(10px); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 16px; padding: 30px; box-shadow: 0 15px 35px rgba(0,0,0,0.4);">
          <h2 style="font-size: 1.4rem; color: #ffffff; margin-bottom: 8px; font-weight: 700; text-align: center;">Get Balaghat Quote</h2>
          <p style="font-size: 0.85rem; color: #94a3b8; text-align: center; margin-bottom: 20px;">Calculate car transport charges on WhatsApp in 2 minutes</p>

          <form action="#" method="POST" onsubmit="sendHeroWhatsAppLead(event, this);">
            <div style="margin-bottom: 14px;">
              <input type="text" name="name" class="form-control" placeholder="Your Full Name" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="margin-bottom: 14px;">
              <input type="tel" name="phone" class="form-control" placeholder="10-Digit Phone / WhatsApp Number" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 10px; margin-bottom: 14px;">
              <input type="text" name="move_from" class="form-control" placeholder="Pickup Area" value="Balaghat, MP" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
              <input type="text" name="move_to" class="form-control" placeholder="Destination City" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="margin-bottom: 16px;">
              <textarea name="message" class="form-control" rows="2" placeholder="Car Model (e.g. Swift, Dzire, Creta, Fortuner)" style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;"></textarea>
            </div>
            <button type="submit" class="btn btn-primary" style="width: 100%; padding: 14px; background: linear-gradient(135deg, #d32f2f 0%, #f59e0b 100%); color: #ffffff; border: none; border-radius: 50px; font-weight: 700; font-size: 1rem; cursor: pointer;">
              Get Instant Quote &rarr;
            </button>
          </form>
        </div>

      </div>
    </div>
  </section>

  <!-- 3. Key Stats Counter Bar -->
  <section class="stats-section" style="padding: 45px 0; background: #070d1e; border-bottom: 1px solid rgba(245, 158, 11, 0.2);">
    <div class="container">
      <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 20px; text-align: center;">
        <div style="padding: 20px; background: rgba(23, 42, 84, 0.5); border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">520+</div>
          <div style="font-size: 0.9rem; color: #cbd5e1; margin-top: 5px;">Vehicles Shipped</div>
        </div>
        <div style="padding: 20px; background: rgba(23, 42, 84, 0.5); border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">Automobile</div>
          <div style="font-size: 0.9rem; color: #cbd5e1; margin-top: 5px;">Carrier Fleet</div>
        </div>
        <div style="padding: 20px; background: rgba(23, 42, 84, 0.5); border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">100%</div>
          <div style="font-size: 0.9rem; color: #cbd5e1; margin-top: 5px;">Transit Risk Protection</div>
        </div>
        <div style="padding: 20px; background: rgba(23, 42, 84, 0.5); border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">IBA Approved</div>
          <div style="font-size: 0.9rem; color: #cbd5e1; margin-top: 5px;">GST Tax Billing</div>
        </div>
      </div>
    </div>
  </section>

  <!-- 4. 6-Card Feature Grid (3x2 Layout) -->
  <section style="padding: 65px 0; background: #0b132b; color: #e2e8f0; line-height: 1.8;">
    <div class="container">
      
      <div style="max-width: 950px; margin: 0 auto;">
        <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Safety Features</span>
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin: 10px 0 20px 0;">
          Why Trust Our <span style="color: #f59e0b;">Car Moving Service</span> in Balaghat?
        </h2>

        <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px; margin: 30px 0;">
          
          <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px;">
            <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;"><i class="fas fa-truck-moving"></i></div>
            <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">Automobile Carrier</h3>
            <p style="font-size: 0.9rem; color: #cbd5e1; margin: 0;">
              Enclosed automobile carrier containers engineered to isolate your car from road dust, stones, and weather elements.
            </p>
          </div>

          <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px;">
            <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;"><i class="fas fa-car-side"></i></div>
            <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">Commercial Vehicle Transport</h3>
            <p style="font-size: 0.9rem; color: #cbd5e1; margin: 0;">
              Specialized commercial vehicle transport for corporate fleets, sedans, hatchbacks, and luxury SUVs across India.
            </p>
          </div>

          <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px;">
            <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;"><i class="fas fa-shield-alt"></i></div>
            <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">100% Risk Coverage</h3>
            <p style="font-size: 0.9rem; color: #cbd5e1; margin: 0;">
              Full transit insurance policies protecting your vehicle against accidental damage during highway transit.
            </p>
          </div>

          <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px;">
            <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;"><i class="fas fa-dharmachakra"></i></div>
            <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">Wheel-Lock Belt Harness</h3>
            <p style="font-size: 0.9rem; color: #cbd5e1; margin: 0;">
              Heavy nylon wheel straps and solid rubber chocks locking your car firmly to the carrier container floor.
            </p>
          </div>

          <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px;">
            <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;"><i class="fas fa-satellite-dish"></i></div>
            <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">GPS Location Tracking</h3>
            <p style="font-size: 0.9rem; color: #cbd5e1; margin: 0;">
              Real-time satellite GPS tracking with regular WhatsApp updates sent directly to your phone.
            </p>
          </div>

          <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px;">
            <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;"><i class="fas fa-file-invoice"></i></div>
            <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">IBA Approved Billing</h3>
            <p style="font-size: 0.9rem; color: #cbd5e1; margin: 0;">
              GST tax invoices and consignment receipts compliant with corporate relocation reimbursement guidelines.
            </p>
          </div>

        </div>
      </div>

    </div>
  </section>

  <!-- 5. Specialized Vehicle Carrier Options -->
  <section style="padding: 60px 0; background: #070d1e; color: #e2e8f0;">
    <div class="container">
      <div style="max-width: 950px; margin: 0 auto;">
        <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem;">Vehicle Infrastructure</span>
        <h2 style="font-size: 2rem; font-weight: 800; color: #ffffff; margin-top: 10px;">
          Enclosed <span style="color: #f59e0b;">Automobile Carrier</span> Infrastructure in Balaghat
        </h2>

        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 25px;">
          <div style="background: rgba(23, 42, 84, 0.4); border: 1px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 25px;">
            <h3 style="color: #f59e0b; font-size: 1.25rem; font-weight: 700; margin-bottom: 12px;"><i class="fas fa-truck-moving" style="margin-right: 8px;"></i> Open Multi-Car Trailers</h3>
            <p style="font-size: 0.92rem; color: #cbd5e1; margin-bottom: 15px;">
              Cost-effective solution for standard hatchbacks and sedans moving from Balaghat to Bhopal, Delhi, or Mumbai.
            </p>
            <ul style="list-style: none; padding: 0; font-size: 0.88rem; color: #94a3b8;">
              <li style="margin-bottom: 8px;"><i class="fas fa-check" style="color: #10b981; margin-right: 8px;"></i> Economical car transport service rates</li>
              <li style="margin-bottom: 8px;"><i class="fas fa-check" style="color: #10b981; margin-right: 8px;"></i> Smooth hydraulic loading ramp</li>
              <li><i class="fas fa-check" style="color: #10b981; margin-right: 8px;"></i> 4-point wheel tiedown protection</li>
            </ul>
          </div>

          <div style="background: rgba(23, 42, 84, 0.4); border: 1px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 25px;">
            <h3 style="color: #f59e0b; font-size: 1.25rem; font-weight: 700; margin-bottom: 12px;"><i class="fas fa-box" style="margin-right: 8px;"></i> Single Enclosed Containers</h3>
            <p style="font-size: 0.92rem; color: #cbd5e1; margin-bottom: 15px;">
              Premium closed container trucks designed for luxury SUVs, brand-new cars, and commercial vehicle transport.
            </p>
            <ul style="list-style: none; padding: 0; font-size: 0.88rem; color: #94a3b8;">
              <li style="margin-bottom: 8px;"><i class="fas fa-check" style="color: #10b981; margin-right: 8px;"></i> 100% dust & weather resistance</li>
              <li style="margin-bottom: 8px;"><i class="fas fa-check" style="color: #10b981; margin-right: 8px;"></i> Dedicated single-vehicle space</li>
              <li><i class="fas fa-check" style="color: #10b981; margin-right: 8px;"></i> Zero highway gravel exposure</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 6. 7-Step Safety Protocol -->
  <section style="padding: 65px 0; background: #0b132b; color: #e2e8f0;">
    <div class="container">
      <div style="max-width: 950px; margin: 0 auto;">
        <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem;">Protocol</span>
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin: 10px 0 30px 0;">
          Our 7-Step <span style="color: #f59e0b;">Zero-Scratch</span> Safety Protocol
        </h2>

        <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 20px;">
          <div style="display: flex; gap: 15px; background: rgba(23, 42, 84, 0.3); padding: 18px; border-radius: 12px; border: 1px solid rgba(245,158,11,0.2);">
            <span style="font-size: 1.5rem; font-weight: 800; color: #f59e0b;">01</span>
            <div>
              <h4 style="color: #fff; margin-bottom: 5px; font-size: 1rem;">Pre-Transit Inspection</h4>
              <p style="font-size: 0.85rem; color: #cbd5e1; margin: 0;">25-point visual condition check and odometer reading logged with customer sign-off.</p>
            </div>
          </div>

          <div style="display: flex; gap: 15px; background: rgba(23, 42, 84, 0.3); padding: 18px; border-radius: 12px; border: 1px solid rgba(245,158,11,0.2);">
            <span style="font-size: 1.5rem; font-weight: 800; color: #f59e0b;">02</span>
            <div>
              <h4 style="color: #fff; margin-bottom: 5px; font-size: 1rem;">Protective Cushioning</h4>
              <p style="font-size: 0.85rem; color: #cbd5e1; margin: 0;">Bubble wrapping applied to mirrors, bumpers, side panels, and door edges.</p>
            </div>
          </div>

          <div style="display: flex; gap: 15px; background: rgba(23, 42, 84, 0.3); padding: 18px; border-radius: 12px; border: 1px solid rgba(245,158,11,0.2);">
            <span style="font-size: 1.5rem; font-weight: 800; color: #f59e0b;">03</span>
            <div>
              <h4 style="color: #fff; margin-bottom: 5px; font-size: 1rem;">Hydraulic Ramp Entry</h4>
              <p style="font-size: 0.85rem; color: #cbd5e1; margin: 0;">Smooth ramp loading preventing bumper scrapes or undercarriage friction.</p>
            </div>
          </div>

          <div style="display: flex; gap: 15px; background: rgba(23, 42, 84, 0.3); padding: 18px; border-radius: 12px; border: 1px solid rgba(245,158,11,0.2);">
            <span style="font-size: 1.5rem; font-weight: 800; color: #f59e0b;">04</span>
            <div>
              <h4 style="color: #fff; margin-bottom: 5px; font-size: 1rem;">Wheel Belt Securing</h4>
              <p style="font-size: 0.85rem; color: #cbd5e1; margin: 0;">Heavy-duty rubber chocks and nylon straps locking all four wheels securely.</p>
            </div>
          </div>

          <div style="display: flex; gap: 15px; background: rgba(23, 42, 84, 0.3); padding: 18px; border-radius: 12px; border: 1px solid rgba(245,158,11,0.2);">
            <span style="font-size: 1.5rem; font-weight: 800; color: #f59e0b;">05</span>
            <div>
              <h4 style="color: #fff; margin-bottom: 5px; font-size: 1rem;">Transit Insurance Policy</h4>
              <p style="font-size: 0.85rem; color: #cbd5e1; margin: 0;">Comprehensive insurance document provided before carrier dispatch.</p>
            </div>
          </div>

          <div style="display: flex; gap: 15px; background: rgba(23, 42, 84, 0.3); padding: 18px; border-radius: 12px; border: 1px solid rgba(245,158,11,0.2);">
            <span style="font-size: 1.5rem; font-weight: 800; color: #f59e0b;">06</span>
            <div>
              <h4 style="color: #fff; margin-bottom: 5px; font-size: 1rem;">Live GPS Tracking</h4>
              <p style="font-size: 0.85rem; color: #cbd5e1; margin: 0;">Regular location status updates sent via WhatsApp during highway transit.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 7. Regional Network Grid -->
  <section style="padding: 60px 0; background: #070d1e; color: #e2e8f0;">
    <div class="container">
      <div style="max-width: 950px; margin: 0 auto;">
        <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem;">Regional Hubs</span>
        <h2 style="font-size: 2rem; font-weight: 800; color: #ffffff; margin: 10px 0 20px 0;">
          Doorstep Pickup Across <span style="color: #f59e0b;">Madhya Pradesh</span>
        </h2>

        <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 12px;">
          <a href="<?php echo SITE_URL; ?>/pages/car-transportation-in-balaghat.php" style="background: rgba(23,42,84,0.5); padding: 12px; border-radius: 8px; color: #cbd5e1; text-decoration: none; border: 1px solid rgba(245,158,11,0.2); font-size: 0.88rem; text-align: center; display: block;">Car Transport Balaghat</a>
          <a href="<?php echo SITE_URL; ?>/pages/car-transportation-in-bhopal.php" style="background: rgba(23,42,84,0.5); padding: 12px; border-radius: 8px; color: #cbd5e1; text-decoration: none; border: 1px solid rgba(245,158,11,0.2); font-size: 0.88rem; text-align: center; display: block;">Car Transport Bhopal</a>
          <a href="<?php echo SITE_URL; ?>/pages/car-transportation-in-jabalpur.php" style="background: rgba(23,42,84,0.5); padding: 12px; border-radius: 8px; color: #cbd5e1; text-decoration: none; border: 1px solid rgba(245,158,11,0.2); font-size: 0.88rem; text-align: center; display: block;">Car Transport Jabalpur</a>
          <a href="<?php echo SITE_URL; ?>/pages/car-transportation-in-indore.php" style="background: rgba(23,42,84,0.5); padding: 12px; border-radius: 8px; color: #cbd5e1; text-decoration: none; border: 1px solid rgba(245,158,11,0.2); font-size: 0.88rem; text-align: center; display: block;">Car Transport Indore</a>
        </div>
      </div>
    </div>
  </section>

  <!-- 8. Intercity Route Grid -->
  <section style="padding: 60px 0; background: #0b132b; color: #e2e8f0;">
    <div class="container">
      <div style="max-width: 950px; margin: 0 auto;">
        <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem;">Popular Routes</span>
        <h2 style="font-size: 2rem; font-weight: 800; color: #ffffff; margin: 10px 0 20px 0;">
          Popular <span style="color: #f59e0b;">Car Moving Service Routes</span> from Balaghat
        </h2>

        <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 15px;">
          <div style="background: rgba(23,42,84,0.4); padding: 16px; border-radius: 10px; border: 1px solid rgba(245,158,11,0.2); text-align: center;">
            <div style="font-weight: 700; color: #ffffff; margin-bottom: 5px;">Balaghat → Bhopal</div>
            <div style="font-size: 0.85rem; color: #94a3b8;">Transit Time: 1-2 Days</div>
          </div>
          <div style="background: rgba(23,42,84,0.4); padding: 16px; border-radius: 10px; border: 1px solid rgba(245,158,11,0.2); text-align: center;">
            <div style="font-weight: 700; color: #ffffff; margin-bottom: 5px;">Balaghat → Delhi NCR</div>
            <div style="font-size: 0.85rem; color: #94a3b8;">Transit Time: 3-4 Days</div>
          </div>
          <div style="background: rgba(23,42,84,0.4); padding: 16px; border-radius: 10px; border: 1px solid rgba(245,158,11,0.2); text-align: center;">
            <div style="font-weight: 700; color: #ffffff; margin-bottom: 5px;">Balaghat → Bangalore</div>
            <div style="font-size: 0.85rem; color: #94a3b8;">Transit Time: 4-5 Days</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 9. IBA GST Billing & Compliance -->
  <section style="padding: 60px 0; background: #070d1e; color: #e2e8f0;">
    <div class="container">
      <div style="max-width: 950px; margin: 0 auto; background: rgba(23, 42, 84, 0.4); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 16px; padding: 35px;">
        <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem;">Legal Billing</span>
        <h2 style="font-size: 2rem; font-weight: 800; color: #ffffff; margin: 10px 0 15px 0;">
          IBA Approved GST Tax Invoices & Legal Compliance
        </h2>
        <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.7; margin-bottom: 20px;">
          We issue 100% genuine tax invoices recognized by all government bodies, public sector units, and private organizations in Balaghat:
        </p>

        <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 15px; text-align: left;">
          <div style="background: rgba(11, 19, 43, 0.6); padding: 15px; border-radius: 8px; border-left: 3px solid #f59e0b;">
            <div style="font-weight: 700; color: #ffffff;">GST Tax Invoice</div>
            <div style="font-size: 0.82rem; color: #94a3b8; margin-top: 4px;">Valid bills for employee relocation reimbursement.</div>
          </div>
          <div style="background: rgba(11, 19, 43, 0.6); padding: 15px; border-radius: 8px; border-left: 3px solid #f59e0b;">
            <div style="font-weight: 700; color: #ffffff;">Consignment LR Copy</div>
            <div style="font-size: 0.82rem; color: #94a3b8; margin-top: 4px;">Official consignment note specifying carrier truck details.</div>
          </div>
          <div style="background: rgba(11, 19, 43, 0.6); padding: 15px; border-radius: 8px; border-left: 3px solid #f59e0b;">
            <div style="font-weight: 700; color: #ffffff;">Transit Insurance</div>
            <div style="font-size: 0.82rem; color: #94a3b8; margin-top: 4px;">Comprehensive policy certificate included with your receipt.</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 10. Frequently Asked Questions (FAQ Section & JSON-LD) -->
  <section style="padding: 65px 0; background: #0b132b; color: #e2e8f0;">
    <div class="container">
      <div style="max-width: 950px; margin: 0 auto;">
        <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem;">Got Questions?</span>
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin: 10px 0 30px 0;">
          Frequently Asked Questions About <span style="color: #f59e0b;">Balaghat Car Transport</span>
        </h2>

        <div style="display: grid; gap: 15px;">
          <?php foreach ($faq_list as $index => $faq): ?>
            <div style="background: rgba(23, 42, 84, 0.4); border: 1px solid rgba(245, 158, 11, 0.2); border-radius: 12px; padding: 20px;">
              <h3 style="font-size: 1.1rem; font-weight: 700; color: #ffffff; margin-bottom: 8px;">
                <span style="color: #f59e0b; margin-right: 8px;">Q<?php echo $index + 1; ?>.</span> <?php echo htmlspecialchars($faq['q']); ?>
              </h3>
              <p style="font-size: 0.93rem; color: #cbd5e1; margin: 0; line-height: 1.7;">
                <?php echo htmlspecialchars($faq['a']); ?>
              </p>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </section>

  <!-- 11. Final Call-to-Action Footer Section -->
  <section style="padding: 60px 0; background: linear-gradient(135deg, #1c2541 0%, #0b132b 100%); text-align: center; color: #ffffff; border-top: 1px solid rgba(245, 158, 11, 0.3);">
    <div class="container">
      <div style="max-width: 800px; margin: 0 auto;">
        <h2 style="font-size: 2.3rem; font-weight: 800; margin-bottom: 15px; color: #ffffff;">
          Book Safe <span style="color: #f59e0b;">Car Transportation in Balaghat</span> Today
        </h2>
        <p style="font-size: 1.05rem; color: #cbd5e1; margin-bottom: 30px;">
          Experience professional car transport service, specialized automobile carrier transport, and 100% risk coverage with Shree Ashirwad.
        </p>
        <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap;">
          <a href="tel:<?php echo SITE_PHONE_RAW; ?>" style="padding: 15px 35px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1.05rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225,29,72,0.4);">
            <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call <?php echo SITE_PHONE; ?>
          </a>
          <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20to%20book%20car%20transportation%20in%20Balaghat." target="_blank" style="padding: 15px 35px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1.05rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16,185,129,0.4);">
            <i class="fab fa-whatsapp" style="margin-right: 8px;"></i> Instant WhatsApp Quote
          </a>
        </div>
      </div>
    </div>
  </section>

</main>

<!-- FAQPage JSON-LD Schema -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    <?php 
    $json_faqs = [];
    foreach ($faq_list as $faq) {
        $json_faqs[] = '{
          "@type": "Question",
          "name": ' . json_encode($faq['q']) . ',
          "acceptedAnswer": {
            "@type": "Answer",
            "text": ' . json_encode($faq['a']) . '
          }
        }';
    }
    echo implode(",\n    ", $json_faqs);
    ?>
  ]
}
</script>

<!-- MovingCompany JSON-LD Schema -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "MovingCompany",
  "name": "Shree Ashirwad Packers and Movers",
  "image": "https://shreeashirwadpackersandmovers.com/assets/images/logo.png",
  "telephone": "+91-8409531615",
  "url": "<?php echo $canonical_url; ?>",
  "description": "<?php echo $page_desc; ?>",
  "address": {
    "@type": "PostalAddress",
    "addressLocality": "Balaghat",
    "addressRegion": "Madhya Pradesh",
    "addressCountry": "IN"
  },
  "areaServed": "Balaghat, Madhya Pradesh",
  "priceRange": "₹5500 - ₹17000"
}
</script>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
