<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "Best Company for Packers and Movers in Patna | Top Verified Relocation Firm";
$page_desc = "Looking for the best company for packers and movers in Patna? Shree Ashirwad Packers is a licensed, IBA-approved relocation company offering 100% safe household & vehicle moving.";
$page_keywords = "best company for packers and movers in patna, top moving company patna, verified packers and movers patna, iba approved company patna, professional relocation company patna";
$page_city = "Patna, Bihar";

$faq_list = [
    [
        'q' => 'How to verify the best company for packers and movers in Patna?',
        'a' => 'Check official IBA registration credentials, GSTIN validity, physical office location in Patna, verified Google reviews, and written binding quotes before booking.'
    ],
    [
        'q' => 'What makes Shree Ashirwad the best relocation company in Patna?',
        'a' => 'We maintain a 99.8% damage-free track record, own a fleet of covered container trucks, employ full-time trained packing staff, and issue 100% genuine IBA GST bills.'
    ],
    [
        'q' => 'Does the best moving company in Patna provide transit insurance?',
        'a' => 'Yes, all household and vehicle relocations are covered by comprehensive transit insurance policy receipts issued before vehicle dispatch.'
    ],
    [
        'q' => 'What are the charges of a top-rated packers and movers company in Patna?',
        'a' => 'Local household shifting charges range from ₹4,500 for 1BHK to ₹12,500 for 3BHK, while intercity moves are priced transparently based on distance and volume.'
    ],
    [
        'q' => 'Do you serve all major residential areas in Patna?',
        'a' => 'Yes, our company provides doorstep moving across Boring Road, Kankarbagh, Danapur, Bailey Road, Patliputra Colony, Ashiana Nagar, Exhibition Road, and Bihta.'
    ],
    [
        'q' => 'What documents does a certified moving company provide for claim reimbursement?',
        'a' => 'We supply official IBA consignment notes, GST tax invoices, money receipts, itemized packing inventories, and vehicle condition inspection reports.'
    ],
    [
        'q' => 'Does your company handle office and commercial relocation in Patna?',
        'a' => 'Yes, we specialize in corporate IT office moves, server transport, office modular furniture dismantling, and heavy equipment handling.'
    ],
    [
        'q' => 'How does your company transport cars and bikes safely from Patna?',
        'a' => 'Vehicles are shipped using enclosed hydraulic car carrier trucks and custom wooden/metal bike crates with wheel-lock straps and soft blanket wrapping.'
    ],
    [
        'q' => 'Can I track my consignment status during highway transit?',
        'a' => 'Yes, our dedicated logistics control tower provides GPS location updates and driver contact details throughout the journey.'
    ],
    [
        'q' => 'How to book a free doorstep assessment with Patna’s top moving company?',
        'a' => 'Call +91 8409531615 or submit your relocation details via WhatsApp for an immediate free doorstep or virtual video inspection.'
    ]
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
  <section class="hero-section" style="background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%); padding: 60px 0; color: #ffffff;">
    <div class="container">
      <div class="hero-grid" style="display: grid; grid-template-columns: 1.2fr 0.8fr; gap: 40px; align-items: center;">
        
        <!-- Hero Text Column -->
        <div class="hero-text">
          <span class="section-tag" style="background: rgba(59, 130, 246, 0.15); color: #3b82f6; border: 1px solid rgba(59, 130, 246, 0.4); padding: 6px 16px; border-radius: 20px; font-size: 0.85rem; font-weight: 700; text-transform: uppercase; display: inline-block; margin-bottom: 15px;">
            VERIFIED RELOCATION COMPANY PATNA
          </span>
          <h1 style="font-size: 2.7rem; font-weight: 800; line-height: 1.2; margin-bottom: 20px; color: #ffffff;">
            Best Company for <span style="color: #3b82f6;">Packers and Movers in Patna</span>
          </h1>
          <p style="font-size: 1.12rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 25px;">
            Shree Ashirwad Packers and Movers is Patna's top-rated, IBA-approved relocation company. We offer full-fleet container transport, 7-layer protective packing, GPS consignment tracking, and genuine GST invoices.
          </p>

          <div style="display: flex; gap: 15px; flex-wrap: wrap; margin-bottom: 30px;">
            <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Now" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
              <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call Now: <?php echo SITE_PHONE; ?>
            </a>
            <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20to%20hire%20the%20best%20moving%20company%20in%20Patna." title="Chat on WhatsApp" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
              <i class="fab fa-whatsapp" style="margin-right: 8px;"></i> Chat on WhatsApp
            </a>
          </div>

          <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 15px; border-top: 1px solid rgba(255, 255, 255, 0.1); padding-top: 20px;">
            <div>
              <h4 style="color: #3b82f6; font-size: 1.3rem; margin-bottom: 2px;">IBA Approved</h4>
              <p style="font-size: 0.85rem; color: #94a3b8; margin: 0;">Certified Firm</p>
            </div>
            <div>
              <h4 style="color: #3b82f6; font-size: 1.3rem; margin-bottom: 2px;">99.8%</h4>
              <p style="font-size: 0.85rem; color: #94a3b8; margin: 0;">Safe Track Record</p>
            </div>
            <div>
              <h4 style="color: #3b82f6; font-size: 1.3rem; margin-bottom: 2px;">24/7 GPS</h4>
              <p style="font-size: 0.85rem; color: #94a3b8; margin: 0;">Real-Time Tracking</p>
            </div>
          </div>
        </div>

        <!-- Hero Form Column -->
        <div class="hero-form-wrapper" style="background: rgba(255, 255, 255, 0.05); backdrop-filter: blur(10px); border: 1px solid rgba(255, 255, 255, 0.1); padding: 30px; border-radius: 16px;">
          <h3 style="font-size: 1.4rem; color: #ffffff; margin-bottom: 20px; text-align: center;">Get Company Estimate</h3>
          <form id="heroLeadForm" onsubmit="sendHeroWhatsAppLead(event)" style="display: flex; flex-direction: column; gap: 15px;">
            <input type="text" id="hero_name" placeholder="Your Full Name *" required style="width: 100%; padding: 12px 15px; border-radius: 8px; border: 1px solid rgba(255, 255, 255, 0.2); background: rgba(0, 0, 0, 0.3); color: #ffffff; font-size: 0.95rem;">
            <input type="tel" id="hero_phone" placeholder="Mobile / WhatsApp Number *" required pattern="[0-9]{10}" style="width: 100%; padding: 12px 15px; border-radius: 8px; border: 1px solid rgba(255, 255, 255, 0.2); background: rgba(0, 0, 0, 0.3); color: #ffffff; font-size: 0.95rem;">
            <input type="text" id="hero_from" placeholder="Pickup Locality in Patna *" required style="width: 100%; padding: 12px 15px; border-radius: 8px; border: 1px solid rgba(255, 255, 255, 0.2); background: rgba(0, 0, 0, 0.3); color: #ffffff; font-size: 0.95rem;">
            <input type="text" id="hero_to" placeholder="Destination City / Locality *" required style="width: 100%; padding: 12px 15px; border-radius: 8px; border: 1px solid rgba(255, 255, 255, 0.2); background: rgba(0, 0, 0, 0.3); color: #ffffff; font-size: 0.95rem;">
            <select id="hero_service" required style="width: 100%; padding: 12px 15px; border-radius: 8px; border: 1px solid rgba(255, 255, 255, 0.2); background: #1e293b; color: #ffffff; font-size: 0.95rem;">
              <option value="Company Household Relocation">Company Household Relocation</option>
              <option value="Corporate Office Moving">Corporate Office Moving</option>
              <option value="IBA Approved Shifting">IBA Approved Govt/Bank Shifting</option>
              <option value="Enclosed Car Shipping">Enclosed Car Shipping</option>
              <option value="Two-Wheeler Bike Crate Shipping">Two-Wheeler Bike Crate Shipping</option>
            </select>
            <button type="submit" style="width: 100%; padding: 14px; background: linear-gradient(135deg, #3b82f6 0%, #1d4ed8 100%); color: #ffffff; border: none; border-radius: 8px; font-weight: 700; font-size: 1rem; cursor: pointer; transition: all 0.3s ease;">
              Get Verified Estimate on WhatsApp <i class="fab fa-whatsapp" style="margin-left: 6px;"></i>
            </button>
          </form>
        </div>

      </div>
    </div>
  </section>

  <!-- Company Credentials & Quality Assurance Guide -->
  <section class="company-guide" style="padding: 60px 0; background: #f8fafc;">
    <div class="container">
      <div style="max-width: 900px; margin: 0 auto; background: #ffffff; padding: 40px; border-radius: 12px; box-shadow: 0 4px 20px rgba(0,0,0,0.05);">
        
        <h2 style="font-size: 2rem; color: #0f172a; margin-bottom: 20px; font-weight: 800;">
          Why We Are the Best Relocation Company in Patna
        </h2>
        
        <p style="font-size: 1.05rem; line-height: 1.8; color: #334155; margin-bottom: 20px;">
          Choosing the best company for packers and movers in Patna ensures your valuable household belongings and vehicles are handled by certified professionals. Shree Ashirwad Packers and Movers operates with complete legal compliance across <strong>Boring Road, Kankarbagh, Danapur, Bailey Road, Patliputra Colony, Ashiana Nagar, Exhibition Road, and Bihta</strong>.
        </p>

        <h3 style="font-size: 1.4rem; color: #1e293b; margin: 25px 0 15px; font-weight: 700;">
          Key Pillars of Our Moving Company Standard
        </h3>
        
        <ul style="line-height: 1.8; color: #334155; margin-bottom: 25px; padding-left: 20px;">
          <li><strong>IBA Registration & Licensing:</strong> Fully registered with Indian Banks' Association standards for official employee relocation claim processing.</li>
          <li><strong>In-House Fleet Management:</strong> Dedicated weatherproof container trucks equipped with hydraulic lifts and GPS tracking.</li>
          <li><strong>Full-Time Trained Crew:</strong> Experienced carpenters, packers, and heavy-item handling crews who are permanently employed.</li>
          <li><strong>Comprehensive Transit Insurance:</strong> All goods are backed by policy coverage for complete financial security.</li>
        </ul>

      </div>
    </div>
  </section>

  <!-- Rate Matrix Table -->
  <section class="rate-matrix" style="padding: 60px 0; background: #ffffff;">
    <div class="container">
      <div style="text-align: center; max-width: 700px; margin: 0 auto 40px;">
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #0f172a;">Company Shifting Tariff Card (Patna)</h2>
        <p style="color: #64748b; font-size: 1.05rem;">Standard itemized pricing for corporate and residential shifting services in Patna.</p>
      </div>

      <div style="max-width: 950px; margin: 0 auto; overflow-x: auto;">
        <table style="width: 100%; border-collapse: collapse; background: #ffffff; border-radius: 8px; overflow: hidden; box-shadow: 0 4px 15px rgba(0,0,0,0.06);">
          <thead>
            <tr style="background: #0f172a; color: #ffffff; text-align: left;">
              <th style="padding: 16px 20px; font-size: 0.95rem;">Service Category</th>
              <th style="padding: 16px 20px; font-size: 0.95rem;">Local Patna Shifting</th>
              <th style="padding: 16px 20px; font-size: 0.95rem;">Intercity (Up to 500 km)</th>
              <th style="padding: 16px 20px; font-size: 0.95rem;">Interstate Relocation</th>
            </tr>
          </thead>
          <tbody>
            <tr style="border-bottom: 1px solid #e2e8f0;">
              <td style="padding: 16px 20px; font-weight: 600; color: #1e293b;">1 BHK Company Shifting</td>
              <td style="padding: 16px 20px; color: #059669; font-weight: 700;">₹4,200 - ₹6,500</td>
              <td style="padding: 16px 20px; color: #3b82f6; font-weight: 700;">₹9,000 - ₹14,500</td>
              <td style="padding: 16px 20px; color: #6366f1; font-weight: 700;">₹14,000 - ₹20,500</td>
            </tr>
            <tr style="border-bottom: 1px solid #e2e8f0; background: #f8fafc;">
              <td style="padding: 16px 20px; font-weight: 600; color: #1e293b;">2 BHK Company Shifting</td>
              <td style="padding: 16px 20px; color: #059669; font-weight: 700;">₹6,200 - ₹9,200</td>
              <td style="padding: 16px 20px; color: #3b82f6; font-weight: 700;">₹13,500 - ₹21,500</td>
              <td style="padding: 16px 20px; color: #6366f1; font-weight: 700;">₹20,500 - ₹30,000</td>
            </tr>
            <tr style="border-bottom: 1px solid #e2e8f0;">
              <td style="padding: 16px 20px; font-weight: 600; color: #1e293b;">3 BHK Company Shifting</td>
              <td style="padding: 16px 20px; color: #059669; font-weight: 700;">₹9,200 - ₹14,000</td>
              <td style="padding: 16px 20px; color: #3b82f6; font-weight: 700;">₹20,500 - ₹31,000</td>
              <td style="padding: 16px 20px; color: #6366f1; font-weight: 700;">₹29,000 - ₹44,000</td>
            </tr>
            <tr style="border-bottom: 1px solid #e2e8f0; background: #f8fafc;">
              <td style="padding: 16px 20px; font-weight: 600; color: #1e293b;">Bike Crate Shipping</td>
              <td style="padding: 16px 20px; color: #059669; font-weight: 700;">₹2,000 - ₹3,200</td>
              <td style="padding: 16px 20px; color: #3b82f6; font-weight: 700;">₹3,500 - ₹5,500</td>
              <td style="padding: 16px 20px; color: #6366f1; font-weight: 700;">₹5,200 - ₹8,000</td>
            </tr>
            <tr>
              <td style="padding: 16px 20px; font-weight: 600; color: #1e293b;">Enclosed Car Transport</td>
              <td style="padding: 16px 20px; color: #059669; font-weight: 700;">₹4,800 - ₹7,200</td>
              <td style="padding: 16px 20px; color: #3b82f6; font-weight: 700;">₹9,000 - ₹15,000</td>
              <td style="padding: 16px 20px; color: #6366f1; font-weight: 700;">₹14,000 - ₹23,000</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </section>

  <!-- FAQ Section with Schema Support -->
  <section class="faq-section" style="padding: 60px 0; background: #f8fafc;">
    <div class="container">
      <div style="text-align: center; max-width: 700px; margin: 0 auto 40px;">
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #0f172a;">Frequently Asked Questions (Company Moving Patna)</h2>
        <p style="color: #64748b; font-size: 1.05rem;">Questions about company credentials, IBA licensing, and verified services in Patna.</p>
      </div>

      <div style="max-width: 850px; margin: 0 auto; display: flex; flex-direction: column; gap: 15px;">
        <?php foreach ($faq_list as $index => $faq): ?>
          <div style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 8px; padding: 20px; box-shadow: 0 2px 5px rgba(0,0,0,0.02);">
            <h4 style="font-size: 1.1rem; color: #0f172a; margin-bottom: 10px; font-weight: 700;">
              <?php echo ($index + 1) . '. ' . htmlspecialchars($faq['q']); ?>
            </h4>
            <p style="font-size: 0.98rem; color: #475569; line-height: 1.7; margin: 0;">
              <?php echo htmlspecialchars($faq['a']); ?>
            </p>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>



<!-- Google Business Profile Verified Customer Trust Section -->
<section style="padding: 35px 0; background: #070d19;">
  <div class="container" style="max-width: 1150px; margin: 0 auto; padding: 0 15px;">
    <div class="gmb-trust-card" style="background: rgba(15, 23, 42, 0.85); border: 1.5px solid rgba(245, 158, 11, 0.35); border-radius: 14px; padding: 28px 24px; margin: 0; color: #cbd5e1;">
      <div style="display: flex; flex-wrap: wrap; justify-content: space-between; align-items: center; border-bottom: 1px solid rgba(255,255,255,0.08); padding-bottom: 16px; margin-bottom: 22px; gap: 12px;">
        <div style="display: flex; align-items: center; gap: 12px;">
          <span style="background: #1e293b; color: #f59e0b; padding: 6px 14px; border-radius: 20px; font-size: 0.85rem; font-weight: 700; display: inline-flex; align-items: center; gap: 6px;">
            <i class="fab fa-google" style="color: #ea4335;"></i> Google Verified Reviews
          </span>
          <span style="font-size: 1.25rem; font-weight: 800; color: #ffffff;">4.9 <span style="color: #f59e0b;">&#9733;&#9733;&#9733;&#9733;&#9733;</span></span>
          <span style="color: #94a3b8; font-size: 0.85rem; font-weight: 500;">(500+ Customer Ratings)</span>
        </div>
        <a href="https://share.google/4FEjDv1dVCJV3O4ch" target="_blank" rel="noopener nofollow" style="color: #f59e0b; text-decoration: none; font-size: 0.88rem; font-weight: 600; display: inline-flex; align-items: center; gap: 5px;">
          View All Reviews on Google Maps &rarr;
        </a>
      </div>
      
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 18px;">
    <div style="background: rgba(0,0,0,0.3); border-radius: 12px; padding: 20px 18px; border-left: 4px solid #f59e0b; border-top: 1px solid rgba(255,255,255,0.06); border-right: 1px solid rgba(255,255,255,0.06); border-bottom: 1px solid rgba(255,255,255,0.06); box-shadow: 0 8px 20px rgba(0,0,0,0.25); display: flex; flex-direction: column; justify-content: space-between;">
      <div>
        <div style="display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 10px; gap: 10px;">
          <div style="display: flex; align-items: center; gap: 10px;">
            <div style="width: 36px; height: 36px; border-radius: 50%; background: #f59e0b22; color: #f59e0b; font-weight: 800; font-size: 0.85rem; display: flex; align-items: center; justify-content: center;">RS</div>
            <div>
              <strong style="color: #ffffff; font-size: 0.95rem; display: block; line-height: 1.2;">Rajesh Sharma</strong>
              <span style="color: #94a3b8; font-size: 0.76rem;">2 months ago</span>
            </div>
          </div>
          <span style="color: #f59e0b; font-size: 0.82rem; font-weight: 700; background: rgba(245, 158, 11, 0.12); padding: 3px 8px; border-radius: 12px; white-space: nowrap;">&#9733;&#9733;&#9733;&#9733;&#9733; Verified</span>
        </div>
        <div style="color: #60a5fa; font-size: 0.8rem; font-weight: 600; margin-bottom: 10px;"><i class="fas fa-check-circle" style="margin-right: 5px;"></i>Car &amp; Bike Relocation (Creta &amp; Enfield)</div>
        <p style="font-size: 0.88rem; line-height: 1.65; margin: 0; color: #cbd5e1; font-style: italic;">
          "Transported my Hyundai Creta and Royal Enfield from Ranchi to Pune in an enclosed container carrier with live GPS tracking. Both vehicles arrived in showroom condition without a single scratch. Provided genuine IBA-approved bill for corporate relocation reimbursement."
        </p>
      </div>
    </div>
    <div style="background: rgba(0,0,0,0.3); border-radius: 12px; padding: 20px 18px; border-left: 4px solid #10b981; border-top: 1px solid rgba(255,255,255,0.06); border-right: 1px solid rgba(255,255,255,0.06); border-bottom: 1px solid rgba(255,255,255,0.06); box-shadow: 0 8px 20px rgba(0,0,0,0.25); display: flex; flex-direction: column; justify-content: space-between;">
      <div>
        <div style="display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 10px; gap: 10px;">
          <div style="display: flex; align-items: center; gap: 10px;">
            <div style="width: 36px; height: 36px; border-radius: 50%; background: #10b98122; color: #10b981; font-weight: 800; font-size: 0.85rem; display: flex; align-items: center; justify-content: center;">AK</div>
            <div>
              <strong style="color: #ffffff; font-size: 0.95rem; display: block; line-height: 1.2;">Amit Kumar</strong>
              <span style="color: #94a3b8; font-size: 0.76rem;">1 month ago</span>
            </div>
          </div>
          <span style="color: #f59e0b; font-size: 0.82rem; font-weight: 700; background: rgba(245, 158, 11, 0.12); padding: 3px 8px; border-radius: 12px; white-space: nowrap;">&#9733;&#9733;&#9733;&#9733;&#9733; Verified</span>
        </div>
        <div style="color: #60a5fa; font-size: 0.8rem; font-weight: 600; margin-bottom: 10px;"><i class="fas fa-check-circle" style="margin-right: 5px;"></i>Household Shifting (3BHK)</div>
        <p style="font-size: 0.88rem; line-height: 1.65; margin: 0; color: #cbd5e1; font-style: italic;">
          "Shifted complete 3BHK household goods from Ranchi to Bangalore with Shree Ashirwad. Exceptional packing quality using double-layer bubble wrap and sturdy cartons for fragile crockery. Zero damage, on-time delivery, and polite loading staff. Highly recommended!"
        </p>
      </div>
    </div>
    <div style="background: rgba(0,0,0,0.3); border-radius: 12px; padding: 20px 18px; border-left: 4px solid #3b82f6; border-top: 1px solid rgba(255,255,255,0.06); border-right: 1px solid rgba(255,255,255,0.06); border-bottom: 1px solid rgba(255,255,255,0.06); box-shadow: 0 8px 20px rgba(0,0,0,0.25); display: flex; flex-direction: column; justify-content: space-between;">
      <div>
        <div style="display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 10px; gap: 10px;">
          <div style="display: flex; align-items: center; gap: 10px;">
            <div style="width: 36px; height: 36px; border-radius: 50%; background: #3b82f622; color: #3b82f6; font-weight: 800; font-size: 0.85rem; display: flex; align-items: center; justify-content: center;">VK</div>
            <div>
              <strong style="color: #ffffff; font-size: 0.95rem; display: block; line-height: 1.2;">Vikram Kumar Singh</strong>
              <span style="color: #94a3b8; font-size: 0.76rem;">3 weeks ago</span>
            </div>
          </div>
          <span style="color: #f59e0b; font-size: 0.82rem; font-weight: 700; background: rgba(245, 158, 11, 0.12); padding: 3px 8px; border-radius: 12px; white-space: nowrap;">&#9733;&#9733;&#9733;&#9733;&#9733; Verified</span>
        </div>
        <div style="color: #60a5fa; font-size: 0.8rem; font-weight: 600; margin-bottom: 10px;"><i class="fas fa-check-circle" style="margin-right: 5px;"></i>SUV &amp; Household Intercity Transit</div>
        <p style="font-size: 0.88rem; line-height: 1.65; margin: 0; color: #cbd5e1; font-style: italic;">
          "Transported my Creta SUV and Royal Enfield motorcycle from Ranchi to Bangalore along with household items. Received live GPS location updates throughout transit. Zero damage! Best choice among professional packers and movers."
        </p>
      </div>
    </div>
    <div style="background: rgba(0,0,0,0.3); border-radius: 12px; padding: 20px 18px; border-left: 4px solid #a855f7; border-top: 1px solid rgba(255,255,255,0.06); border-right: 1px solid rgba(255,255,255,0.06); border-bottom: 1px solid rgba(255,255,255,0.06); box-shadow: 0 8px 20px rgba(0,0,0,0.25); display: flex; flex-direction: column; justify-content: space-between;">
      <div>
        <div style="display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 10px; gap: 10px;">
          <div style="display: flex; align-items: center; gap: 10px;">
            <div style="width: 36px; height: 36px; border-radius: 50%; background: #a855f722; color: #a855f7; font-weight: 800; font-size: 0.85rem; display: flex; align-items: center; justify-content: center;">PV</div>
            <div>
              <strong style="color: #ffffff; font-size: 0.95rem; display: block; line-height: 1.2;">Pooja Verma</strong>
              <span style="color: #94a3b8; font-size: 0.76rem;">1 month ago</span>
            </div>
          </div>
          <span style="color: #f59e0b; font-size: 0.82rem; font-weight: 700; background: rgba(245, 158, 11, 0.12); padding: 3px 8px; border-radius: 12px; white-space: nowrap;">&#9733;&#9733;&#9733;&#9733;&#9733; Verified</span>
        </div>
        <div style="color: #60a5fa; font-size: 0.8rem; font-weight: 600; margin-bottom: 10px;"><i class="fas fa-check-circle" style="margin-right: 5px;"></i>Interstate Relocation to Kolkata</div>
        <p style="font-size: 0.88rem; line-height: 1.65; margin: 0; color: #cbd5e1; font-style: italic;">
          "Very honest pricing with no hidden charges. They provided a proper IBA-approved GST bill and clear transit insurance documentation for my company reimbursement. Outstanding service from reliable movers."
        </p>
      </div>
    </div>
    <div style="background: rgba(0,0,0,0.3); border-radius: 12px; padding: 20px 18px; border-left: 4px solid #06b6d4; border-top: 1px solid rgba(255,255,255,0.06); border-right: 1px solid rgba(255,255,255,0.06); border-bottom: 1px solid rgba(255,255,255,0.06); box-shadow: 0 8px 20px rgba(0,0,0,0.25); display: flex; flex-direction: column; justify-content: space-between;">
      <div>
        <div style="display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 10px; gap: 10px;">
          <div style="display: flex; align-items: center; gap: 10px;">
            <div style="width: 36px; height: 36px; border-radius: 50%; background: #06b6d422; color: #06b6d4; font-weight: 800; font-size: 0.85rem; display: flex; align-items: center; justify-content: center;">AR</div>
            <div>
              <strong style="color: #ffffff; font-size: 0.95rem; display: block; line-height: 1.2;">Ananya Roy</strong>
              <span style="color: #94a3b8; font-size: 0.76rem;">2 months ago</span>
            </div>
          </div>
          <span style="color: #f59e0b; font-size: 0.82rem; font-weight: 700; background: rgba(245, 158, 11, 0.12); padding: 3px 8px; border-radius: 12px; white-space: nowrap;">&#9733;&#9733;&#9733;&#9733;&#9733; Verified</span>
        </div>
        <div style="color: #60a5fa; font-size: 0.8rem; font-weight: 600; margin-bottom: 10px;"><i class="fas fa-check-circle" style="margin-right: 5px;"></i>IT Office &amp; Workstation Relocation</div>
        <p style="font-size: 0.88rem; line-height: 1.65; margin: 0; color: #cbd5e1; font-style: italic;">
          "Shree Ashirwad shifted our software company setup over a single Sunday. All IT servers, monitors, and ergonomic chairs were transported safely with anti-static packaging and zero operational downtime. Truly top-tier logistics team."
        </p>
      </div>
    </div>
    <div style="background: rgba(0,0,0,0.3); border-radius: 12px; padding: 20px 18px; border-left: 4px solid #ec4899; border-top: 1px solid rgba(255,255,255,0.06); border-right: 1px solid rgba(255,255,255,0.06); border-bottom: 1px solid rgba(255,255,255,0.06); box-shadow: 0 8px 20px rgba(0,0,0,0.25); display: flex; flex-direction: column; justify-content: space-between;">
      <div>
        <div style="display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 10px; gap: 10px;">
          <div style="display: flex; align-items: center; gap: 10px;">
            <div style="width: 36px; height: 36px; border-radius: 50%; background: #ec489922; color: #ec4899; font-weight: 800; font-size: 0.85rem; display: flex; align-items: center; justify-content: center;">PS</div>
            <div>
              <strong style="color: #ffffff; font-size: 0.95rem; display: block; line-height: 1.2;">Priya Singh</strong>
              <span style="color: #94a3b8; font-size: 0.76rem;">3 weeks ago</span>
            </div>
          </div>
          <span style="color: #f59e0b; font-size: 0.82rem; font-weight: 700; background: rgba(245, 158, 11, 0.12); padding: 3px 8px; border-radius: 12px; white-space: nowrap;">&#9733;&#9733;&#9733;&#9733;&#9733; Verified</span>
        </div>
        <div style="color: #60a5fa; font-size: 0.8rem; font-weight: 600; margin-bottom: 10px;"><i class="fas fa-check-circle" style="margin-right: 5px;"></i>Local House Relocation</div>
        <p style="font-size: 0.88rem; line-height: 1.65; margin: 0; color: #cbd5e1; font-style: italic;">
          "Very smooth shifting experience within Ranchi. The packing crew arrived exactly on time, dismantled the furniture carefully, and assembled everything at our new flat. Transparent pricing with no hidden moving day surcharges."
        </p>
      </div>
    </div>

      </div>
    </div>
  </div>
</section>

</main>

<!-- Custom WhatsApp Lead Handler Script -->
<script>
function sendHeroWhatsAppLead(event) {
  event.preventDefault();
  
  var name = document.getElementById('hero_name').value.trim();
  var phone = document.getElementById('hero_phone').value.trim();
  var from = document.getElementById('hero_from').value.trim();
  var to = document.getElementById('hero_to').value.trim();
  var service = document.getElementById('hero_service').value;

  var message = "Hello Shree Ashirwad Packers,%0A%0A" +
    "I would like to request a *Company Moving Estimate* for Patna:%0A" +
    "*Name:* " + encodeURIComponent(name) + "%0A" +
    "*Phone:* " + encodeURIComponent(phone) + "%0A" +
    "*Pickup Locality:* " + encodeURIComponent(from) + "%0A" +
    "*Destination:* " + encodeURIComponent(to) + "%0A" +
    "*Service Type:* " + encodeURIComponent(service) + "%0A%0A" +
    "Please send me a verified company quote and IBA details on WhatsApp.";

  window.open("https://wa.me/918409531615?text=" + message, "_blank");
}
</script>

<?php 
require_once __DIR__ . '/../includes/footer.php'; 
?>
