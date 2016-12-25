@extends('layouts.app')

@section('content')
<?php
	$sanitized = htmlspecialchars($article->article_body, ENT_QUOTES);
?>
	<div class="container white padding-20 add-margin-5">
		<div class="row">
			<div class="col s12">
				<h4>{{$article->article_title}}</h4>
				<span id="posted-by">Posted by <span class="peach-text">{{$article->user->user_fullname}}</span> on {{$article->updated_at}}</span>
				<hr>
			</div>
		</div>
		<div class="row">
			<div class="col s12">
				<img class="responsive-img" src="{{asset("/image/{$article->id}/{$article->article_imagedetail}")}}">
			</div>
		</div>
		<div class="row">
			<div class="col s12">	
				<?php
				echo str_replace(array("\r\n", "\n"), array("<p>", "</p>"), $sanitized);
				?>
			</div>
		</div>
		@if(Auth::user() && Auth::user()->user_usertypeid==1)
		<div class="row input-field">

			<button id="edit-btn" class="btn">Edit</button>
			 @if(!empty($errors->first()))
                <div class="center error-msg">{{$errors->first()}}</div>
             @endif
			<form role="form" action="{{url("/article/{$article->id}/edit")}}" method="post" enctype="multipart/form-data">
			 {{ csrf_field()}}
				<div class="col s12 edit-form">
					<input type="text" placeholder="{{ $article->article_title}}" name="article_title">
					<textarea name="article_body" class="materialize-textarea">{{$article->article_body}}</textarea>
					<div class="file-field">
						<img class="responsive-img" src="{{asset("/image/{$article->id}/{$article->article_imagedetail}")}}">
						<div class="btn">
							<span>Image Detail</span>
							<input type="file" name="imagedetail"> 
						</div>
						<div class="file-path-wrapper">
							<input class="file-path validate" type="text">
						</div>
					</div>
					<div class="file-field">
						<img class="responsive-img" src="{{asset("/image/{$article->id}/{$article->article_imagecard}")}}">
						<div class="btn">
							<span>Image Card</span>
							<input type="file" name="imagecard"> 
						</div>
						<div class="file-path-wrapper">
							<input class="file-path validate" type="text">
						</div>
					</div>
				</div>	
				<div class="col s12 edit-form">
				<input type="submit" class="btn" name="action"></button>
				</div>
			</form>
		</div>
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