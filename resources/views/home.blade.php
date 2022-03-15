<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="{{asset('css/app.css')}}">
	<title>{{env('APP_NAME')}}</title>
</head>

<body>
	<header class="container">
		<figure>
			<a href="{{route('home')}}"><img src="{{ asset('img/dc-logo.png') }}" alt="DC Logo" /></a>
		</figure>
		<nav>
			<ul>
				@forelse ($header_menu as $menu)
				<li>
					<a href="#">{{$menu['title']}}</a>
				</li>
				@empty
				<h3>Oops... No comics here!</h3>
				@endforelse
			</ul>
		</nav>
	</header>
	<main>
		<section id="jumbotron"></section>
		<section id="comics-list">
			<div class="container">
				{{-- BIGLABEL --}}
				<a href="#" class="big-label">
					Current Series
				</a>
				{{-- BIGLABEL END --}}
				<div class="wrapper">
					{{-- COMIC CARD --}}
					@forelse ($comics as $comic)
					<a href="#" class="comic-card">
						<figure>
							<img src="{{$comic['thumb']}}" alt="{{$comic['series']}}" />
						</figure>
						<h5>{{ $comic['series'] }}</h5>
					</a>
					@empty
					<h3>Oops... No comics here!</h3>
					@endforelse
					{{-- COMIC CARD END --}}
				</div>
				{{-- SMALL LABEL --}}
				<a href="#" class="small-label">
					Load More
				</a>
				{{-- SMALL LABEL END --}}
			</div>
		</section>
	</main>
</body>

</html>