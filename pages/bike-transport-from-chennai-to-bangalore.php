<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "Bike Transport from Chennai to Bangalore | Safe Two-Wheeler Shifting";
$page_desc = "Professional bike transport from Chennai to Bangalore. 100% insured, 7-layer safety packaging, door-to-door motorcycle shipping. Check estimated costs, transit time, and book verified vehicle carriers.";
$page_keywords = "bike transport from chennai to bangalore, motorcycle shipping chennai to bangalore, two wheeler transport chennai bangalore, bike packers and movers chennai, bike shifting charges chennai bangalore";
$canonical_url = "https://shreeashirwadpackersandmovers.com/pages/bike-transport-from-chennai-to-bangalore.php";

require_once __DIR__ . '/../includes/header.php';
?>

<main class="site-main">

  <!-- Visual Breadcrumb Navigation Bar -->
  <div class="breadcrumb-wrapper">
    <div class="container">
      <div class="breadcrumb-list">
        <span class="breadcrumb-item"><a href="<?php echo SITE_URL; ?>" title="Home">Home</a></span>
        <span class="breadcrumb-separator">/</span>
        <span class="breadcrumb-item active">Bike Transport from Chennai to Bangalore</span>
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
            CHENNAI TO BANGALORE BIKE TRANSPORT SPECIALISTS
          </span>
          <h1 style="font-size: 2.7rem; font-weight: 800; line-height: 1.2; margin-bottom: 20px; color: #ffffff;">
            Safe &amp; Insured <span style="color: #f59e0b;">Bike Transport from Chennai to Bangalore</span>
          </h1>
          <p style="font-size: 1.12rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 25px;">
            Moving your motorcycle or scooter from Chennai to Bangalore? Shree Ashirwad Packers and Movers provides premium 7-layer packaging, door-to-door pickup from Guindy, Anna Nagar, Velachery, or OMR, and swift delivery to Whitefield, Koramangala, Indiranagar, or HSR Layout.
          </p>

          <div style="display: flex; gap: 15px; flex-wrap: wrap; margin-bottom: 30px;">
            <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Now" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
              <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call Now: <?php echo SITE_PHONE; ?>
            </a>
            <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20a%20quote%20for%20bike%20transport%20from%20Chennai%20to%20Bangalore." title="Chat on WhatsApp" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
              <i class="fab fa-whatsapp" style="margin-right: 8px;"></i> Chat on WhatsApp
            </a>
          </div>

          <div style="display: flex; gap: 20px; font-size: 0.9rem; color: #94a3b8;">
            <span><strong style="color: #f59e0b;">100% Insured</strong> Transit</span>
            <span><strong style="color: #f59e0b;">7-Layer</strong> Safety Wrap</span>
            <span><strong style="color: #f59e0b;">24-48 Hours</strong> Express Delivery</span>
          </div>
        </div>

        <!-- Hero Lead Form Column -->
        <div class="hero-form-card" style="background: rgba(255, 255, 255, 0.05); backdrop-filter: blur(10px); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 16px; padding: 30px; box-shadow: 0 15px 35px rgba(0,0,0,0.4);">
          <h2 style="font-size: 1.4rem; color: #ffffff; margin-bottom: 8px; font-weight: 700; text-align: center;">Get Instant Bike Shifting Quote</h2>
          <p style="font-size: 0.85rem; color: #94a3b8; text-align: center; margin-bottom: 20px;">Transparent pricing for Chennai to Bangalore two-wheeler shipping</p>

          <form action="#" method="POST" onsubmit="sendHeroWhatsAppLead(event, this);">
            <div style="margin-bottom: 14px;">
              <input type="text" name="name" class="form-control" placeholder="Your Full Name" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="margin-bottom: 14px;">
              <input type="tel" name="phone" class="form-control" placeholder="10-Digit Mobile Number" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 10px; margin-bottom: 14px;">
              <input type="text" name="move_from" class="form-control" value="Chennai" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
              <input type="text" name="move_to" class="form-control" value="Bangalore" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
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
          <h3 style="font-size: 2rem; color: #f59e0b; margin-bottom: 5px; font-weight: 800;">350 km</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; margin: 0;">Express Highway Route (NH48)</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 12px; padding: 20px;">
          <h3 style="font-size: 2rem; color: #f59e0b; margin-bottom: 5px; font-weight: 800;">24-48 Hrs</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; margin: 0;">Guaranteed Transit Window</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 12px; padding: 20px;">
          <h3 style="font-size: 2rem; color: #f59e0b; margin-bottom: 5px; font-weight: 800;">10,000+</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; margin: 0;">Bikes Safely Delivered</p>
        </div>
        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 12px; padding: 20px;">
          <h3 style="font-size: 2rem; color: #f59e0b; margin-bottom: 5px; font-weight: 800;">100% Insured</h3>
          <p style="color: #94a3b8; font-size: 0.9rem; margin: 0;">Full All-Risk Protection</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 3: Overview & Route Details -->
  <section style="padding: 60px 0; background: #0b132b; color: #cbd5e1;">
    <div class="container">
      <div style="max-width: 900px; margin: 0 auto;">
        <h2 style="font-size: 2rem; color: #ffffff; font-weight: 700; margin-bottom: 20px;">
          Comprehensive <span style="color: #f59e0b;">Chennai to Bangalore Bike Transport</span> Services
        </h2>
        <p style="line-height: 1.8; margin-bottom: 20px;">
          Transporting a motorcycle from Chennai to Bangalore requires specialized handling due to heavy highway traffic, toll checkpoints, and weather exposure along the NH48 corridor passing through Sriperumbudur, Ranipet, Vellore, Ambur, Krishnagiri, and Hosur. Shree Ashirwad Packers and Movers deploys enclosed hydraulic vehicle carriers and heavy-duty 7-layer packing protocols to safeguard your motorcycle against scratches, dents, or dust during transit.
        </p>
        <p style="line-height: 1.8;">
          Whether you own a daily commuter scooter like a Honda Activa, an executive motorcycle like a Pulsar or FZ, a touring cruiser like a Royal Enfield Bullet, or a premium superbike, our team provides doorstep pick-up from all locations across Chennai and delivery directly to your doorstep anywhere in Bangalore.
        </p>
      </div>
    </div>
  </section>

  <!-- Section 4: Pricing Matrix Table -->
  <section style="padding: 60px 0; background: #1c2541; color: #ffffff;">
    <div class="container">
      <h2 style="font-size: 2rem; text-align: center; font-weight: 700; margin-bottom: 10px;">
        Bike Transport Charges from <span style="color: #f59e0b;">Chennai to Bangalore</span>
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
              <td style="padding: 16px 20px; color: #f59e0b; font-weight: 700;">₹2,200 - ₹3,500</td>
              <td style="padding: 16px 20px;">24 - 48 Hours</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.05); background: rgba(255,255,255,0.02);">
              <td style="padding: 16px 20px;">Standard Commuter Bikes</td>
              <td style="padding: 16px 20px;">100cc - 150cc</td>
              <td style="padding: 16px 20px; color: #f59e0b; font-weight: 700;">₹2,800 - ₹4,200</td>
              <td style="padding: 16px 20px;">24 - 48 Hours</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.05);">
              <td style="padding: 16px 20px;">Executive &amp; Sports Bikes</td>
              <td style="padding: 16px 20px;">150cc - 250cc</td>
              <td style="padding: 16px 20px; color: #f59e0b; font-weight: 700;">₹3,500 - ₹5,200</td>
              <td style="padding: 16px 20px;">24 - 48 Hours</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.05); background: rgba(255,255,255,0.02);">
              <td style="padding: 16px 20px;">Cruisers &amp; Royal Enfield</td>
              <td style="padding: 16px 20px;">350cc - 500cc</td>
              <td style="padding: 16px 20px; color: #f59e0b; font-weight: 700;">₹4,200 - ₹6,500</td>
              <td style="padding: 16px 20px;">24 - 48 Hours</td>
            </tr>
            <tr>
              <td style="padding: 16px 20px;">Premium Superbikes</td>
              <td style="padding: 16px 20px;">500cc+ / Imported</td>
              <td style="padding: 16px 20px; color: #f59e0b; font-weight: 700;">₹6,500 - ₹9,500</td>
              <td style="padding: 16px 20px;">24 - 48 Hours</td>
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
          <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.6;">Safe delivery to your residence in Bangalore with joint unpacking inspection and sign-off.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 7: Locality Coverage (Chennai & Bangalore) -->
  <section style="padding: 60px 0; background: #0b132b; color: #ffffff;">
    <div class="container">
      <h2 style="font-size: 2rem; text-align: center; font-weight: 700; margin-bottom: 30px;">
        Locality Coverage: <span style="color: #f59e0b;">Chennai Pickup &amp; Bangalore Delivery</span>
      </h2>
      <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 30px;">
        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 12px; padding: 25px;">
          <h3 style="color: #f59e0b; font-size: 1.3rem; margin-bottom: 15px;">Chennai Pickup Localities</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.8;">
            Guindy, T. Nagar, Anna Nagar, Velachery, OMR, Porur, Tambaram, Adyar, Mylapore, Ambattur, Chromepet, Nungambakkam, Vadapalani, Saidapet, Perungudi, Sholinganallur.
          </p>
        </div>
        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 12px; padding: 25px;">
          <h3 style="color: #f59e0b; font-size: 1.3rem; margin-bottom: 15px;">Bangalore Delivery Localities</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.8;">
            Koramangala, Indiranagar, Whitefield, HSR Layout, Electronic City, Marathahalli, Bellandur, Jayanagar, JP Nagar, Hebbal, Yelahanka, Banashankari, BTM Layout, Sarjapur Road.
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
          <h3 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 10px; font-weight: 700;">How long does bike transport from Chennai to Bangalore take?</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.6; margin: 0;">Transit time between Chennai and Bangalore is typically 24 to 48 hours depending on pickup locality and weather conditions along the NH48 route.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 10px; padding: 20px;">
          <h3 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 10px; font-weight: 700;">Is transit insurance included in the bike shipping cost?</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.6; margin: 0;">Yes, we offer optional comprehensive transit insurance covering loss or damage due to accident or fire during transport between Chennai and Bangalore.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 10px; padding: 20px;">
          <h3 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 10px; font-weight: 700;">Should I drain the petrol tank before handing over the motorcycle?</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.6; margin: 0;">Yes. For safety reasons, the fuel tank must contain less than 1-2 liters of petrol to avoid fire hazards during enclosed truck transport.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 10px; padding: 20px;">
          <h3 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 10px; font-weight: 700;">Do you pick up the bike directly from my home in Chennai?</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.6; margin: 0;">Yes, we provide complete door-to-door pickup across all Chennai locations including Guindy, OMR, Velachery, Anna Nagar, and Tambaram.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 10px; padding: 20px;">
          <h3 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 10px; font-weight: 700;">What is the cost of bike transport from Chennai to Bangalore?</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.6; margin: 0;">Bike transport charges from Chennai to Bangalore range between ₹2,200 and ₹6,500 depending on vehicle engine displacement, weight, and packaging options.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 10px; padding: 20px;">
          <h3 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 10px; font-weight: 700;">What safety packaging is applied for 350 km transport along NH48?</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.6; margin: 0;">We use our 7-layer safety standard featuring stretch film, heavy bubble wrap, corrugated sheets, foam edge guards, and chassis belt ties.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 10px; padding: 20px;">
          <h3 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 10px; font-weight: 700;">Are GST invoices provided for company relocation reimbursement?</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.6; margin: 0;">Yes, 100% GST-compliant IBA-approved bills and LR receipts are issued for corporate claims.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 10px; padding: 20px;">
          <h3 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 10px; font-weight: 700;">Can I ship sports bikes or Royal Enfield cruisers on this route?</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.6; margin: 0;">Yes, specialized crate packing and heavy wheel harness locks are available for premium and heavy bikes.</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 10px; padding: 20px;">
          <h3 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 10px; font-weight: 700;">What documents are required for shipping a bike from Chennai to Bangalore?</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.6; margin: 0;">You need a copy of vehicle RC, active insurance policy, owner ID card copy, and emission certificate (PUC).</p>
        </div>

        <div style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 10px; padding: 20px;">
          <h3 style="font-size: 1.1rem; color: #f59e0b; margin-bottom: 10px; font-weight: 700;">How do I track my motorcycle during transit to Bangalore?</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.6; margin: 0;">Live phone tracking and WhatsApp updates are provided throughout the journey along the NH48 highway corridor.</p>
        </div>

      </div>
    </div>
  </section>

  <!-- Section 10: Call to Action / Bottom Banner -->
  <section style="padding: 50px 0; background: linear-gradient(135deg, #1e293b 0%, #0f172a 100%); text-align: center; color: #ffffff; border-top: 1px solid rgba(245, 158, 11, 0.3);">
    <div class="container">
      <h2 style="font-size: 2.2rem; font-weight: 800; margin-bottom: 15px;">Book Your Bike Transport from Chennai to Bangalore</h2>
      <p style="font-size: 1.1rem; color: #cbd5e1; max-width: 700px; margin: 0 auto 30px;">
        Get instant quote, 7-layer packaging, and 100% insured door-to-door motorcycle shipping today.
      </p>
      <div style="display: flex; gap: 15px; justify-content: center; flex-wrap: wrap;">
        <a href="tel:<?php echo SITE_PHONE_RAW; ?>" style="padding: 14px 32px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #fff; border-radius: 50px; font-weight: 700; text-decoration: none;">
          <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call: <?php echo SITE_PHONE; ?>
        </a>
        <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20to%20book%20bike%20transport%20from%20Chennai%20to%20Bangalore." target="_blank" style="padding: 14px 32px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #fff; border-radius: 50px; font-weight: 700; text-decoration: none;">
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
      "name": "How long does bike transport from Chennai to Bangalore take?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Transit time between Chennai and Bangalore is typically 24 to 48 hours depending on pickup locality and weather conditions along the NH48 route."
      }
    },
    {
      "@type": "Question",
      "name": "Is transit insurance included in the bike shipping cost?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, we offer optional comprehensive transit insurance covering loss or damage due to accident or fire during transport between Chennai and Bangalore."
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
        "text": "Yes, we provide complete door-to-door pickup across all Chennai locations including Guindy, OMR, Velachery, Anna Nagar, and Tambaram."
      }
    },
    {
      "@type": "Question",
      "name": "What is the cost of bike transport from Chennai to Bangalore?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Bike transport charges from Chennai to Bangalore range between ₹2,200 and ₹6,500 depending on vehicle engine displacement, weight, and packaging options."
      }
    },
    {
      "@type": "Question",
      "name": "What safety packaging is applied for 350 km transport along NH48?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "We use our 7-layer safety standard featuring stretch film, heavy bubble wrap, corrugated sheets, foam edge guards, and chassis belt ties."
      }
    },
    {
      "@type": "Question",
      "name": "Are GST invoices provided for company relocation reimbursement?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, 100% GST-compliant IBA-approved bills and LR receipts are issued for corporate claims."
      }
    },
    {
      "@type": "Question",
      "name": "Can I ship sports bikes or Royal Enfield cruisers on this route?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, specialized crate packing and heavy wheel harness locks are available for premium and heavy bikes."
      }
    },
    {
      "@type": "Question",
      "name": "What documents are required for shipping a bike from Chennai to Bangalore?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "You need a copy of vehicle RC, active insurance policy, owner ID card copy, and emission certificate (PUC)."
      }
    },
    {
      "@type": "Question",
      "name": "How do I track my motorcycle during transit to Bangalore?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Live phone tracking and WhatsApp updates are provided throughout the journey along the NH48 highway corridor."
      }
    }
  ]
}
</script>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>

