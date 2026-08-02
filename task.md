# Master SEO Architecture & Full Site Resolution Plan

This document serves as the master execution plan for the **Secondary Locality Pages Optimization Campaign** across **Shree Ashirwad Packers and Movers**. All optimizations will be performed **manually, line-by-line** following strict zero-assumption and no-script protocols.

---

## 1. Non-Negotiable AI Execution Rules & Error Prevention Protocol

To guarantee 100% code integrity and prevent any breaking changes, all work must adhere strictly to these non-negotiable rules:

### ⛔ **Rule 1: ZERO Assumptions Policy**
- **No Guessing:** Never assume variable names, array keys, file paths, or city rules without reading the actual codebase files first (`view_file` / `grep_search`).
- **Dependency Checking:** Before modifying any global file or page component, inspect all parent pages that include them to understand their variable context.

### ⛔ **Rule 2: ZERO Scripted Automation Policy**
- **Manual Tool Usage Only:** Absolutely NO automated generation scripts (Python, Node.js, PowerShell, or PHP scripts) allowed for modifying files or generating code. All code changes must be authored manually line-by-line using standard replacement tools.

### 🛡️ **Rule 3: ZERO Component Breakage Policy (Interconnection Guardrails)**
- **Safe Fallbacks:** Every dynamic variable (e.g. `$page_city`, `$target_city`, `$faq_list`) MUST have a safe fallback default in `header.php` so that if a page omits the variable, it defaults cleanly without throwing a PHP Notice (`Undefined variable`).
- **Multi-City Compatibility Test:** All updates MUST maintain 100% compatibility with Ranchi, Jamshedpur, Bokaro, and future city expansion routes.

### ⚠️ **Rule 4: AI Common Mistakes Prevention Checklist**
1. **PHP Notice & Warning Safeguard:** Always verify variables are set before rendering (`isset()` / `!empty()`).
2. **JSON-LD Schema Syntax Safeguard:** Escaped quotes and valid JSON array formatting for `$faq_list` items.
3. **Internal Link Integrity:** Never insert an internal link to a non-existent URL. All internal links must point to active PHP pages existing in the codebase.
4. **Strict Brand Compliance:**
   - Primary Phone: `+91 8409531615` (`SITE_PHONE`).
   - Logo: Pure Swastik logo (`assets/images/logo.png`).
   - Zero numerical price tables (only qualitative rate factors).
   - Zero use of the word "Free".
5. **Mandatory Syntax Verification:** Execute `php -l` manually on every modified file to confirm zero syntax errors before declaring any step complete.

---

## 2. Targeted Optimization Roadmap (3 Core Vulnerabilities)

The following 3 critical audit gaps will be systematically resolved across all secondary locality and route pages:

### 🎯 **Task 1: Visual Breadcrumbs Navigation Rollout on Secondary Locality Pages**
- **Problem:** Secondary locality pages currently have JSON-LD `BreadcrumbList` schema in `<head>`, but lack the visual HTML breadcrumb navigation bar above the hero section.
- **Resolution Plan:**
  - Manually insert the standardized `.breadcrumb-wrapper` HTML component right after `<main class="site-main">` in each secondary locality page.
  - Dynamically output: `Home / [City Hub] / [Locality Name]`.
- **Target Files:** Secondary locality pages in `pages/` (e.g., `packers-and-movers-bistupur-jamshedpur.php`, `packers-and-movers-lalpur-ranchi.php`, etc.).

### 🎯 **Task 2: Dynamic `$faq_list` Array Definition Rollout for SERP Rich Snippets**
- **Problem:** Dynamic JSON-LD schema generation in `header.php` requires `$faq_list` to be defined before calling `header.php`. Currently, secondary locality pages have static HTML accordions but missing `$faq_list` PHP arrays at the top.
- **Resolution Plan:**
  - Extract locality-specific Q&A pairs into a structured `$faq_list` PHP array placed at the top of each secondary locality file (before `require_once header.php`).
  - Enable dynamic `FAQPage` JSON-LD schema generation to capture Google SERP drop-down rich snippets for local queries.

### 🎯 **Task 3: Inline CSS Weight Reduction & Core Web Vitals Optimization**
- **Problem:** Secondary locality pages contain inline CSS attributes (`style="..."`) inside HTML tags, inflating document sizes and slowing down mobile DOM parsing.
- **Resolution Plan:**
  - Consolidate repetitive inline CSS styling into centralized classes in `assets/css/style.css`.
  - Reduce page file sizes from ~50KB to ~25KB, boosting Mobile LCP and INP Core Web Vitals scores.

---

## 3. Comprehensive Site-Wide Execution Roadmap (All 409 Pages)

The entire inventory of 409 pages in `pages/` is structured into 4 master execution clusters. Every page will manually receive `$page_city`, localized `$faq_list` arrays, visual `.breadcrumb-wrapper` HTML, and `php -l` verification:

### 📍 Cluster 1: Ranchi Hub Sub-Locality Pages (~40 Pages)
- **Completed:** `packers-and-movers-in-ranchi.php`, `packers-and-movers-lalpur-ranchi.php`, `packers-and-movers-harmu-ranchi.php`, `packers-and-movers-kanke-road-ranchi.php`, `packers-and-movers-argora-ranchi.php`, `packers-and-movers-ashok-nagar-ranchi.php`, `packers-and-movers-bariatu-ranchi.php`, `packers-and-movers-bharmu-ranchi.php`, `packers-and-movers-bhurkunda-ranchi.php`, `packers-and-movers-birsa-chowk-ranchi.php`, `packers-and-movers-booty-more-ranchi.php`, `packers-and-movers-bundu-ranchi.php`, `packers-and-movers-church-road-ranchi.php`, `packers-and-movers-chutia-ranchi.php`, `packers-and-movers-deepatoli-ranchi.php`, `packers-and-movers-dharampur-ranchi.php`, `packers-and-movers-dhurwa-ranchi.php`, `packers-and-movers-dibdih-ranchi.php`, `packers-and-movers-doranda-ranchi.php`, `packers-and-movers-gondlipokhar-ranchi.php`, `packers-and-movers-hatia-ranchi.php`, `packers-and-movers-hehal-ranchi.php`, `packers-and-movers-hesag-ranchi.php`, `packers-and-movers-hinoo-ranchi.php`, `packers-and-movers-itki-road-ranchi.php`, `packers-and-movers-kadru-ranchi.php`, `packers-and-movers-kamre-ranchi.php`, `packers-and-movers-kantatoli-ranchi.php`, `packers-and-movers-kathal-more-ranchi.php`, `packers-and-movers-khelgaon-ranchi.php`, `packers-and-movers-khunti-road-ranchi.php`, `packers-and-movers-kokar-ranchi.php`, `packers-and-movers-latma-ranchi.php`, `packers-and-movers-lowadih-ranchi.php`, `packers-and-movers-main-road-ranchi.php`, `packers-and-movers-mesra-ranchi.php`, `packers-and-movers-morabadi-ranchi.php`, `packers-and-movers-muri-ranchi.php`, `packers-and-movers-namkum-ranchi.php`, `packers-and-movers-ormanjhi-ranchi.php`, `packers-and-movers-overbridge-ranchi.php`, `packers-and-movers-pandra-ranchi.php`, `packers-and-movers-piska-nagri-ranchi.php`, `packers-and-movers-pundag-ranchi.php`, `packers-and-movers-rampura-ranchi.php`, `packers-and-movers-ratu-road-ranchi.php`, `packers-and-movers-samlong-ranchi.php`, `packers-and-movers-sidrol-ranchi.php`, `packers-and-movers-singh-more-ranchi.php`, `packers-and-movers-siramtoli-ranchi.php`, `packers-and-movers-siratoli-ranchi.php`, `packers-and-movers-tatisilwai-ranchi.php`, `packers-and-movers-tupudana-ranchi.php`
- **Pending Sequential Queue:**
  - *(None - Cluster 1 Complete!)*
- **Completed Status:** 100%

### 📍 Cluster 2: Jamshedpur Hub Sub-Locality Pages (~45 Pages)
- **Completed:** `packers-and-movers-in-jamshedpur.php`, `packers-and-movers-bistupur-jamshedpur.php`, `packers-and-movers-sakchi-jamshedpur.php`, `packers-and-movers-mango-jamshedpur.php`, `packers-and-movers-adityapur-jamshedpur.php`, `packers-and-movers-agrico-jamshedpur.php`, `packers-and-movers-azadnagar-jamshedpur.php`, `packers-and-movers-bagbera-jamshedpur.php`, `packers-and-movers-baharagora-jamshedpur.php`, `packers-and-movers-baridih-jamshedpur.php`, `packers-and-movers-bartoli-jamshedpur.php`, `packers-and-movers-bhalubasa-jamshedpur.php`, `packers-and-movers-bhuiyandih-jamshedpur.php`, `packers-and-movers-birsanagar-jamshedpur.php`, `packers-and-movers-boram-jamshedpur.php`, `packers-and-movers-burma-mines-jamshedpur.php`, `packers-and-movers-cable-town-jamshedpur.php`, `packers-and-movers-chaibasa-jamshedpur.php`, `packers-and-movers-chakradharpur-jamshedpur.php`, `packers-and-movers-chakulia-jamshedpur.php`, `packers-and-movers-chhota-govindpur-jamshedpur.php`, `packers-and-movers-dhalbhum-jamshedpur.php`, `packers-and-movers-dhalbhumgarh-jamshedpur.php`, `packers-and-movers-dhatkidih-jamshedpur.php`, `packers-and-movers-dimna-jamshedpur.php`, `packers-and-movers-gamharia-jamshedpur.php`, `packers-and-movers-ghatsila-jamshedpur.php`, `packers-and-movers-golmuri-jamshedpur.php`, `packers-and-movers-ichagarh-jamshedpur.php`, `packers-and-movers-jharkhand-nagar-jamshedpur.php`, `packers-and-movers-jugsalai-jamshedpur.php`, `packers-and-movers-kadma-jamshedpur.php`, `packers-and-movers-kalimati-jamshedpur.php`, `packers-and-movers-kandra-jamshedpur.php`, `packers-and-movers-kanyabari-jamshedpur.php`, `packers-and-movers-kharkai-jamshedpur.php`, `packers-and-movers-kiriburu-jamshedpur.php`, `packers-and-movers-kitadih-jamshedpur.php`, `packers-and-movers-loyabad-jamshedpur.php`, `packers-and-movers-margin-jamshedpur.php`, `packers-and-movers-new-colony-jamshedpur.php`, `packers-and-movers-noamundi-jamshedpur.php`, `packers-and-movers-parsudih-jamshedpur.php`, `packers-and-movers-potka-jamshedpur.php`, `packers-and-movers-russi-colony-jamshedpur.php`, `packers-and-movers-seraikela-jamshedpur.php`, `packers-and-movers-shankar-nagar-jamshedpur.php`, `packers-and-movers-shyamnagar-jamshedpur.php`, `packers-and-movers-sidhgora-jamshedpur.php`, `packers-and-movers-sitaramdera-jamshedpur.php`, `packers-and-movers-sonari-jamshedpur.php`, `packers-and-movers-sundernagar-jamshedpur.php`, `packers-and-movers-tatanagar-jamshedpur.php`, `packers-and-movers-telco-jamshedpur.php`, `packers-and-movers-ulidih-jamshedpur.php`
- **Completed Status:** 100%

### 🚚 Cluster 3: Ranchi & Jamshedpur Interstate & Inter-District Route Pages (~280 Pages)
- **Completed Ranchi Route Pages (All 85 Routes):** `packers-and-movers-ranchi-to-faridabad.php` ... `packers-and-movers-ranchi-to-visakhapatnam.php` (100% Refactored with `$page_city`, `$faq_list`, and breadcrumbs).
- **Completed Jamshedpur Route Pages (All Routes):** `packers-and-movers-jamshedpur-to-agra.php` ... `packers-and-movers-jamshedpur-to-visakhapatnam.php` (100% Complete).
- **Pending:** *(None - All Route Pages Complete!)*

### 📘 Cluster 4: Service Guides, Cost Calculators & Logistics Articles (~30 Pages)
## 4. Immediate Next Execution Step
Continue sequential refactoring of Cluster 3 Route Pages (starting with `packers-and-movers-ranchi-to-lohardaga.php` onwards).


