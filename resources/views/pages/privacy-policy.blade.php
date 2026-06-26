@extends('layouts.site')

@section('title', 'Privacy Policy | AQ Wealth University')
@section('description', 'AQ Wealth University is committed to protecting your personal information. Read our Privacy Policy to understand what data we collect, how we use it, and your rights.')

@section('page-content')

{{-- ============ HERO ============ --}}
<section class="relative overflow-hidden pt-40 pb-20 lg:pt-48 lg:pb-28 hero-bg text-white">
  <div class="hero-grid"></div>
  <div class="hero-orb orb-gold" style="opacity:0.4"></div>
  <div class="relative mx-auto max-w-4xl px-4 sm:px-6 lg:px-8 text-center">
    <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-gold-500/15 ring-1 ring-gold-400/40 text-gold-200 text-xs tracking-widest uppercase mb-6">
      <span class="w-1.5 h-1.5 rounded-full bg-gold-400 animate-pulse"></span>
      Privacy &amp; Data Protection
    </div>
    <h1 class="font-display text-4xl sm:text-5xl lg:text-6xl font-bold leading-tight tracking-tight">
      Privacy Policy
    </h1>
    <p class="mt-6 text-lg text-royal-100/80 max-w-xl mx-auto leading-relaxed">
      AQ Wealth University is committed to protecting your personal information. This policy explains what data we collect, how we use it, and what rights you have.
    </p>
    <div class="mt-8 flex flex-wrap justify-center gap-6 text-sm text-royal-200/70">
      <span><strong class="text-gold-300">Effective:</strong> January 1, 2026</span>
      <span><strong class="text-gold-300">Last Updated:</strong> January 1, 2026</span>
      <span><strong class="text-gold-300">Governing Law:</strong> Federal Law &amp; Applicable State Law</span>
    </div>
  </div>
</section>

{{-- ============ CONTENT ============ --}}
<section class="py-20 lg:py-28 bg-white">
  <div class="mx-auto max-w-4xl px-4 sm:px-6 lg:px-8">

    {{-- Intro --}}
    <div class="prose prose-royal max-w-none mb-16 text-royal-700 leading-relaxed">
      <p>This Privacy Policy applies to all services offered by AQ Wealth University, including our website at aqwealthuniversity.com, our client portal, and all credit education and dispute assistance services. By using our services, you consent to the data practices described in this policy.</p>
    </div>

    {{-- Section 01 --}}
    <div class="mb-14" data-reveal>
      <div class="eyebrow mb-4">Section 01</div>
      <h2 class="font-display text-2xl font-bold text-royal-900 mb-6">Information We Collect</h2>
      <p class="text-royal-600 mb-6">We collect information that is necessary to provide our credit education and dispute assistance services. The types of information we may collect include:</p>
      <div class="grid sm:grid-cols-2 gap-6">
        <div class="rounded-2xl border border-royal-100 bg-royal-50/50 p-6">
          <h3 class="font-semibold text-royal-900 mb-2">Personal Identification</h3>
          <p class="text-sm text-royal-600">Full legal name, date of birth, Social Security Number (for credit report access), current and previous addresses, phone number, and email address.</p>
        </div>
        <div class="rounded-2xl border border-royal-100 bg-royal-50/50 p-6">
          <h3 class="font-semibold text-royal-900 mb-2">Financial Information</h3>
          <p class="text-sm text-royal-600">Credit report data from Equifax, Experian, and TransUnion, account information, payment history, and billing details necessary to process your service fees.</p>
        </div>
        <div class="rounded-2xl border border-royal-100 bg-royal-50/50 p-6">
          <h3 class="font-semibold text-royal-900 mb-2">Communications</h3>
          <p class="text-sm text-royal-600">Records of correspondence between you and AQ Wealth University via phone, email, SMS, or through the client portal, including consultation notes and service requests.</p>
        </div>
        <div class="rounded-2xl border border-royal-100 bg-royal-50/50 p-6">
          <h3 class="font-semibold text-royal-900 mb-2">Technical &amp; Usage Data</h3>
          <p class="text-sm text-royal-600">IP address, browser type, device information, pages visited, time spent on site, and other analytics data collected automatically when you visit our website or use our portal.</p>
        </div>
        <div class="rounded-2xl border border-royal-100 bg-royal-50/50 p-6">
          <h3 class="font-semibold text-royal-900 mb-2">Service-Related Documents</h3>
          <p class="text-sm text-royal-600">Signed service agreements, authorization forms, dispute letters, bureau correspondence, and any documents submitted to or received from consumer reporting agencies on your behalf.</p>
        </div>
        <div class="rounded-2xl border border-royal-100 bg-royal-50/50 p-6">
          <h3 class="font-semibold text-royal-900 mb-2">SMS &amp; Marketing Consent</h3>
          <p class="text-sm text-royal-600">Records of your opt-in or opt-out status for SMS communications, appointment reminders, and marketing messages, including the date and method of consent.</p>
        </div>
      </div>
    </div>

    {{-- Section 02 --}}
    <div class="mb-14" data-reveal>
      <div class="eyebrow mb-4">Section 02</div>
      <h2 class="font-display text-2xl font-bold text-royal-900 mb-6">How We Use Your Information</h2>
      <div class="space-y-4">
        @foreach([
          ['To Provide Our Services', 'To deliver the credit education, credit report analysis, and dispute assistance services you enrolled in, including preparing and submitting dispute letters on your behalf.'],
          ['To Process Payments', 'To charge service fees according to your enrollment plan and maintain accurate billing records.'],
          ['To Communicate With You', 'To send service updates, case status notifications, appointment reminders, and responses to your inquiries via phone, email, or SMS.'],
          ['To Maintain Your Client Portal', 'To create, maintain, and update your secure client portal account with service progress and documentation.'],
          ['To Comply With Legal Obligations', 'To fulfill our legal obligations under the Fair Credit Reporting Act (FCRA), Credit Repair Organizations Act (CROA), and other applicable federal and state laws.'],
          ['To Improve Our Services', 'To analyze usage patterns and service outcomes in order to improve the quality and effectiveness of our offerings. This analysis uses aggregated, de-identified data only.'],
          ['To Prevent Fraud &amp; Protect Security', 'To detect, investigate, and prevent fraudulent transactions, unauthorized access, and other illegal activity.'],
          ['For Marketing Communications', 'With your prior consent, to send promotional information about our services or special offers. You may opt out at any time.'],
        ] as [$title, $desc])
        <div class="flex gap-4 items-start">
          <div class="mt-1 w-2 h-2 rounded-full bg-gold-400 flex-shrink-0"></div>
          <p class="text-royal-700 text-sm leading-relaxed"><strong class="text-royal-900">{{ $title }}</strong> — {!! $desc !!}</p>
        </div>
        @endforeach
      </div>
    </div>

    {{-- Section 03 --}}
    <div class="mb-14" data-reveal>
      <div class="eyebrow mb-4">Section 03</div>
      <h2 class="font-display text-2xl font-bold text-royal-900 mb-4">How We Share Your Information</h2>
      <div class="rounded-2xl bg-gold-50 border border-gold-200 p-5 mb-6">
        <p class="font-semibold text-royal-900 text-sm mb-2">AQ Wealth University does not sell your personal information to third parties.</p>
        <p class="text-sm text-royal-700 font-semibold">No mobile information will be shared with third parties/affiliates for marketing/promotional purposes. Information sharing to subcontractors in support services, such as customer service, is permitted.</p>
      </div>
      <p class="text-royal-600 mb-6 text-sm">We may share your information with the following categories of recipients, only as necessary to provide services or comply with legal requirements:</p>
      <div class="space-y-4">
        @foreach([
          ['Consumer Reporting Agencies', 'We share information with Equifax, Experian, and TransUnion as necessary to access your credit reports and submit dispute correspondence on your behalf, pursuant to your written authorization.'],
          ['Service Providers &amp; Technology Partners', 'We work with third-party service providers who assist us in operating our website, client portal, payment processing, and business communications. These providers are contractually required to protect your information and are permitted to use it only as directed by AQ Wealth University.'],
          ['Legal &amp; Regulatory Authorities', 'We may disclose your information when required by law, court order, or government regulation, or when we reasonably believe disclosure is necessary to protect the rights, property, or safety of AQ Wealth University, our clients, or the public.'],
          ['Business Transfers', 'In the event that AQ Wealth University is involved in a merger, acquisition, or sale of assets, your personal information may be transferred to the successor entity. You will be notified of any such change.'],
        ] as [$title, $desc])
        <div class="rounded-xl border border-royal-100 p-5">
          <h3 class="font-semibold text-royal-900 mb-1 text-sm">{!! $title !!}</h3>
          <p class="text-royal-600 text-sm leading-relaxed">{!! $desc !!}</p>
        </div>
        @endforeach
      </div>
    </div>

    {{-- Section 04 --}}
    <div class="mb-14" data-reveal>
      <div class="eyebrow mb-4">Section 04</div>
      <h2 class="font-display text-2xl font-bold text-royal-900 mb-6">Cookies &amp; Tracking Technologies</h2>
      <p class="text-royal-600 text-sm mb-6">Our website uses cookies and similar tracking technologies to improve your experience and understand how our site is used.</p>
      <div class="space-y-3">
        @foreach([
          ['Essential Cookies', 'Required for the website to function properly. These cannot be disabled without affecting core site functionality.'],
          ['Analytics Cookies', 'Used to understand how visitors interact with our website, which pages are most popular, and how visitors navigate through the site. We use this data in aggregate form.'],
          ['Marketing &amp; Tracking Pixels', 'We may use tracking pixels (including those provided by our CRM platform) to measure the effectiveness of our communications and advertising.'],
        ] as [$title, $desc])
        <div class="flex gap-4 items-start">
          <div class="mt-1 w-2 h-2 rounded-full bg-gold-400 flex-shrink-0"></div>
          <p class="text-royal-700 text-sm leading-relaxed"><strong class="text-royal-900">{!! $title !!}</strong> — {!! $desc !!}</p>
        </div>
        @endforeach
      </div>
    </div>

    {{-- Section 05 --}}
    <div class="mb-14" data-reveal>
      <div class="eyebrow mb-4">Section 05</div>
      <h2 class="font-display text-2xl font-bold text-royal-900 mb-6">SMS Communications &amp; Text Messaging</h2>
      <p class="text-royal-600 text-sm mb-4">By providing your phone number and checking the SMS consent checkbox during enrollment or form submission, you agree to receive text messages from AQ Wealth University. These messages may include:</p>
      <ul class="list-disc list-inside space-y-1 text-sm text-royal-600 mb-6">
        <li>Service updates and case status notifications</li>
        <li>Appointment reminders and consultation confirmations</li>
        <li>Important account or billing notifications</li>
        <li>Promotional offers (with separate consent)</li>
      </ul>
      <div class="rounded-xl bg-royal-50 border border-royal-100 p-5">
        <h3 class="font-semibold text-royal-900 text-sm mb-2">How to Opt Out of SMS</h3>
        <p class="text-sm text-royal-600">You may opt out of SMS communications at any time by replying <strong>STOP</strong> to any text message you receive from us. You may also contact us at <a href="mailto:{{ config('site.contact_email') }}" class="text-gold-600 hover:underline">{{ config('site.contact_email') }}</a> to request removal. Message and data rates may apply. Message frequency varies.</p>
      </div>
    </div>

    {{-- Section 06 — Your Rights --}}
    <div class="mb-14" data-reveal>
      <div class="eyebrow mb-4">Section 06</div>
      <h2 class="font-display text-2xl font-bold text-royal-900 mb-6">Your Privacy Rights</h2>
      <div class="overflow-x-auto rounded-2xl border border-royal-100">
        <table class="w-full text-sm">
          <thead class="bg-royal-900 text-white">
            <tr>
              <th class="text-left p-4 font-semibold">Right</th>
              <th class="text-left p-4 font-semibold">Description</th>
              <th class="text-center p-4 font-semibold">Available</th>
            </tr>
          </thead>
          <tbody class="divide-y divide-royal-100">
            @foreach([
              ['Right to Access', 'Request a copy of the personal information we hold about you.'],
              ['Right to Correction', 'Request correction of inaccurate or incomplete personal information.'],
              ['Right to Deletion', 'Request deletion of your personal information, subject to legal retention requirements.'],
              ['Right to Opt Out of Marketing', 'Opt out of receiving marketing communications from AQ Wealth University at any time.'],
              ['Right to Data Portability', 'Request a copy of your data in a portable, machine-readable format where technically feasible.'],
              ['Right to Restrict Processing', 'Request that we limit how we process your personal information in certain circumstances.'],
              ['Right to Non-Discrimination', 'You will not receive different service quality or pricing for exercising your privacy rights.'],
            ] as [$right, $desc])
            <tr class="even:bg-royal-50/30">
              <td class="p-4 font-medium text-royal-900">{{ $right }}</td>
              <td class="p-4 text-royal-600">{{ $desc }}</td>
              <td class="p-4 text-center text-green-600 font-bold">✓ Yes</td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>

    {{-- Section 07 --}}
    <div class="mb-14" data-reveal>
      <div class="eyebrow mb-4">Section 07</div>
      <h2 class="font-display text-2xl font-bold text-royal-900 mb-6">Data Security</h2>
      <p class="text-royal-600 text-sm mb-4">AQ Wealth University takes the security of your personal information seriously. We implement reasonable administrative, technical, and physical safeguards designed to protect your information from unauthorized access, disclosure, alteration, or destruction.</p>
      <div class="grid sm:grid-cols-2 gap-4">
        @foreach([
          ['Encrypted Transmission', 'All data transmitted between your browser and our website is encrypted using SSL/TLS technology.'],
          ['Secure Client Portal', 'Access to your credit documents and case information is protected by secure login credentials through our third-party portal provider.'],
          ['Access Controls', 'We limit access to your personal information to employees and contractors who need it to perform their job functions.'],
          ['Data Breach Response', 'In the event of a data breach that affects your personal information, we will notify you as required by applicable law.'],
        ] as [$title, $desc])
        <div class="rounded-xl border border-royal-100 bg-royal-50/40 p-5">
          <h3 class="font-semibold text-royal-900 text-sm mb-1">{{ $title }}</h3>
          <p class="text-xs text-royal-600 leading-relaxed">{{ $desc }}</p>
        </div>
        @endforeach
      </div>
    </div>

    {{-- Section 08 --}}
    <div class="mb-14" data-reveal>
      <div class="eyebrow mb-4">Section 08</div>
      <h2 class="font-display text-2xl font-bold text-royal-900 mb-4">Children's Privacy</h2>
      <p class="text-royal-600 text-sm">Our services are intended for adults aged 18 and older. AQ Wealth University does not knowingly collect personal information from anyone under the age of 18. If you believe we have inadvertently collected information from a minor, please contact us immediately and we will take steps to delete that information as promptly as possible.</p>
    </div>

    {{-- Section 09 --}}
    <div class="mb-14" data-reveal>
      <div class="eyebrow mb-4">Section 09</div>
      <h2 class="font-display text-2xl font-bold text-royal-900 mb-4">Changes to This Privacy Policy</h2>
      <p class="text-royal-600 text-sm">AQ Wealth University reserves the right to update or modify this Privacy Policy at any time. When we make material changes, we will update the "Last Updated" date at the top of this page and, where appropriate, notify enrolled clients by email or through the client portal. Your continued use of our services after the effective date of any changes constitutes your acceptance of the updated Privacy Policy.</p>
    </div>

    {{-- Section 10 --}}
    <div class="mb-14" data-reveal>
      <div class="eyebrow mb-4">Section 10</div>
      <h2 class="font-display text-2xl font-bold text-royal-900 mb-6">Contact Us About Privacy</h2>
      <div class="rounded-2xl bg-gradient-to-br from-royal-800 via-royal-900 to-royal-950 text-white p-8">
        <h3 class="font-display text-xl font-bold mb-4">Privacy Contact — AQ Wealth University</h3>
        <p class="text-royal-200/70 text-sm mb-6">Our team is available to address any privacy-related questions or to process rights requests. Please allow up to 30 days for a response to formal rights requests.</p>
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
        <div class="eyebrow justify-center" style="color:var(--gold-300)">Questions About Your Data?</div>
        <h3 class="font-display text-2xl sm:text-3xl font-bold mt-2 mb-4">Reach out directly — we're here to help.</h3>
        <p class="text-royal-100/65 mb-7 leading-relaxed">Our team is available to address any privacy-related concerns or to process your data rights requests.</p>
        <div class="flex justify-center">
          <a href="mailto:{{ config('site.contact_email') }}" class="btn-gold text-base">Email Us Directly</a>
        </div>
      </div>
    </div>

    <p class="mt-10 text-xs text-royal-400 text-center leading-relaxed">This Privacy Policy is provided for informational purposes and constitutes a binding agreement between you and AQ Wealth University regarding the collection, use, and protection of your personal information. This policy does not constitute legal advice. AQ Wealth University provides credit education and consulting services. We do not guarantee the removal of accurate information or specific credit score increases. © {{ date('Y') }} AQ Wealth University. All rights reserved.</p>

  </div>
</section>

@endsection
