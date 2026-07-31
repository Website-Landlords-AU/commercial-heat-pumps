# Strategic Execution Plan: commercialheatpumps.com.au

Building a high-value lead generation asset for commercial heat pumps. Operators: Luke and Kristy.

## Phase 1: Strategy & Approval

- **Market & Niche Research:** Commercial heat pump niche is highly lucrative — a single lead can yield a massive installation contract. Target market: facility managers, industrial plant operators, strata managers looking to decarbonize and cut gas bills.
- **SEO Strategy & Sitemap:** See `sitemap.md`. "Hub and Spoke" model targeting specific industries (e.g. Aged Care) and locations (e.g. Melbourne) for high-intent, long-tail searches.
- **Brief & Brand Assets:** Site should project engineering authority and enterprise-level reliability. (Note: umbrella brand name appears inconsistently across source material as both "Exergy" and "EXEGI" — see flag below. Branding/specific brand references deliberately left out of the initial draft per instruction.)
- **Operator Approval:** Luke and Kristy review sitemap, conversion funnels, and brand direction before development begins.

## Phase 2: Build, Deploy & Launch

- WordPress build via Claude Code in VS Code — lightning-fast, conversion-optimized theme for capturing B2B engineering leads.
- Version control via GitHub (Website-Landlords-AU org, private... in practice public due to WP Pusher free-tier constraint), deployed via WP Pusher to Cloudways.
- Operator staging review — confirm tracking scripts and lead capture forms work flawlessly.
- Go live: DNS, GA4, Search Console. Link to the existing Google Business Profile for immediate local map pack authority (bypasses new-domain "sandbox" period).

## Phase 3: The Lead Engine

- **Lead Capture (friction by design):** Not a generic "Contact Us" — a multi-step "Free ROI Assessment" form. Qualifying questions: current heating fuel (Gas/LPG/Electric)? Approximate monthly energy bill? Industry? This filters out residential inquiries and tire-kickers.
- **Form routing:** Submissions go to the client's email, BCC `exegitanks@gmail.com` for central records.
- **Calls:** All site phone numbers run through CallRail to track source of high-ticket phone inquiries (not yet implemented — placeholder phone number for now).
- **Central Lead Tracking:** CallRail logs + form submissions monitored centrally, quality over volume.
- **Lead Selling (rental model):** Commercial heat pump leads are high-ticket ($20k-$100k+ installs) — charge a premium per verified lead, or a percentage of closed deals with partner HVAC companies. Leads can be routed geographically (e.g. NSW → Partner A, VIC → Partner B).

## Tactics for Lead Quality & Conversion

1. **Rebate calculators** — estimate VEU (VIC) or ESS (NSW) rebates based on current boiler size.
2. **Case studies** — payback period (ROI) of switching from a 500kW gas boiler to a commercial air-to-water heat pump.
3. **Engineering authority** — content must speak the language of mechanical consultants and facility managers, not residential homeowners.

## Flag for the operator

Source material uses two different spellings for the umbrella brand — **"Exergy"** (used throughout the strategy doc, e.g. "exergy.com.au", "Exergy GBP") vs **"EXEGI"** (the name actually printed on the physical tanks in the supplied job photos, and used consistently in years of your invoice/file naming). Worth confirming which is correct before we link a Google Business Profile or reference the brand directly — not a blocker for today's draft since branding is being left out for now regardless.
