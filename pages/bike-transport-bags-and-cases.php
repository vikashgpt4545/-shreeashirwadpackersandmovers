<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "Bike Transport Bags and Cases | Motorcycle Luggage Shipping Guide";
$page_desc = "Safe transport solutions for bike travel bags, hard cases, panniers, and riding gear across India. Complete door-to-door relocation coverage with 100% insured transport.";
$page_keywords = "bike transport bags and cases, motorcycle luggage transport, bike pannier shipping, riding gear transport, packers and movers bike transport";
$canonical_url = "https://shreeashirwadpackersandmovers.com/pages/bike-transport-bags-and-cases.php";

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
            MOTORCYCLE LUGGAGE & GEAR LOGISTICS SPECIALISTS
          </span>
          <h1 style="font-size: 2.7rem; font-weight: 800; line-height: 1.2; margin-bottom: 20px; color: #ffffff;">
            Professional <span style="color: #f59e0b;">Bike Transport Bags & Cases Shipping</span>
          </h1>
          <p style="font-size: 1.12rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 25px;">
            Transporting hard bike cases, soft travel bags, aluminum panniers, helmets, and riding gear alongside your motorcycle? Explore our specialized multi-layer box packing, secure strap anchoring, and door-to-door delivery services across India.
          </p>

          <div style="display: flex; gap: 15px; flex-wrap: wrap; margin-bottom: 30px;">
            <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Now" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
              <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call Now: <?php echo SITE_PHONE; ?>
            </a>
            <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20a%20bike%20bags%20and%20cases%20transport%20quote." title="Chat on WhatsApp" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
              <i class="fab fa-whatsapp" style="margin-right: 8px;"></i> Chat on WhatsApp
            </a>
          </div>

          <div style="display: flex; gap: 20px; font-size: 0.9rem; color: #94a3b8;">
            <span><strong style="color: #f59e0b;">100% Insured</strong> Luggage</span>
            <span><strong style="color: #f59e0b;">Multi-Layer</strong> Box Protection</span>
            <span><strong style="color: #f59e0b;">Door-to-Door</strong> Express Pickup</span>
          </div>
        </div>

        <!-- Hero Lead Form Column -->
        <div class="hero-form-card" style="background: rgba(255, 255, 255, 0.05); backdrop-filter: blur(10px); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 16px; padding: 30px; box-shadow: 0 15px 35px rgba(0,0,0,0.4);">
          <h2 style="font-size: 1.4rem; color: #ffffff; margin-bottom: 8px; font-weight: 700; text-align: center;">Get Bike Bags & Cases Quote</h2>
          <p style="font-size: 0.85rem; color: #94a3b8; text-align: center; margin-bottom: 20px;">Receive transparent cost estimation on WhatsApp in 2 minutes</p>

          <form action="#" method="POST" onsubmit="sendHeroWhatsAppLead(event, this);">
            <div style="margin-bottom: 14px;">
              <input type="text" name="name" class="form-control" placeholder="Your Full Name" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="margin-bottom: 14px;">
              <input type="tel" name="phone" class="form-control" placeholder="10-Digit Phone Number" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 10px; margin-bottom: 14px;">
              <input type="text" name="move_from" class="form-control" placeholder="Pickup Location" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
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

  <!-- Section 2: Key Operational Metrics -->
  <section style="padding: 45px 0; background: #1c2541; border-top: 1px solid rgba(255,255,255,0.05); border-bottom: 1px solid rgba(255,255,255,0.05);">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 25px; text-align: center;">
        
        <div style="padding: 20px; background: rgba(255,255,255,0.03); border-radius: 12px; border: 1px solid rgba(255,255,255,0.08);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; margin-bottom: 5px;">Panniers & Cases</div>
          <div style="font-size: 0.9rem; color: #94a3b8;">Custom Protection</div>
        </div>

        <div style="padding: 20px; background: rgba(255,255,255,0.03); border-radius: 12px; border: 1px solid rgba(255,255,255,0.08);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; margin-bottom: 5px;">Riding Gear</div>
          <div style="font-size: 0.9rem; color: #94a3b8;">Helmets & Jackets Pack</div>
        </div>

        <div style="padding: 20px; background: rgba(255,255,255,0.03); border-radius: 12px; border: 1px solid rgba(255,255,255,0.08);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; margin-bottom: 5px;">7-Layer</div>
          <div style="font-size: 0.9rem; color: #94a3b8;">Heavy Duty Wrapping</div>
        </div>

        <div style="padding: 20px; background: rgba(255,255,255,0.03); border-radius: 12px; border: 1px solid rgba(255,255,255,0.08);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; margin-bottom: 5px;">100%</div>
          <div style="font-size: 0.9rem; color: #94a3b8;">All-Risk Cover</div>
        </div>

      </div>
    </div>
  </section>

  <!-- Section 3: Cost Matrix -->
  <section style="padding: 60px 0; background: #0b132b;">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
      
      <div style="text-align: center; margin-bottom: 40px;">
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin-bottom: 12px;">
          Estimated Bike Luggage & Case Transport Rates
        </h2>
        <p style="color: #94a3b8; font-size: 1rem; max-width: 700px; margin: 0 auto;">
          Affordable pricing for shipping motorcycle bags, hard cases, and riding gear alongside your bike.
        </p>
      </div>

      <div style="overflow-x: auto; background: #1c2541; border-radius: 14px; border: 1px solid rgba(255,255,255,0.1); padding: 10px;">
        <table style="width: 100%; border-collapse: collapse; text-align: left; font-size: 0.95rem; color: #e2e8f0;">
          <thead>
            <tr style="background: rgba(245, 158, 11, 0.15); border-bottom: 2px solid rgba(245, 158, 11, 0.3);">
              <th style="padding: 16px; color: #f59e0b; font-weight: 700;">Item Category</th>
              <th style="padding: 16px; color: #f59e0b; font-weight: 700;">Packaging Type</th>
              <th style="padding: 16px; color: #f59e0b; font-weight: 700;">Local Transit Rate</th>
              <th style="padding: 16px; color: #f59e0b; font-weight: 700;">Intercity Highway Rate</th>
            </tr>
          </thead>
          <tbody>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.05);">
              <td style="padding: 16px; font-weight: 600;">Soft Saddlebags & Tank Bags</td>
              <td style="padding: 16px;">Poly-Wrap + Cardboard Carton</td>
              <td style="padding: 16px; color: #f59e0b; font-weight: 700;">₹450 - ₹800</td>
              <td style="padding: 16px; color: #f59e0b; font-weight: 700;">₹1,200 - ₹1,800</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.05); background: rgba(255,255,255,0.02);">
              <td style="padding: 16px; font-weight: 600;">Aluminum Top Box & Side Panniers</td>
              <td style="padding: 16px;">Bubble Wrap + Foam Corner Guards</td>
              <td style="padding: 16px; color: #f59e0b; font-weight: 700;">₹800 - ₹1,400</td>
              <td style="padding: 16px; color: #f59e0b; font-weight: 700;">₹1,800 - ₹2,800</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.05);">
              <td style="padding: 16px; font-weight: 600;">Full Riding Kit (Helmet, Jacket, Boots)</td>
              <td style="padding: 16px;">7-Layer Moisture Proof Carton</td>
              <td style="padding: 16px; color: #f59e0b; font-weight: 700;">₹600 - ₹1,100</td>
              <td style="padding: 16px; color: #f59e0b; font-weight: 700;">₹1,500 - ₹2,200</td>
            </tr>
            <tr>
              <td style="padding: 16px; font-weight: 600;">Bicycle Travel Flight Case</td>
              <td style="padding: 16px;">Custom Outer Wooden Crate</td>
              <td style="padding: 16px; color: #f59e0b; font-weight: 700;">₹1,200 - ₹2,200</td>
              <td style="padding: 16px; color: #f59e0b; font-weight: 700;">₹3,000 - ₹4,800</td>
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
          Key Advantages of Shipping Bike Bags & Cases with Us
        </h2>
        <p style="color: #94a3b8; font-size: 1rem; max-width: 700px; margin: 0 auto;">
          Specialized handling for high-value motorcycle accessories and riding gear.
        </p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 30px;">
        
        <div style="background: rgba(255,255,255,0.03); border-radius: 12px; padding: 30px; border: 1px solid rgba(255,255,255,0.08);">
          <div style="width: 50px; height: 50px; border-radius: 10px; background: rgba(245, 158, 11, 0.15); color: #f59e0b; display: flex; align-items: center; justify-content: center; font-size: 1.4rem; margin-bottom: 20px;">
            <i class="fas fa-archive"></i>
          </div>
          <h3 style="font-size: 1.25rem; font-weight: 700; color: #ffffff; margin-bottom: 12px;">Pannier & Top Box Protection</h3>
          <p style="color: #94a3b8; font-size: 0.95rem; line-height: 1.7;">
            Aluminum and plastic panniers are unmounted, bubble-wrapped, and packed in heavy corrugated boxes to avoid denting locks and hinges.
          </p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border-radius: 12px; padding: 30px; border: 1px solid rgba(255,255,255,0.08);">
          <div style="width: 50px; height: 50px; border-radius: 10px; background: rgba(245, 158, 11, 0.15); color: #f59e0b; display: flex; align-items: center; justify-content: center; font-size: 1.4rem; margin-bottom: 20px;">
            <i class="fas fa-hard-hat"></i>
          </div>
          <h3 style="font-size: 1.25rem; font-weight: 700; color: #ffffff; margin-bottom: 12px;">Helmet & Visor Safe-Pack</h3>
          <p style="color: #94a3b8; font-size: 0.95rem; line-height: 1.7;">
            Riding helmets are encased in fleece bags and double bubble wrap to protect visors and Bluetooth intercom units from scratches.
          </p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border-radius: 12px; padding: 30px; border: 1px solid rgba(255,255,255,0.08);">
          <div style="width: 50px; height: 50px; border-radius: 10px; background: rgba(245, 158, 11, 0.15); color: #f59e0b; display: flex; align-items: center; justify-content: center; font-size: 1.4rem; margin-bottom: 20px;">
            <i class="fas fa-water"></i>
          </div>
          <h3 style="font-size: 1.25rem; font-weight: 700; color: #ffffff; margin-bottom: 12px;">Moisture-Proof Sealing</h3>
          <p style="color: #94a3b8; font-size: 0.95rem; line-height: 1.7;">
            Heavy stretch film outer wrapping keeps leather jackets, riding pants, and boots completely dry during rainy transit.
          </p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border-radius: 12px; padding: 30px; border: 1px solid rgba(255,255,255,0.08);">
          <div style="width: 50px; height: 50px; border-radius: 10px; background: rgba(245, 158, 11, 0.15); color: #f59e0b; display: flex; align-items: center; justify-content: center; font-size: 1.4rem; margin-bottom: 20px;">
            <i class="fas fa-truck-moving"></i>
          </div>
          <h3 style="font-size: 1.25rem; font-weight: 700; color: #ffffff; margin-bottom: 12px;">Consolidated Vehicle Freight</h3>
          <p style="color: #94a3b8; font-size: 0.95rem; line-height: 1.7;">
            Bags and cases travel inside the same container truck alongside your motorcycle for synchronous delivery.
          </p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border-radius: 12px; padding: 30px; border: 1px solid rgba(255,255,255,0.08);">
          <div style="width: 50px; height: 50px; border-radius: 10px; background: rgba(245, 158, 11, 0.15); color: #f59e0b; display: flex; align-items: center; justify-content: center; font-size: 1.4rem; margin-bottom: 20px;">
            <i class="fas fa-shield-alt"></i>
          </div>
          <h3 style="font-size: 1.25rem; font-weight: 700; color: #ffffff; margin-bottom: 12px;">All-Risk Insurance</h3>
          <p style="color: #94a3b8; font-size: 0.95rem; line-height: 1.7;">
            Declared gear values are covered against theft, transit fire, or accidental damage with official insurance documentation.
          </p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border-radius: 12px; padding: 30px; border: 1px solid rgba(255,255,255,0.08);">
          <div style="width: 50px; height: 50px; border-radius: 10px; background: rgba(245, 158, 11, 0.15); color: #f59e0b; display: flex; align-items: center; justify-content: center; font-size: 1.4rem; margin-bottom: 20px;">
            <i class="fas fa-map-marked-alt"></i>
          </div>
          <h3 style="font-size: 1.25rem; font-weight: 700; color: #ffffff; margin-bottom: 12px;">Doorstep Handover</h3>
          <p style="color: #94a3b8; font-size: 0.95rem; line-height: 1.7;">
            We collect, catalog, and deliver all luggage boxes directly to your home address across India.
          </p>
        </div>

      </div>
    </div>
  </section>

  <!-- Section 5: Packaging Standard -->
  <section style="padding: 60px 0; background: #0b132b;">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
      
      <div style="text-align: center; margin-bottom: 45px;">
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin-bottom: 12px;">
          7-Layer Packaging Protocol for Bags & Cases
        </h2>
        <p style="color: #94a3b8; font-size: 1rem; max-width: 700px; margin: 0 auto;">
          How we safeguard expensive motorcycle travel bags and hard luggage cases.
        </p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 20px;">
        
        <div style="background: #1c2541; padding: 25px; border-radius: 12px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #ffffff; font-size: 1.1rem; font-weight: 700; margin-bottom: 8px;">Step 1: Item Inventorying</h4>
          <p style="color: #94a3b8; font-size: 0.9rem; margin: 0;">Cataloging all bags, pannier keys, and riding gear items in the consignment sheet.</p>
        </div>

        <div style="background: #1c2541; padding: 25px; border-radius: 12px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #ffffff; font-size: 1.1rem; font-weight: 700; margin-bottom: 8px;">Step 2: Soft Inner Lining</h4>
          <p style="color: #94a3b8; font-size: 0.9rem; margin: 0;">Wrapping visors and metallic latches in soft protective foam sheets.</p>
        </div>

        <div style="background: #1c2541; padding: 25px; border-radius: 12px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #ffffff; font-size: 1.1rem; font-weight: 700; margin-bottom: 8px;">Step 3: Bubble Wrap Shield</h4>
          <p style="color: #94a3b8; font-size: 0.9rem; margin: 0;">80 GSM shock-absorbing bubble film wrapped around all panniers and hard cases.</p>
        </div>

        <div style="background: #1c2541; padding: 25px; border-radius: 12px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #ffffff; font-size: 1.1rem; font-weight: 700; margin-bottom: 8px;">Step 4: Heavy Corrugated Box</h4>
          <p style="color: #94a3b8; font-size: 0.9rem; margin: 0;">Placing wrapped bags inside 5-ply or 7-ply heavy cardboard shipping cartons.</p>
        </div>

        <div style="background: #1c2541; padding: 25px; border-radius: 12px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #ffffff; font-size: 1.1rem; font-weight: 700; margin-bottom: 8px;">Step 5: Waterproof Stretch Wrap</h4>
          <p style="color: #94a3b8; font-size: 0.9rem; margin: 0;">High-grade plastic film sealing to prevent water ingress or dust accumulation.</p>
        </div>

        <div style="background: #1c2541; padding: 25px; border-radius: 12px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #ffffff; font-size: 1.1rem; font-weight: 700; margin-bottom: 8px;">Step 6: Security Labeling</h4>
          <p style="color: #94a3b8; font-size: 0.9rem; margin: 0;">Barcode tags and fragile stickers applied to guarantee careful handling by loaders.</p>
        </div>

      </div>
    </div>
  </section>

  <!-- Section 6: Documents & GST Compliance -->
  <section style="padding: 60px 0; background: #1c2541;">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
      
      <div style="text-align: center; margin-bottom: 45px;">
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin-bottom: 12px;">
          IBA Approved GST Billing & Documentation
        </h2>
        <p style="color: #94a3b8; font-size: 1rem; max-width: 700px; margin: 0 auto;">
          Official paperwork for seamless claim settlement and company relocation billing.
        </p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 25px;">
        <div style="background: rgba(255,255,255,0.03); padding: 25px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.08);">
          <h3 style="font-size: 1.15rem; color: #f59e0b; font-weight: 700; margin-bottom: 10px;">Luggage Pickup Checklist</h3>
          <ul style="color: #cbd5e1; font-size: 0.9rem; line-height: 1.8; padding-left: 20px; margin: 0;">
            <li>Consignment Luggage Inventory List</li>
            <li>Sender & Receiver Government ID Proof</li>
            <li>Declared Value Assessment Sheet</li>
            <li>Transit Insurance Policy Slip</li>
          </ul>
        </div>

        <div style="background: rgba(255,255,255,0.03); padding: 25px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.08);">
          <h3 style="font-size: 1.15rem; color: #f59e0b; font-weight: 700; margin-bottom: 10px;">Official GST Invoice Pack</h3>
          <ul style="color: #cbd5e1; font-size: 0.9rem; line-height: 1.8; padding-left: 20px; margin: 0;">
            <li>IBA Approved Consignment Note (LR Copy)</li>
            <li>Itemized 18% GST Invoice</li>
            <li>Official Payment Receipt with Stamp</li>
            <li>Delivery Inspection Receipt</li>
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
          Frequently Asked Questions (Bike Bags & Cases Transport)
        </h2>
        <p style="color: #94a3b8; font-size: 1rem; max-width: 700px; margin: 0 auto;">
          Common questions regarding motorcycle luggage and riding gear transport.
        </p>
      </div>

      <div style="max-width: 900px; margin: 0 auto; display: grid; gap: 15px;">
        
        <div style="background: #1c2541; padding: 20px 25px; border-radius: 10px; border: 1px solid rgba(255,255,255,0.05);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Should panniers be unmounted from the bike before transport?</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.6; margin: 0;">
            Yes. We strongly recommend unmounting hard aluminum or plastic panniers and packing them separately in corrugated boxes to avoid strain on bike mounts during truck movement.
          </p>
        </div>

        <div style="background: #1c2541; padding: 20px 25px; border-radius: 10px; border: 1px solid rgba(255,255,255,0.05);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Can I pack riding gear inside my soft saddlebags?</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.6; margin: 0;">
            Yes, soft gear like jackets, gloves, and knee guards can remain inside saddlebags. We will shrink-wrap the entire bag in protective stretch film before loading.
          </p>
        </div>

        <div style="background: #1c2541; padding: 20px 25px; border-radius: 10px; border: 1px solid rgba(255,255,255,0.05);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Are helmets covered under transit insurance?</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.6; margin: 0;">
            Yes, when declared on the inventory list and properly packed by our team, helmets and riding gear are covered under our all-risk transit policy.
          </p>
        </div>

        <div style="background: #1c2541; padding: 20px 25px; border-radius: 10px; border: 1px solid rgba(255,255,255,0.05);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Do bike bags and cases arrive together with the bike?</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.6; margin: 0;">
            Yes, all accessories and gear booked under the same consignment note travel in the same container truck for simultaneous door-to-door delivery.
          </p>
        </div>

        <div style="background: #1c2541; padding: 20px 25px; border-radius: 10px; border: 1px solid rgba(255,255,255,0.05);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">How are pannier keys managed?</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.6; margin: 0;">
            Pannier keys are placed in a barcode-sealed key pouch along with the motorcycle key, ensuring zero risk of key loss during transit.
          </p>
        </div>

      </div>

    </div>
  </section>

  <!-- Section 8: CTA Conversion Footer -->
  <section style="padding: 50px 0; background: linear-gradient(135deg, #1c2541 0%, #0b132b 100%); text-align: center; border-top: 1px solid rgba(245, 158, 11, 0.2);">
    <div class="container" style="max-width: 900px; margin: 0 auto; padding: 0 20px;">
      <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin-bottom: 15px;">
        Book Bike Bags & Luggage Transport Today
      </h2>
      <p style="font-size: 1.05rem; color: #cbd5e1; margin-bottom: 30px;">
        Get transparent estimates, 7-layer box packaging, and safe door-to-door delivery.
      </p>

      <div style="display: flex; gap: 15px; justify-content: center; flex-wrap: wrap;">
        <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Representative" style="padding: 15px 35px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
          <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call <?php echo SITE_PHONE; ?>
        </a>
        <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20to%20book%20bike%20bags%20and%20cases%20transport." title="WhatsApp Booking" target="_blank" style="padding: 15px 35px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
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
      "name": "Should panniers be unmounted from the bike before transport?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes. We strongly recommend unmounting hard aluminum or plastic panniers and packing them separately in corrugated boxes to avoid strain on bike mounts during truck movement."
      }
    },
    {
      "@type": "Question",
      "name": "Can I pack riding gear inside my soft saddlebags?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, soft gear like jackets, gloves, and knee guards can remain inside saddlebags. We will shrink-wrap the entire bag in protective stretch film before loading."
      }
    },
    {
      "@type": "Question",
      "name": "Are helmets covered under transit insurance?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, when declared on the inventory list and properly packed by our team, helmets and riding gear are covered under our all-risk transit policy."
      }
    },
    {
      "@type": "Question",
      "name": "Do bike bags and cases arrive together with the bike?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, all accessories and gear booked under the same consignment note travel in the same container truck for simultaneous door-to-door delivery."
      }
    },
    {
      "@type": "Question",
      "name": "How are pannier keys managed?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Pannier keys are placed in a barcode-sealed key pouch along with the motorcycle key, ensuring zero risk of key loss during transit."
      }
    }
  ]
}
</script>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
