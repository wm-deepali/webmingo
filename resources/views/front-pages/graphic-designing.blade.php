@extends('layouts.app')

@push('styles')
  <link rel="stylesheet" href="assets/sass/graphic/graphic.css" />
@endpush

@section('content')

  <main>

    @include('partials.hero', [
      'video' => 'assets/video/effect7.mp4',
      'poster' => 'assets/video/poster/effect7.png',
      'default' => [
        'eyebrow' => 'GRAPHIC DESIGN SERVICES',
        'heading' => 'Creative Designs That Keep Your Brand Consistent.',
        'description' => 'From social media creatives to marketing materials, we design visual communication that reflects your brand across digital platforms.',
        'primary_text' => 'Chat on WhatsApp',
        'primary_url' => 'javascript:void(0)',
        'secondary_text' => 'Discuss Your Design Requirement',
        'secondary_url' => '#enquire',
      ],
    ])

    <!-- ============================================================
           GRAPHIC INTRO — EDITORIAL CREATIVE SECTION
      ============================================================ -->

    <section class="graphicIntro">
      <div class="container">
        <div class="graphicIntro-wrap">
          <!-- LEFT CONTENT -->
          <div class="graphicIntro-content">
            <span class="eyebrow">
              <span class="eyebrow-line"></span>
              CREATIVE THINKING / VISUAL DESIGN
            </span>

            <h2>
              Your Brand
              <span>Deserves</span>
              Better Visuals.
            </h2>

            <p class="graphicIntro-description">
              We turn ideas into distinctive visual experiences that help
              brands communicate with clarity, build recognition, and leave a
              lasting impression across every platform.
            </p>

            <div class="graphicIntro-details">
              <div class="graphicIntro-detail">
                <span>01</span>
                <div>
                  <h3>Purpose Before Pixels</h3>
                  <p>Design decisions guided by your brand and audience.</p>
                </div>
              </div>

              <div class="graphicIntro-detail">
                <span>02</span>
                <div>
                  <h3>Creative With Consistency</h3>
                  <p>
                    A recognisable visual language across every touchpoint.
                  </p>
                </div>
              </div>
            </div>

            <a href="#graphic-services" class="btn btn-outline-black">
              Discover Our Creative Approach
              <i>↗</i>
            </a>
          </div>

          <!-- RIGHT CREATIVE COMPOSITION -->
          <div class="graphicIntro-art">
            <div class="graphicIntro-art-header">
              <span>WEB MINGO®</span>
              <span>CREATIVE DEPT. / 01</span>
            </div>

            <div class="graphicIntro-art-canvas">
              <div class="graphicIntro-canvas-word">FORM</div>

              <div class="graphicIntro-poster graphicIntro-poster--back">
                <img src="https://images.unsplash.com/photo-1558655146-9f40138edfeb?w=900&q=85"
                  alt="Creative graphic design composition" loading="lazy" />
              </div>

              <div class="graphicIntro-poster graphicIntro-poster--front">
                <div class="graphicIntro-poster-image">
                  <img src="https://images.unsplash.com/photo-1626785774625-ddcddc3445e9?w=1000&q=85"
                    alt="Brand identity and typography design presentation" loading="lazy" />
                </div>

                <div class="graphicIntro-poster-overlay"></div>

                <div class="graphicIntro-poster-copy">
                  <span>IDEAS / IDENTITY / IMPACT</span>
                  <strong>MAKE<br />IT<br />MEMORABLE.</strong>
                </div>

                <div class="graphicIntro-poster-footer">
                  <span>VISUAL STUDY — 026</span>
                  <span>↗</span>
                </div>
              </div>

              <div class="graphicIntro-sticker">
                <span>CREATE</span>
                <strong>+</strong>
                <span>CONNECT</span>
              </div>

              <div class="graphicIntro-colour">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
              </div>

              <div class="graphicIntro-type">
                <span>TYPEFACE</span>
                <strong>Aa</strong>
                <small>Modern / Bold / Expressive</small>
              </div>
            </div>

            <div class="graphicIntro-art-footer">
              <span>BUILT FOR DISTINCTIVE BRANDS</span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="graphicTypes">
      <div class="container">
        <!-- Section Heading -->
        <div class="heading">
          <span>OUR CREATIVE CAPABILITIES</span>

          <h3>
            Visual Solutions For Every
            <span>Brand Moment.</span>
          </h3>

          <p>
            From user experience and logo design to social creatives and
            marketing visuals, we create purposeful designs for every stage of
            your brand.
          </p>
        </div>

        <!-- Featured Service -->
        <div class="graphicTypes-featured">
          <div class="graphicTypes-featured-content">
            <span class="graphicTypes-number"> UX DESIGN </span>

            <h4>
              UX Design For
              <span>Website &amp; Mobile Apps.</span>
            </h4>

            <p>
              Create clear, intuitive and user-focused experiences for
              websites and apps that make every interaction simple and
              effective.
            </p>

            <button type="button" class="btn btn-black" data-model=".enquire-pop">
              Get Instant Quote <i>↗</i>
            </button>
          </div>

          <div class="graphicTypes-featured-media">
            <img src="https://images.unsplash.com/photo-1559028012-481c04fa702d?w=1200&q=85"
              alt="UX design for website and mobile apps" loading="lazy" />

            <span class="graphicTypes-floating-text">
              UX / UI / EXPERIENCE
            </span>
          </div>
        </div>

        <!-- Service List -->
        <div class="graphicTypes-list">
          <!-- Logo Design -->
          <div class="graphicTypes-item">
            <span class="graphicTypes-item-icon">
              <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                <path d="M12 4l1.4 2.8L16.5 8l-2.6 1.9.7 3.1L12 11.3 9.4 13l.7-3.1L7.5 8l3.1-1.2L12 4z"
                  stroke="currentColor" stroke-width="1.5" stroke-linejoin="round" />
                <circle cx="12" cy="12" r="9" stroke="currentColor" stroke-width="1.5" />
              </svg>
            </span>

            <div class="graphicTypes-item-content">
              <h4>Logo Design</h4>

              <p>Create a distinctive logo that builds recognition.</p>
            </div>

            <div class="graphicTypes-item-action">
              <button type="button" class="btn btn-outline-black" data-model=".enquire-pop">
                Get Instant Quote <i>↗</i>
              </button>
            </div>
          </div>

          <!-- Social Media Creatives -->
          <div class="graphicTypes-item">
            <span class="graphicTypes-item-icon">
              <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                <circle cx="6" cy="12" r="2.4" stroke="currentColor" stroke-width="1.5" />
                <circle cx="18" cy="6" r="2.4" stroke="currentColor" stroke-width="1.5" />
                <circle cx="18" cy="18" r="2.4" stroke="currentColor" stroke-width="1.5" />
                <path d="M8.1 10.8L15.9 7.2M8.1 13.2l7.8 3.6" stroke="currentColor" stroke-width="1.5"
                  stroke-linecap="round" />
              </svg>
            </span>

            <div class="graphicTypes-item-content">
              <h4>Social Media Creatives</h4>

              <p>Create engaging visuals for your social presence.</p>
            </div>

            <div class="graphicTypes-item-action">
              <button type="button" class="btn btn-outline-black" data-model=".enquire-pop">
                Get Instant Quote <i>↗</i>
              </button>
            </div>
          </div>

          <!-- Brochures & Profiles -->
          <div class="graphicTypes-item">
            <span class="graphicTypes-item-icon">
              <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                <path d="M6 3h9l4 4v14a1 1 0 01-1 1H6a1 1 0 01-1-1V4a1 1 0 011-1z" stroke="currentColor"
                  stroke-width="1.5" stroke-linejoin="round" />
                <path d="M14.5 3v4.5H19M8.5 12h7M8.5 15.5h7M8.5 8.5h3" stroke="currentColor" stroke-width="1.5"
                  stroke-linecap="round" />
              </svg>
            </span>

            <div class="graphicTypes-item-content">
              <h4>Brochures &amp; Profiles</h4>

              <p>Present your business with polished brand collateral.</p>
            </div>

            <div class="graphicTypes-item-action">
              <button type="button" class="btn btn-outline-black" data-model=".enquire-pop">
                Get Instant Quote <i>↗</i>
              </button>
            </div>
          </div>

          <!-- Brand Identity -->
          <div class="graphicTypes-item">
            <span class="graphicTypes-item-icon">
              <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                <path d="M12 3a9 9 0 100 18 9 9 0 000-18z" stroke="currentColor" stroke-width="1.5" />
                <path d="M12 3a9 9 0 010 18" stroke="currentColor" stroke-width="1.5" />
                <circle cx="12" cy="12" r="3.2" stroke="currentColor" stroke-width="1.5" />
              </svg>
            </span>

            <div class="graphicTypes-item-content">
              <h4>Brand Identity</h4>

              <p>Build a consistent visual language for your brand.</p>
            </div>

            <div class="graphicTypes-item-action">
              <button type="button" class="btn btn-outline-black" data-model=".enquire-pop">
                Get Instant Quote <i>↗</i>
              </button>
            </div>
          </div>

          <!-- Marketing & Advertising Creatives -->
          <div class="graphicTypes-item">
            <span class="graphicTypes-item-icon">
              <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                <path d="M3 10v4a1 1 0 001 1h3l5 4V5L7 9H4a1 1 0 00-1 1z" stroke="currentColor" stroke-width="1.5"
                  stroke-linejoin="round" />
                <path d="M16 9a4 4 0 010 6M19 6a8 8 0 010 12" stroke="currentColor" stroke-width="1.5"
                  stroke-linecap="round" />
              </svg>
            </span>

            <div class="graphicTypes-item-content">
              <h4>Marketing &amp; Advertising Creatives</h4>

              <p>Create bold visuals for campaigns and promotions.</p>
            </div>

            <div class="graphicTypes-item-action">
              <button type="button" class="btn btn-outline-black" data-model=".enquire-pop">
                Get Instant Quote <i>↗</i>
              </button>
            </div>
          </div>

          <!-- Presentations & Pitch Deck Design -->
          <div class="graphicTypes-item">
            <span class="graphicTypes-item-icon">
              <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                <rect x="3" y="4" width="18" height="12" rx="1.2" stroke="currentColor" stroke-width="1.5" />
                <path d="M8 20h8M12 16v4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                <path d="M7 12l3-3 2.5 2.5L17 7" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                  stroke-linejoin="round" />
              </svg>
            </span>

            <div class="graphicTypes-item-content">
              <h4>Presentations &amp; Pitch Deck Design</h4>

              <p>Turn your ideas into clear, polished presentations.</p>
            </div>

            <div class="graphicTypes-item-action">
              <button type="button" class="btn btn-outline-black" data-model=".enquire-pop">
                Get Instant Quote <i>↗</i>
              </button>
            </div>
          </div>
        </div>

        <!-- Custom CTA -->
        <div class="graphicTypes-more">
          <div class="graphicTypes-more-top">
            <span class="graphicTypes-more-label">
              HAVE A UNIQUE DESIGN REQUIREMENT?
            </span>

            <span class="graphicTypes-more-mark"> ✳ </span>
          </div>

          <div class="graphicTypes-more-content">
            <h4>
              Your Brand Deserves A
              <span>Custom Visual Direction.</span>
            </h4>

            <p>
              Tell us about your idea, campaign or business requirement. Our
              designers will create a visual solution tailored to your goals.
            </p>
          </div>

          <div class="graphicTypes-more-action">
            <button type="button" class="btn btn-outline-black" data-model=".enquire-pop">
              Get Instant Quote <i>↗</i>
            </button>
          </div>
        </div>
      </div>
    </section>

    <section class="graphicIncluded">
      <div class="container">
        <!-- Existing Heading — Keep Unchanged -->
        <div class="heading">
          <span class="eyebrow">
            <span class="eyebrow-line"></span>
            WHAT YOU GET
          </span>

          <h3>
            More Than a Design A Visual
            <span> System Built Around Your Brand.</span>
          </h3>

          <p>
            Every design project is created with attention to your brand
            identity, communication goals, and final usage. We focus on
            delivering creative assets that look professional and work where
            your audience sees them.
          </p>
        </div>

        <!-- Main Content -->
        <div class="graphicIncluded-panel">
          <!-- Visual Area -->
          <div class="graphicIncluded-visual">
            <div class="graphicIncluded-image">
              <img src="https://images.unsplash.com/photo-1558655146-d09347e92766?w=1200&q=85"
                alt="Design workspace with creative brand assets" loading="lazy" />
            </div>

            <div class="graphicIncluded-shade"></div>

            <div class="graphicIncluded-visual-content">
              <span class="graphicIncluded-visual-label">
                CREATIVE DELIVERY
              </span>

              <h4>
                Designed
                <span>With Purpose.</span>
              </h4>

              <p>
                Thoughtful visuals created to represent your brand
                consistently.
              </p>
            </div>

            <div class="graphicIncluded-formats">
              <span>JPG</span>
              <span>PNG</span>
              <span>PDF</span>
              <span>SVG</span>
            </div>

            <div class="graphicIncluded-badge">
              <span>WM</span>
              <small>DESIGN<br />STUDIO</small>
            </div>
          </div>

          <!-- Content Area -->
          <div class="graphicIncluded-details">
            <div class="graphicIncluded-details-top">
              <span>OUR DELIVERABLES</span>
              <strong>01—04</strong>
            </div>

            <ul class="graphicIncluded-list">
              <li>
                <span class="graphicIncluded-number">01</span>

                <div class="graphicIncluded-item">
                  <h4>Custom Concept Design</h4>

                  <p>
                    Design concepts developed around your brand, audience, and
                    communication objective — not generic templates.
                  </p>
                </div>

                <span class="graphicIncluded-arrow">↗</span>
              </li>

              <li>
                <span class="graphicIncluded-number">02</span>

                <div class="graphicIncluded-item">
                  <h4>Brand Guideline Adherence</h4>

                  <p>
                    Consistent use of your brand's colors, typography, visual
                    style, and identity across design assets.
                  </p>
                </div>

                <span class="graphicIncluded-arrow">↗</span>
              </li>

              <li>
                <span class="graphicIncluded-number">03</span>

                <div class="graphicIncluded-item">
                  <h4>Print-Ready & Web-Ready Formats</h4>

                  <p>
                    Files prepared for the intended digital or print
                    application, using suitable formats and dimensions.
                  </p>
                </div>

                <span class="graphicIncluded-arrow">↗</span>
              </li>

              <li>
                <span class="graphicIncluded-number">04</span>

                <div class="graphicIncluded-item">
                  <h4>Feedback & Revision Support</h4>

                  <p>
                    A structured feedback process to refine the design based
                    on the agreed project scope and revision policy.
                  </p>
                </div>

                <span class="graphicIncluded-arrow">↗</span>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <!-- ============================================================
           GRAPHIC DESIGN CTA
      ============================================================ -->

    <section class="androidCta" id="graphicCta">
      <div class="container">
        <div class="androidCta-card">
          <div class="androidCta-grid"></div>

          <!-- Content -->
          <div class="androidCta-content">
            <span class="eyebrow">
              <span class="eyebrow-line"></span>
              GRAPHIC DESIGN SERVICES
            </span>

            <h2>
              Turn Your Ideas
              <span>Into Powerful Visuals.</span>
            </h2>

            <p>
              Bring your brand to life with creative and purposeful graphic
              designs. From social media creatives and brand identity to
              marketing materials and promotional campaigns, we create
              professional visuals that capture attention and communicate your
              message effectively.
            </p>

            <div class="androidCta-actions">
              <a href="#contact" class="btn btn-black">
                Start Your Design Project
                <i>↗</i>
              </a>

              <a href="javascript:void(0)" class="btn btn-outline-black" data-model=".enquire-pop">
                Discuss Your Idea
              </a>
            </div>
          </div>

          <!-- Visual -->
          <div class="androidCta-visual">
            <div class="androidCta-shape"></div>

            <div class="androidCta-image">
              <img src="https://images.unsplash.com/photo-1561070791-2526d30994b5?w=1200&q=85"
                alt="Creative graphic design branding workspace" loading="lazy" />
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="secH">
      <div class="container">
        <div class="heading">
          <h3>
            Visual Solutions for <span>Businesses Across Industries.</span>
          </h3>
          <p>
            Every industry has a different audience and communication style.
            We create relevant visual assets that help businesses present
            their brand with clarity and consistency.
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

    <section class="secL">
      <div class="container">
        <div class="heading">
          <span class="eyebrow">
            <span class="eyebrow-line"></span>
            WHY WEB MINGO
          </span>

          <h3>Design That Stays Consistent <span>With Your Brand.</span></h3>

          <p>
            We combine creative thinking with practical design execution to
            help businesses maintain a clear, professional, and consistent
            visual presence.
          </p>
        </div>

        <ul class="secL-list">
          <li>
            <span class="secL-icon">
              <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                <circle cx="12" cy="12" r="8" stroke="currentColor" stroke-width="1.5" />
                <path d="M12 8v4l3 2" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                  stroke-linejoin="round" />
              </svg>
            </span>
            <div>
              <h4>Brand-Focused Creativity</h4>
              <p>
                Every design starts with an understanding of your brand,
                audience, and communication goals.
              </p>
            </div>
          </li>

          <li>
            <span class="secL-icon">
              <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                <rect x="3" y="4" width="7" height="16" rx="1.5" stroke="currentColor" stroke-width="1.5" />
                <rect x="14" y="4" width="7" height="10" rx="1.5" stroke="currentColor" stroke-width="1.5" />
              </svg>
            </span>
            <div>
              <h4>Consistent Visual Language</h4>
              <p>
                Maintain a cohesive look across social media, marketing
                materials, and brand touchpoints.
              </p>
            </div>
          </li>

          <li>
            <span class="secL-icon">
              <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                <path d="M4 19l6-11 4 6 3-4 3 9H4z" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round" />
              </svg>
            </span>
            <div>
              <h4>Design for Real-World Use</h4>
              <p>
                Create visuals that are prepared for the platforms and formats
                where your audience interacts with your brand.
              </p>
            </div>
          </li>

          <li>
            <span class="secL-icon">
              <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                <path d="M4 12a8 8 0 0114-5M20 12a8 8 0 01-14 5" stroke="currentColor" stroke-width="1.5"
                  stroke-linecap="round" />
                <path d="M18 4v4h-4M6 20v-4h4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                  stroke-linejoin="round" />
              </svg>
            </span>
            <div>
              <h4>Flexible Design Support</h4>
              <p>
                Get design assistance for individual requirements, ongoing
                creative needs, or larger branding projects, based on the
                agreed scope.
              </p>
            </div>
          </li>
        </ul>

        <div class="cntr">
          <button type="button" data-model=".enquire-pop" class="btn btn-outline-black">
            Start Your Design Project
            <i>↗</i>
          </button>
        </div>
      </div>
    </section>

    <section class="ecomPackage">
      <div class="container">
        <div class="ecomPackage-inner">
          <div class="ecomPackage-content">
            <span class="ecomPackage-label">DESIGN SUPPORT THAT FITS YOUR NEEDS</span>

            <h3>
              Consistent Design Support <br />
              <span>for Your Growing Brand.</span>
            </h3>

            <p>
              From regular social media creatives to ongoing brand design
              requirements, choose a design support approach based on your
              content needs, frequency, and project scope.
            </p>

            <ul class="ecomPackage-points">
              <li>Monthly graphic design packages</li>
              <li>Social media creative bundles</li>
              <li>Brand identity projects</li>
              <li>Flexible, scope-based support</li>
            </ul>

            <div class="ecomPackage-actions">
              <a href="javascript:void(0)" class="btn btn-black">
                View Package Details <i>↗</i>
              </a>

              <button type="button" class="btn btn-outline-black" data-model=".enquire-pop">
                Discuss Your Design Requirements
              </button>
            </div>
          </div>

          <div class="ecomPackage-price">
            <span class="ecomPackage-price-label">MONTHLY DESIGN PACKAGES</span>

            <strong>24,999</strong>

            <span class="ecomPackage-price-note">
              based on your design requirements
            </span>
          </div>
        </div>
      </div>
    </section>

    @include('partials.page-faqs', [
      'title' => 'Questions About Our <span>Digital Branding Services?</span>',
      'intro' => 'Find answers to common questions about graphic design, video creation, branding requirements and ongoing creative support.',
    ])

    <div class="container">
      <div class="cta-promo">
        <div class="cta-promo__inner">
          <span class="cta-promo__eyebrow">LET'S CREATE SOMETHING MEMORABLE</span>
          <h3 class="cta-promo__heading">
            Give Your Brand a Visual Identity Worth Remembering
          </h3>
          <p class="cta-promo__sub">
            Have a design requirement in mind? Let's discuss your brand,
            creative goals, and the visual assets your business needs.
          </p>
          <div class="cta-promo__actions">
            <button class="btn btn-white" data-model=".enquire-pop">
              Get a Free Design Sample <i>↗</i>
            </button>
            <a href="javascript:void(0)" class="btn btn-outline-white">Let's Talk About Your Design <i>↗</i></a>
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