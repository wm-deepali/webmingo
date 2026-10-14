@extends('layouts.app')

@push('styles')
    <link rel="stylesheet" href="assets/sass/learning/learning.css" />
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
            src="assets/video/effect4.mp4"
            poster="assets/video/poster/effect4.png"
          >
            <source src="assets/video/effect4.mp4" type="video/mp4" />
          </video> 

          <div class="container">
            <div class="banner-wrapper">
              <div class="content">
                <span class="eyebrow"> E-LEARNING & LMS DEVELOPMENT </span>

                <h1>Build Your Own Digital Learning Platform.</h1>

                <p>
                  Launch a custom LMS for courses, test series, live classes and
                  student management—built for your institute or EdTech
                  business.
                </p>

                <div class="banner-actions">
                  <button class="btn btn-white" data-model=".enquire-pop">
                   Get a Free Demo
<i>↗</i>
                  </button>
                  <a href="javascript:void()" class="btn btn-outline-white">
                    Chat on WhatsApp<i>↗</i></a
                  >
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- ============================================================
     02 — E-LEARNING & LMS INTRO
============================================================= -->
      <section class="appIntro">
        <div class="container">
          <div class="appIntro-head">
            <div class="heading">
              <h2>
                More Than An Online Course Website.
                <span>Built For Better Learning Experiences.</span>
              </h2>
            </div>

            <div class="appIntro-intro">
              <p>
                We build custom e-learning and LMS platforms that bring courses,
                learners, instructors and learning tools together in one
                seamless digital experience designed around your education
                model.
              </p>
            </div>
          </div>

          <div class="appIntro-points">
            <div class="appIntro-point">
              <h4>Everything in One Place</h4>
              <p>
                Bring courses, live classes, tests, study material, learner
                progress and communication together through one connected
                platform.
              </p>
            </div>

            <div class="appIntro-point">
              <h4>Built Around Your Model</h4>
              <p>
                Whether you run a coaching institute, online academy, training
                business or course platform, your LMS is built around how you
                teach.
              </p>
            </div>

            <div class="appIntro-point">
              <h4>Ready to Grow</h4>
              <p>
                Start with what your learners need today and expand with new
                courses, users, instructors, features and learning models over
                time.
              </p>
            </div>
          </div>
        </div>
      </section>

      <!-- ============================================================
     03 — WHO WE BUILD LMS PLATFORMS FOR
============================================================= -->
      <section class="lmsAudience">
        <div class="container">
          <div class="heading">
            <h3>
              Who We Build LMS
              <span>Platforms For.</span>
            </h3>

            <p>
              Whether you teach students, train professionals or sell online
              courses, we build learning platforms around the way you work.
            </p>
          </div>

          <div class="lmsAudience-grid">
            <!-- 01 — Coaching Institutes -->
            <article class="lmsAudience-card lmsAudience-card--tall">
              <img
                src="assets/images/website/CoachingInstitutes.png"
                alt="Students learning together"
                loading="lazy"
              />

              <div class="lmsAudience-card__overlay"></div>

              <div class="lmsAudience-card__content">

                <h4>Coaching Institutes</h4>

                <p>
                  Manage students, batches, courses, tests and study material
                  from one easy-to-use learning platform.
                </p>

              </div>
            </article>

            <!-- 02 — Training Centres -->
            <article class="lmsAudience-card">
              <img
                src="assets/images/website/TrainingCentres.png"
                alt="Training centre classroom"
                loading="lazy"
              />

              <div class="lmsAudience-card__overlay"></div>

              <div class="lmsAudience-card__content">

                <h4>Training Centres</h4>

                <p>
                  Deliver professional training with courses, assessments,
                  learner progress and certificates in one place.
                </p>

              </div>
            </article>

            <!-- 03 — Online Academies -->
            <article class="lmsAudience-card">
              <img
                src="assets/images/website/CoachingInstitutes.png"
                alt="Online learning platform"
                loading="lazy"
              />

              <div class="lmsAudience-card__overlay"></div>

              <div class="lmsAudience-card__content">

                <h4>Online Academies</h4>

                <p>
                  Launch your own online academy with courses, memberships,
                  learning resources and student access.
                </p>

              </div>
            </article>

            <!-- 04 — Educators -->
            <article class="lmsAudience-card">
              <img
                src="assets/images/website/EducatorsExperts.png"
                alt="Educator teaching students"
                loading="lazy"
              />

              <div class="lmsAudience-card__overlay"></div>

              <div class="lmsAudience-card__content">

                <h4>Educators &amp; Experts</h4>

                <p>
                  Turn your knowledge into structured online courses and give
                  learners a professional digital experience.
                </p>

              </div>
            </article>

            <!-- 05 — Schools & Colleges -->
            <article class="lmsAudience-card">
              <img
                src="assets/images/website/schoolCollege.png"
                alt="School and college students"
                loading="lazy"
              />

              <div class="lmsAudience-card__overlay"></div>

              <div class="lmsAudience-card__content">

                <h4>Schools &amp; Colleges</h4>

                <p>
                  Support classroom learning with digital courses, assignments,
                  study material, assessments and student progress.
                </p>

              </div>
            </article>

            <!-- 06 — EdTech Startups -->
            <article class="lmsAudience-card lmsAudience-card--wide">
              <img
                src="assets/images/website/etechLeaning.png"
                alt="EdTech startup team"
                loading="lazy"
              />

              <div class="lmsAudience-card__overlay"></div>

              <div class="lmsAudience-card__content">

                <h4>EdTech Startups</h4>

                <p>
                  Build scalable learning products with custom features, user
                  roles, integrations and workflows.
                </p>

              </div>
            </article>

            <!-- 07 — Custom LMS CTA -->
            <article class="lmsAudience-card lmsAudience-card--cta">
              <div class="lmsAudience-cta-shape"></div>

              <div class="lmsAudience-card__content">
                <span>HAVE A DIFFERENT IDEA?</span>

                <h4>
                  Build Your
                  <br />
                  Custom LMS.
                </h4>

                <p>
                  Have a unique teaching model or learning requirement? We can
                  build the platform around it.
                </p>

                <button class="btn btn-black" data-model=".enquire-pop">
                  Let's Talk <i>↗</i>
                </button>
              </div>
            </article>
          </div>
        </div>
      </section>

      <!-- ============================================================
     04 — TYPES OF E-LEARNING PLATFORMS
============================================================= -->
      <section class="lmsTypes">
        <div class="container">
          <div class="heading">
            <h3>
              Types Of E-Learning
              <span>Platforms We Develop.</span>
            </h3>

            <p>
              From coaching portals and test platforms to complete LMS
              solutions, we build learning platforms around your teaching and
              business model.
            </p>
          </div>

          <div class="lmsTypes-grid">
            <!-- 01 — Coaching Portal -->
            <article class="lmsTypes-card">
              <div class="lmsTypes-card__top">
                <span>COACHING</span>
                <i>↗</i>
              </div>

              <h4>Coaching Portal</h4>

              <p>
                Manage batches, students, courses, faculty, tests and study
                material through one dedicated platform for your institute.
              </p>
            </article>

            <!-- 02 — LMS -->
            <article class="lmsTypes-card">
              <div class="lmsTypes-card__top">
                <span>LEARNING MANAGEMENT</span>
                <i>↗</i>
              </div>

              <h4>Learning Management System</h4>

              <p>
                Bring courses, learners, instructors, assessments, progress
                tracking and everyday learning activities into one system.
              </p>
            </article>

            <!-- 03 — Test Series -->
            <article class="lmsTypes-card">
              <div class="lmsTypes-card__top">
                <span>ASSESSMENT</span>
                <i>↗</i>
              </div>

              <h4>Test Series Platform</h4>

              <p>
                Create online tests with question banks, timed exams, instant
                results, rankings and performance tracking for learners.
              </p>
            </article>

            <!-- 04 — Course & Admission Platform -->
            <article class="lmsTypes-card">
              <div class="lmsTypes-card__top">
                <span>COURSES &amp; ADMISSIONS</span>
                <i>↗</i>
              </div>

              <h4>Course &amp; Admission Platform</h4>

              <p>
                Showcase courses, collect enquiries, manage applications and
                guide students from course discovery to admission.
              </p>
            </article>

            <!-- 05 — Online Academy -->
            <article class="lmsTypes-card">
              <div class="lmsTypes-card__top">
                <span>ONLINE EDUCATION</span>
                <i>↗</i>
              </div>

              <h4>Online Academy</h4>

              <p>
                Launch your own branded academy with online courses,
                memberships, certifications and a complete learner experience.
              </p>
            </article>

            <!-- 06 — Custom E-Learning -->
            <article class="lmsTypes-card">
              <div class="lmsTypes-card__top">
                <span>CUSTOM DEVELOPMENT</span>
                <i>↗</i>
              </div>

              <h4>Custom E-Learning</h4>

              <p>
                Have a unique learning idea? We build custom platforms around
                your learners, workflows, features and business requirements.
              </p>
            </article>
          </div>
        </div>
      </section>

    <section class="lmsModel">
  <div class="container">
    <div class="heading">
      <h3>Choose The LMS Model That <span>Fits Your Business.</span></h3>
      <p>
        Whether you need a dedicated platform for one organisation or a
        scalable system serving multiple institutes, we can build the
        right architecture around your business model.
      </p>
    </div>

    <div class="lmsModel-slider">
      <div class="swiper twoSlider">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <article class="lmsModel-card">
              <div class="lmsModel-media">
                <img
                  src="assets/images/website/single-lms.png"
                  alt="Single-tenant LMS dashboard for a dedicated institute"
                  loading="lazy"
                />
              </div>
              <div class="lmsModel-head">
                <span class="lmsModel-num">01</span>
                <span class="lmsModel-label">SINGLE-TENANT LMS</span>
              </div>
              <h4>
                One organisation. One dedicated platform. Complete control.
              </h4>
              <p>
                A dedicated LMS built for one institute, organisation or
                education business. Manage your own students, faculty, courses,
                content and operations through a platform designed around your
                workflow.
              </p>
              <ul class="lmsModel-points">
                <li>Dedicated LMS</li>
                <li>Own students &amp; faculty</li>
                <li>Custom workflows</li>
                <li>Complete administration control</li>
                <li>Custom branding</li>
                <li>Business-specific integrations</li>
              </ul>
              <a href="javascript:void()" class="btn btn-black"
                >Explore Single-Tenant LMS <i>↗</i></a
              >
            </article>
          </div>

          <div class="swiper-slide">
            <article class="lmsModel-card lmsModel-card--alt">
              <div class="lmsModel-media">
                <img
                  src="assets/images/website/multi-lms.png"
                  alt="Multi-tenant LMS platform managing multiple institutes centrally"
                  loading="lazy"
                />
              </div>
              <div class="lmsModel-head">
                <span class="lmsModel-num">02</span>
                <span class="lmsModel-label">MULTI-TENANT / WHITE-LABEL LMS</span>
              </div>
              <h4>
                One platform. Multiple institutes. Independent branded
                experiences.
              </h4>
              <p>
                A scalable LMS where multiple institutes, educators or sellers
                can operate their own branded learning environments while the
                platform owner manages the complete ecosystem centrally.
              </p>
              <ul class="lmsModel-points">
                <li>Multiple institutes</li>
                <li>Individual branding</li>
                <li>Custom domains</li>
                <li>Centralised management</li>
                <li>Tenant-level administration</li>
                <li>Scalable architecture</li>
              </ul>
              <a href="javascript:void()" class="btn btn-black"
                >Explore White-Label LMS <i>↗</i></a
              >
            </article>
          </div>
        </div>
      </div>

      <div class="lmsModel-nav">
        <button
          type="button"
          class="twoSlider-prev btn-prev"
          aria-label="Previous slide"
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
          class="twoSlider-next btn-next"
          aria-label="Next slide"
        >
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1024 1024">
            <path
              fill="#ffff"
              d="M609.408 149.376L277.76 489.6a32 32 0 0 0 0 44.672l331.648 340.352a29.12 29.12 0 0 0 41.728 0a30.59 30.59 0 0 0 0-42.752L339.264 511.936l311.872-319.872a30.59 30.59 0 0 0 0-42.688a29.12 29.12 0 0 0-41.728 0"
            ></path>
          </svg>
        </button>
      </div>
    </div>
  </div>
</section>

<!-- ============================================================
     E-LEARNING & LMS DEVELOPMENT — PACKAGE + CUSTOM REQUIREMENTS FORM
============================================================= -->
<section class="ecomPackage">
  <div class="container">
    <div class="ecomPackage-inner">

      <!-- LEFT — LMS PACKAGE -->
      <div class="ecomPackage-content">
        <span class="ecomPackage-label"> E-LEARNING &amp; LMS DEVELOPMENT </span>

        <h3>
          Build Your Own
          <span>E-Learning &amp; LMS Platform.</span>
        </h3>

        <p class="ecomPackage-intro">
          A complete e-learning platform to manage courses, students, study
          material, online tests, payments, and digital learning from one
          place.
        </p>

        <div class="ecomPackage-package">
          <div class="ecomPackage-package-head">
            <div>
              <span class="ecomPackage-package-label">
                E-LEARNING &amp; LMS PACKAGE
              </span>

              <h4>Custom E-Learning &amp; LMS Portal</h4>
            </div>

            <div class="ecomPackage-package-price">
              <small>PACKAGE PRICE</small>

              <strong> ₹49,999<sup>/-</sup> </strong>
            </div>
          </div>

          <!-- FIRST 6 FEATURES (always visible) -->
          <div class="ecomPackage-package-list ecomPackage-package-list--top">
            <div class="ecomPackage-package-item">
              <i>✓</i>
              <span>Student Registration &amp; Login</span>
            </div>

            <div class="ecomPackage-package-item">
              <i>✓</i>
              <span>Course &amp; Subject Management</span>
            </div>

            <div class="ecomPackage-package-item">
              <i>✓</i>
              <span>Study Material Management</span>
            </div>

            <div class="ecomPackage-package-item">
              <i>✓</i>
              <span>MCQ-Based Online Test / Quiz Module</span>
            </div>

            <div class="ecomPackage-package-item">
              <i>✓</i>
              <span>Student Dashboard</span>
            </div>

            <div class="ecomPackage-package-item">
              <i>✓</i>
              <span>Online Payment Gateway Integration</span>
            </div>
          </div>

          <!-- REMAINING 7 FEATURES (slide down) -->
          <div class="ecomPackage-more">
            <div class="ecomPackage-package-list ecomPackage-package-list--more">
              <div class="ecomPackage-package-item">
                <i>✓</i>
                <span>Course &amp; Lesson Management</span>
              </div>

              <div class="ecomPackage-package-item">
                <i>✓</i>
                <span>Student Progress Management</span>
              </div>

              <div class="ecomPackage-package-item">
                <i>✓</i>
                <span>Admin Dashboard</span>
              </div>

              <div class="ecomPackage-package-item">
                <i>✓</i>
                <span>WhatsApp Integration</span>
              </div>

              <div class="ecomPackage-package-item">
                <i>✓</i>
                <span>Enquiry / Contact Form</span>
              </div>

              <div class="ecomPackage-package-item">
                <i>✓</i>
                <span>Mobile Responsive Design</span>
              </div>

              <div class="ecomPackage-package-item">
                <i>✓</i>
                <span>Basic SEO Setup</span>
              </div>
            </div>
          </div>

          <!-- VIEW ALL / VIEW LESS (text link) -->
          <button type="button" class="ecomPackage-toggle" aria-expanded="false">
            <span class="ecomPackage-toggle-text">View all</span>
            <i aria-hidden="true"></i>
          </button>

          <div class="ecomPackage-package-bottom">
            <div class="ecomPackage-offer">
              <span class="ecomPackage-offer-tag">1 YEAR FREE</span>

              <span class="ecomPackage-offer-text">
                <strong>Web Hosting &amp; Support</strong>
                <small>Included with your package</small>
              </span>
            </div>

            <button
              type="button"
              class="btn btn-outline-primary"
              data-model=".enquire-pop"
            >
              View My Package <i>↗</i>
            </button>
          </div>
        </div>

        <!-- ADD-ONS (compact accordion) -->
        <div class="ecomPackage-addons">
          <span class="ecomPackage-addons-label">EXTEND YOUR PLATFORM</span>

          <div class="ecomPackage-addon">
            <button type="button" class="ecomPackage-addon-head" aria-expanded="false">
              <span>Need More Customization in Your Test Series?</span>
              <i aria-hidden="true"></i>
            </button>

            <div class="ecomPackage-addon-body">
              <p>
                Add different question types and academic test structures,
                including True / False, Fill in the Blanks, Subjective
                Questions, Sections, and Custom Test Logic.
              </p>
            </div>
          </div>

          <div class="ecomPackage-addon">
            <button type="button" class="ecomPackage-addon-head" aria-expanded="false">
              <span>Need Live Classes, Video Learning or One-to-One Doubt Sessions?</span>
              <i aria-hidden="true"></i>
            </button>

            <div class="ecomPackage-addon-body">
              <p>
                Extend your platform with Live Classes, Video Learning,
                One-to-One Doubt Sessions, and other learning modules.
              </p>
            </div>
          </div>

          <div class="ecomPackage-addon">
            <button type="button" class="ecomPackage-addon-head" aria-expanded="false">
              <span>Looking for a Multi-Tenant White-Label LMS?</span>
              <i aria-hidden="true"></i>
            </button>

            <div class="ecomPackage-addon-body">
              <p>
                Create separate learning platforms for multiple institutes or
                educators, each with their own branding, courses, students,
                and administration.
              </p>
            </div>
          </div>

          <div class="ecomPackage-addons-foot">
            <button
              type="button"
              class="btn btn-primary"
              data-model=".enquire-pop"
            >
              Get a Custom Quote <i>↗</i>
            </button>
          </div>
        </div>
      </div>

      <!-- RIGHT — CUSTOM LMS REQUIREMENTS -->
      <div class="ecomPackage-form">
        <div class="ecomPackage-form-head">
          <span class="ecomPackage-form-label">
            HAVE CUSTOM LMS REQUIREMENTS?
          </span>

          <h4>
            Tell Us Your
            <span>Learning Requirements.</span>
          </h4>

          <p>
            Need a custom LMS, coaching portal, test platform or online
            academy? Tell us what you want to build.
          </p>
        </div>

        <form>
          <div class="ecomPackage-model">
            <label> Choose Your LMS Model </label>

            <div class="ecomPackage-model-options">
              <label class="ecomPackage-model-option">
                <input type="radio" name="lms_model" value="single-tenant" />

                <span class="ecomPackage-model-option__content">
                  <strong> Single-Tenant LMS </strong>

                  <small> Dedicated LMS for your organisation. </small>
                </span>

                <i>✓</i>
              </label>

              <label class="ecomPackage-model-option">
                <input type="radio" name="lms_model" value="multi-tenant" />

                <span class="ecomPackage-model-option__content">
                  <strong> Multi-Tenant / White-Label </strong>

                  <small> One LMS for multiple brands or institutes. </small>
                </span>

                <i>✓</i>
              </label>
            </div>
          </div>

          <div class="ecomPackage-form-group">
            <label for="lmsPackageName"> Full Name </label>

            <input
              type="text"
              id="lmsPackageName"
              name="name"
              placeholder="Enter your full name"
            />
          </div>

          <div class="ecomPackage-form-group">
            <label for="lmsPackageMobile"> Mobile Number </label>

            <input
              type="tel"
              id="lmsPackageMobile"
              name="mobile"
              placeholder="Enter your mobile number"
            />
          </div>

          <div class="ecomPackage-form-group">
            <label for="lmsPackageType"> Learning Platform Type </label>

            <select id="lmsPackageType" name="learning_platform">
              <option value="" selected disabled>
                Select your platform type
              </option>
              <option value="coaching-portal">Coaching Portal</option>
              <option value="lms">Learning Management System</option>
              <option value="test-series">Test Series Platform</option>
              <option value="course-admission">
                Course &amp; Admission Platform
              </option>
              <option value="online-academy">Online Academy</option>
              <option value="custom-elearning">Custom E-Learning</option>
            </select>
          </div>

          <div class="ecomPackage-form-group">
            <label for="packageMessage"> Your Requirements </label>

            <textarea
              id="packageMessage"
              name="requirements"
              rows="4"
              placeholder="Tell us about your website requirements"
            ></textarea>
          </div>

          <div class="ecomPackage-form-action">
            <button type="submit" class="btn btn-black">
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
     06 — CORE LMS CAPABILITIES
============================================================= -->
      <section class="lmsFeatures">
        <div class="container">
          <div class="heading">
            <span class="eyebrow">
              <span class="eyebrow-line"></span>
              CORE LMS CAPABILITIES
            </span>

            <h3>
              Everything Your LMS Needs
              <span>For Better Learning.</span>
            </h3>

            <p>
              Bring courses, assessments, live learning, study resources and
              learner support together in one connected platform.
            </p>
          </div>

          <div class="lmsFeatures-wrap">
            <div class="lmsFeatures-content">
              <div class="lmsFeatures-item">
                <span class="lmsFeatures-item__line"></span>

                <div class="lmsFeatures-item__content">
                  <h4>Courses &amp; Programs</h4>
                  <p>
                    Create structured courses and programs with lessons,
                    resources and learner progress.
                  </p>
                </div>
              </div>

              <div class="lmsFeatures-item">
                <span class="lmsFeatures-item__line"></span>

                <div class="lmsFeatures-item__content">
                  <h4>Test Series</h4>
                  <p>
                    Create online tests with question banks, timed exams and
                    performance tracking.
                  </p>
                </div>
              </div>

              <div class="lmsFeatures-item">
                <span class="lmsFeatures-item__line"></span>

                <div class="lmsFeatures-item__content">
                  <h4>Live Video Consultation</h4>
                  <p>
                    Connect learners with educators through one-to-one video
                    consultations and guidance.
                  </p>
                </div>
              </div>

              <div class="lmsFeatures-item">
                <span class="lmsFeatures-item__line"></span>

                <div class="lmsFeatures-item__content">
                  <h4>Live Classes</h4>
                  <p>
                    Schedule live sessions and connect learners with educators
                    through your platform.
                  </p>
                </div>
              </div>

              <div class="lmsFeatures-item">
                <span class="lmsFeatures-item__line"></span>

                <div class="lmsFeatures-item__content">
                  <h4>Study Material</h4>
                  <p>
                    Organise notes, PDFs, videos and digital resources for easy
                    learner access.
                  </p>
                </div>
              </div>

              <div class="lmsFeatures-item">
                <span class="lmsFeatures-item__line"></span>

                <div class="lmsFeatures-item__content">
                  <h4>Current Affairs</h4>
                  <p>
                    Publish regularly updated content to support competitive
                    exams and ongoing learning.
                  </p>
                </div>
              </div>

              <div class="lmsFeatures-item">
                <span class="lmsFeatures-item__line"></span>

                <div class="lmsFeatures-item__content">
                  <h4>Previous Papers</h4>
                  <p>
                    Give learners access to previous papers for practice and
                    better exam preparation.
                  </p>
                </div>
              </div>

              <div class="lmsFeatures-item">
                <span class="lmsFeatures-item__line"></span>

                <div class="lmsFeatures-item__content">
                  <h4>Doubt Clearing</h4>
                  <p>
                    Let learners ask questions and connect with educators for
                    academic support.
                  </p>
                </div>
              </div>

              <div class="lmsFeatures-item">
                <span class="lmsFeatures-item__line"></span>

                <div class="lmsFeatures-item__content">
                  <h4>Interview Practice</h4>
                  <p>
                    Help learners prepare with interview questions, practice
                    sessions and useful resources.
                  </p>
                </div>
              </div>

              <div class="lmsFeatures-item">
                <span class="lmsFeatures-item__line"></span>

                <div class="lmsFeatures-item__content">
                  <h4>Batches</h4>
                  <p>
                    Organise learners into batches with dedicated courses,
                    schedules and faculty.
                  </p>
                </div>
              </div>
            </div>

            <div class="lmsFeatures-visual">
              <div class="lmsFeatures-image">
                <img
                  src="assets/images/website/core_capability.png"
                  alt="Students learning together through a digital education platform"
                  loading="lazy"
                />
              </div>

              <div class="lmsFeatures-card">
                <span> ONE CONNECTED PLATFORM </span>

                <h4>Built Around The Way You Teach.</h4>

                <p>
                  Choose the learning capabilities you need today and expand
                  your platform as your students, courses and business grow.
                </p>

                <a href="javascript:void(0)" class="btn btn-outline-black">
                  Explore LMS Capabilities
                  <i>↗</i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- ============================================================
     07 — STUDENT, FACULTY & ADMINISTRATION MANAGEMENT
============================================================= -->
      <section class="lmsManagement">
        <div class="container">
          <div class="heading">
            <span class="eyebrow">
              <span class="eyebrow-line"></span>
              ONE PLATFORM FOR EVERY LEARNING ROLE
            </span>

            <h3>
              One Platform For
              <span>Every Learning Role.</span>
            </h3>

            <p>
              Give every person using your LMS the right tools to learn, teach
              and manage from one connected platform.
            </p>
          </div>

          <div class="lmsManagement-box">
            <!-- IMAGE -->
            <div class="lmsManagement-media">
              <div class="lmsManagement-media__image">
                <img
                  src="assets/images/website/lmsManagement.png"
                  alt="Students learning in a modern classroom"
                  loading="lazy"
                />
              </div>

              <div class="lmsManagement-media__overlay">
                <span>ONE CONNECTED ECOSYSTEM</span>

                <h4>
                  Learn.
                  <br />
                  Teach.
                  <br />
                  <em>Manage.</em>
                </h4>

                <p>
                  Students, faculty and administration stay connected through
                  one complete learning platform.
                </p>
              </div>
            </div>

            <!-- ROLES -->
            <div class="lmsManagement-roles">
              <div class="lmsManagement-roles__intro">
                <span>WHO USES YOUR LMS?</span>

                <h4>
                  Built For<br/>
                  <span>Every Learning Role.</span>
                </h4>
              </div>

              <!-- STUDENT -->
              <div class="lmsManagement-card">
                <div class="lmsManagement-card__number">01</div>

                <div class="lmsManagement-card__content">
                  <div class="lmsManagement-card__title">
                    <h5>Student</h5>
                  </div>

                  <p>
                    Learn, practise and track progress through one simple
                    learner experience.
                  </p>

                  <div class="lmsManagement-card__features">
                    <span>Courses</span>
                    <span>Live Classes</span>
                    <span>Tests</span>
                    <span>Results</span>
                    <span>Study Material</span>
                    <span>Doubt Support</span>
                  </div>
                </div>
              </div>

              <!-- FACULTY -->
              <div class="lmsManagement-card">
                <div class="lmsManagement-card__number">02</div>

                <div class="lmsManagement-card__content">
                  <div class="lmsManagement-card__title">
                    <h5>Faculty</h5>
                  </div>

                  <p>
                    Create courses, manage learners and deliver engaging
                    learning through one connected workspace.
                  </p>

                  <div class="lmsManagement-card__features">
                    <span>Course Management</span>
                    <span>Batches</span>
                    <span>Live Classes</span>
                    <span>Assessments</span>
                    <span>Content</span>
                    <span>Performance</span>
                  </div>
                </div>
              </div>

              <!-- ADMINISTRATION -->
              <div class="lmsManagement-card">
                <div class="lmsManagement-card__number">03</div>

                <div class="lmsManagement-card__content">
                  <div class="lmsManagement-card__title">
                    <h5>Administration</h5>
                  </div>

                  <p>
                    Manage users, courses, payments, permissions and platform
                    operations from one central dashboard.
                  </p>

                  <div class="lmsManagement-card__features">
                    <span>Users</span>
                    <span>Payments</span>
                    <span>Reports</span>
                    <span>Permissions</span>
                    <span>Analytics</span>
                    <span>Settings</span>
                  </div>
                </div>
              </div>

              <!-- CTA -->
              <div class="lmsManagement-cta">
                <div>
                  <strong>Every Role. One Connected LMS.</strong>
                  <span>
                    Build the right experience for students, faculty and
                    administration.
                  </span>
                </div>

                <a href="javascript:void(0)" class="btn btn-outline-black">
                  Discuss Your LMS
                  <i>↗</i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- ============================================================
     08 — CUSTOM FEATURES & THIRD-PARTY INTEGRATIONS
============================================================= -->
      <section class="lmsIntegrations" style="display: none">
        <div class="container">
          <div class="heading">
            <span class="eyebrow">
              <span class="eyebrow-line"></span>
              SCALE YOUR EDUCATION BUSINESS
            </span>

            <h3>
              How An LMS Helps You
              <span>Scale Your Education Business.</span>
            </h3>

            <p>
              Take your education business beyond physical classrooms with
              digital learning, wider reach, simpler operations and better
              learner engagement.
            </p>
          </div>

          <div class="lmsIntegrations-wrap">
            <!-- LEFT CONTENT -->
            <div class="lmsIntegrations-content">
              <div class="lmsIntegrations-intro">
                <span class="eyebrow">
                  <span class="eyebrow-line"></span>
                  BUILT FOR BUSINESS GROWTH
                </span>

                <h4>
                  Turn Your LMS Into A
                  <span>Growth Platform.</span>
                </h4>

                <p>
                  Give your education business the digital foundation to reach
                  more learners, offer more learning products and manage growth
                  with less manual effort.
                </p>
              </div>

              <div class="lmsIntegrations-list">
                <div class="lmsIntegrations-item">
                  <span class="lmsIntegrations-item__icon">01</span>

                  <div>
                    <h5>Teach Beyond Your Location</h5>
                    <p>
                      Reach learners beyond your physical classroom and deliver
                      courses from anywhere.
                    </p>
                  </div>
                </div>

                <div class="lmsIntegrations-item">
                  <span class="lmsIntegrations-item__icon">02</span>

                  <div>
                    <h5>Serve More Students</h5>
                    <p>
                      Support a growing learner base without depending only on
                      physical classroom capacity.
                    </p>
                  </div>
                </div>

                <div class="lmsIntegrations-item">
                  <span class="lmsIntegrations-item__icon">03</span>

                  <div>
                    <h5>Sell Courses &amp; Test Series Online</h5>
                    <p>
                      Offer courses, test series and learning resources directly
                      through your digital platform.
                    </p>
                  </div>
                </div>

                <div class="lmsIntegrations-item">
                  <span class="lmsIntegrations-item__icon">04</span>

                  <div>
                    <h5>Reduce Manual Administration</h5>
                    <p>
                      Bring student, course, batch and learning activities into
                      one organised system.
                    </p>
                  </div>
                </div>

                <div class="lmsIntegrations-item">
                  <span class="lmsIntegrations-item__icon">05</span>

                  <div>
                    <h5>Build Recurring Learning Revenue</h5>
                    <p>
                      Create memberships, subscriptions, batches and ongoing
                      learning programs for your audience.
                    </p>
                  </div>
                </div>

                <div class="lmsIntegrations-item">
                  <span class="lmsIntegrations-item__icon">06</span>

                  <div>
                    <h5>Understand Student Performance</h5>
                    <p>
                      Track learner activity, results and progress to understand
                      how students are engaging with your platform.
                    </p>
                  </div>
                </div>
              </div>
            </div>

            <!-- RIGHT VISUAL -->
            <div class="lmsIntegrations-visual">
              <div class="lmsIntegrations-image">
                <img
                  src="https://images.unsplash.com/photo-1556761175-b413da4baf72?w=1400&q=85"
                  alt="Education business team planning digital growth"
                  loading="lazy"
                />
              </div>

              <div class="lmsIntegrations-orbit">
                <div class="lmsIntegrations-orbit__center">
                  <span>LMS</span>
                  <strong>GROWTH</strong>
                </div>

                <div
                  class="lmsIntegrations-orbit__item lmsIntegrations-orbit__item--one"
                >
                  Reach
                </div>

                <div
                  class="lmsIntegrations-orbit__item lmsIntegrations-orbit__item--two"
                >
                  Students
                </div>

                <div
                  class="lmsIntegrations-orbit__item lmsIntegrations-orbit__item--three"
                >
                  Courses
                </div>

                <div
                  class="lmsIntegrations-orbit__item lmsIntegrations-orbit__item--four"
                >
                  Revenue
                </div>
              </div>

              <div class="lmsIntegrations-note">
                <span>READY TO SCALE</span>

                <p>
                  Build a learning platform that can grow with your students,
                  courses and education business.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="lmsScaleCta">
        <div class="container">
          <div class="lmsScaleCta-inner">
            <div class="lmsScaleCta-content">
              <span class="eyebrow"> HOW AN LMS HELPS YOU SCALE </span>

              <h3>
                How An LMS Helps You
                <br />
                Scale Your Education Business.
              </h3>

              <p>
                Take your education business beyond physical classrooms, reach
                more learners, simplify operations and create new opportunities
                to grow online.
              </p>

              <div class="lmsScaleCta-points">
                <div>
                  <strong>Teach Beyond Your Location</strong>
                  <span>
                    Deliver courses and classes to learners from anywhere.
                  </span>
                </div>

                <div>
                  <strong>Serve More Students</strong>
                  <span>
                    Reach and support more learners through one platform.
                  </span>
                </div>

                <div>
                  <strong>Sell Courses &amp; Test Series Online</strong>
                  <span>
                    Offer courses, tests and learning resources digitally.
                  </span>
                </div>

                <div>
                  <strong>Reduce Manual Administration</strong>
                  <span>
                    Simplify student, batch, course and everyday management.
                  </span>
                </div>

                <div>
                  <strong>Build Recurring Learning Revenue</strong>
                  <span>
                    Create memberships, subscriptions and ongoing programs.
                  </span>
                </div>

                <div>
                  <strong>Understand Student Performance</strong>
                  <span>
                    Track learner activity, results and progress with useful
                    data.
                  </span>
                </div>
              </div>

              <a href="javascript:void(0)" class="btn btn-white">
                Build Your LMS
                <i>↗</i>
              </a>
            </div>
          </div>
        </div>
      </section>

<section class="secG">
  <div class="container">

    <div class="heading">
      <span class="eyebrow">
        <span class="eyebrow-line"></span>
        HOW WE BUILD
      </span>

      <h3>Our LMS <span>Development Process.</span></h3>

      <p>
        We turn your teaching model into a structured learning platform —
        from strategy and design through development, testing and launch.
      </p>
    </div>

    <div class="secG-process">

      <div class="secG-line">
        <span></span>
      </div>

      <article class="secG-step">
        <div class="secG-marker">
          <div class="secG-icon">
            <svg viewBox="0 0 24 24" aria-hidden="true">
              <circle cx="11" cy="11" r="6.5"></circle>
              <path d="m16 16 4 4"></path>
              <path d="M8.5 11h5"></path>
              <path d="M11 8.5v5"></path>
            </svg>
          </div>
        </div>

        <div class="secG-info">
          <span class="secG-kicker">DISCOVER</span>

          <h4>Understand Your Learning Model</h4>

          <p>
            Understand your courses, learners, teaching model, business goals
            and operational requirements.
          </p>

          <div class="secG-details">
            <span>Courses</span>
            <span>Learners</span>
            <span>Teaching Model</span>
          </div>
        </div>

        <div class="secG-side">
          <span>01</span>
          <strong>Foundation</strong>
        </div>
      </article>


      <article class="secG-step">
        <div class="secG-marker">
          <div class="secG-icon">
            <svg viewBox="0 0 24 24" aria-hidden="true">
              <rect x="4" y="4" width="16" height="16" rx="2"></rect>
              <path d="M8 9h8"></path>
              <path d="M8 13h5"></path>
              <path d="M8 17h7"></path>
            </svg>
          </div>
        </div>

        <div class="secG-info">
          <span class="secG-kicker">PLAN</span>

          <h4>Structure The Learning Platform</h4>

          <p>
            Define platform structure, roles, modules, workflows, integrations
            and technical requirements.
          </p>

          <div class="secG-details">
            <span>Structure</span>
            <span>Roles</span>
            <span>Modules</span>
          </div>
        </div>

        <div class="secG-side">
          <span>02</span>
          <strong>Direction</strong>
        </div>
      </article>


      <article class="secG-step">
        <div class="secG-marker">
          <div class="secG-icon">
            <svg viewBox="0 0 24 24" aria-hidden="true">
              <path d="M5 19 19 5"></path>
              <path d="m7 5 12 12"></path>
              <path d="M5 12h4"></path>
              <path d="M15 12h4"></path>
            </svg>
          </div>
        </div>

        <div class="secG-info">
          <span class="secG-kicker">DESIGN</span>

          <h4>Design For Every Learner</h4>

          <p>
            Create intuitive student, faculty and administration experiences
            around real user journeys.
          </p>

          <div class="secG-details">
            <span>User Journeys</span>
            <span>UI Design</span>
            <span>Dashboards</span>
          </div>
        </div>

        <div class="secG-side">
          <span>03</span>
          <strong>Experience</strong>
        </div>
      </article>


      <article class="secG-step">
        <div class="secG-marker">
          <div class="secG-icon">
            <svg viewBox="0 0 24 24" aria-hidden="true">
              <path d="m8 9-4 3 4 3"></path>
              <path d="m16 9 4 3-4 3"></path>
              <path d="m14 5-4 14"></path>
            </svg>
          </div>
        </div>

        <div class="secG-info">
          <span class="secG-kicker">DEVELOP</span>

          <h4>Build The LMS & Its Modules</h4>

          <p>
            Build the LMS, dashboards, modules, integrations and required
            functionality.
          </p>

          <div class="secG-details">
            <span>LMS Build</span>
            <span>Modules</span>
            <span>Integrations</span>
          </div>
        </div>

        <div class="secG-side">
          <span>04</span>
          <strong>Build</strong>
        </div>
      </article>


      <article class="secG-step">
        <div class="secG-marker">
          <div class="secG-icon">
            <svg viewBox="0 0 24 24" aria-hidden="true">
              <rect x="4" y="4" width="16" height="16" rx="2"></rect>
              <path d="m8 12 2.5 2.5L16 9"></path>
            </svg>
          </div>
        </div>

        <div class="secG-info">
          <span class="secG-kicker">TEST</span>

          <h4>Test Every Learning Experience</h4>

          <p>
            Test learning flows, assessments, payments, permissions,
            responsive behaviour and platform performance.
          </p>

          <div class="secG-details">
            <span>Flows</span>
            <span>Payments</span>
            <span>Responsive</span>
          </div>
        </div>

        <div class="secG-side">
          <span>05</span>
          <strong>Quality</strong>
        </div>
      </article>


      <article class="secG-step">
        <div class="secG-marker">
          <div class="secG-icon">
            <svg viewBox="0 0 24 24" aria-hidden="true">
              <path d="M12 19V5"></path>
              <path d="m7 10 5-5 5 5"></path>
              <path d="M5 19h14"></path>
            </svg>
          </div>
        </div>

        <div class="secG-info">
          <span class="secG-kicker">LAUNCH</span>

          <h4>Launch Your Learning Platform</h4>

          <p>
            Deploy the platform, configure the required systems and prepare
            it for real users.
          </p>

          <div class="secG-details">
            <span>Deploy</span>
            <span>Configure</span>
            <span>Handover</span>
          </div>
        </div>

        <div class="secG-side">
          <span>06</span>
          <strong>Launch</strong>
        </div>
      </article>


      <article class="secG-step secG-step-last">
        <div class="secG-marker">
          <div class="secG-icon">
            <svg viewBox="0 0 24 24" aria-hidden="true">
              <path d="M12 19V5"></path>
              <path d="m7 10 5-5 5 5"></path>
              <path d="M5 19h14"></path>
              <path d="M17 7h3"></path>
              <path d="M18.5 5.5v3"></path>
            </svg>
          </div>
        </div>

        <div class="secG-info">
          <span class="secG-kicker">GROW</span>

          <h4>Evolve As Your Education Business Grows</h4>

          <p>
            Add new modules, integrations, automation and improvements as your
            education business evolves.
          </p>

          <div class="secG-details">
            <span>New Modules</span>
            <span>Automation</span>
            <span>Optimisation</span>
          </div>
        </div>

        <div class="secG-side">
          <span>07</span>
          <strong>Growth</strong>
        </div>
      </article>

    </div>

  </div>
</section>

<!-- ============================================================
     08 — PORTFOLIO (.secC)
============================================================= -->
<section class="secC">
  <div class="container">
    <div class="heading">
      <span class="eyebrow">
        <span class="eyebrow-line"></span>
        EDTECH PORTFOLIO
      </span>

      <h3>
        EdTech Experiences <br/>
        <span>We've Helped Build.</span>
      </h3>

      <p>
        Explore relevant education, LMS and learning-platform work built
        around different business models and learner journeys.
      </p>
    </div>

    <div class="swiper-wrapped">
      <div class="swiper secC-swiper">
        <div class="swiper-wrapper">

          <!-- 01 — THE EXAM TIME -->
          <div class="swiper-slide">
            <div class="secC-panel">
              <div class="secC-panel__media">
                <img
                  src="assets/images/website/portfolio/Exam-Time.png"
                  alt="The Exam Time online exam preparation website"
                  loading="lazy"
                />
              </div>

              <div class="secC-panel__body">
                <div class="secC-panel__text">
                  <h4>The Exam Time</h4>
                  <p>
                    An online learning platform for civil service aspirants,
                    offering test series, live classes and student support.
                  </p>
                </div>

                <div class="secC-panel__actions">
                  <a href="javascript:void(0)" class="btn btn-outline-black"
                    > <svg
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
            </svg></a
                  >
                  <button
                    type="button"
                    class="btn btn-black"
                    data-model=".enquire-pop"
                  >
                    Get a Quote
                  </button>
                </div>
              </div>
            </div>
          </div>

          <!-- 02 — RACE IAS -->
          <div class="swiper-slide">
            <div class="secC-panel">
              <div class="secC-panel__media">
                <img
                  src="assets/images/website/portfolio/RACE-IAS.png"
                  alt="RACE IAS coaching website"
                  loading="lazy"
                />
              </div>

              <div class="secC-panel__body">
                <div class="secC-panel__text">
                  <h4>RACE IAS</h4>
                  <p>
                    A coaching institute website presenting UPSC courses,
                    programs, test series and useful student information.
                  </p>
                </div>

                <div class="secC-panel__actions">
                  <a href="javascript:void(0)" class="btn btn-outline-black"
                    > <svg
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
            </svg></a
                  >
                  <button
                    type="button"
                    class="btn btn-black"
                    data-model=".enquire-pop"
                  >
                    Get a Quote
                  </button>
                </div>
              </div>
            </div>
          </div>

          <!-- 03 — ADHYAYANAM IAS -->
          <div class="swiper-slide">
            <div class="secC-panel">
              <div class="secC-panel__media">
                <img
                  src="assets/images/website/portfolio/Adhyayanam.png"
                  alt="Adhyayanam IAS coaching website"
                  loading="lazy"
                />
              </div>

              <div class="secC-panel__body">
                <div class="secC-panel__text">
                  <h4>Adhyayanam IAS</h4>
                  <p>
                    A modern coaching website for UPSC and State PCS programs,
                    with courses, study material and student enquiries.
                  </p>
                </div>

                <div class="secC-panel__actions">
                  <a href="javascript:void(0)" class="btn btn-outline-black"
                    > <svg
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
            </svg></a
                  >
                  <button
                    type="button"
                    class="btn btn-black"
                    data-model=".enquire-pop"
                  >
                    Get a Quote
                  </button>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>

      <div class="swiper-group">
        <button
          type="button"
          class="secC-prev btn-prev"
          tabindex="0"
          aria-label="Previous slide"
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
          class="secC-next btn-next"
          tabindex="0"
          aria-label="Next slide"
        >
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1024 1024">
            <path
              fill="#ffff"
              d="M609.408 149.376L277.76 489.6a32 32 0 0 0 0 44.672l331.648 340.352a29.12 29.12 0 0 0 41.728 0a30.59 30.59 0 0 0 0-42.752L339.264 511.936l311.872-319.872a30.59 30.59 0 0 0 0-42.688a29.12 29.12 0 0 0-41.728 0"
            ></path>
          </svg>
        </button>
      </div>
    </div>
  </div>
</section>

      <section class="secL">
        <div class="container">
          <div class="heading">
            <span class="eyebrow"
              ><span class="eyebrow-line"></span>WHY WEB MINGO</span
            >
            <h3>
              Why Build Your Website<br />
              <span>With Web Mingo.</span>
            </h3>
            <p>
              We combine strategy, design, and technology to build websites that
              work for your business, connect with your audience, and support
              your growth.
            </p>
          </div>

          <ul class="secL-list">
            <li>
              <span class="secL-icon">
                <svg viewBox="0 0 24 24">
                  <path d="M12 3v18" />
                  <path d="M3 12h18" />
                  <path d="M5 5l14 14" />
                  <path d="M19 5L5 19" />
                </svg>
              </span>
              <div>
                <h4>Strategy First</h4>
                <p>
                  We understand your business, audience and goals before
                  designing your website.
                </p>
              </div>
            </li>

            <li>
              <span class="secL-icon">
                <svg viewBox="0 0 24 24">
                  <path d="M13 2L3 14h7l-1 8 11-13h-7l1-7z" />
                </svg>
              </span>
              <div>
                <h4>Built For Your Business</h4>
                <p>
                  Every website is tailored to your requirements instead of
                  relying on a one-size-fits-all template.
                </p>
              </div>
            </li>

            <li>
              <span class="secL-icon">
                <svg viewBox="0 0 24 24">
                  <circle cx="11" cy="11" r="7" />
                  <path d="M21 21l-4.3-4.3" />
                </svg>
              </span>
              <div>
                <h4>Made For Real Users</h4>
                <p>
                  Clear navigation, responsive layouts and thoughtful
                  interactions make your website easy to use.
                </p>
              </div>
            </li>

            <li>
              <span class="secL-icon">
                <svg viewBox="0 0 24 24">
                  <path d="M4 12a8 8 0 1116 0 8 8 0 01-16 0z" />
                  <path d="M12 8v4l3 2" />
                </svg>
              </span>
              <div>
                <h4>Ready To Grow</h4>
                <p>
                  We build a strong foundation that can support new pages,
                  features, content and future growth.
                </p>
              </div>
            </li>
          </ul>

          <div class="cntr">
            <button
              type="button"
              data-model=".enquire-pop"
              class="btn btn-outline-black"
            >
              Start Your Project <i>↗</i>
            </button>
          </div>
        </div>
      </section>


     <section class="secN">
  <div class="container">
    <div class="heading">
      <h3>
        Questions About E-Learning<span> &amp; LMS Development?</span>
      </h3>
      <p>
        Clear answers to common questions about building a learning
        platform with Web Mingo.
      </p>
    </div>

    <div class="accordion-wrapper">

      <div class="accordion-item">
        <div class="accordion-header">
          <div class="faq-question">
            <h4>
              Can you build a completely custom LMS for our institute?
            </h4>
          </div>
          <span class="accordion-icon">+</span>
        </div>
        <div class="accordion-content">
          <p>
            Yes. We can design and develop a custom LMS around your courses,
            students, faculty, assessments, workflows and business
            requirements instead of forcing your organisation into a fixed
            platform structure.
          </p>
        </div>
      </div>

      <div class="accordion-item">
        <div class="accordion-header">
          <div class="faq-question">
            <h4>
              Can you develop an LMS for coaching and test preparation businesses?
            </h4>
          </div>
          <span class="accordion-icon">+</span>
        </div>
        <div class="accordion-content">
          <p>
            Yes. The LMS can support courses, batches, test series,
            question banks, results, rankings, study material, faculty
            workflows and other education-specific requirements.
          </p>
        </div>
      </div>

      <div class="accordion-item">
        <div class="accordion-header">
          <div class="faq-question">
            <h4>
              What is the difference between a single-tenant and multi-tenant LMS?
            </h4>
          </div>
          <span class="accordion-icon">+</span>
        </div>
        <div class="accordion-content">
          <p>
            A single-tenant LMS is built for one organisation, while a
            multi-tenant or white-label LMS allows multiple institutes to
            operate independently within one centrally managed platform.
          </p>
        </div>
      </div>

      <div class="accordion-item">
        <div class="accordion-header">
          <div class="faq-question">
            <h4>
              Can the LMS integrate with our CRM, ERP and other systems?
            </h4>
          </div>
          <span class="accordion-icon">+</span>
        </div>
        <div class="accordion-content">
          <p>
            Yes. CRM, ERP, payment gateways, video platforms and other
            third-party services can be connected through available APIs or
            custom integration workflows based on your requirements.
          </p>
        </div>
      </div>

      <div class="accordion-item">
        <div class="accordion-header">
          <div class="faq-question">
            <h4>
              Can you build Android and iOS apps along with the LMS?
            </h4>
          </div>
          <span class="accordion-icon">+</span>
        </div>
        <div class="accordion-content">
          <p>
            Yes. Android and iOS applications can be developed alongside
            the LMS to provide students, faculty and administrators with
            a connected mobile learning experience.
          </p>
        </div>
      </div>

    </div>
  </div>
</section>

      <!-- ============================================================
       15 — FINAL CTA (common .cta-promo)
  ============================================================= -->
      <div class="container">
        <div class="cta-promo">
          <div class="cta-promo__inner">
            <span class="cta-promo__eyebrow"
              >READY TO BUILD YOUR LEARNING PLATFORM?</span
            >
            <h3 class="cta-promo__heading">
              Let's Build An LMS That<br />Works For Your Education Business.
            </h3>
            <p class="cta-promo__sub">
              Tell us about your courses, learners, teaching model and business
              goals. We'll help you plan the right LMS structure, features,
              integrations and technology for your next stage of growth.
            </p>
            <div class="cta-promo__actions">
              <button class="btn btn-white" data-model=".enquire-pop">
                Discuss Your LMS Requirement
              </button>
              <a href="javascript:void(0)" class="btn btn-outline-white"
                >Chat on WhatsApp</a
              >
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
      <li><a href="javascript:void(0)"><span aria-hidden="true"><svg viewBox="0 0 24 24"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M3 9h18M9 21V9"/></svg></span><em>E-Commerce</em></a></li>
      <li><a href="javascript:void(0)"><span aria-hidden="true"><svg viewBox="0 0 24 24"><path d="M8 3L3 8l5 5M16 3l5 5-5 5M14 4l-4 16"/></svg></span><em>Web Apps</em></a></li>
      <li><a href="javascript:void(0)"><span aria-hidden="true"><svg viewBox="0 0 24 24"><rect x="7" y="2" width="10" height="20" rx="2"/><path d="M11 18h2"/></svg></span><em>Mobile Apps</em></a></li>
      <li><a href="javascript:void(0)"><span aria-hidden="true"><svg viewBox="0 0 24 24"><circle cx="11" cy="11" r="7"/><path d="M21 21l-4.3-4.3"/></svg></span><em>SEO</em></a></li>
      <li><a href="javascript:void(0)"><span aria-hidden="true"><svg viewBox="0 0 24 24"><path d="M3 3v18h18"/><path d="M7 15l4-4 3 3 5-6"/></svg></span><em>Marketing</em></a></li>
      <li><a href="javascript:void(0)"><span aria-hidden="true"><svg viewBox="0 0 24 24"><path d="M12 19l7-7 3 3-7 7-3-3z"/><path d="M18 13l-1.5-7.5L2 2l3.5 14.5L13 18l5-5z"/></svg></span><em>Portfolio</em></a></li>
      <li><a href="javascript:void(0)"><span aria-hidden="true"><svg viewBox="0 0 24 24"><circle cx="12" cy="8" r="4"/><path d="M4 21c0-4 4-6 8-6s8 2 8 6"/></svg></span><em>About Us</em></a></li>
      <li><a href="javascript:void(0)"><span aria-hidden="true"><svg viewBox="0 0 24 24"><path d="M4 4h16v16H4z"/><path d="M4 6l8 7 8-7"/></svg></span><em>Contact Us</em></a></li>
    </ul>
  </div>
</section>
    </main>

@endsection

@push('scripts')
<script>
  $(function () {

  // ---------- Package features: View all / View less ----------
  $('.ecomPackage-toggle').on('click', function () {
    var $btn   = $(this);
    var $more  = $btn.prev('.ecomPackage-more');
    var isOpen = $btn.hasClass('is-open');

    $more.stop(true, true).slideToggle(300);

    $btn
      .toggleClass('is-open', !isOpen)
      .attr('aria-expanded', !isOpen);

    $btn.find('.ecomPackage-toggle-text')
      .text(isOpen ? 'View all' : 'View less');
  });


  // ---------- Add-ons accordion (one open at a time) ----------
  $('.ecomPackage-addon-head').on('click', function () {
    var $head  = $(this);
    var $item  = $head.closest('.ecomPackage-addon');
    var isOpen = $item.hasClass('is-open');

    // close any other open item
    $item.siblings('.ecomPackage-addon.is-open').each(function () {
      $(this).removeClass('is-open');
      $(this).find('.ecomPackage-addon-head').attr('aria-expanded', 'false');
      $(this).find('.ecomPackage-addon-body').stop(true, true).slideUp(250);
    });

    // toggle the clicked one
    $item.toggleClass('is-open', !isOpen);
    $head.attr('aria-expanded', !isOpen);
    $item.find('.ecomPackage-addon-body').stop(true, true).slideToggle(250);
  });

});
</script>
@endpush