@extends('main')
	@section('title')
		- {{$post->title}}
	@endsection()

	@section('content')
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<h1>{{$post->title}}</h1>
				<p>{{$post->body}}</p>
				<hr>
				<p>Category: {{$post->category->name}}</p>
				vor
			</div>
		</div>
	@endsection()