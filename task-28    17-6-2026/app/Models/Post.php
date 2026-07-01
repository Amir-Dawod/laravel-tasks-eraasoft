<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    //
    public function category()
    {
        return $this->belongsTo(Category::class);
    }


   # Many To Many ( Post -> Category)

    // public function categories()
    // {
    //     return $this->belongsToMany(Category::class);
    // }
}
