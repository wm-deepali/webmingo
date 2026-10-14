@extends('layouts.app')

@push('styles')
    <link rel="stylesheet" href="assets/sass/blog-detail/blog-detail.css" />
@endpush

@section('content')
    <main>
      <!-- =========================
       BLOG DETAIL BANNER
  ========================== -->
      <section class="banner">
        <div class="bg">
          <img src="assets/images/why-us/banner.jpg" alt="Web Mingo Blog" />

          <div class="container">
            <div class="banner-wrapper">
              <div class="content">
                <h1>Ideas, Insights &amp; Digital Thinking.</h1>

                <p>
                  Explore practical ideas, industry insights, creative thinking,
                  and digital strategies from the people behind Web Mingo.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- =========================
       BLOG DETAIL
  ========================== -->
      <section class="blog-dtl-secA">
        <div class="container">
          <div class="para-parent">
            <p>
              Setting up a commercial gym requires more than simply choosing
              fitness equipment. A successful gym should offer the right balance
              of space planning, equipment selection, functionality and user
              experience.
            </p>

            <p>
              Whether you are starting a new fitness centre or upgrading an
              existing facility, proper planning can help create a space that
              performs better for both members and operators.
            </p>

            <h3>1. Start with Smart Space Planning</h3>

            <p>
              The first step in building a commercial gym is understanding how
              your available space will be used. Different training zones should
              be planned carefully to create a smooth and comfortable workout
              experience.
            </p>

            <ul>
              <li>Reception and entry area</li>
              <li>Cardio training zone</li>
              <li>Strength training area</li>
              <li>Free weight section</li>
              <li>Functional training space</li>
              <li>Changing and support areas</li>
            </ul>

            <h3>2. Choose the Right Equipment</h3>

            <p>
              Equipment selection should depend on your target audience,
              available space and training requirements. A well-balanced gym
              provides options for cardio, strength, functional training and
              general fitness.
            </p>

            <p>
              Investing in durable and reliable commercial equipment helps
              ensure consistent performance and a better experience for gym
              members.
            </p>

            <h3>3. Create Clear Training Zones</h3>

            <p>
              Organising equipment into dedicated training zones improves
              movement throughout the gym and makes the space easier to use.
            </p>

            <ul>
              <li>Cardio Zone</li>
              <li>Strength Zone</li>
              <li>Free Weight Zone</li>
              <li>Functional Training Zone</li>
              <li>Stretching and Recovery Zone</li>
            </ul>

            <h3>4. Focus on Safety and Comfort</h3>

            <p>
              Proper spacing between machines, safe flooring and good
              ventilation are essential parts of a professional gym setup. The
              environment should allow members to train comfortably while
              maintaining a safe distance between equipment.
            </p>

            <h3>5. Plan for Long-Term Growth</h3>

            <p>
              A gym should be designed with the future in mind. Flexible layouts
              and scalable equipment solutions can make it easier to expand or
              upgrade the space as your business grows.
            </p>

            <h3>Build Your Gym with Fitway</h3>

            <p>
              At Fitway, we provide premium fitness equipment and complete gym
              setup solutions. From initial planning and equipment selection to
              installation and final setup, we help create fitness spaces built
              around your requirements.
            </p>
          </div>
        </div>
      </section>

      <!-- =========================
       MORE BLOGS
  ========================== -->
      <section class="more-blogs">
        <div class="container">
          <div class="heading">
            <span class="eyebrow">
              <span class="eyebrow-line"></span>
              MORE FROM THE BLOG
            </span>

            <h3>
              More Ideas Worth
              <span>Exploring.</span>
            </h3>

            <p>
              Discover more insights, ideas and practical thinking from Web
              Mingo.
            </p>
          </div>

          <div class="swiper-wrap">
            <div class="swiper moreBlogsSwiper">
              <div class="swiper-wrapper">
                <!-- BLOG 01 -->
                <div class="swiper-slide">
                  <article class="blog-card">
                    <a href="javascript:void(0)" class="blog-card__image">
                      <img
                        src="https://images.unsplash.com/photo-1559028012-481c04fa702d?auto=format&fit=crop&w=900&q=85"
                        alt="Designer working on a digital interface"
                      />
                    </a>

                    <div class="blog-card__info">
                      <div class="blog-card__meta">
                        <span>DESIGN</span>
                        <span>08 SEP 2026</span>
                      </div>

                      <h4>
                        How Better Design Creates Better Digital Experiences
                      </h4>

                      <p>
                        A closer look at how thoughtful design can make digital
                        experiences clearer, easier, and more engaging.
                      </p>

                      <a
                        href="javascript:void(0)"
                        class="btn btn-outline-black"
                      >
                        Read Article
                        <i>↗</i>
                      </a>
                    </div>
                  </article>
                </div>

                <!-- BLOG 02 -->
                <div class="swiper-slide">
                  <article class="blog-card">
                    <a href="javascript:void(0)" class="blog-card__image">
                      <img
                        src="https://images.unsplash.com/photo-1555066931-4365d14bab8c?auto=format&fit=crop&w=900&q=85"
                        alt="Developer working with code on a computer"
                      />
                    </a>

                    <div class="blog-card__info">
                      <div class="blog-card__meta">
                        <span>DEVELOPMENT</span>
                        <span>04 SEP 2026</span>
                      </div>

                      <h4>
                        What Makes a Website Fast, Flexible, and Future Ready?
                      </h4>

                      <p>
                        From performance to scalability, discover the
                        foundations of a website built to grow with your
                        business.
                      </p>

                      <a
                        href="javascript:void(0)"
                        class="btn btn-outline-black"
                      >
                        Read Article
                        <i>↗</i>
                      </a>
                    </div>
                  </article>
                </div>

                <!-- BLOG 03 -->
                <div class="swiper-slide">
                  <article class="blog-card">
                    <a href="javascript:void(0)" class="blog-card__image">
                      <img
                        src="https://images.unsplash.com/photo-1552664730-d307ca884978?auto=format&fit=crop&w=900&q=85"
                        alt="Creative team discussing a digital strategy"
                      />
                    </a>

                    <div class="blog-card__info">
                      <div class="blog-card__meta">
                        <span>STRATEGY</span>
                        <span>30 AUG 2026</span>
                      </div>

                      <h4>Why Digital Strategy Should Come Before Design</h4>

                      <p>
                        Great digital work starts by understanding the problem,
                        the audience, and the opportunity before opening the
                        design file.
                      </p>

                      <a
                        href="javascript:void(0)"
                        class="btn btn-outline-black"
                      >
                        Read Article
                        <i>↗</i>
                      </a>
                    </div>
                  </article>
                </div>

                <!-- BLOG 04 -->
                <div class="swiper-slide">
                  <article class="blog-card">
                    <a href="javascript:void(0)" class="blog-card__image">
                      <img
                        src="https://images.unsplash.com/photo-1558655146-9f40138edfeb?auto=format&fit=crop&w=900&q=85"
                        alt="Brand identity design materials"
                      />
                    </a>

                    <div class="blog-card__info">
                      <div class="blog-card__meta">
                        <span>BRANDING</span>
                        <span>26 AUG 2026</span>
                      </div>

                      <h4>Building a Brand That Works Beyond the Logo</h4>

                      <p>
                        A strong brand is more than a visual identity. It is the
                        experience people remember at every digital touchpoint.
                      </p>

                      <a
                        href="javascript:void(0)"
                        class="btn btn-outline-black"
                      >
                        Read Article
                        <i>↗</i>
                      </a>
                    </div>
                  </article>
                </div>

                <!-- BLOG 05 -->
                <div class="swiper-slide">
                  <article class="blog-card">
                    <a href="javascript:void(0)" class="blog-card__image">
                      <img
                        src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?auto=format&fit=crop&w=900&q=85"
                        alt="Analytics dashboard showing digital growth data"
                      />
                    </a>

                    <div class="blog-card__info">
                      <div class="blog-card__meta">
                        <span>MARKETING</span>
                        <span>22 AUG 2026</span>
                      </div>

                      <h4>Turning Digital Traffic Into Meaningful Growth</h4>

                      <p>
                        Traffic is only the beginning. Learn how better digital
                        experiences can help turn attention into real
                        opportunities.
                      </p>

                      <a
                        href="javascript:void(0)"
                        class="btn btn-outline-black"
                      >
                        Read Article
                        <i>↗</i>
                      </a>
                    </div>
                  </article>
                </div>

                <!-- BLOG 06 -->
                <div class="swiper-slide">
                  <article class="blog-card">
                    <a href="javascript:void(0)" class="blog-card__image">
                      <img
                        src="https://images.unsplash.com/photo-1484417894907-623942c8ee29?auto=format&fit=crop&w=900&q=85"
                        alt="Modern workspace with technology and laptop"
                      />
                    </a>

                    <div class="blog-card__info">
                      <div class="blog-card__meta">
                        <span>TECHNOLOGY</span>
                        <span>18 AUG 2026</span>
                      </div>

                      <h4>
                        How Technology Is Changing the Way Businesses Build
                        Online
                      </h4>

                      <p>
                        New technologies are creating new possibilities for
                        businesses, teams, and the digital experiences they
                        create.
                      </p>

                      <a
                        href="javascript:void(0)"
                        class="btn btn-outline-black"
                      >
                        Read Article
                        <i>↗</i>
                      </a>
                    </div>
                  </article>
                </div>
              </div>
            </div>

            <!-- SLIDER NAVIGATION -->
            <div class="swiper-group">
              <button
                type="button"
                class="moreBlogsSwiper-prev btn-prev"
                aria-label="Previous blog"
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
                class="moreBlogsSwiper-next btn-next"
                aria-label="Next blog"
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
      </section>
    </main>
@endsection