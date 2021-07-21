@extends('layouts.app')

@section('content')
	<div class="header">
		<h1>Todo App</h1>
	</div>

	<div class="add-todo">
		<a href="/todo/create">Add a new todo &rarr;</a>
	</div>

	<div class="todos">
		@foreach ($todos as $todo)
			<div class="todo">
				<a href="/todo/{{ $todo->id }}/edit" class="edit">Edit</a>
				<span class="text">{{ $todo->text }}</span>
				<form action="/todo/{{ $todo->id }}" method="POST">
					@csrf
					@method('delete')
					<button type="submit" class="delete">Delete</button>
				</form>
			</div>
		@endforeach
	</div>
@endsection