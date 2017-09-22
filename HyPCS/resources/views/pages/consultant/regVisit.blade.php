@extends('layouts.master')


@section('title', 'HyPCS')

@section('navbar')
    @include('layouts.navbarConsultant')
@endsection

@section('content')
    <br> <br> <br>
    <h3><span class="label label-default" id="firstAdd">Registrar Visita</span></h3>
    <h5 class="adminMarginAdd">Cliente: </h5>
    <div class="input-group">
        <input type="text" class="form-control" placeholder="Nombre del Cliente" aria-describedby="basic-addon2" style=" margin-top: -.5em; margin-left: 1em;">
    </div>
    <button type="button" class="btn btn-default" style="margin-top: 1em">Buscar solicitudes</button></td>

    <h5 class="adminMarginAdd">Solicitudes</h5>
    <div class="table">
        <table class="table">
            <tr style="font-weight: bold; margin: auto">
                <td> Marcar </td>
                <td> Asunto </td>
            </tr>
            <tr>
                <td><div class="checkbox">
                        <label>
                            <input type="checkbox">
                        </label>
                    </div></td>
                <td>AAAAAA</td>
            </tr>
            <tr>
                <td><div class="checkbox">
                        <label>
                            <input type="checkbox">
                        </label>
                    </div></td>
                <td>CCCCC</td>
            </tr>
        </table>
    </div>
    <h5 class="adminMarginAdd">Comentarios extra:</h5>
    <div class="input-group">
        <input type="text" class="form-control" placeholder="Comentarios" aria-describedby="basic-addon2" style=" margin-top: -.5em; margin-left: 1em;">
    </div>
    <h5 class="adminMarginAdd">Hora llegada:</h5>
    <div class="input-group">
        <input type="text" class="form-control" placeholder="Comentarios" aria-describedby="basic-addon2" style=" margin-top: -.5em; margin-left: 1em;">
    </div>
    <h5 class="adminMarginAdd">Hora salida:</h5>
    <div class="input-group">
        <input type="text" class="form-control" placeholder="Comentarios" aria-describedby="basic-addon2" style=" margin-top: -.5em; margin-left: 1em;">
    </div>
    <button type="button" class="btn btn-default" style="margin-top: 1em">Generar reporte</button></td>
@endsection
