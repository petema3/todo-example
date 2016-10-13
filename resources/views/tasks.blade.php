@extends('app')

@section('content')
	<h2>Tasks</h2>

	<table class="table table-hover">
		<thead>
			<tr>
				<th></th>
				<th></th>
				<th>Task</th>
				<th>Description</th>
				<th>Completed</th>
				<th>Created</th>
			</tr>
		</thead>
		<tbody>
			@foreach($tasks as $task)
				<tr>
					<td>
						<a href="{{ url("tasks/{$task->id}/edit") }}" class="btn btn-info">Edit</a>
					</td>
					<td>
						<form method="POST" action="{{ url("tasks/{$task->id}/delete") }}">
							{{ csrf_field() }}
							<button class="btn btn-danger">Delete</button>
						</form>
					</td>
					<td>{{ $task->name }}</td>
					<td>{{ $task->description }}</td>
					<td class="completed">
						@if( $task->completed )
							&#10003;
						@endif
					</td>
					<td>{{ $task->created_at->format('n/j/Y g:ia') }}</td>
				</tr>
			@endforeach
		</tbody>
	</table>

@endsection