@extends('app')

@section('content')
    <h2>Edit Task "{{ $task->name }}"</h2>

    <form method="POST" action="{{ url("tasks/{$task->id}/update") }}">
    	{{ csrf_field() }}

        @include('partials.form', ['submit_text' => 'Save Changes'])
    </form>
@endsection