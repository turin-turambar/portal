@extends('layouts.main')

@section('content')

<div class="col-sm-8 blog-main">
	<h1>Objavi novi članak</h1>

	<hr>

	<form method="POST" action="/posts">
		{{csrf_field()}}
		<div class="form-group">
			<label for="title">Naslov članka</label>
			<input type="text" name="title" class="form-control" id="title" placeholder="Naslov" required>
		</div>
		<div class="form-group">
			<label for="body">Tekst članka</label>
			<textarea name="body" id="body" class="form-control" rows="5" placeholder="Unesite članak ovde" required></textarea>
		</div>

		<div class="form-group">
			<button type="submit" class="btn btn-primary">Objavi</button>
		</div>

		@include('layouts.errors')
	</form>
</div>

@endsection