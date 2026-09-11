<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "Packers and Movers in Ramgarh - 08409531615";
$page_desc = "Top-rated Packers and Movers in Ramgarh. Complete household shifting, office relocation, car & bike transport, IBA approved billing, and warehouse storage in Ramgarh Cantt, Ranchi Road & Bhurkunda. Call 8409531615.";
$page_keywords = "packers and movers in ramgarh, packers and movers ramgarh, best packers and movers in ramgarh, top packers and movers in ramgarh, household shifting in ramgarh, home relocation services ramgarh, office shifting services ramgarh, car transport in ramgarh, bike transport ramgarh, ramgarh cantt packers movers, ranchi road packers, bhurkunda packers movers, IBA approved packers movers ramgarh";
$canonical_url = "https://shreeashirwadpackersandmovers.com/packers-and-movers-in-ramgarh";

$page_city = "Ramgarh";

$faq_list = [
    ['q' => 'How early should I book relocation services in Ramgarh for a smooth move?', 'a' => 'We recommend booking 3 to 5 days in advance for local shifting within Ramgarh Cantt, Ranchi Road, Bhurkunda, or Patratu, and 7 to 10 days prior for intercity relocations to major Indian destinations like Delhi, Kolkata, Ranchi, Patna, or Bengaluru.'],
    ['q' => 'Are your shifting bills eligible for CCL / Coal India and Defence employer reimbursement in Ramgarh?', 'a' => 'Yes, absolutely! Shree Ashirwad Packers and Movers is an IBA-approved moving company. We provide 100% genuine GST invoices (SAC code 996511), stamped Lorry Receipts (LR), itemized inventory lists, and IBA consignment documentation accepted by Punjab Regimental Centre (PRC), Sikh Regimental Centre (SRC), Central Coalfields Limited (CCL), and public sector banks.'],
    ['q' => 'How are shifting charges calculated for home relocation in Ramgarh?', 'a' => 'Relocation costs depend on five key parameters: total goods volume (1BHK, 2BHK, 3BHK, or Cantt bungalow), distance to destination, floor elevation, elevator availability, packaging grade required (7-layer protective wrap or wooden crating), and vehicle type (shared vs dedicated closed container truck).'],
    ['q' => 'What level of transit insurance coverage do you provide during moving?', 'a' => 'We provide comprehensive 100% transit insurance covering declared household goods, electronics, and automobiles against highway accidents, vehicle overturning, or natural calamities. The premium is transparently calculated at standard IRDAI rates.'],
    ['q' => 'How do you safeguard fragile glassware, LED TVs, and polished wooden furniture?', 'a' => 'Fragile items undergo multi-layer protection using 80-micron heavy-duty air bubble wrap, foam corner guards, 5-ply corrugated fiberboard sheets, waterproof stretch film, and custom wooden box crating for glass table tops, marble mandirs, and large flat-screen televisions.'],
    ['q' => 'Can I transport my personal car or motor bike along with my household goods from Ramgarh?', 'a' => 'Yes, we operate dedicated enclosed car carrier trailers and hydraulic bike transport trucks equipped with rubberized wheel clamps, soft tie-down straps, and protective body covers to guarantee scratch-free vehicle shipping from Ramgarh across India.'],
    ['q' => 'Which specific neighborhoods and industrial zones do you cover in Ramgarh district?', 'a' => 'We cover 100% of Ramgarh district including Ramgarh Cantt, Ranchi Road, Bhurkunda, Patratu, Rajrappa, Gola, Mandu, Sirka, Argada, Sayal, and Saunda mining townships.'],
    ['q' => 'Do your packers handle furniture disassembly and reassembly at the new house?', 'a' => 'Yes! Our trained carpentry technicians dismantle king/queen size bed frames, modular wardrobes, dining tables, and wall-mounted TV brackets at your current home, pack the hardware securely, and reassemble everything at your destination.'],
    ['q' => 'Is short-term or long-term warehouse storage available in Ramgarh?', 'a' => 'Yes, we maintain clean, moisture-controlled, pest-free, 24/7 CCTV-monitored warehouse facilities near Ramgarh for safe short-term and long-term storage of household goods, office archives, and commercial equipment.'],
    ['q' => 'How do I request a free physical or virtual pre-move survey in Ramgarh?', 'a' => 'Simply call our customer helpline at +91 8409531615 or submit a request via our WhatsApp lead form. Our move supervisor will conduct a free survey and provide a written, fixed-price itemized quote.'],
    ['q' => 'What items are strictly prohibited from being packed inside shifting trucks?', 'a' => 'For safety and statutory compliance, we do not transport hazardous materials such as LPG cylinders, kerosene, petrol/diesel, fireworks, matches, perishable food items, live plants, cash, jewelry, and original property title deeds.'],
    ['q' => 'How long does a local household move within Ramgarh take to complete?', 'a' => 'Local household shifting within Ramgarh Cantt or Ranchi Road for a standard 2BHK or 3BHK home is typically completed within 5 to 8 hours on the exact same day, including packing, loading, transit, unloading, and basic setup.'],
    ['q' => 'What precautions are taken during monsoon or rainy season moves in Ramgarh?', 'a' => 'During rainy weather, all goods are double-wrapped with heavy-duty 100-micron plastic stretch film and tarpaulin sheets before being loaded into 100% leak-proof, weatherproof enclosed container trucks.'],
    ['q' => 'Do you provide specialized office and commercial shifting services in Ramgarh?', 'a' => 'Yes, we execute seamless office relocations including computer server packing, IT hardware anti-static wrapping, modular workstation dismantling, file archives indexing, and weekend commercial shifting to ensure zero operational downtime.'],
    ['q' => 'Can I track my container truck during long-distance intercity transit from Ramgarh?', 'a' => 'Yes, all our long-distance intercity container trucks are fitted with satellite GPS tracking systems, allowing you to receive real-time location updates directly from our logistics dispatch team.'],
    ['q' => 'What makes Shree Ashirwad Packers and Movers the most trusted choice in Ramgarh?', 'a' => 'Our 15+ years of operational excellence, IBA approval, zero hidden charges, transparent written contracts, dedicated moving crews, 7-layer packing standard, and 100% claim settlement record make us Ramgarh’s premier choice.'],
    ['q' => 'How are payment terms structured for home relocation in Ramgarh?', 'a' => 'We maintain simple, transparent payment terms: a nominal booking advance upon survey confirmation, a partial loading payment when goods are loaded into the container truck, and the final balance upon doorstep delivery and inspection.'],
    ['q' => 'What should I do with my refrigerator and washing machine before moving day?', 'a' => 'Refrigerators should be completely defrosted, emptied, and dried 24 hours prior to loading. Washing machines must have their drums secured with transit bolts and water drainage hoses disconnected and drained.'],
    ['q' => 'How are heavy marble mandirs, glass showcases, and antique artifacts moved safely?', 'a' => 'Delicate marble mandirs, glass showcases, and heavy artifacts are wrapped in high-density foam padding, encased in heavy-duty bubble wrap, and built into custom-fitted wooden crates lined with shock-absorbent foam.'],
    ['q' => 'Do you provide door-to-door car carrier services from Ramgarh Cantt to outstation locations?', 'a' => 'Yes, we pick up your car directly from your doorstep in Ramgarh Cantt, conduct a detailed joint vehicle condition survey with photo log, transport it via closed vehicle carrier, and deliver it to your destination address.']
];

require_once __DIR__ . '/../includes/header.php';
?>

<!-- Custom Styles for Ramgarh Page -->
<style>
  .ram-hero-overlay {
    background: linear-gradient(135deg, rgba(7, 13, 30, 0.95) 0%, rgba(16, 28, 64, 0.92) 50%, rgba(11, 19, 43, 0.96) 100%);
  }
  .ram-badge-gold {
    background: rgba(245, 158, 11, 0.15);
    color: #f59e0b;
    border: 1px solid rgba(245, 158, 11, 0.3);
    padding: 6px 14px;
    border-radius: 20px;
    font-size: 0.85rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 1px;
    display: inline-block;
  }
</style>

<div class="page-content" style="background-color: #070d1e; color: #cbd5e1; font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;">

  <!-- Visual Breadcrumb Navigation Bar -->
  <div style="background: #0b132b; border-bottom: 1px solid rgba(255, 255, 255, 0.08); padding: 12px 0;">
    <div class="container">
      <div style="font-size: 0.85rem; color: #94a3b8; display: flex; align-items: center; gap: 8px; flex-wrap: wrap;">
        <a href="<?php echo SITE_URL; ?>" style="color: #f59e0b; text-decoration: none;">Home</a>
        <span>/</span>
        <a href="<?php echo SITE_URL; ?>services" style="color: #cbd5e1; text-decoration: none;">Services</a>
        <span>/</span>
        <span class="breadcrumb-item active">Packers and Movers in Ramgarh</span>
      </div>
    </div>
  </div>

  <!-- Hero Section with Lead Form -->
  <section class="ram-hero-overlay" style="padding: 70px 0 60px 0; position: relative; overflow: hidden; border-bottom: 1px solid rgba(245, 158, 11, 0.2);">
    <div class="container">
      <div style="display: grid; grid-template-columns: 1.2fr 0.8fr; gap: 40px; align-items: center;">
        
        <!-- Hero Text Column -->
        <div>
          <span class="ram-badge-gold" style="margin-bottom: 18px;">
            <i class="fas fa-certificate" style="margin-right: 6px;"></i> IBA Approved Relocation Specialist
          </span>
          
          <h1 style="font-size: 2.8rem; font-weight: 800; line-height: 1.2; margin-bottom: 20px; color: #ffffff;">
            Packers and Movers in Ramgarh - 08409531615
          </h1>
          
          <p style="font-size: 1.15rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 25px;">
            Looking for trustworthy, professional, and affordable moving services in Ramgarh? Shree Ashirwad Packers and Movers is recognized as the <strong>best packers and movers in ramgarh</strong>. We deliver premium, zero-scratch household shifting, defense officer transfers, CCL employee relocation, bike transport, and enclosed car shipping across Ramgarh Cantt, Ranchi Road, Bhurkunda, Patratu, Rajrappa, and outstation routes. We specialize in IBA-approved GST billing for government employees, military personnel, bank officers, and public sector executives.
          </p>

          <div style="display: flex; gap: 15px; flex-wrap: wrap; margin-bottom: 30px;">
            <a href="tel:08409531615" class="btn" style="background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%); color: #070d1e; font-weight: 700; padding: 14px 28px; border-radius: 8px; text-decoration: none; display: inline-flex; align-items: center; gap: 8px; box-shadow: 0 4px 15px rgba(245, 158, 11, 0.4);">
              <i class="fas fa-phone-alt"></i> Call: 08409531615
            </a>
            <a href="https://api.whatsapp.com/send?phone=918409531615&text=Hello%20Shree%20Ashirwad,%20I%20need%20packers%20and%20movers%20services%20in%20Ramgarh" target="_blank" class="btn" style="background: rgba(37, 211, 102, 0.15); color: #25d366; border: 1.5px solid #25d366; font-weight: 700; padding: 14px 28px; border-radius: 8px; text-decoration: none; display: inline-flex; align-items: center; gap: 8px;">
              <i class="fab fa-whatsapp" style="font-size: 1.2rem;"></i> WhatsApp Quote
            </a>
          </div>

          <div style="display: flex; gap: 25px; font-size: 0.9rem; color: #94a3b8; border-top: 1px solid rgba(255, 255, 255, 0.1); padding-top: 20px;">
            <span><strong style="color: #f59e0b;">12,000+</strong> Relocations Executed</span>
            <span><strong style="color: #f59e0b;">100%</strong> IBA GST Bills</span>
            <span><strong style="color: #f59e0b;">7-Layer</strong> Protective Wrap</span>
          </div>
        </div>

        <!-- Hero Lead Form Column -->
        <div>
          <div style="background: #101c40; border: 1px solid rgba(245, 158, 11, 0.3); border-radius: 16px; padding: 30px; box-shadow: 0 15px 35px rgba(0,0,0,0.5);">
            <h3 style="font-size: 1.4rem; color: #ffffff; margin-bottom: 5px; font-weight: 700; text-align: center;">Get Instant Ramgarh Shifting Quote</h3>
            <p style="font-size: 0.85rem; color: #94a3b8; text-align: center; margin-bottom: 20px;">Receive an itemized transparent quote on WhatsApp within minutes</p>

            <form action="<?php echo SITE_URL; ?>request-quote" method="POST" style="display: flex; flex-direction: column; gap: 14px;">
              <input type="hidden" name="source_city" value="Ramgarh">
              <div>
                <input type="text" name="name" placeholder="Your Full Name" required style="width: 100%; padding: 12px 16px; background: #070d1e; border: 1px solid rgba(255,255,255,0.15); border-radius: 8px; color: #ffffff; font-size: 0.9rem;">
              </div>
              <div>
                <input type="tel" name="phone" placeholder="10-Digit Mobile / WhatsApp" required style="width: 100%; padding: 12px 16px; background: #070d1e; border: 1px solid rgba(255,255,255,0.15); border-radius: 8px; color: #ffffff; font-size: 0.9rem;">
              </div>
              <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 10px;">
                <input type="text" name="moving_from" placeholder="From (e.g. Ramgarh Cantt)" value="Ramgarh" required style="width: 100%; padding: 12px 16px; background: #070d1e; border: 1px solid rgba(255,255,255,0.15); border-radius: 8px; color: #ffffff; font-size: 0.9rem;">
                <input type="text" name="moving_to" placeholder="Destination City" required style="width: 100%; padding: 12px 16px; background: #070d1e; border: 1px solid rgba(255,255,255,0.15); border-radius: 8px; color: #ffffff; font-size: 0.9rem;">
              </div>
              <div>
                <select name="shifting_type" style="width: 100%; padding: 12px 16px; background: #070d1e; border: 1px solid rgba(255,255,255,0.15); border-radius: 8px; color: #ffffff; font-size: 0.9rem;">
                  <option value="1 BHK Shifting">1 BHK Household Shifting</option>
                  <option value="2 BHK Shifting">2 BHK Household Shifting</option>
                  <option value="3 BHK Shifting">3 BHK Household Shifting</option>
                  <option value="4+ BHK / Villa">4+ BHK / Villa / Cantt Bungalow</option>
                  <option value="Vehicle Transport">Car / Bike Shipping Only</option>
                  <option value="Office Relocation">Commercial / Office Move</option>
                </select>
              </div>
              <button type="submit" style="background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%); color: #070d1e; font-weight: 700; padding: 14px; border: none; border-radius: 8px; font-size: 1rem; cursor: pointer; transition: opacity 0.2s;">
                Calculate Shifting Estimate
              </button>
            </form>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- Key Statistics Banner -->
  <section class="stats-section" style="padding: 45px 0; background: #070d1e; border-bottom: 1px solid rgba(245, 158, 11, 0.2);">
    <div class="container">
      <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 20px; text-align: center;">
        <div style="padding: 20px; background: rgba(23, 42, 84, 0.5); border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">12,000+</div>
          <div style="font-size: 0.9rem; color: #cbd5e1; margin-top: 5px;">Relocations Completed</div>
        </div>
        <div style="padding: 20px; background: rgba(23, 42, 84, 0.5); border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">100%</div>
          <div style="font-size: 0.9rem; color: #cbd5e1; margin-top: 5px;">IBA GST Compliance</div>
        </div>
        <div style="padding: 20px; background: rgba(23, 42, 84, 0.5); border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">7-Layer</div>
          <div style="font-size: 0.9rem; color: #cbd5e1; margin-top: 5px;">Protective Material Wrap</div>
        </div>
        <div style="padding: 20px; background: rgba(23, 42, 84, 0.5); border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">0%</div>
          <div style="font-size: 0.9rem; color: #cbd5e1; margin-top: 5px;">Hidden Moving Fees</div>
        </div>
      </div>
    </div>
  </section>

  <!-- Deep Operational Overview Section -->
  <section style="padding: 75px 0; background: #0b132b; color: #e2e8f0; line-height: 1.8;">
    <div class="container" style="max-width: 950px;">
      
      <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Ramgarh Logistics Expertise</span>
      <h2 style="font-size: 2.3rem; font-weight: 800; color: #ffffff; margin: 12px 0 22px 0;">
        Comprehensive Shifting &amp; Relocation Services in <span style="color: #f59e0b;">Ramgarh District</span>
      </h2>

      <p style="font-size: 1.05rem; color: #cbd5e1; margin-bottom: 20px;">
        Ramgarh is one of Jharkhand's premier military and industrial epicenters, housing the historic Punjab Regimental Centre (PRC) and Sikh Regimental Centre (SRC) at Ramgarh Cantonment, extensive Central Coalfields Limited (CCL) colliery command areas across Bhurkunda, Argada, and Sirka, alongside sprawling thermal power installations and Jindal Steel manufacturing at Patratu. Located just 45 kilometers north of state capital Ranchi along NH-33 (now NH-22), Ramgarh witnesses constant nationwide relocation traffic.
      </p>

      <p style="font-size: 1.05rem; color: #cbd5e1; margin-bottom: 25px;">
        As dependable <strong>relocation specialists in Ramgarh</strong>, our dedicated team at Shree Ashirwad Packers and Movers brings over 15 years of operational excellence to Ramgarh. Whether you are moving a 1BHK apartment in Ranchi Road, transferring from military barracks in Ramgarh Cantt, or relocating heavy machinery and files from CCL collieries, our seasoned crews manage packing, loading, transit, unloading, and furniture assembly with surgical precision. Choosing licensed <strong>packers movers in ramgarh</strong> guarantees that fragile temple items, electronics, and solid wood furniture navigate ghat hairpin bends without friction or impact.
      </p>

      <p style="font-size: 1.05rem; color: #cbd5e1; margin-bottom: 25px;">
        Armed forces personnel seeking experienced <strong>packers and movers ramgarh</strong> rely on our transparent documentation. When officers compare local options, they consistently rank our services as the <strong>best packers and movers in ramgarh</strong> for absolute punctuality, genuine IBA-format invoicing, and zero-breakage track records.
      </p>

      <!-- 6 Core Services Grid -->
      <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 22px; margin: 35px 0;">
        
        <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 24px; box-shadow: 0 10px 25px rgba(0,0,0,0.3);">
          <div style="background: rgba(245, 158, 11, 0.15); width: 45px; height: 45px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.3rem; color: #f59e0b; margin-bottom: 14px;"><i class="fas fa-home"></i></div>
          <h3 style="font-size: 1.15rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">Household Shifting</h3>
          <p style="font-size: 0.9rem; color: #cbd5e1; line-height: 1.6; margin: 0;">
            Complete home moving with 7-layer defense for modular furniture, kitchen appliances, and delicate glassware.
          </p>
        </div>

        <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 24px; box-shadow: 0 10px 25px rgba(0,0,0,0.3);">
          <div style="background: rgba(245, 158, 11, 0.15); width: 45px; height: 45px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.3rem; color: #f59e0b; margin-bottom: 14px;"><i class="fas fa-building"></i></div>
          <h3 style="font-size: 1.15rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">Office Relocation</h3>
          <p style="font-size: 0.9rem; color: #cbd5e1; line-height: 1.6; margin: 0;">
            Commercial and bank branch relocation including IT server arrays, modular cubicles, and archived document protection.
          </p>
        </div>

        <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 24px; box-shadow: 0 10px 25px rgba(0,0,0,0.3);">
          <div style="background: rgba(245, 158, 11, 0.15); width: 45px; height: 45px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.3rem; color: #f59e0b; margin-bottom: 14px;"><i class="fas fa-car"></i></div>
          <h3 style="font-size: 1.15rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">Car Transportation</h3>
          <p style="font-size: 0.9rem; color: #cbd5e1; line-height: 1.6; margin: 0;">
            Doorstep pickup and scratch-free vehicle transport using enclosed car carriers with real-time GPS tracking.
          </p>
        </div>

        <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 24px; box-shadow: 0 10px 25px rgba(0,0,0,0.3);">
          <div style="background: rgba(245, 158, 11, 0.15); width: 45px; height: 45px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.3rem; color: #f59e0b; margin-bottom: 14px;"><i class="fas fa-motorcycle"></i></div>
          <h3 style="font-size: 1.15rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">Two-Wheeler Shipping</h3>
          <p style="font-size: 0.9rem; color: #cbd5e1; line-height: 1.6; margin: 0;">
            Specialized motorcycle packing using high-density bubble wrap, foam corner guards, and hydraulic loading ramps.
          </p>
        </div>

        <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 24px; box-shadow: 0 10px 25px rgba(0,0,0,0.3);">
          <div style="background: rgba(245, 158, 11, 0.15); width: 45px; height: 45px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.3rem; color: #f59e0b; margin-bottom: 14px;"><i class="fas fa-warehouse"></i></div>
          <h3 style="font-size: 1.15rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">Warehouse Storage</h3>
          <p style="font-size: 0.9rem; color: #cbd5e1; line-height: 1.6; margin: 0;">
            Clean, pest-treated, CCTV-monitored storage bays for short-term and long-term household and commercial cargo.
          </p>
        </div>

        <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 24px; box-shadow: 0 10px 25px rgba(0,0,0,0.3);">
          <div style="background: rgba(245, 158, 11, 0.15); width: 45px; height: 45px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.3rem; color: #f59e0b; margin-bottom: 14px;"><i class="fas fa-file-invoice"></i></div>
          <h3 style="font-size: 1.15rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">IBA Approved Billing</h3>
          <p style="font-size: 0.9rem; color: #cbd5e1; line-height: 1.6; margin: 0;">
            100% compliant reimbursement sets (GST Invoice, LR Copy, Inventory List) tailored for military &amp; CCL audits.
          </p>
        </div>

      </div>

    </div>
  </section>

  <!-- Section: Comprehensive Tariff Matrix -->
  <section style="padding: 70px 0; background: linear-gradient(180deg, #0b132b 0%, #16203b 100%); color: #ffffff;">
    <div class="container" style="max-width: 950px;">
      
      <div class="section-header text-center" style="margin-bottom: 45px;">
        <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Transparent Pricing Standard</span>
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin-top: 10px;">
          Ramgarh Shifting Tariff &amp; Price Breakdown
        </h2>
        <p style="font-size: 1.05rem; color: #cbd5e1; max-width: 800px; margin: 15px auto 0 auto; line-height: 1.7;">
          Clear, upfront pricing with zero hidden fees. As licensed <strong>packers movers in ramgarh</strong>, below are our standard rates for local moves and outstation routes:
        </p>
      </div>

      <!-- Tariff Table -->
      <div style="background: rgba(23, 42, 84, 0.7); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 25px; overflow-x: auto; margin-bottom: 30px;">
        <table style="width: 100%; border-collapse: collapse; color: #cbd5e1; font-size: 0.95rem;">
          <thead>
            <tr style="background: rgba(245, 158, 11, 0.2); color: #f59e0b; text-align: left;">
              <th style="padding: 14px; border-bottom: 2px solid rgba(245, 158, 11, 0.4);">Shifting Type / Volume</th>
              <th style="padding: 14px; border-bottom: 2px solid rgba(245, 158, 11, 0.4);">Local (Within Ramgarh)</th>
              <th style="padding: 14px; border-bottom: 2px solid rgba(245, 158, 11, 0.4);">Ramgarh to Ranchi / Bokaro</th>
              <th style="padding: 14px; border-bottom: 2px solid rgba(245, 158, 11, 0.4);">Ramgarh to Delhi / Metro</th>
            </tr>
          </thead>
          <tbody>
            <tr style="border-bottom: 1px solid rgba(255, 255, 255, 0.1);">
              <td style="padding: 14px; font-weight: 700; color: #ffffff;">1 BHK Household Move</td>
              <td style="padding: 14px; color: #10b981; font-weight: 700;">₹3,200 – ₹5,800</td>
              <td style="padding: 14px; color: #f59e0b; font-weight: 700;">₹7,500 – ₹13,500</td>
              <td style="padding: 14px; color: #38bdf8; font-weight: 700;">₹16,000 – ₹24,000</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255, 255, 255, 0.1); background: rgba(0,0,0,0.15);">
              <td style="padding: 14px; font-weight: 700; color: #ffffff;">2 BHK Household Move</td>
              <td style="padding: 14px; color: #10b981; font-weight: 700;">₹5,800 – ₹9,800</td>
              <td style="padding: 14px; color: #f59e0b; font-weight: 700;">₹11,500 – ₹17,500</td>
              <td style="padding: 14px; color: #38bdf8; font-weight: 700;">₹22,000 – ₹34,000</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255, 255, 255, 0.1);">
              <td style="padding: 14px; font-weight: 700; color: #ffffff;">3 BHK / Cantt Bungalow Move</td>
              <td style="padding: 14px; color: #10b981; font-weight: 700;">₹9,800 – ₹15,500</td>
              <td style="padding: 14px; color: #f59e0b; font-weight: 700;">₹15,500 – ₹24,500</td>
              <td style="padding: 14px; color: #38bdf8; font-weight: 700;">₹30,000 – ₹45,000</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255, 255, 255, 0.1); background: rgba(0,0,0,0.15);">
              <td style="padding: 14px; font-weight: 700; color: #ffffff;">Car Transportation (Enclosed)</td>
              <td style="padding: 14px; color: #10b981; font-weight: 700;">₹2,500 – ₹4,000</td>
              <td style="padding: 14px; color: #f59e0b; font-weight: 700;">₹5,000 – ₹8,000</td>
              <td style="padding: 14px; color: #38bdf8; font-weight: 700;">₹10,500 – ₹17,500</td>
            </tr>
            <tr>
              <td style="padding: 14px; font-weight: 700; color: #ffffff;">Bike Transport (Crated)</td>
              <td style="padding: 14px; color: #10b981; font-weight: 700;">₹1,400 – ₹2,400</td>
              <td style="padding: 14px; color: #f59e0b; font-weight: 700;">₹2,800 – ₹4,200</td>
              <td style="padding: 14px; color: #38bdf8; font-weight: 700;">₹5,000 – ₹9,000</td>
            </tr>
          </tbody>
        </table>
      </div>

      <p style="font-size: 0.95rem; color: #94a3b8; line-height: 1.6; text-align: center;">
        *Note: Final rates depend on total item volume, floor height without elevators, specialty crating requirements, and transit insurance options.
      </p>

    </div>
  </section>

  <!-- Section: Room-by-Room Packing Framework with Real Image -->
  <section style="padding: 70px 0; background: #070d1e; color: #ffffff;">
    <div class="container" style="max-width: 1050px;">
      
      <div style="text-align: center; margin-bottom: 45px;">
        <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Scientific Packing Methods</span>
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin-top: 10px;">
          Room-by-Room Specialized Shifting Framework
        </h2>
        <p style="color: #cbd5e1; max-width: 800px; margin: 12px auto 0 auto; font-size: 1rem; line-height: 1.8;">
          Different household items require distinct handling techniques. As a premier relocation specialist in Ramgarh, our teams implement specialized safety methods for every category:
        </p>
      </div>

      <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 30px; margin-bottom: 40px; align-items: center;">
        <div>
          <img src="<?php echo SITE_URL; ?>assets/images/services/household-furniture-bubble-wrap.jpeg" alt="Household furniture packing in Ramgarh" title="7-Layer Furniture Packing Ramgarh" style="width: 100%; height: 320px; object-fit: cover; border-radius: 14px; border: 1.5px solid rgba(245,158,11,0.3); box-shadow: 0 10px 25px rgba(0,0,0,0.4);" loading="lazy">
        </div>
        <div>
          <h3 style="font-size: 1.4rem; color: #f59e0b; font-weight: 700; margin-bottom: 12px;">Living &amp; Bedroom Furniture Protection</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; line-height: 1.7; margin-bottom: 14px;">
            Modular wardrobes, solid Sheesham beds, and dining suites in Ramgarh Cantt residences and colliery quarters are dismantled by skilled carpenters. Panels receive 3 layers of virgin air-bubble film followed by high-strength corrugated wrapping.
          </p>
          <ul style="padding-left: 20px; margin: 0; line-height: 1.8; color: #cbd5e1; font-size: 0.92rem;">
            <li><strong>Hardware Labeling:</strong> Bolts, nuts, and brackets are stored in tagged pouches taped directly to matching furniture elements.</li>
            <li><strong>Mattress &amp; Sofa Shielding:</strong> Upholstered furniture is sealed in puncture-proof stretch film preventing dust and dampness.</li>
            <li><strong>Temple Idols &amp; Glassware:</strong> Wrapped in dense cellular foam and packaged in custom wooden crates for zero breakage.</li>
          </ul>
        </div>
      </div>

      <!-- 5-Stage Systematic Relocation Process -->
      <div style="margin-top: 50px;">
        <h3 style="font-size: 1.8rem; font-weight: 800; text-align: center; margin-bottom: 35px; color: #ffffff;">
          Our 5-Stage Systematic Relocation Process in Ramgarh
        </h3>

        <div style="display: flex; flex-direction: column; gap: 18px;">
          
          <div style="display: flex; gap: 20px; background: #101c40; padding: 24px; border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
            <div style="font-size: 2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">01</div>
            <div>
              <h4 style="font-size: 1.2rem; color: #ffffff; margin-bottom: 6px;">Pre-Move Survey &amp; Binding Written Estimate</h4>
              <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.6;">
                Our move supervisor conducts an on-site walkthrough or video survey in Ramgarh Cantt or Bhurkunda to catalog furniture volume, examine staircase clearances, and submit a transparent binding quote.
              </p>
            </div>
          </div>

          <div style="display: flex; gap: 20px; background: #101c40; padding: 24px; border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
            <div style="font-size: 2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">02</div>
            <div>
              <h4 style="font-size: 1.2rem; color: #ffffff; margin-bottom: 6px;">Careful Carpentry &amp; Disassembly</h4>
              <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.6;">
                Expert carpenters dismantle modular double beds, wardrobes, and TV brackets. Fasteners and fixtures are sealed in indexed pouches attached directly to matching furniture panels.
              </p>
            </div>
          </div>

          <div style="display: flex; gap: 20px; background: #101c40; padding: 24px; border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
            <div style="font-size: 2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">03</div>
            <div>
              <h4 style="font-size: 1.2rem; color: #ffffff; margin-bottom: 6px;">7-Layer Defensive Packaging &amp; Labeling</h4>
              <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.6;">
                Uniformed packing crews apply air-bubble wrap, edge cushioning foam, corrugated fiberboard cartons, and stretch film. High-value glassware and temple shrines receive customized wooden crating.
              </p>
            </div>
          </div>

          <div style="display: flex; gap: 20px; background: #101c40; padding: 24px; border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
            <div style="font-size: 2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">04</div>
            <div>
              <h4 style="font-size: 1.2rem; color: #ffffff; margin-bottom: 6px;">Sealed Container Transit &amp; Live Tracking</h4>
              <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.6;">
                Consignments are loaded onto closed-body steel container trucks and secured with heavy-duty cargo belts. Real-time GPS devices provide live location monitoring along state highways.
              </p>
            </div>
          </div>

          <div style="display: flex; gap: 20px; background: #101c40; padding: 24px; border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
            <div style="font-size: 2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">05</div>
            <div>
              <h4 style="font-size: 1.2rem; color: #ffffff; margin-bottom: 6px;">Doorstep Delivery, Placement &amp; Setup</h4>
              <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.6;">
                At your destination address, our crew unloads every carton into designated rooms, reassembles bed frames and wardrobes, conducts a final goods verification, and clears debris.
              </p>
            </div>
          </div>

        </div>
      </div>

    </div>
  </section>

  <!-- Section: Automobile Relocation Services with Real Images -->
  <section style="padding: 70px 0; background: #0b132b; color: #ffffff;">
    <div class="container" style="max-width: 1050px;">
      
      <div style="text-align: center; margin-bottom: 40px;">
        <span style="color: #f59e0b; font-weight: 700; text-transform: uppercase; font-size: 0.85rem; letter-spacing: 1px;">Automobile Logistics</span>
        <h2 style="font-size: 2.2rem; font-weight: 800; margin-top: 8px;">
          Dedicated Automobile Relocation from Ramgarh
        </h2>
        <p style="color: #cbd5e1; max-width: 800px; margin: 12px auto 0 auto; font-size: 1rem; line-height: 1.7;">
          Safe, scratch-free automobile transport using specialized enclosed hydraulic trailers and crated motorcycle carriers nationwide:
        </p>
      </div>

      <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 30px;">
        
        <!-- Car Carrier Card -->
        <div style="background: #101c40; border-radius: 14px; border: 1px solid rgba(245, 158, 11, 0.25); overflow: hidden;">
          <img src="<?php echo SITE_URL; ?>assets/images/services/enclosed-car-carrier-trailer-loading.jpeg" alt="Car transportation carrier in Ramgarh" title="Car Carrier Services Ramgarh" style="width: 100%; height: 220px; object-fit: cover;" loading="lazy">
          <div style="padding: 22px;">
            <h4 style="font-size: 1.25rem; color: #f59e0b; font-weight: 700; margin-bottom: 10px;">Car Transportation in Enclosed Trailers</h4>
            <p style="font-size: 0.9rem; color: #cbd5e1; line-height: 1.7; margin-bottom: 12px;">
              Hatchbacks, sedans, and luxury SUVs are driven onto hydraulic carrier decks, secured with 4-point wheel chocks, and transported in sealed steel cages protecting against gravel chips and highway dirt.
            </p>
            <span style="font-size: 0.85rem; color: #94a3b8;"><i class="fas fa-check-circle" style="color: #10b981;"></i> Pre-move photo report &amp; live GPS transit tracking.</span>
          </div>
        </div>

        <!-- Bike Transport Card -->
        <div style="background: #101c40; border-radius: 14px; border: 1px solid rgba(245, 158, 11, 0.25); overflow: hidden;">
          <img src="<?php echo SITE_URL; ?>assets/images/services/bike-packing-shree-ashirwad.jpeg" alt="Bike packing and shifting in Ramgarh" title="Bike Relocation Services Ramgarh" style="width: 100%; height: 220px; object-fit: cover;" loading="lazy">
          <div style="padding: 22px;">
            <h4 style="font-size: 1.25rem; color: #f59e0b; font-weight: 700; margin-bottom: 10px;">Two-Wheeler &amp; Motorcycle Shipping</h4>
            <p style="font-size: 0.9rem; color: #cbd5e1; line-height: 1.7; margin-bottom: 12px;">
              When entrusting your bike to dependable <strong>packers and movers ramgarh</strong>, our specialists bubble-wrap mirrors, indicators, levers, and fuel tanks before securing wheels on dedicated transport stands.
            </p>
            <span style="font-size: 0.85rem; color: #94a3b8;"><i class="fas fa-check-circle" style="color: #10b981;"></i> Custom wooden crating available for premium sports bikes.</span>
          </div>
        </div>

      </div>

    </div>
  </section>

  <!-- Section: Secure Warehousing (with Real Image) -->
  <section style="padding: 70px 0; background: #070d1e; color: #ffffff;">
    <div class="container" style="max-width: 1050px;">
      <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 40px; align-items: center;">
        <div>
          <span style="color: #f59e0b; font-weight: 700; text-transform: uppercase; font-size: 0.85rem; letter-spacing: 1px;">Storage Facilities</span>
          <h2 style="font-size: 2.1rem; font-weight: 800; margin-top: 8px; margin-bottom: 18px;">
            Secure Warehousing &amp; Storage Bays in Ramgarh
          </h2>
          <p style="color: #cbd5e1; font-size: 1rem; line-height: 1.8; margin-bottom: 15px;">
            Awaiting military posting quarters, house renovation in Ranchi Road, or deployment orders outside Jharkhand? Shree Ashirwad maintains clean, fire-safe, and moisture-controlled warehouse facilities:
          </p>
          <ul style="padding-left: 20px; margin: 0; line-height: 1.85; color: #cbd5e1; font-size: 0.95rem;">
            <li><strong>24/7 CCTV &amp; On-Site Security:</strong> Round-the-clock video monitoring, motion sensors, and security guards protect your consignments.</li>
            <li><strong>Palletized Elevated Storage:</strong> Consignments are placed on high-density polymer pallets avoiding ground dampness.</li>
            <li><strong>Regular Fumigation &amp; Pest Proofing:</strong> Systematic chemical treatments protect wood furniture, paperwork, and textiles.</li>
          </ul>
        </div>
        <div>
          <img src="<?php echo SITE_URL; ?>assets/images/services/warehouse-storage-bays-security.jpeg" alt="Warehouse storage in Ramgarh" title="Warehouse Storage Facilities Ramgarh" style="width: 100%; height: 260px; object-fit: cover; border-radius: 14px; border: 1.5px solid rgba(245,158,11,0.3);" loading="lazy">
        </div>
      </div>
    </div>
  </section>

  <!-- Section: Corporate, Defense & Mining Relocation (with Real Image) -->
  <section style="padding: 70px 0; background: #0b132b; color: #ffffff;">
    <div class="container" style="max-width: 1050px;">
      <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 40px; align-items: center;">
        <div>
          <img src="<?php echo SITE_URL; ?>assets/images/services/corporate-it-server-packaging.jpeg" alt="Corporate office shifting in Ramgarh" title="Office Relocation Ramgarh" style="width: 100%; height: 260px; object-fit: cover; border-radius: 14px; border: 1.5px solid rgba(245,158,11,0.3);" loading="lazy">
        </div>
        <div>
          <span style="color: #f59e0b; font-weight: 700; text-transform: uppercase; font-size: 0.85rem; letter-spacing: 1px;">Enterprise &amp; Defense Logistics</span>
          <h2 style="font-size: 2.1rem; font-weight: 800; margin-top: 8px; margin-bottom: 18px;">
            Defense, PSU &amp; Industrial Shifting in Ramgarh
          </h2>
          <p style="color: #cbd5e1; font-size: 1rem; line-height: 1.8; margin-bottom: 15px;">
            Relocating military personnel from Punjab Regimental Centre (PRC), executives from CCL headquarters at Argada and Bhurkunda, or engineering staff from Patratu Thermal Power Station requires seasoned expertise:
          </p>
          <ul style="padding-left: 20px; margin: 0; line-height: 1.85; color: #cbd5e1; font-size: 0.95rem;">
            <li><strong>Official Defense Transfer Packages:</strong> Timely movement with authentic IBA billing formats required for cantonment administrative clearances.</li>
            <li><strong>IT Hardware &amp; Server Packaging:</strong> Antistatic bubble wraps and numbered crates protect telecom equipment, servers, and computers.</li>
            <li><strong>Colliery Archives &amp; Heavy Cargo:</strong> Specialized heavy lifting equipment and sealed containers for commercial and mining tools.</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- Section: Strategic Logistics Corridors Across Ramgarh -->
  <section style="padding: 70px 0; background: #070d1e; color: #ffffff;">
    <div class="container" style="max-width: 1050px;">
      <div style="text-align: center; margin-bottom: 40px;">
        <span style="color: #f59e0b; font-weight: 700; text-transform: uppercase; font-size: 0.85rem; letter-spacing: 1px;">Route Intelligence</span>
        <h2 style="font-size: 2.2rem; font-weight: 800; margin-top: 8px;">
          Strategic Highway Corridors &amp; Ghat Logistics Across Ramgarh
        </h2>
        <p style="color: #cbd5e1; max-width: 820px; margin: 12px auto 0 auto; font-size: 1rem; line-height: 1.8;">
          Ramgarh is bounded by steep plateau ghat sections and high-density industrial highways. Selecting certified <strong>packers movers in ramgarh</strong> ensures careful driving and smooth clearances:
        </p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 24px;">
        <div style="background: #101c40; padding: 24px; border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h3 style="font-size: 1.15rem; color: #f59e0b; font-weight: 700; margin-bottom: 10px;">NH-33 Chutupalu Valley Expressway</h3>
          <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.7; margin: 0;">
            Connecting Ramgarh to state capital Ranchi via the steep Chutupalu pass. Verified <strong>packers movers in ramgarh</strong> deploy container carriers equipped with exhaust brakes and air-ride suspension to prevent cargo shift.
          </p>
        </div>

        <div style="background: #101c40; padding: 24px; border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h3 style="font-size: 1.15rem; color: #f59e0b; font-weight: 700; margin-bottom: 10px;">Patratu Valley Winding Corridor</h3>
          <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.7; margin: 0;">
            Linking Patratu Dam, PVUNL power plant, and Jindal Steel. Choosing the <strong>best packers and movers in ramgarh</strong> guarantees specialized tie-down anchoring for safe transit along hairpin turns.
          </p>
        </div>

        <div style="background: #101c40; padding: 24px; border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h3 style="font-size: 1.15rem; color: #f59e0b; font-weight: 700; margin-bottom: 10px;">NH-23 Bokaro &amp; Gola Industrial Route</h3>
          <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.7; margin: 0;">
            Arterial route connecting Ramgarh to Bokaro Steel City and Purulia. Commercial and residential clients trust experienced <strong>packers and movers ramgarh</strong> for quick same-day dispatch.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- Section: 7 Verification Pillars -->
  <section style="padding: 70px 0; background: #0b132b; color: #ffffff;">
    <div class="container" style="max-width: 950px;">
      
      <div class="section-header text-center" style="margin-bottom: 45px;">
        <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Safety Assurance</span>
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin-top: 10px;">
          7 Verification Pillars of Shree Ashirwad Packers in Ramgarh
        </h2>
        <p style="font-size: 1.05rem; color: #cbd5e1; max-width: 800px; margin: 15px auto 0 auto; line-height: 1.7;">
          Why thousands of military families and PSU executives choose our moving service:
        </p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 20px;">
        
        <div style="background: #101c40; padding: 22px; border-radius: 12px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #ffffff; font-size: 1.1rem; margin-bottom: 8px; font-weight: 700;">1. IBA Approved &amp; Registered</h4>
          <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.6; margin: 0;">Official Indian Banks' Association (IBA) code &amp; GSTIN registration guaranteeing valid employer claim documents.</p>
        </div>

        <div style="background: #101c40; padding: 22px; border-radius: 12px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #ffffff; font-size: 1.1rem; margin-bottom: 8px; font-weight: 700;">2. 7-Layer Packaging Standard</h4>
          <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.6; margin: 0;">Multi-layer wrapping combining bubble wrap, foam corners, corrugated sheets, stretch film, and wooden crates.</p>
        </div>

        <div style="background: #101c40; padding: 22px; border-radius: 12px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #ffffff; font-size: 1.1rem; margin-bottom: 8px; font-weight: 700;">3. In-House Trained Crews</h4>
          <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.6; margin: 0;">Zero daily wage freelancers; our permanent move supervisors and carpenters are background-verified professionals.</p>
        </div>

        <div style="background: #101c40; padding: 22px; border-radius: 12px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #ffffff; font-size: 1.1rem; margin-bottom: 8px; font-weight: 700;">4. Dedicated Container Fleet</h4>
          <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.6; margin: 0;">Fully enclosed, weatherproof container trucks protecting goods from rain, dust, highway shocks, and pilferage.</p>
        </div>

        <div style="background: #101c40; padding: 22px; border-radius: 12px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #ffffff; font-size: 1.1rem; margin-bottom: 8px; font-weight: 700;">5. Real-Time GPS Tracking</h4>
          <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.6; margin: 0;">Satellite-monitored intercity trucks providing location updates from dispatch to doorstep unloading.</p>
        </div>

        <div style="background: #101c40; padding: 22px; border-radius: 12px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #ffffff; font-size: 1.1rem; margin-bottom: 8px; font-weight: 700;">6. Comprehensive Transit Insurance</h4>
          <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.6; margin: 0;">100% financial coverage for declared goods against highway accidents, overturned vehicles, or acts of nature.</p>
        </div>

      </div>

      <div style="background: #101c40; padding: 22px; border-radius: 12px; border-left: 4px solid #f59e0b; margin-top: 20px;">
        <h4 style="color: #ffffff; font-size: 1.1rem; margin-bottom: 8px; font-weight: 700;">7. Written Price Contract (Zero Hidden Fees)</h4>
        <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.6; margin: 0;">Every quote is backed by an itemized contract detailing labor costs, packing materials, toll taxes, and vehicle charges with zero surprise additions on delivery day.</p>
      </div>

    </div>
  </section>

  <!-- Section: Comparison Matrix (Shree Ashirwad vs Unorganized Transporters) -->
  <section style="padding: 70px 0; background: #070d1e; color: #ffffff;">
    <div class="container" style="max-width: 950px;">
      <div style="text-align: center; margin-bottom: 40px;">
        <span style="color: #f59e0b; font-weight: 700; text-transform: uppercase; font-size: 0.85rem; letter-spacing: 1px;">Transparent Comparison</span>
        <h2 style="font-size: 2.2rem; font-weight: 800; margin-top: 8px;">
          Shree Ashirwad vs. Unorganized Local Transporters
        </h2>
      </div>

      <div style="overflow-x: auto; background: #101c40; border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.25);">
        <table style="width: 100%; border-collapse: collapse; text-align: left; font-size: 0.95rem;">
          <thead>
            <tr style="background: #172a54; border-bottom: 2px solid rgba(245, 158, 11, 0.4);">
              <th style="padding: 16px 20px; color: #f59e0b;">Moving Feature</th>
              <th style="padding: 16px 20px; color: #10b981;">Shree Ashirwad Packers</th>
              <th style="padding: 16px 20px; color: #f43f5e;">Unverified Local Transporters</th>
            </tr>
          </thead>
          <tbody>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.06);">
              <td style="padding: 14px 20px; font-weight: 700; color: #ffffff;">Price Structure</td>
              <td style="padding: 14px 20px; color: #10b981; font-weight: 600;">&#10003; 100% Guaranteed binding written quote</td>
              <td style="padding: 14px 20px; color: #f43f5e;">&#10007; Low initial quote, hidden surcharges on moving day</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.06); background: rgba(255,255,255,0.02);">
              <td style="padding: 14px 20px; font-weight: 700; color: #ffffff;">Packaging Standard</td>
              <td style="padding: 14px 20px; color: #10b981; font-weight: 600;">&#10003; 7-layer defense (bubble wrap, corrugated sheets, stretch film)</td>
              <td style="padding: 14px 20px; color: #f43f5e;">&#10007; Old blankets, scrap cartons, newspapers</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.06);">
              <td style="padding: 14px 20px; font-weight: 700; color: #ffffff;">Transit Security</td>
              <td style="padding: 14px 20px; color: #10b981; font-weight: 600;">&#10003; Weatherproof all-steel enclosed container trucks</td>
              <td style="padding: 14px 20px; color: #f43f5e;">&#10007; Open tarpaulin trucks prone to rain seepage</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.06); background: rgba(255,255,255,0.02);">
              <td style="padding: 14px 20px; font-weight: 700; color: #ffffff;">Transit Insurance</td>
              <td style="padding: 14px 20px; color: #10b981; font-weight: 600;">&#10003; Full-value declared marine transit insurance policy</td>
              <td style="padding: 14px 20px; color: #f43f5e;">&#10007; No insurance coverage; total customer liability</td>
            </tr>
            <tr>
              <td style="padding: 14px 20px; font-weight: 700; color: #ffffff;">Employer Claims</td>
              <td style="padding: 14px 20px; color: #10b981; font-weight: 600;">&#10003; IBA-approved GST invoices &amp; money receipts for reimbursements</td>
              <td style="padding: 14px 20px; color: #f43f5e;">&#10007; Handwritten slips rejected by HR audits</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </section>

  <!-- Section: Testimonials & Google Map Embed -->
  <section style="padding: 70px 0; background: #0b132b; color: #ffffff;">
    <div class="container" style="max-width: 1050px;">
      <div style="text-align: center; margin-bottom: 45px;">
        <span style="color: #f59e0b; font-weight: 700; text-transform: uppercase; font-size: 0.85rem; letter-spacing: 1px;">Customer Testimonials</span>
        <h2 style="font-size: 2.2rem; font-weight: 800; margin-top: 8px;">
          What Ramgarh Residents Say About Our Shifting
        </h2>
        <p style="color: #cbd5e1; max-width: 750px; margin: 12px auto 0 auto; font-size: 1rem; line-height: 1.7;">
          Real feedback from military officers, CCL engineers, and business families relocated in Ramgarh:
        </p>
      </div>

      <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 24px; margin-bottom: 40px;">
        <div style="background: #172a54; padding: 24px; border-radius: 12px; border: 1px solid rgba(245,158,11,0.25);">
          <div style="color: #f59e0b; font-size: 1rem; margin-bottom: 8px;"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
          <p style="color: #cbd5e1; font-size: 0.92rem; line-height: 1.7; margin-bottom: 12px;">
            "Transferred from Punjab Regimental Centre Ramgarh Cantt to Chandimandir. Shree Ashirwad handled our complete official bungalow shift, providing prompt IBA GST paperwork that made claim reimbursement effortless. Truly the <strong>best packers and movers in ramgarh</strong>!"
          </p>
          <strong style="color: #ffffff; font-size: 0.95rem;">— Col. Hardeep Singh, Ramgarh Cantonment</strong>
        </div>

        <div style="background: #172a54; padding: 24px; border-radius: 12px; border: 1px solid rgba(245,158,11,0.25);">
          <div style="color: #f59e0b; font-size: 1rem; margin-bottom: 8px;"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
          <p style="color: #cbd5e1; font-size: 0.92rem; line-height: 1.7; margin-bottom: 12px;">
            "Relocated our 2BHK quarter from Bhurkunda CCL colliery to Ranchi. The team arrived on time, wrapped everything in thick bubble sheets, and delivered scratch-free within five hours."
          </p>
          <strong style="color: #ffffff; font-size: 0.95rem;">— Rajeshwar Mahto, Senior Mining Engineer, CCL</strong>
        </div>
      </div>

      <!-- Google Map Embed -->
      <div style="border-radius: 14px; overflow: hidden; border: 1.5px solid rgba(245,158,11,0.3); box-shadow: 0 10px 30px rgba(0,0,0,0.5); height: 320px;">
        <iframe 
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d58430.123456789!2d85.5126!3d23.6321!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f4e456789abcde%3A0x123456789abcdef!2sRamgarh%20Cantonment%2C%20Jharkhand!5e0!3m2!1sen!2sin!4v1711200000000!5m2!1sen!2sin" 
          width="100%" 
          height="100%" 
          style="border:0;" 
          allowfullscreen="" 
          loading="lazy" 
          referrerpolicy="no-referrer-when-downgrade"
          title="Google Map Ramgarh Shree Ashirwad Packers and Movers">
        </iframe>
      </div>
    </div>
  </section>

  <!-- Section: Ramgarh Neighborhoods & Intercity Grids -->
  <section style="padding: 70px 0; background: #070d1e; color: #ffffff;">
    <div class="container" style="max-width: 950px;">
      
      <div class="section-header text-center" style="margin-bottom: 45px;">
        <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Service Network</span>
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin-top: 10px;">
          Locations We Serve in <span style="color: #f59e0b;">Ramgarh &amp; Beyond</span>
        </h2>
      </div>

      <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 25px;">
        
        <!-- Local Neighborhoods Column -->
        <div style="background: #172a54; padding: 25px; border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.3);">
          <h3 style="font-size: 1.2rem; color: #f59e0b; margin-bottom: 15px; font-weight: 700;">Local Coverage in Ramgarh</h3>
          <ul style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.9; padding-left: 18px; margin: 0;">
            <li><strong>Ramgarh Cantt:</strong> Cantonment board, PRC, SRC military residential zones.</li>
            <li><strong>Ranchi Road:</strong> Main commercial street &amp; railway transportation hub.</li>
            <li><strong>Bhurkunda:</strong> Major CCL mining township &amp; residential colonies.</li>
            <li><strong>Patratu:</strong> Thermal power station (PVUNL) &amp; Jindal Steel complex.</li>
            <li><strong>Rajrappa:</strong> Temple township &amp; open-cast mining command area.</li>
            <li><strong>Gola &amp; Mandu:</strong> Highway logistics belts along NH-23 and NH-33.</li>
          </ul>
        </div>

        <!-- Popular Routes Column -->
        <div style="background: #172a54; padding: 25px; border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.3);">
          <h3 style="font-size: 1.2rem; color: #f59e0b; margin-bottom: 15px; font-weight: 700;">Popular Outstation Routes</h3>
          <ul style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.9; padding-left: 18px; margin: 0;">
            <li><strong>Ramgarh to Ranchi:</strong> Express corridor via NH-33 Chutupalu valley (45 km).</li>
            <li><strong>Ramgarh to Bokaro:</strong> Direct industrial container transport via NH-23 (60 km).</li>
            <li><strong>Ramgarh to Hazaribagh:</strong> Northern plateau highway line-haul (52 km).</li>
            <li><strong>Ramgarh to Kolkata:</strong> Interstate commercial &amp; household route (330 km).</li>
            <li><strong>Ramgarh to Patna:</strong> Direct highway line connecting to Bihar capital (280 km).</li>
            <li><strong>Ramgarh to Delhi NCR:</strong> Dedicated long-distance enclosed container trucks.</li>
          </ul>
        </div>

      </div>

    </div>
  </section>

  <!-- Section: Real Operational Proof Gallery -->
  <section style="padding: 50px 0; background: #0b132b; border-top: 1px solid rgba(245,158,11,0.2);">
    <div class="container" style="max-width: 1050px; margin: 0 auto;">
      <div style="display: grid; gap: 24px; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); align-items: center;">
        <div>
          <span style="display: inline-block; color: #f59e0b; font-weight: 700; text-transform: uppercase; font-size: 0.8rem; letter-spacing: 1px; margin-bottom: 10px;">Real Operational Proof</span>
          <h3 style="font-size: 1.6rem; color: #ffffff; font-weight: 800; margin: 0 0 12px 0;">Household Packing &amp; Loading Operations in Ramgarh</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; line-height: 1.8; margin: 0;">Our crew uses professional wrapping materials and careful methods for household goods, furniture, and fragile items. These photos show real packing work from our active moving operations across Ramgarh district.</p>
        </div>
        <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 14px;">
          <img title="Shree Ashirwad Packers and Movers Ramgarh" src="<?php echo SITE_URL; ?>assets/images/gallery/gallery-5.webp" alt="Heavy carton boxes and foam sheet household packing" style="width: 100%; height: 230px; object-fit: cover; border-radius: 12px; border: 1px solid rgba(245,158,11,0.3); box-shadow: 0 4px 12px rgba(0,0,0,0.3);" loading="lazy">
          <img title="Shree Ashirwad Packers and Movers Ramgarh" src="<?php echo SITE_URL; ?>assets/images/gallery/gallery-3.webp" alt="Wooden crate protection for fragile household items" style="width: 100%; height: 230px; object-fit: cover; border-radius: 12px; border: 1px solid rgba(245,158,11,0.3); box-shadow: 0 4px 12px rgba(0,0,0,0.3);" loading="lazy">
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
      <p style="font-size: 1.05rem; color: #cbd5e1; line-height: 1.85; margin: 0 auto; max-width: 920px;">
        As a certified relocation specialist across Jharkhand, Shree Ashirwad provides seamless residential and commercial moving solutions for clients transitioning between major regional centers. Operating as premier <a href="<?php echo SITE_URL; ?>" title="Packers and Movers" style="color: #f59e0b; text-decoration: underline; font-weight: 700;">packers and movers</a>, we maintain direct logistics corridors connecting to our flagship operations at <a href="<?php echo SITE_URL; ?>packers-and-movers-in-ranchi" title="Packers and Movers in Ranchi" style="color: #f59e0b; text-decoration: underline; font-weight: 700;">packers and movers in Ranchi</a>, delivering synchronized transit tracking, verified handling teams, and prompt door-to-door delivery across every district.
      </p>
    </div>
  </section>

  <!-- Section: Frequently Asked Questions (20 Comprehensive FAQs) -->
  <section style="padding: 70px 0; background: #070d1e; color: #ffffff;">
    <div class="container" style="max-width: 950px;">
      
      <div class="section-header text-center" style="margin-bottom: 45px;">
        <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Customer Assistance</span>
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin-top: 10px;">
          Frequently Asked Questions About <span style="color: #f59e0b;">Shifting in Ramgarh</span>
        </h2>
        <p style="font-size: 1.05rem; color: #cbd5e1; max-width: 800px; margin: 15px auto 0 auto; line-height: 1.7;">
          Everything you need to know about our relocation process, packing quality, pricing, and IBA billing in Ramgarh:
        </p>
      </div>

      <div style="display: flex; flex-direction: column; gap: 16px;">
        <?php foreach ($faq_list as $index => $faq): ?>
        <div style="background: #101c40; padding: 20px 24px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h3 style="font-size: 1.08rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Q<?php echo ($index + 1); ?>: <?php echo htmlspecialchars($faq['q']); ?></h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.7;"><?php echo htmlspecialchars($faq['a']); ?></p>
        </div>
        <?php endforeach; ?>
      </div>

    </div>
  </section>

  <!-- Section: Call To Action Banner -->
  <section style="padding: 70px 0; background: linear-gradient(135deg, #172a54 0%, #0b132b 100%); border-top: 1.5px solid rgba(245, 158, 11, 0.4); color: #ffffff;">
    <div class="container" style="max-width: 900px; text-align: center;">
      
      <span class="section-tag" style="background: rgba(245, 158, 11, 0.2); color: #f59e0b; padding: 6px 16px; border-radius: 20px; font-size: 0.85rem; font-weight: 700; text-transform: uppercase;">
        Zero-Stress Relocation Guaranteed
      </span>

      <h2 style="font-size: 2.3rem; font-weight: 800; margin: 15px 0 15px 0; color: #ffffff;">
        Book Ramgarh’s Most Trusted Moving Service
      </h2>

      <p style="font-size: 1.05rem; color: #cbd5e1; max-width: 750px; margin: 0 auto 30px auto; line-height: 1.7;">
        Contact our moving specialists today for a free pre-move survey, 7-layer protective packaging, and IBA-approved billing documentation.
      </p>

      <div style="display: flex; gap: 15px; justify-content: center; flex-wrap: wrap;">
        <a href="tel:08409531615" class="btn" style="background: #f59e0b; color: #070d1e; font-weight: 700; padding: 14px 28px; border-radius: 8px; text-decoration: none; display: inline-flex; align-items: center; gap: 8px;">
          <i class="fas fa-phone-alt"></i> Call Now: 08409531615
        </a>
        <a href="<?php echo SITE_URL; ?>contact-us" class="btn" style="background: transparent; color: #ffffff; border: 2px solid #ffffff; font-weight: 700; padding: 14px 28px; border-radius: 8px; text-decoration: none;">
          Contact Our Move Experts
        </a>
      </div>

    </div>
  </section>

</div>

<!-- JSON-LD Dual Schema: MovingCompany and FAQPage -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "MovingCompany",
  "name": "Shree Ashirwad Packers and Movers Ramgarh",
  "image": "<?php echo SITE_URL; ?>assets/images/services/household-furniture-bubble-wrap.jpeg",
  "@id": "https://shreeashirwadpackersandmovers.com/packers-and-movers-in-ramgarh#company",
  "url": "https://shreeashirwadpackersandmovers.com/packers-and-movers-in-ramgarh",
  "telephone": "+91-8409531615",
  "priceRange": "₹₹",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "Ranchi Road, Near Ramgarh Cantonment",
    "addressLocality": "Ramgarh",
    "addressRegion": "Jharkhand",
    "postalCode": "829122",
    "addressCountry": "IN"
  },
  "geo": {
    "@type": "GeoCoordinates",
    "latitude": 23.6321,
    "longitude": 85.5126
  },
  "openingHoursSpecification": {
    "@type": "OpeningHoursSpecification",
    "dayOfWeek": [
      "Monday",
      "Tuesday",
      "Wednesday",
      "Thursday",
      "Friday",
      "Saturday",
      "Sunday"
    ],
    "opens": "00:00",
    "closes": "23:59"
  },
  "sameAs": [
    "https://www.facebook.com/shreeashirwadpackers",
    "https://twitter.com/ashirwadpackers"
  ]
}
</script>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    <?php 
    $faq_json = [];
    foreach ($faq_list as $f) {
      $faq_json[] = json_encode([
        "@type" => "Question",
        "name" => $f['q'],
        "acceptedAnswer" => [
          "@type" => "Answer",
          "text" => $f['a']
        ]
      ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
    }
    echo implode(",\n    ", $faq_json);
    ?>
  ]
}
</script>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>