@extends('layouts.app')

@section('content')
<?php
	$sanitized = htmlspecialchars($article->article_body, ENT_QUOTES);
?>
	<div class="container white padding-20 add-margin-5">
		<div class="row">
			<div class="col s12">
				<h4>{{$article->article_title}}</h4>
				<span id="posted-by">Posted by <span class="peach-text">{{$article->user->user_fullname}}</span> on 12:15AM 12/23/2016</span>
				<hr>
			</div>
		</div>
		<div class="row">
			<div class="col s12">
				<img class="responsive-img" src="{{{asset('/image/article-content1.jpg')}}}">
			</div>
		</div>
		<div class="row">
			<div class="col s12">	
				<?php
				echo str_replace(array("\r\n", "\n"), array("<p>", "</p>"), $sanitized);
				?>
			</div>
		</div>
		@if(Auth::user() && Auth::user()->user_usertypeid==3)
			<button id="edit-btn" class="btn">Edit</button>
			<form role="form" action="{{url("/article/{$article->id}/edit")}}" method="post">
			 {{ csrf_field()}}
				<div class="col s12 edit-form">
					<input type="text" placeholder="{{$article->article_title}}" name="article_title">
					<textarea name="article_body" class="materialize-textarea">{{$article->article_body}}</textarea>
					<button type="submit" class="btn">Submit</button>
				</div>	

			</form>
		@endif
	</div>
	<script>
		$(document).ready(function(){
			$(".edit-form").hide();

			$("#edit-btn").click(function(){
				$(".edit-form").toggle();
			});
		});
	</script>
@endsection