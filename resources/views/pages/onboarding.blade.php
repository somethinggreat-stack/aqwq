@extends('layouts.app')

@section('title', 'Client Agreement & Onboarding | AQ Wealth University')
@section('description', 'Welcome to AQ Wealth University. Review and sign your client agreement and complete your 3-step onboarding to start your credit repair journey.')

@push('styles')
<style>
  body { background: #0f0420; min-height: 100vh; }
  .ob-wrap { max-width: 820px; margin: 0 auto; padding: 2.5rem 1.25rem 4rem; }

  /* Hero card */
  .ob-hero {
    background: linear-gradient(135deg, #4c1980 0%, #6322a3 60%, #7a30bf 100%);
    border-radius: 1.25rem 1.25rem 0 0; padding: 3rem 2rem 2.5rem; text-align: center;
    position: relative; overflow: hidden;
  }
  .ob-hero::before {
    content: ''; position: absolute; inset: 0; opacity: .2;
    background-image: radial-gradient(circle at 20% 20%, #cfa12a 0%, transparent 40%),
                      radial-gradient(circle at 80% 80%, #b683df 0%, transparent 40%);
  }
  .ob-eyebrow {
    position: relative; color: rgba(255,255,255,0.85);
    text-transform: uppercase; letter-spacing: .35em; font-size: .72rem; font-weight: 600;
  }
  .ob-h1 {
    font-family: 'Playfair Display', serif; color: #fff; font-weight: 700;
    font-size: clamp(2rem, 4vw, 2.6rem); line-height: 1.15; margin-top: 1rem;
    position: relative;
  }
  .ob-h1 em { color: #ecd17d; font-style: italic; }

  /* Body */
  .ob-body {
    background: #1a0633; border-radius: 0 0 1.25rem 1.25rem; padding: 2rem;
    color: rgba(255,255,255,0.85); line-height: 1.65;
  }
  .ob-greet { font-size: 1.05rem; color: #fff; margin-bottom: 1rem; }
  .ob-intro { color: rgba(255,255,255,0.78); margin-bottom: 2rem; }
  .ob-intro strong { color: #ecd17d; font-weight: 600; }

  /* Step blocks */
  .ob-step { display: flex; gap: 1.25rem; margin: 2rem 0; }
  .ob-step-num {
    font-family: 'Playfair Display', serif; font-weight: 700; font-size: 3rem;
    color: rgba(207,161,42,0.25); line-height: 1; flex-shrink: 0; min-width: 4.5rem;
  }
  .ob-step-body { flex: 1; }
  .ob-step-eyebrow { color: rgba(255,255,255,0.45); text-transform: uppercase; letter-spacing: .25em; font-size: .68rem; font-weight: 600; margin-bottom: .35rem; }
  .ob-step-title { font-family: 'Playfair Display', serif; color: #fff; font-weight: 700; font-size: 1.4rem; margin-bottom: .5rem; }
  .ob-step-desc { color: rgba(255,255,255,0.72); font-size: .95rem; }
  .ob-step-cta {
    display: inline-flex; align-items: center; gap: .5rem; margin-top: .9rem;
    padding: .65rem 1.1rem; border-radius: .55rem; background: #cfa12a; color: #1a0633;
    font-weight: 700; font-size: .85rem; text-decoration: none; letter-spacing: .02em;
    transition: filter .1s ease;
  }
  .ob-step-cta:hover { filter: brightness(1.1); }
  .ob-step-cta--placeholder { background: rgba(255,255,255,0.08); color: rgba(255,255,255,0.6); pointer-events: none; }

  /* Important callout */
  .ob-important {
    margin: 2.25rem 0; padding: 1.5rem; border-radius: 1rem;
    background: rgba(207,161,42,0.08); border: 1px solid rgba(207,161,42,0.3);
  }
  .ob-important-title {
    color: #ecd17d; text-transform: uppercase; letter-spacing: .15em;
    font-size: .8rem; font-weight: 700; margin-bottom: 1rem;
    display: flex; align-items: center; gap: .5rem;
  }
  .ob-important-title::before { content: '◆'; color: #cfa12a; }
  .ob-important ul { list-style: none; padding: 0; margin: 0; }
  .ob-important li { display: flex; gap: .65rem; padding: .5rem 0; font-size: .92rem; color: rgba(255,255,255,0.82); }
  .ob-important li::before { content: '✓'; color: #cfa12a; font-weight: 700; flex-shrink: 0; }
  .ob-important li.no::before { content: '✗'; color: #ff8c8c; }
  .ob-important li.no { color: #ff8c8c; font-weight: 600; }
  .ob-important strong { color: #fff; }

  /* Agreement text */
  .ob-section-title {
    font-family: 'Playfair Display', serif; color: #fff; font-weight: 700;
    font-size: 1.4rem; margin: 2.5rem 0 1rem; padding-top: 1.5rem;
    border-top: 1px solid rgba(255,255,255,0.08);
  }
  .ob-agreement {
    background: rgba(0,0,0,0.25); border: 1px solid rgba(255,255,255,0.08);
    border-radius: .8rem; padding: 1.25rem 1.5rem; max-height: 320px; overflow-y: auto;
    color: rgba(255,255,255,0.78); font-size: .9rem; line-height: 1.65;
  }
  .ob-agreement h4 { color: #fff; font-weight: 700; margin: 1rem 0 .35rem; font-size: .98rem; }
  .ob-agreement p { margin: .6rem 0; }
  .ob-agreement::-webkit-scrollbar { width: 6px; }
  .ob-agreement::-webkit-scrollbar-thumb { background: rgba(207,161,42,0.4); border-radius: 3px; }

  /* Signature pad */
  .sig-block { margin-top: 1.5rem; }
  .sig-row { display: grid; gap: 1rem; grid-template-columns: 1fr; }
  @media (min-width: 640px) { .sig-row.cols-2 { grid-template-columns: 1fr 1fr; } }
  .lbl { display: block; color: rgba(255,255,255,0.85); font-size: .85rem; font-weight: 500; margin-bottom: .35rem; }
  .lbl .req { color: #ff8c8c; margin-left: 2px; }
  .inp {
    width: 100%; background: rgba(0,0,0,0.25); border: 1px solid rgba(255,255,255,0.1);
    color: #fff; padding: .75rem .9rem; border-radius: .6rem; font-size: .95rem;
  }
  .inp:focus { outline: none; border-color: #cfa12a; background: rgba(0,0,0,0.4); }
  .inp[readonly] { color: rgba(255,255,255,0.55); cursor: default; }
  .sig-pad-wrap {
    margin-top: 1rem; background: #fff; border-radius: .7rem; overflow: hidden;
    box-shadow: 0 8px 24px -8px rgba(0,0,0,0.5);
  }
  .sig-pad-toolbar {
    display: flex; justify-content: space-between; align-items: center;
    padding: .55rem .85rem; background: #f6f6f9; border-bottom: 1px solid #e6e6ec;
    color: #4c1980; font-size: .8rem; font-weight: 600;
  }
  .sig-clear-btn {
    background: transparent; border: 0; color: #6322a3; font-weight: 600;
    text-decoration: underline; cursor: pointer; font-size: .8rem;
  }
  #sigCanvas { width: 100%; height: 180px; display: block; touch-action: none; cursor: crosshair; }

  /* Submit */
  .submit-btn {
    width: 100%; margin-top: 1.75rem; padding: 1.05rem 1.25rem; border-radius: .7rem;
    background: linear-gradient(180deg, #cfa12a 0%, #9a6f08 100%);
    color: #1a0633; font-weight: 700; font-size: 1rem; letter-spacing: .02em;
    border: 0; cursor: pointer; transition: filter .1s ease;
  }
  .submit-btn:hover { filter: brightness(1.06); }
  .submit-btn[disabled] { opacity: .55; cursor: not-allowed; }
  .form-msg { margin-top: 1rem; padding: .85rem 1rem; border-radius: .6rem; font-size: .9rem; display: none; }
  .form-msg.show { display: block; }
  .form-msg.error { background: rgba(220,80,80,0.12); color: #ffb3b3; border: 1px solid rgba(220,80,80,0.4); }

  /* Success state */
  .success-panel { display: none; text-align: center; padding: 2rem 1rem; }
  .success-panel.show { display: block; }
  .success-icon {
    width: 80px; height: 80px; border-radius: 50%; margin: 0 auto 1.25rem;
    background: linear-gradient(135deg, #cfa12a, #b8860b);
    display: flex; align-items: center; justify-content: center; color: #1a0633;
    box-shadow: 0 14px 40px -10px #cfa12a;
  }
  .signoff { margin-top: 2.5rem; padding-top: 1.5rem; border-top: 1px solid rgba(255,255,255,0.08); color: rgba(255,255,255,0.7); }
  .signoff .name { font-family: 'Playfair Display', serif; font-style: italic; color: #ecd17d; font-size: 1.1rem; }
  .signoff .role { color: rgba(255,255,255,0.5); font-size: .78rem; text-transform: uppercase; letter-spacing: .15em; margin-top: .25rem; }
</style>
@endpush

@section('content')
<div class="ob-wrap">

  <!-- HERO -->
  <div class="ob-hero">
    <div class="ob-eyebrow">{{ cms('onboarding.eyebrow', 'Client Onboarding') }}</div>
    <h1 class="ob-h1">{!! cms('onboarding.title', 'Welcome to Your <em>Credit Repair Journey</em>') !!}</h1>
  </div>

  <div class="ob-body">
    <div id="ob-form-section">

      <p class="ob-greet">
        Hi {{ $prefill['fullName'] ? explode(' ', $prefill['fullName'])[0] : 'there' }},
      </p>
      <p class="ob-intro">
        {!! cms('onboarding.intro', 'Congratulations on taking the first step toward reclaiming your credit. Below are the <strong>3 onboarding steps</strong> required before your repair process officially begins. Please read each one carefully &mdash; every detail matters.') !!}
      </p>

      <!-- STEP 01 -->
      <div class="ob-step">
        <div class="ob-step-num">01</div>
        <div class="ob-step-body">
          <div class="ob-step-eyebrow">{{ cms('onboarding.step1_eyebrow', 'Step One') }}</div>
          <h3 class="ob-step-title">{{ cms('onboarding.step1_title', 'Activate Credit Monitoring') }}</h3>
          <p class="ob-step-desc">
            {!! cms('onboarding.step1_desc', 'Sign up for credit monitoring so we can pull your three-bureau reports and start filing disputes. This is non-negotiable &mdash; without monitoring access, we cannot work your file.') !!}
          </p>
          @if(config('site.links.credit_monitoring'))
            <a class="ob-step-cta" href="{{ config('site.links.credit_monitoring') }}" target="_blank" rel="noopener">{{ cms('onboarding.step1_cta', 'Activate Monitoring →') }}</a>
          @else
            <span class="ob-step-cta ob-step-cta--placeholder">{{ cms('onboarding.step1_cta_placeholder', 'Link arrives by email') }}</span>
          @endif
        </div>
      </div>

      <!-- STEP 02 -->
      <div class="ob-step">
        <div class="ob-step-num">02</div>
        <div class="ob-step-body">
          <div class="ob-step-eyebrow">{{ cms('onboarding.step2_eyebrow', 'Step Two') }}</div>
          <h3 class="ob-step-title">{!! cms('onboarding.step2_title', 'Upload ID &amp; Proof of Address') !!}</h3>
          <p class="ob-step-desc">
            {{ cms('onboarding.step2_desc', 'Reply to your onboarding email with a clear photo of your government-issued ID and a recent utility bill or bank statement (within the last 60 days) showing your current mailing address.') }}
          </p>
        </div>
      </div>

      <!-- STEP 03 -->
      <div class="ob-step">
        <div class="ob-step-num">03</div>
        <div class="ob-step-body">
          <div class="ob-step-eyebrow">{{ cms('onboarding.step3_eyebrow', 'Step Three') }}</div>
          <h3 class="ob-step-title">{{ cms('onboarding.step3_title', 'Access Your Client Portal') }}</h3>
          <p class="ob-step-desc">
            {!! cms('onboarding.step3_desc', 'Once Steps 1 and 2 are complete, you will receive client portal access within 24&ndash;48 hours. From there, your journey officially begins. 💜') !!}
          </p>
          @if(config('site.links.client_portal'))
            <a class="ob-step-cta" href="{{ config('site.links.client_portal') }}" target="_blank" rel="noopener">{{ cms('onboarding.step3_cta', 'Open Portal →') }}</a>
          @endif
        </div>
      </div>

      <!-- IMPORTANT INFORMATION -->
      <div class="ob-important">
        <div class="ob-important-title">{{ cms('onboarding.important_title', 'Very Important Information') }}</div>
        <ul>
          <li>{!! cms('onboarding.important_item1', 'Please ensure <strong>ALL required login credentials are correct</strong>. This is your responsibility &mdash; you will be held 100% accountable.') !!}</li>
          <li>{!! cms('onboarding.important_item2', 'Updates from the bureaus arrive every <strong>30 to 45 days</strong>. Please allow this timeframe before expecting changes.') !!}</li>
          <li>{!! cms('onboarding.important_item3', 'I\'ll personally check in with you <strong>every two weeks as a courtesy</strong> &mdash; not including weekends or holidays.') !!}</li>
          <li>{!! cms('onboarding.important_item4', 'Trust the process. Real results take time &mdash; consistency wins.') !!}</li>
          <li class="no">{!! cms('onboarding.important_item5', 'There are <strong>NO REFUNDS.</strong>') !!}</li>
        </ul>
      </div>

      <!-- AGREEMENT -->
      <h2 class="ob-section-title">{{ cms('onboarding.agreement_section_title', 'Client Service Agreement') }}</h2>
      <p style="color:rgba(255,255,255,0.7); font-size:.9rem; margin-bottom:1rem;">
        {{ cms('onboarding.agreement_intro', 'Please read the agreement below in full, then type your full legal name and sign in the box to authorize.') }}
      </p>

      <div class="ob-agreement" id="agreementText">
        {{-- TODO(danielle): replace this placeholder with your final legal agreement language. --}}
        <h4>{{ cms('onboarding.agreement_h1', '1. Scope of Services') }}</h4>
        <p>
          {{ cms('onboarding.agreement_p1', 'AQ Wealth University LLC ("Company") agrees to provide credit consulting and dispute services on behalf of the undersigned client ("Client"), including review of credit reports from Equifax, Experian, and TransUnion, identification of inaccurate or unverifiable items, and submission of dispute correspondence to the bureaus and/or furnishers in accordance with the Fair Credit Reporting Act (15 U.S.C. § 1681 et seq.) and the Credit Repair Organizations Act (15 U.S.C. § 1679 et seq.).') }}
        </p>

        <h4>{{ cms('onboarding.agreement_h2', '2. Client Responsibilities') }}</h4>
        <p>
          {{ cms('onboarding.agreement_p2', 'Client agrees to (a) provide accurate personal information, (b) maintain active credit monitoring as directed in Step 01, (c) forward all bureau and creditor correspondence to Company within 5 business days of receipt, and (d) refrain from disputing items directly with the bureaus during the term of this engagement.') }}
        </p>

        <h4>{!! cms('onboarding.agreement_h3', '3. Term &amp; Fees') !!}</h4>
        <p>
          {!! cms('onboarding.agreement_p3', 'Fees are as quoted at the point of purchase and are <strong>non-refundable</strong> once services have begun. Client acknowledges that no specific outcome is guaranteed and that results vary based on the accuracy and verifiability of items on Client\'s credit profile. Bureau response cycles run <strong>30&ndash;45 days</strong>.') !!}
        </p>

        <h4>{{ cms('onboarding.agreement_h4', '4. Cancellation') }}</h4>
        <p>
          {{ cms('onboarding.agreement_p4a', 'Pursuant to the CROA, Client has the right to cancel this contract within 3 business days of signing without penalty by sending written notice to') }} {{ config('site.contact_email') }}. {{ cms('onboarding.agreement_p4b', 'After 3 business days, all fees paid are earned and non-refundable.') }}
        </p>

        <h4>{!! cms('onboarding.agreement_h5', '5. Authorization &amp; Limited Power of Attorney') !!}</h4>
        <p>
          {{ cms('onboarding.agreement_p5', 'Client authorizes Company to communicate with credit bureaus, furnishers, collection agencies, and creditors on Client\'s behalf for the limited purpose of disputing inaccurate, incomplete, or unverifiable items, and to receive copies of credit reports and correspondence related to such disputes.') }}
        </p>

        <h4>{{ cms('onboarding.agreement_h6', '6. Communication Consent') }}</h4>
        <p>
          {{ cms('onboarding.agreement_p6', 'Client consents to receive calls, SMS messages, and emails from Company at the contact information provided for purposes of servicing this account. Standard message and data rates may apply. Client may opt out at any time by replying STOP.') }}
        </p>

        <h4>{{ cms('onboarding.agreement_h7', '7. Entire Agreement') }}</h4>
        <p>
          {{ cms('onboarding.agreement_p7', 'This document, together with the intake form completed by Client, constitutes the entire agreement between the parties and supersedes any prior verbal or written representations.') }}
        </p>
      </div>

      <!-- SIGNATURE -->
      <form id="signForm" novalidate>
        @csrf

        <div class="sig-block">
          <div class="sig-row cols-2">
            <div>
              <label class="lbl">{{ cms('onboarding.sig_name_label', 'Full Legal Name (typed)') }} <span class="req">*</span></label>
              <input class="inp" type="text" name="typedSignature" value="{{ $prefill['fullName'] }}" placeholder="Type your full legal name" required>
            </div>
            <div>
              <label class="lbl">{{ cms('onboarding.sig_date_label', 'Date') }}</label>
              <input class="inp" type="text" id="signDateField" readonly>
            </div>
          </div>

          <input type="hidden" name="email"    value="{{ $prefill['email'] }}">
          <input type="hidden" name="phone"    value="{{ $prefill['phone'] }}">
          <input type="hidden" name="package"  value="{{ $prefill['package'] }}">

          <label class="lbl" style="margin-top:1rem;">{{ cms('onboarding.sig_here_label', 'Sign Here') }} <span class="req">*</span></label>
          <div class="sig-pad-wrap">
            <div class="sig-pad-toolbar">
              <span>{{ cms('onboarding.sig_pad_hint', 'Sign with mouse, trackpad, or finger') }}</span>
              <button type="button" class="sig-clear-btn" id="sigClear">{{ cms('onboarding.sig_clear', 'Clear') }}</button>
            </div>
            <canvas id="sigCanvas"></canvas>
          </div>

          <button type="submit" class="submit-btn" id="signSubmit">{!! cms('onboarding.sig_submit', 'I Agree &amp; Sign') !!}</button>
          <div class="form-msg error" id="signError"></div>
        </div>
      </form>

      <div class="signoff">
        <div>{!! cms('onboarding.signoff_help', 'If any step is unclear, simply reply to your onboarding email &mdash; we\'re here to help you get started the right way.') !!}</div>
        <div style="margin-top:1.25rem;">
          {{ cms('onboarding.signoff_closing', 'To your financial freedom,') }}
          <div class="name">{{ cms('onboarding.signoff_name', 'Danielle Todd') }}</div>
          <div class="role">{{ cms('onboarding.signoff_role', 'Founder · AQ Wealth University') }}</div>
        </div>
      </div>
    </div>

    <!-- Success state -->
    <div class="success-panel" id="signSuccess">
      <div class="success-icon">
        <svg width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
      </div>
      <h2 class="ob-h1" style="font-size:1.8rem;">{!! cms('onboarding.success_title', 'You\'re <em>signed</em>.') !!}</h2>
      <p style="color:rgba(255,255,255,0.78); margin-top:.5rem; line-height:1.65;">
        {!! cms('onboarding.success_body', 'Your client agreement has been received. A signed copy is on its way to your inbox. Now finish <strong style="color:#ecd17d;">Steps 01 and 02</strong> above, and we\'ll have your portal access ready within 24&ndash;48 hours.') !!}
      </p>
      @if(config('site.links.credit_monitoring'))
        <a class="ob-step-cta" style="margin-top:1.5rem;" href="{{ config('site.links.credit_monitoring') }}" target="_blank" rel="noopener">{{ cms('onboarding.success_cta', 'Activate Credit Monitoring →') }}</a>
      @endif
    </div>
  </div>
</div>

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/signature_pad@4.1.7/dist/signature_pad.umd.min.js"></script>
<script>
  (function () {
    // Date stamp
    const dateField = document.getElementById('signDateField');
    if (dateField) {
      const d = new Date();
      dateField.value = d.toLocaleDateString('en-US', { year:'numeric', month:'long', day:'numeric' });
    }

    // Signature pad
    const canvas = document.getElementById('sigCanvas');
    if (!canvas || typeof SignaturePad === 'undefined') return;

    function resizeCanvas() {
      const ratio = Math.max(window.devicePixelRatio || 1, 1);
      canvas.width  = canvas.offsetWidth  * ratio;
      canvas.height = canvas.offsetHeight * ratio;
      canvas.getContext('2d').scale(ratio, ratio);
      pad.clear();
    }

    const pad = new SignaturePad(canvas, {
      backgroundColor: '#ffffff',
      penColor: '#1a0633',
      minWidth: 0.7,
      maxWidth: 2.2,
    });

    window.addEventListener('resize', resizeCanvas);
    resizeCanvas();

    document.getElementById('sigClear').addEventListener('click', function () { pad.clear(); });

    // Form submission
    const form     = document.getElementById('signForm');
    const btn      = document.getElementById('signSubmit');
    const errBox   = document.getElementById('signError');
    const success  = document.getElementById('signSuccess');
    const formSec  = document.getElementById('ob-form-section');
    const endpoint = document.body.getAttribute('data-route-onboarding-signed');

    form.addEventListener('submit', async function (e) {
      e.preventDefault();
      errBox.classList.remove('show');
      errBox.textContent = '';

      const typed = form.querySelector('[name="typedSignature"]').value.trim();
      if (!typed) {
        errBox.textContent = 'Please type your full legal name.';
        errBox.classList.add('show');
        return;
      }
      if (pad.isEmpty()) {
        errBox.textContent = 'Please sign in the box above before submitting.';
        errBox.classList.add('show');
        return;
      }

      const payload = {
        fullName:        typed,
        typedSignature:  typed,
        drawnSignature:  pad.toDataURL('image/png'),
        email:           form.querySelector('[name="email"]').value || '',
        phone:           form.querySelector('[name="phone"]').value || '',
        package:         form.querySelector('[name="package"]').value || '',
        agreedAt:        new Date().toISOString(),
        agreementVersion:@json(config('site.agreement.version', 'v1.0')),
      };

      btn.disabled = true;
      btn.textContent = 'Submitting…';

      const ok = await window.submitLead(endpoint, payload);

      if (ok) {
        formSec.style.display = 'none';
        success.classList.add('show');
        window.scrollTo({ top: 0, behavior: 'smooth' });
      } else {
        btn.disabled = false;
        btn.textContent = 'I Agree & Sign';
        errBox.textContent = 'We could not submit your signature. Please try again or contact us if it persists.';
        errBox.classList.add('show');
      }
    });
  })();
</script>
@endpush
@endsection
