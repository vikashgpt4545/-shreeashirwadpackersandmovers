# Project Rules & Guidelines

1. **NO SCRIPTS FOR PAGE OR CONTENT CREATION**:
   - Do NOT use scripts, generators, or automated code to create pages or content automatically. Every page must be created manually, line-by-line from `urls.txt`.

2. **PAGE TITLE & META FORMAT MANDATE**:
   - Page Title format MUST strictly be: `[Main Keyword] | 8409531615` (e.g., `Packers and Movers in Ranchi | 8409531615` or `Packers and Movers Harmu Ranchi | 8409531615`). Do NOT add anything after the phone number!
   - Main Keyword MUST be included in `<h1>`, Meta Title, Meta Description, and Meta Keywords.

3. **NO PLAIN TEXT WALLS (ALWAYS USE 6-CARD GRID SECTIONS)**:
   - Do NOT display plain text paragraphs on their own. Organize overview content into a balanced 6-card grid (3x2 layout) with concise, punchy text, custom icons, and subtle border highlights. Cards must be compact in height, never overly tall.

4. **WORD COUNT MANDATE**:
   - **First Page (`/packers-and-movers-in-ranchi`)**: Minimum **3,000+ Words** of deep, highly engaging, zero-fluff SEO content.
   - **All Other 199 Pages**: Minimum **2,000+ Words** of localized, detailed content per page.

5. **ALL BUTTONS MUST BE FULLY STYLED**:
   - Every CTA button (Call Now, WhatsApp, Contact Office) MUST have full background gradient, text color, rounded pill shape (`border-radius: 50px`), box shadow, and hover effect. No unstyled link text allowed!

6. **SEO & KEYWORD REQUIREMENTS**:
   - Primary target keyword MUST be present in the main `<h1>` heading.
   - Include at least **20 relevant secondary LSI keywords** naturally distributed across the page body.
   - Zero numerical price tables (only qualitative factors explained).
   - Zero use of "Free" wording (use "Instant", "Transparent Estimate", etc.).

7. **CONTEXTUAL INTERNAL LINKING**:
   - Every page MUST contain at least **8 natural contextual internal links** in the middle of the content body pointing to other pages from `urls.txt`.

8. **SITEMAP INTEGRATION**:
   - All 200 URLs from `urls.txt` must be registered in the XML sitemap.

9. **LOCAL CONTEXT & REALITY**:
   - Focus on genuine local geography (Ranchi, Jamshedpur, Dhanbad, Bokaro, Hazaribagh, Deoghar, local areas, NH-33, NH-19, GT Road, Expressways, Transit Timelines, local landmarks, and PIN codes).

10. **LOGO IS ONLY SWASTIK**:
    - The logo image (`assets/images/logo.png`) and site icon (`assets/images/favicon.png`) must ONLY contain the sacred Swastik symbol without text inside the image.

11. **BATCH CONTENT & SYNTAX VERIFICATION**:
    - After creating each page/batch, perform immediate line-by-line content inspection and syntax verification (`php -l`). Do NOT make assumptions about content validity or page formatting without verifying.

12. **ZERO ASSUMPTIONS PROTOCOL**:
    - Never assume that testing was completed or that past rules apply without re-checking the active codebase line-by-line. All newly created pages must comply with all dynamic header, footer, canonical, and schema requirements.

13. **LOCALIZED SEO CONTENT DENSITY**:
    - Every page must contain rich, localized copy mentioning genuine city-specific landmarks, industrial/residential zones, major transport arteries, local shifting challenges, and customized FAQs.

14. **MANDATORY FAQ JSON-LD SCHEMA ARRAY (`$faq_list`)**:
    - Every single page MUST define `$faq_list = [['q' => '...', 'a' => '...'], ...]` containing 10-20 localized questions and answers before calling `require_once header.php`. This allows `header.php` to automatically output Google FAQPage JSON-LD rich snippets.

15. **DYNAMIC CITY SCOPE & GEO SCHEMA (`$page_city`)**:
    - Every single page MUST define `$page_city = "Dhanbad";` (or Bokaro, Hazaribagh, Deoghar, Ranchi, Jamshedpur) at the top. This triggers `header.php` to generate city-specific `MovingCompany` schema, GeoCoordinates (lat/long), street address, state, and pincode.

16. **11-SECTION PAGE LAYOUT MANDATE**:
    - Every page must strictly implement the complete 11-section layout:
      1. Hero Section + WhatsApp Lead Form
      2. Trust Stats Counter
      3. Locality Logistics Overview with 3x2 6-Card Grid
      4. 4-Protocol Zero-Damage Safety Framework
      5. Transparent Pricing Table
      6. 5-Stage Execution Workflow
      7. IBA Approved Corporate Claims Documentation
      8. Contextual Locality Link Grid
      9. Contextual Intercity Route Link Grid
      10. 20 Detailed SEO FAQs
      11. Call to Action Banner with styled gradient pill buttons

17. **STRICT CLEAN URL MANDATE (NO `/pages/`, NO `.php`)**:
    - All internal links in code (`href`), canonicals, sitemap links, and `urls.txt` entries MUST strictly use clean URLs without `/pages/` directory prefix and without `.php` file extension (e.g. `<?php echo SITE_URL; ?>packers-and-movers-in-dhanbad`). Never write `/pages/` or `.php` in internal anchor tags.

