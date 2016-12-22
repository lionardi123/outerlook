@extends('layouts.app')

@section('content')
  <div id="index-banner" class="parallax-container categories-header valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <h1 class="header center peach-text valign">Makeup Class</h1>
      </div>
    </div>
    <div class="parallax"><img src="{{{asset('image/category-header1.jpg')}}}" alt="Unsplashed background img 1"></div>
  </div>
  <div class="categories-container peach">
  	<div class="categories-cards">
    <?php 
      for ($x = 0; $x <= 3; $x++) { ?>
         <div class="row">
        <div class="col s12 m3 l3 offset-m3 offset-l3">
          <div class="card small-card">
            <div class="card-image">
              <img class="max-size" src="{{{asset('/image/makeup-class1.jpg')}}}">
            </div>
            <div class="card-content">
              <div class="card-profile">
                <img class="responsive-img" src="{{{asset('/image/round-profile1.png')}}}">
              </div>
            </div>
          </div>
        </div>
        <div class="col s12 m3 l3">
          <div class="card small-card">
            <div class="card-image">
              <img class="max-size" src="{{{asset('/image/makeup-class2.jpg')}}}">
            </div>
            <div class="card-content">
              <div class="card-profile">
                <img class="responsive-img" src="{{{asset('/image/round-profile1.png')}}}">
              </div>
            </div>
          </div>
        </div>
        <div class="col s12 m3 l3">
          <div class="card small-card">
            <div class="card-image max-size">
              <img class="max-size" src ="{{{asset('/image/makeup-class3.jpg')}}}">
            </div>
            <div class="card-content">
              <div class="card-profile">
                <img class="responsive-img" src="{{{asset('/image/round-profile1.png')}}}">
              </div>
            </div>
          </div>
        </div>
      </div>

    <?php
      } 
    ?>
     
  	</div>
  </div>
@endsection