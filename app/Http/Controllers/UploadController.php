<?php

namespace App\Http\Controllers;

use Image;
use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function upload(Request $request)
    {
        $request->validate([
            'picture' => 'required|max:4000|file'
        ]);
        $file_name = time() . 1 . '-' . $request->file('picture')->getClientOriginalName();
        $img = Image::make($request->file('picture'));
        $img->save(public_path() . '/upload/img/' . $file_name);
        $img->fit(400, 400)->save(public_path() . '/upload/img/thumb/' . $file_name);
        return $file_name;
    }
}
