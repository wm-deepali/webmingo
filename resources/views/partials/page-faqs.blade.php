@if(isset($faqs) && $faqs->isNotEmpty())
  <section class="secN">
    <div class="container">
      <div class="heading">
        @isset($eyebrow)
          <span class="eyebrow"><span class="eyebrow-line"></span>{{ $eyebrow }}</span>
        @endisset

        <h3>{!! $title ?? 'Frequently Asked <span>Questions</span>' !!}</h3>

        @isset($intro)
          <p>{{ $intro }}</p>
        @endisset
      </div>

      <div class="accordion-wrapper">
        @foreach($faqs as $faq)
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
        @endforeach
      </div>
    </div>
  </section>
@endif