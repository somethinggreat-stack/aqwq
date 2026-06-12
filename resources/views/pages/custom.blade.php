@extends('layouts.app')

@section('title', $page->seo_title ?: $page->title . ' · ' . config('app.name'))
@section('description', $page->meta_description ?? '')

@section('content')
  {{-- ── Minimal nav ── --}}
  <header class="sticky top-0 z-50 bg-royal-900/95 backdrop-blur-sm border-b border-white/10">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 flex items-center justify-between h-16">
      <a href="{{ url('/') }}" class="flex items-center gap-2">
        <img src="{{ cms_image('branding.logo', 'images/logo.jpeg') }}" alt="{{ cms('branding.name', config('app.name')) }}" class="h-10 w-auto">
      </a>
      <a href="{{ url('/') }}" class="text-sm text-royal-200 hover:text-white transition">← Back to Home</a>
    </div>
  </header>

  {{-- ── Page hero ── --}}
  <section class="bg-gradient-to-br from-royal-950 via-royal-900 to-royal-800 text-white py-20 px-4">
    <div class="mx-auto max-w-4xl text-center">
      <h1 class="font-display text-4xl sm:text-5xl font-bold leading-tight">{{ $page->title }}</h1>
    </div>
  </section>

  {{-- ── Page content ── --}}
  <section class="py-16 px-4">
    <div class="mx-auto max-w-4xl">
      <div class="prose prose-lg prose-royal max-w-none
                  prose-headings:font-display prose-headings:text-royal-900
                  prose-a:text-gold-600 prose-a:font-medium prose-a:no-underline hover:prose-a:underline
                  prose-strong:text-royal-900
                  prose-li:text-royal-700">
        {!! $page->content !!}
      </div>
    </div>
  </section>

  {{-- ── Footer ── --}}
  <footer class="bg-royal-950 text-royal-300 py-10 px-4 text-center">
    <p class="text-sm">{{ cms('footer.tagline', '© ' . date('Y') . ' · ' . config('app.name') . ' · All rights reserved.') }}</p>
    <a href="{{ url('/') }}" class="mt-2 inline-block text-xs text-royal-400 hover:text-white transition">← Return to main site</a>
  </footer>

  <style>
    .prose-royal h2 { color: #260a44; border-bottom: 2px solid #ecd17d; padding-bottom: .5rem; margin-top: 2.5rem; }
    .prose-royal blockquote { border-left: 4px solid #cfa12a; background: #fbf6e6; color: #3a1463; }
    .prose-royal ul li::marker { color: #cfa12a; }
    .prose-royal ol li::marker { color: #cfa12a; font-weight: 700; }
  </style>
@endsection
