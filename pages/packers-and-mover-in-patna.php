<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "Packers and Mover in Patna | Professional Shifting Services";
$page_desc = "Top-rated packers and mover in Patna. Shree Ashirwad Packers and Movers provides local and long-distance house, office, bike, and car shifting with 7-layer packaging and IBA GST bills.";
$page_keywords = "packers and mover in patna, packer and mover patna, best packer and mover patna, home shifting patna";
$canonical_url = "https://shreeashirwadpackersandmovers.com/pages/packers-and-mover-in-patna.php";

$page_city = "Patna, Bihar";

$faq_list = [
    [
        'q' => 'Why choose Shree Ashirwad Packers and Mover in Patna?',
        'a' => 'We are a government-registered and IBA-approved packer and mover in Patna, offering 7-layer safety packaging, trained loading staff, transit insurance, and GPS vehicle tracking.'
    ],
    [
        'q' => 'What are the charges for hiring a packer and mover in Patna?',
        'a' => '1 BHK local shifting costs ₹3,500–₹6,500, 2 BHK ranges from ₹6,500–₹11,500, and 3 BHK home shifting costs ₹10,500–₹16,500.'
    ],
    [
        'q' => 'What services are included in your packing and moving package?',
        'a' => 'Services include multi-layer item wrapping, disassembly/reassembly of furniture, loading, enclosed container transport, unloading, and unpacking.'
    ],
    [
        'q' => 'Do you provide IBA-approved invoices for claim reimbursement?',
        'a' => 'Yes, 100% genuine IBA-approved GST invoices, money receipts, and consignment bills are provided for employee relocation claims.'
    ],
    [
        'q' => 'How early should I book a packer and mover in Patna?',
        'a' => 'Booking 24 to 48 hours in advance ensures dedicated vehicle assignment and preferred time slot booking.'
    ],
    [
        'q' => 'Is transit insurance available for household items?',
        'a' => 'Yes, full transit insurance coverage (1.5% declared value) is issued prior to vehicle departure.'
    ],
    [
        'q' => 'Do you relocate cars and bikes from Patna to other states?',
        'a' => 'Yes, we provide specialized enclosed car carrier and bike container shipping across all major Indian cities.'
    ],
    [
        'q' => 'Do you disassemble and reassemble split ACs and heavy furniture?',
        'a' => 'Yes, experienced technicians safely disassemble and reassemble beds, wardrobes, dining tables, split ACs, and TV wall mounts.'
    ],
    [
        'q' => 'Can you perform office and corporate relocations in Patna?',
        'a' => 'Yes, we handle corporate office shifting, computer systems, modular workstations, and official file archives with complete confidentiality.'
    ],
    [
        'q' => 'How can I get an instant price quotation from your Patna office?',
        'a' => 'Call +91 8409531615 or click WhatsApp for an immediate price estimate from our Patna head office.'
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
  <section class="hero-section" style="background: linear-gradient(135deg, #0b132b 0%, #1c2541 100%); padding: 60px 0; color: #ffffff;">
    <div class="container">
      <div class="hero-grid" style="display: grid; grid-template-columns: 1.2fr 0.8fr; gap: 40px; align-items: center;">
        
        <!-- Hero Text Column -->
        <div class="hero-text">
          <span class="section-tag" style="background: rgba(14, 165, 233, 0.15); color: #0ea5e9; border: 1px solid rgba(14, 165, 233, 0.4); padding: 6px 16px; border-radius: 20px; font-size: 0.85rem; font-weight: 700; text-transform: uppercase; display: inline-block; margin-bottom: 15px;">
            PATNA PACKER AND MOVER SERVICES
          </span>
          <h1 style="font-size: 2.7rem; font-weight: 800; line-height: 1.2; margin-bottom: 20px; color: #ffffff;">
            Verified <span style="color: #0ea5e9;">Packers and Mover in Patna</span>
          </h1>
          <p style="font-size: 1.12rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 25px;">
            Shree Ashirwad Packers and Movers provides top-rated household, office, and vehicle relocation services in Patna. Enjoy multi-layer bubble wrapping, transit insurance, and IBA-approved GST bills.
          </p>

          <div style="display: flex; gap: 15px; flex-wrap: wrap; margin-bottom: 30px;">
            <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Now" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
              <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call Now: <?php echo SITE_PHONE; ?>
            </a>
            <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20a%20Packers%20and%20Mover%20quote%20for%20Patna." title="Chat on WhatsApp" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
              <i class="fab fa-whatsapp" style="margin-right: 8px;"></i> Chat on WhatsApp
            </a>
          </div>

          <div style="display: flex; gap: 20px; font-size: 0.9rem; color: #94a3b8;">
            <span><strong style="color: #0ea5e9;">Multi-Layer</strong> Packaging</span>
            <span><strong style="color: #0ea5e9;">100% Insured</strong> Transport</span>
            <span><strong style="color: #0ea5e9;">IBA Approved</strong> GST Bill</span>
          </div>
        </div>

        <!-- Hero Lead Form Column -->
        <div class="hero-form-card" style="background: rgba(255, 255, 255, 0.05); backdrop-filter: blur(10px); border: 1.5px solid rgba(14, 165, 233, 0.3); border-radius: 16px; padding: 30px; box-shadow: 0 15px 35px rgba(0,0,0,0.4);">
          <h2 style="font-size: 1.4rem; color: #ffffff; margin-bottom: 8px; font-weight: 700; text-align: center;">Get Instant Shifting Quote</h2>
          <p style="font-size: 0.85rem; color: #94a3b8; text-align: center; margin-bottom: 20px;">Receive instant transparent price on WhatsApp</p>

          <form action="#" method="POST" onsubmit="sendHeroWhatsAppLead(event, this);">
            <div style="margin-bottom: 14px;">
              <input type="text" name="name" class="form-control" placeholder="Your Full Name" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="margin-bottom: 14px;">
              <input type="tel" name="phone" class="form-control" placeholder="10-Digit Phone Number" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 10px; margin-bottom: 14px;">
              <input type="text" name="move_from" class="form-control" value="Patna (Pickup)" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
              <input type="text" name="move_to" class="form-control" placeholder="Destination City" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <button type="submit" style="width: 100%; padding: 14px; background: linear-gradient(135deg, #0ea5e9 0%, #0284c7 100%); color: #ffffff; border: none; border-radius: 50px; font-weight: 700; font-size: 1rem; cursor: pointer;">
              Get Instant Estimate &rarr;
            </button>
          </form>
        </div>

      </div>
    </div>
  </section>

  <!-- Detailed Service & Rate Matrix Section -->
  <section style="padding: 60px 0; background: #0b132b; color: #e2e8f0; line-height: 1.8;">
    <div class="container" style="max-width: 1000px;">
      
      <span class="section-tag" style="color: #0ea5e9; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">
        PROFESSIONAL PATNA PACKING AND MOVING
      </span>
      <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin: 10px 0 20px 0;">
        Leading Packers and Mover in <span style="color: #0ea5e9;">Patna</span>
      </h2>
      
      <p style="font-size: 1.05rem; color: #cbd5e1; margin-bottom: 25px;">
        Finding a trustworthy packer and mover in Patna is crucial for hassle-free relocation. Shree Ashirwad Packers and Movers brings over 10 years of experience, a fleet of owned container vehicles, and trained packers to ensure your move is completely seamless.
      </p>

      <!-- Rate Matrix Table -->
      <div style="overflow-x: auto; margin: 40px 0;">
        <h3 style="font-size: 1.5rem; color: #ffffff; font-weight: 700; margin-bottom: 15px;">
          Estimated Relocation Charges in Patna
        </h3>
        <table style="width: 100%; border-collapse: collapse; background: #172a54; border-radius: 10px; overflow: hidden; border: 1px solid rgba(14, 165, 233, 0.3);">
          <thead>
            <tr style="background: #1e3a8a; color: #0ea5e9; text-align: left;">
              <th style="padding: 14px 16px;">Shifting Category</th>
              <th style="padding: 14px 16px;">Packing & Handling</th>
              <th style="padding: 14px 16px;">Transport Fee</th>
              <th style="padding: 14px 16px;">Total Approx Charges</th>
            </tr>
          </thead>
          <tbody>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.08);">
              <td style="padding: 12px 16px; font-weight: 700; color: #fff;">1 BHK House Shifting</td>
              <td style="padding: 12px 16px; color: #cbd5e1;">₹1,800 - ₹2,800</td>
              <td style="padding: 12px 16px; color: #cbd5e1;">₹1,700 - ₹3,700</td>
              <td style="padding: 12px 16px; color: #6ee7b7;">₹3,500 - ₹6,500</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.08);">
              <td style="padding: 12px 16px; font-weight: 700; color: #fff;">2 BHK House Shifting</td>
              <td style="padding: 12px 16px; color: #cbd5e1;">₹3,200 - ₹5,200</td>
              <td style="padding: 12px 16px; color: #cbd5e1;">₹3,300 - ₹6,300</td>
              <td style="padding: 12px 16px; color: #6ee7b7;">₹6,500 - ₹11,500</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.08);">
              <td style="padding: 12px 16px; font-weight: 700; color: #fff;">3 BHK House / Villa</td>
              <td style="padding: 12px 16px; color: #cbd5e1;">₹5,200 - ₹8,200</td>
              <td style="padding: 12px 16px; color: #cbd5e1;">₹5,300 - ₹8,300</td>
              <td style="padding: 12px 16px; color: #6ee7b7;">₹10,500 - ₹16,500</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.08);">
              <td style="padding: 12px 16px; font-weight: 700; color: #fff;">Office / Commercial Relocation</td>
              <td style="padding: 12px 16px; color: #cbd5e1;">₹6,000 - ₹12,000</td>
              <td style="padding: 12px 16px; color: #cbd5e1;">₹6,000 - ₹14,000</td>
              <td style="padding: 12px 16px; color: #6ee7b7;">₹12,000 - ₹26,000</td>
            </tr>
          </tbody>
        </table>
      </div>

    </div>
  </section>

  <!-- FAQ Section with Schema Support -->
  <section class="faq-section" style="padding: 60px 0; background: #070d1e; color: #ffffff;">
    <div class="container" style="max-width: 900px;">
      <div style="text-align: center; margin-bottom: 40px;">
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff;">Frequently Asked Questions (Packers and Mover Patna)</h2>
      </div>

      <div style="display: flex; flex-direction: column; gap: 15px;">
        <?php foreach ($faq_list as $index => $faq): ?>
          <div style="background: #101c40; padding: 20px; border-radius: 8px; border: 1px solid rgba(14, 165, 233, 0.2);">
            <h4 style="font-size: 1.1rem; color: #0ea5e9; margin-bottom: 8px; font-weight: 700;">
              <?php echo ($index + 1) . '. ' . htmlspecialchars($faq['q']); ?>
            </h4>
            <p style="font-size: 0.98rem; color: #cbd5e1; line-height: 1.7; margin: 0;">
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

<!-- Inline JSON-LD Structured Data Schema -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    <?php 
    $schema_faqs = [];
    foreach ($faq_list as $faq) {
        $schema_faqs[] = '{
          "@type": "Question",
          "name": ' . json_encode($faq['q']) . ',
          "acceptedAnswer": {
            "@type": "Answer",
            "text": ' . json_encode($faq['a']) . '
          }
        }';
    }
    echo implode(',', $schema_faqs);
    ?>
  ]
}
</script>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "MovingCompany",
  "name": "Shree Ashirwad Packers and Movers",
  "description": "Professional packers and mover in Patna offering household, office, and vehicle relocation services.",
  "url": "<?php echo $canonical_url; ?>",
  "telephone": "<?php echo SITE_PHONE_RAW; ?>",
  "address": {
    "@type": "PostalAddress",
    "addressLocality": "Patna",
    "addressRegion": "Bihar",
    "addressCountry": "IN"
  },
  "areaServed": "Patna, Bihar",
  "priceRange": "₹3500 - ₹26000"
}
</script>

<script>
function sendHeroWhatsAppLead(event, form) {
  event.preventDefault();
  var name = form.querySelector('[name="name"]').value;
  var phone = form.querySelector('[name="phone"]').value;
  var moveFrom = form.querySelector('[name="move_from"]').value;
  var moveTo = form.querySelector('[name="move_to"]').value;
  
  var message = "Hello Shree Ashirwad Packers,\n\nI would like a Packers and Mover Quote for Patna:\n- Name: " + name + "\n- Phone: " + phone + "\n- Moving From: " + moveFrom + "\n- Moving To: " + moveTo;
  
  var whatsappUrl = "https://api.whatsapp.com/send?phone=918409531615&text=" + encodeURIComponent(message);
  window.open(whatsappUrl, '_blank');
}
</script>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
