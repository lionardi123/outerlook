@extends('layouts.app')

@section('content')
<div class="container"> 
	<div class="row">
		<div class="col s12">
			<h4 class="bold">Booking History<span class="dot">.</span></h4><br>
			<span>You currently have 2 bookings</span>
			<hr>
		</div>
	</div>
	<div class="row ">
		
		<div class="col s12 " style="border-bottom:solid 0.5px;border-color: #9fa8a3; padding: 10px 0px 10px 30px;font-size: 0.8rem">
			<img class="responsive-img circle" src="{{{asset("/image/avatars/4/user_avatar4.jpg")}}}" style="max-height:60px;position: relative;">
			<span class="bold" style="position:absolute;padding-left: 40px;">Makeup Artist : Jennifer</span>
			<span class="bold" style="position:absolute;padding-left: 40px;padding-top: 20px;">Service Name : Wedding Makeup</span>
			<span class="bold" style="position:absolute;padding-left: 40px;padding-top: 40px;">Service Date &nbsp;&nbsp;: January 12, 2017</span>
			<span class="bold" style="position:absolute;padding-left: 300px;padding-top: 20px;">Number of persons &nbsp;&nbsp;: 2 persons</span>
			<span class="bold" style="position:absolute;padding-left: 600px;padding-top: 20px;">Price : &nbsp;&nbsp;: Rp. 2.100.000</span>
		</div>
		<div class="col s12 " style="border-bottom:solid 0.5px;border-color: #9fa8a3; padding: 10px 0px 10px 30px;font-size: 0.8rem">
			<img class="responsive-img circle" src="{{{asset("/image/avatars/4/user_avatar4.jpg")}}}" style="max-height:60px;position: relative;">
			<span class="bold" style="position:absolute;padding-left: 40px;">Makeup Artist : Jennifer</span>
			<span class="bold" style="position:absolute;padding-left: 40px;padding-top: 20px;">Service Name : Wedding Makeup</span>
			<span class="bold" style="position:absolute;padding-left: 40px;padding-top: 40px;">Service Date &nbsp;&nbsp;: January 12, 2017</span>
			<span class="bold" style="position:absolute;padding-left: 300px;padding-top: 20px;">Number of persons &nbsp;&nbsp;: 2 persons</span>
			<span class="bold" style="position:absolute;padding-left: 600px;padding-top: 20px;">Price : &nbsp;&nbsp;: Rp. 2.100.000</span>
		</div>
		<div class="col s12 " style="padding: 10px 0px 10px 30px;font-size: 0.8rem;height: 100px">
			<span class="bold" style="font-size:1.2rem;position:absolute;padding-left: 600px;padding-top: 20px;">Total : &nbsp;&nbsp;: Rp. 4.200.000</span>
		</div>
		<hr>
		<div class="col s12 right">
			<button class="btn waves-effect waves-light right custom-pink1" type="submit" name="action">Checkout
    			<i class="material-icons right">send</i>
  			</button>
		</div>
	</div>
</div>

<script>
	$(document).ready(function() {
		$('select').material_select();
	});

</script>
@endsection