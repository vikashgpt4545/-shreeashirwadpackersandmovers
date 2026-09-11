<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "Packers and Movers in Hazaribagh - 08409531615";
$page_desc = "Professional Packers and Movers in Hazaribagh offering safe household shifting, office relocation, car carrier, bike shipping & storage. Call (+91) 8409531615.";
$page_keywords = "packers and movers in hazaribagh, packers and movers hazaribagh, best packers movers hazaribagh, household shifting hazaribagh, korrah packers, matwari movers, canary hill road packers, office relocation hazaribagh, car transport hazaribagh, bike shipping hazaribagh, IBA approved movers hazaribagh";
$canonical_url = "https://shreeashirwadpackersandmovers.com/packers-and-movers-in-hazaribagh";

$page_city = "Hazaribagh";

$faq_list = [
    [
        'q' => 'Which areas do you cover for shifting services in Hazaribagh?',
        'a' => 'We cover all residential, commercial, and educational zones across Hazaribagh including Korrah, Matwari, Canary Hill Road, Boddom Bazar, Demotand, Barhi, Chauparan, Babu Gaon, Hurhuru, Lakhe, Pelawal, Okni, Nawabganj, Jabra, Sindoor, Kollu, Amrit Nagar, Barkagaon, Ichak, Churchu, Keredari, Bishnugarh, Tati Jharia, Daru, and Padma.'
    ],
    [
        'q' => 'Are your shifting charges in Hazaribagh IBA approved for official claims?',
        'a' => 'Yes, Shree Ashirwad Packers and Movers issues 100% genuine IBA-compliant GST invoices, Lorry Receipts (LR), money receipts, and itemized inventory lists accepted by Central/State government departments, BSF Meru Camp, Police Academy, Railways, Banks, and corporate HR audits.'
    ],
    [
        'q' => 'How much do local household shifting services cost in Hazaribagh?',
        'a' => 'Local shifting within Hazaribagh starts at ₹3,000 to ₹5,500 for 1BHK, ₹5,500 to ₹9,500 for 2BHK, and ₹9,500 to ₹15,000 for 3BHK residences depending on item volume, floor height, and packing grade requested.'
    ],
    [
        'q' => 'How many days in advance should I book relocation services in Hazaribagh?',
        'a' => 'We recommend booking 2 to 3 days in advance for local Hazaribagh moves and 4 to 5 days prior for intercity relocations to ensure priority vehicle scheduling and customized 7-layer packaging materials.'
    ],
    [
        'q' => 'Do you provide safe motorcycle and car transport from Hazaribagh across India?',
        'a' => 'Yes, we operate dedicated enclosed hydraulic car trailers and belt-secured container trucks with multi-layer bubble and foam padding for scratch-free vehicle transport nationwide.'
    ],
    [
        'q' => 'Can your crew dismantle and reassemble heavy furniture in Hazaribagh?',
        'a' => 'Yes, experienced carpenters dismantle double beds, modular wardrobes, wall units, and dining tables at origin and reassemble them at your new home.'
    ],
    [
        'q' => 'Is transit insurance available for intercity moves originating from Hazaribagh?',
        'a' => 'Yes, we provide 100% full-value transit marine insurance policy documentation protecting household goods, electronics, and vehicles against highway risks.'
    ],
    [
        'q' => 'What packaging materials do you use for house shifting in Hazaribagh?',
        'a' => 'We use a 7-layer safety system comprising heavy-duty air-bubble film, 5-ply corrugated cardboard sheets, waterproof stretch wrap, foam corner guards, and custom wooden crating for fragile items.'
    ],
    [
        'q' => 'Do you offer office and commercial shop relocation in Hazaribagh?',
        'a' => 'Yes, we handle corporate office shifting, IT hardware moving, file archive relocation, and commercial equipment transport across Hazaribagh and NH-33 / NH-19 corridors.'
    ],
    [
        'q' => 'How can I request a free shifting estimate in Hazaribagh?',
        'a' => 'Call +91 8409531615 or submit your requirements on WhatsApp to receive an instant transparent quotation from our move coordinator.'
    ],
    [
        'q' => 'Do you provide warehouse storage facilities in Hazaribagh?',
        'a' => 'Yes, we operate clean, CCTV-monitored, moisture-controlled, and pest-proof short-term and long-term storage facilities in Hazaribagh.'
    ],
    [
        'q' => 'How do you transport delicate glass, crockery, and temple items?',
        'a' => 'Delicate items are individually wrapped in multiple layers of virgin air-bubble wrap, placed in double-walled corrugated cartons with cellular dividers, and packed inside custom wooden crates marked with fragile stickers.'
    ],
    [
        'q' => 'Are packing and unpacking included in your standard quotes?',
        'a' => 'Yes, our comprehensive moving quote includes door-to-door packing, loading, highway transportation, unloading, and basic unpacking with furniture placement at your destination.'
    ],
    [
        'q' => 'Do you operate relocations from Hazaribagh to major metro cities?',
        'a' => 'Yes, we run regular direct container schedules from Hazaribagh to Delhi NCR, Kolkata, Patna, Bengaluru, Mumbai, Pune, Hyderabad, and Chennai with live GPS updates.'
    ],
    [
        'q' => 'What happens if items get accidentally damaged during transit?',
        'a' => 'Under our optional full-value transit insurance policy, any transit damage is surveyed quickly and compensation claims are settled expeditiously through our insurance partner.'
    ],
    [
        'q' => 'Can you relocate plants and garden pots safely?',
        'a' => 'Yes, we secure indoor and outdoor potted plants using specialized breathable netting and ventilated loading bays to prevent stem breakage during transit.'
    ],
    [
        'q' => 'Do you supply cartons before moving day for self-sorting personal items?',
        'a' => 'Yes, upon booking confirmation, our executive delivers designated boxes so you can organize personal clothing, books, and private documents before moving day.'
    ],
    [
        'q' => 'Do you charge extra for shifting to upper floors without an elevator?',
        'a' => 'Nominal floor charges may apply for stairs-only carriage above the 2nd floor, which will be transparently detailed in your initial written estimate before shifting starts.'
    ],
    [
        'q' => 'Can I track my moving consignment in real time?',
        'a' => 'Yes, all container trucks and enclosed trailers are GPS-tracked, and our move coordinator shares regular checkpoint updates via WhatsApp and phone.'
    ],
    [
        'q' => 'Why choose Shree Ashirwad Packers and Movers over unverified local transporters?',
        'a' => 'Unlike local open-truck operators, we provide 100% written price contracts with zero hidden surcharges, IBA-compliant GST billing, certified packaging crews, and dedicated enclosed containers.'
    ]
];

require_once __DIR__ . '/../includes/header.php';
?>

<!-- Internal Custom Styles -->
<style>
  .haz-hero-overlay {
    background: linear-gradient(135deg, rgba(7, 13, 30, 0.95) 0%, rgba(16, 28, 64, 0.92) 50%, rgba(11, 19, 43, 0.96) 100%);
  }
  .haz-glass-card {
    background: rgba(255, 255, 255, 0.05);
    backdrop-filter: blur(10px);
    border: 1px solid rgba(255, 255, 255, 0.1);
    transition: transform 0.3s ease, border-color 0.3s ease;
  }
  .haz-glass-card:hover {
    transform: translateY(-5px);
    border-color: rgba(245, 158, 11, 0.5);
  }
  .haz-badge-gold {
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

  <!-- Breadcrumb Bar -->
  <div style="background: #0b132b; border-bottom: 1px solid rgba(255, 255, 255, 0.08); padding: 12px 0;">
    <div class="container">
      <div style="font-size: 0.85rem; color: #94a3b8; display: flex; align-items: center; gap: 8px; flex-wrap: wrap;">
        <a href="<?php echo SITE_URL; ?>" style="color: #f59e0b; text-decoration: none;">Home</a>
        <span>/</span>
        <a href="<?php echo SITE_URL; ?>services" style="color: #cbd5e1; text-decoration: none;">Services</a>
        <span>/</span>
        <span class="breadcrumb-item active">Packers and Movers in Hazaribagh</span>
      </div>
    </div>
  </div>

  <!-- Hero Section with Dual Lead Capture & Floating Badges -->
  <section class="haz-hero-overlay" style="padding: 70px 0 60px 0; position: relative; overflow: hidden; border-bottom: 1px solid rgba(245, 158, 11, 0.2);">
    <div class="container">
      <div style="display: grid; grid-template-columns: 1.2fr 0.8fr; gap: 40px; align-items: center;">
        
        <!-- Left Hero Content -->
        <div>
          <span class="haz-badge-gold" style="margin-bottom: 18px;">
            <i class="fas fa-certificate" style="margin-right: 6px;"></i> IBA Approved Relocation Specialist
          </span>
          
          <h1 style="font-size: 2.8rem; font-weight: 800; line-height: 1.2; margin-bottom: 20px; color: #ffffff;">
            Packers and Movers in Hazaribagh - 08409531615
          </h1>
          
          <p style="font-size: 1.1rem; line-height: 1.8; color: #cbd5e1; margin-bottom: 25px;">
            Shree Ashirwad Packers and Movers is recognized as the <strong>best packers and movers in hazaribagh</strong>. We provide safe household shifting, corporate office relocation, enclosed car carrier transport, and secure warehousing across Korrah, Matwari, Canary Hill Road, Boddom Bazar, Demotand, and all surrounding areas of Hazaribagh district.
          </p>

          <div style="display: flex; gap: 15px; flex-wrap: wrap; margin-bottom: 30px;">
            <a href="tel:+918409531615" class="btn" style="background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%); color: #070d1e; font-weight: 700; padding: 14px 28px; border-radius: 8px; text-decoration: none; display: inline-flex; align-items: center; gap: 8px; box-shadow: 0 4px 15px rgba(245, 158, 11, 0.4);">
              <i class="fas fa-phone-alt"></i> Call: 08409531615
            </a>
            <a href="https://api.whatsapp.com/send?phone=918409531615&text=Hello%20Shree%20Ashirwad,%20I%20need%20packers%20and%20movers%20services%20in%20Hazaribagh" target="_blank" class="btn" style="background: rgba(37, 211, 102, 0.15); color: #25d366; border: 1.5px solid #25d366; font-weight: 700; padding: 14px 28px; border-radius: 8px; text-decoration: none; display: inline-flex; align-items: center; gap: 8px;">
              <i class="fab fa-whatsapp" style="font-size: 1.2rem;"></i> WhatsApp Quote
            </a>
          </div>

          <!-- Feature Highlights Strip -->
          <div style="display: flex; gap: 20px; flex-wrap: wrap; border-top: 1px solid rgba(255, 255, 255, 0.1); padding-top: 20px;">
            <div style="display: flex; align-items: center; gap: 8px; font-size: 0.9rem; color: #cbd5e1;">
              <i class="fas fa-shield-alt" style="color: #f59e0b;"></i> 100% Transit Insurance
            </div>
            <div style="display: flex; align-items: center; gap: 8px; font-size: 0.9rem; color: #cbd5e1;">
              <i class="fas fa-boxes" style="color: #f59e0b;"></i> 7-Layer Packaging
            </div>
            <div style="display: flex; align-items: center; gap: 8px; font-size: 0.9rem; color: #cbd5e1;">
              <i class="fas fa-file-invoice" style="color: #f59e0b;"></i> IBA Compliant GST Bills
            </div>
          </div>
        </div>

        <!-- Right Hero: Quick Quote Form -->
        <div>
          <div style="background: #101c40; border: 1px solid rgba(245, 158, 11, 0.3); border-radius: 16px; padding: 30px; box-shadow: 0 15px 35px rgba(0,0,0,0.5);">
            <h3 style="font-size: 1.4rem; color: #ffffff; margin-bottom: 5px; font-weight: 700;">Get Instant Moving Quote</h3>
            <p style="font-size: 0.85rem; color: #94a3b8; margin-bottom: 20px;">Guaranteed genuine price with zero hidden fees in Hazaribagh</p>
            
            <form action="<?php echo SITE_URL; ?>request-quote" method="POST" style="display: flex; flex-direction: column; gap: 14px;">
              <input type="hidden" name="source_city" value="Hazaribagh">
              <div>
                <input type="text" name="name" required placeholder="Your Full Name" style="width: 100%; padding: 12px 16px; background: #070d1e; border: 1px solid rgba(255,255,255,0.15); border-radius: 8px; color: #ffffff; font-size: 0.9rem;">
              </div>
              <div>
                <input type="tel" name="phone" required placeholder="Phone Number" style="width: 100%; padding: 12px 16px; background: #070d1e; border: 1px solid rgba(255,255,255,0.15); border-radius: 8px; color: #ffffff; font-size: 0.9rem;">
              </div>
              <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 10px;">
                <input type="text" name="moving_from" value="Hazaribagh" required placeholder="From Location" style="width: 100%; padding: 12px 16px; background: #070d1e; border: 1px solid rgba(255,255,255,0.15); border-radius: 8px; color: #ffffff; font-size: 0.9rem;">
                <input type="text" name="moving_to" required placeholder="To Destination" style="width: 100%; padding: 12px 16px; background: #070d1e; border: 1px solid rgba(255,255,255,0.15); border-radius: 8px; color: #ffffff; font-size: 0.9rem;">
              </div>
              <div>
                <select name="shifting_type" style="width: 100%; padding: 12px 16px; background: #070d1e; border: 1px solid rgba(255,255,255,0.15); border-radius: 8px; color: #ffffff; font-size: 0.9rem;">
                  <option value="1 BHK Shifting">1 BHK Household Shifting</option>
                  <option value="2 BHK Shifting">2 BHK Household Shifting</option>
                  <option value="3 BHK Shifting">3 BHK Household Shifting</option>
                  <option value="4+ BHK / Villa">4+ BHK / Villa Shifting</option>
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

  <!-- Section 2: 4-Card Live Stats Bar -->
  <section class="stats-section" style="padding: 50px 0; background: #070d1e; border-bottom: 1px solid rgba(245, 158, 11, 0.2);">
    <div class="container">
      <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 20px; text-align: center;">
        <div style="padding: 20px; background: rgba(23, 42, 84, 0.5); border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">2,800+</div>
          <div style="font-size: 0.9rem; color: #cbd5e1; margin-top: 5px;">Hazaribagh Relocations Executed</div>
        </div>
        <div style="padding: 20px; background: rgba(23, 42, 84, 0.5); border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">NH-33 / NH-19</div>
          <div style="font-size: 0.9rem; color: #cbd5e1; margin-top: 5px;">Express Highway Logistics Hub</div>
        </div>
        <div style="padding: 20px; background: rgba(23, 42, 84, 0.5); border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">100%</div>
          <div style="font-size: 0.9rem; color: #cbd5e1; margin-top: 5px;">Safe 7-Layer Protection</div>
        </div>
        <div style="padding: 20px; background: rgba(23, 42, 84, 0.5); border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">IBA Approved</div>
          <div style="font-size: 0.9rem; color: #cbd5e1; margin-top: 5px;">Government &amp; Corporate Claims</div>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 3: Technical Overview & Corridor Logistics -->
  <section style="padding: 70px 0; background: #0b132b; color: #e2e8f0; line-height: 1.8;">
    <div class="container" style="max-width: 950px;">
      
      <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Hazaribagh City Logistics Overview</span>
      <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin: 10px 0 20px 0;">
        Comprehensive Shifting Services Across <span style="color: #f59e0b;">Hazaribagh District</span>
      </h2>

      <p style="font-size: 1.05rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 20px;">
        Hazaribagh, known for its scenic plateau landscape, educational institutions, healthcare complexes, and strategic position along NH-33 (now NH-22) connecting Ranchi and Patna, experiences continuous relocation movement. Housing prestigious institutions like Vinoba Bhave University (VBU), St. Columba's College, BSF Training Centre &amp; School (Meru Camp), Police Training Academy, and NTPC Barkagaon coal mining operations, Hazaribagh sees regular transfers of government officers, professors, police personnel, and mining executives.
      </p>

      <p style="font-size: 1.05rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 20px;">
        As dependable <strong>packers and movers in hazaribagh</strong>, our dedicated team at Shree Ashirwad Packers and Movers handles local household shifting across Korrah, Matwari, Canary Hill Road, Boddom Bazar, Demotand, Babu Gaon, Hurhuru, Lakhe, Pelawal, Okni, Nawabganj, and Barhi. Choosing licensed <strong>packers movers in hazaribagh</strong> guarantees that your costly home furnishings, electronic gadgets, and automobiles receive professional handling without moving-day surprises. Whether moving locally within the city or transferring long-distance across national corridors, our certified crews deliver zero-damage packing, secure loading, and complete IBA GST invoice documentation.
      </p>

      <p style="font-size: 1.05rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 20px;">
        Families seeking experienced <strong>packers and movers hazaribagh</strong> rely on our time-tested workflow. By combining heavy-duty cushioning materials with trained packing crews, we eliminate transit friction and prevent damage during bumpy highway journeys. When clients compare local options, they consistently rank our services as the <strong>best packers and movers in hazaribagh</strong> for reliability, punctuality, and comprehensive financial protection.
      </p>

      <!-- 6 Cards Grid (3x2 Layout) -->
      <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px; margin: 35px 0;">
        
        <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px; box-shadow: 0 10px 25px rgba(0,0,0,0.3);">
          <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;"><i class="fas fa-truck"></i></div>
          <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">NH-33 / NH-19 Highway Corridor</h3>
          <p style="font-size: 0.9rem; color: #cbd5e1; line-height: 1.6; margin: 0;">
            Strategic fleet dispatch along NH-33 connecting Hazaribagh to Ranchi, Ramgarh, Barhi junction, and Kolkata-Delhi GT Road NH-19.
          </p>
        </div>

        <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px; box-shadow: 0 10px 25px rgba(0,0,0,0.3);">
          <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;"><i class="fas fa-city"></i></div>
          <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">Full Hazaribagh Coverage</h3>
          <p style="font-size: 0.9rem; color: #cbd5e1; line-height: 1.6; margin: 0;">
            Doorstep shifting in Korrah, Matwari, Canary Hill Road, Boddom Bazar, Demotand, Barhi, Chauparan, and VBU Campus area.
          </p>
        </div>

        <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px; box-shadow: 0 10px 25px rgba(0,0,0,0.3);">
          <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;"><i class="fas fa-shield-alt"></i></div>
          <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">IBA Approved Official GST Bills</h3>
          <p style="font-size: 0.9rem; color: #cbd5e1; line-height: 1.6; margin: 0;">
            100% valid IBA-compliant GST invoices, Lorry Receipts (LR), and itemized inventory lists accepted by BSF, Police, Railways, and Corporate audits.
          </p>
        </div>

        <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px; box-shadow: 0 10px 25px rgba(0,0,0,0.3);">
          <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;"><i class="fas fa-box"></i></div>
          <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">7-Layer Multi-Guard Packaging</h3>
          <p style="font-size: 0.9rem; color: #cbd5e1; line-height: 1.6; margin: 0;">
            High-density bubble wraps, 5-ply corrugated cardboard, thermocol edge protectors, shrink film, and custom wooden crating.
          </p>
        </div>

        <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px; box-shadow: 0 10px 25px rgba(0,0,0,0.3);">
          <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;"><i class="fas fa-car"></i></div>
          <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">Enclosed Car &amp; Bike Carriers</h3>
          <p style="font-size: 0.9rem; color: #cbd5e1; line-height: 1.6; margin: 0;">
            Hydraulic enclosed vehicle carriers with wheel chocks and safety harness belts for damage-free automobile transit across India.
          </p>
        </div>

        <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px; box-shadow: 0 10px 25px rgba(0,0,0,0.3);">
          <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;"><i class="fas fa-warehouse"></i></div>
          <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">Short &amp; Long-Term Warehousing</h3>
          <p style="font-size: 0.9rem; color: #cbd5e1; line-height: 1.6; margin: 0;">
            Secure, moisture-controlled, pest-treated storage bays with 24/7 CCTV surveillance and round-the-clock physical security guards.
          </p>
        </div>

      </div>

    </div>
  </section>

  <!-- Section 4: 7 Pillars of Shifting Verification -->
  <section style="padding: 70px 0; background: #070d1e; color: #ffffff;">
    <div class="container" style="max-width: 950px;">
      
      <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Quality Assurance Standard</span>
      <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin: 10px 0 25px 0;">
        7 Pillars of Relocation Verification in <span style="color: #f59e0b;">Hazaribagh</span>
      </h2>

      <p style="font-size: 1.05rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 30px;">
        To shield homeowners and corporate transferees from unlicensed fly-by-night operators active along NH-33 / NH-19, verified <strong>packers movers in hazaribagh</strong> enforce a mandatory 4-protocol safety framework before every dispatch:
      </p>

      <div style="display: grid; grid-template-columns: 1fr; gap: 16px;">
        
        <div style="display: flex; gap: 18px; background: #101c40; padding: 20px; border-radius: 12px; border-left: 4px solid #f59e0b;">
          <div style="font-size: 1.5rem; color: #f59e0b; font-weight: 800;">01</div>
          <div>
            <h4 style="font-size: 1.15rem; color: #ffffff; margin-bottom: 5px;">Government Registered GST &amp; IBA Compliance</h4>
            <p style="font-size: 0.95rem; color: #cbd5e1; line-height: 1.6; margin: 0;">
              Every consignment is backed by genuine GST invoices, verifiable Lorry Receipts (LR), and IBA-format packing bills necessary for civil servants, bank executives, and defense personnel.
            </p>
          </div>
        </div>

        <div style="display: flex; gap: 18px; background: #101c40; padding: 20px; border-radius: 12px; border-left: 4px solid #f59e0b;">
          <div style="font-size: 1.5rem; color: #f59e0b; font-weight: 800;">02</div>
          <div>
            <h4 style="font-size: 1.15rem; color: #ffffff; margin-bottom: 5px;">All-Weather Covered Container Fleet</h4>
            <p style="font-size: 0.95rem; color: #cbd5e1; line-height: 1.6; margin: 0;">
              Unlike local open-body trucks covered with loose tarpaulins, our entire moving fleet consists of sealed, lockable container trucks that keep household effects dry during heavy monsoon downpours.
            </p>
          </div>
        </div>

        <div style="display: flex; gap: 18px; background: #101c40; padding: 20px; border-radius: 12px; border-left: 4px solid #f59e0b;">
          <div style="font-size: 1.5rem; color: #f59e0b; font-weight: 800;">03</div>
          <div>
            <h4 style="font-size: 1.15rem; color: #ffffff; margin-bottom: 5px;">Police-Verified &amp; Full-Time Crew Members</h4>
            <p style="font-size: 0.95rem; color: #cbd5e1; line-height: 1.6; margin: 0;">
              We never recruit ad-hoc daily wage laborers from street corners. Our packing teams are permanent employees who undergo thorough background verification, identity checks, and customer etiquette training.
            </p>
          </div>
        </div>

        <div style="display: flex; gap: 18px; background: #101c40; padding: 20px; border-radius: 12px; border-left: 4px solid #f59e0b;">
          <div style="font-size: 1.5rem; color: #f59e0b; font-weight: 800;">04</div>
          <div>
            <h4 style="font-size: 1.15rem; color: #ffffff; margin-bottom: 5px;">Pre-Move Written Price Guarantee</h4>
            <p style="font-size: 0.95rem; color: #cbd5e1; line-height: 1.6; margin: 0;">
              We provide itemized, written quotes before commencing work. The price agreed upon is 100% final, eliminating hidden surcharges for stairs, tolls, or packaging materials on moving day.
            </p>
          </div>
        </div>

      </div>

    </div>
  </section>

  <!-- Section 5: Transparent Local & Domestic Pricing Matrix -->
  <section style="padding: 70px 0; background: #0b132b; color: #ffffff;">
    <div class="container" style="max-width: 950px;">
      
      <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Transparent Tariff Matrix</span>
      <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin: 10px 0 20px 0;">
        Estimated <span style="color: #f59e0b;">Packers and Movers in Hazaribagh Charges</span>
      </h2>

      <p style="font-size: 1.05rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 25px;">
        Transparent estimates protect customers against unexpected moving charges. As licensed <strong>packers movers in hazaribagh</strong>, below is an estimated cost breakdown based on apartment configuration and relocation distance:
      </p>

      <div style="overflow-x: auto; background: #101c40; border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.25); box-shadow: 0 10px 30px rgba(0,0,0,0.3); margin-bottom: 30px;">
        <table style="width: 100%; border-collapse: collapse; text-align: left; font-size: 0.95rem;">
          <thead>
            <tr style="background: #172a54; border-bottom: 2px solid rgba(245, 158, 11, 0.4);">
              <th style="padding: 16px 20px; color: #f59e0b; font-weight: 700;">Shifting Type</th>
              <th style="padding: 16px 20px; color: #f59e0b; font-weight: 700;">Local Hazaribagh (Within 25 km)</th>
              <th style="padding: 16px 20px; color: #f59e0b; font-weight: 700;">Intercity Shifting (Up to 350 km)</th>
              <th style="padding: 16px 20px; color: #f59e0b; font-weight: 700;">Long Distance (Over 700 km)</th>
            </tr>
          </thead>
          <tbody>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.06);">
              <td style="padding: 14px 20px; font-weight: 600; color: #ffffff;">1 BHK Complete Household</td>
              <td style="padding: 14px 20px; color: #cbd5e1;">₹3,000 – ₹5,500</td>
              <td style="padding: 14px 20px; color: #cbd5e1;">₹8,500 – ₹15,000</td>
              <td style="padding: 14px 20px; color: #cbd5e1;">₹16,000 – ₹24,000</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.06); background: rgba(255,255,255,0.02);">
              <td style="padding: 14px 20px; font-weight: 600; color: #ffffff;">2 BHK Complete Household</td>
              <td style="padding: 14px 20px; color: #cbd5e1;">₹5,500 – ₹9,500</td>
              <td style="padding: 14px 20px; color: #cbd5e1;">₹13,500 – ₹22,000</td>
              <td style="padding: 14px 20px; color: #cbd5e1;">₹24,000 – ₹35,000</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.06);">
              <td style="padding: 14px 20px; font-weight: 600; color: #ffffff;">3 BHK Complete Household</td>
              <td style="padding: 14px 20px; color: #cbd5e1;">₹9,500 – ₹15,000</td>
              <td style="padding: 14px 20px; color: #cbd5e1;">₹18,000 – ₹30,000</td>
              <td style="padding: 14px 20px; color: #cbd5e1;">₹32,000 – ₹48,000</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.06); background: rgba(255,255,255,0.02);">
              <td style="padding: 14px 20px; font-weight: 600; color: #ffffff;">Two-Wheeler Transport</td>
              <td style="padding: 14px 20px; color: #cbd5e1;">₹1,200 – ₹2,200</td>
              <td style="padding: 14px 20px; color: #cbd5e1;">₹2,800 – ₹5,000</td>
              <td style="padding: 14px 20px; color: #cbd5e1;">₹5,500 – ₹9,000</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.06);">
              <td style="padding: 14px 20px; font-weight: 600; color: #ffffff;">Four-Wheeler / Car Carrier</td>
              <td style="padding: 14px 20px; color: #cbd5e1;">₹2,500 – ₹4,500</td>
              <td style="padding: 14px 20px; color: #cbd5e1;">₹7,500 – ₹13,000</td>
              <td style="padding: 14px 20px; color: #cbd5e1;">₹14,000 – ₹22,000</td>
            </tr>
            <tr>
              <td style="padding: 14px 20px; font-weight: 600; color: #ffffff;">Dedicated Warehousing</td>
              <td style="padding: 14px 20px; color: #cbd5e1;">₹120 / day</td>
              <td style="padding: 14px 20px; color: #cbd5e1;">₹2,500 / month</td>
              <td style="padding: 14px 20px; color: #cbd5e1;">Custom Enterprise Rates</td>
            </tr>
          </tbody>
        </table>
      </div>

      <p style="font-size: 0.85rem; color: #94a3b8; font-style: italic;">
        *Note: Final prices depend on goods volume, floor levels, lift availability, elevator dimensions, seasonal dates, and specialized wooden crating requirements.
      </p>

    </div>
  </section>

  <!-- Section 6: Comprehensive Shifting Protocols (Room-by-Room & Vehicle Moving) -->
  <section style="padding: 70px 0; background: #070d1e; color: #ffffff;">
    <div class="container" style="max-width: 1050px;">
      
      <div style="text-align: center; margin-bottom: 45px;">
        <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Scientific Packing Methods</span>
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin-top: 10px;">
          Room-by-Room Specialized Shifting Framework
        </h2>
        <p style="color: #cbd5e1; max-width: 800px; margin: 12px auto 0 auto; font-size: 1rem; line-height: 1.8;">
          Different household possessions demand distinct protective treatments. As the <strong>best packers and movers in hazaribagh</strong>, we implement specialized safety methods for every category:
        </p>
      </div>

      <!-- Room-by-Room Grid with Real Image -->
      <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 30px; margin-bottom: 50px; align-items: center;">
        <div>
          <img src="<?php echo SITE_URL; ?>assets/images/services/household-furniture-bubble-wrap.jpeg" alt="Household shifting packing in Hazaribagh" title="7-Layer Household Packaging Hazaribagh" style="width: 100%; height: 320px; object-fit: cover; border-radius: 14px; border: 1.5px solid rgba(245,158,11,0.3); box-shadow: 0 10px 25px rgba(0,0,0,0.4);" loading="lazy">
        </div>
        <div>
          <h3 style="font-size: 1.4rem; color: #f59e0b; font-weight: 700; margin-bottom: 12px;">Living &amp; Bedroom Furniture Protection</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; line-height: 1.7; margin-bottom: 14px;">
            Bulky king-size double beds, modular wardrobes, and multi-tier shoe cabinets are carefully disassembled by trained carpenters. Every panel is wrapped in 3-layer bubble wrap followed by thick corrugated sheets to prevent scratch damage.
          </p>
          <ul style="padding-left: 20px; margin: 0; line-height: 1.8; color: #cbd5e1; font-size: 0.92rem;">
            <li><strong>Hardware Labeling:</strong> Bolts, brackets, and screws are sealed in labeled ziplock pouches taped directly to furniture frames.</li>
            <li><strong>Sofa &amp; Mattress Wrap:</strong> Upholstery is encased in heavy stretch film and thick quilted blankets against dust and dampness.</li>
            <li><strong>Glass Tabletops &amp; Mirrors:</strong> Sealed in thermocol edge protectors and packed inside customized wooden crates.</li>
          </ul>
        </div>
      </div>

      <!-- Vehicle Transport Cards with Real Images -->
      <div style="margin-top: 50px;">
        <h3 style="font-size: 1.8rem; font-weight: 800; text-align: center; margin-bottom: 35px; color: #ffffff;">
          Dedicated Automobile Relocation from Hazaribagh
        </h3>

        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 30px;">
          
          <!-- Car Carrier Card -->
          <div style="background: #101c40; border-radius: 14px; border: 1px solid rgba(245, 158, 11, 0.25); overflow: hidden;">
            <img src="<?php echo SITE_URL; ?>assets/images/services/enclosed-car-carrier-trailer-loading.jpeg" alt="Car transportation carrier in Hazaribagh" title="Car Carrier Services Hazaribagh" style="width: 100%; height: 220px; object-fit: cover;" loading="lazy">
            <div style="padding: 22px;">
              <h4 style="font-size: 1.25rem; color: #f59e0b; font-weight: 700; margin-bottom: 10px;">Car Transportation in Enclosed Trailers</h4>
              <p style="font-size: 0.9rem; color: #cbd5e1; line-height: 1.7; margin-bottom: 12px;">
                We transport hatchbacks, sedans, and luxury SUVs using all-weather enclosed hydraulic car carriers. Cars are anchored using 4-point wheel chocks and high-tensile safety belts to eliminate movement during highway transit.
              </p>
              <span style="font-size: 0.85rem; color: #94a3b8;"><i class="fas fa-check-circle" style="color: #10b981;"></i> Pre-transit condition photo report &amp; live GPS tracking.</span>
            </div>
          </div>

          <!-- Bike Transport Card -->
          <div style="background: #101c40; border-radius: 14px; border: 1px solid rgba(245, 158, 11, 0.25); overflow: hidden;">
            <img src="<?php echo SITE_URL; ?>assets/images/services/bike-packing-shree-ashirwad.jpeg" alt="Bike packing and shifting in Hazaribagh" title="Bike Relocation Services Hazaribagh" style="width: 100%; height: 220px; object-fit: cover;" loading="lazy">
            <div style="padding: 22px;">
              <h4 style="font-size: 1.25rem; color: #f59e0b; font-weight: 700; margin-bottom: 10px;">Safe Two-Wheeler &amp; Bike Shipping</h4>
              <p style="font-size: 0.9rem; color: #cbd5e1; line-height: 1.7; margin-bottom: 12px;">
                When handing over your motorcycle to dependable <strong>packers and movers hazaribagh</strong>, our enclosed carriers ensure zero transit friction. We pack mirrors, fuel tanks, and silencers in bubble wrap, corrugated sheets, and stretch wrap.
              </p>
              <span style="font-size: 0.85rem; color: #94a3b8;"><i class="fas fa-check-circle" style="color: #10b981;"></i> Wooden crating available for premium sports bikes.</span>
            </div>
          </div>

        </div>
      </div>

      <!-- Step-by-Step Moving Process -->
      <div style="margin-top: 60px;">
        <h3 style="font-size: 1.8rem; font-weight: 800; text-align: center; margin-bottom: 35px; color: #ffffff;">
          Our 5-Stage Systematic Relocation Process
        </h3>

        <div style="display: flex; flex-direction: column; gap: 18px;">
          
          <div style="display: flex; gap: 20px; background: #101c40; padding: 24px; border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
            <div style="font-size: 2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">01</div>
            <div>
              <h4 style="font-size: 1.2rem; color: #ffffff; margin-bottom: 6px;">Pre-Move Survey &amp; Clear Written Quote</h4>
              <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.6;">
                Our shifting consultant conducts a physical survey or video walkthrough to evaluate goods volume, assess narrow staircases, and supply a binding written quotation.
              </p>
            </div>
          </div>

          <div style="display: flex; gap: 20px; background: #101c40; padding: 24px; border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
            <div style="font-size: 2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">02</div>
            <div>
              <h4 style="font-size: 1.2rem; color: #ffffff; margin-bottom: 6px;">Professional Furniture Disassembly</h4>
              <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.6;">
                Trained technicians dismantle modular wardrobes, double cots, and TV mounts with electric screwdrivers, bagging fasteners in tagged pouches.
              </p>
            </div>
          </div>

          <div style="display: flex; gap: 20px; background: #101c40; padding: 24px; border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
            <div style="font-size: 2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">03</div>
            <div>
              <h4 style="font-size: 1.2rem; color: #ffffff; margin-bottom: 6px;">7-Layer On-Site Packaging &amp; Labeling</h4>
              <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.6;">
                Our uniformed packaging experts arrive at your home with air-bubble wrap, 5-ply corrugated sheets, stretch wrap, and custom wooden crating for delicate items.
              </p>
            </div>
          </div>

          <div style="display: flex; gap: 20px; background: #101c40; padding: 24px; border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
            <div style="font-size: 2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">04</div>
            <div>
              <h4 style="font-size: 1.2rem; color: #ffffff; margin-bottom: 6px;">Container Loading &amp; GPS Tracked Transit</h4>
              <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.6;">
                Goods are loaded systematically into sealed container trucks, anchored with safety belts, and tracked via live GPS hardware during transit.
              </p>
            </div>
          </div>

          <div style="display: flex; gap: 20px; background: #101c40; padding: 24px; border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
            <div style="font-size: 2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">05</div>
            <div>
              <h4 style="font-size: 1.2rem; color: #ffffff; margin-bottom: 6px;">Door Delivery, Unpacking &amp; Furniture Setup</h4>
              <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.6;">
                Upon reaching your destination, our team unloads, unboxes all cartons, places furniture in designated rooms, and reassembles beds and wardrobes.
              </p>
            </div>
          </div>

        </div>

      </div>

    </div>
  </section>

  <!-- Section 6B: Secure Warehousing & Extended Storage (with Real Image) -->
  <section style="padding: 70px 0; background: #0b132b; color: #ffffff;">
    <div class="container" style="max-width: 1050px;">
      <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 40px; align-items: center;">
        <div>
          <span style="color: #f59e0b; font-weight: 700; text-transform: uppercase; font-size: 0.85rem; letter-spacing: 1px;">Storage Solutions</span>
          <h2 style="font-size: 2.1rem; font-weight: 800; margin-top: 8px; margin-bottom: 18px;">
            Secure Warehousing &amp; Short/Long-Term Storage
          </h2>
          <p style="color: #cbd5e1; font-size: 1rem; line-height: 1.8; margin-bottom: 15px;">
            Experiencing a possession gap between vacating your old home and receiving keys to your new house in Hazaribagh? Shree Ashirwad maintains clean, fire-safe, and pest-controlled storage facilities:
          </p>
          <ul style="padding-left: 20px; margin: 0; line-height: 1.85; color: #cbd5e1; font-size: 0.95rem;">
            <li><strong>24/7 CCTV &amp; Physical Security:</strong> Round-the-clock surveillance and on-site guards protect your valuable consignments.</li>
            <li><strong>Moisture &amp; Termite Controlled Bays:</strong> Wooden and upholstered items are kept elevated on heavy plastic pallets to avoid ground dampness.</li>
            <li><strong>Flexible Rental Tenures:</strong> Weekly, monthly, or annual warehouse leases suited for relocating faculty, defense personnel, and business archives.</li>
          </ul>
        </div>
        <div>
          <img src="<?php echo SITE_URL; ?>assets/images/services/warehouse-storage-bays-security.jpeg" alt="Warehouse storage in Hazaribagh" title="Warehouse Storage Facilities Hazaribagh" style="width: 100%; height: 260px; object-fit: cover; border-radius: 14px; border: 1.5px solid rgba(245,158,11,0.3);" loading="lazy">
        </div>
      </div>
    </div>
  </section>

  <!-- Section 6C: Corporate & Institutional Relocation (with Real Image) -->
  <section style="padding: 70px 0; background: #070d1e; color: #ffffff;">
    <div class="container" style="max-width: 1050px;">
      <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 40px; align-items: center;">
        <div>
          <img src="<?php echo SITE_URL; ?>assets/images/services/corporate-it-server-packaging.jpeg" alt="Corporate office shifting in Hazaribagh" title="Office Moving Services Hazaribagh" style="width: 100%; height: 260px; object-fit: cover; border-radius: 14px; border: 1.5px solid rgba(245,158,11,0.3);" loading="lazy">
        </div>
        <div>
          <span style="color: #f59e0b; font-weight: 700; text-transform: uppercase; font-size: 0.85rem; letter-spacing: 1px;">Enterprise Logistics</span>
          <h2 style="font-size: 2.1rem; font-weight: 800; margin-top: 8px; margin-bottom: 18px;">
            Corporate Shifting for Institutes &amp; PSU Personnel
          </h2>
          <p style="color: #cbd5e1; font-size: 1rem; line-height: 1.8; margin-bottom: 15px;">
            Relocating administrative departments, university faculty at Vinoba Bhave University, officers at BSF Meru Camp, or engineering teams at NTPC Barkagaon requires zero disruption:
          </p>
          <ul style="padding-left: 20px; margin: 0; line-height: 1.85; color: #cbd5e1; font-size: 0.95rem;">
            <li><strong>Weekend &amp; Night Moves:</strong> Office operations shift seamlessly over weekends, guaranteeing your workplace restarts on Monday without loss of billing hours.</li>
            <li><strong>IT Hardware &amp; Server Packaging:</strong> Antistatic bubble wraps and numbered crates protect computer towers, switches, and telecom arrays.</li>
            <li><strong>Confidential Document Archive Indexing:</strong> Tamper-evident seals on document cartons protect sensitive academic and administrative records.</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 6D: Strategic Logistics Corridors & Hazaribagh Moving Protocols -->
  <section style="padding: 70px 0; background: #0b132b; color: #ffffff;">
    <div class="container" style="max-width: 1050px;">
      <div style="text-align: center; margin-bottom: 40px;">
        <span style="color: #f59e0b; font-weight: 700; text-transform: uppercase; font-size: 0.85rem; letter-spacing: 1px;">Corridor Expertise</span>
        <h2 style="font-size: 2.2rem; font-weight: 800; margin-top: 8px;">
          Comprehensive Relocation Strategies Across Hazaribagh Highway Belts
        </h2>
        <p style="color: #cbd5e1; max-width: 820px; margin: 12px auto 0 auto; font-size: 1rem; line-height: 1.8;">
          Moving across Hazaribagh requires precise route intelligence due to hilly plateau terrain, Cantonment entry clearances, and heavy freight traffic along National Highways. As premier <strong>packers and movers hazaribagh</strong>, our fleet coordinates transit schedules to eliminate delays.
        </p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 24px;">
        <div style="background: #101c40; padding: 24px; border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h3 style="font-size: 1.15rem; color: #f59e0b; font-weight: 700; margin-bottom: 10px;">NH-33 Ranchi Corridor</h3>
          <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.7; margin: 0;">
            Connecting Hazaribagh with Ramgarh and Ranchi via the scenic Chutupalu Ghati stretch. Verified <strong>packers movers in hazaribagh</strong> deploy heavy-duty container carriers equipped with exhaust brake retarding systems and air-ride suspensions to protect delicate goods along hill descents.
          </p>
        </div>

        <div style="background: #101c40; padding: 24px; border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h3 style="font-size: 1.15rem; color: #f59e0b; font-weight: 700; margin-bottom: 10px;">Barhi Junction &amp; NH-19 (GT Road)</h3>
          <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.7; margin: 0;">
            Barhi is Jharkhand's pivotal northern gateway linking the Grand Trunk Road to Kolkata, Delhi, and Patna. Our specialized team facilitates priority interstate transshipment with 100% genuine E-way bills, toll fastag clearances, and GPS tracking updates every hour.
          </p>
        </div>

        <div style="background: #101c40; padding: 24px; border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h3 style="font-size: 1.15rem; color: #f59e0b; font-weight: 700; margin-bottom: 10px;">Barkagaon &amp; NTPC Industrial Belt</h3>
          <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.7; margin: 0;">
            Catering to heavy industry professionals, engineers, and mining personnel around Barkagaon, Keredari, and Tandwa coal blocks. Choosing the <strong>best packers and movers in hazaribagh</strong> guarantees customized machinery relocation and secure containerized home moving.
          </p>
        </div>

        <div style="background: #101c40; padding: 24px; border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h3 style="font-size: 1.15rem; color: #f59e0b; font-weight: 700; margin-bottom: 10px;">Demotand Freight Terminal Access</h3>
          <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.7; margin: 0;">
            Our Demotand staging depot provides overnight parking, heavy loading machinery, and direct access to South Chotanagpur freight corridors. All containerized trucks undergo thorough mechanical inspection before long-haul dispatch.
          </p>
        </div>

        <div style="background: #101c40; padding: 24px; border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h3 style="font-size: 1.15rem; color: #f59e0b; font-weight: 700; margin-bottom: 10px;">VBU &amp; Cantonment Fast-Track Moves</h3>
          <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.7; margin: 0;">
            Specialized expedited shifting for professors at Vinoba Bhave University, Meru BSF officers, and medical teams at Sheikh Bhikhari Medical College. We execute zero-delay weekend packing and seamless unloading at new residences.
          </p>
        </div>

        <div style="background: #101c40; padding: 24px; border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h3 style="font-size: 1.15rem; color: #f59e0b; font-weight: 700; margin-bottom: 10px;">Monsoon Weatherproof Shielding</h3>
          <p style="font-size: 0.92rem; color: #cbd5e1; line-height: 1.7; margin: 0;">
            Hazaribagh's hilly plateau receives intense seasonal rainfall. We fortify all consignments with waterproof polyethylene sheeting, silica gel moisture absorbers, and sealed steel container roofs preventing water seepage.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 7: Corporate Claims & IBA Approved Billing Standards -->
  <section style="padding: 70px 0; background: #070d1e; color: #ffffff;">
    <div class="container" style="max-width: 950px;">
      
      <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Employer Claims Documentation</span>
      <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin: 10px 0 20px 0;">
        100% Valid IBA-Format Bills for Government &amp; PSU Transfers
      </h2>

      <p style="font-size: 1.05rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 25px;">
        Government employees, defense personnel from BSF Meru, Jharkhand Police officials, faculty from Vinoba Bhave University, and bank managers from SBI, PNB, and Bank of India receive full relocation claim reimbursement:
      </p>

      <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px;">
        <div style="background: #101c40; padding: 20px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <div style="color: #f59e0b; font-size: 1.5rem; margin-bottom: 8px;"><i class="fas fa-file-invoice-dollar"></i></div>
          <h4 style="font-size: 1.1rem; color: #ffffff; margin-bottom: 6px;">GST Invoice &amp; Money Receipt</h4>
          <p style="font-size: 0.88rem; color: #cbd5e1; line-height: 1.6; margin: 0;">Official GST-compliant invoice with clear SAC codes and stamped payment receipt.</p>
        </div>
        <div style="background: #101c40; padding: 20px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <div style="color: #f59e0b; font-size: 1.5rem; margin-bottom: 8px;"><i class="fas fa-truck-moving"></i></div>
          <h4 style="font-size: 1.1rem; color: #ffffff; margin-bottom: 6px;">Consignment Note (LR Copy)</h4>
          <p style="font-size: 0.88rem; color: #cbd5e1; line-height: 1.6; margin: 0;">Numbered Lorry Receipt verifying container truck registration and driver details.</p>
        </div>
        <div style="background: #101c40; padding: 20px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <div style="color: #f59e0b; font-size: 1.5rem; margin-bottom: 8px;"><i class="fas fa-clipboard-list"></i></div>
          <h4 style="font-size: 1.1rem; color: #ffffff; margin-bottom: 6px;">Itemized Packing Inventory</h4>
          <p style="font-size: 0.88rem; color: #cbd5e1; line-height: 1.6; margin: 0;">Serialized inventory breakdown with condition status signed by origin supervisor.</p>
        </div>
      </div>

    </div>
  </section>

  <!-- Section 7B: Comparison Table - Shree Ashirwad vs Unorganized Transporters -->
  <section style="padding: 70px 0; background: #0b132b; color: #ffffff;">
    <div class="container" style="max-width: 950px;">
      <div style="text-align: center; margin-bottom: 40px;">
        <span style="color: #f59e0b; font-weight: 700; text-transform: uppercase; font-size: 0.85rem; letter-spacing: 1px;">Why We Lead</span>
        <h2 style="font-size: 2.2rem; font-weight: 800; margin-top: 8px;">
          Shree Ashirwad vs. Unorganized Local Transporters
        </h2>
      </div>

      <div style="overflow-x: auto; background: #101c40; border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.25);">
        <table style="width: 100%; border-collapse: collapse; text-align: left; font-size: 0.95rem;">
          <thead>
            <tr style="background: #172a54; border-bottom: 2px solid rgba(245, 158, 11, 0.4);">
              <th style="padding: 16px 20px; color: #f59e0b;">Relocation Feature</th>
              <th style="padding: 16px 20px; color: #10b981;">Shree Ashirwad Packers</th>
              <th style="padding: 16px 20px; color: #f43f5e;">Unverified Local Transporters</th>
            </tr>
          </thead>
          <tbody>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.06);">
              <td style="padding: 14px 20px; font-weight: 700; color: #ffffff;">Pricing Model</td>
              <td style="padding: 14px 20px; color: #10b981; font-weight: 600;">&#10003; 100% Fixed, transparent binding quote</td>
              <td style="padding: 14px 20px; color: #f43f5e;">&#10007; Low initial quote, hidden surcharges on moving day</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.06); background: rgba(255,255,255,0.02);">
              <td style="padding: 14px 20px; font-weight: 700; color: #ffffff;">Packaging Standard</td>
              <td style="padding: 14px 20px; color: #10b981; font-weight: 600;">&#10003; 7-layer defense (bubble wrap, corrugated sheets, stretch wrap)</td>
              <td style="padding: 14px 20px; color: #f43f5e;">&#10007; Rough blankets, newspapers, discarded cartons</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.06);">
              <td style="padding: 14px 20px; font-weight: 700; color: #ffffff;">Transit Security</td>
              <td style="padding: 14px 20px; color: #10b981; font-weight: 600;">&#10003; Weatherproof all-steel enclosed container trucks</td>
              <td style="padding: 14px 20px; color: #f43f5e;">&#10007; Open tarpaulin trucks vulnerable to rain and dust</td>
            </tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.06); background: rgba(255,255,255,0.02);">
              <td style="padding: 14px 20px; font-weight: 700; color: #ffffff;">Transit Insurance</td>
              <td style="padding: 14px 20px; color: #10b981; font-weight: 600;">&#10003; 100% full-value declared marine transit policy</td>
              <td style="padding: 14px 20px; color: #f43f5e;">&#10007; No insurance; total customer risk</td>
            </tr>
            <tr>
              <td style="padding: 14px 20px; font-weight: 700; color: #ffffff;">Official Compliance</td>
              <td style="padding: 14px 20px; color: #10b981; font-weight: 600;">&#10003; IBA-compliant GST invoice for government &amp; bank claims</td>
              <td style="padding: 14px 20px; color: #f43f5e;">&#10007; Hand-written slips rejected by employer HR</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </section>

  <!-- Section 7C: Customer Testimonials & Interactive Map -->
  <section style="padding: 70px 0; background: #070d1e; color: #ffffff;">
    <div class="container" style="max-width: 1050px;">
      <div style="text-align: center; margin-bottom: 45px;">
        <span style="color: #f59e0b; font-weight: 700; text-transform: uppercase; font-size: 0.85rem; letter-spacing: 1px;">Customer Testimonials</span>
        <h2 style="font-size: 2.2rem; font-weight: 800; margin-top: 8px;">
          What Hazaribagh Residents Say About Our Movers
        </h2>
        <p style="color: #cbd5e1; max-width: 750px; margin: 12px auto 0 auto; font-size: 1rem; line-height: 1.7;">
          Genuine feedback from families, university staff, and government transferees across Hazaribagh:
        </p>
      </div>

      <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 24px; margin-bottom: 40px;">
        <div style="background: #172a54; padding: 24px; border-radius: 12px; border: 1px solid rgba(245,158,11,0.25);">
          <div style="color: #f59e0b; font-size: 1rem; margin-bottom: 8px;"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
          <p style="color: #cbd5e1; font-size: 0.92rem; line-height: 1.7; margin-bottom: 12px;">
            "Relocated our 3BHK flat from Korrah to Ranchi. Their team handled our heavy teak dining table and temple shrine with supreme care. Truly top-tier movers in Hazaribagh!"
          </p>
          <strong style="color: #ffffff; font-size: 0.95rem;">— Prof. Rameshwar Prasad, VBU Faculty</strong>
        </div>

        <div style="background: #172a54; padding: 24px; border-radius: 12px; border: 1px solid rgba(245,158,11,0.25);">
          <div style="color: #f59e0b; font-size: 1rem; margin-bottom: 8px;"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
          <p style="color: #cbd5e1; font-size: 0.92rem; line-height: 1.7; margin-bottom: 12px;">
            "Moved from BSF Meru Camp to Delhi. All IBA documentation, bilty, and GST invoices were provided immediately, making my government claim reimbursement 100% hassle-free."
          </p>
          <strong style="color: #ffffff; font-size: 0.95rem;">— Subedar Major D. K. Singh, BSF Meru Camp</strong>
        </div>
      </div>

      <!-- Google Map Embed -->
      <div style="border-radius: 14px; overflow: hidden; border: 1.5px solid rgba(245,158,11,0.3); box-shadow: 0 10px 30px rgba(0,0,0,0.5); height: 320px;">
        <iframe 
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d58385.123456789!2d85.3637!3d23.9925!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f49c0d38100001%3A0x123456789abcdef!2sHazaribagh%2C%20Jharkhand!5e0!3m2!1sen!2sin!4v1711200000000!5m2!1sen!2sin" 
          width="100%" 
          height="100%" 
          style="border:0;" 
          allowfullscreen="" 
          loading="lazy" 
          referrerpolicy="no-referrer-when-downgrade"
          title="Google Map Hazaribagh Shree Ashirwad Packers and Movers">
        </iframe>
      </div>
    </div>
  </section>

  <!-- Section 8: Contextual Link Grid 1 - Hazaribagh Locality Internal Links -->
  <section style="padding: 70px 0; background: #070d1e; color: #ffffff;">
    <div class="container" style="max-width: 900px;">
      
      <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Hazaribagh Locality Network</span>
      <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin: 10px 0 20px 0;">
        Explore Major Localities Served in <span style="color: #f59e0b;">Hazaribagh</span>
      </h2>

      <p style="font-size: 1.05rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 20px;">
        Our operational network extends across all prime residential, commercial, and educational sectors in Hazaribagh:
      </p>

      <!-- Internal Link Grid 1 (4 Contextual Links) -->
      <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 16px; margin-bottom: 30px;">
        <div style="background: #101c40; padding: 18px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #ffffff; font-size: 1.1rem; margin-bottom: 8px;">Korrah Residential Hub</h4>
          <p style="font-size: 0.9rem; color: #94a3b8; margin-bottom: 10px;">Prime residential sector near Hazaribagh bus stand and NH-33.</p>
          <a href="<?php echo SITE_URL; ?>packers-and-movers-korrah-hazaribagh" title="Packers and Movers Korrah →" style="color: #f59e0b; text-decoration: underline; font-weight: 600; font-size: 0.9rem;">
            Packers and Movers Korrah →
          </a>
        </div>

        <div style="background: #101c40; padding: 18px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #ffffff; font-size: 1.1rem; margin-bottom: 8px;">Matwari Area</h4>
          <p style="font-size: 0.9rem; color: #94a3b8; margin-bottom: 10px;">Prominent commercial and residential zone near Gandhi Maidan.</p>
          <a href="<?php echo SITE_URL; ?>packers-and-movers-matwari-hazaribagh" title="Packers and Movers Matwari →" style="color: #f59e0b; text-decoration: underline; font-weight: 600; font-size: 0.9rem;">
            Packers and Movers Matwari →
          </a>
        </div>

        <div style="background: #101c40; padding: 18px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #ffffff; font-size: 1.1rem; margin-bottom: 8px;">Canary Hill Road</h4>
          <p style="font-size: 0.9rem; color: #94a3b8; margin-bottom: 10px;">Upscale colony housing premier academic staff and administrative officers.</p>
          <a href="<?php echo SITE_URL; ?>packers-and-movers-canary-hill-road-hazaribagh" title="Packers and Movers Canary Hill Road →" style="color: #f59e0b; text-decoration: underline; font-weight: 600; font-size: 0.9rem;">
            Packers and Movers Canary Hill Road →
          </a>
        </div>

        <div style="background: #101c40; padding: 18px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #ffffff; font-size: 1.1rem; margin-bottom: 8px;">Boddom Bazar</h4>
          <p style="font-size: 0.9rem; color: #94a3b8; margin-bottom: 10px;">Historic market area and high-density commercial trading center.</p>
          <a href="<?php echo SITE_URL; ?>packers-and-movers-boddom-bazar-hazaribagh" title="Packers and Movers Boddom Bazar →" style="color: #f59e0b; text-decoration: underline; font-weight: 600; font-size: 0.9rem;">
            Packers and Movers Boddom Bazar →
          </a>
        </div>
      </div>

    </div>
  </section>

  <!-- Section 9: Contextual Link Grid 2 - Intercity Relocation Routes -->
  <section style="padding: 70px 0; background: #0b132b; color: #ffffff;">
    <div class="container" style="max-width: 900px;">
      
      <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Long-Distance Moving Routes</span>
      <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin: 10px 0 20px 0;">
        Popular Relocation Routes Originating from <span style="color: #f59e0b;">Hazaribagh</span>
      </h2>

      <p style="font-size: 1.05rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 20px;">
        Scheduled container line-hauls ensure safe delivery along critical intercity trade lanes:
      </p>

      <!-- Internal Link Grid 2 (4 Contextual Links) -->
      <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 16px; margin-bottom: 30px;">
        <div style="background: #172a54; padding: 18px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #ffffff; font-size: 1.1rem; margin-bottom: 8px;">Hazaribagh to Ranchi</h4>
          <p style="font-size: 0.9rem; color: #94a3b8; margin-bottom: 10px;">Daily express corridor via NH-33 Chutupalu valley connecting to the capital.</p>
          <a href="<?php echo SITE_URL; ?>packers-and-movers-hazaribagh-to-ranchi" title="Hazaribagh to Ranchi Shifting Services →" style="color: #f59e0b; text-decoration: underline; font-weight: 600; font-size: 0.9rem;">
            Hazaribagh to Ranchi Shifting Services →
          </a>
        </div>

        <div style="background: #172a54; padding: 18px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #ffffff; font-size: 1.1rem; margin-bottom: 8px;">Hazaribagh to Dhanbad</h4>
          <p style="font-size: 0.9rem; color: #94a3b8; margin-bottom: 10px;">Direct highway container route connecting Hazaribagh to Coal City Dhanbad.</p>
          <a href="<?php echo SITE_URL; ?>packers-and-movers-hazaribagh-to-dhanbad" title="Hazaribagh to Dhanbad Shifting Services →" style="color: #f59e0b; text-decoration: underline; font-weight: 600; font-size: 0.9rem;">
            Hazaribagh to Dhanbad Shifting Services →
          </a>
        </div>

        <div style="background: #172a54; padding: 18px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #ffffff; font-size: 1.1rem; margin-bottom: 8px;">Hazaribagh to Bokaro</h4>
          <p style="font-size: 0.9rem; color: #94a3b8; margin-bottom: 10px;">Inter-district relocation route between Hazaribagh and Bokaro Steel City.</p>
          <a href="<?php echo SITE_URL; ?>packers-and-movers-hazaribagh-to-bokaro" title="Hazaribagh to Bokaro Shifting Services →" style="color: #f59e0b; text-decoration: underline; font-weight: 600; font-size: 0.9rem;">
            Hazaribagh to Bokaro Shifting Services →
          </a>
        </div>

        <div style="background: #172a54; padding: 18px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #ffffff; font-size: 1.1rem; margin-bottom: 8px;">Hazaribagh to Patna</h4>
          <p style="font-size: 0.9rem; color: #94a3b8; margin-bottom: 10px;">Interstate highway route via Barhi and Gaya to Bihar capital Patna.</p>
          <a href="<?php echo SITE_URL; ?>packers-and-movers-hazaribagh-to-patna" title="Hazaribagh to Patna Shifting Services →" style="color: #f59e0b; text-decoration: underline; font-weight: 600; font-size: 0.9rem;">
            Hazaribagh to Patna Shifting Services →
          </a>
        </div>
      </div>

    </div>
  </section>

  <!-- Section 9B: Dedicated Jharkhand Regional Moving Network (Below Side) -->
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

  <!-- Section 10: Frequently Asked Questions (20 Detailed SEO FAQs) -->
  <section style="padding: 70px 0; background: #070d1e; color: #ffffff;">
    <div class="container" style="max-width: 900px;">
      
      <div class="section-header text-center" style="margin-bottom: 45px;">
        <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Got Questions?</span>
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin-top: 10px;">
          Frequently Asked Questions About <span style="color: #f59e0b;">Hazaribagh Shifting</span>
        </h2>
      </div>

      <div style="display: flex; flex-direction: column; gap: 16px;">
        
        <?php foreach ($faq_list as $index => $faq): ?>
        <div style="background: #101c40; padding: 20px 24px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Q<?php echo ($index + 1); ?>: <?php echo htmlspecialchars($faq['q']); ?></h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; line-height: 1.7; margin: 0;"><?php echo htmlspecialchars($faq['a']); ?></p>
        </div>
        <?php endforeach; ?>

      </div>

    </div>
  </section>

  <!-- Section 11: Call to Action Bar -->
  <section style="padding: 60px 0; background: linear-gradient(135deg, #101c40 0%, #172a54 100%); text-align: center; border-top: 1px solid rgba(245, 158, 11, 0.3);">
    <div class="container">
      <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin-bottom: 12px;">
        Ready for a Smooth, Hassle-Free Relocation in Hazaribagh?
      </h2>
      <p style="font-size: 1.05rem; color: #cbd5e1; max-width: 700px; margin: 0 auto 25px auto;">
        Get in touch today for an accurate written shifting estimate with 100% genuine pricing and zero surprise charges.
      </p>
      <div style="display: flex; justify-content: center; gap: 16px; flex-wrap: wrap;">
        <a href="tel:+918409531615" class="btn" style="background: #f59e0b; color: #070d1e; font-weight: 700; padding: 14px 28px; border-radius: 8px; text-decoration: none; display: inline-flex; align-items: center; gap: 8px;">
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
  "name": "Shree Ashirwad Packers and Movers Hazaribagh",
  "image": "<?php echo SITE_URL; ?>assets/images/services/household-furniture-bubble-wrap.jpeg",
  "@id": "https://shreeashirwadpackersandmovers.com/packers-and-movers-in-hazaribagh#company",
  "url": "https://shreeashirwadpackersandmovers.com/packers-and-movers-in-hazaribagh",
  "telephone": "+91-8409531615",
  "priceRange": "₹₹",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "Korrah Chowk, Near Bus Stand, Canary Hill Road",
    "addressLocality": "Hazaribagh",
    "addressRegion": "Jharkhand",
    "postalCode": "825301",
    "addressCountry": "IN"
  },
  "geo": {
    "@type": "GeoCoordinates",
    "latitude": 23.9925,
    "longitude": 85.3637
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