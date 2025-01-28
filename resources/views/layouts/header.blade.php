<header>
    <nav>
        <div class="logo">
            <a class="logo_icon" href="{{ route('index') }}">
                <img id="logo" src="{{ url('assets/Images/Logo.png') }}" alt="logo">
                <p>Auto<span>Doc</span></p>
            </a>
        </div>
        <ul class="nav_list">
            <li><a href="{{ route('index') }}">Home</a></li>
            <li><a href="{{ route('about') }}">About</a></li>
            <li><a href="{{ route('contact') }}">Contact</a></li>
            <li><a href="{{ route('tuning') }}">Tuning</a></li>
            @if (!auth()->guard('client')->check())
            <li><a href="{{ route('client.auth') }}">Login</a></li>
            <li><a href="{{ route('client.register') }}">Register</a></li>
            @else
            <li><a href="{{ route('client.home') }}">Profile</a></li>
            <li><a href="{{ route('client.logout') }}">Logout</a></li>
            @endif
        </ul>
    </nav>
</header>
