<html>

<head>
    <title>App Name - @yield('title')</title>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous">
    </script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous">
    </script>

    <style>
        .footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            background-color: #9C27B0;
            color: white;
            text-align: center;
        }

        body {
            background-color: #EDF7EF
        }
    </style>

</head>

<body>
    <div class=" col-md-12 col-lg-12 my-2 text-right">
        @auth
        <div class="text-right d-flex align-items-center  justify-content-end">
            <form action="{{ route('logout') }}" method="POST">
                @csrf

                <button class="btn btn danger  text-danger">
                    <i class="fas fa-sign-out-alt    text-danger"></i>Logout</button></a>
            </form>
            @if (Auth::user()->role == 'admin')
            <a href="login">
                <i class="fas fa-columns text-danger"></i> Dashboard</a>
            @endif
        </div>
        @endauth
        @guest
        <div class="text-right d-flex align-items-center  justify-content-end">
            <a class="mr-4" href="{{ route('login') }}">
                <i class="fas fa-user text-danger "></i> login</a>
            <a href="{{ route('register') }}">
                <i class="fas fa-user text-danger"></i> register</a>
        </div>
        @endguest
    </div>
    @section('sidebar')

    @show

    <div class="container">
        @yield('content')
    </div>
    <div class="text-center footer">

        <h4>Welcome</h4>

    </div>
</body>

</html>