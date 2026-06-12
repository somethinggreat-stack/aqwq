@extends('admin.layout')
@section('title', 'Visual Editor')

@push('styles')
<style>
  .section-card { transition: box-shadow .15s, border-color .15s; }
  .section-card:hover { box-shadow: 0 4px 20px rgba(38,10,68,.08); }
  .section-card.hidden-section { opacity: .6; }
  .drag-handle { cursor: grab; }
  .drag-handle:active { cursor: grabbing; }
  .preview-frame { border: none; width: 100%; height: calc(100vh - 120px); border-radius: 12px; }
</style>
@endpush

@section('content')
<div class="mb-5">
  <p class="text-royal-600 text-sm">Click <strong>Edit</strong> on any section to change its content. Use the <strong>drag handle (⠿)</strong> to reorder sections on this panel. Toggle the switch to show or hide a section on your live website.</p>
</div>

<div class="grid xl:grid-cols-2 gap-6">

  {{-- ── Left: Section Cards ── --}}
  <div>
    <div class="flex items-center justify-between mb-3">
      <h2 class="font-bold text-royal-900">Website Sections</h2>
      <span class="text-xs text-royal-400">Drag to reorder • Toggle to hide</span>
    </div>

    <div id="sectionSortable" class="space-y-3">
      @foreach($sections as $key => $section)
        <div class="section-card bg-white rounded-2xl border border-royal-100 p-4 flex items-center gap-4 {{ !$section['visible'] ? 'hidden-section' : '' }}"
             data-key="{{ $key }}">

          {{-- Drag handle --}}
          <span class="drag-handle text-royal-300 text-xl select-none shrink-0" title="Drag to reorder">⠿</span>

          {{-- Icon --}}
          <span class="text-2xl shrink-0">{{ $section['icon'] }}</span>

          {{-- Info --}}
          <div class="flex-1 min-w-0">
            <div class="font-semibold text-royal-900 text-sm">{{ $section['title'] }}</div>
            <div class="text-xs text-royal-400 mt-0.5 truncate">{{ $section['desc'] }}</div>
          </div>

          {{-- Visibility toggle --}}
          <div class="shrink-0 flex items-center gap-2">
            <span class="text-xs text-royal-400 {{ $section['visible'] ? 'text-green-600' : '' }}">
              {{ $section['visible'] ? 'Visible' : 'Hidden' }}
            </span>
            <button type="button"
                    onclick="toggleSection(this, '{{ $key }}')"
                    data-on="{{ $section['visible'] ? '1' : '0' }}"
                    class="relative inline-flex h-5 w-9 items-center rounded-full transition-colors {{ $section['visible'] ? 'bg-gold-500' : 'bg-royal-200' }}"
                    title="{{ $section['visible'] ? 'Click to hide this section' : 'Click to show this section' }}">
              <span class="inline-block h-3.5 w-3.5 transform rounded-full bg-white shadow-sm transition-transform {{ $section['visible'] ? 'translate-x-4' : 'translate-x-0.5' }}"></span>
            </button>
          </div>

          {{-- Edit button --}}
          <a href="{{ route('admin.settings.edit', $section['group']) }}{{ isset($section['anchor']) ? '' : '' }}"
             class="shrink-0 bg-royal-800 hover:bg-royal-900 text-white font-semibold text-xs px-3 py-2 rounded-lg transition whitespace-nowrap">
            Edit →
          </a>
        </div>
      @endforeach
    </div>

    <div class="mt-4 rounded-xl bg-amber-50 border border-amber-100 p-4 text-xs text-amber-800">
      <strong>Note:</strong> "Show/Hide" changes are live on your website immediately. Reordering sections here changes the admin display order — to change the order on your actual website, edit the page template or contact your developer.
    </div>
  </div>

  {{-- ── Right: Live Preview ── --}}
  <div class="hidden xl:block">
    <div class="flex items-center justify-between mb-3">
      <h2 class="font-bold text-royal-900">Live Preview</h2>
      <div class="flex items-center gap-2">
        <a href="{{ url('/') }}" target="_blank"
           class="text-xs text-gold-600 hover:underline">↗ Open full site</a>
        <button onclick="document.getElementById('previewFrame').src += ''"
                class="text-xs bg-royal-100 hover:bg-royal-200 text-royal-700 px-2.5 py-1.5 rounded-lg">
          ↻ Refresh
        </button>
      </div>
    </div>

    <div class="rounded-2xl overflow-hidden border border-royal-200 bg-white shadow-inner">
      {{-- Browser chrome mockup --}}
      <div class="px-3 py-2.5 bg-royal-50 border-b border-royal-100 flex items-center gap-2">
        <div class="flex gap-1.5">
          <span class="w-3 h-3 rounded-full bg-red-300"></span>
          <span class="w-3 h-3 rounded-full bg-amber-300"></span>
          <span class="w-3 h-3 rounded-full bg-green-300"></span>
        </div>
        <div class="flex-1 bg-white rounded-md px-3 py-1 text-xs text-royal-400 font-mono border border-royal-100">
          {{ url('/') }}
        </div>
      </div>
      <iframe id="previewFrame" src="{{ url('/') }}" class="preview-frame" title="Website preview" loading="lazy"></iframe>
    </div>

    <p class="text-xs text-royal-400 mt-2 text-center">Preview refreshes automatically after you save content changes.</p>
  </div>

</div>

{{-- ── Quick access cards ── --}}
<div class="mt-8">
  <h2 class="font-bold text-royal-900 mb-3">Quick Edit Shortcuts</h2>
  <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-3">
    <a href="{{ route('admin.navigation.index') }}"
       class="bg-royal-900 text-white rounded-xl p-4 hover:bg-royal-800 transition">
      <div class="text-xl mb-1">☰</div>
      <div class="font-semibold text-sm">Navigation Menu</div>
      <div class="text-xs text-royal-300 mt-0.5">Add, rename, reorder links</div>
    </a>
    <a href="{{ route('admin.pages.index') }}"
       class="bg-white border border-royal-100 rounded-xl p-4 hover:border-gold-400 hover:shadow-md transition">
      <div class="text-xl mb-1">📄</div>
      <div class="font-semibold text-sm text-royal-900">Custom Pages</div>
      <div class="text-xs text-royal-400 mt-0.5">Create & manage pages</div>
    </a>
    <a href="{{ route('admin.media.index') }}"
       class="bg-white border border-royal-100 rounded-xl p-4 hover:border-gold-400 hover:shadow-md transition">
      <div class="text-xl mb-1">🖼</div>
      <div class="font-semibold text-sm text-royal-900">Media Library</div>
      <div class="text-xs text-royal-400 mt-0.5">Upload & manage files</div>
    </a>
    <a href="{{ route('admin.settings.edit', 'theme') }}"
       class="bg-white border border-royal-100 rounded-xl p-4 hover:border-gold-400 hover:shadow-md transition">
      <div class="text-xl mb-1">🎨</div>
      <div class="font-semibold text-sm text-royal-900">Brand Colors</div>
      <div class="text-xs text-royal-400 mt-0.5">Change your color scheme</div>
    </a>
  </div>
</div>
@endsection

@push('scripts')
<script>
  // ── Drag-to-reorder section cards ────────────────────────────────────────
  const sortEl = document.getElementById('sectionSortable');
  if (sortEl) {
    Sortable.create(sortEl, {
      animation: 150,
      handle: '.drag-handle',
      ghostClass: 'sortable-ghost',
      onEnd: function () {
        const keys = [...sortEl.querySelectorAll('[data-key]')].map(el => el.dataset.key);
        postReorder('{{ route('admin.visual-editor.reorder') }}', keys);
      }
    });
  }

  // ── Toggle section visibility ─────────────────────────────────────────────
  function toggleSection(btn, key) {
    const isOn = btn.dataset.on === '1';
    const newState = !isOn;
    btn.dataset.on = newState ? '1' : '0';

    // Update toggle appearance
    btn.classList.toggle('bg-gold-500', newState);
    btn.classList.toggle('bg-royal-200', !newState);
    const thumb = btn.querySelector('span');
    thumb.classList.toggle('translate-x-4', newState);
    thumb.classList.toggle('translate-x-0.5', !newState);

    // Update parent card opacity
    const card = btn.closest('[data-key]');
    card.classList.toggle('hidden-section', !newState);

    // Update label
    const label = btn.previousElementSibling;
    if (label) {
      label.textContent = newState ? 'Visible' : 'Hidden';
      label.classList.toggle('text-green-600', newState);
    }

    // Save to server
    fetch('{{ route('admin.visual-editor.toggle') }}', {
      method: 'POST',
      headers: { 'Content-Type': 'application/json', 'X-CSRF-TOKEN': window.csrfToken },
      body: JSON.stringify({ key: key, visible: newState })
    });

    // Refresh iframe after a moment
    setTimeout(function() {
      var frame = document.getElementById('previewFrame');
      if (frame) frame.contentWindow.location.reload();
    }, 800);
  }
</script>
@endpush
