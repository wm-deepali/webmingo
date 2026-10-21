@extends('layouts.app')

@push('styles')
  <link rel="stylesheet" href="assets/sass/service/service.css" />
@endpush

@section('content')
  <main>

  @include('partials.hero', [
      'video' => 'assets/video/effect4.mp4',
      'poster' => 'assets/video/poster/effect4.png',
      'default' => [
        'eyebrow' => 'BUSINESS WEBSITE DEVELOPMENT',
        'heading' => 'Business Websites Built Around Your Business.',
        'description' => 'We design and develop professional websites that present your business clearly, build credibility and turn visitors into enquiries.',
        'primary_text' => 'Start Your Website Project',
        'primary_url' => '#enquire',
        'secondary_text' => 'Chat on WhatsApp',
        'secondary_url' => 'javascript:void()',
      ],
    ])

    <section class="secA">
      <div class="container">
        <div class="heading">
          <h2>
            More Than a Website.<br /><span>A Digital Foundation for Your Business.</span>
          </h2>
        </div>

        <div class="secA-cols">
          <div class="secA-col">
            <span class="secA-num">01</span>
            <span class="secA-tag">WHAT WE DO</span>
          </div>
          <div class="secA-col secA-col--lg">
            <p>
              Your website is more than an online presence. It is where your
              customers discover your business, understand your value and
              decide what to do next.
            </p>
          </div>
          <div class="secA-col">
            <p>
              We design and develop modern, responsive digital experiences
              that bring your brand, content and business goals together.
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- ============================================================
       03 — WHAT TYPE OF WEBSITE DO YOU NEED? (existing .bizTypes)
  ============================================================= -->
    <section class="bizTypes">
      <div class="container">
        <div class="heading">
          <span class="eyebrow">
            <span class="eyebrow-line"></span>
            CHOOSE YOUR STRUCTURE
          </span>
          <h3>Built Around The Way<span> Your Business Works.</span></h3>
          <p>
            Different businesses need different website structures. Find the
            one closest to yours — we'll shape it around you from there.
          </p>
        </div>

        <div class="bizTypes-grid">
          <article class="bizTypes-item bizTypes-item--featured">
            <div class="bizTypes-media">
              <img src="assets/images/website/corparate.png" alt="Corporate business website" loading="lazy" />
            </div>
            <h4>Corporate Website</h4>
            <p>
              For established companies that need a professional website to
              present their business, capabilities and organisation.
            </p>
          </article>

          <article class="bizTypes-item">
            <span class="bizTypes-icon" aria-hidden="true">
              <svg viewBox="0 0 24 24">
                <path d="M3 21V9l9-6 9 6v12" />
                <path d="M9 21v-8h6v8" />
              </svg>
            </span>
            <h4>Small Business Website</h4>
            <p>
              For local and growing businesses that need a professional online
              presence and a simple way to generate enquiries.
            </p>
          </article>

          <article class="bizTypes-item">
            <span class="bizTypes-icon" aria-hidden="true">
              <svg viewBox="0 0 24 24">
                <rect x="3" y="7" width="18" height="13" rx="2" />
                <path d="M8 7V5a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2" />
              </svg>
            </span>
            <h4>Professional Services Website</h4>
            <p>
              For consultants, agencies, lawyers, architects, financial
              professionals and other service-based businesses.
            </p>
          </article>

          <article class="bizTypes-item">
            <span class="bizTypes-icon" aria-hidden="true">
              <svg viewBox="0 0 24 24">
                <path d="M12 2l3 7h7l-5.5 4.5L18.5 21 12 16.5 5.5 21l2-7.5L2 9h7z" />
              </svg>
            </span>
            <h4>Product &amp; Catalogue Website</h4>
            <p>
              For manufacturers, exporters, wholesalers, and brands that want
              to showcase products and generate business enquiries.
            </p>
          </article>

          <article class="bizTypes-item bizTypes-item--cta">
            <span class="bizTypes-cta-label">HAVE SOMETHING DIFFERENT IN MIND?</span>

            <h4>Custom Business<br />Website.</h4>

            <p>
              For businesses with specific requirements that don't fit into a
              standard website structure.
            </p>

            <button class="btn btn-black" data-model=".enquire-pop">
              Let's Talk <i>↗</i>
            </button>
          </article>
        </div>
      </div>
    </section>

    <div class="secA-bottom">
      <div class="secA-bottom-label">
        <span>THE BUSINESS OUTCOME</span>
      </div>

      <div class="secA-bottom-text">
        <div class="swiper secA-bottom-swiper">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <h5>
                A website that doesn't just represent your business —
                <span>it gives customers a clear reason to choose you.</span>
              </h5>
            </div>

            <div class="swiper-slide">
              <h5>
                Turn your online presence into a stronger business asset —
                <span>built to attract, inform and generate enquiries.</span>
              </h5>
            </div>

            <div class="swiper-slide">
              <h5>
                Give your business a digital presence that works around the
                clock —
                <span>bringing your services, value and expertise together.</span>
              </h5>
            </div>

            <div class="swiper-slide">
              <h5>
                Built for where your business is today,
                <span>and ready for where you want to take it next.</span>
              </h5>
            </div>
          </div>
        </div>
      </div>

      <div class="secA-bottom-action">
        <span>Have a project in mind?</span>

        <button type="button" class="btn btn-primary" data-model=".enquire-pop">
          Let's Work Together
        </button>
      </div>
    </div>

    <section class="secK">
      <div class="container">
        <div class="heading">
          <span class="eyebrow">
            <span class="eyebrow-line"></span>
            WHY YOUR BUSINESS NEEDS A WEBSITE
          </span>

          <h3>
            Your Business Deserves <br />
            <span>A Strong Digital Presence.</span>
          </h3>

          <p>
            A professional website helps your business build trust, get
            discovered and create more opportunities online.
          </p>
        </div>

        <div class="secK-list">
          <div class="secK-item">
            <h3>Build Trust</h3>
            <p>
              Show your business professionally and give customers confidence
              before they get in touch.
            </p>
          </div>

          <div class="secK-item">
            <h3>Get Found Online</h3>
            <p>
              Help potential customers discover your business, services and
              solutions when they search online.
            </p>
          </div>

          <div class="secK-item">
            <h3>Generate Enquiries</h3>
            <p>
              Make it easier for visitors to call, enquire, message or take
              the next step with your business.
            </p>
          </div>

          <div class="secK-item">
            <h3>Support Growth</h3>
            <p>
              Build a digital foundation that can grow with your services,
              customers and future business goals.
            </p>
          </div>
        </div>
      </div>
    </section>

    <section class="secE">
      <div class="container">
        <div class="heading">
          <span class="eyebrow">
            <span class="eyebrow-line"></span>
            THE DIFFERENCE A WEBSITE MAKES
          </span>

          <h3>
            From Being Found
            <span>To Being Chosen.</span>
          </h3>

          <p>
            See how a professional website can change the way customers
            discover, understand and connect with your business.
          </p>
        </div>

        <div class="secE-grid">
          <div class="secE-col secE-col--before">
            <span class="secE-label">WITHOUT A WEBSITE</span>

            <ul>
              <li>
                <i>✕</i>
                Customers may not find you online
              </li>

              <li>
                <i>✕</i>
                Business information is scattered
              </li>

              <li>
                <i>✕</i>
                Less opportunity to build trust
              </li>

              <li>
                <i>✕</i>
                Customers rely more on calls or messages
              </li>

              <li>
                <i>✕</i>
                Your services are harder to explore
              </li>

              <li>
                <i>✕</i>
                Fewer digital touchpoints with customers
              </li>
            </ul>
          </div>

          <div class="secE-vs">VS</div>

          <div class="secE-col secE-col--after">
            <span class="secE-label">WITH A WEBSITE</span>

            <ul>
              <li>
                <i>✓</i>
                Get discovered when customers search
              </li>

              <li>
                <i>✓</i>
                Keep your business information in one place
              </li>

              <li>
                <i>✓</i>
                Build credibility with a professional presence
              </li>

              <li>
                <i>✓</i>
                Make enquiries and contact easier
              </li>

              <li>
                <i>✓</i>
                Showcase your services, work and expertise
              </li>

              <li>
                <i>✓</i>
                Create more opportunities to grow
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <section class="bizScale">
      <div class="container">
        <div class="heading">
          <span class="eyebrow">
            <span class="eyebrow-line"></span>
            WHAT YOUR WEBSITE CAN INCLUDE
          </span>

          <h3>
            Everything Your Website <br />
            <span>Needs To Work For Your Business.</span>
          </h3>

          <p>
            From essential pages to advanced features, we build the right
            functionality around your business needs.
          </p>
        </div>

        <div class="bizScale-list">
          <div class="bizScale-item">
            <div class="bizScale-index">
              <span>01</span>
              <small>CORE PAGES</small>
            </div>

            <div class="bizScale-content">
              <div class="bizScale-title">
                <h4>Give Your Business A Clear Online Presence</h4>
                <p>
                  Cover the essential information customers need before
                  choosing your business.
                </p>
              </div>

              <ul>
                <li>Home</li>
                <li>About Us</li>
                <li>Services</li>
                <li>Service Detail Pages</li>
                <li>Contact Us</li>
                <li>FAQ</li>
              </ul>
            </div>
          </div>

          <div class="bizScale-item">
            <div class="bizScale-index">
              <span>02</span>
              <small>CONTENT</small>
            </div>

            <div class="bizScale-content">
              <div class="bizScale-title">
                <h4>Make Your Content Easy To Explore</h4>
                <p>
                  Organise your content so visitors can quickly understand
                  what you offer and find what matters.
                </p>
              </div>

              <ul>
                <li>Blog</li>
                <li>Testimonials</li>
                <li>Gallery</li>
                <li>Portfolio</li>
                <li>Case Studies</li>
                <li>Location Pages</li>
              </ul>
            </div>
          </div>

          <div class="bizScale-item">
            <div class="bizScale-index">
              <span>03</span>
              <small>BUSINESS FEATURES</small>
            </div>

            <div class="bizScale-content">
              <div class="bizScale-title">
                <h4>Turn Visitors Into Real Opportunities</h4>
                <p>
                  Add practical features that make it easier for customers to
                  connect, enquire and take action.
                </p>
              </div>

              <ul>
                <li>Contact Forms</li>
                <li>WhatsApp Integration</li>
                <li>Booking Systems</li>
                <li>Payment Gateway</li>
                <li>CRM Integration</li>
                <li>Analytics</li>
              </ul>
            </div>
          </div>

          <div class="bizScale-item">
            <div class="bizScale-index">
              <span>04</span>
              <small>CUSTOM FUNCTIONALITY</small>
            </div>

            <div class="bizScale-content">
              <div class="bizScale-title">
                <h4>Build Around How Your Business Works</h4>
                <p>
                  When standard features are not enough, create functionality
                  tailored to your business requirements.
                </p>
              </div>

              <ul>
                <li>Customer Portals</li>
                <li>Custom Dashboards</li>
                <li>Advanced Workflows</li>
                <li>Custom Calculators</li>
                <li>Third-Party APIs</li>
                <li>Web Applications</li>
              </ul>
            </div>
          </div>
        </div>

        <div class="bizScale-bottom">
          <div class="bizScale-bottom__content">
            <span class="bizScale-bottom__tag">
              <i class="dot"></i> CUSTOM WEBSITE BUILDER
            </span>

            <h4>
              Build your website,
              <span>your way.</span>
            </h4>

            <p>
              Choose the pages and features your business needs, share your
              details, and get a custom quote based on your selections.
            </p>

            <ul class="bizScale-bottom__steps">
              <li><b>01</b> Choose Pages</li>
              <li><b>02</b> Add Features</li>
              <li><b>03</b> Get Your Quote</li>
            </ul>
          </div>

          <div class="bizScale-bottom__zig" aria-hidden="true">
            <img src="assets/icon/zig-zag.png" alt="" />
          </div>

          <div class="bizScale-bottom__action">
            <button type="button" class="btn bizScale-bottom__btn" data-model=".generate-pop">
              <em>Build My Website</em>
              <i>↗</i>
            </button>

            <small>100% Free · No Commitment Required</small>
          </div>
        </div>
      </div>
    </section>

    <!-- ============================================================
       BUSINESS WEBSITE DEVELOPMENT — PACKAGE + CUSTOM REQUIREMENTS FORM
  ============================================================= -->
    <section class="ecomPackage">
      <div class="container">
        <div class="ecomPackage-inner">
          <!-- LEFT — READY-TO-LAUNCH PACKAGE -->
          <div class="ecomPackage-content">
            <span class="ecomPackage-label">
              BUSINESS WEBSITE DEVELOPMENT
            </span>

            <h3>
              Get Your Business Online
              <span>With a Professional Website.</span>
            </h3>

            <p class="ecomPackage-intro">
              A professional business website designed to present your
              business clearly, build trust, and help you generate enquiries
              online.
            </p>

            <div class="ecomPackage-package">
              <div class="ecomPackage-package-head">
                <div>
                  <span class="ecomPackage-package-label">
                    BUSINESS WEBSITE PACKAGE
                  </span>

                  <h4>Basic Business Website</h4>
                </div>

                <div class="ecomPackage-package-price">
                  <small>PACKAGE PRICE</small>

                  <strong> ₹7,999<sup>/-</sup> </strong>
                </div>
              </div>

              <div class="ecomPackage-package-list">
                <div class="ecomPackage-package-item">
                  <i>✓</i>
                  <span>Up to 5 Pages</span>
                </div>

                <div class="ecomPackage-package-item">
                  <i>✓</i>
                  <span>Professional Template-Based Design</span>
                </div>

                <div class="ecomPackage-package-item">
                  <i>✓</i>
                  <span>Mobile Responsive</span>
                </div>

                <div class="ecomPackage-package-item">
                  <i>✓</i>
                  <span>Contact &amp; Enquiry Form</span>
                </div>

                <div class="ecomPackage-package-item">
                  <i>✓</i>
                  <span>WhatsApp Integration</span>
                </div>

                <div class="ecomPackage-package-item">
                  <i>✓</i>
                  <span>Basic SEO Setup</span>
                </div>
              </div>

              <div class="ecomPackage-package-bottom">
                <div class="ecomPackage-offer">
                  <span class="ecomPackage-offer-tag">1 YEAR FREE</span>

                  <span class="ecomPackage-offer-text">
                    <strong>Web Hosting &amp; Maintenance</strong>
                    <small>Included with your package</small>
                  </span>
                </div>

                <button type="button" class="btn btn-outline-primary" data-model=".enquire-pop">
                  View My Package <i>↗</i>
                </button>
              </div>
            </div>

            <!-- DYNAMIC WEBSITE OFFER -->
            <div class="ecomPackage-dynamic">
              <div class="ecomPackage-dynamic-text">
                <h5>Need a Dynamic Website?</h5>

                <p>
                  Get a CMS-powered website that you can easily manage and
                  update yourself.
                </p>

                <span class="ecomPackage-dynamic-price">
                  Starting from <strong>₹9,999<sup>/-</sup></strong>
                </span>
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
                <span>Requirements.</span>
              </h4>

              <p>
                Need custom features, integrations or a website built
                specifically for your business? Tell us what you need.
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
                <label for="packageBusiness"> Business Type </label>

                <select id="packageBusiness" name="business_type">
                  <option value="" selected disabled>
                    Select your business type
                  </option>
                  <option value="corporate">Corporate</option>
                  <option value="small-business">Small Business</option>
                  <option value="professional-services">
                    Professional Services
                  </option>
                  <option value="startup">Startup</option>
                  <option value="product-catalogue">Product Catalogue</option>
                  <option value="other">Other Business</option>
                </select>
              </div>

              <div class="ecomPackage-form-group">
                <label for="packageMessage"> Your Requirements </label>

                <textarea id="packageMessage" name="requirements" rows="4"
                  placeholder="Tell us about your website requirements"></textarea>
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

    <section class="bizIntegrations" style="display: none">
      <div class="container">
        <div class="heading">
          <span class="eyebrow">
            <span class="eyebrow-line"></span>
            CONNECTED DIGITAL SYSTEM
          </span>

          <h3>
            More Than A Website.
            <span>A Connected Digital System.</span>
          </h3>

          <p>
            Your website can connect with the tools, platforms and systems
            your business already uses to create a smoother digital
            experience.
          </p>
        </div>

        <div class="bizIntegrations-system">
          <!-- CONNECTORS -->
          <div class="bizIntegrations-connectors" aria-hidden="true">
            <span class="connector connector--tl"></span>
            <span class="connector connector--tr"></span>
            <span class="connector connector--bl"></span>
            <span class="connector connector--br"></span>
          </div>

          <!-- CARD 01 -->
          <article class="bizIntegrations-card bizIntegrations-card--tl">
            <div class="bizIntegrations-card-head">
              <span class="bizIntegrations-number"> 01 </span>

              <span class="bizIntegrations-card-arrow"> ↗ </span>
            </div>

            <div class="bizIntegrations-card-body">
              <h4>CRM &amp; Leads</h4>

              <p>
                Capture enquiries, organise leads and connect your website
                with the systems your team uses to manage customers.
              </p>
            </div>

            <div class="bizIntegrations-card-footer">
              <span></span>

              <small> Leads &amp; Customer Management </small>
            </div>
          </article>

          <!-- CARD 02 -->
          <article class="bizIntegrations-card bizIntegrations-card--tr">
            <div class="bizIntegrations-card-head">
              <span class="bizIntegrations-number"> 02 </span>

              <span class="bizIntegrations-card-arrow"> ↗ </span>
            </div>

            <div class="bizIntegrations-card-body">
              <h4>Booking &amp; Payments</h4>

              <p>
                Let customers book services, schedule appointments and
                complete payments directly through your digital experience.
              </p>
            </div>

            <div class="bizIntegrations-card-footer">
              <span></span>

              <small> Transactions &amp; Operations </small>
            </div>
          </article>

          <!-- CORE -->
          <div class="bizIntegrations-core">
            <div class="bizIntegrations-core-ring"></div>

            <div class="bizIntegrations-core-inner">
              <span class="bizIntegrations-core-label"> THE CORE </span>

              <strong>
                Your<br />
                Business<br />
                Website
              </strong>

              <p>One connected digital presence.</p>
            </div>
          </div>

          <!-- CARD 03 -->
          <article class="bizIntegrations-card bizIntegrations-card--bl">
            <div class="bizIntegrations-card-head">
              <span class="bizIntegrations-number"> 03 </span>

              <span class="bizIntegrations-card-arrow"> ↗ </span>
            </div>

            <div class="bizIntegrations-card-body">
              <h4>WhatsApp &amp; Email</h4>

              <p>
                Turn website visitors into conversations with WhatsApp, email
                notifications and automated communication.
              </p>
            </div>

            <div class="bizIntegrations-card-footer">
              <span></span>

              <small> Communication &amp; Follow-up </small>
            </div>
          </article>

          <!-- CARD 04 -->
          <article class="bizIntegrations-card bizIntegrations-card--br">
            <div class="bizIntegrations-card-head">
              <span class="bizIntegrations-number"> 04 </span>

              <span class="bizIntegrations-card-arrow"> ↗ </span>
            </div>

            <div class="bizIntegrations-card-body">
              <h4>Analytics &amp; Custom Systems</h4>

              <p>
                Connect analytics, APIs and custom business systems to make
                your website part of a larger digital workflow.
              </p>
            </div>

            <div class="bizIntegrations-card-footer">
              <span></span>

              <small> Data &amp; Business Intelligence </small>
            </div>
          </article>
        </div>

        <!-- BOTTOM NOTE -->
        <div class="bizIntegrations-note">
          <div class="bizIntegrations-note-content">
            <span class="bizIntegrations-note-label">
              NEED SOMETHING SPECIFIC?
            </span>

            <p>
              We can plan your website around your existing CRM, booking
              platform, APIs, marketing tools or internal business systems.
            </p>
          </div>

          <button type="button" class="btn btn-outline-black" data-model=".enquire-pop">
            Discuss Your Requirements <i>↗</i>
          </button>
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

    <section class="secG">
      <div class="container">
        <div class="heading">
          <span class="eyebrow">
            <span class="eyebrow-line"></span>
            HOW WE BUILD
          </span>

          <h3>From Requirement <span>To Reality.</span></h3>

          <p>
            We turn your requirements into a structured digital journey, from
            strategy and design through development, testing, and launch.
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
              <span class="secG-kicker"> DISCOVER</span>
              <h4>Understand Before We Build</h4>
              <p>
                We start by understanding your business, audience, objectives
                and requirements so the project begins with the right
                foundation.
              </p>

              <div class="secG-details">
                <span>Business Goals</span>
                <span>Target Audience</span>
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
              <h4>Turn Ideas Into A Clear Structure</h4>
              <p>
                We map the website structure, content requirements and
                functionality to create a clear roadmap for the entire
                experience.
              </p>

              <div class="secG-details">
                <span>Sitemap</span>
                <span>Content Structure</span>
                <span>Project Scope</span>
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
              <h4>Create The Experience</h4>
              <p>
                We shape the visual direction, page hierarchy and user
                experience around your brand and the people using it.
              </p>

              <div class="secG-details">
                <span>UI Design</span>
                <span>UX Direction</span>
                <span>Prototyping</span>
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
              <span class="secG-kicker"> DEVELOP</span>
              <h4>Bring The Design To Life</h4>
              <p>
                Once approved, we build the experience into a responsive,
                functional website with the required technology and
                integrations.
              </p>

              <div class="secG-details">
                <span>Frontend</span>
                <span>CMS</span>
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
              <h4>Refine Every Detail</h4>
              <p>
                We review the complete experience across devices, browsers,
                forms and interactions before preparing it for launch.
              </p>

              <div class="secG-details">
                <span>Quality Check</span>
                <span>Responsive Testing</span>
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
              <span class="secG-kicker">LAUNCH</span>
              <h4>Ready For The Real World</h4>
              <p>
                We prepare the final website for go-live, complete the
                handover and make sure your new digital presence is ready to
                perform.
              </p>

              <div class="secG-details">
                <span>Go-Live</span>
                <span>Monitoring</span>
                <span>Handover</span>
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

    <section class="secH">
      <div class="container">
        <div class="heading">
          <span class="eyebrow">
            <span class="eyebrow-line"></span>
            INDUSTRIES WE BUILD WEBSITES FOR
          </span>

          <h3>
            Business Websites For
            <span>Different Industries.</span>
          </h3>

          <p>
            We design website experiences around different industries,
            audiences, services and business models.
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

    <section class="secC">
      <div class="container">
        <div class="heading">
          <span class="eyebrow">
            <span class="eyebrow-line"></span>
            OUR PORTFOLIO
          </span>

          <h3>
            Business Websites Built<br />
            <span>Around Your Goals.</span>
          </h3>

          <p>
            From presenting your company professionally to generating
            enquiries, we build websites around your audience and growth
            goals.
          </p>
        </div>

        <div class="swiper-wrapped">
          <div class="swiper secC-swiper">
            <div class="swiper-wrapper">
              <!-- 01 — JSV HYUNDAI -->
              <div class="swiper-slide">
                <div class="secC-panel">
                  <div class="secC-panel__media">
                    <img src="assets/images/website/portfolio/jsv.png" alt="JSV Hyundai website" loading="lazy" />
                  </div>

                  <div class="secC-panel__body">
                    <div class="secC-panel__text">
                      <h4>JSV Hyundai, Lucknow</h4>
                      <p>
                        A lead-focused dealership website that makes test
                        drives and enquiries easy.
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

              <!-- 02 — TIRKEY INTERNATIONAL -->
              <div class="swiper-slide">
                <div class="secC-panel">
                  <div class="secC-panel__media">
                    <img src="assets/images/website/portfolio/tirkey.png" alt="Tirkey International website"
                      loading="lazy" />
                  </div>

                  <div class="secC-panel__body">
                    <div class="secC-panel__text">
                      <h4>Tirkey International</h4>
                      <p>
                        A recruitment and visa website that builds trust and
                        brings in applications.
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

              <!-- 03 — DR. BHAWAN NANGARWAL -->
              <div class="swiper-slide">
                <div class="secC-panel">
                  <div class="secC-panel__media">
                    <img src="assets/images/website/portfolio/dr-bhawan.png" alt="Dr. Bhawan Nangarwal website"
                      loading="lazy" />
                  </div>

                  <div class="secC-panel__body">
                    <div class="secC-panel__text">
                      <h4>Dr. Bhawan Nangarwal</h4>
                      <p>
                        A personal brand website that helps patients find,
                        trust and book a neurosurgeon.
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

              <!-- 04 — JAMEEL NURSERY -->
              <div class="swiper-slide">
                <div class="secC-panel">
                  <div class="secC-panel__media">
                    <img src="assets/images/website/portfolio/jameel.png" alt="Jameel Nursery website" loading="lazy" />
                  </div>

                  <div class="secC-panel__body">
                    <div class="secC-panel__text">
                      <h4>Jameel Nursery</h4>
                      <p>
                        A clean online catalogue that takes a traditional
                        nursery to customers across cities.
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

              <!-- 05 — WAHID BIRYANI -->
              <div class="swiper-slide">
                <div class="secC-panel">
                  <div class="secC-panel__media">
                    <img src="assets/images/website/portfolio/wahid.png" alt="Wahid Biryani website" loading="lazy" />
                  </div>

                  <div class="secC-panel__body">
                    <div class="secC-panel__text">
                      <h4>Wahid Biryani</h4>
                      <p>
                        A modern online identity for a legacy restaurant
                        brand, bringing in more food lovers.
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

    <section class="secM">
      <div class="container">
        <div class="heading">
          <span class="eyebrow">
            <span class="eyebrow-line"></span>
            WEBSITE-DRIVEN BUSINESS GROWTH
          </span>

          <h3>
            Turn Your Website Into
            <span>A Stronger Growth Engine.</span>
          </h3>

          <p>
            Your website is more than an online presence. It gives SEO, Google
            Ads and social media a place to send people, learn about your
            business, generate enquiries and turn interest into action.
          </p>
        </div>

        <div class="secM-system">
          <div class="secM-connector"></div>

          <!-- BUILD -->
          <div class="secM-row">
            <div class="secM-group">
              <div class="secM-group-top">
                <div>
                  <span class="secM-number">01</span>
                  <h4 class="secM-label">BUILD</h4>
                </div>

                <p class="secM-group-note">
                  Create a website that gives your business a strong digital
                  foundation.
                </p>
              </div>

              <ul class="secM-services">
                <li class="secM-service">
                  <a href="/services/web-development" class="secM-service-link">
                    <span>Professional Website</span>
                    <small>↗</small>
                  </a>
                </li>

                <li class="secM-service">
                  <a href="/services/ecommerce-development" class="secM-service-link">
                    <span>E-Commerce Website</span>
                    <small>↗</small>
                  </a>
                </li>

                <li class="secM-service">
                  <a href="/services/custom-web-applications" class="secM-service-link">
                    <span>Custom Web Solutions</span>
                    <small>↗</small>
                  </a>
                </li>
              </ul>
            </div>

            <!-- GROW -->
            <div class="secM-group secM-group-grow">
              <div class="secM-group-top">
                <div>
                  <span class="secM-number">02</span>
                  <h4 class="secM-label">GET FOUND</h4>
                </div>

                <p class="secM-group-note">
                  Bring the right people to your website when they are looking
                  for you.
                </p>
              </div>

              <ul class="secM-services">
                <li class="secM-service">
                  <a href="/services/seo" class="secM-service-link">
                    <span>SEO &amp; Google Search</span>
                    <small>↗</small>
                  </a>
                </li>

                <li class="secM-service">
                  <a href="/services/google-ads" class="secM-service-link">
                    <span>Google Ads</span>
                    <small>↗</small>
                  </a>
                </li>

                <li class="secM-service">
                  <a href="/services/digital-marketing" class="secM-service-link">
                    <span>Digital Marketing</span>
                    <small>↗</small>
                  </a>
                </li>
              </ul>
            </div>
          </div>

          <!-- CONNECT -->
          <div class="secM-row">
            <div class="secM-group connect">
              <div class="secM-group-top">
                <div>
                  <span class="secM-number">03</span>
                  <h4 class="secM-label">CONNECT</h4>
                </div>

                <p class="secM-group-note">
                  Give your audience more ways to discover and engage with
                  your business.
                </p>
              </div>

              <ul class="secM-services">
                <li class="secM-service">
                  <a href="/services/social-media-marketing" class="secM-service-link">
                    <span>Social Media Marketing</span>
                    <small>↗</small>
                  </a>
                </li>

                <li class="secM-service">
                  <a href="/services/content-marketing" class="secM-service-link">
                    <span>Content Marketing</span>
                    <small>↗</small>
                  </a>
                </li>

                <li class="secM-service">
                  <a href="/services/performance-marketing" class="secM-service-link">
                    <span>Performance Campaigns</span>
                    <small>↗</small>
                  </a>
                </li>
              </ul>
            </div>

            <!-- CREATE -->
            <div class="secM-group secM-group-create">
              <div class="secM-group-top">
                <div>
                  <span class="secM-number">04</span>
                  <h4 class="secM-label">CONVERT</h4>
                </div>

                <p class="secM-group-note">
                  Turn website visitors into enquiries, conversations and
                  customers.
                </p>
              </div>

              <ul class="secM-services">
                <li class="secM-service">
                  <a href="javascript:void(0)" class="secM-service-link">
                    <span>Lead Generation</span>
                    <small>↗</small>
                  </a>
                </li>

                <li class="secM-service">
                  <a href="javascript:void(0)" class="secM-service-link">
                    <span>Conversion-Focused Pages</span>
                    <small>↗</small>
                  </a>
                </li>

                <li class="secM-service">
                  <a href="javascript:void(0)" class="secM-service-link">
                    <span>Forms, Calls &amp; Enquiries</span>
                    <small>↗</small>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="bizAddons">
      <div class="container">
        <div class="bizAddons-wrap">
          <div class="bizAddons-intro">
            <div class="heading">
              <span class="eyebrow">
                <span class="eyebrow-line"></span>
                BEYOND THE BUSINESS
              </span>

              <h3>
                Need more than
                <br />
                <span>A Website?</span>
              </h3>

              <p>
                Your website can do more than present your business. Connect
                it with tools that help you manage leads, operations, bookings
                and everyday business processes.
              </p>
            </div>
          </div>

          <div class="bizAddons-list">
            <a href="javascript:void(0)" class="bizAddons-item">
              <span class="bizAddons-number">01</span>

              <div class="bizAddons-content">
                <h4>CRM &amp; Lead Management</h4>
                <p>
                  Capture website enquiries, manage leads, track follow-ups
                  and keep your sales process organised.
                </p>
              </div>

              <span class="bizAddons-arrow">↗</span>
            </a>

            <a href="javascript:void(0)" class="bizAddons-item">
              <span class="bizAddons-number">02</span>

              <div class="bizAddons-content">
                <h4>ERP &amp; Business Management</h4>
                <p>
                  Connect your website with systems that manage operations,
                  customers, inventory, billing or internal workflows.
                </p>
              </div>

              <span class="bizAddons-arrow">↗</span>
            </a>

            <a href="javascript:void(0)" class="bizAddons-item">
              <span class="bizAddons-number">03</span>

              <div class="bizAddons-content">
                <h4>Booking &amp; Appointment System</h4>
                <p>
                  Let customers check availability, schedule appointments or
                  book your services directly online.
                </p>
              </div>

              <span class="bizAddons-arrow">↗</span>
            </a>

            <a href="javascript:void(0)" class="bizAddons-item">
              <span class="bizAddons-number">04</span>

              <div class="bizAddons-content">
                <h4>Quotation &amp; Workflow Automation</h4>
                <p>
                  Create quotations faster and automate follow-ups, approvals,
                  notifications and repetitive business tasks.
                </p>
              </div>

              <span class="bizAddons-arrow">↗</span>
            </a>
          </div>
        </div>
      </div>
    </section>

    @include('partials.page-faqs', [
      'title' => 'Questions About Business<span> Website Development?</span>',
      'intro' => 'Clear answers to common questions about building a business website with Web Mingo.',
    ])

    <!-- ============================================================
         14 — FINAL CTA (existing .cta-promo — untouched)
    ============================================================= -->
    <div class="container">
      <div class="cta-promo">
        <div class="cta-promo__inner">
          <span class="cta-promo__eyebrow">READY TO BUILD YOUR BUSINESS WEBSITE?</span>
          <h3 class="cta-promo__heading">
            Let's Build A Website<br />That Works For Your Business.
          </h3>
          <p class="cta-promo__sub">
            Tell us what your business needs, choose the pages and features
            you want, and our team will help turn your requirements into a
            website built around your goals.
          </p>
          <div class="cta-promo__actions">
            <button class="btn btn-white" data-model=".enquire-pop">
              Start Your Website
            </button>
            <a href="javascript:void()" class="btn btn-outline-white">Talk To Our Team</a>
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

  <div class="model generate-pop">
    <button type="button" class="close" aria-label="Close enquiry form">
      <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M0.5 0.5L25.5 25.5M0.5 25.5L25.5 0.5" stroke="currentColor" stroke-linecap="round"
          stroke-linejoin="round" />
      </svg>
    </button>

    <div class="model-body">
      <div class="generate-stepper" id="generateStepper">
        <!-- PROGRESS -->
        <div class="generate-stepper__progress">
          <div class="generate-stepper__step is-active" data-step-indicator="1">
            <span>01</span><small>Pages</small>
          </div>
          <div class="generate-stepper__step" data-step-indicator="2">
            <span>02</span><small>Features</small>
          </div>
          <div class="generate-stepper__step" data-step-indicator="3">
            <span>03</span><small>Details</small>
          </div>
        </div>

        <!-- STEP 1: PAGES -->
        <div class="generate-step is-active" data-step="1">
          <div class="title">
            <h4>Choose Your Pages</h4>
            <p>What should your website include?</p>
          </div>

          <div class="bizBuilder-panel bizBuilder-panel--flat">
            <div class="bizBuilder-options" data-group="pages">
              <label class="bizBuilder-option">
                <input type="checkbox" value="Home" checked />
                <span class="bizBuilder-option__icon">01</span>
                <span class="bizBuilder-option__text">
                  <strong>Home</strong>
                  <small>Your main introduction</small>
                </span>
                <i>✓</i>
              </label>

              <label class="bizBuilder-option">
                <input type="checkbox" value="About Us" checked />
                <span class="bizBuilder-option__icon">02</span>
                <span class="bizBuilder-option__text">
                  <strong>About Us</strong>
                  <small>Your story &amp; business</small>
                </span>
                <i>✓</i>
              </label>

              <label class="bizBuilder-option">
                <input type="checkbox" value="Services" checked />
                <span class="bizBuilder-option__icon">03</span>
                <span class="bizBuilder-option__text">
                  <strong>Services</strong>
                  <small>What you offer</small>
                </span>
                <i>✓</i>
              </label>

              <label class="bizBuilder-option">
                <input type="checkbox" value="Service Detail" />
                <span class="bizBuilder-option__icon">04</span>
                <span class="bizBuilder-option__text">
                  <strong>Service Detail</strong>
                  <small>Individual service pages</small>
                </span>
                <i>✓</i>
              </label>

              <label class="bizBuilder-option">
                <input type="checkbox" value="Products" />
                <span class="bizBuilder-option__icon">05</span>
                <span class="bizBuilder-option__text">
                  <strong>Products</strong>
                  <small>Product listing &amp; details</small>
                </span>
                <i>✓</i>
              </label>

              <label class="bizBuilder-option">
                <input type="checkbox" value="Portfolio" />
                <span class="bizBuilder-option__icon">06</span>
                <span class="bizBuilder-option__text">
                  <strong>Portfolio</strong>
                  <small>Showcase your work</small>
                </span>
                <i>✓</i>
              </label>

              <label class="bizBuilder-option">
                <input type="checkbox" value="Blog" />
                <span class="bizBuilder-option__icon">07</span>
                <span class="bizBuilder-option__text">
                  <strong>Blog</strong>
                  <small>Insights &amp; updates</small>
                </span>
                <i>✓</i>
              </label>

              <label class="bizBuilder-option">
                <input type="checkbox" value="Testimonials" />
                <span class="bizBuilder-option__icon">08</span>
                <span class="bizBuilder-option__text">
                  <strong>Testimonials</strong>
                  <small>Customer trust</small>
                </span>
                <i>✓</i>
              </label>

              <label class="bizBuilder-option">
                <input type="checkbox" value="Careers" />
                <span class="bizBuilder-option__icon">09</span>
                <span class="bizBuilder-option__text">
                  <strong>Careers</strong>
                  <small>Jobs &amp; opportunities</small>
                </span>
                <i>✓</i>
              </label>

              <label class="bizBuilder-option">
                <input type="checkbox" value="FAQ" />
                <span class="bizBuilder-option__icon">10</span>
                <span class="bizBuilder-option__text">
                  <strong>FAQ</strong>
                  <small>Common questions</small>
                </span>
                <i>✓</i>
              </label>

              <label class="bizBuilder-option">
                <input type="checkbox" value="Gallery" />
                <span class="bizBuilder-option__icon">11</span>
                <span class="bizBuilder-option__text">
                  <strong>Gallery</strong>
                  <small>Visual showcase</small>
                </span>
                <i>✓</i>
              </label>

              <label class="bizBuilder-option">
                <input type="checkbox" value="Contact" checked />
                <span class="bizBuilder-option__icon">12</span>
                <span class="bizBuilder-option__text">
                  <strong>Contact</strong>
                  <small>Enquiries &amp; locations</small>
                </span>
                <i>✓</i>
              </label>
            </div>
          </div>

          <div class="generate-step__actions">
            <span></span>
            <button type="button" class="btn btn-primary generate-step__next" data-next="2">
              Next: Add Features <i>→</i>
            </button>
          </div>
        </div>

        <!-- STEP 2: FEATURES -->
        <div class="generate-step" data-step="2">
          <div class="title">
            <h4>Add Features</h4>
            <p>What else should your website do?</p>
          </div>

          <div class="bizBuilder-panel bizBuilder-panel--flat">
            <div class="bizBuilder-options" data-group="features">
              <label class="bizBuilder-option">
                <input type="checkbox" value="WhatsApp Integration" />
                <span class="bizBuilder-option__icon">01</span>
                <span class="bizBuilder-option__text">
                  <strong>WhatsApp Integration</strong>
                  <small>Direct customer conversations</small>
                </span>
                <i>✓</i>
              </label>

              <label class="bizBuilder-option">
                <input type="checkbox" value="CRM Integration" />
                <span class="bizBuilder-option__icon">02</span>
                <span class="bizBuilder-option__text">
                  <strong>CRM Integration</strong>
                  <small>Connect your customer data</small>
                </span>
                <i>✓</i>
              </label>

              <label class="bizBuilder-option">
                <input type="checkbox" value="Payment Gateway" />
                <span class="bizBuilder-option__icon">03</span>
                <span class="bizBuilder-option__text">
                  <strong>Payment Gateway</strong>
                  <small>Accept online payments</small>
                </span>
                <i>✓</i>
              </label>

              <label class="bizBuilder-option">
                <input type="checkbox" value="Booking / Appointments" />
                <span class="bizBuilder-option__icon">04</span>
                <span class="bizBuilder-option__text">
                  <strong>Booking / Appointments</strong>
                  <small>Let customers schedule online</small>
                </span>
                <i>✓</i>
              </label>

              <label class="bizBuilder-option">
                <input type="checkbox" value="API Integration" />
                <span class="bizBuilder-option__icon">05</span>
                <span class="bizBuilder-option__text">
                  <strong>API Integration</strong>
                  <small>Connect external systems</small>
                </span>
                <i>✓</i>
              </label>

              <label class="bizBuilder-option">
                <input type="checkbox" value="Lead Management" />
                <span class="bizBuilder-option__icon">06</span>
                <span class="bizBuilder-option__text">
                  <strong>Lead Management</strong>
                  <small>Capture &amp; manage enquiries</small>
                </span>
                <i>✓</i>
              </label>

              <label class="bizBuilder-option">
                <input type="checkbox" value="Advanced Forms / Calculators" />
                <span class="bizBuilder-option__icon">07</span>
                <span class="bizBuilder-option__text">
                  <strong>Advanced Forms</strong>
                  <small>Forms, calculators &amp; tools</small>
                </span>
                <i>✓</i>
              </label>

              <label class="bizBuilder-option">
                <input type="checkbox" value="User Login / Dashboard" />
                <span class="bizBuilder-option__icon">08</span>
                <span class="bizBuilder-option__text">
                  <strong>User Login / Dashboard</strong>
                  <small>Private user areas</small>
                </span>
                <i>✓</i>
              </label>

              <label class="bizBuilder-option">
                <input type="checkbox" value="Location / Branch Management" />
                <span class="bizBuilder-option__icon">09</span>
                <span class="bizBuilder-option__text">
                  <strong>Location Management</strong>
                  <small>Multiple branches &amp; locations</small>
                </span>
                <i>✓</i>
              </label>
            </div>
          </div>

          <div class="generate-step__actions">
            <button type="button" class="generate-step__back btn btn-outline-black" data-back="1">
              <i>←</i> Back
            </button>
            <button type="button" class="btn btn-primary generate-step__generate" data-next="3">
              Generate Quote <i>→</i>
            </button>
          </div>
        </div>

        <!-- STEP 3: DETAILS / FORM -->
        <div class="generate-step" data-step="3">
          <div class="generate-step__grid">
            <!-- LEFT: title, back link, selected chips -->
            <div class="generate-step__left">
              <div class="title">
                <h4>Request a <br /><span>Custom Quote</span></h4>
                <p>Share your requirements and get a tailored quote.</p>
              </div>

              <div class="generate-pop__requirements" id="generateRequirements">
                <div class="generate-pop__reqBlock">
                  <span class="generate-pop__reqLabel">Selected Pages</span>
                  <div class="generate-pop__chips" id="generateChipsPages">
                    <span class="generate-pop__chipEmpty">No pages selected</span>
                  </div>
                </div>
                <div class="generate-pop__reqBlock">
                  <span class="generate-pop__reqLabel">Selected Features</span>
                  <div class="generate-pop__chips" id="generateChipsFeatures">
                    <span class="generate-pop__chipEmpty">No features selected</span>
                  </div>
                </div>
              </div>

              <button type="button" class="generate-step__back btn btn-outline-black" data-back="2">
                <i>←</i> Back to Features
              </button>
            </div>

            <!-- RIGHT: form -->
            <div class="generate-step__right">
              <form class="form form-grid" method="post">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="" name="FullName" autocomplete="name" required />
                  <label>Full Name*</label>
                </div>

                <div class="form-group">
                  <input type="tel" class="form-control" placeholder="" name="MobileNumber" maxlength="14"
                    autocomplete="tel" inputmode="numeric" required />
                  <label>Mobile Number*</label>
                </div>

                <div class="form-group">
                  <input type="email" class="form-control" placeholder="" name="EmailID" autocomplete="email" />
                  <label>Email Id</label>
                </div>

                <div class="custom-select form-control" tabindex="0">
                  <span class="current">Select Service*</span>
                  <ul class="list">
                    <li data-value="" class="option selected disabled focus">
                      Select Service*
                    </li>
                    <li data-value="web-designing" class="option">
                      Website Designing
                    </li>
                    <li data-value="web-development" class="option">
                      Web Development
                    </li>
                    <li data-value="mobile-applications" class="option">
                      Mobile Applications
                    </li>
                    <li data-value="e-commerce" class="option">E-Commerce</li>
                    <li data-value="seo-digital-marketing" class="option">
                      SEO &amp; Digital Marketing
                    </li>
                  </ul>
                </div>
                <input type="hidden" name="ServiceRequired" value="" />

                <div class="custom-select form-control full" tabindex="0">
                  <span class="current">Budget?*</span>
                  <ul class="list">
                    <li data-value="" class="option selected disabled focus">
                      Budget?*
                    </li>
                    <li data-value="40k-1l" class="option">
                      ₹40,000 – ₹1 Lakh
                    </li>
                    <li data-value="1-5" class="option">₹1 – 5 Lakhs</li>
                    <li data-value="5-10" class="option">₹5 – 10 Lakhs</li>
                    <li data-value="10-25" class="option">₹10 – 25 Lakhs</li>
                    <li data-value="25+" class="option">Above ₹25 Lakhs</li>
                  </ul>
                </div>
                <input type="hidden" name="Budget" value="" />

                <div class="form-group full">
                  <textarea class="form-control" placeholder="" name="Message" rows="3"></textarea>
                  <label>Enter Details (If any)</label>
                </div>

                <div class="captcha"></div>

                <input type="hidden" name="EnquiryType" value="Quick Enquiry" />
                <input type="hidden" name="EnquiryFor" value="Quick Enquiry" />
                <input type="hidden" name="BrochureFile" value="" />

                <div class="submit-group">
                  <button type="submit" class="btn btn-primary">
                    Submit Enquiry
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@push('scripts')
  <script>
    (function () {
      var panels = document.querySelectorAll(".bizBuilder-options");
      var pagesList = document.getElementById("bizBuilderPagesList");
      var featuresList = document.getElementById("bizBuilderFeaturesList");
      var pagesCount = document.getElementById("bizBuilderPagesCount");
      var featuresCount = document.getElementById("bizBuilderFeaturesCount");
      var reviewBtn = document.getElementById("bizBuilderReview");

      var enquirePagesInput = document.getElementById("enquirePagesInput");
      var enquireFeaturesInput = document.getElementById(
        "enquireFeaturesInput",
      );
      var enquireChipsPages = document.getElementById("enquireChipsPages");
      var enquireChipsFeatures = document.getElementById(
        "enquireChipsFeatures",
      );

      function getSelected(group) {
        var panel = document.querySelector(
          '.bizBuilder-options[data-group="' + group + '"]',
        );
        return Array.prototype.slice
          .call(panel.querySelectorAll('input[type="checkbox"]:checked'))
          .map(function (i) {
            return i.value;
          });
      }

      function renderList(listEl, values, emptyText) {
        listEl.innerHTML = "";
        if (!values.length) {
          listEl.classList.add("bizBuilder-summary__list--empty");
          var li = document.createElement("li");
          li.className = "bizBuilder-summary__empty";
          li.textContent = emptyText;
          listEl.appendChild(li);
          return;
        }
        listEl.classList.remove("bizBuilder-summary__list--empty");
        values.forEach(function (v) {
          var li = document.createElement("li");
          li.textContent = v;
          listEl.appendChild(li);
        });
      }

      // renders chips inside the enquiry modal
      function renderChips(container, values, emptyText) {
        if (!container) return;
        container.innerHTML = "";
        if (!values.length) {
          var span = document.createElement("span");
          span.className = "enquire-pop__chipEmpty";
          span.textContent = emptyText;
          container.appendChild(span);
          return;
        }
        values.forEach(function (v) {
          var chip = document.createElement("span");
          chip.className = "enquire-pop__chip";
          chip.textContent = v;
          container.appendChild(chip);
        });
      }

      function updateSummary() {
        var pages = getSelected("pages");
        var features = getSelected("features");

        // left panel summary
        renderList(pagesList, pages, "No pages selected yet");
        renderList(featuresList, features, "None selected yet");
        pagesCount.textContent = pages.length;
        featuresCount.textContent = features.length;

        // sync into the enquiry modal (hidden fields + chips)
        if (enquirePagesInput) enquirePagesInput.value = pages.join(", ");
        if (enquireFeaturesInput)
          enquireFeaturesInput.value = features.join(", ");
        renderChips(enquireChipsPages, pages, "No pages selected");
        renderChips(enquireChipsFeatures, features, "No features selected");
      }

      panels.forEach(function (panel) {
        panel.addEventListener("change", updateSummary);
      });

      document.querySelectorAll(".bizBuilder-addBtn").forEach(function (btn) {
        btn.addEventListener("click", function () {
          var group = btn.getAttribute("data-add");
          var panel = document.querySelector(
            '.bizBuilder-options[data-group="' + group + '"]',
          );

          var row = document.createElement("div");
          row.className = "bizBuilder-customRow";

          var input = document.createElement("input");
          input.type = "text";
          input.placeholder =
            group === "pages"
              ? "e.g. Investor Relations"
              : "e.g. Industry-specific calculator";
          row.appendChild(input);

          var confirmBtn = document.createElement("button");
          confirmBtn.type = "button";
          confirmBtn.textContent = "Add";
          row.appendChild(confirmBtn);

          function commit() {
            var val = input.value.trim();
            if (!val) return;
            var label = document.createElement("label");
            label.className = "bizBuilder-option bizBuilder-option--custom";
            label.innerHTML =
              '<input type="checkbox" checked><span>' + val + "</span>";
            label.querySelector("input").value = val;
            panel.insertBefore(label, row);
            input.value = "";
            updateSummary();
            input.focus();
          }

          confirmBtn.addEventListener("click", commit);
          input.addEventListener("keydown", function (e) {
            if (e.key === "Enter") {
              e.preventDefault();
              commit();
            }
          });

          panel.appendChild(row);
          input.focus();
        });
      });

      // Review Requirements button: sync data BEFORE modal opens (data-model handles the actual open)
      if (reviewBtn) reviewBtn.addEventListener("click", updateSummary);

      updateSummary();
    })();
  </script>

  <script>
    function goToStep(stepNumber) {
      $(".generate-step").removeClass("is-active");
      $('.generate-step[data-step="' + stepNumber + '"]').addClass(
        "is-active",
      );

      $(".generate-stepper__step").each(function () {
        var indicatorStep = parseInt($(this).data("step-indicator"), 10);
        $(this).removeClass("is-active is-done");
        if (indicatorStep < stepNumber) {
          $(this).addClass("is-done");
        } else if (indicatorStep === stepNumber) {
          $(this).addClass("is-active");
        }
      });

      $(".model-body").scrollTop(0);
    }

    function resetStepper() {
      goToStep(1);
    }

    function renderChips(containerSelector, items, group) {
      var $container = $(containerSelector);
      $container.empty();

      if (items.length === 0) {
        var emptyLabel =
          group === "pages" ? "No pages selected" : "No features selected";
        $container.append(
          '<span class="generate-pop__chipEmpty">' + emptyLabel + "</span>",
        );
        return;
      }

      items.forEach(function (value) {
        var $chip = $(
          '<span class="generate-pop__chip" data-group="' +
          group +
          '" data-value="' +
          value +
          '">' +
          value +
          '<button type="button" class="generate-pop__chipRemove" aria-label="Remove ' +
          value +
          '">×</button>' +
          "</span>",
        );
        $container.append($chip);
      });
    }

    function buildChips() {
      var pages = [];
      var features = [];

      $('.bizBuilder-options[data-group="pages"] input:checked').each(
        function () {
          pages.push($(this).val());
        },
      );
      $('.bizBuilder-options[data-group="features"] input:checked').each(
        function () {
          features.push($(this).val());
        },
      );

      renderChips("#generateChipsPages", pages, "pages");
      renderChips("#generateChipsFeatures", features, "features");
    }

    $(document).on(
      "click",
      '.generate-step__next[data-next="2"]',
      function () {
        goToStep(2);
      },
    );

    $(document).on(
      "click",
      '.generate-step__back[data-back="1"]',
      function () {
        goToStep(1);
      },
    );

    $(document).on(
      "click",
      '.generate-step__generate[data-next="3"]',
      function () {
        buildChips();
        goToStep(3);
      },
    );

    $(document).on(
      "click",
      '.generate-step__back[data-back="2"]',
      function () {
        goToStep(2);
      },
    );

    $(document).on("click", ".generate-pop__chipRemove", function () {
      var $chip = $(this).closest(".generate-pop__chip");
      var group = $chip.data("group");
      var value = $chip.data("value");

      $('.bizBuilder-options[data-group="' + group + '"] input').each(
        function () {
          if ($(this).val() === value) {
            $(this).prop("checked", false);
          }
        },
      );

      buildChips();
    });

    $(document).on("click", ".customCta-card", function () {
      resetStepper();
    });

    $(document).on("click", ".overlay, .close", function () {
      setTimeout(resetStepper, 500);
    });
  </script>

  <script>
    document.addEventListener("DOMContentLoaded", function () {
      var box = document.querySelector(".bizScale-bottom");
      if (!box) return;

      box.classList.add("anim-init");

      if ("IntersectionObserver" in window) {
        var io = new IntersectionObserver(
          function (entries) {
            entries.forEach(function (entry) {
              if (entry.isIntersecting) {
                box.classList.add("is-inview");
                io.unobserve(box);
              }
            });
          },
          { threshold: 0.25 },
        );
        io.observe(box);
      } else {
        box.classList.add("is-inview");
      }

      if (!window.matchMedia("(hover: hover) and (pointer: fine)").matches)
        return;

      var tx = 75,
        ty = 30,
        cx = 75,
        cy = 30,
        raf = null;

      function loop() {
        cx += (tx - cx) * 0.08;
        cy += (ty - cy) * 0.08;
        box.style.setProperty("--mx", cx + "%");
        box.style.setProperty("--my", cy + "%");
        if (Math.abs(tx - cx) > 0.1 || Math.abs(ty - cy) > 0.1) {
          raf = requestAnimationFrame(loop);
        } else {
          raf = null;
        }
      }

      box.addEventListener("mousemove", function (e) {
        var r = box.getBoundingClientRect();
        tx = ((e.clientX - r.left) / r.width) * 100;
        ty = ((e.clientY - r.top) / r.height) * 100;
        if (!raf) raf = requestAnimationFrame(loop);
      });
    });
  </script>
@endpush