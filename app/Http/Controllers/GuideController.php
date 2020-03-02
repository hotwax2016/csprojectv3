<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Guide;
use App\User;
use App\Review;

class GuideController extends Controller
{
    public function index()
    {
        $users = User::where('role', 'guide')->paginate(10);
        $users->load('guide');
        return view('guide.index', compact('users'));
    }

    public function show(Guide $guide)
    {
        $guide->load('user', 'reviews');
        return view('guide.show', compact('guide'));
    }

    public function update(Guide $guide, Request $request)
    {
        $data = $request->validate([
            'fname' => 'required',
            'lname' => 'required',
        ]);
        $guide->update($data);

        return redirect()->back();
    }
}
