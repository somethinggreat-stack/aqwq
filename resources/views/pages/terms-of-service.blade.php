@extends('layouts.site')

@section('title', 'Terms of Service | AQ Wealth University')
@section('description', 'Read the Terms of Service for AQ Wealth University. These terms govern your use of our website, client portal, and all credit education and dispute assistance services.')

@section('page-content')

{{-- ============ HERO ============ --}}
<section class="relative overflow-hidden pt-40 pb-20 lg:pt-48 lg:pb-28 hero-bg text-white">
  <div class="hero-grid"></div>
  <div class="hero-orb orb-gold" style="opacity:0.4"></div>
  <div class="relative mx-auto max-w-4xl px-4 sm:px-6 lg:px-8 text-center">
    <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-gold-500/15 ring-1 ring-gold-400/40 text-gold-200 text-xs tracking-widest uppercase mb-6">
      <span class="w-1.5 h-1.5 rounded-full bg-gold-400 animate-pulse"></span>
      Legal Terms
    </div>
    <h1 class="font-display text-4xl sm:text-5xl lg:text-6xl font-bold leading-tight tracking-tight">
      Terms of Service
    </h1>
    <p class="mt-6 text-lg text-royal-100/80 max-w-xl mx-auto leading-relaxed">
      These Terms govern your access to and use of AQ Wealth University's website, client portal, and all credit education and dispute assistance services.
    </p>
    <div class="mt-8 flex flex-wrap justify-center gap-6 text-sm text-royal-200/70">
      <span><strong class="text-gold-300">Effective:</strong> January 1, 2026</span>
      <span><strong class="text-gold-300">Last Updated:</strong> January 1, 2026</span>
      <span><strong class="text-gold-300">Governing Law:</strong> Applicable Federal &amp; State Law</span>
    </div>
  </div>
</section>

{{-- ============ CONTENT ============ --}}
<section class="py-20 lg:py-28 bg-white">
  <div class="mx-auto max-w-4xl px-4 sm:px-6 lg:px-8">

    <div class="prose prose-royal max-w-none mb-12 text-royal-700 leading-relaxed">
      <p>By accessing our website or enrolling in any AQ Wealth University service, you agree to be bound by these Terms of Service. If you do not agree with any part of these terms, you must not use our website or services. These terms are subject to change — your continued use after changes are posted constitutes acceptance.</p>
    </div>

    {{-- Section 01 --}}
    <div class="mb-12" data-reveal>
      <div class="eyebrow mb-4">Section 01</div>
      <h2 class="font-display text-2xl font-bold text-royal-900 mb-4">Acceptance of Terms</h2>
      <p class="text-royal-600 text-sm leading-relaxed">These Terms of Service ("Terms") constitute a legally binding agreement between you ("User," "Client," or "you") and AQ Wealth University ("Company," "we," "us," or "our") governing your use of our website at aqwealthuniversity.com, our client portal, and all related services, features, and content. By accessing or using our website, creating an account, or enrolling in a service plan, you confirm that you have read, understood, and agree to be bound by these Terms and our <a href="/privacy-policy" class="text-gold-600 hover:underline">Privacy Policy</a>, which is incorporated herein by reference.</p>
    </div>

    {{-- Section 02 --}}
    <div class="mb-12" data-reveal>
      <div class="eyebrow mb-4">Section 02</div>
      <h2 class="font-display text-2xl font-bold text-royal-900 mb-4">Description of Services</h2>
      <p class="text-royal-600 text-sm leading-relaxed mb-4">AQ Wealth University provides credit education, credit report analysis, and dispute assistance guidance services to consumers across all 50 United States. Our services are designed to help consumers understand their credit reports and exercise their rights under applicable federal consumer protection laws, including the Fair Credit Reporting Act (FCRA) and the Fair Debt Collection Practices Act (FDCPA).</p>
      <div class="rounded-2xl bg-gold-50 border border-gold-200 p-5 text-sm text-royal-700">
        <p class="font-semibold mb-2">What We Do Not Do</p>
        <p>AQ Wealth University is not a law firm and does not provide legal advice. We are not a lender, debt collector, financial advisor, or credit counseling agency. We do not negotiate debts on your behalf, provide legal representation, or guarantee any specific outcome related to your credit profile or financial situation.</p>
      </div>
    </div>

    {{-- Section 03 --}}
    <div class="mb-12" data-reveal>
      <div class="eyebrow mb-4">Section 03</div>
      <h2 class="font-display text-2xl font-bold text-royal-900 mb-4">Eligibility</h2>
      <div class="space-y-3">
        @foreach([
          ['Age', 'You must be at least 18 years of age. Our services are not available to minors.'],
          ['Residency', 'You must be a resident of the United States. Services are available in all 50 states.'],
          ['Legal Capacity', 'You must have the legal capacity to enter into binding contracts under applicable law.'],
          ['Accurate Information', 'You must provide truthful, accurate, and complete information when enrolling and throughout your engagement with our services.'],
        ] as [$title, $desc])
        <div class="flex gap-4 items-start">
          <div class="mt-1 w-2 h-2 rounded-full bg-gold-400 flex-shrink-0"></div>
          <p class="text-royal-700 text-sm leading-relaxed"><strong class="text-royal-900">{{ $title }}:</strong> {{ $desc }}</p>
        </div>
        @endforeach
      </div>
    </div>

    {{-- Section 04 --}}
    <div class="mb-12" data-reveal>
      <div class="eyebrow mb-4">Section 04</div>
      <h2 class="font-display text-2xl font-bold text-royal-900 mb-4">Payments, Fees &amp; Billing</h2>
      <p class="text-royal-600 text-sm leading-relaxed mb-4">By enrolling in a service plan, you authorize AQ Wealth University to charge your payment method the fees associated with your selected plan. All fees are described in detail in your Service Agreement.</p>
      <div class="rounded-2xl bg-royal-50 border border-royal-100 p-5 text-sm text-royal-700">
        <p class="font-semibold text-royal-900 mb-2">CROA Fee Compliance</p>
        <p>In accordance with the Credit Repair Organizations Act (CROA), AQ Wealth University does not charge or receive any payment for services before those services have been fully performed. The initial enrollment fee covers the first period of services rendered.</p>
      </div>
      <p class="text-royal-600 text-sm leading-relaxed mt-4">If you cancel within 3 business days of signing your Service Agreement, you are entitled to a full refund of any fees paid, as required by CROA. After the 3-day window, fees for services already performed are non-refundable.</p>
    </div>

    {{-- Section 05 --}}
    <div class="mb-12" data-reveal>
      <div class="eyebrow mb-4">Section 05</div>
      <h2 class="font-display text-2xl font-bold text-royal-900 mb-4">SMS Communications</h2>
      <p class="text-royal-600 text-sm leading-relaxed mb-4">By providing your phone number and checking the SMS consent checkbox during enrollment or form submission, you agree to receive text messages from AQ Wealth University. These messages may include service updates, appointment reminders, account notifications, and (with separate consent) promotional offers.</p>
      <div class="rounded-2xl bg-gold-50 border border-gold-200 p-5 text-sm">
        <p class="font-semibold text-royal-900 mb-1">How to Opt Out</p>
        <p class="text-royal-600">Reply <strong>STOP</strong> to any text message to opt out at any time. Reply <strong>HELP</strong> for assistance. Message and data rates may apply. Message frequency varies. Opting out will not affect your ability to receive services through other channels.</p>
      </div>
      <div class="rounded-2xl bg-royal-50 border border-royal-100 p-5 text-sm mt-4">
        <p class="font-semibold text-royal-900 mb-1">Carrier Liability Disclaimer</p>
        <p class="text-royal-600">Carriers are not liable for delayed or undelivered messages. AQ Wealth University is not responsible for any delays in message delivery caused by your wireless carrier or network conditions.</p>
      </div>
    </div>

    {{-- Section 06 --}}
    <div class="mb-12" data-reveal>
      <div class="eyebrow mb-4">Section 06</div>
      <h2 class="font-display text-2xl font-bold text-royal-900 mb-4">Prohibited Uses</h2>
      <p class="text-royal-600 text-sm leading-relaxed mb-4">You agree not to use our website or services for any unlawful purpose or in any manner prohibited by these Terms. Prohibited uses include:</p>
      <div class="space-y-2">
        @foreach([
          'Providing false, misleading, or fraudulent information to AQ Wealth University or any consumer reporting agency.',
          'Using our services to create a false identity, impersonate any person, or obtain credit through fraudulent means.',
          'Attempting to gain unauthorized access to our systems, client portal, or any other user\'s account.',
          'Using bots, scrapers, or automated tools to collect data from our website without written consent.',
          'Transmitting viruses, malware, or other harmful code that interferes with our operations.',
          'Using our services in violation of the FCRA, CROA, FDCPA, or any other applicable federal or state law.',
          'Reselling, sublicensing, or commercially exploiting any part of our services without prior written authorization.',
        ] as $item)
        <div class="flex gap-3 items-start text-sm text-royal-600">
          <span class="text-red-400 flex-shrink-0 mt-0.5">✗</span>
          <span>{{ $item }}</span>
        </div>
        @endforeach
      </div>
    </div>

    {{-- Section 07 --}}
    <div class="mb-12" data-reveal>
      <div class="eyebrow mb-4">Section 07</div>
      <h2 class="font-display text-2xl font-bold text-royal-900 mb-4">Disclaimers &amp; No Guarantees</h2>
      <div class="rounded-2xl bg-gold-50 border border-gold-200 p-5 text-sm text-royal-700 mb-4">
        <p class="font-semibold text-royal-900 mb-2">Important — Required by Federal Law</p>
        <p>AQ Wealth University does not guarantee the removal of any specific item from a credit report, any specific credit score increase, or any specific financial outcome. Results vary based on each consumer's individual credit profile and circumstances. No one — including AQ Wealth University — can legally remove accurate, timely negative information from a credit report before its legally mandated expiration period.</p>
      </div>
      <p class="text-royal-500 text-xs leading-relaxed">THE SERVICES ARE PROVIDED "AS IS" AND "AS AVAILABLE" WITHOUT WARRANTIES OF ANY KIND. AQ WEALTH UNIVERSITY DOES NOT WARRANT THAT THE SERVICES WILL BE UNINTERRUPTED, ERROR-FREE, OR COMPLETELY SECURE.</p>
    </div>

    {{-- Section 08 --}}
    <div class="mb-12" data-reveal>
      <div class="eyebrow mb-4">Section 08</div>
      <h2 class="font-display text-2xl font-bold text-royal-900 mb-4">Limitation of Liability</h2>
      <p class="text-royal-600 text-sm leading-relaxed">TO THE MAXIMUM EXTENT PERMITTED BY APPLICABLE LAW, IN NO EVENT SHALL AQ WEALTH UNIVERSITY, ITS OFFICERS, DIRECTORS, EMPLOYEES, OR AFFILIATES BE LIABLE FOR ANY INDIRECT, INCIDENTAL, SPECIAL, CONSEQUENTIAL, OR PUNITIVE DAMAGES ARISING OUT OF OR RELATED TO YOUR USE OF OUR SERVICES. AQ Wealth University's total liability for all claims arising out of or related to these Terms shall not exceed the total amount of fees you paid to AQ Wealth University in the three (3) month period immediately preceding the claim.</p>
    </div>

    {{-- Section 09 --}}
    <div class="mb-12" data-reveal>
      <div class="eyebrow mb-4">Section 09</div>
      <h2 class="font-display text-2xl font-bold text-royal-900 mb-4">Termination</h2>
      <p class="text-royal-600 text-sm leading-relaxed mb-3">Either party may terminate these Terms at any time. You may cancel your service enrollment at any time by providing written notice to AQ Wealth University. Under CROA, you have the right to cancel within 3 business days of signing your Service Agreement without penalty.</p>
      <p class="text-royal-600 text-sm leading-relaxed">We reserve the right to suspend or terminate your access to our services if you violate these Terms, provide false information, fail to pay fees when due, or engage in conduct harmful to our business or other clients.</p>
    </div>

    {{-- Section 10 --}}
    <div class="mb-12" data-reveal>
      <div class="eyebrow mb-4">Section 10</div>
      <h2 class="font-display text-2xl font-bold text-royal-900 mb-4">Changes to These Terms</h2>
      <p class="text-royal-600 text-sm leading-relaxed">AQ Wealth University reserves the right to modify these Terms at any time. When we make material changes, we will update the "Last Updated" date at the top of this page and, where appropriate, notify enrolled clients via email. Your continued use of our services after the effective date of any revised Terms constitutes your acceptance of the changes.</p>
    </div>

    {{-- Section 11 --}}
    <div class="mb-12" data-reveal>
      <div class="eyebrow mb-4">Section 11</div>
      <h2 class="font-display text-2xl font-bold text-royal-900 mb-6">Contact Us</h2>
      <div class="rounded-2xl bg-gradient-to-br from-royal-800 via-royal-900 to-royal-950 text-white p-8">
        <h3 class="font-display text-xl font-bold mb-4">AQ Wealth University — Legal &amp; General Inquiries</h3>
        <p class="text-royal-200/70 text-sm mb-6">Our team is available Monday through Friday. We aim to respond to all inquiries within one business day.</p>
        <div class="space-y-3 text-sm">
          <div><span class="text-gold-300 font-semibold">Email: </span><a href="mailto:{{ config('site.contact_email') }}" class="text-white hover:text-gold-300 transition">{{ config('site.contact_email') }}</a></div>
          <div><span class="text-gold-300 font-semibold">Phone: </span><span>{{ config('site.support.phone') }}</span></div>
          <div><span class="text-gold-300 font-semibold">Hours: </span><span>{{ config('site.business_hours') }}</span></div>
          <div><span class="text-gold-300 font-semibold">Coverage: </span><span>Nationwide — All 50 States</span></div>
        </div>
      </div>
    </div>

    {{-- CTA --}}
    <div class="rounded-3xl bg-gradient-to-br from-royal-800 via-royal-900 to-royal-950 text-white p-8 sm:p-12 text-center relative overflow-hidden" data-reveal>
      <div class="absolute inset-0 pointer-events-none">
        <div class="absolute top-0 left-1/4 w-48 h-48 bg-gold-500/15 rounded-full" style="filter:blur(50px)"></div>
      </div>
      <div class="relative">
        <div class="eyebrow justify-center" style="color:var(--gold-300)">Ready to Get Started?</div>
        <h3 class="font-display text-2xl sm:text-3xl font-bold mt-2 mb-4">Book your free credit analysis — no obligation, no pressure.</h3>
        <div class="flex justify-center">
          <a href="#" data-open-credit-modal class="btn-gold text-base">Book a Free Consultation</a>
        </div>
      </div>
    </div>

    <p class="mt-10 text-xs text-royal-400 text-center leading-relaxed">These Terms of Service constitute the entire agreement between you and AQ Wealth University with respect to your use of the website and services. AQ Wealth University provides credit education and consulting services. We do not guarantee the removal of accurate information or specific credit score increases. This document does not constitute legal advice. © {{ date('Y') }} AQ Wealth University. All rights reserved.</p>

  </div>
</section>

@endsection
