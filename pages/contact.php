<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "Contact Us | Packers and Movers in Ranchi | 8409531615";
$page_desc = "Contact Shree Ashirwad Packers and Movers in Ranchi for fast household & office shifting quotes. Phone: (+91) 8409531615. Anandpuri Chowk, Harmu, Ranchi.";
$page_keywords = DEFAULT_KEYWORDS;

require_once __DIR__ . '/../includes/header.php';
?>

<main class="site-main">

  <!-- Inner Page Banner -->
  <section class="page-banner">
    <div class="container">
      <div class="banner-content">
        <h1 class="page-title">Contact <span>Packers and Movers in Ranchi</span></h1>
        <p class="page-subtitle">Get in touch with Jharkhand's most trusted packing and relocation experts</p>
      </div>
    </div>
  </section>

  <!-- Contact Details & Form Section -->
  <section class="contact-section">
    <div class="container">
      <div class="contact-grid">
        
        <!-- Left Column: Contact Cards -->
        <div class="contact-info">
          
          <div class="info-card">
            <div class="info-icon">
              <svg width="24" height="24" fill="currentColor" viewBox="0 0 24 24"><path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/></svg>
            </div>
            <div class="info-content">
              <h3>Phone & WhatsApp</h3>
              <p><a href="tel:<?php echo SITE_PHONE_RAW; ?>"><?php echo SITE_PHONE; ?></a></p>
              <span class="info-tag">Available 24/7 for Shifting Queries</span>
            </div>
          </div>

          <div class="info-card">
            <div class="info-icon">
              <svg width="24" height="24" fill="currentColor" viewBox="0 0 24 24"><path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/></svg>
            </div>
            <div class="info-content">
              <h3>Email Inquiry</h3>
              <p><a href="mailto:<?php echo SITE_EMAIL; ?>"><?php echo SITE_EMAIL; ?></a></p>
              <span class="info-tag">Prompt Response within 1 Hour</span>
            </div>
          </div>

          <div class="info-card">
            <div class="info-icon">
              <svg width="24" height="24" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg>
            </div>
            <div class="info-content">
              <h3>Ranchi Head Office</h3>
              <p><?php echo ADDRESS_RANCHI; ?></p>
            </div>
          </div>

          <div class="info-card">
            <div class="info-icon">
              <svg width="24" height="24" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg>
            </div>
            <div class="info-content">
              <h3>Bokaro Office</h3>
              <p><?php echo ADDRESS_BOKARO; ?></p>
            </div>
          </div>

        </div>

        <!-- Right Column: Contact & Shifting Quote Form -->
        <div class="contact-form-wrapper">
          <div class="contact-form-card">
            <h2>Send Us a Message</h2>
            <p>Fill out the details below to receive an instant shifting quote on WhatsApp.</p>
            
            <form action="#" method="POST" onsubmit="sendContactWhatsAppLead(event, this);">
              <div class="form-group">
                <label for="contactName" class="form-label">Full Name</label>
                <input type="text" id="contactName" name="name" class="form-control" placeholder="Enter your full name" required>
              </div>

              <div class="form-group">
                <label for="contactPhone" class="form-label">Phone / WhatsApp Number</label>
                <input type="tel" id="contactPhone" name="phone" class="form-control" placeholder="Enter 10-digit mobile number" required>
              </div>

              <div class="form-row">
                <div class="form-group">
                  <label for="contactFrom" class="form-label">Moving From</label>
                  <input type="text" id="contactFrom" name="move_from" class="form-control" placeholder="e.g. Ranchi" value="Ranchi" required>
                </div>
                <div class="form-group">
                  <label for="contactTo" class="form-label">Moving To</label>
                  <input type="text" id="contactTo" name="move_to" class="form-control" placeholder="Destination city" required>
                </div>
              </div>

              <div class="form-group">
                <label for="contactMsg" class="form-label">Additional Shifting Requirements (Optional)</label>
                <textarea id="contactMsg" name="message" class="form-control" rows="3" placeholder="e.g. 2BHK household items, Car transportation"></textarea>
              </div>

              <button type="submit" class="btn btn-primary" style="width: 100%;">
                Request Instant Quote on WhatsApp
              </button>
            </form>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- Interactive Google Map Section -->
  <section class="map-section">
    <div class="container">
      <div class="map-header">
        <h2>Find Our Ranchi Office Location</h2>
        <p>Anandpuri Chowk, Vidyanagar Road, Harmu, Ranchi, Jharkhand - 834002</p>
      </div>
      <div class="map-container">
        <iframe 
          title="Shree Ashirwad Packers and Movers Ranchi Location"
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3662.8360662283995!2d85.3100!3d23.3600!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjPCsDIxJzM2LjAiTiA4NcKwMTgnMzYuMCJF!5e0!3m2!1sen!2sin!4v1700000000000!5m2!1sen!2sin" 
          width="100%" 
          height="400" 
          style="border:0; border-radius: 12px;" 
          allowfullscreen="" 
          loading="lazy" 
          referrerpolicy="no-referrer-when-downgrade">
        </iframe>
      </div>
    </div>
  </section>

</main>

<script>
function sendContactWhatsAppLead(event, form) {
  event.preventDefault();
  var name = form.querySelector('[name="name"]').value;
  var phone = form.querySelector('[name="phone"]').value;
  var moveFrom = form.querySelector('[name="move_from"]').value;
  var moveTo = form.querySelector('[name="move_to"]').value;
  var extraMsg = form.querySelector('[name="message"]').value;
  
  var message = "Hello Shree Ashirwad Packers & Movers,\n\nI would like to request a Shifting Estimate from your Contact Page:\n- Name: " + name + "\n- Phone: " + phone + "\n- Moving From: " + moveFrom + "\n- Moving To: " + moveTo;
  
  if (extraMsg && extraMsg.trim() !== '') {
    message += "\n- Requirements: " + extraMsg;
  }
  
  var whatsappUrl = "https://api.whatsapp.com/send?phone=918409531615?text=" + encodeURIComponent(message);
  window.location.href = whatsappUrl;
}
</script>

<?php
require_once __DIR__ . '/../includes/footer.php';
?>
