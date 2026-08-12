<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;

class FileUploadController extends Controller
{
    public function imageupload(Request $request)
    {

        $path = $request->file('image')->store('image');

        // dd($request->);
        Image::create([
            'name' => $request->fileName,
            'img_path' => $path,
        ]);
        return view('pages.imageUpload.index');
    }
}



//  php artisan storage:link