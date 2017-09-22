@extends('layouts.navbar')

@section('navTitle')
    <a class="navbar-brand" href="#">Cliente</a>
@endsection

@section('navbarType')
    <ul class="nav navbar-nav navbar-right">
        <li ><a href="/clientReq">Crear solicitud</a></li>
        <li ><a href="/calendarClient">Calendario</a></li>
        <li><a href="/">Logout</a></li>
    </ul>
@endsection