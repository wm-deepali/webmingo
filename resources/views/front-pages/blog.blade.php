@extends('layouts.app')

@push('styles')
    <link rel="stylesheet" href="assets/sass/blog/blog.css" />
@endpush

@section('content')
    <main>
      <section class="banner">
        <div class="bg">
          <video
            autoplay
            muted
            loop
            playsinline
            class="bg-video"
            src="assets/video/effect8.mp4"
            poster="assets/video/poster/effect8.png"
          >
            <source src="assets/video/effect8.mp4" type="video/mp4" />
          </video>

          <div class="container">
            <div class="banner-wrapper">
              <div class="content">
                <span class="eyebrow">WEB MINGO BLOG</span>

                <h1>Ideas, Insights &amp; Practical Digital Knowledge.</h1>

                <p>
                  Explore useful insights on websites, e-commerce, SEO, digital
                  marketing, mobile applications and business technology.
                </p>

                <div class="banner-actions">
                  <a href="#latest-articles" class="btn btn-outline-white">
                    Explore Latest Articles
                    <i>↗</i>
                  </a>

                  <a href="javascript:void()" class="btn btn-white">
                    Browse by Topic
                    <i>↗</i>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="blog-secA" id="latest-articles">
        <div class="container">
          <div class="heading">
            <span class="eyebrow">
              <span class="eyebrow-line"></span>
              OUR LATEST INSIGHTS
            </span>

            <h3>
              Ideas, Insights &
              <span>Digital Thinking.</span>
            </h3>

            <p>
              Explore ideas, trends, and practical insights from the world of
              design, technology, branding, and digital growth.
            </p>
          </div>

          <div class="blog-grid">
            <!-- Blog Card 01 -->
            <article class="blog-card">
              <a href="blog-detail.html" class="blog-card__image">
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

                <h4>How Better Design Creates Better Digital Experiences</h4>

                <p>
                  A closer look at how thoughtful design can make digital
                  experiences clearer, easier, and more engaging.
                </p>

                <a href="blog-detail.html" class="btn btn-outline-black">
                  Read Article
                  <i>↗</i>
                </a>
              </div>
            </article>

            <!-- Blog Card 02 -->
            <article class="blog-card">
              <a href="blog-detail.html" class="blog-card__image">
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

                <h4>What Makes a Website Fast, Flexible, and Future Ready?</h4>

                <p>
                  From performance to scalability, discover the foundations of a
                  website built to grow with your business.
                </p>

                <a href="blog-detail.html" class="btn btn-outline-black">
                  Read Article
                  <i>↗</i>
                </a>
              </div>
            </article>

            <!-- Blog Card 03 -->
            <article class="blog-card">
              <a href="blog-detail.html" class="blog-card__image">
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
                  Great digital work starts by understanding the problem, the
                  audience, and the opportunity before opening the design file.
                </p>

                <a href="blog-detail.html" class="btn btn-outline-black">
                  Read Article
                  <i>↗</i>
                </a>
              </div>
            </article>

            <!-- Blog Card 04 -->
            <article class="blog-card">
              <a href="blog-detail.html" class="blog-card__image">
                <img
                  src="https://images.unsplash.com/photo-1558655146-9f40138edfeb?auto=format&fit=crop&w=900&q=85"
                  alt="Brand identity design materials on a desk"
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

                <a href="blog-detail.html" class="btn btn-outline-black">
                  Read Article
                  <i>↗</i>
                </a>
              </div>
            </article>

            <!-- Blog Card 05 -->
            <article class="blog-card">
              <a href="blog-detail.html" class="blog-card__image">
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
                  experiences can help turn attention into real opportunities.
                </p>

                <a href="blog-detail.html" class="btn btn-outline-black">
                  Read Article
                  <i>↗</i>
                </a>
              </div>
            </article>

            <!-- Blog Card 06 -->
            <article class="blog-card">
              <a href="blog-detail.html" class="blog-card__image">
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
                  How Technology Is Changing the Way Businesses Build Online
                </h4>

                <p>
                  New technologies are creating new possibilities for
                  businesses, teams, and the digital experiences they create.
                </p>

                <a href="blog-detail.html" class="btn btn-outline-black">
                  Read Article
                  <i>↗</i>
                </a>
              </div>
            </article>
          </div>

          <div class="blog-secA__bottom">
            <a href="javascript:void(0)" class="load-more">
              Load More
              <i>↗</i>
            </a>
          </div>
        </div>
      </section>
    </main>
@endsection