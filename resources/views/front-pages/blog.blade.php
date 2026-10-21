@extends('layouts.app')

@push('styles')
  <link rel="stylesheet" href="{{ asset('assets/sass/blog/blog.css') }}" />
@endpush

@section('content')
  <main>

    @include('partials.hero', [
      'video' => 'assets/video/effect8.mp4',
      'poster' => 'assets/video/poster/effect8.png',
      'default' => [
        'eyebrow' => 'WEB MINGO BLOG',
        'heading' => 'Ideas, Insights & Practical Digital Knowledge.',
        'description' => 'Explore useful insights on websites, e-commerce, SEO, digital marketing, mobile applications and business technology.',
        'primary_text' => 'Explore Latest Articles',
        'primary_url' => '#latest-articles',
        'secondary_text' => 'Browse by Topic',
        'secondary_url' => 'javascript:void(0)',
      ],
    ])
    
    <section class="blog-secA" id="latest-articles">
      <div class="container">
        <div class="heading">
          <span class="eyebrow">
            <span class="eyebrow-line"></span>
            OUR LATEST INSIGHTS
          </span>

          <h3>
            Ideas, Insights &
            <span>Digital Thinking.</span>
          </h3>

          <p>
            Explore ideas, trends, and practical insights from the world of
            design, technology, branding, and digital growth.
          </p>
        </div>

        <div class="blog-grid" id="blogGrid">
          @forelse ($blogs as $blog)
            @include('partials.blog-cards', ['blogs' => [$blog]])
          @empty
            <p>No articles published yet.</p>
          @endforelse
        </div>

        @if ($blogs->hasMorePages())
          <div class="blog-secA__bottom">
            <a href="javascript:void(0)" class="load-more" id="loadMoreBlogs">
              Load More
              <i>↗</i>
            </a>
          </div>
        @endif
      </div>
    </section>
  </main>
@endsection

@push('scripts')
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      const btn = document.getElementById('loadMoreBlogs');
      const grid = document.getElementById('blogGrid');
      if (!btn) return;

      let page = 2;
      let loading = false;

      btn.addEventListener('click', async function () {
        if (loading) return;
        loading = true;

        try {
          const res = await fetch(`{{ route('blog') }}?page=${page}`, {
            headers: { 'Accept': 'application/json' }
          });
          const data = await res.json();

          grid.insertAdjacentHTML('beforeend', data.html);
          page++;

          if (!data.has_more) {
            btn.closest('.blog-secA__bottom').remove();
          }
        } catch (err) {
          console.error(err);
        } finally {
          loading = false;
        }
      });
    });
  </script>
@endpush