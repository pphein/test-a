@extends('userpost')

@section('posts')

	<form method="post" action="/store">
		@csrf
		<label>Title</label>
		<input type="text" name="title">
		<br>
		<label>Body</label>
		<input type="text" name="body">

		<button type="submit">Post</button>

	</form>

@endsection