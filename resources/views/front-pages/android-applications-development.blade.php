@extends('layouts.app')

@push('styles')
  <link rel="stylesheet" href="assets/sass/android/android.css" />
@endpush

@section('content')
  <main>
    <section class="banner">
      <div class="bg">
        <video autoplay muted loop playsinline class="bg-video" src="assets/video/effect6.mp4"
          poster="assets/video/poster/effect6.png">
          <source src="assets/video/effect6.mp4" type="video/mp4" />
        </video>
        <div class="container">
          <div class="banner-wrapper">
            <div class="content">
              <span class="eyebrow">ANDROID APP DEVELOPMENT</span>

              <h1>Android Apps Built Around Your Business &amp; Users.</h1>

              <p>
                We develop custom Android applications that turn your business
                requirements into reliable, easy-to-use mobile experiences.
              </p>

              <div class="banner-actions">
                <a href="javascript:void(0)" class="btn btn-outline-white">
                  Chat on WhatsApp
                  <i>↗</i>
                </a>
                <button class="btn btn-white" data-model=".enquire-pop">
                  Discuss Your App Idea
                  <i>↗</i>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ============================================================
       02 — INTRODUCTION (creative stage)
  ============================================================= -->
    <section class="appIntro" id="app-intro">
      <div class="container">
        <div class="appIntro-top">
          <span class="eyebrow">
            <span class="eyebrow-line"></span>
            ANDROID DEVELOPMENT
          </span>

          <div class="appIntro-top-note">
            <span>MASS REACH · GOOGLE PLAY · EMERGING MARKETS</span>
          </div>
        </div>

        <div class="appIntro-stage">
          <div class="appIntro-background-text" aria-hidden="true">
            ANDROID
          </div>

          <div class="appIntro-heading">
            <span class="eyebrow">
              <span class="eyebrow-line"></span>
              THE ANDROID ADVANTAGE
            </span>

            <h3>
              Build Where
              <span>India's Customers</span>
              Already Are.
            </h3>

            <p>
              Android dominates the smartphone market across India and most
              emerging economies. If your priority is reaching the widest
              possible audience through the Google Play ecosystem — not a
              narrow premium segment — Android is the right platform to build
              on first.
            </p>

            <a href="#app-development-process" class="btn btn-outline-black">
              Explore Our Approach
              <i>↗</i>
            </a>
          </div>

          <div class="appIntro-visual">
            <div class="appIntro-visual-orbit"></div>

            <div class="appIntro-visual-tag">
              <span class="appIntro-visual-tag-dot"></span>
              ANDROID / NATIVE EXPERIENCE
            </div>

            <div class="appIntro-device">
              <div class="appIntro-device-screen">
                <img src="assets/images/mobile/androud-about.jpg" alt="Modern mobile application interface on smartphone"
                  loading="lazy" />
                <div class="appIntro-device-shade"></div>
              </div>
            </div>

            <div class="appIntro-floating-card">
              <div class="appIntro-floating-top">
                <span>APP EXPERIENCE</span>
                <span class="appIntro-floating-status">
                  <span></span>
                  READY
                </span>
              </div>

              <div class="appIntro-floating-line"></div>

              <div class="appIntro-floating-bottom">
                <div class="appIntro-floating-icon">
                  <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <rect x="6" y="3" width="12" height="18" rx="2.5" stroke="currentColor" stroke-width="1.6" />
                    <path d="M10 18H14" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" />
                  </svg>
                </div>

                <div class="appIntro-floating-copy">
                  <strong>Designed for Android</strong>
                  <span>Focused on usability and performance</span>
                </div>
              </div>
            </div>

            <div class="appIntro-orbit-label">
              <span class="appIntro-orbit-label-number">95%+</span>
              <span>ANDROID SMARTPHONE<br />SHARE IN INDIA*</span>
            </div>
          </div>
        </div>

        <div class="appIntro-benefits">
          <div class="appIntro-benefit">
            <span class="appIntro-benefit-number">01</span>
            <div class="appIntro-benefit-content">
              <h4>Widest Possible Reach</h4>
              <p>
                Access the largest smartphone user base across India and
                emerging markets.
              </p>
            </div>
            <span class="appIntro-benefit-arrow">↗</span>
          </div>

          <div class="appIntro-benefit">
            <span class="appIntro-benefit-number">02</span>
            <div class="appIntro-benefit-content">
              <h4>Google Play Ecosystem</h4>
              <p>
                Built for the platform your customers already discover,
                download, and trust.
              </p>
            </div>
            <span class="appIntro-benefit-arrow">↗</span>
          </div>

          <div class="appIntro-benefit">
            <span class="appIntro-benefit-number">03</span>
            <div class="appIntro-benefit-content">
              <h4>Cost-Effective at Scale</h4>
              <p>
                Native Android development built to serve large user volumes
                affordably.
              </p>
            </div>
            <span class="appIntro-benefit-arrow">↗</span>
          </div>
        </div>

        <div class="appIntro-footnote">
          *Android smartphone market share in India is an illustrative
          reference. Confirm the latest source before publishing market
          statistics.
        </div>
      </div>
    </section>

    <section class="classifiedTypes">
      <div class="container">
        <div class="heading">
          <span class="eyebrow">
            <span class="eyebrow-line"></span>
            ANDROID APP SOLUTIONS
          </span>
          <h3>
            Types of Android Apps
            <span>We Build.</span>
          </h3>

          <p>
            From business utilities to customer-focused mobile platforms, we
            develop scalable Android applications designed around your goals,
            users and industry requirements.
          </p>
        </div>

        <div class="classifiedTypes-grid">
          <article class="classifiedTypes-card classifiedTypes-card--featured">
            <img src="assets/images/mobile/android-app1.png" alt="Business and utility Android applications"
              loading="lazy" />

            <div class="classifiedTypes-overlay"></div>

            <div class="classifiedTypes-content">
              <span>01 / BUSINESS SOLUTIONS</span>

              <h4>
                Business &amp; Utility
                <br />
                <span>Apps</span>
              </h4>

              <p>
                Improve productivity and simplify daily operations with custom
                Android apps built for your business workflows.
              </p>

              <div class="classifiedTypes-arrow">↗</div>
            </div>
          </article>

          <article class="classifiedTypes-card">
            <img src="assets/images/mobile/android-app2.png" alt="E-commerce Android application" loading="lazy" />

            <div class="classifiedTypes-overlay"></div>

            <div class="classifiedTypes-content">
              <span>02 / ONLINE SHOPPING</span>

              <h4>
                E-Commerce
                <br />
                Apps
              </h4>

              <p>
                Create seamless shopping experiences with product listings,
                secure payments, carts and order tracking.
              </p>

              <div class="classifiedTypes-arrow">↗</div>
            </div>
          </article>

          <article class="classifiedTypes-card">
            <img src="assets/images/mobile/android-app3.png" alt="On-demand and service Android application"
              loading="lazy" />

            <div class="classifiedTypes-overlay"></div>

            <div class="classifiedTypes-content">
              <span>03 / SERVICE PLATFORMS</span>

              <h4>
                On-Demand &amp;
                <br />
                Service Apps
              </h4>

              <p>
                Connect customers with service providers through convenient
                and scalable on-demand mobile solutions.
              </p>

              <div class="classifiedTypes-arrow">↗</div>
            </div>
          </article>

          <article class="classifiedTypes-card classifiedTypes-card--wide">
            <img src="assets/images/mobile/android-app4.png" alt="Booking and reservation Android application"
              loading="lazy" />

            <div class="classifiedTypes-overlay"></div>

            <div class="classifiedTypes-content">
              <span>04 / RESERVATION SOLUTIONS</span>

              <h4>
                Booking &amp; Reservation
                <span>Apps</span>
              </h4>

              <p>
                Develop easy-to-use booking platforms for appointments,
                hotels, travel, events and service reservations.
              </p>

              <div class="classifiedTypes-arrow">↗</div>
            </div>
          </article>

          <div class="classifiedTypes-more">
            <div class="classifiedTypes-more-content">
              <span>YOUR ANDROID APP IDEA</span>

              <h4>Have A Unique App Requirement?</h4>

              <p>
                Let's build a custom Android application around your business
                model, audience and specific requirements.
              </p>
            </div>

            <button type="button" data-model=".enquire-pop" class="btn btn-outline-black">
              Discuss Your Idea
              <i>↗</i>
            </button>
          </div>
        </div>
      </div>
    </section>

    <section class="appCapabilities" id="appCapabilities">
      <div class="container">
        <div class="heading">
          <span class="eyebrow">
            <span class="eyebrow-line"></span>
            ANDROID APP FEATURES
          </span>
          <h3>
            Core Capabilities Built Into
            <span> Every Android App.</span>
          </h3>
          <p>
            Powerful features and seamless functionality designed to make your
            Android application faster, smarter, and ready for growth.
          </p>
        </div>

        <div class="appCapabilities-grid">
          <article class="appCapabilities-card">
            <div class="appCapabilities-top">
              <span class="appCapabilities-number">01</span>
              <span class="appCapabilities-label">Development</span>
            </div>

            <div class="appCapabilities-content">
              <h4>Native Android (Kotlin/Java)</h4>
              <p>
                High-performance Android applications built with Kotlin and
                Java for smooth, scalable experiences.
              </p>
            </div>

            <div class="appCapabilities-footer">
              <span>Reliable Architecture</span>
              <span class="appCapabilities-arrow">↗</span>
            </div>
          </article>

          <article class="appCapabilities-card">
            <div class="appCapabilities-top">
              <span class="appCapabilities-number">02</span>
              <span class="appCapabilities-label">Publishing</span>
            </div>

            <div class="appCapabilities-content">
              <h4>Play Store Integration</h4>
              <p>
                Application publishing support with Play Store integration,
                configuration and release preparation.
              </p>
            </div>

            <div class="appCapabilities-footer">
              <span>Launch Ready</span>
              <span class="appCapabilities-arrow">↗</span>
            </div>
          </article>

          <article class="appCapabilities-card">
            <div class="appCapabilities-top">
              <span class="appCapabilities-number">03</span>
              <span class="appCapabilities-label">Engagement</span>
            </div>

            <div class="appCapabilities-content">
              <h4>Push Notifications</h4>
              <p>
                Keep users connected with timely, personalised notifications
                and important app updates.
              </p>
            </div>

            <div class="appCapabilities-footer">
              <span>User Engagement</span>
              <span class="appCapabilities-arrow">↗</span>
            </div>
          </article>

          <article class="appCapabilities-card">
            <div class="appCapabilities-top">
              <span class="appCapabilities-number">04</span>
              <span class="appCapabilities-label">Performance</span>
            </div>

            <div class="appCapabilities-content">
              <h4>Offline Functionality</h4>
              <p>
                Deliver dependable app experiences with offline access, local
                storage and smart data synchronisation.
              </p>
            </div>

            <div class="appCapabilities-footer">
              <span>Seamless Experience</span>
              <span class="appCapabilities-arrow">↗</span>
            </div>
          </article>

          <article class="appCapabilities-card">
            <div class="appCapabilities-top">
              <span class="appCapabilities-number">05</span>
              <span class="appCapabilities-label">Transactions</span>
            </div>

            <div class="appCapabilities-content">
              <h4>Payment Gateway Integration</h4>
              <p>
                Secure payment integrations that support smooth transactions
                and convenient checkout experiences.
              </p>
            </div>

            <div class="appCapabilities-footer">
              <span>Secure Payments</span>
              <span class="appCapabilities-arrow">↗</span>
            </div>
          </article>
        </div>
      </div>
    </section>

    <section class="appIntegrations" id="app-integrations">
      <div class="container">
        <div class="heading">
          <span class="appIntegrations-eyebrow">SEAMLESS CONNECTIVITY</span>

          <h3>
            Third-Party Integrations Built
            <span> Around Your Business.</span>
          </h3>

          <p>
            Connect your Android application with essential tools and services
            for better performance, security, and user experience.
          </p>
        </div>

        <div class="appIntegrations-list">
          <article class="appIntegrations-card">
            <div class="appIntegrations-media">
              <img src="assets/images/mobile/api.png" alt="APIs and backend integration" />
            </div>

            <div class="appIntegrations-content">
              <span class="eyebrow">
                <span class="eyebrow-line"></span>
                CORE CONNECTIVITY
              </span>
              <h4>APIs &amp; Backend Integration</h4>
              <p>
                Connect your Android app with databases, websites, and
                business systems. We ensure smooth data exchange, reliable
                performance, and a strong foundation for your application as
                your business grows.
              </p>

              <ul>
                <li>Secure API &amp; database connectivity</li>
                <li>Custom backend integration</li>
                <li>Scalable application architecture</li>
              </ul>

              <a href="javascript:void(0)" class="btn btn-outline-black" data-model=".enquire-pop">
                Discuss Your Integration
                <i>↗</i>
              </a>
            </div>
          </article>

          <article class="appIntegrations-card">
            <div class="appIntegrations-media">
              <img src="assets/images/mobile/third-party.png" alt="Third-party services integration" />
            </div>

            <div class="appIntegrations-content">
              <span class="eyebrow">
                <span class="eyebrow-line"></span>
                SMARTER APP EXPERIENCE
              </span>

              <h4>Third-Party Services Integration</h4>

              <p>
                Add essential services to your Android application, from
                secure payments and OTP verification to maps, notifications,
                and analytics. We connect the right tools to make your app
                more useful and user-friendly.
              </p>

              <ul>
                <li>Payment gateway &amp; OTP integration</li>
                <li>Maps, notifications &amp; analytics</li>
                <li>Secure and seamless user experience</li>
              </ul>

              <a href="javascript:void(0)" class="btn btn-outline-black" data-model=".enquire-pop">
                Explore Integration Options
                <i>↗</i>
              </a>
            </div>
          </article>
        </div>
      </div>
    </section>

    <!-- ============================================================
       WEBSITE → MOBILE APP — Digital Experience Evolution
  ============================================================= -->
    <section class="appJourney">
      <div class="container">
        <div class="heading">
          <span class="eyebrow"><span class="eyebrow-line"></span>DIGITAL EXPERIENCE
            EVOLUTION</span>
          <h3>
            Your Website Gets Discovered.<br /><span>Your App Keeps Users Connected.</span>
          </h3>
          <p>
            Your website helps customers discover your business, explore your
            offerings, and build trust. A mobile app takes the next step by
            delivering faster access, personalised experiences, and meaningful
            engagement.
          </p>
        </div>

        <!-- ======================================================
           STAGE — Laptop (real device) → Connector → Phone (real device)
      ======================================================= -->
        <div class="appJourney-stage">
          <!-- LEFT — WEBSITE, on a real laptop device -->
          <div class="appJourney-panel appJourney-panel--laptop">
            <span class="appJourney-step">01 · Discovery</span>

            <span class="appJourney-float appJourney-float--search">
              <span class="appJourney-float-icon">
                <svg viewBox="0 0 24 24">
                  <circle cx="11" cy="11" r="7" />
                  <path d="M21 21l-4.3-4.3" />
                </svg>
              </span>
              <span class="appJourney-float-copy">
                <span>SEARCH</span>
                <strong>Discovery</strong>
              </span>
            </span>

            <span class="appJourney-float appJourney-float--visitors">
              <span class="appJourney-float-icon">
                <svg viewBox="0 0 24 24">
                  <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" />
                  <circle cx="9" cy="7" r="4" />
                  <path d="M22 21v-2a4 4 0 0 0-3-3.87" />
                  <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                </svg>
              </span>
              <span class="appJourney-float-copy">
                <span>WEBSITE REACH</span>
                <strong>+2,400 Visitors</strong>
              </span>
            </span>

            <div class="appJourney-laptop">
              <div class="appJourney-laptop-lid">
                <span class="appJourney-laptop-cam"></span>

                <div class="appJourney-laptop-screen">
                  <div class="appJourney-screen-topbar">
                    <span class="appJourney-screen-dots"><i></i><i></i><i></i></span>
                    <span class="appJourney-screen-url">yourbusiness.com</span>
                    <span class="appJourney-screen-live">Live</span>
                  </div>

                  <div class="appJourney-screen-nav">
                    <span class="appJourney-screen-logo"></span>
                    <span class="appJourney-screen-navlink">Home</span>
                    <span class="appJourney-screen-navlink">Services</span>
                    <span class="appJourney-screen-navlink">About</span>
                    <span class="appJourney-screen-navcta">Contact</span>
                  </div>

                  <div class="appJourney-screen-feature">
                    <div class="appJourney-screen-feature-copy">
                      <span>TRUSTED BY 2,400+ CLIENTS</span>
                      <strong>Grow Your<br />Business Online</strong>
                      <small>Reach new customers effortlessly.</small>
                      <span class="appJourney-screen-btn">Get Started</span>
                    </div>
                    <div class="appJourney-screen-feature-art">
                      <span></span>
                      <span></span>
                    </div>
                  </div>

                  <div class="appJourney-screen-section-head">
                    <strong>What We Offer</strong>
                    <span>View all</span>
                  </div>

                  <div class="appJourney-screen-cards appJourney-screen-cards--triple">
                    <div class="appJourney-screen-card">
                      <span class="appJourney-screen-card-icon">
                        <svg viewBox="0 0 24 24">
                          <path d="M13 2 3 14h7l-1 8 11-14h-7l0-6z" />
                        </svg>
                      </span>
                      <strong>Fast Delivery</strong>
                      <small>Learn more</small>
                    </div>
                    <div class="appJourney-screen-card">
                      <span class="appJourney-screen-card-icon">
                        <svg viewBox="0 0 24 24">
                          <circle cx="12" cy="12" r="9" />
                          <path d="M12 7v5l3 3" />
                        </svg>
                      </span>
                      <strong>24/7 Support</strong>
                      <small>Learn more</small>
                    </div>
                    <div class="appJourney-screen-card">
                      <span class="appJourney-screen-card-icon">
                        <svg viewBox="0 0 24 24">
                          <rect x="3" y="6" width="18" height="13" rx="2" />
                          <path d="M3 10h18" />
                        </svg>
                      </span>
                      <strong>Secure Payments</strong>
                      <small>Learn more</small>
                    </div>
                  </div>
                </div>
              </div>

              <div class="appJourney-laptop-hinge"></div>
              <div class="appJourney-laptop-base"></div>
            </div>

            <span class="appJourney-tag">Website Experience</span>
          </div>

          <!-- CENTER — CONNECTOR -->
          <div class="appJourney-connect" aria-hidden="true">
            <svg viewBox="0 0 200 300" class="appJourney-connect-svg" xmlns="http://www.w3.org/2000/svg">
              <path class="aj-curve" d="M -10 30 C 80 30, 40 120, 100 150 C 160 180, 120 270, 210 270" fill="none"
                stroke="color-mix(in srgb, var(--primary) 32%, transparent)" stroke-width="2" stroke-dasharray="5 8" />

              <circle class="aj-particle" r="3.5" fill="var(--primary)">
                <animateMotion dur="3s" repeatCount="indefinite"
                  path="M -10 30 C 80 30, 40 120, 100 150 C 160 180, 120 270, 210 270" />
              </circle>
              <circle class="aj-particle" r="3.5" fill="var(--primary)" opacity="0.6">
                <animateMotion dur="3s" begin="1.5s" repeatCount="indefinite"
                  path="M -10 30 C 80 30, 40 120, 100 150 C 160 180, 120 270, 210 270" />
              </circle>

              <circle class="aj-ring" cx="100" cy="150" r="30" fill="none"
                stroke="color-mix(in srgb, var(--primary) 25%, transparent)" />
              <circle class="aj-ring aj-ring-2" cx="100" cy="150" r="30" fill="none"
                stroke="color-mix(in srgb, var(--primary) 25%, transparent)" />
              <circle cx="100" cy="150" r="30" fill="var(--white)"
                stroke="color-mix(in srgb, var(--primary) 32%, transparent)" />
              <path d="M 92 138 L 110 150 L 92 162" fill="none" stroke="var(--primary)" stroke-width="2.4"
                stroke-linecap="round" stroke-linejoin="round" />
            </svg>

            <div class="appJourney-connect-label">
              <strong>Connect</strong>
              <span>From Discovery to Engagement</span>
            </div>
          </div>

          <!-- RIGHT — APP, on a real phone device -->
          <div class="appJourney-panel appJourney-panel--phone">
            <span class="appJourney-step appJourney-step--app">02 · Engagement</span>

            <div class="appJourney-phone">
              <div class="appJourney-phone-speaker"></div>

              <div class="appJourney-phone-screen">
                <div class="appJourney-screen-status">
                  <span>9:41</span>
                  <span>● ● ▰</span>
                </div>

                <div class="appJourney-screen-header">
                  <div>
                    <span class="appJourney-screen-greeting">WELCOME BACK</span>
                    <h4>Hi, Daisy.</h4>
                  </div>
                  <span class="appJourney-screen-avatar">D</span>
                </div>

                <div class="appJourney-screen-feature">
                  <div class="appJourney-screen-feature-copy">
                    <span>JUST FOR YOU</span>
                    <strong>20% Off Your<br />Next Order</strong>
                    <small>Personalised offer, today only.</small>
                  </div>
                  <div class="appJourney-screen-feature-art">
                    <span></span>
                    <span></span>
                  </div>
                </div>

                <div class="appJourney-screen-section-head">
                  <strong>Quick Access</strong>
                  <span>View all</span>
                </div>

                <div class="appJourney-screen-cards appJourney-screen-cards--double">
                  <div class="appJourney-screen-card">
                    <span class="appJourney-screen-card-icon">✓</span>
                    <strong>Orders</strong>
                    <small>3 active</small>
                  </div>
                  <div class="appJourney-screen-card">
                    <span class="appJourney-screen-card-icon">♡</span>
                    <strong>Saved</strong>
                    <small>12 items</small>
                  </div>
                </div>

                <div class="appJourney-screen-progress">
                  <div class="appJourney-screen-progress-top">
                    <span>Loyalty Progress</span>
                    <strong>72%</strong>
                  </div>
                  <span class="appJourney-screen-progress-bar"><i></i></span>
                </div>

                <div class="appJourney-screen-bottom">
                  <span class="active">⌂</span>
                  <span>◌</span>
                  <span>♡</span>
                  <span>☰</span>
                </div>
              </div>
            </div>

            <span class="appJourney-float appJourney-float--notify">
              <span class="appJourney-float-dot"></span>
              <span class="appJourney-float-copy">
                <span>NEW NOTIFICATION</span>
                <strong>Your order is on the way</strong>
              </span>
            </span>
          </div>
        </div>

        <!-- ======================================================
           COMPARISON — Website vs Mobile App (unified table)
      ======================================================= -->
        <div class="appJourney-compare">
          <div class="appJourney-compare-head">
            <h3>A Better Experience for Returning Users</h3>
            <p>
              A website is essential for discovery and accessibility. A mobile
              app can provide additional value when customers regularly
              interact with your business and benefit from faster,
              personalised access.
            </p>
          </div>

          <div class="appJourney-table">
            <div class="appJourney-table-head">
              <span class="appJourney-table-head-label">What Matters</span>
              <span class="appJourney-table-head-col">
                <svg viewBox="0 0 24 24">
                  <rect x="3" y="4" width="18" height="13" rx="2" />
                  <path d="M8 21h8M12 17v4" />
                </svg>
                Website
              </span>
              <span class="appJourney-table-head-col appJourney-table-head-col--app">
                <svg viewBox="0 0 24 24">
                  <rect x="6" y="2" width="12" height="20" rx="3" />
                  <path d="M11 18h2" />
                </svg>
                Mobile App
              </span>
            </div>

            <div class="appJourney-table-row">
              <span class="appJourney-table-row-label">
                <strong>Getting Discovered</strong>
                <small>How new customers find you</small>
              </span>
              <span class="appJourney-table-cell" data-label="Website">
                <i class="appJourney-table-check"></i>
                Search engine visibility
              </span>
              <span class="appJourney-table-cell appJourney-table-cell--app" data-label="Mobile App">
                <i class="appJourney-table-check appJourney-table-check--app"></i>
                Faster access from home screen
              </span>
            </div>

            <div class="appJourney-table-row">
              <span class="appJourney-table-row-label">
                <strong>Getting In</strong>
                <small>Effort needed to start using it</small>
              </span>
              <span class="appJourney-table-cell" data-label="Website">
                <i class="appJourney-table-check"></i>
                Easy access without installation
              </span>
              <span class="appJourney-table-cell appJourney-table-cell--app" data-label="Mobile App">
                <i class="appJourney-table-check appJourney-table-check--app"></i>
                One tap, always signed in
              </span>
            </div>

            <div class="appJourney-table-row">
              <span class="appJourney-table-row-label">
                <strong>Staying in Touch</strong>
                <small>How you reach your customers</small>
              </span>
              <span class="appJourney-table-cell" data-label="Website">
                <i class="appJourney-table-check"></i>
                Brand awareness over time
              </span>
              <span class="appJourney-table-cell appJourney-table-cell--app" data-label="Mobile App">
                <i class="appJourney-table-check appJourney-table-check--app"></i>
                Push notifications, direct and instant
              </span>
            </div>

            <div class="appJourney-table-row">
              <span class="appJourney-table-row-label">
                <strong>The Experience</strong>
                <small>How personal it feels</small>
              </span>
              <span class="appJourney-table-cell" data-label="Website">
                <i class="appJourney-table-check"></i>
                Same content and services for everyone
              </span>
              <span class="appJourney-table-cell appJourney-table-cell--app" data-label="Mobile App">
                <i class="appJourney-table-check appJourney-table-check--app"></i>
                Saved preferences and activity
              </span>
            </div>

            <div class="appJourney-table-row">
              <span class="appJourney-table-row-label">
                <strong>Coming Back</strong>
                <small>What brings customers back</small>
              </span>
              <span class="appJourney-table-cell" data-label="Website">
                <i class="appJourney-table-check"></i>
                Great first-time impression
              </span>
              <span class="appJourney-table-cell appJourney-table-cell--app" data-label="Mobile App">
                <i class="appJourney-table-check appJourney-table-check--app"></i>
                Stronger repeat engagement
              </span>
            </div>
          </div>

          <p class="appJourney-compare-note">
            The right solution depends on your customers' behaviour and your
            business goals — a mobile app adds the most value once people are
            already coming back.
          </p>
        </div>
      </div>
    </section>

    <section class="androidCta" id="androidCta">
      <div class="container">
        <div class="androidCta-card">
          <div class="androidCta-grid"></div>

          <div class="androidCta-content">
            <span class="eyebrow">
              <span class="eyebrow-line"></span>
              ANDROID &amp; IOS APPLICATION
            </span>
            <h2>
              Turn Your Ideas
              <span>Into Powerful Apps.</span>
            </h2>

            <p>
              Build a seamless mobile experience that connects your business
              with customers everywhere. From intuitive designs and native
              Android development to secure integrations and scalable
              functionality, we create applications designed to perform,
              engage, and grow with your business.
            </p>

            <div class="androidCta-actions">
              <button data-model=".enquire-pop" class="btn btn-black">
                Start Your App Project
                <i>↗</i>
              </button>

              <a href="javascript:void()" class="btn btn-outline-black">
                Whatsapp Now
              </a>
            </div>
          </div>

          <div class="androidCta-visual">
            <div class="androidCta-shape"></div>

            <div class="androidCta-image">
              <img src="assets/images/mobile/chat-android.png" alt="Mobile application interface" />
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ============================================================
       07 — OUR DEVELOPMENT PROCESS
  ============================================================= -->
    <section class="secG" id="app-development-process">
      <div class="container">
        <div class="heading">
          <span class="eyebrow">
            <span class="eyebrow-line"></span>
            OUR PROCESS
          </span>

          <h3>Our Android App <span>Development Process.</span></h3>

          <p>
            A structured process that takes your app from idea to Play Store,
            and beyond.
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
              <span class="secG-kicker">DISCOVERY &amp; REQUIREMENT ANALYSIS</span>
              <h4>Understand Before You Design</h4>
              <p>
                We understand your business goals, target users and app scope
                before any design begins.
              </p>

              <div class="secG-details">
                <span>Scope</span>
                <span>Users</span>
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
                  <path d="M5 19 19 5"></path>
                  <path d="m7 5 12 12"></path>
                  <path d="M5 12h4"></path>
                  <path d="M15 12h4"></path>
                </svg>
              </div>
            </div>

            <div class="secG-info">
              <span class="secG-kicker">UI/UX DESIGN</span>
              <h4>Design Around Real User Flows</h4>
              <p>
                We create wireframes and Material Design-based interfaces
                built around real user flows.
              </p>

              <div class="secG-details">
                <span>Wireframes</span>
                <span>Prototyping</span>
                <span>Material Design</span>
              </div>
            </div>

            <div class="secG-side">
              <span>02</span>
              <strong>Experience</strong>
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
              <span class="secG-kicker">NATIVE ANDROID DEVELOPMENT</span>
              <h4>Build For Performance And Stability</h4>
              <p>
                We develop in Kotlin and Java, built for performance,
                stability and long-term maintainability.
              </p>

              <div class="secG-details">
                <span>Kotlin</span>
                <span>Java</span>
                <span>Architecture</span>
              </div>
            </div>

            <div class="secG-side">
              <span>03</span>
              <strong>Build</strong>
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
              <span class="secG-kicker">API INTEGRATION &amp; BACKEND CONNECTIVITY</span>
              <h4>Connect The App To Your Systems</h4>
              <p>
                We connect the app to your backend, database and any
                third-party services it requires.
              </p>

              <div class="secG-details">
                <span>APIs</span>
                <span>Backend</span>
                <span>Data</span>
              </div>
            </div>

            <div class="secG-side">
              <span>04</span>
              <strong>Integration</strong>
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
              <span class="secG-kicker">QA &amp; TESTING</span>
              <h4>Test Before Anything Goes Live</h4>
              <p>
                We run device testing, performance checks and bug fixes before
                your app is released.
              </p>

              <div class="secG-details">
                <span>Testing</span>
                <span>Devices</span>
                <span>Performance</span>
              </div>
            </div>

            <div class="secG-side">
              <span>05</span>
              <strong>Quality</strong>
            </div>
          </article>

          <article class="secG-step secG-step-last">
            <div class="secG-marker">
              <div class="secG-icon">
                <svg viewBox="0 0 24 24" aria-hidden="true">
                  <path d="M12 19V5"></path>
                  <path d="m7 10 5-5 5 5"></path>
                  <path d="M5 19h14"></path>
                </svg>
              </div>
            </div>

            <div class="secG-info">
              <span class="secG-kicker">PLAY STORE DEPLOYMENT &amp; SUPPORT</span>
              <h4>Launch And Keep Supporting</h4>
              <p>
                We handle store submission and launch, then stay on with
                ongoing support once your app is live.
              </p>

              <div class="secG-details">
                <span>Launch</span>
                <span>Play Store</span>
                <span>Support</span>
              </div>
            </div>

            <div class="secG-side">
              <span>06</span>
              <strong>Launch</strong>
            </div>
          </article>
        </div>
      </div>
    </section>

    <!-- ============================================================
       08 — OUR ANDROID APP WORK / PORTFOLIO
  ============================================================= -->
    <section class="secC">
      <div class="container">
        <div class="heading">
          <span class="eyebrow">
            <span class="eyebrow-line"></span>
            ANDROID APP PORTFOLIO
          </span>

          <h3>
            Android Apps Built<br />
            <span>Around Your Business.</span>
          </h3>

          <p>
            From business utilities to shopping, service and booking
            experiences, we build Android apps around your users and business
            goals.
          </p>
        </div>

        <div class="swiper-wrapped">
          <div class="swiper secC-swiper">
            <div class="swiper-wrapper">
              <!-- 01 — TORA - CAR RENTAL APP -->
              <div class="swiper-slide">
                <div class="secC-panel">
                  <div class="secC-panel__media">
                    <img src="assets/images/mobile/androidApp1.png" alt="Tora car rental mobile app" loading="lazy" />
                  </div>

                  <div class="secC-panel__body">
                    <div class="secC-panel__text">
                      <h4>Tora - Car Rental App</h4>
                      <p>
                        A car rental app to browse, compare and book cars near
                        you, with exclusive offers and easy payments.
                      </p>
                    </div>

                    <div class="secC-panel__actions">
                      <a href="javascript:void(0)" class="btn btn-outline-black"><svg xmlns="http://www.w3.org/2000/svg"
                          width="0.88em" height="1em" viewBox="0 0 448 512">
                          <path d="M0 0h448v512H0z" fill="none"></path>
                          <path fill="currentColor"
                            d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222c0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222c0-59.3-25.2-115-67.1-157m-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4l-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2c0-101.7 82.8-184.5 184.6-184.5c49.3 0 95.6 19.2 130.4 54.1s56.2 81.2 56.1 130.5c0 101.8-84.9 184.6-186.6 184.6m101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18c-5.1-1.9-8.8-2.8-12.5 2.8s-14.3 18-17.6 21.8c-3.2 3.7-6.5 4.2-12 1.4c-32.6-16.3-54-29.1-75.5-66c-5.7-9.8 5.7-9.1 16.3-30.3c1.8-3.7.9-6.9-.5-9.7s-12.5-30.1-17.1-41.2c-4.5-10.8-9.1-9.3-12.5-9.5c-3.2-.2-6.9-.2-10.6-.2s-9.7 1.4-14.8 6.9c-5.1 5.6-19.4 19-19.4 46.3s19.9 53.7 22.6 57.4c2.8 3.7 39.1 59.7 94.8 83.8c35.2 15.2 49 16.5 66.6 13.9c10.7-1.6 32.8-13.4 37.4-26.4s4.6-24.1 3.2-26.4c-1.3-2.5-5-3.9-10.5-6.6">
                          </path>
                        </svg></a>
                      <button type="button" class="btn btn-black" data-model=".enquire-pop">
                        Get a Quote
                      </button>
                    </div>
                  </div>
                </div>
              </div>

              <!-- 02 — WELOPIA - HEALTHCARE APP -->
              <div class="swiper-slide">
                <div class="secC-panel">
                  <div class="secC-panel__media">
                    <img src="assets/images/mobile/androidApp2.png" alt="Wellopia healthcare mobile app" loading="lazy" />
                  </div>

                  <div class="secC-panel__body">
                    <div class="secC-panel__text">
                      <h4>Wellopia - Healthcare App</h4>
                      <p>
                        A healthcare app with OTP login, health score tools,
                        appointment booking and a directory of trusted
                        doctors.
                      </p>
                    </div>

                    <div class="secC-panel__actions">
                      <a href="javascript:void(0)" class="btn btn-outline-black"><svg xmlns="http://www.w3.org/2000/svg"
                          width="0.88em" height="1em" viewBox="0 0 448 512">
                          <path d="M0 0h448v512H0z" fill="none"></path>
                          <path fill="currentColor"
                            d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222c0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222c0-59.3-25.2-115-67.1-157m-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4l-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2c0-101.7 82.8-184.5 184.6-184.5c49.3 0 95.6 19.2 130.4 54.1s56.2 81.2 56.1 130.5c0 101.8-84.9 184.6-186.6 184.6m101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18c-5.1-1.9-8.8-2.8-12.5 2.8s-14.3 18-17.6 21.8c-3.2 3.7-6.5 4.2-12 1.4c-32.6-16.3-54-29.1-75.5-66c-5.7-9.8 5.7-9.1 16.3-30.3c1.8-3.7.9-6.9-.5-9.7s-12.5-30.1-17.1-41.2c-4.5-10.8-9.1-9.3-12.5-9.5c-3.2-.2-6.9-.2-10.6-.2s-9.7 1.4-14.8 6.9c-5.1 5.6-19.4 19-19.4 46.3s19.9 53.7 22.6 57.4c2.8 3.7 39.1 59.7 94.8 83.8c35.2 15.2 49 16.5 66.6 13.9c10.7-1.6 32.8-13.4 37.4-26.4s4.6-24.1 3.2-26.4c-1.3-2.5-5-3.9-10.5-6.6">
                          </path>
                        </svg></a>
                      <button type="button" class="btn btn-black" data-model=".enquire-pop">
                        Get a Quote
                      </button>
                    </div>
                  </div>
                </div>
              </div>

              <!-- 03 — PRAYAG SANGAM NEWS -->
              <div class="swiper-slide">
                <div class="secC-panel">
                  <div class="secC-panel__media">
                    <img src="assets/images/mobile/androidApp3.png" alt="Prayag Sangam News mobile app" loading="lazy" />
                  </div>

                  <div class="secC-panel__body">
                    <div class="secC-panel__text">
                      <h4>Prayag Sangam News</h4>
                      <p>
                        A multi-language news app with secure sign-in, live
                        updates, bookmarks and instant notifications.
                      </p>
                    </div>

                    <div class="secC-panel__actions">
                      <a href="javascript:void(0)" class="btn btn-outline-black"><svg xmlns="http://www.w3.org/2000/svg"
                          width="0.88em" height="1em" viewBox="0 0 448 512">
                          <path d="M0 0h448v512H0z" fill="none"></path>
                          <path fill="currentColor"
                            d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222c0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222c0-59.3-25.2-115-67.1-157m-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4l-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2c0-101.7 82.8-184.5 184.6-184.5c49.3 0 95.6 19.2 130.4 54.1s56.2 81.2 56.1 130.5c0 101.8-84.9 184.6-186.6 184.6m101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18c-5.1-1.9-8.8-2.8-12.5 2.8s-14.3 18-17.6 21.8c-3.2 3.7-6.5 4.2-12 1.4c-32.6-16.3-54-29.1-75.5-66c-5.7-9.8 5.7-9.1 16.3-30.3c1.8-3.7.9-6.9-.5-9.7s-12.5-30.1-17.1-41.2c-4.5-10.8-9.1-9.3-12.5-9.5c-3.2-.2-6.9-.2-10.6-.2s-9.7 1.4-14.8 6.9c-5.1 5.6-19.4 19-19.4 46.3s19.9 53.7 22.6 57.4c2.8 3.7 39.1 59.7 94.8 83.8c35.2 15.2 49 16.5 66.6 13.9c10.7-1.6 32.8-13.4 37.4-26.4s4.6-24.1 3.2-26.4c-1.3-2.5-5-3.9-10.5-6.6">
                          </path>
                        </svg></a>
                      <button type="button" class="btn btn-black" data-model=".enquire-pop">
                        Get a Quote
                      </button>
                    </div>
                  </div>
                </div>
              </div>

              <!-- 04 — STREAMBOX - VIDEO STREAMING APP -->
              <div class="swiper-slide">
                <div class="secC-panel">
                  <div class="secC-panel__media">
                    <img src="assets/images/mobile/androidApp4.png" alt="StreamBox video streaming mobile app"
                      loading="lazy" />
                  </div>

                  <div class="secC-panel__body">
                    <div class="secC-panel__text">
                      <h4>StreamBox - Video Streaming App</h4>
                      <p>
                        A video streaming app with movie and series listings,
                        a smooth video player and subscription plans.
                      </p>
                    </div>

                    <div class="secC-panel__actions">
                      <a href="javascript:void(0)" class="btn btn-outline-black"><svg xmlns="http://www.w3.org/2000/svg"
                          width="0.88em" height="1em" viewBox="0 0 448 512">
                          <path d="M0 0h448v512H0z" fill="none"></path>
                          <path fill="currentColor"
                            d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222c0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222c0-59.3-25.2-115-67.1-157m-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4l-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2c0-101.7 82.8-184.5 184.6-184.5c49.3 0 95.6 19.2 130.4 54.1s56.2 81.2 56.1 130.5c0 101.8-84.9 184.6-186.6 184.6m101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18c-5.1-1.9-8.8-2.8-12.5 2.8s-14.3 18-17.6 21.8c-3.2 3.7-6.5 4.2-12 1.4c-32.6-16.3-54-29.1-75.5-66c-5.7-9.8 5.7-9.1 16.3-30.3c1.8-3.7.9-6.9-.5-9.7s-12.5-30.1-17.1-41.2c-4.5-10.8-9.1-9.3-12.5-9.5c-3.2-.2-6.9-.2-10.6-.2s-9.7 1.4-14.8 6.9c-5.1 5.6-19.4 19-19.4 46.3s19.9 53.7 22.6 57.4c2.8 3.7 39.1 59.7 94.8 83.8c35.2 15.2 49 16.5 66.6 13.9c10.7-1.6 32.8-13.4 37.4-26.4s4.6-24.1 3.2-26.4c-1.3-2.5-5-3.9-10.5-6.6">
                          </path>
                        </svg></a>
                      <button type="button" class="btn btn-black" data-model=".enquire-pop">
                        Get a Quote
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="swiper-group">
            <button type="button" class="secC-prev btn-prev" tabindex="0" aria-label="Previous slide">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1024 1024">
                <path fill="#ffff"
                  d="M609.408 149.376L277.76 489.6a32 32 0 0 0 0 44.672l331.648 340.352a29.12 29.12 0 0 0 41.728 0a30.59 30.59 0 0 0 0-42.752L339.264 511.936l311.872-319.872a30.59 30.59 0 0 0 0-42.688a29.12 29.12 0 0 0-41.728 0">
                </path>
              </svg>
            </button>

            <button type="button" class="secC-next btn-next" tabindex="0" aria-label="Next slide">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1024 1024">
                <path fill="#ffff"
                  d="M609.408 149.376L277.76 489.6a32 32 0 0 0 0 44.672l331.648 340.352a29.12 29.12 0 0 0 41.728 0a30.59 30.59 0 0 0 0-42.752L339.264 511.936l311.872-319.872a30.59 30.59 0 0 0 0-42.688a29.12 29.12 0 0 0-41.728 0">
                </path>
              </svg>
            </button>
          </div>
        </div>
      </div>
    </section>
    <!-- ============================================================
       09 — INDUSTRIES
  ============================================================= -->
    <section class="secH">
      <div class="container">
        <div class="heading">
          <span class="eyebrow">
            <span class="eyebrow-line"></span>
            INDUSTRIES WE SERVE
          </span>
          <h3>Industries We Build <span>Android Apps For.</span></h3>
          <p>
            Different industries need different app priorities — we adapt the
            build accordingly.
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
       10 — WHY WEB MINGO
  ============================================================= -->
    <section class="secL">
      <div class="container">
        <div class="heading">
          <span class="eyebrow"><span class="eyebrow-line"></span>WHY WEB MINGO</span>
          <h3>
            An Android Partner That Understands<span>
              Performance and Play Store Standards.</span>
          </h3>
          <p>
            No generic templates, no guesswork on compliance — just a native
            build process that gets your app approved and used at scale.
          </p>
        </div>

        <ul class="secL-list">
          <li>
            <span class="secL-icon"><svg viewBox="0 0 24 24">
                <path d="M12 3l8 4v6c0 5-3.5 7.5-8 9-4.5-1.5-8-4-8-9V7l8-4z" />
                <path d="M8 12l3 3 5-6" />
              </svg></span>
            <div>
              <h4>Native Performance Expertise</h4>
              <p>
                Built with Kotlin/Java for speed and stability, not a
                cross-platform compromise.
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
              <h4>End-to-End Play Store Support</h4>
              <p>
                From listing setup to compliance review, we handle the
                submission process.
              </p>
            </div>
          </li>
          <li>
            <span class="secL-icon"><svg viewBox="0 0 24 24">
                <rect x="4" y="4" width="16" height="16" rx="2" />
                <path d="M8 9h8M8 13h5M8 17h3" />
              </svg></span>
            <div>
              <h4>Backend + App Under One Roof</h4>
              <p>
                App and API development handled by the same team — fewer
                handoffs, faster fixes.
              </p>
            </div>
          </li>
          <li>
            <span class="secL-icon"><svg viewBox="0 0 24 24">
                <path d="M3 3v18h18" />
                <path d="M7 15l4-5 3 3 6-8" />
              </svg></span>
            <div>
              <h4>Built for India-Scale Traffic</h4>
              <p>
                Architecture designed to handle high-volume, low-bandwidth
                Android usage patterns.
              </p>
            </div>
          </li>
        </ul>

        <div class="cntr">
          <button type="button" data-model=".enquire-pop" class="btn btn-outline-black">
            Start Your Android App Project <i>↗</i>
          </button>
        </div>
      </div>
    </section>

    <!-- ============================================================
       11 — FAQ (with cross-link)
  ============================================================= -->
    <section class="secN">
      <div class="container">
        <div class="heading">
          <h3>
            Frequently Asked Questions
            <span>About Android App Development.</span>
          </h3>
          <p>
            Straight answers to what most people ask before getting started.
          </p>
        </div>

        <div class="accordion-wrapper">
          <div class="accordion-item">
            <div class="accordion-header">
              <div class="faq-question">
                <h4>Should I choose Android, iOS, or Flutter?</h4>
              </div>
              <span class="accordion-icon">+</span>
            </div>
            <div class="accordion-content">
              <p>
                It depends on your audience and goals. Choose
                <strong>Android</strong> if mass reach across India and
                emerging markets through the Google Play ecosystem is your
                priority — that's what this page covers. Choose
                <a href="/ios-application-development">iOS</a> if you're
                targeting a premium, App Store audience with higher spending
                users and want a brand-conscious experience. Choose
                <a href="/flutter-application-development">Flutter</a> if
                you're budget or timeline-conscious and want both Android and
                iOS built from a single codebase, faster and at lower cost.
              </p>
            </div>
          </div>

          <div class="accordion-item">
            <div class="accordion-header">
              <div class="faq-question">
                <h4>How long does Play Store approval take?</h4>
              </div>
              <span class="accordion-icon">+</span>
            </div>
            <div class="accordion-content">
              <p>
                Google Play review typically takes a few hours to a few days,
                though it can take longer if your app requires additional
                compliance checks.
              </p>
            </div>
          </div>

          <div class="accordion-item">
            <div class="accordion-header">
              <div class="faq-question">
                <h4>What factors affect the cost of an Android app?</h4>
              </div>
              <span class="accordion-icon">+</span>
            </div>
            <div class="accordion-content">
              <p>
                Cost depends on app complexity, number of screens, backend
                requirements, third-party integrations, and design scope. We
                provide a clear estimate after understanding your
                requirements.
              </p>
            </div>
          </div>

          <div class="accordion-item">
            <div class="accordion-header">
              <div class="faq-question">
                <h4>How long does development typically take?</h4>
              </div>
              <span class="accordion-icon">+</span>
            </div>
            <div class="accordion-content">
              <p>
                A standard business or e-commerce app typically takes 6–12
                weeks depending on feature scope, with more complex apps
                taking longer.
              </p>
            </div>
          </div>

          <div class="accordion-item">
            <div class="accordion-header">
              <div class="faq-question">
                <h4>Will I own the source code?</h4>
              </div>
              <span class="accordion-icon">+</span>
            </div>
            <div class="accordion-content">
              <p>
                Yes, once the project is delivered, full source code and Play
                Store account access remain fully yours.
              </p>
            </div>
          </div>

          <div class="accordion-item">
            <div class="accordion-header">
              <div class="faq-question">
                <h4>Do you provide support after the app is launched?</h4>
              </div>
              <span class="accordion-icon">+</span>
            </div>
            <div class="accordion-content">
              <p>
                Yes, we offer post-launch maintenance packages covering bug
                fixes, OS updates, and minor feature enhancements.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ============================================================
       12 — FINAL CTA
  ============================================================= -->
    <div class="container">
      <div class="cta-promo">
        <div class="cta-promo__inner">
          <span class="cta-promo__eyebrow">READY TO BUILD YOUR ANDROID APP?</span>
          <h3 class="cta-promo__heading">
            Let's Turn Your App Idea Into a Native Android Experience.
          </h3>
          <p class="cta-promo__sub">
            Get a practical review of your app requirements, features, and a
            realistic development roadmap.
          </p>
          <div class="cta-promo__actions">
            <button class="btn btn-white" data-model=".enquire-pop">
              Get a Free Android App Consultation <i>↗</i>
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