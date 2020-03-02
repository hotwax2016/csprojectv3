<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Task;
use App\Guide;
use App\Tourist;
use App\Mail\NewTaskCreatedGuide;
use App\Mail\NewTaskCreatedTourist;
use App\Mail\AppointmentConformed;
use App\Mail\AppointmentDiscarded;

class TasksController extends Controller
{
    public function index(Guide $guide)
    {
        $tasks = Task::where('guide_id', $guide->id)->get();
        return view('tasks.index', compact('tasks', 'guide'));
    }
    
    public function create(Guide $guide)
    {
        return view('tasks.create', compact('guide'));
    }
    
    public function store(Request $request, Guide $guide)
    {
        $data = [
            'tourist_id' => Auth::user()->tourist->id,
            'guide_id' => $guide->id,
        ];
        $vals = array_merge($request->all(), $data);
        /* dd($vals); */
        Task::create($vals);

        Mail::to($guide->user->email)->send(new NewTaskCreatedGuide());
        Mail::to(Auth::user()->email)->send(new NewTaskCreatedTourist());

        return redirect()->back();
    }

    public function update(Guide $guide, Task $task, Request $request)
    {
        $data = request()->validate([
            'conform' => 'required',
        ]);
        $color = [
            'color' => '#0080ff',
        ];
        $vals = array_merge($data, $color);
        $task->update($vals);
        $tourist = Tourist::class;
        $tour = $tourist::where('id', '$task->tourist_id');
        Mail::to($tour->user->email)->send(new AppointmentConformed());
        return redirect()->back();
    }

    public function destory(Task $task)
    {
        $task->delete();
        $tourist = Tourist::where('id', $task->tourist_id);
        Mail::to($tourist->user->email)->send(new AppointmentDiscarded());
        return redirect()->back();
    }
}
