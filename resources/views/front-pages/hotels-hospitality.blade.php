@extends('layouts.app')

@push('styles')
  <link rel="stylesheet" href="assets/sass/hospitality/hospitality.css" />
@endpush

@section('content')

  <main>
    <!-- ============================================================
           01 — BANNER
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
              <span class="eyebrow">DIGITAL SOLUTIONS FOR HOTELS &amp; HOSPITALITY</span>

              <h1>Turn Online Visitors Into Direct Guest Enquiries.</h1>

              <p>
                Build your hotel's digital presence with a professional
                website, booking solutions, guest-focused experiences and
                targeted digital marketing.
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
           02 — ABOUT HOTELS & HOSPITALITY
      ============================================================= -->
    <section class="hotelIntro">
      <div class="container">
        <div class="hotelIntro-top">
          <div class="heading">
            <span class="eyebrow">
              <span class="eyebrow-line"></span>
              ABOUT HOTELS &amp; HOSPITALITY
            </span>

            <h3>
              Make Your Property Easier To
              <span>Discover, Explore &amp; Book.</span>
            </h3>
          </div>

          <div class="hotelIntro-description">
            <p>
              Guests increasingly research hotels and hospitality businesses
              online before making a booking or enquiry. Your website gives
              them one place to understand your property before they decide.
            </p>

            <p>
              Showcase your rooms, amenities, location, experiences, dining,
              facilities, policies and booking options clearly so guests can
              explore your property with confidence.
            </p>
          </div>
        </div>

        <div class="hotelIntro-content">
          <div class="hotelIntro-item">
            <div class="hotelIntro-icon">
              <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                <path d="M3 21H21" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" />
                <path d="M5 21V5.5L12 3L19 5.5V21" stroke="currentColor" stroke-width="1.7" stroke-linejoin="round" />
                <path d="M8 8H9.5M14.5 8H16M8 12H9.5M14.5 12H16" stroke="currentColor" stroke-width="1.7"
                  stroke-linecap="round" />
                <path d="M10 21V16H14V21" stroke="currentColor" stroke-width="1.7" stroke-linejoin="round" />
              </svg>
            </div>

            <div class="hotelIntro-item-content">
              <h4>Present Your Property</h4>

              <p>
                Showcase your hotel, rooms, facilities, location and property
                information clearly.
              </p>
            </div>
          </div>

          <div class="hotelIntro-item">
            <div class="hotelIntro-icon">
              <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                <path d="M12 3V6" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" />
                <path d="M12 18V21" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" />
                <path d="M3 12H6" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" />
                <path d="M18 12H21" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" />
                <path d="M5.64 5.64L7.76 7.76" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" />
                <path d="M16.24 16.24L18.36 18.36" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" />
                <path d="M18.36 5.64L16.24 7.76" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" />
                <path d="M7.76 16.24L5.64 18.36" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" />
                <circle cx="12" cy="12" r="3.2" stroke="currentColor" stroke-width="1.7" />
              </svg>
            </div>

            <div class="hotelIntro-item-content">
              <h4>Show The Experience</h4>

              <p>
                Highlight dining, spa, activities, events, amenities and
                experiences guests can enjoy.
              </p>
            </div>
          </div>

          <div class="hotelIntro-item">
            <div class="hotelIntro-icon">
              <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                <rect x="4" y="5" width="16" height="16" rx="2" stroke="currentColor" stroke-width="1.7" />
                <path d="M8 3V7" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" />
                <path d="M16 3V7" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" />
                <path d="M4 10H20" stroke="currentColor" stroke-width="1.7" />
                <path d="M8 14H10M14 14H16M8 17H10" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" />
              </svg>
            </div>

            <div class="hotelIntro-item-content">
              <h4>Make Booking Easy</h4>

              <p>
                Give guests a clear path to enquire, contact your property or
                move towards a reservation.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ============================================================
           03 — WHY HOTELS & HOSPITALITY BUSINESSES NEED A WEBSITE
      ============================================================= -->
    <section class="hotelWhy">
      <div class="container">
        <div class="heading">
          <span class="eyebrow">
            <span class="eyebrow-line"></span>
            WHY HOTELS NEED A WEBSITE
          </span>

          <h3>
            Turn Online Searches Into <br />
            <span>More Direct Guest Enquiries.</span>
          </h3>

          <p>
            Guests want to see your property, understand the experience and
            know what to expect before they book.
          </p>
        </div>

        <div class="hotelWhy-main">
          <div class="hotelWhy-visual">
            <img src="assets/images/comman/hotel-about.png" alt="Luxury hotel with swimming pool" loading="lazy" />

            <div class="hotelWhy-visual-info">
              <span class="hotelWhy-visual-dot"></span>

              <div>
                <strong>Your Property</strong>
                <span>Deserves To Be Discovered</span>
              </div>
            </div>
          </div>

          <div class="hotelWhy-content">
            <div class="hotelWhy-intro">
              <p class="hotelWhy-intro-title">
                Guests often explore a property online before making a booking
                or enquiry.
              </p>

              <p>
                A professional website brings your rooms, amenities,
                experiences, location and booking options together in one
                clear guest experience.
              </p>
            </div>

            <div class="hotelWhy-points">
              <div class="hotelWhy-point">
                <div class="hotelWhy-icon">
                  <svg viewBox="0 0 24 24" fill="none">
                    <path d="M4 20V8.5L12 4L20 8.5V20" stroke="currentColor" stroke-width="1.7" stroke-linecap="round"
                      stroke-linejoin="round" />
                    <path d="M8 20V14H16V20" stroke="currentColor" stroke-width="1.7" stroke-linecap="round"
                      stroke-linejoin="round" />
                  </svg>
                </div>

                <div class="hotelWhy-point-content">
                  <span>VISIBILITY</span>
                  <h4>Reach More Guests</h4>
                  <p>
                    Help more travellers discover your property when they
                    search for places to stay.
                  </p>
                </div>
              </div>

              <div class="hotelWhy-point">
                <div class="hotelWhy-icon">
                  <svg viewBox="0 0 24 24" fill="none">
                    <path d="M12 3L13.8 9.2L20 11L13.8 12.8L12 19L10.2 12.8L4 11L10.2 9.2L12 3Z" stroke="currentColor"
                      stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                </div>

                <div class="hotelWhy-point-content">
                  <span>PROPERTY</span>
                  <h4>Showcase Rooms &amp; Amenities</h4>
                  <p>
                    Present rooms, facilities, amenities and property
                    highlights in one place.
                  </p>
                </div>
              </div>

              <div class="hotelWhy-point">
                <div class="hotelWhy-icon">
                  <svg viewBox="0 0 24 24" fill="none">
                    <rect x="4" y="5" width="16" height="15" rx="2" stroke="currentColor" stroke-width="1.7" />
                    <path d="M8 3V7M16 3V7M4 10H20" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" />
                  </svg>
                </div>

                <div class="hotelWhy-point-content">
                  <span>TRUST</span>
                  <h4>Build Guest Trust</h4>
                  <p>
                    Give guests the information they need to understand your
                    property before choosing their stay.
                  </p>
                </div>
              </div>

              <div class="hotelWhy-point">
                <div class="hotelWhy-icon">
                  <svg viewBox="0 0 24 24" fill="none">
                    <circle cx="12" cy="12" r="9" stroke="currentColor" stroke-width="1.7" />
                    <path d="M8 12.5L10.7 15L16.5 9" stroke="currentColor" stroke-width="1.7" stroke-linecap="round"
                      stroke-linejoin="round" />
                  </svg>
                </div>

                <div class="hotelWhy-point-content">
                  <span>ENQUIRIES</span>
                  <h4>Generate Booking Opportunities</h4>
                  <p>
                    Make it easier for guests to enquire, call, message or
                    request a reservation.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="hotelWhy-cta">
          <div class="hotelWhy-cta-content">
            <span class="hotelWhy-cta-label">
              <span class="hotelWhy-cta-line"></span>
              THE DIGITAL GUEST EXPERIENCE
            </span>

            <h4>
              Make Your Property Easier
              <span>To Discover &amp; Choose.</span>
            </h4>

            <p>
              Bring your property, rooms and hospitality experience together
              in one place.
            </p>
          </div>

          <div class="hotelWhy-cta-action">
            <a href="javascript:void(0)" class="btn btn-outline-black" data-model=".enquire-pop">
              Let’s Connect

              <svg viewBox="0 0 24 24" fill="none">
                <path d="M5 12H19" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" />
                <path d="M13 6L19 12L13 18" stroke="currentColor" stroke-width="1.7" stroke-linecap="round"
                  stroke-linejoin="round" />
              </svg>
            </a>
          </div>
        </div>
      </div>
    </section>

    <section class="secL">
      <div class="container">
        <div class="heading">
          <span class="eyebrow">
            <span class="eyebrow-line"></span>
            HOTEL WEBSITE ESSENTIALS
          </span>

          <h3>
            Give Guests What They Need
            <span>Before They Book.</span>
          </h3>

          <p>
            Bring your property information, guest experience and booking
            options together in one clear digital presence.
          </p>
        </div>

        <ul class="secL-list">
          <li>
            <span class="secL-icon">
              <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                <circle cx="11" cy="11" r="7" stroke="currentColor" stroke-width="1.5"></circle>
                <path d="M20 20l-3.5-3.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path>
              </svg>
            </span>

            <div>
              <h4>Property &amp; Room Details</h4>
              <p>
                Show your property, rooms, facilities, amenities and stay
                options clearly.
              </p>
            </div>
          </li>

          <li>
            <span class="secL-icon">
              <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                <path d="M4 6h16M4 12h16M4 18h10" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path>
              </svg>
            </span>

            <div>
              <h4>Dining &amp; Guest Experiences</h4>
              <p>
                Highlight dining, activities, experiences, services and
                everything guests can enjoy.
              </p>
            </div>
          </li>

          <li>
            <span class="secL-icon">
              <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                <path d="M20 15a3 3 0 01-3 3H8l-4 3V6a3 3 0 013-3h10a3 3 0 013 3v9z" stroke="currentColor"
                  stroke-width="1.5" stroke-linejoin="round"></path>
              </svg>
            </span>

            <div>
              <h4>Offers &amp; Booking Options</h4>
              <p>
                Make room offers, booking options, enquiries and important
                stay information easy to find.
              </p>
            </div>
          </li>

          <li>
            <span class="secL-icon">
              <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                <rect x="3" y="4" width="18" height="16" rx="2" stroke="currentColor" stroke-width="1.5"></rect>
                <path d="M8 2v4M16 2v4M3 10h18" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path>
              </svg>
            </span>

            <div>
              <h4>Location &amp; Contact Information</h4>
              <p>
                Help guests quickly find your location, contact details,
                policies and travel information.
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

    <section class="ecomPackage">
      <div class="container">
        <div class="ecomPackage-inner">
          <div class="ecomPackage-content">
            <span class="ecomPackage-label">
              DIGITAL SOLUTIONS FOR HOTELS &amp; HOSPITALITY
            </span>

            <h3>
              Everything You Need To
              <span>Build A Better Hospitality Experience.</span>
            </h3>

            <p class="ecomPackage-intro">
              We build hotel and hospitality websites around your rooms,
              amenities, experiences and business goals—from engaging hotel
              websites to digital platforms that support direct bookings,
              enquiries and guest engagement.
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
                <label for="packageBusiness">Hospitality Website Type</label>

                <select id="packageBusiness" name="business_type">
                  <option value="" selected disabled>
                    Select your website type
                  </option>
                  <option value="hotel-website">
                    Hotel &amp; Resort Website
                  </option>
                  <option value="hospitality-website">
                    Hospitality Business Website
                  </option>
                  <option value="booking-platform">
                    Hotel Booking Platform
                  </option>
                  <option value="restaurant-website">
                    Restaurant &amp; Dining Website
                  </option>
                  <option value="travel-stay">
                    Homestay &amp; Vacation Rental Website
                  </option>
                  <option value="custom-hospitality">
                    Custom Hospitality Solution
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
           06 — WHAT YOUR WEBSITE CAN SHOW
      ============================================================= -->
    <section class="hotelShowcase">
      <div class="container">
        <div class="heading">
          <span class="eyebrow">
            <span class="eyebrow-line"></span>
            DIGITAL GROWTH OUTCOMES
          </span>
          <h3>
            Build A Presence That
            <span>Attracts More Guests.</span>
          </h3>
          <p>
            Turn your property information and guest experience into a digital
            presence built to support visibility and enquiries.
          </p>
        </div>

        <div class="hotelShowcase-grid">
          <div class="hotelShowcase-item">
            <div class="hotelShowcase-icon">
              <svg viewBox="0 0 24 24" fill="none">
                <path d="M4 18V10C4 9.45 4.45 9 5 9H19C19.55 9 20 9.45 20 10V18" stroke="currentColor" stroke-width="1.7"
                  stroke-linecap="round" />
                <path d="M4 14H20" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" />
                <path d="M3 18H21" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" />
              </svg>
            </div>

            <div class="hotelShowcase-item-content">
              <h4>Reach More Guests</h4>
              <p>
                Make your property easier to discover across digital channels.
              </p>
            </div>
          </div>

          <div class="hotelShowcase-item">
            <div class="hotelShowcase-icon">
              <svg viewBox="0 0 24 24" fill="none">
                <path d="M4 20V8L12 4L20 8V20" stroke="currentColor" stroke-width="1.7" stroke-linejoin="round" />
                <path d="M8 20V14H16V20" stroke="currentColor" stroke-width="1.7" stroke-linejoin="round" />
              </svg>
            </div>

            <div class="hotelShowcase-item-content">
              <h4>Generate More Booking Enquiries</h4>
              <p>
                Give guests simple ways to enquire and move towards a
                reservation.
              </p>
            </div>
          </div>

          <div class="hotelShowcase-item">
            <div class="hotelShowcase-icon">
              <svg viewBox="0 0 24 24" fill="none">
                <path
                  d="M12 4L14.35 8.76L19.6 9.52L15.8 13.23L16.7 18.47L12 16L7.3 18.47L8.2 13.23L4.4 9.52L9.65 8.76L12 4Z"
                  stroke="currentColor" stroke-width="1.7" stroke-linejoin="round" />
              </svg>
            </div>

            <div class="hotelShowcase-item-content">
              <h4>Increase Direct Enquiry Opportunities</h4>
              <p>
                Make direct contact, WhatsApp and reservation requests easier.
              </p>
            </div>
          </div>

          <div class="hotelShowcase-item">
            <div class="hotelShowcase-icon">
              <svg viewBox="0 0 24 24" fill="none">
                <path d="M20 10.5C20 15.5 12 21 12 21C12 21 4 15.5 4 10.5C4 6.91 7.58 4 12 4C16.42 4 20 6.91 20 10.5Z"
                  stroke="currentColor" stroke-width="1.7" stroke-linejoin="round" />
                <circle cx="12" cy="10.5" r="2.5" stroke="currentColor" stroke-width="1.7" />
              </svg>
            </div>

            <div class="hotelShowcase-item-content">
              <h4>Showcase More Hospitality Services</h4>
              <p>
                Promote rooms, dining, spa, experiences, packages and
                facilities.
              </p>
            </div>
          </div>

          <div class="hotelShowcase-item">
            <div class="hotelShowcase-icon">
              <svg viewBox="0 0 24 24" fill="none">
                <circle cx="12" cy="12" r="9" stroke="currentColor" stroke-width="1.7" />
                <path d="M12 10V16" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" />
                <path d="M12 7.5H12.01" stroke="currentColor" stroke-width="2.3" stroke-linecap="round" />
              </svg>
            </div>

            <div class="hotelShowcase-item-content">
              <h4>Improve Guest Experience</h4>
              <p>
                Help guests find important property and stay information
                quickly.
              </p>
            </div>
          </div>

          <div class="hotelShowcase-item">
            <div class="hotelShowcase-icon">
              <svg viewBox="0 0 24 24" fill="none">
                <path d="M20 12L12 20L4 12V5C4 4.45 4.45 4 5 4H12L20 12Z" stroke="currentColor" stroke-width="1.7"
                  stroke-linejoin="round" />
                <circle cx="8" cy="8" r="1.3" stroke="currentColor" stroke-width="1.5" />
              </svg>
            </div>

            <div class="hotelShowcase-item-content">
              <h4>Track &amp; Improve Digital Performance</h4>
              <p>
                Understand digital activity and improve your guest acquisition
                journey.
              </p>
            </div>
          </div>

          <div class="hotelShowcase-item">
            <div class="hotelShowcase-icon">
              <svg viewBox="0 0 24 24" fill="none">
                <path d="M4 18L9 13L13 16L20 8" stroke="currentColor" stroke-width="1.7" stroke-linecap="round"
                  stroke-linejoin="round" />
                <path d="M16 8H20V12" stroke="currentColor" stroke-width="1.7" stroke-linecap="round"
                  stroke-linejoin="round" />
              </svg>
            </div>

            <div class="hotelShowcase-item-content">
              <h4>Grow Your Digital Reach</h4>
              <p>
                Build a stronger online presence for your property and
                services.
              </p>
            </div>
          </div>

          <div class="hotelShowcase-item hotelShowcase-item-highlight">
            <div class="hotelShowcase-icon">
              <svg viewBox="0 0 24 24" fill="none">
                <rect x="4" y="5" width="16" height="15" rx="2" stroke="currentColor" stroke-width="1.7" />
                <path d="M8 3V7M16 3V7M4 10H20" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" />
                <path d="M8 14H10M14 14H16M8 17H10" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" />
              </svg>
            </div>

            <div class="hotelShowcase-item-content">
              <h4>Support Direct Bookings</h4>
              <p>
                Create a clear digital path from property discovery to
                enquiry.
              </p>
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
            HOSPITALITY DIGITAL SOLUTIONS
          </span>

          <h3>
            Digital Solutions For
            <span>Growing Hospitality Brands.</span>
          </h3>

          <p>
            Digital solutions designed to help hospitality businesses build,
            reach and grow online.
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
    @include('partials.page-faqs', [
      'eyebrow' => 'FREQUENTLY ASKED QUESTIONS',
      'title' => 'Answers To Common Hotel &amp; <span>Hospitality Website Questions.</span>',
      'intro' => 'Straight answers to common questions hotel and hospitality businesses ask before building a website.',
    ])

    <!-- ============================================================
           09 — FINAL CTA
      ============================================================= -->
    <div class="container">
      <div class="cta-promo">
        <div class="cta-promo__inner">
          <span class="cta-promo__eyebrow">
            START YOUR HOSPITALITY PROJECT
          </span>

          <h3 class="cta-promo__heading">
            Ready To Build A Stronger Hospitality Presence?
          </h3>

          <p class="cta-promo__sub">
            Make your property easier to discover, explore and enquire about
            with a professional digital presence built around your guests.
          </p>

          <div class="cta-promo__actions">
            <button class="btn btn-white" data-model=".enquire-pop">
              Start Your Project <i>↗</i>
            </button>

            <a href="javascript:void(0)" class="btn btn-outline-white" data-model=".enquire-pop">
              Discuss Your Requirements <i>↗</i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </main>

@endsection