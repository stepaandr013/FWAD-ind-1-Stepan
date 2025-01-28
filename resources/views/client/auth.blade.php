@extends('layouts.app')

@section('content')
    <div class="container_login">
        @if(session()->has('error'))
            {{ session()->get('error') }}
        @endif
        <h1>User Login</h1>
        <form action="{{ route('client.auth') }}" method="post">
            @csrf
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
            <p>Doesn't have an account?</p>
            <a href="{{ route('client.register') }}">Register an account</a>
        </div>
    </div>
@endsection
