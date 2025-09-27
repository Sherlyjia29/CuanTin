@extends('layout')
@section('content')
<style>
    .container-1{
        max-height: 100%;
        max-width: 100%;
        min-height:80vh;
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
        background-color:white;
    }

    .card-2{
        margin-bottom: 10px;
    }

    .card-img-left{
        width:100%;
        height: 100%;
        padding: 15px;
    }
    
    .card-title{
        margin: 15px;
        border-bottom: solid 1px grey;
    }


    label{
        color: white;
    }
    
    </style>

    <div class="container-1">
        <div class="container-2">
            <h3 class="title-1">User Profile</h3>
            <div class="card w-100">
                <div class="card-header">
                    Profile Details
                </div>
                    <div class="row">
                        <div class="col-3">  
                            <img src="{{ asset('storage/image/profile/profpic1.png') }}" class="card-img-left">
                        </div>
                       <div class="col-3 mt-3">
                           <ul><b>Name: </b> {{$user->name}}</ul>
                           <ul><b>Email: </b>{{$user->email}}</ul>
                           <ul><b>Phone Number: </b>{{$user->phone_number}}</ul>
                           <ul><b>Joined At: </b>{{$user->created_at}}</ul>
                       </div>
                    </div  >
                </div>
        </div>
    </div>
@endsection
