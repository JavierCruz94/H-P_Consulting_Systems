@extends('layouts.navbar')

@section('navbarType')
    <a class="navbar-brand" href="#">Administrador</a>
    <!-- <form class="navbar-form navbar-left" role="search"> -->
    <ul class="nav navbar-nav navbar-right">
        <li ><a href="/adminWatch">Ver clientes</a></li>
        <li ><a href="#">Nuevo Cliente</a></li>
        <li><a href="#">Nuevo Cons.</a></li>
        <li><a href="/adminAssignReq">Asignacion Req</a></li>
        <li><a href="/">Logout</a></li>
    </ul>
@endsection