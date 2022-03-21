@extends('layouts.main')

@section('additional_styles')
<link rel="stylesheet" href="{{asset('css/comic_page.css')}}">
@endsection

@section('title', $comics['title'])

@section('content')
<section id="jumbotron"></section>
<div class="blue-banner">
</div>
<div class="container">
	<figure class="comic-thumb">
		<img src="{{$comics['thumb']}}" alt="{{$comics['title']}}">
		<span class="label-narrow">Comic Book</span>
		<span class="label-wide">View Gallery</span>
	</figure>
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
<div class="about-comic">
	<div class="container">
		<div class="wrapper">
			<div class="table-column">
				<h3>Talent</h3>
				<div class="table-element">
					<table>
						<tbody>
							<tr>
								<td>
									<h4>Art by:</h4>
								</td>
								<td>
									<ul>
										@foreach ($comics['artists'] as $artist)
										<li>{{$artist}},</li>
										@endforeach
									</ul>
								</td>
							</tr>
							<tr>
								<td>
									<h4>Written by:</h4>
								</td>
								<td>
									<ul>
										@foreach ($comics['writers'] as $artist)
										<li>{{$artist}},</li>
										@endforeach
									</ul>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			<div class="table-column">
				<table>
					<h3>Specs</h3>
					<tbody>
						<tr>
							<td>
								<h4>Series:</h4>
							</td>
							<td>
								<p>{{$comics['series']}}</p>
							</td>
						</tr>
						<tr>
							<td>
								<h4>U.S. Price:</h4>
							</td>
							<td>
								<p>{{$comics['price']}}</p>
							</td>
						</tr>
						<tr>
							<td>
								<h4>On Sale Date:</h4>
							</td>
							<td>
								<p>{{$comics['sale_date']}}</p>
							</td>
						</tr>
					</tbody>
				</table>

			</div>

		</div>
	</div>

	@endsection