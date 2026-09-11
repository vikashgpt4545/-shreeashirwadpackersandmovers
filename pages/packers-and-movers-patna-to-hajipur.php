<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "Packers and Movers Patna to Hajipur | Local & Intercity Household Shifting";
$page_desc = "Hire certified Packers and Movers from Patna to Hajipur (Vaishali). Shree Ashirwad Packers and Movers provides 7-layer safety packaging, enclosed container trucks, GPS tracking, and doorstep delivery across Ramashish Chowk, Industrial Area, Cinema Road, Anjanpir Chowk, Dighi, and Minapur.";
$page_keywords = "packers and movers patna to hajipur, patna to hajipur household shifting, patna to hajipur car transport, packers and movers patna to vaishali, shree ashirwad packers patna to hajipur";
$canonical_url = "https://shreeashirwadpackersandmovers.com/pages/packers-and-movers-patna-to-hajipur.php";

$faq_list = [
    [
        "q" => "What is the estimated cost of house shifting from Patna to Hajipur?",
        "a" => "Relocation charges from Patna to Hajipur start at ₹4,500 for 1 BHK flats, ₹7,800 for 2 BHK houses, and ₹11,500 for 3 BHK apartments depending on cargo volume and packaging level."
    ],
    [
        "q" => "How long does household goods transport take from Patna to Hajipur?",
        "a" => "Transit time typically takes 2 to 4 hours via Mahatma Gandhi Setu / JP Setu across the Ganges river."
    ],
    [
        "q" => "Do you provide complete doorstep pickup in Patna and unloading across Hajipur?",
        "a" => "Yes, we handle complete doorstep pickup across Patna (Boring Road, Kankerbagh, Bailey Road, Patliputra) and unloading/unpacking in Hajipur (Ramashish Chowk, Industrial Area, Cinema Road, Anjanpir Chowk, Dighi, and Minapur)."
    ],
    [
        "q" => "What bridge and route is taken for Patna to Hajipur relocation?",
        "a" => "Consignments travel along Patna -> Mahatma Gandhi Setu / JP Setu -> Hajipur highway corridor."
    ],
    [
        "q" => "Is vehicle transport (car & motorcycle) available for Patna to Hajipur shifting?",
        "a" => "Yes, we offer specialized covered car carriers and multi-layer wrapped motorcycle transport with wheel locks."
    ],
    [
        "q" => "What transit insurance protection is provided for Hajipur relocation?",
        "a" => "We provide comprehensive 100% full-value transit insurance protecting household items against damage and transit accidents."
    ],
    [
        "q" => "What packing materials are used for fragile items and heavy wooden furniture?",
        "a" => "We use 7-layer safety wrapping featuring air bubble wrap, thermocol sheets, corrugated cardboard, stretch wrap, edge corner guards, and wooden crates."
    ],
    [
        "q" => "Can I track my consignment truck location during transit?",
        "a" => "Yes, all intercity transport containers are equipped with real-time GPS tracking for continuous location updates."
    ],
    [
        "q" => "Are there extra hidden charges added for toll taxes or labor?",
        "a" => "No, our written estimates are all-inclusive, covering packing materials, labor, fuel, toll charges, loading, and unloading."
    ],
    [
        "q" => "How do I schedule a free pre-move survey for Patna to Hajipur shifting?",
        "a" => "You can call us directly at +91 8409531615 or submit our online quotation form to book a free physical or virtual survey."
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

<main class="site-main">

  <!-- Visual Breadcrumb Navigation Bar -->
  <div class="breadcrumb-wrapper">
    <div class="container">
      <div class="breadcrumb-list">
        <span class="breadcrumb-item"><a href="<?php echo SITE_URL; ?>" title="Home">Home</a></span>
        <span class="breadcrumb-separator">/</span>
        <span class="breadcrumb-item"><a href="<?php echo SITE_URL; ?>/pages/branches.php">Intercity Routes</a></span>
        <span class="breadcrumb-separator">/</span>
        <span class="breadcrumb-item active">Patna to Hajipur</span>
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
            PATNA TO HAJIPUR SHIFTING EXPERTS
          </span>
          <h1 style="font-size: 2.7rem; font-weight: 800; line-height: 1.2; margin-bottom: 20px; color: #ffffff;">
            Reliable <span style="color: #f59e0b;">Packers and Movers Patna to Hajipur</span>
          </h1>
          <p style="font-size: 1.12rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 25px;">
            Relocate seamlessly from Patna to Hajipur (Vaishali) with Shree Ashirwad Packers and Movers. Benefit from 7-layer safety packaging, weather-sealed container logistics, live GPS tracking, and complete transit insurance coverage across Ramashish Chowk, Industrial Area, Cinema Road, Anjanpir Chowk, Dighi, and Minapur.
          </p>

          <div style="display: flex; gap: 15px; flex-wrap: wrap; margin-bottom: 30px;">
            <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Now" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
              <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call: <?php echo SITE_PHONE; ?>
            </a>
            <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20need%20a%20quote%20for%20Patna%20to%20Hajipur%20shifting." title="Chat on WhatsApp" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
              <i class="fab fa-whatsapp" style="margin-right: 8px;"></i> WhatsApp Quote
            </a>
          </div>

          <div style="display: flex; gap: 20px; font-size: 0.9rem; color: #94a3b8;">
            <span><strong style="color: #f59e0b;">100% Insured</strong> Transport</span>
            <span><strong style="color: #f59e0b;">7-Layer</strong> Packing</span>
            <span><strong style="color: #f59e0b;">Same Day</strong> Delivery</span>
          </div>
        </div>

        <!-- Hero Lead Form Column -->
        <div class="hero-form-card" style="background: rgba(255, 255, 255, 0.05); backdrop-filter: blur(10px); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 16px; padding: 30px; box-shadow: 0 15px 35px rgba(0,0,0,0.4);">
          <h2 style="font-size: 1.4rem; color: #ffffff; margin-bottom: 8px; font-weight: 700; text-align: center;">Get Instant Patna to Hajipur Quote</h2>
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
              <input type="text" name="move_to" class="form-control" value="Hajipur" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
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
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; margin-bottom: 5px;">1,450+</div>
          <div style="font-size: 0.95rem; color: #94a3b8;">Patna to Hajipur Moves</div>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 25px; border-radius: 12px;">
          <div style="font-size: 2.2rem; font-weight: 800; color: #10b981; margin-bottom: 5px;">0%</div>
          <div style="font-size: 0.95rem; color: #94a3b8;">Damage Claim Ratio</div>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 25px; border-radius: 12px;">
          <div style="font-size: 2.2rem; font-weight: 800; color: #3b82f6; margin-bottom: 5px;">Same Day</div>
          <div style="font-size: 0.95rem; color: #94a3b8;">Express Delivery</div>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 25px; border-radius: 12px;">
          <div style="font-size: 2.2rem; font-weight: 800; color: #ec4899; margin-bottom: 5px;">100%</div>
          <div style="font-size: 0.95rem; color: #94a3b8;">Comprehensive Transit Cover</div>
        </div>

      </div>
    </div>
  </section>

  <!-- Section: Detailed Route Overview & Highway Logistics -->
  <section style="padding: 60px 0; background: #1e293b; color: #ffffff;">
    <div class="container">
      <div style="max-width: 900px; margin: 0 auto;">
        <h2 style="font-size: 2.2rem; font-weight: 700; color: #ffffff; margin-bottom: 20px; text-align: center;">
          Patna to Hajipur Route & Bridge Logistics
        </h2>
        <p style="font-size: 1.05rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 25px; text-align: center;">
          Transporting goods ~20 km from Patna across the Ganges into Hajipur requires planning for bridge traffic on Mahatma Gandhi Setu or JP Setu. Our dedicated local pick-up and delivery trucks operate around the clock for rapid same-day moves.
        </p>

        <div style="background: rgba(15, 23, 42, 0.6); border: 1px solid rgba(245, 158, 11, 0.2); border-radius: 12px; padding: 25px; margin-top: 30px;">
          <h3 style="font-size: 1.3rem; color: #f59e0b; margin-bottom: 15px;"><i class="fas fa-route"></i> Route Overview</h3>
          <ul style="list-style: none; padding: 0; margin: 0; color: #cbd5e1; line-height: 2;">
            <li><i class="fas fa-check-circle" style="color: #10b981; margin-right: 10px;"></i> <strong>Primary Corridor:</strong> Patna &rarr; Mahatma Gandhi Setu / JP Setu &rarr; Hajipur</li>
            <li><i class="fas fa-check-circle" style="color: #10b981; margin-right: 10px;"></i> <strong>Total Distance:</strong> Approximately 20 Kilometers</li>
            <li><i class="fas fa-check-circle" style="color: #10b981; margin-right: 10px;"></i> <strong>Expected Delivery:</strong> 2 to 4 Hours (Same Day Express)</li>
            <li><i class="fas fa-check-circle" style="color: #10b981; margin-right: 10px;"></i> <strong>Vehicles Available:</strong> Tata Ace, Pickup, 14ft & 17ft Closed Containers</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- Section: Specialized Services Grid -->
  <section style="padding: 60px 0; background: #0f172a; color: #ffffff;">
    <div class="container">
      <h2 style="font-size: 2.2rem; font-weight: 700; color: #ffffff; text-align: center; margin-bottom: 40px;">
        Relocation Services for Patna to Hajipur
      </h2>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 30px;">
        
        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 30px; border-radius: 12px;">
          <div style="font-size: 2rem; color: #f59e0b; margin-bottom: 15px;"><i class="fas fa-home"></i></div>
          <h3 style="font-size: 1.3rem; color: #ffffff; margin-bottom: 10px;">Household Shifting</h3>
          <p style="color: #94a3b8; line-height: 1.6; font-size: 0.95rem;">Expert packing and transport of furniture, electronics, and kitchenware with complete unpacking upon arrival in Hajipur.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 30px; border-radius: 12px;">
          <div style="font-size: 2rem; color: #10b981; margin-bottom: 15px;"><i class="fas fa-car"></i></div>
          <h3 style="font-size: 1.3rem; color: #ffffff; margin-bottom: 10px;">Car & Bike Shifting</h3>
          <p style="color: #94a3b8; line-height: 1.6; font-size: 0.95rem;">Covered car carriers and bubble-wrapped motorcycle transport across the river with zero scratches.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 30px; border-radius: 12px;">
          <div style="font-size: 2rem; color: #3b82f6; margin-bottom: 15px;"><i class="fas fa-building"></i></div>
          <h3 style="font-size: 1.3rem; color: #ffffff; margin-bottom: 10px;">Office & Commercial Relocation</h3>
          <p style="color: #94a3b8; line-height: 1.6; font-size: 0.95rem;">Fast relocation of office furniture, IT servers, and commercial goods to Hajipur Industrial Area.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 30px; border-radius: 12px;">
          <div style="font-size: 2rem; color: #ec4899; margin-bottom: 15px;"><i class="fas fa-warehouse"></i></div>
          <h3 style="font-size: 1.3rem; color: #ffffff; margin-bottom: 10px;">Short-term Warehousing</h3>
          <p style="color: #94a3b8; line-height: 1.6; font-size: 0.95rem;">Clean, fire-protected storage facilities for short-term and long-term household storage.</p>
        </div>

      </div>
    </div>
  </section>

  <!-- Section: Tariff Rates Table -->
  <section style="padding: 60px 0; background: #1e293b; color: #ffffff;">
    <div class="container">
      <h2 style="font-size: 2.2rem; font-weight: 700; color: #ffffff; text-align: center; margin-bottom: 15px;">
        Patna to Hajipur Estimated Tariff Chart
      </h2>
      <p style="font-size: 1rem; color: #94a3b8; text-align: center; margin-bottom: 40px;">Affordable short-distance inter-city shifting rates</p>

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
              <td style="padding: 16px 20px; color: #10b981; font-weight: 700;">₹4,500 - ₹6,500</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.08);">
              <td style="padding: 16px 20px; font-weight: 600;">2 BHK House Shifting</td>
              <td style="padding: 16px 20px;">Premium 7-Layer Cushioning</td>
              <td style="padding: 16px 20px; color: #10b981; font-weight: 700;">₹7,800 - ₹10,500</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.08);">
              <td style="padding: 16px 20px; font-weight: 600;">3 BHK House / Villa Shifting</td>
              <td style="padding: 16px 20px;">Full Heavy Crate & Custom Box Packaging</td>
              <td style="padding: 16px 20px; color: #10b981; font-weight: 700;">₹11,500 - ₹15,500</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.08);">
              <td style="padding: 16px 20px; font-weight: 600;">Car Transport</td>
              <td style="padding: 16px 20px;">Enclosed Carrier Trailer</td>
              <td style="padding: 16px 20px; color: #10b981; font-weight: 700;">₹4,000 - ₹6,000</td>
            </tr>
            <tr>
              <td style="padding: 16px 20px; font-weight: 600;">Bike Shifting Service</td>
              <td style="padding: 16px 20px;">Bubble + Cardboard Sheet Guard</td>
              <td style="padding: 16px 20px; color: #10b981; font-weight: 700;">₹1,800 - ₹3,000</td>
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
          <p style="font-size: 0.88rem; color: #94a3b8;">Prevents moisture and dust during transit.</p>
        </div>
        <div style="background: rgba(255,255,255,0.02); border: 1px solid rgba(245,158,11,0.2); padding: 20px; border-radius: 8px;">
          <h4 style="color: #f59e0b; margin-bottom: 8px;">Layer 2: 80-GSM Air Bubble</h4>
          <p style="font-size: 0.88rem; color: #94a3b8;">High density shock absorption for electronics and glass.</p>
        </div>
        <div style="background: rgba(255,255,255,0.02); border: 1px solid rgba(245,158,11,0.2); padding: 20px; border-radius: 8px;">
          <h4 style="color: #f59e0b; margin-bottom: 8px;">Layer 3: Thermocol Cushion</h4>
          <p style="font-size: 0.88rem; color: #94a3b8;">Protective padding for appliances and furniture edges.</p>
        </div>
        <div style="background: rgba(255,255,255,0.02); border: 1px solid rgba(245,158,11,0.2); padding: 20px; border-radius: 8px;">
          <h4 style="color: #f59e0b; margin-bottom: 8px;">Layer 4: Corrugated Sheets</h4>
          <p style="font-size: 0.88rem; color: #94a3b8;">Heavy duty cardboard layer against bumps and scrapes.</p>
        </div>
        <div style="background: rgba(255,255,255,0.02); border: 1px solid rgba(245,158,11,0.2); padding: 20px; border-radius: 8px;">
          <h4 style="color: #f59e0b; margin-bottom: 8px;">Layer 5: Corner Angle Guards</h4>
          <p style="font-size: 0.88rem; color: #94a3b8;">Reinforced edge protection for wooden tables and beds.</p>
        </div>
        <div style="background: rgba(255,255,255,0.02); border: 1px solid rgba(245,158,11,0.2); padding: 20px; border-radius: 8px;">
          <h4 style="color: #f59e0b; margin-bottom: 8px;">Layer 6: Weatherproof Tarpaulin</h4>
          <p style="font-size: 0.88rem; color: #94a3b8;">Waterproof outer wrapping for complete rain protection.</p>
        </div>
        <div style="background: rgba(255,255,255,0.02); border: 1px solid rgba(245,158,11,0.2); padding: 20px; border-radius: 8px;">
          <h4 style="color: #f59e0b; margin-bottom: 8px;">Layer 7: Custom Wooden Crates</h4>
          <p style="font-size: 0.88rem; color: #94a3b8;">Custom timber crates for delicate marble, glass, and artwork.</p>
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
          <h3 style="color: #10b981; font-size: 1.2rem; margin-bottom: 15px;"><i class="fas fa-map-marker-alt"></i> Hajipur Delivery Areas</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.8;">
            Ramashish Chowk, Industrial Area, Cinema Road, Anjanpir Chowk, Dighi, Minapur, Subhai, and Bagmusa.
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
      <h2 style="font-size: 2.3rem; font-weight: 800; margin-bottom: 15px;">Plan Your Patna to Hajipur Move Today!</h2>
      <p style="font-size: 1.1rem; margin-bottom: 30px; opacity: 0.9;">Get a free survey and price estimate from our intercity relocation specialists.</p>
      <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap;">
        <a href="tel:<?php echo SITE_PHONE_RAW; ?>" style="padding: 14px 32px; background: #ffffff; color: #b71c1c; border-radius: 50px; font-weight: 800; text-decoration: none; box-shadow: 0 4px 15px rgba(0,0,0,0.2);">
          Call Now: <?php echo SITE_PHONE; ?>
        </a>
        <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20to%20book%20Patna%20to%20Hajipur%20shifting." target="_blank" style="padding: 14px 32px; background: #10b981; color: #ffffff; border-radius: 50px; font-weight: 800; text-decoration: none; box-shadow: 0 4px 15px rgba(0,0,0,0.2);">
          WhatsApp Inquiry
        </a>
      </div>
    </div>
  </section>

</main>

<!-- MovingCompany Schema JSON-LD -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "MovingCompany",
  "name": "Shree Ashirwad Packers and Movers Patna to Hajipur",
  "url": "https://shreeashirwadpackersandmovers.com/pages/packers-and-movers-patna-to-hajipur.php",
  "logo": "https://shreeashirwadpackersandmovers.com/assets/images/logo.png",
  "telephone": "+91-8409531615",
  "priceRange": "₹1800 - ₹15500",
  "description": "Certified packers and movers from Patna to Hajipur. 7-layer protective packaging, dedicated sealed container trucks, car/bike carrier, and 100% transit insurance.",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "Boring Road",
    "addressLocality": "Patna",
    "addressRegion": "Bihar",
    "postalCode": "800001",
    "addressCountry": "IN"
  },
  "areaServed": [
    "Patna",
    "Hajipur",
    "Ramashish Chowk",
    "Industrial Area",
    "Cinema Road",
    "Anjanpir Chowk",
    "Dighi",
    "Minapur"
  ],
  "sameAs": [
    "https://www.facebook.com/shreeashirwadpackers",
    "https://twitter.com/shreeashirwad"
  ]
}
</script>

<script>
function sendHeroWhatsAppLead(e, form) {
  e.preventDefault();
  var name = form.querySelector('[name="name"]').value;
  var phone = form.querySelector('[name="phone"]').value;
  var move_from = form.querySelector('[name="move_from"]').value;
  var move_to = form.querySelector('[name="move_to"]').value;
  
  var message = "Hello Shree Ashirwad Packers,%0A%0AI need a quote for shifting:%0A" +
    "- Name: " + encodeURIComponent(name) + "%0A" +
    "- Phone: " + encodeURIComponent(phone) + "%0A" +
    "- Pickup: " + encodeURIComponent(move_from) + "%0A" +
    "- Delivery: " + encodeURIComponent(move_to);
    
  window.open("https://wa.me/918409531615?text=" + message, "_blank");
}
</script>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
