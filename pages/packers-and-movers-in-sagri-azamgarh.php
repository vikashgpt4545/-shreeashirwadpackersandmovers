<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "Packers and Movers in Sagri Azamgarh | Reliable Shifting Services";
$page_desc = "Top packers and movers in Sagri, Azamgarh (Uttar Pradesh). Doorstep household shifting, vehicle transportation, 7-layer safety packaging, and IBA-approved GST billing. Call 8409531615.";
$page_keywords = "packers and movers in sagri azamgarh, best packers and movers in sagri, house shifting sagri azamgarh, IBA approved packers sagri up, movers sagri azamgarh";
$canonical_url = "https://shreeashirwadpackersandmovers.com/packers-and-movers-in-sagri-azamgarh";

$page_city = "Sagri, Azamgarh, Uttar Pradesh";

$faq_list = [
    ['q' => 'What are the packing and moving charges in Sagri Tehsil, Azamgarh?', 'a' => 'Relocation costs in Sagri depend on volume of household goods and destination distance. Local 1/2 BHK house shifting ranges from ₹3,500 to ₹8,500, while inter-state relocation starts from ₹9,500 with complete insurance and IBA GST billing.'],
    ['q' => 'Do you serve all villages & towns across Sagri Tehsil?', 'a' => 'Yes, we cover Sagri town, Maharajganj, Bilariyaganj, Haraiya, Jiyanpur, and all surrounding rural & semi-urban areas in Sagri subdivision.'],
    ['q' => 'What packaging materials are used for household items in Sagri?', 'a' => 'We use 7-layer safety packaging including 80-GSM heavy bubble wrap, corrugated boxes, stretch film, edge guards, and waterproof tarpaulin sheets.'],
    ['q' => 'Is transit insurance included for house shifting in Sagri?', 'a' => 'Yes, full-value 100% transit insurance policy (1.5% of declared goods value) is provided covering any unexpected transit damage or highway mishap.'],
    ['q' => 'Do you provide IBA-approved GST bills for government claim reimbursement?', 'a' => 'Yes, we provide 100% genuine IBA-compliant GST tax invoices, consignment bills (LR copies), and itemized inventories accepted by defense, bank, and government sector employees.'],
    ['q' => 'Can you transport my bike or car along with household items from Sagri?', 'a' => 'Yes, we operate specialized enclosed car container carriers and dedicated two-wheeler transport trucks with hydraulic loading and wheel tie-down belts.'],
    ['q' => 'How long does inter-state household relocation take from Sagri?', 'a' => 'Local moves within Azamgarh district take 12 to 24 hours. Inter-state relocations (e.g. to Delhi, Mumbai, Bangalore) typically take 3 to 6 days.'],
    ['q' => 'Who will handle loading and unloading of heavy furniture in Sagri?', 'a' => 'Our experienced, uniform-clad moving crew handles all disassembly, heavy lifting, loading, unloading, and reassembly at your destination.'],
    ['q' => 'How do I get an instant quote for shifting in Sagri Azamgarh?', 'a' => 'Call +91 8409531615 or submit your shifting requirements via our WhatsApp lead form for a free home inspection and instant transparent quote.']
];

require_once __DIR__ . '/../includes/header.php';
?>

<main class="site-main">

  <!-- 1. Visual Breadcrumb Navigation Bar -->
  <div class="breadcrumb-wrapper">
    <div class="container">
      <div class="breadcrumb-list">
        <span class="breadcrumb-item"><a href="<?php echo SITE_URL; ?>" title="Home">Home</a></span>
        <span class="breadcrumb-separator">/</span>
        <span class="breadcrumb-item"><a href="<?php echo SITE_URL; ?>packers-and-movers-in-azamgarh" title="Azamgarh">Azamgarh</a></span>
        <span class="breadcrumb-separator">/</span>
        <span class="breadcrumb-item active"><?php echo htmlspecialchars($page_title); ?></span>
      </div>
    </div>
  </div>

  <!-- 2. Hero Section & Instant WhatsApp Lead Form -->
  <section class="hero-section" style="background: linear-gradient(135deg, #0b132b 0%, #1c2541 100%); padding: 60px 0; color: #ffffff;">
    <div class="container">
      <div class="hero-grid" style="display: grid; grid-template-columns: 1.2fr 0.8fr; gap: 40px; align-items: center;">
        
        <!-- Hero Text Column -->
        <div class="hero-text">
          <span class="section-tag" style="background: rgba(245, 158, 11, 0.15); color: #f59e0b; border: 1px solid rgba(245, 158, 11, 0.4); padding: 6px 16px; border-radius: 20px; font-size: 0.85rem; font-weight: 700; text-transform: uppercase; display: inline-block; margin-bottom: 15px;">
            SAGRI TEHSIL SHIFTING SECTOR (AZAMGARH)
          </span>
          <h1 style="font-size: 2.6rem; font-weight: 800; line-height: 1.2; margin-bottom: 20px; color: #ffffff;">
            Packers and Movers in <span style="color: #f59e0b;">Sagri Azamgarh</span>
          </h1>
          <p style="font-size: 1.05rem; color: #cbd5e1; line-height: 1.7; margin-bottom: 25px;">
            Shree Ashirwad Packers and Movers offers professional, stress-free household shifting and vehicle shipping across Sagri Tehsil (Bilariyaganj, Jiyanpur, Maharajganj, Haraiya). Equipped with 7-layer safety packaging, enclosed container vehicles, and official IBA GST bills.
          </p>

          <div style="display: flex; gap: 15px; flex-wrap: wrap; margin-bottom: 30px;">
            <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Now" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
              <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call Now: <?php echo SITE_PHONE; ?>
            </a>
            <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20a%20shifting%20quote%20for%20Sagri%20Azamgarh." title="Chat on WhatsApp" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
              <i class="fab fa-whatsapp" style="margin-right: 8px;"></i> Chat on WhatsApp
            </a>
          </div>

          <div style="display: flex; gap: 20px; font-size: 0.9rem; color: #94a3b8;">
            <span><strong style="color: #f59e0b;">670+</strong> Moves Completed</span>
            <span><strong style="color: #f59e0b;">Zero</strong> Damage Policy</span>
            <span><strong style="color: #f59e0b;">IBA Approved</strong> Bills</span>
          </div>
        </div>

        <!-- Hero Lead Form Column -->
        <div class="hero-form-card" style="background: rgba(255, 255, 255, 0.05); backdrop-filter: blur(10px); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 16px; padding: 30px; box-shadow: 0 15px 35px rgba(0,0,0,0.4);">
          <h2 style="font-size: 1.4rem; color: #ffffff; margin-bottom: 8px; font-weight: 700; text-align: center;">Get Instant Sagri Quote</h2>
          <p style="font-size: 0.85rem; color: #94a3b8; text-align: center; margin-bottom: 20px;">Transparent household shifting rates sent on WhatsApp</p>

          <form action="#" method="POST" onsubmit="sendHeroWhatsAppLead(event, this);">
            <div style="margin-bottom: 14px;">
              <input type="text" name="name" class="form-control" placeholder="Your Full Name" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="margin-bottom: 14px;">
              <input type="tel" name="phone" class="form-control" placeholder="10-Digit Phone / WhatsApp Number" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 10px; margin-bottom: 14px;">
              <input type="text" name="move_from" class="form-control" placeholder="Pickup Location" value="Sagri, Azamgarh" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
              <input type="text" name="move_to" class="form-control" placeholder="Destination City" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="margin-bottom: 16px;">
              <textarea name="message" class="form-control" rows="2" placeholder="List items to move (e.g. 2 BHK House, Bike, Car)" style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;"></textarea>
            </div>
            <button type="submit" class="btn btn-primary" style="width: 100%; padding: 14px; background: linear-gradient(135deg, #d32f2f 0%, #f59e0b 100%); color: #ffffff; border: none; border-radius: 50px; font-weight: 700; font-size: 1rem; cursor: pointer;">
              Get Free Shifting Estimate &rarr;
            </button>
          </form>
        </div>

      </div>
    </div>
  </section>

  <!-- 3. Key Stats Counter Bar -->
  <section class="stats-section" style="padding: 45px 0; background: #070d1e; border-bottom: 1px solid rgba(245, 158, 11, 0.2);">
    <div class="container">
      <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 20px; text-align: center;">
        <div style="padding: 20px; background: rgba(23, 42, 84, 0.5); border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">670+</div>
          <div style="font-size: 0.9rem; color: #cbd5e1; margin-top: 5px;">Relocations in Sagri Tehsil</div>
        </div>
        <div style="padding: 20px; background: rgba(23, 42, 84, 0.5); border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">7-Layer</div>
          <div style="font-size: 0.9rem; color: #cbd5e1; margin-top: 5px;">Safety Packing Standard</div>
        </div>
        <div style="padding: 20px; background: rgba(23, 42, 84, 0.5); border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">100%</div>
          <div style="font-size: 0.9rem; color: #cbd5e1; margin-top: 5px;">Transit Insurance Cover</div>
        </div>
        <div style="padding: 20px; background: rgba(23, 42, 84, 0.5); border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">IBA Approved</div>
          <div style="font-size: 0.9rem; color: #cbd5e1; margin-top: 5px;">Official GST Invoice</div>
        </div>
      </div>
    </div>
  </section>

  <!-- 4. 6-Card Feature Grid (3x2 Layout) -->
  <section style="padding: 65px 0; background: #0b132b; color: #e2e8f0; line-height: 1.8;">
    <div class="container">
      
      <div style="max-width: 950px; margin: 0 auto;">
        <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Service Advantages</span>
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin: 10px 0 20px 0;">
          Why Choose Us for Relocation in <span style="color: #f59e0b;">Sagri, Azamgarh</span>?
        </h2>

        <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px; margin: 30px 0;">
          
          <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px;">
            <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;"><i class="fas fa-boxes"></i></div>
            <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">7-Layer Safety Packaging</h3>
            <p style="font-size: 0.9rem; color: #cbd5e1; margin: 0;">
              80-GSM heavy bubble wrap, corrugated sheets, foam edge guards, and stretch film protecting fragile items.
            </p>
          </div>

          <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px;">
            <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;"><i class="fas fa-truck-moving"></i></div>
            <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">Enclosed Weatherproof Trucks</h3>
            <p style="font-size: 0.9rem; color: #cbd5e1; margin: 0;">
              Sealed container trucks shielding your goods from rain, dust, and transit vibration across state highways.
            </p>
          </div>

          <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px;">
            <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;"><i class="fas fa-file-invoice-dollar"></i></div>
            <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">IBA Approved Bills</h3>
            <p style="font-size: 0.9rem; color: #cbd5e1; margin: 0;">
              Genuine GST invoices and consignment notes for hassle-free government and corporate claim reimbursement.
            </p>
          </div>

          <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px;">
            <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;"><i class="fas fa-shield-alt"></i></div>
            <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">100% Transit Insurance</h3>
            <p style="font-size: 0.9rem; color: #cbd5e1; margin: 0;">
              Comprehensive insurance cover providing financial protection against any unforeseen road incident.
            </p>
          </div>

          <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px;">
            <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;"><i class="fas fa-map-marked-alt"></i></div>
            <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">GPS Tracking &amp; Support</h3>
            <p style="font-size: 0.9rem; color: #cbd5e1; margin: 0;">
              Real-time vehicle tracking and constant WhatsApp updates from dispatch until final placement.
            </p>
          </div>

          <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px;">
            <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;"><i class="fas fa-user-shield"></i></div>
            <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">Trained In-House Staff</h3>
            <p style="font-size: 0.9rem; color: #cbd5e1; margin: 0;">
              Professional, verified moving crew handling delicate electronics, glass, and heavy wooden furniture.
            </p>
          </div>

        </div>

      </div>

    </div>
  </section>

  <!-- 5. Specialized Services Breakdown -->
  <section style="padding: 60px 0; background: #070d1e; color: #ffffff;">
    <div class="container" style="max-width: 950px;">
      
      <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Our Solutions</span>
      <h2 style="font-size: 2.1rem; font-weight: 800; color: #ffffff; margin: 10px 0 25px 0;">
        Specialized Shifting Services in <span style="color: #f59e0b;">Sagri Azamgarh</span>
      </h2>

      <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px;">
        <div style="background: #101c40; padding: 20px; border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #f59e0b; font-size: 1.05rem; margin-bottom: 8px;">Household Shifting</h4>
          <p style="font-size: 0.88rem; color: #cbd5e1; margin: 0;">Complete packing, loading, transport, and unpacking for 1, 2, 3+ BHK homes.</p>
        </div>

        <div style="background: #101c40; padding: 20px; border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #f59e0b; font-size: 1.05rem; margin-bottom: 8px;">Car Carrier Transport</h4>
          <p style="font-size: 0.88rem; color: #cbd5e1; margin: 0;">Doorstep car pickup and transport in specialized closed multi-car trailers.</p>
        </div>

        <div style="background: #101c40; padding: 20px; border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #f59e0b; font-size: 1.05rem; margin-bottom: 8px;">Two-Wheeler Shipping</h4>
          <p style="font-size: 0.88rem; color: #cbd5e1; margin: 0;">Scratch-proof 7-layer bubble wrap packing for bikes and scooters.</p>
        </div>

        <div style="background: #101c40; padding: 20px; border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #f59e0b; font-size: 1.05rem; margin-bottom: 8px;">Office &amp; Commercial Move</h4>
          <p style="font-size: 0.88rem; color: #cbd5e1; margin: 0;">Systematic office furniture, IT equipment, and document relocation with zero downtime.</p>
        </div>

        <div style="background: #101c40; padding: 20px; border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #f59e0b; font-size: 1.05rem; margin-bottom: 8px;">IBA Approved GST Billing</h4>
          <p style="font-size: 0.88rem; color: #cbd5e1; margin: 0;">Official bills &amp; LR receipts for government, defense, and corporate claims.</p>
        </div>

        <div style="background: #101c40; padding: 20px; border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #f59e0b; font-size: 1.05rem; margin-bottom: 8px;">Warehouse &amp; Storage</h4>
          <p style="font-size: 0.88rem; color: #cbd5e1; margin: 0;">Secure, moisture-free storage facility for short-term or long-term household goods storage.</p>
        </div>
      </div>

    </div>
  </section>

  <!-- 6. 7-Layer Safety Packaging Framework -->
  <section style="padding: 60px 0; background: #0b132b; color: #ffffff;">
    <div class="container" style="max-width: 950px;">
      
      <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Safety Protocol</span>
      <h2 style="font-size: 2.1rem; font-weight: 800; color: #ffffff; margin: 10px 0 25px 0;">
        7-Layer Damage-Proof Packaging Framework
      </h2>

      <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 15px;">
        <div style="background: #172a54; padding: 18px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <div style="font-size: 0.8rem; color: #f59e0b; font-weight: 700;">LAYER 01</div>
          <h4 style="font-size: 0.95rem; color: #fff; margin: 4px 0;">Primary Polythene Wrap</h4>
          <p style="font-size: 0.82rem; color: #cbd5e1; margin: 0;">Shields against dust, moisture, and surface stains.</p>
        </div>

        <div style="background: #172a54; padding: 18px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <div style="font-size: 0.8rem; color: #f59e0b; font-weight: 700;">LAYER 02</div>
          <h4 style="font-size: 0.95rem; color: #fff; margin: 4px 0;">80-GSM Heavy Bubble</h4>
          <p style="font-size: 0.82rem; color: #cbd5e1; margin: 0;">High-density bubble cushioning for impact protection.</p>
        </div>

        <div style="background: #172a54; padding: 18px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <div style="font-size: 0.8rem; color: #f59e0b; font-weight: 700;">LAYER 03</div>
          <h4 style="font-size: 0.95rem; color: #fff; margin: 4px 0;">Corrugated Sheet Board</h4>
          <p style="font-size: 0.82rem; color: #cbd5e1; margin: 0;">Heavy cardboard layers wrapping furniture surfaces.</p>
        </div>

        <div style="background: #172a54; padding: 18px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <div style="font-size: 0.8rem; color: #f59e0b; font-weight: 700;">LAYER 04</div>
          <h4 style="font-size: 0.95rem; color: #fff; margin: 4px 0;">Foam Corner Protectors</h4>
          <p style="font-size: 0.82rem; color: #cbd5e1; margin: 0;">Reinforces sharp edges of tables, TVs, and wooden cabinets.</p>
        </div>

        <div style="background: #172a54; padding: 18px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <div style="font-size: 0.8rem; color: #f59e0b; font-weight: 700;">LAYER 05</div>
          <h4 style="font-size: 0.95rem; color: #fff; margin: 4px 0;">Waterproof Stretch Film</h4>
          <p style="font-size: 0.82rem; color: #cbd5e1; margin: 0;">Tightly binds all layers for complete weather resistance.</p>
        </div>

        <div style="background: #172a54; padding: 18px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <div style="font-size: 0.8rem; color: #f59e0b; font-weight: 700;">LAYER 06</div>
          <h4 style="font-size: 0.95rem; color: #fff; margin: 4px 0;">Custom Wooden Crates</h4>
          <p style="font-size: 0.82rem; color: #cbd5e1; margin: 0;">Heavy wooden casing built for delicate glass, marble, or TVs.</p>
        </div>

        <div style="background: #172a54; padding: 18px; border-radius: 10px; border-left: 4px solid #f59e0b; grid-column: span 2;">
          <div style="font-size: 0.8rem; color: #f59e0b; font-weight: 700;">LAYER 07</div>
          <h4 style="font-size: 0.95rem; color: #fff; margin: 4px 0;">Truck Safety Lashing</h4>
          <p style="font-size: 0.82rem; color: #cbd5e1; margin: 0;">Secures packed items inside container trucks using heavy belts.</p>
        </div>
      </div>

    </div>
  </section>

  <!-- 7. Origin Pickup Locality Grid -->
  <section style="padding: 60px 0; background: #070d1e; color: #ffffff;">
    <div class="container" style="max-width: 900px;">
      
      <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Azamgarh District Network</span>
      <h2 style="font-size: 2.1rem; font-weight: 800; color: #ffffff; margin: 10px 0 20px 0;">
        Locality Coverage Across <span style="color: #f59e0b;">Azamgarh District</span>
      </h2>

      <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 16px; margin-bottom: 25px;">
        <div style="background: #101c40; padding: 18px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #ffffff; font-size: 1.05rem; margin-bottom: 6px;">Azamgarh Master Hub</h4>
          <p style="font-size: 0.88rem; color: #94a3b8; margin-bottom: 8px;">Main district headquarters serving Chowk &amp; Civil Lines.</p>
          <a href="<?php echo SITE_URL; ?>packers-and-movers-in-azamgarh" title="Packers Movers Azamgarh Master Hub →" style="color: #f59e0b; text-decoration: underline; font-weight: 600; font-size: 0.88rem;">
            Packers Movers Azamgarh Master Hub →
          </a>
        </div>

        <div style="background: #101c40; padding: 18px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #ffffff; font-size: 1.05rem; margin-bottom: 6px;">Phulpur Shifting Sector</h4>
          <p style="font-size: 0.88rem; color: #94a3b8; margin-bottom: 8px;">Doorstep household packing &amp; local relocation.</p>
          <a href="<?php echo SITE_URL; ?>packers-and-movers-in-phulpur-azamgarh" title="Packers Movers Phulpur Azamgarh →" style="color: #f59e0b; text-decoration: underline; font-weight: 600; font-size: 0.88rem;">
            Packers Movers Phulpur Azamgarh →
          </a>
        </div>

        <div style="background: #101c40; padding: 18px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #ffffff; font-size: 1.05rem; margin-bottom: 6px;">Azamgarh Car Carrier</h4>
          <p style="font-size: 0.88rem; color: #94a3b8; margin-bottom: 8px;">Enclosed vehicle container car shipping.</p>
          <a href="<?php echo SITE_URL; ?>car-transportation-in-azamgarh" title="Car Transportation Azamgarh →" style="color: #f59e0b; text-decoration: underline; font-weight: 600; font-size: 0.88rem;">
            Car Transportation Azamgarh →
          </a>
        </div>

        <div style="background: #101c40; padding: 18px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #ffffff; font-size: 1.05rem; margin-bottom: 6px;">Azamgarh Bike Carrier</h4>
          <p style="font-size: 0.88rem; color: #94a3b8; margin-bottom: 8px;">Doorstep motorcycle shipping &amp; 7-layer bubble wrap.</p>
          <a href="<?php echo SITE_URL; ?>bike-transportation-in-azamgarh" title="Bike Transportation Azamgarh →" style="color: #f59e0b; text-decoration: underline; font-weight: 600; font-size: 0.88rem;">
            Bike Transportation Azamgarh →
          </a>
        </div>
      </div>

    </div>
  </section>

  <!-- 8. Intercity Route Network Grid -->
  <section style="padding: 60px 0; background: #0b132b; color: #ffffff;">
    <div class="container" style="max-width: 900px;">
      
      <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Major Highway Corridors</span>
      <h2 style="font-size: 2.1rem; font-weight: 800; color: #ffffff; margin: 10px 0 20px 0;">
        Popular Relocation Routes from <span style="color: #f59e0b;">Sagri</span>
      </h2>

      <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 16px; margin-bottom: 25px;">
        <div style="background: #172a54; padding: 18px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #ffffff; font-size: 1.05rem; margin-bottom: 6px;">Sagri to Delhi-NCR</h4>
          <p style="font-size: 0.88rem; color: #94a3b8; margin-bottom: 8px;">Express household shifting to Delhi, Noida, Gurgaon via Purvanchal Expressway.</p>
        </div>

        <div style="background: #172a54; padding: 18px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #ffffff; font-size: 1.05rem; margin-bottom: 6px;">Sagri to Mumbai / Pune</h4>
          <p style="font-size: 0.88rem; color: #94a3b8; margin-bottom: 8px;">Long-distance insured household &amp; vehicle relocation to Maharashtra.</p>
        </div>

        <div style="background: #172a54; padding: 18px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #ffffff; font-size: 1.05rem; margin-bottom: 6px;">Sagri to Bangalore / Hyderabad</h4>
          <p style="font-size: 0.88rem; color: #94a3b8; margin-bottom: 8px;">South India express containerized goods transport with GPS tracking.</p>
        </div>

        <div style="background: #172a54; padding: 18px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #ffffff; font-size: 1.05rem; margin-bottom: 6px;">Sagri to Lucknow / Gorakhpur</h4>
          <p style="font-size: 0.88rem; color: #94a3b8; margin-bottom: 8px;">Regional intra-state shifting services across Eastern UP.</p>
        </div>
      </div>

    </div>
  </section>

  <!-- 9. IBA Approved GST Billing Documentation -->
  <section style="padding: 60px 0; background: #070d1e; color: #ffffff;">
    <div class="container" style="max-width: 900px;">
      
      <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Official Claims Documentation</span>
      <h2 style="font-size: 2.1rem; font-weight: 800; color: #ffffff; margin: 10px 0 20px 0;">
        IBA Approved GST Billing &amp; Claim Documents
      </h2>

      <div style="background: #101c40; border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 12px; padding: 25px;">
        <h4 style="color: #f59e0b; font-size: 1.1rem; margin-bottom: 12px; font-weight: 700;">Government &amp; Defense Claim Paperwork Issued:</h4>
        <ol style="margin: 0; padding-left: 20px; color: #cbd5e1; line-height: 1.8; font-size: 0.95rem;">
          <li><strong>Official GST Tax Invoice</strong> (with SAC code &amp; GSTIN).</li>
          <li><strong>Consignment Note (Lorry Receipt / LR Copy)</strong> with truck number.</li>
          <li><strong>Itemized Household Packing Inventory Sheet</strong> signed at pickup.</li>
          <li><strong>IBA Approved Registration Code &amp; Official Stamp</strong>.</li>
          <li><strong>100% Comprehensive Transit Insurance Policy Certificate</strong>.</li>
          <li><strong>Official Money Receipt</strong> for employee claim submission.</li>
        </ol>
      </div>

    </div>
  </section>

  <!-- 10. 10 to 15 Detailed FAQs + Valid JSON-LD FAQPage Schema -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "mainEntity": [
      <?php 
      $schema_items = [];
      foreach ($faq_list as $faq) {
          $schema_items[] = '{
            "@type": "Question",
            "name": ' . json_encode($faq['q']) . ',
            "acceptedAnswer": {
              "@type": "Answer",
              "text": ' . json_encode($faq['a']) . '
            }
          }';
      }
      echo implode(',', $schema_items);
      ?>
    ]
  }
  </script>

  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "MovingCompany",
    "name": "Shree Ashirwad Packers and Movers",
    "description": "Top packers and movers in Sagri, Azamgarh offering household shifting, vehicle shipping, and IBA GST bills.",
    "url": "<?php echo $canonical_url; ?>",
    "telephone": "<?php echo SITE_PHONE_RAW; ?>",
    "address": {
      "@type": "PostalAddress",
      "addressLocality": "Sagri, Azamgarh",
      "addressRegion": "Uttar Pradesh",
      "addressCountry": "IN"
    },
    "areaServed": "Sagri, Azamgarh, Uttar Pradesh",
    "priceRange": "₹3500 - ₹25000"
  }
  </script>

  <section style="padding: 60px 0; background: #0b132b; color: #ffffff;">
    <div class="container" style="max-width: 900px;">
      
      <div class="section-header text-center" style="margin-bottom: 40px;">
        <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Got Questions?</span>
        <h2 style="font-size: 2.1rem; font-weight: 800; color: #ffffff; margin-top: 10px;">
          Frequently Asked Questions About <span style="color: #f59e0b;">Shifting in Sagri</span>
        </h2>
      </div>

      <div style="display: flex; flex-direction: column; gap: 14px;">
        <?php foreach ($faq_list as $idx => $faq): ?>
          <div style="background: #101c40; padding: 20px 24px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
            <h3 style="font-size: 1.05rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Q<?php echo ($idx + 1); ?>: <?php echo htmlspecialchars($faq['q']); ?></h3>
            <p style="font-size: 0.92rem; color: #cbd5e1; margin: 0; line-height: 1.7;">
              <?php echo htmlspecialchars($faq['a']); ?>
            </p>
          </div>
        <?php endforeach; ?>
      </div>

    </div>
  </section>

  <!-- 11. Call-To-Action (CTA) Conversion Footer -->
  <section style="padding: 60px 0; background: linear-gradient(135deg, #172a54 0%, #0b132b 100%); border-top: 1.5px solid rgba(245, 158, 11, 0.4); color: #ffffff;">
    <div class="container" style="max-width: 900px; text-align: center;">
      
      <span class="section-tag" style="background: rgba(245, 158, 11, 0.2); color: #f59e0b; padding: 6px 16px; border-radius: 20px; font-size: 0.85rem; font-weight: 700; text-transform: uppercase;">
        Book Shifting in Sagri
      </span>

      <h2 style="font-size: 2.2rem; font-weight: 800; margin: 15px 0 15px 0; color: #ffffff;">
        Planning to Shift House from <span style="color: #f59e0b;">Sagri Azamgarh</span>?
      </h2>

      <p style="font-size: 1.05rem; color: #cbd5e1; max-width: 750px; margin: 0 auto 30px auto; line-height: 1.7;">
        Call our Sagri moving experts today for zero-damage packing, insured transport, and IBA-approved GST bills.
      </p>

      <div style="display: flex; gap: 15px; justify-content: center; flex-wrap: wrap;">
        <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Now" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 30px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1.05rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
          <i class="fas fa-phone-alt"></i> Call Now: <?php echo SITE_PHONE; ?>
        </a>
        <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20a%20shifting%20quote%20for%20Sagri%20Azamgarh." title="Chat on WhatsApp" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 30px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1.05rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
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
  var extraMsg = form.querySelector('[name="message"]').value;
  
  var message = "Hello Shree Ashirwad Packers & Movers,\n\nI would like to request a Shifting Quote for Sagri Azamgarh:\n- Name: " + name + "\n- Phone: " + phone + "\n- Moving From: " + moveFrom + "\n- Moving To: " + moveTo;
  
  if (extraMsg && extraMsg.trim() !== '') {
    message += "\n- Items Detail: " + extraMsg;
  }
  
  var whatsappUrl = "https://api.whatsapp.com/send?phone=918409531615&text=" + encodeURIComponent(message);
  window.location.href = whatsappUrl;
}
</script>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
