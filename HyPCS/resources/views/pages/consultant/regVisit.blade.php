@extends('layouts.master')


@section('title', 'HyPCS')

@section('navbar')
    @include('layouts.navbarConsultant')
@endsection

@section('content')
    <br> <br> <br>
    <div>
        <div style=" width: 25%; height: 100%; float: left;">
            <h3><span class="label label-default" id="firstAdd">Registrar Visita</span></h3>
            <h5 class="adminMarginAdd">Cliente: </h5>
            <form action="{{ route('checkClientReq') }}" method="GET">
                {{ csrf_field() }}
                <div class="input-group">
                    <input name="codigo" type="text" class="form-control" placeholder="Codigo/Nombre Cliente" aria-describedby="basic-addon2" style=" margin-top: -.5em; margin-left: 1em;">
                </div>
            <button type="submit" class="btn btn-default" style="margin-top: 1em">Buscar solicitudes</button></td>
            </form>
            <div>
                <form action="{{ route('generateReport') }}" method="POST">
                    {{ csrf_field() }}
                    <h5 class="adminMarginAdd">Comentarios extra:</h5>
                    <div class="input-group">
                        <textarea name="comentarios" class="form-control" placeholder="Comentarios" aria-describedby="basic-addon2" style=" margin-top: -.5em; margin-left: 1em; height: 150px; width: 250px"> </textarea>
                    </div>
                    <h5 class="adminMarginAdd">Hora llegada:</h5>
                    <div class="input-group">
                        <input name="arrivalHour" type="time"  value="12:00">
                    </div>
                    <h5 class="adminMarginAdd">Hora salida:</h5>
                    <div class="input-group">
                        <input name="departureHour" type="time"  value="12:00">
                    </div>
                </div>
            </div>
            <div style = "width: 50%; height: 100%; float: left;">
                <h5 class="adminMarginAdd">Solicitudes</h5>
                <div class="table">
                    <table class="table">
                        <tr style="font-weight: bold; margin: auto">
                            <td> Marcar </td>
                            <td> Asunto </td>
                        </tr>
                            @foreach($requests as $request)
                                <tr>
                                    {{ csrf_field() }}
                                    <input type="hidden" name="longitud" value="" />
                                    <td><input name="requests[]" type="checkbox" value="{{$request->id_request}}"></td>
                                    <td>{{ $request->subject }}</td>
                                </tr>
                            @endforeach
                    </table>
                    <button type="submit" class="btn btn-default" style="margin-top: 1em">Generar reporte</button>
                </form>
            </div>
        </div>
    </div>
@endsection
