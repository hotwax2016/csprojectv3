<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Guide;

class Review extends Model
{
    protected $guarded = [];

    public function tourists()
    {
        return $this->belongsTo(Guide::class);
    }
}
