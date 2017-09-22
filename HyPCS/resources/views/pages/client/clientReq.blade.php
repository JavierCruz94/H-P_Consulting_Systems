@extends('layouts.master')


@section('title', 'HyPCS')

@section('navbar')
    @include('layouts.navbarClient')
@endsection

@section('content')
    <br> <br> <br>
    <h3><span class="label label-default" id="firstAdd">Nueva Solicitud</span></h3>
    <h5 class="adminMarginAdd">Asunto: </h5>
    <div class="input-group">
        <input type="text" class="form-control" placeholder="Nombre del Cliente" aria-describedby="basic-addon2" style=" margin-top: -.5em; margin-left: 1em;">
    </div>
    <h5 class="adminMarginAdd">Descripcion: </h5>
    <div class="input-group">
        <input type="text" class="form-control" placeholder="Nombre del Cliente" aria-describedby="basic-addon2" style=" margin-top: -.5em; margin-left: 1em;">
    </div>
    <h5 class="adminMarginAdd">Fecha límite: </h5>
    <div class="input-group">
        <input type="text" class="form-control" placeholder="Código del Cliente" aria-describedby="basic-addon2" style=" margin-top: -.5em; margin-left: 1em;">
    </div>
    <br>
    <div class="dropdown">
        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
            Importancia
            <span class="caret"></span>
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
            <li><a href="#">Alta</a></li>
            <li><a href="#">Media</a></li>
            <li><a href="#">Baja</a></li>
        </ul>
    </div>
    <button type="button" class="btn btn-default" style="margin-top: 1em">Solicitar</button></td>
@endsection
