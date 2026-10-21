@extends('layouts.app')

@push('styles')
  <link rel="stylesheet" href="assets/sass/manufacturing/manufacturing.css" />
@endpush

@section('content')

  <main>

    <!-- ============================================================
           01 — BANNER
      ============================================================= -->

    @include('partials.hero', [
      'video' => 'assets/video/effect1.mp4',
      'poster' => 'assets/video/poster/effect1.png',
      'default' => [
        'eyebrow' => 'DIGITAL SOLUTIONS FOR MANUFACTURING & EXPORT',
        'heading' => 'Present Your Manufacturing Business to a Bigger Market.',
        'description' => 'Showcase products and capabilities, generate B2B enquiries and streamline operations with websites, business software and digital marketing.',
        'primary_text' => 'Chat on WhatsApp',
        'primary_url' => 'javascript:void(0)',
        'secondary_text' => 'Discuss Your Requirements',
        'secondary_url' => '#enquire',
      ],
    ])


    <!-- ============================================================
           02 — ABOUT MANUFACTURING & EXPORT
      ============================================================= -->
    <section class="manuIntro">
      <div class="container">

        <div class="heading">

          <span class="eyebrow">
            <span class="eyebrow-line"></span>
            ABOUT MANUFACTURING &amp; EXPORT
          </span>

          <h3>
            Make Your Manufacturing Business Easier<br />
            <span>To Discover, Understand &amp; Trust.</span>
          </h3>

        </div>


        <div class="manuIntro-content">

          <div class="manuIntro-copy">
            <p>
              Your digital presence should help buyers quickly understand
              what you manufacture, what you can deliver and why they should
              consider working with you.
            </p>

            <p>
              Showcase your products, capabilities, facilities, certifications,
              industries served and export markets in one clear professional
              online presence.
            </p>
          </div>

          <div class="manuIntro-note">
            <span>BUILT FOR BUYER DECISIONS</span>

            <p>
              Make it easier to
              <strong>discover your products, understand your business
                and start an enquiry.</strong>
            </p>
          </div>

        </div>


        <div class="manuIntro-points">

          <div class="manuIntro-point">

            <div class="manuIntro-icon">
              <svg viewBox="0 0 24 24" aria-hidden="true">
                <path d="M4 20V8l8-5 8 5v12"></path>
                <path d="M8 20v-7h8v7"></path>
                <path d="M9 10h6"></path>
              </svg>
            </div>

            <div class="manuIntro-point-content">
              <h4>Show What You Manufacture</h4>
              <p>
                Present products, specifications and applications clearly.
              </p>
            </div>

          </div>


          <div class="manuIntro-point">

            <div class="manuIntro-icon">
              <svg viewBox="0 0 24 24" aria-hidden="true">
                <path d="M12 3l7 3v5c0 4.5-2.8 7.8-7 10-4.2-2.2-7-5.5-7-10V6l7-3z"></path>
                <path d="M9 12l2 2 4-4"></path>
              </svg>
            </div>

            <div class="manuIntro-point-content">
              <h4>Build Buyer Confidence</h4>
              <p>
                Highlight facilities, certifications and quality standards.
              </p>
            </div>

          </div>


          <div class="manuIntro-point">

            <div class="manuIntro-icon">
              <svg viewBox="0 0 24 24" aria-hidden="true">
                <circle cx="12" cy="12" r="9"></circle>
                <path d="M3 12h18"></path>
                <path d="M12 3c2.5 2.5 3.8 5.5 3.8 9s-1.3 6.5-3.8 9"></path>
              </svg>
            </div>

            <div class="manuIntro-point-content">
              <h4>Reach More Markets</h4>
              <p>
                Help domestic and international buyers find your business.
              </p>
            </div>

          </div>

        </div>

      </div>
    </section>


    <!-- ============================================================
           03 — WHY MANUFACTURING BUSINESSES NEED A WEBSITE
      ============================================================= -->
    <section class="mfgWhy">
      <div class="container">

        <div class="heading">
          <span class="eyebrow">
            <span class="eyebrow-line"></span>
            WHY MANUFACTURING BUSINESSES NEED A WEBSITE
          </span>

          <h3>
            Turn Your Capabilities Into
            <span>More Business Enquiries.</span>
          </h3>

          <p>
            Buyers need clear information about your products, capabilities
            and business before they decide to make an enquiry.
          </p>
        </div>


        <div class="mfgWhy-flow">

          <div class="mfgWhy-step">
            <div class="mfgWhy-icon">
              <svg viewBox="0 0 24 24" aria-hidden="true">
                <path d="M4 20V8l8-5 8 5v12"></path>
                <path d="M8 20v-7h8v7"></path>
                <path d="M9 10h6"></path>
              </svg>
            </div>

            <div class="mfgWhy-step-content">
              <span>REACH</span>
              <h4>Reach More B2B Buyers</h4>
              <p>
                Make your business easier for potential buyers to discover.
              </p>
            </div>
          </div>


          <div class="mfgWhy-step">
            <div class="mfgWhy-icon">
              <svg viewBox="0 0 24 24" aria-hidden="true">
                <path d="M3 20h18"></path>
                <path d="M5 20V9l7-4 7 4v11"></path>
                <path d="M9 20v-6h6v6"></path>
                <path d="M8 9h8"></path>
              </svg>
            </div>

            <div class="mfgWhy-step-content">
              <span>PRODUCTS</span>
              <h4>Show Products Clearly</h4>
              <p>
                Organise products, specifications and applications for buyers.
              </p>
            </div>
          </div>


          <div class="mfgWhy-step">
            <div class="mfgWhy-icon">
              <svg viewBox="0 0 24 24" aria-hidden="true">
                <path d="M12 3l7 3v5c0 4.5-2.8 7.8-7 10-4.2-2.2-7-5.5-7-10V6l7-3z"></path>
                <path d="M9 12l2 2 4-4"></path>
              </svg>
            </div>

            <div class="mfgWhy-step-content">
              <span>TRUST</span>
              <h4>Build Supplier Credibility</h4>
              <p>
                Present your company, experience and quality standards clearly.
              </p>
            </div>
          </div>


          <div class="mfgWhy-step">
            <div class="mfgWhy-icon">
              <svg viewBox="0 0 24 24" aria-hidden="true">
                <path d="M4 4h16v16H4z"></path>
                <path d="M8 12h8"></path>
                <path d="M12 8v8"></path>
              </svg>
            </div>

            <div class="mfgWhy-step-content">
              <span>ENQUIRIES</span>
              <h4>Generate Business Enquiries</h4>
              <p>
                Give buyers simple ways to request information or quotations.
              </p>
            </div>
          </div>

        </div>


        <div class="mfgWhy-bottom">

          <div class="mfgWhy-bottom-content">
            <span>THE RESULT</span>

            <h4>
              A stronger digital presence for <br />
              <strong>products, buyers and business growth.</strong>
            </h4>
          </div>

          <a href="javascript:void(0)" class="btn btn-outline-black" data-model=".enquire-pop">
            Let’s Talk
          </a>

        </div>

      </div>
    </section>


    <!-- ============================================================
           04 — MANUFACTURING WEBSITE ESSENTIALS
      ============================================================= -->
    <section class="mfgGet">
      <div class="container">

        <div class="mfgGet-wrap">

          <div class="mfgGet-media">
            <img src="assets/images/comman/manufacurring-about.png" alt="Quality inspection in a manufacturing facility"
              loading="lazy" />

            <div class="mfgGet-media-label">
              <span>MANUFACTURING WEBSITE ESSENTIALS</span>
              <strong>Everything Buyers Need To Know.</strong>
            </div>
          </div>

          <div class="mfgGet-content">

            <span class="eyebrow">
              <span class="eyebrow-line"></span>
              MANUFACTURING WEBSITE ESSENTIALS
            </span>

            <h3>
              Give Buyers The Right Information
              <span>To Choose Your Business.</span>
            </h3>

            <p class="mfgGet-intro">
              Bring your company profile, products, manufacturing capabilities,
              export information and enquiry process together in one clear
              digital experience.
            </p>

            <div class="mfgGet-list">

              <div class="mfgGet-row">

                <div class="mfgGet-row-title">

                  <span class="mfgGet-icon">
                    <svg viewBox="0 0 24 24" aria-hidden="true">
                      <path d="M4 20h16" />
                      <path d="M5 20V8l7-4 7 4v12" />
                      <path d="M9 20v-5h6v5" />
                      <path d="M8 10h1" />
                      <path d="M12 10h1" />
                      <path d="M16 10h1" />
                    </svg>
                  </span>

                  <h4>Company &amp; Manufacturing Profile</h4>

                </div>

                <p>
                  About company, facilities, infrastructure, production capacity,
                  industries served, certifications and quality standards.
                </p>

              </div>


              <div class="mfgGet-row">

                <div class="mfgGet-row-title">

                  <span class="mfgGet-icon">
                    <svg viewBox="0 0 24 24" aria-hidden="true">
                      <path d="M4 6h16v12H4z" />
                      <path d="M8 10h8" />
                      <path d="M8 14h5" />
                      <path d="M7 3v3" />
                      <path d="M17 3v3" />
                    </svg>
                  </span>

                  <h4>Products &amp; Solutions</h4>

                </div>

                <p>
                  Product categories, details, specifications, variants,
                  applications, technical information and brochures.
                </p>

              </div>


              <div class="mfgGet-row">

                <div class="mfgGet-row-title">

                  <span class="mfgGet-icon">
                    <svg viewBox="0 0 24 24" aria-hidden="true">
                      <path d="M3 21h18" />
                      <path d="M5 21V9l4-3v15" />
                      <path d="M9 21V5l5-2v18" />
                      <path d="M14 21V8l5-3v16" />
                      <path d="M7 12h1" />
                      <path d="M11 9h1" />
                      <path d="M11 13h1" />
                      <path d="M17 11h1" />
                      <path d="M17 15h1" />
                    </svg>
                  </span>

                  <h4>Manufacturing Capabilities</h4>

                </div>

                <p>
                  Manufacturing processes, machinery, OEM capabilities,
                  custom manufacturing, quality control and R&amp;D.
                </p>

              </div>


              <div class="mfgGet-row">

                <div class="mfgGet-row-title">

                  <span class="mfgGet-icon">
                    <svg viewBox="0 0 24 24" aria-hidden="true">
                      <path d="M4 5h16v14H4z" />
                      <path d="M8 9h8" />
                      <path d="M8 13h5" />
                      <path d="M16 16l4 4" />
                      <path d="M17 13a4 4 0 1 1-8 0 4 4 0 0 1 8 0Z" />
                    </svg>
                  </span>

                  <h4>Export &amp; Business Enquiries</h4>

                </div>

                <p>
                  Export markets, countries served, shipping information,
                  product enquiries, RFQs, distributor enquiries and WhatsApp.
                </p>

              </div>

            </div>

            <div class="mfgGet-bottom">
              <span>READY FOR MORE BUSINESS?</span>

              <button type="button" class="btn btn-black" data-model=".enquire-pop">
                Let’s Talk
              </button>
            </div>

          </div>

        </div>

      </div>
    </section>

    <section class="ecomPackage">
      <div class="container">
        <div class="ecomPackage-inner">
          <div class="ecomPackage-content">
            <span class="ecomPackage-label">
              DIGITAL SOLUTIONS FOR MANUFACTURING &amp; EXPORT
            </span>

            <h3>
              Everything You Need To
              <span>Build A Stronger Manufacturing Business.</span>
            </h3>

            <p class="ecomPackage-intro">
              We build manufacturing and export websites around your products,
              capabilities, certifications and business goals—from professional
              company websites to digital platforms that support enquiries,
              distributors and global buyers.
            </p>
          </div>

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
                <label for="packageBusiness">Manufacturing Website Type</label>

                <select id="packageBusiness" name="business_type">
                  <option value="" selected disabled>
                    Select your website type
                  </option>
                  <option value="manufacturing-website">
                    Manufacturing Company Website
                  </option>
                  <option value="export-website">
                    Export Business Website
                  </option>
                  <option value="b2b-website">
                    B2B Manufacturing Website
                  </option>
                  <option value="product-catalogue">
                    Product Catalogue Website
                  </option>
                  <option value="distributor-platform">
                    Distributor &amp; Dealer Platform
                  </option>
                  <option value="custom-manufacturing">
                    Custom Manufacturing Solution
                  </option>
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



    <section class="mfgValue">
      <div class="container">

        <div class="heading">
          <div>
            <span class="eyebrow">
              <span class="eyebrow-line"></span>
              DIGITAL GROWTH OUTCOMES
            </span>

            <h3>
              Build A Digital Presence That
              <span>Reaches More Buyers.</span>
            </h3>
          </div>

          <p>
            Use your website and digital channels to improve visibility,
            build credibility and create more opportunities with buyers.
          </p>
        </div>

        <div class="mfgValue-stage">

          <img src="assets/images/comman/manu-benifits.png" alt="Modern industrial manufacturing facility"
            loading="lazy" />

          <div class="mfgValue-stage-label">
            <span>MANUFACTURING &amp; EXPORT</span>
            <strong>DIGITAL GROWTH</strong>
          </div>

          <div class="mfgValue-sheet">

            <div class="mfgValue-sheet-intro">
              <span>WHAT YOUR DIGITAL PRESENCE CAN ACHIEVE</span>
              <p>
                Create a stronger online presence that helps your business
                connect with the right buyers and opportunities.
              </p>
            </div>

            <div class="mfgValue-list">

              <div class="mfgValue-row">
                <span class="mfgValue-number">01</span>

                <div>
                  <h4>Reach More B2B Buyers</h4>
                  <p>
                    Improve your online visibility and make your business easier to find.
                  </p>
                </div>

                <span class="mfgValue-arrow">↗</span>
              </div>


              <div class="mfgValue-row">
                <span class="mfgValue-number">02</span>

                <div>
                  <h4>Generate Product Enquiries</h4>
                  <p>
                    Make it easier for interested buyers to enquire about products.
                  </p>
                </div>

                <span class="mfgValue-arrow">↗</span>
              </div>


              <div class="mfgValue-row">
                <span class="mfgValue-number">03</span>

                <div>
                  <h4>Increase Export Opportunities</h4>
                  <p>
                    Present your products and export capabilities to new markets.
                  </p>
                </div>

                <span class="mfgValue-arrow">↗</span>
              </div>


              <div class="mfgValue-row">
                <span class="mfgValue-number">04</span>

                <div>
                  <h4>Strengthen Supplier Credibility</h4>
                  <p>
                    Present your company, capabilities and certifications professionally.
                  </p>
                </div>

                <span class="mfgValue-arrow">↗</span>
              </div>

            </div>

          </div>

        </div>

      </div>
    </section>


    <section class="ngoTypes" id="ngoSolutions">
      <div class="container">

        <div class="heading">
          <span class="eyebrow">
            <span class="eyebrow-line"></span>
            MANUFACTURING &amp; EXPORT DIGITAL SOLUTIONS
          </span>

          <h3>
            Digital Solutions For <br />
            <span>Growing Manufacturing Businesses.</span>
          </h3>

          <p>
            Digital solutions designed to help manufacturers build, reach and grow online.
          </p>
        </div>
        <div class="ngoTypes-grid">

          <!-- CARD 01 — FEATURED -->
          <a href="{{ route('website-design-development') }}" class="ngoTypes-card ngoTypes-card--featured">
            <img src="assets/images/comman/web-desiging.png" alt="Website design and development" loading="lazy" />

            <div class="ngoTypes-overlay"></div>

            <div class="ngoTypes-content">
              <span>BUILD A STRONG DIGITAL PRESENCE</span>

              <h4>
                Website Design &amp; Development
              </h4>

              <p>
                Build a professional website that showcases your business and turns visitors into opportunities.
              </p>
            </div>

            <span class="ngoTypes-arrow">↗</span>
          </a>


          <!-- CARD 02 -->
          <a href="{{ route('digital-marketing') }}" class="ngoTypes-card ngoTypes-card--medium">
            <img src="assets/images/comman/seoFor.png" alt="Digital marketing services" loading="lazy" />

            <div class="ngoTypes-overlay"></div>

            <div class="ngoTypes-content">
              <span>REACH MORE PEOPLE ONLINE</span>

              <h4>
                Digital Marketing
              </h4>

              <p>
                Reach the right audience, build visibility and create more opportunities for your business online.
              </p>
            </div>

            <span class="ngoTypes-arrow">↗</span>
          </a>


          <!-- CARD 03 -->
          <a href="{{ route('mobile-app-development') }}" class="ngoTypes-card ngoTypes-card--medium">
            <img src="assets/images/comman/mobile-application.png" alt="Mobile application development" loading="lazy" />

            <div class="ngoTypes-overlay"></div>

            <div class="ngoTypes-content">
              <span>CONNECT BEYOND THE WEBSITE</span>

              <h4>
                Mobile Application Development
              </h4>

              <p>
                Extend your business to mobile with engaging and purpose-built applications for your customers.
              </p>
            </div>

            <span class="ngoTypes-arrow">↗</span>
          </a>


          <!-- CARD 04 -->
          <a href="{{ route('digital-branding') }}" class="ngoTypes-card ngoTypes-card--medium">
            <img src="assets/images/comman/digital-branding.png" alt="Digital branding services" loading="lazy" />

            <div class="ngoTypes-overlay"></div>

            <div class="ngoTypes-content">
              <span>CREATE A RECOGNISABLE IDENTITY</span>

              <h4>
                Digital Branding
              </h4>

              <p>
                Build a strong and consistent brand identity that makes your business stand out across digital channels.
              </p>
            </div>

            <span class="ngoTypes-arrow">↗</span>
          </a>


          <!-- CARD 05 — CTA -->
          <div class="ngoTypes-card ngoTypes-card--cta">

            <div class="ngoTypes-cta-content">
              <span>READY TO GROW YOUR BUSINESS?</span>

              <h4>
                Take Your Digital Presence
                &amp; Business Further.
              </h4>

              <p>
                Let’s create digital solutions that help your business attract, engage and grow.
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


    <!-- ============================================================
         08 — FAQ
    ============================================================= -->
    @include('partials.page-faqs', [
      'eyebrow' => 'FREQUENTLY ASKED QUESTIONS',
      'title' => 'Answers To Common <span>Manufacturing Website Questions.</span>',
      'intro' => 'Straight answers to common questions about manufacturing websites and digital solutions.',
    ])

    <!-- ============================================================
           09 — FINAL CTA
      ============================================================= -->
    <div class="container">
      <div class="cta-promo">
        <div class="cta-promo__inner">

          <span class="cta-promo__eyebrow">
            START YOUR MANUFACTURING PROJECT
          </span>

          <h3 class="cta-promo__heading">
            Build A Stronger Digital
            <br />
            Manufacturing Presence.
          </h3>

          <p class="cta-promo__sub">
            Tell us about your products, capabilities and business goals.
            Let’s build a digital presence that helps you reach more buyers.
          </p>

          <div class="cta-promo__actions">

            <button class="btn btn-white" data-model=".enquire-pop">
              Start Your Project <i>↗</i>
            </button>

            <a href="#mfgSolutions" class="btn btn-outline-white">
              Explore Solutions <i>↗</i>
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
            Explore our digital solutions, latest work, and the services built to help your business grow online.
          </p>
        </div>

        <ul class="secO-grid">
          <li><a href="javascript:void(0)"><span aria-hidden="true"><svg viewBox="0 0 24 24">
                  <rect x="3" y="3" width="18" height="18" rx="2" />
                  <path d="M3 9h18M9 21V9" />
                </svg></span><em>E-Commerce</em></a></li>
          <li><a href="javascript:void(0)"><span aria-hidden="true"><svg viewBox="0 0 24 24">
                  <path d="M8 3L3 8l5 5M16 3l5 5-5 5M14 4l-4 16" />
                </svg></span><em>Web Apps</em></a></li>
          <li><a href="javascript:void(0)"><span aria-hidden="true"><svg viewBox="0 0 24 24">
                  <rect x="7" y="2" width="10" height="20" rx="2" />
                  <path d="M11 18h2" />
                </svg></span><em>Mobile Apps</em></a></li>
          <li><a href="javascript:void(0)"><span aria-hidden="true"><svg viewBox="0 0 24 24">
                  <circle cx="11" cy="11" r="7" />
                  <path d="M21 21l-4.3-4.3" />
                </svg></span><em>SEO</em></a></li>
          <li><a href="javascript:void(0)"><span aria-hidden="true"><svg viewBox="0 0 24 24">
                  <path d="M3 3v18h18" />
                  <path d="M7 15l4-4 3 3 5-6" />
                </svg></span><em>Marketing</em></a></li>
          <li><a href="javascript:void(0)"><span aria-hidden="true"><svg viewBox="0 0 24 24">
                  <path d="M12 19l7-7 3 3-7 7-3-3z" />
                  <path d="M18 13l-1.5-7.5L2 2l3.5 14.5L13 18l5-5z" />
                </svg></span><em>Portfolio</em></a></li>
          <li><a href="javascript:void(0)"><span aria-hidden="true"><svg viewBox="0 0 24 24">
                  <circle cx="12" cy="8" r="4" />
                  <path d="M4 21c0-4 4-6 8-6s8 2 8 6" />
                </svg></span><em>About Us</em></a></li>
          <li><a href="javascript:void(0)"><span aria-hidden="true"><svg viewBox="0 0 24 24">
                  <path d="M4 4h16v16H4z" />
                  <path d="M4 6l8 7 8-7" />
                </svg></span><em>Contact Us</em></a></li>
        </ul>
      </div>
    </section>

  </main>

@endsection