@extends('layouts.app')

@push('styles')
  <link rel="stylesheet" href="assets/sass/ios/ios.css" />
@endpush

@section('content')


<main>
  <!-- ============================================================
     01 — HERO
============================================================= -->
  <section class="banner">
    <div class="bg">
      <video autoplay muted loop playsinline class="bg-video" src="assets/video/effect6.mp4"
        poster="assets/video/poster/effect6.png">
        <source src="assets/video/effect6.mp4" type="video/mp4" />
      </video>
      <div class="container">
        <div class="banner-wrapper">
          <div class="content">
            <span class="eyebrow">IOS APP DEVELOPMENT</span>

            <h1>Custom iOS Apps Designed for Your Business.</h1>

            <p>
              From business applications to customer-facing platforms, we
              build iOS apps around your functionality, users and growth
              plans.
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
     02 — IOS INTRODUCTION
============================================================= -->
  <section class="iosIntro" id="app-intro">
    <div class="container">
      <div class="iosIntro-layout">
        <!-- ======================================================
           LEFT — CONTENT
      ======================================================= -->
        <div class="iosIntro-content">
          <span class="eyebrow">
            <span class="eyebrow-line"></span>
            IOS EXPERIENCE
          </span>
          <h2>
            Where Design
            <span>Meets Apple's Standards.</span>
          </h2>

          <p class="iosIntro-description">
            Your iOS application is more than a mobile interface. It's an
            opportunity to create a focused, intuitive experience for Apple
            users. We combine thoughtful UI/UX design, native development,
            and business-focused functionality to help you build an app
            aligned with your goals and user expectations.
          </p>

          <div class="iosIntro-highlights">
            <div class="iosIntro-highlight">
              <span class="iosIntro-highlight-number">01</span>

              <div class="iosIntro-highlight-content">
                <h3>Apple-Focused Experience</h3>

                <p>
                  Intuitive navigation and interface design tailored to iOS
                  users.
                </p>
              </div>
            </div>

            <div class="iosIntro-highlight">
              <span class="iosIntro-highlight-number">02</span>

              <div class="iosIntro-highlight-content">
                <h3>Native iOS Development</h3>

                <p>
                  Swift-based development with a focus on maintainable and
                  scalable applications.
                </p>
              </div>
            </div>

            <div class="iosIntro-highlight">
              <span class="iosIntro-highlight-number">03</span>

              <div class="iosIntro-highlight-content">
                <h3>Business-Driven Functionality</h3>

                <p>
                  Mobile experiences designed around your workflows, users,
                  and business requirements.
                </p>
              </div>
            </div>
          </div>

          <div class="iosIntro-actions">
            <button type="button" class="btn btn-outline-black" data-model=".enquire-pop">
              Start Your iOS App
              <i>↗</i>
            </button>

            <span class="iosIntro-action-note">
              Let's discuss your application requirements
            </span>
          </div>
        </div>

        <!-- ======================================================
           RIGHT — PRODUCT VISUAL
      ======================================================= -->
        <div class="iosIntro-visual">
          <div class="iosIntro-visual-grid"></div>

          <div class="img">
            <img src="assets/images/mobile/ios-about.png" alt="" />
          </div>

          <!-- Floating App Store Card -->
          <div class="iosIntro-float iosIntro-float--store">
            <div class="iosIntro-float-icon">↗</div>

            <div class="iosIntro-float-copy">
              <span>APP STORE</span>
              <strong>Release Preparation</strong>
            </div>

            <span class="iosIntro-float-status">✓</span>
          </div>

          <!-- Floating Technology Card -->
          <div class="iosIntro-float iosIntro-float--tech">
            <div class="iosIntro-float-tech-icon">S</div>

            <div class="iosIntro-float-copy">
              <span>TECHNOLOGY</span>
              <strong>Native Swift</strong>
            </div>
          </div>

          <!-- Mini UI Panel -->
          <div class="iosIntro-mini-panel">
            <div class="iosIntro-mini-panel-top">
              <span>APP EXPERIENCE</span>
              <span>↗</span>
            </div>

            <div class="iosIntro-mini-panel-lines">
              <span></span>
              <span></span>
              <span></span>
            </div>

            <div class="iosIntro-mini-panel-footer">
              <strong>Intuitive UI</strong>
              <span>iOS</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ============================================================
     03 — TYPES OF iOS APPS
============================================================= -->
  <section class="iosTypes" id="app-types">
    <div class="container">
      <div class="heading">
        <span class="eyebrow">
          <span class="eyebrow-line"></span>
          IOS APP SOLUTIONS
        </span>
        <h3>
          iOS Applications Built for <span> Different Business Needs.</span>
        </h3>
        <p>
          From customer-facing mobile experiences to business-specific
          applications, we develop iOS solutions around your product goals,
          users, and required functionality.
        </p>
      </div>

      <div class="iosTypes-slider">
        <div class="swiper fourSlider">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="iosTypes-card">
                <div class="iosTypes-image">
                  <img src="assets/images/mobile/type1.png" alt="Business and utility iOS app interface"
                    loading="lazy" />
                  <span class="iosTypes-tag">UTILITY</span>
                </div>
                <div class="iosTypes-body">
                  <h4>Business &amp; Utility Apps</h4>
                  <p>
                    Applications designed to simplify workflows, improve
                    productivity, and provide focused mobile services.
                  </p>
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="iosTypes-card">
                <div class="iosTypes-image">
                  <img src="assets/images/mobile/type2.png" alt="E-commerce iOS shopping app interface"
                    loading="lazy" />
                  <span class="iosTypes-tag">SHOPPING</span>
                </div>
                <div class="iosTypes-body">
                  <h4>E-Commerce &amp; Shopping Apps</h4>
                  <p>
                    Premium shopping experiences supporting product discovery,
                    cart management, and checkout.
                  </p>
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="iosTypes-card">
                <div class="iosTypes-image">
                  <img src="assets/images/mobile/type3.png" alt="On-demand service iOS app interface" loading="lazy" />
                  <span class="iosTypes-tag">ON-DEMAND</span>
                </div>
                <div class="iosTypes-body">
                  <h4>On-Demand &amp; Service Apps</h4>
                  <p>
                    Applications connecting customers with service providers
                    through requests, bookings, and communication.
                  </p>
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="iosTypes-card">
                <div class="iosTypes-image">
                  <img src="assets/images/mobile/type4.png" alt="Booking and reservation iOS app interface"
                    loading="lazy" />
                  <span class="iosTypes-tag">SCHEDULING</span>
                </div>
                <div class="iosTypes-body">
                  <h4>Booking &amp; Reservation Apps</h4>
                  <p>
                    Applications for managing reservations, schedules, and
                    availability through an intuitive interface.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="iosTypes-nav">
          <button type="button" class="iosTypes-navBtn fourSlider-prev" aria-label="Previous slide">←</button>
          <button type="button" class="iosTypes-navBtn fourSlider-next" aria-label="Next slide">→</button>
        </div>
      </div>
    </div>
  </section>

  <section class="iosCapabilities" id="app-capabilities">
    <div class="container">
      <div class="heading">
        <h3>
          Core Capabilities of Our iOS App<span>
            Development Services.</span>
        </h3>
        <p>
          The technical foundation that makes an iOS app polished, reliable,
          and ready for the App Store.
        </p>
      </div>

      <div class="iosCapabilities-list">
        <article class="iosCapabilities-card">
          <div class="iosCapabilities-icon">
            <svg viewBox="0 0 24 24">
              <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" />
              <circle cx="9" cy="7" r="4" />
              <path d="M19 8v6M16 11h6" />
            </svg>
          </div>

          <div class="iosCapabilities-content">
            <h4>Native iOS Development</h4>
            <p>
              Platform-specific functionality with a focus on performance,
              scalability, and maintainable implementation.
            </p>
          </div>

          <span class="iosCapabilities-arrow">↗</span>
        </article>

        <article class="iosCapabilities-card">
          <div class="iosCapabilities-icon">
            <svg viewBox="0 0 24 24">
              <rect x="3" y="4" width="18" height="16" rx="3" />
              <path d="M7 8h10M7 12h10M7 16h6" />
            </svg>
          </div>

          <div class="iosCapabilities-content">
            <h4>App Store Compliance</h4>
            <p>
              Support for release requirements, configuration, and
              submission guidance before your app goes live.
            </p>
          </div>

          <span class="iosCapabilities-arrow">↗</span>
        </article>

        <article class="iosCapabilities-card">
          <div class="iosCapabilities-icon">
            <svg viewBox="0 0 24 24">
              <path d="M18 8a6 6 0 0 0-12 0c0 7-3 7-3 9h18c0-2-3-2-3-9" />
              <path d="M10 21h4" />
            </svg>
          </div>

          <div class="iosCapabilities-content">
            <h4>Push Notifications</h4>
            <p>
              Relevant alerts, updates, and reminders based on your product
              goals and user workflows.
            </p>
          </div>

          <span class="iosCapabilities-arrow">↗</span>
        </article>

        <article class="iosCapabilities-card">
          <div class="iosCapabilities-icon">
            <svg viewBox="0 0 24 24">
              <rect x="5" y="10" width="14" height="11" rx="2" />
              <path d="M8 10V7a4 4 0 0 1 8 0v3" />
              <circle cx="12" cy="15" r="1" />
              <path d="M12 16v2" />
            </svg>
          </div>

          <div class="iosCapabilities-content">
            <h4>Secure Authentication</h4>
            <p>
              Protect user accounts with secure login, biometric access, and
              reliable identity verification.
            </p>
          </div>

          <span class="iosCapabilities-arrow">↗</span>
        </article>

        <article class="iosCapabilities-card">
          <div class="iosCapabilities-icon">
            <svg viewBox="0 0 24 24">
              <rect x="2" y="5" width="20" height="14" rx="2" />
              <path d="M2 10h20M6 15h4" />
            </svg>
          </div>

          <div class="iosCapabilities-content">
            <h4>Apple Pay Integration</h4>
            <p>
              Convenient and secure payment experiences where suitable for
              your business and regional requirements.
            </p>
          </div>

          <span class="iosCapabilities-arrow">↗</span>
        </article>

        <article class="iosCapabilities-card">
          <div class="iosCapabilities-icon">
            <svg viewBox="0 0 24 24">
              <path d="M12 3v18M3 12h18" />
              <circle cx="12" cy="12" r="9" />
              <path d="M8 8l8 8M16 8l-8 8" />
            </svg>
          </div>

          <div class="iosCapabilities-content">
            <h4>iCloud &amp; Offline Sync</h4>
            <p>
              Reliable data access through suitable storage,
              synchronization, and offline application workflows.
            </p>
          </div>

          <span class="iosCapabilities-arrow">↗</span>
        </article>
      </div>

      <div class="iosCapabilities-bottom">
        <p>
          Built around your product requirements, user expectations, and
          long-term growth.
        </p>

        <button type="button" class="btn btn-outline-black" data-model=".enquire-pop">
          Discuss Your App
          <i>↗</i>
        </button>
      </div>
    </div>
  </section>
  <!-- ============================================================
     05 — THIRD-PARTY INTEGRATIONS
============================================================= -->
  <section class="iosIntegrations" id="app-integrations">
    <div class="container">
      <div class="heading iosIntegrations-heading">
        <span class="eyebrow">
          <span class="eyebrow-line"></span>
          CONNECTED ECOSYSTEM
        </span>
        <h3>
          Connect Your iOS App With
          <span>the Tools Your Business Uses.</span>
        </h3>

        <p>
          We plan and integrate APIs, external services, and business tools
          based on your application's requirements.
        </p>
      </div>

      <div class="iosIntegrations-layout">
        <div class="img">
          <img src="assets/images/mobile/ios-cap.png" alt="" />
        </div>

        <div class="iosIntegrations-details">
          <div class="iosIntegrations-details-head">
            <span class="section-label">WHAT WE CONNECT</span>

            <h4>
              Designed to work<br /><span>with your existing systems.</span>
            </h4>

            <p>
              Connect your application with the services and platforms that
              keep your business running.
            </p>
          </div>

          <ul class="iosIntegrations-list">
            <li>
              <span class="iosIntegrations-list-number">01</span>

              <span class="iosIntegrations-icon">
                <svg viewBox="0 0 24 24">
                  <path d="M10 13a5 5 0 0 0 7.5.5l2-2a5 5 0 0 0-7-7l-1.5 1.5"></path>
                  <path d="M14 11a5 5 0 0 0-7.5-.5l-2 2a5 5 0 0 0 7 7l1.5-1.5"></path>
                </svg>
              </span>

              <div>
                <h4>REST APIs &amp; Laravel</h4>
                <p>
                  Connecting your app to existing systems and backend
                  services.
                </p>
              </div>

              <span class="iosIntegrations-list-arrow">↗</span>
            </li>

            <li>
              <span class="iosIntegrations-list-number">02</span>

              <span class="iosIntegrations-icon">
                <svg viewBox="0 0 24 24">
                  <path d="M12 21s-7-6.5-7-11a7 7 0 0 1 14 0c0 4.5-7 11-7 11z"></path>
                  <circle cx="12" cy="10" r="2.5"></circle>
                </svg>
              </span>

              <div>
                <h4>Apple Maps / Google Maps</h4>
                <p>
                  Location-based features integrated where the workflow
                  requires them.
                </p>
              </div>

              <span class="iosIntegrations-list-arrow">↗</span>
            </li>

            <li>
              <span class="iosIntegrations-list-number">03</span>

              <span class="iosIntegrations-icon">
                <svg viewBox="0 0 24 24">
                  <path d="M21 11.5a8.5 8.5 0 0 1-12.2 7.6L4 20l1.1-4.6A8.5 8.5 0 1 1 21 11.5z"></path>
                </svg>
              </span>

              <div>
                <h4>SMS / OTP Verification</h4>
                <p>
                  Secure login and verification via SMS gateways and OTP
                  providers.
                </p>
              </div>

              <span class="iosIntegrations-list-arrow">↗</span>
            </li>

            <li>
              <span class="iosIntegrations-list-number">04</span>

              <span class="iosIntegrations-icon">
                <svg viewBox="0 0 24 24">
                  <path d="M4 20V10"></path>
                  <path d="M11 20V4"></path>
                  <path d="M18 20v-7"></path>
                  <path d="M2 20h20"></path>
                </svg>
              </span>

              <div>
                <h4>Analytics &amp; Tracking</h4>
                <p>
                  Usage analytics integrated to help you understand app
                  performance.
                </p>
              </div>

              <span class="iosIntegrations-list-arrow">↗</span>
            </li>

            <li>
              <span class="iosIntegrations-list-number">05</span>

              <span class="iosIntegrations-icon">
                <svg viewBox="0 0 24 24">
                  <rect x="2.5" y="6" width="19" height="13" rx="2.5"></rect>
                  <path d="M2.5 10.5h19"></path>
                  <path d="M6 15h4"></path>
                </svg>
              </span>

              <div>
                <h4>Apple Pay &amp; Payments</h4>
                <p>
                  Secure checkout including Apple Pay where applicable to
                  your region.
                </p>
              </div>

              <span class="iosIntegrations-list-arrow">↗</span>
            </li>

            <li>
              <span class="iosIntegrations-list-number">06</span>

              <span class="iosIntegrations-icon">
                <svg viewBox="0 0 24 24">
                  <path d="M4 6l8-4 8 4-8 4-8-4z"></path>
                  <path d="M4 12l8 4 8-4"></path>
                  <path d="M4 18l8 4 8-4"></path>
                </svg>
              </span>

              <div>
                <h4>CRM &amp; Business Systems</h4>
                <p>
                  Connecting your app with the business tools your team
                  already uses.
                </p>
              </div>

              <span class="iosIntegrations-list-arrow">↗</span>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <section class="androidCta" id="iosCta">
    <div class="container">
      <div class="androidCta-card">
        <div class="androidCta-grid"></div>

        <div class="androidCta-content">
          <span class="eyebrow">
            <span class="eyebrow-line"></span>
            IOS APPLICATION DEVELOPMENT
          </span>

          <h2>
            Turn Your Ideas
            <span>Into Premium iOS Apps.</span>
          </h2>

          <p>
            Create a seamless and secure iOS experience built for Apple
            users. From elegant interfaces and native Swift development to
            App Store compliance and powerful integrations, we develop
            high-performance applications that engage users and support
            long-term business growth.
          </p>

          <div class="androidCta-actions">
            <button data-model=".enquire-pop" class="btn btn-black">
              Start Your iOS Project
              <i>↗</i>
            </button>

            <a href="javascript:void(0)" class="btn btn-outline-black">
              Whatsapp Now
            </a>
          </div>
        </div>

        <div class="androidCta-visual">
          <div class="androidCta-shape"></div>

          <div class="androidCta-image">
            <img src="assets/images/mobile/chats-ios.png" alt="iOS mobile application interface" />
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

        <h3>Our iOS App <span>Development Process.</span></h3>

        <p>
          A structured process that takes your app from idea to App Store,
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
            <span class="secG-kicker">DISCOVER</span>
            <h4>Understand Your Apple Users</h4>
            <p>
              We understand your business goals, target Apple users,
              application requirements and expected outcomes.
            </p>

            <div class="secG-details">
              <span>Goals</span>
              <span>Users</span>
              <span>Scope</span>
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
            <span class="secG-kicker">STRATEGIZE</span>
            <h4>Map The Roadmap</h4>
            <p>
              We define the app scope, user journeys, features, technology
              approach and development roadmap.
            </p>

            <div class="secG-details">
              <span>Roadmap</span>
              <span>Features</span>
              <span>Journeys</span>
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
            <span class="secG-kicker">DESIGN</span>
            <h4>Design For The iOS Experience</h4>
            <p>
              We create intuitive iOS interfaces focused on usability,
              navigation, visual consistency and platform-appropriate
              interaction patterns.
            </p>

            <div class="secG-details">
              <span>UI/UX</span>
              <span>Navigation</span>
              <span>Consistency</span>
            </div>
          </div>

          <div class="secG-side">
            <span>03</span>
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
            <span class="secG-kicker">DEVELOP</span>
            <h4>Build The iOS Application</h4>
            <p>
              We build the iOS application, implement features, integrate
              APIs and develop the required backend functionality.
            </p>

            <div class="secG-details">
              <span>Swift</span>
              <span>APIs</span>
              <span>Backend</span>
            </div>
          </div>

          <div class="secG-side">
            <span>04</span>
            <strong>Build</strong>
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
            <span class="secG-kicker">TEST</span>
            <h4>Test Across Devices And Workflows</h4>
            <p>
              We test application functionality, supported device
              compatibility, performance and key user workflows.
            </p>

            <div class="secG-details">
              <span>Devices</span>
              <span>Performance</span>
              <span>Workflows</span>
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
            <span class="secG-kicker">LAUNCH &amp; IMPROVE</span>
            <h4>Launch And Keep Improving</h4>
            <p>
              We prepare the application for App Store submission and
              identify opportunities for future updates and improvements.
            </p>

            <div class="secG-details">
              <span>App Store</span>
              <span>Updates</span>
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

  <section class="secC">
    <div class="container">
      <div class="heading">
        <span class="eyebrow">
          <span class="eyebrow-line"></span>
          OUR PORTFOLIO
        </span>

        <h3>
          iOS Apps Built<br />
          <span>Around Your Goals.</span>
        </h3>

        <p>
          From customer-facing apps to business solutions, we build iOS
          applications around your users, workflows, and growth goals.
        </p>
      </div>

      <div class="swiper-wrapped">
        <div class="swiper secC-swiper">
          <div class="swiper-wrapper">
            <!-- 01 — TORA - CAR RENTAL APP -->
            <div class="swiper-slide">
              <div class="secC-panel">
                <div class="secC-panel__media">
                  <img src="assets/images/mobile/app1.jpg" alt="Tora car rental mobile app" loading="lazy" />
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
                  <img src="assets/images/mobile/app3.jpg" alt="Wellopia healthcare mobile app" loading="lazy" />
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
                  <img src="assets/images/mobile/app2.jpg" alt="Prayag Sangam News mobile app" loading="lazy" />
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
                  <img src="assets/images/mobile/app4.png" alt="StreamBox video streaming mobile app" loading="lazy" />
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
        <h3>Industries We Build <span>iOS Apps For.</span></h3>
        <p>
          Different industries need different application priorities — we
          adapt the build accordingly.
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
        <h3>Why Choose Web Mingo<span> for iOS Development?</span></h3>
        <p>
          Practical, business-focused planning — not generic promises. Just
          a considered process built around Apple's platform standards.
        </p>
      </div>

      <ul class="secL-list">
        <li>
          <span class="secL-icon"><svg viewBox="0 0 24 24">
              <path d="M12 3l8 4v6c0 5-3.5 7.5-8 9-4.5-1.5-8-4-8-9V7l8-4z" />
              <path d="M8 12l3 3 5-6" />
            </svg></span>
          <div>
            <h4>Business-Focused Planning</h4>
            <p>
              We begin by understanding your business goals, target users,
              and application requirements.
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
            <h4>Apple-Focused User Experience</h4>
            <p>
              We focus on clear navigation, intuitive interactions, and a
              consistent iOS experience.
            </p>
          </div>
        </li>
        <li>
          <span class="secL-icon"><svg viewBox="0 0 24 24">
              <rect x="4" y="4" width="16" height="16" rx="2" />
              <path d="M8 9h8M8 13h5M8 17h3" />
            </svg></span>
          <div>
            <h4>Scalable Development</h4>
            <p>
              We plan the application structure to support future features,
              integrations, and business growth.
            </p>
          </div>
        </li>
        <li>
          <span class="secL-icon"><svg viewBox="0 0 24 24">
              <path d="M3 3v18h18" />
              <path d="M7 15l4-5 3 3 6-8" />
            </svg></span>
          <div>
            <h4>App Store Preparation &amp; Improvements</h4>
            <p>
              Support may include release preparation, configuration
              guidance, and future application improvements.
            </p>
          </div>
        </li>
      </ul>

      <div class="cntr">
        <button type="button" data-model=".enquire-pop" class="btn btn-outline-black">
          Start Your iOS App Project <i>↗</i>
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
          Frequently Asked Questions <span>About iOS App Development.</span>
        </h3>
        <p>
          Straight answers to what most people ask before getting started.
        </p>
      </div>

      <div class="accordion-wrapper">
        <div class="accordion-item">
          <div class="accordion-header">
            <div class="faq-question">
              <h4>How long does it take to develop an iOS application?</h4>
            </div>
            <span class="accordion-icon">+</span>
          </div>
          <div class="accordion-content">
            <p>
              Timeline depends on the app's complexity, number of features,
              integrations, design requirements, testing, and backend
              development. We provide a realistic timeline once your
              requirements are understood.
            </p>
          </div>
        </div>

        <div class="accordion-item">
          <div class="accordion-header">
            <div class="faq-question">
              <h4>How much does iOS app development cost?</h4>
            </div>
            <span class="accordion-icon">+</span>
          </div>
          <div class="accordion-content">
            <p>
              Cost depends on app complexity, number of screens, custom
              features, backend requirements, API integrations, payment and
              notification functionality, and testing needs. We recommend
              requesting a project-specific estimate.
            </p>
          </div>
        </div>

        <div class="accordion-item">
          <div class="accordion-header">
            <div class="faq-question">
              <h4>Do you develop native iOS applications?</h4>
            </div>
            <span class="accordion-icon">+</span>
          </div>
          <div class="accordion-content">
            <p>
              Yes, iOS applications are developed using native technologies
              such as Swift, with the specific approach selected according
              to the project's requirements.
            </p>
          </div>
        </div>

        <div class="accordion-item">
          <div class="accordion-header">
            <div class="faq-question">
              <h4>Can you integrate Apple Pay, APIs, maps, and OTP?</h4>
            </div>
            <span class="accordion-icon">+</span>
          </div>
          <div class="accordion-content">
            <p>
              Required third-party integrations can be planned and
              implemented based on technical compatibility, business needs,
              and provider requirements — including Apple Pay and mapping
              services where relevant, subject to regional and provider
              availability.
            </p>
          </div>
        </div>

        <div class="accordion-item">
          <div class="accordion-header">
            <div class="faq-question">
              <h4>What is the iOS App Store approval process?</h4>
            </div>
            <span class="accordion-icon">+</span>
          </div>
          <div class="accordion-content">
            <p>
              iOS applications submitted to the App Store must follow
              Apple's applicable review guidelines and submission
              requirements. This includes app configuration and release
              preparation, required app information and metadata, compliance
              checks, testing before submission, and review by Apple — which
              may include feedback requiring updates or corrections. We
              cannot guarantee approval or a fixed review timeline, as
              requirements can vary depending on the app and Apple's current
              policies.
            </p>
          </div>
        </div>

        <div class="accordion-item">
          <div class="accordion-header">
            <div class="faq-question">
              <h4>Can my iOS app support offline functionality?</h4>
            </div>
            <span class="accordion-icon">+</span>
          </div>
          <div class="accordion-content">
            <p>
              Selected offline features may be supported through local data
              handling and synchronization, depending on the application's
              workflow and technical requirements.
            </p>
          </div>
        </div>

        <div class="accordion-item">
          <div class="accordion-header">
            <div class="faq-question">
              <h4>Should I choose Android, iOS, or Flutter?</h4>
            </div>
            <span class="accordion-icon">+</span>
          </div>
          <div class="accordion-content">
            <p>
              Choose <a href="[ANDROID_APP_URL]">Android</a> when your
              primary audience uses Android devices or your distribution
              strategy focuses on the Google Play ecosystem. Choose
              <strong>iOS</strong>
              when your product specifically targets Apple users and the App
              Store ecosystem — that's what this page covers. Consider
              <a href="[FLUTTER_APP_URL]">Flutter</a> when you want Android
              and iOS applications from a shared codebase and your project
              is suitable for a cross-platform approach.
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
        <span class="cta-promo__eyebrow">READY TO BUILD YOUR iOS APP?</span>
        <h3 class="cta-promo__heading">
          Ready to Build an iOS App for Your Business?
        </h3>
        <p class="cta-promo__sub">
          Let's discuss your business goals, required features, target
          users, and development requirements to plan an iOS application
          that fits your needs.
        </p>
        <div class="cta-promo__actions">
          <button class="btn btn-white" data-model=".enquire-pop">
            Start Your iOS App <i>↗</i>
          </button>
          <a href="javascript:void(0)" class="btn btn-outline-white">Discuss Your Requirements <i>↗</i></a>
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