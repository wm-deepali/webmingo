@extends('layouts.app')

@push('styles')
  <link rel="stylesheet" href="assets/sass/classified/classified.css" />
@endpush

@section('content')
  <main>

    @include('partials.hero', [
      'video' => 'assets/video/effect4.mp4',
      'poster' => 'assets/video/poster/effect4.png',
      'default' => [
        'eyebrow' => 'CLASSIFIED PORTAL DEVELOPMENT',
        'heading' => 'Turn Your Marketplace Idea Into a Powerful Classified Portal.',
        'description' => 'We build custom classified platforms where sellers can post listings, buyers can discover them and your marketplace can grow.',
        'primary_text' => 'Discuss Your Portal Idea',
        'primary_url' => '#enquire',
        'secondary_text' => 'Chat on WhatsApp',
        'secondary_url' => 'javascript:void(0)',
      ],
    ])

    <!-- ============================================================
         02 — CLASSIFIED PORTAL INTRO
    ============================================================= -->
    <section class="appIntro">
      <div class="container">
        <div class="appIntro-head">
          <div class="heading">
            <h3>
              More Than A Listing Platform.
              <span>Built For Real Connections.</span>
            </h3>
          </div>

          <div class="appIntro-intro">
            <p>
              We build custom classified portals that make it easier for
              people to discover products, services and opportunities, connect
              with the right sellers, and take action through a marketplace
              designed around your business.
            </p>
          </div>
        </div>

        <div class="appIntro-points">
          <div class="appIntro-point">
            <h4>Discover</h4>
            <p>
              Help users find relevant listings quickly through structured
              categories, powerful search, location-based discovery and
              intuitive filters.
            </p>
          </div>

          <div class="appIntro-point">
            <h4>Connect</h4>
            <p>
              Give buyers and sellers simple ways to communicate, enquire,
              share details and build meaningful marketplace interactions.
            </p>
          </div>

          <div class="appIntro-point">
            <h4>Grow</h4>
            <p>
              Create a flexible platform that can expand with new categories,
              locations, sellers, listings, monetisation models and users.
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- ============================================================
         03 — TYPES OF CLASSIFIED PORTALS WE DEVELOP
    ============================================================= -->
    <section class="classifiedTypes">
      <div class="container">
        <div class="heading">
          <span class="eyebrow">
            <span class="eyebrow-line"></span>
            CLASSIFIED SOLUTIONS
          </span>
          <h3>
            Classified Portals For
            <span>Every Marketplace Idea.</span>
          </h3>

          <p>
            From everyday listings to specialised marketplaces, we build
            classified platforms around your audience, categories and business
            model.
          </p>
        </div>

        <div class="classifiedTypes-grid">
          <!-- FEATURED -->
          <article class="classifiedTypes-card classifiedTypes-card--featured">
            <img src="assets/images/website/RealEstateClassifiedPortals.png" alt="Real estate classified portal"
              loading="lazy" />

            <div class="classifiedTypes-overlay"></div>

            <div class="classifiedTypes-content">
              <span>01 / PROPERTY</span>

              <h4>Real Estate<br /><span>Classified Portals</span></h4>

              <p>
                Connect property owners, buyers, agents and tenants through
                powerful property listings and discovery tools.
              </p>

              <div class="classifiedTypes-arrow">↗</div>
            </div>
          </article>

          <!-- AUTOMOBILE -->
          <article class="classifiedTypes-card">
            <img src="assets/images/website/VehiclesAutomobiles.png" alt="Automobile classified portal" loading="lazy" />

            <div class="classifiedTypes-overlay"></div>

            <div class="classifiedTypes-content">
              <span>03 / AUTOMOTIVE</span>

              <h4>Vehicles &amp; Automobiles</h4>

              <p>
                Help dealers and private sellers list cars, bikes and
                commercial vehicles with detailed search options.
              </p>

              <div class="classifiedTypes-arrow">↗</div>
            </div>
          </article>

          <!-- JOBS -->
          <article class="classifiedTypes-card">
            <img src="assets/images/website/JobsRecruitment.png" alt="Job classified portal" loading="lazy" />

            <div class="classifiedTypes-overlay"></div>

            <div class="classifiedTypes-content">
              <span>04 / CAREERS</span>

              <h4>Jobs &amp; Recruitment</h4>

              <p>
                Bring employers and job seekers together with searchable jobs,
                applications and professional profiles.
              </p>

              <div class="classifiedTypes-arrow">↗</div>
            </div>
          </article>

          <!-- SPECIALISED -->
          <article class="classifiedTypes-card classifiedTypes-card--wide">
            <img src="assets/images/website/Livestock.png" alt="Agriculture and livestock classified marketplace"
              loading="lazy" />

            <div class="classifiedTypes-overlay"></div>

            <div class="classifiedTypes-content">
              <span>07 / SPECIALISED MARKETPLACES</span>

              <h4>Livestock, Agriculture &amp; More</h4>

              <p>
                Build niche classified platforms for livestock, agriculture,
                matrimonial services, communities and specialised industries.
              </p>

              <div class="classifiedTypes-arrow">↗</div>
            </div>
          </article>
          <div class="classifiedTypes-more">
            <div class="classifiedTypes-more-content">
              <span>YOUR MARKETPLACE IDEA</span>

              <h4>Have A Different Classified Concept?</h4>

              <p>
                We can create a custom marketplace around your category,
                audience, listing model and business requirements.
              </p>
            </div>

            <button data-model=".enquire-pop" href="javascript:void(0)" class="btn btn-outline-black">
              Discuss Your Idea <i>↗</i>
            </button>
          </div>
        </div>
      </div>
    </section>

    <section class="scrollStory">
      <div class="container">
        <div class="heading">
          <span class="eyebrow">
            <span class="eyebrow-line"></span>
            HOW IT WORKS
          </span>

          <h3>
            One Platform.<br />
            <span>Every Marketplace Journey Connected.</span>
          </h3>

          <p>
            From managing the marketplace to publishing listings, discovering
            products or services and starting conversations, every step
            connects to create a smooth classified experience.
          </p>
        </div>

        <div class="scrollStory-pin">
          <div class="storyStage">
            <!-- LEFT VISUAL -->
            <div class="storyLeft">
              <div class="swiper storyLeft-swiper">
                <div class="swiper-wrapper">
                  <!-- 01 -->
                  <div class="swiper-slide">
                    <span class="faceNum">01</span>
                    <div class="faceIcon">
                      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.3" stroke-linecap="round"
                        stroke-linejoin="round">
                        <rect x="3" y="4" width="18" height="16" rx="2.5" />
                        <path d="M3 10h18" />
                        <path d="M8 7h.01M12 7h.01" />
                      </svg>
                    </div>
                    <strong>Platform Admin</strong>
                  </div>

                  <!-- 02 -->
                  <div class="swiper-slide">
                    <span class="faceNum">02</span>
                    <div class="faceIcon">
                      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.3" stroke-linecap="round"
                        stroke-linejoin="round">
                        <circle cx="9" cy="7" r="4" />
                        <path d="M2 21v-2a7 7 0 0 1 14 0v2" />
                        <path d="M16 11h6" />
                        <path d="M19 8v6" />
                      </svg>
                    </div>
                    <strong>Sellers / Advertisers</strong>
                  </div>

                  <!-- 03 -->
                  <div class="swiper-slide">
                    <span class="faceNum">03</span>
                    <div class="faceIcon">
                      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.3" stroke-linecap="round"
                        stroke-linejoin="round">
                        <rect x="3" y="4" width="18" height="16" rx="2" />
                        <path d="M3 9h18" />
                        <path d="M7 14h4" />
                        <path d="M7 17h7" />
                      </svg>
                    </div>
                    <strong>Listings</strong>
                  </div>

                  <!-- 04 -->
                  <div class="swiper-slide">
                    <span class="faceNum">04</span>
                    <div class="faceIcon">
                      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.3" stroke-linecap="round"
                        stroke-linejoin="round">
                        <circle cx="10.5" cy="10.5" r="6.5" />
                        <path d="m16 16 5 5" />
                        <path d="M8 10.5h5" />
                      </svg>
                    </div>
                    <strong>Buyers</strong>
                  </div>

                  <!-- 05 -->
                  <div class="swiper-slide">
                    <span class="faceNum">05</span>
                    <div class="faceIcon">
                      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.3" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path d="M21 11.5a8 8 0 0 1-8.5 8L7 22v-3.5A8 8 0 1 1 21 11.5Z" />
                        <path d="M8 11h8" />
                        <path d="M8 14h5" />
                      </svg>
                    </div>
                    <strong>Enquiries / Connections</strong>
                  </div>
                </div>
              </div>

              <!-- PROGRESS (desktop only) -->
              <div class="storyRail">
                <span class="railDot active"></span>
                <span class="railDot"></span>
                <span class="railDot"></span>
                <span class="railDot"></span>
                <span class="railDot"></span>
              </div>
            </div>

            <!-- RIGHT CONTENT -->
            <div class="storyRight">
              <div class="swiper storyRight-swiper">
                <div class="swiper-wrapper">
                  <!-- 01 -->
                  <div class="swiper-slide">
                    <span class="blockNum">01</span>
                    <h4>Platform Admin</h4>
                    <p>
                      The platform admin manages the marketplace from one central
                      system, controlling users, categories, listings, approvals,
                      packages and overall platform activity.
                    </p>
                    <div class="storyMeta">
                      <span>Manage</span>
                      <span>Control</span>
                      <span>Monitor</span>
                    </div>
                  </div>

                  <!-- 02 -->
                  <div class="swiper-slide">
                    <span class="blockNum">02</span>
                    <h4>Sellers / Advertisers</h4>
                    <p>
                      Sellers and advertisers create accounts, add their products,
                      properties, services or other offerings and publish them on
                      the marketplace through a simple listing process.
                    </p>
                    <div class="storyMeta">
                      <span>Create Profile</span>
                      <span>Post Listing</span>
                      <span>Promote</span>
                    </div>
                  </div>

                  <!-- 03 -->
                  <div class="swiper-slide">
                    <span class="blockNum">03</span>
                    <h4>Listings</h4>
                    <p>
                      Every advertisement is organised into relevant categories
                      with searchable details, images, pricing and information
                      that helps buyers quickly understand what is being offered.
                    </p>
                    <div class="storyMeta">
                      <span>Categories</span>
                      <span>Search</span>
                      <span>Details</span>
                    </div>
                  </div>

                  <!-- 04 -->
                  <div class="swiper-slide">
                    <span class="blockNum">04</span>
                    <h4>Buyers</h4>
                    <p>
                      Buyers discover relevant listings through categories, search
                      and filters, compare available options and explore the
                      details before deciding which seller or advertiser to
                      contact.
                    </p>
                    <div class="storyMeta">
                      <span>Discover</span>
                      <span>Filter</span>
                      <span>Compare</span>
                    </div>
                  </div>

                  <!-- 05 -->
                  <div class="swiper-slide">
                    <span class="blockNum">05</span>
                    <h4>Enquiries / Connections</h4>
                    <p>
                      Once buyers find what they need, they can connect with
                      sellers through enquiries, contact requests or direct
                      communication, turning marketplace activity into real
                      business connections.
                    </p>
                    <div class="storyMeta">
                      <span>Enquiries</span>
                      <span>Contact</span>
                      <span>Connections</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- MOBILE NAV (hidden on desktop) -->
            <div class="storyNav">
              <button type="button" class="storyNav-btn storyNav-prev" aria-label="Previous">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                  stroke-linejoin="round">
                  <path d="m15 18-6-6 6-6" />
                </svg>
              </button>

              <span class="storyNav-count"><b>01</b> / 05</span>

              <button type="button" class="storyNav-btn storyNav-next" aria-label="Next">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                  stroke-linejoin="round">
                  <path d="m9 18 6-6-6-6" />
                </svg>
              </button>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="classifiedFlow">
      <div class="container">
        <div class="classifiedFlow-support">
          <div class="classifiedFlow-support-copy">
            <span class="eyebrow">
              <span class="eyebrow-line"></span>
              Behind the marketplace
            </span>
            <h4>
              Powerful controls without
              <strong> complicating the experience.</strong>
            </h4>

            <p>
              Your team gets the tools to run the marketplace behind the
              scenes, while sellers and visitors get a simple, intuitive
              experience on the front end.
            </p>

            <div class="classifiedFlow-support-points">
              <div>
                <strong>User & listing management</strong>
              </div>

              <div>
                <strong>Categories & approvals</strong>
              </div>

              <div>
                <strong>Reports & marketplace activity</strong>
              </div>
            </div>
          </div>

          <div class="classifiedFlow-support-image">
            <div class="classifiedFlow-support-image-inner">
              <img src="https://s3.envato.com/files/267691516/Classified%20Pro%20JPG%20Files/19_Dashboard.jpg"
                alt="Classified portal administration dashboard" width="1600" height="1000" loading="lazy" />
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ============================================================
         CORE CLASSIFIED PORTAL CAPABILITIES
    ============================================================= -->
    <section class="classifiedCaps">
      <div class="container">
        <div class="heading">
          <span class="eyebrow">
            <span class="eyebrow-line"></span>
            CORE CAPABILITIES
          </span>

          <h3>
            Everything Your Classified Marketplace Needs.
            <span>Built Into One Platform.</span>
          </h3>

          <p>
            From publishing listings to discovering products and connecting
            with sellers, every essential marketplace experience works
            together in one seamless platform.
          </p>
        </div>

        <div class="classifiedCaps-flow">
          <!-- LEFT -->
          <div class="classifiedCaps-intro">
            <span class="classifiedCaps-label">ONE PLATFORM</span>

            <h4>
              Designed Around
              <span>How Classifieds Work.</span>
            </h4>

            <p>
              Give buyers a faster way to discover listings and sellers
              everything they need to publish, manage and grow their ads.
            </p>

            <div class="classifiedCaps-stat">
              <strong>09+</strong>
              <span>Core marketplace capabilities</span>
            </div>
          </div>

          <!-- RIGHT -->
          <div class="classifiedCaps-list">
            <div class="classifiedCaps-item">
              <div class="classifiedCaps-icon">
                <!-- user icon -->
                <svg viewBox="0 0 24 24" fill="none">
                  <circle cx="12" cy="8" r="3.5" stroke="currentColor" />
                  <path d="M5 20c.8-3.2 3.2-5 7-5s6.2 1.8 7 5" stroke="currentColor" />
                </svg>
              </div>

              <div class="classifiedCaps-copy">
                <h4>User Registration</h4>
                <p>
                  Email, phone and social sign-up with OTP verification and
                  buyer or seller accounts.
                </p>
              </div>

              <span class="classifiedCaps-arrow">↗</span>
            </div>

            <div class="classifiedCaps-item">
              <div class="classifiedCaps-icon">
                <!-- edit icon -->
                <svg viewBox="0 0 24 24" fill="none">
                  <path d="M4 20h4L19 9l-4-4L4 16v4Z" stroke="currentColor" />
                  <path d="m13.5 6.5 4 4" stroke="currentColor" />
                </svg>
              </div>

              <div class="classifiedCaps-copy">
                <h4>Post &amp; Edit Ads</h4>
                <p>
                  Create listings with images, details, previews, editing and
                  re-publishing options.
                </p>
              </div>

              <span class="classifiedCaps-arrow">↗</span>
            </div>

            <div class="classifiedCaps-item">
              <div class="classifiedCaps-icon">
                <!-- category icon -->
                <svg viewBox="0 0 24 24" fill="none">
                  <rect x="4" y="4" width="6" height="6" rx="1" stroke="currentColor" />
                  <rect x="14" y="4" width="6" height="6" rx="1" stroke="currentColor" />
                  <rect x="4" y="14" width="6" height="6" rx="1" stroke="currentColor" />
                  <rect x="14" y="14" width="6" height="6" rx="1" stroke="currentColor" />
                </svg>
              </div>

              <div class="classifiedCaps-copy">
                <h4>Categories &amp; Subcategories</h4>
                <p>
                  Organize listings with flexible category structures, custom
                  fields and SEO controls.
                </p>
              </div>

              <span class="classifiedCaps-arrow">↗</span>
            </div>

            <div class="classifiedCaps-item">
              <div class="classifiedCaps-icon">
                <!-- location icon -->
                <svg viewBox="0 0 24 24" fill="none">
                  <path d="M19 10c0 5-7 10-7 10S5 15 5 10a7 7 0 1 1 14 0Z" stroke="currentColor" />
                  <circle cx="12" cy="10" r="2.2" stroke="currentColor" />
                </svg>
              </div>

              <div class="classifiedCaps-copy">
                <h4>Location Based Listings</h4>
                <p>
                  Help users discover nearby listings with city, radius and
                  map-based location filtering.
                </p>
              </div>

              <span class="classifiedCaps-arrow">↗</span>
            </div>

            <div class="classifiedCaps-item">
              <div class="classifiedCaps-icon">
                <!-- search icon -->
                <svg viewBox="0 0 24 24" fill="none">
                  <circle cx="10.5" cy="10.5" r="6" stroke="currentColor" />
                  <path d="m15 15 5 5" stroke="currentColor" />
                </svg>
              </div>

              <div class="classifiedCaps-copy">
                <h4>Search &amp; Filters</h4>
                <p>
                  Fast search with price, condition, date and other
                  marketplace-specific filters.
                </p>
              </div>

              <span class="classifiedCaps-arrow">↗</span>
            </div>

            <div class="classifiedCaps-item">
              <div class="classifiedCaps-icon">
                <!-- seller icon -->
                <svg viewBox="0 0 24 24" fill="none">
                  <circle cx="12" cy="8" r="3" stroke="currentColor" />
                  <path d="M6 20c.7-3 2.7-4.5 6-4.5s5.3 1.5 6 4.5" stroke="currentColor" />
                  <path d="M17 6.5h3M18.5 5v3" stroke="currentColor" />
                </svg>
              </div>

              <div class="classifiedCaps-copy">
                <h4>Seller Profiles</h4>
                <p>
                  Build trust with seller profiles, ratings, verification
                  badges and response information.
                </p>
              </div>

              <span class="classifiedCaps-arrow">↗</span>
            </div>

            <div class="classifiedCaps-item">
              <div class="classifiedCaps-icon">
                <!-- message icon -->
                <svg viewBox="0 0 24 24" fill="none">
                  <path d="M5 6h14v10H9l-4 3V6Z" stroke="currentColor" />
                  <path d="M8 10h8M8 13h5" stroke="currentColor" />
                </svg>
              </div>

              <div class="classifiedCaps-copy">
                <h4>Enquiries &amp; Messaging</h4>
                <p>
                  Let buyers and sellers communicate through enquiries and
                  secure in-platform messaging.
                </p>
              </div>

              <span class="classifiedCaps-arrow">↗</span>
            </div>

            <div class="classifiedCaps-item">
              <div class="classifiedCaps-icon">
                <!-- heart icon -->
                <svg viewBox="0 0 24 24" fill="none">
                  <path d="M20 9c0 5-8 10-8 10S4 14 4 9a4.5 4.5 0 0 1 8-2.8A4.5 4.5 0 0 1 20 9Z" stroke="currentColor" />
                </svg>
              </div>

              <div class="classifiedCaps-copy">
                <h4>Favorites &amp; Saved Ads</h4>
                <p>
                  Save interesting listings and bring users back with saved
                  items and useful alerts.
                </p>
              </div>

              <span class="classifiedCaps-arrow">↗</span>
            </div>

            <div class="classifiedCaps-item">
              <div class="classifiedCaps-icon">
                <!-- management icon -->
                <svg viewBox="0 0 24 24" fill="none">
                  <rect x="4" y="4" width="16" height="16" rx="2" stroke="currentColor" />
                  <path d="M8 9h8M8 13h5M8 17h3" stroke="currentColor" />
                </svg>
              </div>

              <div class="classifiedCaps-copy">
                <h4>Ad Management</h4>
                <p>
                  Manage approvals, expiry, renewals, featured ads and listing
                  performance from one place.
                </p>
              </div>

              <span class="classifiedCaps-arrow">↗</span>
            </div>
          </div>
        </div>

        <div class="classifiedCaps-bottom">
          <div>
            <span>BUILT AROUND YOUR MODEL</span>

            <h4>Need Something More Custom?</h4>

            <p>
              Add your own workflows, business rules, integrations and
              marketplace features as your platform grows.
            </p>
          </div>

          <button data-model=".enquire-pop" type="button" class="btn btn-outline-black">
            Discuss Your Idea
            <i>↗</i>
          </button>
        </div>
      </div>
    </section>

    <section class="ecomRevenue">
      <div class="container">
        <div class="heading">
          <span class="eyebrow">
            <span class="eyebrow-line"></span>
            MULTIPLE WAYS TO EARN
          </span>

          <h3>
            How Your Classified Portal
            <span>Can Generate Revenue.</span>
          </h3>

          <p>
            A classified platform isn't limited to one income stream — build
            in multiple monetization models that work together to maximize
            your earnings.
          </p>
        </div>

        <div class="ecomRevenue-grid">
          <!-- 01 -->
          <article class="ecomRevenue-item">
            <span class="ecomRevenue-num">01</span>

            <span class="ecomRevenue-icon" aria-hidden="true">
              <svg viewBox="0 0 24 24">
                <path d="M9 5H7a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2h-2" />
                <rect x="9" y="3" width="6" height="4" rx="1" />
                <path d="M9 12h6M9 16h4" />
              </svg>
            </span>

            <h4>Free &amp; Paid Listings</h4>
            <p>
              Let users post basic listings for free to drive volume, while
              charging for extended visibility, longer duration or extra
              listing slots.
            </p>

            <span class="ecomRevenue-tag">Pay-per-listing</span>
          </article>

          <!-- 02 -->
          <article class="ecomRevenue-item">
            <span class="ecomRevenue-num">02</span>

            <span class="ecomRevenue-icon" aria-hidden="true">
              <svg viewBox="0 0 24 24">
                <path d="M12 2l2.9 6.3 6.9.8-5 4.9 1.3 6.9L12 17.8 5.9 20.9l1.3-6.9-5-4.9 6.9-.8L12 2z" />
              </svg>
            </span>

            <h4>Featured Ads</h4>
            <p>
              Sellers pay to have their listing highlighted with a badge,
              color or border — boosting clicks and standing out from regular
              listings.
            </p>

            <span class="ecomRevenue-tag">One-time fee</span>
          </article>

          <!-- 03 -->
          <article class="ecomRevenue-item">
            <span class="ecomRevenue-num">03</span>

            <span class="ecomRevenue-icon" aria-hidden="true">
              <svg viewBox="0 0 24 24">
                <rect x="3" y="3" width="18" height="18" rx="2" />
                <path d="M3 9h18M9 21V9" />
              </svg>
            </span>

            <h4>Premium Placement</h4>
            <p>
              Offer top-of-search, homepage or category-top positions so
              sellers can pay to be seen first by every visitor searching that
              category.
            </p>

            <span class="ecomRevenue-tag">Position-based pricing</span>
          </article>

          <!-- 04 -->
          <article class="ecomRevenue-item">
            <span class="ecomRevenue-num">04</span>

            <span class="ecomRevenue-icon" aria-hidden="true">
              <svg viewBox="0 0 24 24">
                <path
                  d="M20 7H4a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h1v7a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-7h1a1 1 0 0 0 1-1V8a1 1 0 0 0-1-1z" />
                <path d="M12 7v13M8 7a4 4 0 1 1 4-4 4 4 0 0 1 4 4" />
              </svg>
            </span>

            <h4>Seller Packages</h4>
            <p>
              Bundle multiple listings, featured slots and validity days into
              tiered packages — Starter, Growth, Business — priced for every
              type of seller.
            </p>

            <span class="ecomRevenue-tag">Bundled pricing</span>
          </article>

          <!-- 05 -->
          <article class="ecomRevenue-item">
            <span class="ecomRevenue-num">05</span>

            <span class="ecomRevenue-icon" aria-hidden="true">
              <svg viewBox="0 0 24 24">
                <path d="M17 1l4 4-4 4" />
                <path d="M3 11V9a4 4 0 0 1 4-4h14" />
                <path d="M7 23l-4-4 4-4" />
                <path d="M21 13v2a4 4 0 0 1-4 4H3" />
              </svg>
            </span>

            <h4>Subscriptions</h4>
            <p>
              Turn regular sellers, dealers and businesses into recurring
              revenue with monthly or yearly plans for unlimited or
              higher-volume posting.
            </p>

            <span class="ecomRevenue-tag">Recurring revenue</span>
          </article>

          <!-- 06 -->
          <article class="ecomRevenue-item">
            <span class="ecomRevenue-num">06</span>

            <span class="ecomRevenue-icon" aria-hidden="true">
              <svg viewBox="0 0 24 24">
                <rect x="2" y="4" width="20" height="16" rx="2" />
                <path d="M2 9h20M7 15h5" />
              </svg>
            </span>

            <h4>Banner Advertising</h4>
            <p>
              Sell homepage, category and sidebar banner space to brands and
              local businesses looking to reach your platform's audience.
            </p>

            <span class="ecomRevenue-tag">Ad space rental</span>
          </article>
        </div>

        <!-- BOTTOM STRIP -->
        <div class="ecomRevenue-bottom">
          <div class="ecomRevenue-bottom__content">
            <span class="ecomRevenue-bottom__label">
              BUILT-IN, NOT BOLTED ON
            </span>

            <h4>
              Every revenue model
              <span>works together, not alone.</span>
            </h4>

            <p>
              We design your classified portal so these monetization options
              run side by side from day one — giving you more than one way to
              earn from the same traffic.
            </p>
          </div>

          <button type="button" class="btn btn-black" data-model=".enquire-pop">
            Discuss Your Monetization Plan <i>↗</i>
          </button>
        </div>
      </div>
    </section>

    <!-- ============================================================
         SCALABILITY & CUSTOM DEVELOPMENT
    ============================================================= -->
    <section class="classifiedScale">
      <div class="container">
        <div class="heading">
          <span class="eyebrow">
            <span class="eyebrow-line"></span>
            SCALABILITY &amp; CUSTOM DEVELOPMENT
          </span>

          <h3>
            Built for One City. Ready for
            <span>the Whole Country.</span>
          </h3>

          <p>
            The same platform that launches a single-city marketplace runs a
            nationwide one — no rebuild at any stage.
          </p>
        </div>

        <div class="classifiedScale-path">
          <div class="classifiedScale-stage classifiedScale-stage--sm">
            <div class="classifiedScale-stage-top">
              <div class="classifiedScale-meter">
                <i class="is-filled"></i><i></i><i></i>
              </div>
              <span class="classifiedScale-stage-label">CITIES</span>
              <h4>Start in <strong>one city.</strong></h4>
              <p>
                Launch a single-city marketplace with listings, categories and
                seller tools already in place.
              </p>
            </div>
            <div class="classifiedScale-stage-metric">
              <strong>1</strong>
              <span>city, fully live</span>
            </div>
          </div>

          <div class="classifiedScale-stage classifiedScale-stage--md">
            <div class="classifiedScale-stage-top">
              <div class="classifiedScale-meter">
                <i class="is-filled"></i><i class="is-filled"></i><i></i>
              </div>
              <span class="classifiedScale-stage-label">STATES</span>
              <h4>Expand across <strong>a state.</strong></h4>
              <p>
                Add cities under one state without touching search, moderation
                or seller onboarding.
              </p>
            </div>
            <div class="classifiedScale-stage-metric">
              <strong>12+</strong>
              <span>cities per state</span>
            </div>
          </div>

          <div class="classifiedScale-stage classifiedScale-stage--lg">
            <div class="classifiedScale-stage-top">
              <div class="classifiedScale-meter">
                <i class="is-filled"></i><i class="is-filled"></i><i class="is-filled"></i>
              </div>
              <span class="classifiedScale-stage-label">NATIONWIDE</span>
              <h4>Run it <strong>nationwide.</strong></h4>
              <p>
                The same platform handles listings and sellers across every
                state, with no architecture changes.
              </p>
            </div>
            <div class="classifiedScale-stage-metric">
              <strong>500+</strong>
              <span>cities supported</span>
            </div>
          </div>
        </div>

        <p class="classifiedScale-note">
          Search, payments, moderation and seller tools are built once and
          extended as new cities and states come online.
        </p>

        <div class="classifiedScale-metrics">
          <div class="classifiedScale-metrics-intro">
            <span>WHAT SCALES WITH YOU</span>
            <h4>
              Every layer <br />
              <strong>grows with demand.</strong>
            </h4>
            <button data-model=".enquire-pop" class="btn btn-outline-black">
              Build for Growth
            </button>
          </div>

          <div class="classifiedScale-metrics-list">
            <div>
              <i></i>
              <p>
                <strong>Categories</strong> — new verticals slot into the same
                taxonomy, from vehicles to real estate to jobs.
              </p>
            </div>
            <div>
              <i></i>
              <p>
                <strong>Sellers</strong> — onboarding, verification and
                dashboards handle a handful of sellers or a hundred thousand.
              </p>
            </div>
            <div>
              <i></i>
              <p>
                <strong>Listings</strong> — search and filtering stay fast
                whether there are a thousand listings or ten million.
              </p>
            </div>
            <div>
              <i></i>
              <p>
                <strong>Traffic</strong> — infrastructure scales with demand,
                from a soft launch to peak nationwide traffic.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ============================================================
         CLASSIFIED PORTAL DEVELOPMENT — PACKAGE + CUSTOM REQUIREMENTS FORM
    ============================================================= -->
    <section class="ecomPackage">
      <div class="container">
        <div class="ecomPackage-inner">
          <!-- LEFT — CLASSIFIED PORTAL PACKAGE -->
          <div class="ecomPackage-content">
            <span class="ecomPackage-label">
              CLASSIFIED PORTAL DEVELOPMENT
            </span>

            <h3>
              Build Your Own Classified Portal
              <span>&amp; Connect Buyers With Sellers.</span>
            </h3>

            <p class="ecomPackage-intro">
              A professional classified portal where users can create
              accounts, post listings, and connect with potential buyers
              through a simple and easy-to-manage platform.
            </p>

            <div class="ecomPackage-package">
              <div class="ecomPackage-package-head">
                <div>
                  <span class="ecomPackage-package-label">
                    CLASSIFIED PORTAL PACKAGE
                  </span>

                  <h4>Custom Classified Portal</h4>
                </div>

                <div class="ecomPackage-package-price">
                  <small>PACKAGE PRICE</small>

                  <strong> ₹24,999<sup>/-</sup> </strong>
                </div>
              </div>

              <!-- FIRST 6 FEATURES (always visible) -->
              <div class="ecomPackage-package-list ecomPackage-package-list--top">
                <div class="ecomPackage-package-item">
                  <i>✓</i>
                  <span>Admin Login &amp; Dashboard</span>
                </div>

                <div class="ecomPackage-package-item">
                  <i>✓</i>
                  <span>Listing Management</span>
                </div>

                <div class="ecomPackage-package-item">
                  <i>✓</i>
                  <span>Categories &amp; Subcategories</span>
                </div>

                <div class="ecomPackage-package-item">
                  <i>✓</i>
                  <span>Listing Search &amp; Filters</span>
                </div>

                <div class="ecomPackage-package-item">
                  <i>✓</i>
                  <span>Listing Details Pages</span>
                </div>

                <div class="ecomPackage-package-item">
                  <i>✓</i>
                  <span>Multiple Images per Listing</span>
                </div>
              </div>

              <!-- REMAINING 5 FEATURES (slide down) -->
              <div class="ecomPackage-more">
                <div class="ecomPackage-package-list ecomPackage-package-list--more">
                  <div class="ecomPackage-package-item">
                    <i>✓</i>
                    <span>Enquiry / Contact Form</span>
                  </div>

                  <div class="ecomPackage-package-item">
                    <i>✓</i>
                    <span>WhatsApp Integration</span>
                  </div>

                  <div class="ecomPackage-package-item">
                    <i>✓</i>
                    <span>Listing Status Management</span>
                  </div>

                  <div class="ecomPackage-package-item">
                    <i>✓</i>
                    <span>Mobile Responsive Design</span>
                  </div>

                  <div class="ecomPackage-package-item">
                    <i>✓</i>
                    <span>Basic SEO Setup</span>
                  </div>
                </div>
              </div>

              <!-- VIEW ALL / VIEW LESS (text link) -->
              <button type="button" class="ecomPackage-toggle" aria-expanded="false">
                <span class="ecomPackage-toggle-text">View all</span>
                <i aria-hidden="true"></i>
              </button>

              <div class="ecomPackage-package-bottom">
                <div class="ecomPackage-offer">
                  <span class="ecomPackage-offer-tag">1 YEAR FREE</span>

                  <span class="ecomPackage-offer-text">
                    <strong>Web Hosting &amp; Technical Support</strong>
                    <small>Included with your package</small>
                  </span>
                </div>

                <button type="button" class="btn btn-outline-primary" data-model=".enquire-pop">
                  View My Package <i>↗</i>
                </button>
              </div>
            </div>

            <!-- MULTI-SELLER OFFER -->
            <div class="ecomPackage-dynamic">
              <div class="ecomPackage-dynamic-text">
                <h5>Need a Multi-Seller Classified Portal?</h5>

                <p>
                  Allow multiple sellers to register, create, and manage their
                  own listings, with dedicated seller accounts and dashboards.
                </p>
              </div>

              <button type="button" class="btn btn-primary" data-model=".enquire-pop">
                Get an Instant Quote <i>↗</i>
              </button>
            </div>
          </div>

          <!-- RIGHT — CUSTOM REQUIREMENTS FORM -->
          <div class="ecomPackage-form">
            <div class="ecomPackage-form-head">
              <span class="ecomPackage-form-label">
                HAVE CUSTOM REQUIREMENTS?
              </span>

              <h4>
                Tell Us Your
                <span>Marketplace Requirements.</span>
              </h4>

              <p>
                Planning a unique classified portal with custom features,
                monetisation options or third-party integrations? Tell us what
                you need.
              </p>
            </div>

            <form>
              <div class="ecomPackage-form-group">
                <label for="packageName"> Full Name </label>

                <input type="text" id="packageName" name="name" placeholder="Enter your full name" />
              </div>

              <div class="ecomPackage-form-group">
                <label for="packageMobile"> Mobile Number </label>

                <input type="tel" id="packageMobile" name="mobile" placeholder="Enter your mobile number" />
              </div>

              <div class="ecomPackage-form-group">
                <label for="packageBusiness"> Classified Portal Type </label>

                <select id="packageBusiness" name="portal_type">
                  <option value="" selected disabled>
                    Select your portal type
                  </option>
                  <option value="general-classifieds">
                    General Classifieds
                  </option>
                  <option value="real-estate">Real Estate</option>
                  <option value="jobs">Jobs &amp; Recruitment</option>
                  <option value="automobile">Automobile</option>
                  <option value="services">Services Marketplace</option>
                  <option value="business-directory">
                    Business Directory
                  </option>
                  <option value="multi-category">
                    Multi-Category Marketplace
                  </option>
                  <option value="other">Other</option>
                </select>
              </div>

              <div class="ecomPackage-form-group">
                <label for="packageMessage"> Your Requirements </label>

                <textarea id="packageMessage" name="requirements" rows="4"
                  placeholder="Tell us about your portal requirements"></textarea>
              </div>

              <div class="ecomPackage-form-action">
                <button type="submit" class="btn btn-black">
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

    <section class="secL">
      <div class="container">
        <div class="heading">
          <span class="eyebrow"><span class="eyebrow-line"></span>WHY WEB MINGO</span>
          <h3>
            Why Build Your Website<br />
            <span>With Web Mingo.</span>
          </h3>
          <p>
            We combine strategy, design, and technology to build websites that
            work for your business, connect with your audience, and support
            your growth.
          </p>
        </div>

        <ul class="secL-list">
          <li>
            <span class="secL-icon">
              <svg viewBox="0 0 24 24">
                <path d="M12 3v18" />
                <path d="M3 12h18" />
                <path d="M5 5l14 14" />
                <path d="M19 5L5 19" />
              </svg>
            </span>
            <div>
              <h4>Strategy First</h4>
              <p>
                We understand your business, audience and goals before
                designing your website.
              </p>
            </div>
          </li>

          <li>
            <span class="secL-icon">
              <svg viewBox="0 0 24 24">
                <path d="M13 2L3 14h7l-1 8 11-13h-7l1-7z" />
              </svg>
            </span>
            <div>
              <h4>Built For Your Business</h4>
              <p>
                Every website is tailored to your requirements instead of
                relying on a one-size-fits-all template.
              </p>
            </div>
          </li>

          <li>
            <span class="secL-icon">
              <svg viewBox="0 0 24 24">
                <circle cx="11" cy="11" r="7" />
                <path d="M21 21l-4.3-4.3" />
              </svg>
            </span>
            <div>
              <h4>Made For Real Users</h4>
              <p>
                Clear navigation, responsive layouts and thoughtful
                interactions make your website easy to use.
              </p>
            </div>
          </li>

          <li>
            <span class="secL-icon">
              <svg viewBox="0 0 24 24">
                <path d="M4 12a8 8 0 1116 0 8 8 0 01-16 0z" />
                <path d="M12 8v4l3 2" />
              </svg>
            </span>
            <div>
              <h4>Ready To Grow</h4>
              <p>
                We build a strong foundation that can support new pages,
                features, content and future growth.
              </p>
            </div>
          </li>
        </ul>

        <div class="cntr">
          <button type="button" data-model=".enquire-pop" class="btn btn-outline-black">
            Start Your Project <i>↗</i>
          </button>
        </div>
      </div>
    </section>

    <section class="secC">
      <div class="container">
        <div class="heading">
          <span class="eyebrow">
            <span class="eyebrow-line"></span>
            OUR CLASSIFIED PORTFOLIO
          </span>

          <h3>
            Classified Marketplace
            <span>Experiences We've Helped Build.</span>
          </h3>

          <p>
            Explore marketplace experiences designed around different listing
            models, seller journeys, categories and ways buyers discover and
            connect with products and services.
          </p>
        </div>

        <div class="swiper-wrapped">
          <div class="swiper secC-swiper">
            <div class="swiper-wrapper">
              <!-- 01 — APNASHAHER -->
              <div class="swiper-slide">
                <div class="secC-panel">
                  <div class="secC-panel__media">
                    <img src="assets/images/website/portfolio/apnaShaher.png" alt="ApnaShaher institute listing website"
                      loading="lazy" />
                  </div>

                  <div class="secC-panel__body">
                    <div class="secC-panel__text">
                      <h4>ApnaShaher</h4>
                      <p>
                        A local directory platform helping students discover
                        coaching institutes and businesses reach their city
                        audience.
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
                        Get a Quote
                      </button>
                    </div>
                  </div>
                </div>
              </div>

              <!-- 02 — PASHUGHAR -->
              <div class="swiper-slide">
                <div class="secC-panel">
                  <div class="secC-panel__media">
                    <img src="assets/images/website/portfolio/pahughar.png"
                      alt="PashuGhar livestock and dairy marketplace website" loading="lazy" />
                  </div>

                  <div class="secC-panel__body">
                    <div class="secC-panel__text">
                      <h4>PashuGhar</h4>
                      <p>
                        A classifieds marketplace connecting livestock and
                        dairy sellers with buyers through direct enquiries
                        across India.
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
                        Get a Quote
                      </button>
                    </div>
                  </div>
                </div>
              </div>

              <!-- 03 — WELCOME POST -->
              <div class="swiper-slide">
                <div class="secC-panel">
                  <div class="secC-panel__media">
                    <img src="assets/images/website/portfolio/welcomePost.png" alt="Welcome Post classifieds website"
                      loading="lazy" />
                  </div>

                  <div class="secC-panel__body">
                    <div class="secC-panel__text">
                      <h4>Welcome Post</h4>
                      <p>
                        A classifieds platform where users can buy, sell and
                        list products, property and services across different
                        categories.
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

    <section class="secG">
      <div class="container">
        <div class="heading">
          <span class="eyebrow">
            <span class="eyebrow-line"></span>
            HOW WE BUILD
          </span>

          <h3>Our Classified <br /><span>Development Process.</span></h3>

          <p>
            We turn your marketplace idea into a structured classified
            platform, from understanding your listing model through design,
            development, testing, launch and continuous growth.
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
              <h4>Understand Your Marketplace</h4>
              <p>
                We start by understanding your marketplace concept, target
                audience, listing categories, seller model and business goals
                so the platform begins with the right foundation.
              </p>

              <div class="secG-details">
                <span>Marketplace Model</span>
                <span>Users</span>
                <span>Requirements</span>
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
              <span class="secG-kicker">PLAN</span>
              <h4>Structure Listings And Workflows</h4>
              <p>
                We define categories, listing structures, user roles, search
                behaviour, seller workflows and moderation rules to create a
                clear roadmap for the platform.
              </p>

              <div class="secG-details">
                <span>Categories</span>
                <span>Workflows</span>
                <span>Architecture</span>
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
              <h4>Design For Buyers And Sellers</h4>
              <p>
                We create intuitive experiences for browsing listings, posting
                ads, managing profiles, searching and making enquiries.
              </p>

              <div class="secG-details">
                <span>UX Design</span>
                <span>Listing Pages</span>
                <span>User Flows</span>
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
              <h4>Build The Classified Portal</h4>
              <p>
                We build the platform with listings, categories, search,
                filters, seller profiles, messaging, dashboards and the
                integrations your marketplace needs.
              </p>

              <div class="secG-details">
                <span>Portal Build</span>
                <span>Features</span>
                <span>Integrations</span>
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
              <h4>Test Every User Journey</h4>
              <p>
                We test listing creation, search, filters, enquiries, user
                permissions, moderation, responsive behaviour and overall
                platform performance.
              </p>

              <div class="secG-details">
                <span>User Flows</span>
                <span>Search</span>
                <span>Performance</span>
              </div>
            </div>

            <div class="secG-side">
              <span>05</span>
              <strong>Quality</strong>
            </div>
          </article>

          <article class="secG-step">
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
              <span class="secG-kicker">LAUNCH</span>
              <h4>Ready For Real Buyers And Sellers</h4>
              <p>
                We deploy the marketplace, configure hosting and integrations,
                complete final checks and prepare the platform to go live.
              </p>

              <div class="secG-details">
                <span>Deployment</span>
                <span>Configuration</span>
                <span>Go Live</span>
              </div>
            </div>

            <div class="secG-side">
              <span>06</span>
              <strong>Launch</strong>
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
              <span class="secG-kicker">GROW</span>
              <h4>Keep The Marketplace Growing</h4>
              <p>
                We help you expand with new categories, advanced features,
                automation, integrations and improvements as your platform
                grows.
              </p>

              <div class="secG-details">
                <span>New Features</span>
                <span>Automation</span>
                <span>Optimisation</span>
              </div>
            </div>

            <div class="secG-side">
              <span>07</span>
              <strong>Growth</strong>
            </div>
          </article>
        </div>
      </div>
    </section>

    <section class="ecomIntegrations">
      <div class="container">
        <div class="heading">
          <span class="eyebrow">
            <span class="eyebrow-line"></span>
            CONNECTED &amp; EXTENDABLE
          </span>

          <h3>
            Integrations &amp;
            <span>Custom Development.</span>
          </h3>

          <p>
            Your platform connects with the tools you already use — and
            extends with custom features built for your business.
          </p>
        </div>

        <div class="ecomIntegrations-grid">
          <!-- 01 -->
          <article class="ecomIntegrations-item">
            <span class="ecomIntegrations-icon" aria-hidden="true">
              <svg viewBox="0 0 24 24">
                <rect x="2" y="5" width="20" height="14" rx="2" />
                <path d="M2 10h20" />
              </svg>
            </span>
            <h4>Payment Gateway</h4>
            <p>Razorpay, Stripe &amp; UPI</p>
          </article>

          <!-- 02 -->
          <article class="ecomIntegrations-item">
            <span class="ecomIntegrations-icon" aria-hidden="true">
              <svg viewBox="0 0 24 24">
                <path d="M12 22s8-7.5 8-13a8 8 0 1 0-16 0c0 5.5 8 13 8 13z" />
                <circle cx="12" cy="9" r="3" />
              </svg>
            </span>
            <h4>Maps</h4>
            <p>Location &amp; delivery zones</p>
          </article>

          <!-- 03 -->
          <article class="ecomIntegrations-item">
            <span class="ecomIntegrations-icon" aria-hidden="true">
              <svg viewBox="0 0 24 24">
                <path d="M21 11.5a8.5 8.5 0 0 1-12.8 7.3L3 20l1.2-5.1A8.5 8.5 0 1 1 21 11.5z" />
              </svg>
            </span>
            <h4>WhatsApp / SMS</h4>
            <p>Order &amp; OTP alerts</p>
          </article>

          <!-- 04 -->
          <article class="ecomIntegrations-item">
            <span class="ecomIntegrations-icon" aria-hidden="true">
              <svg viewBox="0 0 24 24">
                <path d="M12 2l8 4v6c0 5-3.4 8.7-8 10-4.6-1.3-8-5-8-10V6l8-4z" />
                <path d="M9 12l2 2 4-4" />
              </svg>
            </span>
            <h4>Verification</h4>
            <p>Aadhaar, PAN &amp; GST</p>
          </article>

          <!-- 05 -->
          <article class="ecomIntegrations-item">
            <span class="ecomIntegrations-icon" aria-hidden="true">
              <svg viewBox="0 0 24 24">
                <path
                  d="M8 3H5a2 2 0 0 0-2 2v3M16 3h3a2 2 0 0 1 2 2v3M21 16v3a2 2 0 0 1-2 2h-3M8 21H5a2 2 0 0 1-2-2v-3" />
              </svg>
            </span>
            <h4>APIs</h4>
            <p>Custom &amp; third-party</p>
          </article>

          <!-- 06 -->
          <article class="ecomIntegrations-item">
            <span class="ecomIntegrations-icon" aria-hidden="true">
              <svg viewBox="0 0 24 24">
                <path d="M3 3v18h18" />
                <path d="M7 15l4-6 4 3 5-8" />
              </svg>
            </span>
            <h4>Analytics</h4>
            <p>GA4 &amp; Meta Pixel</p>
          </article>
        </div>

        <!-- CUSTOM DEVELOPMENT CALLOUT -->
        <div class="ecomIntegrations-custom">
          <div class="ecomIntegrations-custom__icon" aria-hidden="true">
            <svg viewBox="0 0 24 24">
              <path d="M16 18l6-6-6-6M8 6l-6 6 6 6" />
            </svg>
          </div>

          <div class="ecomIntegrations-custom__content">
            <span class="ecomIntegrations-custom__label">
              BEYOND THE STANDARD FEATURES
            </span>

            <h4>Need something built specifically for your business?</h4>

            <p>
              We build custom modules and integrations designed around exactly
              how your business operates.
            </p>
          </div>

          <button type="button" class="btn btn-black" data-model=".enquire-pop">
            Discuss Custom Development <i>↗</i>
          </button>
        </div>
      </div>
    </section>

    <!-- ============================================================
         14 — FAQ (.secN)
    ============================================================= -->
    @include('partials.page-faqs', [
      'title' => 'Questions About Classified <span>Portal Development?</span>',
      'intro' => 'Clear answers to common questions about building and scaling a classified marketplace with Web Mingo.',
    ])

    <!-- ============================================================
         15 — FINAL CTA (common .cta-promo)
    ============================================================= -->
    <div class="container">
      <div class="cta-promo">
        <div class="cta-promo__inner">
          <span class="cta-promo__eyebrow">
            READY TO BUILD YOUR CLASSIFIED MARKETPLACE?
          </span>

          <h3 class="cta-promo__heading"> Build A Classified Portal That Grows With You. </h3>

          <p class="cta-promo__sub">
            Tell us about your categories, locations, sellers, monetisation
            model and business goals. We'll help you plan the right portal
            structure, features, integrations and technology for your
            marketplace.
          </p>

          <div class="cta-promo__actions">
            <button class="btn btn-white" data-model=".enquire-pop">
              Discuss Your Portal Requirement
            </button>

            <a href="javascript:void(0)" class="btn btn-outline-white">
              Chat on WhatsApp
            </a>
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
    jQuery(function ($) {
      if (
        typeof gsap === "undefined" ||
        typeof ScrollTrigger === "undefined" ||
        typeof Swiper === "undefined"
      ) {
        return;
      }

      gsap.registerPlugin(ScrollTrigger);

      var HEADER_H = 100; // space kept free at the top for the header (px)
      var STEP_VH = 0.7; // scroll distance per slide (fraction of viewport height)

      $(".scrollStory").each(function () {
        var $section = $(this);
        var $pinWrap = $section.find(".scrollStory-pin");
        var $stage = $section.find(".storyStage");
        var $left = $section.find(".storyLeft-swiper");
        var $right = $section.find(".storyRight-swiper");
        var $dots = $section.find(".railDot");
        var $prev = $section.find(".storyNav-prev");
        var $next = $section.find(".storyNav-next");
        var $count = $section.find(".storyNav-count b");
        var total = $left.find(".swiper-slide").length;

        if (
          !$pinWrap.length ||
          !$stage.length ||
          !$left.length ||
          !$right.length ||
          total < 2
        ) {
          return;
        }

        var stage = $stage[0];
        var lastIndex = -1;
        var isDesktop = false; // updated by matchMedia below

        // ------------------------------------------------------------
        // SWIPERS
        // horizontal on mobile/tablet, vertical on desktop (992+)
        // ------------------------------------------------------------
        var swiperOpts = {
          direction: "horizontal",
          slidesPerView: 1,
          speed: 650,
          allowTouchMove: false,
          simulateTouch: false,
          resistanceRatio: 0,
          observer: true,
          observeParents: true,
          breakpoints: {
            992: { direction: "vertical" },
          },
        };

        var leftSwiper = new Swiper($left[0], swiperOpts);
        var rightSwiper = new Swiper($right[0], swiperOpts);

        // ------------------------------------------------------------
        // GO TO SLIDE
        // ------------------------------------------------------------
        function goTo(index) {
          index = Math.max(0, Math.min(index, total - 1));

          if (index === lastIndex) {
            return;
          }
          lastIndex = index;

          if (leftSwiper.activeIndex !== index) {
            leftSwiper.slideTo(index, 650, false);
          }
          if (rightSwiper.activeIndex !== index) {
            rightSwiper.slideTo(index, 650, false);
          }

          // desktop rail dots
          $dots.removeClass("active").eq(index).addClass("active");

          // mobile nav state
          $count.text(("0" + (index + 1)).slice(-2));
          $prev.prop("disabled", index === 0);
          $next.prop("disabled", index === total - 1);

          // NO GSAP ANIMATION ON MOBILE / TABLET
          if (!isDesktop) {
            return;
          }

          var $slideL = $left.find(".swiper-slide").eq(index);
          var $slideR = $right.find(".swiper-slide").eq(index);

          var icon = $slideL.find(".faceIcon")[0];
          var title = $slideL.find("strong")[0];
          var content = $slideR.find(".blockNum, h4, p, .storyMeta").get();

          if (icon) {
            gsap.killTweensOf(icon);
            gsap.fromTo(
              icon,
              { scale: 0.72, opacity: 0, rotation: -8 },
              {
                scale: 1,
                opacity: 1,
                rotation: 0,
                duration: 0.55,
                ease: "back.out(1.6)",
              },
            );
          }

          if (title) {
            gsap.killTweensOf(title);
            gsap.fromTo(
              title,
              { y: 12, opacity: 0 },
              {
                y: 0,
                opacity: 1,
                duration: 0.4,
                delay: 0.05,
                ease: "power2.out",
              },
            );
          }

          if (content.length) {
            gsap.killTweensOf(content);
            gsap.fromTo(
              content,
              { y: 22, opacity: 0 },
              {
                y: 0,
                opacity: 1,
                duration: 0.5,
                stagger: 0.07,
                ease: "power2.out",
              },
            );
          }
        }

        // ------------------------------------------------------------
        // PIN OFFSET: stage sits centered in the area below the header
        // ------------------------------------------------------------
        function getPinTop() {
          var free = window.innerHeight - HEADER_H;
          var gap = Math.max(0, (free - stage.offsetHeight) / 2);
          return Math.round(HEADER_H + gap);
        }

        var mm = gsap.matchMedia();

        // ------------------------------------------------------------
        // DESKTOP (992+): GSAP pinned scroll, vertical swipers
        // ------------------------------------------------------------
        mm.add("(min-width: 992px)", function () {
          isDesktop = true;

          var trigger = ScrollTrigger.create({
            trigger: $pinWrap[0],
            start: function () {
              return "top " + getPinTop() + "px";
            },
            end: function () {
              return "+=" + (total - 1) * window.innerHeight * STEP_VH;
            },
            pin: stage,
            pinSpacing: true,
            scrub: 0.35,
            anticipatePin: 1,
            invalidateOnRefresh: true,
            onUpdate: function (self) {
              goTo(Math.round(self.progress * (total - 1)));
            },
            onLeave: function () {
              goTo(total - 1);
            },
            onLeaveBack: function () {
              goTo(0);
            },
          });

          goTo(0);

          return function () {
            isDesktop = false;
            trigger.kill();
            gsap.set(stage, {
              clearProps: "position,top,left,width,height,transform",
            });
          };
        });

        // ------------------------------------------------------------
        // MOBILE / TABLET (991 and below): NO GSAP, horizontal swipers,
        // swipe + prev/next buttons
        // ------------------------------------------------------------
        mm.add("(max-width: 991px)", function () {
          isDesktop = false;

          // enable swipe
          leftSwiper.allowTouchMove = rightSwiper.allowTouchMove = true;
          leftSwiper.params.simulateTouch = rightSwiper.params.simulateTouch = true;
          leftSwiper.update();
          rightSwiper.update();

          function onLeft() {
            var i = leftSwiper.activeIndex;
            if (rightSwiper.activeIndex !== i) {
              rightSwiper.slideTo(i, 500);
            }
            goTo(i);
          }

          function onRight() {
            var i = rightSwiper.activeIndex;
            if (leftSwiper.activeIndex !== i) {
              leftSwiper.slideTo(i, 500);
            }
            goTo(i);
          }

          function onPrev() {
            goTo(lastIndex - 1);
          }

          function onNext() {
            goTo(lastIndex + 1);
          }

          leftSwiper.on("slideChange", onLeft);
          rightSwiper.on("slideChange", onRight);
          $prev.on("click", onPrev);
          $next.on("click", onNext);

          // reset any inline styles GSAP may have left from desktop
          gsap.set(
            $section.find(".faceIcon, .storyLeft-swiper strong, .blockNum, .storyRight h4, .storyRight p, .storyMeta"),
            { clearProps: "all" },
          );

          lastIndex = -1;
          goTo(0);

          return function () {
            leftSwiper.off("slideChange", onLeft);
            rightSwiper.off("slideChange", onRight);
            $prev.off("click", onPrev);
            $next.off("click", onNext);
            leftSwiper.allowTouchMove = rightSwiper.allowTouchMove = false;
            leftSwiper.params.simulateTouch = rightSwiper.params.simulateTouch = false;
          };
        });
      });

      $(window).on("load", function () {
        ScrollTrigger.refresh();
      });
    });
  </script>

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