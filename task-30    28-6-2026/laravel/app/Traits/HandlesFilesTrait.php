<?php

namespace App\Traits;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Str;

trait HandlesFilesTrait
{
    public function uploadFile(UploadedFile $file, string $folder)
    {
        $fileName = Str::uuid() . "-" . $file->getClientOriginalExtension(); // امتداد بدون اسم الصورة
        // $fileName =  $file->getClientOriginalName(); //    على صور تحمل نفس الاسم overWrite  بيعمل
        $file->storeAs($folder, $fileName, "public");
        // $file->store($folder, "public"); // هتعمل اسم عشوائى
        return $fileName;
    }
}
