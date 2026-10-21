@extends('layouts.app')

@push('styles')
  <link rel="stylesheet" href="assets/sass/ppc/ppc.css" />
@endpush

@section('content')

  <main>
    <!-- ============================================================
           01 — BANNER (comman .banner reused)
      ============================================================= -->

    @include('partials.hero', [
      'video' => 'assets/video/effect3.mp4',
      'poster' => 'assets/video/poster/effect3.png',
      'default' => [
        'eyebrow' => 'GOOGLE ADS MANAGEMENT',
        'heading' => 'Reach Customers Already Searching for What You Offer.',
        'description' => 'We plan and manage Google Ads campaigns focused on relevant searches, qualified traffic and measurable business enquiries.',
        'primary_text' => 'Chat on WhatsApp',
        'primary_url' => 'javascript:void(0)',
        'secondary_text' => 'Get a Free Ads Consultation',
        'secondary_url' => '#enquire',
      ],
    ])

    <section class="ppcProblem" id="ppcProblem">
      <div class="container">
        <div class="heading">
          <span class="eyebrow">
            <span class="eyebrow-line"></span>THE PPC PERFORMANCE GAP</span>

          <h3>
            Your Ad Budget Deserves A
            <span>Clearer Strategy.</span>
          </h3>

          <p>
            Most accounts don't underperform because of a lack of effort. They
            underperform when targeting, tracking, and campaign strategy
            aren't aligned with real business outcomes.
          </p>
        </div>

        <div class="ppcProblem-layout">
          <div class="ppcProblem-content">
            <div class="ppcProblem-intro">
              <span class="ppcProblem-intro__number">01</span>

              <div>
                <h4>Where Your PPC Budget May Be Leaking.</h4>

                <p>
                  Identify the gaps that can affect your ad performance, lead
                  quality, and conversion opportunities.
                </p>
              </div>
            </div>

            <ul class="ppcProblem-list">
              <li>
                <span class="ppcProblem-item__number">01</span>

                <div class="ppcProblem-item__content">
                  <h4>Spend Without Qualified Leads</h4>
                  <p>
                    Your budget keeps going out, but the enquiries coming in
                    aren't the right fit for your business.
                  </p>
                </div>

                <span class="ppcProblem-item__arrow">
                  <svg viewBox="0 0 20 20" fill="none">
                    <path d="M5 15L15 5M7 5H15V13" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                      stroke-linejoin="round" />
                  </svg>
                </span>
              </li>

              <li>
                <span class="ppcProblem-item__number">02</span>

                <div class="ppcProblem-item__content">
                  <h4>High Clicks, Low Conversions</h4>
                  <p>
                    Traffic looks healthy on paper, but very little of it
                    turns into an actual enquiry.
                  </p>
                </div>

                <span class="ppcProblem-item__arrow">
                  <svg viewBox="0 0 20 20" fill="none">
                    <path d="M5 15L15 5M7 5H15V13" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                      stroke-linejoin="round" />
                  </svg>
                </span>
              </li>

              <li>
                <span class="ppcProblem-item__number">03</span>

                <div class="ppcProblem-item__content">
                  <h4>Incorrect Conversion Tracking</h4>
                  <p>
                    What's reported as a conversion doesn't always reflect
                    what's happening on your website.
                  </p>
                </div>

                <span class="ppcProblem-item__arrow">
                  <svg viewBox="0 0 20 20" fill="none">
                    <path d="M5 15L15 5M7 5H15V13" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                      stroke-linejoin="round" />
                  </svg>
                </span>
              </li>

              <li>
                <span class="ppcProblem-item__number">04</span>

                <div class="ppcProblem-item__content">
                  <h4>Poor Keyword Targeting</h4>
                  <p>
                    Broad or outdated keywords can attract searches that don't
                    align with your business.
                  </p>
                </div>

                <span class="ppcProblem-item__arrow">
                  <svg viewBox="0 0 20 20" fill="none">
                    <path d="M5 15L15 5M7 5H15V13" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                      stroke-linejoin="round" />
                  </svg>
                </span>
              </li>

              <li>
                <span class="ppcProblem-item__number">05</span>

                <div class="ppcProblem-item__content">
                  <h4>Irrelevant Search Terms</h4>
                  <p>
                    A share of spend may go toward queries that have little
                    relevance to your products or services.
                  </p>
                </div>

                <span class="ppcProblem-item__arrow">
                  <svg viewBox="0 0 20 20" fill="none">
                    <path d="M5 15L15 5M7 5H15V13" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                      stroke-linejoin="round" />
                  </svg>
                </span>
              </li>

              <li>
                <span class="ppcProblem-item__number">06</span>

                <div class="ppcProblem-item__content">
                  <h4>Landing Pages That Miss Intent</h4>
                  <p>
                    When your landing page doesn't match the ad promise,
                    visitors may leave before making an enquiry.
                  </p>
                </div>

                <span class="ppcProblem-item__arrow">
                  <svg viewBox="0 0 20 20" fill="none">
                    <path d="M5 15L15 5M7 5H15V13" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                      stroke-linejoin="round" />
                  </svg>
                </span>
              </li>
            </ul>
          </div>

          <div class="ppcProblem-visual">
            <div class="ppcProblem-panel">
              <div class="ppcProblem-panel__head">
                <div>
                  <span class="ppcProblem-panel__label">
                    PERFORMANCE INSIGHT
                  </span>

                  <h4>When Spend Grows Faster Than Results.</h4>
                </div>

                <span class="ppcProblem-panel__symbol">
                  <svg viewBox="0 0 24 24" fill="none">
                    <path d="M5 16L10 11L14 14L20 6" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                      stroke-linejoin="round" />
                    <path d="M15 6H20V11" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                      stroke-linejoin="round" />
                  </svg>
                </span>
              </div>

              <div class="ppcProblem-panel__chart">
                <div class="ppcProblem-panel__chart-top">
                  <span>Spend vs. qualified leads</span>
                  <span>Illustrative example</span>
                </div>

                <svg viewBox="0 0 320 145" class="ppcProblem-chart" role="img"
                  aria-label="Illustrative chart contrasting ad spend growth with qualified lead growth">
                  <line x1="0" y1="120" x2="320" y2="120" class="ppcAxis" />
                  <line x1="0" y1="80" x2="320" y2="80" class="ppcGrid" />
                  <line x1="0" y1="40" x2="320" y2="40" class="ppcGrid" />

                  <polyline class="ppcLine ppcLine--spend" fill="none" points="0,100 55,82 110,60 165,38 220,19 320,0" />

                  <polyline class="ppcLine ppcLine--leads" fill="none"
                    points="0,110 55,107 110,99 165,91 220,84 320,74" />

                  <circle cx="320" cy="0" r="3" class="ppcPoint ppcPoint--spend" />

                  <circle cx="320" cy="74" r="3.5" class="ppcPoint ppcPoint--leads" />
                </svg>

                <ul class="ppcProblem-panel__legend">
                  <li>
                    <i class="is-spend"></i>
                    Ad spend
                  </li>

                  <li>
                    <i class="is-leads"></i>
                    Qualified leads
                  </li>
                </ul>
              </div>

              <div class="ppcProblem-panel__insight">
                <span class="ppcProblem-panel__insight-icon">
                  <svg viewBox="0 0 24 24" fill="none">
                    <path d="M12 3L21 20H3L12 3Z" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round" />
                    <path d="M12 9V13" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                    <circle cx="12" cy="16.5" r="0.8" fill="currentColor" />
                  </svg>
                </span>

                <div>
                  <h5>Find the gap before increasing the budget.</h5>

                  <p>
                    Review targeting, tracking, and landing page performance
                    before scaling ad spend.
                  </p>
                </div>
              </div>

              <div class="ppcProblem-panel__action">
                <div>
                  <span>Want to improve your campaign performance?</span>

                  <strong>Let's discuss your PPC goals.</strong>
                </div>

                <a href="javascript:void(0)" class="btn btn-black" data-model=".enquire-pop">
                  Enquire Now

                  <svg viewBox="0 0 20 20" fill="none">
                    <path d="M4 10H16M10 4L16 10L10 16" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                      stroke-linejoin="round" />
                  </svg>
                </a>
              </div>
            </div>

            <div class="ppcProblem-support">
              <p>
                Better campaign decisions start with understanding what's
                happening at every stage of the customer journey.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ============================================================
           03 — TYPES OF GOOGLE ADS CAMPAIGNS (new — .ppcCampaigns)
      ============================================================= -->
    <section class="ppcCampaigns" id="ppc-campaigns">
      <div class="container">
        <div class="heading">
          <span class="eyebrow"><span class="eyebrow-line"></span>CAMPAIGN TYPES</span>
          <h3>The Right Campaign Format <span>For the Right Goal.</span></h3>
          <p>
            We don't run every account the same way — the format follows the
            objective.
          </p>
        </div>

        <div class="ppcCampaigns-grid">
          <article class="ppcCampaigns-card ppcCampaigns-card--lg">
            <img src="assets/images/website/google1.png" alt="Google Search Ads results page" loading="lazy" />
            <div class="ppcCampaigns-card__body">
              <span class="ppcCampaigns-card__tag">High Intent</span>
              <h4>Google Search Ads</h4>
              <p>
                Show up when people are actively searching for what you offer
                — the most direct route to an enquiry.
              </p>
            </div>
          </article>

          <article class="ppcCampaigns-card ppcCampaigns-card--lg">
            <img src="assets/images/website/google2.png" alt="Display advertising network placements" loading="lazy" />
            <div class="ppcCampaigns-card__body">
              <span class="ppcCampaigns-card__tag">Visibility</span>
              <h4>Display Advertising</h4>
              <p>
                Build awareness across websites and apps while people browse,
                so your brand stays front of mind.
              </p>
            </div>
          </article>

          <article class="ppcCampaigns-card">
            <img src="assets/images/website/google3.png" alt="Google Shopping product listing ads" loading="lazy" />
            <div class="ppcCampaigns-card__body">
              <span class="ppcCampaigns-card__tag">Product Sales</span>
              <h4>Google Shopping Ads</h4>
              <p>
                Put your products directly in front of shoppers already
                comparing prices and options.
              </p>
            </div>
          </article>

          <article class="ppcCampaigns-card">
            <img src="assets/images/website/google4.png" alt="YouTube advertising video campaign" loading="lazy" />
            <div class="ppcCampaigns-card__body">
              <span class="ppcCampaigns-card__tag">Reach</span>
              <h4>YouTube Advertising</h4>
              <p>
                Reach audiences through video, at the moments they're most
                receptive to your message.
              </p>
            </div>
          </article>

          <article class="ppcCampaigns-card">
            <img src="assets/images/website/google5.png" alt="Performance Max automated campaign strategy"
              loading="lazy" />
            <div class="ppcCampaigns-card__body">
              <span class="ppcCampaigns-card__tag">Automation</span>
              <h4>Performance Max Campaigns</h4>
              <p>
                Let Google's automation find conversions across channels,
                guided by the goals we set.
              </p>
            </div>
          </article>

          <article class="ppcCampaigns-card">
            <img src="assets/images/website/google6.png" alt="Remarketing campaign audience targeting" loading="lazy" />
            <div class="ppcCampaigns-card__body">
              <span class="ppcCampaigns-card__tag">Re-engagement</span>
              <h4>Remarketing Campaigns</h4>
              <p>
                Bring back visitors who showed interest but didn't convert on
                their first visit.
              </p>
            </div>
          </article>
        </div>
      </div>
    </section>

    <!-- ============================================================
           04 — WHAT'S INCLUDED IN OUR PPC SERVICE (new — .ppcDeliverables)
      ============================================================= -->
    <section class="ppcDeliverables">
      <div class="container">
        <div class="heading">
          <span class="eyebrow"><span class="eyebrow-line"></span>WHAT'S INCLUDED</span>
          <h3>
            Everything That Goes Into <span>Running Your Account.</span>
          </h3>
          <p>
            Grouped by what it actually does for your campaign — not a wall of
            identical boxes.
          </p>
        </div>

        <div class="ppcDeliverables-groups">
          <div class="ppcDeliverables-group">
            <h4>Strategy & Setup</h4>
            <ul>
              <li>Keyword Research &amp; Intent Mapping</li>
              <li>Campaign Structure &amp; Setup</li>
              <li>Audience Targeting</li>
            </ul>
          </div>

          <div class="ppcDeliverables-group">
            <h4>Creative & Experience</h4>
            <ul>
              <li>Ad Copywriting</li>
              <li>Landing Page Alignment</li>
              <li>A/B Testing</li>
            </ul>
          </div>

          <div class="ppcDeliverables-group">
            <h4>Tracking & Budget</h4>
            <ul>
              <li>Conversion Tracking Setup</li>
              <li>Bid &amp; Budget Management</li>
              <li>Negative Keyword Optimization</li>
            </ul>
          </div>

          <div class="ppcDeliverables-group">
            <h4>Monitoring & Reporting</h4>
            <ul>
              <li>Performance Monitoring</li>
              <li>Search Term Analysis</li>
              <li>Monthly Performance Reporting</li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <!-- ============================================================
           GOOGLE ADS — PACKAGE + CUSTOM REQUIREMENTS FORM
      ============================================================= -->
    <section class="ecomPackage">
      <div class="container">
        <div class="ecomPackage-inner">
          <!-- LEFT — GOOGLE ADS PACKAGE -->
          <div class="ecomPackage-content">
            <span class="ecomPackage-label">GOOGLE ADS MANAGEMENT</span>

            <h3>
              Get Found When Your <br />
              <span>Customers Are Searching for You.</span>
            </h3>

            <p class="ecomPackage-intro">
              Targeted Google advertising to reach people actively searching
              for your products or services, with professional campaign
              management, optimisation, and performance tracking.
            </p>

            <div class="ecomPackage-package">
              <div class="ecomPackage-package-head">
                <div>
                  <span class="ecomPackage-package-label">GOOGLE ADS MANAGEMENT</span>
                  <h4>Wondering What You Get?</h4>
                </div>

                <div class="ecomPackage-package-price">
                  <small>SERVICE FEE STARTS AT</small>
                  <strong>₹4,999 <em>/ Month*</em></strong>
                </div>
              </div>

              <!-- FIRST 4 FEATURES (always visible) -->
              <div class="ecomPackage-package-list ecomPackage-package-list--top">
                <div class="ecomPackage-package-item">
                  <i>✓</i><span>Google Ads Campaign Creation &amp; Management</span>
                </div>
                <div class="ecomPackage-package-item">
                  <i>✓</i><span>Keyword Research &amp; Targeting</span>
                </div>
                <div class="ecomPackage-package-item">
                  <i>✓</i><span>Search, Display &amp; Remarketing Campaigns</span>
                </div>
                <div class="ecomPackage-package-item">
                  <i>✓</i><span>Ad Copy &amp; Campaign Setup</span>
                </div>
              </div>

              <!-- REMAINING 5 FEATURES (slide down) -->
              <div class="ecomPackage-more">
                <div class="ecomPackage-package-list ecomPackage-package-list--more">
                  <div class="ecomPackage-package-item">
                    <i>✓</i><span>Location &amp; Audience Targeting</span>
                  </div>
                  <div class="ecomPackage-package-item">
                    <i>✓</i><span>Conversion Tracking &amp; Goal Setup</span>
                  </div>
                  <div class="ecomPackage-package-item">
                    <i>✓</i><span>Bid &amp; Budget Optimisation</span>
                  </div>
                  <div class="ecomPackage-package-item">
                    <i>✓</i><span>Campaign Monitoring &amp; Optimisation</span>
                  </div>
                  <div class="ecomPackage-package-item">
                    <i>✓</i><span>Performance Tracking &amp; Reporting</span>
                  </div>
                </div>
              </div>

              <button class="ecomPackage-toggle" role="button" tabindex="0" aria-expanded="false">
                <span class="ecomPackage-toggle-text">View all</span>
                <i aria-hidden="true"></i>
              </button>

              <div class="ecomPackage-package-bottom">
                <div class="ecomPackage-offer">
                  <span class="ecomPackage-offer-tag">AD BUDGET</span>

                  <span class="ecomPackage-offer-text">
                    <strong>Your Advertising Budget Stays Under Your
                      Control.</strong>
                    <small>
                      We manage your campaigns, keyword targeting, bidding,
                      optimisation, and performance tracking while your
                      advertising budget is paid directly to Google.
                    </small>
                  </span>
                </div>

                <button type="button" class="btn btn-outline-primary" data-model=".enquire-pop">
                  View My Google Ads Plan <i>↗</i>
                </button>
              </div>
            </div>

            <!-- FOOTNOTE -->
            <div class="ecomPackage-note">
              <span>✓</span>
              <p>
                *Ad spend is separate and paid directly to Google. Service
                fees may vary based on your advertising budget, campaign
                requirements, number of campaigns, and overall scope.
              </p>
            </div>

            <!-- CALLBACK OFFER -->
            <div class="ecomPackage-dynamic">
              <div class="ecomPackage-dynamic-text">
                <h5>Want to Discuss Your Campaign?</h5>
              </div>

              <button type="button" class="btn btn-black" data-model=".enquire-pop">
                get a Callback <i>↗</i>
              </button>
            </div>
          </div>

          <!-- RIGHT — CUSTOM REQUIREMENTS FORM -->
          <div class="ecomPackage-form">
            <div class="ecomPackage-form-head">
              <span class="ecomPackage-form-label">HAVE CUSTOM GOOGLE ADS REQUIREMENTS?</span>

              <h4>
                Tell Us Your
                <span>Advertising Goals.</span>
              </h4>

              <p>
                Need help with lead generation, sales, keyword targeting or a
                complete Google advertising strategy? Tell us what you need.
              </p>
            </div>

            <form>
              <div class="ecomPackage-form-group">
                <label for="packageName">Full Name</label>
                <input type="text" id="packageName" name="name" placeholder="Enter your full name" />
              </div>

              <div class="ecomPackage-form-group">
                <label for="packageMobile">Mobile Number</label>
                <input type="tel" id="packageMobile" name="mobile" placeholder="Enter your mobile number" />
              </div>

              <div class="ecomPackage-form-group">
                <label for="packageBusiness">Business Type</label>
                <select id="packageBusiness" name="business_type">
                  <option value="" selected disabled>
                    Select your business type
                  </option>
                  <option value="corporate">Corporate</option>
                  <option value="small-business">Small Business</option>
                  <option value="professional-services">
                    Professional Services
                  </option>
                  <option value="ecommerce">E-Commerce</option>
                  <option value="startup">Startup</option>
                  <option value="local-business">Local Business</option>
                  <option value="other">Other Business</option>
                </select>
              </div>

              <div class="ecomPackage-form-group">
                <label for="packageMessage">Your Requirements</label>
                <textarea id="packageMessage" name="requirements" rows="4"
                  placeholder="Tell us about your campaign goals, budget or requirements"></textarea>
              </div>

              <div class="ecomPackage-form-action">
                <button type="submit" class="btn btn-black">
                  Tell Us Your Google Ads Requirements <i>↗</i>
                </button>

                <p class="ecomPackage-form-privacy">
                  We respect your privacy. Your details are safe with us.
                </p>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

    <!-- ============================================================
           05 — OUR APPROACH (comman .secG reused)
      ============================================================= -->
    <section class="secG" id="ppc-approach">
      <div class="container">
        <div class="heading">
          <span class="eyebrow">
            <span class="eyebrow-line"></span>
            HOW WE WORK
          </span>

          <h3>Our Approach Data Drives <span> Every Decision.</span></h3>

          <p>
            No random campaign setup, every decision is grounded in intent and
            performance data.
          </p>
        </div>

        <div class="secG-process">
          <div class="secG-line">
            <span></span>
          </div>

          <article class="secG-step">
            <div class="secG-marker">
              <div class="secG-icon">
                <svg viewBox="0 0 24 24" aria-hidden="true">
                  <circle cx="11" cy="11" r="6.5"></circle>
                  <path d="m16 16 4 4"></path>
                  <path d="M8.5 11h5"></path>
                  <path d="M11 8.5v5"></path>
                </svg>
              </div>
            </div>

            <div class="secG-info">
              <span class="secG-kicker">RESEARCH &amp; AUDIENCE ANALYSIS</span>
              <h4>Understand Before You Spend</h4>
              <p>
                We understand your business, audience and current account
                performance before touching a single setting.
              </p>

              <div class="secG-details">
                <span>Audience</span>
                <span>Market</span>
                <span>Account Audit</span>
              </div>
            </div>

            <div class="secG-side">
              <span>01</span>
              <strong>Foundation</strong>
            </div>
          </article>

          <article class="secG-step">
            <div class="secG-marker">
              <div class="secG-icon">
                <svg viewBox="0 0 24 24" aria-hidden="true">
                  <rect x="4" y="4" width="16" height="16" rx="2"></rect>
                  <path d="M8 9h8"></path>
                  <path d="M8 13h5"></path>
                  <path d="M8 17h7"></path>
                </svg>
              </div>
            </div>

            <div class="secG-info">
              <span class="secG-kicker">KEYWORD &amp; INTENT PLANNING</span>
              <h4>Target Searches That Convert</h4>
              <p>
                We map keywords to real search intent so your budget goes
                toward searches that are likely to convert.
              </p>

              <div class="secG-details">
                <span>Keywords</span>
                <span>Intent</span>
                <span>Negative Terms</span>
              </div>
            </div>

            <div class="secG-side">
              <span>02</span>
              <strong>Direction</strong>
            </div>
          </article>

          <article class="secG-step">
            <div class="secG-marker">
              <div class="secG-icon">
                <svg viewBox="0 0 24 24" aria-hidden="true">
                  <path d="M5 19 19 5"></path>
                  <path d="m7 5 12 12"></path>
                  <path d="M5 12h4"></path>
                  <path d="M15 12h4"></path>
                </svg>
              </div>
            </div>

            <div class="secG-info">
              <span class="secG-kicker">CAMPAIGN STRUCTURING</span>
              <h4>Build A Clean Account Structure</h4>
              <p>
                We build a clean account structure that makes performance easy
                to read and easy to optimize.
              </p>

              <div class="secG-details">
                <span>Structure</span>
                <span>Ad Groups</span>
                <span>Budgets</span>
              </div>
            </div>

            <div class="secG-side">
              <span>03</span>
              <strong>Structure</strong>
            </div>
          </article>

          <article class="secG-step">
            <div class="secG-marker">
              <div class="secG-icon">
                <svg viewBox="0 0 24 24" aria-hidden="true">
                  <path d="m8 9-4 3 4 3"></path>
                  <path d="m16 9 4 3-4 3"></path>
                  <path d="m14 5-4 14"></path>
                </svg>
              </div>
            </div>

            <div class="secG-info">
              <span class="secG-kicker">AD LAUNCH &amp; TESTING</span>
              <h4>Launch, Test And Learn Early</h4>
              <p>
                We launch with multiple ad variations running so we learn what
                actually resonates, early.
              </p>

              <div class="secG-details">
                <span>Launch</span>
                <span>A/B Testing</span>
                <span>Creative</span>
              </div>
            </div>

            <div class="secG-side">
              <span>04</span>
              <strong>Launch</strong>
            </div>
          </article>

          <article class="secG-step">
            <div class="secG-marker">
              <div class="secG-icon">
                <svg viewBox="0 0 24 24" aria-hidden="true">
                  <path d="M4 18 10 12l4 4 6-8"></path>
                  <path d="M15 8h5v5"></path>
                </svg>
              </div>
            </div>

            <div class="secG-info">
              <span class="secG-kicker">CONTINUOUS OPTIMIZATION</span>
              <h4>Refine Against The Data</h4>
              <p>
                Bids, budgets and targeting are refined against what the data
                is actually showing, on an ongoing basis.
              </p>

              <div class="secG-details">
                <span>Bids</span>
                <span>Budgets</span>
                <span>Refinement</span>
              </div>
            </div>

            <div class="secG-side">
              <span>05</span>
              <strong>Optimization</strong>
            </div>
          </article>

          <article class="secG-step secG-step-last">
            <div class="secG-marker">
              <div class="secG-icon">
                <svg viewBox="0 0 24 24" aria-hidden="true">
                  <rect x="4" y="4" width="16" height="16" rx="2"></rect>
                  <path d="m8 12 2.5 2.5L16 9"></path>
                </svg>
              </div>
            </div>

            <div class="secG-info">
              <span class="secG-kicker">TRANSPARENT REPORTING</span>
              <h4>Know What Is Working</h4>
              <p>
                You get clear monthly reporting on what's working, what isn't,
                and what changes next.
              </p>

              <div class="secG-details">
                <span>Reporting</span>
                <span>Insights</span>
                <span>Next Steps</span>
              </div>
            </div>

            <div class="secG-side">
              <span>06</span>
              <strong>Clarity</strong>
            </div>
          </article>
        </div>
      </div>
    </section>

    <!-- ============================================================
           06 — CONVERSION TRACKING ACCURACY (new — .ppcTracking, DIFFERENTIATOR)
      ============================================================= -->
    <section class="ppcTracking">
      <div class="container">
        <div class="heading">
          <span class="eyebrow"><span class="eyebrow-line"></span>TRACKING ACCURACY</span>
          <h3>Better Tracking <span>Creates Better Decisions.</span></h3>
          <p>
            Clicks are not the final goal. Reliable conversion data is what
            actually tells you whether a campaign is working.
          </p>
        </div>

        <div class="ppcTracking-panel">
          <div class="ppcTracking-flow">
            <div class="ppcTracking-step">
              <span>Click</span>
              <p>Someone reaches the ad and clicks through.</p>
            </div>
            <i class="ppcTracking-arrow">→</i>
            <div class="ppcTracking-step">
              <span>Landing Page</span>
              <p>They land on a page built to match what the ad promised.</p>
            </div>
            <i class="ppcTracking-arrow">→</i>
            <div class="ppcTracking-step">
              <span>Enquiry</span>
              <p>A form, call or message comes through from that visit.</p>
            </div>
            <i class="ppcTracking-arrow">→</i>
            <div class="ppcTracking-step ppcTracking-step--final">
              <span>Qualified Lead</span>
              <p>The enquiry is validated as a genuine, relevant lead.</p>
            </div>
          </div>

          <ul class="ppcTracking-notes">
            <li>
              <h4>Accurate Goal Configuration</h4>
              <p>
                Conversion goals are set up to reflect actions that actually
                matter to the business — not just page views.
              </p>
            </li>
            <li>
              <h4>Form, Call &amp; Enquiry Tracking</h4>
              <p>
                Form submissions, calls and WhatsApp enquiries are tracked
                where relevant, not just landing page visits.
              </p>
            </li>
            <li>
              <h4>Avoiding Duplicate Conversions</h4>
              <p>
                We separate genuine actions from repeated or duplicate counts
                so the numbers stay honest.
              </p>
            </li>
            <li>
              <h4>Real Lead Validation</h4>
              <p>
                Enquiries are reviewed against what a qualified lead actually
                looks like for your specific business.
              </p>
            </li>
          </ul>
        </div>
      </div>
    </section>

    <section class="secH">
      <div class="container">
        <div class="heading">
          <span class="eyebrow">
            <span class="eyebrow-line"></span>
            PPC CAMPAIGN TYPES
          </span>

          <h3>
            PPC Campaigns Built For
            <span>Different Business Goals.</span>
          </h3>

          <p>
            Search intent, budgets and buying cycles differ by industry — so
            does the campaign approach.
          </p>
        </div>

        <ul class="secH-grid">
          <!-- Education & Coaching -->
          <li>
            <a href="{{ route('education-coaching') }}">
              <img src="assets/images/website/education.jpg" alt="Education and coaching business" loading="lazy" />

              <span class="secH-name">Education &amp; Coaching</span>
              <span class="secH-desc">
                Course discovery, admissions and learning-focused websites.
              </span>
            </a>
          </li>

          <!-- Retail, E-Commerce & D2C -->
          <li>
            <a href="{{ route('retail-E-Commerce-D2C') }}">
              <img src="assets/images/website/retail.jpg" alt="Retail and e-commerce business" loading="lazy" />

              <span class="secH-name">Retail, E-Commerce &amp; D2C</span>
              <span class="secH-desc">
                Product-led experiences designed to showcase and sell online.
              </span>
            </a>
          </li>

          <!-- Real Estate -->
          <li>
            <a href="{{ route('real-state') }}">
              <img src="assets/images/website/realstate.jpg" alt="Real estate business" loading="lazy" />

              <span class="secH-name">Real Estate</span>
              <span class="secH-desc">
                Property-focused websites that showcase listings and build
                trust.
              </span>
            </a>
          </li>

          <!-- Healthcare & Clinics -->
          <li>
            <a href="{{ route('healthcare-clinics') }}">
              <img src="assets/images/website/healthcare.jpg" alt="Healthcare and clinic business" loading="lazy" />

              <span class="secH-name">Healthcare &amp; Clinics</span>
              <span class="secH-desc">
                Clear, accessible websites for clinics, healthcare providers
                and patients.
              </span>
            </a>
          </li>

          <!-- NGO & Non-Profits -->
          <li>
            <a href="{{ route('NGO-Non-Profits') }}">
              <img src="assets/images/website/ngo.jpg" alt="NGO and non-profit organisation" loading="lazy" />

              <span class="secH-name">NGO &amp; Non-Profits</span>
              <span class="secH-desc">
                Purpose-driven websites for organisations, campaigns and
                communities.
              </span>
            </a>
          </li>

          <!-- Manufacturing & Export -->
          <li>
            <a href="{{ route('manufacturing-export') }}">
              <img src="assets/images/website/manufacturing.jpg" alt="Manufacturing and export business" loading="lazy" />

              <span class="secH-name">Manufacturing &amp; Export</span>
              <span class="secH-desc">
                Product, capability and export-focused websites for
                manufacturers.
              </span>
            </a>
          </li>

          <!-- Hotels & Hospitality -->
          <li>
            <a href="{{ route('hotels-hospitality') }}">
              <img src="assets/images/website/hotel.jpg" alt="Hotels and hospitality business" loading="lazy" />

              <span class="secH-name">Hotels &amp; Hospitality</span>
              <span class="secH-desc">
                Engaging websites that showcase properties, experiences and
                services.
              </span>
            </a>
          </li>

          <!-- Travel & Tourism -->
          <li>
            <a href="{{ route('travel-tourism') }}">
              <img src="assets/images/website/travel.jpg" alt="Travel and tourism business" loading="lazy" />

              <span class="secH-name">Travel &amp; Tourism</span>
              <span class="secH-desc">
                Inspiring travel websites built around destinations,
                experiences and enquiries.
              </span>
            </a>
          </li>
        </ul>
      </div>
    </section>

    <!-- ============================================================
           09 — WHY CHOOSE WEB MINGO (comman .secL reused)
      ============================================================= -->
    <section class="secL">
      <div class="container">
        <div class="heading">
          <span class="eyebrow"><span class="eyebrow-line"></span>WHY WEB MINGO</span>
          <h3>
            Why Businesses Choose A
            <span> More Transparent PPC Process.</span>
          </h3>
          <p>
            No guaranteed leads, no vague promises — just a process built on
            intent, tracking and clear reporting.
          </p>
        </div>

        <ul class="secL-list">
          <li>
            <span class="secL-icon"><svg viewBox="0 0 24 24">
                <path d="M12 3l8 4v6c0 5-3.5 7.5-8 9-4.5-1.5-8-4-8-9V7l8-4z" />
                <path d="M8 12l3 3 5-6" />
              </svg></span>
            <div>
              <h4>Business Goal Alignment</h4>
              <p>
                Every campaign is structured around what actually matters to
                your business.
              </p>
            </div>
          </li>
          <li>
            <span class="secL-icon"><svg viewBox="0 0 24 24">
                <circle cx="11" cy="11" r="7" />
                <path d="M21 21l-4.3-4.3" />
                <path d="M8 11h6" />
              </svg></span>
            <div>
              <h4>Intent-Based Keyword Strategy</h4>
              <p>Keywords are chosen for search intent, not just volume.</p>
            </div>
          </li>
          <li>
            <span class="secL-icon"><svg viewBox="0 0 24 24">
                <rect x="4" y="4" width="16" height="16" rx="2" />
                <path d="M8 9h8M8 13h5M8 17h3" />
              </svg></span>
            <div>
              <h4>Transparent Campaign Access</h4>
              <p>You retain access to your own Google Ads account, always.</p>
            </div>
          </li>
          <li>
            <span class="secL-icon"><svg viewBox="0 0 24 24">
                <path d="M3 3v18h18" />
                <path d="M7 15l4-5 3 3 6-8" />
              </svg></span>
            <div>
              <h4>Conversion Tracking Focus</h4>
              <p>
                Decisions are made on accurate data, not surface-level clicks.
              </p>
            </div>
          </li>
        </ul>

        <div class="cntr">
          <button type="button" data-model=".enquire-pop" class="btn btn-outline-black">
            Start Your PPC Project <i>↗</i>
          </button>
        </div>
      </div>
    </section>

    <!-- ============================================================
           11 — FAQ (comman .secN reused)
      ============================================================= -->
    @include('partials.page-faqs', [
      'title' => 'Frequently Asked Questions <span>About Google Ads Management.</span>',
      'intro' => 'Straight answers to what most people ask before getting started.',
    ])

    <!-- ============================================================
           12 — FINAL CTA (comman .cta-promo reused)
      ============================================================= -->
    <div class="container">
      <div class="cta-promo">
        <div class="cta-promo__inner">
          <span class="cta-promo__eyebrow">READY TO MAKE YOUR AD SPEND COUNT?</span>
          <h3 class="cta-promo__heading">
            Turn Your Ad Budget Into a Smarter Growth Strategy.
          </h3>
          <p class="cta-promo__sub">
            Get a clearer understanding of your campaign opportunities,
            tracking setup, and optimization priorities with a free Google Ads
            audit.
          </p>
          <div class="cta-promo__actions">
            <button class="btn btn-white" data-model=".enquire-pop">
              Get a Free Google Ads Audit <i>↗</i>
            </button>
            <a href="javascript:void(0)" class="btn btn-outline-white">WhatsApp Us <i>↗</i></a>
          </div>
        </div>
      </div>
    </div>

    <!-- ============================================================
           SEO LINKS (existing .secO)
      ============================================================= -->
    <section class="secO">
      <div class="container">
        <div class="heading">
          <span class="eyebrow">
            <span class="eyebrow-line"></span>
            MORE FROM WEB MINGO
          </span>

          <h3>Your Digital Journey, <span>Continues.</span></h3>

          <p>
            Explore our digital solutions, latest work, and the services built
            to help your business grow online.
          </p>
        </div>

        <ul class="secO-grid">
          <li>
            <a href="javascript:void(0)"><span aria-hidden="true"><svg viewBox="0 0 24 24">
                  <rect x="3" y="3" width="18" height="18" rx="2" />
                  <path d="M3 9h18M9 21V9" />
                </svg></span><em>E-Commerce</em></a>
          </li>
          <li>
            <a href="javascript:void(0)"><span aria-hidden="true"><svg viewBox="0 0 24 24">
                  <path d="M8 3L3 8l5 5M16 3l5 5-5 5M14 4l-4 16" />
                </svg></span><em>Web Apps</em></a>
          </li>
          <li>
            <a href="javascript:void(0)"><span aria-hidden="true"><svg viewBox="0 0 24 24">
                  <rect x="7" y="2" width="10" height="20" rx="2" />
                  <path d="M11 18h2" />
                </svg></span><em>Mobile Apps</em></a>
          </li>
          <li>
            <a href="javascript:void(0)"><span aria-hidden="true"><svg viewBox="0 0 24 24">
                  <circle cx="11" cy="11" r="7" />
                  <path d="M21 21l-4.3-4.3" />
                </svg></span><em>SEO</em></a>
          </li>
          <li>
            <a href="javascript:void(0)"><span aria-hidden="true"><svg viewBox="0 0 24 24">
                  <path d="M3 3v18h18" />
                  <path d="M7 15l4-4 3 3 5-6" />
                </svg></span><em>Marketing</em></a>
          </li>
          <li>
            <a href="javascript:void(0)"><span aria-hidden="true"><svg viewBox="0 0 24 24">
                  <path d="M12 19l7-7 3 3-7 7-3-3z" />
                  <path d="M18 13l-1.5-7.5L2 2l3.5 14.5L13 18l5-5z" />
                </svg></span><em>Portfolio</em></a>
          </li>
          <li>
            <a href="javascript:void(0)"><span aria-hidden="true"><svg viewBox="0 0 24 24">
                  <circle cx="12" cy="8" r="4" />
                  <path d="M4 21c0-4 4-6 8-6s8 2 8 6" />
                </svg></span><em>About Us</em></a>
          </li>
          <li>
            <a href="javascript:void(0)"><span aria-hidden="true"><svg viewBox="0 0 24 24">
                  <path d="M4 4h16v16H4z" />
                  <path d="M4 6l8 7 8-7" />
                </svg></span><em>Contact Us</em></a>
          </li>
        </ul>
      </div>
    </section>
  </main>

@endsection

@push('scripts')

  <script>
    $(function () {
      $(".ecomPackage-toggle > span").on("click keydown", function (e) {
        if (e.type === "keydown" && e.key !== "Enter" && e.key !== " ")
          return;
        e.preventDefault();

        var $btn = $(this);
        var $more = $btn.parent().prev(".ecomPackage-more");
        var isOpen = $btn.hasClass("is-open");

        $more.stop(true, true).slideToggle(300);

        $btn.toggleClass("is-open", !isOpen).attr("aria-expanded", !isOpen);

        $btn
          .find(".ecomPackage-toggle-text")
          .text(isOpen ? "View all" : "View less");
      });
    });
  </script>

@endpush