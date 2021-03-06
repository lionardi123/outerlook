@extends('layouts.app')

@section('content')
<div class="container"> 
	<br>
	<div class="row center">
		<div class="col s12">
			<img style="height:300px;" class="responsive-img" src="{{{asset('/image/OUTERLOOK-10.jpg')}}}">
		</div>
	</div>
	<form action="{{url('/categories')}}" method="POST">
	{{csrf_field()}}
		<div class="row">
			<div class="input-field col s12 m5 l5 offset-m1 offset-l1">
				<select name="category">
					<option value="" disabled selected>Choose your option</option>
					<option value="1">Makeup Artist</option>
					<option value="2">Makeup Class</option>
					<option value="3">Workshop</option>
				</select>
				<label>Categories</label>
			</div>
			<div class="input-field col s12 m5 l5">
				<select name="city">
					<option value="" disabled selected>Choose your option</option>
					<option value="Jakarta">Jakarta</option>
					<option value="Tangerang">Tangerang</option>
				</select>
				<label>City</label>
			</div>
			<div class="input-field col s12 m2 l1">
				<button class="btn custom-pink1" type="submit" name="action">
					<i class="material-icons search">search</i>
				</button>
			</div>
		</div>
	</form>
</div>
<div class="row">
	<div class="col s12">
		<img class="responsive-img center" src="{{{asset('/image/OUTERLOOK-20.jpg')}}}">
	</div>
</div>
<div class="container">
	<div class="section">
		<div class="about-us" style="display:inline-block">
			<h1 class="center bold">About Us<span class="dot">.</span></h1>
			<div id="about-us-text" class="half-width left">
				<p class="flow-text italic small">I'm a paragraph. Click here to add your own text and edit me. It’s easy. Just click “Edit Text” or double click me and you can start adding your own content and make changes to the font. I’m a great place for you to tell a story and let your users know a little more about you.</br></br>
					I'm a paragraph. Click here to add your own text and edit me. It’s easy. Just click “Edit Text” or double click me and you can start adding your own content and make changes to the font. I’m a great place for you to tell a story and let your users know a little more about you.
				</p>
			</div>
			<div class="half-width left" id="about-us-image">
				<img class="responsive-img" src="{{{asset('image/OUTERLOOK-8.jpg')}}}">
			</div>
		</div>
	</div>
</div>
<br>
<br>
<br>
<br>
<div class="parallax-container">
	<div class="container">
		<div class="section">
			<div id="articles">
				<h1 class="center bold" style="color:black">Articles<span class="dot">.</span></h1>
				<?php 
				use App\Article;
				$i = 1;
				?>
				<div class="row">
				@for($i=1;$i<=3;$i++)
				<?php
				$article = Article::whereId($i)->first();
				?>
				<div class="col s12 m4 l4">
					<a href="{{url("/article/$i")}}">
						<div class="card">
							<div class="card-image index-card">
								<img class="index-card" src="{{{asset("/image/$article->id/$article->article_imagecard")}}}">
								<div class="card-titles title-opacity"><span class="text-responsive">{{$article->article_title}}</span><span class="read-more">Read more>></span>
								</div>
							</div>
						</div>
					</a>
				</div>	
				@endfor
				</div>
			</div>
		</div>
	</div>
	<div class="parallax"><img src="{{asset('image/article-content1.jpg')}}"></div>
</div>
<br>
<br>
<br>
<br>
<div id="contact" class="container peach full-width">
	<div class="section">
		<div class="form white center">
			<h1 class="center bold">Contact<span class="dot">.</span></h1>
			<hr>
			<div class="contact-desc">
				<span class="italic">www.outerlook.id</span>
			</div>
			<div class="contact-desc">
				<span class="italic">0821 . 1398 . 3824</span>
			</div>
			<div class="contact-desc">
				<span class="italic">line : @outerlookid</span>
			</div>
			<hr> 
			<form class="contact-us left-align">
				<div class="row">
					<div class="col s12 input-field ">
						<input type="text" id="name" class="validate">
						<label for="name">Name</label>
					</div>
				</div>
				<div class="row">
					<div class="col s12 input-field ">
						<input type="email" id="email" class="validate">
						<label for="email">Email</label>
					</div>
				</div>
				<div class="row">
					<div class="col s12 input-field ">
						<input type="text" id="subject" class="validate">
						<label for="subject">Subject</label>
					</div>
				</div>
				<div class="row">
					<div class="col s12 input-field">
						<textarea id="message" class="materialize-textarea"></textarea>
						<label for="message">Message</label>
						<button class="right btn custom-pink1" type="submit">Send</button>
					</div>
				</div>
				<div class="row">
					<div class="col s12 center">
						<div class="img">
							<img style="max-height: 40px;" src="{{asset('image/instagram.png')}}">
							<img style="max-height: 40px;" class="responsive-img" src="{{asset('image/facebook.png')}}">
						</div>
					</div>
				</div>
			</form>  
		</div>
	</div>
</div>

<script>
	$(document).ready(function() {
		$('select').material_select();
	});

</script>
@endsection