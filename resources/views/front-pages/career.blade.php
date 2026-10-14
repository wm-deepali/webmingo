@extends('layouts.app')

@push('styles')
    <link rel="stylesheet" href="assets/sass/career/career.css" />
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
            src="assets/video/about.mp4"
            poster="assets/video/poster/about.png"
          >
            <source src="assets/video/about.mp4" type="video/mp4" />
          </video>

          <div class="container">
            <div class="banner-wrapper">
  <div class="content">

    <span class="eyebrow">CAREERS AT WEB MINGO</span>

    <h1>
      Build Your Career While Building What Comes Next.
    </h1>

    <p>
      Join a team working across web development, mobile applications, digital
      marketing, design and emerging technologies.
    </p>

    <div class="banner-actions">
      <a href="#open-positions" class="btn btn-outline-white">
        View Open Positions
        <i>↗</i>
      </a>

      <a href="#open-positions" class="btn btn-white">
        Send Your CV
        <i>↗</i>
      </a>
    </div>

  </div>
</div>
            </div>
          </div>
        </div>
      </section>


<!-- ===== 02 — WHY JOIN WEB MINGO ===== -->
<section class="career-values">
  <div class="container">
    <div class="heading">
       <span class="eyebrow">
                <span class="eyebrow-line"></span>
                WHY WEB MINGO
              </span>
      <h3>Build Work That Matters. <span>Grow With People Who Care.</span></h3>
      <p>
        We bring together strategy, creativity, technology, and people who
        care about doing meaningful work. Here, your ideas have room to
        grow, your skills can keep evolving, and your contribution can
        make a real difference.
      </p>
    </div>

    <div class="career-values__features">
      <div class="feature">
        <span class="feature-num">01</span>
        <div class="feature-body">
          <h4>Work With Purpose</h4>
          <p>Create digital experiences that solve real problems and create measurable value.</p>
        </div>
      </div>
      <div class="feature">
        <span class="feature-num">02</span>
        <div class="feature-body">
          <h4>Grow Through Challenges</h4>
          <p>Take on meaningful problems that push you to learn, experiment, and become better at what you do.</p>
        </div>
      </div>
      <div class="feature">
        <span class="feature-num">03</span>
        <div class="feature-body">
          <h4>Work Together</h4>
          <p>Share ideas, challenge thinking, and learn from people with different skills and perspectives.</p>
        </div>
      </div>
      <div class="feature">
        <span class="feature-num">04</span>
        <div class="feature-body">
          <h4>Make Your Mark</h4>
          <p>Take ownership, bring your ideas forward, and see your work make an impact.</p>
        </div>
      </div>
    </div>
  </div>
</section>



<!-- ===== OPEN POSITIONS + APPLY ===== -->
<section class="career-jobs" id="open-positions">
  <div class="container">

    <div class="heading">
      <span class="eyebrow"><span class="eyebrow-line"></span>OPEN POSITIONS</span>
      <h3>Find Your Next <span>Opportunity.</span></h3>
      <p>Explore our current openings and find a role where your skills, ideas, and ambition can make an impact.</p>
    </div>

    <div class="career-jobs__layout">

      <!-- LEFT: Job Cards -->
      <div class="career-jobs__list-col">

        <div class="career-jobs__controls">
          <div class="career-jobs__search">
            <input type="text" id="jobSearch" placeholder="Search positions" />
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.3-4.3"/></svg>
          </div>
          <select id="jobDepartment" class="career-jobs__select">
            <option value="">All Departments</option>
            <option value="Development">Development</option>
            <option value="Design">Design</option>
            <option value="Marketing">Marketing</option>
            <option value="Business Development">Business Development</option>
          </select>
          <span class="career-jobs__count" id="jobCount">4 openings</span>
        </div>

        <div class="career-cards" id="jobList">

          <div class="career-card" data-department="Development" data-role="Senior Frontend Developer">
            <div class="career-card__top">
              <h4>Senior Frontend Developer</h4>
              <span class="career-card__tag">Development</span>
            </div>
            <div class="career-card__meta">
              <span><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 1 1 16 0Z"/><circle cx="12" cy="10" r="3"/></svg>Remote / Hybrid</span>
              <span><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="7" width="20" height="14" rx="2"/><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/></svg>Full-time</span>
            </div>
            <p>Build and maintain scalable, high-performance interfaces across our core product suite.</p>
            <a href="career-detail.html" class="btn btn-black career-card__apply">
              Apply Now
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M7 17 17 7M7 7h10v10"/></svg>
            </a>
          </div>

          <div class="career-card" data-department="Design" data-role="UI/UX Designer">
            <div class="career-card__top">
              <h4>UI/UX Designer</h4>
              <span class="career-card__tag">Design</span>
            </div>
            <div class="career-card__meta">
              <span><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 1 1 16 0Z"/><circle cx="12" cy="10" r="3"/></svg>Hybrid</span>
              <span><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="7" width="20" height="14" rx="2"/><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/></svg>Full-time</span>
            </div>
            <p>Own end-to-end design for new features — from research and wireframes to production-ready interfaces.</p>
            <a href="career-detail.html" class="btn btn-black career-card__apply">
              Apply Now
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M7 17 17 7M7 7h10v10"/></svg>
            </a>
          </div>

          <div class="career-card" data-department="Marketing" data-role="Digital Marketing Strategist">
            <div class="career-card__top">
              <h4>Digital Marketing Strategist</h4>
              <span class="career-card__tag">Marketing</span>
            </div>
            <div class="career-card__meta">
              <span><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 1 1 16 0Z"/><circle cx="12" cy="10" r="3"/></svg>Remote</span>
              <span><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="7" width="20" height="14" rx="2"/><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/></svg>Full-time</span>
            </div>
            <p>Shape campaigns, positioning, and messaging that connect us with new audiences.</p>
            <a href="career-detail.html" class="btn btn-black career-card__apply">
              Apply Now
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M7 17 17 7M7 7h10v10"/></svg>
            </a>
          </div>

          <div class="career-card" data-department="Business Development" data-role="Business Development Executive">
            <div class="career-card__top">
              <h4>Business Development Executive</h4>
              <span class="career-card__tag">Business Dev.</span>
            </div>
            <div class="career-card__meta">
              <span><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 1 1 16 0Z"/><circle cx="12" cy="10" r="3"/></svg>Onsite</span>
              <span><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="7" width="20" height="14" rx="2"/><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/></svg>Full-time</span>
            </div>
            <p>Identify new opportunities and help grow our partner and client base.</p>
            <a href="career-detail.html" class="btn btn-black career-card__apply">
              Apply Now
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M7 17 17 7M7 7h10v10"/></svg>
            </a>
          </div>

        </div>

        <p class="career-jobs__empty" id="jobEmpty" hidden>No positions match your search right now.</p>
      </div>

      <!-- RIGHT: Sticky Apply Form -->
      <aside class="career-apply" id="career-apply">
        <form class="career-form" action="" method="POST" enctype="multipart/form-data">

          <div class="career-form__head">
            <span class="career-form__tag">Apply Now</span>
            <h4>Ready to join <span>our team?</span></h4>
            <p>Fill in your details below and our team will get back to you shortly.</p>
          </div>

        <div class="career-form__section">
  <span class="career-form__label">01 · Application Type</span>
  <div class="career-form__grid career-form__grid--type">
    <div class="form-group">
      <label for="apply-type">Applying For <sup>*</sup></label>
      <select id="apply-type" name="apply_type" required>
        <option value="Job">Job</option>
        <option value="Internship">Internship</option>
      </select>
    </div>

    <div class="form-group">
      <label for="position">Position <sup>*</sup></label>
      <select id="position" name="position" required>
        <option value="">Select a position</option>
        <option value="Senior Frontend Developer">Senior Frontend Developer</option>
        <option value="UI/UX Designer">UI/UX Designer</option>
        <option value="Digital Marketing Strategist">Digital Marketing Strategist</option>
        <option value="Business Development Executive">Business Development Executive</option>
        <option value="Other">Other</option>
      </select>
    </div>
  </div>
</div>

          <div class="career-form__section">
            <span class="career-form__label">02 · Personal Details</span>
            <div class="career-form__grid">
              <div class="form-group form-group--full">
                <label for="full-name">Full Name <sup>*</sup></label>
                <input type="text" id="full-name" name="name" placeholder="Enter your full name" required />
              </div>

              <div class="form-group form-group--full">
                <label for="email">Email <sup>*</sup></label>
                <input type="email" id="email" name="email" placeholder="Enter your email" required />
              </div>

              <div class="form-group">
                <label for="phone">Phone <sup>*</sup></label>
                <input type="tel" id="phone" name="phone" placeholder="Enter your phone number" required />
              </div>

              <div class="form-group">
                <label for="experience">Experience</label>
                <select id="experience" name="experience">
                  <option value="">Select</option>
                  <option value="student">Currently Studying</option>
                  <option value="0-1">0–1 Years</option>
                  <option value="1-3">1–3 Years</option>
                  <option value="3-5">3–5 Years</option>
                  <option value="5+">5+ Years</option>
                </select>
              </div>
            </div>
          </div>

          <div class="career-form__section">
            <span class="career-form__label">03 · Application Documents</span>

            <div class="form-group">
              <div class="file-upload">
                <input type="file" id="resume" name="resume" accept=".pdf,.doc,.docx" required />
                <div class="file-upload__content">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><path d="M17 8 12 3 7 8"/><path d="M12 3v12"/></svg>
                  <div>
                    <strong>Upload your resume</strong>
                    <span>PDF, DOC or DOCX · Max 5MB</span>
                  </div>
                </div>
              </div>
            </div>

            <div class="form-group">
              <label for="cover-letter">Cover Letter</label>
              <textarea id="cover-letter" name="cover_letter" rows="4" placeholder="Tell us briefly why you're a good fit for this role..."></textarea>
            </div>
          </div>

          <div class="career-form__footer">
            <label class="career-checkbox">
              <input type="checkbox" name="consent" required />
              <span></span>
              <p>I agree to be contacted regarding this application.</p>
            </label>

            <button type="submit" class="btn btn-black">
              Submit Application <i>↗</i>
            </button>

            <p class="career-form__privacy">
              We respect your privacy. Your details are safe with us.
            </p>
          </div>

        </form>
      </aside>

    </div>
  </div>
</section>



<!-- ===== 10 — FINAL CTA ===== -->
<section class="cta-promo career-cta">
  <div class="container">
    <div class="cta-promo__inner">
      <span class="cta-promo__eyebrow">JOIN WEB MINGO</span>
      <h3 class="cta-promo__heading">Ready to Build Something Meaningful?</h3>
      <p class="cta-promo__sub">
        Bring your ideas, curiosity, and ambition. Find your place at
        Web Mingo and grow with a team that believes great work starts
        with great people.
      </p>
      <div class="cta-promo__actions">
        <a href="#open-positions" class="btn btn-white">
          View Open Positions
          <i>↗</i>
        </a>
      </div>
    </div>
  </div>
</section>
    </main>
@endsection