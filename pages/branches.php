<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "Branch Offices – Shree Ashirwad Packers and Movers (OPC) Pvt. Ltd. Locations";
$page_desc = "Find Shree Ashirwad Packers and Movers branch offices across Jharkhand, Bihar, and India. Contact our Ranchi headquarters, Jamshedpur hub, Bokaro, Dhanbad, and Patna branches for 100% insured household shifting, car carriers, and bike transport.";
$page_keywords = "packers and movers branches, ranchi headquarters packers movers, jamshedpur branch packers movers, bokaro branch packers movers, dhanbad branch packers movers, patna branch packers movers, shree ashirwad branch contact, iba approved branch offices";

$faq_list = [
    ['q' => 'Where is the main headquarters of Shree Ashirwad Packers and Movers?', 'a' => 'Our registered headquarters is located at Opposite Landmark Hotel, Ratu Road, Ranchi, Jharkhand 834001.'],
    ['q' => 'Which cities have direct Shree Ashirwad branch offices?', 'a' => 'We operate fully functional branch offices in Ranchi, Jamshedpur, Bokaro Steel City, Dhanbad, Patna, and Deoghar, serving all surrounding districts.'],
    ['q' => 'Can I visit a branch office for physical shifting booking and bill verification?', 'a' => 'Yes, all our branch offices are open 7 days a week from 8:00 AM to 8:00 PM for in-person consultation, consignment tracking, and IBA-approved bill generation.'],
    ['q' => 'Do your branches offer free pre-move home inspection services?', 'a' => 'Yes, our local branch surveyors provide zero-cost, no-obligation doorstep home and office inspection across all branch cities.'],
    ['q' => 'How can I contact the nearest branch office for immediate shifting assistance?', 'a' => 'Call our central helpline at +91 8409531615 or email info@shreeashirwadpackersandmovers.com to be connected to your local branch supervisor.']
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
            VERIFIED REGIONAL BRANCH NETWORK
          </span>
          <h1 style="font-size: 2.7rem; font-weight: 800; line-height: 1.2; margin-bottom: 20px; color: #ffffff;">
            Shree Ashirwad <span style="color: #f59e0b;">Branch Offices &amp; Locations</span>
          </h1>
          <p style="font-size: 1.12rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 25px;">
            Connect directly with Shree Ashirwad Packers and Movers (OPC) Pvt. Ltd. verified branch offices across Jharkhand, Bihar, and major intercity logistics corridors. Visit our Ranchi corporate headquarters or regional branch offices in Jamshedpur, Bokaro, Dhanbad, and Patna for 100% insured household packing, office relocation, enclosed car shipping, and multi-layer bike parcel services.
          </p>

          <div style="display: flex; gap: 15px; flex-wrap: wrap; margin-bottom: 30px;">
            <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Central Branch Helpline" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
              <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call Branch Desk: <?php echo SITE_PHONE; ?>
            </a>
            <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20to%20connect%20with%20my%20nearest%20branch%20office." title="Chat on WhatsApp" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
              <i class="fab fa-whatsapp" style="margin-right: 8px;"></i> Chat on WhatsApp
            </a>
          </div>

          <div style="display: flex; gap: 20px; font-size: 0.9rem; color: #94a3b8;">
            <span><strong style="color: #f59e0b;">IBA Approved</strong> Bills</span>
            <span><strong style="color: #f59e0b;">7-Layer</strong> Protection</span>
            <span><strong style="color: #f59e0b;">GPS Fleet</strong> Tracking</span>
          </div>
        </div>

        <!-- Hero Lead Form Column -->
        <div class="hero-form-card" style="background: rgba(255, 255, 255, 0.05); backdrop-filter: blur(10px); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 16px; padding: 30px; box-shadow: 0 15px 35px rgba(0,0,0,0.4);">
          <h2 style="font-size: 1.4rem; color: #ffffff; margin-bottom: 8px; font-weight: 700; text-align: center;">Locate Nearest Branch Quote</h2>
          <p style="font-size: 0.85rem; color: #94a3b8; text-align: center; margin-bottom: 20px;">Get transparent relocation cost estimation on WhatsApp in 2 minutes</p>

          <form action="#" method="POST" onsubmit="sendHeroWhatsAppLead(event, this);">
            <div style="margin-bottom: 14px;">
              <input type="text" name="name" class="form-control" placeholder="Your Full Name" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="margin-bottom: 14px;">
              <input type="tel" name="phone" class="form-control" placeholder="10-Digit Phone Number" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 10px; margin-bottom: 14px;">
              <input type="text" name="move_from" class="form-control" placeholder="Current City/Branch" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
              <input type="text" name="move_to" class="form-control" placeholder="Destination City" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <button type="submit" style="width: 100%; padding: 14px; background: linear-gradient(135deg, #d32f2f 0%, #f59e0b 100%); color: #ffffff; border: none; border-radius: 50px; font-weight: 700; font-size: 1rem; cursor: pointer;">
              Connect With Branch &rarr;
            </button>
          </form>
        </div>

      </div>
    </div>
  </section>

  <!-- Section 2: Stats Section -->
  <section class="stats-section" style="padding: 50px 0; background: #070d1e; border-bottom: 1px solid rgba(245, 158, 11, 0.2);">
    <div class="container">
      <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 20px; text-align: center;">
        <div style="padding: 20px; background: rgba(23, 42, 84, 0.5); border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">6+</div>
          <div style="font-size: 0.9rem; color: #cbd5e1; margin-top: 5px;">Regional Hub Branches</div>
        </div>
        <div style="padding: 20px; background: rgba(23, 42, 84, 0.5); border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">24 Districts</div>
          <div style="font-size: 0.9rem; color: #cbd5e1; margin-top: 5px;">Full State Coverage</div>
        </div>
        <div style="padding: 20px; background: rgba(23, 42, 84, 0.5); border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">15,000+</div>
          <div style="font-size: 0.9rem; color: #cbd5e1; margin-top: 5px;">Relocations Managed</div>
        </div>
        <div style="padding: 20px; background: rgba(23, 42, 84, 0.5); border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">100%</div>
          <div style="font-size: 0.9rem; color: #cbd5e1; margin-top: 5px;">IBA GST Billing</div>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 3: Branch Network Overview & Cards Grid -->
  <section style="padding: 70px 0; background: #0b132b; color: #e2e8f0; line-height: 1.8;">
    <div class="container">
      
      <div style="max-width: 950px; margin: 0 auto;">
        <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Branch Directory</span>
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin: 10px 0 20px 0;">
          Our Primary <span style="color: #f59e0b;">Branch Office Network</span>
        </h2>
        <p style="font-size: 1.05rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 25px;">
          Shree Ashirwad Packers and Movers operates a network of company-owned branch offices staffed by trained shifting supervisors, packing technicians, and customer service teams. Each branch office manages local vehicle fleets, temperature-controlled warehouses, and IBA claim documentation centers.
        </p>

        <!-- 6 Branch Office Cards (3x2 Grid) -->
        <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px; margin: 30px 0;">
          
          <!-- Card 1: Ranchi HQ -->
          <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px; box-shadow: 0 10px 25px rgba(0,0,0,0.3);">
            <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;"><i class="fas fa-building"></i></div>
            <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">1. Ranchi Registered HQ</h3>
            <p style="font-size: 0.9rem; color: #cbd5e1; line-height: 1.6; margin-bottom: 10px;">
              Opposite Landmark Hotel, Ratu Road, Ranchi, Jharkhand 834001. Phone: +91 8409531615.
            </p>
            <a href="<?php echo SITE_URL; ?>packers-and-movers-in-ranchi" title="View Ranchi Branch Hub →" style="color: #f59e0b; font-weight: 700; font-size: 0.85rem; text-decoration: underline;">View Ranchi Branch Hub →</a>
          </div>

          <!-- Card 2: Jamshedpur Branch -->
          <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px; box-shadow: 0 10px 25px rgba(0,0,0,0.3);">
            <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;"><i class="fas fa-map-marked-alt"></i></div>
            <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">2. Jamshedpur Regional Office</h3>
            <p style="font-size: 0.9rem; color: #cbd5e1; line-height: 1.6; margin-bottom: 10px;">
              Mango Chowk, Near NH-33 Highway Corridor, Jamshedpur, Jharkhand 831012.
            </p>
            <a href="<?php echo SITE_URL; ?>packers-and-movers-in-jamshedpur" title="View Jamshedpur Branch Hub →" style="color: #f59e0b; font-weight: 700; font-size: 0.85rem; text-decoration: underline;">View Jamshedpur Branch Hub →</a>
          </div>

          <!-- Card 3: Bokaro Branch -->
          <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px; box-shadow: 0 10px 25px rgba(0,0,0,0.3);">
            <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;"><i class="fas fa-warehouse"></i></div>
            <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">3. Bokaro Steel City Branch</h3>
            <p style="font-size: 0.9rem; color: #cbd5e1; line-height: 1.6; margin-bottom: 10px;">
              Sector 4 Commercial Complex, Bokaro Steel City, Jharkhand 827004.
            </p>
            <a href="<?php echo SITE_URL; ?>packers-and-movers-in-bokaro" title="View Bokaro Branch Hub →" style="color: #f59e0b; font-weight: 700; font-size: 0.85rem; text-decoration: underline;">View Bokaro Branch Hub →</a>
          </div>

          <!-- Card 4: Dhanbad Branch -->
          <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px; box-shadow: 0 10px 25px rgba(0,0,0,0.3);">
            <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;"><i class="fas fa-truck-loading"></i></div>
            <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">4. Dhanbad Coalfield Office</h3>
            <p style="font-size: 0.9rem; color: #cbd5e1; line-height: 1.6; margin-bottom: 10px;">
              Bank More Commercial Hub, Dhanbad, Jharkhand 826001.
            </p>
            <a href="<?php echo SITE_URL; ?>packers-and-movers-in-dhanbad" title="View Dhanbad Branch Hub →" style="color: #f59e0b; font-weight: 700; font-size: 0.85rem; text-decoration: underline;">View Dhanbad Branch Hub →</a>
          </div>

          <!-- Card 5: Patna Branch -->
          <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px; box-shadow: 0 10px 25px rgba(0,0,0,0.3);">
            <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;"><i class="fas fa-city"></i></div>
            <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">5. Patna Bihar Branch</h3>
            <p style="font-size: 0.9rem; color: #cbd5e1; line-height: 1.6; margin-bottom: 10px;">
              Kankarbagh Main Road, Patna, Bihar 800020.
            </p>
            <a href="<?php echo SITE_URL; ?>packers-and-movers-in-patna" title="View Patna Branch Hub →" style="color: #f59e0b; font-weight: 700; font-size: 0.85rem; text-decoration: underline;">View Patna Branch Hub →</a>
          </div>

          <!-- Card 6: Deoghar Branch -->
          <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px; box-shadow: 0 10px 25px rgba(0,0,0,0.3);">
            <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;"><i class="fas fa-shield-alt"></i></div>
            <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">6. Deoghar Regional Branch</h3>
            <p style="font-size: 0.9rem; color: #cbd5e1; line-height: 1.6; margin-bottom: 10px;">
              Tower Chowk, Deoghar, Jharkhand 814112.
            </p>
            <a href="<?php echo SITE_URL; ?>car-transportation-in-deoghar" title="View Deoghar Branch Hub →" style="color: #f59e0b; font-weight: 700; font-size: 0.85rem; text-decoration: underline;">View Deoghar Branch Hub →</a>
          </div>

        </div>

      </div>

    </div>
  </section>

  <!-- Section 4: Shifting Tariff & Pricing Tables -->
  <section style="padding: 70px 0; background: linear-gradient(180deg, #0b132b 0%, #16203b 100%); color: #ffffff;">
    <div class="container" style="max-width: 900px;">
      
      <div class="section-header text-center" style="margin-bottom: 45px;">
        <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Standard Rates</span>
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin-top: 10px;">
          Standardized Branch Shifting <span style="color: #f59e0b;">Tariffs &amp; Estimates</span>
        </h2>
        <p style="font-size: 1.05rem; color: #cbd5e1; max-width: 800px; margin: 15px auto 0 auto; line-height: 1.7;">
          All Shree Ashirwad branch offices follow unified pricing standards for local and intercity relocations:
        </p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 24px;">
        
        <div style="background: #172a54; padding: 24px; border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.3);">
          <h3 style="font-size: 1.2rem; color: #f59e0b; font-weight: 700; margin-bottom: 12px;"><i class="fas fa-home"></i> Local Household Shifting Rates</h3>
          <ul style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.8; padding-left: 18px; margin: 0;">
            <li>1 BHK Local Apartment Shift: ₹3,500 – ₹6,500</li>
            <li>2 BHK Local Household Shift: ₹5,500 – ₹9,500</li>
            <li>3 BHK / Villa Local Shift: ₹8,500 – ₹14,500</li>
            <li>Includes 7-layer bubble wrapping</li>
            <li>Includes loading, unloading &amp; un-stacking</li>
          </ul>
        </div>

        <div style="background: #172a54; padding: 24px; border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.3);">
          <h3 style="font-size: 1.2rem; color: #f59e0b; font-weight: 700; margin-bottom: 12px;"><i class="fas fa-car-side"></i> Vehicle &amp; Intercity Transport Rates</h3>
          <ul style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.8; padding-left: 18px; margin: 0;">
            <li>Bike Transport (Intercity): ₹2,000 – ₹6,500</li>
            <li>Car Transport (Enclosed Carrier): ₹6,500 – ₹18,500</li>
            <li>Intercity Household Shift: ₹12,000 – ₹32,000</li>
            <li>Includes 100% Transit Insurance</li>
            <li>Includes IBA Approved Billing Set</li>
          </ul>
        </div>

      </div>

    </div>
  </section>

  <!-- Section 5: Step-by-Step Branch Booking Protocol -->
  <section style="padding: 70px 0; background: #0b132b; color: #e2e8f0; border-top: 1px solid rgba(245, 158, 11, 0.15);">
    <div class="container" style="max-width: 900px;">
      
      <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Branch Workflow</span>
      <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin: 10px 0 20px 0;">
        5-Step Process to Book Shifting at Any Branch
      </h2>

      <div style="display: grid; grid-template-columns: 1fr; gap: 16px; margin-top: 25px;">
        <div style="background: rgba(23, 42, 84, 0.6); padding: 20px 24px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #ffffff; font-size: 1.15rem; margin-bottom: 6px;">Step 1: Contact Branch Desk or Submit WhatsApp Request</h4>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0;">Call +91 8409531615 or submit your shifting requirements online to connect with your local branch manager.</p>
        </div>
        <div style="background: rgba(23, 42, 84, 0.6); padding: 20px 24px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #ffffff; font-size: 1.15rem; margin-bottom: 6px;">Step 2: Free Doorstep Inspection &amp; Written Estimation</h4>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0;">Our branch surveyor visits your home, inspects furniture/vehicle volume, and provides a guaranteed, itemized price quote.</p>
        </div>
        <div style="background: rgba(23, 42, 84, 0.6); padding: 20px 24px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #ffffff; font-size: 1.15rem; margin-bottom: 6px;">Step 3: Professional 7-Layer Packaging &amp; Loading</h4>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0;">On moving day, our trained branch packing team arrives with bubble wrap, corrugated sheets, and heavy-duty container trucks.</p>
        </div>
        <div style="background: rgba(23, 42, 84, 0.6); padding: 20px 24px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #ffffff; font-size: 1.15rem; margin-bottom: 6px;">Step 4: GPS Tracked Highway Transit &amp; Insurance Shield</h4>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0;">Your goods travel inside sealed containers with real-time GPS updates and full transit risk insurance coverage.</p>
        </div>
        <div style="background: rgba(23, 42, 84, 0.6); padding: 20px 24px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #ffffff; font-size: 1.15rem; margin-bottom: 6px;">Step 5: Doorstep Delivery &amp; IBA Claim Documentation</h4>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0;">Unloading and un-stacking at destination, followed by instant handover of official IBA GST consignment bills for corporate claims.</p>
        </div>
      </div>

    </div>
  </section>

  <!-- Section 6: FAQ Section -->
  <section style="padding: 70px 0; background: #070d1e; color: #ffffff;">
    <div class="container" style="max-width: 900px;">
      
      <div class="section-header text-center" style="margin-bottom: 45px;">
        <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Branch Assistance</span>
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin-top: 10px;">
          Frequently Asked Questions About <span style="color: #f59e0b;">Branch Offices</span>
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

  <!-- Section 7: Call To Action Banner -->
  <section style="padding: 70px 0; background: linear-gradient(135deg, #172a54 0%, #0b132b 100%); border-top: 1.5px solid rgba(245, 158, 11, 0.4); color: #ffffff;">
    <div class="container" style="max-width: 900px; text-align: center;">
      
      <span class="section-tag" style="background: rgba(245, 158, 11, 0.2); color: #f59e0b; padding: 6px 16px; border-radius: 20px; font-size: 0.85rem; font-weight: 700; text-transform: uppercase;">
        Connect With Your Local Branch Today
      </span>

      <h2 style="font-size: 2.3rem; font-weight: 800; margin: 15px 0 15px 0; color: #ffffff;">
        Need Reliable Shifting? Visit or Call <span style="color: #f59e0b;">Shree Ashirwad Packers</span>
      </h2>

      <p style="font-size: 1.05rem; color: #cbd5e1; max-width: 750px; margin: 0 auto 30px auto; line-height: 1.7;">
        Get in touch with our branch office desk for instant door-to-door relocation quotes and IBA-approved billing.
      </p>

      <div style="display: flex; gap: 15px; justify-content: center; flex-wrap: wrap;">
        <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Central Branch Desk:" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 30px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1.05rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
          <i class="fas fa-phone-alt"></i> Call Central Desk: <?php echo SITE_PHONE; ?>
        </a>
        <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20branch%20shifting%20information." title="Chat on WhatsApp" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 30px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1.05rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
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
  
  var message = "Hello Shree Ashirwad Packers & Movers Branch Office,\n\nI would like to request a shifting quote:\n- Name: " + name + "\n- Phone: " + phone + "\n- Pickup City/Branch: " + moveFrom + "\n- Destination City: " + moveTo;
  
  var whatsappUrl = "https://api.whatsapp.com/send?phone=918409531615&text=" + encodeURIComponent(message);
  window.location.href = whatsappUrl;
}
</script>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
