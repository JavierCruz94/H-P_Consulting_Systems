@extends('layouts.navbar')

@section('navTitle')
    <a class="navbar-brand" href="#">HyPCSS</a>
@endsection

@section('navbarType')
    <ul class="nav navbar-nav navbar-right">
        <li>
            <form method="POST" action="{{ route('login') }}" class="navbar-form navbar-right">
                {{ csrf_field() }}
                Usuario
                <input type="text" id="inputUsername" name="username" class="form-control" required autofocus>
                Contraseña
                <input type="password" id="inputPassword" name="password" class="form-control" required>
                <button type="submit" class="btn btn-default">Login</button>
            </form>
        </li>


        <li><a href="/adminWatch">Adm</a></li>
        <li><a href="/newReq">Cons</a></li>
        <li><a href="/clientReq">Cliente</a></li>
        <li>
            <form method="POST" action="{{ route('logout') }}">
                {{ csrf_field() }}
                <button type="submit" class="btn btn-default" style="margin-top: .60em">Logout</button>
            </form>
        </li>

    </ul>
@endsection