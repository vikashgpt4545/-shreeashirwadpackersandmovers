<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "Real Shifting Photo Gallery | Packers and Movers in Ranchi | 8409531615";
$page_desc = "View live work photos of Shree Ashirwad Packers and Movers in Ranchi. Household packing, office shifting, vehicle carriers & container logistics across Jharkhand. Call 8409531615.";
$page_keywords = "gallery packers and movers in ranchi, shifting photos ranchi, household packing photos, vehicle transport ranchi, IBA approved movers gallery";

require_once __DIR__ . '/../includes/header.php';
?>

<main class="site-main">

  <!-- Inner Page Banner -->
  <section class="page-banner">
    <div class="container">
      <div class="banner-content">
        <h1 class="page-title">Real Shifting <span>Photo Gallery</span></h1>
        <p class="page-subtitle">Authentic Field Work Photographs of Top Packers and Movers in Ranchi</p>
      </div>
    </div>
  </section>

  <!-- Main Gallery Grid Section -->
  <section class="gallery-page-section">
    <div class="container">
      
      <div class="section-header text-center">
        <span class="section-tag">Verified On-Site Operations</span>
        <h2 class="section-title">
          Live Shifting & Packaging Operations in <span class="text-gradient">Ranchi</span>
        </h2>
        <p class="section-description">
          Transparency is our core promise. Browse full uncropped photographs of our professional moving crew performing heavy household packing, container loading, vehicle carrier transport, and warehouse logistics across Ranchi.
        </p>
      </div>

      <!-- Full Gallery Grid (Same Box Size for All Photos, Zero Cropping) -->
      <div class="gallery-page-grid">
        
        <div class="gallery-card-item" onclick="openLightbox('<?php echo SITE_URL; ?>assets/images/gallery/gallery-1.webp', 'Two-Wheeler / Bike Straw Padding & Branded Tape Packing');">
          <div class="gallery-img-wrapper">
            <img src="<?php echo SITE_URL; ?>assets/images/gallery/gallery-1.webp" alt="Packers and Movers in Ranchi Bike Straw Padding Packing" loading="lazy">
            <div class="gallery-card-badge">Photo #1</div>
          </div>
          <div class="gallery-card-info">
            <h3>Bike Straw Padding & Branded Tape</h3>
            <p>Professional bike packing using paddy straw cushioning & official tape.</p>
          </div>
        </div>

        <div class="gallery-card-item" onclick="openLightbox('<?php echo SITE_URL; ?>assets/images/gallery/gallery-2.webp', 'Complete Cardboard & Stretch Wrap Bike Transport Packaging');">
          <div class="gallery-img-wrapper">
            <img src="<?php echo SITE_URL; ?>assets/images/gallery/gallery-2.webp" alt="Packers and Movers in Ranchi Cardboard & Stretch Wrap Bike Transport" loading="lazy">
            <div class="gallery-card-badge">Photo #2</div>
          </div>
          <div class="gallery-card-info">
            <h3>Cardboard & Stretch Wrap Bike Packing</h3>
            <p>Heavy corrugated sheet & shrink wrap outer protection for motorcycles.</p>
          </div>
        </div>

        <div class="gallery-card-item" onclick="openLightbox('<?php echo SITE_URL; ?>assets/images/gallery/gallery-3.webp', 'Custom Wooden Crate Box Framing for Glassware & Heavy Items');">
          <div class="gallery-img-wrapper">
            <img src="<?php echo SITE_URL; ?>assets/images/gallery/gallery-3.webp" alt="Packers and Movers in Ranchi Heavy Wooden Crate Packaging" loading="lazy">
            <div class="gallery-card-badge">Photo #3</div>
          </div>
          <div class="gallery-card-info">
            <h3>Custom Wooden Crate Box Framing</h3>
            <p>Solid wooden crate box reinforcement for high-value fragile goods.</p>
          </div>
        </div>

        <div class="gallery-card-item" onclick="openLightbox('<?php echo SITE_URL; ?>assets/images/gallery/gallery-4.webp', 'Wooden Crate & Box Protection for Large Smart LED TV');">
          <div class="gallery-img-wrapper">
            <img src="<?php echo SITE_URL; ?>assets/images/gallery/gallery-4.webp" alt="Packers and Movers in Ranchi Smart LED TV Wooden Crate Packing" loading="lazy">
            <div class="gallery-card-badge">Photo #4</div>
          </div>
          <div class="gallery-card-info">
            <h3>Smart TV Wooden Crate Protection</h3>
            <p>Outer wooden crate framing around TV box for 100% damage-free transit.</p>
          </div>
        </div>

        <div class="gallery-card-item" onclick="openLightbox('<?php echo SITE_URL; ?>assets/images/gallery/gallery-5.webp', 'Heavy Corrugated Carton Boxes & Foam Sheet Packing');">
          <div class="gallery-img-wrapper">
            <img src="<?php echo SITE_URL; ?>assets/images/gallery/gallery-5.webp" alt="Packers and Movers in Ranchi Heavy Carton Box Household Packaging" loading="lazy">
            <div class="gallery-card-badge">Photo #5</div>
          </div>
          <div class="gallery-card-info">
            <h3>Heavy Carton & Foam Sheet Packing</h3>
            <p>Heavy-duty cartons and cushioned foam film packaging for household items.</p>
          </div>
        </div>

        <div class="gallery-card-item" onclick="openLightbox('<?php echo SITE_URL; ?>assets/images/gallery/gallery-6.webp', 'Cushioned Quilted Blanket & Shrink Wrap LED TV Packing');">
          <div class="gallery-img-wrapper">
            <img src="<?php echo SITE_URL; ?>assets/images/gallery/gallery-6.webp" alt="Packers and Movers in Ranchi Cushioned TV Shrink Wrap Packing" loading="lazy">
            <div class="gallery-card-badge">Photo #6</div>
          </div>
          <div class="gallery-card-info">
            <h3>Cushioned Blanket TV Shrink Wrap</h3>
            <p>Protective red quilted blanket & shrink wrap TV packing with official tag.</p>
          </div>
        </div>

        <div class="gallery-card-item" onclick="openLightbox('<?php echo SITE_URL; ?>assets/images/gallery/gallery-7.webp', 'Full Transport Container Truck Loaded with Household Goods');">
          <div class="gallery-img-wrapper">
            <img src="<?php echo SITE_URL; ?>assets/images/gallery/gallery-7.webp" alt="Packers and Movers in Ranchi Container Truck Loaded Household Goods" loading="lazy">
            <div class="gallery-card-badge">Photo #7</div>
          </div>
          <div class="gallery-card-info">
            <h3>Full Container Truck Goods Loading</h3>
            <p>Systematic loading of packed furniture & appliances into moving truck.</p>
          </div>
        </div>

      </div>

    </div>
  </section>

  <!-- CTA Banner Section -->
  <section class="cta-banner-section">
    <div class="container">
      <div class="cta-banner-card">
        <span class="cta-tag">Book Verified Movers</span>
        <h2 class="cta-title">Need Reliable Relocation by Top <span>Packers and Movers in Ranchi</span>?</h2>
        <p class="cta-description">
          Contact our Harmu, Ranchi head office today for instant, transparent shifting quotes.
        </p>

        <div class="cta-buttons-wrapper">
          <a href="tel:<?php echo SITE_PHONE_RAW; ?>" class="btn btn-secondary">
            <svg width="18" height="18" fill="currentColor" viewBox="0 0 24 24"><path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/></svg>
            Call Now: <?php echo SITE_PHONE; ?>
          </a>
          <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers%20and%20Movers,%20I%20saw%20your%20shifting%20gallery%20and%20want%20a%20quote." target="_blank" class="btn btn-whatsapp-green">
            <svg width="20" height="20" fill="currentColor" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-1.137 4.156 4.29-1.127z"/></svg>
            Chat on WhatsApp
          </a>
          <a href="<?php echo SITE_URL; ?>pages/contact.php" class="btn btn-outline">
            Get Custom Quote
          </a>
        </div>
      </div>
    </div>
  </section>

</main>

<!-- Lightbox Modal for Photo Enlarge -->
<div id="galleryModal" class="gallery-modal" onclick="closeLightbox();">
  <span class="modal-close">&times;</span>
  <div class="modal-content-wrapper" onclick="event.stopPropagation();">
    <img id="modalImg" src="" alt="Full Shifting Photo">
    <p id="modalCaption"></p>
  </div>
</div>

<script>
function openLightbox(src, caption) {
  var modal = document.getElementById('galleryModal');
  var img = document.getElementById('modalImg');
  var cap = document.getElementById('modalCaption');
  modal.style.display = 'flex';
  img.src = src;
  cap.innerText = caption;
}
function closeLightbox() {
  document.getElementById('galleryModal').style.display = 'none';
}
</script>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
