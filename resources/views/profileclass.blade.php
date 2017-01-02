@section('title')
<title> 
	Class Profile
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

@endsection