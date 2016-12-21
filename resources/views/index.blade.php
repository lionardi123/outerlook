@extends('layouts.app')

@section('content')
  <div id="index-banner" class="parallax-container valign-wrapper center">
      <div class="background">
        <img src="{{{ asset('image/OUTERLOOK-12.jpg')}}}">
      </div>
    <div class="dropdown-container">
        <form class="height-medium">
          <select class="valign dropdown ">
            <option class="option-items" value="volvo">Makeup Artist</option>
            <option value="saab">Makeup Class</option>
            <option value="mercedes">Workshop</option>
          </select>
           <select id="left" class="valign dropdown">
            <option value="volvo">Jakarta</option>
            <option value="saab">Tangerang</option>
          </select>
          <button class="button height-medium" type="submit" name="action">
              <i class="material-icons search">search</i>
          </button>
      </form>
    </div>
  </div>

  <div class="container">
    <div class="section">
      <div class="about-us">
        <h1 class="center bold">About Us<span class="dot">.</span></h1>
        <div id="about-us-text" class="half-width left">
          <p class="flow-text italic small">I'm a paragraph. Click here to add your own text and edit me. It’s easy. Just click “Edit Text” or double click me and you can start adding your own content and make changes to the font. I’m a great place for you to tell a story and let your users know a little more about you.</br></br>
          I'm a paragraph. Click here to add your own text and edit me. It’s easy. Just click “Edit Text” or double click me and you can start adding your own content and make changes to the font. I’m a great place for you to tell a story and let your users know a little more about you.</p>
        </div>
        <div class="half-width left" id="about-us-image">
          <img class="responsive-img" src="{{{asset('image/OUTERLOOK-8.jpg')}}}">
        </div>
      </div>
    </div>
  </div>
   <div class="container">
    <div class="section">
      <div id="articles">
        <h1 class="center bold">Articles<span class="dot">.</span></h1>
        <div class="row">
          <div class="col s12 m4">
            <div class="card">
              <div class="card-image">
                <img src="{{{asset('image/article3.jpg')}}}">
                <div class="card-titles title-opacity"><span>HOW TO BE A MAKE UP ARTIST</span><span class="read-more">Read more>></span></div>
              </div>
            </div>
          </div>
          <div class="col s12 m4">
            <div class="card">
              <div class="card-image">
                <img src="{{{asset('image/article2.jpg')}}}">
                <div class="card-titles title-opacity"><span>ORI/FAKE M.A.C PALETTE</span><span class="read-more">Read more>></span></div>
              </div>
            </div>
          </div>
          <div class="col s12 m4">
            <div class="card">
              <div class="card-image">
                <img src="{{{asset('image/article1.jpg')}}}">
                <div class="card-titles title-opacity"><span>NARS ON SALE UP TO 35%!</span><span class="read-more">Read more>></span></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
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
        <hr> 
        <form class="contact-us left-align">
          <input type="text" id="subject" placeholder="Name">
          <input type="text" id="subject" placeholder="Email">
          <input type="text" id="subject" placeholder="Subject">
          <textarea id="textarea1" class="materialize-textarea" placeholder="Message"></textarea>
          <input class="right btn" type="submit" value="Send">
        </form>  
      </div>
    </div>
  </div>
@endsection