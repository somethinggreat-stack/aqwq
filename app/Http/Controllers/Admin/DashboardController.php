<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Media;
use App\Models\Setting;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard', [
            'groups'      => Setting::GROUPS,
            'settingCount' => Setting::count(),
            'mediaCount'  => Media::count(),
        ]);
    }
}
