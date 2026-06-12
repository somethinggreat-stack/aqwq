@extends('admin.layout')
@section('title', 'Pages')

@section('content')
<div class="flex items-center justify-between mb-6">
  <p class="text-royal-600 text-sm">Create and manage custom pages for your website. Published pages are visible to visitors.</p>
  <a href="{{ route('admin.pages.create') }}"
     class="bg-gold-500 hover:bg-gold-600 text-royal-950 font-bold rounded-xl px-4 py-2.5 text-sm transition whitespace-nowrap">
    + New Page
  </a>
</div>

<div class="bg-white rounded-2xl border border-royal-100 overflow-hidden">
  @if($pages->isEmpty())
    <div class="px-8 py-16 text-center">
      <div class="text-5xl mb-3">📄</div>
      <h3 class="font-semibold text-royal-900 mb-1">No pages yet</h3>
      <p class="text-royal-500 text-sm mb-4">Create your first custom page to add it to your website.</p>
      <a href="{{ route('admin.pages.create') }}" class="bg-gold-500 hover:bg-gold-600 text-royal-950 font-bold rounded-xl px-5 py-2.5 text-sm transition">
        Create first page
      </a>
    </div>
  @else
    <table class="w-full text-sm">
      <thead class="bg-royal-50 border-b border-royal-100">
        <tr>
          <th class="px-5 py-3 text-left font-semibold text-royal-700">Page Title</th>
          <th class="px-5 py-3 text-left font-semibold text-royal-700">URL Slug</th>
          <th class="px-5 py-3 text-left font-semibold text-royal-700">Status</th>
          <th class="px-5 py-3 text-left font-semibold text-royal-700">Last Updated</th>
          <th class="px-5 py-3 text-right font-semibold text-royal-700">Actions</th>
        </tr>
      </thead>
      <tbody class="divide-y divide-royal-50">
        @foreach($pages as $page)
          <tr class="hover:bg-royal-50/40 transition">
            <td class="px-5 py-3.5">
              <div class="font-medium text-royal-900">{{ $page->title }}</div>
              @if($page->seo_title)
                <div class="text-xs text-royal-400 mt-0.5">SEO: {{ $page->seo_title }}</div>
              @endif
            </td>
            <td class="px-5 py-3.5">
              <div class="flex items-center gap-2">
                <code class="text-xs bg-royal-100 text-royal-700 px-2 py-0.5 rounded">/{{ $page->slug }}</code>
                @if($page->isPublished())
                  <a href="{{ url('/' . $page->slug) }}" target="_blank" class="text-xs text-gold-600 hover:underline">↗ View</a>
                @endif
              </div>
            </td>
            <td class="px-5 py-3.5">
              @if($page->isPublished())
                <span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full text-xs font-semibold bg-green-100 text-green-700">
                  <span class="w-1.5 h-1.5 rounded-full bg-green-500"></span> Published
                </span>
              @else
                <span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full text-xs font-semibold bg-amber-100 text-amber-700">
                  <span class="w-1.5 h-1.5 rounded-full bg-amber-400"></span> Draft
                </span>
              @endif
            </td>
            <td class="px-5 py-3.5 text-royal-500 text-xs">
              {{ $page->updated_at->diffForHumans() }}
            </td>
            <td class="px-5 py-3.5">
              <div class="flex items-center justify-end gap-2">
                <a href="{{ route('admin.pages.edit', $page) }}"
                   class="text-xs bg-royal-100 hover:bg-royal-200 text-royal-700 font-medium px-3 py-1.5 rounded-lg transition">Edit</a>

                @if($page->isPublished())
                  <form method="POST" action="{{ route('admin.pages.unpublish', $page) }}" class="inline">
                    @csrf @method('PATCH')
                    <button class="text-xs text-amber-600 hover:text-amber-800 font-medium px-2 py-1.5 rounded-lg transition">Unpublish</button>
                  </form>
                @else
                  <form method="POST" action="{{ route('admin.pages.publish', $page) }}" class="inline">
                    @csrf @method('PATCH')
                    <button class="text-xs text-green-600 hover:text-green-800 font-medium px-2 py-1.5 rounded-lg transition">Publish</button>
                  </form>
                @endif

                <form method="POST" action="{{ route('admin.pages.destroy', $page) }}" class="inline"
                      onsubmit="return confirm('Delete page &quot;{{ addslashes($page->title) }}&quot;? This cannot be undone.')">
                  @csrf @method('DELETE')
                  <button class="text-xs text-red-400 hover:text-red-600 font-medium px-2 py-1.5 rounded-lg transition">Delete</button>
                </form>
              </div>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  @endif
</div>

<div class="mt-6 rounded-xl bg-blue-50 border border-blue-100 p-4 text-sm text-blue-800">
  <strong>How pages work:</strong> Each published page gets its own URL on your website (e.g. <code>/about</code>, <code>/contact</code>). Draft pages are only visible in admin — not on the live site. Use the editor to add text, headings, images, and links.
</div>
@endsection
