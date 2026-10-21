@php
  $label = $label ?? '';
  $heading = $heading ?? 'Everything You Need To';
  $highlight = $highlight ?? '';
  $intro = $intro ?? '';
@endphp

<section class="ecomPackage">
  <div class="container">
    <div class="ecomPackage-inner">
      <div class="ecomPackage-content">
        <span class="ecomPackage-label">{!! $label !!}</span>
        <h3>
          {!! $heading !!}
          <span>{!! $highlight !!}</span>
        </h3>
        <p class="ecomPackage-intro">{!! $intro !!}</p>
      </div>

      <div class="ecomPackage-form">
        @include('partials.package-form-fields')
      </div>
    </div>
  </div>
</section>