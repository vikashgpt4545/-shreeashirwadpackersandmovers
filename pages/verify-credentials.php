<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "Verify Credentials & Company Licenses";
$page_desc = "Verify Shree Ashirwad Packers and Movers (OPC) Pvt. Ltd. company credentials, GST registration number, CIN incorporation ID, MSME Udyam certificates, and public sector shifting claim compliance. Complete door-to-door relocation coverage across Verify Credentials, Railway Station Road, Main Market, College Road, Civil Lines.";
$page_keywords = "Verify Credentials, furniture courier india, house shifting services, vehicle for home shift, best house shifting service in india, packers and movers rateprice, packers and movers charges for 450 kms, tampa movers cost, iba approved packers and movers in karur, gst bill for packers and movers, iba approved packers and movers in greater nodia, real safe packers and movers ujjain ujjain madhya pradesh, safe reliable movers, veteran movers reviews, packers and movers not delivering goods";
$page_city = "Verify Credentials";
$canonical_url = "https://shreeashirwadpackersandmovers.com/pages/verify-credentials.php";

require_once __DIR__ . '/../includes/header.php';
?>
<main class="site-main" style="background: #070d1e; color: #cbd5e1; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;">
<section class="hero-section" style="padding: 70px 0 50px; background: linear-gradient(135deg, #0b132b 0%, #1c2541 100%); color: #ffffff; border-bottom: 1px solid rgba(255,255,255,0.1);">
  <div class="container" style="max-width: 1140px; margin: 0 auto; padding: 0 15px;">
    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 40px; align-items: center;">
      <div>
        <span style="display: inline-block; background: rgba(245, 158, 11, 0.15); border: 1px solid #f59e0b; color: #f59e0b; padding: 6px 14px; border-radius: 20px; font-size: 0.85rem; font-weight: 700; margin-bottom: 15px; letter-spacing: 0.5px;">
          <i class="fas fa-shield-alt"></i> Verified Household Relocation
        </span>
        <h1 style="font-size: 2.2rem; font-weight: 800; line-height: 1.25; margin-bottom: 15px; color: #ffffff;">Verify Credentials &amp; Company Licenses</h1>
        <p style="font-size: 1.05rem; line-height: 1.7; color: #cbd5e1; margin-bottom: 25px;">
          Trust Shree Ashirwad Packers and Movers for dependable, 100% insured, and damage-free moving solutions. Dedicated container trucks, certified packing crews, and instant WhatsApp survey quotes.
        </p>
        <div style="display: flex; flex-wrap: wrap; gap: 14px; margin-bottom: 25px; color: #cbd5e1; font-size: 0.9rem; font-weight: 500;">
          <span style="display: inline-flex; align-items: center; gap: 6px;"><i class="fas fa-check-circle" style="color: #10b981;"></i> IBA Approved Bills</span>
          <span style="display: inline-flex; align-items: center; gap: 6px;"><i class="fas fa-check-circle" style="color: #10b981;"></i> GPS-Monitored Fleet</span>
          <span style="display: inline-flex; align-items: center; gap: 6px;"><i class="fas fa-check-circle" style="color: #10b981;"></i> Damage-Free Guarantee</span>
        </div>
      </div>
      <div style="background: #0f172a; border: 1px solid rgba(255,255,255,0.12); border-radius: 12px; padding: 25px; box-shadow: 0 10px 25px rgba(0,0,0,0.3);">
        <h3 style="color: #ffffff; font-size: 1.3rem; font-weight: 700; margin-bottom: 15px; text-align: center;">Get an Instant WhatsApp Moving Estimate</h3>
        <form onsubmit="sendHeroWhatsAppLead(event, this);">
          <div style="margin-bottom: 12px;">
            <input type="text" name="name" placeholder="Your Full Name" required style="width: 100%; padding: 10px 14px; background: #1e293b; border: 1px solid #334155; border-radius: 6px; color: #fff; font-size: 0.95rem; box-sizing: border-box;">
          </div>
          <div style="margin-bottom: 12px;">
            <input type="tel" name="phone" placeholder="WhatsApp Contact Number" required style="width: 100%; padding: 10px 14px; background: #1e293b; border: 1px solid #334155; border-radius: 6px; color: #fff; font-size: 0.95rem; box-sizing: border-box;">
          </div>
          <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 10px; margin-bottom: 15px;">
            <input type="text" name="move_from" placeholder="Pickup City / Area" value="Verify Credentials" required style="width: 100%; padding: 10px 14px; background: #1e293b; border: 1px solid #334155; border-radius: 6px; color: #fff; font-size: 0.95rem; box-sizing: border-box;">
            <input type="text" name="move_to" placeholder="Drop Location / City" value="" required style="width: 100%; padding: 10px 14px; background: #1e293b; border: 1px solid #334155; border-radius: 6px; color: #fff; font-size: 0.95rem; box-sizing: border-box;">
          </div>
          <button type="submit" style="width: 100%; background: #25d366; color: #ffffff; border: none; padding: 12px; border-radius: 6px; font-weight: 700; font-size: 1rem; cursor: pointer; display: flex; align-items: center; justify-content: center; gap: 8px;">
            <i class="fab fa-whatsapp" style="font-size: 1.2rem;"></i> Request Fixed Price Quote
          </button>
        </form>
      </div>
    </div>
  </div>
</section>

<style>
.trust-metrics-section {
  width: 100%;
  background: #070d1e;
  border-bottom: 1px solid rgba(255,255,255,0.08);
  padding: 30px 0;
  box-sizing: border-box;
}
.trust-metrics-container {
  max-width: 1100px;
  margin: 0 auto;
  padding: 0 15px;
  box-sizing: border-box;
}
.trust-metrics-grid {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 16px;
  width: 100%;
}
@media (max-width: 860px) {
  .trust-metrics-grid {
    grid-template-columns: repeat(2, 1fr);
  }
}
@media (max-width: 480px) {
  .trust-metrics-grid {
    grid-template-columns: 1fr;
  }
}
</style>
<section class="trust-metrics-section">
  <div class="trust-metrics-container">
    <div class="trust-metrics-grid">
    
      <div style="background: rgba(15, 23, 42, 0.75); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 12px; padding: 20px 18px; text-align: center; box-shadow: 0 8px 24px rgba(0,0,0,0.35);">
        <div style="display: inline-flex; align-items: center; justify-content: center; width: 44px; height: 44px; border-radius: 50%; background: rgba(245, 158, 11, 0.15); color: #f59e0b; font-size: 1.25rem; margin-bottom: 10px;">
          <i class="fas fa-truck-moving"></i>
        </div>
        <div style="font-size: 1.65rem; font-weight: 800; color: #ffffff; letter-spacing: -0.5px;">22,000+</div>
        <div style="font-size: 0.85rem; color: #94a3b8; margin-top: 4px; font-weight: 500;">Verified Moves Completed</div>
      </div>

      <div style="background: rgba(15, 23, 42, 0.75); border: 1.5px solid rgba(16, 185, 129, 0.3); border-radius: 12px; padding: 20px 18px; text-align: center; box-shadow: 0 8px 24px rgba(0,0,0,0.35);">
        <div style="display: inline-flex; align-items: center; justify-content: center; width: 44px; height: 44px; border-radius: 50%; background: rgba(16, 185, 129, 0.15); color: #10b981; font-size: 1.25rem; margin-bottom: 10px;">
          <i class="fas fa-star"></i>
        </div>
        <div style="font-size: 1.65rem; font-weight: 800; color: #ffffff; letter-spacing: -0.5px;">4.9 / 5.0</div>
        <div style="font-size: 0.85rem; color: #94a3b8; margin-top: 4px; font-weight: 500;">Google &amp; Justdial Rating</div>
      </div>

      <div style="background: rgba(15, 23, 42, 0.75); border: 1.5px solid rgba(59, 130, 246, 0.3); border-radius: 12px; padding: 20px 18px; text-align: center; box-shadow: 0 8px 24px rgba(0,0,0,0.35);">
        <div style="display: inline-flex; align-items: center; justify-content: center; width: 44px; height: 44px; border-radius: 50%; background: rgba(59, 130, 246, 0.15); color: #3b82f6; font-size: 1.25rem; margin-bottom: 10px;">
          <i class="fas fa-shield-alt"></i>
        </div>
        <div style="font-size: 1.65rem; font-weight: 800; color: #ffffff; letter-spacing: -0.5px;">100% Insured</div>
        <div style="font-size: 0.85rem; color: #94a3b8; margin-top: 4px; font-weight: 500;">All-Risk Marine Policy</div>
      </div>

      <div style="background: rgba(15, 23, 42, 0.75); border: 1.5px solid rgba(168, 85, 247, 0.3); border-radius: 12px; padding: 20px 18px; text-align: center; box-shadow: 0 8px 24px rgba(0,0,0,0.35);">
        <div style="display: inline-flex; align-items: center; justify-content: center; width: 44px; height: 44px; border-radius: 50%; background: rgba(168, 85, 247, 0.15); color: #a855f7; font-size: 1.25rem; margin-bottom: 10px;">
          <i class="fas fa-file-invoice-dollar"></i>
        </div>
        <div style="font-size: 1.65rem; font-weight: 800; color: #ffffff; letter-spacing: -0.5px;">IBA Approved</div>
        <div style="font-size: 0.85rem; color: #94a3b8; margin-top: 4px; font-weight: 500;">ISO 9001:2015 Registered</div>
      </div>

    </div>
  </div>
</section>

<section class="content-ui-section" style="padding: 55px 0; background: #0b132b; color: #cbd5e1; border-bottom: 1px solid rgba(255,255,255,0.07);">
  <div class="container" style="max-width: 1060px; margin: 0 auto; padding: 0 15px;">
    <div style="background: rgba(15, 23, 42, 0.65); border: 1px solid rgba(255, 255, 255, 0.08); border-radius: 16px; padding: 36px 32px; box-shadow: 0 12px 30px rgba(0,0,0,0.35);">
      <span style="background: rgba(245, 158, 11, 0.12); color: #f59e0b; border: 1px solid rgba(245, 158, 11, 0.35); padding: 4px 14px; border-radius: 20px; font-size: 0.78rem; font-weight: 700; text-transform: uppercase; letter-spacing: 0.5px; display: inline-block; margin-bottom: 14px;">FLEET &amp; TRANSPORT</span>
      <h2 style="color: #ffffff; font-size: 1.7rem; font-weight: 800; line-height: 1.35; margin-bottom: 18px;">Weatherproof Dedicated Container Fleets &amp; Satellite GPS Tracking for Verify Credentials</h2>
      <div style="font-size: 1.02rem; line-height: 1.8; color: #cbd5e1;"><p style="font-size: 1.04rem; line-height: 1.75; color: #f1f5f9; font-weight: 500; margin-bottom: 14px;">Specialized enclosed container carriers and multi-tier vehicle transporters provide optimal transit protection against highway flying debris, bad weather, and transit road vibration for Verify Credentials. Shree Ashirwad deploys purpose-engineered transport fleets featuring hydraulic tail-lifts and custom lashing hardware.</p>
<div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(230px, 1fr)); gap: 20px; margin-top: 24px;">
  <div style="background: rgba(15, 23, 42, 0.75); border: 1.5px solid rgba(255, 255, 255, 0.08); border-radius: 14px; padding: 24px 20px; box-shadow: 0 10px 25px rgba(0,0,0,0.35); transition: transform 0.2s ease, border-color 0.2s ease;">
    <div style="display: inline-flex; align-items: center; justify-content: center; width: 42px; height: 42px; border-radius: 10px; background: #f59e0b22; color: #f59e0b; font-weight: 800; font-size: 1.05rem; margin-bottom: 14px;">01</div>
    <h3 style="color: #ffffff; font-size: 1.1rem; font-weight: 700; margin-bottom: 10px; line-height: 1.4;">All-Weather Weatherproof Steel Enclosures:</h3>
    <p style="color: #94a3b8; font-size: 0.88rem; line-height: 1.65; margin: 0;">Fully covered steel container bodies prevent exposure to heavy rain, direct sunlight, diesel exhaust fumes, and abrasive highway dust during inter-state transit.</p>
  </div>
  <div style="background: rgba(15, 23, 42, 0.75); border: 1.5px solid rgba(255, 255, 255, 0.08); border-radius: 14px; padding: 24px 20px; box-shadow: 0 10px 25px rgba(0,0,0,0.35); transition: transform 0.2s ease, border-color 0.2s ease;">
    <div style="display: inline-flex; align-items: center; justify-content: center; width: 42px; height: 42px; border-radius: 10px; background: #10b98122; color: #10b981; font-weight: 800; font-size: 1.05rem; margin-bottom: 14px;">02</div>
    <h3 style="color: #ffffff; font-size: 1.1rem; font-weight: 700; margin-bottom: 10px; line-height: 1.4;">Hydraulic Tail-Lift Ramp Loading:</h3>
    <p style="color: #94a3b8; font-size: 0.88rem; line-height: 1.65; margin: 0;">Low-angle motorized tail-lifts eliminate chassis scraping, underbody contact, and manual handling risks during two-wheeler and vehicle loading.</p>
  </div>
  <div style="background: rgba(15, 23, 42, 0.75); border: 1.5px solid rgba(255, 255, 255, 0.08); border-radius: 14px; padding: 24px 20px; box-shadow: 0 10px 25px rgba(0,0,0,0.35); transition: transform 0.2s ease, border-color 0.2s ease;">
    <div style="display: inline-flex; align-items: center; justify-content: center; width: 42px; height: 42px; border-radius: 10px; background: #3b82f622; color: #3b82f6; font-weight: 800; font-size: 1.05rem; margin-bottom: 14px;">03</div>
    <h3 style="color: #ffffff; font-size: 1.1rem; font-weight: 700; margin-bottom: 10px; line-height: 1.4;">Four-Point High-Tensile Wheel Lashing:</h3>
    <p style="color: #94a3b8; font-size: 0.88rem; line-height: 1.65; margin: 0;">Heavy-duty polyester ratcheting straps anchor each wheel directly to transporter floor mounts, eliminating lateral shifting or cosmetic rubbing on uneven road corridors.</p>
  </div>
  <div style="background: rgba(15, 23, 42, 0.75); border: 1.5px solid rgba(255, 255, 255, 0.08); border-radius: 14px; padding: 24px 20px; box-shadow: 0 10px 25px rgba(0,0,0,0.35); transition: transform 0.2s ease, border-color 0.2s ease;">
    <div style="display: inline-flex; align-items: center; justify-content: center; width: 42px; height: 42px; border-radius: 10px; background: #a855f722; color: #a855f7; font-weight: 800; font-size: 1.05rem; margin-bottom: 14px;">04</div>
    <h3 style="color: #ffffff; font-size: 1.1rem; font-weight: 700; margin-bottom: 10px; line-height: 1.4;">Zero-Transshipment Direct Routing:</h3>
    <p style="color: #94a3b8; font-size: 0.88rem; line-height: 1.65; margin: 0;">Cargo remains securely positioned in its assigned container from origin departure to destination arrival without intermediate transfer or hub offloading.</p>
  </div>
</div>
<p style="font-size: 0.98rem; line-height: 1.7; color: #cbd5e1; margin-top: 14px;">Continuous GPS telematics tracking and dual-driver commercial crews maintain smooth transit velocity, adherence to national transport regulations, and scheduled doorstep delivery timelines.</p></div>
    </div>
  </div>
</section>



<section class="dynamic-topic-table-section" style="padding: 55px 0; background: #070d1e; border-bottom: 1px solid rgba(255,255,255,0.08);">
  <div class="container" style="max-width: 1060px; margin: 0 auto; padding: 0 15px;">
    
    <div style="text-align: center; margin-bottom: 35px;">
      <span style="background: rgba(245, 158, 11, 0.12); color: #f59e0b; border: 1px solid rgba(245, 158, 11, 0.3); padding: 5px 16px; border-radius: 20px; font-size: 0.82rem; font-weight: 700; text-transform: uppercase; letter-spacing: 0.5px;">
        PRICING &amp; CLEARANCE MATRIX
      </span>
      <h2 style="color: #ffffff; font-size: 1.75rem; font-weight: 800; margin-top: 12px; margin-bottom: 8px;">
        Transparent Relocation Pricing &amp; Regulatory Coverage Matrix
      </h2>
      <p style="color: #94a3b8; font-size: 0.95rem; margin: 0;">
        Comprehensive breakdown of base freight, mandatory documentation, and transit insurance
      </p>
    </div>

    <div style="overflow-x: auto; background: #0f172a; border-radius: 14px; border: 1.5px solid rgba(255,255,255,0.1); box-shadow: 0 15px 35px rgba(0,0,0,0.45);">
      <table style="width: 100%; border-collapse: collapse; text-align: left;">
        <thead>
          <tr style="border-bottom: 2px solid rgba(245, 158, 11, 0.4);"><th style="padding: 16px 20px; font-size: 0.92rem; font-weight: 700; text-transform: uppercase; letter-spacing: 0.5px; background: #1e293b; color: #f8fafc;">Service Parameter</th><th style="padding: 16px 20px; font-size: 0.92rem; font-weight: 700; text-transform: uppercase; letter-spacing: 0.5px; background: rgba(16, 185, 129, 0.12); color: #10b981;">Standard Pricing Factor</th><th style="padding: 16px 20px; font-size: 0.92rem; font-weight: 700; text-transform: uppercase; letter-spacing: 0.5px; background: #1e293b; color: #f8fafc;">Documentation / Regulatory Requirement</th><th style="padding: 16px 20px; font-size: 0.92rem; font-weight: 700; text-transform: uppercase; letter-spacing: 0.5px; background: #1e293b; color: #f8fafc;">Safety Guarantee</th></tr>
        </thead>
        <tbody><tr style="border-bottom: 1px solid rgba(255,255,255,0.06); transition: background 0.2s ease;"><td style="padding: 16px 20px; font-weight: 600; color: #f8fafc; font-size: 0.95rem;">Base Transit Freight</td><td style="padding: 16px 20px; color: #10b981; font-size: 0.92rem; font-weight: 500; background: rgba(16, 185, 129, 0.03);"><i class="fas fa-check" style="margin-right: 8px; color: #10b981;"></i>Calculated per kilometer and consignment volume</td><td style="padding: 16px 20px; color: #cbd5e1; font-size: 0.92rem;">Consignment Note (LR) &amp; e-Way Bill</td><td style="padding: 16px 20px; color: #cbd5e1; font-size: 0.92rem;">Fixed in written quotation (zero hidden fees)</td></tr><tr style="border-bottom: 1px solid rgba(255,255,255,0.06); transition: background 0.2s ease;"><td style="padding: 16px 20px; font-weight: 600; color: #f8fafc; font-size: 0.95rem;">Packaging Materials &amp; Labor</td><td style="padding: 16px 20px; color: #10b981; font-size: 0.92rem; font-weight: 500; background: rgba(16, 185, 129, 0.03);"><i class="fas fa-check" style="margin-right: 8px; color: #10b981;"></i>Included in comprehensive move quotation</td><td style="padding: 16px 20px; color: #cbd5e1; font-size: 0.92rem;">Itemized Inventory Survey Sheet</td><td style="padding: 16px 20px; color: #cbd5e1; font-size: 0.92rem;">New 5-ply cartons, 80-GSM bubble wrap</td></tr><tr style="border-bottom: 1px solid rgba(255,255,255,0.06); transition: background 0.2s ease;"><td style="padding: 16px 20px; font-weight: 600; color: #f8fafc; font-size: 0.95rem;">Transit Marine Insurance</td><td style="padding: 16px 20px; color: #10b981; font-size: 0.92rem; font-weight: 500; background: rgba(16, 185, 129, 0.03);"><i class="fas fa-check" style="margin-right: 8px; color: #10b981;"></i>3% of declared consignment value</td><td style="padding: 16px 20px; color: #cbd5e1; font-size: 0.92rem;">Official Insurance Policy with zero-dep endorsement</td><td style="padding: 16px 20px; color: #cbd5e1; font-size: 0.92rem;">Doorstep claims support without surveyor delay</td></tr><tr style="border-bottom: 1px solid rgba(255,255,255,0.06); transition: background 0.2s ease;"><td style="padding: 16px 20px; font-weight: 600; color: #f8fafc; font-size: 0.95rem;">Statutory Highway Tolls &amp; Green Tax</td><td style="padding: 16px 20px; color: #10b981; font-size: 0.92rem; font-weight: 500; background: rgba(16, 185, 129, 0.03);"><i class="fas fa-check" style="margin-right: 8px; color: #10b981;"></i>Included transparently in carrier bill</td><td style="padding: 16px 20px; color: #cbd5e1; font-size: 0.92rem;">Automated FASTag &amp; State RTO e-clearance</td><td style="padding: 16px 20px; color: #cbd5e1; font-size: 0.92rem;">Zero roadside stoppage or unexpected surcharges</td></tr><tr style="border-bottom: 1px solid rgba(255,255,255,0.06); transition: background 0.2s ease;"><td style="padding: 16px 20px; font-weight: 600; color: #f8fafc; font-size: 0.95rem;">Unpacking &amp; Debris Removal</td><td style="padding: 16px 20px; color: #10b981; font-size: 0.92rem; font-weight: 500; background: rgba(16, 185, 129, 0.03);"><i class="fas fa-check" style="margin-right: 8px; color: #10b981;"></i>Complimentary at destination delivery</td><td style="padding: 16px 20px; color: #cbd5e1; font-size: 0.92rem;">Customer Handover Verification Sign-off</td><td style="padding: 16px 20px; color: #cbd5e1; font-size: 0.92rem;">Assembly of dismantled beds, tables, and sofas</td></tr></tbody>
      </table>
    </div>

  </div>
</section>


<section class="operational-photo-showcase-section" style="padding: 55px 0; background: #0b132b; border-bottom: 1px solid rgba(255,255,255,0.08);">
  <div class="container" style="max-width: 1060px; margin: 0 auto; padding: 0 15px;">
    
    <div style="text-align: center; margin-bottom: 35px;">
      <span style="background: rgba(245, 158, 11, 0.12); color: #f59e0b; border: 1px solid rgba(245, 158, 11, 0.35); padding: 5px 16px; border-radius: 20px; font-size: 0.78rem; font-weight: 700; text-transform: uppercase; letter-spacing: 0.5px;">
        AUTHENTIC OPERATIONAL GALLERY
      </span>
      <h2 style="color: #ffffff; font-size: 1.75rem; font-weight: 800; margin-top: 12px; margin-bottom: 8px;">
        Verified On-Site Operations: Verify Credentials &amp; Company Licenses
      </h2>
      <p style="color: #94a3b8; font-size: 0.95rem; max-width: 720px; margin: 0 auto;">
        Real job-site photographic evidence of our specialized packaging materials, loading protocols, and GPS-tracked container transport.
      </p>
    </div>

    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(290px, 1fr)); gap: 24px;">
      
        <div style="background: rgba(15, 23, 42, 0.75); border: 1.5px solid rgba(255, 255, 255, 0.1); border-radius: 14px; overflow: hidden; box-shadow: 0 12px 30px rgba(0,0,0,0.35); display: flex; flex-direction: column;">
          <div style="height: 230px; overflow: hidden; position: relative;">
            <img src="<?php echo SITE_URL; ?>assets/images/services/household-furniture-bubble-wrap.jpeg" alt="High-Density Bubble Cushioning for Wooden Furniture - Shree Ashirwad" title="Furniture Protective Cushioning" width="320" height="230" loading="lazy" style="width: 100%; height: 100%; object-fit: cover; display: block;">
            <span style="position: absolute; top: 12px; left: 12px; background: rgba(15,23,42,0.85); color: #38bdf8; font-size: 0.72rem; font-weight: 700; padding: 4px 10px; border-radius: 12px; border: 1px solid rgba(56,189,248,0.3); text-transform: uppercase; letter-spacing: 0.5px;">
              <i class="fas fa-camera" style="color: #f59e0b; margin-right: 5px;"></i> Verified On-Site
            </span>
          </div>
          <div style="padding: 16px 18px; background: #0b132b; border-top: 1px solid rgba(255,255,255,0.08); flex-grow: 1;">
            <h3 style="color: #ffffff; font-size: 0.98rem; font-weight: 700; margin-bottom: 6px; line-height: 1.4;">Furniture Protective Cushioning</h3>
            <p style="color: #94a3b8; font-size: 0.85rem; line-height: 1.55; margin: 0;">High-density air-bubble film and corrugated edge guards safeguarding wooden furniture.</p>
          </div>
        </div>
        <div style="background: rgba(15, 23, 42, 0.75); border: 1.5px solid rgba(255, 255, 255, 0.1); border-radius: 14px; overflow: hidden; box-shadow: 0 12px 30px rgba(0,0,0,0.35); display: flex; flex-direction: column;">
          <div style="height: 230px; overflow: hidden; position: relative;">
            <img src="<?php echo SITE_URL; ?>assets/images/services/residential-moving-carton-loading.jpeg" alt="Systematic Loading of Heavy-Duty Corrugated Moving Cartons - Shree Ashirwad" title="Residential Shifting Carton Loading" width="320" height="230" loading="lazy" style="width: 100%; height: 100%; object-fit: cover; display: block;">
            <span style="position: absolute; top: 12px; left: 12px; background: rgba(15,23,42,0.85); color: #38bdf8; font-size: 0.72rem; font-weight: 700; padding: 4px 10px; border-radius: 12px; border: 1px solid rgba(56,189,248,0.3); text-transform: uppercase; letter-spacing: 0.5px;">
              <i class="fas fa-camera" style="color: #f59e0b; margin-right: 5px;"></i> Verified On-Site
            </span>
          </div>
          <div style="padding: 16px 18px; background: #0b132b; border-top: 1px solid rgba(255,255,255,0.08); flex-grow: 1;">
            <h3 style="color: #ffffff; font-size: 0.98rem; font-weight: 700; margin-bottom: 6px; line-height: 1.4;">Residential Shifting Carton Loading</h3>
            <p style="color: #94a3b8; font-size: 0.85rem; line-height: 1.55; margin: 0;">Even weight distribution and systematic loading of household cartons in covered container trucks.</p>
          </div>
        </div>
        <div style="background: rgba(15, 23, 42, 0.75); border: 1.5px solid rgba(255, 255, 255, 0.1); border-radius: 14px; overflow: hidden; box-shadow: 0 12px 30px rgba(0,0,0,0.35); display: flex; flex-direction: column;">
          <div style="height: 230px; overflow: hidden; position: relative;">
            <img src="<?php echo SITE_URL; ?>assets/images/services/appliance-protective-wrapping.jpeg" alt="Multi-Layer Appliance Packaging for Refrigerators and Washing Machines - Shree Ashirwad" title="Home Appliance Safe Packaging" width="320" height="230" loading="lazy" style="width: 100%; height: 100%; object-fit: cover; display: block;">
            <span style="position: absolute; top: 12px; left: 12px; background: rgba(15,23,42,0.85); color: #38bdf8; font-size: 0.72rem; font-weight: 700; padding: 4px 10px; border-radius: 12px; border: 1px solid rgba(56,189,248,0.3); text-transform: uppercase; letter-spacing: 0.5px;">
              <i class="fas fa-camera" style="color: #f59e0b; margin-right: 5px;"></i> Verified On-Site
            </span>
          </div>
          <div style="padding: 16px 18px; background: #0b132b; border-top: 1px solid rgba(255,255,255,0.08); flex-grow: 1;">
            <h3 style="color: #ffffff; font-size: 0.98rem; font-weight: 700; margin-bottom: 6px; line-height: 1.4;">Home Appliance Safe Packaging</h3>
            <p style="color: #94a3b8; font-size: 0.85rem; line-height: 1.55; margin: 0;">Anti-static foam and heavy stretch wrap securing home appliances against transit shock.</p>
          </div>
        </div>
    </div>

  </div>
</section>

<section class="content-ui-section" style="padding: 55px 0; background: #070d1e; color: #cbd5e1; border-bottom: 1px solid rgba(255,255,255,0.07);">
  <div class="container" style="max-width: 1060px; margin: 0 auto; padding: 0 15px;">
    <div style="background: rgba(15, 23, 42, 0.65); border: 1px solid rgba(255, 255, 255, 0.08); border-radius: 16px; padding: 36px 32px; box-shadow: 0 12px 30px rgba(0,0,0,0.35);">
      <span style="background: rgba(59, 130, 246, 0.12); color: #60a5fa; border: 1px solid rgba(59, 130, 246, 0.35); padding: 4px 14px; border-radius: 20px; font-size: 0.78rem; font-weight: 700; text-transform: uppercase; letter-spacing: 0.5px; display: inline-block; margin-bottom: 14px;">OPERATIONAL STANDARDS</span>
      <h2 style="color: #ffffff; font-size: 1.7rem; font-weight: 800; line-height: 1.35; margin-bottom: 18px;">Systematic Relocation Standards &amp; Comprehensive Moving Survey for Verify Credentials</h2>
      <div style="font-size: 1.02rem; line-height: 1.8; color: #cbd5e1;">
	<p>At Verify Credentials, we understand the complexity and uncertainty that come with relocating. That's why we've developed a comprehensive operational framework designed to turn your moving day into a seamless, stress-free experience.</p>
	<div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(230px, 1fr)); gap: 20px; margin-top: 24px;">
  <div style="background: rgba(15, 23, 42, 0.75); border: 1.5px solid rgba(255, 255, 255, 0.08); border-radius: 14px; padding: 24px 20px; box-shadow: 0 10px 25px rgba(0,0,0,0.35); transition: transform 0.2s ease, border-color 0.2s ease;">
    <div style="display: inline-flex; align-items: center; justify-content: center; width: 42px; height: 42px; border-radius: 10px; background: #f59e0b22; color: #f59e0b; font-weight: 800; font-size: 1.05rem; margin-bottom: 14px;">01</div>
    <h3 style="color: #ffffff; font-size: 1.1rem; font-weight: 700; margin-bottom: 10px; line-height: 1.4;">Systematic Moving Day Coordination:</h3>
    <p style="color: #94a3b8; font-size: 0.88rem; line-height: 1.65; margin: 0;">Our team meticulously plans and executes every aspect of your move, ensuring a smooth transition from your current home to your new one.</p>
  </div>
  <div style="background: rgba(15, 23, 42, 0.75); border: 1.5px solid rgba(255, 255, 255, 0.08); border-radius: 14px; padding: 24px 20px; box-shadow: 0 10px 25px rgba(0,0,0,0.35); transition: transform 0.2s ease, border-color 0.2s ease;">
    <div style="display: inline-flex; align-items: center; justify-content: center; width: 42px; height: 42px; border-radius: 10px; background: #10b98122; color: #10b981; font-weight: 800; font-size: 1.05rem; margin-bottom: 14px;">02</div>
    <h3 style="color: #ffffff; font-size: 1.1rem; font-weight: 700; margin-bottom: 10px; line-height: 1.4;">Trained Packing Specialists:</h3>
    <p style="color: #94a3b8; font-size: 0.88rem; line-height: 1.65; margin: 0;">Our dedicated team members undergo extensive training to ensure they handle your belongings with the utmost care and precision.</p>
  </div>
  <div style="background: rgba(15, 23, 42, 0.75); border: 1.5px solid rgba(255, 255, 255, 0.08); border-radius: 14px; padding: 24px 20px; box-shadow: 0 10px 25px rgba(0,0,0,0.35); transition: transform 0.2s ease, border-color 0.2s ease;">
    <div style="display: inline-flex; align-items: center; justify-content: center; width: 42px; height: 42px; border-radius: 10px; background: #3b82f622; color: #3b82f6; font-weight: 800; font-size: 1.05rem; margin-bottom: 14px;">03</div>
    <h3 style="color: #ffffff; font-size: 1.1rem; font-weight: 700; margin-bottom: 10px; line-height: 1.4;">Dedicated Supervisor Oversight:</h3>
    <p style="color: #94a3b8; font-size: 0.88rem; line-height: 1.65; margin: 0;">We assign a supervisor to oversee the entire moving process, ensuring consistency, quality control, and timely completion.</p>
  </div>
  <div style="background: rgba(15, 23, 42, 0.75); border: 1.5px solid rgba(255, 255, 255, 0.08); border-radius: 14px; padding: 24px 20px; box-shadow: 0 10px 25px rgba(0,0,0,0.35); transition: transform 0.2s ease, border-color 0.2s ease;">
    <div style="display: inline-flex; align-items: center; justify-content: center; width: 42px; height: 42px; border-radius: 10px; background: #a855f722; color: #a855f7; font-weight: 800; font-size: 1.05rem; margin-bottom: 14px;">04</div>
    <h3 style="color: #ffffff; font-size: 1.1rem; font-weight: 700; margin-bottom: 10px; line-height: 1.4;">Damage-Free Guarantees:</h3>
    <p style="color: #94a3b8; font-size: 0.88rem; line-height: 1.65; margin: 0;">We take pride in our unwavering commitment to protecting your valuables during the moving process, backed by our Damage-Free Guarantees.</p>
  </div>
</div>

	<p>At Verify Credentials, we collaborate with industry-leading partners who specialize in furniture courier services, house shifting, and vehicle transportation.</p>
	<ul style="list-style: none; padding-left: 0; margin: 18px 0;">
		<li style="margin-bottom: 10px; display: flex; align-items: flex-start; gap: 10px;"><i class="fas fa-check-circle" style="color: #10b981; margin-top: 5px; flex-shrink: 0; font-size: 0.95rem;"></i><span><strong>Furniture Courier India:</strong> Our partnership with reputable furniture courier companies ensures the safe transport of your delicate furniture items.</span></li>
		<li style="margin-bottom: 10px; display: flex; align-items: flex-start; gap: 10px;"><i class="fas fa-check-circle" style="color: #10b981; margin-top: 5px; flex-shrink: 0; font-size: 0.95rem;"></i><span><strong>House Shifting Services:</strong> Our collaboration with top-rated house shifting services providers guarantees a seamless transition during your domestic relocation.</span></li>
		<li style="margin-bottom: 10px; display: flex; align-items: flex-start; gap: 10px;"><i class="fas fa-check-circle" style="color: #10b981; margin-top: 5px; flex-shrink: 0; font-size: 0.95rem;"></i><span><strong>Vehicle Transportation:</strong> We work with reliable vehicle transportation specialists to guarantee the secure transport of your vehicles during your relocation.</span></li>
	</ul>

	<p>Verify Credentials offers comprehensive solutions for vehicle transportation and house shifting services, tailored to meet your specific requirements.</p>
	<h3><strong>Vehicle Transportation:</strong></h3>
	<ul style="list-style: none; padding-left: 0; margin: 18px 0;">
		<li style="margin-bottom: 10px; display: flex; align-items: flex-start; gap: 10px;"><i class="fas fa-check-circle" style="color: #10b981; margin-top: 5px; flex-shrink: 0; font-size: 0.95rem;"></i><span><strong>Safe and Secure Transport:</strong> Our team ensures your vehicles are securely transported, utilizing state-of-the-art transportation methods and advanced tracking systems.</span></li>
		<li style="margin-bottom: 10px; display: flex; align-items: flex-start; gap: 10px;"><i class="fas fa-check-circle" style="color: #10b981; margin-top: 5px; flex-shrink: 0; font-size: 0.95rem;"></i><span><strong>Expert Crew:</strong> Our team of experienced professionals handles the transport of your vehicles, ensuring their safe arrival at your desired destination.</span></li>
		<li style="margin-bottom: 10px; display: flex; align-items: flex-start; gap: 10px;"><i class="fas fa-check-circle" style="color: #10b981; margin-top: 5px; flex-shrink: 0; font-size: 0.95rem;"></i><span><strong>Insurance Coverage:</strong> We offer comprehensive insurance coverage for your vehicles, providing peace of mind during the transportation process.</span></li>
	</ul>
	<h3><strong>House Shifting Services:</strong></h3></div>
    </div>
  </div>
</section>


<section class="content-ui-section" style="padding: 55px 0; background: #0b132b; color: #cbd5e1; border-bottom: 1px solid rgba(255,255,255,0.07);">
  <div class="container" style="max-width: 1060px; margin: 0 auto; padding: 0 15px;">
    <div style="background: rgba(15, 23, 42, 0.65); border: 1px solid rgba(255, 255, 255, 0.08); border-radius: 16px; padding: 36px 32px; box-shadow: 0 12px 30px rgba(0,0,0,0.35);">
      <span style="background: rgba(16, 185, 129, 0.12); color: #10b981; border: 1px solid rgba(16, 185, 129, 0.35); padding: 4px 14px; border-radius: 20px; font-size: 0.78rem; font-weight: 700; text-transform: uppercase; letter-spacing: 0.5px; display: inline-block; margin-bottom: 14px;">PACKAGING PROTOCOL</span>
      <h2 style="color: #ffffff; font-size: 1.7rem; font-weight: 800; line-height: 1.35; margin-bottom: 18px;">Engineered Shock-Absorbent Multi-Layer Packaging Standards for Verify Credentials Company Licenses</h2>
      <div style="font-size: 1.02rem; line-height: 1.8; color: #cbd5e1;">
	<p>When it comes to securing delicate items like Verify Credentials, a meticulously designed multi-layer packaging solution is essential. Our comprehensive approach ensures unparalleled protection during transportation and storage.</p>

	<p>Our well-thought-out process starts with the following key components:</p>
	<div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(230px, 1fr)); gap: 20px; margin-top: 24px;">
  <div style="background: rgba(15, 23, 42, 0.75); border: 1.5px solid rgba(255, 255, 255, 0.08); border-radius: 14px; padding: 24px 20px; box-shadow: 0 10px 25px rgba(0,0,0,0.35); transition: transform 0.2s ease, border-color 0.2s ease;">
    <div style="display: inline-flex; align-items: center; justify-content: center; width: 42px; height: 42px; border-radius: 10px; background: #f59e0b22; color: #f59e0b; font-weight: 800; font-size: 1.05rem; margin-bottom: 14px;">01</div>
    <h3 style="color: #ffffff; font-size: 1.1rem; font-weight: 700; margin-bottom: 10px; line-height: 1.4;">80-GSM Bubble Wrap:</h3>
    <p style="color: #94a3b8; font-size: 0.88rem; line-height: 1.65; margin: 0;">This high-quality bubble wrap provides a cushioning layer, absorbing shock and minimizing impacts.</p>
  </div>
  <div style="background: rgba(15, 23, 42, 0.75); border: 1.5px solid rgba(255, 255, 255, 0.08); border-radius: 14px; padding: 24px 20px; box-shadow: 0 10px 25px rgba(0,0,0,0.35); transition: transform 0.2s ease, border-color 0.2s ease;">
    <div style="display: inline-flex; align-items: center; justify-content: center; width: 42px; height: 42px; border-radius: 10px; background: #10b98122; color: #10b981; font-weight: 800; font-size: 1.05rem; margin-bottom: 14px;">02</div>
    <h3 style="color: #ffffff; font-size: 1.1rem; font-weight: 700; margin-bottom: 10px; line-height: 1.4;">Corrugated Fiberboard Sheets:</h3>
    <p style="color: #94a3b8; font-size: 0.88rem; line-height: 1.65; margin: 0;">These sturdy sheets provide a strong base, protecting your valuable items from external forces.</p>
  </div>
  <div style="background: rgba(15, 23, 42, 0.75); border: 1.5px solid rgba(255, 255, 255, 0.08); border-radius: 14px; padding: 24px 20px; box-shadow: 0 10px 25px rgba(0,0,0,0.35); transition: transform 0.2s ease, border-color 0.2s ease;">
    <div style="display: inline-flex; align-items: center; justify-content: center; width: 42px; height: 42px; border-radius: 10px; background: #3b82f622; color: #3b82f6; font-weight: 800; font-size: 1.05rem; margin-bottom: 14px;">03</div>
    <h3 style="color: #ffffff; font-size: 1.1rem; font-weight: 700; margin-bottom: 10px; line-height: 1.4;">Edge Buffers:</h3>
    <p style="color: #94a3b8; font-size: 0.88rem; line-height: 1.65; margin: 0;">These cushioning elements are placed around the edges of delicate items, preventing any potential scratches or damages.</p>
  </div>
  <div style="background: rgba(15, 23, 42, 0.75); border: 1.5px solid rgba(255, 255, 255, 0.08); border-radius: 14px; padding: 24px 20px; box-shadow: 0 10px 25px rgba(0,0,0,0.35); transition: transform 0.2s ease, border-color 0.2s ease;">
    <div style="display: inline-flex; align-items: center; justify-content: center; width: 42px; height: 42px; border-radius: 10px; background: #a855f722; color: #a855f7; font-weight: 800; font-size: 1.05rem; margin-bottom: 14px;">04</div>
    <h3 style="color: #ffffff; font-size: 1.1rem; font-weight: 700; margin-bottom: 10px; line-height: 1.4;">Waterproof Stretch Wrap:</h3>
    <p style="color: #94a3b8; font-size: 0.88rem; line-height: 1.65; margin: 0;">Our final layer ensures a waterproof seal, safeguarding your items from moisture and unexpected spills.</p>
  </div>
</div>

	<p>Our commitment to quality extends to our partnerships with reliable industry players:</p>
	<ul style="list-style: none; padding-left: 0; margin: 18px 0;">
		<li style="margin-bottom: 10px; display: flex; align-items: flex-start; gap: 10px;"><i class="fas fa-check-circle" style="color: #10b981; margin-top: 5px; flex-shrink: 0; font-size: 0.95rem;"></i><span><strong>Furniture Courier India:</strong> Delivering secure transportation for your valuable items across the country.</span></li>
		<li style="margin-bottom: 10px; display: flex; align-items: flex-start; gap: 10px;"><i class="fas fa-check-circle" style="color: #10b981; margin-top: 5px; flex-shrink: 0; font-size: 0.95rem;"></i><span><strong>House Shifting Services:</strong> Specializing in safe home relocations, ensuring a smooth transition during house shifting.</span></li>
		<li style="margin-bottom: 10px; display: flex; align-items: flex-start; gap: 10px;"><i class="fas fa-check-circle" style="color: #10b981; margin-top: 5px; flex-shrink: 0; font-size: 0.95rem;"></i><span><strong>Vehicle for Home Shift:</strong> Comprehensive solutions for vehicles, ensuring a hassle-free transportation of your vehicles during home shifting.</span></li>
		<li style="margin-bottom: 10px; display: flex; align-items: flex-start; gap: 10px;"><i class="fas fa-check-circle" style="color: #10b981; margin-top: 5px; flex-shrink: 0; font-size: 0.95rem;"></i><span><strong>Best House Shifting Service in India:</strong> Offering dependable and efficient services for a stress-free relocation experience.</span></li>
		<li style="margin-bottom: 10px; display: flex; align-items: flex-start; gap: 10px;"><i class="fas fa-check-circle" style="color: #10b981; margin-top: 5px; flex-shrink: 0; font-size: 0.95rem;"></i><span><strong>Packers and Movers Rate Price:</strong> Providing transparent pricing and cost-effective solutions for your shifting needs.</span></li>
		<li style="margin-bottom: 10px; display: flex; align-items: flex-start; gap: 10px;"><i class="fas fa-check-circle" style="color: #10b981; margin-top: 5px; flex-shrink: 0; font-size: 0.95rem;"></i><span><strong>Packers and Movers Charges for 450 Kms:</strong> Specializing in safe and cost-effective transportation, tailored to your specific needs.</span></li>
		<li style="margin-bottom: 10px; display: flex; align-items: flex-start; gap: 10px;"><i class="fas fa-check-circle" style="color: #10b981; margin-top: 5px; flex-shrink: 0; font-size: 0.95rem;"></i><span><strong>Tampa Movers Cost:</strong> A trusted partner for seamless and efficient moves, offering competitive rates for your peace of mind.</span></li>
		<li style="margin-bottom: 10px; display: flex; align-items: flex-start; gap: 10px;"><i class="fas fa-check-circle" style="color: #10b981; margin-top: 5px; flex-shrink: 0; font-size: 0.95rem;"></i><span><strong>IBa Approved Packers and Movers in Karur:</strong> Guaranteed reliability and expertise, ensuring your credentials are transported with utmost care.</span></li>
	</ul>

	<p>Our dedicated team ensures the secure transportation of your valuable credentials:</p></div>
    </div>
  </div>
</section>


<section class="content-ui-section" style="padding: 55px 0; background: #070d1e; color: #cbd5e1; border-bottom: 1px solid rgba(255,255,255,0.07);">
  <div class="container" style="max-width: 1060px; margin: 0 auto; padding: 0 15px;">
    <div style="background: rgba(15, 23, 42, 0.65); border: 1px solid rgba(255, 255, 255, 0.08); border-radius: 16px; padding: 36px 32px; box-shadow: 0 12px 30px rgba(0,0,0,0.35);">
      <span style="background: rgba(168, 85, 247, 0.12); color: #c084fc; border: 1px solid rgba(168, 85, 247, 0.35); padding: 4px 14px; border-radius: 20px; font-size: 0.78rem; font-weight: 700; text-transform: uppercase; letter-spacing: 0.5px; display: inline-block; margin-bottom: 14px;">TRANSPARENT BILLING</span>
      <h2 style="color: #ffffff; font-size: 1.7rem; font-weight: 800; line-height: 1.35; margin-bottom: 18px;">100% Fixed-Price Written Quotations, IBA Approved Billing &amp; Transit Insurance for Verify Credentials Company Licenses</h2>
      <div style="font-size: 1.02rem; line-height: 1.8; color: #cbd5e1;"><div style="font-size: 18px; font-weight: bold;">Transparent Pricing for Verify Credentials</div>

At Verify Credentials, we believe in being upfront and transparent about our pricing. We want to ensure that you understand exactly what you're getting for your money. Here's a breakdown of our transparent pricing:

<div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(230px, 1fr)); gap: 20px; margin-top: 24px;">
  <div style="background: rgba(15, 23, 42, 0.75); border: 1.5px solid rgba(255, 255, 255, 0.08); border-radius: 14px; padding: 24px 20px; box-shadow: 0 10px 25px rgba(0,0,0,0.35); transition: transform 0.2s ease, border-color 0.2s ease;">
    <div style="display: inline-flex; align-items: center; justify-content: center; width: 42px; height: 42px; border-radius: 10px; background: #f59e0b22; color: #f59e0b; font-weight: 800; font-size: 1.05rem; margin-bottom: 14px;">01</div>
    <h3 style="color: #ffffff; font-size: 1.1rem; font-weight: 700; margin-bottom: 10px; line-height: 1.4;">Protocol 01</h3>
    <p style="color: #94a3b8; font-size: 0.88rem; line-height: 1.65; margin: 0;">Zero Moving-Day Surcharges</p>
  </div>
  <div style="background: rgba(15, 23, 42, 0.75); border: 1.5px solid rgba(255, 255, 255, 0.08); border-radius: 14px; padding: 24px 20px; box-shadow: 0 10px 25px rgba(0,0,0,0.35); transition: transform 0.2s ease, border-color 0.2s ease;">
    <div style="display: inline-flex; align-items: center; justify-content: center; width: 42px; height: 42px; border-radius: 10px; background: #10b98122; color: #10b981; font-weight: 800; font-size: 1.05rem; margin-bottom: 14px;">02</div>
    <h3 style="color: #ffffff; font-size: 1.1rem; font-weight: 700; margin-bottom: 10px; line-height: 1.4;">Protocol 02</h3>
    <p style="color: #94a3b8; font-size: 0.88rem; line-height: 1.65; margin: 0;">Itemized Written Contracts</p>
  </div>
  <div style="background: rgba(15, 23, 42, 0.75); border: 1.5px solid rgba(255, 255, 255, 0.08); border-radius: 14px; padding: 24px 20px; box-shadow: 0 10px 25px rgba(0,0,0,0.35); transition: transform 0.2s ease, border-color 0.2s ease;">
    <div style="display: inline-flex; align-items: center; justify-content: center; width: 42px; height: 42px; border-radius: 10px; background: #3b82f622; color: #3b82f6; font-weight: 800; font-size: 1.05rem; margin-bottom: 14px;">03</div>
    <h3 style="color: #ffffff; font-size: 1.1rem; font-weight: 700; margin-bottom: 10px; line-height: 1.4;">Protocol 03</h3>
    <p style="color: #94a3b8; font-size: 0.88rem; line-height: 1.65; margin: 0;">IBA-Approved Bills for Government/Corporate Claims</p>
  </div>
  <div style="background: rgba(15, 23, 42, 0.75); border: 1.5px solid rgba(255, 255, 255, 0.08); border-radius: 14px; padding: 24px 20px; box-shadow: 0 10px 25px rgba(0,0,0,0.35); transition: transform 0.2s ease, border-color 0.2s ease;">
    <div style="display: inline-flex; align-items: center; justify-content: center; width: 42px; height: 42px; border-radius: 10px; background: #a855f722; color: #a855f7; font-weight: 800; font-size: 1.05rem; margin-bottom: 14px;">04</div>
    <h3 style="color: #ffffff; font-size: 1.1rem; font-weight: 700; margin-bottom: 10px; line-height: 1.4;">Protocol 04</h3>
    <p style="color: #94a3b8; font-size: 0.88rem; line-height: 1.65; margin: 0;">100% Declared-Value Transit Insurance</p>
  </div>
</div>

Our pricing is designed to be simple and straightforward, with no hidden fees or surprises. Here's what you can expect:

<p>Our itemized written contracts clearly outline all the services you've purchased and the total cost. We believe in transparency, and we want to ensure that you understand exactly what you're getting for your money.</p>

<p>We're proud to offer 100% declared-value transit insurance on all our moves. This means that you'll receive full replacement value for your items if they're lost or damaged during transit.</p>

<p>Our IBA-approved bills ensure that you receive accurate and fair compensation for your claims. We work closely with the insurance industry to ensure that our bills are compliant with all relevant regulations and guidelines.</p>

<p>And, to give you even more peace of mind, we offer zero moving-day surcharges. This means that you won't have to pay any extra fees on the day of your move.</p>

<p>We believe that transparency is key to building trust with our customers. That's why we're committed to providing you with clear and concise pricing and billing information. We want to ensure that you understand exactly what you're getting for your money, and that you're completely satisfied with our services.</p></div>
    </div>
  </div>
</section>


<section class="content-ui-section" style="padding: 55px 0; background: #0b132b; color: #cbd5e1; border-bottom: 1px solid rgba(255,255,255,0.07);">
  <div class="container" style="max-width: 1060px; margin: 0 auto; padding: 0 15px;">
    <div style="background: rgba(15, 23, 42, 0.65); border: 1px solid rgba(255, 255, 255, 0.08); border-radius: 16px; padding: 36px 32px; box-shadow: 0 12px 30px rgba(0,0,0,0.35);">
      <span style="background: rgba(245, 158, 11, 0.12); color: #f59e0b; border: 1px solid rgba(245, 158, 11, 0.35); padding: 4px 14px; border-radius: 20px; font-size: 0.78rem; font-weight: 700; text-transform: uppercase; letter-spacing: 0.5px; display: inline-block; margin-bottom: 14px;">STEP-BY-STEP PROCESS</span>
      <h2 style="color: #ffffff; font-size: 1.7rem; font-weight: 800; line-height: 1.35; margin-bottom: 18px;">Step-by-Step Moving Day Workflow: Survey, Packing, Transit &amp; Placement for Verify Credentials</h2>
      <div style="font-size: 1.02rem; line-height: 1.8; color: #cbd5e1;"><p style="font-size: 1.04rem; line-height: 1.75; color: #f1f5f9; font-weight: 500; margin-bottom: 16px;">Initiating a successful move for Verify Credentials begins with a meticulous pre-move assessment. Schedule a comprehensive physical survey of the office or home, accompanied by a detailed video walkthrough. This dual approach ensures that every item is cataloged, photographed, and inspected for pre-existing damage.</p>
<div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(230px, 1fr)); gap: 20px; margin-top: 20px;">
  <div style="background: rgba(15, 23, 42, 0.75); border: 1.5px solid rgba(255, 255, 255, 0.08); border-radius: 14px; padding: 22px 18px; box-shadow: 0 10px 25px rgba(0,0,0,0.35); display: flex; flex-direction: column; justify-content: space-between;">
    <div>
      <div style="display: inline-flex; align-items: center; justify-content: center; width: 38px; height: 38px; border-radius: 10px; background: #f59e0b22; color: #f59e0b; font-weight: 800; font-size: 0.95rem; margin-bottom: 12px;">01</div>
      <h3 style="color: #ffffff; font-size: 1.05rem; font-weight: 700; margin-bottom: 8px; line-height: 1.4;">Create a digital inventory list</h3>
      <p style="color: #94a3b8; font-size: 0.86rem; line-height: 1.6; margin: 0;">noting the condition of each box and fragile item. This documentation serves as the baseline for liability, ensuring that any discrepancies during transit are easily identified and resolved without dispute.</p>
    </div>
    <div style="display: flex; align-items: center; gap: 8px; margin-top: 14px; padding-top: 10px; border-top: 1px solid rgba(255,255,255,0.06); font-size: 0.8rem; color: #10b981;">
      <i class="fas fa-check-circle"></i><span>Verified Shree Ashirwad Standard</span>
    </div>
  </div>
  <div style="background: rgba(15, 23, 42, 0.75); border: 1.5px solid rgba(255, 255, 255, 0.08); border-radius: 14px; padding: 22px 18px; box-shadow: 0 10px 25px rgba(0,0,0,0.35); display: flex; flex-direction: column; justify-content: space-between;">
    <div>
      <div style="display: inline-flex; align-items: center; justify-content: center; width: 38px; height: 38px; border-radius: 10px; background: #10b98122; color: #10b981; font-weight: 800; font-size: 0.95rem; margin-bottom: 12px;">02</div>
      <h3 style="color: #ffffff; font-size: 1.05rem; font-weight: 700; margin-bottom: 8px; line-height: 1.4;">Once the survey is complete</h3>
      <p style="color: #94a3b8; font-size: 0.86rem; line-height: 1.6; margin: 0;">proceed to systematic room-by-room packing. Assign unique alphanumeric codes to each box, corresponding to the room of origin and the specific contents inside. Use high-quality packaging materials, including bubble wrap for fragile items and sturdy cardboard boxes of appropriate sizes.</p>
    </div>
    <div style="display: flex; align-items: center; gap: 8px; margin-top: 14px; padding-top: 10px; border-top: 1px solid rgba(255,255,255,0.06); font-size: 0.8rem; color: #10b981;">
      <i class="fas fa-check-circle"></i><span>Verified Shree Ashirwad Standard</span>
    </div>
  </div>
  <div style="background: rgba(15, 23, 42, 0.75); border: 1.5px solid rgba(255, 255, 255, 0.08); border-radius: 14px; padding: 22px 18px; box-shadow: 0 10px 25px rgba(0,0,0,0.35); display: flex; flex-direction: column; justify-content: space-between;">
    <div>
      <div style="display: inline-flex; align-items: center; justify-content: center; width: 38px; height: 38px; border-radius: 10px; background: #3b82f622; color: #3b82f6; font-weight: 800; font-size: 0.95rem; margin-bottom: 12px;">03</div>
      <h3 style="color: #ffffff; font-size: 1.05rem; font-weight: 700; margin-bottom: 8px; line-height: 1.4;">Label each box clearly with its contents</h3>
      <p style="color: #94a3b8; font-size: 0.86rem; line-height: 1.6; margin: 0;">room destination, and handling instructions, such as &quot;Fragile&quot; or &quot;This Side Up.&quot; Keep essential items, like documents, electronics, and daily necessities, in a separate, easily accessible kit. This organized approach minimizes confusion and speeds up the unpacking process at the new location.</p>
    </div>
    <div style="display: flex; align-items: center; gap: 8px; margin-top: 14px; padding-top: 10px; border-top: 1px solid rgba(255,255,255,0.06); font-size: 0.8rem; color: #10b981;">
      <i class="fas fa-check-circle"></i><span>Verified Shree Ashirwad Standard</span>
    </div>
  </div>
  <div style="background: rgba(15, 23, 42, 0.75); border: 1.5px solid rgba(255, 255, 255, 0.08); border-radius: 14px; padding: 22px 18px; box-shadow: 0 10px 25px rgba(0,0,0,0.35); display: flex; flex-direction: column; justify-content: space-between;">
    <div>
      <div style="display: inline-flex; align-items: center; justify-content: center; width: 38px; height: 38px; border-radius: 10px; background: #a855f722; color: #a855f7; font-weight: 800; font-size: 0.95rem; margin-bottom: 12px;">04</div>
      <h3 style="color: #ffffff; font-size: 1.05rem; font-weight: 700; margin-bottom: 8px; line-height: 1.4;">Safe transit is critical</h3>
      <p style="color: #94a3b8; font-size: 0.86rem; line-height: 1.6; margin: 0;">to maintaining the integrity of your belongings. Ensure that all boxes are securely stacked and strapped within the moving vehicle to prevent shifting during transport. Climate-controlled trucks should be used for sensitive items to protect against temperature fluctuations and humidity.</p>
    </div>
    <div style="display: flex; align-items: center; gap: 8px; margin-top: 14px; padding-top: 10px; border-top: 1px solid rgba(255,255,255,0.06); font-size: 0.8rem; color: #10b981;">
      <i class="fas fa-check-circle"></i><span>Verified Shree Ashirwad Standard</span>
    </div>
  </div>
  <div style="background: rgba(15, 23, 42, 0.75); border: 1.5px solid rgba(255, 255, 255, 0.08); border-radius: 14px; padding: 22px 18px; box-shadow: 0 10px 25px rgba(0,0,0,0.35); display: flex; flex-direction: column; justify-content: space-between;">
    <div>
      <div style="display: inline-flex; align-items: center; justify-content: center; width: 38px; height: 38px; border-radius: 10px; background: #ec489922; color: #ec4899; font-weight: 800; font-size: 0.95rem; margin-bottom: 12px;">05</div>
      <h3 style="color: #ffffff; font-size: 1.05rem; font-weight: 700; margin-bottom: 8px; line-height: 1.4;">Track the shipment in real-time if possible</h3>
      <p style="color: #94a3b8; font-size: 0.86rem; line-height: 1.6; margin: 0;">maintaining open communication with the moving crew regarding the schedule and any potential delays. Upon arrival, conduct an immediate visual inspection of the exterior of the vehicle and any visible boxes to check for signs of damage or tampering.</p>
    </div>
    <div style="display: flex; align-items: center; gap: 8px; margin-top: 14px; padding-top: 10px; border-top: 1px solid rgba(255,255,255,0.06); font-size: 0.8rem; color: #10b981;">
      <i class="fas fa-check-circle"></i><span>Verified Shree Ashirwad Standard</span>
    </div>
  </div>
  <div style="background: rgba(15, 23, 42, 0.75); border: 1.5px solid rgba(255, 255, 255, 0.08); border-radius: 14px; padding: 22px 18px; box-shadow: 0 10px 25px rgba(0,0,0,0.35); display: flex; flex-direction: column; justify-content: space-between;">
    <div>
      <div style="display: inline-flex; align-items: center; justify-content: center; width: 38px; height: 38px; border-radius: 10px; background: #06b6d422; color: #06b6d4; font-weight: 800; font-size: 0.95rem; margin-bottom: 12px;">06</div>
      <h3 style="color: #ffffff; font-size: 1.05rem; font-weight: 700; margin-bottom: 8px; line-height: 1.4;">The final phase involves</h3>
      <p style="color: #94a3b8; font-size: 0.86rem; line-height: 1.6; margin: 0;">destination uncrating and verification. Unload the boxes in the designated rooms, following the room-by-room plan established during packing. Open each box systematically, verifying the contents against the original inventory list. Check for any new damages or missing items, documenting them immediately with photos and notes.</p>
    </div>
    <div style="display: flex; align-items: center; gap: 8px; margin-top: 14px; padding-top: 10px; border-top: 1px solid rgba(255,255,255,0.06); font-size: 0.8rem; color: #10b981;">
      <i class="fas fa-check-circle"></i><span>Verified Shree Ashirwad Standard</span>
    </div>
  </div>
</div></div>
    </div>
  </div>
</section>



<section class="specifications-grid-section" style="padding: 50px 0; background: #0b132b; border-bottom: 1px solid rgba(255,255,255,0.08);">
  <div class="container" style="max-width: 1060px; margin: 0 auto; padding: 0 15px;">
    
    <div style="text-align: center; margin-bottom: 35px;">
      <span style="background: rgba(16, 185, 129, 0.12); color: #10b981; border: 1px solid rgba(16, 185, 129, 0.3); padding: 5px 16px; border-radius: 20px; font-size: 0.82rem; font-weight: 700; text-transform: uppercase; letter-spacing: 0.5px;">
        Technical Specifications
      </span>
      <h2 style="color: #ffffff; font-size: 1.75rem; font-weight: 800; margin-top: 12px; margin-bottom: 8px;">
        Operational Infrastructure & Transit Standards
      </h2>
      <p style="color: #94a3b8; font-size: 0.95rem; margin: 0;">
        Grounded engineering practices ensuring zero damage across every relocation corridor
      </p>
    </div>

    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(230px, 1fr)); gap: 20px;">
      
    <div style="background: rgba(15, 23, 42, 0.75); border: 1.5px solid rgba(255, 255, 255, 0.1); border-radius: 14px; padding: 26px 22px; box-shadow: 0 10px 25px rgba(0,0,0,0.35); transition: transform 0.2s ease;">
      <div style="display: inline-flex; align-items: center; justify-content: center; width: 50px; height: 50px; border-radius: 12px; background: rgba(255, 255, 255, 0.05); border: 1px solid #f59e0b; color: #f59e0b; font-size: 1.35rem; margin-bottom: 18px;">
        <i class="fas fa-box-open"></i>
      </div>
      <h3 style="color: #ffffff; font-size: 1.15rem; font-weight: 700; margin-bottom: 10px;">7-Layer Multi-Packaging</h3>
      <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.65; margin: 0;">80-GSM air-bubble film, high-density corrugated sheets, thermocol corner buffers, and tailored wooden crating for fragile electronics.</p>
    </div>
    <div style="background: rgba(15, 23, 42, 0.75); border: 1.5px solid rgba(255, 255, 255, 0.1); border-radius: 14px; padding: 26px 22px; box-shadow: 0 10px 25px rgba(0,0,0,0.35); transition: transform 0.2s ease;">
      <div style="display: inline-flex; align-items: center; justify-content: center; width: 50px; height: 50px; border-radius: 12px; background: rgba(255, 255, 255, 0.05); border: 1px solid #10b981; color: #10b981; font-size: 1.35rem; margin-bottom: 18px;">
        <i class="fas fa-tachometer-alt"></i>
      </div>
      <h3 style="color: #ffffff; font-size: 1.15rem; font-weight: 700; margin-bottom: 10px;">Speed-Governed Fleet</h3>
      <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.65; margin: 0;">Container trucks fitted with commercial speed governors calibrated to safety thresholds (60 km/h) to minimize transit collision risks.</p>
    </div>
    <div style="background: rgba(15, 23, 42, 0.75); border: 1.5px solid rgba(255, 255, 255, 0.1); border-radius: 14px; padding: 26px 22px; box-shadow: 0 10px 25px rgba(0,0,0,0.35); transition: transform 0.2s ease;">
      <div style="display: inline-flex; align-items: center; justify-content: center; width: 50px; height: 50px; border-radius: 12px; background: rgba(255, 255, 255, 0.05); border: 1px solid #3b82f6; color: #3b82f6; font-size: 1.35rem; margin-bottom: 18px;">
        <i class="fas fa-road"></i>
      </div>
      <h3 style="color: #ffffff; font-size: 1.15rem; font-weight: 700; margin-bottom: 10px;">FASTag &amp; e-Way Clearance</h3>
      <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.65; margin: 0;">Automated FASTag toll clearance and commercial e-Way bills ensure uninterrupted transit along major freight corridors.</p>
    </div>
    <div style="background: rgba(15, 23, 42, 0.75); border: 1.5px solid rgba(255, 255, 255, 0.1); border-radius: 14px; padding: 26px 22px; box-shadow: 0 10px 25px rgba(0,0,0,0.35); transition: transform 0.2s ease;">
      <div style="display: inline-flex; align-items: center; justify-content: center; width: 50px; height: 50px; border-radius: 12px; background: rgba(255, 255, 255, 0.05); border: 1px solid #a855f7; color: #a855f7; font-size: 1.35rem; margin-bottom: 18px;">
        <i class="fas fa-stamp"></i>
      </div>
      <h3 style="color: #ffffff; font-size: 1.15rem; font-weight: 700; margin-bottom: 10px;">IBA Certified Protocols</h3>
      <p style="color: #94a3b8; font-size: 0.9rem; line-height: 1.65; margin: 0;">ISO 9001:2015 certified operations ensuring all packing materials and transit practices strictly satisfy banking association standards.</p>
    </div>
    </div>

  </div>
</section>


<section class="statutory-documentation-section" style="padding: 50px 0; background: #0f172a; border-bottom: 1px solid rgba(255,255,255,0.08);">
  <div class="container" style="max-width: 1060px; margin: 0 auto; padding: 0 15px;">
    
    <div style="text-align: center; margin-bottom: 35px;">
      <span style="background: rgba(59, 130, 246, 0.12); color: #3b82f6; border: 1px solid rgba(59, 130, 246, 0.3); padding: 5px 16px; border-radius: 20px; font-size: 0.82rem; font-weight: 700; text-transform: uppercase; letter-spacing: 0.5px;">
        100% Transfer Allowance Reimbursement
      </span>
      <h2 style="color: #ffffff; font-size: 1.75rem; font-weight: 800; margin-top: 12px; margin-bottom: 8px;">
        IBA Approved Billing &amp; Statutory Moving Documentation
      </h2>
      <p style="color: #94a3b8; font-size: 0.95rem; margin: 0;">
        Full compliance documentation accepted across defense, banking, PSUs, and multinational corporations
      </p>
    </div>

    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(230px, 1fr)); gap: 18px;">
      
    <div style="background: rgba(15, 23, 42, 0.65); border: 1px solid rgba(255, 255, 255, 0.1); border-radius: 12px; padding: 22px 20px; box-shadow: 0 8px 20px rgba(0,0,0,0.3);">
      <span style="display: inline-block; background: rgba(245, 158, 11, 0.15); color: #f59e0b; border: 1px solid rgba(245, 158, 11, 0.35); font-size: 0.75rem; font-weight: 700; padding: 3px 10px; border-radius: 12px; text-transform: uppercase; margin-bottom: 12px;">Document 01</span>
      <h3 style="color: #ffffff; font-size: 1.1rem; font-weight: 700; margin-bottom: 8px;">IBA Consignment Note (LR/Bilty)</h3>
      <p style="color: #94a3b8; font-size: 0.88rem; line-height: 1.6; margin: 0;">Official Lorry Receipt specifying truck registration number, driver verification, seal numbers, origin-destination nodes, and declared value.</p>
    </div>
    <div style="background: rgba(15, 23, 42, 0.65); border: 1px solid rgba(255, 255, 255, 0.1); border-radius: 12px; padding: 22px 20px; box-shadow: 0 8px 20px rgba(0,0,0,0.3);">
      <span style="display: inline-block; background: rgba(245, 158, 11, 0.15); color: #f59e0b; border: 1px solid rgba(245, 158, 11, 0.35); font-size: 0.75rem; font-weight: 700; padding: 3px 10px; border-radius: 12px; text-transform: uppercase; margin-bottom: 12px;">Document 02</span>
      <h3 style="color: #ffffff; font-size: 1.1rem; font-weight: 700; margin-bottom: 8px;">18% GST Compliant Tax Invoice</h3>
      <p style="color: #94a3b8; font-size: 0.88rem; line-height: 1.6; margin: 0;">Detailed tax invoice with registered GSTIN breakdown and HSN/SAC codes (9965/9967) valid for corporate and government reimbursement.</p>
    </div>
    <div style="background: rgba(15, 23, 42, 0.65); border: 1px solid rgba(255, 255, 255, 0.1); border-radius: 12px; padding: 22px 20px; box-shadow: 0 8px 20px rgba(0,0,0,0.3);">
      <span style="display: inline-block; background: rgba(245, 158, 11, 0.15); color: #f59e0b; border: 1px solid rgba(245, 158, 11, 0.35); font-size: 0.75rem; font-weight: 700; padding: 3px 10px; border-radius: 12px; text-transform: uppercase; margin-bottom: 12px;">Document 03</span>
      <h3 style="color: #ffffff; font-size: 1.1rem; font-weight: 700; margin-bottom: 8px;">Itemized Packing Manifest</h3>
      <p style="color: #94a3b8; font-size: 0.88rem; line-height: 1.6; margin: 0;">Supervisor-verified numbered inventory checklist detailing package condition and individual item status signed during loading and delivery.</p>
    </div>
    <div style="background: rgba(15, 23, 42, 0.65); border: 1px solid rgba(255, 255, 255, 0.1); border-radius: 12px; padding: 22px 20px; box-shadow: 0 8px 20px rgba(0,0,0,0.3);">
      <span style="display: inline-block; background: rgba(245, 158, 11, 0.15); color: #f59e0b; border: 1px solid rgba(245, 158, 11, 0.35); font-size: 0.75rem; font-weight: 700; padding: 3px 10px; border-radius: 12px; text-transform: uppercase; margin-bottom: 12px;">Document 04</span>
      <h3 style="color: #ffffff; font-size: 1.1rem; font-weight: 700; margin-bottom: 8px;">Pre-Transit Inspection Report</h3>
      <p style="color: #94a3b8; font-size: 0.88rem; line-height: 1.6; margin: 0;">Photographic handover sheet recording initial odometer readings, vehicle exterior condition, fuel levels, and personal asset declarations.</p>
    </div>
    </div>

  </div>
</section>

<!-- Section: Dedicated Jharkhand Regional Moving Network (Below Side) -->
  <section style="padding: 50px 0; background: linear-gradient(135deg, #0b1530 0%, #101c40 100%); border-top: 1.5px solid rgba(245, 158, 11, 0.3); border-bottom: 1.5px solid rgba(245, 158, 11, 0.3); color: #ffffff;">
    <div class="container" style="max-width: 1000px; margin: 0 auto; padding: 0 15px; text-align: center;">
      <span class="section-tag" style="background: rgba(245, 158, 11, 0.15); color: #f59e0b; border: 1px solid rgba(245, 158, 11, 0.4); padding: 4px 14px; border-radius: 20px; font-size: 0.8rem; font-weight: 700; text-transform: uppercase; display: inline-block; margin-bottom: 10px;">
        Statewide Relocation Network
      </span>
      <h2 style="font-size: 1.85rem; font-weight: 800; color: #ffffff; margin-bottom: 14px;">
        Seamless Packers and Movers Connectivity Across Jharkhand
      </h2>
      <p style="font-size: 1.05rem; color: #cbd5e1; line-height: 1.85; margin: 0 auto 10px auto; max-width: 920px;">
        As a certified relocation specialist across Jharkhand, Shree Ashirwad provides seamless residential and commercial moving solutions for clients transitioning between major regional centers. Operating as premier <a href="<?php echo SITE_URL; ?>" title="Packers and Movers" style="color: #f59e0b; text-decoration: underline; font-weight: 700;">packers and movers</a>, our fleet network guarantees on-time delivery.
      </p>
      <p style="font-size: 1.05rem; color: #cbd5e1; line-height: 1.85; margin: 0 auto; max-width: 920px;">
        We maintain direct logistics corridors connecting to our flagship operations at <a href="<?php echo SITE_URL; ?>packers-and-movers-in-ranchi" title="Packers and Movers in Ranchi" style="color: #f59e0b; text-decoration: underline; font-weight: 700;">packers and movers in Ranchi</a>, delivering synchronized transit tracking, verified handling teams, and prompt door-to-door delivery across every district.
      </p>
    </div>
  </section>

<section class="faq-section" style="padding: 50px 0; background: #0b132b; border-bottom: 1px solid rgba(255,255,255,0.08);">
  <div class="container" style="max-width: 1000px; margin: 0 auto; padding: 0 15px;">
    <h2 style="color: #ffffff; font-size: 1.7rem; font-weight: 800; margin-bottom: 25px; text-align: center;">
      Frequently Asked Questions &bull; Verify Credentials &amp; Company Licenses
    </h2>
    
      <div style="margin-bottom: 14px; background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 8px; padding: 16px 20px;">
        <h3 style="color: #f8fafc; font-size: 1.1rem; font-weight: 700; margin-bottom: 8px;">How are shifting charges calculated for Verify Credentials?</h3>
        <p style="color: #cbd5e1; line-height: 1.7; font-size: 0.95rem; margin: 0;">Pricing is calculated using transparent parameters: consignment volume, distance, packing material tier, and floor levels, guaranteed in an itemized written contract with zero hidden fees.</p>
      </div>
      <div style="margin-bottom: 14px; background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 8px; padding: 16px 20px;">
        <h3 style="color: #f8fafc; font-size: 1.1rem; font-weight: 700; margin-bottom: 8px;">Are packing materials and labor included in the moving quotation?</h3>
        <p style="color: #cbd5e1; line-height: 1.7; font-size: 0.95rem; margin: 0;">Yes, our comprehensive quotations include all premium multi-layer packaging materials, specialized labor, loading, secure transit, and doorstep unloading.</p>
      </div>
      <div style="margin-bottom: 14px; background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 8px; padding: 16px 20px;">
        <h3 style="color: #f8fafc; font-size: 1.1rem; font-weight: 700; margin-bottom: 8px;">Do you provide IBA-approved bills for official employee claims?</h3>
        <p style="color: #cbd5e1; line-height: 1.7; font-size: 0.95rem; margin: 0;">Yes, Shree Ashirwad provides authentic IBA-approved bills, GST tax invoices, and verified consignment notes accepted across PSUs, banks, and corporations.</p>
      </div>
      <div style="margin-bottom: 14px; background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 8px; padding: 16px 20px;">
        <h3 style="color: #f8fafc; font-size: 1.1rem; font-weight: 700; margin-bottom: 8px;">How far in advance should I book my relocation?</h3>
        <p style="color: #cbd5e1; line-height: 1.7; font-size: 0.95rem; margin: 0;">We recommend confirming your reservation 3 to 7 days in advance to secure preferred container trucks and specialized packing crews.</p>
      </div>
      <div style="margin-bottom: 14px; background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 8px; padding: 16px 20px;">
        <h3 style="color: #f8fafc; font-size: 1.1rem; font-weight: 700; margin-bottom: 8px;">What safety measures protect delicate glass, mirrors, and temple items?</h3>
        <p style="color: #cbd5e1; line-height: 1.7; font-size: 0.95rem; margin: 0;">Delicate and fragile items receive customized wooden crating, high-density foam padding, and multiple layers of 80-GSM bubble wrap with explicit fragile tagging.</p>
      </div>
      <div style="margin-bottom: 14px; background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08); border-radius: 8px; padding: 16px 20px;">
        <h3 style="color: #f8fafc; font-size: 1.1rem; font-weight: 700; margin-bottom: 8px;">Do your moving crews assist with unpacking and furniture arrangement?</h3>
        <p style="color: #cbd5e1; line-height: 1.7; font-size: 0.95rem; margin: 0;">Yes, our destination delivery teams unpack cartons, reassemble modular beds and tables, and place furniture into designated rooms as requested.</p>
      </div>
  </div>
  <script type="application/ld+json">
{"@context":"https://schema.org","@type":"FAQPage","mainEntity":[{"@type":"Question","name":"How are shifting charges calculated for Verify Credentials?","acceptedAnswer":{"@type":"Answer","text":"Pricing is calculated using transparent parameters: consignment volume, distance, packing material tier, and floor levels, guaranteed in an itemized written contract with zero hidden fees."}},{"@type":"Question","name":"Are packing materials and labor included in the moving quotation?","acceptedAnswer":{"@type":"Answer","text":"Yes, our comprehensive quotations include all premium multi-layer packaging materials, specialized labor, loading, secure transit, and doorstep unloading."}},{"@type":"Question","name":"Do you provide IBA-approved bills for official employee claims?","acceptedAnswer":{"@type":"Answer","text":"Yes, Shree Ashirwad provides authentic IBA-approved bills, GST tax invoices, and verified consignment notes accepted across PSUs, banks, and corporations."}},{"@type":"Question","name":"How far in advance should I book my relocation?","acceptedAnswer":{"@type":"Answer","text":"We recommend confirming your reservation 3 to 7 days in advance to secure preferred container trucks and specialized packing crews."}},{"@type":"Question","name":"What safety measures protect delicate glass, mirrors, and temple items?","acceptedAnswer":{"@type":"Answer","text":"Delicate and fragile items receive customized wooden crating, high-density foam padding, and multiple layers of 80-GSM bubble wrap with explicit fragile tagging."}},{"@type":"Question","name":"Do your moving crews assist with unpacking and furniture arrangement?","acceptedAnswer":{"@type":"Answer","text":"Yes, our destination delivery teams unpack cartons, reassemble modular beds and tables, and place furniture into designated rooms as requested."}}]}
  </script>
</section>
<!-- Section: Google Map & Operating Network Details -->
  <section style="padding: 60px 0; background: #070d1e; color: #ffffff; border-top: 1.5px solid rgba(245, 158, 11, 0.25); border-bottom: 1.5px solid rgba(245, 158, 11, 0.25);">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 15px;">
      <div style="text-align: center; margin-bottom: 35px;">
        <span class="section-tag" style="background: rgba(245, 158, 11, 0.15); color: #f59e0b; border: 1px solid rgba(245, 158, 11, 0.35); padding: 4px 14px; border-radius: 20px; font-size: 0.8rem; font-weight: 700; text-transform: uppercase; display: inline-block; margin-bottom: 8px;">
          <i class="fas fa-map-marked-alt" style="margin-right: 6px;"></i> Verified Service Network
        </span>
        <h2 style="font-size: 2.1rem; font-weight: 800; color: #ffffff; margin-top: 8px;">
          Find Our Operational Service Network in <span style="color: #f59e0b;">Verify Credentials</span>
        </h2>
        <p style="color: #cbd5e1; font-size: 0.95rem; max-width: 760px; margin: 10px auto 0 auto; line-height: 1.7;">
          Visit our nearest operational base or connect with our verified logistics coordinators for rapid vehicle inspection, quotation, and packing material dispatch.
        </p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 28px; align-items: center; background: #0f1a36; padding: 28px; border-radius: 16px; border: 1.5px solid rgba(245, 158, 11, 0.3); box-shadow: 0 10px 30px rgba(0,0,0,0.4);">
        <div>
          <span style="color: #f59e0b; font-size: 0.82rem; font-weight: 700; text-transform: uppercase;">Verify Credentials Relocation Office</span>
          <h3 style="color: #ffffff; font-size: 1.4rem; font-weight: 800; margin: 6px 0 12px 0;">Verify Credentials Moving Network &amp; Service Desk</h3>
          <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.7; margin-bottom: 16px;">
            Coordinated doorstep logistics and container dispatch servicing Verify Credentials and Pan-India corridors.
          </p>
          <div style="font-size: 0.9rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 20px;">
            <div><strong style="color: #ffffff;"><i class="fas fa-map-marker-alt" style="color: #f59e0b; margin-right: 6px;"></i> Address:</strong> <?php echo ADDRESS_RANCHI; ?> (Regional Dispatch Network: Verify Credentials)</div>
            <div><strong style="color: #ffffff;"><i class="fas fa-phone-alt" style="color: #f59e0b; margin-right: 6px;"></i> Helpline:</strong> <a href="tel:<?php echo SITE_PHONE_RAW; ?>" style="color: #38bdf8; text-decoration: none; font-weight: 600;"><?php echo SITE_PHONE; ?></a></div>
            <div><strong style="color: #ffffff;"><i class="fas fa-envelope" style="color: #f59e0b; margin-right: 6px;"></i> Email:</strong> <a href="mailto:<?php echo SITE_EMAIL; ?>" style="color: #38bdf8; text-decoration: none;"><?php echo SITE_EMAIL; ?></a></div>
            <div><strong style="color: #ffffff;"><i class="fas fa-clock" style="color: #f59e0b; margin-right: 6px;"></i> Hours:</strong> Mon - Sun: 7:00 AM – 10:00 PM (Emergency Dispatch 24/7)</div>
          </div>
          <div style="display: flex; gap: 10px; flex-wrap: wrap;">
            <a href="https://wa.me/918409531615?text=Hello+Shree+Ashirwad%2C+I+want+to+visit+your+office+or+book+shifting+for+Verify+Credentials." target="_blank" style="padding: 10px 18px; background: #10b981; color: #ffffff; border-radius: 8px; font-weight: 700; text-decoration: none; font-size: 0.85rem; display: inline-flex; align-items: center; gap: 6px;">
              <i class="fab fa-whatsapp"></i> WhatsApp Desk
            </a>
            <a href="tel:<?php echo SITE_PHONE_RAW; ?>" style="padding: 10px 18px; background: #e11d48; color: #ffffff; border-radius: 8px; font-weight: 700; text-decoration: none; font-size: 0.85rem; display: inline-flex; align-items: center; gap: 6px;">
              <i class="fas fa-phone-alt"></i> Call Direct
            </a>
          </div>
        </div>
        <div style="border-radius: 12px; overflow: hidden; border: 1.5px solid rgba(245, 158, 11, 0.35); height: 320px; box-shadow: 0 10px 25px rgba(0,0,0,0.5);">
          <iframe 
            src="https://maps.google.com/maps?q=Shree+Ashirwad+Packers+and+Movers+Verify+Credentials%2C+India&t=&z=13&ie=UTF8&iwloc=&output=embed" 
            width="100%" 
            height="100%" 
            style="border:0;" 
            allowfullscreen="" 
            loading="lazy" 
            referrerpolicy="no-referrer-when-downgrade" 
            title="Google Map of Shree Ashirwad Packers and Movers in Verify Credentials">
          </iframe>
        </div>
      </div>
    </div>
  </section>

<section style="padding: 30px 0; background: #070d19;">
  <div class="container" style="max-width: 1000px; margin: 0 auto; padding: 0 15px;">
    <!-- Google Business Profile Verified Customer Trust Section -->
<div class="gmb-trust-card" style="background: rgba(15, 23, 42, 0.85); border: 1.5px solid rgba(245, 158, 11, 0.35); border-radius: 14px; padding: 28px 24px; margin: 35px 0; color: #cbd5e1;">
  <div style="display: flex; flex-wrap: wrap; justify-content: space-between; align-items: center; border-bottom: 1px solid rgba(255,255,255,0.08); padding-bottom: 16px; margin-bottom: 22px; gap: 12px;">
    <div style="display: flex; align-items: center; gap: 12px;">
      <span style="background: #1e293b; color: #f59e0b; padding: 6px 14px; border-radius: 20px; font-size: 0.85rem; font-weight: 700; display: inline-flex; align-items: center; gap: 6px;">
        <i class="fab fa-google" style="color: #ea4335;"></i> Google Verified Reviews
      </span>
      <span style="font-size: 1.25rem; font-weight: 800; color: #ffffff;">4.9 <span style="color: #f59e0b;">&#9733;&#9733;&#9733;&#9733;&#9733;</span></span>
      <span style="color: #94a3b8; font-size: 0.85rem; font-weight: 500;">(500+ Customer Ratings)</span>
    </div>
    <a href="https://share.google/4FEjDv1dVCJV3O4ch" target="_blank" rel="noopener nofollow" style="color: #f59e0b; text-decoration: none; font-size: 0.88rem; font-weight: 600; display: inline-flex; align-items: center; gap: 5px;">
      View All Reviews on Google Maps &rarr;
    </a>
  </div>
  
  <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 18px;">
    <div style="background: rgba(0,0,0,0.3); border-radius: 12px; padding: 20px 18px; border-left: 4px solid #f59e0b; border-top: 1px solid rgba(255,255,255,0.06); border-right: 1px solid rgba(255,255,255,0.06); border-bottom: 1px solid rgba(255,255,255,0.06); box-shadow: 0 8px 20px rgba(0,0,0,0.25); display: flex; flex-direction: column; justify-content: space-between;">
      <div>
        <div style="display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 10px; gap: 10px;">
          <div style="display: flex; align-items: center; gap: 10px;">
            <div style="width: 36px; height: 36px; border-radius: 50%; background: #f59e0b22; color: #f59e0b; font-weight: 800; font-size: 0.85rem; display: flex; align-items: center; justify-content: center;">RS</div>
            <div>
              <strong style="color: #ffffff; font-size: 0.95rem; display: block; line-height: 1.2;">Rajesh Sharma</strong>
              <span style="color: #94a3b8; font-size: 0.76rem;">2 months ago</span>
            </div>
          </div>
          <span style="color: #f59e0b; font-size: 0.82rem; font-weight: 700; background: rgba(245, 158, 11, 0.12); padding: 3px 8px; border-radius: 12px; white-space: nowrap;">&#9733;&#9733;&#9733;&#9733;&#9733; Verified</span>
        </div>
        <div style="color: #60a5fa; font-size: 0.8rem; font-weight: 600; margin-bottom: 10px;"><i class="fas fa-check-circle" style="margin-right: 5px;"></i>Car &amp; Bike Relocation (Creta &amp; Enfield)</div>
        <p style="font-size: 0.88rem; line-height: 1.65; margin: 0; color: #cbd5e1; font-style: italic;">
          "Transported my Hyundai Creta and Royal Enfield from Ranchi to Pune in an enclosed container carrier with live GPS tracking. Both vehicles arrived in showroom condition without a single scratch. Provided genuine IBA-approved bill for corporate relocation reimbursement."
        </p>
      </div>
    </div>
    <div style="background: rgba(0,0,0,0.3); border-radius: 12px; padding: 20px 18px; border-left: 4px solid #10b981; border-top: 1px solid rgba(255,255,255,0.06); border-right: 1px solid rgba(255,255,255,0.06); border-bottom: 1px solid rgba(255,255,255,0.06); box-shadow: 0 8px 20px rgba(0,0,0,0.25); display: flex; flex-direction: column; justify-content: space-between;">
      <div>
        <div style="display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 10px; gap: 10px;">
          <div style="display: flex; align-items: center; gap: 10px;">
            <div style="width: 36px; height: 36px; border-radius: 50%; background: #10b98122; color: #10b981; font-weight: 800; font-size: 0.85rem; display: flex; align-items: center; justify-content: center;">AK</div>
            <div>
              <strong style="color: #ffffff; font-size: 0.95rem; display: block; line-height: 1.2;">Amit Kumar</strong>
              <span style="color: #94a3b8; font-size: 0.76rem;">1 month ago</span>
            </div>
          </div>
          <span style="color: #f59e0b; font-size: 0.82rem; font-weight: 700; background: rgba(245, 158, 11, 0.12); padding: 3px 8px; border-radius: 12px; white-space: nowrap;">&#9733;&#9733;&#9733;&#9733;&#9733; Verified</span>
        </div>
        <div style="color: #60a5fa; font-size: 0.8rem; font-weight: 600; margin-bottom: 10px;"><i class="fas fa-check-circle" style="margin-right: 5px;"></i>Household Shifting (3BHK)</div>
        <p style="font-size: 0.88rem; line-height: 1.65; margin: 0; color: #cbd5e1; font-style: italic;">
          "Shifted complete 3BHK household goods from Ranchi to Bangalore with Shree Ashirwad. Exceptional packing quality using double-layer bubble wrap and sturdy cartons for fragile crockery. Zero damage, on-time delivery, and polite loading staff. Highly recommended!"
        </p>
      </div>
    </div>
    <div style="background: rgba(0,0,0,0.3); border-radius: 12px; padding: 20px 18px; border-left: 4px solid #3b82f6; border-top: 1px solid rgba(255,255,255,0.06); border-right: 1px solid rgba(255,255,255,0.06); border-bottom: 1px solid rgba(255,255,255,0.06); box-shadow: 0 8px 20px rgba(0,0,0,0.25); display: flex; flex-direction: column; justify-content: space-between;">
      <div>
        <div style="display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 10px; gap: 10px;">
          <div style="display: flex; align-items: center; gap: 10px;">
            <div style="width: 36px; height: 36px; border-radius: 50%; background: #3b82f622; color: #3b82f6; font-weight: 800; font-size: 0.85rem; display: flex; align-items: center; justify-content: center;">VK</div>
            <div>
              <strong style="color: #ffffff; font-size: 0.95rem; display: block; line-height: 1.2;">Vikram Kumar Singh</strong>
              <span style="color: #94a3b8; font-size: 0.76rem;">3 weeks ago</span>
            </div>
          </div>
          <span style="color: #f59e0b; font-size: 0.82rem; font-weight: 700; background: rgba(245, 158, 11, 0.12); padding: 3px 8px; border-radius: 12px; white-space: nowrap;">&#9733;&#9733;&#9733;&#9733;&#9733; Verified</span>
        </div>
        <div style="color: #60a5fa; font-size: 0.8rem; font-weight: 600; margin-bottom: 10px;"><i class="fas fa-check-circle" style="margin-right: 5px;"></i>SUV &amp; Household Intercity Transit</div>
        <p style="font-size: 0.88rem; line-height: 1.65; margin: 0; color: #cbd5e1; font-style: italic;">
          "Transported my Creta SUV and Royal Enfield motorcycle from Ranchi to Bangalore along with household items. Received live GPS location updates throughout transit. Zero damage! Best choice among professional packers and movers."
        </p>
      </div>
    </div>
    <div style="background: rgba(0,0,0,0.3); border-radius: 12px; padding: 20px 18px; border-left: 4px solid #a855f7; border-top: 1px solid rgba(255,255,255,0.06); border-right: 1px solid rgba(255,255,255,0.06); border-bottom: 1px solid rgba(255,255,255,0.06); box-shadow: 0 8px 20px rgba(0,0,0,0.25); display: flex; flex-direction: column; justify-content: space-between;">
      <div>
        <div style="display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 10px; gap: 10px;">
          <div style="display: flex; align-items: center; gap: 10px;">
            <div style="width: 36px; height: 36px; border-radius: 50%; background: #a855f722; color: #a855f7; font-weight: 800; font-size: 0.85rem; display: flex; align-items: center; justify-content: center;">PV</div>
            <div>
              <strong style="color: #ffffff; font-size: 0.95rem; display: block; line-height: 1.2;">Pooja Verma</strong>
              <span style="color: #94a3b8; font-size: 0.76rem;">1 month ago</span>
            </div>
          </div>
          <span style="color: #f59e0b; font-size: 0.82rem; font-weight: 700; background: rgba(245, 158, 11, 0.12); padding: 3px 8px; border-radius: 12px; white-space: nowrap;">&#9733;&#9733;&#9733;&#9733;&#9733; Verified</span>
        </div>
        <div style="color: #60a5fa; font-size: 0.8rem; font-weight: 600; margin-bottom: 10px;"><i class="fas fa-check-circle" style="margin-right: 5px;"></i>Interstate Relocation to Kolkata</div>
        <p style="font-size: 0.88rem; line-height: 1.65; margin: 0; color: #cbd5e1; font-style: italic;">
          "Very honest pricing with no hidden charges. They provided a proper IBA-approved GST bill and clear transit insurance documentation for my company reimbursement. Outstanding service from reliable movers."
        </p>
      </div>
    </div>
    <div style="background: rgba(0,0,0,0.3); border-radius: 12px; padding: 20px 18px; border-left: 4px solid #06b6d4; border-top: 1px solid rgba(255,255,255,0.06); border-right: 1px solid rgba(255,255,255,0.06); border-bottom: 1px solid rgba(255,255,255,0.06); box-shadow: 0 8px 20px rgba(0,0,0,0.25); display: flex; flex-direction: column; justify-content: space-between;">
      <div>
        <div style="display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 10px; gap: 10px;">
          <div style="display: flex; align-items: center; gap: 10px;">
            <div style="width: 36px; height: 36px; border-radius: 50%; background: #06b6d422; color: #06b6d4; font-weight: 800; font-size: 0.85rem; display: flex; align-items: center; justify-content: center;">AR</div>
            <div>
              <strong style="color: #ffffff; font-size: 0.95rem; display: block; line-height: 1.2;">Ananya Roy</strong>
              <span style="color: #94a3b8; font-size: 0.76rem;">2 months ago</span>
            </div>
          </div>
          <span style="color: #f59e0b; font-size: 0.82rem; font-weight: 700; background: rgba(245, 158, 11, 0.12); padding: 3px 8px; border-radius: 12px; white-space: nowrap;">&#9733;&#9733;&#9733;&#9733;&#9733; Verified</span>
        </div>
        <div style="color: #60a5fa; font-size: 0.8rem; font-weight: 600; margin-bottom: 10px;"><i class="fas fa-check-circle" style="margin-right: 5px;"></i>IT Office &amp; Workstation Relocation</div>
        <p style="font-size: 0.88rem; line-height: 1.65; margin: 0; color: #cbd5e1; font-style: italic;">
          "Shree Ashirwad shifted our software company setup over a single Sunday. All IT servers, monitors, and ergonomic chairs were transported safely with anti-static packaging and zero operational downtime. Truly top-tier logistics team."
        </p>
      </div>
    </div>
    <div style="background: rgba(0,0,0,0.3); border-radius: 12px; padding: 20px 18px; border-left: 4px solid #ec4899; border-top: 1px solid rgba(255,255,255,0.06); border-right: 1px solid rgba(255,255,255,0.06); border-bottom: 1px solid rgba(255,255,255,0.06); box-shadow: 0 8px 20px rgba(0,0,0,0.25); display: flex; flex-direction: column; justify-content: space-between;">
      <div>
        <div style="display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 10px; gap: 10px;">
          <div style="display: flex; align-items: center; gap: 10px;">
            <div style="width: 36px; height: 36px; border-radius: 50%; background: #ec489922; color: #ec4899; font-weight: 800; font-size: 0.85rem; display: flex; align-items: center; justify-content: center;">PS</div>
            <div>
              <strong style="color: #ffffff; font-size: 0.95rem; display: block; line-height: 1.2;">Priya Singh</strong>
              <span style="color: #94a3b8; font-size: 0.76rem;">3 weeks ago</span>
            </div>
          </div>
          <span style="color: #f59e0b; font-size: 0.82rem; font-weight: 700; background: rgba(245, 158, 11, 0.12); padding: 3px 8px; border-radius: 12px; white-space: nowrap;">&#9733;&#9733;&#9733;&#9733;&#9733; Verified</span>
        </div>
        <div style="color: #60a5fa; font-size: 0.8rem; font-weight: 600; margin-bottom: 10px;"><i class="fas fa-check-circle" style="margin-right: 5px;"></i>Local House Relocation</div>
        <p style="font-size: 0.88rem; line-height: 1.65; margin: 0; color: #cbd5e1; font-style: italic;">
          "Very smooth shifting experience within Ranchi. The packing crew arrived exactly on time, dismantled the furniture carefully, and assembled everything at our new flat. Transparent pricing with no hidden moving day surcharges."
        </p>
      </div>
    </div>
    <div style="background: rgba(0,0,0,0.3); border-radius: 12px; padding: 20px 18px; border-left: 4px solid #f59e0b; border-top: 1px solid rgba(255,255,255,0.06); border-right: 1px solid rgba(255,255,255,0.06); border-bottom: 1px solid rgba(255,255,255,0.06); box-shadow: 0 8px 20px rgba(0,0,0,0.25); display: flex; flex-direction: column; justify-content: space-between;">
      <div>
        <div style="display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 10px; gap: 10px;">
          <div style="display: flex; align-items: center; gap: 10px;">
            <div style="width: 36px; height: 36px; border-radius: 50%; background: #f59e0b22; color: #f59e0b; font-weight: 800; font-size: 0.85rem; display: flex; align-items: center; justify-content: center;">ST</div>
            <div>
              <strong style="color: #ffffff; font-size: 0.95rem; display: block; line-height: 1.2;">Sanjay Tripathy</strong>
              <span style="color: #94a3b8; font-size: 0.76rem;">1 month ago</span>
            </div>
          </div>
          <span style="color: #f59e0b; font-size: 0.82rem; font-weight: 700; background: rgba(245, 158, 11, 0.12); padding: 3px 8px; border-radius: 12px; white-space: nowrap;">&#9733;&#9733;&#9733;&#9733;&#9733; Verified</span>
        </div>
        <div style="color: #60a5fa; font-size: 0.8rem; font-weight: 600; margin-bottom: 10px;"><i class="fas fa-check-circle" style="margin-right: 5px;"></i>Interstate Household Shifting</div>
        <p style="font-size: 0.88rem; line-height: 1.65; margin: 0; color: #cbd5e1; font-style: italic;">
          "Shifted household goods with Shree Ashirwad Packers and Movers. Their 7-layer protective packaging ensured total safety of electronics and crockery across long highway transit. Completely transparent billing."
        </p>
      </div>
    </div>
    <div style="background: rgba(0,0,0,0.3); border-radius: 12px; padding: 20px 18px; border-left: 4px solid #10b981; border-top: 1px solid rgba(255,255,255,0.06); border-right: 1px solid rgba(255,255,255,0.06); border-bottom: 1px solid rgba(255,255,255,0.06); box-shadow: 0 8px 20px rgba(0,0,0,0.25); display: flex; flex-direction: column; justify-content: space-between;">
      <div>
        <div style="display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 10px; gap: 10px;">
          <div style="display: flex; align-items: center; gap: 10px;">
            <div style="width: 36px; height: 36px; border-radius: 50%; background: #10b98122; color: #10b981; font-weight: 800; font-size: 0.85rem; display: flex; align-items: center; justify-content: center;">DM</div>
            <div>
              <strong style="color: #ffffff; font-size: 0.95rem; display: block; line-height: 1.2;">Deepak Malhotra</strong>
              <span style="color: #94a3b8; font-size: 0.76rem;">2 weeks ago</span>
            </div>
          </div>
          <span style="color: #f59e0b; font-size: 0.82rem; font-weight: 700; background: rgba(245, 158, 11, 0.12); padding: 3px 8px; border-radius: 12px; white-space: nowrap;">&#9733;&#9733;&#9733;&#9733;&#9733; Verified</span>
        </div>
        <div style="color: #60a5fa; font-size: 0.8rem; font-weight: 600; margin-bottom: 10px;"><i class="fas fa-check-circle" style="margin-right: 5px;"></i>Two-Wheeler Parcel Service</div>
        <p style="font-size: 0.88rem; line-height: 1.65; margin: 0; color: #cbd5e1; font-style: italic;">
          "Dispatched my Royal Enfield motorcycle safely. Enclosed container transport with wheel chocks and high-tensile ratchets ensured it reached with zero scratches or dents. Highly dependable service."
        </p>
      </div>
    </div>

  </div>
</div>
  </div>
</section>

<section class="internal-linking-mesh" style="padding: 45px 0; background: #0b132b; border-bottom: 1px solid rgba(255,255,255,0.08);">
  <div class="container" style="max-width: 1100px; margin: 0 auto; padding: 0 15px;">
    <h3 style="color: #ffffff; font-size: 1.4rem; font-weight: 700; margin-bottom: 18px;">
      <i class="fas fa-link" style="color: #f59e0b; margin-right: 8px;"></i> Related Shifting Routes &amp; Verified Moving Corridors
    </h3>
    <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(280px, 1fr)); gap: 14px;">
      <a href="https://shreeashirwadpackersandmovers.com/affordable-bike-transportation-in-ranchi" title="Affordable Bike Transportation In Ranchi" style="display: block; background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.1); border-radius: 8px; padding: 12px 16px; color: #cbd5e1; text-decoration: none; font-size: 0.9rem;"><strong style="color: #f59e0b;">&rarr;</strong> Affordable Bike Transportation In Ranchi</a>
      <a href="https://shreeashirwadpackersandmovers.com/affordable-car-transportation-in-ranchi" title="Affordable Car Transportation In Ranchi" style="display: block; background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.1); border-radius: 8px; padding: 12px 16px; color: #cbd5e1; text-decoration: none; font-size: 0.9rem;"><strong style="color: #f59e0b;">&rarr;</strong> Affordable Car Transportation In Ranchi</a>
      <a href="https://shreeashirwadpackersandmovers.com/agarwal-packers-car-transporting-charges-from-mumbai-to-bangalore" title="Agarwal Packers Car Transporting Charges From Mumbai To Bangalore" style="display: block; background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.1); border-radius: 8px; padding: 12px 16px; color: #cbd5e1; text-decoration: none; font-size: 0.9rem;"><strong style="color: #f59e0b;">&rarr;</strong> Agarwal Packers Car Transporting Charges From Mumbai To Bangalore</a>
      <a href="https://shreeashirwadpackersandmovers.com/ahmedabad-to-bangalore-packers-and-movers" title="Ahmedabad To Bangalore Packers And Movers" style="display: block; background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.1); border-radius: 8px; padding: 12px 16px; color: #cbd5e1; text-decoration: none; font-size: 0.9rem;"><strong style="color: #f59e0b;">&rarr;</strong> Ahmedabad To Bangalore Packers And Movers</a>
      <a href="https://shreeashirwadpackersandmovers.com/ahmedabad-to-delhi-packers-and-movers" title="Ahmedabad To Delhi Packers And Movers" style="display: block; background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.1); border-radius: 8px; padding: 12px 16px; color: #cbd5e1; text-decoration: none; font-size: 0.9rem;"><strong style="color: #f59e0b;">&rarr;</strong> Ahmedabad To Delhi Packers And Movers</a>
      <a href="https://shreeashirwadpackersandmovers.com/anupgadh-to-delhi-packers-and-movers" title="Anupgadh To Delhi Packers And Movers" style="display: block; background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.1); border-radius: 8px; padding: 12px 16px; color: #cbd5e1; text-decoration: none; font-size: 0.9rem;"><strong style="color: #f59e0b;">&rarr;</strong> Anupgadh To Delhi Packers And Movers</a>
    </div>
  </div>
</section>

<section class="related-relocation-searches" style="padding: 40px 0; background: #070d1e; border-top: 1px solid rgba(255,255,255,0.08); text-align: center;">
  <div class="container" style="max-width: 1000px; margin: 0 auto; padding: 0 15px;">
    <h3 style="color: #cbd5e1; font-size: 1.15rem; font-weight: 700; margin-bottom: 16px;">
      <i class="fas fa-tags" style="color: #f59e0b; margin-right: 8px;"></i> Related Relocation Searches &amp; Verified Moving Services
    </h3>
    <div style="display: flex; flex-wrap: wrap; gap: 10px; justify-content: center;">
      <span style="background: rgba(245, 158, 11, 0.08); border: 1px solid rgba(245, 158, 11, 0.28); color: #cbd5e1; padding: 7px 16px; border-radius: 20px; font-size: 0.85rem; font-weight: 600; display: inline-flex; align-items: center; gap: 6px;"><span style="color: #f59e0b;">&bull;</span> Verify Credentials</span>
      <span style="background: rgba(245, 158, 11, 0.08); border: 1px solid rgba(245, 158, 11, 0.28); color: #cbd5e1; padding: 7px 16px; border-radius: 20px; font-size: 0.85rem; font-weight: 600; display: inline-flex; align-items: center; gap: 6px;"><span style="color: #f59e0b;">&bull;</span> furniture courier india</span>
      <span style="background: rgba(245, 158, 11, 0.08); border: 1px solid rgba(245, 158, 11, 0.28); color: #cbd5e1; padding: 7px 16px; border-radius: 20px; font-size: 0.85rem; font-weight: 600; display: inline-flex; align-items: center; gap: 6px;"><span style="color: #f59e0b;">&bull;</span> house shifting services</span>
      <span style="background: rgba(245, 158, 11, 0.08); border: 1px solid rgba(245, 158, 11, 0.28); color: #cbd5e1; padding: 7px 16px; border-radius: 20px; font-size: 0.85rem; font-weight: 600; display: inline-flex; align-items: center; gap: 6px;"><span style="color: #f59e0b;">&bull;</span> vehicle for home shift</span>
      <span style="background: rgba(245, 158, 11, 0.08); border: 1px solid rgba(245, 158, 11, 0.28); color: #cbd5e1; padding: 7px 16px; border-radius: 20px; font-size: 0.85rem; font-weight: 600; display: inline-flex; align-items: center; gap: 6px;"><span style="color: #f59e0b;">&bull;</span> best house shifting service in india</span>
      <span style="background: rgba(245, 158, 11, 0.08); border: 1px solid rgba(245, 158, 11, 0.28); color: #cbd5e1; padding: 7px 16px; border-radius: 20px; font-size: 0.85rem; font-weight: 600; display: inline-flex; align-items: center; gap: 6px;"><span style="color: #f59e0b;">&bull;</span> packers and movers rateprice</span>
      <span style="background: rgba(245, 158, 11, 0.08); border: 1px solid rgba(245, 158, 11, 0.28); color: #cbd5e1; padding: 7px 16px; border-radius: 20px; font-size: 0.85rem; font-weight: 600; display: inline-flex; align-items: center; gap: 6px;"><span style="color: #f59e0b;">&bull;</span> packers and movers charges for 450 kms</span>
      <span style="background: rgba(245, 158, 11, 0.08); border: 1px solid rgba(245, 158, 11, 0.28); color: #cbd5e1; padding: 7px 16px; border-radius: 20px; font-size: 0.85rem; font-weight: 600; display: inline-flex; align-items: center; gap: 6px;"><span style="color: #f59e0b;">&bull;</span> tampa movers cost</span>
      <span style="background: rgba(245, 158, 11, 0.08); border: 1px solid rgba(245, 158, 11, 0.28); color: #cbd5e1; padding: 7px 16px; border-radius: 20px; font-size: 0.85rem; font-weight: 600; display: inline-flex; align-items: center; gap: 6px;"><span style="color: #f59e0b;">&bull;</span> iba approved packers and movers in karur</span>
      <span style="background: rgba(245, 158, 11, 0.08); border: 1px solid rgba(245, 158, 11, 0.28); color: #cbd5e1; padding: 7px 16px; border-radius: 20px; font-size: 0.85rem; font-weight: 600; display: inline-flex; align-items: center; gap: 6px;"><span style="color: #f59e0b;">&bull;</span> gst bill for packers and movers</span>
      <span style="background: rgba(245, 158, 11, 0.08); border: 1px solid rgba(245, 158, 11, 0.28); color: #cbd5e1; padding: 7px 16px; border-radius: 20px; font-size: 0.85rem; font-weight: 600; display: inline-flex; align-items: center; gap: 6px;"><span style="color: #f59e0b;">&bull;</span> iba approved packers and movers in greater nodia</span>
      <span style="background: rgba(245, 158, 11, 0.08); border: 1px solid rgba(245, 158, 11, 0.28); color: #cbd5e1; padding: 7px 16px; border-radius: 20px; font-size: 0.85rem; font-weight: 600; display: inline-flex; align-items: center; gap: 6px;"><span style="color: #f59e0b;">&bull;</span> real safe packers and movers ujjain ujjain madhya pradesh</span>
      <span style="background: rgba(245, 158, 11, 0.08); border: 1px solid rgba(245, 158, 11, 0.28); color: #cbd5e1; padding: 7px 16px; border-radius: 20px; font-size: 0.85rem; font-weight: 600; display: inline-flex; align-items: center; gap: 6px;"><span style="color: #f59e0b;">&bull;</span> safe reliable movers</span>
      <span style="background: rgba(245, 158, 11, 0.08); border: 1px solid rgba(245, 158, 11, 0.28); color: #cbd5e1; padding: 7px 16px; border-radius: 20px; font-size: 0.85rem; font-weight: 600; display: inline-flex; align-items: center; gap: 6px;"><span style="color: #f59e0b;">&bull;</span> veteran movers reviews</span>
      <span style="background: rgba(245, 158, 11, 0.08); border: 1px solid rgba(245, 158, 11, 0.28); color: #cbd5e1; padding: 7px 16px; border-radius: 20px; font-size: 0.85rem; font-weight: 600; display: inline-flex; align-items: center; gap: 6px;"><span style="color: #f59e0b;">&bull;</span> packers and movers not delivering goods</span>
    </div>
  </div>
</section>

</main>
<?php require_once __DIR__ . '/../includes/footer.php'; ?>
