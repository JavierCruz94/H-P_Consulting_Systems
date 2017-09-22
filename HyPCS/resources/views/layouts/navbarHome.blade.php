@extends('layouts.navbar')

@section('navTitle')
    <a class="navbar-brand" href="#">HyPCSS</a>
@endsection

@section('navbarType')
    <ul class="nav navbar-nav navbar-right">
        <li> <p class="navbar-text">Usuario:</p></li>
        <li> <input type="text" class="form-control" placeholder="usuario" style="margin-top: .60em"></li>

        <li> <p class="navbar-text">Contraseña:</p></li>
        <li> <input type="text" class="form-control" placeholder="contraseña" style="margin-top: .60em"></li>

        <li><a href="/adminWatch">Adm</a></li>
        <li><a href="/newReq">Cons</a></li>
        <li><a href="/clientReq">Cliente</a></li>
    </ul>
@endsection