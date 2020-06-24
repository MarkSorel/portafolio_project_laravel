<!DOCTYPE html>
<html lang="en">
<head>
	<title>@yield('title')</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="stylesheet" href="{{ mix('css/app.css') }}">
	<script src="{{ mix('js/app.js') }}" defer></script>
	<style>

	</style>
</head>
<body>
	<div id="app" class="d-flex flex-column h-screen justify-content-between">
		<header>
			@include('partials.nav')
			@include('partials.session-status')
		</header>

		<main class="py-4">
			@yield('content')
		</main>

		<footer class="bg-white text-center text-black-50 py-3 shadow">
			HumbleApp | Copyright @ {{ date('Y') }}
		</footer>
	</div>
</body>
</html>