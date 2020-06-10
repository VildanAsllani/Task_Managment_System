@extends('layouts.app');

@section('content')
<div class="row">
    <div class="card">
        <div class="card-header">
            <a href="javascript:history.back()">
                <span class="fas fa-arrow-left"></span>
            </a>   
        </div>
        <div class="card-body">
            <form class="form-ui" action="{{route('tasks.update',$task->id)}}" method="POST">
                @csrf
                @method('PATCH') 
                <div class="form-group">
                    <label class="form-group-label">Task title</label>
                    <input type="text" class="form-group-input" value="{{ old('task',$task->task) }}" name="task">
                    
                    @error('task')                                   
                    <div class="error">
                        <strong>{{$message}}</strong>
                    </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label class="form-group-label">Description</label>
                    <textarea class="form-group-input"  rows="5" name="task_description">{{ old('task',$task->task_description) }}</textarea>
                    @error('task_description')                                   
                    <div class="error">
                        <strong>{{$message}}</strong>
                    </div>
                    @enderror
                </div>

                <div class="form-group-2">
                     <div class="form-group">
                        <label class="form-group-label">Date</label>
                        <input type="date" class="form-group-input" value="{{ old('task_date') }}" name="task_date">
                        @error('task_date')                                   
                        <div class="error">
                            <strong>{{$message}}</strong>
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="form-group-label">Time</label>
                        <input type="time" class="form-group-input" value="{{ old('task_time') }}" name="task_time">
                        @error('task_time')                                   
                        <div class="error">
                            <strong>{{$message}}</strong>
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label class="form-group-label">Priority</label>
                    <select class="form-group-input" name="priority_id">
                        @foreach ($priorities as $priority)
                            <option value="{{$priority->id}}">{{$priority->priority}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group" style="padding-top: 20px;margin-bottom:20px">
                    <input type="submit" class="form-group-submit" value="ADD TASK">
                </div>
            </form>
        </div>
        <div class="card-footer">

        </div>
    </div>
    
</div>

@endsection