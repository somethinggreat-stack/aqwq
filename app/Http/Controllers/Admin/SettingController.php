<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Media;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SettingController extends Controller
{
    public function edit(string $group)
    {
        abort_unless(array_key_exists($group, Setting::GROUPS), 404);

        $settings = Setting::where('group', $group)
            ->orderBy('sort')
            ->orderBy('id')
            ->get();

        return view('admin.settings', [
            'group'    => $group,
            'groups'   => Setting::GROUPS,
            'settings' => $settings,
            'library'  => Media::latest()->get(),
        ]);
    }

    public function update(Request $request, string $group)
    {
        abort_unless(array_key_exists($group, Setting::GROUPS), 404);

        $settings = Setting::where('group', $group)->get();

        foreach ($settings as $setting) {
            $field = 'f_' . $setting->id;

            if ($setting->type === 'image' || $setting->type === 'video') {
                // Uploaded file takes priority, then a picked/typed value.
                if ($request->hasFile($field)) {
                    $setting->value = $this->storeUpload($request->file($field), $setting->type);
                } elseif ($request->filled($field)) {
                    $setting->value = $request->input($field);
                }
            } elseif ($setting->type === 'boolean') {
                $setting->value = $request->boolean($field) ? '1' : '0';
            } else {
                $setting->value = $request->input($field);
            }

            $setting->save();
        }

        Setting::flushCache();

        return back()->with('status', 'Saved! Your changes are now live on the site.');
    }

    private function storeUpload($file, string $type): string
    {
        $ext      = $file->getClientOriginalExtension() ?: ($type === 'video' ? 'mp4' : 'jpg');
        $original = $file->getClientOriginalName();
        $mime     = $file->getClientMimeType();
        $size     = $file->getSize();
        $name     = Str::slug(pathinfo($original, PATHINFO_FILENAME)) . '-' . substr(md5(uniqid('', true)), 0, 8) . '.' . $ext;

        // Store directly under public/uploads so asset() resolves without a symlink.
        $file->move(public_path('uploads'), $name);

        Media::create([
            'name' => $original,
            'path' => 'uploads/' . $name,
            'mime' => $mime,
            'size' => $size,
        ]);

        return 'uploads/' . $name;
    }
}
