@extends('layout')
@section('content')

<div class="container-fluid d-flex justify-content-center align-items-center pt-5">
    <div class="container">
        @if (session('success'))
            <div class="alert alert-success" role="alert">{{session('success')}}</div>
        @endif
        <div class="container pt-5 md-5" style="background-image: url('{{ asset('storage/image/background/background-home.jpg') }}'); background-size: cover; background-position: center;">
            <div class="text-center text-light">
                <h1 class="text-dark">Discover CuantiN</h1>
                <p>The modern, authentic Chinese restaurant, CuantiN started their culinary story back in 1975.</p>
                <a href="{{route('menu.page')}}" class="btn text-light" style="background-color:salmon;">Explore Our Menu</a>
            </div>
            <br>
        </div>
        <div class="container pt-5 md-5">
            <h2 class="text-dark" style="text-align:center">About Us</h2>
            <div class="row text-center text-dark" style="margin:auto">
                <p>Our restaurant offers the finest dining experience with a variety of delicious dishes crafted by our expert chefs. Come and enjoy a meal in our cozy and welcoming atmosphere.</p>
            </div>
        </div>  
        <div class="container pt-5 md-5">
            <div class="text-center md-5">
                <h2 class="text-dark">Menu Highlights</h2>
            </div>
            <div class="row pt-5 mb-5">
                @if($menus->isEmpty())
                    <p style="text-align:center;margin:auto">Menu not found</p>  
                @else
                <div class="row" style="gap:55px">
                    @foreach ($menus as $menu) 
                        <div class="col">
                            <div class="card d-flex">
                                <img src="{{asset($menu->photo)}}" class="card-img-top" alt="{{$menu->name}}">
                                    <div class="card-body">
                                            <h5>{{$menu->name}}</h5>
                                        <p>{{$menu->type}}</p>
                                        <p>{{$menu->description}}</p>
                                    </div>
                            </div>    
                        </div>
                    @endforeach      
                @endif 
                </div>
            </div>
        </div>

        <div class="container pt-3 md-5">
            <div class="text-center md-5">
                <h2>Contact</h2>
                <p>Email: info@cuantin.com</p>
                <p>Phone: (123) 456-7890</p>
                @auth
                <a href="{{route('booking.page')}}" class="btn text-light" style="background-color:salmon;">Make a Reservation</a>
                @else
                <a href="{{route('login')}}" class="btn text-light" style="background-color:salmon;">Make a Reservation</a>
                @endif
            </div>
        </div> 
        <div class="container pt-3 md-5">
            <br>
        </div>
    </div>
</div>
@endsection
