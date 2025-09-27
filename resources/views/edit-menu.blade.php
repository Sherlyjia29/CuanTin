@extends('layout')
@section('content')
    <style>
    .container{
        display: flex;
        max-width: 100%;
        min-height:80vh;
        justify-content: space-between; 
    }

    .container-2{
        align-items: center;
        flex-direction: column;
        background-color: white;
        max-height: 100%;
        max-width: 90%;
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
    }

    .btn-danger:hover{
        background-color: salmon;
        border-color: salmon;
    }

    .btn-primary{
        background-color: salmon;
        border-color: salmon;
    }

    </style>

    <div class="container">
            <div class="col md-7">     
                <div class="container-2">
                    <h3 class="title-1">Edit Menu</h3>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="{{route('update.menu', $menus->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <label>Item Type</label>
                        <select name="type" class="form-control mb-4">
                            <option value="">Select the Menu Type</option>
                            <option value="Dimsum">Dimsum</option>
                            <option value="Ala Carte">Ala Carte</option>
                            <option value="Drink">Drink</option>
                            <option value="Dessert">Dessert</option>

                            <input style="display:none">
                        
                        <label>Name</label>
                        <input type="text" name="name" value="{{$menus->name}}" class="form-control mb-2">
                        
                        <label>Description</label>
                        <input type="text" name="description" value="{{$menus->description}}" class="form-control mb-2">
                        
                        <label>Image</label>    
                        <input type="file" name="photo" value="{{$menus->photo}}" class="form-control mb-2">
            
                        <button class="btn btn-danger">Save Changes</button>
                    </form>
                </div> 
        </div>
    </div>

@endsection