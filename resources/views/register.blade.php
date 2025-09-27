@extends('layout')
@section('content')
<div class="container-fluid d-flex justify-content-center align-items-center pt-5" 
    style="background-image: url('{{ asset('storage/image/background/background-login.jpg') }}'); background-position: center; height: 95vh;">
    <div class="card shadow-sm p-4 mb-5" style="width: 600px;">
        <h6>Sign Up</h6>
        <hr>
        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{route('register')}}" method="post">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" id="name" placeholder="Name" class="form-control">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="text" name="email" id="email" placeholder="Email" class="form-control">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" id="password" placeholder="Password" class="form-control">
            </div>
            <div class="mb-3">
                <label for="confirmpassword" class="form-label">Confirm Password</label>
                <input type="password" name="password_confirmation" id="confirmpassword" placeholder="Confirm Password" class="form-control">
            </div>
            <div class="mb-3">
                <label for="phone_number" class="form-label">Phone Number</label>
                <input type="tel" name="phone_number" id="phone_number" placeholder="Phone Number" class="form-control">
            </div>
            <br>
            <button type="submit" class="btn w-100" style="background-color: salmon; color:white">Sign Up</button>
        </form>
        <br>
        <p>Already have an account? Login
            <a href="/login">here</a>
        </p>
    </div>
</div>
@endsection
