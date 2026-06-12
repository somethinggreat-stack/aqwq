<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="csrf-token" content="{{ csrf_token() }}" />
  <title>@yield('title', 'Admin') · {{ config('app.name') }} Admin</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: { extend: {
        colors: { royal: {50:'#f5f0fb',100:'#ead8f5',200:'#d3b1ec',300:'#b683df',400:'#9554cf',500:'#7a30bf',600:'#6322a3',700:'#4c1980',800:'#3a1463',900:'#260a44',950:'#1a0633'},
                  gold:{50:'#fbf6e6',100:'#f5e7b8',200:'#ecd17d',300:'#dfb84a',400:'#cfa12a',500:'#b8860b',600:'#9a6f08',700:'#7a5707'} },
        fontFamily: { sans: ['Inter','system-ui','sans-serif'] }
      }}
    }
  </script>

  {{-- Quill WYSIWYG Editor --}}
  <link href="https://cdn.quilljs.com/1.3.7/quill.snow.css" rel="stylesheet">

  {{-- Extra admin styles --}}
  <style>
    .ql-editor { min-height: 140px; font-size: 14px; font-family: Inter, system-ui, sans-serif; }
    .ql-toolbar { border-radius: 8px 8px 0 0 !important; background: #f9f7fd; }
    .ql-container { border-radius: 0 0 8px 8px !important; }
    .ql-toolbar, .ql-container { border-color: #d3b1ec !important; }
    .ql-editor:focus { outline: none; }
    .sortable-ghost { opacity: .3; }
    .sortable-chosen { cursor: grabbing; }
    [x-cloak] { display: none !important; }

    /* Section visibility toggle */
    .toggle-switch { position:relative; display:inline-flex; align-items:center; cursor:pointer; }
    .toggle-switch input { opacity:0; width:0; height:0; position:absolute; }
    .toggle-track { width:40px; height:22px; background:#d1d5db; border-radius:999px; transition:.2s; }
    .toggle-switch input:checked ~ .toggle-track { background:#b8860b; }
    .toggle-thumb { position:absolute; left:3px; top:3px; width:16px; height:16px; border-radius:50%; background:white; transition:.2s; pointer-events:none; }
    .toggle-switch input:checked ~ .toggle-track ~ .toggle-thumb,
    .toggle-switch input:checked + .toggle-track + .toggle-thumb { left:21px; }
  </style>

  @stack('styles')
</head>
<body class="font-sans bg-royal-50/40 text-royal-900 antialiased min-h-screen" x-data>
  <div class="flex min-h-screen">
    {{-- Sidebar --}}
    <aside class="w-64 shrink-0 bg-royal-900 text-royal-100 flex flex-col overflow-y-auto">
      <div class="px-5 py-5 border-b border-white/10 shrink-0">
        <a href="{{ route('admin.dashboard') }}" class="flex items-center gap-2">
          <span class="text-lg font-bold text-white">{{ config('app.name') }}</span>
        </a>
        <p class="text-xs text-royal-300 mt-1">Owner Control Panel</p>
      </div>

      <nav class="flex-1 py-4 px-3 space-y-1 text-sm">
        <a href="{{ route('admin.dashboard') }}"
           class="flex items-center gap-2 px-3 py-2 rounded-lg {{ request()->routeIs('admin.dashboard') ? 'bg-gold-500 text-royal-950 font-semibold' : 'hover:bg-white/10' }}">
          <span class="text-base leading-none">◉</span> Dashboard
        </a>

        {{-- ── Website Builder ── --}}
        <p class="px-3 pt-4 pb-1 text-[11px] uppercase tracking-wider text-royal-400">Website Builder</p>

        <a href="{{ route('admin.visual-editor') }}"
           class="flex items-center gap-2 px-3 py-2 rounded-lg {{ request()->routeIs('admin.visual-editor*') ? 'bg-gold-500 text-royal-950 font-semibold' : 'hover:bg-white/10' }}">
          <span>🎨</span> Visual Editor
        </a>

        <a href="{{ route('admin.navigation.index') }}"
           class="flex items-center gap-2 px-3 py-2 rounded-lg {{ request()->routeIs('admin.navigation.*') ? 'bg-gold-500 text-royal-950 font-semibold' : 'hover:bg-white/10' }}">
          <span>☰</span> Navigation Menu
        </a>

        <a href="{{ route('admin.pages.index') }}"
           class="flex items-center gap-2 px-3 py-2 rounded-lg {{ request()->routeIs('admin.pages.*') ? 'bg-gold-500 text-royal-950 font-semibold' : 'hover:bg-white/10' }}">
          <span>📄</span> Pages
        </a>

        {{-- ── Edit Content ── --}}
        <p class="px-3 pt-4 pb-1 text-[11px] uppercase tracking-wider text-royal-400">Edit Content</p>
        @foreach (\App\Models\Setting::GROUPS as $key => $label)
          <a href="{{ route('admin.settings.edit', $key) }}"
             class="block px-3 py-2 rounded-lg {{ request()->routeIs('admin.settings.edit') && request()->route('group') === $key ? 'bg-gold-500 text-royal-950 font-semibold' : 'hover:bg-white/10' }}">
            {{ $label }}
          </a>
        @endforeach

        {{-- ── Library ── --}}
        <p class="px-3 pt-4 pb-1 text-[11px] uppercase tracking-wider text-royal-400">Library</p>
        <a href="{{ route('admin.media.index') }}"
           class="flex items-center gap-2 px-3 py-2 rounded-lg {{ request()->routeIs('admin.media.*') ? 'bg-gold-500 text-royal-950 font-semibold' : 'hover:bg-white/10' }}">
          <span>🖼</span> Media Library
        </a>
      </nav>

      <div class="px-3 py-4 border-t border-white/10 space-y-2 shrink-0">
        <a href="{{ url('/') }}" target="_blank" class="block px-3 py-2 rounded-lg text-sm hover:bg-white/10">↗ View website</a>
        <form method="POST" action="{{ route('admin.logout') }}">
          @csrf
          <button class="w-full text-left px-3 py-2 rounded-lg text-sm hover:bg-white/10">⏻ Log out</button>
        </form>
      </div>
    </aside>

    {{-- Main --}}
    <main class="flex-1 min-w-0">
      <header class="bg-white border-b border-royal-100 px-8 py-4 flex items-center justify-between sticky top-0 z-10">
        <h1 class="text-lg font-bold">@yield('title', 'Dashboard')</h1>
        <div class="flex items-center gap-4">
          <a href="{{ route('admin.visual-editor') }}" class="hidden sm:inline-flex items-center gap-1.5 text-xs bg-gold-500 hover:bg-gold-600 text-royal-950 font-semibold px-3 py-1.5 rounded-lg transition">
            🎨 Visual Editor
          </a>
          <span class="text-sm text-royal-500">{{ auth()->user()->name ?? 'Owner' }}</span>
        </div>
      </header>

      <div class="p-8 max-w-5xl">
        @if (session('status'))
          <div class="mb-6 rounded-xl bg-green-50 border border-green-200 text-green-800 px-4 py-3 text-sm">
            ✓ {{ session('status') }}
          </div>
        @endif
        @if ($errors->any())
          <div class="mb-6 rounded-xl bg-red-50 border border-red-200 text-red-800 px-4 py-3 text-sm">
            @foreach ($errors->all() as $error)<div>{{ $error }}</div>@endforeach
          </div>
        @endif

        @yield('content')
      </div>
    </main>
  </div>

  {{-- SortableJS --}}
  <script src="https://cdn.jsdelivr.net/npm/sortablejs@1.15.3/Sortable.min.js"></script>
  {{-- Alpine.js --}}
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.14.3/dist/cdn.min.js"></script>
  {{-- Quill --}}
  <script src="https://cdn.quilljs.com/1.3.7/quill.min.js"></script>

  <script>
    // ── WYSIWYG: init Quill on every [data-wysiwyg] element ──────────────
    document.addEventListener('DOMContentLoaded', function () {
      document.querySelectorAll('[data-wysiwyg]').forEach(function (wrapper) {
        var targetName = wrapper.dataset.wysiwyg;
        var hiddenInput = document.querySelector('[name="' + targetName + '"]');
        if (!hiddenInput) return;

        var editorDiv = document.createElement('div');
        editorDiv.innerHTML = hiddenInput.value || '';
        wrapper.appendChild(editorDiv);

        var quill = new Quill(editorDiv, {
          theme: 'snow',
          modules: {
            toolbar: [
              [{ header: [1, 2, 3, false] }],
              ['bold', 'italic', 'underline', 'strike'],
              ['blockquote'],
              [{ list: 'ordered' }, { list: 'bullet' }],
              ['link'],
              [{ align: [] }],
              ['clean']
            ]
          }
        });

        // Keep hidden input in sync
        quill.on('text-change', function () {
          hiddenInput.value = quill.root.innerHTML;
        });

        // On form submit ensure value is synced
        var form = hiddenInput.closest('form');
        if (form) {
          form.addEventListener('submit', function () {
            hiddenInput.value = quill.root.innerHTML;
          });
        }
      });

      // ── CSRF helper for fetch requests ──
      window.csrfToken = document.querySelector('meta[name="csrf-token"]').content;
    });

    // ── Reorder helper: POST sort array to endpoint ───────────────────────
    function postReorder(url, ids) {
      fetch(url, {
        method: 'POST',
        headers: { 'Content-Type': 'application/json', 'X-CSRF-TOKEN': window.csrfToken },
        body: JSON.stringify({ ids: ids })
      });
    }
  </script>

  @stack('scripts')
</body>
</html>
