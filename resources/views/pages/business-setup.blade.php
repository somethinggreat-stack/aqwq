@extends('layouts.site')

@section('title', 'Business Setup & Business Credit | AQ Wealth University')
@section('description', 'Set up a lender-ready business the right way. LLC formation, EIN, D-U-N-S number, business banking, professional address, and business credit profile — all with expert guidance.')

@section('page-content')

{{-- ============ HERO ============ --}}
<section class="relative overflow-hidden pt-40 pb-24 lg:pt-48 lg:pb-32" style="background: linear-gradient(135deg, #260a44 0%, #1a0633 50%, #3a1463 100%);">
  <div class="absolute inset-0 opacity-40" style="background-image: radial-gradient(circle at 20% 30%, rgba(207,161,42,0.25) 0%, transparent 50%), radial-gradient(circle at 80% 70%, rgba(122,48,191,0.3) 0%, transparent 50%);"></div>
  <div class="relative mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
    <div class="grid lg:grid-cols-2 gap-12 items-center">
      <div class="text-white">
        <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-gold-500/15 ring-1 ring-gold-400/40 text-gold-200 text-xs tracking-widest uppercase mb-6">
          <span class="w-1.5 h-1.5 rounded-full bg-gold-400 animate-pulse"></span>
          Business Blueprint
        </div>
        <h1 class="font-display text-4xl sm:text-5xl lg:text-6xl font-bold leading-tight tracking-tight">
          Build a <span class="gold-text">Fundable &amp; Profitable</span> Business Structure.
        </h1>
        <p class="mt-6 text-lg text-royal-100/80 leading-relaxed">
          The Business Blueprint Mentorship is designed for aspiring entrepreneurs who want to launch their business with a solid, lender-ready foundation. Get the tools, strategies, and guidance to create a professional business structure that can grow and scale.
        </p>
        <div class="mt-7 flex flex-wrap items-center gap-4 text-sm text-royal-100/70">
          <div class="flex items-center gap-2">
            <svg class="w-5 h-5 text-gold-300" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/></svg>
            Lender-ready from day one
          </div>
          <div class="flex items-center gap-2">
            <svg class="w-5 h-5 text-gold-300" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/></svg>
            Scalable, professional foundation
          </div>
          <div class="flex items-center gap-2">
            <svg class="w-5 h-5 text-gold-300" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/></svg>
            Expert-guided, step by step
          </div>
        </div>
        <div class="mt-8 flex flex-col sm:flex-row gap-3">
          @if(config('site.links.checkout_business_blueprint'))
            <a href="{{ config('site.links.checkout_business_blueprint') }}" target="_blank" rel="noopener" class="btn-gold text-base">Start My Blueprint →</a>
          @else
            <a href="{{ route('home') }}#contact" class="btn-gold text-base">Apply for the Blueprint →</a>
          @endif
        </div>
      </div>

      {{-- What You'll Get Card --}}
      <div class="rounded-3xl bg-white shadow-2xl ring-1 ring-royal-100 p-7 sm:p-9 relative overflow-hidden" data-reveal data-delay="2">
        <div class="absolute -top-16 -right-16 w-56 h-56 rounded-full" style="background:rgba(207,161,42,0.18);filter:blur(50px)"></div>
        <div class="absolute -bottom-20 -left-16 w-56 h-56 rounded-full" style="background:rgba(122,48,191,0.18);filter:blur(60px)"></div>
        <div class="relative">
          <div class="text-xs uppercase tracking-widest font-semibold text-gold-700 mb-2">What You'll Learn &amp; Receive</div>
          <h3 class="font-display text-2xl sm:text-3xl font-bold mb-6" style="color:#6322a3">Fundable Business Structure</h3>
          <ul class="space-y-3.5 text-royal-800">
            @php
              $items = [
                'Establish a <strong>Professional Business Address</strong>',
                'Form your <strong>LLC or Corporation</strong>',
                'Obtain a <strong>Federal EIN (Tax ID)</strong>',
                'Secure a <strong>D-U-N-S Number</strong> for credit and funding',
                'Open a <strong>Dedicated Business Bank Account</strong>',
                'Set up a <strong>Business Email and Phone Number</strong>',
                'Create a <strong>Professional Website and Branding</strong>',
                'Build your <strong>Business Credit Profile</strong> from day one',
              ];
            @endphp
            @foreach($items as $item)
            <li class="flex items-start gap-3">
              <span class="flex-shrink-0 mt-0.5 w-6 h-6 rounded-full flex items-center justify-center" style="background:linear-gradient(135deg,#cfa12a,#9a6f08);color:#fff;">
                <svg class="w-3.5 h-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
              </span>
              <span>{!! $item !!}</span>
            </li>
            @endforeach
          </ul>
          <div class="mt-7 pt-5 border-t border-royal-100 flex items-center justify-between">
            <div class="italic text-royal-700/70 font-display text-sm">
              &mdash; Danielle Todd<br/>
              <span class="text-xs not-italic uppercase tracking-widest text-gold-700">CEO · AQ Wealth University</span>
            </div>
            @if(config('site.links.checkout_business_blueprint'))
              <a href="{{ config('site.links.checkout_business_blueprint') }}" target="_blank" rel="noopener" class="btn-gold text-sm">Get Started →</a>
            @else
              <a href="{{ route('home') }}#contact" class="btn-gold text-sm">Apply Now</a>
            @endif
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

{{-- ============ WHY BUSINESS SETUP MATTERS ============ --}}
<section class="py-24 lg:py-32 bg-white">
  <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
    <div class="max-w-2xl mx-auto text-center mb-14" data-reveal>
      <div class="eyebrow justify-center">Why It Matters</div>
      <h2 class="section-title">Most businesses fail to get funded<br/>because of this one mistake.</h2>
      <p class="section-sub mx-auto">They apply for business credit before their business is set up the way lenders expect to see it. The structure comes first — the money follows.</p>
    </div>

    <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
      @php
        $reasons = [
          ['icon' => '🏦', 'title' => 'Lenders Check Your Setup', 'desc' => 'Banks and lenders verify your LLC, EIN, address, and phone before approving a single dollar. If anything doesn\'t match, you\'re denied before you start.'],
          ['icon' => '📊', 'title' => 'Business Credit is Separate', 'desc' => 'Your business needs its own credit profile — separate from your personal SSN. Without it, every loan application hits your personal credit score.'],
          ['icon' => '🔒', 'title' => 'Protect Your Personal Assets', 'desc' => 'An LLC properly set up creates a legal wall between your personal finances and your business obligations. Skip this step and you\'re personally liable.'],
          ['icon' => '🌐', 'title' => 'Online Presence is Required', 'desc' => 'Lenders Google your business. If you don\'t have a website, a business email, and a listed address — your application looks suspicious.'],
          ['icon' => '📞', 'title' => 'Directory Listings Matter', 'desc' => 'Your business needs to appear in 411, Yelp, and Google My Business before you can qualify for most vendor accounts and net-30 tradelines.'],
          ['icon' => '📈', 'title' => 'Build Credit Independently', 'desc' => 'A properly structured business can access credit, lines, and capital on its own strength — without touching your personal profile at all.'],
        ];
      @endphp
      @foreach($reasons as $i => $r)
      <div class="p-7 rounded-3xl bg-royal-50 border border-royal-100 hover:shadow-lg hover:-translate-y-0.5 transition-all duration-300" data-reveal data-delay="{{ ($i % 3) + 1 }}">
        <div class="text-3xl mb-4">{{ $r['icon'] }}</div>
        <h3 class="font-display text-xl font-bold text-royal-900 mb-2">{{ $r['title'] }}</h3>
        <p class="text-royal-700/70 text-sm leading-relaxed">{{ $r['desc'] }}</p>
      </div>
      @endforeach
    </div>
  </div>
</section>

{{-- ============ BUSINESS CREDIT PATH ============ --}}
<section class="py-24 lg:py-28 bg-royal-950 text-white relative overflow-hidden">
  <div class="hero-orb orb-gold" style="top:5%;left:-5%;opacity:0.3"></div>
  <div class="hero-orb orb-purple" style="bottom:5%;right:-5%;opacity:0.3"></div>
  <div class="relative mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
    <div class="max-w-2xl mx-auto text-center mb-14" data-reveal>
      <div class="eyebrow justify-center" style="color:var(--gold-300)">The Business Credit Path</div>
      <h2 class="section-title text-white">From zero to fully funded.<br/>Step by step.</h2>
    </div>
    <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
      @php
        $path = [
          ['num' => '01', 'title' => 'Business Foundation', 'desc' => 'LLC or Corp, EIN, professional address, business phone and email. All matching across all filings.'],
          ['num' => '02', 'title' => 'Business Credit Profile', 'desc' => 'D-U-N-S number, NAV business credit profile, and business banking relationship established.'],
          ['num' => '03', 'title' => 'Vendor Tradelines', 'desc' => 'Net-30 vendor accounts that report positive payment history to business credit bureaus.'],
          ['num' => '04', 'title' => 'Business Funding', 'desc' => 'Business credit cards, lines of credit, and capital products — accessed on your business\'s strength alone.'],
        ];
      @endphp
      @foreach($path as $i => $p)
      <div class="text-center p-6 rounded-2xl" style="background:rgba(255,255,255,0.04);border:1px solid rgba(255,255,255,0.08);" data-reveal data-delay="{{ $i + 1 }}">
        <div class="w-14 h-14 mx-auto rounded-xl flex items-center justify-center mb-4 font-display font-bold text-xl text-royal-900" style="background:linear-gradient(135deg,#cfa12a,#9a6f08);">{{ $p['num'] }}</div>
        <h4 class="font-display font-bold text-lg text-white mb-2">{{ $p['title'] }}</h4>
        <p class="text-royal-300/65 text-sm leading-relaxed">{{ $p['desc'] }}</p>
      </div>
      @endforeach
    </div>
  </div>
</section>

{{-- ============ CONNECT TO FUNDING ============ --}}
<section class="py-20 lg:py-24 bg-white">
  <div class="mx-auto max-w-4xl px-4 sm:px-6 lg:px-8 text-center" data-reveal>
    <div class="eyebrow justify-center">Next Step</div>
    <h2 class="section-title mb-4">Once your business is set up,<br/>you're ready to get funded.</h2>
    <p class="section-sub mx-auto mb-8">A properly structured business can access personal lines, business credit cards, SBA-backed loans, and 0% APR credit lines. We can help with all of it.</p>
    <div class="flex justify-center">
      <a href="{{ route('funding') }}" class="btn-gold text-base">Explore Funding Options →</a>
    </div>
  </div>
</section>

@endsection
