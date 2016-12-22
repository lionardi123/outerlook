@extends('layouts.app')

@section('content')
	<div class="container white padding-20 add-margin-50">
		<form>
			<div class="row">
				<div class="input-field col s12">
					 <input id="email" type="email" class="validate">
          			 <label for="email">Email</label>
				</div>
			</div>
			<div class="row">
				<div class="input-field col s12 m6 l6">
					<input id="password" type="password" class="validate">
          			<label for="password">Password</label>
				</div>
				<div class="input-field col s12 m6 l6">
					<input id="confpassword" type="password" class="validate">
          			<label for="confpassword">Confirm Password</label>
				</div>
			</div>
			<div class="row">
				<div class="input-field col s12 m6 l6">
					<input id="firstname" type="text" class="validate">
          			<label for="firstname">First Name</label>
				</div>
				<div class="input-field col s12 m6 l6">
					<input id="lastname" type="text" class="validate">
          			<label for="lastname">Last Name</label>
				</div>
			</div>
			<div class="row">
				<div class="input-field col s12 m6 l6">
					<input id="dateofbirth" type="date" class="datepicker">
					<label for="dateofbirth">Date of Birth</label>
				</div>
				<div class="input-field col s12 m6 l6">
					<label>Gender</label></br>
					<input name="group1" type="radio" id="male"/>
      				<label for="male">Male</label>
      				<input name="group1" type="radio" id="female" />
      				<label for="female">Female</label>
				</div>
			</div>
			<div class="row">
				<div class="input-field col s12 m4 l4">
					<input id="state" type="text" class="validate">
          			<label for="state">State</label>
				</div>
				<div class="input-field col s12 m4 l4">
					<input id="state" type="text" class="validate">
          			<label for="city">City</label>
				</div>
				<div class="input-field col s12 m4 l4">
					<input id="zip" type="text" class="validate">
          			<label for="zip">ZIP</label>
				</div>
			</div>
			<div class="row">
				<div class="input-field col s12">
					<textarea id="textarea1" class="materialize-textarea"></textarea>
          			<label for="textarea1">Textarea</label>
				</div>
			</div>
			<div class="row">
				<div class="col s12 m2 l2 offset-m10 offset-l10">
					<button class="btn custom-pink1" type="submit">Submit</button>
				</div>
			</div>
		</form>
	</div>
	<script>
		$('.datepicker').pickadate({
			selectMonths: true, // Creates a dropdown to control month
			selectYears: 15 // Creates a dropdown of 15 years to control year
		});
	</script>
@endsection