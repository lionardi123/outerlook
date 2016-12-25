@extends('layouts.app')

@section('content')
<?php
		$sanitized = htmlspecialchars($article->article_body, ENT_QUOTES);

?>
	<div class="container white padding-20 add-margin-5">
		<div class="row">
			<div class="col s12">
				<h4>{{$article->article_title}}</h4>
				<span id="posted-by">Posted by <span class="peach-text">{{$article->admin_id}}</span> on 12:15AM 12/23/2016</span>
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
	</div>

@endsection