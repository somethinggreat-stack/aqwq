@extends('layouts.app')

@section('title', 'Business Funding | AQ Wealth University')
@section('description', 'Apply for business funding through AQ Wealth University. Lines of credit, term loans, SBA loans, equipment financing, and 0% APR business credit cards.')

@push('styles')
  <link rel="stylesheet" href="{{ asset('css/home.css') }}">
  <link rel="stylesheet" href="{{ asset('css/funding.css') }}">
@endpush

@section('content')
  @include('partials.site-nav')

  <!-- ============== HERO ============== -->
  <section id="top" class="relative overflow-hidden pt-36 lg:pt-44 pb-20 hero-bg text-white">
    <div class="hero-grid"></div>
    <div class="hero-orb orb-gold"></div>
    <div class="hero-orb orb-purple"></div>

    <div class="relative mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
      <div class="max-w-3xl">
        <div class="hero-badge mb-6" data-reveal>
          <span class="dot"></span>
          {{ cms('funding.hero_badge', 'Now Funding Approvals') }}
        </div>
        <h1 class="font-display text-4xl sm:text-5xl lg:text-6xl xl:text-7xl font-bold leading-[1.05] tracking-tight" data-reveal data-delay="1">
          {!! cms('funding.hero_title', 'Get <span class="gold-text">Funded.</span><br/>
          Without the Run-Around.') !!}
        </h1>
        <p class="mt-6 text-lg sm:text-xl text-royal-100/85 leading-relaxed" data-reveal data-delay="2">
          {{ cms('funding.hero_subtitle', 'Lines of credit, term loans, SBA-backed financing, equipment funding, and 0% APR business credit cards. Pre-qualify in under 5 minutes with a soft pull that does not affect your credit.') }}
        </p>
        <div class="mt-8 flex flex-col sm:flex-row gap-3" data-reveal data-delay="3">
          <a href="#apply" class="btn-gold text-base">{{ cms('funding.hero_cta_primary', 'Start My Application →') }}</a>
          <a href="#types" class="btn-ghost text-base">{{ cms('funding.hero_cta_secondary', 'See Funding Options') }}</a>
        </div>

        <!-- Hero stats -->
        <div class="mt-12 grid grid-cols-2 sm:grid-cols-4 gap-4 max-w-3xl" data-reveal data-delay="4">
          <div>
            <div class="font-display text-3xl sm:text-4xl font-bold gold-text leading-none">{{ cms('funding.hero_stat1_value', '$250K+') }}</div>
            <div class="mt-1 text-xs text-royal-100/55 uppercase tracking-wider">{{ cms('funding.hero_stat1_label', 'Max funding') }}</div>
          </div>
          <div>
            <div class="font-display text-3xl sm:text-4xl font-bold gold-text leading-none">{{ cms('funding.hero_stat2_value', '24h') }}</div>
            <div class="mt-1 text-xs text-royal-100/55 uppercase tracking-wider">{{ cms('funding.hero_stat2_label', 'Initial response') }}</div>
          </div>
          <div>
            <div class="font-display text-3xl sm:text-4xl font-bold gold-text leading-none">{{ cms('funding.hero_stat3_value', '0%') }}</div>
            <div class="mt-1 text-xs text-royal-100/55 uppercase tracking-wider">{{ cms('funding.hero_stat3_label', 'Intro APR options') }}</div>
          </div>
          <div>
            <div class="font-display text-3xl sm:text-4xl font-bold gold-text leading-none">{{ cms('funding.hero_stat4_value', 'Soft') }}</div>
            <div class="mt-1 text-xs text-royal-100/55 uppercase tracking-wider">{{ cms('funding.hero_stat4_label', 'Credit pull') }}</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ============== FUNDING TYPES ============== -->
  <section id="types" class="py-24 lg:py-32 bg-gradient-to-b from-white via-royal-50/40 to-white">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
      <div class="max-w-2xl mb-14" data-reveal>
        <div class="eyebrow">{{ cms('funding.types_eyebrow', 'Funding Programs') }}</div>
        <h2 class="section-title">{{ cms('funding.types_title', 'Real funding products. Real lender networks.') }}</h2>
        <p class="section-sub">{{ cms('funding.types_sub', 'We work with a network of business-focused lenders, traditional and alternative, to match you with the funding product that actually fits where you are.') }}</p>
      </div>

      <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">

        <div class="ftype-card" data-reveal data-delay="1">
          <div class="ftype-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="5" width="20" height="14" rx="2"/><line x1="2" y1="10" x2="22" y2="10"/></svg>
          </div>
          <h3 class="ftype-title">{{ cms('funding.type1_title', 'Business Lines of Credit') }}</h3>
          <p class="ftype-desc">{{ cms('funding.type1_desc', 'Revolving credit you can draw, repay, and reuse. Ideal for working capital, payroll gaps, and unexpected expenses.') }}</p>
          <div class="ftype-amount">
            <span class="ftype-amount-label">{{ cms('funding.type1_amount_label', 'Up to') }}</span>
            <span class="ftype-amount-val">{{ cms('funding.type1_amount_val', '$250,000') }}</span>
          </div>
        </div>

        <div class="ftype-card" data-reveal data-delay="2">
          <div class="ftype-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M3 3v18h18"/><path d="m7 14 4-4 4 4 5-5"/></svg>
          </div>
          <h3 class="ftype-title">{{ cms('funding.type2_title', 'Term Loans') }}</h3>
          <p class="ftype-desc">{{ cms('funding.type2_desc', 'Lump-sum financing with predictable monthly payments. Great for expansion, equipment, or large one-time investments.') }}</p>
          <div class="ftype-amount">
            <span class="ftype-amount-label">{{ cms('funding.type2_amount_label', 'Up to') }}</span>
            <span class="ftype-amount-val">{{ cms('funding.type2_amount_val', '$500,000') }}</span>
          </div>
        </div>

        <div class="ftype-card" data-reveal data-delay="3">
          <div class="ftype-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2 4 5v6c0 5.5 3.8 10.6 8 12 4.2-1.4 8-6.5 8-12V5l-8-3z"/><path d="m9 12 2 2 4-4"/></svg>
          </div>
          <h3 class="ftype-title">{{ cms('funding.type3_title', 'SBA Loans') }}</h3>
          <p class="ftype-desc">{{ cms('funding.type3_desc', 'Government-backed loans with extended terms and competitive rates. Best for established businesses with solid financials.') }}</p>
          <div class="ftype-amount">
            <span class="ftype-amount-label">{{ cms('funding.type3_amount_label', 'Up to') }}</span>
            <span class="ftype-amount-val">{{ cms('funding.type3_amount_val', '$5M') }}</span>
          </div>
        </div>

        <div class="ftype-card" data-reveal data-delay="4">
          <div class="ftype-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="7" width="20" height="14" rx="2"/><path d="M16 7V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v2"/></svg>
          </div>
          <h3 class="ftype-title">{{ cms('funding.type4_title', 'Equipment Financing') }}</h3>
          <p class="ftype-desc">{{ cms('funding.type4_desc', 'Finance the equipment you need with the equipment itself as collateral. Trucks, machinery, computers, kitchen gear.') }}</p>
          <div class="ftype-amount">
            <span class="ftype-amount-label">{{ cms('funding.type4_amount_label', 'Up to') }}</span>
            <span class="ftype-amount-val">{{ cms('funding.type4_amount_val', '$1M') }}</span>
          </div>
        </div>

        <div class="ftype-card" data-reveal data-delay="5">
          <div class="ftype-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="5" width="18" height="14" rx="2"/><path d="M3 10h18M8 15h2M14 15h4"/></svg>
          </div>
          <h3 class="ftype-title">{{ cms('funding.type5_title', '0% APR Business Credit') }}</h3>
          <p class="ftype-desc">{{ cms('funding.type5_desc', 'Stack 0% intro APR business credit cards for short-term capital. Build business credit and earn rewards while you scale.') }}</p>
          <div class="ftype-amount">
            <span class="ftype-amount-label">{{ cms('funding.type5_amount_label', 'Up to') }}</span>
            <span class="ftype-amount-val">{{ cms('funding.type5_amount_val', '$150,000') }}</span>
          </div>
        </div>

        <div class="ftype-card" data-reveal data-delay="6">
          <div class="ftype-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><path d="M14 2v6h6"/><path d="M9 13h6M9 17h4"/></svg>
          </div>
          <h3 class="ftype-title">{{ cms('funding.type6_title', 'Invoice Factoring') }}</h3>
          <p class="ftype-desc">{{ cms('funding.type6_desc', 'Turn outstanding invoices into immediate cash. Sell receivables to a factor and receive 80–90% upfront, no debt added.') }}</p>
          <div class="ftype-amount">
            <span class="ftype-amount-label">{{ cms('funding.type6_amount_label', 'Advance rate') }}</span>
            <span class="ftype-amount-val">{{ cms('funding.type6_amount_val', 'Up to 90%') }}</span>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- ============== REQUIREMENTS + PROCESS ============== -->
  <section class="py-24 lg:py-32 bg-royal-950 text-white relative overflow-hidden">
    <div class="hero-orb orb-gold" style="top:5%; left:-8%; opacity:0.20"></div>
    <div class="hero-orb orb-purple" style="bottom:5%; right:-8%; opacity:0.30"></div>

    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 relative">
      <div class="grid lg:grid-cols-2 gap-12 lg:gap-20 items-start">

        <!-- Requirements -->
        <div data-reveal>
          <div class="eyebrow">{{ cms('funding.req_eyebrow', 'Requirements') }}</div>
          <h2 class="section-title text-white">{{ cms('funding.req_title', 'What you\'ll need to qualify.') }}</h2>
          <p class="mt-4 text-royal-100/70 mb-10 leading-relaxed">{{ cms('funding.req_sub', 'Most clients qualify if they meet the baseline below. Don\'t qualify yet? We\'ll walk you through credit repair and business setup so you do.') }}</p>

          <div class="space-y-3">
            <div class="req-row">
              <div class="req-icon">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
              </div>
              <div>
                <div class="font-semibold text-white text-sm">{{ cms('funding.req1_title', 'Personal credit score 600+') }}</div>
                <div class="text-xs text-royal-100/55">{{ cms('funding.req1_desc', 'Some products go lower with collateral or revenue') }}</div>
              </div>
            </div>
            <div class="req-row">
              <div class="req-icon">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
              </div>
              <div>
                <div class="font-semibold text-white text-sm">{{ cms('funding.req2_title', 'Registered business entity (LLC, Corp, etc.)') }}</div>
                <div class="text-xs text-royal-100/55">{{ cms('funding.req2_desc', 'Need help forming one? We do that too') }}</div>
              </div>
            </div>
            <div class="req-row">
              <div class="req-icon">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
              </div>
              <div>
                <div class="font-semibold text-white text-sm">{{ cms('funding.req3_title', 'EIN and business bank account') }}</div>
                <div class="text-xs text-royal-100/55">{{ cms('funding.req3_desc', 'Separate from personal finances') }}</div>
              </div>
            </div>
            <div class="req-row">
              <div class="req-icon">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
              </div>
              <div>
                <div class="font-semibold text-white text-sm">{{ cms('funding.req4_title', 'U.S.-based business operations') }}</div>
                <div class="text-xs text-royal-100/55">{{ cms('funding.req4_desc', 'All 50 states served') }}</div>
              </div>
            </div>
            <div class="req-row">
              <div class="req-icon">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
              </div>
              <div>
                <div class="font-semibold text-white text-sm">{{ cms('funding.req5_title', 'Last 3 months of bank statements (for revenue products)') }}</div>
                <div class="text-xs text-royal-100/55">{{ cms('funding.req5_desc', 'Not required for personal-credit-only programs') }}</div>
              </div>
            </div>
          </div>
        </div>

        <!-- Process -->
        <div data-reveal data-delay="2">
          <div class="eyebrow">{{ cms('funding.process_eyebrow', 'How It Works') }}</div>
          <h2 class="section-title text-white">{{ cms('funding.process_title', 'Three steps to funding.') }}</h2>
          <p class="mt-4 text-royal-100/70 mb-10 leading-relaxed">{{ cms('funding.process_sub', 'A simple, transparent process. No hidden fees, no surprise paperwork, no pressure.') }}</p>

          <div class="space-y-4">
            <div class="pstep">
              <div class="pstep-num">{{ cms('funding.step1_num', '01') }}</div>
              <h3 class="pstep-title">{{ cms('funding.step1_title', 'Pre-Qualify') }}</h3>
              <p class="pstep-desc">{{ cms('funding.step1_desc', 'Fill out the application below. Soft credit pull only, takes about 5 minutes. We see what you qualify for in real time.') }}</p>
            </div>
            <div class="pstep">
              <div class="pstep-num">{{ cms('funding.step2_num', '02') }}</div>
              <h3 class="pstep-title">{{ cms('funding.step2_title', 'Match & Strategize') }}</h3>
              <p class="pstep-desc">{{ cms('funding.step2_desc', 'We review your file, match you with the right lender(s), and walk you through the offers. You choose what fits.') }}</p>
            </div>
            <div class="pstep">
              <div class="pstep-num">{{ cms('funding.step3_num', '03') }}</div>
              <h3 class="pstep-title">{{ cms('funding.step3_title', 'Fund & Deploy') }}</h3>
              <p class="pstep-desc">{{ cms('funding.step3_desc', 'Sign the offer, get funded, and put the capital to work. Most products fund in 2–10 business days from approval.') }}</p>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- ============== APPLICATION FORM ============== -->
  <section id="apply" class="py-24 lg:py-32 bg-gradient-to-b from-royal-950 via-royal-900 to-royal-950 text-white relative overflow-hidden">
    <div class="hero-orb orb-gold" style="top:-10%; right:-8%; opacity:0.18"></div>
    <div class="hero-orb orb-purple" style="bottom:-10%; left:-8%; opacity:0.30"></div>

    <div class="mx-auto max-w-3xl px-4 sm:px-6 lg:px-8 relative">

      <div class="text-center mb-10" data-reveal>
        <div class="eyebrow justify-center">{{ cms('funding.apply_eyebrow', 'Pre-Qualification') }}</div>
        <h2 class="section-title text-white">{{ cms('funding.apply_title', 'Apply for funding.') }}</h2>
        <p class="mt-3 text-royal-100/65 leading-relaxed max-w-xl mx-auto">{{ cms('funding.apply_sub', 'Five minutes. Soft pull. No impact on your credit. We\'ll review and reach out within 24 hours.') }}</p>
      </div>

      <form id="fundingForm" class="app-card" data-reveal data-delay="1" novalidate>

        <!-- Stepper -->
        <div class="stepper">
          <div class="stepper-step active" data-step="1">
            <div class="stepper-circle">1</div>
            <div class="stepper-label">{{ cms('funding.stepper1_label', 'Business') }}</div>
          </div>
          <div class="stepper-line" data-line="1"></div>
          <div class="stepper-step" data-step="2">
            <div class="stepper-circle">2</div>
            <div class="stepper-label">{{ cms('funding.stepper2_label', 'Financials') }}</div>
          </div>
          <div class="stepper-line" data-line="2"></div>
          <div class="stepper-step" data-step="3">
            <div class="stepper-circle">3</div>
            <div class="stepper-label">{{ cms('funding.stepper3_label', 'Contact') }}</div>
          </div>
        </div>

        <!-- STEP 1: Business Info -->
        <div class="form-panel active" data-panel="1">
          <h3 class="panel-title">{{ cms('funding.panel1_title', 'Tell us about your business.') }}</h3>
          <p class="panel-sub">{{ cms('funding.panel1_sub', 'Quick basics about your company so we can match you with the right lenders.') }}</p>

          <div class="field">
            <label class="field-label">{!! cms('funding.field_biz_name_label', 'Legal Business Name <span class="req">*</span>') !!}</label>
            <input type="text" name="bizName" class="form-input" placeholder="e.g., Acme Holdings LLC" required>
          </div>

          <div class="field-row">
            <div class="field">
              <label class="field-label">{!! cms('funding.field_entity_label', 'Entity Type <span class="req">*</span>') !!}</label>
              <select name="entity" class="form-select" required>
                <option value="">Select…</option>
                <option>LLC</option>
                <option>S-Corp</option>
                <option>C-Corp</option>
                <option>Sole Proprietor</option>
                <option>Partnership</option>
                <option>Not yet formed</option>
              </select>
            </div>
            <div class="field">
              <label class="field-label">{!! cms('funding.field_industry_label', 'Industry <span class="req">*</span>') !!}</label>
              <select name="industry" class="form-select" required>
                <option value="">Select…</option>
                <option>Retail / E-commerce</option>
                <option>Construction / Contracting</option>
                <option>Real Estate</option>
                <option>Trucking / Transportation</option>
                <option>Restaurant / Food Service</option>
                <option>Professional Services</option>
                <option>Healthcare</option>
                <option>Technology / SaaS</option>
                <option>Beauty / Salon</option>
                <option>Other</option>
              </select>
            </div>
          </div>

          <div class="field-row">
            <div class="field">
              <label class="field-label">{!! cms('funding.field_tib_label', 'Time in Business <span class="req">*</span>') !!}</label>
              <select name="tib" class="form-select" required>
                <option value="">Select…</option>
                <option>Less than 6 months</option>
                <option>6–12 months</option>
                <option>1–2 years</option>
                <option>2–5 years</option>
                <option>5+ years</option>
              </select>
            </div>
            <div class="field">
              <label class="field-label">{!! cms('funding.field_state_label', 'State <span class="req">*</span>') !!}</label>
              <input type="text" name="state" class="form-input" placeholder="e.g., TX" maxlength="2" required>
            </div>
          </div>

          <div class="form-nav">
            <button type="button" class="btn-back" disabled>
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="15 18 9 12 15 6"/></svg>
              {{ cms('funding.btn_back', 'Back') }}
            </button>
            <button type="button" class="btn-gold" data-action="next">{{ cms('funding.btn_continue', 'Continue →') }}</button>
          </div>
        </div>

        <!-- STEP 2: Financials & Funding Need -->
        <div class="form-panel" data-panel="2">
          <h3 class="panel-title">{{ cms('funding.panel2_title', 'Financials & funding need.') }}</h3>
          <p class="panel-sub">{{ cms('funding.panel2_sub', 'This helps us match you with the right product. All figures are estimates, no documentation required at this stage.') }}</p>

          <div class="field-row">
            <div class="field">
              <label class="field-label">{!! cms('funding.field_credit_label', 'Personal Credit Range <span class="req">*</span>') !!}</label>
              <select name="creditRange" class="form-select" required>
                <option value="">Select…</option>
                <option>Below 580</option>
                <option>580–639</option>
                <option>640–679</option>
                <option>680–719</option>
                <option>720+</option>
                <option>Not sure</option>
              </select>
            </div>
            <div class="field">
              <label class="field-label">{!! cms('funding.field_revenue_label', 'Avg. Monthly Revenue <span class="req">*</span>') !!}</label>
              <select name="revenue" class="form-select" required>
                <option value="">Select…</option>
                <option>Under $5K</option>
                <option>$5K–$15K</option>
                <option>$15K–$30K</option>
                <option>$30K–$75K</option>
                <option>$75K–$150K</option>
                <option>$150K+</option>
                <option>Pre-revenue</option>
              </select>
            </div>
          </div>

          <div class="field">
            <label class="field-label">{!! cms('funding.field_amount_label', 'Funding Amount Needed <span class="req">*</span>') !!}</label>
            <select name="amount" class="form-select" required>
              <option value="">Select…</option>
              <option>Under $25K</option>
              <option>$25K–$50K</option>
              <option>$50K–$100K</option>
              <option>$100K–$250K</option>
              <option>$250K–$500K</option>
              <option>$500K+</option>
            </select>
          </div>

          <div class="field">
            <label class="field-label">{!! cms('funding.field_funding_type_label', 'Funding Type Interest <span class="req">*</span>') !!}</label>
            <div class="chip-group">
              <label class="chip-label"><input type="checkbox" name="fundingType" value="Line of Credit" class="chip-input">Line of Credit</label>
              <label class="chip-label"><input type="checkbox" name="fundingType" value="Term Loan" class="chip-input">Term Loan</label>
              <label class="chip-label"><input type="checkbox" name="fundingType" value="SBA" class="chip-input">SBA</label>
              <label class="chip-label"><input type="checkbox" name="fundingType" value="Equipment" class="chip-input">Equipment</label>
              <label class="chip-label"><input type="checkbox" name="fundingType" value="0% APR Cards" class="chip-input">0% APR Cards</label>
              <label class="chip-label"><input type="checkbox" name="fundingType" value="Invoice Factoring" class="chip-input">Invoice Factoring</label>
              <label class="chip-label"><input type="checkbox" name="fundingType" value="Not sure" class="chip-input">Not sure, help me decide</label>
            </div>
          </div>

          <div class="field">
            <label class="field-label">{{ cms('funding.field_use_label', 'Use of Funds') }}</label>
            <textarea name="useOfFunds" class="form-textarea" placeholder="e.g., expansion, equipment, working capital, marketing, real estate…"></textarea>
          </div>

          <div class="form-nav">
            <button type="button" class="btn-back" data-action="back">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="15 18 9 12 15 6"/></svg>
              {{ cms('funding.btn_back', 'Back') }}
            </button>
            <button type="button" class="btn-gold" data-action="next">{{ cms('funding.btn_continue', 'Continue →') }}</button>
          </div>
        </div>

        <!-- STEP 3: Contact -->
        <div class="form-panel" data-panel="3">
          <h3 class="panel-title">{{ cms('funding.panel3_title', 'Where can we reach you?') }}</h3>
          <p class="panel-sub">{{ cms('funding.panel3_sub', 'We\'ll review your application and get back to you within one business day with next steps.') }}</p>

          <div class="field-row">
            <div class="field">
              <label class="field-label">{!! cms('funding.field_first_name_label', 'First Name <span class="req">*</span>') !!}</label>
              <input type="text" name="firstName" class="form-input" placeholder="Jane" required>
            </div>
            <div class="field">
              <label class="field-label">{!! cms('funding.field_last_name_label', 'Last Name <span class="req">*</span>') !!}</label>
              <input type="text" name="lastName" class="form-input" placeholder="Doe" required>
            </div>
          </div>

          <div class="field">
            <label class="field-label">{!! cms('funding.field_email_label', 'Email <span class="req">*</span>') !!}</label>
            <input type="email" name="email" class="form-input" placeholder="you@business.com" required>
          </div>

          <div class="field">
            <label class="field-label">{!! cms('funding.field_phone_label', 'Phone <span class="req">*</span>') !!}</label>
            <input type="tel" name="phone" class="form-input" placeholder="(555) 123-4567" required>
          </div>

          <div class="field">
            <label class="field-label">{{ cms('funding.field_besttime_label', 'Best Time to Connect') }}</label>
            <select name="bestTime" class="form-select">
              <option value="">Anytime</option>
              <option>Morning (8a–12p ET)</option>
              <option>Afternoon (12p–5p ET)</option>
              <option>Evening (5p–8p ET)</option>
            </select>
          </div>

          <div class="mt-4 space-y-2.5 text-xs text-royal-100/65 leading-relaxed">
            <label class="flex items-start gap-2.5 cursor-pointer">
              <input type="checkbox" name="consent" required class="mt-0.5 accent-gold-500 flex-shrink-0">
              <span>{{ cms('funding.consent_text', 'I authorize AQ Wealth University to contact me about my application and understand a soft credit pull may be performed. No hard pull occurs without my written consent.') }}</span>
            </label>
            <label class="flex items-start gap-2.5 cursor-pointer">
              <input type="checkbox" name="sms_transactional" required class="mt-0.5 accent-gold-500 flex-shrink-0">
              <span>I consent to receive transactional messages from <strong class="text-white/90">AQ Wealth University</strong> at the phone number provided. Message frequency may vary. Message &amp; Data rates may apply. Reply <strong>HELP</strong> for help or <strong>STOP</strong> to opt-out.</span>
            </label>
            <label class="flex items-start gap-2.5 cursor-pointer">
              <input type="checkbox" name="sms_marketing" class="mt-0.5 accent-gold-500 flex-shrink-0">
              <span>I consent to receive marketing and promotional messages from <strong class="text-white/90">AQ Wealth University</strong> at the phone number provided. Message frequency may vary. Message &amp; Data rates may apply. Reply <strong>HELP</strong> for help or <strong>STOP</strong> to opt-out.</span>
            </label>
            <p>By submitting, you agree to our <a href="/privacy-policy" class="underline hover:text-gold-300 transition">Privacy Policy</a> and <a href="/terms-of-service" class="underline hover:text-gold-300 transition">Terms of Service</a>.</p>
          </div>

          <div class="form-nav">
            <button type="button" class="btn-back" data-action="back">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="15 18 9 12 15 6"/></svg>
              {{ cms('funding.btn_back', 'Back') }}
            </button>
            <button type="submit" class="btn-gold">{{ cms('funding.btn_submit', 'Submit Application →') }}</button>
          </div>
        </div>

        <!-- SUCCESS PANEL -->
        <div class="form-panel" data-panel="success">
          <div class="text-center py-6">
            <div class="success-icon">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
            </div>
            <h3 class="font-display font-bold text-2xl text-white mb-2">{{ cms('funding.success_title', 'Application received.') }}</h3>
            <p class="text-royal-100/65 max-w-md mx-auto leading-relaxed">{{ cms('funding.success_desc', 'Thank you. Your pre-qualification is in our hands. A funding advisor will reach out within one business day with your offers and next steps.') }}</p>
            <a href="{{ route('home') }}" class="btn-ghost mt-8">{{ cms('funding.success_cta', 'Back to Home') }}</a>
          </div>
        </div>

        <!-- Trust strip -->
        <div class="trust-row">
          <div class="trust-item">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg>
            {{ cms('funding.trust1', '256-bit SSL encrypted') }}
          </div>
          <div class="trust-item">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="m9 12 2 2 4-4"/></svg>
            {{ cms('funding.trust2', 'Soft pull, no credit impact') }}
          </div>
          <div class="trust-item">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2 4 5v6c0 5.5 3.8 10.6 8 12 4.2-1.4 8-6.5 8-12V5l-8-3z"/></svg>
            {{ cms('funding.trust3', 'Your info stays private') }}
          </div>
        </div>

      </form>
    </div>
  </section>

  @include('partials.site-footer')

  <!-- ============== JS ============== -->
@endsection

@push('scripts')
  <script src="{{ asset('js/funding.js') }}" defer></script>
@endpush
