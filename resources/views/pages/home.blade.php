@extends('layouts.app')

@section('title', 'AQ Wealth University | From Knowledge to Wisdom, From Wisdom to Wealth')
@section('description', 'AQ Wealth University: credit repair, business credit, business structure, and funding mentorship. Build, repair, and leverage credit the right way.')

@push('styles')
  <link rel="stylesheet" href="{{ asset('css/home.css') }}">
  <style>
    /* Performance optimizations */
    * {
      -webkit-font-smoothing: antialiased;
      -moz-osx-font-smoothing: grayscale;
    }
    
    /* Reduce blur intensity for better performance */
    .hero-orb { filter: blur(80px) !important; }
    
    /* GPU acceleration for smooth animations */
    .modal-overlay, .modal-panel, .lightbox {
      will-change: opacity;
      transform: translateZ(0);
    }
    
    /* Optimize backdrop blur */
    #nav { backdrop-filter: blur(8px) !important; }
    #mobileMenu { backdrop-filter: blur(8px) !important; }
    
    /* Smoother transitions */
    .quiz-panel { 
      transition: opacity 0.2s ease, transform 0.2s ease !important;
      will-change: opacity, transform;
    }
    
    /* Prevent layout shift */
    img { content-visibility: auto; }
  </style>
@endpush

@section('content')

  <!-- ============== ANNOUNCEMENT BAR ============== -->
  <div id="announceBar" class="announce-bar">
    <span>{!! cms('home.announce.line1', '<strong>Now Enrolling</strong> · Free credit assessment with every consultation') !!}</span>
    <span class="sep">·</span>
    <span>{{ cms('home.announce.line2', 'Limited spots for this intake') }}</span>
  </div>

  @include('partials.site-nav')

  <!-- ============== HERO ============== -->
  <section id="top" class="relative overflow-hidden pt-36 lg:pt-44 pb-24 lg:pb-32 hero-bg">
    <div class="hero-grid"></div>
    <div class="hero-orb orb-gold"></div>
    <div class="hero-orb orb-purple"></div>

    <div class="relative mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 grid lg:grid-cols-12 gap-12 items-center">
      <div class="lg:col-span-7 text-white">
        <div class="hero-fade delay-1 inline-flex items-center gap-2 px-3 py-1 rounded-full bg-gold-500/15 ring-1 ring-gold-400/40 text-gold-200 text-xs tracking-widest uppercase mb-6">
          <span class="w-1.5 h-1.5 rounded-full bg-gold-400 animate-pulse"></span>
          {{ cms('home.hero.badge', 'Now Enrolling') }}
        </div>
        <h1 class="hero-fade delay-2 font-display text-4xl sm:text-5xl lg:text-6xl xl:text-7xl font-bold leading-[1.05] tracking-tight">
          {!! cms('home.hero.title', 'From <span class="gold-text">Knowledge</span> to Wisdom.<br/>From Wisdom to <span class="gold-text">Wealth</span>.') !!}
        </h1>
        <p class="hero-fade delay-3 mt-6 text-lg sm:text-xl text-royal-100/90 max-w-2xl leading-relaxed">
          {{ cms('home.hero.subtitle', 'Repair your credit, build business credit, set up your company the right way, and open the door to real personal and business funding. One school. One plan. Real results.') }}
        </p>
        <div class="hero-fade delay-4 mt-8 flex flex-col sm:flex-row gap-3">
          <a href="#pricing" class="btn-gold text-base">{{ cms('home.hero.cta_primary', 'Start Building Wealth →') }}</a>
          <a href="#services" class="btn-ghost text-base">{{ cms('home.hero.cta_secondary', 'Explore Services') }}</a>
        </div>
        <div class="hero-fade delay-5 mt-4">
          <a href="https://www.fanbasis.com/agency-checkout/aqwealthuniversity/9rX4P" target="_blank" rel="noopener"
             class="inline-flex items-center gap-2 px-5 py-2.5 rounded-full text-sm font-bold tracking-wide text-royal-900 transition hover:scale-105"
             style="background:linear-gradient(135deg,#cfa12a,#dfb84a);box-shadow:0 4px 18px -4px rgba(207,161,42,0.55);">
            📅 Book your consultation HERE
          </a>
        </div>

        <div class="hero-fade delay-5 mt-10 flex flex-wrap items-center gap-x-8 gap-y-3 text-sm text-royal-100/80">
          <div class="flex items-center gap-2">
            <svg class="w-5 h-5 text-gold-300" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/></svg>
            {{ cms('home.hero.bullet1', 'Results in as fast as 14–30 days') }}
          </div>
          <div class="flex items-center gap-2">
            <svg class="w-5 h-5 text-gold-300" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/></svg>
            {{ cms('home.hero.bullet2', 'Single & Duo packages') }}
          </div>
          <div class="flex items-center gap-2">
            <svg class="w-5 h-5 text-gold-300" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/></svg>
            {{ cms('home.hero.bullet3', 'Mentorship from people who do this work') }}
          </div>
        </div>
      </div>

      <!-- Owner portrait -->
      <div class="lg:col-span-5">
        <div class="hero-portrait-wrap" data-reveal data-delay="3">
          <div class="hero-portrait-glow"></div>
          <img src="{{ cms_image('media.owner_image', 'images/owner.jpeg') }}" alt="Danielle Todd, Founder of AQ Wealth University" class="hero-portrait-img" loading="eager" />
          <div class="hero-portrait-frame"></div>

          <div class="hero-portrait-badge">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2 4 5v6c0 5.5 3.8 10.6 8 12 4.2-1.4 8-6.5 8-12V5l-8-3z"/></svg>
            Founder
          </div>

          <div class="hero-portrait-overlay">
            <div class="hero-portrait-name">Danielle Todd</div>
            <div class="hero-portrait-role">Founder · AQ Wealth University</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ============== MARQUEE RIBBON ============== -->
  <div class="marquee" aria-hidden="true">
    <div class="marquee-track">
      <span>{{ cms('home.extra.marquee1', 'From Knowledge to Wisdom') }}</span><em>◆</em>
      <span>{{ cms('home.extra.marquee2', 'From Wisdom to Wealth') }}</span><em>◆</em>
      <span>{{ cms('home.extra.marquee3', 'Repair · Rebuild · Structure · Fund') }}</span><em>◆</em>
      <span>{{ cms('home.extra.marquee4', 'Built for the Next Generation') }}</span><em>◆</em>
      <span>{{ cms('home.extra.marquee1', 'From Knowledge to Wisdom') }}</span><em>◆</em>
      <span>{{ cms('home.extra.marquee2', 'From Wisdom to Wealth') }}</span><em>◆</em>
      <span>{{ cms('home.extra.marquee3', 'Repair · Rebuild · Structure · Fund') }}</span><em>◆</em>
      <span>{{ cms('home.extra.marquee4', 'Built for the Next Generation') }}</span><em>◆</em>
    </div>
  </div>

  <!-- ============== SERVICES ============== -->
  <section id="services" class="py-24 lg:py-32 bg-white">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
      <div class="max-w-3xl" data-reveal>
        <div class="eyebrow">{{ cms('home.services.eyebrow', 'What We Do') }}</div>
        <h2 class="section-title">{{ cms('home.services.heading', 'Five pillars to build, protect, and leverage your wealth.') }}</h2>
        <p class="section-sub">{{ cms('home.services.sub', 'Cleaning up your credit, building business credit, or trying to get funded for the first time. You get the structure, the teaching, and the work done with you so you can move forward with confidence.') }}</p>
      </div>

      <div class="mt-14 grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
        <div class="service-card" data-reveal data-delay="1" style="cursor:pointer;" onclick="window.location.href='/services'">
          <div class="service-aurora"></div>
          <span class="service-num">01</span>
          <div class="service-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M3 12a9 9 0 109-9"/><path d="M3 12V3h9"/><path d="m8 12 3 3 5-6"/></svg></div>
          <h3>{{ cms('home.services.card1_title', 'Credit Repair') }}</h3>
          <p>{{ cms('home.services.card1_desc', 'Disputes, deletions, and strategy to remove negative items and lift your score quickly.') }}</p>
          <a href="/services" class="service-arrow" aria-label="Learn more about Credit Repair"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14m-6-6 6 6-6 6"/></svg></a>
        </div>
        <div class="service-card" data-reveal data-delay="2" style="cursor:pointer;" onclick="window.location.href='/services'">
          <div class="service-aurora"></div>
          <span class="service-num">02</span>
          <div class="service-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M3 21h18"/><path d="M5 21V10l7-5 7 5v11"/><path d="M9 21v-6h6v6"/></svg></div>
          <h3>{{ cms('home.services.card2_title', 'Rebuilding Credit') }}</h3>
          <p>{{ cms('home.services.card2_desc', 'Tradelines, utilization strategy, and credit mix done right so your score holds and grows.') }}</p>
          <a href="/services" class="service-arrow" aria-label="Learn more about Rebuilding Credit"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14m-6-6 6 6-6 6"/></svg></a>
        </div>
        <div class="service-card" data-reveal data-delay="3" style="cursor:pointer;" onclick="window.location.href='/business-setup'">
          <div class="service-aurora"></div>
          <span class="service-num">03</span>
          <div class="service-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><rect x="3" y="7" width="18" height="13" rx="2"/><path d="M8 7V5a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"/><path d="M3 13h18"/></svg></div>
          <h3>{{ cms('home.services.card3_title', 'Business Structure') }}</h3>
          <p>{{ cms('home.services.card3_desc', 'LLC formation, EIN, bank accounts, and compliance, all set up so lenders take you seriously.') }}</p>
          <a href="/business-setup" class="service-arrow" aria-label="Learn more about Business Structure"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14m-6-6 6 6-6 6"/></svg></a>
        </div>
        <div class="service-card" data-reveal data-delay="1" style="cursor:pointer;" onclick="window.location.href='/business-setup'">
          <div class="service-aurora"></div>
          <span class="service-num">04</span>
          <div class="service-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><rect x="2" y="6" width="20" height="13" rx="2"/><path d="M2 11h20"/><path d="M6 16h4"/></svg></div>
          <h3>{{ cms('home.services.card4_title', 'Business Credit') }}</h3>
          <p>{{ cms('home.services.card4_desc', 'Establish Dun & Bradstreet, vendor accounts, and trade lines to unlock real corporate credit.') }}</p>
          <a href="/business-setup" class="service-arrow" aria-label="Learn more about Business Credit"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14m-6-6 6 6-6 6"/></svg></a>
        </div>
        <div class="service-card" data-reveal data-delay="2" style="cursor:pointer;" onclick="window.location.href='{{ route('funding') }}'">
          <div class="service-aurora"></div>
          <span class="service-num">05</span>
          <div class="service-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M12 2v20"/><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg></div>
          <h3>{{ cms('home.services.card5_title', 'Personal & Business Funding') }}</h3>
          <p>{{ cms('home.services.card5_desc', 'Personal lines, business lines of credit, and capital placement, stacked the smart way.') }}</p>
          <a href="{{ route('funding') }}" class="service-arrow" aria-label="Learn more about Funding"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14m-6-6 6 6-6 6"/></svg></a>
        </div>
        <div class="service-card" data-reveal data-delay="3" style="cursor:pointer;" onclick="window.open('{{ config('site.links.skool', '#contact') }}','_blank')">
          <div class="service-aurora"></div>
          <span class="service-num">06</span>
          <div class="service-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M22 10 12 5 2 10l10 5 10-5z"/><path d="M6 12v5c3 2 9 2 12 0v-5"/></svg></div>
          <h3>{{ cms('home.services.card6_title', 'Wealth University') }}</h3>
          <p>{{ cms('home.services.card6_desc', 'Live trainings, replays, frameworks, and a community of people moving in the same direction as you.') }}</p>
          <a href="{{ config('site.links.skool', '#contact') }}" target="_blank" rel="noopener" class="service-arrow" aria-label="Learn more about Wealth University"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14m-6-6 6 6-6 6"/></svg></a>
        </div>
      </div>
    </div>
  </section>

  <!-- ============== VIDEO TESTIMONIALS (HOISTED FOR SOCIAL PROOF) ============== -->
  <section id="video-reviews" class="py-16 lg:py-20 bg-white relative overflow-hidden">
    <div class="absolute inset-0 opacity-30 pointer-events-none" style="background-image: radial-gradient(circle at 10% 20%, rgba(207,161,42,0.18) 0%, transparent 40%), radial-gradient(circle at 90% 80%, rgba(122,48,191,0.12) 0%, transparent 45%);"></div>

    <div class="relative mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
      <div class="max-w-3xl mx-auto text-center mb-10" data-reveal>
        <div class="eyebrow justify-center">{{ cms('home.reviews.video_eyebrow', 'Real Client Stories') }}</div>
        <h2 class="section-title">{!! cms('home.reviews.video_heading', 'Hear it straight from <span class="gold-text">our clients.</span>') !!}</h2>
        <p class="section-sub mx-auto">{{ cms('home.reviews.video_sub', 'Real people, real results. Tap a video to watch their journey.') }}</p>
      </div>

      <div class="video-testimonials max-w-4xl mx-auto" data-reveal>
        <div class="video-card" data-video>
          <video preload="metadata" playsinline muted>
            <source src="{{ config('site.media.testimonial_video_1_url') }}" type="video/mp4">
          </video>
          <span class="video-card-badge">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polygon points="23 7 16 12 23 17 23 7"/><rect x="1" y="5" width="15" height="14" rx="2" ry="2"/></svg>
            {{ cms('home.reviews.video_badge', 'Video Review') }}
          </span>
          <div class="video-play-overlay">
            <div class="video-play-btn">
              <svg viewBox="0 0 24 24"><path d="M8 5v14l11-7z"/></svg>
            </div>
          </div>
          <div class="video-card-label">
            <div class="video-card-name">{{ cms('home.reviews.video_card_name', 'Real Client Story') }}</div>
            <div class="video-card-meta">{{ cms('home.reviews.video_card_meta', 'Tap to play') }}</div>
          </div>
          <button type="button" class="video-mute-toggle" aria-label="Toggle sound">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="11 5 6 9 2 9 2 15 6 15 11 19 11 5"/><line x1="23" y1="9" x2="17" y2="15"/><line x1="17" y1="9" x2="23" y2="15"/></svg>
          </button>
        </div>

        <div class="video-card" data-video>
          <video preload="metadata" playsinline muted>
            <source src="{{ config('site.media.testimonial_video_2_url') }}" type="video/mp4">
          </video>
          <span class="video-card-badge">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polygon points="23 7 16 12 23 17 23 7"/><rect x="1" y="5" width="15" height="14" rx="2" ry="2"/></svg>
            {{ cms('home.reviews.video_badge', 'Video Review') }}
          </span>
          <div class="video-play-overlay">
            <div class="video-play-btn">
              <svg viewBox="0 0 24 24"><path d="M8 5v14l11-7z"/></svg>
            </div>
          </div>
          <div class="video-card-label">
            <div class="video-card-name">{{ cms('home.reviews.video_card_name', 'Real Client Story') }}</div>
            <div class="video-card-meta">{{ cms('home.reviews.video_card_meta', 'Tap to play') }}</div>
          </div>
          <button type="button" class="video-mute-toggle" aria-label="Toggle sound">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="11 5 6 9 2 9 2 15 6 15 11 19 11 5"/><line x1="23" y1="9" x2="17" y2="15"/><line x1="17" y1="9" x2="23" y2="15"/></svg>
          </button>
        </div>
      </div>
    </div>
  </section>

  <!-- ============== COMMON FACTORS ============== -->
  <section id="factors" class="py-24 lg:py-32 bg-royal-950 text-white relative overflow-hidden">
    <div class="factors-bg"></div>
    <div class="hero-orb orb-gold" style="top:8%; right:-12%; opacity:0.28"></div>

    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 relative">
      <!-- Two-column intro -->
      <div class="grid lg:grid-cols-12 gap-10 lg:gap-16 items-end mb-14">
        <div class="lg:col-span-6" data-reveal>
          <div class="eyebrow">
            {{ cms('home.extra.factors_eyebrow', 'Real Problems') }}
          </div>
          <h2 class="section-title text-white">
            {!! cms('home.extra.factors_heading', '5 Common Factors<br/>
            <span class="gold-text">That Can Hurt Your Credit</span>') !!}
          </h2>
        </div>
        <div class="lg:col-span-6" data-reveal data-delay="2">
          <p class="section-sub text-royal-100/80">
            {{ cms('home.extra.factors_sub', 'Your credit report can carry damaging items that drag your score down for years. Each of the five below can be identified, verified, and often removed under federal consumer protection law.') }}
          </p>
          <p class="mt-4 text-sm text-royal-100/60 leading-relaxed">
            {!! cms('home.extra.factors_law', 'We help clients review their reports and challenge items that may be inaccurate, incomplete, or unverifiable under the <strong class="text-gold-300">Fair Credit Reporting Act</strong> and <strong class="text-gold-300">Fair Debt Collection Practices Act</strong>.') !!}
          </p>
          <a href="#contact" class="btn-gold mt-6 text-sm">{{ cms('home.extra.factors_cta', 'Schedule a Credit Review →') }}</a>
        </div>
      </div>

      <!-- Factor cards — row 1: 3 cards -->
      <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6 mb-6">

        <!-- 01 Late Payments -->
        <div class="factor-card" data-reveal data-delay="1" data-num="01">
          <span class="factor-seq">01</span>
          <div class="factor-top">
            <span class="factor-legal">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2 4 5v6c0 5.5 3.8 10.6 8 12 4.2-1.4 8-6.5 8-12V5l-8-3z"/></svg>
              {{ cms('home.extra.factor1_legal', 'FCRA §611') }}
            </span>
          </div>
          <div class="factor-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="5" width="18" height="16" rx="2"/><path d="M16 3v4M8 3v4M3 10h18"/><path d="m8 15 2 2 4-4"/></svg>
          </div>
          <h3 class="factor-title">{{ cms('home.extra.factor1_title', 'Late Payments') }}</h3>
          <p class="factor-desc">{{ cms('home.extra.factor1_desc', '30, 60, or 90-day late marks that quietly erode your payment history for up to seven years. Single biggest drag on your FICO score.') }}</p>
          <div class="factor-impact">
            <div class="factor-impact-header">
              <span class="factor-impact-label">{{ cms('home.extra.factor1_impact_label', 'FICO Score Weight') }}</span>
              <span class="factor-impact-pct">{{ cms('home.extra.factor1_impact_pct', '35%') }}</span>
            </div>
            <div class="factor-impact-track">
              <div class="factor-impact-fill" style="width:35%"></div>
            </div>
          </div>
          <div class="factor-stats">
            <div class="factor-stat">
              <span class="factor-stat-num">{{ cms('home.extra.factor1_stat1_num', '42%') }}</span>
              <span class="factor-stat-label">{{ cms('home.extra.factor1_stat1_label', 'Reports affected') }}</span>
            </div>
            <div class="factor-stat-divider"></div>
            <div class="factor-stat">
              <span class="factor-stat-num">{{ cms('home.extra.factor1_stat2_num', '30–60d') }}</span>
              <span class="factor-stat-label">{{ cms('home.extra.factor1_stat2_label', 'Avg. removal') }}</span>
            </div>
          </div>
        </div>

        <!-- 02 Collections -->
        <div class="factor-card" data-reveal data-delay="2" data-num="02">
          <span class="factor-seq">02</span>
          <div class="factor-top">
            <span class="factor-legal">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2 4 5v6c0 5.5 3.8 10.6 8 12 4.2-1.4 8-6.5 8-12V5l-8-3z"/></svg>
              {{ cms('home.extra.factor2_legal', 'FDCPA §809') }}
            </span>
          </div>
          <div class="factor-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.8 19.8 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.8 19.8 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.8 12.8 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.8 12.8 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
          </div>
          <h3 class="factor-title">{{ cms('home.extra.factor2_title', 'Collections') }}</h3>
          <p class="factor-desc">{{ cms('home.extra.factor2_desc', 'Third-party collection accounts appear as serious derogatory marks. Many are disputable under federal debt collection law.') }}</p>
          <div class="factor-impact">
            <div class="factor-impact-header">
              <span class="factor-impact-label">{{ cms('home.extra.factor2_impact_label', 'Score Damage Potential') }}</span>
              <span class="factor-impact-pct">{{ cms('home.extra.factor2_impact_pct', 'High') }}</span>
            </div>
            <div class="factor-impact-track">
              <div class="factor-impact-fill" style="width:80%"></div>
            </div>
          </div>
          <div class="factor-stats">
            <div class="factor-stat">
              <span class="factor-stat-num">{{ cms('home.extra.factor2_stat1_num', '28%') }}</span>
              <span class="factor-stat-label">{{ cms('home.extra.factor2_stat1_label', 'Reports affected') }}</span>
            </div>
            <div class="factor-stat-divider"></div>
            <div class="factor-stat">
              <span class="factor-stat-num">{{ cms('home.extra.factor2_stat2_num', '14–45d') }}</span>
              <span class="factor-stat-label">{{ cms('home.extra.factor2_stat2_label', 'Avg. removal') }}</span>
            </div>
          </div>
        </div>

        <!-- 03 Charge-Offs -->
        <div class="factor-card" data-reveal data-delay="3" data-num="03">
          <span class="factor-seq">03</span>
          <div class="factor-top">
            <span class="factor-legal">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2 4 5v6c0 5.5 3.8 10.6 8 12 4.2-1.4 8-6.5 8-12V5l-8-3z"/></svg>
              {{ cms('home.extra.factor3_legal', 'FCRA §611') }}
            </span>
          </div>
          <div class="factor-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="5" width="20" height="14" rx="2"/><line x1="2" y1="10" x2="22" y2="10"/><line x1="4" y1="16" x2="10" y2="16"/><line x1="16" y1="16" x2="20" y2="16"/></svg>
          </div>
          <h3 class="factor-title">{{ cms('home.extra.factor3_title', 'Charge-Offs') }}</h3>
          <p class="factor-desc">{{ cms('home.extra.factor3_desc', 'The lender wrote the account off as a loss, but it still reports against you. Often challengeable if data is incomplete or inaccurate.') }}</p>
          <div class="factor-impact">
            <div class="factor-impact-header">
              <span class="factor-impact-label">{{ cms('home.extra.factor3_impact_label', 'Score Damage Potential') }}</span>
              <span class="factor-impact-pct">{{ cms('home.extra.factor3_impact_pct', 'High') }}</span>
            </div>
            <div class="factor-impact-track">
              <div class="factor-impact-fill" style="width:72%"></div>
            </div>
          </div>
          <div class="factor-stats">
            <div class="factor-stat">
              <span class="factor-stat-num">{{ cms('home.extra.factor3_stat1_num', '19%') }}</span>
              <span class="factor-stat-label">{{ cms('home.extra.factor3_stat1_label', 'Reports affected') }}</span>
            </div>
            <div class="factor-stat-divider"></div>
            <div class="factor-stat">
              <span class="factor-stat-num">{{ cms('home.extra.factor3_stat2_num', '30–75d') }}</span>
              <span class="factor-stat-label">{{ cms('home.extra.factor3_stat2_label', 'Avg. removal') }}</span>
            </div>
          </div>
        </div>

      </div>

      <!-- Factor cards — row 2: 2 cards centered -->
      <div class="grid sm:grid-cols-2 gap-6 max-w-3xl mx-auto">

        <!-- 04 High Utilization -->
        <div class="factor-card" data-reveal data-delay="4" data-num="04">
          <span class="factor-seq">04</span>
          <div class="factor-top">
            <span class="factor-legal">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2v20M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg>
              {{ cms('home.extra.factor4_legal', 'Strategy') }}
            </span>
          </div>
          <div class="factor-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2v4m0 12v4M4.22 4.22l2.83 2.83m9.9 9.9 2.83 2.83M2 12h4m12 0h4M4.22 19.78l2.83-2.83m9.9-9.9 2.83-2.83"/><circle cx="12" cy="12" r="4"/></svg>
          </div>
          <h3 class="factor-title">{{ cms('home.extra.factor4_title', 'High Utilization') }}</h3>
          <p class="factor-desc">{{ cms('home.extra.factor4_desc', 'Balances near your credit limits. Reducing utilization is often the single fastest score lift available, sometimes in one billing cycle.') }}</p>
          <div class="factor-impact">
            <div class="factor-impact-header">
              <span class="factor-impact-label">{{ cms('home.extra.factor4_impact_label', 'FICO Score Weight') }}</span>
              <span class="factor-impact-pct">{{ cms('home.extra.factor4_impact_pct', '30%') }}</span>
            </div>
            <div class="factor-impact-track">
              <div class="factor-impact-fill" style="width:30%"></div>
            </div>
          </div>
          <div class="factor-stats">
            <div class="factor-stat">
              <span class="factor-stat-num">{{ cms('home.extra.factor4_stat1_num', '61%') }}</span>
              <span class="factor-stat-label">{{ cms('home.extra.factor4_stat1_label', 'Of cardholders') }}</span>
            </div>
            <div class="factor-stat-divider"></div>
            <div class="factor-stat">
              <span class="factor-stat-num">{!! cms('home.extra.factor4_stat2_num', '&lt;30d') !!}</span>
              <span class="factor-stat-label">{{ cms('home.extra.factor4_stat2_label', 'To rebalance') }}</span>
            </div>
          </div>
        </div>

        <!-- 05 Public Records -->
        <div class="factor-card" data-reveal data-delay="5" data-num="05">
          <span class="factor-seq">05</span>
          <div class="factor-top">
            <span class="factor-legal">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2 4 5v6c0 5.5 3.8 10.6 8 12 4.2-1.4 8-6.5 8-12V5l-8-3z"/></svg>
              {{ cms('home.extra.factor5_legal', 'FCRA §605') }}
            </span>
          </div>
          <div class="factor-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="m14 4 6 6"/><path d="m7 11 5 5"/><path d="m2 22 4-4"/><path d="M3 21 21 3"/><path d="m12 9 3 3"/><path d="m16 5 3 3"/></svg>
          </div>
          <h3 class="factor-title">{{ cms('home.extra.factor5_title', 'Public Records') }}</h3>
          <p class="factor-desc">{{ cms('home.extra.factor5_desc', 'Bankruptcies, tax liens, and civil judgments can linger seven to ten years. Many are removable once the statute window closes.') }}</p>
          <div class="factor-impact">
            <div class="factor-impact-header">
              <span class="factor-impact-label">{{ cms('home.extra.factor5_impact_label', 'Score Damage Potential') }}</span>
              <span class="factor-impact-pct">{{ cms('home.extra.factor5_impact_pct', 'Severe') }}</span>
            </div>
            <div class="factor-impact-track">
              <div class="factor-impact-fill" style="width:90%"></div>
            </div>
          </div>
          <div class="factor-stats">
            <div class="factor-stat">
              <span class="factor-stat-num">{{ cms('home.extra.factor5_stat1_num', '11%') }}</span>
              <span class="factor-stat-label">{{ cms('home.extra.factor5_stat1_label', 'Reports affected') }}</span>
            </div>
            <div class="factor-stat-divider"></div>
            <div class="factor-stat">
              <span class="factor-stat-num">{{ cms('home.extra.factor5_stat2_num', '45–90d') }}</span>
              <span class="factor-stat-label">{{ cms('home.extra.factor5_stat2_label', 'Avg. removal') }}</span>
            </div>
          </div>
        </div>

      </div>

      <!-- Stat banner -->
      <div class="factors-stat" data-reveal>
        <span class="factors-stat-num">{{ cms('home.extra.factors_stat_num', '9 in 10') }}</span>
        <span class="text-royal-100/80">{{ cms('home.extra.factors_stat_text', 'credit reports we review contain at least one inaccurate, outdated, or unverifiable item.') }}</span>
      </div>

      <!-- Legal framework meta strip -->
      <div class="factors-meta-strip" data-reveal data-delay="2">
        <div class="factors-meta-strip-item">
          <span class="factors-meta-strip-num">{{ cms('home.extra.factors_meta1_num', '15 U.S.C.') }}</span>
          <span>{{ cms('home.extra.factors_meta1_text', '§1681 · Fair Credit Reporting Act') }}</span>
        </div>
        <div class="factors-meta-strip-item">
          <span class="factors-meta-strip-num">{{ cms('home.extra.factors_meta2_num', '15 U.S.C.') }}</span>
          <span>{{ cms('home.extra.factors_meta2_text', '§1692 · Fair Debt Collection Practices Act') }}</span>
        </div>
        <div class="factors-meta-strip-item">
          <span class="factors-meta-strip-num">{{ cms('home.extra.factors_meta3_num', '100%') }}</span>
          <span>{{ cms('home.extra.factors_meta3_text', 'Within federal consumer protection law') }}</span>
        </div>
      </div>

    </div>
  </section>

  <!-- ============== PRICING ============== -->
  <section class="py-24 lg:py-32 bg-gradient-to-b from-royal-50 via-white to-royal-50">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
      <div class="max-w-3xl mx-auto text-center" data-reveal>
        <div class="eyebrow justify-center">{{ cms('home.extra.pricing_eyebrow', 'Pricing') }}</div>
        <h2 class="section-title">{{ cms('home.extra.pricing_heading', 'Choose your path to financial freedom.') }}</h2>
        <p class="section-sub mx-auto">{{ cms('home.extra.pricing_sub', 'Honest pricing. No fluff. Pick the package that fits where you are right now, and you can always upgrade later.') }}</p>
      </div>

      <!-- BUY NOW, PAY LATER -->
      <div class="mt-8 max-w-3xl mx-auto" data-reveal data-delay="1">
        <div class="rounded-2xl bg-white ring-1 ring-royal-100 px-5 py-4 sm:px-7 sm:py-5 shadow-sm flex flex-col sm:flex-row items-center justify-center gap-3 sm:gap-5">
          <div class="flex items-center gap-2 text-royal-700">
            <svg class="w-5 h-5 text-gold-500" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="6" width="20" height="13" rx="2"/><path d="M2 11h20"/><path d="M6 16h4"/></svg>
            <span class="text-sm font-semibold">{!! cms('home.extra.bnpl_label', 'Pay Over Time &mdash; 4 interest-free payments') !!}</span>
          </div>
          <div class="flex flex-wrap items-center justify-center gap-2">
            <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-bold tracking-wide" style="background:#000; color:#b2fce4;">sezzle</span>
            <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-bold tracking-wide" style="background:#b2fce4; color:#000;">Afterpay</span>
            <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-bold tracking-wide" style="background:#1a0633; color:#fff;">Zip</span>
          </div>
          <span class="text-xs text-royal-700/60 hidden sm:inline">{{ cms('home.extra.bnpl_checkout', 'at checkout') }}</span>
        </div>
      </div>

      <!-- COMMUNITY -->
      <div class="mt-14 max-w-3xl mx-auto" data-reveal>
        <div class="relative overflow-hidden rounded-2xl bg-royal-900 text-white p-8 sm:p-10 ring-1 ring-gold-400/40 shadow-xl">
          <div class="absolute -top-20 -right-20 w-64 h-64 bg-gold-500/20 rounded-full" style="filter:blur(60px);"></div>
          <div class="absolute -bottom-32 -left-20 w-72 h-72 bg-royal-600/30 rounded-full" style="filter:blur(60px);"></div>
          <div class="relative flex flex-col sm:flex-row items-start sm:items-center justify-between gap-6">
            <div>
              <div class="text-xs uppercase tracking-widest text-gold-300 mb-2">{{ cms('home.extra.community_eyebrow', 'Monthly Community') }}</div>
              <h3 class="font-display text-2xl sm:text-3xl font-bold">{{ cms('home.extra.community_title', 'Skool Community Access') }}</h3>
              <p class="text-royal-100/90 mt-2 max-w-md">{{ cms('home.extra.community_desc', 'Weekly trainings, frameworks, replays, and the AQ Wealth network. Month to month, no contracts.') }}</p>
            </div>
            <div class="text-right">
              <div class="font-display text-5xl font-bold gold-text leading-none">{!! cms('home.extra.community_price', '$99<span class="text-lg align-top ml-1 text-gold-200">/mo</span>') !!}</div>
              <a href="{{ config('site.links.skool', '#contact') }}" target="_blank" rel="noopener" class="mt-4 inline-flex btn-gold">{{ cms('home.hero.cta_community', 'Join the Community') }}</a>
            </div>
          </div>
        </div>
      </div>

      <div id="pricing" class="mt-20 text-center max-w-2xl mx-auto" data-reveal>
        <h3 class="font-display text-3xl font-bold text-royal-900">{{ cms('home.extra.packages_heading', 'Credit Repair Packages') }}</h3>
        <p class="mt-3 text-royal-700/80">{!! cms('home.extra.packages_sub', 'Every package shows two prices: a <strong>Single</strong> price for just you, and a discounted <strong>Duo</strong> price when you bring a partner along. Both are visible on every card so you always know what you\'re paying.') !!}</p>
      </div>

      <div class="mt-12 grid md:grid-cols-3 gap-6">
        <!-- STANDARD -->
        <div class="price-card" data-reveal data-delay="1">
          <div class="price-orb"></div>
          <div class="price-header">
            <div class="price-tier-icon">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2 4 5v6c0 5.5 3.8 10.6 8 12 4.2-1.4 8-6.5 8-12V5l-8-3z"/></svg>
            </div>
            <div class="price-tier-label">{{ cms('home.extra.price_standard_label', 'Standard') }}</div>
          </div>
          <h4 class="price-title">{{ cms('home.price.standard.title', '3-Round Credit Repair') }}</h4>
          <span class="price-time-pill">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
            {{ cms('home.extra.price_standard_time', 'Results in 30–90 days') }}
          </span>
          <div class="price-tiers">
            <div class="price-tier">
              <div class="price-tier-avatar"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="8" r="4"/><path d="M4 21c0-4.4 3.6-8 8-8s8 3.6 8 8"/></svg></div>
              <div class="price-tier-info">
                <div class="price-tier-name">{{ cms('home.extra.tier_single_name', 'Single') }}</div>
                <div class="price-tier-meta">{{ cms('home.extra.tier_single_meta', 'Just for you · one-time') }}</div>
              </div>
              <div class="price-tier-amount">
                <span class="price-tier-currency">$</span>
                <span class="price-tier-num">{{ cms('home.price.standard.single', '599') }}</span>
              </div>
            </div>
            <div class="price-tier-divider"></div>
            <div class="price-tier price-tier-best">
              <div class="price-tier-avatar"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="9" cy="8" r="3.5"/><path d="M2 21c0-3.9 3.1-7 7-7s7 3.1 7 7"/><circle cx="17" cy="9" r="3"/><path d="M22 19c0-2.8-2.2-5-5-5"/></svg></div>
              <div class="price-tier-info">
                <div class="price-tier-name">{{ cms('home.extra.tier_duo_name', 'Duo') }} <span class="price-tier-save">{{ cms('home.extra.price_standard_save', 'Save $399') }}</span></div>
                <div class="price-tier-meta">{{ cms('home.extra.tier_duo_meta', 'You + a partner · one-time') }}</div>
              </div>
              <div class="price-tier-amount">
                <span class="price-tier-currency">$</span>
                <span class="price-tier-num">{{ cms('home.price.standard.duo', '799') }}</span>
              </div>
            </div>
          </div>
          <div class="price-divider"></div>
          <div class="price-includes-label">{{ cms('home.extra.price_includes_label', "What's included") }}</div>
          <ul class="price-features">
            <li class="feat">{{ cms('home.extra.price_standard_feat1', '3 dispute rounds across all 3 bureaus') }}</li>
            <li class="feat">{{ cms('home.extra.price_standard_feat2', 'Personalized strategy & action plan') }}</li>
            <li class="feat">{{ cms('home.extra.price_standard_feat3', 'Removal of inaccurate negatives') }}</li>
            <li class="feat">{{ cms('home.extra.price_standard_feat4', 'Score-building guidance') }}</li>
          </ul>
          <div class="price-cta-wrap">
            @if(config('site.links.checkout_standard'))
              <a href="{{ config('site.links.checkout_standard') }}" target="_blank" rel="noopener" class="btn-outline w-full">{{ cms('home.extra.price_standard_cta', 'Get Started →') }}</a>
            @else
              <a href="#contact" class="btn-outline w-full">{{ cms('home.extra.price_standard_cta', 'Get Started →') }}</a>
            @endif
          </div>
        </div>

        <!-- EXPEDITED (FEATURED) -->
        <div class="price-card price-card-featured" data-reveal data-delay="2">
          <div class="price-ribbon">
            <svg viewBox="0 0 24 24" fill="currentColor"><path d="m12 2 2.6 6.5L21 9l-5 4.5L17.5 21 12 17.3 6.5 21 8 13.5 3 9l6.4-.5L12 2z"/></svg>
            {{ cms('home.extra.price_expedited_ribbon', 'Most Popular') }}
          </div>
          <div class="price-orb"></div>
          <span class="price-spark price-spark-1"></span>
          <span class="price-spark price-spark-2"></span>
          <span class="price-spark price-spark-3"></span>

          <div class="price-header">
            <div class="price-tier-icon">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="m13 2-9 12h7l-1 8 9-12h-7l1-8z"/></svg>
            </div>
            <div class="price-tier-label">{{ cms('home.extra.price_expedited_label', 'Expedited') }}</div>
          </div>
          <h4 class="price-title">{{ cms('home.price.expedited.title', '3-Round Expedited') }}</h4>
          <span class="price-time-pill">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
            {{ cms('home.extra.price_expedited_time', 'Fast-track 14–30 days') }}
          </span>
          <div class="price-tiers">
            <div class="price-tier">
              <div class="price-tier-avatar"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="8" r="4"/><path d="M4 21c0-4.4 3.6-8 8-8s8 3.6 8 8"/></svg></div>
              <div class="price-tier-info">
                <div class="price-tier-name">{{ cms('home.extra.tier_single_name', 'Single') }}</div>
                <div class="price-tier-meta">{{ cms('home.extra.tier_single_meta', 'Just for you · one-time') }}</div>
              </div>
              <div class="price-tier-amount">
                <span class="price-tier-currency">$</span>
                <span class="price-tier-num">{{ cms('home.price.expedited.single', '999') }}</span>
              </div>
            </div>
            <div class="price-tier-divider"></div>
            <div class="price-tier price-tier-best">
              <div class="price-tier-avatar"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="9" cy="8" r="3.5"/><path d="M2 21c0-3.9 3.1-7 7-7s7 3.1 7 7"/><circle cx="17" cy="9" r="3"/><path d="M22 19c0-2.8-2.2-5-5-5"/></svg></div>
              <div class="price-tier-info">
                <div class="price-tier-name">{{ cms('home.extra.tier_duo_name', 'Duo') }} <span class="price-tier-save">{{ cms('home.extra.price_expedited_save', 'Save $799') }}</span></div>
                <div class="price-tier-meta">{{ cms('home.extra.tier_duo_meta', 'You + a partner · one-time') }}</div>
              </div>
              <div class="price-tier-amount">
                <span class="price-tier-currency">$</span>
                <span class="price-tier-num">{{ cms('home.price.expedited.duo', '1,199') }}</span>
              </div>
            </div>
          </div>
          <div class="price-divider"></div>
          <div class="price-includes-label">{{ cms('home.extra.price_includes_label', "What's included") }}</div>
          <ul class="price-features">
            <li class="feat feat-light">{{ cms('home.extra.price_expedited_feat1', 'Priority dispute processing') }}</li>
            <li class="feat feat-light">{{ cms('home.extra.price_expedited_feat2', 'Aggressive bureau response cycle') }}</li>
            <li class="feat feat-light">{{ cms('home.extra.price_expedited_feat3', 'All Standard plan benefits') }}</li>
            <li class="feat feat-light">{{ cms('home.extra.price_expedited_feat4', 'Direct messaging with our team') }}</li>
          </ul>
          <div class="price-cta-wrap">
            @if(config('site.links.checkout_expedited'))
              <a href="{{ config('site.links.checkout_expedited') }}" target="_blank" rel="noopener" class="btn-gold w-full">{{ cms('home.extra.price_expedited_cta', 'Choose Expedited') }}</a>
            @else
              <a href="#contact" class="btn-gold w-full">{{ cms('home.extra.price_expedited_cta', 'Choose Expedited') }}</a>
            @endif
          </div>
        </div>

        <!-- PREMIUM -->
        <div class="price-card" data-reveal data-delay="3">
          <div class="price-orb"></div>
          <div class="price-header">
            <div class="price-tier-icon">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M2 8l4 12h12l4-12-6 4-4-7-4 7-6-4z"/><path d="M6 20h12"/></svg>
            </div>
            <div class="price-tier-label">{{ cms('home.extra.price_premium_label', 'Premium') }}</div>
          </div>
          <h4 class="price-title">{{ cms('home.price.premium.title', 'Full Credit Repair') }}</h4>
          <span class="price-time-pill">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"/></svg>
            {{ cms('home.extra.price_premium_time', 'Done-for-you · until clean') }}
          </span>
          <div class="price-tiers">
            <div class="price-tier">
              <div class="price-tier-avatar"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="8" r="4"/><path d="M4 21c0-4.4 3.6-8 8-8s8 3.6 8 8"/></svg></div>
              <div class="price-tier-info">
                <div class="price-tier-name">{{ cms('home.extra.tier_single_name', 'Single') }}</div>
                <div class="price-tier-meta">{{ cms('home.extra.tier_single_meta', 'Just for you · one-time') }}</div>
              </div>
              <div class="price-tier-amount">
                <span class="price-tier-currency">$</span>
                <span class="price-tier-num">{{ cms('home.price.premium.single', '1,399') }}</span>
              </div>
            </div>
            <div class="price-tier-divider"></div>
            <div class="price-tier price-tier-best">
              <div class="price-tier-avatar"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="9" cy="8" r="3.5"/><path d="M2 21c0-3.9 3.1-7 7-7s7 3.1 7 7"/><circle cx="17" cy="9" r="3"/><path d="M22 19c0-2.8-2.2-5-5-5"/></svg></div>
              <div class="price-tier-info">
                <div class="price-tier-name">{{ cms('home.extra.tier_duo_name', 'Duo') }} <span class="price-tier-save">{{ cms('home.extra.price_premium_save', 'Save $1,199') }}</span></div>
                <div class="price-tier-meta">{{ cms('home.extra.tier_duo_meta', 'You + a partner · one-time') }}</div>
              </div>
              <div class="price-tier-amount">
                <span class="price-tier-currency">$</span>
                <span class="price-tier-num">{{ cms('home.price.premium.duo', '1,599') }}</span>
              </div>
            </div>
          </div>
          <div class="price-divider"></div>
          <div class="price-includes-label">{{ cms('home.extra.price_includes_label', "What's included") }}</div>
          <ul class="price-features">
            <li class="feat">{{ cms('home.extra.price_premium_feat1', 'Unlimited dispute rounds until done') }}</li>
            <li class="feat">{{ cms('home.extra.price_premium_feat2', 'Full credit profile rebuild') }}</li>
            <li class="feat">{{ cms('home.extra.price_premium_feat3', 'Tradeline & utilization strategy') }}</li>
            <li class="feat">{{ cms('home.extra.price_premium_feat4', 'Lifetime credit education access') }}</li>
          </ul>
          <div class="price-cta-wrap">
            @if(config('site.links.checkout_premium'))
              <a href="{{ config('site.links.checkout_premium') }}" target="_blank" rel="noopener" class="btn-outline w-full">{{ cms('home.extra.price_premium_cta', 'Go Premium →') }}</a>
            @else
              <a href="#contact" class="btn-outline w-full">{{ cms('home.extra.price_premium_cta', 'Go Premium →') }}</a>
            @endif
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ============== FOUNDER + REAL REVIEWS ============== -->
  <section id="results" class="py-24 lg:py-32 bg-gradient-to-b from-white via-royal-50/40 to-white">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

      <!-- Founder card -->
      <div class="founder-card max-w-5xl mx-auto" data-reveal>
        <div class="founder-photo-wrap">
          <img src="{{ config('site.media.founder_image_url') }}"
               alt="Danielle Todd, Founder of AQ Wealth University"
               class="founder-photo" loading="lazy" />
        </div>
        <div>
          <span class="founder-meta-pill">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2 4 5v6c0 5.5 3.8 10.6 8 12 4.2-1.4 8-6.5 8-12V5l-8-3z"/></svg>
            {{ cms('home.extra.founder_pill', 'Meet the Founder') }}
          </span>
          <div class="founder-name">{{ cms('home.founder.name', 'Danielle Todd') }}</div>
          <div class="founder-role">{{ cms('home.founder.role', 'Founder · AQ Wealth University') }}</div>
          <p class="founder-bio">{{ cms('home.founder.bio', 'Danielle built AQ Wealth University around a simple idea: people deserve real education, not just a service. She has helped hundreds of clients clean up their credit, structure their businesses correctly, and unlock funding the right way. Now she leads a team that does the same, every single day.') }}</p>
        </div>
      </div>

      <!-- Real Results — before/after score lifts -->
      <div class="text-center max-w-3xl mx-auto mt-24" data-reveal>
        <div class="eyebrow justify-center">{{ cms('home.reviews.results_eyebrow', 'Real Results') }}</div>
        <h2 class="section-title">{{ cms('home.reviews.results_heading', 'Wins worth talking about.') }}</h2>
        <p class="section-sub mx-auto">{{ cms('home.reviews.results_sub', 'From scores in the 400s to home approvals, business funding, and clean reports. These are real lifts in real timelines.') }}</p>
      </div>

      <div class="mt-14 grid md:grid-cols-2 lg:grid-cols-3 gap-6">

        <!-- HOUSE APPROVAL -->
        <div class="result-card" data-reveal data-delay="1">
          <span class="result-verified">
            <svg viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/></svg>
            {{ cms('home.reviews.verified_badge', 'Verified') }}
          </span>
          <div class="text-2xl mb-2">{{ cms('home.reviews.result1_emoji', '🏡') }}</div>
          <p class="result-quote">{{ cms('home.reviews.result1_quote', 'Approved for our first home after years of being denied. Closed at 6.4% APR. Felt like a dream.') }}</p>
          <div class="result-author">
            <div class="result-avatar">{{ cms('home.reviews.result1_initials', 'JR') }}</div>
            <div>
              <div class="result-name">{{ cms('home.reviews.result1_name', 'Jasmine R.') }}</div>
              <div class="result-loc">{{ cms('home.reviews.result1_loc', 'Charlotte, NC · Full Repair + Mortgage Prep') }}</div>
            </div>
          </div>
          <div class="result-divider"></div>
          <div class="result-scores">
            <div class="result-score-block">
              <div class="result-score-label">{{ cms('home.reviews.label_before', 'Before') }}</div>
              <div class="result-score-num result-score-before">{{ cms('home.reviews.result1_before', '562') }}</div>
            </div>
            <div class="result-arrow">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14m-6-6 6 6-6 6"/></svg>
              <span class="result-arrow-meta">{{ cms('home.reviews.result1_gain', '+221 in 96 days') }}</span>
            </div>
            <div class="result-score-block">
              <div class="result-score-label">{{ cms('home.reviews.label_after', 'After') }}</div>
              <div class="result-score-num result-score-after" data-from="562" data-to="783">562</div>
            </div>
          </div>
        </div>

        <!-- BUSINESS FUNDING -->
        <div class="result-card" data-reveal data-delay="2">
          <span class="result-verified">
            <svg viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/></svg>
            {{ cms('home.reviews.verified_badge', 'Verified') }}
          </span>
          <div class="text-2xl mb-2">{{ cms('home.reviews.result2_emoji', '💼') }}</div>
          <p class="result-quote">{{ cms('home.reviews.result2_quote', 'Went from being denied for everything to a $50K business line in under 60 days. Then another $35K in 0% APR cards.') }}</p>
          <div class="result-author">
            <div class="result-avatar">{{ cms('home.reviews.result2_initials', 'MJ') }}</div>
            <div>
              <div class="result-name">{{ cms('home.reviews.result2_name', 'Marcus J.') }}</div>
              <div class="result-loc">{{ cms('home.reviews.result2_loc', 'Houston, TX · Expedited + Business Funding') }}</div>
            </div>
          </div>
          <div class="result-divider"></div>
          <div class="result-scores">
            <div class="result-score-block">
              <div class="result-score-label">{{ cms('home.reviews.label_before', 'Before') }}</div>
              <div class="result-score-num result-score-before">{{ cms('home.reviews.result2_before', '582') }}</div>
            </div>
            <div class="result-arrow">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14m-6-6 6 6-6 6"/></svg>
              <span class="result-arrow-meta">{{ cms('home.reviews.result2_gain', '+208 in 47 days') }}</span>
            </div>
            <div class="result-score-block">
              <div class="result-score-label">{{ cms('home.reviews.label_after', 'After') }}</div>
              <div class="result-score-num result-score-after" data-from="582" data-to="790">582</div>
            </div>
          </div>
        </div>

        <!-- CHARGE-OFFS DELETED -->
        <div class="result-card" data-reveal data-delay="3">
          <span class="result-verified">
            <svg viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/></svg>
            {{ cms('home.reviews.verified_badge', 'Verified') }}
          </span>
          <div class="text-2xl mb-2">{{ cms('home.reviews.result3_emoji', '🧾') }}</div>
          <p class="result-quote">{{ cms('home.reviews.result3_quote', 'Six charge-offs deleted, two collections gone. Finally felt in control of my financial future.') }}</p>
          <div class="result-author">
            <div class="result-avatar">{{ cms('home.reviews.result3_initials', 'DR') }}</div>
            <div>
              <div class="result-name">{{ cms('home.reviews.result3_name', 'Destiny R.') }}</div>
              <div class="result-loc">{{ cms('home.reviews.result3_loc', 'Atlanta, GA · Full Credit Repair') }}</div>
            </div>
          </div>
          <div class="result-divider"></div>
          <div class="result-scores">
            <div class="result-score-block">
              <div class="result-score-label">{{ cms('home.reviews.label_before', 'Before') }}</div>
              <div class="result-score-num result-score-before">{{ cms('home.reviews.result3_before', '541') }}</div>
            </div>
            <div class="result-arrow">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14m-6-6 6 6-6 6"/></svg>
              <span class="result-arrow-meta">{{ cms('home.reviews.result3_gain', '+229 in 81 days') }}</span>
            </div>
            <div class="result-score-block">
              <div class="result-score-label">{{ cms('home.reviews.label_after', 'After') }}</div>
              <div class="result-score-num result-score-after" data-from="541" data-to="770">541</div>
            </div>
          </div>
        </div>

        <!-- LLC + BUSINESS CREDIT -->
        <div class="result-card" data-reveal data-delay="4">
          <span class="result-verified">
            <svg viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/></svg>
            {{ cms('home.reviews.verified_badge', 'Verified') }}
          </span>
          <div class="text-2xl mb-2">{{ cms('home.reviews.result4_emoji', '🚀') }}</div>
          <p class="result-quote">{!! cms('home.reviews.result4_quote', 'My LLC, my EIN, my D&amp;B, all set up in under a week. Then $35K in business credit. Whole game changed.') !!}</p>
          <div class="result-author">
            <div class="result-avatar">{{ cms('home.reviews.result4_initials', 'TA') }}</div>
            <div>
              <div class="result-name">{{ cms('home.reviews.result4_name', 'Terrence A.') }}</div>
              <div class="result-loc">{{ cms('home.reviews.result4_loc', 'Dallas, TX · Business Mentorship') }}</div>
            </div>
          </div>
          <div class="result-divider"></div>
          <div class="result-scores">
            <div class="result-score-block">
              <div class="result-score-label">{{ cms('home.reviews.label_before', 'Before') }}</div>
              <div class="result-score-num result-score-before">{{ cms('home.reviews.result4_before', '623') }}</div>
            </div>
            <div class="result-arrow">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14m-6-6 6 6-6 6"/></svg>
              <span class="result-arrow-meta">{{ cms('home.reviews.result4_gain', '+193 in 38 days') }}</span>
            </div>
            <div class="result-score-block">
              <div class="result-score-label">{{ cms('home.reviews.label_after', 'After') }}</div>
              <div class="result-score-num result-score-after" data-from="623" data-to="816">623</div>
            </div>
          </div>
        </div>

        <!-- AUTO LOAN APPROVAL -->
        <div class="result-card" data-reveal data-delay="5">
          <span class="result-verified">
            <svg viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/></svg>
            {{ cms('home.reviews.verified_badge', 'Verified') }}
          </span>
          <div class="text-2xl mb-2">{{ cms('home.reviews.result5_emoji', '🚗') }}</div>
          <p class="result-quote">{{ cms('home.reviews.result5_quote', 'Drove off the lot in a brand new SUV at 5.9% APR. Two months earlier I had been denied at three dealerships.') }}</p>
          <div class="result-author">
            <div class="result-avatar">{{ cms('home.reviews.result5_initials', 'KW') }}</div>
            <div>
              <div class="result-name">{{ cms('home.reviews.result5_name', 'Kalen W.') }}</div>
              <div class="result-loc">{{ cms('home.reviews.result5_loc', 'Phoenix, AZ · Standard 3-Round') }}</div>
            </div>
          </div>
          <div class="result-divider"></div>
          <div class="result-scores">
            <div class="result-score-block">
              <div class="result-score-label">{{ cms('home.reviews.label_before', 'Before') }}</div>
              <div class="result-score-num result-score-before">{{ cms('home.reviews.result5_before', '594') }}</div>
            </div>
            <div class="result-arrow">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14m-6-6 6 6-6 6"/></svg>
              <span class="result-arrow-meta">{{ cms('home.reviews.result5_gain', '+158 in 64 days') }}</span>
            </div>
            <div class="result-score-block">
              <div class="result-score-label">{{ cms('home.reviews.label_after', 'After') }}</div>
              <div class="result-score-num result-score-after" data-from="594" data-to="752">594</div>
            </div>
          </div>
        </div>

        <!-- BANKRUPTCY REMOVED -->
        <div class="result-card" data-reveal data-delay="6">
          <span class="result-verified">
            <svg viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/></svg>
            {{ cms('home.reviews.verified_badge', 'Verified') }}
          </span>
          <div class="text-2xl mb-2">{{ cms('home.reviews.result6_emoji', '⚖️') }}</div>
          <p class="result-quote">{{ cms('home.reviews.result6_quote', 'A bankruptcy from 2019 was finally removed. Plus three collections. Now we are pre-approved for a duplex.') }}</p>
          <div class="result-author">
            <div class="result-avatar">{{ cms('home.reviews.result6_initials', 'MS') }}</div>
            <div>
              <div class="result-name">{{ cms('home.reviews.result6_name', 'Monica & Stephen S.') }}</div>
              <div class="result-loc">{{ cms('home.reviews.result6_loc', 'Tampa, FL · Duo Full Repair') }}</div>
            </div>
          </div>
          <div class="result-divider"></div>
          <div class="result-scores">
            <div class="result-score-block">
              <div class="result-score-label">{{ cms('home.reviews.label_before', 'Before') }}</div>
              <div class="result-score-num result-score-before">{{ cms('home.reviews.result6_before', '498') }}</div>
            </div>
            <div class="result-arrow">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14m-6-6 6 6-6 6"/></svg>
              <span class="result-arrow-meta">{{ cms('home.reviews.result6_gain', '+248 in 110 days') }}</span>
            </div>
            <div class="result-score-block">
              <div class="result-score-label">{{ cms('home.reviews.label_after', 'After') }}</div>
              <div class="result-score-num result-score-after" data-from="498" data-to="746">498</div>
            </div>
          </div>
        </div>

      </div>

      <p class="mt-10 text-center text-sm text-royal-700/60 italic">{{ cms('home.reviews.results_disclaimer', 'Results vary by individual. Names anonymized for client privacy where requested.') }}</p>

      <!-- Section header — Real Reviews -->
      <div class="text-center max-w-3xl mx-auto mt-24" data-reveal>
        <div class="eyebrow justify-center">{{ cms('home.reviews.reviews_eyebrow', 'Real Reviews') }}</div>
        <h2 class="section-title">{{ cms('home.reviews.reviews_heading', 'What our clients are actually saying.') }}</h2>
        <p class="section-sub mx-auto">{{ cms('home.reviews.reviews_sub', 'Real messages from real clients. These are people we have walked through credit repair, business structure, and funding.') }}</p>
      </div>

      <!-- Testimonial gallery -->
      <div class="testimonial-gallery mt-14" data-reveal>
        <button type="button" class="testimonial-card" data-reveal data-delay="1" data-full="{{ cms_image('media.tes_1', 'images/tes.jpeg') }}">
          <span class="testimonial-badge">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
            {{ cms('home.reviews.verified_badge', 'Verified') }}
          </span>
          <img src="{{ cms_image('media.tes_1', 'images/tes.jpeg') }}" alt="Client review" loading="lazy" />
        </button>

        <button type="button" class="testimonial-card" data-reveal data-delay="2" data-full="{{ cms_image('media.tes_2', 'images/tes2.jpeg') }}">
          <span class="testimonial-badge">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
            {{ cms('home.reviews.verified_badge', 'Verified') }}
          </span>
          <img src="{{ cms_image('media.tes_2', 'images/tes2.jpeg') }}" alt="Client review" loading="lazy" />
        </button>

        <button type="button" class="testimonial-card" data-reveal data-delay="3" data-full="{{ cms_image('media.tes_3', 'images/tes3.jpeg') }}">
          <span class="testimonial-badge">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
            {{ cms('home.reviews.verified_badge', 'Verified') }}
          </span>
          <img src="{{ cms_image('media.tes_3', 'images/tes3.jpeg') }}" alt="Client review" loading="lazy" />
        </button>

        <button type="button" class="testimonial-card" data-reveal data-delay="4" data-full="{{ cms_image('media.tes_4', 'images/tes4.jpeg') }}">
          <span class="testimonial-badge">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
            {{ cms('home.reviews.verified_badge', 'Verified') }}
          </span>
          <img src="{{ cms_image('media.tes_4', 'images/tes4.jpeg') }}" alt="Client review" loading="lazy" />
        </button>

        <button type="button" class="testimonial-card" data-reveal data-delay="5" data-full="{{ cms_image('media.tes_5', 'images/tes5.jpeg') }}">
          <span class="testimonial-badge">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
            {{ cms('home.reviews.verified_badge', 'Verified') }}
          </span>
          <img src="{{ cms_image('media.tes_5', 'images/tes5.jpeg') }}" alt="Client review" loading="lazy" />
        </button>

        <button type="button" class="testimonial-card" data-reveal data-delay="6" data-full="{{ cms_image('media.tes_6', 'images/tes6.jpeg') }}">
          <span class="testimonial-badge">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
            {{ cms('home.reviews.verified_badge', 'Verified') }}
          </span>
          <img src="{{ cms_image('media.tes_6', 'images/tes6.jpeg') }}" alt="Client review" loading="lazy" />
        </button>

        <button type="button" class="testimonial-card" data-reveal data-delay="1" data-full="https://res.cloudinary.com/dirti0apj/image/upload/v1777425668/WhatsApp_Image_2026-04-27_at_5.50.24_PM_2_mlbkat.jpg">
          <span class="testimonial-badge">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
            {{ cms('home.reviews.verified_badge', 'Verified') }}
          </span>
          <img src="https://res.cloudinary.com/dirti0apj/image/upload/v1777425668/WhatsApp_Image_2026-04-27_at_5.50.24_PM_2_mlbkat.jpg" alt="Client review" loading="lazy" />
        </button>

        <button type="button" class="testimonial-card" data-reveal data-delay="2" data-full="https://res.cloudinary.com/dirti0apj/image/upload/v1777425668/WhatsApp_Image_2026-04-27_at_5.50.23_PM_z0kiiv.jpg">
          <span class="testimonial-badge">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
            {{ cms('home.reviews.verified_badge', 'Verified') }}
          </span>
          <img src="https://res.cloudinary.com/dirti0apj/image/upload/v1777425668/WhatsApp_Image_2026-04-27_at_5.50.23_PM_z0kiiv.jpg" alt="Client review" loading="lazy" />
        </button>

        <button type="button" class="testimonial-card" data-reveal data-delay="3" data-full="https://res.cloudinary.com/dirti0apj/image/upload/v1777425668/WhatsApp_Image_2026-04-27_at_5.50.25_PM_tsycpc.jpg">
          <span class="testimonial-badge">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
            {{ cms('home.reviews.verified_badge', 'Verified') }}
          </span>
          <img src="https://res.cloudinary.com/dirti0apj/image/upload/v1777425668/WhatsApp_Image_2026-04-27_at_5.50.25_PM_tsycpc.jpg" alt="Client review" loading="lazy" />
        </button>

        <button type="button" class="testimonial-card" data-reveal data-delay="4" data-full="https://res.cloudinary.com/dirti0apj/image/upload/v1777425668/WhatsApp_Image_2026-04-27_at_5.50.24_PM_nfopen.jpg">
          <span class="testimonial-badge">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
            {{ cms('home.reviews.verified_badge', 'Verified') }}
          </span>
          <img src="https://res.cloudinary.com/dirti0apj/image/upload/v1777425668/WhatsApp_Image_2026-04-27_at_5.50.24_PM_nfopen.jpg" alt="Client review" loading="lazy" />
        </button>

        <button type="button" class="testimonial-card" data-reveal data-delay="5" data-full="https://res.cloudinary.com/dirti0apj/image/upload/v1777425668/WhatsApp_Image_2026-04-27_at_5.50.24_PM_1_ctic5s.jpg">
          <span class="testimonial-badge">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
            {{ cms('home.reviews.verified_badge', 'Verified') }}
          </span>
          <img src="https://res.cloudinary.com/dirti0apj/image/upload/v1777425668/WhatsApp_Image_2026-04-27_at_5.50.24_PM_1_ctic5s.jpg" alt="Client review" loading="lazy" />
        </button>

        <button type="button" class="testimonial-card" data-reveal data-delay="1" data-full="https://res.cloudinary.com/dirti0apj/image/upload/v1777509366/9c1f219a-a0d7-4e1a-8e96-51b64c39f2bf_bphort.png">
          <span class="testimonial-badge">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
            {{ cms('home.reviews.verified_badge', 'Verified') }}
          </span>
          <img src="https://res.cloudinary.com/dirti0apj/image/upload/v1777509366/9c1f219a-a0d7-4e1a-8e96-51b64c39f2bf_bphort.png" alt="Client review" loading="lazy" />
        </button>

        <button type="button" class="testimonial-card" data-reveal data-delay="2" data-full="https://res.cloudinary.com/dirti0apj/image/upload/v1777509365/9d8d5eeb-1f59-4926-83b5-1d365d039154_lzqbgs.png">
          <span class="testimonial-badge">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
            {{ cms('home.reviews.verified_badge', 'Verified') }}
          </span>
          <img src="https://res.cloudinary.com/dirti0apj/image/upload/v1777509365/9d8d5eeb-1f59-4926-83b5-1d365d039154_lzqbgs.png" alt="Client review" loading="lazy" />
        </button>

        <button type="button" class="testimonial-card" data-reveal data-delay="3" data-full="https://res.cloudinary.com/dirti0apj/image/upload/v1777509363/ed6dd923-80fd-45eb-b17d-f127d9c933e7_zyk7q8.png">
          <span class="testimonial-badge">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
            {{ cms('home.reviews.verified_badge', 'Verified') }}
          </span>
          <img src="https://res.cloudinary.com/dirti0apj/image/upload/v1777509363/ed6dd923-80fd-45eb-b17d-f127d9c933e7_zyk7q8.png" alt="Client review" loading="lazy" />
        </button>

        <button type="button" class="testimonial-card" data-reveal data-delay="4" data-full="https://res.cloudinary.com/dirti0apj/image/upload/v1777509360/fc7056d7-6517-4fe2-acab-9364edba3b87_gmuh2n.png">
          <span class="testimonial-badge">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
            {{ cms('home.reviews.verified_badge', 'Verified') }}
          </span>
          <img src="https://res.cloudinary.com/dirti0apj/image/upload/v1777509360/fc7056d7-6517-4fe2-acab-9364edba3b87_gmuh2n.png" alt="Client review" loading="lazy" />
        </button>

        <button type="button" class="testimonial-card" data-reveal data-delay="5" data-full="https://res.cloudinary.com/dirti0apj/image/upload/v1777509359/b521358d-74c8-46c8-b6a1-b0959517409a_etw6t2.png">
          <span class="testimonial-badge">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
            {{ cms('home.reviews.verified_badge', 'Verified') }}
          </span>
          <img src="https://res.cloudinary.com/dirti0apj/image/upload/v1777509359/b521358d-74c8-46c8-b6a1-b0959517409a_etw6t2.png" alt="Client review" loading="lazy" />
        </button>

        <button type="button" class="testimonial-card" data-reveal data-delay="6" data-full="https://res.cloudinary.com/dirti0apj/image/upload/v1777509357/6b0fdcb0-8673-48aa-aa79-5df86cc57c67_fnz0xk.png">
          <span class="testimonial-badge">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
            {{ cms('home.reviews.verified_badge', 'Verified') }}
          </span>
          <img src="https://res.cloudinary.com/dirti0apj/image/upload/v1777509357/6b0fdcb0-8673-48aa-aa79-5df86cc57c67_fnz0xk.png" alt="Client review" loading="lazy" />
        </button>
      </div>

      <p class="mt-12 text-center text-sm text-royal-700/55 italic">{{ cms('home.reviews.gallery_caption', 'Tap any review to view full size. Names and photos shown with permission.') }}</p>
    </div>
  </section>

  <!-- ============== LIGHTBOX ============== -->
  <div id="lightbox" class="lightbox" aria-hidden="true" role="dialog">
    <button class="lightbox-close" id="lightboxClose" aria-label="Close">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
    </button>
    <button class="lightbox-nav lightbox-prev" id="lightboxPrev" aria-label="Previous">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="15 18 9 12 15 6"/></svg>
    </button>
    <button class="lightbox-nav lightbox-next" id="lightboxNext" aria-label="Next">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 18 15 12 9 6"/></svg>
    </button>
    <div class="lightbox-content">
      <img id="lightboxImg" src="" alt="Client review — full view" />
    </div>
    <div class="lightbox-counter" id="lightboxCounter">1 / 6</div>
  </div>

  <!-- ============== WHY WE WIN ============== -->
  <section class="compare-section py-24 lg:py-32">
    <div class="compare-grid-overlay"></div>
    <div class="hero-orb orb-gold" style="top:-5%;left:-12%;opacity:0.18;width:600px;height:600px"></div>
    <div class="hero-orb orb-purple" style="bottom:-5%;right:-10%;opacity:0.32;width:650px;height:650px"></div>

    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 relative">

      <!-- Header -->
      <div class="max-w-2xl mb-14" data-reveal>
        <div class="eyebrow">{{ cms('home.extra.compare_eyebrow', 'Why AQ Wealth University') }}</div>
        <h2 class="section-title text-white leading-tight">
          {!! cms('home.extra.compare_heading', 'Why Other Companies<br/>
          <span class="gold-text">Fall Short.</span>') !!}
        </h2>
        <p class="mt-4 text-base leading-relaxed" style="color:rgba(255,255,255,0.55);max-width:32rem;">
          {{ cms('home.extra.compare_sub', 'Most companies send the same template letter for every client and call it a strategy. We built something different. Every dispute is targeted, every client has a dedicated advisor, and you see every move we make.') }}
        </p>
      </div>

      <!-- Two columns -->
      <div class="grid lg:grid-cols-[1fr_1.05fr] gap-10 lg:gap-12 items-start">

        <!-- Left: cream feature cards -->
        <div class="flex flex-col gap-4">

          <div class="compare-feature" data-reveal data-delay="1">
            <div class="compare-feature-icon">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2 4 5v6c0 5.5 3.8 10.6 8 12 4.2-1.4 8-6.5 8-12V5l-8-3z"/><path d="m9 12 2 2 4-4"/></svg>
            </div>
            <div>
              <div class="compare-feature-num">{!! cms('home.extra.compare_feat1_num', '01 &nbsp;·&nbsp; Strategy') !!}</div>
              <div class="compare-feature-title">{{ cms('home.extra.compare_feat1_title', 'Targeted Disputes, Not Template Letters') }}</div>
              <div class="compare-feature-desc">{{ cms('home.extra.compare_feat1_desc', 'Every challenge we file is built around your specific violations. We go after items that are inaccurate, unverifiable, or legally reportable under the FCRA and FDCPA — not cookie-cutter letters bureaus routinely ignore.') }}</div>
            </div>
          </div>

          <div class="compare-feature" data-reveal data-delay="2">
            <div class="compare-feature-icon">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/></svg>
            </div>
            <div>
              <div class="compare-feature-num">{!! cms('home.extra.compare_feat2_num', '02 &nbsp;·&nbsp; Transparency') !!}</div>
              <div class="compare-feature-title">{{ cms('home.extra.compare_feat2_title', 'You Watch It Happen, in Real Time') }}</div>
              <div class="compare-feature-desc">{{ cms('home.extra.compare_feat2_desc', 'Every dispute status, bureau response, and score update is visible in your client portal the moment it happens. You always know exactly what was filed, what came back, and what is next.') }}</div>
            </div>
          </div>

          <div class="compare-feature" data-reveal data-delay="3">
            <div class="compare-feature-icon">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="8" r="4"/><path d="M6 20v-2a6 6 0 0 1 12 0v2"/></svg>
            </div>
            <div>
              <div class="compare-feature-num">{!! cms('home.extra.compare_feat3_num', '03 &nbsp;·&nbsp; Accountability') !!}</div>
              <div class="compare-feature-title">{{ cms('home.extra.compare_feat3_title', 'One Advisor. Your Entire Journey.') }}</div>
              <div class="compare-feature-desc">{{ cms('home.extra.compare_feat3_desc', 'The same advisor who reviews your file on day one handles your case through completion. No call centers, no re-explaining yourself, no shuffled files. One relationship from start to finish.') }}</div>
            </div>
          </div>

          <div class="compare-feature" data-reveal data-delay="4">
            <div class="compare-feature-icon">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="7" width="20" height="14" rx="2"/><path d="M16 7V5a2 2 0 0 0-4 0v2M12 12v5M9 14h6"/></svg>
            </div>
            <div>
              <div class="compare-feature-num">{!! cms('home.extra.compare_feat4_num', '04 &nbsp;·&nbsp; Growth') !!}</div>
              <div class="compare-feature-title">{{ cms('home.extra.compare_feat4_title', 'From Personal Credit to Business Funding') }}</div>
              <div class="compare-feature-desc">{{ cms('home.extra.compare_feat4_desc', 'We do not stop at your personal score. While we repair your profile, we show you how to build business credit that stands on its own, structure your company correctly, and access capital without relying on your social.') }}</div>
            </div>
          </div>

        </div>

        <!-- Right: table + stats -->
        <div data-reveal data-delay="2">

          <p class="text-xs mb-2 text-right lg:hidden" style="color:rgba(255,255,255,0.35);letter-spacing:0.05em;">{{ cms('home.extra.compare_scroll_hint', '← Scroll to compare →') }}</p>
          <div class="compare-table-wrap">
            <table class="compare-table">
              <thead>
                <tr>
                  <th style="text-align:left;padding-left:1.375rem;color:rgba(255,255,255,0.30);background:rgba(255,255,255,0.02);">{{ cms('home.extra.compare_th_feature', 'Feature') }}</th>
                  <th class="th-us-cell">{{ cms('home.extra.compare_th_us', 'AQ Wealth Univ.') }}</th>
                  <th class="th-them-cell">{{ cms('home.extra.compare_th_them', 'Others') }}</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>{{ cms('home.extra.compare_row1', 'Personalized report review') }}</td>
                  <td class="td-us"><span class="compare-check inline-flex"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></span></td>
                  <td><span class="compare-x inline-flex"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg></span></td>
                </tr>
                <tr>
                  <td>{{ cms('home.extra.compare_row2', 'FCRA / FDCPA-based strategy') }}</td>
                  <td class="td-us"><span class="compare-check inline-flex"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></span></td>
                  <td><span class="compare-x inline-flex"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg></span></td>
                </tr>
                <tr>
                  <td>{{ cms('home.extra.compare_row3', 'Real-time client portal') }}</td>
                  <td class="td-us"><span class="compare-check inline-flex"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></span></td>
                  <td><span class="compare-x inline-flex"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg></span></td>
                </tr>
                <tr>
                  <td>{{ cms('home.extra.compare_row4', 'Dedicated advisor (no rep switching)') }}</td>
                  <td class="td-us"><span class="compare-check inline-flex"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></span></td>
                  <td><span class="compare-x inline-flex"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg></span></td>
                </tr>
                <tr>
                  <td>{{ cms('home.extra.compare_row5', 'Medical debt review') }}</td>
                  <td class="td-us"><span class="compare-check inline-flex"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></span></td>
                  <td><span class="compare-x inline-flex"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg></span></td>
                </tr>
                <tr>
                  <td>{{ cms('home.extra.compare_row6', 'Credit-building roadmap included') }}</td>
                  <td class="td-us"><span class="compare-check inline-flex"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></span></td>
                  <td><span class="compare-x inline-flex"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg></span></td>
                </tr>
                <tr>
                  <td>{{ cms('home.extra.compare_row7', 'Business credit guidance') }}</td>
                  <td class="td-us"><span class="compare-check inline-flex"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></span></td>
                  <td><span class="compare-x inline-flex"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg></span></td>
                </tr>
                <tr>
                  <td>{{ cms('home.extra.compare_row8', 'Business funding education') }}</td>
                  <td class="td-us"><span class="compare-check inline-flex"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></span></td>
                  <td><span class="compare-x inline-flex"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg></span></td>
                </tr>
              </tbody>
            </table>
          </div>

          <!-- Stat strip -->
          <div class="compare-stats-grid mt-5 grid grid-cols-3 gap-4">
            <div class="text-center px-3 py-4 rounded-xl" style="background:rgba(207,161,42,0.07);border:1px solid rgba(207,161,42,0.18);">
              <div class="compare-cta-stat">{{ cms('home.extra.compare_stat1_num', '500+') }}</div>
              <div class="compare-cta-label">{{ cms('home.extra.compare_stat1_label', 'Clients served') }}</div>
            </div>
            <div class="text-center px-3 py-4 rounded-xl" style="background:rgba(207,161,42,0.07);border:1px solid rgba(207,161,42,0.18);">
              <div class="compare-cta-stat">{{ cms('home.extra.compare_stat2_num', '100+') }}</div>
              <div class="compare-cta-label">{{ cms('home.extra.compare_stat2_label', 'Avg. point increase') }}</div>
            </div>
            <div class="text-center px-3 py-4 rounded-xl" style="background:rgba(207,161,42,0.07);border:1px solid rgba(207,161,42,0.18);">
              <div class="compare-cta-stat">{{ cms('home.extra.compare_stat3_num', '90d') }}</div>
              <div class="compare-cta-label">{{ cms('home.extra.compare_stat3_label', 'Average timeline') }}</div>
            </div>
          </div>

        </div>
      </div>

      <!-- Bottom CTA -->
      <div class="compare-cta mt-14" data-reveal>
        <div>
          <div class="font-display font-bold text-xl text-white leading-snug mb-1">{{ cms('home.extra.compare_cta_title', 'Ready to stop settling for generic?') }}</div>
          <div class="text-sm max-w-md" style="color:rgba(255,255,255,0.50);">{{ cms('home.extra.compare_cta_desc', 'Schedule a free credit review. See exactly what is dragging your score down, and what we can do about it.') }}</div>
        </div>
        <a href="#contact" class="btn-gold shrink-0">{{ cms('home.extra.compare_cta_btn', 'Get My Free Review →') }}</a>
      </div>

    </div>
  </section>

  <!-- ============== WEALTH PROJECTOR ============== -->
  <section id="projector" class="py-24 lg:py-32 bg-royal-950 text-white relative overflow-hidden">
    <div class="projector-bg"></div>
    <div class="projector-grid-overlay"></div>
    <div class="hero-orb orb-gold" style="top:5%;left:-5%;opacity:0.5"></div>
    <div class="hero-orb orb-purple" style="bottom:5%;right:-5%;opacity:0.5"></div>

    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 relative">
      <div class="text-center max-w-3xl mx-auto" data-reveal>
        <div class="eyebrow justify-center" style="color: var(--gold-300);">{{ cms('home.extra.projector_eyebrow', 'Wealth Projector · Interactive') }}</div>
        <h2 class="section-title text-white">{!! cms('home.extra.projector_heading', 'See your future, <span class="gold-text">in real time.</span>') !!}</h2>
        <p class="section-sub text-royal-100/80 mx-auto">{{ cms('home.extra.projector_sub', 'Move the sliders. Pick a package. Watch what your credit, savings, and funding could look like 90 days from now.') }}</p>
      </div>

      <div class="projector-panel mt-14 grid lg:grid-cols-2 gap-8" data-reveal>
        <!-- LEFT: Inputs -->
        <div>
          <div class="projector-input-group">
            <div class="projector-label-row">
              <span class="projector-label">{{ cms('home.extra.projector_label_score', 'Current Credit Score') }}</span>
              <span class="projector-value" id="scoreVal">580</span>
            </div>
            <input id="scoreInput" type="range" min="300" max="800" value="580" step="5" class="projector-slider"/>
          </div>

          <div class="projector-input-group">
            <div class="projector-label-row">
              <span class="projector-label">{{ cms('home.extra.projector_label_debt', 'Current Debt') }}</span>
              <span class="projector-value" id="debtVal">$25,000</span>
            </div>
            <input id="debtInput" type="range" min="0" max="100000" value="25000" step="1000" class="projector-slider"/>
          </div>

          <div class="projector-input-group">
            <div class="projector-label-row">
              <span class="projector-label">{{ cms('home.extra.projector_label_package', 'Choose Your Package') }}</span>
            </div>
            <div class="projector-pkg-group">
              <label class="projector-pkg">
                <input type="radio" name="projectorPkg" value="standard" checked>
                <span>{{ cms('home.extra.projector_pkg_standard', 'Standard') }}</span>
              </label>
              <label class="projector-pkg">
                <input type="radio" name="projectorPkg" value="expedited">
                <span>{{ cms('home.extra.projector_pkg_expedited', 'Expedited') }}</span>
              </label>
              <label class="projector-pkg">
                <input type="radio" name="projectorPkg" value="premium">
                <span>{{ cms('home.extra.projector_pkg_premium', 'Premium') }}</span>
              </label>
            </div>
          </div>

          <p class="mt-6 text-xs text-royal-100/50 italic">{{ cms('home.extra.projector_disclaimer', 'Estimates only. Actual results vary by credit profile and market conditions.') }}</p>
        </div>

        <!-- RIGHT: Output -->
        <div class="projector-output">
          <div class="projector-result-label">{{ cms('home.extra.projector_result_label', 'Projected Score · 90 Days') }}</div>
          <div class="projector-result-num" id="projectedScore">760</div>
          <div class="projector-result-badge">
            <svg class="w-3.5 h-3.5" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M3.293 9.707a1 1 0 010-1.414l6-6a1 1 0 011.414 0l6 6a1 1 0 01-1.414 1.414L11 5.414V17a1 1 0 11-2 0V5.414L4.707 9.707a1 1 0 01-1.414 0z"/></svg>
            <span id="projectedGain">+180 points</span>
          </div>

          <div class="projector-stats">
            <div class="projector-stat">
              <div class="projector-stat-num" id="savingsVal">$15,200</div>
              <div class="projector-stat-label">{{ cms('home.extra.projector_stat1_label', 'Lifetime Loan Savings') }}</div>
            </div>
            <div class="projector-stat">
              <div class="projector-stat-num" id="fundingVal">$83K</div>
              <div class="projector-stat-label">{{ cms('home.extra.projector_stat2_label', 'Funding Capacity') }}</div>
            </div>
            <div class="projector-stat">
              <div class="projector-stat-num" id="rateVal">4.6%</div>
              <div class="projector-stat-label">{{ cms('home.extra.projector_stat3_label', 'Better APR') }}</div>
            </div>
          </div>

          <a href="#contact" class="btn-gold w-full mt-6">{{ cms('home.extra.projector_cta', 'Make This Real →') }}</a>
        </div>
      </div>
    </div>
  </section>

  <!-- ============== MENTORSHIP ============== -->
  <section id="mentorship" class="py-24 lg:py-32 bg-royal-900 text-white relative overflow-hidden">
    <div class="absolute inset-0 opacity-30" style="background-image: radial-gradient(circle at 20% 20%, #b8860b22 0%, transparent 40%), radial-gradient(circle at 80% 80%, #7a30bf33 0%, transparent 40%);"></div>
    <div class="hero-orb orb-gold" style="top:-100px;right:10%;opacity:0.3"></div>

    <div class="relative mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
      <div class="max-w-3xl" data-reveal>
        <div class="eyebrow" style="color: var(--gold-300);">{{ cms('home.mentorship.eyebrow', 'Mentorship') }}</div>
        <h2 class="section-title text-white">{{ cms('home.mentorship.heading', 'Learn it. Own it. Teach it.') }}</h2>
        <p class="section-sub text-royal-100/80">{{ cms('home.mentorship.sub', 'Get into private mentorship with our team. Learn how to repair credit and structure businesses for yourself, for your family, or as a service you can charge real money for.') }}</p>
      </div>

      <div class="mt-12 grid md:grid-cols-2 gap-6">
        <div class="mentor-card" data-reveal data-delay="1">
          <div class="flex items-center gap-3 text-gold-300 text-xs uppercase tracking-widest font-semibold relative z-10">
            <span class="w-8 h-px bg-gold-400"></span> {{ cms('home.mentorship.card1_label', 'Credit Repair Mentorship') }}
          </div>
          <h3 class="font-display text-3xl mt-4 font-bold relative z-10">{{ cms('home.mentorship.card1_title', 'Master the Credit Repair Process') }}</h3>
          <p class="text-royal-100/80 mt-3 relative z-10">{{ cms('home.mentorship.card1_desc', 'Learn how to dispute, delete, rebuild, and turn credit knowledge into income. We hand you the exact systems we use on clients every day.') }}</p>
          <ul class="mt-6 space-y-3 text-sm relative z-10">
            <li class="feat-light feat">{{ cms('home.mentorship.card1_feat1', 'Full dispute & deletion playbook') }}</li>
            <li class="feat-light feat">{{ cms('home.mentorship.card1_feat2', 'Client onboarding & systems') }}</li>
            <li class="feat-light feat">{{ cms('home.mentorship.card1_feat3', 'Pricing, packaging & sales scripts') }}</li>
            <li class="feat-light feat">{{ cms('home.mentorship.card1_feat4', 'Direct mentorship with our team') }}</li>
          </ul>
          <div class="mt-8 flex items-center justify-between relative z-10">
            <div class="font-display text-4xl font-bold gold-text">{{ cms('home.mentorship.card1_price', '$3,500') }}</div>
            @if(config('site.links.checkout_mentorship_credit'))
              <a href="{{ config('site.links.checkout_mentorship_credit') }}" target="_blank" rel="noopener" class="btn-gold">{{ cms('home.mentorship.card1_cta', 'Apply Now') }}</a>
            @else
              <a href="#contact" class="btn-gold">{{ cms('home.mentorship.card1_cta', 'Apply Now') }}</a>
            @endif
          </div>
        </div>

        <div class="mentor-card" data-reveal data-delay="2">
          <div class="flex items-center gap-3 text-gold-300 text-xs uppercase tracking-widest font-semibold relative z-10">
            <span class="w-8 h-px bg-gold-400"></span> {{ cms('home.mentorship.card2_label', 'Business Mentorship') }}
          </div>
          <h3 class="font-display text-3xl mt-4 font-bold relative z-10">{{ cms('home.mentorship.card2_title', 'Structure & Scale Your Business') }}</h3>
          <p class="text-royal-100/80 mt-3 relative z-10">{{ cms('home.mentorship.card2_desc', 'From LLC formation to business credit to stacking funding, we walk you through every step of building a real, fundable business.') }}</p>
          <ul class="mt-6 space-y-3 text-sm relative z-10">
            <li class="feat-light feat">{{ cms('home.mentorship.card2_feat1', 'LLC, EIN & banking setup') }}</li>
            <li class="feat-light feat">{{ cms('home.mentorship.card2_feat2', 'Business credit profile build-out') }}</li>
            <li class="feat-light feat">{{ cms('home.mentorship.card2_feat3', 'Funding stack & lender strategy') }}</li>
            <li class="feat-light feat">{{ cms('home.mentorship.card2_feat4', '1:1 strategy sessions') }}</li>
          </ul>
          <div class="mt-8 flex items-center justify-between relative z-10">
            <div class="font-display text-4xl font-bold gold-text">{{ cms('home.mentorship.card2_price', '$1,500') }}</div>
            @if(config('site.links.checkout_mentorship_business'))
              <a href="{{ config('site.links.checkout_mentorship_business') }}" target="_blank" rel="noopener" class="btn-gold">{{ cms('home.mentorship.card2_cta', 'Apply Now') }}</a>
            @else
              <a href="#contact" class="btn-gold">{{ cms('home.mentorship.card2_cta', 'Apply Now') }}</a>
            @endif
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ============== BUSINESS BLUEPRINT (BUSINESS SETUP) ============== -->
  <section id="business-setup" class="py-24 lg:py-32 relative overflow-hidden" style="background: linear-gradient(180deg, #f5f0fb 0%, #ffffff 60%, #fbf6e6 100%);">
    <div class="absolute inset-0 opacity-50 pointer-events-none" style="background-image: radial-gradient(circle at 15% 20%, rgba(207,161,42,0.18) 0%, transparent 45%), radial-gradient(circle at 85% 80%, rgba(122,48,191,0.12) 0%, transparent 45%);"></div>

    <div class="relative mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
      <div class="grid lg:grid-cols-12 gap-10 lg:gap-14 items-start">

        <!-- LEFT: pitch -->
        <div class="lg:col-span-6" data-reveal>
          <div class="eyebrow" style="color: var(--gold-700, #7a5707);">{{ cms('home.business.eyebrow', 'Business Setup · Done Right') }}</div>
          <h2 class="section-title mt-3">{!! cms('home.business.heading', 'Build a <span class="gold-text">Fundable &amp; Profitable</span> Business Structure.') !!}</h2>
          <p class="section-sub mt-5">
            {!! cms('home.business.intro', 'The <strong>Business Blueprint Mentorship</strong> is designed for aspiring entrepreneurs who want to
            <strong>launch their own business with a solid, fundable foundation</strong>. This program equips you with
            the tools, strategies, and guidance needed to create a <strong>professional, lender-ready business structure</strong>
            that can grow and scale successfully.') !!}
          </p>
          <div class="mt-7 flex flex-wrap items-center gap-x-5 gap-y-3 text-sm text-royal-700/80">
            <div class="inline-flex items-center gap-2">
              <svg class="w-5 h-5 text-gold-500" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/></svg>
              {{ cms('home.business.bullet1', 'Lender-ready from day one') }}
            </div>
            <div class="inline-flex items-center gap-2">
              <svg class="w-5 h-5 text-gold-500" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/></svg>
              {{ cms('home.business.bullet2', 'Scalable, professional foundation') }}
            </div>
          </div>
          <div class="mt-8 flex flex-col sm:flex-row gap-3">
            @if(config('site.links.checkout_business_blueprint'))
              <a href="{{ config('site.links.checkout_business_blueprint') }}" target="_blank" rel="noopener" class="btn-gold text-base">{{ cms('home.business.cta_primary', 'Start My Blueprint →') }}</a>
            @else
              <a href="#contact" class="btn-gold text-base">{{ cms('home.business.cta_primary_alt', 'Apply for the Blueprint →') }}</a>
            @endif
            <a href="#contact" class="btn-outline text-base">{{ cms('home.business.cta_secondary', 'Talk to an Advisor') }}</a>
          </div>
        </div>

        <!-- RIGHT: what you'll learn & receive -->
        <div class="lg:col-span-6" data-reveal data-delay="2">
          <div class="rounded-2xl bg-white shadow-xl ring-1 ring-royal-100 p-7 sm:p-9 relative overflow-hidden">
            <div class="absolute -top-16 -right-16 w-56 h-56 rounded-full" style="background: rgba(207,161,42,0.18); filter: blur(50px);"></div>
            <div class="absolute -bottom-20 -left-16 w-56 h-56 rounded-full" style="background: rgba(122,48,191,0.18); filter: blur(60px);"></div>

            <div class="relative">
              <div class="text-xs uppercase tracking-widest font-semibold" style="color: #7a5707;">{!! cms('home.business.learn_eyebrow', 'What You\'ll Learn &amp; Receive') !!}</div>
              <h3 class="font-display text-2xl sm:text-3xl font-bold mt-2" style="color: #6322a3;">{{ cms('home.business.learn_title', 'Fundable Business Structure') }}</h3>

              <ul class="mt-6 space-y-3.5 text-royal-800">
                <li class="flex items-start gap-3">
                  <span class="flex-shrink-0 mt-0.5 w-6 h-6 rounded-full flex items-center justify-center" style="background: linear-gradient(135deg,#cfa12a,#9a6f08); color:#fff;">
                    <svg class="w-3.5 h-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                  </span>
                  <span>{!! cms('home.business.item1', 'Establish a <strong>Professional Business Address</strong>') !!}</span>
                </li>
                <li class="flex items-start gap-3">
                  <span class="flex-shrink-0 mt-0.5 w-6 h-6 rounded-full flex items-center justify-center" style="background: linear-gradient(135deg,#cfa12a,#9a6f08); color:#fff;">
                    <svg class="w-3.5 h-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                  </span>
                  <span>{!! cms('home.business.item2', 'Form your <strong>LLC or Corporation</strong>') !!}</span>
                </li>
                <li class="flex items-start gap-3">
                  <span class="flex-shrink-0 mt-0.5 w-6 h-6 rounded-full flex items-center justify-center" style="background: linear-gradient(135deg,#cfa12a,#9a6f08); color:#fff;">
                    <svg class="w-3.5 h-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                  </span>
                  <span>{!! cms('home.business.item3', 'Obtain a <strong>Federal EIN</strong>') !!}</span>
                </li>
                <li class="flex items-start gap-3">
                  <span class="flex-shrink-0 mt-0.5 w-6 h-6 rounded-full flex items-center justify-center" style="background: linear-gradient(135deg,#cfa12a,#9a6f08); color:#fff;">
                    <svg class="w-3.5 h-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                  </span>
                  <span>{!! cms('home.business.item4', 'Secure a <strong>D-U-N-S Number</strong> for credit and funding purposes') !!}</span>
                </li>
                <li class="flex items-start gap-3">
                  <span class="flex-shrink-0 mt-0.5 w-6 h-6 rounded-full flex items-center justify-center" style="background: linear-gradient(135deg,#cfa12a,#9a6f08); color:#fff;">
                    <svg class="w-3.5 h-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                  </span>
                  <span>{!! cms('home.business.item5', 'Set up a <strong>Business Email and Phone Number</strong>') !!}</span>
                </li>
                <li class="flex items-start gap-3">
                  <span class="flex-shrink-0 mt-0.5 w-6 h-6 rounded-full flex items-center justify-center" style="background: linear-gradient(135deg,#cfa12a,#9a6f08); color:#fff;">
                    <svg class="w-3.5 h-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                  </span>
                  <span>{!! cms('home.business.item6', 'Create a <strong>Professional Website and Branding</strong>') !!}</span>
                </li>
                <li class="flex items-start gap-3 pt-1">
                  <span class="flex-shrink-0 mt-0.5 w-6 h-6 rounded-full flex items-center justify-center" style="background: rgba(207,161,42,0.15); color:#7a5707; font-weight:700; font-size:.75rem;">+</span>
                  <span class="font-semibold" style="color:#6322a3;">{{ cms('home.business.item7', '…and more') }}</span>
                </li>
              </ul>

              <div class="mt-7 pt-5 border-t border-royal-100 flex items-center justify-between">
                <div class="font-display italic text-royal-700/70" style="font-size: 1rem;">
                  {!! cms('home.business.signature', '&mdash; Danielle Todd<br/>
                  <span class="text-xs not-italic uppercase tracking-widest" style="color:#7a5707;">CEO · AQ Wealth University</span>') !!}
                </div>
                @if(config('site.links.checkout_business_blueprint'))
                  <a href="{{ config('site.links.checkout_business_blueprint') }}" target="_blank" rel="noopener" class="btn-gold text-sm">{{ cms('home.business.card_cta', 'Get Started →') }}</a>
                @else
                  <a href="#contact" class="btn-gold text-sm">{{ cms('home.business.card_cta_alt', 'Apply Now') }}</a>
                @endif
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- ============== PROCESS ============== -->
  <section id="process" class="py-24 lg:py-32 bg-white relative overflow-hidden">
    <div class="process-bg-glow"></div>
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 relative">
      <div class="max-w-3xl" data-reveal>
        <div class="eyebrow">{{ cms('home.extra.process_eyebrow', 'How It Works') }}</div>
        <h2 class="section-title">{{ cms('home.extra.process_heading', "A clear path from where you are to where you're going.") }}</h2>
      </div>

      <div class="process-grid mt-16 grid md:grid-cols-4 gap-8">
        <div class="step" data-reveal data-delay="1">
          <div class="step-medal">
            <span class="step-medal-num">01</span>
            <svg class="step-medal-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><path d="M14 2v6h6"/><path d="M9 13h6"/><path d="M9 17h4"/></svg>
          </div>
          <div class="step-body">
            <h4>{{ cms('home.extra.step1_title', 'Apply') }}</h4>
            <p>{{ cms('home.extra.step1_desc', 'Tell us where you are with credit, business, and funding. Free intake.') }}</p>
            <span class="step-time">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
              {{ cms('home.extra.step1_time', '~5 minutes') }}
            </span>
          </div>
        </div>

        <div class="step" data-reveal data-delay="2">
          <div class="step-medal">
            <span class="step-medal-num">02</span>
            <svg class="step-medal-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><circle cx="12" cy="12" r="6"/><circle cx="12" cy="12" r="2" fill="currentColor"/></svg>
          </div>
          <div class="step-body">
            <h4>{{ cms('home.extra.step2_title', 'Strategize') }}</h4>
            <p>{{ cms('home.extra.step2_desc', 'We design the exact package and roadmap for your goals and timeline.') }}</p>
            <span class="step-time">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
              {{ cms('home.extra.step2_time', '1–2 days') }}
            </span>
          </div>
        </div>

        <div class="step" data-reveal data-delay="3">
          <div class="step-medal">
            <span class="step-medal-num">03</span>
            <svg class="step-medal-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="m13 2-9 12h7l-1 8 9-12h-7l1-8z"/></svg>
          </div>
          <div class="step-body">
            <h4>{{ cms('home.extra.step3_title', 'Execute') }}</h4>
            <p>{{ cms('home.extra.step3_desc', 'Disputes filed, structure set up, funding pursued, with you in the loop the whole way.') }}</p>
            <span class="step-time">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
              {{ cms('home.extra.step3_time', '14–90 days') }}
            </span>
          </div>
        </div>

        <div class="step" data-reveal data-delay="4">
          <div class="step-medal">
            <span class="step-medal-num">04</span>
            <svg class="step-medal-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M6 9V2h12v7"/><path d="M6 9c0 4.4 2.6 8 6 8s6-3.6 6-8"/><path d="M9 22h6"/><path d="M12 17v5"/></svg>
          </div>
          <div class="step-body">
            <h4>{{ cms('home.extra.step4_title', 'Elevate') }}</h4>
            <p>{{ cms('home.extra.step4_desc', 'You leave with clean credit, a fundable business, and the knowledge to stay there.') }}</p>
            <span class="step-time">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"/></svg>
              {{ cms('home.extra.step4_time', 'Lifetime') }}
            </span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ============== FAQ ============== -->
  <section id="faq" class="py-24 lg:py-32 bg-royal-50">
    <div class="mx-auto max-w-4xl px-4 sm:px-6 lg:px-8">
      <div class="text-center max-w-2xl mx-auto" data-reveal>
        <div class="eyebrow justify-center">{{ cms('home.faq.eyebrow', 'FAQ') }}</div>
        <h2 class="section-title">{{ cms('home.faq.heading', 'Questions, answered.') }}</h2>
      </div>
      <div class="mt-12 space-y-3">
        <details class="faq" data-reveal data-delay="1">
          <summary>{{ cms('home.faq.q1', 'How fast will I see results from credit repair?') }}</summary>
          <p>{{ cms('home.faq.a1', 'Standard 3-Round packages typically deliver visible results in 30–90 days. Our Expedited packages are designed to deliver results in as little as 14–30 days.') }}</p>
        </details>
        <details class="faq" data-reveal data-delay="2">
          <summary>{{ cms('home.faq.q2', "What's the difference between Single and Duo?") }}</summary>
          <p>{{ cms('home.faq.a2', 'Single covers one person. Duo lets you bring a partner (spouse, family member, or business partner) at a reduced combined rate. Same scope of work for both profiles.') }}</p>
        </details>
        <details class="faq" data-reveal data-delay="3">
          <summary>{{ cms('home.faq.q3', 'Do I need credit repair before business credit?') }}</summary>
          <p>{{ cms('home.faq.a3', "Not always. Business credit can be built independently, but personal credit strengthens your funding capacity. We'll map the right sequence on your strategy call.") }}</p>
        </details>
        <details class="faq" data-reveal data-delay="4">
          <summary>{{ cms('home.faq.q4', 'What does the $99/month community include?') }}</summary>
          <p>{{ cms('home.faq.a4', "Live trainings, frameworks, replays, and direct access to the AQ Wealth network. It's the easiest way to keep learning and stay sharp every month.") }}</p>
        </details>
        <details class="faq" data-reveal data-delay="5">
          <summary>{{ cms('home.faq.q5', 'Is mentorship right for me?') }}</summary>
          <p>{{ cms('home.faq.a5', "Mentorship is for people who are serious about either building a credit repair business of their own, or really mastering business structure and funding for themselves. Apply and we'll talk to see if it's a fit.") }}</p>
        </details>
      </div>
    </div>
  </section>

  <!-- ============== CONTACT / CREDIT REPAIR APPLICATION ============== -->
  <section id="contact" class="py-24 lg:py-32 bg-gradient-to-br from-royal-800 via-royal-900 to-royal-800 text-white relative overflow-hidden">
    <div class="absolute inset-0">
      <div class="absolute top-0 left-1/4 w-72 h-72 bg-gold-500/20 rounded-full" style="filter:blur(60px);"></div>
      <div class="absolute bottom-0 right-1/4 w-72 h-72 bg-royal-500/30 rounded-full" style="filter:blur(60px);"></div>
    </div>
    <div class="relative mx-auto max-w-3xl px-4 sm:px-6 lg:px-8">

      <div class="text-center mb-10" data-reveal>
        <div class="eyebrow justify-center" style="color:var(--gold-300);">{{ cms('home.extra.contact_eyebrow', 'Free Credit Review') }}</div>
        <h2 class="font-display text-4xl sm:text-5xl font-bold leading-tight">{!! cms('home.extra.contact_heading', 'Apply for credit repair<br/><span class="gold-text">in five minutes.</span>') !!}</h2>
        <p class="mt-5 text-base text-royal-100/70 max-w-xl mx-auto leading-relaxed">{{ cms('home.extra.contact_sub', "Tell us where you're at. We'll review your situation and reach out within one business day with a custom plan and pricing.") }}</p>
      </div>

      <form id="creditForm" class="app-card max-w-xl mx-auto" novalidate data-reveal data-delay="1">
        <div class="text-center mb-6">
          <h3 class="font-display font-bold text-xl text-white">{{ cms('home.extra.contact_form_title', 'Free Credit Review') }}</h3>
          <p class="text-royal-100/55 text-sm mt-1">{{ cms('home.extra.contact_form_sub', 'A senior advisor will reach out within one business day.') }}</p>
        </div>

        <div class="quiz-final-field">
          <label class="field-label">{!! cms('home.extra.contact_label_name', 'Full Name <span class="req">*</span>') !!}</label>
          <input type="text" name="fullName" class="form-input" placeholder="Jane Doe" required>
        </div>
        <div class="quiz-final-field">
          <label class="field-label">{!! cms('home.extra.contact_label_email', 'Email Address <span class="req">*</span>') !!}</label>
          <input type="email" name="email" class="form-input" placeholder="you@email.com" required>
        </div>
        <div class="quiz-final-field">
          <label class="field-label">{!! cms('home.extra.contact_label_phone', 'Phone Number <span class="req">*</span>') !!}</label>
          <input type="tel" name="phone" class="form-input" placeholder="(555) 123-4567" required>
        </div>

        <button type="submit" class="quiz-submit mt-2">{{ cms('home.extra.contact_submit', 'Request My Free Review') }}</button>

        <!-- Success state -->
        <div class="quiz-panel mt-6" data-step="success">
          <div class="text-center py-2">
            <div class="success-icon" style="width:64px;height:64px;">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" style="width:28px;height:28px;"><polyline points="20 6 9 17 4 12"/></svg>
            </div>
            <h4 class="font-display font-bold text-xl text-white mt-3 mb-1">{{ cms('home.extra.contact_success_title', "You're in.") }}</h4>
            <p class="text-royal-100/65 text-sm leading-relaxed">{{ cms('home.extra.contact_success_text', 'A senior advisor will reach out within one business day.') }}</p>
          </div>
        </div>

        <div class="trust-row" style="margin-top:1.25rem;padding-top:1.25rem;">
          <div class="trust-item">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg>
            {{ cms('home.extra.trust1', '256-bit SSL') }}
          </div>
          <div class="trust-item">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="m9 12 2 2 4-4"/></svg>
            {{ cms('home.extra.trust2', 'No spam, ever') }}
          </div>
          <div class="trust-item">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2 4 5v6c0 5.5 3.8 10.6 8 12 4.2-1.4 8-6.5 8-12V5l-8-3z"/></svg>
            {!! cms('home.extra.trust3', 'Private &amp; secure') !!}
          </div>
        </div>      </form>
    </div>
  </section>

  @include('partials.site-footer')

  <!-- ============== POPUP CREDIT REPAIR MODAL ============== -->
  <div id="creditModal" class="modal-overlay" role="dialog" aria-hidden="true" aria-labelledby="creditModalTitle">
    <div class="modal-panel">
      <button type="button" class="modal-close" id="creditModalClose" aria-label="Close">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
      </button>

      <form id="creditFormModal" class="app-card" novalidate>

        <!-- STEP 1 -->
        <div class="quiz-panel active" data-step="1">
          <div class="quiz-step-num">{{ cms('home.extra.quiz_step1_num', 'Step 1 of 5') }}</div>
          <h3 class="quiz-question">{{ cms('home.extra.quiz_step1_question', "What's your biggest credit challenge right now?") }}</h3>
          <div class="quiz-options">
            <button type="button" class="quiz-option" data-name="creditChallenge" data-value="Collections & Charge-offs"><span class="quiz-option-icon">💳</span>{!! cms('home.extra.quiz_step1_opt1', 'Collections &amp; Charge-offs') !!}</button>
            <button type="button" class="quiz-option" data-name="creditChallenge" data-value="Late Payments"><span class="quiz-option-icon">⏰</span>{{ cms('home.extra.quiz_step1_opt2', 'Late Payments') }}</button>
            <button type="button" class="quiz-option" data-name="creditChallenge" data-value="Student Loans"><span class="quiz-option-icon">🎓</span>{{ cms('home.extra.quiz_step1_opt3', 'Student Loans') }}</button>
            <button type="button" class="quiz-option" data-name="creditChallenge" data-value="Bankruptcy or Foreclosure"><span class="quiz-option-icon">⚖️</span>{{ cms('home.extra.quiz_step1_opt4', 'Bankruptcy or Foreclosure') }}</button>
            <button type="button" class="quiz-option" data-name="creditChallenge" data-value="Not Sure / Multiple Issues"><span class="quiz-option-icon">🔍</span>{{ cms('home.extra.quiz_step1_opt5', 'Not Sure / Multiple Issues') }}</button>
          </div>
        </div>

        <!-- STEP 2 -->
        <div class="quiz-panel" data-step="2">
          <div class="quiz-step-num">{{ cms('home.extra.quiz_step2_num', 'Step 2 of 5') }}</div>
          <h3 class="quiz-question">{{ cms('home.extra.quiz_step2_question', "What's your current credit score range?") }}</h3>
          <div class="quiz-options">
            <button type="button" class="quiz-option" data-name="creditScore" data-value="Below 500 (Poor)"><span class="quiz-option-icon">🔴</span>{{ cms('home.extra.quiz_step2_opt1', 'Below 500 (Poor)') }}</button>
            <button type="button" class="quiz-option" data-name="creditScore" data-value="500-579 (Very Poor)"><span class="quiz-option-icon">🟠</span>{{ cms('home.extra.quiz_step2_opt2', '500-579 (Very Poor)') }}</button>
            <button type="button" class="quiz-option" data-name="creditScore" data-value="580-669 (Fair)"><span class="quiz-option-icon">🟡</span>{{ cms('home.extra.quiz_step2_opt3', '580-669 (Fair)') }}</button>
            <button type="button" class="quiz-option" data-name="creditScore" data-value="670-739 (Good)"><span class="quiz-option-icon">🟢</span>{{ cms('home.extra.quiz_step2_opt4', '670-739 (Good)') }}</button>
            <button type="button" class="quiz-option" data-name="creditScore" data-value="I Don't Know"><span class="quiz-option-icon">❓</span>{{ cms('home.extra.quiz_step2_opt5', "I Don't Know") }}</button>
          </div>
        </div>

        <!-- STEP 3 -->
        <div class="quiz-panel" data-step="3">
          <div class="quiz-step-num">{{ cms('home.extra.quiz_step3_num', 'Step 3 of 5') }}</div>
          <h3 class="quiz-question">{{ cms('home.extra.quiz_step3_question', 'How many negative items are on your credit report?') }}</h3>
          <div class="quiz-options">
            <button type="button" class="quiz-option" data-name="negativeItems" data-value="1-3 Items"><span class="quiz-option-icon">1️⃣</span>{{ cms('home.extra.quiz_step3_opt1', '1-3 Items') }}</button>
            <button type="button" class="quiz-option" data-name="negativeItems" data-value="4-7 Items"><span class="quiz-option-icon">2️⃣</span>{{ cms('home.extra.quiz_step3_opt2', '4-7 Items') }}</button>
            <button type="button" class="quiz-option" data-name="negativeItems" data-value="8-15 Items"><span class="quiz-option-icon">3️⃣</span>{{ cms('home.extra.quiz_step3_opt3', '8-15 Items') }}</button>
            <button type="button" class="quiz-option" data-name="negativeItems" data-value="15+ Items"><span class="quiz-option-icon">🔢</span>{{ cms('home.extra.quiz_step3_opt4', '15+ Items') }}</button>
            <button type="button" class="quiz-option" data-name="negativeItems" data-value="I Don't Know"><span class="quiz-option-icon">❓</span>{{ cms('home.extra.quiz_step3_opt5', "I Don't Know") }}</button>
          </div>
        </div>

        <!-- STEP 4 -->
        <div class="quiz-panel" data-step="4">
          <div class="quiz-step-num">{{ cms('home.extra.quiz_step4_num', 'Step 4 of 5') }}</div>
          <h3 class="quiz-question">{{ cms('home.extra.quiz_step4_question', "What's your main goal for improving your credit?") }}</h3>
          <div class="quiz-options">
            <button type="button" class="quiz-option" data-name="mainGoal" data-value="Buy a Home or Refinance"><span class="quiz-option-icon">🏡</span>{{ cms('home.extra.quiz_step4_opt1', 'Buy a Home or Refinance') }}</button>
            <button type="button" class="quiz-option" data-name="mainGoal" data-value="Get a Car Loan"><span class="quiz-option-icon">🚗</span>{{ cms('home.extra.quiz_step4_opt2', 'Get a Car Loan') }}</button>
            <button type="button" class="quiz-option" data-name="mainGoal" data-value="Start or Grow My Business"><span class="quiz-option-icon">💼</span>{{ cms('home.extra.quiz_step4_opt3', 'Start or Grow My Business') }}</button>
            <button type="button" class="quiz-option" data-name="mainGoal" data-value="Access Personal Funding"><span class="quiz-option-icon">💰</span>{{ cms('home.extra.quiz_step4_opt4', 'Access Personal Funding') }}</button>
            <button type="button" class="quiz-option" data-name="mainGoal" data-value="Peace of Mind & Fresh Start"><span class="quiz-option-icon">😌</span>{!! cms('home.extra.quiz_step4_opt5', 'Peace of Mind &amp; Fresh Start') !!}</button>
          </div>
        </div>

        <!-- STEP 5 -->
        <div class="quiz-panel" data-step="5">
          <div class="quiz-step-num">{{ cms('home.extra.quiz_step5_num', 'Step 5 of 5') }}</div>
          <h3 class="quiz-question">{{ cms('home.extra.quiz_step5_question', 'Get Your Free Credit Analysis') }}</h3>

          <div class="quiz-final-field">
            <label class="field-label">{!! cms('home.extra.contact_label_name', 'Full Name <span class="req">*</span>') !!}</label>
            <input type="text" name="fullName" class="form-input" placeholder="Jane Doe" required>
          </div>
          <div class="quiz-final-field">
            <label class="field-label">{!! cms('home.extra.contact_label_email', 'Email Address <span class="req">*</span>') !!}</label>
            <input type="email" name="email" class="form-input" placeholder="you@email.com" required>
          </div>
          <div class="quiz-final-field">
            <label class="field-label">{!! cms('home.extra.contact_label_phone', 'Phone Number <span class="req">*</span>') !!}</label>
            <input type="tel" name="phone" class="form-input" placeholder="(555) 123-4567" required>
          </div>

          <button type="button" class="quiz-final-back" data-quiz-back>{{ cms('home.extra.quiz_back', '← Back') }}</button>
          <button type="submit" class="quiz-submit">{{ cms('home.extra.quiz_submit', 'Get My Free Analysis') }}</button>
        </div>

        <!-- SUCCESS -->
        <div class="quiz-panel" data-step="success">
          <div class="text-center py-6">
            <div class="success-icon">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
            </div>
            <h3 class="font-display font-bold text-2xl text-white mb-2">{{ cms('home.extra.quiz_success_title', "You're in.") }}</h3>
            <p class="text-royal-100/65 max-w-md mx-auto leading-relaxed">{{ cms('home.extra.quiz_success_text', 'Your credit analysis is on the way. A senior advisor will reach out within one business day with a custom plan.') }}</p>
            <button type="button" class="btn-ghost mt-8" id="creditModalSuccessClose">{{ cms('home.extra.quiz_success_close', 'Close') }}</button>
          </div>
        </div>
      </form>    </div>
  </div>

@endsection

@push('scripts')
  <script src="{{ asset('js/home.js') }}" defer></script>
@endpush