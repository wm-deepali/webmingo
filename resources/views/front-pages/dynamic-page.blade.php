@extends('layouts.app')

@section('title', $page->meta_title ?: $page->heading)
@section('meta_description', $page->meta_description)

@push('styles')
  <style>
    .legal-page { padding: 140px 0 80px; }
    .legal-page h1 { margin-bottom: 30px; }
    .legal-page__content h2,
    .legal-page__content h3,
    .legal-page__content h4 { margin: 28px 0 12px; }
    .legal-page__content p,
    .legal-page__content li { line-height: 1.75; }
    .legal-page__content ul,
    .legal-page__content ol { padding-left: 22px; margin-bottom: 16px; }
  </style>
@endpush

@section('content')
  <main>
    <section class="legal-page">
      <div class="container">
        <h1>{{ $page->heading ?: $page->page_name }}</h1>

        <div class="legal-page__content">
          {!! $page->content !!}
        </div>
      </div>
    </section>
  </main>
@endsection