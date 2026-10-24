{{--
    AJAX submit + OTP step for the career application form (id="careerForm").
    Used by both the careers page and the career detail page.
    Needs: <div id="careerFormStatus"></div> above the form, and @include('partials.otp-modal').
--}}
<script>
  (function () {
    var form = document.getElementById('careerForm');
    // Without fetch the form posts normally (no OTP step) and still works
    if (!form || !window.fetch) { return; }

    var statusEl = document.getElementById('careerFormStatus');
    var btn = form.querySelector('button[type="submit"]');
    var btnHtml = btn.innerHTML;

    function setStatus(message, type) {
      statusEl.innerHTML = '';
      if (!message) { return; }

      var ok = type === 'success';
      var box = document.createElement('div');
      box.setAttribute('role', ok ? 'status' : 'alert');
      box.style.cssText = 'padding:12px 16px;border-radius:10px;margin-bottom:18px;font-size:14px;border:1px solid '
        + (ok ? '#abefc6;background:#ecfdf3;color:#067647;' : '#fecdca;background:#fef3f2;color:#b42318;');
      box.textContent = message;
      statusEl.appendChild(box);
    }

    function clearErrors() {
      var old = form.querySelectorAll('.js-field-error');
      for (var i = 0; i < old.length; i++) { old[i].parentNode.removeChild(old[i]); }
    }

    function showErrors(errors) {
      var general = [];

      Object.keys(errors).forEach(function (name) {
        var field = form.querySelector('[name="' + name + '"]');
        var group = field
          ? (field.closest('.form-group') || field.closest('.career-form__footer') || field.parentNode)
          : null;

        if (!group) { general.push(errors[name][0]); return; }

        var el = document.createElement('small');
        el.className = 'js-field-error';
        el.style.cssText = 'color:#d92d20;display:block;margin-top:4px;';
        el.textContent = errors[name][0];
        group.appendChild(el);
      });

      setStatus(general.length ? general.join(' ') : 'Please fix the highlighted fields.', 'error');
    }

    function setBusy(busy) {
      btn.disabled = busy;
      btn.style.opacity = busy ? '.7' : '';
      btn.style.cursor = busy ? 'wait' : '';
      btn.innerHTML = busy ? 'Submitting…' : btnHtml;
    }

    function done(message) {
      form.reset();
      setStatus(message || "Thanks! We've received your application and will get back to you shortly.", 'success');
      statusEl.scrollIntoView({ behavior: 'smooth', block: 'center' });
    }

    form.addEventListener('submit', function (e) {
      e.preventDefault();
      clearErrors();
      setStatus('');

      var fd = new FormData(form);
      fd.append('otp_ui', '1'); // tells the server this page can show the OTP step

      setBusy(true);

      fetch(form.action, {
        method: 'POST',
        body: fd,
        headers: { 'Accept': 'application/json', 'X-Requested-With': 'XMLHttpRequest' }
      })
        .then(function (r) {
          return r.json().catch(function () { return {}; }).then(function (data) {
            return { ok: r.ok, status: r.status, data: data };
          });
        })
        .then(function (res) {
          setBusy(false);

          if (res.status === 422 && res.data.errors) {
            showErrors(res.data.errors);
            return;
          }

          if (res.status === 413) {
            setStatus('Your resume is too large. Please upload a file under 5MB.', 'error');
            return;
          }

          if (res.status === 419) {
            setStatus('Your session expired. Please refresh the page and try again.', 'error');
            return;
          }

          if (!res.ok || !res.data.success) {
            setStatus(res.data.message || 'Something went wrong. Please try again.', 'error');
            return;
          }

          if (res.data.requires_otp) {
            OtpFlow.open(res.data, { onVerified: done, onSkipped: done });
            return;
          }

          done(res.data.message);
        })
        .catch(function () {
          setBusy(false);
          setStatus('Network error. Please check your connection and try again.', 'error');
        });
    });
  })();
</script>