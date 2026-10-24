{{--
    Shared AJAX submit + OTP step for every package / service enquiry form (.js-package-form).
    Rendered once per page, however many forms or includes there are.
--}}
@once
  @push('scripts')
    {{-- OTP step (verify / resend / skip). Defines window.OtpFlow --}}
    @include('partials.otp-modal')

    <script>
      document.querySelectorAll('.js-package-form').forEach(function (form) {
        var btn = form.querySelector('button[type="submit"]');
        var status = form.querySelector('.js-form-status');

        function setStatus(message, ok) {
          status.style.color = ok ? '#16a34a' : '#dc2626';
          status.textContent = message || '';
        }

        // Mobile field: numeric keyboard + a short note about the OTP
        var mobile = form.querySelector('input[name="mobile"]');
        if (mobile) {
          mobile.setAttribute('inputmode', 'numeric');
          mobile.setAttribute('autocomplete', 'tel');

          if (!form.querySelector('.js-otp-hint')) {
            var hint = document.createElement('small');
            hint.className = 'js-otp-hint';
            hint.style.cssText = 'display:block;margin-top:4px;font-size:12px;opacity:.7;';
            hint.textContent = "We'll send a one-time code to verify your number.";
            mobile.insertAdjacentElement('afterend', hint);
          }
        }

        // Called after the OTP step ends (verified or skipped)
        function done(message) {
          form.reset();
          setStatus(message || 'Thank you! We will contact you shortly.', true);
        }

        form.addEventListener('submit', function (e) {
          e.preventDefault();
          setStatus('');
          btn.disabled = true;

          var fd = new FormData(form);
          fd.append('otp_ui', '1'); // tells the server this page can show the OTP step

          fetch(form.action, {
            method: 'POST',
            body: fd,
            headers: { 'Accept': 'application/json', 'X-Requested-With': 'XMLHttpRequest' }
          })
            .then(function (res) {
              return res.json().catch(function () { return {}; }).then(function (json) {
                return { ok: res.ok, status: res.status, json: json };
              });
            })
            .then(function (r) {
              if (r.ok && r.json.success) {
                if (r.json.requires_otp && window.OtpFlow) {
                  OtpFlow.open(r.json, { onVerified: done, onSkipped: done });
                } else {
                  done(r.json.message);
                }
                return;
              }

              var msg = r.json.message || 'Something went wrong. Please try again.';
              if (r.json.errors) { msg = Object.values(r.json.errors)[0][0]; }
              if (r.status === 429) { msg = 'Too many attempts. Please try again in a minute.'; }
              if (r.status === 419) { msg = 'Your session expired. Please refresh the page and try again.'; }
              setStatus(msg, false);
            })
            .catch(function () {
              setStatus('Network error. Please try again.', false);
            })
            .finally(function () { btn.disabled = false; });
        });
      });
    </script>
  @endpush
@endonce