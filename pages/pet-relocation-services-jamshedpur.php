<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "Pet Relocation Services Jamshedpur | Dog & Cat Moving | 8409531615";
$page_desc = "Safe Pet Relocation Services in Jamshedpur. IATA compliant pet crates, health certificate assistance, climate controlled dog & cat transport. Call (+91) 8409531615.";
$page_keywords = "pet relocation services jamshedpur, dog cat transport jamshedpur, pet moving company bistupur sakchi mango adityapur, pet courier service jamshedpur";

$page_city = "Jamshedpur";

$faq_list = [
    ['q' => 'What documents are required for pet travel?', 'a' => 'Updated vaccination card, rabies clearance, and a certified veterinary health certificate.'],
    ['q' => 'Are pets sedated during long distance transit?', 'a' => 'No, we do not sedate pets unless explicitly prescribed by a licensed vet.'],
    ['q' => 'How to book pet relocation with Shree Ashirwad Packers?', 'a' => 'Call +91 8409531615 or message us on WhatsApp for pet travel consultation.']
];

require_once __DIR__ . '/../includes/header.php';
?>

<main class="site-main">

  <!-- Visual Breadcrumb Navigation Bar -->
  <div class="breadcrumb-wrapper">
    <div class="container">
      <div class="breadcrumb-list">
        <span class="breadcrumb-item"><a href="<?php echo SITE_URL; ?>">Home</a></span>
        <span class="breadcrumb-separator">/</span>
        <span class="breadcrumb-item"><a href="<?php echo SITE_URL; ?>packers-and-movers-in-jamshedpur">Jamshedpur</a></span>
        <span class="breadcrumb-separator">/</span>
        <span class="breadcrumb-item active">Pet Relocation Services Jamshedpur</span>
      </div>
    </div>
  </div>


  <!-- Hero Section -->
  <section class="hero-section" style="background: linear-gradient(135deg, #0b132b 0%, #1c2541 100%); padding: 60px 0; color: #ffffff;">
    <div class="container">
      <div class="hero-grid" style="display: grid; grid-template-columns: 1.2fr 0.8fr; gap: 40px; align-items: center;">
        
        <div class="hero-text">
          <span class="section-tag" style="background: rgba(245, 158, 11, 0.15); color: #f59e0b; border: 1px solid rgba(245, 158, 11, 0.4); padding: 6px 16px; border-radius: 20px; font-size: 0.85rem; font-weight: 700; text-transform: uppercase; display: inline-block; margin-bottom: 15px;">
            Safe Pet Travel Solutions
          </span>
          <h1 style="font-size: 2.7rem; font-weight: 800; line-height: 1.2; margin-bottom: 20px; color: #ffffff;">
            Caring <span style="color: #f59e0b;">Pet Relocation Services in Jamshedpur</span>
          </h1>
          <p style="font-size: 1.08rem; color: #cbd5e1; line-height: 1.7; margin-bottom: 25px;">
            Relocating your beloved dogs, cats, birds, or small pets to another city from Jamshedpur? Shree Ashirwad Packers provides compassionate, stress-free pet transportation featuring IATA-compliant travel crates, veterinary fit-to-travel health documentation support, climate-controlled vehicles, scheduled feeding stops, live GPS tracking, and complete doorstep delivery across Bistupur, Sakchi, Mango, Adityapur, Telco, Sonari, Kadma, and Jugsalai.
          </p>

          <div style="display: flex; gap: 15px; flex-wrap: wrap; margin-bottom: 30px;">
            <a href="tel:<?php echo SITE_PHONE_RAW; ?>" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #d32f2f 0%, #f59e0b 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(211, 47, 47, 0.4);">
              📞 Call Pet Desk: <?php echo SITE_PHONE; ?>
            </a>
            <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20need%20pet%20relocation%20quote%20in%20Jamshedpur." target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
              💬 Chat on WhatsApp
            </a>
          </div>
        </div>

        <div class="hero-form-card" style="background: rgba(255, 255, 255, 0.05); backdrop-filter: blur(10px); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 16px; padding: 30px; box-shadow: 0 15px 35px rgba(0,0,0,0.4);">
          <h2 style="font-size: 1.4rem; color: #ffffff; margin-bottom: 8px; font-weight: 700; text-align: center;">Get Pet Transport Quote</h2>
          <p style="font-size: 0.85rem; color: #94a3b8; text-align: center; margin-bottom: 20px;">Receive custom pet relocation cost on WhatsApp</p>

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

  <!-- Section 2: Stats -->
  <section style="padding: 35px 0; background: #070d19; border-bottom: 1px solid rgba(245, 158, 11, 0.2);">
    <div class="container">
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(160px, 1fr)); gap: 15px; text-align: center;">
        <div><h3 style="color: #f59e0b; font-size: 2rem; font-weight: 800;">IATA</h3><p style="color: #cbd5e1; font-size: 0.85rem;">Compliant Pet Crates</p></div>
        <div><h3 style="color: #f59e0b; font-size: 2rem; font-weight: 800;">100%</h3><p style="color: #cbd5e1; font-size: 0.85rem;">Vet Health Certified</p></div>
        <div><h3 style="color: #f59e0b; font-size: 2rem; font-weight: 800;">AC Fleet</h3><p style="color: #cbd5e1; font-size: 0.85rem;">Climate Controlled Cabs</p></div>
        <div><h3 style="color: #f59e0b; font-size: 2rem; font-weight: 800;">1,200+</h3><p style="color: #cbd5e1; font-size: 0.85rem;">Pets Relocated Safely</p></div>
        <div><h3 style="color: #f59e0b; font-size: 2rem; font-weight: 800;">24/7</h3><p style="color: #cbd5e1; font-size: 0.85rem;">Live GPS &amp; Care Updates</p></div>
        <div><h3 style="color: #f59e0b; font-size: 2rem; font-weight: 800;">Door Step</h3><p style="color: #cbd5e1; font-size: 0.85rem;">Pickup &amp; Handover</p></div>
      </div>
    </div>
  </section>

  <!-- Specialized Pet Relocation Overview Box -->
  <section style="padding: 50px 0; background: linear-gradient(145deg, #0b132b 0%, #172a54 100%); border-bottom: 1px solid rgba(245, 158, 11, 0.3); color: #ffffff;">
    <div class="container" style="max-width: 950px;">
      <h3 style="color: #f59e0b; font-size: 1.4rem; font-weight: 700; margin-bottom: 14px;">Professional Dog, Cat &amp; Pet Transportation in Jamshedpur</h3>
      <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.7; margin-bottom: 14px;">
        Relocating to a new city can be stressful for pets and pet parents alike. At Shree Ashirwad Packers, we specialize in providing compassionate, safe, and stress-free pet transportation services from Jamshedpur to major cities across India, including Ranchi, Kolkata, Patna, Delhi, Mumbai, and Bangalore.
      </p>
      <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.7; margin-bottom: 14px;">
        Our <strong>pet relocation services in jamshedpur</strong> cater to pet owners residing in Bistupur, Sakchi, Mango, Adityapur, Telco, Sonari, Kadma, and Jugsalai. We ensure full compliance with international and national pet travel safety standards. We provide IATA-approved flight and road travel crates that allow your dogs, cats, or birds ample space to stand up, turn around, and lie down comfortably during journey.
      </p>
      <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.7; margin-bottom: 14px;">
        We assist pet parents with mandatory documentation, including veterinary health certificates, microchip verification, updated vaccination cards, and rabies antibody titre tests when required. Our dedicated pet handlers ensure scheduled feeding, fresh water replenishment, exercise walks, and regular photo/video updates on WhatsApp throughout the journey.
      </p>
      <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.7; margin-bottom: 14px;">
        Whether you prefer dedicated air-conditioned road travel in custom pet vans or air cargo booking assistance, Shree Ashirwad Packers guarantees gentle handling, zero-sedation policies, transparent upfront pricing, and direct doorstep-to-doorstep handover.
      </p>
      <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.7; margin: 0;">
        Our team coordinates directly with local Jamshedpur veterinary clinics in Bistupur and Sakchi to schedule pre-departure health examinations, verify microchip numbers, and issue certified travel health clearance paperwork within 48 hours prior to transit. We take pride in reuniting over 1,200 happy pets with their families across Jharkhand, West Bengal, Bihar, and all major Indian metropolitan hubs.
      </p>
    </div>
  </section>

  <!-- Section 3: Pet Relocation Process & 6-Card Features -->
  <section style="padding: 60px 0; background: #ffffff;">
    <div class="container">
      <div style="text-align: center; max-width: 800px; margin: 0 auto 40px auto;">
        <span style="color: #d32f2f; font-weight: 700; text-transform: uppercase; font-size: 0.85rem;">Pet Travel Features</span>
        <h2 style="font-size: 2.1rem; color: #0b132b; font-weight: 800; margin-top: 5px;">
          Why Pet Parents Choose Our <span style="color: #d32f2f;">Pet Relocation Service in Jamshedpur</span>
        </h2>
        <p style="color: #64748b; font-size: 0.98rem; margin-top: 8px;">
          We prioritize your pet’s physical safety, comfort, and emotional well-being above everything else during local and intercity transit.
        </p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 25px; margin-bottom: 40px;">
        <div style="background: #f8fafc; padding: 25px; border-radius: 12px; border-top: 4px solid #d32f2f; box-shadow: 0 4px 15px rgba(0,0,0,0.05);">
          <h3 style="font-size: 1.15rem; color: #0b132b; margin-bottom: 8px; font-weight: 700;">IATA Approved Travel Crates</h3>
          <p style="color: #64748b; font-size: 0.9rem; line-height: 1.6;">High-quality, ventilated, leak-proof, and chew-resistant crates fitted with absorbent bedding and attachable food/water bowls.</p>
        </div>
        <div style="background: #f8fafc; padding: 25px; border-radius: 12px; border-top: 4px solid #f59e0b; box-shadow: 0 4px 15px rgba(0,0,0,0.05);">
          <h3 style="font-size: 1.15rem; color: #0b132b; margin-bottom: 8px; font-weight: 700;">Veterinary Health Assistance</h3>
          <p style="color: #64748b; font-size: 0.9rem; line-height: 1.6;">Guidance and coordination with licensed Jamshedpur veterinarians for fit-to-travel health certificates and vaccination record approvals.</p>
        </div>
        <div style="background: #f8fafc; padding: 25px; border-radius: 12px; border-top: 4px solid #d32f2f; box-shadow: 0 4px 15px rgba(0,0,0,0.05);">
          <h3 style="font-size: 1.15rem; color: #0b132b; margin-bottom: 8px; font-weight: 700;">Climate-Controlled AC Vehicles</h3>
          <p style="color: #64748b; font-size: 0.9rem; line-height: 1.6;">Temperature-regulated, cushioned transport vans ensuring pets stay cool and comfortable even during peak summer highway travel.</p>
        </div>
        <div style="background: #f8fafc; padding: 25px; border-radius: 12px; border-top: 4px solid #f59e0b; box-shadow: 0 4px 15px rgba(0,0,0,0.05);">
          <h3 style="font-size: 1.15rem; color: #0b132b; margin-bottom: 8px; font-weight: 700;">Scheduled Feeding &amp; Walk Stops</h3>
          <p style="color: #64748b; font-size: 0.9rem; line-height: 1.6;">Trained pet handlers conduct regular comfort breaks, hydration checks, and leash walks at safe highway stops.</p>
        </div>
        <div style="background: #f8fafc; padding: 25px; border-radius: 12px; border-top: 4px solid #d32f2f; box-shadow: 0 4px 15px rgba(0,0,0,0.05);">
          <h3 style="font-size: 1.15rem; color: #0b132b; margin-bottom: 8px; font-weight: 700;">Real-Time GPS &amp; WhatsApp Updates</h3>
          <p style="color: #64748b; font-size: 0.9rem; line-height: 1.6;">Live GPS tracking link and frequent video/photo updates sent directly to pet parents throughout the relocation route.</p>
        </div>
        <div style="background: #f8fafc; padding: 25px; border-radius: 12px; border-top: 4px solid #f59e0b; box-shadow: 0 4px 15px rgba(0,0,0,0.05);">
          <h3 style="font-size: 1.15rem; color: #0b132b; margin-bottom: 8px; font-weight: 700;">Doorstep Handover Delivery</h3>
          <p style="color: #64748b; font-size: 0.9rem; line-height: 1.6;">Direct home pickup in Jamshedpur and door delivery at destination city with personalized care during handover.</p>
        </div>
        <div style="background: #f8fafc; padding: 25px; border-radius: 12px; border-top: 4px solid #d32f2f; box-shadow: 0 4px 15px rgba(0,0,0,0.05);">
          <h3 style="font-size: 1.15rem; color: #0b132b; margin-bottom: 8px; font-weight: 700;">Private Pet Taxi Options</h3>
          <p style="color: #64748b; font-size: 0.9rem; line-height: 1.6;">Exclusive air-conditioned vehicle reservation allowing pet owners to travel alongside their pets in total comfort.</p>
        </div>
        <div style="background: #f8fafc; padding: 25px; border-radius: 12px; border-top: 4px solid #f59e0b; box-shadow: 0 4px 15px rgba(0,0,0,0.05);">
          <h3 style="font-size: 1.15rem; color: #0b132b; margin-bottom: 8px; font-weight: 700;">Stress-Free Crate Training Tips</h3>
          <p style="color: #64748b; font-size: 0.9rem; line-height: 1.6;">Guidance and early crate delivery prior to travel date to help your pet become accustomed to their travel home.</p>
        </div>
      </div>

      <!-- Detailed 4-Step Pet Relocation Process -->
      <div style="margin-top: 50px; background: #070d19; padding: 35px; border-radius: 16px; border: 1px solid rgba(245, 158, 11, 0.3); color: #ffffff;">
        <h3 style="color: #f59e0b; font-size: 1.5rem; font-weight: 800; text-align: center; margin-bottom: 25px;">
          4-Step Safe Pet Relocation Roadmap
        </h3>
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 20px;">
          <div style="background: rgba(255,255,255,0.04); padding: 20px; border-radius: 10px; border-left: 4px solid #d32f2f;">
            <span style="color: #f59e0b; font-weight: 800; font-size: 0.85rem;">STEP 1</span>
            <h4 style="color: #ffffff; font-size: 1.1rem; margin: 8px 0 6px 0;">Consultation &amp; Crate Sizing</h4>
            <p style="color: #cbd5e1; font-size: 0.88rem; line-height: 1.6; margin: 0;">We measure your pet’s height, length, and weight to select an IATA-compliant crate and schedule veterinary health documentation checks.</p>
          </div>
          <div style="background: rgba(255,255,255,0.04); padding: 20px; border-radius: 10px; border-left: 4px solid #f59e0b;">
            <span style="color: #f59e0b; font-weight: 800; font-size: 0.85rem;">STEP 2</span>
            <h4 style="color: #ffffff; font-size: 1.1rem; margin: 8px 0 6px 0;">Doorstep Pickup &amp; Comfort Setup</h4>
            <p style="color: #cbd5e1; font-size: 0.88rem; line-height: 1.6; margin: 0;">Our handler arrives at your home in Bistupur or Sakchi, sets up absorbent pads, familiar blankets, toys, and secures the crate inside our AC vehicle.</p>
          </div>
          <div style="background: rgba(255,255,255,0.04); padding: 20px; border-radius: 10px; border-left: 4px solid #d32f2f;">
            <span style="color: #f59e0b; font-weight: 800; font-size: 0.85rem;">STEP 3</span>
            <h4 style="color: #ffffff; font-size: 1.1rem; margin: 8px 0 6px 0;">Climate Transit &amp; Live Tracking</h4>
            <p style="color: #cbd5e1; font-size: 0.88rem; line-height: 1.6; margin: 0;">Continuous temperature control with scheduled hydration breaks every 3 hours. Live WhatsApp location pins and video updates shared with owners.</p>
          </div>
          <div style="background: rgba(255,255,255,0.04); padding: 20px; border-radius: 10px; border-left: 4px solid #f59e0b;">
            <span style="color: #f59e0b; font-weight: 800; font-size: 0.85rem;">STEP 4</span>
            <h4 style="color: #ffffff; font-size: 1.1rem; margin: 8px 0 6px 0;">Door Delivery &amp; Happy Reunion</h4>
            <p style="color: #cbd5e1; font-size: 0.88rem; line-height: 1.6; margin: 0;">Safe handover at your new home address in Kolkata, Ranchi, Delhi, or Bangalore, ensuring your furry family member arrives happy and healthy.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Comprehensive Pet Relocation Cost Guide Section -->
  <section style="padding: 60px 0; background: #0b132b; color: #ffffff;">
    <div class="container" style="max-width: 950px;">
      <div style="text-align: center; margin-bottom: 40px;">
        <span style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Pet Travel Cost Guide</span>
        <h2 style="font-size: 2.1rem; font-weight: 800; color: #ffffff; margin-top: 8px;">
          Estimated Pet Transportation Charges from Jamshedpur
        </h2>
        <p style="color: #cbd5e1; font-size: 0.95rem; margin-top: 8px;">
          Transparent pricing structure based on pet type, crate dimensions, mode of transport, and distance.
        </p>
      </div>

      <!-- Price Table Box -->
      <div style="background: rgba(255,255,255,0.04); border: 1px solid rgba(245,158,11,0.25); border-radius: 12px; padding: 25px; margin-bottom: 35px;">
        <h3 style="color: #f59e0b; font-size: 1.25rem; font-weight: 700; margin-bottom: 16px;">Estimated Pet Relocation Rates (Local &amp; Intercity)</h3>
        <div style="overflow-x: auto;">
          <table style="width: 100%; border-collapse: collapse; color: #cbd5e1; font-size: 0.9rem;">
            <thead>
              <tr style="background: rgba(245,158,11,0.15); color: #f59e0b; text-align: left;">
                <th style="padding: 12px; border: 1px solid rgba(245,158,11,0.3);">Pet Category / Size</th>
                <th style="padding: 12px; border: 1px solid rgba(245,158,11,0.3);">Local Jamshedpur Shift</th>
                <th style="padding: 12px; border: 1px solid rgba(245,158,11,0.3);">Intercity Road Transport</th>
                <th style="padding: 12px; border: 1px solid rgba(245,158,11,0.3);">Services Included</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td style="padding: 10px; border: 1px solid rgba(255,255,255,0.1);">Small Dog / Cat (Under 10 kg)</td>
                <td style="padding: 10px; border: 1px solid rgba(255,255,255,0.1);">₹1,800 - ₹3,000</td>
                <td style="padding: 10px; border: 1px solid rgba(255,255,255,0.1);">₹6,500 - ₹12,000</td>
                <td style="padding: 10px; border: 1px solid rgba(255,255,255,0.1);">Crate + AC Cab + Feed Stops</td>
              </tr>
              <tr style="background: rgba(255,255,255,0.02);">
                <td style="padding: 10px; border: 1px solid rgba(255,255,255,0.1);">Medium Dog (10 - 25 kg)</td>
                <td style="padding: 10px; border: 1px solid rgba(255,255,255,0.1);">₹2,500 - ₹4,500</td>
                <td style="padding: 10px; border: 1px solid rgba(255,255,255,0.1);">₹9,500 - ₹18,000</td>
                <td style="padding: 10px; border: 1px solid rgba(255,255,255,0.1);">IATA Crate + Handler Care</td>
              </tr>
              <tr>
                <td style="padding: 10px; border: 1px solid rgba(255,255,255,0.1);">Large / Extra-Large Dog (25+ kg)</td>
                <td style="padding: 10px; border: 1px solid rgba(255,255,255,0.1);">₹3,500 - ₹6,000</td>
                <td style="padding: 10px; border: 1px solid rgba(255,255,255,0.1);">₹14,000 - ₹25,000</td>
                <td style="padding: 10px; border: 1px solid rgba(255,255,255,0.1);">Custom Crate + Dedicated Van</td>
              </tr>
              <tr style="background: rgba(255,255,255,0.02);">
                <td style="padding: 10px; border: 1px solid rgba(255,255,255,0.1);">Birds / Rabbits / Small Pets</td>
                <td style="padding: 10px; border: 1px solid rgba(255,255,255,0.1);">₹1,200 - ₹2,500</td>
                <td style="padding: 10px; border: 1px solid rgba(255,255,255,0.1);">₹4,500 - ₹9,000</td>
                <td style="padding: 10px; border: 1px solid rgba(255,255,255,0.1);">Special Cage Securing</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

      <!-- Detail Guide Grid -->
      <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 25px;">
        <div style="background: rgba(255,255,255,0.04); border: 1px solid rgba(245,158,11,0.2); padding: 22px; border-radius: 10px;">
          <h4 style="color: #f59e0b; font-size: 1.1rem; margin-bottom: 10px;">Strict Zero-Sedation Policy</h4>
          <p style="color: #cbd5e1; font-size: 0.9rem; line-height: 1.6; margin: 0;">
            We adhere strictly to veterinary guidelines against tranquilizers or sedatives during travel, as sedation can impair breathing and body temperature regulation. Instead, we use calming natural routines, comfortable bedding, and familiar toys to ease anxiety naturally.
          </p>
        </div>
        <div style="background: rgba(255,255,255,0.04); border: 1px solid rgba(245,158,11,0.2); padding: 22px; border-radius: 10px;">
          <h4 style="color: #f59e0b; font-size: 1.1rem; margin-bottom: 10px;">Veterinary Documentation Support</h4>
          <p style="color: #cbd5e1; font-size: 0.9rem; line-height: 1.6; margin: 0;">
            Our team assists pet parents in obtaining certified fit-to-travel health certificates from registered veterinary doctors in Jamshedpur, verifying updated rabies vaccinations, and completing mandatory state check-post permits.
          </p>
        </div>
        <div style="background: rgba(255,255,255,0.04); border: 1px solid rgba(245,158,11,0.2); padding: 22px; border-radius: 10px;">
          <h4 style="color: #f59e0b; font-size: 1.1rem; margin-bottom: 10px;">Essential Pre-Travel Pet Checklist</h4>
          <p style="color: #cbd5e1; font-size: 0.9rem; line-height: 1.6; margin: 0;">
            Feed a light meal 4 to 6 hours before departure, ensure your pet is well-hydrated, pack 3 days of familiar pet food, attach an ID collar with destination contact details, and include a favorite blanket to reduce unfamiliar scent stress.
          </p>
        </div>
        <div style="background: rgba(255,255,255,0.04); border: 1px solid rgba(245,158,11,0.2); padding: 22px; border-radius: 10px;">
          <h4 style="color: #f59e0b; font-size: 1.1rem; margin-bottom: 10px;">Air Cargo vs Dedicated AC Road Travel</h4>
          <p style="color: #cbd5e1; font-size: 0.9rem; line-height: 1.6; margin: 0;">
            Air travel offers faster transit for long distances across India, while dedicated AC road transport allows custom feeding stops, continuous handler supervision, and direct door-to-door delivery without airport cargo waiting times.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 5: Contextual Internal Links -->
  <section style="padding: 50px 0; background: #f8fafc;">
    <div class="container">
      <div style="text-align: center; max-width: 800px; margin: 0 auto 30px auto;">
        <h3 style="font-size: 1.8rem; color: #0b132b; font-weight: 800;">Related <span style="color: #d32f2f;">Shifting &amp; Logistics Services</span></h3>
      </div>
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); gap: 15px;">
        <a href="<?php echo SITE_URL; ?>packers-and-movers-in-jamshedpur" style="background: #fff; padding: 14px; border-radius: 6px; border: 1px solid #e2e8f0; color: #0b132b; text-decoration: none; font-weight: 600; text-align: center; display: block;">📍 Movers in Jamshedpur</a>
        <a href="<?php echo SITE_URL; ?>packers-and-movers-bistupur-jamshedpur" style="background: #fff; padding: 14px; border-radius: 6px; border: 1px solid #e2e8f0; color: #0b132b; text-decoration: none; font-weight: 600; text-align: center; display: block;">📍 Movers in Bistupur</a>
        <a href="<?php echo SITE_URL; ?>car-transport-guide-jamshedpur" style="background: #fff; padding: 14px; border-radius: 6px; border: 1px solid #e2e8f0; color: #0b132b; text-decoration: none; font-weight: 600; text-align: center; display: block;">🚗 Car Transport Guide</a>
        <a href="<?php echo SITE_URL; ?>bike-transport-guide-jamshedpur" style="background: #fff; padding: 14px; border-radius: 6px; border: 1px solid #e2e8f0; color: #0b132b; text-decoration: none; font-weight: 600; text-align: center; display: block;">🏍️ Bike Transport Guide</a>
        <a href="<?php echo SITE_URL; ?>household-shifting-checklist-jamshedpur" style="background: #fff; padding: 14px; border-radius: 6px; border: 1px solid #e2e8f0; color: #0b132b; text-decoration: none; font-weight: 600; text-align: center; display: block;">📋 Shifting Checklist</a>
        <a href="<?php echo SITE_URL; ?>top-10-shifting-tips-packers-and-movers-in-jamshedpur" style="background: #fff; padding: 14px; border-radius: 6px; border: 1px solid #e2e8f0; color: #0b132b; text-decoration: none; font-weight: 600; text-align: center; display: block;">💡 Top 10 Shifting Tips</a>
        <a href="<?php echo SITE_URL; ?>how-to-choose-best-packers-and-movers-in-jamshedpur" style="background: #fff; padding: 14px; border-radius: 6px; border: 1px solid #e2e8f0; color: #0b132b; text-decoration: none; font-weight: 600; text-align: center; display: block;">⭐ How to Choose Movers</a>
        <a href="<?php echo SITE_URL; ?>packers-and-movers-sakchi-jamshedpur" style="background: #fff; padding: 14px; border-radius: 6px; border: 1px solid #e2e8f0; color: #0b132b; text-decoration: none; font-weight: 600; text-align: center; display: block;">📍 Movers in Sakchi</a>
      </div>
    </div>
  </section>

  <!-- Pet Travel Safety Protocols Box -->
  <section style="padding: 50px 0; background: linear-gradient(135deg, #070d19 0%, #172a54 100%); color: #ffffff;">
    <div class="container" style="max-width: 950px;">
      <h3 style="color: #f59e0b; font-size: 1.4rem; font-weight: 700; margin-bottom: 14px;">Our Core Pet Safety &amp; Welfare Commitments</h3>
      <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.7; margin-bottom: 14px;">
        At Shree Ashirwad Packers, we recognize that pets are integral family members, not cargo. Our pet handlers undergo specialized training in animal handling, anxiety mitigation, and emergency pet first aid. We follow strict protocols to prevent escape risks during comfort breaks by utilizing dual-leash securing systems and enclosed staging areas.
      </p>
      <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.7; margin-bottom: 14px;">
        During summer journeys from Jamshedpur, vehicles are pre-cooled before loading pet crates, and temperature logs are monitored continuously. We also accommodate special dietary requirements, senior pet care routines, and medication schedules provided by your veterinarian.
      </p>
      <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.7; margin: 0;">
        From initial consultation in Bistupur, Sakchi, or Mango to doorstep handover in Delhi, Mumbai, Kolkata, or Bangalore, our dedicated pet relocation coordinator remains in constant contact with you to ensure complete peace of mind.
      </p>
    </div>
  </section>

  <!-- Section 6: FAQs -->
  <section style="padding: 50px 0; background: #ffffff;">
    <div class="container">
      <div style="text-align: center; max-width: 800px; margin: 0 auto 35px auto;">
        <h2 style="font-size: 2rem; color: #0b132b; font-weight: 800;">Pet Relocation FAQs</h2>
      </div>
      <div style="max-width: 850px; margin: 0 auto; display: flex; flex-direction: column; gap: 12px;">
        <div style="background: #f8fafc; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0;"><h4 style="color: #0b132b; font-weight: 700;">Q1: What documents are required for pet travel from Jamshedpur?</h4><p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin-top: 6px;">Required documents include an updated pet vaccination card, rabies vaccination clearance (administered at least 30 days prior), and an official veterinary health certificate issued by a registered doctor within 48 hours of travel.</p></div>
        <div style="background: #f8fafc; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0;"><h4 style="color: #0b132b; font-weight: 700;">Q2: Are pets sedated during long distance highway transit?</h4><p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin-top: 6px;">No, we do not sedate pets unless explicitly prescribed by a licensed vet. Sedation can depress respiratory function at varying altitudes and temperatures. We use comfortable padding, familiar toys, and calming routines instead.</p></div>
        <div style="background: #f8fafc; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0;"><h4 style="color: #0b132b; font-weight: 700;">Q3: How are pets fed and watered during intercity road journeys?</h4><p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin-top: 6px;">Our trained pet handlers schedule regular stops every 3 to 4 hours. Pets receive fresh bottled drinking water, light familiar meals, and brief leash walks at safe, clean highway rest areas.</p></div>
        <div style="background: #f8fafc; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0;"><h4 style="color: #0b132b; font-weight: 700;">Q4: How do I choose the correct travel crate size for my dog or cat?</h4><p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin-top: 6px;">According to IATA standards, the crate must be tall enough for your pet to stand without touching the roof, wide enough for comfortable turning, and long enough for your pet to lie down completely stretched out.</p></div>
        <div style="background: #f8fafc; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0;"><h4 style="color: #0b132b; font-weight: 700;">Q5: Can I track my pet’s location during transit?</h4><p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin-top: 6px;">Yes, all our dedicated pet transport vehicles are equipped with real-time GPS tracking. Our handlers send live location pins, photos, and short video updates directly to your WhatsApp throughout the journey.</p></div>
        <div style="background: #f8fafc; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0;"><h4 style="color: #0b132b; font-weight: 700;">Q6: Do you transport cats and small pets like birds and rabbits?</h4><p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin-top: 6px;">Yes, we safely relocate cats, kittens, birds, rabbits, and small pets using specialized escape-proof travel cages with adequate shade, ventilation, and quiet surroundings.</p></div>
        <div style="background: #f8fafc; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0;"><h4 style="color: #0b132b; font-weight: 700;">Q7: How far in advance should I book pet relocation services?</h4><p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin-top: 6px;">We recommend booking 5 to 7 days in advance. This provides ample time to select the appropriate crate size, assist your pet with crate acclimatization, and complete veterinary health certifications.</p></div>
        <div style="background: #f8fafc; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0;"><h4 style="color: #0b132b; font-weight: 700;">Q8: Are pet transport vehicles climate-controlled?</h4><p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin-top: 6px;">Yes, all our pet transport vehicles feature fully operational air-conditioning units to maintain a comfortable ambient temperature regardless of external weather conditions.</p></div>
        <div style="background: #f8fafc; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0;"><h4 style="color: #0b132b; font-weight: 700;">Q9: Can pet owners travel in the same vehicle with their pets?</h4><p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin-top: 6px;">Yes, we offer dedicated private pet taxi options where pet parents can travel alongside their pets in the same air-conditioned vehicle for complete peace of mind.</p></div>
        <div style="background: #f8fafc; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0;"><h4 style="color: #0b132b; font-weight: 700;">Q10: How can I contact Shree Ashirwad Packers for pet travel booking?</h4><p style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin-top: 6px;">You can call our dedicated pet desk at <strong>+91 8409531615</strong> or message us on WhatsApp for an instant pet travel consultation, crate sizing guide, and fixed price quote in Jamshedpur.</p></div>
      </div>
    </div>
  </section>

  <!-- Section 6: CTA Banner -->
  <section class="cta-banner-section" style="padding: 50px 0; background: linear-gradient(135deg, #0b132b 0%, #1c2541 100%); color: #ffffff;">
    <div class="container">
      <div style="text-align: center; max-width: 800px; margin: 0 auto;">
        <h2 style="font-size: 2.1rem; font-weight: 800; margin-bottom: 15px;">Book Safe Pet Relocation in Jamshedpur Today</h2>
        <div style="display: flex; gap: 15px; justify-content: center; flex-wrap: wrap;">
          <a href="tel:<?php echo SITE_PHONE_RAW; ?>" style="padding: 14px 32px; background: linear-gradient(135deg, #d32f2f 0%, #f59e0b 100%); color: #fff; border-radius: 50px; font-weight: 700; text-decoration: none;">📞 Call: <?php echo SITE_PHONE; ?></a>
          <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20need%20pet%20relocation%20quote%20in%20Jamshedpur." target="_blank" style="padding: 14px 32px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #fff; border-radius: 50px; font-weight: 700; text-decoration: none;">💬 WhatsApp Quote</a>
        </div>
      </div>
    </div>
  </section>

</main>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
