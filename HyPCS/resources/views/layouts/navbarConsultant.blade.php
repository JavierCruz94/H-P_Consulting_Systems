@extends('layouts.navbar')

@section('navTitle')
    <a class="navbar-brand" href="#">Consultor</a>
@endsection

@section('navbarType')
    <ul class="nav navbar-nav navbar-right">
        <li ><a href="/clientReq">Nuevas Solicitudes</a></li>
        <li><a href="/">Agendar Cita</a></li>
        <li><a href="#about">Calendario</a></li>
        <li><a href="/">Logout</a></li>
    </ul>
@endsection