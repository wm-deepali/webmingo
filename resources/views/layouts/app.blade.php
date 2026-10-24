<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @include('partials.seo')
    @if ($general->favicon_url)
        <link rel="icon" href="{{ $general->favicon_url }}" />
    @endif
    <!-- ================= Google Fonts ================= -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="" />
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&amp;display=swap"
        rel="stylesheet" />
    <!-- ================= Vendor CSS ================= -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css" />
    <!-- ================= Project CSS ================= -->
    <link rel="stylesheet" href="{{ asset('assets/font/font.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/sass/header/header.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/sass/footer/footer.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/sass/home/home.css')}}" />
    <!-- ================= Animation / Popup CSS ================= -->
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/css/fancybox.css')}}" />

    @stack('styles')

</head>

<body>
    @php
        $siteName = $general->site_name ?: config('app.name');
        $contactEmail = $general->contact_email;
        $hasSocial = filled($general->facebook) || filled($general->instagram) || filled($general->linkedin)
            || filled($general->twitter) || filled($general->youtube) || filled($general->pinterest);
    @endphp

    @if (!empty($seo?->body_scripts))
        {!! $seo->body_scripts !!}
    @endif

    <header class="site-header">
        <div class="container">
            <div class="header-wrapper">
                <div class="colA">
                    <a href="{{ route('home') }}" class="logo">
                        <img src="{{ $general->header_logo_url }}" alt="{{ $siteName }}" title="{{ $siteName }}" />
                    </a>
                </div>

                <div class="colB">
                    <nav class="main-navigation" aria-label="Main Navigation">
                        <ul class="center-menu-list">
                            <li>
                                <a href="{{ route('home') }}">Home</a>
                            </li>

                            <li class="hasDropDown">
                                <a href="javascript:void(0)">
                                    Company
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                        viewBox="0 0 24 24">
                                        <path d="M0 0h24v24H0z" fill="none" />
                                        <path fill="currentColor" fill-rule="evenodd"
                                            d="M16.53 8.97a.75.75 0 0 1 0 1.06l-4 4a.75.75 0 0 1-1.06 0l-4-4a.75.75 0 1 1 1.06-1.06L12 12.44l3.47-3.47a.75.75 0 0 1 1.06 0"
                                            clip-rule="evenodd" />
                                    </svg>
                                </a>

                                <ul class="dropdown-menu">
                                    <li><a href="{{ route('about') }}">About Us</a></li>
                                    <li><a href="{{ route('lifeAt') }}">Life at Web Mingo</a></li>
                                    <li><a href="{{ route('career') }}">Careers</a></li>
                                </ul>
                            </li>

                            <li class="hasDropDown hasMegaMenu">
                                <a href="javascript:void(0)">
                                    Services
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                        viewBox="0 0 24 24">
                                        <path d="M0 0h24v24H0z" fill="none" />
                                        <path fill="currentColor" fill-rule="evenodd"
                                            d="M16.53 8.97a.75.75 0 0 1 0 1.06l-4 4a.75.75 0 0 1-1.06 0l-4-4a.75.75 0 1 1 1.06-1.06L12 12.44l3.47-3.47a.75.75 0 0 1 1.06 0"
                                            clip-rule="evenodd" />
                                    </svg>
                                </a>

                                <div class="mega-menu">
                                    <div class="mega-menu__grid">
                                        <!-- Website Design & Development -->
                                        <div class="mega-menu__col">
                                            <span class="mega-menu__col-title">Website Design &amp; Development</span>
                                            <ul>
                                                <li>
                                                    <a href="{{ route('business-website-development') }}">Business
                                                        Website
                                                        Development</a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('E-Commerce-website-development') }}">E-Commerce
                                                        Website
                                                        Development</a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('E-Learning-LMS-development') }}">E-Learning &amp;
                                                        LMS
                                                        Development</a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('classified-portals-development') }}">Classified
                                                        Portals
                                                        Development</a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('custom-web-applications-development') }}">Custom
                                                        Web
                                                        Applications Development</a>
                                                </li>
                                            </ul>
                                        </div>

                                        <!-- Digital Marketing -->
                                        <div class="mega-menu__col">
                                            <span class="mega-menu__col-title">Digital Marketing</span>
                                            <ul>
                                                <li>
                                                    <a href="{{ route('search-engine-optimisation') }}">Search Engine
                                                        Optimisation
                                                        (SEO)</a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('social-media-marketing') }}">Social Media
                                                        Marketing
                                                        (SMM)</a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('google-ads-management') }}">Google Ads Management
                                                        (PPC)</a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('meta-ads-management') }}">Meta Ads Management</a>
                                                </li>
                                            </ul>
                                        </div>

                                        <!-- Mobile Applications -->
                                        <div class="mega-menu__col">
                                            <span class="mega-menu__col-title">Mobile Applications</span>
                                            <ul>
                                                <li>
                                                    <a href="{{ route('android-applications-development') }}">Android
                                                        Applications
                                                        Development</a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('iOS-applications-development') }}">iOS
                                                        Applications
                                                        Development</a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('flutter-app-development') }}">Flutter App
                                                        Development</a>
                                                </li>
                                            </ul>
                                        </div>

                                        <!-- Graphics & Media -->
                                        <div class="mega-menu__col">
                                            <span class="mega-menu__col-title">Graphics &amp; Media</span>
                                            <ul>
                                                <li>
                                                    <a href="{{ route('graphic-designing') }}">Graphic Designing</a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('video-creations') }}">Video Creations</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="mega-menu__footer">
                                        <a href="javascript:void(0)" class="mega-menu__view-all">
                                            View All Services
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1024 1024">
                                                <path fill="currentColor"
                                                    d="M414.592 149.376L746.24 489.6a32 32 0 0 1 0 44.672L414.592 874.624a29.12 29.12 0 0 1-41.728 0a30.59 30.59 0 0 1 0-42.752l311.872-319.936L372.864 192a30.59 30.59 0 0 1 0-42.688a29.12 29.12 0 0 1 41.728 0">
                                                </path>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </li>

                            <li class="hasDropDown">
                                <a href="javascript:void(0)">
                                    Industries
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                        viewBox="0 0 24 24">
                                        <path d="M0 0h24v24H0z" fill="none" />
                                        <path fill="currentColor" fill-rule="evenodd"
                                            d="M16.53 8.97a.75.75 0 0 1 0 1.06l-4 4a.75.75 0 0 1-1.06 0l-4-4a.75.75 0 1 1 1.06-1.06L12 12.44l3.47-3.47a.75.75 0 0 1 1.06 0"
                                            clip-rule="evenodd" />
                                    </svg>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('education-coaching') }}">Education &amp; Coaching</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('retail-E-Commerce-D2C') }}">Retail, E-Commerce &amp; D2C</a>
                                    </li>
                                    <li><a href="{{ route('real-state') }}">Real Estate</a></li>
                                    <li>
                                        <a href="{{ route('healthcare-clinics') }}">Healthcare &amp; Clinics</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('NGO-Non-Profits') }}">NGO &amp; Non-Profits</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('manufacturing-export') }}">Manufacturing &amp; Export</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('hotels-hospitality') }}">Hotels &amp; Hospitality</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('travel-tourism') }}">Travel &amp; Tourism</a>
                                    </li>
                                    <li class="dropdown-menu__view-all">
                                        <a href="javascript:void()">View All Industries</a>
                                    </li>
                                </ul>
                            </li>

                            <li>
                                <a href="{{ route('our-works') }}">Our Works</a>
                            </li>

                            <li>
                                <a href="{{ route('contact') }}">Contact</a>
                            </li>
                        </ul>
                    </nav>
                </div>

                <!-- RIGHT SIDE -->
                <div class="colC">
                    <!-- Call -->
                    @if ($general->phone_href)
                        <a href="{{ $general->phone_href }}" class="btn btn-outline-primary search-btn"
                            aria-label="Call us">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 32 32"
                                aria-hidden="true">
                                <path d="M0 0h32v32H0z" fill="none" />
                                <path fill="currentColor" d="M24 13h-2a3.003 3.003 0 0 0-3-3V8a5.006 5.006 0 0 1 5 5" />
                                <path fill="currentColor"
                                    d="M28 13h-2a7.01 7.01 0 0 0-7-7V4a9.01 9.01 0 0 1 9 9m-7.667 8.482l2.24-2.24a2.17 2.17 0 0 1 2.337-.48l2.728 1.092A2.17 2.17 0 0 1 29 21.866v4.961a2.167 2.167 0 0 1-2.284 2.169C7.594 27.806 3.732 11.61 3.015 5.408A2.162 2.162 0 0 1 5.169 3h4.873a2.17 2.17 0 0 1 2.012 1.362l1.091 2.728a2.17 2.17 0 0 1-.48 2.337l-2.24 2.24s1.242 8.732 9.908 9.815" />
                            </svg>
                        </a>
                    @endif

                    <!-- WhatsApp -->
                    @if ($general->whatsapp_url)
                        <a href="{{ $general->whatsapp_url }}" target="_blank" rel="noopener"
                            class="btn btn-outline-primary search-btn" aria-label="WhatsApp">
                            <svg xmlns="http://www.w3.org/2000/svg" width="0.88em" height="1em" viewBox="0 0 448 512">
                                <path d="M0 0h448v512H0z" fill="none" />
                                <path fill="currentColor"
                                    d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222c0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222c0-59.3-25.2-115-67.1-157m-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4l-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2c0-101.7 82.8-184.5 184.6-184.5c49.3 0 95.6 19.2 130.4 54.1s56.2 81.2 56.1 130.5c0 101.8-84.9 184.6-186.6 184.6m101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18c-5.1-1.9-8.8-2.8-12.5 2.8s-14.3 18-17.6 21.8c-3.2 3.7-6.5 4.2-12 1.4c-32.6-16.3-54-29.1-75.5-66c-5.7-9.8 5.7-9.1 16.3-30.3c1.8-3.7.9-6.9-.5-9.7s-12.5-30.1-17.1-41.2c-4.5-10.8-9.1-9.3-12.5-9.5c-3.2-.2-6.9-.2-10.6-.2s-9.7 1.4-14.8 6.9c-5.1 5.6-19.4 19-19.4 46.3s19.9 53.7 22.6 57.4c2.8 3.7 39.1 59.7 94.8 83.8c35.2 15.2 49 16.5 66.6 13.9c10.7-1.6 32.8-13.4 37.4-26.4s4.6-24.1 3.2-26.4c-1.3-2.5-5-3.9-10.5-6.6" />
                            </svg>
                        </a>
                    @endif

                    <!-- Offers -->
                    <a href="javascript:void(0)" data-model=".enquire-pop" class="btn btn-primary header-cta">
                        Get a Callback
                    </a>

                    <!-- MOBILE MENU -->
                    <button type="button" class="ham-btn" data-model=".ham-pop" aria-label="Open menu">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path fill="none" stroke="currentColor" stroke-linecap="round"
                                d="M3.5 7.5h17M3.5 12h14m-14 4.5h17" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </header>

    @yield('content')

    <footer class="site-footer">
        <!-- Top CTA strip -->
        <div class="footer-cta-strip">
            <div class="container">
                <!-- Left group: project + email travel together -->
                <div class="footer-cta-strip__group">
                    <div class="footer-cta-strip__item">
                        <span class="footer-cta-strip__icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20"
                                fill="none">
                                <path stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M9 18h6M10 21h4M12 3a6 6 0 0 0-3.6 10.8c.6.45.9 1.15.9 1.9V16h5.4v-.3c0-.75.3-1.45.9-1.9A6 6 0 0 0 12 3Z" />
                            </svg>
                        </span>
                        <div class="footer-cta-strip__text">
                            <p>Have a Project in Mind?</p>
                            <span>Let's build it right, the first time.</span>
                        </div>
                    </div>

                    @if ($contactEmail)
                        <span class="footer-cta-strip__divider" aria-hidden="true"></span>

                        <div class="footer-cta-strip__item">
                            <span class="footer-cta-strip__icon">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20"
                                    fill="none">
                                    <path stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M3 6.5 12 13l9-6.5M4 5h16a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V6a1 1 0 0 1 1-1Z" />
                                </svg>
                            </span>
                            <div class="footer-cta-strip__text">
                                <p>Email Us</p>
                                <span>{{ $contactEmail }}</span>
                            </div>
                        </div>
                    @endif
                </div>

                <!-- Right: actions -->
                <div class="footer-cta-strip__actions">
                    <a href="javascript:void(0)" class="btn btn-outline-white">Book a Discovery Call</a>
                    <a href="javascript:void(0)" class="btn btn-white">Get a Free Quote</a>
                </div>
            </div>
        </div>

        <!-- Main footer -->
        <div class="footer-main">
            <div class="container">
                <!-- Brand column -->
                <div class="footer-col footer-col--brand">
                    <a href="{{ route('home') }}" class="footer-logo">
                        <img src="{{ $general->footer_logo_url }}" alt="{{ $siteName }}" />
                    </a>

                    @if (filled($general->footer_description))
                        <p class="footer-tagline">{{ $general->footer_description }}</p>
                    @endif

                    <ul class="footer-contact">
                        @if (filled($general->business_address))
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="17" height="17"
                                    fill="none">
                                    <path stroke="currentColor" stroke-width="1.6"
                                        d="M12 21s7-6.2 7-11.5A7 7 0 0 0 5 9.5C5 14.8 12 21 12 21Z" />
                                    <circle cx="12" cy="9.5" r="2.4" stroke="currentColor" stroke-width="1.6" />
                                </svg>
                                <span>{{ $general->business_address }}</span>
                            </li>
                        @endif
                        @if ($general->phone_href)
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="17" height="17"
                                    fill="none">
                                    <path stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M4.5 4h3.7l1.4 4.2-2 1.6a12.4 12.4 0 0 0 5.6 5.6l1.6-2 4.2 1.4v3.7c0 .9-.75 1.6-1.65 1.5A17 17 0 0 1 3 5.65C2.9 4.75 3.6 4 4.5 4Z" />
                                </svg>
                                <a href="{{ $general->phone_href }}">{{ $general->phone }}</a>
                            </li>
                        @endif
                        @if ($contactEmail)
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="17" height="17"
                                    fill="none">
                                    <path stroke="currentColor" stroke-width="1.6"
                                        d="M3 6.5 12 13l9-6.5M4 5h16a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V6a1 1 0 0 1 1-1Z" />
                                </svg>
                                <a href="mailto:{{ $contactEmail }}">{{ $contactEmail }}</a>
                            </li>
                        @endif
                    </ul>

                    @if ($hasSocial)
                        <ul class="footer-social">
                            @if (filled($general->facebook))
                                <li>
                                    <a href="{{ $general->facebook }}" target="_blank" rel="noopener"
                                        aria-label="Facebook">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16"
                                            height="16">
                                            <path fill="currentColor"
                                                d="M14 13.5h2.5l1-4H14v-2c0-1.03 0-2 2-2h1.5V2.14C17.174 2.097 15.943 2 14.643 2 11.928 2 10 3.657 10 6.7v2.8H7v4h3V22h4z" />
                                        </svg>
                                    </a>
                                </li>
                            @endif
                            @if (filled($general->instagram))
                                <li>
                                    <a href="{{ $general->instagram }}" target="_blank" rel="noopener"
                                        aria-label="Instagram">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16"
                                            height="16">
                                            <path fill="currentColor"
                                                d="M12 2c2.72 0 3.06.01 4.12.06 1.06.05 1.79.22 2.43.47.66.26 1.22.6 1.77 1.16.55.55.9 1.11 1.16 1.77.25.64.42 1.37.47 2.43.05 1.06.06 1.4.06 4.12s-.01 3.06-.06 4.12c-.05 1.06-.22 1.79-.47 2.43a4.9 4.9 0 0 1-1.16 1.77 4.9 4.9 0 0 1-1.77 1.16c-.64.25-1.37.42-2.43.47-1.06.05-1.4.06-4.12.06s-3.06-.01-4.12-.06c-1.06-.05-1.79-.22-2.43-.47a4.9 4.9 0 0 1-1.77-1.16 4.9 4.9 0 0 1-1.16-1.77c-.25-.64-.42-1.37-.47-2.43C2.01 15.06 2 14.72 2 12s.01-3.06.06-4.12c.05-1.06.22-1.79.47-2.43.26-.66.6-1.22 1.16-1.77A4.9 4.9 0 0 1 5.46.52c.64-.25 1.37-.42 2.43-.47C8.94.01 9.28 0 12 0Zm0 5a5 5 0 1 0 0 10 5 5 0 0 0 0-10Zm0 8.2a3.2 3.2 0 1 1 0-6.4 3.2 3.2 0 0 1 0 6.4Zm5.2-8.4a1.2 1.2 0 1 1-2.4 0 1.2 1.2 0 0 1 2.4 0Z" />
                                        </svg>
                                    </a>
                                </li>
                            @endif
                            @if (filled($general->linkedin))
                                <li>
                                    <a href="{{ $general->linkedin }}" target="_blank" rel="noopener"
                                        aria-label="LinkedIn">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16"
                                            height="16">
                                            <path fill="currentColor"
                                                d="M4.98 3.5a2.5 2.5 0 1 1 0 5 2.5 2.5 0 0 1 0-5ZM3 9h4v12H3zM9 9h3.8v1.64h.05c.53-.95 1.83-1.95 3.77-1.95 4.03 0 4.78 2.5 4.78 5.76V21h-4v-5.6c0-1.34-.02-3.06-1.87-3.06-1.87 0-2.16 1.46-2.16 2.96V21H9z" />
                                        </svg>
                                    </a>
                                </li>
                            @endif
                            @if (filled($general->twitter))
                                <li>
                                    <a href="{{ $general->twitter }}" target="_blank" rel="noopener"
                                        aria-label="X (Twitter)">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                            viewBox="0 0 24 24">
                                            <path d="M0 0h24v24H0z" fill="none" />
                                            <path fill="currentColor" fill-rule="evenodd"
                                                d="M15.022 3.343c.508-.087 1.077-.116 1.613-.025a4.85 4.85 0 0 1 2.54 1.273c.456.01.905-.08 1.302-.208a5.4 5.4 0 0 0 1.098-.501l.009-.006a.75.75 0 0 1 1.042 1.037c-.207.315-.496.877-.819 1.507l-.155.301c-.185.36-.375.724-.552 1.036c-.111.196-.23.395-.35.567v.274A12.34 12.34 0 0 1 8.287 21.03a12.3 12.3 0 0 1-6.694-1.97a.75.75 0 0 1 .5-1.375q.45.055.905.055a7.5 7.5 0 0 0 3.128-.696a4.86 4.86 0 0 1-2.61-2.923a.75.75 0 0 1 .147-.722l.01-.01A4.85 4.85 0 0 1 2.05 9.793V9.74a.75.75 0 0 1 .553-.724A4.84 4.84 0 0 1 2.09 6.84a4.9 4.9 0 0 1 .65-2.442a.75.75 0 0 1 1.232-.1a10.9 10.9 0 0 0 7.006 3.93a4.85 4.85 0 0 1 2.562-4.406c.402-.214.934-.385 1.482-.479m-11.28 7.548a3.35 3.35 0 0 0 2.503 2.164a.75.75 0 0 1 .072 1.453q-.409.124-.834.173a3.36 3.36 0 0 0 2.59 1.3a.75.75 0 0 1 .45 1.339a9 9 0 0 1-3.548 1.695a10.8 10.8 0 0 0 3.313.515h.009A10.84 10.84 0 0 0 19.25 8.607v-.535a.75.75 0 0 1 .186-.495c.07-.079.19-.261.36-.56c.16-.282.338-.622.523-.981l.033-.066a5 5 0 0 1-1.593.097a.75.75 0 0 1-.47-.237a3.35 3.35 0 0 0-1.904-1.032a3.4 3.4 0 0 0-1.11.025a3.6 3.6 0 0 0-1.028.323a3.35 3.35 0 0 0-1.678 3.74a.75.75 0 0 1-.767.925a12.4 12.4 0 0 1-8.149-3.627a3.4 3.4 0 0 0-.063.657v.002a3.34 3.34 0 0 0 1.486 2.785A.75.75 0 0 1 4.64 11a5 5 0 0 1-.897-.11"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </a>
                                </li>
                            @endif
                            @if (filled($general->youtube))
                                <li>
                                    <a href="{{ $general->youtube }}" target="_blank" rel="noopener"
                                        aria-label="YouTube">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16"
                                            height="16">
                                            <path fill="currentColor"
                                                d="M21.58 7.19a2.5 2.5 0 0 0-1.76-1.77C18.25 5 12 5 12 5s-6.25 0-7.82.42A2.5 2.5 0 0 0 2.42 7.19C2 8.76 2 12 2 12s0 3.24.42 4.81a2.5 2.5 0 0 0 1.76 1.77C5.75 19 12 19 12 19s6.25 0 7.82-.42a2.5 2.5 0 0 0 1.76-1.77C22 15.24 22 12 22 12s0-3.24-.42-4.81ZM10 15V9l5.2 3Z" />
                                        </svg>
                                    </a>
                                </li>
                            @endif
                            @if (filled($general->pinterest))
                                <li>
                                    <a href="{{ $general->pinterest }}" target="_blank" rel="noopener"
                                        aria-label="Pinterest">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16"
                                            height="16">
                                            <path fill="currentColor"
                                                d="M12 2a10 10 0 0 0-3.64 19.3c-.09-.79-.17-2 .03-2.86l1.16-4.9s-.3-.6-.3-1.48c0-1.39.8-2.42 1.8-2.42.85 0 1.26.64 1.26 1.4 0 .85-.54 2.13-.82 3.31-.23.99.5 1.8 1.47 1.8 1.77 0 3.12-1.86 3.12-4.55 0-2.38-1.71-4.04-4.15-4.04-2.83 0-4.49 2.12-4.49 4.32 0 .85.33 1.77.74 2.27a.3.3 0 0 1 .07.28l-.27 1.13c-.04.18-.14.22-.33.13-1.25-.58-2.03-2.4-2.03-3.87 0-3.15 2.29-6.04 6.6-6.04 3.46 0 6.15 2.47 6.15 5.76 0 3.44-2.17 6.2-5.18 6.2-1.01 0-1.97-.53-2.3-1.15l-.62 2.41c-.23.87-.84 1.96-1.25 2.62A10 10 0 1 0 12 2Z" />
                                        </svg>
                                    </a>
                                </li>
                            @endif
                        </ul>
                    @endif
                </div>

                <!-- Company -->
                <div class="footer-col">
                    <h5>Company</h5>
                    <ul>
                        <li><a href="{{ route('about') }}">About Us</a></li>
                        <li><a href="{{ route('lifeAt') }}">Life at Web Mingo</a></li>
                        <li><a href="{{ route('our-works') }}">Our Works</a></li>
                        <li><a href="{{ route('career') }}">Careers</a></li>
                        <li><a href="{{ route('contact') }}">Contact Us</a></li>
                        <li><a href="javascript:void(0)">Share Your Feedback</a></li>
                    </ul>
                </div>

                <!-- Services -->
                <div class="footer-col">
                    <h5>Services</h5>
                    <ul>
                        <li>
                            <a href="{{ route('website-design-development') }}">Website Design & Development</a>
                        </li>
                        <li><a href="{{ route('digital-marketing') }}">Digital Marketing</a></li>
                        <li>
                            <a href="{{ route('mobile-app-development') }}">Mobile App Development</a>
                        </li>
                        <li><a href="{{ route('digital-branding') }}">Digital Branding</a></li>
                    </ul>
                </div>

                <!-- Resources -->
                <div class="footer-col">
                    <h5>Resources</h5>
                    <ul>
                        <li><a href="{{ route('blog') }}">Blogs</a></li>
                        <li><a href="{{ route('faqs') }}">FAQ</a></li>
                        <li><a href="{{ route('Knowledge-base') }}">Knowledge Base</a></li>
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
                            <input type="email" name="txtNewsletterEmail" placeholder=" " class="form-control"
                                required />
                            <label for="txtNewsletterEmail">Enter your email address</label>
                        </div>
                        <button type="submit" class="btn btn-white">
                            Subscribe
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"
                                fill="none">
                                <path stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" d="M5 12h14m0 0-6-6m6 6-6 6" />
                            </svg>
                        </button>
                    </form>

                    <div class="footer-badge">
                        <span class="footer-badge__icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20"
                                fill="none">
                                <path stroke="currentColor" stroke-width="1.4"
                                    d="m12 2 2.2 4.6 5 .7-3.6 3.6.9 5.1L12 13.6l-4.5 2.4.9-5.1-3.6-3.6 5-.7L12 2Z" />
                            </svg>
                        </span>
                        <span class="footer-badge__text">Trusted by <strong>150+</strong> businesses across India</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bottom bar -->
        <div class="footer-bottom">
            <div class="container">
                <p class="copyright">
                    @if (filled($general->footer_copyright))
                        {{ $general->footer_copyright }}
                    @else
                        © {{ date('Y') }} {{ $siteName }}. All rights reserved.
                    @endif
                </p>

                <ul class="footer-legal">
                    @foreach ($footerPages as $footerPage)
                        <li><a href="{{ $footerPage->url }}">{{ $footerPage->page_name }}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </footer>
    <!-- ================= modals-pop-ups ================= -->

    <div class="ham-pop">
        <div class="ham-body">
            <div class="ham-top">
                <button type="button" class="ham-back" data-ham-back>
                    <svg viewBox="0 0 24 24">
                        <path d="M19 12H5M11 18l-6-6 6-6" />
                    </svg>
                    <span>Back</span>
                </button>

                <button class="close close-btn" type="button" aria-label="Close menu">
                    <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0.5 0.5L25.5 25.5M0.5 25.5L25.5 0.5" stroke="black" stroke-linecap="round"
                            stroke-linejoin="round"></path>
                    </svg>
                </button>
            </div>

            <div class="ham-views">
                <div class="ham-view is-active" data-ham-view="main" data-ham-title="Menu">
                    <ul class="ham-list">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li>
                            <button type="button" class="ham-link" data-ham-open="company">
                                <span class="ham-link-text">Company</span>
                                <span class="ham-arrow">
                                    <svg viewBox="0 0 24 24">
                                        <path d="M5 12h14M13 6l6 6-6 6" />
                                    </svg></span>
                            </button>
                        </li>
                        <li>
                            <button type="button" class="ham-link" data-ham-open="services">
                                <span class="ham-link-text">Services</span>
                                <span class="ham-arrow"><svg viewBox="0 0 24 24">
                                        <path d="M5 12h14M13 6l6 6-6 6" />
                                    </svg></span>
                            </button>
                        </li>
                        <li>
                            <button type="button" class="ham-link" data-ham-open="industries">
                                <span class="ham-link-text">Industries</span>
                                <span class="ham-arrow"><svg viewBox="0 0 24 24">
                                        <path d="M5 12h14M13 6l6 6-6 6" />
                                    </svg></span>
                            </button>
                        </li>
                        <li><a href="{{ route('our-works') }}">Our Works</a></li>
                        <li><a href="{{ route('contact') }}">Contact Us</a></li>
                    </ul>
                </div>

                <div class="ham-view" data-ham-view="company" data-ham-title="Company" aria-hidden="true">
                    <div class="ham-head">
                        <h3 class="ham-title">Company</h3>
                    </div>
                    <ul class="ham-list ham-list--sub">
                        <li><a href="{{ route('about') }}">About Us</a></li>
                        <li><a href="{{ route('lifeAt') }}">Life at Web Mingo</a></li>
                        <li><a href="{{ route('career') }}">Careers</a></li>
                    </ul>
                </div>

                <div class="ham-view" data-ham-view="services" data-ham-title="Services" aria-hidden="true">
                    <div class="ham-head">
                        <h3 class="ham-title">Services</h3>
                    </div>
                    <ul class="ham-list">
                        <li>
                            <button type="button" class="ham-link" data-ham-open="web">
                                <span class="ham-link-text">Website Design &amp; Development</span>
                                <span class="ham-arrow"><svg viewBox="0 0 24 24">
                                        <path d="M5 12h14M13 6l6 6-6 6" />
                                    </svg></span>
                            </button>
                        </li>
                        <li>
                            <button type="button" class="ham-link" data-ham-open="marketing">
                                <span class="ham-link-text">Digital Marketing</span>
                                <span class="ham-arrow"><svg viewBox="0 0 24 24">
                                        <path d="M5 12h14M13 6l6 6-6 6" />
                                    </svg></span>
                            </button>
                        </li>
                        <li>
                            <button type="button" class="ham-link" data-ham-open="mobile">
                                <span class="ham-link-text">Mobile Applications</span>
                                <span class="ham-arrow"><svg viewBox="0 0 24 24">
                                        <path d="M5 12h14M13 6l6 6-6 6" />
                                    </svg></span>
                            </button>
                        </li>
                        <li>
                            <button type="button" class="ham-link" data-ham-open="graphics">
                                <span class="ham-link-text">Graphics &amp; Media</span>
                                <span class="ham-arrow"><svg viewBox="0 0 24 24">
                                        <path d="M5 12h14M13 6l6 6-6 6" />
                                    </svg></span>
                            </button>
                        </li>
                    </ul>
                </div>

                <div class="ham-view" data-ham-view="web" data-ham-title="Services" aria-hidden="true">
                    <div class="ham-head">
                        <h3 class="ham-title">Website Design &amp; Development</h3>
                    </div>
                    <ul class="ham-list ham-list--sub">
                        <li>
                            <a href="{{ route('business-website-development') }}">Business Website Development</a>
                        </li>
                        <li>
                            <a href="{{ route('E-Commerce-website-development') }}">E-Commerce Website Development</a>
                        </li>
                        <li>
                            <a href="{{ route('E-Learning-LMS-development') }}">E-Learning &amp; LMS Development</a>
                        </li>
                        <li>
                            <a href="{{ route('classified-portals-development') }}">Classified Portals Development</a>
                        </li>
                        <li>
                            <a href="{{ route('custom-web-applications-development') }}">Custom Web Applications
                                Development</a>
                        </li>
                    </ul>
                </div>

                <div class="ham-view" data-ham-view="marketing" data-ham-title="Services" aria-hidden="true">
                    <div class="ham-head">
                        <h3 class="ham-title">Digital Marketing</h3>
                    </div>
                    <ul class="ham-list ham-list--sub">
                        <li>
                            <a href="{{ route('search-engine-optimisation') }}">Search Engine Optimisation (SEO)</a>
                        </li>
                        <li>
                            <a href="{{ route('social-media-marketing') }}">Social Media Marketing (SMM)</a>
                        </li>
                        <li>
                            <a href="{{ route('google-ads-management') }}">Google Ads Management (PPC)</a>
                        </li>
                        <li>
                            <a href="{{ route('meta-ads-management') }}">Meta Ads Management</a>
                        </li>
                    </ul>
                </div>

                <div class="ham-view" data-ham-view="mobile" data-ham-title="Services" aria-hidden="true">
                    <div class="ham-head">
                        <h3 class="ham-title">Mobile Applications</h3>
                    </div>
                    <ul class="ham-list ham-list--sub">
                        <li>
                            <a href="{{ route('android-applications-development') }}">Android Applications
                                Development</a>
                        </li>
                        <li>
                            <a href="{{ route('iOS-applications-development') }}">iOS Applications Development</a>
                        </li>
                        <li>
                            <a href="{{ route('flutter-app-development') }}">Flutter App Development</a>
                        </li>
                    </ul>
                </div>

                <div class="ham-view" data-ham-view="graphics" data-ham-title="Services" aria-hidden="true">
                    <div class="ham-head">
                        <h3 class="ham-title">Graphics &amp; Media</h3>
                    </div>
                    <ul class="ham-list ham-list--sub">
                        <li><a href="{{ route('graphic-designing') }}">Graphic Designing</a></li>
                        <li><a href="{{ route('video-creations') }}">Video Creations</a></li>
                    </ul>
                </div>

                <div class="ham-view" data-ham-view="industries" data-ham-title="Menu" aria-hidden="true">
                    <div class="ham-head">
                        <h3 class="ham-title">Industries</h3>
                    </div>
                    <ul class="ham-list ham-list--sub">
                        <li>
                            <a href="{{ route('education-coaching') }}">Education &amp; Coaching</a>
                        </li>
                        <li>
                            <a href="{{ route('retail-E-Commerce-D2C') }}">Retail, E-Commerce &amp; D2C</a>
                        </li>
                        <li><a href="{{ route('real-state') }}">Real Estate</a></li>
                        <li>
                            <a href="{{ route('healthcare-clinics') }}">Healthcare &amp; Clinics</a>
                        </li>
                        <li><a href="{{ route('NGO-Non-Profits') }}">NGO &amp; Non-Profits</a></li>
                        <li>
                            <a href="{{ route('manufacturing-export') }}">Manufacturing &amp; Export</a>
                        </li>
                        <li>
                            <a href="{{ route('hotels-hospitality') }}">Hotels &amp; Hospitality</a>
                        </li>
                        <li><a href="{{ route('travel-tourism') }}">Travel &amp; Tourism</a></li>
                        <li><a href="javascript:void(0)">View All Industries</a></li>
                    </ul>
                </div>
            </div>

            <div class="ham-bottom">
                @if ($hasSocial)
                    <div class="ham-social">
                        @if (filled($general->facebook))
                            <a href="{{ $general->facebook }}" target="_blank" rel="noopener" title="Facebook">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M14 13.5H16.5L17.5 9.5H14V7.5C14 6.47 14 5.5 16 5.5H17.5V2.14C17.174 2.097 15.943 2 14.643 2C11.928 2 10 3.657 10 6.7V9.5H7V13.5H10V22H14V13.5Z"
                                        fill="#666666"></path>
                                </svg>
                            </a>
                        @endif
                        @if (filled($general->instagram))
                            <a href="{{ $general->instagram }}" title="Instagram" target="_blank" rel="noopener">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M17.34 5.46C17.1027 5.46 16.8707 5.53038 16.6733 5.66224C16.476 5.79409 16.3222 5.98151 16.2313 6.20078C16.1405 6.42005 16.1168 6.66133 16.1631 6.89411C16.2094 7.12689 16.3236 7.34071 16.4915 7.50853C16.6593 7.67635 16.8731 7.79064 17.1059 7.83694C17.3387 7.88324 17.5799 7.85948 17.7992 7.76866C18.0185 7.67783 18.2059 7.52402 18.3378 7.32668C18.4696 7.12935 18.54 6.89734 18.54 6.66C18.54 6.34174 18.4136 6.03652 18.1885 5.81147C17.9635 5.58643 17.6583 5.46 17.34 5.46ZM21.94 7.88C21.9206 7.0503 21.7652 6.2294 21.48 5.45C21.2257 4.78313 20.83 4.17928 20.32 3.68C19.8248 3.16743 19.2196 2.77418 18.55 2.53C17.7727 2.23616 16.9508 2.07721 16.12 2.06C15.06 2 14.72 2 12 2C9.28 2 8.94 2 7.88 2.06C7.04915 2.07721 6.22734 2.23616 5.45 2.53C4.78168 2.77665 4.17693 3.16956 3.68 3.68C3.16743 4.17518 2.77418 4.78044 2.53 5.45C2.23616 6.22734 2.07721 7.04915 2.06 7.88C2 8.94 2 9.28 2 12C2 14.72 2 15.06 2.06 16.12C2.07721 16.9508 2.23616 17.7727 2.53 18.55C2.77418 19.2196 3.16743 19.8248 3.68 20.32C4.17693 20.8304 4.78168 21.2234 5.45 21.47C6.22734 21.7638 7.04915 21.9228 7.88 21.94C8.94 22 9.28 22 12 22C14.72 22 15.06 22 16.12 21.94C16.9508 21.9228 17.7727 21.7638 18.55 21.47C19.2196 21.2258 19.8248 20.8326 20.32 20.32C20.8322 19.8226 21.2283 19.2182 21.48 18.55C21.7652 17.7706 21.9206 16.9497 21.94 16.12C21.94 15.06 22 14.72 22 12C22 9.28 22 8.94 21.94 7.88ZM20.14 16C20.1327 16.6348 20.0178 17.2637 19.8 17.86C19.6403 18.2952 19.3839 18.6884 19.05 19.01C18.7256 19.3405 18.3332 19.5964 17.9 19.76C17.3037 19.9778 16.6748 20.0927 16.04 20.1C15.04 20.15 14.67 20.16 12.04 20.16C9.41 20.16 9.04 20.16 8.04 20.1C7.38089 20.1123 6.72459 20.0109 6.1 19.8C5.68578 19.6281 5.31136 19.3728 5 19.05C4.66809 18.7287 4.41484 18.3352 4.26 17.9C4.01586 17.2952 3.88044 16.6519 3.86 16C3.86 15 3.8 14.63 3.8 12C3.8 9.37 3.8 9 3.86 8C3.86448 7.35106 3.98295 6.70795 4.21 6.1C4.38605 5.67791 4.65627 5.30166 5 5C5.30381 4.65617 5.67929 4.3831 6.1 4.2C6.70955 3.98004 7.352 3.86508 8 3.86C9 3.86 9.37 3.8 12 3.8C14.63 3.8 15 3.8 16 3.86C16.6348 3.86728 17.2637 3.98225 17.86 4.2C18.3144 4.36865 18.7223 4.64285 19.05 5C19.3777 5.30718 19.6338 5.68273 19.8 6.1C20.0223 6.70893 20.1373 7.35178 20.14 8C20.19 9 20.2 9.37 20.2 12C20.2 14.63 20.19 15 20.14 16ZM12 6.87C10.9858 6.87198 9.99496 7.17453 9.15265 7.73942C8.31035 8.30431 7.65438 9.1062 7.26763 10.0438C6.88089 10.9813 6.78072 12.0125 6.97979 13.0069C7.17886 14.0014 7.66824 14.9145 8.38608 15.631C9.10392 16.3474 10.018 16.835 11.0129 17.0321C12.0077 17.2293 13.0387 17.1271 13.9755 16.7385C14.9123 16.35 15.7129 15.6924 16.2761 14.849C16.8394 14.0056 17.14 13.0142 17.14 12C17.1413 11.3251 17.0092 10.6566 16.7512 10.033C16.4933 9.40931 16.1146 8.84281 15.6369 8.36605C15.1592 7.88929 14.5919 7.51168 13.9678 7.25493C13.3436 6.99818 12.6749 6.86736 12 6.87ZM12 15.33C11.3414 15.33 10.6976 15.1347 10.15 14.7688C9.60234 14.4029 9.17552 13.8828 8.92348 13.2743C8.67144 12.6659 8.6055 11.9963 8.73398 11.3503C8.86247 10.7044 9.17963 10.111 9.64533 9.64533C10.111 9.17963 10.7044 8.86247 11.3503 8.73398C11.9963 8.6055 12.6659 8.67144 13.2743 8.92348C13.8828 9.17552 14.4029 9.60234 14.7688 10.15C15.1347 10.6976 15.33 11.3414 15.33 12C15.33 12.4373 15.2439 12.8703 15.0765 13.2743C14.9092 13.6784 14.6639 14.0454 14.3547 14.3547C14.0454 14.6639 13.6784 14.9092 13.2743 15.0765C12.8703 15.2439 12.4373 15.33 12 15.33Z"
                                        fill="#666666"></path>
                                </svg>
                            </a>
                        @endif
                        @if (filled($general->linkedin))
                            <a href="{{ $general->linkedin }}" target="_blank" rel="noopener" title="LinkedIn">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M6.94 5.00002C6.93974 5.53046 6.72877 6.03906 6.35351 6.41394C5.97825 6.78883 5.46944 6.99929 4.939 6.99902C4.40857 6.99876 3.89997 6.78779 3.52508 6.41253C3.1502 6.03727 2.93974 5.52846 2.94 4.99802C2.94027 4.46759 3.15124 3.95899 3.5265 3.5841C3.90176 3.20922 4.41057 2.99876 4.941 2.99902C5.47144 2.99929 5.98004 3.21026 6.35492 3.58552C6.72981 3.96078 6.94027 4.46959 6.94 5.00002ZM7 8.48002H3V21H7V8.48002ZM13.32 8.48002H9.34V21H13.28V14.43C13.28 10.77 18.05 10.43 18.05 14.43V21H22V13.07C22 6.90002 14.94 7.13002 13.28 10.16L13.32 8.48002Z"
                                        fill="#666666"></path>
                                </svg>
                            </a>
                        @endif
                        @if (filled($general->twitter))
                            <a href="{{ $general->twitter }}" target="_blank" rel="noopener" title="X (Twitter)">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 16 16">
                                    <path d="M0 0h16v16H0z" fill="none" />
                                    <path fill="currentColor"
                                        d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334q.002-.211-.006-.422A6.7 6.7 0 0 0 16 3.542a6.7 6.7 0 0 1-1.889.518a3.3 3.3 0 0 0 1.447-1.817a6.5 6.5 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.32 9.32 0 0 1-6.767-3.429a3.29 3.29 0 0 0 1.018 4.382A3.3 3.3 0 0 1 .64 6.575v.045a3.29 3.29 0 0 0 2.632 3.218a3.2 3.2 0 0 1-.865.115a3 3 0 0 1-.614-.057a3.28 3.28 0 0 0 3.067 2.277A6.6 6.6 0 0 1 .78 13.58a6 6 0 0 1-.78-.045A9.34 9.34 0 0 0 5.026 15" />
                                </svg>
                            </a>
                        @endif
                        @if (filled($general->youtube))
                            <a href="{{ $general->youtube }}" target="_blank" rel="noopener" title="YouTube">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                                    <path fill="#666666"
                                        d="M21.58 7.19a2.5 2.5 0 0 0-1.76-1.77C18.25 5 12 5 12 5s-6.25 0-7.82.42A2.5 2.5 0 0 0 2.42 7.19C2 8.76 2 12 2 12s0 3.24.42 4.81a2.5 2.5 0 0 0 1.76 1.77C5.75 19 12 19 12 19s6.25 0 7.82-.42a2.5 2.5 0 0 0 1.76-1.77C22 15.24 22 12 22 12s0-3.24-.42-4.81ZM10 15V9l5.2 3Z" />
                                </svg>
                            </a>
                        @endif
                        @if (filled($general->pinterest))
                            <a href="{{ $general->pinterest }}" target="_blank" rel="noopener" title="Pinterest">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                                    <path fill="#666666"
                                        d="M12 2a10 10 0 0 0-3.64 19.3c-.09-.79-.17-2 .03-2.86l1.16-4.9s-.3-.6-.3-1.48c0-1.39.8-2.42 1.8-2.42.85 0 1.26.64 1.26 1.4 0 .85-.54 2.13-.82 3.31-.23.99.5 1.8 1.47 1.8 1.77 0 3.12-1.86 3.12-4.55 0-2.38-1.71-4.04-4.15-4.04-2.83 0-4.49 2.12-4.49 4.32 0 .85.33 1.77.74 2.27a.3.3 0 0 1 .07.28l-.27 1.13c-.04.18-.14.22-.33.13-1.25-.58-2.03-2.4-2.03-3.87 0-3.15 2.29-6.04 6.6-6.04 3.46 0 6.15 2.47 6.15 5.76 0 3.44-2.17 6.2-5.18 6.2-1.01 0-1.97-.53-2.3-1.15l-.62 2.41c-.23.87-.84 1.96-1.25 2.62A10 10 0 1 0 12 2Z" />
                                </svg>
                            </a>
                        @endif
                    </div>
                @endif

                <a href="javascript:void(0)" data-model=".enquire-pop" class="btn btn-primary header-cta">
                    Get a Callback
                </a>
            </div>
        </div>
    </div>

    <div class="overlay"></div>

    <div class="model enquire-pop">
        <button type="button" class="close" aria-label="Close enquiry form">
            <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0.5 0.5L25.5 25.5M0.5 25.5L25.5 0.5" stroke="currentColor" stroke-linecap="round"
                    stroke-linejoin="round" />
            </svg>
        </button>

        <div class="model-body">
            <div class="title">
                <h4>Request a Custom Quote</h4>
                <p>Share your requirements and get a tailored quote.</p>
            </div>

            <form class="form form-grid" method="post">
                <div class="form-group">
                    <input type="text" class="form-control" name="FullName" placeholder="" autocomplete="name"
                        required />
                    <label>Full Name*</label>
                </div>

                <div class="form-group">
                    <input type="tel" class="form-control" name="MobileNumber" placeholder="" maxlength="14"
                        autocomplete="tel" inputmode="numeric" required />
                    <label>Mobile Number*</label>
                </div>

                <div class="form-group">
                    <input type="email" class="form-control" name="EmailID" placeholder="" autocomplete="email" />
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
                    <textarea class="form-control" name="Message" placeholder="" rows="3"></textarea>
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
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0.75 0.75L23.25 23.25M0.75 23.25L23.25 0.75" stroke="black" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>
            </button>

            <iframe id="iframe1" allow="autoplay; fullscreen" src=""></iframe>
        </div>
    </div>

    <ul class="fixed-media">
        @if ($general->whatsapp_url)
            <li class="wts">
                <a href="{{ $general->whatsapp_url }}" target="_blank" rel="noopener" aria-label="WhatsApp">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path fill="currentColor"
                            d="M19.05 4.91A9.82 9.82 0 0 0 12.04 2c-5.46 0-9.91 4.45-9.91 9.91c0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21c5.46 0 9.91-4.45 9.91-9.91c0-2.65-1.03-5.14-2.9-7.01m-7.01 15.24c-1.48 0-2.93-.4-4.2-1.15l-.3-.18l-3.12.82l.83-3.04l-.2-.31a8.26 8.26 0 0 1-1.26-4.38c0-4.54 3.7-8.24 8.24-8.24c2.2 0 4.27.86 5.82 2.42a8.18 8.18 0 0 1 2.41 5.83c.02 4.54-3.68 8.23-8.22 8.23m4.52-6.16c-.25-.12-1.47-.72-1.69-.81c-.23-.08-.39-.12-.56.12c-.17.25-.64.81-.78.97c-.14.17-.29.19-.54.06c-.25-.12-1.05-.39-1.99-1.23c-.74-.66-1.23-1.47-1.38-1.72c-.14-.25-.02-.38.11-.51c.11-.11.25-.29.37-.43s.17-.25.25-.41c.08-.17.04-.31-.02-.43s-.56-1.34-.76-1.84c-.2-.48-.41-.42-.56-.43h-.48c-.17 0-.43.06-.66.31c-.22.25-.86.85-.86 2.07s.89 2.4 1.01 2.56c.12.17 1.75 2.67 4.23 3.74c.59.26 1.05.41 1.41.52c.59.19 1.13.16 1.56.1c.48-.07 1.47-.6 1.67-1.18c.21-.58.21-1.07.14-1.18s-.22-.16-.47-.28">
                        </path>
                    </svg>
                </a>
            </li>
        @endif

        <li>
            <a class="req-btn" href="javascript:void(0)" data-model=".enquire-pop">
                Request a Call
            </a>
        </li>
    </ul>
    <!-- ================= jQuery ================= -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-visible/1.2.0/jquery.visible.min.js"
        integrity="sha512-771ZvVCYr4EfUGXr63AcX7thw7EKa6QE1fhxi8JG7mPacB/arC0cyvYPXKUkCrX2sYKnnFCZby3ZZik42jOuSQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.14.0/jquery-ui.min.js"
        integrity="sha512-MlEyuwT6VkRXExjj8CdBKNgd+e2H+aYZOCUaCrt9KRk6MlZDOs91V1yK22rwm8aCIsb5Ec1euL8f0g58RKT/Pg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>

    <!-- ================= Swiper ================= -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>

    <!-- ================= Project JS ================= -->
    <script type="text/javascript" src="{{ asset('assets/js/animate.js')}}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/fancybox.js')}}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/function.js')}}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/main.js')}}"></script>

    @stack('scripts')

</body>

</html>