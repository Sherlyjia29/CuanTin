@extends('layout')
@section('content')
    <style>
    .container{
        display: flex;
        max-width: 100%;
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
        margin: 0;
    }

    .btn-danger:hover{
        background-color: salmon;
        border-color: salmon;
    }

    .btn-primary{
        background-color: salmon;
        border-color: salmon;
    }

    .line-divider{
        border-left: 0.2px solid lightgrey;
        height: 1000px;
    }
    </style>

    <div class="container">
            <div class="col md-7">     
                <div class="container-2">
                    <h3 class="title-1">Menu Items</h3> 
                    <table class="table">         
                        @foreach ($menus as $index => $menu)
                            <tr>
                                <td>
                                    {{$index+1}}. {{$menu->name}}
                                </td>
                                <td class="text-end">
                                    <span>Created At: {{$menu->created_at->toDateString()}}</span>
                                    <a class="btn btn-danger" href="{{route('edit.menu', $menu->id)}}">Edit</a>
                                </td>
                            </tr>
                        @endforeach  
                    </table>
                </div> 
        </div>

        <div class="line-divider"></div>

        <div class="col md-5">     
                <div class="container-2">
                    <h3 class="title-1">Add Menu</h3> 
            
                    <form action="{{route('add.menu')}}" method="post" enctype="multipart/form-data">
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
                        <input type="text" name="name" class="form-control mb-2">
                        
                        <label>Description</label>
                        <input type="text" name="description" class="form-control mb-2">

                        <label>Image</label>    
                        <input type="file" name="photo" class="form-control mb-2">
            
                        @if($errors->any())
                            <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach
                            </ul>
                            </div>
                        @endif
                        
                        <button class="btn btn-danger">Add Menu Item</button>
                       
                    </form>
             
                </div>
        </div>
   

    </div>

@endsection