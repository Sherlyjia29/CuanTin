@extends('layout')
@section('content')
<div class="container-fluid d-flex justify-content-center align-items-center pt-5" 
    style="background-image: url('{{ asset('storage/image/background/background-login.jpg') }}'); background-position: center; height: 80vh;">
    <div class="card shadow-sm p-4 mb-5" style="width: 350px;">
        <h6>Login</h6>
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
        <form action="/login" method="post">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="text" name="email" id="email" placeholder="Email" class="form-control" value= {{Cookie::get('cookie') !== null ? Cookie::get('cookie'):""}}>
                @error('email')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" id="password" placeholder="Password" class="form-control">
                @error('password')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="form-check mb-3">
                <input type="checkbox" class="form-check-input" id="remember" name="remember">
                <label class="form-check-label" for="remember" checked={{Cookie::get('cookie') !== null}}>Remember Me</label>
            </div>
            <button type="submit" class="btn w-100" style="background-color: salmon; color:white">Login</button>
        </form>
        <br>
        <p>Don't have an account? Register
        <a href="/register">here</a>
        </p>
    </div>
</div>
@endsection