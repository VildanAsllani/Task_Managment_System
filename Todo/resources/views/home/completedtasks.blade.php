@extends('layouts.app');

@section('content')
<h3>All completed tasks</h3>
<div class="row">
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
                        <td>
                            <a href="#" class="btn btn-primary">View</a>
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
</div>

@endsection