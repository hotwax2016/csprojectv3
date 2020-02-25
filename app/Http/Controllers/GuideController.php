<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Guide;
use App\User;

class GuideController extends Controller
{
    public function index()
    {
        $guides = User::where('role', 'guide')->get();
        return view('guide.index', compact('guides'));
    }

    public function show(Guide $guide)
    {
        $guide->load('user');
        return view('guide.show', compact('guide'));
    }
}
