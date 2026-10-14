<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home | Web Mingo</title>
    <!-- ================= Google Fonts ================= -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="" />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&amp;display=swap"
      rel="stylesheet"
    />
    <!-- ================= Vendor CSS ================= -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css"
    />
    <!-- ================= Project CSS ================= -->
    <link rel="stylesheet" href="assets/font/font.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/sass/header/header.css" />
    <link rel="stylesheet" href="assets/sass/footer/footer.css" />
    <link rel="stylesheet" href="assets/sass/home/home.css" />
    <!-- ================= Animation / Popup CSS ================= -->
    <link rel="stylesheet" href="assets/css/animate.css" />
    <link rel="stylesheet" href="assets/css/fancybox.css" />
  </head>
  <body>
    <!-- 
    <div class="top_strip">
      <div class="container">
        <div class="top_strip-inner">
          <div class="top_strip-contact">
            <a href="tel:+911234567890" class="contact-item">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="1em"
                height="1em"
                viewBox="0 0 24 24"
              >
                <path
                  fill="currentColor"
                  d="M6.62 10.79a15.05 15.05 0 0 0 6.59 6.59l2.2-2.2a1 1 0 0 1 1.01-.24c1.12.37 2.33.57 3.58.57a1 1 0 0 1 1 1V20a1 1 0 0 1-1 1C10.61 21 3 13.39 3 4a1 1 0 0 1 1-1h3.5a1 1 0 0 1 1 1c0 1.25.2 2.46.57 3.58a1 1 0 0 1-.25 1.01z"
                />
              </svg>
              <span>+91 12345 67890</span>
            </a>

            <span class="contact-divider"></span>

            <a href="mailto:business@webmingo.com" class="contact-item">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="1em"
                height="1em"
                viewBox="0 0 24 24"
              >
                <path
                  fill="currentColor"
                  d="M20 4H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2m0 4-8 5-8-5V6l8 5 8-5z"
                />
              </svg>
              <span>business@webmingo.com</span>
            </a>
          </div>

          <div class="top_strip-right">
            <div class="top_strip-social">
              <a href="javascript:void(0)" aria-label="Facebook">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="1em"
                  height="1em"
                  viewBox="0 0 24 24"
                >
                  <path
                    fill="currentColor"
                    d="M13.5 21v-7.5H16l.5-3H13.5V8.25c0-.87.24-1.46 1.49-1.46H16.5V3.6c-.26-.04-1.16-.11-2.2-.11c-2.18 0-3.68 1.33-3.68 3.78v2.11H8v3h2.62V21z"
                  />
                </svg>
              </a>
              <a href="javascript:void(0)" aria-label="Instagram">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="1em"
                  height="1em"
                  viewBox="0 0 24 24"
                >
                  <path
                    fill="currentColor"
                    d="M12 2c2.72 0 3.06.01 4.12.06c1.06.05 1.79.22 2.43.47c.66.25 1.22.6 1.77 1.15c.5.5.9 1.11 1.15 1.77c.25.64.42 1.37.47 2.43C21.99 8.94 22 9.28 22 12s-.01 3.06-.06 4.12c-.05 1.06-.22 1.79-.47 2.43a4.9 4.9 0 0 1-1.15 1.77c-.5.5-1.11.9-1.77 1.15c-.64.25-1.37.42-2.43.47C15.06 21.99 14.72 22 12 22s-3.06-.01-4.12-.06c-1.06-.05-1.79-.22-2.43-.47a4.9 4.9 0 0 1-1.77-1.15a4.9 4.9 0 0 1-1.15-1.77c-.25-.64-.42-1.37-.47-2.43C2.01 15.06 2 14.72 2 12s.01-3.06.06-4.12c.05-1.06.22-1.79.47-2.43c.25-.66.6-1.22 1.15-1.77c.5-.5 1.11-.9 1.77-1.15c.64-.25 1.37-.42 2.43-.47C8.94 2.01 9.28 2 12 2m0 1.8c-2.67 0-2.99.01-4.04.06c-.97.04-1.5.2-1.85.34c-.47.18-.8.4-1.15.75s-.57.68-.75 1.15c-.14.35-.3.88-.34 1.85c-.05 1.05-.06 1.37-.06 4.04s.01 2.99.06 4.04c.04.97.2 1.5.34 1.85c.18.47.4.8.75 1.15s.68.57 1.15.75c.35.14.88.3 1.85.34c1.05.05 1.37.06 4.04.06s2.99-.01 4.04-.06c.97-.04 1.5-.2 1.85-.34c.47-.18.8-.4 1.15-.75s.57-.68.75-1.15c.14-.35.3-.88.34-1.85c.05-1.05.06-1.37.06-4.04s-.01-2.99-.06-4.04c-.04-.97-.2-1.5-.34-1.85a3.1 3.1 0 0 0-.75-1.15a3.1 3.1 0 0 0-1.15-.75c-.35-.14-.88-.3-1.85-.34c-1.05-.05-1.37-.06-4.04-.06M12 7a5 5 0 1 1 0 10a5 5 0 0 1 0-10m0 1.8a3.2 3.2 0 1 0 0 6.4a3.2 3.2 0 0 0 0-6.4m5.2-2.9a1.05 1.05 0 1 1-2.1 0a1.05 1.05 0 0 1 2.1 0"
                  />
                </svg>
              </a>
              <a href="javascript:void(0)" aria-label="LinkedIn">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="1em"
                  height="1em"
                  viewBox="0 0 24 24"
                >
                  <path
                    fill="currentColor"
                    d="M19 3a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2zM8.34 18v-7.67H5.67V18zM7 9.28a1.55 1.55 0 1 0 0-3.1a1.55 1.55 0 0 0 0 3.1M18.34 18v-4.22c0-2.26-1.21-3.31-2.83-3.31c-1.31 0-1.89.72-2.22 1.22v-1.05h-2.67c.04.75 0 8 0 8h2.67v-4.47c0-.24.02-.48.09-.65c.19-.48.63-.98 1.37-.98c.97 0 1.36.74 1.36 1.82V18z"
                  />
                </svg>
              </a>
            </div>

            <a href="javascript:void(0)" class="btn btn-outline-white"
              >Request a Quote</a
            >
            <a href="javascript:void(0)" class="btn btn-outline-primary"
              >Get a Callback</a
            >
          </div>
        </div>
      </div>
    </div> -->

    <header class="site-header">
      <div class="container">
        <div class="header-wrapper">
          <div class="colA">
            <a href="index.html" class="logo">
              <img
                src="assets/images/logo.png"
                alt="Web Mingo"
                title="Web Mingo"
              />
            </a>
          </div>

          <div class="colB">
            <nav class="main-navigation" aria-label="Main Navigation">
              <ul class="center-menu-list">
                <li>
                  <a href="index.html">Home</a>
                </li>

                <li class="hasDropDown">
                  <a href="javascript:void(0)">
                    Company
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="1em"
                      height="1em"
                      viewBox="0 0 24 24"
                    >
                      <path d="M0 0h24v24H0z" fill="none" />
                      <path
                        fill="currentColor"
                        fill-rule="evenodd"
                        d="M16.53 8.97a.75.75 0 0 1 0 1.06l-4 4a.75.75 0 0 1-1.06 0l-4-4a.75.75 0 1 1 1.06-1.06L12 12.44l3.47-3.47a.75.75 0 0 1 1.06 0"
                        clip-rule="evenodd"
                      />
                    </svg>
                  </a>

                  <ul class="dropdown-menu">
                    <li><a href="about.html">About Us</a></li>
                    <li><a href="lifeAt.html">Life at Web Mingo</a></li>
                    <li><a href="career.html">Careers</a></li>
                  </ul>
                </li>

                <li class="hasDropDown hasMegaMenu">
                  <a href="javascript:void(0)">
                    Services
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="1em"
                      height="1em"
                      viewBox="0 0 24 24"
                    >
                      <path d="M0 0h24v24H0z" fill="none" />
                      <path
                        fill="currentColor"
                        fill-rule="evenodd"
                        d="M16.53 8.97a.75.75 0 0 1 0 1.06l-4 4a.75.75 0 0 1-1.06 0l-4-4a.75.75 0 1 1 1.06-1.06L12 12.44l3.47-3.47a.75.75 0 0 1 1.06 0"
                        clip-rule="evenodd"
                      />
                    </svg>
                  </a>

                  <div class="mega-menu">
                    <div class="mega-menu__grid">
                      <!-- Website Design & Development -->
                      <div class="mega-menu__col">
                        <span class="mega-menu__col-title"
                          >Website Design &amp; Development</span
                        >
                        <ul>
                          <li>
                            <a href="business-website-development.html"
                              >Business Website Development</a
                            >
                          </li>
                          <li>
                            <a href="E-Commerce-website-development.html"
                              >E-Commerce Website Development</a
                            >
                          </li>
                          <li>
                            <a href="E-Learning-LMS-development.html"
                              >E-Learning &amp; LMS Development</a
                            >
                          </li>
                          <li>
                            <a href="classified-portals-development.html"
                              >Classified Portals Development</a
                            >
                          </li>
                          <li>
                            <a href="custom-web-applications-development.html"
                              >Custom Web Applications Development</a
                            >
                          </li>
                        </ul>
                      </div>

                      <!-- Digital Marketing -->
                      <div class="mega-menu__col">
                        <span class="mega-menu__col-title"
                          >Digital Marketing</span
                        >
                        <ul>
                          <li>
                            <a href="search-engine-optimisation.html"
                              >Search Engine Optimisation (SEO)</a
                            >
                          </li>
                          <li>
                            <a href="social-media-marketing.html"
                              >Social Media Marketing (SMM)</a
                            >
                          </li>
                          <li>
                            <a href="google-ads-management.html"
                              >Google Ads Management (PPC)</a
                            >
                          </li>
                          <li>
                            <a href="meta-ads-management.html"
                              >Meta Ads Management</a
                            >
                          </li>
                        </ul>
                      </div>

                      <!-- Mobile Applications -->
                      <div class="mega-menu__col">
                        <span class="mega-menu__col-title"
                          >Mobile Applications</span
                        >
                        <ul>
                          <li>
                            <a href="android-applications-development.html"
                              >Android Applications Development</a
                            >
                          </li>
                          <li>
                            <a href="iOS-applications-development.html"
                              >iOS Applications Development</a
                            >
                          </li>
                          <li>
                            <a href="flutter-app-development.html"
                              >Flutter App Development</a
                            >
                          </li>
                        </ul>
                      </div>

                      <!-- Graphics & Media -->
                      <div class="mega-menu__col">
                        <span class="mega-menu__col-title"
                          >Graphics &amp; Media</span
                        >
                        <ul>
                          <li>
                            <a href="graphic-designing.html"
                              >Graphic Designing</a
                            >
                          </li>
                          <li>
                            <a href="video-creations.html">Video Creations</a>
                          </li>
                        </ul>
                      </div>
                    </div>

                    <div class="mega-menu__footer">
                      <a href="javascript:void(0)" class="mega-menu__view-all">
                        View All Services
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 1024 1024"
                        >
                          <path
                            fill="currentColor"
                            d="M414.592 149.376L746.24 489.6a32 32 0 0 1 0 44.672L414.592 874.624a29.12 29.12 0 0 1-41.728 0a30.59 30.59 0 0 1 0-42.752l311.872-319.936L372.864 192a30.59 30.59 0 0 1 0-42.688a29.12 29.12 0 0 1 41.728 0"
                          ></path>
                        </svg>
                      </a>
                    </div>
                  </div>
                </li>

                <li class="hasDropDown">
                  <a href="javascript:void(0)">
                    Industries
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="1em"
                      height="1em"
                      viewBox="0 0 24 24"
                    >
                      <path d="M0 0h24v24H0z" fill="none" />
                      <path
                        fill="currentColor"
                        fill-rule="evenodd"
                        d="M16.53 8.97a.75.75 0 0 1 0 1.06l-4 4a.75.75 0 0 1-1.06 0l-4-4a.75.75 0 1 1 1.06-1.06L12 12.44l3.47-3.47a.75.75 0 0 1 1.06 0"
                        clip-rule="evenodd"
                      />
                    </svg>
                  </a>

                  <ul class="dropdown-menu">
                    <li>
                      <a href="education-coaching.html"
                        >Education &amp; Coaching</a
                      >
                    </li>
                    <li>
                      <a href="retail-E-Commerce-D2C.html"
                        >Retail, E-Commerce &amp; D2C</a
                      >
                    </li>
                    <li><a href="real-state.html">Real Estate</a></li>
                    <li>
                      <a href="healthcare-clinics.html"
                        >Healthcare &amp; Clinics</a
                      >
                    </li>
                    <li>
                      <a href="NGO-Non-Profits.html">NGO &amp; Non-Profits</a>
                    </li>
                    <li>
                      <a href="manufacturing-export.html"
                        >Manufacturing &amp; Export</a
                      >
                    </li>
                    <li>
                      <a href="hotels-hospitality.html"
                        >Hotels &amp; Hospitality</a
                      >
                    </li>
                    <li>
                      <a href="travel-tourism.html">Travel &amp; Tourism</a>
                    </li>
                    <li class="dropdown-menu__view-all">
                      <a href="javascript:void()">View All Industries</a>
                    </li>
                  </ul>
                </li>

                <li>
                  <a href="our-works.html">Our Works</a>
                </li>

                <li>
                  <a href="contact.html">Contact</a>
                </li>
              </ul>
            </nav>
          </div>

          <!-- RIGHT SIDE -->
          <div class="colC">
            <!-- Search -->
            <a
              href="javascript:void()"
              class="btn btn-outline-primary search-btn"
              aria-label="Search"
            >
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="20"
                height="20"
                viewBox="0 0 32 32"
                aria-hidden="true"
              >
                <path d="M0 0h32v32H0z" fill="none" />
                <path
                  fill="currentColor"
                  d="M24 13h-2a3.003 3.003 0 0 0-3-3V8a5.006 5.006 0 0 1 5 5"
                />
                <path
                  fill="currentColor"
                  d="M28 13h-2a7.01 7.01 0 0 0-7-7V4a9.01 9.01 0 0 1 9 9m-7.667 8.482l2.24-2.24a2.17 2.17 0 0 1 2.337-.48l2.728 1.092A2.17 2.17 0 0 1 29 21.866v4.961a2.167 2.167 0 0 1-2.284 2.169C7.594 27.806 3.732 11.61 3.015 5.408A2.162 2.162 0 0 1 5.169 3h4.873a2.17 2.17 0 0 1 2.012 1.362l1.091 2.728a2.17 2.17 0 0 1-.48 2.337l-2.24 2.24s1.242 8.732 9.908 9.815"
                />
              </svg>
            </a>

            <a
              href="javascript:void()"
              class="btn btn-outline-primary search-btn"
              aria-label="Search"
            >
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="0.88em"
                height="1em"
                viewBox="0 0 448 512"
              >
                <path d="M0 0h448v512H0z" fill="none" />
                <path
                  fill="currentColor"
                  d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222c0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222c0-59.3-25.2-115-67.1-157m-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4l-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2c0-101.7 82.8-184.5 184.6-184.5c49.3 0 95.6 19.2 130.4 54.1s56.2 81.2 56.1 130.5c0 101.8-84.9 184.6-186.6 184.6m101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18c-5.1-1.9-8.8-2.8-12.5 2.8s-14.3 18-17.6 21.8c-3.2 3.7-6.5 4.2-12 1.4c-32.6-16.3-54-29.1-75.5-66c-5.7-9.8 5.7-9.1 16.3-30.3c1.8-3.7.9-6.9-.5-9.7s-12.5-30.1-17.1-41.2c-4.5-10.8-9.1-9.3-12.5-9.5c-3.2-.2-6.9-.2-10.6-.2s-9.7 1.4-14.8 6.9c-5.1 5.6-19.4 19-19.4 46.3s19.9 53.7 22.6 57.4c2.8 3.7 39.1 59.7 94.8 83.8c35.2 15.2 49 16.5 66.6 13.9c10.7-1.6 32.8-13.4 37.4-26.4s4.6-24.1 3.2-26.4c-1.3-2.5-5-3.9-10.5-6.6"
                />
              </svg>
            </a>

            <!-- Offers -->
            <a
              href="javascript:void(0)"
              data-model=".enquire-pop"
              class="btn btn-primary header-cta"
            >
              Get a Callback
            </a>

            <!-- MOBILE MENU -->
            <button
              type="button"
              class="ham-btn"
              data-model=".ham-pop"
              aria-label="Open menu"
            >
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="24"
                height="24"
                viewBox="0 0 24 24"
              >
                <path
                  fill="none"
                  stroke="currentColor"
                  stroke-linecap="round"
                  d="M3.5 7.5h17M3.5 12h14m-14 4.5h17"
                />
              </svg>
            </button>
          </div>
        </div>
      </div>
    </header>

    <main>
      <section class="home-banner">
        <div class="bg">
          <!-- Water background -->
          <div class="water" aria-hidden="true"></div>

          <div class="hero-pattern"></div>

          <div class="container">
            <div class="banner-wrapper">
              <div class="grid">
                <!-- LEFT CONTENT -->
                <div class="content">
                  <span class="eyebrow">
                    <span class="eyebrow-line"></span>
                    WEB DEVELOPMENT & DIGITAL SOLUTIONS
                  </span>

                  <h1>
                    We Build
                    <span class="word-rotator">
                      <span class="word-rotator-words">
                        <span class="word-rotator-word is-active"
                          >Websites</span
                        >
                        <span class="word-rotator-word">E-Commerce</span>
                        <span class="word-rotator-word">Apps</span>
                        <span class="word-rotator-word">Brands</span>
                        <span class="word-rotator-word">Solutions</span>
                      </span>
                    </span>
                    That Help Your Business Grow.
                  </h1>

                  <p>
                    Web Mingo designs fast, conversion-focused websites,
                    eCommerce stores and digital experiences for businesses in
                    Lucknow and across India.
                  </p>

                  <div class="trust-row">
                    <div class="icon">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="1em"
                        height="1em"
                        viewBox="0 0 24 24"
                      >
                        <path d="M0 0h24v24H0z" fill="none" />
                        <path
                          fill="currentColor"
                          d="M5.575 2.074A.75.75 0 0 1 6 2.75c0 .83.312 1.308.703 1.89l.029.042c.332.494.768 1.141.768 2.068a2.75 2.75 0 1 1-5.5 0c0-.368 0-1.001.383-1.818c.375-.8 1.088-1.719 2.398-2.768a.75.75 0 0 1 .794-.09M4.75 11a4.23 4.23 0 0 0 2.365-.718c.261.734.385 1.71.385 2.973c0 1.712-.23 3.768-.605 5.41c-.186.816-.417 1.569-.692 2.134a3 3 0 0 1-.51.77c-.206.211-.523.436-.943.436s-.737-.225-.942-.436a3 3 0 0 1-.51-.77c-.276-.566-.507-1.318-.693-2.135A26 26 0 0 1 2 13.254c0-1.262.124-2.238.385-2.972A4.23 4.23 0 0 0 4.75 11m3.734 3.077a5 5 0 0 0 1.516.398V12.25A3.25 3.25 0 0 1 13.25 9h2.225a5 5 0 0 0-7.344-3.904a6.4 6.4 0 0 0-.548-.94l-.05-.074l-.179-.272A6.5 6.5 0 0 1 16.981 9h1.769A3.25 3.25 0 0 1 22 12.25v5.5A3.25 3.25 0 0 1 18.75 21h-5.5A3.25 3.25 0 0 1 10 17.75v-1.769a6.5 6.5 0 0 1-1.621-.335c.05-.53.086-1.058.105-1.569M18.75 10.5h-1.826a6.505 6.505 0 0 1-5.424 5.424v1.826c0 .966.784 1.75 1.75 1.75h5.5a1.75 1.75 0 0 0 1.75-1.75v-5.5a1.75 1.75 0 0 0-1.75-1.75m-7.25 3.9a5.01 5.01 0 0 0 3.9-3.9h-2.15a1.75 1.75 0 0 0-1.75 1.75z"
                        />
                      </svg>
                      <span>Custom Website Design</span>
                    </div>

                    <div class="icon">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="1em"
                        height="1em"
                        viewBox="0 0 24 24"
                      >
                        <path d="M0 0h24v24H0z" fill="none" />
                        <g
                          fill="none"
                          stroke="currentColor"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="1.5"
                        >
                          <path
                            d="m17.25 8.25l-.774-3.04a.95.95 0 0 0-.926-.71h-2.118a1.432 1.432 0 0 1-2.864 0H8.45a.95.95 0 0 0-.926.71L6.75 8.25H9V12h6V8.25zm-9.75 15h9M.75 15h22.5"
                          />
                          <path
                            d="M2.25.75h19.5s1.5 0 1.5 1.5v15s0 1.5-1.5 1.5H2.25s-1.5 0-1.5-1.5v-15s0-1.5 1.5-1.5M12 23.25v-4.5"
                          />
                        </g>
                      </svg>
                      <span>E-Commerce Store Development</span>
                    </div>

                    <div class="icon">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="1em"
                        height="1em"
                        viewBox="0 0 24 24"
                      >
                        <path d="M0 0h24v24H0z" fill="none" />
                        <path
                          fill="currentColor"
                          d="M8 3a7 7 0 0 0 0 14h1.07a7 7 0 0 1 0-2H8A5 5 0 0 1 8 5h8a5 5 0 0 1 4.9 6a7 7 0 0 1 1.426 2A7 7 0 0 0 16 3zm8 10a3 3 0 1 0 0 6a3 3 0 0 0 0-6m-5 3a5 5 0 1 1 9.172 2.757l2.535 2.536l-1.414 1.414l-2.536-2.535A5 5 0 0 1 11 16"
                        />
                      </svg>
                      <span>SEO & Digital Marketing</span>
                    </div>

                    <div class="icon">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="1em"
                        height="1em"
                        viewBox="0 0 24 24"
                      >
                        <path d="M0 0h24v24H0z" fill="none" />
                        <g
                          fill="none"
                          stroke="currentColor"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                        >
                          <rect width="12" height="20" x="6" y="2" rx="2" />
                          <path d="M11.95 18h.1" />
                        </g>
                      </svg>
                      <span>Mobile Applications</span>
                    </div>
                  </div>

                  <div class="btn-group">
                    <button data-model=".enquire-pop" class="btn btn-primary">
                      Start Your Project
                      <i>↗</i>
                    </button>
                    <a href="our-works.html" class="btn btn-secondary">
                      View Our Work
                      <i>↗</i>
                    </a>
                  </div>

                  <div class="hero-meta">
                    <div class="meta-item">
                      <strong>10+ Years</strong>
                      <span>Experience</span>
                    </div>
                    <div class="meta-divider"></div>
                    <div class="meta-item">
                      <strong>200+</strong>
                      <span>Businesses Served</span>
                    </div>
                    <div class="meta-divider"></div>
                    <div class="meta-item">
                      <strong>300+</strong>
                      <span>Projects Delivered</span>
                    </div>
                    <div class="meta-divider"></div>
                    <div class="meta-item">
                      <strong>98%</strong>
                      <span>Client Satisfaction</span>
                    </div>
                  </div>
                </div>

                <!-- RIGHT VISUAL -->
                <div class="img">
                  <div
                    class="visual"
                    role="img"
                    aria-label="Web Mingo services: website design, e-commerce, mobile apps and SEO"
                  >
                    <!-- background shapes -->
                    <span class="glow"></span>
                    <span class="blob"></span>
                    <span class="orbit"></span>
                    <span class="orbit orbit-2">
                      <span class="orbit-dot"></span>
                      <span class="orbit-dot"></span>
                    </span>

                    <!-- Website mockup -->
                    <div class="mockup browser">
                      <div class="bar">
                        <span class="dot"></span>
                        <span class="dot"></span>
                        <span class="dot"></span>
                        <span class="url">www.webmingo.com</span>
                      </div>
                      <div class="body">
                        <div class="nav">
                          <span class="logo"></span>
                          <span class="links"
                            ><span></span><span></span><span></span
                          ></span>
                          <span class="cta"></span>
                        </div>
                        <div class="hero">
                          <div class="copy">
                            <span class="tag">Web Mingo</span>
                            <span class="title"
                              >Build. Launch.
                              <span class="hl">Grow.</span></span
                            >
                            <span class="line"></span>
                            <span class="line short"></span>
                            <span class="btn-mini">Get Started</span>
                          </div>
                          <div class="art">
                            <span class="art-circle"></span>
                            <span class="art-card"></span>
                          </div>
                        </div>
                        <div class="cards">
                          <span></span>
                          <span></span>
                          <span></span>
                        </div>
                      </div>
                    </div>

                    <!-- App mockup -->
                    <div class="mockup phone">
                      <span class="notch"></span>
                      <div class="screen">
                        <div class="app-top">
                          <span class="app-logo"></span>
                          <span class="app-cart"></span>
                        </div>
                        <div class="app-banner">
                          <span class="app-banner-title">New Arrivals</span>
                          <span class="app-banner-btn">Shop Now</span>
                        </div>
                        <div class="app-grid">
                          <div class="prod">
                            <span class="prod-img"></span>
                            <span class="prod-name">Smart Watch</span>
                            <span class="prod-price">₹3,999</span>
                          </div>
                          <div class="prod">
                            <span class="prod-img"></span>
                            <span class="prod-name">Headphones</span>
                            <span class="prod-price">₹2,499</span>
                          </div>
                        </div>
                        <div class="app-nav">
                          <span></span><span></span><span></span><span></span>
                        </div>
                      </div>
                    </div>

                    <!-- Service chips -->
                    <div class="chip pill pill-web">
                      <span class="ico">
                        <svg
                          viewBox="0 0 24 24"
                          fill="none"
                          stroke="currentColor"
                          stroke-width="2"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          aria-hidden="true"
                        >
                          <rect x="3" y="3" width="18" height="18" rx="2" />
                          <path d="M3 9h18M9 21V9" />
                        </svg>
                      </span>
                      <span class="label">Website Design</span>
                    </div>

                    <div class="chip pill pill-shop">
                      <span class="ico">
                        <svg
                          viewBox="0 0 24 24"
                          fill="none"
                          stroke="currentColor"
                          stroke-width="2"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          aria-hidden="true"
                        >
                          <circle cx="9" cy="21" r="1" />
                          <circle cx="20" cy="21" r="1" />
                          <path
                            d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"
                          />
                        </svg>
                      </span>
                      <span class="label">E-Commerce</span>
                    </div>

                    <div class="chip pill pill-app">
                      <span class="ico">
                        <svg
                          viewBox="0 0 24 24"
                          fill="none"
                          stroke="currentColor"
                          stroke-width="2"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          aria-hidden="true"
                        >
                          <rect x="5" y="2" width="14" height="20" rx="2" />
                          <path d="M12 18h.01" />
                        </svg>
                      </span>
                      <span class="label">Mobile Apps</span>
                    </div>

                    <div class="chip stat">
                      <div class="stat-head">
                        <span class="ico">
                          <svg
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            aria-hidden="true"
                          >
                            <path d="M23 6l-9.5 9.5-5-5L1 18" />
                            <path d="M17 6h6v6" />
                          </svg>
                        </span>
                        <span class="label">SEO Growth</span>
                      </div>
                      <span class="stat-value">+240%</span>
                      <div class="bars">
                        <span></span><span></span><span></span><span></span
                        ><span></span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="home-secA">
        <div class="container">
          <!-- ==========================================
         TOP CONTENT
    ========================================== -->

          <div class="home-secA-top">
            <div class="heading">
              <span class="sec-label">TRUSTED BY BUSINESSES</span>

              <h3>
                Building digital experiences for
                <span>ambitious businesses.</span>
              </h3>
            </div>

            <div class="secA-meta">
              <div class="meta-count">
                <strong> 300<sup>+</sup> </strong>

                <small>Projects Delivered</small>
              </div>

              <p>
                From ideas to execution, we create digital experiences designed
                to make businesses stand out and grow.
              </p>
            </div>
          </div>

          <div class="home-secA-trust">
            <!-- INTRO -->

            <div class="trust-intro">
              <span class="trust-label"> WHY CLIENTS CHOOSE US </span>

              <p>
                <strong>10+ years</strong> of experience combining strategy,
                design and technology to create digital solutions that deliver.
              </p>

              <span class="trust-date">
                Trusted by businesses across industries.
              </span>
            </div>

            <!-- TRUST PLATFORMS -->

            <div class="trust-platforms">
              <div class="trust-platform">
                <span class="trust-label">PAN INDIA</span>
                <span class="trust-value">Clients Across India</span>
              </div>

              <div class="trust-divider"></div>

              <div class="trust-platform trust-platform--registered">
                <span class="trust-label">REGISTERED SINCE</span>
                <span class="registered-year">
                  <strong>2016</strong>
                  <small>est.</small>
                  <span class="registered-check">
                    <svg
                      width="12"
                      height="12"
                      viewBox="0 0 24 24"
                      fill="none"
                      stroke="currentColor"
                      stroke-width="2.5"
                    >
                      <path d="M20 6 9 17l-5-5" />
                    </svg>
                    GST Registered
                  </span>
                </span>
              </div>

              <div class="trust-divider"></div>

              <div class="trust-platform trust-platform--solutions">
                <span class="trust-label">COMPLETE DIGITAL SOLUTIONS</span>
                <span class="trust-value">
                  Design <b>•</b> Development <b>•</b> Marketing
                </span>
              </div>
            </div>
          </div>

          <div class="home-secA-logos">
            <div class="logo-item">
              <span class="logo-index"> 01 </span>
              <img
                src="assets/images/home/brands/client1.svg"
                alt="client logo"
              />
            </div>

            <div class="logo-item">
              <span class="logo-index"> 02 </span>
              <img
                src="assets/images/home/brands/client2.png"
                alt="Client logo"
              />
            </div>

            <div class="logo-item">
              <span class="logo-index"> 03 </span>
              <img
                src="assets/images/home/brands/client3.png"
                alt="Client logo"
              />
            </div>

            <div class="logo-item">
              <span class="logo-index"> 04 </span>
              <img
                src="assets/images/home/brands/client4.png"
                alt="Client logo"
              />
            </div>

            <div class="logo-item">
              <span class="logo-index"> 05 </span>
              <img
                src="assets/images/home/brands/client5.png"
                alt="Client logo"
              />
            </div>

            <div class="logo-item">
              <span class="logo-index"> 06 </span>
              <img
                src="assets/images/home/brands/client6.png"
                alt="Client logo"
              />
            </div>

            <div class="logo-item">
              <span class="logo-index"> 07 </span>
              <img
                src="assets/images/home/brands/client7.png"
                alt="Client logo"
              />
            </div>

            <a
              href="javascript:void(0)"
              data-model=".enquire-pop"
              class="logo-item logo-cta"
            >
              <div class="cta-top">
                <span class="cta-label"> Your brand could be next. </span>

                <span class="cta-arrow">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 24 24"
                    width="20"
                    height="20"
                  >
                    <path
                      fill="none"
                      stroke="currentColor"
                      stroke-width="1.8"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      d="M5 12h14m-6-6l6 6l-6 6"
                    />
                  </svg>
                </span>
              </div>

              <span class="cta-tag"> Let's work together </span>
            </a>
          </div>

          <div class="home-secA-logos-slider">
            <div class="swiper logosSwiper">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <div class="logo-item">
                    <span class="logo-index"> 01 </span>
                    <img
                      src="assets/images/home/brands/client1.svg"
                      alt="client logo"
                    />
                  </div>
                </div>

                <div class="swiper-slide">
                  <div class="logo-item">
                    <span class="logo-index"> 02 </span>
                    <img
                      src="assets/images/home/brands/client2.png"
                      alt="Client logo"
                    />
                  </div>
                </div>

                <div class="swiper-slide">
                  <div class="logo-item">
                    <span class="logo-index"> 03 </span>
                    <img
                      src="assets/images/home/brands/client3.png"
                      alt="Client logo"
                    />
                  </div>
                </div>

                <div class="swiper-slide">
                  <div class="logo-item">
                    <span class="logo-index"> 04 </span>
                    <img
                      src="assets/images/home/brands/client4.png"
                      alt="Client logo"
                    />
                  </div>
                </div>

                <div class="swiper-slide">
                  <div class="logo-item">
                    <span class="logo-index"> 05 </span>
                    <img
                      src="assets/images/home/brands/client5.png"
                      alt="Client logo"
                    />
                  </div>
                </div>

                <div class="swiper-slide">
                  <div class="logo-item">
                    <span class="logo-index"> 06 </span>
                    <img
                      src="assets/images/home/brands/client6.png"
                      alt="Client logo"
                    />
                  </div>
                </div>

                <div class="swiper-slide">
                  <div class="logo-item">
                    <span class="logo-index"> 07 </span>
                    <img
                      src="assets/images/home/brands/client7.png"
                      alt="Client logo"
                    />
                  </div>
                </div>

                <div class="swiper-slide">
                  <a
                    href="javascript:void(0)"
                    data-model=".enquire-pop"
                    class="logo-item logo-cta"
                  >
                    <div class="cta-top">
                      <span class="cta-label"> Your brand could be next. </span>

                      <span class="cta-arrow">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 24 24"
                          width="20"
                          height="20"
                        >
                          <path
                            fill="none"
                            stroke="currentColor"
                            stroke-width="1.8"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M5 12h14m-6-6l6 6l-6 6"
                          />
                        </svg>
                      </span>
                    </div>

                    <span class="cta-tag"> Let's work together </span>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="about">
        <div class="container">
          <div class="about-grid">
            <div class="heading">
              <span class="eyebrow">
                <span class="eyebrow-line"></span>
                Who We Are
              </span>

              <h3>Your digital partner from <span>strategy to growth</span></h3>

              <p>
                Web Mingo is a web design and digital solutions company based in
                Lucknow, India. We help businesses establish, improve and grow
                their digital presence through strategic design, modern
                development and performance-focused digital marketing.
              </p>
              <p>
                From a business website or ecommerce store to SEO, paid
                advertising and custom digital solutions.
              </p>

              <div class="btn-group">
                <a href="javascript:void(0)" class="btn btn-outline-black">
                  More About Web Mingo
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 24 24"
                    width="16"
                    height="16"
                  >
                    <path
                      fill="none"
                      stroke="currentColor"
                      stroke-width="1.8"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      d="M5 12h14m-6-6l6 6l-6 6"
                    />
                  </svg>
                </a>

                <a href="javascript:void(0)" class="btn btn-black">
                  Get Started
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 24 24"
                    width="16"
                    height="16"
                  >
                    <path
                      fill="none"
                      stroke="currentColor"
                      stroke-width="1.8"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      d="M5 12h14m-6-6l6 6l-6 6"
                    />
                  </svg>
                </a>
              </div>
            </div>

            <div class="about-media">
              <img
                class="media-img media-img--a"
                src="assets/images/home/webming2.png"
                alt=""
              />
              <img
                class="media-img media-img--b"
                src="assets/images/home/webming1.png"
                alt=""
              />

              <div class="media-stat">
                <strong>10<span>+</span></strong>
                <p>Years of experience built on successful projects</p>
              </div>
            </div>
          </div>

          <div class="about-features">
            <div class="feature">
              <span class="feature-num">01</span>
              <div class="feature-body">
                <h4>Strategy First</h4>
                <p>
                  We understand your business, audience and goals before
                  designing your digital experience.
                </p>
              </div>
            </div>

            <div class="feature">
              <span class="feature-num">02</span>
              <div class="feature-body">
                <h4>Design &amp; Technology</h4>
                <p>
                  We combine thoughtful UI/UX design with reliable, scalable
                  development.
                </p>
              </div>
            </div>

            <div class="feature">
              <span class="feature-num">03</span>
              <div class="feature-body">
                <h4>Built for Growth</h4>
                <p>
                  We create digital solutions that can evolve with your business
                  and support long-term growth.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="home-secD">
        <div class="container">
          <div class="secD-pin">
            <div class="secD-grid">
              <div class="secD-left">
                <div class="heading">
                  <h3>Industries <span>We Serve</span></h3>
                  <p>
                    Webomindapps creates tailored digital solutions across
                    industries to help businesses improve their online presence
                    and grow.
                  </p>
                </div>

                <ul class="secD-links">
                  <li class="active" data-index="0">
                    <a href="javascript:void(0)">
                      <span class="nav-badge">01</span>
                      <span class="nav-title">Education &amp; Coaching</span>
                      <span class="nav-arrow">↗</span>
                    </a>
                  </li>

                  <li data-index="1">
                    <a href="javascript:void(0)">
                      <span class="nav-badge">02</span>
                      <span class="nav-title"
                        >Retail, E-Commerce &amp; D2C</span
                      >
                      <span class="nav-arrow">↗</span>
                    </a>
                  </li>

                  <li data-index="2">
                    <a href="javascript:void(0)">
                      <span class="nav-badge">03</span>
                      <span class="nav-title">Real Estate</span>
                      <span class="nav-arrow">↗</span>
                    </a>
                  </li>

                  <li data-index="3">
                    <a href="javascript:void(0)">
                      <span class="nav-badge">04</span>
                      <span class="nav-title">Healthcare &amp; Clinics</span>
                      <span class="nav-arrow">↗</span>
                    </a>
                  </li>

                  <li data-index="4">
                    <a href="javascript:void(0)">
                      <span class="nav-badge">05</span>
                      <span class="nav-title">NGO &amp; Non-Profits</span>
                      <span class="nav-arrow">↗</span>
                    </a>
                  </li>

                  <li data-index="5">
                    <a href="javascript:void(0)">
                      <span class="nav-badge">06</span>
                      <span class="nav-title">Manufacturing &amp; Export</span>
                      <span class="nav-arrow">↗</span>
                    </a>
                  </li>

                  <li data-index="6">
                    <a href="javascript:void(0)">
                      <span class="nav-badge">07</span>
                      <span class="nav-title">Hotels &amp; Hospitality</span>
                      <span class="nav-arrow">↗</span>
                    </a>
                  </li>

                  <li data-index="7">
                    <a href="javascript:void(0)">
                      <span class="nav-badge">08</span>
                      <span class="nav-title">Travel &amp; Tourism</span>
                      <span class="nav-arrow">↗</span>
                    </a>
                  </li>
                </ul>

                <div class="secD-progress">
                  <span class="progress-current">01</span>
                  <span class="progress-line"><span></span></span>
                  <span class="progress-total">08</span>
                </div>
              </div>

              <div class="secD-visual">
                <div class="swiper secD-swiper">
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <div class="visual-card">
                        <img
                          src="assets/images/home/education1.png"
                          alt="Education & Coaching"
                        />
                        <div class="visual-overlay"></div>
                        <div class="visual-panel">
                          <h4>Education &amp; Coaching</h4>
                          <p>
                            Digital solutions that help institutes attract
                            students and grow online.
                          </p>
                          <ul class="panel-services">
                            <li>Institute Websites</li>
                            <li>LMS &amp; E-Learning</li>
                            <li>Admission Forms</li>
                          </ul>
                          <a href="education-coaching.html" class="panel-cta">
                            <span>Explore education solutions</span>
                            <em>→</em>
                          </a>
                        </div>
                      </div>
                    </div>

                    <div class="swiper-slide">
                      <div class="visual-card">
                        <img
                          src="assets/images/home/retail1.png"
                          alt="Retail, E-Commerce & D2C"
                        />
                        <div class="visual-overlay"></div>
                        <div class="visual-panel">
                          <h4>Retail, E-Commerce &amp; D2C</h4>
                          <p>
                            Online stores built to showcase products and drive
                            direct sales.
                          </p>
                          <ul class="panel-services">
                            <li>E-Commerce Stores</li>
                            <li>D2C Websites</li>
                            <li>Payments &amp; Orders</li>
                          </ul>
                          <a
                            href="retail-E-Commerce-D2C.html"
                            class="panel-cta"
                          >
                            <span>Explore retail solutions</span>
                            <em>→</em>
                          </a>
                        </div>
                      </div>
                    </div>

                    <div class="swiper-slide">
                      <div class="visual-card">
                        <img
                          src="assets/images/home/realstate1.png"
                          alt="Real Estate"
                        />
                        <div class="visual-overlay"></div>
                        <div class="visual-panel">
                          <h4>Real Estate</h4>
                          <p>
                            Property websites designed to showcase projects and
                            generate qualified leads.
                          </p>
                          <ul class="panel-services">
                            <li>Property Listings</li>
                            <li>Project Websites</li>
                            <li>Lead Management</li>
                          </ul>
                          <a href="real-state.html" class="panel-cta">
                            <span>Explore real estate solutions</span>
                            <em>→</em>
                          </a>
                        </div>
                      </div>
                    </div>

                    <div class="swiper-slide">
                      <div class="visual-card">
                        <img
                          src="assets/images/home/healthcare.png"
                          alt="Healthcare & Clinics"
                        />
                        <div class="visual-overlay"></div>
                        <div class="visual-panel">
                          <h4>Healthcare &amp; Clinics</h4>
                          <p>
                            Patient-focused websites that make information and
                            appointments easier to access.
                          </p>
                          <ul class="panel-services">
                            <li>Clinic Websites</li>
                            <li>Appointment Booking</li>
                            <li>Patient Enquiries</li>
                          </ul>
                          <a href="healthcare-clinics.html" class="panel-cta">
                            <span>Explore healthcare solutions</span>
                            <em>→</em>
                          </a>
                        </div>
                      </div>
                    </div>

                    <div class="swiper-slide">
                      <div class="visual-card">
                        <img
                          src="assets/images/home/ngo1.png"
                          alt="NGO & Non-Profits"
                        />
                        <div class="visual-overlay"></div>
                        <div class="visual-panel">
                          <h4>NGO &amp; Non-Profits</h4>
                          <p>
                            Purpose-driven websites that communicate your
                            mission and engage supporters.
                          </p>
                          <ul class="panel-services">
                            <li>NGO Websites</li>
                            <li>Donation Platforms</li>
                            <li>Volunteer Forms</li>
                          </ul>
                          <a href="NGO-Non-Profits.html" class="panel-cta">
                            <span>Explore NGO solutions</span>
                            <em>→</em>
                          </a>
                        </div>
                      </div>
                    </div>

                    <div class="swiper-slide">
                      <div class="visual-card">
                        <img
                          src="assets/images/home/manufacturing1.png"
                          alt="Manufacturing & Export"
                        />
                        <div class="visual-overlay"></div>
                        <div class="visual-panel">
                          <h4>Manufacturing &amp; Export</h4>
                          <p>
                            Professional B2B websites that present products and
                            generate trade enquiries.
                          </p>
                          <ul class="panel-services">
                            <li>Corporate Websites</li>
                            <li>Product Catalogues</li>
                            <li>B2B Enquiries</li>
                          </ul>
                          <a href="manufacturing-export.html" class="panel-cta">
                            <span>Explore manufacturing solutions</span>
                            <em>→</em>
                          </a>
                        </div>
                      </div>
                    </div>

                    <div class="swiper-slide">
                      <div class="visual-card">
                        <img
                          src="assets/images/home/hotel1.png"
                          alt="Hotels & Hospitality"
                        />
                        <div class="visual-overlay"></div>
                        <div class="visual-panel">
                          <h4>Hotels &amp; Hospitality</h4>
                          <p>
                            Booking-ready websites that showcase your property
                            and drive direct reservations.
                          </p>
                          <ul class="panel-services">
                            <li>Hotel Websites</li>
                            <li>Room Booking</li>
                            <li>Property Galleries</li>
                          </ul>
                          <a href="hotels-hospitality.html" class="panel-cta">
                            <span>Explore hospitality solutions</span>
                            <em>→</em>
                          </a>
                        </div>
                      </div>
                    </div>

                    <div class="swiper-slide">
                      <div class="visual-card">
                        <img
                          src="assets/images/home/travel1.png"
                          alt="Travel & Tourism"
                        />
                        <div class="visual-overlay"></div>
                        <div class="visual-panel">
                          <h4>Travel &amp; Tourism</h4>
                          <p>
                            Travel websites that make destinations, packages and
                            enquiries easy to explore.
                          </p>
                          <ul class="panel-services">
                            <li>Travel Websites</li>
                            <li>Tour Packages</li>
                            <li>Booking &amp; Enquiries</li>
                          </ul>
                          <a href="travel-tourism.html" class="panel-cta">
                            <span>Explore travel solutions</span>
                            <em>→</em>
                          </a>
                        </div>
                      </div>
                    </div>

                    <div class="swiper-slide">
                      <div class="visual-card visual-cta">
                        <div class="visual-cta-inner">
                          <h4>Looking for Something Different?</h4>
                          <p>
                            We create tailored digital solutions for businesses
                            across industries. Let’s build something that fits
                            your unique needs.
                          </p>
                          <a
                            href="javascript:void(0)"
                            class="btn btn-outline-primary"
                          >
                            Explore All Industries
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="home-secF">
        <div class="container">
          <div class="heading">
            <span class="eyebrow">
              <span class="eyebrow-line"></span>
              WHAT WE DO
            </span>
            <h3>
              We build more than <br />
              <span>digital experiences that look good.</span>
            </h3>
            <p>
              From websites and mobile apps to digital marketing and branding,
              we combine strategy, design and technology to build digital
              solutions that attract the right audience and support business
              growth.
            </p>
          </div>

          <ul class="secF-list">
            <!-- Website Design & Development -->
            <li class="secF-row">
              <div class="row-title">
                <span class="row-number">01</span>
                <h3>Website Design<br />& Development</h3>
              </div>

              <div class="row-body">
                <p>
                  We design and develop fast, responsive websites that
                  communicate your value clearly, build trust and turn visitors
                  into customers.
                </p>

                <ul>
                  <li>Business & corporate websites</li>
                  <li>UI/UX & responsive development</li>
                  <li>SEO-ready website architecture</li>
                </ul>
              </div>

              <div class="row-action">
                <a
                  href="website-design-development.html"
                  class="btn btn-outline-black"
                >
                  Details
                  <em>↗</em>
                </a>
              </div>

              <div class="row-preview">
                <img
                  src="assets/images/home/web-sec.jpg"
                  alt="Website Design and Development"
                />
              </div>
            </li>

            <!-- Digital Marketing -->
            <li class="secF-row">
              <div class="row-title">
                <span class="row-number">02</span>
                <h3>Digital<br />Marketing</h3>
              </div>

              <div class="row-body">
                <p>
                  We build performance-focused marketing strategies that
                  increase online visibility, bring qualified traffic and create
                  measurable opportunities for your business.
                </p>

                <ul>
                  <li>SEO & search engine marketing</li>
                  <li>Google Ads & paid campaigns</li>
                  <li>Lead generation & conversion</li>
                </ul>
              </div>

              <div class="row-action">
                <a href="digital-marketing.html" class="btn btn-outline-black">
                  Details
                  <em>↗</em>
                </a>
              </div>

              <div class="row-preview">
                <img
                  src="assets/images/home/DigitalMarketing.avif"
                  alt="Digital Marketing Services"
                />
              </div>
            </li>

            <!-- Mobile App Development -->
            <li class="secF-row">
              <div class="row-title">
                <span class="row-number">03</span>
                <h3>Mobile App<br />Development</h3>
              </div>

              <div class="row-body">
                <p>
                  We develop user-focused mobile applications that turn business
                  ideas into reliable digital products built for everyday use.
                </p>

                <ul>
                  <li>Android & iOS applications</li>
                  <li>Flutter app development</li>
                  <li>Custom mobile solutions</li>
                </ul>
              </div>

              <div class="row-action">
                <a
                  href="mobile-app-development.html"
                  class="btn btn-outline-black"
                >
                  Details
                  <em>↗</em>
                </a>
              </div>

              <div class="row-preview">
                <img
                  src="assets/images/home/MobileAppDevelopment.avif"
                  alt="Mobile App Development"
                />
              </div>
            </li>

            <!-- Digital Branding -->
            <li class="secF-row">
              <div class="row-title">
                <span class="row-number">04</span>
                <h3>Digital<br />Branding</h3>
              </div>

              <div class="row-body">
                <p>
                  We create cohesive digital identities that help businesses
                  look consistent, communicate clearly and build recognition
                  across every customer touchpoint.
                </p>

                <ul>
                  <li>Brand identity & logo design</li>
                  <li>Social media creatives</li>
                  <li>Digital brand guidelines</li>
                </ul>
              </div>

              <div class="row-action">
                <a href="digital-branding.html" class="btn btn-outline-black">
                  Details
                  <em>↗</em>
                </a>
              </div>

              <div class="row-preview">
                <img
                  src="assets/images/home/SocialMediaMarketing.avif"
                  alt="Digital Branding Services"
                />
              </div>
            </li>
          </ul>
        </div>
      </section>

      <div class="container">
        <div class="cta-promo">
          <div class="cta-promo__inner">
            <span class="cta-promo__eyebrow">Have Questions?</span>

            <h3 class="cta-promo__heading">
              Ready to Build Something<br />
              That Moves Your Business Forward?
            </h3>

            <p class="cta-promo__sub">
              Share your goals with us and let’s create a digital solution that
              fits your business, audience, and growth plans.
            </p>

            <div class="cta-promo__actions">
              <button class="btn btn-white" data-model=".enquire-pop">
                Get FREE Consultation
              </button>
              <a href="javascript:void()" class="btn btn-outline-white"
                >Chat on WhatsApp</a
              >
            </div>
          </div>
        </div>
      </div>

      <section class="home-secB">
        <div class="container">
          <div class="home-secB-wrapper">
            <div class="home-secB-image">
              <img
                src="assets/images/home/mingo.png"
                alt="Web Mingo digital team"
              />
            </div>
            <div class="home-secB-content">
              <div class="heading">
                <span class="sec-label">WHY WEB MINGO</span>
                <h3>
                  We build digital experiences that
                  <span> grow businesses.</span>
                </h3>
                <p>
                  From strategy to execution, we create digital solutions that
                  look better, perform better, and move your business forward.
                </p>
              </div>

              <div class="home-secB-cards">
                <div class="cards-left">
                  <div class="project-card">
                    <span class="project-text">
                      Digital projects
                      <br />
                      delivered
                    </span>

                    <strong> 1.5k<span>+</span> </strong>
                  </div>

                  <div class="creative-card">
                    <div class="creative-gallery">
                      <div class="creative-image image-one">
                        <img
                          src="assets/images/home/retail.png"
                          alt="Web design project"
                        />
                      </div>

                      <div class="creative-image image-two">
                        <img
                          src="assets/images/home/ecommerce.png"
                          alt="Website development project"
                        />
                      </div>

                      <div class="creative-image image-three">
                        <img
                          src="assets/images/home/ecommerce.png"
                          alt="Digital marketing project"
                        />
                      </div>
                    </div>

                    <p>
                      From <strong>websites and eCommerce</strong> to branding
                      and digital marketing, we create solutions built around
                      real business goals.
                    </p>
                  </div>
                </div>

                <!-- RIGHT COLUMN -->
                <div class="cards-right">
                  <!-- RATING CARD -->
                  <div class="rating-card">
                    <div class="rating-stars">
                      <span>★</span>
                      <span>★</span>
                      <span>★</span>
                      <span>★</span>
                      <span>★</span>
                    </div>

                    <div class="rating-number">4.9<span>/5</span></div>

                    <div class="rating-line"></div>

                    <p>
                      Trusted by businesses for creative, reliable and
                      performance-focused digital solutions.
                    </p>

                    <a href="javascript:void(0)" class="hire-btn">
                      <i>+</i>
                      <span>START A PROJECT</span>
                    </a>
                  </div>

                  <!-- WORLDWIDE CARD -->
                  <div class="worldwide-card">
                    <img
                      src="assets/images/home/ecommerce.png"
                      alt="Web Mingo working with businesses"
                    />

                    <div class="worldwide-overlay">
                      <div class="worldwide-text">
                        <span>Serving businesses</span>
                        <small>across India & beyond</small>
                      </div>

                      <strong> 5<span>+</span> </strong>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="home-results">
  <div class="container">
    <div class="heading">
      <h3>
        From outdated <br />
        <span>to built for growth.</span>
      </h3>
      <p>
        We turn slow, dated digital experiences into fast, clear and
        conversion-ready products — across every project we ship.
      </p>
    </div>

    <div class="results-body">
      <div class="results-info">
        <div class="results-points">
          <div class="point-block point-before">
            <span class="point-dot"></span>
            <span class="point-tag">Before</span>
            <ul>
              <li>Outdated, generic design</li>
              <li>Slow load &amp; friction-heavy journey</li>
              <li>Low engagement, high bounce</li>
              <li>Poor mobile experience</li>
            </ul>
          </div>

          <div class="point-block point-after">
            <span class="point-dot"></span>
            <span class="point-tag">After</span>
            <ul>
              <li>Sharp, on-brand interface</li>
              <li>Fast, frictionless journey</li>
              <li>Higher engagement &amp; retention</li>
              <li>Fully responsive, built to convert</li>
            </ul>
          </div>
        </div>

        <div class="results-metrics">
          <div class="metric-card">
            <strong>+180%</strong>
            <span>Organic Visibility</span>
          </div>
          <div class="metric-card">
            <strong>+42%</strong>
            <span>Qualified Leads</span>
          </div>
          <div class="metric-card">
            <strong>2.4×</strong>
            <span>Conversion Growth</span>
          </div>
          <div class="metric-card">
            <strong>+65%</strong>
            <span>Engagement</span>
          </div>
        </div>
      </div>

      <div class="results-swiper-wrap">
        <div class="swiper resultsSwiper">
          <div class="swiper-wrapper">
            <!-- Slide 1 -->
            <div class="swiper-slide">
              <div
                class="frame-compare swiper-no-swiping"
                data-compare
                style="--pos: 50%"
              >
                <div class="compare-after">
                  <img
                    src="assets/images/beforeAfter/jameelAfter.png"
                    alt="After redesign — Jameel Nursery"
                    width="920"
                    height="575"
                    draggable="false"
                  />
                </div>
                <div class="compare-before">
                  <img
                    src="assets/images/beforeAfter/jameelBefore.png"
                    alt="Before redesign — Jameel Nursery"
                    width="920"
                    height="575"
                    draggable="false"
                  />
                </div>
                <span class="compare-tag tag-before">Before</span>
                <span class="compare-tag tag-after">After</span>
                <div class="compare-handle" data-handle>
                  <button
                    type="button"
                    class="handle-arrow arrow-left"
                    aria-label="Move slider left"
                  >
                    ‹
                  </button>
                  <button
                    type="button"
                    class="handle-arrow arrow-right"
                    aria-label="Move slider right"
                  >
                    ›
                  </button>
                </div>
              </div>
              <span class="slide-caption">Jameel Nursery</span>
            </div>

            <!-- Slide 2 -->
            <div class="swiper-slide">
              <div
                class="frame-compare swiper-no-swiping"
                data-compare
                style="--pos: 50%"
              >
                <div class="compare-after">
                  <img
                    src="assets/images/beforeAfter/gautamAfter.png"
                    alt="After redesign — Gautam"
                    width="920"
                    height="575"
                    draggable="false"
                  />
                </div>
                <div class="compare-before">
                  <img
                    src="assets/images/beforeAfter/gautamBefore.png"
                    alt="Before redesign — Gautam"
                    width="920"
                    height="575"
                    draggable="false"
                  />
                </div>
                <span class="compare-tag tag-before">Before</span>
                <span class="compare-tag tag-after">After</span>
                <div class="compare-handle" data-handle>
                  <button
                    type="button"
                    class="handle-arrow arrow-left"
                    aria-label="Move slider left"
                  >
                    ‹
                  </button>
                  <button
                    type="button"
                    class="handle-arrow arrow-right"
                    aria-label="Move slider right"
                  >
                    ›
                  </button>
                </div>
              </div>
              <span class="slide-caption">Gautam</span>
            </div>

            <!-- Slide 3 -->
            <div class="swiper-slide">
              <div
                class="frame-compare swiper-no-swiping"
                data-compare
                style="--pos: 50%"
              >
                <div class="compare-after">
                  <img
                    src="assets/images/beforeAfter/indotourAfter.png"
                    alt="After redesign — Indo Tours & Adventures"
                    width="920"
                    height="575"
                    draggable="false"
                  />
                </div>
                <div class="compare-before">
                  <img
                    src="assets/images/beforeAfter/indotourBefore.png"
                    alt="Before redesign — Indo Tours & Adventures"
                    width="920"
                    height="575"
                    draggable="false"
                  />
                </div>
                <span class="compare-tag tag-before">Before</span>
                <span class="compare-tag tag-after">After</span>
                <div class="compare-handle" data-handle>
                  <button
                    type="button"
                    class="handle-arrow arrow-left"
                    aria-label="Move slider left"
                  >
                    ‹
                  </button>
                  <button
                    type="button"
                    class="handle-arrow arrow-right"
                    aria-label="Move slider right"
                  >
                    ›
                  </button>
                </div>
              </div>
              <span class="slide-caption">Indo Tours &amp; Adventures</span>
            </div>
          </div>
        </div>

        <div class="swiper-group">
          <button
            type="button"
            class="resultsSwiper-prev btn-prev"
            aria-label="Previous project"
          >
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1024 1024">
              <path
                fill="currentColor"
                d="M609.408 149.376L277.76 489.6a32 32 0 0 0 0 44.672l331.648 340.352a29.12 29.12 0 0 0 41.728 0a30.59 30.59 0 0 0 0-42.752L339.264 511.936l311.872-319.872a30.59 30.59 0 0 0 0-42.688a29.12 29.12 0 0 0-41.728 0"
              ></path>
            </svg>
          </button>

          <button
            type="button"
            class="resultsSwiper-next btn-next"
            aria-label="Next project"
          >
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1024 1024">
              <path
                fill="currentColor"
                d="M414.592 149.376L746.24 489.6a32 32 0 0 1 0 44.672L414.592 874.624a29.12 29.12 0 0 1-41.728 0a30.59 30.59 0 0 1 0-42.752l311.872-319.936L372.864 192a30.59 30.59 0 0 1 0-42.688a29.12 29.12 0 0 1 41.728 0"
              ></path>
            </svg>
          </button>
        </div>
      </div>
    </div>
  </div>
</section>

      <section class="home-secH portfolio-section">
        <div class="container">
          <div class="heading">
            <h3>Work That <span>Creates Impact</span></h3>
            <p>
              Purposeful digital experiences designed to look great, work
              seamlessly, and help businesses grow.
            </p>
          </div>

          <ul class="tab-nav">
            <li data-tab="business-websites" class="active">
              Business Websites
            </li>
            <li data-tab="ecommerce">E-Commerce</li>
            <li data-tab="education-portals">E-Learning & LMS</li>
            <li data-tab="classified-portals">Classified Portals</li>
            <li data-tab="news">News Portals</li>
            <li data-tab="ngo">NGO / Society Websites</li>
            <li data-tab="custom-application">Custom Web Application</li>
          </ul>

          <div class="tab-nav-content">
            <!-- ================= BUSINESS WEBSITES ================= -->
            <div class="tabs active" data-tab="business-websites">
              <div class="swiper-wrap">
                <div class="portfolio-swiper swiper">
                  <div class="swiper-wrapper">
                    <!-- 01 — WAHID BIRYANI -->
                    <div class="swiper-slide">
                      <article class="portfolio-card">
                        <div class="portfolio-card__media">
                          <img
                            src="assets/images/website/portfolio/wahid.png"
                            alt="Wahid Biryani website"
                            loading="lazy"
                          />
                        </div>

                        <div class="portfolio-card__info">
                          <div class="portfolio-card__text">
                            <h4 class="portfolio-card__name">Wahid Biryani</h4>

                            <p class="portfolio-card__desc">
                              A modern online identity for a legacy restaurant
                              brand, bringing in more food lovers.
                            </p>
                          </div>

                          <div class="portfolio-card__actions">
                            <a
                              href="javascript:void()"
                              target="_blank"
                              rel="noopener"
                              class="btn btn-outline-black"
                            >
                              <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="0.88em"
                                height="1em"
                                viewBox="0 0 448 512"
                              >
                                <path d="M0 0h448v512H0z" fill="none"></path>
                                <path
                                  fill="currentColor"
                                  d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222c0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222c0-59.3-25.2-115-67.1-157m-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4l-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2c0-101.7 82.8-184.5 184.6-184.5c49.3 0 95.6 19.2 130.4 54.1s56.2 81.2 56.1 130.5c0 101.8-84.9 184.6-186.6 184.6m101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18c-5.1-1.9-8.8-2.8-12.5 2.8s-14.3 18-17.6 21.8c-3.2 3.7-6.5 4.2-12 1.4c-32.6-16.3-54-29.1-75.5-66c-5.7-9.8 5.7-9.1 16.3-30.3c1.8-3.7.9-6.9-.5-9.7s-12.5-30.1-17.1-41.2c-4.5-10.8-9.1-9.3-12.5-9.5c-3.2-.2-6.9-.2-10.6-.2s-9.7 1.4-14.8 6.9c-5.1 5.6-19.4 19-19.4 46.3s19.9 53.7 22.6 57.4c2.8 3.7 39.1 59.7 94.8 83.8c35.2 15.2 49 16.5 66.6 13.9c10.7-1.6 32.8-13.4 37.4-26.4s4.6-24.1 3.2-26.4c-1.3-2.5-5-3.9-10.5-6.6"
                                ></path>
                              </svg>
                            </a>

                            <button
                              type="button"
                              class="btn btn-black"
                              data-model=".enquire-pop"
                            >
                              Get a Quote
                            </button>
                          </div>
                        </div>
                      </article>
                    </div>

                    <!-- 02 — INDO TOURS & ADVENTURES -->
                    <div class="swiper-slide">
                      <article class="portfolio-card">
                        <div class="portfolio-card__media">
                          <img
                            src="assets/images/website/portfolio/indotour.png"
                            alt="Indo Tours & Adventures website"
                            loading="lazy"
                          />
                        </div>

                        <div class="portfolio-card__info">
                          <div class="portfolio-card__text">
                            <h4 class="portfolio-card__name">
                              Indo Tours & Adventures
                            </h4>

                            <p class="portfolio-card__desc">
                              A travel booking website where visitors can
                              explore India and international packages and plan
                              their trip in minutes.
                            </p>
                          </div>

                          <div class="portfolio-card__actions">
                            <a
                              href="javascript:void()"
                              target="_blank"
                              rel="noopener"
                              class="btn btn-outline-black"
                              aria-label="Visit Indo Tours & Adventures website"
                            >
                              <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="0.88em"
                                height="1em"
                                viewBox="0 0 448 512"
                              >
                                <path d="M0 0h448v512H0z" fill="none"></path>
                                <path
                                  fill="currentColor"
                                  d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222c0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222c0-59.3-25.2-115-67.1-157m-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4l-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2c0-101.7 82.8-184.5 184.6-184.5c49.3 0 95.6 19.2 130.4 54.1s56.2 81.2 56.1 130.5c0 101.8-84.9 184.6-186.6 184.6m101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18c-5.1-1.9-8.8-2.8-12.5 2.8s-14.3 18-17.6 21.8c-3.2 3.7-6.5 4.2-12 1.4c-32.6-16.3-54-29.1-75.5-66c-5.7-9.8 5.7-9.1 16.3-30.3c1.8-3.7.9-6.9-.5-9.7s-12.5-30.1-17.1-41.2c-4.5-10.8-9.1-9.3-12.5-9.5c-3.2-.2-6.9-.2-10.6-.2s-9.7 1.4-14.8 6.9c-5.1 5.6-19.4 19-19.4 46.3s19.9 53.7 22.6 57.4c2.8 3.7 39.1 59.7 94.8 83.8c35.2 15.2 49 16.5 66.6 13.9c10.7-1.6 32.8-13.4 37.4-26.4s4.6-24.1 3.2-26.4c-1.3-2.5-5-3.9-10.5-6.6"
                                ></path>
                              </svg>
                            </a>

                            <button
                              type="button"
                              class="btn btn-black"
                              data-model=".enquire-pop"
                            >
                              Get a Quote
                            </button>
                          </div>
                        </div>
                      </article>
                    </div>

                    <!-- 03 — TIRKEY INTERNATIONAL -->
                    <div class="swiper-slide">
                      <article class="portfolio-card">
                        <div class="portfolio-card__media">
                          <img
                            src="assets/images/website/portfolio/tirkey.png"
                            alt="Tirkey International website"
                            loading="lazy"
                          />
                        </div>

                        <div class="portfolio-card__info">
                          <div class="portfolio-card__text">
                            <h4 class="portfolio-card__name">
                              Tirkey International
                            </h4>

                            <p class="portfolio-card__desc">
                              A recruitment and visa website that builds trust
                              and brings in applications.
                            </p>
                          </div>

                          <div class="portfolio-card__actions">
                            <a
                              href="javascript:void()"
                              target="_blank"
                              rel="noopener"
                              class="btn btn-outline-black"
                            >
                              <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="0.88em"
                                height="1em"
                                viewBox="0 0 448 512"
                              >
                                <path d="M0 0h448v512H0z" fill="none"></path>
                                <path
                                  fill="currentColor"
                                  d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222c0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222c0-59.3-25.2-115-67.1-157m-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4l-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2c0-101.7 82.8-184.5 184.6-184.5c49.3 0 95.6 19.2 130.4 54.1s56.2 81.2 56.1 130.5c0 101.8-84.9 184.6-186.6 184.6m101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18c-5.1-1.9-8.8-2.8-12.5 2.8s-14.3 18-17.6 21.8c-3.2 3.7-6.5 4.2-12 1.4c-32.6-16.3-54-29.1-75.5-66c-5.7-9.8 5.7-9.1 16.3-30.3c1.8-3.7.9-6.9-.5-9.7s-12.5-30.1-17.1-41.2c-4.5-10.8-9.1-9.3-12.5-9.5c-3.2-.2-6.9-.2-10.6-.2s-9.7 1.4-14.8 6.9c-5.1 5.6-19.4 19-19.4 46.3s19.9 53.7 22.6 57.4c2.8 3.7 39.1 59.7 94.8 83.8c35.2 15.2 49 16.5 66.6 13.9c10.7-1.6 32.8-13.4 37.4-26.4s4.6-24.1 3.2-26.4c-1.3-2.5-5-3.9-10.5-6.6"
                                ></path>
                              </svg>
                            </a>

                            <button
                              type="button"
                              class="btn btn-black"
                              data-model=".enquire-pop"
                            >
                              Get a Quote
                            </button>
                          </div>
                        </div>
                      </article>
                    </div>

                    <!-- 04 — JAMEEL NURSERY -->
                    <div class="swiper-slide">
                      <article class="portfolio-card">
                        <div class="portfolio-card__media">
                          <img
                            src="assets/images/website/portfolio/jameel.png"
                            alt="Jameel Nursery website"
                            loading="lazy"
                          />
                        </div>

                        <div class="portfolio-card__info">
                          <div class="portfolio-card__text">
                            <h4 class="portfolio-card__name">Jameel Nursery</h4>

                            <p class="portfolio-card__desc">
                              A clean online catalogue that takes a traditional
                              nursery to customers across cities.
                            </p>
                          </div>

                          <div class="portfolio-card__actions">
                            <a
                              href="javascript:void()"
                              target="_blank"
                              rel="noopener"
                              class="btn btn-outline-black"
                            >
                              <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="0.88em"
                                height="1em"
                                viewBox="0 0 448 512"
                              >
                                <path d="M0 0h448v512H0z" fill="none"></path>
                                <path
                                  fill="currentColor"
                                  d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222c0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222c0-59.3-25.2-115-67.1-157m-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4l-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2c0-101.7 82.8-184.5 184.6-184.5c49.3 0 95.6 19.2 130.4 54.1s56.2 81.2 56.1 130.5c0 101.8-84.9 184.6-186.6 184.6m101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18c-5.1-1.9-8.8-2.8-12.5 2.8s-14.3 18-17.6 21.8c-3.2 3.7-6.5 4.2-12 1.4c-32.6-16.3-54-29.1-75.5-66c-5.7-9.8 5.7-9.1 16.3-30.3c1.8-3.7.9-6.9-.5-9.7s-12.5-30.1-17.1-41.2c-4.5-10.8-9.1-9.3-12.5-9.5c-3.2-.2-6.9-.2-10.6-.2s-9.7 1.4-14.8 6.9c-5.1 5.6-19.4 19-19.4 46.3s19.9 53.7 22.6 57.4c2.8 3.7 39.1 59.7 94.8 83.8c35.2 15.2 49 16.5 66.6 13.9c10.7-1.6 32.8-13.4 37.4-26.4s4.6-24.1 3.2-26.4c-1.3-2.5-5-3.9-10.5-6.6"
                                ></path>
                              </svg>
                            </a>

                            <button
                              type="button"
                              class="btn btn-black"
                              data-model=".enquire-pop"
                            >
                              Get a Quote
                            </button>
                          </div>
                        </div>
                      </article>
                    </div>
                  </div>
                </div>

                <button
                  type="button"
                  class="btn-prev"
                  aria-label="Previous project"
                >
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 1024 1024"
                  >
                    <path
                      fill="currentColor"
                      d="M609.408 149.376L277.76 489.6a32 32 0 0 0 0 44.672l331.648 340.352a29.12 29.12 0 0 0 41.728 0a30.59 30.59 0 0 0 0-42.752L339.264 511.936l311.872-319.872a30.59 30.59 0 0 0 0-42.688a29.12 29.12 0 0 0-41.728 0"
                    ></path>
                  </svg>
                </button>
                <button
                  type="button"
                  class="btn-next"
                  aria-label="Next project"
                >
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 1024 1024"
                  >
                    <path
                      fill="currentColor"
                      d="M414.592 149.376L746.24 489.6a32 32 0 0 1 0 44.672L414.592 874.624a29.12 29.12 0 0 1-41.728 0a30.59 30.59 0 0 1 0-42.752l311.872-319.936L372.864 192a30.59 30.59 0 0 1 0-42.688a29.12 29.12 0 0 1 41.728 0"
                    ></path>
                  </svg>
                </button>
              </div>
            </div>

            <!-- ================= E-COMMERCE ================= -->
            <div class="tabs" data-tab="ecommerce">
              <div class="swiper-wrap">
                <div class="portfolio-swiper swiper">
                  <div class="swiper-wrapper">
                    <!-- 02 — B2B GIFTS INDIA -->
                    <div class="swiper-slide">
                      <article class="portfolio-card">
                        <div class="portfolio-card__media">
                          <img
                            src="assets/images/website/portfolio/b2b.png"
                            alt="B2B Gifts India website"
                            loading="lazy"
                          />
                        </div>

                        <div class="portfolio-card__info">
                          <div class="portfolio-card__text">
                            <h4 class="portfolio-card__name">
                              B2B Gifts India
                            </h4>

                            <p class="portfolio-card__desc">
                              A corporate gifting platform for bulk orders,
                              custom proposals and product discovery, built for
                              businesses.
                            </p>
                          </div>

                          <div class="portfolio-card__actions">
                            <a
                              href="javascript:void()"
                              target="_blank"
                              rel="noopener"
                              class="btn btn-outline-black"
                            >
                              <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="0.88em"
                                height="1em"
                                viewBox="0 0 448 512"
                              >
                                <path d="M0 0h448v512H0z" fill="none"></path>
                                <path
                                  fill="currentColor"
                                  d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222c0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222c0-59.3-25.2-115-67.1-157m-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4l-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2c0-101.7 82.8-184.5 184.6-184.5c49.3 0 95.6 19.2 130.4 54.1s56.2 81.2 56.1 130.5c0 101.8-84.9 184.6-186.6 184.6m101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18c-5.1-1.9-8.8-2.8-12.5 2.8s-14.3 18-17.6 21.8c-3.2 3.7-6.5 4.2-12 1.4c-32.6-16.3-54-29.1-75.5-66c-5.7-9.8 5.7-9.1 16.3-30.3c1.8-3.7.9-6.9-.5-9.7s-12.5-30.1-17.1-41.2c-4.5-10.8-9.1-9.3-12.5-9.5c-3.2-.2-6.9-.2-10.6-.2s-9.7 1.4-14.8 6.9c-5.1 5.6-19.4 19-19.4 46.3s19.9 53.7 22.6 57.4c2.8 3.7 39.1 59.7 94.8 83.8c35.2 15.2 49 16.5 66.6 13.9c10.7-1.6 32.8-13.4 37.4-26.4s4.6-24.1 3.2-26.4c-1.3-2.5-5-3.9-10.5-6.6"
                                ></path>
                              </svg>
                            </a>

                            <button
                              type="button"
                              class="btn btn-black"
                              data-model=".enquire-pop"
                            >
                              Get a Quote
                            </button>
                          </div>
                        </div>
                      </article>
                    </div>

                    <!-- 03 — OUDHYANA CHIKANKARI -->
                    <div class="swiper-slide">
                      <article class="portfolio-card">
                        <div class="portfolio-card__media">
                          <img
                            src="assets/images/website/portfolio/oudhyana.png"
                            alt="Oudhyana Chikankari website"
                            loading="lazy"
                          />
                        </div>

                        <div class="portfolio-card__info">
                          <div class="portfolio-card__text">
                            <h4 class="portfolio-card__name">
                              Oudhyana Chikankari
                            </h4>

                            <p class="portfolio-card__desc">
                              An elegant online store showcasing handcrafted
                              Chikankari collections, offers and custom orders
                              for customers.
                            </p>
                          </div>

                          <div class="portfolio-card__actions">
                            <a
                              href="javascript:void()"
                              target="_blank"
                              rel="noopener"
                              class="btn btn-outline-black"
                            >
                              <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="0.88em"
                                height="1em"
                                viewBox="0 0 448 512"
                              >
                                <path d="M0 0h448v512H0z" fill="none"></path>
                                <path
                                  fill="currentColor"
                                  d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222c0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222c0-59.3-25.2-115-67.1-157m-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4l-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2c0-101.7 82.8-184.5 184.6-184.5c49.3 0 95.6 19.2 130.4 54.1s56.2 81.2 56.1 130.5c0 101.8-84.9 184.6-186.6 184.6m101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18c-5.1-1.9-8.8-2.8-12.5 2.8s-14.3 18-17.6 21.8c-3.2 3.7-6.5 4.2-12 1.4c-32.6-16.3-54-29.1-75.5-66c-5.7-9.8 5.7-9.1 16.3-30.3c1.8-3.7.9-6.9-.5-9.7s-12.5-30.1-17.1-41.2c-4.5-10.8-9.1-9.3-12.5-9.5c-3.2-.2-6.9-.2-10.6-.2s-9.7 1.4-14.8 6.9c-5.1 5.6-19.4 19-19.4 46.3s19.9 53.7 22.6 57.4c2.8 3.7 39.1 59.7 94.8 83.8c35.2 15.2 49 16.5 66.6 13.9c10.7-1.6 32.8-13.4 37.4-26.4s4.6-24.1 3.2-26.4c-1.3-2.5-5-3.9-10.5-6.6"
                                ></path>
                              </svg>
                            </a>
                            <button
                              type="button"
                              class="btn btn-black"
                              data-model=".enquire-pop"
                            >
                              Get a Quote
                            </button>
                          </div>
                        </div>
                      </article>
                    </div>

                    <!-- 04 — LA PAVONE -->
                    <div class="swiper-slide">
                      <article class="portfolio-card">
                        <div class="portfolio-card__media">
                          <img
                            src="assets/images/website/portfolio/la-pavone.png"
                            alt="La Pavone perfume website"
                            loading="lazy"
                          />
                        </div>

                        <div class="portfolio-card__info">
                          <div class="portfolio-card__text">
                            <h4 class="portfolio-card__name">La Pavone</h4>

                            <p class="portfolio-card__desc">
                              A luxury fragrance store designed to showcase
                              collections, new arrivals and offers while
                              supporting online sales.
                            </p>
                          </div>

                          <div class="portfolio-card__actions">
                            <a
                              href="javascript:void()"
                              target="_blank"
                              rel="noopener"
                              class="btn btn-outline-black"
                            >
                              <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="0.88em"
                                height="1em"
                                viewBox="0 0 448 512"
                              >
                                <path d="M0 0h448v512H0z" fill="none"></path>
                                <path
                                  fill="currentColor"
                                  d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222c0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222c0-59.3-25.2-115-67.1-157m-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4l-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2c0-101.7 82.8-184.5 184.6-184.5c49.3 0 95.6 19.2 130.4 54.1s56.2 81.2 56.1 130.5c0 101.8-84.9 184.6-186.6 184.6m101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18c-5.1-1.9-8.8-2.8-12.5 2.8s-14.3 18-17.6 21.8c-3.2 3.7-6.5 4.2-12 1.4c-32.6-16.3-54-29.1-75.5-66c-5.7-9.8 5.7-9.1 16.3-30.3c1.8-3.7.9-6.9-.5-9.7s-12.5-30.1-17.1-41.2c-4.5-10.8-9.1-9.3-12.5-9.5c-3.2-.2-6.9-.2-10.6-.2s-9.7 1.4-14.8 6.9c-5.1 5.6-19.4 19-19.4 46.3s19.9 53.7 22.6 57.4c2.8 3.7 39.1 59.7 94.8 83.8c35.2 15.2 49 16.5 66.6 13.9c10.7-1.6 32.8-13.4 37.4-26.4s4.6-24.1 3.2-26.4c-1.3-2.5-5-3.9-10.5-6.6"
                                ></path>
                              </svg>
                            </a>

                            <button
                              type="button"
                              class="btn btn-black"
                              data-model=".enquire-pop"
                            >
                              Get a Quote
                            </button>
                          </div>
                        </div>
                      </article>
                    </div>

                    <!-- 01 — VANSH IT & COMM -->
                    <div class="swiper-slide">
                      <article class="portfolio-card">
                        <div class="portfolio-card__media">
                          <img
                            src="assets/images/website/portfolio/vansh.png"
                            alt="Vansh IT & Comm website"
                            loading="lazy"
                          />
                        </div>

                        <div class="portfolio-card__info">
                          <div class="portfolio-card__text">
                            <h4 class="portfolio-card__name">
                              Vansh IT &amp; Comm
                            </h4>

                            <p class="portfolio-card__desc">
                              A tech store for laptops, mobiles and accessories,
                              with repair, exchange and shopping services in one
                              place.
                            </p>
                          </div>

                          <div class="portfolio-card__actions">
                            <a
                              href="javascript:void()"
                              target="_blank"
                              rel="noopener"
                              class="btn btn-outline-black"
                            >
                              <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="0.88em"
                                height="1em"
                                viewBox="0 0 448 512"
                              >
                                <path d="M0 0h448v512H0z" fill="none"></path>
                                <path
                                  fill="currentColor"
                                  d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222c0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222c0-59.3-25.2-115-67.1-157m-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4l-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2c0-101.7 82.8-184.5 184.6-184.5c49.3 0 95.6 19.2 130.4 54.1s56.2 81.2 56.1 130.5c0 101.8-84.9 184.6-186.6 184.6m101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18c-5.1-1.9-8.8-2.8-12.5 2.8s-14.3 18-17.6 21.8c-3.2 3.7-6.5 4.2-12 1.4c-32.6-16.3-54-29.1-75.5-66c-5.7-9.8 5.7-9.1 16.3-30.3c1.8-3.7.9-6.9-.5-9.7s-12.5-30.1-17.1-41.2c-4.5-10.8-9.1-9.3-12.5-9.5c-3.2-.2-6.9-.2-10.6-.2s-9.7 1.4-14.8 6.9c-5.1 5.6-19.4 19-19.4 46.3s19.9 53.7 22.6 57.4c2.8 3.7 39.1 59.7 94.8 83.8c35.2 15.2 49 16.5 66.6 13.9c10.7-1.6 32.8-13.4 37.4-26.4s4.6-24.1 3.2-26.4c-1.3-2.5-5-3.9-10.5-6.6"
                                ></path>
                              </svg>
                            </a>

                            <button
                              type="button"
                              class="btn btn-black"
                              data-model=".enquire-pop"
                            >
                              Get a Quote
                            </button>
                          </div>
                        </div>
                      </article>
                    </div>
                  </div>
                </div>

                <button
                  type="button"
                  class="btn-prev"
                  aria-label="Previous project"
                >
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 1024 1024"
                  >
                    <path
                      fill="currentColor"
                      d="M609.408 149.376L277.76 489.6a32 32 0 0 0 0 44.672l331.648 340.352a29.12 29.12 0 0 0 41.728 0a30.59 30.59 0 0 0 0-42.752L339.264 511.936l311.872-319.872a30.59 30.59 0 0 0 0-42.688a29.12 29.12 0 0 0-41.728 0"
                    ></path>
                  </svg>
                </button>
                <button
                  type="button"
                  class="btn-next"
                  aria-label="Next project"
                >
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 1024 1024"
                  >
                    <path
                      fill="currentColor"
                      d="M414.592 149.376L746.24 489.6a32 32 0 0 1 0 44.672L414.592 874.624a29.12 29.12 0 0 1-41.728 0a30.59 30.59 0 0 1 0-42.752l311.872-319.936L372.864 192a30.59 30.59 0 0 1 0-42.688a29.12 29.12 0 0 1 41.728 0"
                    ></path>
                  </svg>
                </button>
              </div>
            </div>

            <!-- ================= EDUCATION PORTALS ================= -->
            <div class="tabs" data-tab="education-portals">
              <div class="swiper-wrap">
                <div class="portfolio-swiper swiper">
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <article class="portfolio-card">
                        <div class="portfolio-card__media">
                          <img
                            src="assets/images/website/portfolio/Exam-Time.png"
                            alt="The Exam Time online exam preparation website"
                            loading="lazy"
                          />
                        </div>

                        <div class="portfolio-card__info">
                          <div class="portfolio-card__text">
                            <h4 class="portfolio-card__name">The Exam Time</h4>

                            <p class="portfolio-card__desc">
                              An online learning platform for civil service
                              aspirants, offering test series, live classes and
                              student support.
                            </p>
                          </div>

                          <div class="portfolio-card__actions">
                            <a
                              href="javascript:void()"
                              target="_blank"
                              rel="noopener"
                              class="btn btn-outline-black"
                            >
                              <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="0.88em"
                                height="1em"
                                viewBox="0 0 448 512"
                              >
                                <path d="M0 0h448v512H0z" fill="none"></path>
                                <path
                                  fill="currentColor"
                                  d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222c0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222c0-59.3-25.2-115-67.1-157m-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4l-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2c0-101.7 82.8-184.5 184.6-184.5c49.3 0 95.6 19.2 130.4 54.1s56.2 81.2 56.1 130.5c0 101.8-84.9 184.6-186.6 184.6m101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18c-5.1-1.9-8.8-2.8-12.5 2.8s-14.3 18-17.6 21.8c-3.2 3.7-6.5 4.2-12 1.4c-32.6-16.3-54-29.1-75.5-66c-5.7-9.8 5.7-9.1 16.3-30.3c1.8-3.7.9-6.9-.5-9.7s-12.5-30.1-17.1-41.2c-4.5-10.8-9.1-9.3-12.5-9.5c-3.2-.2-6.9-.2-10.6-.2s-9.7 1.4-14.8 6.9c-5.1 5.6-19.4 19-19.4 46.3s19.9 53.7 22.6 57.4c2.8 3.7 39.1 59.7 94.8 83.8c35.2 15.2 49 16.5 66.6 13.9c10.7-1.6 32.8-13.4 37.4-26.4s4.6-24.1 3.2-26.4c-1.3-2.5-5-3.9-10.5-6.6"
                                ></path>
                              </svg>
                            </a>

                            <button
                              type="button"
                              class="btn btn-black"
                              data-model=".enquire-pop"
                            >
                              Get a Quote
                            </button>
                          </div>
                        </div>
                      </article>
                    </div>

                    <div class="swiper-slide">
                      <article class="portfolio-card">
                        <div class="portfolio-card__media">
                          <img
                            src="assets/images/website/portfolio/Adhyayanam.png"
                            alt="Adhyayanam IAS coaching website"
                            loading="lazy"
                          />
                        </div>

                        <div class="portfolio-card__info">
                          <div class="portfolio-card__text">
                            <h4 class="portfolio-card__name">Adhyayanam IAS</h4>

                            <p class="portfolio-card__desc">
                              A modern coaching website for UPSC and State PCS
                              programs, with courses, study material and student
                              enquiries.
                            </p>
                          </div>

                          <div class="portfolio-card__actions">
                            <a
                              href="javascript:void()"
                              target="_blank"
                              rel="noopener"
                              class="btn btn-outline-black"
                            >
                              <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="0.88em"
                                height="1em"
                                viewBox="0 0 448 512"
                              >
                                <path d="M0 0h448v512H0z" fill="none"></path>
                                <path
                                  fill="currentColor"
                                  d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222c0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222c0-59.3-25.2-115-67.1-157m-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4l-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2c0-101.7 82.8-184.5 184.6-184.5c49.3 0 95.6 19.2 130.4 54.1s56.2 81.2 56.1 130.5c0 101.8-84.9 184.6-186.6 184.6m101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18c-5.1-1.9-8.8-2.8-12.5 2.8s-14.3 18-17.6 21.8c-3.2 3.7-6.5 4.2-12 1.4c-32.6-16.3-54-29.1-75.5-66c-5.7-9.8 5.7-9.1 16.3-30.3c1.8-3.7.9-6.9-.5-9.7s-12.5-30.1-17.1-41.2c-4.5-10.8-9.1-9.3-12.5-9.5c-3.2-.2-6.9-.2-10.6-.2s-9.7 1.4-14.8 6.9c-5.1 5.6-19.4 19-19.4 46.3s19.9 53.7 22.6 57.4c2.8 3.7 39.1 59.7 94.8 83.8c35.2 15.2 49 16.5 66.6 13.9c10.7-1.6 32.8-13.4 37.4-26.4s4.6-24.1 3.2-26.4c-1.3-2.5-5-3.9-10.5-6.6"
                                ></path>
                              </svg>
                            </a>

                            <button
                              type="button"
                              class="btn btn-black"
                              data-model=".enquire-pop"
                            >
                              Get a Quote
                            </button>
                          </div>
                        </div>
                      </article>
                    </div>

                    <div class="swiper-slide">
                      <article class="portfolio-card">
                        <div class="portfolio-card__media">
                          <img
                            src="assets/images/website/portfolio/RACE-IAS.png"
                            alt="RACE IAS coaching website"
                            loading="lazy"
                          />
                        </div>

                        <div class="portfolio-card__info">
                          <div class="portfolio-card__text">
                            <h4 class="portfolio-card__name">RACE IAS</h4>

                            <p class="portfolio-card__desc">
                              A coaching institute website presenting UPSC
                              courses, programs, test series and useful student
                              information.
                            </p>
                          </div>

                          <div class="portfolio-card__actions">
                            <a
                              href="javascript:void()"
                              target="_blank"
                              rel="noopener"
                              class="btn btn-outline-black"
                            >
                              <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="0.88em"
                                height="1em"
                                viewBox="0 0 448 512"
                              >
                                <path d="M0 0h448v512H0z" fill="none"></path>
                                <path
                                  fill="currentColor"
                                  d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222c0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222c0-59.3-25.2-115-67.1-157m-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4l-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2c0-101.7 82.8-184.5 184.6-184.5c49.3 0 95.6 19.2 130.4 54.1s56.2 81.2 56.1 130.5c0 101.8-84.9 184.6-186.6 184.6m101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18c-5.1-1.9-8.8-2.8-12.5 2.8s-14.3 18-17.6 21.8c-3.2 3.7-6.5 4.2-12 1.4c-32.6-16.3-54-29.1-75.5-66c-5.7-9.8 5.7-9.1 16.3-30.3c1.8-3.7.9-6.9-.5-9.7s-12.5-30.1-17.1-41.2c-4.5-10.8-9.1-9.3-12.5-9.5c-3.2-.2-6.9-.2-10.6-.2s-9.7 1.4-14.8 6.9c-5.1 5.6-19.4 19-19.4 46.3s19.9 53.7 22.6 57.4c2.8 3.7 39.1 59.7 94.8 83.8c35.2 15.2 49 16.5 66.6 13.9c10.7-1.6 32.8-13.4 37.4-26.4s4.6-24.1 3.2-26.4c-1.3-2.5-5-3.9-10.5-6.6"
                                ></path>
                              </svg>
                            </a>

                            <button
                              type="button"
                              class="btn btn-black"
                              data-model=".enquire-pop"
                            >
                              Get a Quote
                            </button>
                          </div>
                        </div>
                      </article>
                    </div>
                  </div>
                </div>

                <button
                  type="button"
                  class="btn-prev"
                  aria-label="Previous project"
                >
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 1024 1024"
                  >
                    <path
                      fill="currentColor"
                      d="M609.408 149.376L277.76 489.6a32 32 0 0 0 0 44.672l331.648 340.352a29.12 29.12 0 0 0 41.728 0a30.59 30.59 0 0 0 0-42.752L339.264 511.936l311.872-319.872a30.59 30.59 0 0 0 0-42.688a29.12 29.12 0 0 0-41.728 0"
                    ></path>
                  </svg>
                </button>
                <button
                  type="button"
                  class="btn-next"
                  aria-label="Next project"
                >
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 1024 1024"
                  >
                    <path
                      fill="currentColor"
                      d="M414.592 149.376L746.24 489.6a32 32 0 0 1 0 44.672L414.592 874.624a29.12 29.12 0 0 1-41.728 0a30.59 30.59 0 0 1 0-42.752l311.872-319.936L372.864 192a30.59 30.59 0 0 1 0-42.688a29.12 29.12 0 0 1 41.728 0"
                    ></path>
                  </svg>
                </button>
              </div>
            </div>

            <div class="tabs" data-tab="classified-portals">
              <div class="swiper-wrap">
                <div class="portfolio-swiper swiper">
                  <div class="swiper-wrapper">
                    <!-- 01 — APNASHAHER -->
                    <div class="swiper-slide">
                      <article class="portfolio-card">
                        <div class="portfolio-card__media">
                          <img
                            src="assets/images/website/portfolio/apnaShaher.png"
                            alt="ApnaShaher institute listing website"
                            loading="lazy"
                          />
                        </div>

                        <div class="portfolio-card__info">
                          <div class="portfolio-card__text">
                            <h4 class="portfolio-card__name">ApnaShaher</h4>

                            <p class="portfolio-card__desc">
                              A local directory platform helping students
                              discover coaching institutes and businesses reach
                              their city audience.
                            </p>
                          </div>

                          <div class="portfolio-card__actions">
                            <a
                              href="javascript:void()"
                              target="_blank"
                              rel="noopener"
                              class="btn btn-outline-black"
                            >
                              <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="0.88em"
                                height="1em"
                                viewBox="0 0 448 512"
                              >
                                <path d="M0 0h448v512H0z" fill="none"></path>
                                <path
                                  fill="currentColor"
                                  d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222c0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222c0-59.3-25.2-115-67.1-157m-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4l-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2c0-101.7 82.8-184.5 184.6-184.5c49.3 0 95.6 19.2 130.4 54.1s56.2 81.2 56.1 130.5c0 101.8-84.9 184.6-186.6 184.6m101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18c-5.1-1.9-8.8-2.8-12.5 2.8s-14.3 18-17.6 21.8c-3.2 3.7-6.5 4.2-12 1.4c-32.6-16.3-54-29.1-75.5-66c-5.7-9.8 5.7-9.1 16.3-30.3c1.8-3.7.9-6.9-.5-9.7s-12.5-30.1-17.1-41.2c-4.5-10.8-9.1-9.3-12.5-9.5c-3.2-.2-6.9-.2-10.6-.2s-9.7 1.4-14.8 6.9c-5.1 5.6-19.4 19-19.4 46.3s19.9 53.7 22.6 57.4c2.8 3.7 39.1 59.7 94.8 83.8c35.2 15.2 49 16.5 66.6 13.9c10.7-1.6 32.8-13.4 37.4-26.4s4.6-24.1 3.2-26.4c-1.3-2.5-5-3.9-10.5-6.6"
                                ></path>
                              </svg>
                            </a>

                            <button
                              type="button"
                              class="btn btn-black"
                              data-model=".enquire-pop"
                            >
                              Get a Quote
                            </button>
                          </div>
                        </div>
                      </article>
                    </div>

                    <!-- 02 — PASHUGHAR -->
                    <div class="swiper-slide">
                      <article class="portfolio-card">
                        <div class="portfolio-card__media">
                          <img
                            src="assets/images/website/portfolio/pahughar.png"
                            alt="PashuGhar livestock and dairy marketplace website"
                            loading="lazy"
                          />
                        </div>

                        <div class="portfolio-card__info">
                          <div class="portfolio-card__text">
                            <h4 class="portfolio-card__name">PashuGhar</h4>

                            <p class="portfolio-card__desc">
                              A classifieds marketplace connecting livestock and
                              dairy sellers with buyers through direct enquiries
                              across India.
                            </p>
                          </div>

                          <div class="portfolio-card__actions">
                            <a
                              href="javascript:void()"
                              target="_blank"
                              rel="noopener"
                              class="btn btn-outline-black"
                            >
                              <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="0.88em"
                                height="1em"
                                viewBox="0 0 448 512"
                              >
                                <path d="M0 0h448v512H0z" fill="none"></path>
                                <path
                                  fill="currentColor"
                                  d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222c0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222c0-59.3-25.2-115-67.1-157m-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4l-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2c0-101.7 82.8-184.5 184.6-184.5c49.3 0 95.6 19.2 130.4 54.1s56.2 81.2 56.1 130.5c0 101.8-84.9 184.6-186.6 184.6m101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18c-5.1-1.9-8.8-2.8-12.5 2.8s-14.3 18-17.6 21.8c-3.2 3.7-6.5 4.2-12 1.4c-32.6-16.3-54-29.1-75.5-66c-5.7-9.8 5.7-9.1 16.3-30.3c1.8-3.7.9-6.9-.5-9.7s-12.5-30.1-17.1-41.2c-4.5-10.8-9.1-9.3-12.5-9.5c-3.2-.2-6.9-.2-10.6-.2s-9.7 1.4-14.8 6.9c-5.1 5.6-19.4 19-19.4 46.3s19.9 53.7 22.6 57.4c2.8 3.7 39.1 59.7 94.8 83.8c35.2 15.2 49 16.5 66.6 13.9c10.7-1.6 32.8-13.4 37.4-26.4s4.6-24.1 3.2-26.4c-1.3-2.5-5-3.9-10.5-6.6"
                                ></path>
                              </svg>
                            </a>

                            <button
                              type="button"
                              class="btn btn-black"
                              data-model=".enquire-pop"
                            >
                              Get a Quote
                            </button>
                          </div>
                        </div>
                      </article>
                    </div>

                    <!-- 03 — WELCOME POST -->
                    <div class="swiper-slide">
                      <article class="portfolio-card">
                        <div class="portfolio-card__media">
                          <img
                            src="assets/images/website/portfolio/welcomePost.png"
                            alt="Welcome Post classifieds website"
                            loading="lazy"
                          />
                        </div>

                        <div class="portfolio-card__info">
                          <div class="portfolio-card__text">
                            <h4 class="portfolio-card__name">Welcome Post</h4>

                            <p class="portfolio-card__desc">
                              A classifieds platform where users can buy, sell
                              and list products, property and services across
                              different categories.
                            </p>
                          </div>

                          <div class="portfolio-card__actions">
                            <a
                              href="javascript:void()"
                              target="_blank"
                              rel="noopener"
                              class="btn btn-outline-black"
                            >
                              <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="0.88em"
                                height="1em"
                                viewBox="0 0 448 512"
                              >
                                <path d="M0 0h448v512H0z" fill="none"></path>
                                <path
                                  fill="currentColor"
                                  d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222c0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222c0-59.3-25.2-115-67.1-157m-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4l-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2c0-101.7 82.8-184.5 184.6-184.5c49.3 0 95.6 19.2 130.4 54.1s56.2 81.2 56.1 130.5c0 101.8-84.9 184.6-186.6 184.6m101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18c-5.1-1.9-8.8-2.8-12.5 2.8s-14.3 18-17.6 21.8c-3.2 3.7-6.5 4.2-12 1.4c-32.6-16.3-54-29.1-75.5-66c-5.7-9.8 5.7-9.1 16.3-30.3c1.8-3.7.9-6.9-.5-9.7s-12.5-30.1-17.1-41.2c-4.5-10.8-9.1-9.3-12.5-9.5c-3.2-.2-6.9-.2-10.6-.2s-9.7 1.4-14.8 6.9c-5.1 5.6-19.4 19-19.4 46.3s19.9 53.7 22.6 57.4c2.8 3.7 39.1 59.7 94.8 83.8c35.2 15.2 49 16.5 66.6 13.9c10.7-1.6 32.8-13.4 37.4-26.4s4.6-24.1 3.2-26.4c-1.3-2.5-5-3.9-10.5-6.6"
                                ></path>
                              </svg>
                            </a>

                            <button
                              type="button"
                              class="btn btn-black"
                              data-model=".enquire-pop"
                            >
                              Get a Quote
                            </button>
                          </div>
                        </div>
                      </article>
                    </div>
                  </div>
                </div>

                <button
                  type="button"
                  class="btn-prev"
                  aria-label="Previous project"
                >
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 1024 1024"
                  >
                    <path
                      fill="currentColor"
                      d="M609.408 149.376L277.76 489.6a32 32 0 0 0 0 44.672l331.648 340.352a29.12 29.12 0 0 0 41.728 0a30.59 30.59 0 0 0 0-42.752L339.264 511.936l311.872-319.872a30.59 30.59 0 0 0 0-42.688a29.12 29.12 0 0 0-41.728 0"
                    ></path>
                  </svg>
                </button>
                <button
                  type="button"
                  class="btn-next"
                  aria-label="Next project"
                >
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 1024 1024"
                  >
                    <path
                      fill="currentColor"
                      d="M414.592 149.376L746.24 489.6a32 32 0 0 1 0 44.672L414.592 874.624a29.12 29.12 0 0 1-41.728 0a30.59 30.59 0 0 1 0-42.752l311.872-319.936L372.864 192a30.59 30.59 0 0 1 0-42.688a29.12 29.12 0 0 1 41.728 0"
                    ></path>
                  </svg>
                </button>
              </div>
            </div>

            <div class="tabs" data-tab="news">
              <div class="swiper-wrap">
                <div class="portfolio-swiper swiper">
                  <div class="swiper-wrapper">
                    <!-- 06 — PRAKASH PRABHAW NEWS -->
                    <div class="swiper-slide">
                      <article class="portfolio-card">
                        <div class="portfolio-card__media">
                          <img
                            src="assets/images/website/portfolio/prakashNews.png"
                            alt="Prakash Prabhaw News website"
                            loading="lazy"
                          />
                        </div>

                        <div class="portfolio-card__info">
                          <div class="portfolio-card__text">
                            <h4 class="portfolio-card__name">
                              Prakash Prabhaw News
                            </h4>

                            <p class="portfolio-card__desc">
                              A Hindi news portal bringing live updates, videos,
                              and trending stories from across Uttar Pradesh and
                              India.
                            </p>
                          </div>

                          <div class="portfolio-card__actions">
                            <a
                              href="javascript:void()"
                              target="_blank"
                              rel="noopener"
                              class="btn btn-outline-black"
                              aria-label="Visit Prakash Prabhaw News website"
                            >
                              <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="0.88em"
                                height="1em"
                                viewBox="0 0 448 512"
                              >
                                <path d="M0 0h448v512H0z" fill="none"></path>
                                <path
                                  fill="currentColor"
                                  d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222c0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222c0-59.3-25.2-115-67.1-157m-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4l-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2c0-101.7 82.8-184.5 184.6-184.5c49.3 0 95.6 19.2 130.4 54.1s56.2 81.2 56.1 130.5c0 101.8-84.9 184.6-186.6 184.6m101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18c-5.1-1.9-8.8-2.8-12.5 2.8s-14.3 18-17.6 21.8c-3.2 3.7-6.5 4.2-12 1.4c-32.6-16.3-54-29.1-75.5-66c-5.7-9.8 5.7-9.1 16.3-30.3c1.8-3.7.9-6.9-.5-9.7s-12.5-30.1-17.1-41.2c-4.5-10.8-9.1-9.3-12.5-9.5c-3.2-.2-6.9-.2-10.6-.2s-9.7 1.4-14.8 6.9c-5.1 5.6-19.4 19-19.4 46.3s19.9 53.7 22.6 57.4c2.8 3.7 39.1 59.7 94.8 83.8c35.2 15.2 49 16.5 66.6 13.9c10.7-1.6 32.8-13.4 37.4-26.4s4.6-24.1 3.2-26.4c-1.3-2.5-5-3.9-10.5-6.6"
                                ></path>
                              </svg>
                            </a>

                            <button
                              type="button"
                              class="btn btn-black"
                              data-model=".enquire-pop"
                            >
                              Get a Quote
                            </button>
                          </div>
                        </div>
                      </article>
                    </div>
                    <!-- 07 — TEJYUG NEWS -->
                    <div class="swiper-slide">
                      <article class="portfolio-card">
                        <div class="portfolio-card__media">
                          <img
                            src="assets/images/website/portfolio/tejyoug.png"
                            alt="Tejyug News website"
                            loading="lazy"
                          />
                        </div>

                        <div class="portfolio-card__info">
                          <div class="portfolio-card__text">
                            <h4 class="portfolio-card__name">Tejyug News</h4>

                            <p class="portfolio-card__desc">
                              A magazine-style Hindi news website with breaking
                              news, state and national sections, and a clean
                              layout for easy reading.
                            </p>
                          </div>

                          <div class="portfolio-card__actions">
                            <a
                              href="javascript:void()"
                              target="_blank"
                              rel="noopener"
                              class="btn btn-outline-black"
                              aria-label="Visit Tejyug News website"
                            >
                              <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="0.88em"
                                height="1em"
                                viewBox="0 0 448 512"
                              >
                                <path d="M0 0h448v512H0z" fill="none"></path>
                                <path
                                  fill="currentColor"
                                  d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222c0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222c0-59.3-25.2-115-67.1-157m-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4l-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2c0-101.7 82.8-184.5 184.6-184.5c49.3 0 95.6 19.2 130.4 54.1s56.2 81.2 56.1 130.5c0 101.8-84.9 184.6-186.6 184.6m101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18c-5.1-1.9-8.8-2.8-12.5 2.8s-14.3 18-17.6 21.8c-3.2 3.7-6.5 4.2-12 1.4c-32.6-16.3-54-29.1-75.5-66c-5.7-9.8 5.7-9.1 16.3-30.3c1.8-3.7.9-6.9-.5-9.7s-12.5-30.1-17.1-41.2c-4.5-10.8-9.1-9.3-12.5-9.5c-3.2-.2-6.9-.2-10.6-.2s-9.7 1.4-14.8 6.9c-5.1 5.6-19.4 19-19.4 46.3s19.9 53.7 22.6 57.4c2.8 3.7 39.1 59.7 94.8 83.8c35.2 15.2 49 16.5 66.6 13.9c10.7-1.6 32.8-13.4 37.4-26.4s4.6-24.1 3.2-26.4c-1.3-2.5-5-3.9-10.5-6.6"
                                ></path>
                              </svg>
                            </a>

                            <button
                              type="button"
                              class="btn btn-black"
                              data-model=".enquire-pop"
                            >
                              Get a Quote
                            </button>
                          </div>
                        </div>
                      </article>
                    </div>
                  </div>
                </div>

                <button
                  type="button"
                  class="btn-prev"
                  aria-label="Previous project"
                >
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 1024 1024"
                  >
                    <path
                      fill="currentColor"
                      d="M609.408 149.376L277.76 489.6a32 32 0 0 0 0 44.672l331.648 340.352a29.12 29.12 0 0 0 41.728 0a30.59 30.59 0 0 0 0-42.752L339.264 511.936l311.872-319.872a30.59 30.59 0 0 0 0-42.688a29.12 29.12 0 0 0-41.728 0"
                    ></path>
                  </svg>
                </button>
                <button
                  type="button"
                  class="btn-next"
                  aria-label="Next project"
                >
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 1024 1024"
                  >
                    <path
                      fill="currentColor"
                      d="M414.592 149.376L746.24 489.6a32 32 0 0 1 0 44.672L414.592 874.624a29.12 29.12 0 0 1-41.728 0a30.59 30.59 0 0 1 0-42.752l311.872-319.936L372.864 192a30.59 30.59 0 0 1 0-42.688a29.12 29.12 0 0 1 41.728 0"
                    ></path>
                  </svg>
                </button>
              </div>
            </div>

            <div class="tabs" data-tab="ngo">
              <div class="swiper-wrap">
                <div class="portfolio-swiper swiper">
                  <div class="swiper-wrapper">
                    <!-- 08 — HELP THE CHILDREN FOUNDATION -->
                    <div class="swiper-slide">
                      <article class="portfolio-card">
                        <div class="portfolio-card__media">
                          <img
                            src="assets/images/website/portfolio/help-children.png"
                            alt="Help The Children Foundation website"
                            loading="lazy"
                          />
                        </div>

                        <div class="portfolio-card__info">
                          <div class="portfolio-card__text">
                            <h4 class="portfolio-card__name">
                              Help The Children
                            </h4>

                            <p class="portfolio-card__desc">
                              An NGO website that showcases health, education,
                              and women empowerment programs and makes donating
                              simple.
                            </p>
                          </div>

                          <div class="portfolio-card__actions">
                            <a
                              href="javascript:void()"
                              target="_blank"
                              rel="noopener"
                              class="btn btn-outline-black"
                              aria-label="Visit Help The Children website"
                            >
                              <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="0.88em"
                                height="1em"
                                viewBox="0 0 448 512"
                              >
                                <path d="M0 0h448v512H0z" fill="none"></path>
                                <path
                                  fill="currentColor"
                                  d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222c0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222c0-59.3-25.2-115-67.1-157m-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4l-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2c0-101.7 82.8-184.5 184.6-184.5c49.3 0 95.6 19.2 130.4 54.1s56.2 81.2 56.1 130.5c0 101.8-84.9 184.6-186.6 184.6m101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18c-5.1-1.9-8.8-2.8-12.5 2.8s-14.3 18-17.6 21.8c-3.2 3.7-6.5 4.2-12 1.4c-32.6-16.3-54-29.1-75.5-66c-5.7-9.8 5.7-9.1 16.3-30.3c1.8-3.7.9-6.9-.5-9.7s-12.5-30.1-17.1-41.2c-4.5-10.8-9.1-9.3-12.5-9.5c-3.2-.2-6.9-.2-10.6-.2s-9.7 1.4-14.8 6.9c-5.1 5.6-19.4 19-19.4 46.3s19.9 53.7 22.6 57.4c2.8 3.7 39.1 59.7 94.8 83.8c35.2 15.2 49 16.5 66.6 13.9c10.7-1.6 32.8-13.4 37.4-26.4s4.6-24.1 3.2-26.4c-1.3-2.5-5-3.9-10.5-6.6"
                                ></path>
                              </svg>
                            </a>

                            <button
                              type="button"
                              class="btn btn-black"
                              data-model=".enquire-pop"
                            >
                              Get a Quote
                            </button>
                          </div>
                        </div>
                      </article>
                    </div>

                    <!-- 09 — SMILE CHILD CARE FOUNDATION -->
                    <div class="swiper-slide">
                      <article class="portfolio-card">
                        <div class="portfolio-card__media">
                          <img
                            src="assets/images/website/portfolio/smile.png"
                            alt="Smile Child Care Foundation website"
                            loading="lazy"
                          />
                        </div>

                        <div class="portfolio-card__info">
                          <div class="portfolio-card__text">
                            <h4 class="portfolio-card__name">
                              Smile Child Care Foundation
                            </h4>

                            <p class="portfolio-card__desc">
                              An NGO website that highlights child welfare
                              programmes, events, and donor stories, with simple
                              ways to donate and get involved.
                            </p>
                          </div>

                          <div class="portfolio-card__actions">
                            <a
                              href="https://your-live-site-url.com"
                              target="_blank"
                              rel="noopener"
                              class="btn btn-outline-black"
                              aria-label="Visit Smile Child Care Foundation website"
                            >
                              <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="0.88em"
                                height="1em"
                                viewBox="0 0 448 512"
                              >
                                <path d="M0 0h448v512H0z" fill="none"></path>
                                <path
                                  fill="currentColor"
                                  d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222c0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222c0-59.3-25.2-115-67.1-157m-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4l-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2c0-101.7 82.8-184.5 184.6-184.5c49.3 0 95.6 19.2 130.4 54.1s56.2 81.2 56.1 130.5c0 101.8-84.9 184.6-186.6 184.6m101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18c-5.1-1.9-8.8-2.8-12.5 2.8s-14.3 18-17.6 21.8c-3.2 3.7-6.5 4.2-12 1.4c-32.6-16.3-54-29.1-75.5-66c-5.7-9.8 5.7-9.1 16.3-30.3c1.8-3.7.9-6.9-.5-9.7s-12.5-30.1-17.1-41.2c-4.5-10.8-9.1-9.3-12.5-9.5c-3.2-.2-6.9-.2-10.6-.2s-9.7 1.4-14.8 6.9c-5.1 5.6-19.4 19-19.4 46.3s19.9 53.7 22.6 57.4c2.8 3.7 39.1 59.7 94.8 83.8c35.2 15.2 49 16.5 66.6 13.9c10.7-1.6 32.8-13.4 37.4-26.4s4.6-24.1 3.2-26.4c-1.3-2.5-5-3.9-10.5-6.6"
                                ></path>
                              </svg>
                            </a>

                            <button
                              type="button"
                              class="btn btn-black"
                              data-model=".enquire-pop"
                            >
                              Get a Quote
                            </button>
                          </div>
                        </div>
                      </article>
                    </div>

                    <!-- 10 — SMILE FOUNDATION -->
<div class="swiper-slide">
  <article class="portfolio-card">
    <div class="portfolio-card__media">
      <img
        src="assets/images/website/portfolio/smileFoundaiton.png"
        alt="Smile Foundation website"
        loading="lazy"
      />
    </div>

    <div class="portfolio-card__info">
      <div class="portfolio-card__text">
        <h4 class="portfolio-card__name">Smile Foundation</h4>

        <p class="portfolio-card__desc">
          A non-profit website that shares its work for children's health and
          education, with news, events, and an easy way to donate.
        </p>
      </div>

      <div class="portfolio-card__actions">
        <a
          href="https://your-live-site-url.com"
          target="_blank"
          rel="noopener"
          class="btn btn-outline-black"
          aria-label="Visit Smile Foundation website"
        >
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="0.88em"
            height="1em"
            viewBox="0 0 448 512"
          >
            <path d="M0 0h448v512H0z" fill="none"></path>
            <path
              fill="currentColor"
              d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222c0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222c0-59.3-25.2-115-67.1-157m-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4l-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2c0-101.7 82.8-184.5 184.6-184.5c49.3 0 95.6 19.2 130.4 54.1s56.2 81.2 56.1 130.5c0 101.8-84.9 184.6-186.6 184.6m101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18c-5.1-1.9-8.8-2.8-12.5 2.8s-14.3 18-17.6 21.8c-3.2 3.7-6.5 4.2-12 1.4c-32.6-16.3-54-29.1-75.5-66c-5.7-9.8 5.7-9.1 16.3-30.3c1.8-3.7.9-6.9-.5-9.7s-12.5-30.1-17.1-41.2c-4.5-10.8-9.1-9.3-12.5-9.5c-3.2-.2-6.9-.2-10.6-.2s-9.7 1.4-14.8 6.9c-5.1 5.6-19.4 19-19.4 46.3s19.9 53.7 22.6 57.4c2.8 3.7 39.1 59.7 94.8 83.8c35.2 15.2 49 16.5 66.6 13.9c10.7-1.6 32.8-13.4 37.4-26.4s4.6-24.1 3.2-26.4c-1.3-2.5-5-3.9-10.5-6.6"
            ></path>
          </svg>
        </a>

        <button
          type="button"
          class="btn btn-black"
          data-model=".enquire-pop"
        >
          Get a Quote
        </button>
      </div>
    </div>
  </article>
</div>
                  </div>
                </div>

                <button
                  type="button"
                  class="btn-prev"
                  aria-label="Previous project"
                >
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 1024 1024"
                  >
                    <path
                      fill="currentColor"
                      d="M609.408 149.376L277.76 489.6a32 32 0 0 0 0 44.672l331.648 340.352a29.12 29.12 0 0 0 41.728 0a30.59 30.59 0 0 0 0-42.752L339.264 511.936l311.872-319.872a30.59 30.59 0 0 0 0-42.688a29.12 29.12 0 0 0-41.728 0"
                    ></path>
                  </svg>
                </button>
                <button
                  type="button"
                  class="btn-next"
                  aria-label="Next project"
                >
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 1024 1024"
                  >
                    <path
                      fill="currentColor"
                      d="M414.592 149.376L746.24 489.6a32 32 0 0 1 0 44.672L414.592 874.624a29.12 29.12 0 0 1-41.728 0a30.59 30.59 0 0 1 0-42.752l311.872-319.936L372.864 192a30.59 30.59 0 0 1 0-42.688a29.12 29.12 0 0 1 41.728 0"
                    ></path>
                  </svg>
                </button>
              </div>
            </div>

            <div class="tabs" data-tab="custom-application">
              <div class="swiper-wrap">
                <div class="portfolio-swiper swiper">
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <article class="portfolio-card">
                        <div class="portfolio-card__media">
                          <img
                            src="assets/images/website/portfolio/bookEmpire.png"
                            alt="Book Empire online bookstore website"
                            loading="lazy"
                          />
                        </div>

                        <div class="portfolio-card__info">
                          <div class="portfolio-card__text">
                            <h4 class="portfolio-card__name">Book Empire</h4>
                            <p class="portfolio-card__desc">
                              An online bookstore website where readers can
                              explore a wide range of books, with a clean design
                              and easy browsing.
                            </p>
                          </div>

                          <div class="portfolio-card__actions">
                            <a
                              href="javascript:void()"
                              target="_blank"
                              rel="noopener"
                              class="btn btn-outline-black"
                            >
                              <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="0.88em"
                                height="1em"
                                viewBox="0 0 448 512"
                              >
                                <path d="M0 0h448v512H0z" fill="none"></path>
                                <path
                                  fill="currentColor"
                                  d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222c0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222c0-59.3-25.2-115-67.1-157m-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4l-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2c0-101.7 82.8-184.5 184.6-184.5c49.3 0 95.6 19.2 130.4 54.1s56.2 81.2 56.1 130.5c0 101.8-84.9 184.6-186.6 184.6m101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18c-5.1-1.9-8.8-2.8-12.5 2.8s-14.3 18-17.6 21.8c-3.2 3.7-6.5 4.2-12 1.4c-32.6-16.3-54-29.1-75.5-66c-5.7-9.8 5.7-9.1 16.3-30.3c1.8-3.7.9-6.9-.5-9.7s-12.5-30.1-17.1-41.2c-4.5-10.8-9.1-9.3-12.5-9.5c-3.2-.2-6.9-.2-10.6-.2s-9.7 1.4-14.8 6.9c-5.1 5.6-19.4 19-19.4 46.3s19.9 53.7 22.6 57.4c2.8 3.7 39.1 59.7 94.8 83.8c35.2 15.2 49 16.5 66.6 13.9c10.7-1.6 32.8-13.4 37.4-26.4s4.6-24.1 3.2-26.4c-1.3-2.5-5-3.9-10.5-6.6"
                                ></path>
                              </svg>
                            </a>

                            <button
                              type="button"
                              class="btn btn-black"
                              data-model=".enquire-pop"
                            >
                              Get a Quote
                            </button>
                          </div>
                        </div>
                      </article>
                    </div>

                    <div class="swiper-slide">
                      <article class="portfolio-card">
                        <div class="portfolio-card__media">
                          <img
                            src="assets/images/website/portfolio/nuvemPrint.png"
                            alt="Nuvem Print digital book printing website"
                            loading="lazy"
                          />
                        </div>

                        <div class="portfolio-card__info">
                          <div class="portfolio-card__text">
                            <h4 class="portfolio-card__name">Nuvem Print</h4>
                            <p class="portfolio-card__desc">
                              A digital printing company website covering book
                              printing, manuals, large format and signage, with
                              in-house design and an easy quote request.
                            </p>
                          </div>

                          <div class="portfolio-card__actions">
                            <a
                              href="javascript:void()"
                              target="_blank"
                              rel="noopener"
                              class="btn btn-outline-black"
                            >
                              <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="0.88em"
                                height="1em"
                                viewBox="0 0 448 512"
                              >
                                <path d="M0 0h448v512H0z" fill="none"></path>
                                <path
                                  fill="currentColor"
                                  d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222c0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222c0-59.3-25.2-115-67.1-157m-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4l-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2c0-101.7 82.8-184.5 184.6-184.5c49.3 0 95.6 19.2 130.4 54.1s56.2 81.2 56.1 130.5c0 101.8-84.9 184.6-186.6 184.6m101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18c-5.1-1.9-8.8-2.8-12.5 2.8s-14.3 18-17.6 21.8c-3.2 3.7-6.5 4.2-12 1.4c-32.6-16.3-54-29.1-75.5-66c-5.7-9.8 5.7-9.1 16.3-30.3c1.8-3.7.9-6.9-.5-9.7s-12.5-30.1-17.1-41.2c-4.5-10.8-9.1-9.3-12.5-9.5c-3.2-.2-6.9-.2-10.6-.2s-9.7 1.4-14.8 6.9c-5.1 5.6-19.4 19-19.4 46.3s19.9 53.7 22.6 57.4c2.8 3.7 39.1 59.7 94.8 83.8c35.2 15.2 49 16.5 66.6 13.9c10.7-1.6 32.8-13.4 37.4-26.4s4.6-24.1 3.2-26.4c-1.3-2.5-5-3.9-10.5-6.6"
                                ></path>
                              </svg>
                            </a>

                            <button
                              type="button"
                              class="btn btn-black"
                              data-model=".enquire-pop"
                            >
                              Get a Quote
                            </button>
                          </div>
                        </div>
                      </article>
                    </div>

                    <div class="swiper-slide">
                      <article class="portfolio-card">
                        <div class="portfolio-card__media">
                          <img
                            src="assets/images/website/portfolio/ashton.png"
                            alt="Ashton & Well business setup in Dubai website"
                            loading="lazy"
                          />
                        </div>

                        <div class="portfolio-card__info">
                          <div class="portfolio-card__text">
                            <h4 class="portfolio-card__name">
                              Ashton &amp; Well
                            </h4>
                            <p class="portfolio-card__desc">
                              A corporate services website for business setup in
                              Dubai, covering Mainland, Free Zone and Offshore
                              packages, visas, licenses and bank accounts.
                            </p>
                          </div>

                          <div class="portfolio-card__actions">
                            <a
                              href="javascript:void()"
                              target="_blank"
                              rel="noopener"
                              class="btn btn-outline-black"
                            >
                              <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="0.88em"
                                height="1em"
                                viewBox="0 0 448 512"
                              >
                                <path d="M0 0h448v512H0z" fill="none"></path>
                                <path
                                  fill="currentColor"
                                  d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222c0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222c0-59.3-25.2-115-67.1-157m-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4l-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2c0-101.7 82.8-184.5 184.6-184.5c49.3 0 95.6 19.2 130.4 54.1s56.2 81.2 56.1 130.5c0 101.8-84.9 184.6-186.6 184.6m101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18c-5.1-1.9-8.8-2.8-12.5 2.8s-14.3 18-17.6 21.8c-3.2 3.7-6.5 4.2-12 1.4c-32.6-16.3-54-29.1-75.5-66c-5.7-9.8 5.7-9.1 16.3-30.3c1.8-3.7.9-6.9-.5-9.7s-12.5-30.1-17.1-41.2c-4.5-10.8-9.1-9.3-12.5-9.5c-3.2-.2-6.9-.2-10.6-.2s-9.7 1.4-14.8 6.9c-5.1 5.6-19.4 19-19.4 46.3s19.9 53.7 22.6 57.4c2.8 3.7 39.1 59.7 94.8 83.8c35.2 15.2 49 16.5 66.6 13.9c10.7-1.6 32.8-13.4 37.4-26.4s4.6-24.1 3.2-26.4c-1.3-2.5-5-3.9-10.5-6.6"
                                ></path>
                              </svg>
                            </a>

                            <button
                              type="button"
                              class="btn btn-black"
                              data-model=".enquire-pop"
                            >
                              Get a Quote
                            </button>
                          </div>
                        </div>
                      </article>
                    </div>
                  </div>
                </div>

                <button
                  type="button"
                  class="btn-prev"
                  aria-label="Previous project"
                >
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 1024 1024"
                  >
                    <path
                      fill="currentColor"
                      d="M609.408 149.376L277.76 489.6a32 32 0 0 0 0 44.672l331.648 340.352a29.12 29.12 0 0 0 41.728 0a30.59 30.59 0 0 0 0-42.752L339.264 511.936l311.872-319.872a30.59 30.59 0 0 0 0-42.688a29.12 29.12 0 0 0-41.728 0"
                    ></path>
                  </svg>
                </button>
                <button
                  type="button"
                  class="btn-next"
                  aria-label="Next project"
                >
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 1024 1024"
                  >
                    <path
                      fill="currentColor"
                      d="M414.592 149.376L746.24 489.6a32 32 0 0 1 0 44.672L414.592 874.624a29.12 29.12 0 0 1-41.728 0a30.59 30.59 0 0 1 0-42.752l311.872-319.936L372.864 192a30.59 30.59 0 0 1 0-42.688a29.12 29.12 0 0 1 41.728 0"
                    ></path>
                  </svg>
                </button>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="home-secJ">
        <div class="container">
          <div class="heading">
            <h3>Our Core Expertise <span>Build for Bigger Ideas</span></h3>
            <p>Platforms we specialize in building and scaling.</p>
          </div>
          <div class="swiper thirdSilder">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <!-- 01 — E-Commerce -->
                <div class="business-card business-card--blue">
                  <div class="business-card__image">
                    <img
                      src="assets/images/home/ecommer-solution1.png"
                      alt="E-Commerce Solutions"
                    />
                  </div>

                  <div class="business-card__body">
                    <h4>E-Commerce Solutions</h4>
                    <p>Launch &amp; grow your own online store.</p>

                    <ul class="business-card__features">
                      <li>Product Catalog</li>
                      <li>Payment Gateway</li>
                      <li>Order Management</li>
                    </ul>
                  </div>

                  <a
                    href="E-Commerce-website-development.html"
                    class="btn btn-outline-black"
                  >
                    Explore Solutions
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      viewBox="0 0 1024 1024"
                    >
                      <path
                        fill="currentColor"
                        d="M414.592 149.376L746.24 489.6a32 32 0 0 1 0 44.672L414.592 874.624a29.12 29.12 0 0 1-41.728 0a30.59 30.59 0 0 1 0-42.752l311.872-319.936L372.864 192a30.59 30.59 0 0 1 0-42.688a29.12 29.12 0 0 1 41.728 0"
                      ></path>
                    </svg>
                  </a>
                </div>
              </div>
              <div class="swiper-slide">
                <!-- 02 — EdTech & LMS -->
                <div class="business-card business-card--yellow">
                  <div class="business-card__image">
                    <img
                      src="assets/images/home/etech1.png"
                      alt="EdTech & LMS Solutions"
                    />
                  </div>

                  <div class="business-card__body">
                    <h4>EdTech &amp; LMS Solutions</h4>
                    <p>
                      Build your learning, test series or coaching platform.
                    </p>

                    <ul class="business-card__features">
                      <li>Course Builder</li>
                      <li>Live Classes</li>
                      <li>Test &amp; Assessment</li>
                    </ul>
                  </div>

                  <a
                    href="E-Learning-LMS-development.html"
                    class="btn btn-outline-black"
                  >
                    Explore Solutions
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      viewBox="0 0 1024 1024"
                    >
                      <path
                        fill="currentColor"
                        d="M414.592 149.376L746.24 489.6a32 32 0 0 1 0 44.672L414.592 874.624a29.12 29.12 0 0 1-41.728 0a30.59 30.59 0 0 1 0-42.752l311.872-319.936L372.864 192a30.59 30.59 0 0 1 0-42.688a29.12 29.12 0 0 1 41.728 0"
                      ></path>
                    </svg>
                  </a>
                </div>
              </div>
              <div class="swiper-slide">
                <!-- 03 — Classified Portal -->
                <div class="business-card business-card--green">
                  <div class="business-card__image">
                    <img
                      src="assets/images/home/clasified1.png"
                      alt="Classified Portal Solutions"
                    />
                  </div>

                  <div class="business-card__body">
                    <h4>Classified Portal Solutions</h4>
                    <p>
                      Build a marketplace that connects buyers, sellers or
                      service providers.
                    </p>

                    <ul class="business-card__features">
                      <li>Listings &amp; Search</li>
                      <li>User Dashboards</li>
                      <li>Chat &amp; Enquiry</li>
                    </ul>
                  </div>

                  <a
                    href="classified-portals-development.html"
                    class="btn btn-outline-black"
                  >
                    Explore Solutions
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      viewBox="0 0 1024 1024"
                    >
                      <path
                        fill="currentColor"
                        d="M414.592 149.376L746.24 489.6a32 32 0 0 1 0 44.672L414.592 874.624a29.12 29.12 0 0 1-41.728 0a30.59 30.59 0 0 1 0-42.752l311.872-319.936L372.864 192a30.59 30.59 0 0 1 0-42.688a29.12 29.12 0 0 1 41.728 0"
                      ></path>
                    </svg>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="home-secG">
        <div class="container">
          <div class="heading">
            <h3>
              From first idea
              <span>to digital growth.</span>
            </h3>
            <p>
              A clear process helps us turn your ideas into a digital experience
              that works for your business and your customers.
            </p>
          </div>

          <div class="process-stage">
            <!-- left: number index, synced to swiper -->
            <div class="process-nums">
              <div class="process-progress">
                <span class="process-progress-fill" data-progress-fill></span>
              </div>

              <div class="num-item is-active" data-num-target="0">
                <span class="num-box"><span class="num-text">01</span></span>
                <span class="num-label">Discover</span>
              </div>
              <div class="num-item" data-num-target="1">
                <span class="num-box"><span class="num-text">02</span></span>
                <span class="num-label">Strategy</span>
              </div>
              <div class="num-item" data-num-target="2">
                <span class="num-box"><span class="num-text">03</span></span>
                <span class="num-label">Design</span>
              </div>
              <div class="num-item" data-num-target="3">
                <span class="num-box"><span class="num-text">04</span></span>
                <span class="num-label">Develop</span>
              </div>
              <div class="num-item" data-num-target="4">
                <span class="num-box"><span class="num-text">05</span></span>
                <span class="num-label">Test</span>
              </div>
              <div class="num-item" data-num-target="5">
                <span class="num-box"><span class="num-text">06</span></span>
                <span class="num-label">Launch &amp; Grow</span>
              </div>
            </div>

            <!-- right: vertical swiper -->
            <div class="process-swiper-wrap">
              <div class="swiper processSwiper">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <div class="process-panel">
                      <span class="panel-index">01 / 06</span>
                      <h3>Understand</h3>
                      <p>
                        We learn about your business, audience, competitors,
                        goals and challenges.
                      </p>
                    </div>
                  </div>

                  <div class="swiper-slide">
                    <div class="process-panel">
                      <span class="panel-index">02 / 06</span>
                      <h3>Plan</h3>
                      <p>
                        We define the structure, user journey, technology and
                        digital strategy needed for your project.
                      </p>
                    </div>
                  </div>

                  <div class="swiper-slide">
                    <div class="process-panel">
                      <span class="panel-index">03 / 06</span>
                      <h3>Create</h3>
                      <p>
                        Our designers transform the strategy into a clear,
                        modern and user-friendly experience.
                      </p>
                    </div>
                  </div>

                  <div class="swiper-slide">
                    <div class="process-panel">
                      <span class="panel-index">04 / 06</span>
                      <h3>Build</h3>
                      <p>
                        Approved designs are transformed into responsive,
                        functional and optimized digital products.
                      </p>
                    </div>
                  </div>

                  <div class="swiper-slide">
                    <div class="process-panel">
                      <span class="panel-index">05 / 06</span>
                      <h3>Refine</h3>
                      <p>
                        We test usability, responsiveness, functionality, forms,
                        performance and overall experience.
                      </p>
                    </div>
                  </div>

                  <div class="swiper-slide">
                    <div class="process-panel">
                      <span class="panel-index">06 / 06</span>
                      <h3>Improve</h3>
                      <p>
                        After launch, we help you maintain, optimize and grow
                        your digital presence.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="home-secI">
        <div class="container">
          <div class="heading">
            <h3>What Our <span>Clients Say</span></h3>
            <p>
              We create lasting partnerships through thoughtful design, reliable
              technology, and measurable digital results.
            </p>
          </div>

          <div class="swiper-wrap">
            <div class="swiper TestimonialSlider">
              <div class="swiper-wrapper">
                <!-- TESTIMONIAL 01 -->
                <div class="swiper-slide">
                  <div class="test_card_group test_card_group--dark">
                    <div class="test_card test_card--name">
                      <h5>Rahul Mehta</h5>
                      <span>Business Owner</span>
                    </div>

                    <div class="test_card">
                      <div class="test_card__rating">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 24 24"
                        >
                          <path
                            fill="currentColor"
                            d="M12 .587l3.668 7.431 8.204 1.193-5.936 5.788 1.401 8.171L12 19.771l-7.337 3.399 1.401-8.171L.128 9.211l8.204-1.193z"
                          />
                        </svg>
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 24 24"
                        >
                          <path
                            fill="currentColor"
                            d="M12 .587l3.668 7.431 8.204 1.193-5.936 5.788 1.401 8.171L12 19.771l-7.337 3.399 1.401-8.171L.128 9.211l8.204-1.193z"
                          />
                        </svg>
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 24 24"
                        >
                          <path
                            fill="currentColor"
                            d="M12 .587l3.668 7.431 8.204 1.193-5.936 5.788 1.401 8.171L12 19.771l-7.337 3.399 1.401-8.171L.128 9.211l8.204-1.193z"
                          />
                        </svg>
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 24 24"
                        >
                          <path
                            fill="currentColor"
                            d="M12 .587l3.668 7.431 8.204 1.193-5.936 5.788 1.401 8.171L12 19.771l-7.337 3.399 1.401-8.171L.128 9.211l8.204-1.193z"
                          />
                        </svg>
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 24 24"
                        >
                          <path
                            fill="currentColor"
                            d="M12 .587l3.668 7.431 8.204 1.193-5.936 5.788 1.401 8.171L12 19.771l-7.337 3.399 1.401-8.171L.128 9.211l8.204-1.193z"
                          />
                        </svg>
                      </div>

                      <p>
                        "Web Mingo understood our requirements from the
                        beginning and delivered a website that feels modern,
                        professional and easy for our customers to use."
                      </p>

                      <span class="test_card__tag">
                        " Professional &amp; Reliable "
                      </span>
                    </div>
                  </div>
                </div>

                <!-- TESTIMONIAL 02 -->
                <div class="swiper-slide">
                  <div class="test_card_group">
                    <div class="test_card">
                      <div class="test_card__rating">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 24 24"
                        >
                          <path
                            fill="currentColor"
                            d="M12 .587l3.668 7.431 8.204 1.193-5.936 5.788 1.401 8.171L12 19.771l-7.337 3.399 1.401-8.171L.128 9.211l8.204-1.193z"
                          />
                        </svg>
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 24 24"
                        >
                          <path
                            fill="currentColor"
                            d="M12 .587l3.668 7.431 8.204 1.193-5.936 5.788 1.401 8.171L12 19.771l-7.337 3.399 1.401-8.171L.128 9.211l8.204-1.193z"
                          />
                        </svg>
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 24 24"
                        >
                          <path
                            fill="currentColor"
                            d="M12 .587l3.668 7.431 8.204 1.193-5.936 5.788 1.401 8.171L12 19.771l-7.337 3.399 1.401-8.171L.128 9.211l8.204-1.193z"
                          />
                        </svg>
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 24 24"
                        >
                          <path
                            fill="currentColor"
                            d="M12 .587l3.668 7.431 8.204 1.193-5.936 5.788 1.401 8.171L12 19.771l-7.337 3.399 1.401-8.171L.128 9.211l8.204-1.193z"
                          />
                        </svg>
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 24 24"
                        >
                          <path
                            fill="currentColor"
                            d="M12 .587l3.668 7.431 8.204 1.193-5.936 5.788 1.401 8.171L12 19.771l-7.337 3.399 1.401-8.171L.128 9.211l8.204-1.193z"
                          />
                        </svg>
                      </div>

                      <p>
                        "The team helped us improve both the design and overall
                        user experience. Communication was smooth and every
                        detail was handled professionally."
                      </p>

                      <span class="test_card__tag">
                        " Smooth Experience "
                      </span>
                    </div>

                    <div class="test_card test_card--name">
                      <h5>Priya Sharma</h5>
                      <span>Marketing Manager</span>
                    </div>
                  </div>
                </div>

                <!-- TESTIMONIAL 03 -->
                <div class="swiper-slide">
                  <div class="test_card_group test_card_group--dark">
                    <div class="test_card test_card--name">
                      <h5>Arjun Kapoor</h5>
                      <span>Founder &amp; Director</span>
                    </div>

                    <div class="test_card">
                      <div class="test_card__rating">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 24 24"
                        >
                          <path
                            fill="currentColor"
                            d="M12 .587l3.668 7.431 8.204 1.193-5.936 5.788 1.401 8.171L12 19.771l-7.337 3.399 1.401-8.171L.128 9.211l8.204-1.193z"
                          />
                        </svg>
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 24 24"
                        >
                          <path
                            fill="currentColor"
                            d="M12 .587l3.668 7.431 8.204 1.193-5.936 5.788 1.401 8.171L12 19.771l-7.337 3.399 1.401-8.171L.128 9.211l8.204-1.193z"
                          />
                        </svg>
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 24 24"
                        >
                          <path
                            fill="currentColor"
                            d="M12 .587l3.668 7.431 8.204 1.193-5.936 5.788 1.401 8.171L12 19.771l-7.337 3.399 1.401-8.171L.128 9.211l8.204-1.193z"
                          />
                        </svg>
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 24 24"
                        >
                          <path
                            fill="currentColor"
                            d="M12 .587l3.668 7.431 8.204 1.193-5.936 5.788 1.401 8.171L12 19.771l-7.337 3.399 1.401-8.171L.128 9.211l8.204-1.193z"
                          />
                        </svg>
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 24 24"
                        >
                          <path
                            fill="currentColor"
                            d="M12 .587l3.668 7.431 8.204 1.193-5.936 5.788 1.401 8.171L12 19.771l-7.337 3.399 1.401-8.171L.128 9.211l8.204-1.193z"
                          />
                        </svg>
                      </div>

                      <p>
                        "From development to SEO, Web Mingo helped us bring
                        different parts of our digital presence together into
                        one clear and effective experience."
                      </p>

                      <span class="test_card__tag"> " Built for Growth " </span>
                    </div>
                  </div>
                </div>

                <!-- TESTIMONIAL 02 -->
                <div class="swiper-slide">
                  <div class="test_card_group">
                    <div class="test_card">
                      <div class="test_card__rating">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 24 24"
                        >
                          <path
                            fill="currentColor"
                            d="M12 .587l3.668 7.431 8.204 1.193-5.936 5.788 1.401 8.171L12 19.771l-7.337 3.399 1.401-8.171L.128 9.211l8.204-1.193z"
                          />
                        </svg>
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 24 24"
                        >
                          <path
                            fill="currentColor"
                            d="M12 .587l3.668 7.431 8.204 1.193-5.936 5.788 1.401 8.171L12 19.771l-7.337 3.399 1.401-8.171L.128 9.211l8.204-1.193z"
                          />
                        </svg>
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 24 24"
                        >
                          <path
                            fill="currentColor"
                            d="M12 .587l3.668 7.431 8.204 1.193-5.936 5.788 1.401 8.171L12 19.771l-7.337 3.399 1.401-8.171L.128 9.211l8.204-1.193z"
                          />
                        </svg>
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 24 24"
                        >
                          <path
                            fill="currentColor"
                            d="M12 .587l3.668 7.431 8.204 1.193-5.936 5.788 1.401 8.171L12 19.771l-7.337 3.399 1.401-8.171L.128 9.211l8.204-1.193z"
                          />
                        </svg>
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 24 24"
                        >
                          <path
                            fill="currentColor"
                            d="M12 .587l3.668 7.431 8.204 1.193-5.936 5.788 1.401 8.171L12 19.771l-7.337 3.399 1.401-8.171L.128 9.211l8.204-1.193z"
                          />
                        </svg>
                      </div>

                      <p>
                        "The team helped us improve both the design and overall
                        user experience. Communication was smooth and every
                        detail was handled professionally."
                      </p>

                      <span class="test_card__tag">
                        " Smooth Experience "
                      </span>
                    </div>

                    <div class="test_card test_card--name">
                      <h5>Priya Sharma</h5>
                      <span>Marketing Manager</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="swiper-group">
              <button
                type="button"
                class="TestimonialSlider-prev swiper-button-lock btn-prev"
              >
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1024 1024">
                  <path
                    fill="#ffff"
                    d="M609.408 149.376L277.76 489.6a32 32 0 0 0 0 44.672l331.648 340.352a29.12 29.12 0 0 0 41.728 0a30.59 30.59 0 0 0 0-42.752L339.264 511.936l311.872-319.872a30.59 30.59 0 0 0 0-42.688a29.12 29.12 0 0 0-41.728 0"
                  ></path>
                </svg>
              </button>

              <button
                type="button"
                class="TestimonialSlider-next btn-next swiper-button-lock"
              >
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1024 1024">
                  <path
                    fill="#ffff"
                    d="M609.408 149.376L277.76 489.6a32 32 0 0 0 0 44.672l331.648 340.352a29.12 29.12 0 0 0 41.728 0a30.59 30.59 0 0 0 0-42.752L339.264 511.936l311.872-319.872a30.59 30.59 0 0 0 0-42.688a29.12 29.12 0 0 0 41.728 0"
                  ></path>
                </svg>
              </button>
            </div>
          </div>
        </div>
      </section>

      <div class="container">
        <div class="app-promo">
          <div class="app-promo-inner">
            <div class="app-promo-text">
              <span class="eyebrow">Have a Project in Mind?</span>

              <h3>
                Your Next Digital<br />
                Experience Starts Here.
              </h3>

              <p>
                Your next digital experience could be our next featured project.
                Let’s turn your idea into something meaningful, memorable and
                built to perform.
              </p>

              <div class="form form-grid">
                <div class="form-group">
                  <input
                    name="txtJoinNowEmail"
                    type="email"
                    placeholder=" "
                    class="form-control"
                    required
                  />

                  <label for="txtJoinNowEmail">
                    Enter your email address
                  </label>
                </div>

                <a href="javascript:void(0)" class="sbmt btn btn-white">
                  Start a Project

                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="0.5em"
                    height="1em"
                    viewBox="0 0 12 24"
                  >
                    <path d="M0 0h12v24H0z" fill="none" />
                    <path
                      fill="currentColor"
                      fill-rule="evenodd"
                      d="M10.157 12.711L4.5 18.368l-1.414-1.414l4.95-4.95l-4.95-4.95L4.5 5.64l5.657 5.657a1 1 0 0 1 0 1.414"
                    />
                  </svg>
                </a>
              </div>
            </div>

            <div class="app-promo-visual">
              <div class="phone phone--back">
                <img
                  src="assets/images/enquire.png"
                  alt="Web Mingo digital project"
                />
              </div>
            </div>
          </div>
        </div>
      </div>

      <section class="home-secK">
        <div class="container">
          <div class="faq-layout">
            <!-- LEFT INTRO -->
            <div class="heading">
              <h3>
                Before We Build,<br />
                <span>You Might Want to Know.</span>
              </h3>

              <p>
                Clear answers to common questions about our websites,
                development, SEO and digital solutions.
              </p>
            </div>

            <!-- RIGHT ACCORDION -->
            <div class="accordion-wrapper">
              <!-- FAQ 01 -->
              <div class="accordion-item active">
                <div class="accordion-header">
                  <div class="faq-question">
                    <h4>What kind of websites do you build?</h4>
                  </div>

                  <span class="accordion-icon">−</span>
                </div>

                <div class="accordion-content" style="display: block">
                  <p>
                    We create custom business websites, corporate websites,
                    e-commerce stores, landing pages and digital platforms based
                    on your goals, audience and requirements.
                  </p>
                </div>
              </div>

              <!-- FAQ 02 -->
              <div class="accordion-item">
                <div class="accordion-header">
                  <div class="faq-question">
                    <h4>How long does a website project take?</h4>
                  </div>

                  <span class="accordion-icon">+</span>
                </div>

                <div class="accordion-content">
                  <p>
                    Project timelines depend on the size, functionality and
                    complexity of the website. Once we understand your
                    requirements, we'll provide a clear project roadmap and
                    estimated timeline.
                  </p>
                </div>
              </div>

              <!-- FAQ 03 -->
              <div class="accordion-item">
                <div class="accordion-header">
                  <div class="faq-question">
                    <h4>Do you provide SEO with website development?</h4>
                  </div>

                  <span class="accordion-icon">+</span>
                </div>

                <div class="accordion-content">
                  <p>
                    Yes. We consider SEO-friendly structure, responsive design,
                    performance, content hierarchy and technical best practices
                    during the development process.
                  </p>
                </div>
              </div>

              <!-- FAQ 04 -->
              <div class="accordion-item">
                <div class="accordion-header">
                  <div class="faq-question">
                    <h4>Can you redesign my existing website?</h4>
                  </div>

                  <span class="accordion-icon">+</span>
                </div>

                <div class="accordion-content">
                  <p>
                    Absolutely. We can redesign an existing website to improve
                    its visual experience, usability, responsiveness,
                    performance and overall digital presence.
                  </p>
                </div>
              </div>

              <!-- FAQ 05 -->
              <div class="accordion-item">
                <div class="accordion-header">
                  <div class="faq-question">
                    <h4>Do you work with businesses outside Lucknow?</h4>
                  </div>

                  <span class="accordion-icon">+</span>
                </div>

                <div class="accordion-content">
                  <p>
                    Yes. While we're based in Lucknow, we work with businesses
                    and organizations across different locations depending on
                    their project requirements.
                  </p>
                </div>
              </div>

              <!-- FAQ 06 -->
              <div class="accordion-item">
                <div class="accordion-header">
                  <div class="faq-question">
                    <h4>How do I start a project with Web Mingo?</h4>
                  </div>

                  <span class="accordion-icon">+</span>
                </div>

                <div class="accordion-content">
                  <p>
                    Simply tell us about your business, what you're trying to
                    achieve and what you need help with. We'll review your
                    requirements and discuss the best way forward.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>

    <footer class="site-footer">
      <!-- Top CTA strip -->
      <div class="footer-cta-strip">
        <div class="container">
          <!-- Left group: project + email travel together -->
          <div class="footer-cta-strip__group">
            <div class="footer-cta-strip__item">
              <span class="footer-cta-strip__icon">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 24 24"
                  width="20"
                  height="20"
                  fill="none"
                >
                  <path
                    stroke="currentColor"
                    stroke-width="1.6"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M9 18h6M10 21h4M12 3a6 6 0 0 0-3.6 10.8c.6.45.9 1.15.9 1.9V16h5.4v-.3c0-.75.3-1.45.9-1.9A6 6 0 0 0 12 3Z"
                  />
                </svg>
              </span>
              <div class="footer-cta-strip__text">
                <p>Have a Project in Mind?</p>
                <span>Let's build it right, the first time.</span>
              </div>
            </div>

            <span class="footer-cta-strip__divider" aria-hidden="true"></span>

            <div class="footer-cta-strip__item">
              <span class="footer-cta-strip__icon">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 24 24"
                  width="20"
                  height="20"
                  fill="none"
                >
                  <path
                    stroke="currentColor"
                    stroke-width="1.6"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M3 6.5 12 13l9-6.5M4 5h16a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V6a1 1 0 0 1 1-1Z"
                  />
                </svg>
              </span>
              <div class="footer-cta-strip__text">
                <p>Email Us</p>
                <span>business@webmingo.com</span>
              </div>
            </div>
          </div>

          <!-- Right: actions -->
          <div class="footer-cta-strip__actions">
            <a href="javascript:void(0)" class="btn btn-outline-white"
              >Book a Discovery Call</a
            >
            <a href="javascript:void(0)" class="btn btn-white"
              >Get a Free Quote</a
            >
          </div>
        </div>
      </div>

      <!-- Main footer -->
      <div class="footer-main">
        <div class="container">
          <!-- Brand column -->
          <div class="footer-col footer-col--brand">
            <a href="index.html" class="footer-logo">
              <img src="assets/images/logo.png" alt="Web Mingo" />
            </a>

            <p class="footer-tagline">
              Web Mingo IT Solutions Pvt. Ltd. designs, builds and markets
              digital products for businesses in Lucknow and across India.
            </p>

            <ul class="footer-contact">
              <li>
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 24 24"
                  width="17"
                  height="17"
                  fill="none"
                >
                  <path
                    stroke="currentColor"
                    stroke-width="1.6"
                    d="M12 21s7-6.2 7-11.5A7 7 0 0 0 5 9.5C5 14.8 12 21 12 21Z"
                  />
                  <circle
                    cx="12"
                    cy="9.5"
                    r="2.4"
                    stroke="currentColor"
                    stroke-width="1.6"
                  />
                </svg>
                <span
                  >I-Thum IT Park, Sector - 62, Noida, Uttar Pradesh,
                  India</span
                >
              </li>
              <li>
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 24 24"
                  width="17"
                  height="17"
                  fill="none"
                >
                  <path
                    stroke="currentColor"
                    stroke-width="1.6"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M4.5 4h3.7l1.4 4.2-2 1.6a12.4 12.4 0 0 0 5.6 5.6l1.6-2 4.2 1.4v3.7c0 .9-.75 1.6-1.65 1.5A17 17 0 0 1 3 5.65C2.9 4.75 3.6 4 4.5 4Z"
                  />
                </svg>
                <a href="tel:+91-7607770184">+91-7607770184</a>
              </li>
              <li>
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 24 24"
                  width="17"
                  height="17"
                  fill="none"
                >
                  <path
                    stroke="currentColor"
                    stroke-width="1.6"
                    d="M3 6.5 12 13l9-6.5M4 5h16a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V6a1 1 0 0 1 1-1Z"
                  />
                </svg>
                <a href="mailto:business@webmingo.com">business@webmingo.com</a>
              </li>
            </ul>

            <ul class="footer-social">
              <li>
                <a
                  href="https://www.facebook.com/webmingoweb"
                  target="_blank"
                  aria-label="Facebook"
                >
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 24 24"
                    width="16"
                    height="16"
                  >
                    <path
                      fill="currentColor"
                      d="M14 13.5h2.5l1-4H14v-2c0-1.03 0-2 2-2h1.5V2.14C17.174 2.097 15.943 2 14.643 2 11.928 2 10 3.657 10 6.7v2.8H7v4h3V22h4z"
                    />
                  </svg>
                </a>
              </li>
              <li>
                <a
                  href="https://www.instagram.com/webmingoweb/"
                  target="_blank"
                  aria-label="Instagram"
                >
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 24 24"
                    width="16"
                    height="16"
                  >
                    <path
                      fill="currentColor"
                      d="M12 2c2.72 0 3.06.01 4.12.06 1.06.05 1.79.22 2.43.47.66.26 1.22.6 1.77 1.16.55.55.9 1.11 1.16 1.77.25.64.42 1.37.47 2.43.05 1.06.06 1.4.06 4.12s-.01 3.06-.06 4.12c-.05 1.06-.22 1.79-.47 2.43a4.9 4.9 0 0 1-1.16 1.77 4.9 4.9 0 0 1-1.77 1.16c-.64.25-1.37.42-2.43.47-1.06.05-1.4.06-4.12.06s-3.06-.01-4.12-.06c-1.06-.05-1.79-.22-2.43-.47a4.9 4.9 0 0 1-1.77-1.16 4.9 4.9 0 0 1-1.16-1.77c-.25-.64-.42-1.37-.47-2.43C2.01 15.06 2 14.72 2 12s.01-3.06.06-4.12c.05-1.06.22-1.79.47-2.43.26-.66.6-1.22 1.16-1.77A4.9 4.9 0 0 1 5.46.52c.64-.25 1.37-.42 2.43-.47C8.94.01 9.28 0 12 0Zm0 5a5 5 0 1 0 0 10 5 5 0 0 0 0-10Zm0 8.2a3.2 3.2 0 1 1 0-6.4 3.2 3.2 0 0 1 0 6.4Zm5.2-8.4a1.2 1.2 0 1 1-2.4 0 1.2 1.2 0 0 1 2.4 0Z"
                    />
                  </svg>
                </a>
              </li>
              <li>
                <a
                  href="https://www.linkedin.com/company/webmingo/"
                  target="_blank"
                  aria-label="LinkedIn"
                >
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 24 24"
                    width="16"
                    height="16"
                  >
                    <path
                      fill="currentColor"
                      d="M4.98 3.5a2.5 2.5 0 1 1 0 5 2.5 2.5 0 0 1 0-5ZM3 9h4v12H3zM9 9h3.8v1.64h.05c.53-.95 1.83-1.95 3.77-1.95 4.03 0 4.78 2.5 4.78 5.76V21h-4v-5.6c0-1.34-.02-3.06-1.87-3.06-1.87 0-2.16 1.46-2.16 2.96V21H9z"
                    />
                  </svg>
                </a>
              </li>
              <li>
                <a
                  href="https://x.com/webmingoweb"
                  target="_blank"
                  aria-label="WhatsApp"
                >
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="1em"
                    height="1em"
                    viewBox="0 0 24 24"
                  >
                    <path d="M0 0h24v24H0z" fill="none" />
                    <path
                      fill="currentColor"
                      fill-rule="evenodd"
                      d="M15.022 3.343c.508-.087 1.077-.116 1.613-.025a4.85 4.85 0 0 1 2.54 1.273c.456.01.905-.08 1.302-.208a5.4 5.4 0 0 0 1.098-.501l.009-.006a.75.75 0 0 1 1.042 1.037c-.207.315-.496.877-.819 1.507l-.155.301c-.185.36-.375.724-.552 1.036c-.111.196-.23.395-.35.567v.274A12.34 12.34 0 0 1 8.287 21.03a12.3 12.3 0 0 1-6.694-1.97a.75.75 0 0 1 .5-1.375q.45.055.905.055a7.5 7.5 0 0 0 3.128-.696a4.86 4.86 0 0 1-2.61-2.923a.75.75 0 0 1 .147-.722l.01-.01A4.85 4.85 0 0 1 2.05 9.793V9.74a.75.75 0 0 1 .553-.724A4.84 4.84 0 0 1 2.09 6.84a4.9 4.9 0 0 1 .65-2.442a.75.75 0 0 1 1.232-.1a10.9 10.9 0 0 0 7.006 3.93a4.85 4.85 0 0 1 2.562-4.406c.402-.214.934-.385 1.482-.479m-11.28 7.548a3.35 3.35 0 0 0 2.503 2.164a.75.75 0 0 1 .072 1.453q-.409.124-.834.173a3.36 3.36 0 0 0 2.59 1.3a.75.75 0 0 1 .45 1.339a9 9 0 0 1-3.548 1.695a10.8 10.8 0 0 0 3.313.515h.009A10.84 10.84 0 0 0 19.25 8.607v-.535a.75.75 0 0 1 .186-.495c.07-.079.19-.261.36-.56c.16-.282.338-.622.523-.981l.033-.066a5 5 0 0 1-1.593.097a.75.75 0 0 1-.47-.237a3.35 3.35 0 0 0-1.904-1.032a3.4 3.4 0 0 0-1.11.025a3.6 3.6 0 0 0-1.028.323a3.35 3.35 0 0 0-1.678 3.74a.75.75 0 0 1-.767.925a12.4 12.4 0 0 1-8.149-3.627a3.4 3.4 0 0 0-.063.657v.002a3.34 3.34 0 0 0 1.486 2.785A.75.75 0 0 1 4.64 11a5 5 0 0 1-.897-.11"
                      clip-rule="evenodd"
                    />
                  </svg>
                </a>
              </li>
            </ul>
          </div>

          <!-- Company -->
          <div class="footer-col">
            <h5>Company</h5>
            <ul>
              <li><a href="about.html">About Us</a></li>
              <li><a href="lifeAt.html">Life at Web Mingo</a></li>
              <li><a href="our-works.html">Our Works</a></li>
              <li><a href="career.html">Careers</a></li>
              <li><a href="contact.html">Contact Us</a></li>
              <li><a href="javascript:void(0)">Share Your Feedback</a></li>
            </ul>
          </div>

          <!-- Services -->
          <div class="footer-col">
            <h5>Services</h5>
            <ul>
              <li>
                <a href="website-design-development.html"
                  >Website Design & Development</a
                >
              </li>
              <li><a href="digital-marketing.html">Digital Marketing</a></li>
              <li>
                <a href="mobile-app-development.html">Mobile App Development</a>
              </li>
              <li><a href="digital-branding.html">Digital Branding</a></li>
            </ul>
          </div>

          <!-- Resources -->
          <div class="footer-col">
            <h5>Resources</h5>
            <ul>
              <li><a href="blog.html">Blogs</a></li>
              <li><a href="faqs.html">FAQ</a></li>
              <li><a href="Knowledge-base.html">Knowledge Base</a></li>
              <li><a href="javascript:void(0)">Help &amp; Support</a></li>
            </ul>
          </div>

          <!-- Newsletter -->
          <div class="footer-col footer-col--newsletter">
            <h5>Stay Updated</h5>
            <p class="desc">
              Get product tips, project stories and offers — straight to your
              inbox.
            </p>

            <form class="footer-newsletter-form">
              <div class="form-group">
                <input
                  type="email"
                  name="txtNewsletterEmail"
                  placeholder=" "
                  class="form-control"
                  required
                />
                <label for="txtNewsletterEmail">Enter your email address</label>
              </div>
              <button type="submit" class="btn btn-white">
                Subscribe
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 24 24"
                  width="16"
                  height="16"
                  fill="none"
                >
                  <path
                    stroke="currentColor"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M5 12h14m0 0-6-6m6 6-6 6"
                  />
                </svg>
              </button>
            </form>

            <div class="footer-badge">
              <span class="footer-badge__icon">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 24 24"
                  width="20"
                  height="20"
                  fill="none"
                >
                  <path
                    stroke="currentColor"
                    stroke-width="1.4"
                    d="m12 2 2.2 4.6 5 .7-3.6 3.6.9 5.1L12 13.6l-4.5 2.4.9-5.1-3.6-3.6 5-.7L12 2Z"
                  />
                </svg>
              </span>
              <span class="footer-badge__text"
                >Trusted by <strong>150+</strong> businesses across India</span
              >
            </div>
          </div>
        </div>
      </div>

      <!-- Bottom bar -->
      <div class="footer-bottom">
        <div class="container">
          <p class="copyright">
            © 2026 Web Mingo IT Solutions Pvt. Ltd. All rights reserved.
          </p>

          <ul class="footer-legal">
            <li><a href="terms.html">Terms &amp; Conditions</a></li>
            <li><a href="privacy-policy.html">Privacy Policy</a></li>
            <li><a href="cookie-policy.html">Cookie Policy</a></li>
          </ul>
        </div>
      </div>
    </footer>
    <!-- ================= modals-pop-ups ================= -->

     <div class="ham-pop">
      <div class="ham-body">
        <div class="ham-top">
          <button type="button" class="ham-back" data-ham-back>
            <svg viewBox="0 0 24 24"><path d="M19 12H5M11 18l-6-6 6-6" /></svg>
            <span>Back</span>
          </button>

          <button class="close close-btn" type="button" aria-label="Close menu">
            <svg
              width="26"
              height="26"
              viewBox="0 0 26 26"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M0.5 0.5L25.5 25.5M0.5 25.5L25.5 0.5"
                stroke="black"
                stroke-linecap="round"
                stroke-linejoin="round"
              ></path>
            </svg>
          </button>
        </div>

        <div class="ham-views">
          <div
            class="ham-view is-active"
            data-ham-view="main"
            data-ham-title="Menu"
          >
            <ul class="ham-list">
              <li><a href="index.html">Home</a></li>
              <li>
                <button type="button" class="ham-link" data-ham-open="company">
                  <span class="ham-link-text">Company</span>
                  <span class="ham-arrow"
                    ><svg viewBox="0 0 24 24">
                      <path d="M5 12h14M13 6l6 6-6 6" /></svg
                  ></span>
                </button>
              </li>
              <li>
                <button type="button" class="ham-link" data-ham-open="services">
                  <span class="ham-link-text">Services</span>
                  <span class="ham-arrow"
                    ><svg viewBox="0 0 24 24">
                      <path d="M5 12h14M13 6l6 6-6 6" /></svg
                  ></span>
                </button>
              </li>
              <li>
                <button
                  type="button"
                  class="ham-link"
                  data-ham-open="industries"
                >
                  <span class="ham-link-text">Industries</span>
                  <span class="ham-arrow"
                    ><svg viewBox="0 0 24 24">
                      <path d="M5 12h14M13 6l6 6-6 6" /></svg
                  ></span>
                </button>
              </li>
              <li><a href="our-works.html">Our Works</a></li>
              <li><a href="contact.html">Contact Us</a></li>
            </ul>
          </div>

          <div
            class="ham-view"
            data-ham-view="company"
            data-ham-title="Company"
            aria-hidden="true"
          >
            <div class="ham-head">
              <h3 class="ham-title">Company</h3>
            </div>
            <ul class="ham-list ham-list--sub">
              <li><a href="about.html">About Us</a></li>
              <li><a href="lifeAt.html">Life at Web Mingo</a></li>
              <li><a href="career.html">Careers</a></li>
            </ul>
          </div>

          <div
            class="ham-view"
            data-ham-view="services"
            data-ham-title="Services"
            aria-hidden="true"
          >
            <div class="ham-head">
              <h3 class="ham-title">Services</h3>
            </div>
            <ul class="ham-list">
              <li>
                <button type="button" class="ham-link" data-ham-open="web">
                  <span class="ham-link-text"
                    >Website Design &amp; Development</span
                  >
                  <span class="ham-arrow"
                    ><svg viewBox="0 0 24 24">
                      <path d="M5 12h14M13 6l6 6-6 6" /></svg
                  ></span>
                </button>
              </li>
              <li>
                <button
                  type="button"
                  class="ham-link"
                  data-ham-open="marketing"
                >
                  <span class="ham-link-text">Digital Marketing</span>
                  <span class="ham-arrow"
                    ><svg viewBox="0 0 24 24">
                      <path d="M5 12h14M13 6l6 6-6 6" /></svg
                  ></span>
                </button>
              </li>
              <li>
                <button type="button" class="ham-link" data-ham-open="mobile">
                  <span class="ham-link-text">Mobile Applications</span>
                  <span class="ham-arrow"
                    ><svg viewBox="0 0 24 24">
                      <path d="M5 12h14M13 6l6 6-6 6" /></svg
                  ></span>
                </button>
              </li>
              <li>
                <button type="button" class="ham-link" data-ham-open="graphics">
                  <span class="ham-link-text">Graphics &amp; Media</span>
                  <span class="ham-arrow"
                    ><svg viewBox="0 0 24 24">
                      <path d="M5 12h14M13 6l6 6-6 6" /></svg
                  ></span>
                </button>
              </li>
            </ul>
          </div>

          <div
            class="ham-view"
            data-ham-view="web"
            data-ham-title="Services"
            aria-hidden="true"
          >
            <div class="ham-head">
              <h3 class="ham-title">Website Design &amp; Development</h3>
            </div>
            <ul class="ham-list ham-list--sub">
              <li>
                <a href="business-website-development.html"
                  >Business Website Development</a
                >
              </li>
              <li>
                <a href="E-Commerce-website-development.html"
                  >E-Commerce Website Development</a
                >
              </li>
              <li>
                <a href="E-Learning-LMS-development.html"
                  >E-Learning &amp; LMS Development</a
                >
              </li>
              <li>
                <a href="classified-portals-development.html"
                  >Classified Portals Development</a
                >
              </li>
              <li>
                <a href="custom-web-applications-development.html"
                  >Custom Web Applications Development</a
                >
              </li>
            </ul>
          </div>

          <div
            class="ham-view"
            data-ham-view="marketing"
            data-ham-title="Services"
            aria-hidden="true"
          >
            <div class="ham-head">
              <h3 class="ham-title">Digital Marketing</h3>
            </div>
            <ul class="ham-list ham-list--sub">
              <li>
                <a href="search-engine-optimisation.html"
                  >Search Engine Optimisation (SEO)</a
                >
              </li>
              <li>
                <a href="social-media-marketing.html"
                  >Social Media Marketing (SMM)</a
                >
              </li>
              <li>
                <a href="google-ads-management.html"
                  >Google Ads Management (PPC)</a
                >
              </li>
              <li>
                <a href="meta-ads-management.html">Meta Ads Management</a>
              </li>
            </ul>
          </div>

          <div
            class="ham-view"
            data-ham-view="mobile"
            data-ham-title="Services"
            aria-hidden="true"
          >
            <div class="ham-head">
              <h3 class="ham-title">Mobile Applications</h3>
            </div>
            <ul class="ham-list ham-list--sub">
              <li>
                <a href="android-applications-development.html"
                  >Android Applications Development</a
                >
              </li>
              <li>
                <a href="iOS-applications-development.html"
                  >iOS Applications Development</a
                >
              </li>
              <li>
                <a href="flutter-app-development.html"
                  >Flutter App Development</a
                >
              </li>
            </ul>
          </div>

          <div
            class="ham-view"
            data-ham-view="graphics"
            data-ham-title="Services"
            aria-hidden="true"
          >
            <div class="ham-head">
              <h3 class="ham-title">Graphics &amp; Media</h3>
            </div>
            <ul class="ham-list ham-list--sub">
              <li><a href="graphic-designing.html">Graphic Designing</a></li>
              <li><a href="video-creations.html">Video Creations</a></li>
            </ul>
          </div>

          <div
            class="ham-view"
            data-ham-view="industries"
            data-ham-title="Menu"
            aria-hidden="true"
          >
            <div class="ham-head">
              <h3 class="ham-title">Industries</h3>
            </div>
            <ul class="ham-list ham-list--sub">
              <li>
                <a href="education-coaching.html">Education &amp; Coaching</a>
              </li>
              <li>
                <a href="retail-E-Commerce-D2C.html"
                  >Retail, E-Commerce &amp; D2C</a
                >
              </li>
              <li><a href="real-state.html">Real Estate</a></li>
              <li>
                <a href="healthcare-clinics.html">Healthcare &amp; Clinics</a>
              </li>
              <li><a href="NGO-Non-Profits.html">NGO &amp; Non-Profits</a></li>
              <li>
                <a href="manufacturing-export.html"
                  >Manufacturing &amp; Export</a
                >
              </li>
              <li>
                <a href="hotels-hospitality.html">Hotels &amp; Hospitality</a>
              </li>
              <li><a href="travel-tourism.html">Travel &amp; Tourism</a></li>
              <li><a href="javascript:void(0)">View All Industries</a></li>
            </ul>
          </div>
        </div>

        <div class="ham-bottom">
          <div class="ham-social">
            <a
              href="https://www.facebook.com/webmingoweb"
              target="_blank"
              title="Facebook"
            >
              <svg
                width="24"
                height="24"
                viewBox="0 0 24 24"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M14 13.5H16.5L17.5 9.5H14V7.5C14 6.47 14 5.5 16 5.5H17.5V2.14C17.174 2.097 15.943 2 14.643 2C11.928 2 10 3.657 10 6.7V9.5H7V13.5H10V22H14V13.5Z"
                  fill="#666666"
                ></path>
              </svg>
            </a>
            <a
              href="https://www.instagram.com/webmingoweb/"
              title="Instagram"
              target="_blank"
            >
              <svg
                width="24"
                height="24"
                viewBox="0 0 24 24"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M17.34 5.46C17.1027 5.46 16.8707 5.53038 16.6733 5.66224C16.476 5.79409 16.3222 5.98151 16.2313 6.20078C16.1405 6.42005 16.1168 6.66133 16.1631 6.89411C16.2094 7.12689 16.3236 7.34071 16.4915 7.50853C16.6593 7.67635 16.8731 7.79064 17.1059 7.83694C17.3387 7.88324 17.5799 7.85948 17.7992 7.76866C18.0185 7.67783 18.2059 7.52402 18.3378 7.32668C18.4696 7.12935 18.54 6.89734 18.54 6.66C18.54 6.34174 18.4136 6.03652 18.1885 5.81147C17.9635 5.58643 17.6583 5.46 17.34 5.46ZM21.94 7.88C21.9206 7.0503 21.7652 6.2294 21.48 5.45C21.2257 4.78313 20.83 4.17928 20.32 3.68C19.8248 3.16743 19.2196 2.77418 18.55 2.53C17.7727 2.23616 16.9508 2.07721 16.12 2.06C15.06 2 14.72 2 12 2C9.28 2 8.94 2 7.88 2.06C7.04915 2.07721 6.22734 2.23616 5.45 2.53C4.78168 2.77665 4.17693 3.16956 3.68 3.68C3.16743 4.17518 2.77418 4.78044 2.53 5.45C2.23616 6.22734 2.07721 7.04915 2.06 7.88C2 8.94 2 9.28 2 12C2 14.72 2 15.06 2.06 16.12C2.07721 16.9508 2.23616 17.7727 2.53 18.55C2.77418 19.2196 3.16743 19.8248 3.68 20.32C4.17693 20.8304 4.78168 21.2234 5.45 21.47C6.22734 21.7638 7.04915 21.9228 7.88 21.94C8.94 22 9.28 22 12 22C14.72 22 15.06 22 16.12 21.94C16.9508 21.9228 17.7727 21.7638 18.55 21.47C19.2196 21.2258 19.8248 20.8326 20.32 20.32C20.8322 19.8226 21.2283 19.2182 21.48 18.55C21.7652 17.7706 21.9206 16.9497 21.94 16.12C21.94 15.06 22 14.72 22 12C22 9.28 22 8.94 21.94 7.88ZM20.14 16C20.1327 16.6348 20.0178 17.2637 19.8 17.86C19.6403 18.2952 19.3839 18.6884 19.05 19.01C18.7256 19.3405 18.3332 19.5964 17.9 19.76C17.3037 19.9778 16.6748 20.0927 16.04 20.1C15.04 20.15 14.67 20.16 12.04 20.16C9.41 20.16 9.04 20.16 8.04 20.1C7.38089 20.1123 6.72459 20.0109 6.1 19.8C5.68578 19.6281 5.31136 19.3728 5 19.05C4.66809 18.7287 4.41484 18.3352 4.26 17.9C4.01586 17.2952 3.88044 16.6519 3.86 16C3.86 15 3.8 14.63 3.8 12C3.8 9.37 3.8 9 3.86 8C3.86448 7.35106 3.98295 6.70795 4.21 6.1C4.38605 5.67791 4.65627 5.30166 5 5C5.30381 4.65617 5.67929 4.3831 6.1 4.2C6.70955 3.98004 7.352 3.86508 8 3.86C9 3.86 9.37 3.8 12 3.8C14.63 3.8 15 3.8 16 3.86C16.6348 3.86728 17.2637 3.98225 17.86 4.2C18.3144 4.36865 18.7223 4.64285 19.05 5C19.3777 5.30718 19.6338 5.68273 19.8 6.1C20.0223 6.70893 20.1373 7.35178 20.14 8C20.19 9 20.2 9.37 20.2 12C20.2 14.63 20.19 15 20.14 16ZM12 6.87C10.9858 6.87198 9.99496 7.17453 9.15265 7.73942C8.31035 8.30431 7.65438 9.1062 7.26763 10.0438C6.88089 10.9813 6.78072 12.0125 6.97979 13.0069C7.17886 14.0014 7.66824 14.9145 8.38608 15.631C9.10392 16.3474 10.018 16.835 11.0129 17.0321C12.0077 17.2293 13.0387 17.1271 13.9755 16.7385C14.9123 16.35 15.7129 15.6924 16.2761 14.849C16.8394 14.0056 17.14 13.0142 17.14 12C17.1413 11.3251 17.0092 10.6566 16.7512 10.033C16.4933 9.40931 16.1146 8.84281 15.6369 8.36605C15.1592 7.88929 14.5919 7.51168 13.9678 7.25493C13.3436 6.99818 12.6749 6.86736 12 6.87ZM12 15.33C11.3414 15.33 10.6976 15.1347 10.15 14.7688C9.60234 14.4029 9.17552 13.8828 8.92348 13.2743C8.67144 12.6659 8.6055 11.9963 8.73398 11.3503C8.86247 10.7044 9.17963 10.111 9.64533 9.64533C10.111 9.17963 10.7044 8.86247 11.3503 8.73398C11.9963 8.6055 12.6659 8.67144 13.2743 8.92348C13.8828 9.17552 14.4029 9.60234 14.7688 10.15C15.1347 10.6976 15.33 11.3414 15.33 12C15.33 12.4373 15.2439 12.8703 15.0765 13.2743C14.9092 13.6784 14.6639 14.0454 14.3547 14.3547C14.0454 14.6639 13.6784 14.9092 13.2743 15.0765C12.8703 15.2439 12.4373 15.33 12 15.33Z"
                  fill="#666666"
                ></path>
              </svg>
            </a>
            <a
              href="https://www.linkedin.com/company/webmingo/posts/?feedView=all"
              target="_blank"
              title="LinkedIn"
            >
              <svg
                width="24"
                height="24"
                viewBox="0 0 24 24"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M6.94 5.00002C6.93974 5.53046 6.72877 6.03906 6.35351 6.41394C5.97825 6.78883 5.46944 6.99929 4.939 6.99902C4.40857 6.99876 3.89997 6.78779 3.52508 6.41253C3.1502 6.03727 2.93974 5.52846 2.94 4.99802C2.94027 4.46759 3.15124 3.95899 3.5265 3.5841C3.90176 3.20922 4.41057 2.99876 4.941 2.99902C5.47144 2.99929 5.98004 3.21026 6.35492 3.58552C6.72981 3.96078 6.94027 4.46959 6.94 5.00002ZM7 8.48002H3V21H7V8.48002ZM13.32 8.48002H9.34V21H13.28V14.43C13.28 10.77 18.05 10.43 18.05 14.43V21H22V13.07C22 6.90002 14.94 7.13002 13.28 10.16L13.32 8.48002Z"
                  fill="#666666"
                ></path>
              </svg>
            </a>
            <a href="https://x.com/webmingoweb" target="_blank" title="twitter">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="1em"
                height="1em"
                viewBox="0 0 16 16"
              >
                <path d="M0 0h16v16H0z" fill="none" />
                <path
                  fill="currentColor"
                  d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334q.002-.211-.006-.422A6.7 6.7 0 0 0 16 3.542a6.7 6.7 0 0 1-1.889.518a3.3 3.3 0 0 0 1.447-1.817a6.5 6.5 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.32 9.32 0 0 1-6.767-3.429a3.29 3.29 0 0 0 1.018 4.382A3.3 3.3 0 0 1 .64 6.575v.045a3.29 3.29 0 0 0 2.632 3.218a3.2 3.2 0 0 1-.865.115a3 3 0 0 1-.614-.057a3.28 3.28 0 0 0 3.067 2.277A6.6 6.6 0 0 1 .78 13.58a6 6 0 0 1-.78-.045A9.34 9.34 0 0 0 5.026 15"
                />
              </svg>
            </a>
          </div>

          <a
            href="javascript:void(0)"
            data-model=".enquire-pop"
            class="btn btn-primary header-cta"
          >
            Get a Callback
          </a>
        </div>
      </div>
    </div>

    <div class="overlay"></div>

    <div class="model enquire-pop">
      <button type="button" class="close" aria-label="Close enquiry form">
        <svg
          width="26"
          height="26"
          viewBox="0 0 26 26"
          fill="none"
          xmlns="http://www.w3.org/2000/svg"
        >
          <path
            d="M0.5 0.5L25.5 25.5M0.5 25.5L25.5 0.5"
            stroke="currentColor"
            stroke-linecap="round"
            stroke-linejoin="round"
          />
        </svg>
      </button>

      <div class="model-body">
        <div class="title">
          <h4>Request a Custom Quote</h4>
          <p>Share your requirements and get a tailored quote.</p>
        </div>

        <form class="form form-grid" method="post">
          <div class="form-group">
            <input
              type="text"
              class="form-control"
              name="FullName"
              placeholder=""
              autocomplete="name"
              required
            />
            <label>Full Name*</label>
          </div>

          <div class="form-group">
            <input
              type="tel"
              class="form-control"
              name="MobileNumber"
              placeholder=""
              maxlength="14"
              autocomplete="tel"
              inputmode="numeric"
              required
            />
            <label>Mobile Number*</label>
          </div>

          <div class="form-group">
            <input
              type="email"
              class="form-control"
              name="EmailID"
              placeholder=""
              autocomplete="email"
            />
            <label>Email Id</label>
          </div>

          <!-- Service select -->
          <div class="custom-select form-control" tabindex="0">
            <span class="current">Select Service*</span>
            <ul class="list">
              <li data-value="" class="option selected disabled focus">
                Select Service*
              </li>
              <li data-value="web-designing" class="option">
                Website Designing
              </li>
              <li data-value="web-development" class="option">
                Web Development
              </li>
              <li data-value="mobile-applications" class="option">
                Mobile Applications
              </li>
              <li data-value="e-commerce" class="option">E-Commerce</li>
              <li data-value="seo-digital-marketing" class="option">
                SEO &amp; Digital Marketing
              </li>
            </ul>
          </div>
          <input type="hidden" name="ServiceRequired" value="" />

          <!-- Budget select -->
          <!-- Budget select -->
          <div class="custom-select form-control" tabindex="0">
            <span class="current">Budget?*</span>
            <ul class="list">
              <li data-value="" class="option selected disabled focus">
                Budget?*
              </li>
              <li data-value="40k-1l" class="option">₹40,000 – ₹1 Lakh</li>
              <li data-value="1-5" class="option">₹1 – 5 Lakhs</li>
              <li data-value="5-10" class="option">₹5 – 10 Lakhs</li>
              <li data-value="10-25" class="option">₹10 – 25 Lakhs</li>
              <li data-value="25+" class="option">Above ₹25 Lakhs</li>
            </ul>
          </div>
          <input type="hidden" name="Budget" value="" />

          <div class="form-group">
            <textarea
              class="form-control"
              name="Message"
              placeholder=""
              rows="3"
            ></textarea>
            <label>Enter Details (If any)</label>
          </div>

          <div class="captcha"></div>

          <input type="hidden" name="EnquiryType" value="Quick Enquiry" />
          <input type="hidden" name="EnquiryFor" value="Quick Enquiry" />
          <input type="hidden" name="BrochureFile" value="" />

          <div class="submit-group">
            <button type="submit" class="btn btn-primary">
              Submit Enquiry
            </button>
          </div>
        </form>
      </div>
    </div>

    <div class="model video-pop">
      <div class="model-body">
        <button class="close-video close">
          <svg
            width="24"
            height="24"
            viewBox="0 0 24 24"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              d="M0.75 0.75L23.25 23.25M0.75 23.25L23.25 0.75"
              stroke="black"
              stroke-linecap="round"
              stroke-linejoin="round"
            />
          </svg>
        </button>

        <iframe id="iframe1" allow="autoplay; fullscreen" src=""></iframe>
      </div>
    </div>

    <ul class="fixed-media">
      <li class="wts">
        <a href="javascript:void()" target="_blank" aria-label="WhatsApp">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
            <path
              fill="currentColor"
              d="M19.05 4.91A9.82 9.82 0 0 0 12.04 2c-5.46 0-9.91 4.45-9.91 9.91c0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21c5.46 0 9.91-4.45 9.91-9.91c0-2.65-1.03-5.14-2.9-7.01m-7.01 15.24c-1.48 0-2.93-.4-4.2-1.15l-.3-.18l-3.12.82l.83-3.04l-.2-.31a8.26 8.26 0 0 1-1.26-4.38c0-4.54 3.7-8.24 8.24-8.24c2.2 0 4.27.86 5.82 2.42a8.18 8.18 0 0 1 2.41 5.83c.02 4.54-3.68 8.23-8.22 8.23m4.52-6.16c-.25-.12-1.47-.72-1.69-.81c-.23-.08-.39-.12-.56.12c-.17.25-.64.81-.78.97c-.14.17-.29.19-.54.06c-.25-.12-1.05-.39-1.99-1.23c-.74-.66-1.23-1.47-1.38-1.72c-.14-.25-.02-.38.11-.51c.11-.11.25-.29.37-.43s.17-.25.25-.41c.08-.17.04-.31-.02-.43s-.56-1.34-.76-1.84c-.2-.48-.41-.42-.56-.43h-.48c-.17 0-.43.06-.66.31c-.22.25-.86.85-.86 2.07s.89 2.4 1.01 2.56c.12.17 1.75 2.67 4.23 3.74c.59.26 1.05.41 1.41.52c.59.19 1.13.16 1.56.1c.48-.07 1.47-.6 1.67-1.18c.21-.58.21-1.07.14-1.18s-.22-.16-.47-.28"
            ></path>
          </svg>
        </a>
      </li>

      <li>
        <a class="req-btn" href="javascript:void()" data-model=".enquire-pop">
          Request a Call
        </a>
      </li>
    </ul>
    <!-- ================= jQuery ================= -->
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
      integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/jquery-visible/1.2.0/jquery.visible.min.js"
      integrity="sha512-771ZvVCYr4EfUGXr63AcX7thw7EKa6QE1fhxi8JG7mPacB/arC0cyvYPXKUkCrX2sYKnnFCZby3ZZik42jOuSQ=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.14.0/jquery-ui.min.js"
      integrity="sha512-MlEyuwT6VkRXExjj8CdBKNgd+e2H+aYZOCUaCrt9KRk6MlZDOs91V1yK22rwm8aCIsb5Ec1euL8f0g58RKT/Pg=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>
    <script src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>

    <!-- ================= Swiper ================= -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>

    <!-- ================= Project JS ================= -->
    <script type="text/javascript" src="assets/js/animate.js"></script>
    <script type="text/javascript" src="assets/js/fancybox.js"></script>
    <script type="text/javascript" src="assets/js/function.js"></script>
    <script type="text/javascript" src="assets/js/main.js"></script>
  <script>
  $(function () {
    /* ---------------------------------------------
       1) Mobile accordion for Before / After points
    --------------------------------------------- */
    var $tags = $(".home-results .point-tag");
    var mq = window.matchMedia("(max-width: 540px)");
    var wasMobile = mq.matches;

    function setupAccordion() {
      $(".home-results .point-block")
        .removeClass("is-open")
        .find("ul")
        .stop(true, true)
        .removeAttr("style");

      if (mq.matches) {
        $tags.attr({ role: "button", tabindex: 0, "aria-expanded": "false" });
      } else {
        $tags.removeAttr("role tabindex aria-expanded");
      }
    }

    setupAccordion();

    $(window).on("resize", function () {
      if (wasMobile !== mq.matches) {
        wasMobile = mq.matches;
        setupAccordion();
      }
    });

    $tags.on("click keydown", function (e) {
      if (!mq.matches) return;
      if (e.type === "keydown" && e.key !== "Enter" && e.key !== " ") return;

      e.preventDefault();

      var $block = $(this).closest(".point-block");
      var $list = $block.find("ul");
      var isOpen = $block.hasClass("is-open");

      $block.toggleClass("is-open", !isOpen);
      $(this).attr("aria-expanded", String(!isOpen));

      if (isOpen) {
        $list.stop(true, true).slideUp(300);
      } else {
        $list.stop(true, true).slideDown(300);
      }
    });

    /* ---------------------------------------------
       2) Swiper
    --------------------------------------------- */
    new Swiper(".resultsSwiper", {
      slidesPerView: 1,
      spaceBetween: 20,
      speed: 500,
      noSwipingClass: "swiper-no-swiping", // compare area won't swipe slides
      navigation: {
        nextEl: ".resultsSwiper-next",
        prevEl: ".resultsSwiper-prev",
      },
    });

    /* ---------------------------------------------
       3) Before / After compare (drag + arrow click)
    --------------------------------------------- */
    var STEP = 25; // % moved per arrow click (50 -> 75 -> 100)

    $("[data-compare]").each(function () {
      var frame = this;
      var $frame = $(frame);
      var dragging = false;
      var animTimer;

      function clamp(v) {
        return Math.max(0, Math.min(100, v));
      }

      function getPos() {
        var v = parseFloat(frame.style.getPropertyValue("--pos"));
        return isNaN(v) ? 50 : v;
      }

      function setPos(v, animate) {
        clearTimeout(animTimer);

        if (animate) {
          $frame.addClass("is-animating");
          animTimer = setTimeout(function () {
            $frame.removeClass("is-animating");
          }, 500);
        } else {
          $frame.removeClass("is-animating");
        }

        frame.style.setProperty("--pos", clamp(v) + "%");
      }

      function posFromEvent(e) {
        var rect = frame.getBoundingClientRect();
        return ((e.clientX - rect.left) / rect.width) * 100;
      }

      // ---- Drag ----
      frame.addEventListener("pointerdown", function (e) {
        if ($(e.target).closest(".handle-arrow").length) return; // arrows handle clicks
        dragging = true;
        frame.setPointerCapture(e.pointerId);
        setPos(posFromEvent(e), false);
      });

      frame.addEventListener("pointermove", function (e) {
        if (!dragging) return;
        setPos(posFromEvent(e), false);
      });

      function stopDrag(e) {
        if (!dragging) return;
        dragging = false;
        if (frame.hasPointerCapture(e.pointerId)) {
          frame.releasePointerCapture(e.pointerId);
        }
      }

      frame.addEventListener("pointerup", stopDrag);
      frame.addEventListener("pointercancel", stopDrag);

      // ---- Arrow clicks ----
      $frame.find(".arrow-right").on("click", function (e) {
        e.stopPropagation();
        setPos(getPos() + STEP, true); // reveal more of "Before"
      });

      $frame.find(".arrow-left").on("click", function (e) {
        e.stopPropagation();
        setPos(getPos() - STEP, true); // reveal more of "After"
      });
    });
  });
</script>
  </body>
</html>
