<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">

    <title>CuantiN</title>
    <style>
        .container-fluid {
            padding:0;
            overflow-x: hidden;
        }
    </style>

</head>
<body style="background-color: white">
    <div class="container-fluid pt-5">
        <div class="row">
            <div class="col">
                <nav class="navbar fixed-top navbar-expand-lg" style="background-color: salmon">
                    <div class="container-fluid">
                        <a class="navbar-brand text-light" href="/">CuantiN</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMember" aria-controls="navbarMember" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarMember">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                <a class="nav-link text-light" href="/">Home</a>
                                </li>
                                <li class="nav-item">
                                <a class="nav-link text-light" href="{{route('menu.page')}}">Menu</a>
                                </li>
                                <li class="nav-item">
                                <a class="nav-link text-light" href="{{route('outlet.page')}}">Outlet</a>
                                </li>
                                @if(Auth::check() && Auth::user()->role=='admin')
                                    <li class="nav-item">
                                    <a class="nav-link text-light" href="{{route('add.menu')}}">Add Menu</a>
                                    </li>
                                    <li class="nav-item">
                                    <a class="nav-link text-light" href="{{route('add.outlet')}}">Add Outlet</a>
                                    </li>
                                    <li class="nav-item">
                                    <a class="nav-link text-light" href="{{route('admin.booking.page')}}">Bookings</a>
                                    </li>
                                @endif
                                @if (Auth::check() && Auth::user()->role=='member')
                                    <li class="nav-item">
                                    <a class="nav-link text-light" href="{{route('booking.page')}}">Bookings</a>
                                    </li>
                                @endif
                            </ul>
                            @auth
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item">
                                    <a class="nav-link text-light" href="{{route('profile.page')}}" role="button">Profile</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-light" href="/logout" role="button">Logout</a>
                                </li>
                            </ul>
                            @else
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item">
                                    <a class="nav-link text-light" href="/login" role="button">Login</a>
                                </li>
                            </ul>
                            @endif
                        </div>
                    </div>
                </nav>
            </div>
        </div>

        <div class="row">
            <div class="col">@yield('content')</div>
        </div>

        <div class="row text-white" style="background-color: black; padding: 15px;">
            <div class="col">
                <h5>About Us</h5>
                <p>
                    CuantiN is dedicated to providing the best dining experience with our
                    diverse menu and welcoming outlets.
                </p>
            </div>
            <div class="col">
                <h5>Contact</h5>
                <p>Email: info@cuantin.com</p>
                <p>Phone: (123) 456-7890</p>
            </div>
            <div class="col">
                <h5>Follow Us</h5>
                <ul class="list-unstyled">
                    <li>
                        <a href="{{asset('https://www.facebook.com/?locale2=id_ID&_rdr')}}">Facebook</a>
                        <a href="{{asset('https://x.com/?lang=en')}}">Twitter</a>
                        <a href="{{asset('https://www.instagram.com/')}}">Instagram</a>
                    </li>
                </ul>
            </div>

            <div class="col-12 text-center pt-3">
                <p class="m-0">&copy; 2024 CuantiN. All Rights Reserved.</p>
            </div>
    </div>
    </div>
</body>
</html>