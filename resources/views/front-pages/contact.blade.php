@extends('layouts.app')

@push('styles')
  <link rel="stylesheet" href="{{ asset('assets/sass/contact/contact.css')}}" />
@endpush

@php
  // Uses the shared $settings if your app provides it, otherwise loads it here.
  $s = $settings ?? \App\Models\Setting::first();

  $contactEmail = $s->support_email ?: ($s->admin_email ?? null);
  $phone = $s->phone ?? null;
  $phoneHref = $phone ? preg_replace('/[^0-9+]/', '', $phone) : null;
  $whatsapp = $s->whatsapp ?? null;
  $waDigits = $whatsapp ? preg_replace('/\D/', '', $whatsapp) : null;
  $waHref = $waDigits ? 'https://wa.me/' . $waDigits : 'javascript:void(0)';
  $address = $s->business_address ?? null;
  $hours = $s->business_hours ?? null;
  $directions = $address
    ? 'https://www.google.com/maps/dir/?api=1&destination=' . urlencode($address)
    : 'javascript:void(0)';

  // Saved embed URL first; fallback builds an embed from the address (no API key needed).
  $mapSrc = !empty($s->google_map_url)
    ? $s->google_map_url
    : ($address ? 'https://www.google.com/maps?q=' . urlencode($address) . '&output=embed' : null);
@endphp

@section('content')
  <main>

    @include('partials.hero', [
      'video' => 'assets/video/effect8.mp4',
      'poster' => 'assets/video/poster/effect8.png',
      'default' => [
        'eyebrow' => 'CONTACT WEB MINGO',
        'heading' => "Have a Project in Mind? Let's Talk.",
        'description' => "Tell us what you're planning, what you need help with or where you're currently stuck. Our team will help you identify the right way forward.",
        'primary_text' => 'Chat on WhatsApp',
        'primary_url' => $waHref,
        'secondary_text' => 'Send Your Requirement',
        'secondary_url' => '#enquire',
      ],
    ])

    <!-- ===== 02 — CONTACT INFO CARDS ===== -->
    <section class="contact-cards">
      <div class="container">
        <div class="heading">
          <span class="eyebrow">
            <span class="eyebrow-line"></span>
            CONTACT WEB MINGO
          </span>
          <h3>Let's Start With <span>a Conversation.</span></h3>
          <p>
            Whether you have a project in mind, need help solving a digital
            challenge, or simply want to know more about Web Mingo, we'd love
            to hear from you.
          </p>
        </div>

        <div class="contact-cards__grid">

          @if($contactEmail)
            <a href="mailto:{{ $contactEmail }}" class="contact-card">
              <div class="contact-card__top">
                <span class="contact-card__icon">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6">
                    <rect x="3" y="5" width="18" height="14" rx="2" />
                    <path d="m3 7 9 6 9-6" />
                  </svg>
                </span>
                <span class="contact-card__index">01</span>
              </div>

              <div class="contact-card__body">
                <span class="contact-card__tag">Email</span>
                <h4>Have a project in mind?</h4>
                <span class="contact-card__value">{{ $contactEmail }}</span>
                <p>Start a conversation about your next digital project.</p>
              </div>

              <span class="contact-card__link">
                Send an Email
                <i>↗</i>
              </span>
            </a>
          @endif

          @if($phone)
            <a href="tel:{{ $phoneHref }}" class="contact-card">
              <div class="contact-card__top">
                <span class="contact-card__icon">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6">
                    <path
                      d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.127.96.362 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.338 1.85.573 2.81.7A2 2 0 0 1 22 16.92z" />
                  </svg>
                </span>
                <span class="contact-card__index">02</span>
              </div>

              <div class="contact-card__body">
                <span class="contact-card__tag">Call</span>
                <h4>Prefer to talk?</h4>
                <span class="contact-card__value">{{ $phone }}</span>
                <p>Give us a call and let's discuss what you're looking to build.</p>
              </div>

              <span class="contact-card__link">
                Call Web Mingo
                <i>↗</i>
              </span>
            </a>
          @endif

          @if($address)
            <a href="{{ $directions }}" target="_blank" rel="noopener" class="contact-card">
              <div class="contact-card__top">
                <span class="contact-card__icon">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6">
                    <path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z" />
                    <circle cx="12" cy="10" r="3" />
                  </svg>
                </span>
                <span class="contact-card__index">03</span>
              </div>

              <div class="contact-card__body">
                <span class="contact-card__tag">Visit</span>
                <h4>Come say hello.</h4>
                <span class="contact-card__value">{{ $address }}</span>
                <p>We're always happy to meet, talk ideas, and put faces to names.</p>
              </div>

              <span class="contact-card__link">
                Get Directions
                <i>↗</i>
              </span>
            </a>
          @endif

        </div>
      </div>
    </section>

    <!-- ===== 03 — CONTACT FORM + CLOUD VISUAL ===== -->
    <section class="contact-form" id="contact-form">
      <div class="container">
        <div class="contact-form__panel">
          <div class="contact-form__grid">
            <div class="contact-form__content">
              <div class="heading">
                <span class="eyebrow">
                  <span class="eyebrow-line"></span>
                  TELL US ABOUT YOUR PROJECT
                </span>
                <h3>What Are You <span>Building?</span></h3>
                <p>
                  Tell us a little about your idea, challenge, or project. You
                  don't need to have everything figured out — just give us
                  enough to start the conversation.
                </p>
              </div>

              {{-- Shown by JS after submit (success / error) --}}
              <div id="contactFormStatus" role="status" aria-live="polite"></div>

              {{-- No-JS fallback message --}}
              @if(session('success'))
                <div role="status"
                  style="background:#ecfdf3;border:1px solid #abefc6;color:#067647;padding:12px 16px;border-radius:10px;margin-bottom:18px;font-size:14px;">
                  {{ session('success') }}
                </div>
              @endif

              <form class="contact-form__form" id="contactForm" action="{{ route('contact.store') }}" method="POST"
                novalidate>
                @csrf

                {{-- Honeypot: hidden from people, bots fill it --}}
                <div style="position:absolute;left:-9999px;" aria-hidden="true">
                  <label for="hp_check">Leave this field empty</label>
                  <input type="text" id="hp_check" name="hp_check" tabindex="-1" autocomplete="new-password" />
                </div>

                <div class="form-row">
                  <div class="form-group">
                    <label for="fullName">Full Name *</label>
                    <input type="text" id="fullName" name="full_name" value="{{ old('full_name') }}" required />
                    @error('full_name')<small
                    style="color:#d92d20;display:block;margin-top:4px;">{{ $message }}</small>@enderror
                  </div>
                  <div class="form-group">
                    <label for="email">Email Address *</label>
                    <input type="email" id="email" name="email" value="{{ old('email') }}" required />
                    @error('email')<small
                    style="color:#d92d20;display:block;margin-top:4px;">{{ $message }}</small>@enderror
                  </div>
                </div>

                <div class="form-row">
                  <div class="form-group">
                    <label for="company">Company / Brand</label>
                    <input type="text" id="company" name="company" value="{{ old('company') }}" />
                    @error('company')<small
                    style="color:#d92d20;display:block;margin-top:4px;">{{ $message }}</small>@enderror
                  </div>
                  <div class="form-group">
                    <label for="phone">Mobile Number *</label>
                    <input type="tel" id="phone" name="phone" value="{{ old('phone') }}" inputmode="numeric"
                      autocomplete="tel" placeholder="10-digit mobile number" required />
                    <small style="color:#667085;display:block;margin-top:4px;">We'll send a one-time code to verify your
                      number.</small>
                    @error('phone')<small
                    style="color:#d92d20;display:block;margin-top:4px;">{{ $message }}</small>@enderror
                  </div>
                </div>

                <div class="form-group">
                  <label for="service">What can we help you with? *</label>
                  <select id="service" name="service" required>
                    <option value="" disabled {{ old('service') ? '' : 'selected' }}>Select a service</option>
                    @foreach([
                        'Website Design & Development',
                        'UI/UX Design',
                        'E-commerce',
                        'Digital Marketing',
                        'Branding',
                        'Mobile App Development',
                        'Something Else',
                      ] as $opt)
                      <option value="{{ $opt }}" {{ old('service') === $opt ? 'selected' : '' }}>{{ $opt }}</option>
                    @endforeach
                  </select>
                  @error('service')<small
                  style="color:#d92d20;display:block;margin-top:4px;">{{ $message }}</small>@enderror
                </div>

                <div class="form-group">
                  <label for="message">Tell us about your project *</label>
                  <textarea id="message" name="message" rows="5" required>{{ old('message') }}</textarea>
                  @error('message')<small
                  style="color:#d92d20;display:block;margin-top:4px;">{{ $message }}</small>@enderror
                </div>

                <button type="submit" class="btn btn-black">
                  Send Enquiry
                  <i>↗</i>
                </button>
              </form>
            </div>

            <div class="contact-form__visual">
              <div class="contact-form__cloud">
                <img src="https://images.unsplash.com/photo-1620121692029-d088224ddc74?auto=format&fit=crop&w=800&q=80"
                  alt="Web Mingo abstract cloud visual" />
              </div>
              <p class="contact-form__quote">
                Ideas start conversations. Great digital<br />work starts from there.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ===== 04 — MAP / FIND US ===== -->
    @if($mapSrc || $address || $hours)
      <section class="contact-map">
        <div class="container">
          <div class="heading">
            <span class="eyebrow">
              <span class="eyebrow-line"></span>
              FIND WEB MINGO
            </span>
            <h3>Come Find <span>Us.</span></h3>
            <p>
              Sometimes the best conversations happen face to face. Visit our
              office and let's talk ideas, projects, and possibilities.
            </p>
          </div>

          <div class="contact-map__grid">
            @if($mapSrc)
              <div class="contact-map__frame">
                <iframe src="{{ $mapSrc }}" width="100%" height="100%" style="border:0" allowfullscreen="" loading="lazy"
                  referrerpolicy="no-referrer-when-downgrade"
                  title="{{ $s->site_name ?? 'Web Mingo' }} office location"></iframe>
              </div>
            @endif

            <div class="contact-map__details">
              <h4>{{ $s->site_name ?? 'Web Mingo' }}</h4>

              @if($address)
                <p>{{ $address }}</p>
              @endif

              @if($hours)
                <div class="contact-map__hours">
                  <span class="hours-label">Working Hours</span>
                  <span class="hours-value">{{ $hours }}</span>
                </div>
              @endif

              @if($address)
                <a href="{{ $directions }}" target="_blank" rel="noopener" class="row-link">
                  Get Directions
                  <i>↗</i>
                </a>
              @endif
            </div>
          </div>
        </div>
      </section>
    @endif

    <!-- ===== 05 — FINAL CTA ===== -->
    <section class="cta-promo contact-cta">
      <div class="container">
        <div class="cta-promo__inner">
          <span class="cta-promo__eyebrow">LET'S MAKE SOMETHING GREAT</span>
          <h3 class="cta-promo__heading">Have an Idea? Let's Talk.</h3>
          <p class="cta-promo__sub">
            The first step doesn't need to be perfect. Tell us what you're
            thinking, and we'll take it from there.
          </p>
          <div class="cta-promo__actions">
            <a href="#contact-form" class="btn btn-white">
              Start a Conversation
              <i>↗</i>
            </a>
          </div>
        </div>
      </div>
    </section>
  </main>

  {{-- OTP step (verify / resend / skip) --}}
  @include('partials.otp-modal')

  <script>
    (function () {
      var form = document.getElementById('contactForm');
      // Without fetch the form posts normally (no OTP step) and still works
      if (!form || !window.fetch) { return; }

      var statusEl = document.getElementById('contactFormStatus');
      var btn = form.querySelector('button[type="submit"]');

      function setStatus(message, type) {
        if (!message) { statusEl.innerHTML = ''; return; }
        var ok = type === 'success';
        statusEl.innerHTML = '';
        var box = document.createElement('div');
        box.setAttribute('role', ok ? 'status' : 'alert');
        box.style.cssText = 'padding:12px 16px;border-radius:10px;margin-bottom:18px;font-size:14px;border:1px solid '
          + (ok ? '#abefc6;background:#ecfdf3;color:#067647;' : '#fecdca;background:#fef3f2;color:#b42318;');
        box.textContent = message;
        statusEl.appendChild(box);
      }

      function clearErrors() {
        var old = form.querySelectorAll('.js-field-error');
        for (var i = 0; i < old.length; i++) { old[i].parentNode.removeChild(old[i]); }
      }

      function showErrors(errors) {
        Object.keys(errors).forEach(function (name) {
          var field = form.querySelector('[name="' + name + '"]');
          var group = field ? field.closest('.form-group') : null;
          var el = document.createElement('small');
          el.className = 'js-field-error';
          el.style.cssText = 'color:#d92d20;display:block;margin-top:4px;';
          el.textContent = errors[name][0];
          (group || form).appendChild(el);
        });
      }

      function setBusy(busy) {
        btn.disabled = busy;
        btn.style.opacity = busy ? '.7' : '';
        btn.style.cursor = busy ? 'wait' : '';
      }

      function done(message) {
        form.reset();
        setStatus(message || "Thanks! We've received your enquiry and will get back to you shortly.", 'success');
        statusEl.scrollIntoView({ behavior: 'smooth', block: 'center' });
      }

      form.addEventListener('submit', function (e) {
        e.preventDefault();
        clearErrors();
        setStatus('');

        var fd = new FormData(form);
        fd.append('otp_ui', '1'); // tells the server this page can show the OTP step

        setBusy(true);

        fetch(form.action, {
          method: 'POST',
          body: fd,
          headers: { 'Accept': 'application/json', 'X-Requested-With': 'XMLHttpRequest' }
        })
          .then(function (r) {
            return r.json().catch(function () { return {}; }).then(function (data) {
              return { ok: r.ok, status: r.status, data: data };
            });
          })
          .then(function (res) {
            setBusy(false);

            if (res.status === 422 && res.data.errors) {
              showErrors(res.data.errors);
              setStatus('Please fix the highlighted fields.', 'error');
              return;
            }

            if (!res.ok || !res.data.success) {
              setStatus(res.data.message || 'Something went wrong. Please try again.', 'error');
              return;
            }

            if (res.data.requires_otp) {
              OtpFlow.open(res.data, { onVerified: done, onSkipped: done });
              return;
            }

            done(res.data.message);
          })
          .catch(function () {
            setBusy(false);
            setStatus('Network error. Please check your connection and try again.', 'error');
          });
      });
    })();
  </script>
@endsection