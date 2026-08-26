<?php
$root_dir = dirname(__DIR__, 2);
require_once file_exists(__DIR__ . '/../../includes/config.php') ? __DIR__ . '/../../includes/config.php' : $root_dir . '/includes/config.php';

$page_title = "Office Shifting Services in India | Corporate Commercial Relocation Packers Movers";
$page_desc = "Zero-downtime office shifting and corporate relocation services across India by Shree Ashirwad Packers and Movers. Anti-static IT packing, modular workstation dismantling, weekend shifting, and IBA-approved GST invoicing.";
$page_keywords = "office shifting services, corporate relocation india, commercial packers movers, office moving company ranchi jamshedpur, IT hardware packing, server room relocation, weekend office shifting";
$canonical_url = SITE_URL . "services/office-shifting";

require_once file_exists(__DIR__ . '/../../includes/header.php') ? __DIR__ . '/../../includes/header.php' : $root_dir . '/includes/header.php';
?>

<main class="site-main" style="background: #070d19; color: #ffffff; min-height: 100vh; padding-bottom: 60px;">

  <!-- Visual Breadcrumb Navigation Bar -->
  <div class="breadcrumb-wrapper" style="padding: 15px 0; background: #0f172a; border-bottom: 1px solid rgba(255,255,255,0.08);">
    <div class="container" style="max-width: 1140px; margin: 0 auto; padding: 0 15px;">
      <div class="breadcrumb-list" style="font-size: 0.9rem; color: #94a3b8;">
        <a href="<?php echo SITE_URL; ?>" title="Home" style="color: #f59e0b; text-decoration: none;">Home</a>
        <span style="margin: 0 8px;">/</span>
        <a href="<?php echo SITE_URL; ?>services" title="Services" style="color: #f59e0b; text-decoration: none;">Services</a>
        <span style="margin: 0 8px;">/</span>
        <span style="color: #cbd5e1;">Office Shifting Services</span>
      </div>
    </div>
  </div>

  <!-- SECTION 1: Hero Section with Lead Form -->
  <section class="hero-section" style="background: linear-gradient(135deg, #0f172a 0%, #1e1b4b 100%); padding: 65px 0; border-bottom: 1px solid rgba(255,255,255,0.08);">
    <div class="container" style="max-width: 1140px; margin: 0 auto; padding: 0 15px;">
      <div style="display: grid; grid-template-columns: 1.2fr 0.8fr; gap: 40px; align-items: center;">
        
        <!-- Hero Left Content -->
        <div>
          <span style="background: rgba(245, 158, 11, 0.15); color: #f59e0b; border: 1.5px solid rgba(245, 158, 11, 0.4); padding: 6px 18px; border-radius: 30px; font-size: 0.82rem; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; display: inline-block; margin-bottom: 18px;">
            ZERO-DOWNTIME CORPORATE RELOCATION SPECIALISTS
          </span>
          <h1 style="font-size: 2.8rem; font-weight: 800; line-height: 1.2; color: #ffffff; margin-bottom: 20px;">
            Professional <span style="color: #f59e0b;">Office Shifting Services</span> Across India
          </h1>
          <p style="font-size: 1.1rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 25px;">
            Minimize operational downtime and safeguard corporate assets with <strong>Shree Ashirwad Packers and Movers</strong>. We specialize in seamless corporate office moves, IT hardware &amp; server room packing, modular workstation dismantling, confidential document archiving, and weekend/overnight execution for IT parks, corporate headquarters, bank branches, and commercial establishments.
          </p>

          <div style="display: flex; gap: 15px; flex-wrap: wrap; margin-bottom: 30px;">
            <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Official Corporate Line" style="padding: 14px 28px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; text-decoration: none; display: inline-flex; align-items: center; gap: 10px; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
              <i class="fas fa-phone-alt"></i> Corporate Call: <?php echo SITE_PHONE; ?>
            </a>
            <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20an%20office%20shifting%20quote." title="Chat on WhatsApp" target="_blank" style="padding: 14px 28px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; text-decoration: none; display: inline-flex; align-items: center; gap: 10px; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
              <i class="fab fa-whatsapp"></i> Chat on WhatsApp
            </a>
          </div>

          <div style="display: flex; gap: 20px; font-size: 0.88rem; color: #94a3b8; flex-wrap: wrap;">
            <span><strong style="color: #f59e0b;">Weekend / Overnight</strong> Execution</span>
            <span><strong style="color: #f59e0b;">Anti-Static</strong> IT Packing</span>
            <span><strong style="color: #f59e0b;">Full GST</strong> Tax Credit Bill</span>
          </div>
        </div>

        <!-- Hero Right Form -->
        <div style="background: rgba(15, 23, 42, 0.85); backdrop-filter: blur(12px); border: 1.5px solid rgba(245, 158, 11, 0.35); border-radius: 20px; padding: 32px 28px; box-shadow: 0 20px 45px rgba(0,0,0,0.5);">
          <h2 style="font-size: 1.45rem; color: #ffffff; margin-bottom: 8px; font-weight: 800; text-align: center;">Get Commercial Office Shifting Quote</h2>
          <p style="font-size: 0.85rem; color: #94a3b8; text-align: center; margin-bottom: 22px;">Receive customized corporate relocation proposal &amp; pricing</p>

          <form action="#" method="POST" onsubmit="sendHeroWhatsAppLead(event, this);">
            <div style="margin-bottom: 14px;">
              <input type="text" name="company_name" class="form-control" placeholder="Company / Business Name *" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.4); color: #fff; font-size: 0.95rem;">
            </div>
            <div style="margin-bottom: 14px;">
              <input type="tel" name="phone" class="form-control" placeholder="10-Digit Mobile / Official Phone *" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.4); color: #fff; font-size: 0.95rem;">
            </div>
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 12px; margin-bottom: 14px;">
              <input type="text" name="move_from" class="form-control" placeholder="Current Office Location *" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.4); color: #fff; font-size: 0.95rem;">
              <input type="text" name="move_to" class="form-control" placeholder="Destination Office City *" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.4); color: #fff; font-size: 0.95rem;">
            </div>
            <div style="margin-bottom: 16px;">
              <select name="office_size" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: #0f172a; color: #fff; font-size: 0.95rem;">
                <option value="" disabled selected>Select Office Seating Capacity *</option>
                <option value="Small Office (1 - 15 Workstations)">Small Office (1 - 15 Seats)</option>
                <option value="Medium Office (15 - 50 Workstations)">Medium Office (15 - 50 Seats)</option>
                <option value="Large Corporate (50 - 150 Workstations)">Large Corporate (50 - 150 Seats)</option>
                <option value="Enterprise / Server Room Relocation">Enterprise / Multi-Floor Headquarters</option>
              </select>
            </div>
            <button type="submit" style="width: 100%; padding: 14px; background: linear-gradient(135deg, #d32f2f 0%, #f59e0b 100%); color: #ffffff; border: none; border-radius: 50px; font-weight: 800; font-size: 1rem; cursor: pointer; transition: all 0.3s ease;">
              Get Corporate Proposal &rarr;
            </button>
          </form>
        </div>

      </div>
    </div>
  </section>

  <!-- SECTION 2: Zero-Downtime Commitment & Philosophy -->
  <section style="padding: 70px 0; background: #070d19;">
    <div class="container" style="max-width: 1140px; margin: 0 auto; padding: 0 15px;">
      
      <div style="max-width: 900px; margin: 0 auto; text-align: center; margin-bottom: 50px;">
        <span style="color: #f59e0b; font-size: 0.85rem; font-weight: 700; text-transform: uppercase; letter-spacing: 1.5px;">COMMERCIAL EXCELLENCE</span>
        <h2 style="font-size: 2.3rem; font-weight: 800; color: #ffffff; margin-top: 10px;">Zero-Downtime Guarantee for Business Continuity</h2>
        <p style="color: #cbd5e1; font-size: 1.05rem; line-height: 1.8; margin-top: 15px;">
          For modern businesses, every hour of operational downtime means lost revenue, disrupted client SLAs, and administrative chaos. Shree Ashirwad Packers and Movers executes office shifting during weekends (Friday evening to Sunday night) or non-working night hours so your employees step into a fully functional workspace on Monday morning.
        </p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 30px;">
        
        <div style="background: #0f172a; border: 1px solid rgba(255,255,255,0.08); border-radius: 18px; padding: 32px 26px;">
          <div style="width: 50px; height: 50px; background: rgba(245, 158, 11, 0.15); border-radius: 12px; display: flex; align-items: center; justify-content: center; color: #f59e0b; font-size: 1.3rem; margin-bottom: 20px;">
            <i class="fas fa-laptop-code"></i>
          </div>
          <h3 style="font-size: 1.3rem; font-weight: 700; color: #ffffff; margin-bottom: 12px;">Anti-Static IT Hardware Packing</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.75;">
            Desktops, monitors, servers, switches, and UPS systems are wrapped in specialized anti-static bubble wrap and packed inside cushioned plastic crates with numbered cable coding for instant plug-and-play setup.
          </p>
        </div>

        <div style="background: #0f172a; border: 1px solid rgba(255,255,255,0.08); border-radius: 18px; padding: 32px 26px;">
          <div style="width: 50px; height: 50px; background: rgba(245, 158, 11, 0.15); border-radius: 12px; display: flex; align-items: center; justify-content: center; color: #f59e0b; font-size: 1.3rem; margin-bottom: 20px;">
            <i class="fas fa-cubes"></i>
          </div>
          <h3 style="font-size: 1.3rem; font-weight: 700; color: #ffffff; margin-bottom: 12px;">Modular Furniture Dismantling</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.75;">
            Our trained carpentry team systematically disassembles workstation cubicles, glass partition walls, executive conference tables, and reception desks, re-erecting them at the new facility according to your CAD floorplan.
          </p>
        </div>

        <div style="background: #0f172a; border: 1px solid rgba(255,255,255,0.08); border-radius: 18px; padding: 32px 26px;">
          <div style="width: 50px; height: 50px; background: rgba(245, 158, 11, 0.15); border-radius: 12px; display: flex; align-items: center; justify-content: center; color: #f59e0b; font-size: 1.3rem; margin-bottom: 20px;">
            <i class="fas fa-lock"></i>
          </div>
          <h3 style="font-size: 1.3rem; font-weight: 700; color: #ffffff; margin-bottom: 12px;">Confidential Document Archiving</h3>
          <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.75;">
            Financial records, HR files, and legal documents are stored in numbered security boxes sealed with tamper-evident serial security locks under strict NDA protocols.
          </p>
        </div>

      </div>

    </div>
  </section>

  <!-- SECTION 3: Office Shifting Rate Matrix -->
  <section style="padding: 70px 0; background: #0f172a; border-top: 1px solid rgba(255,255,255,0.08); border-bottom: 1px solid rgba(255,255,255,0.08);">
    <div class="container" style="max-width: 1140px; margin: 0 auto; padding: 0 15px;">
      
      <div style="text-align: center; margin-bottom: 40px;">
        <span style="color: #f59e0b; font-size: 0.85rem; font-weight: 700; text-transform: uppercase; letter-spacing: 1.5px;">ESTIMATED CORPORATE RATES</span>
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin-top: 8px;">Commercial Office Shifting Cost Estimation</h2>
      </div>

      <div style="overflow-x: auto; margin-bottom: 25px;">
        <table style="width: 100%; border-collapse: collapse; text-align: left; background: #070d19; border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 12px; overflow: hidden;">
          <thead>
            <tr style="background: linear-gradient(135deg, #1e1b4b 0%, #0f172a 100%); color: #f59e0b;">
              <th style="padding: 16px 20px; font-weight: 700;">Office Capacity</th>
              <th style="padding: 16px 20px; font-weight: 700;">Local City Relocation</th>
              <th style="padding: 16px 20px; font-weight: 700;">Intercity Office Moving</th>
              <th style="padding: 16px 20px; font-weight: 700;">Execution Timeframe</th>
            </tr>
          </thead>
          <tbody style="color: #cbd5e1; font-size: 0.92rem; line-height: 1.6;">
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.08);">
              <td style="padding: 16px 20px; font-weight: 700; color: #ffffff;">Small Office (5 - 15 Seats)</td>
              <td style="padding: 16px 20px;">₹12,000 - ₹22,000</td>
              <td style="padding: 16px 20px;">₹28,000 - ₹45,000</td>
              <td style="padding: 16px 20px;">Single Night / 8 Hours</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.08); background: rgba(255,255,255,0.02);">
              <td style="padding: 16px 20px; font-weight: 700; color: #ffffff;">Medium Office (15 - 50 Seats)</td>
              <td style="padding: 16px 20px;">₹25,000 - ₹55,000</td>
              <td style="padding: 16px 20px;">₹60,000 - ₹1,10,000</td>
              <td style="padding: 16px 20px;">1 Weekend (Sat - Sun)</td>
            </tr>
            <tr>
              <td style="padding: 16px 20px; font-weight: 700; color: #ffffff;">Large Corporate (50 - 200+ Seats)</td>
              <td style="padding: 16px 20px;">Custom On-Site Survey</td>
              <td style="padding: 16px 20px;">Custom On-Site Survey</td>
              <td style="padding: 16px 20px;">Phased Batch Moving</td>
            </tr>
          </tbody>
        </table>
      </div>

    </div>
  </section>

  <!-- SECTION 4: Corporate FAQ -->
  <section style="padding: 70px 0; background: #070d19;">
    <div class="container" style="max-width: 900px; margin: 0 auto; padding: 0 15px;">
      
      <div style="text-align: center; margin-bottom: 45px;">
        <span style="color: #f59e0b; font-size: 0.85rem; font-weight: 700; text-transform: uppercase; letter-spacing: 1.5px;">CORPORATE FAQS</span>
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin-top: 8px;">Frequently Asked Questions on Office Relocation</h2>
      </div>

      <div style="display: flex; flex-direction: column; gap: 18px;">
        <div style="background: #0f172a; border: 1px solid rgba(255,255,255,0.08); border-radius: 12px; padding: 22px 25px;">
          <h4 style="font-size: 1.1rem; font-weight: 700; color: #f59e0b; margin-bottom: 8px;">Q1: Can office shifting be completed over Saturday and Sunday?</h4>
          <p style="color: #cbd5e1; font-size: 0.92rem; line-height: 1.7;">
            Yes! Over 80% of our corporate relocations are scheduled between Friday 6:00 PM and Sunday midnight. Our teams work round-the-clock so your business reopens smoothly on Monday morning with zero work hour loss.
          </p>
        </div>

        <div style="background: #0f172a; border: 1px solid rgba(255,255,255,0.08); border-radius: 12px; padding: 22px 25px;">
          <h4 style="font-size: 1.1rem; font-weight: 700; color: #f59e0b; margin-bottom: 8px;">Q2: Do you provide GST Tax Invoice for claiming Input Tax Credit (ITC)?</h4>
          <p style="color: #cbd5e1; font-size: 0.92rem; line-height: 1.7;">
            Absolutely. We issue 100% compliant Tax Invoices with your company’s GSTIN number, allowing your finance department to claim 18% Input Tax Credit (ITC) as per Indian tax regulations.
          </p>
        </div>
      </div>

    </div>
  </section>

  <!-- SECTION 5: Call to Action Banner -->
  <section style="padding: 60px 0; background: linear-gradient(135deg, #1e1b4b 0%, #0f172a 100%); text-align: center;">
    <div class="container" style="max-width: 900px; margin: 0 auto; padding: 0 15px;">
      <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin-bottom: 14px;">Schedule Your Free Corporate Office Moving Survey</h2>
      <p style="color: #cbd5e1; font-size: 1.05rem; margin-bottom: 28px; line-height: 1.7;">
        Connect with our Corporate Relocation Managers for tailored proposals and zero-downtime execution.
      </p>
      <div style="display: flex; gap: 15px; justify-content: center; flex-wrap: wrap;">
        <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Corporate Desk" style="padding: 15px 34px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 800; font-size: 1.05rem; text-decoration: none; display: inline-flex; align-items: center; gap: 10px; box-shadow: 0 6px 20px rgba(225, 29, 72, 0.4);">
          <i class="fas fa-phone-alt"></i> Corporate Line: <?php echo SITE_PHONE; ?>
        </a>
        <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20to%20schedule%20an%20office%20shifting%20survey." title="WhatsApp Booking" target="_blank" style="padding: 15px 34px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 800; font-size: 1.05rem; text-decoration: none; display: inline-flex; align-items: center; gap: 10px; box-shadow: 0 6px 20px rgba(16, 185, 129, 0.4);">
          <i class="fab fa-whatsapp"></i> Chat on WhatsApp
        </a>
      </div>
    </div>
  </section>

</main>

<?php require_once file_exists(__DIR__ . '/../../includes/footer.php') ? __DIR__ . '/../../includes/footer.php' : $root_dir . '/includes/footer.php'; ?>
