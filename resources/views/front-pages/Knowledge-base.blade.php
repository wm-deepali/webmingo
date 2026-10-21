@extends('layouts.app')

@push('styles')
  <link rel="stylesheet" href="assets/sass/knowledge-base/knowledge.css" />
@endpush

@section('content')


  <main>
    <!-- =========================================================
           BANNER — COMMON
      ========================================================== -->

    @include('partials.hero', [
      'video' => 'assets/video/effect8.mp4',
      'poster' => 'assets/video/poster/effect8.png',
      'default' => [
        'eyebrow' => 'KNOWLEDGE BASE',
        'heading' => 'Find Answers. Learn. Solve It Faster.',
        'description' => 'Access practical guides, how-to resources and answers to help you understand and manage your digital platforms better.',
        'primary_text' => 'Browse Knowledge Base',
        'primary_url' => '#knowledge-base',
        'secondary_text' => 'Search for an Answer',
        'secondary_url' => 'javascript:void(0)',
      ],
    ])

    <!-- =========================================================
         01 — KNOWLEDGE BASE INTRO
    ========================================================== -->
    <section class="kb-intro" id="knowledge-base">
      <div class="container">
        <div class="heading">
          <span class="eyebrow">
            <span class="eyebrow-line"></span>
            EXPLORE OUR KNOWLEDGE BASE
          </span>

          <h3>
            Clear Answers.
            <span>Practical Solutions.</span>
          </h3>

          <p>
            Practical answers to the digital questions businesses face every
            day. Choose a topic below or browse everything to find a solution
            that fits your situation.
          </p>
        </div>

        <!-- COMMON TAB NAV (dynamic) -->
        <ul class="tab-nav kb-tabs">
          <li class="active" data-tab="all">All</li>

          @foreach ($categories as $category)
            <li data-tab="{{ $category->slug }}">{{ $category->name }}</li>
          @endforeach
        </ul>
      </div>
    </section>

    <!-- =========================================================
         02 — KNOWLEDGE BASE ARTICLES
    ========================================================== -->
    <section class="kb-main" id="kb-articles">
      <div class="container">
        <div class="kb-grid">
          <!-- ===============================================
               LEFT — ARTICLES
          ================================================ -->
          <div class="kb-articles">
            <div class="tab-nav-content kb-category-content">

              {{-- One panel per category. "All" activates every panel together. --}}
              @forelse ($categories as $category)
                <div class="tabs active" data-tab="{{ $category->slug }}">

                  @foreach ($category->articles as $article)
                    <article class="kb-article">
                      <span class="kb-article__tag"> {{ strtoupper($category->name) }} </span>

                      <h4 class="kb-article__title">
                        {{ $article->title }}
                      </h4>

                      <p class="kb-article__desc">
                        {{ $article->short_description }}
                      </p>

                      <button type="button" class="kb-article__toggle" aria-expanded="false">
                        <span class="txt-more">Read More</span>
                        <span class="txt-less">Read Less</span>
                        <i>↗</i>
                      </button>

                      <div class="kb-article__answer">
                        <div class="kb-answer-inner">

                          {!! $article->content !!}

                          @if ($article->cta_text)
                            <div class="kb-article__cta">
                              <p>{{ $article->cta_text }}</p>

                              <button type="button" data-model=".enquire-pop" class="btn btn-black">
                                {{ $article->cta_button_text ?: 'Talk To Us' }} <i>↗</i>
                              </button>
                            </div>
                          @endif

                        </div>
                      </div>
                    </article>
                  @endforeach

                </div>
              @empty
                <p>No articles available right now. Please check back soon.</p>
              @endforelse

            </div>
          </div>

          <!-- ===============================================
               RIGHT — STICKY CONSULTATION FORM
          ================================================ -->
          <aside class="kb-sidebar">
            <div class="kb-form">
              <span class="sec-label"> NEED HELP WITH YOUR PROJECT? </span>

              <h3>Get A Free Consultation</h3>

              <form class="kb-form__fields" id="kbEnquiryForm" action="{{ route('knowledge-base.enquiry') }}"
                method="post">
                @csrf

                <div class="field">
                  <input type="text" name="name" placeholder="Your Name" required />
                </div>

                <div class="field">
                  <input type="email" name="email" placeholder="Your Email" required />
                </div>

                <div class="field">
                  <input type="tel" name="phone" placeholder="Your Phone Number" />
                </div>

                <div class="field">
                  <select name="need" required>
                    <option value="" disabled selected>
                      What Do You Need Help With?
                    </option>

                    <option value="website">Website</option>

                    <option value="ecommerce">E-Commerce</option>

                    <option value="web-application">Web Application</option>

                    <option value="seo">SEO</option>

                    <option value="digital-marketing">
                      Digital Marketing
                    </option>

                    <option value="redesign">Website Redesign</option>

                    <option value="security">Security</option>

                    <option value="maintenance">Maintenance</option>

                    <option value="other">Other</option>
                  </select>
                </div>

                <div class="field">
                  <textarea name="message" rows="4" placeholder="Tell us briefly about your requirement..."
                    required></textarea>
                </div>

                <button type="submit" class="btn btn-black kb-form__submit">Get A Free Consultation
                  <i>↗</i>
                </button>

                <div class="kb-form__msg" style="display:none;margin-top:12px;font-size:14px;"></div>
              </form>

              <span class="kb-form__note">
                No obligation. Just a conversation about your requirements.
              </span>
            </div>
          </aside>
        </div>
      </div>
    </section>

    <div class="container">
      <div class="cta-promo">
        <div class="cta-promo__inner">
          <span class="cta-promo__eyebrow">STILL HAVE QUESTIONS?</span>

          <h3 class="cta-promo__heading">
            Get Clear Answers For Your Digital Challenges.
          </h3>

          <p class="cta-promo__sub">
            If you cannot find the answer you are looking for, talk to our
            team. We can understand your requirement, explain the options and
            help you identify the right next step for your business.
          </p>

          <div class="cta-promo__actions">
            <button class="btn btn-white" data-model=".enquire-pop">
              Get A Free Consultation <i>↗</i>
            </button>

            <a href="javascript:void(0)" class="btn btn-outline-white">
              Talk To Our Team <i>↗</i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </main>

@endsection

@push('scripts')
  <script>
    $(function () {
      /* ==========================================================
   COMMON TAB NAVIGATION
  ========================================================== */

      $(".tab-nav li").on("click", function () {
        var tab = $(this).data("tab");

        $(this).addClass("active").siblings().removeClass("active");

        /* ALL TAB: show every category panel */
        if (tab === "all") {
          $(".kb-category-content > .tabs").addClass("active");

          return;
        }

        /* NORMAL CATEGORY TAB */
        var $target = $(
          '.kb-category-content > .tabs[data-tab="' + tab + '"]',
        );

        if ($target.length) {
          $target.addClass("active").siblings(".tabs").removeClass("active");
        } else {
          $(".kb-category-content > .tabs").removeClass("active");
        }
      });

      /* ==========================================================
   READ MORE / READ LESS
  ========================================================== */

      $(".kb-article__toggle").on("click", function () {
        var $btn = $(this);
        var $article = $btn.closest(".kb-article");
        var $answer = $article.find(".kb-article__answer");
        var isOpen = $article.hasClass("is-active");

        /* CLOSE OTHER OPEN ARTICLES */
        $(".kb-article.is-active")
          .not($article)
          .each(function () {
            var $other = $(this);

            $other.removeClass("is-active");
            $other.find(".kb-article__toggle").attr("aria-expanded", "false");
            $other.find(".kb-article__answer").stop(true, true).slideUp(250);
          });

        /* CLOSE CURRENT ARTICLE */
        if (isOpen) {
          $article.removeClass("is-active");
          $btn.attr("aria-expanded", "false");
          $answer.stop(true, true).slideUp(250);

          return;
        }

        /* OPEN CURRENT ARTICLE */
        $article.addClass("is-active");
        $btn.attr("aria-expanded", "true");
        $answer.stop(true, true).slideDown(250);
      });
    });

    /* ==========================================================
   CONSULTATION FORM (vanilla fetch)
  ========================================================== */

    (function () {
      var form = document.getElementById("kbEnquiryForm");
      if (!form) return;

      var msg = form.querySelector(".kb-form__msg");
      var btn = form.querySelector(".kb-form__submit");
      var defaultHtml = btn.innerHTML; // keeps the text and the arrow icon

      function showMessage(text, ok) {
        msg.style.display = "block";
        msg.style.color = ok ? "#1a7f37" : "#c62828";
        msg.textContent = text;
      }

      form.addEventListener("submit", function (e) {
        e.preventDefault();

        btn.disabled = true;
        btn.textContent = "Sending...";
        msg.style.display = "none";

        fetch(form.action, {
          method: "POST",
          headers: {
            "X-Requested-With": "XMLHttpRequest",
            "Accept": "application/json",
          },
          body: new FormData(form),
        })
          .then(function (res) {
            return res.json().then(function (data) {
              return { status: res.status, data: data };
            });
          })
          .then(function (result) {
            if (result.status === 200 && result.data.success) {
              form.reset();
              showMessage(result.data.message, true);
            } else if (result.status === 422 && result.data.errors) {
              var first = Object.values(result.data.errors)[0][0];
              showMessage(first, false);
            } else if (result.status === 429) {
              showMessage("Too many attempts. Please try again in a minute.", false);
            } else {
              showMessage("Something went wrong. Please try again.", false);
            }
          })
          .catch(function () {
            showMessage("Something went wrong. Please try again.", false);
          })
          .finally(function () {
            btn.disabled = false;
            btn.innerHTML = defaultHtml;
          });
      });
    })();
  </script>
@endpush