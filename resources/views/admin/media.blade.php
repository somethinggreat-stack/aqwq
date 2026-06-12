@extends('admin.layout')
@section('title', 'Media Library')

@push('styles')
<style>
  .media-drop-zone { border: 2px dashed #b683df; transition: border-color .2s, background .2s; }
  .media-drop-zone.drag-over { border-color: #cfa12a; background: #fbf6e6; }
</style>
@endpush

@section('content')

  {{-- ── Upload area ── --}}
  <div class="bg-white rounded-2xl border border-royal-100 p-6 mb-8">
    <h2 class="font-semibold text-royal-900 mb-1">Upload Files</h2>
    <p class="text-xs text-royal-500 mb-5">Images (JPG, PNG, GIF, WebP, SVG) and videos (MP4, WebM, MOV). Max 50 MB each.</p>

    <form method="POST" action="{{ route('admin.media.store') }}" enctype="multipart/form-data" id="uploadForm">
      @csrf

      <label id="dropZone"
             class="media-drop-zone flex flex-col items-center justify-center w-full h-36 rounded-xl cursor-pointer bg-royal-50/60 hover:bg-royal-100/60 mb-4">
        <span class="text-4xl mb-2">📁</span>
        <span class="text-sm font-medium text-royal-700">Click to choose files</span>
        <span class="text-xs text-royal-400 mt-1">or drag and drop here</span>
        <input type="file" name="files[]" multiple accept="image/*,video/*" required class="sr-only"
               id="fileInput" onchange="previewUploads(this)">
      </label>

      {{-- Preview grid --}}
      <div id="uploadPreviews" class="hidden grid-cols-4 sm:grid-cols-6 lg:grid-cols-8 gap-2 mb-4"></div>

      <div class="flex items-center gap-3">
        <button type="submit"
                class="bg-gold-500 hover:bg-gold-600 text-royal-950 font-bold rounded-xl px-5 py-2.5 transition">
          Upload selected files
        </button>
        <span id="fileCount" class="text-xs text-royal-500"></span>
      </div>
    </form>
  </div>

  {{-- ── Library grid ── --}}
  <div class="flex items-center justify-between mb-4">
    <h2 class="font-semibold text-royal-900">Your Files <span class="text-royal-400 font-normal text-sm">({{ $items->count() }})</span></h2>
    @if($items->count())
      <p class="text-xs text-royal-400">Click any image to copy its path for use in content fields.</p>
    @endif
  </div>

  @if($items->isEmpty())
    <div class="bg-white rounded-2xl border border-royal-100 py-16 text-center">
      <div class="text-5xl mb-3">🖼</div>
      <p class="text-royal-500 text-sm">No files yet. Upload your first image or video above.</p>
    </div>
  @else
    <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-4">
      @foreach ($items as $item)
        <div class="bg-white rounded-xl border border-royal-100 overflow-hidden group hover:border-gold-400 hover:shadow-md transition">
          {{-- Thumbnail --}}
          <div class="aspect-square bg-royal-50 overflow-hidden cursor-pointer"
               onclick="copyPath('{{ $item->path }}', this)"
               title="Click to copy path">
            @if (str_starts_with((string) $item->mime, 'video'))
              <div class="w-full h-full flex flex-col items-center justify-center text-royal-400">
                <span class="text-3xl">🎬</span>
                <span class="text-[10px] mt-1 px-1 text-center truncate w-full">{{ $item->name }}</span>
              </div>
            @else
              <img src="{{ asset($item->path) }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-200" alt="{{ $item->name }}" loading="lazy">
            @endif
          </div>

          {{-- Info + actions --}}
          <div class="p-2.5">
            <p class="text-[11px] text-royal-600 truncate font-medium" title="{{ $item->name }}">{{ $item->name }}</p>
            <p class="text-[10px] text-royal-400 mt-0.5">{{ number_format($item->size / 1024, 0) }} KB</p>
            <div class="flex items-center justify-between mt-2">
              <button type="button"
                      onclick="copyPath('{{ $item->path }}', this)"
                      class="text-[11px] text-royal-500 hover:text-gold-700 font-medium transition">
                Copy path
              </button>
              <form method="POST" action="{{ route('admin.media.destroy', $item) }}"
                    onsubmit="return confirm('Delete {{ addslashes($item->name) }}?\n\nMake sure this image is not used on your site before deleting.')">
                @csrf @method('DELETE')
                <button class="text-[11px] text-red-400 hover:text-red-600 font-medium transition">Delete</button>
              </form>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  @endif

  {{-- Copy feedback toast --}}
  <div id="copyToast"
       class="fixed bottom-6 right-6 bg-royal-900 text-white text-sm font-medium px-4 py-2.5 rounded-xl shadow-xl opacity-0 pointer-events-none transition-opacity duration-200 z-50">
    ✓ Path copied to clipboard
  </div>
@endsection

@push('scripts')
<script>
  // ── Drag-and-drop on drop zone ──────────────────────────────────────────
  const dropZone = document.getElementById('dropZone');
  const fileInput = document.getElementById('fileInput');

  ['dragenter', 'dragover'].forEach(evt => {
    dropZone.addEventListener(evt, e => { e.preventDefault(); dropZone.classList.add('drag-over'); });
  });
  ['dragleave', 'drop'].forEach(evt => {
    dropZone.addEventListener(evt, e => { e.preventDefault(); dropZone.classList.remove('drag-over'); });
  });
  dropZone.addEventListener('drop', e => {
    const dt = e.dataTransfer;
    if (dt.files.length) {
      fileInput.files = dt.files;
      previewUploads(fileInput);
    }
  });

  // ── Preview before upload ────────────────────────────────────────────────
  function previewUploads(input) {
    const grid = document.getElementById('uploadPreviews');
    const count = document.getElementById('fileCount');
    grid.innerHTML = '';
    if (!input.files.length) { grid.classList.add('hidden'); count.textContent = ''; return; }

    count.textContent = input.files.length + ' file' + (input.files.length > 1 ? 's' : '') + ' selected';
    grid.classList.remove('hidden');
    grid.classList.add('grid');

    [...input.files].forEach(file => {
      const wrap = document.createElement('div');
      wrap.className = 'aspect-square overflow-hidden rounded-lg border border-royal-200 bg-royal-50 relative';

      if (file.type.startsWith('image/')) {
        const reader = new FileReader();
        reader.onload = e => {
          const img = document.createElement('img');
          img.src = e.target.result;
          img.className = 'w-full h-full object-cover';
          wrap.appendChild(img);
        };
        reader.readAsDataURL(file);
      } else {
        const icon = document.createElement('div');
        icon.className = 'w-full h-full flex items-center justify-center text-2xl';
        icon.textContent = '🎬';
        wrap.appendChild(icon);
      }

      const name = document.createElement('div');
      name.className = 'absolute bottom-0 left-0 right-0 bg-black/50 text-white text-[9px] px-1 py-0.5 truncate';
      name.textContent = file.name;
      wrap.appendChild(name);
      grid.appendChild(wrap);
    });
  }

  // ── Copy path to clipboard ───────────────────────────────────────────────
  function copyPath(path, el) {
    navigator.clipboard.writeText(path).then(() => {
      const toast = document.getElementById('copyToast');
      toast.style.opacity = '1';
      setTimeout(() => { toast.style.opacity = '0'; }, 2000);
    });
  }
</script>
@endpush
