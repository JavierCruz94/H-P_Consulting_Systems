@extends('layouts.master')


@section('title', 'HyPCS')

@section('navbar')
    @include('layouts.navbarConsultant')
@endsection

@section('content')
    <br> <br> <br>
    <form action="{{ route('checkClientReq') }}" method="GET">
        {{ csrf_field() }}
        <h3><span class="label label-default" id="firstAdd">Reporte de Visita</span></h3>
        <div>
            <b>Hora llegada:</b> {{$horas[0]}}
        </div>
        <div>
            <b>Hora salida:</b> {{$horas[1]}}
        </div>
        -------------------------------
        @foreach($requests as $request)
            <div>
                <b>Asunto: </b> {{$request[0]->subject}}
            </div>
            <div>
                <b>Descripcion: </b> {{$request[0]->description}}
            </div>
            -------------------------------
        @endforeach
        <div>
            <b>Comentarios:</b> {{$comments}}
        </div>
        <div>
            <button type="submit"> Firmar </button>
        </div>
    </form>
    <form action="{{ route('checkClientReq') }}" method="GET">
    {{ csrf_field() }}
        <input type="hidden" name="codigo" value="{{$requests[0][0]->id_customer}}" />
        <button type="submit"> Modificar reporte </button>
    </form>
@endsection
