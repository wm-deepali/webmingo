@extends('layouts.app')

@push('styles')
    <link rel="stylesheet" href="assets/sass/digital-marketing/digital.css" />
@endpush

@section('content')
    <main>
      <!-- ============================================================
     01 — HERO (existing banner, content + image only)
============================================================= -->
      <section class="banner">
        <div class="bg">
          <video
            autoplay
            muted
            loop
            playsinline
            class="bg-video"
            src="assets/video/effect3.mp4"
            poster="assets/video/poster/effect3.png"
          >
            <source src="assets/video/effect3.mp4" type="video/mp4" />
          </video>
          <div class="container">
            <div class="banner-wrapper">
              <div class="content">
                <span class="eyebrow">DIGITAL MARKETING SERVICES</span>

                <h1>
                  Reach the Right Audience.<br />
                  Turn Attention Into Business Growth.
                </h1>

                <p>
                  We combine SEO, social media, Google Ads and Meta Ads to help
                  your business get discovered, reach potential customers and
                  generate measurable opportunities.
                </p>

                <div class="banner-actions">
                  <a href="javascript:void(0)" class="btn btn-outline-white">
                    Chat on WhatsApp
                    <i>↗</i>
                  </a>

                  <button data-model=".enquire-pop" class="btn btn-white">
                    Get a Free Consultation
                    <i>↗</i>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- ============================================================
     02 — INTRODUCTION
============================================================= -->
      <section class="dmIntro">
        <div class="container">
          <div class="dmIntro-layout">
            <!-- LEFT -->
            <div class="heading">
              <span class="eyebrow">
                <span class="eyebrow-line"></span>
                DIGITAL MARKETING STRATEGY
              </span>

              <h2>
                One Team. Every Channel.
                <span>One Goal: Measurable ROI.</span>
              </h2>

              <p class="dmIntro-lead">
                Your customers are searching, scrolling and comparing every day.
                Digital marketing helps your business show up at the right
                moment, reach the right audience and turn attention into action.
              </p>

              <div class="dmIntro-highlight">
                <span class="dmIntro-highlight-icon">
                  <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                    <path
                      d="M4 18V6M4 18h16"
                      stroke="currentColor"
                      stroke-width="1.5"
                      stroke-linecap="round"
                    />
                    <path
                      d="m7 15 4-4 3 2 5-7"
                      stroke="currentColor"
                      stroke-width="1.5"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                    />
                  </svg>
                </span>

                <div>
                  <strong>Marketing That Moves The Business Forward.</strong>
                  <p>
                    Every campaign, channel and decision is connected to a
                    measurable business outcome.
                  </p>
                </div>
              </div>
            </div>

            <!-- RIGHT -->
            <div class="dmIntro-right">
              <div class="dmIntro-grid">
                <div class="dmIntro-card">
                  <span class="dmIntro-card-icon">
                    <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                      <circle
                        cx="11"
                        cy="11"
                        r="6"
                        stroke="currentColor"
                        stroke-width="1.6"
                      />
                      <path
                        d="m16 16 4 4"
                        stroke="currentColor"
                        stroke-width="1.6"
                        stroke-linecap="round"
                      />
                    </svg>
                  </span>

                  <span class="dmIntro-card-label">01</span>

                  <h4>Get Found</h4>

                  <p>
                    Reach people actively looking for your products or services.
                  </p>
                </div>

                <div class="dmIntro-card">
                  <span class="dmIntro-card-icon">
                    <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                      <path
                        d="M5 5h14v14H5z"
                        stroke="currentColor"
                        stroke-width="1.6"
                        stroke-linejoin="round"
                      />
                      <path
                        d="m8 12 2.5 2.5L16 9"
                        stroke="currentColor"
                        stroke-width="1.6"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                      />
                    </svg>
                  </span>

                  <span class="dmIntro-card-label">02</span>

                  <h4>Build Trust</h4>

                  <p>
                    Give your audience a reason to notice, engage and remember
                    you.
                  </p>
                </div>

                <div class="dmIntro-card">
                  <span class="dmIntro-card-icon">
                    <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                      <path
                        d="M5 12h14"
                        stroke="currentColor"
                        stroke-width="1.6"
                        stroke-linecap="round"
                      />
                      <path
                        d="m13 6 6 6-6 6"
                        stroke="currentColor"
                        stroke-width="1.6"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                      />
                    </svg>
                  </span>

                  <span class="dmIntro-card-label">03</span>

                  <h4>Drive Action</h4>

                  <p>
                    Turn interest into enquiries, calls, bookings and sales.
                  </p>
                </div>

                <div class="dmIntro-card dmIntro-card--featured">
                  <span class="dmIntro-card-icon">
                    <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                      <path
                        d="M5 19V9M12 19V5M19 19V2"
                        stroke="currentColor"
                        stroke-width="1.6"
                        stroke-linecap="round"
                      />
                      <path
                        d="M3 19h18"
                        stroke="currentColor"
                        stroke-width="1.6"
                        stroke-linecap="round"
                      />
                    </svg>
                  </span>

                  <span class="dmIntro-card-label">04</span>

                  <h4>Measure Growth</h4>

                  <p>
                    Track performance, learn what works and improve
                    continuously.
                  </p>

                  <span class="dmIntro-card-arrow"> ↗ </span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="mfgTypes">
        <div class="container">
          <div class="heading">
            <span class="eyebrow">
              <span class="eyebrow-line"></span>
              OUR DIGITAL MARKETING SERVICES
            </span>

            <h3>
              Digital Marketing That
              <span>Drives Growth.</span>
            </h3>

            <p>
              Focused strategies to increase visibility, reach and conversions.
            </p>
          </div>

          <div class="mfgTypes-grid">
            <!-- SEARCH ENGINE OPTIMIZATION -->
            <a
              href="search-engine-optimisation.html"
              class="mfgTypes-card mfgTypes-card--featured"
            >
              <img
                src="assets/images/umbrella/marketing2.png"
                alt="Search Engine Optimization"
                loading="lazy"
              />

              <div class="mfgTypes-overlay"></div>

              <div class="mfgTypes-content">
                <h4>Search Engine Optimization</h4>

                <p>Improve visibility and attract organic traffic.</p>

                <div class="mfgTypes-meta">
                  <div class="mfgTypes-price">
                    <small>Starts From</small>
                    <strong>₹8,000<span>/month</span></strong>
                  </div>

                  <span class="btn btn-outline-white">
                    Learn More
                    <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                      <path
                        d="M5 12h14"
                        stroke="currentColor"
                        stroke-width="1.5"
                        stroke-linecap="round"
                      />
                      <path
                        d="m13 6 6 6-6 6"
                        stroke="currentColor"
                        stroke-width="1.5"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                      />
                    </svg>
                  </span>
                </div>
              </div>
            </a>

            <!-- SOCIAL MEDIA MARKETING -->
            <a
              href="social-media-marketing.html"
              class="mfgTypes-card mfgTypes-card--medium"
            >
              <img
                src="assets/images/umbrella/marketing3.png"
                alt="Social Media Marketing"
                loading="lazy"
              />

              <div class="mfgTypes-overlay"></div>

              <div class="mfgTypes-content">
                <h4>Social Media Marketing</h4>

                <p>Build your presence and engage your audience.</p>

                <div class="mfgTypes-meta">
                  <div class="mfgTypes-price">
                    <small>Starts From</small>
                    <strong>₹12,000<span>/month</span></strong>
                  </div>

                  <span class="btn btn-outline-white">
                    Learn More
                    <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                      <path
                        d="M5 12h14"
                        stroke="currentColor"
                        stroke-width="1.5"
                        stroke-linecap="round"
                      />
                      <path
                        d="m13 6 6 6-6 6"
                        stroke="currentColor"
                        stroke-width="1.5"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                      />
                    </svg>
                  </span>
                </div>
              </div>
            </a>

            <!-- GOOGLE ADWORDS -->
            <a
              href="google-ads-management.html"
              class="mfgTypes-card mfgTypes-card--medium"
            >
              <img
                src="assets/images/umbrella/marketing4.png"
                alt="Google AdWords"
                loading="lazy"
              />

              <div class="mfgTypes-overlay"></div>

              <div class="mfgTypes-content">
                <h4>Google AdWords</h4>

                <p>Reach people actively searching for your services.</p>

                <div class="mfgTypes-meta">
                  <div class="mfgTypes-price">
                    <small>Starts From</small>
                    <strong>₹10,000<span>/month</span></strong>
                  </div>

                  <span class="btn btn-outline-white">
                    Learn More
                    <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                      <path
                        d="M5 12h14"
                        stroke="currentColor"
                        stroke-width="1.5"
                        stroke-linecap="round"
                      />
                      <path
                        d="m13 6 6 6-6 6"
                        stroke="currentColor"
                        stroke-width="1.5"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                      />
                    </svg>
                  </span>
                </div>
              </div>
            </a>

            <!-- META ADS -->
            <a
              href="meta-ads-management.html"
              class="mfgTypes-card mfgTypes-card--medium"
            >
              <img
                src="assets/images/umbrella/marketing1.png"
                alt="Meta Ads"
                loading="lazy"
              />

              <div class="mfgTypes-overlay"></div>

              <div class="mfgTypes-content">
                <h4>Meta Advertising</h4>

                <p>Reach relevant audiences across Facebook and Instagram.</p>

                <div class="mfgTypes-meta">
                  <div class="mfgTypes-price">
                    <small>Starts From</small>
                    <strong>₹10,000<span>/month</span></strong>
                  </div>

                  <span class="btn btn-outline-white">
                    Learn More
                    <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                      <path
                        d="M5 12h14"
                        stroke="currentColor"
                        stroke-width="1.5"
                        stroke-linecap="round"
                      />
                      <path
                        d="m13 6 6 6-6 6"
                        stroke="currentColor"
                        stroke-width="1.5"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                      />
                    </svg>
                  </span>
                </div>
              </div>
            </a>

            <!-- CTA -->
            <div class="mfgTypes-card mfgTypes-card--cta">
              <div class="mfgTypes-cta-content">
                <span>NEED A DIGITAL STRATEGY?</span>

                <h4>
                  Let’s Build Your <br />
                  Growth Strategy.
                </h4>

                <p>Let’s plan the right strategy for your business.</p>
              </div>

              <a
                href="javascript:void(0)"
                class="btn btn-black"
                data-model=".enquire-pop"
              >
                Let’s Talk

                <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                  <path
                    d="M5 12h14"
                    stroke="currentColor"
                    stroke-width="1.5"
                    stroke-linecap="round"
                  />
                  <path
                    d="m13 6 6 6-6 6"
                    stroke="currentColor"
                    stroke-width="1.5"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  />
                </svg>
              </a>
            </div>
          </div>
        </div>
      </section>

      <section class="webApproach" id="marketing-process">
        <div class="container">
          <div class="heading">
            <span class="eyebrow">
              <span class="eyebrow-line"></span>
              OUR APPROACH
            </span>
            <h3>
              Full-Funnel Marketing.<br />
              <span>Data-Driven Decisions.</span>
            </h3>

            <p>
              Connect every stage of the journey and make every marketing budget
              work harder.
            </p>
          </div>

          <div class="webApproach-list">
            <div class="webApproach-step">
              <div class="webApproach-icon">
                <svg viewBox="0 0 24 24" fill="none">
                  <circle cx="11" cy="11" r="6.5"></circle>
                  <path d="M16 16L21 21"></path>
                  <path d="M8.5 11H13.5"></path>
                  <path d="M11 8.5V13.5"></path>
                </svg>
              </div>
              <div class="webApproach-main">
                <h4>Understand</h4>
                <p>
                  We start with your business goals, audience, market,
                  competitors and current digital presence.
                </p>
              </div>
              <div class="webApproach-output">
                <span>YOU GET</span>
                <strong>A clear marketing brief</strong>
              </div>
            </div>

            <div class="webApproach-step">
              <div class="webApproach-icon">
                <svg viewBox="0 0 24 24" fill="none">
                  <rect x="4" y="4" width="16" height="16" rx="2"></rect>
                  <path d="M8 9H16"></path>
                  <path d="M8 13H13"></path>
                  <path d="M8 17H11"></path>
                </svg>
              </div>
              <div class="webApproach-main">
                <h4>Plan</h4>
                <p>
                  We identify the right channels, audiences, campaigns and
                  conversion paths based on what you want to achieve.
                </p>
              </div>
              <div class="webApproach-output">
                <span>YOU GET</span>
                <strong>Channel &amp; campaign plan</strong>
              </div>
            </div>

            <div class="webApproach-step">
              <div class="webApproach-icon">
                <svg viewBox="0 0 24 24" fill="none">
                  <path d="M4 20L20 12L4 4V10L14 12L4 14V20Z"></path>
                </svg>
              </div>
              <div class="webApproach-main">
                <h4>Launch</h4>
                <p>
                  We execute campaigns and marketing activities with clear
                  objectives, focused messaging and defined success metrics.
                </p>
              </div>
              <div class="webApproach-output">
                <span>YOU GET</span>
                <strong>Live, tracked campaigns</strong>
              </div>
            </div>

            <div class="webApproach-step">
              <div class="webApproach-icon">
                <svg viewBox="0 0 24 24" fill="none">
                  <path d="M4 20H20"></path>
                  <rect x="6" y="11" width="3" height="9"></rect>
                  <rect x="11" y="6" width="3" height="14"></rect>
                  <rect x="16" y="13" width="3" height="7"></rect>
                </svg>
              </div>
              <div class="webApproach-main">
                <h4>Measure</h4>
                <p>
                  We monitor visibility, traffic, engagement, leads, conversions
                  and campaign performance.
                </p>
              </div>
              <div class="webApproach-output">
                <span>YOU GET</span>
                <strong>Clear performance reporting</strong>
              </div>
            </div>

            <div class="webApproach-step webApproach-step--final">
              <div class="webApproach-icon">
                <svg viewBox="0 0 24 24" fill="none">
                  <path d="M4 7H14"></path>
                  <path d="M18 7H20"></path>
                  <path d="M4 17H6"></path>
                  <path d="M10 17H20"></path>
                  <circle cx="16" cy="7" r="2"></circle>
                  <circle cx="8" cy="17" r="2"></circle>
                </svg>
              </div>
              <div class="webApproach-main">
                <h4>Optimize</h4>
                <p>
                  We use performance insights to refine targeting, creative,
                  messaging, campaigns and budget allocation.
                </p>
              </div>
              <div class="webApproach-output">
                <span>YOU GET</span>
                <strong>Ongoing improvements</strong>
              </div>
            </div>
          </div>

          <div class="webApproach-cta">
            <button
              type="button"
              data-model=".enquire-pop"
              class="btn btn-black"
            >
              Get Your Free Marketing Audit
              <i>↗</i>
            </button>
          </div>
        </div>
      </section>

      <section class="ecomPackage">
        <div class="container">
          <div class="ecomPackage-inner">
            <!-- LEFT: HEADING CONTENT -->
            <div class="ecomPackage-content">
              <span class="ecomPackage-label">
                READY TO GROW YOUR BUSINESS
              </span>

              <h3>
                Everything You Need To
                <span>Build A Stronger Digital Presence.</span>
              </h3>

              <p class="ecomPackage-intro">
                We build digital marketing strategies around your business,
                audience, goals and growth targets—from search and paid
                campaigns to social media, content and conversion-focused
                marketing.
              </p>
            </div>

            <!-- RIGHT: SHORT REQUIREMENT FORM -->
            <div class="ecomPackage-form">
              <form>
                <div class="ecomPackage-form-group">
                  <label for="packageName">Full Name</label>
                  <input
                    type="text"
                    id="packageName"
                    name="name"
                    placeholder="Enter your full name"
                  />
                </div>

                <div class="ecomPackage-form-group">
                  <label for="packageMobile">Mobile Number</label>
                  <input
                    type="tel"
                    id="packageMobile"
                    name="mobile"
                    placeholder="Enter your mobile number"
                  />
                </div>

                <div class="ecomPackage-form-group">
                  <label for="packageBusiness">Marketing Service</label>

                  <select id="packageBusiness" name="business_type">
                    <option value="" selected disabled>
                      Select your marketing service
                    </option>
                    <option value="seo">SEO</option>
                    <option value="google-ads">Google Ads</option>
                    <option value="social-media">Social Media Marketing</option>
                    <option value="content-marketing">Content Marketing</option>
                    <option value="performance-marketing">
                      Performance Marketing
                    </option>
                    <option value="email-marketing">Email Marketing</option>
                    <option value="complete-digital-marketing">
                      Complete Digital Marketing
                    </option>
                    <option value="other">Other</option>
                  </select>
                </div>

                <div class="ecomPackage-form-action">
                  <button type="submit" class="btn btn-primary">
                    Tell Us Your Requirements <i>↗</i>
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
     — BUSINESS GROWTH THROUGH DIGITAL MARKETING
============================================================= -->
      <section class="mfgGrowth">
        <div class="container">
          <div class="heading">
            <span class="eyebrow">
              <span class="eyebrow-line"></span>
              BUSINESS GROWTH THROUGH DIGITAL MARKETING
            </span>

            <h3>
              Digital Marketing Built To
              <span>Move Your Business Forward.</span>
            </h3>

            <p>
              Build visibility, attract the right audience and turn digital
              activity into measurable business opportunities.
            </p>
          </div>

          <div class="mfgGrowth-flow">
            <!-- STEP 01 -->
            <div class="mfgGrowth-item">
              <div class="mfgGrowth-icon">
                <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                  <path
                    d="M4 18V9"
                    stroke="currentColor"
                    stroke-width="1.6"
                    stroke-linecap="round"
                  />
                  <path
                    d="M10 18V5"
                    stroke="currentColor"
                    stroke-width="1.6"
                    stroke-linecap="round"
                  />
                  <path
                    d="M16 18v-7"
                    stroke="currentColor"
                    stroke-width="1.6"
                    stroke-linecap="round"
                  />
                  <path
                    d="M3 20h18"
                    stroke="currentColor"
                    stroke-width="1.6"
                    stroke-linecap="round"
                  />
                </svg>
              </div>

              <div class="mfgGrowth-content">
                <span>VISIBILITY</span>

                <h4>
                  Get
                  <strong>Discovered.</strong>
                </h4>

                <p>
                  Put your business where potential customers are already
                  looking.
                </p>
              </div>
            </div>

            <!-- STEP 02 -->
            <div class="mfgGrowth-item">
              <div class="mfgGrowth-icon">
                <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                  <circle
                    cx="11"
                    cy="11"
                    r="6.5"
                    stroke="currentColor"
                    stroke-width="1.6"
                  />
                  <path
                    d="m16 16 4 4"
                    stroke="currentColor"
                    stroke-width="1.6"
                    stroke-linecap="round"
                  />
                  <path
                    d="M8.5 11h5"
                    stroke="currentColor"
                    stroke-width="1.6"
                    stroke-linecap="round"
                  />
                  <path
                    d="M11 8.5v5"
                    stroke="currentColor"
                    stroke-width="1.6"
                    stroke-linecap="round"
                  />
                </svg>
              </div>

              <div class="mfgGrowth-content">
                <span> REACH</span>

                <h4>
                  Reach The
                  <strong>Right People.</strong>
                </h4>

                <p>
                  Connect your brand with audiences that matter to your
                  business.
                </p>
              </div>
            </div>

            <!-- STEP 03 -->
            <div class="mfgGrowth-item">
              <div class="mfgGrowth-icon">
                <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                  <path
                    d="M5 18 10 13l3 3 6-7"
                    stroke="currentColor"
                    stroke-width="1.6"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  />
                  <path
                    d="M15 9h4v4"
                    stroke="currentColor"
                    stroke-width="1.6"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  />
                </svg>
              </div>

              <div class="mfgGrowth-content">
                <span> CONVERSION</span>

                <h4>
                  Turn Reach Into
                  <strong>Enquiries.</strong>
                </h4>

                <p>
                  Turn attention into relevant leads and genuine business
                  opportunities.
                </p>
              </div>
            </div>

            <!-- STEP 04 -->
            <div class="mfgGrowth-item mfgGrowth-item--active">
              <div class="mfgGrowth-icon">
                <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                  <path
                    d="M4 17 10 11l4 4 6-8"
                    stroke="currentColor"
                    stroke-width="1.6"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  />
                  <path
                    d="M15 7h5v5"
                    stroke="currentColor"
                    stroke-width="1.6"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  />
                </svg>
              </div>

              <div class="mfgGrowth-content">
                <span> GROWTH</span>

                <h4>
                  Build
                  <strong>Momentum.</strong>
                </h4>

                <p>
                  Keep improving campaigns and turn consistent performance into
                  growth.
                </p>
              </div>
            </div>
          </div>

          <div class="mfgGrowth-bottom">
            <p>
              From visibility to growth — every digital activity has a purpose.
            </p>

            <a
              href="javascript:void(0)"
              class="btn btn-outline-black"
              data-model=".enquire-pop"
            >
              Build My Strategy

              <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                <path
                  d="M5 12h14"
                  stroke="currentColor"
                  stroke-width="1.5"
                  stroke-linecap="round"
                />
                <path
                  d="m13 6 6 6-6 6"
                  stroke="currentColor"
                  stroke-width="1.5"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                />
              </svg>
            </a>
          </div>
        </div>
      </section>

      <!-- ============================================================
     07 — WHY WEB MINGO (existing .secL, 4 points)
============================================================= -->
      <section class="secL">
        <div class="container">
          <div class="heading">
            <span class="eyebrow">
              <span class="eyebrow-line"></span>
              WHY WEB MINGO
            </span>
            <h3>
              More Than Campaigns. <br /><span
                >A Strategy Built Around Your Business.</span
              >
            </h3>

            <p>
              We connect search, social, paid campaigns and your website to
              support your business goals.
            </p>
          </div>

          <ul class="secL-list">
            <li>
              <span class="secL-icon">
                <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                  <circle
                    cx="12"
                    cy="12"
                    r="8"
                    stroke="currentColor"
                    stroke-width="1.5"
                  />
                  <circle
                    cx="12"
                    cy="12"
                    r="4"
                    stroke="currentColor"
                    stroke-width="1.5"
                  />
                  <circle
                    cx="12"
                    cy="12"
                    r="1"
                    stroke="currentColor"
                    stroke-width="1.5"
                  />
                </svg>
              </span>
              <div>
                <h4>Strategy Before Spend</h4>
                <p>
                  We start with business objectives and audience understanding
                  before deciding where your marketing budget should go.
                </p>
              </div>
            </li>

            <li>
              <span class="secL-icon">
                <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                  <circle
                    cx="6"
                    cy="12"
                    r="3"
                    stroke="currentColor"
                    stroke-width="1.5"
                  />
                  <circle
                    cx="18"
                    cy="6"
                    r="3"
                    stroke="currentColor"
                    stroke-width="1.5"
                  />
                  <circle
                    cx="18"
                    cy="18"
                    r="3"
                    stroke="currentColor"
                    stroke-width="1.5"
                  />
                  <path
                    d="M8.7 10.6L15.3 7.4M8.7 13.4L15.3 16.6"
                    stroke="currentColor"
                    stroke-width="1.5"
                    stroke-linecap="round"
                  />
                </svg>
              </span>
              <div>
                <h4>Connected Channels, One Team</h4>
                <p>
                  SEO, social media and paid campaigns work together, with
                  strategy, creative and website considerations kept aligned.
                </p>
              </div>
            </li>

            <li>
              <span class="secL-icon">
                <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                  <path
                    d="M4 20h16"
                    stroke="currentColor"
                    stroke-width="1.5"
                    stroke-linecap="round"
                  />
                  <rect
                    x="6"
                    y="11"
                    width="3"
                    height="9"
                    stroke="currentColor"
                    stroke-width="1.5"
                  />
                  <rect
                    x="11"
                    y="6"
                    width="3"
                    height="14"
                    stroke="currentColor"
                    stroke-width="1.5"
                  />
                  <rect
                    x="16"
                    y="13"
                    width="3"
                    height="7"
                    stroke="currentColor"
                    stroke-width="1.5"
                  />
                </svg>
              </span>
              <div>
                <h4>Clear Performance Tracking</h4>
                <p>
                  Understand what is being measured, what is changing and where
                  opportunities exist.
                </p>
              </div>
            </li>

            <li>
              <span class="secL-icon">
                <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                  <path
                    d="M4 12a8 8 0 0114-5M20 12a8 8 0 01-14 5"
                    stroke="currentColor"
                    stroke-width="1.5"
                    stroke-linecap="round"
                  />
                  <path
                    d="M18 4v4h-4M6 20v-4h4"
                    stroke="currentColor"
                    stroke-width="1.5"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  />
                </svg>
              </span>
              <div>
                <h4>Continuous Optimization</h4>
                <p>
                  Strategies evolve with campaign data, audience behaviour and
                  business priorities.
                </p>
              </div>
            </li>
          </ul>

          <div class="cntr">
            <button
              type="button"
              data-model=".enquire-pop"
              class="btn btn-outline-black"
            >
              Get Your Free Marketing Audit
              <i>↗</i>
            </button>
          </div>
        </div>
      </section>

      <!-- ============================================================
     09 — FINAL CTA (existing .cta-promo)
============================================================= -->
      <div class="container">
        <div class="cta-promo">
          <div class="cta-promo__inner">
            <span class="cta-promo__eyebrow"
              >READY TO GROW YOUR DIGITAL PRESENCE?</span
            >
            <h3 class="cta-promo__heading">
              Get A Free Digital Marketing Audit.
            </h3>
            <p class="cta-promo__sub">
              Let's look at your current digital presence, identify
              opportunities and build a clearer path toward measurable marketing
              growth.
            </p>
            <div class="cta-promo__actions">
              <button class="btn btn-white" data-model=".enquire-pop">
                Get Your Free Audit <i>↗</i>
              </button>
              <a href="#marketing-results" class="btn btn-outline-white"
                >View Our Work <i>↗</i></a
              >
            </div>
          </div>
        </div>
      </div>

      <!-- ============================================================
     08 — FAQ (existing .secN)
============================================================= -->
      <section class="secN">
        <div class="container">
          <div class="heading">
            <span class="eyebrow"
              ><span class="eyebrow-line"></span>FREQUENTLY ASKED
              QUESTIONS</span
            >
            <h3>
              Which Digital Marketing Service <br /><span
                >Is Right For My Business?</span
              >
            </h3>
            <p>
              Straightforward answers to help you understand your options before
              you start.
            </p>
          </div>

          <div class="accordion-wrapper">
            <div class="accordion-item">
              <div class="accordion-header">
                <div class="faq-question">
                  <h4>
                    Which digital marketing service is right for my business?
                  </h4>
                </div>
                <span class="accordion-icon">+</span>
              </div>
              <div class="accordion-content">
                <p>
                  It depends on your goals, audience, industry and current
                  digital presence. We assess these factors to identify the
                  channels and services that align with your business
                  requirements.
                </p>
              </div>
            </div>

            <div class="accordion-item">
              <div class="accordion-header">
                <div class="faq-question">
                  <h4>
                    Can you manage multiple digital marketing services together?
                  </h4>
                </div>
                <span class="accordion-icon">+</span>
              </div>
              <div class="accordion-content">
                <p>
                  Yes. Services such as SEO, social media marketing, Google Ads
                  and Meta Ads can be combined into a connected strategy, with
                  each channel supporting a specific business objective.
                </p>
              </div>
            </div>

            <div class="accordion-item">
              <div class="accordion-header">
                <div class="faq-question">
                  <h4>How long does digital marketing take to show results?</h4>
                </div>
                <span class="accordion-icon">+</span>
              </div>
              <div class="accordion-content">
                <p>
                  Timelines vary by service, industry, competition, starting
                  position and goals. Paid campaigns can generate activity
                  quickly, while organic channels such as SEO generally require
                  more time to build consistent visibility.
                </p>
              </div>
            </div>

            <div class="accordion-item">
              <div class="accordion-header">
                <div class="faq-question">
                  <h4>
                    How do you decide where my marketing budget should go?
                  </h4>
                </div>
                <span class="accordion-icon">+</span>
              </div>
              <div class="accordion-content">
                <p>
                  We consider your business goals, target audience, competition,
                  existing performance and available channels before determining
                  where marketing effort and budget can be appropriately
                  focused.
                </p>
              </div>
            </div>

            <div class="accordion-item">
              <div class="accordion-header">
                <div class="faq-question">
                  <h4>How do you measure digital marketing performance?</h4>
                </div>
                <span class="accordion-icon">+</span>
              </div>
              <div class="accordion-content">
                <p>
                  We track metrics relevant to your objectives, including
                  visibility, website traffic, engagement, leads, conversions
                  and campaign efficiency, then use the data to guide ongoing
                  improvements.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>

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
              <a href="javascript:void(0)"
                ><span aria-hidden="true"
                  ><svg viewBox="0 0 24 24">
                    <rect x="3" y="3" width="18" height="18" rx="2" />
                    <path d="M3 9h18M9 21V9" /></svg></span
                ><em>E-Commerce</em></a
              >
            </li>
            <li>
              <a href="javascript:void(0)"
                ><span aria-hidden="true"
                  ><svg viewBox="0 0 24 24">
                    <path
                      d="M8 3L3 8l5 5M16 3l5 5-5 5M14 4l-4 16"
                    /></svg></span
                ><em>Web Apps</em></a
              >
            </li>
            <li>
              <a href="javascript:void(0)"
                ><span aria-hidden="true"
                  ><svg viewBox="0 0 24 24">
                    <rect x="7" y="2" width="10" height="20" rx="2" />
                    <path d="M11 18h2" /></svg></span
                ><em>Mobile Apps</em></a
              >
            </li>
            <li>
              <a href="javascript:void(0)"
                ><span aria-hidden="true"
                  ><svg viewBox="0 0 24 24">
                    <circle cx="11" cy="11" r="7" />
                    <path d="M21 21l-4.3-4.3" /></svg></span
                ><em>SEO</em></a
              >
            </li>
            <li>
              <a href="javascript:void(0)"
                ><span aria-hidden="true"
                  ><svg viewBox="0 0 24 24">
                    <path d="M3 3v18h18" />
                    <path d="M7 15l4-4 3 3 5-6" /></svg></span
                ><em>Marketing</em></a
              >
            </li>
            <li>
              <a href="javascript:void(0)"
                ><span aria-hidden="true"
                  ><svg viewBox="0 0 24 24">
                    <path d="M12 19l7-7 3 3-7 7-3-3z" />
                    <path
                      d="M18 13l-1.5-7.5L2 2l3.5 14.5L13 18l5-5z"
                    /></svg></span
                ><em>Portfolio</em></a
              >
            </li>
            <li>
              <a href="javascript:void(0)"
                ><span aria-hidden="true"
                  ><svg viewBox="0 0 24 24">
                    <circle cx="12" cy="8" r="4" />
                    <path d="M4 21c0-4 4-6 8-6s8 2 8 6" /></svg></span
                ><em>About Us</em></a
              >
            </li>
            <li>
              <a href="javascript:void(0)"
                ><span aria-hidden="true"
                  ><svg viewBox="0 0 24 24">
                    <path d="M4 4h16v16H4z" />
                    <path d="M4 6l8 7 8-7" /></svg></span
                ><em>Contact Us</em></a
              >
            </li>
          </ul>
        </div>
      </section>
    </main>
@endsection