@extends('layouts.main', ["current_page"=>"login"])

@section('content')
<form action="{{ route('login') }}" method="post">

    @csrf

    Email: <input type="email" name="email" value="{{ old('email') }}"><br>

    Password: <input type="password" name="password" value=""><br>

    <button>Login</button>

</form>
@endsection