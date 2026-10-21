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

        <!-- COMMON TAB NAV -->
        <ul class="tab-nav kb-tabs">
          <li class="active" data-tab="all">All</li>

          <li data-tab="websites">Websites</li>

          <li data-tab="ecommerce">E-Commerce</li>

          <li data-tab="seo">SEO</li>

          <li data-tab="web-applications">Web Applications</li>

          <li data-tab="digital-marketing">Digital Marketing</li>

          <li data-tab="security">Security</li>

          <li data-tab="hosting-maintenance">Hosting &amp; Maintenance</li>
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
              <!-- =========================================
                   ALL
                   All category panels active together
              ========================================== -->
              <div class="tabs active" data-tab="all">
                <!-- ARTICLE 01 -->
                <article class="kb-article">
                  <span class="kb-article__tag"> WEBSITES </span>

                  <h4 class="kb-article__title">
                    Why Is My Website Getting Visitors But No Enquiries?
                  </h4>

                  <p class="kb-article__desc">
                    Getting visitors to your website is only the first step.
                    If people are landing on your pages but leaving without
                    calling, messaging or submitting an enquiry, the problem
                    may be with your website experience rather than your
                    traffic. This guide explains the common reasons visitors
                    do not take the next step and what you can improve.
                  </p>

                  <button type="button" class="kb-article__toggle" aria-expanded="false">
                    <span class="txt-more">Read More</span>
                    <span class="txt-less">Read Less</span>
                    <i>↗</i>
                  </button>

                  <div class="kb-article__answer">
                    <div class="kb-answer-inner">
                      <div class="kb-answer-section">
                        <h5>The Problem</h5>

                        <p>
                          Your website may be receiving visitors from Google,
                          social media, advertisements or referrals, but those
                          visitors are not converting into enquiries. Traffic
                          alone does not guarantee business results.
                        </p>
                      </div>

                      <div class="kb-answer-section">
                        <h5>Why It Happens</h5>

                        <ul>
                          <li>Your main message is not immediately clear.</li>
                          <li>
                            Visitors cannot quickly understand your services.
                          </li>
                          <li>
                            Contact or enquiry options are difficult to find.
                          </li>
                          <li>
                            There is not enough trust-building information.
                          </li>
                          <li>
                            The website does not guide visitors towards one
                            clear action.
                          </li>
                        </ul>
                      </div>

                      <div class="kb-answer-section">
                        <h5>What You Can Do</h5>

                        <p>
                          Review your homepage from a customer's perspective.
                          Make your main service clear, explain the value you
                          provide, show relevant proof such as work or
                          testimonials, and place clear enquiry options
                          throughout the journey.
                        </p>
                      </div>

                      <div class="kb-article__cta">
                        <p>
                          Need help improving your website's enquiry journey?
                        </p>

                        <button type="button" data-model=".enquire-pop" class="btn btn-black">
                          Talk To Us <i>↗</i>
                        </button>
                      </div>
                    </div>
                  </div>
                </article>

                <!-- ARTICLE 02 -->
                <article class="kb-article">
                  <span class="kb-article__tag"> WEBSITES </span>

                  <h4 class="kb-article__title">
                    Does My Business Still Need A Website If I Have Social
                    Media?
                  </h4>

                  <p class="kb-article__desc">
                    Social media can help businesses reach people, but it does
                    not replace having a digital home of your own. Your
                    website gives customers one reliable place to understand
                    your business, services, credibility and contact options
                    without depending entirely on a third-party platform.
                  </p>

                  <button type="button" class="kb-article__toggle" aria-expanded="false">
                    <span class="txt-more">Read More</span>
                    <span class="txt-less">Read Less</span>
                    <i>↗</i>
                  </button>

                  <div class="kb-article__answer">
                    <div class="kb-answer-inner">
                      <div class="kb-answer-section">
                        <h5>Why Social Media Is Not Enough</h5>

                        <p>
                          Social platforms are useful for discovery and
                          engagement, but your business has limited control
                          over how your information is presented. Algorithms,
                          profiles and platform changes can also affect how
                          customers find you.
                        </p>
                      </div>

                      <div class="kb-answer-section">
                        <h5>What Your Website Adds</h5>

                        <ul>
                          <li>A professional home for your business.</li>
                          <li>
                            Complete control over your content and structure.
                          </li>
                          <li>Detailed service and product information.</li>
                          <li>
                            Better opportunities for Google search visibility.
                          </li>
                          <li>
                            Direct enquiry, booking and conversion journeys.
                          </li>
                        </ul>
                      </div>

                      <div class="kb-answer-section">
                        <h5>What You Can Do</h5>

                        <p>
                          Use social media to attract attention and your
                          website to provide the complete business experience.
                          Connect both channels so customers can move
                          naturally from discovery to learning more and making
                          an enquiry.
                        </p>
                      </div>

                      <div class="kb-article__cta">
                        <p>
                          Want to build a website around your business goals?
                        </p>

                        <button type="button" data-model=".enquire-pop" class="btn btn-black">
                          Talk To Us <i>↗</i>
                        </button>
                      </div>
                    </div>
                  </div>
                </article>

                <!-- ARTICLE 03 -->
                <article class="kb-article">
                  <span class="kb-article__tag"> WEBSITES </span>

                  <h4 class="kb-article__title">
                    Why Is My Website Loading Slowly?
                  </h4>

                  <p class="kb-article__desc">
                    A slow website can make it harder for visitors to browse,
                    understand your services and complete important actions.
                    Loading problems can come from large images, unnecessary
                    scripts, poor hosting, inefficient code or third-party
                    integrations. This guide covers the main areas worth
                    checking.
                  </p>

                  <button type="button" class="kb-article__toggle" aria-expanded="false">
                    <span class="txt-more">Read More</span>
                    <span class="txt-less">Read Less</span>
                    <i>↗</i>
                  </button>

                  <div class="kb-article__answer">
                    <div class="kb-answer-inner">
                      <div class="kb-answer-section">
                        <h5>Common Causes</h5>

                        <ul>
                          <li>Images are larger than they need to be.</li>
                          <li>Too many scripts or plugins are loaded.</li>
                          <li>
                            Hosting resources are not suitable for the
                            website.
                          </li>
                          <li>
                            Third-party services are slowing down page
                            loading.
                          </li>
                          <li>
                            Website code has not been properly optimised.
                          </li>
                        </ul>
                      </div>

                      <div class="kb-answer-section">
                        <h5>What You Can Do</h5>

                        <p>
                          Compress and properly size images, remove
                          unnecessary scripts, review third-party integrations
                          and make sure your hosting environment matches your
                          website's needs. A proper performance audit can
                          identify the exact bottleneck instead of relying on
                          assumptions.
                        </p>
                      </div>

                      <div class="kb-answer-section">
                        <h5>When To Get Professional Help</h5>

                        <p>
                          If basic image and plugin optimisation does not
                          improve the experience, the issue may involve server
                          response, code structure, database queries or more
                          complex integrations.
                        </p>
                      </div>

                      <div class="kb-article__cta">
                        <p>Need help diagnosing a slow website?</p>

                        <button type="button" data-model=".enquire-pop" class="btn btn-black">
                          Talk To Us <i>↗</i>
                        </button>
                      </div>
                    </div>
                  </div>
                </article>

                <!-- ARTICLE 04 -->
                <article class="kb-article">
                  <span class="kb-article__tag"> SEO </span>

                  <h4 class="kb-article__title">
                    Why Is My Website Not Showing On Google?
                  </h4>

                  <p class="kb-article__desc">
                    Having a website does not automatically mean every page
                    will appear prominently in Google. Search visibility
                    depends on technical setup, content quality, relevance,
                    authority and how well search engines can understand your
                    website. This guide explains the areas you should check
                    first.
                  </p>

                  <button type="button" class="kb-article__toggle" aria-expanded="false">
                    <span class="txt-more">Read More</span>
                    <span class="txt-less">Read Less</span>
                    <i>↗</i>
                  </button>

                  <div class="kb-article__answer">
                    <div class="kb-answer-inner">
                      <div class="kb-answer-section">
                        <h5>Check The Basics</h5>

                        <ul>
                          <li>
                            Make sure the website can be crawled by search
                            engines.
                          </li>
                          <li>Check whether important pages are indexed.</li>
                          <li>Review page titles and descriptions.</li>
                          <li>Make sure pages target clear search intent.</li>
                          <li>Check technical errors and broken links.</li>
                        </ul>
                      </div>

                      <div class="kb-answer-section">
                        <h5>Why It Can Take Time</h5>

                        <p>
                          Search visibility is influenced by many factors and
                          usually requires consistent optimisation. A newly
                          launched website may also need time to be
                          discovered, crawled and evaluated.
                        </p>
                      </div>

                      <div class="kb-answer-section">
                        <h5>What You Can Do</h5>

                        <p>
                          Start with technical SEO, useful page content,
                          search-focused service pages and a clear internal
                          linking structure. Monitor performance regularly
                          rather than making random changes based only on
                          rankings.
                        </p>
                      </div>

                      <div class="kb-article__cta">
                        <p>
                          Want to understand what is limiting your website's
                          SEO?
                        </p>

                        <button type="button" data-model=".enquire-pop" class="btn btn-black">
                          Talk To Us <i>↗</i>
                        </button>
                      </div>
                    </div>
                  </div>
                </article>

                <!-- ARTICLE 05 -->
                <article class="kb-article">
                  <span class="kb-article__tag"> WEBSITES </span>

                  <h4 class="kb-article__title">
                    Should I Redesign My Website Or Build A New One?
                  </h4>

                  <p class="kb-article__desc">
                    Not every outdated website needs to be rebuilt from
                    scratch. In some cases, improving the existing structure
                    is enough, while older websites may have technical or
                    architectural limitations that make a new build more
                    practical. The right decision depends on your current
                    website and future goals.
                  </p>

                  <button type="button" class="kb-article__toggle" aria-expanded="false">
                    <span class="txt-more">Read More</span>
                    <span class="txt-less">Read Less</span>
                    <i>↗</i>
                  </button>

                  <div class="kb-article__answer">
                    <div class="kb-answer-inner">
                      <div class="kb-answer-section">
                        <h5>A Redesign May Be Enough When</h5>

                        <ul>
                          <li>The existing technology is still suitable.</li>
                          <li>The content and structure can be improved.</li>
                          <li>
                            The website can support the required
                            functionality.
                          </li>
                          <li>
                            The current backend is stable and maintainable.
                          </li>
                        </ul>
                      </div>

                      <div class="kb-answer-section">
                        <h5>A New Website May Make More Sense When</h5>

                        <ul>
                          <li>The existing technology is outdated.</li>
                          <li>The website has major performance problems.</li>
                          <li>The structure is difficult to maintain.</li>
                          <li>
                            New functionality requires a different
                            architecture.
                          </li>
                          <li>
                            The business has significantly changed direction.
                          </li>
                        </ul>
                      </div>

                      <div class="kb-answer-section">
                        <h5>What You Should Review</h5>

                        <p>
                          Look at your current technology, performance,
                          content, user journey, integrations and future
                          requirements before deciding. A visual redesign
                          alone will not solve deeper technical limitations.
                        </p>
                      </div>
                    </div>
                  </div>
                </article>
              </div>

              <!-- =========================================
                   E-COMMERCE
              ========================================== -->
              <div class="tabs" data-tab="ecommerce">
                <article class="kb-article">
                  <span class="kb-article__tag"> E-COMMERCE </span>

                  <h4 class="kb-article__title">
                    What Should A Modern E-Commerce Website Include?
                  </h4>

                  <p class="kb-article__desc">
                    A modern online store needs more than product images and a
                    checkout button. Customers need clear product information,
                    easy navigation, trust signals, convenient payment options
                    and a smooth buying journey across devices. This guide
                    covers the important areas to consider when planning an
                    e-commerce website.
                  </p>

                  <button type="button" class="kb-article__toggle" aria-expanded="false">
                    <span class="txt-more">Read More</span>
                    <span class="txt-less">Read Less</span>
                    <i>↗</i>
                  </button>

                  <div class="kb-article__answer">
                    <div class="kb-answer-inner">
                      <div class="kb-answer-section">
                        <h5>Important Store Features</h5>

                        <ul>
                          <li>Clear product categories and navigation.</li>
                          <li>
                            Detailed product pages with useful information.
                          </li>
                          <li>Mobile-friendly shopping experience.</li>
                          <li>Secure checkout and payment integration.</li>
                          <li>Order and customer management.</li>
                          <li>
                            Search, filtering and useful product discovery.
                          </li>
                        </ul>
                      </div>

                      <div class="kb-answer-section">
                        <h5>Do Not Forget The Buying Experience</h5>

                        <p>
                          Customers should be able to move from discovering a
                          product to understanding it, adding it to their cart
                          and completing payment without unnecessary friction.
                          Shipping, returns and support information should
                          also be easy to find.
                        </p>
                      </div>

                      <div class="kb-article__cta">
                        <p>Planning an online store?</p>

                        <button type="button" data-model=".enquire-pop" class="btn btn-black">
                          Talk To Us <i>↗</i>
                        </button>
                      </div>
                    </div>
                  </div>
                </article>
              </div>

              <!-- =========================================
                   SEO
              ========================================== -->
              <div class="tabs" data-tab="seo">
                <article class="kb-article">
                  <span class="kb-article__tag"> SEO </span>

                  <h4 class="kb-article__title">
                    How Long Does SEO Take To Show Results?
                  </h4>

                  <p class="kb-article__desc">
                    SEO is usually a gradual process rather than an instant
                    marketing switch. Results depend on your website's current
                    condition, competition, search demand, content quality and
                    the work being performed. Understanding these factors
                    helps set realistic expectations for an SEO campaign.
                  </p>

                  <button type="button" class="kb-article__toggle" aria-expanded="false">
                    <span class="txt-more">Read More</span>
                    <span class="txt-less">Read Less</span>
                    <i>↗</i>
                  </button>

                  <div class="kb-article__answer">
                    <div class="kb-answer-inner">
                      <div class="kb-answer-section">
                        <h5>What Influences SEO Progress?</h5>

                        <ul>
                          <li>
                            Current website quality and technical health.
                          </li>
                          <li>Competition for your target searches.</li>
                          <li>Quality and relevance of your content.</li>
                          <li>Website authority and credibility.</li>
                          <li>Consistency of optimisation work.</li>
                        </ul>
                      </div>

                      <div class="kb-answer-section">
                        <h5>What You Should Measure</h5>

                        <p>
                          Do not look only at one keyword position. Review
                          impressions, relevant organic traffic, indexed
                          pages, enquiries and other meaningful business
                          outcomes over time.
                        </p>
                      </div>
                    </div>
                  </div>
                </article>
              </div>

              <!-- =========================================
                   WEB APPLICATIONS
              ========================================== -->
              <div class="tabs" data-tab="web-applications">
                <article class="kb-article">
                  <span class="kb-article__tag"> WEB APPLICATIONS </span>

                  <h4 class="kb-article__title">
                    Do I Need A CRM For My Business Website?
                  </h4>

                  <p class="kb-article__desc">
                    A CRM can become useful when a business receives regular
                    enquiries and needs a better way to organise leads, follow
                    conversations and manage customer information. But not
                    every business needs a complex CRM from day one. The right
                    choice depends on your sales process and operational
                    requirements.
                  </p>

                  <button type="button" class="kb-article__toggle" aria-expanded="false">
                    <span class="txt-more">Read More</span>
                    <span class="txt-less">Read Less</span>
                    <i>↗</i>
                  </button>

                  <div class="kb-article__answer">
                    <div class="kb-answer-inner">
                      <div class="kb-answer-section">
                        <h5>A CRM Can Help When</h5>

                        <ul>
                          <li>Your business receives many enquiries.</li>
                          <li>Multiple people handle leads.</li>
                          <li>Follow-ups are currently managed manually.</li>
                          <li>You need customer history in one place.</li>
                          <li>
                            You want visibility into your sales pipeline.
                          </li>
                        </ul>
                      </div>

                      <div class="kb-answer-section">
                        <h5>Start With Your Process</h5>

                        <p>
                          Before selecting a CRM, map how a lead enters your
                          business, who handles it, what information is
                          required, how follow-ups happen and when a lead
                          becomes a customer. Your system should support that
                          process rather than add unnecessary complexity.
                        </p>
                      </div>
                    </div>
                  </div>
                </article>
              </div>

              <!-- =========================================
                   DIGITAL MARKETING
              ========================================== -->
              <div class="tabs" data-tab="digital-marketing">
                <article class="kb-article">
                  <span class="kb-article__tag"> DIGITAL MARKETING </span>

                  <h4 class="kb-article__title">
                    Why Are My Digital Marketing Leads Not Converting?
                  </h4>

                  <p class="kb-article__desc">
                    Generating leads is only one part of digital marketing. If
                    enquiries are coming in but very few become customers, the
                    problem may be the offer, landing page, response time,
                    qualification process or follow-up journey. This guide
                    helps you identify where leads may be dropping off.
                  </p>

                  <button type="button" class="kb-article__toggle" aria-expanded="false">
                    <span class="txt-more">Read More</span>
                    <span class="txt-less">Read Less</span>
                    <i>↗</i>
                  </button>

                  <div class="kb-article__answer">
                    <div class="kb-answer-inner">
                      <div class="kb-answer-section">
                        <h5>Check The Complete Journey</h5>

                        <ul>
                          <li>
                            Is the advertisement reaching the right audience?
                          </li>
                          <li>Does the landing page match the campaign?</li>
                          <li>Is the offer clear?</li>
                          <li>How quickly are enquiries being answered?</li>
                          <li>Is there a consistent follow-up process?</li>
                        </ul>
                      </div>

                      <div class="kb-answer-section">
                        <h5>Improve One Stage At A Time</h5>

                        <p>
                          Track the journey from campaign click to enquiry and
                          then from enquiry to customer. This makes it easier
                          to identify whether the issue is attracting the
                          wrong audience, losing visitors on the website or
                          failing to follow up effectively.
                        </p>
                      </div>
                    </div>
                  </div>
                </article>
              </div>

              <!-- =========================================
                   SECURITY
              ========================================== -->
              <div class="tabs" data-tab="security">
                <article class="kb-article">
                  <span class="kb-article__tag"> SECURITY </span>

                  <h4 class="kb-article__title">
                    How Can I Protect My Website From Security Problems?
                  </h4>

                  <p class="kb-article__desc">
                    Website security is not only about what happens after a
                    site is attacked. Regular updates, strong access controls,
                    secure hosting, backups and monitoring can reduce common
                    risks. This guide explains the practical security measures
                    every business website should consider.
                  </p>

                  <button type="button" class="kb-article__toggle" aria-expanded="false">
                    <span class="txt-more">Read More</span>
                    <span class="txt-less">Read Less</span>
                    <i>↗</i>
                  </button>

                  <div class="kb-article__answer">
                    <div class="kb-answer-inner">
                      <div class="kb-answer-section">
                        <h5>Basic Security Measures</h5>

                        <ul>
                          <li>
                            Keep website software and dependencies updated.
                          </li>
                          <li>
                            Use strong and unique administrator credentials.
                          </li>
                          <li>
                            Limit access to people who actually need it.
                          </li>
                          <li>Maintain reliable backups.</li>
                          <li>Use HTTPS and secure hosting.</li>
                          <li>Monitor the website for unusual activity.</li>
                        </ul>
                      </div>

                      <div class="kb-answer-section">
                        <h5>Do Not Ignore Maintenance</h5>

                        <p>
                          Security is an ongoing responsibility. A website
                          that was secure when launched can become vulnerable
                          later if software, plugins, integrations or server
                          components are left outdated.
                        </p>
                      </div>
                    </div>
                  </div>
                </article>
              </div>

              <!-- =========================================
                   HOSTING & MAINTENANCE
              ========================================== -->
              <div class="tabs" data-tab="hosting-maintenance">
                <article class="kb-article">
                  <span class="kb-article__tag">
                    HOSTING &amp; MAINTENANCE
                  </span>

                  <h4 class="kb-article__title">
                    How Often Should I Update My Website?
                  </h4>

                  <p class="kb-article__desc">
                    Website maintenance is not only about changing text and
                    images. A healthy website needs regular technical checks,
                    software updates, backups, security reviews and content
                    improvements. The right maintenance schedule depends on
                    the technology and complexity of your website.
                  </p>

                  <button type="button" class="kb-article__toggle" aria-expanded="false">
                    <span class="txt-more">Read More</span>
                    <span class="txt-less">Read Less</span>
                    <i>↗</i>
                  </button>

                  <div class="kb-article__answer">
                    <div class="kb-answer-inner">
                      <div class="kb-answer-section">
                        <h5>Regular Checks Should Include</h5>

                        <ul>
                          <li>Website backups.</li>
                          <li>Security updates.</li>
                          <li>Broken-link checks.</li>
                          <li>Form and enquiry testing.</li>
                          <li>Performance monitoring.</li>
                          <li>Content and image updates.</li>
                        </ul>
                      </div>

                      <div class="kb-answer-section">
                        <h5>Why Maintenance Matters</h5>

                        <p>
                          Small technical issues can become bigger problems
                          when they are ignored. Regular maintenance helps
                          keep the website secure, functional and aligned with
                          your current business requirements.
                        </p>
                      </div>
                    </div>
                  </div>
                </article>
              </div>
            </div>
          </div>

          <!-- ===============================================
               RIGHT — STICKY CONSULTATION FORM
          ================================================ -->
          <aside class="kb-sidebar">
            <div class="kb-form">
              <span class="sec-label"> NEED HELP WITH YOUR PROJECT? </span>

              <h3>Get A Free Consultation</h3>

              <form class="kb-form__fields" action="#" method="post">
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

                <button type="submit" class="btn btn-black kb-form__submit">
                  Get A Free Consultation
                  <i>↗</i>
                </button>
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

        /* ----------------------------------------------------------
     ALL TAB
     Show every category panel
  ---------------------------------------------------------- */

        if (tab === "all") {
          $(".kb-category-content > .tabs").addClass("active");

          return;
        }

        /* ----------------------------------------------------------
     NORMAL CATEGORY TAB
  ---------------------------------------------------------- */

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

        /* ----------------------------------------------------------
     CLOSE OTHER OPEN ARTICLES
  ---------------------------------------------------------- */

        $(".kb-article.is-active")
          .not($article)
          .each(function () {
            var $other = $(this);

            $other.removeClass("is-active");

            $other.find(".kb-article__toggle").attr("aria-expanded", "false");

            $other.find(".kb-article__answer").stop(true, true).slideUp(250);
          });

        /* ----------------------------------------------------------
     CLOSE CURRENT ARTICLE
  ---------------------------------------------------------- */

        if (isOpen) {
          $article.removeClass("is-active");

          $btn.attr("aria-expanded", "false");

          $answer.stop(true, true).slideUp(250);

          return;
        }

        /* ----------------------------------------------------------
     OPEN CURRENT ARTICLE
  ---------------------------------------------------------- */

        $article.addClass("is-active");

        $btn.attr("aria-expanded", "true");

        $answer.stop(true, true).slideDown(250);
      });
    });
  </script>
@endpush