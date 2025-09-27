@extends('layout')
@section('content')

<style>

    .container-1{
        max-height: 100%;
        max-width: 100%;
    }

    .container-2{
        align-items: center;
        flex-direction: column;
        max-height: 100%;
        max-width: 80%;
        padding: 5px;
        margin: auto;
        box-sizing: border-box;
        margin:0 auto;   
    }

    .title-1{
        margin-top:50px;
        margin-bottom: 50px;
        margin-left: auto;
    }

    .card{
        height: 100%;
        width: 200px;
    }

    .card img {
        object-fit: cover;
        height: 150px;
    }

    .align-item-center {
        margin-top: 30px;
        display: flex;
        justify-content: center;
    }   

    .pagination .page-link{
        color: salmon;
    }

    .pagination .page-item.active .page-link{
        background-color: salmon;
        border-color: salmon;
    }

    .pagination .page-link:hover {
        color: salmon;
        background-color: lightgray;
    }

    .btn-outline-success:hover{
        background-color: salmon;
        border-color: salmon;
    }

</style>
<div class="container-1">
    <div class="container-2">
        <h3 class="title-1">Menu Items</h3>
        <div class="row mb-3" style="margin-left:auto">
            <form class="d-flex w-100" role="search" action="{{url('/menu/search')}}">
                <input class="form-control me-2" name="search" type="search" placeholder="Search the menu..." aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
    <div class="container-2">
        <div class="row">
            @if($menus->isEmpty())
                <p style="text-align:center;margin:auto">Menu not found</p>  
            @else
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
        <br>
        <div class="align-item-center">
           {{$menus->links()}}
        </div> 
        <br>
</div>


@endsection