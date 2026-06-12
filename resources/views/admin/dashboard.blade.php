@extends('admin.layout')
@section('title', 'Dashboard')

@section('content')
  <div class="mb-8">
    <h2 class="text-xl font-bold">Welcome back 👋</h2>
    <p class="text-royal-600 mt-1">Edit any part of your website below. Changes go live instantly — no developer needed.</p>
  </div>

  {{-- ── Website Builder ── --}}
  <div class="mb-2">
    <h3 class="text-xs font-bold uppercase tracking-wider text-royal-400 mb-3">Website Builder</h3>
    <div class="grid sm:grid-cols-3 gap-4 mb-6">
      <a href="{{ route('admin.visual-editor') }}"
         class="block bg-royal-900 text-white rounded-2xl p-5 hover:bg-royal-800 transition shadow-sm">
        <div class="text-2xl mb-1">🎨</div>
        <div class="font-bold">Visual Editor</div>
        <div class="text-xs text-royal-200 mt-1">Show/hide & reorder website sections. Edit with a live preview.</div>
      </a>
      <a href="{{ route('admin.navigation.index') }}"
         class="block bg-white rounded-2xl border border-royal-100 p-5 hover:border-gold-400 hover:shadow-md transition">
        <div class="text-2xl mb-1">☰</div>
        <div class="font-bold text-royal-900">Navigation Menu</div>
        <div class="text-xs text-royal-500 mt-1">Add, remove, rename, and reorder nav links without code.</div>
      </a>
      <a href="{{ route('admin.pages.index') }}"
         class="block bg-white rounded-2xl border border-royal-100 p-5 hover:border-gold-400 hover:shadow-md transition">
        <div class="text-2xl mb-1">📄</div>
        <div class="font-bold text-royal-900">Pages</div>
        <div class="text-xs text-royal-500 mt-1">Create new pages with a visual editor. Publish or keep as draft.</div>
      </a>
    </div>
  </div>

  {{-- ── Content Sections ── --}}
  <div class="mb-2">
    <h3 class="text-xs font-bold uppercase tracking-wider text-royal-400 mb-3">Edit Website Content</h3>
    <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-4">
      @foreach ($groups as $key => $label)
        <a href="{{ route('admin.settings.edit', $key) }}"
           class="block bg-white rounded-2xl border border-royal-100 p-5 hover:border-gold-400 hover:shadow-md transition">
          <div class="text-sm font-semibold text-royal-900">{{ $label }}</div>
          <div class="text-xs text-royal-500 mt-1">Edit →</div>
        </a>
      @endforeach
    </div>
  </div>

  {{-- ── Media ── --}}
  <div class="mt-6">
    <a href="{{ route('admin.media.index') }}"
       class="block bg-gradient-to-r from-royal-800 to-royal-900 text-white rounded-2xl p-5 hover:from-royal-700 transition shadow-sm">
      <div class="flex items-center gap-4">
        <span class="text-3xl">🖼</span>
        <div>
          <div class="font-bold">Media Library</div>
          <div class="text-xs text-royal-200 mt-0.5">{{ $mediaCount }} file(s) · Upload, preview, and manage all your photos and videos</div>
        </div>
        <span class="ml-auto text-royal-300 text-lg">→</span>
      </div>
    </a>
  </div>

  <div class="mt-6 rounded-2xl bg-gold-50 border border-gold-200 p-5 text-sm text-royal-800">
    <strong>Getting started:</strong> Start with the <a href="{{ route('admin.visual-editor') }}" class="text-gold-700 underline font-semibold">Visual Editor</a> to get a bird's-eye view of your site sections. Use <a href="{{ route('admin.navigation.index') }}" class="text-gold-700 underline font-semibold">Navigation Menu</a> to control what links appear in your header.
  </div>
@endsection
