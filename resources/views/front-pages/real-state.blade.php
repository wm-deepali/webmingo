@extends('layouts.app')

@push('styles')
  <link rel="stylesheet" href="assets/sass/realState/realState.css" />
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

              <span class="eyebrow">DIGITAL SOLUTIONS FOR REAL ESTATE</span>

              <h1>
                Turn Property Searches Into Business Opportunities.
              </h1>

              <p>
                From property websites and lead management to CRM, portals and digital
                campaigns—we help real estate businesses connect with serious buyers.
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
       02 — ABOUT REAL ESTATE
  ============================================================= -->
    <section class="realEstateIntro">
      <div class="container">
        <div class="heading">
          <span class="eyebrow">
            <span class="eyebrow-line"></span> ABOUT REAL ESTATE
          </span>

          <h3>Make Your Properties Easier To Discover<br /> <span>In A Digital-First Market.</span></h3>

          <p>
            Property buyers and investors increasingly begin their search online —
            expecting to discover properties, compare options, view project details,
            understand locations, check amenities, review images and enquire quickly,
            often before ever making a call. A professional website lets your business
            meet that behaviour directly: it works as a digital property showcase that
            presents your listings and projects clearly, and as a lead-generation
            channel that turns that interest into genuine, qualified enquiries for
            your team to follow up on.
          </p>
        </div>

        <div class="realEstateIntro-strip">
          <!-- YOUR BRAND -->
          <article class="realEstateIntro-card">
            <div class="realEstateIntro-card-top">
              <span class="realEstateIntro-number">YOUR BRAND</span>

              <div class="realEstateIntro-icon">
                <svg viewBox="0 0 24 24" fill="none">
                  <path d="M4 20V8l8-4 8 4v12" stroke="currentColor" stroke-width="1.6" stroke-linejoin="round" />
                  <path d="M8 20v-6h8v6" stroke="currentColor" stroke-width="1.6" />
                  <path d="M9 9h.01M15 9h.01" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                </svg>
              </div>
            </div>

            <div class="realEstateIntro-card-content">
              <h4>Be Recognised For Your Business.</h4>
              <p>Present your properties and business under your own identity, rather than someone else's platform.</p>
            </div>
          </article>

          <!-- YOUR PROPERTIES -->
          <article class="realEstateIntro-card realEstateIntro-card--featured">
            <div class="realEstateIntro-card-top">
              <span class="realEstateIntro-number">YOUR PROPERTIES</span>

              <div class="realEstateIntro-icon">
                <svg viewBox="0 0 24 24" fill="none">
                  <path d="M4 20V9l8-5 8 5v11" stroke="currentColor" stroke-width="1.6" stroke-linejoin="round" />
                  <path d="M8 20v-6h8v6" stroke="currentColor" stroke-width="1.6" />
                  <path d="M8 10h8" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" />
                </svg>
              </div>
            </div>

            <div class="realEstateIntro-card-content">
              <h4>Make Property Discovery Easier.</h4>
              <p>Organize listings with useful details, categories, locations and property information.</p>
            </div>

            <span class="realEstateIntro-card-mark">↗</span>
          </article>

          <!-- YOUR ENQUIRIES -->
          <article class="realEstateIntro-card">
            <div class="realEstateIntro-card-top">
              <span class="realEstateIntro-number">YOUR ENQUIRIES</span>

              <div class="realEstateIntro-icon">
                <svg viewBox="0 0 24 24" fill="none">
                  <path d="M5 5h14v11H9l-4 4V5Z" stroke="currentColor" stroke-width="1.6" stroke-linejoin="round" />
                  <path d="M9 9h6M9 12h4" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" />
                </svg>
              </div>
            </div>

            <div class="realEstateIntro-card-content">
              <h4>Turn Interest Into Direct Enquiries.</h4>
              <p>Give buyers and investors a direct way to connect with your team about the right property.</p>
            </div>
          </article>
        </div>

        <div class="realEstateIntro-bottom">
          <span class="realEstateIntro-bottom-line"></span>
          <p>One digital home for <strong>your brand, your properties and your customers.</strong></p>
          <span class="realEstateIntro-bottom-line"></span>
        </div>
      </div>
    </section>


    <!-- ============================================================
       03 — WHY REAL ESTATE BUSINESSES NEED A WEBSITE
  ============================================================= -->
    <section class="realEstateWhy" id="realEstateWhy">
      <div class="container">
        <div class="heading">
          <span class="eyebrow">
            <span class="eyebrow-line"></span>
            WHY REAL ESTATE BUSINESSES NEED A WEBSITE
          </span>

          <h3>Turn Property Searches Into <span>Real Business Opportunities.</span></h3>

          <p>A well-planned website makes it easier for people to discover your properties, understand what you offer and
            take the next step.</p>
        </div>

        <div class="realEstateWhy-grid">

          <div class="realEstateWhy-item">
            <div class="realEstateWhy-icon">
              <svg viewBox="0 0 24 24" fill="none">
                <circle cx="11" cy="11" r="6.5" stroke="currentColor" stroke-width="1.6" />
                <path d="m16 16 4 4" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" />
                <path d="M8.5 11h5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
              </svg>
            </div>
            <div class="realEstateWhy-content">
              <span class="realEstateWhy-label">01</span>
              <h4>Reach More Property Buyers</h4>
              <p>Make your properties and projects easier to discover beyond traditional offline channels.</p>
            </div>
          </div>

          <div class="realEstateWhy-item">
            <div class="realEstateWhy-icon">
              <svg viewBox="0 0 24 24" fill="none">
                <path d="M4 10.5 12 4l8 6.5v8.2a1.3 1.3 0 0 1-1.3 1.3H5.3A1.3 1.3 0 0 1 4 18.7v-8.2Z"
                  stroke="currentColor" stroke-width="1.6" stroke-linejoin="round" />
                <path d="M9 20v-5.5h6V20" stroke="currentColor" stroke-width="1.6" stroke-linejoin="round" />
              </svg>
            </div>
            <div class="realEstateWhy-content">
              <span class="realEstateWhy-label">02</span>
              <h4>Showcase Properties Professionally</h4>
              <p>Present property images, specifications, amenities, pricing information and project details clearly.</p>
            </div>
          </div>

          <div class="realEstateWhy-item">
            <div class="realEstateWhy-icon">
              <svg viewBox="0 0 24 24" fill="none">
                <path d="M5 6.5h14v11H5z" stroke="currentColor" stroke-width="1.6" stroke-linejoin="round" />
                <path d="m5 8 7 5 7-5" stroke="currentColor" stroke-width="1.6" stroke-linejoin="round" />
              </svg>
            </div>
            <div class="realEstateWhy-content">
              <span class="realEstateWhy-label">03</span>
              <h4>Generate Qualified Enquiries</h4>
              <p>Give interested buyers direct ways to enquire about specific properties and projects.</p>
            </div>
          </div>

          <div class="realEstateWhy-item">
            <div class="realEstateWhy-icon">
              <svg viewBox="0 0 24 24" fill="none">
                <path d="M12 3.5 19 6v5.2c0 4.4-2.8 7.6-7 9.3-4.2-1.7-7-4.9-7-9.3V6l7-2.5Z" stroke="currentColor"
                  stroke-width="1.6" stroke-linejoin="round" />
                <path d="m8.5 12 2.2 2.2 4.8-5" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                  stroke-linejoin="round" />
              </svg>
            </div>
            <div class="realEstateWhy-content">
              <span class="realEstateWhy-label">04</span>
              <h4>Build Trust Before The First Call</h4>
              <p>Showcase your projects, experience, locations, completed developments and business information
                professionally.</p>
            </div>
          </div>

          <div class="realEstateWhy-item">
            <div class="realEstateWhy-icon">
              <svg viewBox="0 0 24 24" fill="none">
                <circle cx="10.8" cy="10.8" r="6" stroke="currentColor" stroke-width="1.6" />
                <path d="m15.2 15.2 4.2 4.2" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" />
                <path d="M8.5 10.8h4.6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
              </svg>
            </div>
            <div class="realEstateWhy-content">
              <span class="realEstateWhy-label">05</span>
              <h4>Make Property Discovery Easier</h4>
              <p>Help visitors search, filter and explore properties according to their requirements.</p>
            </div>
          </div>

          <div class="realEstateWhy-item">
            <div class="realEstateWhy-icon">
              <svg viewBox="0 0 24 24" fill="none">
                <path d="M4 12a8 8 0 0114-5M20 12a8 8 0 01-14 5" stroke="currentColor" stroke-width="1.5"
                  stroke-linecap="round" />
                <path d="M18 4v4h-4M6 20v-4h4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                  stroke-linejoin="round" />
              </svg>
            </div>
            <div class="realEstateWhy-content">
              <span class="realEstateWhy-label">06</span>
              <h4>Create A Digital Sales Channel</h4>
              <p>Turn your website into a consistent source of property discovery, enquiries and customer engagement.</p>
            </div>
          </div>

        </div>

        <div class="realEstateWhy-cta">
          <div class="realEstateWhy-cta-content">
            <span class="realEstateWhy-cta-tag">YOUR DIGITAL HOME</span>

            <h4>One digital home for your brand,<br /><span> your properties and your customers.</span></h4>

            <p>Bring your properties, projects and enquiries together in one professional online experience built around
              your business.</p>
          </div>

          <div class="realEstateWhy-cta-action">
            <a href="javascript:void(0)" class="btn btn-outline-black" data-model=".enquire-pop">
              Let's Connect <i>↗</i>
            </a>
          </div>
        </div>
      </div>
    </section>


    <!-- ============================================================
       04 — WHAT YOUR REAL ESTATE WEBSITE SHOULD INCLUDE
  ============================================================= -->
    <section class="realEstateGet" id="realEstateGet">
      <div class="container">
        <div class="heading">
          <span class="eyebrow">
            <span class="eyebrow-line"></span>
            REAL ESTATE WEBSITE ESSENTIALS
          </span>

          <h3>Give Buyers Everything They Need <br /> <span>To Explore The Right Property.</span></h3>

          <p>From property discovery to enquiries, get everything you need to present your properties and connect with
            customers online.</p>
        </div>

        <div class="realEstateGet-system">
          <!-- LEFT — PROPERTY DISCOVERY -->
          <div class="realEstateGet-column realEstateGet-column-left">
            <div class="realEstateGet-item">
              <div class="realEstateGet-item-icon">
                <svg viewBox="0 0 24 24" fill="none">
                  <path d="M4 10.5 12 4l8 6.5v8.2a1.3 1.3 0 0 1-1.3 1.3H5.3A1.3 1.3 0 0 1 4 18.7v-8.2Z"
                    stroke="currentColor" stroke-width="1.6" stroke-linejoin="round" />
                  <path d="M8 12h8M8 15h5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                </svg>
              </div>
              <div class="realEstateGet-item-content">
                <h4>Property Listings &amp; Types</h4>
                <p>Residential and commercial listings organised by property type, with images and key details.</p>
              </div>
            </div>

            <div class="realEstateGet-item">
              <div class="realEstateGet-item-icon">
                <svg viewBox="0 0 24 24" fill="none">
                  <circle cx="10.8" cy="10.8" r="6" stroke="currentColor" stroke-width="1.6" />
                  <path d="m15.2 15.2 4.2 4.2" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" />
                  <path d="M8.5 10.8h4.6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                </svg>
              </div>
              <div class="realEstateGet-item-content">
                <h4>Advanced Search &amp; Filters</h4>
                <p>Help buyers narrow properties by price, budget and location-based search.</p>
              </div>
            </div>

            <div class="realEstateGet-item">
              <div class="realEstateGet-item-icon">
                <svg viewBox="0 0 24 24" fill="none">
                  <rect x="4" y="4" width="16" height="16" rx="2" stroke="currentColor" stroke-width="1.6" />
                  <path d="M7 15.5 10 12l2.2 2.2 2.4-2.7 2.4 2.8" stroke="currentColor" stroke-width="1.5"
                    stroke-linecap="round" stroke-linejoin="round" />
                </svg>
              </div>
              <div class="realEstateGet-item-content">
                <h4>Property Detail Pages</h4>
                <p>Floor plans, images, galleries, amenities and specifications presented clearly.</p>
              </div>
            </div>

            <div class="realEstateGet-item">
              <div class="realEstateGet-item-icon">
                <svg viewBox="0 0 24 24" fill="none">
                  <path d="M5 6.5h14v11H5z" stroke="currentColor" stroke-width="1.6" stroke-linejoin="round" />
                  <path d="m5 8 7 5 7-5" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round" />
                </svg>
              </div>
              <div class="realEstateGet-item-content">
                <h4>Property Enquiry Forms</h4>
                <p>Make it easy for prospects to raise an enquiry on any listing.</p>
              </div>
            </div>
          </div>

          <!-- CENTER EXPERIENCE -->
          <div class="realEstateGet-core">
            <div class="realEstateGet-core-orbit realEstateGet-core-orbit-one"></div>
            <div class="realEstateGet-core-orbit realEstateGet-core-orbit-two"></div>

            <div class="realEstateGet-core-card">
              <div class="realEstateGet-core-top">
                <span class="realEstateGet-core-status">
                  <i></i>
                  DIGITAL PROPERTY EXPERIENCE
                </span>

                <span class="realEstateGet-core-menu">
                  <i></i><i></i><i></i>
                </span>
              </div>

              <div class="realEstateGet-property">
                <div class="realEstateGet-property-image">
                  <img src="assets/images/comman/reakl_about.png" alt="Modern property" />
                </div>

                <div class="realEstateGet-property-info">
                  <span class="realEstateGet-property-label">FEATURED PROPERTY</span>

                  <h4>Modern Living,<span>Designed For You.</span></h4>

                  <div class="realEstateGet-property-meta">
                    <span>
                      <svg viewBox="0 0 24 24" fill="none">
                        <path d="M12 21s7-6.1 7-11a7 7 0 1 0-14 0c0 4.9 7 11 7 11Z" stroke="currentColor"
                          stroke-width="1.5" />
                        <circle cx="12" cy="10" r="2.2" stroke="currentColor" stroke-width="1.5" />
                      </svg>
                      Gurugram
                    </span>

                    <span>
                      <svg viewBox="0 0 24 24" fill="none">
                        <path d="M4 19V7.5L12 4l8 3.5V19" stroke="currentColor" stroke-width="1.5"
                          stroke-linejoin="round" />
                        <path d="M8 19v-5h8v5" stroke="currentColor" stroke-width="1.5" />
                      </svg>
                      3 BHK
                    </span>
                  </div>

                  <div class="realEstateGet-property-bottom">
                    <strong>₹1.85 Cr</strong>
                    <a href="javascript:void(0)">View Property <span>↗</span></a>
                  </div>
                </div>
              </div>

              <div class="realEstateGet-core-footer">
                <span><i></i> PROPERTY DISCOVERY</span>
                <span>ENQUIRY READY</span>
              </div>
            </div>

            <div class="realEstateGet-core-label">
              <span>ONE CONNECTED EXPERIENCE</span>
              <strong>Discover. Explore. Enquire.</strong>
            </div>
          </div>

          <!-- RIGHT — PROJECT INFO & LEAD MANAGEMENT -->
          <div class="realEstateGet-column realEstateGet-column-right">
            <div class="realEstateGet-item">
              <div class="realEstateGet-item-icon">
                <svg viewBox="0 0 24 24" fill="none">
                  <path d="M12 20s7-5.2 7-10.2a7 7 0 1 0-14 0C5 14.8 12 20 12 20Z" stroke="currentColor"
                    stroke-width="1.6" stroke-linejoin="round" />
                  <circle cx="12" cy="9.8" r="2.2" stroke="currentColor" stroke-width="1.5" />
                </svg>
              </div>
              <div class="realEstateGet-item-content">
                <h4>Location &amp; Maps</h4>
                <p>Show property locations, nearby areas and site visit points clearly.</p>
              </div>
            </div>

            <div class="realEstateGet-item">
              <div class="realEstateGet-item-icon">
                <svg viewBox="0 0 24 24" fill="none">
                  <circle cx="12" cy="8" r="3" stroke="currentColor" stroke-width="1.6" />
                  <path d="M5 20c.8-3.6 3.2-5.5 7-5.5s6.2 1.9 7 5.5" stroke="currentColor" stroke-width="1.6"
                    stroke-linecap="round" />
                  <path d="M17 5.5a3 3 0 0 1 0 5.2" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" />
                </svg>
              </div>
              <div class="realEstateGet-item-content">
                <h4>Agent &amp; Developer Profiles</h4>
                <p>Introduce your agents, brokers and developer credentials.</p>
              </div>
            </div>

            <div class="realEstateGet-item">
              <div class="realEstateGet-item-icon">
                <svg viewBox="0 0 24 24" fill="none">
                  <path d="M4 19V8l8-4 8 4v11" stroke="currentColor" stroke-width="1.6" stroke-linejoin="round" />
                  <path d="M8 19v-5h8v5M8 9h.01M12 9h.01M16 9h.01" stroke="currentColor" stroke-width="1.6"
                    stroke-linecap="round" />
                </svg>
              </div>
              <div class="realEstateGet-item-content">
                <h4>Project Pages &amp; Status</h4>
                <p>Showcase project status, amenities, plans and galleries.</p>
              </div>
            </div>

            <div class="realEstateGet-item">
              <div class="realEstateGet-item-icon">
                <svg viewBox="0 0 24 24" fill="none">
                  <circle cx="6.5" cy="12" r="2.5" stroke="currentColor" stroke-width="1.6" />
                  <circle cx="17.5" cy="6.5" r="2.5" stroke="currentColor" stroke-width="1.6" />
                  <circle cx="17.5" cy="17.5" r="2.5" stroke="currentColor" stroke-width="1.6" />
                  <path d="m8.8 10.8 6.3-3.1M8.8 13.2l6.3 3.1" stroke="currentColor" stroke-width="1.5"
                    stroke-linecap="round" />
                </svg>
              </div>
              <div class="realEstateGet-item-content">
                <h4>WhatsApp &amp; CRM Integration</h4>
                <p>Connect site-visit requests, call backs and CRM lead management.</p>
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
              DIGITAL SOLUTIONS FOR REAL ESTATE
            </span>

            <h3>
              Everything You Need To
              <span>Build A Better Real Estate Experience.</span>
            </h3>

            <p class="ecomPackage-intro">
              We build real estate websites around your properties, listings,
              buyers, agents and business goals—from property websites to complete
              real estate platforms with lead-focused experiences.
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
                <label for="packageBusiness">Real Estate Website Type</label>

                <select id="packageBusiness" name="business_type">
                  <option value="" selected disabled>
                    Select your website type
                  </option>
                  <option value="real-estate-business">
                    Real Estate Business Website
                  </option>
                  <option value="property-listing">
                    Property Listing Website
                  </option>
                  <option value="property-portal">
                    Property Portal
                  </option>
                  <option value="property-crm">
                    Property CRM
                  </option>
                  <option value="channel-partner">
                    Channel Partner Portal
                  </option>
                  <option value="custom-real-estate">
                    Custom Real Estate Platform
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
          <h3>Build A Digital Presence That <br /><span> Helps Your Property Business Grow.</span></h3>
          <p>Outcomes we focus on — not just website features — built around how your property business actually grows.
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
              <h4>Reach More Property Buyers</h4>
              <p>Expand your visibility and put your properties in front of more relevant audiences.</p>
            </div>
          </li>

          <li>
            <span class="secL-icon">
              <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                <path d="M5 6.5h14v11H5z" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round" />
                <path d="m5 8 7 5 7-5" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round" />
              </svg>
            </span>
            <div>
              <h4>Generate Qualified Property Enquiries</h4>
              <p>Create clearer journeys that help interested buyers contact your business about specific properties.</p>
            </div>
          </li>

          <li>
            <span class="secL-icon">
              <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                <circle cx="6" cy="12" r="2.6" stroke="currentColor" stroke-width="1.5" />
                <circle cx="18" cy="6" r="2.6" stroke="currentColor" stroke-width="1.5" />
                <circle cx="18" cy="18" r="2.6" stroke="currentColor" stroke-width="1.5" />
                <path d="M8.3 10.8L15.7 7.2" stroke="currentColor" stroke-width="1.5" />
                <path d="M8.3 13.2l7.4 3.6" stroke="currentColor" stroke-width="1.5" />
              </svg>
            </span>
            <div>
              <h4>Improve Lead Management</h4>
              <p>Connect website enquiries with CRM, WhatsApp and other lead-management tools where required.</p>
            </div>
          </li>

          <li>
            <span class="secL-icon">
              <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                <circle cx="11" cy="11" r="6.5" stroke="currentColor" stroke-width="1.5" />
                <path d="m16 16 4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
              </svg>
            </span>
            <div>
              <h4>Improve Customer Experience</h4>
              <p>Make it easier for buyers to search, compare and understand properties before making contact.</p>
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
            REAL ESTATE DIGITAL SOLUTIONS
          </span>

          <h3>
            Digital Solutions For <br />
            <span>Growing Property Businesses.</span>
          </h3>

          <p>
            From building your property website to improving visibility and brand presence, we create digital solutions
            designed around your real estate business.
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
      'title' => 'Answers To Common <br/><span>Real Estate Website Questions.</span>',
      'intro' => 'Straight answers to common questions property businesses ask before building or upgrading their website.',
    ])
    
    <!-- ============================================================
       09 — FINAL CTA
  ============================================================= -->
    <div class="container">
      <div class="cta-promo">
        <div class="cta-promo__inner">
          <span class="cta-promo__eyebrow">START YOUR REAL ESTATE PROJECT</span>

          <h3 class="cta-promo__heading">
            Ready To Build A Stronger<br />
            Property Business Online?
          </h3>

          <p class="cta-promo__sub">
            Let's turn your properties, projects and customer journey into a
            professional digital experience designed around real estate requirements.
          </p>

          <div class="cta-promo__actions">
            <button class="btn btn-white" data-model=".enquire-pop">
              Start Your Project <i>↗</i>
            </button>

            <a href="#realEstateSolutions" class="btn btn-outline-white">
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