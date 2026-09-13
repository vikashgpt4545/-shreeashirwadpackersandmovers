<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "Packers and Movers Patna to Gurgaon | Intercity Relocation Services";
$page_desc = "Hire certified Packers and Movers from Patna to Gurgaon. Shree Ashirwad Packers and Movers provides 7-layer safety packaging, dedicated vehicle carriers, GPS tracking, and doorstep shifting to DLF Phase 1-5, Cyber City, Golf Course Road, Sohna Road, and Dwarka Expressway.";
$page_keywords = "packers and movers patna to gurgaon, patna to gurgaon household shifting, patna to gurgaon car transport, patna to gurgaon bike parcel, packers and movers patna to gurgaon charges, shree ashirwad packers patna to gurgaon";
$canonical_url = "https://shreeashirwadpackersandmovers.com/pages/packers-and-movers-patna-to-gurgaon.php";

$faq_list = [
    [
        "q" => "What is the estimated cost of household shifting from Patna to Gurgaon?",
        "a" => "The relocation cost from Patna to Gurgaon starts at ₹12,000 for a 1 BHK apartment, ₹17,000 for 2 BHK, and ₹23,500 for 3 BHK / Villa moves, depending on volume and packaging customized for corporate high-rises."
    ],
    [
        "q" => "How long does household goods delivery take from Patna to Gurgaon?",
        "a" => "Transit time between Patna and Gurgaon is typically 3 to 4 days via NH 19 and the Yamuna Expressway / KMP Expressway using dedicated sealed container vehicles."
    ],
    [
        "q" => "Do you handle high-rise apartment shifting in Gurgaon DLF sectors?",
        "a" => "Yes, we specialize in high-rise condominium relocations with service elevator protection, hydraulic trolley loading, and society entry permissions."
    ],
    [
        "q" => "Do you provide car and bike transport from Patna to Gurgaon?",
        "a" => "Yes, we operate enclosed hydraulic car carriers and specialized two-wheeler stands ensuring scratch-free delivery from Patna to any sector in Gurgaon."
    ],
    [
        "q" => "What highway route is taken for Patna to Gurgaon intercity movement?",
        "a" => "Vehicles travel from Patna via Arrah, Varanasi, Kanpur, Agra, taking the Yamuna Expressway and KMP Expressway directly into Gurgaon."
    ],
    [
        "q" => "Are my household goods insured during Patna to Gurgaon transit?",
        "a" => "Yes, we offer 100% full-value transit insurance covering risk against accidental damage, road risks, and natural distress during transit."
    ],
    [
        "q" => "Do you cover all localities in Gurgaon for final delivery?",
        "a" => "We provide complete door-to-door delivery across DLF Phase 1 to 5, Cyber City, Golf Course Road, Sohna Road, Sector 56, Sector 57, Sector 82, and Dwarka Expressway."
    ],
    [
        "q" => "What packing materials are used for fragile corporate & IT equipment?",
        "a" => "We use high-density bubble wrap, anti-static foam, corrugated sheets, edge guards, and customized wooden crates for electronics and desktop workstations."
    ],
    [
        "q" => "Is live GPS tracking available for Patna to Gurgaon shifting?",
        "a" => "Yes, all our intercity container trucks are fitted with GPS tracking devices, providing real-time location updates throughout the transit."
    ],
    [
        "q" => "How can I book Packers and Movers from Patna to Gurgaon?",
        "a" => "You can call us directly at +91 8409531615 or submit the online quotation form on our website for an immediate pre-move survey."
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
        <span class="breadcrumb-item active">Patna to Gurgaon</span>
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
            PATNA TO GURGAON EXPRESS RELOCATION
          </span>
          <h1 style="font-size: 2.7rem; font-weight: 800; line-height: 1.2; margin-bottom: 20px; color: #ffffff;">
            Reliable <span style="color: #f59e0b;">Packers and Movers Patna to Gurgaon</span>
          </h1>
          <p style="font-size: 1.12rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 25px;">
            Relocate smoothly from Patna to Gurgaon with Shree Ashirwad Packers and Movers. We provide 7-layer safety packaging, dedicated container transport, full transit insurance, and doorstep delivery across DLF Phase 1-5, Golf Course Road, Sohna Road, and Cyber City.
          </p>

          <div style="display: flex; gap: 15px; flex-wrap: wrap; margin-bottom: 30px;">
            <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Now" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
              <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call: <?php echo SITE_PHONE; ?>
            </a>
            <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20need%20a%20quote%20for%20Patna%20to%20Gurgaon%20shifting." title="Chat on WhatsApp" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
              <i class="fab fa-whatsapp" style="margin-right: 8px;"></i> WhatsApp Quote
            </a>
          </div>

          <div style="display: flex; gap: 20px; font-size: 0.9rem; color: #94a3b8;">
            <span><strong style="color: #f59e0b;">100% Insured</strong> Shifting</span>
            <span><strong style="color: #f59e0b;">7-Layer</strong> Packing</span>
            <span><strong style="color: #f59e0b;">Live GPS</strong> Tracking</span>
          </div>
        </div>

        <!-- Hero Lead Form Column -->
        <div class="hero-form-card" style="background: rgba(255, 255, 255, 0.05); backdrop-filter: blur(10px); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 16px; padding: 30px; box-shadow: 0 15px 35px rgba(0,0,0,0.4);">
          <h2 style="font-size: 1.4rem; color: #ffffff; margin-bottom: 8px; font-weight: 700; text-align: center;">Get Instant Patna to Gurgaon Quote</h2>
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
              <input type="text" name="move_to" class="form-control" value="Gurgaon" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
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
          <div style="font-size: 0.95rem; color: #94a3b8;">Patna to Gurgaon Moves</div>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 25px; border-radius: 12px;">
          <div style="font-size: 2.2rem; font-weight: 800; color: #10b981; margin-bottom: 5px;">0%</div>
          <div style="font-size: 0.95rem; color: #94a3b8;">Damage Claim Ratio</div>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 25px; border-radius: 12px;">
          <div style="font-size: 2.2rem; font-weight: 800; color: #3b82f6; margin-bottom: 5px;">72 Hrs</div>
          <div style="font-size: 0.95rem; color: #94a3b8;">Guaranteed Delivery</div>
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
          Patna to Gurgaon Expressway Logistics & Route Planning
        </h2>
        <p style="font-size: 1.05rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 25px; text-align: center;">
          Relocating goods across ~1,030 km from Patna to Gurgaon demands efficient expressway management and heavy-duty container transport. Our trucks travel via National Highway 19, passing Varanasi, Kanpur, and Agra, taking the Yamuna Expressway and Kundli-Manesar-Palwal (KMP) Expressway for direct, congestion-free arrival in Gurgaon.
        </p>

        <div style="background: rgba(15, 23, 42, 0.6); border: 1px solid rgba(245, 158, 11, 0.2); border-radius: 12px; padding: 25px; margin-top: 30px;">
          <h3 style="font-size: 1.3rem; color: #f59e0b; margin-bottom: 15px;"><i class="fas fa-route"></i> Transit Highway Corridor</h3>
          <ul style="list-style: none; padding: 0; margin: 0; color: #cbd5e1; line-height: 2;">
            <li><i class="fas fa-check-circle" style="color: #10b981; margin-right: 10px;"></i> <strong>Primary Corridor:</strong> Patna &rarr; Arrah &rarr; Varanasi &rarr; Kanpur &rarr; Agra &rarr; Yamuna Expressway &rarr; KMP Expressway &rarr; Gurgaon</li>
            <li><i class="fas fa-check-circle" style="color: #10b981; margin-right: 10px;"></i> <strong>Transit Distance:</strong> Approximately 1,030 Kilometers</li>
            <li><i class="fas fa-check-circle" style="color: #10b981; margin-right: 10px;"></i> <strong>Average Delivery Duration:</strong> 3 to 4 Days (Express Container Service)</li>
            <li><i class="fas fa-check-circle" style="color: #10b981; margin-right: 10px;"></i> <strong>Fleet Deployed:</strong> 17ft to 32ft Sealed Waterproof Container Trucks</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- Section: Comprehensive Service Grid -->
  <section style="padding: 60px 0; background: #0f172a; color: #ffffff;">
    <div class="container">
      <h2 style="font-size: 2.2rem; font-weight: 700; color: #ffffff; text-align: center; margin-bottom: 40px;">
        Specialized Shifting Services for Patna to Gurgaon
      </h2>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 30px;">
        
        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 30px; border-radius: 12px;">
          <div style="font-size: 2rem; color: #f59e0b; margin-bottom: 15px;"><i class="fas fa-home"></i></div>
          <h3 style="font-size: 1.3rem; color: #ffffff; margin-bottom: 10px;">High-Rise Flat & Villa Relocation</h3>
          <p style="color: #94a3b8; line-height: 1.6; font-size: 0.95rem;">Expert dismantling, 7-layer safety wrapping, lift padded protection, and reassembly in luxury condominiums across DLF & Golf Course Road.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 30px; border-radius: 12px;">
          <div style="font-size: 2rem; color: #10b981; margin-bottom: 15px;"><i class="fas fa-car"></i></div>
          <h3 style="font-size: 1.3rem; color: #ffffff; margin-bottom: 10px;">Car Carrier Transport</h3>
          <p style="color: #94a3b8; line-height: 1.6; font-size: 0.95rem;">Doorstep pickup of hatchbacks, sedans, and SUVs using specialized enclosed hydraulic trailers with wheel locking for absolute safety.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 30px; border-radius: 12px;">
          <div style="font-size: 2rem; color: #3b82f6; margin-bottom: 15px;"><i class="fas fa-motorcycle"></i></div>
          <h3 style="font-size: 1.3rem; color: #ffffff; margin-bottom: 10px;">Bike & Scooter Parcel</h3>
          <p style="color: #94a3b8; line-height: 1.6; font-size: 0.95rem;">Bubble wrap and foam packing for two-wheelers, secured in dedicated bike stands during long-distance expressway travel.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 30px; border-radius: 12px;">
          <div style="font-size: 2rem; color: #ec4899; margin-bottom: 15px;"><i class="fas fa-building"></i></div>
          <h3 style="font-size: 1.3rem; color: #ffffff; margin-bottom: 10px;">IT & Corporate Shifting</h3>
          <p style="color: #94a3b8; line-height: 1.6; font-size: 0.95rem;">Professional handling of IT server racks, office workstations, desktop hardware, document archives, and commercial gear with zero downtime.</p>
        </div>

      </div>
    </div>
  </section>

  <!-- Section: Transparent Fare Breakdown Table -->
  <section style="padding: 60px 0; background: #1e293b; color: #ffffff;">
    <div class="container">
      <h2 style="font-size: 2.2rem; font-weight: 700; color: #ffffff; text-align: center; margin-bottom: 15px;">
        Patna to Gurgaon Estimated Tariff Chart
      </h2>
      <p style="font-size: 1rem; color: #94a3b8; text-align: center; margin-bottom: 40px;">Standard market charges with 100% transparent billing structure</p>

      <div style="overflow-x: auto; max-width: 900px; margin: 0 auto;">
        <table style="width: 100%; border-collapse: collapse; background: rgba(15, 23, 42, 0.8); border-radius: 12px; overflow: hidden;">
          <thead>
            <tr style="background: #f59e0b; color: #0f172a; text-align: left;">
              <th style="padding: 16px 20px; font-weight: 700;">Shifting Category</th>
              <th style="padding: 16px 20px; font-weight: 700;">Packing Material Used</th>
              <th style="padding: 16px 20px; font-weight: 700;">Estimated Rate Range</th>
            </tr>
          </thead>
          <tbody style="color: #cbd5e1;">
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.08);">
              <td style="padding: 16px 20px; font-weight: 600;">1 BHK House Relocation</td>
              <td style="padding: 16px 20px;">Standard 5-Layer Bubble & Corrugated</td>
              <td style="padding: 16px 20px; color: #10b981; font-weight: 700;">₹12,000 - ₹17,000</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.08);">
              <td style="padding: 16px 20px; font-weight: 600;">2 BHK House Relocation</td>
              <td style="padding: 16px 20px;">Premium 7-Layer Cushioning & Wooden Crates</td>
              <td style="padding: 16px 20px; color: #10b981; font-weight: 700;">₹17,000 - ₹23,500</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.08);">
              <td style="padding: 16px 20px; font-weight: 600;">3 BHK House / Villa Shifting</td>
              <td style="padding: 16px 20px;">Full Heavy-Duty Crate & Customized Boxes</td>
              <td style="padding: 16px 20px; color: #10b981; font-weight: 700;">₹23,500 - ₹34,000</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.08);">
              <td style="padding: 16px 20px; font-weight: 600;">Car Transportation (Enclosed)</td>
              <td style="padding: 16px 20px;">Hydraulic Trailer + Wheel Lockdown</td>
              <td style="padding: 16px 20px; color: #10b981; font-weight: 700;">₹9,000 - ₹14,500</td>
            </tr>
            <tr>
              <td style="padding: 16px 20px; font-weight: 600;">Bike Shifting Service</td>
              <td style="padding: 16px 20px;">Triple Bubble Wrap + Foam Frame Guard</td>
              <td style="padding: 16px 20px; color: #10b981; font-weight: 700;">₹4,000 - ₹6,800</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </section>

  <!-- Section: 7-Layer Safety System -->
  <section style="padding: 60px 0; background: #0f172a; color: #ffffff;">
    <div class="container">
      <h2 style="font-size: 2.2rem; font-weight: 700; color: #ffffff; text-align: center; margin-bottom: 40px;">
        Our 7-Layer Protective Packaging Protocol
      </h2>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); gap: 20px;">
        <div style="background: rgba(255,255,255,0.02); border: 1px solid rgba(245,158,11,0.2); padding: 20px; border-radius: 8px;">
          <h4 style="color: #f59e0b; margin-bottom: 8px;">Layer 1: Stretch Film</h4>
          <p style="font-size: 0.88rem; color: #94a3b8;">Protects surfaces from dust, moisture, and fine scratches during handling.</p>
        </div>
        <div style="background: rgba(255,255,255,0.02); border: 1px solid rgba(245,158,11,0.2); padding: 20px; border-radius: 8px;">
          <h4 style="color: #f59e0b; margin-bottom: 8px;">Layer 2: Air Bubble Roll</h4>
          <p style="font-size: 0.88rem; color: #94a3b8;">High-density shock absorption for delicate electronics and polished wood.</p>
        </div>
        <div style="background: rgba(255,255,255,0.02); border: 1px solid rgba(245,158,11,0.2); padding: 20px; border-radius: 8px;">
          <h4 style="color: #f59e0b; margin-bottom: 8px;">Layer 3: Thermocol Sheets</h4>
          <p style="font-size: 0.88rem; color: #94a3b8;">Rigid padding added around glass panels, mirrors, and TV screens.</p>
        </div>
        <div style="background: rgba(255,255,255,0.02); border: 1px solid rgba(245,158,11,0.2); padding: 20px; border-radius: 8px;">
          <h4 style="color: #f59e0b; margin-bottom: 8px;">Layer 4: Corrugated Sheets</h4>
          <p style="font-size: 0.88rem; color: #94a3b8;">Heavy duty cardboard wraps custom tailored to fit furniture corners.</p>
        </div>
        <div style="background: rgba(255,255,255,0.02); border: 1px solid rgba(245,158,11,0.2); padding: 20px; border-radius: 8px;">
          <h4 style="color: #f59e0b; margin-bottom: 8px;">Layer 5: Edge Guards</h4>
          <p style="font-size: 0.88rem; color: #94a3b8;">Reinforced plastic/paper angles preventing impact damage on table edges.</p>
        </div>
        <div style="background: rgba(255,255,255,0.02); border: 1px solid rgba(245,158,11,0.2); padding: 20px; border-radius: 8px;">
          <h4 style="color: #f59e0b; margin-bottom: 8px;">Layer 6: Waterproof Tarpaulin</h4>
          <p style="font-size: 0.88rem; color: #94a3b8;">Outer rainproof layer safeguarding consignment against unexpected weather.</p>
        </div>
        <div style="background: rgba(255,255,255,0.02); border: 1px solid rgba(245,158,11,0.2); padding: 20px; border-radius: 8px;">
          <h4 style="color: #f59e0b; margin-bottom: 8px;">Layer 7: Wooden Crating</h4>
          <p style="font-size: 0.88rem; color: #94a3b8;">Custom wooden boxes fabricated for ultra-fragile antiques & chandeliers.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Section: Local Coverage Areas in Patna & Gurgaon -->
  <section style="padding: 60px 0; background: #1e293b; color: #ffffff;">
    <div class="container">
      <h2 style="font-size: 2.2rem; font-weight: 700; color: #ffffff; text-align: center; margin-bottom: 30px;">
        Local Doorstep Pickup & Delivery Areas
      </h2>

      <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 40px;">
        
        <div style="background: rgba(15, 23, 42, 0.6); padding: 25px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.08);">
          <h3 style="color: #f59e0b; font-size: 1.2rem; margin-bottom: 15px;"><i class="fas fa-map-marker-alt"></i> Patna Pickup Localities</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.8;">
            Boring Road, Kankerbagh, Bailey Road, Patliputra Colony, Raja Bazar, Danapur, Anisabad, Rajendra Nagar, Saguna More, Ashiana Nagar, Exhibition Road, Digha, and Kumhrar.
          </p>
        </div>

        <div style="background: rgba(15, 23, 42, 0.6); padding: 25px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.08);">
          <h3 style="color: #10b981; font-size: 1.2rem; margin-bottom: 15px;"><i class="fas fa-map-marker-alt"></i> Gurgaon Delivery Localities</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.8;">
            DLF Phase 1, DLF Phase 2, DLF Phase 3, DLF Phase 4, DLF Phase 5, Cyber City, Golf Course Road, Sohna Road, Sector 56, Sector 57, Sector 14, Sector 45, Sector 82, Sector 102, and Dwarka Expressway.
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
      <h2 style="font-size: 2.3rem; font-weight: 800; margin-bottom: 15px;">Plan Your Patna to Gurgaon Move Today!</h2>
      <p style="font-size: 1.1rem; margin-bottom: 30px; opacity: 0.9;">Get a free pre-move survey and customized quotation from our relocation experts.</p>
      <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap;">
        <a href="tel:<?php echo SITE_PHONE_RAW; ?>" style="padding: 14px 32px; background: #ffffff; color: #b71c1c; border-radius: 50px; font-weight: 800; text-decoration: none; box-shadow: 0 4px 15px rgba(0,0,0,0.2);">
          Call Now: <?php echo SITE_PHONE; ?>
        </a>
        <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20to%20book%20Patna%20to%20Gurgaon%20shifting." target="_blank" style="padding: 14px 32px; background: #10b981; color: #ffffff; border-radius: 50px; font-weight: 800; text-decoration: none; box-shadow: 0 4px 15px rgba(0,0,0,0.2);">
          WhatsApp Inquiry
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

<!-- MovingCompany Schema JSON-LD -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "MovingCompany",
  "name": "Shree Ashirwad Packers and Movers Patna to Gurgaon",
  "url": "https://shreeashirwadpackersandmovers.com/pages/packers-and-movers-patna-to-gurgaon.php",
  "logo": "https://shreeashirwadpackersandmovers.com/assets/images/logo.png",
  "telephone": "+91-8409531615",
  "priceRange": "₹4000 - ₹34000",
  "description": "Certified packers and movers from Patna to Gurgaon. 7-layer protective packaging, dedicated vehicle carriers, GPS tracking, and doorstep shifting across all Gurgaon DLF sectors.",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "MIG 214, Hanuman Nagar, Kankarbagh",
    "addressLocality": "Patna",
    "addressRegion": "Bihar",
    "postalCode": "800020",
    "addressCountry": "IN"
  },
  "areaServed": [
    "Patna",
    "Gurgaon",
    "Haryana",
    "Bihar"
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
  
  var message = "Hello Shree Ashirwad Packers,\n\nI would like a Patna to Gurgaon Shifting Quote:\n- Name: " + name + "\n- Phone: " + phone + "\n- Moving From: " + moveFrom + "\n- Moving To: " + moveTo;
  
  var whatsappUrl = "https://api.whatsapp.com/send?phone=918409531615&text=" + encodeURIComponent(message);
  window.open(whatsappUrl, '_blank');
}
</script>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>


