<?php
$root_dir = dirname(__DIR__);
require_once file_exists(__DIR__ . '/../includes/config.php') ? __DIR__ . '/../includes/config.php' : $root_dir . '/includes/config.php';

$page_title = "All Relocation Services | Shree Ashirwad Packers and Movers";
$page_desc = "Explore complete household shifting, office relocation, car transportation, local shifting, bike transport, and warehouse storage services pan-India by IBA approved Shree Ashirwad Packers and Movers.";
$page_keywords = "relocation services, household shifting, office shifting, car transportation, local shifting, warehouse storage, packers and movers services";
$canonical_url = SITE_URL . "services";

require_once file_exists(__DIR__ . '/../includes/header.php') ? __DIR__ . '/../includes/header.php' : $root_dir . '/includes/header.php';
?>

<main class="site-main" style="background: #070d19; color: #ffffff; min-height: 100vh; padding-bottom: 60px;">

  <!-- Visual Breadcrumb Navigation Bar -->
  <div class="breadcrumb-wrapper" style="padding: 15px 0; background: #0f172a; border-bottom: 1px solid rgba(255,255,255,0.08);">
    <div class="container" style="max-width: 1140px; margin: 0 auto; padding: 0 15px;">
      <div class="breadcrumb-list" style="font-size: 0.9rem; color: #94a3b8;">
        <a href="<?php echo SITE_URL; ?>" title="Home" style="color: #f59e0b; text-decoration: none;">Home</a>
        <span style="margin: 0 8px;">/</span>
        <span style="color: #cbd5e1;">All Relocation Services</span>
      </div>
    </div>
  </div>

  <!-- Hero Header -->
  <section style="background: linear-gradient(135deg, #0f172a 0%, #1e1b4b 100%); padding: 60px 0 40px 0; text-align: center; border-bottom: 1px solid rgba(255,255,255,0.08);">
    <div class="container" style="max-width: 1000px; margin: 0 auto; padding: 0 15px;">
      <span style="background: rgba(245, 158, 11, 0.1); color: #f59e0b; border: 1.5px solid rgba(245, 158, 11, 0.3); padding: 6px 18px; border-radius: 30px; font-size: 0.8rem; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; display: inline-block; margin-bottom: 16px;">
        COMPREHENSIVE RELOCATION SOLUTIONS
      </span>
      <h1 style="font-size: 2.6rem; font-weight: 800; color: #ffffff; line-height: 1.25; margin-bottom: 16px;">
        Professional Packers and Movers Services Across India
      </h1>
      <p style="font-size: 1.08rem; color: #cbd5e1; max-width: 800px; margin: 0 auto; line-height: 1.7;">
        Shree Ashirwad Packers and Movers provides end-to-end packing, moving, car transport, bike shipping, office relocation, and secure storage with 100% transit insurance and IBA-approved documentation.
      </p>
    </div>
  </section>

  <!-- Services Grid -->
  <section style="padding: 60px 0;">
    <div class="container" style="max-width: 1140px; margin: 0 auto; padding: 0 15px;">
      
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 28px;">
        
        <!-- Service 1: Household Shifting -->
        <div style="background: #0f172a; border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 18px; padding: 32px 26px; box-shadow: 0 10px 30px rgba(0,0,0,0.3); display: flex; flex-direction: column; justify-content: space-between;">
          <div>
            <div style="width: 54px; height: 54px; background: rgba(245, 158, 11, 0.15); border-radius: 14px; display: flex; align-items: center; justify-content: center; color: #f59e0b; font-size: 1.4rem; margin-bottom: 20px;">
              <i class="fas fa-home"></i>
            </div>
            <h3 style="font-size: 1.4rem; font-weight: 700; color: #ffffff; margin-bottom: 12px;">Household Shifting</h3>
            <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.7; margin-bottom: 20px;">
              Complete home relocation services with 7-layer bubble packaging, furniture dismantling, customized wooden crating for appliances, and room-by-room setup.
            </p>
          </div>
          <a href="<?php echo SITE_URL; ?>services/household-shifting" title="Household Shifting Services" style="display: inline-flex; align-items: center; gap: 8px; color: #f59e0b; font-weight: 700; font-size: 0.95rem; text-decoration: none;">
            Explore Household Shifting <i class="fas fa-arrow-right"></i>
          </a>
        </div>

        <!-- Service 2: Office Shifting -->
        <div style="background: #0f172a; border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 18px; padding: 32px 26px; box-shadow: 0 10px 30px rgba(0,0,0,0.3); display: flex; flex-direction: column; justify-content: space-between;">
          <div>
            <div style="width: 54px; height: 54px; background: rgba(245, 158, 11, 0.15); border-radius: 14px; display: flex; align-items: center; justify-content: center; color: #f59e0b; font-size: 1.4rem; margin-bottom: 20px;">
              <i class="fas fa-building"></i>
            </div>
            <h3 style="font-size: 1.4rem; font-weight: 700; color: #ffffff; margin-bottom: 12px;">Office &amp; Corporate Shifting</h3>
            <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.7; margin-bottom: 20px;">
              Zero-downtime commercial office moving, IT equipment anti-static packing, workstation dismantling, confidential document archiving, and weekend slots.
            </p>
          </div>
          <a href="<?php echo SITE_URL; ?>services/office-shifting" title="Office Shifting Services" style="display: inline-flex; align-items: center; gap: 8px; color: #f59e0b; font-weight: 700; font-size: 0.95rem; text-decoration: none;">
            Explore Office Shifting <i class="fas fa-arrow-right"></i>
          </a>
        </div>

        <!-- Service 3: Car Transportation -->
        <div style="background: #0f172a; border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 18px; padding: 32px 26px; box-shadow: 0 10px 30px rgba(0,0,0,0.3); display: flex; flex-direction: column; justify-content: space-between;">
          <div>
            <div style="width: 54px; height: 54px; background: rgba(245, 158, 11, 0.15); border-radius: 14px; display: flex; align-items: center; justify-content: center; color: #f59e0b; font-size: 1.4rem; margin-bottom: 20px;">
              <i class="fas fa-car"></i>
            </div>
            <h3 style="font-size: 1.4rem; font-weight: 700; color: #ffffff; margin-bottom: 12px;">Car Transportation</h3>
            <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.7; margin-bottom: 20px;">
              Door-to-door car transport using specialized enclosed hydraulic car carrier trucks, satellite GPS tracking, pre-move inspection reports, and full insurance.
            </p>
          </div>
          <a href="<?php echo SITE_URL; ?>services/car-transportation" title="Car Transportation Services" style="display: inline-flex; align-items: center; gap: 8px; color: #f59e0b; font-weight: 700; font-size: 0.95rem; text-decoration: none;">
            Explore Car Transport <i class="fas fa-arrow-right"></i>
          </a>
        </div>

        <!-- Service 4: Local Shifting -->
        <div style="background: #0f172a; border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 18px; padding: 32px 26px; box-shadow: 0 10px 30px rgba(0,0,0,0.3); display: flex; flex-direction: column; justify-content: space-between;">
          <div>
            <div style="width: 54px; height: 54px; background: rgba(245, 158, 11, 0.15); border-radius: 14px; display: flex; align-items: center; justify-content: center; color: #f59e0b; font-size: 1.4rem; margin-bottom: 20px;">
              <i class="fas fa-truck-moving"></i>
            </div>
            <h3 style="font-size: 1.4rem; font-weight: 700; color: #ffffff; margin-bottom: 12px;">Local Intracity Shifting</h3>
            <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.7; margin-bottom: 20px;">
              Fast same-day local house moving within the city. Experienced local loaders, covered city mini-trucks, bubble wrap protection, and zero stair charges.
            </p>
          </div>
          <a href="<?php echo SITE_URL; ?>services/local-shifting" title="Local Shifting Services" style="display: inline-flex; align-items: center; gap: 8px; color: #f59e0b; font-weight: 700; font-size: 0.95rem; text-decoration: none;">
            Explore Local Shifting <i class="fas fa-arrow-right"></i>
          </a>
        </div>

        <!-- Service 5: Warehouse & Storage -->
        <div style="background: #0f172a; border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 18px; padding: 32px 26px; box-shadow: 0 10px 30px rgba(0,0,0,0.3); display: flex; flex-direction: column; justify-content: space-between;">
          <div>
            <div style="width: 54px; height: 54px; background: rgba(245, 158, 11, 0.15); border-radius: 14px; display: flex; align-items: center; justify-content: center; color: #f59e0b; font-size: 1.4rem; margin-bottom: 20px;">
              <i class="fas fa-warehouse"></i>
            </div>
            <h3 style="font-size: 1.4rem; font-weight: 700; color: #ffffff; margin-bottom: 12px;">Warehouse &amp; Goods Storage</h3>
            <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.7; margin-bottom: 20px;">
              Short and long-term luggage and household goods storage with 24/7 CCTV surveillance, monthly pest control, barcode inventory logging, and full insurance.
            </p>
          </div>
          <a href="<?php echo SITE_URL; ?>services/warehouse" title="Warehouse Storage Services" style="display: inline-flex; align-items: center; gap: 8px; color: #f59e0b; font-weight: 700; font-size: 0.95rem; text-decoration: none;">
            Explore Warehouse Storage <i class="fas fa-arrow-right"></i>
          </a>
        </div>

      </div>

    </div>
  </section>

  <!-- CTA Section -->
  <section style="padding: 60px 0; background: linear-gradient(135deg, #1e1b4b 0%, #0f172a 100%); text-align: center;">
    <div class="container" style="max-width: 900px; margin: 0 auto; padding: 0 15px;">
      <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin-bottom: 14px;">Need Custom Relocation Guidance?</h2>
      <p style="color: #cbd5e1; font-size: 1.05rem; margin-bottom: 28px; line-height: 1.7;">
        Our moving experts are available 24/7 to provide free video surveys and instant estimates.
      </p>
      <div style="display: flex; gap: 15px; justify-content: center; flex-wrap: wrap;">
        <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Us Now" style="padding: 15px 34px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 800; font-size: 1.05rem; text-decoration: none; display: inline-flex; align-items: center; gap: 10px; box-shadow: 0 6px 20px rgba(225, 29, 72, 0.4);">
          <i class="fas fa-phone-alt"></i> Call Support: <?php echo SITE_PHONE; ?>
        </a>
        <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20a%20relocation%20quote." title="WhatsApp Booking" target="_blank" style="padding: 15px 34px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 800; font-size: 1.05rem; text-decoration: none; display: inline-flex; align-items: center; gap: 10px; box-shadow: 0 6px 20px rgba(16, 185, 129, 0.4);">
          <i class="fab fa-whatsapp"></i> Chat on WhatsApp
        </a>
      </div>
    </div>
  </section>

</main>

<?php require_once file_exists(__DIR__ . '/../includes/footer.php') ? __DIR__ . '/../includes/footer.php' : $root_dir . '/includes/footer.php'; ?>
