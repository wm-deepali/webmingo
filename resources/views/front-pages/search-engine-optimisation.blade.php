@extends('layouts.app')

@push('styles')
  <link rel="stylesheet" href="assets/sass/seo/seo.css" />
@endpush

@section('content')

    <main>
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
                <span class="eyebrow">SEARCH ENGINE OPTIMISATION</span>
                <h1>Get Found When Your Customers Search on Google.</h1>
                <p>
                  We improve your website's search visibility through technical
                  SEO, on-page optimisation, content and a strategy built around
                  relevant searches.
                </p>
                <div class="banner-actions">
                  <button class="btn btn-white" data-model=".enquire-pop">
                    Get a Free SEO Audit <i>↗</i>
                  </button>
                  <a href="javascript:void()" class="btn btn-outline-white">
                    Chat on WhatsApp<i>↗</i></a
                  >
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- ============================================================
     02 — appIntro — WHAT IS SEO?
============================================================= -->
      <section class="appIntro">
        <div class="container">
          <div class="appIntro-head">
            <div class="appIntro-heading">
              <span class="eyebrow">
                <span class="eyebrow-line"></span>
                UNDERSTANDING SEO
              </span>

              <div class="heading">
                <h3>
                  What Is SEO and Why Does Your Business Need It?
                  <span>A Stronger Foundation for Online Visibility.</span>
                </h3>
              </div>
            </div>

            <div class="appIntro-intro">
              <p>
                Search Engine Optimization helps search engines understand your
                website and connect your content with people actively searching
                for your products, services, or expertise.
              </p>

              <p>
                From technical structure to useful content, SEO brings together
                multiple improvements that support sustainable organic
                visibility over time.
              </p>
            </div>
          </div>

          <div class="appIntro-framework">
            <div class="appIntro-framework-head">
              <span class="eyebrow">
                <span class="eyebrow-line"></span>
                THE SEO FRAMEWORK
              </span>

              <p>
                A stronger search presence starts with the right foundation.
              </p>
            </div>

            <div class="appIntro-points">
              <div class="appIntro-point">
                <div class="appIntro-point-top">
                  <span class="appIntro-number">01</span>
                  <span class="appIntro-icon">↗</span>
                </div>

                <h4>Discover</h4>

                <p>
                  Make your website easier for search engines and users to
                  discover through clear navigation, meaningful content, and a
                  well-organized website structure.
                </p>

                <span class="appIntro-point-tag">Visibility</span>
              </div>

              <div class="appIntro-point">
                <div class="appIntro-point-top">
                  <span class="appIntro-number">02</span>
                  <span class="appIntro-icon">↗</span>
                </div>

                <h4>Optimize</h4>

                <p>
                  Improve your content, technical foundations, page experience,
                  and internal structure to support relevance and search engine
                  understanding.
                </p>

                <span class="appIntro-point-tag">Relevance</span>
              </div>

              <div class="appIntro-point">
                <div class="appIntro-point-top">
                  <span class="appIntro-number">03</span>
                  <span class="appIntro-icon">↗</span>
                </div>

                <h4>Grow</h4>

                <p>
                  Build a stronger organic presence through useful content,
                  continuous improvements, performance monitoring, and a
                  strategy aligned with your business goals.
                </p>

                <span class="appIntro-point-tag">Progress</span>
              </div>
            </div>
          </div>

          <div class="appIntro-bottom">
            <span>SEO IS A CONTINUOUS PROCESS</span>

            <p>
              Better visibility is built through consistent improvements, not
              one-time changes.
            </p>
          </div>
        </div>
      </section>

      <!-- ============================================================
     SEO SERVICES
============================================================ -->

      <section class="seoServices">
        <div class="container">
          <div class="heading">
            <span class="eyebrow">
              <span class="eyebrow-line"></span>
              SEO SERVICES
            </span>
            <h3>
              SEO Services For Meaningful
              <span> Organic Growth.</span>
            </h3>

            <p>
              Strategic SEO solutions designed to improve your website
              visibility, attract relevant audiences and support long-term
              business growth.
            </p>
          </div>

          <div class="seoServices-grid">
            <!-- 01 — SEO STRATEGY -->
            <article class="seoServices-card seoServices-card--featured">
              <img
                src="assets/images/comman/seo1.png"
                alt="SEO strategy and website analytics"
                loading="lazy"
              />

              <div class="seoServices-overlay"></div>

              <div class="seoServices-content">
                <span>01 / SEO STRATEGY</span>

                <h4>SEO Strategy & Website Audits</h4>

                <p>
                  Identify growth opportunities through website audits,
                  competitor research, keyword planning and a focused SEO
                  roadmap.
                </p>

                <div class="seoServices-arrow">↗</div>
              </div>
            </article>

            <!-- 02 — ON-PAGE SEO -->
            <article class="seoServices-card">
              <img
                src="assets/images/comman/seo2.png"
                alt="On-page SEO and content optimization"
                loading="lazy"
              />

              <div class="seoServices-overlay"></div>

              <div class="seoServices-content">
                <span>02 / ON-PAGE SEO</span>

                <h4>On-Page & Content SEO</h4>

                <p>
                  Optimize headings, metadata, page content, keywords and
                  internal linking to improve search relevance.
                </p>

                <div class="seoServices-arrow">↗</div>
              </div>
            </article>

            <!-- 03 — TECHNICAL SEO -->
            <article class="seoServices-card">
              <img
                src="assets/images/comman/seo3.png"
                alt="Technical SEO and website optimization"
                loading="lazy"
              />

              <div class="seoServices-overlay"></div>

              <div class="seoServices-content">
                <span>03 / TECHNICAL SEO</span>

                <h4>Technical SEO & Website Performance</h4>

                <p>
                  Improve website structure, crawlability, indexing, page speed
                  and overall technical performance.
                </p>

                <div class="seoServices-arrow">↗</div>
              </div>
            </article>

            <!-- 04 — OFF-PAGE SEO -->
            <article class="seoServices-card">
              <img
                src="assets/images/comman/seo4.png"
                alt="Off-page SEO and link building strategy"
                loading="lazy"
              />

              <div class="seoServices-overlay"></div>

              <div class="seoServices-content">
                <span>04 / OFF-PAGE SEO</span>

                <h4>Off-Page & Local SEO</h4>

                <p>
                  Build stronger online authority through link building, local
                  optimization and relevant digital visibility.
                </p>

                <div class="seoServices-arrow">↗</div>
              </div>
            </article>

            <!-- 05 — SEO CTA -->
            <div class="seoServices-more">
              <div class="seoServices-more-content">
                <span>YOUR ORGANIC GROWTH</span>

                <h4>Let's Build Your SEO Growth Strategy.</h4>

                <p>
                  Have a website that needs better visibility? Let's create a
                  custom SEO strategy around your business goals, audience and
                  growth opportunities.
                </p>
              </div>

              <button data-model=".enquire-pop" class="btn btn-outline-black">
                Let's Talk SEO
                <i>↗</i>
              </button>
            </div>
          </div>
        </div>
      </section>

      <!-- ============================================================
     04 — SEO BEFORE & AFTER
============================================================= -->

   <section class="seoCompare">
  <div class="container">
    <div class="heading">
      <span class="eyebrow">
        <span class="eyebrow-line"></span>
        SEO OPTIMIZATION
      </span>
      <h3>
        From Unoptimized Pages to A
        <span>Stronger SEO Foundation.</span>
      </h3>
      <p>
        Make every page work harder — here's what a typical optimization
        pass improves.
      </p>
    </div>

    <div class="swiper twoSlider seoCompare-slider">
      <div class="swiper-wrapper">

        <!-- BEFORE OPTIMIZATION -->
        <div class="swiper-slide">
          <div class="seoCompare-panel">
            <div class="seoCompare-panel-head">
              <span class="seoCompare-label"><i></i>BEFORE OPTIMIZATION</span>
              <span class="seoCompare-status">Needs Improvement</span>
            </div>

            <div class="seoCompare-visual">
              <img
                src="assets/images/comman/before.png"
                alt="Website analytics showing SEO performance data"
                loading="lazy"
              />
              <div class="seoCompare-visual-overlay"></div>
              <div class="seoCompare-visual-note">
                <span>SEO AUDIT</span>
                <strong>Multiple Areas Need Attention</strong>
              </div>
            </div>

            <div class="seoCompare-panel-content">
              <h4>Pages That Are Not Fully Optimized.</h4>
              <p>
                Common issues that can make it harder for search engines and
                users to understand your website.
              </p>
              <ul class="seoCompare-points">
                <li>Unclear heading hierarchy</li>
                <li>Weak or missing page titles</li>
                <li>Content gaps</li>
                <li>Technical accessibility issues</li>
                <li>Poor internal linking structure</li>
              </ul>
            </div>
          </div>
        </div>

        <!-- AFTER OPTIMIZATION -->
        <div class="swiper-slide">
          <div class="seoCompare-panel seoCompare-panel--after">
            <div class="seoCompare-panel-head">
              <span class="seoCompare-label"><i></i>AFTER OPTIMIZATION</span>
              <span class="seoCompare-status">Optimized Foundation</span>
            </div>

            <div class="seoCompare-visual">
              <img
                src="assets/images/comman/after.png"
                alt="SEO analytics dashboard showing website performance"
                loading="lazy"
              />
              <div class="seoCompare-visual-overlay"></div>
              <div class="seoCompare-visual-note">
                <span>SEO IMPROVEMENT</span>
                <strong>A Clearer Growth Direction</strong>
              </div>
            </div>

            <div class="seoCompare-panel-content">
              <h4>A Website Built on Stronger SEO Fundamentals.</h4>
              <p>
                A focused optimization process creates a clearer, more
                accessible and search-friendly website structure.
              </p>
              <ul class="seoCompare-points">
                <li>Clear page structure</li>
                <li>Descriptive titles and headings</li>
                <li>Relevant and useful content</li>
                <li>Improved technical foundations</li>
                <li>Better-connected website pages</li>
              </ul>
            </div>
          </div>
        </div>

      </div>
    </div>

    <!-- ARROWS (visible at 991px and below) -->
    <div class="seoCompare-nav">
      <button class="twoSlider-prev" type="button" aria-label="Previous slide">
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M15 18l-6-6 6-6"/></svg>
      </button>
      <button class="twoSlider-next" type="button" aria-label="Next slide">
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M9 18l6-6-6-6"/></svg>
      </button>
    </div>

    <div class="btn-center">
      <p class="seoCompare-note">
        SEO outcomes vary based on the website, competition, content
        quality and implementation.
      </p>
      <button class="btn btn-outline-black" data-model=".enquire-pop">
        Get Your SEO Audit
        <i>↗</i>
      </button>
    </div>
  </div>
</section>

      <section class="seoGrowth">
        <div class="container">
          <div class="heading">
            <span class="eyebrow">
              <span class="eyebrow-line"></span>
              OUR SEO APPROACH
            </span>

            <h3>
              Build A Stronger Search Presence
              <span>From The Ground Up.</span>
            </h3>

            <p>
              We improve the foundation, pages, authority and content that help
              your website become easier to find and understand.
            </p>
          </div>

          <div class="seoGrowth-wrap">
            <!-- LEFT INTRO -->

            <div class="seoGrowth-intro">
              <div class="seoGrowth-intro-content">
                <div class="seoGrowth-intro-top">
                  <span class="seoGrowth-label"> SEO FOUNDATION </span>

                  <div class="seoGrowth-intro-icon">
                    <svg viewBox="0 0 24 24" fill="none">
                      <path
                        d="M12 3L19 6V11.5C19 16.1 16.1 19.7 12 21C7.9 19.7 5 16.1 5 11.5V6L12 3Z"
                        stroke="currentColor"
                        stroke-width="1.7"
                        stroke-linejoin="round"
                      />

                      <path
                        d="M9 12L11 14L15 10"
                        stroke="currentColor"
                        stroke-width="1.7"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                      />
                    </svg>
                  </div>
                </div>

                <h4>
                  A Smarter Approach To
                  <span>SEO Growth.</span>
                </h4>

                <p>
                  We bring the important parts of SEO together into one
                  connected strategy built around your website and audience.
                </p>
              </div>

              <!-- BOTTOM CTA -->

              <div class="seoGrowth-intro-bottom">
                <p>Ready to improve your search presence?</p>

                <a
                  href="javascript:void(0)"
                  class="btn btn-outline-black"
                  data-model=".enquire-pop"
                >
                  Let’s Connect

                  <svg viewBox="0 0 24 24" fill="none">
                    <path
                      d="M5 12H19"
                      stroke="currentColor"
                      stroke-width="1.7"
                      stroke-linecap="round"
                    />

                    <path
                      d="M13 6L19 12L13 18"
                      stroke="currentColor"
                      stroke-width="1.7"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                    />
                  </svg>
                </a>
              </div>
            </div>

            <!-- RIGHT SEO CARDS -->

            <div class="seoGrowth-path">
              <!-- TECHNICAL SEO -->

              <div class="seoGrowth-item">
                <div class="seoGrowth-item-head">
                  <div class="seoGrowth-icon">
                    <svg viewBox="0 0 24 24" fill="none">
                      <path
                        d="M5 4H15L19 8V20H5V4Z"
                        stroke="currentColor"
                        stroke-width="1.7"
                        stroke-linejoin="round"
                      />

                      <path
                        d="M14 4V9H19"
                        stroke="currentColor"
                        stroke-width="1.7"
                        stroke-linejoin="round"
                      />

                      <path
                        d="M8 13H16M8 16H14"
                        stroke="currentColor"
                        stroke-width="1.7"
                        stroke-linecap="round"
                      />
                    </svg>
                  </div>

                  <span class="seoGrowth-tag"> FOUNDATION </span>
                </div>

                <h4>Technical SEO</h4>

                <p>
                  Make your website easier for search engines to discover and
                  understand.
                </p>

                <div class="seoGrowth-points">
                  <span>Crawlability</span>
                  <span>Indexing</span>
                  <span>Speed</span>
                  <span>Mobile</span>
                </div>
              </div>

              <!-- ON PAGE SEO -->

              <div class="seoGrowth-item">
                <div class="seoGrowth-item-head">
                  <div class="seoGrowth-icon">
                    <svg viewBox="0 0 24 24" fill="none">
                      <rect
                        x="5"
                        y="4"
                        width="14"
                        height="16"
                        rx="2"
                        stroke="currentColor"
                        stroke-width="1.7"
                      />

                      <path
                        d="M8 9H16M8 12H16M8 15H13"
                        stroke="currentColor"
                        stroke-width="1.7"
                        stroke-linecap="round"
                      />
                    </svg>
                  </div>

                  <span class="seoGrowth-tag"> OPTIMISATION </span>
                </div>

                <h4>On-Page SEO</h4>

                <p>
                  Make important pages clearer, relevant and focused on what
                  people search.
                </p>

                <div class="seoGrowth-points">
                  <span>Keywords</span>
                  <span>Meta Data</span>
                  <span>Structure</span>
                  <span>Links</span>
                </div>
              </div>

              <!-- OFF PAGE SEO -->

              <div class="seoGrowth-item">
                <div class="seoGrowth-item-head">
                  <div class="seoGrowth-icon">
                    <svg viewBox="0 0 24 24" fill="none">
                      <circle
                        cx="7"
                        cy="12"
                        r="2.5"
                        stroke="currentColor"
                        stroke-width="1.7"
                      />

                      <circle
                        cx="17"
                        cy="7"
                        r="2.5"
                        stroke="currentColor"
                        stroke-width="1.7"
                      />

                      <circle
                        cx="17"
                        cy="17"
                        r="2.5"
                        stroke="currentColor"
                        stroke-width="1.7"
                      />

                      <path
                        d="M9.2 10.9L14.8 8.1M9.2 13.1L14.8 15.9"
                        stroke="currentColor"
                        stroke-width="1.7"
                        stroke-linecap="round"
                      />
                    </svg>
                  </div>

                  <span class="seoGrowth-tag"> AUTHORITY </span>
                </div>

                <h4>Off-Page SEO</h4>

                <p>
                  Build stronger trust around your website through relevant
                  online signals.
                </p>

                <div class="seoGrowth-points">
                  <span>Link Building</span>
                  <span>Outreach</span>
                  <span>Mentions</span>
                  <span>Local SEO</span>
                </div>
              </div>

              <!-- CONTENT GROWTH -->

              <div class="seoGrowth-item">
                <div class="seoGrowth-item-head">
                  <div class="seoGrowth-icon">
                    <svg viewBox="0 0 24 24" fill="none">
                      <path
                        d="M5 4H15L19 8V20H5V4Z"
                        stroke="currentColor"
                        stroke-width="1.7"
                        stroke-linejoin="round"
                      />

                      <path
                        d="M14 4V9H19"
                        stroke="currentColor"
                        stroke-width="1.7"
                        stroke-linejoin="round"
                      />

                      <path
                        d="M8 13H16M8 16H14"
                        stroke="currentColor"
                        stroke-width="1.7"
                        stroke-linecap="round"
                      />
                    </svg>
                  </div>

                  <span class="seoGrowth-tag"> GROWTH </span>
                </div>

                <h4>Content &amp; Growth</h4>

                <p>
                  Create useful content that matches what your audience is
                  looking for.
                </p>

                <div class="seoGrowth-points">
                  <span>Content</span>
                  <span>Search Intent</span>
                  <span>Optimisation</span>
                  <span>Tracking</span>
                </div>
              </div>
            </div>
          </div>

          <!-- SEO FLOW -->

          <div class="seoGrowth-flow">
            <div class="seoGrowth-flow-item">
              <div class="seoGrowth-flow-icon">
                <svg viewBox="0 0 24 24" fill="none">
                  <circle
                    cx="11"
                    cy="11"
                    r="6"
                    stroke="currentColor"
                    stroke-width="1.7"
                  />

                  <path
                    d="M16 16L20 20"
                    stroke="currentColor"
                    stroke-width="1.7"
                    stroke-linecap="round"
                  />
                </svg>
              </div>

              <div>
                <strong>Audit</strong>
                <p>Find opportunities</p>
              </div>
            </div>

            <i></i>

            <div class="seoGrowth-flow-item">
              <div class="seoGrowth-flow-icon">
                <svg viewBox="0 0 24 24" fill="none">
                  <path
                    d="M5 12H19"
                    stroke="currentColor"
                    stroke-width="1.7"
                    stroke-linecap="round"
                  />

                  <path
                    d="M13 6L19 12L13 18"
                    stroke="currentColor"
                    stroke-width="1.7"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  />
                </svg>
              </div>

              <div>
                <strong>Optimise</strong>
                <p>Improve what matters</p>
              </div>
            </div>

            <i></i>

            <div class="seoGrowth-flow-item">
              <div class="seoGrowth-flow-icon">
                <svg viewBox="0 0 24 24" fill="none">
                  <path
                    d="M5 18L10 13L13 16L19 9"
                    stroke="currentColor"
                    stroke-width="1.7"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  />

                  <path
                    d="M15 9H19V13"
                    stroke="currentColor"
                    stroke-width="1.7"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  />
                </svg>
              </div>

              <div>
                <strong>Build</strong>
                <p>Strengthen visibility</p>
              </div>
            </div>

            <i></i>

            <div class="seoGrowth-flow-item">
              <div class="seoGrowth-flow-icon">
                <svg viewBox="0 0 24 24" fill="none">
                  <path
                    d="M5 16L9 12L12 14L19 7"
                    stroke="currentColor"
                    stroke-width="1.7"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  />

                  <path
                    d="M15 7H19V11"
                    stroke="currentColor"
                    stroke-width="1.7"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  />
                </svg>
              </div>

              <div>
                <strong>Grow</strong>
                <p>Measure and improve</p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="growthJourney" id="growthJourney">
        <div class="container">
          <div class="heading">
            <span class="eyebrow">
              <span class="eyebrow-line"></span>
              WHY SEO MATTERS
            </span>

            <h3>
              How SEO Helps
              <span>Your Business Grow.</span>
            </h3>

            <p>SEO turns search visibility into real business opportunities.</p>
          </div>

          <div class="growthJourney-track">
            <div class="growthJourney-line"></div>

            <div class="growthJourney-step">
              <span class="growthJourney-icon">
                <svg
                  viewBox="0 0 24 24"
                  fill="none"
                  stroke="currentColor"
                  stroke-width="1.4"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                >
                  <path d="M2 12s3.5-7 10-7 10 7 10 7-3.5 7-10 7-10-7-10-7z" />
                  <circle cx="12" cy="12" r="3" />
                </svg>
              </span>
              <h4>Get Discovered</h4>
              <p>Show up when people search for what you offer.</p>
            </div>

            <div class="growthJourney-step">
              <span class="growthJourney-icon">
                <svg
                  viewBox="0 0 24 24"
                  fill="none"
                  stroke="currentColor"
                  stroke-width="1.4"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                >
                  <circle cx="12" cy="12" r="8" />
                  <circle cx="12" cy="12" r="4" />
                  <circle cx="12" cy="12" r="0.6" fill="currentColor" />
                </svg>
              </span>
              <h4>Reach Relevant Customers</h4>
              <p>Attract visitors who actually want your services.</p>
            </div>

            <div class="growthJourney-step">
              <span class="growthJourney-icon">
                <svg
                  viewBox="0 0 24 24"
                  fill="none"
                  stroke="currentColor"
                  stroke-width="1.4"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                >
                  <path
                    d="M12 3l7 3v6c0 4.5-3 7.5-7 9-4-1.5-7-4.5-7-9V6l7-3z"
                  />
                  <path d="M9 12l2 2 4-4" />
                </svg>
              </span>
              <h4>Build Authority</h4>
              <p>Earn trust and stand out as a reliable choice.</p>
            </div>

            <div class="growthJourney-step">
              <span class="growthJourney-icon">
                <svg
                  viewBox="0 0 24 24"
                  fill="none"
                  stroke="currentColor"
                  stroke-width="1.4"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                >
                  <path
                    d="M21 11.5a8 8 0 0 1-8.5 8L7 22v-3.5A8 8 0 1 1 21 11.5Z"
                  />
                  <path d="M8 11h8" />
                  <path d="M8 14h5" />
                </svg>
              </span>
              <h4>Generate Opportunities</h4>
              <p>Turn visibility into enquiries and leads.</p>
            </div>

            <div class="growthJourney-step">
              <span class="growthJourney-icon">
                <svg
                  viewBox="0 0 24 24"
                  fill="none"
                  stroke="currentColor"
                  stroke-width="1.4"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                >
                  <path d="M3 17l6-6 4 4 8-8" />
                  <path d="M15 7h6v6" />
                </svg>
              </span>
              <h4>Grow Over Time</h4>
              <p>Results that compound the longer we work on it.</p>
            </div>
          </div>

          <a
            href="javascript:void(0)"
            class="btn btn-outline-black growthJourney-cta"
            data-model=".enquire-pop"
          >
            Get Your Website SEO Audit
            <i>↗</i>
          </a>
        </div>
      </section>

      <!-- ============================================================
     SEO SERVICES — PACKAGES + CUSTOM REQUIREMENTS FORM
============================================================= -->
      <section class="ecomPackage">
        <div class="container">
          <div class="ecomPackage-inner">
            <!-- LEFT — SEO PLANS -->
            <div class="ecomPackage-content">
              <span class="ecomPackage-label"> SEO SERVICES </span>

              <h3>
                Improve Your Website Visibility
                <span>With Professional SEO.</span>
              </h3>

              <p class="ecomPackage-intro">
                A practical SEO strategy to help your website appear in relevant
                Google searches, attract more organic visitors, and build a
                strong search foundation.
              </p>

              <div class="ecomPackage-plans">
                <!-- PLAN 1 — SEO ESSENTIAL -->
                <div class="ecomPackage-package ecomPackage-plan">
                  <div class="ecomPackage-plan-head">
                    <span class="ecomPackage-package-label">
                      FOR SMALL &amp; LOCAL BUSINESSES
                    </span>

                    <h4>SEO Essential</h4>

                    <div class="ecomPackage-plan-price">
                      <strong>₹14,999</strong>
                      <span>/month</span>
                    </div>

                    <p class="ecomPackage-plan-desc">
                      Build a strong SEO foundation and improve your website's
                      visibility in relevant Google searches.
                    </p>
                  </div>

                  <span class="ecomPackage-plan-sub">WHAT'S INCLUDED</span>

                  <!-- FIRST 3 (always visible) -->
                  <div
                    class="ecomPackage-package-list ecomPackage-package-list--top"
                  >
                    <div class="ecomPackage-package-item">
                      <i>✓</i>
                      <span>Keyword Research &amp; SEO Planning</span>
                    </div>

                    <div class="ecomPackage-package-item">
                      <i>✓</i>
                      <span>Complete Website SEO Audit</span>
                    </div>

                    <div class="ecomPackage-package-item">
                      <i>✓</i>
                      <span>On-Page SEO for Key Website Pages</span>
                    </div>
                  </div>

                  <!-- REMAINING 8 (slide down) -->
                  <div class="ecomPackage-more">
                    <div
                      class="ecomPackage-package-list ecomPackage-package-list--more"
                    >
                      <div class="ecomPackage-package-item">
                        <i>✓</i>
                        <span
                          >Title, Meta Description &amp; Heading
                          Optimization</span
                        >
                      </div>

                      <div class="ecomPackage-package-item">
                        <i>✓</i>
                        <span>Technical SEO Monitoring &amp; Fixes</span>
                      </div>

                      <div class="ecomPackage-package-item">
                        <i>✓</i>
                        <span>Internal Linking Optimization</span>
                      </div>

                      <div class="ecomPackage-package-item">
                        <i>✓</i>
                        <span
                          >Google Search Console &amp; Analytics
                          Monitoring</span
                        >
                      </div>

                      <div class="ecomPackage-package-item">
                        <i>✓</i>
                        <span>Google Business Profile Optimization</span>
                      </div>

                      <div class="ecomPackage-package-item">
                        <i>✓</i>
                        <span>2 SEO-Optimized Content Pieces / Month</span>
                      </div>

                      <div class="ecomPackage-package-item">
                        <i>✓</i>
                        <span>Link Building &amp; Off-Page SEO</span>
                      </div>

                      <div class="ecomPackage-package-item">
                        <i>✓</i>
                        <span>Monthly SEO Performance Report</span>
                      </div>
                    </div>
                  </div>

                  <button
                    type="button"
                    class="ecomPackage-toggle"
                    aria-expanded="false"
                  >
                    <span class="ecomPackage-toggle-text">View all</span>
                    <i aria-hidden="true"></i>
                  </button>

                  <div class="ecomPackage-plan-cta">
                    <button
                      type="button"
                      class="btn btn-outline-primary"
                      data-model=".enquire-pop"
                    >
                      Get an SEO Plan <i>↗</i>
                    </button>
                  </div>
                </div>

                <!-- PLAN 2 — SEO GROWTH -->
                <div class="ecomPackage-package ecomPackage-plan">
                  <div class="ecomPackage-plan-head">
                    <span class="ecomPackage-package-label">
                      FOR GROWING &amp; COMPETITIVE BUSINESSES
                    </span>

                    <h4>SEO Growth</h4>

                    <div class="ecomPackage-plan-price">
                      <strong>₹24,999</strong>
                      <span>/month</span>
                    </div>

                    <p class="ecomPackage-plan-desc">
                      A broader SEO strategy focused on improving search
                      visibility, targeting competitive keywords, and building
                      long-term organic growth.
                    </p>
                  </div>

                  <span class="ecomPackage-plan-sub">WHAT'S INCLUDED</span>

                  <!-- FIRST 3 (always visible) -->
                  <div
                    class="ecomPackage-package-list ecomPackage-package-list--top"
                  >
                    <div class="ecomPackage-package-item">
                      <i>✓</i>
                      <span
                        >Advanced Keyword Research &amp; Competitor
                        Analysis</span
                      >
                    </div>

                    <div class="ecomPackage-package-item">
                      <i>✓</i>
                      <span>Complete Website SEO Audit</span>
                    </div>

                    <div class="ecomPackage-package-item">
                      <i>✓</i>
                      <span>On-Page SEO Across the Website</span>
                    </div>
                  </div>

                  <!-- REMAINING 8 (slide down) -->
                  <div class="ecomPackage-more">
                    <div
                      class="ecomPackage-package-list ecomPackage-package-list--more"
                    >
                      <div class="ecomPackage-package-item">
                        <i>✓</i>
                        <span>Technical SEO Monitoring &amp; Improvements</span>
                      </div>

                      <div class="ecomPackage-package-item">
                        <i>✓</i>
                        <span>Internal Linking Strategy</span>
                      </div>

                      <div class="ecomPackage-package-item">
                        <i>✓</i>
                        <span
                          >Google Search Console &amp; Analytics
                          Monitoring</span
                        >
                      </div>

                      <div class="ecomPackage-package-item">
                        <i>✓</i>
                        <span>Google Business Profile &amp; Local SEO</span>
                      </div>

                      <div class="ecomPackage-package-item">
                        <i>✓</i>
                        <span>4 SEO-Optimized Content Pieces / Month</span>
                      </div>

                      <div class="ecomPackage-package-item">
                        <i>✓</i>
                        <span
                          >Content Updates &amp; Existing Page
                          Optimization</span
                        >
                      </div>

                      <div class="ecomPackage-package-item">
                        <i>✓</i>
                        <span>Strategic Link Building &amp; Off-Page SEO</span>
                      </div>

                      <div class="ecomPackage-package-item">
                        <i>✓</i>
                        <span
                          >Monthly SEO Performance &amp; Strategy Report</span
                        >
                      </div>
                    </div>
                  </div>

                  <button
                    type="button"
                    class="ecomPackage-toggle"
                    aria-expanded="false"
                  >
                    <span class="ecomPackage-toggle-text">View all</span>
                    <i aria-hidden="true"></i>
                  </button>

                  <div class="ecomPackage-plan-cta">
                    <button
                      type="button"
                      class="btn btn-primary"
                      data-model=".enquire-pop"
                    >
                      Get an SEO Plan <i>↗</i>
                    </button>
                  </div>
                </div>
              </div>

              <!-- CALLBACK OFFER -->
              <div class="ecomPackage-dynamic">
                <div class="ecomPackage-dynamic-text">
                  <h5>Want to Discuss Your SEO Requirements?</h5>
                </div>

                <button
                  type="button"
                  class="btn btn-black"
                  data-model=".enquire-pop"
                >
                  Get a Callback <i>↗</i>
                </button>
              </div>
            </div>

            <!-- RIGHT — CUSTOM REQUIREMENTS FORM -->
            <div class="ecomPackage-form">
              <div class="ecomPackage-form-head">
                <span class="ecomPackage-form-label">
                  HAVE CUSTOM SEO REQUIREMENTS?
                </span>

                <h4>
                  Tell Us Your
                  <span>SEO Goals.</span>
                </h4>

                <p>
                  Need help with rankings, traffic, technical SEO or a complete
                  SEO strategy? Tell us what you want to achieve.
                </p>
              </div>

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

                  <textarea
                    id="packageMessage"
                    name="requirements"
                    rows="4"
                    placeholder="Tell us about your SEO goals"
                  ></textarea>
                </div>

                <div class="ecomPackage-form-action">
                  <button type="submit" class="btn btn-black">
                    Tell Us Your SEO Requirements <i>↗</i>
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

      <section class="secL">
        <div class="container">
          <div class="heading">
            <span class="eyebrow">
              <span class="eyebrow-line"></span>
              WHY WEB MINGO
            </span>

            <h3>
              SEO That Supports
              <br />
              <span>Long-Term Growth.</span>
            </h3>

            <p>
              We build SEO strategies around your business goals, search intent
              and audience to create a stronger, more discoverable digital
              presence.
            </p>
          </div>

          <ul class="secL-list">
            <li>
              <span class="secL-icon">
                <svg viewBox="0 0 24 24">
                  <path d="M4 20V10" />
                  <path d="M10 20V4" />
                  <path d="M16 20v-7" />
                  <path d="M22 20H2" />
                </svg>
              </span>

              <div>
                <h4>Strategy-Led SEO</h4>

                <p>
                  We begin with your business goals, audience and search
                  landscape to build a focused SEO strategy.
                </p>
              </div>
            </li>

            <li>
              <span class="secL-icon">
                <svg viewBox="0 0 24 24">
                  <path
                    d="M12 3l8 4v6c0 5-3.5 7.5-8 9-4.5-1.5-8-4-8-9V7l8-4z"
                  />
                  <path d="M8 12l3 3 5-6" />
                </svg>
              </span>

              <div>
                <h4>Ethical SEO Practices</h4>

                <p>
                  We focus on relevant content, quality optimization and
                  sustainable practices instead of shortcuts or harmful tactics.
                </p>
              </div>
            </li>

            <li>
              <span class="secL-icon">
                <svg viewBox="0 0 24 24">
                  <circle cx="11" cy="11" r="7" />
                  <path d="M21 21l-4.3-4.3" />
                  <path d="M8 11h6" />
                  <path d="M11 8v6" />
                </svg>
              </span>

              <div>
                <h4>Built Around Search Intent</h4>

                <p>
                  We align content, keywords and page structure with what your
                  audience is actually searching for.
                </p>
              </div>
            </li>

            <li>
              <span class="secL-icon">
                <svg viewBox="0 0 24 24">
                  <path d="M3 3v18h18" />
                  <path d="M7 15l4-5 3 3 6-8" />
                </svg>
              </span>

              <div>
                <h4>Measured For Improvement</h4>

                <p>
                  We monitor relevant performance signals and use insights to
                  refine your SEO strategy as your business evolves.
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
              Start Your SEO Journey
              <i>↗</i>
            </button>
          </div>
        </div>
      </section>
      <!-- ============================================================
     10 — secG — OUR SEO PROCESS
============================================================= -->
      <section class="secG">
        <div class="container">
          <div class="heading">
            <span class="eyebrow">
              <span class="eyebrow-line"></span>
              HOW WE WORK
            </span>

            <h3>Our SEO Process <span>That Drives Growth.</span></h3>

            <p>
              Every step has a purpose, from understanding your business to
              refining the strategy over time.
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
                <span class="secG-kicker">DISCOVER</span>
                <h4>Understand Your Business</h4>
                <p>
                  We start by understanding your business, your audience and
                  your SEO goals so the strategy is built on the right
                  foundation.
                </p>

                <div class="secG-details">
                  <span>Business</span>
                  <span>Audience</span>
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
                <span class="secG-kicker">AUDIT</span>
                <h4>Find What Is Holding You Back</h4>
                <p>
                  We review your website to find technical, content and
                  visibility opportunities that can improve your search
                  performance.
                </p>

                <div class="secG-details">
                  <span>Technical Audit</span>
                  <span>Content Review</span>
                  <span>Visibility</span>
                </div>
              </div>

              <div class="secG-side">
                <span>02</span>
                <strong>Insight</strong>
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
                <span class="secG-kicker">STRATEGIZE</span>
                <h4>Plan What Matters Most</h4>
                <p>
                  We plan the keywords, content and priorities that matter, so
                  every action is tied to a clear goal.
                </p>

                <div class="secG-details">
                  <span>Keywords</span>
                  <span>Content Plan</span>
                  <span>Priorities</span>
                </div>
              </div>

              <div class="secG-side">
                <span>03</span>
                <strong>Direction</strong>
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
                <span class="secG-kicker">OPTIMIZE</span>
                <h4>Strengthen Your Website</h4>
                <p>
                  We improve your website, your pages and your technical SEO
                  foundation so search engines and users can find and use your
                  content easily.
                </p>

                <div class="secG-details">
                  <span>On-Page</span>
                  <span>Technical Fixes</span>
                  <span>Implementation</span>
                </div>
              </div>

              <div class="secG-side">
                <span>04</span>
                <strong>Optimization</strong>
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
                <span class="secG-kicker">BUILD VISIBILITY</span>
                <h4>Grow Your Online Presence</h4>
                <p>
                  We strengthen your presence with useful content and relevant
                  visibility that builds trust with search engines and your
                  audience.
                </p>

                <div class="secG-details">
                  <span>Content</span>
                  <span>Off-Page</span>
                  <span>Outreach</span>
                </div>
              </div>

              <div class="secG-side">
                <span>05</span>
                <strong>Visibility</strong>
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
                <span class="secG-kicker">MEASURE &amp; REFINE</span>
                <h4>Track, Learn And Improve</h4>
                <p>
                  We track performance and refine the strategy over time so your
                  results keep improving as your business grows.
                </p>

                <div class="secG-details">
                  <span>Reporting</span>
                  <span>Analysis</span>
                  <span>Refinement</span>
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
     09 — secH — SEO APPLICATIONS / INDUSTRIES
============================================================= -->
      <section class="secH">
        <div class="container">
          <div class="heading">
            <span class="eyebrow">
              <span class="eyebrow-line"></span>
              SEO FOR DIFFERENT BUSINESSES
            </span>

            <h3>
              SEO Strategies For Different
              <span> Business Goals.</span>
            </h3>

            <p>
              SEO priorities differ based on your business model, audience,
              website structure and search intent.
            </p>
          </div>

          <ul class="secH-grid">
            <!-- Education & Coaching -->
            <li>
              <a href="{{ route('education-coaching') }}">
                <img
                  src="assets/images/website/education.jpg"
                  alt="Education and coaching business"
                  loading="lazy"
                />

                <span class="secH-name">Education &amp; Coaching</span>
                <span class="secH-desc">
                  Course discovery, admissions and learning-focused websites.
                </span>
              </a>
            </li>

            <!-- Retail, E-Commerce & D2C -->
            <li>
              <a href="{{ route('retail-E-Commerce-D2C') }}">
                <img
                  src="assets/images/website/retail.jpg"
                  alt="Retail and e-commerce business"
                  loading="lazy"
                />

                <span class="secH-name">Retail, E-Commerce &amp; D2C</span>
                <span class="secH-desc">
                  Product-led experiences designed to showcase and sell online.
                </span>
              </a>
            </li>

            <!-- Real Estate -->
            <li>
              <a href="{{ route('real-state') }}">
                <img
                  src="assets/images/website/realstate.jpg"
                  alt="Real estate business"
                  loading="lazy"
                />

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
                <img
                  src="assets/images/website/healthcare.jpg"
                  alt="Healthcare and clinic business"
                  loading="lazy"
                />

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
                <img
                  src="assets/images/website/ngo.jpg"
                  alt="NGO and non-profit organisation"
                  loading="lazy"
                />

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
                <img
                  src="assets/images/website/manufacturing.jpg"
                  alt="Manufacturing and export business"
                  loading="lazy"
                />

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
                <img
                  src="assets/images/website/hotel.jpg"
                  alt="Hotels and hospitality business"
                  loading="lazy"
                />

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
                <img
                  src="assets/images/website/travel.jpg"
                  alt="Travel and tourism business"
                  loading="lazy"
                />

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
     14 — secN — SEO FAQS
============================================================= -->
      <section class="secN">
        <div class="container">
          <div class="heading">
            <h3>Frequently Asked Questions <span>About SEO.</span></h3>
            <p>Everything you should know before getting started.</p>
          </div>

          <div class="accordion-wrapper">
            <div class="accordion-item">
              <div class="accordion-header">
                <div class="faq-question">
                  <h4>What is SEO and how does it work?</h4>
                </div>
                <span class="accordion-icon">+</span>
              </div>
              <div class="accordion-content">
                <p>
                  SEO improves how search engines understand and rank your
                  website by optimizing content, structure and technical
                  foundations so relevant users can find your business through
                  search.
                </p>
              </div>
            </div>

            <div class="accordion-item">
              <div class="accordion-header">
                <div class="faq-question">
                  <h4>How long does SEO take to show results?</h4>
                </div>
                <span class="accordion-icon">+</span>
              </div>
              <div class="accordion-content">
                <p>
                  SEO is a gradual process. Timelines vary based on your
                  website's starting point, competition, search demand and how
                  consistently SEO improvements are implemented.
                </p>
              </div>
            </div>

            <div class="accordion-item">
              <div class="accordion-header">
                <div class="faq-question">
                  <h4>
                    What is the difference between on-page and off-page SEO?
                  </h4>
                </div>
                <span class="accordion-icon">+</span>
              </div>
              <div class="accordion-content">
                <p>
                  On-page SEO focuses on website content, titles, structure and
                  internal optimization, while off-page SEO focuses on external
                  signals such as relevant links, mentions and overall
                  authority.
                </p>
              </div>
            </div>

            <div class="accordion-item">
              <div class="accordion-header">
                <div class="faq-question">
                  <h4>Why is technical SEO important?</h4>
                </div>
                <span class="accordion-icon">+</span>
              </div>
              <div class="accordion-content">
                <p>
                  Technical SEO helps search engines crawl, understand and index
                  your website properly while improving important foundations
                  such as site structure, performance and accessibility.
                </p>
              </div>
            </div>

            <div class="accordion-item">
              <div class="accordion-header">
                <div class="faq-question">
                  <h4>How do you measure SEO performance?</h4>
                </div>
                <span class="accordion-icon">+</span>
              </div>
              <div class="accordion-content">
                <p>
                  We measure SEO using search visibility, organic traffic,
                  keyword performance, engagement and relevant conversions, then
                  track progress against the goals defined for your business.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- ============================================================
     15 — FINAL CTA
============================================================= -->
      <div class="container">
        <div class="cta-promo">
          <div class="cta-promo__inner">
            <span class="cta-promo__eyebrow"
              >READY TO GROW YOUR ONLINE VISIBILITY?</span
            >
            <h3 class="cta-promo__heading">
              Let's Build a Smarter SEO Strategy for Your Business.
            </h3>
            <p class="cta-promo__sub">
              Connect with our team to discuss your website, SEO goals and
              opportunities for improvement.
            </p>
            <div class="cta-promo__actions">
              <button class="btn btn-white" data-model=".enquire-pop">
                Discuss Your SEO Goals <i>↗</i>
              </button>
              <a href="javascript:void(0)" class="btn btn-outline-white"
                >Connect on WhatsApp <i>↗</i></a
              >
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

@push('scripts')
  
    <script>
      $(function () {
        // ---------- Package features: View all / View less ----------
        $(".ecomPackage-toggle").on("click", function () {
          var $btn = $(this);
          var $more = $btn.prev(".ecomPackage-more");
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
