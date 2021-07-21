@extends('layouts.app')

@section('content')
	<div class="wrapper">
		<div class="todo-edit-field">
			<h1>Edit Todo</h1>
			<form action="/todo/{{ $todo->id }}" method="POST">
				@csrf
				@method('put')
				<input type="text" name="todo" placeholder="Task..." value="{{ $todo->text }}">
				<button type="submit">Update</button>
			</form>
		</div>
	</div>
@endsection