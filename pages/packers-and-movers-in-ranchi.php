<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "Packers and Movers in Ranchi | 8409531615";
$page_desc = "Packers and Movers in Ranchi offering safe, reliable, and affordable packing, moving, home relocation, and vehicle transportation services. Call (+91) 8409531615.";
$page_keywords = "packers and movers in ranchi, packers and movers ranchi, best packers and movers in ranchi, cheap packers and movers in ranchi, top packers and movers in ranchi, household shifting in ranchi, home relocation services ranchi, office shifting services ranchi, car transport in ranchi, bike transport ranchi, local packers and movers ranchi, intercity movers in ranchi, movers and packers ranchi contact number, packers and movers ranchi charges, house relocation in ranchi, luggage transport service ranchi, relocation services ranchi, warehouse and storage in ranchi, safe packing and moving ranchi, packers and movers in jharkhand";

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
            IBA Approved &amp; ISO Certified Relocation Experts
          </span>
          <h1 style="font-size: 2.8rem; font-weight: 800; line-height: 1.2; margin-bottom: 20px; color: #ffffff;">
            Professional <span style="color: #f59e0b;">Packers and Movers in Ranchi</span>
          </h1>
          <p style="font-size: 1.1rem; color: #cbd5e1; line-height: 1.7; margin-bottom: 25px;">
            Are you searching for trusted, reliable, and verified <strong>packers and movers in ranchi</strong>? Shree Ashirwad Packers and Movers is Jharkhand's premier shifting company providing zero-damage household relocation, corporate office shifting, car carrier transport, bike logistics, and secure warehouse storage across Ranchi and India.
          </p>

          <div style="display: flex; gap: 15px; flex-wrap: wrap; margin-bottom: 30px;">
            <a href="tel:<?php echo SITE_PHONE_RAW; ?>" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
              📞 Call Now: <?php echo SITE_PHONE; ?>
            </a>
            <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers%20and%20Movers,%20I%20want%20information%20about%20your%20shifting%20services." target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
              💬 Chat on WhatsApp
            </a>
          </div>

          <div style="display: flex; gap: 20px; font-size: 0.9rem; color: #94a3b8;">
            <span><strong style="color: #f59e0b;">12,500+</strong> Homes Shifted</span>
            <span><strong style="color: #f59e0b;">15+ Years</strong> Experience</span>
            <span><strong style="color: #f59e0b;">100%</strong> IBA GST Invoice</span>
          </div>
        </div>

        <!-- Hero Lead Form Column -->
        <div class="hero-form-card" style="background: rgba(255, 255, 255, 0.05); backdrop-filter: blur(10px); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 16px; padding: 30px; box-shadow: 0 15px 35px rgba(0,0,0,0.4);">
          <h2 style="font-size: 1.4rem; color: #ffffff; margin-bottom: 8px; font-weight: 700; text-align: center;">Get Instant Shifting Quote</h2>
          <p style="font-size: 0.85rem; color: #94a3b8; text-align: center; margin-bottom: 20px;">Receive transparent cost estimation on WhatsApp in 2 minutes</p>

          <form action="#" method="POST" onsubmit="sendHeroWhatsAppLead(event, this);">
            <div style="margin-bottom: 14px;">
              <input type="text" name="name" class="form-control" placeholder="Your Full Name" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="margin-bottom: 14px;">
              <input type="tel" name="phone" class="form-control" placeholder="10-Digit Phone / WhatsApp Number" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 10px; margin-bottom: 14px;">
              <input type="text" name="move_from" class="form-control" placeholder="Moving From (e.g. Ranchi)" value="Ranchi" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
              <input type="text" name="move_to" class="form-control" placeholder="Moving To (City)" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="margin-bottom: 16px;">
              <textarea name="message" class="form-control" rows="2" placeholder="Shifting Requirements (e.g. 2BHK Home, Bike, Car)" style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;"></textarea>
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
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">15+</div>
          <div style="font-size: 0.9rem; color: #cbd5e1; margin-top: 5px;">Years Operational Excellence</div>
        </div>
        <div style="padding: 20px; background: rgba(23, 42, 84, 0.5); border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">12,500+</div>
          <div style="font-size: 0.9rem; color: #cbd5e1; margin-top: 5px;">Satisfied Home Relocations</div>
        </div>
        <div style="padding: 20px; background: rgba(23, 42, 84, 0.5); border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">50+</div>
          <div style="font-size: 0.9rem; color: #cbd5e1; margin-top: 5px;">Weatherproof Moving Fleet</div>
        </div>
        <div style="padding: 20px; background: rgba(23, 42, 84, 0.5); border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">100%</div>
          <div style="font-size: 0.9rem; color: #cbd5e1; margin-top: 5px;">Claim-Ready IBA Documentation</div>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 3: Deep Comprehensive Content Section (Part 1 - Overview & Need) -->
  <section style="padding: 70px 0; background: #0b132b; color: #e2e8f0; line-height: 1.8;">
    <div class="container">
      
      <div style="max-width: 900px; margin: 0 auto;">
        <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Complete Relocation Guide</span>
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin: 10px 0 20px 0;">
          Why Choosing the <span style="color: #f59e0b;">Best Packers and Movers in Ranchi</span> Matters for Your Move
        </h2>

        <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px; margin: 30px 0;">
          
          <!-- Card 1 -->
          <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px; box-shadow: 0 10px 25px rgba(0,0,0,0.3);">
            <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;">📍</div>
            <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">Capital Shifting Logistics</h3>
            <p style="font-size: 0.9rem; color: #cbd5e1; line-height: 1.6; margin: 0;">
              Relocating in Ranchi requires careful planning. From fragile glassware to navigating city traffic, hiring verified <strong>packers and movers in ranchi</strong> guarantees zero-damage, stress-free household relocation.
            </p>
          </div>

          <!-- Card 2 -->
          <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px; box-shadow: 0 10px 25px rgba(0,0,0,0.3);">
            <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;">🏙️</div>
            <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">Hyper-Local Network</h3>
            <p style="font-size: 0.9rem; color: #cbd5e1; line-height: 1.6; margin: 0;">
              We cover all major Ranchi sectors including Lalpur, Harmu, Kanke Road, Ratu Road, Doranda, and Morabadi. Our <strong>top packers and movers in ranchi</strong> ensure prompt doorstep arrival and quick loading.
            </p>
          </div>

          <!-- Card 3 -->
          <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px; box-shadow: 0 10px 25px rgba(0,0,0,0.3);">
            <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;">🛡️</div>
            <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">IBA Approved Claims</h3>
            <p style="font-size: 0.9rem; color: #cbd5e1; line-height: 1.6; margin: 0;">
              As an official <strong>iba approved packers and movers ranchi</strong>, we furnish 100% compliant GST consignment invoices, LR receipts, and packing lists accepted for defense and corporate transfer claims.
            </p>
          </div>

          <!-- Card 4 -->
          <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px; box-shadow: 0 10px 25px rgba(0,0,0,0.3);">
            <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;">🚚</div>
            <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">Dedicated Moving Fleet</h3>
            <p style="font-size: 0.9rem; color: #cbd5e1; line-height: 1.6; margin: 0;">
              Our company operates 50+ weatherproof container trucks with real-time GPS tracking, heavy-duty ramp loading, and internal wall tie-downs for safe long-distance transit across Jharkhand and India.
            </p>
          </div>

          <!-- Card 5 -->
          <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px; box-shadow: 0 10px 25px rgba(0,0,0,0.3);">
            <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;">📦</div>
            <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">7-Layer Safety Wrap</h3>
            <p style="font-size: 0.9rem; color: #cbd5e1; line-height: 1.6; margin: 0;">
              We shield your belongings with air-bubble film, corrugated sheets, corner foam guards, stretch wrapping, and custom wooden crates engineered to absorb heavy road shock and vibration.
            </p>
          </div>

          <!-- Card 6 -->
          <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px; box-shadow: 0 10px 25px rgba(0,0,0,0.3);">
            <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;">👨‍🔧</div>
            <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">Trained Move Supervisors</h3>
            <p style="font-size: 0.9rem; color: #cbd5e1; line-height: 1.6; margin: 0;">
              Our uniformed supervisors and experienced carpenters manage bed disassembly, electronic wrapping, systematic truck packing, unloading, and furniture re-assembly at your new destination.
            </p>
          </div>

        </div>

        <!-- Feature Highlight Box -->
        <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border-left: 4px solid #f59e0b; padding: 25px; border-radius: 8px; margin: 35px 0;">
          <h3 style="color: #ffffff; font-size: 1.25rem; font-weight: 700; margin-bottom: 12px;">What Distinguishes Our Relocation Services in Ranchi?</h3>
          <ul style="list-style: none; padding: 0; margin: 0; display: grid; grid-template-columns: 1fr 1fr; gap: 12px; color: #cbd5e1;">
            <li>✔ <strong>7-Layer Heavy Packaging</strong> for maximum shock protection.</li>
            <li>✔ <strong>Zero Hidden Charges</strong> with transparent itemized estimates.</li>
            <li>✔ <strong>GPS Satellite Tracking</strong> on all enclosed moving container trucks.</li>
            <li>✔ <strong>IBA Approved GST Billing</strong> valid for all corporate & defense claims.</li>
            <li>✔ <strong>Uniformed & Trained Staff</strong> skilled in furniture disassembly.</li>
            <li>✔ <strong>24/7 Support Hotline</strong> for real-time shipment updates.</li>
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
          Comprehensive Shifting Solutions by Premier <span style="color: #f59e0b;">Packers and Movers Ranchi</span>
        </h2>
        <p style="color: #94a3b8; max-width: 750px; margin: 10px auto 0 auto; font-size: 1rem;">
          We cater to diverse relocation needs across Jharkhand and nationwide destinations with tailored logistics packages.
        </p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 30px;">
        
        <!-- Service Box 1 -->
        <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 28px; transition: transform 0.3s ease;">
          <h3 style="font-size: 1.3rem; color: #f59e0b; font-weight: 700; margin-bottom: 14px;">1. Household Shifting in Ranchi</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; line-height: 1.7;">
            Our core expertise lies in <strong>household shifting in ranchi</strong> and <strong>home relocation services ranchi</strong>. From dismantling modular beds and wardrobes to packing kitchen crockery in shock-resistant bubblewrap and corrugated boxes, we handle every item with reverence. Our team ensures that your furniture, electronics, and personal heirlooms arrive at your new destination in pristine condition.
          </p>
        </div>

        <!-- Service Box 2 -->
        <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 28px; transition: transform 0.3s ease;">
          <h3 style="font-size: 1.3rem; color: #f59e0b; font-weight: 700; margin-bottom: 14px;">2. Office Shifting Services Ranchi</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; line-height: 1.7;">
            Minimizing business downtime is critical during commercial moves. Our specialized <strong>office shifting services ranchi</strong> team operates during weekend or evening hours to pack IT hardware, computer servers, office desks, ergonomic chairs, and confidential document archives systematically using color-coded inventory tags for swift re-assembly at your new location.
          </p>
        </div>

        <!-- Service Box 3 -->
        <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 28px; transition: transform 0.3s ease;">
          <h3 style="font-size: 1.3rem; color: #f59e0b; font-weight: 700; margin-bottom: 14px;">3. Car Transport in Ranchi</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; line-height: 1.7;">
            Relocating your vehicle across state lines requires dedicated specialized carriers. Our <strong>car transport in ranchi</strong> utilizes enclosed hydraulic car carrier trailers equipped with safety wheel clamps and safety belts, ensuring zero mileage addition, scratch protection, and timely doorstep pickup and delivery across India.
          </p>
        </div>

        <!-- Service Box 4 -->
        <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 28px; transition: transform 0.3s ease;">
          <h3 style="font-size: 1.3rem; color: #f59e0b; font-weight: 700; margin-bottom: 14px;">4. Bike Transport Ranchi</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; line-height: 1.7;">
            Protect your two-wheeler from transit scratches and weather elements. Our <strong>bike transport ranchi</strong> service applies paddy straw padding, heavy corrugated sheet wrapping, and high-tensile stretch film to shield gas tanks, rear mirrors, and body panels before securing your motorcycle inside enclosed trucks.
          </p>
        </div>

        <!-- Service Box 5 -->
        <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 28px; transition: transform 0.3s ease;">
          <h3 style="font-size: 1.3rem; color: #f59e0b; font-weight: 700; margin-bottom: 14px;">5. Wooden Crate & Heavy Packaging</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; line-height: 1.7;">
            High-value items such as large 75-inch Smart TVs, marble statues, glass dining tabletops, and chandeliers require custom protective structural framing. We build solid wooden crate boxes on-site to absorb road vibrations and shield delicate items during long-distance transit.
          </p>
        </div>

        <!-- Service Box 6 -->
        <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 28px; transition: transform 0.3s ease;">
          <h3 style="font-size: 1.3rem; color: #f59e0b; font-weight: 700; margin-bottom: 14px;">6. Warehouse & Storage in Ranchi</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; line-height: 1.7;">
            Need temporary storage while waiting for your new home or office keys? Our <strong>warehouse and storage in ranchi</strong> facilities provide 24/7 CCTV surveillance, pest control treatments, moisture protection, and flexible short-term or long-term rental options for household goods and commercial inventory.
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
        Our Benchmark 7-Layer Material Protection System for <span style="color: #f59e0b;">Safe Packing and Moving Ranchi</span>
      </h2>

      <p style="font-size: 1.05rem; color: #cbd5e1; margin-bottom: 25px; line-height: 1.8;">
        The secret to zero-damage shifting lies in selecting high-grade packaging materials and adhering to disciplined wrapping protocols. As pioneers of <strong>safe packing and moving ranchi</strong>, we do not compromise on material quality. Every item moving out of your residence undergoes our multi-tier packaging process:
      </p>

      <div style="display: grid; grid-template-columns: 1fr; gap: 16px; margin-bottom: 35px;">
        <div style="background: rgba(23, 42, 84, 0.6); padding: 18px 22px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #ffffff; font-size: 1.1rem; margin-bottom: 6px;">Layer 1: Water-Resistant Stretch Film Wrap</h4>
          <p style="font-size: 0.92rem; color: #94a3b8; margin: 0;">Prevents dust accumulation, moisture penetration, and surface scratches during handling.</p>
        </div>

        <div style="background: rgba(23, 42, 84, 0.6); padding: 18px 22px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #ffffff; font-size: 1.1rem; margin-bottom: 6px;">Layer 2: High-Density Air-Bubble Cushioning</h4>
          <p style="font-size: 0.92rem; color: #94a3b8; margin: 0;">Absorbs shock, impacts, and vibrations for fragile glassware, electronics, and wooden polishes.</p>
        </div>

        <div style="background: rgba(23, 42, 84, 0.6); padding: 18px 22px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #ffffff; font-size: 1.1rem; margin-bottom: 6px;">Layer 3: Heavy-Duty Corrugated Board Sheeting</h4>
          <p style="font-size: 0.92rem; color: #94a3b8; margin: 0;">Forms a rigid outer armor around sofas, tables, washing machines, and refrigerator sides.</p>
        </div>

        <div style="background: rgba(23, 42, 84, 0.6); padding: 18px 22px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #ffffff; font-size: 1.1rem; margin-bottom: 6px;">Layer 4: Foam Edge & Corner Guards</h4>
          <p style="font-size: 0.92rem; color: #94a3b8; margin: 0;">Protects sharp wooden and glass corners from chipping during staircases or elevator transit.</p>
        </div>

        <div style="background: rgba(23, 42, 84, 0.6); padding: 18px 22px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #ffffff; font-size: 1.1rem; margin-bottom: 6px;">Layer 5: Custom Wooden Crate Framing (For Delicate Valuables)</h4>
          <p style="font-size: 0.92rem; color: #94a3b8; margin: 0;">Tailor-built solid wooden crates for 65+ inch televisions, mirrors, marble, and artwork.</p>
        </div>

        <div style="background: rgba(23, 42, 84, 0.6); padding: 18px 22px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #ffffff; font-size: 1.1rem; margin-bottom: 6px;">Layer 6: Branded Sealing Tape & Itemized Marking</h4>
          <p style="font-size: 0.92rem; color: #94a3b8; margin: 0;">Clear room-wise labeling and secure tamper-evident sealing tape for easy tracking and unboxing.</p>
        </div>

        <div style="background: rgba(23, 42, 84, 0.6); padding: 18px 22px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #ffffff; font-size: 1.1rem; margin-bottom: 6px;">Layer 7: Nylon Belt Tiedowns Inside Enclosed Container Trucks</h4>
          <p style="font-size: 0.92rem; color: #94a3b8; margin: 0;">Secures goods firmly to internal truck walls to prevent movement during highway transit.</p>
        </div>
      </div>

    </div>
  </section>

  <!-- Section 6: Ranchi Neighborhood Coverage & Local Geographic Logistics (Internal Linking Block 1) -->
  <section style="padding: 70px 0; background: #070d1e; color: #ffffff;">
    <div class="container" style="max-width: 900px;">
      
      <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Hyper-Local Network</span>
      <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin: 10px 0 20px 0;">
        Serving Every Neighborhood as Premier <span style="color: #f59e0b;">Local Packers and Movers Ranchi</span>
      </h2>

      <p style="font-size: 1.05rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 20px;">
        As established <strong>local packers and movers ranchi</strong>, our logistics network spans across all major residential sectors, commercial hubs, and suburban developments in the capital region. Our local move crews understand the traffic patterns, narrow residential lanes, apartment building hoist policies, and peak hours across Ranchi, enabling smooth execution.
      </p>

      <p style="font-size: 1.05rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 25px;">
        Whether you require immediate <strong>house relocation in ranchi</strong> or single-item <strong>luggage transport service ranchi</strong>, we provide active door-to-door coverage in:
      </p>

      <!-- Internal Link Grid 1 (4 Contextual Internal Links embedded) -->
      <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 16px; margin-bottom: 30px;">
        <div style="background: #101c40; padding: 18px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #ffffff; font-size: 1.1rem; margin-bottom: 8px;">Lalpur &amp; Commercial Hubs</h4>
          <p style="font-size: 0.9rem; color: #94a3b8; margin-bottom: 10px;">Fast local shifting in high-density areas near Circular Road and Plaza Chowk.</p>
          <a href="<?php echo SITE_URL; ?>pages/packers-and-movers-lalpur-ranchi.php" style="color: #f59e0b; text-decoration: underline; font-weight: 600; font-size: 0.9rem;">
            Explore Packers and Movers Lalpur Ranchi →
          </a>
        </div>

        <div style="background: #101c40; padding: 18px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #ffffff; font-size: 1.1rem; margin-bottom: 8px;">Harmu &amp; Housing Board Colony</h4>
          <p style="font-size: 0.9rem; color: #94a3b8; margin-bottom: 10px;">Direct access from our Ranchi Head Office at Anandpuri Chowk, Harmu.</p>
          <a href="<?php echo SITE_URL; ?>pages/packers-and-movers-harmu-ranchi.php" style="color: #f59e0b; text-decoration: underline; font-weight: 600; font-size: 0.9rem;">
            Explore Packers and Movers Harmu Ranchi →
          </a>
        </div>

        <div style="background: #101c40; padding: 18px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #ffffff; font-size: 1.1rem; margin-bottom: 8px;">Kanke Road &amp; Premium Villas</h4>
          <p style="font-size: 0.9rem; color: #94a3b8; margin-bottom: 10px;">Specialized heavy furniture & luxury home shifting around Kanke Road.</p>
          <a href="<?php echo SITE_URL; ?>pages/packers-and-movers-kanke-road-ranchi.php" style="color: #f59e0b; text-decoration: underline; font-weight: 600; font-size: 0.9rem;">
            Explore Packers and Movers Kanke Road Ranchi →
          </a>
        </div>

        <div style="background: #101c40; padding: 18px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #ffffff; font-size: 1.1rem; margin-bottom: 8px;">Ratu Road &amp; Pandra Market</h4>
          <p style="font-size: 0.9rem; color: #94a3b8; margin-bottom: 10px;">Efficient packing & loading for residential & retail moves along Ratu Road.</p>
          <a href="<?php echo SITE_URL; ?>pages/packers-and-movers-ratu-road-ranchi.php" style="color: #f59e0b; text-decoration: underline; font-weight: 600; font-size: 0.9rem;">
            Explore Packers and Movers Ratu Road Ranchi →
          </a>
        </div>
      </div>

      <p style="font-size: 0.95rem; color: #cbd5e1;">
        We also regularly serve Doranda, Bariatu, Hinoo, Morabadi, Namkum, Kokar, Tupudana, Piska Nagri, Dhurwa, Kantatoli, Hatia, Hesag, Booty More, Ashok Nagar, Chutia, Kadru, Siramtoli, and main road sectors.
      </p>

    </div>
  </section>

  <!-- Section 7: Intercity Routes & Highway Networks from Ranchi (Internal Linking Block 2) -->
  <section style="padding: 70px 0; background: #0b132b; color: #ffffff;">
    <div class="container" style="max-width: 900px;">
      
      <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Long-Distance Express Logistics</span>
      <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin: 10px 0 20px 0;">
        Seamless Intercity Moving by Leading <span style="color: #f59e0b;">Intercity Movers in Ranchi</span>
      </h2>

      <p style="font-size: 1.05rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 20px;">
        Relocating across state lines or between major industrial centers requires heavy-duty vehicles, experienced long-haul drivers, transit permits, and live GPS tracking. As established <strong>intercity movers in ranchi</strong> and trusted <strong>packers and movers in jharkhand</strong>, we connect Ranchi directly to key regional and national hubs via National Highway networks (NH-33, NH-19, and GT Road).
      </p>

      <p style="font-size: 1.05rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 25px;">
        Our premier intercity transport corridors include:
      </p>

      <!-- Internal Link Grid 2 (4 Contextual Internal Links embedded) -->
      <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 16px; margin-bottom: 30px;">
        <div style="background: #172a54; padding: 18px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #ffffff; font-size: 1.1rem; margin-bottom: 8px;">Ranchi to Jamshedpur Corridor</h4>
          <p style="font-size: 0.9rem; color: #94a3b8; margin-bottom: 10px;">Daily container truck trips via NH-33 linking Ranchi to Steel City Jamshedpur &amp; Tatanagar.</p>
          <a href="<?php echo SITE_URL; ?>pages/packers-and-movers-ranchi-to-jamshedpur.php" style="color: #f59e0b; text-decoration: underline; font-weight: 600; font-size: 0.9rem;">
            Ranchi to Jamshedpur Shifting Services →
          </a>
        </div>

        <div style="background: #172a54; padding: 18px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #ffffff; font-size: 1.1rem; margin-bottom: 8px;">Ranchi to Dhanbad Route</h4>
          <p style="font-size: 0.9rem; color: #94a3b8; margin-bottom: 10px;">Punctual household &amp; commercial relocation connecting Ranchi to Dhanbad &amp; Bokaro.</p>
          <a href="<?php echo SITE_URL; ?>pages/packers-and-movers-ranchi-to-dhanbad.php" style="color: #f59e0b; text-decoration: underline; font-weight: 600; font-size: 0.9rem;">
            Ranchi to Dhanbad Shifting Services →
          </a>
        </div>

        <div style="background: #172a54; padding: 18px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #ffffff; font-size: 1.1rem; margin-bottom: 8px;">Ranchi to Kolkata Express</h4>
          <p style="font-size: 0.9rem; color: #94a3b8; margin-bottom: 10px;">Direct interstate moving linking Jharkhand to West Bengal via GT Road &amp; NH-19.</p>
          <a href="<?php echo SITE_URL; ?>pages/packers-and-movers-ranchi-to-kolkata.php" style="color: #f59e0b; text-decoration: underline; font-weight: 600; font-size: 0.9rem;">
            Ranchi to Kolkata Shifting Services →
          </a>
        </div>

        <div style="background: #172a54; padding: 18px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #ffffff; font-size: 1.1rem; margin-bottom: 8px;">Ranchi to Patna Route</h4>
          <p style="font-size: 0.9rem; color: #94a3b8; margin-bottom: 10px;">Interstate relocation services connecting Ranchi to Patna, Bihar via NH-22.</p>
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
      
      <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Corporate & Defense Documentation</span>
      <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin: 10px 0 20px 0;">
        IBA Approved GST Billing &amp; Claim Compliance in Ranchi
      </h2>

      <p style="font-size: 1.05rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 20px;">
        Employees working in defense forces, public sector undertakings (PSUs), nationalized banks, Indian Railways, central government departments, and private MNCs are entitled to relocation allowance claims upon job transfer. However, corporate HR and audit departments enforce strict documentation requirements for claim reimbursement.
      </p>

      <p style="font-size: 1.05rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 25px;">
        As trusted <strong>iba approved packers and movers ranchi</strong>, Shree Ashirwad Packers and Movers furnishes complete, claim-ready paper trails accepted by all auditing departments:
      </p>

      <div style="background: #101c40; border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 12px; padding: 25px; margin-bottom: 30px;">
        <h4 style="color: #f59e0b; font-size: 1.15rem; margin-bottom: 12px; font-weight: 700;">Complete Relocation Claim Document Set:</h4>
        <ol style="margin: 0; padding-left: 20px; color: #cbd5e1; line-height: 1.8;">
          <li><strong>Official GST Consignment Invoice</strong> detailing itemized packing & freight costs.</li>
          <li><strong>Consignment Lorry Receipt (LR Copy)</strong> with stamped vehicle registration number.</li>
          <li><strong>Itemized Goods Inventory Packing List</strong> with room-wise tag serial numbers.</li>
          <li><strong>IBA Approved Stamp &amp; Registration Number Verification</strong> on official letterhead.</li>
          <li><strong>Transit Insurance Policy Document</strong> issued by authorized insurance providers.</li>
          <li><strong>Money Receipt &amp; Payment Acknowledgement</strong> for audit verification.</li>
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
          How Our Shifting Execution Works in <span style="color: #f59e0b;">Ranchi</span>
        </h2>
        <p style="color: #94a3b8; font-size: 1rem;">From first inquiry call to final room setup, we ensure total transparency.</p>
      </div>

      <div style="display: grid; grid-template-columns: 1fr; gap: 20px;">
        
        <div style="display: flex; gap: 20px; background: #172a54; padding: 24px; border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <div style="font-size: 2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">01</div>
          <div>
            <h3 style="font-size: 1.2rem; color: #ffffff; margin-bottom: 6px;">Initial Phone / WhatsApp Survey</h3>
            <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.6;">
              Contact our <strong>movers and packers ranchi contact number</strong> at <strong><?php echo SITE_PHONE; ?></strong> or submit our instant quote form. Our move coordinator evaluates your goods volume, floor levels, elevator availability, and destination route.
            </p>
          </div>
        </div>

        <div style="display: flex; gap: 20px; background: #172a54; padding: 24px; border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <div style="font-size: 2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">02</div>
          <div>
            <h3 style="font-size: 1.2rem; color: #ffffff; margin-bottom: 6px;">Clear Itemized Cost Estimation</h3>
            <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.6;">
              We explain all <strong>packers and movers ranchi charges</strong> in a written estimate. No last-minute surprises or unexpected door-delivery surcharges.
            </p>
          </div>
        </div>

        <div style="display: flex; gap: 20px; background: #172a54; padding: 24px; border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <div style="font-size: 2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">03</div>
          <div>
            <h3 style="font-size: 1.2rem; color: #ffffff; margin-bottom: 6px;">On-Site 7-Layer Packaging &amp; Labeling</h3>
            <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.6;">
              On move day, our uniformed crew arrives punctually with heavy bubble wrap, foam sheets, corrugated boxes, and wooden crates to wrap every single item systematically.
            </p>
          </div>
        </div>

        <div style="display: flex; gap: 20px; background: #172a54; padding: 24px; border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <div style="font-size: 2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">04</div>
          <div>
            <h3 style="font-size: 1.2rem; color: #ffffff; margin-bottom: 6px;">Container Truck Loading &amp; Live Tracking</h3>
            <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.6;">
              Goods are loaded into dedicated weather-proof container vehicles using nylon belts. You receive live GPS tracking updates until the truck reaches your new home.
            </p>
          </div>
        </div>

        <div style="display: flex; gap: 20px; background: #172a54; padding: 24px; border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <div style="font-size: 2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">05</div>
          <div>
            <h3 style="font-size: 1.2rem; color: #ffffff; margin-bottom: 6px;">Unloading, Unpacking &amp; Room Setup</h3>
            <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.6;">
              At destination, our crew unloads, unboxes, re-assembles beds and tables, and places furniture in designated rooms according to your layout preferences.
            </p>
          </div>
        </div>

      </div>

    </div>
  </section>

  <!-- Section 10: Frequently Asked Questions (10 Detailed SEO FAQs with Schema Markup) -->
  <section style="padding: 70px 0; background: #070d1e; color: #ffffff;">
    <div class="container" style="max-width: 900px;">
      
      <div class="section-header text-center" style="margin-bottom: 45px;">
        <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Got Questions?</span>
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin-top: 10px;">
          Frequently Asked Questions About <span style="color: #f59e0b;">Packers and Movers in Ranchi</span>
        </h2>
      </div>

      <div style="display: flex; flex-direction: column; gap: 16px;">
        
        <div style="background: #101c40; padding: 20px 24px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Q1: How are packers and movers ranchi charges evaluated for local shifting?</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.7;">
            Relocation estimates are determined based on the total volume of goods, packing material requirements (bubble wrap, corrugated sheets, wooden crates), floor numbers at pickup and delivery, availability of elevators, and total transit distance.
          </p>
        </div>

        <div style="background: #101c40; padding: 20px 24px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Q2: Do you provide IBA approved bills for corporate relocation claims in Ranchi?</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.7;">
            Yes! Shree Ashirwad Packers and Movers provides 100% compliant IBA-approved bills, GST consignment invoices, Lorry Receipts (LR), and itemized packing lists accepted by all government, PSU, defense, railway, and private corporate HR departments.
          </p>
        </div>

        <div style="background: #101c40; padding: 20px 24px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Q3: How many days in advance should I book my move in Ranchi?</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.7;">
            For local household shifting within Ranchi, booking 2 to 3 days in advance is recommended. For intercity or interstate long-distance moves, we advise booking 4 to 7 days in advance to reserve dedicated container trucks.
          </p>
        </div>

        <div style="background: #101c40; padding: 20px 24px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Q4: How do you protect fragile items like Smart LED TVs, glass tabletops, and artwork?</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.7;">
            We apply multi-layer protective packaging consisting of stretch film, high-density air-bubble wrap, foam corner guards, quilted blankets, and custom-built wooden crates to absorb transit shocks.
          </p>
        </div>

        <div style="background: #101c40; padding: 20px 24px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Q5: Can I track my moving truck during long-distance intercity transit?</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.7;">
            Yes, all our enclosed moving container trucks are outfitted with real-time satellite GPS tracking. You receive continuous status updates from your move supervisor.
          </p>
        </div>

        <div style="background: #101c40; padding: 20px 24px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Q6: Do you transport cars and bikes safely from Ranchi?</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.7;">
            Yes, we operate specialized hydraulic enclosed car carriers and wheel-locked bike containers with paddy-straw padded wrapping for scratch-free vehicle logistics across India.
          </p>
        </div>

        <div style="background: #101c40; padding: 20px 24px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Q7: Is transit insurance included with the shifting service?</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.7;">
            We offer comprehensive transit insurance coverage that protects your shipment against unforeseen environmental factors or road accidents during long-distance transit.
          </p>
        </div>

        <div style="background: #101c40; padding: 20px 24px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Q8: Do your packers disassemble and reassemble modular furniture?</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.7;">
            Yes, our trained carpenters and move staff dismantle double beds, wardrobes, modular desks, and dining tables at origin, and reassemble them at destination.
          </p>
        </div>

        <div style="background: #101c40; padding: 20px 24px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Q9: Are there any hidden fees added on move day?</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.7;">
            No! We maintain a strict policy of transparent billing. All cost factors are discussed and fixed prior to move day with zero hidden surcharges.
          </p>
        </div>

        <div style="background: #101c40; padding: 20px 24px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Q10: What is the contact number for packers and movers in ranchi inquiry?</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.7;">
            You can call or WhatsApp our official Ranchi Helpline at <strong><?php echo SITE_PHONE; ?></strong> (Raw: <strong><?php echo SITE_PHONE_RAW; ?></strong>) or email us at <strong><?php echo SITE_EMAIL; ?></strong> for immediate assistance.
          </p>
        </div>

      </div>

    </div>
  </section>

  <!-- Section 11: Final Call To Action Banner -->
  <section style="padding: 70px 0; background: linear-gradient(135deg, #172a54 0%, #0b132b 100%); border-top: 1.5px solid rgba(245, 158, 11, 0.4); color: #ffffff;">
    <div class="container" style="max-width: 900px; text-align: center;">
      
      <span class="section-tag" style="background: rgba(245, 158, 11, 0.2); color: #f59e0b; padding: 6px 16px; border-radius: 20px; font-size: 0.85rem; font-weight: 700; text-transform: uppercase;">
        Book Jharkhand's Top Rated Movers
      </span>

      <h2 style="font-size: 2.3rem; font-weight: 800; margin: 15px 0 15px 0; color: #ffffff;">
        Ready to Experience Zero-Damage Relocation with <span style="color: #f59e0b;">Packers and Movers in Ranchi</span>?
      </h2>

      <p style="font-size: 1.05rem; color: #cbd5e1; max-width: 750px; margin: 0 auto 30px auto; line-height: 1.7;">
        Contact our Ranchi Head Office at Anandpuri Chowk, Harmu Road today for a quick custom estimate and enjoy smooth, stress-free household or office shifting.
      </p>

      <div style="display: flex; gap: 15px; justify-content: center; flex-wrap: wrap; margin-bottom: 25px;">
        <a href="tel:<?php echo SITE_PHONE_RAW; ?>" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 30px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1.05rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
          📞 Call Now: <?php echo SITE_PHONE; ?>
        </a>
        <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers%20and%20Movers,%20I%20want%20a%20quote%20for%20relocation." target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 30px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1.05rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
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
