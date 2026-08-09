<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = "Relocation Services - Shree Ashirwad Packers and Movers";
$page_desc = "Explore our complete range of professional shifting services: Household Relocation, Office Moving, Car & Bike Transport, and Warehouse Storage across India.";
$page_keywords = "packers and movers services, household shifting, office relocation, car transport, bike shipping, storage warehouse india";

require_once __DIR__ . '/../includes/header.php';
?>

<main class="site-main" style="background: #070d19; color: #ffffff; min-height: 100vh; padding-bottom: 60px;">

  <!-- Visual Breadcrumb Navigation Bar -->
  <div class="breadcrumb-wrapper" style="padding: 15px 0; background: #0f172a; border-bottom: 1px solid rgba(255,255,255,0.08);">
    <div class="container" style="max-width: 1140px; margin: 0 auto; padding: 0 15px;">
      <div class="breadcrumb-list" style="font-size: 0.9rem; color: #94a3b8;">
        <a href="<?php echo SITE_URL; ?>" title="Home" style="color: #f59e0b; text-decoration: none;">Home</a>
        <span style="margin: 0 8px;">/</span>
        <span style="color: #cbd5e1;">Our Services</span>
      </div>
    </div>
  </div>

  <!-- Hero Header -->
  <section style="background: linear-gradient(135deg, #0f172a 0%, #1e1b4b 100%); padding: 60px 0; text-align: center; border-bottom: 1px solid rgba(255,255,255,0.08);">
    <div class="container" style="max-width: 1000px; margin: 0 auto; padding: 0 15px;">
      <span style="background: rgba(245, 158, 11, 0.1); color: #f59e0b; border: 1.5px solid rgba(245, 158, 11, 0.3); padding: 6px 18px; border-radius: 30px; font-size: 0.8rem; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; display: inline-block; margin-bottom: 16px;">
        100% DAMAGE-FREE RELOCATION &bull; PAN-INDIA NETWORK
      </span>
      <h1 style="font-size: 2.6rem; font-weight: 800; color: #ffffff; line-height: 1.25; margin-bottom: 16px;">
        Comprehensive Packing &amp; Moving Solutions
      </h1>
      <p style="font-size: 1.1rem; color: #cbd5e1; max-width: 820px; margin: 0 auto; line-height: 1.7;">
        From single-room apartments to multi-national corporate office relocations, Shree Ashirwad Packers and Movers delivers end-to-end logistics solutions backed by 7-layer bubble wrapping, GPS container trucks, and full transit insurance.
      </p>
    </div>
  </section>

  <!-- 6 Detailed Services Grid -->
  <section style="padding: 70px 0;">
    <div class="container" style="max-width: 1140px; margin: 0 auto; padding: 0 15px;">
      
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(340px, 1fr)); gap: 30px;">
        
        <!-- Service 1: Household Goods Shifting -->
        <div style="background: #0f172a; border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 18px; padding: 32px 26px; box-shadow: 0 12px 35px rgba(0,0,0,0.3); display: flex; flex-direction: column; justify-content: space-between;">
          <div>
            <div style="width: 54px; height: 54px; background: rgba(245, 158, 11, 0.15); border-radius: 14px; display: flex; align-items: center; justify-content: center; color: #f59e0b; font-size: 1.4rem; margin-bottom: 20px;">
              <i class="fas fa-home"></i>
            </div>
            <h2 style="font-size: 1.4rem; font-weight: 700; color: #ffffff; margin-bottom: 12px;">Household Goods Relocation</h2>
            <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.7; margin-bottom: 20px;">
              Complete door-to-door home shifting services. We disassemble beds, pack kitchenware in sturdy corrugated boxes, wrap electronic appliances in bubble film, and transport everything safely in weatherproof container vehicles.
            </p>
            <ul style="list-style: none; padding: 0; margin: 0 0 24px 0; color: #94a3b8; font-size: 0.9rem; line-height: 1.9;">
              <li><i class="fas fa-check" style="color: #f59e0b; margin-right: 8px;"></i> 7-Layer Bubble Wrap &amp; Foam Sheet Protection</li>
              <li><i class="fas fa-check" style="color: #f59e0b; margin-right: 8px;"></i> Furniture Dismantling &amp; Room-by-Room Setup</li>
              <li><i class="fas fa-check" style="color: #f59e0b; margin-right: 8px;"></i> Dedicated Enclosed GPS Container Trucks</li>
            </ul>
          </div>
          <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad,%20I%20want%20to%20book%20Household%20Shifting." title="Book Household Shifting" target="_blank" style="padding: 12px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 10px; font-weight: 700; font-size: 0.9rem; text-decoration: none; text-align: center; display: block;">
            Book Household Move &rarr;
          </a>
        </div>

        <!-- Service 2: Corporate & Office Moving -->
        <div style="background: #0f172a; border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 18px; padding: 32px 26px; box-shadow: 0 12px 35px rgba(0,0,0,0.3); display: flex; flex-direction: column; justify-content: space-between;">
          <div>
            <div style="width: 54px; height: 54px; background: rgba(245, 158, 11, 0.15); border-radius: 14px; display: flex; align-items: center; justify-content: center; color: #f59e0b; font-size: 1.4rem; margin-bottom: 20px;">
              <i class="fas fa-building"></i>
            </div>
            <h2 style="font-size: 1.4rem; font-weight: 700; color: #ffffff; margin-bottom: 12px;">Office &amp; Commercial Relocation</h2>
            <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.7; margin-bottom: 20px;">
              Fast, zero-downtime corporate office shifting. We handle IT servers, workstation furniture, confidential filing systems, and conference equipment with anti-static packaging on weekends or overnight shifts.
            </p>
            <ul style="list-style: none; padding: 0; margin: 0 0 24px 0; color: #94a3b8; font-size: 0.9rem; line-height: 1.9;">
              <li><i class="fas fa-check" style="color: #f59e0b; margin-right: 8px;"></i> Tagged Inventory Labeling &amp; Document Security</li>
              <li><i class="fas fa-check" style="color: #f59e0b; margin-right: 8px;"></i> Anti-Static Cushioning for Servers &amp; Monitors</li>
              <li><i class="fas fa-check" style="color: #f59e0b; margin-right: 8px;"></i> Off-Peak &amp; Weekend Execution Options</li>
            </ul>
          </div>
          <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad,%20I%20want%20to%20book%20Office%20Relocation." title="Book Office Moving" target="_blank" style="padding: 12px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 10px; font-weight: 700; font-size: 0.9rem; text-decoration: none; text-align: center; display: block;">
            Book Commercial Move &rarr;
          </a>
        </div>

        <!-- Service 3: Car Carrier Transportation -->
        <div style="background: #0f172a; border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 18px; padding: 32px 26px; box-shadow: 0 12px 35px rgba(0,0,0,0.3); display: flex; flex-direction: column; justify-content: space-between;">
          <div>
            <div style="width: 54px; height: 54px; background: rgba(245, 158, 11, 0.15); border-radius: 14px; display: flex; align-items: center; justify-content: center; color: #f59e0b; font-size: 1.4rem; margin-bottom: 20px;">
              <i class="fas fa-car"></i>
            </div>
            <h2 style="font-size: 1.4rem; font-weight: 700; color: #ffffff; margin-bottom: 12px;">Car Carrier Transportation</h2>
            <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.7; margin-bottom: 20px;">
              Safe, enclosed car transportation across India. We ship luxury sedans, hatchbacks, and SUVs in covered hydraulic car trailers with door-to-door pickup and full transit insurance policy.
            </p>
            <ul style="list-style: none; padding: 0; margin: 0 0 24px 0; color: #94a3b8; font-size: 0.9rem; line-height: 1.9;">
              <li><i class="fas fa-check" style="color: #f59e0b; margin-right: 8px;"></i> Covered Hydraulic Wheel-Lock Trailers</li>
              <li><i class="fas fa-check" style="color: #f59e0b; margin-right: 8px;"></i> Pre-Pickup Inspection &amp; Scratch Report</li>
              <li><i class="fas fa-check" style="color: #f59e0b; margin-right: 8px;"></i> Zero-Mileage Interstate Highway Shipping</li>
            </ul>
          </div>
          <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad,%20I%20want%20a%20Car%20Transport%20quote." title="Book Car Transport" target="_blank" style="padding: 12px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 10px; font-weight: 700; font-size: 0.9rem; text-decoration: none; text-align: center; display: block;">
            Book Car Transport &rarr;
          </a>
        </div>

        <!-- Service 4: Bike & Two-Wheeler Shipping -->
        <div style="background: #0f172a; border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 18px; padding: 32px 26px; box-shadow: 0 12px 35px rgba(0,0,0,0.3); display: flex; flex-direction: column; justify-content: space-between;">
          <div>
            <div style="width: 54px; height: 54px; background: rgba(245, 158, 11, 0.15); border-radius: 14px; display: flex; align-items: center; justify-content: center; color: #f59e0b; font-size: 1.4rem; margin-bottom: 20px;">
              <i class="fas fa-motorcycle"></i>
            </div>
            <h2 style="font-size: 1.4rem; font-weight: 700; color: #ffffff; margin-bottom: 12px;">Bike &amp; Motorcycle Transport</h2>
            <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.7; margin-bottom: 20px;">
              Scratch-free bike transport for sports bikes, cruisers, and scooters. We wrap handle bars, fuel tanks, and mirrors in thick foam and secure vehicles using heavy-duty nylon tie-down belts.
            </p>
            <ul style="list-style: none; padding: 0; margin: 0 0 24px 0; color: #94a3b8; font-size: 0.9rem; line-height: 1.9;">
              <li><i class="fas fa-check" style="color: #f59e0b; margin-right: 8px;"></i> Foam Padding &amp; High-Tension Belt Anchoring</li>
              <li><i class="fas fa-check" style="color: #f59e0b; margin-right: 8px;"></i> Optional Wooden Crate Framing for Premium Bikes</li>
              <li><i class="fas fa-check" style="color: #f59e0b; margin-right: 8px;"></i> Road &amp; Railway Express Booking Options</li>
            </ul>
          </div>
          <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad,%20I%20want%20to%20ship%20my%20Bike." title="Book Bike Transport" target="_blank" style="padding: 12px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 10px; font-weight: 700; font-size: 0.9rem; text-decoration: none; text-align: center; display: block;">
            Book Bike Shipping &rarr;
          </a>
        </div>

        <!-- Service 5: Warehouse & Storage Facilities -->
        <div style="background: #0f172a; border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 18px; padding: 32px 26px; box-shadow: 0 12px 35px rgba(0,0,0,0.3); display: flex; flex-direction: column; justify-content: space-between;">
          <div>
            <div style="width: 54px; height: 54px; background: rgba(245, 158, 11, 0.15); border-radius: 14px; display: flex; align-items: center; justify-content: center; color: #f59e0b; font-size: 1.4rem; margin-bottom: 20px;">
              <i class="fas fa-warehouse"></i>
            </div>
            <h2 style="font-size: 1.4rem; font-weight: 700; color: #ffffff; margin-bottom: 12px;">Warehouse &amp; Goods Storage</h2>
            <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.7; margin-bottom: 20px;">
              Clean, CCTV-monitored, pest-controlled warehouse units for short-term and long-term storage. Store household furniture, corporate inventory, or machinery with complete safety.
            </p>
            <ul style="list-style: none; padding: 0; margin: 0 0 24px 0; color: #94a3b8; font-size: 0.9rem; line-height: 1.9;">
              <li><i class="fas fa-check" style="color: #f59e0b; margin-right: 8px;"></i> 24/7 CCTV Security &amp; Fire Protection Systems</li>
              <li><i class="fas fa-check" style="color: #f59e0b; margin-right: 8px;"></i> Moisture-Proof Elevated Pallet Stacking</li>
              <li><i class="fas fa-check" style="color: #f59e0b; margin-right: 8px;"></i> Flexible Monthly &amp; Annual Rental Contracts</li>
            </ul>
          </div>
          <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad,%20I%20need%20Warehouse%20Storage." title="Book Storage Unit" target="_blank" style="padding: 12px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 10px; font-weight: 700; font-size: 0.9rem; text-decoration: none; text-align: center; display: block;">
            Book Storage Unit &rarr;
          </a>
        </div>

        <!-- Service 6: Intercity & Long Distance Shifting -->
        <div style="background: #0f172a; border: 1.5px solid rgba(245, 158, 11, 0.3); border-radius: 18px; padding: 32px 26px; box-shadow: 0 12px 35px rgba(0,0,0,0.3); display: flex; flex-direction: column; justify-content: space-between;">
          <div>
            <div style="width: 54px; height: 54px; background: rgba(245, 158, 11, 0.15); border-radius: 14px; display: flex; align-items: center; justify-content: center; color: #f59e0b; font-size: 1.4rem; margin-bottom: 20px;">
              <i class="fas fa-truck-moving"></i>
            </div>
            <h2 style="font-size: 1.4rem; font-weight: 700; color: #ffffff; margin-bottom: 12px;">Intercity Interstate Shifting</h2>
            <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.7; margin-bottom: 20px;">
              Seamless interstate relocation connecting Ranchi, Jamshedpur, Patna, Kolkata, Delhi, Bangalore, Mumbai, and all major Indian hubs with IBA-approved documentation.
            </p>
            <ul style="list-style: none; padding: 0; margin: 0 0 24px 0; color: #94a3b8; font-size: 0.9rem; line-height: 1.9;">
              <li><i class="fas fa-check" style="color: #f59e0b; margin-right: 8px;"></i> IBA-Approved GST Invoices &amp; Claim Documents</li>
              <li><i class="fas fa-check" style="color: #f59e0b; margin-right: 8px;"></i> Live GPS Location Updates During Transit</li>
              <li><i class="fas fa-check" style="color: #f59e0b; margin-right: 8px;"></i> Guaranteed On-Time Doorstep Delivery</li>
            </ul>
          </div>
          <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad,%20I%20need%20Intercity%20Shifting." title="Book Intercity Move" target="_blank" style="padding: 12px; background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #ffffff; border-radius: 10px; font-weight: 700; font-size: 0.9rem; text-decoration: none; text-align: center; display: block;">
            Book Intercity Move &rarr;
          </a>
        </div>

      </div>

    </div>
  </section>

</main>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
