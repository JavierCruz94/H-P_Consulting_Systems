@extends('layouts.master')


@section('title', 'HyPCS')

@section('navbar')
    @include('layouts.navbarAdmin')
@endsection

@section('content')
    <br> <br> <br>
    <h3><span class="label label-default" id="firstAdd">Nuevo Consultor</span></h3>
    <h5 class="adminMarginAdd">Nombre </h5>
    <div class="input-group">
        <input type="text" class="form-control" placeholder="Nombre del Cliente" aria-describedby="basic-addon2" style=" margin-top: -.5em; margin-left: 1em;">
    </div>
    <button type="button" class="btn btn-default" style="margin-top: 1em">Agregar</button></td>
@endsection
