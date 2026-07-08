<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreImageRequest;

class ImageController extends Controller
{
    //
    public function upload(StoreImageRequest $request)
    {
        $path = $request->file('image')->store('img',"public");
        return back()->with('success', 'Image uploaded successfully');
    }
}
