@extends('layouts.app')

@push('styles')
  <link rel="stylesheet" href="{{ asset('assets/sass/faq/faq.css')}}" />
@endpush

@section('content')

  <main>
    <section class="banner">
      <div class="bg">
        <video autoplay muted loop playsinline class="bg-video" src="{{ asset('assets/video/effect8.mp4')}}"
          poster="{{ asset('assets/video/poster/effect8.png')}}">
          <source src="{{ asset('assets/video/effect8.mp4')}}" type="video/mp4" />
        </video>

        <div class="container">
          <div class="banner-wrapper">
            <div class="content">
              <span class="eyebrow">FREQUENTLY ASKED QUESTIONS</span>

              <h1>Questions? Start Here.</h1>

              <p>
                Find answers about our services, development process,
                timelines, pricing, support and working with Web Mingo.
              </p>

              <div class="banner-actions">
                <a href="javascript:void(0)" class="btn btn-outline-white">
                  Chat on WhatsApp
                  <i>↗</i>
                </a>

                <button data-model=".enquire-pop" class="btn btn-white">
                  Ask Us a Question
                  <i>↗</i>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="indu-secL">
      <div class="container">
        <div class="heading">
          <h3>
            Everything You Need to
            <span>Know Before We Get Started.</span>
          </h3>

          <p>
            Get answers to common questions about our services, development
            process, technology, timelines and ongoing support.
          </p>
        </div>

        <div class="indu-secL-main">
          <!-- =====================================================
                 STICKY INTRO
            ====================================================== -->

          <div class="indu-secL-side">
            <div class="indu-secL-side-inner">
              <span class="indu-secL-eyebrow"> STILL HAVE QUESTIONS? </span>

              <h4>
                Let's Talk About
                <span>Your Project.</span>
              </h4>

              <p>
                Whether you're planning a new website, redesigning an existing
                platform, or looking for a custom digital solution, we're here
                to help you figure out the right approach.
              </p>

              <button type="button" data-model=".enquire-pop" class="btn btn-primary">
                Start a Conversation <i>↗</i>
              </button>
            </div>
          </div>

          <!-- =====================================================
                 FAQ ACCORDION
            ====================================================== -->

          <div class="accordion-wrapper">
            @forelse($faqs as $faq)
              <div class="accordion-item">
                <div class="accordion-header">
                  <div class="faq-question">
                    <h4>{{ $faq->question }}</h4>
                  </div>
                  <span class="accordion-icon">+</span>
                </div>

                <div class="accordion-content">
                  <p>{!! nl2br(e($faq->answer)) !!}</p>
                </div>
              </div>
            @empty
              <p>No FAQs available right now.</p>
            @endforelse
          </div>
        </div>
      </div>
    </section>

    <div class="container">
      <div class="cta-promo">
        <div class="cta-promo__inner">
          <span class="cta-promo__eyebrow">Need More Help?</span>

          <h3 class="cta-promo__heading">
            Let’s Find the<br />
            Right Solution for You.
          </h3>

          <p class="cta-promo__sub">
            Every business is different. Tell us what you’re looking to
            achieve, and our team will help you understand the right approach
            for your digital goals.
          </p>

          <div class="cta-promo__actions">
            <button class="btn btn-white" data-model=".enquire-pop">
              Get FREE Consultation
            </button>

            <a href="javascript:void()" class="btn btn-outline-white">
              Chat on WhatsApp
            </a>
          </div>
        </div>
      </div>
    </div>
  </main>

@endsection