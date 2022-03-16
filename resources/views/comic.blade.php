@extends('layouts.main')

@section('additional_styles')
<link rel="stylesheet" href="{{asset('css/comic_page.css')}}">
@endsection

@section('title', 'comic') {{-- TODO da modificare --}}

@section('content')
<div class="container">
	<div class="wrapper">


		<div class="comic-pres">
			<h2>{{$comics['title']}}</h2>
			<div class="wrapper">
				<div class="comic-header">
					<div class="wrapper">
						<h3>U.S. Price: <span class="t-white">{{$comics['price']}}</span></h3>
						<h3>AVAILABLE</h3>
					</div>
				</div>
				<div class="comic-header t-white">
					<h3>Check Availability</h3>
				</div>
			</div>
			<p class="comic-description">{{$comics['description']}}</p>
		</div>
		<div id="sq-adv">
			<figure>
				<figcaption>Advertisement</figcaption>
				<img src="{{asset('img/adv.jpg')}}" alt="adv">
			</figure>
		</div>


	</div>
</div>

@endsection