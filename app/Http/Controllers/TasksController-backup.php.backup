<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
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
        return view('tasks.create');
    }
    
    public function store(Request $request, Guide $guide)
    {
        /* dd($request->all()); */
        /* $data = [
            'tourist_id' => auth()->id(),
            'guide_id' => 1,
        ];
        dd(array_merge($request->all(), $data)); */
        Task::create($request->all());
        /* return redirect()->route('tasks.index'); */
        Mail::to($guide->user->email)->send(new NewTaskCreatedGuide());
        Mail::to($tourist->user->email)->send(new NewTaskCreatedTourist());
        return redirect()->back();
    }
}
