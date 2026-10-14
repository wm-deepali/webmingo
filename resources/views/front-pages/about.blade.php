@extends('layouts.app')

@push('styles')
    <link rel="stylesheet" href="assets/sass/about/about.css" />
@endpush

@section('content')
    <main>
      <section class="banner">
        <div class="bg">
          <video
            autoplay
            muted
            loop
            playsinline
            class="bg-video"
            src="assets/video/about.mp4"
            poster="assets/video/poster/about.png"
          >
            <source src="assets/video/about.mp4" type="video/mp4" />
          </video>

          <div class="container">
            <div class="banner-wrapper">
              <div class="content">
                <span class="eyebrow">ABOUT WEB MINGO</span>

                <h1>Building Digital Solutions for Businesses Since 2016.</h1>

                <p>
                  Web Mingo is an IT solutions company helping businesses build
                  websites, applications, digital platforms and stronger online
                  growth systems.
                </p>

                <div class="banner-actions">
                  <a href="javascript:void()" class="btn btn-outline-white">
                    Explore Our Services
                    <i>↗</i>
                  </a>

                  <button data-model=".enquire-pop" class="btn btn-white">
                    Contact Our Team
                    <i>↗</i>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="about-secD how-we-work">
        <div class="container">
          <div class="heading">
            <span class="eyebrow"
              ><span class="eyebrow-line"></span>Why Web Mingo?</span
            >
            <h3>More Than Just <br /><span>A Digital Agency</span></h3>
            <p>
              We bring strategy, creativity, and technology together to create
              digital experiences that help businesses move forward.
            </p>
          </div>

          <div class="hww-grid">
            <div class="hww-card">
              <span class="hww-card__num">01</span>
              <h4>Business First</h4>
              <p class="hww-card__tag">We understand before we create.</p>
              <p>
                We look beyond the brief to understand your business, goals,
                audience, and challenges — so every solution has a purpose.
              </p>
            </div>

            <div class="hww-card">
              <span class="hww-card__num">02</span>
              <h4>Strategy + Creativity</h4>
              <p class="hww-card__tag">Ideas backed by thinking.</p>
              <p>
                We combine strategic thinking with creative execution to build
                digital experiences that are engaging, relevant, and effective.
              </p>
            </div>

            <div class="hww-card">
              <span class="hww-card__num">03</span>
              <h4>Built to Perform</h4>
              <p class="hww-card__tag">Beautiful should work better.</p>
              <p>
                From design to development, we focus on creating experiences
                that are intuitive, reliable, scalable, and built for real-world
                results.
              </p>
            </div>

            <div class="hww-card">
              <span class="hww-card__num">04</span>
              <h4>Built for Growth</h4>
              <p class="hww-card__tag">We think beyond launch.</p>
              <p>
                We create digital solutions that can evolve with your business,
                while building relationships that go beyond a single project.
              </p>
            </div>
          </div>
        </div>
      </section>

      <section class="about-secA">
        <div class="container">
          <div class="whoWeAre">
            <div class="whoWeAre__image">
              <img
                src="assets/images/comman/why-us.png"
                alt="Web Mingo team at work"
                loading="lazy"
              />
            </div>

            <span class="whoWeAre__corner whoWeAre__corner--tr"></span>

            <div class="container">
              <div class="whoWeAre__content">
                <div class="heading">
                  <span class="eyebrow">
                    <span class="eyebrow-line"></span>
                    Who is Web Mingo?
                  </span>

                  <h3>
                    Your Digital Partner<br />
                    for Meaningful Growth
                  </h3>
                </div>

                <p>
                  Web Mingo is a digital solutions company focused on helping
                  businesses create a stronger and more effective presence
                  online.
                </p>

                <p>
                  We bring together strategy, design, technology and digital
                  marketing to build solutions that are not only visually
                  engaging, but also purposeful, usable and aligned with
                  business goals.
                </p>

                <blockquote class="whoWeAre__highlight">
                  <span class="whoWeAre__highlight-mark">“</span>
                  We don't believe in building digital products just to look
                  good. We build them to work, communicate and grow.
                </blockquote>

                <div class="whoWeAre__badge">
                  <span class="whoWeAre__badge-num">100%</span>
                  <span class="whoWeAre__badge-label"
                    >Focused on outcomes, not just aesthetics</span
                  >
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="about-secC">
        <div class="container">
          <div class="heading">
            <h3>
              From an Idea to a <br />
              <span>Digital Growth Partner</span>
            </h3>
            <p>
              Every stage of our journey has shaped how we think, build and work
              with businesses today.
            </p>
          </div>

          <div class="timeline-wrap">
            <!-- LEFT -->
            <div class="timeline-text">
              <span class="ghost-year" data-ghost>01</span>

              <div class="step-rail">
                <span class="step-rail__line"></span>
                <span class="step-rail__fill" data-rail-fill></span>
                <ul class="step-rail__list">
                  <li class="is-active"></li>
                  <li></li>
                  <li></li>
                  <li></li>
                  <li></li>
                </ul>
              </div>

              <div class="textSlider swiper">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <span class="year">2012</span>
                    <h4>The Beginning</h4>
                    <p>
                      Web Mingo began with a vision to help businesses create a
                      stronger presence in the digital world.
                    </p>
                  </div>
                  <div class="swiper-slide">
                    <span class="year">2016</span>
                    <h4>Building Our Foundation</h4>
                    <p>
                      We expanded our capabilities across website design,
                      development and digital solutions, working with businesses
                      across different industries.
                    </p>
                  </div>
                  <div class="swiper-slide">
                    <span class="year">2020</span>
                    <h4>Expanding Our Expertise</h4>
                    <p>
                      Our services grew to include e-commerce, SEO, digital
                      marketing and other technology-driven solutions.
                    </p>
                  </div>
                  <div class="swiper-slide">
                    <span class="year">2024</span>
                    <h4>Growing With Our Clients</h4>
                    <p>
                      As our client relationships grew, so did our approach —
                      moving beyond individual projects toward long-term digital
                      partnerships.
                    </p>
                  </div>
                  <div class="swiper-slide">
                    <span class="year">NOW</span>
                    <h4>Where We Are Today</h4>
                    <p>
                      Today, Web Mingo continues to combine strategy, creativity
                      and technology to build digital experiences designed for
                      growth.
                    </p>
                  </div>
                </div>
              </div>

              <div class="timeline-nav">
                <span class="nav-count"><em data-current>01</em> / 05</span>

                <div class="timeline-nav__btns">
                  <button
                    type="button"
                    class="timeline-nav__btn tl-prev"
                    aria-label="Previous"
                  >
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                      <path
                        d="m15 6-6 6 6 6"
                        stroke="currentColor"
                        stroke-width="1.8"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        fill="none"
                      />
                    </svg>
                  </button>
                  <button
                    type="button"
                    class="timeline-nav__btn tl-next"
                    aria-label="Next"
                  >
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                      <path
                        d="m9 6 6 6-6 6"
                        stroke="currentColor"
                        stroke-width="1.8"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        fill="none"
                      />
                    </svg>
                  </button>
                </div>
              </div>
            </div>

            <!-- RIGHT -->
            <div class="timeline-media">
              <div class="media-frame">
                <span class="frame-tag" data-frame-tag>2012</span>

                <div class="mediaSlider swiper">
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <img
                        src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?w=900&q=80"
                        alt="The Beginning"
                      />
                    </div>
                    <div class="swiper-slide">
                      <img
                        src="https://images.unsplash.com/photo-1552664730-d307ca884978?w=900&q=80"
                        alt="Building Our Foundation"
                      />
                    </div>
                    <div class="swiper-slide">
                      <img
                        src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=900&q=80"
                        alt="Expanding Our Expertise"
                      />
                    </div>
                    <div class="swiper-slide">
                      <img
                        src="https://images.unsplash.com/photo-1600880292203-757bb62b4baf?w=900&q=80"
                        alt="Growing With Our Clients"
                      />
                    </div>
                    <div class="swiper-slide">
                      <img
                        src="https://images.unsplash.com/photo-1521737604893-d14cc237f11d?w=900&q=80"
                        alt="Where We Are Today"
                      />
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <div class="container">
        <div class="stats-promo">
          <div class="stats-promo__inner">
            <span class="stats-promo__eyebrow">Our Track Record</span>

            <h3 class="stats-promo__heading">
              A Journey of Building, Learning & Growth.
            </h3>

            <div class="stats-promo__grid">
              <div class="stats-promo__item">
                <div class="stats-promo__num">14<span>+</span></div>
                <div class="stats-promo__label">Years</div>
              </div>

              <div class="stats-promo__item">
                <div class="stats-promo__num">150<span>+</span></div>
                <div class="stats-promo__label">Businesses</div>
              </div>

              <div class="stats-promo__item">
                <div class="stats-promo__num">500<span>+</span></div>
                <div class="stats-promo__label">Projects</div>
              </div>

              <div class="stats-promo__item">
                <div class="stats-promo__num">12<span>+</span></div>
                <div class="stats-promo__label">Industries</div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <section class="about-secE">
        <div class="container">
          <div class="heading">
            <h3>Behind The <span>Work</span></h3>
            <p>
              The meetings, whiteboards, coffee, bugs, ideas, debates and small
              wins that happen before the final product.
            </p>
          </div>

          <div class="culture-gallery">
            <div class="culture-gallery__item culture-gallery__item--tall">
              <div class="culture-gallery__photo">
                <img
                  src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?auto=format&fit=crop&w=600&q=80"
                  alt="Team meeting"
                />
              </div>
              <div class="culture-gallery__caption">
                <span>Monday, 10:42 AM</span>
                <i>Something finally clicked.</i>
              </div>
            </div>

            <div class="culture-gallery__item culture-gallery__item--square">
              <div class="culture-gallery__photo">
                <img
                  src="https://images.unsplash.com/photo-1487014679447-9f8336841d58?auto=format&fit=crop&w=600&q=80"
                  alt="Designer working"
                />
              </div>
              <div class="culture-gallery__caption">
                <span>Design desk</span>
                <i>Pixel by pixel.</i>
              </div>
            </div>

            <div class="culture-gallery__item culture-gallery__item--tall">
              <div class="culture-gallery__photo">
                <img
                  src="https://images.unsplash.com/photo-1519389950473-47ba0277781c?auto=format&fit=crop&w=600&q=80"
                  alt="Developer coding"
                />
              </div>
              <div class="culture-gallery__caption">
                <span>Development</span>
                <i>47 tabs open. Still going.</i>
              </div>
            </div>

            <div class="culture-gallery__item culture-gallery__item--square">
              <div class="culture-gallery__photo">
                <img
                  src="https://images.unsplash.com/photo-1497215728101-856f4ea42174?auto=format&fit=crop&w=600&q=80"
                  alt="Office space"
                />
              </div>
              <div class="culture-gallery__caption">
                <span>The office</span>
                <i>Where it all happens.</i>
              </div>
            </div>

            <div class="culture-gallery__item culture-gallery__item--tall">
              <div class="culture-gallery__photo">
                <img
                  src="https://images.unsplash.com/photo-1531403009284-440f080d1e12?auto=format&fit=crop&w=600&q=80"
                  alt="Whiteboard session"
                />
              </div>
              <div class="culture-gallery__caption">
                <span>Whiteboard session</span>
                <i>Every idea starts messy.</i>
              </div>
            </div>

            <div class="culture-gallery__item culture-gallery__item--square">
              <div class="culture-gallery__photo">
                <img
                  src="https://images.unsplash.com/photo-1495474472287-4d71bcdd2085?auto=format&fit=crop&w=600&q=80"
                  alt="Coffee break"
                />
              </div>
              <div class="culture-gallery__caption">
                <span>3 PM coffee run</span>
                <i>Fuel for deadlines.</i>
              </div>
            </div>

            <div class="culture-gallery__item culture-gallery__item--tall">
              <div class="culture-gallery__photo">
                <img
                  src="https://images.unsplash.com/photo-1552664730-d307ca884978?auto=format&fit=crop&w=600&q=80"
                  alt="Client meeting"
                />
              </div>
              <div class="culture-gallery__caption">
                <span>Client meeting</span>
                <i>Good questions &gt; quick answers.</i>
              </div>
            </div>

            <div class="culture-gallery__item culture-gallery__item--square">
              <div class="culture-gallery__photo">
                <img
                  src="https://images.unsplash.com/photo-1543269865-cbf427effbad?auto=format&fit=crop&w=600&q=80"
                  alt="Team celebration"
                />
              </div>
              <div class="culture-gallery__caption">
                <span>Friday, 6 PM</span>
                <i>Ship it. Celebrate it.</i>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="founder-sec">
        <div class="container">
          <div class="founder-sec__wrap">
            <div class="founder-sec__media">
              <div class="founder-sec__frame"></div>
              <div class="founder-sec__photo">
                <img
                  src="assets/images/home/founder.avif"
                  alt="Founder of Web Mingo"
                />
              </div>
            </div>

            <div class="founder-sec__content">
              <div class="heading">
                <span class="eyebrow">
                  <span class="eyebrow-line"></span>The Person Behind Web
                  Mingo</span
                >
                <h3>It Started With A <span>Simple Belief.</span></h3>
              </div>
              <p class="founder-sec__quote">
                We're not here to simply build websites. We're here to build
                things that matter to the businesses behind them.
              </p>

              <p>
                Web Mingo began with a simple idea: digital should do more than
                exist. It should help businesses communicate better, connect
                with people and move forward.
              </p>

              <p>
                What started as a vision has grown into a team working across
                strategy, design, development, e-commerce, SEO and digital
                marketing. The tools have changed — our belief hasn't.
              </p>

              <div class="founder-sec__belief">
                <span class="dot"></span>
                <p>Good digital work should create real value.</p>
              </div>

              <div class="founder-sec__footer">
                <div class="founder-sec__info">
                  <h4>[Founder Name]</h4>
                  <span>Founder &amp; [Designation]</span>
                </div>
                <span class="founder-sec__pill">Since 2012</span>
              </div>
            </div>
          </div>
        </div>
      </section>

      <div class="container">
        <div class="cta-promo">
          <div class="cta-promo__inner">
            <span class="cta-promo__eyebrow">Have Questions?</span>

            <h3 class="cta-promo__heading">
              Ready to Build Something<br />
              That Moves Your Business Forward?
            </h3>

            <p class="cta-promo__sub">
              Share your goals with us and let’s create a digital solution that
              fits your business, audience, and growth plans.
            </p>

            <div class="cta-promo__actions">
              <button class="btn btn-white" data-model=".enquire-pop">
                Get FREE Consultation
              </button>
              <a href="javascript:void()" class="btn btn-outline-white"
                >Chat on WhatsApp</a
              >
            </div>
          </div>
        </div>
      </div>

      <section class="home-secI">
        <div class="container">
          <div class="heading">
            <h3>What Our <span>Clients Say</span></h3>
            <p>
              We create lasting partnerships through thoughtful design, reliable
              technology, and measurable digital results.
            </p>
          </div>

          <div class="swiper-wrap">
            <div class="swiper TestimonialSlider">
              <div class="swiper-wrapper">
                <!-- TESTIMONIAL 01 -->
                <div class="swiper-slide">
                  <div class="test_card_group test_card_group--dark">
                    <div class="test_card test_card--name">
                      <h5>Rahul Mehta</h5>
                      <span>Business Owner</span>
                    </div>

                    <div class="test_card">
                      <div class="test_card__rating">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 24 24"
                        >
                          <path
                            fill="currentColor"
                            d="M12 .587l3.668 7.431 8.204 1.193-5.936 5.788 1.401 8.171L12 19.771l-7.337 3.399 1.401-8.171L.128 9.211l8.204-1.193z"
                          />
                        </svg>
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 24 24"
                        >
                          <path
                            fill="currentColor"
                            d="M12 .587l3.668 7.431 8.204 1.193-5.936 5.788 1.401 8.171L12 19.771l-7.337 3.399 1.401-8.171L.128 9.211l8.204-1.193z"
                          />
                        </svg>
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 24 24"
                        >
                          <path
                            fill="currentColor"
                            d="M12 .587l3.668 7.431 8.204 1.193-5.936 5.788 1.401 8.171L12 19.771l-7.337 3.399 1.401-8.171L.128 9.211l8.204-1.193z"
                          />
                        </svg>
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 24 24"
                        >
                          <path
                            fill="currentColor"
                            d="M12 .587l3.668 7.431 8.204 1.193-5.936 5.788 1.401 8.171L12 19.771l-7.337 3.399 1.401-8.171L.128 9.211l8.204-1.193z"
                          />
                        </svg>
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 24 24"
                        >
                          <path
                            fill="currentColor"
                            d="M12 .587l3.668 7.431 8.204 1.193-5.936 5.788 1.401 8.171L12 19.771l-7.337 3.399 1.401-8.171L.128 9.211l8.204-1.193z"
                          />
                        </svg>
                      </div>

                      <p>
                        "Web Mingo understood our requirements from the
                        beginning and delivered a website that feels modern,
                        professional and easy for our customers to use."
                      </p>

                      <span class="test_card__tag">
                        " Professional &amp; Reliable "
                      </span>
                    </div>
                  </div>
                </div>

                <!-- TESTIMONIAL 02 -->
                <div class="swiper-slide">
                  <div class="test_card_group">
                    <div class="test_card">
                      <div class="test_card__rating">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 24 24"
                        >
                          <path
                            fill="currentColor"
                            d="M12 .587l3.668 7.431 8.204 1.193-5.936 5.788 1.401 8.171L12 19.771l-7.337 3.399 1.401-8.171L.128 9.211l8.204-1.193z"
                          />
                        </svg>
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 24 24"
                        >
                          <path
                            fill="currentColor"
                            d="M12 .587l3.668 7.431 8.204 1.193-5.936 5.788 1.401 8.171L12 19.771l-7.337 3.399 1.401-8.171L.128 9.211l8.204-1.193z"
                          />
                        </svg>
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 24 24"
                        >
                          <path
                            fill="currentColor"
                            d="M12 .587l3.668 7.431 8.204 1.193-5.936 5.788 1.401 8.171L12 19.771l-7.337 3.399 1.401-8.171L.128 9.211l8.204-1.193z"
                          />
                        </svg>
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 24 24"
                        >
                          <path
                            fill="currentColor"
                            d="M12 .587l3.668 7.431 8.204 1.193-5.936 5.788 1.401 8.171L12 19.771l-7.337 3.399 1.401-8.171L.128 9.211l8.204-1.193z"
                          />
                        </svg>
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 24 24"
                        >
                          <path
                            fill="currentColor"
                            d="M12 .587l3.668 7.431 8.204 1.193-5.936 5.788 1.401 8.171L12 19.771l-7.337 3.399 1.401-8.171L.128 9.211l8.204-1.193z"
                          />
                        </svg>
                      </div>

                      <p>
                        "The team helped us improve both the design and overall
                        user experience. Communication was smooth and every
                        detail was handled professionally."
                      </p>

                      <span class="test_card__tag">
                        " Smooth Experience "
                      </span>
                    </div>

                    <div class="test_card test_card--name">
                      <h5>Priya Sharma</h5>
                      <span>Marketing Manager</span>
                    </div>
                  </div>
                </div>

                <!-- TESTIMONIAL 03 -->
                <div class="swiper-slide">
                  <div class="test_card_group test_card_group--dark">
                    <div class="test_card test_card--name">
                      <h5>Arjun Kapoor</h5>
                      <span>Founder &amp; Director</span>
                    </div>

                    <div class="test_card">
                      <div class="test_card__rating">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 24 24"
                        >
                          <path
                            fill="currentColor"
                            d="M12 .587l3.668 7.431 8.204 1.193-5.936 5.788 1.401 8.171L12 19.771l-7.337 3.399 1.401-8.171L.128 9.211l8.204-1.193z"
                          />
                        </svg>
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 24 24"
                        >
                          <path
                            fill="currentColor"
                            d="M12 .587l3.668 7.431 8.204 1.193-5.936 5.788 1.401 8.171L12 19.771l-7.337 3.399 1.401-8.171L.128 9.211l8.204-1.193z"
                          />
                        </svg>
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 24 24"
                        >
                          <path
                            fill="currentColor"
                            d="M12 .587l3.668 7.431 8.204 1.193-5.936 5.788 1.401 8.171L12 19.771l-7.337 3.399 1.401-8.171L.128 9.211l8.204-1.193z"
                          />
                        </svg>
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 24 24"
                        >
                          <path
                            fill="currentColor"
                            d="M12 .587l3.668 7.431 8.204 1.193-5.936 5.788 1.401 8.171L12 19.771l-7.337 3.399 1.401-8.171L.128 9.211l8.204-1.193z"
                          />
                        </svg>
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 24 24"
                        >
                          <path
                            fill="currentColor"
                            d="M12 .587l3.668 7.431 8.204 1.193-5.936 5.788 1.401 8.171L12 19.771l-7.337 3.399 1.401-8.171L.128 9.211l8.204-1.193z"
                          />
                        </svg>
                      </div>

                      <p>
                        "From development to SEO, Web Mingo helped us bring
                        different parts of our digital presence together into
                        one clear and effective experience."
                      </p>

                      <span class="test_card__tag"> " Built for Growth " </span>
                    </div>
                  </div>
                </div>

                <!-- TESTIMONIAL 02 -->
                <div class="swiper-slide">
                  <div class="test_card_group">
                    <div class="test_card">
                      <div class="test_card__rating">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 24 24"
                        >
                          <path
                            fill="currentColor"
                            d="M12 .587l3.668 7.431 8.204 1.193-5.936 5.788 1.401 8.171L12 19.771l-7.337 3.399 1.401-8.171L.128 9.211l8.204-1.193z"
                          />
                        </svg>
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 24 24"
                        >
                          <path
                            fill="currentColor"
                            d="M12 .587l3.668 7.431 8.204 1.193-5.936 5.788 1.401 8.171L12 19.771l-7.337 3.399 1.401-8.171L.128 9.211l8.204-1.193z"
                          />
                        </svg>
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 24 24"
                        >
                          <path
                            fill="currentColor"
                            d="M12 .587l3.668 7.431 8.204 1.193-5.936 5.788 1.401 8.171L12 19.771l-7.337 3.399 1.401-8.171L.128 9.211l8.204-1.193z"
                          />
                        </svg>
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 24 24"
                        >
                          <path
                            fill="currentColor"
                            d="M12 .587l3.668 7.431 8.204 1.193-5.936 5.788 1.401 8.171L12 19.771l-7.337 3.399 1.401-8.171L.128 9.211l8.204-1.193z"
                          />
                        </svg>
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 24 24"
                        >
                          <path
                            fill="currentColor"
                            d="M12 .587l3.668 7.431 8.204 1.193-5.936 5.788 1.401 8.171L12 19.771l-7.337 3.399 1.401-8.171L.128 9.211l8.204-1.193z"
                          />
                        </svg>
                      </div>

                      <p>
                        "The team helped us improve both the design and overall
                        user experience. Communication was smooth and every
                        detail was handled professionally."
                      </p>

                      <span class="test_card__tag">
                        " Smooth Experience "
                      </span>
                    </div>

                    <div class="test_card test_card--name">
                      <h5>Priya Sharma</h5>
                      <span>Marketing Manager</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="swiper-group">
              <button
                type="button"
                class="TestimonialSlider-prev swiper-button-lock btn-prev"
              >
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1024 1024">
                  <path
                    fill="#ffff"
                    d="M609.408 149.376L277.76 489.6a32 32 0 0 0 0 44.672l331.648 340.352a29.12 29.12 0 0 0 41.728 0a30.59 30.59 0 0 0 0-42.752L339.264 511.936l311.872-319.872a30.59 30.59 0 0 0 0-42.688a29.12 29.12 0 0 0-41.728 0"
                  ></path>
                </svg>
              </button>

              <button
                type="button"
                class="TestimonialSlider-next btn-next swiper-button-lock"
              >
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1024 1024">
                  <path
                    fill="#ffff"
                    d="M609.408 149.376L277.76 489.6a32 32 0 0 0 0 44.672l331.648 340.352a29.12 29.12 0 0 0 41.728 0a30.59 30.59 0 0 0 0-42.752L339.264 511.936l311.872-319.872a30.59 30.59 0 0 0 0-42.688a29.12 29.12 0 0 0-41.728 0"
                  ></path>
                </svg>
              </button>
            </div>
          </div>
        </div>
      </section>
    </main>
@endsection

@push('scripts')
    <script>
      const textSlider = new Swiper(".textSlider", {
        direction: "vertical",
        slidesPerView: 1,
        effect: "slide",
        speed: 700,
        autoHeight: true, // adjusts height to slide content, no overlap
        allowTouchMove: false,
      });

      const mediaSlider = new Swiper(".mediaSlider", {
        slidesPerView: 1,
        spaceBetween: 10,
        fadeEffect: { crossFade: true },
        speed: 700,
        navigation: {
          nextEl: ".tl-next",
          prevEl: ".tl-prev",
        },
      });

      mediaSlider.on("slideChange", () => {
        const i = mediaSlider.activeIndex;
        updateTrack(i);
        document.getElementById("ghostYear").textContent = String(
          i + 1,
        ).padStart(2, "0");
        document.getElementById("tlCurrent").textContent = String(
          i + 1,
        ).padStart(2, "0");
      });

      // sync both swipers
      textSlider.controller.control = mediaSlider;
      mediaSlider.controller.control = textSlider;

      // bottom year track sync
      const trackPoints = document.querySelectorAll(
        ".timeline-track .track-points li",
      );
      const trackFill = document.querySelector(".track-fill");

      function updateTrack(index) {
        trackPoints.forEach((li, i) =>
          li.classList.toggle("active", i === index),
        );
        trackFill.style.width = (index / (trackPoints.length - 1)) * 100 + "%";
      }

      trackPoints.forEach((li) => {
        li.addEventListener("click", () => {
          mediaSlider.slideTo(parseInt(li.dataset.index, 10));
        });
      });

      mediaSlider.on("slideChange", () => {
        updateTrack(mediaSlider.activeIndex);
      });

      updateTrack(0);
    </script>

    <script>
      gsap.registerPlugin(ScrollTrigger);

      document.querySelectorAll(".about-secC").forEach((section) => {
        const years = ["2012", "2016", "2020", "2024", "NOW"];
        const dots = section.querySelectorAll(".step-rail__list li");
        const railFill = section.querySelector("[data-rail-fill]");
        const ghost = section.querySelector("[data-ghost]");
        const current = section.querySelector("[data-current]");
        const frameTag = section.querySelector("[data-frame-tag]");

        const textSwiper = new Swiper(section.querySelector(".textSlider"), {
          direction: "vertical",
          speed: 900,
          allowTouchMove: false,
          effect: "slide",
          autoHeight: false,
        });

        const mediaSwiper = new Swiper(section.querySelector(".mediaSlider"), {
          effect: "fade",
          fadeEffect: { crossFade: true },
          speed: 900,
          allowTouchMove: false,
        });

        const total = textSwiper.slides.length;

        textSwiper.on("slideChange", () => {
          const idx = textSwiper.activeIndex;
          const primaryColor =
            getComputedStyle(section).getPropertyValue("--primary").trim() ||
            "#000";

          mediaSwiper.slideTo(idx);

          dots.forEach((el, i) => {
            const active = i <= idx;
            el.classList.toggle("is-active", active);

            gsap.to(el, {
              backgroundColor: active ? primaryColor : "#ffffff",
              borderColor: active ? primaryColor : "rgba(0,0,0,.22)",
              duration: 0.35,
              ease: "power1.out",
            });
          });

          gsap.to(railFill, {
            height: `${(idx / (total - 1)) * 100}%`,
            backgroundColor: primaryColor,
            boxShadow: `0 0 12px ${primaryColor}`,
            duration: 0.5,
            ease: "power2.out",
          });

          ghost.textContent = String(idx + 1).padStart(2, "0");
          current.textContent = String(idx + 1).padStart(2, "0");
          frameTag.textContent = years[idx];

          gsap.fromTo(
            ghost,
            { scale: 0.9, opacity: 0.6 },
            { scale: 1, opacity: 1, duration: 0.4, ease: "power2.out" },
          );
        });

        let lastIndex = -1;

        ScrollTrigger.matchMedia({
          "(min-width: 900px)": function () {
            ScrollTrigger.create({
              trigger: section,
              start: "top top",
              end: () => `+=${window.innerHeight * (total - 1) * 1.15}`,
              pin: true,
              scrub: 0.6,
              onUpdate: (self) => {
                const idx = Math.min(
                  total - 1,
                  Math.floor(self.progress * total),
                );
                if (idx !== lastIndex) {
                  lastIndex = idx;
                  textSwiper.slideTo(idx);
                }
              },
              onLeaveBack: () => {
                lastIndex = 0;
                textSwiper.slideTo(0);
              },
            });
          },

          "(max-width: 899px)": function () {
            textSwiper.params.direction = "horizontal";
            textSwiper.params.allowTouchMove = true;
            mediaSwiper.params.allowTouchMove = true;
            textSwiper.update();
            mediaSwiper.update();
          },
        });
      });
    </script>
@endpush