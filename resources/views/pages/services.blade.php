@extends('layouts.site')

@section('title', 'Credit Repair & Financial Services | AQ Wealth University')
@section('description', 'From credit repair and business structure to funding and wealth education — AQ Wealth University delivers the full financial transformation stack. See all six services.')

@section('page-content')

{{-- ============ HERO ============ --}}
<section class="relative overflow-hidden pt-40 pb-24 lg:pt-48 lg:pb-32 hero-bg text-white">
  <div class="hero-grid"></div>
  <div class="hero-orb orb-gold"></div>
  <div class="hero-orb orb-purple"></div>
  <div class="relative mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 text-center">
    <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-gold-500/15 ring-1 ring-gold-400/40 text-gold-200 text-xs tracking-widest uppercase mb-6">
      <span class="w-1.5 h-1.5 rounded-full bg-gold-400 animate-pulse"></span>
      What We Do
    </div>
    <h1 class="font-display text-4xl sm:text-5xl lg:text-6xl font-bold leading-tight tracking-tight max-w-4xl mx-auto">
      Five Pillars to <span class="gold-text">Build, Protect</span><br/>and Leverage Your Wealth.
    </h1>
    <p class="mt-6 text-lg sm:text-xl text-royal-100/85 max-w-2xl mx-auto leading-relaxed">
      Whether you're cleaning up credit, building business credit, or trying to get funded for the first time — you get the structure, the teaching, and the work done with you so you can move forward with confidence.
    </p>
    <div class="mt-8 flex flex-col sm:flex-row gap-3 justify-center">
      <a href="/pricing" class="btn-gold text-base">See Pricing &amp; Packages →</a>
      <a href="{{ route('home') }}#contact" class="btn-ghost text-base">Get Free Credit Review</a>
    </div>
    <div class="mt-10 flex flex-wrap justify-center items-center gap-x-8 gap-y-3 text-sm text-royal-100/70">
      <div class="flex items-center gap-2">
        <svg class="w-5 h-5 text-gold-300" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/></svg>
        Results in as fast as 14–30 days
      </div>
      <div class="flex items-center gap-2">
        <svg class="w-5 h-5 text-gold-300" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/></svg>
        500+ clients served
      </div>
      <div class="flex items-center gap-2">
        <svg class="w-5 h-5 text-gold-300" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/></svg>
        Mentorship from people who do this work
      </div>
    </div>
  </div>
</section>

{{-- ============ SERVICES GRID ============ --}}
<section class="py-24 lg:py-32 bg-white">
  <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
    <div class="max-w-2xl mx-auto text-center mb-16" data-reveal>
      <div class="eyebrow justify-center">Our Services</div>
      <h2 class="section-title">Everything your financial journey needs,<br/>under one roof.</h2>
    </div>

    <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8">

      {{-- 01 Credit Repair --}}
      <div class="group bg-white rounded-3xl border border-royal-100 p-8 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300" data-reveal data-delay="1">
        <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-royal-700 to-royal-900 flex items-center justify-center mb-5 shadow-lg">
          <svg class="w-7 h-7 text-gold-300" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M3 12a9 9 0 109-9"/><path d="M3 12V3h9"/><path d="m8 12 3 3 5-6"/></svg>
        </div>
        <div class="text-xs font-bold tracking-widest text-gold-500 uppercase mb-2">01 · Credit Repair</div>
        <h3 class="font-display text-2xl font-bold text-royal-900 mb-3">Remove What's Dragging You Down</h3>
        <p class="text-royal-700/75 leading-relaxed mb-4">Disputes, deletions, and strategic challenges to remove inaccurate, unverifiable, and outdated negative items. We file targeted disputes under FCRA §611 — not template letters bureaus ignore.</p>
        <ul class="space-y-2 mb-6">
          <li class="flex items-center gap-2 text-sm text-royal-700">
            <svg class="w-4 h-4 text-gold-500 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/></svg>
            Collections, charge-offs, and late payments
          </li>
          <li class="flex items-center gap-2 text-sm text-royal-700">
            <svg class="w-4 h-4 text-gold-500 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/></svg>
            Bankruptcies, medical debt &amp; judgments
          </li>
          <li class="flex items-center gap-2 text-sm text-royal-700">
            <svg class="w-4 h-4 text-gold-500 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/></svg>
            Results typically visible in 30–90 days
          </li>
        </ul>
        <a href="/pricing" class="inline-flex items-center gap-2 text-sm font-semibold text-gold-600 hover:text-gold-500 transition group-hover:gap-3">
          See Credit Repair Packages
          <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14m-6-6 6 6-6 6"/></svg>
        </a>
      </div>

      {{-- 02 Rebuilding Credit --}}
      <div class="group bg-white rounded-3xl border border-royal-100 p-8 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300" data-reveal data-delay="2">
        <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-royal-600 to-royal-800 flex items-center justify-center mb-5 shadow-lg">
          <svg class="w-7 h-7 text-gold-300" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M3 21h18"/><path d="M5 21V10l7-5 7 5v11"/><path d="M9 21v-6h6v6"/></svg>
        </div>
        <div class="text-xs font-bold tracking-widest text-gold-500 uppercase mb-2">02 · Rebuilding Credit</div>
        <h3 class="font-display text-2xl font-bold text-royal-900 mb-3">Make Your Score Hold and Grow</h3>
        <p class="text-royal-700/75 leading-relaxed mb-4">Tradelines, utilization strategy, and the right credit mix so your score doesn't just jump once — it stays up and keeps climbing. We build the right foundation for lasting results.</p>
        <ul class="space-y-2 mb-6">
          <li class="flex items-center gap-2 text-sm text-royal-700">
            <svg class="w-4 h-4 text-gold-500 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/></svg>
            Strategic tradeline placement
          </li>
          <li class="flex items-center gap-2 text-sm text-royal-700">
            <svg class="w-4 h-4 text-gold-500 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/></svg>
            Utilization optimization (30% rule &amp; beyond)
          </li>
          <li class="flex items-center gap-2 text-sm text-royal-700">
            <svg class="w-4 h-4 text-gold-500 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/></svg>
            Credit mix coaching for sustained growth
          </li>
        </ul>
        <a href="/pricing" class="inline-flex items-center gap-2 text-sm font-semibold text-gold-600 hover:text-gold-500 transition group-hover:gap-3">
          View Packages
          <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14m-6-6 6 6-6 6"/></svg>
        </a>
      </div>

      {{-- 03 Business Structure --}}
      <div class="group bg-white rounded-3xl border border-royal-100 p-8 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300" data-reveal data-delay="3">
        <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-gold-600 to-gold-800 flex items-center justify-center mb-5 shadow-lg">
          <svg class="w-7 h-7 text-white" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><rect x="3" y="7" width="18" height="13" rx="2"/><path d="M8 7V5a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"/><path d="M3 13h18"/></svg>
        </div>
        <div class="text-xs font-bold tracking-widest text-gold-500 uppercase mb-2">03 · Business Structure</div>
        <h3 class="font-display text-2xl font-bold text-royal-900 mb-3">Set Up Lenders Take Seriously</h3>
        <p class="text-royal-700/75 leading-relaxed mb-4">LLC formation, EIN, dedicated business bank account, professional address, and full compliance setup — all done the way lenders and underwriters expect to see it.</p>
        <ul class="space-y-2 mb-6">
          <li class="flex items-center gap-2 text-sm text-royal-700">
            <svg class="w-4 h-4 text-gold-500 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/></svg>
            LLC or corporation formation + EIN
          </li>
          <li class="flex items-center gap-2 text-sm text-royal-700">
            <svg class="w-4 h-4 text-gold-500 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/></svg>
            D-U-N-S number for business credit
          </li>
          <li class="flex items-center gap-2 text-sm text-royal-700">
            <svg class="w-4 h-4 text-gold-500 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/></svg>
            Professional business address + banking
          </li>
        </ul>
        <a href="/business-setup" class="inline-flex items-center gap-2 text-sm font-semibold text-gold-600 hover:text-gold-500 transition group-hover:gap-3">
          See Business Setup Program
          <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14m-6-6 6 6-6 6"/></svg>
        </a>
      </div>

      {{-- 04 Business Credit --}}
      <div class="group bg-white rounded-3xl border border-royal-100 p-8 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300" data-reveal data-delay="1">
        <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-royal-500 to-royal-700 flex items-center justify-center mb-5 shadow-lg">
          <svg class="w-7 h-7 text-gold-300" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><rect x="2" y="6" width="20" height="13" rx="2"/><path d="M2 11h20"/><path d="M6 16h4"/></svg>
        </div>
        <div class="text-xs font-bold tracking-widest text-gold-500 uppercase mb-2">04 · Business Credit</div>
        <h3 class="font-display text-2xl font-bold text-royal-900 mb-3">Unlock Real Corporate Credit</h3>
        <p class="text-royal-700/75 leading-relaxed mb-4">Establish Dun &amp; Bradstreet, open vendor accounts, and build trade lines that let your business borrow on its own merit — without your personal Social Security number on the line.</p>
        <ul class="space-y-2 mb-6">
          <li class="flex items-center gap-2 text-sm text-royal-700">
            <svg class="w-4 h-4 text-gold-500 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/></svg>
            Dun &amp; Bradstreet profile build-out
          </li>
          <li class="flex items-center gap-2 text-sm text-royal-700">
            <svg class="w-4 h-4 text-gold-500 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/></svg>
            Vendor accounts that report positively
          </li>
          <li class="flex items-center gap-2 text-sm text-royal-700">
            <svg class="w-4 h-4 text-gold-500 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/></svg>
            Path to unsecured business lines
          </li>
        </ul>
        <a href="/business-setup" class="inline-flex items-center gap-2 text-sm font-semibold text-gold-600 hover:text-gold-500 transition group-hover:gap-3">
          Learn About Business Setup
          <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14m-6-6 6 6-6 6"/></svg>
        </a>
      </div>

      {{-- 05 Personal & Business Funding --}}
      <div class="group bg-white rounded-3xl border border-royal-100 p-8 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300" data-reveal data-delay="2">
        <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-gold-500 to-royal-700 flex items-center justify-center mb-5 shadow-lg">
          <svg class="w-7 h-7 text-white" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M12 2v20"/><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg>
        </div>
        <div class="text-xs font-bold tracking-widest text-gold-500 uppercase mb-2">05 · Personal &amp; Business Funding</div>
        <h3 class="font-display text-2xl font-bold text-royal-900 mb-3">Stack Capital the Smart Way</h3>
        <p class="text-royal-700/75 leading-relaxed mb-4">Personal lines, business lines of credit, and capital placement — structured and stacked the right way so you maximize what you can borrow without triggering hard pulls that hurt your score.</p>
        <ul class="space-y-2 mb-6">
          <li class="flex items-center gap-2 text-sm text-royal-700">
            <svg class="w-4 h-4 text-gold-500 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/></svg>
            0% APR business credit cards
          </li>
          <li class="flex items-center gap-2 text-sm text-royal-700">
            <svg class="w-4 h-4 text-gold-500 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/></svg>
            SBA loans, term loans, &amp; lines of credit
          </li>
          <li class="flex items-center gap-2 text-sm text-royal-700">
            <svg class="w-4 h-4 text-gold-500 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/></svg>
            Pre-qualify in under 5 minutes, soft pull
          </li>
        </ul>
        <a href="{{ route('funding') }}" class="inline-flex items-center gap-2 text-sm font-semibold text-gold-600 hover:text-gold-500 transition group-hover:gap-3">
          Apply for Funding
          <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14m-6-6 6 6-6 6"/></svg>
        </a>
      </div>

      {{-- 06 Wealth University --}}
      <div class="group bg-white rounded-3xl border border-royal-100 p-8 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300" data-reveal data-delay="3">
        <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-royal-800 to-royal-950 flex items-center justify-center mb-5 shadow-lg">
          <svg class="w-7 h-7 text-gold-300" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M22 10 12 5 2 10l10 5 10-5z"/><path d="M6 12v5c3 2 9 2 12 0v-5"/></svg>
        </div>
        <div class="text-xs font-bold tracking-widest text-gold-500 uppercase mb-2">06 · Wealth University</div>
        <h3 class="font-display text-2xl font-bold text-royal-900 mb-3">Learn. Network. Grow.</h3>
        <p class="text-royal-700/75 leading-relaxed mb-4">Live weekly trainings, recorded replays, proven frameworks, and a community of people who are moving in the same direction as you. Month to month. No contracts. Cancel anytime.</p>
        <ul class="space-y-2 mb-6">
          <li class="flex items-center gap-2 text-sm text-royal-700">
            <svg class="w-4 h-4 text-gold-500 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/></svg>
            Weekly live training &amp; Q&amp;A calls
          </li>
          <li class="flex items-center gap-2 text-sm text-royal-700">
            <svg class="w-4 h-4 text-gold-500 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/></svg>
            Full course library &amp; replay access
          </li>
          <li class="flex items-center gap-2 text-sm text-royal-700">
            <svg class="w-4 h-4 text-gold-500 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/></svg>
            AQ Wealth private network access
          </li>
        </ul>
        <a href="{{ config('site.links.skool', '#contact') }}" target="_blank" rel="noopener" class="inline-flex items-center gap-2 text-sm font-semibold text-gold-600 hover:text-gold-500 transition group-hover:gap-3">
          Join the Community
          <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14m-6-6 6 6-6 6"/></svg>
        </a>
      </div>

    </div>
  </div>
</section>

{{-- ============ WHY AQ WEALTH ============ --}}
<section class="py-24 lg:py-32 bg-royal-950 text-white relative overflow-hidden">
  <div class="hero-orb orb-gold" style="top:-5%;left:-10%;opacity:0.2"></div>
  <div class="hero-orb orb-purple" style="bottom:-5%;right:-10%;opacity:0.25"></div>
  <div class="relative mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
    <div class="grid lg:grid-cols-2 gap-14 items-center">
      <div data-reveal>
        <div class="eyebrow">Why AQ Wealth University</div>
        <h2 class="section-title text-white">Why other companies<br/><span class="gold-text">fall short.</span></h2>
        <p class="mt-5 text-royal-100/70 leading-relaxed">Most companies send the same template letter for every client and call it a strategy. We built something different. Every dispute is targeted, every client has a dedicated advisor, and you see every move we make.</p>
        <div class="mt-8 grid grid-cols-3 gap-4">
          <div class="text-center px-3 py-4 rounded-xl" style="background:rgba(207,161,42,0.07);border:1px solid rgba(207,161,42,0.18);">
            <div class="font-display text-3xl font-bold gold-text">500+</div>
            <div class="text-xs text-royal-300/70 mt-1">Clients Served</div>
          </div>
          <div class="text-center px-3 py-4 rounded-xl" style="background:rgba(207,161,42,0.07);border:1px solid rgba(207,161,42,0.18);">
            <div class="font-display text-3xl font-bold gold-text">100+</div>
            <div class="text-xs text-royal-300/70 mt-1">Avg. Point Increase</div>
          </div>
          <div class="text-center px-3 py-4 rounded-xl" style="background:rgba(207,161,42,0.07);border:1px solid rgba(207,161,42,0.18);">
            <div class="font-display text-3xl font-bold gold-text">90d</div>
            <div class="text-xs text-royal-300/70 mt-1">Avg. Timeline</div>
          </div>
        </div>
        <div class="mt-8 flex flex-col sm:flex-row gap-3">
          <a href="/pricing" class="btn-gold">See Pricing &amp; Packages →</a>
          <a href="{{ route('home') }}#contact" class="btn-ghost">Get Free Review</a>
        </div>
      </div>
      <div class="space-y-4" data-reveal data-delay="2">
        @php
          $features = [
            ['num' => '01', 'title' => 'Targeted Disputes, Not Templates', 'desc' => 'Every challenge we file is built around your specific violations under FCRA and FDCPA — not cookie-cutter letters bureaus routinely ignore.'],
            ['num' => '02', 'title' => 'Real-Time Transparency', 'desc' => 'Every dispute status, bureau response, and score update is visible the moment it happens. You always know what was filed, what came back, and what is next.'],
            ['num' => '03', 'title' => 'One Advisor. Your Entire Journey.', 'desc' => 'The same advisor who reviews your file on day one handles your case through completion. No call centers, no re-explaining yourself.'],
            ['num' => '04', 'title' => 'Personal Credit to Business Funding', 'desc' => 'We don\'t stop at your personal score. We show you how to build business credit, structure your company, and access capital without relying on your SSN.'],
          ];
        @endphp
        @foreach($features as $f)
        <div class="flex gap-4 p-5 rounded-2xl" style="background:rgba(255,255,255,0.04);border:1px solid rgba(255,255,255,0.07);">
          <div class="flex-shrink-0 w-10 h-10 rounded-xl flex items-center justify-center text-xs font-bold text-gold-400" style="background:rgba(207,161,42,0.12);">{{ $f['num'] }}</div>
          <div>
            <div class="font-semibold text-white text-sm mb-1">{{ $f['title'] }}</div>
            <div class="text-royal-300/70 text-sm leading-relaxed">{{ $f['desc'] }}</div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>
</section>

{{-- ============ PROCESS ============ --}}
<section class="py-24 lg:py-32 bg-white">
  <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
    <div class="max-w-2xl mx-auto text-center mb-16" data-reveal>
      <div class="eyebrow justify-center">How It Works</div>
      <h2 class="section-title">A clear path from where you are<br/>to where you're going.</h2>
    </div>
    <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-8">
      @php
        $steps = [
          ['num' => '01', 'title' => 'Apply', 'desc' => 'Tell us where you are with credit, business, and funding. Free intake.', 'time' => '~5 minutes'],
          ['num' => '02', 'title' => 'Strategize', 'desc' => 'We design the exact package and roadmap for your goals and timeline.', 'time' => '1–2 days'],
          ['num' => '03', 'title' => 'Execute', 'desc' => 'Disputes filed, structure set up, funding pursued — with you in the loop.', 'time' => '14–90 days'],
          ['num' => '04', 'title' => 'Elevate', 'desc' => 'You leave with clean credit, a fundable business, and the knowledge to stay there.', 'time' => 'Lifetime'],
        ];
      @endphp
      @foreach($steps as $i => $step)
      <div class="text-center" data-reveal data-delay="{{ $i + 1 }}">
        <div class="w-16 h-16 mx-auto rounded-2xl bg-gradient-to-br from-royal-700 to-royal-900 flex items-center justify-center mb-4 shadow-lg">
          <span class="font-display text-xl font-bold text-gold-300">{{ $step['num'] }}</span>
        </div>
        <h4 class="font-display text-xl font-bold text-royal-900 mb-2">{{ $step['title'] }}</h4>
        <p class="text-royal-700/70 text-sm leading-relaxed mb-2">{{ $step['desc'] }}</p>
        <span class="text-xs font-semibold text-gold-600">{{ $step['time'] }}</span>
      </div>
      @endforeach
    </div>
    <div class="mt-14 text-center">
      <a href="{{ route('home') }}#contact" class="btn-gold text-base">Start My Free Review →</a>
    </div>
  </div>
</section>

{{-- ============ CTA BAND ============ --}}
<section class="py-20 bg-gradient-to-br from-royal-800 via-royal-900 to-royal-950 text-white relative overflow-hidden">
  <div class="absolute inset-0 pointer-events-none">
    <div class="absolute top-0 left-1/4 w-64 h-64 bg-gold-500/15 rounded-full" style="filter:blur(60px)"></div>
    <div class="absolute bottom-0 right-1/4 w-64 h-64 bg-royal-500/20 rounded-full" style="filter:blur(60px)"></div>
  </div>
  <div class="relative mx-auto max-w-3xl px-4 sm:px-6 lg:px-8 text-center" data-reveal>
    <div class="eyebrow justify-center" style="color:var(--gold-300)">Ready to Start</div>
    <h2 class="font-display text-3xl sm:text-4xl font-bold leading-tight mb-4">Pick your service. Take the first step.</h2>
    <p class="text-royal-100/65 mb-8 leading-relaxed">Schedule a free credit review today. We'll tell you exactly what's dragging your score down and build a plan around your specific situation.</p>
    <div class="flex flex-col sm:flex-row gap-3 justify-center">
      <a href="/pricing" class="btn-gold text-base">See All Pricing →</a>
      <a href="{{ route('home') }}#contact" class="btn-ghost text-base">Book Free Review</a>
    </div>
  </div>
</section>

@endsection
