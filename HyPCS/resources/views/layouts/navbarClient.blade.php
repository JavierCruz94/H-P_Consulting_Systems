@extends('layouts.navbar')

@section('navbarType')
    <a class="navbar-brand" href="#">Cliente</a>
    <!-- <form class="navbar-form navbar-left" role="search"> -->
    <ul class="nav navbar-nav navbar-right">
        <li ><a href="/clientReq">Crear solicitud</a></li>
        <li ><a href="/calendarClient">Calendario</a></li>
        <li><a href="/">Logout</a></li>
    </ul>
@endsection