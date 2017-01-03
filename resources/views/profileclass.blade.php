@section('title')
<title> 
	{{$Makeupclass->class_name}}
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
			<ul class="collapsible collection with-header" data-collapsible="expandable">
				<li>
					<img class="responsive-img" id="paksa_foto"  src="{{ asset('image/makeupclass/'.$Makeupclass->id.'/'.$Makeupclass->class_avatar.'') }}">
				</li>
				<li class="collection-header custom-pink1-text"><h5>{{$Makeupclass->class_name}}</h5></li>
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
				<li class="collection-header custom-pink1-text"><h5>Class Info</h5></li>
				<li>
					<div class="collapsible-header">Class Available Schedule</div>
					<div class="collapsible-body grey lighten-3">
						<?php
						$timestamp1 = strtotime($Makeupclass->class_startdate);
						$timestamp2 = strtotime($Makeupclass->class_enddate);
						
						$day1 = date('l', $timestamp1);
						$day2 = date('l', $timestamp2);
						?>
						<p><b>{{$day1}}, {{$Makeupclass->class_startdate}}</b> <br>until<br><b>{{$day2}}, {{$Makeupclass->class_enddate}}</b></p>
					</div>
				</li>
				<li>
					<div class="collapsible-header">Class Venue</div>
					<div class="collapsible-body grey lighten-3">
						<p>{{$Makeupclass->class_address}}, <b>{{$Makeupclass->class_city}}</b></p>
					</div>
				</li>
				<li>
					<div class="collapsible-header">Class Quota</div>
					<div class="collapsible-body grey lighten-3">
						<p>{{$Makeupclass->class_quota}} <b>people</b></p>
					</div>
				</li>
				<li>
					<div class="collapsible-header">Class Price</div>
					<div class="collapsible-body grey lighten-3">
						<p><b>IDR</b> {{$Makeupclass->class_price}}</p>
					</div>
				</li>
				<li>
					<div class="collapsible-header">Class Description</div>
					<div class="collapsible-body grey lighten-3">
						<p>
							{{$Makeupclass->class_description}}<br>
						</p>
					</div>
				</li>
			</ul>
		</div>
		{{-- SECTION RIGHT END--}}
	</div>
</div>
@endsection