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

<?php require_once file_exists(__DIR__ . '/../includes/footer.php') ? __DIR__ . '/../includes/footer.php' : $root_dir . '/includes/footer.php'; ?>
