@extends('layouts.app')

@push('styles')
  <link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endpush

@section('content')
  @include('partials.site-nav')
  @yield('page-content')
  @include('partials.site-footer')

  {{-- Credit repair modal (shared) --}}
  <div id="creditModal" class="modal-overlay" role="dialog" aria-hidden="true" aria-labelledby="creditModalTitle">
    <div class="modal-panel">
      <button type="button" class="modal-close" id="creditModalClose" aria-label="Close">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
      </button>
      <form id="creditFormModal" class="app-card" novalidate>
        <div class="quiz-panel active" data-step="1">
          <div class="quiz-step-num">Step 1 of 5</div>
          <h3 class="quiz-question">What's your biggest credit challenge right now?</h3>
          <div class="quiz-options">
            <button type="button" class="quiz-option" data-name="creditChallenge" data-value="Collections & Charge-offs"><span class="quiz-option-icon">💳</span>Collections &amp; Charge-offs</button>
            <button type="button" class="quiz-option" data-name="creditChallenge" data-value="Late Payments"><span class="quiz-option-icon">⏰</span>Late Payments</button>
            <button type="button" class="quiz-option" data-name="creditChallenge" data-value="Student Loans"><span class="quiz-option-icon">🎓</span>Student Loans</button>
            <button type="button" class="quiz-option" data-name="creditChallenge" data-value="Bankruptcy or Foreclosure"><span class="quiz-option-icon">⚖️</span>Bankruptcy or Foreclosure</button>
            <button type="button" class="quiz-option" data-name="creditChallenge" data-value="Not Sure / Multiple Issues"><span class="quiz-option-icon">🔍</span>Not Sure / Multiple Issues</button>
          </div>
        </div>
        <div class="quiz-panel" data-step="2">
          <div class="quiz-step-num">Step 2 of 5</div>
          <h3 class="quiz-question">What's your current credit score range?</h3>
          <div class="quiz-options">
            <button type="button" class="quiz-option" data-name="creditScore" data-value="Below 500 (Poor)"><span class="quiz-option-icon">🔴</span>Below 500 (Poor)</button>
            <button type="button" class="quiz-option" data-name="creditScore" data-value="500-579 (Very Poor)"><span class="quiz-option-icon">🟠</span>500–579 (Very Poor)</button>
            <button type="button" class="quiz-option" data-name="creditScore" data-value="580-669 (Fair)"><span class="quiz-option-icon">🟡</span>580–669 (Fair)</button>
            <button type="button" class="quiz-option" data-name="creditScore" data-value="670-739 (Good)"><span class="quiz-option-icon">🟢</span>670–739 (Good)</button>
            <button type="button" class="quiz-option" data-name="creditScore" data-value="I Don't Know"><span class="quiz-option-icon">❓</span>I Don't Know</button>
          </div>
        </div>
        <div class="quiz-panel" data-step="3">
          <div class="quiz-step-num">Step 3 of 5</div>
          <h3 class="quiz-question">How many negative items are on your credit report?</h3>
          <div class="quiz-options">
            <button type="button" class="quiz-option" data-name="negativeItems" data-value="1-3 Items"><span class="quiz-option-icon">1️⃣</span>1–3 Items</button>
            <button type="button" class="quiz-option" data-name="negativeItems" data-value="4-7 Items"><span class="quiz-option-icon">2️⃣</span>4–7 Items</button>
            <button type="button" class="quiz-option" data-name="negativeItems" data-value="8-15 Items"><span class="quiz-option-icon">3️⃣</span>8–15 Items</button>
            <button type="button" class="quiz-option" data-name="negativeItems" data-value="15+ Items"><span class="quiz-option-icon">🔢</span>15+ Items</button>
            <button type="button" class="quiz-option" data-name="negativeItems" data-value="I Don't Know"><span class="quiz-option-icon">❓</span>I Don't Know</button>
          </div>
        </div>
        <div class="quiz-panel" data-step="4">
          <div class="quiz-step-num">Step 4 of 5</div>
          <h3 class="quiz-question">What's your main goal for improving your credit?</h3>
          <div class="quiz-options">
            <button type="button" class="quiz-option" data-name="mainGoal" data-value="Buy a Home or Refinance"><span class="quiz-option-icon">🏡</span>Buy a Home or Refinance</button>
            <button type="button" class="quiz-option" data-name="mainGoal" data-value="Get a Car Loan"><span class="quiz-option-icon">🚗</span>Get a Car Loan</button>
            <button type="button" class="quiz-option" data-name="mainGoal" data-value="Start or Grow My Business"><span class="quiz-option-icon">💼</span>Start or Grow My Business</button>
            <button type="button" class="quiz-option" data-name="mainGoal" data-value="Access Personal Funding"><span class="quiz-option-icon">💰</span>Access Personal Funding</button>
            <button type="button" class="quiz-option" data-name="mainGoal" data-value="Peace of Mind & Fresh Start"><span class="quiz-option-icon">😌</span>Peace of Mind &amp; Fresh Start</button>
          </div>
        </div>
        <div class="quiz-panel" data-step="5">
          <div class="quiz-step-num">Step 5 of 5</div>
          <h3 class="quiz-question">Get Your Free Credit Analysis</h3>
          <div class="quiz-final-field">
            <label class="field-label">Full Name <span class="req">*</span></label>
            <input type="text" name="fullName" class="form-input" placeholder="Jane Doe" required>
          </div>
          <div class="quiz-final-field">
            <label class="field-label">Email Address <span class="req">*</span></label>
            <input type="email" name="email" class="form-input" placeholder="you@email.com" required>
          </div>
          <div class="quiz-final-field">
            <label class="field-label">Phone Number <span class="req">*</span></label>
            <input type="tel" name="phone" class="form-input" placeholder="(555) 123-4567" required>
          </div>
          <button type="button" class="quiz-final-back" data-quiz-back>← Back</button>
          <button type="submit" class="quiz-submit">Get My Free Analysis</button>
        </div>
        <div class="quiz-panel" data-step="success">
          <div class="text-center py-6">
            <div class="success-icon">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
            </div>
            <h3 class="font-display font-bold text-2xl text-white mb-2">You're in.</h3>
            <p class="text-royal-100/65 max-w-md mx-auto leading-relaxed">Your credit analysis is on the way. A senior advisor will reach out within one business day with a custom plan.</p>
            <button type="button" class="btn-ghost mt-8" id="creditModalSuccessClose">Close</button>
          </div>
        </div>
      </form>
    </div>
  </div>

  {{-- Modal controller (no auto-open — home.js handles that on the home page) --}}
  <script>
    (function () {
      var modal = document.getElementById('creditModal');
      if (!modal) return;

      function openModal() {
        modal.classList.add('open');
        modal.setAttribute('aria-hidden', 'false');
        document.body.classList.add('modal-open');
      }
      function closeModal() {
        modal.classList.remove('open');
        modal.setAttribute('aria-hidden', 'true');
        document.body.classList.remove('modal-open');
      }

      window.openCreditModal  = openModal;
      window.closeCreditModal = closeModal;

      document.getElementById('creditModalClose')?.addEventListener('click', closeModal);
      document.getElementById('creditModalSuccessClose')?.addEventListener('click', closeModal);
      modal.addEventListener('click', function (e) { if (e.target === modal) closeModal(); });
      document.addEventListener('keydown', function (e) { if (e.key === 'Escape') closeModal(); });

      document.addEventListener('click', function (e) {
        var el = e.target.closest('[data-open-credit-modal]');
        if (el) { e.preventDefault(); openModal(); }
      });
    })();
  </script>
@endsection
