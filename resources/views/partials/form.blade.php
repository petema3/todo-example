<div class="form-group">
	<label>Name:</label>
	<input type="text" class="form-control" name="name" value="{{ old('name', $task->name) }}">
</div>

<div class="form-group">
	<label for="completed">Completed:</label>
	<input type="checkbox" id="completed" name="completed" value="1" @if( old('completed', $task->completed) ) checked @endif>
</div>

<div class="form-group">
	<label>Description:</label>
	<textarea name="description" class="form-control" rows="5">{{ old('description', $task->description) }}</textarea>
</div>

<div class="form-group">
	<input type="submit" value="{{ $submit_text }}" class="btn btn-primary">
</div>