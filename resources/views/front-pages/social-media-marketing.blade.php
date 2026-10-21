@extends('layouts.app')

@push('styles')
  <link rel="stylesheet" href="assets/sass/smm/smm.css" />
@endpush

@section('content')

  <main>
    <!-- ============================================================
             01 — BANNER (existing structure, content updated)
        ============================================================= -->

    @include('partials.hero', [
      'video' => 'assets/video/effect3.mp4',
      'poster' => 'assets/video/poster/effect3.png',
      'eyebrow' => 'SOCIAL MEDIA MARKETING',
      'heading' => 'Turn Social Media Into a Stronger Business Presence.',
      'description' => 'We plan, create and manage social content that keeps your brand visible, relevant and connected with the right audience.',
      'primary_text' => 'Chat on WhatsApp',
      'primary_url' => 'javascript:void(0)',
      'secondary_text' => 'Discuss Your Social Strategy',
      'secondary_url' => '#enquire',
    ])

    <!-- ============================================================
             02 — smmHero — HERO (NEW, editorial visual composition)
        ============================================================= -->
    <section class="smmHero">
      <div class="container">
        <div class="smmHero-layout">
          <div class="smmHero-content">
            <span class="eyebrow"><span class="eyebrow-line"></span>SOCIAL MEDIA MARKETING FOR
              GROWING BUSINESSES</span>

            <h2>
              Turn Social Media Attention Into Meaningful Business Growth.
            </h2>

            <p>
              Build a stronger digital presence with strategic content,
              creative campaigns, and social media marketing designed around
              your audience, goals, and business growth.
            </p>

            <div class="smmHero-actions">
              <button class="btn btn-primary" data-model=".enquire-pop">
                Get a Free Social Media Audit <i>↗</i>
              </button>
              <a href="#smm-approach" class="btn btn-outline-black">Explore Our Approach <i>↗</i></a>
            </div>
          </div>

          <div class="smmHero-visual">
            <div class="smmHero-main">
              <img src="assets/images/website/growth.avif" alt="Social media content planning and design preview" />
            </div>

            <div class="smmHero-secondary">
              <img src="assets/images/website/socialmedia.jpg" alt="Mobile social media feed preview" />
            </div>

            <div class="smmHero-callout smmHero-callout--engage">
              <span class="smmHero-callout-label">Engagement Focused</span>
              <strong>Content That's Actually Watched</strong>
            </div>

            <div class="smmHero-callout smmHero-callout--trend">
              <span class="smmHero-callout-label">Illustrative Trend</span>
              <svg viewBox="0 0 100 36">
                <polyline points="0,28 20,24 40,18 60,20 80,10 100,6" fill="none" stroke="currentColor" stroke-width="2.5"
                  stroke-linecap="round" stroke-linejoin="round" />
              </svg>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ============================================================
             03 — WHY STRATEGIC SOCIAL MEDIA MARKETING (.smmGrowth)
        ============================================================= -->
    <section class="smmGrowth">
      <div class="container">
        <div class="heading">
          <span class="eyebrow">
            <span class="eyebrow-line"></span>
            GROWTH SHOULD BE VISIBLE
          </span>

          <h3>
            Why Your Business Needs
            <span>Strategic Social Media Marketing</span>
          </h3>

          <p>
            Social media should do more than fill your feed. Every step should
            move your business closer to real customers and real growth.
          </p>
        </div>

        <ol class="smmGrowth-flow">
          <li class="smmGrowth-step">
            <div class="smmGrowth-arrow">
              <span class="smmGrowth-num">01</span>
              <span class="smmGrowth-stage">Awareness</span>
            </div>
            <div class="smmGrowth-body">
              <h4>Build Strong Brand Visibility</h4>
              <p>
                Get your brand noticed consistently across the right social
                platforms.
              </p>
            </div>
          </li>

          <li class="smmGrowth-step">
            <div class="smmGrowth-arrow">
              <span class="smmGrowth-num">02</span>
              <span class="smmGrowth-stage">Targeting</span>
            </div>
            <div class="smmGrowth-body">
              <h4>Reach Your Ideal Audience</h4>
              <p>
                Connect your brand with people who genuinely value your
                offerings.
              </p>
            </div>
          </li>

          <li class="smmGrowth-step">
            <div class="smmGrowth-arrow">
              <span class="smmGrowth-num">03</span>
              <span class="smmGrowth-stage">Interaction</span>
            </div>
            <div class="smmGrowth-body">
              <h4>Create Meaningful Engagement</h4>
              <p>
                Encourage conversations and interactions through relevant,
                engaging content.
              </p>
            </div>
          </li>

          <li class="smmGrowth-step">
            <div class="smmGrowth-arrow">
              <span class="smmGrowth-num">04</span>
              <span class="smmGrowth-stage">Conversion</span>
            </div>
            <div class="smmGrowth-body">
              <h4>Generate Quality Enquiries</h4>
              <p>
                Turn social media attention into genuine leads and business
                opportunities.
              </p>
            </div>
          </li>

          <li class="smmGrowth-step smmGrowth-step-last">
            <div class="smmGrowth-arrow">
              <span class="smmGrowth-num">05</span>
              <span class="smmGrowth-stage">Loyalty</span>
            </div>
            <div class="smmGrowth-body">
              <h4>Build Lasting Relationships</h4>
              <p>
                Keep customers connected, engaged and interested in your brand
                over time.
              </p>
            </div>
          </li>
        </ol>

        <div class="smmGrowth-cta">
          <p>
            We connect your content, audience and campaigns to<br />
            <strong>the goals that matter to your business.</strong>
          </p>
          <a href="javascript:void(0)" class="btn btn-outline-black" data-model=".enquire-pop">
            Let's Talk Strategy <i>↗</i>
          </a>
        </div>
      </div>
    </section>

    <!-- ============================================================
             04 — smmPlatforms — PLATFORMS WE MANAGE (NEW)
        ============================================================= -->
    <section class="smmPlatforms">
      <div class="container">
        <div class="heading">
          <h3>
            Platforms We Manage. One Team,
            <span> Every Platform That Matters.</span>
          </h3>
        </div>

        <ul class="smmPlatforms-row">
          <li>
            <span class="smmPlatforms-icon">
              <img src="assets/icon/instagram.png" />
            </span>
            <h4>Instagram</h4>
            <p>Visual storytelling, Reels & community discovery.</p>
          </li>
          <li>
            <span class="smmPlatforms-icon">
              <img src="assets/icon/facebook.png" />
            </span>
            <h4>Facebook</h4>
            <p>Community engagement and targeted ad support.</p>
          </li>
          <li>
            <span class="smmPlatforms-icon">
              <img src="assets/icon/linkedin.png" />
            </span>
            <h4>LinkedIn</h4>
            <p>B2B visibility and professional audience content.</p>
          </li>
          <li>
            <span class="smmPlatforms-icon">
              <img src="assets/icon/youtube.png" />
            </span>
            <h4>YouTube</h4>
            <p>Long-form and Shorts content for deeper reach.</p>
          </li>
          <li>
            <span class="smmPlatforms-icon">
              <img src="assets/icon/pinterest.png" />
            </span>
            <h4>Pinterest</h4>
            <p>Discovery-led traffic for visual, product-led brands.</p>
          </li>
        </ul>
      </div>
    </section>

    <section class="smmIncludes">
      <div class="container">
        <div class="heading smmIncludes-heading">
          <span class="eyebrow">
            <span class="eyebrow-line"></span>
            WHAT YOU GET
          </span>

          <h3>
            Everything Your Brand Needs
            <span>To Build a Stronger Social Presence.</span>
          </h3>

          <p>
            A structured social media service that brings strategy, creative
            content, audience engagement and measurable growth into one
            consistent system.
          </p>
        </div>

        <div class="smmIncludes-layout">
          <div class="smmIncludes-media">
            <div class="smmIncludes-media__image">
              <img src="assets/images/website/social_media.png" alt="Social media content planning" />
            </div>

            <div class="smmIncludes-media__caption">
              <span>01 / SOCIAL SYSTEM</span>
              <strong>Planned. Created. Managed.</strong>
            </div>

            <div class="smmIncludes-media__badge">
              <span>✳</span>
              <p>Built around<br />your business goals.</p>
            </div>
          </div>

          <div class="smmIncludes-content">
            <div class="smmIncludes-content__top">
              <span>OUR DELIVERABLES</span>
              <p>Clear work. Consistent execution.</p>
            </div>

            <ul class="smmIncludes-list">
              <li>
                <span class="smmIncludes-num">01</span>
                <div>
                  <h4>Content Strategy & Calendar</h4>
                  <p>
                    A planned publishing schedule built around your brand and
                    goals.
                  </p>
                </div>
                <span class="smmIncludes-arrow">↗</span>
              </li>

              <li>
                <span class="smmIncludes-num">02</span>
                <div>
                  <h4>Creative Design — Posts & Reels</h4>
                  <p>
                    On-brand static designs and short-form video concepts.
                  </p>
                </div>
                <span class="smmIncludes-arrow">↗</span>
              </li>

              <li>
                <span class="smmIncludes-num">03</span>
                <div>
                  <h4>Copywriting</h4>
                  <p>
                    Captions and messaging written in a voice that sounds like
                    you.
                  </p>
                </div>
                <span class="smmIncludes-arrow">↗</span>
              </li>

              <li>
                <span class="smmIncludes-num">04</span>
                <div>
                  <h4>Community Management</h4>
                  <p>
                    Timely replies to comments and messages that build trust.
                  </p>
                </div>
                <span class="smmIncludes-arrow">↗</span>
              </li>

              <li>
                <span class="smmIncludes-num">05</span>
                <div>
                  <h4>Paid Promotion Support</h4>
                  <p>
                    Targeted boosting on top-performing content to extend
                    reach.
                  </p>
                </div>
                <span class="smmIncludes-arrow">↗</span>
              </li>

              <li>
                <span class="smmIncludes-num">06</span>
                <div>
                  <h4>Monthly Analytics Report</h4>
                  <p>
                    A clear look at what's working and where to improve next.
                  </p>
                </div>
                <span class="smmIncludes-arrow">↗</span>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <!-- ============================================================
             SOCIAL MEDIA MARKETING — PLANS + CUSTOM REQUIREMENTS FORM
        ============================================================= -->
    <section class="ecomPackage">
      <div class="container">
        <div class="ecomPackage-inner">
          <!-- LEFT — CONTENT -->
          <div class="ecomPackage-content">
            <span class="ecomPackage-label">SOCIAL MEDIA MARKETING</span>

            <h3>
              Build a Strong &amp; Consistent
              <span>Social Media Presence.</span>
            </h3>

            <p class="ecomPackage-intro">
              Professional social media management to keep your brand active,
              engaging, and visible across the platforms that matter to your
              business.
            </p>

            <div class="ecomPackage-plans">
              <!-- PLAN 1 — STARTER -->
              <div class="ecomPackage-package ecomPackage-plan">
                <div class="ecomPackage-plan-head">
                  <h4>Social Media Starter</h4>
                  <div class="ecomPackage-plan-price">
                    <strong>₹7,999/-</strong>
                    <span>/ Month</span>
                  </div>
                </div>

                <!-- first 3 always visible -->
                <div class="ecomPackage-package-list ecomPackage-package-list--top">
                  <div class="ecomPackage-package-item">
                    <i>✓</i><span>Social Media Strategy &amp; Content Planning</span>
                  </div>
                  <div class="ecomPackage-package-item">
                    <i>✓</i><span>Management of Up to 2 Platforms</span>
                  </div>
                  <div class="ecomPackage-package-item">
                    <i>✓</i><span>15-18 Social Media Posts / Month</span>
                  </div>
                </div>

                <!-- hidden, opens with toggle -->
                <div class="ecomPackage-more">
                  <div class="ecomPackage-package-list ecomPackage-package-list--more">
                    <div class="ecomPackage-package-item">
                      <i>✓</i><span>Creative Post Designs</span>
                    </div>
                    <div class="ecomPackage-package-item">
                      <i>✓</i><span>Captions &amp; Hashtag Research</span>
                    </div>
                    <div class="ecomPackage-package-item">
                      <i>✓</i><span>Content Scheduling &amp; Publishing</span>
                    </div>
                    <div class="ecomPackage-package-item">
                      <i>✓</i><span>Basic Page/Profile Optimization</span>
                    </div>
                    <div class="ecomPackage-package-item">
                      <i>✓</i><span>Monthly Performance Report</span>
                    </div>
                  </div>
                </div>

                <!-- toggle must come right after .ecomPackage-more -->
                <button class="ecomPackage-toggle" role="button" tabindex="0" aria-expanded="false">
                  <span class="ecomPackage-toggle-text">View all</span>
                  <i></i>
                </button>

                <div class="ecomPackage-plan-cta">
                  <button type="button" class="btn btn-outline-primary" data-model=".enquire-pop">
                    View Starter Plan <i>↗</i>
                  </button>
                </div>
              </div>

              <!-- PLAN 2 — GROWTH -->
              <div class="ecomPackage-package ecomPackage-plan">
                <div class="ecomPackage-plan-head">
                  <h4>Social Media Growth</h4>
                  <div class="ecomPackage-plan-price">
                    <strong>₹14,999/-</strong>
                    <span>/ Month</span>
                  </div>
                </div>

                <div class="ecomPackage-package-list ecomPackage-package-list--top">
                  <div class="ecomPackage-package-item">
                    <i>✓</i><span>Social Media Strategy &amp; Monthly Content
                      Planning</span>
                  </div>
                  <div class="ecomPackage-package-item">
                    <i>✓</i><span>Management of Up to 4 Platforms</span>
                  </div>
                  <div class="ecomPackage-package-item">
                    <i>✓</i><span>Up to 26 Social Media Posts / Month</span>
                  </div>
                </div>

                <div class="ecomPackage-more">
                  <div class="ecomPackage-package-list ecomPackage-package-list--more">
                    <div class="ecomPackage-package-item">
                      <i>✓</i><span>Professional Creative Designs</span>
                    </div>
                    <div class="ecomPackage-package-item">
                      <i>✓</i><span>Captions &amp; Hashtag Research</span>
                    </div>
                    <div class="ecomPackage-package-item">
                      <i>✓</i><span>Content Scheduling &amp; Publishing</span>
                    </div>
                    <div class="ecomPackage-package-item">
                      <i>✓</i><span>Page/Profile Optimization</span>
                    </div>
                    <div class="ecomPackage-package-item">
                      <i>✓</i><span>Content Performance Monitoring</span>
                    </div>
                    <div class="ecomPackage-package-item">
                      <i>✓</i><span>Monthly Performance Report</span>
                    </div>
                    <div class="ecomPackage-package-item">
                      <i>✓</i><span>Monthly Content Strategy Review</span>
                    </div>
                  </div>
                </div>

                <!-- toggle must come right after .ecomPackage-more -->
                <button class="ecomPackage-toggle" role="button" tabindex="0" aria-expanded="false">
                  <span class="ecomPackage-toggle-text">View all</span>
                  <i></i>
                </button>

                <div class="ecomPackage-plan-cta">
                  <button type="button" class="btn btn-primary" data-model=".enquire-pop">
                    View Growth Plan <i>↗</i>
                  </button>
                </div>
              </div>
            </div>

            <!-- CALLBACK OFFER -->
            <div class="ecomPackage-dynamic">
              <div class="ecomPackage-dynamic-text">
                <h5>Want More Social Media Coverage?</h5>
                <p>
                  Discuss your requirements with one of our Social Media
                  Experts and get a plan tailored to your business, including
                  more content and additional social media platforms.
                </p>
              </div>

              <div class="ecomPackage-dynamic-action">
                <span class="ecomPackage-dynamic-ask">Want to Discuss?</span>
                <button type="button" class="btn btn-black" data-model=".enquire-pop">
                  Get a Callback
                  <i>↗</i>
                </button>
              </div>
            </div>
          </div>

          <!-- RIGHT — CUSTOM REQUIREMENTS FORM -->
          <div class="ecomPackage-form">
            <div class="ecomPackage-form-head">
              <span class="ecomPackage-form-label">HAVE CUSTOM SOCIAL MEDIA REQUIREMENTS?</span>
              <h4>Tell Us Your <br /><span>Social Media Goals.</span></h4>
              <p>
                Need help with content, creatives, social media management or
                a complete social media strategy? Tell us what you need.
              </p>
            </div>

            @include('partials.package-form-fields', [
              'fieldLabel' => 'Business Type',
              'placeholder' => 'Select your business type',
              'submitText' => 'Tell Us Your Social Media Requirements',
              'submitClass' => 'btn-black',
              'options' => [
                'corporate' => 'Corporate',
                'small-business' => 'Small Business',
                'professional-services' => 'Professional Services',
                'ecommerce' => 'E-Commerce',
                'startup' => 'Startup',
                'local-business' => 'Local Business',
                'other' => 'Other Business',
              ],
            ])
          </div>
        </div>
      </div>
    </section>

    <!-- ============================================================
             06 — secG — OUR APPROACH (SMM)
        ============================================================= -->
    <section class="secG" id="smm-approach">
      <div class="container">
        <div class="heading">
          <span class="eyebrow">
            <span class="eyebrow-line"></span>
            HOW WE WORK
          </span>

          <h3>
            Our Approach
            <span>Strategy Drives Content.</span>
          </h3>

          <p>
            We don't post first and think later, every step exists for a
            reason.
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
              <span class="secG-kicker">AUDIENCE RESEARCH</span>
              <h4>Know Who You Are Talking To</h4>
              <p>
                We start by understanding your audience, market, competitors
                and business objectives so every post is built on real
                insight.
              </p>

              <div class="secG-details">
                <span>Audience</span>
                <span>Market</span>
                <span>Goals</span>
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
              <span class="secG-kicker">CONTENT PLANNING</span>
              <h4>Plan Before You Post</h4>
              <p>
                We create a strategic content direction and a publishing
                calendar so your social presence stays consistent and
                purposeful.
              </p>

              <div class="secG-details">
                <span>Calendar</span>
                <span>Pillars</span>
                <span>Themes</span>
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
              <span class="secG-kicker">CONTENT CREATION</span>
              <h4>Create Content That Fits Each Platform</h4>
              <p>
                We develop platform-appropriate creatives, Reels, captions and
                campaign content that reflect your brand.
              </p>

              <div class="secG-details">
                <span>Design</span>
                <span>Copy</span>
                <span>Video</span>
              </div>
            </div>

            <div class="secG-side">
              <span>03</span>
              <strong>Creative</strong>
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
              <span class="secG-kicker">PUBLISHING &amp; ENGAGEMENT</span>
              <h4>Show Up And Engage</h4>
              <p>
                We manage publishing, engagement and community interactions as
                per the agreed scope, so your audience always hears back.
              </p>

              <div class="secG-details">
                <span>Publishing</span>
                <span>Replies</span>
                <span>Community</span>
              </div>
            </div>

            <div class="secG-side">
              <span>04</span>
              <strong>Presence</strong>
            </div>
          </article>

          <article class="secG-step">
            <div class="secG-marker">
              <div class="secG-icon">
                <svg viewBox="0 0 24 24" aria-hidden="true">
                  <rect x="4" y="4" width="16" height="16" rx="2"></rect>
                  <path d="m8 12 2.5 2.5L16 9"></path>
                </svg>
              </div>
            </div>

            <div class="secG-info">
              <span class="secG-kicker">PERFORMANCE TRACKING</span>
              <h4>Measure What Matters</h4>
              <p>
                We monitor the relevant performance metrics and identify
                opportunities to improve what is working and what is not.
              </p>

              <div class="secG-details">
                <span>Reporting</span>
                <span>Insights</span>
                <span>Metrics</span>
              </div>
            </div>

            <div class="secG-side">
              <span>05</span>
              <strong>Insight</strong>
            </div>
          </article>

          <article class="secG-step secG-step-last">
            <div class="secG-marker">
              <div class="secG-icon">
                <svg viewBox="0 0 24 24" aria-hidden="true">
                  <path d="M4 18 10 12l4 4 6-8"></path>
                  <path d="M15 8h5v5"></path>
                </svg>
              </div>
            </div>

            <div class="secG-info">
              <span class="secG-kicker">OPTIMISATION &amp; GROWTH</span>
              <h4>Refine And Keep Growing</h4>
              <p>
                We use performance insights to refine your content and
                campaign direction, so results build over time.
              </p>

              <div class="secG-details">
                <span>Refinement</span>
                <span>Growth</span>
                <span>Iteration</span>
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

    <section class="secH">
      <div class="container">
        <div class="heading">
          <span class="eyebrow">
            <span class="eyebrow-line"></span>
            INDUSTRIES WE SERVE
          </span>

          <h3>
            Industries We Run Social
            <span>Media Marketing For.</span>
          </h3>

          <p>
            Every industry engages differently — we tailor content to how your
            audience actually behaves.
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
             10 — secL (existing structure) — WHY CHOOSE WEB MINGO
        ============================================================= -->
    <section class="secL">
      <div class="container">
        <div class="heading">
          <span class="eyebrow"><span class="eyebrow-line"></span>WHY WEB MINGO</span>
          <h3>
            Social Media Marketing
            <span>Built for Your Goals.</span>
          </h3>
          <p>
            No fixed templates, no copy-paste strategies — just a team that
            treats your brand like it's their own.
          </p>
        </div>

        <ul class="secL-list">
          <li>
            <span class="secL-num">01</span>
            <span class="secL-icon"><svg viewBox="0 0 24 24">
                <path d="M12 3l8 4v6c0 5-3.5 7.5-8 9-4.5-1.5-8-4-8-9V7l8-4z" />
                <path d="M8 12l3 3 5-6" />
              </svg></span>
            <div>
              <h4>In-House Design & Content</h4>
              <p>
                No outsourced work — every design and caption is made
                in-house.
              </p>
            </div>
          </li>
          <li>
            <span class="secL-num">02</span>
            <span class="secL-icon"><svg viewBox="0 0 24 24">
                <path d="M3 3v18h18" />
                <path d="M7 15l4-5 3 3 6-8" />
              </svg></span>
            <div>
              <h4>Data-Informed Content Planning</h4>
              <p>
                Decisions shaped by what's actually performing, not guesswork.
              </p>
            </div>
          </li>
          <li>
            <span class="secL-num">03</span>
            <span class="secL-icon"><svg viewBox="0 0 24 24">
                <rect x="4" y="4" width="16" height="16" rx="2" />
                <path d="M8 9h8M8 13h5M8 17h3" />
              </svg></span>
            <div>
              <h4>Platform-Specific Direction</h4>
              <p>
                Content shaped around how each platform actually performs.
              </p>
            </div>
          </li>
          <li>
            <span class="secL-num">04</span>
            <span class="secL-icon"><svg viewBox="0 0 24 24">
                <circle cx="11" cy="11" r="7" />
                <path d="M21 21l-4.3-4.3" />
                <path d="M8 11h6" />
                <path d="M11 8v6" />
              </svg></span>
            <div>
              <h4>Transparent Reporting</h4>
              <p>Clear monthly reports — no vague updates, no jargon.</p>
            </div>
          </li>
        </ul>

        <div class="cntr">
          <button type="button" data-model=".enquire-pop" class="btn btn-outline-black">
            Start Your Social Media Project <i>↗</i>
          </button>
        </div>
      </div>
    </section>

    <!-- ============================================================
             12 — secN (existing structure) — FAQ
        ============================================================= -->
    @include('partials.page-faqs', [
      'title' => 'Frequently Asked Questions <span>About Social Media Marketing.</span>',
      'intro' => 'Straight answers to what most people ask before getting started.',
    ])

    <!-- ============================================================
             13 — FINAL CTA (existing structure)
        ============================================================= -->
    <div class="container">
      <div class="cta-promo">
        <div class="cta-promo__inner">
          <span class="cta-promo__eyebrow">READY TO GROW YOUR SOCIAL PRESENCE?</span>
          <h3 class="cta-promo__heading">
            Let's Turn Your Social Media Into a More Meaningful Growth
            Channel.
          </h3>
          <p class="cta-promo__sub">
            Get a clearer understanding of your current social media
            performance, content opportunities, and potential next steps.
          </p>
          <div class="cta-promo__actions">
            <button class="btn btn-white" data-model=".enquire-pop">
              Get a Free Social Media Audit <i>↗</i>
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