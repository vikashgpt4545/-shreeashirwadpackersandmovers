<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "Packers and Movers Lalpur Ranchi | 8409531615";
$page_desc = "Packers and Movers Lalpur Ranchi offering safe household shifting, office relocation, bike & car transport in Lalpur Chowk, Circular Road & Plaza Chowk. Call 8409531615.";
$page_keywords = "packers and movers lalpur ranchi, packers and movers in lalpur ranchi, best packers and movers in lalpur ranchi, cheap packers and movers lalpur ranchi, packers and movers in lalpur chowk ranchi, household shifting in lalpur ranchi, home relocation services lalpur ranchi, office shifting in lalpur ranchi, bike transport lalpur ranchi, car transport service lalpur ranchi, packers and movers circular road ranchi, movers and packers plaza chowk ranchi, packers and movers ranchi charges, movers and packers lalpur contact number, safe packing and moving lalpur, iba approved packers and movers ranchi, local packers and movers lalpur ranchi, furniture shifting in lalpur, house relocation in lalpur ranchi, luggage transport service lalpur";

require_once __DIR__ . '/../includes/header.php';
?>

<main class="site-main">

  <!-- Hero Section with Lead Form -->
  <section class="hero-section" style="background: linear-gradient(135deg, #0b132b 0%, #1c2541 100%); padding: 60px 0; color: #ffffff;">
    <div class="container">
      <div class="hero-grid" style="display: grid; grid-template-columns: 1.2fr 0.8fr; gap: 40px; align-items: center;">
        
        <!-- Hero Text Column -->
        <div class="hero-text">
          <span class="section-tag" style="background: rgba(245, 158, 11, 0.15); color: #f59e0b; border: 1px solid rgba(245, 158, 11, 0.4); padding: 6px 16px; border-radius: 20px; font-size: 0.85rem; font-weight: 700; text-transform: uppercase; display: inline-block; margin-bottom: 15px;">
            IBA Approved Relocation Experts in Lalpur
          </span>
          <h1 style="font-size: 2.8rem; font-weight: 800; line-height: 1.2; margin-bottom: 20px; color: #ffffff;">
            Professional <span style="color: #f59e0b;">Packers and Movers Lalpur Ranchi</span>
          </h1>
          <p style="font-size: 1.1rem; color: #cbd5e1; line-height: 1.7; margin-bottom: 25px;">
            Looking for reliable, affordable, and zero-damage <strong>packers and movers lalpur ranchi</strong>? Shree Ashirwad Packers and Movers provides top-rated household shifting, office relocation, vehicle logistics, and warehouse storage solutions across Lalpur Chowk, Circular Road, Plaza Chowk, Peace Road, and surrounding Ranchi localities.
          </p>

          <div style="display: flex; gap: 15px; flex-wrap: wrap; margin-bottom: 30px;">
            <a href="tel:<?php echo SITE_PHONE_RAW; ?>" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
              📞 Call Now: <?php echo SITE_PHONE; ?>
            </a>
            <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers%20and%20Movers,%20I%20want%20information%20about%20shifting%20services%20in%20Lalpur%20Ranchi." target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
              💬 Chat on WhatsApp
            </a>
          </div>

          <div style="display: flex; gap: 20px; font-size: 0.9rem; color: #94a3b8;">
            <span><strong style="color: #f59e0b;">2,800+</strong> Lalpur Moves</span>
            <span><strong style="color: #f59e0b;">15+ Years</strong> Experience</span>
            <span><strong style="color: #f59e0b;">100%</strong> IBA GST Bills</span>
          </div>
        </div>

        <!-- Hero Lead Form Column -->
        <div class="hero-form-card" style="background: rgba(255, 255, 255, 0.05); backdrop-filter: blur(10px); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 16px; padding: 30px; box-shadow: 0 15px 35px rgba(0,0,0,0.4);">
          <h2 style="font-size: 1.4rem; color: #ffffff; margin-bottom: 8px; font-weight: 700; text-align: center;">Get Instant Lalpur Shifting Quote</h2>
          <p style="font-size: 0.85rem; color: #94a3b8; text-align: center; margin-bottom: 20px;">Receive transparent cost estimation on WhatsApp in 2 minutes</p>

          <form action="#" method="POST" onsubmit="sendHeroWhatsAppLead(event, this);">
            <div style="margin-bottom: 14px;">
              <input type="text" name="name" class="form-control" placeholder="Your Full Name" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="margin-bottom: 14px;">
              <input type="tel" name="phone" class="form-control" placeholder="10-Digit Phone / WhatsApp Number" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 10px; margin-bottom: 14px;">
              <input type="text" name="move_from" class="form-control" placeholder="Moving From (e.g. Lalpur)" value="Lalpur Ranchi" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
              <input type="text" name="move_to" class="form-control" placeholder="Moving To (City / Locality)" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="margin-bottom: 16px;">
              <textarea name="message" class="form-control" rows="2" placeholder="Shifting Items (e.g. 2BHK Home, Bike, Office Desks)" style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;"></textarea>
            </div>
            <button type="submit" class="btn btn-primary" style="width: 100%; padding: 14px; font-weight: 700; font-size: 1rem; border-radius: 8px;">
              Get Quote on WhatsApp
            </button>
          </form>
        </div>

      </div>
    </div>
  </section>

  <!-- Section 2: Trust Counter & Live Achievements -->
  <section class="stats-section" style="padding: 50px 0; background: #070d1e; border-bottom: 1px solid rgba(245, 158, 11, 0.2);">
    <div class="container">
      <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 20px; text-align: center;">
        <div style="padding: 20px; background: rgba(23, 42, 84, 0.5); border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">2,800+</div>
          <div style="font-size: 0.9rem; color: #cbd5e1; margin-top: 5px;">Lalpur Local Relocations</div>
        </div>
        <div style="padding: 20px; background: rgba(23, 42, 84, 0.5); border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">15+</div>
          <div style="font-size: 0.9rem; color: #cbd5e1; margin-top: 5px;">Years Operational Excellence</div>
        </div>
        <div style="padding: 20px; background: rgba(23, 42, 84, 0.5); border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">100%</div>
          <div style="font-size: 0.9rem; color: #cbd5e1; margin-top: 5px;">Safe 7-Layer Protection</div>
        </div>
        <div style="padding: 20px; background: rgba(23, 42, 84, 0.5); border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">IBA Approved</div>
          <div style="font-size: 0.9rem; color: #cbd5e1; margin-top: 5px;">GST Invoice &amp; Claims</div>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 3: 6-Card Grid (3x2 Layout) - Localized Relocation Overview -->
  <section style="padding: 70px 0; background: #0b132b; color: #e2e8f0; line-height: 1.8;">
    <div class="container">
      
      <div style="max-width: 950px; margin: 0 auto;">
        <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Lalpur Local Relocation Guide</span>
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin: 10px 0 20px 0;">
          Why Hire Premier <span style="color: #f59e0b;">Packers and Movers in Lalpur Ranchi</span>?
        </h2>

        <!-- 6 Cards Grid (3x2 Layout) -->
        <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px; margin: 30px 0;">
          
          <!-- Card 1 -->
          <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px; box-shadow: 0 10px 25px rgba(0,0,0,0.3);">
            <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;">📍</div>
            <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">Lalpur Hub Expertise</h3>
            <p style="font-size: 0.9rem; color: #cbd5e1; line-height: 1.6; margin: 0;">
              Lalpur is Ranchi's prime educational and commercial epicenter. Navigating busy lanes around Circular Road and Plaza Chowk demands skilled local <strong>packers and movers lalpur ranchi</strong> with specialized packing crews.
            </p>
          </div>

          <!-- Card 2 -->
          <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px; box-shadow: 0 10px 25px rgba(0,0,0,0.3);">
            <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;">🏙️</div>
            <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">Apartment &amp; High-Rise Shifting</h3>
            <p style="font-size: 0.9rem; color: #cbd5e1; line-height: 1.6; margin: 0;">
              From multi-story apartment complexes to narrow residential streets near Peace Road, our team utilizes heavy hoist ropes, floor protectors, and compact shifting vehicles for safe handling.
            </p>
          </div>

          <!-- Card 3 -->
          <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px; box-shadow: 0 10px 25px rgba(0,0,0,0.3);">
            <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;">🛡️</div>
            <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">IBA Approved Bills</h3>
            <p style="font-size: 0.9rem; color: #cbd5e1; line-height: 1.6; margin: 0;">
              We issue 100% genuine IBA-approved GST invoices and Lorry Receipts for Bank, PSU, Railways, and Defense officers residing in Lalpur requiring relocation allowance claims.
            </p>
          </div>

          <!-- Card 4 -->
          <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px; box-shadow: 0 10px 25px rgba(0,0,0,0.3);">
            <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;">🚚</div>
            <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">GPS Enclosed Fleet</h3>
            <p style="font-size: 0.9rem; color: #cbd5e1; line-height: 1.6; margin: 0;">
              Our weatherproof enclosed container trucks operate continuously between Lalpur Chowk and outer expressways, equipped with satellite GPS tracking and padded interiors for maximum safety.
            </p>
          </div>

          <!-- Card 5 -->
          <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px; box-shadow: 0 10px 25px rgba(0,0,0,0.3);">
            <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;">📦</div>
            <h3 style="font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;">7-Layer Material Wrap</h3>
            <p style="font-size: 0.9rem; color: #cbd5e1; line-height: 1.6; margin: 0;">
              Every household item is wrapped with bubble wrap, corrugated sheets, foam guards, stretch film, and custom wooden crates to prevent scratches or transit damage.
            </p>
          </div>

          <!-- Card 6 -->
          <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px; box-shadow: 0 10px 25px rgba(0,0,0,0.3);">
            <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;">👨‍🔧</div>
            <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">Full Unpacking &amp; Re-Assembly</h3>
            <p style="font-size: 0.9rem; color: #cbd5e1; line-height: 1.6; margin: 0;">
              Our trained move staff dismantles double beds, dining tables, and modular furniture at your Lalpur address and reassembles everything neatly at your destination.
            </p>
          </div>

        </div>

        <!-- Highlight Summary Box -->
        <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border-left: 4px solid #f59e0b; padding: 25px; border-radius: 8px; margin: 35px 0;">
          <h3 style="color: #ffffff; font-size: 1.25rem; font-weight: 700; margin-bottom: 12px;">Why Choose Shree Ashirwad Packers in Lalpur?</h3>
          <ul style="list-style: none; padding: 0; margin: 0; display: grid; grid-template-columns: 1fr 1fr; gap: 12px; color: #cbd5e1;">
            <li>✔ <strong>Punctual Doorstep Arrival</strong> at Circular Road &amp; Plaza Chowk.</li>
            <li>✔ <strong>Transparent Costing</strong> with zero unexpected charges on move day.</li>
            <li>✔ <strong>Specialized Office Moving</strong> for coaching centers &amp; commercial hubs.</li>
            <li>✔ <strong>Dedicated Vehicle Carriers</strong> for safe bike and car transport.</li>
          </ul>
        </div>

      </div>

    </div>
  </section>

  <!-- Section 4: Detailed Services Breakdown -->
  <section style="padding: 70px 0; background: linear-gradient(180deg, #0b132b 0%, #16203b 100%); color: #ffffff;">
    <div class="container">
      
      <div class="section-header text-center" style="margin-bottom: 50px;">
        <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Our Specialized Offerings</span>
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin-top: 10px;">
          Comprehensive Shifting Solutions by Top <span style="color: #f59e0b;">Packers and Movers Lalpur Ranchi</span>
        </h2>
        <p style="color: #94a3b8; max-width: 750px; margin: 10px auto 0 auto; font-size: 1rem;">
          We deliver tailored relocation services across Lalpur Chowk, Circular Road, and connected nationwide routes.
        </p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 30px;">
        
        <!-- Service Box 1 -->
        <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 28px;">
          <h3 style="font-size: 1.3rem; color: #f59e0b; font-weight: 700; margin-bottom: 14px;">1. Household Shifting in Lalpur Ranchi</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; line-height: 1.7;">
            Our primary expertise is <strong>household shifting in lalpur ranchi</strong> and <strong>home relocation services lalpur ranchi</strong>. From packing delicate crockery and LED televisions to dismantling heavy wooden wardrobes, our move crews handle every item with extreme care.
          </p>
        </div>

        <!-- Service Box 2 -->
        <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 28px;">
          <h3 style="font-size: 1.3rem; color: #f59e0b; font-weight: 700; margin-bottom: 14px;">2. Office Shifting in Lalpur Ranchi</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; line-height: 1.7;">
            Lalpur is home to numerous commercial offices, coaching institutes, and IT firms. Our <strong>office shifting in lalpur ranchi</strong> team operates during off-peak hours to pack computer systems, servers, furniture, and archives using tagged color-coded boxes.
          </p>
        </div>

        <!-- Service Box 3 -->
        <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 28px;">
          <h3 style="font-size: 1.3rem; color: #f59e0b; font-weight: 700; margin-bottom: 14px;">3. Bike Transport Lalpur Ranchi</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; line-height: 1.7;">
            Need to ship your motorcycle or scooter safely? Our <strong>bike transport lalpur ranchi</strong> service applies paddy straw padding, corrugated sheeting, and high-tensile stretch film to guard body panels and mirrors during transit.
          </p>
        </div>

        <!-- Service Box 4 -->
        <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 28px;">
          <h3 style="font-size: 1.3rem; color: #f59e0b; font-weight: 700; margin-bottom: 14px;">4. Car Transport Service Lalpur Ranchi</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; line-height: 1.7;">
            Our <strong>car transport service lalpur ranchi</strong> utilizes specialized enclosed hydraulic car carrier trailers. We ensure safe doorstep pickup from Lalpur and door delivery across all major Indian cities with zero mileage addition.
          </p>
        </div>

        <!-- Service Box 5 -->
        <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 28px;">
          <h3 style="font-size: 1.3rem; color: #f59e0b; font-weight: 700; margin-bottom: 14px;">5. Wooden Crate &amp; Heavy Furniture Packing</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; line-height: 1.7;">
            High-value items like 75-inch Smart TVs, glass tabletops, chandeliers, and marble mandirs demand custom wooden crate framing. We build rigid protective crates on-site in Lalpur to shield delicate items from road vibration.
          </p>
        </div>

        <!-- Service Box 6 -->
        <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 28px;">
          <h3 style="font-size: 1.3rem; color: #f59e0b; font-weight: 700; margin-bottom: 14px;">6. Warehouse &amp; Storage Lalpur Ranchi</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; line-height: 1.7;">
            If you need short-term or long-term storage while waiting for your new flat or office key in Lalpur, our <strong>warehouse storage lalpur ranchi</strong> facilities provide 24/7 CCTV security, fire protection, and pest-free storage lockers.
          </p>
        </div>

      </div>

    </div>
  </section>

  <!-- Section 5: The 7-Layer Packaging Standard -->
  <section style="padding: 70px 0; background: #0b132b; color: #e2e8f0; border-top: 1px solid rgba(245, 158, 11, 0.15);">
    <div class="container" style="max-width: 900px;">
      
      <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Safety Protocol</span>
      <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin: 10px 0 20px 0;">
        7-Layer Material Protection for <span style="color: #f59e0b;">Safe Packing and Moving Lalpur</span>
      </h2>

      <p style="font-size: 1.05rem; color: #cbd5e1; margin-bottom: 25px; line-height: 1.8;">
        The secret to zero-damage shifting lies in selecting high-grade packaging materials and adhering to disciplined wrapping protocols. As leaders in <strong>safe packing and moving lalpur</strong>, we wrap every item meticulously:
      </p>

      <div style="display: grid; grid-template-columns: 1fr; gap: 16px; margin-bottom: 35px;">
        <div style="background: rgba(23, 42, 84, 0.6); padding: 18px 22px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #ffffff; font-size: 1.1rem; margin-bottom: 6px;">Layer 1: Moisture-Proof Stretch Film</h4>
          <p style="font-size: 0.92rem; color: #94a3b8; margin: 0;">Seals furniture surfaces against moisture, dust, and rain during handling in Lalpur lanes.</p>
        </div>

        <div style="background: rgba(23, 42, 84, 0.6); padding: 18px 22px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #ffffff; font-size: 1.1rem; margin-bottom: 6px;">Layer 2: High-Density Air Bubble Wrap</h4>
          <p style="font-size: 0.92rem; color: #94a3b8; margin: 0;">Absorbs severe road shock, impact, and vibration for glassware, electronics, and polished wood.</p>
        </div>

        <div style="background: rgba(23, 42, 84, 0.6); padding: 18px 22px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #ffffff; font-size: 1.1rem; margin-bottom: 6px;">Layer 3: Heavy Corrugated Board Sheeting</h4>
          <p style="font-size: 0.92rem; color: #94a3b8; margin: 0;">Forms a rigid outer protective barrier around refrigerators, washing machines, and sofas.</p>
        </div>

        <div style="background: rgba(23, 42, 84, 0.6); padding: 18px 22px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #ffffff; font-size: 1.1rem; margin-bottom: 6px;">Layer 4: High-Density Foam Corner Guards</h4>
          <p style="font-size: 0.92rem; color: #94a3b8; margin: 0;">Shields sharp wooden and glass corners from chipping during staircases or elevator transit.</p>
        </div>

        <div style="background: rgba(23, 42, 84, 0.6); padding: 18px 22px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #ffffff; font-size: 1.1rem; margin-bottom: 6px;">Layer 5: On-Site Wooden Crate Framing</h4>
          <p style="font-size: 0.92rem; color: #94a3b8; margin: 0;">Custom heavy wooden crates for 65+ inch televisions, mirrors, marble, and artwork.</p>
        </div>

        <div style="background: rgba(23, 42, 84, 0.6); padding: 18px 22px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #ffffff; font-size: 1.1rem; margin-bottom: 6px;">Layer 6: Branded Tamper-Evident Tape &amp; Tagging</h4>
          <p style="font-size: 0.92rem; color: #94a3b8; margin: 0;">Clear room-wise labeling and secure sealing tape for fast inventory tracking during unboxing.</p>
        </div>

        <div style="background: rgba(23, 42, 84, 0.6); padding: 18px 22px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #ffffff; font-size: 1.1rem; margin-bottom: 6px;">Layer 7: Internal Truck Wall Belt Tiedowns</h4>
          <p style="font-size: 0.92rem; color: #94a3b8; margin: 0;">Anchors packed goods firmly inside enclosed container trucks to prevent movement on highways.</p>
        </div>
      </div>

    </div>
  </section>

  <!-- Section 6: Lalpur Neighborhood & Connected Localities (Internal Link Grid 1 - 4 Links) -->
  <section style="padding: 70px 0; background: #070d1e; color: #ffffff;">
    <div class="container" style="max-width: 900px;">
      
      <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Hyper-Local Network</span>
      <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin: 10px 0 20px 0;">
        Serving Lalpur Chowk &amp; Surrounding <span style="color: #f59e0b;">Ranchi Localities</span>
      </h2>

      <p style="font-size: 1.05rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 20px;">
        As premier <strong>local packers and movers lalpur ranchi</strong>, our logistics network spans across all major residential pockets near Circular Road, Plaza Chowk, HB Road, Peace Road, and Nu-Tech Complex. Our move crews understand local traffic regulations and narrow building entrances, enabling smooth <strong>house relocation in lalpur ranchi</strong>.
      </p>

      <!-- Internal Link Grid 1 (4 Contextual Links) -->
      <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 16px; margin-bottom: 30px;">
        <div style="background: #101c40; padding: 18px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #ffffff; font-size: 1.1rem; margin-bottom: 8px;">Main Ranchi City Headquarters</h4>
          <p style="font-size: 0.9rem; color: #94a3b8; margin-bottom: 10px;">Explore primary shifting services across all capital sectors in Ranchi.</p>
          <a href="<?php echo SITE_URL; ?>pages/packers-and-movers-in-ranchi.php" style="color: #f59e0b; text-decoration: underline; font-weight: 600; font-size: 0.9rem;">
            Packers and Movers in Ranchi Main Page →
          </a>
        </div>

        <div style="background: #101c40; padding: 18px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #ffffff; font-size: 1.1rem; margin-bottom: 8px;">Harmu &amp; Housing Board Sector</h4>
          <p style="font-size: 0.9rem; color: #94a3b8; margin-bottom: 10px;">Direct shifting connectivity between Lalpur and Harmu Colony.</p>
          <a href="<?php echo SITE_URL; ?>pages/packers-and-movers-harmu-ranchi.php" style="color: #f59e0b; text-decoration: underline; font-weight: 600; font-size: 0.9rem;">
            Explore Packers and Movers Harmu Ranchi →
          </a>
        </div>

        <div style="background: #101c40; padding: 18px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #ffffff; font-size: 1.1rem; margin-bottom: 8px;">Kanke Road Residential Belt</h4>
          <p style="font-size: 0.9rem; color: #94a3b8; margin-bottom: 10px;">Luxury apartment and villa relocation near Kanke Road.</p>
          <a href="<?php echo SITE_URL; ?>pages/packers-and-movers-kanke-road-ranchi.php" style="color: #f59e0b; text-decoration: underline; font-weight: 600; font-size: 0.9rem;">
            Explore Packers and Movers Kanke Road Ranchi →
          </a>
        </div>

        <div style="background: #101c40; padding: 18px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #ffffff; font-size: 1.1rem; margin-bottom: 8px;">Ratu Road Commercial Sector</h4>
          <p style="font-size: 0.9rem; color: #94a3b8; margin-bottom: 10px;">Fast local relocation linking Lalpur to Ratu Road &amp; Pandra Market.</p>
          <a href="<?php echo SITE_URL; ?>pages/packers-and-movers-ratu-road-ranchi.php" style="color: #f59e0b; text-decoration: underline; font-weight: 600; font-size: 0.9rem;">
            Explore Packers and Movers Ratu Road Ranchi →
          </a>
        </div>
      </div>

    </div>
  </section>

  <!-- Section 7: Intercity Express Routes from Lalpur Ranchi (Internal Link Grid 2 - 4 Links) -->
  <section style="padding: 70px 0; background: #0b132b; color: #ffffff;">
    <div class="container" style="max-width: 900px;">
      
      <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Long-Distance Express Logistics</span>
      <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin: 10px 0 20px 0;">
        Intercity Relocation from <span style="color: #f59e0b;">Lalpur Ranchi</span> to India
      </h2>

      <p style="font-size: 1.05rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 25px;">
        Relocating from Lalpur to major industrial hubs across Jharkhand or neighboring states is made effortless with our express container trucks operating via NH-33, NH-19, and GT Road:
      </p>

      <!-- Internal Link Grid 2 (4 Contextual Links) -->
      <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 16px; margin-bottom: 30px;">
        <div style="background: #172a54; padding: 18px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #ffffff; font-size: 1.1rem; margin-bottom: 8px;">Lalpur to Jamshedpur Route</h4>
          <p style="font-size: 0.9rem; color: #94a3b8; margin-bottom: 10px;">Daily container trips via NH-33 linking Lalpur Ranchi to Steel City Jamshedpur.</p>
          <a href="<?php echo SITE_URL; ?>pages/packers-and-movers-ranchi-to-jamshedpur.php" style="color: #f59e0b; text-decoration: underline; font-weight: 600; font-size: 0.9rem;">
            Ranchi to Jamshedpur Shifting Services →
          </a>
        </div>

        <div style="background: #172a54; padding: 18px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #ffffff; font-size: 1.1rem; margin-bottom: 8px;">Lalpur to Dhanbad Corridor</h4>
          <p style="font-size: 0.9rem; color: #94a3b8; margin-bottom: 10px;">Punctual household &amp; commercial moving from Lalpur to Dhanbad &amp; Bokaro.</p>
          <a href="<?php echo SITE_URL; ?>pages/packers-and-movers-ranchi-to-dhanbad.php" style="color: #f59e0b; text-decoration: underline; font-weight: 600; font-size: 0.9rem;">
            Ranchi to Dhanbad Shifting Services →
          </a>
        </div>

        <div style="background: #172a54; padding: 18px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #ffffff; font-size: 1.1rem; margin-bottom: 8px;">Lalpur to Kolkata Express</h4>
          <p style="font-size: 0.9rem; color: #94a3b8; margin-bottom: 10px;">Direct interstate moving linking Lalpur Ranchi to Kolkata &amp; Howrah via GT Road.</p>
          <a href="<?php echo SITE_URL; ?>pages/packers-and-movers-ranchi-to-kolkata.php" style="color: #f59e0b; text-decoration: underline; font-weight: 600; font-size: 0.9rem;">
            Ranchi to Kolkata Shifting Services →
          </a>
        </div>

        <div style="background: #172a54; padding: 18px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #ffffff; font-size: 1.1rem; margin-bottom: 8px;">Lalpur to Patna Corridor</h4>
          <p style="font-size: 0.9rem; color: #94a3b8; margin-bottom: 10px;">Interstate relocation connecting Lalpur Ranchi to Patna, Bihar via NH-22.</p>
          <a href="<?php echo SITE_URL; ?>pages/packers-and-movers-ranchi-to-patna.php" style="color: #f59e0b; text-decoration: underline; font-weight: 600; font-size: 0.9rem;">
            Ranchi to Patna Shifting Services →
          </a>
        </div>
      </div>

    </div>
  </section>

  <!-- Section 8: Corporate Claims & IBA Approved Billing Standards -->
  <section style="padding: 70px 0; background: #070d1e; color: #ffffff;">
    <div class="container" style="max-width: 900px;">
      
      <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Corporate &amp; Defense Documentation</span>
      <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin: 10px 0 20px 0;">
        IBA Approved GST Billing Compliance in Lalpur Ranchi
      </h2>

      <p style="font-size: 1.05rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 20px;">
        Bank officers, central government personnel, defense employees, and corporate professionals in Lalpur Ranchi require audit-compliant paperwork for job transfer reimbursement. As established <strong>iba approved packers and movers ranchi</strong>, we provide a complete claim-ready bill set:
      </p>

      <div style="background: #101c40; border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 12px; padding: 25px; margin-bottom: 30px;">
        <h4 style="color: #f59e0b; font-size: 1.15rem; margin-bottom: 12px; font-weight: 700;">Complete Relocation Claim Document Set:</h4>
        <ol style="margin: 0; padding-left: 20px; color: #cbd5e1; line-height: 1.8;">
          <li><strong>Official GST Consignment Invoice</strong> detailing itemized packing &amp; freight costs.</li>
          <li><strong>Consignment Lorry Receipt (LR Copy)</strong> with vehicle registration stamp.</li>
          <li><strong>Itemized Goods Inventory Packing List</strong> with room-wise tag numbers.</li>
          <li><strong>IBA Approved Stamp &amp; Registration Verification</strong> on official letterhead.</li>
          <li><strong>Transit Insurance Policy Document</strong> issued by authorized insurance providers.</li>
          <li><strong>Stamped Payment Receipt</strong> for company HR &amp; audit submission.</li>
        </ol>
      </div>

    </div>
  </section>

  <!-- Section 9: Step-by-Step Relocation Execution Process -->
  <section style="padding: 70px 0; background: #0b132b; color: #ffffff; border-top: 1px solid rgba(245, 158, 11, 0.15);">
    <div class="container" style="max-width: 900px;">
      
      <div class="section-header text-center" style="margin-bottom: 45px;">
        <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Structured Workflow</span>
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin-top: 10px;">
          How Our Shifting Execution Works in <span style="color: #f59e0b;">Lalpur Ranchi</span>
        </h2>
        <p style="color: #94a3b8; font-size: 1rem;">From inquiry to final room setup in Lalpur, we manage every step.</p>
      </div>

      <div style="display: grid; grid-template-columns: 1fr; gap: 20px;">
        
        <div style="display: flex; gap: 20px; background: #172a54; padding: 24px; border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <div style="font-size: 2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">01</div>
          <div>
            <h3 style="font-size: 1.2rem; color: #ffffff; margin-bottom: 6px;">Initial Phone / WhatsApp Survey</h3>
            <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.6;">
              Call our <strong>movers and packers lalpur contact number</strong> at <strong><?php echo SITE_PHONE; ?></strong> or submit our WhatsApp form. Our move coordinator evaluates your goods volume, floor levels, and destination route.
            </p>
          </div>
        </div>

        <div style="display: flex; gap: 20px; background: #172a54; padding: 24px; border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <div style="font-size: 2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">02</div>
          <div>
            <h3 style="font-size: 1.2rem; color: #ffffff; margin-bottom: 6px;">Transparent Written Cost Estimation</h3>
            <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.6;">
              We outline all <strong>packers and movers ranchi charges</strong> in a detailed written quote. No hidden surcharges or unexpected move day costs.
            </p>
          </div>
        </div>

        <div style="display: flex; gap: 20px; background: #172a54; padding: 24px; border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <div style="font-size: 2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">03</div>
          <div>
            <h3 style="font-size: 1.2rem; color: #ffffff; margin-bottom: 6px;">On-Site 7-Layer Packaging at Lalpur</h3>
            <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.6;">
              On move day, our uniformed crew arrives punctually with heavy bubble wrap, foam sheets, corrugated boxes, and wooden crates to wrap every single item systematically.
            </p>
          </div>
        </div>

        <div style="display: flex; gap: 20px; background: #172a54; padding: 24px; border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <div style="font-size: 2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">04</div>
          <div>
            <h3 style="font-size: 1.2rem; color: #ffffff; margin-bottom: 6px;">Enclosed Container Loading &amp; Tracking</h3>
            <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.6;">
              Goods are loaded into dedicated weather-proof container vehicles using nylon belts. You receive live GPS tracking updates until the truck reaches your destination.
            </p>
          </div>
        </div>

        <div style="display: flex; gap: 20px; background: #172a54; padding: 24px; border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <div style="font-size: 2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">05</div>
          <div>
            <h3 style="font-size: 1.2rem; color: #ffffff; margin-bottom: 6px;">Unloading, Unpacking &amp; Re-Assembly</h3>
            <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.6;">
              At your new home, our crew unloads, unboxes, re-assembles beds and tables, and places furniture in designated rooms according to your layout preferences.
            </p>
          </div>
        </div>

      </div>

    </div>
  </section>

  <!-- Section 10: Frequently Asked Questions (10 Detailed SEO FAQs) -->
  <section style="padding: 70px 0; background: #070d1e; color: #ffffff;">
    <div class="container" style="max-width: 900px;">
      
      <div class="section-header text-center" style="margin-bottom: 45px;">
        <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Got Questions?</span>
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin-top: 10px;">
          Frequently Asked Questions About <span style="color: #f59e0b;">Packers and Movers Lalpur Ranchi</span>
        </h2>
      </div>

      <div style="display: flex; flex-direction: column; gap: 16px;">
        
        <div style="background: #101c40; padding: 20px 24px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Q1: How are packers and movers lalpur ranchi charges calculated?</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.7;">
            Relocation charges are calculated based on total goods volume, packing material requirements, floor level at Circular Road or Plaza Chowk, lift availability, and travel distance to your new location.
          </p>
        </div>

        <div style="background: #101c40; padding: 20px 24px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Q2: Do you provide IBA approved bills for corporate claims in Lalpur?</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.7;">
            Yes! Shree Ashirwad Packers and Movers provides 100% compliant IBA-approved bills, GST consignment invoices, Lorry Receipts (LR), and itemized packing lists accepted by all government, PSU, defense, railway, and private corporate HR departments.
          </p>
        </div>

        <div style="background: #101c40; padding: 20px 24px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Q3: How early should I book household shifting in Lalpur Ranchi?</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.7;">
            For local household shifting within Lalpur or Ranchi city, booking 2 to 3 days in advance is recommended. For intercity moves, we advise booking 4 to 7 days in advance to reserve dedicated container trucks.
          </p>
        </div>

        <div style="background: #101c40; padding: 20px 24px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Q4: How do you protect fragile items during shifting from Lalpur?</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.7;">
            We apply multi-layer protective packaging consisting of stretch film, high-density air-bubble wrap, foam corner guards, quilted blankets, and custom-built wooden crates to absorb transit shocks.
          </p>
        </div>

        <div style="background: #101c40; padding: 20px 24px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Q5: Can I track my moving truck during transit from Lalpur Ranchi?</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.7;">
            Yes, all our enclosed moving container trucks are outfitted with real-time satellite GPS tracking. You receive continuous status updates from your move supervisor.
          </p>
        </div>

        <div style="background: #101c40; padding: 20px 24px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Q6: Do you transport bikes and cars from Lalpur Chowk Ranchi?</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.7;">
            Yes, we operate specialized hydraulic enclosed car carriers and wheel-locked bike containers with paddy-straw padded wrapping for scratch-free vehicle logistics across India.
          </p>
        </div>

        <div style="background: #101c40; padding: 20px 24px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Q7: Is transit insurance available for relocation from Lalpur?</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.7;">
            We offer comprehensive transit insurance coverage that protects your shipment against unforeseen environmental factors or road accidents during long-distance transit.
          </p>
        </div>

        <div style="background: #101c40; padding: 20px 24px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Q8: Do your packers dismantle beds and wardrobes in Lalpur flats?</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.7;">
            Yes, our trained carpenters and move staff dismantle double beds, wardrobes, modular desks, and dining tables at origin, and reassemble them at destination.
          </p>
        </div>

        <div style="background: #101c40; padding: 20px 24px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Q9: Are there any hidden costs added on move day in Lalpur?</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.7;">
            No! We maintain a strict policy of transparent billing. All cost factors are discussed and fixed prior to move day with zero hidden surcharges.
          </p>
        </div>

        <div style="background: #101c40; padding: 20px 24px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Q10: What is the contact number for packers and movers in lalpur ranchi?</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.7;">
            You can call or WhatsApp our official Lalpur Ranchi Helpline at <strong><?php echo SITE_PHONE; ?></strong> (Raw: <strong><?php echo SITE_PHONE_RAW; ?></strong>) or email us at <strong><?php echo SITE_EMAIL; ?></strong> for immediate assistance.
          </p>
        </div>

      </div>

    </div>
  </section>

  
  <!-- Section: Google Map & Location Details -->
  <section style="padding: 50px 0; background: #070d1e; color: #ffffff; border-top: 1px solid rgba(245, 158, 11, 0.2);">
    <div class="container" style="max-width: 900px;">
      <div style="text-align: center; margin-bottom: 25px;">
        <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Service Location Map</span>
        <h2 style="font-size: 2rem; font-weight: 800; color: #ffffff; margin-top: 10px;">
          Find Our Service Network in <span style="color: #f59e0b;">Ranchi</span>
        </h2>
        <p style="color: #cbd5e1; font-size: 0.95rem;">Visit our head office at Anandpuri Chowk, Harmu Road or contact our local Ranchi team for fast shifting.</p>
      </div>
      <div style="background: rgba(23, 42, 84, 0.5); padding: 12px; border-radius: 16px; border: 1.5px solid rgba(245, 158, 11, 0.3); box-shadow: 0 10px 30px rgba(0,0,0,0.4);">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3662.628929729864!2d85.3124311!3d23.3654497!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f4e10116ddbf0d%3A0x8691aeef36f01174!2sShree%20Ashirwad%20Packers%20and%20Movers!5e0!3m2!1sen!2sin!4v1700000000000!5m2!1sen!2sin" width="100%" height="350" style="border:0; border-radius: 12px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>
  </section>

  <!-- Section 11: Call To Action Banner -->
  <section style="padding: 70px 0; background: linear-gradient(135deg, #172a54 0%, #0b132b 100%); border-top: 1.5px solid rgba(245, 158, 11, 0.4); color: #ffffff;">
    <div class="container" style="max-width: 900px; text-align: center;">
      
      <span class="section-tag" style="background: rgba(245, 158, 11, 0.2); color: #f59e0b; padding: 6px 16px; border-radius: 20px; font-size: 0.85rem; font-weight: 700; text-transform: uppercase;">
        Book Lalpur's Top Rated Movers
      </span>

      <h2 style="font-size: 2.3rem; font-weight: 800; margin: 15px 0 15px 0; color: #ffffff;">
        Ready to Move with <span style="color: #f59e0b;">Packers and Movers Lalpur Ranchi</span>?
      </h2>

      <p style="font-size: 1.05rem; color: #cbd5e1; max-width: 750px; margin: 0 auto 30px auto; line-height: 1.7;">
        Contact our Ranchi Head Office at Anandpuri Chowk, Harmu Road today for a quick custom estimate and enjoy smooth, stress-free household or office shifting in Lalpur.
      </p>

      <div style="display: flex; gap: 15px; justify-content: center; flex-wrap: wrap; margin-bottom: 25px;">
        <a href="tel:<?php echo SITE_PHONE_RAW; ?>" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 30px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1.05rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
          📞 Call Now: <?php echo SITE_PHONE; ?>
        </a>
        <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers%20and%20Movers,%20I%20want%20a%20quote%20for%20relocation%20in%20Lalpur%20Ranchi." target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 30px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1.05rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
          💬 Chat on WhatsApp
        </a>
        <a href="<?php echo SITE_URL; ?>pages/contact.php" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 30px; background: linear-gradient(135deg, #1e293b 0%, #0f172a 100%); border: 1.5px solid #f59e0b; color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1.05rem; text-decoration: none; box-shadow: 0 4px 15px rgba(245, 158, 11, 0.2);">
          📍 Contact Office
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
  var extraMsg = form.querySelector('[name="message"]').value;
  
  var message = "Hello Shree Ashirwad Packers & Movers,\n\nI would like to request a Shifting Quote:\n- Name: " + name + "\n- Phone: " + phone + "\n- Moving From: " + moveFrom + "\n- Moving To: " + moveTo;
  
  if (extraMsg && extraMsg.trim() !== '') {
    message += "\n- Details: " + extraMsg;
  }
  
  var whatsappUrl = "https://api.whatsapp.com/send?phone=918409531615&text=" + encodeURIComponent(message);
  window.location.href = whatsappUrl;
}
</script>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
