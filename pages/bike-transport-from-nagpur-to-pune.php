<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "Bike Transport from Nagpur to Pune | Two-Wheeler Shifting Charges";
$page_desc = "Safe and insured bike transport services from Nagpur to Pune. Doorstep pickup across Dharampeth, Sadar & Wardha Road, 7-layer wrapping, enclosed container trucks, and door delivery in Pune within 24-48 hours.";
$page_keywords = "bike transport from nagpur to pune, nagpur to pune bike parcel service, two wheeler shifting nagpur to pune, bike transport charges nagpur to pune";
$canonical_url = "https://shreeashirwadpackersandmovers.com/pages/bike-transport-from-nagpur-to-pune.php";

require_once __DIR__ . '/../includes/header.php';
?>

<main class="site-main" style="background-color: #0b132b; color: #e2e8f0; font-family: 'Inter', system-ui, -apple-system, sans-serif;">

  <!-- Visual Breadcrumb Navigation Bar -->
  <div class="breadcrumb-wrapper" style="background: #1c2541; padding: 14px 0; border-bottom: 1px solid rgba(255,255,255,0.08);">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
      <div class="breadcrumb-list" style="font-size: 0.88rem; color: #94a3b8;">
        <span class="breadcrumb-item"><a href="<?php echo SITE_URL; ?>" title="Home" style="color: #f59e0b; text-decoration: none;">Home</a></span>
        <span class="breadcrumb-separator" style="margin: 0 8px; color: #64748b;">/</span>
        <span class="breadcrumb-item"><a href="<?php echo SITE_URL; ?>#services" title="Services" style="color: #f59e0b; text-decoration: none;">Services</a></span>
        <span class="breadcrumb-separator" style="margin: 0 8px; color: #64748b;">/</span>
        <span class="breadcrumb-item active" style="color: #cbd5e1;">Nagpur to Pune Bike Transport</span>
      </div>
    </div>
  </div>

  <!-- Section 1: Hero Section with Lead Form -->
  <section class="hero-section" style="background: linear-gradient(135deg, #0b132b 0%, #1c2541 100%); padding: 65px 0; color: #ffffff;">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
      <div class="hero-grid" style="display: grid; grid-template-columns: 1.2fr 0.8fr; gap: 40px; align-items: center;">
        
        <!-- Hero Text Column -->
        <div class="hero-text">
          <span class="section-tag" style="background: rgba(245, 158, 11, 0.15); color: #f59e0b; border: 1px solid rgba(245, 158, 11, 0.4); padding: 6px 16px; border-radius: 20px; font-size: 0.85rem; font-weight: 700; text-transform: uppercase; display: inline-block; margin-bottom: 15px;">
            NAGPUR TO PUNE EXPRESS BIKE TRANSPORT
          </span>
          <h1 style="font-size: 2.6rem; font-weight: 800; line-height: 1.25; margin-bottom: 20px; color: #ffffff;">
            Professional <span style="color: #f59e0b;">Bike Transport from Nagpur to Pune</span>
          </h1>
          <p style="font-size: 1.1rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 25px;">
            Planning to transport your motorcycle or scooter from Nagpur to Pune? Shree Ashirwad Packers and Movers provides safe, reliable intercity vehicle shipping via Samruddhi Mahamarg / NH 753, complete with 7-layer protective packaging and 100% transit insurance.
          </p>

          <div style="display: flex; gap: 15px; flex-wrap: wrap; margin-bottom: 30px;">
            <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Now" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
              <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call Now: <?php echo SITE_PHONE; ?>
            </a>
            <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20a%20quote%20for%20bike%20transport%20from%20Nagpur%20to%20Pune." title="Chat on WhatsApp" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
              <i class="fab fa-whatsapp" style="margin-right: 8px;"></i> Chat on WhatsApp
            </a>
          </div>

          <div style="display: flex; gap: 20px; font-size: 0.9rem; color: #94a3b8;">
            <span><strong style="color: #f59e0b;">24 - 48h</strong> Express Transit</span>
            <span><strong style="color: #f59e0b;">7-Layer</strong> Bubble Wrapping</span>
            <span><strong style="color: #f59e0b;">100% Insured</strong> Shifting</span>
          </div>
        </div>

        <!-- Hero Lead Form Column -->
        <div class="hero-form-card" style="background: rgba(255, 255, 255, 0.05); backdrop-filter: blur(10px); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 16px; padding: 30px; box-shadow: 0 15px 35px rgba(0,0,0,0.4);">
          <h2 style="font-size: 1.4rem; color: #ffffff; margin-bottom: 8px; font-weight: 700; text-align: center;">Get Instant Pune Quote</h2>
          <p style="font-size: 0.85rem; color: #94a3b8; text-align: center; margin-bottom: 20px;">Transparent pricing directly on WhatsApp in 2 minutes</p>

          <form action="#" method="POST" onsubmit="sendHeroWhatsAppLead(event, this);">
            <div style="margin-bottom: 14px;">
              <input type="text" name="name" class="form-control" placeholder="Your Full Name" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="margin-bottom: 14px;">
              <input type="tel" name="phone" class="form-control" placeholder="10-Digit Phone Number" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 10px; margin-bottom: 14px;">
              <input type="text" name="move_from" class="form-control" value="Nagpur" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
              <input type="text" name="move_to" class="form-control" value="Pune" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <button type="submit" style="width: 100%; padding: 14px; background: linear-gradient(135deg, #d32f2f 0%, #f59e0b 100%); color: #ffffff; border: none; border-radius: 50px; font-weight: 700; font-size: 1rem; cursor: pointer; transition: all 0.3s ease;">
              Get Free Estimate Now &rarr;
            </button>
          </form>
        </div>

      </div>
    </div>
  </section>

  <!-- Section 2: Key Operational Metrics -->
  <section style="padding: 45px 0; background: #1c2541; border-top: 1px solid rgba(255,255,255,0.05); border-bottom: 1px solid rgba(255,255,255,0.05);">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 25px; text-align: center;">
        
        <div style="padding: 20px; background: rgba(255,255,255,0.03); border-radius: 12px; border: 1px solid rgba(255,255,255,0.08);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; margin-bottom: 5px;">700 km</div>
          <div style="font-size: 0.9rem; color: #94a3b8;">Samruddhi Mahamarg Route</div>
        </div>

        <div style="padding: 20px; background: rgba(255,255,255,0.03); border-radius: 12px; border: 1px solid rgba(255,255,255,0.08);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; margin-bottom: 5px;">24-48 Hours</div>
          <div style="font-size: 0.9rem; color: #94a3b8;">Guaranteed Delivery Time</div>
        </div>

        <div style="padding: 20px; background: rgba(255,255,255,0.03); border-radius: 12px; border: 1px solid rgba(255,255,255,0.08);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; margin-bottom: 5px;">7-Layer</div>
          <div style="font-size: 0.9rem; color: #94a3b8;">Heavy Duty Wrapping</div>
        </div>

        <div style="padding: 20px; background: rgba(255,255,255,0.03); border-radius: 12px; border: 1px solid rgba(255,255,255,0.08);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; margin-bottom: 5px;">100%</div>
          <div style="font-size: 0.9rem; color: #94a3b8;">All-Risk Transit Cover</div>
        </div>

      </div>
    </div>
  </section>

  <!-- Section 3: Cost Estimation Matrix -->
  <section style="padding: 60px 0; background: #0b132b;">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
      
      <div style="text-align: center; margin-bottom: 40px;">
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin-bottom: 12px;">
          Estimated Bike Transport Charges from Nagpur to Pune
        </h2>
        <p style="color: #94a3b8; font-size: 1rem; max-width: 700px; margin: 0 auto;">
          Clear, transparent cost guide based on vehicle engine size and packaging tier.
        </p>
      </div>

      <div style="overflow-x: auto; background: #1c2541; border-radius: 14px; border: 1px solid rgba(255,255,255,0.1); padding: 10px;">
        <table style="width: 100%; border-collapse: collapse; text-align: left; font-size: 0.95rem; color: #e2e8f0;">
          <thead>
            <tr style="background: rgba(245, 158, 11, 0.15); border-bottom: 2px solid rgba(245, 158, 11, 0.3);">
              <th style="padding: 16px; color: #f59e0b; font-weight: 700;">Vehicle Category</th>
              <th style="padding: 16px; color: #f59e0b; font-weight: 700;">Engine Capacity</th>
              <th style="padding: 16px; color: #f59e0b; font-weight: 700;">Packaging Tier</th>
              <th style="padding: 16px; color: #f59e0b; font-weight: 700;">Estimated Cost</th>
            </tr>
          </thead>
          <tbody>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.05);">
              <td style="padding: 16px; font-weight: 600;">Scooters / Standard Commuter Bikes</td>
              <td style="padding: 16px;">100cc - 125cc</td>
              <td style="padding: 16px;">Bubble Wrap + Corrugated Cardboard</td>
              <td style="padding: 16px; color: #f59e0b; font-weight: 700;">₹3,000 - ₹3,800</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.05); background: rgba(255,255,255,0.02);">
              <td style="padding: 16px; font-weight: 600;">Executive / Sports Motorcycles</td>
              <td style="padding: 16px;">150cc - 250cc</td>
              <td style="padding: 16px;">5-Layer Foam + Guard Padding</td>
              <td style="padding: 16px; color: #f59e0b; font-weight: 700;">₹3,800 - ₹4,800</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.05);">
              <td style="padding: 16px; font-weight: 600;">Cruisers / Royal Enfield / Adventure</td>
              <td style="padding: 16px;">250cc - 500cc</td>
              <td style="padding: 16px;">7-Layer Heavy Duty Protection</td>
              <td style="padding: 16px; color: #f59e0b; font-weight: 700;">₹4,800 - ₹6,000</td>
            </tr>
            <tr>
              <td style="padding: 16px; font-weight: 600;">Superbikes & Premium Motorcycles</td>
              <td style="padding: 16px;">500cc+</td>
              <td style="padding: 16px;">Custom Wooden Crate Enclosure</td>
              <td style="padding: 16px; color: #f59e0b; font-weight: 700;">₹7,000 - ₹9,000</td>
            </tr>
          </tbody>
        </table>
      </div>
      <p style="font-size: 0.85rem; color: #64748b; margin-top: 12px; text-align: center;">
        * Rates depend on exact pickup locality in Nagpur and destination address in Pune.
      </p>
    </div>
  </section>

  <!-- Section 4: Operational Strengths -->
  <section style="padding: 60px 0; background: #1c2541;">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
      
      <div style="text-align: center; margin-bottom: 45px;">
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin-bottom: 12px;">
          Key Shifting Benefits
        </h2>
        <p style="color: #94a3b8; font-size: 1rem; max-width: 700px; margin: 0 auto;">
          Experience dependable two-wheeler transport between Nagpur and Pune.
        </p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 30px;">
        
        <div style="background: rgba(255,255,255,0.03); border-radius: 12px; padding: 30px; border: 1px solid rgba(255,255,255,0.08);">
          <div style="width: 50px; height: 50px; border-radius: 10px; background: rgba(245, 158, 11, 0.15); color: #f59e0b; display: flex; align-items: center; justify-content: center; font-size: 1.4rem; margin-bottom: 20px;">
            <i class="fas fa-box"></i>
          </div>
          <h3 style="font-size: 1.25rem; font-weight: 700; color: #ffffff; margin-bottom: 12px;">Multi-Layer Wrapping</h3>
          <p style="color: #94a3b8; font-size: 0.95rem; line-height: 1.7;">
            Heavy-duty bubble film, foam sheet padding, and stretch wrap shield motorcycle body parts from scratches.
          </p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border-radius: 12px; padding: 30px; border: 1px solid rgba(255,255,255,0.08);">
          <div style="width: 50px; height: 50px; border-radius: 10px; background: rgba(245, 158, 11, 0.15); color: #f59e0b; display: flex; align-items: center; justify-content: center; font-size: 1.4rem; margin-bottom: 20px;">
            <i class="fas fa-truck-moving"></i>
          </div>
          <h3 style="font-size: 1.25rem; font-weight: 700; color: #ffffff; margin-bottom: 12px;">Closed Container Carriers</h3>
          <p style="color: #94a3b8; font-size: 0.95rem; line-height: 1.7;">
            Vehicles are secured inside enclosed container trucks running regular routes on Samruddhi Expressway.
          </p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border-radius: 12px; padding: 30px; border: 1px solid rgba(255,255,255,0.08);">
          <div style="width: 50px; height: 50px; border-radius: 10px; background: rgba(245, 158, 11, 0.15); color: #f59e0b; display: flex; align-items: center; justify-content: center; font-size: 1.4rem; margin-bottom: 20px;">
            <i class="fas fa-file-contract"></i>
          </div>
          <h3 style="font-size: 1.25rem; font-weight: 700; color: #ffffff; margin-bottom: 12px;">Transit Insurance</h3>
          <p style="color: #94a3b8; font-size: 0.95rem; line-height: 1.7;">
            All-risk transit insurance documentation safeguards your motorcycle against highway hazards.
          </p>
        </div>

      </div>
    </div>
  </section>

  <!-- Section 5: Step-by-Step Relocation Workflow -->
  <section style="padding: 60px 0; background: #0b132b;">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
      
      <div style="text-align: center; margin-bottom: 45px;">
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin-bottom: 12px;">
          4-Step Relocation Process
        </h2>
        <p style="color: #94a3b8; font-size: 1rem; max-width: 700px; margin: 0 auto;">
          Doorstep pickup in Nagpur to doorstep delivery across Pune.
        </p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); gap: 25px;">
        
        <div style="background: #1c2541; padding: 25px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.08); position: relative;">
          <div style="font-size: 2.5rem; font-weight: 900; color: rgba(245, 158, 11, 0.2); position: absolute; top: 15px; right: 20px;">01</div>
          <h3 style="font-size: 1.1rem; font-weight: 700; color: #f59e0b; margin-bottom: 10px;">Nagpur Door Pickup</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6;">
            Doorstep vehicle pickup from Dharampeth, Sadar, Wardha Road, or Manish Nagar.
          </p>
        </div>

        <div style="background: #1c2541; padding: 25px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.08); position: relative;">
          <div style="font-size: 2.5rem; font-weight: 900; color: rgba(245, 158, 11, 0.2); position: absolute; top: 15px; right: 20px;">02</div>
          <h3 style="font-size: 1.1rem; font-weight: 700; color: #f59e0b; margin-bottom: 10px;">Multi-Layer Wrapping</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6;">
            Bubble wrapping, mirror securing, and pre-departure condition checklist.
          </p>
        </div>

        <div style="background: #1c2541; padding: 25px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.08); position: relative;">
          <div style="font-size: 2.5rem; font-weight: 900; color: rgba(245, 158, 11, 0.2); position: absolute; top: 15px; right: 20px;">03</div>
          <h3 style="font-size: 1.1rem; font-weight: 700; color: #f59e0b; margin-bottom: 10px;">Express Highway Transit</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6;">
            Direct transportation via Samruddhi Mahamarg corridor with regular tracking updates.
          </p>
        </div>

        <div style="background: #1c2541; padding: 25px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.08); position: relative;">
          <div style="font-size: 2.5rem; font-weight: 900; color: rgba(245, 158, 11, 0.2); position: absolute; top: 15px; right: 20px;">04</div>
          <h3 style="font-size: 1.1rem; font-weight: 700; color: #f59e0b; margin-bottom: 10px;">Pune Doorstep Delivery</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6;">
            Safe doorstep delivery to Hinjewadi, Wakad, Baner, Kothrud, Hadapsar, or Viman Nagar.
          </p>
        </div>

      </div>
    </div>
  </section>

  <!-- Section 6: Network Coverage -->
  <section style="padding: 60px 0; background: #1c2541;">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
      
      <div style="text-align: center; margin-bottom: 45px;">
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin-bottom: 12px;">
          Pickup & Delivery Network Coverage
        </h2>
        <p style="color: #94a3b8; font-size: 1rem;">
          Complete pickup presence in Nagpur and full coverage across Pune city.
        </p>
      </div>

      <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 30px;">
        
        <div style="background: #0b132b; padding: 30px; border-radius: 14px; border: 1px solid rgba(255,255,255,0.08);">
          <h3 style="font-size: 1.3rem; font-weight: 700; color: #f59e0b; margin-bottom: 15px; display: flex; align-items: center; gap: 10px;">
            <i class="fas fa-map-marker-alt"></i> Nagpur Pickup Areas
          </h3>
          <ul style="list-style: none; padding: 0; margin: 0; color: #cbd5e1; font-size: 0.95rem; line-height: 2;">
            <li><i class="fas fa-check-circle" style="color: #10b981; margin-right: 8px;"></i> Dharampeth, Ramdaspeth, Sadar, Civil Lines</li>
            <li><i class="fas fa-check-circle" style="color: #10b981; margin-right: 8px;"></i> Wardha Road, Manish Nagar, Besa, Beltarodi</li>
            <li><i class="fas fa-check-circle" style="color: #10b981; margin-right: 8px;"></i> Pratap Nagar, Bajaj Nagar, Sitabuldi</li>
            <li><i class="fas fa-check-circle" style="color: #10b981; margin-right: 8px;"></i> Kamptee Road, Mihan, Hingna Road</li>
          </ul>
        </div>

        <div style="background: #0b132b; padding: 30px; border-radius: 14px; border: 1px solid rgba(255,255,255,0.08);">
          <h3 style="font-size: 1.3rem; font-weight: 700; color: #f59e0b; margin-bottom: 15px; display: flex; align-items: center; gap: 10px;">
            <i class="fas fa-map-marker-alt"></i> Pune Delivery Localities
          </h3>
          <ul style="list-style: none; padding: 0; margin: 0; color: #cbd5e1; font-size: 0.95rem; line-height: 2;">
            <li><i class="fas fa-check-circle" style="color: #10b981; margin-right: 8px;"></i> Hinjewadi Phase 1-3, Wakad, Baner, Balewadi</li>
            <li><i class="fas fa-check-circle" style="color: #10b981; margin-right: 8px;"></i> Kothrud, Karve Nagar, Deccan, Shivajinagar</li>
            <li><i class="fas fa-check-circle" style="color: #10b981; margin-right: 8px;"></i> Viman Nagar, Kharadi, Magarpatta, Hadapsar</li>
            <li><i class="fas fa-check-circle" style="color: #10b981; margin-right: 8px;"></i> Pimple Saudagar, Chinchwad, Nigdi, Bhosari</li>
          </ul>
        </div>

      </div>
    </div>
  </section>

  <!-- Section 7: Documentation Requirements -->
  <section style="padding: 60px 0; background: #0b132b;">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
      
      <div style="text-align: center; margin-bottom: 40px;">
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin-bottom: 12px;">
          Required Documentation
        </h2>
        <p style="color: #94a3b8; font-size: 1rem;">
          Keep photocopies of these documents ready for highway transport checkposts:
        </p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 20px;">
        
        <div style="background: #1c2541; padding: 20px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <div style="font-weight: 700; color: #ffffff; margin-bottom: 5px;">1. Vehicle RC</div>
          <div style="font-size: 0.88rem; color: #94a3b8;">Registration Certificate Copy</div>
        </div>

        <div style="background: #1c2541; padding: 20px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <div style="font-weight: 700; color: #ffffff; margin-bottom: 5px;">2. Bike Insurance</div>
          <div style="font-size: 0.88rem; color: #94a3b8;">Valid Insurance Policy Copy</div>
        </div>

        <div style="background: #1c2541; padding: 20px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <div style="font-weight: 700; color: #ffffff; margin-bottom: 5px;">3. Identity Proof</div>
          <div style="font-size: 0.88rem; color: #94a3b8;">Aadhaar Card or Driving License</div>
        </div>

        <div style="background: #1c2541; padding: 20px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <div style="font-weight: 700; color: #ffffff; margin-bottom: 5px;">4. Consignment Note</div>
          <div style="font-size: 0.88rem; color: #94a3b8;">Issued on-site by Shree Ashirwad</div>
        </div>

      </div>
    </div>
  </section>

  <!-- Section 8: Preparation Tips -->
  <section style="padding: 60px 0; background: #1c2541;">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
      
      <div style="text-align: center; margin-bottom: 40px;">
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin-bottom: 12px;">
          Pre-Transport Guidelines
        </h2>
        <p style="color: #94a3b8; font-size: 1rem;">
          Recommended steps before handing your vehicle over to our team.
        </p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 25px;">
        
        <div style="background: #0b132b; padding: 25px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.05);">
          <h4 style="color: #f59e0b; font-size: 1.1rem; margin-bottom: 8px;">Minimal Fuel</h4>
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6;">Maintain less than 1 liter of petrol in the tank for transit safety compliance.</p>
        </div>

        <div style="background: #0b132b; padding: 25px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.05);">
          <h4 style="color: #f59e0b; font-size: 1.1rem; margin-bottom: 8px;">Remove Accessories</h4>
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6;">Remove helmets, keychains, and detached phone holders before wrapping.</p>
        </div>

        <div style="background: #0b132b; padding: 25px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.05);">
          <h4 style="color: #f59e0b; font-size: 1.1rem; margin-bottom: 8px;">Photo Verification</h4>
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6;">Take pictures of your bike from all angles alongside our team before loading.</p>
        </div>

      </div>
    </div>
  </section>

  <!-- Section 9: FAQ -->
  <section style="padding: 60px 0; background: #0b132b;">
    <div class="container" style="max-width: 1000px; margin: 0 auto; padding: 0 20px;">
      
      <div style="text-align: center; margin-bottom: 45px;">
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin-bottom: 12px;">
          Frequently Asked Questions (FAQ)
        </h2>
        <p style="color: #94a3b8; font-size: 1rem;">
          Everything you need to know about bike transport from Nagpur to Pune.
        </p>
      </div>

      <div style="display: flex; flex-direction: column; gap: 20px;">
        
        <div style="background: #1c2541; padding: 24px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.08);">
          <h3 style="font-size: 1.15rem; font-weight: 700; color: #f59e0b; margin-bottom: 10px;">Q1: What are the bike transport charges from Nagpur to Pune?</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.7; margin: 0;">
            Bike transport rates range from ₹3,000 to ₹6,000 depending on bike model, engine displacement, and chosen packaging tier.
          </p>
        </div>

        <div style="background: #1c2541; padding: 24px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.08);">
          <h3 style="font-size: 1.15rem; font-weight: 700; color: #f59e0b; margin-bottom: 10px;">Q2: How long does delivery take from Nagpur to Pune?</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.7; margin: 0;">
            Standard delivery timeline is 24 to 48 hours via regular container trucks on Samruddhi Mahamarg.
          </p>
        </div>

        <div style="background: #1c2541; padding: 24px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.08);">
          <h3 style="font-size: 1.15rem; font-weight: 700; color: #f59e0b; margin-bottom: 10px;">Q3: Do you provide doorstep pickup in Nagpur?</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.7; margin: 0;">
            Yes, doorstep pickup is available across Dharampeth, Sadar, Wardha Road, Manish Nagar, and all Nagpur localities.
          </p>
        </div>

        <div style="background: #1c2541; padding: 24px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.08);">
          <h3 style="font-size: 1.15rem; font-weight: 700; color: #f59e0b; margin-bottom: 10px;">Q4: Is my vehicle covered by insurance during transit?</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.7; margin: 0;">
            Yes, complete transit insurance is included to safeguard your motorcycle against transit damages.
          </p>
        </div>

        <div style="background: #1c2541; padding: 24px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.08);">
          <h3 style="font-size: 1.15rem; font-weight: 700; color: #f59e0b; margin-bottom: 10px;">Q5: Can I deliver my bike to Hinjewadi or Wakad Pune?</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.7; margin: 0;">
            Yes, our delivery network covers all areas in Pune including Hinjewadi, Wakad, Baner, Kothrud, and Hadapsar.
          </p>
        </div>

        <div style="background: #1c2541; padding: 24px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.08);">
          <h3 style="font-size: 1.15rem; font-weight: 700; color: #f59e0b; margin-bottom: 10px;">Q6: How is my motorcycle packaged for highway shipping?</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.7; margin: 0;">
            We use a 7-layer safety packaging system consisting of scratch-resistant film, 80-GSM bubble wrap, corrugated armor sheets, and heavy-duty tie-down straps.
          </p>
        </div>

        <div style="background: #1c2541; padding: 24px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.08);">
          <h3 style="font-size: 1.15rem; font-weight: 700; color: #f59e0b; margin-bottom: 10px;">Q7: What documents are required for Nagpur to Pune bike parceling?</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.7; margin: 0;">
            You need to provide a photocopy of your Vehicle Registration Certificate (RC), valid insurance policy, government photo ID, and sign the consignment note.
          </p>
        </div>

        <div style="background: #1c2541; padding: 24px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.08);">
          <h3 style="font-size: 1.15rem; font-weight: 700; color: #f59e0b; margin-bottom: 10px;">Q8: Do I need to drain the petrol tank before pickup?</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.7; margin: 0;">
            Yes, for safety regulations during enclosed container transit, the petrol tank should be nearly empty (under 1 liter).
          </p>
        </div>

        <div style="background: #1c2541; padding: 24px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.08);">
          <h3 style="font-size: 1.15rem; font-weight: 700; color: #f59e0b; margin-bottom: 10px;">Q9: Are custom wooden crates available for premium motorcycles?</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.7; margin: 0;">
            Yes, for premium bikes and sports motorcycles over 350cc, custom wooden crating is available upon request for maximum structural protection.
          </p>
        </div>

        <div style="background: #1c2541; padding: 24px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.08);">
          <h3 style="font-size: 1.15rem; font-weight: 700; color: #f59e0b; margin-bottom: 10px;">Q10: Are IBA GST invoices provided for corporate relocation reimbursement?</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.7; margin: 0;">
            Yes, we provide 100% official IBA-compliant GST bills and consignment receipts eligible for company claim reimbursements.
          </p>
        </div>

      </div>
    </div>
  </section>

  <!-- Section 10: Call-to-Action Footer -->
  <section style="padding: 60px 0; background: linear-gradient(135deg, #1c2541 0%, #0b132b 100%); border-top: 1px solid rgba(255,255,255,0.1);">
    <div class="container" style="max-width: 1000px; margin: 0 auto; padding: 0 20px; text-align: center;">
      
      <h2 style="font-size: 2.3rem; font-weight: 800; color: #ffffff; margin-bottom: 15px;">
        Book Your Bike Transport from Nagpur to Pune Today
      </h2>
      <p style="color: #cbd5e1; font-size: 1.1rem; max-width: 700px; margin: 0 auto 30px;">
        Get a quick free estimate on WhatsApp and schedule secure 24-48 hour intercity vehicle delivery.
      </p>

      <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap;">
        <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Us Now" style="padding: 15px 32px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1.05rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
          <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call Now: <?php echo SITE_PHONE; ?>
        </a>
        <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20a%20quote%20for%20bike%20transport%20from%20Nagpur%20to%20Pune." title="WhatsApp Chat" target="_blank" style="padding: 15px 32px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1.05rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
          <i class="fab fa-whatsapp" style="margin-right: 8px;"></i> WhatsApp Us
        </a>
      </div>

    </div>
  </section>

</main>

<!-- Section 11: Schema Markup (FAQPage JSON-LD) -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "What are the bike transport charges from Nagpur to Pune?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Bike transport rates range from ₹3,000 to ₹6,000 depending on bike model, engine displacement, and chosen packaging tier."
      }
    },
    {
      "@type": "Question",
      "name": "How long does delivery take from Nagpur to Pune?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Standard delivery timeline is 24 to 48 hours via regular container trucks on Samruddhi Mahamarg."
      }
    },
    {
      "@type": "Question",
      "name": "Do you provide doorstep pickup in Nagpur?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, doorstep pickup is available across Dharampeth, Sadar, Wardha Road, Manish Nagar, and all Nagpur localities."
      }
    },
    {
      "@type": "Question",
      "name": "Is my vehicle covered by insurance during transit?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, complete transit insurance is included to safeguard your motorcycle against transit damages."
      }
    },
    {
      "@type": "Question",
      "name": "Can I deliver my bike to Hinjewadi or Wakad Pune?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, our delivery network covers all areas in Pune including Hinjewadi, Wakad, Baner, Kothrud, and Hadapsar."
      }
    },
    {
      "@type": "Question",
      "name": "How is my motorcycle packaged for highway shipping?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "We use a 7-layer safety packaging system consisting of scratch-resistant film, 80-GSM bubble wrap, corrugated armor sheets, and heavy-duty tie-down straps."
      }
    },
    {
      "@type": "Question",
      "name": "What documents are required for Nagpur to Pune bike parceling?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "You need to provide a photocopy of your Vehicle Registration Certificate (RC), valid insurance policy, government photo ID, and sign the consignment note."
      }
    },
    {
      "@type": "Question",
      "name": "Do I need to drain the petrol tank before pickup?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, for safety regulations during enclosed container transit, the petrol tank should be nearly empty (under 1 liter)."
      }
    },
    {
      "@type": "Question",
      "name": "Are custom wooden crates available for premium motorcycles?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, for premium bikes and sports motorcycles over 350cc, custom wooden crating is available upon request for maximum structural protection."
      }
    },
    {
      "@type": "Question",
      "name": "Are IBA GST invoices provided for corporate relocation reimbursement?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, we provide 100% official IBA-compliant GST bills and consignment receipts eligible for company claim reimbursements."
      }
    }
  ]
}
</script>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>

