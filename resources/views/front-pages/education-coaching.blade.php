@extends('layouts.app')

@push('styles')
  <link rel="stylesheet" href="assets/sass/education/education.css" />
@endpush

@section('content')


  <main>
    <!-- ============================================================
       01 — HERO
  ============================================================= -->
    <section class="banner">
      <div class="bg">
        <video autoplay muted loop playsinline class="bg-video" src="assets/video/effect1.mp4"
          poster="assets/video/poster/effect1.png">
          <source src="assets/video/effect1.mp4" type="video/mp4" />
        </video>

        <div class="container">
          <div class="banner-wrapper">
            <div class="content">
              <span class="eyebrow">DIGITAL SOLUTIONS FOR EDUCATION &amp; COACHING</span>

              <h1>
                Build a Stronger Digital Learning Experience for Your
                Students.
              </h1>

              <p>
                From institute websites and LMS platforms to admissions, test
                series, mobile apps and digital marketing—we help education
                businesses grow digitally.
              </p>

              <div class="banner-actions">
                <a href="javascript:void(0)" class="btn btn-outline-white">
                  Chat on WhatsApp
                  <i>↗</i>
                </a>

                <button data-model=".enquire-pop" class="btn btn-white">
                  Discuss Your Requirements
                  <i>↗</i>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ============================================================
       02 — ABOUT THE INDUSTRY
  ============================================================= -->
    <section class="intro eduIntro">
      <div class="container">
        <div class="eduIntro-inner">
          <div class="heading">
            <span class="eyebrow"><span class="eyebrow-line"></span> EDUCATION &amp;
              COACHING</span>

            <h3>
              Digital Solutions Built For Education &amp;
              <span> Coaching Businesses.</span>
            </h3>
          </div>

          <div class="eduIntro-content">
            <div class="eduIntro-image">
              <img src="assets/images/comman/education-about.png"
                alt="Students and parents researching courses and admissions online" loading="lazy" />
            </div>

            <div class="eduIntro-copy">
              <p>
                Students and parents increasingly discover institutes, courses
                and educators online long before making an enquiry or
                admission decision. If your courses, faculty and admission
                process aren't presented clearly, you lose their interest
                before a conversation even begins.
              </p>

              <p>
                Web Mingo builds websites and digital platforms for coaching
                institutes, schools, colleges, training institutes and online
                educators — designed around clear course information, easy
                enquiries, admission details, trust-building content and a
                better overall student experience.
              </p>

              <a href="#eduSolutions" class="btn btn-outline-black">
                Explore Our Solutions <i>↗</i>
              </a>
            </div>
          </div>
        </div>

        <div class="eduIntro-points">
          <div class="eduIntro-point">
            <div class="icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                <path d="M0 0h24v24H0z" fill="none" />
                <g fill="none" stroke="currentColor" stroke-width="1.5">
                  <path stroke-linejoin="round"
                    d="M14 3.5c3.771 0 5.657 0 6.828 1.245S22 7.993 22 12s0 6.01-1.172 7.255S17.771 20.5 14 20.5h-4c-3.771 0-5.657 0-6.828-1.245S2 16.007 2 12s0-6.01 1.172-7.255S6.229 3.5 10 3.5z" />
                  <path stroke-linecap="round"
                    d="M5 15.5c1.609-2.137 5.354-2.254 7 0m-1.751-5.25a1.75 1.75 0 1 1-3.5 0a1.75 1.75 0 0 1 3.5 0ZM15 9.5h4m-4 4h2" />
                </g>
              </svg>
            </div>
            <span>Attract More Students</span>
          </div>

          <div class="eduIntro-point">
            <div class="icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                <path d="M0 0h24v24H0z" fill="none" />
                <g fill="none" stroke="currentColor" stroke-width="1.5">
                  <path stroke-linejoin="round"
                    d="M14 3.5c3.771 0 5.657 0 6.828 1.245S22 7.993 22 12s0 6.01-1.172 7.255S17.771 20.5 14 20.5h-4c-3.771 0-5.657 0-6.828-1.245S2 16.007 2 12s0-6.01 1.172-7.255S6.229 3.5 10 3.5z" />
                  <path stroke-linecap="round"
                    d="M5 15.5c1.609-2.137 5.354-2.254 7 0m-1.751-5.25a1.75 1.75 0 1 1-3.5 0a1.75 1.75 0 0 1 3.5 0ZM15 9.5h4m-4 4h2" />
                </g>
              </svg>
            </div>
            <span>Showcase Courses Clearly</span>
          </div>

          <div class="eduIntro-point">
            <div class="icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                <path d="M0 0h24v24H0z" fill="none" />
                <g fill="none" stroke="currentColor" stroke-width="1.5">
                  <path stroke-linejoin="round"
                    d="M14 3.5c3.771 0 5.657 0 6.828 1.245S22 7.993 22 12s0 6.01-1.172 7.255S17.771 20.5 14 20.5h-4c-3.771 0-5.657 0-6.828-1.245S2 16.007 2 12s0-6.01 1.172-7.255S6.229 3.5 10 3.5z" />
                  <path stroke-linecap="round"
                    d="M5 15.5c1.609-2.137 5.354-2.254 7 0m-1.751-5.25a1.75 1.75 0 1 1-3.5 0a1.75 1.75 0 0 1 3.5 0ZM15 9.5h4m-4 4h2" />
                </g>
              </svg>
            </div>
            <span>Generate Admission Enquiries</span>
          </div>

          <div class="eduIntro-point">
            <div class="icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                <path d="M0 0h24v24H0z" fill="none" />
                <g fill="none" stroke="currentColor" stroke-width="1.5">
                  <path stroke-linejoin="round"
                    d="M14 3.5c3.771 0 5.657 0 6.828 1.245S22 7.993 22 12s0 6.01-1.172 7.255S17.771 20.5 14 20.5h-4c-3.771 0-5.657 0-6.828-1.245S2 16.007 2 12s0-6.01 1.172-7.255S6.229 3.5 10 3.5z" />
                  <path stroke-linecap="round"
                    d="M5 15.5c1.609-2.137 5.354-2.254 7 0m-1.751-5.25a1.75 1.75 0 1 1-3.5 0a1.75 1.75 0 0 1 3.5 0ZM15 9.5h4m-4 4h2" />
                </g>
              </svg>
            </div>
            <span>Build Digital Trust</span>
          </div>
        </div>
      </div>
    </section>

    <!-- ============================================================
       03 — WHY EDUCATION & COACHING BUSINESSES NEED A WEBSITE
  ============================================================= -->
    <section class="eduNeed">
      <div class="container">
        <div class="heading">
          <span class="eyebrow">
            <span class="eyebrow-line"></span>
            WHY YOUR INSTITUTE NEEDS A WEBSITE
          </span>
          <h3>
            Make It Easier For Students To Find,<br />
            <span>Trust &amp; Choose You.</span>
          </h3>

          <p>
            Your website can help students discover your business, understand
            what makes you different, make an enquiry and take the next step
            with confidence.
          </p>
        </div>

        <div class="eduNeed-framework">
          <div class="eduNeed-framework__connector">
            <span></span>
          </div>

          <!-- LEFT — BE EASIER TO FIND -->
          <article class="eduNeed-item eduNeed-item--left eduNeed-item--one">
            <div class="eduNeed-item__top">
              <span class="eduNeed-item__number">
                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                  <path d="M0 0h24v24H0z" fill="none" />
                  <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="12" cy="12" r="9" />
                    <path
                      d="M11.307 9.739L15 9l-.739 3.693a2 2 0 0 1-1.568 1.569L9 15l.739-3.693a2 2 0 0 1 1.568-1.568" />
                  </g>
                </svg>
              </span>
              <span class="eduNeed-item__tag">DISCOVERY</span>
            </div>

            <h4>Be Easier <span>To Find.</span></h4>

            <p>
              Help students and parents discover your institute, courses and
              learning programs online.
            </p>
          </article>

          <!-- RIGHT — BUILD TRUST -->
          <article class="eduNeed-item eduNeed-item--right eduNeed-item--two">
            <div class="eduNeed-item__top">
              <span class="eduNeed-item__number">
                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 32 32">
                  <path d="M0 0h32v32H0z" fill="none" />
                  <path fill="currentColor" d="M14 16.59L11.41 14L10 15.41l4 4l8-8L20.59 10z" />
                  <path fill="currentColor"
                    d="m16 30l-6.176-3.293A10.98 10.98 0 0 1 4 17V4a2 2 0 0 1 2-2h20a2 2 0 0 1 2 2v13a10.98 10.98 0 0 1-5.824 9.707ZM6 4v13a8.99 8.99 0 0 0 4.766 7.942L16 27.733l5.234-2.79A8.99 8.99 0 0 0 26 17V4Z" />
                </svg>
              </span>
              <span class="eduNeed-item__tag">TRUST</span>
            </div>

            <h4>Build Trust Before <span>The First Enquiry.</span></h4>

            <p>
              Showcase faculty, results, achievements, facilities,
              testimonials and learning outcomes.
            </p>
          </article>

          <!-- CENTER -->
          <div class="eduNeed-center">
            <span class="eduNeed-center__label">YOUR DIGITAL PRESENCE</span>

            <h4>Be Seen.<br />Be Chosen.</h4>

            <div class="eduNeed-center__line"><span></span></div>

            <p>
              Every step should make it easier for the right learner to choose
              you.
            </p>
          </div>

          <!-- LEFT — GENERATE ENQUIRIES -->
          <article class="eduNeed-item eduNeed-item--left eduNeed-item--three">
            <div class="eduNeed-item__top">
              <span class="eduNeed-item__number">
                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 16 16">
                  <path d="M0 0h16v16H0z" fill="none" />
                  <path fill="currentColor"
                    d="M13.25 3c.966 0 1.75.784 1.75 1.75v6.5A1.75 1.75 0 0 1 13.25 13H2.75A1.75 1.75 0 0 1 1 11.25v-6.5C1 3.784 1.784 3 2.75 3zM2.75 4a.75.75 0 0 0-.75.75v6.5c0 .414.336.75.75.75h10.5a.75.75 0 0 0 .75-.75v-6.5a.75.75 0 0 0-.75-.75zM5.5 6a2 2 0 1 1 0 4a2 2 0 0 1 0-4m7 3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1 0-1zm-7-2a1 1 0 1 0 0 2a1 1 0 0 0 0-2m7-1a.5.5 0 0 1 0 1h-3a.5.5 0 0 1 0-1z" />
                </svg>
              </span>
              <span class="eduNeed-item__tag">ENQUIRIES</span>
            </div>

            <h4>Generate More <span>Enquiries.</span></h4>

            <p>
              Give visitors clear ways to enquire about courses, admissions,
              batches and programs.
            </p>
          </article>

          <!-- RIGHT — PRESENT EVERY COURSE CLEARLY -->
          <article class="eduNeed-item eduNeed-item--right eduNeed-item--four">
            <div class="eduNeed-item__top">
              <span class="eduNeed-item__number">
                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                  <path d="M0 0h24v24H0z" fill="none" />
                  <path fill="currentColor" d="M4 6.5A2.5 2.5 0 0 1 6.5 4H20v15H6.5A2.5 2.5 0 0 0 4 21.5z" />
                </svg>
              </span>
              <span class="eduNeed-item__tag">COURSES</span>
            </div>

            <h4>Present Every Course <span>Clearly.</span></h4>

            <p>
              Organise programs, fees, schedules, eligibility and important
              information in one place.
            </p>
          </article>
        </div>

        <div class="eduNeed-bottom">
          <div class="eduNeed-bottom__copy">
            <span>THE BIGGER PICTURE</span>
            <p>
              <strong>Support your admissions team.</strong>
              Connect enquiry forms, WhatsApp and CRM.
              <strong>Build for future growth</strong> — LMS, portals,
              payments and more.
            </p>
          </div>

          <button type="button" class="btn btn-outline-black" data-model=".enquire-pop">
            Build Your Website
            <i>↗</i>
          </button>
        </div>
      </div>
    </section>

    <!-- ============================================================
       04 — WHAT YOUR EDUCATION WEBSITE SHOULD INCLUDE
  ============================================================= -->
    <section class="eduIncluded" id="eduIncluded">
      <div class="container">
        <div class="heading">
          <span class="eyebrow">
            <span class="eyebrow-line"></span>
            WHAT YOUR EDUCATION WEBSITE SHOULD INCLUDE
          </span>
          <h3>
            Everything Students Need To
            <span>Understand, Enquire &amp; Get Started.</span>
          </h3>
          <p>
            Build the right digital experience for your students, parents,
            faculty and admission team.
          </p>
        </div>

        <div class="eduIncluded-board">
          <!-- LEFT -->
          <div class="eduIncluded-side eduIncluded-side--left">
            <div class="eduIncluded-feature">
              <div class="eduIncluded-feature__icon">
                <svg viewBox="0 0 24 24">
                  <path d="M4 6.5A2.5 2.5 0 0 1 6.5 4H20v15H6.5A2.5 2.5 0 0 0 4 21.5z" />
                  <path d="M4 6.5v15" />
                  <path d="M8 8h8" />
                  <path d="M8 12h6" />
                </svg>
              </div>
              <div>
                <h4>Courses, Batches &amp; Schedules</h4>
                <p>
                  Present courses, programs, fees, batches and schedules
                  clearly for students to compare.
                </p>
              </div>
            </div>

            <div class="eduIncluded-feature">
              <div class="eduIncluded-feature__icon">
                <svg viewBox="0 0 24 24">
                  <circle cx="12" cy="8" r="3" />
                  <path d="M5 20c.7-3.2 3.1-5 7-5s6.3 1.8 7 5" />
                  <path d="M19 9v4" />
                  <path d="M17 11h4" />
                </svg>
              </div>
              <div>
                <h4>Admission Enquiries &amp; Registration</h4>
                <p>
                  Simple enquiry forms and student registration to capture
                  serious admission leads.
                </p>
              </div>
            </div>

            <div class="eduIncluded-feature">
              <div class="eduIncluded-feature__icon">
                <svg viewBox="0 0 24 24">
                  <path d="M4 19V5" />
                  <path d="M4 19h16" />
                  <path d="m7 15 3-4 3 2 4-6" />
                </svg>
              </div>
              <div>
                <h4>Faculty Profiles, Results &amp; Testimonials</h4>
                <p>
                  Build credibility with faculty details, past results and
                  student testimonials.
                </p>
              </div>
            </div>
          </div>

          <!-- CENTER -->
          <div class="eduIncluded-center">
            <div class="eduIncluded-image">
              <img src="assets/images/comman/why-edcution.png"
                alt="Students accessing an education website with course and admission details" loading="lazy" />
            </div>

            <div class="eduIncluded-center__content">
              <span>BUILT AROUND YOUR LEARNERS</span>
              <h4>
                Everything Students Need.<br /><strong>One Digital Experience.</strong>
              </h4>
            </div>
          </div>

          <!-- RIGHT -->
          <div class="eduIncluded-side eduIncluded-side--right">
            <div class="eduIncluded-feature">
              <div class="eduIncluded-feature__icon">
                <svg viewBox="0 0 24 24">
                  <rect x="3" y="4" width="18" height="16" rx="2" />
                  <path d="M3 9h18" />
                  <path d="M8 9v11" />
                </svg>
              </div>
              <div>
                <h4>Test Series, Live Classes &amp; Study Material</h4>
                <p>
                  Online test series, live classes, study material and a
                  student login for learning access.
                </p>
              </div>
            </div>

            <div class="eduIncluded-feature">
              <div class="eduIncluded-feature__icon">
                <svg viewBox="0 0 24 24">
                  <path d="M4 5h16v14H4z" />
                  <path d="m8 9 3 2-3 2z" />
                  <path d="M13 16h4" />
                </svg>
              </div>
              <div>
                <h4>Online Payments &amp; WhatsApp Integration</h4>
                <p>
                  Collect fees securely online and connect enquiries to
                  WhatsApp for faster follow-up.
                </p>
              </div>
            </div>

            <div class="eduIncluded-feature">
              <div class="eduIncluded-feature__icon">
                <svg viewBox="0 0 24 24">
                  <circle cx="12" cy="10" r="3" />
                  <path d="M5.5 20c0-4 3-6.5 6.5-6.5S18.5 16 18.5 20" />
                  <path d="M12 2v3" />
                </svg>
              </div>
              <div>
                <h4>Maps, Locations &amp; CRM Integration</h4>
                <p>
                  Show branch locations on a map and connect enquiries
                  directly to your CRM system.
                </p>
              </div>
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
              READY TO GROW YOUR EDUCATION BUSINESS
            </span>

            <h3>
              Everything You Need To
              <span>Build A Better Education Website.</span>
            </h3>

            <p class="ecomPackage-intro">
              We build education websites around your institute, courses, students,
              learning goals and business requirements—from coaching institute
              websites to complete LMS and online learning platforms.
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
                <label for="packageBusiness">Education Website Type</label>

                <select id="packageBusiness" name="business_type">
                  <option value="" selected disabled>
                    Select your website type
                  </option>
                  <option value="coaching-institute">
                    Coaching Institute Website
                  </option>
                  <option value="school-college">
                    School &amp; College Website
                  </option>
                  <option value="lms">
                    LMS &amp; Online Learning Platform
                  </option>
                  <option value="test-series">
                    Test Series Platform
                  </option>
                  <option value="institute-erp">
                    Institute ERP
                  </option>
                  <option value="online-courses">
                    Online Courses Website
                  </option>
                  <option value="custom-education">
                    Custom Education Website
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

    <!-- ============================================================
       06 — HOW WE HELP YOUR EDUCATION BUSINESS GROW DIGITALLY
  ============================================================= -->
    <section class="eduJourney" id="eduJourney">
      <div class="container">
        <div class="heading">
          <span class="eyebrow">
            <span class="eyebrow-line"></span>
            HOW WE HELP YOU GROW DIGITALLY
          </span>

          <h3>
            Turn Your Digital Presence
            <span>Into A Growth Channel.</span>
          </h3>

          <p>
            Digital solutions designed to help you reach, engage and convert
            more learners.
          </p>
        </div>

        <div class="eduJourney-flow">
          <div class="eduJourney-line"></div>

          <div class="eduJourney-stage">
            <span class="eduJourney-node">01</span>

            <div class="eduJourney-card">
              <span class="eduJourney-icon">
                <svg viewBox="0 0 24 24" fill="none">
                  <circle cx="11" cy="11" r="7" stroke="currentColor" stroke-width="1.5" />
                  <path d="M21 21l-4.3-4.3" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                </svg>
              </span>

              <h4>Reach More Students</h4>
              <p>Make your education business easier to discover.</p>
            </div>
          </div>

          <div class="eduJourney-stage">
            <span class="eduJourney-node">02</span>

            <div class="eduJourney-card">
              <span class="eduJourney-icon">
                <svg viewBox="0 0 24 24" fill="none">
                  <path d="M4 4h16v16H4z" stroke="currentColor" stroke-width="1.5" />
                  <path d="M4 6l8 7 8-7" stroke="currentColor" stroke-width="1.5" />
                </svg>
              </span>

              <h4>Generate Qualified Enquiries</h4>
              <p>Turn visitors into genuine student enquiries.</p>
            </div>
          </div>

          <div class="eduJourney-stage">
            <span class="eduJourney-node">03</span>

            <div class="eduJourney-card">
              <span class="eduJourney-icon">
                <svg viewBox="0 0 24 24" fill="none">
                  <path d="M12 3l8 4-8 4-8-4 8-4z" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round" />
                  <path d="M4 11v5c0 1.5 3.5 3 8 3s8-1.5 8-3v-5" stroke="currentColor" stroke-width="1.5"
                    stroke-linejoin="round" />
                </svg>
              </span>

              <h4>Build Digital Credibility</h4>
              <p>Showcase your courses, faculty and achievements.</p>
            </div>
          </div>

          <div class="eduJourney-stage">
            <span class="eduJourney-node">04</span>

            <div class="eduJourney-card">
              <span class="eduJourney-icon">
                <svg viewBox="0 0 24 24" fill="none">
                  <rect x="4" y="4" width="16" height="16" rx="2" stroke="currentColor" stroke-width="1.5" />
                  <path d="M8 9h8M8 13h5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                </svg>
              </span>

              <h4>Improve Student Experience</h4>
              <p>Make information simple to find and access.</p>
            </div>
          </div>

          <div class="eduJourney-stage">
            <span class="eduJourney-node">05</span>

            <div class="eduJourney-card">
              <span class="eduJourney-icon">
                <svg viewBox="0 0 24 24" fill="none">
                  <path d="M4 19V5" />
                  <path d="M4 19h16" />
                  <path d="m7 15 3-4 3 2 4-6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                    stroke-linejoin="round" />
                </svg>
              </span>

              <h4>Connect Your Operations</h4>
              <p>Connect enquiries, communication and payments.</p>
            </div>
          </div>

          <div class="eduJourney-stage eduJourney-stage--final">
            <span class="eduJourney-node">06</span>

            <div class="eduJourney-card">
              <span class="eduJourney-icon">
                <svg viewBox="0 0 24 24" fill="none">
                  <path d="M9 12l2 2 4-4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                    stroke-linejoin="round" />
                  <circle cx="12" cy="12" r="9" stroke="currentColor" stroke-width="1.5" />
                </svg>
              </span>

              <h4>Track &amp; Improve Performance</h4>
              <p>Use data to improve your digital growth.</p>
            </div>
          </div>
        </div>

        <div class="center">
          <button class="btn btn-outline-black" data-model=".enquire-pop">
            Grow Your Education Business ↗
          </button>
        </div>
      </div>
    </section>

    <section class="ngoTypes" id="ngoSolutions">
      <div class="container">
        <div class="heading">
          <span class="eyebrow">
            <span class="eyebrow-line"></span>
            DIGITAL SOLUTIONS FOR EDUCATION
          </span>

          <h3>
            Digital Solutions Built For <br />
            <span>Modern Education Businesses.</span>
          </h3>

          <p>
            From websites and digital marketing to learning platforms and mobile apps,
            we build solutions that help education businesses attract, engage and grow.
          </p>
        </div>

        <div class="ngoTypes-grid">
          <!-- CARD 01 — FEATURED -->
          <a href="website-design-development.html" class="ngoTypes-card ngoTypes-card--featured">
            <img src="assets/images/comman/web-desiging.png" alt="Website design and development" loading="lazy" />

            <div class="ngoTypes-overlay"></div>

            <div class="ngoTypes-content">
              <span>BUILD A STRONG DIGITAL PRESENCE</span>

              <h4>Website Design &amp; Development</h4>

              <p>
                Build a professional website that showcases your business and
                turns visitors into opportunities.
              </p>
            </div>

            <span class="ngoTypes-arrow">↗</span>
          </a>

          <!-- CARD 02 -->
          <a href="digital-marketing.html" class="ngoTypes-card ngoTypes-card--medium">
            <img src="assets/images/comman/seoFor.png" alt="Digital marketing services" loading="lazy" />

            <div class="ngoTypes-overlay"></div>

            <div class="ngoTypes-content">
              <span>REACH MORE PEOPLE ONLINE</span>

              <h4>Digital Marketing</h4>

              <p>
                Reach the right audience, build visibility and create more
                opportunities for your business online.
              </p>
            </div>

            <span class="ngoTypes-arrow">↗</span>
          </a>

          <!-- CARD 03 -->
          <a href="mobile-app-development.html" class="ngoTypes-card ngoTypes-card--medium">
            <img src="assets/images/comman/mobile-application.png" alt="Mobile application development" loading="lazy" />

            <div class="ngoTypes-overlay"></div>

            <div class="ngoTypes-content">
              <span>CONNECT BEYOND THE WEBSITE</span>

              <h4>Mobile Application Development</h4>

              <p>
                Extend your business to mobile with engaging and purpose-built
                applications for your customers.
              </p>
            </div>

            <span class="ngoTypes-arrow">↗</span>
          </a>

          <!-- CARD 04 -->
          <a href="digital-branding.html" class="ngoTypes-card ngoTypes-card--medium">
            <img src="assets/images/comman/digital-branding.png" alt="Digital branding services" loading="lazy" />

            <div class="ngoTypes-overlay"></div>

            <div class="ngoTypes-content">
              <span>CREATE A RECOGNISABLE IDENTITY</span>

              <h4>Digital Branding</h4>

              <p>
                Build a strong and consistent brand identity that makes your
                business stand out across digital channels.
              </p>
            </div>

            <span class="ngoTypes-arrow">↗</span>
          </a>

          <!-- CARD 05 — CTA -->
          <div class="ngoTypes-card ngoTypes-card--cta">
            <div class="ngoTypes-cta-content">
              <span>READY TO GROW YOUR BUSINESS?</span>

              <h4>Take Your Digital Presence &amp; Business Further.</h4>

              <p>
                Let’s create digital solutions that help your business
                attract, engage and grow.
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
       10 — FAQ (.secN)
  ============================================================= -->
    <section class="secN">
      <div class="container">
        <div class="heading">
          <h3>
            Questions About Our <span>Education Digital Solutions?</span>
          </h3>
          <p>
            Find answers to common questions about building a website or
            platform for your institute.
          </p>
        </div>

        <div class="accordion-wrapper">
          <div class="accordion-item">
            <div class="accordion-header">
              <div class="faq-question">
                <h4>What type of education websites can Web Mingo build?</h4>
              </div>
              <span class="accordion-icon">+</span>
            </div>

            <div class="accordion-content">
              <p>
                We build websites for coaching institutes, schools, colleges,
                training institutes, exam institutes and online educators.
              </p>
            </div>
          </div>

          <div class="accordion-item">
            <div class="accordion-header">
              <div class="faq-question">
                <h4>Can you build an LMS for our institute?</h4>
              </div>
              <span class="accordion-icon">+</span>
            </div>

            <div class="accordion-content">
              <p>
                Yes. We build LMS platforms with courses, student accounts,
                study material, assessments and progress tracking.
              </p>
            </div>
          </div>

          <div class="accordion-item">
            <div class="accordion-header">
              <div class="faq-question">
                <h4>Can our website include admission enquiries?</h4>
              </div>
              <span class="accordion-icon">+</span>
            </div>

            <div class="accordion-content">
              <p>
                Yes. Enquiry forms and admission workflows can help students
                connect with your team and make follow-ups easier.
              </p>
            </div>
          </div>

          <div class="accordion-item">
            <div class="accordion-header">
              <div class="faq-question">
                <h4>Can you integrate WhatsApp, CRM and other tools?</h4>
              </div>
              <span class="accordion-icon">+</span>
            </div>

            <div class="accordion-content">
              <p>
                Yes. We can integrate WhatsApp, CRM systems and other tools
                your admissions or operations team uses.
              </p>
            </div>
          </div>

          <div class="accordion-item">
            <div class="accordion-header">
              <div class="faq-question">
                <h4>
                  Can you build test series and online examination platforms?
                </h4>
              </div>
              <span class="accordion-icon">+</span>
            </div>

            <div class="accordion-content">
              <p>
                Yes. We can build test series and examination platforms with
                assessments, results, rankings and performance tracking.
              </p>
            </div>
          </div>

          <div class="accordion-item">
            <div class="accordion-header">
              <div class="faq-question">
                <h4>Can you help with SEO and digital marketing?</h4>
              </div>
              <span class="accordion-icon">+</span>
            </div>

            <div class="accordion-content">
              <p>
                Yes. We offer SEO, paid advertising and digital marketing to
                improve visibility and generate more relevant enquiries.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ============================================================
       11 — FINAL CTA (.cta-promo)
  ============================================================= -->
    <div class="container">
      <div class="cta-promo">
        <div class="cta-promo__inner">
          <span class="cta-promo__eyebrow">GROW YOUR EDUCATION BUSINESS</span>

          <h3 class="cta-promo__heading">
            Ready To Grow Your Institute Online?
          </h3>

          <p class="cta-promo__sub">
            Tell us your requirements and let’s build a website or digital platform that works for your institute.
          </p>
          <div class="cta-promo__actions">
            <button class="btn btn-white" data-model=".enquire-pop">
              Start Your Project <i>↗</i>
            </button>
            <a href="#eduSolutions" class="btn btn-outline-white">Explore Our Solutions <i>↗</i></a>
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