<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "Bike Transport Guide Jamshedpur | Two-Wheeler Courier | 8409531615";
$page_desc = "Complete Bike Transport Guide in Jamshedpur. Safe two-wheeler packaging, corrugated wrapping, enclosed container courier, door-to-door delivery. Call (+91) 8409531615.";
$page_keywords = "bike transport guide jamshedpur, motorcycle courier jamshedpur, two wheeler shifting bistupur sakchi mango adityapur, bike packing parcel service jamshedpur";

$page_city = "Jamshedpur";

$faq_list = [
    ['q' => 'What documents are required for bike shipping from Jamshedpur?', 'a' => 'Copy of RC book, valid insurance policy, pollution certificate (PUC), and owner Aadhaar card copy.'],
    ['q' => 'Will my motorcycle be driven on the road?', 'a' => 'No, bikes are loaded directly into covered container vehicles after complete wrapping.'],
    ['q' => 'How to book bike courier service with Shree Ashirwad Packers?', 'a' => 'Call +91 8409531615 or message us on WhatsApp for door-step pickup booking.'],
    ['q' => 'How is a bike wrapped for transport in Jamshedpur?', 'a' => 'We use 4-layer packaging including bubble wrap, corrugated sheets, stretch film, and heavy-duty tape.'],
    ['q' => 'Do you drain the petrol tank before bike transport?', 'a' => 'Yes, petrol tanks are drained to under 1 liter to comply with national highway safety regulations.']
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
        <span class="breadcrumb-item"><a href="<?php echo SITE_URL; ?>packers-and-movers-in-jamshedpur" title="Jamshedpur">Jamshedpur</a></span>
        <span class="breadcrumb-separator">/</span>
        <span class="breadcrumb-item active">Bike Transport Guide Jamshedpur</span>
      </div>
    </div>
  </div>


  <!-- Hero Section -->
  <section class="hero-section" style="background: linear-gradient(135deg, #0b132b 0%, #1c2541 100%); padding: 60px 0; color: #ffffff;">
    <div class="container">
      <div class="hero-grid" style="display: grid; grid-template-columns: 1.2fr 0.8fr; gap: 40px; align-items: center;">
        
        <div class="hero-text">
          <span class="section-tag" style="background: rgba(245, 158, 11, 0.15); color: #f59e0b; border: 1px solid rgba(245, 158, 11, 0.4); padding: 6px 16px; border-radius: 20px; font-size: 0.85rem; font-weight: 700; text-transform: uppercase; display: inline-block; margin-bottom: 15px;">
            Two-Wheeler Logistics Guide
          </span>
          <h1 style="font-size: 2.7rem; font-weight: 800; line-height: 1.2; margin-bottom: 20px; color: #ffffff;">
            Safe <span style="color: #f59e0b;">Bike Transport Guide Jamshedpur</span>
          </h1>
          <p style="font-size: 1.08rem; color: #cbd5e1; line-height: 1.7; margin-bottom: 25px;">
            Shipping your motorcycle, sports bike, or scooter from Jamshedpur to any destination across India? Shree Ashirwad Packers provides scratch-proof 4-layer bike wrapping, fuel safety drainage, enclosed container transport, and door-to-door delivery across Bistupur, Sakchi, Mango, Adityapur, Telco, Sonari, and Kadma.
          </p>

          <div style="display: flex; gap: 15px; flex-wrap: wrap; margin-bottom: 30px;">
            <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Now:" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #d32f2f 0%, #f59e0b 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(211, 47, 47, 0.4);">
              <i class="fas fa-phone-alt"></i> Call Now: <?php echo SITE_PHONE; ?>
            </a>
            <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20need%20bike%20transport%20quote%20from%20Jamshedpur." title="Chat on WhatsApp" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
              <i class="fab fa-whatsapp"></i> Chat on WhatsApp
            </a>
          </div>
        </div>

        <div class="hero-form-card" style="background: rgba(255, 255, 255, 0.05); backdrop-filter: blur(10px); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 16px; padding: 30px; box-shadow: 0 15px 35px rgba(0,0,0,0.4);">
          <h2 style="font-size: 1.4rem; color: #ffffff; margin-bottom: 8px; font-weight: 700; text-align: center;">Get Bike Transport Quote</h2>
          <p style="font-size: 0.85rem; color: #94a3b8; text-align: center; margin-bottom: 20px;">Receive instant bike courier pricing on WhatsApp</p>

          <form action="#" method="POST" onsubmit="sendHeroWhatsAppLead(event, this);">
            <div style="margin-bottom: 14px;">
              <input type="text" name="name" class="form-control" placeholder="Your Full Name" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="margin-bottom: 14px;">
              <input type="tel" name="phone" class="form-control" placeholder="10-Digit Phone Number" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 10px; margin-bottom: 14px;">
              <input type="text" name="move_from" class="form-control" value="Jamshedpur" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
              <input type="text" name="move_to" class="form-control" placeholder="Destination City" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <button type="submit" style="width: 100%; padding: 14px; background: linear-gradient(135deg, #d32f2f 0%, #f59e0b 100%); color: #ffffff; border: none; border-radius: 50px; font-weight: 700; font-size: 1rem; cursor: pointer;">
              Get Instant Estimate Now ➔
            </button>
          </form>
        </div>

      </div>
    </div>
  </section>

  <!-- Specialized Bike Transport Overview Box -->
  <section style="padding: 50px 0; background: linear-gradient(145deg, #0b132b 0%, #172a54 100%); border-bottom: 1px solid rgba(245, 158, 11, 0.3); color: #ffffff;">
    <div class="container" style="max-width: 950px;">
      <h3 style="color: #f59e0b; font-size: 1.4rem; font-weight: 700; margin-bottom: 14px;">Scratch-Proof Bike Shipping &amp; Two-Wheeler Courier Logistics Jamshedpur</h3>
      <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.7; margin-bottom: 14px;">
        Transporting your motorcycle, gear scooter, heavy cruiser, or electric bike from Jamshedpur to any destination in India requires professional multi-layer packaging and secure transit containment. Shree Ashirwad Packers and Movers provides specialized <strong>bike transport guide services in Jamshedpur</strong> using scratch-proof 4-layer wrapping, fuel safety drain protocols, and dedicated enclosed container vehicles.
      </p>
      <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.7; margin-bottom: 14px;">
        Our two-wheeler shipping network covers all residential and industrial neighborhoods across East Singhbhum including Bistupur, Sakchi, Mango, Adityapur, Telco, Sonari, Kadma, Jugsalai, Golmuri, Baridih, and Sundarnagar. We connect Jamshedpur with daily scheduled bike courier container trips to major cities like Kolkata, Ranchi, Patna, Bhubaneswar, Delhi NCR, Mumbai, Pune, Bangalore, Hyderabad, and Chennai.
      </p>
      <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.7; margin-bottom: 14px;">
        Unlike train parcel offices or unorganized local transporters where bikes suffer from scratched petrol tanks, broken indicators, and bent brake levers, our trained crew wraps your motorcycle in high-density air-bubble sheets, corrugated paper sheets on body panels, and a heavy waterproof stretch film sheath.
      </p>
      <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.7; margin-bottom: 14px;">
        Before loading, a detailed joint vehicle condition report is recorded, documenting existing kilometer readings, battery condition, fuel level, and body paint quality. To comply with national highway transport fire safety norms, petrol tanks are safely drained to under 1 liter before loading into covered container trucks.
      </p>
      <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.7; margin-bottom: 14px;">
        Inside our covered container trucks, every bike is secured in an upright position using 4-point heavy-duty nylon ratchet tie-down straps anchored to truck side rails, preventing side tilting or metal-on-metal friction during long-distance highway travel.
      </p>
      <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.7; margin-bottom: 14px;">
        For corporate executives transferring from Tata Motors, Tata Steel, or Uranium Corporation of India (UCIL), our bike transportation bills and Lorry Receipts (LR) are recognized for official IBA-approved company relocation allowance claims.
      </p>
      <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.7; margin-bottom: 14px;">
        We also offer real-time GPS tracking so vehicle owners receive active location updates from the moment of doorstep pickup in Jamshedpur until final delivery at the target destination city.
      </p>
      <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.7; margin: 0;">
        Explore our complete two-wheeler category guide, packaging standards, city-wise route rate matrix, document checklist, and bike transport FAQs below.
      </p>
    </div>
  </section>

  <!-- Section 2: Stats Bar -->
  <section style="padding: 35px 0; background: #070d19; border-bottom: 1px solid rgba(245, 158, 11, 0.2);">
    <div class="container">
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(160px, 1fr)); gap: 15px; text-align: center;">
        <div><h3 style="color: #f59e0b; font-size: 2rem; font-weight: 800;">4-Layer</h3><p style="color: #cbd5e1; font-size: 0.85rem;">Scratch-Proof Packing</p></div>
        <div><h3 style="color: #f59e0b; font-size: 2rem; font-weight: 800;">2,500+</h3><p style="color: #cbd5e1; font-size: 0.85rem;">Bikes Delivered</p></div>
        <div><h3 style="color: #f59e0b; font-size: 2rem; font-weight: 800;">100%</h3><p style="color: #cbd5e1; font-size: 0.85rem;">Enclosed Container Fleet</p></div>
        <div><h3 style="color: #f59e0b; font-size: 2rem; font-weight: 800;">Zero Road</h3><p style="color: #cbd5e1; font-size: 0.85rem;">Kilometer Odometer Mileage</p></div>
        <div><h3 style="color: #f59e0b; font-size: 2rem; font-weight: 800;">Full Risk</h3><p style="color: #cbd5e1; font-size: 0.85rem;">Transit Insurance</p></div>
        <div><h3 style="color: #f59e0b; font-size: 2rem; font-weight: 800;">Door Step</h3><p style="color: #cbd5e1; font-size: 0.85rem;">Pickup &amp; Delivery</p></div>
      </div>
    </div>
  </section>

  <!-- Section 3: 6-Card Category Grid -->
  <section style="padding: 60px 0; background: #ffffff;">
    <div class="container">
      <div style="text-align: center; max-width: 800px; margin: 0 auto 40px auto;">
        <span style="color: #d32f2f; font-weight: 700; text-transform: uppercase; font-size: 0.85rem;">Vehicle Categories</span>
        <h2 style="font-size: 2.1rem; color: #0b132b; font-weight: 800; margin-top: 5px;">
          Two-Wheeler Transport Services in <span style="color: #d32f2f;">Jamshedpur</span>
        </h2>
        <p style="color: #64748b; font-size: 0.98rem; margin-top: 8px;">
          Custom packaging and transport solutions tailored for every class of two-wheeler vehicle.
        </p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 25px; margin-bottom: 40px;">
        <div style="background: #f8fafc; padding: 25px; border-radius: 12px; border-top: 4px solid #d32f2f; box-shadow: 0 4px 15px rgba(0,0,0,0.05);">
          <h3 style="font-size: 1.15rem; color: #0b132b; margin-bottom: 8px; font-weight: 700;">Standard Commuter Motorcycles</h3>
          <p style="color: #64748b; font-size: 0.9rem; line-height: 1.6;">Daily commuter bikes (Hero Splendor, Honda Shine, Bajaj Pulsar) packed in 4-layer bubble wrap and shipped in cost-effective express container slots.</p>
        </div>
        <div style="background: #f8fafc; padding: 25px; border-radius: 12px; border-top: 4px solid #f59e0b; box-shadow: 0 4px 15px rgba(0,0,0,0.05);">
          <h3 style="font-size: 1.15rem; color: #0b132b; margin-bottom: 8px; font-weight: 700;">Automatic Gearless Scooters</h3>
          <p style="color: #64748b; font-size: 0.9rem; line-height: 1.6;">Scooters (Honda Activa, TVS Jupiter, Suzuki Access) with complete body plastic panel padding, under-seat storage protection, and mirror dismounting.</p>
        </div>
        <div style="background: #f8fafc; padding: 25px; border-radius: 12px; border-top: 4px solid #d32f2f; box-shadow: 0 4px 15px rgba(0,0,0,0.05);">
          <h3 style="font-size: 1.15rem; color: #0b132b; margin-bottom: 8px; font-weight: 700;">Heavy Royal Enfield &amp; Cruisers</h3>
          <p style="color: #64748b; font-size: 0.9rem; line-height: 1.6;">Heavy cruisers (Bullet 350, Classic, Meteor, Jawa, Harley Davidson) secured with reinforced double wheel blocks and heavy-duty 4-point strap anchoring.</p>
        </div>
        <div style="background: #f8fafc; padding: 25px; border-radius: 12px; border-top: 4px solid #f59e0b; box-shadow: 0 4px 15px rgba(0,0,0,0.05);">
          <h3 style="font-size: 1.15rem; color: #0b132b; margin-bottom: 8px; font-weight: 700;">Premium Sports &amp; Superbikes</h3>
          <p style="color: #64748b; font-size: 0.9rem; line-height: 1.6;">High-end fairing sports bikes (KTM Duke, Yamaha R15, Kawasaki, BMW Motorrad) protected with micro-fiber base wrap, fairing foam guards, and wooden crating.</p>
        </div>
        <div style="background: #f8fafc; padding: 25px; border-radius: 12px; border-top: 4px solid #d32f2f; box-shadow: 0 4px 15px rgba(0,0,0,0.05);">
          <h3 style="font-size: 1.15rem; color: #0b132b; margin-bottom: 8px; font-weight: 700;">Electric Two-Wheelers (EVs)</h3>
          <p style="color: #64748b; font-size: 0.9rem; line-height: 1.6;">Electric scooters and bikes (Ather, Ola, Chetak) transported under strict battery isolation guidelines with thermal safety wrapping.</p>
        </div>
        <div style="background: #f8fafc; padding: 25px; border-radius: 12px; border-top: 4px solid #f59e0b; box-shadow: 0 4px 15px rgba(0,0,0,0.05);">
          <h3 style="font-size: 1.15rem; color: #0b132b; margin-bottom: 8px; font-weight: 700;">Doorstep Pickup &amp; Delivery</h3>
          <p style="color: #64748b; font-size: 0.9rem; line-height: 1.6;">Doorstep collection from any address in Jamshedpur with direct home delivery at destination city in dedicated covered feeder trucks.</p>
        </div>
      </div>

      <!-- 4-Layer Packaging Protocol -->
      <div style="background: #070d19; padding: 35px; border-radius: 16px; border: 1px solid rgba(245, 158, 11, 0.3); color: #ffffff; margin-bottom: 40px;">
        <h3 style="color: #f59e0b; font-size: 1.5rem; font-weight: 800; text-align: center; margin-bottom: 20px;">
          The 4-Layer Bike Protection Protocol
        </h3>
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); gap: 15px;">
          <div style="background: rgba(255,255,255,0.03); padding: 18px; border-radius: 8px; border-left: 4px solid #f59e0b;"><h4 style="color: #f59e0b; margin-bottom: 4px; font-size: 0.98rem;">Layer 1: Soft Foam &amp; Bubble Wrap</h4><p style="color: #cbd5e1; font-size: 0.85rem; line-height: 1.5; margin: 0;">100 GSM air bubble film wrapped tightly around fuel tank, mudguards, speedometer, and silencer pipe.</p></div>
          <div style="background: rgba(255,255,255,0.03); padding: 18px; border-radius: 8px; border-left: 4px solid #f59e0b;"><h4 style="color: #f59e0b; margin-bottom: 4px; font-size: 0.98rem;">Layer 2: Corrugated Sheet Shielding</h4><p style="color: #cbd5e1; font-size: 0.85rem; line-height: 1.5; margin: 0;">Heavy corrugated cardboard sheets taped over fuel tank, side panels, indicators, and leg guards.</p></div>
          <div style="background: rgba(255,255,255,0.03); padding: 18px; border-radius: 8px; border-left: 4px solid #f59e0b;"><h4 style="color: #f59e0b; margin-bottom: 4px; font-size: 0.98rem;">Layer 3: Waterproof Stretch Wrap</h4><p style="color: #cbd5e1; font-size: 0.85rem; line-height: 1.5; margin: 0;">200-micron polythene shrink film sealed tight around the bike to prevent rain water and highway dust exposure.</p></div>
          <div style="background: rgba(255,255,255,0.03); padding: 18px; border-radius: 8px; border-left: 4px solid #f59e0b;"><h4 style="color: #f59e0b; margin-bottom: 4px; font-size: 0.98rem;">Layer 4: Belt Anchoring &amp; Wheel Chocks</h4><p style="color: #cbd5e1; font-size: 0.85rem; line-height: 1.5; margin: 0;">Heavy nylon ratchet belts and wheel chocks lock both wheels firmly inside the container vehicle bed.</p></div>
        </div>
      </div>
    </div>
  </section>

  <!-- Route Pricing & Document Requirements Table -->
  <section style="padding: 60px 0; background: #0b132b; color: #ffffff;">
    <div class="container" style="max-width: 950px;">
      <div style="text-align: center; margin-bottom: 40px;">
        <span style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Rates &amp; Routes Matrix</span>
        <h2 style="font-size: 2.1rem; font-weight: 800; color: #ffffff; margin-top: 8px;">
          City-Wise Bike Transport Charges from Jamshedpur
        </h2>
        <p style="color: #cbd5e1; font-size: 0.95rem; margin-top: 8px;">
          Transparent two-wheeler shipping rates including 4-layer packaging and doorstep pickup.
        </p>
      </div>

      <!-- Pricing Table -->
      <div style="background: rgba(255,255,255,0.04); border: 1px solid rgba(245,158,11,0.25); border-radius: 12px; padding: 25px; margin-bottom: 35px;">
        <h3 style="color: #f59e0b; font-size: 1.25rem; font-weight: 700; margin-bottom: 16px;">Standard Bike Shipping Rate Table</h3>
        <div style="overflow-x: auto;">
          <table style="width: 100%; border-collapse: collapse; color: #cbd5e1; font-size: 0.9rem;">
            <thead>
              <tr style="background: rgba(245,158,11,0.15); color: #f59e0b; text-align: left;">
                <th style="padding: 12px; border: 1px solid rgba(245,158,11,0.3);">Destination City</th>
                <th style="padding: 12px; border: 1px solid rgba(245,158,11,0.3);">Scooter / 100cc Bike</th>
                <th style="padding: 12px; border: 1px solid rgba(245,158,11,0.3);">150cc - 200cc Bike</th>
                <th style="padding: 12px; border: 1px solid rgba(245,158,11,0.3);">Royal Enfield / Sports</th>
                <th style="padding: 12px; border: 1px solid rgba(245,158,11,0.3);">Transit Time</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td style="padding: 10px; border: 1px solid rgba(255,255,255,0.1);">Jamshedpur to Ranchi / Dhanbad</td>
                <td style="padding: 10px; border: 1px solid rgba(255,255,255,0.1);">₹ 2,200 - ₹ 2,800</td>
                <td style="padding: 10px; border: 1px solid rgba(255,255,255,0.1);">₹ 2,800 - ₹ 3,400</td>
                <td style="padding: 10px; border: 1px solid rgba(255,255,255,0.1);">₹ 3,500 - ₹ 4,200</td>
                <td style="padding: 10px; border: 1px solid rgba(255,255,255,0.1);">24 Hours</td>
              </tr>
              <tr style="background: rgba(255,255,255,0.02);">
                <td style="padding: 10px; border: 1px solid rgba(255,255,255,0.1);">Jamshedpur to Kolkata / Patna</td>
                <td style="padding: 10px; border: 1px solid rgba(255,255,255,0.1);">₹ 2,800 - ₹ 3,500</td>
                <td style="padding: 10px; border: 1px solid rgba(255,255,255,0.1);">₹ 3,500 - ₹ 4,200</td>
                <td style="padding: 10px; border: 1px solid rgba(255,255,255,0.1);">₹ 4,500 - ₹ 5,200</td>
                <td style="padding: 10px; border: 1px solid rgba(255,255,255,0.1);">2 - 3 Days</td>
              </tr>
              <tr>
                <td style="padding: 10px; border: 1px solid rgba(255,255,255,0.1);">Jamshedpur to Delhi NCR / Jaipur</td>
                <td style="padding: 10px; border: 1px solid rgba(255,255,255,0.1);">₹ 4,200 - ₹ 5,000</td>
                <td style="padding: 10px; border: 1px solid rgba(255,255,255,0.1);">₹ 5,000 - ₹ 5,800</td>
                <td style="padding: 10px; border: 1px solid rgba(255,255,255,0.1);">₹ 6,200 - ₹ 7,000</td>
                <td style="padding: 10px; border: 1px solid rgba(255,255,255,0.1);">4 - 5 Days</td>
              </tr>
              <tr style="background: rgba(255,255,255,0.02);">
                <td style="padding: 10px; border: 1px solid rgba(255,255,255,0.1);">Jamshedpur to Bangalore / Pune</td>
                <td style="padding: 10px; border: 1px solid rgba(255,255,255,0.1);">₹ 4,800 - ₹ 5,800</td>
                <td style="padding: 10px; border: 1px solid rgba(255,255,255,0.1);">₹ 5,800 - ₹ 6,800</td>
                <td style="padding: 10px; border: 1px solid rgba(255,255,255,0.1);">₹ 7,200 - ₹ 8,500</td>
                <td style="padding: 10px; border: 1px solid rgba(255,255,255,0.1);">5 - 6 Days</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

      <!-- Document Requirements Grid -->
      <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 25px;">
        <div style="background: rgba(255,255,255,0.04); border: 1px solid rgba(245,158,11,0.2); padding: 22px; border-radius: 10px;">
          <h4 style="color: #f59e0b; font-size: 1.1rem; margin-bottom: 10px;">Mandatory Documents Checklist</h4>
          <p style="color: #cbd5e1; font-size: 0.9rem; line-height: 1.6; margin: 0;">
            1. Copy of Vehicle Registration Certificate (RC Book).<br>
            2. Valid Motor Insurance Policy Copy.<br>
            3. Pollution Under Control (PUC) Certificate.<br>
            4. Government Photo ID Proof (Aadhaar/PAN) of vehicle owner.<br>
            5. Signed Vehicle Condition Inspection Form.
          </p>
        </div>
        <div style="background: rgba(255,255,255,0.04); border: 1px solid rgba(245,158,11,0.2); padding: 22px; border-radius: 10px;">
          <h4 style="color: #f59e0b; font-size: 1.1rem; margin-bottom: 10px;">Pre-Handover Preparation Guidelines</h4>
          <p style="color: #cbd5e1; font-size: 0.9rem; line-height: 1.6; margin: 0;">
            1. Drain petrol tank until fuel meter shows low fuel (< 1 liter).<br>
            2. Remove personal belongings, helmets, and loose keys.<br>
            3. Clean bike so existing scratch marks can be documented accurately.<br>
            4. Keep duplicate key ready for loading crew.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- 4-Step Operational Workflow -->
  <section style="padding: 60px 0; background: #ffffff;">
    <div class="container">
      <div style="text-align: center; max-width: 800px; margin: 0 auto 40px auto;">
        <span style="color: #d32f2f; font-weight: 700; text-transform: uppercase; font-size: 0.85rem;">SOP Workflow</span>
        <h2 style="font-size: 2.1rem; color: #0b132b; font-weight: 800; margin-top: 5px;">
          4-Step Bike Transportation Workflow
        </h2>
      </div>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 20px;">
        <div style="background: #f8fafc; padding: 25px; border-radius: 12px; border-left: 4px solid #d32f2f;">
          <span style="color: #f59e0b; font-weight: 800; font-size: 0.85rem;">STEP 1</span>
          <h3 style="font-size: 1.15rem; color: #0b132b; margin: 8px 0 6px 0; font-weight: 700;">Doorstep Inspection</h3>
          <p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin: 0;">Our executive arrives at your home in Jamshedpur, verifies RC documents, and records body condition on the inspection sheet.</p>
        </div>
        <div style="background: #f8fafc; padding: 25px; border-radius: 12px; border-left: 4px solid #f59e0b;">
          <span style="color: #f59e0b; font-weight: 800; font-size: 0.85rem;">STEP 2</span>
          <h3 style="font-size: 1.15rem; color: #0b132b; margin: 8px 0 6px 0; font-weight: 700;">4-Layer Protective Wrapping</h3>
          <p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin: 0;">The bike is wrapped in bubble film, corrugated cardboard sheets, and waterproof stretch wrap on-site before loading.</p>
        </div>
        <div style="background: #f8fafc; padding: 25px; border-radius: 12px; border-left: 4px solid #d32f2f;">
          <span style="color: #f59e0b; font-weight: 800; font-size: 0.85rem;">STEP 3</span>
          <h3 style="font-size: 1.15rem; color: #0b132b; margin: 8px 0 6px 0; font-weight: 700;">Container Belt Anchoring</h3>
          <p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin: 0;">The bike is loaded into our covered container truck and bound tightly with 4-point nylon ratchet safety belts.</p>
        </div>
        <div style="background: #f8fafc; padding: 25px; border-radius: 12px; border-left: 4px solid #f59e0b;">
          <span style="color: #f59e0b; font-weight: 800; font-size: 0.85rem;">STEP 4</span>
          <h3 style="font-size: 1.15rem; color: #0b132b; margin: 8px 0 6px 0; font-weight: 700;">Destination Delivery &amp; Unwrapping</h3>
          <p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin: 0;">Your bike is safely delivered to your doorstep in the destination city, unwrapped, and handed over after joint inspection.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 4: Contextual Internal Links -->
  <section style="padding: 50px 0; background: #f8fafc;">
    <div class="container">
      <div style="text-align: center; max-width: 800px; margin: 0 auto 30px auto;">
        <h3 style="font-size: 1.8rem; color: #0b132b; font-weight: 800;">Explore Related <span style="color: #d32f2f;">Vehicle Transport Guides</span></h3>
      </div>
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); gap: 15px;">
        <a href="<?php echo SITE_URL; ?>packers-and-movers-in-jamshedpur" title="Movers in Jamshedpur" style="background: #fff; padding: 14px; border-radius: 6px; border: 1px solid #e2e8f0; color: #0b132b; text-decoration: none; font-weight: 600; text-align: center; display: block;"><i class="fas fa-map-marker-alt"></i> Movers in Jamshedpur</a>
        <a href="<?php echo SITE_URL; ?>packers-and-movers-bistupur-jamshedpur" title="Movers in Bistupur" style="background: #fff; padding: 14px; border-radius: 6px; border: 1px solid #e2e8f0; color: #0b132b; text-decoration: none; font-weight: 600; text-align: center; display: block;"><i class="fas fa-map-marker-alt"></i> Movers in Bistupur</a>
        <a href="<?php echo SITE_URL; ?>car-transport-guide-jamshedpur" title="Car Transport Guide" style="background: #fff; padding: 14px; border-radius: 6px; border: 1px solid #e2e8f0; color: #0b132b; text-decoration: none; font-weight: 600; text-align: center; display: block;"><i class="fas fa-car"></i> Car Transport Guide</a>
        <a href="<?php echo SITE_URL; ?>car-carrier-transport-process-jamshedpur" title="Car Carrier Process" style="background: #fff; padding: 14px; border-radius: 6px; border: 1px solid #e2e8f0; color: #0b132b; text-decoration: none; font-weight: 600; text-align: center; display: block;"><i class="fas fa-truck-moving"></i> Car Carrier Process</a>
        <a href="<?php echo SITE_URL; ?>packers-and-movers-jamshedpur-cost-guide" title="💡 Shifting Cost Guide" style="background: #fff; padding: 14px; border-radius: 6px; border: 1px solid #e2e8f0; color: #0b132b; text-decoration: none; font-weight: 600; text-align: center; display: block;">💡 Shifting Cost Guide</a>
        <a href="<?php echo SITE_URL; ?>top-10-shifting-tips-packers-and-movers-in-jamshedpur" title="💡 Top 10 Shifting Tips" style="background: #fff; padding: 14px; border-radius: 6px; border: 1px solid #e2e8f0; color: #0b132b; text-decoration: none; font-weight: 600; text-align: center; display: block;">💡 Top 10 Shifting Tips</a>
        <a href="<?php echo SITE_URL; ?>single-item-luggage-shifting-jamshedpur" title="🧳 Single Item Shifting" style="background: #fff; padding: 14px; border-radius: 6px; border: 1px solid #e2e8f0; color: #0b132b; text-decoration: none; font-weight: 600; text-align: center; display: block;">🧳 Single Item Shifting</a>
        <a href="<?php echo SITE_URL; ?>packers-and-movers-sakchi-jamshedpur" title="Movers in Sakchi" style="background: #fff; padding: 14px; border-radius: 6px; border: 1px solid #e2e8f0; color: #0b132b; text-decoration: none; font-weight: 600; text-align: center; display: block;"><i class="fas fa-map-marker-alt"></i> Movers in Sakchi</a>
      </div>
    </div>
  </section>

  <!-- Expanded 16-Item Bike Transport FAQs -->
  <section style="padding: 50px 0; background: #ffffff;">
    <div class="container">
      <div style="text-align: center; max-width: 800px; margin: 0 auto 35px auto;">
        <h2 style="font-size: 2rem; color: #0b132b; font-weight: 800;">Bike Transport FAQs</h2>
      </div>
      <div style="max-width: 850px; margin: 0 auto; display: flex; flex-direction: column; gap: 12px;">
        <div style="background: #f8fafc; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0;"><h4 style="color: #0b132b; font-weight: 700;">Q1: What documents are required for bike shipping from Jamshedpur?</h4><p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin-top: 6px;">You need photocopies of the vehicle Registration Certificate (RC), valid motor insurance policy, Pollution Under Control (PUC) certificate, and government photo ID of the owner.</p></div>
        <div style="background: #f8fafc; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0;"><h4 style="color: #0b132b; font-weight: 700;">Q2: Will my motorcycle be driven on the highway during transit?</h4><p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin-top: 6px;">No, your motorcycle is loaded 100% off the road inside covered container vehicles after complete 4-layer wrapping. It is never driven on national highways.</p></div>
        <div style="background: #f8fafc; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0;"><h4 style="color: #0b132b; font-weight: 700;">Q3: Why must the petrol tank be drained before bike transport?</h4><p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin-top: 6px;">Draining petrol to under 1 liter prevents fuel leakage, vapor pressure buildup, and fire hazards during long-distance truck transit in compliance with national highway RTO rules.</p></div>
        <div style="background: #f8fafc; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0;"><h4 style="color: #0b132b; font-weight: 700;">Q4: How is a bike wrapped to prevent paint scratches?</h4><p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin-top: 6px;">We use a 4-layer packaging standard comprising inner air-bubble wrap, heavy corrugated paper sheets on body panels, foam edge guards, and outer waterproof stretch film.</p></div>
        <div style="background: #f8fafc; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0;"><h4 style="color: #0b132b; font-weight: 700;">Q5: How is the motorcycle held stable inside the container truck?</h4><p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin-top: 6px;">Both wheels are anchored with heavy rubber chocks, and 4-point nylon ratchet tie-down straps are tension-locked to the truck side rails to eliminate side tilting.</p></div>
        <div style="background: #f8fafc; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0;"><h4 style="color: #0b132b; font-weight: 700;">Q6: Is transit insurance available for bike shipping from Jamshedpur?</h4><p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin-top: 6px;">Yes, we offer comprehensive all-risk transit insurance policy covering full vehicle IDV value against accidents, fire, theft, or natural calamities.</p></div>
        <div style="background: #f8fafc; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0;"><h4 style="color: #0b132b; font-weight: 700;">Q7: How long does bike delivery take from Jamshedpur to metro cities?</h4><p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin-top: 6px;">Delivery takes 24 hours to Ranchi/Dhanbad, 2-3 days to Kolkata/Patna, 4-5 days to Delhi NCR, and 5-6 days to Bangalore, Mumbai, or Pune.</p></div>
        <div style="background: #f8fafc; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0;"><h4 style="color: #0b132b; font-weight: 700;">Q8: Do you provide doorstep pickup and delivery in Jamshedpur?</h4><p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin-top: 6px;">Yes, we collect your motorcycle directly from your doorstep anywhere in Bistupur, Sakchi, Mango, Adityapur, Telco, Sonari, or Kadma and deliver directly to your destination home.</p></div>
        <div style="background: #f8fafc; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0;"><h4 style="color: #0b132b; font-weight: 700;">Q9: Are rear view mirrors dismantled during packaging?</h4><p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin-top: 6px;">Yes, rear view mirrors are safely unscrewed, wrapped in bubble sheet, and securely attached under the seat or placed inside a separate bubble pouch.</p></div>
        <div style="background: #f8fafc; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0;"><h4 style="color: #0b132b; font-weight: 700;">Q10: Can I ship a helmet or extra riding gear with the bike?</h4><p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin-top: 6px;">Helmets or small riding jackets may be packed inside a small cardboard box and secured with the bike parcel after inspection by our crew.</p></div>
        <div style="background: #f8fafc; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0;"><h4 style="color: #0b132b; font-weight: 700;">Q11: How do you transport heavy Royal Enfield Bullet bikes?</h4><p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin-top: 6px;">Royal Enfield Bullet and heavy cruiser bikes receive extra corrugated padding on crash guards, leg shields, and silencer pipes, supported by reinforced double wheel locks.</p></div>
        <div style="background: #f8fafc; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0;"><h4 style="color: #0b132b; font-weight: 700;">Q12: How is an Electric Scooter (EV) safely shipped?</h4><p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin-top: 6px;">EV scooters (Ather, Ola) undergo main battery key isolation checks, thermal wrapping around battery bays, and gentle nylon strap binding.</p></div>
        <div style="background: #f8fafc; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0;"><h4 style="color: #0b132b; font-weight: 700;">Q13: Can I track my bike parcel during intercity transit?</h4><p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin-top: 6px;">Yes, all our long-distance container trucks are fitted with satellite GPS. We provide daily live location updates via WhatsApp and phone SMS.</p></div>
        <div style="background: #f8fafc; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0;"><h4 style="color: #0b132b; font-weight: 700;">Q14: What is the vehicle condition report signed during handover?</h4><p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin-top: 6px;">It is an official joint document signed by you and our representative listing existing odometer reading, battery condition, fuel level, and body paint marks.</p></div>
        <div style="background: #f8fafc; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0;"><h4 style="color: #0b132b; font-weight: 700;">Q15: Are toll taxes and state border permits included in the bike transport quote?</h4><p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin-top: 6px;">Yes, all national highway FASTag tolls, state border transit taxes, and consignment Lorry Receipts (LR) are 100% included in our upfront quotation.</p></div>
        <div style="background: #f8fafc; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0;"><h4 style="color: #0b132b; font-weight: 700;">Q16: How do I book bike transport service with Shree Ashirwad Packers in Jamshedpur?</h4><p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin-top: 6px;">Call <strong>+91 8409531615</strong> or message us on WhatsApp to schedule doorstep pickup and receive an instant transparent bike transport quote.</p></div>
        <div style="background: #f8fafc; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0;"><h4 style="color: #0b132b; font-weight: 700;">Q17: Is wooden crating necessary for sports bikes like Yamaha R15 or KTM Duke?</h4><p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin-top: 6px;">While 4-layer bubble and corrugated cardboard wrapping is standard, we highly recommend custom wooden box crating for expensive sports fairing bikes to avoid plastic shell fracture.</p></div>
        <div style="background: #f8fafc; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0;"><h4 style="color: #0b132b; font-weight: 700;">Q18: What precautions are taken for monsoon bike shipping from Jamshedpur?</h4><p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin-top: 6px;">During rainy months, an extra 200-micron waterproof polyethylene shrink sheath is applied over all 4 layers, and bikes are loaded exclusively in closed container trucks.</p></div>
        <div style="background: #f8fafc; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0;"><h4 style="color: #0b132b; font-weight: 700;">Q19: What happens if my bike key gets misplaced during transit?</h4><p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin-top: 6px;">Keys are tagged with a unique barcode bill number and locked inside a sealed envelope stored securely with the vehicle supervisor throughout transit.</p></div>
        <div style="background: #f8fafc; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0;"><h4 style="color: #0b132b; font-weight: 700;">Q20: Can I get an IBA approved bill for bike transport reimbursement?</h4><p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin-top: 6px;">Yes, we issue IBA-compliant Lorry Receipts (LR), GST tax invoices, and vehicle condition certificates suitable for corporate and government claim reimbursements.</p></div>
        <div style="background: #f8fafc; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0;"><h4 style="color: #0b132b; font-weight: 700;">Q21: How are vintage or classic motorcycles transported?</h4><p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin-top: 6px;">Vintage motorcycles are enclosed in customized padded wooden crates with velvet lining on chrome parts and extra hydraulic shock cushions.</p></div>
        <div style="background: #f8fafc; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0;"><h4 style="color: #0b132b; font-weight: 700;">Q22: Is there any hidden charge in doorstep bike pickup in Jamshedpur?</h4><p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin-top: 6px;">No, doorstep pickup across Bistupur, Sakchi, Mango, Adityapur, Telco, Sonari, and Kadma is fully included in our written quotation with zero hidden costs.</p></div>
      </div>
    </div>
  </section>

  <!-- Section 6: CTA Banner -->
  <section class="cta-banner-section" style="padding: 50px 0; background: linear-gradient(135deg, #0b132b 0%, #1c2541 100%); color: #ffffff;">
    <div class="container">
      <div style="text-align: center; max-width: 800px; margin: 0 auto;">
        <h2 style="font-size: 2.1rem; font-weight: 800; margin-bottom: 15px;">Ship Your Bike Safely From Jamshedpur Today</h2>
        <p style="color: #cbd5e1; font-size: 0.98rem; margin-bottom: 25px;">Scratch-proof 4-layer packaging, enclosed container courier, and live GPS tracking.</p>
        <div style="display: flex; gap: 15px; justify-content: center; flex-wrap: wrap;">
          <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call:" style="padding: 14px 32px; background: linear-gradient(135deg, #d32f2f 0%, #f59e0b 100%); color: #fff; border-radius: 50px; font-weight: 700; text-decoration: none;"><i class="fas fa-phone-alt"></i> Call: <?php echo SITE_PHONE; ?></a>
          <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20need%20bike%20transport%20quote%20from%20Jamshedpur." title="WhatsApp Quote" target="_blank" style="padding: 14px 32px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #fff; border-radius: 50px; font-weight: 700; text-decoration: none;"><i class="fab fa-whatsapp"></i> WhatsApp Quote</a>
        </div>
      </div>
    </div>
  </section>

</main>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
