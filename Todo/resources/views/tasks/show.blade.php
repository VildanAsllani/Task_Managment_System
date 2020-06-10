@extends('layouts.app');

@section('content')
<div class="row">
    <div class="card">
        <div class="card-header">
            <a href="javascript:history.back()">
                <span class="fas fa-arrow-left"></span>
            </a>  
            <a href="{{ route('tasks.edit',$task->id) }}" >
                <span class="fas fa-edit"></span>
            </a>            
        </div>
        <div class="card-body">
            <h1>{{$task->task}}</h1>
            <br>
            <p>{{$task->task_description}}</p>
            <div class="body-row">
                <span style="background-color:{{$task->priority->priority_color}};color:white;">{{$task->priority->priority}} - {{$task->priority->priority_level}}</span>
                <span>{{$task->task_time}}</span>
            </div>
        </div>
        <div class="card-footer">

        </div>
    </div>
    
</div>
@endsection