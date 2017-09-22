@extends('layouts.navbar')

@section('navTitle')
    <a class="navbar-brand" href="#">Consultor</a>
@endsection

@section('navbarType')
    <ul class="nav navbar-nav navbar-right">
        <li ><a href="/newReq">Nuevas Solicitudes</a></li>
        <li><a href="/regVisit">Registrar Visita</a></li>
        <li><a href="/calendarCons">Calendario</a></li>
        <li><a href="/">Logout</a></li>
    </ul>
@endsection