<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Media;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class MediaController extends Controller
{
    public function index()
    {
        return view('admin.media', [
            'items' => Media::latest()->get(),
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'files'   => ['required', 'array'],
            'files.*' => ['file', 'max:51200', 'mimes:jpg,jpeg,png,gif,webp,svg,mp4,webm,mov'],
        ]);

        foreach ($request->file('files') as $file) {
            $ext      = $file->getClientOriginalExtension() ?: 'bin';
            $original = $file->getClientOriginalName();
            $mime     = $file->getClientMimeType();
            $size     = $file->getSize();
            $name     = Str::slug(pathinfo($original, PATHINFO_FILENAME)) . '-' . substr(md5(uniqid('', true)), 0, 8) . '.' . $ext;

            $file->move(public_path('uploads'), $name);

            Media::create([
                'name' => $original,
                'path' => 'uploads/' . $name,
                'mime' => $mime,
                'size' => $size,
            ]);
        }

        return back()->with('status', 'Uploaded successfully.');
    }

    public function destroy(Media $medium)
    {
        $full = public_path($medium->path);
        if (is_file($full)) {
            @unlink($full);
        }
        $medium->delete();

        return back()->with('status', 'File deleted.');
    }
}
