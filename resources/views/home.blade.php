@extends('layout')

@section('title', 'Home')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-12 col-lg-6">
			<h1 class="display-4 text-primary text-center font-weight-bold">Desarrollo Web</h1>
				<p class="lead text-secondary text-center">
					En el mundo no hay nada difícil, solo la mente hace que muchas cosas lo parezcan.
				</p>
				<a class="btn btn-lg btn-block btn-primary" href="{{ route('contact') }}">
					Contacto
				</a>
				<a class="btn btn-lg btn-block btn-outline-primary" href="{{ route('projects.index') }}">
					Future Projects
				</a>
		</div>
		<div class="col-12 col-lg-6">
			<img class="img-fluid mb-4 mt-3" src="/img/home.svg" alt="Desarrollo Web">
		</div>
	</div>
</div>
@endsection