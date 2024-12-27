@extends('layouts.app')

@section('title', 'List of tasks')

@section('content')
    <nav class="mb-4">
        <a href="{{ route('task.create') }}" class="link">Add task</a>
    </nav>
    @forelse ($tasks as $task)
        <div>
            <a href="{{ route('tasks.show', ['task' => $task->id]) }}" @class(['line-through' => $task->isCompleted])>
                {{ $task->title }}
            </a>
        </div>
    @empty
        <div>NO TASKS</div>
    @endforelse

    @if ($tasks->count())
        <nav class="mt-5">
            {{ $tasks->links() }}
        </nav>
    @endif
@endsection
