<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "IBA Approved Packers and Movers Ranchi Benefits 2026 | Official Guide";
$page_desc = "Key benefits of hiring IBA approved packers and movers in Ranchi. Bank & Govt relocation clearance, claim reimbursement, verified transport & insurance. Call 8409531615.";
$page_keywords = "iba approved packers and movers ranchi benefits, iba approved movers ranchi, bank employee relocation ranchi, iba bill format ranchi, verified packers movers ranchi, iba code relocation ranchi";

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
            Bank &amp; Govt Authorized Logistics 2026
          </span>
          <h1 style="font-size: 2.8rem; font-weight: 800; line-height: 1.2; margin-bottom: 20px; color: #ffffff;">
            Key Benefits of <span style="color: #f59e0b;">IBA Approved Packers and Movers</span> in Ranchi
          </h1>
          <p style="font-size: 1.15rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 25px;">
            For bank officers, public sector enterprise executives, defense personnel, and government employees relocating from Ranchi, hiring an Indian Banks' Association (IBA) approved packer and mover guarantees 100% compliant claim reimbursement, standardized freight billing, zero-damage container transit, and mandatory insurance coverage. Discover how Shree Ashirwad Packers and Movers provides certified IBA billing documentation, authorized consignment notes, and seamless door-to-door relocation across India.
          </p>

          <div style="display: flex; gap: 15px; flex-wrap: wrap; margin-bottom: 30px;">
            <a href="tel:<?php echo SITE_PHONE_RAW; ?>" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
              📞 Request IBA Bills: <?php echo SITE_PHONE; ?>
            </a>
            <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers%20and%20Movers,%20I%20need%20IBA%20approved%20relocation%20billing%20details." target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
              💬 Chat on WhatsApp
            </a>
          </div>

          <div style="display: flex; gap: 20px; font-size: 0.9rem; color: #94a3b8;">
            <span><strong style="color: #f59e0b;">IBA</strong> Certified Code</span>
            <span><strong style="color: #f59e0b;">100%</strong> HR Reimbursement Acceptance</span>
            <span><strong style="color: #f59e0b;">GSTIN</strong> Tax Invoice Included</span>
          </div>
        </div>

        <!-- Hero Lead Form Column -->
        <div class="hero-form-card" style="background: rgba(255, 255, 255, 0.05); backdrop-filter: blur(10px); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 16px; padding: 30px; box-shadow: 0 15px 35px rgba(0,0,0,0.4);">
          <h2 style="font-size: 1.4rem; color: #ffffff; margin-bottom: 8px; font-weight: 700; text-align: center;">Get IBA Relocation Quote</h2>
          <p style="font-size: 0.85rem; color: #94a3b8; text-align: center; margin-bottom: 20px;">Receive instant IBA compliant price quotes via WhatsApp</p>

          <form action="#" method="POST" onsubmit="sendHeroWhatsAppLead(event, this);">
            <div style="margin-bottom: 14px;">
              <input type="text" name="name" class="form-control" placeholder="Employee / Officer Full Name" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="margin-bottom: 14px;">
              <input type="tel" name="phone" class="form-control" placeholder="10-Digit Phone / WhatsApp Number" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 10px; margin-bottom: 14px;">
              <input type="text" name="move_from" class="form-control" placeholder="Current Area in Ranchi" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
              <input type="text" name="move_to" class="form-control" placeholder="Transfer Destination City" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="margin-bottom: 16px;">
              <textarea name="message" class="form-control" rows="2" placeholder="Bank/Dept Name & Preferred Transfer Date" style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;"></textarea>
            </div>
            <button type="submit" class="btn btn-primary" style="width: 100%; padding: 14px; font-weight: 700; font-size: 1rem; border-radius: 8px;">
              Get IBA Quote on WhatsApp
            </button>
          </form>
        </div>

      </div>
    </div>
  </section>

  <!-- Section 2: IBA Compliance Metrics & Trust Pillars -->
  <section class="stats-section" style="padding: 50px 0; background: #070d1e; border-bottom: 1px solid rgba(245, 158, 11, 0.2);">
    <div class="container">
      <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 20px; text-align: center;">
        <div style="padding: 20px; background: rgba(23, 42, 84, 0.5); border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">IBA</div>
          <div style="font-size: 0.9rem; color: #cbd5e1; margin-top: 5px;">Approved Transport Code</div>
        </div>
        <div style="padding: 20px; background: rgba(23, 42, 84, 0.5); border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">100%</div>
          <div style="font-size: 0.9rem; color: #cbd5e1; margin-top: 5px;">Reimbursement Success</div>
        </div>
        <div style="padding: 20px; background: rgba(23, 42, 84, 0.5); border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">6-Piece</div>
          <div style="font-size: 0.9rem; color: #cbd5e1; margin-top: 5px;">Complete Document Kit</div>
        </div>
        <div style="padding: 20px; background: rgba(23, 42, 84, 0.5); border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">All-Risk</div>
          <div style="font-size: 0.9rem; color: #cbd5e1; margin-top: 5px;">Transit Policy Protection</div>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 3: 6-Card Grid (3x2 Layout) - IBA Approved Mover Benefits -->
  <section style="padding: 70px 0; background: #0b132b; color: #e2e8f0; line-height: 1.8;">
    <div class="container">
      
      <div style="max-width: 950px; margin: 0 auto;">
        <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Core Advantages</span>
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin: 10px 0 20px 0;">
          6 Vital Benefits of Hiring <span style="color: #f59e0b;">IBA Approved Movers</span> in Ranchi
        </h2>
        <p style="font-size: 1.05rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 25px;">
          The Indian Banks' Association empanels transport operators only after evaluating financial liquidity, vehicle container quality, claims history, and administrative compliance. Here are the 6 primary benefits of choosing an IBA-approved moving company:
        </p>

        <!-- 6 Cards Grid (3x2 Layout) -->
        <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px; margin: 30px 0;">
          
          <!-- Card 1 -->
          <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px; box-shadow: 0 10px 25px rgba(0,0,0,0.3);">
            <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;">📑</div>
            <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">1. Guaranteed HR &amp; Bank Reimbursement</h3>
            <p style="font-size: 0.9rem; color: #cbd5e1; line-height: 1.6; margin: 0;">
              IBA consignment notes, bills, and Lorry Receipts (LR) are recognized and processed by all public sector banks, defense treasuries, and government HR audit boards.
            </p>
          </div>

          <!-- Card 2 -->
          <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px; box-shadow: 0 10px 25px rgba(0,0,0,0.3);">
            <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;">🚚</div>
            <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">2. Standardized High-Cube Container Fleets</h3>
            <p style="font-size: 0.9rem; color: #cbd5e1; line-height: 1.6; margin: 0;">
              IBA logistics operators utilize weather-proof, leak-tested closed container trucks equipped with hydraulic tailgates and GPS tracking devices.
            </p>
          </div>

          <!-- Card 3 -->
          <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px; box-shadow: 0 10px 25px rgba(0,0,0,0.3);">
            <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;">🛡️</div>
            <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">3. Comprehensive All-Risk Transit Insurance</h3>
            <p style="font-size: 0.9rem; color: #cbd5e1; margin: 0; line-height: 1.6;">
              Official insurance policies are underwritten directly through recognized national insurance companies for 100% declared asset protection.
            </p>
          </div>

          <!-- Card 4 -->
          <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px; box-shadow: 0 10px 25px rgba(0,0,0,0.3);">
            <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;">💰</div>
            <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">4. Fixed Standard Rate Schedules</h3>
            <p style="font-size: 0.9rem; color: #cbd5e1; margin: 0; line-height: 1.6;">
              IBA approved rates follow regulated price slabs matching government mileage norms, eliminating arbitrary extortion or hidden packing add-ons.
            </p>
          </div>

          <!-- Card 5 -->
          <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px; box-shadow: 0 10px 25px rgba(0,0,0,0.3);">
            <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;">📦</div>
            <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">5. Multi-Layer Industrial Packaging</h3>
            <p style="font-size: 0.9rem; color: #cbd5e1; margin: 0; line-height: 1.6;">
              Standardized 7-layer packaging materials comprising bubble wrap, corrugated sheets, stretch film, and wooden crates protect goods from damage.
            </p>
          </div>

          <!-- Card 6 -->
          <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px; box-shadow: 0 10px 25px rgba(0,0,0,0.3);">
            <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;">✅</div>
            <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">6. Verification &amp; Background Checked Staff</h3>
            <p style="font-size: 0.9rem; color: #cbd5e1; margin: 0; line-height: 1.6;">
              Moving supervisors, carpenters, and drivers undergo mandatory background verification to ensure total safety for personal and official assets.
            </p>
          </div>

        </div>

        <p style="font-size: 1.05rem; color: #cbd5e1; line-height: 1.8; margin-top: 25px;">
          Selecting an IBA approved mover removes administrative hurdles during employer claim settlement while ensuring superior logistics security for household goods and motor vehicles.
        </p>

      </div>

    </div>
  </section>

  <!-- Section 4: IBA Approved Relocation Pricing Overview -->
  <section style="padding: 70px 0; background: linear-gradient(180deg, #0b132b 0%, #16203b 100%); color: #ffffff;">
    <div class="container" style="max-width: 900px;">
      
      <div class="section-header text-center" style="margin-bottom: 45px;">
        <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Approved Rate Slabs</span>
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin-top: 10px;">
          Standard IBA Relocation Rate Estimates in <span style="color: #f59e0b;">Ranchi</span>
        </h2>
        <p style="font-size: 1.05rem; color: #cbd5e1; max-width: 800px; margin: 15px auto 0 auto; line-height: 1.7;">
          Transparent regulated rate slabs for bank and government officer transfers:
        </p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 24px;">
        
        <div style="background: #172a54; padding: 24px; border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.3);">
          <h3 style="font-size: 1.2rem; color: #f59e0b; font-weight: 700; margin-bottom: 12px;">🏠 Local Officer Transfer within Ranchi</h3>
          <ul style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.8; padding-left: 18px; margin: 0;">
            <li>1 BHK Officer Quarter Move: ₹4,000 – ₹7,000</li>
            <li>2 BHK Officer Residence Move: ₹7,000 – ₹11,500</li>
            <li>3 BHK Executive Bungalow Move: ₹11,500 – ₹18,000</li>
            <li>Includes complete packing, loading &amp; unpacking</li>
            <li>Includes dedicated closed container truck</li>
            <li>Includes full GSTIN tax invoice documentation</li>
          </ul>
        </div>

        <div style="background: #172a54; padding: 24px; border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.3);">
          <h3 style="font-size: 1.2rem; color: #f59e0b; font-weight: 700; margin-bottom: 12px;">🌐 Intercity Bank Transfer from Ranchi</h3>
          <ul style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.8; padding-left: 18px; margin: 0;">
            <li>Ranchi to Patna Branch: ₹14,000 – ₹22,000</li>
            <li>Ranchi to Kolkata Regional Office: ₹18,000 – ₹28,000</li>
            <li>Ranchi to Delhi NCR Circle: ₹24,000 – ₹38,000</li>
            <li>Ranchi to Bengaluru / Mumbai: ₹32,000 – ₹52,000</li>
            <li>Includes IBA code stamp &amp; LR consignment note</li>
            <li>Includes transit insurance &amp; live GPS tracking</li>
          </ul>
        </div>

      </div>

      <p style="font-size: 1.05rem; color: #cbd5e1; line-height: 1.8; margin-top: 25px;">
        All quotes issued by Shree Ashirwad Packers and Movers strictly adhere to IBA pricing frameworks, providing transparent line-item invoices eligible for immediate HR reimbursement.
      </p>

    </div>
  </section>

  <!-- Section 5: The Complete 6-Piece IBA Document Package -->
  <section style="padding: 70px 0; background: #0b132b; color: #e2e8f0; border-top: 1px solid rgba(245, 158, 11, 0.15);">
    <div class="container" style="max-width: 900px;">
      
      <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Audit Compliance</span>
      <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin: 10px 0 20px 0;">
        The Master 6-Piece IBA Claim Document Package
      </h2>

      <p style="font-size: 1.05rem; color: #cbd5e1; margin-bottom: 25px; line-height: 1.8;">
        Every bank officer relocation package from Shree Ashirwad Packers includes the following 6 mandatory audit documents:
      </p>

      <div style="display: grid; grid-template-columns: 1fr; gap: 16px; margin-bottom: 35px;">
        <div style="background: rgba(23, 42, 84, 0.6); padding: 20px 24px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #ffffff; font-size: 1.15rem; margin-bottom: 6px;">1. Official IBA Consignment Note (Lorry Receipt / LR Copy)</h4>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.6;">
            Contains official IBA transport code, vehicle registration number, driver contact details, origin, and destination address.
          </p>
        </div>
        <div style="background: rgba(23, 42, 84, 0.6); padding: 20px 24px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #ffffff; font-size: 1.15rem; margin-bottom: 6px;">2. Itemized GST Tax Invoice with 15-Digit GSTIN Breakdown</h4>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.6;">
            Details freight tariffs, packing material costs, labor fees, and 18% GST tax breakdown on official letterhead.
          </p>
        </div>
        <div style="background: rgba(23, 42, 84, 0.6); padding: 20px 24px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #ffffff; font-size: 1.15rem; margin-bottom: 6px;">3. Comprehensive Goods Inventory Packing List</h4>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.6;">
            Numbered room-by-room inventory sheet detailing box counts, furniture pieces, and electronic appliance details signed by supervisor.
          </p>
        </div>
        <div style="background: rgba(23, 42, 84, 0.6); padding: 20px 24px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #ffffff; font-size: 1.15rem; margin-bottom: 6px;">4. All-Risk Transit Insurance Certificate</h4>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.6;">
            Underwritten policy certificate from national insurance companies matching declared inventory value for full claim protection.
          </p>
        </div>
        <div style="background: rgba(23, 42, 84, 0.6); padding: 20px 24px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #ffffff; font-size: 1.15rem; margin-bottom: 6px;">5. Stamped Money Receipt &amp; Payment Voucher</h4>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.6;">
            Official stamped payment receipt confirming advance deposit and final balance payment details.
          </p>
        </div>
        <div style="background: rgba(23, 42, 84, 0.6); padding: 20px 24px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #ffffff; font-size: 1.15rem; margin-bottom: 6px;">6. Car / Bike Condition Survey Report</h4>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.6;">
            Includes odometer reading, minor scratches, accessory list, and vehicle transit inspection sign-off.
          </p>
        </div>
      </div>

    </div>
  </section>

  <!-- Section 6: Localities in Ranchi Served (Internal Link Grid 1 - 4 Links) -->
  <section style="padding: 70px 0; background: #070d1e; color: #ffffff;">
    <div class="container" style="max-width: 900px;">
      
      <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Bank Officer Coverage</span>
      <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin: 10px 0 20px 0;">
        IBA Approved Moving Coverage Across <span style="color: #f59e0b;">Ranchi</span> Localities
      </h2>

      <p style="font-size: 1.05rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 20px;">
        We assist bank officers and PSU employees across all major residential quarters and colonies in Ranchi:
      </p>

      <!-- Internal Link Grid 1 (4 Contextual Links) -->
      <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 16px; margin-bottom: 30px;">
        <div style="background: #101c40; padding: 18px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #ffffff; font-size: 1.1rem; margin-bottom: 8px;">Dhurwa Residential Township</h4>
          <p style="font-size: 0.9rem; color: #94a3b8; margin-bottom: 10px;">HEC quarters and PSU employee relocation services in Dhurwa.</p>
          <a href="<?php echo SITE_URL; ?>pages/packers-and-movers-dhurwa-ranchi.php" style="color: #f59e0b; text-decoration: underline; font-weight: 600; font-size: 0.9rem;">
            Packers Movers Dhurwa Ranchi →
          </a>
        </div>

        <div style="background: #101c40; padding: 18px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #ffffff; font-size: 1.1rem; margin-bottom: 8px;">Hatia Railway Sector</h4>
          <p style="font-size: 0.9rem; color: #94a3b8; margin-bottom: 10px;">Railway staff quarters and home shifting in Hatia.</p>
          <a href="<?php echo SITE_URL; ?>pages/packers-and-movers-hatia-ranchi.php" style="color: #f59e0b; text-decoration: underline; font-weight: 600; font-size: 0.9rem;">
            Packers Movers Hatia Ranchi →
          </a>
        </div>

        <div style="background: #101c40; padding: 18px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #ffffff; font-size: 1.1rem; margin-bottom: 8px;">Tupudana Industrial Area</h4>
          <p style="font-size: 0.9rem; color: #94a3b8; margin-bottom: 10px;">Commercial and bank employee relocation services in Tupudana.</p>
          <a href="<?php echo SITE_URL; ?>pages/packers-and-movers-tupudana-ranchi.php" style="color: #f59e0b; text-decoration: underline; font-weight: 600; font-size: 0.9rem;">
            Packers Movers Tupudana Ranchi →
          </a>
        </div>

        <div style="background: #101c40; padding: 18px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #ffffff; font-size: 1.1rem; margin-bottom: 8px;">Kokar Commercial Hub</h4>
          <p style="font-size: 0.9rem; color: #94a3b8; margin-bottom: 10px;">IBA approved home and vehicle transport services in Kokar.</p>
          <a href="<?php echo SITE_URL; ?>pages/packers-and-movers-kokar-ranchi.php" style="color: #f59e0b; text-decoration: underline; font-weight: 600; font-size: 0.9rem;">
            Packers Movers Kokar Ranchi →
          </a>
        </div>
      </div>

    </div>
  </section>

  <!-- Section 7: Major Intercity Routes (Internal Link Grid 2 - 4 Links) -->
  <section style="padding: 70px 0; background: #0b132b; color: #ffffff;">
    <div class="container" style="max-width: 900px;">
      
      <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Intercity Bank Routes</span>
      <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin: 10px 0 20px 0;">
        Popular Bank Officer Transfer Corridors from <span style="color: #f59e0b;">Ranchi</span>
      </h2>

      <p style="font-size: 1.05rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 25px;">
        Daily container express trucks connect Ranchi to bank regional circles across Eastern and Central India:
      </p>

      <!-- Internal Link Grid 2 (4 Contextual Links) -->
      <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 16px; margin-bottom: 30px;">
        <div style="background: #172a54; padding: 18px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #ffffff; font-size: 1.1rem; margin-bottom: 8px;">Ranchi to Daltonganj Route</h4>
          <p style="font-size: 0.9rem; color: #94a3b8; margin-bottom: 10px;">Inter-district bank transfer relocations connecting Ranchi to Daltonganj / Medininagar.</p>
          <a href="<?php echo SITE_URL; ?>pages/packers-and-movers-ranchi-to-daltonganj.php" style="color: #f59e0b; text-decoration: underline; font-weight: 600; font-size: 0.9rem;">
            Ranchi to Daltonganj Shifting Services →
          </a>
        </div>

        <div style="background: #172a54; padding: 18px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #ffffff; font-size: 1.1rem; margin-bottom: 8px;">Ranchi to Dumka Route</h4>
          <p style="font-size: 0.9rem; color: #94a3b8; margin-bottom: 10px;">Government and bank transfer household shipping connecting Ranchi to Dumka.</p>
          <a href="<?php echo SITE_URL; ?>pages/packers-and-movers-ranchi-to-dumka.php" style="color: #f59e0b; text-decoration: underline; font-weight: 600; font-size: 0.9rem;">
            Ranchi to Dumka Shifting Services →
          </a>
        </div>

        <div style="background: #172a54; padding: 18px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #ffffff; font-size: 1.1rem; margin-bottom: 8px;">Ranchi to Bhubaneswar Route</h4>
          <p style="font-size: 0.9rem; color: #94a3b8; margin-bottom: 10px;">Interstate container express connecting Ranchi to Bhubaneswar, Odisha.</p>
          <a href="<?php echo SITE_URL; ?>pages/packers-and-movers-ranchi-to-bhubaneswar.php" style="color: #f59e0b; text-decoration: underline; font-weight: 600; font-size: 0.9rem;">
            Ranchi to Bhubaneswar Shifting Services →
          </a>
        </div>

        <div style="background: #172a54; padding: 18px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #ffffff; font-size: 1.1rem; margin-bottom: 8px;">Ranchi to Raipur Route</h4>
          <p style="font-size: 0.9rem; color: #94a3b8; margin-bottom: 10px;">Long-distance IBA approved relocations connecting Ranchi to Raipur, Chhattisgarh.</p>
          <a href="<?php echo SITE_URL; ?>pages/packers-and-movers-ranchi-to-raipur.php" style="color: #f59e0b; text-decoration: underline; font-weight: 600; font-size: 0.9rem;">
            Ranchi to Raipur Shifting Services →
          </a>
        </div>
      </div>

    </div>
  </section>

  <!-- Section 8: Government & PSU Audit Guidelines -->
  <section style="padding: 70px 0; background: #070d1e; color: #ffffff;">
    <div class="container" style="max-width: 900px;">
      
      <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">HR Compliance</span>
      <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin: 10px 0 20px 0;">
        Bank &amp; Government HR Relocation Claim Procedures
      </h2>

      <p style="font-size: 1.05rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 20px;">
        To ensure seamless approval of your relocation bill claim by your bank treasury or accounts department, follow these standard guidelines:
      </p>

      <div style="background: #101c40; border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 12px; padding: 28px; margin-bottom: 30px;">
        <h4 style="color: #f59e0b; font-size: 1.2rem; margin-bottom: 14px; font-weight: 700;">Reimbursement Claim Procedure:</h4>
        <ol style="margin: 0; padding-left: 20px; color: #cbd5e1; line-height: 1.9; font-size: 0.98rem;">
          <li><strong>Obtain Official Transfer Order:</strong> Attach a copy of your bank or department transfer order to the claim file.</li>
          <li><strong>Submit IBA Approved Quotation:</strong> Present the written rate quotation displaying our valid IBA code prior to packing.</li>
          <li><strong>Verify Vehicle Weight &amp; Container License:</strong> Ensure the Lorry Receipt (LR) details truck capacity matching your entitlement slab.</li>
          <li><strong>Submit Complete 6-Piece Document Kit:</strong> File the GST tax invoice, stamped LR, inventory packing list, insurance policy, money receipt, and vehicle inspection report.</li>
          <li><strong>Receive 100% Direct Account Settlement:</strong> Your employer's finance department disburses approved relocation funds directly to your salary account.</li>
        </ol>
      </div>

    </div>
  </section>

  <!-- Section 9: 5-Step IBA Relocation Workflow -->
  <section style="padding: 70px 0; background: #0b132b; color: #ffffff; border-top: 1px solid rgba(245, 158, 11, 0.15);">
    <div class="container" style="max-width: 900px;">
      
      <div class="section-header text-center" style="margin-bottom: 45px;">
        <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Service Execution</span>
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin-top: 10px;">
          5 Steps to an IBA Approved Move in Ranchi
        </h2>
        <p style="font-size: 1.05rem; color: #cbd5e1; max-width: 750px; margin: 10px auto 0 auto; line-height: 1.7;">
          Our systematic process guarantees effortless transfer relocations for bank and government officers.
        </p>
      </div>

      <div style="display: grid; grid-template-columns: 1fr; gap: 20px;">
        
        <div style="display: flex; gap: 20px; background: #172a54; padding: 24px; border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <div style="font-size: 2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">01</div>
          <div>
            <h3 style="font-size: 1.2rem; color: #ffffff; margin-bottom: 6px;">Pre-Move Survey &amp; Entitlement Assessment</h3>
            <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.6;">
              Our move supervisor audits your household goods and matches total weight and volume against your official bank transfer entitlement.
            </p>
          </div>
        </div>

        <div style="display: flex; gap: 20px; background: #172a54; padding: 24px; border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <div style="font-size: 2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">02</div>
          <div>
            <h3 style="font-size: 1.2rem; color: #ffffff; margin-bottom: 6px;">Standardized Multi-Layer Packing</h3>
            <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.6;">
              Trained packers wrap furniture, electronics, and glassware in high-density bubble cushion, 5-ply cartons, and waterproof film.
            </p>
          </div>
        </div>

        <div style="display: flex; gap: 20px; background: #172a54; padding: 24px; border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <div style="font-size: 2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">03</div>
          <div>
            <h3 style="font-size: 1.2rem; color: #ffffff; margin-bottom: 6px;">IBA Consignment Generation &amp; Loading</h3>
            <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.6;">
              Goods are loaded into dedicated closed container trucks, sealed with security locks, and issued stamped IBA Lorry Receipts (LR).
            </p>
          </div>
        </div>

        <div style="display: flex; gap: 20px; background: #172a54; padding: 24px; border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <div style="font-size: 2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">04</div>
          <div>
            <h3 style="font-size: 1.2rem; color: #ffffff; margin-bottom: 6px;">GPS Tracking &amp; All-Risk Transit Insurance</h3>
            <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.6;">
              Your container truck is tracked live via satellite GPS while an all-risk transit policy covers cargo throughout the journey.
            </p>
          </div>
        </div>

        <div style="display: flex; gap: 20px; background: #172a54; padding: 24px; border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <div style="font-size: 2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">05</div>
          <div>
            <h3 style="font-size: 1.2rem; color: #ffffff; margin-bottom: 6px;">Doorstep Setup &amp; Audit Billing Handover</h3>
            <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.6;">
              Our destination team unloads cargo into your new quarter, reassembles furniture, and hands over the complete 6-piece IBA bill set.
            </p>
          </div>
        </div>

      </div>

    </div>
  </section>

  <!-- Section 10: Frequently Asked Questions (15 Detailed IBA FAQs) -->
  <section style="padding: 70px 0; background: #070d1e; color: #ffffff;">
    <div class="container" style="max-width: 900px;">
      
      <div class="section-header text-center" style="margin-bottom: 45px;">
        <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">IBA FAQs</span>
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin-top: 10px;">
          Frequently Asked Questions About <span style="color: #f59e0b;">IBA Approved Movers in Ranchi</span>
        </h2>
        <p style="font-size: 1.05rem; color: #cbd5e1; max-width: 800px; margin: 15px auto 0 auto; line-height: 1.7;">
          Authoritative answers to common questions regarding IBA code verification, bank entitlement limits, reimbursement claim bills, and insurance.
        </p>
      </div>

      <div style="display: flex; flex-direction: column; gap: 16px;">
        
        <div style="background: #101c40; padding: 20px 24px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Q1: What is an IBA approved packer and mover?</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.7;">
            An IBA approved packer and mover is a logistics operator empaneled by the Indian Banks' Association having met strict standards for fleet quality, financial safety, and legal compliance.
          </p>
        </div>

        <div style="background: #101c40; padding: 20px 24px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Q2: Why do public sector banks require IBA approved bills for officer transfers?</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.7;">
            Public sector banks mandate IBA approved bills to ensure that relocation funds are disbursed to verified, legal transport operators using standard rates.
          </p>
        </div>

        <div style="background: #101c40; padding: 20px 24px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Q3: Which documents are required for bank relocation reimbursement?</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.7;">
            The complete package includes the IBA Lorry Receipt (LR), GST Tax Invoice, Itemized Inventory List, Transit Insurance Policy, Money Receipt, and Vehicle Inspection Report.
          </p>
        </div>

        <div style="background: #101c40; padding: 20px 24px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Q4: Can non-bank corporate employees hire IBA approved movers?</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.7;">
            Yes, non-bank corporate professionals can hire IBA approved movers to benefit from guaranteed safety standards, quality container fleets, and transparent pricing.
          </p>
        </div>

        <div style="background: #101c40; padding: 20px 24px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Q5: How can I verify the IBA code of Shree Ashirwad Packers and Movers?</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.7;">
            Our official IBA approval code letter and empanelment certificate are displayed at our Ranchi office and printed on all official letterheads.
          </p>
        </div>

        <div style="background: #101c40; padding: 20px 24px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Q6: Does IBA approval cover motorcycle and car transportation?</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.7;">
            Yes, IBA approved vehicle carriers provide specialized single-car and multi-car enclosed transport along with official condition reports for claim approval.
          </p>
        </div>

        <div style="background: #101c40; padding: 20px 24px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Q7: What is the difference between an ordinary mover and an IBA approved mover?</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.7;">
            Ordinary movers may lack GST registration, owned container fleets, or valid insurance, whereas IBA approved movers pass rigorous financial and operational audits.
          </p>
        </div>

        <div style="background: #101c40; padding: 20px 24px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Q8: How does transit insurance protect my goods during an IBA relocation?</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.7;">
            All-risk transit insurance covers total or partial loss caused by highway accidents, overturning, fire, or natural calamities based on the declared goods inventory.
          </p>
        </div>

        <div style="background: #101c40; padding: 20px 24px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Q9: Are IBA approved rates higher than unverified moving quotes?</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.7;">
            IBA rates reflect genuine, standard market rates in Ranchi for multi-layer packing, container transport, and insurance without surprise extra fees on delivery.
          </p>
        </div>

        <div style="background: #101c40; padding: 20px 24px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Q10: Can I get IBA bills for intercity moves from Ranchi to South India?</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.7;">
            Yes, our IBA consignment documentation is valid nationwide for relocations from Ranchi to Bengaluru, Hyderabad, Chennai, Mumbai, or Pune.
          </p>
        </div>

        <div style="background: #101c40; padding: 20px 24px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Q11: How early should a bank officer book an IBA move after receiving transfer orders?</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.7;">
            Book your IBA move at least 5 to 7 days before your target departure date to reserve dedicated container slots and complete pre-move surveys.
          </p>
        </div>

        <div style="background: #101c40; padding: 20px 24px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Q12: Do you provide temporary storage facilities for bank officers awaiting quarter allotment?</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.7;">
            Yes, we offer clean, CCTV-monitored warehouse storage facilities in Ranchi and destination hubs for short-term household goods storage.
          </p>
        </div>

        <div style="background: #101c40; padding: 20px 24px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Q13: Are GST taxes included in the IBA relocation bill package?</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.7;">
            Yes, our invoices feature full 18% GST tax breakdown registered under our official 15-digit GSTIN number.
          </p>
        </div>

        <div style="background: #101c40; padding: 20px 24px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Q14: What packing materials are mandated under IBA relocation standards?</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.7;">
            IBA standards require high-density air bubble wrap, 5-ply corrugated cartons, waterproof stretch film, corner guards, and timber crating for fragile goods.
          </p>
        </div>

        <div style="background: #101c40; padding: 20px 24px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Q15: How can I request an IBA compliant quotation from Shree Ashirwad Packers?</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.7;">
            Call our dedicated bank transfer desk at <strong><?php echo SITE_PHONE; ?></strong> (Raw: <strong><?php echo SITE_PHONE_RAW; ?></strong>) or email <strong><?php echo SITE_EMAIL; ?></strong> for immediate assistance.
          </p>
        </div>

        <div style="background: #101c40; padding: 20px 24px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Q16: How do IBA approved movers manage official bank document seal protocols?</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.7;">
            Our moving supervisors apply numbered security seals on container truck doors in the presence of the bank officer and record the seal serial number on the Lorry Receipt (LR) for destination verification.
          </p>
        </div>

        <div style="background: #101c40; padding: 20px 24px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Q17: Are defense forces and paramilitary transfer bills covered under IBA standards?</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.7;">
            Yes, defense audit offices, CDA treasuries, and paramilitary HR divisions accept our IBA approved bills, consignment notes, and GST invoices for 100% full transfer reimbursement.
          </p>
        </div>

        <div style="background: #101c40; padding: 20px 24px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Q18: What is the procedure for claiming transit insurance damages through an IBA approved mover?</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.7;">
            In the rare event of transit damage, note the details on the delivery LR copy, take photographs, and submit our official insurance claim form along with original purchase invoices for fast claim settlement.
          </p>
        </div>

        <div style="background: #101c40; padding: 20px 24px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Q19: How are official bank car transportation entitlement limits handled under IBA billing?</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.7;">
            Car transport invoices are generated separately with vehicle chassis/engine numbers matching your bank grade entitlement slab, ensuring hassle-free processing by bank audit departments.
          </p>
        </div>

        <div style="background: #101c40; padding: 20px 24px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Q20: Does IBA approval require container trucks to have GPS tracking hardware?</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.7;">
            Yes, IBA guidelines mandate real-time satellite GPS tracking capability on long-haul container trucks so bank officers and logistics dispatchers can monitor vehicle location continuously.
          </p>
        </div>

        <div style="background: #101c40; padding: 20px 24px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Q21: Are Octroi and state entry permit documentation included in IBA consignment billing?</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.7;">
            Yes, official e-way bills, commercial state transit permits, and toll tax receipts are attached directly to the Lorry Receipt (LR) package for complete audit compliance.
          </p>
        </div>

        <div style="background: #101c40; padding: 20px 24px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Q22: How do IBA approved movers manage unpacking and furniture placement at the destination?</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.7;">
            Our destination crew unboxes all items, positions furniture according to the officer's floor plan, re-assembles beds and tables, and removes all packing debris from the residence.
          </p>
        </div>

      </div>

    </div>
  </section>

  <!-- Section 11: Call To Action Banner -->
  <section style="padding: 70px 0; background: linear-gradient(135deg, #172a54 0%, #0b132b 100%); border-top: 1.5px solid rgba(245, 158, 11, 0.4); color: #ffffff;">
    <div class="container" style="max-width: 900px; text-align: center;">
      
      <span class="section-tag" style="background: rgba(245, 158, 11, 0.2); color: #f59e0b; padding: 6px 16px; border-radius: 20px; font-size: 0.85rem; font-weight: 700; text-transform: uppercase;">
        Authorized Bank Relocation Partner
      </span>

      <h2 style="font-size: 2.3rem; font-weight: 800; margin: 15px 0 15px 0; color: #ffffff;">
        Book Your Move with <span style="color: #f59e0b;">Shree Ashirwad Packers</span>
      </h2>

      <p style="font-size: 1.05rem; color: #cbd5e1; max-width: 750px; margin: 0 auto 30px auto; line-height: 1.7;">
        Contact our IBA relocation desk today for a free pre-move survey, 6-piece audit document package, and guaranteed HR claim approval.
      </p>

      <div style="display: flex; gap: 15px; justify-content: center; flex-wrap: wrap; margin-bottom: 25px;">
        <a href="tel:<?php echo SITE_PHONE_RAW; ?>" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 30px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1.05rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
          📞 IBA Helpline: <?php echo SITE_PHONE; ?>
        </a>
        <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers%20and%20Movers,%20I%20want%20to%20request%20an%20IBA%20relocation%20quote." target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 30px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1.05rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
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
  
  var message = "Hello Shree Ashirwad Packers & Movers,\n\nI would like to request an IBA Approved Moving Quote:\n- Name: " + name + "\n- Phone: " + phone + "\n- Current Area: " + moveFrom + "\n- Destination: " + moveTo;
  
  if (extraMsg && extraMsg.trim() !== '') {
    message += "\n- Shifting Details: " + extraMsg;
  }
  
  var whatsappUrl = "https://api.whatsapp.com/send?phone=918409531615&text=" + encodeURIComponent(message);
  window.location.href = whatsappUrl;
}
</script>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
