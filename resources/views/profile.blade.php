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
	<div class="row asd center" style="padding-left: 11.250px; border-right-width: 11.250px;">
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
					<span class="card-title activator grey-text text-darken-4">Vembru<i class="material-icons right">more_vert</i></span>
					<p>
						<a class="custom-pink light black-text btn" href="#">Book</a>
					</p>
				</div>
				<div class="card-reveal">
					<span class="card-title grey-text text-darken-4">About me<i class="material-icons right">close</i></span>
					<p>
						Vembry is vembru D:
					</p><br>
					<span class="card-title grey-text text-darken-4">Contact Me</span>
					<p>
						asdasdasas
					</p>
				</div>
			</div>
			<div class="collection">
				<a href="#!" class="collection-item black-text">Make Up Wedding<span class="new badge custom-pink black-text" data-badge-caption="">Rp. 200000</span></a>
				<a href="#!" class="collection-item black-text">Fermak Muka<span class="new badge custom-pink black-text" data-badge-caption="">Rp. 200000</span></a>
				<a href="#!" class="collection-item black-text">Teman malam<span class="new badge custom-pink black-text" data-badge-caption="">Rp. 200000</span></a>
				<a href="#!" class="collection-item black-text">Teman siang<span class="new badge custom-pink black-text" data-badge-caption="">Rp. 200000</span></a>
			</div>
		</div>

		{{-- SECTION RIGHT --}}
		<div class="col s12 m7 l8">
			<div class="card-panel" style="height: auto;">
				<h1>Portfolio</h1>
				<div class="row">
				<?php for($i=0;$i<10;$i++){ ?>
					<div class="col s2">
						<!-- Modal Trigger -->
						<a class="modal-trigger waves-effect waves-light" href="#modal<?php echo $i;?>">
							<img style="width: 100px;" src="{{ asset('image/profile wall.jpg') }}">
						</a>
						<p style="margin-top: 0px; margin-bottom: 20px;">This is Photo Description</p>

						<!-- Modal Structure -->
						<div id="modal<?php echo $i;?>" class="modal modal-fixed-footer">
							<div class="modal-content center">
								<img style="margin: auto; width: 90%; height: auto;" src="{{ asset('image/profile wall.jpg') }}">
							</div>
							<div class="modal-footer">
								<a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Dislike</a>
								<a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Like</a>
							</div>
						</div>
					</div>
					<script type="text/javascript">
						$(document).ready(function(){
							$('.modal').modal();
						});
					</script>
				<?php } ?>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
@endsection