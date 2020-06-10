<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;


use App\Task;
use Auth;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function showHome(){
        $today = Carbon::today()->toDateString();
        //$tasks=Task::all();
        $tasks = Task::where([
            ['task_date', '=' , $today],
            ['task_status','=','0'],
            ['user_id','=',Auth::user()->id]
        ])->orderBy('task_time','asc')
        ->get();
        return view('home.index',compact('tasks'));
    }
    public function showCompleted(){
        $tasks=Task::where([
            ['user_id',Auth::user()->id],
            ['task_status','=','1']
        ])->get();
        return view('home.completedtasks',compact('tasks'));
    }
    public function showAlltasks(){
        $tasks=Task::where('user_id',Auth::user()->id)->get();
        return view('home.alltasks',compact('tasks'));
    }
    public function showProfile(){
        return view('home.profile');
    }
    
}
