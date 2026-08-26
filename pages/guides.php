<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "Moving Guides & Resources - Shree Ashirwad Packers and Movers";
$page_desc = "Expert moving guides, home shifting checklists, packers and movers bill reimbursement claim tips, and vehicle transport guide by Shree Ashirwad Packers.";
$page_keywords = "moving guides, shifting checklist, packers movers bill claim, relocation tips, vehicle transport guide";
$canonical_url = SITE_URL . "guides";

require_once __DIR__ . '/../includes/header.php';
?>

<main class="site-main" style="background: #070d19; color: #ffffff; min-height: 100vh; padding-bottom: 60px;">

  <!-- Visual Breadcrumb Navigation Bar -->
  <div class="breadcrumb-wrapper" style="padding: 15px 0; background: #0f172a; border-bottom: 1px solid rgba(255,255,255,0.08);">
    <div class="container" style="max-width: 1140px; margin: 0 auto; padding: 0 15px;">
      <div class="breadcrumb-list" style="font-size: 0.9rem; color: #94a3b8;">
        <a href="<?php echo SITE_URL; ?>" title="Home" style="color: #f59e0b; text-decoration: none;">Home</a>
        <span style="margin: 0 8px;">/</span>
        <span style="color: #cbd5e1;">Moving Guides &amp; Resources</span>
      </div>
    </div>
  </div>

  <!-- Hero Header -->
  <section style="background: linear-gradient(135deg, #0f172a 0%, #1e1b4b 100%); padding: 60px 0 40px 0; text-align: center; border-bottom: 1px solid rgba(255,255,255,0.08);">
    <div class="container" style="max-width: 1000px; margin: 0 auto; padding: 0 15px;">
      <span style="background: rgba(245, 158, 11, 0.1); color: #f59e0b; border: 1.5px solid rgba(245, 158, 11, 0.3); padding: 6px 18px; border-radius: 30px; font-size: 0.8rem; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; display: inline-block; margin-bottom: 16px;">
        EXPERT KNOWLEDGE &amp; CHECKLISTS
      </span>
      <h1 style="font-size: 2.6rem; font-weight: 800; color: #ffffff; line-height: 1.25; margin-bottom: 16px;">
        Essential Relocation &amp; Shifting Guides
      </h1>
      <p style="font-size: 1.08rem; color: #cbd5e1; max-width: 800px; margin: 0 auto; line-height: 1.7;">
        Everything you need for a smooth, stress-free move. Read our step-by-step home shifting checklists, official IBA bill claim guidelines, and vehicle packing tips.
      </p>
    </div>
  </section>

  <!-- Guides Grid -->
  <section style="padding: 60px 0;">
    <div class="container" style="max-width: 1140px; margin: 0 auto; padding: 0 15px;">
      
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 28px;">
        
        <!-- Guide 1: Home Shifting Checklist -->
        <div style="background: #0f172a; border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 18px; padding: 32px 26px; box-shadow: 0 10px 30px rgba(0,0,0,0.3); display: flex; flex-direction: column; justify-content: space-between;">
          <div>
            <div style="width: 54px; height: 54px; background: rgba(245, 158, 11, 0.15); border-radius: 14px; display: flex; align-items: center; justify-content: center; color: #f59e0b; font-size: 1.4rem; margin-bottom: 20px;">
              <i class="fas fa-list-check"></i>
            </div>
            <h3 style="font-size: 1.4rem; font-weight: 700; color: #ffffff; margin-bottom: 12px;">Ultimate Home Shifting Checklist</h3>
            <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.7; margin-bottom: 20px;">
              A day-by-day pre-move checklist covering room preparation, utility disconnections, inventory tracking, and packing timelines.
            </p>
          </div>
          <a href="<?php echo SITE_URL; ?>guides/shifting-checklist" title="Ultimate Home Shifting Checklist" style="display: inline-flex; align-items: center; gap: 8px; color: #f59e0b; font-weight: 700; font-size: 0.95rem; text-decoration: none;">
            Read Shifting Checklist <i class="fas fa-arrow-right"></i>
          </a>
        </div>

        <!-- Guide 2: Bill Claim Guide -->
        <div style="background: #0f172a; border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 18px; padding: 32px 26px; box-shadow: 0 10px 30px rgba(0,0,0,0.3); display: flex; flex-direction: column; justify-content: space-between;">
          <div>
            <div style="width: 54px; height: 54px; background: rgba(245, 158, 11, 0.15); border-radius: 14px; display: flex; align-items: center; justify-content: center; color: #f59e0b; font-size: 1.4rem; margin-bottom: 20px;">
              <i class="fas fa-file-invoice-dollar"></i>
            </div>
            <h3 style="font-size: 1.4rem; font-weight: 700; color: #ffffff; margin-bottom: 12px;">Packers &amp; Movers Bill Claim Guide</h3>
            <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.7; margin-bottom: 20px;">
              Comprehensive guide for defense personnel, PSU bank employees, and government staff on claiming 100% shifting allowances using IBA-approved bills.
            </p>
          </div>
          <a href="<?php echo SITE_URL; ?>guides/packers-movers-bill-reimbursement-claim" title="Bill Reimbursement Guide" style="display: inline-flex; align-items: center; gap: 8px; color: #f59e0b; font-weight: 700; font-size: 0.95rem; text-decoration: none;">
            Read Bill Claim Guide <i class="fas fa-arrow-right"></i>
          </a>
        </div>

      </div>

    </div>
  </section>

</main>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
