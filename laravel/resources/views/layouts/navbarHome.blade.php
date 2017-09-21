@extends('layouts.navbar')

@section('navbarType')
    <a class="navbar-brand" href="#">HyPCSS</a>
    <!-- <form class="navbar-form navbar-left" role="search"> -->
    <ul class="nav navbar-nav navbar-right">

        <li> <p class="navbar-text">Usuario:</p></li>
        <li> <input type="text" class="form-control" placeholder="usuario" style="margin-top: .60em"></li>
        <li> <p class="navbar-text">Contraseña:</p></li>
        <li> <input type="text" class="form-control" placeholder="contraseña" style="margin-top: .60em"></li>
        <li> <button type="button" class="btn btn-default navbar-btn" style="margin-left: 1em; margin-top: .60em" >Admn</button> </li>
        <li> <button type="button" class="btn btn-default navbar-btn" style="margin-left: 1em; margin-top: .60em" >Consult</button> </li>
        <li> <button type="button" class="btn btn-default navbar-btn" style="margin-left: 1em; margin-top: .60em; margin-right: 1em" >Client</button> </li>
    </ul>
@endsection