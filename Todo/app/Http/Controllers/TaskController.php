<?php

namespace App\Http\Controllers;

use App\Task;
use App\priority;
use Illuminate\Http\Request;
use Carbon\Carbon;


use Auth;

class TaskController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $priorities = priority::all();
        return view('tasks.index',compact('priorities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $priorities = priority::all();
        return view('tasks.index',compact('priorities'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'task' => 'required|min:5',
            'task_description' => 'required|min:5',
            'task_date' => 'required',
            'priority_id' => 'required'
        ]);
        $data = $request->all();
        $data['user_id'] = Auth::user()->id;
        $data['task_status'] = 0;
        if(Task::create($data))
        return redirect()->route('home_route')->with('success', 'E dhena u regjistrua me sukses');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function show(Task $task)
    {
        return view('tasks.show',compact('task'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function edit(Task $task)
    {
        $task=Task::findOrFail($task->id);
        $priorities = priority::all();
        return view('tasks.edit',compact('priorities','task'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Task $task)
    {
        $request->validate([
            'task' => 'required|min:5',
            'task_description' => 'required|min:5',
            'task_date' => 'required',
            'priority_id' => 'required'
        ]);

        $task = Task::findOrFail($task->id);
        $task->task=$request->task;
        $task->task_description=$request->task_description;
        $task->task_date=$request->task_date;
        $task->priority_id=$request->priority_id;
        $task->update();
        return redirect()->route('home_route')->with('success', 'E dhena u regjistrua me sukses');
    }
    public function completed(Task $task)
    {
        $task=Task::findOrFail($task->id);
        $task->task_status=1;
        $task->update();
        return redirect()->route('home_route');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function destroy(Task $task)
    {
        $Task=Task::findOrFail($task->id);
        //return $Task;
        $Task->delete();
        return redirect()->route('home_route');
    }

}
