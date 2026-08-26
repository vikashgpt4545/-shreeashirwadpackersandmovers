<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "Bike Transport for Defence Personnel | Military Discount & IBA Billing";
$page_desc = "Dedicated bike transport for Indian Armed Forces, Army, Navy & Air Force personnel. Cantonment doorstep pickup, 100% IBA-approved GST bills for official claims, and 7-layer bubble wrapping.";
$page_keywords = "bike transport for defence personnel, military bike relocation discount, army bike transport IBA bill, armed forces motorcycle shipping, cantonment bike packers movers";
$canonical_url = "https://shreeashirwadpackersandmovers.com/pages/bike-transport-for-defence-personnel.php";

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
            SPECIAL DEFENCE & MILITARY RELOCATION SERVICES
          </span>
          <h1 style="font-size: 2.7rem; font-weight: 800; line-height: 1.2; margin-bottom: 20px; color: #ffffff;">
            Honored <span style="color: #f59e0b;">Bike Transport for Defence Personnel</span>
          </h1>
          <p style="font-size: 1.12rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 25px;">
            Serving those who serve the nation. Specialized motorcycle relocation for Army, Navy, Air Force, and Paramilitary personnel featuring direct Cantonment door pickup, 100% IBA-approved bills for government claim reimbursement, and 7-layer bubble wrapping with Shree Ashirwad Packers.
          </p>

          <div style="display: flex; gap: 15px; flex-wrap: wrap; margin-bottom: 30px;">
            <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Now" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
              <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call Now: <?php echo SITE_PHONE; ?>
            </a>
            <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20am%20from%20defence%20forces%20and%20want%20a%20bike%20transport%20quote." title="Chat on WhatsApp" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
              <i class="fab fa-whatsapp" style="margin-right: 8px;"></i> Chat on WhatsApp
            </a>
          </div>

          <div style="display: flex; gap: 20px; font-size: 0.9rem; color: #94a3b8;">
            <span><strong style="color: #f59e0b;">Special</strong> Military Concession</span>
            <span><strong style="color: #f59e0b;">IBA Approved</strong> Official Bills</span>
            <span><strong style="color: #f59e0b;">Cantonment</strong> Direct Pickup</span>
          </div>
        </div>

        <!-- Hero Lead Form Column -->
        <div class="hero-form-card" style="background: rgba(255, 255, 255, 0.05); backdrop-filter: blur(10px); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 16px; padding: 30px; box-shadow: 0 15px 35px rgba(0,0,0,0.4);">
          <h2 style="font-size: 1.4rem; color: #ffffff; margin-bottom: 8px; font-weight: 700; text-align: center;">Get Defence Concession Quote</h2>
          <p style="font-size: 0.85rem; color: #94a3b8; text-align: center; margin-bottom: 20px;">Receive official IBA rate estimation on WhatsApp in 2 minutes</p>

          <form action="#" method="POST" onsubmit="sendHeroWhatsAppLead(event, this);">
            <div style="margin-bottom: 14px;">
              <input type="text" name="name" class="form-control" placeholder="Rank & Full Name" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="margin-bottom: 14px;">
              <input type="tel" name="phone" class="form-control" placeholder="10-Digit Phone Number" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 10px; margin-bottom: 14px;">
              <input type="text" name="move_from" class="form-control" placeholder="Current Cantonment / City" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
              <input type="text" name="move_to" class="form-control" placeholder="Posting Destination" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <button type="submit" style="width: 100%; padding: 14px; background: linear-gradient(135deg, #d32f2f 0%, #f59e0b 100%); color: #ffffff; border: none; border-radius: 50px; font-weight: 700; font-size: 1rem; cursor: pointer;">
              Get Defence Estimate Now &rarr;
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
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; margin-bottom: 5px;">IBA Approved</div>
          <div style="font-size: 0.9rem; color: #94a3b8;">100% Government Claim Bills</div>
        </div>

        <div style="padding: 20px; background: rgba(255,255,255,0.03); border-radius: 12px; border: 1px solid rgba(255,255,255,0.08);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; margin-bottom: 5px;">Cantonment Access</div>
          <div style="font-size: 0.9rem; color: #94a3b8;">Military Base Door Pickup</div>
        </div>

        <div style="padding: 20px; background: rgba(255,255,255,0.03); border-radius: 12px; border: 1px solid rgba(255,255,255,0.08);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; margin-bottom: 5px;">7-Layer</div>
          <div style="font-size: 0.9rem; color: #94a3b8;">Bubble & Cardboard Wrapping</div>
        </div>

        <div style="padding: 20px; background: rgba(255,255,255,0.03); border-radius: 12px; border: 1px solid rgba(255,255,255,0.08);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; margin-bottom: 5px;">100%</div>
          <div style="font-size: 0.9rem; color: #94a3b8;">Transit Insurance Coverage</div>
        </div>

      </div>
    </div>
  </section>

  <!-- Section 3: Cost Rate Matrix for Defence -->
  <section style="padding: 60px 0; background: #0b132b;">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
      
      <div style="text-align: center; margin-bottom: 40px;">
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin-bottom: 12px;">
          Defence Personnel Bike Transport Special Rate Structure
        </h2>
        <p style="color: #94a3b8; font-size: 1rem; max-width: 700px; margin: 0 auto;">
          Discounted rates aligned with government transfer allowances and IBA guidelines.
        </p>
      </div>

      <div style="overflow-x: auto; background: #1c2541; border-radius: 14px; border: 1px solid rgba(255,255,255,0.1); padding: 10px;">
        <table style="width: 100%; border-collapse: collapse; text-align: left; font-size: 0.95rem; color: #e2e8f0;">
          <thead>
            <tr style="background: rgba(245, 158, 11, 0.15); border-bottom: 2px solid rgba(245, 158, 11, 0.3);">
              <th style="padding: 16px; color: #f59e0b; font-weight: 700;">Distance Range</th>
              <th style="padding: 16px; color: #f59e0b; font-weight: 700;">Scooter (&lt;125cc)</th>
              <th style="padding: 16px; color: #f59e0b; font-weight: 700;">Standard Bike (150-200cc)</th>
              <th style="padding: 16px; color: #f59e0b; font-weight: 700;">Bullet / Royal Enfield (350cc+)</th>
            </tr>
          </thead>
          <tbody>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.05);">
              <td style="padding: 16px; font-weight: 600;">300 km - 700 km</td>
              <td style="padding: 16px; color: #f59e0b; font-weight: 700;">₹2,200 - ₹3,200</td>
              <td style="padding: 16px; color: #f59e0b; font-weight: 700;">₹3,000 - ₹4,000</td>
              <td style="padding: 16px; color: #f59e0b; font-weight: 700;">₹4,000 - ₹5,200</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.05); background: rgba(255,255,255,0.02);">
              <td style="padding: 16px; font-weight: 600;">700 km - 1,400 km</td>
              <td style="padding: 16px; color: #f59e0b; font-weight: 700;">₹3,200 - ₹4,500</td>
              <td style="padding: 16px; color: #f59e0b; font-weight: 700;">₹4,000 - ₹5,500</td>
              <td style="padding: 16px; color: #f59e0b; font-weight: 700;">₹5,500 - ₹7,200</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.05);">
              <td style="padding: 16px; font-weight: 600;">1,400 km - 2,200 km</td>
              <td style="padding: 16px; color: #f59e0b; font-weight: 700;">₹4,500 - ₹6,200</td>
              <td style="padding: 16px; color: #f59e0b; font-weight: 700;">₹5,500 - ₹7,200</td>
              <td style="padding: 16px; color: #f59e0b; font-weight: 700;">₹7,200 - ₹9,200</td>
            </tr>
            <tr>
              <td style="padding: 16px; font-weight: 600;">Above 2,200 km</td>
              <td style="padding: 16px; color: #f59e0b; font-weight: 700;">₹6,200 - ₹8,500</td>
              <td style="padding: 16px; color: #f59e0b; font-weight: 700;">₹7,200 - ₹9,500</td>
              <td style="padding: 16px; color: #f59e0b; font-weight: 700;">₹9,200 - ₹12,200</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </section>

  <!-- Section 4: Key Service Advantages -->
  <section style="padding: 60px 0; background: #1c2541;">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
      
      <div style="text-align: center; margin-bottom: 45px;">
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin-bottom: 12px;">
          Key Services for Armed Forces Relocations
        </h2>
        <p style="color: #94a3b8; font-size: 1rem; max-width: 700px; margin: 0 auto;">
          Tailored features engineered to meet military posting transfer standards.
        </p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 30px;">
        
        <div style="background: rgba(255,255,255,0.03); border-radius: 12px; padding: 30px; border: 1px solid rgba(255,255,255,0.08);">
          <div style="width: 50px; height: 50px; border-radius: 10px; background: rgba(245, 158, 11, 0.15); color: #f59e0b; display: flex; align-items: center; justify-content: center; font-size: 1.4rem; margin-bottom: 20px;">
            <i class="fas fa-file-invoice-dollar"></i>
          </div>
          <h3 style="font-size: 1.25rem; font-weight: 700; color: #ffffff; margin-bottom: 12px;">100% IBA Approved Bills</h3>
          <p style="color: #94a3b8; font-size: 0.95rem; line-height: 1.7;">
            Fully compliant Indian Banks' Association (IBA) invoices and consignment notes accepted for government claim reimbursement.
          </p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border-radius: 12px; padding: 30px; border: 1px solid rgba(255,255,255,0.08);">
          <div style="width: 50px; height: 50px; border-radius: 10px; background: rgba(245, 158, 11, 0.15); color: #f59e0b; display: flex; align-items: center; justify-content: center; font-size: 1.4rem; margin-bottom: 20px;">
            <i class="fas fa-shield-alt"></i>
          </div>
          <h3 style="font-size: 1.25rem; font-weight: 700; color: #ffffff; margin-bottom: 12px;">Cantonment Doorstep Access</h3>
          <p style="color: #94a3b8; font-size: 0.95rem; line-height: 1.7;">
            Our vehicles have verified driver credentials for smooth entry into military stations, Air Force bases, and naval quarters.
          </p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border-radius: 12px; padding: 30px; border: 1px solid rgba(255,255,255,0.08);">
          <div style="width: 50px; height: 50px; border-radius: 10px; background: rgba(245, 158, 11, 0.15); color: #f59e0b; display: flex; align-items: center; justify-content: center; font-size: 1.4rem; margin-bottom: 20px;">
            <i class="fas fa-percentage"></i>
          </div>
          <h3 style="font-size: 1.25rem; font-weight: 700; color: #ffffff; margin-bottom: 12px;">Armed Forces Concession Rate</h3>
          <p style="color: #94a3b8; font-size: 0.95rem; line-height: 1.7;">
            Exclusive discounted pricing for active duty and retired defence personnel on presentation of military ID.
          </p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border-radius: 12px; padding: 30px; border: 1px solid rgba(255,255,255,0.08);">
          <div style="width: 50px; height: 50px; border-radius: 10px; background: rgba(245, 158, 11, 0.15); color: #f59e0b; display: flex; align-items: center; justify-content: center; font-size: 1.4rem; margin-bottom: 20px;">
            <i class="fas fa-box"></i>
          </div>
          <h3 style="font-size: 1.25rem; font-weight: 700; color: #ffffff; margin-bottom: 12px;">7-Layer Weatherproof Wrap</h3>
          <p style="color: #94a3b8; font-size: 0.95rem; line-height: 1.7;">
            Heavy foam wrapping, 80 GSM bubble film, corrugated fiberboard, and waterproof stretch wrap shield your bike.
          </p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border-radius: 12px; padding: 30px; border: 1px solid rgba(255,255,255,0.08);">
          <div style="width: 50px; height: 50px; border-radius: 10px; background: rgba(245, 158, 11, 0.15); color: #f59e0b; display: flex; align-items: center; justify-content: center; font-size: 1.4rem; margin-bottom: 20px;">
            <i class="fas fa-umbrella"></i>
          </div>
          <h3 style="font-size: 1.25rem; font-weight: 700; color: #ffffff; margin-bottom: 12px;">Full Value Transit Insurance</h3>
          <p style="color: #94a3b8; font-size: 0.95rem; line-height: 1.7;">
            Complete peace of mind with 100% all-risk transit insurance covering declared market value during interstate movement.
          </p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border-radius: 12px; padding: 30px; border: 1px solid rgba(255,255,255,0.08);">
          <div style="width: 50px; height: 50px; border-radius: 10px; background: rgba(245, 158, 11, 0.15); color: #f59e0b; display: flex; align-items: center; justify-content: center; font-size: 1.4rem; margin-bottom: 20px;">
            <i class="fas fa-calendar-check"></i>
          </div>
          <h3 style="font-size: 1.25rem; font-weight: 700; color: #ffffff; margin-bottom: 12px;">Posting Date Flexibility</h3>
          <p style="color: #94a3b8; font-size: 0.95rem; line-height: 1.7;">
            Flexible dispatch schedules aligned with official movement orders and transfer joining dates across India.
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
          7-Layer Military Standard Packaging
        </h2>
        <p style="color: #94a3b8; font-size: 1rem; max-width: 700px; margin: 0 auto;">
          Rigorous protective sequence executed before loading into closed container trucks.
        </p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 20px;">
        
        <div style="background: #1c2541; padding: 25px; border-radius: 12px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #ffffff; font-size: 1.1rem; font-weight: 700; margin-bottom: 8px;">Step 1: Joint Inspection Log</h4>
          <p style="color: #94a3b8; font-size: 0.9rem; margin: 0;">Photographic logging of paint condition, mirrors, and kilometer reading.</p>
        </div>

        <div style="background: #1c2541; padding: 25px; border-radius: 12px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #ffffff; font-size: 1.1rem; font-weight: 700; margin-bottom: 8px;">Step 2: Non-Scratch Inner Foam Wrap</h4>
          <p style="color: #94a3b8; font-size: 0.9rem; margin: 0;">Direct foam wrap over fuel tank lacquer, speedometer glass, and side cowls.</p>
        </div>

        <div style="background: #1c2541; padding: 25px; border-radius: 12px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #ffffff; font-size: 1.1rem; font-weight: 700; margin-bottom: 8px;">Step 3: 80 GSM Heavy Bubble Shield</h4>
          <p style="color: #94a3b8; font-size: 0.9rem; margin: 0;">Thick bubble film layer protecting silencer, engine crash guard, and front mudguard.</p>
        </div>

        <div style="background: #1c2541; padding: 25px; border-radius: 12px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #ffffff; font-size: 1.1rem; font-weight: 700; margin-bottom: 8px;">Step 4: Corrugated Box Cushioning</h4>
          <p style="color: #94a3b8; font-size: 0.9rem; margin: 0;">Molded cardboard cardboard shields fitted over turn indicators and tail lights.</p>
        </div>

        <div style="background: #1c2541; padding: 25px; border-radius: 12px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #ffffff; font-size: 1.1rem; font-weight: 700; margin-bottom: 8px;">Step 5: High-Tension Stretch Film</h4>
          <p style="color: #94a3b8; font-size: 0.9rem; margin: 0;">Outer stretch wrapping sealing all layers against moisture, dust, and rain.</p>
        </div>

        <div style="background: #1c2541; padding: 25px; border-radius: 12px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #ffffff; font-size: 1.1rem; font-weight: 700; margin-bottom: 8px;">Step 6: Wheel Locking Ratchet Straps</h4>
          <p style="color: #94a3b8; font-size: 0.9rem; margin: 0;">Locking bike wheels firmly to container floor mounts with industrial nylon belts.</p>
        </div>

      </div>
    </div>
  </section>

  <!-- Section 6: Documents & Defence Billing -->
  <section style="padding: 60px 0; background: #1c2541;">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
      
      <div style="text-align: center; margin-bottom: 45px;">
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin-bottom: 12px;">
          IBA Approved Billing & Required Documents
        </h2>
        <p style="color: #94a3b8; font-size: 1rem; max-width: 700px; margin: 0 auto;">
          Checklist of essential paperwork for government transfer claim submission.
        </p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 25px;">
        <div style="background: rgba(255,255,255,0.03); padding: 25px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.08);">
          <h3 style="font-size: 1.15rem; color: #f59e0b; font-weight: 700; margin-bottom: 10px;">Mandatory Verification Papers</h3>
          <ul style="color: #cbd5e1; font-size: 0.9rem; line-height: 1.8; padding-left: 20px; margin: 0;">
            <li>Service ID / Canteen Smart Card Copy</li>
            <li>Vehicle Registration Certificate (RC Copy)</li>
            <li>Valid Insurance Policy Copy</li>
            <li>Movement Order / Transfer Order Copy</li>
          </ul>
        </div>

        <div style="background: rgba(255,255,255,0.03); padding: 25px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.08);">
          <h3 style="font-size: 1.15rem; color: #f59e0b; font-weight: 700; margin-bottom: 10px;">Official Claim Invoice Pack</h3>
          <ul style="color: #cbd5e1; font-size: 0.9rem; line-height: 1.8; padding-left: 20px; margin: 0;">
            <li>IBA Approved Consignment Note (LR Copy)</li>
            <li>Itemized 18% GST Tax Invoice</li>
            <li>Payment Receipt with Official Stamp</li>
            <li>Pre-Delivery Inspection Slip</li>
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
          Frequently Asked Questions (Defence Bike Transport)
        </h2>
        <p style="color: #94a3b8; font-size: 1rem; max-width: 700px; margin: 0 auto;">
          Answers to key questions regarding armed forces motorcycle relocation.
        </p>
      </div>

      <div style="max-width: 900px; margin: 0 auto; display: grid; gap: 15px;">
        
        <div style="background: #1c2541; padding: 20px 25px; border-radius: 10px; border: 1px solid rgba(255,255,255,0.05);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Are your bills eligible for government transfer claim reimbursement?</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.6; margin: 0;">
            Yes, we provide 100% IBA-approved GST tax invoices, consignment bilty notes, and stamped receipts accepted by military pay offices.
          </p>
        </div>

        <div style="background: #1c2541; padding: 20px 25px; border-radius: 10px; border: 1px solid rgba(255,255,255,0.05);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Can your pickup trucks enter military cantonment areas?</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.6; margin: 0;">
            Yes, our drivers carry valid government photo IDs and commercial permits for smooth entry into Army cantonments and Air Force stations.
          </p>
        </div>

        <div style="background: #1c2541; padding: 20px 25px; border-radius: 10px; border: 1px solid rgba(255,255,255,0.05);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">How do I claim the defence discount rate?</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.6; margin: 0;">
            Simply present a copy of your Service ID or Canteen Smart Card at the time of booking to receive special military concession pricing.
          </p>
        </div>

        <div style="background: #1c2541; padding: 20px 25px; border-radius: 10px; border: 1px solid rgba(255,255,255,0.05);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Is 100% transit insurance cover included?</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.6; margin: 0;">
            Yes, comprehensive all-risk transit insurance is included to safeguard your vehicle against any unexpected road incidents.
          </p>
        </div>

        <div style="background: #1c2541; padding: 20px 25px; border-radius: 10px; border: 1px solid rgba(255,255,255,0.05);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">What if my posting order gets delayed or modified?</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.6; margin: 0;">
            We offer 100% flexible date changes without penalty for defence personnel whenever movement orders are revised.
          </p>
        </div>

      </div>

    </div>
  </section>

  <!-- Section 8: CTA Conversion Footer -->
  <section style="padding: 50px 0; background: linear-gradient(135deg, #1c2541 0%, #0b132b 100%); text-align: center; border-top: 1px solid rgba(245, 158, 11, 0.2);">
    <div class="container" style="max-width: 900px; margin: 0 auto; padding: 0 20px;">
      <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin-bottom: 15px;">
        Book Defence Bike Transport Today
      </h2>
      <p style="font-size: 1.05rem; color: #cbd5e1; margin-bottom: 30px;">
        Get IBA-approved bills, military discount rates, 7-layer bubble packaging, and doorstep cantonment pickup.
      </p>

      <div style="display: flex; gap: 15px; justify-content: center; flex-wrap: wrap;">
        <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Representative" style="padding: 15px 35px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
          <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call <?php echo SITE_PHONE; ?>
        </a>
        <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20to%20book%20defence%20bike%20transport." title="WhatsApp Booking" target="_blank" style="padding: 15px 35px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
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
      "name": "Are your bills eligible for government transfer claim reimbursement?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, we provide 100% IBA-approved GST tax invoices, consignment bilty notes, and stamped receipts accepted by military pay offices."
      }
    },
    {
      "@type": "Question",
      "name": "Can your pickup trucks enter military cantonment areas?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, our drivers carry valid government photo IDs and commercial permits for smooth entry into Army cantonments and Air Force stations."
      }
    },
    {
      "@type": "Question",
      "name": "How do I claim the defence discount rate?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Simply present a copy of your Service ID or Canteen Smart Card at the time of booking to receive special military concession pricing."
      }
    },
    {
      "@type": "Question",
      "name": "Is 100% transit insurance cover included?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, comprehensive all-risk transit insurance is included to safeguard your vehicle against any unexpected road incidents."
      }
    },
    {
      "@type": "Question",
      "name": "What if my posting order gets delayed or modified?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "We offer 100% flexible date changes without penalty for defence personnel whenever movement orders are revised."
      }
    }
  ]
}
</script>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
