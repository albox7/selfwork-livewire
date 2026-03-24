<!DOCTYPE html>
<html lang="it">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>{{ $title ?? 'LW' }}</title>
		<link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
		@vite('resources/css/app.css')
		@livewireStyles
	</head>
	<body>

		{{-- NAVBAR --}}
		<nav class="navbar navbar-expand-lg bg-body-tertiary extra-padding-nav">
			<div class="container-fluid">
				<a class="navbar-brand" href="{{ route('home') }}">LW</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNav">
					<ul class="navbar-nav ms-auto">
						<li class="nav-item">
							<a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" {{ request()->routeIs('home') ? 'aria-current="page"' : '' }} href="{{ route('home') }}">Quiz astronomico!</a>
						</li>
						<li class="nav-item">
							<a class="nav-link {{ request()->routeIs('articles') ? 'active' : '' }}" {{ request()->routeIs('articles') ? 'aria-current="page"' : '' }} href="{{ route('articles') }}">Articoli astronomici</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>

		{{-- CONTENUTO --}}
		<main class="extra-padding-container">
			{{ $slot }}
		</main>

		{{-- FOOTER --}}
		<footer class="extra-padding-footer">
			<div class="container-fluid">
				<p>&copy; {{ date('Y') }} - <a href="/"><span>LW</span></a></p>
			</div>
		</footer>

		
		@vite('resources/js/app.js')
		@livewireScripts
	</body>
</html>
