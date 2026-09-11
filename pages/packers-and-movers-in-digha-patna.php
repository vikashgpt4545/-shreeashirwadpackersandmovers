<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "Packers and Movers in Digha Patna | Professional Shifting Services";
$page_desc = "Hire top-rated packers and movers in Digha Patna. Shree Ashirwad Packers offers secure household shifting, office relocations, and room moving services with zero hidden costs.";
$page_keywords = "packers and movers in digha patna, best packers and movers in digha patna, household shifting digha patna, room moving digha patna, office relocation digha patna, shree ashirwad packers digha patna";
$canonical_url = "https://shreeashirwadpackersandmovers.com/pages/packers-and-movers-in-digha-patna.php";

$faq_list = [
  [
    "q" => "What are the typical packing and moving charges in Digha Patna?",
    "a" => "Local shifting charges in Digha Patna start from Rs 3,500 for 1 BHK household items and vary depending on volume, packing materials, and labor required."
  ],
  [
    "q" => "Do you provide door-to-door shifting in Digha Patna?",
    "a" => "Yes, we provide 100% door-to-door packing, loading, transportation, unloading, and unpacking services across Digha Ghat, JP Ganga Path, Ashiana-Digha Road, Rajiv Nagar, Makhdumpur, and all surrounding Patna localities."
  ],
  [
    "q" => "How far in advance should I book my move in Digha?",
    "a" => "We recommend booking at least 2 to 4 days prior to your preferred moving date to secure your desired time slot and dedicated transport vehicle."
  ],
  [
    "q" => "What materials do you use for fragile household items?",
    "a" => "We use high-density 80-GSM bubble wraps, corrugated fiberboard boxes, stretch films, edge guards, and waterproof tarpaulins for complete safety."
  ],
  [
    "q" => "Is goods transit insurance available for local shifting in Digha Patna?",
    "a" => "Yes, full transit insurance coverage is available to protect your valuable goods against any unforeseen damage during loading or transit."
  ],
  [
    "q" => "How do you utilize JP Ganga Path Expressway for fast relocation from Digha?",
    "a" => "JP Ganga Path (Marine Drive Patna) offers high-speed, traffic-free connectivity for our moving trucks to dispatch goods rapidly across Patna."
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
    "q" => "Do you provide bike and car transportation from Digha Patna?",
    "a" => "Yes, we offer specialized closed-car container and hydraulic bike carrier transport services across India from Digha Patna."
  ],
  [
    "q" => "How can I get an instant shifting quote for Digha Patna?",
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
            PACKERS AND MOVERS DIGHA PATNA
          </span>
          <h1 style="font-size: 2.7rem; font-weight: 800; line-height: 1.2; margin-bottom: 20px; color: #ffffff;">
            Professional <span style="color: #f59e0b;">Packers and Movers in Digha Patna</span>
          </h1>
          <p style="font-size: 1.12rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 25px;">
            Hire trusted packers and movers in Digha Patna. Shree Ashirwad Packers and Movers offers secure household shifting, office relocations, and room moving services with zero hidden costs. Complete door-to-door relocation coverage across Digha Ghat, JP Ganga Path, Digha-Ashiana Road, Rajiv Nagar, and Makhdumpur.
          </p>

          <div style="display: flex; gap: 15px; flex-wrap: wrap; margin-bottom: 30px;">
            <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Now" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
              <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call Now: <?php echo SITE_PHONE; ?>
            </a>
            <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20a%20shifting%20quote%20for%20Digha%20Patna." title="Chat on WhatsApp" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
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
          <h2 style="font-size: 1.4rem; color: #ffffff; margin-bottom: 8px; font-weight: 700; text-align: center;">Get Digha Quote</h2>
          <p style="font-size: 0.85rem; color: #94a3b8; text-align: center; margin-bottom: 20px;">Receive transparent cost estimation on WhatsApp in 2 minutes</p>

          <form action="#" method="POST" onsubmit="sendHeroWhatsAppLead(event, this);">
            <div style="margin-bottom: 14px;">
              <input type="text" name="name" class="form-control" placeholder="Your Full Name" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="margin-bottom: 14px;">
              <input type="tel" name="phone" class="form-control" placeholder="10-Digit Phone Number" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 10px; margin-bottom: 14px;">
              <input type="text" name="move_from" class="form-control" value="Digha Patna" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
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
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #0f172a;">Digha Patna Shifting Price Matrix</h2>
        <p style="color: #64748b;">Transparent estimates for local home and office relocation in Digha Patna</p>
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
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #0f172a;">Why Choose Shree Ashirwad in Digha Patna</h2>
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
          <p style="color: #64748b; font-size: 0.95rem; line-height: 1.6;">Punctual pickup and prompt delivery across Digha Patna with zero unnecessary delays.</p>
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
        <p style="color: #64748b;">Common queries regarding packers and movers services in Digha Patna</p>
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
      <h2 style="font-size: 2.2rem; font-weight: 800; margin-bottom: 15px;">Ready for a Seamless Move in Digha Patna?</h2>
      <p style="color: #cbd5e1; font-size: 1.1rem; max-width: 700px; margin: 0 auto 30px;">Contact Shree Ashirwad Packers today for a free on-site survey and instant price quote.</p>
      <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap;">
        <a href="tel:<?php echo SITE_PHONE_RAW; ?>" style="padding: 14px 32px; background: #e11d48; color: #ffffff; border-radius: 50px; font-weight: 700; text-decoration: none;">
          <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call <?php echo SITE_PHONE; ?>
        </a>
        <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20need%20moving%20help%20in%20Digha%20Patna." target="_blank" style="padding: 14px 32px; background: #10b981; color: #ffffff; border-radius: 50px; font-weight: 700; text-decoration: none;">
          <i class="fab fa-whatsapp" style="margin-right: 8px;"></i> WhatsApp Quick Quote
        </a>
      </div>
    </div>
  </section>

</main>

<!-- Structured Data Schemas -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "MovingCompany",
  "name": "Shree Ashirwad Packers and Movers Digha Patna",
  "image": "https://shreeashirwadpackersandmovers.com/assets/images/logo.png",
  "telephone": "+91-8409531615",
  "url": "<?php echo $canonical_url; ?>",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "Digha",
    "addressLocality": "Patna",
    "addressRegion": "Bihar",
    "postalCode": "800011",
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

<script>
function sendHeroWhatsAppLead(event, form) {
  event.preventDefault();
  var name = form.querySelector('[name="name"]').value;
  var phone = form.querySelector('[name="phone"]').value;
  var moveFrom = form.querySelector('[name="move_from"]').value;
  var moveTo = form.querySelector('[name="move_to"]').value;
  
  var message = "Hello Shree Ashirwad Packers,\n\nI would like a Shifting Quote for Digha Patna:\n- Name: " + name + "\n- Phone: " + phone + "\n- Moving From: " + moveFrom + "\n- Moving To: " + moveTo;
  
  var whatsappUrl = "https://api.whatsapp.com/send?phone=918409531615&text=" + encodeURIComponent(message);
  window.open(whatsappUrl, '_blank');
}
</script>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
