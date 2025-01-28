@extends('layouts.app')

@section('content')
    @if(session()->has('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div>
    @endif
    <div class="container_login">
        <h1>User Register</h1>
        <form action="{{ route('client.store') }}" method="POST">
            @csrf
            <label for="email">
                Name
            </label> <br>
            <input type="text" name="name" id="email" placeholder="Enter your name"> <br> <br> <br>
            <label for="email">
                Email
            </label> <br>
            <input type="email" name="email" id="email" placeholder="Enter your email"> <br> <br> <br>
            <label for="email">
                Password
            </label> <br>
            <input type="password" name="password" id="email" placeholder="Enter your password"> <br>
            <div class="submit">
                <input type="submit" value="Log In" name="submit">
            </div>
        </form>
        <div class="info_auth">
            <p>Have an account?</p>
            <a href="{{ route('client.auth') }}">Log In Into Your Account</a>
        </div>
    </div>
@endsection


