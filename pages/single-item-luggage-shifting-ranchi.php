<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "Single Item & Luggage Shifting Ranchi | Small Parcel Movers";
$page_desc = "Affordable single item and luggage shifting in Ranchi. Move single sofa, bed, fridge, washing machine or parcel luggage safely with shared vehicle rates. Call 8409531615.";
$page_keywords = "single item luggage shifting ranchi, single furniture movers ranchi, small luggage transport ranchi, part load shifting ranchi, single appliance moving ranchi";

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
            Small Load &amp; Luggage Logistics 2026
          </span>
          <h1 style="font-size: 2.8rem; font-weight: 800; line-height: 1.2; margin-bottom: 20px; color: #ffffff;">
            Single Item &amp; <span style="color: #f59e0b;">Luggage Shifting</span> in Ranchi
          </h1>
          <p style="font-size: 1.15rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 25px;">
            When you need to transport a single double bed, a refrigerator, a heavy washing machine, a single sofa set, or a couple of luggage bags across Ranchi or intercity to another state, renting an entire full-sized truck is completely unnecessary and expensive. Shree Ashirwad Packers and Movers offers specialized single-item and luggage shifting services utilizing shared part-load container trucks and nimble mini logistics pick-up vans. Experience door-to-door small parcel moving with professional 3-layer bubble packaging, elevator handling, barcode inventory tagging, live shipment tracking, and budget-friendly shared freight pricing rates. Whether you are a student relocating to a hostel, a bachelor moving offices, or a family sending excess luggage home, our small load shifting service provides maximum safety at fraction of full vehicle cost.
          </p>

          <div style="display: flex; gap: 15px; flex-wrap: wrap; margin-bottom: 30px;">
            <a href="tel:<?php echo SITE_PHONE_RAW; ?>" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
              📞 Call Luggage Desk: <?php echo SITE_PHONE; ?>
            </a>
            <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers%20and%20Movers,%20I%20need%20single%20item%20luggage%20shifting%20details." target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 28px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
              💬 Chat on WhatsApp
            </a>
          </div>

          <div style="display: flex; gap: 20px; font-size: 0.9rem; color: #94a3b8;">
            <span><strong style="color: #f59e0b;">Part-Load</strong> Shared Truck Rates</span>
            <span><strong style="color: #f59e0b;">3-Layer</strong> Bubble Wrapping</span>
            <span><strong style="color: #f59e0b;">Doorstep</strong> Pickup &amp; Drop</span>
          </div>
        </div>

        <!-- Hero Lead Form Column -->
        <div class="hero-form-card" style="background: rgba(255, 255, 255, 0.05); backdrop-filter: blur(10px); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 16px; padding: 30px; box-shadow: 0 15px 35px rgba(0,0,0,0.4);">
          <h2 style="font-size: 1.4rem; color: #ffffff; margin-bottom: 8px; font-weight: 700; text-align: center;">Get Single Item Shifting Quote</h2>
          <p style="font-size: 0.85rem; color: #94a3b8; text-align: center; margin-bottom: 20px;">Receive instant part-load luggage quotes via WhatsApp</p>

          <form action="#" method="POST" onsubmit="sendHeroWhatsAppLead(event, this);">
            <div style="margin-bottom: 14px;">
              <input type="text" name="name" class="form-control" placeholder="Your Full Name" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="margin-bottom: 14px;">
              <input type="tel" name="phone" class="form-control" placeholder="10-Digit Phone / WhatsApp Number" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 10px; margin-bottom: 14px;">
              <input type="text" name="move_from" class="form-control" placeholder="Pickup Area in Ranchi" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
              <input type="text" name="move_to" class="form-control" placeholder="Destination Area / City" required style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;">
            </div>
            <div style="margin-bottom: 16px;">
              <textarea name="message" class="form-control" rows="2" placeholder="Item Details (e.g. 1 Fridge, 1 Sofa, 3 Luggage Bags)" style="width: 100%; padding: 12px 16px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.2); background: rgba(0,0,0,0.3); color: #fff;"></textarea>
            </div>
            <button type="submit" class="btn btn-primary" style="width: 100%; padding: 14px; font-weight: 700; font-size: 1rem; border-radius: 8px;">
              Get Small Load Quote on WhatsApp
            </button>
          </form>
        </div>

      </div>
    </div>
  </section>

  <!-- Section 2: Key Statistics -->
  <section class="stats-section" style="padding: 50px 0; background: #070d1e; border-bottom: 1px solid rgba(245, 158, 11, 0.2);">
    <div class="container">
      <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 20px; text-align: center;">
        <div style="padding: 20px; background: rgba(23, 42, 84, 0.5); border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">Part-Load</div>
          <div style="font-size: 0.9rem; color: #cbd5e1; margin-top: 5px;">Economical Shared Truck Space</div>
        </div>
        <div style="padding: 20px; background: rgba(23, 42, 84, 0.5); border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">100%</div>
          <div style="font-size: 0.9rem; color: #cbd5e1; margin-top: 5px;">Bubble Wrap Protection</div>
        </div>
        <div style="padding: 20px; background: rgba(23, 42, 84, 0.5); border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">Doorstep</div>
          <div style="font-size: 0.9rem; color: #cbd5e1; margin-top: 5px;">Pickup &amp; Delivery Included</div>
        </div>
        <div style="padding: 20px; background: rgba(23, 42, 84, 0.5); border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <div style="font-size: 2.2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">Same-Day</div>
          <div style="font-size: 0.9rem; color: #cbd5e1; margin-top: 5px;">Local Ranchi Delivery</div>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 3: 6-Card Grid (3x2 Layout) - 6 Single Item Categories -->
  <section style="padding: 70px 0; background: #0b132b; color: #e2e8f0; line-height: 1.8;">
    <div class="container">
      
      <div style="max-width: 950px; margin: 0 auto;">
        <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Single Item Solutions</span>
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin: 10px 0 20px 0;">
          6 Popular <span style="color: #f59e0b;">Single Item &amp; Luggage Shifting</span> Services
        </h2>
        <p style="font-size: 1.05rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 25px;">
          We cater to individuals, students, bachelors, and families moving single household items or excess baggage in Ranchi:
        </p>

        <!-- 6 Cards Grid (3x2 Layout) -->
        <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px; margin: 30px 0;">
          
          <!-- Card 1 -->
          <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px; box-shadow: 0 10px 25px rgba(0,0,0,0.3);">
            <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;">🧊</div>
            <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">1. Refrigerator &amp; Washing Machine Moving</h3>
            <p style="font-size: 0.9rem; color: #cbd5e1; line-height: 1.6; margin: 0;">
              Single home appliance transport wrapped in heavy-duty 3-layer bubble sheet and stretch lamination, handled upright by trained loaders to prevent compressor gas displacement or body scratches.
            </p>
          </div>

          <!-- Card 2 -->
          <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px; box-shadow: 0 10px 25px rgba(0,0,0,0.3);">
            <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;">🛏️</div>
            <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">2. Single Double Bed &amp; Mattress Transport</h3>
            <p style="font-size: 0.9rem; color: #cbd5e1; line-height: 1.6; margin: 0;">
              Precision dismantling of wooden or metal bed frames, individual bubble-wrapping of headboards and side rails, plus heavy vinyl covers for mattresses during doorstep delivery.
            </p>
          </div>

          <!-- Card 3 -->
          <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px; box-shadow: 0 10px 25px rgba(0,0,0,0.3);">
            <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;">🛋️</div>
            <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">3. Sofa Set &amp; Recliner Shifting</h3>
            <p style="font-size: 0.9rem; color: #cbd5e1; margin: 0; line-height: 1.6;">
              Moving individual 3-seater sofas, plush armchairs, or L-shaped sectional recliners protected with corrugated corner guards and multi-layer plastic film to avoid upholstery dust.
            </p>
          </div>

          <!-- Card 4 -->
          <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px; box-shadow: 0 10px 25px rgba(0,0,0,0.3);">
            <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;">🧳</div>
            <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">4. Student &amp; Bachelor Excess Luggage Shifting</h3>
            <p style="font-size: 0.9rem; color: #cbd5e1; margin: 0; line-height: 1.6;">
              Transporting 2 to 10 luggage bags, clothes cartons, books, and study desks across Ranchi or to outstation hostels at shared part-load container rates.
            </p>
          </div>

          <!-- Card 5 -->
          <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px; box-shadow: 0 10px 25px rgba(0,0,0,0.3);">
            <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;">📺</div>
            <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">5. Smart LED TV &amp; Electronics Relocation</h3>
            <p style="font-size: 0.9rem; color: #cbd5e1; margin: 0; line-height: 1.6;">
              Single TV, desktop computer, or audio system transport encased inside custom wooden frame crates or heavy double-wall cardboard cartons with thick foam corner padding.
            </p>
          </div>

          <!-- Card 6 -->
          <div style="background: linear-gradient(145deg, #172a54 0%, #0d1736 100%); border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 14px; padding: 22px; box-shadow: 0 10px 25px rgba(0,0,0,0.3);">
            <div style="background: rgba(245, 158, 11, 0.15); width: 42px; height: 42px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #f59e0b; margin-bottom: 12px;">🏍️</div>
            <h3 style="font-size: 1.1rem; color: #ffffff; font-weight: 700; margin-bottom: 10px;">6. Single Two-Wheeler / Bike Transport</h3>
            <p style="font-size: 0.9rem; color: #cbd5e1; margin: 0; line-height: 1.6;">
              Shipping a single motorcycle, scooter, or electric bicycle alongside household luggage in covered part-load container trucks with wheel clamp security straps.
            </p>
          </div>

        </div>

        <p style="font-size: 1.05rem; color: #cbd5e1; line-height: 1.8; margin-top: 25px;">
          These single item shifting services provide flexible, economical, and professional logistics without requiring full truck rentals.
        </p>

      </div>

    </div>
  </section>

  <!-- Section 4: Single Item Rate Matrix -->
  <section style="padding: 70px 0; background: linear-gradient(180deg, #0b132b 0%, #16203b 100%); color: #ffffff;">
    <div class="container" style="max-width: 900px;">
      
      <div class="section-header text-center" style="margin-bottom: 45px;">
        <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Part-Load Pricing</span>
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin-top: 10px;">
          Standard Single Item &amp; Luggage Rates in <span style="color: #f59e0b;">Ranchi</span>
        </h2>
        <p style="font-size: 1.05rem; color: #cbd5e1; max-width: 800px; margin: 15px auto 0 auto; line-height: 1.7;">
          Transparent rate slabs for single furniture items, home appliances, and luggage bags:
        </p>
      </div>

      <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 24px;">
        
        <div style="background: #172a54; padding: 24px; border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.3);">
          <h3 style="font-size: 1.2rem; color: #f59e0b; font-weight: 700; margin-bottom: 12px;">🏡 Local Single Item Rates (Ranchi)</h3>
          <ul style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.8; padding-left: 18px; margin: 0;">
            <li>Single Fridge / Washing Machine: ₹1,200 – ₹2,200</li>
            <li>Single Double Bed + Mattress: ₹1,800 – ₹3,000</li>
            <li>Single 3-Seater Sofa Set: ₹1,500 – ₹2,500</li>
            <li>1 to 5 Luggage Cartons / Bags: ₹1,000 – ₹1,800</li>
            <li>Includes doorstep pickup &amp; bubble wrapping</li>
            <li>Includes stair/elevator loading assistance</li>
          </ul>
        </div>

        <div style="background: #172a54; padding: 24px; border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.3);">
          <h3 style="font-size: 1.2rem; color: #f59e0b; font-weight: 700; margin-bottom: 12px;">🌐 Intercity Part-Load Luggage Rates</h3>
          <ul style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.8; padding-left: 18px; margin: 0;">
            <li>Ranchi to Patna (5 Cartons): ₹2,500 – ₹4,500</li>
            <li>Ranchi to Kolkata (5 Cartons): ₹3,000 – ₹5,000</li>
            <li>Ranchi to Delhi NCR (Part-Load): ₹4,500 – ₹7,500</li>
            <li>Ranchi to Bangalore (Part-Load): ₹5,500 – ₹9,000</li>
            <li>Includes shared container truck shipping</li>
            <li>Includes door-to-door delivery service</li>
          </ul>
        </div>

      </div>

      <p style="font-size: 1.05rem; color: #cbd5e1; line-height: 1.8; margin-top: 25px;">
        All single item transport quotes from Shree Ashirwad Packers are fixed prior to loading, guaranteeing zero unexpected labor add-ons or hidden delivery surcharges.
      </p>

    </div>
  </section>

  <!-- Section 5: Step-by-Step Single Item Shifting Workflow -->
  <section style="padding: 70px 0; background: #0b132b; color: #e2e8f0; border-top: 1px solid rgba(245, 158, 11, 0.15);">
    <div class="container" style="max-width: 900px;">
      
      <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Operational Workflow</span>
      <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin: 10px 0 20px 0;">
        5 Steps of Our Single Item Shifting Workflow
      </h2>

      <p style="font-size: 1.05rem; color: #cbd5e1; margin-bottom: 25px; line-height: 1.8;">
        How we process and deliver small luggage and single furniture items safely:
      </p>

      <div style="display: grid; grid-template-columns: 1fr; gap: 16px; margin-bottom: 35px;">
        <div style="background: rgba(23, 42, 84, 0.6); padding: 20px 24px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #ffffff; font-size: 1.15rem; margin-bottom: 6px;">1. Online Booking &amp; Item Dimension Assessment</h4>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.6;">
            Share item details, dimensions, and photos on WhatsApp to receive an instant fixed part-load rate quote.
          </p>
        </div>
        <div style="background: rgba(23, 42, 84, 0.6); padding: 20px 24px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #ffffff; font-size: 1.15rem; margin-bottom: 6px;">2. Doorstep Arrival &amp; 3-Layer Bubble Packaging</h4>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.6;">
            Our mini logistics van arrives with 2 handlers who wrap your single appliance or furniture piece in heavy bubble sheet and stretch film.
          </p>
        </div>
        <div style="background: rgba(23, 42, 84, 0.6); padding: 20px 24px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #ffffff; font-size: 1.15rem; margin-bottom: 6px;">3. Safe Staircase &amp; Elevator Carrying</h4>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.6;">
            Handlers use lifting straps and protective blankets to carry items down staircases or elevator towers without scratching building walls.
          </p>
        </div>
        <div style="background: rgba(23, 42, 84, 0.6); padding: 20px 24px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #ffffff; font-size: 1.15rem; margin-bottom: 6px;">4. Shared Container Vehicle Staging &amp; Anchoring</h4>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.6;">
            Items are loaded into covered part-load container trucks, strapped securely to side rails, and barcoded for inventory safety.
          </p>
        </div>
        <div style="background: rgba(23, 42, 84, 0.6); padding: 20px 24px; border-radius: 10px; border-left: 4px solid #f59e0b;">
          <h4 style="color: #ffffff; font-size: 1.15rem; margin-bottom: 6px;">5. Doorstep Delivery &amp; Re-Assembly Assistance</h4>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.6;">
            Upon reaching destination, items are unwrapped, positioned in your desired room, and reassembled if required.
          </p>
        </div>
      </div>

    </div>
  </section>

  <!-- Section 6: Localities Served in Ranchi (Internal Link Grid 1 - 4 Links) -->
  <section style="padding: 70px 0; background: #070d1e; color: #ffffff;">
    <div class="container" style="max-width: 900px;">
      
      <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Service Locations</span>
      <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin: 10px 0 20px 0;">
        Single Item Shifting Across <span style="color: #f59e0b;">Ranchi</span> Neighborhoods
      </h2>

      <p style="font-size: 1.05rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 20px;">
        We offer fast mini-truck and part-load pickup across all key residential sectors in Ranchi:
      </p>

      <!-- Internal Link Grid 1 (4 Contextual Links) -->
      <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 16px; margin-bottom: 30px;">
        <div style="background: #101c40; padding: 18px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #ffffff; font-size: 1.1rem; margin-bottom: 8px;">Lalpur Student Hub</h4>
          <p style="font-size: 0.9rem; color: #94a3b8; margin-bottom: 10px;">Luggage and study table shifting for students and bachelors in Lalpur.</p>
          <a href="<?php echo SITE_URL; ?>pages/packers-and-movers-lalpur-ranchi.php" style="color: #f59e0b; text-decoration: underline; font-weight: 600; font-size: 0.9rem;">
            Packers Movers Lalpur Ranchi →
          </a>
        </div>

        <div style="background: #101c40; padding: 18px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #ffffff; font-size: 1.1rem; margin-bottom: 8px;">Doranda Commercial Sector</h4>
          <p style="font-size: 0.9rem; color: #94a3b8; margin-bottom: 10px;">Single office desk and parcel shifting services in Doranda.</p>
          <a href="<?php echo SITE_URL; ?>pages/packers-and-movers-doranda-ranchi.php" style="color: #f59e0b; text-decoration: underline; font-weight: 600; font-size: 0.9rem;">
            Packers Movers Doranda Ranchi →
          </a>
        </div>

        <div style="background: #101c40; padding: 18px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #ffffff; font-size: 1.1rem; margin-bottom: 8px;">Kokar Industrial Zone</h4>
          <p style="font-size: 0.9rem; color: #94a3b8; margin-bottom: 10px;">Part-load appliance and machinery part transport in Kokar.</p>
          <a href="<?php echo SITE_URL; ?>pages/packers-and-movers-kokar-ranchi.php" style="color: #f59e0b; text-decoration: underline; font-weight: 600; font-size: 0.9rem;">
            Packers Movers Kokar Ranchi →
          </a>
        </div>

        <div style="background: #101c40; padding: 18px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #ffffff; font-size: 1.1rem; margin-bottom: 8px;">Kantatoli Transport Hub</h4>
          <p style="font-size: 0.9rem; color: #94a3b8; margin-bottom: 10px;">Fast luggage dispatch and part-load container shipping in Kantatoli.</p>
          <a href="<?php echo SITE_URL; ?>pages/packers-and-movers-kantatoli-ranchi.php" style="color: #f59e0b; text-decoration: underline; font-weight: 600; font-size: 0.9rem;">
            Packers Movers Kantatoli Ranchi →
          </a>
        </div>
      </div>

    </div>
  </section>

  <!-- Section 7: Popular Intercity Part-Load Routes (Internal Link Grid 2 - 4 Links) -->
  <section style="padding: 70px 0; background: #0b132b; color: #ffffff;">
    <div class="container" style="max-width: 900px;">
      
      <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Part-Load Routes</span>
      <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin: 10px 0 20px 0;">
        Intercity Luggage &amp; Part-Load Corridors from <span style="color: #f59e0b;">Ranchi</span>
      </h2>

      <p style="font-size: 1.05rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 25px;">
        Shared container truck routes connecting Ranchi to neighboring states:
      </p>

      <!-- Internal Link Grid 2 (4 Contextual Links) -->
      <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 16px; margin-bottom: 30px;">
        <div style="background: #172a54; padding: 18px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #ffffff; font-size: 1.1rem; margin-bottom: 8px;">Ranchi to Ramgarh Part-Load Corridor</h4>
          <p style="font-size: 0.9rem; color: #94a3b8; margin-bottom: 10px;">Inter-district single furniture moving connecting Ranchi to Ramgarh.</p>
          <a href="<?php echo SITE_URL; ?>pages/packers-and-movers-ranchi-to-ramgarh.php" style="color: #f59e0b; text-decoration: underline; font-weight: 600; font-size: 0.9rem;">
            Ranchi to Ramgarh Shifting Services →
          </a>
        </div>

        <div style="background: #172a54; padding: 18px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #ffffff; font-size: 1.1rem; margin-bottom: 8px;">Ranchi to Deoghar Parcel Route</h4>
          <p style="font-size: 0.9rem; color: #94a3b8; margin-bottom: 10px;">Part-load luggage transport connecting Ranchi to Deoghar.</p>
          <a href="<?php echo SITE_URL; ?>pages/packers-and-movers-ranchi-to-deoghar.php" style="color: #f59e0b; text-decoration: underline; font-weight: 600; font-size: 0.9rem;">
            Ranchi to Deoghar Shifting Services →
          </a>
        </div>

        <div style="background: #172a54; padding: 18px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #ffffff; font-size: 1.1rem; margin-bottom: 8px;">Ranchi to Giridih Luggage Express</h4>
          <p style="font-size: 0.9rem; color: #94a3b8; margin-bottom: 10px;">Single appliance &amp; luggage transport connecting Ranchi to Giridih.</p>
          <a href="<?php echo SITE_URL; ?>pages/packers-and-movers-ranchi-to-giridih.php" style="color: #f59e0b; text-decoration: underline; font-weight: 600; font-size: 0.9rem;">
            Ranchi to Giridih Shifting Services →
          </a>
        </div>

        <div style="background: #172a54; padding: 18px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h4 style="color: #ffffff; font-size: 1.1rem; margin-bottom: 8px;">Ranchi to Daltonganj Part-Load Link</h4>
          <p style="font-size: 0.9rem; color: #94a3b8; margin-bottom: 10px;">Inter-district luggage dispatch connecting Ranchi to Daltonganj.</p>
          <a href="<?php echo SITE_URL; ?>pages/packers-and-movers-ranchi-to-daltonganj.php" style="color: #f59e0b; text-decoration: underline; font-weight: 600; font-size: 0.9rem;">
            Ranchi to Daltonganj Shifting Services →
          </a>
        </div>
      </div>

    </div>
  </section>

  <!-- Section 8: Single Item Moving Checklist -->
  <section style="padding: 70px 0; background: #070d1e; color: #ffffff;">
    <div class="container" style="max-width: 900px;">
      
      <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Single Item Checklist</span>
      <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin: 10px 0 20px 0;">
        7 Prep Tips for Single Item &amp; Luggage Shifting
      </h2>

      <p style="font-size: 1.05rem; color: #cbd5e1; line-height: 1.8; margin-bottom: 20px;">
        Follow these practical preparation tips before booking small load relocation:
      </p>

      <div style="background: #101c40; border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 12px; padding: 28px; margin-bottom: 30px;">
        <h4 style="color: #f59e0b; font-size: 1.2rem; margin-bottom: 14px; font-weight: 700;">Small Load Action Plan:</h4>
        <ol style="margin: 0; padding-left: 20px; color: #cbd5e1; line-height: 1.9; font-size: 0.98rem;">
          <li><strong>Measure Doorway &amp; Elevator Dimensions:</strong> Verify that single furniture items or double beds fit through building elevators, stairwells, and apartment entryways before scheduling pickup.</li>
          <li><strong>Empty &amp; Defrost Refrigerators 12 Hours Prior:</strong> Remove all food items, ice trays, and dry internal surfaces completely before pickup to prevent water leakage during part-load transit.</li>
          <li><strong>Drain Water Hoses from Washing Machines:</strong> Disconnect inlet/outlet water pipes, drain internal drums, and secure the rear drum transit bolt to prevent internal motor damage.</li>
          <li><strong>Label Cartons with Destination Name &amp; Phone:</strong> Stick clear address labels and destination contact numbers on all luggage bags and boxes for seamless part-load barcode identification.</li>
          <li><strong>Secure Glass Shelves &amp; Drawers:</strong> Remove glass refrigerator shelves, lock wooden cabinet drawers, or tape them securely shut before applying 3-layer bubble wrapping.</li>
          <li><strong>Verify Shared Container Dispatch Schedule:</strong> Confirm expected part-load container departure dates and doorstep delivery timelines with our Ranchi logistics coordinator.</li>
          <li><strong>Keep Payment Receipt &amp; Consignment Copy Ready:</strong> Retain your official consignment note and itemized inventory manifest copy for easy tracking and delivery verification.</li>
        </ol>
      </div>

    </div>
  </section>

  <!-- Section 9: 5 Quality Controls in Part-Load Transport -->
  <section style="padding: 70px 0; background: #0b132b; color: #ffffff; border-top: 1px solid rgba(245, 158, 11, 0.15);">
    <div class="container" style="max-width: 900px;">
      
      <div class="section-header text-center" style="margin-bottom: 45px;">
        <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Quality Controls</span>
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin-top: 10px;">
          5 Controls Deployed in Single Item Shifting
        </h2>
        <p style="font-size: 1.05rem; color: #cbd5e1; max-width: 750px; margin: 10px auto 0 auto; line-height: 1.7;">
          Our part-load safety protocols ensure individual items are never lost, mixed, or damaged in transit.
        </p>
      </div>

      <div style="display: grid; grid-template-columns: 1fr; gap: 20px;">
        
        <div style="display: flex; gap: 20px; background: #172a54; padding: 24px; border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <div style="font-size: 2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">01</div>
          <div>
            <h3 style="font-size: 1.2rem; color: #ffffff; margin-bottom: 6px;">Individual Barcode Tagging &amp; Manifesting</h3>
            <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.6;">
              Every single parcel or furniture item gets a unique barcode label matching your consignment manifest to eliminate mix-ups.
            </p>
          </div>
        </div>

        <div style="display: flex; gap: 20px; background: #172a54; padding: 24px; border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <div style="font-size: 2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">02</div>
          <div>
            <h3 style="font-size: 1.2rem; color: #ffffff; margin-bottom: 6px;">Multi-Layer Heavy Duty Bubble Wrap Lamination</h3>
            <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.6;">
              Single items receive full 3-layer bubble wrapping and stretch film protection equivalent to full house moves.
            </p>
          </div>
        </div>

        <div style="display: flex; gap: 20px; background: #172a54; padding: 24px; border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <div style="font-size: 2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">03</div>
          <div>
            <h3 style="font-size: 1.2rem; color: #ffffff; margin-bottom: 6px;">Internal Vehicle Partitioning &amp; Ratchet Strapping</h3>
            <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.6;">
              Part-load consignments are separated inside container trucks using internal partition nets and heavy ratchet straps.
            </p>
          </div>
        </div>

        <div style="display: flex; gap: 20px; background: #172a54; padding: 24px; border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <div style="font-size: 2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">04</div>
          <div>
            <h3 style="font-size: 1.2rem; color: #ffffff; margin-bottom: 6px;">Doorstep Pick &amp; Drop Mini Logistics Vans</h3>
            <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.6;">
              We deploy nimble mini trucks for fast doorstep pickup in narrow city lanes across Ranchi.
            </p>
          </div>
        </div>

        <div style="display: flex; gap: 20px; background: #172a54; padding: 24px; border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <div style="font-size: 2rem; font-weight: 800; color: #f59e0b; font-family: 'Poppins', sans-serif;">05</div>
          <div>
            <h3 style="font-size: 1.2rem; color: #ffffff; margin-bottom: 6px;">Full Value Part-Load Transit Insurance</h3>
            <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.6;">
              Declaring individual item value allows quick single-item transit insurance coverage against transit hazards.
            </p>
          </div>
        </div>

      </div>

    </div>
  </section>

  <!-- Section 10: Frequently Asked Questions (22 Detailed Single Item FAQs) -->
  <section style="padding: 70px 0; background: #070d1e; color: #ffffff;">
    <div class="container" style="max-width: 900px;">
      
      <div class="section-header text-center" style="margin-bottom: 45px;">
        <span class="section-tag" style="color: #f59e0b; text-transform: uppercase; font-weight: 700; font-size: 0.85rem; letter-spacing: 1px;">Luggage Shifting FAQs</span>
        <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; margin-top: 10px;">
          Frequently Asked Questions About <span style="color: #f59e0b;">Single Item Shifting in Ranchi</span>
        </h2>
        <p style="font-size: 1.05rem; color: #cbd5e1; max-width: 800px; margin: 15px auto 0 auto; line-height: 1.7;">
          Authoritative answers to common questions about part-load rates, single appliance packing, luggage transport, delivery timelines, and doorstep pickup.
        </p>
      </div>

      <div style="display: flex; flex-direction: column; gap: 16px;">
        
        <div style="background: #101c40; padding: 20px 24px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Q1: What is single item and luggage shifting in Ranchi?</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.7;">
            It is a specialized logistics service for transporting individual furniture pieces, single home appliances, or small luggage consignments without booking an entire full-capacity truck.
          </p>
        </div>

        <div style="background: #101c40; padding: 20px 24px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Q2: How much does local single item shifting cost within Ranchi?</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.7;">
            Local single item transport rates range from ₹1,000 to ₹2,500 depending on item size, weight, floor elevation, and total transit distance.
          </p>
        </div>

        <div style="background: #101c40; padding: 20px 24px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Q3: Can I shift a single refrigerator or washing machine intercity from Ranchi?</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.7;">
            Yes, single home appliances are packed in 3-layer bubble wrapping and transported intercity using our part-load shared container network.
          </p>
        </div>

        <div style="background: #101c40; padding: 20px 24px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Q4: How works part-load shared container truck transport?</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.7;">
            Part-load transport consolidates small goods from multiple clients bound for the same destination corridor into a single container truck, drastically reducing individual shipping rates.
          </p>
        </div>

        <div style="background: #101c40; padding: 20px 24px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Q5: Do you provide doorstep pickup and unloading for a single sofa or bed?</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.7;">
            Yes, our service includes doorstep pickup by trained handlers, protective wrapping, vehicle loading, transport, and doorstep room positioning.
          </p>
        </div>

        <div style="background: #101c40; padding: 20px 24px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Q6: How are single double beds dismantled and reassembled?</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.7;">
            Our carpentry technicians unbolt wooden bed frames, pack headboards/side rails individually, and reassemble the bed at your new address.
          </p>
        </div>

        <div style="background: #101c40; padding: 20px 24px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Q7: Is packaging included in single item shifting quotes?</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.7;">
            Yes, all single item quotes include complete 3-layer bubble wrap and stretch film packaging supplies and labor.
          </p>
        </div>

        <div style="background: #101c40; padding: 20px 24px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Q8: How long does intercity part-load luggage delivery take?</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.7;">
            Intercity part-load delivery usually takes 3 to 5 days depending on destination distance and container consolidation schedules.
          </p>
        </div>

        <div style="background: #101c40; padding: 20px 24px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Q9: Can students book luggage shifting for hostel relocation in Ranchi?</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.7;">
            Yes, we offer special student discount packages for shifting 2 to 10 luggage bags, books, and personal belongings between college hostels and homes.
          </p>
        </div>

        <div style="background: #101c40; padding: 20px 24px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Q10: Are delicate LED TVs safe during single item parcel transport?</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.7;">
            Yes, LED TVs are encased in anti-static bubble wrap, double-wall corrugated cartons, or custom wooden crates for 100% display protection.
          </p>
        </div>

        <div style="background: #101c40; padding: 20px 24px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Q11: How do you prevent single items from getting mixed up in shared container trucks?</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.7;">
            Each consignment item is labeled with a unique barcode tag matching your manifest receipt, ensuring 0% mix-up risk.
          </p>
        </div>

        <div style="background: #101c40; padding: 20px 24px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Q12: Is transit insurance available for single furniture or luggage items?</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.7;">
            Yes, clients can opt for declared-value transit insurance covering damage, loss, or highway accident during intercity part-load transit.
          </p>
        </div>

        <div style="background: #101c40; padding: 20px 24px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Q13: What mini-vehicles are used for local single item pickup in Ranchi?</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.7;">
            We deploy Tata Ace, Mahindra Bolero Pickup, and covered 8-foot mini containers for fast navigation through narrow city streets.
          </p>
        </div>

        <div style="background: #101c40; padding: 20px 24px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Q14: Can I book single item shifting on short notice or same-day?</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.7;">
            Yes, local single item moves within Ranchi can be scheduled on a same-day basis subject to mini-truck availability.
          </p>
        </div>

        <div style="background: #101c40; padding: 20px 24px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Q15: How can I book single item and luggage shifting with Shree Ashirwad Packers?</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.7;">
            Call our luggage desk at <strong><?php echo SITE_PHONE; ?></strong> (Raw: <strong><?php echo SITE_PHONE_RAW; ?></strong>) or email <strong><?php echo SITE_EMAIL; ?></strong> for immediate booking.
          </p>
        </div>

        <div style="background: #101c40; padding: 20px 24px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Q16: Do handlers assist with carrying items up multi-story buildings without elevators?</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.7;">
            Yes, our crew handles manual staircase carrying, with nominal floor labor adjustments specified upfront in the quote.
          </p>
        </div>

        <div style="background: #101c40; padding: 20px 24px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Q17: What items are excluded from single parcel shifting?</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.7;">
            Excluded items include cash, jewelry, hazardous chemicals, gas cylinders, perishable food, and illegal contraband.
          </p>
        </div>

        <div style="background: #101c40; padding: 20px 24px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Q18: Can a motorcycle be shifted along with 2 luggage bags?</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.7;">
            Yes, we provide combo part-load packages for moving a bike along with luggage bags in covered container vehicles.
          </p>
        </div>

        <div style="background: #101c40; padding: 20px 24px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Q19: Are there any hidden fees or extra driver surcharges?</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.7;">
            No, all single item quotes are fixed upon survey sign-off, guaranteeing zero hidden fees or driver tipping demands.
          </p>
        </div>

        <div style="background: #101c40; padding: 20px 24px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Q20: Can I track my part-load luggage shipment online?</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.7;">
            Yes, part-load consignments receive consignment tracking IDs for live status updates via WhatsApp or phone.
          </p>
        </div>

        <div style="background: #101c40; padding: 20px 24px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Q21: How are wooden dining tables protected during single item moving?</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.7;">
            Table legs are unbolted or corner-shielded, glass tops wrapped in bubble film and wooden crates, and table surfaces shrink-laminated.
          </p>
        </div>

        <div style="background: #101c40; padding: 20px 24px; border-radius: 10px; border: 1px solid rgba(245, 158, 11, 0.2);">
          <h3 style="font-size: 1.1rem; color: #f59e0b; font-weight: 700; margin-bottom: 8px;">Q22: Why is Shree Ashirwad Packers the best choice for single item shifting in Ranchi?</h3>
          <p style="font-size: 0.95rem; color: #cbd5e1; margin: 0; line-height: 1.7;">
            We combine low part-load shared rates, professional 3-layer bubble wrapping, barcode tracking, and guaranteed doorstep delivery for hassle-free small moves.
          </p>
        </div>

      </div>

    </div>
  </section>

  <!-- Section 11: Call To Action Banner -->
  <section style="padding: 70px 0; background: linear-gradient(135deg, #172a54 0%, #0b132b 100%); border-top: 1.5px solid rgba(245, 158, 11, 0.4); color: #ffffff;">
    <div class="container" style="max-width: 900px; text-align: center;">
      
      <span class="section-tag" style="background: rgba(245, 158, 11, 0.2); color: #f59e0b; padding: 6px 16px; border-radius: 20px; font-size: 0.85rem; font-weight: 700; text-transform: uppercase;">
        Economical Part-Load &amp; Luggage Shifting
      </span>

      <h2 style="font-size: 2.3rem; font-weight: 800; margin: 15px 0 15px 0; color: #ffffff;">
        Book Single Item Move with <span style="color: #f59e0b;">Shree Ashirwad Packers</span>
      </h2>

      <p style="font-size: 1.05rem; color: #cbd5e1; max-width: 750px; margin: 0 auto 30px auto; line-height: 1.7;">
        Contact our small load team today for a free price quote, 3-layer bubble packaging, and doorstep mini-truck pickup booking.
      </p>

      <div style="display: flex; gap: 15px; justify-content: center; flex-wrap: wrap; margin-bottom: 25px;">
        <a href="tel:<?php echo SITE_PHONE_RAW; ?>" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 30px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1.05rem; text-decoration: none; box-shadow: 0 4px 15px rgba(225, 29, 72, 0.4);">
          📞 Call Luggage Desk: <?php echo SITE_PHONE; ?>
        </a>
        <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers%20and%20Movers,%20I%20want%20to%20book%20single%20item%20shifting." target="_blank" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 30px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1.05rem; text-decoration: none; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);">
          💬 Chat on WhatsApp
        </a>
        <a href="<?php echo SITE_URL; ?>pages/contact.php" style="display: inline-flex; align-items: center; justify-content: center; padding: 14px 30px; background: linear-gradient(135deg, #1e293b 0%, #0f172a 100%); border: 1.5px solid #f59e0b; color: #ffffff; border-radius: 50px; font-weight: 700; font-size: 1.05rem; text-decoration: none; box-shadow: 0 4px 15px rgba(245, 158, 11, 0.2);">
          📍 Visit Ranchi Office
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
  
  var message = "Hello Shree Ashirwad Packers & Movers,\n\nI would like to request a Single Item Shifting Quote:\n- Name: " + name + "\n- Phone: " + phone + "\n- Pickup Area: " + moveFrom + "\n- Destination: " + moveTo;
  
  if (extraMsg && extraMsg.trim() !== '') {
    message += "\n- Item Details: " + extraMsg;
  }
  
  var whatsappUrl = "https://api.whatsapp.com/send?phone=918409531615&text=" + encodeURIComponent(message);
  window.location.href = whatsappUrl;
}
</script>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
