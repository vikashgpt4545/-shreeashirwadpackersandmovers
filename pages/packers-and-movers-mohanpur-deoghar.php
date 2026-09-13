<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = 'Packers and Movers in Mohanpur Deoghar | IBA Approved Shifting';
$page_desc = 'Safe Packers and Movers in Mohanpur Deoghar by Shree Ashirwad. IBA approved home, car & bike transport with insurance via NH-114A corridor. Call +91 9955554330!';
$page_keywords = 'packers and movers mohanpur deoghar, movers and packers deoghar, shifting charges deoghar, home relocation deoghar, bike transport deoghar, car transport deoghar, IBA approved packers movers deoghar';

$page_city = 'Deoghar';

$faq_list = [
    ['q' => 'What are the household shifting charges in Mohanpur Deoghar?', 'a' => 'Local shifting in Mohanpur Deoghar starts from ₹4,500 for 1 BHK, ₹8,500 for 2 BHK, and ₹14,500 for 3 BHK homes depending on goods volume and packing requirements.'],
    ['q' => 'Do you provide IBA approved GST bills for official claims in Mohanpur Deoghar?', 'a' => 'Yes, Shree Ashirwad Packers and Movers provides genuine IBA approved GST bills with complete consigment note, invoice, and itemized breakdown for government and corporate claim reimbursements.'],
    ['q' => 'How are fragile items and electronics protected during shifting in Mohanpur?', 'a' => 'We use a 7-layer safety packaging system including 80-GSM bubble wrap, corrugated sheets, foam edge guards, stretch film, and custom wooden crating for LEDs and glass items.'],
    ['q' => 'What is the transit time from Mohanpur Deoghar to major cities like Ranchi or Patna?', 'a' => 'Intercity relocations to Ranchi, Patna, or Kolkata are typically delivered within 24 to 48 hours using dedicated GPS-enabled container vehicles.'],
    ['q' => 'Is transit insurance provided for home relocation in Mohanpur Deoghar?', 'a' => 'Yes, we offer 100% full transit insurance coverage (1.5% - 3% value) protecting your belongings against accidental damage, theft, or unforeseen transit risks.'],
    ['q' => 'Can you transport cars and two-wheelers from Mohanpur Deoghar?', 'a' => 'We operate specialized closed car carriers and bike transport vehicles with wheel-chock locking systems for 100% scratch-free vehicle shifting.'],
    ['q' => 'What documentation is required to book Packers and Movers in Mohanpur?', 'a' => 'You need basic identity proof (Aadhaar or PAN) and destination address details for consignment note preparation and GST billing.'],
    ['q' => 'Do your moving experts handle disassembly and reassembly of furniture?', 'a' => 'Yes, our trained crew handles complete dismantling and reassembly of beds, wardrobes, dining tables, and modular furniture at no extra labor cost.'],
    ['q' => 'Are there any hidden costs like toll charges or unloading fees?', 'a' => 'No, our written quotations are 100% transparent and inclusive of all packing, loading, highway toll taxes, unloading, and unboxing charges.'],
    ['q' => 'How far in advance should I book my relocation from Mohanpur?', 'a' => 'We recommend booking 2 to 4 days prior to your preferred shifting date to secure dedicated container trucks and specialized crew.'],
    ['q' => 'Do you provide warehouse storage facilities in Deoghar region?', 'a' => 'Yes, we offer secure, climate-controlled, 24/7 CCTV monitored short-term and long-term warehouse storage in Deoghar for household and commercial goods.'],
    ['q' => 'How can I track my consignment truck during intercity transit?', 'a' => 'Every container vehicle is outfitted with live GPS tracking systems, and our move supervisor provides real-time location updates directly via WhatsApp.'],
    ['q' => 'What safety measures are followed for bike transport from Mohanpur?', 'a' => 'Bikes are wrapped in paddy sheet, bubble wrap, and corrugated board before being locked with safety belts inside enclosed car carriers.'],
    ['q' => 'Do you offer office and commercial relocation services in Deoghar district?', 'a' => 'Yes, we specialize in office shifting, IT equipment moving, server rack transport, and industrial machinery shifting with minimal operational downtime.'],
    ['q' => 'What is the process to claim transit insurance in case of damage?', 'a' => 'In the rare event of damage, note it on the consignment receipt during delivery, submit photos, and our team settles the claim directly with the insurance provider.'],
    ['q' => 'Can I transport household gas cylinders and liquids?', 'a' => 'For safety compliance, empty gas cylinders are accepted with proper clearance, while inflammable liquids and hazardous items are strictly prohibited.'],
    ['q' => 'How do you handle high-rise apartment shifting without service lifts?', 'a' => 'Our crew is equipped with heavy-duty moving straps, ropes, and portable ramps to maneuver bulky furniture safely through staircases.'],
    ['q' => 'Are weekends or end-of-month dates more expensive for shifting?', 'a' => 'We maintain uniform transparent pricing throughout the month, though early booking is advised for weekends due to high customer demand.'],
    ['q' => 'What is the contact number for instant quote and booking in Mohanpur Deoghar?', 'a' => 'You can call our master customer helpline directly at +91 9955554330 or message us on WhatsApp for an instant zero-obligation quote.'],
    ['q' => 'Why choose Shree Ashirwad Packers and Movers over unverified local vendors?', 'a' => 'We are an IBA approved, ISO certified company with 15+ years of experience, owned dedicated fleet, transparent pricing, and 100% damage-free delivery record.']
];

require_once __DIR__ . '/../includes/header.php';
?>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "MovingCompany",
      "@id": "<?php echo SITE_URL; ?>packers-and-movers-mohanpur-deoghar#organization",
      "name": "Shree Ashirwad Packers and Movers Mohanpur Deoghar",
      "url": "<?php echo SITE_URL; ?>packers-and-movers-mohanpur-deoghar",
      "logo": "<?php echo SITE_URL; ?>assets/images/logo.png",
      "telephone": "+91-9955554330",
      "priceRange": "₹2,500 - ₹25,000",
      "address": {
        "@type": "PostalAddress",
        "addressLocality": "Mohanpur, Deoghar",
        "addressRegion": "Jharkhand",
        "addressCountry": "IN"
      },
      "areaServed": {
        "@type": "AdministrativeArea",
        "name": "Mohanpur, Deoghar"
      }
    },
    {
      "@type": "FAQPage",
      "@id": "<?php echo SITE_URL; ?>packers-and-movers-mohanpur-deoghar#faq",
      "mainEntity": [
        <?php foreach ($faq_list as $i => $faq): ?>
        {
          "@type": "Question",
          "name": <?php echo json_encode($faq['q']); ?>,
          "acceptedAnswer": {
            "@type": "Answer",
            "text": <?php echo json_encode($faq['a']); ?>
          }
        }<?php echo ($i < count($faq_list) - 1) ? ',' : ''; ?>
        <?php endforeach; ?>
      ]
    }
  ]
}
</script>
?>

<main class="site-main">
  <div class="breadcrumb-wrapper">
    <div class="container">
      <div class="breadcrumb-list">
        <span class="breadcrumb-item"><a href="<?php echo SITE_URL; ?>" title="Home">Home</a></span>
        <span class="breadcrumb-separator">/</span>
        <span class="breadcrumb-item"><a href="<?php echo SITE_URL; ?>packers-and-movers-in-deoghar" title="Deoghar">Deoghar</a></span>
        <span class="breadcrumb-separator">/</span>
        <span class="breadcrumb-item active">Packers and Movers in Mohanpur Deoghar</span>
      </div>
    </div>
  </div>

  <section class="hero-section" style="background: linear-gradient(135deg, #0b132b 0%, #1c2541 100%); padding: 60px 0; color: #ffffff;">
    <div class="container">
      <div class="hero-grid" style="display: grid; grid-template-columns: 1.2fr 0.8fr; gap: 40px; align-items: center;">
        <div class="hero-text">
          <span class="section-tag" style="background: rgba(245, 158, 11, 0.15); color: #f59e0b; border: 1px solid rgba(245, 158, 11, 0.4); padding: 6px 16px; border-radius: 20px; font-size: 0.85rem; font-weight: 700; text-transform: uppercase; display: inline-block; margin-bottom: 15px;">IBA Approved Professional Relocation</span>
          <h1 style="font-size: 2.8rem; font-weight: 800; line-height: 1.2; margin-bottom: 20px; color: #ffffff;">Best <span style="color: #f59e0b;">Packers and Movers in Mohanpur Deoghar</span></h1>
          <p style="font-size: 1.1rem; color: #cbd5e1; line-height: 1.7; margin-bottom: 25px;">Looking for professional, damage-free household shifting, car transportation, bike moving, or office relocation services in Deoghar (Babadham)? Shree Ashirwad Packers and Movers provides 7-layer protective packaging, active GPS container tracking, full transit insurance, and genuine IBA-approved GST bills for corporate and government claims.</p>
          <div style="display: flex; gap: 15px; flex-wrap: wrap; margin-bottom: 30px;">
            <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Now:" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none;"><i class="fas fa-phone-alt"></i> Call Now: <?php echo SITE_PHONE; ?></a>
            <a href="https://wa.me/919955554330?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20need%20a%20quote%20for%20Packers+and+Movers+in+Mohanpur+Deoghar" title="WhatsApp Quote" target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none;"><i class="fab fa-whatsapp"></i> WhatsApp Quote</a>
          </div>
        </div>
        <div class="hero-form-card" style="background: rgba(255, 255, 255, 0.05); backdrop-filter: blur(10px); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 16px; padding: 30px;">
          <h2 style="font-size: 1.4rem; color: #ffffff; margin-bottom: 8px; font-weight: 700; text-align: center;">Get Instant Quote</h2>
          <form action="#" method="POST" onsubmit="sendHeroWhatsAppLead(event, this);">
            <div style="margin-bottom: 14px;"><input type="text" name="name" placeholder="Your Full Name" required style="width: 100%; padding: 12px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;"></div>
            <div style="margin-bottom: 14px;"><input type="tel" name="phone" placeholder="10-Digit Phone / WhatsApp" required style="width: 100%; padding: 12px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;"></div>
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 10px; margin-bottom: 14px;">
              <input type="text" name="move_from" placeholder="From" value="Deoghar" required style="width: 100%; padding: 12px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
              <input type="text" name="move_to" placeholder="To" value="Destination" required style="width: 100%; padding: 12px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="margin-bottom: 16px;"><textarea name="message" rows="2" placeholder="Items (1BHK, 2BHK, Bike, Car)" style="width: 100%; padding: 12px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;"></textarea></div>
            <button type="submit" style="width: 100%; padding: 14px; background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%); color: #000; font-weight: 800; font-size: 1rem; border-radius: 8px; border: none;">Get Free Quote on WhatsApp</button>
          </form>
        </div>
      </div>
    </div>
  </section>

  <section style="padding: 40px 0; background: #070d1e; border-bottom: 1px solid rgba(245, 158, 11, 0.2);">
    <div class="container">
      <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 20px; text-align: center;">
        <div style="padding: 15px; background: rgba(23, 42, 84, 0.5); border-radius: 10px;"><div style="font-size: 1.8rem; font-weight: 800; color: #f59e0b;">100% Safe</div><div style="font-size: 0.85rem; color: #cbd5e1;">7-Layer Protection</div></div>
        <div style="padding: 15px; background: rgba(23, 42, 84, 0.5); border-radius: 10px;"><div style="font-size: 1.8rem; font-weight: 800; color: #f59e0b;">IBA Approved</div><div style="font-size: 0.85rem; color: #cbd5e1;">GST Claim Bills</div></div>
        <div style="padding: 15px; background: rgba(23, 42, 84, 0.5); border-radius: 10px;"><div style="font-size: 1.8rem; font-weight: 800; color: #f59e0b;">GPS Tracked</div><div style="font-size: 0.85rem; color: #cbd5e1;">Closed Containers</div></div>
        <div style="padding: 15px; background: rgba(23, 42, 84, 0.5); border-radius: 10px;"><div style="font-size: 1.8rem; font-weight: 800; color: #f59e0b;">2,500+</div><div style="font-size: 0.85rem; color: #cbd5e1;">Satisfied Moves</div></div>
      </div>
    </div>
  </section>

  <section style="padding: 60px 0; background: #0b132b; color: #e2e8f0; line-height: 1.8;">
    <div class="container" style="max-width: 950px;">
      <h2 style="font-size: 2rem; font-weight: 800; color: #ffffff;">Complete Relocation Logistics & Services for Packers and Movers in Mohanpur Deoghar</h2>
      <p style="font-size: 1.05rem; color: #cbd5e1; margin-top: 15px;">Shree Ashirwad Packers and Movers is the premier relocation company serving Deoghar and surrounding regions. Moving your home, office, two-wheeler, or car requires absolute precision, professional packing materials, trained logistics handlers, and guaranteed zero-damage execution. Our dedicated fleet operates continuously across NH-114A, NH-333, and major national routes connecting Deoghar to all major cities across India.</p>
      <p style="font-size: 1.05rem; color: #cbd5e1; margin-top: 15px;">Whether you are shifting locally in Deoghar or moving to long-distance destinations, we bring over 15 years of industry excellence. Our move supervisors conduct pre-move surveys, create itemized inventory lists, and apply 7-layer protective packaging combining bubble wrap, 5-ply corrugated sheets, stretch wrap, foam corner guards, and custom wooden crating for delicate Smart TVs and glass items.</p>
      <h2 style="font-size: 1.8rem; font-weight: 800; color: #ffffff; margin-top: 40px;">Estimated Charges & Cost Breakdown for Packers and Movers in Mohanpur Deoghar</h2>
      <div style="overflow-x: auto; margin-top: 20px;">
        <table style="width: 100%; border-collapse: collapse; background: #172a54; border-radius: 10px; overflow: hidden;">
          <thead><tr style="background: #1c2541; color: #f59e0b;"><th style="padding: 14px;">Shifting Type</th><th style="padding: 14px;">Packaging Grade</th><th style="padding: 14px;">Vehicle Type</th><th style="padding: 14px;">Estimated Price (&#8377;)</th></tr></thead>
          <tbody style="color: #cbd5e1; font-size: 0.9rem;">
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.08);"><td style="padding: 12px; font-weight: 700; color: #fff;">1 BHK Shifting</td><td style="padding: 12px;">Standard 3-Layer</td><td style="padding: 12px;">Pickup Container</td><td style="padding: 12px; font-weight: 700; color: #f59e0b;">&#8377;4,500 - &#8377;8,500</td></tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.08);"><td style="padding: 12px; font-weight: 700; color: #fff;">2 BHK Shifting</td><td style="padding: 12px;">Premium 5-Layer</td><td style="padding: 12px;">14ft Sealed Container</td><td style="padding: 12px; font-weight: 700; color: #f59e0b;">&#8377;8,500 - &#8377;14,500</td></tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.08);"><td style="padding: 12px; font-weight: 700; color: #fff;">3 BHK Shifting</td><td style="padding: 12px;">7-Layer Heavy Crate</td><td style="padding: 12px;">17ft/19ft Container</td><td style="padding: 12px; font-weight: 700; color: #f59e0b;">&#8377;14,500 - &#8377;22,000</td></tr>
            <tr style="border-bottom: 1px solid rgba(255,255,255,0.08);"><td style="padding: 12px; font-weight: 700; color: #fff;">Bike Transport</td><td style="padding: 12px;">Paddy + Bubble Wrap</td><td style="padding: 12px;">Enclosed Carrier</td><td style="padding: 12px; font-weight: 700; color: #f59e0b;">&#8377;2,500 - &#8377;5,500</td></tr>
            <tr><td style="padding: 12px; font-weight: 700; color: #fff;">Car Carrier Shifting</td><td style="padding: 12px;">Wheel-Chock Safety Locks</td><td style="padding: 12px;">Covered Hydraulic Trailer</td><td style="padding: 12px; font-weight: 700; color: #f59e0b;">&#8377;6,500 - &#8377;14,500</td></tr>
          </tbody>
        </table>
      </div>

      <h2 style="font-size: 1.8rem; font-weight: 800; color: #ffffff; margin-top: 40px;">Our 5-Stage Damage-Free Relocation Workflow</h2>
      <div style="display: flex; flex-direction: column; gap: 15px; margin-top: 20px;">
        <div style="background: #101c40; padding: 20px; border-radius: 10px;"><h3 style="color: #f59e0b; font-size: 1.1rem;">1. Pre-Move Survey & Written Quote</h3><p style="font-size: 0.9rem; color: #cbd5e1;">Physical or virtual video survey to assess goods volume and provide transparent binding rates.</p></div>
        <div style="background: #101c40; padding: 20px; border-radius: 10px;"><h3 style="color: #f59e0b; font-size: 1.1rem;">2. Multi-Layer Protective Packaging</h3><p style="font-size: 0.9rem; color: #cbd5e1;">Uniformed experts apply bubble wrap, corrugated sheets, foam guards, and custom wooden crating.</p></div>
        <div style="background: #101c40; padding: 20px; border-radius: 10px;"><h3 style="color: #f59e0b; font-size: 1.1rem;">3. Safe Loading & Anchorage</h3><p style="font-size: 0.9rem; color: #cbd5e1;">Goods are loaded using hydraulic ramps and anchored with safety belts inside closed container trucks.</p></div>
        <div style="background: #101c40; padding: 20px; border-radius: 10px;"><h3 style="color: #f59e0b; font-size: 1.1rem;">4. Highway Transit & Live GPS Monitoring</h3><p style="font-size: 0.9rem; color: #cbd5e1;">Vehicles move under active GPS surveillance with regular position updates sent to clients.</p></div>
        <div style="background: #101c40; padding: 20px; border-radius: 10px;"><h3 style="color: #f59e0b; font-size: 1.1rem;">5. Unloading, Unboxing & Reassembly</h3><p style="font-size: 0.9rem; color: #cbd5e1;">Complete door delivery, unpacking, furniture reassembly, and item positioning at destination.</p></div>
      </div>

      <h2 style="font-size: 1.8rem; font-weight: 800; color: #ffffff; margin-top: 40px;">Related Packers and Movers Services & Locations</h2>
      <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 15px; margin-top: 20px;">
        <div style="background: #101c40; padding: 15px; border-radius: 8px;"><a href="<?php echo SITE_URL; ?>packers-and-movers-in-deoghar" title="Packers and Movers in Deoghar Hub &rarr;" style="color: #f59e0b; font-weight: 700; text-decoration: underline;">Packers and Movers in Deoghar Hub &rarr;</a></div>
        <div style="background: #101c40; padding: 15px; border-radius: 8px;"><a href="<?php echo SITE_URL; ?>packers-and-movers-in-ranchi" title="Packers and Movers in Ranchi &rarr;" style="color: #f59e0b; font-weight: 700; text-decoration: underline;">Packers and Movers in Ranchi &rarr;</a></div>
        <div style="background: #101c40; padding: 15px; border-radius: 8px;"><a href="<?php echo SITE_URL; ?>packers-and-movers-in-dhanbad" title="Packers and Movers in Dhanbad &rarr;" style="color: #f59e0b; font-weight: 700; text-decoration: underline;">Packers and Movers in Dhanbad &rarr;</a></div>
        <div style="background: #101c40; padding: 15px; border-radius: 8px;"><a href="<?php echo SITE_URL; ?>packers-and-movers-in-bokaro" title="Packers and Movers in Bokaro &rarr;" style="color: #f59e0b; font-weight: 700; text-decoration: underline;">Packers and Movers in Bokaro &rarr;</a></div>
        <div style="background: #101c40; padding: 15px; border-radius: 8px;"><a href="<?php echo SITE_URL; ?>packers-and-movers-deoghar-to-ranchi" title="Deoghar to Ranchi Shifting &rarr;" style="color: #f59e0b; font-weight: 700; text-decoration: underline;">Deoghar to Ranchi Shifting &rarr;</a></div>
        <div style="background: #101c40; padding: 15px; border-radius: 8px;"><a href="<?php echo SITE_URL; ?>packers-and-movers-deoghar-to-patna" title="Deoghar to Patna Shifting &rarr;" style="color: #f59e0b; font-weight: 700; text-decoration: underline;">Deoghar to Patna Shifting &rarr;</a></div>
      </div>

  <h2 style="font-size: 1.8rem; font-weight: 800; color: #ffffff; margin-top: 40px;">Frequently Asked Questions (20 FAQs)</h2>
      <div style="display: flex; flex-direction: column; gap: 12px; margin-top: 20px;">
        <?php foreach ($faq_list as $index => $faq): ?>
        <div style="background: #101c40; padding: 18px; border-radius: 8px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h3 style="font-size: 1.05rem; color: #f59e0b; font-weight: 700;">Q<?php echo ($index + 1); ?>: <?php echo htmlspecialchars($faq['q']); ?></h3>
          <p style="font-size: 0.9rem; color: #cbd5e1; margin-top: 6px;"><?php echo htmlspecialchars($faq['a']); ?></p>
        </div>
        <?php endforeach; ?>
      </div>

      <div style="margin-top: 50px; text-align: center; background: linear-gradient(135deg, #172a54 0%, #0b132b 100%); padding: 40px; border-radius: 12px; border: 1.5px solid rgba(245, 158, 11, 0.4);">
        <h2 style="font-size: 2rem; font-weight: 800; color: #ffffff;">Ready to Shift with Packers and Movers in Mohanpur Deoghar?</h2>
        <p style="color: #cbd5e1; margin-top: 10px;">Contact our team today for a guaranteed fixed price quote with 100% damage-free delivery.</p>
        <div style="display: flex; gap: 15px; justify-content: center; margin-top: 20px; flex-wrap: wrap;">
          <a href="tel:<?php echo SITE_PHONE_RAW; ?>" title="Call Now:" style="padding: 14px 28px; background: #e11d48; color: #fff; border-radius: 50px; font-weight: 700; text-decoration: none;"><i class="fas fa-phone-alt"></i> Call Now: <?php echo SITE_PHONE; ?></a>
          <a href="https://wa.me/919955554330?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20want%20a%20quote%20for%20Packers+and+Movers+in+Mohanpur+Deoghar" title="WhatsApp Quote" target="_blank" style="padding: 14px 28px; background: #10b981; color: #fff; border-radius: 50px; font-weight: 700; text-decoration: none;"><i class="fab fa-whatsapp"></i> WhatsApp Quote</a>
        </div>
      </div>
    </div>
  </section>


<!-- Google Business Profile Verified Customer Trust Section -->
<section style="padding: 35px 0; background: #070d19;">
  <div class="container" style="max-width: 1150px; margin: 0 auto; padding: 0 15px;">
    <div class="gmb-trust-card" style="background: rgba(15, 23, 42, 0.85); border: 1.5px solid rgba(245, 158, 11, 0.35); border-radius: 14px; padding: 28px 24px; margin: 0; color: #cbd5e1;">
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

      </div>
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
  var message = "Hello Shree Ashirwad Packers & Movers,\n\nQuote Request:\n- Name: " + name + "\n- Phone: " + phone + "\n- From: " + moveFrom + "\n- To: " + moveTo;
  if (extraMsg) { message += "\n- Details: " + extraMsg; }
  window.location.href = "https://api.whatsapp.com/send?phone=919955554330&text=" + encodeURIComponent(message);
}
</script>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>

