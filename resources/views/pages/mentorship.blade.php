@extends('layouts.site')

@section('title', 'Credit Repair & Business Mentorship | AQ Wealth University')
@section('description', 'Private mentorship with the AQ Wealth team. Learn to repair credit professionally, structure businesses correctly, and earn from financial education. Credit mentorship from $3,500.')

@section('page-content')

{{-- ============ HERO ============ --}}
<section class="relative overflow-hidden pt-40 pb-24 lg:pt-48 lg:pb-32 bg-royal-900 text-white">
  <div class="absolute inset-0 opacity-40" style="background-image: radial-gradient(circle at 15% 20%, #b8860b22 0%, transparent 40%), radial-gradient(circle at 85% 80%, #7a30bf33 0%, transparent 40%);"></div>
  <div class="hero-orb orb-gold" style="top:-80px;right:5%;opacity:0.35"></div>
  <div class="relative mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 text-center">
    <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-gold-500/15 ring-1 ring-gold-400/40 text-gold-200 text-xs tracking-widest uppercase mb-6">
      <span class="w-1.5 h-1.5 rounded-full bg-gold-400 animate-pulse"></span>
      Private Mentorship
    </div>
    <h1 class="font-display text-4xl sm:text-5xl lg:text-6xl font-bold leading-tight tracking-tight max-w-3xl mx-auto">
      Learn It. Own It.<br/><span class="gold-text">Teach It.</span>
    </h1>
    <p class="mt-6 text-lg sm:text-xl text-royal-100/80 max-w-2xl mx-auto leading-relaxed">
      Get into private mentorship with our team. Learn how to repair credit and structure businesses for yourself, for your family, or as a service you charge real money for.
    </p>
    <div class="mt-8 flex flex-col sm:flex-row gap-3 justify-center">
      <a href="#apply" class="btn-gold text-base">Apply for Mentorship →</a>
      <a href="{{ route('home') }}#contact" class="btn-ghost text-base">Ask Us a Question</a>
    </div>
    <div class="mt-10 grid grid-cols-3 gap-4 max-w-sm mx-auto text-center">
      <div>
        <div class="font-display text-3xl font-bold gold-text">500+</div>
        <div class="text-xs text-royal-300/70 mt-1">Students mentored</div>
      </div>
      <div>
        <div class="font-display text-3xl font-bold gold-text">1:1</div>
        <div class="text-xs text-royal-300/70 mt-1">Direct advisor access</div>
      </div>
      <div>
        <div class="font-display text-3xl font-bold gold-text">Real</div>
        <div class="text-xs text-royal-300/70 mt-1">Systems we use daily</div>
      </div>
    </div>
  </div>
</section>

{{-- ============ MENTORSHIP CARDS ============ --}}
<section class="py-24 lg:py-32 bg-white" id="apply">
  <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
    <div class="max-w-2xl mx-auto text-center mb-14" data-reveal>
      <div class="eyebrow justify-center">Two Programs</div>
      <h2 class="section-title">Choose the mentorship path<br/>that fits your goals.</h2>
      <p class="section-sub mx-auto">Both programs give you direct access to the exact systems our advisors use with clients every day. You learn by doing, not by watching slides.</p>
    </div>

    <div class="grid md:grid-cols-2 gap-8">

      {{-- Credit Repair Mentorship --}}
      <div class="mentor-card relative" data-reveal data-delay="1">
        <div class="flex items-center gap-3 text-gold-300 text-xs uppercase tracking-widest font-semibold relative z-10">
          <span class="w-8 h-px bg-gold-400"></span> Credit Repair Mentorship
        </div>
        <h3 class="font-display text-3xl mt-4 font-bold relative z-10">Master the Credit Repair Process</h3>
        <p class="text-royal-100/80 mt-3 relative z-10 leading-relaxed">Learn how to dispute, delete, rebuild, and turn credit knowledge into income. We hand you the exact systems, scripts, and playbooks we use on real clients every single day.</p>
        <ul class="mt-6 space-y-3 text-sm relative z-10">
          <li class="feat-light feat">Full dispute &amp; deletion playbook</li>
          <li class="feat-light feat">Client onboarding systems &amp; workflows</li>
          <li class="feat-light feat">Pricing, packaging &amp; sales scripts</li>
          <li class="feat-light feat">FCRA &amp; FDCPA legal framework training</li>
          <li class="feat-light feat">How to set up your own credit repair business</li>
          <li class="feat-light feat">Direct 1:1 mentorship with our team</li>
        </ul>
        <div class="mt-8 flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4 relative z-10">
          <div>
            <div class="font-display text-5xl font-bold gold-text">$3,500</div>
            <div class="text-xs text-royal-300/60 mt-1">One-time investment</div>
          </div>
          @if(config('site.links.checkout_mentorship_credit'))
            <a href="{{ config('site.links.checkout_mentorship_credit') }}" target="_blank" rel="noopener" class="btn-gold text-base">Apply Now →</a>
          @else
            <a href="{{ route('home') }}#contact" class="btn-gold text-base">Apply Now →</a>
          @endif
        </div>
      </div>

      {{-- Business Mentorship --}}
      <div class="mentor-card relative" data-reveal data-delay="2">
        <div class="flex items-center gap-3 text-gold-300 text-xs uppercase tracking-widest font-semibold relative z-10">
          <span class="w-8 h-px bg-gold-400"></span> Business Mentorship
        </div>
        <h3 class="font-display text-3xl mt-4 font-bold relative z-10">Structure &amp; Scale Your Business</h3>
        <p class="text-royal-100/80 mt-3 relative z-10 leading-relaxed">From LLC formation to business credit to stacking funding, we walk you through every step of building a real, fundable business that lenders respect and investors take seriously.</p>
        <ul class="mt-6 space-y-3 text-sm relative z-10">
          <li class="feat-light feat">LLC, EIN &amp; business banking setup</li>
          <li class="feat-light feat">Business credit profile build-out (D&amp;B, Nav)</li>
          <li class="feat-light feat">Vendor accounts that report positively</li>
          <li class="feat-light feat">Funding stack &amp; lender strategy</li>
          <li class="feat-light feat">Business credit card application strategy</li>
          <li class="feat-light feat">1:1 strategy sessions with your advisor</li>
        </ul>
        <div class="mt-8 flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4 relative z-10">
          <div>
            <div class="font-display text-5xl font-bold gold-text">$1,500</div>
            <div class="text-xs text-royal-300/60 mt-1">One-time investment</div>
          </div>
          @if(config('site.links.checkout_mentorship_business'))
            <a href="{{ config('site.links.checkout_mentorship_business') }}" target="_blank" rel="noopener" class="btn-gold text-base">Apply Now →</a>
          @else
            <a href="{{ route('home') }}#contact" class="btn-gold text-base">Apply Now →</a>
          @endif
        </div>
      </div>
    </div>
  </div>
</section>

{{-- ============ IS MENTORSHIP RIGHT FOR YOU ============ --}}
<section class="py-20 lg:py-28 bg-royal-50">
  <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
    <div class="grid lg:grid-cols-2 gap-14 items-center">
      <div data-reveal>
        <div class="eyebrow">Is This For You?</div>
        <h2 class="section-title">Mentorship is for people who are serious.</h2>
        <p class="section-sub mt-4">This is not a course you buy and forget. It is a hands-on mentorship program where we work directly with you to make sure you get results — for yourself or for clients you serve.</p>
        <div class="mt-8 space-y-4">
          @php
            $fits = [
              'You want to learn credit repair and charge real money for it',
              'You want to fix your own credit using the same methods professionals use',
              'You\'re building a business and need the right financial foundation',
              'You want to stop guessing and learn from people doing this daily',
              'You\'re committed to investing in yourself and your financial future',
            ];
          @endphp
          @foreach($fits as $fit)
          <div class="flex items-start gap-3">
            <div class="flex-shrink-0 w-6 h-6 rounded-full flex items-center justify-center mt-0.5" style="background:linear-gradient(135deg,#cfa12a,#9a6f08);">
              <svg class="w-3.5 h-3.5 text-white" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
            </div>
            <span class="text-royal-800">{{ $fit }}</span>
          </div>
          @endforeach
        </div>
        <div class="mt-8">
          <a href="{{ route('home') }}#contact" class="btn-gold">Schedule a Strategy Call →</a>
        </div>
      </div>
      <div data-reveal data-delay="2">
        <div class="rounded-3xl bg-royal-900 text-white p-8 sm:p-10 relative overflow-hidden">
          <div class="absolute -top-16 -right-16 w-56 h-56 bg-gold-500/15 rounded-full" style="filter:blur(50px)"></div>
          <div class="relative">
            <div class="eyebrow" style="color:var(--gold-300)">What You Get</div>
            <h3 class="font-display text-2xl font-bold mt-2 mb-6">Inside Every Mentorship Program</h3>
            @php
              $includes = [
                ['icon' => '📋', 'title' => 'Done-with-you systems', 'desc' => 'Not theory. Actual templates, workflows, and scripts we use on real clients.'],
                ['icon' => '📞', 'title' => 'Direct advisor access', 'desc' => 'Message your mentor directly. No ticket system. No waiting three days for a reply.'],
                ['icon' => '⚡', 'title' => 'Fast implementation', 'desc' => 'We build your knowledge in real time — not over the course of 12 weeks of watching videos.'],
                ['icon' => '🏆', 'title' => 'Proven results', 'desc' => 'Our mentorship students have launched profitable credit repair businesses and secured $50K+ in business funding.'],
              ];
            @endphp
            <div class="space-y-5">
              @foreach($includes as $item)
              <div class="flex gap-4">
                <div class="text-2xl flex-shrink-0">{{ $item['icon'] }}</div>
                <div>
                  <div class="font-semibold text-white mb-1">{{ $item['title'] }}</div>
                  <div class="text-royal-300/70 text-sm leading-relaxed">{{ $item['desc'] }}</div>
                </div>
              </div>
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

{{-- ============ FOUNDER ============ --}}
<section class="py-20 lg:py-28 bg-white">
  <div class="mx-auto max-w-4xl px-4 sm:px-6 lg:px-8 text-center" data-reveal>
    <div class="eyebrow justify-center">Meet Your Mentor</div>
    <h2 class="section-title mb-6">You learn directly from<br/>people who do this work.</h2>
    <div class="rounded-3xl bg-gradient-to-br from-royal-50 to-white border border-royal-100 p-8 sm:p-12 shadow-sm max-w-2xl mx-auto">
      <p class="font-display text-xl italic text-royal-800 leading-relaxed mb-6">"I built AQ Wealth University around a simple idea: people deserve real education, not just a service. Every system I teach in mentorship is one my team uses on real client files every single day."</p>
      <div class="flex items-center justify-center gap-4">
        <img src="{{ cms_image('media.owner_image', 'images/owner.jpeg') }}" alt="Danielle Todd" class="w-14 h-14 rounded-full object-cover shadow-lg" />
        <div class="text-left">
          <div class="font-display font-bold text-royal-900">Danielle Todd</div>
          <div class="text-xs text-gold-600 uppercase tracking-widest font-semibold">Founder · AQ Wealth University</div>
        </div>
      </div>
    </div>
    <div class="mt-10 flex flex-col sm:flex-row gap-3 justify-center">
      <a href="{{ route('home') }}#contact" class="btn-gold text-base">Apply for Mentorship →</a>
      <a href="/pricing" class="btn-outline text-base">See Credit Repair Packages</a>
    </div>
  </div>
</section>

@endsection
