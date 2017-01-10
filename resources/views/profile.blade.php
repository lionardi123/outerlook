@section('title')
<title>{{ $profile->user_fullname }}</title>
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
<script>
	$(document).ready(function(){
		$('.modal').modal();
	});

	$('.datepicker').pickadate({
		selectMonths: true,
		selectYears: 15
	});

	$(document).ready(function() {
		$('select').material_select();
	});
</script>

{{$owned}}	
<div class="container">
	{{-- SECTION TOP --}}
	<div class="row asd center" style="padding-left: 11.250px; padding-right: 11.250px; border-right-width: 11.250px;">
		<div class="card small">
			<div class="card-image waves-effect waves-block waves-light custom-card">
				<img class="activator" style="margin-top: -50%;" src="{{ asset('image/cards_profile/'.$profile->id.'/'.$profile->user_cardimage.'') }}">
			</div>
		</div>
	</div>
	<div class="row">
		{{-- SECTION LEFT --}}
		<div class="col s12 m5 l4"> 
			<div class="card">
				<div class="card-image waves-effect waves-block waves-light">
					<img class="activator" src="{{ asset('image/avatars/'.$profile->id.'/'.$profile->user_avatar.'') }}">
				</div>
				<div class="card-content">
					<span class="card-title activator grey-text text-darken-4">{{ $profile->user_fullname }}<i class="material-icons right">more_vert</i></span>
				</div>
				<div class="card-reveal">
					<span class="card-title grey-text text-darken-4">About me<i class="material-icons right">close</i></span>
					<p>
						{{$profile->user_about}}
					</p><br>
					<span class="card-title grey-text text-darken-4">Contact Me</span>
					<p>
						{{$profile->user_phone}}
					</p>
				</div>
			</div>
			<ul class="collapsible collection with-header" data-collapsible="expandable">
				<li class="collection-header custom-pink1-text"><h5>{{ $profile->user_fullname }} Info</h5></li>
				<li>
					<div class="collapsible-header">Location</div>
					<div class="collapsible-body grey lighten-3">
						
						<p>{{$profile->user_address}}, <b>{{$profile->user_city}}</b></p>
					</div>
				</li>
				<li>
					<div class="collapsible-header">User Type</div>
					<div class="collapsible-body grey lighten-3">
						
						<p><b>{{$profile->type->usertype_name}}</b></p>
					</div>
				</li>
				<li>
					<div class="collapsible-header">Date of Birth</div>
					<div class="collapsible-body grey lighten-3">
						
						<p><b>{{$profile->user_DOB}}</b></p>
					</div>
				</li>
			</ul>
			<div class="card">
				<table border=3 cellspacing=3 cellpadding=3> 
					<tr>
						<td colspan="7" align=center><b>December 2016</b></td> 
					</tr>
					<tr> 
						<td align=center><b>Sun</b></td>
						<td align=center><b>Mon</b></td>
						<td align=center><b>Tue</b></td>
						<td align=center><b>Wed</b></td>
						<td align=center><b>Thu</b></td>
						<td align=center><b>Fri</b></td>
						<td align=center><b>Sat</b></td>
					</tr>
					<tr> 
						<td class="grey" align=center></td>
						<td class="grey" align=center></td>
						<td class="grey" align=center></td>
						<td class="grey" align=center></td>
						<td align=center>1</td>
						<td align=center>2</td>
						<td align=center>3</td>
					</tr>
					<tr> 
						<td align=center>4</td>
						<td align=center>5</td>
						<td align=center>6</td>
						<td align=center>7</td>
						<td align=center>8</td>
						<td align=center>9</td>
						<td class="custom-pink1" align=center>10</td>
					</tr>
					<tr> 
						<td align=center>11</td>
						<td align=center>12</td>
						<td align=center>13</td>
						<td align=center>14</td>
						<td align=center>15</td>
						<td align=center>16</td>
						<td align=center>17</td>
					</tr>
					<tr> 
						<td align=center>18</td>
						<td align=center>19</td>
						<td align=center>20</td>
						<td align=center>21</td>
						<td align=center>22</td>
						<td align=center>23</td>
						<td align=center>24</td>
					</tr>
					<tr> 
						<td align=center>25</td>
						<td align=center>26</td>
						<td align=center>27</td>
						<td align=center>28</td>
						<td align=center>29</td>
						<td align=center>30</td>
						<td align=center>31</td>
					</tr>
					<tr> 
						<td class="grey" align=center>1</td>
						<td class="grey" lign=center>2</td>
						<td class="grey" lign=center>3</td>
						<td class="grey" lign=center>4</td>
						<td class="grey" lign=center>5</td>
						<td class="grey" lign=center>6</td>
						<td class="grey" align=center>7</td>

					</tr>
					</table>
			</div>
		</div>
		{{-- SECTION LEFT END --}}

		{{-- SECTION RIGHT START--}}
		<div class="col s12 m7 l8" style="">
			<div class="card-panel" style="height: auto;">
				<h4 class="custom-pink1-text">Portfolio</h4>
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
			{{-- COLLECTION JOB START--}}
			<ul class="collapsible collection with-header" data-collapsible="expandable">
				<li class="collection-header custom-pink1-text"><h5>Bookings</h5></li>
				<li>
					<div class="collapsible-header">Service Example<span class="new badge white-text" data-badge-caption="">Rp. Price</span></div>
					<div class="collapsible-body grey lighten-3">
						<p>
							Service Example
						</p>
					</div>
				</li>
			</ul>
			{{-- COLLECTION JOB END--}}

			{{-- COLLECTION MAKEUP-CLASS START --}}
			<ul class="collapsible collection with-header" data-collapsible="expandable">
				<li class="collection-header custom-pink1-text"><h5>Make-upClass</h5></li>
				@foreach($classowned as $class)
				<li>
					<div class="collapsible-header">{{$class->class_name}}</div>
					<div class="collapsible-body grey lighten-3">
						<p>
							@if($owned==0)
							<a class="secondary-content custom-pink1-text"><i class="material-icons">delete</i></a>
							<a class="secondary-content custom-pink1-text" href="#class1"><i class="material-icons">edit</i></a>
							@else
							<a href="/profileclass/{{$class->id}}" class="secondary-content custom-pink1-text"><i class="material-icons">input</i></a>
							@endif
							<?php
							$timestamp1 = strtotime($class->class_startdate);
							$timestamp2 = strtotime($class->class_enddate);

							$day1 = date('l', $timestamp1);
							$day2 = date('l', $timestamp2);
							?>
							<b>{{$day1}}</b>, <b>{{$class->class_startdate}}</b><br>until<br><b>{{$day2}}</b>, <b>{{$class->class_enddate}}</b><br><br>
							{{$class->class_description}}
						</p>
					</div>
					@if($owned==0)
					<div id="class1" class="modal bottom-sheet">
						<div class="modal-content">
							{{-- MODAL CONTENT START --}}
							<div class="row">
								<form class="col s12">
									<div class="row">
										<div class="input-field col s12">
											<input id="txtClassname" name="txtClassname" type="text" class="validate">
											<label for="txtClassname">{{$class->class_name}}</label>
										</div>
										<div class="input-field col s12">
											<input id="txtClassprice" name="txtClassprice" type="number" class="validate">
											<label for="txtClassprice">Class Price</label>
										</div>
										<div class="input-field col s12">
											<select multiple>
												<option value="" disabled selected>Choose day(s)</option>
												<option value="1">Monday</option>
												<option value="2">Tuesday</option>
												<option value="3">Wednesday</option>
												<option value="4">Thursday</option>
												<option value="5">Friday</option>
												<option value="6">Saturday</option>
												<option value="7">Sunday</option>
											</select>
											<label>Class Day(s)</label>
										</div>
										<div class="input-field col s12">
											<textarea id="txtClassname" class="materialize-textarea"></textarea>
											<label for="txtClassname">Class Description</label>
										</div>
									</div>
									<div class="modal-footer custom-pink1-text">
										<a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Submit</a>
									</div>
								</form>
							</div>
							{{-- MODAL CONTENT END --}}
						</div>
					</div>
					@endif
				</li>
				@endforeach
			</ul>
			{{-- COLLECTION MAKEUP-CLASS END --}}
			
			{{-- COLLECTION MAKEUP-WORKSHOP START --}}
			<ul class="collapsible collection with-header" data-collapsible="expandable">
				<li class="collection-header custom-pink1-text"><h5>Make-Up Workshop</h5></li>
				@foreach($workshopowned as $workshop)
				<li>
					<div class="collapsible-header">{{$workshop->workshop_name}}</div>
					<div class="collapsible-body grey lighten-3">
						<p>
							@if($owned==0)
							<a class="secondary-content custom-pink1-text"><i class="material-icons">delete</i></a>
							<a class="secondary-content custom-pink1-text" href="#workshop1"><i class="material-icons">edit</i></a>
							
							@else
							<a href="/profileworkshop/{{$workshop->id}}" class="secondary-content custom-pink1-text"><i class="material-icons">input</i></a>
							@endif
							<?php
							$timestamp = strtotime($workshop->workshop_date);

							$day = date('l', $timestamp);
							?>
							<b>{{$day}}, {{$workshop->workshop_date}}</b><br>
							{{$workshop->workshop_description}}
						</p>
					</div>
					@if($owned==0)
					<div id="workshop1" class="modal bottom-sheet">
						<div class="modal-content">
							{{-- MODAL CONTENT START --}}
							<div class="row">
								<form class="col s12">
									<div class="row">
										<div class="input-field col s12">
											<input id="txtWorkshopname" name="txtWorkshopname" type="text" class="validate">
											<label for="txtWorkshopname">{{$workshop->workshop_name}}</label>
										</div>
										<div class="input-field col s12">
											<input id="txtWorkshopdate" name="txtWorkshopdate" type="date" class="datepicker">
										</div>
										<div class="input-field col s12">
											<textarea id="txtWorkshopDescription" class="materialize-textarea"></textarea>
											<label for="txtWorkshopDescription">Workshop Description</label>
										</div>
									</div>
									<div class="modal-footer custom-pink1-text">
										<a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Submit</a>
									</div>
								</form>
							</div>
							{{-- MODAL CONTENT END --}}
						</div>
					</div>
					@endif
				</li>
				@endforeach
			</ul>
			{{-- COLLECTION MAKEUP-WORKSHOP END --}}
		</div>
		{{-- SECTION RIGHT END--}}
	</div>
</div>
</div>
@endsection