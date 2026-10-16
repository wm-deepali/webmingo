@extends('layouts.app')

@push('styles')
    <link rel="stylesheet" href="assets/sass/career-detail/detail.css" />
@endpush

@section('content')
    <main>
      <!-- =========================
    Banner
    ========================= -->
      <section class="banner">
        <div class="bg">
          <video
            autoplay
            muted
            loop
            playsinline
            class="bg-video"
            src="assets/video/about.mp4"
            poster="assets/video/poster/about.png"
          >
            <source src="assets/video/about.mp4" type="video/mp4" />
          </video>

          <div class="container">
            <div class="banner-wrapper">
              <div class="content">
                <span class="eyebrow"> CAREER OPPORTUNITY </span>

                <h1>Frontend Developer</h1>

                <p>
                  Join our team to build meaningful digital experiences, solve
                  real business challenges, and grow with a creative team that
                  cares about quality.
                </p>

                <a href="#career-apply" class="btn btn-white">
                  Apply for This Job ↘
                </a>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- =========================
    Career Detail
    ========================= -->
      <section class="career-detail">
        <div class="container">
          <div class="career-detail__layout">
            <!-- =========================
                LEFT : JOB DETAILS
                ========================= -->
            <div class="career-detail__content">
              <!-- Job Intro -->
              <div class="career-detail__intro">
                <span class="eyebrow">
                  <span class="eyebrow-line"></span>
                  THE ROLE
                </span>

                <h2>Senior Frontend Developer</h2>

                <p>
                  We’re looking for a passionate frontend developer who can turn
                  ideas and designs into fast, responsive, accessible, and
                  high-quality digital experiences.
                </p>

                <p>
                  You’ll work closely with designers, developers, marketers, and
                  project managers to build websites and digital products that
                  solve real business problems.
                </p>
              </div>

              <!-- Job Meta -->
              <div class="career-meta">
                <div class="career-meta__item">
                  <span>Experience</span>
                  <strong>3–5 Years</strong>
                </div>

                <div class="career-meta__item">
                  <span>Job Type</span>
                  <strong>Full Time</strong>
                </div>

                <div class="career-meta__item">
                  <span>Location</span>
                  <strong>Lucknow, India</strong>
                </div>

                <div class="career-meta__item">
                  <span>Work Mode</span>
                  <strong>On-Site / Hybrid</strong>
                </div>

                <div class="career-meta__item">
                  <span>Salary</span>
                  <strong>₹4 LPA – ₹8 LPA</strong>
                </div>

                <div class="career-meta__item">
                  <span>Department</span>
                  <strong>Development</strong>
                </div>
              </div>

              <!-- =========================
                    Responsibilities
                    ========================= -->
              <div class="career-content-block">
                <div class="career-content-block__heading">
                  <span>01</span>

                  <div>
                    <span class="eyebrow">
                      <span class="eyebrow-line"></span>
                      ROLE DETAILS
                    </span>

                    <h3>What You’ll Do</h3>
                  </div>
                </div>

                <ul class="career-list">
                  <li>
                    Develop responsive websites and digital experiences from
                    approved UI/UX designs.
                  </li>

                  <li>
                    Build clean, reusable, and maintainable frontend components.
                  </li>

                  <li>
                    Work with HTML, CSS/SASS, JavaScript, jQuery, and modern
                    frontend development practices.
                  </li>

                  <li>
                    Ensure websites work smoothly across desktop, tablet, and
                    mobile devices.
                  </li>

                  <li>
                    Collaborate closely with designers, backend developers, and
                    project managers.
                  </li>

                  <li>
                    Identify and resolve frontend bugs, layout issues, and
                    performance problems.
                  </li>

                  <li>
                    Maintain existing websites while implementing new features
                    without affecting functionality.
                  </li>
                </ul>
              </div>

              <!-- =========================
                    Requirements
                    ========================= -->
              <div class="career-content-block">
                <div class="career-content-block__heading">
                  <span>02</span>

                  <div>
                    <span class="eyebrow">
                      <span class="eyebrow-line"></span>
                      REQUIREMENTS
                    </span>

                    <h3>What We’re Looking For</h3>
                  </div>
                </div>

                <ul class="career-list">
                  <li>
                    3–5 years of professional frontend development experience.
                  </li>

                  <li>
                    Strong knowledge of HTML5, CSS3, SASS, JavaScript, and
                    responsive development.
                  </li>

                  <li>
                    Experience working with Figma or other UI/UX design files.
                  </li>

                  <li>
                    Strong understanding of responsive and mobile-first
                    development.
                  </li>

                  <li>
                    Good understanding of website performance and cross-browser
                    compatibility.
                  </li>

                  <li>Familiarity with Git and modern frontend workflows.</li>

                  <li>
                    Strong attention to detail and a problem-solving mindset.
                  </li>
                </ul>
              </div>

              <!-- =========================
                    Nice To Have
                    ========================= -->
              <div class="career-content-block">
                <div class="career-content-block__heading">
                  <span>03</span>

                  <div>
                    <span class="eyebrow">
                      <span class="eyebrow-line"></span>
                      NICE TO HAVE
                    </span>

                    <h3>Skills That Set You Apart</h3>
                  </div>
                </div>

                <ul class="career-list">
                  <li>
                    Experience with WordPress, PHP, Laravel, or other
                    CMS/backend environments.
                  </li>

                  <li>Understanding of SEO-friendly frontend development.</li>

                  <li>
                    Experience optimizing Core Web Vitals and website
                    performance.
                  </li>

                  <li>
                    Familiarity with animation libraries or interactive web
                    experiences.
                  </li>

                  <li>
                    Ability to understand business requirements and translate
                    them into practical solutions.
                  </li>
                </ul>
              </div>

              <!-- =========================
                    Benefits
                    ========================= -->
              <div class="career-content-block career-content-block--benefits">
                <div class="career-content-block__heading">
                  <span>04</span>

                  <div>
                    <span class="eyebrow">
                      <span class="eyebrow-line"></span>
                      WHY JOIN US
                    </span>

                    <h3>What You’ll Get</h3>
                  </div>
                </div>

                <div class="career-benefits">
                  <div class="career-benefit">
                    <h4>Meaningful Work</h4>

                    <p>
                      Work on real digital projects that help businesses grow.
                    </p>
                  </div>

                  <div class="career-benefit">
                    <h4>Continuous Learning</h4>

                    <p>
                      Explore new technologies and continuously improve your
                      skills.
                    </p>
                  </div>

                  <div class="career-benefit">
                    <h4>Collaborative Culture</h4>

                    <p>
                      Work alongside designers, developers, marketers, and
                      strategists.
                    </p>
                  </div>

                  <div class="career-benefit">
                    <h4>Career Growth</h4>

                    <p>
                      Take ownership of your work and grow with increasing
                      responsibility.
                    </p>
                  </div>
                </div>
              </div>

              <!-- =========================
                    Interview Process
                    ========================= -->
              <div class="career-content-block career-content-block--process">
                <div class="career-content-block__heading">
                  <span>05</span>

                  <div>
                    <span class="eyebrow">
                      <span class="eyebrow-line"></span>
                      HIRING PROCESS
                    </span>

                    <h3>How We Hire</h3>
                  </div>
                </div>

                <div class="career-process">
                  <div class="career-process__item">
                    <span>01</span>

                    <div>
                      <h4>Application Review</h4>

                      <p>
                        We review your experience, skills, portfolio, and
                        application.
                      </p>
                    </div>
                  </div>

                  <div class="career-process__item">
                    <span>02</span>

                    <div>
                      <h4>Introductory Conversation</h4>

                      <p>
                        A short conversation to understand your experience,
                        goals, and expectations.
                      </p>
                    </div>
                  </div>

                  <div class="career-process__item">
                    <span>03</span>

                    <div>
                      <h4>Technical Discussion</h4>

                      <p>
                        Discuss your technical experience, approach, and
                        relevant projects.
                      </p>
                    </div>
                  </div>

                  <div class="career-process__item">
                    <span>04</span>

                    <div>
                      <h4>Final Conversation</h4>

                      <p>
                        Meet the team and discuss the role, expectations, and
                        next steps.
                      </p>
                    </div>
                  </div>
                </div>
              </div>

              <!-- =========================
                    Final Job Note
                    ========================= -->
              <div class="career-detail__note">
                <span>✦</span>

                <div>
                  <h4>Think this role is right for you?</h4>

                  <p>
                    We’d love to hear from you. Complete the application form
                    and tell us why you’d be a great addition to the team.
                  </p>
                </div>
              </div>
            </div>

            <!-- =========================
                RIGHT : STICKY APPLICATION
                ========================= -->
            <aside class="career-apply" id="career-apply">
              <div class="career-apply__inner">
                <div class="heading">
                  <span class="eyebrow">
                    <span class="eyebrow-line"></span>
                    APPLY FOR THIS POSITION
                  </span>

                  <h3>
                    Make Your
                    <span>Next Move.</span>
                  </h3>

                  <p>
                    Share your details and experience with us. Our team will
                    review your application and get back to you.
                  </p>
                </div>

                <form
                  class="career-form"
                  action=""
                  method="POST"
                  enctype="multipart/form-data"
                >
                  <!-- Personal Details -->
                  <div class="career-form__section">
                    <span class="career-form__label"> Personal Details </span>

                    <div class="career-form__grid">
                      <div class="form-group">
                        <label for="full-name"> Full Name <sup>*</sup> </label>

                        <input
                          type="text"
                          id="full-name"
                          name="name"
                          placeholder="Enter your full name"
                          required
                        />
                      </div>

                      <div class="form-group">
                        <label for="email"> Email Address <sup>*</sup> </label>

                        <input
                          type="email"
                          id="email"
                          name="email"
                          placeholder="Enter your email address"
                          required
                        />
                      </div>

                      <div class="form-group">
                        <label for="phone"> Phone Number <sup>*</sup> </label>

                        <input
                          type="tel"
                          id="phone"
                          name="phone"
                          placeholder="Enter your phone number"
                          required
                        />
                      </div>

                      <div class="form-group">
                        <label for="location"> Current Location </label>

                        <input
                          type="text"
                          id="location"
                          name="location"
                          placeholder="City, Country"
                        />
                      </div>
                    </div>
                  </div>

                  <!-- Professional Details -->
                  <div class="career-form__section">
                    <span class="career-form__label">
                      Professional Details
                    </span>

                    <div class="career-form__grid">
                      <div class="form-group">
                        <label for="experience">
                          Experience <sup>*</sup>
                        </label>

                        <select id="experience" name="experience" required>
                          <option value="">Select experience</option>

                          <option value="0-1">0–1 Years</option>

                          <option value="1-3">1–3 Years</option>

                          <option value="3-5">3–5 Years</option>

                          <option value="5-8">5–8 Years</option>

                          <option value="8+">8+ Years</option>
                        </select>
                      </div>

                      <div class="form-group">
                        <label for="notice-period"> Notice Period </label>

                        <select id="notice-period" name="notice_period">
                          <option value="">Select notice period</option>

                          <option value="immediate">Immediate</option>

                          <option value="15">15 Days</option>

                          <option value="30">30 Days</option>

                          <option value="60">60 Days</option>

                          <option value="90">90 Days</option>
                        </select>
                      </div>

                      <div class="form-group">
                        <label for="portfolio"> Portfolio / Website </label>

                        <input
                          type="url"
                          id="portfolio"
                          name="portfolio"
                          placeholder="https://yourwebsite.com"
                        />
                      </div>

                      <div class="form-group">
                        <label for="linkedin"> LinkedIn Profile </label>

                        <input
                          type="url"
                          id="linkedin"
                          name="linkedin"
                          placeholder="https://linkedin.com/in/..."
                        />
                      </div>
                    </div>
                  </div>

                  <!-- Resume -->
                  <div class="career-form__section">
                    <span class="career-form__label">
                      Application Documents
                    </span>

                    <div class="form-group form-group--file">
                      <label for="resume"> Resume / CV <sup>*</sup> </label>

                      <div class="file-upload">
                        <input
                          type="file"
                          id="resume"
                          name="resume"
                          accept=".pdf,.doc,.docx"
                          required
                        />

                        <div class="file-upload__content">
                          <span class="file-upload__icon"> ↑ </span>

                          <div>
                            <strong> Upload your resume </strong>

                            <span> PDF, DOC or DOCX · Max 5MB </span>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="cover-letter"> Cover Letter </label>

                      <textarea
                        id="cover-letter"
                        name="cover_letter"
                        rows="5"
                        placeholder="Tell us briefly why you’re a good fit for this role..."
                      ></textarea>
                    </div>
                  </div>

                  <!-- Consent -->
                  <div class="career-form__footer">
                    <label class="career-checkbox">
                      <input type="checkbox" name="consent" required />

                      <span></span>

                      <p>
                        I confirm that the information provided is accurate and
                        I agree to be contacted regarding this application.
                      </p>
                    </label>

                    <button type="submit" class="btn btn-black">
                      Submit Application ↗
                    </button>
                  </div>
                </form>
              </div>
            </aside>
          </div>
        </div>
      </section>

      <div class="container">
        <div class="cta-promo">
          <div class="cta-promo__inner">
            <span class="cta-promo__eyebrow">Keep Exploring</span>

            <h3 class="cta-promo__heading">
              Your Next Opportunity<br />
              Could Be Here.
            </h3>

            <p class="cta-promo__sub">
              Didn’t find the right role this time? Explore our other
              opportunities and find a position where your skills, ideas, and
              ambitions can grow.
            </p>

            <div class="cta-promo__actions">
              <a href="{{ route('career') }}" class="btn btn-white">
                View All Open Positions
              </a>

              <a href="javascript:void()" class="btn btn-outline-white">
                Get in Touch
              </a>
            </div>
          </div>
        </div>
      </div>
    </main>
@endsection