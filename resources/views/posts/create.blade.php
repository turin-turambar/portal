@extends('layouts.main')

@section('content')

<div class="col-sm-8 blog-main">
	<h1>Objavi novi članak</h1>

	<hr>

	<form method="POST" action="/posts">
		{{csrf_field()}}
		<div class="form-group">
			<label for="title">Naslov članka</label>
			<input type="text" name="title" class="form-control" id="title" placeholder="Naslov" required="true">
		</div>
		<div class="form-group">
			<label for="post">Tekst članka</label>
			<textarea name="post" id="post" class="form-control" rows="5" placeholder="Unesite članak ovde"></textarea>
		</div>
		<button type="submit" class="btn btn-primary">Submit</button>
	</form>
</div>

@endsection