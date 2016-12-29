<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no" /> 
    @yield('title')
    <!--<title>Parallax Template - Materialize</title>-->

    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="{{{ asset('/fonts/roboto/')}}}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Satisfy" rel="stylesheet">
    <link href="{{{ asset('/css/materialize.min.css') }}}" type="text/css" rel="stylesheet" media="screen,projection" />
    <link href="{{{ asset('/css/vstyle.css') }}}" type="text/css" rel="stylesheet" media="screen,projection" />
    <link href="{{{ asset('/css/style.css') }}}" type="text/css" rel="stylesheet" media="screen,projection" /> 
    <link href="{{{ asset('/css/nouislider.css') }}}" type="text/css" rel="stylesheet" media="screen,projection" /> 

</head>

<body>
    <!--  Scripts-->
    <script src="{{{ asset('/js/jquery.min.js') }}}"></script>
    <script src="{{{ asset('/js/angular.min.js') }}}"></script>
    <script src="{{{ asset('/js/materialize.min.js') }}}"></script>
    <script src="{{{ asset('/js/init.js') }}}"></script>
    <script src="{{{ asset('/js/nouislider.js') }}}"></script>
    <!-- Modal Structure -->
    @if(Auth::guest())
    <div id="modal1" class="modal">
        <form role="form" action="{{url('/dologin')}}" method="POST">
            <div class="modal-content">
                <h3 class="center bold">Sign In<span class="dot">.</span></h3>
                <hr>
                @if(!empty($errors->first()))
                <div class="center error-msg">{{$errors->first()}}</div>
                @endif
                <div class="row">
                    <div class="input-field col s12">
                        <input type="text" id="email" name="email">
                        <label for="email">Email</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">             
                        <input type="password" id="password" name="password">
                        <label for="password">Password</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12">
                        <button type="submit" class="center btn custom-pink1 modal-action modal-close">Sign In</button>
                    </div>
                </div>
                <hr>
                <div class="content-footer">
                    <a class="bold right black-text" href="{{url('/signup')}}">Sign Up</a>
                </div>
            </div>
           {!! csrf_field() !!}
        </form>
    </div>
    @endif
    <nav role="navigation" class="transparent">
        <div class="nav-wrapper custom-pink1">
            {{-- <div class="background">
                <img src="{{{asset('/image/OUTERLOOK-1.jpg')}}}">
            </div> --}}
            <div class="container">
                <ul class="left hide-on-med-and-down">
                    <li>
                        <a class="white-text" href="{{url('/')}}">Home</a>
                    </li>
                    <li>
                        <a class="white-text" href="#">Book Online</a>
                    </li>
                </ul>
                <ul class="right hide-on-med-and-down">
                    @if(Auth::guest())
                    <li>
                        <a class="white-text" href="#modal1">Sign In</a>
                    </li>
                    <li>
                        <a class="white-text" href="{{url('/signup')}}">Sign Up</a>
                    </li>
                    @else
                    <ul id="dropdown2" class="dropdown-content custom-pink1">
                        <li><a class="white-text" href="{{url('/logout')}}">Sign Out</a></li>
                    </ul>
                    <a class="white-text left dropdown-button" href="#!" data-activates="dropdown2">{{Auth::user()->user_fullname}}<i class="right"></i></a>
                    <li>
                        
                    </li>
                    @endif
                </ul>
                <ul id="nav-mobile" class="side-nav peach">
                    <li><a href="{{url('/')}}">Home</a>
                    </li>
                    <li><a href="#">Book Online</a>
                    </li>
                    @if(Auth::guest())
                    <li><a href="#">Sign In</a>
                    </li>
                    <li><a href="{{url('/register')}}">Register</a>
                    </li>
                    @else
                    <li><a href="#">Sign Out</a>
                    </li>
                    @endif
                </ul>
                <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
            </div>
        </div>
    </nav>
    @yield('content')
    <script>
          $('.dropdown-button').dropdown({
              inDuration: 300,
              outDuration: 225,
              constrain_width: false, // Does not change width of dropdown to that of the activator
              hover: true, // Activate on hover
              gutter: 0, // Spacing from edge
              belowOrigin: true, // Displays dropdown below the button
              alignment: 'left' // Displays dropdown with edge aligned to the left of button
            }
          );
        
     
        $('#modal1').modal({
            dismissible: true, // Modal can be dismissed by clicking outside of the modal
            opacity: .5, // Opacity of modal background
            in_duration: 300, // Transition in duration
            out_duration: 200, // Transition out duration
            starting_top: '4%', // Starting top style attribute
            ending_top: '10%', // Ending top style attribute
            ready: function(modal, trigger) { // Callback for Modal open. Modal and trigger parameters available.
            console.log(modal, trigger);
            },
        });
    </script>
</body>

</html>