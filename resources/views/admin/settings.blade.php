@extends('admin.layout')
@section('title', $groups[$group])

@section('content')
  <p class="text-royal-600 mb-6 text-sm">
    Edit the fields below and click <strong>Save changes</strong>. Updates appear on your live website immediately.
  </p>

  <form method="POST" action="{{ route('admin.settings.update', $group) }}" enctype="multipart/form-data" id="settingsForm" class="space-y-6">
    @csrf

    @forelse ($settings as $setting)
      @php $field = 'f_' . $setting->id; @endphp
      <div class="bg-white rounded-2xl border border-royal-100 p-5">
        <label class="block text-sm font-semibold text-royal-900 mb-1" for="{{ $field }}">
          {{ $setting->label ?? $setting->key }}
        </label>
        @if ($setting->help)
          <p class="text-xs text-royal-500 mb-3">{{ $setting->help }}</p>
        @endif

        @switch($setting->type)
          @case('textarea')
            <textarea id="{{ $field }}" name="{{ $field }}" rows="3"
              class="w-full rounded-lg border border-royal-200 px-3 py-2.5 focus:ring-2 focus:ring-gold-400 focus:border-gold-400 outline-none text-sm">{{ old($field, $setting->value) }}</textarea>
            @break

          @case('html')
            {{-- Quill WYSIWYG — no raw HTML visible to the client --}}
            <input type="hidden" id="{{ $field }}" name="{{ $field }}" value="{{ old($field, $setting->value) }}">
            <div class="rounded-lg border border-royal-200 overflow-hidden"
                 data-wysiwyg="{{ $field }}"></div>
            @break

          @case('boolean')
            <label class="inline-flex items-center gap-3 cursor-pointer">
              <input type="hidden" name="{{ $field }}" value="0">
              <div class="relative">
                <input type="checkbox" name="{{ $field }}" value="1"
                       {{ $setting->value ? 'checked' : '' }}
                       class="sr-only peer">
                <div class="w-11 h-6 bg-royal-200 rounded-full peer peer-checked:bg-gold-500 transition-colors"></div>
                <div class="absolute top-0.5 left-0.5 bg-white w-5 h-5 rounded-full transition-transform peer-checked:translate-x-5 shadow-sm"></div>
              </div>
              <span class="text-sm text-royal-700">{{ $setting->value ? 'On' : 'Off' }}</span>
            </label>
            @break

          @case('color')
            <div class="flex items-center gap-3">
              <input type="color" id="{{ $field }}" name="{{ $field }}"
                     value="{{ old($field, $setting->value ?: '#7a30bf') }}"
                     class="h-10 w-16 rounded-lg border border-royal-200 cursor-pointer p-0.5">
              <span class="text-sm text-royal-500 font-mono" id="{{ $field }}_hex">{{ old($field, $setting->value) }}</span>
            </div>
            <script>
              document.getElementById('{{ $field }}').addEventListener('input', function(){
                document.getElementById('{{ $field }}_hex').textContent = this.value;
              });
            </script>
            @break

          @case('image')
          @case('video')
            @php $isImg = $setting->type === 'image'; @endphp
            <div class="space-y-4" x-data="{ tab: '{{ $setting->value && !str_starts_with($setting->value ?? '', 'http') ? 'upload' : ($setting->value ? 'url' : 'upload') }}' }">

              {{-- Current preview --}}
              @if ($setting->value)
                <div class="flex items-start gap-3 p-3 bg-royal-50 rounded-lg border border-royal-100">
                  @if ($isImg)
                    <img src="{{ str_starts_with($setting->value, 'http') ? $setting->value : asset($setting->value) }}"
                         class="h-20 w-20 object-cover rounded-lg border border-royal-200 bg-white shrink-0" alt="current">
                  @else
                    <div class="flex items-center gap-2 text-royal-600">
                      <span class="text-2xl">🎬</span>
                      <span class="text-xs break-all">{{ $setting->value }}</span>
                    </div>
                  @endif
                  <p class="text-xs text-royal-500 mt-1">Current file. Upload a new one or paste a URL to replace it.</p>
                </div>
              @endif

              {{-- Tab switcher --}}
              <div class="flex gap-2">
                <button type="button" @click="tab='upload'"
                  :class="tab==='upload' ? 'bg-royal-700 text-white' : 'bg-royal-100 text-royal-600 hover:bg-royal-200'"
                  class="px-3 py-1.5 rounded-lg text-xs font-medium transition">Upload file</button>
                <button type="button" @click="tab='url'"
                  :class="tab==='url' ? 'bg-royal-700 text-white' : 'bg-royal-100 text-royal-600 hover:bg-royal-200'"
                  class="px-3 py-1.5 rounded-lg text-xs font-medium transition">Paste URL</button>
                <button type="button" @click="tab='library'"
                  :class="tab==='library' ? 'bg-royal-700 text-white' : 'bg-royal-100 text-royal-600 hover:bg-royal-200'"
                  class="px-3 py-1.5 rounded-lg text-xs font-medium transition">Media Library</button>
              </div>

              {{-- Upload --}}
              <div x-show="tab==='upload'" x-cloak>
                <label class="flex flex-col items-center justify-center w-full h-28 border-2 border-dashed border-royal-300 rounded-lg cursor-pointer hover:border-gold-400 bg-royal-50 hover:bg-gold-50 transition">
                  <span class="text-2xl mb-1">{{ $isImg ? '🖼' : '🎬' }}</span>
                  <span class="text-sm font-medium text-royal-600">Click to choose {{ $isImg ? 'image' : 'video' }}</span>
                  <span class="text-xs text-royal-400 mt-1">or drag & drop here</span>
                  <input type="file" name="{{ $field }}" accept="{{ $isImg ? 'image/*' : 'video/*' }}" class="sr-only"
                         onchange="previewFile(this, '{{ $field }}_preview')">
                </label>
                <img id="{{ $field }}_preview" src="#" alt="preview" class="mt-2 h-24 rounded-lg hidden">
              </div>

              {{-- URL --}}
              <div x-show="tab==='url'" x-cloak>
                <input type="text" name="{{ $field }}" value="{{ old($field, str_starts_with($setting->value ?? '', 'http') ? $setting->value : '') }}"
                       placeholder="https://res.cloudinary.com/… or uploads/file.jpg"
                       class="w-full rounded-lg border border-royal-200 px-3 py-2.5 focus:ring-2 focus:ring-gold-400 outline-none text-sm">
                <p class="text-xs text-royal-400 mt-1">Paste a full URL from Cloudinary, YouTube, or any public URL.</p>
              </div>

              {{-- Library --}}
              <div x-show="tab==='library'" x-cloak>
                @php $media = \App\Models\Media::orderByDesc('id')->limit(40)->get(); @endphp
                @if($media->count())
                  <div class="grid grid-cols-4 sm:grid-cols-6 gap-2 max-h-56 overflow-y-auto rounded-lg border border-royal-100 p-2 bg-royal-50">
                    @foreach($media as $m)
                      <button type="button"
                              onclick="pickMedia('{{ $m->path }}', '{{ $field }}')"
                              class="aspect-square overflow-hidden rounded-lg border-2 border-transparent hover:border-gold-400 focus:border-gold-500 outline-none transition">
                        @if(str_starts_with($m->mime ?? '', 'video'))
                          <div class="w-full h-full bg-royal-200 flex items-center justify-center text-xl">🎬</div>
                        @else
                          <img src="{{ asset($m->path) }}" class="w-full h-full object-cover" alt="{{ $m->name }}">
                        @endif
                      </button>
                    @endforeach
                  </div>
                  <p class="text-xs text-royal-400 mt-1">Click an image to select it. <a href="{{ route('admin.media.index') }}" class="text-gold-600 hover:underline" target="_blank">Manage library →</a></p>
                @else
                  <p class="text-sm text-royal-500">No media uploaded yet. <a href="{{ route('admin.media.index') }}" class="text-gold-600 hover:underline">Upload files →</a></p>
                @endif
                <input type="hidden" name="{{ $field }}" id="{{ $field }}_libpick" value="{{ old($field, !str_starts_with($setting->value ?? '', 'http') ? ($setting->value ?? '') : '') }}">
              </div>
            </div>
            @break

          @default
            <input type="{{ $setting->type === 'email' ? 'email' : ($setting->type === 'url' ? 'url' : 'text') }}"
                   id="{{ $field }}" name="{{ $field }}" value="{{ old($field, $setting->value) }}"
                   class="w-full rounded-lg border border-royal-200 px-3 py-2.5 focus:ring-2 focus:ring-gold-400 focus:border-gold-400 outline-none text-sm">
        @endswitch
      </div>
    @empty
      <p class="text-royal-500">No editable fields in this section yet.</p>
    @endforelse

    @if ($settings->isNotEmpty())
      <div class="sticky bottom-4">
        <button class="bg-gold-500 hover:bg-gold-600 text-royal-950 font-bold rounded-xl px-6 py-3 shadow-lg transition">
          Save changes
        </button>
      </div>
    @endif
  </form>
@endsection

@push('scripts')
<script>
  function previewFile(input, previewId) {
    var preview = document.getElementById(previewId);
    if (input.files && input.files[0]) {
      var reader = new FileReader();
      reader.onload = function(e) {
        preview.src = e.target.result;
        preview.classList.remove('hidden');
      };
      reader.readAsDataURL(input.files[0]);
    }
  }

  function pickMedia(path, fieldName) {
    // Set the hidden library pick input
    var libInput = document.getElementById(fieldName + '_libpick');
    if (libInput) libInput.value = path;
    // Also set any visible URL inputs with the same name
    document.querySelectorAll('[name="' + fieldName + '"]').forEach(function(el) {
      if (el.type !== 'file') el.value = path;
    });
    alert('Selected: ' + path + '\n\nClick "Save changes" to apply.');
  }
</script>
@endpush
