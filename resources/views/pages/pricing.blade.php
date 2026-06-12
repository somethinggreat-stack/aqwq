@extends('layouts.site')

@section('title', 'Credit Repair Pricing & Packages | AQ Wealth University')
@section('description', 'Transparent credit repair pricing with Single and Duo options. Standard from $599, Expedited from $999, Premium Full Repair from $1,399. Pay over time with Sezzle, Afterpay, or Zip.')

@section('page-content')

{{-- ============ BNPL STRIPE ============ --}}
<div class="bg-royal-900 border-b border-royal-700 py-4" style="padding-top: calc(5rem + 1rem);">
  <div class="mx-auto max-w-4xl px-4 sm:px-6 lg:px-8">
    <div class="flex flex-col sm:flex-row items-center justify-center gap-3 sm:gap-6">
      <div class="flex items-center gap-2 text-royal-100">
        <svg class="w-5 h-5 text-gold-400" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="6" width="20" height="13" rx="2"/><path d="M2 11h20"/><path d="M6 16h4"/></svg>
        <span class="text-sm font-semibold">Pay Over Time &mdash; 4 interest-free payments</span>
      </div>
      <div class="flex flex-wrap items-center justify-center gap-2">
        <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-bold tracking-wide" style="background:#000; color:#b2fce4;">sezzle</span>
        <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-bold tracking-wide" style="background:#b2fce4; color:#000;">Afterpay</span>
        <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-bold tracking-wide" style="background:#1a0633; color:#fff;">Zip</span>
      </div>
      <span class="text-xs text-royal-300/60 hidden sm:inline">available at checkout</span>
    </div>
  </div>
</div>

{{-- ============ CREDIT REPAIR PACKAGES ============ --}}
<section class="py-16 lg:py-24 bg-white" id="packages">
  <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
    <div class="max-w-2xl mx-auto text-center mb-14" data-reveal>
      <div class="eyebrow justify-center">Credit Repair Packages</div>
      <h2 class="section-title">Done-for-you credit repair.<br/>Priced for every situation.</h2>
      <p class="section-sub mx-auto mt-3">Every package shows two prices: a <strong>Single</strong> price for just you, and a discounted <strong>Duo</strong> price when you bring a partner. Both on every card.</p>
    </div>

    <div class="grid md:grid-cols-3 gap-6 lg:gap-8">

      {{-- STANDARD --}}
      <div class="price-card" data-reveal data-delay="1">
        <div class="price-orb"></div>
        <div class="price-header">
          <div class="price-tier-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2 4 5v6c0 5.5 3.8 10.6 8 12 4.2-1.4 8-6.5 8-12V5l-8-3z"/></svg>
          </div>
          <div class="price-tier-label">Standard</div>
        </div>
        <h4 class="price-title">3-Round Credit Repair</h4>
        <span class="price-time-pill">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
          Results in 30–90 days
        </span>
        <div class="price-tiers">
          <div class="price-tier">
            <div class="price-tier-avatar"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="8" r="4"/><path d="M4 21c0-4.4 3.6-8 8-8s8 3.6 8 8"/></svg></div>
            <div class="price-tier-info">
              <div class="price-tier-name">Single</div>
              <div class="price-tier-meta">Just for you · one-time</div>
            </div>
            <div class="price-tier-amount"><span class="price-tier-currency">$</span><span class="price-tier-num">599</span></div>
          </div>
          <div class="price-tier-divider"></div>
          <div class="price-tier price-tier-best">
            <div class="price-tier-avatar"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="9" cy="8" r="3.5"/><path d="M2 21c0-3.9 3.1-7 7-7s7 3.1 7 7"/><circle cx="17" cy="9" r="3"/><path d="M22 19c0-2.8-2.2-5-5-5"/></svg></div>
            <div class="price-tier-info">
              <div class="price-tier-name">Duo <span class="price-tier-save">Save $399</span></div>
              <div class="price-tier-meta">You + a partner · one-time</div>
            </div>
            <div class="price-tier-amount"><span class="price-tier-currency">$</span><span class="price-tier-num">799</span></div>
          </div>
        </div>
        <div class="price-divider"></div>
        <div class="price-includes-label">What's included</div>
        <ul class="price-features">
          <li class="feat">3 dispute rounds across all 3 bureaus</li>
          <li class="feat">Personalized strategy & action plan</li>
          <li class="feat">Removal of inaccurate negatives</li>
          <li class="feat">Score-building guidance</li>
        </ul>
        <div class="price-cta-wrap">
          @if(config('site.links.checkout_standard'))
            <a href="{{ config('site.links.checkout_standard') }}" target="_blank" rel="noopener" class="btn-outline w-full">Get Started →</a>
          @else
            <a href="#" data-open-credit-modal class="btn-outline w-full">Get Started →</a>
          @endif
        </div>
      </div>

      {{-- EXPEDITED --}}
      <div class="price-card price-card-featured" data-reveal data-delay="2">
        <div class="price-ribbon">
          <svg viewBox="0 0 24 24" fill="currentColor"><path d="m12 2 2.6 6.5L21 9l-5 4.5L17.5 21 12 17.3 6.5 21 8 13.5 3 9l6.4-.5L12 2z"/></svg>
          Most Popular
        </div>
        <div class="price-orb"></div>
        <span class="price-spark price-spark-1"></span>
        <span class="price-spark price-spark-2"></span>
        <span class="price-spark price-spark-3"></span>
        <div class="price-header">
          <div class="price-tier-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="m13 2-9 12h7l-1 8 9-12h-7l1-8z"/></svg>
          </div>
          <div class="price-tier-label">Expedited</div>
        </div>
        <h4 class="price-title">3-Round Expedited</h4>
        <span class="price-time-pill">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
          Fast-track 14–30 days
        </span>
        <div class="price-tiers">
          <div class="price-tier">
            <div class="price-tier-avatar"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="8" r="4"/><path d="M4 21c0-4.4 3.6-8 8-8s8 3.6 8 8"/></svg></div>
            <div class="price-tier-info">
              <div class="price-tier-name">Single</div>
              <div class="price-tier-meta">Just for you · one-time</div>
            </div>
            <div class="price-tier-amount"><span class="price-tier-currency">$</span><span class="price-tier-num">999</span></div>
          </div>
          <div class="price-tier-divider"></div>
          <div class="price-tier price-tier-best">
            <div class="price-tier-avatar"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="9" cy="8" r="3.5"/><path d="M2 21c0-3.9 3.1-7 7-7s7 3.1 7 7"/><circle cx="17" cy="9" r="3"/><path d="M22 19c0-2.8-2.2-5-5-5"/></svg></div>
            <div class="price-tier-info">
              <div class="price-tier-name">Duo <span class="price-tier-save">Save $799</span></div>
              <div class="price-tier-meta">You + a partner · one-time</div>
            </div>
            <div class="price-tier-amount"><span class="price-tier-currency">$</span><span class="price-tier-num">1,199</span></div>
          </div>
        </div>
        <div class="price-divider"></div>
        <div class="price-includes-label">What's included</div>
        <ul class="price-features">
          <li class="feat feat-light">Priority dispute processing</li>
          <li class="feat feat-light">Aggressive bureau response cycle</li>
          <li class="feat feat-light">All Standard plan benefits</li>
          <li class="feat feat-light">Direct messaging with our team</li>
        </ul>
        <div class="price-cta-wrap">
          @if(config('site.links.checkout_expedited'))
            <a href="{{ config('site.links.checkout_expedited') }}" target="_blank" rel="noopener" class="btn-gold w-full">Choose Expedited</a>
          @else
            <a href="#" data-open-credit-modal class="btn-gold w-full">Choose Expedited</a>
          @endif
        </div>
      </div>

      {{-- PREMIUM --}}
      <div class="price-card" data-reveal data-delay="3">
        <div class="price-orb"></div>
        <div class="price-header">
          <div class="price-tier-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M2 8l4 12h12l4-12-6 4-4-7-4 7-6-4z"/><path d="M6 20h12"/></svg>
          </div>
          <div class="price-tier-label">Premium</div>
        </div>
        <h4 class="price-title">Full Credit Repair</h4>
        <span class="price-time-pill">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"/></svg>
          Done-for-you · until clean
        </span>
        <div class="price-tiers">
          <div class="price-tier">
            <div class="price-tier-avatar"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="8" r="4"/><path d="M4 21c0-4.4 3.6-8 8-8s8 3.6 8 8"/></svg></div>
            <div class="price-tier-info">
              <div class="price-tier-name">Single</div>
              <div class="price-tier-meta">Just for you · one-time</div>
            </div>
            <div class="price-tier-amount"><span class="price-tier-currency">$</span><span class="price-tier-num">1,399</span></div>
          </div>
          <div class="price-tier-divider"></div>
          <div class="price-tier price-tier-best">
            <div class="price-tier-avatar"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="9" cy="8" r="3.5"/><path d="M2 21c0-3.9 3.1-7 7-7s7 3.1 7 7"/><circle cx="17" cy="9" r="3"/><path d="M22 19c0-2.8-2.2-5-5-5"/></svg></div>
            <div class="price-tier-info">
              <div class="price-tier-name">Duo <span class="price-tier-save">Save $1,199</span></div>
              <div class="price-tier-meta">You + a partner · one-time</div>
            </div>
            <div class="price-tier-amount"><span class="price-tier-currency">$</span><span class="price-tier-num">1,599</span></div>
          </div>
        </div>
        <div class="price-divider"></div>
        <div class="price-includes-label">What's included</div>
        <ul class="price-features">
          <li class="feat">Unlimited dispute rounds until done</li>
          <li class="feat">Full credit profile rebuild</li>
          <li class="feat">Tradeline & utilization strategy</li>
          <li class="feat">Lifetime credit education access</li>
        </ul>
        <div class="price-cta-wrap">
          @if(config('site.links.checkout_premium'))
            <a href="{{ config('site.links.checkout_premium') }}" target="_blank" rel="noopener" class="btn-outline w-full">Go Premium →</a>
          @else
            <a href="#" data-open-credit-modal class="btn-outline w-full">Go Premium →</a>
          @endif
        </div>
      </div>
    </div>

    <p class="mt-10 text-center text-sm text-royal-700/50 italic">Results vary by individual credit profile. All packages include a free initial review call.</p>
  </div>
</section>

{{-- ============ FAQ ============ --}}
<section class="py-20 lg:py-28 bg-royal-50">
  <div class="mx-auto max-w-3xl px-4 sm:px-6 lg:px-8">
    <div class="text-center mb-12" data-reveal>
      <div class="eyebrow justify-center">Pricing FAQ</div>
      <h2 class="section-title">Common questions about<br/>our packages.</h2>
    </div>
    <div class="space-y-3">
      @php
        $faqs = [
          ['q' => 'What is the difference between Single and Duo?', 'a' => 'Single covers one person\'s credit file. Duo lets you bring a spouse, family member, or business partner — both files get the same scope of work at a reduced combined rate.'],
          ['q' => 'Is this a monthly subscription or one-time?', 'a' => 'Credit repair packages (Standard, Expedited, Premium) are one-time investments — not monthly subscriptions. The Community access ($97/mo) is month-to-month and can be cancelled anytime.'],
          ['q' => 'How fast will I see results?', 'a' => 'Standard 3-Round packages typically show visible results in 30–90 days. Our Expedited package is designed for fast-track results in as little as 14–30 days using priority dispute processing.'],
          ['q' => 'Can I pay over time?', 'a' => 'Yes. We offer 4 interest-free installments through Sezzle, Afterpay, and Zip. Select your preferred option at checkout.'],
          ['q' => 'What if I want to upgrade my package later?', 'a' => 'You can upgrade from Standard to Expedited or Premium at any time. We apply your initial payment toward the upgrade — just reach out to your advisor.'],
        ];
      @endphp
      @foreach($faqs as $i => $faq)
      <details class="faq" data-reveal data-delay="{{ $i + 1 }}">
        <summary>{{ $faq['q'] }}</summary>
        <p>{{ $faq['a'] }}</p>
      </details>
      @endforeach
    </div>
  </div>
</section>

{{-- ============ COMMUNITY CARD ============ --}}
<section class="py-16 lg:py-20 bg-gradient-to-b from-white to-royal-50">
  <div class="mx-auto max-w-4xl px-4 sm:px-6 lg:px-8">
    <div class="relative overflow-hidden rounded-3xl bg-royal-900 text-white p-8 sm:p-12 ring-1 ring-gold-400/40 shadow-2xl" data-reveal>
      <div class="absolute -top-20 -right-20 w-72 h-72 bg-gold-500/20 rounded-full" style="filter:blur(60px)"></div>
      <div class="absolute -bottom-32 -left-20 w-72 h-72 bg-royal-600/30 rounded-full" style="filter:blur(60px)"></div>
      <div class="relative flex flex-col sm:flex-row items-start sm:items-center justify-between gap-8">
        <div class="flex-1">
          <div class="text-xs uppercase tracking-widest text-gold-300 mb-3">Not Ready for a Package?</div>
          <h3 class="font-display text-2xl sm:text-3xl font-bold mb-3">Join the Community First</h3>
          <p class="text-royal-100/80 max-w-lg leading-relaxed mb-5">Get access to weekly live trainings, full course replays, dispute templates, and the AQ Wealth network. Learn at your own pace. Month to month — cancel anytime.</p>
          <ul class="grid sm:grid-cols-2 gap-2 text-sm">
            @foreach(['Weekly live training calls', 'Full course library & replays', 'Dispute templates & frameworks', 'Private community access', 'Credit-building roadmaps', 'Direct Q&A with advisors'] as $f)
            <li class="flex items-center gap-2 text-royal-200/80">
              <svg class="w-4 h-4 text-gold-400 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/></svg>
              {{ $f }}
            </li>
            @endforeach
          </ul>
        </div>
        <div class="text-center sm:text-right flex-shrink-0">
          <div class="font-display text-6xl font-bold gold-text leading-none">$97</div>
          <div class="text-royal-200/70 text-sm mt-1">/month · no contract</div>
          <a href="{{ config('site.links.skool', '#') }}" target="_blank" rel="noopener" class="mt-6 inline-flex btn-gold text-base">Join the Community →</a>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection
