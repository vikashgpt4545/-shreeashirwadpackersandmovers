<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "Bike Transport Business Ideas & Franchise Guide in India";
$page_desc = "Explore profitable bike transport business ideas, vehicle logistics startup guide, fleet management, packing agency setup, and IBA approved franchise opportunities across India.";
$page_keywords = "bike transport business ideas, bike shipping business startup, motorcycle logistics franchise, packers and movers business model, bike transport agency setup";
$canonical_url = "https://shreeashirwadpackersandmovers.com/pages/bike-transport-business-ideas.php";

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
            LOGISTICS STARTUP & FRANCHISE OPPORTUNITIES
          </span>
          <h1 style="font-size: 2.7rem; font-weight: 800; line-height: 1.2; margin-bottom: 20px; color: #ffffff;">
            Profitable <span style="color: #f59e0b;">Bike Transport Business Ideas</span>
          </h1>
          <p style="font-size: 1.12rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 25px;">
            Looking to start a bike transport business or partner with an established auto-logistics brand? Discover fleet setup models, specialized packing machinery, IBA GST compliance, customer acquisition strategies, and franchise partnerships across India.
          </p>

          <div style="display: flex; gap: 15px; flex-wrap: wrap; margin-bottom: 30px;">
            <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Now" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
              <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call Now: <?php echo SITE_PHONE; ?>
            </a>
            <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20information%20on%20bike%20transport%20business%20ideas." title="Chat on WhatsApp" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
              <i class="fab fa-whatsapp" style="margin-right: 8px;"></i> Chat on WhatsApp
            </a>
          </div>

          <div style="display: flex; gap: 20px; font-size: 0.9rem; color: #94a3b8;">
            <span><strong style="color: #f59e0b;">High Margin</strong> ROI Business</span>
            <span><strong style="color: #f59e0b;">Pan-India</strong> Franchise Support</span>
            <span><strong style="color: #f59e0b;">Complete</strong> Tech & Ops Blueprint</span>
          </div>
        </div>

        <!-- Hero Lead Form Column -->
        <div class="hero-form-card" style="background: rgba(255, 255, 255, 0.05); backdrop-filter: blur(10px); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 16px; padding: 30px; box-shadow: 0 15px 35px rgba(0,0,0,0.4);">
          <h2 style="font-size: 1.4rem; color: #ffffff; margin-bottom: 8px; font-weight: 700; text-align: center;">Inquire for Business & Franchise</h2>
          <p style="font-size: 0.85rem; color: #94a3b8; text-align: center; margin-bottom: 20px;">Get detailed business proposal & cost breakdown on WhatsApp</p>

          <form action="#" method="POST" onsubmit="sendHeroWhatsAppLead(event, this);">
            <div style="margin-bottom: 14px;">
              <input type="text" name="name" class="form-control" placeholder="Your Full Name" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="margin-bottom: 14px;">
              <input type="tel" name="phone" class="form-control" placeholder="10-Digit Phone Number" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 10px; margin-bottom: 14px;">
              <input type="text" name="move_from" class="form-control" placeholder="Your City / State" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
              <input type="text" name="move_to" class="form-control" placeholder="Investment Budget" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <button type="submit" style="width: 100%; padding: 14px; background: linear-gradient(135deg, #d32f2f 0%, #f59e0b 100%); color: #ffffff; border: none; border-radius: 50px; font-weight: 700; font-size: 1rem; cursor: pointer;">
              Get Business Plan Now &rarr;
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
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; margin-bottom: 5px;">₹15 Billion+</div>
          <div style="font-size: 0.9rem; color: #94a3b8;">Indian Vehicle Logistics Market</div>
        </div>

        <div style="padding: 20px; background: rgba(255,255,255,0.03); border-radius: 12px; border: 1px solid rgba(255,255,255,0.08);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; margin-bottom: 5px;">25% - 40%</div>
          <div style="font-size: 0.9rem; color: #94a3b8;">Average Profit Margins</div>
        </div>

        <div style="padding: 20px; background: rgba(255,255,255,0.03); border-radius: 12px; border: 1px solid rgba(255,255,255,0.08);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; margin-bottom: 5px;">Pan-India</div>
          <div style="font-size: 0.9rem; color: #94a3b8;">Franchise Network Expansion</div>
        </div>

        <div style="padding: 20px; background: rgba(255,255,255,0.03); border-radius: 12px; border: 1px solid rgba(255,255,255,0.08);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; margin-bottom: 5px;">100%</div>
          <div style="font-size: 0.9rem; color: #94a3b8;">Legal & GST Guidance</div>
        </div>

      </div>
    </div>
  </section>

  <!-- Section 3: Business Setup & Investment Matrix -->
  <section style="padding: 60px 0; background: #0b132b;">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
      
      <div style="text-align: center; margin-bottom: 40px;">
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin-bottom: 12px;">
          Bike Transport Business Models & Investment Costs
        </h2>
        <p style="color: #94a3b8; font-size: 1rem; max-width: 700px; margin: 0 auto;">
          Compare initial setup costs, infrastructure needs, and projected ROI for different auto-logistics business formats.
        </p>
      </div>

      <div style="overflow-x: auto; background: #1c2541; border-radius: 14px; border: 1px solid rgba(255,255,255,0.1); padding: 10px;">
        <table style="width: 100%; border-collapse: collapse; text-align: left; font-size: 0.95rem; color: #e2e8f0;">
          <thead>
            <tr style="background: rgba(245, 158, 11, 0.15); border-bottom: 2px solid rgba(245, 158, 11, 0.3);">
              <th style="padding: 16px; color: #f59e0b; font-weight: 700;">Business Model</th>
              <th style="padding: 16px; color: #f59e0b; font-weight: 700;">Required Infrastructure</th>
              <th style="padding: 16px; color: #f59e0b; font-weight: 700;">Estimated Setup Capital</th>
              <th style="padding: 16px; color: #f59e0b; font-weight: 700;">Expected ROI Horizon</th>
            </tr>
          </thead>
          <tbody>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.05);">
              <td style="padding: 16px; font-weight: 600;">Booking Agent / Aggregator</td>
              <td style="padding: 16px;">Small Office + Mobile & Laptop</td>
              <td style="padding: 16px; color: #f59e0b; font-weight: 700;">₹50,000 - ₹1.5 Lakh</td>
              <td style="padding: 16px;">3 - 6 Months</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.05); background: rgba(255,255,255,0.02);">
              <td style="padding: 16px; font-weight: 600;">Shree Ashirwad Franchise Branch</td>
              <td style="padding: 16px;">Warehouse Hub + Brand Signage</td>
              <td style="padding: 16px; color: #f59e0b; font-weight: 700;">₹2 Lakh - ₹5 Lakh</td>
              <td style="padding: 16px;">6 - 9 Months</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.05);">
              <td style="padding: 16px; font-weight: 600;">Independent Fleet Operator</td>
              <td style="padding: 16px;">Covered Container Trucks + Ramp</td>
              <td style="padding: 16px; color: #f59e0b; font-weight: 700;">₹12 Lakh - ₹25 Lakh</td>
              <td style="padding: 16px;">12 - 18 Months</td>
            </tr>
            <tr>
              <td style="padding: 16px; font-weight: 600;">Railway Station Packing Hub</td>
              <td style="padding: 16px;">Station Godown + Packing Materials</td>
              <td style="padding: 16px; color: #f59e0b; font-weight: 700;">₹1 Lakh - ₹3 Lakh</td>
              <td style="padding: 16px;">4 - 8 Months</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </section>

  <!-- Section 4: Key Business Advantages -->
  <section style="padding: 60px 0; background: #1c2541;">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
      
      <div style="text-align: center; margin-bottom: 45px;">
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin-bottom: 12px;">
          Top Business Opportunities in Two-Wheeler Logistics
        </h2>
        <p style="color: #94a3b8; font-size: 1rem; max-width: 700px; margin: 0 auto;">
          High-demand niches driving revenue in the Indian motorcycle shipping sector.
        </p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 30px;">
        
        <div style="background: rgba(255,255,255,0.03); border-radius: 12px; padding: 30px; border: 1px solid rgba(255,255,255,0.08);">
          <div style="width: 50px; height: 50px; border-radius: 10px; background: rgba(245, 158, 11, 0.15); color: #f59e0b; display: flex; align-items: center; justify-content: center; font-size: 1.4rem; margin-bottom: 20px;">
            <i class="fas fa-briefcase"></i>
          </div>
          <h3 style="font-size: 1.25rem; font-weight: 700; color: #ffffff; margin-bottom: 12px;">Intercity Student & IT Transfers</h3>
          <p style="color: #94a3b8; font-size: 0.95rem; line-height: 1.7;">
            High seasonal demand from college students, software professionals, and job switchers moving between major educational & tech hubs.
          </p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border-radius: 12px; padding: 30px; border: 1px solid rgba(255,255,255,0.08);">
          <div style="width: 50px; height: 50px; border-radius: 10px; background: rgba(245, 158, 11, 0.15); color: #f59e0b; display: flex; align-items: center; justify-content: center; font-size: 1.4rem; margin-bottom: 20px;">
            <i class="fas fa-motorcycle"></i>
          </div>
          <h3 style="font-size: 1.25rem; font-weight: 700; color: #ffffff; margin-bottom: 12px;">Ladakh & Tourer Bike Logistics</h3>
          <p style="color: #94a3b8; font-size: 0.95rem; line-height: 1.7;">
            Specialized seasonal transport for motorcycle touring groups shipping bikes to Chandigarh, Leh, Srinagar, or Manali.
          </p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border-radius: 12px; padding: 30px; border: 1px solid rgba(255,255,255,0.08);">
          <div style="width: 50px; height: 50px; border-radius: 10px; background: rgba(245, 158, 11, 0.15); color: #f59e0b; display: flex; align-items: center; justify-content: center; font-size: 1.4rem; margin-bottom: 20px;">
            <i class="fas fa-building"></i>
          </div>
          <h3 style="font-size: 1.25rem; font-weight: 700; color: #ffffff; margin-bottom: 12px;">Corporate & Defence Contracts</h3>
          <p style="color: #94a3b8; font-size: 0.95rem; line-height: 1.7;">
            Lucrative long-term contracts for military personnel relocations and bank officer transfers requiring IBA-approved documentation.
          </p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border-radius: 12px; padding: 30px; border: 1px solid rgba(255,255,255,0.08);">
          <div style="width: 50px; height: 50px; border-radius: 10px; background: rgba(245, 158, 11, 0.15); color: #f59e0b; display: flex; align-items: center; justify-content: center; font-size: 1.4rem; margin-bottom: 20px;">
            <i class="fas fa-handshake"></i>
          </div>
          <h3 style="font-size: 1.25rem; font-weight: 700; color: #ffffff; margin-bottom: 12px;">Shree Ashirwad Franchise Partner</h3>
          <p style="color: #94a3b8; font-size: 0.95rem; line-height: 1.7;">
            Leverage our established brand recognition, CRM software, marketing leads, and national network to run a profitable branch.
          </p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border-radius: 12px; padding: 30px; border: 1px solid rgba(255,255,255,0.08);">
          <div style="width: 50px; height: 50px; border-radius: 10px; background: rgba(245, 158, 11, 0.15); color: #f59e0b; display: flex; align-items: center; justify-content: center; font-size: 1.4rem; margin-bottom: 20px;">
            <i class="fas fa-shield-alt"></i>
          </div>
          <h3 style="font-size: 1.25rem; font-weight: 700; color: #ffffff; margin-bottom: 12px;">Integrated Insurance Brokerage</h3>
          <p style="color: #94a3b8; font-size: 0.95rem; line-height: 1.7;">
            Earn additional revenue streams by providing value-added transit insurance policies for every customer shipment.
          </p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border-radius: 12px; padding: 30px; border: 1px solid rgba(255,255,255,0.08);">
          <div style="width: 50px; height: 50px; border-radius: 10px; background: rgba(245, 158, 11, 0.15); color: #f59e0b; display: flex; align-items: center; justify-content: center; font-size: 1.4rem; margin-bottom: 20px;">
            <i class="fas fa-globe"></i>
          </div>
          <h3 style="font-size: 1.25rem; font-weight: 700; color: #ffffff; margin-bottom: 12px;">Digital Lead Generation</h3>
          <p style="color: #94a3b8; font-size: 0.95rem; line-height: 1.7;">
            Master local SEO, Google Ads, and WhatsApp lead automation to generate high-intent customer inquiries daily.
          </p>
        </div>

      </div>
    </div>
  </section>

  <!-- Section 5: Standard Operational Framework -->
  <section style="padding: 60px 0; background: #0b132b;">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
      
      <div style="text-align: center; margin-bottom: 45px;">
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin-bottom: 12px;">
          Operational Framework for Running a Bike Transport Business
        </h2>
        <p style="color: #94a3b8; font-size: 1rem; max-width: 700px; margin: 0 auto;">
          Step-by-step roadmap to establish and scale a two-wheeler relocation agency.
        </p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 20px;">
        
        <div style="background: #1c2541; padding: 25px; border-radius: 12px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #ffffff; font-size: 1.1rem; font-weight: 700; margin-bottom: 8px;">Step 1: Business Registration</h4>
          <p style="color: #94a3b8; font-size: 0.9rem; margin: 0;">Obtain Proprietorship / Pvt Ltd incorporation, GST registration, and Shop & Establishment license.</p>
        </div>

        <div style="background: #1c2541; padding: 25px; border-radius: 12px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #ffffff; font-size: 1.1rem; font-weight: 700; margin-bottom: 8px;">Step 2: Carrier Partner Ties</h4>
          <p style="color: #94a3b8; font-size: 0.9rem; margin: 0;">Tie up with container fleet owners and railway parcel booking agents for reliable intercity transit lines.</p>
        </div>

        <div style="background: #1c2541; padding: 25px; border-radius: 12px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #ffffff; font-size: 1.1rem; font-weight: 700; margin-bottom: 8px;">Step 3: Quality Packing Setup</h4>
          <p style="color: #94a3b8; font-size: 0.9rem; margin: 0;">Stock 80 GSM bubble wrap, stretch films, corrugated sheets, and train gunny bags for zero-scratch packing.</p>
        </div>

        <div style="background: #1c2541; padding: 25px; border-radius: 12px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #ffffff; font-size: 1.1rem; font-weight: 700; margin-bottom: 8px;">Step 4: Insurer Partnership</h4>
          <p style="color: #94a3b8; font-size: 0.9rem; margin: 0;">Partner with reputed marine insurance providers for instant transit policy issuance.</p>
        </div>

        <div style="background: #1c2541; padding: 25px; border-radius: 12px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #ffffff; font-size: 1.1rem; font-weight: 700; margin-bottom: 8px;">Step 5: Digital Lead Pipeline</h4>
          <p style="color: #94a3b8; font-size: 0.9rem; margin: 0;">Launch a responsive website, optimize Google Business Profile, and activate WhatsApp lead triggers.</p>
        </div>

        <div style="background: #1c2541; padding: 25px; border-radius: 12px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #ffffff; font-size: 1.1rem; font-weight: 700; margin-bottom: 8px;">Step 6: Customer Care & Tracking</h4>
          <p style="color: #94a3b8; font-size: 0.9rem; margin: 0;">Provide daily WhatsApp location updates and unboxing support at destination delivery.</p>
        </div>

      </div>
    </div>
  </section>

  <!-- Section 6: Legal & Compliance Documents -->
  <section style="padding: 60px 0; background: #1c2541;">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
      
      <div style="text-align: center; margin-bottom: 45px;">
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin-bottom: 12px;">
          Legal & Compliance Checklist for Logistics Business
        </h2>
        <p style="color: #94a3b8; font-size: 1rem; max-width: 700px; margin: 0 auto;">
          Required licenses and tax documentation to run a national vehicle shifting brand.
        </p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 25px;">
        <div style="background: rgba(255,255,255,0.03); padding: 25px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.08);">
          <h3 style="font-size: 1.15rem; color: #f59e0b; font-weight: 700; margin-bottom: 10px;">Statutory Business Licenses</h3>
          <ul style="color: #cbd5e1; font-size: 0.9rem; line-height: 1.8; padding-left: 20px; margin: 0;">
            <li>GST Registration Certificate (18% Goods Transport Agency)</li>
            <li>UDYAM MSME Registration</li>
            <li>Trade License & Shop Establishment Registration</li>
            <li>IBA Code Approval (Optional for Corporate Contracts)</li>
          </ul>
        </div>

        <div style="background: rgba(255,255,255,0.03); padding: 25px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.08);">
          <h3 style="font-size: 1.15rem; color: #f59e0b; font-weight: 700; margin-bottom: 10px;">Operational Document Templates</h3>
          <ul style="color: #cbd5e1; font-size: 0.9rem; line-height: 1.8; padding-left: 20px; margin: 0;">
            <li>Standard Goods Bilty / Consignment Note (LR)</li>
            <li>Itemized GST Quotation & Tax Invoice Formats</li>
            <li>Vehicle Pre-Inspection & Key Handover Sheet</li>
            <li>Transit Insurance Declaration Forms</li>
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
          Frequently Asked Questions (Bike Transport Business)
        </h2>
        <p style="color: #94a3b8; font-size: 1rem; max-width: 700px; margin: 0 auto;">
          Answers to key questions on starting or partnering in a bike shipping business.
        </p>
      </div>

      <div style="max-width: 900px; margin: 0 auto; display: grid; gap: 15px;">
        
        <div style="background: #1c2541; padding: 20px 25px; border-radius: 10px; border: 1px solid rgba(255,255,255,0.05);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Is a bike transport business profitable in India?</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.6; margin: 0;">
            Yes! With over 20 million two-wheelers sold annually in India and frequent student/work migrations, bike shipping yields 25% to 40% net profit margins per order.
          </p>
        </div>

        <div style="background: #1c2541; padding: 20px 25px; border-radius: 10px; border: 1px solid rgba(255,255,255,0.05);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">How can I partner with Shree Ashirwad Packers as a franchise?</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.6; margin: 0;">
            You can submit your city location and contact details through our lead form or WhatsApp. Our franchise team provides complete brand rights, booking CRM, and logistics support.
          </p>
        </div>

        <div style="background: #1c2541; padding: 20px 25px; border-radius: 10px; border: 1px solid rgba(255,255,255,0.05);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Do I need to own container trucks to start a bike transport agency?</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.6; margin: 0;">
            No. Most successful startups operate under an aggregator or agency model by partnering with established fleet owners and railway parcel networks.
          </p>
        </div>

        <div style="background: #1c2541; padding: 20px 25px; border-radius: 10px; border: 1px solid rgba(255,255,255,0.05);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">What GST percentage applies to bike transport services?</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.6; margin: 0;">
            Goods Transport Agencies (GTA) generally charge 5% GST without ITC or 12% with Input Tax Credit. Packing and full movers services attract 18% GST.
          </p>
        </div>

        <div style="background: #1c2541; padding: 20px 25px; border-radius: 10px; border: 1px solid rgba(255,255,255,0.05);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">How do I acquire bike transport leads online?</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.6; margin: 0;">
            Focus on high-intent local SEO landing pages, Google Search Ads, Google Business Profile reviews, and automated WhatsApp quote forms for high conversion rates.
          </p>
        </div>

      </div>

    </div>
  </section>

  <!-- Section 8: CTA Conversion Footer -->
  <section style="padding: 50px 0; background: linear-gradient(135deg, #1c2541 0%, #0b132b 100%); text-align: center; border-top: 1px solid rgba(245, 158, 11, 0.2);">
    <div class="container" style="max-width: 900px; margin: 0 auto; padding: 0 20px;">
      <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin-bottom: 15px;">
        Partner with Shree Ashirwad Packers Today
      </h2>
      <p style="font-size: 1.05rem; color: #cbd5e1; margin-bottom: 30px;">
        Get full franchise support, digital lead generation tools, and national vehicle logistics access.
      </p>

      <div style="display: flex; gap: 15px; justify-content: center; flex-wrap: wrap;">
        <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Representative" style="padding: 15px 35px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
          <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call <?php echo SITE_PHONE; ?>
        </a>
        <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20to%20discuss%20a%20bike%20transport%20franchise." title="WhatsApp Business Booking" target="_blank" style="padding: 15px 35px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
          <i class="fab fa-whatsapp" style="margin-right: 8px;"></i> WhatsApp Business Inquiry
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
      "name": "Is a bike transport business profitable in India?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes! With over 20 million two-wheelers sold annually in India and frequent student/work migrations, bike shipping yields 25% to 40% net profit margins per order."
      }
    },
    {
      "@type": "Question",
      "name": "How can I partner with Shree Ashirwad Packers as a franchise?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "You can submit your city location and contact details through our lead form or WhatsApp. Our franchise team provides complete brand rights, booking CRM, and logistics support."
      }
    },
    {
      "@type": "Question",
      "name": "Do I need to own container trucks to start a bike transport agency?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "No. Most successful startups operate under an aggregator or agency model by partnering with established fleet owners and railway parcel networks."
      }
    },
    {
      "@type": "Question",
      "name": "What GST percentage applies to bike transport services?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Goods Transport Agencies (GTA) generally charge 5% GST without ITC or 12% with Input Tax Credit. Packing and full movers services attract 18% GST."
      }
    },
    {
      "@type": "Question",
      "name": "How do I acquire bike transport leads online?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Focus on high-intent local SEO landing pages, Google Search Ads, Google Business Profile reviews, and automated WhatsApp quote forms for high conversion rates."
      }
    }
  ]
}
</script>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
