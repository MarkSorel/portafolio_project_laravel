@extends('layout')

@section('title', 'About')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-12 col-lg-6">
			<h1 class="display-4 text-primary text-center font-weight-bold">¿Quién soy?</h1>
				<p class="lead text-secondary text-center">
					Entusiasta de la Ingeniería, el desarrollo Backend, la Ciencia de Datos, y la
					Inteligencia Artificial.
					<br>
					<i>Creando dummy projects ...</i>
					<br>
					@ Marck LLerena
				</p>
				<a class="btn btn-lg btn-block btn-primary" href="{{ route('contact') }}">
					Contacto
				</a>
				<a class="btn btn-lg btn-block btn-outline-primary" href="{{ route('projects.index') }}">
					Future Projects
				</a>
		</div>
		<div class="col-12 col-lg-6">
			<img class="img-fluid mb-4 mt-3" src="/img/about.svg" alt="Quién Soy">
		</div>
	</div>
</div>
@endsection