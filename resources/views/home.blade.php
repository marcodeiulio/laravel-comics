@extends('layouts.main')

@section('title', 'Home')

@section('content')
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
@endsection