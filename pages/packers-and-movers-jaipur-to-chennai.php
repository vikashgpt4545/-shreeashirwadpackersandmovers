<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "Packers and Movers Jaipur to Chennai | Home & IT Relocation | 8409531615";
$page_desc = "Professional Packers and Movers from Jaipur to Chennai. Safe home shifting, IT & industrial relocation, car & bike transport via national highway corridor. Call (+91) 8409531615.";
$page_keywords = "packers and movers jaipur to chennai, jaipur to chennai movers, house shifting jaipur to chennai, car transport jaipur to chennai, relocation jaipur chennai, IBA approved movers jaipur chennai";

$page_city = "Jaipur to Chennai";

$faq_list = [
    [
        'q' => 'What are the packing and moving charges from Jaipur to Chennai?',
        'a' => 'Intercity shifting charges from Jaipur to Chennai range from ₹12,000 to ₹18,500 for 1BHK, ₹18,500 to ₹31,000 for 2BHK, and ₹28,000 to ₹48,000 for 3BHK house/apartment relocations depending on volume and container truck size.'
    ],
    [
        'q' => 'How long does household goods delivery take from Jaipur to Chennai?',
        'a' => 'Via national highway express corridors (1,950 km distance via Indore-Nagpur-Hyderabad), our dedicated container trucks deliver door-to-door within 48 to 72 hours (2 to 3 days) between Jaipur and Chennai.'
    ],
    [
        'q' => 'Which areas in Chennai do you deliver household goods to from Jaipur?',
        'a' => 'We deliver to all major residential & tech hubs in Chennai including Velachery, OMR IT Corridor, Anna Nagar, Adyar, T Nagar, Guindy, Porur, Sholinganallur, and Siruseri SIPCOT Park.'
    ],
    [
        'q' => 'Do you provide vehicle shipping for cars and motorcycles from Jaipur to Chennai?',
        'a' => 'Yes, we operate enclosed hydraulic car carriers and dedicated two-wheeler container vehicles with live GPS tracking for safe vehicle transport from Jaipur to Chennai.'
    ],
    [
        'q' => 'Are your moving bills compliant for corporate reimbursement in Chennai?',
        'a' => 'Yes, Shree Ashirwad Packers and Movers provides 100% genuine IBA-compliant GST bills, Lorry Receipts (LR), itemized inventory slips, and money receipts accepted by IT MNCs, Automobile manufacturers, Banks, and Government departments.'
    ],
    [
        'q' => 'What packaging materials are used for long-distance transport on the Jaipur-Chennai route?',
        'a' => 'We use a 7-layer safety system featuring air bubble wrap, 5-ply corrugated cardboard sheets, stretch wrapping film, foam edge guards, waterproof polyethylene, and custom wooden crates for delicate items.'
    ],
    [
        'q' => 'Can your crew handle pickup from Jaipur gated communities in Vaishali Nagar or Mansarovar?',
        'a' => 'Yes, our crew is fully equipped to handle high-rise residential apartment loading, elevator protection, and swift transit packing.'
    ],
    [
        'q' => 'Do you offer transit insurance for Jaipur to Chennai relocations?',
        'a' => 'Yes, we provide 100% full-value transit insurance policy coverage safeguarding your belongings against highway transport hazards.'
    ],
    [
        'q' => 'How many days in advance should I book my Jaipur to Chennai move?',
        'a' => 'We recommend booking 3 to 4 days in advance to reserve dedicated express containers and conduct pre-shifting surveys.'
    ],
    [
        'q' => 'How can I get an instant quote for Jaipur to Chennai shifting?',
        'a' => 'Call +91 8409531615 or submit your moving details on WhatsApp for a fast transparent price estimate.'
    ]
];

require_once __DIR__ . '/../includes/header.php';
?>

<main class="site-main">

  <!-- Visual Breadcrumb Navigation Bar -->
  <div class="breadcrumb-wrapper">
    <div class="container">
      <ul class="breadcrumb" style="display: flex; gap: 8px; list-style: none; padding: 12px 0; font-size: 0.9rem; color: #cbd5e1;">
        <li><a href="<?php echo SITE_URL; ?>" style="color: #f59e0b; text-decoration: none;">Home</a></li>
        <li>/</li>
        <li><a href="<?php echo SITE_URL; ?>services" style="color: #f59e0b; text-decoration: none;">Services</a></li>
        <li>/</li>
        <li style="color: #94a3b8;">Packers and Movers Jaipur to Chennai</li>
      </ul>
    </div>
  </div>

  <!-- Section 1: Hero Section with Lead Form -->
  <section class="hero-section" style="background: linear-gradient(135deg, #0b132b 0%, #172a54 100%); padding: 60px 0; color: #ffffff; position: relative;">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 15px;">
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 40px; align-items: center;">
        
        <div>
          <span style="background: rgba(245, 158, 11, 0.2); color: #f59e0b; padding: 6px 14px; border-radius: 20px; font-size: 0.85rem; font-weight: 700; text-transform: uppercase; letter-spacing: 1px;">
            Jaipur → Chennai Express Highway Corridor
          </span>
          <h1 style="font-size: 2.5rem; font-weight: 800; line-height: 1.2; margin: 15px 0; color: #ffffff;">
            Packers and Movers <span style="color: #f59e0b;">Jaipur to Chennai</span>
          </h1>
          <p style="font-size: 1.1rem; color: #cbd5e1; line-height: 1.7; margin-bottom: 25px;">
            Safe home shifting, IT & industrial relocation, car & bike shipping via national express corridor with 100% zero-damage guarantee and IBA claim approval.
          </p>
          <div style="display: flex; gap: 15px; flex-wrap: wrap;">
            <a href="tel:<?php echo SITE_PHONE_RAW; ?>" style="background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; padding: 14px 28px; border-radius: 50px; font-weight: 700; text-decoration: none; display: inline-flex; align-items: center; gap: 8px; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
              <i class="fas fa-phone-alt"></i> Call Now: <?php echo SITE_PHONE; ?>
            </a>
            <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20need%20a%20shifting%20quote%20for%20Jaipur%20to%20Chennai." target="_blank" style="background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; padding: 14px 28px; border-radius: 50px; font-weight: 700; text-decoration: none; display: inline-flex; align-items: center; gap: 8px; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
              <i class="fab fa-whatsapp"></i> WhatsApp Quote
            </a>
          </div>
        </div>

        <div style="background: #101c40; padding: 30px; border-radius: 16px; border: 1px solid rgba(245, 158, 11, 0.3); box-shadow: 0 10px 30px rgba(0,0,0,0.5);">
          <h3 style="font-size: 1.4rem; color: #f59e0b; font-weight: 700; margin-bottom: 20px; text-align: center;">
            Get Instant Jaipur to Chennai Quote
          </h3>
          <form onsubmit="sendHeroWhatsAppLead(event, this)">
            <div style="margin-bottom: 15px;">
              <input type="text" name="name" placeholder="Your Name *" required style="width: 100%; padding: 12px 15px; border-radius: 8px; border: 1px solid #1e293b; background: #0b132b; color: #ffffff; font-size: 0.95rem;">
            </div>
            <div style="margin-bottom: 15px;">
              <input type="tel" name="phone" placeholder="Mobile Number *" required style="width: 100%; padding: 12px 15px; border-radius: 8px; border: 1px solid #1e293b; background: #0b132b; color: #ffffff; font-size: 0.95rem;">
            </div>
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 10px; margin-bottom: 15px;">
              <input type="text" name="move_from" value="Jaipur, Raj" required style="width: 100%; padding: 12px 15px; border-radius: 8px; border: 1px solid #1e293b; background: #0b132b; color: #ffffff; font-size: 0.95rem;">
              <input type="text" name="move_to" value="Chennai, TN" required style="width: 100%; padding: 12px 15px; border-radius: 8px; border: 1px solid #1e293b; background: #0b132b; color: #ffffff; font-size: 0.95rem;">
            </div>
            <div style="margin-bottom: 20px;">
              <textarea name="message" placeholder="Item details / Shifting date (Optional)" style="width: 100%; padding: 12px 15px; border-radius: 8px; border: 1px solid #1e293b; background: #0b132b; color: #ffffff; font-size: 0.95rem; height: 75px; resize: none;"></textarea>
            </div>
            <button type="submit" style="width: 100%; padding: 14px; background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%); color: #0b132b; font-weight: 800; border: none; border-radius: 8px; font-size: 1.05rem; cursor: pointer; text-transform: uppercase; letter-spacing: 0.5px;">
              Request Free Estimate
            </button>
          </form>
        </div>

      </div>
    </div>
  </section>

  <!-- Section 2: Key Trust Badges -->
  <section style="padding: 30px 0; background: #070d1e; border-bottom: 1px solid rgba(255,255,255,0.05);">
    <div class="container" style="max-width: 1100px; margin: 0 auto; padding: 0 15px;">
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 20px; text-align: center;">
        <div style="background: #101c40; padding: 15px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #f59e0b; font-size: 1.5rem; font-weight: 800; margin: 0;">48-72 Hrs</h4>
          <p style="color: #94a3b8; font-size: 0.85rem; margin: 5px 0 0 0;">Express Highway Delivery</p>
        </div>
        <div style="background: #101c40; padding: 15px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #f59e0b; font-size: 1.5rem; font-weight: 800; margin: 0;">1,950 KM</h4>
          <p style="color: #94a3b8; font-size: 0.85rem; margin: 5px 0 0 0;">National Highway Corridor</p>
        </div>
        <div style="background: #101c40; padding: 15px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #f59e0b; font-size: 1.5rem; font-weight: 800; margin: 0;">100% IBA</h4>
          <p style="color: #94a3b8; font-size: 0.85rem; margin: 5px 0 0 0;">GST & Claim Compliant</p>
        </div>
        <div style="background: #101c40; padding: 15px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #f59e0b; font-size: 1.5rem; font-weight: 800; margin: 0;">Zero Damage</h4>
          <p style="color: #94a3b8; font-size: 0.85rem; margin: 5px 0 0 0;">7-Layer Safety Packing</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 3: Route Overview & Logistics -->
  <section style="padding: 60px 0; background: #0b132b; color: #ffffff;">
    <div class="container" style="max-width: 1100px; margin: 0 auto; padding: 0 15px;">
      <h2 style="font-size: 2rem; font-weight: 800; color: #ffffff; margin-bottom: 20px; text-align: center;">
        Jaipur to Chennai <span style="color: #f59e0b;">Express Shifting Infrastructure</span>
      </h2>
      <p style="font-size: 1.05rem; color: #cbd5e1; line-height: 1.8; text-align: justify; margin-bottom: 20px;">
        The intercity relocation route connecting Pink City Jaipur (Rajasthan) to Automobile & IT Hub Chennai (Tamil Nadu) covers approximately 1,950 km. Connecting Jaipur's major residential suburbs (Vaishali Nagar, Mansarovar, Malviya Nagar) with Chennai's key commercial & IT corridors (Velachery, OMR, Anna Nagar, Adyar, Sholinganallur), this route sees steady movement for IT corporate transfers, automotive engineers, and family relocations. <strong>Shree Ashirwad Packers and Movers</strong> operates scheduled container trucks on this route.
      </p>
      <p style="font-size: 1.05rem; color: #cbd5e1; line-height: 1.8; text-align: justify;">
        We manage complete packing in Jaipur, long-distance highway transport with live GPS tracking, and complete unpacking at your Chennai address. We issue 100% IBA-approved GST relocation invoices for corporate reimbursement claims.
      </p>
    </div>
  </section>

  <!-- Section 4: Cost Calculator Table -->
  <section style="padding: 60px 0; background: #070d1e; color: #ffffff;">
    <div class="container" style="max-width: 1100px; margin: 0 auto; padding: 0 15px;">
      <h2 style="font-size: 2rem; font-weight: 800; color: #ffffff; margin-bottom: 15px; text-align: center;">
        Jaipur to Chennai Shifting <span style="color: #f59e0b;">Cost & Price Table</span>
      </h2>
      <p style="color: #94a3b8; text-align: center; margin-bottom: 35px;">
        Transparent price breakdown for intercity household moving, vehicle carrier, and commercial cargo.
      </p>

      <div style="overflow-x: auto;">
        <table style="width: 100%; border-collapse: collapse; background: #101c40; border-radius: 10px; overflow: hidden; border: 1px solid rgba(245, 158, 11, 0.2);">
          <thead>
            <tr style="background: linear-gradient(135deg, #172a54 0%, #0b132b 100%); color: #f59e0b;">
              <th style="padding: 15px; text-align: left; border-bottom: 1px solid rgba(245, 158, 11, 0.3);">Shifting Category</th>
              <th style="padding: 15px; text-align: left; border-bottom: 1px solid rgba(245, 158, 11, 0.3);">Shared Express Container</th>
              <th style="padding: 15px; text-align: left; border-bottom: 1px solid rgba(245, 158, 11, 0.3);">Dedicated Full Truck Move</th>
            </tr>
          </thead>
          <tbody style="color: #cbd5e1; font-size: 0.95rem;">
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.05);">
              <td style="padding: 15px; font-weight: 600; color: #ffffff;">1 BHK House / Flat Shifting</td>
              <td style="padding: 15px;">₹12,000 - ₹15,500</td>
              <td style="padding: 15px;">₹15,500 - ₹18,500</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.05);">
              <td style="padding: 15px; font-weight: 600; color: #ffffff;">2 BHK House / Flat Move</td>
              <td style="padding: 15px;">₹18,500 - ₹25,000</td>
              <td style="padding: 15px;">₹25,000 - ₹31,000</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.05);">
              <td style="padding: 15px; font-weight: 600; color: #ffffff;">3 BHK Villa / Large Flat Move</td>
              <td style="padding: 15px;">₹28,000 - ₹38,000</td>
              <td style="padding: 15px;">₹38,000 - ₹48,000</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.05);">
              <td style="padding: 15px; font-weight: 600; color: #ffffff;">Two-Wheeler / Bike Shipping</td>
              <td style="padding: 15px;">₹4,200 - ₹6,000</td>
              <td style="padding: 15px;">₹6,000 - ₹7,800 (Wooden Crate)</td>
            </tr>
            <tr>
              <td style="padding: 15px; font-weight: 600; color: #ffffff;">Car Carrier Transport</td>
              <td style="padding: 15px;">₹11,500 - ₹16,500</td>
              <td style="padding: 15px;">₹16,500 - ₹21,000 (Enclosed Trailer)</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </section>

  <!-- Section 5: 7-Layer Packaging Process -->
  <section style="padding: 60px 0; background: #0b132b; color: #ffffff;">
    <div class="container" style="max-width: 1100px; margin: 0 auto; padding: 0 15px;">
      <h2 style="font-size: 2rem; font-weight: 800; color: #ffffff; margin-bottom: 20px; text-align: center;">
        Highway Protection <span style="color: #f59e0b;">7-Layer Safety Packaging</span>
      </h2>
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 20px; margin-top: 30px;">
        <div style="background: #101c40; padding: 20px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <h3 style="color: #f59e0b; font-size: 1.1rem; font-weight: 700; margin-bottom: 10px;">Layer 1: Dust & Scratch Film</h3>
          <p style="color: #cbd5e1; font-size: 0.9rem; margin: 0;">Initial tight stretch wrapping to protect furniture surfaces from highway dust.</p>
        </div>
        <div style="background: #101c40; padding: 20px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <h3 style="color: #f59e0b; font-size: 1.1rem; font-weight: 700; margin-bottom: 10px;">Layer 2: High-Density Air Bubble Cushioning</h3>
          <p style="color: #cbd5e1; font-size: 0.9rem; margin: 0;">Heavy bubble wrap protecting electronics, glass, and delicate kitchenware.</p>
        </div>
        <div style="background: #101c40; padding: 20px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <h3 style="color: #f59e0b; font-size: 1.1rem; font-weight: 700; margin-bottom: 10px;">Layer 3: 5-Ply Corrugated Sheets</h3>
          <p style="color: #cbd5e1; font-size: 0.9rem; margin: 0;">Rigid cardboard armor wrapped over wooden wardrobes, beds, and refrigerators.</p>
        </div>
        <div style="background: #101c40; padding: 20px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <h3 style="color: #f59e0b; font-size: 1.1rem; font-weight: 700; margin-bottom: 10px;">Layer 4: Foam Corner Protectors</h3>
          <p style="color: #cbd5e1; font-size: 0.9rem; margin: 0;">Form-fitted foam locks shielding television screens, mirrors, and tabletops.</p>
        </div>
        <div style="background: #101c40; padding: 20px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <h3 style="color: #f59e0b; font-size: 1.1rem; font-weight: 700; margin-bottom: 10px;">Layer 5: Waterproof Polyethylene Outer Wrap</h3>
          <p style="color: #cbd5e1; font-size: 0.9rem; margin: 0;">Weatherproof plastic shield safeguarding mattresses and electronic goods during transit.</p>
        </div>
        <div style="background: #101c40; padding: 20px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <h3 style="color: #f59e0b; font-size: 1.1rem; font-weight: 700; margin-bottom: 10px;">Layer 6 & 7: Fumigated Wooden Crating & Cargo Lashing</h3>
          <p style="color: #cbd5e1; font-size: 0.9rem; margin: 0;">Custom wooden crates for fragile valuables, anchored securely inside weather-sealed container trucks.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 6: Major Delivery Zones in Chennai -->
  <section style="padding: 60px 0; background: #070d1e; color: #ffffff;">
    <div class="container" style="max-width: 1100px; margin: 0 auto; padding: 0 15px;">
      <h2 style="font-size: 2rem; font-weight: 800; color: #ffffff; margin-bottom: 20px; text-align: center;">
        Chennai Delivery Localities <span style="color: #f59e0b;">Covered</span>
      </h2>
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 15px;">
        <div style="background: #101c40; padding: 15px; border-radius: 8px; border: 1px solid rgba(245, 158, 11, 0.2); color: #cbd5e1; font-weight: 600;">
          <i class="fas fa-map-marker-alt" style="color: #f59e0b; margin-right: 8px;"></i> Velachery & Madipakkam
        </div>
        <div style="background: #101c40; padding: 15px; border-radius: 8px; border: 1px solid rgba(245, 158, 11, 0.2); color: #cbd5e1; font-weight: 600;">
          <i class="fas fa-map-marker-alt" style="color: #f59e0b; margin-right: 8px;"></i> OMR IT Corridor & Sholinganallur
        </div>
        <div style="background: #101c40; padding: 15px; border-radius: 8px; border: 1px solid rgba(245, 158, 11, 0.2); color: #cbd5e1; font-weight: 600;">
          <i class="fas fa-map-marker-alt" style="color: #f59e0b; margin-right: 8px;"></i> Anna Nagar & Mogappair
        </div>
        <div style="background: #101c40; padding: 15px; border-radius: 8px; border: 1px solid rgba(245, 158, 11, 0.2); color: #cbd5e1; font-weight: 600;">
          <i class="fas fa-map-marker-alt" style="color: #f59e0b; margin-right: 8px;"></i> Adyar, Besant Nagar & T Nagar
        </div>
        <div style="background: #101c40; padding: 15px; border-radius: 8px; border: 1px solid rgba(245, 158, 11, 0.2); color: #cbd5e1; font-weight: 600;">
          <i class="fas fa-map-marker-alt" style="color: #f59e0b; margin-right: 8px;"></i> Porur, Poonamallee & Guindy
        </div>
        <div style="background: #101c40; padding: 15px; border-radius: 8px; border: 1px solid rgba(245, 158, 11, 0.2); color: #cbd5e1; font-weight: 600;">
          <i class="fas fa-map-marker-alt" style="color: #f59e0b; margin-right: 8px;"></i> Siruseri SIPCOT IT Zone
        </div>
      </div>
    </div>
  </section>

  <!-- Section 7: Key Pickup Locations in Jaipur -->
  <section style="padding: 60px 0; background: #0b132b; color: #ffffff;">
    <div class="container" style="max-width: 1100px; margin: 0 auto; padding: 0 15px;">
      <h2 style="font-size: 2rem; font-weight: 800; color: #ffffff; margin-bottom: 20px; text-align: center;">
        Jaipur Pickup Hubs <span style="color: #f59e0b;">Covered</span>
      </h2>
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 15px;">
        <div style="background: #101c40; padding: 15px; border-radius: 8px; border: 1px solid rgba(245, 158, 11, 0.2); color: #cbd5e1;">
          <i class="fas fa-truck-loading" style="color: #f59e0b; margin-right: 8px;"></i> Vaishali Nagar & Chitrakoot
        </div>
        <div style="background: #101c40; padding: 15px; border-radius: 8px; border: 1px solid rgba(245, 158, 11, 0.2); color: #cbd5e1;">
          <i class="fas fa-truck-loading" style="color: #f59e0b; margin-right: 8px;"></i> Mansarovar & Sanganer
        </div>
        <div style="background: #101c40; padding: 15px; border-radius: 8px; border: 1px solid rgba(245, 158, 11, 0.2); color: #cbd5e1;">
          <i class="fas fa-truck-loading" style="color: #f59e0b; margin-right: 8px;"></i> Malviya Nagar & Durgapura
        </div>
        <div style="background: #101c40; padding: 15px; border-radius: 8px; border: 1px solid rgba(245, 158, 11, 0.2); color: #cbd5e1;">
          <i class="fas fa-truck-loading" style="color: #f59e0b; margin-right: 8px;"></i> Jagatpura & Sitapura Industrial Area
        </div>
        <div style="background: #101c40; padding: 15px; border-radius: 8px; border: 1px solid rgba(245, 158, 11, 0.2); color: #cbd5e1;">
          <i class="fas fa-truck-loading" style="color: #f59e0b; margin-right: 8px;"></i> Raja Park & C-Scheme
        </div>
      </div>
    </div>
  </section>

  <!-- Section 8: Specialized Relocation Services -->
  <section style="padding: 60px 0; background: #070d1e; color: #ffffff;">
    <div class="container" style="max-width: 1100px; margin: 0 auto; padding: 0 15px;">
      <h2 style="font-size: 2rem; font-weight: 800; color: #ffffff; margin-bottom: 20px; text-align: center;">
        Our Specialized <span style="color: #f59e0b;">Relocation Solutions</span>
      </h2>
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); gap: 20px;">
        <div style="background: #101c40; padding: 20px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2); text-align: center;">
          <i class="fas fa-home" style="font-size: 2rem; color: #f59e0b; margin-bottom: 15px;"></i>
          <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700;">Full House Shifting</h3>
          <p style="color: #cbd5e1; font-size: 0.85rem; line-height: 1.6;">End-to-end packing, express highway transport, and complete unpacking in Chennai.</p>
        </div>
        <div style="background: #101c40; padding: 20px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2); text-align: center;">
          <i class="fas fa-laptop-code" style="font-size: 2rem; color: #f59e0b; margin-bottom: 15px;"></i>
          <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700;">IT & Auto Corporate Move</h3>
          <p style="color: #cbd5e1; font-size: 0.85rem; line-height: 1.6;">OMR IT employee transfers & auto component office relocations with IBA claim bills.</p>
        </div>
        <div style="background: #101c40; padding: 20px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2); text-align: center;">
          <i class="fas fa-car" style="font-size: 2rem; color: #f59e0b; margin-bottom: 15px;"></i>
          <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700;">Car Carrier Shipping</h3>
          <p style="color: #cbd5e1; font-size: 0.85rem; line-height: 1.6;">Enclosed hydraulic car trailers for safe vehicle transport from Jaipur to Chennai.</p>
        </div>
        <div style="background: #101c40; padding: 20px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2); text-align: center;">
          <i class="fas fa-motorcycle" style="font-size: 2rem; color: #f59e0b; margin-bottom: 15px;"></i>
          <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700;">Bike Shipping</h3>
          <p style="color: #cbd5e1; font-size: 0.85rem; line-height: 1.6;">Multi-layer bubble wrapping and wooden crate protection for two-wheelers.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 9: Customer Reviews -->
  <section style="padding: 60px 0; background: #0b132b; color: #ffffff;">
    <div class="container" style="max-width: 1100px; margin: 0 auto; padding: 0 15px;">
      <h2 style="font-size: 2rem; font-weight: 800; color: #ffffff; margin-bottom: 30px; text-align: center;">
        Jaipur to Chennai Client <span style="color: #f59e0b;">Testimonials</span>
      </h2>
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 20px;">
        <div style="background: #101c40; padding: 25px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <div style="color: #f59e0b; margin-bottom: 10px;">★★★★★</div>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.7; font-style: italic;">
            "Moved 3BHK household goods from Malviya Nagar Jaipur to Velachery Chennai. Delivered in 60 hours in perfect condition."
          </p>
          <h4 style="color: #ffffff; font-size: 0.95rem; font-weight: 700; margin: 15px 0 0 0;">— Sundaram Natarajan (Auto Tech Lead)</h4>
        </div>
        <div style="background: #101c40; padding: 25px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <div style="color: #f59e0b; margin-bottom: 10px;">★★★★★</div>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.7; font-style: italic;">
            "Shifted 2BHK items and motorcycle from Mansarovar Jaipur to OMR Chennai. Smooth handling and genuine IBA GST claim bill."
          </p>
          <h4 style="color: #ffffff; font-size: 0.95rem; font-weight: 700; margin: 15px 0 0 0;">— Preeti Khandelwal (Software Developer)</h4>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 10: Frequently Asked Questions -->
  <section style="padding: 60px 0; background: #070d1e; color: #ffffff;">
    <div class="container" style="max-width: 1000px; margin: 0 auto; padding: 0 15px;">
      
      <div style="text-align: center; margin-bottom: 40px;">
        <span style="background: rgba(245, 158, 11, 0.2); color: #f59e0b; padding: 6px 16px; border-radius: 20px; font-size: 0.85rem; font-weight: 700; text-transform: uppercase;">
          Got Questions?
        </span>
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin-top: 10px;">
          Frequently Asked Questions About <span style="color: #f59e0b;">Jaipur to Chennai Move</span>
        </h2>
      </div>

      <div style="display: flex; flex-direction: column; gap: 16px;">
        <?php foreach ($faq_list as $index => $faq): ?>
        <div style="background: #101c40; padding: 20px 24px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Q<?php echo ($index + 1); ?>: <?php echo htmlspecialchars($faq['q']); ?></h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.7;">
            <?php echo htmlspecialchars($faq['a']); ?>
          </p>
        </div>
        <?php endforeach; ?>
      </div>

    </div>
  </section>

  <!-- Section 11: Call To Action Banner -->
  <section class="cta-banner-section" style="padding: 70px 0; background: linear-gradient(135deg, #172a54 0%, #0b132b 100%); border-top: 1.5px solid rgba(245, 158, 11, 0.4); color: #ffffff;">
    <div class="container" style="max-width: 900px; text-align: center;">
      
      <span class="section-tag" style="background: rgba(245, 158, 11, 0.2); color: #f59e0b; padding: 6px 16px; border-radius: 20px; font-size: 0.85rem; font-weight: 700; text-transform: uppercase;">
        Book Jaipur to Chennai Moving Service
      </span>

      <h2 style="font-size: 2.3rem; font-weight: 800; margin: 15px 0; color: #ffffff;">
        Ready to Move from <span style="color: #f59e0b;">Jaipur to Chennai</span>?
      </h2>

      <p style="font-size: 1.05rem; color: #cbd5e1; max-width: 750px; margin: 0 auto 30px auto; line-height: 1.7;">
        Contact our express highway relocation manager today for a transparent price quote and enjoy safe, zero-damage household & corporate shifting from Jaipur to Chennai.
      </p>

      <div style="display: flex; gap: 15px; justify-content: center; flex-wrap: wrap; margin-bottom: 25px;">
        <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Now" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 30px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1.05rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
          <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call Now: <?php echo SITE_PHONE; ?>
        </a>
        <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20need%20a%20shifting%20quote%20for%20Jaipur%20to%20Chennai." title="Chat on WhatsApp" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 30px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1.05rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
          <i class="fab fa-whatsapp" style="margin-right: 8px;"></i> Chat on WhatsApp
        </a>
        <a href="<?php echo SITE_URL; ?>contact" title="Contact Office" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 30px; background: linear-gradient(135deg, #1e293b 0%, #0f172a 100%); border: 1.5px solid #f59e0b; color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1.05rem; text-decoration: none; box-shadow: 0 4px 15px rgba(245, 158, 11, 0.2);">
          <i class="fas fa-map-marker-alt" style="margin-right: 8px;"></i> Contact Office
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
  var extraMsg = form.querySelector('[name="message"]').value;
  
  var message = "Hello Shree Ashirwad Packers & Movers,\n\nI would like to request a Shifting Quote for Jaipur to Chennai:\n- Name: " + name + "\n- Phone: " + phone + "\n- Moving From: " + moveFrom + "\n- Moving To: " + moveTo;
  
  if (extraMsg && extraMsg.trim() !== '') {
    message += "\n- Details: " + extraMsg;
  }
  
  var whatsappUrl = "https://api.whatsapp.com/send?phone=918409531615&text=" + encodeURIComponent(message);
  window.location.href = whatsappUrl;
}
</script>

<section style="padding: 45px 0; background: #f8fafc; border-top: 1px solid #e2e8f0;">
  <div class="container" style="max-width: 1100px; margin: 0 auto; padding: 0 15px;">
    <div style="display: grid; gap: 24px; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); align-items: center;">
      <div>
        <span style="display: inline-block; color: #d32f2f; font-weight: 700; text-transform: uppercase; font-size: 0.8rem; letter-spacing: 1px; margin-bottom: 10px;">Jaipur to Chennai Route</span>
        <h3 style="font-size: 1.55rem; color: #0f172a; font-weight: 800; margin: 0 0 12px 0;">Safe express relocation from Jaipur to Chennai</h3>
        <p style="font-size: 1.0rem; color: #475569; line-height: 1.8; margin: 0;">Our dedicated container trucks operate along national express corridors providing 48-72 hour express delivery between Jaipur (Vaishali Nagar, Mansarovar, Malviya Nagar) and Chennai (Velachery, OMR, Anna Nagar, Adyar, Sholinganallur).</p>
      </div>
      <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 14px;">
        <img title="Shree Ashirwad Packers and Movers" src="<?php echo SITE_URL; ?>assets/images/gallery/gallery-2.webp" alt="Protective packing for Jaipur to Chennai move" style="width: 100%; height: 250px; object-fit: cover; border-radius: 12px; border: 1px solid #e2e8f0; box-shadow: 0 4px 12px rgba(0,0,0,0.08);" loading="lazy">
        <img title="Shree Ashirwad Packers and Movers" src="<?php echo SITE_URL; ?>assets/images/gallery/gallery-4.webp" alt="Container truck on Jaipur Chennai highway" style="width: 100%; height: 250px; object-fit: cover; border-radius: 12px; border: 1px solid #e2e8f0; box-shadow: 0 4px 12px rgba(0,0,0,0.08);" loading="lazy">
      </div>
    </div>
  </div>
</section>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
