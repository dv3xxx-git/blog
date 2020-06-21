@if (Route::has('login'))
    <div class="top-right links">
        @if (Auth::check())
            <a href="{{ url('/home') }}">Home</a>
        @else
            <a href="{{ url('/login') }}">Sign in</a>
            <a href="{{ url('/register') }}">Sign Up</a>
        @endif
    </div>
@endif
