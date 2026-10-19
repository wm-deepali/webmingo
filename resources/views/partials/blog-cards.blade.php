@foreach ($blogs as $blog)
    <article class="blog-card">
        <a href="{{ route('blog-detail', $blog->slug) }}" class="blog-card__image">
            <img src="{{ $blog->image_url }}" alt="{{ $blog->image_alt ?: $blog->title }}" />
        </a>

        <div class="blog-card__info">
            <div class="blog-card__meta">
                <span>{{ strtoupper($blog->category) }}</span>
                <span>{{ strtoupper($blog->published_at->format('d M Y')) }}</span>
            </div>

            <h4>{{ $blog->title }}</h4>

            <p>{{ $blog->short_description }}</p>

            <a href="{{ route('blog-detail', $blog->slug) }}" class="btn btn-outline-black">
                Read Article
                <i>↗</i>
            </a>
        </div>
    </article>
@endforeach