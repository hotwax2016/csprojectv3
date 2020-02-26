<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Guide;

class Post extends Model
{
    protected $guarded = [];

    public function guide()
    {
        return $this->belongsTo(Guide::class);
    }
}
