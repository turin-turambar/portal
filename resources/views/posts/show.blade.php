@extends('layouts.main')

@section('content')
	<div class="col-sm-8 blog-main">
		<h1>{{$post->title}}</h1>

		<p>
			{{$post->blogPost}}
		</p>
		<hr>
		<div class="card">
			<div class="card-block">
				<form action="/posts/{{$post->id}}/comments" method="POST">
					{{csrf_field()}}
					<div class="form-group">
						<textarea name="body" class="form-control" rows="3" placeholder="Ostavite komentar ovde" required></textarea>
					</div>
					<div class="form-group">
						<button class="btn btn-primary">Objavi komentar</button>
					</div>
				</form>
				@include('layouts.errors')
			</div>
		</div>
		<h3>Svi komentari:</h3>
		<div class="comments card">
			<div class="card-block">
				@foreach($post->comments as $comment)
					<article>
						<strong class="boldComment">
							{{$comment->created_at->diffForHumans()}}: &nbsp;
						</strong>
						{{$comment->body}}
					</article>
				@endforeach
			</div>
		</div>
	</div>
@endsection