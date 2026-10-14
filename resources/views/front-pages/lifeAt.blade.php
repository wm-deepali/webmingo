@extends('layouts.app')

@push('styles')
  <link rel="stylesheet" href="assets/sass/why/why.css" />
@endpush

@section('content')


  <main>
    <section class="banner">
      <div class="bg">
        <video autoplay muted loop playsinline class="bg-video" src="assets/video/about.mp4"
          poster="assets/video/poster/about.png">
          <source src="assets/video/about.mp4" type="video/mp4" />
        </video>

        <div class="container">
          <div class="banner-wrapper">
            <div class="content">
              <span class="eyebrow">WHY LIFE AT WEB MINGO</span>

              <h1>Why People Choose Life at Web Mingo</h1>

              <p>
                We believe great work starts with great people. At Web Mingo, you’ll
                find a culture that encourages ideas, supports growth, celebrates
                collaboration, and gives you the space to do meaningful work.
              </p>

              <a href="javascript:void(0)" class="btn btn-white">
                Explore Life at Web Mingo
                <i>↗</i>
              </a>
            </div>
          </div>
        </div>
      </div>
      </div>
    </section>

    <section class="secA">
      <div class="container">
        <div class="heading">
          <h3>
            More Than Work.<br />
            <span>It's How We Grow Together.</span>
          </h3>
          <p>
            Behind every project are people, ideas, conversations, challenges,
            celebrations, and everyday moments that make Web Mingo what it is.
          </p>
        </div>

        <div class="layout-grid">
          <div class="col-large">
            <div class="image-card large">
              <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?w=800&q=80"
                alt="Team collaboration" />
              <div class="image-caption">Shared moments, shared vision</div>
            </div>
          </div>

          <div class="col-stack">
            <div class="text-block">
              <p>
                At Web Mingo, work is only one part of the experience. We
                believe great digital work comes from people who feel
                comfortable sharing ideas, learning from each other, taking
                ownership, and having a little fun along the way.
              </p>
            </div>

            <div class="small-images">
              <div class="image-card small">
                <img src="https://images.unsplash.com/photo-1543269865-cbf427effbad?w=400&q=80" alt="Team celebrating" />
                <div class="image-caption">Celebrating wins</div>
              </div>
              <div class="image-card small">
                <img src="https://images.unsplash.com/photo-1543269865-cbf427effbad?w=400&q=80"
                  alt="Team brainstorming" />
                <div class="image-caption">Brainstorming together</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="secB">
      <div class="container">
        <div class="heading">
          <h3>
            A Culture Built Around <br />
            <span>Curiosity, Creativity,</span>
            <span>and People</span>
          </h3>
          <p>
            We create an environment where people can think freely, contribute
            openly, learn continuously, and enjoy the work they do together.
          </p>
        </div>

        <div class="culture-grid">
          <div class="culture-block">
            <div class="block-header">
              <span class="block-number">01</span>
              <div class="block-icon">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                  <circle cx="12" cy="12" r="10" />
                  <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3" />
                  <line x1="12" y1="17" x2="12.01" y2="17" />
                </svg>
              </div>
            </div>
            <h4>Curiosity</h4>
            <p>
              We ask questions, explore possibilities, and stay open to better
              ways of doing things.
            </p>

          </div>

          <!-- block 2: Ownership -->
          <div class="culture-block">
            <div class="block-header">
              <span class="block-number">02</span>
              <div class="block-icon">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                  <path d="M12 2L2 7l10 5 10-5-10-5z" />
                  <path d="M2 17l10 5 10-5" />
                  <path d="M2 12l10 5 10-5" />
                </svg>
              </div>
            </div>
            <h4>Ownership</h4>
            <p>
              We trust people to take responsibility for their work and have a
              real voice in what they create.
            </p>

          </div>

          <!-- block 3: Collaboration -->
          <div class="culture-block">
            <div class="block-header">
              <span class="block-number">03</span>
              <div class="block-icon">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                  <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" />
                  <circle cx="9" cy="7" r="4" />
                  <path d="M23 21v-2a4 4 0 0 0-3-3.87" />
                  <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                </svg>
              </div>
            </div>
            <h4>Collaboration</h4>
            <p>
              The best ideas become stronger when different perspectives come
              together.
            </p>

          </div>

          <!-- block 4: Good Energy -->
          <div class="culture-block">
            <div class="block-header">
              <span class="block-number">04</span>
              <div class="block-icon">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                  <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" />
                  <path d="M9 12l2 2 4-4" />
                </svg>
              </div>
            </div>
            <h4>Good Energy</h4>
            <p>
              We make space for conversations, laughter, celebrations, and the
              moments that happen between deadlines.
            </p>

          </div>
        </div>
      </div>
    </section>


    <!-- 05. HOW WE WORK TOGETHER -->
    <section class="secC collaboration-sec">
      <div class="container">

        <div class="heading">
          <span class="eyebrow">
            <span class="eyebrow-line"></span>
            HOW WE WORK TOGETHER
          </span>

          <h3>
            Great Work Happens When
            <span>People Work Together</span>
          </h3>

          <p>
            Ideas get better when they're shared, challenged, discussed,
            tested, and built together.
          </p>
        </div>

        <div class="collaboration-journey">

          <div class="journey-line"></div>

          <div class="journey-item">
            <div class="journey-number">01</div>

            <div class="journey-content">
              <span class="journey-icon">✦</span>
              <h4>Share</h4>
              <p>
                Everyone gets space to bring ideas to the table.
              </p>
            </div>
          </div>

          <div class="journey-item">
            <div class="journey-number">02</div>

            <div class="journey-content">
              <span class="journey-icon">↗</span>
              <h4>Challenge</h4>
              <p>
                We question ideas to make them clearer and stronger.
              </p>
            </div>
          </div>

          <div class="journey-item">
            <div class="journey-number">03</div>

            <div class="journey-content">
              <span class="journey-icon">◈</span>
              <h4>Create</h4>
              <p>
                Different skills come together to turn ideas into real work.
              </p>
            </div>
          </div>

          <div class="journey-item">
            <div class="journey-number">04</div>

            <div class="journey-content">
              <span class="journey-icon">★</span>
              <h4>Celebrate</h4>
              <p>
                When something goes right, we take a moment to recognize it.
              </p>
            </div>
          </div>

        </div>

      </div>
    </section>


    <section class="secD day-sec">
      <div class="container">

        <div class="day-intro">

          <div class="heading">
            <span class="eyebrow">
              <span class="eyebrow-line"></span>
              A DAY AT WEB MINGO
            </span>

            <h3>
              A Day at Web Mingo
              <span>Never Looks Quite the Same</span>
            </h3>
          </div>

          <p class="day-description">
            Some days are about deep work, some are filled with conversations,
            and some simply become stories we'll remember.
          </p>

        </div>


        <div class="day-timeline">

          <div class="day-item">
            <div class="day-time">
              <span>09:30</span>
              <small>AM</small>
            </div>

            <div class="day-dot"></div>

            <div class="day-card">
              <span class="day-label">STARTING THE DAY</span>
              <h4>Good Morning, Let's Get Going.</h4>
              <p>
                Coffee, conversations, checking priorities and getting
                into the rhythm of the day.
              </p>

              <span class="day-card-number">01</span>
            </div>
          </div>


          <div class="day-item">
            <div class="day-time">
              <span>10:30</span>
              <small>AM</small>
            </div>

            <div class="day-dot"></div>

            <div class="day-card">
              <span class="day-label">TEAM SYNC</span>
              <h4>What's Happening Today?</h4>
              <p>
                Sharing updates, ideas, blockers and everything
                that's ahead.
              </p>

              <span class="day-card-number">02</span>
            </div>
          </div>


          <div class="day-item">
            <div class="day-time">
              <span>12:00</span>
              <small>PM</small>
            </div>

            <div class="day-dot"></div>

            <div class="day-card">
              <span class="day-label">DEEP WORK</span>
              <h4>Time to Make Things Happen.</h4>
              <p>
                Designing, developing, planning, solving and turning
                ideas into actual work.
              </p>

              <span class="day-card-number">03</span>
            </div>
          </div>


          <div class="day-item">
            <div class="day-time">
              <span>14:00</span>
              <small>PM</small>
            </div>

            <div class="day-dot"></div>

            <div class="day-card">
              <span class="day-label">LUNCH & CONVERSATIONS</span>
              <h4>Step Away From The Screen.</h4>
              <p>
                A little food, a few conversations and a much-needed
                break from work.
              </p>

              <span class="day-card-number">04</span>
            </div>
          </div>


          <div class="day-item">
            <div class="day-time">
              <span>16:00</span>
              <small>PM</small>
            </div>

            <div class="day-dot"></div>

            <div class="day-card">
              <span class="day-label">CREATIVE REVIEWS</span>
              <h4>Let's Make It Better.</h4>
              <p>
                Sharing work, exchanging feedback and finding ways
                to make good work even better.
              </p>

              <span class="day-card-number">05</span>
            </div>
          </div>


          <div class="day-item">
            <div class="day-time">
              <span>18:00</span>
              <small>PM</small>
            </div>

            <div class="day-dot"></div>

            <div class="day-card">
              <span class="day-label">WRAPPING UP</span>
              <h4>That's A Wrap.</h4>
              <p>
                Closing the day, ticking off priorities and getting
                ready for whatever tomorrow brings.
              </p>

              <span class="day-card-number">06</span>
            </div>
          </div>

        </div>

      </div>
    </section>


    <!-- ========================================
         08. BEHIND THE SCENES
    ======================================== -->

    <section class="secF behind-sec">
      <div class="container">

        <div class="heading">

          <span class="eyebrow">
            <span class="eyebrow-line"></span>
            BEHIND THE SCENES
          </span>

          <h3>
            The Moments You Don't
            <span>See on the Website</span>
          </h3>

          <p>
            Behind every polished project are whiteboards,
            coffee conversations, design debates, late ideas,
            quick laughs, and plenty of teamwork.
          </p>

        </div>


        <div class="behind-slider swiper">

          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="behind-card">

                <div class="behind-image">
                  <img src="https://images.unsplash.com/photo-1521737711867-e3b97375f902?auto=format&fit=crop&w=1200&q=85"
                    alt="Team discussion">
                </div>

                <div class="behind-caption">
                  Figuring it out together.
                </div>

              </div>
            </div>


            <div class="swiper-slide">
              <div class="behind-card">

                <div class="behind-image">
                  <img src="https://images.unsplash.com/photo-1556761175-b413da4baf72?auto=format&fit=crop&w=1200&q=85"
                    alt="Team working together">
                </div>

                <div class="behind-caption">
                  Between deadlines.
                </div>

              </div>
            </div>


            <div class="swiper-slide">
              <div class="behind-card">

                <div class="behind-image">
                  <img src="https://images.unsplash.com/photo-1516321318423-f06f85e504b3?auto=format&fit=crop&w=1200&q=85"
                    alt="Designer working">
                </div>

                <div class="behind-caption">
                  One more design review.
                </div>

              </div>
            </div>


            <div class="swiper-slide">
              <div class="behind-card">

                <div class="behind-image">
                  <img src="https://images.unsplash.com/photo-1497366754035-f200968a6e72?auto=format&fit=crop&w=1200&q=85"
                    alt="Creative workstation">
                </div>

                <div class="behind-caption">
                  Ideas over coffee.
                </div>

              </div>
            </div>


            <div class="swiper-slide">
              <div class="behind-card">

                <div class="behind-image">
                  <img src="https://images.unsplash.com/photo-1517048676732-d65bc937f952?auto=format&fit=crop&w=1200&q=85"
                    alt="Team meeting">
                </div>

                <div class="behind-caption">
                  Just another Friday.
                </div>

              </div>
            </div>


            <div class="swiper-slide">
              <div class="behind-card">

                <div class="behind-image">
                  <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&w=1200&q=85"
                    alt="Team collaboration">
                </div>

                <div class="behind-caption">
                  Making it better together.
                </div>

              </div>
            </div>


            <div class="swiper-slide">
              <div class="behind-card">

                <div class="behind-image">
                  <img src="https://images.unsplash.com/photo-1542744173-8e7e53415bb0?auto=format&fit=crop&w=1200&q=85"
                    alt="Team presentation">
                </div>

                <div class="behind-caption">
                  Someone has an idea.
                </div>

              </div>
            </div>


            <div class="swiper-slide">
              <div class="behind-card">

                <div class="behind-image">
                  <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?auto=format&fit=crop&w=1200&q=85"
                    alt="Team discussion">
                </div>

                <div class="behind-caption">
                  Work. Talk. Repeat.
                </div>

              </div>
            </div>

          </div>


          <div class="behind-controls">

            <div class="behind-progress">
              <div class="swiper-pagination"></div>
            </div>

            <div class="behind-arrows">

              <button class="behind-prev" type="button">
                <span>←</span>
              </button>

              <button class="behind-next" type="button">
                <span>→</span>
              </button>

            </div>

          </div>

        </div>

      </div>
    </section>

    <section class="secE events-sec">
      <div class="container">

        <div class="events-head">

          <div class="heading">

            <span class="eyebrow">
              <span class="eyebrow-line"></span>
              EVENTS & CELEBRATIONS
            </span>

            <h3>
              We Work Hard.
              We Celebrate <span> the Moments That Matter.</span>
            </h3>
            <p>
              From festivals and birthdays to team outings,
              milestones, games, and spontaneous celebrations,
              there's always something worth remembering.
            </p>
          </div>



        </div>


        <!-- CATEGORY NAV -->

        <ul class="tab-nav">

          <li class="active" data-tab="all">
            All
          </li>

          <li data-tab="festivals">
            Festivals
          </li>

          <li data-tab="birthdays">
            Birthdays
          </li>

          <li data-tab="outings">
            Team Outings
          </li>

          <li data-tab="celebrations">
            Office Celebrations
          </li>

          <li data-tab="activities">
            Team Activities
          </li>

          <li data-tab="moments">
            Special Moments
          </li>

        </ul>


        <!-- ========================================
                 TAB CONTENT
            ======================================== -->

        <div class="tab-nav-content">


          <!-- ALL -->

          <div class="tabs active" data-tab="all">

            <div class="events-gallery">

              <div class="event-card event-large">
                <img src="https://images.unsplash.com/photo-1529156069898-49953e39b3ac?auto=format&fit=crop&w=1400&q=85"
                  alt="Team celebration">

                <div class="event-overlay">
                  <span>FESTIVALS</span>
                  <h4>Celebrating Together</h4>
                </div>
              </div>


              <div class="event-card event-small">
                <img src="https://images.unsplash.com/photo-1469571486292-0ba58a3f068b?auto=format&fit=crop&w=900&q=85"
                  alt="Team gathering">

                <div class="event-overlay">
                  <span>SPECIAL MOMENTS</span>
                  <h4>Good Times Together</h4>
                </div>
              </div>



              <div class="event-card event-medium">
                <img src="https://images.unsplash.com/photo-1511632765486-a01980e01a18?auto=format&fit=crop&w=1000&q=85"
                  alt="Team outing">

                <div class="event-overlay">
                  <span>TEAM OUTINGS</span>
                  <h4>Outside The Office</h4>
                </div>
              </div>


              <div class="event-card event-tall">
                <img src="https://images.unsplash.com/photo-1517457373958-b7bdd4587205?auto=format&fit=crop&w=1000&q=85"
                  alt="Office celebration">

                <div class="event-overlay">
                  <span>OFFICE CELEBRATIONS</span>
                  <h4>Milestones Worth Sharing</h4>
                </div>
              </div>


              <div class="event-card event-medium">
                <img src="https://images.unsplash.com/photo-1530103862676-de8c9debad1d?auto=format&fit=crop&w=1000&q=85"
                  alt="Office party">

                <div class="event-overlay">
                  <span>TEAM ACTIVITIES</span>
                  <h4>Work Meets Fun</h4>
                </div>
              </div>


              <div class="event-card event-wide">
                <img src="https://images.unsplash.com/photo-1492684223066-81342ee5ff30?auto=format&fit=crop&w=1400&q=85"
                  alt="Team event">

                <div class="event-overlay">
                  <span>SPECIAL MOMENTS</span>
                  <h4>The Moments We Remember</h4>
                </div>
              </div>

            </div>

          </div>


          <!-- FESTIVALS -->

          <div class="tabs" data-tab="festivals">

            <div class="events-gallery">

              <div class="event-card event-large">
                <img src="https://images.unsplash.com/photo-1604608672516-f1b9d6e5e7d5?auto=format&fit=crop&w=1400&q=85"
                  alt="Festival celebration">

                <div class="event-overlay">
                  <span>FESTIVALS</span>
                  <h4>Celebrating Every Colour</h4>
                </div>
              </div>

              <div class="event-card event-medium">
                <img src="https://images.unsplash.com/photo-1606293926075-69a00dbfde81?auto=format&fit=crop&w=1000&q=85"
                  alt="Festival celebration">

                <div class="event-overlay">
                  <span>FESTIVALS</span>
                  <h4>Festive Togetherness</h4>
                </div>
              </div>

              <div class="event-card event-medium">
                <img src="https://images.unsplash.com/photo-1607513746994-51f730a44832?auto=format&fit=crop&w=1000&q=85"
                  alt="Festival celebration">

                <div class="event-overlay">
                  <span>FESTIVALS</span>
                  <h4>Moments Of Joy</h4>
                </div>
              </div>

            </div>

          </div>


          <!-- BIRTHDAYS -->

          <div class="tabs" data-tab="birthdays">

            <div class="events-gallery">

              <div class="event-card event-large">
                <img src="https://images.unsplash.com/photo-1464349095431-e9a21285b5f3?auto=format&fit=crop&w=1400&q=85"
                  alt="Birthday celebration">

                <div class="event-overlay">
                  <span>BIRTHDAYS</span>
                  <h4>Little Surprises</h4>
                </div>
              </div>

              <div class="event-card event-small">
                <img src="https://images.unsplash.com/photo-1530103862676-de8c9debad1d?auto=format&fit=crop&w=900&q=85"
                  alt="Birthday celebration">

                <div class="event-overlay">
                  <span>BIRTHDAYS</span>
                  <h4>One More Candle</h4>
                </div>
              </div>

              <div class="event-card event-medium">
                <img src="https://images.unsplash.com/photo-1558636508-e0db3814bd1d?auto=format&fit=crop&w=1000&q=85"
                  alt="Birthday party">

                <div class="event-overlay">
                  <span>BIRTHDAYS</span>
                  <h4>Make It Special</h4>
                </div>
              </div>

            </div>

          </div>


          <!-- TEAM OUTINGS -->

          <div class="tabs" data-tab="outings">

            <div class="events-gallery">

              <div class="event-card event-large">
                <img src="https://images.unsplash.com/photo-1529156069898-49953e39b3ac?auto=format&fit=crop&w=1400&q=85"
                  alt="Team outing">

                <div class="event-overlay">
                  <span>TEAM OUTINGS</span>
                  <h4>Outside The Office</h4>
                </div>
              </div>

              <div class="event-card event-medium">
                <img src="https://images.unsplash.com/photo-1511632765486-a01980e01a18?auto=format&fit=crop&w=1000&q=85"
                  alt="Team outing">

                <div class="event-overlay">
                  <span>TEAM OUTINGS</span>
                  <h4>New Places. Same Team.</h4>
                </div>
              </div>

              <div class="event-card event-medium">
                <img src="https://images.unsplash.com/photo-1506869640319-fe1a24fd76dc?auto=format&fit=crop&w=1000&q=85"
                  alt="Team outdoor activity">

                <div class="event-overlay">
                  <span>TEAM OUTINGS</span>
                  <h4>Take It Outside</h4>
                </div>
              </div>

            </div>

          </div>


          <!-- OFFICE CELEBRATIONS -->

          <div class="tabs" data-tab="celebrations">

            <div class="events-gallery">

              <div class="event-card event-large">
                <img src="https://images.unsplash.com/photo-1528605248644-14dd04022da1?auto=format&fit=crop&w=1400&q=85"
                  alt="Office celebration">

                <div class="event-overlay">
                  <span>OFFICE CELEBRATIONS</span>
                  <h4>Milestones Worth Sharing</h4>
                </div>
              </div>

              <div class="event-card event-medium">
                <img src="https://images.unsplash.com/photo-1556761175-b413da4baf72?auto=format&fit=crop&w=1000&q=85"
                  alt="Team achievement">

                <div class="event-overlay">
                  <span>OFFICE CELEBRATIONS</span>
                  <h4>We Did It</h4>
                </div>
              </div>

              <div class="event-card event-medium">
                <img src="https://images.unsplash.com/photo-1521737604893-d14cc237f11d?auto=format&fit=crop&w=1000&q=85"
                  alt="Team celebration">

                <div class="event-overlay">
                  <span>OFFICE CELEBRATIONS</span>
                  <h4>Team Wins</h4>
                </div>
              </div>

            </div>

          </div>


          <!-- TEAM ACTIVITIES -->

          <div class="tabs" data-tab="activities">

            <div class="events-gallery">

              <div class="event-card event-large">
                <img src="https://images.unsplash.com/photo-1517457373958-b7bdd4587205?auto=format&fit=crop&w=1400&q=85"
                  alt="Team activity">

                <div class="event-overlay">
                  <span>TEAM ACTIVITIES</span>
                  <h4>Work Meets Fun</h4>
                </div>
              </div>

              <div class="event-card event-small">
                <img src="https://images.unsplash.com/photo-1516321318423-f06f85e504b3?auto=format&fit=crop&w=900&q=85"
                  alt="Team activity">

                <div class="event-overlay">
                  <span>TEAM ACTIVITIES</span>
                  <h4>Game On</h4>
                </div>
              </div>

              <div class="event-card event-medium">
                <img src="https://images.unsplash.com/photo-1521737711867-e3b97375f902?auto=format&fit=crop&w=1000&q=85"
                  alt="Team workshop">

                <div class="event-overlay">
                  <span>TEAM ACTIVITIES</span>
                  <h4>Learn. Play. Connect.</h4>
                </div>
              </div>

            </div>

          </div>


          <!-- SPECIAL MOMENTS -->

          <div class="tabs" data-tab="moments">

            <div class="events-gallery">

              <div class="event-card event-large">
                <img src="https://images.unsplash.com/photo-1529156069898-49953e39b3ac?auto=format&fit=crop&w=1400&q=85"
                  alt="Team special moment">

                <div class="event-overlay">
                  <span>SPECIAL MOMENTS</span>
                  <h4>The Moments Between The Moments</h4>
                </div>
              </div>

              <div class="event-card event-medium">
                <img src="https://images.unsplash.com/photo-1528605248644-14dd04022da1?auto=format&fit=crop&w=1000&q=85"
                  alt="Team bonding">

                <div class="event-overlay">
                  <span>SPECIAL MOMENTS</span>
                  <h4>The Unplanned Ones</h4>
                </div>
              </div>

              <div class="event-card event-medium">
                <img src="https://images.unsplash.com/photo-1511632765486-a01980e01a18?auto=format&fit=crop&w=1000&q=85"
                  alt="Team memories">

                <div class="event-overlay">
                  <span>SPECIAL MOMENTS</span>
                  <h4>Memories In The Making</h4>
                </div>
              </div>

            </div>

          </div>

        </div>

      </div>
    </section>

    <section class="secG">
      <div class="container">
        <div class="heading">
          <h3>Keep Learning. Keep<span> Becoming Better.</span></h3>
          <p class="subheading">We believe people grow when they're given the opportunity to explore, experiment, take
            responsibility, and learn from each other.</p>
        </div>

        <div class="learning-hero">
          <img src="https://images.unsplash.com/photo-1543269865-cbf427effbad?q=80&w=1400&auto=format&fit=crop"
            alt="Team taking part in a workshop" />
        </div>

        <div class="learning-grid">
          <div class="learning-area">
            <div class="learning-area__thumb">
              <img src="https://images.unsplash.com/photo-1524178232363-1fb2b075b655?q=80&w=300&auto=format&fit=crop"
                alt="Learning session in progress" />
            </div>
            <h4 class="learning-area__label">Learn</h4>
            <p class="learning-area__desc">New tools, technologies, ideas, and ways of thinking.</p>
          </div>

          <div class="learning-area">
            <div class="learning-area__thumb">
              <img src="https://images.unsplash.com/photo-1517245386807-bb43f82c33c4?q=80&w=300&auto=format&fit=crop"
                alt="Whiteboard used to test an idea" />
            </div>
            <h4 class="learning-area__label">Experiment</h4>
            <p class="learning-area__desc">Try something different, test an idea, and learn from the result.</p>
          </div>

          <div class="learning-area">
            <div class="learning-area__thumb">
              <img src="https://images.unsplash.com/photo-1573497019940-1c28c88b4f3e?q=80&w=300&auto=format&fit=crop"
                alt="Team member presenting their work" />
            </div>
            <h4 class="learning-area__label">Take Ownership</h4>
            <p class="learning-area__desc">Take responsibility for bigger challenges as you grow.</p>
          </div>

          <div class="learning-area">
            <div class="learning-area__thumb">
              <img src="https://images.unsplash.com/photo-1553877522-43269d4ea984?q=80&w=300&auto=format&fit=crop"
                alt="Team discussion sharing knowledge" />
            </div>
            <h4 class="learning-area__label">Share</h4>
            <p class="learning-area__desc">Your knowledge becomes more valuable when you share it with others.</p>
          </div>
        </div>
      </div>
    </section>

    <section class="secH">
      <div class="container">
        <div class="heading">
          <h3>Every Milestone Has a <span>Story Behind It</span></h3>
          <p class="subheading">Our journey is shaped by the projects we've delivered, challenges we've overcome, people
            we've met, and moments we've celebrated together.</p>
        </div>

        <div class="milestones">
          <div class="milestone">
            <span class="milestone__number">01</span>
            <span class="milestone__dot"></span>
            <div class="milestone__content">
              <h4 class="milestone__label">The Beginning</h4>
              <p class="milestone__desc">Where Web Mingo started.</p>
            </div>
          </div>

          <div class="milestone">
            <span class="milestone__number">02</span>
            <span class="milestone__dot"></span>
            <div class="milestone__content">
              <h4 class="milestone__label">First Big Projects</h4>
              <p class="milestone__desc">The work that helped shape the team.</p>
            </div>
          </div>

          <div class="milestone">
            <span class="milestone__number">03</span>
            <span class="milestone__dot"></span>
            <div class="milestone__content">
              <h4 class="milestone__label">Growing the Team</h4>
              <p class="milestone__desc">New people, new skills, new perspectives.</p>
            </div>
          </div>

          <div class="milestone">
            <span class="milestone__number">04</span>
            <span class="milestone__dot"></span>
            <div class="milestone__content">
              <h4 class="milestone__label">Bigger Challenges</h4>
              <p class="milestone__desc">Taking on more ambitious digital work.</p>
            </div>
          </div>

          <div class="milestone">
            <span class="milestone__number">05</span>
            <span class="milestone__dot"></span>
            <div class="milestone__content">
              <h4 class="milestone__label">What's Next</h4>
              <p class="milestone__desc">The journey is still being written.</p>
            </div>
          </div>
        </div>
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
            <a href="javascript:void()" class="btn btn-outline-white">Chat on WhatsApp</a>
          </div>
        </div>
      </div>
    </div>

  </main>


@endsection