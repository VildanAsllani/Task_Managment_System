@extends('layouts.app');

@section('content')
<div class="row">
    <div class="row-left">
        <h2>TODAY</h2>
        <span> {{Carbon\CarbonImmutable::now()->isoFormat('dddd D')}} </span>
    </div>
    <div class="row-right">
        <span>SORT</span>
    </div>
</div>
<div class="todo-list">
    @foreach ($tasks as $task)
        <div class="todo">
            <div class="todo-left">
                <span>{{$task->task_time}}</span><p>{{Str::limit($task->task, 20)}}</p>
            </div>
            <div class="todo-right">
                <p style="color:white;background-color:{{$task->priority->priority_color}};">{{$task->priority->priority}}<span></span></p>
                <a href="{{ route('tasks.edit',$task->id) }}" class="fas fa-edit"></a>
                <a href="{{ route('tasks.show',$task->id) }}" class="fas fa-eye"></a>
                {{-- <a href="{{ route('tasks.destroy',$task->id) }}" class="fas fa-trash"></a> --}}

                <form method="Post" action="{{route('tasks.destroy',$task->id)}}">
                    @csrf
                    @method('DELETE') 
                    <button type="submit" class="btn">
                        <span class="fas fa-trash"></span>
                    </button>
                </form>

                <a href="/tasks/completed/{{$task->id}}" class="fas fa-check"></a>
            </div>
            
        </div>
    @endforeach
</div>

@endsection