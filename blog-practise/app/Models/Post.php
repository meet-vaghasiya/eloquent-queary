<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public function comment()
    {
        return $this->hasMany(Comment::class);
    }


    public function category()
    {
        return $this->hasOne(Category::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}
