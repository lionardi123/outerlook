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

</head>

<body>
    <!--  Scripts-->
    <script src="{{{ asset('/js/jquery.min.js') }}}"></script>
    <script src="{{{ asset('/js/angular.min.js') }}}"></script>
    <script src="{{{ asset('/js/materialize.min.js') }}}"></script>
    <script src="{{{ asset('/js/init.js') }}}"></script>
    <!-- Modal Structure -->
    <div id="modal1" class="modal">
        <form>
            <div class="modal-content">
                <h3 class="center">Sign In<span class="dot">.</span></h3>
                <div class="row">
                    <div class="input-field col s12">
                        <input type="text" id="email">  
                        <label for="email">Email</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">             
                        <input type="password" id="password">
                        <label for="password">Password</label>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn custom-pink1 modal-action modal-close">Sign In</button>
            </div>
        </form>
    </div>
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
                    <li>
                        <a href="#"></a>
                    </li>
                    <li>
                        <a class="white-text" href="#modal1">Sign In</a>
                    </li>
                    <li>
                        <a class="white-text" href="{{url('/register')}}">Register</a>
                    </li>
                </ul>

                <ul id="nav-mobile" class="side-nav peach">
                    <li><a href="{{url('/')}}">Home</a>
                    </li>
                    <li><a href="#">Book Online</a>
                    </li>
                    <li><a href="#">Sign In</a>
                    </li>
                    <li><a href="{{url('/register')}}">Register</a>
                    </li>
                </ul>
                <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
            </div>
        </div>
    </nav>
    @yield('content')
    <script>
        $('.modal').modal({
                  dismissible: true, // Modal can be dismissed by clicking outside of the modal
                  opacity: .5, // Opacity of modal background
                  in_duration: 300, // Transition in duration
                  out_duration: 200, // Transition out duration
                  starting_top: '4%', // Starting top style attribute
                  ending_top: '10%', // Ending top style attribute
                  ready: function(modal, trigger) { // Callback for Modal open. Modal and trigger parameters available.
                    console.log(modal, trigger);
                },
            }
        );
      
    </script>
</body>

</html>