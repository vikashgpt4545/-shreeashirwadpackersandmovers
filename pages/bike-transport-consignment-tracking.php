<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "Bike Transport Consignment Tracking | Live GPS & WhatsApp Updates";
$page_desc = "Track your bike transport consignment online with real-time GPS telemetry, Lorry Receipt (LR) lookup & automated WhatsApp status alerts by Shree Ashirwad Packers and Movers. 100% transparent two-wheeler shipping across India. Call 8409531615.";
$page_keywords = "bike transport consignment tracking, track bike parcel online, LR consignment tracking, bike shipment tracking, lorry receipt tracking online, bike status tracking";
$canonical_url = "https://shreeashirwadpackersandmovers.com/pages/bike-transport-consignment-tracking.php";

$faq_list = [
    ['q' => 'How can I track my bike transport consignment online?', 'a' => 'You can track your bike consignment by entering your 10-digit Lorry Receipt (LR) number on our website tracking portal or by sending your LR number directly to our automated WhatsApp tracking desk at +91 8409531615.'],
    ['q' => 'Is real-time GPS tracking available for bike container trucks?', 'a' => 'Yes! All Shree Ashirwad Packers covered two-wheeler container trucks and multi-bike car carriers are fitted with live GPS tracking systems. You receive live location pin updates throughout transit across national highways.'],
    ['q' => 'What details are mentioned in a Bike Transport Lorry Receipt (LR Copy)?', 'a' => 'A bike LR document contains your unique LR Consignment Number, vehicle engine/chassis numbers, bike model (e.g. Royal Enfield, KTM, Activa), pickup & destination addresses, driver contact number, and insurance policy details.'],
    ['q' => 'How frequently are consignment status updates shared during interstate transit?', 'a' => 'Milestone updates are sent automatically at major checkpoints (Pickup confirmation, Highway dispatch, Toll plaza crossings, Intermediate yard arrival, and Final doorstep delivery ETA).'],
    ['q' => 'What should I do if my consignment status shows no movement for a few hours?', 'a' => 'Highway halts occur during mandatory driver rest cycles, vehicle refueling, or regional check-post inspections. Our 24/7 tracking helpline (+91 8409531615) is always available to verify live truck telemetry.'],
    ['q' => 'Can I track bike shipping booked via Indian Railways parcel service?', 'a' => 'For Railway bike parcel bookings, tracking relies on the Indian Railways Parcel Management System (PMS) Railway Receipt (RR) number. Shree Ashirwad Packers provides dedicated container truck tracking with real-time GPS precision superior to railway parcel updates.'],
    ['q' => 'How do I know when my bike is ready for final doorstep delivery?', 'a' => 'Our local destination supervisor contacts you 4 to 6 hours prior to final arrival to confirm your availability at your home address for doorstep unloading.'],
    ['q' => 'Is consignment tracking available for two-wheeler transport to North-East & South India?', 'a' => 'Yes, our GPS tracking coverage extends to all 28 Indian states and Union Territories including high-altitude & North-Eastern highway corridors.'],
    ['q' => 'Are there any extra fees for accessing live GPS consignment tracking?', 'a' => 'No. Real-time GPS tracking, WhatsApp status updates, and LR lookup services are 100% complimentary with every bike transport booking.'],
    ['q' => 'How do I initiate a new bike transport booking with live tracking support?', 'a' => 'Call +91 8409531615 or submit your pickup details via WhatsApp for an instant transparent rate quote and scheduled doorstep vehicle collection.']
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
        <span class="breadcrumb-item active">Bike Transport Consignment Tracking</span>
      </div>
    </div>
  </div>

  <!-- 2. Hero Section & Instant WhatsApp Lead Form -->
  <section class="hero-section" style="background: linear-gradient(135deg, #0b132b 0%, #1c2541 100%); padding: 60px 0; color: #ffffff;">
    <div class="container">
      <div class="hero-grid" style="display: grid; grid-template-columns: 1.2fr 0.8fr; gap: 40px; align-items: center;">
        
        <!-- Hero Text Column -->
        <div class="hero-text">
          <span class="section-tag" style="background: rgba(245, 158, 11, 0.15); color: #f59e0b; border: 1px solid rgba(245, 158, 11, 0.4); padding: 6px 16px; border-radius: 20px; font-size: 0.85rem; font-weight: 700; text-transform: uppercase; display: inline-block; margin-bottom: 15px;">
            REAL-TIME GPS &amp; LR CONSIGNMENT TRACKING HUB
          </span>
          <h1 style="font-size: 2.6rem; font-weight: 800; line-height: 1.2; margin-bottom: 20px; color: #ffffff;">
            Live <span style="color: #f59e0b;">Bike Transport Consignment Tracking</span>
          </h1>
          <p style="font-size: 1.05rem; color: #cbd5e1; line-height: 1.7; margin-bottom: 25px;">
            Track your motorcycle or scooter with 100% precision. Shree Ashirwad Packers and Movers provides real-time GPS telemetry, Lorry Receipt (LR) lookup, automated WhatsApp milestone alerts, and 24/7 helpline support for two-wheeler shipping across India.
          </p>

          <div style="display: flex; gap: 15px; flex-wrap: wrap; margin-bottom: 30px;">
            <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Now" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
              <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call Now: <?php echo SITE_PHONE; ?>
            </a>
            <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20to%20track%20my%20bike%20consignment." title="Chat on WhatsApp" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
              <i class="fab fa-whatsapp" style="margin-right: 8px;"></i> Track via WhatsApp
            </a>
          </div>

          <div style="display: flex; gap: 20px; font-size: 0.9rem; color: #94a3b8;">
            <span><strong style="color: #f59e0b;">Live GPS</strong> Fleet Tracking</span>
            <span><strong style="color: #f59e0b;">Instant LR</strong> Number Lookup</span>
            <span><strong style="color: #f59e0b;">24/7</strong> WhatsApp Alerts</span>
          </div>
        </div>

        <!-- Hero Tracking Lookup Form Column -->
        <div class="hero-form-card" style="background: rgba(255, 255, 255, 0.05); backdrop-filter: blur(10px); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 16px; padding: 30px; box-shadow: 0 15px 35px rgba(0,0,0,0.4);">
          <h2 style="font-size: 1.4rem; color: #ffffff; margin-bottom: 8px; font-weight: 700; text-align: center;">Instant LR Consignment Status</h2>
          <p style="font-size: 0.85rem; color: #94a3b8; text-align: center; margin-bottom: 20px;">Enter your Lorry Receipt (LR) number or request status on WhatsApp</p>

          <form action="#" method="POST" onsubmit="sendHeroWhatsAppLead(event, this);">
            <div style="margin-bottom: 14px;">
              <input type="text" name="lr_number" class="form-control" placeholder="LR Consignment Number (e.g. SAPM-8492)" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="margin-bottom: 14px;">
              <input type="text" name="name" class="form-control" placeholder="Sender / Receiver Name" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="margin-bottom: 14px;">
              <input type="tel" name="phone" class="form-control" placeholder="10-Digit WhatsApp Mobile" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="margin-bottom: 16px;">
              <input type="text" name="message" class="form-control" placeholder="Bike Registration / Chassis No." style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <button type="submit" class="btn btn-primary" style="width: 100%; padding: 14px; font-weight: 700; font-size: 1rem; border-radius: 8px;">
              Track Status on WhatsApp
            </button>
          </form>
        </div>

      </div>
    </div>
  </section>

  <!-- 3. Key Stats Counter Bar -->
  <section class="stats-section" style="padding: 45px 0; background: #070d1e; border-bottom: 1px solid rgba(245, 158, 11, 0.2);">
    <div class="container">
      <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 20px; text-align: center;">
        <div style="padding: 20px; background: rgba(23, 42, 84, 0.5); border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">GPS Enabled</div>
          <div style="font-size: 0.9rem; color: #cbd5e1; margin-top: 5px;">Covered Bike Container Fleets</div>
        </div>
        <div style="padding: 20px; background: rgba(23, 42, 84, 0.5); border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">100% Free</div>
          <div style="font-size: 0.9rem; color: #cbd5e1; margin-top: 5px;">24/7 WhatsApp Tracking Updates</div>
        </div>
        <div style="padding: 20px; background: rgba(23, 42, 84, 0.5); border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">LR Copy</div>
          <div style="font-size: 0.9rem; color: #cbd5e1; margin-top: 5px;">Digital Consignment Receipt</div>
        </div>
        <div style="padding: 20px; background: rgba(23, 42, 84, 0.5); border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">ETA Alert</div>
          <div style="font-size: 0.9rem; color: #cbd5e1; margin-top: 5px;">Pre-Arrival Delivery Call</div>
        </div>
      </div>
    </div>
  </section>

  <!-- 4. 6-Card Feature Grid (3x2 Layout) -->
  <section style="padding: 65px 0; background: #0b132b; color: #e2e8f0; line-height: 1.8;">
    <div class="container">
      
      <div style="max-width: 950px; margin: 0 auto;">
        <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Tracking Features</span>
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin: 10px 0 20px 0;">
          Features of Our <span style="color: #f59e0b;">Bike Consignment Tracking System</span>
        </h2>

        <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px; margin: 30px 0;">
          
          <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px;">
            <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;"><i class="fas fa-map-marker-alt"></i></div>
            <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">Live Satellite Telemetry</h3>
            <p style="font-size: 0.9rem; color: #cbd5e1; margin: 0;">
              Real-time GPS pin location of your bike carrier truck on national expressways.
            </p>
          </div>

          <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px;">
            <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;"><i class="fab fa-whatsapp"></i></div>
            <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">Automated WhatsApp Push</h3>
            <p style="font-size: 0.9rem; color: #cbd5e1; margin: 0;">
              Receive instant milestone updates whenever your vehicle passes major toll gates &amp; hubs.
            </p>
          </div>

          <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px;">
            <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;"><i class="fas fa-file-contract"></i></div>
            <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">Lorry Receipt (LR) Lookup</h3>
            <p style="font-size: 0.9rem; color: #cbd5e1; margin: 0;">
              Query live consignment status using your unique 10-digit LR transport number.
            </p>
          </div>

          <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px;">
            <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;"><i class="fas fa-clock"></i></div>
            <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">Accurate Dynamic ETA</h3>
            <p style="font-size: 0.9rem; color: #cbd5e1; margin: 0;">
              Calculated arrival time updates based on real-time highway traffic &amp; weather logs.
            </p>
          </div>

          <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px;">
            <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;"><i class="fas fa-headset"></i></div>
            <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">24/7 Helpline Desk</h3>
            <p style="font-size: 0.9rem; color: #cbd5e1; margin: 0;">
              Dedicated tracking officer assistance available around the clock via call or chat.
            </p>
          </div>

          <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px;">
            <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;"><i class="fas fa-user-check"></i></div>
            <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">Pre-Arrival Delivery Call</h3>
            <p style="font-size: 0.9rem; color: #cbd5e1; margin: 0;">
              Doorstep driver phone confirmation 4 to 6 hours prior to destination arrival.
            </p>
          </div>

        </div>

      </div>

    </div>
  </section>

  <!-- 5. Specialized Transport Methods Tracked -->
  <section style="padding: 60px 0; background: #070d1e; color: #ffffff;">
    <div class="container" style="max-width: 950px;">
      
      <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Tracking Modes</span>
      <h2 style="font-size: 2.1rem; font-weight: 800; color: #ffffff; margin: 10px 0 25px 0;">
        Track Any Two-Wheeler Shipping Method
      </h2>

      <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px;">
        <div style="background: #101c40; padding: 20px; border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #f59e0b; font-size: 1.05rem; margin-bottom: 8px;">Enclosed Container Truck</h4>
          <p style="font-size: 0.88rem; color: #cbd5e1; margin: 0;">Live GPS tracking for covered multi-bike container trucks operating on interstate highways.</p>
        </div>

        <div style="background: #101c40; padding: 20px; border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #f59e0b; font-size: 1.05rem; margin-bottom: 8px;">Specialized Bike Carrier</h4>
          <p style="font-size: 0.88rem; color: #cbd5e1; margin: 0;">Real-time tracking for luxury motorcycles (Harley, BMW, Ducati, Triumph) in single container pods.</p>
        </div>

        <div style="background: #101c40; padding: 20px; border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #f59e0b; font-size: 1.05rem; margin-bottom: 8px;">Express Door-to-Door Courier</h4>
          <p style="font-size: 0.88rem; color: #cbd5e1; margin: 0;">Step-by-step milestone tracking from home pickup to final doorstep delivery.</p>
        </div>
      </div>

    </div>
  </section>

  <!-- 6. 7-Layer Bike Protection Framework -->
  <section style="padding: 60px 0; background: #0b132b; color: #ffffff;">
    <div class="container" style="max-width: 950px;">
      
      <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Safety Protocol</span>
      <h2 style="font-size: 2.1rem; font-weight: 800; color: #ffffff; margin: 10px 0 25px 0;">
        Our 7-Layer Bike Protection Framework
      </h2>

      <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 15px;">
        <div style="background: #172a54; padding: 18px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <div style="font-size: 0.8rem; color: #f59e0b; font-weight: 700;">LAYER 01</div>
          <h4 style="font-size: 0.95rem; color: #fff; margin: 4px 0;">Pre-Loading Audit</h4>
          <p style="font-size: 0.82rem; color: #cbd5e1; margin: 0;">Odometer reading &amp; scratch condition log created at pickup.</p>
        </div>

        <div style="background: #172a54; padding: 18px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <div style="font-size: 0.8rem; color: #f59e0b; font-weight: 700;">LAYER 02</div>
          <h4 style="font-size: 0.95rem; color: #fff; margin: 4px 0;">Bubble Wrap Layer</h4>
          <p style="font-size: 0.82rem; color: #cbd5e1; margin: 0;">High-density 50-micron bubble sheet wrapped around body tanks &amp; fairings.</p>
        </div>

        <div style="background: #172a54; padding: 18px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <div style="font-size: 0.8rem; color: #f59e0b; font-weight: 700;">LAYER 03</div>
          <h4 style="font-size: 0.95rem; color: #fff; margin: 4px 0;">Corrugated Sheet Shield</h4>
          <p style="font-size: 0.82rem; color: #cbd5e1; margin: 0;">Heavy cardboard sheeting protecting silencer, mirrors, &amp; indicators.</p>
        </div>

        <div style="background: #172a54; padding: 18px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <div style="font-size: 0.8rem; color: #f59e0b; font-weight: 700;">LAYER 04</div>
          <h4 style="font-size: 0.95rem; color: #fff; margin: 4px 0;">Stretch Film Sealing</h4>
          <p style="font-size: 0.82rem; color: #cbd5e1; margin: 0;">Moisture-proof stretch film sealing all protective padding.</p>
        </div>

        <div style="background: #172a54; padding: 18px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <div style="font-size: 0.8rem; color: #f59e0b; font-weight: 700;">LAYER 05</div>
          <h4 style="font-size: 0.8rem; color: #f59e0b; font-weight: 700;">Nylon Belt Anchoring</h4>
          <p style="font-size: 0.82rem; color: #cbd5e1; margin: 0;">Industrial grade ratchet straps anchoring bike wheels to truck bed.</p>
        </div>

        <div style="background: #172a54; padding: 18px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <div style="font-size: 0.8rem; color: #f59e0b; font-weight: 700;">LAYER 06</div>
          <h4 style="font-size: 0.95rem; color: #fff; margin: 4px 0;">Enclosed Container Truck</h4>
          <p style="font-size: 0.82rem; color: #cbd5e1; margin: 0;">All-weather covered container protecting bike from rain &amp; dust.</p>
        </div>

        <div style="background: #172a54; padding: 18px; border-radius: 10px; border-left: 4px solid #f59e0b; grid-column: span 2;">
          <div style="font-size: 0.8rem; color: #f59e0b; font-weight: 700;">LAYER 07</div>
          <h4 style="font-size: 0.95rem; color: #fff; margin: 4px 0;">Handover Audit &amp; Unpacking</h4>
          <p style="font-size: 0.82rem; color: #cbd5e1; margin: 0;">Destination joint inspection &amp; safe unpacking before final handover.</p>
        </div>
      </div>

    </div>
  </section>

  <!-- 7. Nationwide Tracking Network -->
  <section style="padding: 60px 0; background: #070d1e; color: #ffffff;">
    <div class="container" style="max-width: 900px;">
      
      <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Pan-India Tracking Network</span>
      <h2 style="font-size: 2.1rem; font-weight: 800; color: #ffffff; margin: 10px 0 20px 0;">
        Track Bike Shipping Across <span style="color: #f59e0b;">Major Indian Cities</span>
      </h2>

      <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 16px; margin-bottom: 25px;">
        <div style="background: #101c40; padding: 18px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #ffffff; font-size: 1.05rem; margin-bottom: 6px;">Delhi NCR / Gurugram / Noida / Faridabad</h4>
          <p style="font-size: 0.88rem; color: #94a3b8; margin: 0;">Live tracking serving all North India departure hubs.</p>
        </div>

        <div style="background: #101c40; padding: 18px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #ffffff; font-size: 1.05rem; margin-bottom: 6px;">Bengaluru / Hyderabad / Chennai / Kochi</h4>
          <p style="font-size: 0.88rem; color: #94a3b8; margin: 0;">Real-time GPS updates along Southern Express Highway corridors.</p>
        </div>

        <div style="background: #101c40; padding: 18px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #ffffff; font-size: 1.05rem; margin-bottom: 6px;">Mumbai / Pune / Ahmedabad / Surat</h4>
          <p style="font-size: 0.88rem; color: #94a3b8; margin: 0;">Continuous tracking across Western freight expressways.</p>
        </div>

        <div style="background: #101c40; padding: 18px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #ffffff; font-size: 1.05rem; margin-bottom: 6px;">Patna / Ranchi / Kolkata / Guwahati</h4>
          <p style="font-size: 0.88rem; color: #94a3b8; margin: 0;">Full telemetry tracking across Eastern &amp; North-Eastern routes.</p>
        </div>
      </div>

    </div>
  </section>

  <!-- 8. Intercity Route Network Grid -->
  <section style="padding: 60px 0; background: #0b132b; color: #ffffff;">
    <div class="container" style="max-width: 900px;">
      
      <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Major Highway Corridors</span>
      <h2 style="font-size: 2.1rem; font-weight: 800; color: #ffffff; margin: 10px 0 20px 0;">
        Popular Tracked Bike Transport Routes
      </h2>

      <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 16px; margin-bottom: 25px;">
        <div style="background: #172a54; padding: 18px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #ffffff; font-size: 1.05rem; margin-bottom: 6px;">Delhi NCR to Patna / Ranchi / Kolkata</h4>
          <p style="font-size: 0.88rem; color: #94a3b8; margin: 0;">Real-time GPS updates via Yamuna &amp; Purvanchal Expressways.</p>
        </div>

        <div style="background: #172a54; padding: 18px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #ffffff; font-size: 1.05rem; margin-bottom: 6px;">Bengaluru to Delhi / Hyderabad / Pune</h4>
          <p style="font-size: 0.88rem; color: #94a3b8; margin: 0;">Live tracking with automated WhatsApp milestone alerts.</p>
        </div>

        <div style="background: #172a54; padding: 18px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #ffffff; font-size: 1.05rem; margin-bottom: 6px;">Mumbai to Jaipur / Chandigarh / Lucknow</h4>
          <p style="font-size: 0.88rem; color: #94a3b8; margin: 0;">Insured bike shipping with transparent LR number tracking.</p>
        </div>

        <div style="background: #172a54; padding: 18px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #ffffff; font-size: 1.05rem; margin-bottom: 6px;">Patna / Ranchi to Guwahati / Siliguri</h4>
          <p style="font-size: 0.88rem; color: #94a3b8; margin: 0;">24/7 helpline &amp; WhatsApp status tracking for North-East moves.</p>
        </div>
      </div>

    </div>
  </section>

  <!-- 9. IBA Approved GST Billing Documentation -->
  <section style="padding: 60px 0; background: #070d1e; color: #ffffff;">
    <div class="container" style="max-width: 900px;">
      
      <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Official Claims Documentation</span>
      <h2 style="font-size: 2.1rem; font-weight: 800; color: #ffffff; margin: 10px 0 20px 0;">
        IBA Approved Billing &amp; Tracking Documentation Set
      </h2>

      <div style="background: #101c40; border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 12px; padding: 25px;">
        <h4 style="color: #f59e0b; font-size: 1.1rem; margin-bottom: 12px; font-weight: 700;">Complete Trackable Relocation Claim Set:</h4>
        <ol style="margin: 0; padding-left: 20px; color: #cbd5e1; line-height: 1.8; font-size: 0.95rem;">
          <li><strong>Consignment Lorry Receipt (LR Copy)</strong> carrying trackable 10-digit LR number.</li>
          <li><strong>Official GST Consignment Invoice</strong> with SAC Code 996511.</li>
          <li><strong>Pre-Loading Bike Condition Audit Form</strong> with mileage &amp; scratch logs.</li>
          <li><strong>IBA Approved Registration Stamp &amp; Code</strong>.</li>
          <li><strong>Full Transit Risk Insurance Certificate</strong>.</li>
          <li><strong>Stamped Money Receipt</strong> for Defence, Police, Govt, &amp; Corporate claim reimbursement.</li>
        </ol>
      </div>

    </div>
  </section>

  <!-- 10. 10 Detailed FAQs + Valid JSON-LD FAQPage Schema -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "mainEntity": [
      <?php 
      $schema_items = [];
      foreach ($faq_list as $faq) {
          $schema_items[] = '{
            "@type": "Question",
            "name": ' . json_encode($faq['q']) . ',
            "acceptedAnswer": {
              "@type": "Answer",
              "text": ' . json_encode($faq['a']) . '
            }
          }';
      }
      echo implode(',', $schema_items);
      ?>
    ]
  }
  </script>

  <section style="padding: 60px 0; background: #0b132b; color: #ffffff;">
    <div class="container" style="max-width: 900px;">
      
      <div class="section-header text-center" style="margin-bottom: 40px;">
        <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Got Questions?</span>
        <h2 style="font-size: 2.1rem; font-weight: 800; color: #ffffff; margin-top: 10px;">
          Frequently Asked Questions About <span style="color: #f59e0b;">Bike Transport Tracking</span>
        </h2>
      </div>

      <div style="display: flex; flex-direction: column; gap: 14px;">
        <?php foreach ($faq_list as $idx => $faq): ?>
          <div style="background: #101c40; padding: 20px 24px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
            <h3 style="font-size: 1.05rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Q<?php echo ($idx + 1); ?>: <?php echo htmlspecialchars($faq['q']); ?></h3>
            <p style="font-size: 0.92rem; color: #cbd5e1; margin: 0; line-height: 1.7;">
              <?php echo htmlspecialchars($faq['a']); ?>
            </p>
          </div>
        <?php endforeach; ?>
      </div>

    </div>
  </section>

  <!-- 11. Call-To-Action (CTA) Conversion Footer -->
  <section style="padding: 60px 0; background: linear-gradient(135deg, #172a54 0%, #0b132b 100%); border-top: 1.5px solid rgba(245, 158, 11, 0.4); color: #ffffff;">
    <div class="container" style="max-width: 900px; text-align: center;">
      
      <span class="section-tag" style="background: rgba(245, 158, 11, 0.2); color: #f59e0b; padding: 6px 16px; border-radius: 20px; font-size: 0.85rem; font-weight: 700; text-transform: uppercase;">
        Book Bike Shipping with GPS Tracking
      </span>

      <h2 style="font-size: 2.2rem; font-weight: 800; margin: 15px 0 15px 0; color: #ffffff;">
        Need Safe <span style="color: #f59e0b;">Trackable Bike Transportation</span>?
      </h2>

      <p style="font-size: 1.05rem; color: #cbd5e1; max-width: 750px; margin: 0 auto 30px auto; line-height: 1.7;">
        Contact our two-wheeler shipping team today for an instant quote, 7-layer safety packaging, and real-time GPS consignment tracking.
      </p>

      <div style="display: flex; gap: 15px; justify-content: center; flex-wrap: wrap;">
        <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Now" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 30px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1.05rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
          <i class="fas fa-phone-alt"></i> Call Now: <?php echo SITE_PHONE; ?>
        </a>
        <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20a%20bike%20transport%20quote%20with%20tracking." title="Chat on WhatsApp" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 30px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1.05rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
          <i class="fab fa-whatsapp"></i> Chat on WhatsApp
        </a>
      </div>

    </div>
  </section>

</main>

<script>
function sendHeroWhatsAppLead(event, form) {
  event.preventDefault();
  var lrNum = form.querySelector('[name="lr_number"]').value;
  var name = form.querySelector('[name="name"]').value;
  var phone = form.querySelector('[name="phone"]').value;
  var extraMsg = form.querySelector('[name="message"]').value;
  
  var message = "Hello Shree Ashirwad Packers & Movers,\n\nI would like to request Consignment Tracking Status:\n- LR Number: " + lrNum + "\n- Name: " + name + "\n- Phone: " + phone;
  
  if (extraMsg && extraMsg.trim() !== '') {
    message += "\n- Bike Details: " + extraMsg;
  }
  
  var whatsappUrl = "https://api.whatsapp.com/send?phone=918409531615&text=" + encodeURIComponent(message);
  window.location.href = whatsappUrl;
}
</script>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
