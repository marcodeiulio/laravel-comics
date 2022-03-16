@php
$header_menu = config('header.header_menu');
@endphp

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