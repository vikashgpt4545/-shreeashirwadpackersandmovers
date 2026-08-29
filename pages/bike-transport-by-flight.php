<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "Bike Transport by Flight Guide | Air Cargo Motorcycle Shipping Master Guide";
$page_desc = "Complete guide to shipping motorcycles, sports bikes, and scooters via commercial air cargo flights. Learn about airport terminal procedures, IATA dangerous goods clearance, fuel tank purging, ISPM wooden crating, and express road transport alternatives.";
$page_keywords = "bike transport by flight, air cargo motorcycle shipping, flight bike transport rates, iata dangerous goods bike shipping, air cargo superbike shipping, airport cargo terminal motorcycle clearance";
$canonical_url = "https://shreeashirwadpackersandmovers.com/pages/bike-transport-by-flight.php";

$faq_list = [
    ['q' => 'Can you transport a motorcycle on a commercial passenger flight?', 'a' => 'Motorcycles are not permitted as passenger checked baggage. They must be booked as commercial air cargo through airline cargo divisions (e.g. Indigo Cargo, Air India Cargo) or specialized freight forwarders.'],
    ['q' => 'What documents are required to ship a bike by air cargo flight?', 'a' => 'You must provide original vehicle RC, valid insurance copy, owner photo ID proof, Airport Dangerous Goods (DG) Declaration Certificate, and Air Waybill (AWB).'],
    ['q' => 'Why is fuel tank purging mandatory for air cargo flight transport?', 'a' => 'Air cargo regulations strictly classify gasoline and petrol vapors as Class 3 Flammable Liquids. Fuel tanks must be 100% drained, flushed, and certified zero-vapor before loading into aircraft holds.'],
    ['q' => 'How are air cargo flight charges for motorcycles calculated?', 'a' => 'Charges are calculated based on volumetric weight formula (Length x Width x Height in cm / 6000) or actual dead weight, whichever is higher, plus airport terminal handling and DG documentation fees.'],
    ['q' => 'Is road transport safer and cheaper than flight transport for domestic Indian moves?', 'a' => 'For 95% of domestic Indian routes, specialized enclosed car/bike carrier trucks provide 100% door-to-door delivery with 7-layer wrapping at less than 30% of air cargo costs, avoiding complex airport fuel purging requirements.'],
    ['q' => 'Is ISPM-15 wooden crating compulsory for air cargo motorcycle transport?', 'a' => 'Yes. Air cargo carriers require solid heat-treated or fumigated ISPM-15 wooden crates to prevent cargo shift during aircraft taxiing, takeoff, and air turbulence.'],
    ['q' => 'How long does air cargo motorcycle shipping take in India?', 'a' => 'Flight transit itself takes only 2 to 6 hours between major metro airports. However, dangerous goods inspection, customs clearance, and terminal handovers require 24 to 48 total hours.'],
    ['q' => 'Can battery terminals remain connected during air transport?', 'a' => 'No. Aircraft safety rules mandate disconnecting lead-acid or lithium-ion battery terminals and insulating terminals with electrical tape to avoid accidental sparking in pressurized flight holds.'],
    ['q' => 'Are superbike fairings safe inside air cargo wooden crates?', 'a' => 'Yes, provided the motorcycle is anchored to a heavy wooden base pallet using high-tensile ratchet straps and padded with 80 GSM bubble wrap prior to outer timber panel assembly.'],
    ['q' => 'Why choose Shree Ashirwad Packers over direct air cargo bookings?', 'a' => 'Shree Ashirwad handles end-to-end logistics: doorstep collection, professional packing, airport DG certification, Air Waybill generation, and destination delivery without terminal hassle.']
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
            AIR CARGO AVIATION LOGISTICS GUIDE
          </span>
          <h1 style="font-size: 2.7rem; font-weight: 800; line-height: 1.2; margin-bottom: 20px; color: #ffffff;">
            Master Guide to <span style="color: #f59e0b;">Bike Transport by Flight</span>
          </h1>
          <p style="font-size: 1.12rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 25px;">
            Transporting a motorcycle via airline cargo flights offers rapid 24-hour intercity delivery for time-critical relocations. However, air transit requires strict IATA Dangerous Goods (DG) compliance, complete fuel purging, battery terminal disconnection, and heavy ISPM-15 wooden crating. Master the air freight protocol or explore cost-effective enclosed road shipping.
          </p>

          <div style="display: flex; gap: 15px; flex-wrap: wrap; margin-bottom: 30px;">
            <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Air Cargo Advisor" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
              <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call Air Cargo Desk: <?php echo SITE_PHONE; ?>
            </a>
            <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20information%20about%20air%20cargo%20bike%20transport." title="Chat on WhatsApp" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
              <i class="fab fa-whatsapp" style="margin-right: 8px;"></i> Chat on WhatsApp
            </a>
          </div>

          <div style="display: flex; gap: 20px; font-size: 0.9rem; color: #94a3b8;">
            <span><strong style="color: #f59e0b;">24-Hour Express</strong> Transit</span>
            <span><strong style="color: #f59e0b;">IATA Flight</strong> Safety</span>
            <span><strong style="color: #f59e0b;">Enclosed Fleet</strong> Alternative</span>
          </div>
        </div>

        <!-- Hero Lead Form Column -->
        <div class="hero-form-card" style="background: rgba(255, 255, 255, 0.05); backdrop-filter: blur(10px); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 16px; padding: 30px; box-shadow: 0 15px 35px rgba(0,0,0,0.4);">
          <h2 style="font-size: 1.4rem; color: #ffffff; margin-bottom: 8px; font-weight: 700; text-align: center;">Get Air Cargo Bike Quote</h2>
          <p style="font-size: 0.85rem; color: #94a3b8; text-align: center; margin-bottom: 20px;">Fast price estimation on WhatsApp in 2 minutes</p>

          <form action="#" method="POST" onsubmit="sendHeroWhatsAppLead(event, this);">
            <div style="margin-bottom: 14px;">
              <input type="text" name="name" class="form-control" placeholder="Your Full Name" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="margin-bottom: 14px;">
              <input type="tel" name="phone" class="form-control" placeholder="10-Digit Phone Number" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 10px; margin-bottom: 14px;">
              <input type="text" name="move_from" class="form-control" placeholder="Pickup Airport / City" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
              <input type="text" name="move_to" class="form-control" placeholder="Destination Airport / City" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <button type="submit" style="width: 100%; padding: 14px; background: linear-gradient(135deg, #d32f2f 0%, #f59e0b 100%); color: #ffffff; border: none; border-radius: 50px; font-weight: 700; font-size: 1rem; cursor: pointer;">
              Get Instant Estimate Now &rarr;
            </button>
          </form>
        </div>

      </div>
    </div>
  </section>

  <!-- Section 2: Stats -->
  <section class="stats-section" style="padding: 50px 0; background: #070d1e; border-bottom: 1px solid rgba(245, 158, 11, 0.2);">
    <div class="container">
      <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 20px; text-align: center;">
        <div style="padding: 20px; background: rgba(23, 42, 84, 0.5); border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">24 Hours</div>
          <div style="font-size: 0.9rem; color: #cbd5e1; margin-top: 5px;">Express Flight Transit</div>
        </div>
        <div style="padding: 20px; background: rgba(23, 42, 84, 0.5); border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">IATA Class 3</div>
          <div style="font-size: 0.9rem; color: #cbd5e1; margin-top: 5px;">DG Safety Compliance</div>
        </div>
        <div style="padding: 20px; background: rgba(23, 42, 84, 0.5); border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">ISPM-15</div>
          <div style="font-size: 0.9rem; color: #cbd5e1; margin-top: 5px;">Fumigated Wooden Crates</div>
        </div>
        <div style="padding: 20px; background: rgba(23, 42, 84, 0.5); border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">7-Layer</div>
          <div style="font-size: 0.9rem; color: #cbd5e1; margin-top: 5px;">Enclosed Road Alternative</div>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 3: 6 Cards Grid (Air Freight Logistics) -->
  <section style="padding: 70px 0; background: #0b132b; color: #e2e8f0; line-height: 1.8;">
    <div class="container">
      
      <div style="max-width: 950px; margin: 0 auto;">
        <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Air Cargo Engineering</span>
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin: 10px 0 20px 0;">
          6 Pillars of <span style="color: #f59e0b;">Bike Transport by Flight</span>
        </h2>

        <!-- 6 Cards Grid -->
        <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px; margin: 30px 0;">
          
          <!-- Card 1 -->
          <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px; box-shadow: 0 10px 25px rgba(0,0,0,0.3);">
            <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;"><i class="fas fa-plane-departure"></i></div>
            <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">1. Commercial Air Cargo Booking</h3>
            <p style="font-size: 0.9rem; color: #cbd5e1; line-height: 1.6; margin: 0;">
              Direct air freight slots booked on commercial cargo flights connecting major metro airports.
            </p>
          </div>

          <!-- Card 2 -->
          <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px; box-shadow: 0 10px 25px rgba(0,0,0,0.3);">
            <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;"><i class="fas fa-fire-extinguisher"></i></div>
            <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">2. Zero-Vapor Fuel Evacuation</h3>
            <p style="font-size: 0.9rem; color: #cbd5e1; line-height: 1.6; margin: 0;">
              Complete draining of fuel tanks and fuel lines to comply with aviation inflight fire hazard rules.
            </p>
          </div>

          <!-- Card 3 -->
          <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px; box-shadow: 0 10px 25px rgba(0,0,0,0.3);">
            <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;"><i class="fas fa-boxes"></i></div>
            <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">3. Heavy Plywood Air Crate</h3>
            <p style="font-size: 0.9rem; color: #cbd5e1; line-height: 1.6; margin: 0;">
              Rigid wooden box casing with internal wheel locks engineered to withstand aircraft cabin pressure.
            </p>
          </div>

          <!-- Card 4 -->
          <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px; box-shadow: 0 10px 25px rgba(0,0,0,0.3);">
            <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;"><i class="fas fa-file-contract"></i></div>
            <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">4. Dangerous Goods (DG) Clearance</h3>
            <p style="font-size: 0.9rem; color: #cbd5e1; line-height: 1.6; margin: 0;">
              Filing official Shipper's DG Certificate verified by certified airport safety officers prior to loading.
            </p>
          </div>

          <!-- Card 5 -->
          <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px; box-shadow: 0 10px 25px rgba(0,0,0,0.3);">
            <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;"><i class="fas fa-weight-hanging"></i></div>
            <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">5. Volumetric Calculation</h3>
            <p style="font-size: 0.9rem; color: #cbd5e1; line-height: 1.6; margin: 0;">
              Billing determined by cargo space volume (L x W x H in cm / 6000) versus actual dead weight.
            </p>
          </div>

          <!-- Card 6 -->
          <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px; box-shadow: 0 10px 25px rgba(0,0,0,0.3);">
            <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;"><i class="fas fa-truck-moving"></i></div>
            <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">6. Preferred Enclosed Road Fleet</h3>
            <p style="font-size: 0.9rem; color: #cbd5e1; line-height: 1.6; margin: 0;">
              Shree Ashirwad 7-layer road transport delivers 100% door-to-door protection at 70% lower overall cost.
            </p>
          </div>

        </div>

      </div>

    </div>
  </section>

  <!-- Section 4: Air Freight Cost Spectrum -->
  <section style="padding: 70px 0; background: linear-gradient(180deg, #0b132b 0%, #16203b 100%); color: #ffffff;">
    <div class="container" style="max-width: 900px;">
      
      <div class="section-header text-center" style="margin-bottom: 45px;">
        <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Pricing Breakdown</span>
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin-top: 10px;">
          Flight Cargo Pricing vs <span style="color: #f59e0b;">Enclosed Road Shipping</span>
        </h2>
      </div>

      <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 24px;">
        
        <div style="background: #172a54; padding: 24px; border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.3);">
          <h3 style="font-size: 1.2rem; color: #f59e0b; font-weight: 700; margin-bottom: 12px;"><i class="fas fa-plane"></i> Air Cargo Flight Shipping</h3>
          <ul style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.8; padding-left: 18px; margin: 0;">
            <li>Transit Time: 12 – 24 Hours</li>
            <li>Cost: ₹18,000 – ₹38,000 (Based on Volumetric Weight)</li>
            <li>Mandatory Dangerous Goods (DG) Certificate Fee</li>
            <li>Mandatory ISPM Plywood Crating Fee</li>
            <li>Self-arranged Airport Terminal Drop &amp; Pickup</li>
          </ul>
        </div>

        <div style="background: #172a54; padding: 24px; border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.3);">
          <h3 style="font-size: 1.2rem; color: #f59e0b; font-weight: 700; margin-bottom: 12px;"><i class="fas fa-truck"></i> Shree Ashirwad Doorstep Road Carrier</h3>
          <ul style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.8; padding-left: 18px; margin: 0;">
            <li>Transit Time: 3 – 5 Days</li>
            <li>Cost: ₹3,500 – ₹7,500 (All-Inclusive Fixed Fee)</li>
            <li>No Fuel Evacuation or Airport DG Clearances Needed</li>
            <li>7-Layer Bubble &amp; Corrugated Foam Protection</li>
            <li>Complete Doorstep Pickup &amp; Doorstep Delivery</li>
          </ul>
        </div>

      </div>

    </div>
  </section>

  <!-- Section 5: Step-by-Step Flight Logistics -->
  <section style="padding: 70px 0; background: #0b132b; color: #e2e8f0; border-top: 1px solid rgba(245, 158, 11, 0.15);">
    <div class="container" style="max-width: 900px;">
      
      <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Airport Process</span>
      <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin: 10px 0 20px 0;">
        5 Steps to Transport a Bike by Air Cargo Flight
      </h2>

      <div style="display: grid; grid-template-columns: 1fr; gap: 16px; margin-top: 25px;">
        <div style="background: rgba(23, 42, 84, 0.6); padding: 20px 24px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #ffffff; font-size: 1.15rem; margin-bottom: 6px;">Step 1: Document Verification &amp; Flight Slot Booking</h4>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0;">Submit RC, insurance, and owner ID copies to secure a cargo airway slot on commercial flights.</p>
        </div>
        <div style="background: rgba(23, 42, 84, 0.6); padding: 20px 24px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #ffffff; font-size: 1.15rem; margin-bottom: 6px;">Step 2: Fuel Evacuation &amp; Battery Isolation</h4>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0;">Drain petrol tank completely and disconnect battery terminals in compliance with IATA fire standards.</p>
        </div>
        <div style="background: rgba(23, 42, 84, 0.6); padding: 20px 24px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #ffffff; font-size: 1.15rem; margin-bottom: 6px;">Step 3: Plywood Wooden Crate Construction</h4>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0;">Build a custom wooden box with internal wheel chocks and shock foam lining around the motorcycle.</p>
        </div>
        <div style="background: rgba(23, 42, 84, 0.6); padding: 20px 24px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #ffffff; font-size: 1.15rem; margin-bottom: 6px;">Step 4: Airport Terminal Security Screening</h4>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0;">Deliver crate to airport cargo terminal for X-ray inspection, explosive trace detection, and DG clearance.</p>
        </div>
        <div style="background: rgba(23, 42, 84, 0.6); padding: 20px 24px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #ffffff; font-size: 1.15rem; margin-bottom: 6px;">Step 5: Inflight Cargo Transit &amp; Destination Pickup</h4>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0;">Aircraft arrives at destination airport cargo bay; recipient presents Air Waybill and ID for cargo release.</p>
        </div>
      </div>

    </div>
  </section>

  <!-- Section 6: FAQs -->
  <section style="padding: 70px 0; background: #070d1e; color: #ffffff;">
    <div class="container" style="max-width: 900px;">
      
      <div class="section-header text-center" style="margin-bottom: 45px;">
        <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Flight Cargo FAQs</span>
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin-top: 10px;">
          Frequently Asked Questions About <span style="color: #f59e0b;">Bike Transport by Flight</span>
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
        <a href="<?php echo SITE_URL; ?>/pages/bike-transport-by-train.php" style="padding: 14px 18px; background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 8px; color: #f59e0b; font-weight: 600; text-decoration: none; font-size: 0.9rem;">
          <i class="fas fa-train" style="margin-right: 8px;"></i> Railway Bike Shipping
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
        Book Safe &amp; Affordable Bike Shipping with <span style="color: #f59e0b;">Shree Ashirwad Packers</span>
      </h2>

      <p style="font-size: 1.05rem; color: #cbd5e1; max-width: 750px; margin: 0 auto 30px auto; line-height: 1.7;">
        Get 100% insured door-to-door bike shipping inside covered container trucks with 7-layer wrapping across India.
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
  
  var message = "Hello Shree Ashirwad Packers & Movers,\n\nI would like to request an Air Cargo Bike Transport Quote:\n- Name: " + name + "\n- Phone: " + phone + "\n- Pickup City: " + moveFrom + "\n- Destination City: " + moveTo;
  
  var whatsappUrl = "https://api.whatsapp.com/send?phone=918409531615&text=" + encodeURIComponent(message);
  window.location.href = whatsappUrl;
}
</script>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
