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
                    <h3 class="title-1">Outlets</h3> 
                    <table class="table">         
                        @foreach ($outlets as $index => $outlet)
                            <tr>
                                <td>
                                    {{$index+1}}. {{$outlet->address}}
                                </td>
                                <td class="text-end">
                                    <a class="btn btn-danger" href="{{route('edit.outlet', $outlet->id)}}">Edit</a>
                                    <span>Created At: {{$outlet->created_at->toDateString()}}</span>
                                </td>
                            </tr>
                        @endforeach  
                    </table>
                </div> 
        </div>

        <div class="line-divider"></div>

        <div class="col md-5">     
                <div class="container-2">
                    <h3 class="title-1">Add Outlet</h3> 
            
                    <form action="{{route('add.outlet')}}" method="post">
                        @csrf
                        <label>Address</label>
                        <input type="text" name="address" class="form-control mb-2">
                        
                        <label>City</label>
                        <input type="text" name="city" class="form-control mb-2">
                        
                        <label>Opening Time</label>
                        <input type="time" name="opening_time" class="form-control mb-2">
                        
                        <label>Closing Time</label>
                        <input type="time" name="closing_time" class="form-control mb-2">

                        @if($errors->any())
                            <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach
                            </ul>
                            </div>
                        @endif
                        
                        <button class="btn btn-danger">Add Outlet</button>
                       
                    </form>
             
                </div>
        </div>
   

    </div>

@endsection