<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Review;
use App\Guide;

class ReviewController extends Controller
{
    public function store(Request $data, Guide $guide)
    {
        Review::create([
            'tourist_id' => Auth::id(),
            'guide_id' => $guide->id,
            'description' => $data->comment,
        ]);
        return redirect()->back();
    }
}
