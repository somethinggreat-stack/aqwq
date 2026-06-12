@extends('admin.layout')
@section('title', 'Navigation Menu')

@section('content')
<div class="mb-6">
  <p class="text-royal-600 text-sm">Drag items to reorder them. Changes to order save automatically. Click <strong>Edit</strong> to change a link's label or URL. Toggle the switch to show or hide a link from your website.</p>
</div>

{{-- ── Current nav items (drag-to-reorder) ── --}}
<div class="bg-white rounded-2xl border border-royal-100 overflow-hidden mb-8">
  <div class="px-5 py-4 border-b border-royal-100 flex items-center justify-between">
    <h2 class="font-semibold text-royal-900">Current Menu Items</h2>
    <span class="text-xs text-royal-400">Drag rows to reorder</span>
  </div>

  @if($items->isEmpty())
    <div class="px-5 py-10 text-center text-royal-400 text-sm">No menu items yet. Add one below.</div>
  @else
    <ul id="navSortable" class="divide-y divide-royal-100">
      @foreach($items as $item)
        <li class="flex items-center gap-3 px-5 py-3 hover:bg-royal-50/50 transition" data-id="{{ $item->id }}">
          {{-- Drag handle --}}
          <span class="cursor-grab text-royal-300 text-lg select-none" title="Drag to reorder">⠿</span>

          {{-- Visibility toggle --}}
          <form method="POST" action="{{ route('admin.navigation.toggle', $item) }}" class="shrink-0">
            @csrf @method('PATCH')
            <button type="submit" title="{{ $item->is_active ? 'Visible — click to hide' : 'Hidden — click to show' }}"
                    class="relative inline-flex h-5 w-9 items-center rounded-full transition-colors {{ $item->is_active ? 'bg-gold-500' : 'bg-royal-200' }}">
              <span class="inline-block h-3.5 w-3.5 transform rounded-full bg-white shadow-sm transition-transform {{ $item->is_active ? 'translate-x-4' : 'translate-x-0.5' }}"></span>
            </button>
          </form>

          {{-- Label + URL --}}
          <div class="flex-1 min-w-0">
            <div class="font-medium text-royal-900 text-sm">{{ $item->label }}</div>
            <div class="text-xs text-royal-400 truncate">{{ $item->url }}
              @if($item->target === '_blank') <span class="ml-1 text-royal-300">(opens in new tab)</span>@endif
            </div>
          </div>

          {{-- Status badge --}}
          <span class="shrink-0 px-2 py-0.5 rounded-full text-[11px] font-semibold {{ $item->is_active ? 'bg-green-100 text-green-700' : 'bg-royal-100 text-royal-400' }}">
            {{ $item->is_active ? 'Visible' : 'Hidden' }}
          </span>

          {{-- Edit button (opens inline form) --}}
          <button type="button"
                  onclick="openEdit({{ $item->id }}, '{{ addslashes($item->label) }}', '{{ addslashes($item->url) }}', '{{ $item->target }}', {{ $item->is_active ? 'true' : 'false' }})"
                  class="shrink-0 text-xs bg-royal-100 hover:bg-royal-200 text-royal-700 font-medium px-3 py-1.5 rounded-lg transition">
            Edit
          </button>

          {{-- Delete --}}
          <form method="POST" action="{{ route('admin.navigation.destroy', $item) }}"
                onsubmit="return confirm('Remove this menu item?')">
            @csrf @method('DELETE')
            <button class="shrink-0 text-xs text-red-400 hover:text-red-600 font-medium px-2 py-1.5 rounded-lg transition">Remove</button>
          </form>
        </li>
      @endforeach
    </ul>
  @endif
</div>

{{-- ── Edit modal (shown when Edit is clicked) ── --}}
<div id="editModal" class="hidden fixed inset-0 bg-black/40 z-50 flex items-center justify-center p-4" onclick="if(event.target===this)closeEdit()">
  <div class="bg-white rounded-2xl shadow-2xl w-full max-w-md p-6">
    <h3 class="font-bold text-royal-900 mb-4">Edit Menu Item</h3>
    <form id="editForm" method="POST" class="space-y-4">
      @csrf @method('PUT')
      <div>
        <label class="block text-sm font-semibold text-royal-900 mb-1">Label <span class="text-red-400">*</span></label>
        <input type="text" name="label" id="editLabel" required
               class="w-full rounded-lg border border-royal-200 px-3 py-2.5 focus:ring-2 focus:ring-gold-400 outline-none text-sm"
               placeholder="e.g. Services">
      </div>
      <div>
        <label class="block text-sm font-semibold text-royal-900 mb-1">URL / Link <span class="text-red-400">*</span></label>
        <input type="text" name="url" id="editUrl" required
               class="w-full rounded-lg border border-royal-200 px-3 py-2.5 focus:ring-2 focus:ring-gold-400 outline-none text-sm"
               placeholder="e.g. #services or /funding or https://…">
        <p class="text-xs text-royal-400 mt-1">Use <code>#services</code> for page anchors, <code>/funding</code> for internal pages, or a full URL for external links.</p>
      </div>
      <div class="flex items-center justify-between gap-4">
        <label class="flex items-center gap-2 text-sm">
          <input type="hidden" name="target" value="_self">
          <input type="checkbox" name="target" value="_blank" id="editTarget" class="rounded w-4 h-4 border-royal-300">
          Open in new tab
        </label>
        <label class="flex items-center gap-2 text-sm">
          <input type="hidden" name="is_active" value="0">
          <input type="checkbox" name="is_active" value="1" id="editActive" class="rounded w-4 h-4 border-royal-300">
          Visible in menu
        </label>
      </div>
      <div class="flex gap-3 pt-2">
        <button type="submit" class="flex-1 bg-gold-500 hover:bg-gold-600 text-royal-950 font-bold rounded-xl py-2.5 transition">Save changes</button>
        <button type="button" onclick="closeEdit()" class="flex-1 border border-royal-200 text-royal-700 rounded-xl py-2.5 hover:bg-royal-50 transition">Cancel</button>
      </div>
    </form>
  </div>
</div>

{{-- ── Add new item ── --}}
<div class="bg-white rounded-2xl border border-royal-100 p-5">
  <h2 class="font-semibold text-royal-900 mb-4">Add New Menu Item</h2>
  <form method="POST" action="{{ route('admin.navigation.store') }}" class="space-y-4">
    @csrf
    <div class="grid sm:grid-cols-2 gap-4">
      <div>
        <label class="block text-sm font-semibold text-royal-900 mb-1">Label <span class="text-red-400">*</span></label>
        <input type="text" name="label" required value="{{ old('label') }}"
               class="w-full rounded-lg border border-royal-200 px-3 py-2.5 focus:ring-2 focus:ring-gold-400 outline-none text-sm"
               placeholder="e.g. About Us">
      </div>
      <div>
        <label class="block text-sm font-semibold text-royal-900 mb-1">URL / Link <span class="text-red-400">*</span></label>
        <input type="text" name="url" required value="{{ old('url') }}"
               class="w-full rounded-lg border border-royal-200 px-3 py-2.5 focus:ring-2 focus:ring-gold-400 outline-none text-sm"
               placeholder="e.g. #services or /funding">
      </div>
    </div>
    <div class="flex flex-wrap gap-6">
      <label class="flex items-center gap-2 text-sm cursor-pointer">
        <input type="hidden" name="target" value="_self">
        <input type="checkbox" name="target" value="_blank" class="rounded w-4 h-4 border-royal-300">
        Open in new tab (for external links)
      </label>
      <label class="flex items-center gap-2 text-sm cursor-pointer">
        <input type="hidden" name="is_active" value="1">
        <span class="text-royal-600">Visible in menu — on by default</span>
      </label>
    </div>
    <button class="bg-royal-800 hover:bg-royal-900 text-white font-bold rounded-xl px-5 py-2.5 transition">
      Add to menu
    </button>
  </form>
</div>

<div class="mt-6 rounded-xl bg-blue-50 border border-blue-100 p-4 text-sm text-blue-800">
  <strong>Tip:</strong> After adding navigation items here, go to <a href="{{ route('admin.settings.edit', 'home_extra') }}" class="underline">Home · Other Sections</a> to update the nav link labels that are also editable there — or leave these items here and the site will use them automatically.
</div>
@endsection

@push('scripts')
<script>
  // ── Drag-to-reorder ──────────────────────────────────────────────────────
  const sortableEl = document.getElementById('navSortable');
  if (sortableEl) {
    Sortable.create(sortableEl, {
      animation: 150,
      handle: '[title="Drag to reorder"]',
      ghostClass: 'sortable-ghost',
      onEnd: function () {
        const ids = [...sortableEl.querySelectorAll('[data-id]')].map(el => el.dataset.id);
        postReorder('{{ route('admin.navigation.reorder') }}', ids);
      }
    });
  }

  // ── Edit modal ────────────────────────────────────────────────────────────
  function openEdit(id, label, url, target, isActive) {
    document.getElementById('editForm').action = '/admin/navigation/' + id;
    document.getElementById('editLabel').value = label;
    document.getElementById('editUrl').value = url;
    document.getElementById('editTarget').checked = (target === '_blank');
    document.getElementById('editActive').checked = isActive;
    document.getElementById('editModal').classList.remove('hidden');
  }

  function closeEdit() {
    document.getElementById('editModal').classList.add('hidden');
  }

  document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') closeEdit();
  });
</script>
@endpush
