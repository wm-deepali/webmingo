{{--
    Hero section used by every page.
    The background video is passed in by the page (it stays static).
    The text and buttons come from the admin (page_heroes table); anything the
    admin leaves empty falls back to the page's own default text.

    Usage:
    @include('partials.hero', [
        'video'   => 'assets/video/effect8.mp4',
        'poster'  => 'assets/video/poster/effect8.png',
        'default' => [
            'eyebrow'        => 'WEB MINGO BLOG',
            'heading'        => 'Ideas, Insights & Practical Digital Knowledge.',
            'description'    => 'Explore useful insights ...',
            'primary_text'   => 'Explore Latest Articles',
            'primary_url'    => '#latest-articles',
            'secondary_text' => 'Browse by Topic',
            'secondary_url'  => 'javascript:void(0)',
        ],
    ])

    Button link "#enquire" opens the enquiry popup instead of navigating.
--}}
@php
    $hero    = \App\Models\PageHero::forRoute(\Illuminate\Support\Facades\Route::currentRouteName());
    $default = $default ?? [];
    $video   = $video  ?? 'assets/video/effect8.mp4';
    $poster  = $poster ?? 'assets/video/poster/effect8.png';

    $eyebrow     = $hero->eyebrow     ?? ($default['eyebrow']     ?? null);
    $heading     = $hero->heading     ?? ($default['heading']     ?? '');
    $description = $hero->description ?? ($default['description'] ?? null);

    $buttons = [
        [
            'text'  => $hero->primary_text ?? ($default['primary_text'] ?? null),
            'url'   => $hero->primary_url  ?? ($default['primary_url']  ?? '#'),
            'class' => 'btn-outline-white',
        ],
        [
            'text'  => $hero->secondary_text ?? ($default['secondary_text'] ?? null),
            'url'   => $hero->secondary_url  ?? ($default['secondary_url']  ?? '#'),
            'class' => 'btn-white',
        ],
    ];
@endphp

<section class="banner">
    <div class="bg">
        <video autoplay muted loop playsinline class="bg-video"
            src="{{ asset($video) }}"
            poster="{{ asset($poster) }}">
            <source src="{{ asset($video) }}" type="video/mp4" />
        </video>

        <div class="container">
            <div class="banner-wrapper">
                <div class="content">

                    @if ($eyebrow)
                        <span class="eyebrow">{{ $eyebrow }}</span>
                    @endif

                    <h1>{{ $heading }}</h1>

                    @if ($description)
                        <p>{{ $description }}</p>
                    @endif

                    @if (collect($buttons)->contains(fn ($b) => ! empty($b['text'])))
                        <div class="banner-actions">
                            @foreach ($buttons as $btn)
                                @continue(empty($btn['text']))

                                @if ($btn['url'] === '#enquire')
                                    <button type="button" data-model=".enquire-pop" class="btn {{ $btn['class'] }}">
                                        {{ $btn['text'] }}
                                        <i>↗</i>
                                    </button>
                                @else
                                    <a href="{{ $btn['url'] }}"
                                       @if (\Illuminate\Support\Str::startsWith($btn['url'], 'http')) target="_blank" rel="noopener" @endif
                                       class="btn {{ $btn['class'] }}">
                                        {{ $btn['text'] }}
                                        <i>↗</i>
                                    </a>
                                @endif
                            @endforeach
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </div>
</section>