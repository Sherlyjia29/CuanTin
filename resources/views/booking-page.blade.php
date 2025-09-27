@extends('layout')
@section('content')
    <style>
    .container-1{
        max-height: 100%;
        max-width: 100%;
        min-height: 120vh;
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
        margin-bottom: 40px;
        margin-left: auto;
    }

    .card{
        height:100%;
        margin: 0;
        background-color:black;
    }

    .card-2{
        margin-bottom: 10px;
    }
    
    label{
        color: white;
    }
    
    </style>

    <div class="container-1">
        <div class="container-2">
            <h3 class="title-1">Bookings</h3>
            <table class="table table-bordered border-primary">
            <tr>
                <th>ID</th>
                <th>Outlet</th>
                <th>Time</th>
                <th>Guests</th>
                <th>User</th>
            </tr>
        
            @foreach ($bookings as $booking)
               <tr>
                    <th>{{$booking->id}}</th>
                    <th>
                        @foreach ($outlets as $outlet)
                            @if($outlet->id == $booking->outlet_choice)
                                {{$outlet->address}}
                            @endif
                        @endforeach
                    </th>
                    <th>{{$booking->booking_time}}</th>
                    <th>{{$booking->number_of_guests}} people</th>
                    
                    <th>{{$user->name}}</th>
               </tr> 
            @endforeach
            
        </table>
        </div>

        <div class="container-2">
            <h3 class="title-1">Create Booking</h3>  

            <div class="card-2" style="width:25%">
                @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">{{session('success')}}</div>
                
                @endif
            </div>
           
            <div class="card-2" style="width:25%">
                @if($errors->any())
                    <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                    </div>
                @endif
            </div>
            <div class="card" style="width:25%">
                    <div class="card-body">
                    <form action="{{route('booking.page')}}" method="post">
                        @csrf
                        <label>Outlet Choice</label>
                            <select name="outlet_choice" class="form-control mb-4">
                            <option value="">Select an outlet</option>
                            @foreach ($outlets as $outlet)
                                <option value="{{$outlet->id}}">{{$outlet->address}}</option>
                            @endforeach
                            <input style="display:none">
                        <label>Time:</label>
                            <input type="datetime-local" name="booking_time" class="form-control mb-4">
                            
                        <label>Number of Guests:</label>
                            <input type="text" name="number_of_guests" class="form-control mb-4">
                    
                        <button class="btn btn-primary">Submit</button>
                    </form>
                </div> 
            </div>
        </div>
    </div>
@endsection