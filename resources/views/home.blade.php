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
	<footer>
		<section id="upper-footer">
			<div class="container">
				<div id="footer-links" class="col-2">
					@foreach ($footer_navs as $nav)
					<nav>
						<h3>{{ $nav['title'] }}</h3>
						<ul>
							@foreach ($nav['links'] as $link)
							<li>
								<a href=""> {{ $link['text'] }} </a>
							</li>
							@endforeach
						</ul>
					</nav>
					@endforeach
				</div>
				<div id="footer-logo" class="col-2"></div>
			</div>
		</section>
		<section id="lower-footer">
			<div class="container">
				<a href="#" class="border">
					<h2>Sign-up now!</h2>
				</a>
				<nav>
					<h2>Follow Us</h2>
					@foreach ($footer_socials as $social)
					<a href="{{$social['href']}}">
						<img src="{{asset($social['icon'])}}" alt="{{$social['alt']}}" />
					</a>
					@endforeach
				</nav>
			</div>
		</section>
	</footer>
</body>

</html>