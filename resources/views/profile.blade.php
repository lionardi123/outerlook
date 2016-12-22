@section('title')
<title>Profile</title>
@endsection

@extends('layouts.app')

@section('content')
<style>
	.btnBook{
		position: absolute;
	}
	.wrap{
		height: auto;
		width: auto;
	}
	.asd {
		height: 300px; 
		overflow:hidden;
	}
	.custom-card{
		max-height: 100% !important;
	}
	p{
		line-height: 1rem;
	}
	.card .card-content .card-title {
		line-height: 2rem;
	}
</style>
<div class="container">
	{{-- SECTION TOP --}}
	<div class="row asd center" style="padding-left: 11.250px; padding-right: 11.250px; border-right-width: 11.250px;">
		<div class="card small">
			<div class="card-image waves-effect waves-block waves-light custom-card">
				<img class="activator" src="{{ asset('image/profile wall.jpg') }}">
			</div>
		</div>
		{{-- <img class="responsive-img" src="{{ asset('image/profile wall.jpg') }}">
		<div class="caption left-align">
			<h3>Left Aligned Caption</h3>
			<h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
		</div> --}}
	</div>
	<div class="row">
		{{-- SECTION LEFT --}}
		<div class="col s12 m5 l4"> 
			<div class="card">
				<div class="card-image waves-effect waves-block waves-light">
					<img class="activator" src="{{ asset('image/profiledefault.jpeg') }}">
				</div>
				<div class="card-content">
					<span class="card-title activator grey-text text-darken-4">Kecoa<i class="material-icons right">more_vert</i></span>
				</div>
				<div class="card-reveal">
					<span class="card-title grey-text text-darken-4">About me<i class="material-icons right">close</i></span>
					<p>
						Kecoa terbang D:
					</p><br>
					<span class="card-title grey-text text-darken-4">Contact Me</span>
					<p>
						asdasdasas
					</p>
				</div>
			</div>
			<div class="collection">
				<a href="#!" class="collection-item black-text">Make Up Wedding<span class="new badge custom-pink1 white-text" data-badge-caption="">Rp. 200000</span></a>
				<a href="#!" class="collection-item black-text">Fermak Muka<span class="new badge custom-pink1 white-text" data-badge-caption="">Rp. 200000</span></a>
				<a href="#!" class="collection-item black-text">Teman malam<span class="new badge custom-pink1 white-text" data-badge-caption="">Rp. 200000</span></a>
				<a href="#!" class="collection-item black-text">Teman siang<span class="new badge custom-pink1 white-text" data-badge-caption="">Rp. 200000</span></a>
			</div>
		</div>

		{{-- SECTION RIGHT --}}
		<div class="col s12 m7 l8" style="">

			<div class="card-panel" style="height: auto;">
				<h1>Portfolio</h1>
				<div class="carousel carousel-slider center" data-indicators="true">
					<div class="carousel-fixed-item center">
						<a class="btn waves-effect custom-pink1 white-text darken-text-2">Book</a>
					</div>
					<div class="carousel-item red white-text" href="#one!">
						<h2>First Panel</h2>
						<p class="white-text">This is your first panel</p>
					</div>
					<div class="carousel-item amber white-text" href="#two!">
						<h2>Second Panel</h2>
						<p class="white-text">This is your second panel</p>
					</div>
					<div class="carousel-item green white-text" href="#three!">
						<h2>Third Panel</h2>
						<p class="white-text">This is your third panel</p>
					</div>
					<div class="carousel-item blue white-text" href="#four!">
						<h2>Fourth Panel</h2>
						<p class="white-text">This is your fourth panel</p>
					</div>
				</div>
				<script>
					$('.carousel.carousel-slider').carousel({full_width: true});
				</script>
			</div>
		</div>
	</div>
</div>
</div>
@endsection