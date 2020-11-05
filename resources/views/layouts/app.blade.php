<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
</head>
<body>
    <div id="app" >
        <nav class="navbar navbar-expand-md navbar-light bg-primary shadow-sm ">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto bar">
                            <li> <a href="{{ url('/') }}">Home</a> </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>

        <!--footer area start-->
       
    <footer class="footer_widgets bg-primary">
    <div class="container">
       <div class="row mt-3">
       <div class="col-lg-3">
                    <div class="widgets_container widget_menu">
                        <h3>Information</h3>
                        <div class="footer_menu">
                            <ul>
                                <li><a href="about.html">About Us</a></li>
                                <li><a href="contact.html">Privacy Policy</a></li>
                                <li><a href="services.html">Terms&Conditions</a></li>
                            </ul>
                        </div>
                    </div>
        </div>

        <div class="col-lg-8 text-left text">
            <p>This <span>COVID-19 </span> Self Assessment System is only for software
                    development purpose and may not yield actual result. Any
                    information given by users of this system will not be disclosed
                    or store to anywhere.
            </p>
        </div>
       </div>
    </div>
    </footer>
        
    


    </div>
    <style>
        .footer_widgets{
            height: 250px;
            width: 100%;
            background-color: #BDBDBD;
            
        }
        .widget_menu{
            padding: 20px;
     
            font-size: 20px;
            line-height: 55px;
        }
        .footer_menu li{
            display: flex;
            font-family: sans-serif;
    font-weight: 600;
    font-size: 16px;
    text-transform: capitalize;
    color: #5a5a5a;
    padding-bottom: 10px;
    outline: 0;

        }
        .footer_menu li a:hover{
    color: #fcac45;
    background: #616161;
    box-shadow: 3px 3px 15px #7644c6;
}
        .footer_menu li a{
            text-align: left;
            color: #616161;
            text-decoration: none;
            
        }



        .bar li{
            display: flex;
            font-family: sans-serif;
    font-weight: 600;
    font-size: 16px;
    text-transform: capitalize;
    color: #5a5a5a;
   
    outline: 0;

        }
        .bar li a:hover{
    color: #fcac45;
    background: #616161;
    box-shadow: 3px 3px 15px #7644c6;
}
        .bar li a{
            text-align: left;
            color: #616161;
            text-decoration: none;
            
        }

        
        .widget_menu h3{
            font-weight: 500;
            color: black;
            padding-left: 30px;
        }
        .text p{
            font-size: 23px;
            line-height: 25px;
            text-align: justify;
            padding-top: 50px;
        }
        .text span{
            font-size: 30px;
            font-weight: 600;
        }
        .navv{
            background-color: #BDBDBD;
        }

    </style>

    <script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
        <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
        {!! Toastr::message() !!}

</body>
</html>
