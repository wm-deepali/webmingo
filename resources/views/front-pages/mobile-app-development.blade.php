@extends('layouts.app')

@push('styles')
  <link rel="stylesheet" href="assets/sass/mobile-development/mobile.css" />
@endpush

@section('content')

  <main>
    <!-- ============================================================
           01 — HERO
      ============================================================= -->

    @include('partials.hero', [
      'video' => 'assets/video/effect3.mp4',
      'poster' => 'assets/video/poster/effect3.png',
      'default' => [
        'eyebrow' => 'MOBILE APP DEVELOPMENT',
        'heading' => 'Turn Your Business Idea Into a Mobile Experience.',
        'description' => 'We develop Android, iOS and Flutter applications around your users, business processes and the functionality your idea actually requires.',
        'primary_text' => 'Chat on WhatsApp',
        'primary_url' => 'javascript:void(0)',
        'secondary_text' => 'Discuss Your App Idea',
        'secondary_url' => '#enquire',
      ],
    ])

    <!-- ============================================================
         02 — INTRODUCTION (.appIntro)
    ============================================================= -->
    <section class="appIntro">
      <div class="container">
        <div class="appIntro-layout">
          <!-- LEFT -->
          <div class="heading">
            <span class="eyebrow">
              <span class="eyebrow-line"></span>
              MOBILE APP STRATEGY
            </span>

            <h2>
              An App Should Do More Than
              <span>Sit On A User's Phone.</span>
            </h2>

            <p class="appIntro-lead">
              A successful mobile app should make something easier, faster or
              more valuable for its users. We combine product thinking, UX/UI
              design and development to create mobile experiences that solve
              real business and customer needs.
            </p>

            <ul class="appIntro-points">
              <li>
                <span class="appIntro-icon" aria-hidden="true">
                  <svg viewBox="0 0 24 24">
                    <rect x="7" y="2.5" width="10" height="19" rx="2.5" />
                    <path d="M11 18.5h2" />
                  </svg>
                </span>
                Easier Access To Services
              </li>

              <li>
                <span class="appIntro-icon" aria-hidden="true">
                  <svg viewBox="0 0 24 24">
                    <path d="M12 20s-7-4.4-7-10a4 4 0 017-2.6A4 4 0 0119 10c0 5.6-7 10-7 10z" />
                  </svg>
                </span>
                Better Customer Experiences
              </li>

              <li>
                <span class="appIntro-icon" aria-hidden="true">
                  <svg viewBox="0 0 24 24">
                    <path d="M4 12a8 8 0 0114-5M20 12a8 8 0 01-14 5" />
                    <path d="M18 4v4h-4M6 20v-4h4" />
                  </svg>
                </span>
                Simpler Business Processes
              </li>

              <li>
                <span class="appIntro-icon" aria-hidden="true">
                  <svg viewBox="0 0 24 24">
                    <path d="M4 5h16v11H9l-5 4V5z" />
                    <path d="M8 9.5h8M8 12.5h5" />
                  </svg>
                </span>
                Stronger Customer Engagement
              </li>

              <li>
                <span class="appIntro-icon" aria-hidden="true">
                  <svg viewBox="0 0 24 24">
                    <path d="M12 3l1.9 5.1L19 10l-5.1 1.9L12 17l-1.9-5.1L5 10l5.1-1.9L12 3z" />
                    <path d="M19 16v4M17 18h4" />
                  </svg>
                </span>
                New Digital Products
              </li>

              <li>
                <span class="appIntro-icon" aria-hidden="true">
                  <svg viewBox="0 0 24 24">
                    <path d="M4 20h16" />
                    <rect x="6" y="11" width="3" height="9" />
                    <rect x="11" y="6" width="3" height="14" />
                    <rect x="16" y="3" width="3" height="17" />
                  </svg>
                </span>
                Scalable Mobile Experiences
              </li>
            </ul>
          </div>

          <!-- RIGHT — CLEAN PHONE MOCKUP -->
          <div class="appIntro-visual" role="img" aria-label="Illustration of a clean mobile app interface">
            <span class="appIntro-grid"></span>
            <span class="appIntro-glow"></span>
            <span class="appIntro-ring"></span>

            <!-- PHONE -->
            <div class="appIntro-phone">
              <div class="appIntro-screen">
                <span class="appIntro-island"></span>

                <!-- status bar -->
                <div class="appIntro-status">
                  <span>9:41</span>
                  <span class="appIntro-status-icons">
                    <svg viewBox="0 0 24 24">
                      <path d="M4 18v-3M9 18v-6M14 18V9M19 18V6" />
                    </svg>
                    <svg viewBox="0 0 24 24">
                      <rect x="2" y="7" width="18" height="10" rx="3" />
                      <path d="M22 10v4" />
                    </svg>
                  </span>
                </div>

                <!-- header -->
                <div class="appIntro-head">
                  <div>
                    <span>Good morning</span>
                    <strong>Welcome back</strong>
                  </div>
                  <span class="appIntro-avatar">A</span>
                </div>

                <!-- hero card -->
                <div class="appIntro-card">
                  <div class="appIntro-card-copy">
                    <span>FEATURED</span>
                    <strong>Book in one tap</strong>
                    <em>Get started</em>
                  </div>
                  <div class="appIntro-card-art" aria-hidden="true">
                    <span></span>
                    <span></span>
                  </div>
                </div>

                <!-- quick actions -->
                <div class="appIntro-actions">
                  <div class="appIntro-action">
                    <span class="appIntro-tile">
                      <svg viewBox="0 0 24 24">
                        <rect x="4" y="5" width="16" height="15" rx="2" />
                        <path d="M8 3v4M16 3v4M4 10h16" />
                      </svg>
                    </span>
                    Book
                  </div>

                  <div class="appIntro-action">
                    <span class="appIntro-tile">
                      <svg viewBox="0 0 24 24">
                        <rect x="3" y="6" width="18" height="12" rx="2" />
                        <path d="M3 10h18M7 15h3" />
                      </svg>
                    </span>
                    Pay
                  </div>

                  <div class="appIntro-action">
                    <span class="appIntro-tile">
                      <svg viewBox="0 0 24 24">
                        <path d="M12 21s7-5.5 7-11a7 7 0 10-14 0c0 5.5 7 11 7 11z" />
                        <circle cx="12" cy="10" r="2.5" />
                      </svg>
                    </span>
                    Track
                  </div>

                  <div class="appIntro-action">
                    <span class="appIntro-tile">
                      <svg viewBox="0 0 24 24">
                        <path d="M4 5h16v11H9l-5 4V5z" />
                      </svg>
                    </span>
                    Chat
                  </div>
                </div>

                <!-- activity -->
                <div class="appIntro-activity">
                  <span class="appIntro-activity-icon">
                    <svg viewBox="0 0 24 24">
                      <path d="M3 7h11v9H3zM14 10h4l3 3v3h-7" />
                      <circle cx="7" cy="17" r="1.6" />
                      <circle cx="17" cy="17" r="1.6" />
                    </svg>
                  </span>
                  <div>
                    <strong>Order on the way</strong>
                    <span class="appIntro-bar"><i></i></span>
                  </div>
                </div>

                <!-- tab bar -->
                <div class="appIntro-tabs">
                  <span class="appIntro-tab is-active">
                    <svg viewBox="0 0 24 24">
                      <path d="M4 11l8-7 8 7" />
                      <path d="M6 10v10h12V10" />
                    </svg>
                  </span>
                  <span class="appIntro-tab">
                    <svg viewBox="0 0 24 24">
                      <circle cx="11" cy="11" r="6" />
                      <path d="M16 16l4 4" />
                    </svg>
                  </span>
                  <span class="appIntro-tab">
                    <svg viewBox="0 0 24 24">
                      <path d="M6 16v-5a6 6 0 0112 0v5l2 2H4z" />
                      <path d="M10 21h4" />
                    </svg>
                  </span>
                  <span class="appIntro-tab">
                    <svg viewBox="0 0 24 24">
                      <circle cx="12" cy="8" r="3.5" />
                      <path d="M5 20c0-3.9 3.1-6 7-6s7 2.1 7 6" />
                    </svg>
                  </span>
                </div>
              </div>
            </div>

            <!-- FLOATING CARD: TOP -->
            <div class="appIntro-float appIntro-float--top">
              <span class="appIntro-float-icon">
                <svg viewBox="0 0 24 24">
                  <circle cx="12" cy="8" r="3.5" />
                  <path d="M5 20c0-3.9 3.1-6 7-6s7 2.1 7 6" />
                </svg>
              </span>
              <div class="appIntro-float-copy">
                <span>USER EXPERIENCE</span>
                <strong>Designed Around Users</strong>
              </div>
            </div>

            <!-- FLOATING CARD: BOTTOM -->
            <div class="appIntro-float appIntro-float--bottom">
              <span class="appIntro-float-icon">
                <svg viewBox="0 0 24 24">
                  <path d="M5 19V9M12 19V5M19 19V2" />
                  <path d="M3 19h18" />
                </svg>
              </span>
              <div class="appIntro-float-copy">
                <span>BUILT TO SCALE</span>
                <strong>Ready For What's Next</strong>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ============================================================
         03 — OUR MOBILE APP DEVELOPMENT SERVICES
    ============================================================= -->
    <section class="mfgTypes">
      <div class="container">
        <div class="heading">
          <span class="eyebrow">
            <span class="eyebrow-line"></span>
            OUR MOBILE APP DEVELOPMENT SERVICES
          </span>

          <h3>
            Mobile Apps Built To <br />
            <span>Move Your Business Forward.</span>
          </h3>

          <p>
            Mobile solutions built around your users, business goals and
            product needs.
          </p>
        </div>

        <div class="mfgTypes-grid">
          <!-- ======================================================
               ANDROID APPLICATION
          ======================================================= -->
          <a href="{{ route('android-applications-development') }}" class="mfgTypes-card mfgTypes-card--android">
            <img src="assets/images/umbrella/android.png" alt="Android mobile application development" loading="lazy" />

            <div class="mfgTypes-overlay"></div>

            <div class="mfgTypes-content">
              <span>ANDROID APPLICATION</span>

              <h4>
                Apps For
                <strong>Android Users.</strong>
              </h4>

              <p>Reliable mobile experiences built for Android devices.</p>

              <span class="btn btn-outline-white">
                Learn More
                <i>↗</i>
              </span>
            </div>
          </a>

          <!-- ======================================================
               IOS APPLICATION
          ======================================================= -->
          <a href="{{ route('iOS-applications-development') }}" class="mfgTypes-card mfgTypes-card--ios">
            <img src="assets/images/umbrella/iso.png" alt="iOS mobile application development" loading="lazy" />

            <div class="mfgTypes-overlay"></div>

            <div class="mfgTypes-content">
              <span>IOS APPLICATION</span>

              <h4>
                Apps For
                <strong>Apple Devices.</strong>
              </h4>

              <p>Smooth and polished apps for iPhone and iPad users.</p>

              <span class="btn btn-outline-white">
                Learn More
                <i>↗</i>
              </span>
            </div>
          </a>

          <!-- ======================================================
               FLUTTER APPLICATION
          ======================================================= -->
          <a href="{{ route('flutter-app-development') }}" class="mfgTypes-card mfgTypes-card--flutter">
            <img src="assets/images/umbrella/flutter.png" alt="Flutter mobile application development" loading="lazy" />

            <div class="mfgTypes-overlay"></div>

            <div class="mfgTypes-content">
              <span>FLUTTER APPLICATION</span>

              <h4>
                One App.
                <strong>Multiple Platforms.</strong>
              </h4>

              <p>Flexible cross-platform apps for faster product launches.</p>

              <span class="btn btn-outline-white">
                Learn More
                <i>↗</i>
              </span>
            </div>
          </a>

          <!-- ======================================================
               CUSTOM APPLICATION
          ======================================================= -->
          <div class="mfgTypes-card mfgTypes-card--cta">
            <div class="mfgTypes-cta-top">
              <span class="mfgTypes-cta-tag"> NEED SOMETHING CUSTOM? </span>
            </div>

            <div class="mfgTypes-cta-content">
              <h4>Built Around Your Business.</h4>

              <p>
                From unique workflows to customer-facing platforms, we build
                apps around exactly what your business needs.
              </p>
            </div>

            <a href="javascript:void(0)" class="btn btn-black" data-model=".enquire-pop">
              Let’s Discuss Your App

              <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                <path d="M5 12h14" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />

                <path d="m13 6 6 6-6 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                  stroke-linejoin="round" />
              </svg>
            </a>
          </div>
        </div>
      </div>
    </section>

    <!-- ============================================================
           04 — OUR APPROACH
      ============================================================= -->
    <section class="webApproach" id="app-process">
      <div class="container">
        <div class="heading">
          <span class="eyebrow">
            <span class="eyebrow-line"></span>
            OUR APPROACH
          </span>

          <h3>
            From Product Idea<br />
            <span>To A Mobile Experience People Use.</span>
          </h3>

          <p>
            We bring strategy, UX/UI design and development together to turn
            your app idea into a practical, intuitive and scalable mobile
            experience.
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
              <h4>Discover</h4>
              <p>
                Understand your business, users, product idea and the problem
                the app needs to solve.
              </p>
            </div>

            <div class="webApproach-output">
              <span>YOU GET</span>
              <strong>A clear product direction</strong>
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
                Define the app structure, user journeys, features and
                requirements before development begins.
              </p>
            </div>

            <div class="webApproach-output">
              <span>YOU GET</span>
              <strong>App structure &amp; feature plan</strong>
            </div>
          </div>

          <div class="webApproach-step">
            <div class="webApproach-icon">
              <svg viewBox="0 0 24 24" fill="none">
                <rect x="7" y="2.5" width="10" height="19" rx="2.5"></rect>
                <path d="M11 18.5H13"></path>
                <path d="M10 6.5H14"></path>
              </svg>
            </div>

            <div class="webApproach-main">
              <h4>Design</h4>
              <p>
                Create intuitive mobile interfaces that make the experience
                simple, clear and engaging.
              </p>
            </div>

            <div class="webApproach-output">
              <span>YOU GET</span>
              <strong>Intuitive app interface</strong>
            </div>
          </div>

          <div class="webApproach-step">
            <div class="webApproach-icon">
              <svg viewBox="0 0 24 24" fill="none">
                <path d="M8 7L3 12L8 17"></path>
                <path d="M16 7L21 12L16 17"></path>
                <path d="M14 5L10 19"></path>
              </svg>
            </div>

            <div class="webApproach-main">
              <h4>Develop</h4>
              <p>
                Build the app with the functionality, integrations and
                performance your product requires.
              </p>
            </div>

            <div class="webApproach-output">
              <span>YOU GET</span>
              <strong>A working, integrated app</strong>
            </div>
          </div>

          <div class="webApproach-step webApproach-step--final">
            <div class="webApproach-icon">
              <svg viewBox="0 0 24 24" fill="none">
                <path d="M4 20L20 12L4 4V10L14 12L4 14V20Z"></path>
              </svg>
            </div>

            <div class="webApproach-main">
              <h4>Test &amp; Launch</h4>
              <p>
                Test across relevant devices and scenarios, refine the
                experience and prepare for launch.
              </p>
            </div>

            <div class="webApproach-output">
              <span>YOU GET</span>
              <strong>A tested, launch-ready app</strong>
            </div>
          </div>
        </div>

        <div class="webApproach-cta">
          <button type="button" data-model=".enquire-pop" class="btn btn-black">
            Start Your App Project
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
            <span class="ecomPackage-label"> READY TO BUILD YOUR APP </span>

            <h3>
              Everything You Need To
              <span>Build A Better Mobile Experience.</span>
            </h3>

            <p class="ecomPackage-intro">
              We build mobile applications around your users, business
              processes, goals and specific requirements—from native Android
              and iOS apps to cross-platform and custom mobile experiences.
            </p>
          </div>

          <!-- RIGHT: SHORT REQUIREMENT FORM -->
          <div class="ecomPackage-form">
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
                <label for="packageBusiness">Application Type</label>

                <select id="packageBusiness" name="business_type">
                  <option value="" selected disabled>
                    Select your application type
                  </option>
                  <option value="android">Android Application</option>
                  <option value="ios">iOS Application</option>
                  <option value="flutter">Flutter Application</option>
                  <option value="custom">Custom Mobile Application</option>
                  <option value="business">Business Application</option>
                  <option value="ecommerce">E-Commerce Application</option>
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

    <section class="secC" id="app-results">
      <div class="container">
        <div class="heading">
          <span class="eyebrow">
            <span class="eyebrow-line"></span>
            RESULTS &amp; CASE STUDIES
          </span>

          <h3>
            Mobile Products Built <br />
            <span>Around Real User Needs.</span>
          </h3>

          <p>
            Explore mobile experiences designed to simplify interactions,
            improve accessibility and help businesses create stronger digital
            connections with their users.
          </p>
        </div>

        <div class="swiper-wrapped">
          <div class="swiper secC-swiper">
            <div class="swiper-wrapper">
              <!-- 01 — CUSTOMER-FACING APPS -->
              <div class="swiper-slide">
                <div class="secC-panel">
                  <div class="secC-panel__media">
                    <img src="assets/images/comman/FacingApps.jpg" alt="Customer-facing mobile app interface"
                      loading="lazy" />
                  </div>

                  <div class="secC-panel__body">
                    <div class="secC-panel__text">
                      <h4>Customer-Facing Apps</h4>

                      <p>
                        Give users a simpler way to discover, access and
                        interact with your business.
                      </p>
                    </div>

                    <div class="secC-panel__actions">
                      <a href="javascript:void()" target="_blank" rel="noopener" class="btn btn-outline-black">
                        <svg xmlns="http://www.w3.org/2000/svg" width="0.88em" height="1em" viewBox="0 0 448 512">
                          <path d="M0 0h448v512H0z" fill="none"></path>
                          <path fill="currentColor"
                            d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222c0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222c0-59.3-25.2-115-67.1-157m-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4l-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2c0-101.7 82.8-184.5 184.6-184.5c49.3 0 95.6 19.2 130.4 54.1s56.2 81.2 56.1 130.5c0 101.8-84.9 184.6-186.6 184.6m101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18c-5.1-1.9-8.8-2.8-12.5 2.8s-14.3 18-17.6 21.8c-3.2 3.7-6.5 4.2-12 1.4c-32.6-16.3-54-29.1-75.5-66c-5.7-9.8 5.7-9.1 16.3-30.3c1.8-3.7.9-6.9-.5-9.7s-12.5-30.1-17.1-41.2c-4.5-10.8-9.1-9.3-12.5-9.5c-3.2-.2-6.9-.2-10.6-.2s-9.7 1.4-14.8 6.9c-5.1 5.6-19.4 19-19.4 46.3s19.9 53.7 22.6 57.4c2.8 3.7 39.1 59.7 94.8 83.8c35.2 15.2 49 16.5 66.6 13.9c10.7-1.6 32.8-13.4 37.4-26.4s4.6-24.1 3.2-26.4c-1.3-2.5-5-3.9-10.5-6.6">
                          </path>
                        </svg>
                      </a>

                      <button type="button" class="btn btn-black" data-model=".enquire-pop">
                        Let’s Discuss
                      </button>
                    </div>
                  </div>
                </div>
              </div>

              <!-- 02 — BUSINESS & WORKFLOW APPS -->
              <div class="swiper-slide">
                <div class="secC-panel">
                  <div class="secC-panel__media">
                    <img src="assets/images/comman/Workflow-Apps.jpg" alt="Business workflow mobile application"
                      loading="lazy" />
                  </div>

                  <div class="secC-panel__body">
                    <div class="secC-panel__text">
                      <h4>Business &amp; Workflow Apps</h4>

                      <p>
                        Simplify internal processes and daily operations with
                        purpose-built mobile tools.
                      </p>
                    </div>

                    <div class="secC-panel__actions">
                      <a href="javascript:void()" target="_blank" rel="noopener" class="btn btn-outline-black">
                        <svg xmlns="http://www.w3.org/2000/svg" width="0.88em" height="1em" viewBox="0 0 448 512">
                          <path d="M0 0h448v512H0z" fill="none"></path>
                          <path fill="currentColor"
                            d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222c0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222c0-59.3-25.2-115-67.1-157m-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4l-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2c0-101.7 82.8-184.5 184.6-184.5c49.3 0 95.6 19.2 130.4 54.1s56.2 81.2 56.1 130.5c0 101.8-84.9 184.6-186.6 184.6m101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18c-5.1-1.9-8.8-2.8-12.5 2.8s-14.3 18-17.6 21.8c-3.2 3.7-6.5 4.2-12 1.4c-32.6-16.3-54-29.1-75.5-66c-5.7-9.8 5.7-9.1 16.3-30.3c1.8-3.7.9-6.9-.5-9.7s-12.5-30.1-17.1-41.2c-4.5-10.8-9.1-9.3-12.5-9.5c-3.2-.2-6.9-.2-10.6-.2s-9.7 1.4-14.8 6.9c-5.1 5.6-19.4 19-19.4 46.3s19.9 53.7 22.6 57.4c2.8 3.7 39.1 59.7 94.8 83.8c35.2 15.2 49 16.5 66.6 13.9c10.7-1.6 32.8-13.4 37.4-26.4s4.6-24.1 3.2-26.4c-1.3-2.5-5-3.9-10.5-6.6">
                          </path>
                        </svg>
                      </a>

                      <button type="button" class="btn btn-black" data-model=".enquire-pop">
                        Let’s Discuss
                      </button>
                    </div>
                  </div>
                </div>
              </div>

              <!-- 03 — E-COMMERCE APPS -->
              <div class="swiper-slide">
                <div class="secC-panel">
                  <div class="secC-panel__media">
                    <img src="assets/images/comman/E-CommerceApps.jpg" alt="E-commerce mobile shopping app"
                      loading="lazy" />
                  </div>

                  <div class="secC-panel__body">
                    <div class="secC-panel__text">
                      <h4>E-Commerce Apps</h4>

                      <p>
                        Create mobile shopping experiences that make browsing
                        and buying straightforward.
                      </p>
                    </div>

                    <div class="secC-panel__actions">
                      <a href="javascript:void()" target="_blank" rel="noopener" class="btn btn-outline-black">
                        <svg xmlns="http://www.w3.org/2000/svg" width="0.88em" height="1em" viewBox="0 0 448 512">
                          <path d="M0 0h448v512H0z" fill="none"></path>
                          <path fill="currentColor"
                            d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222c0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222c0-59.3-25.2-115-67.1-157m-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4l-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2c0-101.7 82.8-184.5 184.6-184.5c49.3 0 95.6 19.2 130.4 54.1s56.2 81.2 56.1 130.5c0 101.8-84.9 184.6-186.6 184.6m101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18c-5.1-1.9-8.8-2.8-12.5 2.8s-14.3 18-17.6 21.8c-3.2 3.7-6.5 4.2-12 1.4c-32.6-16.3-54-29.1-75.5-66c-5.7-9.8 5.7-9.1 16.3-30.3c1.8-3.7.9-6.9-.5-9.7s-12.5-30.1-17.1-41.2c-4.5-10.8-9.1-9.3-12.5-9.5c-3.2-.2-6.9-.2-10.6-.2s-9.7 1.4-14.8 6.9c-5.1 5.6-19.4 19-19.4 46.3s19.9 53.7 22.6 57.4c2.8 3.7 39.1 59.7 94.8 83.8c35.2 15.2 49 16.5 66.6 13.9c10.7-1.6 32.8-13.4 37.4-26.4s4.6-24.1 3.2-26.4c-1.3-2.5-5-3.9-10.5-6.6">
                          </path>
                        </svg>
                      </a>

                      <button type="button" class="btn btn-black" data-model=".enquire-pop">
                        Let’s Discuss
                      </button>
                    </div>
                  </div>
                </div>
              </div>

              <!-- 04 — ON-DEMAND & BOOKING APPS -->
              <div class="swiper-slide">
                <div class="secC-panel">
                  <div class="secC-panel__media">
                    <img src="assets/images/comman/On-Demand.jpg" alt="On-demand and booking mobile application"
                      loading="lazy" />
                  </div>

                  <div class="secC-panel__body">
                    <div class="secC-panel__text">
                      <h4>On-Demand &amp; Booking Apps</h4>

                      <p>
                        Help users book, order or request services quickly
                        from their phones.
                      </p>
                    </div>

                    <div class="secC-panel__actions">
                      <a href="javascript:void()" target="_blank" rel="noopener" class="btn btn-outline-black">
                        <svg xmlns="http://www.w3.org/2000/svg" width="0.88em" height="1em" viewBox="0 0 448 512">
                          <path d="M0 0h448v512H0z" fill="none"></path>
                          <path fill="currentColor"
                            d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222c0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222c0-59.3-25.2-115-67.1-157m-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4l-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2c0-101.7 82.8-184.5 184.6-184.5c49.3 0 95.6 19.2 130.4 54.1s56.2 81.2 56.1 130.5c0 101.8-84.9 184.6-186.6 184.6m101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18c-5.1-1.9-8.8-2.8-12.5 2.8s-14.3 18-17.6 21.8c-3.2 3.7-6.5 4.2-12 1.4c-32.6-16.3-54-29.1-75.5-66c-5.7-9.8 5.7-9.1 16.3-30.3c1.8-3.7.9-6.9-.5-9.7s-12.5-30.1-17.1-41.2c-4.5-10.8-9.1-9.3-12.5-9.5c-3.2-.2-6.9-.2-10.6-.2s-9.7 1.4-14.8 6.9c-5.1 5.6-19.4 19-19.4 46.3s19.9 53.7 22.6 57.4c2.8 3.7 39.1 59.7 94.8 83.8c35.2 15.2 49 16.5 66.6 13.9c10.7-1.6 32.8-13.4 37.4-26.4s4.6-24.1 3.2-26.4c-1.3-2.5-5-3.9-10.5-6.6">
                          </path>
                        </svg>
                      </a>

                      <button type="button" class="btn btn-black" data-model=".enquire-pop">
                        Let’s Discuss
                      </button>
                    </div>
                  </div>
                </div>
              </div>

              <!-- 05 — CROSS-PLATFORM PRODUCTS -->
              <div class="swiper-slide">
                <div class="secC-panel">
                  <div class="secC-panel__media">
                    <img src="assets/images/comman/Cross-Platform.jpg" alt="Cross-platform mobile product design"
                      loading="lazy" />
                  </div>

                  <div class="secC-panel__body">
                    <div class="secC-panel__text">
                      <h4>Cross-Platform Products</h4>

                      <p>
                        Deliver consistent experiences across iOS and Android
                        from a shared product foundation.
                      </p>
                    </div>

                    <div class="secC-panel__actions">
                      <a href="javascript:void()" target="_blank" rel="noopener" class="btn btn-outline-black">
                        <svg xmlns="http://www.w3.org/2000/svg" width="0.88em" height="1em" viewBox="0 0 448 512">
                          <path d="M0 0h448v512H0z" fill="none"></path>
                          <path fill="currentColor"
                            d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222c0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222c0-59.3-25.2-115-67.1-157m-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4l-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2c0-101.7 82.8-184.5 184.6-184.5c49.3 0 95.6 19.2 130.4 54.1s56.2 81.2 56.1 130.5c0 101.8-84.9 184.6-186.6 184.6m101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18c-5.1-1.9-8.8-2.8-12.5 2.8s-14.3 18-17.6 21.8c-3.2 3.7-6.5 4.2-12 1.4c-32.6-16.3-54-29.1-75.5-66c-5.7-9.8 5.7-9.1 16.3-30.3c1.8-3.7.9-6.9-.5-9.7s-12.5-30.1-17.1-41.2c-4.5-10.8-9.1-9.3-12.5-9.5c-3.2-.2-6.9-.2-10.6-.2s-9.7 1.4-14.8 6.9c-5.1 5.6-19.4 19-19.4 46.3s19.9 53.7 22.6 57.4c2.8 3.7 39.1 59.7 94.8 83.8c35.2 15.2 49 16.5 66.6 13.9c10.7-1.6 32.8-13.4 37.4-26.4s4.6-24.1 3.2-26.4c-1.3-2.5-5-3.9-10.5-6.6">
                          </path>
                        </svg>
                      </a>
                      <button type="button" class="btn btn-black" data-model=".enquire-pop">
                        Let’s Discuss
                      </button>
                    </div>
                  </div>
                </div>
              </div>

              <!-- 06 — APP REDESIGN -->
              <div class="swiper-slide">
                <div class="secC-panel">
                  <div class="secC-panel__media">
                    <img src="assets/images/comman/AppRedesign.jpg" alt="Mobile app redesign and improvement"
                      loading="lazy" />
                  </div>

                  <div class="secC-panel__body">
                    <div class="secC-panel__text">
                      <h4>App Redesign &amp; Improvement</h4>

                      <p>
                        Improve the usability, structure and functionality of
                        existing mobile apps.
                      </p>
                    </div>

                    <div class="secC-panel__actions">
                      <a href="javascript:void()" target="_blank" rel="noopener" class="btn btn-outline-black">
                        <svg xmlns="http://www.w3.org/2000/svg" width="0.88em" height="1em" viewBox="0 0 448 512">
                          <path d="M0 0h448v512H0z" fill="none"></path>
                          <path fill="currentColor"
                            d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222c0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222c0-59.3-25.2-115-67.1-157m-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4l-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2c0-101.7 82.8-184.5 184.6-184.5c49.3 0 95.6 19.2 130.4 54.1s56.2 81.2 56.1 130.5c0 101.8-84.9 184.6-186.6 184.6m101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18c-5.1-1.9-8.8-2.8-12.5 2.8s-14.3 18-17.6 21.8c-3.2 3.7-6.5 4.2-12 1.4c-32.6-16.3-54-29.1-75.5-66c-5.7-9.8 5.7-9.1 16.3-30.3c1.8-3.7.9-6.9-.5-9.7s-12.5-30.1-17.1-41.2c-4.5-10.8-9.1-9.3-12.5-9.5c-3.2-.2-6.9-.2-10.6-.2s-9.7 1.4-14.8 6.9c-5.1 5.6-19.4 19-19.4 46.3s19.9 53.7 22.6 57.4c2.8 3.7 39.1 59.7 94.8 83.8c35.2 15.2 49 16.5 66.6 13.9c10.7-1.6 32.8-13.4 37.4-26.4s4.6-24.1 3.2-26.4c-1.3-2.5-5-3.9-10.5-6.6">
                          </path>
                        </svg>
                      </a>
                      <button type="button" class="btn btn-black" data-model=".enquire-pop">
                        Let’s Discuss
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
           07 — WHY WEB MINGO
      ============================================================= -->
    <section class="secL">
      <div class="container">
        <div class="heading">
          <span class="eyebrow">
            <span class="eyebrow-line"></span>
            WHY WEB MINGO
          </span>

          <h3>
            Apps Built For
            <span>Your Business.</span>
          </h3>

          <p>
            We design and develop mobile apps that work for your users and
            business.
          </p>
        </div>

        <ul class="secL-list">
          <li>
            <span class="secL-icon">
              <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                <circle cx="12" cy="12" r="8" stroke="currentColor" stroke-width="1.5" />
                <circle cx="12" cy="12" r="4" stroke="currentColor" stroke-width="1.5" />
                <circle cx="12" cy="12" r="1" stroke="currentColor" stroke-width="1.5" />
              </svg>
            </span>

            <div>
              <h4>Business-First Thinking</h4>
              <p>
                We begin with the problem your app needs to solve and the
                outcome you want to achieve.
              </p>
            </div>
          </li>

          <li>
            <span class="secL-icon">
              <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                <circle cx="12" cy="8" r="3.5" stroke="currentColor" stroke-width="1.5" />
                <path d="M5 20c0-3.9 3.1-6 7-6s7 2.1 7 6" stroke="currentColor" stroke-width="1.5"
                  stroke-linecap="round" />
              </svg>
            </span>

            <div>
              <h4>User-Centered Experience</h4>
              <p>
                We design around how real users discover, navigate and
                interact with your app.
              </p>
            </div>
          </li>

          <li>
            <span class="secL-icon">
              <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                <path d="M4 20h16" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                <rect x="6" y="11" width="3" height="9" stroke="currentColor" stroke-width="1.5" />
                <rect x="11" y="6" width="3" height="14" stroke="currentColor" stroke-width="1.5" />
                <rect x="16" y="13" width="3" height="7" stroke="currentColor" stroke-width="1.5" />
              </svg>
            </span>

            <div>
              <h4>Scalable &amp; Performance-Focused</h4>
              <p>
                We build for future growth, with attention to responsiveness,
                reliability and purposeful features.
              </p>
            </div>
          </li>

          <li>
            <span class="secL-icon">
              <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                <circle cx="6" cy="12" r="3" stroke="currentColor" stroke-width="1.5" />
                <circle cx="18" cy="6" r="3" stroke="currentColor" stroke-width="1.5" />
                <circle cx="18" cy="18" r="3" stroke="currentColor" stroke-width="1.5" />
                <path d="M8.7 10.6L15.3 7.4M8.7 13.4L15.3 16.6" stroke="currentColor" stroke-width="1.5"
                  stroke-linecap="round" />
              </svg>
            </span>

            <div>
              <h4>Connected Team</h4>
              <p>
                Strategy, design and development stay aligned throughout the
                project.
              </p>
            </div>
          </li>
        </ul>

        <div class="cntr">
          <button type="button" data-model=".enquire-pop" class="btn btn-outline-black">
            Start Your App Project
            <i>↗</i>
          </button>
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
            Mobile Experiences Built <br />
            <span>For Different Business Needs.</span>
          </h3>

          <p>
            Every industry has different users, workflows and expectations. We
            design mobile experiences around how people interact with your
            business.
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
           09 — FINAL CTA
      ============================================================= -->
    <div class="container">
      <div class="cta-promo">
        <div class="cta-promo__inner">
          <span class="cta-promo__eyebrow">READY TO BUILD YOUR APP?</span>

          <h3 class="cta-promo__heading">
            Let's Turn Your App Idea Into A Real Mobile Experience.
          </h3>

          <p class="cta-promo__sub">
            Tell us what you want your app to achieve, and let's explore the
            right product, design and development approach for your business.
          </p>

          <div class="cta-promo__actions">
            <button class="btn btn-white" data-model=".enquire-pop">
              Start Your App Project
              <i>↗</i>
            </button>

            <a href="#app-results" class="btn btn-outline-white">
              View Our Work
              <i>↗</i>
            </a>
          </div>
        </div>
      </div>
    </div>

    <!-- ============================================================
           08 — FAQ
      ============================================================= -->
    @include('partials.page-faqs', [
      'eyebrow' => 'FREQUENTLY ASKED QUESTIONS',
      'title' => 'What Type Of Mobile App <br /><span>Does My Business Need?</span>',
      'intro' => 'Straightforward answers to help you understand your options before you start.',
    ])

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