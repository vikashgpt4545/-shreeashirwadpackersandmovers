<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "Packers and Movers Patna to Jammu | Intercity Relocation";
$page_desc = "Hire certified Packers and Movers from Patna to Jammu (Jammu & Kashmir). Shree Ashirwad Packers and Movers provides 7-layer safety packaging, weather-sealed container trucks, GPS tracking, and doorstep delivery across Gandhi Nagar, Trikuta Nagar, Channi Himmat, Shastri Nagar, and Batal Ballian.";
$page_keywords = "packers and movers patna to jammu, patna to jammu house shifting, patna to jammu car transport, packers and movers patna to jammu and kashmir, shree ashirwad packers patna to jammu";
$canonical_url = "https://shreeashirwadpackersandmovers.com/pages/packers-and-movers-patna-to-jammu.php";

$faq_list = [
    [
        "q" => "What is the estimated cost of house shifting from Patna to Jammu?",
        "a" => "Interstate shifting charges from Patna to Jammu start at ₹16,800 for 1 BHK flats, ₹24,500 for 2 BHK houses, and ₹34,000 for 3 BHK family residences depending on cargo volume and packing level."
    ],
    [
        "q" => "How long does household consignment delivery take from Patna to Jammu?",
        "a" => "Delivery typically takes 4 to 5 days via NH 44 and NH 19 through Varanasi, Kanpur, Delhi, Ambala, and Pathankot."
    ],
    [
        "q" => "Do you offer doorstep pickup in Patna and unloading in Jammu?",
        "a" => "Yes, we handle complete doorstep pickup across Patna (Boring Road, Kankerbagh, Bailey Road, Patliputra) and unloading/unpacking in Jammu (Gandhi Nagar, Trikuta Nagar, Channi Himmat, Shastri Nagar, Sainik Colony, and Janipur)."
    ],
    [
        "q" => "What highway route is taken for Patna to Jammu relocation?",
        "a" => "Consignments travel along Patna -> Varanasi -> Kanpur -> New Delhi -> Karnal -> Ludhiana -> Pathankot -> Jammu highway corridor."
    ],
    [
        "q" => "Is vehicle transportation (car & bike) included in Patna to Jammu services?",
        "a" => "Yes, we utilize specialized enclosed hydraulic vehicle carriers for safe car transport and multi-layer wrapped motorcycle parcels equipped with wheel-locking straps."
    ],
    [
        "q" => "What transit insurance protection is available for Jammu relocation?",
        "a" => "We provide comprehensive 100% full-value transit insurance protecting your household goods against damage, fire, pilferage, and highway risks."
    ],
    [
        "q" => "What packing materials are used for long-distance cold-weather transit to Jammu?",
        "a" => "We utilize an upgraded 7-layer safety wrapping process featuring air bubble wrap, thermocol sheets, corrugated cardboard, stretch wrap, edge corner guards, moisture barriers, and heavy wooden crates."
    ],
    [
        "q" => "Can I track my consignment truck location live during transit?",
        "a" => "Yes, all intercity transport containers are equipped with real-time GPS tracking for continuous location updates."
    ],
    [
        "q" => "Are there extra hidden fees added for state permits or toll taxes?",
        "a" => "No, our written estimates are all-inclusive, covering packing materials, labor, transport permits, fuel, toll taxes, and final unpacking."
    ],
    [
        "q" => "How do I schedule a free pre-move survey for Patna to Jammu shifting?",
        "a" => "You can call us directly at +91 8409531615 or fill out our online quotation form to book a free physical or virtual survey."
    ]
];

require_once __DIR__ . '/../includes/header.php';
?>

<!-- JSON-LD FAQ Schema -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    <?php 
    $schema_items = [];
    foreach ($faq_list as $item) {
        $schema_items[] = '{
          "@type": "Question",
          "name": ' . json_encode($item['q']) . ',
          "acceptedAnswer": {
            "@type": "Answer",
            "text": ' . json_encode($item['a']) . '
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
  "description": "Certified Packers and Movers from Patna to Jammu offering 7-layer packaging, vehicle transport, and IBA-approved GST bills.",
  "url": "<?php echo $canonical_url; ?>",
  "telephone": "<?php echo SITE_PHONE_RAW; ?>",
  "address": {
    "@type": "PostalAddress",
    "addressLocality": "Patna",
    "addressRegion": "Bihar",
    "addressCountry": "IN"
  },
  "areaServed": "Jammu, Jammu & Kashmir",
  "priceRange": "₹16800 - ₹45000"
}
</script>

<main class="site-main">

  <!-- 1. Visual Breadcrumb Navigation Bar -->
  <div class="breadcrumb-wrapper">
    <div class="container">
      <div class="breadcrumb-list">
        <span class="breadcrumb-item"><a href="<?php echo SITE_URL; ?>" title="Home">Home</a></span>
        <span class="breadcrumb-separator">/</span>
        <span class="breadcrumb-item"><a href="<?php echo SITE_URL; ?>/pages/branches.php">Intercity Routes</a></span>
        <span class="breadcrumb-separator">/</span>
        <span class="breadcrumb-item active">Patna to Jammu</span>
      </div>
    </div>
  </div>

  <!-- 2. Hero Section with Lead Form -->
  <section class="hero-section" style="background: linear-gradient(135deg, #0b132b 0%, #1c2541 100%); padding: 60px 0; color: #ffffff;">
    <div class="container">
      <div class="hero-grid" style="display: grid; grid-template-columns: 1.2fr 0.8fr; gap: 40px; align-items: center;">
        
        <!-- Hero Text Column -->
        <div class="hero-text">
          <span class="section-tag" style="background: rgba(245, 158, 11, 0.15); color: #f59e0b; border: 1px solid rgba(245, 158, 11, 0.4); padding: 6px 16px; border-radius: 20px; font-size: 0.85rem; font-weight: 700; text-transform: uppercase; display: inline-block; margin-bottom: 15px;">
            PATNA TO JAMMU INTERSTATE RELOCATION EXPERTS
          </span>
          <h1 style="font-size: 2.7rem; font-weight: 800; line-height: 1.2; margin-bottom: 20px; color: #ffffff;">
            Reliable <span style="color: #f59e0b;">Packers and Movers Patna to Jammu</span>
          </h1>
          <p style="font-size: 1.12rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 25px;">
            Relocate seamlessly from Patna to Jammu, Jammu & Kashmir with Shree Ashirwad Packers and Movers. Benefit from 7-layer safety packaging, weather-sealed container logistics, live GPS tracking, and complete transit insurance coverage across Gandhi Nagar, Trikuta Nagar, Channi Himmat, Shastri Nagar, and Sainik Colony.
          </p>

          <div style="display: flex; gap: 15px; flex-wrap: wrap; margin-bottom: 30px;">
            <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Now" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
              <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call: <?php echo SITE_PHONE; ?>
            </a>
            <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20need%20a%20quote%20for%20Patna%20to%20Jammu%20shifting." title="Chat on WhatsApp" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
              <i class="fab fa-whatsapp" style="margin-right: 8px;"></i> WhatsApp Quote
            </a>
          </div>

          <div style="display: flex; gap: 20px; font-size: 0.9rem; color: #94a3b8;">
            <span><strong style="color: #f59e0b;">100% Insured</strong> Transport</span>
            <span><strong style="color: #f59e0b;">7-Layer</strong> Packing</span>
            <span><strong style="color: #f59e0b;">Live GPS</strong> Tracking</span>
          </div>
        </div>

        <!-- Hero Lead Form Column -->
        <div class="hero-form-card" style="background: rgba(255, 255, 255, 0.05); backdrop-filter: blur(10px); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 16px; padding: 30px; box-shadow: 0 15px 35px rgba(0,0,0,0.4);">
          <h2 style="font-size: 1.4rem; color: #ffffff; margin-bottom: 8px; font-weight: 700; text-align: center;">Get Instant Patna to Jammu Quote</h2>
          <p style="font-size: 0.85rem; color: #94a3b8; text-align: center; margin-bottom: 20px;">Transparent pricing • Zero hidden fees • Fast callback</p>

          <form action="#" method="POST" onsubmit="sendHeroWhatsAppLead(event, this);">
            <div style="margin-bottom: 14px;">
              <input type="text" name="name" class="form-control" placeholder="Your Full Name" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="margin-bottom: 14px;">
              <input type="tel" name="phone" class="form-control" placeholder="10-Digit Phone Number" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 10px; margin-bottom: 14px;">
              <input type="text" name="move_from" class="form-control" value="Patna" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
              <input type="text" name="move_to" class="form-control" value="Jammu" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <button type="submit" style="width: 100%; padding: 14px; background: linear-gradient(135deg, #d32f2f 0%, #f59e0b 100%); color: #ffffff; border: none; border-radius: 50px; font-weight: 700; font-size: 1rem; cursor: pointer; box-shadow: 0 4px 15px rgba(245, 158, 11, 0.4);">
              Calculate Shifting Cost &rarr;
            </button>
          </form>
        </div>

      </div>
    </div>
  </section>

  <!-- 3. Key Stats Counter Bar -->
  <section style="padding: 50px 0; background: #0f172a; color: #ffffff;">
    <div class="container">
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 25px; text-align: center;">
        
        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 25px; border-radius: 12px;">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; margin-bottom: 5px;">350+</div>
          <div style="font-size: 0.95rem; color: #94a3b8;">Patna to Jammu Moves</div>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 25px; border-radius: 12px;">
          <div style="font-size: 2.2rem; font-weight: 800; color: #10b981; margin-bottom: 5px;">0%</div>
          <div style="font-size: 0.95rem; color: #94a3b8;">Damage Claim Ratio</div>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 25px; border-radius: 12px;">
          <div style="font-size: 2.2rem; font-weight: 800; color: #3b82f6; margin-bottom: 5px;">96-120 Hrs</div>
          <div style="font-size: 0.95rem; color: #94a3b8;">Guaranteed Delivery</div>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 25px; border-radius: 12px;">
          <div style="font-size: 2.2rem; font-weight: 800; color: #ec4899; margin-bottom: 5px;">100%</div>
          <div style="font-size: 0.95rem; color: #94a3b8;">Comprehensive Transit Cover</div>
        </div>

      </div>
    </div>
  </section>

  <!-- 4. 6-Card Feature Grid -->
  <section style="padding: 60px 0; background: #1e293b; color: #ffffff;">
    <div class="container">
      <h2 style="font-size: 2.2rem; font-weight: 700; color: #ffffff; text-align: center; margin-bottom: 40px;">
        Why Choose Shree Ashirwad for Patna to Jammu Relocation
      </h2>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px;">
        
        <div style="background: rgba(15, 23, 42, 0.6); border: 1px solid rgba(255,255,255,0.08); padding: 30px; border-radius: 12px;">
          <div style="font-size: 1.8rem; color: #f59e0b; margin-bottom: 15px;"><i class="fas fa-truck-container"></i></div>
          <h3 style="font-size: 1.25rem; color: #ffffff; margin-bottom: 10px;">Weather-Sealed Containers</h3>
          <p style="color: #94a3b8; font-size: 0.95rem; line-height: 1.6;">Dedicated waterproof container trucks protecting goods from rain, snow, and extreme weather during northern transit.</p>
        </div>

        <div style="background: rgba(15, 23, 42, 0.6); border: 1px solid rgba(255,255,255,0.08); padding: 30px; border-radius: 12px;">
          <div style="font-size: 1.8rem; color: #10b981; margin-bottom: 15px;"><i class="fas fa-box"></i></div>
          <h3 style="font-size: 1.25rem; color: #ffffff; margin-bottom: 10px;">7-Layer Safety Wrap</h3>
          <p style="color: #94a3b8; font-size: 0.95rem; line-height: 1.6;">Heavy 80-GSM bubble wrap, corrugated sheets, thermocol cushioning, and waterproof stretch film armor.</p>
        </div>

        <div style="background: rgba(15, 23, 42, 0.6); border: 1px solid rgba(255,255,255,0.08); padding: 30px; border-radius: 12px;">
          <div style="font-size: 1.8rem; color: #3b82f6; margin-bottom: 15px;"><i class="fas fa-map-marked-alt"></i></div>
          <h3 style="font-size: 1.25rem; color: #ffffff; margin-bottom: 10px;">Real-Time GPS Tracking</h3>
          <p style="color: #94a3b8; font-size: 0.95rem; line-height: 1.6;">Continuous satellite GPS tracking and 24/7 dedicated transit manager updates across the highway corridor.</p>
        </div>

        <div style="background: rgba(15, 23, 42, 0.6); border: 1px solid rgba(255,255,255,0.08); padding: 30px; border-radius: 12px;">
          <div style="font-size: 1.8rem; color: #ec4899; margin-bottom: 15px;"><i class="fas fa-file-invoice-dollar"></i></div>
          <h3 style="font-size: 1.25rem; color: #ffffff; margin-bottom: 10px;">IBA-Approved GST Bills</h3>
          <p style="color: #94a3b8; font-size: 0.95rem; line-height: 1.6;">100% compliant claim bills, consignment notes, and payment vouchers for corporate and defence reimbursement.</p>
        </div>

        <div style="background: rgba(15, 23, 42, 0.6); border: 1px solid rgba(255,255,255,0.08); padding: 30px; border-radius: 12px;">
          <div style="font-size: 1.8rem; color: #8b5cf6; margin-bottom: 15px;"><i class="fas fa-shield-alt"></i></div>
          <h3 style="font-size: 1.25rem; color: #ffffff; margin-bottom: 10px;">Full Transit Insurance</h3>
          <p style="color: #94a3b8; font-size: 0.95rem; line-height: 1.6;">Complete 100% declared value insurance coverage protecting against all highway risks and unexpected delays.</p>
        </div>

        <div style="background: rgba(15, 23, 42, 0.6); border: 1px solid rgba(255,255,255,0.08); padding: 30px; border-radius: 12px;">
          <div style="font-size: 1.8rem; color: #06b6d4; margin-bottom: 15px;"><i class="fas fa-dolly"></i></div>
          <h3 style="font-size: 1.25rem; color: #ffffff; margin-bottom: 10px;">Unpacking & Assembly</h3>
          <p style="color: #94a3b8; font-size: 0.95rem; line-height: 1.6;">Complete door-to-door unpacking, bed re-assembly, and positioning of heavy furniture at your Jammu home.</p>
        </div>

      </div>
    </div>
  </section>

  <!-- 5. Specialized Services Breakdown -->
  <section style="padding: 60px 0; background: #0f172a; color: #ffffff;">
    <div class="container">
      <h2 style="font-size: 2.2rem; font-weight: 700; color: #ffffff; text-align: center; margin-bottom: 40px;">
        Specialized Relocation Services Patna to Jammu
      </h2>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 30px;">
        
        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 30px; border-radius: 12px;">
          <div style="font-size: 2rem; color: #f59e0b; margin-bottom: 15px;"><i class="fas fa-couch"></i></div>
          <h3 style="font-size: 1.3rem; color: #ffffff; margin-bottom: 10px;">Full Household Shifting</h3>
          <p style="color: #94a3b8; line-height: 1.6; font-size: 0.95rem;">Complete home relocation including furniture, electronic appliances, kitchen items, and clothes with zero hassle.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 30px; border-radius: 12px;">
          <div style="font-size: 2rem; color: #10b981; margin-bottom: 15px;"><i class="fas fa-car-side"></i></div>
          <h3 style="font-size: 1.3rem; color: #ffffff; margin-bottom: 10px;">Car Carrier Transport</h3>
          <p style="color: #94a3b8; line-height: 1.6; font-size: 0.95rem;">Safe car shipping using enclosed hydraulic trailers with doorstep pickup in Patna and delivery in Jammu.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 30px; border-radius: 12px;">
          <div style="font-size: 2rem; color: #3b82f6; margin-bottom: 15px;"><i class="fas fa-motorcycle"></i></div>
          <h3 style="font-size: 1.3rem; color: #ffffff; margin-bottom: 10px;">Bike & Scooter Parcel</h3>
          <p style="color: #94a3b8; line-height: 1.6; font-size: 0.95rem;">Multi-layer bubble wrapping for two-wheelers with wheel locks to guarantee scratch-free delivery.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 30px; border-radius: 12px;">
          <div style="font-size: 2rem; color: #ec4899; margin-bottom: 15px;"><i class="fas fa-user-shield"></i></div>
          <h3 style="font-size: 1.3rem; color: #ffffff; margin-bottom: 10px;">Defence & Army Transfer</h3>
          <p style="color: #94a3b8; line-height: 1.6; font-size: 0.95rem;">Specialized relocation for military and paramilitary personnel posted in Jammu with complete official paperwork.</p>
        </div>

      </div>
    </div>
  </section>

  <!-- 6. 7-Layer Safety Packaging Framework -->
  <section style="padding: 60px 0; background: #1e293b; color: #ffffff;">
    <div class="container">
      <h2 style="font-size: 2.2rem; font-weight: 700; color: #ffffff; text-align: center; margin-bottom: 40px;">
        7-Layer Damage Protection Framework
      </h2>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); gap: 20px;">
        <div style="background: rgba(15,23,42,0.6); border: 1px solid rgba(245,158,11,0.2); padding: 20px; border-radius: 8px;">
          <h4 style="color: #f59e0b; margin-bottom: 8px;">Layer 1: Poly Film Wrapping</h4>
          <p style="font-size: 0.88rem; color: #94a3b8;">Prevents moisture and dust entry during long-distance transit.</p>
        </div>
        <div style="background: rgba(15,23,42,0.6); border: 1px solid rgba(245,158,11,0.2); padding: 20px; border-radius: 8px;">
          <h4 style="color: #f59e0b; margin-bottom: 8px;">Layer 2: 80-GSM Air Bubble</h4>
          <p style="font-size: 0.88rem; color: #94a3b8;">Heavy shock absorption for polished wood, glass, and electronics.</p>
        </div>
        <div style="background: rgba(15,23,42,0.6); border: 1px solid rgba(245,158,11,0.2); padding: 20px; border-radius: 8px;">
          <h4 style="color: #f59e0b; margin-bottom: 8px;">Layer 3: Thermocol Cushioning</h4>
          <p style="font-size: 0.88rem; color: #94a3b8;">Rigid side panels protecting LED TVs, refrigerators, and washing machines.</p>
        </div>
        <div style="background: rgba(15,23,42,0.6); border: 1px solid rgba(245,158,11,0.2); padding: 20px; border-radius: 8px;">
          <h4 style="color: #f59e0b; margin-bottom: 8px;">Layer 4: Corrugated Sheets</h4>
          <p style="font-size: 0.88rem; color: #94a3b8;">Heavy-duty cardboard shielding furniture against friction and bumps.</p>
        </div>
        <div style="background: rgba(15,23,42,0.6); border: 1px solid rgba(245,158,11,0.2); padding: 20px; border-radius: 8px;">
          <h4 style="color: #f59e0b; margin-bottom: 8px;">Layer 5: Edge Corner Guards</h4>
          <p style="font-size: 0.88rem; color: #94a3b8;">Sturdy reinforced corner protectors for tables and cabinets.</p>
        </div>
        <div style="background: rgba(15,23,42,0.6); border: 1px solid rgba(245,158,11,0.2); padding: 20px; border-radius: 8px;">
          <h4 style="color: #f59e0b; margin-bottom: 8px;">Layer 6: Stretch Wrap Seal</h4>
          <p style="font-size: 0.88rem; color: #94a3b8;">Waterproof film sealing the entire parcel tightly against weather.</p>
        </div>
        <div style="background: rgba(15,23,42,0.6); border: 1px solid rgba(245,158,11,0.2); padding: 20px; border-radius: 8px;">
          <h4 style="color: #f59e0b; margin-bottom: 8px;">Layer 7: Heavy Wooden Crates</h4>
          <p style="font-size: 0.88rem; color: #94a3b8;">Custom timber crates built for fragile artwork, marble tops, and mirrors.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- 7. Origin Pickup Locality Grid -->
  <section style="padding: 60px 0; background: #0f172a; color: #ffffff;">
    <div class="container">
      <h2 style="font-size: 2.2rem; font-weight: 700; color: #ffffff; text-align: center; margin-bottom: 30px;">
        Doorstep Pickup Localities in Patna
      </h2>
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 15px; text-align: center;">
        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 15px; border-radius: 8px;">
          <a href="<?php echo SITE_URL; ?>/pages/movers-and-packers-in-patna-boring-road.php" style="color: #cbd5e1; text-decoration: none; font-weight: 600;">Boring Road</a>
        </div>
        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 15px; border-radius: 8px;">
          <a href="<?php echo SITE_URL; ?>/pages/movers-and-packers-in-patna-kankarbagh.php" style="color: #cbd5e1; text-decoration: none; font-weight: 600;">Kankerbagh</a>
        </div>
        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 15px; border-radius: 8px;">
          <a href="<?php echo SITE_URL; ?>/pages/packers-and-movers-in-raja-bazar-patna.php" style="color: #cbd5e1; text-decoration: none; font-weight: 600;">Raja Bazar</a>
        </div>
        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 15px; border-radius: 8px;">
          <a href="<?php echo SITE_URL; ?>/pages/packers-and-movers-in-saguna-more-patna.php" style="color: #cbd5e1; text-decoration: none; font-weight: 600;">Saguna More</a>
        </div>
      </div>
    </div>
  </section>

  <!-- 8. Intercity Route Network Grid -->
  <section style="padding: 60px 0; background: #1e293b; color: #ffffff;">
    <div class="container">
      <h2 style="font-size: 2.2rem; font-weight: 700; color: #ffffff; text-align: center; margin-bottom: 30px;">
        Major Interstate Routes from Patna
      </h2>
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 15px; text-align: center;">
        <div style="background: rgba(15,23,42,0.6); border: 1px solid rgba(255,255,255,0.08); padding: 15px; border-radius: 8px;">
          <a href="<?php echo SITE_URL; ?>/pages/packers-and-movers-patna-to-delhi.php" style="color: #cbd5e1; text-decoration: none; font-weight: 600;">Patna to Delhi</a>
        </div>
        <div style="background: rgba(15,23,42,0.6); border: 1px solid rgba(255,255,255,0.08); padding: 15px; border-radius: 8px;">
          <a href="<?php echo SITE_URL; ?>/pages/packers-and-movers-patna-to-ranchi.php" style="color: #cbd5e1; text-decoration: none; font-weight: 600;">Patna to Ranchi</a>
        </div>
        <div style="background: rgba(15,23,42,0.6); border: 1px solid rgba(255,255,255,0.08); padding: 15px; border-radius: 8px;">
          <a href="<?php echo SITE_URL; ?>/pages/packers-and-movers-patna-to-kolkata.php" style="color: #cbd5e1; text-decoration: none; font-weight: 600;">Patna to Kolkata</a>
        </div>
        <div style="background: rgba(15,23,42,0.6); border: 1px solid rgba(255,255,255,0.08); padding: 15px; border-radius: 8px;">
          <a href="<?php echo SITE_URL; ?>/pages/packers-and-movers-patna-to-jammu.php" style="color: #f59e0b; text-decoration: none; font-weight: 600;">Patna to Jammu</a>
        </div>
      </div>
    </div>
  </section>

  <!-- 9. IBA Approved GST Billing Documentation -->
  <section style="padding: 60px 0; background: #0f172a; color: #ffffff;">
    <div class="container">
      <h2 style="font-size: 2.2rem; font-weight: 700; color: #ffffff; text-align: center; margin-bottom: 30px;">
        100% Genuine IBA-Approved Relocation Billing
      </h2>
      <p style="font-size: 1rem; color: #cbd5e1; text-align: center; max-width: 800px; margin: 0 auto 30px; line-height: 1.7;">
        We provide complete official documentation required for corporate transfer claims, defence relocation allowances, and government employee shifting reimbursement.
      </p>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); gap: 20px;">
        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 20px; border-radius: 8px;">
          <h4 style="color: #10b981; margin-bottom: 5px;">1. GST Invoice</h4>
          <p style="font-size: 0.88rem; color: #94a3b8;">Original tax invoice with valid GSTIN and HSN code.</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 20px; border-radius: 8px;">
          <h4 style="color: #10b981; margin-bottom: 5px;">2. Lorry Receipt (LR)</h4>
          <p style="font-size: 0.88rem; color: #94a3b8;">Official consignment note with truck and driver details.</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 20px; border-radius: 8px;">
          <h4 style="color: #10b981; margin-bottom: 5px;">3. Itemized Inventory</h4>
          <p style="font-size: 0.88rem; color: #94a3b8;">Complete numbered list of all packed household items.</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 20px; border-radius: 8px;">
          <h4 style="color: #10b981; margin-bottom: 5px;">4. Insurance Policy</h4>
          <p style="font-size: 0.88rem; color: #94a3b8;">Original transit insurance policy document.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- 10. Detailed FAQs -->
  <section style="padding: 60px 0; background: #1e293b; color: #ffffff;">
    <div class="container">
      <h2 style="font-size: 2.2rem; font-weight: 700; color: #ffffff; text-align: center; margin-bottom: 40px;">
        Frequently Asked Questions
      </h2>

      <div style="max-width: 900px; margin: 0 auto; display: flex; flex-direction: column; gap: 15px;">
        <?php foreach ($faq_list as $index => $faq): ?>
          <div style="background: rgba(15,23,42,0.6); border: 1px solid rgba(255,255,255,0.08); border-radius: 8px; padding: 20px;">
            <h3 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 10px; font-weight: 600;">
              <?php echo ($index + 1) . '. ' . htmlspecialchars($faq['q']); ?>
            </h3>
            <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.7; margin: 0;">
              <?php echo htmlspecialchars($faq['a']); ?>
            </p>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- 11. Call-To-Action (CTA) Conversion Footer -->
  <section style="padding: 50px 0; background: linear-gradient(135deg, #d32f2f 0%, #b71c1c 100%); color: #ffffff; text-align: center;">
    <div class="container">
      <h2 style="font-size: 2.3rem; font-weight: 800; margin-bottom: 15px;">Plan Your Patna to Jammu Move Today!</h2>
      <p style="font-size: 1.1rem; margin-bottom: 30px; opacity: 0.9;">Get a free survey and price estimate from our intercity relocation specialists.</p>
      <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap;">
        <a href="tel:<?php echo SITE_PHONE_RAW; ?>" style="padding: 14px 32px; background: #ffffff; color: #b71c1c; border-radius: 50px; font-weight: 800; text-decoration: none; box-shadow: 0 4px 15px rgba(0,0,0,0.2);">
          Call Now: <?php echo SITE_PHONE; ?>
        </a>
        <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20to%20book%20Patna%20to%20Jammu%20shifting." target="_blank" style="padding: 14px 32px; background: #10b981; color: #ffffff; border-radius: 50px; font-weight: 800; text-decoration: none; box-shadow: 0 4px 15px rgba(0,0,0,0.2);">
          WhatsApp Inquiry
        </a>
      </div>
    </div>
  </section>

</main>

<script>
function sendHeroWhatsAppLead(e, form) {
  e.preventDefault();
  var name = form.name.value;
  var phone = form.phone.value;
  var from = form.move_from.value;
  var to = form.move_to.value;
  var msg = "Hello Shree Ashirwad Packers, I need a quote for Patna to Jammu shifting.%0A%0A" +
    "*Name:* " + encodeURIComponent(name) + "%0A" +
    "*Phone:* " + encodeURIComponent(phone) + "%0A" +
    "*From:* " + encodeURIComponent(from) + "%0A" +
    "*To:* " + encodeURIComponent(to);
  window.open("https://wa.me/918409531615?text=" + msg, "_blank");
}
</script>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
