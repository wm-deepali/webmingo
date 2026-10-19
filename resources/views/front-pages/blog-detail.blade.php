@extends('layouts.app')

@section('title', $blog->meta_title ?: $blog->title . ' | Web Mingo')

@section('meta')
    <meta name="description" content="{{ $blog->meta_description ?: $blog->short_description }}" />
    <link rel="canonical" href="{{ url()->current() }}" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="{{ $blog->meta_title ?: $blog->title }}" />
    <meta property="og:description" content="{{ $blog->meta_description ?: $blog->short_description }}" />
    <meta property="og:url" content="{{ url()->current() }}" />
    @if ($blog->image_url)
        <meta property="og:image" content="{{ $blog->image_url }}" />
    @endif
@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/sass/blog-detail/blog-detail.css') }}" />
@endpush

@section('content')
    <main>
      <!-- =========================
       BLOG DETAIL BANNER
  ========================== -->
      <section class="banner">
        <div class="bg">
          <img src="{{ asset('assets/images/why-us/banner.jpg') }}" alt="{{ $blog->title }}" />

          <div class="container">
            <div class="banner-wrapper">
              <div class="content">
                <h1>{{ $blog->title }}</h1>

                @if ($blog->short_description)
                  <p>{{ $blog->short_description }}</p>
                @endif
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- =========================
       BLOG DETAIL
  ========================== -->
      <section class="blog-dtl-secA">
        <div class="container">
          <div class="para-parent">
            {!! $blog->content !!}
          </div>
        </div>
      </section>

      <!-- =========================
       MORE BLOGS
  ========================== -->
      @if ($moreBlogs->isNotEmpty())
      <section class="more-blogs">
        <div class="container">
          <div class="heading">
            <span class="eyebrow">
              <span class="eyebrow-line"></span>
              MORE FROM THE BLOG
            </span>

            <h3>
              More Ideas Worth
              <span>Exploring.</span>
            </h3>

            <p>
              Discover more insights, ideas and practical thinking from Web
              Mingo.
            </p>
          </div>

          <div class="swiper-wrap">
            <div class="swiper moreBlogsSwiper">
              <div class="swiper-wrapper">
                @foreach ($moreBlogs as $more)
                  <div class="swiper-slide">
                    <article class="blog-card">
                      <a href="{{ route('blog-detail', $more->slug) }}" class="blog-card__image">
                        @if ($more->image_url)
                          <img
                            src="{{ $more->image_url }}"
                            alt="{{ $more->image_alt ?: $more->title }}"
                            loading="lazy"
                          />
                        @endif
                      </a>

                      <div class="blog-card__info">
                        <div class="blog-card__meta">
                          @if ($more->category)
                            <span>{{ strtoupper($more->category) }}</span>
                          @endif
                          @if ($more->published_at)
                            <span>{{ strtoupper($more->published_at->format('d M Y')) }}</span>
                          @endif
                        </div>

                        <h4>{{ $more->title }}</h4>

                        @if ($more->short_description)
                          <p>{{ $more->short_description }}</p>
                        @endif

                        <a href="{{ route('blog-detail', $more->slug) }}" class="btn btn-outline-black">
                          Read Article
                          <i>↗</i>
                        </a>
                      </div>
                    </article>
                  </div>
                @endforeach
              </div>
            </div>

            <!-- SLIDER NAVIGATION -->
            <div class="swiper-group">
              <button
                type="button"
                class="moreBlogsSwiper-prev btn-prev"
                aria-label="Previous blog"
              >
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1024 1024">
                  <path
                    fill="currentColor"
                    d="M609.408 149.376L277.76 489.6a32 32 0 0 0 0 44.672l331.648 340.352a29.12 29.12 0 0 0 41.728 0a30.59 30.59 0 0 0 0-42.752L339.264 511.936l311.872-319.872a30.59 30.59 0 0 0 0-42.688a29.12 29.12 0 0 0-41.728 0"
                  ></path>
                </svg>
              </button>

              <button
                type="button"
                class="moreBlogsSwiper-next btn-next"
                aria-label="Next blog"
              >
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1024 1024">
                  <path
                    fill="currentColor"
                    d="M414.592 149.376L746.24 489.6a32 32 0 0 1 0 44.672L414.592 874.624a29.12 29.12 0 0 1-41.728 0a30.59 30.59 0 0 1 0-42.752l311.872-319.936L372.864 192a30.59 30.59 0 0 1 0-42.688a29.12 29.12 0 0 1 41.728 0"
                  ></path>
                </svg>
              </button>
            </div>
          </div>
        </div>
      </section>
      @endif
    </main>
@endsection