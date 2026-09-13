<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "Packers and Movers in Anisabad Patna | Professional Shifting Services";
$page_desc = "Hire trusted packers and movers in Anisabad Patna. Shree Ashirwad Packers offers secure household shifting, office relocations, and vehicle transport in Anisabad with zero hidden costs.";
$page_keywords = "packers and movers in anisabad patna, best packers and movers in anisabad patna, household shifting anisabad patna, room moving anisabad patna, office relocation anisabad patna, shree ashirwad packers anisabad patna";
$canonical_url = "https://shreeashirwadpackersandmovers.com/pages/packers-and-movers-in-anisabad-patna.php";

$faq_list = [
  [
    "q" => "What are the typical packing and moving charges in Anisabad Patna?",
    "a" => "Local shifting charges in Anisabad Patna start from Rs 3,500 for 1 BHK household items and vary depending on volume, packing materials, and labor required."
  ],
  [
    "q" => "Do you provide door-to-door shifting in Anisabad Patna?",
    "a" => "Yes, we provide 100% door-to-door packing, loading, transportation, unloading, and unpacking services across Anisabad and all surrounding Patna localities."
  ],
  [
    "q" => "How far in advance should I book my move in Anisabad?",
    "a" => "We recommend booking at least 2 to 4 days prior to your preferred moving date to secure your desired time slot and dedicated transport vehicle."
  ],
  [
    "q" => "What materials do you use for fragile household items?",
    "a" => "We use high-density 80-GSM bubble wraps, corrugated fiberboard boxes, stretch films, edge guards, and waterproof tarpaulins for complete safety."
  ],
  [
    "q" => "Is goods transit insurance available for local shifting in Anisabad Patna?",
    "a" => "Yes, full transit insurance coverage is available to protect your valuable goods against any unforeseen damage during loading or transit."
  ],
  [
    "q" => "Can you handle single-room or partial house shifting in Anisabad?",
    "a" => "Absolutely. We cater to single-item moves, student room shifting, 1 BHK, 2 BHK, and large villa relocations in Anisabad Patna."
  ],
  [
    "q" => "Are there any hidden fees or extra charges on moving day?",
    "a" => "No, our written cost quotations are completely transparent with zero hidden fees or unexpected post-move surcharges."
  ],
  [
    "q" => "Do you dismantle and reassemble heavy furniture?",
    "a" => "Yes, our trained crew carefully dismantles beds, wardrobes, modular tables, and reassembles them securely at your destination."
  ],
  [
    "q" => "Do you provide bike and car transportation from Anisabad Patna?",
    "a" => "Yes, we offer specialized closed-car container and hydraulic bike carrier transport services across India from Anisabad Patna."
  ],
  [
    "q" => "How can I get an instant shifting quote for Anisabad Patna?",
    "a" => "Call our customer support team directly at +91 8409531615 or submit your requirements on our online WhatsApp lead form for an instant free estimate."
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
        <span class="breadcrumb-item"><a href="<?php echo SITE_URL; ?>pages/packers-and-movers-in-patna.php" title="Patna">Patna</a></span>
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
            PACKERS AND MOVERS ANISABAD PATNA
          </span>
          <h1 style="font-size: 2.7rem; font-weight: 800; line-height: 1.2; margin-bottom: 20px; color: #ffffff;">
            Professional <span style="color: #f59e0b;">Packers and Movers in Anisabad Patna</span>
          </h1>
          <p style="font-size: 1.12rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 25px;">
            Hire trusted packers and movers in Anisabad Patna. Shree Ashirwad Packers and Movers offers secure household shifting, office relocations, and room moving services with zero hidden costs. Complete door-to-door relocation coverage across Anisabad Golambar, Gardanibagh, Phulwari Sharif Road, Saketpuri, and all surrounding Patna sectors.
          </p>

          <div style="display: flex; gap: 15px; flex-wrap: wrap; margin-bottom: 30px;">
            <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Now" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
              <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call Now: <?php echo SITE_PHONE; ?>
            </a>
            <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20a%20shifting%20quote%20for%20Anisabad%20Patna." title="Chat on WhatsApp" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
              <i class="fab fa-whatsapp" style="margin-right: 8px;"></i> Chat on WhatsApp
            </a>
          </div>

          <div style="display: flex; gap: 20px; font-size: 0.9rem; color: #94a3b8;">
            <span><strong style="color: #f59e0b;">100% Insured</strong> Shifting</span>
            <span><strong style="color: #f59e0b;">7-Layer</strong> Bubble Packaging</span>
            <span><strong style="color: #f59e0b;">Door-to-Door</strong> Delivery</span>
          </div>
        </div>

        <!-- Hero Lead Form Column -->
        <div class="hero-form-card" style="background: rgba(255, 255, 255, 0.05); backdrop-filter: blur(10px); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 16px; padding: 30px; box-shadow: 0 15px 35px rgba(0,0,0,0.4);">
          <h2 style="font-size: 1.4rem; color: #ffffff; margin-bottom: 8px; font-weight: 700; text-align: center;">Get Anisabad Patna Quote</h2>
          <p style="font-size: 0.85rem; color: #94a3b8; text-align: center; margin-bottom: 20px;">Receive transparent cost estimation on WhatsApp in 2 minutes</p>

          <form action="#" method="POST" onsubmit="sendHeroWhatsAppLead(event, this);">
            <div style="margin-bottom: 14px;">
              <input type="text" name="name" class="form-control" placeholder="Your Full Name" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="margin-bottom: 14px;">
              <input type="tel" name="phone" class="form-control" placeholder="10-Digit Phone Number" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 10px; margin-bottom: 14px;">
              <input type="text" name="move_from" class="form-control" value="Anisabad Patna" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
              <input type="text" name="move_to" class="form-control" placeholder="Moving To (City/Area)" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <button type="submit" style="width: 100%; padding: 14px; background: linear-gradient(135deg, #d32f2f 0%, #f59e0b 100%); color: #ffffff; border: none; border-radius: 50px; font-weight: 700; font-size: 1rem; cursor: pointer;">
              Get Instant Estimate Now &rarr;
            </button>
          </form>
        </div>

      </div>
    </div>
  </section>

  <!-- Key Stats Counter Bar -->
  <section style="background: #0f172a; padding: 30px 0; border-bottom: 1px solid rgba(255,255,255,0.1); color: #ffffff;">
    <div class="container">
      <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 20px; text-align: center;">
        <div style="padding: 15px; background: rgba(255,255,255,0.03); border-radius: 10px;">
          <div style="font-size: 2rem; font-weight: 800; color: #f59e0b;">12,500+</div>
          <div style="font-size: 0.85rem; color: #94a3b8;">Happy Relocations</div>
        </div>
        <div style="padding: 15px; background: rgba(255,255,255,0.03); border-radius: 10px;">
          <div style="font-size: 2rem; font-weight: 800; color: #f59e0b;">100%</div>
          <div style="font-size: 0.85rem; color: #94a3b8;">Safety & Protection</div>
        </div>
        <div style="padding: 15px; background: rgba(255,255,255,0.03); border-radius: 10px;">
          <div style="font-size: 2rem; font-weight: 800; color: #f59e0b;">15+ Yrs</div>
          <div style="font-size: 0.85rem; color: #94a3b8;">Shifting Experience</div>
        </div>
        <div style="padding: 15px; background: rgba(255,255,255,0.03); border-radius: 10px;">
          <div style="font-size: 2rem; font-weight: 800; color: #f59e0b;">100% GST</div>
          <div style="font-size: 0.85rem; color: #94a3b8;">IBA Approved Bills</div>
        </div>
      </div>
    </div>
  </section>

  <!-- Local Shifting Rate Matrix Section -->
  <section style="padding: 60px 0; background: #ffffff;">
    <div class="container">
      <div style="text-align: center; margin-bottom: 40px;">
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #0f172a;">Anisabad Patna Shifting Price Matrix</h2>
        <p style="color: #64748b;">Transparent estimates for local home and office relocation in Anisabad Patna</p>
      </div>

      <div style="overflow-x: auto;">
        <table style="width: 100%; border-collapse: collapse; margin-bottom: 20px; border: 1px solid #e2e8f0;">
          <thead>
            <tr style="background: #0f172a; color: #ffffff;">
              <th style="padding: 14px; text-align: left; border: 1px solid #334155;">Shifting Type</th>
              <th style="padding: 14px; text-align: left; border: 1px solid #334155;">Packing Charges</th>
              <th style="padding: 14px; text-align: left; border: 1px solid #334155;">Labor & Loading</th>
              <th style="padding: 14px; text-align: left; border: 1px solid #334155;">Total Est. Cost</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td style="padding: 12px; border: 1px solid #e2e8f0;"><strong>1 BHK Household</strong></td>
              <td style="padding: 12px; border: 1px solid #e2e8f0;">Rs 1,500 - 2,500</td>
              <td style="padding: 12px; border: 1px solid #e2e8f0;">Rs 1,500 - 2,000</td>
              <td style="padding: 12px; border: 1px solid #e2e8f0; color: #d32f2f; font-weight: 700;">Rs 3,500 - 6,500</td>
            </tr>
            <tr style="background: #f8fafc;">
              <td style="padding: 12px; border: 1px solid #e2e8f0;"><strong>2 BHK Household</strong></td>
              <td style="padding: 12px; border: 1px solid #e2e8f0;">Rs 2,500 - 4,000</td>
              <td style="padding: 12px; border: 1px solid #e2e8f0;">Rs 2,500 - 3,500</td>
              <td style="padding: 12px; border: 1px solid #e2e8f0; color: #d32f2f; font-weight: 700;">Rs 6,500 - 10,500</td>
            </tr>
            <tr>
              <td style="padding: 12px; border: 1px solid #e2e8f0;"><strong>3 BHK Household</strong></td>
              <td style="padding: 12px; border: 1px solid #e2e8f0;">Rs 4,000 - 6,500</td>
              <td style="padding: 12px; border: 1px solid #e2e8f0;">Rs 3,500 - 5,000</td>
              <td style="padding: 12px; border: 1px solid #e2e8f0; color: #d32f2f; font-weight: 700;">Rs 10,500 - 16,000</td>
            </tr>
            <tr style="background: #f8fafc;">
              <td style="padding: 12px; border: 1px solid #e2e8f0;"><strong>Complete Office Move</strong></td>
              <td style="padding: 12px; border: 1px solid #e2e8f0;">Rs 5,000 - 10,000</td>
              <td style="padding: 12px; border: 1px solid #e2e8f0;">Rs 4,500 - 8,000</td>
              <td style="padding: 12px; border: 1px solid #e2e8f0; color: #d32f2f; font-weight: 700;">Rs 12,000 - 25,000+</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </section>

  <!-- 6-Card Feature Grid -->
  <section style="padding: 60px 0; background: #f8fafc;">
    <div class="container">
      <div style="text-align: center; margin-bottom: 40px;">
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #0f172a;">Why Choose Shree Ashirwad in Anisabad Patna</h2>
        <p style="color: #64748b;">Comprehensive features for safe and effortless relocation</p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 25px;">
        <div style="background: #ffffff; padding: 25px; border-radius: 12px; border: 1px solid #e2e8f0; box-shadow: 0 4px 6px rgba(0,0,0,0.03);">
          <div style="font-size: 2rem; color: #f59e0b; margin-bottom: 15px;"><i class="fas fa-box-open"></i></div>
          <h3 style="font-size: 1.2rem; font-weight: 700; color: #0f172a; margin-bottom: 10px;">7-Layer Protection</h3>
          <p style="color: #64748b; font-size: 0.95rem; line-height: 1.6;">Heavy-duty bubble sheets, corrugated boxes, stretch wrap, and foam edge covers guarantee total safety.</p>
        </div>

        <div style="background: #ffffff; padding: 25px; border-radius: 12px; border: 1px solid #e2e8f0; box-shadow: 0 4px 6px rgba(0,0,0,0.03);">
          <div style="font-size: 2rem; color: #f59e0b; margin-bottom: 15px;"><i class="fas fa-truck-moving"></i></div>
          <h3 style="font-size: 1.2rem; font-weight: 700; color: #0f172a; margin-bottom: 10px;">Dedicated Vehicles</h3>
          <p style="color: #64748b; font-size: 0.95rem; line-height: 1.6;">Clean, weatherproof closed-container trucks dedicated specifically for your household consignment.</p>
        </div>

        <div style="background: #ffffff; padding: 25px; border-radius: 12px; border: 1px solid #e2e8f0; box-shadow: 0 4px 6px rgba(0,0,0,0.03);">
          <div style="font-size: 2rem; color: #f59e0b; margin-bottom: 15px;"><i class="fas fa-user-shield"></i></div>
          <h3 style="font-size: 1.2rem; font-weight: 700; color: #0f172a; margin-bottom: 10px;">Verified Skilled Crew</h3>
          <p style="color: #64748b; font-size: 0.95rem; line-height: 1.6;">Background-checked packers and loaders experienced in handling delicate appliances and heavy furniture.</p>
        </div>

        <div style="background: #ffffff; padding: 25px; border-radius: 12px; border: 1px solid #e2e8f0; box-shadow: 0 4px 6px rgba(0,0,0,0.03);">
          <div style="font-size: 2rem; color: #f59e0b; margin-bottom: 15px;"><i class="fas fa-clock"></i></div>
          <h3 style="font-size: 1.2rem; font-weight: 700; color: #0f172a; margin-bottom: 10px;">On-Time Delivery</h3>
          <p style="color: #64748b; font-size: 0.95rem; line-height: 1.6;">Punctual pickup and prompt delivery across Anisabad Patna with zero unnecessary delays.</p>
        </div>

        <div style="background: #ffffff; padding: 25px; border-radius: 12px; border: 1px solid #e2e8f0; box-shadow: 0 4px 6px rgba(0,0,0,0.03);">
          <div style="font-size: 2rem; color: #f59e0b; margin-bottom: 15px;"><i class="fas fa-file-invoice-dollar"></i></div>
          <h3 style="font-size: 1.2rem; font-weight: 700; color: #0f172a; margin-bottom: 10px;">Transparent Billing</h3>
          <p style="color: #64748b; font-size: 0.95rem; line-height: 1.6;">100% IBA-approved GST bills with clear cost breakdown for official reimbursement claims.</p>
        </div>

        <div style="background: #ffffff; padding: 25px; border-radius: 12px; border: 1px solid #e2e8f0; box-shadow: 0 4px 6px rgba(0,0,0,0.03);">
          <div style="font-size: 2rem; color: #f59e0b; margin-bottom: 15px;"><i class="fas fa-headset"></i></div>
          <h3 style="font-size: 1.2rem; font-weight: 700; color: #0f172a; margin-bottom: 10px;">24/7 Support</h3>
          <p style="color: #64748b; font-size: 0.95rem; line-height: 1.6;">Dedicated customer helpline to track your shipment status and assist at every step.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- 10-Item FAQ Section -->
  <section style="padding: 60px 0; background: #ffffff;">
    <div class="container">
      <div style="text-align: center; margin-bottom: 40px;">
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #0f172a;">Frequently Asked Questions (FAQs)</h2>
        <p style="color: #64748b;">Common queries regarding packers and movers services in Anisabad Patna</p>
      </div>

      <div style="max-width: 900px; margin: 0 auto;">
        <?php foreach ($faq_list as $index => $faq): ?>
          <div style="margin-bottom: 15px; border: 1px solid #e2e8f0; border-radius: 8px; overflow: hidden;">
            <div style="padding: 18px 20px; background: #f8fafc; font-weight: 700; color: #0f172a; cursor: pointer;">
              Q<?php echo $index + 1; ?>: <?php echo htmlspecialchars($faq['q']); ?>
            </div>
            <div style="padding: 18px 20px; color: #475569; font-size: 0.95rem; line-height: 1.7; background: #ffffff; border-top: 1px solid #e2e8f0;">
              <?php echo htmlspecialchars($faq['a']); ?>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- Call-To-Action (CTA) Conversion Footer -->
  <section style="background: linear-gradient(135deg, #0b132b 0%, #1c2541 100%); padding: 50px 0; color: #ffffff; text-align: center;">
    <div class="container">
      <h2 style="font-size: 2.2rem; font-weight: 800; margin-bottom: 15px;">Ready for a Seamless Move in Anisabad Patna?</h2>
      <p style="color: #cbd5e1; font-size: 1.1rem; max-width: 700px; margin: 0 auto 30px;">Contact Shree Ashirwad Packers today for a free on-site survey and instant price quote.</p>
      <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap;">
        <a href="tel:<?php echo SITE_PHONE_RAW; ?>" style="padding: 14px 32px; background: #e11d48; color: #ffffff; border-radius: 50px; font-weight: 700; text-decoration: none;">
          <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call <?php echo SITE_PHONE; ?>
        </a>
        <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20need%20moving%20help%20in%20Anisabad%20Patna." target="_blank" style="padding: 14px 32px; background: #10b981; color: #ffffff; border-radius: 50px; font-weight: 700; text-decoration: none;">
          <i class="fab fa-whatsapp" style="margin-right: 8px;"></i> WhatsApp Quick Quote
        </a>
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

<!-- Structured Data Schemas -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "MovingCompany",
  "name": "Shree Ashirwad Packers and Movers Anisabad Patna",
  "image": "https://shreeashirwadpackersandmovers.com/assets/images/logo.png",
  "telephone": "+91-8409531615",
  "url": "<?php echo $canonical_url; ?>",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "Anisabad",
    "addressLocality": "Patna",
    "addressRegion": "Bihar",
    "postalCode": "800002",
    "addressCountry": "IN"
  },
  "priceRange": "₹3500 - ₹25000"
}
</script>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    <?php
    $faq_json = [];
    foreach ($faq_list as $faq) {
      $faq_json[] = '{
        "@type": "Question",
        "name": ' . json_encode($faq['q']) . ',
        "acceptedAnswer": {
          "@type": "Answer",
          "text": ' . json_encode($faq['a']) . '
        }
      }';
    }
    echo implode(',', $faq_json);
    ?>
  ]
}
</script>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
