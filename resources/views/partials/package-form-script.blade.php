@once
  @push('scripts')
    <script>
      document.querySelectorAll('.js-package-form').forEach(function (form) {
        var btn = form.querySelector('button[type="submit"]');
        var status = form.querySelector('.js-form-status');

        form.addEventListener('submit', function (e) {
          e.preventDefault();
          status.textContent = '';
          status.style.color = '';
          btn.disabled = true;

          fetch(form.action, {
            method: 'POST',
            body: new FormData(form),
            headers: { 'Accept': 'application/json', 'X-Requested-With': 'XMLHttpRequest' }
          })
            .then(function (res) { return res.json().then(function (json) { return { ok: res.ok, json: json }; }); })
            .then(function (r) {
              if (r.ok && r.json.success) {
                form.reset();
                status.style.color = '#16a34a';
                status.textContent = r.json.message;
              } else {
                var msg = r.json.message || 'Something went wrong. Please try again.';
                if (r.json.errors) { msg = Object.values(r.json.errors)[0][0]; }
                status.style.color = '#dc2626';
                status.textContent = msg;
              }
            })
            .catch(function () {
              status.style.color = '#dc2626';
              status.textContent = 'Network error. Please try again.';
            })
            .finally(function () { btn.disabled = false; });
        });
      });
    </script>
  @endpush
@endonce