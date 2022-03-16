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