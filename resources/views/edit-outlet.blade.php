@extends('layout')
@section('content')
    <style>
    .container{
        display: flex;
        max-width: 100%;
        min-height: 80vh;
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

    </style>

    <div class="container">
            <div class="col md-7">     
                <div class="container-2">
                    <h3 class="title-1">Edit Outlet</h3>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="{{route('update.outlet', $outlets->id)}}" method="post">
                        @csrf
                        <label>Address</label>
                        <input type="text" name="address" value="{{$outlets->address}}" class="form-control mb-2">
                        
                        <label>City</label>
                        <input type="text" name="city" value="{{$outlets->city}}" class="form-control mb-2">
                        
                        <label>Opening Time</label>
                        <input type="time" name="opening_time" value="{{$outlets->opening_time}}" class="form-control mb-2">
                        
                        <label>Closing Time</label>
                        <input type="time" name="closing_time" value="{{$outlets->closing_time}}" class="form-control mb-2">
            
                        <button class="btn btn-danger">Save Changes</button>
                    </form>
                </div> 
        </div>

    </div>

@endsection