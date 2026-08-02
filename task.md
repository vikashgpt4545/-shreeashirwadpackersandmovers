# Master SEO Architecture & Full Site Resolution Plan

This document serves as the master execution plan for resolving all **4 major site vulnerabilities** and enforcing **100% compliance** with `rules/project-rules.md` across **Shree Ashirwad Packers and Movers**. 

All work will be performed **100% manually, page-by-page and line-by-line**, with zero automated scripts, generators, or automated code tools.

---

## 1. Zero-Deception & Error Prevention Protocols

To ensure 100% honesty, zero assumptions, and full compliance with project rules, the following verification protocols are mandatory:

### 🛡️ **Mandatory Manual Verification Checks**
After completing each page manually, line-by-line, the following manual checks MUST be executed and verified before marking any task as complete:
1. **Word Count Mandate Check (Rule #4):**
   - Main Ranchi Page (`packers-and-movers-in-ranchi.php`): **Minimum 3,000+ Words**.
   - All Other Pages: **Minimum 2,000+ Words**.
   - Any page below 2,000 words will be flagged as **FAIL** and expanded immediately.
2. **Clean URL & Broken Link Check (Rule #7):**
   - Zero occurrences of `.php` file extensions in `href="..."` or `action="..."` attributes.
   - Zero occurrences of raw `pages/` directory prefixes in `href="..."` links.
3. **Meta Title Format Check (Rule #2):**
   - Every `$page_title` MUST strictly end with `| 8409531615` (with zero trailing text).
4. **Mobile Responsiveness Check (Rule #3 & #5):**
   - Zero hardcoded multi-column inline grid styles (`grid-template-columns: repeat(3, 1fr)` or `1.2fr 0.8fr`) inside HTML tags. All grids must use responsive CSS classes that collapse cleanly to 1 column on mobile viewports (< 768px).
5. **Syntax Verification Check:**
   - Execute `php -l` on all modified files to ensure **zero PHP syntax errors**.

---

## 2. Master Execution Plan (4 Core Phases)

---

### 🎯 **Phase 1: Fix All Broken `.php` Links & 404 Button Errors (Over 2,200 Link Instances)**
- **Problem:** Over 2,200 links across `index.php`, `includes/header.php`, `includes/footer.php`, and `pages/*.php` contain `.php` extensions or `pages/` prefixes (e.g. `href="contact.php"` or `href="<?php echo SITE_URL; ?>pages/gallery.php"`). Clicking these causes 404 errors due to `.htaccess` rewrite rules.
- **Resolution:**
  - Audit and convert all `href="...php"` links to clean, extension-less URLs (e.g., `href="<?php echo SITE_URL; ?>contact"` or `href="<?php echo SITE_URL; ?>packers-and-movers-in-ranchi"`).
  - Verify every CTA button (Call Now, WhatsApp, Get Quote, Book Service) links cleanly without triggering 404 errors.
- **Status:** ⏳ Pending Execution

---

### 🎯 **Phase 2: Fix Meta Title Format Non-Compliance (23 Pages)**
- **Problem:** 23 guide pages have `$page_title` values that do not strictly end with `| 8409531615` (they have extra text appended after the phone number or miss the ending format).
- **Resolution:** Update all 23 titles to follow the exact format: `[Main Keyword] | 8409531615`.
- **Target Files:** `bike-car-transportation-guide-ranchi.php`, `car-carrier-transport-process-ranchi.php`, `commercial-shifting-best-practices-ranchi.php`, `home-relocation-timeline-ranchi.php`, `household-and-office-relocation-faqs-ranchi.php`, `how-to-avoid-fraud-packers-and-movers-in-ranchi.php`, `how-to-choose-best-packers-and-movers-in-ranchi.php`, `iba-approved-packers-and-movers-ranchi-benefits.php`, `local-vs-intercity-shifting-charges-ranchi.php`, `monsoon-relocation-guide-ranchi.php`, etc.
- **Status:** ⏳ Pending Execution

---

### 🎯 **Phase 3: Content Expansion to 2,000+ Words (313 Pages)**
- **Problem:** 313 pages currently have fewer than 2,000 words (ranging between 340 and 1,550 words), violating Rule #4.
- **Resolution Plan:**
  - **Batch 3A: Service & Guide Articles (26 Pages):** Expand content from ~340–600 words to **2,000+ words** per article with comprehensive moving checklists, packaging science, transit safety guidelines, insurance claim processes, and localized FAQs.
  - **Batch 3B: Locality Landing Pages (105 Pages):** Expand content from ~640–1,550 words to **2,000+ words** per page with detailed neighborhood guides, landmark maps, local route advice, housing society details, and localized FAQs.
  - **Batch 3C: Intercity Route Pages (182 Pages):** Expand remaining route pages to **2,000+ words** per page with Highway details (NH-33, GT Road, NH-19), toll gate estimates, transit time calculators, packaging layer breakdowns, and destination city logistics.
- **Status:** ⏳ Pending Execution

---

### 🎯 **Phase 4: Mobile Responsiveness & Inline CSS Optimization**
- **Problem:** Multiple landing pages use rigid inline CSS styles (`style="display: grid; grid-template-columns: repeat(3, 1fr);"` and `grid-template-columns: 1.2fr 0.8fr;"`), causing multi-column layouts to shrink or overflow on mobile devices.
- **Resolution:**
  - Replace rigid inline grid styles with responsive CSS classes (`class="responsive-grid grid-3-col"`).
  - Enforce single-column wrapping on screens under 768px via `assets/css/style.css`.
- **Status:** ⏳ Pending Execution

---

## 3. Progress Tracking Dashboard

| Phase | Description | Total Target | Completed | Remaining | Compliance Status |
| :--- | :--- | :---: | :---: | :---: | :---: |
| **Phase 1** | Clean URL & Broken Link Resolution | 2,200+ Links | 6 Pages | 403 Pages | 🔄 In Progress |
| **Phase 2** | Page Title Format Fixes | 23 Pages | 0 | 23 | ⏳ Pending |
| **Phase 3A** | Service Guide Content Expansion (2k+ words) | 26 Pages | 0 | 26 | ⏳ Pending |
| **Phase 3B** | Locality Landing Page Content Expansion (2k+ words) | 105 Pages | 0 | 105 | ⏳ Pending |
| **Phase 3C** | Intercity Route Content Expansion (2k+ words) | 182 Pages | 0 | 182 | ⏳ Pending |
| **Phase 4** | Responsive Mobile CSS Normalization | All Pages | 0 | All Pages | ⏳ Pending |
