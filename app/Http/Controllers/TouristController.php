<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Tourist;

class TouristController extends Controller
{
    public function index()
    {
        $users = User::where('role', 'tourist')->get();
        return view('tourist.index', compact('users'));
    }

    public function show(Tourist $tourist)
    {
        $tourist->load('user');
        return view('tourist.show', compact('tourist'));
    }

    public function update(Tourist $tourist, Request $request)
    {
        $data = $request->validate([
            'fname' => 'required',
            'lname' => 'required',
        ]);
        $tourist->update($data);

        return redirect()->back();
    }
}
