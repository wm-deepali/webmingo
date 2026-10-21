@php
  $fieldLabel = $fieldLabel ?? 'Website Type';
  $placeholder = $placeholder ?? 'Select your website type';
  $options = $options ?? [];
  $withRequirements = $withRequirements ?? false;
  $requirementsPlaceholder = $requirementsPlaceholder ?? 'Tell us about your requirements';
  $submitText = $submitText ?? 'Tell Us Your Requirements';
  $submitClass = $submitClass ?? 'btn-primary';
  $models = $models ?? [];
  $modelsLabel = $modelsLabel ?? 'Choose Your Model';
  $modelsKey = $modelsKey ?? 'model';
@endphp

<form class="js-package-form" action="{{ route('package-enquiry.store') }}" method="POST" novalidate>
  @csrf
  <input type="hidden" name="page" value="{{ Route::currentRouteName() }}">
  <input type="text" name="website" tabindex="-1" autocomplete="off" style="display:none" aria-hidden="true">

  @if (!empty($models))
    <div class="ecomPackage-model">
      <label>{{ $modelsLabel }}</label>
      <div class="ecomPackage-model-options">
        @foreach ($models as $value => $model)
          <label class="ecomPackage-model-option">
            <input type="radio" name="extra[{{ $modelsKey }}]" value="{{ $value }}" />
            <span class="ecomPackage-model-option__content">
              <strong>{!! $model['title'] !!}</strong>
              <small>{!! $model['desc'] !!}</small>
            </span>
            <i>✓</i>
          </label>
        @endforeach
      </div>
    </div>
  @endif

  <div class="ecomPackage-form-group">
    <label for="packageName">Full Name</label>
    <input type="text" id="packageName" name="name" placeholder="Enter your full name" required />
  </div>

  <div class="ecomPackage-form-group">
    <label for="packageMobile">Mobile Number</label>
    <input type="tel" id="packageMobile" name="mobile" placeholder="Enter your mobile number" required />
  </div>

  <div class="ecomPackage-form-group">
    <label for="packageBusiness">{{ $fieldLabel }}</label>
    <select id="packageBusiness" name="business_type" required>
      <option value="" selected disabled>{{ $placeholder }}</option>
      @foreach ($options as $value => $text)
        <option value="{{ $value }}">{!! $text !!}</option>
      @endforeach
    </select>
  </div>

  @if ($withRequirements)
    <div class="ecomPackage-form-group">
      <label for="packageMessage">Your Requirements</label>
      <textarea id="packageMessage" name="requirements" rows="4" placeholder="{{ $requirementsPlaceholder }}"></textarea>
    </div>
  @endif

  <div class="ecomPackage-form-action">
    <button type="submit" class="btn {{ $submitClass }}">
      {!! $submitText !!} <i>↗</i>
    </button>

    <p class="js-form-status ecomPackage-form-status" role="status" aria-live="polite"></p>

    <p class="ecomPackage-form-privacy">
      We respect your privacy. Your details are safe with us.
    </p>
  </div>
</form>

@include('partials.package-form-script')