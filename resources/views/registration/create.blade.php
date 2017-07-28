@extends('layouts.main')

@section('content')
	<div class="col-sm-8">
		<h1>Register</h1>

		<form method="POST" action="/register">
			{{csrf_field()}}
			<div class="form-group">
				<label for="firstName">Ime:</label>
				<input type="text" class="form-control" id="firstName" name="firstName" required>
			</div>
			<div class="form-group">
				<label for="lastName">Prezime:</label>
				<input type="text" class="form-control" id="lastName" name="lastName" required>
			</div>
			<div class="form-group">
				<label for="email">Email:</label>
				<input type="text" class="form-control" id="email" name="email" required>
			</div>
			<div class="form-group">
				<label for="password">Lozinka:</label>
				<input type="password" class="form-control" id="password" name="password" required>
			</div>
			<div class="form-group">
				<label for="repeatPassword">Ponovi lozinku</label>
				<input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
			</div>
			<div class="form-group">
				<label for="role">Uloga:</label>
				<select name="role_id" id="role_id" class="form-control">
					<option name="role_id" value="1">Administrator</option>
					<option name="role_id" value="2" selected>Nastavnik</option>
					<option name="role_id" value="3">Asistent</option>
					<option name="role_id" value="4">Nenastavno osoblje</option>
				</select>
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-primary">Registruj se</button>
			</div>

			@include('layouts.errors')

		</form>
	</div>
@endsection