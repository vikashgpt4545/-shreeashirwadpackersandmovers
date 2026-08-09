<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "Live Work Gallery - Shree Ashirwad Packers and Movers";
$page_desc = "View authentic photos of our shifting team in action: 7-layer bubble wrapping, custom wooden crating, bike straw packing, and container loading.";
$page_keywords = "shifting photos, packers movers gallery, bike packing photos, car transport container pictures, relocation showcase india";

require_once __DIR__ . '/../includes/header.php';
?>

<main class="site-main" style="background: #070d19; color: #ffffff; min-height: 100vh; padding-bottom: 60px;">

  <!-- Visual Breadcrumb Navigation Bar -->
  <div class="breadcrumb-wrapper" style="padding: 15px 0; background: #0f172a; border-bottom: 1px solid rgba(255,255,255,0.08);">
    <div class="container" style="max-width: 1140px; margin: 0 auto; padding: 0 15px;">
      <div class="breadcrumb-list" style="font-size: 0.9rem; color: #94a3b8;">
        <a href="<?php echo SITE_URL; ?>" title="Home" style="color: #f59e0b; text-decoration: none;">Home</a>
        <span style="margin: 0 8px;">/</span>
        <span style="color: #cbd5e1;">Live Work Gallery</span>
      </div>
    </div>
  </div>

  <!-- Hero Header -->
  <section style="background: linear-gradient(135deg, #0f172a 0%, #1e1b4b 100%); padding: 60px 0 40px 0; text-align: center; border-bottom: 1px solid rgba(255,255,255,0.08);">
    <div class="container" style="max-width: 1000px; margin: 0 auto; padding: 0 15px;">
      <span style="background: rgba(245, 158, 11, 0.1); color: #f59e0b; border: 1.5px solid rgba(245, 158, 11, 0.3); padding: 6px 18px; border-radius: 30px; font-size: 0.8rem; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; display: inline-block; margin-bottom: 16px;">
        AUTHENTIC SHIFTING SHOWCASE
      </span>
      <h1 style="font-size: 2.5rem; font-weight: 800; color: #ffffff; line-height: 1.25; margin-bottom: 16px;">
        Real Operational Work Gallery
      </h1>
      <p style="font-size: 1.08rem; color: #cbd5e1; max-width: 800px; margin: 0 auto; line-height: 1.7;">
        Explore authentic ground-zero photos of our trained packing specialists in action across household shifting, vehicle transportation, wooden crating, and warehouse storage operations.
      </p>
    </div>
  </section>

  <!-- Gallery Showcase Grid -->
  <section style="padding: 60px 0;">
    <div class="container" style="max-width: 1140px; margin: 0 auto; padding: 0 15px;">
      
      <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(270px, 1fr)); gap: 24px;">
        
        <!-- Gallery Card 1 -->
        <div style="background: #0f172a; border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; overflow: hidden; box-shadow: 0 10px 25px rgba(0,0,0,0.3);">
          <img src="<?php echo SITE_URL; ?>assets/images/gallery/gallery-1.webp" alt="Bike Straw Padding &amp; Branded Tape" style="width: 100%; height: 230px; object-fit: cover; display: block;" loading="lazy">
          <div style="padding: 16px; text-align: center; font-weight: 700; font-size: 0.9rem; color: #ffffff; background: rgba(15, 23, 42, 0.95); border-top: 1px solid rgba(255,255,255,0.08);">
            Bike Straw Padding &amp; Branded Tape
          </div>
        </div>

        <!-- Gallery Card 2 -->
        <div style="background: #0f172a; border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; overflow: hidden; box-shadow: 0 10px 25px rgba(0,0,0,0.3);">
          <img src="<?php echo SITE_URL; ?>assets/images/gallery/gallery-2.webp" alt="Cardboard &amp; Stretch Wrap Bike Packing" style="width: 100%; height: 230px; object-fit: cover; display: block;" loading="lazy">
          <div style="padding: 16px; text-align: center; font-weight: 700; font-size: 0.9rem; color: #ffffff; background: rgba(15, 23, 42, 0.95); border-top: 1px solid rgba(255,255,255,0.08);">
            Cardboard &amp; Stretch Wrap Bike Packing
          </div>
        </div>

        <!-- Gallery Card 3 -->
        <div style="background: #0f172a; border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; overflow: hidden; box-shadow: 0 10px 25px rgba(0,0,0,0.3);">
          <img src="<?php echo SITE_URL; ?>assets/images/gallery/gallery-3.webp" alt="Custom Wooden Crate Box Framing" style="width: 100%; height: 230px; object-fit: cover; display: block;" loading="lazy">
          <div style="padding: 16px; text-align: center; font-weight: 700; font-size: 0.9rem; color: #ffffff; background: rgba(15, 23, 42, 0.95); border-top: 1px solid rgba(255,255,255,0.08);">
            Custom Wooden Crate Box Framing
          </div>
        </div>

        <!-- Gallery Card 4 -->
        <div style="background: #0f172a; border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; overflow: hidden; box-shadow: 0 10px 25px rgba(0,0,0,0.3);">
          <img src="<?php echo SITE_URL; ?>assets/images/gallery/gallery-4.webp" alt="Smart TV Wooden Crate Packaging" style="width: 100%; height: 230px; object-fit: cover; display: block;" loading="lazy">
          <div style="padding: 16px; text-align: center; font-weight: 700; font-size: 0.9rem; color: #ffffff; background: rgba(15, 23, 42, 0.95); border-top: 1px solid rgba(255,255,255,0.08);">
            Smart TV Wooden Crate Packaging
          </div>
        </div>

        <!-- Gallery Card 5 -->
        <div style="background: #0f172a; border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; overflow: hidden; box-shadow: 0 10px 25px rgba(0,0,0,0.3);">
          <img src="<?php echo SITE_URL; ?>assets/images/gallery/gallery-5.webp" alt="Glass Dining Table Heavy Bubble Wrapping" style="width: 100%; height: 230px; object-fit: cover; display: block;" loading="lazy">
          <div style="padding: 16px; text-align: center; font-weight: 700; font-size: 0.9rem; color: #ffffff; background: rgba(15, 23, 42, 0.95); border-top: 1px solid rgba(255,255,255,0.08);">
            Glass Dining Table Heavy Bubble Wrapping
          </div>
        </div>

        <!-- Gallery Card 6 -->
        <div style="background: #0f172a; border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; overflow: hidden; box-shadow: 0 10px 25px rgba(0,0,0,0.3);">
          <img src="<?php echo SITE_URL; ?>assets/images/gallery/gallery-6.webp" alt="Double Bed Dismantling &amp; Edge Protection" style="width: 100%; height: 230px; object-fit: cover; display: block;" loading="lazy">
          <div style="padding: 16px; text-align: center; font-weight: 700; font-size: 0.9rem; color: #ffffff; background: rgba(15, 23, 42, 0.95); border-top: 1px solid rgba(255,255,255,0.08);">
            Double Bed Dismantling &amp; Edge Protection
          </div>
        </div>

        <!-- Gallery Card 7 -->
        <div style="background: #0f172a; border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; overflow: hidden; box-shadow: 0 10px 25px rgba(0,0,0,0.3);">
          <img src="<?php echo SITE_URL; ?>assets/images/gallery/gallery-7.webp" alt="Enclosed Container Vehicle Loading" style="width: 100%; height: 230px; object-fit: cover; display: block;" loading="lazy">
          <div style="padding: 16px; text-align: center; font-weight: 700; font-size: 0.9rem; color: #ffffff; background: rgba(15, 23, 42, 0.95); border-top: 1px solid rgba(255,255,255,0.08);">
            Enclosed Container Vehicle Loading
          </div>
        </div>

        <!-- Gallery Card 8 -->
        <div style="background: #0f172a; border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; overflow: hidden; box-shadow: 0 10px 25px rgba(0,0,0,0.3);">
          <img src="<?php echo SITE_URL; ?>assets/images/gallery/gallery-8.webp" alt="Hydraulic Car Carrier Ramp Pickup" style="width: 100%; height: 230px; object-fit: cover; display: block;" loading="lazy">
          <div style="padding: 16px; text-align: center; font-weight: 700; font-size: 0.9rem; color: #ffffff; background: rgba(15, 23, 42, 0.95); border-top: 1px solid rgba(255,255,255,0.08);">
            Hydraulic Car Carrier Ramp Pickup
          </div>
        </div>

      </div>

    </div>
  </section>

</main>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
