@extends('layouts.app')

@section('content')
    <div class="home_profile">
            <h1>
                User Info
            </h1>
            <p>Hi Dear <span>{{ $client->name }}</span></p>
            <p>Email info <span>{{ $client->email }}</span></p>

        <a class="logout" href="{{ route('client.logout') }}">
            Logout
        </a>
    </div>
@endsection
