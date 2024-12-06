<nav>
    <a href='/' class="{{ $current_page == 'home' ? 'highlighted' : '' }}">Home</a>
    <a href='/about-us' class="{{ $current_page == 'about-us' ? 'highlighted' : '' }}">About</a>

    <a href={{route('login')}} class="{{ $current_page == 'login' ? 'highlighted' : '' }}">Login</a>
    <a href={{route( 'register')}} class="{{ $current_page == 'register' ? 'highlighted' : '' }}">Register</a>
    @auth
    <p>Welcome to your profile, {{Auth::user()->name}}</p>
    <form action="{{ route('logout') }}" method="post">

        @csrf

        <button>Logout</button>

    </form>
    @endauth


</nav>