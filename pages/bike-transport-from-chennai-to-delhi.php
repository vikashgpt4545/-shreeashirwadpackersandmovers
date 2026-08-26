<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "Bike Transport from Chennai to Delhi | Safe Two-Wheeler Shifting";
$page_desc = "Professional long-distance bike transport from Chennai to Delhi. 100% insured, 7-layer safety packaging, door-to-door motorcycle shipping across 2,200 km. Check estimated charges, transit time, and book verified carriers.";
$page_keywords = "bike transport from chennai to delhi, motorcycle shipping chennai to delhi, two wheeler transport chennai delhi, bike packers and movers chennai delhi, bike shifting charges chennai delhi";
$canonical_url = "https://shreeashirwadpackersandmovers.com/pages/bike-transport-from-chennai-to-delhi.php";

require_once __DIR__ . '/../includes/header.php';
?>

<main class="site-main">

  <!-- Visual Breadcrumb Navigation Bar -->
  <div class="breadcrumb-wrapper">
    <div class="container">
      <div class="breadcrumb-list">
        <span class="breadcrumb-item"><a href="<?php echo SITE_URL; ?>" title="Home">Home</a></span>
        <span class="breadcrumb-separator">/</span>
        <span class="breadcrumb-item active">Bike Transport from Chennai to Delhi</span>
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
            CHENNAI TO DELHI LONG-DISTANCE SPECIALISTS
          </span>
          <h1 style="font-size: 2.7rem; font-weight: 800; line-height: 1.2; margin-bottom: 20px; color: #ffffff;">
            Safe &amp; Insured <span style="color: #f59e0b;">Bike Transport from Chennai to Delhi</span>
          </h1>
          <p style="font-size: 1.12rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 25px;">
            Moving your motorcycle across 2,200 km from Chennai to Delhi? Shree Ashirwad Packers and Movers offers heavy-duty 7-layer bubble wrapping, enclosed container transit, door pickup from any location in Chennai, and safe delivery across Delhi NCR including Dwarka, Rohini, Connaught Place, and South Extension.
          </p>

          <div style="display: flex; gap: 15px; flex-wrap: wrap; margin-bottom: 30px;">
            <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Now" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
              <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call Now: <?php echo SITE_PHONE; ?>
            </a>
            <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20a%20quote%20for%20bike%20transport%20from%20Chennai%20to%20Delhi." title="Chat on WhatsApp" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
              <i class="fab fa-whatsapp" style="margin-right: 8px;"></i> Chat on WhatsApp
            </a>
          </div>

          <div style="display: flex; gap: 20px; font-size: 0.9rem; color: #94a3b8;">
            <span><strong style="color: #f59e0b;">100% Insured</strong> Interstate Transit</span>
            <span><strong style="color: #f59e0b;">7-Layer</strong> Safety Packaging</span>
            <span><strong style="color: #f59e0b;">4-6 Days</strong> Express Delivery</span>
          </div>
        </div>

        <!-- Hero Lead Form Column -->
        <div class="hero-form-card" style="background: rgba(255, 255, 255, 0.05); backdrop-filter: blur(10px); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 16px; padding: 30px; box-shadow: 0 15px 35px rgba(0,0,0,0.4);">
          <h2 style="font-size: 1.4rem; color: #ffffff; margin-bottom: 8px; font-weight: 700; text-align: center;">Get Instant Bike Shifting Quote</h2>
          <p style="font-size: 0.85rem; color: #94a3b8; text-align: center; margin-bottom: 20px;">Transparent pricing for Chennai to Delhi motorcycle shipping</p>

          <form action="#" method="POST" onsubmit="sendHeroWhatsAppLead(event, this);">
            <div style="margin-bottom: 14px;">
              <input type="text" name="name" class="form-control" placeholder="Your Full Name" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="margin-bottom: 14px;">
              <input type="tel" name="phone" class="form-control" placeholder="10-Digit Mobile Number" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 10px; margin-bottom: 14px;">
              <input type="text" name="move_from" class="form-control" value="Chennai" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
              <input type="text" name="move_to" class="form-control" value="Delhi" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <button type="submit" style="width: 100%; padding: 14px; background: linear-gradient(135deg, #d32f2f 0%, #f59e0b 100%); color: #ffffff; border: none; border-radius: 50px; font-weight: 700; font-size: 1rem; cursor: pointer;">
              Get Instant Estimate &rarr;
            </button>
          </form>
        </div>

      </div>
    </div>
  </section>

  <!-- Section 2: Key Stats & Trust Metrics -->
  <section style="background: #0f172a; padding: 40px 0; border-bottom: 1px solid rgba(255,255,255,0.05);">
    <div class="container">
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 20px; text-align: center;">
        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 12px; padding: 20px;">
          <h3 style="font-size: 2rem; color: #f59e0b; margin-bottom: 5px; font-weight: 800;">2,200 km</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; margin: 0;">NH44 Highway Route</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 12px; padding: 20px;">
          <h3 style="font-size: 2rem; color: #f59e0b; margin-bottom: 5px; font-weight: 800;">4 - 6 Days</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; margin: 0;">Interstate Delivery Window</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 12px; padding: 20px;">
          <h3 style="font-size: 2rem; color: #f59e0b; margin-bottom: 5px; font-weight: 800;">12,500+</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; margin: 0;">Interstate Vehicles Delivered</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 12px; padding: 20px;">
          <h3 style="font-size: 2rem; color: #f59e0b; margin-bottom: 5px; font-weight: 800;">100% Insured</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; margin: 0;">All-Risk Transit Policy</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 3: Overview & Route Details -->
  <section style="padding: 60px 0; background: #0b132b; color: #cbd5e1;">
    <div class="container">
      <div style="max-width: 900px; margin: 0 auto;">
        <h2 style="font-size: 2rem; color: #ffffff; font-weight: 700; margin-bottom: 20px;">
          Expert <span style="color: #f59e0b;">Chennai to Delhi Bike Transport</span> Services
        </h2>
        <p style="line-height: 1.8; margin-bottom: 20px;">
          Transporting a vehicle across 2,200 km from Tamil Nadu to Delhi NCR involves traversing multi-state highway networks (NH44), passing through Andhra Pradesh, Telangana, Maharashtra, Madhya Pradesh, and Uttar Pradesh. Shree Ashirwad Packers and Movers ensures continuous protection using specialized enclosed car &amp; bike carriers, preventing weather exposure, road tar damage, and transit vibrations.
        </p>
        <p style="line-height: 1.8;">
          Whether you need to ship a commuter scooter, an executive commuter, a Royal Enfield, or a high-end superbike, our certified logistics team coordinates complete documentation, transit insurance, and doorstep pickup/delivery across all sectors of Delhi NCR.
        </p>
      </div>
    </div>
  </section>

  <!-- Section 4: Pricing Matrix Table -->
  <section style="padding: 60px 0; background: #1c2541; color: #ffffff;">
    <div class="container">
      <h2 style="font-size: 2rem; text-align: center; font-weight: 700; margin-bottom: 10px;">
        Bike Transport Charges from <span style="color: #f59e0b;">Chennai to Delhi</span>
      </h2>
      <p style="text-align: center; color: #94a3b8; margin-bottom: 40px;">Estimated cost breakdown based on engine capacity and vehicle type</p>

      <div style="overflow-x: auto; max-width: 900px; margin: 0 auto;">
        <table style="width: 100%; border-collapse: collapse; background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.1); border-radius: 12px; overflow: hidden;">
          <thead>
            <tr style="background: rgba(245, 158, 11, 0.2); color: #f59e0b; text-align: left;">
              <th style="padding: 16px 20px; border-bottom: 1px solid rgba(255,255,255,0.1);">Vehicle Category</th>
              <th style="padding: 16px 20px; border-bottom: 1px solid rgba(255,255,255,0.1);">Engine Capacity</th>
              <th style="padding: 16px 20px; border-bottom: 1px solid rgba(255,255,255,0.1);">Estimated Price Range</th>
              <th style="padding: 16px 20px; border-bottom: 1px solid rgba(255,255,255,0.1);">Transit Time</th>
            </tr>
          </thead>
          <tbody>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.05);">
              <td style="padding: 16px 20px;">Scooters &amp; Mopeds</td>
              <td style="padding: 16px 20px;">Up to 125cc</td>
              <td style="padding: 16px 20px; color: #f59e0b; font-weight: 700;">₹4,500 - ₹6,500</td>
              <td style="padding: 16px 20px;">4 - 6 Days</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.05); background: rgba(255,255,255,0.02);">
              <td style="padding: 16px 20px;">Standard Commuter Bikes</td>
              <td style="padding: 16px 20px;">100cc - 150cc</td>
              <td style="padding: 16px 20px; color: #f59e0b; font-weight: 700;">₹5,500 - ₹7,800</td>
              <td style="padding: 16px 20px;">4 - 6 Days</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.05);">
              <td style="padding: 16px 20px;">Executive &amp; Sports Bikes</td>
              <td style="padding: 16px 20px;">150cc - 250cc</td>
              <td style="padding: 16px 20px; color: #f59e0b; font-weight: 700;">₹6,800 - ₹9,200</td>
              <td style="padding: 16px 20px;">4 - 6 Days</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.05); background: rgba(255,255,255,0.02);">
              <td style="padding: 16px 20px;">Cruisers &amp; Royal Enfield</td>
              <td style="padding: 16px 20px;">350cc - 500cc</td>
              <td style="padding: 16px 20px; color: #f59e0b; font-weight: 700;">₹8,500 - ₹12,000</td>
              <td style="padding: 16px 20px;">4 - 6 Days</td>
            </tr>
            <tr>
              <td style="padding: 16px 20px;">Premium Superbikes</td>
              <td style="padding: 16px 20px;">500cc+ / Imported</td>
              <td style="padding: 16px 20px; color: #f59e0b; font-weight: 700;">₹12,000 - ₹18,500</td>
              <td style="padding: 16px 20px;">4 - 6 Days</td>
            </tr>
          </tbody>
        </table>
      </div>
      <p style="text-align: center; font-size: 0.85rem; color: #94a3b8; margin-top: 15px;">*Prices are indicative and subject to exact pick-up locality, fuel rates, and optional door delivery requirements.</p>
    </div>
  </section>

  <!-- Section 5: 7-Layer Safety Packaging Framework -->
  <section style="padding: 60px 0; background: #0b132b; color: #ffffff;">
    <div class="container">
      <h2 style="font-size: 2rem; text-align: center; font-weight: 700; margin-bottom: 40px;">
        Our Signature <span style="color: #f59e0b;">7-Layer Safety Packaging</span> Framework
      </h2>
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 25px;">
        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 12px; padding: 25px;">
          <div style="color: #f59e0b; font-weight: 800; font-size: 1.3rem; margin-bottom: 10px;">Layer 1: Stretch Film Wrapping</div>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.6; margin: 0;">Initial dust-proof barrier that guards body paint, chrome panels, and mirrors from dirt and moisture.</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 12px; padding: 25px;">
          <div style="color: #f59e0b; font-weight: 800; font-size: 1.3rem; margin-bottom: 10px;">Layer 2: Heavy-Duty Bubble Wrap</div>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.6; margin: 0;">High-density air cushion layer covering the fuel tank, fairing, headlights, and tail lamps against shocks.</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 12px; padding: 25px;">
          <div style="color: #f59e0b; font-weight: 800; font-size: 1.3rem; margin-bottom: 10px;">Layer 3: Foam Sheet Guards</div>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.6; margin: 0;">Thick EVA foam strips placed around sensitive engine components, exhaust pipes, and handlebars.</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 12px; padding: 25px;">
          <div style="color: #f59e0b; font-weight: 800; font-size: 1.3rem; margin-bottom: 10px;">Layer 4: Corrugated Sheet Sheathing</div>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.6; margin: 0;">Custom-cut heavy cardboard sheets molded around the bike body to absorb high-impact collisions.</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 12px; padding: 25px;">
          <div style="color: #f59e0b; font-weight: 800; font-size: 1.3rem; margin-bottom: 10px;">Layer 5: Edge Protectors &amp; Corner Guards</div>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.6; margin: 0;">Reinforced hardboard corner strips fitted to levers, indicator lights, and mudguards.</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 12px; padding: 25px;">
          <div style="color: #f59e0b; font-weight: 800; font-size: 1.3rem; margin-bottom: 10px;">Layer 6: Industrial Poly-Crate / Strapping</div>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.6; margin: 0;">Tensioned polypropylene strapping and optional wooden crate casing for high-value bikes.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 6: Step-by-Step Relocation Process -->
  <section style="padding: 60px 0; background: #1c2541; color: #ffffff;">
    <div class="container">
      <h2 style="font-size: 2rem; text-align: center; font-weight: 700; margin-bottom: 40px;">
        Step-by-Step <span style="color: #f59e0b;">Bike Transport Process</span>
      </h2>
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 20px;">
        <div style="background: rgba(0,0,0,0.2); border-radius: 12px; padding: 25px; border: 1px solid rgba(255,255,255,0.05);">
          <div style="background: #f59e0b; color: #000; width: 40px; height: 40px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 800; margin-bottom: 15px;">1</div>
          <h3 style="font-size: 1.1rem; color: #ffffff; margin-bottom: 10px;">Booking &amp; Inspection</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6;">Schedule doorstep pickup across Chennai. Physical inspection and pre-existing condition recording.</p>
        </div>
        <div style="background: rgba(0,0,0,0.2); border-radius: 12px; padding: 25px; border: 1px solid rgba(255,255,255,0.05);">
          <div style="background: #f59e0b; color: #000; width: 40px; height: 40px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 800; margin-bottom: 15px;">2</div>
          <h3 style="font-size: 1.1rem; color: #ffffff; margin-bottom: 10px;">Multi-Layer Packing</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6;">Application of 7-layer protective wrapping at your doorstep or central hub by trained handlers.</p>
        </div>
        <div style="background: rgba(0,0,0,0.2); border-radius: 12px; padding: 25px; border: 1px solid rgba(255,255,255,0.05);">
          <div style="background: #f59e0b; color: #000; width: 40px; height: 40px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 800; margin-bottom: 15px;">3</div>
          <h3 style="font-size: 1.1rem; color: #ffffff; margin-bottom: 10px;">Enclosed Carrier Loading</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6;">Secured via wheel chocks and soft-tie belt harnesses inside specialized covered vehicle trucks.</p>
        </div>
        <div style="background: rgba(0,0,0,0.2); border-radius: 12px; padding: 25px; border: 1px solid rgba(255,255,255,0.05);">
          <div style="background: #f59e0b; color: #000; width: 40px; height: 40px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 800; margin-bottom: 15px;">4</div>
          <h3 style="font-size: 1.1rem; color: #ffffff; margin-bottom: 10px;">Doorstep Delivery</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6;">Safe delivery to your residence in Delhi NCR with joint unpacking inspection and sign-off.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 7: Locality Coverage (Chennai & Delhi) -->
  <section style="padding: 60px 0; background: #0b132b; color: #ffffff;">
    <div class="container">
      <h2 style="font-size: 2rem; text-align: center; font-weight: 700; margin-bottom: 30px;">
        Locality Coverage: <span style="color: #f59e0b;">Chennai Pickup &amp; Delhi Delivery</span>
      </h2>
      <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 30px;">
        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 12px; padding: 25px;">
          <h3 style="color: #f59e0b; font-size: 1.3rem; margin-bottom: 15px;">Chennai Pickup Localities</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.8;">
            Guindy, Anna Nagar, Velachery, T. Nagar, OMR, Porur, Tambaram, Adyar, Mylapore, Ambattur, Chromepet, Nungambakkam, Vadapalani, Saidapet, Perungudi.
          </p>
        </div>
        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 12px; padding: 25px;">
          <h3 style="color: #f59e0b; font-size: 1.3rem; margin-bottom: 15px;">Delhi NCR Delivery Localities</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.8;">
            Connaught Place, Dwarka, Rohini, South Extension, Janakpuri, Laxmi Nagar, Saket, Vasant Kunj, Pitampura, Lajpat Nagar, Karol Bagh, Mayur Vihar, Paschim Vihar.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 8: Required Documents -->
  <section style="padding: 60px 0; background: #1c2541; color: #ffffff;">
    <div class="container">
      <div style="max-width: 800px; margin: 0 auto; background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 12px; padding: 35px;">
        <h2 style="font-size: 1.8rem; font-weight: 700; margin-bottom: 20px; color: #f59e0b; text-align: center;">
          Documents Required for Bike Transport
        </h2>
        <ul style="color: #cbd5e1; line-height: 2; font-size: 1rem; padding-left: 20px; margin: 0;">
          <li>Vehicle Registration Certificate (RC Copy)</li>
          <li>Valid Motor Vehicle Insurance Policy Document</li>
          <li>Owner's Govt ID Proof (Aadhaar Card / Driving License)</li>
          <li>Pollution Under Control (PUC) Certificate</li>
          <li>NOC from Financier (if bike is under active bank loan, for interstate transfer)</li>
        </ul>
      </div>
    </div>
  </section>

  <!-- Section 9: FAQ Accordion Section -->
  <section style="padding: 60px 0; background: #0b132b; color: #ffffff;">
    <div class="container">
      <h2 style="font-size: 2rem; text-align: center; font-weight: 700; margin-bottom: 40px;">
        Frequently Asked <span style="color: #f59e0b;">Questions</span>
      </h2>
      <div style="max-width: 900px; margin: 0 auto; display: flex; flex-direction: column; gap: 15px;">
        
        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 10px; padding: 20px;">
          <h3 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 10px; font-weight: 700;">How long does bike transport from Chennai to Delhi take?</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.6; margin: 0;">Long-distance interstate transit between Chennai and Delhi takes approximately 4 to 6 days via enclosed container trucks.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 10px; padding: 20px;">
          <h3 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 10px; font-weight: 700;">Is transit insurance mandatory for interstate motorcycle shipping?</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.6; margin: 0;">We strongly recommend full all-risk transit insurance for long distances like Chennai to Delhi to cover any unforeseen accident or natural events.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 10px; padding: 20px;">
          <h3 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 10px; font-weight: 700;">Should I drain the petrol tank before handing over the motorcycle?</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.6; margin: 0;">Yes. For safety reasons, the fuel tank must contain less than 1-2 liters of petrol to avoid fire hazards during enclosed truck transport.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 10px; padding: 20px;">
          <h3 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 10px; font-weight: 700;">Do you pick up the bike directly from my home in Chennai?</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.6; margin: 0;">Yes, we provide complete door-to-door pickup across all Chennai locations including Guindy, Anna Nagar, Velachery, OMR, and Tambaram.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 10px; padding: 20px;">
          <h3 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 10px; font-weight: 700;">What documents are required for shipping a bike from Chennai to Delhi?</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.6; margin: 0;">You need to provide a copy of your vehicle RC, valid insurance policy, government ID proof (Aadhaar or DL), and PUC certificate.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 10px; padding: 20px;">
          <h3 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 10px; font-weight: 700;">Can I transport a Royal Enfield or heavy bike safely on this route?</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.6; margin: 0;">Yes, heavy cruisers like Royal Enfield are secured using high-strength polypropylene straps, heavy-duty foam pads, and wheel chocks in specialized covered carriers.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 10px; padding: 20px;">
          <h3 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 10px; font-weight: 700;">What is the cost of bike transport from Chennai to Delhi?</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.6; margin: 0;">Standard commuter bikes start from ₹4,500 - ₹6,500, while premium sports bikes and cruisers range between ₹8,500 and ₹14,000 depending on vehicle model and packaging type.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 10px; padding: 20px;">
          <h3 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 10px; font-weight: 700;">How can I track my bike during transit from Chennai to Delhi?</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.6; margin: 0;">We provide continuous SMS and WhatsApp updates along with dedicated driver contact info for real-time tracking along the NH44 highway corridor.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 10px; padding: 20px;">
          <h3 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 10px; font-weight: 700;">Which delivery areas are covered in Delhi NCR?</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.6; margin: 0;">We deliver directly to Connaught Place, Dwarka, Rohini, South Extension, Janakpuri, Laxmi Nagar, Saket, Vasant Kunj, and all major Delhi NCR sectors.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 10px; padding: 20px;">
          <h3 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 10px; font-weight: 700;">Are loose accessories like helmets or riding gear allowed with the bike?</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.6; margin: 0;">Yes, helmets and small accessories can be packed in sealed corrugated boxes and securely fastened to the bike prior to loading.</p>
        </div>

      </div>
    </div>
  </section>

  <!-- Section 10: Call to Action / Bottom Banner -->
  <section style="padding: 50px 0; background: linear-gradient(135deg, #1e293b 0%, #0f172a 100%); text-align: center; color: #ffffff; border-top: 1px solid rgba(245, 158, 11, 0.3);">
    <div class="container">
      <h2 style="font-size: 2.2rem; font-weight: 800; margin-bottom: 15px;">Book Your Bike Transport from Chennai to Delhi</h2>
      <p style="font-size: 1.1rem; color: #cbd5e1; max-width: 700px; margin: 0 auto 30px;">
        Get instant quote, 7-layer packaging, and 100% insured door-to-door motorcycle shipping today.
      </p>
      <div style="display: flex; gap: 15px; justify-content: center; flex-wrap: wrap;">
        <a href="tel:<?php echo SITE_PHONE_RAW; ?>" style="padding: 14px 32px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #fff; border-radius: 50px; font-weight: 700; text-decoration: none;">
          <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call: <?php echo SITE_PHONE; ?>
        </a>
        <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20to%20book%20bike%20transport%20from%20Chennai%20to%20Delhi." target="_blank" style="padding: 14px 32px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #fff; border-radius: 50px; font-weight: 700; text-decoration: none;">
          <i class="fab fa-whatsapp" style="margin-right: 8px;"></i> WhatsApp Quick Quote
        </a>
      </div>
    </div>
  </section>

</main>

<!-- Section 11: Structured Data JSON-LD Schema (FAQPage) -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "How long does bike transport from Chennai to Delhi take?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Long-distance interstate transit between Chennai and Delhi takes approximately 4 to 6 days via enclosed container trucks."
      }
    },
    {
      "@type": "Question",
      "name": "Is transit insurance mandatory for interstate motorcycle shipping?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "We strongly recommend full all-risk transit insurance for long distances like Chennai to Delhi to cover any unforeseen accident or natural events."
      }
    },
    {
      "@type": "Question",
      "name": "Should I drain the petrol tank before handing over the motorcycle?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes. For safety reasons, the fuel tank must contain less than 1-2 liters of petrol to avoid fire hazards during enclosed truck transport."
      }
    },
    {
      "@type": "Question",
      "name": "Do you pick up the bike directly from my home in Chennai?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, we provide complete door-to-door pickup across all Chennai locations including Guindy, Anna Nagar, Velachery, OMR, and Tambaram."
      }
    },
    {
      "@type": "Question",
      "name": "What documents are required for shipping a bike from Chennai to Delhi?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "You need to provide a copy of your vehicle RC, valid insurance policy, government ID proof (Aadhaar or DL), and PUC certificate."
      }
    },
    {
      "@type": "Question",
      "name": "Can I transport a Royal Enfield or heavy bike safely on this route?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, heavy cruisers like Royal Enfield are secured using high-strength polypropylene straps, heavy-duty foam pads, and wheel chocks in specialized covered carriers."
      }
    },
    {
      "@type": "Question",
      "name": "What is the cost of bike transport from Chennai to Delhi?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Standard commuter bikes start from ₹4,500 - ₹6,500, while premium sports bikes and cruisers range between ₹8,500 and ₹14,000 depending on vehicle model and packaging type."
      }
    },
    {
      "@type": "Question",
      "name": "How can I track my bike during transit from Chennai to Delhi?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "We provide continuous SMS and WhatsApp updates along with dedicated driver contact info for real-time tracking along the NH44 highway corridor."
      }
    },
    {
      "@type": "Question",
      "name": "Which delivery areas are covered in Delhi NCR?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "We deliver directly to Connaught Place, Dwarka, Rohini, South Extension, Janakpuri, Laxmi Nagar, Saket, Vasant Kunj, and all major Delhi NCR sectors."
      }
    },
    {
      "@type": "Question",
      "name": "Are loose accessories like helmets or riding gear allowed with the bike?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, helmets and small accessories can be packed in sealed corrugated boxes and securely fastened to the bike prior to loading."
      }
    }
  ]
}
</script>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>

