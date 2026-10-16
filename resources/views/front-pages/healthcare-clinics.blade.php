@extends('layouts.app')

@push('styles')
  <link rel="stylesheet" href="assets/sass/healthcare/healthcare.css" />
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

              <span class="eyebrow">DIGITAL SOLUTIONS FOR HEALTHCARE</span>

              <h1>
                Make It Easier for Patients to Find &amp; Connect With You.
              </h1>

              <p>
                Build a professional digital presence with healthcare websites, appointment
                solutions, patient-focused applications and digital marketing.
              </p>

              <div class="banner-actions">
                <a href="javascript:void(0)" class="btn btn-outline-white">
                  Chat on WhatsApp
                  <i>↗</i>
                </a>

                <button data-model=".enquire-pop" class="btn btn-white">
                  Get a Free Consultation
                  <i>↗</i>
                </button>
              </div>

            </div>
          </div>
        </div>
      </div>
    </section>


    <!-- ============================================================
       02 — ABOUT HEALTHCARE & CLINICS
  ============================================================= -->
    <section class="healthIntro">
      <div class="container">

        <div class="healthIntro-wrap">

          <div class="healthIntro-heading">

            <span class="eyebrow">
              <span></span>
              ABOUT HEALTHCARE &amp; CLINICS
            </span>

            <h2>Make Your Healthcare Practice <span>Easier To Find, Trust &amp; Contact.</span></h2>

            <p>
              Patients increasingly search online before choosing a doctor, clinic,
              hospital or healthcare provider. They want to find the right doctor
              or specialist, understand available treatments and services, check
              clinic or hospital information, view timings and locations, learn
              about facilities, understand appointment options and contact the
              healthcare provider quickly. A professional healthcare website can
              become a trusted digital touchpoint for patient discovery,
              information and enquiries — giving your practice a clear presence
              wherever people are searching.
            </p>

          </div>


          <div class="healthIntro-flow">

            <!-- FOUND -->
            <div class="healthIntro-flow-item">
              <div class="healthIntro-flow-icon">
                <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                  <circle cx="11" cy="11" r="6.5" stroke="currentColor" stroke-width="1.6" />
                  <path d="m16 16 4.5 4.5" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" />
                </svg>
              </div>
              <div>
                <h3>Be Found</h3>
                <p>Help patients discover your doctors, services and clinic when they search online.</p>
              </div>
            </div>

            <!-- UNDERSTOOD -->
            <div class="healthIntro-flow-item">
              <div class="healthIntro-flow-icon">
                <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                  <path
                    d="M4 6.5A2.5 2.5 0 0 1 6.5 4h11A2.5 2.5 0 0 1 20 6.5v7a2.5 2.5 0 0 1-2.5 2.5H11l-4.5 4v-4H6.5A2.5 2.5 0 0 1 4 13.5v-7Z"
                    stroke="currentColor" stroke-width="1.6" stroke-linejoin="round" />
                  <path d="M8 8h8M8 11h5" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" />
                </svg>
              </div>
              <div>
                <h3>Be Understood</h3>
                <p>Show your doctors, services, specialities, timings and facilities clearly.</p>
              </div>
            </div>

            <!-- ACTION -->
            <div class="healthIntro-flow-item">
              <div class="healthIntro-flow-icon">
                <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                  <path d="M5 12.5 9.5 17 19 7.5" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"
                    stroke-linejoin="round" />
                </svg>
              </div>
              <div>
                <h3>Take Action</h3>
                <p>Make it easy to call, enquire or request an appointment.</p>
              </div>
            </div>

          </div>


          <div class="healthIntro-note">
            <div class="healthIntro-note-content">
              <small>YOUR DIGITAL FRONT DOOR</small>
              <strong>Make the first step <em>easier for every patient.</em></strong>
            </div>

            <button type="button" data-model=".enquire-pop" class="btn btn-outline-black">
              Start Your Project <i>↗</i>
            </button>
          </div>

        </div>

      </div>
    </section>


    <!-- ============================================================
       03 — WHY HEALTHCARE BUSINESSES NEED A PROFESSIONAL WEBSITE
  ============================================================= -->
    <section class="healthTypes">
      <div class="container">

        <div class="heading">
          <span class="eyebrow">
            <span class="eyebrow-line"></span>
            WHY HEALTHCARE BUSINESSES NEED A WEBSITE
          </span>

          <h3>Turn Online Searches Into <span>Real Patient Enquiries.</span></h3>

          <p>A well-planned website makes it easier for patients to discover your practice, understand what you offer and
            take the next step.</p>
        </div>


        <div class="healthTypes-main">

          <!-- FEATURE -->
          <div class="healthTypes-feature">

            <div class="healthTypes-feature-image">
              <img src="assets/images/comman/health-about.png" alt="Modern healthcare clinic and medical professional"
                loading="lazy" />
            </div>

            <div class="healthTypes-feature-content">
              <span>YOUR DIGITAL TOUCHPOINT</span>

              <h4>
                Create A Reliable
                <strong>Digital Touchpoint.</strong>
              </h4>

              <p>
                Give patients one professional place to discover your healthcare
                business, understand your services and take the next step.
              </p>

              <button type="button" class="btn btn-outline-black" data-model=".enquire-pop">
                Build Your Website <i>↗</i>
              </button>
            </div>
          </div>


          <!-- VALUE LIST -->
          <div class="healthTypes-list">

            <div class="healthTypes-row">
              <div class="healthTypes-icon">
                <svg viewBox="0 0 24 24" fill="none">
                  <circle cx="11" cy="11" r="6.5" stroke="currentColor" stroke-width="1.6" />
                  <path d="m16 16 4 4" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" />
                </svg>
              </div>
              <div class="healthTypes-content">
                <h4>Help Patients Find You Faster</h4>
                <p>Make your doctors, specialists, services and locations easier to discover online.</p>
              </div>
              <span class="healthTypes-arrow">↗</span>
            </div>

            <div class="healthTypes-row">
              <div class="healthTypes-icon">
                <svg viewBox="0 0 24 24" fill="none">
                  <path d="M12 3.5 19 6v5.2c0 4.4-2.8 7.7-7 9.3-4.2-1.6-7-4.9-7-9.3V6l7-2.5Z" stroke="currentColor"
                    stroke-width="1.6" stroke-linejoin="round" />
                  <path d="m8.8 12 2.1 2.1 4.4-4.4" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                    stroke-linejoin="round" />
                </svg>
              </div>
              <div class="healthTypes-content">
                <h4>Build Patient Trust Before The First Visit</h4>
                <p>Present doctor profiles, qualifications, services, facilities and healthcare information
                  professionally.</p>
              </div>
              <span class="healthTypes-arrow">↗</span>
            </div>

            <div class="healthTypes-row">
              <div class="healthTypes-icon">
                <svg viewBox="0 0 24 24" fill="none">
                  <rect x="5" y="3.5" width="14" height="17" rx="2" stroke="currentColor" stroke-width="1.6" />
                  <path d="M9 8h6M9 12h6M9 16h3" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" />
                </svg>
              </div>
              <div class="healthTypes-content">
                <h4>Make Healthcare Services Easier To Understand</h4>
                <p>Clearly explain treatments, departments, specialties and available healthcare services.</p>
              </div>
              <span class="healthTypes-arrow">↗</span>
            </div>

            <div class="healthTypes-row">
              <div class="healthTypes-icon">
                <svg viewBox="0 0 24 24" fill="none">
                  <path d="M5 6.5h14v10H9l-4 3v-13Z" stroke="currentColor" stroke-width="1.6" stroke-linejoin="round" />
                  <path d="M8 10h8M8 13h5" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" />
                </svg>
              </div>
              <div class="healthTypes-content">
                <h4>Generate Appointment &amp; Service Enquiries</h4>
                <p>Give patients simple ways to request appointments, ask questions or contact your team.</p>
              </div>
              <span class="healthTypes-arrow">↗</span>
            </div>

            <div class="healthTypes-row">
              <div class="healthTypes-icon">
                <svg viewBox="0 0 24 24" fill="none">
                  <path d="M4 5h16v14H4z" stroke="currentColor" stroke-width="1.6" stroke-linejoin="round" />
                  <path d="M8 9h8M8 13h5M8 17h3" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" />
                </svg>
              </div>
              <div class="healthTypes-content">
                <h4>Make Important Information Easy To Access</h4>
                <p>Help visitors quickly find timings, locations, contact details, facilities and service information.</p>
              </div>
              <span class="healthTypes-arrow">↗</span>
            </div>

            <div class="healthTypes-row">
              <div class="healthTypes-icon">
                <svg viewBox="0 0 24 24" fill="none">
                  <circle cx="12" cy="12" r="8.5" stroke="currentColor" stroke-width="1.6" />
                  <path d="M12 7v5l3 2" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" />
                </svg>
              </div>
              <div class="healthTypes-content">
                <h4>Create A Reliable Digital Touchpoint</h4>
                <p>Give patients one professional place to discover your healthcare business and take the next step.</p>
              </div>
              <span class="healthTypes-arrow">↗</span>
            </div>

          </div>

        </div>

      </div>
    </section>


    <!-- ============================================================
       04 — WHAT YOUR HEALTHCARE WEBSITE SHOULD INCLUDE
  ============================================================= -->
    <section class="healthDeliver">
      <div class="container">

        <div class="heading">
          <span class="eyebrow">
            <span class="eyebrow-line"></span>
            HEALTHCARE WEBSITE ESSENTIALS
          </span>

          <h3>Give Patients The Information<br /> <span>They Need Before They Book.</span></h3>

          <p>The essential information and functionality patients look for before they choose to visit or contact you.</p>
        </div>

        <div class="healthDeliver-wrap">

          <div class="healthDeliver-content">

            <div class="healthDeliver-items">

              <div class="healthDeliver-item">
                <div class="healthDeliver-item-top">
                  <span class="healthDeliver-icon">
                    <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                      <circle cx="12" cy="8" r="3.5" stroke="currentColor" stroke-width="1.6" />
                      <path d="M5 20c0-3.5 3-6 7-6s7 2.5 7 6" stroke="currentColor" stroke-width="1.6"
                        stroke-linecap="round" />
                    </svg>
                  </span>
                  <h5>Doctor &amp; Specialist Profiles</h5>
                </div>
                <p>Qualifications, experience, areas of expertise and doctor availability.</p>
              </div>

              <div class="healthDeliver-item">
                <div class="healthDeliver-item-top">
                  <span class="healthDeliver-icon">
                    <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                      <path d="M4 6h16M4 12h16M4 18h10" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" />
                    </svg>
                  </span>
                  <h5>Healthcare Services &amp; Specialities</h5>
                </div>
                <p>Treatments, departments, diagnostic services, preventive and wellness care.</p>
              </div>

              <div class="healthDeliver-item">
                <div class="healthDeliver-item-top">
                  <span class="healthDeliver-icon">
                    <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                      <rect x="4" y="5" width="16" height="15" rx="2" stroke="currentColor" stroke-width="1.6" />
                      <path d="M8 3v4M16 3v4M4 10h16" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" />
                    </svg>
                  </span>
                  <h5>Appointment Requests</h5>
                </div>
                <p>Doctor and service selection, appointment enquiries and callback requests.</p>
              </div>

              <div class="healthDeliver-item">
                <div class="healthDeliver-item-top">
                  <span class="healthDeliver-icon">
                    <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                      <path d="M4 21V9l8-6 8 6v12" stroke="currentColor" stroke-width="1.6" stroke-linejoin="round" />
                      <path d="M9 21v-6h6v6" stroke="currentColor" stroke-width="1.6" stroke-linejoin="round" />
                    </svg>
                  </span>
                  <h5>Clinic &amp; Hospital Information</h5>
                </div>
                <p>Locations, opening hours, facilities and infrastructure at a glance.</p>
              </div>

              <div class="healthDeliver-item">
                <div class="healthDeliver-item-top">
                  <span class="healthDeliver-icon">
                    <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                      <path d="M12 21s-7-4.35-7-10a7 7 0 0114 0c0 5.65-7 10-7 10z" stroke="currentColor"
                        stroke-width="1.6" stroke-linejoin="round" />
                      <circle cx="12" cy="11" r="2.5" stroke="currentColor" stroke-width="1.6" />
                    </svg>
                  </span>
                  <h5>Location &amp; Contact</h5>
                </div>
                <p>Make phone numbers, address, timings, maps and directions easy to find.</p>
              </div>

              <div class="healthDeliver-item">
                <div class="healthDeliver-item-top">
                  <span class="healthDeliver-icon">
                    <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                      <path d="M5 4h14v16H5z" stroke="currentColor" stroke-width="1.6" stroke-linejoin="round" />
                      <path d="M8 8h8M8 12h8M8 16h5" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" />
                    </svg>
                  </span>
                  <h5>Patient Information</h5>
                </div>
                <p>FAQs, pre-visit information and resources patients need before visiting.</p>
              </div>

              <div class="healthDeliver-item">
                <div class="healthDeliver-item-top">
                  <span class="healthDeliver-icon">
                    <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                      <path d="M4 5h16v11H8l-4 4V5z" stroke="currentColor" stroke-width="1.6" stroke-linejoin="round" />
                      <path d="M8 9h8M8 12h5" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" />
                    </svg>
                  </span>
                  <h5>WhatsApp &amp; Enquiry Forms</h5>
                </div>
                <p>Capture patient enquiries directly through simple contact and enquiry forms.</p>
              </div>

              <div class="healthDeliver-item">
                <div class="healthDeliver-item-top">
                  <span class="healthDeliver-icon">
                    <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                      <circle cx="12" cy="12" r="8.5" stroke="currentColor" stroke-width="1.6" />
                      <path d="M12 7v5l3 2" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" />
                    </svg>
                  </span>
                  <h5>Department Information</h5>
                </div>
                <p>Organised department pages that make navigating larger practices simple.</p>
              </div>

            </div>

          </div>

          <div class="healthDeliver-visual">

            <img src="assets/images/comman/health-benifits.png"
              alt="Doctor consulting with a patient in a modern healthcare setting" loading="lazy" />

            <div class="healthDeliver-visual-overlay"></div>

            <div class="healthDeliver-visual-card">
              <span>YOUR WEBSITE</span>

              <h4>One clear place to <strong> understand your care.</strong></h4>

              <div class="healthDeliver-visual-line">
                <span></span>
                <p>Designed around your patients</p>
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
              DIGITAL SOLUTIONS FOR HEALTHCARE
            </span>

            <h3>
              Everything You Need To
              <span>Build A More Trusted Healthcare Experience.</span>
            </h3>

            <p class="ecomPackage-intro">
              We build healthcare websites around your services, patients,
              doctors and business goals—from clinic websites to complete digital
              healthcare platforms that make information and appointments easier
              to access.
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
                <label for="packageBusiness">Healthcare Website Type</label>

                <select id="packageBusiness" name="business_type">
                  <option value="" selected disabled>
                    Select your website type
                  </option>
                  <option value="clinic-website">
                    Clinic &amp; Hospital Website
                  </option>
                  <option value="doctor-website">
                    Doctor &amp; Personal Practice Website
                  </option>
                  <option value="healthcare-platform">
                    Healthcare Platform
                  </option>
                  <option value="appointment-booking">
                    Appointment Booking Website
                  </option>
                  <option value="patient-portal">
                    Patient Portal
                  </option>
                  <option value="custom-healthcare">
                    Custom Healthcare Solution
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
       06 — DIGITAL GROWTH OUTCOMES
  ============================================================= -->
    <section class="secL">
      <div class="container">

        <div class="heading">
          <span class="eyebrow">
            <span class="eyebrow-line"></span>
            DIGITAL GROWTH OUTCOMES
          </span>

          <h3>
            Build A Digital Presence That
            <span>Supports Better Patient Journeys.</span>
          </h3>

          <p>
            Outcomes we focus on — not just website features — built around how your healthcare business actually grows.
          </p>
        </div>

        <ul class="secL-list">

          <li>
            <span class="secL-icon">
              <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                <circle cx="11" cy="11" r="7" stroke="currentColor" stroke-width="1.5" />
                <path d="M20 20l-3.5-3.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
              </svg>
            </span>

            <div>
              <h4>Reach More Patients</h4>
              <p>
                Expand your online visibility and help more relevant patients discover your healthcare services.
              </p>
            </div>
          </li>

          <li>
            <span class="secL-icon">
              <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                <path d="M5 6.5h14v10H9l-4 3v-13Z" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round" />
                <path d="M8 10h8M8 13h5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
              </svg>
            </span>

            <div>
              <h4>Generate More Patient Enquiries</h4>
              <p>
                Create clear digital journeys that make it easier for patients to contact your clinic, doctor or
                healthcare team.
              </p>
            </div>
          </li>

          <li>
            <span class="secL-icon">
              <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                <rect x="5" y="3.5" width="14" height="17" rx="2" stroke="currentColor" stroke-width="1.5" />
                <path d="M9 8h6M9 12h6M9 16h3" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
              </svg>
            </span>

            <div>
              <h4>Improve Patient Experience</h4>
              <p>
                Make essential healthcare information easier to find, understand and access.
              </p>
            </div>
          </li>

          <li>
            <span class="secL-icon">
              <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                <path d="M12 3.5 19 6v5.2c0 4.4-2.8 7.7-7 9.3-4.2-1.6-7-4.9-7-9.3V6l7-2.5Z" stroke="currentColor"
                  stroke-width="1.5" stroke-linejoin="round" />
                <path d="m8.8 12 2.1 2.1 4.4-4.4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                  stroke-linejoin="round" />
              </svg>
            </span>

            <div>
              <h4>Strengthen Digital Trust</h4>
              <p>
                Present doctors, services, facilities and healthcare information professionally before the first
                interaction.
              </p>
            </div>
          </li>

        </ul>

        <div class="cntr">
          <button type="button" data-model=".enquire-pop" class="btn btn-outline-black">
            Start Your Project <i>↗</i>
          </button>
        </div>

      </div>
    </section>



    <section class="ngoTypes" id="ngoSolutions">
      <div class="container">

        <div class="heading">
          <span class="eyebrow">
            <span class="eyebrow-line"></span>
            HEALTHCARE DIGITAL SOLUTIONS
          </span>

          <h3>
            Digital Solutions For <br />
            <span>Modern Healthcare Businesses.</span>
          </h3>

          <p>
            Digital solutions designed to help healthcare businesses build, reach and grow online.
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
    <section class="secN">
      <div class="container">

        <div class="heading">
          <span class="eyebrow">FREQUENTLY ASKED QUESTIONS</span>

          <h3>
            Answers To Common <br />
            <span>Healthcare Website Questions.</span>
          </h3>

          <p>
            Straight answers to common questions healthcare businesses ask before
            building or upgrading their website.
          </p>
        </div>

        <div class="accordion-wrapper">

          <div class="accordion-item">
            <div class="accordion-header">
              <div class="faq-question">
                <h4>What type of healthcare websites can you build?</h4>
              </div>
              <span class="accordion-icon">+</span>
            </div>

            <div class="accordion-content">
              <p>
                We build websites for doctors, clinics, hospitals, diagnostic
                centres, dental practices, wellness businesses and healthcare providers.
              </p>
            </div>
          </div>


          <div class="accordion-item">
            <div class="accordion-header">
              <div class="faq-question">
                <h4>Can you build doctor and specialist profile pages?</h4>
              </div>
              <span class="accordion-icon">+</span>
            </div>

            <div class="accordion-content">
              <p>
                Yes. We can create doctor profiles with qualifications, experience,
                specialisations, services and other relevant information.
              </p>
            </div>
          </div>


          <div class="accordion-item">
            <div class="accordion-header">
              <div class="faq-question">
                <h4>Can the website include appointment booking?</h4>
              </div>
              <span class="accordion-icon">+</span>
            </div>

            <div class="accordion-content">
              <p>
                Yes. Appointment requests or online booking can be added based
                on your clinic's workflow and requirements.
              </p>
            </div>
          </div>


          <div class="accordion-item">
            <div class="accordion-header">
              <div class="faq-question">
                <h4>Can you integrate WhatsApp and enquiry systems?</h4>
              </div>
              <span class="accordion-icon">+</span>
            </div>

            <div class="accordion-content">
              <p>
                Yes. We can connect WhatsApp and enquiry forms so patients
                can easily reach your team.
              </p>
            </div>
          </div>


          <div class="accordion-item">
            <div class="accordion-header">
              <div class="faq-question">
                <h4>Can we manage multiple doctors, departments and services?</h4>
              </div>
              <span class="accordion-icon">+</span>
            </div>

            <div class="accordion-content">
              <p>
                Yes. Your website can support multiple doctors, departments,
                services and locations within one organised structure.
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
                Yes. We offer SEO and digital marketing support to improve
                healthcare visibility and generate relevant patient enquiries.
              </p>
            </div>
          </div>

        </div>

      </div>
    </section>


    <!-- ============================================================
       09 — FINAL CTA
  ============================================================= -->
    <div class="container">
      <div class="cta-promo">
        <div class="cta-promo__inner">
          <span class="cta-promo__eyebrow">START YOUR HEALTHCARE PROJECT</span>

          <h3 class="cta-promo__heading">
            Ready To Grow Your Healthcare Business Online?
          </h3>

          <p class="cta-promo__sub">
            Let's turn your doctors, services, facilities and patient journey into
            a professional digital experience designed around your healthcare
            requirements.
          </p>

          <div class="cta-promo__actions">
            <button class="btn btn-white" data-model=".enquire-pop">
              Start Your Project <i>↗</i>
            </button>

            <a href="#healthcareSolutions" class="btn btn-outline-white">
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