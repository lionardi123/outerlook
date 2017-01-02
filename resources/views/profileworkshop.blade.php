@section('title')
<title> 
	{{$Makeupworkshop->workshop_name}}
</title>
@endsection

@extends('layouts.app')
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
@section('content')
{{$owned}}
<div class="container">
	<div class="row asd center" style="padding-left: 11.250px; padding-right: 11.250px; border-right-width: 11.250px;">
		<div class="card small">
			<div class="card-image waves-effect waves-block waves-light custom-card">
				<img class="activator" src="{{ asset('image/profile wall.jpg') }}">
			</div>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		{{-- SECTION LEFT --}}
		<div class="col s12 m5 l4"> 
			<ul class="collapsible collection with-header">
				<li class="collection-header custom-pink1-text"><h5>Workshop Upcoming Schedule</h5></li>
				<?php for($i=0;$i<10;$i++){ ?>
				<li>
					<div class="collapsible-header">Schedule {{$i}}</div>
					<div class="collapsible-body grey lighten-3">
						<p>This is Schedule {{$i}}</p>
					</div>
				</li>
				<?php } ?>
			</ul>
			<div class="card-panel" style="height: auto;">
				<h5 class="custom-pink1-text">Workshop Description</h5>
				<div class="divider"></div>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis rerum magni ab necessitatibus, non earum nisi tempora animi veritatis facilis fuga cumque mollitia! Sed veritatis totam labore consequatur perferendis eligendi!</p>
			</div>
		</div>
		{{-- SECTION LEFT END --}}

		{{-- SECTION RIGHT START--}}
        <div class="col s12 m7 l8" style="">
			<div class="card-panel" style="height: auto;">
				<h4 class="custom-pink1-text">Events</h4>
				<div class="carousel carousel-slider center" data-indicators="true">
					<?php for($i=0;$i<10;$i++){ ?>
					<div class="carousel-item red white-text" href="#one!">
						<h2>Event {{$i}}</h2>
						<p class="white-text">This is Event {{$i}}</p>
					</div>
					<?php } ?>
				</div>
				<script>
					$('.carousel.carousel-slider').carousel({full_width: true});
				</script>
			</div>
		</div>
		<div class="col s12 m7 l8" style="">
			<ul class="collapsible collection with-header">
				<li class="collection-header custom-pink1-text"><h5>{{$Makeupworkshop->workshop_name}}</h5></li>
				@if($owned==0)
				<li>
					<div class="collapsible-header">Participants</div>
					<div class="collapsible-body grey lighten-3">
						<p>
							<?php for($i=0;$i<10;$i++){ ?>
							Participant {{$i}} <br>
							<?php } ?>
						</p>
					</div>
				</li>
				@endif
				<?php for($i=0;$i<10;$i++){ ?>
				<li>
					<div class="collapsible-header">Menu {{$i}}</div>
					<div class="collapsible-body grey lighten-3">
						<p>This is Menu {{$i}}</p>
					</div>
				</li>
				<?php } ?>
			</ul> 
		</div>
		{{-- SECTION RIGHT END--}}
	</div>
</div>
@endsection