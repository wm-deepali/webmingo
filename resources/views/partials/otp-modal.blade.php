{{--
    Reusable OTP step. Include once on any page with a form that posts with otp_ui=1:

        @include('partials.otp-modal')

    Then, when the form's JSON response has requires_otp = true:

        OtpFlow.open(data, {
            onVerified: function (message) { ... },
            onSkipped:  function (message) { ... }
        });
--}}
<style>
    .otp-overlay {
        display: none;
        position: fixed;
        inset: 0;
        z-index: 9999;
        align-items: center;
        justify-content: center;
        padding: 20px;
        background: rgba(0, 0, 0, .55);
    }

    .otp-overlay.open {
        display: flex;
    }

    .otp-box {
        position: relative;
        width: 100%;
        max-width: 400px;
        padding: 32px 28px 24px;
        border-radius: 16px;
        background: #fff;
        color: #101828;
        box-shadow: 0 24px 60px rgba(0, 0, 0, .25);
        text-align: center;
    }

    .otp-close {
        position: absolute;
        top: 10px;
        right: 12px;
        width: 32px;
        height: 32px;
        border: 0;
        border-radius: 50%;
        background: #f2f4f7;
        color: #475467;
        font-size: 20px;
        line-height: 1;
        cursor: pointer;
    }

    .otp-box h4 {
        margin: 0 0 8px;
        font-size: 20px;
        font-weight: 700;
    }

    .otp-sub {
        margin: 0 0 20px;
        font-size: 14px;
        line-height: 1.6;
        color: #475467;
    }

    .otp-input {
        width: 100%;
        height: 54px;
        border: 1px solid #d0d5dd;
        border-radius: 10px;
        text-align: center;
        font-size: 24px;
        font-weight: 700;
        letter-spacing: 10px;
        outline: none;
    }

    .otp-input:focus {
        border-color: #101828;
        box-shadow: 0 0 0 3px rgba(16, 24, 40, .1);
    }

    .otp-msg {
        min-height: 20px;
        margin: 10px 0 14px;
        font-size: 13px;
    }

    .otp-msg.error {
        color: #d92d20;
    }

    .otp-msg.success {
        color: #067647;
    }

    .otp-verify {
        width: 100%;
        justify-content: center;
    }

    .otp-verify[disabled] {
        opacity: .6;
        cursor: not-allowed;
    }

    .otp-row {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-top: 16px;
        gap: 12px;
    }

    .otp-link {
        padding: 0;
        border: 0;
        background: none;
        font-size: 13px;
        font-weight: 600;
        color: #101828;
        text-decoration: underline;
        cursor: pointer;
    }

    .otp-link[disabled] {
        color: #98a2b3;
        text-decoration: none;
        cursor: not-allowed;
    }

    .otp-note {
        margin: 16px 0 0;
        font-size: 12px;
        line-height: 1.5;
        color: #667085;
    }
</style>

<div class="otp-overlay" id="otpModal" role="dialog" aria-modal="true" aria-labelledby="otpTitle">
    <div class="otp-box">
        <button type="button" class="otp-close" id="otpClose" aria-label="Close and continue without verifying">&times;</button>

        <h4 id="otpTitle">Verify your mobile number</h4>
        <p class="otp-sub">We've sent a one-time code to <strong id="otpMobile"></strong>.</p>

        <input type="text" class="otp-input" id="otpInput" inputmode="numeric" autocomplete="one-time-code"
            maxlength="6" placeholder="······" aria-label="One-time password">

        <div class="otp-msg" id="otpMsg" role="alert"></div>

        <button type="button" class="btn btn-black otp-verify" id="otpVerify">
            Verify
            <i>↗</i>
        </button>

        <div class="otp-row">
            <button type="button" class="otp-link" id="otpResend" disabled>Resend OTP</button>
            <button type="button" class="otp-link" id="otpSkip">Skip for now</button>
        </div>

        <p class="otp-note">
            Your details are already received. Verify to also get a confirmation email.
        </p>
    </div>
</div>

<script>
    (function () {
        var URLS = {
            verify: @json(route('otp.verify')),
            resend: @json(route('otp.resend')),
            skip: @json(route('otp.skip'))
        };
        var CSRF = @json(csrf_token());

        var modal = document.getElementById('otpModal');
        if (!modal) { return; }

        var els = {
            mobile: document.getElementById('otpMobile'),
            input: document.getElementById('otpInput'),
            msg: document.getElementById('otpMsg'),
            verify: document.getElementById('otpVerify'),
            resend: document.getElementById('otpResend'),
            skip: document.getElementById('otpSkip'),
            close: document.getElementById('otpClose')
        };

        var state = null;      // { token, callbacks }
        var timer = null;
        var remaining = 0;
        var resendLocked = false;

        function post(url, payload) {
            return fetch(url, {
                method: 'POST',
                keepalive: true,
                headers: {
                    'Content-Type': 'application/json',
                    'Accept': 'application/json',
                    'X-CSRF-TOKEN': CSRF,
                    'X-Requested-With': 'XMLHttpRequest'
                },
                body: JSON.stringify(payload)
            }).then(function (r) {
                return r.json().catch(function () { return {}; }).then(function (data) {
                    return { ok: r.ok, data: data };
                });
            });
        }

        function setMsg(text, type) {
            els.msg.textContent = text || '';
            els.msg.className = 'otp-msg' + (type ? ' ' + type : '');
        }

        function tick() {
            if (resendLocked) { return; }
            if (remaining > 0) {
                els.resend.disabled = true;
                els.resend.textContent = 'Resend OTP in ' + remaining + 's';
            } else {
                els.resend.disabled = false;
                els.resend.textContent = 'Resend OTP';
            }
        }

        function startCountdown(seconds) {
            clearInterval(timer);
            remaining = seconds || 0;
            tick();
            timer = setInterval(function () {
                remaining--;
                tick();
                if (remaining <= 0) { clearInterval(timer); }
            }, 1000);
        }

        function closeModal() {
            clearInterval(timer);
            modal.classList.remove('open');
            document.body.style.overflow = '';
        }

        function finish(kind, message) {
            var callbacks = state && state.callbacks;
            closeModal();
            state = null;
            if (callbacks && typeof callbacks[kind] === 'function') {
                callbacks[kind](message);
            }
        }

        function doVerify() {
            if (!state) { return; }
            var otp = els.input.value.replace(/\D/g, '');
            if (!otp) { setMsg('Please enter the OTP.', 'error'); return; }

            els.verify.disabled = true;
            setMsg('Verifying…');

            post(URLS.verify, { token: state.token, otp: otp }).then(function (res) {
                els.verify.disabled = false;
                if (res.data.success) {
                    finish('onVerified', res.data.message);
                    return;
                }
                setMsg(res.data.message || 'Could not verify the OTP. Please try again.', 'error');
                els.input.select();
            }).catch(function () {
                els.verify.disabled = false;
                setMsg('Network error. Please try again.', 'error');
            });
        }

        function doResend() {
            if (!state || els.resend.disabled) { return; }
            els.resend.disabled = true;
            setMsg('Sending a new OTP…');

            post(URLS.resend, { token: state.token }).then(function (res) {
                var d = res.data;
                if (d.success) {
                    els.input.value = '';
                    els.input.focus();
                    setMsg(d.message, 'success');
                    startCountdown(d.resend_in);
                    return;
                }
                setMsg(d.message || 'Could not resend the OTP.', 'error');
                if (d.status === 'limit' || d.status === 'not_found') {
                    resendLocked = true;
                    els.resend.disabled = true;
                    els.resend.textContent = 'Resend unavailable';
                } else {
                    startCountdown(d.resend_in || 10);
                }
            }).catch(function () {
                setMsg('Network error. Please try again.', 'error');
                startCountdown(5);
            });
        }

        function doSkip() {
            if (!state) { return; }
            var token = state.token;
            els.skip.disabled = true;

            post(URLS.skip, { token: token }).then(function (res) {
                els.skip.disabled = false;
                finish('onSkipped', res.data.message);
            }).catch(function () {
                els.skip.disabled = false;
                finish('onSkipped');
            });
        }

        els.verify.addEventListener('click', doVerify);
        els.resend.addEventListener('click', doResend);
        els.skip.addEventListener('click', doSkip);
        els.close.addEventListener('click', doSkip);
        els.input.addEventListener('keydown', function (e) {
            if (e.key === 'Enter') { e.preventDefault(); doVerify(); }
        });

        window.OtpFlow = {
            open: function (data, callbacks) {
                state = { token: data.token, callbacks: callbacks || {} };
                resendLocked = false;

                els.mobile.textContent = data.mobile_masked || 'your mobile number';
                els.input.value = '';
                els.input.maxLength = data.otp_length || 6;
                els.verify.disabled = false;
                els.skip.disabled = false;
                setMsg('');

                modal.classList.add('open');
                document.body.style.overflow = 'hidden';
                startCountdown(data.resend_in || 30);

                setTimeout(function () { els.input.focus(); }, 50);
            }
        };
    })();
</script>