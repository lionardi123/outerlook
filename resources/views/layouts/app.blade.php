<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <title>Parallax Template - Materialize</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="{{{ asset('/css/materialize.min.css') }}}
" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="{{{ asset('/css/style.css') }}}" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
  <nav role="navigation" class="transparent">
    <div class="background">
      <img src="/outerlook/resources/assets/image/OUTERLOOK-1.jpg">
    </div>
    <div class="nav-wrapper container">
      <ul class="left hide-on-med-and-down">
        <li><a href="#">Home</a></li>
        <li><a href="#">Categories</a></li>
        <li><a href="#">Book Online</a></li>
        <li><a href="#">Terms and Conditions</a></li>
      </ul>
      <ul class="right hide-on-med-and-down">
        <li><a href="#">Sign In</a></li>
        <li><a href="#">Register</a></li>
      </ul>

      <ul id="nav-mobile" class="side-nav peach">
        <li><a href="#">Home</a></li>
        <li><a href="#">Categories</a></li>
        <li><a href="#">Book Online</a></li>
        <li><a href="#">Terms and Conditions</a></li>
        <li><a href="#">Sign In</a></li>
        <li><a href="#">Register</a></li>
        
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>

  </nav>
  @yield('content')
  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="{{{ asset('/js/materialize.min.js') }}}
"></script>
  <script src="/outerlook/resources/assets/js/init.js"></script>

  </body>
</html>
