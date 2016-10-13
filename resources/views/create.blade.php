@extends('app')

@section('content')
    <h2>Create Task</h2>

    <form method="POST" action="{{ url('tasks/create') }}">
    	{{ csrf_field() }}

        @include('partials/form', ['submit_text' => 'Create Task', 'task' => new App\Task()])
    </form>
@endsection