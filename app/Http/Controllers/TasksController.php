<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Task;
use App\Guide;
use App\Mail\NewTaskCreatedGuide;
use App\Mail\NewTaskCreatedTourist;

class TasksController extends Controller
{
    public function index(Guide $guide)
    {
        $tasks = Task::all();
        return view('tasks.index', compact('tasks', 'guide'));
    }
    
    public function create(Guide $guide)
    {
        return view('tasks.create', compact('guide'));
    }
    
    public function store(Request $request, Guide $guide)
    {
        /* dd(Auth::id()); */
        $data = [
            'tourist_id' => Auth::user()->tourist->id,
            'guide_id' => $guide->id,
        ];
        /* dd(array_merge($request->all(), $data)); */
        $vals = array_merge($request->all(), $data);
/*         dd($vals); */
        Task::create($vals);
        /* return redirect()->route('tasks.index'); */
        Mail::to($guide->user->email)->send(new NewTaskCreatedGuide());
        Mail::to(Auth::user()->email)->send(new NewTaskCreatedTourist());
        return redirect()->back();
    }
}
