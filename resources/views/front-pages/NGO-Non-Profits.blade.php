@extends('layouts.app')

@push('styles')
  <link rel="stylesheet" href="assets/sass/ngo/ngo.css" />
@endpush

@section('content')

  <main>

    <!-- ============================================================
             01 — HERO
        ============================================================= -->

    @include('partials.hero', [
      'video' => 'assets/video/effect1.mp4',
      'poster' => 'assets/video/poster/effect1.png',
      'default' => [
        'eyebrow' => 'DIGITAL SOLUTIONS FOR NGOs & NON-PROFITS',
        'heading' => 'Take Your Mission Further With the Right Digital Platform.',
        'description' => 'From informative websites and donation systems to campaign outreach and custom platforms, we help organisations connect with supporters and communities.',
        'primary_text' => 'Chat on WhatsApp',
        'primary_url' => 'javascript:void(0)',
        'secondary_text' => 'Discuss Your Project',
        'secondary_url' => '#enquire',
      ],
    ])


    <!-- ============================================================
             02 — ABOUT NGOS & NON-PROFITS
        ============================================================= -->
    <section class="ngoIntro">
      <div class="container">

        <div class="ngoIntro-wrapper">

          <div class="ngoIntro-content">
            <span class="eyebrow">
              <span class="eyebrow-line"></span>
              ABOUT NGOS &amp; NON-PROFITS
            </span>

            <h3>
              Turn Your Mission Into<br />
              <span> A Digital Presence People Can Trust.</span>
            </h3>

            <p>
              People increasingly discover organisations, social causes and
              community initiatives online. Supporters, donors, volunteers,
              beneficiaries and partners want to understand an organisation's
              mission, explore its programmes and initiatives, learn about its
              impact, discover ongoing campaigns, support a cause, volunteer or
              participate, and reach the organisation directly. A professional
              website can become the central digital platform for communicating
              your mission clearly, building credibility with the people who
              matter most, engaging supporters consistently and turning interest
              into meaningful action.
            </p>

            <div class="ngoIntro-points">

              <div class="ngoIntro-point">
                <div class="ngoIntro-icon">
                  <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                    <path
                      d="M12 21s-7-4.5-9.5-9C.5 8 2 4.5 5.5 4a4.7 4.7 0 016.5 2 4.7 4.7 0 016.5-2c3.5.5 5 4 3 8-2.5 4.5-9.5 9-9.5 9z"
                      stroke="currentColor" stroke-width="1.5" stroke-linejoin="round" />
                  </svg>
                </div>

                <div>
                  <h4>Share Your Mission</h4>
                  <p>Help people quickly understand what your organisation stands for.</p>
                </div>
              </div>

              <div class="ngoIntro-point">
                <div class="ngoIntro-icon">
                  <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                    <path d="M4 19V5h16v14" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round" />
                    <path d="M8 9h8M8 13h5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                  </svg>
                </div>

                <div>
                  <h4>Show Your Impact</h4>
                  <p>Present your programmes, projects, stories and achievements.</p>
                </div>
              </div>

              <div class="ngoIntro-point">
                <div class="ngoIntro-icon">
                  <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                    <path d="M12 3v18M3 12h18" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                  </svg>
                </div>

                <div>
                  <h4>Make Support Easier</h4>
                  <p>Give people clear ways to donate, volunteer or get involved.</p>
                </div>
              </div>

            </div>
          </div>

          <div class="ngoIntro-media">
            <img src="assets/images/comman/ngo-about.png" alt="Volunteers working together for a community cause"
              loading="lazy" />

            <div class="ngoIntro-media-tag">
              <span>YOUR CAUSE</span>
              <strong>Deserves to be seen.</strong>
            </div>
          </div>

        </div>

      </div>
    </section>


    <!-- ============================================================
             03 — WHY NGOS & NON-PROFITS NEED A PROFESSIONAL WEBSITE
        ============================================================= -->
    <section class="ngoWhy">
      <div class="container">

        <div class="heading">
          <span class="eyebrow">
            <span class="eyebrow-line"></span>
            WHY NGOS NEED A WEBSITE
          </span>

          <h3>
            Help More People Discover
            <span>Your Mission, Work &amp; Impact.</span>
          </h3>

          <p>Business-value outcomes a professional website brings to your organisation.</p>

        </div>

        <div class="ngoWhy-main">

          <div class="ngoWhy-image">
            <img src="assets/images/comman/why-ngo.png" alt="NGO volunteers supporting a local community"
              loading="lazy" />

            <div class="ngoWhy-image-caption">
              <span>YOUR IMPACT</span>
              <strong>Make your work visible to the people who want to support it.</strong>
            </div>
          </div>

          <div class="ngoWhy-benefits">

            <div class="ngoWhy-benefit">
              <div class="ngoWhy-benefit-icon">
                <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                  <circle cx="11" cy="11" r="6.5" stroke="currentColor" stroke-width="1.5" />
                  <path d="m16 16 4.5 4.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                </svg>
              </div>
              <div>
                <h4>Reach More Supporters</h4>
                <p>Make your organisation and social initiatives easier to discover online.</p>
              </div>
            </div>

            <div class="ngoWhy-benefit">
              <div class="ngoWhy-benefit-icon">
                <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                  <path d="M4 6h16v13H4z" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round" />
                  <path d="M8 10h8M8 14h5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                </svg>
              </div>
              <div>
                <h4>Communicate Your Mission Clearly</h4>
                <p>Present your purpose, programmes, initiatives and areas of work in one professional digital space.</p>
              </div>
            </div>

            <div class="ngoWhy-benefit">
              <div class="ngoWhy-benefit-icon">
                <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                  <path d="M12 3l7 3v6c0 4.5-3 7.5-7 9-4-1.5-7-4.5-7-9V6l7-3z" stroke="currentColor" stroke-width="1.5"
                    stroke-linejoin="round" />
                </svg>
              </div>
              <div>
                <h4>Build Trust &amp; Credibility</h4>
                <p>Show your organisation's work, impact, team, achievements and transparent information professionally.
                </p>
              </div>
            </div>

            <div class="ngoWhy-benefit">
              <div class="ngoWhy-benefit-icon">
                <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                  <path
                    d="M12 21s-7-4.5-9.5-9C.5 8 2 4.5 5.5 4a4.7 4.7 0 016.5 2 4.7 4.7 0 016.5-2c3.5.5 5 4 3 8-2.5 4.5-9.5 9-9.5 9z"
                    stroke="currentColor" stroke-width="1.5" stroke-linejoin="round" />
                </svg>
              </div>
              <div>
                <h4>Encourage Donations &amp; Support</h4>
                <p>Create clear digital journeys for people who want to donate, support campaigns or contribute to your
                  cause.</p>
              </div>
            </div>



          </div>

        </div>

        <div class="ngoWhy-bottom">
          <div class="ngoWhy-bottom-content">
            <span>READY TO BUILD YOUR DIGITAL PRESENCE?</span>

            <h4>
              Your Cause Deserves A Website
              <strong>That Moves People To Act.</strong>
            </h4>

            <p>
              Let's create a website that helps people discover your mission,
              understand your impact and find a meaningful way to support your work.
            </p>
          </div>

          <div class="ngoWhy-bottom-action">
            <a href="javascript:void(0)" class="btn btn-outline-black" data-model=".enquire-pop">
              Let's Discuss
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
             04 — WHAT YOUR NGO WEBSITE SHOULD INCLUDE
        ============================================================= -->
    <section class="ngoGet">
      <div class="container">

        <div class="heading">
          <span class="eyebrow">
            <span class="eyebrow-line"></span>
            NGO WEBSITE ESSENTIALS
          </span>

          <h3>
            Give Supporters Everything They Need <br />
            <span>To Understand &amp; Engage.</span>
          </h3>
          <p>
            The essential information and functionality supporters, donors and
            volunteers look for before they engage with your organisation.
          </p>
        </div>

        <div class="ngoGet-wrapper">

          <div class="ngoGet-media">
            <img src="assets/images/comman/ngo-benifits.png" alt="NGO team planning a community campaign"
              loading="lazy" />

            <div class="ngoGet-media-content">
              <span>YOUR DIGITAL PRESENCE</span>
              <strong>One place for your <b>mission, work &amp; community.</b></strong>
            </div>
          </div>

          <div class="ngoGet-content">

            <div class="ngoGet-intro">
              <p>
                Your website should give people everything they need to
                understand your organisation, see your impact and find a
                meaningful way to get involved.
              </p>
            </div>

            <div class="ngoGet-list">

              <div class="ngoGet-item">
                <div class="ngoGet-item-icon">
                  <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                    <path d="M4 20V9l8-5 8 5v11" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                      stroke-linejoin="round" />
                    <path d="M8 20v-5h8v5M9 10h6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                  </svg>
                </div>
                <div class="ngoGet-item-text">
                  <h4>Mission &amp; Organisation</h4>
                  <p>About, mission, vision, areas of work, leadership and team profiles.</p>
                </div>
              </div>

              <div class="ngoGet-item">
                <div class="ngoGet-item-icon">
                  <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                    <path d="M4 19V5M4 19h16" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                    <path d="m7 15 4-5 3 3 5-7" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                      stroke-linejoin="round" />
                  </svg>
                </div>
                <div class="ngoGet-item-text">
                  <h4>Programmes &amp; Impact</h4>
                  <p>Programmes, projects, campaigns, impact stories and reports.</p>
                </div>
              </div>
              <div class="ngoGet-item">
                <div class="ngoGet-item-icon">
                  <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                    <path d="M4 6h16v12H4z" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round" />
                    <path d="M7 9h10M7 12h7M7 15h5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                  </svg>
                </div>

                <div class="ngoGet-item-text">
                  <h4>News &amp; Updates</h4>
                  <p>Latest news, announcements, events and updates from your organisation.</p>
                </div>
              </div>
              <div class="ngoGet-item">
                <div class="ngoGet-item-icon">
                  <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                    <path
                      d="M12 21s-7-4.5-9.5-9C.5 8 2 4.5 5.5 4a4.7 4.7 0 016.5 2 4.7 4.7 0 016.5-2c3.5.5 5 4 3 8-2.5 4.5-9.5 9-9.5 9z"
                      stroke="currentColor" stroke-width="1.5" stroke-linejoin="round" />
                  </svg>
                </div>
                <div class="ngoGet-item-text">
                  <h4>Donations &amp; Support</h4>
                  <p>Online donations, fundraising campaigns and sponsor opportunities.</p>
                </div>
              </div>

              <div class="ngoGet-item">
                <div class="ngoGet-item-icon">
                  <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                    <circle cx="9" cy="8" r="3" stroke="currentColor" stroke-width="1.5" />
                    <path d="M3.5 20c.6-3.3 2.4-5 5.5-5s4.9 1.7 5.5 5" stroke="currentColor" stroke-width="1.5"
                      stroke-linecap="round" />
                    <path d="M15 6.5a2.5 2.5 0 1 1 0 5M16 15c2.3.3 3.7 1.9 4.2 4" stroke="currentColor" stroke-width="1.5"
                      stroke-linecap="round" />
                  </svg>
                </div>
                <div class="ngoGet-item-text">
                  <h4>Volunteer &amp; Community Engagement</h4>
                  <p>Volunteer registration, events, community programmes and partner enquiries.</p>
                </div>
              </div>

              <div class="ngoGet-item">
                <div class="ngoGet-item-icon">
                  <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                    <path d="M5 4h14v16H5z" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round" />
                    <path d="M8 8h8M8 12h8M8 16h5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                  </svg>
                </div>
                <div class="ngoGet-item-text">
                  <h4>Communication &amp; Contact</h4>
                  <p>Contact forms, WhatsApp enquiry, location, news, updates and FAQs.</p>
                </div>
              </div>

            </div>

            <div class="ngoGet-action">
              <div>
                <span>READY TO BRING IT TOGETHER?</span>
                <p>Let's create a website around your mission.</p>
              </div>

              <a href="javascript:void(0)" class="btn btn-outline-black" data-model=".enquire-pop">
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

      </div>
    </section>


    @include('partials.package-form', [
      'label' => 'DIGITAL SOLUTIONS FOR NGOs &amp; NON-PROFITS',
      'highlight' => 'Build A Stronger Digital Mission.',
      'intro' => 'We build NGO and non-profit websites around your mission, programs, beneficiaries, donors and community goals—from informative websites to digital platforms that support donations, volunteers and outreach.',
      'fieldLabel' => 'NGO Website Type',
      'options' => [
        'ngo-website' => 'NGO &amp; Non-Profit Website',
        'charity-website' => 'Charity Organisation Website',
        'donation-platform' => 'Donation Platform',
        'volunteer-platform' => 'Volunteer &amp; Community Platform',
        'csr-platform' => 'CSR Initiative Website',
        'custom-nonprofit' => 'Custom Non-Profit Solution',
        'other' => 'Other',
      ],
    ])

    <!-- ============================================================
             06 — DIGITAL GROWTH OUTCOMES
        ============================================================= -->
    <section class="ngoValue">
      <div class="container">

        <div class="heading">
          <span class="eyebrow">
            <span class="eyebrow-line"></span>
            DIGITAL GROWTH OUTCOMES
          </span>

          <h3>
            Build A Digital Presence That
            <span> Helps Your Mission Reach Further.</span>
          </h3>

          <p>
            Outcomes we focus on — not just website features — built around how
            your organisation actually creates and grows its impact.
          </p>
        </div>

        <div class="ngoValue-grid">

          <div class="ngoValue-item">
            <div class="ngoValue-item-top">
              <span class="ngoValue-item-icon">
                <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                  <circle cx="8" cy="9" r="3" stroke="currentColor" stroke-width="1.5" />
                  <circle cx="17" cy="9" r="3" stroke="currentColor" stroke-width="1.5" />
                  <path d="M2 20c0-3 2.7-5 6-5s6 2 6 5M12 20c0-3 2.7-5 6-5s6 2 6 5" stroke="currentColor"
                    stroke-width="1.5" stroke-linecap="round" />
                </svg>
              </span>
              <span class="ngoValue-item-number">01</span>
            </div>
            <h4>Reach More Supporters</h4>
            <p>Expand your online visibility and help more people discover your mission and initiatives.</p>
          </div>

          <div class="ngoValue-item">
            <div class="ngoValue-item-top">
              <span class="ngoValue-item-icon">
                <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                  <path
                    d="M12 21s-7-4.5-9.5-9C.5 8 2 4.5 5.5 4a4.7 4.7 0 016.5 2 4.7 4.7 0 016.5-2c3.5.5 5 4 3 8-2.5 4.5-9.5 9-9.5 9z"
                    stroke="currentColor" stroke-width="1.5" stroke-linejoin="round" />
                </svg>
              </span>
              <span class="ngoValue-item-number">02</span>
            </div>
            <h4>Increase Donations &amp; Support</h4>
            <p>Create clearer digital journeys for people who want to donate, contribute or support campaigns.</p>
          </div>

          <div class="ngoValue-item">
            <div class="ngoValue-item-top">
              <span class="ngoValue-item-icon">
                <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                  <path
                    d="M17 21v-2a4 4 0 00-4-4H7a4 4 0 00-4 4v2M10 11a4 4 0 100-8 4 4 0 000 8zM17 11c1.7 0 3-1.3 3-3s-1.3-3-3-3"
                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
              </span>
              <span class="ngoValue-item-number">03</span>
            </div>
            <h4>Grow Volunteer Participation</h4>
            <p>Make volunteer opportunities easier to discover and provide simple ways for people to get involved.</p>
          </div>

          <div class="ngoValue-item">
            <div class="ngoValue-item-top">
              <span class="ngoValue-item-icon">
                <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                  <path d="M12 3l7 3v6c0 4.5-3 7.5-7 9-4-1.5-7-4.5-7-9V6l7-3z" stroke="currentColor" stroke-width="1.5"
                    stroke-linejoin="round" />
                </svg>
              </span>
              <span class="ngoValue-item-number">04</span>
            </div>
            <h4>Strengthen Digital Credibility</h4>
            <p>Present your organisation, programmes, impact and important information professionally.</p>
          </div>

          <div class="ngoValue-item">
            <div class="ngoValue-item-top">
              <span class="ngoValue-item-icon">
                <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                  <path d="M4 19V5h16v14" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round" />
                  <path d="M8 9h8M8 13h5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                </svg>
              </span>
              <span class="ngoValue-item-number">05</span>
            </div>
            <h4>Build Stronger Community Engagement</h4>
            <p>Create better ways for supporters, beneficiaries, partners and communities to connect with your
              organisation.</p>
          </div>

          <div class="ngoValue-item">
            <div class="ngoValue-item-top">
              <span class="ngoValue-item-icon">
                <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                  <circle cx="12" cy="12" r="9" stroke="currentColor" stroke-width="1.5" />
                  <path d="M12 7v5l3 2" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                </svg>
              </span>
              <span class="ngoValue-item-number">06</span>
            </div>
            <h4>Track &amp; Improve Digital Performance</h4>
            <p>Use analytics and digital marketing data to understand how people discover and engage with your
              organisation.</p>
          </div>

        </div>

      </div>
    </section>



    <section class="ngoTypes" id="ngoSolutions">
      <div class="container">

        <div class="heading">
          <span class="eyebrow">
            <span class="eyebrow-line"></span>
            NGO &amp; NON-PROFIT DIGITAL SOLUTIONS
          </span>

          <h3>
            Digital Solutions Built Around <br />
            <span>How Your Organisation Creates Impact.</span>
          </h3>

          <p>
            From building your digital presence to reaching more people, we create
            solutions that help your organisation communicate, grow and create impact.
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



    @include('partials.page-faqs', [
      'eyebrow' => 'FREQUENTLY ASKED QUESTIONS',
      'title' => 'Answers To Common<br /><span>NGO Website Questions.</span>',
      'intro' => 'Straight answers to common questions NGOs and non-profits ask before building or upgrading their website.',
    ])

    <!-- ============================================================
             09 — FINAL CTA
        ============================================================= -->
    <div class="container">
      <div class="cta-promo">
        <div class="cta-promo__inner">

          <span class="cta-promo__eyebrow">START YOUR NGO PROJECT</span>

          <h3 class="cta-promo__heading">
            Ready To Grow Your Mission Online?
          </h3>

          <p class="cta-promo__sub">
            Let's turn your mission, programmes, campaigns and supporter journey
            into a professional digital experience designed around your
            organisation's requirements.
          </p>

          <div class="cta-promo__actions">
            <button class="btn btn-white" data-model=".enquire-pop">
              Start Your Project <i>↗</i>
            </button>

            <a href="#ngoSolutions" class="btn btn-outline-white">
              Explore Our Solutions <i>↗</i>
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