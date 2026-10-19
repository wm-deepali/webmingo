@extends('layouts.app')

@push('styles')
  <link rel="stylesheet" href="assets/sass/video-creation/video-creation.css" />
@endpush

@section('content')

  <main>
    <section class="banner">
      <div class="bg">
        <video autoplay muted loop playsinline class="bg-video" src="assets/video/effect7.mp4"
          poster="assets/video/poster/effect7.png">
          <source src="assets/video/effect7.mp4" type="video/mp4" />
        </video>
        <div class="container">
          <div class="banner-wrapper">
            <div class="content">
              <span class="eyebrow">VIDEO CREATION SERVICES</span>

              <h1>Turn Your Message Into Videos People Want to Watch.</h1>

              <p>
                We create business, promotional and social media videos
                designed to communicate your message clearly and keep your
                audience engaged.
              </p>

              <div class="banner-actions">
                <a href="javascript:void(0)" class="btn btn-outline-white">
                  Chat on WhatsApp
                  <i>↗</i>
                </a>

                <button data-model=".enquire-pop" class="btn btn-white">
                  Discuss Your Video Requirement
                  <i>↗</i>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="videoIntro">
      <div class="container">
        <div class="heading">
          <span class="eyebrow">
            <span class="eyebrow-line"></span>
            VIDEO CREATION
          </span>
          <h3>
            Give Your Brand a Voice
            <span>Through Moving Visuals.</span>
          </h3>

          <p>
            We create videos that turn your ideas into clear, engaging, and
            memorable visual experiences — from social media content and
            promotional videos to brand stories and motion graphics.
          </p>
        </div>

        <div class="videoIntro-main">
          <div class="videoIntro-copy">
            <span class="videoIntro-label">MORE THAN JUST FOOTAGE</span>

            <h4>
              Your message,
              <span>in motion.</span>
            </h4>

            <p>
              Video creation is the art of combining visuals, storytelling,
              editing, sound, and motion to communicate something meaningful.
              We help your brand explain, promote, and connect through video.
            </p>

            <div class="videoIntro-tags">
              <span>Brand Storytelling</span>
              <span>Social Content</span>
              <span>Motion Graphics</span>
              <span>Promotional Videos</span>
            </div>

            <a href="javascript:void(0)" class="btn" data-model=".enquire-pop">
              Discuss Your Video
              <i>↗</i>
            </a>
          </div>

          <div class="videoIntro-visual">
            <div class="videoIntro-visual-top">
              <span>CREATIVE VIDEO STUDIO</span>
              <span>01 / VISUAL STORY</span>
            </div>

            <div class="videoIntro-screen">
              <img src="https://images.unsplash.com/photo-1492619375914-88005aa9e8fb?w=1400&q=85"
                alt="Creative video editing and production" />

              <div class="videoIntro-screen-overlay"></div>

              <div class="videoIntro-screen-content">
                <span>YOUR IDEA. OUR CREATIVE DIRECTION.</span>
                <strong>Make every frame count.</strong>
              </div>

              <div class="videoIntro-play">
                <i>↗</i>
              </div>
            </div>

            <div class="videoIntro-timeline">
              <div class="videoIntro-timeline-head">
                <span>PROJECT TIMELINE</span>
                <span>00:00 — 01:00</span>
              </div>

              <div class="videoIntro-track">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
              </div>

              <div class="videoIntro-timeline-labels">
                <span>STORY</span>
                <span>VISUALS</span>
                <span>MOTION</span>
                <span>SOUND</span>
                <span>FINAL CUT</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="videoTypes">
      <div class="container">
        <div class="heading">
          <span class="eyebrow">
            <span class="eyebrow-line"></span>
            OUR VIDEO CAPABILITIES
          </span>
          <h3>
            Video Content Designed for <span>Every Marketing Goal.</span>
          </h3>
          <p>
            From short-form social content to detailed brand stories, we
            create video assets that help businesses communicate clearly and
            engage their audience across digital platforms.
          </p>
        </div>

        <div class="videoTypes-layout">
          <a href="javascript:void(0)" class="videoTypes-featured" data-model=".enquire-pop">
            <img src="https://images.unsplash.com/photo-1611162616305-c69b3fa7fbe0?w=1000&q=85"
              alt="Vertical social media reel video frames" />
            <span class="videoTypes-play">
              <svg viewBox="0 0 24 24" fill="none">
                <path d="M8 5v14l11-7L8 5z" fill="currentColor" />
              </svg>
            </span>
            <div class="videoTypes-featured__content">
              <span class="videoTypes-tag">01 — Featured</span>
              <h4>Social Media Reels & Shorts</h4>
              <p>
                Short-form videos, reels, stories, and engaging social content
                designed for digital platforms.
              </p>
            </div>
          </a>

          <ul class="videoTypes-grid">
            <li>
              <div class="videoTypes-icon">
                <svg viewBox="0 0 24 24" fill="none">
                  <rect x="3" y="6" width="14" height="12" rx="2" stroke="currentColor" stroke-width="1.5" />
                  <path d="M17 10l4-2.5v9L17 14" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round" />
                </svg>
              </div>
              <h4>Product & Promotional Videos</h4>
              <p>
                Creative product showcases and campaign visuals that
                communicate product benefits and brand value.
              </p>
            </li>

            <li>
              <div class="videoTypes-icon">
                <svg viewBox="0 0 24 24" fill="none">
                  <path d="M4 8l8-4 8 4-8 4-8-4z" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round" />
                  <path d="M4 8v8l8 4 8-4V8" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round" />
                </svg>
              </div>
              <h4>Explainer & Animated Videos</h4>
              <p>
                Animated explainers and motion graphics designed to simplify
                complex ideas and communicate clearly.
              </p>
            </li>

            <li>
              <div class="videoTypes-icon">
                <svg viewBox="0 0 24 24" fill="none">
                  <rect x="3" y="4" width="18" height="12" rx="2" stroke="currentColor" stroke-width="1.5" />
                  <path d="M9 21h6M12 16v5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                </svg>
              </div>
              <h4>Corporate & Brand Videos</h4>
              <p>
                Professional brand stories and company presentations that
                communicate your identity and message.
              </p>
            </li>

            <li>
              <div class="videoTypes-icon">
                <svg viewBox="0 0 24 24" fill="none">
                  <rect x="3" y="5" width="18" height="14" rx="2" stroke="currentColor" stroke-width="1.5" />
                  <path d="M8 10l3 2-3 2v-4z" fill="currentColor" />
                </svg>
              </div>
              <h4>Video Ad Campaigns</h4>
              <p>
                Creative video advertisements designed for promotional
                campaigns and platform-specific marketing.
              </p>
            </li>
          </ul>
        </div>
      </div>
    </section>

    <!-- ============================================================
           VIDEO CREATION — CREATIVE CAPABILITIES
      ============================================================ -->

    <section class="videoIncluded">
      <div class="container">
        <div class="heading">
          <h3>
            More Than Just Video <br />
            <span>We Create Visual Experiences.</span>
          </h3>

          <p>
            Whether you need a short-form social media video, a promotional
            campaign, or a complete brand story, our creative approach
            combines strategy, storytelling, design, and motion to make every
            video count.
          </p>
        </div>

        <div class="videoIncluded-wrapper">
          <!-- Top Intro -->

          <!-- Creative Service Cards -->
          <div class="videoIncluded-grid">
            <article class="videoIncluded-card videoIncluded-card-large">
              <div class="videoIncluded-card-image">
                <img src="https://images.unsplash.com/photo-1574717024653-61fd2cf4d44d?w=1200&q=90"
                  alt="Video editing and post production workspace" loading="lazy" />
              </div>

              <div class="videoIncluded-card-overlay"></div>

              <div class="videoIncluded-card-top">
                <span>01</span>
                <span>POST PRODUCTION</span>
              </div>

              <div class="videoIncluded-card-content">
                <span class="videoIncluded-card-label">EDITING & REFINEMENT</span>
                <h4>Video Editing</h4>
                <p>
                  Turn raw footage into polished, engaging stories with
                  purposeful cuts, pacing, transitions, and visual flow.
                </p>
              </div>

              <span class="videoIncluded-card-arrow">↗</span>
            </article>

            <article class="videoIncluded-card videoIncluded-card-light">
              <div class="videoIncluded-card-top">
                <span>02</span>
                <span>MOTION DESIGN</span>
              </div>

              <div class="videoIncluded-icon">
                <span>✳</span>
              </div>

              <div class="videoIncluded-card-content">
                <span class="videoIncluded-card-label">ANIMATION & GRAPHICS</span>
                <h4>Motion Graphics</h4>
                <p>
                  Add movement to your message through animated typography,
                  branded visuals, transitions, and graphic elements.
                </p>
              </div>

              <div class="videoIncluded-mini-line"></div>
            </article>

            <article class="videoIncluded-card videoIncluded-card-accent">
              <div class="videoIncluded-card-top">
                <span>03</span>
                <span>BRAND STORYTELLING</span>
              </div>

              <div class="videoIncluded-card-content">
                <span class="videoIncluded-card-label">CONCEPT TO STORY</span>
                <h4>Creative Direction</h4>
                <p>
                  Build a clear creative concept with storyboarding,
                  scripting, visual references, and a defined production
                  direction.
                </p>
              </div>

              <div class="videoIncluded-accent-mark">/ /</div>
            </article>

            <article class="videoIncluded-card videoIncluded-card-wide">
              <div class="videoIncluded-wide-content">
                <div class="videoIncluded-card-top">
                  <span>04</span>
                  <span>AUDIO & FINISHING</span>
                </div>

                <h4>
                  Sound That Completes<br /><span>The Visual Story.</span>
                </h4>

                <p>
                  Support your visuals with suitable music, voiceover, sound
                  effects, audio refinement, and final finishing.
                </p>
              </div>

              <div class="videoIncluded-wave">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
              </div>
            </article>
          </div>

          <!-- Bottom Delivery Strip -->
          <!-- ============================================================
           VIDEO DELIVERABLES
      ============================================================ -->

          <div class="videoIncluded-delivery">
            <div class="videoIncluded-delivery-title">
              <span>05 / FINAL DELIVERY</span>

              <h4>
                Videos Ready for
                <span>Real-World Brand Use.</span>
              </h4>
            </div>

            <div class="videoIncluded-delivery-list">
              <div>
                <strong>Social Media</strong>
                <span>Reels, Shorts & Social Content</span>
              </div>

              <div>
                <strong>Brand Promotion</strong>
                <span>Product & Promotional Videos</span>
              </div>

              <div>
                <strong>Digital Campaigns</strong>
                <span>Creative Ads & Marketing Content</span>
              </div>

              <div>
                <strong>Business Content</strong>
                <span>Website, YouTube & Brand Videos</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ============================================================
           VIDEO CREATION CTA
      ============================================================ -->

    <section class="androidCta" id="videoCta">
      <div class="container">
        <div class="androidCta-card">
          <div class="androidCta-grid"></div>

          <!-- Content -->
          <div class="androidCta-content">
            <span class="eyebrow">
              <span class="eyebrow-line"></span>
              VIDEO CREATION SERVICES
            </span>

            <h2>
              Turn Ideas
              <span>Into Engaging Videos.</span>
            </h2>

            <p>
              Bring your brand story to life with creative and impactful video
              content. From social media reels and promotional videos to
              motion graphics and brand storytelling, we create engaging
              visuals that capture attention, communicate your message, and
              connect with your audience.
            </p>

            <div class="androidCta-actions">
              <a href="#contact" class="btn btn-black">
                Start Your Video Project
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
              <img src="https://images.unsplash.com/photo-1574717024653-61fd2cf4d44d?w=900&q=90"
                alt="Creative video editing and production workspace" loading="lazy" />
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="secG" id="video-process">
      <div class="container">
        <div class="heading">
          <span class="eyebrow">
            <span class="eyebrow-line"></span>
            HOW WE CREATE
          </span>

          <h3>
            From Creative Idea To
            <span>Finished Video.</span>
          </h3>

          <p>
            We turn your concept into engaging, polished and platform-ready
            video content through a clear creative and production workflow.
          </p>
        </div>

        <div class="secG-process">
          <div class="secG-line">
            <span></span>
          </div>

          <!-- STEP 01 -->
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

              <h4>Concept &amp; Brief</h4>

              <p>
                We understand your brand, audience, objectives, video
                requirements and the platform where the content will be used.
              </p>

              <div class="secG-details">
                <span>Brief</span>
                <span>Audience</span>
                <span>Platform</span>
              </div>
            </div>

            <div class="secG-side">
              <span>01</span>
              <strong>Concept</strong>
            </div>
          </article>

          <!-- STEP 02 -->
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

              <h4>Script &amp; Storyboard</h4>

              <p>
                We develop the creative direction, script, visual references
                and storyboard where required to establish the video flow.
              </p>

              <div class="secG-details">
                <span>Script</span>
                <span>Storyboard</span>
                <span>Direction</span>
              </div>
            </div>

            <div class="secG-side">
              <span>02</span>
              <strong>Direction</strong>
            </div>
          </article>

          <!-- STEP 03 -->
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
              <span class="secG-kicker">PRODUCE</span>

              <h4>Shoot or Animate</h4>

              <p>
                We produce or gather the required footage, motion graphics,
                animations and visual assets based on the project scope.
              </p>

              <div class="secG-details">
                <span>Footage</span>
                <span>Animation</span>
                <span>Assets</span>
              </div>
            </div>

            <div class="secG-side">
              <span>03</span>
              <strong>Production</strong>
            </div>
          </article>

          <!-- STEP 04 -->
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
              <span class="secG-kicker">EDIT</span>

              <h4>Edit &amp; Refine</h4>

              <p>
                We arrange scenes, refine pacing and add transitions, motion
                graphics, music and sound elements to shape the final
                experience.
              </p>

              <div class="secG-details">
                <span>Editing</span>
                <span>Pacing</span>
                <span>Sound</span>
              </div>
            </div>

            <div class="secG-side">
              <span>04</span>
              <strong>Editing</strong>
            </div>
          </article>

          <!-- STEP 05 -->
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
              <span class="secG-kicker">REVIEW</span>

              <h4>Review &amp; Feedback</h4>

              <p>
                We review the draft together and refine the video based on
                agreed feedback, creative direction and project requirements.
              </p>

              <div class="secG-details">
                <span>Feedback</span>
                <span>Revisions</span>
                <span>Approval</span>
              </div>
            </div>

            <div class="secG-side">
              <span>05</span>
              <strong>Review</strong>
            </div>
          </article>

          <!-- STEP 06 -->
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
              <span class="secG-kicker">DELIVER</span>

              <h4>Final Video Delivery</h4>

              <p>
                We prepare and deliver the approved video in suitable formats
                and dimensions for its intended platform and use.
              </p>

              <div class="secG-details">
                <span>Export</span>
                <span>Formats</span>
                <span>Delivery</span>
              </div>
            </div>

            <div class="secG-side">
              <span>06</span>
              <strong>Delivery</strong>
            </div>
          </article>
        </div>
      </div>
    </section>
    <section class="secH">
      <div class="container">
        <div class="heading">
          <h3>
            Visual Storytelling for <span>Different Business Needs.</span>
          </h3>
          <p>
            Every industry has its own audience, message, and communication
            style. We create video content adapted to the brand's objectives,
            creative requirements, and intended platforms.
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

          <h3>
            Creative Video Content Built<span> Around Your Brand.</span>
          </h3>

          <p>
            We combine creative storytelling with practical video execution to
            help businesses communicate their message through engaging,
            consistent, and purposeful content.
          </p>
        </div>

        <ul class="secL-list">
          <li>
            <span class="secL-icon">
              <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                <path d="M4 8l8-4 8 4-8 4-8-4z" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round" />
                <path d="M4 8v8l8 4 8-4V8" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round" />
              </svg>
            </span>
            <div>
              <h4>Story-Driven Creativity</h4>
              <p>
                Every video starts with an understanding of your message,
                audience, and communication goals.
              </p>
            </div>
          </li>

          <li>
            <span class="secL-icon">
              <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                <rect x="3" y="5" width="14" height="14" rx="2" stroke="currentColor" stroke-width="1.5" />
                <path d="M17 9.5l4-2.5v9l-4-2.5" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round" />
              </svg>
            </span>
            <div>
              <h4>Platform-Aware Video Design</h4>
              <p>
                Create video content with the intended platform, format, and
                viewing experience in mind.
              </p>
            </div>
          </li>

          <li>
            <span class="secL-icon">
              <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                <circle cx="12" cy="12" r="8" stroke="currentColor" stroke-width="1.5" />
                <path d="M9 12l2 2 4-4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                  stroke-linejoin="round" />
              </svg>
            </span>
            <div>
              <h4>Consistent Brand Visuals</h4>
              <p>
                Maintain a cohesive visual language across video content,
                brand elements, and marketing campaigns.
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
              <h4>Flexible Video Support</h4>
              <p>
                Get video assistance for individual projects, recurring social
                media content, or larger campaign requirements based on the
                agreed scope.
              </p>
            </div>
          </li>
        </ul>

        <div class="cntr">
          <button type="button" data-model=".enquire-pop" class="btn btn-outline-black">
            Start Your Video Project
            <i>↗</i>
          </button>
        </div>
      </div>
    </section>

    <section class="ecomPackage">
      <div class="container">
        <div class="ecomPackage-inner">
          <div class="ecomPackage-content">
            <span class="ecomPackage-label">VIDEO SUPPORT THAT FITS YOUR CONTENT NEEDS</span>

            <h3>
              Flexible Video Packages <br />
              <span>for Your Brand.</span>
            </h3>

            <p>
              Whether you need occasional promotional videos, regular social
              media content, or ongoing creative support, discuss a video
              service approach based on your content requirements, frequency,
              and project scope.
            </p>

            <ul class="ecomPackage-points">
              <li>Video creation packages</li>
              <li>Social media reel bundles</li>
              <li>Brand & promotional videos</li>
              <li>Flexible, scope-based support</li>
            </ul>

            <div class="ecomPackage-actions">
              <a href="javascript:void(0)" class="btn btn-black">
                View Package Details <i>↗</i>
              </a>

              <button type="button" class="btn btn-outline-black" data-model=".enquire-pop">
                Discuss Your Video Requirements
              </button>
            </div>
          </div>

          <div class="ecomPackage-price">
            <span class="ecomPackage-price-label">VIDEO CREATION PACKAGES</span>

            <strong>19,999</strong>

            <span class="ecomPackage-price-note">
              based on your content requirements
            </span>
          </div>
        </div>
      </div>
    </section>

    @include('partials.page-faqs', [
      'title' => 'Questions About Our Video<span> Creation Services?</span>',
      'intro' => 'Find answers to common questions about video production, editing, shooting, revisions, delivery formats, and ongoing video support.',
    ])

    <div class="container">
      <div class="cta-promo">
        <div class="cta-promo__inner">
          <span class="cta-promo__eyebrow">LET'S BRING YOUR IDEA TO LIFE</span>
          <h3 class="cta-promo__heading">
            Give Your Brand a Story Worth Watching
          </h3>
          <p class="cta-promo__sub">
            Have a video concept in mind? Let's discuss your brand, creative
            goals, and the video content your business needs.
          </p>
          <div class="cta-promo__actions">
            <button class="btn btn-white" data-model=".enquire-pop">
              Get a Free Video Concept <i>↗</i>
            </button>
            <a href="javascript:void(0)" class="btn btn-outline-white">Let's Talk About Your Video <i>↗</i></a>
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