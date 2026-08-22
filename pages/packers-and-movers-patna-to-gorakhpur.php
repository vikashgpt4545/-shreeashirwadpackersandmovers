<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "Packers and Movers Patna to Gorakhpur | Shree Ashirwad Packers";
$page_desc = "Hire certified packers and movers from Patna to Gorakhpur. Top-rated intercity relocation, 7-layer protective packaging, GPS-tracked container transport, and 100% transit insurance. Get free quotes now!";
$page_keywords = "packers and movers patna to gorakhpur, best packers and movers patna to gorakhpur, Patna to Gorakhpur shifting charges, household relocation patna to gorakhpur, car transport patna to gorakhpur, bike courier patna to gorakhpur";
$canonical_url = "https://shreeashirwadpackersandmovers.com/pages/packers-and-movers-patna-to-gorakhpur.php";

// FAQ Array for Schema and On-Page Render
$faqs = [
    [
        "q" => "What is the cost of Packers and Movers from Patna to Gorakhpur?",
        "a" => "Intercity shifting costs from Patna to Gorakhpur range from ₹9,500 to ₹21,000 for 1-3 BHK apartments depending on household volume, packing standard, and transit insurance options."
    ],
    [
        "q" => "How long does household goods transit take from Patna to Gorakhpur?",
        "a" => "The average highway transit time between Patna and Gorakhpur is approximately 6 to 9 hours via NH 27 / Gopalganj route, ensuring same-day or next-morning delivery."
    ],
    [
        "q" => "Do you provide dedicated container trucks for Patna to Gorakhpur moves?",
        "a" => "Yes, we offer both dedicated enclosed container trucks and cost-effective shared container logistics for Patna to Gorakhpur relocations."
    ],
    [
        "q" => "Is transit insurance mandatory for Patna to Gorakhpur shifting?",
        "a" => "We strongly recommend 3% transit insurance covering all household goods against accidental damage, theft, or unforeseen transit risks."
    ],
    [
        "q" => "Can I transport my car or bike along with household goods to Gorakhpur?",
        "a" => "Yes, we operate specialized car carrier trailers and enclosed bike transport containers for safe vehicle shipping alongside home relocation."
    ],
    [
        "q" => "What packaging materials are used for fragile electronics and furniture?",
        "a" => "We utilize heavy-duty corrugated sheets, multi-layer bubble wrap, foam corner guards, stretch film wrapping, and sturdy wooden crates for delicate items."
    ],
    [
        "q" => "Are loading, unloading, and unpacking included in the final estimate?",
        "a" => "Yes, our comprehensive quote covers end-to-end services including expert packing, loading, highway transit, unloading, and room-wise unpacking."
    ],
    [
        "q" => "How far in advance should I book my Patna to Gorakhpur relocation?",
        "a" => "We advise booking at least 2 to 3 days prior to your preferred shifting date to secure specialized trucks and optimal crew allocation."
    ],
    [
        "q" => "What documents are required for intercity goods transport from Bihar to UP?",
        "a" => "You need to provide a copy of your ID proof (Aadhaar/PAN), consignment note/bill provided by us, and a detailed inventory list."
    ],
    [
        "q" => "How can I track my consignment during Patna to Gorakhpur transit?",
        "a" => "All our long-distance carrier vehicles are equipped with real-time GPS tracking, and our dedicated move coordinators provide regular WhatsApp location updates."
    ]
];

// Generate JSON-LD FAQ Schema
$faq_schema_items = [];
foreach ($faqs as $faq) {
    $faq_schema_items[] = [
        "@type" => "Question",
        "name" => $faq["q"],
        "acceptedAnswer" => [
            "@type" => "Answer",
            "text" => $faq["a"]
        ]
    ];
}
$faq_schema = [
    "@context" => "https://schema.org",
    "@type" => "FAQPage",
    "mainEntity" => $faq_schema_items
];

require_once __DIR__ . '/../includes/header.php';
?>

<!-- JSON-LD FAQ Schema Injection -->
<script type="application/ld+json">
<?php echo json_encode($faq_schema, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE); ?>
</script>

<div class="dark-theme-override">
  <main class="site-main">

    <!-- Visual Breadcrumbs -->
    <div class="breadcrumb-wrapper">
      <div class="container">
        <div class="breadcrumb-list">
          <span class="breadcrumb-item"><a href="<?php echo SITE_URL; ?>" title="Home">Home</a></span>
          <span class="breadcrumb-separator">/</span>
          <span class="breadcrumb-item"><a href="<?php echo SITE_URL; ?>/pages/branches.php">Intercity Shifting</a></span>
          <span class="breadcrumb-separator">/</span>
          <span class="breadcrumb-item active">Patna to Gorakhpur</span>
        </div>
      </div>
    </div>

    <!-- Hero Section -->
    <section class="hero-section">
      <div class="container">
        <div class="hero-grid">
          
          <div class="hero-text">
            <span class="section-tag">PATNA TO GORAKHPUR RELOCATION SPECIALISTS</span>
            <h1>Verified <span class="highlight">Packers and Movers Patna to Gorakhpur</span></h1>
            <p>Experience seamless, stress-free intercity relocation from Patna to Gorakhpur with Shree Ashirwad Packers and Movers. We offer 7-layer protective packaging, dedicated sealed container trucks, real-time GPS tracking, and 100% transit insurance for complete peace of mind.</p>
            
            <div class="hero-buttons">
              <a href="tel:<?php echo SITE_PHONE_RAW; ?>" class="btn btn-call" title="Call Us Now">
                <i class="fas fa-phone-alt"></i> Call: <?php echo SITE_PHONE; ?>
              </a>
              <a href="https://wa.me/918409531615?text=Hi%20Shree%20Ashirwad%20Packers,%20I%20need%20a%20quote%20for%20Patna%20to%20Gorakhpur%20relocation." class="btn btn-whatsapp" target="_blank" title="Chat on WhatsApp">
                <i class="fab fa-whatsapp"></i> WhatsApp Quote
              </a>
            </div>

            <div class="hero-badges">
              <span><i class="fas fa-shield-alt"></i> Fully Insured</span>
              <span><i class="fas fa-box-open"></i> 7-Layer Packing</span>
              <span><i class="fas fa-truck-moving"></i> Door-to-Door</span>
            </div>
          </div>

          <div class="hero-form-card">
            <h2>Get Free Patna to Gorakhpur Quote</h2>
            <p>Fast estimation sent directly to your phone</p>
            <form onsubmit="sendHeroWhatsAppLead(event, this);">
              <div class="form-group">
                <input type="text" name="name" class="form-control" placeholder="Your Full Name" required>
              </div>
              <div class="form-group">
                <input type="tel" name="phone" class="form-control" placeholder="10-Digit Mobile Number" required pattern="[0-9]{10}">
              </div>
              <div class="form-row">
                <input type="text" name="move_from" class="form-control" value="Patna" readonly>
                <input type="text" name="move_to" class="form-control" value="Gorakhpur" readonly>
              </div>
              <button type="submit" class="btn btn-submit">Get Instant Price &rarr;</button>
            </form>
          </div>

        </div>
      </div>
    </section>

    <!-- Trust Stats Bar -->
    <section class="stats-bar">
      <div class="container">
        <div class="stats-grid">
          <div class="stat-item">
            <span class="number">12,500+</span>
            <span class="label">Moves Completed</span>
          </div>
          <div class="stat-item">
            <span class="number">99.4%</span>
            <span class="label">On-Time Delivery</span>
          </div>
          <div class="stat-item">
            <span class="number">4.9/5</span>
            <span class="label">Customer Rating</span>
          </div>
          <div class="stat-item">
            <span class="number">100%</span>
            <span class="label">Safe Transit Guarantee</span>
          </div>
        </div>
      </div>
    </section>

    <!-- Service Offerings -->
    <section class="services-section">
      <div class="container">
        <div class="section-header text-center">
          <h2>Complete Patna to Gorakhpur Shifting Solutions</h2>
          <p>End-to-end relocation services tailored for your home, office, and vehicles</p>
        </div>

        <div class="services-grid">
          <div class="service-card">
            <div class="icon-box"><i class="fas fa-home"></i></div>
            <h3>Household Relocation</h3>
            <p>Complete packing, loading, container transit, and unpacking of furniture, appliances, and personal belongings from Patna to any locality in Gorakhpur.</p>
          </div>
          <div class="service-card">
            <div class="icon-box"><i class="fas fa-car"></i></div>
            <h3>Vehicle Carrier Transport</h3>
            <p>Safe shipping of cars and bikes in hydraulic car carriers and specialized enclosed trailers with scratch-free loading guarantees.</p>
          </div>
          <div class="service-card">
            <div class="icon-box"><i class="fas fa-building"></i></div>
            <h3>Corporate & Office Shifting</h3>
            <p>Systematic moving of office desks, IT equipment, server racks, and office archives with minimal operational downtime.</p>
          </div>
          <div class="service-card">
            <div class="icon-box"><i class="fas fa-warehouse"></i></div>
            <h3>Storage & Warehousing</h3>
            <p>Short-term and long-term secure warehousing facilities in Patna and Gorakhpur with 24/7 CCTV surveillance and climate protection.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Tariff & Pricing Table -->
    <section class="pricing-section">
      <div class="container">
        <div class="section-header text-center">
          <h2>Estimated Patna to Gorakhpur Shifting Tariffs</h2>
          <p>Transparent rates with zero hidden charges or unexpected fees</p>
        </div>

        <div class="table-responsive">
          <table class="pricing-table">
            <thead>
              <tr>
                <th>Shifting Type</th>
                <th>Packing Level</th>
                <th>Estimated Cost (₹)</th>
                <th>Est. Transit Time</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1 BHK Apartment Move</td>
                <td>Standard 5-Layer</td>
                <td>₹9,500 - ₹13,500</td>
                <td>6 - 8 Hours</td>
              </tr>
              <tr>
                <td>2 BHK Apartment Move</td>
                <td>Premium 7-Layer</td>
                <td>₹14,000 - ₹18,500</td>
                <td>7 - 10 Hours</td>
              </tr>
              <tr>
                <td>3 BHK / Villa Shifting</td>
                <td>Ultra Executive Crating</td>
                <td>₹19,000 - ₹26,000</td>
                <td>10 - 14 Hours</td>
              </tr>
              <tr>
                <td>Two-Wheeler Transport</td>
                <td>Bubble Wrap + Wooden Frame</td>
                <td>₹2,800 - ₹4,200</td>
                <td>24 Hours</td>
              </tr>
              <tr>
                <td>Car Carrier Transport</td>
                <td>Covered Trailer Container</td>
                <td>₹8,000 - ₹12,000</td>
                <td>24 Hours</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </section>

    <!-- Relocation Workflow -->
    <section class="workflow-section">
      <div class="container">
        <div class="section-header text-center">
          <h2>Our 6-Step Patna to Gorakhpur Relocation Process</h2>
          <p>How we ensure a smooth, worry-free moving experience from start to finish</p>
        </div>

        <div class="workflow-grid">
          <div class="step-card">
            <div class="step-num">01</div>
            <h3>Pre-Move Survey</h3>
            <p>Comprehensive video or in-person evaluation to record item volume and special crating requirements.</p>
          </div>
          <div class="step-card">
            <div class="step-num">02</div>
            <h3>Multi-Layer Packing</h3>
            <p>Professional packing using bubble wraps, corrugated sheets, edge guards, and waterproof stretch film.</p>
          </div>
          <div class="step-card">
            <div class="step-num">03</div>
            <h3>Heavy Loading</h3>
            <p>Skilled handling of bulky furniture and heavy appliances using ramps, sliders, and safety belts.</p>
          </div>
          <div class="step-card">
            <div class="step-num">04</div>
            <h3>Highway Transit</h3>
            <p>Express transit via NH 27 in sealed, weather-proof containers equipped with GPS tracking.</p>
          </div>
          <div class="step-card">
            <div class="step-num">05</div>
            <h3>Doorstep Unloading</h3>
            <p>Safe unloading and room-wise placement of items at your new address in Gorakhpur.</p>
          </div>
          <div class="step-card">
            <div class="step-num">06</div>
            <h3>Unpacking & Setup</h3>
            <p>Unpacking, inspection, and furniture re-assembly to help you settle in effortlessly.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Route Safety & Info -->
    <section class="route-info-section">
      <div class="container">
        <div class="route-card">
          <h2>Patna to Gorakhpur Highway Transit & Safety Protocol</h2>
          <p>The road distance between Patna and Gorakhpur is approximately <strong>250 km</strong> via NH 27 via Gopalganj and Siwan. Our drivers are seasoned long-haul specialists accustomed to navigating state borders, toll plazas, and highway transit conditions.</p>
          <div class="route-features">
            <div class="r-feat"><i class="fas fa-shield-alt"></i> Sealed Container Lock System</div>
            <div class="r-feat"><i class="fas fa-satellite"></i> 24/7 Satellite GPS Monitoring</div>
            <div class="r-feat"><i class="fas fa-file-invoice-dollar"></i> Instant E-Way Bill & Transit Permit</div>
          </div>
        </div>
      </div>
    </section>

    <!-- FAQ Section -->
    <section class="faq-section">
      <div class="container">
        <div class="section-header text-center">
          <h2>Frequently Asked Questions (Patna to Gorakhpur Move)</h2>
          <p>Get answers to common queries regarding intercity moving, insurance, and transit times</p>
        </div>

        <div class="faq-accordion">
          <?php foreach ($faqs as $index => $faq): ?>
            <div class="faq-item">
              <h3 class="faq-question"><?php echo ($index + 1) . '. ' . htmlspecialchars($faq['q']); ?></h3>
              <div class="faq-answer">
                <p><?php echo htmlspecialchars($faq['a']); ?></p>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>

    <!-- Call to Action Banner -->
    <section class="cta-banner">
      <div class="container text-center">
        <h2>Ready for a Smooth Move from Patna to Gorakhpur?</h2>
        <p>Book with Patna's most trusted intercity relocation company today and enjoy stress-free shifting.</p>
        <div class="cta-buttons">
          <a href="tel:<?php echo SITE_PHONE_RAW; ?>" class="btn btn-call-large"><i class="fas fa-phone-alt"></i> Call <?php echo SITE_PHONE; ?></a>
          <a href="https://wa.me/918409531615?text=Hi%20Shree%20Ashirwad%20Packers,%20I%20want%20to%20book%20my%20Patna%20to%20Gorakhpur%20relocation." class="btn btn-whatsapp-large" target="_blank"><i class="fab fa-whatsapp"></i> Chat on WhatsApp</a>
        </div>
      </div>
    </section>

  </main>
</div>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>

