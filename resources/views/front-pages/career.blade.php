@extends('layouts.app')

@section('title', 'Careers | Web Mingo')

@section('meta')
  <meta name="description"
    content="Explore current job and internship openings at Web Mingo across development, design, marketing and business development." />
  <link rel="canonical" href="{{ url()->current() }}" />
@endsection

@push('styles')
  <link rel="stylesheet" href="{{ asset('assets/sass/career/career.css') }}" />
@endpush

@section('content')
  <main>

    @include('partials.hero', [
      'video' => 'assets/video/about.mp4',
      'poster' => 'assets/video/poster/about.png',
      'default' => [
        'eyebrow' => 'CAREERS AT WEB MINGO',
        'heading' => 'Build Your Career While Building What Comes Next.',
        'description' => 'Join a team working across web development, mobile applications, digital marketing, design and emerging technologies.',
        'primary_text' => 'View Open Positions',
        'primary_url' => '#open-positions',
        'secondary_text' => 'Send Your CV',
        'secondary_url' => '#career-apply',
      ],
    ])


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
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round">
                  <circle cx="11" cy="11" r="8" />
                  <path d="m21 21-4.3-4.3" />
                </svg>
              </div>

              <select id="jobDepartment" class="career-jobs__select">
                <option value="">All Departments</option>
                @foreach ($departments as $department)
                  <option value="{{ $department }}">{{ $department }}</option>
                @endforeach
              </select>

              <span class="career-jobs__count" id="jobCount">
                {{ $careers->count() }} {{ \Illuminate\Support\Str::plural('opening', $careers->count()) }}
              </span>
            </div>

            <div class="career-cards" id="jobList">

              @foreach ($careers as $career)
                <div class="career-card" data-department="{{ $career->department }}" data-role="{{ $career->title }}">
                  <div class="career-card__top">
                    <h4>{{ $career->title }}</h4>
                    <span class="career-card__tag">{{ $career->department }}</span>
                  </div>

                  <div class="career-card__meta">
                    @if ($career->work_mode)
                      <span><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                          stroke-linejoin="round">
                          <path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 1 1 16 0Z" />
                          <circle cx="12" cy="10" r="3" />
                        </svg>{{ $career->work_mode }}</span>
                    @endif
                    <span><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
                        <rect x="2" y="7" width="20" height="14" rx="2" />
                        <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16" />
                      </svg>{{ $career->employment_type }}</span>
                  </div>

                  @if ($career->short_description)
                    <p>{{ $career->short_description }}</p>
                  @endif

                  <a href="{{ route('career-detail', $career->slug) }}" class="btn btn-black career-card__apply">
                    Apply Now
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                      stroke-linejoin="round">
                      <path d="M7 17 17 7M7 7h10v10" />
                    </svg>
                  </a>
                </div>
              @endforeach

            </div>

            <p class="career-jobs__empty" id="jobEmpty" hidden>No positions match your search right now.</p>

            @if ($careers->isEmpty())
              <p class="career-jobs__empty">
                We do not have any open positions right now. You can still
                <a href="{{ route('contact') }}">contact us</a> and share your profile.
              </p>
            @endif
          </div>

          <!-- RIGHT: Sticky Apply Form -->
          <aside class="career-apply" id="career-apply">
            {{-- Shown by JS after submit (success / error) --}}
            <div id="careerFormStatus" role="status" aria-live="polite"></div>

            {{-- No-JS fallback message --}}
            @if (session('success'))
              <div role="status"
                style="background:#ecfdf3;border:1px solid #abefc6;color:#067647;padding:12px 16px;border-radius:10px;margin-bottom:18px;font-size:14px;">
                {{ session('success') }}
              </div>
            @endif

            <form class="career-form" id="careerForm" action="{{ route('career.apply') }}" method="POST"
              enctype="multipart/form-data">
              @csrf

              {{-- Honeypot: hidden from people, bots fill it --}}
              <div style="position:absolute;left:-9999px;" aria-hidden="true">
                <label for="hp_check">Leave this field empty</label>
                <input type="text" id="hp_check" name="hp_check" tabindex="-1" autocomplete="new-password" />
              </div>

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
                      <option value="Job" {{ old('apply_type', 'Job') === 'Job' ? 'selected' : '' }}>Job</option>
                      <option value="Internship" {{ old('apply_type') === 'Internship' ? 'selected' : '' }}>Internship
                      </option>
                    </select>
                    @error('apply_type')<small
                    style="color:#d92d20;display:block;margin-top:4px;">{{ $message }}</small>@enderror
                  </div>

                  <div class="form-group">
                    <label for="position">Position <sup>*</sup></label>
                    <select id="position" name="position" required>
                      <option value="">Select a position</option>
                      @foreach ($careers as $career)
                        <option value="{{ $career->title }}" {{ old('position') === $career->title ? 'selected' : '' }}>
                          {{ $career->title }}</option>
                      @endforeach
                      <option value="Other" {{ old('position') === 'Other' ? 'selected' : '' }}>Other</option>
                    </select>
                    @error('position')<small
                    style="color:#d92d20;display:block;margin-top:4px;">{{ $message }}</small>@enderror
                  </div>
                </div>
              </div>

              <div class="career-form__section">
                <span class="career-form__label">02 · Personal Details</span>
                <div class="career-form__grid">
                  <div class="form-group form-group--full">
                    <label for="full-name">Full Name <sup>*</sup></label>
                    <input type="text" id="full-name" name="name" value="{{ old('name') }}"
                      placeholder="Enter your full name" required />
                    @error('name')<small
                    style="color:#d92d20;display:block;margin-top:4px;">{{ $message }}</small>@enderror
                  </div>

                  <div class="form-group form-group--full">
                    <label for="email">Email <sup>*</sup></label>
                    <input type="email" id="email" name="email" value="{{ old('email') }}" placeholder="Enter your email"
                      required />
                    @error('email')<small
                    style="color:#d92d20;display:block;margin-top:4px;">{{ $message }}</small>@enderror
                  </div>

                  <div class="form-group">
                    <label for="phone">Mobile Number <sup>*</sup></label>
                    <input type="tel" id="phone" name="phone" value="{{ old('phone') }}" inputmode="numeric"
                      autocomplete="tel" placeholder="10-digit mobile number" required />
                    <small style="color:#667085;display:block;margin-top:4px;">We'll send a one-time code to verify your
                      number.</small>
                    @error('phone')<small
                    style="color:#d92d20;display:block;margin-top:4px;">{{ $message }}</small>@enderror
                  </div>

                  <div class="form-group">
                    <label for="experience">Experience</label>
                    <select id="experience" name="experience">
                      <option value="">Select</option>
                      @foreach (['student' => 'Currently Studying', '0-1' => '0–1 Years', '1-3' => '1–3 Years', '3-5' => '3–5 Years', '5+' => '5+ Years'] as $val => $label)
                        <option value="{{ $val }}" {{ old('experience') === $val ? 'selected' : '' }}>{{ $label }}</option>
                      @endforeach
                    </select>
                    @error('experience')<small
                    style="color:#d92d20;display:block;margin-top:4px;">{{ $message }}</small>@enderror
                  </div>
                </div>
              </div>

              <div class="career-form__section">
                <span class="career-form__label">03 · Application Documents</span>

                <div class="form-group">
                  <div class="file-upload">
                    <input type="file" id="resume" name="resume" accept=".pdf,.doc,.docx" required />
                    <div class="file-upload__content">
                      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4" />
                        <path d="M17 8 12 3 7 8" />
                        <path d="M12 3v12" />
                      </svg>
                      <div>
                        <strong>Upload your resume</strong>
                        <span>PDF, DOC or DOCX · Max 5MB</span>
                      </div>
                    </div>
                  </div>
                  @error('resume')<small
                  style="color:#d92d20;display:block;margin-top:4px;">{{ $message }}</small>@enderror
                </div>

                <div class="form-group">
                  <label for="cover-letter">Cover Letter</label>
                  <textarea id="cover-letter" name="cover_letter" rows="4"
                    placeholder="Tell us briefly why you're a good fit for this role...">{{ old('cover_letter') }}</textarea>
                  @error('cover_letter')<small
                  style="color:#d92d20;display:block;margin-top:4px;">{{ $message }}</small>@enderror
                </div>
              </div>

              <div class="career-form__footer">
                <label class="career-checkbox">
                  <input type="checkbox" name="consent" value="1" {{ old('consent') ? 'checked' : '' }} required />
                  <span></span>
                  <p>I agree to be contacted regarding this application.</p>
                </label>
                @error('consent')<small
                style="color:#d92d20;display:block;margin-top:4px;">{{ $message }}</small>@enderror

                <button type="submit" class="btn btn-black">
                  Submit Application <i>↗</i>
                </button>

                <p class="career-form__privacy">
                  We respect your privacy. Your details are safe with us.
                </p>
              </div>

            </form>

            @if (session('success') || $errors->any())
              <script>
                document.getElementById('career-apply')?.scrollIntoView({ behavior: 'smooth', block: 'start' });
              </script>
            @endif
          </aside>

        </div>
      </div>
    </section>

    <!-- ===== FINAL CTA ===== -->
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

  {{-- OTP step (verify / resend / skip) + AJAX submit for the apply form --}}
  @include('partials.otp-modal')
  @include('partials.career-form-script')
@endsection