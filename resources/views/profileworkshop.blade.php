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
				<img class="responsive activator" src="{{ asset('image/profile wall.jpg') }}">
			</div>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		{{-- SECTION LEFT --}}
		<div class="col s12 m5 l4">
			<ul class="collapsible collection with-header" data-collapsible="expandable">
				<li>
					<img class="responsive-img" id="paksa_foto" src="{{ asset('image/makeupworkshop/'.$Makeupworkshop->id.'/'.$Makeupworkshop->workshop_avatar.'') }}">
				</li>
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
			</ul> 
		</div>
		{{-- SECTION LEFT END --}}

		{{-- SECTION RIGHT START--}}
		<div class="col s12 m7 l8" style="">
			<ul class="collapsible collection with-header" data-collapsible="expandable">
				<li class="collection-header custom-pink1-text"><h5>Workshop Info</h5></li>
				<li>
					<div class="collapsible-header">Class Owner</div>
					<div class="collapsible-body grey lighten-3">
						<p><a href="{{url('/profile/'.$Makeupworkshop->owner->id)}}"><b>{{$Makeupworkshop->owner->user_fullname}}</b></a></p>
					</div>
				</li>
				<li>
					<div class="collapsible-header">Workshop Schedule</div>
					<div class="collapsible-body grey lighten-3">
						<?php
						$timestamp = strtotime($Makeupworkshop->workshop_date);

						$day = date('l', $timestamp);
						?>
						<p><b>{{$day}}</b>, <b>{{$Makeupworkshop->workshop_date}}</b></p>
					</div>
				</li>
				<li>
					<div class="collapsible-header">Workshop Venue</div>
					<div class="collapsible-body grey lighten-3">
						<p>{{$Makeupworkshop->workshop_address}}, <b>{{$Makeupworkshop->workshop_city}}</b></p>
					</div>
				</li>
				<li>
					<div class="collapsible-header">Workshop Quota</div>
					<div class="collapsible-body grey lighten-3">
						<p>{{$Makeupworkshop->workshop_quota}} <b>people</b></p>
					</div>
				</li>
				<li>
					<div class="collapsible-header">Workshop Price</div>
					<div class="collapsible-body grey lighten-3">
						<p><b>IDR</b> {{$Makeupworkshop->workshop_price}}</p>
					</div>
				</li>
				<li>
					<div class="collapsible-header">Workshop Description</div>
					<div class="collapsible-body grey lighten-3">
						<p>
							{{$Makeupworkshop->workshop_description}}<br>
							<b>Duration</b>: {{$Makeupworkshop->workshop_duration}} Hour
						</p>
					</div>
				</li>
			</ul>
		</div>
		{{-- SECTION RIGHT END--}}
	</div>
</div>
@endsection