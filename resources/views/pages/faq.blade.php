@extends('layouts.site')

@section('title', 'Credit Repair FAQ | AQ Wealth University')
@section('description', 'Answers to the most common questions about credit repair, business credit, funding, mentorship, and how AQ Wealth University works. Honest answers, no fluff.')

@section('page-content')

{{-- ============ HERO ============ --}}
<section class="relative overflow-hidden pt-40 pb-20 lg:pt-48 lg:pb-28 hero-bg text-white">
  <div class="hero-grid"></div>
  <div class="hero-orb orb-gold" style="opacity:0.4"></div>
  <div class="relative mx-auto max-w-4xl px-4 sm:px-6 lg:px-8 text-center">
    <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-gold-500/15 ring-1 ring-gold-400/40 text-gold-200 text-xs tracking-widest uppercase mb-6">
      <span class="w-1.5 h-1.5 rounded-full bg-gold-400 animate-pulse"></span>
      Your Questions, Answered
    </div>
    <h1 class="font-display text-4xl sm:text-5xl lg:text-6xl font-bold leading-tight tracking-tight">
      Questions, Answered<br/><span class="gold-text">Honestly.</span>
    </h1>
    <p class="mt-6 text-lg text-royal-100/80 max-w-xl mx-auto leading-relaxed">
      Everything you've ever wanted to know about credit repair, business setup, and funding — straight answers with no fluff.
    </p>
  </div>
</section>

{{-- ============ FAQ SECTIONS ============ --}}
<section class="py-24 lg:py-32 bg-white">
  <div class="mx-auto max-w-3xl px-4 sm:px-6 lg:px-8">

    {{-- Credit Repair --}}
    <div class="mb-14" data-reveal>
      <div class="eyebrow mb-6">Credit Repair</div>
      <div class="space-y-3">
        <details class="faq" open>
          <summary>How fast will I see results from credit repair?</summary>
          <p>Standard 3-Round packages typically deliver visible results in 30–90 days. Our Expedited packages are designed to deliver results in as little as 14–30 days through priority processing and an aggressive bureau response cycle.</p>
        </details>
        <details class="faq">
          <summary>What types of items can be removed from my credit report?</summary>
          <p>We challenge items that are inaccurate, unverifiable, or legally questionable under the Fair Credit Reporting Act (FCRA) and Fair Debt Collection Practices Act (FDCPA). This includes collections, charge-offs, late payments, medical debt, student loan errors, bankruptcies, foreclosures, judgments, repossessions, and identity theft accounts.</p>
        </details>
        <details class="faq">
          <summary>Is credit repair legal?</summary>
          <p>Absolutely. The Fair Credit Reporting Act gives every consumer the legal right to dispute inaccurate, unverifiable, or outdated items on their credit report. We exercise that right on your behalf — within 100% of federal consumer protection law.</p>
        </details>
        <details class="faq">
          <summary>What is the difference between Single and Duo packages?</summary>
          <p>Single covers one person's credit file. Duo lets you bring a spouse, family member, or business partner — both files receive the same scope of work at a significantly reduced combined rate. It's the most cost-effective way to repair two profiles at once.</p>
        </details>
        <details class="faq">
          <summary>Can I do this myself instead of hiring you?</summary>
          <p>Yes, you can dispute items yourself — the FCRA gives you that right. However, most people who try on their own send generic letters that bureaus routinely ignore. Our team files targeted, law-based challenges with a specific strategy for each item on your report. That's the difference between results in 30 days and chasing your tail for a year.</p>
        </details>
        <details class="faq">
          <summary>What if items come back after being removed?</summary>
          <p>If an item is properly removed, it cannot legally be re-reported without the creditor going through a new verification process. If it does return, we challenge it again. Premium clients receive unlimited dispute rounds for exactly this reason.</p>
        </details>
      </div>
    </div>

    {{-- Pricing & Packages --}}
    <div class="mb-14" data-reveal>
      <div class="eyebrow mb-6">Pricing &amp; Packages</div>
      <div class="space-y-3">
        <details class="faq">
          <summary>What's included in the Community ($97/month)?</summary>
          <p>Weekly live trainings, full course replays, proven frameworks, dispute templates, and direct access to the AQ Wealth private network. It's the most affordable way to stay sharp and keep learning every month. Month to month — cancel anytime. <a href="/community" class="text-gold-600 font-semibold hover:underline">See community details →</a></p>
        </details>
        <details class="faq">
          <summary>Is there a monthly payment option for the credit repair packages?</summary>
          <p>Credit repair packages (Standard, Expedited, Premium) are one-time investments — not monthly subscriptions. We offer 4 interest-free installments through Sezzle, Afterpay, and Zip at checkout. So you can start immediately and spread the cost.</p>
        </details>
        <details class="faq">
          <summary>What's the difference between Standard, Expedited, and Premium?</summary>
          <p>Standard (from $599) runs 3 dispute rounds in 30–90 days. Expedited (from $999) uses priority processing for results in 14–30 days and includes direct messaging with our team. Premium (from $1,399) provides unlimited dispute rounds with no time limit — we work until your report is clean.</p>
        </details>
        <details class="faq">
          <summary>Can I upgrade my package after I've already started?</summary>
          <p>Yes. You can upgrade from Standard to Expedited or Premium at any time. We apply your existing payment toward the upgraded package. Just reach out to your advisor directly.</p>
        </details>
      </div>
    </div>

    {{-- Business & Funding --}}
    <div class="mb-14" data-reveal>
      <div class="eyebrow mb-6">Business &amp; Funding</div>
      <div class="space-y-3">
        <details class="faq">
          <summary>Do I need credit repair before I can apply for business credit?</summary>
          <p>Not always. Business credit can be built independently of your personal credit — that's one of the key benefits. However, a stronger personal profile does improve your overall funding capacity. We'll map the right sequence for your situation on your free strategy call.</p>
        </details>
        <details class="faq">
          <summary>What's the difference between personal and business funding?</summary>
          <p>Personal funding uses your Social Security number and personal credit history. Business funding uses your EIN and business credit profile. The goal is to eventually fund your business entirely through its own credit — protecting your personal credit score and assets.</p>
        </details>
        <details class="faq">
          <summary>What does the Business Blueprint program include?</summary>
          <p>The Blueprint covers LLC or corporation formation, EIN acquisition, professional business address, business banking setup, D-U-N-S number, business email and phone, website and branding, and business credit profile build-out. It's the complete foundation package. <a href="/business-setup" class="text-gold-600 font-semibold hover:underline">See the full program →</a></p>
        </details>
        <details class="faq">
          <summary>How much funding can I realistically access?</summary>
          <p>It depends on your profile, timeline, and strategy. Our clients have accessed $35K in 0% APR business credit cards, $50K+ in business lines, and SBA-backed loans after completing proper setup and credit building. Results vary — we build a plan specific to your situation.</p>
        </details>
      </div>
    </div>

    {{-- Mentorship --}}
    <div class="mb-14" data-reveal>
      <div class="eyebrow mb-6">Mentorship</div>
      <div class="space-y-3">
        <details class="faq">
          <summary>Is mentorship right for me?</summary>
          <p>Mentorship is built for people who are serious about either (a) mastering credit repair to earn income from it, or (b) truly owning the business-setup and funding process for themselves. If you just need your credit fixed, our credit repair packages are the right fit.</p>
        </details>
        <details class="faq">
          <summary>Can I start a credit repair business after the mentorship?</summary>
          <p>Yes. The Credit Repair Mentorship ($3,500) is specifically designed to equip you to run your own credit repair business — including client onboarding, pricing, dispute playbooks, sales scripts, and compliance basics. Many of our mentors have launched and are earning within 30–60 days of completing the program.</p>
        </details>
        <details class="faq">
          <summary>What does "direct 1:1 mentorship" mean?</summary>
          <p>It means you have direct access to your mentor — not a ticket system, not an AI chatbot. You can message your advisor directly and get real answers about your real situation. This is not a self-paced video course.</p>
        </details>
      </div>
    </div>

    {{-- CTA --}}
    <div class="rounded-3xl bg-gradient-to-br from-royal-800 via-royal-900 to-royal-950 text-white p-8 sm:p-12 text-center relative overflow-hidden" data-reveal>
      <div class="absolute inset-0 pointer-events-none">
        <div class="absolute top-0 left-1/4 w-48 h-48 bg-gold-500/15 rounded-full" style="filter:blur(50px)"></div>
      </div>
      <div class="relative">
        <div class="eyebrow justify-center" style="color:var(--gold-300)">Still Have Questions?</div>
        <h3 class="font-display text-2xl sm:text-3xl font-bold mt-2 mb-4">Talk to a real advisor.</h3>
        <p class="text-royal-100/65 mb-7 leading-relaxed">Schedule a free credit review. We'll look at your specific situation and tell you exactly what the right next step is — no pressure, no sales pitch.</p>
        <div class="flex flex-col sm:flex-row gap-3 justify-center">
          <a href="{{ route('home') }}#contact" class="btn-gold text-base">Book My Free Review →</a>
          <a href="/pricing" class="btn-ghost text-base">See Pricing</a>
        </div>
      </div>
    </div>

  </div>
</section>

@endsection
