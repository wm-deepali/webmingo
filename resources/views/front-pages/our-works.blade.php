@extends('layouts.app')

@push('styles')
  <link rel="stylesheet" href="assets/sass/our-works/our-works.css" />
@endpush

@section('content')


  <main>
    <section class="banner">
      <div class="bg">
        <video autoplay muted loop playsinline class="bg-video" src="assets/video/effect8.mp4"
          poster="assets/video/poster/effect8.png">
          <source src="assets/video/effect8.mp4" type="video/mp4" />
        </video>
        <div class="container">
          <div class="banner-wrapper">
            <div class="content">
              <span class="eyebrow">OUR WORK</span>
              <h1>Digital Work Designed <br />To Be Remembered.</h1>
              <p>
                From websites, web applications and e-commerce to LMS, digital
                marketing, mobile apps, graphics and video. Explore what we
                create.
              </p>
              <div class="banner-actions">
                <a href="#our-work" class="btn btn-outline-white">Explore Our Work <i>↗</i></a>
                <button class="btn btn-white" data-model=".enquire-pop">
                  Start Your Project <i>↗</i>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="our-work" id="our-work">
      <div class="container">
        <div class="heading">
          <span class="eyebrow"><span class="eyebrow-line"></span>OUR WORK</span>
          <h3>
            Digital Experiences We've Built
            <span>For Growing Businesses.</span>
          </h3>
          <p>
            Explore selected Web Mingo work across websites, applications,
            marketing and creative services.
          </p>
        </div>

        <div class="work-layout">
          <ul class="tab-nav">
            <li class="active" data-tab="all">
              <span>All Work</span>
              <i>↗</i>
            </li>

            <li data-tab="website">
              <span>Website Development</span>
              <i>↗</i>
            </li>

            <li data-tab="mobile">
              <span>Mobile Applications</span>
              <i>↗</i>
            </li>
          </ul>

          <div class="tab-nav-content">
            <!-- ============ ALL WORK ============ -->
            <div class="tabs active" data-tab="all">
              <div class="work-grid">
                <article class="work-item work-item--wide">
                  <a href="javascript:void(0)" class="work-item__media is-browser">
                    <img src="assets/images/website/portfolio/indotour.png" alt="JSV Hyundai website" loading="lazy" />
                  </a>
                  <div class="work-item__info">
                    <span class="work-item__cat">Business Website</span>
                    <h4>Indo Tours &amp; Adventures</h4>

                    <p>
                      A travel booking website where visitors can explore
                      India and international packages and plan their trip in
                      minutes.
                    </p>

                    <i>↗</i>
                  </div>
                </article>

                <article class="work-item">
                  <a href="javascript:void(0)" class="work-item__media is-browser">
                    <img src="assets/images/website/portfolio/oudhyana.png" alt="E-commerce store interface"
                      loading="lazy" />
                  </a>
                  <div class="work-item__info">
                    <span class="work-item__cat">E-Commerce Website</span>
                    <h4>Oudhyana Chikankari</h4>

                    <p>
                      An elegant online store showcasing handcrafted
                      Chikankari collections, offers and custom orders for
                      customers.
                    </p>

                    <i>↗</i>
                  </div>
                </article>

                <article class="work-item">
                  <a href="javascript:void(0)" class="work-item__media is-browser">
                    <img src="assets/images/website/portfolio/Exam-Time.png" alt="LMS course dashboard" loading="lazy" />
                  </a>
                  <div class="work-item__info">
                    <span class="work-item__cat">E-Learning &amp; LMS Platform</span>
                    <h4>The Exam Time</h4>
                    <p>
                      An online learning platform for civil service aspirants,
                      offering test series, live classes and student support.
                    </p>
                    <i>↗</i>
                  </div>
                </article>

                <article class="work-item">
                  <a href="javascript:void(0)" class="work-item__media is-browser">
                    <img src="assets/images/website/portfolio/pahughar.png" alt="Classified portal listings"
                      loading="lazy" />
                  </a>
                  <div class="work-item__info">
                    <span class="work-item__cat">Classified Portal</span>
                    <h4>PashuGhar</h4>
                    <p>
                      A classifieds marketplace connecting livestock and dairy
                      sellers with buyers through direct enquiries across
                      India.
                    </p>

                    <i>↗</i>
                  </div>
                </article>

                <article class="work-item">
                  <a href="javascript:void(0)" class="work-item__media is-browser">
                    <img src="assets/images/website/portfolio/prakashNews.png" alt="Classified portal listings"
                      loading="lazy" />
                  </a>
                  <div class="work-item__info">
                    <span class="work-item__cat">News Portal</span>
                    <h4>Prakash Prabhaw News</h4>
                    <p>
                      A Hindi news portal bringing live updates, videos, and
                      trending stories from across Uttar Pradesh and India.
                    </p>

                    <i>↗</i>
                  </div>
                </article>

                <article class="work-item">
                  <a href="javascript:void(0)" class="work-item__media is-browser">
                    <img src="assets/images/website/portfolio/help-children.png" alt="Classified portal listings"
                      loading="lazy" />
                  </a>
                  <div class="work-item__info">
                    <span class="work-item__cat">NGO</span>
                    <h4>Help the Children</h4>
                    <p>
                      An NGO website that showcases health, education, and
                      women empowerment programs and makes donating simple.
                    </p>

                    <i>↗</i>
                  </div>
                </article>

                <article class="work-item">
                  <a href="javascript:void(0)" class="work-item__media is-browser">
                    <img src="assets/images/website/portfolio/ashton.png" alt="Custom web application dashboard"
                      loading="lazy" />
                  </a>
                  <div class="work-item__info">
                    <span class="work-item__cat">Custom Web Application</span>
                    <h4>Ashton & Well</h4>
                    <p>
                      A corporate services website for business setup in
                      Dubai, covering Mainland, Free Zone and Offshore
                      packages, visas, licenses and bank accounts.
                    </p>
                    <i>↗</i>
                  </div>
                </article>

                <article class="work-item work-item--wide">
                  <a href="javascript:void(0)" class="work-item__media is-device">
                    <img src="assets/images/website/portfolio/Exam-Time.png" alt="Android app screens" loading="lazy" />
                  </a>
                  <div class="work-item__info">
                    <span class="work-item__cat">Mobile Apps</span>
                    <h4>The Exam Time</h4>
                    <p>
                      An online learning platform for civil service aspirants,
                      offering test series, live classes and student support.
                    </p>
                    <i>↗</i>
                  </div>
                </article>
              </div>
            </div>

            <!-- ============ WEBSITE DEVELOPMENT ============ -->
            <div class="tabs" data-tab="website">
              <div class="work-grid">
                <article class="work-item work-item--wide">
                  <a href="javascript:void(0)" class="work-item__media is-browser">
                    <img src="assets/images/website/portfolio/indotour.png" alt="JSV Hyundai website" loading="lazy" />
                  </a>
                  <div class="work-item__info">
                    <span class="work-item__cat">Business Website</span>
                    <h4>Indo Tours &amp; Adventures</h4>

                    <p>
                      A travel booking website where visitors can explore
                      India and international packages and plan their trip in
                      minutes.
                    </p>

                    <i>↗</i>
                  </div>
                </article>

                <article class="work-item">
                  <a href="javascript:void(0)" class="work-item__media is-browser">
                    <img src="assets/images/website/portfolio/oudhyana.png" alt="E-commerce store interface"
                      loading="lazy" />
                  </a>
                  <div class="work-item__info">
                    <span class="work-item__cat">E-Commerce Website</span>
                    <h4>Oudhyana Chikankari</h4>

                    <p>
                      An elegant online store showcasing handcrafted
                      Chikankari collections, offers and custom orders for
                      customers.
                    </p>

                    <i>↗</i>
                  </div>
                </article>

                <article class="work-item">
                  <a href="javascript:void(0)" class="work-item__media is-browser">
                    <img src="assets/images/website/portfolio/Exam-Time.png" alt="LMS course dashboard" loading="lazy" />
                  </a>
                  <div class="work-item__info">
                    <span class="work-item__cat">E-Learning &amp; LMS Platform</span>
                    <h4>The Exam Time</h4>
                    <p>
                      An online learning platform for civil service aspirants,
                      offering test series, live classes and student support.
                    </p>
                    <i>↗</i>
                  </div>
                </article>

                <article class="work-item">
                  <a href="javascript:void(0)" class="work-item__media is-browser">
                    <img src="assets/images/website/portfolio/pahughar.png" alt="Classified portal listings"
                      loading="lazy" />
                  </a>
                  <div class="work-item__info">
                    <span class="work-item__cat">Classified Portal</span>
                    <h4>PashuGhar</h4>
                    <p>
                      A classifieds marketplace connecting livestock and dairy
                      sellers with buyers through direct enquiries across
                      India.
                    </p>

                    <i>↗</i>
                  </div>
                </article>

                <article class="work-item">
                  <a href="javascript:void(0)" class="work-item__media is-browser">
                    <img src="assets/images/website/portfolio/prakashNews.png" alt="Classified portal listings"
                      loading="lazy" />
                  </a>
                  <div class="work-item__info">
                    <span class="work-item__cat">News Portal</span>
                    <h4>Prakash Prabhaw News</h4>
                    <p>
                      A Hindi news portal bringing live updates, videos, and
                      trending stories from across Uttar Pradesh and India.
                    </p>

                    <i>↗</i>
                  </div>
                </article>

                <article class="work-item">
                  <a href="javascript:void(0)" class="work-item__media is-browser">
                    <img src="assets/images/website/portfolio/help-children.png" alt="Classified portal listings"
                      loading="lazy" />
                  </a>
                  <div class="work-item__info">
                    <span class="work-item__cat">NGO</span>
                    <h4>Help the Children</h4>
                    <p>
                      An NGO website that showcases health, education, and
                      women empowerment programs and makes donating simple.
                    </p>

                    <i>↗</i>
                  </div>
                </article>

                <article class="work-item">
                  <a href="javascript:void(0)" class="work-item__media is-browser">
                    <img src="assets/images/website/portfolio/ashton.png" alt="Custom web application dashboard"
                      loading="lazy" />
                  </a>
                  <div class="work-item__info">
                    <span class="work-item__cat">Custom Web Application</span>
                    <h4>Ashton & Well</h4>
                    <p>
                      A corporate services website for business setup in
                      Dubai, covering Mainland, Free Zone and Offshore
                      packages, visas, licenses and bank accounts.
                    </p>
                    <i>↗</i>
                  </div>
                </article>
              </div>
            </div>

            <!-- ============ MOBILE APPLICATIONS ============ -->
            <div class="tabs" data-tab="mobile">
              <div class="work-grid">
                <article class="work-item work-item--wide">
                  <a href="javascript:void(0)" class="work-item__media is-device">
                    <img src="assets/images/website/portfolio/Exam-Time.png" alt="Android app screens" loading="lazy" />
                  </a>
                  <div class="work-item__info">
                    <span class="work-item__cat">Mobile Apps</span>
                    <h4>The Exam Time</h4>
                    <p>
                      An online learning platform for civil service aspirants,
                      offering test series, live classes and student support.
                    </p>
                    <i>↗</i>
                  </div>
                </article>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <div class="container">
      <div class="cta-promo">
        <div class="cta-promo__inner">
          <span class="cta-promo__eyebrow">STILL HAVE QUESTIONS?</span>
          <h3 class="cta-promo__heading">
            Get Clear Answers For Your Digital Challenges.
          </h3>
          <p class="cta-promo__sub">
            If you cannot find the answer you are looking for, talk to our
            team. We can understand your requirement, explain the options and
            help you identify the right next step for your business.
          </p>
          <div class="cta-promo__actions">
            <button class="btn btn-white" data-model=".enquire-pop">
              Get A Free Consultation <i>↗</i>
            </button>
            <a href="javascript:void(0)" class="btn btn-outline-white">
              Talk To Our Team <i>↗</i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </main>


@endsection