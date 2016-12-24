@extends('layouts.app')

@section('content')
	<div class="container white padding-20 add-margin-50">
		@if(Session::has('message'))
		<div class="center"><span>{{Session::get('message')}}</span></div>
		@else
		<h1 class="center bold">Sign Up<span class="dot">.</span></h1>
		<hr>
		@if(!empty($errors->first()))
			<div class="center error-msg">{{$errors->first()}}</div>
		@endif
		<form action="{{url('/signup/doregister')}}" method="POST">
		 {{ csrf_field() }}
			<div class="row">
				<div class="input-field col s12">
					 <input id="email" type="email" class="validate" name="email" value="{{old('email')}}">
          			 <label for="email">Email</label>
				</div>
			</div>
			<div class="row">
				<div class="input-field col s12 m6 l6">
					<input id="password" type="password" class="validate" name="password" value="{{old('password')}}">
          			<label for="password">Password</label>
				</div>
				<div class="input-field col s12 m6 l6">
					<input id="confpassword" type="password" class="validate" name="confPassword">
          			<label for="confpassword">Confirm Password</label>
				</div>
			</div>
			<div class="row">
				<div class="input-field col s12 m6 l6">
					<input id="firstname" type="text" class="validate" name="firstname" value="{{old('firstname')}}">
          			<label for="firstname">First Name</label>
				</div>
				<div class="input-field col s12 m6 l6">
					<input id="lastname" type="text" class="validate" name="lastname" value="{{old('lastname')}}">
          			<label for="lastname">Last Name</label>
				</div>
			</div>
			<div class="row">
				<div class="input-field col s12 m6 l6">
					<input id="dateofbirth" type="date" class="datepicker" name="dateofbirth" value="{{old('dateofbirth')}}">
					<label for="dateofbirth">Date of Birth</label>
				</div>
				<div class="input-field col s12 m6 l6">
					<label>Gender</label></br>
					<input name="gender" type="radio" id="male" value="male"/>
      				<label for="male">Male</label>
      				<input name="gender" type="radio" id="female" value="female"/>
      				<label for="female">Female</label>
				</div>
			</div>
			<div class="row">
				<div class="input-field col s12 m4 l4">
					<input id="state" type="text" class="validate" name="state">
          			<label for="state">State</label>
				</div>
				<div class="input-field col s12 m4 l4">
					<input id="state" type="text" class="validate" name="city">
          			<label for="city">City</label>
				</div>
				<div class="input-field col s12 m4 l4">
					<input id="zip" type="text" class="validate" name="zip">
          			<label for="zip">ZIP</label>
				</div>
			</div>
			<div class="row">
				<div class="input-field col s12">
					<textarea id="address" class="materialize-textarea" name="address" value="{{old('address')}}"></textarea>
          			<label for="address">Address</label>
				</div>
			</div>
			<div class="row">
				<div class="input-field col s12 m4 l4">
					<select name="typename">
				    	<option value="" disabled selected>Choose your option</option>
				    	<option value="normal">Normal</option>
				    	<option value="makeupartist">Makeup Artist</option>
				    </select>
				    <label >Sign up as : </label>
				</div>
			</div>
			<div class="row">
				<div class="col s12 m2 l2 offset-m10 offset-l10">
					<button class="btn custom-pink1" type="submit">Submit</button>
				</div>
			</div>
		</form>
		@endif
	</div>
	<script>
		$('.datepicker').pickadate({
			selectMonths: true, // Creates a dropdown to control month
			selectYears: 200, // Creates a dropdown of 15 years to control year
		});

		$(document).ready(function() {
    		$('select').material_select();
  		});
          
	</script>
@endsection