@extends('layouts.app')

@section('title', 'The List of tasks')

@section('content')
<nav class="mb-4">
    <a href="{{route('tasks.create')}}" class="link">Add Task</a>
</nav>
<div>
    @if(count($tasks))
        @foreach($tasks as $task)
            <div>
                <a href="{{route('tasks.show', ['task'=>$task->id])}}" @class(['line-through' => $task->completed])>{{$task->title}}</a>
            </div>
        @endforeach
    @else
    <div>Tehere are no tasks</div>
    @endif

    @if($tasks->count())
    <nav class="mt-4">
        {{$tasks->links()}}
    </nav>
            
    @endif
</div>
@endsection