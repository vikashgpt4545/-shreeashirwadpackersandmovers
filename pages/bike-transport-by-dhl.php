<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "DHL Bike Transport Guide | Express Courier & Air Freight Vehicle Shipping";
$page_desc = "Complete guide on shipping high-end motorcycles, superbikes, and e-bikes via DHL Express Cargo and air freight services. Learn dangerous goods compliance, custom ISPM-15 wooden crating, fuel draining protocols, customs clearance, and domestic road transport alternatives.";
$page_keywords = "dhl bike transport, express courier motorcycle shipping, dhl air cargo vehicle transport, superbike air shipping, dangerous goods motorcycle transport, custom wooden crating bike, dhl bike delivery charges";

$faq_list = [
    ['q' => 'Can you ship a motorcycle through DHL Express Cargo?', 'a' => 'Yes, DHL Express Cargo and DHL Global Forwarding transport motorcycles domestically and internationally via air freight and specialized freight networks, provided the bike meets IATA dangerous goods packing regulations.'],
    ['q' => 'What dangerous goods (DG) protocols are required for DHL air bike shipping?', 'a' => 'Motorcycles must have fuel tanks completely drained and purged, battery terminals disconnected and insulated, and fluid levels certified leak-free prior to cargo acceptance.'],
    ['q' => 'Is custom wooden crating mandatory for DHL bike transport?', 'a' => 'Yes, air cargo and international courier standards mandate ISPM-15 heat-treated fumigated wooden crating with internal steel tie-down anchors to protect the vehicle in flight.'],
    ['q' => 'How much does it cost to transport a bike via express cargo vs road transport?', 'a' => 'Express air freight cargo typically costs 3x to 5x higher than specialized road-based enclosed vehicle carriers. Road transport offers the most cost-effective solution for domestic Indian relocations.'],
    ['q' => 'Why choose Shree Ashirwad specialized enclosed road transport over courier air freight for domestic moves?', 'a' => 'Shree Ashirwad provides door-to-door enclosed road shipping with 7-layer wrapping at a fraction of air cargo costs, eliminating complex fuel purging and ISPM crating requirements.']
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
            EXPRESS CARGO &amp; AIR FREIGHT SPECIALISTS
          </span>
          <h1 style="font-size: 2.7rem; font-weight: 800; line-height: 1.2; margin-bottom: 20px; color: #ffffff;">
            Ultimate Guide to <span style="color: #f59e0b;">DHL Bike Transport</span>
          </h1>
          <p style="font-size: 1.12rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 25px;">
            Shipping a motorcycle or superbike via express courier services like DHL requires strict adherence to IATA Dangerous Goods (DG) regulations, custom ISPM-15 heat-treated crating, fuel tank purging, and international air waybill documentation. Understand the process behind air freight motorcycle shipping—or explore door-to-door enclosed road shipping alternatives.
          </p>

          <div style="display: flex; gap: 15px; flex-wrap: wrap; margin-bottom: 30px;">
            <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Express Shipping Expert" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
              <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call Shipping Expert: <?php echo SITE_PHONE; ?>
            </a>
            <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20information%20about%20express%20bike%20shipping." title="Chat on WhatsApp" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
              <i class="fab fa-whatsapp" style="margin-right: 8px;"></i> Chat on WhatsApp
            </a>
          </div>

          <div style="display: flex; gap: 20px; font-size: 0.9rem; color: #94a3b8;">
            <span><strong style="color: #f59e0b;">ISPM-15</strong> Wooden Crating</span>
            <span><strong style="color: #f59e0b;">IATA DG</strong> Compliant</span>
            <span><strong style="color: #f59e0b;">Door-to-Door</strong> Road Alternative</span>
          </div>
        </div>

        <!-- Hero Lead Form Column -->
        <div class="hero-form-card" style="background: rgba(255, 255, 255, 0.05); backdrop-filter: blur(10px); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 16px; padding: 30px; box-shadow: 0 15px 35px rgba(0,0,0,0.4);">
          <h2 style="font-size: 1.4rem; color: #ffffff; margin-bottom: 8px; font-weight: 700; text-align: center;">Get Express Bike Quote</h2>
          <p style="font-size: 0.85rem; color: #94a3b8; text-align: center; margin-bottom: 20px;">Receive transparent cost estimation on WhatsApp in 2 minutes</p>

          <form action="#" method="POST" onsubmit="sendHeroWhatsAppLead(event, this);">
            <div style="margin-bottom: 14px;">
              <input type="text" name="name" class="form-control" placeholder="Your Full Name" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="margin-bottom: 14px;">
              <input type="tel" name="phone" class="form-control" placeholder="10-Digit Phone Number" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 10px; margin-bottom: 14px;">
              <input type="text" name="move_from" class="form-control" placeholder="Pickup City" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
              <input type="text" name="move_to" class="form-control" placeholder="Destination City/Country" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
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
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">IATA DG</div>
          <div style="font-size: 0.9rem; color: #cbd5e1; margin-top: 5px;">Dangerous Goods Certified</div>
        </div>
        <div style="padding: 20px; background: rgba(23, 42, 84, 0.5); border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">ISPM-15</div>
          <div style="font-size: 0.9rem; color: #cbd5e1; margin-top: 5px;">Heat-Treated Crating</div>
        </div>
        <div style="padding: 20px; background: rgba(23, 42, 84, 0.5); border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">Volumetric</div>
          <div style="font-size: 0.9rem; color: #cbd5e1; margin-top: 5px;">Weight Rating System</div>
        </div>
        <div style="padding: 20px; background: rgba(23, 42, 84, 0.5); border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">7-Layer</div>
          <div style="font-size: 0.9rem; color: #cbd5e1; margin-top: 5px;">Road Fleet Alternative</div>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 3: 6 Pillars of Express Cargo & Air Freight Shipping -->
  <section style="padding: 70px 0; background: #0b132b; color: #e2e8f0; line-height: 1.8;">
    <div class="container">
      
      <div style="max-width: 950px; margin: 0 auto;">
        <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Air Freight Protocol</span>
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin: 10px 0 20px 0;">
          6 Pillars of <span style="color: #f59e0b;">Express Courier Bike Transport</span>
        </h2>

        <!-- 6 Cards Grid (3x2 Layout) -->
        <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px; margin: 30px 0;">
          
          <!-- Card 1 -->
          <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px; box-shadow: 0 10px 25px rgba(0,0,0,0.3);">
            <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;"><i class="fas fa-plane"></i></div>
            <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">1. Air Freight &amp; Express Cargo</h3>
            <p style="font-size: 0.9rem; color: #cbd5e1; line-height: 1.6; margin: 0;">
              Accelerated transit timelines (24-48 hours) for high-end superbikes and vintage motorcycles moving across long distances.
            </p>
          </div>

          <!-- Card 2 -->
          <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px; box-shadow: 0 10px 25px rgba(0,0,0,0.3);">
            <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;"><i class="fas fa-box"></i></div>
            <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">2. ISPM-15 Wooden Crating</h3>
            <p style="font-size: 0.9rem; color: #cbd5e1; line-height: 1.6; margin: 0;">
              Custom-built heat-treated plywood crates engineered specifically to vehicle dimensions with steel floor anchor points.
            </p>
          </div>

          <!-- Card 3 -->
          <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px; box-shadow: 0 10px 25px rgba(0,0,0,0.3);">
            <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;"><i class="fas fa-gas-pump"></i></div>
            <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">3. Fuel Purging &amp; Battery Disconnect</h3>
            <p style="font-size: 0.9vis; color: #cbd5e1; line-height: 1.6; margin: 0;">
              Total evacuation of fuel tanks and carburetors, plus battery terminal isolation to meet airport fire safety mandates.
            </p>
          </div>

          <!-- Card 4 -->
          <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px; box-shadow: 0 10px 25px rgba(0,0,0,0.3);">
            <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;"><i class="fas fa-file-invoice-dollar"></i></div>
            <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">4. Volumetric Weight Pricing</h3>
            <p style="font-size: 0.9rem; color: #cbd5e1; line-height: 1.6; margin: 0;">
              Air cargo charges calculated using (Length x Width x Height in cm) / 6000 compared against gross dead weight.
            </p>
          </div>

          <!-- Card 5 -->
          <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px; box-shadow: 0 10px 25px rgba(0,0,0,0.3);">
            <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;"><i class="fas fa-passport"></i></div>
            <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">5. Customs &amp; DG Declaration</h3>
            <p style="font-size: 0.9rem; color: #cbd5e1; line-height: 1.6; margin: 0;">
              Filing official Shipper's Declaration for Dangerous Goods and airport customs clearance documentation.
            </p>
          </div>

          <!-- Card 6 -->
          <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px; box-shadow: 0 10px 25px rgba(0,0,0,0.3);">
            <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;"><i class="fas fa-truck-monster"></i></div>
            <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">6. Cost-Effective Road Alternative</h3>
            <p style="font-size: 0.9rem; color: #cbd5e1; line-height: 1.6; margin: 0;">
              Save up to 70% by choosing Shree Ashirwad dedicated enclosed road transport with 7-layer bubble wrapping.
            </p>
          </div>

        </div>

      </div>

    </div>
  </section>

  <!-- Section 4: Cost Comparison Matrix -->
  <section style="padding: 70px 0; background: linear-gradient(180deg, #0b132b 0%, #16203b 100%); color: #ffffff;">
    <div class="container" style="max-width: 900px;">
      
      <div class="section-header text-center" style="margin-bottom: 45px;">
        <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Cost Evaluation</span>
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin-top: 10px;">
          Express Air Freight vs <span style="color: #f59e0b;">Dedicated Road Transport</span>
        </h2>
      </div>

      <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 24px;">
        
        <div style="background: #172a54; padding: 24px; border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.3);">
          <h3 style="font-size: 1.2rem; color: #f59e0b; font-weight: 700; margin-bottom: 12px;"><i class="fas fa-plane"></i> DHL Express Air Cargo</h3>
          <ul style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.8; padding-left: 18px; margin: 0;">
            <li>Transit Time: 24 – 48 Hours</li>
            <li>Cost: ₹15,000 – ₹45,000+ (High Volumetric Rate)</li>
            <li>Requires Complete Fuel Draining &amp; DG Clearance</li>
            <li>Mandatory ISPM-15 Heat-Treated Wooden Crate</li>
            <li>Strict Airport Cargo Hub Drop/Pickup</li>
          </ul>
        </div>

        <div style="background: #172a54; padding: 24px; border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.3);">
          <h3 style="font-size: 1.2rem; color: #f59e0b; font-weight: 700; margin-bottom: 12px;"><i class="fas fa-truck-moving"></i> Shree Ashirwad Enclosed Road Shipping</h3>
          <ul style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.8; padding-left: 18px; margin: 0;">
            <li>Transit Time: 3 – 5 Days</li>
            <li>Cost: ₹3,500 – ₹7,500 (Affordable &amp; Fixed)</li>
            <li>No Fuel Evacuation or Fuel Tank Purging Needed</li>
            <li>7-Layer Bubble &amp; Corrugated Foam Wrapping</li>
            <li>100% Doorstep Collection &amp; Doorstep Delivery</li>
          </ul>
        </div>

      </div>

    </div>
  </section>

  <!-- Section 5: Step-by-Step Shipping Protocol -->
  <section style="padding: 70px 0; background: #0b132b; color: #e2e8f0; border-top: 1px solid rgba(245, 158, 11, 0.15);">
    <div class="container" style="max-width: 900px;">
      
      <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Step-by-Step</span>
      <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin: 10px 0 20px 0;">
        5 Steps to Prepare a Motorcycle for Air Cargo Shipping
      </h2>

      <div style="display: grid; grid-template-columns: 1fr; gap: 16px; margin-top: 25px;">
        <div style="background: rgba(23, 42, 84, 0.6); padding: 20px 24px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #ffffff; font-size: 1.15rem; margin-bottom: 6px;">Step 1: Drain Fuel &amp; Isolate Fluids</h4>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0;">Evacuate petrol tank completely and run engine until dry to prevent dangerous vapor buildup inside cargo holds.</p>
        </div>
        <div style="background: rgba(23, 42, 84, 0.6); padding: 20px 24px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #ffffff; font-size: 1.15rem; margin-bottom: 6px;">Step 2: Disconnect &amp; Tape Battery Terminals</h4>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0;">Remove battery ground cable and wrap contacts in non-conductive electrical insulating tape.</p>
        </div>
        <div style="background: rgba(23, 42, 84, 0.6); padding: 20px 24px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #ffffff; font-size: 1.15rem; margin-bottom: 6px;">Step 3: Construct ISPM-15 Wooden Crate Base</h4>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0;">Secure motorcycle wheels into steel wheel chocks bolted to fumigated wooden crate baseboards.</p>
        </div>
        <div style="background: rgba(23, 42, 84, 0.6); padding: 20px 24px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #ffffff; font-size: 1.15rem; margin-bottom: 6px;">Step 4: Wrap Bodywork &amp; Seal Outer Plywood Panels</h4>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0;">Apply heavy bubble wrap to mirrors and fairings before screwing top and side plywood walls shut.</p>
        </div>
        <div style="background: rgba(23, 42, 84, 0.6); padding: 20px 24px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #ffffff; font-size: 1.15rem; margin-bottom: 6px;">Step 5: Attach Air Waybill (AWB) &amp; DG Decs</h4>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0;">Affix dangerous goods labels, barcode waybills, and customs declarations prior to airport drop-off.</p>
        </div>
      </div>

    </div>
  </section>

  <!-- Section 6: FAQ Section -->
  <section style="padding: 70px 0; background: #070d1e; color: #ffffff;">
    <div class="container" style="max-width: 900px;">
      
      <div class="section-header text-center" style="margin-bottom: 45px;">
        <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Express Cargo FAQs</span>
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin-top: 10px;">
          Frequently Asked Questions About <span style="color: #f59e0b;">DHL &amp; Express Bike Shipping</span>
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

  <!-- Section 7: CTA Banner -->
  <section style="padding: 70px 0; background: linear-gradient(135deg, #172a54 0%, #0b132b 100%); border-top: 1.5px solid rgba(245, 158, 11, 0.4); color: #ffffff;">
    <div class="container" style="max-width: 900px; text-align: center;">
      
      <span class="section-tag" style="background: rgba(245, 158, 11, 0.2); color: #f59e0b; padding: 6px 16px; border-radius: 20px; font-size: 0.85rem; font-weight: 700; text-transform: uppercase;">
        Affordable Doorstep Bike Shifting
      </span>

      <h2 style="font-size: 2.3rem; font-weight: 800; margin: 15px 0 15px 0; color: #ffffff;">
        Save Money with Dedicated Road Transport by <span style="color: #f59e0b;">Shree Ashirwad Packers</span>
      </h2>

      <p style="font-size: 1.05rem; color: #cbd5e1; max-width: 750px; margin: 0 auto 30px auto; line-height: 1.7;">
        Avoid expensive air cargo rates. Get 100% insured door-to-door motorcycle shipping with 7-layer wrapping across India.
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
  
  var message = "Hello Shree Ashirwad Packers & Movers,\n\nI would like to request an Express Bike Transport Quote:\n- Name: " + name + "\n- Phone: " + phone + "\n- Pickup City: " + moveFrom + "\n- Destination City: " + moveTo;
  
  var whatsappUrl = "https://api.whatsapp.com/send?phone=918409531615&text=" + encodeURIComponent(message);
  window.location.href = whatsappUrl;
}
</script>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
