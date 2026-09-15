<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "About Us - Shree Ashirwad Packers and Movers (OPC) Pvt. Ltd.";
$page_desc = "Learn about Shree Ashirwad Packers and Movers (OPC) Pvt. Ltd. — India's premier IBA-approved household relocation, office shifting, and vehicle transport specialists.";
$page_keywords = "about shree ashirwad packers,iba approved packers movers ranchi, company profile, relocation company jharkhand, trusted movers packers india";


$faq_list = [
    [
        'q' => 'Do you provide IBA approved bills for company or government transfer claims?',
        'a' => 'Yes! Shree Ashirwad Packers and Movers is an ISO 9001:2015 certified company providing 100% compliant IBA-approved bills, GST invoices, Lorry Receipts (LR/Bilty), and verified packing lists accepted across central/state government departments, PSUs, defense forces, and multinational corporations.'
    ],
    [
        'q' => 'How can customers verify Shree Ashirwad Packers and Movers company registration and IBA credentials?',
        'a' => 'Shree Ashirwad Packers and Movers (OPC) Pvt. Ltd. is a legally incorporated entity with ISO 9001:2015 quality certification and verifiable IBA-approved billing credentials. Customers can inspect our registered office at Harmu, Ranchi, check our valid GSTIN on tax invoices, and verify all consignment notes (LR/Bilty) before booking.'
    ],
    [
        'q' => 'How long does shipment transit take from Ranchi to Major Indian Cities?',
        'a' => 'Typical transit duration along the National Highway Corridor takes approximately 24-48 Hours. All long-haul vehicles are operated by certified dual-driver crews and equipped with live satellite GPS telematics for real-time location tracking on WhatsApp.'
    ],
    [
        'q' => 'What does your transit insurance cover and how are claims settled?',
        'a' => 'We arrange comprehensive 100% declared-value marine transit insurance covering accidental highway damage, fire, overturning, or transit perils. In the rare event of transit damage, claims are inspected and processed within 7 to 10 working days under a cashless settlement policy.'
    ],
    [
        'q' => 'How are cars and two-wheelers transported safely across state boundaries?',
        'a' => 'Vehicles are loaded onto specialized hydraulic closed car carrier trailers. Cars are secured with wheel-locking chocks and heavy-duty nylon lashings. Two-wheelers receive complete 4-layer bubble packaging with mirror removal and engine tank drain protocols.'
    ],
    [
        'q' => 'What items should customers carry personally rather than packing in the truck?',
        'a' => 'We advise clients to personally carry original government IDs, property documents, jewelry, currency, laptops, vital prescription medications, and essential overnight personal bags. All other household assets are safely packed in our sealed containers.'
    ],
];

$gmb_reviews = array (
  0 => 
  array (
    'author' => 'Rajesh Sharma',
    'rating' => 5,
    'time' => 'Kanke Road, Ranchi • 2 months ago',
    'service' => 'Car & Bike Relocation (Creta & Enfield)',
    'review' => 'Transported my Hyundai Creta and Royal Enfield from Ranchi to Pune in an enclosed container carrier with live GPS tracking. Both vehicles arrived in showroom condition without a single scratch. Provided genuine IBA-approved bill for corporate relocation reimbursement.',
    'highlights' => 'Enclosed car trailer, scratch-free transit, IBA approved bill',
  ),
  1 => 
  array (
    'author' => 'Amit Kumar',
    'rating' => 5,
    'time' => 'Ranchi to Bangalore • 1 month ago',
    'service' => 'Household Shifting (3BHK)',
    'review' => 'Shifted complete 3BHK household goods from Ranchi to Bangalore with Shree Ashirwad. Exceptional packing quality using double-layer bubble wrap and sturdy cartons for fragile crockery. Zero damage, on-time delivery, and polite loading staff. Highly recommended!',
    'highlights' => 'Zero breakage, multi-layer packing, on-time container delivery',
  ),
  2 => 
  array (
    'author' => 'Vikram Kumar Singh',
    'rating' => 5,
    'time' => 'Harmu, Ranchi • 3 weeks ago',
    'service' => 'SUV & Household Intercity Transit',
    'review' => 'Transported my Creta SUV and Royal Enfield motorcycle from Ranchi to Bangalore along with household items. Received live GPS location updates throughout transit. Zero damage! Best choice among professional packers and movers.',
    'highlights' => 'Live satellite GPS, zero transit damage, dedicated container',
  ),
  3 => 
  array (
    'author' => 'Pooja Verma',
    'rating' => 5,
    'time' => 'Doranda, Ranchi • 1 month ago',
    'service' => 'Interstate Relocation to Kolkata',
    'review' => 'Very honest pricing with no hidden charges. They provided a proper IBA-approved GST bill and clear transit insurance documentation for my company reimbursement. Outstanding service from reliable movers.',
    'highlights' => 'Fixed price quote, IBA approved GST invoice, transit insurance',
  ),
  4 => 
  array (
    'author' => 'Ananya Roy',
    'rating' => 5,
    'time' => 'Lalpur, Ranchi • 2 months ago',
    'service' => 'IT Office & Workstation Relocation',
    'review' => 'Shree Ashirwad shifted our software company setup over a single Sunday. All IT servers, monitors, and ergonomic chairs were transported safely with anti-static packaging and zero operational downtime. Truly top-tier logistics team.',
    'highlights' => 'Anti-static IT packing, zero business downtime, verified billing',
  ),
  5 => 
  array (
    'author' => 'Priya Singh',
    'rating' => 5,
    'time' => 'Bariatu, Ranchi • 3 weeks ago',
    'service' => 'Local House Relocation',
    'review' => 'Very smooth shifting experience within Ranchi. The packing crew arrived exactly on time, dismantled the furniture carefully, and assembled everything at our new flat. Transparent pricing with no hidden moving day surcharges.',
    'highlights' => 'Punctual crew, careful furniture assembly, fixed price guarantee',
  ),
);

require_once __DIR__ . '/../includes/header.php';
?>

<main class="site-main" style="background: #070d19; color: #ffffff; min-height: 100vh; padding-bottom: 60px;">

  <!-- Visual Breadcrumb Navigation Bar -->
  <div class="breadcrumb-wrapper" style="padding: 15px 0; background: #0f172a; border-bottom: 1px solid rgba(255,255,255,0.08);">
    <div class="container" style="max-width: 1140px; margin: 0 auto; padding: 0 15px;">
      <div class="breadcrumb-list" style="font-size: 0.9rem; color: #94a3b8;">
        <a href="<?php echo SITE_URL; ?>" title="Home" style="color: #f59e0b; text-decoration: none;">Home</a>
        <span style="margin: 0 8px;">/</span>
        <span style="color: #cbd5e1;">About Us</span>
      </div>
    </div>
  </div>

  <!-- Hero Section -->
  <section class="about-hero" style="background: linear-gradient(135deg, #0f172a 0%, #1e1b4b 100%); padding: 70px 0 60px 0; border-bottom: 1px solid rgba(255,255,255,0.08);">
    <div class="container" style="max-width: 1140px; margin: 0 auto; padding: 0 15px;">
      <div style="display: grid; grid-template-columns: 1.2fr 0.8fr; gap: 40px; align-items: center;">
        
        <div>
          <span style="background: rgba(245, 158, 11, 0.1); color: #f59e0b; border: 1.5px solid rgba(245, 158, 11, 0.3); padding: 6px 18px; border-radius: 30px; font-size: 0.8rem; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; display: inline-block; margin-bottom: 18px;">
            ISO 9001:2015 CERTIFIED &bull; IBA APPROVED
          </span>
          <h1 style="font-size: 2.7rem; font-weight: 800; color: #ffffff; line-height: 1.25; margin-bottom: 20px;">
            Redefining Relocation Standards with <span style="color: #f59e0b;">Trust &amp; Precision</span>
          </h1>
          <p style="font-size: 1.1rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 28px;">
            <strong>Shree Ashirwad Packers and Movers (OPC) Pvt. Ltd.</strong> is one of India's leading logistics and relocation service providers. Established with a commitment to zero-damage shifting, we specialize in household relocation, commercial office shifting, car and bike transportation, and secure warehouse storage across Jharkhand, Bihar, and all 28 Indian states.
          </p>
          <div style="display: flex; gap: 15px; flex-wrap: wrap;">
            <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Official Support" style="padding: 14px 30px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; text-decoration: none; display: inline-flex; align-items: center; gap: 10px; box-shadow: 0 6px 20px rgba(225, 29, 72, 0.35);">
              <i class="fas fa-phone-alt"></i> Call: <?php echo SITE_PHONE; ?>
            </a>
            <a href="<?php echo SITE_URL; ?>contact" title="Get Free Quote" style="padding: 14px 30px; background: rgba(245, 158, 11, 0.15); color: #f59e0b; border: 1.5px solid rgba(245, 158, 11, 0.4); border-radius: 50px; font-weight: 700; text-decoration: none; display: inline-flex; align-items: center; gap: 10px;">
              <i class="fas fa-file-signature"></i> Request Free Survey
            </a>
          </div>
        </div>

        <div style="background: rgba(15, 23, 42, 0.8); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 20px; padding: 35px 30px; box-shadow: 0 20px 40px rgba(0,0,0,0.4);">
          <h3 style="font-size: 1.35rem; font-weight: 800; color: #f59e0b; margin-bottom: 20px; text-align: center;">Company At A Glance</h3>
          <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 16px;">
            <div style="background: #070d19; padding: 18px 14px; border-radius: 12px; text-align: center; border: 1px solid rgba(255,255,255,0.06);">
              <div style="font-size: 1.8rem; font-weight: 800; color: #f59e0b;">12+</div>
              <div style="font-size: 0.82rem; color: #94a3b8; font-weight: 600; margin-top: 4px;">Years Experience</div>
            </div>
            <div style="background: #070d19; padding: 18px 14px; border-radius: 12px; text-align: center; border: 1px solid rgba(255,255,255,0.06);">
              <div style="font-size: 1.8rem; font-weight: 800; color: #f59e0b;">15,000+</div>
              <div style="font-size: 0.82rem; color: #94a3b8; font-weight: 600; margin-top: 4px;">Successful Moves</div>
            </div>
            <div style="background: #070d19; padding: 18px 14px; border-radius: 12px; text-align: center; border: 1px solid rgba(255,255,255,0.06);">
              <div style="font-size: 1.8rem; font-weight: 800; color: #f59e0b;">100%</div>
              <div style="font-size: 0.82rem; color: #94a3b8; font-weight: 600; margin-top: 4px;">Transit Insured</div>
            </div>
            <div style="background: #070d19; padding: 18px 14px; border-radius: 12px; text-align: center; border: 1px solid rgba(255,255,255,0.06);">
              <div style="font-size: 1.8rem; font-weight: 800; color: #f59e0b;">24/7</div>
              <div style="font-size: 0.82rem; color: #94a3b8; font-weight: 600; margin-top: 4px;">GPS &amp; Support</div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

<!-- Core Values & Mission -->

<!-- Infrastructure & Fleet Strengths -->

<!-- CTA Banner -->

<!-- SECTION: STRUCTURED HTML PRICING TARIFF MATRIX (Google Tabular SERP Feature) -->

<section class="pricing-tariff-section" style="padding: 55px 0; background: #070d1e; border-bottom: 1px solid rgba(255,255,255,0.08);">
  <div class="container" style="max-width: 1140px; margin: 0 auto; padding: 0 15px;">
    <div style="text-align: center; margin-bottom: 35px;">
      <span style="background: rgba(245, 158, 11, 0.12); color: #f59e0b; border: 1px solid rgba(245, 158, 11, 0.3); padding: 5px 16px; border-radius: 20px; font-size: 0.82rem; font-weight: 700; text-transform: uppercase; letter-spacing: 0.5px;">
        100% Transparent Price Index
      </span>
      <h2 style="color: #ffffff; font-size: 1.85rem; font-weight: 800; margin-top: 12px; margin-bottom: 8px;">Ranchi Packers &amp; Movers Tariff</h2>
      <p style="color: #94a3b8; font-size: 0.95rem; max-width: 780px; margin: 0 auto; line-height: 1.6;">
        Standard indicative pricing structure for certified packing and shifting. All quotes feature IBA-approved invoices, zero hidden charges, and binding itemized terms.
      </p>
    </div>

    <div style="overflow-x: auto; background: rgba(15, 23, 42, 0.75); border: 1px solid rgba(255, 255, 255, 0.1); border-radius: 12px; box-shadow: 0 10px 30px rgba(0,0,0,0.35);">
      <table style="width: 100%; border-collapse: collapse; text-align: left; min-width: 640px;">
        <thead style="background: rgba(30, 41, 59, 0.9); border-bottom: 2px solid rgba(245, 158, 11, 0.3);">
          <tr>
            <th style="padding: 16px 18px; color: #f59e0b; font-size: 0.88rem; font-weight: 700; text-transform: uppercase; letter-spacing: 0.5px; width: 28%;">Relocation Type</th>
            <th style="padding: 16px 18px; color: #f59e0b; font-size: 0.88rem; font-weight: 700; text-transform: uppercase; letter-spacing: 0.5px; width: 42%;">Vehicle &amp; Packing Standard</th>
            <th style="padding: 16px 18px; color: #f59e0b; font-size: 0.88rem; font-weight: 700; text-transform: uppercase; letter-spacing: 0.5px; width: 15%;">Transit Time</th>
            <th style="padding: 16px 18px; color: #f59e0b; font-size: 0.88rem; font-weight: 700; text-transform: uppercase; letter-spacing: 0.5px; width: 15%;">Indicative Tariff</th>
          </tr>
        </thead>
        <tbody>
          
          <tr style="border-bottom: 1px solid rgba(255,255,255,0.06); transition: background 0.2s;">
            <td style="padding: 16px 18px; font-weight: 700; color: #ffffff; font-size: 0.95rem;">
              1 RK / Studio Apartment Local Move
            </td>
            <td style="padding: 16px 18px; color: #94a3b8; font-size: 0.88rem; line-height: 1.5;">
              Tata Ace Mini Truck • 2 Trained Movers • Basic bubble wrap, mattress covers &amp; loading
            </td>
            <td style="padding: 16px 18px; white-space: nowrap;">
              <span style="background: rgba(59, 130, 246, 0.12); color: #60a5fa; border: 1px solid rgba(59, 130, 246, 0.25); padding: 4px 10px; border-radius: 12px; font-size: 0.82rem; font-weight: 600;">
                3–5 Hours (Same Day)
              </span>
            </td>
            <td style="padding: 16px 18px; white-space: nowrap;">
              <span style="background: rgba(16, 185, 129, 0.12); color: #34d399; border: 1px solid rgba(16, 185, 129, 0.25); padding: 5px 12px; border-radius: 6px; font-size: 0.95rem; font-weight: 700;">
                ₹3,000 – ₹5,500
              </span>
            </td>
          </tr>
          <tr style="border-bottom: 1px solid rgba(255,255,255,0.06); transition: background 0.2s;">
            <td style="padding: 16px 18px; font-weight: 700; color: #ffffff; font-size: 0.95rem;">
              1 BHK Complete Home Relocation
            </td>
            <td style="padding: 16px 18px; color: #94a3b8; font-size: 0.88rem; line-height: 1.5;">
              9ft–11ft Covered Truck • 3 Trained Movers • 7-layer packing, appliance foam padding &amp; unloading
            </td>
            <td style="padding: 16px 18px; white-space: nowrap;">
              <span style="background: rgba(59, 130, 246, 0.12); color: #60a5fa; border: 1px solid rgba(59, 130, 246, 0.25); padding: 4px 10px; border-radius: 12px; font-size: 0.82rem; font-weight: 600;">
                4–6 Hours (Same Day)
              </span>
            </td>
            <td style="padding: 16px 18px; white-space: nowrap;">
              <span style="background: rgba(16, 185, 129, 0.12); color: #34d399; border: 1px solid rgba(16, 185, 129, 0.25); padding: 5px 12px; border-radius: 6px; font-size: 0.95rem; font-weight: 700;">
                ₹4,500 – ₹8,000
              </span>
            </td>
          </tr>
          <tr style="border-bottom: 1px solid rgba(255,255,255,0.06); transition: background 0.2s;">
            <td style="padding: 16px 18px; font-weight: 700; color: #ffffff; font-size: 0.95rem;">
              2 BHK Family Home Relocation
            </td>
            <td style="padding: 16px 18px; color: #94a3b8; font-size: 0.88rem; line-height: 1.5;">
              14ft Closed Truck • 4 Skilled Handlers • Furniture disassembly, heavy cartons &amp; placement
            </td>
            <td style="padding: 16px 18px; white-space: nowrap;">
              <span style="background: rgba(59, 130, 246, 0.12); color: #60a5fa; border: 1px solid rgba(59, 130, 246, 0.25); padding: 4px 10px; border-radius: 12px; font-size: 0.82rem; font-weight: 600;">
                5–7 Hours (Same Day)
              </span>
            </td>
            <td style="padding: 16px 18px; white-space: nowrap;">
              <span style="background: rgba(16, 185, 129, 0.12); color: #34d399; border: 1px solid rgba(16, 185, 129, 0.25); padding: 5px 12px; border-radius: 6px; font-size: 0.95rem; font-weight: 700;">
                ₹7,000 – ₹13,500
              </span>
            </td>
          </tr>
          <tr style="border-bottom: 1px solid rgba(255,255,255,0.06); transition: background 0.2s;">
            <td style="padding: 16px 18px; font-weight: 700; color: #ffffff; font-size: 0.95rem;">
              3 BHK Luxury Apartment Shifting
            </td>
            <td style="padding: 16px 18px; color: #94a3b8; font-size: 0.88rem; line-height: 1.5;">
              17ft Closed Container • 5 Certified Handlers • Full fragile wrapping, dismantling &amp; setup
            </td>
            <td style="padding: 16px 18px; white-space: nowrap;">
              <span style="background: rgba(59, 130, 246, 0.12); color: #60a5fa; border: 1px solid rgba(59, 130, 246, 0.25); padding: 4px 10px; border-radius: 12px; font-size: 0.82rem; font-weight: 600;">
                Full Day Shifting
              </span>
            </td>
            <td style="padding: 16px 18px; white-space: nowrap;">
              <span style="background: rgba(16, 185, 129, 0.12); color: #34d399; border: 1px solid rgba(16, 185, 129, 0.25); padding: 5px 12px; border-radius: 6px; font-size: 0.95rem; font-weight: 700;">
                ₹11,000 – ₹19,500
              </span>
            </td>
          </tr>
          <tr style="border-bottom: 1px solid rgba(255,255,255,0.06); transition: background 0.2s;">
            <td style="padding: 16px 18px; font-weight: 700; color: #ffffff; font-size: 0.95rem;">
              Two-Wheeler Local Transport
            </td>
            <td style="padding: 16px 18px; color: #94a3b8; font-size: 0.88rem; line-height: 1.5;">
              Dedicated loading ramp &amp; soft blanket wrap • Doorstep pickup and drop within city limits
            </td>
            <td style="padding: 16px 18px; white-space: nowrap;">
              <span style="background: rgba(59, 130, 246, 0.12); color: #60a5fa; border: 1px solid rgba(59, 130, 246, 0.25); padding: 4px 10px; border-radius: 12px; font-size: 0.82rem; font-weight: 600;">
                2–3 Hours
              </span>
            </td>
            <td style="padding: 16px 18px; white-space: nowrap;">
              <span style="background: rgba(16, 185, 129, 0.12); color: #34d399; border: 1px solid rgba(16, 185, 129, 0.25); padding: 5px 12px; border-radius: 6px; font-size: 0.95rem; font-weight: 700;">
                ₹1,500 – ₹2,800
              </span>
            </td>
          </tr>
          <tr style="border-bottom: 1px solid rgba(255,255,255,0.06); transition: background 0.2s;">
            <td style="padding: 16px 18px; font-weight: 700; color: #ffffff; font-size: 0.95rem;">
              Commercial Office / Retail Shifting
            </td>
            <td style="padding: 16px 18px; color: #94a3b8; font-size: 0.88rem; line-height: 1.5;">
              Closed Fleet • Anti-static computer boxes, tagged document storage &amp; Sunday relocation
            </td>
            <td style="padding: 16px 18px; white-space: nowrap;">
              <span style="background: rgba(59, 130, 246, 0.12); color: #60a5fa; border: 1px solid rgba(59, 130, 246, 0.25); padding: 4px 10px; border-radius: 12px; font-size: 0.82rem; font-weight: 600;">
                Overnight / Weekend
              </span>
            </td>
            <td style="padding: 16px 18px; white-space: nowrap;">
              <span style="background: rgba(16, 185, 129, 0.12); color: #34d399; border: 1px solid rgba(16, 185, 129, 0.25); padding: 5px 12px; border-radius: 6px; font-size: 0.95rem; font-weight: 700;">
                ₹8,500 – ₹28,000
              </span>
            </td>
          </tr>
        </tbody>
      </table>
    </div>

    <div style="margin-top: 18px; display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 12px; font-size: 0.82rem; color: #64748b;">
      <div style="display: flex; gap: 16px; flex-wrap: wrap;">
        <span style="display: inline-flex; align-items: center; gap: 6px; color: #94a3b8;"><i class="fas fa-check-circle" style="color: #10b981;"></i> IBA Approved Billing</span>
        <span style="display: inline-flex; align-items: center; gap: 6px; color: #94a3b8;"><i class="fas fa-check-circle" style="color: #10b981;"></i> GST ITC Input Credit Compliant</span>
        <span style="display: inline-flex; align-items: center; gap: 6px; color: #94a3b8;"><i class="fas fa-check-circle" style="color: #10b981;"></i> 100% Transit Marine Insurance Available</span>
      </div>
      <div>
        *Tariff ranges are indicative and vary based on exact floor level, elevator access, volume cubic feet, and transit distance.
      </div>
    </div>
  </div>
</section>



<!-- Section: Verified Local Google Map & Service Corridor -->
<section class="route-map-section" style="background: #070d19; padding: 45px 0;">
  <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 15px;">
    <div style="background: #0f172a; border-radius: 12px; overflow: hidden; border: 1px solid rgba(245, 158, 11, 0.3); box-shadow: 0 10px 30px rgba(0,0,0,0.3);">
      <div style="padding: 16px 24px; background: rgba(245, 158, 11, 0.08); border-bottom: 1px solid rgba(245, 158, 11, 0.2); display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 10px;">
        <div style="color: #f59e0b; font-weight: 700; font-size: 1.05rem; display: flex; align-items: center; gap: 10px;">
          <span>📍</span> Verified Relocation Corridor &amp; GPS Hub: Packers and Movers in Ranchi
        </div>
        <span style="background: rgba(16, 185, 129, 0.15); color: #10b981; border: 1px solid rgba(16, 185, 129, 0.3); padding: 4px 12px; border-radius: 20px; font-size: 0.8rem; font-weight: 600;">
          ✓ Live Satellite GPS Tracking Active
        </span>
      </div>
      <div style="width: 100%; height: 380px; position: relative;">
        <iframe width="100%" height="380" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?q=Packers+and+Movers+in+Ranchi&t=&z=12&ie=UTF8&iwloc=&output=embed" loading="lazy" style="border:0; width:100%; height:100%; display:block;"></iframe>
      </div>
    </div>
  </div>
</section>



<!-- SECTION: LOCAL SEO & ENTITY GEO-SIGNALS (Google Knowledge Graph & Local Pack Grounding) -->
<section class="geo-signals-section" style="padding: 45px 0; background: #070d1e; border-bottom: 1px solid rgba(255,255,255,0.08);">
  <div class="container" style="max-width: 1140px; margin: 0 auto; padding: 0 15px;">
    <div style="background: rgba(15, 23, 42, 0.75); border: 1px solid rgba(245, 158, 11, 0.25); border-radius: 12px; padding: 28px 24px; box-shadow: 0 10px 25px rgba(0,0,0,0.3);">
      <div style="display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 12px; border-bottom: 1px solid rgba(255,255,255,0.08); padding-bottom: 16px; margin-bottom: 20px;">
        <div>
          <span style="background: rgba(245, 158, 11, 0.12); color: #f59e0b; border: 1px solid rgba(245, 158, 11, 0.3); padding: 4px 12px; border-radius: 14px; font-size: 0.8rem; font-weight: 700; text-transform: uppercase;">
            📍 Entity Grounding &amp; Geo-Coordinates
          </span>
          <h3 style="color: #ffffff; font-size: 1.25rem; font-weight: 700; margin-top: 8px; margin-bottom: 0;">Ranchi Urban &amp; Greater Chota Nagpur Logistics Belt (Harmu Hub, Ratu Road, NH-33 &amp; NH-43)</h3>
        <p style='color: #94a3b8; font-size: 0.86rem; line-height: 1.6; margin: 0 0 12px 0;'>Our specialized transit protocols for Ranchi Urban &amp; Greater Chota Nagpur Logistics Belt (Harmu Hub, Ratu Road, NH-33 &amp; NH-43) ensure verified safety standards, continuous GPS route tracking, and express delivery scheduling across the Ranchi corridor with scheduled highway transit stops.</p></div>
        <div style="display: flex; gap: 10px; font-family: monospace; font-size: 0.82rem;">
          <span style="background: rgba(16, 185, 129, 0.12); color: #34d399; border: 1px solid rgba(16, 185, 129, 0.3); padding: 5px 10px; border-radius: 6px;">
            LAT: 23.3639813° N
          </span>
          <span style="background: rgba(59, 130, 246, 0.12); color: #60a5fa; border: 1px solid rgba(59, 130, 246, 0.3); padding: 5px 10px; border-radius: 6px;">
            LNG: 85.3090259° E
          </span>
        </div>
      </div>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 18px;">
        <div style="background: rgba(255,255,255,0.02); border: 1px solid rgba(255,255,255,0.06); border-radius: 8px; padding: 16px;">
          <div style="color: #f59e0b; font-weight: 700; font-size: 0.92rem; margin-bottom: 6px; display: flex; align-items: center; gap: 6px;">
            <i class="fas fa-map-marked-alt"></i> Primary Service Localities &amp; Pickup Hubs:
          </div>
          <p style="color: #94a3b8; font-size: 0.85rem; line-height: 1.6; margin: 0;">
            Harmu Housing Colony • Lalpur • Kanke Road • Bariatu • Doranda • Morabadi • Dhurwa (HEC) • Ratu Road • Ashok Nagar • Namkum • Tupudana Industrial Area • Birsa Chowk • Hinoo
          </p>
        </div>

        <div style="background: rgba(255,255,255,0.02); border: 1px solid rgba(255,255,255,0.06); border-radius: 8px; padding: 16px;">
          <div style="color: #38bdf8; font-weight: 700; font-size: 0.92rem; margin-bottom: 6px; display: flex; align-items: center; gap: 6px;">
            <i class="fas fa-road"></i> National Highway Corridors:
          </div>
          <p style="color: #94a3b8; font-size: 0.85rem; line-height: 1.6; margin: 0;">
            Connected via <strong>NH-33</strong> (Ranchi–Jamshedpur–Kolkata), <strong>NH-43</strong> (Ranchi–Gumla), <strong>NH-20</strong> (Ranchi–Patna), and <strong>Ring Road Expressway</strong> for non-stop interstate container movement.
          </p>
        </div>

        <div style="background: rgba(255,255,255,0.02); border: 1px solid rgba(255,255,255,0.06); border-radius: 8px; padding: 16px;">
          <div style="color: #34d399; font-weight: 700; font-size: 0.92rem; margin-bottom: 6px; display: flex; align-items: center; gap: 6px;">
            <i class="fas fa-building"></i> Registered Headquarters Hub:
          </div>
          <p style="color: #94a3b8; font-size: 0.85rem; line-height: 1.6; margin: 0;">
            Anandpuri Chowk, Vidyanagar Road, Harmu, Ranchi, Jharkhand - 834002.<br>
            24/7 Helpline: <strong>+91 8409531615</strong> | IBA Code &amp; ISO 9001:2015 Certified
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Google Business Profile Verified Customer Trust Section -->

<!-- Section: Verified Operational Photo Showcase -->

<section class="operational-gallery-section" style="background: #070d1e; padding: 55px 0; border-top: 1px solid rgba(255,255,255,0.06);">
  <div class="container" style="max-width: 1150px; margin: 0 auto; padding: 0 15px;">
    <div style="text-align: center; margin-bottom: 32px;">
      <span style="background: rgba(245, 158, 11, 0.15); color: #f59e0b; border: 1px solid rgba(245, 158, 11, 0.3); padding: 4px 14px; border-radius: 20px; font-size: 0.76rem; font-weight: 700; text-transform: uppercase; letter-spacing: 0.5px; display: inline-block; margin-bottom: 10px;">
        <i class="fas fa-camera"></i> Grounded Operational Proof
      </span>
      <h2 style="font-size: 1.85rem; font-weight: 800; color: #ffffff; margin: 0 0 10px 0;">Real On-Site Moving &amp; Fleet Operations: <span style="color: #38bdf8;">Pan-India Dedicated Fleet</span></h2>
      <p style="color: #94a3b8; font-size: 0.95rem; margin: 0; max-width: 750px; margin: 0 auto;">
        100% authentic job-site photographs showcasing our certified packaging, container loading, and fleet transit.
      </p>
    </div>
    
    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 22px;">

        <div style="background: rgba(15, 23, 42, 0.85); border: 1.5px solid rgba(255, 255, 255, 0.08); border-radius: 14px; overflow: hidden; box-shadow: 0 10px 25px rgba(0,0,0,0.35); display: flex; flex-direction: column; justify-content: space-between;">
          <div style="width: 100%; height: 230px; overflow: hidden; background: #020617; position: relative;">
            <img src="<?php echo SITE_URL; ?>assets/images/services/household-furniture-bubble-wrap.jpeg" alt="High-Density Bubble Cushioning for Wooden Furniture - Shree Ashirwad" title="Furniture Protective Cushioning" loading="lazy" style="width: 100%; height: 100%; object-fit: cover; display: block; transition: transform 0.3s ease;">
            <div style="position: absolute; top: 10px; right: 10px; background: rgba(15, 23, 42, 0.85); color: #10b981; border: 1px solid rgba(16, 185, 129, 0.4); padding: 3px 10px; border-radius: 20px; font-size: 0.72rem; font-weight: 700; display: inline-flex; align-items: center; gap: 5px;">
              <i class="fas fa-check-circle"></i> Verified Job Site
            </div>
          </div>
          <div style="padding: 14px 16px; background: #0b132b; border-top: 1px solid rgba(255,255,255,0.06);">
            <div style="color: #f8fafc; font-weight: 700; font-size: 0.95rem; margin-bottom: 6px;">Furniture Protective Cushioning</div>
            <p style="color: #94a3b8; font-size: 0.82rem; line-height: 1.5; margin: 0;">
              <i class="fas fa-camera" style="color: #f59e0b; margin-right: 5px;"></i> High-density air-bubble film and corrugated edge guards safeguarding wooden furniture.
            </p>
          </div>
        </div>
        <div style="background: rgba(15, 23, 42, 0.85); border: 1.5px solid rgba(255, 255, 255, 0.08); border-radius: 14px; overflow: hidden; box-shadow: 0 10px 25px rgba(0,0,0,0.35); display: flex; flex-direction: column; justify-content: space-between;">
          <div style="width: 100%; height: 230px; overflow: hidden; background: #020617; position: relative;">
            <img src="<?php echo SITE_URL; ?>assets/images/services/residential-moving-carton-loading.jpeg" alt="Systematic Loading of Heavy-Duty Corrugated Moving Cartons - Shree Ashirwad" title="Residential Shifting Carton Loading" loading="lazy" style="width: 100%; height: 100%; object-fit: cover; display: block; transition: transform 0.3s ease;">
            <div style="position: absolute; top: 10px; right: 10px; background: rgba(15, 23, 42, 0.85); color: #10b981; border: 1px solid rgba(16, 185, 129, 0.4); padding: 3px 10px; border-radius: 20px; font-size: 0.72rem; font-weight: 700; display: inline-flex; align-items: center; gap: 5px;">
              <i class="fas fa-check-circle"></i> Verified Job Site
            </div>
          </div>
          <div style="padding: 14px 16px; background: #0b132b; border-top: 1px solid rgba(255,255,255,0.06);">
            <div style="color: #f8fafc; font-weight: 700; font-size: 0.95rem; margin-bottom: 6px;">Residential Shifting Carton Loading</div>
            <p style="color: #94a3b8; font-size: 0.82rem; line-height: 1.5; margin: 0;">
              <i class="fas fa-camera" style="color: #f59e0b; margin-right: 5px;"></i> Even weight distribution and systematic loading of household cartons in covered container trucks.
            </p>
          </div>
        </div>
        <div style="background: rgba(15, 23, 42, 0.85); border: 1.5px solid rgba(255, 255, 255, 0.08); border-radius: 14px; overflow: hidden; box-shadow: 0 10px 25px rgba(0,0,0,0.35); display: flex; flex-direction: column; justify-content: space-between;">
          <div style="width: 100%; height: 230px; overflow: hidden; background: #020617; position: relative;">
            <img src="<?php echo SITE_URL; ?>assets/images/services/appliance-protective-wrapping.jpeg" alt="Multi-Layer Appliance Packaging for Refrigerators and Washing Machines - Shree Ashirwad" title="Home Appliance Safe Packaging" loading="lazy" style="width: 100%; height: 100%; object-fit: cover; display: block; transition: transform 0.3s ease;">
            <div style="position: absolute; top: 10px; right: 10px; background: rgba(15, 23, 42, 0.85); color: #10b981; border: 1px solid rgba(16, 185, 129, 0.4); padding: 3px 10px; border-radius: 20px; font-size: 0.72rem; font-weight: 700; display: inline-flex; align-items: center; gap: 5px;">
              <i class="fas fa-check-circle"></i> Verified Job Site
            </div>
          </div>
          <div style="padding: 14px 16px; background: #0b132b; border-top: 1px solid rgba(255,255,255,0.06);">
            <div style="color: #f8fafc; font-weight: 700; font-size: 0.95rem; margin-bottom: 6px;">Home Appliance Safe Packaging</div>
            <p style="color: #94a3b8; font-size: 0.82rem; line-height: 1.5; margin: 0;">
              <i class="fas fa-camera" style="color: #f59e0b; margin-right: 5px;"></i> Anti-static foam and heavy stretch wrap securing home appliances against transit shock.
            </p>
          </div>
        </div>
    </div>
  </div>
</section>



<!-- Section: Statewide / National Relocation Network Section (Authority Interlinks) -->
<section class="statewide-network-section" style="background: #0b132b; padding: 45px 0; border-top: 1px solid rgba(255,255,255,0.06);">
  <div class="container" style="max-width: 1100px; margin: 0 auto; padding: 0 15px;">
    <div style="background: rgba(15, 23, 42, 0.85); border: 1.5px solid rgba(255, 255, 255, 0.08); border-radius: 14px; padding: 26px 24px; box-shadow: 0 10px 30px rgba(0,0,0,0.35);">
      <div style="display: inline-flex; align-items: center; gap: 6px; background: rgba(245, 158, 11, 0.15); color: #f59e0b; border: 1px solid rgba(245, 158, 11, 0.3); padding: 4px 12px; border-radius: 20px; font-size: 0.75rem; font-weight: 700; text-transform: uppercase; letter-spacing: 0.5px; margin-bottom: 12px;">
        <i class="fas fa-globe-asia"></i> PAN-INDIA RELOCATION NETWORK
      </div>
      <h2 style="color: #ffffff; font-size: 1.6rem; font-weight: 800; margin: 0 0 16px 0; line-height: 1.3;">Seamless Interstate Shifting: <span style="color: #f59e0b;">Pan-India Carrier Operations</span></h2>
      <p style="color: #cbd5e1; font-size: 0.96rem; line-height: 1.75; margin: 0;">
        Whether you are coordinating an interstate household relocation or planning dedicated car carrier transport across India, choosing certified <a href="<?php echo SITE_URL; ?>" title="Packers and Movers" style="color: #f59e0b; font-weight: 700; text-decoration: underline;">packers and movers</a> ensures your furniture, appliances, and vehicle reach without transit damage. As Jharkhand's trusted relocation brand, Shree Ashirwad operates as premier <a href="<?php echo SITE_URL; ?>" title="Shree Ashirwad Packers and Movers" style="color: #f59e0b; font-weight: 700; text-decoration: underline;">packers and movers</a> with regular dedicated container truck departures directly linked to our state operations at <a href="<?php echo SITE_URL; ?>packers-and-movers-in-ranchi" title="Packers and Movers in Ranchi" style="color: #38bdf8; font-weight: 700; text-decoration: underline;">packers and movers in Ranchi</a>, providing complete end-to-end packing, GPS consignment tracking, and verified IBA-approved reimbursement billing for families and professionals throughout all major Indian state capitals and commercial corridors.
      </p>
    </div>
  </div>
</section>

</main>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
