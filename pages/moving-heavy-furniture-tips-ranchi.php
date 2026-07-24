<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "Moving Heavy Furniture Tips Ranchi | Safe Furniture Transport";
$page_desc = "Expert moving heavy furniture tips in Ranchi. Learn safe dismantling, slider techniques, lifting straps, 3-layer bubble packing & professional transport. Call 8409531615.";
$page_keywords = "moving heavy furniture tips ranchi, heavy furniture movers ranchi, sofa bed dismantling ranchi, furniture lifting straps ranchi, wooden furniture packing ranchi";

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
            Expert Furniture Logistics 2026
          </span>
          <h1 style="font-size: 2.8rem; font-weight: 800; line-height: 1.2; margin-bottom: 20px; color: #ffffff;">
            Moving Heavy Furniture <span style="color: #f59e0b;">Tips &amp; Services</span> in Ranchi
          </h1>
          <p style="font-size: 1.15rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 25px;">
            Relocating heavy wooden double beds, solid teak wardrobes, marble-top dining tables, 3-seater plush recliners, and antique wooden showcases presents major physical challenges and injury risks during a home move. Attempting to drag or lift heavy furniture without specialized moving dollies, shoulder lifting straps, furniture sliders, and professional carpentry dismantling techniques leads to scratched marble flooring, chipped door frames, structural wood joints splitting, or back injuries. Shree Ashirwad Packers and Movers deploys certified furniture handling technicians equipped with 3-layer bubble lamination, corner foam guards, hydraulic lifting equipment, and covered container vehicles to ensure 100% scratch-free furniture relocation across Ranchi.
          </p>

          <div style="display: flex; gap: 15px; flex-wrap: wrap; margin-bottom: 30px;">
            <a href="tel:<?php echo SITE_PHONE_RAW; ?>" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
              📞 Call Furniture Desk: <?php echo SITE_PHONE; ?>
            </a>
            <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers%20and%20Movers,%20I%20need%20heavy%20furniture%20moving%20tips%20and%20quotes." target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
              💬 Chat on WhatsApp
            </a>
          </div>

          <div style="display: flex; gap: 20px; font-size: 0.9rem; color: #94a3b8;">
            <span><strong style="color: #f59e0b;">Certified</strong> Carpentry Dismantling</span>
            <span><strong style="color: #f59e0b;">Heavy-Duty</strong> Lifting Straps</span>
            <span><strong style="color: #f59e0b;">3-Layer</strong> Bubble Wrapping</span>
          </div>
        </div>

        <!-- Hero Lead Form Column -->
        <div class="hero-form-card" style="background: rgba(255, 255, 255, 0.05); backdrop-filter: blur(10px); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 16px; padding: 30px; box-shadow: 0 15px 35px rgba(0,0,0,0.4);">
          <h2 style="font-size: 1.4rem; color: #ffffff; margin-bottom: 8px; font-weight: 700; text-align: center;">Get Furniture Moving Quote</h2>
          <p style="font-size: 0.85rem; color: #94a3b8; text-align: center; margin-bottom: 20px;">Receive instant estimates for heavy furniture moving via WhatsApp</p>

          <form action="#" method="POST" onsubmit="sendHeroWhatsAppLead(event, this);">
            <div style="margin-bottom: 14px;">
              <input type="text" name="name" class="form-control" placeholder="Your Full Name" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="margin-bottom: 14px;">
              <input type="tel" name="phone" class="form-control" placeholder="10-Digit Phone / WhatsApp Number" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 10px; margin-bottom: 14px;">
              <input type="text" name="move_from" class="form-control" placeholder="Pickup Area in Ranchi" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
              <input type="text" name="move_to" class="form-control" placeholder="Destination Area / City" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="margin-bottom: 16px;">
              <textarea name="message" class="form-control" rows="2" placeholder="Furniture Details (e.g. King Bed, 6-Seater Dining, Sofa, Wardrobe)" style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;"></textarea>
            </div>
            <button type="submit" class="btn btn-primary" style="width: 100%; padding: 14px; font-weight: 700; font-size: 1rem; border-radius: 8px;">
              Get Furniture Shifting Quote on WhatsApp
            </button>
          </form>
        </div>

      </div>
    </div>
  </section>

  <!-- Section 2: Key Statistics -->
  <section class="stats-section" style="padding: 50px 0; background: #070d1e; border-bottom: 1px solid rgba(245, 158, 11, 0.2);">
    <div class="container">
      <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 20px; text-align: center;">
        <div style="padding: 20px; background: rgba(23, 42, 84, 0.5); border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">100%</div>
          <div style="font-size: 0.9rem; color: #cbd5e1; margin-top: 5px;">Scratch-Free Guarantee</div>
        </div>
        <div style="padding: 20px; background: rgba(23, 42, 84, 0.5); border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">Specialized</div>
          <div style="font-size: 0.9rem; color: #cbd5e1; margin-top: 5px;">Shoulder Lifting Straps</div>
        </div>
        <div style="padding: 20px; background: rgba(23, 42, 84, 0.5); border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">Expert</div>
          <div style="font-size: 0.9rem; color: #cbd5e1; margin-top: 5px;">Carpentry Re-Assembly</div>
        </div>
        <div style="padding: 20px; background: rgba(23, 42, 84, 0.5); border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">3-Layer</div>
          <div style="font-size: 0.9rem; color: #cbd5e1; margin-top: 5px;">Bubble &amp; Foam Wrapping</div>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 3: 6-Card Grid (3x2 Layout) - 6 Heavy Furniture Moving Tips & Techniques -->
  <section style="padding: 70px 0; background: #0b132b; color: #e2e8f0; line-height: 1.8;">
    <div class="container">
      
      <div style="max-width: 950px; margin: 0 auto;">
        <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Professional Techniques</span>
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin: 10px 0 20px 0;">
          6 Essential <span style="color: #f59e0b;">Moving Heavy Furniture Tips</span> &amp; Methods
        </h2>
        <p style="font-size: 1.05rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 25px;">
          Learn how professional movers handle bulky items safely without floor scratches or spinal strain:
        </p>

        <!-- 6 Cards Grid (3x2 Layout) -->
        <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px; margin: 30px 0;">
          
          <!-- Card 1 -->
          <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px; box-shadow: 0 10px 25px rgba(0,0,0,0.3);">
            <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;">🛏️</div>
            <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">1. Systematic Furniture Dismantling</h3>
            <p style="font-size: 0.9rem; color: #cbd5e1; line-height: 1.6; margin: 0;">
              Always unbolt bed headboards, remove wardrobe doors, detach dining table legs, and take off sofa wooden legs to reduce weight and overall dimensions before moving.
            </p>
          </div>

          <!-- Card 2 -->
          <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px; box-shadow: 0 10px 25px rgba(0,0,0,0.3);">
            <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;">🛞</div>
            <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">2. Utilizing Furniture Sliders &amp; Dollies</h3>
            <p style="font-size: 0.9rem; color: #cbd5e1; line-height: 1.6; margin: 0;">
              Place felt or plastic sliders underneath heavy wardrobe feet to glide across marble or wooden floors effortlessly without scratching floor polish.
            </p>
          </div>

          <!-- Card 3 -->
          <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px; box-shadow: 0 10px 25px rgba(0,0,0,0.3);">
            <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;">🎗️</div>
            <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">3. Shoulder Harness Lifting Straps</h3>
            <p style="font-size: 0.9rem; color: #cbd5e1; margin: 0; line-height: 1.6;">
              Use 2-person shoulder lifting straps (Forearm Forklift technique) to leverage leverage mechanics, taking 65% of item weight off hands and back muscles.
            </p>
          </div>

          <!-- Card 4 -->
          <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px; box-shadow: 0 10px 25px rgba(0,0,0,0.3);">
            <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;">📦</div>
            <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">4. 3-Layer Corner Guard Wrapping</h3>
            <p style="font-size: 0.9rem; color: #cbd5e1; margin: 0; line-height: 1.6;">
              Encase sharp wooden edges and glass tops in L-shaped corrugated corner guards, heavy air-bubble wrap, and stretch lamination to shield against impact.
            </p>
          </div>

          <!-- Card 5 -->
          <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px; box-shadow: 0 10px 25px rgba(0,0,0,0.3);">
            <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;">📐</div>
            <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">5. Hook &amp; Angle Maneuvering Techniques</h3>
            <p style="font-size: 0.9rem; color: #cbd5e1; margin: 0; line-height: 1.6;">
              Maneuver L-shaped sofas and high-back recliners through narrow door frames by angling them vertically into an 'L' shape to clear door jams smoothly.
            </p>
          </div>

          <!-- Card 6 -->
          <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px; box-shadow: 0 10px 25px rgba(0,0,0,0.3);">
            <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;">🔒</div>
            <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">6. Ratchet Strap Truck Anchorage</h3>
            <p style="font-size: 0.9rem; color: #cbd5e1; margin: 0; line-height: 1.6;">
              Anchor all dismantled wooden panels and sofa frames securely to side walls of container trucks using heavy-duty ratchet straps to prevent shifting during transit.
            </p>
          </div>

        </div>

        <p style="font-size: 1.05rem; color: #cbd5e1; line-height: 1.8; margin-top: 25px;">
          Applying these 6 moving heavy furniture tips ensures complete physical protection for both your valuable wooden furniture and home interiors.
        </p>

      </div>

    </div>
  </section>

  <!-- Section 4: Furniture Shifting Rate Matrix -->
  <section style="padding: 70px 0; background: linear-gradient(180deg, #0b132b 0%, #16203b 100%); color: #ffffff;">
    <div class="container" style="max-width: 900px;">
      
      <div class="section-header text-center" style="margin-bottom: 45px;">
        <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Furniture Pricing</span>
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin-top: 10px;">
          Standard Heavy Furniture Shifting Rates in <span style="color: #f59e0b;">Ranchi</span>
        </h2>
        <p style="font-size: 1.05rem; color: #cbd5e1; max-width: 800px; margin: 15px auto 0 auto; line-height: 1.7;">
          Transparent rate slabs for moving individual heavy furniture pieces or complete household furniture sets:
        </p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 24px;">
        
        <div style="background: #172a54; padding: 24px; border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.3);">
          <h3 style="font-size: 1.2rem; color: #f59e0b; font-weight: 700; margin-bottom: 12px;">🛋️ Individual Heavy Furniture Item Rates</h3>
          <ul style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.8; padding-left: 18px; margin: 0;">
            <li>King / Queen Size Bed (Dismantle + Pack): ₹1,800 – ₹3,000</li>
            <li>3-Door / 4-Door Wardrobe Shifting: ₹2,000 – ₹3,500</li>
            <li>6-Seater Glass/Marble Dining Table: ₹2,200 – ₹3,800</li>
            <li>3+1+1 Leather Sofa Set Shifting: ₹2,500 – ₹4,000</li>
            <li>Wooden Showcase / Crockery Cabinet: ₹1,800 – ₹3,200</li>
            <li>Includes 3-layer bubble packaging &amp; carpentry labor</li>
          </ul>
        </div>

        <div style="background: #172a54; padding: 24px; border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.3);">
          <h3 style="font-size: 1.2rem; color: #f59e0b; font-weight: 700; margin-bottom: 12px;">🏡 Full Home Furniture Shifting Package</h3>
          <ul style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.8; padding-left: 18px; margin: 0;">
            <li>1 BHK Full Furniture Relocation: ₹4,500 – ₹7,500</li>
            <li>2 BHK Full Furniture Relocation: ₹7,500 – ₹12,000</li>
            <li>3 BHK Full Furniture Relocation: ₹11,000 – ₹17,000</li>
            <li>Duplex Villa Heavy Furniture Set: ₹16,000 – ₹25,000</li>
            <li>Includes floor ramps, sliders &amp; lifting harness</li>
            <li>Includes door-to-door reassembly setup</li>
          </ul>
        </div>

      </div>

      <p style="font-size: 1.05rem; color: #cbd5e1; line-height: 1.8; margin-top: 25px;">
        All heavy furniture moving quotes from Shree Ashirwad Packers are fixed prior to loading, guaranteeing zero unexpected labor add-ons or stair carry surcharges.
      </p>

    </div>
  </section>

  <!-- Section 5: 5-Step Heavy Furniture Shifting Workflow -->
  <section style="padding: 70px 0; background: #0b132b; color: #e2e8f0; border-top: 1px solid rgba(245, 158, 11, 0.15);">
    <div class="container" style="max-width: 900px;">
      
      <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Operational Workflow</span>
      <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin: 10px 0 20px 0;">
        5 Steps of Our Heavy Furniture Shifting Process
      </h2>

      <p style="font-size: 1.05rem; color: #cbd5e1; margin-bottom: 25px; line-height: 1.8;">
        How our expert team plans and executes heavy furniture moves:
      </p>

      <div style="display: grid; grid-template-columns: 1fr; gap: 16px; margin-bottom: 35px;">
        <div style="background: rgba(23, 42, 84, 0.6); padding: 20px 24px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #ffffff; font-size: 1.15rem; margin-bottom: 6px;">1. Pre-Move Furniture Measurement &amp; Survey</h4>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.6;">
            Our lead carpenter measures furniture dimensions, door frames, stairwell turns, and elevator height to plan dismantling requirements.
          </p>
        </div>
        <div style="background: rgba(23, 42, 84, 0.6); padding: 20px 24px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #ffffff; font-size: 1.15rem; margin-bottom: 6px;">2. Hardware Labeling &amp; Precision Unbolting</h4>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.6;">
            Beds, wardrobes, and modular tables are dismantled. Screws, hinges, and bolts are stored in color-coded zip pouches taped to corresponding panels.
          </p>
        </div>
        <div style="background: rgba(23, 42, 84, 0.6); padding: 20px 24px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #ffffff; font-size: 1.15rem; margin-bottom: 6px;">3. 3-Layer Protective Wrapping &amp; Corner Shields</h4>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.6;">
            Panels receive inner foam padding, 80-micron air bubble wrapping, outer corrugated cardboard sheets, and stretch film sealing.
          </p>
        </div>
        <div style="background: rgba(23, 42, 84, 0.6); padding: 20px 24px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #ffffff; font-size: 1.15rem; margin-bottom: 6px;">4. Lifting Harness Carrying &amp; Container Staging</h4>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.6;">
            Handlers use shoulder lifting straps and floor runners to carry items down staircases and anchor them inside container trucks.
          </p>
        </div>
        <div style="background: rgba(23, 42, 84, 0.6); padding: 20px 24px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #ffffff; font-size: 1.15rem; margin-bottom: 6px;">5. Unpacking, Leveling &amp; Room Re-Assembly</h4>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.6;">
            Upon arrival, our carpentry team unwraps panels, reassembles furniture in designated rooms, aligns doors, and tests alignment.
          </p>
        </div>
      </div>

    </div>
  </section>

  <!-- Section 6: Localities Served in Ranchi (Internal Link Grid 1 - 4 Links) -->
  <section style="padding: 70px 0; background: #070d1e; color: #ffffff;">
    <div class="container" style="max-width: 900px;">
      
      <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Service Locations</span>
      <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin: 10px 0 20px 0;">
        Heavy Furniture Shifting Across <span style="color: #f59e0b;">Ranchi</span> Neighborhoods
      </h2>

      <p style="font-size: 1.05rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 20px;">
        We offer doorstep heavy furniture moving and carpentry services across key Ranchi sectors:
      </p>

      <!-- Internal Link Grid 1 (4 Contextual Links) -->
      <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 16px; margin-bottom: 30px;">
        <div style="background: #101c40; padding: 18px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #ffffff; font-size: 1.1rem; margin-bottom: 8px;">Lalpur Commercial &amp; Flat Sector</h4>
          <p style="font-size: 0.9rem; color: #94a3b8; margin-bottom: 10px;">Heavy sofa bed and wardrobe shifting services in Lalpur.</p>
          <a href="<?php echo SITE_URL; ?>pages/packers-and-movers-lalpur-ranchi.php" style="color: #f59e0b; text-decoration: underline; font-weight: 600; font-size: 0.9rem;">
            Packers Movers Lalpur Ranchi →
          </a>
        </div>

        <div style="background: #101c40; padding: 18px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #ffffff; font-size: 1.1rem; margin-bottom: 8px;">Kanke Road High-Rise Sector</h4>
          <p style="font-size: 0.9rem; color: #94a3b8; margin-bottom: 10px;">Elevator furniture handling and disassembly in Kanke Road.</p>
          <a href="<?php echo SITE_URL; ?>pages/packers-and-movers-kanke-road-ranchi.php" style="color: #f59e0b; text-decoration: underline; font-weight: 600; font-size: 0.9rem;">
            Packers Movers Kanke Road Ranchi →
          </a>
        </div>

        <div style="background: #101c40; padding: 18px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #ffffff; font-size: 1.1rem; margin-bottom: 8px;">Morabadi Residential Enclave</h4>
          <p style="font-size: 0.9rem; color: #94a3b8; margin-bottom: 10px;">Teakwood dining table &amp; showcase moving in Morabadi.</p>
          <a href="<?php echo SITE_URL; ?>pages/packers-and-movers-morabadi-ranchi.php" style="color: #f59e0b; text-decoration: underline; font-weight: 600; font-size: 0.9rem;">
            Packers Movers Morabadi Ranchi →
          </a>
        </div>

        <div style="background: #101c40; padding: 18px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #ffffff; font-size: 1.1rem; margin-bottom: 8px;">Bariatu Housing Colony</h4>
          <p style="font-size: 0.9rem; color: #94a3b8; margin-bottom: 10px;">Safe heavy furniture relocation &amp; packing in Bariatu.</p>
          <a href="<?php echo SITE_URL; ?>pages/packers-and-movers-bariatu-ranchi.php" style="color: #f59e0b; text-decoration: underline; font-weight: 600; font-size: 0.9rem;">
            Packers Movers Bariatu Ranchi →
          </a>
        </div>
      </div>

    </div>
  </section>

  <!-- Section 7: Popular Intercity Furniture Moving Routes (Internal Link Grid 2 - 4 Links) -->
  <section style="padding: 70px 0; background: #0b132b; color: #ffffff;">
    <div class="container" style="max-width: 900px;">
      
      <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Intercity Routes</span>
      <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin: 10px 0 20px 0;">
        Intercity Heavy Furniture Corridors from <span style="color: #f59e0b;">Ranchi</span>
      </h2>

      <p style="font-size: 1.05rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 25px;">
        Container truck routes for transporting heavy household furniture across Jharkhand:
      </p>

      <!-- Internal Link Grid 2 (4 Contextual Links) -->
      <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 16px; margin-bottom: 30px;">
        <div style="background: #172a54; padding: 18px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #ffffff; font-size: 1.1rem; margin-bottom: 8px;">Ranchi to Jamshedpur Furniture Corridor</h4>
          <p style="font-size: 0.9rem; color: #94a3b8; margin-bottom: 10px;">Full household wooden furniture transport connecting Ranchi to Jamshedpur.</p>
          <a href="<?php echo SITE_URL; ?>pages/packers-and-movers-ranchi-to-jamshedpur.php" style="color: #f59e0b; text-decoration: underline; font-weight: 600; font-size: 0.9rem;">
            Ranchi to Jamshedpur Shifting Services →
          </a>
        </div>

        <div style="background: #172a54; padding: 18px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #ffffff; font-size: 1.1rem; margin-bottom: 8px;">Ranchi to Dhanbad Furniture Express</h4>
          <p style="font-size: 0.9rem; color: #94a3b8; margin-bottom: 10px;">Inter-city heavy bed &amp; wardrobe moving connecting Ranchi to Dhanbad.</p>
          <a href="<?php echo SITE_URL; ?>pages/packers-and-movers-ranchi-to-dhanbad.php" style="color: #f59e0b; text-decoration: underline; font-weight: 600; font-size: 0.9rem;">
            Ranchi to Dhanbad Shifting Services →
          </a>
        </div>

        <div style="background: #172a54; padding: 18px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #ffffff; font-size: 1.1rem; margin-bottom: 8px;">Ranchi to Bokaro Steel City Route</h4>
          <p style="font-size: 0.9rem; color: #94a3b8; margin-bottom: 10px;">Modular furniture dismantling &amp; transport connecting Ranchi to Bokaro.</p>
          <a href="<?php echo SITE_URL; ?>pages/packers-and-movers-ranchi-to-bokaro.php" style="color: #f59e0b; text-decoration: underline; font-weight: 600; font-size: 0.9rem;">
            Ranchi to Bokaro Shifting Services →
          </a>
        </div>

        <div style="background: #172a54; padding: 18px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #ffffff; font-size: 1.1rem; margin-bottom: 8px;">Ranchi to Hazaribagh Furniture Link</h4>
          <p style="font-size: 0.9rem; color: #94a3b8; margin-bottom: 10px;">Inter-district heavy furniture relocation connecting Ranchi to Hazaribagh.</p>
          <a href="<?php echo SITE_URL; ?>pages/packers-and-movers-ranchi-to-hazaribagh.php" style="color: #f59e0b; text-decoration: underline; font-weight: 600; font-size: 0.9rem;">
            Ranchi to Hazaribagh Shifting Services →
          </a>
        </div>
      </div>

    </div>
  </section>

  <!-- Section 8: Heavy Furniture Prep Checklist -->
  <section style="padding: 70px 0; background: #070d1e; color: #ffffff;">
    <div class="container" style="max-width: 900px;">
      
      <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Homeowner Checklist</span>
      <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin: 10px 0 20px 0;">
        7 Heavy Furniture Preparation Tips for Homeowners
      </h2>

      <p style="font-size: 1.05rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 20px;">
        Follow these mandatory preparation steps before our movers arrive on shifting day:
      </p>

      <div style="background: #101c40; border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 12px; padding: 28px; margin-bottom: 30px;">
        <h4 style="color: #f59e0b; font-size: 1.2rem; margin-bottom: 14px; font-weight: 700;">Furniture Prep Checklist:</h4>
        <ol style="margin: 0; padding-left: 20px; color: #cbd5e1; line-height: 1.9; font-size: 0.98rem;">
          <li><strong>Empty All Wardrobes &amp; Cabinet Drawers:</strong> Remove all clothes, books, and heavy items from drawers to reduce weight and prevent internal frame warping.</li>
          <li><strong>Store Cabinet Keys &amp; Screws in Ziploc Bags:</strong> Tape hardware pouches securely inside dismantling panels so no assembly screws get lost.</li>
          <li><strong>Remove Loose Glass Shelves &amp; Mirrors:</strong> Pack glass cupboard shelves separately in bubble wrap and wooden crates to avoid breakage.</li>
          <li><strong>Measure Entryways, Stairwells &amp; Elevators:</strong> Check dimensions to ensure un-dismantled sofa frames or mattresses fit through doorways cleanly.</li>
          <li><strong>Protect Floors with Rubber Mats or Blanket Runners:</strong> Lay thick cloth or cardboard runners along high-traffic corridors to prevent heel or dolly marks.</li>
          <li><strong>Detach Sofa Legs &amp; Recliner Power Cables:</strong> Unbolt wooden sofa feet and pack power adapters safely with electrical appliances.</li>
          <li><strong>Inspect Pre-Existing Furniture Conditions:</strong> Note any existing scratches or loose joints with our crew supervisor on the inventory receipt before wrapping.</li>
        </ol>
      </div>

    </div>
  </section>

  <!-- Section 9: 5 Quality Controls Deployed -->
  <section style="padding: 70px 0; background: #0b132b; color: #ffffff; border-top: 1px solid rgba(245, 158, 11, 0.15);">
    <div class="container" style="max-width: 900px;">
      
      <div class="section-header text-center" style="margin-bottom: 45px;">
        <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Quality Controls</span>
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin-top: 10px;">
          5 Controls &amp; Equipment Deployed in Furniture Moves
        </h2>
        <p style="font-size: 1.05rem; color: #cbd5e1; max-width: 750px; margin: 10px auto 0 auto; line-height: 1.7;">
          Our specialized tools prevent physical strain and eliminate damage risks during heavy furniture transport.
        </p>
      </div>

      <div style="display: grid; grid-template-columns: 1fr; gap: 20px;">
        
        <div style="display: flex; gap: 20px; background: #172a54; padding: 24px; border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <div style="font-size: 2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">01</div>
          <div>
            <h3 style="font-size: 1.2rem; color: #ffffff; margin-bottom: 6px;">Professional Carpentry Toolkits &amp; Electric Drivers</h3>
            <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.6;">
              Our technicians carry cordless power screwdrivers, hex keys, and rubber mallets for precision unbolting without thread stripping.
            </p>
          </div>
        </div>

        <div style="display: flex; gap: 20px; background: #172a54; padding: 24px; border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <div style="font-size: 2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">02</div>
          <div>
            <h3 style="font-size: 1.2rem; color: #ffffff; margin-bottom: 6px;">Heavy-Duty 4-Wheel Furniture Moving Dollies</h3>
            <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.6;">
              Solid hardwood dollies with non-marking rubber wheels transport heavy wardrobes across long corridors without human lifting strain.
            </p>
          </div>
        </div>

        <div style="display: flex; gap: 20px; background: #172a54; padding: 24px; border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <div style="font-size: 2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">03</div>
          <div>
            <h3 style="font-size: 1.2rem; color: #ffffff; margin-bottom: 6px;">Ergonomic Shoulder Lifting Straps &amp; Harnesses</h3>
            <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.6;">
              Heavy-duty webbed nylon lifting straps allow 2 movers to carry heavy double beds down staircases with proper posture.
            </p>
          </div>
        </div>

        <div style="display: flex; gap: 20px; background: #172a54; padding: 24px; border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <div style="font-size: 2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">04</div>
          <div>
            <h3 style="font-size: 1.2rem; color: #ffffff; margin-bottom: 6px;">Thick Moving Blankets &amp; Corrugated Corner Shields</h3>
            <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.6;">
              Quilted cotton moving pads and plastic corner caps protect polished wood surfaces from friction rubbing against truck walls.
            </p>
          </div>
        </div>

        <div style="display: flex; gap: 20px; background: #172a54; padding: 24px; border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <div style="font-size: 2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">05</div>
          <div>
            <h3 style="font-size: 1.2rem; color: #ffffff; margin-bottom: 6px;">Ratchet Belt Lashing inside Container Trucks</h3>
            <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.6;">
              Industrial ratchet tie-down straps secure large furniture items against truck side rails to eliminate movement over rough road patches.
            </p>
          </div>
        </div>

      </div>

    </div>
  </section>

  <!-- Section 10: Frequently Asked Questions (22 Detailed Furniture FAQs) -->
  <section style="padding: 70px 0; background: #070d1e; color: #ffffff;">
    <div class="container" style="max-width: 900px;">
      
      <div class="section-header text-center" style="margin-bottom: 45px;">
        <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Furniture Shifting FAQs</span>
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin-top: 10px;">
          Frequently Asked Questions About <span style="color: #f59e0b;">Moving Heavy Furniture in Ranchi</span>
        </h2>
        <p style="font-size: 1.05rem; color: #cbd5e1; max-width: 800px; margin: 15px auto 0 auto; line-height: 1.7;">
          Authoritative answers to common questions about heavy furniture dismantling, lifting techniques, rate structures, protection materials, and reassembly.
        </p>
      </div>

      <div style="display: flex; flex-direction: column; gap: 16px;">
        
        <div style="background: #101c40; padding: 20px 24px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Q1: What moving heavy furniture tips are most critical for Ranchi homeowners?</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.7;">
            The most critical tips include dismantling modular beds and wardrobes before lifting, using furniture sliders to prevent floor scratches, applying 3-layer bubble wrap, and utilizing shoulder lifting straps.
          </p>
        </div>

        <div style="background: #101c40; padding: 20px 24px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Q2: Do your movers provide dismantling and reassembly for modular beds and wardrobes?</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.7;">
            Yes, our team includes certified carpenters equipped with power toolkits to safely unbolt, label hardware, pack, and reassemble all types of furniture.
          </p>
        </div>

        <div style="background: #101c40; padding: 20px 24px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Q3: How much does it cost to move a single king-size bed or heavy wardrobe in Ranchi?</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.7;">
            Moving a single double bed or heavy 3-door wardrobe locally in Ranchi ranges between ₹1,800 and ₹3,500 including 3-layer bubble packaging and carpentry labor.
          </p>
        </div>

        <div style="background: #101c40; padding: 20px 24px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Q4: How do you prevent marble floors from getting scratched when sliding heavy sofas?</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.7;">
            We place heavy felt pads, plastic furniture sliders, or padded moving blankets underneath furniture legs so items glide smoothly without touching polished floor tiles.
          </p>
        </div>

        <div style="background: #101c40; padding: 20px 24px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Q5: What protective materials are used for expensive wooden dining tables?</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.7;">
            Dining table legs are detached, table surfaces wrapped in soft foam pads and heavy bubble wrap, and glass/marble tops packed inside custom wooden crates.
          </p>
        </div>

        <div style="background: #101c40; padding: 20px 24px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Q6: How are heavy furniture pieces carried up multi-story buildings without elevators?</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.7;">
            Our handlers use shoulder lifting straps (Forearm Forklift technique) and padded corner wrap to carry heavy items up stairwells safely without scuffing walls.
          </p>
        </div>

        <div style="background: #101c40; padding: 20px 24px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Q7: Should I empty drawers and cabinets before movers arrive?</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.7;">
            Yes, emptying all drawers reduces overall weight, prevents drawers from sliding open during transport, and protects structural joints from stress damage.
          </p>
        </div>

        <div style="background: #101c40; padding: 20px 24px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Q8: How do you secure small screws and hinges during furniture disassembly?</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.7;">
            All hardware fittings are placed into heavy-duty plastic zip bags and taped securely to the corresponding furniture panel so no parts are misplaced.
          </p>
        </div>

        <div style="background: #101c40; padding: 20px 24px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Q9: Can L-shaped recliners and bulky sofas pass through standard apartment door frames?</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.7;">
            Yes, our movers tilt recliners vertically into an 'L' hook position, unbolt removable feet, and maneuver them through narrow door openings seamlessly.
          </p>
        </div>

        <div style="background: #101c40; padding: 20px 24px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Q10: Are furniture items covered by transit insurance during intercity moves?</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.7;">
            Yes, we provide declared-value transit insurance covering furniture against accidental breakage, fire, or vehicle accident during highway transit.
          </p>
        </div>

        <div style="background: #101c40; padding: 20px 24px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Q11: What tools are essential for disassembling modern hydraulic storage beds?</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.7;">
            Hydraulic beds require socket wrenches, Allen keys, and gas strut safety locks to release lift mechanisms safely without spring recoil risks.
          </p>
        </div>

        <div style="background: #101c40; padding: 20px 24px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Q12: How do you prevent furniture from sliding around inside container trucks?</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.7;">
            All wrapped furniture panels are strapped firmly to container side rails using industrial ratchet tie-downs and padded with moving blankets.
          </p>
        </div>

        <div style="background: #101c40; padding: 20px 24px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Q13: Can antique wooden furniture be safely relocated without damage?</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.7;">
            Yes, antique items receive custom wooden crate framing, soft tissue wrapping, and zero-compression air bubble padding for maximum preservation.
          </p>
        </div>

        <div style="background: #101c40; padding: 20px 24px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Q14: Do you offer temporary warehouse storage for heavy furniture in Ranchi?</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.7;">
            Yes, we operate 24/7 CCTV-monitored warehousing facilities equipped with elevated wooden pallets for short or long-term furniture storage.
          </p>
        </div>

        <div style="background: #101c40; padding: 20px 24px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Q15: How can I book heavy furniture shifting services with Shree Ashirwad Packers in Ranchi?</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.7;">
            Call our furniture desk at <strong><?php echo SITE_PHONE; ?></strong> (Raw: <strong><?php echo SITE_PHONE_RAW; ?></strong>) or email <strong><?php echo SITE_EMAIL; ?></strong> for immediate booking.
          </p>
        </div>

        <div style="background: #101c40; padding: 20px 24px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Q16: How long does it take to dismantle and assemble a 3-door wooden wardrobe?</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.7;">
            It typically takes 30 to 45 minutes for dismantling and 45 to 60 minutes for precision reassembly and door alignment at destination.
          </p>
        </div>

        <div style="background: #101c40; padding: 20px 24px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Q17: What should I do if a heavy furniture item cannot fit into the elevator?</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.7;">
            If an item cannot fit into the elevator even after dismantling, our crew uses manual staircase carrying with shoulder straps or balcony hoisting ropes.
          </p>
        </div>

        <div style="background: #101c40; padding: 20px 24px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Q18: Are glass display doors on showcases wrapped separately?</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.7;">
            Yes, glass doors are removed from hinges, wrapped in anti-shock bubble wrap, sandwich-packed between corrugated boards, and labeled fragile.
          </p>
        </div>

        <div style="background: #101c40; padding: 20px 24px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Q19: Are there extra fees for heavy furniture shifting in Ranchi?</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.7;">
            No, all rate quotes provided by Shree Ashirwad Packers are fixed upfront after survey, guaranteeing zero hidden labor or stair-climbing fees.
          </p>
        </div>

        <div style="background: #101c40; padding: 20px 24px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Q20: Can heavy office conference tables be dismantled and moved?</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.7;">
            Yes, we handle commercial office furniture including multi-segment conference tables, executive desks, and ergonomic mesh chairs.
          </p>
        </div>

        <div style="background: #101c40; padding: 20px 24px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Q21: How are heavy mattresses protected during furniture relocation?</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.7;">
            Mattresses are enclosed in thick waterproof vinyl plastic covers and stretch lamination film to guarantee 100% protection against dirt and moisture.
          </p>
        </div>

        <div style="background: #101c40; padding: 20px 24px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Q22: Why choose Shree Ashirwad Packers for heavy furniture moving in Ranchi?</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.7;">
            We combine certified carpentry dismantling, shoulder lifting harnesses, 3-layer bubble packaging, non-marking floor sliders, and guaranteed scratch-free delivery.
          </p>
        </div>

      </div>

    </div>
  </section>

  <!-- Section 11: Call To Action Banner -->
  <section style="padding: 70px 0; background: linear-gradient(135deg, #172a54 0%, #0b132b 100%); border-top: 1.5px solid rgba(245, 158, 11, 0.4); color: #ffffff;">
    <div class="container" style="max-width: 900px; text-align: center;">
      
      <span class="section-tag" style="background: rgba(245, 158, 11, 0.2); color: #f59e0b; padding: 6px 16px; border-radius: 20px; font-size: 0.85rem; font-weight: 700; text-transform: uppercase;">
        Professional Furniture Relocation
      </span>

      <h2 style="font-size: 2.3rem; font-weight: 800; margin: 15px 0 15px 0; color: #ffffff;">
        Book Heavy Furniture Move with <span style="color: #f59e0b;">Shree Ashirwad Packers</span>
      </h2>

      <p style="font-size: 1.05rem; color: #cbd5e1; max-width: 750px; margin: 0 auto 30px auto; line-height: 1.7;">
        Contact our furniture desk today for a free pre-move survey, 3-layer bubble wrapping, certified carpentry dismantling, and scratch-free transport.
      </p>

      <div style="display: flex; gap: 15px; justify-content: center; flex-wrap: wrap; margin-bottom: 25px;">
        <a href="tel:<?php echo SITE_PHONE_RAW; ?>" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 30px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1.05rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
          📞 Call Furniture Desk: <?php echo SITE_PHONE; ?>
        </a>
        <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers%20and%20Movers,%20I%20want%20to%20book%20heavy%20furniture%20moving." target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 30px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1.05rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
          💬 Chat on WhatsApp
        </a>
        <a href="<?php echo SITE_URL; ?>pages/contact.php" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 30px; background: linear-gradient(135deg, #1e293b 0%, #0f172a 100%); border: 1.5px solid #f59e0b; color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1.05rem; text-decoration: none; box-shadow: 0 4px 15px rgba(245, 158, 11, 0.2);">
          📍 Visit Ranchi Office
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
  
  var message = "Hello Shree Ashirwad Packers & Movers,\n\nI would like to request a Heavy Furniture Moving Quote:\n- Name: " + name + "\n- Phone: " + phone + "\n- Pickup Area: " + moveFrom + "\n- Destination: " + moveTo;
  
  if (extraMsg && extraMsg.trim() !== '') {
    message += "\n- Furniture List: " + extraMsg;
  }
  
  var whatsappUrl = "https://api.whatsapp.com/send?phone=918409531615&text=" + encodeURIComponent(message);
  window.location.href = whatsappUrl;
}
</script>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
