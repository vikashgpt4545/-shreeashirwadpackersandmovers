<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "Bike Transport from Bangalore to Kurnool via Train | Call 8409531615";
$page_desc = "Looking for railway bike parcel and doorstep bike transport from Bangalore to Kurnool via Indian Railways? Learn procedures, freight charges, train packing, and hassle-free pickup-drop options with Shree Ashirwad Packers and Movers.";
$page_keywords = "bike transport from bangalore to kurnool in train, railway bike transport bangalore to kurnool, bike parcel in train from bangalore to kurnool, railway parcel charges bike bangalore to kurnool, packers and movers, shree ashirwad bike transport";
$canonical_url = "https://shreeashirwadpackersandmovers.com/pages/bike-transport-from-bangalore-to-kurnool-in-train.php";

$faq_list = [
    ['q' => 'How to send a bike by train from Bangalore to Kurnool?', 'a' => 'You can book your bike either as luggage (if traveling on the same train) or as parcel cargo at Majestic (SBC) or Yesvantpur (YPR) railway parcel offices with proper 5-layer packing.'],
    ['q' => 'What is the railway parcel cost for bike transport from Bangalore to Kurnool?', 'a' => 'Railway parcel charges for bike transport from Bangalore to Kurnool range between ₹2,200 and ₹4,000 including railway packing, handling, and parcel booking charges.'],
    ['q' => 'Do you provide doorstep pickup and railway station booking service?', 'a' => 'Yes, Shree Ashirwad Packers collects your bike from your doorstep in Bangalore, drains petrol, packs it professionally, handles railway parcel documentation, and arranges delivery in Kurnool.'],
    ['q' => 'What documents are required for railway bike parcel from Bangalore to Kurnool?', 'a' => 'You need original RC book with a photocopy, valid bike insurance policy, government ID proof (Aadhaar/PAN), and train ticket (if booking as luggage).'],
    ['q' => 'Is petrol draining mandatory before loading bike on train?', 'a' => 'Yes, Indian Railways strictly requires complete petrol tank emptying before accepting any two-wheeler for parcel or luggage carriage.']
];

require_once __DIR__ . '/../includes/header.php';
?>

<main class="site-main">

  <!-- 1. Visual Breadcrumb Navigation Bar -->
  <div class="breadcrumb-wrapper">
    <div class="container">
      <div class="breadcrumb-list">
        <span class="breadcrumb-item"><a href="<?php echo SITE_URL; ?>" title="Home">Home</a></span>
        <span class="breadcrumb-separator">/</span>
        <span class="breadcrumb-item active"><?php echo htmlspecialchars($page_title); ?></span>
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
            RAILWAY BIKE PARCEL SPECIALISTS
          </span>
          <h1 style="font-size: 2.5rem; font-weight: 800; line-height: 1.2; margin-bottom: 20px; color: #ffffff;">
            Bike Transport from <span style="color: #f59e0b;">Bangalore to Kurnool via Train</span>
          </h1>
          <p style="font-size: 1.1rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 25px;">
            Looking for railway bike parcel services from Bangalore to Kurnool? We manage end-to-end railway parcel paperwork, heavy Gunny bag packing, station loading, and doorstep delivery.
          </p>

          <div style="display: flex; gap: 15px; flex-wrap: wrap; margin-bottom: 30px;">
            <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Railway Transport Desk" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
              <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call Desk: <?php echo SITE_PHONE; ?>
            </a>
            <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20information%20for%20bike%20transport%20from%20Bangalore%20to%20Kurnool%20via%20train." title="Chat on WhatsApp" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
              <i class="fab fa-whatsapp" style="margin-right: 8px;"></i> Chat on WhatsApp
            </a>
          </div>

          <div style="display: flex; gap: 20px; font-size: 0.9rem; color: #94a3b8;">
            <span><strong style="color: #f59e0b;">Railway Parcel</strong> Handling</span>
            <span><strong style="color: #f59e0b;">1-2 Days</strong> Transit</span>
            <span><strong style="color: #f59e0b;">Doorstep</strong> Pick &amp; Drop</span>
          </div>
        </div>

        <!-- Hero Lead Form Column -->
        <div class="hero-form-card" style="background: rgba(255, 255, 255, 0.05); backdrop-filter: blur(10px); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 16px; padding: 30px; box-shadow: 0 15px 35px rgba(0,0,0,0.4);">
          <h2 style="font-size: 1.4rem; color: #ffffff; margin-bottom: 8px; font-weight: 700; text-align: center;">Get Railway Bike Parcel Quote</h2>
          <p style="font-size: 0.85rem; color: #94a3b8; text-align: center; margin-bottom: 20px;">Receive exact train parcel charges on WhatsApp</p>

          <form action="#" method="POST" onsubmit="sendHeroWhatsAppLead(event, this);">
            <div style="margin-bottom: 14px;">
              <input type="text" name="name" class="form-control" placeholder="Your Full Name" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="margin-bottom: 14px;">
              <input type="tel" name="phone" class="form-control" placeholder="10-Digit Phone Number" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 10px; margin-bottom: 14px;">
              <input type="text" name="move_from" class="form-control" value="Bangalore" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
              <input type="text" name="move_to" class="form-control" value="Kurnool (Train)" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <button type="submit" style="width: 100%; padding: 14px; background: linear-gradient(135deg, #d32f2f 0%, #f59e0b 100%); color: #ffffff; border: none; border-radius: 50px; font-weight: 700; font-size: 1rem; cursor: pointer;">
              Get Train Parcel Rates &rarr;
            </button>
          </form>
        </div>

      </div>
    </div>
  </section>

  <!-- 3. Key Stats Highlight Bar -->
  <section style="background: #070d1e; padding: 30px 0; border-bottom: 1px solid rgba(255,255,255,0.08);">
    <div class="container">
      <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 20px; text-align: center;">
        <div style="background: rgba(255,255,255,0.03); padding: 20px; border-radius: 12px; border: 1px solid rgba(245,158,11,0.2);">
          <h3 style="color: #f59e0b; font-size: 1.8rem; font-weight: 800; margin: 0;">360+ km</h3>
          <p style="color: #94a3b8; font-size: 0.85rem; margin-top: 5px;">Bangalore - Kurnool Rail Route</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); padding: 20px; border-radius: 12px; border: 1px solid rgba(245,158,11,0.2);">
          <h3 style="color: #f59e0b; font-size: 1.8rem; font-weight: 800; margin: 0;">1 - 2 Days</h3>
          <p style="color: #94a3b8; font-size: 0.85rem; margin-top: 5px;">Fastest Rail Shipping</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); padding: 20px; border-radius: 12px; border: 1px solid rgba(245,158,11,0.2);">
          <h3 style="color: #f59e0b; font-size: 1.8rem; font-weight: 800; margin: 0;">SBC / YPR</h3>
          <p style="color: #94a3b8; font-size: 0.85rem; margin-top: 5px;">Station Parcel Booking</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); padding: 20px; border-radius: 12px; border: 1px solid rgba(245,158,11,0.2);">
          <h3 style="color: #f59e0b; font-size: 1.8rem; font-weight: 800; margin: 0;">4.9 / 5.0</h3>
          <p style="color: #94a3b8; font-size: 0.85rem; margin-top: 5px;">Customer Rating</p>
        </div>
      </div>
    </div>
  </section>

  <!-- 4. Value-Proposition 6-Card Grid -->
  <section style="padding: 70px 0; background: #0b132b; color: #ffffff;">
    <div class="container">
      <div style="text-align: center; margin-bottom: 45px;">
        <span style="color: #f59e0b; font-weight: 700; text-transform: uppercase; font-size: 0.85rem; letter-spacing: 1px;">Railway Shipping Highlights</span>
        <h2 style="font-size: 2.2rem; font-weight: 800; margin-top: 8px;">Why Choose Train Transport for <span style="color: #f59e0b;">Bangalore to Kurnool</span></h2>
      </div>
      <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 25px;">
        <div style="background: #172a54; padding: 25px; border-radius: 12px; border: 1px solid rgba(245,158,11,0.25);">
          <h3 style="color: #f59e0b; font-size: 1.2rem; font-weight: 700; margin-bottom: 10px;"><i class="fas fa-train" style="margin-right: 8px;"></i> Rapid Rail Transit</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.6;">Express train parcel service ensures quick delivery between Bangalore stations and Kurnool Town (KRNT).</p>
        </div>
        <div style="background: #172a54; padding: 25px; border-radius: 12px; border: 1px solid rgba(245,158,11,0.25);">
          <h3 style="color: #f59e0b; font-size: 1.2rem; font-weight: 700; margin-bottom: 10px;"><i class="fas fa-box-open" style="margin-right: 8px;"></i> Heavy Gunny Bag Packing</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.6;">Mandatory railway-grade gunny bag padding protects body panels from train cargo handling.</p>
        </div>
        <div style="background: #172a54; padding: 25px; border-radius: 12px; border: 1px solid rgba(245,158,11,0.25);">
          <h3 style="color: #f59e0b; font-size: 1.2rem; font-weight: 700; margin-bottom: 10px;"><i class="fas fa-file-alt" style="margin-right: 8px;"></i> Complete Station Paperwork</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.6;">We manage parcel booking, gate pass clearance, and railway receipt creation hassle-free.</p>
        </div>
        <div style="background: #172a54; padding: 25px; border-radius: 12px; border: 1px solid rgba(245,158,11,0.25);">
          <h3 style="color: #f59e0b; font-size: 1.2rem; font-weight: 700; margin-bottom: 10px;"><i class="fas fa-home" style="margin-right: 8px;"></i> Door-to-Station Pickup</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.7;">Home pickup from Bangalore, transporting to station, and optional station drop in Kurnool.</p>
        </div>
        <div style="background: #172a54; padding: 25px; border-radius: 12px; border: 1px solid rgba(245,158,11,0.25);">
          <h3 style="color: #f59e0b; font-size: 1.2rem; font-weight: 700; margin-bottom: 10px;"><i class="fas fa-gas-pump" style="margin-right: 8px;"></i> Petrol Draining &amp; Prep</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.6;">Our team drains petrol as mandated by Indian Railways safety guidelines prior to booking.</p>
        </div>
        <div style="background: #172a54; padding: 25px; border-radius: 12px; border: 1px solid rgba(245,158,11,0.25);">
          <h3 style="color: #f59e0b; font-size: 1.2rem; font-weight: 700; margin-bottom: 10px;"><i class="fas fa-rupee-sign" style="margin-right: 8px;"></i> Budget Friendly</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.6;">Railway freight rates offer the most economical option for light and commuter bikes.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- 5. Shifting Cost Table -->
  <section style="padding: 60px 0; background: #070d1e; color: #ffffff;">
    <div class="container" style="max-width: 900px;">
      <div style="text-align: center; margin-bottom: 35px;">
        <span style="color: #f59e0b; font-weight: 700; text-transform: uppercase; font-size: 0.85rem;">Estimated Rates</span>
        <h2 style="font-size: 2rem; font-weight: 800; margin-top: 8px;">Bangalore to Kurnool Railway Bike Parcel Rates</h2>
      </div>
      <div style="overflow-x: auto; background: #172a54; border-radius: 12px; padding: 5px; border: 1px solid rgba(245,158,11,0.3);">
        <table style="width: 100%; border-collapse: collapse; text-align: left; color: #cbd5e1;">
          <thead>
            <tr style="background: rgba(245, 158, 11, 0.15); color: #f59e0b; border-bottom: 1px solid rgba(245,158,11,0.3);">
              <th style="padding: 14px 18px;">Two-Wheeler Category</th>
              <th style="padding: 14px 18px;">Rail Distance</th>
              <th style="padding: 14px 18px;">Railway + Packing Rate</th>
              <th style="padding: 14px 18px;">Transit Time</th>
            </tr>
          </thead>
          <tbody>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.08);">
              <td style="padding: 14px 18px; font-weight: 600; color: #fff;">Scooters (Activa, Jupiter, Access)</td>
              <td style="padding: 14px 18px;">~360 km</td>
              <td style="padding: 14px 18px; color: #f59e0b; font-weight: 700;">₹2,200 - ₹3,000</td>
              <td style="padding: 14px 18px;">1 - 2 Days</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.08);">
              <td style="padding: 14px 18px; font-weight: 600; color: #fff;">Standard Bikes (100cc - 150cc)</td>
              <td style="padding: 14px 18px;">~360 km</td>
              <td style="padding: 14px 18px; color: #f59e0b; font-weight: 700;">₹2,600 - ₹3,400</td>
              <td style="padding: 14px 18px;">1 - 2 Days</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.08);">
              <td style="padding: 14px 18px; font-weight: 600; color: #fff;">Royal Enfield &amp; Heavy Bikes</td>
              <td style="padding: 14px 18px;">~360 km</td>
              <td style="padding: 14px 18px; color: #f59e0b; font-weight: 700;">₹3,200 - ₹4,200</td>
              <td style="padding: 14px 18px;">1 - 2 Days</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </section>

  <!-- 6. 7-Layer Packaging Protocol -->
  <section style="padding: 70px 0; background: #0b132b; color: #ffffff;">
    <div class="container" style="max-width: 950px;">
      <div style="text-align: center; margin-bottom: 40px;">
        <span style="color: #f59e0b; font-weight: 700; text-transform: uppercase; font-size: 0.85rem;">Railway Packing Standard</span>
        <h2 style="font-size: 2.2rem; font-weight: 800; margin-top: 8px;">Railway Parcel Protection Steps</h2>
      </div>
      <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 20px;">
        <div style="background: #172a54; padding: 20px; border-radius: 10px; border: 1px solid rgba(245,158,11,0.2);">
          <h4 style="color: #f59e0b; margin-bottom: 8px;"><i class="fas fa-layer-group" style="margin-right: 6px;"></i> Step 1: Bubble Wrap Padding</h4>
          <p style="color: #cbd5e1; font-size: 0.9rem; margin: 0;">Initial bubble wrap layer around speedometer, fuel tank, and lights.</p>
        </div>
        <div style="background: #172a54; padding: 20px; border-radius: 10px; border: 1px solid rgba(245,158,11,0.2);">
          <h4 style="color: #f59e0b; margin-bottom: 8px;"><i class="fas fa-box" style="margin-right: 6px;"></i> Step 2: Corrugated Sheet Wrapping</h4>
          <p style="color: #cbd5e1; font-size: 0.9rem; margin: 0;">Cardboard sheet wrapping over side covers and silencer.</p>
        </div>
        <div style="background: #172a54; padding: 20px; border-radius: 10px; border: 1px solid rgba(245,158,11,0.2);">
          <h4 style="color: #f59e0b; margin-bottom: 8px;"><i class="fas fa-tshirt" style="margin-right: 6px;"></i> Step 3: Heavy Gunny Cloth Stitching</h4>
          <p style="color: #cbd5e1; font-size: 0.9rem; margin: 0;">Outer jute gunny bag stitched tightly as per Indian Railways parcel requirements.</p>
        </div>
        <div style="background: #172a54; padding: 20px; border-radius: 10px; border: 1px solid rgba(245,158,11,0.2);">
          <h4 style="color: #f59e0b; margin-bottom: 8px;"><i class="fas fa-pen-nib" style="margin-right: 6px;"></i> Step 4: Railway Marking &amp; Labeling</h4>
          <p style="color: #cbd5e1; font-size: 0.9rem; margin: 0;">White paint marking of PNR/Railway booking numbers on jute packaging.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- 7. Route Coverage -->
  <section style="padding: 60px 0; background: #070d1e; color: #ffffff;">
    <div class="container" style="max-width: 900px; text-align: center;">
      <span style="color: #f59e0b; font-weight: 700; text-transform: uppercase; font-size: 0.85rem;">Railway Hub Coverage</span>
      <h2 style="font-size: 2rem; font-weight: 800; margin-top: 8px; margin-bottom: 25px;">Bangalore Stations to Kurnool Town</h2>
      <p style="color: #cbd5e1; font-size: 1rem; line-height: 1.8;">
        Pickup from anywhere in Bangalore (Whitefield, Koramangala, Indiranagar, Electronic City, Hebbal) for booking at Majestic (SBC), Yesvantpur (YPR), or Cantonment (BNC) railway parcel counters to Kurnool Town (KRNT).
      </p>
    </div>
  </section>

  <!-- 8. IBA & Compliance -->
  <section style="padding: 60px 0; background: #0b132b; color: #ffffff; text-align: center;">
    <div class="container" style="max-width: 800px;">
      <h2 style="font-size: 1.8rem; font-weight: 800; color: #f59e0b; margin-bottom: 15px;">Railway Receipt &amp; GST Invoices</h2>
      <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.7;">
        We provide original Indian Railways parcel receipts (RR Copy) along with official company GST invoices for easy claiming and tracking.
      </p>
    </div>
  </section>

  <!-- 9. FAQ Section with Schema -->
  <section style="padding: 70px 0; background: #070d1e; color: #ffffff;">
    <div class="container" style="max-width: 900px;">
      <div class="text-center" style="margin-bottom: 45px;">
        <span style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem;">Questions &amp; Answers</span>
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin-top: 10px;">
          Frequently Asked Questions About <span style="color: #f59e0b;">Bangalore to Kurnool Bike Transport in Train</span>
        </h2>
      </div>

      <div style="display: flex; flex-direction: column; gap: 16px;">
        <?php foreach ($faq_list as $faq): ?>
          <div style="background: #172a54; padding: 20px 24px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
            <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;"><?php echo htmlspecialchars($faq['q']); ?></h3>
            <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.7;"><?php echo htmlspecialchars($faq['a']); ?></p>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "mainEntity": [
      <?php 
      $schema_faqs = [];
      foreach ($faq_list as $faq) {
        $schema_faqs[] = '{
          "@type": "Question",
          "name": ' . json_encode($faq['q']) . ',
          "acceptedAnswer": {
            "@type": "Answer",
            "text": ' . json_encode($faq['a']) . '
          }
        }';
      }
      echo implode(',', $schema_faqs);
      ?>
    ]
  }
  </script>

  <!-- 10. Call to Action Footer -->
  <section style="padding: 60px 0; background: linear-gradient(135deg, #172a54 0%, #0b132b 100%); border-top: 1.5px solid rgba(245, 158, 11, 0.4); color: #ffffff;">
    <div class="container" style="max-width: 900px; text-align: center;">
      <h2 style="font-size: 2.2rem; font-weight: 800; margin-bottom: 15px;">
        Book Railway Bike Parcel from Bangalore to Kurnool
      </h2>
      <p style="font-size: 1.05rem; color: #cbd5e1; max-width: 750px; margin: 0 auto 30px auto; line-height: 1.7;">
        Hassle-free railway parcel documentation, station handling, and doorstep pickup services.
      </p>

      <div style="display: flex; gap: 15px; justify-content: center; flex-wrap: wrap;">
        <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Now" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 30px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1.05rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
          <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call Desk: <?php echo SITE_PHONE; ?>
        </a>
        <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20information%20for%20bike%20transport%20from%20Bangalore%20to%20Kurnool%20via%20train." title="Chat on WhatsApp" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 30px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1.05rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
          <i class="fab fa-whatsapp" style="margin-right: 8px;"></i> Chat on WhatsApp
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
  
  var message = "Hello Shree Ashirwad Packers & Movers,\n\nI would like to request a Bike Transport (Train) Quote:\n- Name: " + name + "\n- Phone: " + phone + "\n- Pickup City: " + moveFrom + "\n- Destination City: " + moveTo;
  
  var whatsappUrl = "https://api.whatsapp.com/send?phone=918409531615&text=" + encodeURIComponent(message);
  window.location.href = whatsappUrl;
}
</script>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>

