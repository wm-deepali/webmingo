@extends('layouts.app')

@push('styles')
  <link rel="stylesheet" href="assets/sass/tavel-tourism/travel-tourism.css" />
@endpush

@section('content')

  <main>
    <!-- ============================================================
         01 — BANNER
    ============================================================= -->
    <section class="banner">
      <div class="bg">
        <video autoplay muted loop playsinline class="bg-video" src="assets/video/effect1.mp4"
          poster="assets/video/poster/banner.png">
          <source src="assets/video/effect1.mp4" type="video/mp4" />
        </video>

        <div class="container">
          <div class="banner-wrapper">
            <div class="content">
              <span class="eyebrow">DIGITAL SOLUTIONS FOR TRAVEL &amp; TOURISM</span>

              <h1>
                Turn Travel Searches Into Real Enquiries &amp; Bookings.
              </h1>

              <p>
                Showcase destinations and packages, manage enquiries and reach
                travellers with websites, booking solutions and digital
                marketing.
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
         02 — INTRODUCTION
    ============================================================= -->
    <section class="travelIntro">
      <div class="container">
        <div class="travelIntro-wrap">
          <div class="travelIntro-content">
            <span class="eyebrow">
              <span class="eyebrow-line"></span>
              ABOUT TRAVEL &amp; TOURISM
            </span>

            <h3>
              Make Your Travel Business
              <span>Easier To Discover &amp; Explore.</span>
            </h3>

            <p>
              Travellers often research destinations, packages and experiences
              online before deciding who to contact or book with.
            </p>

            <p>
              Your website should make destinations, itineraries, pricing,
              inclusions, experiences and travel information easy to explore.
            </p>

            <div class="travelIntro-list">
              <div class="travelIntro-item">
                <h4>Destinations</h4>
                <p>
                  Showcase places with images, highlights and useful travel
                  information.
                </p>
              </div>

              <div class="travelIntro-item">
                <h4>Tour Packages</h4>
                <p>
                  Present packages with pricing, inclusions and clear trip
                  details.
                </p>
              </div>

              <div class="travelIntro-item">
                <h4>Itineraries</h4>
                <p>
                  Help travellers understand their complete journey clearly.
                </p>
              </div>

              <div class="travelIntro-item">
                <h4>Enquiries &amp; Booking</h4>
                <p>
                  Make it simple for visitors to enquire or take the next
                  step.
                </p>
              </div>
            </div>

            <button type="button" class="btn btn-outline-black" data-model=".enquire-pop">
              Discuss Your Travel Website <i>↗</i>
            </button>
          </div>

          <div class="travelIntro-album">
            <div class="travelIntro-photo travelIntro-photo-one">
              <img src="assets/images/comman/travel1.png" alt="Mountain travel destination" loading="lazy" />
              <span>DESTINATIONS</span>
            </div>

            <div class="travelIntro-photo travelIntro-photo-two">
              <img src="assets/images/comman/travel2.png" alt="Beach travel destination" loading="lazy" />
              <span>PACKAGES</span>
            </div>

            <div class="travelIntro-photo travelIntro-photo-three">
              <img src="assets/images/comman/travel3.png" alt="Travel destination in Japan" loading="lazy" />
              <span>ITINERARIES</span>
            </div>

            <div class="travelIntro-photo travelIntro-photo-four">
              <img src="assets/images/comman/travel4.png" alt="Scenic travel experience" loading="lazy" />
              <span>TRAVEL ENQUIRIES</span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ============================================================
         03 — WHY TRAVEL BUSINESSES NEED A WEBSITE
    ============================================================= -->
    <section class="travelValue">
      <div class="container">
        <div class="heading">
          <span class="eyebrow">
            <span class="eyebrow-line"></span>
            WHY TRAVEL NEEDS A WEBSITE
          </span>

          <h3>
            Turn Travel Searches
            <span>Into Real Enquiries.</span>
          </h3>

          <p>
            A professional travel website helps people discover your business,
            understand your offering and take the next step with confidence.
          </p>
        </div>

        <div class="travelValue-main">
          <div class="travelValue-visual">
            <div class="travelValue-image">
              <img src="assets/images/comman/why-travel.png" alt="Traveller exploring a scenic destination"
                loading="lazy" />

              <div class="travelValue-image-overlay"></div>

              <div class="travelValue-image-caption">
                <span>THE TRAVELLER JOURNEY</span>
                <strong>Discover. Explore. Enquire.</strong>
              </div>
            </div>

            <div class="travelValue-stamp">
              <svg viewBox="0 0 100 100" fill="none">
                <circle cx="50" cy="50" r="45" stroke="currentColor" stroke-width="1" stroke-dasharray="3 4" />
                <path d="M50 25V50L66 59" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                  stroke-linejoin="round" />
              </svg>

              <span>
                ALWAYS<br />
                OPEN
              </span>
            </div>
          </div>

          <div class="travelValue-journey">
            <div class="travelValue-step">
              <div class="travelValue-step-icon">
                <svg viewBox="0 0 24 24" fill="none">
                  <circle cx="11" cy="11" r="6.5" stroke="currentColor" stroke-width="1.7" />
                  <path d="M16 16L20 20" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" />
                </svg>
              </div>

              <div class="travelValue-step-content">
                <h4>Reach More Travellers</h4>
                <p>
                  Give people a professional place to discover your travel
                  business while researching destinations and trips.
                </p>
              </div>
            </div>

            <div class="travelValue-connector">
              <span></span>
            </div>

            <div class="travelValue-step">
              <div class="travelValue-step-icon">
                <svg viewBox="0 0 24 24" fill="none">
                  <path d="M4 5H20V17H4V5Z" stroke="currentColor" stroke-width="1.7" stroke-linejoin="round" />
                  <path d="M8 9H16" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" />
                  <path d="M8 13H13" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" />
                  <path d="M8 20H16" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" />
                </svg>
              </div>

              <div class="travelValue-step-content">
                <h4>Showcase Destinations Clearly</h4>
                <p>
                  Present destinations, packages, itineraries, inclusions and
                  travel experiences in an easy-to-explore format.
                </p>
              </div>
            </div>

            <div class="travelValue-connector">
              <span></span>
            </div>

            <div class="travelValue-step">
              <div class="travelValue-step-icon">
                <svg viewBox="0 0 24 24" fill="none">
                  <path d="M12 3L19 6V11C19 15.5 16.1 18.8 12 21C7.9 18.8 5 15.5 5 11V6L12 3Z" stroke="currentColor"
                    stroke-width="1.7" stroke-linejoin="round" />
                  <path d="M9 12L11.2 14.2L15.5 10" stroke="currentColor" stroke-width="1.7" stroke-linecap="round"
                    stroke-linejoin="round" />
                </svg>
              </div>

              <div class="travelValue-step-content">
                <h4>Build Traveller Trust</h4>
                <p>
                  Bring your reviews, photos, business information and travel
                  details together before visitors contact you.
                </p>
              </div>
            </div>

            <div class="travelValue-connector">
              <span></span>
            </div>

            <div class="travelValue-step">
              <div class="travelValue-step-icon">
                <svg viewBox="0 0 24 24" fill="none">
                  <path d="M4 6H20V17H4V6Z" stroke="currentColor" stroke-width="1.7" stroke-linejoin="round" />
                  <path d="M8 20H16" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" />
                  <path d="M12 17V20" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" />
                  <path d="M8 11H16" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" />
                </svg>
              </div>

              <div class="travelValue-step-content">
                <h4>Generate More Enquiries</h4>
                <p>
                  Give visitors clear ways to ask questions, request quotes
                  and start planning their next journey with you.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ============================================================
         04 — TRAVEL WEBSITE ESSENTIALS
    ============================================================= -->
    <section class="travelDeliver">
      <div class="container">
        <div class="heading">
          <span class="eyebrow">
            <span class="eyebrow-line"></span>
            TRAVEL WEBSITE ESSENTIALS
          </span>

          <h3>
            Help Travellers
            <span>Plan Their Next Trip.</span>
          </h3>

          <p>
            Build a clear digital experience for destinations, packages,
            itineraries, enquiries and important travel information.
          </p>
        </div>

        <div class="travelDeliver-grid">
          <article class="travelDeliver-card">
            <div class="travelDeliver-card-top">
              <span class="travelDeliver-index">01</span>

              <div class="travelDeliver-icon">
                <svg viewBox="0 0 24 24" fill="none">
                  <path d="M3 11.5L12 4L21 11.5" stroke="currentColor" stroke-width="1.7" stroke-linecap="round"
                    stroke-linejoin="round" />
                  <path d="M5.5 10.5V20H18.5V10.5" stroke="currentColor" stroke-width="1.7" stroke-linejoin="round" />
                  <path d="M9 20V14H15V20" stroke="currentColor" stroke-width="1.7" stroke-linejoin="round" />
                </svg>
              </div>
            </div>

            <div class="travelDeliver-card-content">
              <h4>Destinations &amp; Experiences</h4>
              <p>
                Showcase destinations, attractions, activities and travel
                experiences with useful information.
              </p>
            </div>
          </article>

          <article class="travelDeliver-card">
            <div class="travelDeliver-card-top">
              <span class="travelDeliver-index">02</span>

              <div class="travelDeliver-icon">
                <svg viewBox="0 0 24 24" fill="none">
                  <rect x="4" y="3" width="16" height="18" rx="2" stroke="currentColor" stroke-width="1.7" />
                  <path d="M8 8H16" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" />
                  <path d="M8 12H16" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" />
                  <path d="M8 16H13" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" />
                </svg>
              </div>
            </div>

            <div class="travelDeliver-card-content">
              <h4>Tours &amp; Packages</h4>
              <p>
                Present tour details, itineraries, inclusions, exclusions,
                pricing and travel dates clearly.
              </p>
            </div>
          </article>

          <article class="travelDeliver-card">
            <div class="travelDeliver-card-top">
              <span class="travelDeliver-index">03</span>

              <div class="travelDeliver-icon">
                <svg viewBox="0 0 24 24" fill="none">
                  <path d="M4 5H20V16H4V5Z" stroke="currentColor" stroke-width="1.7" stroke-linejoin="round" />
                  <path d="M8 20H16" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" />
                  <path d="M12 16V20" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" />
                  <path d="M8 9H16" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" />
                  <path d="M8 12H13" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" />
                </svg>
              </div>
            </div>

            <div class="travelDeliver-card-content">
              <h4>Enquiries &amp; Bookings</h4>
              <p>
                Make travel enquiries, booking requests, quote requests and
                contact options easy to find.
              </p>
            </div>
          </article>

          <article class="travelDeliver-card">
            <div class="travelDeliver-card-top">
              <span class="travelDeliver-index">04</span>

              <div class="travelDeliver-icon">
                <svg viewBox="0 0 24 24" fill="none">
                  <rect x="6" y="3" width="12" height="18" rx="2.5" stroke="currentColor" stroke-width="1.7" />
                  <path d="M9 6H15" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" />
                  <path d="M10 18H14" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" />
                </svg>
              </div>
            </div>

            <div class="travelDeliver-card-content">
              <h4>Mobile-Friendly Experience</h4>
              <p>
                Give travellers a responsive experience they can explore
                comfortably across phones, tablets and desktops.
              </p>
            </div>
          </article>

          <article class="travelDeliver-card">
            <div class="travelDeliver-card-top">
              <span class="travelDeliver-index">05</span>

              <div class="travelDeliver-icon">
                <svg viewBox="0 0 24 24" fill="none">
                  <path d="M12 3L19 6V11C19 15.5 16.1 18.8 12 21C7.9 18.8 5 15.5 5 11V6L12 3Z" stroke="currentColor"
                    stroke-width="1.7" stroke-linejoin="round" />
                  <path d="M9 12L11 14L15 10" stroke="currentColor" stroke-width="1.7" stroke-linecap="round"
                    stroke-linejoin="round" />
                </svg>
              </div>
            </div>

            <div class="travelDeliver-card-content">
              <h4>Trust &amp; Travel Information</h4>
              <p>
                Present reviews, company details, FAQs, policies and important
                travel information clearly.
              </p>
            </div>
          </article>

          <article class="travelDeliver-card">
            <div class="travelDeliver-card-top">
              <span class="travelDeliver-index">06</span>

              <div class="travelDeliver-icon">
                <svg viewBox="0 0 24 24" fill="none">
                  <path d="M4 17L10 11L14 15L20 8" stroke="currentColor" stroke-width="1.7" stroke-linecap="round"
                    stroke-linejoin="round" />
                  <path d="M15 8H20V13" stroke="currentColor" stroke-width="1.7" stroke-linecap="round"
                    stroke-linejoin="round" />
                </svg>
              </div>
            </div>

            <div class="travelDeliver-card-content">
              <h4>Ready To Grow With You</h4>
              <p>
                Add new destinations, packages, services and travel
                experiences as your business grows.
              </p>
            </div>
          </article>
        </div>
      </div>
    </section>

    <section class="ecomPackage">
      <div class="container">
        <div class="ecomPackage-inner">
          <div class="ecomPackage-content">
            <span class="ecomPackage-label">
              DIGITAL SOLUTIONS FOR TRAVEL &amp; TOURISM
            </span>

            <h3>
              Everything You Need To
              <span>Build Better Travel Experiences.</span>
            </h3>

            <p class="ecomPackage-intro">
              We build travel and tourism websites around your destinations,
              packages, experiences and business goals—from engaging travel
              websites to digital platforms that support bookings, enquiries
              and seamless traveller engagement.
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
                <label for="packageBusiness">Travel Website Type</label>

                <select id="packageBusiness" name="business_type">
                  <option value="" selected disabled>
                    Select your website type
                  </option>
                  <option value="travel-agency">Travel Agency Website</option>
                  <option value="tour-operator">Tour Operator Website</option>
                  <option value="tour-package">
                    Tour &amp; Holiday Package Website
                  </option>
                  <option value="travel-booking">
                    Travel Booking Platform
                  </option>
                  <option value="destination-website">
                    Destination Tourism Website
                  </option>
                  <option value="custom-travel">
                    Custom Travel Solution
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
    <section class="travelGrowth">
      <div class="container">
        <div class="heading">
          <span class="eyebrow">
            <span class="eyebrow-line"></span>
            DIGITAL GROWTH OUTCOMES
          </span>

          <h3>
            Build A Digital Presence That
            <span>Helps Your Travel Business Grow.</span>
          </h3>

          <p>
            A stronger digital presence can help your travel business reach
            more people, present its offering clearly and generate enquiries.
          </p>
        </div>

        <div class="travelGrowth-board">
          <div class="travelGrowth-intro">
            <div class="travelGrowth-image">
              <img src="assets/images/comman/travel-benifits.png" alt="Travel destination" />

              <div class="travelGrowth-image-overlay"></div>

              <div class="travelGrowth-image-content">
                <span>YOUR DIGITAL JOURNEY</span>

                <h4>
                  From Discovery
                  <strong>To Enquiry.</strong>
                </h4>
              </div>
            </div>
          </div>

          <div class="travelGrowth-outcomes">
            <article class="travelGrowth-point">
              <div class="travelGrowth-number">01</div>

              <div class="travelGrowth-icon">
                <svg viewBox="0 0 24 24" fill="none">
                  <circle cx="11" cy="11" r="6.5" stroke="currentColor" stroke-width="1.7" />
                  <path d="M16 16L20 20" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" />
                </svg>
              </div>

              <div class="travelGrowth-content">
                <h4>Reach More Travellers</h4>
                <p>
                  Build stronger visibility when people search for
                  destinations, trips and travel experiences.
                </p>
              </div>
            </article>

            <article class="travelGrowth-point">
              <div class="travelGrowth-number">02</div>

              <div class="travelGrowth-icon">
                <svg viewBox="0 0 24 24" fill="none">
                  <path d="M4 5H20V17H4V5Z" stroke="currentColor" stroke-width="1.7" stroke-linejoin="round" />
                  <path d="M8 9H16" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" />
                  <path d="M8 13H13" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" />
                </svg>
              </div>

              <div class="travelGrowth-content">
                <h4>Generate More Enquiries</h4>
                <p>
                  Give travellers simple ways to ask questions, request quotes
                  and start planning their trips.
                </p>
              </div>
            </article>

            <article class="travelGrowth-point">
              <div class="travelGrowth-number">03</div>

              <div class="travelGrowth-icon">
                <svg viewBox="0 0 24 24" fill="none">
                  <path d="M4 17L10 11L14 15L20 8" stroke="currentColor" stroke-width="1.7" stroke-linecap="round"
                    stroke-linejoin="round" />
                  <path d="M15 8H20V13" stroke="currentColor" stroke-width="1.7" stroke-linecap="round"
                    stroke-linejoin="round" />
                </svg>
              </div>

              <div class="travelGrowth-content">
                <h4>Promote More Destinations</h4>
                <p>
                  Give destinations and travel experiences a clear place to be
                  discovered and explored.
                </p>
              </div>
            </article>

            <article class="travelGrowth-point">
              <div class="travelGrowth-number">04</div>

              <div class="travelGrowth-icon">
                <svg viewBox="0 0 24 24" fill="none">
                  <rect x="4" y="5" width="16" height="14" rx="2" stroke="currentColor" stroke-width="1.7" />
                  <path d="M8 9H16" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" />
                  <path d="M8 13H13" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" />
                </svg>
              </div>

              <div class="travelGrowth-content">
                <h4>Increase Package Visibility</h4>
                <p>
                  Present packages, itineraries, pricing and inclusions in a
                  clearer format for travellers.
                </p>
              </div>
            </article>

            <article class="travelGrowth-point">
              <div class="travelGrowth-number">05</div>

              <div class="travelGrowth-icon">
                <svg viewBox="0 0 24 24" fill="none">
                  <path d="M12 3L19 6V11C19 15.5 16.1 18.8 12 21C7.9 18.8 5 15.5 5 11V6L12 3Z" stroke="currentColor"
                    stroke-width="1.7" stroke-linejoin="round" />
                  <path d="M9 12L11 14L15 10" stroke="currentColor" stroke-width="1.7" stroke-linecap="round"
                    stroke-linejoin="round" />
                </svg>
              </div>

              <div class="travelGrowth-content">
                <h4>Improve Traveller Experience</h4>
                <p>
                  Help visitors find important information faster and move
                  from discovery to enquiry more easily.
                </p>
              </div>
            </article>

            <article class="travelGrowth-point">
              <div class="travelGrowth-number">06</div>

              <div class="travelGrowth-icon">
                <svg viewBox="0 0 24 24" fill="none">
                  <path d="M4 17L10 11L14 15L20 8" stroke="currentColor" stroke-width="1.7" stroke-linecap="round"
                    stroke-linejoin="round" />
                  <path d="M15 8H20V13" stroke="currentColor" stroke-width="1.7" stroke-linecap="round"
                    stroke-linejoin="round" />
                </svg>
              </div>

              <div class="travelGrowth-content">
                <h4>Track Digital Performance</h4>
                <p>
                  Understand visitor activity and use digital insights to
                  improve your travel presence.
                </p>
              </div>
            </article>
          </div>
        </div>
      </div>
    </section>

    <section class="ngoTypes" id="ngoSolutions">
      <div class="container">
        <div class="heading">
          <span class="eyebrow">
            <span class="eyebrow-line"></span>
            TRAVEL &amp; TOURISM DIGITAL SOLUTIONS
          </span>

          <h3>
            Digital Solutions For <br />
            <span>Growing Travel Businesses.</span>
          </h3>

          <p>
            Digital solutions designed to help travel businesses build, reach
            and grow online.
          </p>
        </div>

        <div class="ngoTypes-grid">
          <!-- CARD 01 — FEATURED -->
          <a href="{{ route('website-design-development') }}" class="ngoTypes-card ngoTypes-card--featured">
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
          <a href="{{ route('digital-marketing') }}" class="ngoTypes-card ngoTypes-card--medium">
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
          <a href="{{ route('mobile-app-development') }}" class="ngoTypes-card ngoTypes-card--medium">
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
          <a href="{{ route('digital-branding') }}" class="ngoTypes-card ngoTypes-card--medium">
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
       08 — FAQ
  ============================================================= -->
    <section class="secN">
      <div class="container">
        <div class="heading">
          <span class="eyebrow">
            <span class="eyebrow-line"></span>
            FREQUENTLY ASKED QUESTIONS
          </span>

          <h3>
            Answers To Common
            <span>Travel Website Questions.</span>
          </h3>

          <p>
            Straight answers to common questions travel businesses ask before
            building or upgrading their website.
          </p>
        </div>

        <div class="accordion-wrapper">
          <div class="accordion-item">
            <div class="accordion-header">
              <div class="faq-question">
                <h4>What type of travel website can you build?</h4>
              </div>
              <span class="accordion-icon">+</span>
            </div>

            <div class="accordion-content">
              <p>
                We build websites for travel agencies, tour operators,
                destination businesses, holiday planners and tourism brands.
              </p>
            </div>
          </div>

          <div class="accordion-item">
            <div class="accordion-header">
              <div class="faq-question">
                <h4>Can I showcase destinations and travel packages?</h4>
              </div>
              <span class="accordion-icon">+</span>
            </div>

            <div class="accordion-content">
              <p>
                Yes. Destinations, packages, experiences, itineraries, pricing
                and travel information can be presented clearly.
              </p>
            </div>
          </div>

          <div class="accordion-item">
            <div class="accordion-header">
              <div class="faq-question">
                <h4>Can travellers enquire or request a booking?</h4>
              </div>
              <span class="accordion-icon">+</span>
            </div>

            <div class="accordion-content">
              <p>
                Yes. Enquiry forms, booking requests, quote requests,
                callbacks and WhatsApp connections can be included.
              </p>
            </div>
          </div>

          <div class="accordion-item">
            <div class="accordion-header">
              <div class="faq-question">
                <h4>
                  Can you build customised travel package functionality?
                </h4>
              </div>
              <span class="accordion-icon">+</span>
            </div>

            <div class="accordion-content">
              <p>
                Yes. Custom trip enquiries and request-a-quote functionality
                can be planned for personalised travel requirements.
              </p>
            </div>
          </div>

          <div class="accordion-item">
            <div class="accordion-header">
              <div class="faq-question">
                <h4>Can you integrate CRM or booking systems?</h4>
              </div>
              <span class="accordion-icon">+</span>
            </div>

            <div class="accordion-content">
              <p>
                CRM, booking, payment, analytics and required third-party
                integrations can be planned around your business needs.
              </p>
            </div>
          </div>

          <div class="accordion-item">
            <div class="accordion-header">
              <div class="faq-question">
                <h4>Can I add new destinations and packages later?</h4>
              </div>
              <span class="accordion-icon">+</span>
            </div>

            <div class="accordion-content">
              <p>
                Yes. Your website can be structured to add new destinations,
                packages and travel experiences as your business grows.
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
          <span class="cta-promo__eyebrow"> START YOUR TRAVEL PROJECT </span>

          <h3 class="cta-promo__heading">
            Grow Your Travel Business
            With Digital Solutions.
          </h3>

          <p class="cta-promo__sub">
            Tell us about your destinations, packages and business goals. We
            will help you create a website that makes it easier for travellers
            to discover and enquire.
          </p>

          <div class="cta-promo__actions">
            <button class="btn btn-white" data-model=".enquire-pop">
              Start Your Project <i>↗</i>
            </button>

            <a href="#travelSolutions" class="btn btn-outline-white">
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