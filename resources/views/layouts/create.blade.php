@extends('layouts.app')

@section('content')
	<div class="todo-input-field">
		<form action="/todo" method="POST">
			@csrf
			<input type="text" name="todo" placeholder="Task...">
			<button type="submit">Add</button>
		</form>
	</div>
@endsection