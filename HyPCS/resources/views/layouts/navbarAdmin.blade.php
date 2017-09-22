@extends('layouts.navbar')

@section('navTitle')
    <a class="navbar-brand" href="#">Administrador</a>
@endsection

@section('navbarType')
    <ul class="nav navbar-nav navbar-right">
        <li ><a href="/adminWatch">Ver clientes</a></li>
        <li ><a href="/adminAddClient">Nuevo Cliente</a></li>
        <li><a href="/adminAddConsultant">Nuevo Cons.</a></li>
        <li><a href="/adminAssignReq">Asignacion Req</a></li>
        <li><a href="/">Logout</a></li>
    </ul>
@endsection