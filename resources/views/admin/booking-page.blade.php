@extends('layout')
@section('content')
    <style>
    .container-1{
        max-height: 100%;
        max-width: 100%;
        min-height: 90vh;
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
                    <th>{{$booking->user->name}}</th>
               </tr> 
            @endforeach
            
        </table>
        </div>
</div>
@endsection