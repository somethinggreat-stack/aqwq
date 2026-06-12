<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class PageController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }

    public function funding()
    {
        return view('pages.funding');
    }

    public function intake(Request $request)
    {
        return view('pages.intake', [
            'prefill' => [
                'fullName' => (string) $request->query('name', ''),
                'email'    => (string) $request->query('email', ''),
                'phone'    => (string) $request->query('phone', ''),
                'package'  => (string) $request->query('package', ''),
            ],
        ]);
    }

    public function onboarding(Request $request)
    {
        return view('pages.onboarding', [
            'prefill' => [
                'fullName' => (string) $request->query('name', ''),
                'email'    => (string) $request->query('email', ''),
                'phone'    => (string) $request->query('phone', ''),
                'package'  => (string) $request->query('package', ''),
            ],
        ]);
    }

    public function show(string $slug)
    {
        $page = Page::where('slug', $slug)->where('status', 'published')->firstOrFail();
        return view('pages.custom', compact('page'));
    }
}
