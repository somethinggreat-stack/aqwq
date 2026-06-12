<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\NavItem;
use Illuminate\Http\Request;

class NavigationController extends Controller
{
    public function index()
    {
        $items = NavItem::orderBy('sort')->get();
        return view('admin.navigation.index', compact('items'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'label'     => 'required|string|max:100',
            'url'       => 'required|string|max:500',
            'target'    => 'in:_self,_blank',
            'is_active' => 'boolean',
        ]);

        $data['sort']      = NavItem::max('sort') + 1;
        $data['is_active'] = $request->boolean('is_active', true);
        $data['target']    = $data['target'] ?? '_self';

        NavItem::create($data);

        return back()->with('status', 'Menu item added.');
    }

    public function update(Request $request, NavItem $navItem)
    {
        $data = $request->validate([
            'label'     => 'required|string|max:100',
            'url'       => 'required|string|max:500',
            'target'    => 'in:_self,_blank',
            'is_active' => 'boolean',
        ]);

        $data['is_active'] = $request->boolean('is_active', true);
        $data['target']    = $data['target'] ?? '_self';

        $navItem->update($data);

        return back()->with('status', 'Menu item updated.');
    }

    public function destroy(NavItem $navItem)
    {
        $navItem->delete();
        return back()->with('status', 'Menu item removed.');
    }

    public function reorder(Request $request)
    {
        $ids = $request->input('ids', []);
        foreach ($ids as $sort => $id) {
            NavItem::where('id', $id)->update(['sort' => $sort]);
        }
        return response()->json(['ok' => true]);
    }

    public function toggle(NavItem $navItem)
    {
        $navItem->update(['is_active' => ! $navItem->is_active]);
        return response()->json(['is_active' => $navItem->is_active]);
    }
}
