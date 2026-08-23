<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "Packers and Movers Patna to Jamshedpur | Intercity Relocation";
$page_desc = "Hire certified Packers and Movers from Patna to Jamshedpur. Shree Ashirwad Packers and Movers offers 7-layer safety packing, express transit via NH 33, IBA-approved GST bills, and complete doorstep delivery across Bistupur, Sakchi, Mango, Adityapur, Telco, Sonari, Kadma, and Jugsalai.";
$page_keywords = "packers and movers patna to jamshedpur, patna to jamshedpur house shifting, patna to jamshedpur bike transport, packers and movers patna to jharkhand, shree ashirwad packers patna to jamshedpur";
$canonical_url = "https://shreeashirwadpackersandmovers.com/pages/packers-and-movers-patna-to-jamshedpur.php";

$faq_list = [
    [
        "q" => "What is the estimated cost of house shifting from Patna to Jamshedpur?",
        "a" => "Intercity shifting charges from Patna to Jamshedpur start at ₹11,500 for 1 BHK flats, ₹17,500 for 2 BHK homes, and ₹25,000 for 3 BHK family residences depending on consignment weight and container size."
    ],
    [
        "q" => "How long does household transit take from Patna to Jamshedpur?",
        "a" => "The distance of ~470 km via NH 33 (via Hazaribagh and Ranchi) is typically covered in 36 to 48 hours from door-to-door pickup to final unloading."
    ],
    [
        "q" => "Which areas in Jamshedpur are covered for doorstep delivery?",
        "a" => "We provide complete doorstep delivery across Bistupur, Sakchi, Mango, Adityapur, Telco Colony, Sonari, Kadma, Jugsalai, and Golmuri."
    ],
    [
        "q" => "Do you provide IBA-approved GST invoices for employee relocation claim?",
        "a" => "Yes, we provide 100% genuine IBA-compliant GST tax invoices, consignment bills (LR), itemized inventory lists, and payment receipts for corporate and Tata Steel reimbursement claims."
    ],
    [
        "q" => "Is vehicle shipping (car and bike) available from Patna to Jamshedpur?",
        "a" => "Yes, we offer door-to-door two-wheeler and four-wheeler vehicle shipping using closed car carriers and hydraulic ramp loaders with bubble wrap protection."
    ],
    [
        "q" => "What transit insurance protection is provided for Jamshedpur relocation?",
        "a" => "We offer comprehensive full-value transit risk insurance (1.5% declared value) protecting your cargo against road accidents or weather hazards."
    ],
    [
        "q" => "What packing materials are used for interstate transit to Jamshedpur?",
        "a" => "Our 7-layer protective packaging includes 80-GSM air bubble film, corrugated cardboard sheets, thermocol cushioning, stretch film, corner angle guards, and wooden crates for fragile glassware."
    ],
    [
        "q" => "Can I track my consignment during Patna to Jamshedpur transit?",
        "a" => "Yes, all intercity container trucks are fitted with GPS tracking, and our transit manager provides periodic phone updates."
    ],
    [
        "q" => "Are there extra hidden charges for toll gates or labor in Jamshedpur?",
        "a" => "No, our binding quotes are all-inclusive, covering packing, loading, highway toll taxes, fuel, unloading, and unpacking."
    ],
    [
        "q" => "How can I schedule a pre-move home survey in Patna?",
        "a" => "Simply call us at +91 8409531615 or submit your request via our online WhatsApp form for a free physical or virtual survey."
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
  "description": "Certified Packers and Movers from Patna to Jamshedpur offering 7-layer packaging, vehicle transport, and IBA-approved GST bills.",
  "url": "<?php echo $canonical_url; ?>",
  "telephone": "<?php echo SITE_PHONE_RAW; ?>",
  "address": {
    "@type": "PostalAddress",
    "addressLocality": "Patna",
    "addressRegion": "Bihar",
    "addressCountry": "IN"
  },
  "areaServed": "Jamshedpur, Jharkhand",
  "priceRange": "₹11500 - ₹35000"
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
        <span class="breadcrumb-item active">Patna to Jamshedpur</span>
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
            PATNA TO JAMSHEDPUR RELOCATION SPECIALISTS
          </span>
          <h1 style="font-size: 2.7rem; font-weight: 800; line-height: 1.2; margin-bottom: 20px; color: #ffffff;">
            Reliable <span style="color: #f59e0b;">Packers and Movers Patna to Jamshedpur</span>
          </h1>
          <p style="font-size: 1.12rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 25px;">
            Relocate smoothly from Patna to Jamshedpur with Shree Ashirwad Packers and Movers. Enjoy 7-layer safety packaging, express transit via NH 33, 100% transit insurance, and IBA-approved GST bills across Bistupur, Sakchi, Mango, Adityapur, Telco, Sonari, Kadma, and Jugsalai.
          </p>

          <div style="display: flex; gap: 15px; flex-wrap: wrap; margin-bottom: 30px;">
            <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Now" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
              <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call: <?php echo SITE_PHONE; ?>
            </a>
            <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20need%20a%20quote%20for%20Patna%20to%20Jamshedpur%20shifting." title="Chat on WhatsApp" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
              <i class="fab fa-whatsapp" style="margin-right: 8px;"></i> WhatsApp Quote
            </a>
          </div>

          <div style="display: flex; gap: 20px; font-size: 0.9rem; color: #94a3b8;">
            <span><strong style="color: #f59e0b;">100% Insured</strong> Transport</span>
            <span><strong style="color: #f59e0b;">IBA Approved</strong> GST Bill</span>
            <span><strong style="color: #f59e0b;">36-48 Hr</strong> Delivery</span>
          </div>
        </div>

        <!-- Hero Lead Form Column -->
        <div class="hero-form-card" style="background: rgba(255, 255, 255, 0.05); backdrop-filter: blur(10px); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 16px; padding: 30px; box-shadow: 0 15px 35px rgba(0,0,0,0.4);">
          <h2 style="font-size: 1.4rem; color: #ffffff; margin-bottom: 8px; font-weight: 700; text-align: center;">Get Instant Patna to Jamshedpur Quote</h2>
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
              <input type="text" name="move_to" class="form-control" value="Jamshedpur" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
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
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; margin-bottom: 5px;">470 KM</div>
          <div style="font-size: 0.95rem; color: #94a3b8;">Patna to Jamshedpur Route</div>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 25px; border-radius: 12px;">
          <div style="font-size: 2.2rem; font-weight: 800; color: #10b981; margin-bottom: 5px;">0%</div>
          <div style="font-size: 0.95rem; color: #94a3b8;">Damage Claim Ratio</div>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 25px; border-radius: 12px;">
          <div style="font-size: 2.2rem; font-weight: 800; color: #3b82f6; margin-bottom: 5px;">36-48 HRS</div>
          <div style="font-size: 0.95rem; color: #94a3b8;">Guaranteed Delivery</div>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 25px; border-radius: 12px;">
          <div style="font-size: 2.2rem; font-weight: 800; color: #ec4899; margin-bottom: 5px;">100%</div>
          <div style="font-size: 0.95rem; color: #94a3b8;">IBA Approved GST Invoice</div>
        </div>

      </div>
    </div>
  </section>

  <!-- 4. 6-Card Feature Grid -->
  <section style="padding: 60px 0; background: #1e293b; color: #ffffff;">
    <div class="container">
      <h2 style="font-size: 2.2rem; font-weight: 700; color: #ffffff; text-align: center; margin-bottom: 40px;">
        Why Choose Shree Ashirwad for Jamshedpur Relocation
      </h2>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px;">
        
        <div style="background: rgba(15, 23, 42, 0.6); border: 1px solid rgba(255,255,255,0.08); padding: 30px; border-radius: 12px;">
          <div style="font-size: 1.8rem; color: #f59e0b; margin-bottom: 15px;"><i class="fas fa-truck-container"></i></div>
          <h3 style="font-size: 1.25rem; color: #ffffff; margin-bottom: 10px;">Enclosed Container Trucks</h3>
          <p style="color: #94a3b8; font-size: 0.95rem; line-height: 1.6;">Dedicated waterproof container vehicles shielding goods from rain and dust along the NH 33 corridor.</p>
        </div>

        <div style="background: rgba(15, 23, 42, 0.6); border: 1px solid rgba(255,255,255,0.08); padding: 30px; border-radius: 12px;">
          <div style="font-size: 1.8rem; color: #10b981; margin-bottom: 15px;"><i class="fas fa-box"></i></div>
          <h3 style="font-size: 1.25rem; color: #ffffff; margin-bottom: 10px;">7-Layer Packaging Armor</h3>
          <p style="color: #94a3b8; font-size: 0.95rem; line-height: 1.6;">Heavy 80-GSM bubble wrap, thermocol sheets, corrugated cardboard, and waterproof stretch wrap.</p>
        </div>

        <div style="background: rgba(15, 23, 42, 0.6); border: 1px solid rgba(255,255,255,0.08); padding: 30px; border-radius: 12px;">
          <div style="font-size: 1.8rem; color: #3b82f6; margin-bottom: 15px;"><i class="fas fa-map-marked-alt"></i></div>
          <h3 style="font-size: 1.25rem; color: #ffffff; margin-bottom: 10px;">Live Satellite GPS</h3>
          <p style="color: #94a3b8; font-size: 0.95rem; line-height: 1.6;">Real-time GPS container tracking with regular WhatsApp updates from your dedicated move coordinator.</p>
        </div>

        <div style="background: rgba(15, 23, 42, 0.6); border: 1px solid rgba(255,255,255,0.08); padding: 30px; border-radius: 12px;">
          <div style="font-size: 1.8rem; color: #ec4899; margin-bottom: 15px;"><i class="fas fa-file-invoice-dollar"></i></div>
          <h3 style="font-size: 1.25rem; color: #ffffff; margin-bottom: 10px;">IBA-Approved Bills</h3>
          <p style="color: #94a3b8; font-size: 0.95rem; line-height: 1.6;">Full official claim documentation including GST invoice, LR bill, and itemized inventory for Tata Steel & corporate claims.</p>
        </div>

        <div style="background: rgba(15, 23, 42, 0.6); border: 1px solid rgba(255,255,255,0.08); padding: 30px; border-radius: 12px;">
          <div style="font-size: 1.8rem; color: #8b5cf6; margin-bottom: 15px;"><i class="fas fa-shield-alt"></i></div>
          <h3 style="font-size: 1.25rem; color: #ffffff; margin-bottom: 10px;">Transit Insurance Cover</h3>
          <p style="color: #94a3b8; font-size: 0.95rem; line-height: 1.6;">Full declared value transit insurance protecting your cargo against accidental damage along the highway.</p>
        </div>

        <div style="background: rgba(15, 23, 42, 0.6); border: 1px solid rgba(255,255,255,0.08); padding: 30px; border-radius: 12px;">
          <div style="font-size: 1.8rem; color: #06b6d4; margin-bottom: 15px;"><i class="fas fa-dolly"></i></div>
          <h3 style="font-size: 1.25rem; color: #ffffff; margin-bottom: 10px;">Complete Door Unpacking</h3>
          <p style="color: #94a3b8; font-size: 0.95rem; line-height: 1.6;">Unloading, furniture reassembly, and placement in your new Jamshedpur house.</p>
        </div>

      </div>
    </div>
  </section>

  <!-- 5. Specialized Services Breakdown -->
  <section style="padding: 60px 0; background: #0f172a; color: #ffffff;">
    <div class="container">
      <h2 style="font-size: 2.2rem; font-weight: 700; color: #ffffff; text-align: center; margin-bottom: 40px;">
        Relocation Services for Patna to Jamshedpur
      </h2>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 30px;">
        
        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 30px; border-radius: 12px;">
          <div style="font-size: 2rem; color: #f59e0b; margin-bottom: 15px;"><i class="fas fa-home"></i></div>
          <h3 style="font-size: 1.3rem; color: #ffffff; margin-bottom: 10px;">Household Shifting</h3>
          <p style="color: #94a3b8; line-height: 1.6; font-size: 0.95rem;">Expert packing and transport of furniture, beds, sofas, modular kitchens, and home appliances with complete setup upon arrival in Jamshedpur.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 30px; border-radius: 12px;">
          <div style="font-size: 2rem; color: #10b981; margin-bottom: 15px;"><i class="fas fa-building-columns"></i></div>
          <h3 style="font-size: 1.3rem; color: #ffffff; margin-bottom: 10px;">Tata & Corporate Transfer</h3>
          <p style="color: #94a3b8; line-height: 1.6; font-size: 0.95rem;">Specialized relocation for Tata Steel and industrial employees moving to Jamshedpur with IBA-compliant GST billing.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 30px; border-radius: 12px;">
          <div style="font-size: 2rem; color: #3b82f6; margin-bottom: 15px;"><i class="fas fa-car"></i></div>
          <h3 style="font-size: 1.3rem; color: #ffffff; margin-bottom: 10px;">Car Transport</h3>
          <p style="color: #94a3b8; line-height: 1.6; font-size: 0.95rem;">Safe four-wheeler shipping using enclosed car carriers with door pickup in Patna and delivery in Jamshedpur.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 30px; border-radius: 12px;">
          <div style="font-size: 2rem; color: #ec4899; margin-bottom: 15px;"><i class="fas fa-motorcycle"></i></div>
          <h3 style="font-size: 1.3rem; color: #ffffff; margin-bottom: 10px;">Bike & Scooter Parcel</h3>
          <p style="color: #94a3b8; line-height: 1.6; font-size: 0.95rem;">Triple-layer bubble wrapping for motorcycles with secure stand locking to avoid scratches during transit.</p>
        </div>

      </div>
    </div>
  </section>

  <!-- 6. 7-Layer Safety Packaging Framework -->
  <section style="padding: 60px 0; background: #1e293b; color: #ffffff;">
    <div class="container">
      <h2 style="font-size: 2.2rem; font-weight: 700; color: #ffffff; text-align: center; margin-bottom: 40px;">
        7-Layer Damage Protection Blueprint
      </h2>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); gap: 20px;">
        <div style="background: rgba(15, 23, 42, 0.6); border: 1px solid rgba(245,158,11,0.2); padding: 20px; border-radius: 8px;">
          <h4 style="color: #f59e0b; margin-bottom: 8px;">Layer 1: Polythene Film Wrap</h4>
          <p style="font-size: 0.88rem; color: #94a3b8;">Prevents moisture and dust accumulation on furniture during transit.</p>
        </div>
        <div style="background: rgba(15, 23, 42, 0.6); border: 1px solid rgba(245,158,11,0.2); padding: 20px; border-radius: 8px;">
          <h4 style="color: #f59e0b; margin-bottom: 8px;">Layer 2: 80-GSM Air Bubble</h4>
          <p style="font-size: 0.88rem; color: #94a3b8;">Provides heavy shock absorption for polished wood and appliances.</p>
        </div>
        <div style="background: rgba(15, 23, 42, 0.6); border: 1px solid rgba(245,158,11,0.2); padding: 20px; border-radius: 8px;">
          <h4 style="color: #f59e0b; margin-bottom: 8px;">Layer 3: Thermocol Cushion</h4>
          <p style="font-size: 0.88rem; color: #94a3b8;">Adds rigid barrier protection around TVs, monitors, and glass panels.</p>
        </div>
        <div style="background: rgba(15, 23, 42, 0.6); border: 1px solid rgba(245,158,11,0.2); padding: 20px; border-radius: 8px;">
          <h4 style="color: #f59e0b; margin-bottom: 8px;">Layer 4: Corrugated Sheets</h4>
          <p style="font-size: 0.88rem; color: #94a3b8;">Shields furniture sides against impacts and road friction.</p>
        </div>
        <div style="background: rgba(15, 23, 42, 0.6); border: 1px solid rgba(245,158,11,0.2); padding: 20px; border-radius: 8px;">
          <h4 style="color: #f59e0b; margin-bottom: 8px;">Layer 5: Corner Angle Guards</h4>
          <p style="font-size: 0.88rem; color: #94a3b8;">Sturdy corner protectors for heavy tables, wardrobes, and cabinets.</p>
        </div>
        <div style="background: rgba(15, 23, 42, 0.6); border: 1px solid rgba(245,158,11,0.2); padding: 20px; border-radius: 8px;">
          <h4 style="color: #f59e0b; margin-bottom: 8px;">Layer 6: Waterproof Stretch Wrap</h4>
          <p style="font-size: 0.88rem; color: #94a3b8;">Protects against weather hazards and rain along the highway corridor.</p>
        </div>
        <div style="background: rgba(15, 23, 42, 0.6); border: 1px solid rgba(245,158,11,0.2); padding: 20px; border-radius: 8px;">
          <h4 style="color: #f59e0b; margin-bottom: 8px;">Layer 7: Wooden Crate Armor</h4>
          <p style="font-size: 0.88rem; color: #94a3b8;">Custom timber crates constructed for delicate artwork, mirrors, and marble.</p>
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
        Major Intercity Routes from Patna
      </h2>
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 15px; text-align: center;">
        <div style="background: rgba(15,23,42,0.6); border: 1px solid rgba(255,255,255,0.08); padding: 15px; border-radius: 8px;">
          <a href="<?php echo SITE_URL; ?>/pages/packers-and-movers-patna-to-ranchi.php" style="color: #cbd5e1; text-decoration: none; font-weight: 600;">Patna to Ranchi</a>
        </div>
        <div style="background: rgba(15,23,42,0.6); border: 1px solid rgba(255,255,255,0.08); padding: 15px; border-radius: 8px;">
          <a href="<?php echo SITE_URL; ?>/pages/packers-and-movers-patna-to-jamshedpur.php" style="color: #f59e0b; text-decoration: none; font-weight: 600;">Patna to Jamshedpur</a>
        </div>
        <div style="background: rgba(15,23,42,0.6); border: 1px solid rgba(255,255,255,0.08); padding: 15px; border-radius: 8px;">
          <a href="<?php echo SITE_URL; ?>/pages/packers-and-movers-patna-to-dhanbad.php" style="color: #cbd5e1; text-decoration: none; font-weight: 600;">Patna to Dhanbad</a>
        </div>
        <div style="background: rgba(15,23,42,0.6); border: 1px solid rgba(255,255,255,0.08); padding: 15px; border-radius: 8px;">
          <a href="<?php echo SITE_URL; ?>/pages/packers-and-movers-patna-to-bokaro.php" style="color: #cbd5e1; text-decoration: none; font-weight: 600;">Patna to Bokaro</a>
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
      <h2 style="font-size: 2.3rem; font-weight: 800; margin-bottom: 15px;">Plan Your Patna to Jamshedpur Move Today!</h2>
      <p style="font-size: 1.1rem; margin-bottom: 30px; opacity: 0.9;">Get a free survey and price estimate from our intercity relocation specialists.</p>
      <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap;">
        <a href="tel:<?php echo SITE_PHONE_RAW; ?>" style="padding: 14px 32px; background: #ffffff; color: #b71c1c; border-radius: 50px; font-weight: 800; text-decoration: none; box-shadow: 0 4px 15px rgba(0,0,0,0.2);">
          Call Now: <?php echo SITE_PHONE; ?>
        </a>
        <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20to%20book%20Patna%20to%20Jamshedpur%20shifting." target="_blank" style="padding: 14px 32px; background: #10b981; color: #ffffff; border-radius: 50px; font-weight: 800; text-decoration: none; box-shadow: 0 4px 15px rgba(0,0,0,0.2);">
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
  var msg = "Hello Shree Ashirwad Packers, I need a quote for Patna to Jamshedpur shifting.%0A%0A" +
    "*Name:* " + encodeURIComponent(name) + "%0A" +
    "*Phone:* " + encodeURIComponent(phone) + "%0A" +
    "*From:* " + encodeURIComponent(from) + "%0A" +
    "*To:* " + encodeURIComponent(to);
  window.open("https://wa.me/918409531615?text=" + msg, "_blank");
}
</script>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
