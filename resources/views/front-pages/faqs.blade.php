@extends('layouts.app')

@push('styles')
    <link rel="stylesheet" href="assets/sass/faq/faq.css" />
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
            src="assets/video/effect8.mp4"
            poster="assets/video/poster/effect8.png"
          >
            <source src="assets/video/effect8.mp4" type="video/mp4" />
          </video>

          <div class="container">
            <div class="banner-wrapper">
              <div class="content">
                <span class="eyebrow">FREQUENTLY ASKED QUESTIONS</span>

                <h1>Questions? Start Here.</h1>

                <p>
                  Find answers about our services, development process,
                  timelines, pricing, support and working with Web Mingo.
                </p>

                <div class="banner-actions">
                  <a href="javascript:void(0)" class="btn btn-outline-white">
                    Chat on WhatsApp
                    <i>↗</i>
                  </a>

                  <button data-model=".enquire-pop" class="btn btn-white">
                    Ask Us a Question
                    <i>↗</i>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="indu-secL">
        <div class="container">
          <div class="heading">
            <h3>
              Everything You Need to
              <span>Know Before We Get Started.</span>
            </h3>

            <p>
              Get answers to common questions about our services, development
              process, technology, timelines and ongoing support.
            </p>
          </div>

          <div class="indu-secL-main">
            <!-- =====================================================
             STICKY INTRO
        ====================================================== -->

            <div class="indu-secL-side">
              <div class="indu-secL-side-inner">
                <span class="indu-secL-eyebrow"> STILL HAVE QUESTIONS? </span>

                <h4>
                  Let's Talk About
                  <span>Your Project.</span>
                </h4>

                <p>
                  Whether you're planning a new website, redesigning an existing
                  platform, or looking for a custom digital solution, we're here
                  to help you figure out the right approach.
                </p>

                <button
                  type="button"
                  data-model=".enquire-pop"
                  class="btn btn-primary"
                >
                  Start a Conversation <i>↗</i>
                </button>
              </div>
            </div>

            <!-- =====================================================
             FAQ ACCORDION
        ====================================================== -->

            <div class="accordion-wrapper">
              <div class="accordion-item">
                <div class="accordion-header">
                  <div class="faq-question">
                    <h4>What types of websites does Web Mingo develop?</h4>
                  </div>

                  <span class="accordion-icon">+</span>
                </div>

                <div class="accordion-content">
                  <p>
                    We design and develop custom business websites, corporate
                    websites, industry-specific websites, landing pages, portals
                    and other digital experiences based on your business
                    requirements.
                  </p>
                </div>
              </div>

              <div class="accordion-item">
                <div class="accordion-header">
                  <div class="faq-question">
                    <h4>
                      Can you build an e-commerce website for our business?
                    </h4>
                  </div>

                  <span class="accordion-icon">+</span>
                </div>

                <div class="accordion-content">
                  <p>
                    Yes. We can develop custom e-commerce websites with product
                    management, categories, search, filters, customer accounts,
                    payments, order management and other features required for
                    your business.
                  </p>
                </div>
              </div>

              <div class="accordion-item">
                <div class="accordion-header">
                  <div class="faq-question">
                    <h4>Can you develop a custom web application?</h4>
                  </div>

                  <span class="accordion-icon">+</span>
                </div>

                <div class="accordion-content">
                  <p>
                    Yes. We build custom web applications around specific
                    business workflows, including dashboards, portals,
                    management systems, automation tools and other functionality
                    that standard websites cannot provide.
                  </p>
                </div>
              </div>

              <div class="accordion-item">
                <div class="accordion-header">
                  <div class="faq-question">
                    <h4>Do you develop LMS and education platforms?</h4>
                  </div>

                  <span class="accordion-icon">+</span>
                </div>

                <div class="accordion-content">
                  <p>
                    Yes. We can build learning platforms with courses, student
                    accounts, video lessons, assessments, assignments, progress
                    tracking, notifications, payments and administrative tools
                    based on your requirements.
                  </p>
                </div>
              </div>

              <div class="accordion-item">
                <div class="accordion-header">
                  <div class="faq-question">
                    <h4>
                      Can you develop mobile applications along with our
                      website?
                    </h4>
                  </div>

                  <span class="accordion-icon">+</span>
                </div>

                <div class="accordion-content">
                  <p>
                    Yes. Mobile applications can be planned alongside your
                    website or web application to create a connected digital
                    experience across web and mobile platforms.
                  </p>
                </div>
              </div>

              <div class="accordion-item">
                <div class="accordion-header">
                  <div class="faq-question">
                    <h4>Can you help improve our website's SEO?</h4>
                  </div>

                  <span class="accordion-icon">+</span>
                </div>

                <div class="accordion-content">
                  <p>
                    Yes. Our development approach considers technical SEO,
                    responsive performance, page structure, heading hierarchy,
                    internal linking and other foundations that support search
                    visibility.
                  </p>
                </div>
              </div>

              <div class="accordion-item">
                <div class="accordion-header">
                  <div class="faq-question">
                    <h4>
                      Can you redesign our existing website without losing its
                      current functionality?
                    </h4>
                  </div>

                  <span class="accordion-icon">+</span>
                </div>

                <div class="accordion-content">
                  <p>
                    Yes. Existing websites can be redesigned while preserving
                    important functionality, integrations and business
                    workflows. We first understand the current setup before
                    making frontend or structural changes.
                  </p>
                </div>
              </div>

              <div class="accordion-item">
                <div class="accordion-header">
                  <div class="faq-question">
                    <h4>
                      How long does a website or custom platform take to
                      develop?
                    </h4>
                  </div>

                  <span class="accordion-icon">+</span>
                </div>

                <div class="accordion-content">
                  <p>
                    The timeline depends on the project scope, number of pages,
                    features, integrations and level of custom development
                    required. We define the scope and estimated timeline before
                    development begins.
                  </p>
                </div>
              </div>

              <div class="accordion-item">
                <div class="accordion-header">
                  <div class="faq-question">
                    <h4>
                      Can you integrate third-party APIs and business tools?
                    </h4>
                  </div>

                  <span class="accordion-icon">+</span>
                </div>

                <div class="accordion-content">
                  <p>
                    Yes. Depending on the project, we can integrate payment
                    gateways, APIs, CRM systems, communication tools, analytics
                    platforms and other third-party services.
                  </p>
                </div>
              </div>

              <div class="accordion-item">
                <div class="accordion-header">
                  <div class="faq-question">
                    <h4>
                      Will our team be able to manage the website after launch?
                    </h4>
                  </div>

                  <span class="accordion-icon">+</span>
                </div>

                <div class="accordion-content">
                  <p>
                    Yes. Where required, we can provide an appropriate admin or
                    content management system so authorised team members can
                    manage relevant website content and business information.
                  </p>
                </div>
              </div>

              <div class="accordion-item">
                <div class="accordion-header">
                  <div class="faq-question">
                    <h4>
                      Do you provide support after the website or application
                      goes live?
                    </h4>
                  </div>

                  <span class="accordion-icon">+</span>
                </div>

                <div class="accordion-content">
                  <p>
                    Yes. Ongoing support, maintenance and future improvements
                    can be planned according to the requirements of the project.
                  </p>
                </div>
              </div>

              <div class="accordion-item">
                <div class="accordion-header">
                  <div class="faq-question">
                    <h4>How do we get started with a project?</h4>
                  </div>

                  <span class="accordion-icon">+</span>
                </div>

                <div class="accordion-content">
                  <p>
                    Share your requirements with us through the enquiry form. We
                    will understand your goals, discuss the required solution
                    and determine the appropriate next steps.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <div class="container">
        <div class="cta-promo">
          <div class="cta-promo__inner">
            <span class="cta-promo__eyebrow">Need More Help?</span>

            <h3 class="cta-promo__heading">
              Let’s Find the<br />
              Right Solution for You.
            </h3>

            <p class="cta-promo__sub">
              Every business is different. Tell us what you’re looking to
              achieve, and our team will help you understand the right approach
              for your digital goals.
            </p>

            <div class="cta-promo__actions">
              <button class="btn btn-white" data-model=".enquire-pop">
                Get FREE Consultation
              </button>

              <a href="javascript:void()" class="btn btn-outline-white">
                Chat on WhatsApp
              </a>
            </div>
          </div>
        </div>
      </div>
    </main>

@endsection