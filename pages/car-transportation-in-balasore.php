<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "Car Transportation in Balasore | Professional Car Carrier";
$page_desc = "Doorstep car shipping in Balasore, Odisha. Enclosed car carrier trailers and transit insurance.";
$page_keywords = "car transportation in balasore, best car transportation in balasore, affordable car transportation in balasore, packers and movers, top car transportation in balasore company, household shifting car transportation in balasore, doorstep car transportation in balasore, verified car transportation in balasore services, shree ashirwad car transportation in balasore";
$canonical_url = "https://shreeashirwadpackersandmovers.com/pages/car-transportation-in-balasore.php";

require_once __DIR__ . '/../includes/header.php';
?>

<main class="site-main">

  <!-- Visual Breadcrumb Navigation Bar -->
  <div class="breadcrumb-wrapper">
    <div class="container">
      <div class="breadcrumb-list">
        <span class="breadcrumb-item"><a href="<?php echo SITE_URL; ?>" title="Home">Home</a></span>
        <span class="breadcrumb-separator">/</span>
        <span class="breadcrumb-item active"><?php echo htmlspecialchars($page_title); ?></span>
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
            CAR TRANSPORTATION BALASORE RELOCATION SPECIALISTS
          </span>
          <h1 style="font-size: 2.7rem; font-weight: 800; line-height: 1.2; margin-bottom: 20px; color: #ffffff;">
            Professional <span style="color: #f59e0b;">Car Transportation in Balasore</span>
          </h1>
          <p style="font-size: 1.12rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 25px;">
            Doorstep car shipping in Balasore, Odisha. Enclosed car carrier trailers and transit insurance.
          </p>

          <div style="display: flex; gap: 15px; flex-wrap: wrap; margin-bottom: 30px;">
            <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Now" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
              <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call Now: <?php echo SITE_PHONE; ?>
            </a>
            <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20a%20shifting%20quote." title="Chat on WhatsApp" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
              <i class="fab fa-whatsapp" style="margin-right: 8px;"></i> Chat on WhatsApp
            </a>
          </div>

          <div style="display: flex; gap: 20px; font-size: 0.9rem; color: #94a3b8;">
            <span><strong style="color: #f59e0b;">100% Insured</strong> Shifting</span>
            <span><strong style="color: #f59e0b;">Enclosed Carrier</strong> Option</span>
            <span><strong style="color: #f59e0b;">Door-to-Door</strong> Delivery</span>
          </div>
        </div>

        <!-- Hero Lead Form Column -->
        <div class="hero-form-card" style="background: rgba(255, 255, 255, 0.05); backdrop-filter: blur(10px); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 16px; padding: 30px; box-shadow: 0 15px 35px rgba(0,0,0,0.4);">
          <h2 style="font-size: 1.4rem; color: #ffffff; margin-bottom: 8px; font-weight: 700; text-align: center;">Get Balasore Shifting Quote</h2>
          <p style="font-size: 0.85rem; color: #94a3b8; text-align: center; margin-bottom: 20px;">Receive transparent cost estimation on WhatsApp in 2 minutes</p>

          <form action="#" method="POST" onsubmit="sendHeroWhatsAppLead(event, this);">
            <div style="margin-bottom: 14px;">
              <input type="text" name="name" class="form-control" placeholder="Your Full Name" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="margin-bottom: 14px;">
              <input type="tel" name="phone" class="form-control" placeholder="10-Digit Phone Number" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 10px; margin-bottom: 14px;">
              <input type="text" name="move_from" class="form-control" value="Balasore" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
              <input type="text" name="move_to" class="form-control" placeholder="Moving To (City/Area)" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <button type="submit" style="width: 100%; padding: 14px; background: linear-gradient(135deg, #d32f2f 0%, #f59e0b 100%); color: #ffffff; border: none; border-radius: 50px; font-weight: 700; font-size: 1rem; cursor: pointer;">
              Get Instant Estimate Now &rarr;
            </button>
          </form>
        </div>

      </div>
    </div>
  </section>

  <!-- Detailed Logistics Guide & Local Information -->
  <section class="details-section" style="padding: 50px 0; background: #ffffff;">
    <div class="container">
      <div style="max-width: 900px; margin: 0 auto; line-height: 1.8; color: #334155;">

        <h2 style="font-size: 2rem; color: #0f172a; margin-bottom: 20px;">Car Transportation Services in Balasore, Odisha</h2>
        <p style="margin-bottom: 20px;">
          Shree Ashirwad Packers and Movers provides professional open-car trailers and covered car carrier services in Balasore, Odisha. Our car transport solution features hydraulic loading ramps, wheel stoppers, multi-point safety tie-downs, and full transit insurance protection.
        </p>

        <h3 style="font-size: 1.5rem; color: #1e293b; margin-top: 30px; margin-bottom: 15px;">Local Transport Corridors & RTO Clearance</h3>
        <p style="margin-bottom: 20px;">
          OD-01 RTO governs Balasore; NH-16 handles Kolkata-Cuttack car carrier movements. Highlight Januganj Industrial Estate, Remuna Golei, and NH-16 corridor.
        </p>

        <h3 style="font-size: 1.5rem; color: #1e293b; margin-top: 30px; margin-bottom: 15px;">Car Carrier Transport Protocol & Insurance</h3>
        <p style="margin-bottom: 20px;">
          Wheel chock lashing, hydraulic ramp loading, transit insurance, and pre-shipping inspection. Prior to dispatch, our vehicle specialists perform comprehensive exterior inspection, document odometer readings, lock down doors, and secure battery connections for safe long-distance highway hauling.
        </p>

      </div>
    </div>
  </section>

</main>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
