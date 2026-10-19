@extends('layouts.app')

@push('styles')
  <link rel="stylesheet" href="assets/sass/meta/meta.css" />
@endpush

@section('content')


  <main>
    <!-- ============================================================
         01 — BANNER (comman .banner reused)
    ============================================================= -->
    <section class="banner">
      <div class="bg">
        <video autoplay muted loop playsinline class="bg-video" src="assets/video/effect3.mp4"
          poster="assets/video/poster/effect3.png">
          <source src="assets/video/effect3.mp4" type="video/mp4" />
        </video>
        <div class="container">
          <div class="banner-wrapper">
            <div class="content">
              <span class="eyebrow">META ADS MANAGEMENT</span>

              <h1>Reach the Right Audience Across Facebook & Instagram.</h1>

              <p>
                We build and manage Meta campaigns designed around your
                audience, offer and business objective—from awareness to leads
                and sales.
              </p>

              <div class="banner-actions">
                <button class="btn btn-white" data-model=".enquire-pop">
                  Discuss Your Ad Campaign<i>↗</i>
                </button>
                <a href="javascript:void()" class="btn btn-outline-white">
                  Chat on WhatsApp<i>↗</i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ============================================================
         META ADS — THE PROBLEM WE SOLVE
    ============================================================ -->

    <section class="metaProblem" id="metaProblem">
      <div class="container">
        <div class="heading">
          <span class="eyebrow">
            <span class="eyebrow-line"></span>
            THE PROBLEM WE SOLVE
          </span>
          <h3>
            Boosted Your Post, But Where
            <span> Are the Customers?</span>
          </h3>
          <p>
            Likes and reach are not enough to grow your business. We help you
            turn Meta advertising into a focused strategy designed to connect
            with the right audience and generate meaningful business
            opportunities.
          </p>
        </div>

        <div class="metaProblem-grid">
          <!-- Left: Common Problems -->
          <div class="metaProblem-content">
            <div class="metaProblem-intro">
              <span class="eyebrow">
                <span class="eyebrow-line"></span>
                SOUND FAMILIAR?
              </span>

              <h4>
                Your Ads Are Getting Attention,
                <span>But Not Enough Results.</span>
              </h4>

              <p>
                You boosted a post, spent your budget, and reached thousands
                of people. But genuine enquiries, calls, and sales were still
                missing. This usually happens when campaigns run without the
                right audience, creative direction, and performance tracking.
              </p>
            </div>

            <ul class="metaProblem-list">
              <li class="metaProblem-item">
                <span class="metaProblem-icon" aria-hidden="true">×</span>

                <div>
                  <h5>Boosted Posts, But No Enquiries</h5>

                  <p>
                    Your content reaches people, but very few users contact
                    your business or show genuine interest.
                  </p>
                </div>
              </li>

              <li class="metaProblem-item">
                <span class="metaProblem-icon" aria-hidden="true">×</span>

                <div>
                  <h5>Likes and Reach, But No Customers</h5>

                  <p>
                    Your campaign receives engagement without reaching enough
                    people who are ready to take action.
                  </p>
                </div>
              </li>

              <li class="metaProblem-item">
                <span class="metaProblem-icon" aria-hidden="true">×</span>

                <div>
                  <h5>Unclear Audience Targeting</h5>

                  <p>
                    You are unsure which audience, interests, or locations are
                    relevant to your business.
                  </p>
                </div>
              </li>

              <li class="metaProblem-item">
                <span class="metaProblem-icon" aria-hidden="true">×</span>

                <div>
                  <h5>No Clear Performance Insights</h5>

                  <p>
                    You cannot identify which ads, creatives, or audiences are
                    delivering meaningful results.
                  </p>
                </div>
              </li>
            </ul>
          </div>

          <!-- Right: Our Solution -->
          <div class="metaProblem-card">
            <div class="metaProblem-image">
              <img src="assets/images/website/meta-probleim.png" alt="Business owner managing an online business"
                loading="lazy" width="1200" height="315" />

              <span class="metaProblem-badge">
                FROM BOOSTING TO STRATEGY
              </span>
            </div>

            <div class="metaProblem-cardBody">
              <span class="metaProblem-tag">HOW WE HELP</span>

              <h4>Your Meta Ads Need More Than Just Reach.</h4>

              <p>
                We replace random post boosting with a structured Meta Ads
                strategy built around your business goals, audience behaviour,
                creative performance, and measurable campaign outcomes.
              </p>

              <ul class="metaProblem-features">
                <li>
                  <span aria-hidden="true">✓</span>
                  <p>Targeted Audience Research</p>
                </li>

                <li>
                  <span aria-hidden="true">✓</span>
                  <p>Creative Ad Campaigns</p>
                </li>

                <li>
                  <span aria-hidden="true">✓</span>
                  <p>Goal-Based Campaign Setup</p>
                </li>

                <li>
                  <span aria-hidden="true">✓</span>
                  <p>Tracking & Optimisation</p>
                </li>
              </ul>

              <button type="button" class="btn btn-black" data-model=".enquire-pop">
                Get a Better Ad Strategy
                <span aria-hidden="true">↗</span>
              </button>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ============================================================
         03 — TYPES OF META AD CAMPAIGNS WE RUN (.metaTypes — NEW)
    ============================================================= -->
    <section class="metaTypes">
      <div class="container">
        <div class="heading">
          <span class="eyebrow">
            <span class="eyebrow-line"></span>
            CAMPAIGN OBJECTIVES
          </span>
          <h3>Campaigns Built Around <span> Your Business Goals.</span></h3>
          <p>
            Each objective is chosen to match what your business actually
            wants to achieve — not a one-size-fits-all boost.
          </p>
        </div>

        <div class="metaTypes-layout">
          <div class="metaTypes-featured">
            <img src="assets/images/website/metaType.png" alt="Lead generation Meta Ads campaign example"
              loading="lazy" />
            <div class="metaTypes-featured__content">
              <span class="metaTypes-tag">MOST REQUESTED</span>
              <h4>Lead Generation Ads</h4>
              <p>
                Help businesses generate relevant enquiries through
                in-platform lead forms or landing pages, without the user
                leaving their feed.
              </p>
            </div>
          </div>

          <ul class="metaTypes-grid">
            <li>
              <span class="metaTypes-icon"><svg viewBox="0 0 24 24">
                  <path d="M3 3h18v18H3z" />
                  <path d="M8 12l3 3 5-6" />
                </svg></span>
              <h4>Conversion &amp; Sales Ads</h4>
              <p>
                Support product purchases or other measurable website actions.
              </p>
            </li>
            <li>
              <span class="metaTypes-icon"><svg viewBox="0 0 24 24">
                  <path d="M4 19V5m8 14V9m8 10V3" />
                </svg></span>
              <h4>Traffic Campaigns</h4>
              <p>
                Drive relevant visitors to your website, landing page or app.
              </p>
            </li>
            <li>
              <span class="metaTypes-icon"><svg viewBox="0 0 24 24">
                  <circle cx="12" cy="12" r="8" />
                  <path d="M12 8v4l3 3" />
                </svg></span>
              <h4>Brand Awareness &amp; Reach Ads</h4>
              <p>
                Introduce your business to relevant audiences and build
                visibility.
              </p>
            </li>
            <li>
              <span class="metaTypes-icon"><svg viewBox="0 0 24 24">
                  <path d="M17 2l4 4-4 4M7 22l-4-4 4-4" />
                  <path d="M21 6H8a5 5 0 0 0-5 5m18 2a5 5 0 0 1-5 5H3" />
                </svg></span>
              <h4>Retargeting Campaigns</h4>
              <p>
                Re-engage audiences who've previously interacted with your
                brand.
              </p>
            </li>
            <li>
              <span class="metaTypes-icon"><svg viewBox="0 0 24 24">
                  <rect x="3" y="7" width="7" height="7" rx="1" />
                  <rect x="14" y="7" width="7" height="7" rx="1" />
                  <rect x="3" y="16" width="7" height="4" rx="1" />
                  <rect x="14" y="16" width="7" height="4" rx="1" />
                </svg></span>
              <h4>Catalog &amp; Dynamic Product Ads</h4>
              <p>
                Promote relevant products automatically for suitable
                e-commerce businesses.
              </p>
            </li>
            <!-- Last CTA Card -->
            <li class="metaTypes-talk">
              <span class="metaTypes-number">LET'S TALK</span>

              <h4>Not Sure Which Campaign Fits Your Business?</h4>

              <p>
                Let's discuss your goals and find the right Meta Ads approach
                for your business.
              </p>

              <a href="javascript:void(0)" class="btn btn-black" data-model=".enquire-pop">
                Let's Talk
                <i aria-hidden="true">↗</i>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </section>

    <!-- ============================================================
         04 — WHAT'S INCLUDED IN OUR META ADS SERVICE
    ============================================================= -->

    <section class="metaIncluded">
      <div class="container">
        <div class="heading">
          <span class="eyebrow">
            <span class="eyebrow-line"></span>
            WHAT'S INCLUDED
          </span>

          <h3>
            Everything Your Meta Campaign
            <span>Needs to Get Started With Structure.</span>
          </h3>
          <p>
            A complete, done-for-you setup — grouped around a practical Meta
            Ads workflow, from strategy and creative development to campaign
            management and performance measurement.
          </p>
        </div>

        <!-- Service Grid -->
        <div class="metaIncluded-grid">
          <!-- Strategy -->
          <div class="metaIncluded-cat">
            <div class="metaIncluded-cat__head">
              <span class="metaIncluded-cat__number">01</span>
              <span class="metaIncluded-cat__label">STRATEGY</span>
            </div>

            <div class="metaIncluded-cat__body">
              <h4>Build the Right Campaign Foundation</h4>

              <ul>
                <li>Audience research &amp; targeting</li>
                <li>Campaign objective planning</li>
              </ul>
            </div>
          </div>

          <!-- Creative -->
          <div class="metaIncluded-cat">
            <div class="metaIncluded-cat__head">
              <span class="metaIncluded-cat__number">02</span>
              <span class="metaIncluded-cat__label">CREATIVE</span>
            </div>

            <div class="metaIncluded-cat__body">
              <h4>Create Ads That Earn Attention</h4>

              <ul>
                <li>Ad creative design — image, video &amp; carousel</li>
                <li>Ad copywriting</li>
              </ul>
            </div>
          </div>

          <!-- Campaign Management -->
          <div class="metaIncluded-cat">
            <div class="metaIncluded-cat__head">
              <span class="metaIncluded-cat__number">03</span>
              <span class="metaIncluded-cat__label">CAMPAIGN MANAGEMENT</span>
            </div>

            <div class="metaIncluded-cat__body">
              <h4>Manage and Improve Campaign Performance</h4>

              <ul>
                <li>Campaign setup &amp; structuring</li>
                <li>A/B testing &amp; retargeting setup</li>
              </ul>
            </div>
          </div>

          <!-- Measurement -->
          <div class="metaIncluded-cat">
            <div class="metaIncluded-cat__head">
              <span class="metaIncluded-cat__number">04</span>
              <span class="metaIncluded-cat__label">MEASUREMENT</span>
            </div>

            <div class="metaIncluded-cat__body">
              <h4>Track Results With Clear Insights</h4>

              <ul>
                <li>Meta Pixel &amp; conversion tracking setup</li>
                <li>Monthly reporting &amp; insights</li>
              </ul>
            </div>
          </div>

          <!-- Bottom Visual Card -->
          <div class="metaIncluded-visual">
            <img src="assets/images/website/metaInclude.png" alt="Meta advertising campaign planning workspace"
              loading="lazy" />

            <div class="metaIncluded-visual__overlay">
              <span>FROM STRATEGY</span>
              <strong>To Measurable Growth.</strong>
            </div>
          </div>

          <!-- Bottom CTA Card -->
          <div class="metaIncluded-cta">
            <span class="metaIncluded-cta__label"> YOUR NEXT CAMPAIGN </span>

            <div class="metaIncluded-cta__content">
              <h4>
                Turn Your Meta Ads Into a More Structured Growth Channel.
              </h4>

              <p>
                We help you connect audience research, creative campaigns and
                performance tracking to your actual business goals.
              </p>
            </div>

            <a href="javascript:void(0)" class="btn btn-black" data-model=".enquire-pop">
              Let's Discuss Your Goals
              <i>↗</i>
            </a>
          </div>
        </div>
      </div>
    </section>

    <!-- ============================================================
         META ADS — PACKAGE + CUSTOM REQUIREMENTS FORM
    ============================================================= -->
    <section class="ecomPackage">
      <div class="container">
        <div class="ecomPackage-inner">
          <!-- LEFT — META ADS PACKAGE -->
          <div class="ecomPackage-content">
            <span class="ecomPackage-label">META ADS MANAGEMENT</span>

            <h3>
              Reach the Right Audience.
              <span>Generate More Leads &amp; Sales.</span>
            </h3>

            <p class="ecomPackage-intro">
              Targeted Facebook &amp; Instagram advertising with professional
              campaign management, audience targeting, retargeting,
              optimisation, and performance tracking.
            </p>

            <div class="ecomPackage-package">
              <div class="ecomPackage-package-head">
                <div>
                  <span class="ecomPackage-package-label">META ADS MANAGEMENT</span>
                  <h4>Wondering What You Get?</h4>
                </div>

                <div class="ecomPackage-package-price">
                  <small>SERVICE FEE STARTS AT</small>
                  <strong>₹7,999 <em>/ Month*</em></strong>
                </div>
              </div>

              <!-- FIRST 4 FEATURES (always visible) -->
              <div class="ecomPackage-package-list ecomPackage-package-list--top">
                <div class="ecomPackage-package-item">
                  <i>✓</i><span>Meta Ads Campaign Creation &amp; Management</span>
                </div>
                <div class="ecomPackage-package-item">
                  <i>✓</i><span>Audience Research &amp; Targeting</span>
                </div>
                <div class="ecomPackage-package-item">
                  <i>✓</i><span>Lead, Traffic, Sales &amp; Engagement Campaigns</span>
                </div>
                <div class="ecomPackage-package-item">
                  <i>✓</i><span>Retargeting Campaigns</span>
                </div>
              </div>

              <!-- REMAINING 5 FEATURES (slide down) -->
              <div class="ecomPackage-more">
                <div class="ecomPackage-package-list ecomPackage-package-list--more">
                  <div class="ecomPackage-package-item">
                    <i>✓</i><span>Meta Pixel &amp; Conversion Tracking</span>
                  </div>
                  <div class="ecomPackage-package-item">
                    <i>✓</i><span>Ad Copy &amp; Campaign Setup</span>
                  </div>
                  <div class="ecomPackage-package-item">
                    <i>✓</i><span>Campaign Monitoring &amp; Optimisation</span>
                  </div>
                  <div class="ecomPackage-package-item">
                    <i>✓</i><span>Performance Tracking &amp; Reporting</span>
                  </div>
                  <div class="ecomPackage-package-item">
                    <i>✓</i><span>Facebook &amp; Instagram Ad Management</span>
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
                      We manage your campaigns, targeting, optimisation, and
                      performance tracking while your advertising budget is
                      paid directly to Meta.
                    </small>
                  </span>
                </div>

                <button type="button" class="btn btn-outline-primary" data-model=".enquire-pop">
                  View My Meta Ads Plan <i>↗</i>
                </button>
              </div>
            </div>

            <!-- FOOTNOTE -->
            <div class="ecomPackage-note">
              <span>✓</span>
              <p>
                *Ad spend is separate and paid directly to Meta. Service fees
                may vary based on your advertising budget, campaign
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
              <span class="ecomPackage-form-label">HAVE CUSTOM META ADS REQUIREMENTS?</span>

              <h4>
                Tell Us Your
                <span>Advertising Goals.</span>
              </h4>

              <p>
                Need help with lead generation, sales, audience targeting or a
                complete Facebook and Instagram advertising strategy? Tell us
                what you need.
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
                  Tell Us Your Meta Ads Requirements <i>↗</i>
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
         05 — OUR APPROACH: CREATIVE-FIRST STRATEGY (comman .secG reused)
    ============================================================= -->
    <section class="secG" id="meta-approach">
      <div class="container">
        <div class="heading">
          <span class="eyebrow">
            <span class="eyebrow-line"></span>
            HOW WE WORK
          </span>

          <h3>Our Creative-First <br /><span>Meta Ads Approach.</span></h3>

          <p>
            On Meta, your creative is often the first interaction a potential
            customer has with your brand, so we build the process around it.
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
              <span class="secG-kicker">AUDIENCE RESEARCH &amp; DISCOVERY</span>
              <h4>Know Your Audience First</h4>
              <p>
                We understand your business goals, target audience, customer
                needs and relevant interests before any creative is built.
              </p>

              <div class="secG-details">
                <span>Audience</span>
                <span>Interests</span>
                <span>Segments</span>
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
                  <path d="M5 19 19 5"></path>
                  <path d="m7 5 12 12"></path>
                  <path d="M5 12h4"></path>
                  <path d="M15 12h4"></path>
                </svg>
              </div>
            </div>

            <div class="secG-info">
              <span class="secG-kicker">CREATIVE CONCEPT &amp; DESIGN</span>
              <h4>Create Ads That Stop The Scroll</h4>
              <p>
                We develop image, video, carousel and messaging concepts
                designed to capture attention while communicating a clear
                offer.
              </p>

              <div class="secG-details">
                <span>Visuals</span>
                <span>Video</span>
                <span>Copywriting</span>
              </div>
            </div>

            <div class="secG-side">
              <span>02</span>
              <strong>Creative</strong>
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
              <span class="secG-kicker">CAMPAIGN SETUP &amp; LAUNCH</span>
              <h4>Structure Campaigns With Purpose</h4>
              <p>
                We structure campaigns, ad sets, objectives, budgets and
                placements based on what the campaign actually requires.
              </p>

              <div class="secG-details">
                <span>Ad Sets</span>
                <span>Budgets</span>
                <span>Placements</span>
              </div>
            </div>

            <div class="secG-side">
              <span>03</span>
              <strong>Launch</strong>
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
              <span class="secG-kicker">CREATIVE &amp; AUDIENCE TESTING</span>
              <h4>Test To Learn What Resonates</h4>
              <p>
                We test relevant creative variations, messaging and audience
                approaches to learn what resonates with each segment.
              </p>

              <div class="secG-details">
                <span>A/B Testing</span>
                <span>Variations</span>
                <span>Learning</span>
              </div>
            </div>

            <div class="secG-side">
              <span>04</span>
              <strong>Testing</strong>
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
              <span class="secG-kicker">OPTIMISATION &amp; RETARGETING</span>
              <h4>Refine And Re-Engage</h4>
              <p>
                We review campaign signals and refine targeting, creative and
                retargeting approaches based on available data.
              </p>

              <div class="secG-details">
                <span>Retargeting</span>
                <span>Refinement</span>
                <span>Signals</span>
              </div>
            </div>

            <div class="secG-side">
              <span>05</span>
              <strong>Optimisation</strong>
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
              <span class="secG-kicker">REPORTING &amp; GROWTH INSIGHTS</span>
              <h4>Turn Results Into Next Steps</h4>
              <p>
                We review key campaign metrics, share insights and recommend
                practical next steps each month.
              </p>

              <div class="secG-details">
                <span>Reporting</span>
                <span>Insights</span>
                <span>Next Steps</span>
              </div>
            </div>

            <div class="secG-side">
              <span>06</span>
              <strong>Growth</strong>
            </div>
          </article>
        </div>
      </div>
    </section>

    <!-- ============================================================
         06 — META PIXEL & CONVERSION TRACKING
    ============================================================= -->

    <section class="metaPixel">
      <div class="container">
        <!-- Section Heading -->
        <div class="heading">
          <span class="eyebrow">
            <span class="eyebrow-line"></span>
            CAMPAIGN MEASUREMENT
          </span>
          <h3>
            Capture the Signals That Help
            <span> You Understand Your Campaigns.</span>
          </h3>

          <p>
            Creative attracts attention, but meaningful measurement helps you
            understand what happens after the click.
          </p>
        </div>

        <!-- Main Panel -->
        <div class="metaPixel-panel">
          <!-- Content -->
          <div class="metaPixel-content">
            <span class="metaPixel-label"> <i>✦</i> OUR DIFFERENTIATOR </span>

            <h4>
              Track What Happens
              <span>After the Click.</span>
            </h4>

            <p>
              We support Meta Pixel and relevant conversion tracking setup to
              help connect website actions with campaign reporting. This gives
              you a clearer view of how visitors interact with your landing
              pages and where conversions take place.
            </p>

            <ul class="metaPixel-points">
              <li>
                <span>01</span>
                Meta Pixel implementation across key pages
              </li>

              <li>
                <span>02</span>
                Conversions API considerations where applicable
              </li>

              <li>
                <span>03</span>
                Conversion event configuration, testing &amp; validation
              </li>

              <li>
                <span>04</span>
                Website and landing page tracking checks
              </li>
            </ul>

            <p class="metaPixel-note">
              Implementation depends on your website, consent requirements and
              supported tracking configuration. We'll help you understand
              what's realistic for your setup.
            </p>

            <div class="metaPixel-actions">
              <button type="button" class="btn btn-black" data-model=".enquire-pop">
                Get Your Tracking Reviewed
                <i>↗</i>
              </button>
            </div>
          </div>

          <!-- Visual -->
          <div class="metaPixel-visual">
            <div class="metaPixel-visual__top">
              <span class="metaPixel-visual__status">
                <i></i> TRACKING WORKFLOW
              </span>

              <span class="metaPixel-visual__count"> 05 STEPS </span>
            </div>

            <!-- Tracking Flow -->
            <div class="metaPixel-flow">
              <div class="metaPixel-flow__step">
                <span>01</span>
                <div>
                  <strong>Ad Interaction</strong>
                  <p>Audience engages with your ad</p>
                </div>
              </div>

              <div class="metaPixel-flow__step">
                <span>02</span>
                <div>
                  <strong>Landing Page</strong>
                  <p>Visitor reaches your website</p>
                </div>
              </div>

              <div class="metaPixel-flow__step">
                <span>03</span>
                <div>
                  <strong>Conversion Event</strong>
                  <p>Action is recorded</p>
                </div>
              </div>

              <div class="metaPixel-flow__step">
                <span>04</span>
                <div>
                  <strong>Tracking Validation</strong>
                  <p>Events are checked and tested</p>
                </div>
              </div>

              <div class="metaPixel-flow__step">
                <span>05</span>
                <div>
                  <strong>Campaign Insights</strong>
                  <p>Results support better decisions</p>
                </div>
              </div>
            </div>

            <!-- Interface Preview -->
            <div class="metaPixel-frame">
              <div class="metaPixel-frame-bar">
                <span class="metaPixel-frame-dots">
                  <i></i>
                  <i></i>
                  <i></i>
                </span>

                <span>Events Manager — Tracking Overview</span>
              </div>

              <div class="metaPixel-frame-image">
                <img src="assets/images/website/metaPixel.png" alt="Conversion tracking and campaign analytics dashboard"
                  loading="lazy" />
              </div>

              <div class="metaPixel-frame-footer">
                <span>EVENT MONITORING</span>
                <strong>Tracking clarity</strong>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ============================================================
         07 — INDUSTRIES WE RUN META ADS FOR (comman .secH reused)
    ============================================================= -->
    <section class="secH">
      <div class="container">
        <div class="heading">
          <span class="eyebrow">
            <span class="eyebrow-line"></span>
            INDUSTRIES WE SERVE
          </span>
          <h3>
            Meta Ads Strategies For<span> Different Business Goals.</span>
          </h3>
          <p>
            Audience behaviour and creative needs differ by industry — so does
            the campaign approach.
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
            A Meta Ads Partner That Understands<span>
              Creative and Technology.</span>
          </h3>
          <p>
            No guaranteed leads, no vague promises — just a process built on
            creative, audience relevance and clear reporting.
          </p>
        </div>

        <ul class="secL-list">
          <li>
            <span class="secL-icon"><svg viewBox="0 0 24 24">
                <path d="M12 3l8 4v6c0 5-3.5 7.5-8 9-4.5-1.5-8-4-8-9V7l8-4z" />
                <path d="M8 12l3 3 5-6" />
              </svg></span>
            <div>
              <h4>In-House Creative &amp; Development</h4>
              <p>
                Creative design and technical setup handled under one roof,
                not outsourced.
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
              <h4>Audience-Focused Campaign Planning</h4>
              <p>
                Targeting built around who's actually relevant to your offer.
              </p>
            </div>
          </li>
          <li>
            <span class="secL-icon"><svg viewBox="0 0 24 24">
                <rect x="4" y="4" width="16" height="16" rx="2" />
                <path d="M8 9h8M8 13h5M8 17h3" />
              </svg></span>
            <div>
              <h4>Creative Testing &amp; Iteration</h4>
              <p>
                Multiple creative directions tested rather than relying on one
                guess.
              </p>
            </div>
          </li>
          <li>
            <span class="secL-icon"><svg viewBox="0 0 24 24">
                <path d="M3 3v18h18" />
                <path d="M7 15l4-5 3 3 6-8" />
              </svg></span>
            <div>
              <h4>Transparent Campaign Reporting</h4>
              <p>
                Clear monthly reports connecting creative decisions to
                campaign signals.
              </p>
            </div>
          </li>
        </ul>

        <div class="cntr">
          <button type="button" data-model=".enquire-pop" class="btn btn-outline-black">
            Start Your Meta Ads Project <i>↗</i>
          </button>
        </div>
      </div>
    </section>

    <!-- ============================================================
         11 — FAQ (comman .secN reused)
    ============================================================= -->
    @include('partials.page-faqs', [
      'title' => 'Frequently Asked Questions <span>About Meta Ads Management.</span>',
      'intro' => 'Straight answers to what most people ask before getting started.',
    ])

    <!-- ============================================================
         12 — FINAL CTA (comman .cta-promo reused)
    ============================================================= -->
    <div class="container">
      <div class="cta-promo">
        <div class="cta-promo__inner">
          <span class="cta-promo__eyebrow">READY TO REACH THE RIGHT AUDIENCE?</span>
          <h3 class="cta-promo__heading">
            Let's Turn Your Meta Ads Into a More Structured Growth Strategy.
          </h3>
          <p class="cta-promo__sub">
            Get a practical review of your current Meta advertising approach,
            campaign goals, creative direction, and opportunities for
            improvement.
          </p>
          <div class="cta-promo__actions">
            <button class="btn btn-white" data-model=".enquire-pop">
              Get a Free Meta Ads Audit <i>↗</i>
            </button>
            <a href="javascript:void(0)" class="btn btn-outline-white">Connect on WhatsApp <i>↗</i></a>
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