@extends('layouts.main')

@section('content')
	<div class="col-sm-8 blog-main">
		<h1>{{$post->title}}</h1>

		<p>
			{{$post->blogPost}}
		</p>
	</div>
@endsection