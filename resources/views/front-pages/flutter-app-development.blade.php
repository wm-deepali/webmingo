@extends('layouts.app')

@push('styles')
  <link rel="stylesheet" href="assets/sass/flutter/flutter.css" />
@endpush

@section('content')

  <main>
    <!-- ============================================================
       01 — BANNER
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
              <span class="eyebrow">FLUTTER APPLICATION DEVELOPMENT</span>

              <h1>Build Once. Launch Everywhere. Grow Faster.</h1>

              <p>
                Turn your ideas into powerful Android and iOS applications
                with Flutter. We build high-performance, cost-effective, and
                scalable mobile experiences using a single codebase—helping
                your business launch faster and reach more users.
              </p>

              <div class="banner-actions">
                <a href="javascript:void(0)" class="btn btn-outline-white" data-model=".enquire-pop">
                  Discuss Your App Idea <i>↗</i>
                </a>

                <a href="#flutter-development-process" class="btn btn-white">
                  Explore Our Services <i>↗</i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ============================================================
       02 — INTRODUCTION
  ============================================================= -->
    <section class="flutterIntro">
      <div class="container">
        <div class="heading">
          <span class="eyebrow">
            <span class="eyebrow-line"></span>
            INTRODUCTION
          </span>

          <h3>
            What Is
            <span>Flutter Development?</span>
          </h3>

          <p>
            A modern framework for building beautiful, high-performance
            applications across multiple platforms.
          </p>
        </div>

        <div class="flutterIntro-main">
          <div class="flutterIntro-visual">
            <div class="flutterIntro-image">
              <img src="assets/images/mobile/flutter-about.png" alt="Flutter mobile application interface"
                loading="lazy" />
            </div>

            <div class="flutterIntro-visual-bottom">
              <div>
                <strong>Flutter Framework</strong>
                <span>Build mobile, web, and desktop experiences</span>
              </div>

              <span class="flutterIntro-arrow">↗</span>
            </div>
          </div>

          <div class="flutterIntro-content">
            <p class="flutterIntro-intro">
              Flutter is an open-source UI framework developed by Google for
              creating applications from a shared codebase.
            </p>

            <p class="flutterIntro-description">
              Using the Dart programming language, Flutter enables developers
              to build applications for Android, iOS, web, and desktop
              platforms. Its widget-based architecture helps create flexible
              interfaces, custom designs, and smooth interactions within a
              unified development environment.
            </p>

            <div class="flutterIntro-features">
              <div class="flutterIntro-feature">
                <div class="flutterIntro-feature-icon">
                  <i>⌘</i>
                </div>

                <div>
                  <h3>Developed With Dart</h3>
                  <p>
                    Flutter uses Google's Dart programming language to build
                    responsive and feature-rich applications.
                  </p>
                </div>
              </div>

              <div class="flutterIntro-feature">
                <div class="flutterIntro-feature-icon">
                  <i>◈</i>
                </div>

                <div>
                  <h3>Widget-Based Framework</h3>
                  <p>
                    Build custom layouts and interactive interfaces using
                    reusable Flutter widgets.
                  </p>
                </div>
              </div>

              <div class="flutterIntro-feature">
                <div class="flutterIntro-feature-icon">
                  <i>＋</i>
                </div>

                <div>
                  <h3>Multi-Platform Applications</h3>
                  <p>
                    Create applications for mobile, web, and desktop platforms
                    through a shared development foundation.
                  </p>
                </div>
              </div>
            </div>

            <button class="btn btn-black" data-model=".enquire-pop">
              Discuss Your App Idea
              <i>↗</i>
            </button>
          </div>
        </div>
      </div>
    </section>

    <!-- ============================================================
       03 — WHY FLUTTER
  ============================================================= -->
    <section class="flutterWhy">
      <div class="container">
        <div class="heading">
          <span class="eyebrow">
            <span class="eyebrow-line"></span>
            WHY FLUTTER
          </span>

          <h3>
            Built For Speed.
            <span>Designed To Scale.</span>
          </h3>

          <p>
            Flutter brings together cross-platform flexibility, efficient
            development, and polished application experiences to help
            businesses turn mobile ideas into reliable digital products.
          </p>
        </div>

        <div class="flutterWhy-grid">
          <article class="flutterWhy-card">
            <div class="flutterWhy-card-head">
              <span class="flutterWhy-symbol">⌘</span>
              <span class="flutterWhy-label">CODEBASE</span>
            </div>

            <div class="flutterWhy-card-body">
              <h4>One Codebase</h4>
              <p>
                Build for Android and iOS through a shared development
                foundation, reducing the need for completely separate
                implementations.
              </p>
            </div>

            <div class="flutterWhy-card-footer">
              <span>Android</span>
              <span>iOS</span>
            </div>
          </article>

          <article class="flutterWhy-card">
            <div class="flutterWhy-card-head">
              <span class="flutterWhy-symbol">↗</span>
              <span class="flutterWhy-label">WORKFLOW</span>
            </div>

            <div class="flutterWhy-card-body">
              <h4>Faster Development</h4>
              <p>
                Streamline the development process by sharing core application
                logic and reducing repeated implementation work.
              </p>
            </div>

            <div class="flutterWhy-card-footer">
              <span>Less Repetition</span>
            </div>
          </article>

          <article class="flutterWhy-card">
            <div class="flutterWhy-card-head">
              <span class="flutterWhy-symbol">◇</span>
              <span class="flutterWhy-label">INVESTMENT</span>
            </div>

            <div class="flutterWhy-card-body">
              <h4>Lower Development Cost</h4>
              <p>
                A shared codebase may help control development overhead,
                depending on the application's features, integrations, and
                overall scope.
              </p>
            </div>

            <div class="flutterWhy-card-footer">
              <span>Efficient Resources</span>
            </div>
          </article>

          <article class="flutterWhy-card">
            <div class="flutterWhy-card-head">
              <span class="flutterWhy-symbol">✦</span>
              <span class="flutterWhy-label">EXPERIENCE</span>
            </div>

            <div class="flutterWhy-card-body">
              <h4>Native-Like Performance</h4>
              <p>
                Create responsive interfaces and smooth interactions with
                support for platform-specific features when your application
                requires them.
              </p>
            </div>

            <div class="flutterWhy-card-footer">
              <span>Responsive UI</span>
            </div>
          </article>
        </div>
      </div>
    </section>

    <!-- ============================================================
       04 — TYPES OF FLUTTER APPS
  ============================================================= -->
    <section class="flutterTypes">
      <div class="container">
        <div class="heading">
          <h3>Applications We Build <span>With Flutter.</span></h3>
          <p>
            From startup MVPs to scalable business solutions, we develop
            Flutter applications designed around your business goals.
          </p>
        </div>

        <div class="flutterTypes-grid">
          <!-- SERVICE 01 -->
          <article class="flutterTypes-card">
            <img src="assets/images/mobile/flutter1.png" alt="Flutter startup application" loading="lazy" />

            <div class="flutterTypes-overlay"></div>

            <div class="flutterTypes-content">
              <div class="flutterTypes-top">
                <span>01 / STARTUP</span>
                <i>↗</i>
              </div>

              <div class="flutterTypes-info">
                <h4>MVP &amp; Startup Apps</h4>
                <p>
                  Launch and validate your product idea with a practical
                  mobile application built for future growth.
                </p>
              </div>
            </div>
          </article>

          <!-- SERVICE 02 -->
          <article class="flutterTypes-card">
            <img src="assets/images/mobile/flutter2.png" alt="Flutter business and utility application dashboard"
              loading="lazy" />

            <div class="flutterTypes-overlay"></div>

            <div class="flutterTypes-content">
              <div class="flutterTypes-top">
                <span>02 / BUSINESS</span>
                <i>↗</i>
              </div>

              <div class="flutterTypes-info">
                <h4>Business &amp; Utility Apps</h4>
                <p>
                  Simplify workflows, improve productivity, and support your
                  everyday business operations.
                </p>
              </div>
            </div>
          </article>

          <!-- SERVICE 03 -->
          <article class="flutterTypes-card">
            <img src="assets/images/mobile/flutter3.png" alt="Flutter e-commerce application" loading="lazy" />

            <div class="flutterTypes-overlay"></div>

            <div class="flutterTypes-content">
              <div class="flutterTypes-top">
                <span>03 / E-COMMERCE</span>
                <i>↗</i>
              </div>

              <div class="flutterTypes-info">
                <h4>E-Commerce &amp; Shopping Apps</h4>
                <p>
                  Deliver convenient mobile shopping experiences with product
                  discovery, checkout, and order tracking.
                </p>
              </div>
            </div>
          </article>

          <!-- SERVICE 04 -->
          <article class="flutterTypes-card">
            <img src="assets/images/mobile/flutter4.png" alt="Flutter on-demand service application" loading="lazy" />

            <div class="flutterTypes-overlay"></div>

            <div class="flutterTypes-content">
              <div class="flutterTypes-top">
                <span>04 / SERVICES</span>
                <i>↗</i>
              </div>

              <div class="flutterTypes-info">
                <h4>On-Demand &amp; Service Apps</h4>
                <p>
                  Connect customers and service providers through bookings,
                  requests, and communication.
                </p>
              </div>
            </div>
          </article>

          <!-- SERVICE 05 -->
          <article class="flutterTypes-card">
            <img src="assets/images/mobile/flutter5.png" alt="Flutter education and learning application"
              loading="lazy" />

            <div class="flutterTypes-overlay"></div>

            <div class="flutterTypes-content">
              <div class="flutterTypes-top">
                <span>05 / EDUCATION</span>
                <i>↗</i>
              </div>

              <div class="flutterTypes-info">
                <h4>Education &amp; Learning Apps</h4>
                <p>
                  Build engaging learning experiences with courses,
                  assessments, progress tracking, and digital resources.
                </p>
              </div>
            </div>
          </article>
          <!-- ORIGINAL CTA DESIGN — PRESERVED -->
          <div class="flutterTypes-more">
            <div class="flutterTypes-more-content">
              <span>YOUR FLUTTER APP IDEA</span>

              <h4>Have A Unique App Requirement?</h4>

              <p>
                Let's build a custom Flutter application around your business
                model, audience and specific requirements.
              </p>
            </div>

            <button type="button" data-model=".enquire-pop" class="btn btn-outline-black">
              Let's Connect
              <i>↗</i>
            </button>
          </div>
        </div>
      </div>
    </section>

    <!-- ============================================================
       FLUTTER CORE CAPABILITIES
  ============================================================= -->

    <!-- ============================================================
       FLUTTER CORE CAPABILITIES
  ============================================================= -->

    <section class="flutterCapabilities">
      <div class="container">
        <div class="heading">
          <span class="eyebrow">
            <span class="eyebrow-line"></span>
            CORE CAPABILITIESy
          </span>

          <h3>
            Everything You Need to Build
            <span>Powerful Flutter Applications</span>
          </h3>

          <p>
            From seamless user experiences to reliable backend connectivity,
            we build Flutter applications with the essential capabilities
            required for performance, scalability, and long-term growth.
          </p>
        </div>

        <div class="flutterCapabilities-grid">
          <!-- Card 01 -->
          <article class="flutterCapabilities-card">
            <div class="flutterCapabilities-card-top">
              <span class="flutterCapabilities-number">01</span>

              <div class="flutterCapabilities-icon">
                <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                  <rect x="5" y="2.5" width="14" height="19" rx="2.5" stroke="currentColor" stroke-width="1.5" />
                  <path d="M9 5.5H15M10 18.5H14" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                  <path d="M8 9H11V12H8V9ZM13 9H16V12H13V9ZM8 14H11V16H8V14ZM13 14H16V16H13V14Z" stroke="currentColor"
                    stroke-width="1.2" stroke-linejoin="round" />
                </svg>
              </div>
            </div>

            <div class="flutterCapabilities-card-content">
              <h3>Cross-Platform UI</h3>

              <p>
                Create consistent, responsive, and visually engaging
                interfaces that deliver a seamless experience across Android,
                iOS, tablets, and different screen sizes.
              </p>
            </div>

            <div class="flutterCapabilities-card-bottom">
              <span>One UI Experience</span>

              <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                <path d="M5 19L19 5M9 5H19V15" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                  stroke-linejoin="round" />
              </svg>
            </div>
          </article>

          <!-- Card 02 -->
          <article class="flutterCapabilities-card">
            <div class="flutterCapabilities-card-top">
              <span class="flutterCapabilities-number">02</span>

              <div class="flutterCapabilities-icon">
                <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                  <rect x="3" y="4" width="7" height="6" rx="1.5" stroke="currentColor" stroke-width="1.5" />
                  <rect x="14" y="14" width="7" height="6" rx="1.5" stroke="currentColor" stroke-width="1.5" />
                  <path d="M10 7H14C15.1 7 16 7.9 16 9V14" stroke="currentColor" stroke-width="1.5"
                    stroke-linecap="round" />
                  <path d="M13 11L16 14L19 11" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                    stroke-linejoin="round" />
                </svg>
              </div>
            </div>

            <div class="flutterCapabilities-card-content">
              <h3>API Integration</h3>

              <p>
                Connect your application with secure and scalable APIs,
                third-party platforms, payment gateways, and backend systems
                for smooth data exchange.
              </p>
            </div>

            <div class="flutterCapabilities-card-bottom">
              <span>Connected &amp; Scalable</span>

              <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                <path d="M5 19L19 5M9 5H19V15" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                  stroke-linejoin="round" />
              </svg>
            </div>
          </article>

          <!-- Card 03 -->
          <article class="flutterCapabilities-card">
            <div class="flutterCapabilities-card-top">
              <span class="flutterCapabilities-number">03</span>

              <div class="flutterCapabilities-icon">
                <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                  <path d="M18 9C18 5.7 15.3 3 12 3C8.7 3 6 5.7 6 9V13L4 16H20L18 13V9Z" stroke="currentColor"
                    stroke-width="1.5" stroke-linejoin="round" />
                  <path d="M9.5 19C10.1 20.2 11 21 12 21C13 21 13.9 20.2 14.5 19" stroke="currentColor" stroke-width="1.5"
                    stroke-linecap="round" />
                  <path d="M18 4L20 2M20 7H22" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                </svg>
              </div>
            </div>

            <div class="flutterCapabilities-card-content">
              <h3>Push Notifications</h3>

              <p>
                Keep users engaged with real-time alerts, personalised
                updates, promotional notifications, and important application
                messages across devices.
              </p>
            </div>

            <div class="flutterCapabilities-card-bottom">
              <span>Real-Time Engagement</span>

              <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                <path d="M5 19L19 5M9 5H19V15" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                  stroke-linejoin="round" />
              </svg>
            </div>
          </article>

          <!-- Card 04 -->
          <article class="flutterCapabilities-card">
            <div class="flutterCapabilities-card-top">
              <span class="flutterCapabilities-number">04</span>

              <div class="flutterCapabilities-icon">
                <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                  <path d="M3 9C3 6.8 4.8 5 7 5H17C19.2 5 21 6.8 21 9V15C21 17.2 19.2 19 17 19H7C4.8 19 3 17.2 3 15V9Z"
                    stroke="currentColor" stroke-width="1.5" />
                  <path d="M7 12H10M8.5 10.5V13.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                  <path d="M15 10.5H15.01M17.5 13.5H17.51" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" />
                  <path d="M4 3L20 21" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                </svg>
              </div>
            </div>

            <div class="flutterCapabilities-card-content">
              <h3>Offline Support</h3>

              <p>
                Enable users to access important features and saved data even
                without an active internet connection through local storage
                and smart data synchronisation.
              </p>
            </div>

            <div class="flutterCapabilities-card-bottom">
              <span>Reliable User Access</span>

              <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                <path d="M5 19L19 5M9 5H19V15" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                  stroke-linejoin="round" />
              </svg>
            </div>
          </article>
        </div>

        <!-- CTA -->
        <div class="flutterCapabilities-footer">
          <div class="flutterCapabilities-footer-content">
            <span>BUILT FOR REAL-WORLD PERFORMANCE</span>

            <h3>
              A Flutter Experience Designed
              <span>For Your Business Goals.</span>
            </h3>
          </div>

          <a href="javascript:void(0)" class="btn btn-outline-black" data-model=".enquire-pop">
            Discuss Your App

            <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
              <path d="M5 19L19 5M9 5H19V15" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                stroke-linejoin="round" />
            </svg>
          </a>
        </div>
      </div>
    </section>

    <section class="androidCta" id="flutterCta">
      <div class="container">
        <div class="androidCta-card">
          <div class="androidCta-grid"></div>

          <div class="androidCta-content">
            <span class="eyebrow">
              <span class="eyebrow-line"></span>
              FLUTTER APPLICATION DEVELOPMENT
            </span>

            <h2>
              Build Once.
              <span>Launch Everywhere.</span>
            </h2>

            <p>
              Turn your ideas into powerful Android and iOS applications with
              Flutter's cross-platform technology. We create high-performance,
              cost-effective, and scalable mobile experiences using a single
              codebase—helping your business launch faster and grow across
              platforms.
            </p>

            <div class="androidCta-actions">
              <button data-model=".enquire-pop" class="btn btn-black">
                Start Your Flutter Project
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
              <img src="assets/images/mobile/flutter-chats.png" alt="Flutter mobile application interface" />
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ============================================================
       07 — DEVELOPMENT PROCESS (.secG — reused, unchanged design)
  ============================================================= -->
    <section class="secG" id="flutter-development-process">
      <div class="container">
        <div class="heading">
          <span class="eyebrow">
            <span class="eyebrow-line"></span>
            OUR PROCESS
          </span>

          <h3>Our Flutter App <span>Development Process.</span></h3>

          <p>
            A structured process that takes your app from idea to Android and
            iOS deployment, and beyond.
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
              <h4>Understand Your Goals And Users</h4>
              <p>
                We understand your business goals, target users, application
                requirements and expected outcomes.
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
              <h4>Plan One App For Two Platforms</h4>
              <p>
                We define the application scope, user journeys, features,
                cross-platform approach and development roadmap.
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
              <h4>Design A Consistent Experience</h4>
              <p>
                We create intuitive interfaces focused on usability, visual
                consistency and coordinated Android and iOS experiences.
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
              <h4>Build The Flutter Application</h4>
              <p>
                We build the Flutter application, implement features,
                integrate APIs and develop the required backend functionality.
              </p>

              <div class="secG-details">
                <span>Flutter</span>
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
              <h4>Test On Both Platforms</h4>
              <p>
                We test application functionality, supported device
                compatibility, platform-specific behavior, performance and key
                user workflows.
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
                We prepare the application for relevant platform deployment
                and identify opportunities for maintenance, updates and future
                improvements.
              </p>

              <div class="secG-details">
                <span>Deployment</span>
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
            Flutter Apps Built<br />
            <span>Around Your Goals.</span>
          </h3>

          <p>
            From customer-facing apps to business solutions, we build Flutter
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
       09 — INDUSTRIES (.secH — reused, unchanged design)
  ============================================================= -->
    <section class="secH">
      <div class="container">
        <div class="heading">
          <span class="eyebrow">
            <span class="eyebrow-line"></span>
            INDUSTRIES WE SERVE
          </span>
          <h3>Industries We Build <span>Flutter Apps For.</span></h3>
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
       10 — WHY WEB MINGO (.secL — reused, unchanged design)
  ============================================================= -->

    <section class="secL">
      <div class="container">
        <div class="heading">
          <span class="eyebrow">
            <span class="eyebrow-line"></span>
            WHY WEB MINGO
          </span>

          <h3>
            Why Choose Web Mingo
            <span> for Flutter Development?</span>
          </h3>

          <p>
            Practical, business-focused planning — not generic promises. Just
            a considered approach to cross-platform development.
          </p>
        </div>

        <ul class="secL-list">
          <!-- Item 01 -->
          <li>
            <span class="secL-icon">
              <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                <path d="M12 3l8 4v6c0 5-3.5 7.5-8 9-4.5-1.5-8-4-8-9V7l8-4z" stroke="currentColor" stroke-width="1.5"
                  stroke-linejoin="round" />
                <path d="M8 12l3 3 5-6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                  stroke-linejoin="round" />
              </svg>
            </span>

            <div>
              <h4>Business-Focused Planning</h4>

              <p>
                We begin by understanding your business goals, target users,
                and application requirements to create a clear development
                direction for your Flutter project.
              </p>
            </div>
          </li>

          <!-- Item 02 -->
          <li>
            <span class="secL-icon">
              <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                <rect x="3" y="5" width="7" height="14" rx="1.5" stroke="currentColor" stroke-width="1.5" />
                <rect x="14" y="5" width="7" height="14" rx="1.5" stroke="currentColor" stroke-width="1.5" />
                <path d="M10 9h4M10 15h4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
              </svg>
            </span>

            <div>
              <h4>Cross-Platform Expertise</h4>

              <p>
                We build Flutter applications with a shared codebase while
                considering platform-specific requirements for consistent
                performance across Android and iOS.
              </p>
            </div>
          </li>

          <!-- Item 03 -->
          <li>
            <span class="secL-icon">
              <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                <rect x="4" y="4" width="16" height="16" rx="2" stroke="currentColor" stroke-width="1.5" />
                <path d="M8 9h8M8 13h5M8 17h3" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
              </svg>
            </span>

            <div>
              <h4>Scalable Application Structure</h4>

              <p>
                We organise your application structure to support future
                features, third-party integrations, and ongoing improvements
                as your business grows.
              </p>
            </div>
          </li>

          <!-- Item 04 -->
          <li>
            <span class="secL-icon">
              <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                <path d="M3 3v18h18" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                  stroke-linejoin="round" />
                <path d="M7 15l4-5 3 3 6-8" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                  stroke-linejoin="round" />
              </svg>
            </span>

            <div>
              <h4>Reliable Delivery &amp; Ongoing Support</h4>

              <p>
                From API integration and testing to deployment preparation, we
                focus on delivering a dependable Flutter application with
                support for future updates and improvements.
              </p>
            </div>
          </li>
        </ul>

        <div class="cntr">
          <button type="button" data-model=".enquire-pop" class="btn btn-outline-black">
            Start Your Flutter App Project
            <i>↗</i>
          </button>
        </div>
      </div>
    </section>

    <!-- ============================================================
       11 — FAQ (.secN — reused, unchanged design)
  ============================================================= -->
    <section class="secN">
      <div class="container">
        <div class="heading">
          <h3>
            Frequently Asked Questions
            <span>About Flutter App Development.</span>
          </h3>
          <p>
            Straight answers to what most people ask before getting started.
          </p>
        </div>

        <div class="accordion-wrapper">
          <div class="accordion-item">
            <div class="accordion-header">
              <div class="faq-question">
                <h4>What is Flutter app development?</h4>
              </div>
              <span class="accordion-icon">+</span>
            </div>
            <div class="accordion-content">
              <p>
                Flutter is a cross-platform UI development framework built
                with Dart that can support applications for Android and iOS
                through a shared codebase. Suitability depends on the
                application's technical requirements and platform-specific
                needs.
              </p>
            </div>
          </div>

          <div class="accordion-item">
            <div class="accordion-header">
              <div class="faq-question">
                <h4>
                  How long does it take to develop a Flutter application?
                </h4>
              </div>
              <span class="accordion-icon">+</span>
            </div>
            <div class="accordion-content">
              <p>
                Timeline depends on app complexity, number of screens, custom
                features, UI/UX requirements, API and backend integrations,
                testing requirements, and platform-specific functionality. We
                provide a realistic timeline once your requirements are
                understood.
              </p>
            </div>
          </div>

          <div class="accordion-item">
            <div class="accordion-header">
              <div class="faq-question">
                <h4>How much does Flutter app development cost?</h4>
              </div>
              <span class="accordion-icon">+</span>
            </div>
            <div class="accordion-content">
              <p>
                Cost depends on application scope, number of features and
                screens, UI/UX complexity, backend requirements, API
                integrations, payment and notification functionality, and
                testing and maintenance needs. We recommend requesting a
                project-specific estimate.
              </p>
            </div>
          </div>

          <div class="accordion-item">
            <div class="accordion-header">
              <div class="faq-question">
                <h4>Can Flutter build both Android and iOS applications?</h4>
              </div>
              <span class="accordion-icon">+</span>
            </div>
            <div class="accordion-content">
              <p>
                Yes, Flutter supports cross-platform application development
                through a shared codebase. Some platform-specific
                functionality may require additional implementation based on
                project requirements.
              </p>
            </div>
          </div>

          <div class="accordion-item">
            <div class="accordion-header">
              <div class="faq-question">
                <h4>
                  Flutter vs Native — what's the difference, and which one do
                  I need?
                </h4>
              </div>
              <span class="accordion-icon">+</span>
            </div>
            <div class="accordion-content">
              <p>
                <strong>Flutter</strong> uses a shared codebase for Android
                and iOS, suitable for projects where cross-platform
                development aligns with requirements and can support an
                efficient development workflow — though platform-specific
                integrations may require additional work.
                <strong>Native Android/iOS</strong>
                uses a platform-specific approach with access to
                platform-specific APIs and capabilities, which may suit
                applications requiring deep platform specialization.
              </p>
              <p>
                Consider <a href="[ANDROID_APP_URL]">Native Android</a> when
                your primary audience or functionality is Android-focused.
                Consider <a href="[IOS_APP_URL]">Native iOS</a> when your
                product specifically targets Apple users and the App Store
                ecosystem. Consider <strong>Flutter</strong> when Android and
                iOS applications can be developed effectively through a shared
                codebase and the project suits a cross-platform approach.
              </p>
            </div>
          </div>

          <div class="accordion-item">
            <div class="accordion-header">
              <div class="faq-question">
                <h4>
                  Can Flutter integrate APIs, payment gateways, and
                  notifications?
                </h4>
              </div>
              <span class="accordion-icon">+</span>
            </div>
            <div class="accordion-content">
              <p>
                Flutter applications can integrate required APIs and external
                services based on technical compatibility, business
                requirements, and provider requirements. Integrations are
                planned according to the application architecture.
              </p>
            </div>
          </div>

          <div class="accordion-item">
            <div class="accordion-header">
              <div class="faq-question">
                <h4>Can Flutter apps support offline functionality?</h4>
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
                <h4>
                  Can Flutter apps be published on Google Play and the Apple
                  App Store?
                </h4>
              </div>
              <span class="accordion-icon">+</span>
            </div>
            <div class="accordion-content">
              <p>
                Flutter supports application builds for relevant platforms.
                Publishing requires platform-specific configuration,
                compliance with applicable requirements, testing, and
                submission processes. We cannot guarantee approval or a fixed
                review timeline.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ============================================================
       12 — FINAL CTA (reused, unchanged design)
  ============================================================= -->
    <div class="container">
      <div class="cta-promo">
        <div class="cta-promo__inner">
          <span class="cta-promo__eyebrow">READY TO BUILD YOUR FLUTTER APP?</span>
          <h3 class="cta-promo__heading">
            Ready to Build a Flutter App for Your Business?
          </h3>
          <p class="cta-promo__sub">
            Let's discuss your business goals, required features, target
            users, and cross-platform development requirements to plan a
            Flutter application that fits your needs.
          </p>
          <div class="cta-promo__actions">
            <button class="btn btn-white" data-model=".enquire-pop">
              Start Your Flutter App <i>↗</i>
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