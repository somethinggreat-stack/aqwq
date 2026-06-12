@extends('admin.layout')
@section('title', $page ? 'Edit Page: ' . $page->title : 'New Page')

@section('content')
<div class="mb-4">
  <a href="{{ route('admin.pages.index') }}" class="text-sm text-royal-500 hover:text-royal-800">← Back to Pages</a>
</div>

<form method="POST"
      action="{{ $page ? route('admin.pages.update', $page) : route('admin.pages.store') }}"
      id="pageForm"
      class="space-y-6">
  @csrf
  @if($page) @method('PUT') @endif

  {{-- Main content area --}}
  <div class="grid lg:grid-cols-3 gap-6">

    {{-- Left: Title + Content --}}
    <div class="lg:col-span-2 space-y-5">
      <div class="bg-white rounded-2xl border border-royal-100 p-5">
        <label class="block text-sm font-semibold text-royal-900 mb-1">Page Title <span class="text-red-400">*</span></label>
        <input type="text" name="title" required value="{{ old('title', $page?->title) }}"
               id="pageTitle"
               class="w-full rounded-lg border border-royal-200 px-3 py-2.5 focus:ring-2 focus:ring-gold-400 outline-none text-sm"
               placeholder="e.g. About Us">
      </div>

      <div class="bg-white rounded-2xl border border-royal-100 p-5">
        <label class="block text-sm font-semibold text-royal-900 mb-2">Page Content</label>
        <p class="text-xs text-royal-500 mb-3">Use the toolbar to format text. You can add headings, bullet lists, links, bold text, and more — no code required.</p>

        <input type="hidden" name="content" id="pageContent" value="{{ old('content', $page?->content) }}">
        <div data-wysiwyg="content" style="min-height: 400px;"></div>
      </div>
    </div>

    {{-- Right: Settings panel --}}
    <div class="space-y-5">

      {{-- Publish status --}}
      <div class="bg-white rounded-2xl border border-royal-100 p-5">
        <h3 class="font-semibold text-royal-900 mb-3 text-sm">Publish Settings</h3>

        <label class="block text-sm font-medium text-royal-700 mb-2">Status</label>
        <div class="space-y-2">
          <label class="flex items-center gap-2 cursor-pointer">
            <input type="radio" name="status" value="draft"
                   {{ old('status', $page?->status ?? 'draft') === 'draft' ? 'checked' : '' }}
                   class="w-4 h-4 border-royal-300">
            <span class="text-sm">
              <span class="font-medium">Draft</span>
              <span class="text-royal-400 block text-xs">Not visible on the live site</span>
            </span>
          </label>
          <label class="flex items-center gap-2 cursor-pointer">
            <input type="radio" name="status" value="published"
                   {{ old('status', $page?->status) === 'published' ? 'checked' : '' }}
                   class="w-4 h-4 border-royal-300">
            <span class="text-sm">
              <span class="font-medium text-green-700">Published</span>
              <span class="text-royal-400 block text-xs">Visible to all visitors</span>
            </span>
          </label>
        </div>

        <div class="mt-4 flex flex-col gap-2">
          <button type="submit" class="w-full bg-gold-500 hover:bg-gold-600 text-royal-950 font-bold rounded-xl py-2.5 text-sm transition">
            {{ $page ? 'Save changes' : 'Create page' }}
          </button>
          @if($page)
            <a href="{{ route('admin.pages.index') }}" class="w-full text-center border border-royal-200 text-royal-700 rounded-xl py-2.5 text-sm hover:bg-royal-50 transition">
              Cancel
            </a>
          @endif
        </div>
      </div>

      {{-- URL slug --}}
      <div class="bg-white rounded-2xl border border-royal-100 p-5">
        <label class="block text-sm font-semibold text-royal-900 mb-1">Page URL (Slug)</label>
        <p class="text-xs text-royal-500 mb-2">The web address for this page. Leave blank to auto-generate from the title.</p>
        <div class="flex items-center gap-1">
          <span class="text-xs text-royal-400 whitespace-nowrap">{{ url('/') }}/</span>
          <input type="text" name="slug" id="pageSlug" value="{{ old('slug', $page?->slug) }}"
                 class="flex-1 min-w-0 rounded-lg border border-royal-200 px-2 py-2 focus:ring-2 focus:ring-gold-400 outline-none text-xs font-mono"
                 placeholder="about-us">
        </div>
        @if($page?->isPublished())
          <a href="{{ url('/' . $page->slug) }}" target="_blank" class="mt-1 text-xs text-gold-600 hover:underline inline-block">↗ View live page</a>
        @endif
      </div>

      {{-- SEO --}}
      <div class="bg-white rounded-2xl border border-royal-100 p-5">
        <h3 class="font-semibold text-royal-900 mb-3 text-sm">SEO Settings</h3>
        <div class="space-y-3">
          <div>
            <label class="block text-xs font-medium text-royal-700 mb-1">SEO Title</label>
            <input type="text" name="seo_title" value="{{ old('seo_title', $page?->seo_title) }}"
                   class="w-full rounded-lg border border-royal-200 px-3 py-2 focus:ring-2 focus:ring-gold-400 outline-none text-xs"
                   placeholder="Appears in browser tab & Google">
          </div>
          <div>
            <label class="block text-xs font-medium text-royal-700 mb-1">Meta Description</label>
            <textarea name="meta_description" rows="3"
                      class="w-full rounded-lg border border-royal-200 px-3 py-2 focus:ring-2 focus:ring-gold-400 outline-none text-xs resize-none"
                      placeholder="Short description shown in Google search results (150 chars ideal)">{{ old('meta_description', $page?->meta_description) }}</textarea>
          </div>
        </div>
      </div>

    </div>
  </div>
</form>
@endsection

@push('scripts')
<script>
  // Auto-generate slug from title
  var slugManuallyEdited = {{ $page?->slug ? 'true' : 'false' }};
  document.getElementById('pageSlug').addEventListener('input', function() { slugManuallyEdited = true; });
  document.getElementById('pageTitle').addEventListener('input', function() {
    if (slugManuallyEdited) return;
    var slug = this.value.toLowerCase().replace(/[^a-z0-9\s-]/g, '').trim().replace(/\s+/g, '-');
    document.getElementById('pageSlug').value = slug;
  });
</script>
@endpush
