@extends('layouts.app')
<?php
    use App\User;
    use App\Makeupclass;
    use App\Makeupworkshop;
?>
@section('content')
  <div id="index-banner" class="parallax-container categories-header valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <h1 class="header center peach-text valign">
        @if($category=='1')
        Makeup Artists
        @elseif($category=='2')
        Makeup Class
        @else
        Workshop
        @endif
        </h1>
      </div>
    </div>
    <div class="parallax"><img src="{{{asset('image/category-header1.jpg')}}}" alt="Unsplashed background img 1"></div>
  </div>
  
  <div class="categories-container peach">
  	<div class="categories-cards">
      <div class="row">
        <div class="white sidebar">
          <form>
            <div class="row padding-top-sidebar input-field">
              <div class="col s12">
                <div class="nav-wrapper">
                  <h5 class="gray">Filter Results</h5>
                  <input type="text" class="search-box grey gray" placeholder="Search">
                  <span class="search-section-header">Categories</span>
                  <ul class="search-section"> 
                    <li><input type="radio" name="categories" id="allcategories"><label for="allcategories">All Categories</li>
                    <li><input type="radio" name="categories" id="wedding"><label for="wedding">Wedding</li>
                    <li><input type="radio" name="categories" id="party"><label for="party">Party</li>
                    <li><input type="radio" name="categories" id="prewedding"><label for="prewedding">Pre-wedding</li>
                  </ul><br>
                  <span class="search-section-header">Location</span>
                  <select class="search-section-select">
                    <option value="0">Semua Lokasi</option>
                    <option value="1">Jakarta</option>
                    <option value="2">Tangerang</option>
                  </select><br>
                  <span class="search-section-header">Date</span>
                  <input id="dateofbirth" type="date" class="datepicker" name="dateofbirth" value="{{old('dateofbirth')}}" placeholder="Pilih tanggal">
                  <span class="search-section-header">Price</span>
                  <div id="range">
                    <div id="range-input" class="custom-pink1">
                    </div>
                  </div>
                  <br>
                  <div style="display:inline-block;" class="left" id="start-range"></div>
                  <div style="display:inline-block;" class="right" id="end-range"></div><br><br>
                  <input  type="hidden" name="start-range" id="startinput"/>
                  <input  type="hidden" name="end-range" id="endinput"/>
                  <button type="submit" class="btn custom-pink1">Search</button>
                </div>
              </div>
            </div>
          </form>
        </div>
    <?php
    $users = User::where([['user_usertypeid','3'],
                        ['user_city','like','%'.$city.'%'],
                        ])
                    ->orderBy('updated_at','desc')
                    ->get();
    $makeupclasses = Makeupclass::where('class_city','like','%'.$city.'%')
                                  ->orderBy('updated_at','desc')
                                  ->get();
    $makeupworkshops = Makeupworkshop::where('workshop_city','like','%'.$city.'%')
                                  ->orderBy('updated_at','desc')
                                  ->get();
    $i=1;
    ?>
    @if($category=='1')
    @foreach($users as $user)     
        @if($i==1||($i-1)%3==0)
        <div class="col s12 m3 l3 offset-l3 offset-m3">
        @else
        <div class="col s12 m3 l3">
        @endif
          <div class="card small-card">
            <div class="card-image">
              <img class="max-size" src="{{{asset("/image/cards_profile/{$user->id}/{$user->user_cardimage}")}}}">
            </div>
            <div class="card-content">
              <div class="card-profile left">
                <img class="responsive-img circle" src="{{{asset("/image/avatars/{$user->id}/$user->user_avatar")}}}">
              </div>
               <div class="card-profile-text left">
                  <span class="profile-name">{{$user->user_fullname}}</span></br>
                  <span class="location gray">{{$user->user_city}}</span></br>
                  <div class="rating">
                    <span>&starf;</span><span>&starf;</span><span>&starf;</span><span>&starf;</span><span>&starf;</span>
                  </div>
              </div>
            </div>
          </div>
        </div>
        <?php
          $i++;
        ?>
    @endforeach
    @elseif($category=='2')
    @foreach($makeupclasses as $makeupclass)     
        @if($i==1||($i-1)%3==0)
        <div class="col s12 m3 l3 offset-l3 offset-m3">
        @else
        <div class="col s12 m3 l3">
        @endif
          <div class="card small-card">
            <div class="card-image">
              <img class="max-size" src="{{{asset("/image/makeupclass/{$makeupclass->id}/{$makeupclass->class_avatar}")}}}">
            </div>
            <div class="card-content">
              <div class="card-profile left">
                <img class="responsive-img circle" src="{{{asset("/image/avatars/{$makeupclass->owner->id}/{$makeupclass->owner->user_avatar}")}}}">
              </div>
               <div class="card-profile-text left">
                  <span class="profile-name">{{$makeupclass->owner->user_fullname}}</span></br>
                  <span class="location gray">{{$makeupclass->class_city}}</span></br>
                  <div class="rating">
                    <span>&starf;</span><span>&starf;</span><span>&starf;</span><span>&starf;</span><span>&starf;</span>
                  </div>
              </div>
            </div>
          </div>
        </div>
        <?php
          $i++;
        ?>
    @endforeach
    @else
     @foreach($makeupworkshops as $makeupworkshop)     
        @if($i==1||($i-1)%3==0)
        <div class="col s12 m3 l3 offset-l3 offset-m3">
        @else
        <div class="col s12 m3 l3">
        @endif
          <div class="card small-card">
            <div class="card-image">
              <img class="max-size" src="{{{asset("/image/makeupworkshop/{$makeupworkshop->id}/{$makeupworkshop->workshop_avatar}")}}}">
            </div>
            <div class="card-content">
              <div class="card-profile left">
                <img class="responsive-img circle" src="{{{asset("/image/avatars/{$makeupworkshop->owner->id}/{$makeupworkshop->owner->user_avatar}")}}}">
              </div>
               <div class="card-profile-text left">
                  <span class="profile-name">{{$makeupworkshop->owner->user_fullname}}</span></br>
                  <span class="location gray">{{$makeupworkshop->workshop_city}}</span></br>
                  <div class="rating">
                    <span>&starf;</span><span>&starf;</span><span>&starf;</span><span>&starf;</span><span>&starf;</span>
                  </div>
              </div>
            </div>
          </div>
        </div>
        <?php
          $i++;
        ?>
    @endforeach
    @endif
      </div>
  	</div>
  </div>
  <script>
  $(document).ready(function() {
    $('select').material_select();
  });
   $('.datepicker').pickadate({
      selectMonths: true, // Creates a dropdown to control month
      selectYears: 200, // Creates a dropdown of 15 years to control year
  });

 var slider = document.getElementById('range-input');
    
    noUiSlider.create(slider, {
     start: [50000, 5000000],
     connect: true,
     step: 50000,
     range: {
       'min': 50000,
       'max': 5000000
     },
     format: wNumb({
       decimals: 0,
       thousand: '.',
       prefix:'Rp ',
     })
    });
    var startrange = document.getElementById('start-range');

    slider.noUiSlider.on('update', function( values, handle ) {
      startrange.innerHTML = values[0];
    });

    var endrange = document.getElementById('end-range');

    slider.noUiSlider.on('update', function( values, handle ) {
      endrange.innerHTML = values[1];
    });

    var start = document.getElementById('startinput');


    slider.noUiSlider.on('update', function( values, handle ) {
      start.value = values[0];
    });

    start.addEventListener('change', function(){
      slider.noUiSlider.set(this.value);
    });

    var end = document.getElementById('endinput');

    slider.noUiSlider.on('update', function( values, handle ) {
      end.value = values[1];
    });



   
      
  </script>
@endsection