@extends('layouts.app');

@section('content')
<h3>All tasks</h3>
<div class="row" style="background-color: white;padding:20px">
    <table id="example" class="ui celled table" style="width:100%">
        <thead>
            <tr>
                <th>Title</th>
                <th>Priority</th>
                <th>Date</th>
                <th>Time</th>
                <th>View</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tasks as $task)
                <tr>
                    <td>{{$task->task}}</td>
                    <td>{{$task->priority->priority}}</td>
                    <td>{{$task->task_date}}</td>
                    <td>{{$task->task_time}}</td>
                    <td width='120px'>
                        <a href="{{ route('tasks.destroy',$task->id) }}" class="btn btn-primary">View</a>
                        <a href="{{ route('tasks.edit',$task->id) }}" class="btn btn-blue">Edit</a>
                        {{-- <a href="{{ route('tasks.destroy',$task->id) }}" class="btn btn-delete">Delete</a> --}}
                        <form method="Post" action="{{route('tasks.destroy',$task->id)}}">
                            @csrf
                            @method('DELETE') 
                            <button type="submit" class="btn btn-delete">Delete
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th>Title</th>
                <th>Priority</th>
                <th>Date</th>
                <th>Time</th>
                <th>View</th>
            </tr>
        </tfoot>
    </table>
</div>

@endsection