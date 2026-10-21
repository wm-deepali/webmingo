@extends('layouts.app')

@push('styles')
  <link rel="stylesheet" href="assets/sass/digital-branding/digital-branding.css" />
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
        'eyebrow' => 'DIGITAL BRANDING & CREATIVE SERVICES',
        'heading' => 'Give Your Business a Consistent Digital Identity.',
        'description' => 'We create graphics, marketing creatives and videos that help your business communicate clearly and maintain a consistent presence across digital platforms.',
        'primary_text' => 'Chat on WhatsApp',
        'primary_url' => 'javascript:void(0)',
        'secondary_text' => 'Discuss Your Brand Requirements',
        'secondary_url' => '#enquire',
      ],
    ])

    <section class="brandIntro">
      <div class="container">
        <div class="heading">
          <span class="eyebrow">
            <span class="eyebrow-line"></span>
            DIGITAL BRANDING
          </span>

          <h2>Same Business. <span>Different Impression.</span></h2>

          <p class="brandIntro-lead">
            Digital branding is what turns a random logo and mismatched pages
            into one identity people recognize instantly — on your site, your
            feed, everywhere your business shows up online.
          </p>

          <ul class="brandIntro-chips">
            <li>Strategy</li>
            <li>Visual Identity</li>
            <li>Web &amp; Social</li>
            <li>Brand Voice</li>
          </ul>
        </div>

        <!-- BEFORE → AFTER TRANSFORMATION -->
        <div class="brandIntro-transform">
          <svg viewBox="0 0 620 240" xmlns="http://www.w3.org/2000/svg">
            <defs>
              <linearGradient id="afterGrad" x1="0" y1="0" x2="1" y2="1">
                <stop offset="0" stop-color="var(--primary)" />
                <stop offset="1" stop-color="var(--black)" />
              </linearGradient>
              <filter id="softShadow" x="-30%" y="-30%" width="160%" height="160%">
                <feDropShadow dx="0" dy="10" stdDeviation="14" flood-color="#000" flood-opacity=".16" />
              </filter>
            </defs>

            <g class="tf-trail">
              <circle cx="270" cy="80" r="2.5" />
              <circle cx="300" cy="60" r="2" />
              <circle cx="330" cy="150" r="2" />
              <circle cx="360" cy="170" r="2.5" />
            </g>

            <!-- BEFORE CARD -->
            <g class="tf-before">
              <rect x="10" y="30" width="220" height="180" rx="16" class="tf-card tf-card--before" />

              <g class="tf-dotgrid">
                <circle cx="24" cy="44" r="1.2" />
                <circle cx="40" cy="44" r="1.2" />
                <circle cx="56" cy="44" r="1.2" />
                <circle cx="24" cy="60" r="1.2" />
                <circle cx="40" cy="60" r="1.2" />
                <circle cx="56" cy="60" r="1.2" />
              </g>

              <circle cx="55" cy="60" r="11" class="tf-shape tf-shape--a" />
              <rect x="105" y="52" width="60" height="7" rx="3" class="tf-shape tf-shape--b"
                transform="rotate(-3 135 55)" />
              <rect x="40" y="90" width="80" height="6" rx="3" class="tf-shape tf-shape--c" />
              <rect x="40" y="104" width="120" height="6" rx="3" class="tf-shape tf-shape--c" />
              <polygon points="190,100 210,130 170,130" class="tf-shape tf-shape--d" />
              <rect x="40" y="160" width="50" height="16" rx="8" class="tf-shape tf-shape--e"
                transform="rotate(2 65 168)" />
              <rect x="160" y="158" width="60" height="16" rx="2" class="tf-shape tf-shape--f" />
            </g>

            <g class="tf-badge tf-badge--before" transform="translate(30 30)">
              <circle r="11" />
              <path d="M-4 -4 L4 4 M4 -4 L-4 4" />
            </g>
            <text x="120" y="228" class="tf-label tf-label--before">
              WITHOUT BRANDING
            </text>
            <text x="120" y="242" class="tf-sublabel">
              Inconsistent, easy to forget
            </text>

            <!-- ARROW -->
            <g class="tf-arrow">
              <path d="M255 120 H365" />
              <path d="M350 106 L366 120 L350 134" />
            </g>

            <!-- AFTER CARD -->
            <g class="tf-after">
              <rect x="390" y="30" width="220" height="180" rx="16" class="tf-card tf-card--after"
                filter="url(#softShadow)" />

              <circle cx="435" cy="60" r="11" class="tf-shape tf-shape--white" />
              <rect x="460" y="55" width="50" height="7" rx="3" class="tf-shape tf-shape--white-soft" />
              <rect x="425" y="92" width="150" height="6" rx="3" class="tf-shape tf-shape--white-soft" />
              <rect x="425" y="106" width="110" height="6" rx="3" class="tf-shape tf-shape--white-soft" />
              <rect x="425" y="150" width="60" height="20" rx="10" class="tf-shape tf-shape--white" />
              <rect x="495" y="150" width="80" height="20" rx="10" class="tf-shape tf-shape--outline" />
            </g>

            <g class="tf-badge tf-badge--after" transform="translate(410 30)">
              <circle r="11" />
              <path d="M-4 0 L-1 3.5 L4.5 -3.5" />
            </g>
            <text x="500" y="228" class="tf-label tf-label--after">
              WITH BRANDING
            </text>
            <text x="500" y="242" class="tf-sublabel tf-sublabel--after">
              Consistent, instantly recognized
            </text>
          </svg>
        </div>

        <!-- BRAND JOURNEY -->
        <ol class="brandIntro-bar">
          <li class="brandIntro-bar-step">
            <span class="brandIntro-bar-num">01</span>
            <span class="brandIntro-bar-label">Define</span>
            <span class="brandIntro-bar-desc">Learn the business, audience and goals.</span>
          </li>
          <li class="brandIntro-bar-step">
            <span class="brandIntro-bar-num">02</span>
            <span class="brandIntro-bar-label">Position</span>
            <span class="brandIntro-bar-desc">Find a direction worth owning in the market.</span>
          </li>
          <li class="brandIntro-bar-step">
            <span class="brandIntro-bar-num">03</span>
            <span class="brandIntro-bar-label">Identify</span>
            <span class="brandIntro-bar-desc">Design the logo, colour and type system.</span>
          </li>
          <li class="brandIntro-bar-step">
            <span class="brandIntro-bar-num">04</span>
            <span class="brandIntro-bar-label">Express</span>
            <span class="brandIntro-bar-desc">Apply it across web, social and marketing.</span>
          </li>
          <li class="brandIntro-bar-step">
            <span class="brandIntro-bar-num">05</span>
            <span class="brandIntro-bar-label">Consistent</span>
            <span class="brandIntro-bar-desc">Keep it recognizable as the business grows.</span>
          </li>
        </ol>
      </div>
    </section>

    <section class="brandRows">
      <div class="container">
        <div class="heading">
          <span class="eyebrow">
            <span class="eyebrow-line"></span>
            OUR DIGITAL BRANDING SERVICES
          </span>

          <h3>
            Creative Services That Make Your Brand <br />
            <span>Look Better Everywhere.</span>
          </h3>

          <p>
            From graphic design to video creation, we create visual content
            that keeps your brand consistent, professional and easy to
            recognize.
          </p>
        </div>

        <div class="brandRows-list">
          <a href="{{ route('graphic-designing') }}" class="brandRows-card">
            <img src="assets/images/umbrella/graphic.png" alt="Graphic Design Services" loading="lazy" />

            <div class="brandRows-overlay"></div>

            <div class="brandRows-content">
              <span class="brandRows-label">CREATIVE DESIGN</span>

              <h4>Graphic Design</h4>

              <p>
                Create consistent and engaging visuals for social media,
                marketing campaigns, digital platforms and everyday brand
                communication.
              </p>

              <span class="btn btn-outline-white">
                Learn More
                <i>↗</i>
              </span>
            </div>
          </a>

          <a href="{{ route('video-creations') }}" class="brandRows-card">
            <img src="assets/images/umbrella/video.png" alt="Video Creation Services" loading="lazy" />

            <div class="brandRows-overlay"></div>

            <div class="brandRows-content">
              <span class="brandRows-label">VISUAL STORYTELLING</span>

              <h4>Video Creation</h4>

              <p>
                Turn your ideas into engaging videos for social media,
                promotions, brand stories, campaigns and digital marketing.
              </p>

              <span class="btn btn-outline-white">
                Learn More
                <i>↗</i>
              </span>
            </div>
          </a>

          <div class="brandRows-card brandRows-card--cta">
            <div class="brandRows-cta-content">
              <span class="brandRows-label"> CUSTOMER REQUIREMENTS </span>

              <h4>
                Need Something <br />
                More Custom?
              </h4>

              <p>
                Tell us what you need and we will create the right creative
                solution around your brand, campaign or business requirement.
              </p>
            </div>

            <a href="javascript:void(0)" class="btn btn-black" data-model=".enquire-pop">
              Let's Talk
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

    <section class="webApproach" id="brand-process">
      <div class="container">
        <div class="heading">
          <span class="eyebrow">
            <span class="eyebrow-line"></span>
            OUR APPROACH
          </span>

          <h3>
            From Brand Idea <br />
            <span>To A Digital Identity People Recognize.</span>
          </h3>

          <p>
            We bring strategy, creativity and digital thinking together to
            create a brand that has a clear purpose, a distinctive identity
            and a consistent presence across every important touchpoint.
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
              <span class="webApproach-label">STEP 01</span>
              <h4>Discover</h4>
              <p>
                Understand your business, audience, competitors and the
                opportunity behind your brand.
              </p>
            </div>
            <div class="webApproach-output">
              <span>YOU GET</span>
              <strong>A clear brand foundation</strong>
            </div>
          </div>

          <div class="webApproach-step">
            <div class="webApproach-icon">
              <svg viewBox="0 0 24 24" fill="none">
                <circle cx="12" cy="12" r="8"></circle>
                <circle cx="12" cy="12" r="3.5"></circle>
              </svg>
            </div>
            <div class="webApproach-main">
              <span class="webApproach-label">STEP 02</span>
              <h4>Define</h4>
              <p>
                Establish positioning, personality, messaging and the
                direction your brand needs to take.
              </p>
            </div>
            <div class="webApproach-output">
              <span>YOU GET</span>
              <strong>Positioning &amp; messaging direction</strong>
            </div>
          </div>

          <div class="webApproach-step">
            <div class="webApproach-icon">
              <svg viewBox="0 0 24 24" fill="none">
                <path d="M12 20l7-7-4-4-7 7v4h4z"></path>
                <path d="M14 6l4 4"></path>
              </svg>
            </div>
            <div class="webApproach-main">
              <span class="webApproach-label">STEP 03</span>
              <h4>Design</h4>
              <p>
                Create the visual identity including logo, colours, typography
                and supporting brand elements.
              </p>
            </div>
            <div class="webApproach-output">
              <span>YOU GET</span>
              <strong>A distinctive visual identity</strong>
            </div>
          </div>

          <div class="webApproach-step">
            <div class="webApproach-icon">
              <svg viewBox="0 0 24 24" fill="none">
                <rect x="4" y="4" width="7" height="7" rx="1.5"></rect>
                <rect x="13" y="4" width="7" height="7" rx="1.5"></rect>
                <rect x="4" y="13" width="7" height="7" rx="1.5"></rect>
                <rect x="13" y="13" width="7" height="7" rx="1.5"></rect>
              </svg>
            </div>
            <div class="webApproach-main">
              <span class="webApproach-label">STEP 04</span>
              <h4>Apply</h4>
              <p>
                Bring the brand into websites, social media, marketing
                materials and other digital experiences.
              </p>
            </div>
            <div class="webApproach-output">
              <span>YOU GET</span>
              <strong>Your brand across digital touchpoints</strong>
            </div>
          </div>

          <div class="webApproach-step webApproach-step--final">
            <div class="webApproach-icon">
              <svg viewBox="0 0 24 24" fill="none">
                <path d="M4 12a8 8 0 0114-5M20 12a8 8 0 01-14 5"></path>
                <path d="M18 4v4h-4M6 20v-4h4"></path>
              </svg>
            </div>
            <div class="webApproach-main">
              <span class="webApproach-label">STEP 05</span>
              <h4>Refine</h4>
              <p>
                Review how the brand works across touchpoints and refine the
                system for consistency and long-term use.
              </p>
            </div>
            <div class="webApproach-output">
              <span>YOU GET</span>
              <strong>A consistent, long-term brand system</strong>
            </div>
          </div>
        </div>
      </div>
    </section>

    {{-- digital-branding --}}
    @include('partials.package-form', [
      'label' => 'READY TO BUILD YOUR BRAND',
      'highlight' => 'Build A Brand That Stands Out.',
      'intro' => 'We create consistent visual identities and creative assets around your brand, audience and marketing goals—from logos and social media creatives to digital design and branded content.',
      'fieldLabel' => 'Branding Service',
      'placeholder' => 'Select your branding service',
      'options' => [
        'ux-design' => 'UX Design',
        'logo-design' => 'Logo Design',
        'social-media-creatives' => 'Social Media Creatives',
        'brand-identity' => 'Brand Identity',
        'marketing-collateral' => 'Marketing Collateral',
        'video-creatives' => 'Video Creatives',
        'complete-branding' => 'Complete Branding',
        'other' => 'Other',
      ],
    ])

    <section class="secC">
      <div class="container">
        <div class="heading">
          <span class="eyebrow">
            <span class="eyebrow-line"></span>
            OUR CREATIVE WORK
          </span>
          <h3>
            Creative Work That Makes
            <span>Brands More Memorable.</span>
          </h3>
          <p>
            Explore selected work across branding, social media, video and
            digital creative design.
          </p>
        </div>

        <ul class="tab-nav">
          <li class="active" data-tab="brand-logo">Logo Design</li>
          <li data-tab="brand-social">Social Media Design</li>
          <li data-tab="brand-video">Video Creation</li>
          <li data-tab="brand-creatives">Brand Creatives</li>
        </ul>

        <div class="tab-nav-content">
          <div class="tabs active" data-tab="brand-logo">
            <div class="swiper-wrap">
              <div class="portfolio-swiper swiper">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <article class="portfolio-card">
                      <div class="portfolio-card__media">
                        <img
                          src="https://images.unsplash.com/photo-1558655146-d09347e92766?auto=format&fit=crop&w=1600&q=85"
                          alt="Logo design branding project" loading="lazy" />
                      </div>
                      <div class="portfolio-card__info">
                        <div class="portfolio-card__text">
                          <h4 class="portfolio-card__name">
                            Brand Identity Design
                          </h4>
                          <p class="portfolio-card__desc">
                            Distinctive logo systems and visual identities
                            designed to give brands a clear and memorable
                            presence.
                          </p>
                        </div>
                        <div class="portfolio-card__actions">
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
                    </article>
                  </div>

                  <div class="swiper-slide">
                    <article class="portfolio-card">
                      <div class="portfolio-card__media">
                        <img
                          src="https://images.unsplash.com/photo-1561070791-2526d30994b5?auto=format&fit=crop&w=1600&q=85"
                          alt="Creative logo identity project" loading="lazy" />
                      </div>
                      <div class="portfolio-card__info">
                        <div class="portfolio-card__text">
                          <h4 class="portfolio-card__name">
                            Visual Identity System
                          </h4>
                          <p class="portfolio-card__desc">
                            Logo concepts and supporting visual elements built
                            around a consistent and recognisable brand
                            language.
                          </p>
                        </div>
                        <div class="portfolio-card__actions">
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
                    </article>
                  </div>

                  <div class="swiper-slide">
                    <article class="portfolio-card">
                      <div class="portfolio-card__media">
                        <img
                          src="https://images.unsplash.com/photo-1634942537034-2531766767d1?auto=format&fit=crop&w=1600&q=85"
                          alt="Modern brand logo design" loading="lazy" />
                      </div>
                      <div class="portfolio-card__info">
                        <div class="portfolio-card__text">
                          <h4 class="portfolio-card__name">
                            Modern Brand Mark
                          </h4>
                          <p class="portfolio-card__desc">
                            Clean and contemporary logo direction created to
                            communicate a strong brand personality across
                            platforms.
                          </p>
                        </div>
                        <div class="portfolio-card__actions">
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
                    </article>
                  </div>
                </div>
              </div>

              <button type="button" class="btn-prev" aria-label="Previous logo design">
                <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                  <path d="M15 18L9 12L15 6" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"
                    stroke-linejoin="round" />
                </svg>
              </button>

              <button type="button" class="btn-next" aria-label="Next logo design">
                <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                  <path d="M9 18L15 12L9 6" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"
                    stroke-linejoin="round" />
                </svg>
              </button>
            </div>
          </div>

          <div class="tabs" data-tab="brand-social">
            <div class="swiper-wrap">
              <div class="portfolio-swiper swiper">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <article class="portfolio-card">
                      <div class="portfolio-card__media">
                        <img
                          src="https://images.unsplash.com/photo-1611162617474-5b21e879e113?auto=format&fit=crop&w=1600&q=85"
                          alt="Social media design project" loading="lazy" />
                      </div>
                      <div class="portfolio-card__info">
                        <div class="portfolio-card__text">
                          <h4 class="portfolio-card__name">
                            Social Media Campaign
                          </h4>
                          <p class="portfolio-card__desc">
                            Scroll-stopping social creatives designed to
                            maintain a strong and consistent visual identity
                            across digital channels.
                          </p>
                        </div>
                        <div class="portfolio-card__actions">
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
                    </article>
                  </div>

                  <div class="swiper-slide">
                    <article class="portfolio-card">
                      <div class="portfolio-card__media">
                        <img
                          src="https://images.unsplash.com/photo-1611926653458-09294b3142bf?auto=format&fit=crop&w=1600&q=85"
                          alt="Social media marketing creative" loading="lazy" />
                      </div>
                      <div class="portfolio-card__info">
                        <div class="portfolio-card__text">
                          <h4 class="portfolio-card__name">
                            Social Content Series
                          </h4>
                          <p class="portfolio-card__desc">
                            Branded content layouts created for campaigns,
                            product promotions and regular social
                            communication.
                          </p>
                        </div>
                        <div class="portfolio-card__actions">
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
                    </article>
                  </div>

                  <div class="swiper-slide">
                    <article class="portfolio-card">
                      <div class="portfolio-card__media">
                        <img
                          src="https://images.unsplash.com/photo-1556761175-b413da4baf72?auto=format&fit=crop&w=1600&q=85"
                          alt="Digital social campaign design" loading="lazy" />
                      </div>
                      <div class="portfolio-card__info">
                        <div class="portfolio-card__text">
                          <h4 class="portfolio-card__name">
                            Digital Campaign Creatives
                          </h4>
                          <p class="portfolio-card__desc">
                            Purposeful visual content designed to turn
                            campaign messages into engaging digital
                            experiences.
                          </p>
                        </div>
                        <div class="portfolio-card__actions">
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
                    </article>
                  </div>
                </div>
              </div>

              <button type="button" class="btn-prev" aria-label="Previous social media design">
                <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                  <path d="M15 18L9 12L15 6" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"
                    stroke-linejoin="round" />
                </svg>
              </button>

              <button type="button" class="btn-next" aria-label="Next social media design">
                <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                  <path d="M9 18L15 12L9 6" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"
                    stroke-linejoin="round" />
                </svg>
              </button>
            </div>
          </div>

          <div class="tabs" data-tab="brand-video">
            <div class="swiper-wrap">
              <div class="portfolio-swiper swiper">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <article class="portfolio-card">
                      <div class="portfolio-card__media">
                        <img
                          src="https://images.unsplash.com/photo-1492619375914-88005aa9e8fb?auto=format&fit=crop&w=1600&q=85"
                          alt="Video production project" loading="lazy" />
                      </div>
                      <div class="portfolio-card__info">
                        <div class="portfolio-card__text">
                          <h4 class="portfolio-card__name">
                            Brand Video Production
                          </h4>
                          <p class="portfolio-card__desc">
                            Visual storytelling concepts designed to
                            communicate brand messages through engaging video
                            content.
                          </p>
                        </div>
                        <div class="portfolio-card__actions">
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
                    </article>
                  </div>

                  <div class="swiper-slide">
                    <article class="portfolio-card">
                      <div class="portfolio-card__media">
                        <img
                          src="https://images.unsplash.com/photo-1485846234645-a62644f84728?auto=format&fit=crop&w=1600&q=85"
                          alt="Creative video production setup" loading="lazy" />
                      </div>
                      <div class="portfolio-card__info">
                        <div class="portfolio-card__text">
                          <h4 class="portfolio-card__name">
                            Creative Video Content
                          </h4>
                          <p class="portfolio-card__desc">
                            Creative video concepts built for campaigns,
                            social media, product stories and digital brand
                            communication.
                          </p>
                        </div>
                        <div class="portfolio-card__actions">
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
                    </article>
                  </div>

                  <div class="swiper-slide">
                    <article class="portfolio-card">
                      <div class="portfolio-card__media">
                        <img
                          src="https://images.unsplash.com/photo-1536240478700-b869070f9279?auto=format&fit=crop&w=1600&q=85"
                          alt="Professional video editing project" loading="lazy" />
                      </div>
                      <div class="portfolio-card__info">
                        <div class="portfolio-card__text">
                          <h4 class="portfolio-card__name">
                            Digital Video Storytelling
                          </h4>
                          <p class="portfolio-card__desc">
                            Polished video direction focused on clear
                            storytelling, visual rhythm and memorable brand
                            communication.
                          </p>
                        </div>
                        <div class="portfolio-card__actions">
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
                    </article>
                  </div>
                </div>
              </div>

              <button type="button" class="btn-prev" aria-label="Previous video project">
                <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                  <path d="M15 18L9 12L15 6" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"
                    stroke-linejoin="round" />
                </svg>
              </button>

              <button type="button" class="btn-next" aria-label="Next video project">
                <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                  <path d="M9 18L15 12L9 6" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"
                    stroke-linejoin="round" />
                </svg>
              </button>
            </div>
          </div>

          <div class="tabs" data-tab="brand-creatives">
            <div class="swiper-wrap">
              <div class="portfolio-swiper swiper">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <article class="portfolio-card">
                      <div class="portfolio-card__media">
                        <img
                          src="https://images.unsplash.com/photo-1561070791-2526d30994b5?auto=format&fit=crop&w=1600&q=85"
                          alt="Brand creative design project" loading="lazy" />
                      </div>
                      <div class="portfolio-card__info">
                        <div class="portfolio-card__text">
                          <h4 class="portfolio-card__name">
                            Brand Creative Direction
                          </h4>
                          <p class="portfolio-card__desc">
                            Versatile creative assets designed to bring
                            campaigns, products and brand stories together
                            across digital touchpoints.
                          </p>
                        </div>
                        <div class="portfolio-card__actions">
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
                    </article>
                  </div>

                  <div class="swiper-slide">
                    <article class="portfolio-card">
                      <div class="portfolio-card__media">
                        <img
                          src="https://images.unsplash.com/photo-1542744094-3a31f272c490?auto=format&fit=crop&w=1600&q=85"
                          alt="Professional brand creative project" loading="lazy" />
                      </div>
                      <div class="portfolio-card__info">
                        <div class="portfolio-card__text">
                          <h4 class="portfolio-card__name">
                            Campaign Visuals
                          </h4>
                          <p class="portfolio-card__desc">
                            Campaign-focused creative designs that keep
                            messaging consistent while giving every visual its
                            own impact.
                          </p>
                        </div>
                        <div class="portfolio-card__actions">
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
                    </article>
                  </div>

                  <div class="swiper-slide">
                    <article class="portfolio-card">
                      <div class="portfolio-card__media">
                        <img
                          src="https://images.unsplash.com/photo-1553484771-371a605b060b?auto=format&fit=crop&w=1600&q=85"
                          alt="Brand campaign creative design" loading="lazy" />
                      </div>
                      <div class="portfolio-card__info">
                        <div class="portfolio-card__text">
                          <h4 class="portfolio-card__name">
                            Digital Brand Assets
                          </h4>
                          <p class="portfolio-card__desc">
                            A cohesive collection of digital-first visuals
                            created to support launches, promotions and
                            ongoing brand communication.
                          </p>
                        </div>
                        <div class="portfolio-card__actions">
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
                    </article>
                  </div>
                </div>
              </div>

              <button type="button" class="btn-prev" aria-label="Previous brand creative">
                <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                  <path d="M15 18L9 12L15 6" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"
                    stroke-linejoin="round" />
                </svg>
              </button>

              <button type="button" class="btn-next" aria-label="Next brand creative">
                <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                  <path d="M9 18L15 12L9 6" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"
                    stroke-linejoin="round" />
                </svg>
              </button>
            </div>
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
            More Than A Logo. <br />
            <span>A Brand Built Around Your Business.</span>
          </h3>

          <p>
            We look at the complete brand experience — from how your business
            is positioned and presented to how that identity appears across
            websites, social media and digital marketing.
          </p>
        </div>

        <ul class="secL-list secL-list--three">
          <li>
            <span class="secL-icon" aria-hidden="true">
              <svg viewBox="0 0 24 24">
                <path d="M9 18h6M10 21h4" />
                <path d="M12 3a6 6 0 00-3.5 10.9c.6.5 1 1.2 1 2.1h5c0-.9.4-1.6 1-2.1A6 6 0 0012 3z" />
              </svg>
            </span>
            <div>
              <h4>Strategy Before Design</h4>
              <p>
                We understand your business, audience and positioning before
                defining the visual direction.
              </p>
            </div>
          </li>

          <li>
            <span class="secL-icon" aria-hidden="true">
              <svg viewBox="0 0 24 24">
                <path d="M12 3l2.6 5.6 6 .7-4.5 4.1 1.2 6L12 16.4 6.7 19.4l1.2-6L3.4 9.3l6-.7L12 3z" />
              </svg>
            </span>
            <div>
              <h4>Distinctive Identity</h4>
              <p>
                Create a recognizable visual identity that gives your business
                its own character.
              </p>
            </div>
          </li>

          <li>
            <span class="secL-icon" aria-hidden="true">
              <svg viewBox="0 0 24 24">
                <rect x="3" y="4" width="18" height="12" rx="2" />
                <path d="M8 20h8M12 16v4" />
              </svg>
            </span>
            <div>
              <h4>Digital-First Thinking</h4>
              <p>
                Build branding that works naturally across websites, social
                media and digital campaigns.
              </p>
            </div>
          </li>

          <li>
            <span class="secL-icon" aria-hidden="true">
              <svg viewBox="0 0 24 24">
                <path d="M12 3l9 5-9 5-9-5 9-5z" />
                <path d="M3 12l9 5 9-5M3 16l9 5 9-5" />
              </svg>
            </span>
            <div>
              <h4>Consistent Experience</h4>
              <p>
                Keep your visual identity and communication consistent across
                every customer touchpoint.
              </p>
            </div>
          </li>
        </ul>
      </div>
    </section>

    <!-- ============================================================
             09 — FINAL CTA (.cta-promo)
        ============================================================= -->
    <div class="container">
      <div class="cta-promo">
        <div class="cta-promo__inner">
          <span class="cta-promo__eyebrow">READY TO BUILD A STRONGER BRAND?</span>

          <h3 class="cta-promo__heading">
            Build A Brand They Remember.

          </h3>

          <p class="cta-promo__sub">
            Tell us about your business, your current brand and where you want
            to take it. Let's create a digital identity that feels clear,
            consistent and built for growth.
          </p>

          <div class="cta-promo__actions">
            <button class="btn btn-white" data-model=".enquire-pop">
              Start Your Branding Project
              <i>↗</i>
            </button>
          </div>
        </div>
      </div>
    </div>

    <!-- ============================================================
             08 — FAQ (.secN)
        ============================================================= -->
    @include('partials.page-faqs', [
      'eyebrow' => 'FREQUENTLY ASKED QUESTIONS',
      'title' => 'Questions About <span>Digital Branding?</span>',
      'intro' => 'From brand strategy and identity to digital design and brand consistency, here are answers to common questions about our digital branding services.',
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