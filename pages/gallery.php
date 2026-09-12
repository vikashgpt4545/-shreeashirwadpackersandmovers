<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "Live Work Gallery - Shree Ashirwad Packers and Movers";
$page_desc = "View authentic photos of our shifting team in action: 7-layer bubble wrapping, custom wooden crating, bike straw packing, and container loading.";
$page_keywords = "shifting photos, packers movers gallery, bike packing photos, car transport container pictures, relocation showcase india";


$faq_list = [
    [
        'q' => 'Do you provide IBA approved bills for company or government transfer claims?',
        'a' => 'Yes! Shree Ashirwad Packers and Movers is an ISO 9001:2015 certified company providing 100% compliant IBA-approved bills, GST invoices, Lorry Receipts (LR/Bilty), and verified packing lists accepted across central/state government departments, PSUs, defense forces, and multinational corporations.'
    ],
    [
        'q' => 'How are relocation charges calculated for Live Work Gallery - Shree Ashirwad Packers and Movers?',
        'a' => 'Our moving estimates between Ranchi and Major Indian Cities are calculated using transparent parameters: total consignment volume (cft), distance (~350 km), packaging material grade (7-layer corrugated and bubble sheets), dedicated enclosed container capacity, and insurance declaration. We provide 100% itemized, fixed-price quotations with zero moving-day surcharges.'
    ],
    [
        'q' => 'How long does shipment transit take from Ranchi to Major Indian Cities?',
        'a' => 'Typical transit duration along the National Highway Corridor takes approximately 24-48 Hours. All long-haul vehicles are operated by certified dual-driver crews and equipped with live satellite GPS telematics for real-time location tracking on WhatsApp.'
    ],
    [
        'q' => 'Do your team handle multi-floor staircase lifting and elevator restrictions?',
        'a' => 'Our certified moving crews are equipped with heavy furniture lifter straps, hydraulic trolleys, and protective floor sheets. We coordinate smoothly with apartment society management in both Ranchi and Major Indian Cities to ensure elevator compliance.'
    ],
    [
        'q' => 'How many days in advance should I confirm my booking for Live Work Gallery - Shree Ashirwad Packers and Movers?',
        'a' => 'For regional moves within Ranchi, booking 2 to 3 days prior is recommended. For intercity transit to Major Indian Cities, we advise confirming 4 to 7 days ahead to reserve dedicated weatherproof container trucks and preferred morning departure slots.'
    ],
    [
        'q' => 'Do you offer temporary warehousing if my new residence in Major Indian Cities is not ready?',
        'a' => 'Yes, Shree Ashirwad operates secure, 24/7 CCTV-monitored, moisture-controlled warehouses across major transport hubs. You can store your household consignments safely from 7 days to multiple months with flexible weekly billing.'
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
    'text' => 'Transported my Hyundai Creta and Royal Enfield from Ranchi to Pune in an enclosed container carrier with live GPS tracking. Both vehicles arrived in showroom condition without a single scratch. Provided genuine IBA-approved bill for corporate relocation reimbursement.',
    'highlights' => 'Enclosed car trailer, scratch-free transit, IBA approved bill',
  ),
  1 => 
  array (
    'author' => 'Amit Kumar',
    'rating' => 5,
    'time' => 'Ranchi to Bangalore • 1 month ago',
    'service' => 'Household Shifting (3BHK)',
    'review' => 'Shifted complete 3BHK household goods from Ranchi to Bangalore with Shree Ashirwad. Exceptional packing quality using double-layer bubble wrap and sturdy cartons for fragile crockery. Zero damage, on-time delivery, and polite loading staff. Highly recommended!',
    'text' => 'Shifted complete 3BHK household goods from Ranchi to Bangalore with Shree Ashirwad. Exceptional packing quality using double-layer bubble wrap and sturdy cartons for fragile crockery. Zero damage, on-time delivery, and polite loading staff. Highly recommended!',
    'highlights' => 'Zero breakage, multi-layer packing, on-time container delivery',
  ),
  2 => 
  array (
    'author' => 'Vikram Kumar Singh',
    'rating' => 5,
    'time' => 'Harmu, Ranchi • 3 weeks ago',
    'service' => 'SUV & Household Intercity Transit',
    'review' => 'Transported my Creta SUV and Royal Enfield motorcycle from Ranchi to Bangalore along with household items. Received live GPS location updates throughout transit. Zero damage! Best choice among professional packers and movers.',
    'text' => 'Transported my Creta SUV and Royal Enfield motorcycle from Ranchi to Bangalore along with household items. Received live GPS location updates throughout transit. Zero damage! Best choice among professional packers and movers.',
    'highlights' => 'Live satellite GPS, zero transit damage, dedicated container',
  ),
  3 => 
  array (
    'author' => 'Pooja Verma',
    'rating' => 5,
    'time' => 'Doranda, Ranchi • 1 month ago',
    'service' => 'Interstate Relocation to Kolkata',
    'review' => 'Very honest pricing with no hidden charges. They provided a proper IBA-approved GST bill and clear transit insurance documentation for my company reimbursement. Outstanding service from reliable movers.',
    'text' => 'Very honest pricing with no hidden charges. They provided a proper IBA-approved GST bill and clear transit insurance documentation for my company reimbursement. Outstanding service from reliable movers.',
    'highlights' => 'Fixed price quote, IBA approved GST invoice, transit insurance',
  ),
  4 => 
  array (
    'author' => 'Ananya Roy',
    'rating' => 5,
    'time' => 'Lalpur, Ranchi • 2 months ago',
    'service' => 'IT Office & Workstation Relocation',
    'review' => 'Shree Ashirwad shifted our software company setup over a single Sunday. All IT servers, monitors, and ergonomic chairs were transported safely with anti-static packaging and zero operational downtime. Truly top-tier logistics team.',
    'text' => 'Shree Ashirwad shifted our software company setup over a single Sunday. All IT servers, monitors, and ergonomic chairs were transported safely with anti-static packaging and zero operational downtime. Truly top-tier logistics team.',
    'highlights' => 'Anti-static IT packing, zero business downtime, verified billing',
  ),
  5 => 
  array (
    'author' => 'Priya Singh',
    'rating' => 5,
    'time' => 'Bariatu, Ranchi • 3 weeks ago',
    'service' => 'Local House Relocation',
    'review' => 'Very smooth shifting experience within Ranchi. The packing crew arrived exactly on time, dismantled the furniture carefully, and assembled everything at our new flat. Transparent pricing with no hidden moving day surcharges.',
    'text' => 'Very smooth shifting experience within Ranchi. The packing crew arrived exactly on time, dismantled the furniture carefully, and assembled everything at our new flat. Transparent pricing with no hidden moving day surcharges.',
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
        <span style="color: #cbd5e1;">Live Work Gallery</span>
      </div>
    </div>
  </div>

  <!-- Hero Header -->
  <section style="background: linear-gradient(135deg, #0f172a 0%, #1e1b4b 100%); padding: 60px 0 40px 0; text-align: center; border-bottom: 1px solid rgba(255,255,255,0.08);">
    <div class="container" style="max-width: 1000px; margin: 0 auto; padding: 0 15px;">
      <span style="background: rgba(245, 158, 11, 0.1); color: #f59e0b; border: 1.5px solid rgba(245, 158, 11, 0.3); padding: 6px 18px; border-radius: 30px; font-size: 0.8rem; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; display: inline-block; margin-bottom: 16px;">
        AUTHENTIC SHIFTING SHOWCASE
      </span>
      <h1 style="font-size: 2.5rem; font-weight: 800; color: #ffffff; line-height: 1.25; margin-bottom: 16px;">
        Real Operational Work Gallery
      </h1>
      <p style="font-size: 1.08rem; color: #cbd5e1; max-width: 800px; margin: 0 auto; line-height: 1.7;">
        Explore authentic ground-zero photos of our trained packing specialists in action across household shifting, vehicle transportation, wooden crating, and warehouse storage operations.
      </p>
    </div>
  </section>

  <!-- Gallery Showcase Grid -->
  <section style="padding: 60px 0;">
    <div class="container" style="max-width: 1140px; margin: 0 auto; padding: 0 15px;">
      
      <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(270px, 1fr)); gap: 24px;">
        
        <!-- Gallery Card 1 -->
        <div style="background: #0f172a; border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; overflow: hidden; box-shadow: 0 10px 25px rgba(0,0,0,0.3);">
          <img src="<?php echo SITE_URL; ?>assets/images/gallery/gallery-1.webp" alt="Bike Straw Padding &amp; Branded Tape" style="width: 100%; height: 230px; object-fit: cover; display: block;" loading="lazy">
          <div style="padding: 16px; text-align: center; font-weight: 700; font-size: 0.9rem; color: #ffffff; background: rgba(15, 23, 42, 0.95); border-top: 1px solid rgba(255,255,255,0.08);">
            Bike Straw Padding &amp; Branded Tape
          </div>
        </div>

        <!-- Gallery Card 2 -->
        <div style="background: #0f172a; border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; overflow: hidden; box-shadow: 0 10px 25px rgba(0,0,0,0.3);">
          <img src="<?php echo SITE_URL; ?>assets/images/gallery/gallery-2.webp" alt="Cardboard &amp; Stretch Wrap Bike Packing" style="width: 100%; height: 230px; object-fit: cover; display: block;" loading="lazy">
          <div style="padding: 16px; text-align: center; font-weight: 700; font-size: 0.9rem; color: #ffffff; background: rgba(15, 23, 42, 0.95); border-top: 1px solid rgba(255,255,255,0.08);">
            Cardboard &amp; Stretch Wrap Bike Packing
          </div>
        </div>

        <!-- Gallery Card 3 -->
        <div style="background: #0f172a; border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; overflow: hidden; box-shadow: 0 10px 25px rgba(0,0,0,0.3);">
          <img src="<?php echo SITE_URL; ?>assets/images/gallery/gallery-3.webp" alt="Custom Wooden Crate Box Framing" style="width: 100%; height: 230px; object-fit: cover; display: block;" loading="lazy">
          <div style="padding: 16px; text-align: center; font-weight: 700; font-size: 0.9rem; color: #ffffff; background: rgba(15, 23, 42, 0.95); border-top: 1px solid rgba(255,255,255,0.08);">
            Custom Wooden Crate Box Framing
          </div>
        </div>

        <!-- Gallery Card 4 -->
        <div style="background: #0f172a; border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; overflow: hidden; box-shadow: 0 10px 25px rgba(0,0,0,0.3);">
          <img src="<?php echo SITE_URL; ?>assets/images/gallery/gallery-4.webp" alt="Smart TV Wooden Crate Packaging" style="width: 100%; height: 230px; object-fit: cover; display: block;" loading="lazy">
          <div style="padding: 16px; text-align: center; font-weight: 700; font-size: 0.9rem; color: #ffffff; background: rgba(15, 23, 42, 0.95); border-top: 1px solid rgba(255,255,255,0.08);">
            Smart TV Wooden Crate Packaging
          </div>
        </div>

        <!-- Gallery Card 5 -->
        <div style="background: #0f172a; border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; overflow: hidden; box-shadow: 0 10px 25px rgba(0,0,0,0.3);">
          <img src="<?php echo SITE_URL; ?>assets/images/gallery/gallery-5.webp" alt="Glass Dining Table Heavy Bubble Wrapping" style="width: 100%; height: 230px; object-fit: cover; display: block;" loading="lazy">
          <div style="padding: 16px; text-align: center; font-weight: 700; font-size: 0.9rem; color: #ffffff; background: rgba(15, 23, 42, 0.95); border-top: 1px solid rgba(255,255,255,0.08);">
            Glass Dining Table Heavy Bubble Wrapping
          </div>
        </div>

        <!-- Gallery Card 6 -->
        <div style="background: #0f172a; border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; overflow: hidden; box-shadow: 0 10px 25px rgba(0,0,0,0.3);">
          <img src="<?php echo SITE_URL; ?>assets/images/gallery/gallery-6.webp" alt="Double Bed Dismantling &amp; Edge Protection" style="width: 100%; height: 230px; object-fit: cover; display: block;" loading="lazy">
          <div style="padding: 16px; text-align: center; font-weight: 700; font-size: 0.9rem; color: #ffffff; background: rgba(15, 23, 42, 0.95); border-top: 1px solid rgba(255,255,255,0.08);">
            Double Bed Dismantling &amp; Edge Protection
          </div>
        </div>

        <!-- Gallery Card 7 -->
        <div style="background: #0f172a; border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; overflow: hidden; box-shadow: 0 10px 25px rgba(0,0,0,0.3);">
          <img src="<?php echo SITE_URL; ?>assets/images/gallery/gallery-7.webp" alt="Enclosed Container Vehicle Loading" style="width: 100%; height: 230px; object-fit: cover; display: block;" loading="lazy">
          <div style="padding: 16px; text-align: center; font-weight: 700; font-size: 0.9rem; color: #ffffff; background: rgba(15, 23, 42, 0.95); border-top: 1px solid rgba(255,255,255,0.08);">
            Enclosed Container Vehicle Loading
          </div>
        </div>

        <!-- Gallery Card 8 -->
        <div style="background: #0f172a; border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; overflow: hidden; box-shadow: 0 10px 25px rgba(0,0,0,0.3);">
          <img src="<?php echo SITE_URL; ?>assets/images/gallery/gallery-8.webp" alt="Hydraulic Car Carrier Ramp Pickup" style="width: 100%; height: 230px; object-fit: cover; display: block;" loading="lazy">
          <div style="padding: 16px; text-align: center; font-weight: 700; font-size: 0.9rem; color: #ffffff; background: rgba(15, 23, 42, 0.95); border-top: 1px solid rgba(255,255,255,0.08);">
            Hydraulic Car Carrier Ramp Pickup
          </div>
        </div>

      </div>

    </div>
  </section>



<!-- SECTION: STRUCTURED HTML PRICING TARIFF MATRIX (Google Tabular SERP Feature) -->
<section class="pricing-tariff-section" style="padding: 55px 0; background: #070d1e; border-bottom: 1px solid rgba(255,255,255,0.08);">
  <div class="container" style="max-width: 1140px; margin: 0 auto; padding: 0 15px;">
    <div style="text-align: center; margin-bottom: 35px;">
      <span style="background: rgba(245, 158, 11, 0.12); color: #f59e0b; border: 1px solid rgba(245, 158, 11, 0.3); padding: 5px 16px; border-radius: 20px; font-size: 0.82rem; font-weight: 700; text-transform: uppercase; letter-spacing: 0.5px;">
        100% Transparent Price Index
      </span>
      <h2 style="color: #ffffff; font-size: 1.85rem; font-weight: 800; margin-top: 12px; margin-bottom: 8px;">
        Ranchi Packers & Movers Tariff
      </h2>
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
              <span style="color: #94a3b8; font-size: 0.76rem;">Kanke Road, Ranchi • 2 months ago</span>
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
              <span style="color: #94a3b8; font-size: 0.76rem;">Ranchi to Bangalore • 1 month ago</span>
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
              <span style="color: #94a3b8; font-size: 0.76rem;">Harmu, Ranchi • 3 weeks ago</span>
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
              <span style="color: #94a3b8; font-size: 0.76rem;">Doranda, Ranchi • 1 month ago</span>
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
              <span style="color: #94a3b8; font-size: 0.76rem;">Lalpur, Ranchi • 2 months ago</span>
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
              <span style="color: #94a3b8; font-size: 0.76rem;">Bariatu, Ranchi • 3 weeks ago</span>
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

  </div>
</div>
<script type="application/ld+json">
{"@context":"https://schema.org","@type":"LocalBusiness","name":"Shree Ashirwad Packers and Movers","image":"https://shreeashirwadpackersandmovers.com/assets/images/logo.png","telephone":"+919308888376","url":"https://shreeashirwadpackersandmovers.com/","priceRange":"₹₹","address":{"@type":"PostalAddress","streetAddress":"Harmu Housing Colony","addressLocality":"Ranchi","addressRegion":"Jharkhand","postalCode":"834002","addressCountry":"IN"},"aggregateRating":{"@type":"AggregateRating","ratingValue":"4.9","reviewCount":"500","bestRating":"5","worstRating":"1"},"review":[{"@type":"Review","author":{"@type":"Person","name":"Rajesh Sharma"},"datePublished":"2026-08-01","reviewRating":{"@type":"Rating","ratingValue":"5","bestRating":"5"},"reviewBody":"Transported my Hyundai Creta and Royal Enfield from Ranchi to Pune in an enclosed container carrier with live GPS tracking. Both vehicles arrived in showroom condition without a single scratch. Provided genuine IBA-approved bill for corporate relocation reimbursement."},{"@type":"Review","author":{"@type":"Person","name":"Amit Kumar"},"datePublished":"2026-08-01","reviewRating":{"@type":"Rating","ratingValue":"5","bestRating":"5"},"reviewBody":"Shifted complete 3BHK household goods from Ranchi to Bangalore with Shree Ashirwad. Exceptional packing quality using double-layer bubble wrap and sturdy cartons for fragile crockery. Zero damage, on-time delivery, and polite loading staff. Highly recommended!"},{"@type":"Review","author":{"@type":"Person","name":"Vikram Kumar Singh"},"datePublished":"2026-08-01","reviewRating":{"@type":"Rating","ratingValue":"5","bestRating":"5"},"reviewBody":"Transported my Creta SUV and Royal Enfield motorcycle from Ranchi to Bangalore along with household items. Received live GPS location updates throughout transit. Zero damage! Best choice among professional packers and movers."},{"@type":"Review","author":{"@type":"Person","name":"Pooja Verma"},"datePublished":"2026-08-01","reviewRating":{"@type":"Rating","ratingValue":"5","bestRating":"5"},"reviewBody":"Very honest pricing with no hidden charges. They provided a proper IBA-approved GST bill and clear transit insurance documentation for my company reimbursement. Outstanding service from reliable movers."},{"@type":"Review","author":{"@type":"Person","name":"Ananya Roy"},"datePublished":"2026-08-01","reviewRating":{"@type":"Rating","ratingValue":"5","bestRating":"5"},"reviewBody":"Shree Ashirwad shifted our software company setup over a single Sunday. All IT servers, monitors, and ergonomic chairs were transported safely with anti-static packaging and zero operational downtime. Truly top-tier logistics team."},{"@type":"Review","author":{"@type":"Person","name":"Priya Singh"},"datePublished":"2026-08-01","reviewRating":{"@type":"Rating","ratingValue":"5","bestRating":"5"},"reviewBody":"Very smooth shifting experience within Ranchi. The packing crew arrived exactly on time, dismantled the furniture carefully, and assembled everything at our new flat. Transparent pricing with no hidden moving day surcharges."}]}
</script>



<!-- Section: Statewide / National Relocation Network Section (Authority Interlinks) -->
<section class="statewide-network-section" style="background: #0b132b; padding: 45px 0; border-top: 1px solid rgba(255,255,255,0.06);">
  <div class="container" style="max-width: 1100px; margin: 0 auto; padding: 0 15px;">
    <div style="background: rgba(15, 23, 42, 0.85); border: 1.5px solid rgba(255, 255, 255, 0.08); border-radius: 14px; padding: 26px 24px; box-shadow: 0 10px 30px rgba(0,0,0,0.35);">
      <div style="display: inline-flex; align-items: center; gap: 6px; background: rgba(245, 158, 11, 0.15); color: #f59e0b; border: 1px solid rgba(245, 158, 11, 0.3); padding: 4px 12px; border-radius: 20px; font-size: 0.75rem; font-weight: 700; text-transform: uppercase; letter-spacing: 0.5px; margin-bottom: 12px;">
        <i class="fas fa-globe-asia"></i> PAN-INDIA RELOCATION NETWORK
      </div>
      <h2 style="color: #ffffff; font-size: 1.6rem; font-weight: 800; margin: 0 0 16px 0; line-height: 1.3;">
        Seamless Interstate Shifting: <span style="color: #f59e0b;">Pan-India Carrier Operations</span>
      </h2>
      <p style="color: #cbd5e1; font-size: 0.96rem; line-height: 1.75; margin: 0;">
        Whether you are coordinating an interstate household relocation or planning dedicated car carrier transport across India, choosing certified <a href="<?php echo SITE_URL; ?>" title="Packers and Movers" style="color: #f59e0b; font-weight: 700; text-decoration: underline;">packers and movers</a> ensures your furniture, appliances, and vehicle reach without transit damage. As Jharkhand's trusted relocation brand, Shree Ashirwad operates as premier <a href="<?php echo SITE_URL; ?>" title="Shree Ashirwad Packers and Movers" style="color: #f59e0b; font-weight: 700; text-decoration: underline;">packers and movers</a> with regular dedicated container truck departures directly linked to our state operations at <a href="<?php echo SITE_URL; ?>packers-and-movers-in-ranchi" title="Packers and Movers in Ranchi" style="color: #38bdf8; font-weight: 700; text-decoration: underline;">packers and movers in Ranchi</a>, providing complete end-to-end packing, GPS consignment tracking, and verified IBA-approved reimbursement billing for families and professionals throughout all major Indian state capitals and commercial corridors.
      </p>
    </div>
  </div>
</section>



<!-- Section: Verified Local Google Map & Service Corridor -->
<section class="route-map-section" style="background: #070d1e; padding: 45px 0;">
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
          <h3 style="color: #ffffff; font-size: 1.25rem; font-weight: 700; margin-top: 8px; margin-bottom: 0;">
            Ranchi Urban &amp; Greater Chota Nagpur Logistics Belt (Harmu Hub, Ratu Road, NH-33 &amp; NH-43)
          </h3>
        </div>
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

</main>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
