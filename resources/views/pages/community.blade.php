@extends('layouts.site')

@section('title', 'Join the AQ Wealth Community | $97 DIY or $297 Done For You')
@section('description', 'Two ways to join AQ Wealth University. The $97/month Skool Community for self-guided learners, or $297/month Done For You credit repair where our team does the work for you.')

@section('page-content')

{{-- ============ HERO ============ --}}
<section class="relative overflow-hidden pt-40 pb-20 lg:pt-48 lg:pb-24 hero-bg text-white">
  <div class="hero-grid"></div>
  <div class="hero-orb orb-gold"></div>
  <div class="hero-orb orb-purple"></div>
  <div class="relative mx-auto max-w-4xl px-4 sm:px-6 lg:px-8 text-center">
    <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-gold-500/15 ring-1 ring-gold-400/40 text-gold-200 text-xs tracking-widest uppercase mb-6">
      <span class="w-1.5 h-1.5 rounded-full bg-gold-400 animate-pulse"></span>
      Choose Your Path
    </div>
    <h1 class="font-display text-4xl sm:text-5xl lg:text-6xl font-bold leading-tight tracking-tight">
      Two Ways to Transform<br/>Your <span class="gold-text">Financial Future.</span>
    </h1>
    <p class="mt-6 text-lg sm:text-xl text-royal-100/80 max-w-2xl mx-auto leading-relaxed">
      Whether you want to learn and do it yourself, or have our expert team handle everything for you — we have a path built for where you are right now.
    </p>
  </div>
</section>

{{-- ============ TWO OPTIONS ============ --}}
<section class="py-20 lg:py-28 bg-gradient-to-b from-royal-50 via-white to-white">
  <div class="mx-auto max-w-6xl px-4 sm:px-6 lg:px-8">
    <div class="max-w-2xl mx-auto text-center mb-14" data-reveal>
      <div class="eyebrow justify-center">Pick Your Option</div>
      <h2 class="section-title">Both paths lead to the same place.<br/>A stronger financial future.</h2>
    </div>

    <div class="grid md:grid-cols-2 gap-8">

      {{-- Option 1: DIY Community --}}
      <div class="relative rounded-3xl bg-white border-2 border-royal-100 p-8 sm:p-10 shadow-lg hover:shadow-2xl hover:-translate-y-1 transition-all duration-300" data-reveal data-delay="1">
        <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full text-xs font-bold tracking-widest uppercase mb-6" style="background:rgba(207,161,42,0.12);color:#7a5707;">
          <svg class="w-3.5 h-3.5" viewBox="0 0 20 20" fill="currentColor"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
          Option 1 · DIY Self-Service
        </div>
        <h3 class="font-display text-3xl sm:text-4xl font-bold text-royal-900 mb-2">Skool Community</h3>
        <p class="text-royal-700/70 leading-relaxed mb-6">Join our private Skool community and get access to everything you need to repair your credit and build wealth — on your own schedule, at your own pace, with our full support.</p>

        <div class="mb-6">
          <div class="text-xs uppercase tracking-widest text-royal-500 font-semibold mb-3">What you get:</div>
          <ul class="space-y-2.5">
            @foreach([
              'Weekly live training calls with Danielle & the team',
              'Full credit repair course library and replays',
              'Proven dispute templates and frameworks',
              'Business credit and funding education',
              'Private community — ask questions anytime',
              'New content added every month',
            ] as $feat)
            <li class="flex items-center gap-3 text-sm text-royal-800">
              <svg class="w-5 h-5 text-gold-500 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/></svg>
              {{ $feat }}
            </li>
            @endforeach
          </ul>
        </div>

        <div class="border-t border-royal-100 pt-6">
          <div class="flex items-end justify-between mb-5">
            <div>
              <div class="font-display text-5xl font-bold text-royal-900">$97</div>
              <div class="text-sm text-royal-500 mt-0.5">per month · cancel anytime</div>
            </div>
            <div class="text-right text-xs text-royal-500">Month-to-month<br/>No contracts</div>
          </div>
          @if(config('site.links.skool'))
            <a href="{{ config('site.links.skool') }}" target="_blank" rel="noopener noreferrer" class="btn-outline w-full text-center text-base">Join the Community →</a>
          @else
            <a href="{{ route('home') }}#contact" class="btn-outline w-full text-center text-base">Get Started →</a>
          @endif
          <div class="mt-3 text-center">
            <p class="text-xs text-royal-400 leading-relaxed">
              You'll be taken to our Skool page. When you click <strong>"Join $97/month"</strong> you'll see two membership tier options available on that page.
            </p>
          </div>
        </div>
      </div>

      {{-- Option 2: Done For You --}}
      <div class="relative rounded-3xl bg-royal-900 text-white p-8 sm:p-10 shadow-2xl ring-2 ring-gold-400/50 hover:-translate-y-1 transition-all duration-300" data-reveal data-delay="2">
        <div class="absolute -top-20 -right-20 w-64 h-64 bg-gold-500/20 rounded-full" style="filter:blur(60px)"></div>
        <div class="absolute -bottom-32 -left-20 w-64 h-64 bg-royal-600/30 rounded-full" style="filter:blur(60px)"></div>
        <div class="relative">
          <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full text-xs font-bold tracking-widest uppercase mb-6 bg-gold-500/20 text-gold-300">
            <svg class="w-3.5 h-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="m13 2-9 12h7l-1 8 9-12h-7l1-8z"/></svg>
            Option 2 · Done For You
          </div>
          <h3 class="font-display text-3xl sm:text-4xl font-bold mb-2">Done For You Credit Repair</h3>
          <p class="text-royal-100/75 leading-relaxed mb-6">You don't lift a finger. Our expert team reviews your credit report, builds a customized strategy, files every dispute, and handles the entire process — while you watch your score climb.</p>

          <div class="mb-6">
            <div class="text-xs uppercase tracking-widest text-gold-300 font-semibold mb-3">What we do for you:</div>
            <ul class="space-y-2.5">
              @foreach([
                'Full credit report review across all 3 bureaus',
                'Customized dispute strategy built for your profile',
                'We file every dispute — you don\'t write a single letter',
                'Dedicated credit advisor assigned to your case',
                'Monthly progress updates and score reporting',
                'Tradeline and utilization guidance included',
              ] as $feat)
              <li class="flex items-center gap-3 text-sm text-royal-200">
                <svg class="w-5 h-5 text-gold-400 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/></svg>
                {{ $feat }}
              </li>
              @endforeach
            </ul>
          </div>

          <div class="border-t border-white/10 pt-6">
            <div class="flex items-end justify-between mb-5">
              <div>
                <div class="font-display text-5xl font-bold gold-text">$297</div>
                <div class="text-sm text-royal-300/70 mt-0.5">per month · cancel anytime</div>
              </div>
              <div class="text-right text-xs text-royal-400">Expert team<br/>Does all the work</div>
            </div>
            <a href="{{ route('home') }}#contact" class="btn-gold w-full text-center text-base">Get Started Today →</a>
            <div class="mt-3 text-center">
              <p class="text-xs text-royal-400 leading-relaxed">Starts with a free credit review call. We'll review your report and confirm this is the right fit before you commit.</p>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

{{-- ============ HOW SKOOL WORKS ============ --}}
<section class="py-20 lg:py-24 bg-white">
  <div class="mx-auto max-w-4xl px-4 sm:px-6 lg:px-8">
    <div class="max-w-2xl mx-auto text-center mb-12" data-reveal>
      <div class="eyebrow justify-center">How the Community Works</div>
      <h2 class="section-title">Joining the Skool Community — step by step.</h2>
    </div>

    <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6 mb-12">
      @php
        $steps = [
          ['num' => '01', 'title' => 'Click "Join the Community"', 'desc' => 'You\'ll be taken to our private AQ Wealth University group on Skool.'],
          ['num' => '02', 'title' => 'Click "Join $97/month"', 'desc' => 'On the Skool page, click the join button. You\'ll see two membership tier options available — choose the one that fits your goals.'],
          ['num' => '03', 'title' => 'Complete Your Profile', 'desc' => 'Set up your Skool account and introduce yourself in the community. The team will welcome you personally.'],
          ['num' => '04', 'title' => 'Access Everything', 'desc' => 'Immediately unlock the full course library, upcoming live trainings, and the private member community.'],
          ['num' => '05', 'title' => 'Join the Next Live Call', 'desc' => 'We host weekly live training calls. Show up, ask questions, and get real answers from Danielle and the team.'],
          ['num' => '06', 'title' => 'Start Seeing Results', 'desc' => 'Follow the frameworks, implement the dispute strategies, and watch your financial picture transform month by month.'],
        ];
      @endphp
      @foreach($steps as $i => $step)
      <div class="flex gap-4" data-reveal data-delay="{{ ($i % 3) + 1 }}">
        <div class="flex-shrink-0 w-10 h-10 rounded-xl flex items-center justify-center font-display font-bold text-sm text-royal-900 shadow" style="background:linear-gradient(135deg,#cfa12a,#9a6f08);">{{ $step['num'] }}</div>
        <div>
          <div class="font-semibold text-royal-900 mb-1">{{ $step['title'] }}</div>
          <div class="text-royal-700/65 text-sm leading-relaxed">{{ $step['desc'] }}</div>
        </div>
      </div>
      @endforeach
    </div>

    {{-- Important Note about 2 options on Skool --}}
    <div class="rounded-2xl p-6 sm:p-8 border-2 border-gold-300/50 bg-gold-50" data-reveal>
      <div class="flex gap-4">
        <div class="flex-shrink-0 w-10 h-10 rounded-full flex items-center justify-center bg-gold-500 text-white text-lg font-bold">ℹ</div>
        <div>
          <h4 class="font-display font-bold text-xl text-royal-900 mb-2">A note about joining Skool</h4>
          <p class="text-royal-800/80 leading-relaxed">When you arrive on the AQ Wealth University Skool page and click <strong>"Join $97/month"</strong>, you will see <strong>two membership tier options</strong> to choose from. Select the tier that best fits your current goals and budget. Both tiers include full community access — the higher tier adds additional premium content and direct support features.</p>
        </div>
      </div>
    </div>
  </div>
</section>

{{-- ============ COMPARISON ============ --}}
<section class="py-20 lg:py-24 bg-royal-50">
  <div class="mx-auto max-w-4xl px-4 sm:px-6 lg:px-8">
    <div class="max-w-xl mx-auto text-center mb-12" data-reveal>
      <div class="eyebrow justify-center">Which Is Right For You?</div>
      <h2 class="section-title">DIY Community vs.<br/>Done For You.</h2>
    </div>

    <div class="overflow-x-auto rounded-2xl shadow-sm ring-1 ring-royal-100" data-reveal>
      <table class="w-full text-sm bg-white">
        <thead>
          <tr class="bg-royal-900 text-white">
            <th class="text-left px-6 py-4 font-semibold text-royal-200/70 font-sans">Feature</th>
            <th class="px-6 py-4 font-semibold text-center">
              <div class="text-white">Community</div>
              <div class="text-gold-300 text-xs font-normal mt-0.5">$97/mo</div>
            </th>
            <th class="px-6 py-4 font-semibold text-center">
              <div class="text-white">Done For You</div>
              <div class="text-gold-300 text-xs font-normal mt-0.5">$297/mo</div>
            </th>
          </tr>
        </thead>
        <tbody class="divide-y divide-royal-100">
          @php
            $rows = [
              ['feature' => 'Weekly live training calls', 'diy' => true, 'dfy' => true],
              ['feature' => 'Full course library & replays', 'diy' => true, 'dfy' => true],
              ['feature' => 'Dispute templates & frameworks', 'diy' => true, 'dfy' => true],
              ['feature' => 'Private community access', 'diy' => true, 'dfy' => true],
              ['feature' => 'You file your own disputes', 'diy' => true, 'dfy' => false],
              ['feature' => 'Our team files disputes for you', 'diy' => false, 'dfy' => true],
              ['feature' => 'Dedicated credit advisor assigned', 'diy' => false, 'dfy' => true],
              ['feature' => 'Monthly progress reports from us', 'diy' => false, 'dfy' => true],
              ['feature' => 'Full bureau dispute management', 'diy' => false, 'dfy' => true],
              ['feature' => 'Best for', 'diy' => 'Self-starters who want to learn', 'dfy' => 'People who want results without the work'],
            ];
          @endphp
          @foreach($rows as $i => $row)
          <tr class="{{ $i % 2 === 0 ? 'bg-white' : 'bg-royal-50/50' }}">
            <td class="px-6 py-3.5 text-royal-800 font-medium">{{ $row['feature'] }}</td>
            <td class="px-6 py-3.5 text-center">
              @if($row['diy'] === true)
                <span class="inline-flex items-center justify-center w-6 h-6 rounded-full bg-green-100">
                  <svg class="w-4 h-4 text-green-600" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/></path></svg>
                </span>
              @elseif($row['diy'] === false)
                <span class="inline-flex items-center justify-center w-6 h-6 rounded-full bg-royal-100">
                  <svg class="w-4 h-4 text-royal-400" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"/></path></svg>
                </span>
              @else
                <span class="text-xs text-royal-600">{{ $row['diy'] }}</span>
              @endif
            </td>
            <td class="px-6 py-3.5 text-center">
              @if($row['dfy'] === true)
                <span class="inline-flex items-center justify-center w-6 h-6 rounded-full bg-green-100">
                  <svg class="w-4 h-4 text-green-600" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/></path></svg>
                </span>
              @elseif($row['dfy'] === false)
                <span class="inline-flex items-center justify-center w-6 h-6 rounded-full bg-royal-100">
                  <svg class="w-4 h-4 text-royal-400" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"/></path></svg>
                </span>
              @else
                <span class="text-xs text-royal-600">{{ $row['dfy'] }}</span>
              @endif
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>

    <div class="mt-10 grid sm:grid-cols-2 gap-4" data-reveal>
      @if(config('site.links.skool'))
        <a href="{{ config('site.links.skool') }}" target="_blank" rel="noopener noreferrer" class="btn-outline text-center text-base py-4">Join Community ($97/mo) →</a>
      @else
        <a href="{{ route('home') }}#contact" class="btn-outline text-center text-base py-4">Join Community ($97/mo) →</a>
      @endif
      <a href="{{ route('home') }}#contact" class="btn-gold text-center text-base py-4">Get Done For You ($297/mo) →</a>
    </div>
  </div>
</section>

{{-- ============ FAQ ============ --}}
<section class="py-20 lg:py-24 bg-white">
  <div class="mx-auto max-w-3xl px-4 sm:px-6 lg:px-8">
    <div class="text-center mb-12" data-reveal>
      <div class="eyebrow justify-center">Common Questions</div>
      <h2 class="section-title">Still deciding?</h2>
    </div>
    <div class="space-y-3" data-reveal>
      <details class="faq" open>
        <summary>What if I want to start with Community and upgrade to Done For You later?</summary>
        <p>You can absolutely do that. Many clients start with the $97/month community to learn the basics, then upgrade to the Done For You program when they want our team to take over. There's no penalty for switching — just reach out to your advisor.</p>
      </details>
      <details class="faq">
        <summary>How is the Done For You program different from the one-time credit repair packages?</summary>
        <p>The one-time packages (Standard, Expedited, Premium) are project-based — we complete a defined number of dispute rounds. The Done For You program at $297/month is an ongoing monthly service — we actively manage your credit repair every month, plus you get full community access included.</p>
      </details>
      <details class="faq">
        <summary>Can I cancel anytime?</summary>
        <p>Yes. Both the Community ($97/mo) and the Done For You program ($297/mo) are month-to-month with no long-term contracts. Cancel anytime with no fees.</p>
      </details>
      <details class="faq">
        <summary>What happens when I join the Skool community?</summary>
        <p>You create a Skool account, get immediate access to the full course library, and can join the next live training call. The team will personally welcome you to the group. You'll also get access to all replays from previous sessions from day one.</p>
      </details>
    </div>
  </div>
</section>

@endsection
