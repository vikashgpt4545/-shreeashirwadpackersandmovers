<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "Bike Transport by Train Guide | Indian Railways Parcel & Luggage Booking Master Guide";
$page_desc = "Complete guide to shipping bikes and scooters via Indian Railways parcel and luggage services. Learn railway parcel rates, station packing rules, document checklists, petrol draining penalties, and professional door-to-door road shipping alternatives.";
$page_keywords = "bike transport by train, indian railways bike parcel rate, railway luggage bike booking, railway parcel office bike packing, train bike transport procedure, rto documents railway bike parcel";
$canonical_url = "https://shreeashirwadpackersandmovers.com/pages/bike-transport-by-train.php";

$faq_list = [
    ['q' => 'What is the difference between booking a bike as Railway Parcel vs Railway Luggage?', 'a' => 'Railway Luggage booking requires you to hold a valid confirmed passenger train ticket on the same train (bike travels in the SLR luggage van). Railway Parcel booking allows you to ship your bike independently on any available train without travelling yourself.'],
    ['q' => 'What documents are required to book a motorcycle in Indian Railways?', 'a' => 'You must present original Vehicle Registration Certificate (RC), valid insurance copy, government ID proof (Aadhaar/Voter ID), and clear photocopy sets for railway parcel office records.'],
    ['q' => 'What is the penalty if petrol is left in the bike tank during railway transport?', 'a' => 'Indian Railways strictly prohibits carrying fuel inside luggage vans under Section 164 of the Railways Act. Leaving petrol in the tank attracts a fine up to ₹1,000 or imprisonment up to 3 years.'],
    ['q' => 'How much does Indian Railways charge for bike transport?', 'a' => 'Railway freight charges depend on distance and vehicle engine displacement (cc), typically ranging from ₹1,200 to ₹3,500, plus station gunny cloth packing charges (₹300 – ₹600) and railway porter fees.'],
    ['q' => 'Why choose Shree Ashirwad door-to-door enclosed road transport over railway parcel shipping?', 'a' => 'Shree Ashirwad handles 100% doorstep pickup and delivery, premium 7-layer bubble wrapping, full transit insurance, zero fuel draining hassle, and eliminates long queues at chaotic railway parcel counters.'],
    ['q' => 'How early must I reach the railway station parcel office before train departure?', 'a' => 'For Luggage booking, bring your bike to the parcel office at least 3 to 4 hours before scheduled departure. For Parcel booking, deliver the bike during official parcel office hours (usually 10 AM to 5 PM).'],
    ['q' => 'What is a Railway Receipt (RR) and why is it crucial?', 'a' => 'The Railway Receipt (RR) is the official legal document issued upon parcel payment. The receiver must present the original RR at the destination station parcel office to claim and unload the motorcycle.'],
    ['q' => 'Who packages the motorcycle at the railway parcel office?', 'a' => 'Licensed station porters (licensed packers) handle gunny bag and straw wrapping at parcel counters for an extra charge of ₹300 to ₹600. Professional movers provide far superior 7-layer bubble film armor.'],
    ['q' => 'What happens if a bike is not collected immediately at the destination railway station?', 'a' => 'Indian Railways allows a free demurrage window (typically 6 hours). After this period, hourly demurrage or demurrage/wharfage storage charges accumulate until the bike is collected.'],
    ['q' => 'Are motorcycles insured against transit damage during railway transport?', 'a' => 'Basic railway parcel booking includes limited carrier liability unless you declare vehicle value and pay optional 1% declared value insurance fees. Shree Ashirwad includes comprehensive 100% transit insurance cover standard.']
];

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
            INDIAN RAILWAY LOGISTICS GUIDE
          </span>
          <h1 style="font-size: 2.7rem; font-weight: 800; line-height: 1.2; margin-bottom: 20px; color: #ffffff;">
            Master Guide to <span style="color: #f59e0b;">Bike Transport by Train</span>
          </h1>
          <p style="font-size: 1.12rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 25px;">
            Transporting your motorcycle or scooter through Indian Railways via Parcel or Luggage booking is a common intercity option across India. Learn the step-by-step railway parcel counter protocol, gunny cloth packing rules, petrol draining penalties, and Railway Receipt (RR) clearance—or choose seamless doorstep road transport with 7-layer wrapping.
          </p>

          <div style="display: flex; gap: 15px; flex-wrap: wrap; margin-bottom: 30px;">
            <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Railway Shipping Expert" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
              <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call Shipping Expert: <?php echo SITE_PHONE; ?>
            </a>
            <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20information%20about%20bike%20transport." title="Chat on WhatsApp" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
              <i class="fab fa-whatsapp" style="margin-right: 8px;"></i> Chat on WhatsApp
            </a>
          </div>

          <div style="display: flex; gap: 20px; font-size: 0.9rem; color: #94a3b8;">
            <span><strong style="color: #f59e0b;">Parcel vs Luggage</strong> Rules</span>
            <span><strong style="color: #f59e0b;">Railway Receipt</strong> Guide</span>
            <span><strong style="color: #f59e0b;">Doorstep Fleet</strong> Alternative</span>
          </div>
        </div>

        <!-- Hero Lead Form Column -->
        <div class="hero-form-card" style="background: rgba(255, 255, 255, 0.05); backdrop-filter: blur(10px); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 16px; padding: 30px; box-shadow: 0 15px 35px rgba(0,0,0,0.4);">
          <h2 style="font-size: 1.4rem; color: #ffffff; margin-bottom: 8px; font-weight: 700; text-align: center;">Get Railway Bike Quote</h2>
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
              <input type="text" name="move_to" class="form-control" placeholder="Destination Station / City" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <button type="submit" style="width: 100%; padding: 14px; background: linear-gradient(135deg, #d32f2f 0%, #f59e0b 100%); color: #ffffff; border: none; border-radius: 50px; font-weight: 700; font-size: 1rem; cursor: pointer;">
              Get Instant Estimate Now &rarr;
            </button>
          </form>
        </div>

      </div>
    </div>
  </section>

  <!-- Section 2: Key Stats -->
  <section class="stats-section" style="padding: 50px 0; background: #070d1e; border-bottom: 1px solid rgba(245, 158, 11, 0.2);">
    <div class="container">
      <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 20px; text-align: center;">
        <div style="padding: 20px; background: rgba(23, 42, 84, 0.5); border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">Section 164</div>
          <div style="font-size: 0.9rem; color: #cbd5e1; margin-top: 5px;">Rail Act Petrol Draining Law</div>
        </div>
        <div style="padding: 20px; background: rgba(23, 42, 84, 0.5); border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">RR Receipt</div>
          <div style="font-size: 0.9rem; color: #cbd5e1; margin-top: 5px;">Official Release Voucher</div>
        </div>
        <div style="padding: 20px; background: rgba(23, 42, 84, 0.5); border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">Gunny Wrapping</div>
          <div style="font-size: 0.9rem; color: #cbd5e1; margin-top: 5px;">Station Packing Format</div>
        </div>
        <div style="padding: 20px; background: rgba(23, 42, 84, 0.5); border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">Doorstep</div>
          <div style="font-size: 0.9rem; color: #cbd5e1; margin-top: 5px;">Shree Ashirwad Road Fleet</div>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 3: 6 Pillars of Railway Bike Transport -->
  <section style="padding: 70px 0; background: #0b132b; color: #e2e8f0; line-height: 1.8;">
    <div class="container">
      
      <div style="max-width: 950px; margin: 0 auto;">
        <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Railway Protocol</span>
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin: 10px 0 20px 0;">
          6 Key Aspects of <span style="color: #f59e0b;">Indian Railways Bike Shipping</span>
        </h2>

        <!-- 6 Cards Grid (3x2 Layout) -->
        <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px; margin: 30px 0;">
          
          <!-- Card 1 -->
          <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px; box-shadow: 0 10px 25px rgba(0,0,0,0.3);">
            <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;"><i class="fas fa-train"></i></div>
            <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">1. Parcel vs Luggage Classification</h3>
            <p style="font-size: 0.9rem; color: #cbd5e1; line-height: 1.6; margin: 0;">
              Luggage booking travels on your passenger train. Parcel booking ships independently on available express freight trains.
            </p>
          </div>

          <!-- Card 2 -->
          <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px; box-shadow: 0 10px 25px rgba(0,0,0,0.3);">
            <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;"><i class="fas fa-gas-pump"></i></div>
            <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">2. Mandatory Petrol Draining</h3>
            <p style="font-size: 0.9rem; color: #cbd5e1; line-height: 1.6; margin: 0;">
              Strict inspection at station parcel offices. All petrol must be completely drained before acceptance to prevent fire fines.
            </p>
          </div>

          <!-- Card 3 -->
          <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px; box-shadow: 0 10px 25px rgba(0,0,0,0.3);">
            <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;"><i class="fas fa-box-open"></i></div>
            <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">3. Gunny Cloth &amp; Straw Packing</h3>
            <p style="font-size: 0.9rem; color: #cbd5e1; line-height: 1.6; margin: 0;">
              Station packers wrap fuel tanks and engine parts in burlap gunny sacks with straw padding stitched around indicators.
            </p>
          </div>

          <!-- Card 4 -->
          <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px; box-shadow: 0 10px 25px rgba(0,0,0,0.3);">
            <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;"><i class="fas fa-receipt"></i></div>
            <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">4. Railway Receipt (RR) Issuance</h3>
            <p style="font-size: 0.9rem; color: #cbd5e1; line-height: 1.6; margin: 0;">
              Official RR receipt issued upon payment. Original RR copy must be submitted at destination parcel office for release.
            </p>
          </div>

          <!-- Card 5 -->
          <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px; box-shadow: 0 10px 25px rgba(0,0,0,0.3);">
            <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;"><i class="fas fa-clock"></i></div>
            <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">5. Wharfage &amp; Demurrage Fees</h3>
            <p style="font-size: 0.9rem; color: #cbd5e1; line-height: 1.6; margin: 0;">
              Free holding window is typically 6 hours after train arrival; late collection incurs hourly railway wharfage charges.
            </p>
          </div>

          <!-- Card 6 -->
          <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px; box-shadow: 0 10px 25px rgba(0,0,0,0.3);">
            <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;"><i class="fas fa-shipping-fast"></i></div>
            <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">6. Doorstep Packers &amp; Movers Alternative</h3>
            <p style="font-size: 0.9rem; color: #cbd5e1; line-height: 1.6; margin: 0;">
              Shree Ashirwad provides 100% doorstep collection and delivery, 7-layer bubble wrapping, and full transit insurance.
            </p>
          </div>

        </div>

      </div>

    </div>
  </section>

  <!-- Section 4: Railway vs Packers & Movers Comparison -->
  <section style="padding: 70px 0; background: linear-gradient(180deg, #0b132b 0%, #16203b 100%); color: #ffffff;">
    <div class="container" style="max-width: 900px;">
      
      <div class="section-header text-center" style="margin-bottom: 45px;">
        <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Comparison Matrix</span>
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin-top: 10px;">
          Railway Parcel Booking vs <span style="color: #f59e0b;">Shree Ashirwad Road Carrier</span>
        </h2>
      </div>

      <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 24px;">
        
        <div style="background: #172a54; padding: 24px; border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.3);">
          <h3 style="font-size: 1.2rem; color: #f59e0b; font-weight: 700; margin-bottom: 12px;"><i class="fas fa-train"></i> Indian Railways Parcel Service</h3>
          <ul style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.8; padding-left: 18px; margin: 0;">
            <li>Cost: Low Railway Freight (₹1,500 – ₹3,500)</li>
            <li>Requires manual transport to railway parcel counter</li>
            <li>Basic gunny cloth / burlap bag packing</li>
            <li>Strict petrol draining (fine up to ₹1,000 if violated)</li>
            <li>Self-arranged station pickup &amp; wharfage risks</li>
          </ul>
        </div>

        <div style="background: #172a54; padding: 24px; border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.3);">
          <h3 style="font-size: 1.2rem; color: #f59e0b; font-weight: 700; margin-bottom: 12px;"><i class="fas fa-truck-moving"></i> Shree Ashirwad Enclosed Road Transport</h3>
          <ul style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.8; padding-left: 18px; margin: 0;">
            <li>Cost: All-inclusive competitive rate (₹2,500 – ₹5,500)</li>
            <li>100% Doorstep pickup from residence</li>
            <li>7-Layer bubble, foam &amp; corrugated wrapping</li>
            <li>No petrol draining hassle (5L fuel permitted)</li>
            <li>Direct home delivery with 100% transit insurance</li>
          </ul>
        </div>

      </div>

    </div>
  </section>

  <!-- Section 5: Step-by-Step Railway Booking Protocol -->
  <section style="padding: 70px 0; background: #0b132b; color: #e2e8f0; border-top: 1px solid rgba(245, 158, 11, 0.15);">
    <div class="container" style="max-width: 900px;">
      
      <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Station Protocol</span>
      <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin: 10px 0 20px 0;">
        5 Steps to Transport Your Bike by Indian Railways
      </h2>

      <div style="display: grid; grid-template-columns: 1fr; gap: 16px; margin-top: 25px;">
        <div style="background: rgba(23, 42, 84, 0.6); padding: 20px 24px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #ffffff; font-size: 1.15rem; margin-bottom: 6px;">Step 1: Document Preparation &amp; Photocopies</h4>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0;">Prepare original vehicle RC, insurance policy, and ID proof along with 2 photocopy sets.</p>
        </div>
        <div style="background: rgba(23, 42, 84, 0.6); padding: 20px 24px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #ffffff; font-size: 1.15rem; margin-bottom: 6px;">Step 2: Petrol Tank Draining &amp; Inspection</h4>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0;">Ride bike to station with minimal fuel, drain remaining petrol completely into container, and allow parcel inspector check.</p>
        </div>
        <div style="background: rgba(23, 42, 84, 0.6); padding: 20px 24px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #ffffff; font-size: 1.15rem; margin-bottom: 6px;">Step 3: Station Gunny Cloth Packing &amp; Marker Stenciling</h4>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0;">Hire station packers to wrap bike in gunny cloth padding; paint origin station, destination station, and RR booking number on cloth.</p>
        </div>
        <div style="background: rgba(23, 42, 84, 0.6); padding: 20px 24px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #ffffff; font-size: 1.15rem; margin-bottom: 6px;">Step 4: Parcel Counter Booking &amp; RR Receipt Payment</h4>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0;">Submit parcel forwarding form at counter, pay railway freight charges, and collect original Railway Receipt (RR).</p>
        </div>
        <div style="background: rgba(23, 42, 84, 0.6); padding: 20px 24px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #ffffff; font-size: 1.15rem; margin-bottom: 6px;">Step 5: Destination Parcel Office Release</h4>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0;">Present original RR copy and ID at target station parcel office upon train arrival, inspect bike, and complete gate pass sign-off.</p>
        </div>
      </div>

    </div>
  </section>

  <!-- Section 6: FAQs -->
  <section style="padding: 70px 0; background: #070d1e; color: #ffffff;">
    <div class="container" style="max-width: 900px;">
      
      <div class="section-header text-center" style="margin-bottom: 45px;">
        <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Railway FAQs</span>
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin-top: 10px;">
          Frequently Asked Questions About <span style="color: #f59e0b;">Railway Bike Shipping</span>
        </h2>
      </div>

      <div style="display: flex; flex-direction: column; gap: 16px;">
        <?php foreach ($faq_list as $index => $faq): ?>
        <div style="background: #101c40; padding: 20px 24px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Q<?php echo ($index + 1); ?>: <?php echo htmlspecialchars($faq['q']); ?></h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.7;"><?php echo htmlspecialchars($faq['a']); ?></p>
        </div>
        <?php endforeach; ?>
      </div>

    </div>
  </section>

  <!-- Section 8: Strategic Hub Internal Link Grid -->
  <section style="padding: 60px 0; background: #1c2541; border-top: 1px solid rgba(255,255,255,0.05);">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
      
      <div style="text-align: center; margin-bottom: 35px;">
        <h2 style="font-size: 1.8rem; font-weight: 800; color: #ffffff; margin-bottom: 10px;">
          Explore Related Bike Transport Guides
        </h2>
        <p style="color: #94a3b8; font-size: 0.95rem;">
          Navigate to specialized motorcycle shifting modes and regional service hubs across India.
        </p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 15px;">
        <a href="<?php echo SITE_URL; ?>/pages/bike-transport-bullet.php" style="padding: 14px 18px; background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 8px; color: #f59e0b; font-weight: 600; text-decoration: none; font-size: 0.9rem;">
          <i class="fas fa-motorcycle" style="margin-right: 8px;"></i> Royal Enfield Transport
        </a>
        <a href="<?php echo SITE_URL; ?>/pages/bike-transport-by-bus.php" style="padding: 14px 18px; background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 8px; color: #f59e0b; font-weight: 600; text-decoration: none; font-size: 0.9rem;">
          <i class="fas fa-bus" style="margin-right: 8px;"></i> Bus Luggage Bike Transport
        </a>
        <a href="<?php echo SITE_URL; ?>/pages/bike-transport-by-flight.php" style="padding: 14px 18px; background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 8px; color: #f59e0b; font-weight: 600; text-decoration: none; font-size: 0.9rem;">
          <i class="fas fa-plane" style="margin-right: 8px;"></i> Air Freight Bike Transport
        </a>
        <a href="<?php echo SITE_URL; ?>/pages/bike-transportation-cost.php" style="padding: 14px 18px; background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 8px; color: #f59e0b; font-weight: 600; text-decoration: none; font-size: 0.9rem;">
          <i class="fas fa-calculator" style="margin-right: 8px;"></i> Bike Transport Cost Guide
        </a>
        <a href="<?php echo SITE_URL; ?>/pages/bike-transportation-process.php" style="padding: 14px 18px; background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 8px; color: #f59e0b; font-weight: 600; text-decoration: none; font-size: 0.9rem;">
          <i class="fas fa-cogs" style="margin-right: 8px;"></i> Shifting Process Guide
        </a>
        <a href="<?php echo SITE_URL; ?>/pages/bike-transport-superbike.php" style="padding: 14px 18px; background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 8px; color: #f59e0b; font-weight: 600; text-decoration: none; font-size: 0.9rem;">
          <i class="fas fa-fighter-jet" style="margin-right: 8px;"></i> Superbike Transport
        </a>
        <a href="<?php echo SITE_URL; ?>/pages/packers-and-movers-patna.php" style="padding: 14px 18px; background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 8px; color: #f59e0b; font-weight: 600; text-decoration: none; font-size: 0.9rem;">
          <i class="fas fa-city" style="margin-right: 8px;"></i> Packers &amp; Movers Patna
        </a>
        <a href="<?php echo SITE_URL; ?>/pages/bike-transportation-delhi-to-patna.php" style="padding: 14px 18px; background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 8px; color: #f59e0b; font-weight: 600; text-decoration: none; font-size: 0.9rem;">
          <i class="fas fa-route" style="margin-right: 8px;"></i> Delhi to Patna Bike Shifting
        </a>
      </div>

    </div>
  </section>

  <!-- Section 9: CTA Banner -->
  <section style="padding: 70px 0; background: linear-gradient(135deg, #172a54 0%, #0b132b 100%); border-top: 1.5px solid rgba(245, 158, 11, 0.4); color: #ffffff;">
    <div class="container" style="max-width: 900px; text-align: center;">
      
      <span class="section-tag" style="background: rgba(245, 158, 11, 0.2); color: #f59e0b; padding: 6px 16px; border-radius: 20px; font-size: 0.85rem; font-weight: 700; text-transform: uppercase;">
        Doorstep Road Shipping Alternative
      </span>

      <h2 style="font-size: 2.3rem; font-weight: 800; margin: 15px 0 15px 0; color: #ffffff;">
        Skip Station Hassles with <span style="color: #f59e0b;">Shree Ashirwad Packers</span>
      </h2>

      <p style="font-size: 1.05rem; color: #cbd5e1; max-width: 750px; margin: 0 auto 30px auto; line-height: 1.7;">
        Enjoy 100% doorstep collection and delivery, 7-layer bubble wrapping, zero fuel draining hassle, and full transit insurance.
      </p>

      <div style="display: flex; gap: 15px; justify-content: center; flex-wrap: wrap;">
        <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Transport Desk:" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 30px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1.05rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
          <i class="fas fa-phone-alt"></i> Call Transport Desk: <?php echo SITE_PHONE; ?>
        </a>
        <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20a%20bike%20transport%20quote." title="Chat on WhatsApp" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 30px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1.05rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
          <i class="fab fa-whatsapp"></i> Chat on WhatsApp
        </a>
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
  
  var message = "Hello Shree Ashirwad Packers & Movers,\n\nI would like to request a Bike Transport Quote:\n- Name: " + name + "\n- Phone: " + phone + "\n- Pickup City: " + moveFrom + "\n- Destination City: " + moveTo;
  
  var whatsappUrl = "https://api.whatsapp.com/send?phone=918409531615&text=" + encodeURIComponent(message);
  window.location.href = whatsappUrl;
}
</script>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
