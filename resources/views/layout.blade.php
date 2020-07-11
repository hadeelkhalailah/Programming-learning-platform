<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" href="{{asset('css/bootstrap-grid.min.css') }}">

    <link rel="stylesheet" href="{{asset('css/app.css') }}">
    <link rel="stylesheet" href="{{asset('css/bootstrap-grid.css') }}">

    <link rel="stylesheet" href="{{asset('css/bootstrap-grid.min.css') }}">

    <link rel="stylesheet" href="{{asset('css/bootstrap-reboot.css') }}">

    <link rel="stylesheet" href="{{asset('css/bootstrap-reboot.min.css') }}">

    <link rel="stylesheet" href="{{asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{asset('css/styel.css') }}">
    <script type="text/javascript" src="{{asset('js/app.js')}}"></script>

    <script type="text/javascript" src="{{asset('js/bootstrap.bundle.min.js')}}">
    </script>

    <script type="text/javascript" src="{{asset('js/bootstrap.js')}}"></script>

    <script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Programming learning platform</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="{{ url('/post') }}">Posts <span class="sr-only">(current)</span></a>
            </li>
            @guest()
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/login') }}">login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/register') }}">Register</a>
            </li>
            @else

                <li class="nav-item active">
                    <a class="nav-link" href="{{ url('/addpost') }}">Add Posts <span class="sr-only">(current)</span></a>
                </li>
                <li  class="nav-item" >
                    <a class="nav-link" href="">{{ Auth::user()->name }}</a>
                </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('logout') }}">logout</a>
            </li>
            @endguest


        </ul>
    </div>
</nav>
@yield('content');
</body>
</html>
