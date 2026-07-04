<?php

namespace App\Models;

use App\Models\Category;
use App\Models\Comment;
use App\Models\User;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Attributes\Scope;

class Post extends Model
{


    protected $fillable = ["title", "content", "user_id", "category_id", "is_featured"];
    public function category()
    {

        return $this->belongsTo(Category::class);
    }
    public function user()
    {

        return $this->belongsTo(User::class);
    }
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
    #[Scope]
    public function search(Builder $query, ?string $search)
    {
        return $query->where("title", "like", "%{$search}%");
    }
}
