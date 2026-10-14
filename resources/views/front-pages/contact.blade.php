@extends('layouts.app')

@push('styles')
    <link rel="stylesheet" href="assets/sass/contact/contact.css" />
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

    <span class="eyebrow">CONTACT WEB MINGO</span>

    <h1>
      Have a Project in Mind? Let's Talk.
    </h1>

    <p>
      Tell us what you're planning, what you need help with or where you're
      currently stuck. Our team will help you identify the right way forward.
    </p>

    <div class="banner-actions">
      <a href="javascript:void(0)" class="btn btn-outline-white">
        Chat on WhatsApp
        <i>↗</i>
      </a>

      <button data-model=".enquire-pop" class="btn btn-white">
        Send Your Requirement
        <i>↗</i>
      </button>
    </div>

  </div>
</div>
            </div>
          </div>
        </div>
      </section>
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

      <a href="mailto:hello@webmingo.com" class="contact-card">
        <div class="contact-card__top">
          <span class="contact-card__icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><rect x="3" y="5" width="18" height="14" rx="2"/><path d="m3 7 9 6 9-6"/></svg>
          </span>
          <span class="contact-card__index">01</span>
        </div>

        <div class="contact-card__body">
          <span class="contact-card__tag">Email</span>
          <h4>Have a project in mind?</h4>
          <span class="contact-card__value">hello@webmingo.com</span>
          <p>Start a conversation about your next digital project.</p>
        </div>

        <span class="contact-card__link">
          Send an Email
          <i>↗</i>
        </span>
      </a>

      <a href="tel:+91XXXXXXXXXX" class="contact-card">
        <div class="contact-card__top">
          <span class="contact-card__icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.127.96.362 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.338 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
          </span>
          <span class="contact-card__index">02</span>
        </div>

        <div class="contact-card__body">
          <span class="contact-card__tag">Call</span>
          <h4>Prefer to talk?</h4>
          <span class="contact-card__value">+91 XXX XXX XXXX</span>
          <p>Give us a call and let's discuss what you're looking to build.</p>
        </div>

        <span class="contact-card__link">
          Call Web Mingo
          <i>↗</i>
        </span>
      </a>

      <a href="javascript:void(0)" class="contact-card">
        <div class="contact-card__top">
          <span class="contact-card__icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/><circle cx="12" cy="10" r="3"/></svg>
          </span>
          <span class="contact-card__index">03</span>
        </div>

        <div class="contact-card__body">
          <span class="contact-card__tag">Visit</span>
          <h4>Come say hello.</h4>
          <span class="contact-card__value">Your office address, City</span>
          <p>We're always happy to meet, talk ideas, and put faces to names.</p>
        </div>

        <span class="contact-card__link">
          Get Directions
          <i>↗</i>
        </span>
      </a>

    </div>
  </div>
</section>

<!-- ===== 03 — CONTACT FORM + CLOUD VISUAL ===== -->
<section class="contact-form">
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

          <form class="contact-form__form">
            <div class="form-row">
              <div class="form-group">
                <label for="fullName">Full Name *</label>
                <input type="text" id="fullName" name="fullName" required />
              </div>
              <div class="form-group">
                <label for="email">Email Address *</label>
                <input type="email" id="email" name="email" required />
              </div>
            </div>

            <div class="form-row">
              <div class="form-group">
                <label for="company">Company / Brand</label>
                <input type="text" id="company" name="company" />
              </div>
              <div class="form-group">
                <label for="phone">Phone Number</label>
                <input type="tel" id="phone" name="phone" />
              </div>
            </div>

            <div class="form-group">
              <label for="service">What can we help you with? *</label>
              <select id="service" name="service" required>
                <option value="" selected disabled>Select a service</option>
                <option value="Website Design & Development">Website Design &amp; Development</option>
                <option value="UI/UX Design">UI/UX Design</option>
                <option value="E-commerce">E-commerce</option>
                <option value="Digital Marketing">Digital Marketing</option>
                <option value="Branding">Branding</option>
                <option value="Mobile App Development">Mobile App Development</option>
                <option value="Something Else">Something Else</option>
              </select>
            </div>

            <div class="form-group">
              <label for="message">Tell us about your project *</label>
              <textarea id="message" name="message" rows="5" required></textarea>
            </div>

            <button type="submit" class="btn btn-black">
              Send Enquiry
              <i>↗</i>
            </button>
          </form>
        </div>

        <div class="contact-form__visual">
         <div class="contact-form__cloud">
  <img src="https://images.unsplash.com/photo-1620121692029-d088224ddc74?auto=format&fit=crop&w=800&q=80" alt="Web Mingo abstract cloud visual" />
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
      <div class="contact-map__frame">
        <iframe
          src="https://www.google.com/maps/embed?pb=YOUR_EMBED_LINK"
          width="100%"
          height="100%"
          style="border:0"
          allowfullscreen=""
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"
          title="Web Mingo office location"
        ></iframe>
      </div>

      <div class="contact-map__details">
        <h4>Web Mingo</h4>
        <p>Your complete office address, City, State, ZIP</p>

        <div class="contact-map__hours">
          <span class="hours-label">Monday – Friday</span>
          <span class="hours-value">Your working hours</span>
        </div>

        <a href="javascript:void(0)" class="row-link">
          Get Directions
          <i>↗</i>
        </a>
      </div>
    </div>
  </div>
</section>

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
        <a href="javascript:void(0)" class="btn btn-white">
          Start a Conversation
          <i>↗</i>
        </a>
      </div>
    </div>
  </div>
</section>
    </main>
@endsection