<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreImageRequest;
use App\Traits\HandlesFilesTrait;

class ImageController extends Controller
{
    //
    use HandlesFilesTrait;
    public function upload(StoreImageRequest $request)
    {
        $path =  $this->uploadFile($request->file('image'), "imgs");
        return back()->with('success', 'Image uploaded successfully' . $path);
    }
}
