@extends('layouts.app')

@section('content')
	<div class="container white padding-20 add-margin-50">
		<form>
			<div class="row">
				<div class="col s12">
					<span>Email</span></br>
					<input type="text" placeholder="Enter email here..">
				</div>
			</div>
			<div class="row">
				<div class="col s12 m6 l6">
					<span>Password</span></br>
					<input type="text" placeholder="Enter password here..">
				</div>
				<div class="col s12 m6 l6">
					<span>Confirm password</span></br>
					<input type="text" placeholder="Enter password here..">
				</div>
			</div>
			<div class="row">
				<div class="col s12 m6 l6">
					<span>First Name</span></br>
					<input type="text" placeholder="Enter first name here..">
				</div>
				<div class="col s12 m6 l6">
					<span>Last Name</span></br>
					<input type="text" placeholder="Enter last name here..">
				</div>
			</div>
			<div class="row">
				<div class="col s12 m6 l6">
					<span>Date of Birth</span></br>
					<input type="text" placeholder="Enter date of birth here..">
				</div>
				<div class="col s12 m6 l6">
					<span>Gender</span></br>
					<input name="group1" type="radio" id="male"/>
      				<label for="male">Male</label>
      				<input name="group1" type="radio" id="female" />
      				<label for="female">Female</label>
				</div>
			</div>
			<div class="row">
				<div class="col s12 m4 l4">
					<span>State</span></br>
					<input type="text" placeholder="Enter state here..">
				</div>
				<div class="col s12 m4 l4">
					<span>City</span></br>
					<input type="text" placeholder="Enter city here..">
				</div>
				<div class="col s12 m4 l4">
					<span>Zip</span></br>
					<input type="text" placeholder="Enter zip code here..">
				</div>
			</div>
			<div class="row">
				<div class="col s12">
					<span>Address</span>
					<textarea placeholder="Enter address here.."></textarea>
				</div>
			</div>
		</form>
	</div>

@endsection