<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "Bike Transportation in Aruppukkottai | Safe Two-Wheeler Shifting Virudhunagar";
$page_desc = "Planning bike transportation in Aruppukkottai (Virudhunagar, Tamil Nadu)? Get safe, insured, and doorstep motorcycle shifting. High-quality multi-layer packing and real-time tracking.";
$page_keywords = "bike transportation in aruppukkottai, best bike transportation in aruppukkottai, affordable bike transportation in aruppukkottai, packers and movers, packers and movers in ranchi, top bike transportation in aruppukkottai company, household shifting bike transportation in aruppukkottai, doorstep bike transportation in aruppukkottai, verified bike transportation in aruppukkottai services, shree ashirwad bike transportation in aruppukkottai";
$canonical_url = "https://shreeashirwadpackersandmovers.com/pages/bike-transportation-in-aruppukkottai.php";

require_once __DIR__ . '/../includes/header.php';
?>

<main class="site-main">

  <!-- Visual Breadcrumb Navigation Bar -->
  <div class="breadcrumb-wrapper">
    <div class="container">
      <div class="breadcrumb-list">
        <span class="breadcrumb-item"><a href="<?php echo SITE_URL; ?>" title="Home">Home</a></span>
        <span class="breadcrumb-separator">/</span>
        <span class="breadcrumb-item active"><?php echo htmlspecialchars($page_title); ?></span>
      </div>
    </div>
  </div>

  <!-- Hero Section with Lead Form -->
  <section class="hero-section" style="background: linear-gradient(135deg, #0b132b 0%, #1c2541 100%); padding: 60px 0; color: #ffffff;">
    <div class="container">
      <div class="hero-grid" style="display: grid; grid-template-columns: 1.2fr 0.8fr; gap: 40px; align-items: center;">
        
        <!-- Hero Text Column -->
        <div class="hero-text">
          <span class="section-tag" style="background: rgba(245, 158, 11, 0.15); color: #f59e0b; border: 1px solid rgba(245, 158, 11, 0.4); padding: 6px 16px; border-radius: 20px; font-size: 0.85rem; font-weight: 700; text-transform: uppercase; display: inline-block; margin-bottom: 15px;">
            BIKE TRANSPORTATION ARUPPUKKOT RELOCATION SPECIALISTS
          </span>
          <h1 style="font-size: 2.7rem; font-weight: 800; line-height: 1.2; margin-bottom: 20px; color: #ffffff;">
            Professional <span style="color: #f59e0b;">Bike Transportation in Aruppukkottai</span>
          </h1>
          <p style="font-size: 1.12rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 25px;">
            Planning bike transportation in Aruppukkottai (Virudhunagar, Tamil Nadu)? Get safe, insured, and doorstep motorcycle shifting. High-quality multi-layer packing and real-time tracking.
          </p>

          <div style="display: flex; gap: 15px; flex-wrap: wrap; margin-bottom: 30px;">
            <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Now" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
              <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call Now: <?php echo SITE_PHONE; ?>
            </a>
            <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20a%20shifting%20quote." title="Chat on WhatsApp" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
              <i class="fab fa-whatsapp" style="margin-right: 8px;"></i> Chat on WhatsApp
            </a>
          </div>

          <div style="display: flex; gap: 20px; font-size: 0.9rem; color: #94a3b8;">
            <span><strong style="color: #f59e0b;">100% Insured</strong> Shifting</span>
            <span><strong style="color: #f59e0b;">7-Layer</strong> Bubble Packaging</span>
            <span><strong style="color: #f59e0b;">Door-to-Door</strong> Delivery</span>
          </div>
        </div>

        <!-- Hero Lead Form Column -->
        <div class="hero-form-card" style="background: rgba(255, 255, 255, 0.05); backdrop-filter: blur(10px); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 16px; padding: 30px; box-shadow: 0 15px 35px rgba(0,0,0,0.4);">
          <h2 style="font-size: 1.4rem; color: #ffffff; margin-bottom: 8px; font-weight: 700; text-align: center;">Get Aruppukkottai Shifting Quote</h2>
          <p style="font-size: 0.85rem; color: #94a3b8; text-align: center; margin-bottom: 20px;">Receive transparent cost estimation on WhatsApp in 2 minutes</p>

          <form action="#" method="POST" onsubmit="sendHeroWhatsAppLead(event, this);">
            <div style="margin-bottom: 14px;">
              <input type="text" name="name" class="form-control" placeholder="Your Full Name" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="margin-bottom: 14px;">
              <input type="tel" name="phone" class="form-control" placeholder="10-Digit Phone Number" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 10px; margin-bottom: 14px;">
              <input type="text" name="move_from" class="form-control" value="Aruppukkottai" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
              <input type="text" name="move_to" class="form-control" placeholder="Moving To (City/Area)" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <button type="submit" style="width: 100%; padding: 14px; background: linear-gradient(135deg, #d32f2f 0%, #f59e0b 100%); color: #ffffff; border: none; border-radius: 50px; font-weight: 700; font-size: 1rem; cursor: pointer;">
              Get Instant Estimate Now &rarr;
            </button>
          </form>
        </div>

      </div>
    </div>
  </section>

  <!-- 3. Key Stats Counter Bar -->
  <section style="background: #0f172a; padding: 35px 0; border-bottom: 1px solid rgba(255,255,255,0.05);">
    <div class="container">
      <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 20px; text-align: center;">
        <div style="padding: 20px; background: rgba(255,255,255,0.03); border-radius: 12px; border: 1px solid rgba(255,255,255,0.05);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; margin-bottom: 5px;">14,500+</div>
          <div style="font-size: 0.9rem; color: #94a3b8; font-weight: 600;">Bikes Safely Shifted</div>
        </div>
        <div style="padding: 20px; background: rgba(255,255,255,0.03); border-radius: 12px; border: 1px solid rgba(255,255,255,0.05);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #38bdf8; margin-bottom: 5px;">100%</div>
          <div style="font-size: 0.9rem; color: #94a3b8; font-weight: 600;">Insurance Guarantee</div>
        </div>
        <div style="padding: 20px; background: rgba(255,255,255,0.03); border-radius: 12px; border: 1px solid rgba(255,255,255,0.05);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #10b981; margin-bottom: 5px;">Zero</div>
          <div style="font-size: 0.9rem; color: #94a3b8; font-weight: 600;">Damage Guarantee</div>
        </div>
        <div style="padding: 20px; background: rgba(255,255,255,0.03); border-radius: 12px; border: 1px solid rgba(255,255,255,0.05);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f43f5e; margin-bottom: 5px;">24/7</div>
          <div style="font-size: 0.9rem; color: #94a3b8; font-weight: 600;">GPS Live Tracking</div>
        </div>
      </div>
    </div>
  </section>

  <!-- 4. 6-Card Feature Grid -->
  <section style="background: #0b132b; padding: 60px 0;">
    <div class="container">
      <div style="text-align: center; margin-bottom: 45px;">
        <span style="color: #f59e0b; font-weight: 700; font-size: 0.85rem; text-transform: uppercase; letter-spacing: 1px;">KEY ADVANTAGES</span>
        <h2 style="font-size: 2.2rem; color: #ffffff; font-weight: 800; margin-top: 5px;">Why Trust Us for Bike Transport in Aruppukkottai</h2>
      </div>
      <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 25px;">
        <div style="background: #1c2541; padding: 30px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.05);">
          <i class="fas fa-shield-alt" style="font-size: 2rem; color: #f59e0b; margin-bottom: 15px;"></i>
          <h3 style="font-size: 1.2rem; color: #ffffff; margin-bottom: 10px; font-weight: 700;">Multi-Layer Armor</h3>
          <p style="color: #94a3b8; font-size: 0.92rem; line-height: 1.6;">Bubble wrap, foam guards, and heavy corrugated sheets eliminate risk of scratches or dents.</p>
        </div>
        <div style="background: #1c2541; padding: 30px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.05);">
          <i class="fas fa-truck-moving" style="font-size: 2rem; color: #38bdf8; margin-bottom: 15px;"></i>
          <h3 style="font-size: 1.2rem; color: #ffffff; margin-bottom: 10px; font-weight: 700;">Enclosed Container Transport</h3>
          <p style="color: #94a3b8; font-size: 0.92rem; line-height: 1.6;">Covered car & bike container trucks with wheel locks for zero movement in transit.</p>
        </div>
        <div style="background: #1c2541; padding: 30px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.05);">
          <i class="fas fa-door-open" style="font-size: 2rem; color: #10b981; margin-bottom: 15px;"></i>
          <h3 style="font-size: 1.2rem; color: #ffffff; margin-bottom: 10px; font-weight: 700;">Doorstep Pickup & Delivery</h3>
          <p style="color: #94a3b8; font-size: 0.92rem; line-height: 1.6;">Doorstep pickup in Aruppukkottai (Virudhunagar) and direct delivery to your target destination.</p>
        </div>
        <div style="background: #1c2541; padding: 30px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.05);">
          <i class="fas fa-file-contract" style="font-size: 2rem; color: #f43f5e; margin-bottom: 15px;"></i>
          <h3 style="font-size: 1.2rem; color: #ffffff; margin-bottom: 10px; font-weight: 700;">Full Transit Insurance</h3>
          <p style="color: #94a3b8; font-size: 0.92rem; line-height: 1.6;">100% loss/damage insurance cover with quick claim clearance for total peace of mind.</p>
        </div>
        <div style="background: #1c2541; padding: 30px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.05);">
          <i class="fas fa-map-marker-alt" style="font-size: 2rem; color: #a855f7; margin-bottom: 15px;"></i>
          <h3 style="font-size: 1.2rem; color: #ffffff; margin-bottom: 10px; font-weight: 700;">Real-Time GPS Updates</h3>
          <p style="color: #94a3b8; font-size: 0.92rem; line-height: 1.6;">Stay updated on vehicle location with real-time tracking links sent to WhatsApp.</p>
        </div>
        <div style="background: #1c2541; padding: 30px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.05);">
          <i class="fas fa-headset" style="font-size: 2rem; color: #eab308; margin-bottom: 15px;"></i>
          <h3 style="font-size: 1.2rem; color: #ffffff; margin-bottom: 10px; font-weight: 700;">24/7 Customer Support</h3>
          <p style="color: #94a3b8; font-size: 0.92rem; line-height: 1.6;">Friendly relocation support available around the clock to answer your queries.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- 5. Specialized Services Breakdown -->
  <section style="background: #0f172a; padding: 60px 0;">
    <div class="container">
      <div style="text-align: center; margin-bottom: 45px;">
        <span style="color: #38bdf8; font-weight: 700; font-size: 0.85rem; text-transform: uppercase;">TAILORED SOLUTIONS</span>
        <h2 style="font-size: 2.2rem; color: #ffffff; font-weight: 800; margin-top: 5px;">Specialized Bike Relocation Options</h2>
      </div>
      <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 25px;">
        <div style="background: rgba(255,255,255,0.02); padding: 25px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.05);">
          <h3 style="font-size: 1.15rem; color: #f59e0b; margin-bottom: 10px; font-weight: 700;">Standard Scooters & Bikes</h3>
          <p style="color: #94a3b8; font-size: 0.9rem;">Budget-friendly, ultra-safe transport for everyday bikes with multi-layer bubble packing.</p>
        </div>
        <div style="background: rgba(255,255,255,0.02); padding: 25px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.05);">
          <h3 style="font-size: 1.15rem; color: #38bdf8; margin-bottom: 10px; font-weight: 700;">Cruisers & Royal Enfields</h3>
          <p style="color: #94a3b8; font-size: 0.9rem;">Heavyweight bike logistics using heavy-duty nylon safety belts and chassis padding.</p>
        </div>
        <div style="background: rgba(255,255,255,0.02); padding: 25px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.05);">
          <h3 style="font-size: 1.15rem; color: #10b981; margin-bottom: 10px; font-weight: 700;">Premium & Sports Bikes</h3>
          <p style="color: #94a3b8; font-size: 0.9rem;">Dedicated enclosed container shipping with customized foam guards for sports fairings.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- 6. 7-Layer Safety Packaging Framework -->
  <section style="background: #0b132b; padding: 60px 0;">
    <div class="container">
      <div style="text-align: center; margin-bottom: 45px;">
        <span style="color: #10b981; font-weight: 700; font-size: 0.85rem; text-transform: uppercase;">SAFETY PROTOCOL</span>
        <h2 style="font-size: 2.2rem; color: #ffffff; font-weight: 800; margin-top: 5px;">Our 7-Layer Bike Packaging Protocol</h2>
      </div>
      <div style="display: grid; grid-template-columns: repeat(7, 1fr); gap: 15px; text-align: center;">
        <div style="background: #1c2541; padding: 20px 10px; border-radius: 10px;">
          <div style="color: #f59e0b; font-weight: 800; font-size: 1.2rem; margin-bottom: 5px;">L-1</div>
          <div style="color: #ffffff; font-size: 0.85rem; font-weight: 600;">Dust Proof Polythene Cover</div>
        </div>
        <div style="background: #1c2541; padding: 20px 10px; border-radius: 10px;">
          <div style="color: #f59e0b; font-weight: 800; font-size: 1.2rem; margin-bottom: 5px;">L-2</div>
          <div style="color: #ffffff; font-size: 0.85rem; font-weight: 600;">High-Density Bubble Wrap</div>
        </div>
        <div style="background: #1c2541; padding: 20px 10px; border-radius: 10px;">
          <div style="color: #f59e0b; font-weight: 800; font-size: 1.2rem; margin-bottom: 5px;">L-3</div>
          <div style="color: #ffffff; font-size: 0.85rem; font-weight: 600;">Heavy Corrugated Sheet</div>
        </div>
        <div style="background: #1c2541; padding: 20px 10px; border-radius: 10px;">
          <div style="color: #f59e0b; font-weight: 800; font-size: 1.2rem; margin-bottom: 5px;">L-4</div>
          <div style="color: #ffffff; font-size: 0.85rem; font-weight: 600;">Foam Corner Protectors</div>
        </div>
        <div style="background: #1c2541; padding: 20px 10px; border-radius: 10px;">
          <div style="color: #f59e0b; font-weight: 800; font-size: 1.2rem; margin-bottom: 5px;">L-5</div>
          <div style="color: #ffffff; font-size: 0.85rem; font-weight: 600;">Waterproof Stretch Film</div>
        </div>
        <div style="background: #1c2541; padding: 20px 10px; border-radius: 10px;">
          <div style="color: #f59e0b; font-weight: 800; font-size: 1.2rem; margin-bottom: 5px;">L-6</div>
          <div style="color: #ffffff; font-size: 0.85rem; font-weight: 600;">Nylon Safety Belt Anchorage</div>
        </div>
        <div style="background: #1c2541; padding: 20px 10px; border-radius: 10px;">
          <div style="color: #f59e0b; font-weight: 800; font-size: 1.2rem; margin-bottom: 5px;">L-7</div>
          <div style="color: #ffffff; font-size: 0.85rem; font-weight: 600;">Wooden Crate (Optional)</div>
        </div>
      </div>
    </div>
  </section>

  <!-- 7. Estimated Rate Matrix -->
  <section style="background: #0f172a; padding: 60px 0;">
    <div class="container">
      <div style="text-align: center; margin-bottom: 40px;">
        <span style="color: #f59e0b; font-weight: 700; font-size: 0.85rem; text-transform: uppercase;">TRANSPARENT RATES</span>
        <h2 style="font-size: 2.2rem; color: #ffffff; font-weight: 800; margin-top: 5px;">Estimated Bike Transport Rates from Aruppukkottai</h2>
      </div>
      <div style="overflow-x: auto;">
        <table style="width: 100%; border-collapse: collapse; background: #1c2541; border-radius: 12px; overflow: hidden; text-align: left; color: #cbd5e1;">
          <thead>
            <tr style="background: #0b132b; color: #ffffff; font-size: 0.95rem;">
              <th style="padding: 16px 20px;">Destination / Distance</th>
              <th style="padding: 16px 20px;">Scooter / Standard Bike</th>
              <th style="padding: 16px 20px;">Royal Enfield / Cruiser</th>
              <th style="padding: 16px 20px;">Sports / Superbike</th>
              <th style="padding: 16px 20px;">Transit Duration</th>
            </tr>
          </thead>
          <tbody style="font-size: 0.9rem;">
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.05);">
              <td style="padding: 16px 20px; font-weight: 600; color: #fff;">Within Tamil Nadu / Regional (50 - 250 km)</td>
              <td style="padding: 16px 20px; color: #f59e0b; font-weight: 700;">₹2,000 - ₹3,500</td>
              <td style="padding: 16px 20px; color: #f59e0b; font-weight: 700;">₹3,000 - ₹4,800</td>
              <td style="padding: 16px 20px; color: #f59e0b; font-weight: 700;">₹4,500 - ₹6,500</td>
              <td style="padding: 16px 20px;">24 - 48 Hours</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.05);">
              <td style="padding: 16px 20px; font-weight: 600; color: #fff;">South India Metros (250 - 800 km)</td>
              <td style="padding: 16px 20px; color: #f59e0b; font-weight: 700;">₹3,500 - ₹5,800</td>
              <td style="padding: 16px 20px; color: #f59e0b; font-weight: 700;">₹4,800 - ₹7,200</td>
              <td style="padding: 16px 20px; color: #f59e0b; font-weight: 700;">₹6,500 - ₹9,800</td>
              <td style="padding: 16px 20px;">2 - 4 Days</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.05);">
              <td style="padding: 16px 20px; font-weight: 600; color: #fff;">Central & West India (800 - 1500 km)</td>
              <td style="padding: 16px 20px; color: #f59e0b; font-weight: 700;">₹5,000 - ₹7,800</td>
              <td style="padding: 16px 20px; color: #f59e0b; font-weight: 700;">₹6,500 - ₹9,500</td>
              <td style="padding: 16px 20px; color: #f59e0b; font-weight: 700;">₹8,500 - ₹12,800</td>
              <td style="padding: 16px 20px;">4 - 6 Days</td>
            </tr>
            <tr>
              <td style="padding: 16px 20px; font-weight: 600; color: #fff;">North & East India (1500+ km)</td>
              <td style="padding: 16px 20px; color: #f59e0b; font-weight: 700;">₹6,500 - ₹9,800</td>
              <td style="padding: 16px 20px; color: #f59e0b; font-weight: 700;">₹8,000 - ₹11,800</td>
              <td style="padding: 16px 20px; color: #f59e0b; font-weight: 700;">₹11,000 - ₹16,500</td>
              <td style="padding: 16px 20px;">6 - 8 Days</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </section>

  <!-- 8. Intercity Route Network Grid -->
  <section style="background: #0b132b; padding: 60px 0;">
    <div class="container">
      <div style="text-align: center; margin-bottom: 40px;">
        <span style="color: #38bdf8; font-weight: 700; font-size: 0.85rem; text-transform: uppercase;">CONNECTIVITY NETWORK</span>
        <h2 style="font-size: 2.2rem; color: #ffffff; font-weight: 800; margin-top: 5px;">Popular Routes from Aruppukkottai & Tamil Nadu</h2>
      </div>
      <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 15px;">
        <a href="<?php echo SITE_URL; ?>/pages/bike-transport-from-madurai-to-chennai.php" title="Aruppukkottai to Chennai" style="background: #1c2541; padding: 15px; border-radius: 8px; text-decoration: none; color: #cbd5e1; font-size: 0.9rem; border: 1px solid rgba(255,255,255,0.05); display: block; text-align: center;">Aruppukkottai to Chennai</a>
        <a href="<?php echo SITE_URL; ?>/pages/bike-transport-from-madurai-to-bangalore.php" title="Aruppukkottai to Bangalore" style="background: #1c2541; padding: 15px; border-radius: 8px; text-decoration: none; color: #cbd5e1; font-size: 0.9rem; border: 1px solid rgba(255,255,255,0.05); display: block; text-align: center;">Aruppukkottai to Bangalore</a>
        <a href="<?php echo SITE_URL; ?>/pages/bike-transport-from-bangalore-to-mumbai.php" title="Aruppukkottai to Mumbai" style="background: #1c2541; padding: 15px; border-radius: 8px; text-decoration: none; color: #cbd5e1; font-size: 0.9rem; border: 1px solid rgba(255,255,255,0.05); display: block; text-align: center;">Aruppukkottai to Mumbai</a>
        <a href="<?php echo SITE_URL; ?>/pages/bike-transport-from-bangalore-to-delhi.php" title="Aruppukkottai to Delhi" style="background: #1c2541; padding: 15px; border-radius: 8px; text-decoration: none; color: #cbd5e1; font-size: 0.9rem; border: 1px solid rgba(255,255,255,0.05); display: block; text-align: center;">Aruppukkottai to Delhi</a>
      </div>
    </div>
  </section>

  <!-- 9. IBA Approved GST Billing Documentation -->
  <section style="background: #0f172a; padding: 60px 0;">
    <div class="container">
      <div style="text-align: center; margin-bottom: 40px;">
        <span style="color: #f59e0b; font-weight: 700; font-size: 0.85rem; text-transform: uppercase;">OFFICIAL DOCUMENTATION</span>
        <h2 style="font-size: 2.2rem; color: #ffffff; font-weight: 800; margin-top: 5px;">IBA Approved & 100% GST Compliant Shifting</h2>
      </div>
      <div style="background: #1c2541; padding: 35px; border-radius: 12px; border: 1px solid rgba(255,255,255,0.05);">
        <p style="color: #cbd5e1; line-height: 1.8; margin-bottom: 20px;">
          We issue official IBA-approved bills for government, defense, PSU, corporate, and private sector employees relocating from Aruppukkottai. Claim your full relocation allowance with authentic GST paperwork.
        </p>
        <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 15px; color: #94a3b8; font-size: 0.9rem;">
          <div><i class="fas fa-check-circle" style="color: #10b981; margin-right: 8px;"></i> 18% GST Invoice</div>
          <div><i class="fas fa-check-circle" style="color: #10b981; margin-right: 8px;"></i> Consignment Consignor Copy</div>
          <div><i class="fas fa-check-circle" style="color: #10b981; margin-right: 8px;"></i> Transit Insurance Policy</div>
          <div><i class="fas fa-check-circle" style="color: #10b981; margin-right: 8px;"></i> Vehicle Condition Receipt</div>
          <div><i class="fas fa-check-circle" style="color: #10b981; margin-right: 8px;"></i> Money Payment Receipt</div>
          <div><i class="fas fa-check-circle" style="color: #10b981; margin-right: 8px;"></i> IBA Transport Seal</div>
        </div>
      </div>
    </div>
  </section>

  <!-- 10. Detailed FAQs with Schema -->
  <section style="background: #0b132b; padding: 60px 0;">
    <div class="container">
      <div style="text-align: center; margin-bottom: 45px;">
        <span style="color: #f59e0b; font-weight: 700; font-size: 0.85rem; text-transform: uppercase;">FREQUENTLY ASKED QUESTIONS</span>
        <h2 style="font-size: 2.2rem; color: #ffffff; font-weight: 800; margin-top: 5px;">Common Questions About Bike Shifting from Aruppukkottai</h2>
      </div>

      <div style="max-width: 900px; margin: 0 auto; display: flex; flex-direction: column; gap: 20px;">
        
        <div style="background: #1c2541; border-radius: 10px; padding: 25px; border: 1px solid rgba(255,255,255,0.05);">
          <h3 style="font-size: 1.15rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">How is my bike protected during transport from Aruppukkottai?</h3>
          <p style="color: #94a3b8; font-size: 0.95rem; line-height: 1.6; margin: 0;">We wrap the bike in 7 layers of protection including bubble wrap, foam, corrugated cardboard, and stretch film, anchored securely with safety belts inside enclosed vehicle carriers.</p>
        </div>

        <div style="background: #1c2541; border-radius: 10px; padding: 25px; border: 1px solid rgba(255,255,255,0.05);">
          <h3 style="font-size: 1.15rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">Which documents are mandatory for bike transport in Aruppukkottai?</h3>
          <p style="color: #94a3b8; font-size: 0.95rem; line-height: 1.6; margin: 0;">You will need to submit photocopies of the bike RC (Registration Certificate), active Insurance policy, valid PUC certificate, and your ID proof (Aadhaar/PAN).</p>
        </div>

        <div style="background: #1c2541; border-radius: 10px; padding: 25px; border: 1px solid rgba(255,255,255,0.05);">
          <h3 style="font-size: 1.15rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">Do you provide door-to-door pickup in Aruppukkottai?</h3>
          <p style="color: #94a3b8; font-size: 0.95rem; line-height: 1.6; margin: 0;">Yes, we offer complete door-to-door bike collection from your home in Aruppukkottai and surrounding Virudhunagar areas directly to your destination address.</p>
        </div>

        <div style="background: #1c2541; border-radius: 10px; padding: 25px; border: 1px solid rgba(255,255,255,0.05);">
          <h3 style="font-size: 1.15rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">How much fuel should remain in the tank?</h3>
          <p style="color: #94a3b8; font-size: 0.95rem; line-height: 1.6; margin: 0;">Please keep about 1 to 2 liters of petrol in the tank for loading/unloading while keeping the weight and safety compliant for interstate haulage.</p>
        </div>

        <div style="background: #1c2541; border-radius: 10px; padding: 25px; border: 1px solid rgba(255,255,255,0.05);">
          <h3 style="font-size: 1.15rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">Are bills provided for corporate relocation claims?</h3>
          <p style="color: #94a3b8; font-size: 0.95rem; line-height: 1.6; margin: 0;">Yes, we issue 100% genuine IBA-approved GST invoices, consignment notes, and insurance policies for easy reimbursement claims.</p>
        </div>

      </div>
    </div>
  </section>

  <!-- 11. Call-To-Action Conversion Footer -->
  <section style="background: linear-gradient(135deg, #1c2541 0%, #0b132b 100%); padding: 60px 0; text-align: center; border-top: 1px solid rgba(255,255,255,0.05);">
    <div class="container">
      <h2 style="font-size: 2.4rem; color: #ffffff; font-weight: 800; margin-bottom: 15px;">Ready to Transport Your Bike from Aruppukkottai?</h2>
      <p style="font-size: 1.1rem; color: #94a3b8; max-width: 700px; margin: 0 auto 30px; line-height: 1.7;">
        Get an instant, transparent quote with zero hidden charges. Safe, insured, and doorstep two-wheeler relocation.
      </p>

      <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap;">
        <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Us Immediately" style="padding: 16px 36px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1.05rem; text-decoration: none; box-shadow: 0 4px 20px rgba(225, 29, 72, 0.4);">
          <i class="fas fa-phone-alt" style="margin-right: 10px;"></i> Call Us Immediately: <?php echo SITE_PHONE; ?>
        </a>
        <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20a%20shifting%20quote." title="Request WhatsApp Quote" target="_blank" style="padding: 16px 36px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1.05rem; text-decoration: none; box-shadow: 0 4px 20px rgba(16, 185, 129, 0.4);">
          <i class="fab fa-whatsapp" style="margin-right: 10px;"></i> Request WhatsApp Quote
        </a>
      </div>
    </div>
  </section>

</main>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "How is my bike protected during transport from Aruppukkottai?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "We wrap the bike in 7 layers of protection including bubble wrap, foam, corrugated cardboard, and stretch film, anchored securely with safety belts inside enclosed vehicle carriers."
      }
    },
    {
      "@type": "Question",
      "name": "Which documents are mandatory for bike transport in Aruppukkottai?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "You will need to submit photocopies of the bike RC (Registration Certificate), active Insurance policy, valid PUC certificate, and your ID proof (Aadhaar/PAN)."
      }
    },
    {
      "@type": "Question",
      "name": "Do you provide door-to-door pickup in Aruppukkottai?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, we offer complete door-to-door bike collection from your home in Aruppukkottai and surrounding Virudhunagar areas directly to your destination address."
      }
    },
    {
      "@type": "Question",
      "name": "How much fuel should remain in the tank?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Please keep about 1 to 2 liters of petrol in the tank for loading/unloading while keeping the weight and safety compliant for interstate haulage."
      }
    },
    {
      "@type": "Question",
      "name": "Are bills provided for corporate relocation claims?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, we issue 100% genuine IBA-approved GST invoices, consignment notes, and insurance policies for easy reimbursement claims."
      }
    }
  ]
}
</script>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
