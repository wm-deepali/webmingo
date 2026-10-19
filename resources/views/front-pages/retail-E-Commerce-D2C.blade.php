@extends('layouts.app')

@push('styles')
  <link rel="stylesheet" href="assets/sass/retail-eCommerce/retail-eCommerce.css" />
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
              <span class="eyebrow">DIGITAL SOLUTIONS FOR RETAIL &amp; D2C</span>

              <h1>Take Your Products Beyond the Storefront.</h1>

              <p>
                Build your online store, streamline commerce operations and
                reach more customers with technology and digital marketing
                built for retail growth.
              </p>

              <div class="banner-actions">
                <a href="javascript:void(0)" class="btn btn-outline-white">
                  Chat on WhatsApp
                  <i>↗</i>
                </a>

                <button data-model=".enquire-pop" class="btn btn-white">
                  Discuss Your E-Commerce Growth
                  <i>↗</i>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ============================================================
         02 — ABOUT RETAIL, E-COMMERCE & D2C
    ============================================================= -->
    <section class="retailIntro">
      <div class="container">
        <div class="retailIntro-head">
          <div class="retailIntro-head-media">
            <img src="assets/images/comman/retal-about.png" alt="Retail and D2C product packaging" loading="lazy" />
          </div>

          <div class="retailIntro-head-copy">
            <span class="eyebrow">
              <span class="eyebrow-line"></span>
              RETAIL, E-COMMERCE &amp; D2C
            </span>

            <h2>
              Build A Digital Storefront
              <span>That Works As Hard As Your Business.</span>
            </h2>

            <p>
              Today's retail and D2C customers rarely buy without researching
              first. They discover products online, compare pricing, check
              reviews, confirm availability and look up delivery details
              before deciding where to buy. For Retail, E-Commerce &amp; D2C
              businesses, a website is no longer just an online catalogue —
              it's where product discovery turns into real sales. A well-built
              digital storefront helps customers explore your range, builds
              customer trust in your brand, makes it easy to raise enquiries
              or complete purchases, and keeps them coming back for repeat
              purchases — while extending your digital reach far beyond your
              existing customer base.
            </p>
          </div>
        </div>

        <div class="retailIntro-grid">
          <div class="retailIntro-item">
            <span class="retailIntro-icon">
              <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                <path d="M3 9l1-5h16l1 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                  stroke-linejoin="round" />
                <path d="M4 9v10a1 1 0 001 1h14a1 1 0 001-1V9" stroke="currentColor" stroke-width="1.5"
                  stroke-linecap="round" stroke-linejoin="round" />
                <path d="M9 13a3 3 0 006 0" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
              </svg>
            </span>
            <div class="retailIntro-copy">
              <h4>Product Discovery</h4>
              <p>
                Products, categories and collections presented so customers
                can browse and find what they need quickly.
              </p>
            </div>
          </div>

          <div class="retailIntro-item">
            <span class="retailIntro-icon">
              <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                <circle cx="9" cy="20" r="1.4" stroke="currentColor" stroke-width="1.5" />
                <circle cx="18" cy="20" r="1.4" stroke="currentColor" stroke-width="1.5" />
                <path d="M2 3h2l2.2 11.4a2 2 0 002 1.6h8.6a2 2 0 002-1.6L21 7H5.2" stroke="currentColor"
                  stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
              </svg>
            </span>
            <div class="retailIntro-copy">
              <h4>Online Sales</h4>
              <p>
                A clear path from product page to cart, checkout and confirmed
                order — with no confusion in between.
              </p>
            </div>
          </div>

          <div class="retailIntro-item">
            <span class="retailIntro-icon">
              <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                <path d="M12 3l2.6 5.5 6 .8-4.4 4.2 1.1 6-5.3-2.9-5.3 2.9 1.1-6-4.4-4.2 6-.8L12 3z" stroke="currentColor"
                  stroke-width="1.5" stroke-linejoin="round" />
              </svg>
            </span>
            <div class="retailIntro-copy">
              <h4>Customer Trust</h4>
              <p>
                A professional storefront that reflects your brand and gives
                customers confidence before they buy.
              </p>
            </div>
          </div>

          <div class="retailIntro-item">
            <span class="retailIntro-icon">
              <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                <path d="M4 12a8 8 0 0114-5M20 12a8 8 0 01-14 5" stroke="currentColor" stroke-width="1.5"
                  stroke-linecap="round" />
                <path d="M18 4v4h-4M6 20v-4h4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                  stroke-linejoin="round" />
              </svg>
            </span>
            <div class="retailIntro-copy">
              <h4>Repeat Purchases &amp; Reach</h4>
              <p>
                A digital channel that captures enquiries, encourages repeat
                orders and grows your reach over time.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ============================================================
         03 — WHY RETAIL, E-COMMERCE & D2C BUSINESSES NEED A
              PROFESSIONAL WEBSITE
    ============================================================= -->
    <section class="retailWhy">
      <div class="container">
        <div class="heading">
          <span class="eyebrow">
            <span class="eyebrow-line"></span>
            WHY YOUR COMMERCE BUSINESS NEEDS A PROFESSIONAL WEBSITE
          </span>

          <h3>
            Your Website Should Do More<br />
            <span>Than Just Display Products.</span>
          </h3>

          <p>
            Business outcomes a professional commerce website brings to your
            brand.
          </p>
        </div>

        <div class="retailWhy-grid">
          <!-- 01 -->
          <article class="retailWhy-card retailWhy-card--featured">
            <div class="retailWhy-top">
              <span class="retailWhy-number">01</span>
              <div class="retailWhy-icon">
                <svg viewBox="0 0 24 24" aria-hidden="true">
                  <circle cx="11" cy="11" r="6.5"></circle>
                  <path d="M16 16l4.5 4.5"></path>
                  <path d="M8.5 11h5"></path>
                  <path d="M11 8.5v5"></path>
                </svg>
              </div>
            </div>
            <div class="retailWhy-content">
              <h4>Reach Customers Beyond Your Store</h4>
              <p>
                Make your products discoverable beyond your physical location
                and existing customer base.
              </p>
            </div>
          </article>

          <!-- 02 -->
          <article class="retailWhy-card">
            <div class="retailWhy-top">
              <span class="retailWhy-number">02</span>
              <div class="retailWhy-icon">
                <svg viewBox="0 0 24 24" aria-hidden="true">
                  <path d="M4 6h16v13H4z"></path>
                  <path d="M8 10h8"></path>
                  <path d="M8 14h5"></path>
                </svg>
              </div>
            </div>
            <div class="retailWhy-content">
              <h4>Showcase Products Better</h4>
              <p>
                Present products with clear information, images, pricing,
                variants and important purchase details.
              </p>
            </div>
          </article>

          <!-- 03 -->
          <article class="retailWhy-card">
            <div class="retailWhy-top">
              <span class="retailWhy-number">03</span>
              <div class="retailWhy-icon">
                <svg viewBox="0 0 24 24" aria-hidden="true">
                  <path d="m5 12 4.2 4.2L19 6.5"></path>
                </svg>
              </div>
            </div>
            <div class="retailWhy-content">
              <h4>Turn Visitors Into Customers</h4>
              <p>
                Create a smoother path from product discovery to enquiry, cart
                or purchase.
              </p>
            </div>
          </article>

          <!-- 04 -->
          <article class="retailWhy-card">
            <div class="retailWhy-top">
              <span class="retailWhy-number">04</span>
              <div class="retailWhy-icon">
                <svg viewBox="0 0 24 24" aria-hidden="true">
                  <path d="M12 3l7 3.2v5.3c0 4.6-3 8.2-7 9.5-4-1.3-7-4.9-7-9.5V6.2z"></path>
                  <path d="M9 12l2 2 4-4.2"></path>
                </svg>
              </div>
            </div>
            <div class="retailWhy-content">
              <h4>Build Brand Trust</h4>
              <p>
                Give customers a professional digital experience that reflects
                the quality of your brand.
              </p>
            </div>
          </article>

          <!-- 05 -->
          <article class="retailWhy-card retailWhy-card--soft">
            <div class="retailWhy-top">
              <span class="retailWhy-number">05</span>
              <div class="retailWhy-icon">
                <svg viewBox="0 0 24 24" aria-hidden="true">
                  <circle cx="6" cy="12" r="2.6"></circle>
                  <circle cx="18" cy="6" r="2.6"></circle>
                  <circle cx="18" cy="18" r="2.6"></circle>
                  <path d="M8.3 10.8L15.7 7.2"></path>
                  <path d="M8.3 13.2l7.4 3.6"></path>
                </svg>
              </div>
            </div>
            <div class="retailWhy-content">
              <h4>Sell Across Multiple Channels</h4>
              <p>
                Connect your website with social platforms, marketplaces,
                WhatsApp and other customer touchpoints.
              </p>
            </div>
          </article>

          <!-- 06 -->
          <article class="retailWhy-card retailWhy-card--accent">
            <div class="retailWhy-top">
              <span class="retailWhy-number">06</span>
              <div class="retailWhy-icon">
                <svg viewBox="0 0 24 24" aria-hidden="true">
                  <circle cx="12" cy="8" r="3.4"></circle>
                  <path d="M5 20c0-3.6 3.1-6 7-6s7 2.4 7 6"></path>
                </svg>
              </div>
            </div>
            <div class="retailWhy-content">
              <h4>Build A Direct Customer Relationship</h4>
              <p>
                Give D2C brands more control over customer interactions, data,
                promotions and repeat purchases.
              </p>
            </div>
          </article>
        </div>

        <div class="retailWhy-cta">
          <div class="retailWhy-cta-content">
            <div class="retailWhy-cta-icon">
              <svg viewBox="0 0 24 24" aria-hidden="true">
                <path
                  d="M21 11.5a8.38 8.38 0 0 1-9 8.5 9.9 9.9 0 0 1-4.1-.9L3 21l1.9-4.5A8.1 8.1 0 0 1 3 11.5a8.5 8.5 0 0 1 9-8.5 8.5 8.5 0 0 1 9 8.5Z">
                </path>
                <path d="M8 12h.01"></path>
                <path d="M12 12h.01"></path>
                <path d="M16 12h.01"></path>
              </svg>
            </div>

            <div class="retailWhy-cta-text">
              <span>READY TO TAKE YOUR STORE ONLINE?</span>
              <h4>Let's Talk About Your Digital Storefront.</h4>
              <p>
                Tell us what you sell, who you serve and what you want to
                achieve — we'll help you shape the right digital experience.
              </p>
            </div>
          </div>

          <a href="javascript:void(0)" class="btn btn-outline-black" data-model=".enquire-pop">
            Let's Talk <i>↗</i>
          </a>
        </div>
      </div>
    </section>

    <!-- ============================================================
         04 — WHAT YOUR RETAIL / E-COMMERCE WEBSITE SHOULD INCLUDE
    ============================================================= -->
    <section class="retailWhat">
      <div class="container">
        <div class="heading">
          <span class="eyebrow">
            <span class="eyebrow-line"></span>
            WHAT YOUR RETAIL, E-COMMERCE &amp; D2C WEBSITE SHOULD INCLUDE
          </span>

          <h3>
            Everything Your Store Needs<br />
            <span>To Sell Better Online.</span>
          </h3>

          <p>
            Commerce-specific functionality that supports both your customers
            and your operations.
          </p>
        </div>

        <div class="retailWhat-grid">
          <!-- ======================================================
               SHOPPING EXPERIENCE
          ======================================================= -->
          <div class="retailWhat-col retailWhat-col--customers">
            <div class="retailWhat-col-head">
              <span class="retailWhat-col-icon">
                <svg viewBox="0 0 24 24" aria-hidden="true">
                  <circle cx="11" cy="11" r="6.5"></circle>
                  <path d="M16 16l4.5 4.5"></path>
                </svg>
              </span>
              <div>
                <span class="retailWhat-col-label">SHOPPING EXPERIENCE</span>
                <h4>For Product Discovery</h4>
              </div>
            </div>

            <ul class="retailWhat-list">
              <li class="retailWhat-item">
                <span class="retailWhat-item-icon">
                  <svg viewBox="0 0 24 24" aria-hidden="true">
                    <rect x="3.5" y="3.5" width="7" height="7" rx="1.4"></rect>
                    <rect x="13.5" y="3.5" width="7" height="7" rx="1.4"></rect>
                    <rect x="3.5" y="13.5" width="7" height="7" rx="1.4"></rect>
                    <rect x="13.5" y="13.5" width="7" height="7" rx="1.4"></rect>
                  </svg>
                </span>
                <div class="retailWhat-item-content">
                  <h5>Product Catalogue &amp; Categories</h5>
                  <p>
                    Products organised into categories and collections that
                    are easy to browse.
                  </p>
                </div>
              </li>

              <li class="retailWhat-item">
                <span class="retailWhat-item-icon">
                  <svg viewBox="0 0 24 24" aria-hidden="true">
                    <path d="M4 5h16v14H4z"></path>
                    <path d="M8 9h8"></path>
                    <path d="M8 13h5"></path>
                  </svg>
                </span>
                <div class="retailWhat-item-content">
                  <h5>Product Detail Pages</h5>
                  <p>
                    Clear images, descriptions, pricing and purchase
                    information for every product.
                  </p>
                </div>
              </li>

              <li class="retailWhat-item">
                <span class="retailWhat-item-icon">
                  <svg viewBox="0 0 24 24" aria-hidden="true">
                    <circle cx="10.8" cy="10.8" r="6.2"></circle>
                    <path d="m16 16 4.2 4.2"></path>
                  </svg>
                </span>
                <div class="retailWhat-item-content">
                  <h5>Product Search &amp; Filters</h5>
                  <p>
                    Help customers narrow down products by category, price,
                    size or other attributes.
                  </p>
                </div>
              </li>

              <li class="retailWhat-item">
                <span class="retailWhat-item-icon">
                  <svg viewBox="0 0 24 24" aria-hidden="true">
                    <circle cx="6" cy="12" r="2.6"></circle>
                    <circle cx="18" cy="6" r="2.6"></circle>
                    <circle cx="18" cy="18" r="2.6"></circle>
                    <path d="M8.3 10.8L15.7 7.2"></path>
                    <path d="M8.3 13.2l7.4 3.6"></path>
                  </svg>
                </span>
                <div class="retailWhat-item-content">
                  <h5>Product Variants</h5>
                  <p>
                    Sizes, colours and other options presented clearly on the
                    product page.
                  </p>
                </div>
              </li>

              <li class="retailWhat-item">
                <span class="retailWhat-item-icon">
                  <svg viewBox="0 0 24 24" aria-hidden="true">
                    <path d="M12 3l2.6 5.5 6 .8-4.4 4.2 1.1 6-5.3-2.9-5.3 2.9 1.1-6-4.4-4.2 6-.8L12 3z"></path>
                  </svg>
                </span>
                <div class="retailWhat-item-content">
                  <h5>Wishlist</h5>
                  <p>
                    Let customers save products they're interested in and
                    return to them later.
                  </p>
                </div>
              </li>

              <li class="retailWhat-item">
                <span class="retailWhat-item-icon">
                  <svg viewBox="0 0 24 24" aria-hidden="true">
                    <path d="M12 3l2.6 5.5 6 .8-4.4 4.2 1.1 6-5.3-2.9-5.3 2.9 1.1-6-4.4-4.2 6-.8L12 3z"></path>
                  </svg>
                </span>
                <div class="retailWhat-item-content">
                  <h5>Reviews &amp; Ratings</h5>
                  <p>
                    Build buyer confidence with genuine customer feedback on
                    every product.
                  </p>
                </div>
              </li>
            </ul>
          </div>

          <!-- ======================================================
               STORE & BUSINESS OPERATIONS
          ======================================================= -->
          <div class="retailWhat-col retailWhat-col--business">
            <div class="retailWhat-col-head">
              <span class="retailWhat-col-icon">
                <svg viewBox="0 0 24 24" aria-hidden="true">
                  <path d="M4 21V9l8-5 8 5v12"></path>
                  <path d="M9 21v-6h6v6"></path>
                </svg>
              </span>
              <div>
                <span class="retailWhat-col-label">STORE &amp; OPERATIONS</span>
                <h4>For Running Your Commerce Business</h4>
              </div>
            </div>

            <ul class="retailWhat-list">
              <li class="retailWhat-item">
                <span class="retailWhat-item-icon">
                  <svg viewBox="0 0 24 24" aria-hidden="true">
                    <circle cx="8" cy="19" r="1.6"></circle>
                    <circle cx="17" cy="19" r="1.6"></circle>
                    <path d="M2.5 3h2.4l2.6 12.2a2 2 0 0 0 2 1.6h7.7a2 2 0 0 0 2-1.6L21 7H6"></path>
                  </svg>
                </span>
                <div class="retailWhat-item-content">
                  <h5>Shopping Cart &amp; Secure Checkout</h5>
                  <p>
                    A simple, secure checkout that keeps customers moving
                    toward purchase.
                  </p>
                </div>
              </li>

              <li class="retailWhat-item">
                <span class="retailWhat-item-icon">
                  <svg viewBox="0 0 24 24" aria-hidden="true">
                    <rect x="3" y="6" width="18" height="13" rx="2"></rect>
                    <path d="M3 10h18"></path>
                    <path d="M7 14.5h4"></path>
                  </svg>
                </span>
                <div class="retailWhat-item-content">
                  <h5>Online Payments &amp; Coupons</h5>
                  <p>
                    Accept payments online and run discount codes, coupons and
                    offers.
                  </p>
                </div>
              </li>

              <li class="retailWhat-item">
                <span class="retailWhat-item-icon">
                  <svg viewBox="0 0 24 24" aria-hidden="true">
                    <path d="M5 8h14l-1 11H6L5 8Z"></path>
                    <path d="M9 9V6a3 3 0 0 1 6 0v3"></path>
                  </svg>
                </span>
                <div class="retailWhat-item-content">
                  <h5>Order Management &amp; Customer Accounts</h5>
                  <p>
                    Manage orders end-to-end and give customers a login to
                    track and reorder.
                  </p>
                </div>
              </li>

              <li class="retailWhat-item">
                <span class="retailWhat-item-icon">
                  <svg viewBox="0 0 24 24" aria-hidden="true">
                    <path d="M4 12h4l3-6 4 12 2-6h3"></path>
                  </svg>
                </span>
                <div class="retailWhat-item-content">
                  <h5>Shipping &amp; Delivery Information</h5>
                  <p>
                    Show delivery timelines, shipping charges and availability
                    clearly.
                  </p>
                </div>
              </li>

              <li class="retailWhat-item">
                <span class="retailWhat-item-icon">
                  <svg viewBox="0 0 24 24" aria-hidden="true">
                    <path
                      d="M21 11.5a8.38 8.38 0 0 1-9 8.5 9.9 9.9 0 0 1-4.1-.9L3 21l1.9-4.5A8.1 8.1 0 0 1 3 11.5a8.5 8.5 0 0 1 9-8.5 8.5 8.5 0 0 1 9 8.5Z">
                    </path>
                  </svg>
                </span>
                <div class="retailWhat-item-content">
                  <h5>WhatsApp Integration</h5>
                  <p>
                    Let customers enquire and get order updates over WhatsApp.
                  </p>
                </div>
              </li>

              <li class="retailWhat-item">
                <span class="retailWhat-item-icon">
                  <svg viewBox="0 0 24 24" aria-hidden="true">
                    <path d="M4 21V9l8-5 8 5v12"></path>
                    <path d="M9 21v-6h6v6"></path>
                  </svg>
                </span>
                <div class="retailWhat-item-content">
                  <h5>Inventory, CRM &amp; Analytics Integration</h5>
                  <p>
                    Connect inventory, CRM and conversion tracking to keep
                    operations in sync.
                  </p>
                </div>
              </li>
            </ul>
          </div>
        </div>

        <div class="retailWhat-statement">
          <p>
            <span>Everything Your Customers Need To Shop.</span>
            <span>Everything Your Business Needs To Run.</span>
          </p>
        </div>
      </div>
    </section>

    <section class="ecomPackage">
      <div class="container">
        <div class="ecomPackage-inner">
          <div class="ecomPackage-content">
            <span class="ecomPackage-label">
              DIGITAL SOLUTIONS FOR RETAIL &amp; D2C
            </span>

            <h3>
              Everything You Need To
              <span>Build A Better Retail Experience.</span>
            </h3>

            <p class="ecomPackage-intro">
              We build retail and D2C websites around your products, customers,
              shopping journey and business goals—from product catalogues to
              complete e-commerce experiences.
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
                <label for="packageBusiness">Retail Website Type</label>

                <select id="packageBusiness" name="business_type">
                  <option value="" selected disabled>
                    Select your website type
                  </option>
                  <option value="retail-business">
                    Retail Business Website
                  </option>
                  <option value="d2c">
                    D2C E-Commerce Website
                  </option>
                  <option value="product-catalogue">
                    Product Catalogue Website
                  </option>
                  <option value="online-store">
                    Online Store
                  </option>
                  <option value="multi-vendor">
                    Multi-Vendor Marketplace
                  </option>
                  <option value="custom-ecommerce">
                    Custom E-Commerce Website
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
         06 — HOW WE HELP YOUR RETAIL, E-COMMERCE & D2C BUSINESS
              GROW DIGITALLY
    ============================================================= -->
    <section class="secL">
      <div class="container">
        <div class="heading">
          <span class="eyebrow">
            <span class="eyebrow-line"></span>
            HOW YOUR RETAIL, E-COMMERCE &amp; D2C BUSINESS GROWS DIGITALLY
          </span>

          <h3>
            Build A Store That <br />
            <span>Drives Real Business Growth.</span>
          </h3>

          <p>
            Outcomes we focus on, not just features — built around how your
            commerce business actually grows.
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
              <h4>Reach More Customers</h4>
              <p>
                Expand your digital presence beyond your physical store and
                existing audience.
              </p>
            </div>
          </li>

          <li>
            <span class="secL-icon">
              <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                <circle cx="8" cy="19" r="1.6" stroke="currentColor" stroke-width="1.5" />
                <circle cx="17" cy="19" r="1.6" stroke="currentColor" stroke-width="1.5" />
                <path d="M2.5 3h2.4l2.6 12.2a2 2 0 0 0 2 1.6h7.7a2 2 0 0 0 2-1.6L21 7H6" stroke="currentColor"
                  stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
              </svg>
            </span>
            <div>
              <h4>Generate More Sales Opportunities</h4>
              <p>
                Create better digital journeys that move customers from
                discovery towards purchase.
              </p>
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
              <h4>Connect Your Commerce Operations</h4>
              <p>
                Connect your website with payments, inventory, CRM, shipping,
                marketplaces and other required systems.
              </p>
            </div>
          </li>

          <li>
            <span class="secL-icon">
              <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                <circle cx="12" cy="12" r="8" stroke="currentColor" stroke-width="1.5" />
                <path d="M12 8v4l3 2" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
              </svg>
            </span>
            <div>
              <h4>Track &amp; Improve Performance</h4>
              <p>
                Use analytics and conversion data to understand customer
                behaviour and improve your digital performance.
              </p>
            </div>
          </li>
        </ul>

        <div class="cntr">
          <button type="button" data-model=".enquire-pop" class="btn btn-outline-black">
            Start Your Project
            <i>↗</i>
          </button>
        </div>
      </div>
    </section>

    <section class="ngoTypes" id="ngoSolutions">
      <div class="container">
        <div class="heading">
          <span class="eyebrow">
            <span class="eyebrow-line"></span>
            RETAIL, E-COMMERCE &amp; D2C SOLUTIONS
          </span>

          <h3>
            Digital Experiences Built <br />
            <span>For The Way You Sell.</span>
          </h3>

          <p>
            From retail websites to complete e-commerce stores, we build
            digital experiences that help your products reach, engage and
            convert more customers.
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
      'title' => 'Frequently Asked Questions <span>About Retail, E-Commerce &amp; D2C.</span>',
      'intro' => 'Straight answers to common questions businesses ask before taking their store online.',
    ])

    <!-- ============================================================
         09 — FINAL CTA
    ============================================================= -->
    <div class="container">
      <div class="cta-promo">
        <div class="cta-promo__inner">
          <span class="cta-promo__eyebrow">LET'S GROW YOUR COMMERCE BUSINESS</span>

          <h3 class="cta-promo__heading">
            Ready To Build A Better<br />
            Digital Storefront?
          </h3>

          <p class="cta-promo__sub">
            Let's turn your products, customer journey and commerce
            requirements into a professional digital experience that gets
            discovered, builds trust and makes buying easier.
          </p>

          <div class="cta-promo__actions">
            <button class="btn btn-white" data-model=".enquire-pop">
              Start Your Project <i>↗</i>
            </button>

            <a href="#retailSolutions" class="btn btn-outline-white">
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