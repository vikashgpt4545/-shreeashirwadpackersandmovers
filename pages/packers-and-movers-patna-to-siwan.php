<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "Packers and Movers Patna to Siwan | Intercity Relocation";
$page_desc = "Hire certified Packers and Movers from Patna to Siwan (Bihar). Shree Ashirwad Packers and Movers provides 7-layer safety packaging, weather-sealed container transport, GPS tracking, and doorstep delivery across Siwan Town, Mairwa, Maharajganj, and Pachrukhi.";
$page_keywords = "packers and movers patna to siwan, patna to siwan house shifting, patna to siwan car transport, packers and movers in siwan, shree ashirwad packers patna to siwan";
$canonical_url = "https://shreeashirwadpackersandmovers.com/pages/packers-and-movers-patna-to-siwan.php";

$faq_list = [
    [
        "q" => "What is the transit duration for household shifting from Patna to Siwan?",
        "a" => "Intercity relocation from Patna to Siwan via the JP Setu / Digha-Chhapra elevated corridor (~140 km) typically takes 4 to 8 hours for same-day completion."
    ],
    [
        "q" => "What are the estimated packers and movers charges from Patna to Siwan?",
        "a" => "Shifting rates start at ₹6,500 for 1 BHK flats, ₹10,500 for 2 BHK houses, ₹14,500 for 3 BHK family homes, and ₹2,500 for motorcycle transport."
    ],
    [
        "q" => "Do you provide doorstep pickup across Patna localities for Siwan moves?",
        "a" => "Yes, we provide 100% doorstep pickup across Boring Road, Kankarbagh, Bailey Road, Raja Bazar, Patliputra Colony, Danapur, and Patna City."
    ],
    [
        "q" => "Are IBA-compliant GST bills provided for employee claim reimbursements?",
        "a" => "Yes, Shree Ashirwad Packers provides 100% valid 18% GST invoices (SAC 996511), Lorry Receipts (LR), and itemized inventory lists accepted by all PSU, government, and corporate firms."
    ],
    [
        "q" => "How are delicate household items and electronics packed for highway transit?",
        "a" => "All fragile glassware, LED TVs, refrigerators, and wooden furniture are packed using 7-layer protection including bubble wrap, foam cushioning, heavy-duty corrugated sheets, and stretch wrap."
    ],
    [
        "q" => "Is transit insurance available for Patna to Siwan relocation?",
        "a" => "Yes, 100% declared value IRDAI-approved transit insurance is provided to cover your goods against highway risk or accidental damage."
    ],
    [
        "q" => "Do your movers handle furniture dismantling and reassembly in Siwan?",
        "a" => "Yes, our experienced carpenters dismantle double beds, wardrobes, and dining tables at origin in Patna and reassemble them at your new home in Siwan."
    ],
    [
        "q" => "Can I transport my bike or car along with household goods to Siwan?",
        "a" => "Yes, we provide combined household and vehicle relocation services using covered car carriers and specialized bike packing."
    ],
    [
        "q" => "How can I track my goods carrier during transit from Patna to Siwan?",
        "a" => "All our long-distance container trucks feature GPS tracking, and our support team provides real-time WhatsApp updates."
    ],
    [
        "q" => "How do I book Patna to Siwan packers and movers with Shree Ashirwad Packers?",
        "a" => "Call +91 8409531615 or submit your moving requirements on our online form to receive a free, binding price quote."
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
  "description": "Certified Packers and Movers from Patna to Siwan offering 7-layer packaging, vehicle transport, and IBA-approved GST bills.",
  "url": "<?php echo $canonical_url; ?>",
  "telephone": "<?php echo SITE_PHONE_RAW; ?>",
  "address": {
    "@type": "PostalAddress",
    "addressLocality": "Patna",
    "addressRegion": "Bihar",
    "addressCountry": "IN"
  },
  "areaServed": "Siwan, Bihar",
  "priceRange": "₹6500 - ₹22500"
}
</script>

<main class="site-main">

  <!-- Visual Breadcrumb Navigation Bar -->
  <div class="breadcrumb-wrapper">
    <div class="container">
      <div class="breadcrumb-list">
        <span class="breadcrumb-item"><a href="<?php echo SITE_URL; ?>" title="Home">Home</a></span>
        <span class="breadcrumb-separator">/</span>
        <span class="breadcrumb-item"><a href="<?php echo SITE_URL; ?>/pages/branches.php">Intercity Routes</a></span>
        <span class="breadcrumb-separator">/</span>
        <span class="breadcrumb-item active">Patna to Siwan</span>
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
            PATNA TO SIWAN RELOCATION SPECIALISTS
          </span>
          <h1 style="font-size: 2.7rem; font-weight: 800; line-height: 1.2; margin-bottom: 20px; color: #ffffff;">
            Reliable <span style="color: #f59e0b;">Packers and Movers Patna to Siwan</span>
          </h1>
          <p style="font-size: 1.12rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 25px;">
            Relocate seamlessly from Patna to Siwan with Shree Ashirwad Packers and Movers. Benefit from 7-layer safety packaging, weather-sealed container logistics, live GPS tracking, and complete transit insurance coverage across Siwan Town, Mairwa, Maharajganj, and Pachrukhi.
          </p>

          <div style="display: flex; gap: 15px; flex-wrap: wrap; margin-bottom: 30px;">
            <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Now" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
              <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call: <?php echo SITE_PHONE; ?>
            </a>
            <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20need%20a%20quote%20for%20Patna%20to%20Siwan%20shifting." title="Chat on WhatsApp" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
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
          <h2 style="font-size: 1.4rem; color: #ffffff; margin-bottom: 8px; font-weight: 700; text-align: center;">Get Instant Patna to Siwan Quote</h2>
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
              <input type="text" name="move_to" class="form-control" value="Siwan" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <button type="submit" style="width: 100%; padding: 14px; background: linear-gradient(135deg, #d32f2f 0%, #f59e0b 100%); color: #ffffff; border: none; border-radius: 50px; font-weight: 700; font-size: 1rem; cursor: pointer; box-shadow: 0 4px 15px rgba(245, 158, 11, 0.4);">
              Calculate Shifting Cost &rarr;
            </button>
          </form>
        </div>

      </div>
    </div>
  </section>

  <!-- Section: Key Performance Highlights / Stats -->
  <section style="padding: 50px 0; background: #0f172a; color: #ffffff;">
    <div class="container">
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 25px; text-align: center;">
        
        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 25px; border-radius: 12px;">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; margin-bottom: 5px;">140 KM</div>
          <div style="font-size: 0.95rem; color: #94a3b8;">Patna to Siwan Distance</div>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 25px; border-radius: 12px;">
          <div style="font-size: 2.2rem; font-weight: 800; color: #10b981; margin-bottom: 5px;">0%</div>
          <div style="font-size: 0.95rem; color: #94a3b8;">Damage Claim Ratio</div>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 25px; border-radius: 12px;">
          <div style="font-size: 2.2rem; font-weight: 800; color: #3b82f6; margin-bottom: 5px;">4-8 Hrs</div>
          <div style="font-size: 0.95rem; color: #94a3b8;">Same-Day Delivery</div>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 25px; border-radius: 12px;">
          <div style="font-size: 2.2rem; font-weight: 800; color: #ec4899; margin-bottom: 5px;">100%</div>
          <div style="font-size: 0.95rem; color: #94a3b8;">Full Value Insurance Cover</div>
        </div>

      </div>
    </div>
  </section>

  <!-- Section: Detailed Route Overview & Highway Logistics -->
  <section style="padding: 60px 0; background: #1e293b; color: #ffffff;">
    <div class="container">
      <div style="max-width: 900px; margin: 0 auto;">
        <h2 style="font-size: 2.2rem; font-weight: 700; color: #ffffff; margin-bottom: 20px; text-align: center;">
          Patna to Siwan Highway Route & Logistics
        </h2>
        <p style="font-size: 1.05rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 25px; text-align: center;">
          Transporting household goods ~140 km from Patna to Siwan via JP Setu and Digha-Chhapra elevated expressway ensures fast, same-day delivery into Siwan Town, Mairwa, and Maharajganj.
        </p>

        <div style="background: rgba(15, 23, 42, 0.6); border: 1px solid rgba(245, 158, 11, 0.2); border-radius: 12px; padding: 25px; margin-top: 30px;">
          <h3 style="font-size: 1.3rem; color: #f59e0b; margin-bottom: 15px;"><i class="fas fa-route"></i> Route Overview</h3>
          <ul style="list-style: none; padding: 0; margin: 0; color: #cbd5e1; line-height: 2;">
            <li><i class="fas fa-check-circle" style="color: #10b981; margin-right: 10px;"></i> <strong>Primary Corridor:</strong> Patna &rarr; Digha JP Setu &rarr; Chhapra Elevated Highway &rarr; Siwan</li>
            <li><i class="fas fa-check-circle" style="color: #10b981; margin-right: 10px;"></i> <strong>Total Distance:</strong> Approximately 140 Kilometers</li>
            <li><i class="fas fa-check-circle" style="color: #10b981; margin-right: 10px;"></i> <strong>Expected Delivery:</strong> 4 to 8 Hours (Same-Day)</li>
            <li><i class="fas fa-check-circle" style="color: #10b981; margin-right: 10px;"></i> <strong>Vehicles Available:</strong> Pickup Bolero, 14ft, 17ft, and 19ft Container Trucks</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- Section: Specialized Services Grid -->
  <section style="padding: 60px 0; background: #0f172a; color: #ffffff;">
    <div class="container">
      <h2 style="font-size: 2.2rem; font-weight: 700; color: #ffffff; text-align: center; margin-bottom: 40px;">
        Relocation Services for Patna to Siwan
      </h2>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 30px;">
        
        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 30px; border-radius: 12px;">
          <div style="font-size: 2rem; color: #f59e0b; margin-bottom: 15px;"><i class="fas fa-home"></i></div>
          <h3 style="font-size: 1.3rem; color: #ffffff; margin-bottom: 10px;">Household Shifting</h3>
          <p style="color: #94a3b8; line-height: 1.6; font-size: 0.95rem;">Expert packing and transport of furniture, beds, sofas, modular kitchens, and home appliances with complete setup upon arrival in Siwan.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 30px; border-radius: 12px;">
          <div style="font-size: 2rem; color: #10b981; margin-bottom: 15px;"><i class="fas fa-file-invoice"></i></div>
          <h3 style="font-size: 1.3rem; color: #ffffff; margin-bottom: 10px;">IBA GST Claim Bills</h3>
          <p style="color: #94a3b8; line-height: 1.6; font-size: 0.95rem;">100% valid 18% GST invoices, LR bills, and itemized inventory lists for government & corporate employee relocation claims.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 30px; border-radius: 12px;">
          <div style="font-size: 2rem; color: #3b82f6; margin-bottom: 15px;"><i class="fas fa-car"></i></div>
          <h3 style="font-size: 1.3rem; color: #ffffff; margin-bottom: 10px;">Car Carrier Transport</h3>
          <p style="color: #94a3b8; line-height: 1.6; font-size: 0.95rem;">Safe car shipping using enclosed hydraulic car trailers with door pickup in Patna and delivery in Siwan.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 30px; border-radius: 12px;">
          <div style="font-size: 2rem; color: #ec4899; margin-bottom: 15px;"><i class="fas fa-motorcycle"></i></div>
          <h3 style="font-size: 1.3rem; color: #ffffff; margin-bottom: 10px;">Bike & Scooter Parcel</h3>
          <p style="color: #94a3b8; line-height: 1.6; font-size: 0.95rem;">Triple-layer bubble and foam wrapping for motorcycles with secure stand locking to avoid scratches during transit.</p>
        </div>

      </div>
    </div>
  </section>

  <!-- Section: Tariff Rates Table -->
  <section style="padding: 60px 0; background: #1e293b; color: #ffffff;">
    <div class="container">
      <h2 style="font-size: 2.2rem; font-weight: 700; color: #ffffff; text-align: center; margin-bottom: 15px;">
        Patna to Siwan Estimated Tariff Chart
      </h2>
      <p style="font-size: 1rem; color: #94a3b8; text-align: center; margin-bottom: 40px;">Standard intercity rates with zero hidden charges</p>

      <div style="overflow-x: auto; max-width: 900px; margin: 0 auto;">
        <table style="width: 100%; border-collapse: collapse; background: rgba(15, 23, 42, 0.8); border-radius: 12px; overflow: hidden;">
          <thead>
            <tr style="background: #f59e0b; color: #0f172a; text-align: left;">
              <th style="padding: 16px 20px; font-weight: 700;">Move Type</th>
              <th style="padding: 16px 20px; font-weight: 700;">Packaging Level</th>
              <th style="padding: 16px 20px; font-weight: 700;">Estimated Rate Range</th>
            </tr>
          </thead>
          <tbody style="color: #cbd5e1;">
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.08);">
              <td style="padding: 16px 20px; font-weight: 600;">1 BHK Flat Shifting</td>
              <td style="padding: 16px 20px;">Standard 5-Layer Packaging</td>
              <td style="padding: 16px 20px; color: #10b981; font-weight: 700;">₹6,500 - ₹11,500</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.08);">
              <td style="padding: 16px 20px; font-weight: 600;">2 BHK House Shifting</td>
              <td style="padding: 16px 20px;">Premium 7-Layer Cushioning</td>
              <td style="padding: 16px 20px; color: #10b981; font-weight: 700;">₹10,500 - ₹16,500</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.08);">
              <td style="padding: 16px 20px; font-weight: 600;">3 BHK House / Villa Shifting</td>
              <td style="padding: 16px 20px;">Full Heavy Crate & Custom Box Packaging</td>
              <td style="padding: 16px 20px; color: #10b981; font-weight: 700;">₹14,500 - ₹22,500</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.08);">
              <td style="padding: 16px 20px; font-weight: 600;">Car Transport (Enclosed Trailer)</td>
              <td style="padding: 16px 20px;">Hydraulic Locking System</td>
              <td style="padding: 16px 20px; color: #10b981; font-weight: 700;">₹6,000 - ₹9,500</td>
            </tr>
            <tr>
              <td style="padding: 16px 20px; font-weight: 600;">Bike Shifting Service</td>
              <td style="padding: 16px 20px;">Bubble + Cardboard Sheet Guard</td>
              <td style="padding: 16px 20px; color: #10b981; font-weight: 700;">₹2,500 - ₹4,500</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </section>

  <!-- Section: 7-Layer Packaging System -->
  <section style="padding: 60px 0; background: #0f172a; color: #ffffff;">
    <div class="container">
      <h2 style="font-size: 2.2rem; font-weight: 700; color: #ffffff; text-align: center; margin-bottom: 40px;">
        7-Layer Damage Protection Blueprint
      </h2>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); gap: 20px;">
        <div style="background: rgba(255,255,255,0.02); border: 1px solid rgba(245,158,11,0.2); padding: 20px; border-radius: 8px;">
          <h4 style="color: #f59e0b; margin-bottom: 8px;">Layer 1: Polythene Film Wrap</h4>
          <p style="font-size: 0.88rem; color: #94a3b8;">Prevents moisture and dirt build-up during long-haul transit.</p>
        </div>
        <div style="background: rgba(255,255,255,0.02); border: 1px solid rgba(245,158,11,0.2); padding: 20px; border-radius: 8px;">
          <h4 style="color: #f59e0b; margin-bottom: 8px;">Layer 2: 80-GSM Air Bubble</h4>
          <p style="font-size: 0.88rem; color: #94a3b8;">Provides heavy shock absorption for wooden and glass surfaces.</p>
        </div>
        <div style="background: rgba(255,255,255,0.02); border: 1px solid rgba(245,158,11,0.2); padding: 20px; border-radius: 8px;">
          <h4 style="color: #f59e0b; margin-bottom: 8px;">Layer 3: Thermocol Cushion</h4>
          <p style="font-size: 0.88rem; color: #94a3b8;">Adds rigid barrier protection around TVs, monitors, and appliances.</p>
        </div>
        <div style="background: rgba(255,255,255,0.02); border: 1px solid rgba(245,158,11,0.2); padding: 20px; border-radius: 8px;">
          <h4 style="color: #f59e0b; margin-bottom: 8px;">Layer 4: Corrugated Sheets</h4>
          <p style="font-size: 0.88rem; color: #94a3b8;">Shields furniture sides and corners against impact bumps.</p>
        </div>
        <div style="background: rgba(255,255,255,0.02); border: 1px solid rgba(245,158,11,0.2); padding: 20px; border-radius: 8px;">
          <h4 style="color: #f59e0b; margin-bottom: 8px;">Layer 5: Corner Angle Guards</h4>
          <p style="font-size: 0.88rem; color: #94a3b8;">Sturdy corner protectors for heavy tables, wardrobes, and cabinets.</p>
        </div>
        <div style="background: rgba(255,255,255,0.02); border: 1px solid rgba(245,158,11,0.2); padding: 20px; border-radius: 8px;">
          <h4 style="color: #f59e0b; margin-bottom: 8px;">Layer 6: Weatherproof Tarpaulin</h4>
          <p style="font-size: 0.88rem; color: #94a3b8;">Outer rain, snow, and dust guard wrapping the entire cargo container.</p>
        </div>
        <div style="background: rgba(255,255,255,0.02); border: 1px solid rgba(245,158,11,0.2); padding: 20px; border-radius: 8px;">
          <h4 style="color: #f59e0b; margin-bottom: 8px;">Layer 7: Custom Wooden Crates</h4>
          <p style="font-size: 0.88rem; color: #94a3b8;">Custom built timber crates for fragile marble tops, artwork, and glass.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Section: Coverage Areas -->
  <section style="padding: 60px 0; background: #1e293b; color: #ffffff;">
    <div class="container">
      <h2 style="font-size: 2.2rem; font-weight: 700; color: #ffffff; text-align: center; margin-bottom: 30px;">
        Local Doorstep Pickup & Delivery Areas
      </h2>

      <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 40px;">
        
        <div style="background: rgba(15, 23, 42, 0.6); padding: 25px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.08);">
          <h3 style="color: #f59e0b; font-size: 1.2rem; margin-bottom: 15px;"><i class="fas fa-map-marker-alt"></i> Patna Pickup Areas</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.8;">
            Boring Road, Kankerbagh, Bailey Road, Patliputra Colony, Raja Bazar, Danapur, Anisabad, Rajendra Nagar, Saguna More, Ashiana Nagar, Exhibition Road, Digha, and Kumhrar.
          </p>
        </div>

        <div style="background: rgba(15, 23, 42, 0.6); padding: 25px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.08);">
          <h3 style="color: #10b981; font-size: 1.2rem; margin-bottom: 15px;"><i class="fas fa-map-marker-alt"></i> Siwan Delivery Areas</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.8;">
            Siwan Town, Mairwa, Maharajganj, Pachrukhi, Andaar Road, Hospital Road, and Tarwara Road.
          </p>
        </div>

      </div>
    </div>
  </section>

  <!-- Section: FAQ Accordion -->
  <section style="padding: 60px 0; background: #0f172a; color: #ffffff;">
    <div class="container">
      <h2 style="font-size: 2.2rem; font-weight: 700; color: #ffffff; text-align: center; margin-bottom: 40px;">
        Frequently Asked Questions
      </h2>

      <div style="max-width: 900px; margin: 0 auto; display: flex; flex-direction: column; gap: 15px;">
        <?php foreach ($faq_list as $index => $faq): ?>
          <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 8px; padding: 20px;">
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

  <!-- Section: Call To Action Banner -->
  <section style="padding: 50px 0; background: linear-gradient(135deg, #d32f2f 0%, #b71c1c 100%); color: #ffffff; text-align: center;">
    <div class="container">
      <h2 style="font-size: 2.3rem; font-weight: 800; margin-bottom: 15px;">Plan Your Patna to Siwan Move Today!</h2>
      <p style="font-size: 1.1rem; margin-bottom: 30px; opacity: 0.9;">Get a free survey and price estimate from our intercity relocation specialists.</p>
      <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap;">
        <a href="tel:<?php echo SITE_PHONE_RAW; ?>" style="padding: 14px 32px; background: #ffffff; color: #b71c1c; border-radius: 50px; font-weight: 800; text-decoration: none; box-shadow: 0 4px 15px rgba(0,0,0,0.2);">
          Call Now: <?php echo SITE_PHONE; ?>
        </a>
        <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20to%20book%20Patna%20to%20Siwan%20shifting." target="_blank" style="padding: 14px 32px; background: #10b981; color: #ffffff; border-radius: 50px; font-weight: 800; text-decoration: none; box-shadow: 0 4px 15px rgba(0,0,0,0.2);">
          WhatsApp Inquiry
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
  
  var message = "Hello Shree Ashirwad Packers,\n\nI would like a Shifting Quote for Patna to Siwan:\n- Name: " + name + "\n- Phone: " + phone + "\n- Moving From: " + moveFrom + "\n- Moving To: " + moveTo;
  
  var whatsappUrl = "https://api.whatsapp.com/send?phone=918409531615&text=" + encodeURIComponent(message);
  window.open(whatsappUrl, '_blank');
}
</script>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
