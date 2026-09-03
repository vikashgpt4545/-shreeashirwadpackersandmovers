<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "Best Payment Terms & Advance Options for Vehicle Transport Services";
$page_desc = "Master guide to safe payment splits, booking advances, IBA GST billing & avoiding hidden charges in vehicle transport across India by Shree Ashirwad Packers and Movers. Learn 20-80 vs 10-90 payment models, transit insurance billing & payment security. Call 8409531615.";
$page_keywords = "best payment terms and advance options for vehicle transport services, vehicle transport payment schedule, car transport advance booking amount, IBA approved vehicle billing, hidden charges vehicle shipping, car service companies, automobile carriers, interstate vehicle transfer, transport charges extra, railway transport charges";
$canonical_url = "https://shreeashirwadpackersandmovers.com/pages/best-payment-terms-and-advance-options-for-vehicle-transport-services.php";

$faq_list = [
    ['q' => 'What is the standard advance booking payment percentage for vehicle transport in India?', 'a' => 'Industry-standard payment terms for reliable vehicle shipping mandate an advance booking token of 10% to 20% at the time of pickup reservation. The remaining 80% to 90% balance is payable upon car carrier loading/LR dispatch or doorstep vehicle delivery.'],
    ['q' => 'Should I ever pay 100% upfront payment before my car or bike is picked up?', 'a' => 'No. Paying 100% upfront before vehicle dispatch is a major red flag for fraudulent transport brokers. Reputable IBA-approved carriers like Shree Ashirwad Packers never demand 100% payment prior to vehicle pickup and consignment note generation.'],
    ['q' => 'How can I avoid hidden charges in vehicle transport billing?', 'a' => 'Ensure your quotation clearly itemizes base freight rate, 18% GST (SAC code 996511), transit risk insurance premium (0.3% of vehicle value), and doorstep loading/unloading fees. Demand an all-inclusive written estimate on company letterhead before paying any advance token.'],
    ['q' => 'Are advance booking tokens refundable if I cancel my vehicle shipping schedule?', 'a' => 'Yes, Shree Ashirwad Packers allows 100% booking advance refunds if cancellation is requested at least 24 hours prior to scheduled carrier dispatch.'],
    ['q' => 'What payment methods are accepted for vehicle transport billing?', 'a' => 'We accept UPI (Google Pay, PhonePe, Paytm), IMPS/NEFT bank transfers, Credit/Debit cards, official corporate purchase orders, and cash receipts against authentic GST tax invoices.'],
    ['q' => 'Do payment terms differ for Defence, Police, and Govt employee relocations?', 'a' => 'Yes. For government, bank, and military personnel, we offer credit billing options against official Movement Orders, issuing full IBA-compliant GST bills, Consignment LR receipts, and pre-loading inspection certificates for seamless claim reimbursement.'],
    ['q' => 'Is transit insurance billed separately or included in the total quote?', 'a' => 'Transit insurance (covering all-risk marine & road hazard damage) is calculated at 0.3% of the declared vehicle value and transparently listed as a separate line item on your GST invoice.'],
    ['q' => 'What is a Lorry Receipt (LR Copy) and why is it essential for final payment release?', 'a' => 'A Lorry Receipt (LR) is the legal freight consignment document specifying the truck driver details, vehicle chassis number, origin/destination, and payment balance terms. Final balance is typically settled upon receiving your trackable LR copy or delivery.'],
    ['q' => 'Can I pay the remaining balance after inspecting my car at delivery?', 'a' => 'Yes! Under our customer-centric payment terms, you conduct a joint physical inspection of your car against the origin Vehicle Condition Audit Form at your destination doorstep before settling the final balance.'],
    ['q' => 'How do I request an official payment structure quote for my vehicle move?', 'a' => 'Call +91 8409531615 or submit your vehicle details via WhatsApp to receive an itemized, transparent pricing breakdown with zero hidden charges.']
];

require_once __DIR__ . '/../includes/header.php';
?>

<main class="site-main">

  <!-- 1. Visual Breadcrumb Navigation Bar -->
  <div class="breadcrumb-wrapper">
    <div class="container">
      <div class="breadcrumb-list">
        <span class="breadcrumb-item"><a href="<?php echo SITE_URL; ?>" title="Home">Home</a></span>
        <span class="breadcrumb-separator">/</span>
        <span class="breadcrumb-item active">Best Payment Terms &amp; Advance Options</span>
      </div>
    </div>
  </div>

  <!-- 2. Hero Section & Instant WhatsApp Lead Form -->
  <section class="hero-section" style="background: linear-gradient(135deg, #0b132b 0%, #1c2541 100%); padding: 60px 0; color: #ffffff;">
    <div class="container">
      <div class="hero-grid" style="display: grid; grid-template-columns: 1.2fr 0.8fr; gap: 40px; align-items: center;">
        
        <!-- Hero Text Column -->
        <div class="hero-text">
          <span class="section-tag" style="background: rgba(245, 158, 11, 0.15); color: #f59e0b; border: 1px solid rgba(245, 158, 11, 0.4); padding: 6px 16px; border-radius: 20px; font-size: 0.85rem; font-weight: 700; text-transform: uppercase; display: inline-block; margin-bottom: 15px;">
            TRANSPARENT BILLING &amp; PAYMENT SECURITY MASTER GUIDE
          </span>
          <h1 style="font-size: 2.6rem; font-weight: 800; line-height: 1.2; margin-bottom: 20px; color: #ffffff;">
            Best Payment Terms &amp; <span style="color: #f59e0b;">Advance Options in Vehicle Transport</span>
          </h1>
          <p style="font-size: 1.05rem; color: #cbd5e1; line-height: 1.7; margin-bottom: 25px;">
            Navigating vehicle transport payments in India requires clarity and consumer protection. Shree Ashirwad Packers and Movers mandates transparent 10-90 / 20-80 payment splits, zero hidden fee guarantees, 100% IBA-compliant GST billing, and post-delivery inspection balance settlements for cars &amp; bikes nationwide.
          </p>

          <div style="display: flex; gap: 15px; flex-wrap: wrap; margin-bottom: 30px;">
            <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Now" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
              <i class="fas fa-phone-alt" style="margin-right: 8px;"></i> Call Now: <?php echo SITE_PHONE; ?>
            </a>
            <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20information%20on%20vehicle%20transport%20payment%20terms." title="Chat on WhatsApp" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
              <i class="fab fa-whatsapp" style="margin-right: 8px;"></i> Chat on WhatsApp
            </a>
          </div>

          <div style="display: flex; gap: 20px; font-size: 0.9rem; color: #94a3b8;">
            <span><strong style="color: #f59e0b;">10-90%</strong> Payment Split</span>
            <span><strong style="color: #f59e0b;">0%</strong> Hidden Surcharges</span>
            <span><strong style="color: #f59e0b;">IBA Approved</strong> GST Bills</span>
          </div>
        </div>

        <!-- Hero Lead Form Column -->
        <div class="hero-form-card" style="background: rgba(255, 255, 255, 0.05); backdrop-filter: blur(10px); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 16px; padding: 30px; box-shadow: 0 15px 35px rgba(0,0,0,0.4);">
          <h2 style="font-size: 1.4rem; color: #ffffff; margin-bottom: 8px; font-weight: 700; text-align: center;">Get Transparent Billing Quote</h2>
          <p style="font-size: 0.85rem; color: #94a3b8; text-align: center; margin-bottom: 20px;">Receive itemized cost breakdown on WhatsApp in 2 minutes</p>

          <form action="#" method="POST" onsubmit="sendHeroWhatsAppLead(event, this);">
            <div style="margin-bottom: 14px;">
              <input type="text" name="name" class="form-control" placeholder="Your Full Name" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="margin-bottom: 14px;">
              <input type="tel" name="phone" class="form-control" placeholder="10-Digit Phone / WhatsApp Number" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 10px; margin-bottom: 14px;">
              <input type="text" name="move_from" class="form-control" placeholder="Pickup City" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
              <input type="text" name="move_to" class="form-control" placeholder="Destination City" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="margin-bottom: 16px;">
              <textarea name="message" class="form-control" rows="2" placeholder="Vehicle Type & Model (e.g. Car / Bike model)" style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;"></textarea>
            </div>
            <button type="submit" class="btn btn-primary" style="width: 100%; padding: 14px; font-weight: 700; font-size: 1rem; border-radius: 8px;">
              Get Quote on WhatsApp
            </button>
          </form>
        </div>

      </div>
    </div>
  </section>

  <!-- 3. Key Stats Counter Bar -->
  <section class="stats-section" style="padding: 45px 0; background: #070d1e; border-bottom: 1px solid rgba(245, 158, 11, 0.2);">
    <div class="container">
      <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 20px; text-align: center;">
        <div style="padding: 20px; background: rgba(23, 42, 84, 0.5); border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">10% - 20%</div>
          <div style="font-size: 0.9rem; color: #cbd5e1; margin-top: 5px;">Fair Booking Advance Only</div>
        </div>
        <div style="padding: 20px; background: rgba(23, 42, 84, 0.5); border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">Zero</div>
          <div style="font-size: 0.9rem; color: #cbd5e1; margin-top: 5px;">Hidden Fuel or Toll Surcharges</div>
        </div>
        <div style="padding: 20px; background: rgba(23, 42, 84, 0.5); border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">100%</div>
          <div style="font-size: 0.9rem; color: #cbd5e1; margin-top: 5px;">Refundable Prior to Dispatch</div>
        </div>
        <div style="padding: 20px; background: rgba(23, 42, 84, 0.5); border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">IBA GST</div>
          <div style="font-size: 0.9rem; color: #cbd5e1; margin-top: 5px;">Official Tax Invoice Set</div>
        </div>
      </div>
    </div>
  </section>

  <!-- 4. 6-Card Feature Grid (3x2 Layout) -->
  <section style="padding: 65px 0; background: #0b132b; color: #e2e8f0; line-height: 1.8;">
    <div class="container">
      
      <div style="max-width: 950px; margin: 0 auto;">
        <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Payment Security Architecture</span>
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin: 10px 0 20px 0;">
          Pillars of <span style="color: #f59e0b;">Transparent Vehicle Transport Billing</span>
        </h2>

        <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px; margin: 30px 0;">
          
          <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px;">
            <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;"><i class="fas fa-hand-holding-usd"></i></div>
            <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">Low Booking Token</h3>
            <p style="font-size: 0.9rem; color: #cbd5e1; margin: 0;">
              Reserve your car carrier container slot with just a nominal 10% to 20% advance token.
            </p>
          </div>

          <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px;">
            <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;"><i class="fas fa-file-invoice-dollar"></i></div>
            <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">All-Inclusive Quotes</h3>
            <p style="font-size: 0.9rem; color: #cbd5e1; margin: 0;">
              Written price agreement listing base freight, 18% GST, insurance, loading, &amp; unloading costs.
            </p>
          </div>

          <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px;">
            <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;"><i class="fas fa-stamp"></i></div>
            <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">IBA Approved Invoicing</h3>
            <p style="font-size: 0.9rem; color: #cbd5e1; margin: 0;">
              100% authentic IBA-stamped bills accepted for Defence, Police, Govt, Bank &amp; corporate claims.
            </p>
          </div>

          <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px;">
            <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;"><i class="fas fa-shield-alt"></i></div>
            <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">Transparent Insurance</h3>
            <p style="font-size: 0.9rem; color: #cbd5e1; margin: 0;">
              Declared vehicle value transit insurance premium calculated at an exact 0.3% rate with policy slip.
            </p>
          </div>

          <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px;">
            <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;"><i class="fas fa-search-dollar"></i></div>
            <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">Post-Inspection Balance</h3>
            <p style="font-size: 0.9rem; color: #cbd5e1; margin: 0;">
              Pay the remaining balance after joint physical inspection of your car at destination delivery.
            </p>
          </div>

          <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px;">
            <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;"><i class="fas fa-undo-alt"></i></div>
            <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">100% Refund Guarantee</h3>
            <p style="font-size: 0.9rem; color: #cbd5e1; margin: 0;">
              Full advance refund if cancellation is initiated 24 hours prior to scheduled carrier dispatch.
            </p>
          </div>

        </div>

      </div>

    </div>
  </section>

  <!-- 5. Specialized Payment Models Comparison -->
  <section style="padding: 60px 0; background: #070d1e; color: #ffffff;">
    <div class="container" style="max-width: 950px;">
      
      <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Payment Models Comparison</span>
      <h2 style="font-size: 2.1rem; font-weight: 800; color: #ffffff; margin: 10px 0 25px 0;">
        Comparing Vehicle Transport Payment Schedules
      </h2>

      <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px;">
        <div style="background: #101c40; padding: 22px; border-radius: 12px; border: 1.5px solid #10b981;">
          <span style="background: rgba(16, 185, 129, 0.2); color: #10b981; font-size: 0.75rem; font-weight: 700; padding: 4px 10px; border-radius: 12px; text-transform: uppercase;">RECOMMENDED</span>
          <h4 style="color: #ffffff; font-size: 1.15rem; margin: 10px 0 8px 0;">20% Advance / 80% On Delivery</h4>
          <p style="font-size: 0.88rem; color: #cbd5e1; margin: 0; line-height: 1.7;">20% booking token upon pickup scheduled, balance 80% after doorstep inspection at destination. Maximum consumer protection.</p>
        </div>

        <div style="background: #101c40; padding: 22px; border-radius: 12px; border: 1.5px solid rgba(245, 158, 11, 0.5);">
          <span style="background: rgba(245, 158, 11, 0.2); color: #f59e0b; font-size: 0.75rem; font-weight: 700; padding: 4px 10px; border-radius: 12px; text-transform: uppercase;">STANDARD FREIGHT</span>
          <h4 style="color: #ffffff; font-size: 1.15rem; margin: 10px 0 8px 0;">10% Advance / 40% LR / 50% Delivery</h4>
          <p style="font-size: 0.88rem; color: #cbd5e1; margin: 0; line-height: 1.7;">10% booking token, 40% upon receiving trackable Lorry Receipt (LR) after carrier loading, balance 50% on doorstep arrival.</p>
        </div>

        <div style="background: #101c40; padding: 22px; border-radius: 12px; border: 1.5px solid #ef4444;">
          <span style="background: rgba(239, 68, 68, 0.2); color: #ef4444; font-size: 0.75rem; font-weight: 700; padding: 4px 10px; border-radius: 12px; text-transform: uppercase;">AVOID / FRAUD RISK</span>
          <h4 style="color: #ffffff; font-size: 1.15rem; margin: 10px 0 8px 0;">100% Upfront Before Pickup</h4>
          <p style="font-size: 0.88rem; color: #cbd5e1; margin: 0; line-height: 1.7;">Unverified transport brokers demanding full payment prior to vehicle collection. High risk of price escalation &amp; delay.</p>
        </div>
      </div>

    </div>
  </section>

  <!-- 6. 7-Step Payment & Billing Security Protocol -->
  <section style="padding: 60px 0; background: #0b132b; color: #ffffff;">
    <div class="container" style="max-width: 950px;">
      
      <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Safety Protocol</span>
      <h2 style="font-size: 2.1rem; font-weight: 800; color: #ffffff; margin: 10px 0 25px 0;">
        7-Step Payment Security Framework
      </h2>

      <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 15px;">
        <div style="background: #172a54; padding: 18px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <div style="font-size: 0.8rem; color: #f59e0b; font-weight: 700;">STEP 01</div>
          <h4 style="font-size: 0.95rem; color: #fff; margin: 4px 0;">Written Quotation</h4>
          <p style="font-size: 0.82rem; color: #cbd5e1; margin: 0;">Itemized cost estimate on letterhead with SAC code 996511.</p>
        </div>

        <div style="background: #172a54; padding: 18px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <div style="font-size: 0.8rem; color: #f59e0b; font-weight: 700;">STEP 02</div>
          <h4 style="font-size: 0.95rem; color: #fff; margin: 4px 0;">Token Advance (10-20%)</h4>
          <p style="font-size: 0.82rem; color: #cbd5e1; margin: 0;">Official stamped payment receipt issued for token booking.</p>
        </div>

        <div style="background: #172a54; padding: 18px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <div style="font-size: 0.8rem; color: #f59e0b; font-weight: 700;">STEP 03</div>
          <h4 style="font-size: 0.95rem; color: #fff; margin: 4px 0;">Pre-Loading Audit</h4>
          <p style="font-size: 0.82rem; color: #cbd5e1; margin: 0;">Joint physical inspection logging mileage, scratches, &amp; fuel level.</p>
        </div>

        <div style="background: #172a54; padding: 18px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <div style="font-size: 0.8rem; color: #f59e0b; font-weight: 700;">STEP 04</div>
          <h4 style="font-size: 0.95rem; color: #fff; margin: 4px 0;">Insurance &amp; LR Issue</h4>
          <p style="font-size: 0.82rem; color: #cbd5e1; margin: 0;">Full transit insurance slip &amp; Consignment Lorry Receipt generated.</p>
        </div>

        <div style="background: #172a54; padding: 18px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <div style="font-size: 0.8rem; color: #f59e0b; font-weight: 700;">STEP 05</div>
          <h4 style="font-size: 0.8rem; color: #f59e0b; font-weight: 700;">GPS Telemetry Access</h4>
          <p style="font-size: 0.82rem; color: #cbd5e1; margin: 0;">Real-time container trailer GPS updates sent to WhatsApp.</p>
        </div>

        <div style="background: #172a54; padding: 18px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <div style="font-size: 0.8rem; color: #f59e0b; font-weight: 700;">STEP 06</div>
          <h4 style="font-size: 0.95rem; color: #fff; margin: 4px 0;">Destination Inspection</h4>
          <p style="font-size: 0.82rem; color: #cbd5e1; margin: 0;">Verification of car condition against origin audit sheet before payment.</p>
        </div>

        <div style="background: #172a54; padding: 18px; border-radius: 10px; border-left: 4px solid #f59e0b; grid-column: span 2;">
          <div style="font-size: 0.8rem; color: #f59e0b; font-weight: 700;">STEP 07</div>
          <h4 style="font-size: 0.95rem; color: #fff; margin: 4px 0;">Final Receipt &amp; IBA Claim Set</h4>
          <p style="font-size: 0.82rem; color: #cbd5e1; margin: 0;">Release of final balance &amp; receipt of stamped reimbursement bill set.</p>
        </div>
      </div>

    </div>
  </section>

  <!-- 7. Nationwide Coverage Grid -->
  <section style="padding: 60px 0; background: #070d1e; color: #ffffff;">
    <div class="container" style="max-width: 900px;">
      
      <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Pan-India Payment Security</span>
      <h2 style="font-size: 2.1rem; font-weight: 800; color: #ffffff; margin: 10px 0 20px 0;">
        Serving Vehicle Shifting Across <span style="color: #f59e0b;">All Indian Regions</span>
      </h2>

      <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 16px; margin-bottom: 25px;">
        <div style="background: #101c40; padding: 18px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #ffffff; font-size: 1.05rem; margin-bottom: 6px;">North &amp; Central India Corridors</h4>
          <p style="font-size: 0.88rem; color: #94a3b8; margin: 0;">Serving Delhi NCR, Uttar Pradesh, Bihar, Jharkhand, MP, &amp; Rajasthan.</p>
        </div>

        <div style="background: #101c40; padding: 18px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #ffffff; font-size: 1.05rem; margin-bottom: 6px;">West &amp; South India Corridors</h4>
          <p style="font-size: 0.88rem; color: #94a3b8; margin: 0;">Serving Maharashtra, Gujarat, Karnataka, Telangana, &amp; Tamil Nadu.</p>
        </div>

        <div style="background: #101c40; padding: 18px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #ffffff; font-size: 1.05rem; margin-bottom: 6px;">East &amp; North-East Hubs</h4>
          <p style="font-size: 0.88rem; color: #94a3b8; margin: 0;">Serving West Bengal, Odisha, Assam, &amp; North-Eastern state capitals.</p>
        </div>

        <div style="background: #101c40; padding: 18px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #ffffff; font-size: 1.05rem; margin-bottom: 6px;">Defence &amp; Govt Cantonment Sectors</h4>
          <p style="font-size: 0.88rem; color: #94a3b8; margin: 0;">Dedicated IBA claim billing sets for Army, Air Force, Navy, &amp; PSU officers.</p>
        </div>
      </div>

    </div>
  </section>

  <!-- 8. Intercity Route Network Grid -->
  <section style="padding: 60px 0; background: #0b132b; color: #ffffff;">
    <div class="container" style="max-width: 900px;">
      
      <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Major Highway Corridors</span>
      <h2 style="font-size: 2.1rem; font-weight: 800; color: #ffffff; margin: 10px 0 20px 0;">
        Popular Vehicle Shipping Corridors &amp; Pricing
      </h2>

      <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 16px; margin-bottom: 25px;">
        <div style="background: #172a54; padding: 18px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #ffffff; font-size: 1.05rem; margin-bottom: 6px;">Delhi NCR to Patna / Ranchi / Kolkata</h4>
          <p style="font-size: 0.88rem; color: #94a3b8; margin: 0;">Transparent 20% advance token, remaining 80% upon doorstep delivery.</p>
        </div>

        <div style="background: #172a54; padding: 18px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #ffffff; font-size: 1.05rem; margin-bottom: 6px;">Mumbai / Pune to Bangalore / Hyderabad</h4>
          <p style="font-size: 0.88rem; color: #94a3b8; margin: 0;">Itemized GST billing, zero hidden toll surcharges, &amp; post-delivery balance.</p>
        </div>

        <div style="background: #172a54; padding: 18px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #ffffff; font-size: 1.05rem; margin-bottom: 6px;">Bangalore to Delhi NCR / Chandigarh</h4>
          <p style="font-size: 0.88rem; color: #94a3b8; margin: 0;">Enclosed hydraulic car carrier with 0.3% declared value insurance policy.</p>
        </div>

        <div style="background: #172a54; padding: 18px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #ffffff; font-size: 1.05rem; margin-bottom: 6px;">Patna / Ranchi to Guwahati / Siliguri</h4>
          <p style="font-size: 0.88rem; color: #94a3b8; margin: 0;">IBA approved bills &amp; official Lorry Receipts for Defence relocation.</p>
        </div>
      </div>

    </div>
  </section>

  <!-- 9. IBA Approved GST Billing Documentation -->
  <section style="padding: 60px 0; background: #070d1e; color: #ffffff;">
    <div class="container" style="max-width: 900px;">
      
      <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Official Claims Documentation</span>
      <h2 style="font-size: 2.1rem; font-weight: 800; color: #ffffff; margin: 10px 0 20px 0;">
        IBA Approved GST Billing Set for Vehicle Relocation
      </h2>

      <div style="background: #101c40; border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 12px; padding: 25px;">
        <h4 style="color: #f59e0b; font-size: 1.1rem; margin-bottom: 12px; font-weight: 700;">Complete Vehicle Relocation Claim Set:</h4>
        <ol style="margin: 0; padding-left: 20px; color: #cbd5e1; line-height: 1.8; font-size: 0.95rem;">
          <li><strong>Official GST Consignment Invoice</strong> detailing itemized vehicle transport freight.</li>
          <li><strong>Pre-Loading Vehicle Inspection Report</strong> recorded during origin pickup.</li>
          <li><strong>Consignment Lorry Receipt (LR Copy)</strong> carrying truck registration details.</li>
          <li><strong>IBA Approved Registration Code &amp; Official Stamp</strong>.</li>
          <li><strong>Full Vehicle Transit Insurance Certificate</strong>.</li>
          <li><strong>Stamped Payment Receipt</strong> for Defence officers, Police staff, Bank personnel, or corporate claim reimbursement.</li>
        </ol>
      </div>

    </div>
  </section>

  <!-- 10. 10 Detailed FAQs + Valid JSON-LD FAQPage Schema -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "mainEntity": [
      <?php 
      $schema_items = [];
      foreach ($faq_list as $faq) {
          $schema_items[] = '{
            "@type": "Question",
            "name": ' . json_encode($faq['q']) . ',
            "acceptedAnswer": {
              "@type": "Answer",
              "text": ' . json_encode($faq['a']) . '
            }
          }';
      }
      echo implode(',', $schema_items);
      ?>
    ]
  }
  </script>

  <section style="padding: 60px 0; background: #0b132b; color: #ffffff;">
    <div class="container" style="max-width: 900px;">
      
      <div class="section-header text-center" style="margin-bottom: 40px;">
        <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Got Questions?</span>
        <h2 style="font-size: 2.1rem; font-weight: 800; color: #ffffff; margin-top: 10px;">
          Frequently Asked Questions About <span style="color: #f59e0b;">Vehicle Transport Payment Terms</span>
        </h2>
      </div>

      <div style="display: flex; flex-direction: column; gap: 14px;">
        <?php foreach ($faq_list as $idx => $faq): ?>
          <div style="background: #101c40; padding: 20px 24px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
            <h3 style="font-size: 1.05rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Q<?php echo ($idx + 1); ?>: <?php echo htmlspecialchars($faq['q']); ?></h3>
            <p style="font-size: 0.92rem; color: #cbd5e1; margin: 0; line-height: 1.7;">
              <?php echo htmlspecialchars($faq['a']); ?>
            </p>
          </div>
        <?php endforeach; ?>
      </div>

    </div>
  </section>

  <!-- 11. Call-To-Action (CTA) Conversion Footer -->
  <section style="padding: 60px 0; background: linear-gradient(135deg, #172a54 0%, #0b132b 100%); border-top: 1.5px solid rgba(245, 158, 11, 0.4); color: #ffffff;">
    <div class="container" style="max-width: 900px; text-align: center;">
      
      <span class="section-tag" style="background: rgba(245, 158, 11, 0.2); color: #f59e0b; padding: 6px 16px; border-radius: 20px; font-size: 0.85rem; font-weight: 700; text-transform: uppercase;">
        Book Safe Vehicle Shipping
      </span>

      <h2 style="font-size: 2.2rem; font-weight: 800; margin: 15px 0 15px 0; color: #ffffff;">
        Ready for <span style="color: #f59e0b;">Transparent &amp; Safe Vehicle Relocation</span>?
      </h2>

      <p style="font-size: 1.05rem; color: #cbd5e1; max-width: 750px; margin: 0 auto 30px auto; line-height: 1.7;">
        Contact our vehicle transport team today for an all-inclusive quote, 10% advance token booking, and 100% IBA-approved GST invoicing.
      </p>

      <div style="display: flex; gap: 15px; justify-content: center; flex-wrap: wrap;">
        <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Now" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 30px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1.05rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
          <i class="fas fa-phone-alt"></i> Call Now: <?php echo SITE_PHONE; ?>
        </a>
        <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20a%20vehicle%20transport%20quote." title="Chat on WhatsApp" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 30px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1.05rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
          <i class="fab fa-whatsapp"></i> Chat on WhatsApp
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
  
  var message = "Hello Shree Ashirwad Packers & Movers,\n\nI would like to request a Vehicle Transport Quote:\n- Name: " + name + "\n- Phone: " + phone + "\n- Moving From: " + moveFrom + "\n- Moving To: " + moveTo;
  
  if (extraMsg && extraMsg.trim() !== '') {
    message += "\n- Vehicle Model: " + extraMsg;
  }
  
  var whatsappUrl = "https://api.whatsapp.com/send?phone=918409531615&text=" + encodeURIComponent(message);
  window.location.href = whatsappUrl;
}
</script>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
