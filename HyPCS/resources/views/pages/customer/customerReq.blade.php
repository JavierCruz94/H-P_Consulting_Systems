@extends('layouts.master')

@section('title', 'HyPCS')

@section('navbar')
    @include('layouts.navbarCustomer')
@endsection


@section('content')
    <form action="{{ route('addReqDB') }}" method="POST" style="text-align:center;">
        {{ csrf_field() }}
        <br> <br> <br>
        <h3><span class="label label-default" id="firstAdd">Nueva Solicitud</span></h3>
        <h5 class="adminMarginAdd">Asunto: </h5>
        <div class="input-group" style=" margin-left: 620px;">
            <input name = "subject" type="text" class="form-control" placeholder="Asunto" aria-describedby="basic-addon2" style=" margin-top: -.5em; margin-left: 1em;">

        </div>
        <h5 class="adminMarginAdd">Descripcion: </h5>
        <div class="input-group" style=" margin-left: 620px;">
            <textarea name = "description" class="form-control" placeholder="Comentarios" aria-describedby="basic-addon2" style=" margin-top: -.5em; margin-left: 1em; height: 150px; width: 250px"> </textarea>
        </div>
        <h5 class="adminMarginAdd">Fecha límite: </h5>
        <div class="input-group" style=" margin-left: 635px;">
            <input name = "deadline" id="entryDate" type="date" name="entryDate" value="2017-07-05">    </div>

        <div >
            <select class="form-control" id="importance" name="importancia">
                <option value="Baja">Baja</option>
                <option value="Media">Media</option>
                <option value="Alta">Alta</option>
            </select>
        </div>
        <!--
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
        -->
        <button type="submit" class="btn btn-default" style="margin-top: 1em">Solicitar</button></td>
    </form>
@endsection
