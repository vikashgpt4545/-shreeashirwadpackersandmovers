<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "Packers and Movers Patna to Solapur | Intercity Relocation";
$page_desc = "Hire certified Packers and Movers from Patna to Solapur (Maharashtra). Shree Ashirwad Packers and Movers provides 7-layer safety packaging, weather-sealed container transport, GPS tracking, and doorstep delivery across Civil Lines, Hotgi Road, Juma Peth, Ashok Chowk, Vijapur Road, Navi Peth, and MIDC Area.";
$page_keywords = "packers and movers patna to solapur, patna to solapur house shifting, patna to solapur car transport, packers and movers patna to maharashtra, shree ashirwad packers patna to solapur";
$canonical_url = "https://shreeashirwadpackersandmovers.com/pages/packers-and-movers-patna-to-solapur.php";

$faq_list = [
    [
        "q" => "What is the estimated cost of house shifting from Patna to Solapur?",
        "a" => "Interstate shifting charges from Patna to Solapur start at ₹16,000 for 1 BHK flats, ₹22,000 for 2 BHK houses, and ₹31,000 for 3 BHK family homes depending on consignment volume and packing options."
    ],
    [
        "q" => "How long does household consignment delivery take from Patna to Solapur?",
        "a" => "Delivery typically takes 48 to 60 hours via NH 30 and NH 52 through Jabalpur and Nagpur."
    ],
    [
        "q" => "Do you offer doorstep pickup in Patna and unloading across Solapur?",
        "a" => "Yes, we handle complete doorstep pickup across Patna (Boring Road, Kankerbagh, Bailey Road) and unloading/unpacking in Solapur (Civil Lines, Hotgi Road, Juma Peth, Ashok Chowk, Vijapur Road, Navi Peth, and MIDC Area)."
    ],
    [
        "q" => "What highway route is taken for Patna to Solapur relocation?",
        "a" => "Consignments travel along Patna -> Varanasi -> Jabalpur -> Nagpur -> Solapur highway corridor."
    ],
    [
        "q" => "Is vehicle transportation (car & bike) included in Patna to Solapur services?",
        "a" => "Yes, we utilize specialized enclosed hydraulic vehicle carriers for safe car transport and multi-layer wrapped motorcycle parcels equipped with wheel-locking straps."
    ],
    [
        "q" => "What transit insurance protection is available for Solapur relocation?",
        "a" => "We provide comprehensive 100% full-value transit insurance protecting your household goods against damage, fire, pilferage, and highway risks."
    ],
    [
        "q" => "What packing materials are used for long-distance transit to Maharashtra?",
        "a" => "We utilize an upgraded 7-layer safety wrapping process featuring air bubble wrap, thermocol sheets, corrugated cardboard, stretch wrap, edge corner guards, and heavy wooden crates."
    ],
    [
        "q" => "Can I track my consignment truck location live during transit?",
        "a" => "Yes, all intercity transport containers are equipped with real-time GPS tracking for continuous location updates."
    ],
    [
        "q" => "Are there extra hidden fees added for Maharashtra state border permits or toll taxes?",
        "a" => "No, our written estimates are all-inclusive, covering packing materials, labor, transport permits, fuel, toll taxes, and final unpacking."
    ],
    [
        "q" => "How do I schedule a free pre-move survey for Patna to Solapur shifting?",
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
  "description": "Certified Packers and Movers from Patna to Solapur offering 7-layer packaging, vehicle transport, and IBA-approved GST bills.",
  "url": "<?php echo $canonical_url; ?>",
  "telephone": "<?php echo SITE_PHONE_RAW; ?>",
  "address": {
    "@type": "PostalAddress",
    "addressLocality": "Patna",
    "addressRegion": "Bihar",
    "addressCountry": "IN"
  },
  "areaServed": "Solapur, Maharashtra",
  "priceRange": "₹16000 - ₹42000"
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
        <span class="breadcrumb-item active">Patna to Solapur</span>
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
            PATNA TO SOLAPUR RELOCATION SPECIALISTS
          </span>
          <h1 style="font-size: 2.7rem; font-weight: 800; line-height: 1.2; margin-bottom: 20px; color: #ffffff;">
            Reliable <span style="color: #f59e0b;">Packers and Movers Patna to Solapur</span>
          </h1>
          <p style="font-size: 1.12rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 25px;">
            Relocate seamlessly from Patna to Solapur (Textile Hub of Maharashtra) with Shree Ashirwad Packers and Movers. Benefit from 7-layer safety packaging, weather-sealed container logistics, live GPS tracking, and complete transit insurance coverage across Civil Lines, Hotgi Road, Juma Peth, Ashok Chowk, Vijapur Road, Navi Peth, and MIDC Area.
          </p>

          <div style="display: flex; gap: 15px; flex-wrap: wrap; margin-bottom: 30px;">
            <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Now" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
              <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call: <?php echo SITE_PHONE; ?>
            </a>
            <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20need%20a%20quote%20for%20Patna%20to%20Solapur%20shifting." title="Chat on WhatsApp" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
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
          <h2 style="font-size: 1.4rem; color: #ffffff; margin-bottom: 8px; font-weight: 700; text-align: center;">Get Instant Patna to Solapur Quote</h2>
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
              <input type="text" name="move_to" class="form-control" value="Solapur" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
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
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; margin-bottom: 5px;">1,380 KM</div>
          <div style="font-size: 0.95rem; color: #94a3b8;">Patna to Solapur Route</div>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 25px; border-radius: 12px;">
          <div style="font-size: 2.2rem; font-weight: 800; color: #10b981; margin-bottom: 5px;">0%</div>
          <div style="font-size: 0.95rem; color: #94a3b8;">Damage Claim Ratio</div>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 25px; border-radius: 12px;">
          <div style="font-size: 2.2rem; font-weight: 800; color: #3b82f6; margin-bottom: 5px;">48-60 Hrs</div>
          <div style="font-size: 0.95rem; color: #94a3b8;">Guaranteed Delivery</div>
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
          Patna to Solapur Highway Route & Logistics
        </h2>
        <p style="font-size: 1.05rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 25px; text-align: center;">
          Transporting household goods ~1,380 km from Patna to Solapur requires dedicated weather-sealed container trucks. Our fleets route via Jabalpur and Nagpur directly into Solapur city center, Hotgi Road, and MIDC industrial area.
        </p>

        <div style="background: rgba(15, 23, 42, 0.6); border: 1px solid rgba(245, 158, 11, 0.2); border-radius: 12px; padding: 25px; margin-top: 30px;">
          <h3 style="font-size: 1.3rem; color: #f59e0b; margin-bottom: 15px;"><i class="fas fa-route"></i> Route Overview</h3>
          <ul style="list-style: none; padding: 0; margin: 0; color: #cbd5e1; line-height: 2;">
            <li><i class="fas fa-check-circle" style="color: #10b981; margin-right: 10px;"></i> <strong>Primary Corridor:</strong> Patna &rarr; Varanasi &rarr; Jabalpur &rarr; Nagpur &rarr; Solapur</li>
            <li><i class="fas fa-check-circle" style="color: #10b981; margin-right: 10px;"></i> <strong>Total Distance:</strong> Approximately 1,380 Kilometers</li>
            <li><i class="fas fa-check-circle" style="color: #10b981; margin-right: 10px;"></i> <strong>Expected Delivery:</strong> 48 to 60 Hours</li>
            <li><i class="fas fa-check-circle" style="color: #10b981; margin-right: 10px;"></i> <strong>Vehicles Available:</strong> 17ft, 19ft, 22ft, and 32ft Sealed Container Trucks</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- Section: Specialized Services Grid -->
  <section style="padding: 60px 0; background: #0f172a; color: #ffffff;">
    <div class="container">
      <h2 style="font-size: 2.2rem; font-weight: 700; color: #ffffff; text-align: center; margin-bottom: 40px;">
        Relocation Services for Patna to Solapur
      </h2>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 30px;">
        
        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 30px; border-radius: 12px;">
          <div style="font-size: 2rem; color: #f59e0b; margin-bottom: 15px;"><i class="fas fa-home"></i></div>
          <h3 style="font-size: 1.3rem; color: #ffffff; margin-bottom: 10px;">Household Shifting</h3>
          <p style="color: #94a3b8; line-height: 1.6; font-size: 0.95rem;">Expert packing and transport of furniture, beds, sofas, modular kitchens, and home appliances with complete setup upon arrival in Solapur.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 30px; border-radius: 12px;">
          <div style="font-size: 2rem; color: #10b981; margin-bottom: 15px;"><i class="fas fa-industry"></i></div>
          <h3 style="font-size: 1.3rem; color: #ffffff; margin-bottom: 10px;">Textile Industry & Commercial Moves</h3>
          <p style="color: #94a3b8; line-height: 1.6; font-size: 0.95rem;">Specialized relocation for textile mill executives, traders, and commercial firms with official IBA GST bills.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); padding: 30px; border-radius: 12px;">
          <div style="font-size: 2rem; color: #3b82f6; margin-bottom: 15px;"><i class="fas fa-car"></i></div>
          <h3 style="font-size: 1.3rem; color: #ffffff; margin-bottom: 10px;">Car Carrier Transport</h3>
          <p style="color: #94a3b8; line-height: 1.6; font-size: 0.95rem;">Safe car shipping using enclosed hydraulic car trailers with door pickup in Patna and delivery in Solapur.</p>
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
        Patna to Solapur Estimated Tariff Chart
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
              <td style="padding: 16px 20px; color: #10b981; font-weight: 700;">₹16,000 - ₹22,000</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.08);">
              <td style="padding: 16px 20px; font-weight: 600;">2 BHK House Shifting</td>
              <td style="padding: 16px 20px;">Premium 7-Layer Cushioning</td>
              <td style="padding: 16px 20px; color: #10b981; font-weight: 700;">₹22,000 - ₹31,000</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.08);">
              <td style="padding: 16px 20px; font-weight: 600;">3 BHK House / Villa Shifting</td>
              <td style="padding: 16px 20px;">Full Heavy Crate & Custom Box Packaging</td>
              <td style="padding: 16px 20px; color: #10b981; font-weight: 700;">₹31,000 - ₹42,000</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.08);">
              <td style="padding: 16px 20px; font-weight: 600;">Car Transport (Enclosed Trailer)</td>
              <td style="padding: 16px 20px;">Hydraulic Locking System</td>
              <td style="padding: 16px 20px; color: #10b981; font-weight: 700;">₹12,000 - ₹18,000</td>
            </tr>
            <tr>
              <td style="padding: 16px 20px; font-weight: 600;">Bike Shifting Service</td>
              <td style="padding: 16px 20px;">Bubble + Cardboard Sheet Guard</td>
              <td style="padding: 16px 20px; color: #10b981; font-weight: 700;">₹5,000 - ₹8,000</td>
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
          <h3 style="color: #10b981; font-size: 1.2rem; margin-bottom: 15px;"><i class="fas fa-map-marker-alt"></i> Solapur Delivery Areas</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.8;">
            Civil Lines, Hotgi Road, Juma Peth, Ashok Chowk, Vijapur Road, Navi Peth, and MIDC Area.
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
      <h2 style="font-size: 2.3rem; font-weight: 800; margin-bottom: 15px;">Plan Your Patna to Solapur Move Today!</h2>
      <p style="font-size: 1.1rem; margin-bottom: 30px; opacity: 0.9;">Get a free survey and price estimate from our intercity relocation specialists.</p>
      <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap;">
        <a href="tel:<?php echo SITE_PHONE_RAW; ?>" style="padding: 14px 32px; background: #ffffff; color: #b71c1c; border-radius: 50px; font-weight: 800; text-decoration: none; box-shadow: 0 4px 15px rgba(0,0,0,0.2);">
          Call Now: <?php echo SITE_PHONE; ?>
        </a>
        <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20to%20book%20Patna%20to%20Solapur%20shifting." target="_blank" style="padding: 14px 32px; background: #10b981; color: #ffffff; border-radius: 50px; font-weight: 800; text-decoration: none; box-shadow: 0 4px 15px rgba(0,0,0,0.2);">
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
  
  var message = "Hello Shree Ashirwad Packers,\n\nI would like a Shifting Quote for Patna to Solapur:\n- Name: " + name + "\n- Phone: " + phone + "\n- Moving From: " + moveFrom + "\n- Moving To: " + moveTo;
  
  var whatsappUrl = "https://api.whatsapp.com/send?phone=918409531615&text=" + encodeURIComponent(message);
  window.open(whatsappUrl, '_blank');
}
</script>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
