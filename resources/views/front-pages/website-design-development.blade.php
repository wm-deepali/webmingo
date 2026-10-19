@extends('layouts.app')

@push('styles')
  <link rel="stylesheet" href="assets/sass/web-development/web-development.css" />
@endpush

@section('content')

  <main>

    <section class="banner">
      <div class="bg">
        <video autoplay muted loop playsinline class="bg-video" src="assets/video/effect3.mp4"
          poster="assets/video/poster/effect3.png">
          <source src="assets/video/effect3.mp4" type="video/mp4" />
        </video>
        <div class="container">
          <div class="banner-wrapper">
            <div class="content">
              <span class="eyebrow">WEBSITE DESIGN &amp; DEVELOPMENT</span>

              <h1>
                Websites &amp; Web Platforms Built Around Your Business.
              </h1>

              <p>
                From business websites and e-commerce stores to LMS,
                classified portals and custom web applications, we build
                digital platforms around your goals and requirements.
              </p>

              <div class="banner-actions">
                <a href="javascript:void(0)" class="btn btn-outline-white">
                  Chat on WhatsApp
                  <i>↗</i>
                </a>

                <button data-model=".enquire-pop" class="btn btn-white">
                  Discuss Your Project
                  <i>↗</i>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ============================================================
         02 — INTRODUCTION (NEW: .webIntro)
    ============================================================= -->
    <section class="webIntro">
      <div class="container">
        <div class="heading">
          <span class="eyebrow"><span class="eyebrow-line"></span>MORE THAN A WEBSITE</span>
          <h3>
            Your Website Should Do More Than <span>Look Good Online.</span>
          </h3>
          <p>
            Before customers call, visit or buy, they look you up online. Your
            website is where they decide whether you are the right choice, so
            it needs to explain, reassure and guide them to the next step.
          </p>
        </div>

        <div class="webIntro-layout">
          <!-- LEFT: outline illustration -->
          <div class="webIntro-visual">
            <div class="webIntro-art">
              <svg viewBox="0 0 480 400" role="img"
                aria-label="Outline illustration of a website on desktop and mobile with an enquiry received">
                <!-- browser -->
                <rect class="fill" x="20" y="30" width="340" height="250" rx="16" />
                <path class="line" d="M20 74h340" />
                <circle class="line" cx="44" cy="52" r="5" />
                <circle class="line" cx="62" cy="52" r="5" />
                <circle class="line" cx="80" cy="52" r="5" />
                <rect class="line" x="120" y="44" width="150" height="16" rx="8" />
                <path class="accent" d="M48 108h120" />
                <path class="line" d="M48 130h160M48 148h130" />
                <rect class="solid" x="48" y="168" width="84" height="28" rx="14" />
                <rect class="line" x="230" y="96" width="100" height="100" rx="10" />
                <circle class="line" cx="260" cy="124" r="8" />
                <path class="line" d="M230 180l32-30 24 20 20-16 24 24" />
                <rect class="line" x="48" y="222" width="82" height="42" rx="8" />
                <rect class="line" x="144" y="222" width="82" height="42" rx="8" />
                <rect class="line" x="240" y="222" width="82" height="42" rx="8" />
                <!-- phone -->
                <rect class="fill" x="330" y="120" width="120" height="240" rx="20" />
                <path class="line" d="M370 138h40" />
                <rect class="line" x="346" y="162" width="88" height="56" rx="8" />
                <path class="line" d="M346 240h88M346 258h60" />
                <rect class="solid" x="346" y="288" width="88" height="28" rx="14" />
                <!-- enquiry card -->
                <rect class="fill" x="20" y="300" width="230" height="66" rx="14" />
                <circle class="solid" cx="56" cy="333" r="16" />
                <path class="tick" d="M48 333l6 6 10-12" />
                <path class="accent" d="M84 324h110" />
                <path class="line" d="M84 344h80" />
              </svg>
            </div>

            <div class="webIntro-journey">
              <span>Discover</span>
              <i>→</i>
              <span>Trust</span>
              <i>→</i>
              <span>Enquire</span>
            </div>
          </div>

          <!-- RIGHT: content -->
          <div class="webIntro-content">
            <p class="webIntro-lead">
              In simple words: a good website answers three questions for
              every visitor.
              <strong>Who are you? Can I trust you? What should I do next?</strong>
              We design and build websites around those answers, so more of
              your visitors become enquiries and customers.
            </p>

            <ul class="webIntro-list">
              <li>
                <span class="webIntro-icon">
                  <svg viewBox="0 0 24 24">
                    <circle cx="11" cy="11" r="7" />
                    <path d="M21 21l-4.3-4.3" />
                  </svg>
                </span>
                <div>
                  <h4>Get Found</h4>
                  <p>
                    Clear structure that helps the right people discover you.
                  </p>
                </div>
              </li>

              <li>
                <span class="webIntro-icon">
                  <svg viewBox="0 0 24 24">
                    <rect x="4" y="4" width="16" height="16" rx="3" />
                    <path d="M8 9h8M8 13h8M8 17h5" />
                  </svg>
                </span>
                <div>
                  <h4>Explain Clearly</h4>
                  <p>Your products and services made easy to understand.</p>
                </div>
              </li>

              <li>
                <span class="webIntro-icon">
                  <svg viewBox="0 0 24 24">
                    <path d="M12 3l8 3v6c0 4.5-3.2 7.8-8 9-4.8-1.2-8-4.5-8-9V6l8-3z" />
                    <path d="M8.5 12l2.5 2.5 4.5-5" />
                  </svg>
                </span>
                <div>
                  <h4>Build Trust</h4>
                  <p>Earn confidence before the first conversation.</p>
                </div>
              </li>

              <li>
                <span class="webIntro-icon">
                  <svg viewBox="0 0 24 24">
                    <rect x="3" y="5" width="18" height="14" rx="3" />
                    <path d="M3 8l9 6 9-6" />
                  </svg>
                </span>
                <div>
                  <h4>Get More Enquiries</h4>
                  <p>
                    Simple forms and clear buttons make contacting you easy.
                  </p>
                </div>
              </li>

              <li>
                <span class="webIntro-icon">
                  <svg viewBox="0 0 24 24">
                    <path d="M3 20h18" />
                    <path d="M6 16l4-5 3 3 5-7" />
                    <path d="M15 7h3v3" />
                  </svg>
                </span>
                <div>
                  <h4>Ready To Grow</h4>
                  <p>
                    A strong base you can add pages and features to later.
                  </p>
                </div>
              </li>

              <li>
                <span class="webIntro-icon">
                  <svg viewBox="0 0 24 24">
                    <rect x="2" y="5" width="14" height="10" rx="2" />
                    <rect x="14" y="9" width="8" height="12" rx="2" />
                    <path d="M6 19h6" />
                  </svg>
                </span>
                <div>
                  <h4>Works On Every Device</h4>
                  <p>
                    The same smooth experience on mobile, tablet and desktop.
                  </p>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <section class="webBuild">
      <div class="container">
        <div class="heading">
          <span class="webBuild-eyebrow">
            <span class="webBuild-eyebrow-line"></span>
            WHAT WE BUILD
          </span>

          <h3>
            Websites Built Around
            <span>What Your Business Needs To Achieve.</span>
          </h3>

          <p>
            From your first digital presence to a complete online platform —
            built around your audience and goals.
          </p>
        </div>

        <div class="webBuild-grid">
          <!-- BUSINESS WEBSITE -->
          <a href="{{ route('business-website-development') }}" class="webBuild-item webBuild-item--business">
            <img src="assets/images/umbrella/web-umbrella.png" alt="Business website solution" loading="lazy" />

            <div class="webBuild-content">
              <span class="webBuild-label">DIGITAL PRESENCE</span>
              <h4>Business Websites</h4>
              <p>Build credibility and generate enquiries.</p>

              <div class="webBuild-foot">
                <div class="webBuild-price">
                  <small>Starts From</small>
                  <strong>₹25,000<span>/project</span></strong>
                </div>
                <span class="btn btn-outline-white">Learn More <i>↗</i></span>
              </div>
            </div>
          </a>

          <!-- E-COMMERCE -->
          <a href="{{ route('E-Commerce-website-development') }}" class="webBuild-item webBuild-item--commerce">
            <img src="assets/images/umbrella/umbrella2.png" alt="E-commerce website and online store" loading="lazy" />

            <div class="webBuild-content">
              <span class="webBuild-label">ONLINE SELLING</span>
              <h4>E-Commerce</h4>
              <p>Showcase products, simplify shopping.</p>

              <div class="webBuild-foot">
                <div class="webBuild-price">
                  <small>Starts From</small>
                  <strong>₹40,000<span>/project</span></strong>
                </div>
                <span class="btn btn-outline-white">Learn More <i>↗</i></span>
              </div>
            </div>
          </a>

          <!-- CLASSIFIED -->
          <a href="{{ route('classified-portals-development') }}" class="webBuild-item webBuild-item--classified">
            <img src="assets/images/umbrella/umbrella3.png" alt="Classified marketplace website" loading="lazy" />

            <div class="webBuild-content">
              <span class="webBuild-label">LISTING PLATFORM</span>
              <h4>Classified Websites</h4>
              <p>Publish, discover and manage listings.</p>

              <div class="webBuild-foot">
                <div class="webBuild-price">
                  <small>Starts From</small>
                  <strong>₹55,000<span>/project</span></strong>
                </div>
                <span class="btn btn-outline-white">Learn More <i>↗</i></span>
              </div>
            </div>
          </a>

          <!-- ELEARNING -->
          <a href="{{ route('E-Learning-LMS-development') }}" class="webBuild-item webBuild-item--elearning">
            <img src="assets/images/umbrella/umbrella4.png" alt="eLearning website and online education platform"
              loading="lazy" />

            <div class="webBuild-content">
              <span class="webBuild-label">ONLINE EDUCATION</span>
              <h4>eLearning Websites</h4>
              <p>Courses, live classes and study material.</p>

              <div class="webBuild-foot">
                <div class="webBuild-price">
                  <small>Starts From</small>
                  <strong>₹60,000<span>/project</span></strong>
                </div>
                <span class="btn btn-outline-white">Learn More <i>↗</i></span>
              </div>
            </div>
          </a>

          <!-- CUSTOM WEBSITE -->
          <a href="{{ route('custom-web-applications-development') }}" class="webBuild-item webBuild-item--custom">
            <img src="assets/images/umbrella/umbrella5.png" alt="Custom web application development" loading="lazy" />

            <div class="webBuild-content">
              <span class="webBuild-label">CUSTOM BUILD</span>
              <h4>Custom Websites</h4>
              <p>Workflows, dashboards and integrations.</p>

              <div class="webBuild-foot">
                <div class="webBuild-price">
                  <small>Pricing</small>
                  <strong>Custom Quote</strong>
                </div>
                <span class="btn btn-outline-white">Learn More <i>↗</i></span>
              </div>
            </div>
          </a>

          <!-- CTA -->
          <article class="webBuild-cta">
            <div class="webBuild-cta-content">
              <span class="webBuild-cta-label">HAVE A DIFFERENT REQUIREMENT?</span>
              <h4>
                Let's Build Something <span>That Fits Your Business.</span>
              </h4>
              <p>Tell us your goal and we'll shape the right solution.</p>
            </div>
            <button type="button" class="btn btn-black" data-model=".enquire-pop">
              Let's Talk <i>↗</i>
            </button>
          </article>
        </div>
      </div>
    </section>

    <!-- ============================================================
         04 — OUR APPROACH
    ============================================================= -->

    <section class="webApproach" id="web-process">
      <div class="container">
        <div class="heading">
          <span class="eyebrow">
            <span class="eyebrow-line"></span>
            OUR APPROACH
          </span>

          <h3>
            From Business Goals <br />
            <span>To A Website That Performs.</span>
          </h3>

          <p>
            Every website starts with a purpose. We combine strategy, UX,
            design and development to create digital experiences built around
            your business, your audience and the actions you want visitors to
            take.
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
              <h4>Understand</h4>

              <p>
                We learn about your business, audience, competitors and the
                goals your website needs to support.
              </p>
            </div>

            <div class="webApproach-output">
              <span>YOU GET</span>

              <strong>A clear project brief</strong>
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
                We define the sitemap, content structure, user journeys and
                conversion points before the visual design begins.
              </p>
            </div>

            <div class="webApproach-output">
              <span>YOU GET</span>

              <strong>Sitemap &amp; page structure</strong>
            </div>
          </div>

          <div class="webApproach-step">
            <div class="webApproach-icon">
              <svg viewBox="0 0 24 24" fill="none">
                <path d="M4 17.5V20H6.5L18.5 8L16 5.5L4 17.5Z"></path>
                <path d="M14.5 7L17 9.5"></path>
                <path d="M4 20L8.5 19"></path>
              </svg>
            </div>

            <div class="webApproach-main">
              <h4>Design</h4>

              <p>
                We create a clear, responsive interface that reflects your
                brand while making the experience easy to understand and
                navigate.
              </p>
            </div>

            <div class="webApproach-output">
              <span>YOU GET</span>

              <strong>Website design to approve</strong>
            </div>
          </div>

          <div class="webApproach-step">
            <div class="webApproach-icon">
              <svg viewBox="0 0 24 24" fill="none">
                <path d="M8.5 7L4 12L8.5 17"></path>
                <path d="M15.5 7L20 12L15.5 17"></path>
                <path d="M13.5 4L10.5 20"></path>
              </svg>
            </div>

            <div class="webApproach-main">
              <h4>Build</h4>

              <p>
                We turn the approved experience into a responsive,
                performance-focused website with the functionality and
                integrations your business requires.
              </p>
            </div>

            <div class="webApproach-output">
              <span>YOU GET</span>

              <strong>A working website</strong>
            </div>
          </div>

          <div class="webApproach-step webApproach-step--final">
            <div class="webApproach-icon">
              <svg viewBox="0 0 24 24" fill="none">
                <circle cx="12" cy="12" r="8.5"></circle>
                <path d="M3.5 12H20.5"></path>
                <path d="M12 3.5C14.2 5.8 15.2 8.7 15.2 12C15.2 15.3 14.2 18.2 12 20.5"></path>
                <path d="M12 3.5C9.8 5.8 8.8 8.7 8.8 12C8.8 15.3 9.8 18.2 12 20.5"></path>
              </svg>
            </div>

            <div class="webApproach-main">
              <h4>Launch &amp; Improve</h4>

              <p>
                We test the website across devices and browsers, launch it
                confidently and continue refining it as your business evolves.
              </p>
            </div>

            <div class="webApproach-output">
              <span>YOU GET</span>

              <strong>A live, tested website</strong>
            </div>
          </div>
        </div>

        <div class="webApproach-cta">
          <button type="button" data-model=".enquire-pop" class="btn btn-black">
            Start Your Website Project
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
            <span class="ecomPackage-label">
              READY TO BUILD YOUR WEBSITE
            </span>

            <h3>
              Everything You Need To
              <span>Build A Better Website.</span>
            </h3>

            <p class="ecomPackage-intro">
              We build professional websites around your business, customers,
              services, products, goals and specific requirements—from simple
              business websites to custom digital experiences.
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
                <label for="packageBusiness">Website Type</label>

                <select id="packageBusiness" name="business_type">
                  <option value="" selected disabled>
                    Select your website type
                  </option>
                  <option value="corporate">Corporate Website</option>
                  <option value="small-business">
                    Small Business Website
                  </option>
                  <option value="professional-services">
                    Professional Services Website
                  </option>
                  <option value="product-catalogue">
                    Product &amp; Catalogue Website
                  </option>
                  <option value="custom">Custom Business Website</option>
                  <option value="ecommerce">E-Commerce Website</option>
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

    <section class="secC" id="web-portfolio">
      <div class="container">
        <div class="heading">
          <span class="eyebrow">
            <span class="eyebrow-line"></span>
            RESULTS &amp; CASE STUDIES
          </span>

          <h3>
            Websites Built To Create Real
            <span>Business Opportunities.</span>
          </h3>

          <p>
            Explore websites and digital experiences created to help
            businesses communicate clearly, build credibility and make it
            easier for their customers to take the next step.
          </p>
        </div>

        <div class="swiper-wrapped">
          <div class="swiper secC-swiper">
            <div class="swiper-wrapper">
              <!-- 01 — DIGITAL PRESENCE -->
              <div class="swiper-slide">
                <div class="secC-panel">
                  <div class="secC-panel__media">
                    <img src="assets/images/comman/Digital-Presence.avif"
                      alt="Business website designed for a stronger digital presence" loading="lazy" />
                  </div>

                  <div class="secC-panel__body">
                    <div class="secC-panel__text">
                      <h4>Stronger Digital Presence</h4>

                      <p>
                        A business website concept designed to present
                        services clearly and build credibility from the first
                        visit.
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

              <!-- 02 — CUSTOMER JOURNEY -->
              <div class="swiper-slide">
                <div class="secC-panel">
                  <div class="secC-panel__media">
                    <img src="assets/images/comman/CustomerJourney.jpg" alt="Website structure and user journey planning"
                      loading="lazy" />
                  </div>

                  <div class="secC-panel__body">
                    <div class="secC-panel__text">
                      <h4>Clearer Customer Journey</h4>

                      <p>
                        Structured pages and user flows that guide visitors
                        from discovery to the next step.
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

              <!-- 03 — PRODUCT DISCOVERY -->
              <div class="swiper-slide">
                <div class="secC-panel">
                  <div class="secC-panel__media">
                    <img src="assets/images/comman/Product-Discovery.jpg"
                      alt="E-commerce website with easy product discovery" loading="lazy" />
                  </div>

                  <div class="secC-panel__body">
                    <div class="secC-panel__text">
                      <h4>Better Product Discovery</h4>

                      <p>
                        An online store concept built to help customers
                        browse, compare and find products with less effort.
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

              <!-- 04 — EASIER ENQUIRIES -->
              <div class="swiper-slide">
                <div class="secC-panel">
                  <div class="secC-panel__media">
                    <img src="assets/images/comman/EasierEnquiries.jpg"
                      alt="Landing page designed to make enquiries easier" loading="lazy" />
                  </div>

                  <div class="secC-panel__body">
                    <div class="secC-panel__text">
                      <h4>Easier Enquiries</h4>

                      <p>
                        Focused landing pages with clear calls to action and
                        simple forms that make it easy to get in touch.
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

              <!-- 05 — USER EXPERIENCE -->
              <div class="swiper-slide">
                <div class="secC-panel">
                  <div class="secC-panel__media">
                    <img src="assets/images/comman/UserExperience.jpg"
                      alt="Website redesign focused on improved user experience" loading="lazy" />
                  </div>

                  <div class="secC-panel__body">
                    <div class="secC-panel__text">
                      <h4>Improved User Experience</h4>

                      <p>
                        A redesign concept that simplifies layouts, content
                        and navigation for a smoother experience on every
                        device.
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

              <!-- 06 — SCALABLE FOUNDATION -->
              <div class="swiper-slide">
                <div class="secC-panel">
                  <div class="secC-panel__media">
                    <img src="assets/images/comman/ScalablFoundation.jpg"
                      alt="Scalable web platform and dashboard foundation" loading="lazy" />
                  </div>

                  <div class="secC-panel__body">
                    <div class="secC-panel__text">
                      <h4>Scalable Digital Foundation</h4>

                      <p>
                        Flexible CMS and custom platform builds designed to
                        support new content, features and integrations over
                        time.
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
         07 — WHY WEB MINGO (existing .secL, 4 points)
    ============================================================= -->
    <section class="secL">
      <div class="container">
        <div class="heading">
          <span class="eyebrow">
            <span class="eyebrow-line"></span>
            WHY WEB MINGO
          </span>

          <h3>
            A Website Built For Your Business <br /><span>
              Not Just Your Browser.</span>
          </h3>

          <p>
            We bring strategy, design and development together so your website
            is not treated as a standalone design project, but as an important
            part of how your business communicates, sells and grows.
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
              <h4>Business-First Thinking</h4>
              <p>
                We start with what your business needs the website to achieve
                before deciding how it should look.
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
              <h4>UX That Makes Sense</h4>
              <p>
                We structure information and journeys around how real visitors
                browse, compare and take action.
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
              <h4>Design With Purpose</h4>
              <p>
                Every visual decision supports your brand, communication and
                user experience.
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
              <h4>Scalable, SEO-Ready Development</h4>
              <p>
                We build for performance, responsiveness and SEO-readiness,
                with room to add content and functionality later.
              </p>
            </div>
          </li>
        </ul>

        <div class="cntr">
          <button type="button" data-model=".enquire-pop" class="btn btn-outline-black">
            Start Your Website Project
            <i>↗</i>
          </button>
        </div>
      </div>
    </section>

    <section class="secH">
      <div class="container">
        <div class="heading">
          <span class="eyebrow"><span class="eyebrow-line"></span>INDUSTRIES WE SERVE</span>
          <h3>Web Experiences Designed <span>Around Your Industry.</span></h3>
          <p>
            Every business has different customers, journeys and goals. We
            build websites around the way your audience discovers, evaluates
            and engages with your business.
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
         09 — FINAL CTA (existing .cta-promo)
    ============================================================= -->
    <div class="container">
      <div class="cta-promo">
        <div class="cta-promo__inner">
          <span class="cta-promo__eyebrow">READY TO BUILD YOUR NEXT WEBSITE?</span>
          <h3 class="cta-promo__heading">
            Let's Build A Website Your Business Can Grow With.
          </h3>
          <p class="cta-promo__sub">
            Tell us what you want your website to achieve, and we'll help you
            shape the right digital experience for your business.
          </p>
          <div class="cta-promo__actions">
            <button class="btn btn-white" data-model=".enquire-pop">
              Start Your Website Project <i>↗</i>
            </button>
            <a href="#web-portfolio" class="btn btn-outline-white">View Our Work <i>↗</i></a>
          </div>
        </div>
      </div>
    </div>

    <!-- ============================================================
         08 — FAQ (existing .secN)
    ============================================================= -->
    @include('partials.page-faqs', [
      'eyebrow' => 'FREQUENTLY ASKED QUESTIONS',
      'title' => 'Which Website Solution <br /><span>Is Right For My Business?</span>',
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