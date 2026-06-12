<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PageManagerController extends Controller
{
    public function index()
    {
        $pages = Page::orderBy('sort')->orderByDesc('updated_at')->get();
        return view('admin.pages.index', compact('pages'));
    }

    public function create()
    {
        return view('admin.pages.form', ['page' => null]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title'            => 'required|string|max:255',
            'slug'             => 'nullable|string|max:255|unique:pages,slug',
            'seo_title'        => 'nullable|string|max:255',
            'meta_description' => 'nullable|string|max:500',
            'content'          => 'nullable|string',
            'status'           => 'in:draft,published',
        ]);

        $data['slug']   = Str::slug($data['slug'] ?: $data['title']);
        $data['sort']   = Page::max('sort') + 1;
        $data['status'] = $data['status'] ?? 'draft';

        // Make slug unique if taken
        $original = $data['slug'];
        $i = 1;
        while (Page::where('slug', $data['slug'])->exists()) {
            $data['slug'] = $original . '-' . $i++;
        }

        Page::create($data);

        return redirect()->route('admin.pages.index')->with('status', 'Page created.');
    }

    public function edit(Page $page)
    {
        return view('admin.pages.form', compact('page'));
    }

    public function update(Request $request, Page $page)
    {
        $data = $request->validate([
            'title'            => 'required|string|max:255',
            'slug'             => 'nullable|string|max:255|unique:pages,slug,' . $page->id,
            'seo_title'        => 'nullable|string|max:255',
            'meta_description' => 'nullable|string|max:500',
            'content'          => 'nullable|string',
            'status'           => 'in:draft,published',
        ]);

        $data['slug']   = Str::slug($data['slug'] ?: $data['title']);
        $data['status'] = $data['status'] ?? 'draft';

        // Make slug unique if taken by another page
        $original = $data['slug'];
        $i = 1;
        while (Page::where('slug', $data['slug'])->where('id', '!=', $page->id)->exists()) {
            $data['slug'] = $original . '-' . $i++;
        }

        $page->update($data);

        return redirect()->route('admin.pages.index')->with('status', 'Page saved.');
    }

    public function destroy(Page $page)
    {
        $page->delete();
        return back()->with('status', 'Page deleted.');
    }

    public function publish(Page $page)
    {
        $page->update(['status' => 'published']);
        return back()->with('status', '"' . $page->title . '" is now published and live.');
    }

    public function unpublish(Page $page)
    {
        $page->update(['status' => 'draft']);
        return back()->with('status', '"' . $page->title . '" moved to draft.');
    }
}
