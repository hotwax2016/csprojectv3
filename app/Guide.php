<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Post;
use App\Review;

class Guide extends Model
{
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    public function reviews()
    { 
        return $this->hasMany(Review::class);
    }
}
