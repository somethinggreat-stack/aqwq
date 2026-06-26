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

    public function services()
    {
        return view('pages.services');
    }

    public function pricing()
    {
        return view('pages.pricing');
    }

    public function mentorship()
    {
        return view('pages.mentorship');
    }

    public function businessSetup()
    {
        return view('pages.business-setup');
    }

    public function faq()
    {
        return view('pages.faq');
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

    public function privacyPolicy()
    {
        return view('pages.privacy-policy');
    }

    public function termsOfService()
    {
        return view('pages.terms-of-service');
    }

    public function show(string $slug)
    {
        $page = Page::where('slug', $slug)->where('status', 'published')->firstOrFail();
        return view('pages.custom', compact('page'));
    }
}
