@extends('layout')
@section('content')
    <style>
    .container-1{
        max-height: 100%;
        max-width: 100%;
        min-height: 80vh;
    }

    .container-2{
        align-items: center;
        flex-direction: column;
        background-color: white;
        max-height: 100%;
        max-width: 80%;
        padding: 5px;
        margin: auto;
        box-sizing: border-box;   
    }

    .title-1{
        margin-top:50px;
        margin-bottom: 50px;
        margin-left: auto;
    }

    .card{
        height:100%;
        weight:100%;
        margin: 0;
    }

    .btn-outline-success:hover{
        background-color: salmon;
        border-color: salmon;
    }

    
    </style>

    <div class="container-1">
        <div class="container-2">
            <h3 class="title-1">Our Outlets</h3>
            <div class="row mb-3" style="margin-left:auto">
                <form class="d-flex w-100" role="search" action="{{url('/outlet/search')}}">
                    <input class="form-control me-2" name="search" type="search" placeholder="Search by address or city..." aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
        
        <div class="container-2">
            <div class="row">
                @if($outlets->isEmpty())
                    <p style="text-align：center;margin:auto">Outlet not found</p>  
                @else
                    @foreach ($outlets as $outlet)
                        <div class="col-12 mb-4">
                            <div class="card d-flex">
                                <div class="card-body">
                                    <h5>{{$outlet->address}}</h5>
                                    <p>{{$outlet->city}}</p>
                                    <b>Opening time: </b>{{$outlet->opening_time}} <br>
                                    <b>Closing time: </b>{{$outlet->closing_time}}
                                </div>
                            </div>    
                        </div>
                    @endforeach  
                @endif
            </div>
    </div>
    </div>
@endsection