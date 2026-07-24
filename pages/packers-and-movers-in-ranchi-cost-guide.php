<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "Packers and Movers in Ranchi Cost Guide | Price Rates 8409531615";
$page_desc = "Complete Packers and Movers in Ranchi Cost Guide. Detailed breakdown of 1BHK, 2BHK, 3BHK home relocation rates, packing material costs, vehicle transport pricing & IBA billing. Call 8409531615.";
$page_keywords = "packers and movers in ranchi cost guide, movers and packers ranchi rate list, ranchi shifting price calculation, household relocation cost ranchi, 1bhk shifting rate ranchi, 2bhk moving cost ranchi, 3bhk relocation pricing ranchi, bike transport cost ranchi, car carrier rate ranchi, IBA approved moving bill ranchi, packing material cost ranchi, local shifting pricing ranchi";

require_once __DIR__ . '/../includes/header.php';
?>

<main class="site-main">

  <!-- Hero Section with Lead Form -->
  <section class="hero-section" style="background: linear-gradient(135deg, #0b132b 0%, #1c2541 100%); padding: 60px 0; color: #ffffff;">
    <div class="container">
      <div class="hero-grid" style="display: grid; grid-template-columns: 1.2fr 0.8fr; gap: 40px; align-items: center;">
        
        <!-- Hero Text Column -->
        <div class="hero-text">
          <span class="section-tag" style="background: rgba(245, 158, 11, 0.15); color: #f59e0b; border: 1px solid rgba(245, 158, 11, 0.4); padding: 6px 16px; border-radius: 20px; font-size: 0.85rem; font-weight: 700; text-transform: uppercase; display: inline-block; margin-bottom: 15px;">
            Official 2026 Price &amp; Rate Breakdown
          </span>
          <h1 style="font-size: 2.8rem; font-weight: 800; line-height: 1.2; margin-bottom: 20px; color: #ffffff;">
            Ultimate <span style="color: #f59e0b;">Packers and Movers in Ranchi Cost Guide</span>
          </h1>
          <p style="font-size: 1.15rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 25px;">
            Are you planning a local household move within Ranchi or an intercity relocation across India and wondering how much professional shifting services cost? This comprehensive 2026 cost guide from Shree Ashirwad Packers and Movers breaks down every single cost factor — from 1BHK, 2BHK, and 3BHK home shifting rates to 7-layer packaging expenses, vehicle transport tariffs, floor elevation additions, and 100% IBA-approved GST bill structures.
          </p>

          <div style="display: flex; gap: 15px; flex-wrap: wrap; margin-bottom: 30px;">
            <a href="tel:<?php echo SITE_PHONE_RAW; ?>" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
              📞 Call Now: <?php echo SITE_PHONE; ?>
            </a>
            <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers%20and%20Movers,%20I%20want%20information%20about%20shifting%20costs%20in%20Ranchi." target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
              💬 Chat on WhatsApp
            </a>
          </div>

          <div style="display: flex; gap: 20px; font-size: 0.9rem; color: #94a3b8;">
            <span><strong style="color: #f59e0b;">100%</strong> Transparent Rates</span>
            <span><strong style="color: #f59e0b;">Zero</strong> Hidden Taxes</span>
            <span><strong style="color: #f59e0b;">IBA Approved</strong> Invoices</span>
          </div>
        </div>

        <!-- Hero Lead Form Column -->
        <div class="hero-form-card" style="background: rgba(255, 255, 255, 0.05); backdrop-filter: blur(10px); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 16px; padding: 30px; box-shadow: 0 15px 35px rgba(0,0,0,0.4);">
          <h2 style="font-size: 1.4rem; color: #ffffff; margin-bottom: 8px; font-weight: 700; text-align: center;">Get Instant Rate Estimate</h2>
          <p style="font-size: 0.85rem; color: #94a3b8; text-align: center; margin-bottom: 20px;">Receive transparent cost breakdown on WhatsApp in 2 minutes</p>

          <form action="#" method="POST" onsubmit="sendHeroWhatsAppLead(event, this);">
            <div style="margin-bottom: 14px;">
              <input type="text" name="name" class="form-control" placeholder="Your Full Name" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="margin-bottom: 14px;">
              <input type="tel" name="phone" class="form-control" placeholder="10-Digit Phone / WhatsApp Number" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 10px; margin-bottom: 14px;">
              <input type="text" name="move_from" class="form-control" placeholder="Moving From (e.g. Lalpur)" value="Ranchi" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
              <input type="text" name="move_to" class="form-control" placeholder="Moving To (City / Locality)" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="margin-bottom: 16px;">
              <textarea name="message" class="form-control" rows="2" placeholder="Shifting Goods (e.g. 2BHK Home, Bike, Car, Office)" style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;"></textarea>
            </div>
            <button type="submit" class="btn btn-primary" style="width: 100%; padding: 14px; font-weight: 700; font-size: 1rem; border-radius: 8px;">
              Get Quote on WhatsApp
            </button>
          </form>
        </div>

      </div>
    </div>
  </section>

  <!-- Section 2: Trust Counter & Live Achievements -->
  <section class="stats-section" style="padding: 50px 0; background: #070d1e; border-bottom: 1px solid rgba(245, 158, 11, 0.2);">
    <div class="container">
      <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 20px; text-align: center;">
        <div style="padding: 20px; background: rgba(23, 42, 84, 0.5); border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">10,000+</div>
          <div style="font-size: 0.9rem; color: #cbd5e1; margin-top: 5px;">Transparent Price Quotes</div>
        </div>
        <div style="padding: 20px; background: rgba(23, 42, 84, 0.5); border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">Zero</div>
          <div style="font-size: 0.9rem; color: #cbd5e1; margin-top: 5px;">Surprise Fees or Hidden Fees</div>
        </div>
        <div style="padding: 20px; background: rgba(23, 42, 84, 0.5); border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">100%</div>
          <div style="font-size: 0.9rem; color: #cbd5e1; margin-top: 5px;">Itemized Price Transparency</div>
        </div>
        <div style="padding: 20px; background: rgba(23, 42, 84, 0.5); border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">IBA Approved</div>
          <div style="font-size: 0.9rem; color: #cbd5e1; margin-top: 5px;">Official Claim Billing</div>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 3: 6-Card Grid (3x2 Layout) - Key Cost Factors -->
  <section style="padding: 70px 0; background: #0b132b; color: #e2e8f0; line-height: 1.8;">
    <div class="container">
      
      <div style="max-width: 950px; margin: 0 auto;">
        <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Price Architecture</span>
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin: 10px 0 20px 0;">
          Key Factors That Influence <span style="color: #f59e0b;">Packers and Movers Costs in Ranchi</span>
        </h2>
        <p style="font-size: 1.05rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 25px;">
          Understanding how moving companies in Ranchi calculate relocation costs helps homeowners and corporate employees plan their budgets accurately. Shifting tariffs are determined by clear logistical variables rather than random estimates. Here are the 6 primary elements that govern your final relocation invoice:
        </p>

        <!-- 6 Cards Grid (3x2 Layout) -->
        <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px; margin: 30px 0;">
          
          <!-- Card 1 -->
          <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px; box-shadow: 0 10px 25px rgba(0,0,0,0.3);">
            <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;">📦</div>
            <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">Total Goods Volume &amp; Truck Size</h3>
            <p style="font-size: 0.9rem; color: #cbd5e1; line-height: 1.6; margin: 0;">
              The volume of furniture, electronics, and boxes dictates whether a 14ft container, 17ft Eicher, or 20ft container vehicle is required.
            </p>
          </div>

          <!-- Card 2 -->
          <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px; box-shadow: 0 10px 25px rgba(0,0,0,0.3);">
            <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;">🛣️</div>
            <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">Transit Distance &amp; Fuel Consumption</h3>
            <p style="font-size: 0.9rem; color: #cbd5e1; line-height: 1.6; margin: 0;">
              Local moves within Ranchi (e.g. Lalpur to Kanke Road) cost less than intercity trips to Patna, Kolkata, or Delhi due to fuel, highway tolls, and driver tariffs.
            </p>
          </div>

          <!-- Card 3 -->
          <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px; box-shadow: 0 10px 25px rgba(0,0,0,0.3);">
            <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;">🛡️</div>
            <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">Packaging Quality Tier</h3>
            <p style="font-size: 0.9rem; color: #cbd5e1; line-height: 1.6; margin: 0;">
              Standard corrugated packaging vs multi-layer heavy air bubble wrap, foam corner guards, and custom wooden crating for delicate Smart TVs and glass items.
            </p>
          </div>

          <!-- Card 4 -->
          <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px; box-shadow: 0 10px 25px rgba(0,0,0,0.3);">
            <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;">🏢</div>
            <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">Floor Elevation &amp; Elevator Status</h3>
            <p style="font-size: 0.9rem; color: #cbd5e1; line-height: 1.6; margin: 0;">
              Ground floor loading is faster, whereas carrying heavy furniture up 4th or 5th-floor staircases without service elevators requires extra labor deployment.
            </p>
          </div>

          <!-- Card 5 -->
          <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px; box-shadow: 0 10px 25px rgba(0,0,0,0.3);">
            <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;">🚗</div>
            <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">Vehicle Transport Additions</h3>
            <p style="font-size: 0.9rem; color: #cbd5e1; line-height: 1.6; margin: 0;">
              Adding a two-wheeler (Royal Enfield, scooter) or four-wheeler (hatchback, SUV) in enclosed car carriers or dedicated bike slots adds to the overall bill.
            </p>
          </div>

          <!-- Card 6 -->
          <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px; box-shadow: 0 10px 25px rgba(0,0,0,0.3);">
            <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;">📄</div>
            <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">Transit Insurance &amp; GST Compliance</h3>
            <p style="font-size: 0.9rem; color: #cbd5e1; line-height: 1.6; margin: 0;">
              Optional 3% transit insurance covering declared goods value against highway risks, combined with 18% GST invoice compliance for corporate claim submission.
            </p>
          </div>

        </div>

        <p style="font-size: 1.05rem; color: #cbd5e1; line-height: 1.8; margin-top: 25px;">
          By reviewing these key components, you can easily evaluate quotes from various service providers and ensure that your chosen moving company provides complete transparency with zero hidden additions on shifting day. Professional movers analyze your home size, packing tier, vehicle requirements, and elevator conditions before delivering a locked-in quotation that protects your household budget against unforeseen moving-day additions.
        </p>

        <p style="font-size: 1.05rem; color: #cbd5e1; line-height: 1.8; margin-top: 15px;">
          In addition to basic freight costs, factors such as seasonal demand during major festive periods, toll gate taxes across state highways, weatherproofing requirements during monsoon shifting, and specialized handling of heavy marble furniture or piano units are transparently listed in our standardized relocation proposals.
        </p>

      </div>

    </div>
  </section>

  <!-- Section 4: Detailed Local Shifting Rates Breakdown -->
  <section style="padding: 70px 0; background: linear-gradient(180deg, #0b132b 0%, #16203b 100%); color: #ffffff;">
    <div class="container">
      
      <div class="section-header text-center" style="margin-bottom: 50px;">
        <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Rate Comparison &amp; Estimates</span>
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin-top: 10px;">
          Local Shifting Rate Breakdown in <span style="color: #f59e0b;">Ranchi</span>
        </h2>
        <p style="font-size: 1.05rem; color: #cbd5e1; max-width: 800px; margin: 15px auto 0 auto; line-height: 1.7;">
          Here is an estimated price spectrum for local household moving across prominent Ranchi residential areas including Lalpur, Kanke Road, Doranda, Baryatu, Harmu, Dhurwa, and Morabadi:
        </p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 30px;">
        
        <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 28px;">
          <h3 style="font-size: 1.3rem; color: #f59e0b; font-weight: 700; margin-bottom: 14px;">1. 1BHK / Single Room Local Shifting</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; line-height: 1.8;">
            Ideal for bachelor professionals, students, or small families moving minimal household goods locally within Ranchi. Includes single bed, small fridge, washing machine, TV, and 10 to 15 luggage boxes.
          </p>
          <ul style="color: #cbd5e1; font-size: 0.9rem; margin-top: 10px; padding-left: 18px; line-height: 1.6;">
            <li>Estimated Rate Range: ₹4,500 – ₹7,500</li>
            <li>Vehicle Deployed: Tata Ace / Bolero Pickup</li>
            <li>Crew Deployed: 2 to 3 trained packers</li>
          </ul>
        </div>

        <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 28px;">
          <h3 style="font-size: 1.3rem; color: #f59e0b; font-weight: 700; margin-bottom: 14px;">2. 2BHK Apartment Local Shifting</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; line-height: 1.8;">
            Standard 2BHK family relocation within Ranchi. Includes 2 double beds, 4-seater dining table, sofa set, refrigerator, washing machine, 2 AC units, and 20 to 30 carton boxes.
          </p>
          <ul style="color: #cbd5e1; font-size: 0.9rem; margin-top: 10px; padding-left: 18px; line-height: 1.6;">
            <li>Estimated Rate Range: ₹7,500 – ₹12,500</li>
            <li>Vehicle Deployed: 14ft Covered Container Truck</li>
            <li>Crew Deployed: 3 to 4 expert packers</li>
          </ul>
        </div>

        <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 28px;">
          <h3 style="font-size: 1.3rem; color: #f59e0b; font-weight: 700; margin-bottom: 14px;">3. 3BHK / Villa Local Shifting</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; line-height: 1.8;">
            Comprehensive large family home or duplex villa shifting in Ranchi. Includes 3 double beds, 6-seater dining set, heavy sofa sectional, double-door fridge, electronics, and 35 to 50 boxes.
          </p>
          <ul style="color: #cbd5e1; font-size: 0.9rem; margin-top: 10px; padding-left: 18px; line-height: 1.6;">
            <li>Estimated Rate Range: ₹12,500 – ₹18,500</li>
            <li>Vehicle Deployed: 17ft or 19ft Container Truck</li>
            <li>Crew Deployed: 5 to 6 specialized packers</li>
          </ul>
        </div>

        <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 28px;">
          <h3 style="font-size: 1.3rem; color: #f59e0b; font-weight: 700; margin-bottom: 14px;">4. Bike &amp; Two-Wheeler Transport</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; line-height: 1.8;">
            Local or intercity motorcycle and scooter packing and transport. Features paddy straw padding, bubble wrap, corrugated sheets, and heavy nylon tie-down belts inside enclosed trucks.
          </p>
          <ul style="color: #cbd5e1; font-size: 0.9rem; margin-top: 10px; padding-left: 18px; line-height: 1.6;">
            <li>Local Transit Rate: ₹1,500 – ₹2,500</li>
            <li>Intercity Transit Rate: ₹2,500 – ₹5,500</li>
            <li>Zero scratch guarantee included</li>
          </ul>
        </div>

        <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 28px;">
          <h3 style="font-size: 1.3rem; color: #f59e0b; font-weight: 700; margin-bottom: 14px;">5. Car Transport via Covered Carrier</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; line-height: 1.8;">
            Safe vehicle transportation for hatchbacks, sedans, and SUVs traveling intercity from Ranchi to major Indian metro cities using specialized covered hydraulic car carrier trailers.
          </p>
          <ul style="color: #cbd5e1; font-size: 0.9rem; margin-top: 10px; padding-left: 18px; line-height: 1.6;">
            <li>Intercity Rate Range: ₹6,500 – ₹16,500</li>
            <li>Includes pre-transit condition inspection</li>
            <li>Real-time GPS tracking included</li>
          </ul>
        </div>

        <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 28px;">
          <h3 style="font-size: 1.3rem; color: #f59e0b; font-weight: 700; margin-bottom: 14px;">6. Office &amp; Commercial Workspace Moving</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; line-height: 1.8;">
            Corporate office relocation in Ranchi covering IT desktop workstations, office chairs, conference tables, server racks, and physical file archives with zero business downtime.
          </p>
          <ul style="color: #cbd5e1; font-size: 0.9rem; margin-top: 10px; padding-left: 18px; line-height: 1.6;">
            <li>Customized quote after on-site survey</li>
            <li>Anti-static bubble wrap for computers</li>
            <li>Weekend &amp; night shift execution options</li>
          </ul>
        </div>

      </div>

    </div>
  </section>

  <!-- Section 5: The 7-Layer Packaging Cost Justification -->
  <section style="padding: 70px 0; background: #0b132b; color: #e2e8f0; border-top: 1px solid rgba(245, 158, 11, 0.15);">
    <div class="container" style="max-width: 900px;">
      
      <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Quality vs Cost</span>
      <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin: 10px 0 20px 0;">
        Why Premium 7-Layer Packaging Prevents Heavy Damage Expenses
      </h2>

      <p style="font-size: 1.05rem; color: #cbd5e1; margin-bottom: 25px; line-height: 1.8;">
        Hiring cheap, unverified local vendors who use thin single-layer newsprint paper or old cartons often results in broken TV screens, scratched wooden furniture, and damaged kitchenware. Investing in premium 7-layer safety packaging pays for itself by guaranteeing 100% damage-free delivery:
      </p>

      <div style="display: grid; grid-template-columns: 1fr; gap: 16px; margin-bottom: 35px;">
        <div style="background: rgba(23, 42, 84, 0.6); padding: 20px 24px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #ffffff; font-size: 1.15rem; margin-bottom: 6px;">Layer 1: Water-Resistant Stretch Film</h4>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.6;">Seals wooden and leather furniture against rainwater, humidity, and road dust.</p>
        </div>
        <div style="background: rgba(23, 42, 84, 0.6); padding: 20px 24px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #ffffff; font-size: 1.15rem; margin-bottom: 6px;">Layer 2: Shock-Absorbing Heavy Air Bubble Wrap</h4>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.6;">Surrounds TV screens, glass table tops, mirrors, and home appliances to absorb road shocks.</p>
        </div>
        <div style="background: rgba(23, 42, 84, 0.6); padding: 20px 24px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #ffffff; font-size: 1.15rem; margin-bottom: 6px;">Layer 3: Heavy Corrugated Board Sheets</h4>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.6;">Provides rigid structural outer shielding around wardrobes, sofa arms, and wooden tables.</p>
        </div>
        <div style="background: rgba(23, 42, 84, 0.6); padding: 20px 24px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #ffffff; font-size: 1.15rem; margin-bottom: 6px;">Layer 4: High-Density Foam Corner Protectors</h4>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.6;">L-shaped foam corner guards fitted on all sharp furniture edges to eliminate chipping.</p>
        </div>
        <div style="background: rgba(23, 42, 84, 0.6); padding: 20px 24px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #ffffff; font-size: 1.15rem; margin-bottom: 6px;">Layer 5: Customized Wooden Crating</h4>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.6;">Custom timber boxes constructed on-site for high-value artwork, marble items, and large Smart TVs.</p>
        </div>
        <div style="background: rgba(23, 42, 84, 0.6); padding: 20px 24px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #ffffff; font-size: 1.15rem; margin-bottom: 6px;">Layer 6: Industrial Sealing Tapes &amp; Tagging</h4>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.6;">Heavy industrial tape securing all outer layers combined with room-wise color labels.</p>
        </div>
        <div style="background: rgba(23, 42, 84, 0.6); padding: 20px 24px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #ffffff; font-size: 1.15rem; margin-bottom: 6px;">Layer 7: Internal Truck Belting &amp; Lashing</h4>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.6;">Ratchet webbing straps securing packed items firmly to internal truck walls during transit.</p>
        </div>
      </div>

    </div>
  </section>

  <!-- Section 6: Ranchi Locality Pickup Coverage (Internal Link Grid 1 - 4 Links) -->
  <section style="padding: 70px 0; background: #070d1e; color: #ffffff;">
    <div class="container" style="max-width: 900px;">
      
      <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Service Availability</span>
      <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin: 10px 0 20px 0;">
        Locality Moving Coverage Across <span style="color: #f59e0b;">Ranchi</span>
      </h2>

      <p style="font-size: 1.05rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 20px;">
        We provide transparent cost estimates and doorstep packing services across all major residential sectors and commercial hubs in Ranchi:
      </p>

      <!-- Internal Link Grid 1 (4 Contextual Links) -->
      <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 16px; margin-bottom: 30px;">
        <div style="background: #101c40; padding: 18px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #ffffff; font-size: 1.1rem; margin-bottom: 8px;">Lalpur Commercial Sector</h4>
          <p style="font-size: 0.9rem; color: #94a3b8; margin-bottom: 10px;">Local home shifting and office relocation rates in Lalpur.</p>
          <a href="<?php echo SITE_URL; ?>pages/packers-and-movers-lalpur-ranchi.php" style="color: #f59e0b; text-decoration: underline; font-weight: 600; font-size: 0.9rem;">
            Explore Packers Movers Lalpur Ranchi →
          </a>
        </div>

        <div style="background: #101c40; padding: 18px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #ffffff; font-size: 1.1rem; margin-bottom: 8px;">Kanke Road Enclave</h4>
          <p style="font-size: 0.9rem; color: #94a3b8; margin-bottom: 10px;">Premium villa and multi-story apartment moving rates on Kanke Road.</p>
          <a href="<?php echo SITE_URL; ?>pages/packers-and-movers-kanke-road-ranchi.php" style="color: #f59e0b; text-decoration: underline; font-weight: 600; font-size: 0.9rem;">
            Explore Packers Movers Kanke Road Ranchi →
          </a>
        </div>

        <div style="background: #101c40; padding: 18px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #ffffff; font-size: 1.1rem; margin-bottom: 8px;">Doranda Township</h4>
          <p style="font-size: 0.9rem; color: #94a3b8; margin-bottom: 10px;">Doorstep packing service and transparent pricing in Doranda.</p>
          <a href="<?php echo SITE_URL; ?>pages/packers-and-movers-doranda-ranchi.php" style="color: #f59e0b; text-decoration: underline; font-weight: 600; font-size: 0.9rem;">
            Explore Packers Movers Doranda Ranchi →
          </a>
        </div>

        <div style="background: #101c40; padding: 18px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #ffffff; font-size: 1.1rem; margin-bottom: 8px;">Baryatu Educational Hub</h4>
          <p style="font-size: 0.9rem; color: #94a3b8; margin-bottom: 10px;">Shifting rates for RIMS medical staff and residents in Baryatu.</p>
          <a href="<?php echo SITE_URL; ?>pages/packers-and-movers-bariatu-ranchi.php" style="color: #f59e0b; text-decoration: underline; font-weight: 600; font-size: 0.9rem;">
            Explore Packers Movers Bariatu Ranchi →
          </a>
        </div>
      </div>

    </div>
  </section>

  <!-- Section 7: Major Intercity Express Destinations (Internal Link Grid 2 - 4 Links) -->
  <section style="padding: 70px 0; background: #0b132b; color: #ffffff;">
    <div class="container" style="max-width: 900px;">
      
      <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Intercity Shifting Rates</span>
      <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin: 10px 0 20px 0;">
        Popular Intercity Routes from <span style="color: #f59e0b;">Ranchi</span>
      </h2>

      <p style="font-size: 1.05rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 25px;">
        We operate daily express container routes connecting Ranchi to major state capitals and industrial centers across India:
      </p>

      <!-- Internal Link Grid 2 (4 Contextual Links) -->
      <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 16px; margin-bottom: 30px;">
        <div style="background: #172a54; padding: 18px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #ffffff; font-size: 1.1rem; margin-bottom: 8px;">Ranchi to Patna</h4>
          <p style="font-size: 0.9rem; color: #94a3b8; margin-bottom: 10px;">Express container shifting rates connecting Ranchi to Patna Bihar.</p>
          <a href="<?php echo SITE_URL; ?>pages/packers-and-movers-ranchi-to-patna.php" style="color: #f59e0b; text-decoration: underline; font-weight: 600; font-size: 0.9rem;">
            Ranchi to Patna Shifting Services →
          </a>
        </div>

        <div style="background: #172a54; padding: 18px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #ffffff; font-size: 1.1rem; margin-bottom: 8px;">Ranchi to Jamshedpur</h4>
          <p style="font-size: 0.9rem; color: #94a3b8; margin-bottom: 10px;">Intercity moving rates connecting Ranchi to Tatanagar / Jamshedpur.</p>
          <a href="<?php echo SITE_URL; ?>pages/packers-and-movers-ranchi-to-jamshedpur.php" style="color: #f59e0b; text-decoration: underline; font-weight: 600; font-size: 0.9rem;">
            Ranchi to Jamshedpur Shifting Services →
          </a>
        </div>

        <div style="background: #172a54; padding: 18px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #ffffff; font-size: 1.1rem; margin-bottom: 8px;">Ranchi to Kolkata</h4>
          <p style="font-size: 0.9rem; color: #94a3b8; margin-bottom: 10px;">Daily express container transit rates connecting Ranchi to Kolkata West Bengal.</p>
          <a href="<?php echo SITE_URL; ?>pages/packers-and-movers-ranchi-to-kolkata.php" style="color: #f59e0b; text-decoration: underline; font-weight: 600; font-size: 0.9rem;">
            Ranchi to Kolkata Shifting Services →
          </a>
        </div>

        <div style="background: #172a54; padding: 18px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #ffffff; font-size: 1.1rem; margin-bottom: 8px;">Ranchi to Bhubaneswar</h4>
          <p style="font-size: 0.9rem; color: #94a3b8; margin-bottom: 10px;">Direct container shifting rates connecting Ranchi to Bhubaneswar Odisha.</p>
          <a href="<?php echo SITE_URL; ?>pages/packers-and-movers-ranchi-to-bhubaneswar.php" style="color: #f59e0b; text-decoration: underline; font-weight: 600; font-size: 0.9rem;">
            Ranchi to Bhubaneswar Shifting Services →
          </a>
        </div>
      </div>

    </div>
  </section>

  <!-- Section 8: Corporate Claims & IBA Approved Billing Standards -->
  <section style="padding: 70px 0; background: #070d1e; color: #ffffff;">
    <div class="container" style="max-width: 900px;">
      
      <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Official Reimbursements</span>
      <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin: 10px 0 20px 0;">
        IBA Approved GST Billing &amp; Relocation Invoice Structure
      </h2>

      <p style="font-size: 1.05rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 20px;">
        Government employees, PSU officers, defense personnel, bank employees, and corporate managers moving in or out of Ranchi receive 100% compliant reimbursement documentation for company HR approval:
      </p>

      <div style="background: #101c40; border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 12px; padding: 28px; margin-bottom: 30px;">
        <h4 style="color: #f59e0b; font-size: 1.2rem; margin-bottom: 14px; font-weight: 700;">Complete Relocation Claim Document Set Includes:</h4>
        <ol style="margin: 0; padding-left: 20px; color: #cbd5e1; line-height: 1.9; font-size: 0.98rem;">
          <li><strong>Official GST Consignment Invoice</strong> detailing itemized packing rates, freight, labor, and GSTIN breakdown.</li>
          <li><strong>Consignment Lorry Receipt (LR Copy)</strong> stamped with truck registration number and driver details.</li>
          <li><strong>Itemized Goods Inventory Packing List</strong> with room-wise tag numbers and box counts.</li>
          <li><strong>IBA Approved Stamp &amp; Registration Verification Letter</strong> printed on company letterhead.</li>
          <li><strong>Transit Insurance Policy Document</strong> issued by authorized national insurance providers covering full declared value.</li>
          <li><strong>Stamped Official Payment Receipt</strong> for instant HR reimbursement claim verification.</li>
        </ol>
      </div>

      <p style="font-size: 1.05rem; color: #cbd5e1; line-height: 1.8; margin-top: 20px;">
        Every invoice generated by Shree Ashirwad Packers and Movers adheres strictly to standard corporate relocation policies. Our transparent documentation ensures hassle-free claim clearance across government departments, defense branches, banking institutions, and private corporate enterprises without audit objections.
      </p>

    </div>
  </section>

  <!-- Section 9: Step-by-Step Execution Workflow -->
  <section style="padding: 70px 0; background: #0b132b; color: #ffffff; border-top: 1px solid rgba(245, 158, 11, 0.15);">
    <div class="container" style="max-width: 900px;">
      
      <div class="section-header text-center" style="margin-bottom: 45px;">
        <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Structured Estimation Workflow</span>
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin-top: 10px;">
          How to Get an Accurate Shifting Estimate in 5 Steps
        </h2>
        <p style="font-size: 1.05rem; color: #cbd5e1; max-width: 750px; margin: 10px auto 0 auto; line-height: 1.7;">
          Follow our transparent estimation process to lock in your moving dates and lock out unexpected price increases.
        </p>
      </div>

      <div style="display: grid; grid-template-columns: 1fr; gap: 20px;">
        
        <div style="display: flex; gap: 20px; background: #172a54; padding: 24px; border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <div style="font-size: 2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">01</div>
          <div>
            <h3 style="font-size: 1.2rem; color: #ffffff; margin-bottom: 6px;">Initial Inquiry &amp; Inventory Share</h3>
            <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.6;">
              Call us at <strong><?php echo SITE_PHONE; ?></strong> or submit your item list on WhatsApp. Share basic details such as BHK size, pickup locality, and destination.
            </p>
          </div>
        </div>

        <div style="display: flex; gap: 20px; background: #172a54; padding: 24px; border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <div style="font-size: 2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">02</div>
          <div>
            <h3 style="font-size: 1.2rem; color: #ffffff; margin-bottom: 6px;">Free Home Pre-Move Survey (Physical or Video)</h3>
            <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.6;">
              Our move manager inspects your furniture, electronics, and stairwell access to calculate precise volume and packing material quantities.
            </p>
          </div>
        </div>

        <div style="display: flex; gap: 20px; background: #172a54; padding: 24px; border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <div style="font-size: 2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">03</div>
          <div>
            <h3 style="font-size: 1.2rem; color: #ffffff; margin-bottom: 6px;">Formal Itemized Quotation Issuance</h3>
            <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.6;">
              We issue a comprehensive written quote detailing packing materials, labor tariffs, transport freight, toll taxes, and insurance options.
            </p>
          </div>
        </div>

        <div style="display: flex; gap: 20px; background: #172a54; padding: 24px; border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <div style="font-size: 2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">04</div>
          <div>
            <h3 style="font-size: 1.2rem; color: #ffffff; margin-bottom: 6px;">7-Layer Packing &amp; Express Container Loading</h3>
            <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.6;">
              Our uniformed packing team wraps every item securely on moving day and loads the container truck under supervisor inspection.
            </p>
          </div>
        </div>

        <div style="display: flex; gap: 20px; background: #172a54; padding: 24px; border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <div style="font-size: 2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">05</div>
          <div>
            <h3 style="font-size: 1.2rem; color: #ffffff; margin-bottom: 6px;">Doorstep Delivery, Unboxing &amp; Final Payment</h3>
            <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.6;">
              We unload, unbox, and set up your home at your destination. You pay the exact pre-agreed quote with zero unexpected rate additions.
            </p>
          </div>
        </div>

      </div>

    </div>
  </section>

  <!-- Section 10: Frequently Asked Questions (10 Detailed SEO FAQs) -->
  <section style="padding: 70px 0; background: #070d1e; color: #ffffff;">
    <div class="container" style="max-width: 900px;">
      
      <div class="section-header text-center" style="margin-bottom: 45px;">
        <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Cost &amp; Rate FAQs</span>
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin-top: 10px;">
          Frequently Asked Questions About <span style="color: #f59e0b;">Shifting Rates in Ranchi</span>
        </h2>
        <p style="font-size: 1.05rem; color: #cbd5e1; max-width: 800px; margin: 15px auto 0 auto; line-height: 1.7;">
          Here are clear answers to common questions regarding local household moving rates, intercity freight calculation, packing material costs, and IBA approved GST invoice claims in Ranchi.
        </p>
      </div>

      <div style="display: flex; flex-direction: column; gap: 16px;">
        
        <div style="background: #101c40; padding: 20px 24px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Q1: How much does local household shifting cost in Ranchi?</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.7;">
            Local home shifting rates typically range from ₹4,500 to ₹7,500 for a 1BHK apartment, ₹7,500 to ₹12,500 for a 2BHK home, and ₹12,500 to ₹18,500 for a 3BHK villa, depending on total goods volume and packing tier.
          </p>
        </div>

        <div style="background: #101c40; padding: 20px 24px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Q2: Are there any hidden fees added on the final moving day?</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.7;">
            No! At Shree Ashirwad Packers and Movers, our written quotation is 100% fixed and inclusive of packing materials, loading labor, freight, toll taxes, and door unloading.
          </p>
        </div>

        <div style="background: #101c40; padding: 20px 24px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Q3: How is intercity moving cost calculated from Ranchi to other cities?</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.7;">
            Intercity rates are calculated based on highway distance, container truck type (dedicated vs shared part-load), packing materials used, toll taxes, and optional transit insurance coverage.
          </p>
        </div>

        <div style="background: #101c40; padding: 20px 24px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Q4: Do you provide IBA approved GST bills for corporate claim reimbursement?</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.7;">
            Yes, we issue 100% genuine IBA-approved GST consignment invoices, Lorry Receipts (LR), itemized inventory lists, and official receipts accepted by government departments, defense units, and banks.
          </p>
        </div>

        <div style="background: #101c40; padding: 20px 24px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Q5: How much does bike transport cost from Ranchi?</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.7;">
            Local bike transit within Ranchi costs approximately ₹1,500 to ₹2,500, while intercity bike transport to nearby states ranges between ₹2,500 and ₹5,500 with multi-layer bubble wrap protection.
          </p>
        </div>

        <div style="background: #101c40; padding: 20px 24px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Q6: Does floor elevation affect the shifting quotation?</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.7;">
            Yes, moving goods to or from upper floors (3rd floor and above) without service elevators requires additional labor to carry heavy items up staircases, which is factored into the quote.
          </p>
        </div>

        <div style="background: #101c40; padding: 20px 24px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Q7: Is pre-move home inspection free of cost?</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.7;">
            Yes, we offer 100% free physical home visits or virtual video surveys across Ranchi to assess your inventory and provide a precise quotation.
          </p>
        </div>

        <div style="background: #101c40; padding: 20px 24px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Q8: How much is transit insurance for household relocation?</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.7;">
            Transit insurance is typically calculated at 3% of the total declared value of your household goods, covering full financial risk against unforeseen road hazards.
          </p>
        </div>

        <div style="background: #101c40; padding: 20px 24px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Q9: Can I move single luggage boxes or partial goods at cheaper rates?</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.7;">
            Yes, our part-load shared container service allows you to move single furniture items or partial luggage at economical shared container tariffs.
          </p>
        </div>

        <div style="background: #101c40; padding: 20px 24px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Q10: How can I request an instant cost estimate for my move?</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.7;">
            Call or WhatsApp our main helpline at <strong><?php echo SITE_PHONE; ?></strong> (Raw: <strong><?php echo SITE_PHONE_RAW; ?></strong>) or email us at <strong><?php echo SITE_EMAIL; ?></strong> to get your customized quote.
          </p>
        </div>

      </div>

    </div>
  </section>

  <!-- Section 11: Call To Action Banner -->
  <section style="padding: 70px 0; background: linear-gradient(135deg, #172a54 0%, #0b132b 100%); border-top: 1.5px solid rgba(245, 158, 11, 0.4); color: #ffffff;">
    <div class="container" style="max-width: 900px; text-align: center;">
      
      <span class="section-tag" style="background: rgba(245, 158, 11, 0.2); color: #f59e0b; padding: 6px 16px; border-radius: 20px; font-size: 0.85rem; font-weight: 700; text-transform: uppercase;">
        Get Transparent Moving Estimate Today
      </span>

      <h2 style="font-size: 2.3rem; font-weight: 800; margin: 15px 0 15px 0; color: #ffffff;">
        Ready to Plan Your Move with <span style="color: #f59e0b;">Shree Ashirwad Packers and Movers</span>?
      </h2>

      <p style="font-size: 1.05rem; color: #cbd5e1; max-width: 750px; margin: 0 auto 30px auto; line-height: 1.7;">
        Contact our Ranchi Head Office today for a guaranteed fixed-price written quotation and experience stress-free, professional relocation.
      </p>

      <div style="display: flex; gap: 15px; justify-content: center; flex-wrap: wrap; margin-bottom: 25px;">
        <a href="tel:<?php echo SITE_PHONE_RAW; ?>" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 30px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1.05rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
          📞 Call Now: <?php echo SITE_PHONE; ?>
        </a>
        <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers%20and%20Movers,%20I%20want%20a%20shifting%20quote." target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 30px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1.05rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
          💬 Chat on WhatsApp
        </a>
        <a href="<?php echo SITE_URL; ?>pages/contact.php" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 30px; background: linear-gradient(135deg, #1e293b 0%, #0f172a 100%); border: 1.5px solid #f59e0b; color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1.05rem; text-decoration: none; box-shadow: 0 4px 15px rgba(245, 158, 11, 0.2);">
          📍 Contact Office
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
  
  var message = "Hello Shree Ashirwad Packers & Movers,\n\nI would like to request a Shifting Rate Estimate:\n- Name: " + name + "\n- Phone: " + phone + "\n- Moving From: " + moveFrom + "\n- Moving To: " + moveTo;
  
  if (extraMsg && extraMsg.trim() !== '') {
    message += "\n- Details: " + extraMsg;
  }
  
  var whatsappUrl = "https://api.whatsapp.com/send?phone=918409531615&text=" + encodeURIComponent(message);
  window.location.href = whatsappUrl;
}
</script>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
