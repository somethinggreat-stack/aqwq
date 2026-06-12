@extends('layouts.app')

@section('title', 'Client Intake | AQ Wealth University')
@section('description', 'Welcome to AQ Wealth University. Complete your client intake form to start your credit repair journey.')

@push('styles')
<style>
  body { background: linear-gradient(180deg, #1a0633 0%, #260a44 100%); min-height: 100vh; }
  .intake-wrap { max-width: 760px; margin: 0 auto; padding: 3rem 1.25rem 4rem; }
  .intake-card {
    background: rgba(255,255,255,0.04);
    border: 1px solid rgba(207,161,42,0.25);
    border-radius: 1rem;
    padding: 2rem;
    backdrop-filter: blur(8px);
    box-shadow: 0 30px 80px -30px rgba(0,0,0,0.6);
  }
  .intake-eyebrow {
    display: inline-flex; align-items: center; gap: .5rem;
    color: #ecd17d; text-transform: uppercase; letter-spacing: .18em;
    font-size: .72rem; font-weight: 600;
  }
  .intake-eyebrow::before {
    content: ''; display: inline-block; width: 8px; height: 8px; border-radius: 50%;
    background: #cfa12a; box-shadow: 0 0 12px #cfa12a;
  }
  .intake-title { font-family: 'Playfair Display', serif; color: #fff; font-weight: 700; font-size: 2rem; line-height: 1.15; margin-top: .5rem; }
  .intake-title em { color: #ecd17d; font-style: italic; }
  .intake-sub { color: rgba(255,255,255,0.72); margin-top: .75rem; line-height: 1.6; font-size: .95rem; }
  .field { margin-top: 1rem; }
  .field-row { display: grid; gap: 1rem; grid-template-columns: 1fr; }
  @media (min-width: 640px) { .field-row.cols-2 { grid-template-columns: 1fr 1fr; } .field-row.cols-3 { grid-template-columns: 2fr 1fr 1fr; } }
  .lbl { display: block; color: rgba(255,255,255,0.85); font-size: .85rem; font-weight: 500; margin-bottom: .35rem; }
  .lbl .req { color: #ff8c8c; margin-left: 2px; }
  .inp, .sel, .ta {
    width: 100%; background: rgba(0,0,0,0.25); border: 1px solid rgba(255,255,255,0.1);
    color: #fff; padding: .75rem .9rem; border-radius: .6rem; font-size: .95rem;
    transition: border-color .15s ease, background .15s ease;
  }
  .inp:focus, .sel:focus, .ta:focus { outline: none; border-color: #cfa12a; background: rgba(0,0,0,0.4); }
  .inp::placeholder { color: rgba(255,255,255,0.35); }
  .ta { resize: vertical; min-height: 90px; font-family: inherit; }
  .consent { display: flex; align-items: flex-start; gap: .65rem; margin-top: 1.25rem; color: rgba(255,255,255,0.78); font-size: .85rem; line-height: 1.5; }
  .consent input { margin-top: .25rem; accent-color: #cfa12a; }
  .submit-btn {
    width: 100%; margin-top: 1.5rem; padding: 1rem 1.25rem; border-radius: .7rem;
    background: linear-gradient(180deg, #cfa12a 0%, #9a6f08 100%);
    color: #1a0633; font-weight: 700; font-size: 1rem; letter-spacing: .02em;
    border: 0; cursor: pointer; transition: transform .1s ease, filter .1s ease;
  }
  .submit-btn:hover { filter: brightness(1.06); }
  .submit-btn:active { transform: translateY(1px); }
  .submit-btn[disabled] { opacity: .55; cursor: not-allowed; }
  .form-msg { margin-top: 1rem; padding: .85rem 1rem; border-radius: .6rem; font-size: .9rem; display: none; }
  .form-msg.show { display: block; }
  .form-msg.success { background: rgba(50,180,100,0.12); color: #b5f3c8; border: 1px solid rgba(50,180,100,0.4); }
  .form-msg.error   { background: rgba(220,80,80,0.12); color: #ffb3b3;  border: 1px solid rgba(220,80,80,0.4); }
  .success-panel { display: none; text-align: center; padding: 1rem 0; }
  .success-panel.show { display: block; }
  .success-icon {
    width: 72px; height: 72px; border-radius: 50%; margin: 0 auto 1rem;
    background: linear-gradient(135deg, #cfa12a, #b8860b);
    display: flex; align-items: center; justify-content: center; color: #1a0633;
    box-shadow: 0 10px 30px -10px #cfa12a;
  }
  .footer-note { color: rgba(255,255,255,0.45); text-align: center; font-size: .78rem; margin-top: 1.5rem; }
</style>
@endpush

@section('content')
<div class="intake-wrap">
  <div class="text-center mb-8">
    <img src="{{ cms_image('branding.logo', 'images/logo.jpeg') }}" alt="AQ Wealth University" style="height:56px;display:inline-block;border-radius:8px;" />
  </div>

  <div class="intake-card">
    <div id="intakeForm-form-section">
      <div class="intake-eyebrow">{{ cms('intake.eyebrow', 'Client Intake') }}</div>
      <h1 class="intake-title">{!! cms('intake.title', 'Welcome to your <em>credit repair journey</em>.') !!}</h1>
      <p class="intake-sub">
        {!! cms('intake.subtitle', 'Thanks for taking the first step. Please complete this short intake so we can verify your information,
        prep your file, and send you the client agreement and onboarding next steps. Every detail matters &mdash;
        please double-check before submitting.') !!}
      </p>

      <form id="intakeForm" novalidate>
        @csrf

        <div class="field-row cols-2 field">
          <div>
            <label class="lbl">{{ cms('intake.label_full_name', 'Full Legal Name') }} <span class="req">*</span></label>
            <input class="inp" type="text" name="fullName" value="{{ $prefill['fullName'] }}" placeholder="Jane A. Doe" required>
          </div>
          <div>
            <label class="lbl">{{ cms('intake.label_email', 'Email') }} <span class="req">*</span></label>
            <input class="inp" type="email" name="email" value="{{ $prefill['email'] }}" placeholder="you@email.com" required>
          </div>
        </div>

        <div class="field-row cols-2 field">
          <div>
            <label class="lbl">{{ cms('intake.label_phone', 'Phone') }} <span class="req">*</span></label>
            <input class="inp" type="tel" name="phone" value="{{ $prefill['phone'] }}" placeholder="(555) 123-4567" required>
          </div>
          <div>
            <label class="lbl">{{ cms('intake.label_dob', 'Date of Birth') }} <span class="req">*</span></label>
            <input class="inp" type="date" name="dob" required>
          </div>
        </div>

        <div class="field">
          <label class="lbl">{{ cms('intake.label_address', 'Mailing Address') }} <span class="req">*</span></label>
          <input class="inp" type="text" name="address" placeholder="123 Main St" required>
        </div>

        <div class="field-row cols-3 field">
          <div>
            <label class="lbl">{{ cms('intake.label_city', 'City') }} <span class="req">*</span></label>
            <input class="inp" type="text" name="city" required>
          </div>
          <div>
            <label class="lbl">{{ cms('intake.label_state', 'State') }} <span class="req">*</span></label>
            <input class="inp" type="text" name="state" maxlength="2" placeholder="TX" required style="text-transform:uppercase;">
          </div>
          <div>
            <label class="lbl">{{ cms('intake.label_zip', 'ZIP') }} <span class="req">*</span></label>
            <input class="inp" type="text" name="zip" maxlength="10" required>
          </div>
        </div>

        <div class="field-row cols-2 field">
          <div>
            <label class="lbl">{{ cms('intake.label_ssn_last4', 'Last 4 of SSN') }} <span class="req">*</span></label>
            <input class="inp" type="text" name="ssnLast4" maxlength="4" inputmode="numeric" pattern="[0-9]{4}" placeholder="••••" required>
          </div>
          <div>
            <label class="lbl">{{ cms('intake.label_package', 'Package Purchased') }}</label>
            <select class="sel" name="package">
              <option value="">— Select —</option>
              <option value="Standard 3-Round" @selected($prefill['package']==='Standard 3-Round')>Standard 3-Round ($599 / $799)</option>
              <option value="Expedited 3-Round" @selected($prefill['package']==='Expedited 3-Round')>Expedited 3-Round ($999 / $1,199)</option>
              <option value="Full Credit Repair (Premium)" @selected($prefill['package']==='Full Credit Repair (Premium)')>Full Credit Repair / Premium ($1,399 / $1,599)</option>
              <option value="Credit Repair Mentorship" @selected($prefill['package']==='Credit Repair Mentorship')>Credit Repair Mentorship ($2,500)</option>
              <option value="Business Mentorship" @selected($prefill['package']==='Business Mentorship')>Business Mentorship ($1,500)</option>
              <option value="Business Blueprint" @selected($prefill['package']==='Business Blueprint')>Business Blueprint (Setup)</option>
              <option value="Skool Community" @selected($prefill['package']==='Skool Community')>Skool Community ($99/mo)</option>
              <option value="Other / Word of Mouth">Other / Word of Mouth</option>
            </select>
          </div>
        </div>

        <div class="field">
          <label class="lbl">{{ cms('intake.label_best_time', 'Best Time to Reach You') }}</label>
          <input class="inp" type="text" name="bestTime" placeholder="e.g. weekdays after 4pm CST">
        </div>

        <div class="field">
          <label class="lbl">{{ cms('intake.label_goal', 'Your Main Credit Goal') }}</label>
          <textarea class="ta" name="goal" placeholder="Tell us what you want to accomplish — buy a home, qualify for funding, raise score 100+, etc."></textarea>
        </div>

        <label class="consent">
          <input type="checkbox" name="consent" value="1" required>
          <span>
            {{ cms('intake.consent', 'I confirm the information above is accurate and authorize AQ Wealth University to contact me by phone, text,
            and email about my account. I understand my client agreement will be sent to the email above for review and signature.') }}
          </span>
        </label>

        <button type="submit" class="submit-btn" id="intakeSubmit">{!! cms('intake.submit', 'Submit Intake &amp; Send My Agreement') !!}</button>

        <div class="form-msg error" id="intakeError"></div>
      </form>
    </div>

    <div class="success-panel" id="intakeSuccess">
      <div class="success-icon">
        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
      </div>
      <h2 class="intake-title" style="font-size:1.6rem;">{{ cms('intake.success_title', 'You\'re in.') }}</h2>
      <p class="intake-sub">
        {!! cms('intake.success_message', 'We\'ve received your intake. Check your inbox &mdash; your <strong>client agreement</strong> and onboarding
        instructions are on the way. If you don\'t see it within a few minutes, check your spam folder.') !!}
      </p>
    </div>
  </div>

  <p class="footer-note">{{ cms('intake.footer_note', '256-bit SSL · Your information is private and secure.') }}</p>
</div>

@push('scripts')
<script>
  (function () {
    const form    = document.getElementById('intakeForm');
    const btn     = document.getElementById('intakeSubmit');
    const errBox  = document.getElementById('intakeError');
    const success = document.getElementById('intakeSuccess');
    const formSec = document.getElementById('intakeForm-form-section');
    const endpoint = document.body.getAttribute('data-route-intake');

    if (!form) return;

    form.addEventListener('submit', async function (e) {
      e.preventDefault();
      errBox.classList.remove('show');
      errBox.textContent = '';

      if (!form.reportValidity()) return;

      const fd = new FormData(form);
      const payload = {};
      fd.forEach((v, k) => { payload[k] = v; });
      payload.consent = form.querySelector('[name="consent"]').checked;

      btn.disabled = true;
      btn.textContent = 'Submitting…';

      const ok = await window.submitLead(endpoint, payload);

      if (ok) {
        formSec.style.display = 'none';
        success.classList.add('show');
        window.scrollTo({ top: 0, behavior: 'smooth' });
      } else {
        btn.disabled = false;
        btn.textContent = 'Submit Intake & Send My Agreement';
        errBox.textContent = 'We could not submit your intake. Please double-check your details and try again, or email us if it persists.';
        errBox.classList.add('show');
      }
    });
  })();
</script>
@endpush
@endsection
