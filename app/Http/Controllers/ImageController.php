<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Image;

class ImageController extends Controller
{
    public function resizeImage()
    {
        return view('resize-image');
    }

    public function resizeImageSubmit(Request $request)
    {
        $image = $request->file;
        $filename = $image->getClientOriginalName();
        $image_resize = Image::make($image->getRealPath());
        $image_resize->resize(1024, null, function ($constraint) {
            $constraint->aspectRatio(16 / 9);
        })->save(public_path('images/' . $filename), 60);

        // $image_resize->save(public_path('images/' . $filename), 40);

        return "Image has been resized successfully";

    }
    
}
