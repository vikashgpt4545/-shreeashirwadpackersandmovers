<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "Car Transportation in Bakhtiarpur | Top Rated Car Moving Service";
$page_desc = "Professional car transportation in Bakhtiarpur, Patna, Bihar. Shree Ashirwad Packers and Movers is among top rated car transport companies providing reliable car transport service, intercity car shifting, and 100% insurance. Call 8409531615.";
$page_keywords = "car transportation in bakhtiarpur, car transport service, top rated car transport companies, car moving service, intercity car shifting";
$canonical_url = "https://shreeashirwadpackersandmovers.com/pages/car-transportation-in-bakhtiarpur.php";

$page_city = "Bakhtiarpur, Patna, Bihar";

$faq_list = [
    ['q' => 'What is the cost of car transportation in Bakhtiarpur to Delhi, Kolkata, or Bangalore?', 'a' => 'Car transport charges from Bakhtiarpur depend on vehicle type (hatchback, sedan, SUV) and route distance. Standard rates range from ₹5,500 to ₹16,500 including 100% transit insurance and IBA GST bills.'],
    ['q' => 'Why choose Shree Ashirwad among top rated car transport companies in Bihar?', 'a' => 'We are recognized among top rated car transport companies due to our zero-scratch guarantee, specialized hydraulic enclosed container trailers, wheel-lock security, and transparent IBA GST billing.'],
    ['q' => 'What does your professional car transport service include?', 'a' => 'Our car transport service includes doorstep vehicle pickup in Bakhtiarpur, 7-layer protective wrapping, enclosed container transit, 100% insurance policy issuance, and direct home delivery.'],
    ['q' => 'Do you provide intercity car shifting from Bakhtiarpur to all major cities?', 'a' => 'Yes, our intercity car shifting network spans across Patna, Kolkata, Ranchi, Delhi NCR, Mumbai, Bangalore, and all major Indian hubs.'],
    ['q' => 'What documents are required for car moving service from Bakhtiarpur?', 'a' => 'You need a copy of the Car Registration Certificate (RC), valid insurance policy, owner ID proof (Aadhaar/PAN), and PUC certificate.'],
    ['q' => 'Can personal luggage be loaded in the car boot during relocation?', 'a' => 'Up to 30-40 kg of non-hazardous personal luggage can be kept in the boot, provided all cabin seats remain completely unobstructed.'],
    ['q' => 'How long does car transit take from Bakhtiarpur to Patna, Kolkata, or Delhi?', 'a' => 'Transit to Patna takes 1 day, Kolkata/Ranchi takes 2-3 days, and Delhi NCR or Mumbai takes 4-5 days.'],
    ['q' => 'Do you provide real-time GPS vehicle tracking for car moving service?', 'a' => 'Yes, all container car carrier trucks feature satellite GPS tracking with regular WhatsApp updates sent directly to customers.'],
    ['q' => 'Are IBA approved GST bills provided for corporate relocation reimbursement?', 'a' => 'Yes, we provide official IBA-approved GST tax invoices, consignment LR receipts, and pre-transit condition inspection reports.'],
    ['q' => 'How can I get an instant quote for car transportation in Bakhtiarpur?', 'a' => 'Call +91 8409531615 or submit your vehicle details via WhatsApp for an immediate price estimate and scheduled doorstep pickup.']
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
            PATNA CAR RELOCATION SPECIALISTS
          </span>
          <h1 style="font-size: 2.6rem; font-weight: 800; line-height: 1.2; margin-bottom: 20px; color: #ffffff;">
            Reliable <span style="color: #f59e0b;">Car Transportation in Bakhtiarpur</span>
          </h1>
          <p style="font-size: 1.05rem; color: #cbd5e1; line-height: 1.7; margin-bottom: 25px;">
            Shree Ashirwad Packers and Movers is recognized among top rated car transport companies providing reliable car transportation in Bakhtiarpur, Patna district. We offer expert car transport service, seamless intercity car shifting, single & multi-car container haulage, and 100% transit risk coverage.
          </p>

          <div style="display: flex; gap: 15px; flex-wrap: wrap; margin-bottom: 30px;">
            <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Now" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
              <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call Now: <?php echo SITE_PHONE; ?>
            </a>
            <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20need%20a%20car%20transportation%20quote%20for%20Bakhtiarpur." title="Chat on WhatsApp" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
              <i class="fab fa-whatsapp" style="margin-right: 8px;"></i> Chat on WhatsApp
            </a>
          </div>

          <div style="display: flex; gap: 20px; font-size: 0.9rem; color: #94a3b8;">
            <span><strong style="color: #f59e0b;">580+</strong> Cars Shipped</span>
            <span><strong style="color: #f59e0b;">Enclosed</strong> Container Fleet</span>
            <span><strong style="color: #f59e0b;">100%</strong> Risk Coverage</span>
          </div>
        </div>

        <!-- Hero Lead Form Column -->
        <div class="hero-form-card" style="background: rgba(255, 255, 255, 0.05); backdrop-filter: blur(10px); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 16px; padding: 30px; box-shadow: 0 15px 35px rgba(0,0,0,0.4);">
          <h2 style="font-size: 1.4rem; color: #ffffff; margin-bottom: 8px; font-weight: 700; text-align: center;">Get Bakhtiarpur Quote</h2>
          <p style="font-size: 0.85rem; color: #94a3b8; text-align: center; margin-bottom: 20px;">Calculate car transport charges on WhatsApp in 2 minutes</p>

          <form action="#" method="POST" onsubmit="sendHeroWhatsAppLead(event, this);">
            <div style="margin-bottom: 14px;">
              <input type="text" name="name" class="form-control" placeholder="Your Full Name" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="margin-bottom: 14px;">
              <input type="tel" name="phone" class="form-control" placeholder="10-Digit Phone / WhatsApp Number" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 10px; margin-bottom: 14px;">
              <input type="text" name="move_from" class="form-control" placeholder="Pickup Area" value="Bakhtiarpur, Patna" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
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
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">580+</div>
          <div style="font-size: 0.9rem; color: #cbd5e1; margin-top: 5px;">Cars Relocated</div>
        </div>
        <div style="padding: 20px; background: rgba(23, 42, 84, 0.5); border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">Top Rated</div>
          <div style="font-size: 0.9rem; color: #cbd5e1; margin-top: 5px;">Car Moving Service</div>
        </div>
        <div style="padding: 20px; background: rgba(23, 42, 84, 0.5); border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">100%</div>
          <div style="font-size: 0.9rem; color: #cbd5e1; margin-top: 5px;">Transit Risk Cover</div>
        </div>
        <div style="padding: 20px; background: rgba(23, 42, 84, 0.5); border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">IBA Approved</div>
          <div style="font-size: 0.9rem; color: #cbd5e1; margin-top: 5px;">GST Billing Bills</div>
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
          Why Choose Our <span style="color: #f59e0b;">Car Moving Service</span> in Bakhtiarpur?
        </h2>

        <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px; margin: 30px 0;">
          
          <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px;">
            <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;"><i class="fas fa-star"></i></div>
            <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">Top Rated Company</h3>
            <p style="font-size: 0.9rem; color: #cbd5e1; margin: 0;">
              One of the top rated car transport companies in Bihar with thousands of satisfied customer reviews.
            </p>
          </div>

          <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px;">
            <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;"><i class="fas fa-road"></i></div>
            <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">Intercity Car Shifting</h3>
            <p style="font-size: 0.9rem; color: #cbd5e1; margin: 0;">
              Seamless intercity car shifting connecting Bakhtiarpur to major capitals and metro destinations across India.
            </p>
          </div>

          <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px;">
            <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;"><i class="fas fa-truck-monster"></i></div>
            <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">Enclosed Container Transport</h3>
            <p style="font-size: 0.9rem; color: #cbd5e1; margin: 0;">
              Weather-proof enclosed container trailers shielding vehicles from dust storms and highway gravel.
            </p>
          </div>

          <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px;">
            <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;"><i class="fas fa-dharmachakra"></i></div>
            <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">Wheel-Lock Security</h3>
            <p style="font-size: 0.9rem; color: #cbd5e1; margin: 0;">
              Heavy-duty rubber chocks and nylon safety belts locking all 4 wheels firmly inside the container deck.
            </p>
          </div>

          <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px;">
            <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;"><i class="fas fa-satellite-dish"></i></div>
            <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">Satellite GPS Tracking</h3>
            <p style="font-size: 0.9rem; color: #cbd5e1; margin: 0;">
              Real-time satellite GPS tracking with daily WhatsApp updates keeping you informed throughout transit.
            </p>
          </div>

          <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px;">
            <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;"><i class="fas fa-shield-alt"></i></div>
            <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">100% Risk Cover</h3>
            <p style="font-size: 0.9rem; color: #cbd5e1; margin: 0;">
              Comprehensive transit insurance policy attached with full 25-point condition logging.
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
        <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem;">Carrier Specifications</span>
        <h2 style="font-size: 2rem; font-weight: 800; color: #ffffff; margin-top: 10px;">
          Car Carrier Infrastructure in <span style="color: #f59e0b;">Bakhtiarpur Patna</span>
        </h2>

        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 25px;">
          <div style="background: rgba(23, 42, 84, 0.4); border: 1px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 25px;">
            <h3 style="color: #f59e0b; font-size: 1.25rem; font-weight: 700; margin-bottom: 12px;"><i class="fas fa-truck-moving" style="margin-right: 8px;"></i> Open Multi-Car Carriers</h3>
            <p style="font-size: 0.92rem; color: #cbd5e1; margin-bottom: 15px;">
              Budget-friendly option for standard hatchbacks and sedans moving to Patna, Kolkata, or Ranchi.
            </p>
            <ul style="list-style: none; padding: 0; font-size: 0.88rem; color: #94a3b8;">
              <li style="margin-bottom: 8px;"><i class="fas fa-check" style="color: #10b981; margin-right: 8px;"></i> Economical intercity car shifting rates</li>
              <li style="margin-bottom: 8px;"><i class="fas fa-check" style="color: #10b981; margin-right: 8px;"></i> Hydraulic ramp loading safety</li>
              <li><i class="fas fa-check" style="color: #10b981; margin-right: 8px;"></i> Complete wheel tiedown locking</li>
            </ul>
          </div>

          <div style="background: rgba(23, 42, 84, 0.4); border: 1px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 25px;">
            <h3 style="color: #f59e0b; font-size: 1.25rem; font-weight: 700; margin-bottom: 12px;"><i class="fas fa-box" style="margin-right: 8px;"></i> Single Enclosed Container</h3>
            <p style="font-size: 0.92rem; color: #cbd5e1; margin-bottom: 15px;">
              Premium closed container trucks designed for luxury SUVs, executive sedans, and brand-new cars.
            </p>
            <ul style="list-style: none; padding: 0; font-size: 0.88rem; color: #94a3b8;">
              <li style="margin-bottom: 8px;"><i class="fas fa-check" style="color: #10b981; margin-right: 8px;"></i> 100% dust & weather resistance</li>
              <li style="margin-bottom: 8px;"><i class="fas fa-check" style="color: #10b981; margin-right: 8px;"></i> Dedicated single-car container space</li>
              <li><i class="fas fa-check" style="color: #10b981; margin-right: 8px;"></i> Zero road hazard risk</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 6. 7-Step Zero-Scratch Vehicle Safety Protocol -->
  <section style="padding: 65px 0; background: #0b132b; color: #e2e8f0;">
    <div class="container">
      <div style="max-width: 950px; margin: 0 auto;">
        <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem;">Safety Assurance</span>
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin: 10px 0 30px 0;">
          Our 7-Step <span style="color: #f59e0b;">Zero-Scratch</span> Safety Protocol
        </h2>

        <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 20px;">
          <div style="display: flex; gap: 15px; background: rgba(23, 42, 84, 0.3); padding: 18px; border-radius: 12px; border: 1px solid rgba(245,158,11,0.2);">
            <span style="font-size: 1.5rem; font-weight: 800; color: #f59e0b;">01</span>
            <div>
              <h4 style="color: #fff; margin-bottom: 5px; font-size: 1rem;">Pre-Transit Inspection</h4>
              <p style="font-size: 0.85rem; color: #cbd5e1; margin: 0;">Comprehensive 25-point visual inspection and odometer recording in owner presence.</p>
            </div>
          </div>

          <div style="display: flex; gap: 15px; background: rgba(23, 42, 84, 0.3); padding: 18px; border-radius: 12px; border: 1px solid rgba(245,158,11,0.2);">
            <span style="font-size: 1.5rem; font-weight: 800; color: #f59e0b;">02</span>
            <div>
              <h4 style="color: #fff; margin-bottom: 5px; font-size: 1rem;">Protective Wrapping</h4>
              <p style="font-size: 0.85rem; color: #cbd5e1; margin: 0;">Multi-layer bubble wrapping on mirrors, door handles, bumpers, and side panels.</p>
            </div>
          </div>

          <div style="display: flex; gap: 15px; background: rgba(23, 42, 84, 0.3); padding: 18px; border-radius: 12px; border: 1px solid rgba(245,158,11,0.2);">
            <span style="font-size: 1.5rem; font-weight: 800; color: #f59e0b;">03</span>
            <div>
              <h4 style="color: #fff; margin-bottom: 5px; font-size: 1rem;">Hydraulic Loading</h4>
              <p style="font-size: 0.85rem; color: #cbd5e1; margin: 0;">Smooth hydraulic ramp entry preventing bumper friction and undercarriage scrapes.</p>
            </div>
          </div>

          <div style="display: flex; gap: 15px; background: rgba(23, 42, 84, 0.3); padding: 18px; border-radius: 12px; border: 1px solid rgba(245,158,11,0.2);">
            <span style="font-size: 1.5rem; font-weight: 800; color: #f59e0b;">04</span>
            <div>
              <h4 style="color: #fff; margin-bottom: 5px; font-size: 1rem;">Wheel Lock Harnessing</h4>
              <p style="font-size: 0.85rem; color: #cbd5e1; margin: 0;">Heavy-duty rubber chocks and nylon safety belts locking all 4 wheels firmly.</p>
            </div>
          </div>

          <div style="display: flex; gap: 15px; background: rgba(23, 42, 84, 0.3); padding: 18px; border-radius: 12px; border: 1px solid rgba(245,158,11,0.2);">
            <span style="font-size: 1.5rem; font-weight: 800; color: #f59e0b;">05</span>
            <div>
              <h4 style="color: #fff; margin-bottom: 5px; font-size: 1rem;">100% Transit Insurance Cover</h4>
              <p style="font-size: 0.85rem; color: #cbd5e1; margin: 0;">Full insurance policy copy issued prior to carrier dispatch.</p>
            </div>
          </div>

          <div style="display: flex; gap: 15px; background: rgba(23, 42, 84, 0.3); padding: 18px; border-radius: 12px; border: 1px solid rgba(245,158,11,0.2);">
            <span style="font-size: 1.5rem; font-weight: 800; color: #f59e0b;">06</span>
            <div>
              <h4 style="color: #fff; margin-bottom: 5px; font-size: 1rem;">Satellite GPS Monitoring</h4>
              <p style="font-size: 0.85rem; color: #cbd5e1; margin: 0;">Live tracking updates sent directly to your phone via WhatsApp throughout transit.</p>
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
          Doorstep Pickup Across <span style="color: #f59e0b;">Patna & Bihar</span>
        </h2>

        <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 12px;">
          <a href="<?php echo SITE_URL; ?>/pages/car-transportation-in-bakhtiarpur.php" style="background: rgba(23,42,84,0.5); padding: 12px; border-radius: 8px; color: #cbd5e1; text-decoration: none; border: 1px solid rgba(245,158,11,0.2); font-size: 0.88rem; text-align: center; display: block;">Car Transport Bakhtiarpur</a>
          <a href="<?php echo SITE_URL; ?>/pages/car-transportation-in-patna.php" style="background: rgba(23,42,84,0.5); padding: 12px; border-radius: 8px; color: #cbd5e1; text-decoration: none; border: 1px solid rgba(245,158,11,0.2); font-size: 0.88rem; text-align: center; display: block;">Car Transport Patna</a>
          <a href="<?php echo SITE_URL; ?>/pages/car-transportation-in-bihar-sharif.php" style="background: rgba(23,42,84,0.5); padding: 12px; border-radius: 8px; color: #cbd5e1; text-decoration: none; border: 1px solid rgba(245,158,11,0.2); font-size: 0.88rem; text-align: center; display: block;">Car Transport Bihar Sharif</a>
          <a href="<?php echo SITE_URL; ?>/pages/car-transportation-in-muzaffarpur.php" style="background: rgba(23,42,84,0.5); padding: 12px; border-radius: 8px; color: #cbd5e1; text-decoration: none; border: 1px solid rgba(245,158,11,0.2); font-size: 0.88rem; text-align: center; display: block;">Car Transport Muzaffarpur</a>
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
          Popular <span style="color: #f59e0b;">Intercity Car Shifting Routes</span> from Bakhtiarpur
        </h2>

        <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 15px;">
          <div style="background: rgba(23,42,84,0.4); padding: 16px; border-radius: 10px; border: 1px solid rgba(245,158,11,0.2); text-align: center;">
            <div style="font-weight: 700; color: #ffffff; margin-bottom: 5px;">Bakhtiarpur → Patna</div>
            <div style="font-size: 0.85rem; color: #94a3b8;">Transit Time: 1 Day</div>
          </div>
          <div style="background: rgba(23,42,84,0.4); padding: 16px; border-radius: 10px; border: 1px solid rgba(245,158,11,0.2); text-align: center;">
            <div style="font-weight: 700; color: #ffffff; margin-bottom: 5px;">Bakhtiarpur → Kolkata</div>
            <div style="font-size: 0.85rem; color: #94a3b8;">Transit Time: 2-3 Days</div>
          </div>
          <div style="background: rgba(23,42,84,0.4); padding: 16px; border-radius: 10px; border: 1px solid rgba(245,158,11,0.2); text-align: center;">
            <div style="font-weight: 700; color: #ffffff; margin-bottom: 5px;">Bakhtiarpur → Delhi NCR</div>
            <div style="font-size: 0.85rem; color: #94a3b8;">Transit Time: 4-5 Days</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 9. IBA GST Billing & Legal Compliance -->
  <section style="padding: 60px 0; background: #070d1e; color: #e2e8f0;">
    <div class="container">
      <div style="max-width: 950px; margin: 0 auto; background: rgba(23, 42, 84, 0.4); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 16px; padding: 35px;">
        <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem;">Official Documentation</span>
        <h2 style="font-size: 2rem; font-weight: 800; color: #ffffff; margin: 10px 0 15px 0;">
          IBA Approved GST Billing & Documentation Compliance
        </h2>
        <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.7; margin-bottom: 20px;">
          For corporate officers and defense personnel relocating from Bakhtiarpur, we issue 100% valid bills accepted by all major companies:
        </p>

        <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 15px; text-align: left;">
          <div style="background: rgba(11, 19, 43, 0.6); padding: 15px; border-radius: 8px; border-left: 3px solid #f59e0b;">
            <div style="font-weight: 700; color: #ffffff;">IBA GST Tax Invoice</div>
            <div style="font-size: 0.82rem; color: #94a3b8; margin-top: 4px;">100% valid claim bills for corporate relocation allowance.</div>
          </div>
          <div style="background: rgba(11, 19, 43, 0.6); padding: 15px; border-radius: 8px; border-left: 3px solid #f59e0b;">
            <div style="font-weight: 700; color: #ffffff;">Consignment LR Copy</div>
            <div style="font-size: 0.82rem; color: #94a3b8; margin-top: 4px;">Official consignment note with carrier truck details.</div>
          </div>
          <div style="background: rgba(11, 19, 43, 0.6); padding: 15px; border-radius: 8px; border-left: 3px solid #f59e0b;">
            <div style="font-weight: 700; color: #ffffff;">Transit Insurance</div>
            <div style="font-size: 0.82rem; color: #94a3b8; margin-top: 4px;">Comprehensive policy copy attached with your invoice.</div>
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
          Frequently Asked Questions About <span style="color: #f59e0b;">Bakhtiarpur Car Transport</span>
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
          Book Safe <span style="color: #f59e0b;">Car Transportation in Bakhtiarpur</span> Today
        </h2>
        <p style="font-size: 1.05rem; color: #cbd5e1; margin-bottom: 30px;">
          Get top rated car moving service, reliable car transport service, intercity car shifting, and 100% insurance cover with Shree Ashirwad.
        </p>
        <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap;">
          <a href="tel:<?php echo SITE_PHONE_RAW; ?>" style="padding: 15px 35px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1.05rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225,29,72,0.4);">
            <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call <?php echo SITE_PHONE; ?>
          </a>
          <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20to%20book%20car%20transportation%20in%20Bakhtiarpur." target="_blank" style="padding: 15px 35px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1.05rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16,185,129,0.4);">
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
    "addressLocality": "Bakhtiarpur",
    "addressRegion": "Bihar",
    "addressCountry": "IN"
  },
  "areaServed": "Bakhtiarpur, Patna, Bihar",
  "priceRange": "₹5500 - ₹16500"
}
</script>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
