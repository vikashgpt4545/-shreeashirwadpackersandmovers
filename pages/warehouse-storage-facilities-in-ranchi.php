<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "Warehouse Storage Facilities in Ranchi | Secure Goods Storage";
$page_desc = "Safe warehouse storage facilities in Ranchi. 24/7 CCTV surveillance, pest control, elevated wooden pallets & flexible short/long-term storage. Call 8409531615.";
$page_keywords = "warehouse storage facilities in ranchi, household storage ranchi, goods luggage storage ranchi, commercial warehousing ranchi, short term storage unit ranchi";

require_once __DIR__ . '/../includes/header.php';
?>

<main class="site-main">

  <!-- Hero Section with Lead Form -->
  <section class="hero-section" style="background: linear-gradient(135deg, #0b132b 0%, #1c2541 100%); padding: 60px 0; color: #ffffff;">
    <div class="container">
      <div class="hero-grid" style="display: grid; grid-template-columns: 1.2fr 0.8fr; gap: 40px; align-items: center;">
        
        <!-- Hero Text Column -->
        <div class="hero-text">
          <span class="section-tag" style="background: rgba(245, 158, 11, 0.15); color: #f59e0b; border: 1px solid rgba(245, 158, 11, 0.4); padding: 6px 16px; border-radius: 20px; font-size: 0.85rem; font-weight: 700; text-transform: uppercase; display: inline-block; margin-bottom: 15px;">
            Secure Warehousing &amp; Storage Solutions 2026
          </span>
          <h1 style="font-size: 2.8rem; font-weight: 800; line-height: 1.2; margin-bottom: 20px; color: #ffffff;">
            Warehouse Storage Facilities in <span style="color: #f59e0b;">Ranchi</span>
          </h1>
          <p style="font-size: 1.15rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 25px;">
            Whether you are experiencing a home renovation delay, awaiting new apartment possession, transitioning between jobs, or managing commercial retail inventory overflow, securing a safe, moisture-free, and surveillance-monitored warehouse storage facility in Ranchi is essential. Shree Ashirwad Packers and Movers operates state-of-the-art warehousing hubs equipped with elevated heavy-duty wooden pallets, 24/7 high-definition CCTV security recording, bi-weekly professional pest control treatments, fire suppression systems, and flexible daily, monthly, or annual storage plans. Our dedicated warehousing personnel provide complete inventory barcode cataloging, 80-micron vacuum stretch wrapping, individual box labeling, and hassle-free doorstep pickup and redelivery across all Ranchi localities. Explore our comprehensive guide to understand our storage security standards, safety protocols, and transparent monthly rate structures.
          </p>

          <div style="display: flex; gap: 15px; flex-wrap: wrap; margin-bottom: 30px;">
            <a href="tel:<?php echo SITE_PHONE_RAW; ?>" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
              📞 Call Warehouse Desk: <?php echo SITE_PHONE; ?>
            </a>
            <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers%20and%20Movers,%20I%20need%20warehouse%20storage%20facility%20details." target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
              💬 Chat on WhatsApp
            </a>
          </div>

          <div style="display: flex; gap: 20px; font-size: 0.9rem; color: #94a3b8;">
            <span><strong style="color: #f59e0b;">24/7</strong> CCTV Camera Security</span>
            <span><strong style="color: #f59e0b;">Elevated</strong> Wooden Palleting</span>
            <span><strong style="color: #f59e0b;">Moisture &amp; Pest</strong> Proof</span>
          </div>
        </div>

        <!-- Hero Lead Form Column -->
        <div class="hero-form-card" style="background: rgba(255, 255, 255, 0.05); backdrop-filter: blur(10px); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 16px; padding: 30px; box-shadow: 0 15px 35px rgba(0,0,0,0.4);">
          <h2 style="font-size: 1.4rem; color: #ffffff; margin-bottom: 8px; font-weight: 700; text-align: center;">Get Warehouse Storage Quote</h2>
          <p style="font-size: 0.85rem; color: #94a3b8; text-align: center; margin-bottom: 20px;">Receive itemized monthly storage estimates via WhatsApp</p>

          <form action="#" method="POST" onsubmit="sendHeroWhatsAppLead(event, this);">
            <div style="margin-bottom: 14px;">
              <input type="text" name="name" class="form-control" placeholder="Your Full Name" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="margin-bottom: 14px;">
              <input type="tel" name="phone" class="form-control" placeholder="10-Digit Phone / WhatsApp Number" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 10px; margin-bottom: 14px;">
              <input type="text" name="move_from" class="form-control" placeholder="Pickup Area in Ranchi" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
              <input type="text" name="move_to" class="form-control" placeholder="Required Storage Duration (e.g. 2 Months)" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="margin-bottom: 16px;">
              <textarea name="message" class="form-control" rows="2" placeholder="List of Goods for Storage (1BHK, 2BHK, Commercial)" style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;"></textarea>
            </div>
            <button type="submit" class="btn btn-primary" style="width: 100%; padding: 14px; font-weight: 700; font-size: 1rem; border-radius: 8px;">
              Get Storage Quote on WhatsApp
            </button>
          </form>
        </div>

      </div>
    </div>
  </section>

  <!-- Section 2: Storage Key Statistics -->
  <section class="stats-section" style="padding: 50px 0; background: #070d1e; border-bottom: 1px solid rgba(245, 158, 11, 0.2);">
    <div class="container">
      <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 20px; text-align: center;">
        <div style="padding: 20px; background: rgba(23, 42, 84, 0.5); border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">24/7</div>
          <div style="font-size: 0.9rem; color: #cbd5e1; margin-top: 5px;">CCTV HD Camera Recording</div>
        </div>
        <div style="padding: 20px; background: rgba(23, 42, 84, 0.5); border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">100%</div>
          <div style="font-size: 0.9rem; color: #cbd5e1; margin-top: 5px;">Elevated Pallet Storage</div>
        </div>
        <div style="padding: 20px; background: rgba(23, 42, 84, 0.5); border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">Bi-Weekly</div>
          <div style="font-size: 0.9rem; color: #cbd5e1; margin-top: 5px;">Pest Control Treatments</div>
        </div>
        <div style="padding: 20px; background: rgba(23, 42, 84, 0.5); border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">Flexible</div>
          <div style="font-size: 0.9rem; color: #cbd5e1; margin-top: 5px;">Daily &amp; Monthly Plans</div>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 3: 6-Card Grid (3x2 Layout) - 6 Warehouse Features -->
  <section style="padding: 70px 0; background: #0b132b; color: #e2e8f0; line-height: 1.8;">
    <div class="container">
      
      <div style="max-width: 950px; margin: 0 auto;">
        <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Warehouse Facilities</span>
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin: 10px 0 20px 0;">
          6 Key Features of Our <span style="color: #f59e0b;">Ranchi Storage Hubs</span>
        </h2>
        <p style="font-size: 1.05rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 25px;">
          Our commercial warehousing facilities are built to industrial safety specifications to shield your personal and corporate belongings:
        </p>

        <!-- 6 Cards Grid (3x2 Layout) -->
        <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px; margin: 30px 0;">
          
          <!-- Card 1 -->
          <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px; box-shadow: 0 10px 25px rgba(0,0,0,0.3);">
            <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;">📹</div>
            <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">1. Continuous 24/7 CCTV &amp; Guard Security</h3>
            <p style="font-size: 0.9rem; color: #cbd5e1; line-height: 1.6; margin: 0;">
              High-definition infrared night-vision CCTV cameras record all facility aisles around the clock, backed by physical security guards and biometric access logs.
            </p>
          </div>

          <!-- Card 2 -->
          <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px; box-shadow: 0 10px 25px rgba(0,0,0,0.3);">
            <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;">🪵</div>
            <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">2. Elevated Wooden Pallet Racking</h3>
            <p style="font-size: 0.9rem; color: #cbd5e1; line-height: 1.6; margin: 0;">
              Goods are never placed directly on concrete floors. All packed cartons and furniture rest on heavy-duty elevated wooden pallets, preventing ground moisture seepage.
            </p>
          </div>

          <!-- Card 3 -->
          <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px; box-shadow: 0 10px 25px rgba(0,0,0,0.3);">
            <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;">🧪</div>
            <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">3. Regular Pest &amp; Termite Fumigation</h3>
            <p style="font-size: 0.9rem; color: #cbd5e1; margin: 0; line-height: 1.6;">
              Bi-weekly pest control treatments and anti-termite sprays safeguard wooden wardrobes, upholstery, books, and clothing against silverfish, rodents, and termites.
            </p>
          </div>

          <!-- Card 4 -->
          <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px; box-shadow: 0 10px 25px rgba(0,0,0,0.3);">
            <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;">🧯</div>
            <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">4. Automated Fire Protection Systems</h3>
            <p style="font-size: 0.9rem; color: #cbd5e1; margin: 0; line-height: 1.6;">
              Equipped with ceiling smoke detectors, automatic water sprinklers, fire extinguishers, and emergency alarm panels compliant with national fire safety codes.
            </p>
          </div>

          <!-- Card 5 -->
          <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px; box-shadow: 0 10px 25px rgba(0,0,0,0.3);">
            <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;">🏷️</div>
            <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">5. Barcode Itemization &amp; Inventory Logs</h3>
            <p style="font-size: 0.9rem; color: #cbd5e1; margin: 0; line-height: 1.6;">
              Every customer consignment receives a unique barcode ID tag. Detailed inventory receipts are provided upon intake, listing item counts and condition.
            </p>
          </div>

          <!-- Card 6 -->
          <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px; box-shadow: 0 10px 25px rgba(0,0,0,0.3);">
            <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;">🗓️</div>
            <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">6. Flexible Short-Term &amp; Long-Term Tenure</h3>
            <p style="font-size: 0.9rem; color: #cbd5e1; margin: 0; line-height: 1.6;">
              Store your items for 7 days, 1 month, or multiple years with flexible billing contracts, easy partial retrieval options, and zero lock-in penalties.
            </p>
          </div>

        </div>

        <p style="font-size: 1.05rem; color: #cbd5e1; line-height: 1.8; margin-top: 25px;">
          These 6 facility standards make Shree Ashirwad Packers the premier choice for secure household and business storage across Ranchi.
        </p>

      </div>

    </div>
  </section>

  <!-- Section 4: Storage Rate Slabs -->
  <section style="padding: 70px 0; background: linear-gradient(180deg, #0b132b 0%, #16203b 100%); color: #ffffff;">
    <div class="container" style="max-width: 900px;">
      
      <div class="section-header text-center" style="margin-bottom: 45px;">
        <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Storage Pricing</span>
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin-top: 10px;">
          Standard Monthly Warehouse Storage Rates in <span style="color: #f59e0b;">Ranchi</span>
        </h2>
        <p style="font-size: 1.05rem; color: #cbd5e1; max-width: 800px; margin: 15px auto 0 auto; line-height: 1.7;">
          Transparent monthly rental rate slabs based on consignment volume and storage space:
        </p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 24px;">
        
        <div style="background: #172a54; padding: 24px; border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.3);">
          <h3 style="font-size: 1.2rem; color: #f59e0b; font-weight: 700; margin-bottom: 12px;">🏡 Household Goods Storage Slabs</h3>
          <ul style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.8; padding-left: 18px; margin: 0;">
            <li>Single Luggage / 5 Box Storage: ₹1,500 – ₹2,500 / month</li>
            <li>1 BHK Full Household Storage: ₹3,000 – ₹5,000 / month</li>
            <li>2 BHK Full Household Storage: ₹5,000 – ₹8,000 / month</li>
            <li>3 BHK Full Household Storage: ₹8,000 – ₹12,000 / month</li>
            <li>Includes elevated pallet placement &amp; wrapping</li>
            <li>Includes 24/7 CCTV monitoring &amp; insurance</li>
          </ul>
        </div>

        <div style="background: #172a54; padding: 24px; border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.3);">
          <h3 style="font-size: 1.2rem; color: #f59e0b; font-weight: 700; margin-bottom: 12px;">🏢 Commercial &amp; Vehicle Storage Slabs</h3>
          <ul style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.8; padding-left: 18px; margin: 0;">
            <li>Office File Archives / Documents: ₹2,000 – ₹4,000 / month</li>
            <li>Commercial Retail Inventory (Per Sq Ft): ₹25 – ₹40 / sq ft</li>
            <li>Two-Wheeler Covered Storage: ₹1,500 – ₹2,500 / month</li>
            <li>Four-Wheeler Covered Storage: ₹3,500 – ₹6,000 / month</li>
            <li>Includes regular vehicle battery maintenance</li>
            <li>Includes barcode inventory logging</li>
          </ul>
        </div>

      </div>

      <p style="font-size: 1.05rem; color: #cbd5e1; line-height: 1.8; margin-top: 25px;">
        All storage rate quotes provided by Shree Ashirwad Packers are fixed upon contract signing, guaranteeing zero unexpected maintenance fees or hidden retrieval surcharges.
      </p>

    </div>
  </section>

  <!-- Section 5: Storage Process & Security Protocol -->
  <section style="padding: 70px 0; background: #0b132b; color: #e2e8f0; border-top: 1px solid rgba(245, 158, 11, 0.15);">
    <div class="container" style="max-width: 900px;">
      
      <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Security Protocols</span>
      <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin: 10px 0 20px 0;">
        5 Steps of Our Warehouse Storage Workflow
      </h2>

      <p style="font-size: 1.05rem; color: #cbd5e1; margin-bottom: 25px; line-height: 1.8;">
        How we manage your belongings from doorstep pickup to secure warehouse placement:
      </p>

      <div style="display: grid; grid-template-columns: 1fr; gap: 16px; margin-bottom: 35px;">
        <div style="background: rgba(23, 42, 84, 0.6); padding: 20px 24px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #ffffff; font-size: 1.15rem; margin-bottom: 6px;">1. Doorstep Pickup &amp; Multi-Layer Packaging</h4>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.6;">
            Our team arrives at your location, packs items in 7-layer bubble wrap and stretch film, and seals all furniture doors.
          </p>
        </div>
        <div style="background: rgba(23, 42, 84, 0.6); padding: 20px 24px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #ffffff; font-size: 1.15rem; margin-bottom: 6px;">2. Detailed Inventory Logging &amp; Barcode Tagging</h4>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.6;">
            Each box and furniture piece is cataloged with item description, serial number, pre-existing condition, and barcode tag.
          </p>
        </div>
        <div style="background: rgba(23, 42, 84, 0.6); padding: 20px 24px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #ffffff; font-size: 1.15rem; margin-bottom: 6px;">3. Closed Container Transit to Warehouse Facility</h4>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.6;">
            Goods are loaded into weatherproof container trucks and transported directly to our Ranchi warehousing facility.
          </p>
        </div>
        <div style="background: rgba(23, 42, 84, 0.6); padding: 20px 24px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #ffffff; font-size: 1.15rem; margin-bottom: 6px;">4. Elevated Pallet Placement &amp; Locked Bay Staging</h4>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.6;">
            Consignments are placed onto elevated wooden pallets inside assigned, locked storage bays with 24/7 CCTV coverage.
          </p>
        </div>
        <div style="background: rgba(23, 42, 84, 0.6); padding: 20px 24px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #ffffff; font-size: 1.15rem; margin-bottom: 6px;">5. Redelivery to Destination on Required Date</h4>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.6;">
            Upon notice from client, goods are retrieved, loaded into container trucks, redelivered to your new address, and unpacked.
          </p>
        </div>
      </div>

    </div>
  </section>

  <!-- Section 6: Localities Served in Ranchi (Internal Link Grid 1 - 4 Links) -->
  <section style="padding: 70px 0; background: #070d1e; color: #ffffff;">
    <div class="container" style="max-width: 900px;">
      
      <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Service Coverage</span>
      <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin: 10px 0 20px 0;">
        Warehouse Pickup Services Across <span style="color: #f59e0b;">Ranchi</span>
      </h2>

      <p style="font-size: 1.05rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 20px;">
        We provide doorstep storage pickup and redelivery across all major residential sectors in Ranchi:
      </p>

      <!-- Internal Link Grid 1 (4 Contextual Links) -->
      <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 16px; margin-bottom: 30px;">
        <div style="background: #101c40; padding: 18px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #ffffff; font-size: 1.1rem; margin-bottom: 8px;">Namkum Industrial &amp; Warehouse Corridor</h4>
          <p style="font-size: 0.9rem; color: #94a3b8; margin-bottom: 10px;">Primary warehousing and commercial storage facilities in Namkum.</p>
          <a href="<?php echo SITE_URL; ?>pages/packers-and-movers-namkum-ranchi.php" style="color: #f59e0b; text-decoration: underline; font-weight: 600; font-size: 0.9rem;">
            Packers Movers Namkum Ranchi →
          </a>
        </div>

        <div style="background: #101c40; padding: 18px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #ffffff; font-size: 1.1rem; margin-bottom: 8px;">Tupudana Industrial Zone</h4>
          <p style="font-size: 0.9rem; color: #94a3b8; margin-bottom: 10px;">Heavy machinery and commercial goods storage in Tupudana.</p>
          <a href="<?php echo SITE_URL; ?>pages/packers-and-movers-tupudana-ranchi.php" style="color: #f59e0b; text-decoration: underline; font-weight: 600; font-size: 0.9rem;">
            Packers Movers Tupudana Ranchi →
          </a>
        </div>

        <div style="background: #101c40; padding: 18px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #ffffff; font-size: 1.1rem; margin-bottom: 8px;">Booty More Commercial Sector</h4>
          <p style="font-size: 0.9rem; color: #94a3b8; margin-bottom: 10px;">Doorstep household storage pickup services in Booty More.</p>
          <a href="<?php echo SITE_URL; ?>pages/packers-and-movers-booty-more-ranchi.php" style="color: #f59e0b; text-decoration: underline; font-weight: 600; font-size: 0.9rem;">
            Packers Movers Booty More Ranchi →
          </a>
        </div>

        <div style="background: #101c40; padding: 18px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #ffffff; font-size: 1.1rem; margin-bottom: 8px;">Ratu Road Residential Sector</h4>
          <p style="font-size: 0.9rem; color: #94a3b8; margin-bottom: 10px;">Short-term luggage and furniture storage in Ratu Road.</p>
          <a href="<?php echo SITE_URL; ?>pages/packers-and-movers-ratu-road-ranchi.php" style="color: #f59e0b; text-decoration: underline; font-weight: 600; font-size: 0.9rem;">
            Packers Movers Ratu Road Ranchi →
          </a>
        </div>
      </div>

    </div>
  </section>

  <!-- Section 7: Intercity Storage & Transit (Internal Link Grid 2 - 4 Links) -->
  <section style="padding: 70px 0; background: #0b132b; color: #ffffff;">
    <div class="container" style="max-width: 900px;">
      
      <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Transit Warehousing</span>
      <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin: 10px 0 20px 0;">
        Intercity Transit Warehousing from <span style="color: #f59e0b;">Ranchi</span>
      </h2>

      <p style="font-size: 1.05rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 25px;">
        For long-distance intercity moves, we offer complimentary transit storage at destination hubs:
      </p>

      <!-- Internal Link Grid 2 (4 Contextual Links) -->
      <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 16px; margin-bottom: 30px;">
        <div style="background: #172a54; padding: 18px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #ffffff; font-size: 1.1rem; margin-bottom: 8px;">Ranchi to Kolkata Storage Corridor</h4>
          <p style="font-size: 0.9rem; color: #94a3b8; margin-bottom: 10px;">Interstate warehousing connecting Ranchi to Kolkata.</p>
          <a href="<?php echo SITE_URL; ?>pages/packers-and-movers-ranchi-to-kolkata.php" style="color: #f59e0b; text-decoration: underline; font-weight: 600; font-size: 0.9rem;">
            Ranchi to Kolkata Shifting Services →
          </a>
        </div>

        <div style="background: #172a54; padding: 18px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #ffffff; font-size: 1.1rem; margin-bottom: 8px;">Ranchi to Patna Warehouse Link</h4>
          <p style="font-size: 0.9rem; color: #94a3b8; margin-bottom: 10px;">Short-term transit storage connecting Ranchi to Patna.</p>
          <a href="<?php echo SITE_URL; ?>pages/packers-and-movers-ranchi-to-patna.php" style="color: #f59e0b; text-decoration: underline; font-weight: 600; font-size: 0.9rem;">
            Ranchi to Patna Shifting Services →
          </a>
        </div>

        <div style="background: #172a54; padding: 18px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #ffffff; font-size: 1.1rem; margin-bottom: 8px;">Ranchi to Delhi NCR Logistics Hub</h4>
          <p style="font-size: 0.9rem; color: #94a3b8; margin-bottom: 10px;">Long-term storage connecting Ranchi to Delhi &amp; Noida.</p>
          <a href="<?php echo SITE_URL; ?>pages/packers-and-movers-ranchi-to-delhi.php" style="color: #f59e0b; text-decoration: underline; font-weight: 600; font-size: 0.9rem;">
            Ranchi to Delhi Shifting Services →
          </a>
        </div>

        <div style="background: #172a54; padding: 18px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #ffffff; font-size: 1.1rem; margin-bottom: 8px;">Ranchi to Bangalore Tech Storage</h4>
          <p style="font-size: 0.9rem; color: #94a3b8; margin-bottom: 10px;">Intercity household storage connecting Ranchi to Bengaluru.</p>
          <a href="<?php echo SITE_URL; ?>pages/packers-and-movers-ranchi-to-bangalore.php" style="color: #f59e0b; text-decoration: underline; font-weight: 600; font-size: 0.9rem;">
            Ranchi to Bangalore Shifting Services →
          </a>
        </div>
      </div>

    </div>
  </section>

  <!-- Section 8: Warehouse Safety Standards -->
  <section style="padding: 70px 0; background: #070d1e; color: #ffffff;">
    <div class="container" style="max-width: 900px;">
      
      <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Safety Guidelines</span>
      <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin: 10px 0 20px 0;">
        7 Storage Safety Checklist Items for Clients
      </h2>

      <p style="font-size: 1.05rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 20px;">
        Follow these mandatory safety guidelines when storing goods in our Ranchi warehousing hubs:
      </p>

      <div style="background: #101c40; border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 12px; padding: 28px; margin-bottom: 30px;">
        <h4 style="color: #f59e0b; font-size: 1.2rem; margin-bottom: 14px; font-weight: 700;">Mandatory Storage Rules:</h4>
        <ol style="margin: 0; padding-left: 20px; color: #cbd5e1; line-height: 1.9; font-size: 0.98rem;">
          <li><strong>Zero Perishable Food Items:</strong> Storing fresh food, cooked meals, or unsealed dry grains is strictly prohibited to prevent pest attraction.</li>
          <li><strong>Zero Flammable Liquids or Hazardous Materials:</strong> Gasoline, LPG cylinders, paint thinners, and fireworks are banned from storage bays.</li>
          <li><strong>Drain Water from Washing Machines &amp; Air Coolers:</strong> All water tanks must be completely drained and dried prior to packing.</li>
          <li><strong>Remove Batteries from Electronics &amp; Toys:</strong> Remove AA/AAA batteries from remotes, clocks, and gadgets to prevent battery acid leakage.</li>
          <li><strong>Verify Written Inventory Receipt:</strong> Retain the official signed inventory receipt listing box numbers and furniture items.</li>
          <li><strong>Ensure All-Risk Storage Insurance Coverage:</strong> Confirm that your monthly storage plan includes fire, flood, and theft insurance.</li>
          <li><strong>Provide 48-Hour Advance Notice for Redelivery:</strong> Give our dispatch team 2 business days notice prior to requesting redelivery.</li>
        </ol>
      </div>

    </div>
  </section>

  <!-- Section 9: 5-Step Storage Operations Protocol -->
  <section style="padding: 70px 0; background: #0b132b; color: #ffffff; border-top: 1px solid rgba(245, 158, 11, 0.15);">
    <div class="container" style="max-width: 900px;">
      
      <div class="section-header text-center" style="margin-bottom: 45px;">
        <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Operations Protocol</span>
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin-top: 10px;">
          5 Quality Controls Applied in Our Warehouses
        </h2>
        <p style="font-size: 1.05rem; color: #cbd5e1; max-width: 750px; margin: 10px auto 0 auto; line-height: 1.7;">
          Our systematic storage operations guarantee complete protection throughout your storage tenure.
        </p>
      </div>

      <div style="display: grid; grid-template-columns: 1fr; gap: 20px;">
        
        <div style="display: flex; gap: 20px; background: #172a54; padding: 24px; border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <div style="font-size: 2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">01</div>
          <div>
            <h3 style="font-size: 1.2rem; color: #ffffff; margin-bottom: 6px;">Strict Temperature &amp; Humidity Monitoring</h3>
            <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.6;">
              Warehouse environmental sensors track internal humidity and temperature to prevent mold growth on leather and fabric.
            </p>
          </div>
        </div>

        <div style="display: flex; gap: 20px; background: #172a54; padding: 24px; border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <div style="font-size: 2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">02</div>
          <div>
            <h3 style="font-size: 1.2rem; color: #ffffff; margin-bottom: 6px;">Heavy Duty Plastic Vacuum Shrink Wrapping</h3>
            <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.6;">
              Items undergo 100% vacuum shrink lamination before pallet loading for zero dust accumulation over months of storage.
            </p>
          </div>
        </div>

        <div style="display: flex; gap: 20px; background: #172a54; padding: 24px; border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <div style="font-size: 2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">03</div>
          <div>
            <h3 style="font-size: 1.2rem; color: #ffffff; margin-bottom: 6px;">Biometric &amp; RFID Keycard Bay Access Control</h3>
            <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.6;">
              Storage bays are restricted via electronic RFID access logs, preventing unauthorized personnel entry.
            </p>
          </div>
        </div>

        <div style="display: flex; gap: 20px; background: #172a54; padding: 24px; border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <div style="font-size: 2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">04</div>
          <div>
            <h3 style="font-size: 1.2rem; color: #ffffff; margin-bottom: 6px;">Automated Pest Control &amp; Rodent Traps</h3>
            <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.6;">
              Ultrasonic rodent repellents and bi-weekly organic fumigation maintain a 100% pest-free environment.
            </p>
          </div>
        </div>

        <div style="display: flex; gap: 20px; background: #172a54; padding: 24px; border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <div style="font-size: 2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">05</div>
          <div>
            <h3 style="font-size: 1.2rem; color: #ffffff; margin-bottom: 6px;">All-Risk Insurance Coverage &amp; Claims Support</h3>
            <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.6;">
              Full declared value insurance covers fire, flood, and transit hazards with fast claim settlement processing.
            </p>
          </div>
        </div>

      </div>

    </div>
  </section>

  <!-- Section 10: Frequently Asked Questions (22 Detailed Warehouse FAQs) -->
  <section style="padding: 70px 0; background: #070d1e; color: #ffffff;">
    <div class="container" style="max-width: 900px;">
      
      <div class="section-header text-center" style="margin-bottom: 45px;">
        <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Warehouse FAQs</span>
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin-top: 10px;">
          Frequently Asked Questions About <span style="color: #f59e0b;">Warehouse Storage in Ranchi</span>
        </h2>
        <p style="font-size: 1.05rem; color: #cbd5e1; max-width: 800px; margin: 15px auto 0 auto; line-height: 1.7;">
          Authoritative answers to common questions about monthly storage rates, security systems, palletizing, insurance, and access policies.
        </p>
      </div>

      <div style="display: flex; flex-direction: column; gap: 16px;">
        
        <div style="background: #101c40; padding: 20px 24px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Q1: What warehouse storage facilities are available in Ranchi with Shree Ashirwad Packers?</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.7;">
            We offer 24/7 CCTV surveillance storage, elevated wooden pallet racking, moisture-proof shrink wrapping, automated pest control, and flexible short/long-term tenure options.
          </p>
        </div>

        <div style="background: #101c40; padding: 20px 24px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Q2: How much does household goods storage cost per month in Ranchi?</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.7;">
            Monthly storage rates range from ₹3,000 to ₹5,000 for a 1 BHK home, ₹5,000 to ₹8,000 for a 2 BHK home, and ₹8,000 to ₹12,000 for a 3 BHK home based on total cubic volume.
          </p>
        </div>

        <div style="background: #101c40; padding: 20px 24px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Q3: Are stored goods safe from moisture, dampness, and monsoon water seepage?</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.7;">
            Yes, all items are elevated on wooden pallets off the floor, multi-layer shrink-wrapped in 80-micron plastic film, and stored inside raised, weatherproof brick-and-steel warehouses.
          </p>
        </div>

        <div style="background: #101c40; padding: 20px 24px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Q4: What security measures protect stored belongings from theft and damage?</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.7;">
            Our facilities feature 24/7 HD CCTV camera recording, biometric entry gates, security guards, smoke detectors, automated sprinkler systems, and barcode inventory logging.
          </p>
        </div>

        <div style="background: #101c40; padding: 20px 24px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Q5: Can I retrieve a few specific items or boxes from storage before full redelivery?</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.7;">
            Yes, clients can schedule partial item retrievals with 24 hours advance notice using their unique inventory barcode reference number.
          </p>
        </div>

        <div style="background: #101c40; padding: 20px 24px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Q6: How are wooden furniture and upholstery protected against termites and rodents?</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.7;">
            We execute bi-weekly professional pest control treatments and anti-termite spraying, alongside ultrasonic rodent repellent devices throughout the warehouse.
          </p>
        </div>

        <div style="background: #101c40; padding: 20px 24px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Q7: What is the minimum storage duration available for household luggage?</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.7;">
            We offer flexible storage tenures starting from as little as 7 days, up to monthly, quarterly, or multi-year contracts.
          </p>
        </div>

        <div style="background: #101c40; padding: 20px 24px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Q8: Do you provide doorstep pickup and redelivery of goods for warehouse storage?</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.7;">
            Yes, our professional moving crew handles doorstep pickup, multi-layer wrapping, closed truck transport to the warehouse, and redelivery to your new location.
          </p>
        </div>

        <div style="background: #101c40; padding: 20px 24px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Q9: Are stored items covered by transit and warehouse storage insurance?</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.7;">
            Yes, all stored goods are covered under comprehensive all-risk storage insurance policies covering fire, flood, theft, and natural disasters.
          </p>
        </div>

        <div style="background: #101c40; padding: 20px 24px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Q10: Can automobiles like cars and motorbikes be stored in the warehouse?</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.7;">
            Yes, we provide covered vehicle parking bays with regular battery maintenance, tire pressure checks, and dust covers for short or long-term vehicle storage.
          </p>
        </div>

        <div style="background: #101c40; padding: 20px 24px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Q11: What documents are provided to clients upon storing their belongings?</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.7;">
            Clients receive an official signed Storage Agreement, a itemized barcode Inventory Receipt, insurance policy copy, and monthly rental invoices.
          </p>
        </div>

        <div style="background: #101c40; padding: 20px 24px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Q12: Are there any prohibited items that cannot be stored in the warehouse?</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.7;">
            Prohibited items include perishable foods, explosive or flammable chemicals, arms/ammunition, illegal substances, and live plants or animals.
          </p>
        </div>

        <div style="background: #101c40; padding: 20px 24px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Q13: How is commercial office document and file storage handled?</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.7;">
            Office archives are packed in heavy corrugated document cartons, barcoded, indexed, and stored on heavy steel shelving racks for easy audit retrieval.
          </p>
        </div>

        <div style="background: #101c40; padding: 20px 24px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Q14: How far in advance should I notify for redelivery of my stored goods?</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.7;">
            We request 48 hours advance notification to arrange container vehicle dispatch and assign an unpacking crew for doorstep redelivery.
          </p>
        </div>

        <div style="background: #101c40; padding: 20px 24px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Q15: How can I book warehouse storage facilities with Shree Ashirwad Packers in Ranchi?</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.7;">
            Call our storage desk at <strong><?php echo SITE_PHONE; ?></strong> (Raw: <strong><?php echo SITE_PHONE_RAW; ?></strong>) or email <strong><?php echo SITE_EMAIL; ?></strong> for immediate assistance.
          </p>
        </div>

        <div style="background: #101c40; padding: 20px 24px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Q16: Can I visit the warehouse facility in Ranchi to inspect security before booking?</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.7;">
            Yes, we welcome facility visits. Contact our storage manager to schedule a guided tour of our CCTV monitoring room and storage bays.
          </p>
        </div>

        <div style="background: #101c40; padding: 20px 24px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Q17: How is payment processed for long-term warehouse storage?</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.7;">
            Monthly rental payments can be made via UPI, bank transfer, or net banking on the 1st of every month, with discount incentives for annual advance payments.
          </p>
        </div>

        <div style="background: #101c40; padding: 20px 24px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Q18: What happens if I need to extend my storage duration unexpectedly?</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.7;">
            Simply inform us via email or WhatsApp 5 days before contract expiry, and your storage tenure will be extended automatically on a pro-rata monthly rate basis.
          </p>
        </div>

        <div style="background: #101c40; padding: 20px 24px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Q19: Are electronic appliances like refrigerators defrosted before storage placement?</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.7;">
            Yes, our packing crew ensures refrigerators are defrosted, dried, and cleaned inside before applying breathable protective stretch lamination.
          </p>
        </div>

        <div style="background: #101c40; padding: 20px 24px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Q20: Do you provide dedicated private locked storage rooms or shared bays?</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.7;">
            We offer both shared palletized warehousing bays and private lockable self-storage units based on customer privacy preferences and budget.
          </p>
        </div>

        <div style="background: #101c40; padding: 20px 24px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Q21: How are mattresses protected from dust during long 6-month storage periods?</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.7;">
            Mattresses are sealed inside heavy-duty vinyl zippered mattress covers and outer stretch film wrapping, guaranteeing 100% dust-free storage.
          </p>
        </div>

        <div style="background: #101c40; padding: 20px 24px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Q22: Why is Shree Ashirwad Packers rated #1 for warehouse storage in Ranchi?</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.7;">
            We combine elevated pallet storage, 24/7 CCTV surveillance, bi-weekly pest control, transparent monthly rate slabs, and doorstep redelivery for total peace of mind.
          </p>
        </div>

      </div>

    </div>
  </section>

  <!-- Section 11: Call To Action Banner -->
  <section style="padding: 70px 0; background: linear-gradient(135deg, #172a54 0%, #0b132b 100%); border-top: 1.5px solid rgba(245, 158, 11, 0.4); color: #ffffff;">
    <div class="container" style="max-width: 900px; text-align: center;">
      
      <span class="section-tag" style="background: rgba(245, 158, 11, 0.2); color: #f59e0b; padding: 6px 16px; border-radius: 20px; font-size: 0.85rem; font-weight: 700; text-transform: uppercase;">
        24/7 CCTV Monitored Warehouse Storage
      </span>

      <h2 style="font-size: 2.3rem; font-weight: 800; margin: 15px 0 15px 0; color: #ffffff;">
        Book Secure Storage with <span style="color: #f59e0b;">Shree Ashirwad Packers</span>
      </h2>

      <p style="font-size: 1.05rem; color: #cbd5e1; max-width: 750px; margin: 0 auto 30px auto; line-height: 1.7;">
        Contact our storage desk today for a free pre-storage survey, transparent monthly rate estimates, and secure warehouse unit booking.
      </p>

      <div style="display: flex; gap: 15px; justify-content: center; flex-wrap: wrap; margin-bottom: 25px;">
        <a href="tel:<?php echo SITE_PHONE_RAW; ?>" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 30px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1.05rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
          📞 Call Storage Desk: <?php echo SITE_PHONE; ?>
        </a>
        <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers%20and%20Movers,%20I%20want%20to%20book%20warehouse%20storage." target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 30px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1.05rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
          💬 Chat on WhatsApp
        </a>
        <a href="<?php echo SITE_URL; ?>pages/contact.php" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 30px; background: linear-gradient(135deg, #1e293b 0%, #0f172a 100%); border: 1.5px solid #f59e0b; color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1.05rem; text-decoration: none; box-shadow: 0 4px 15px rgba(245, 158, 11, 0.2);">
          📍 Visit Ranchi Office
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
  var extraMsg = form.querySelector('[name="message"]').value;
  
  var message = "Hello Shree Ashirwad Packers & Movers,\n\nI would like to request a Warehouse Storage Quote:\n- Name: " + name + "\n- Phone: " + phone + "\n- Pickup Area: " + moveFrom + "\n- Duration: " + moveTo;
  
  if (extraMsg && extraMsg.trim() !== '') {
    message += "\n- Goods Inventory: " + extraMsg;
  }
  
  var whatsappUrl = "https://api.whatsapp.com/send?phone=918409531615&text=" + encodeURIComponent(message);
  window.location.href = whatsappUrl;
}
</script>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
