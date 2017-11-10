@extends('layouts.master')

@section('title', 'HyPCS')

@section('custom_head')
    <link href="{{ asset('css/consultant/report.css') }}" rel="stylesheet" type="text/css">
@endsection

@section('navbar')
    @include('layouts.navbarConsultant')
@endsection

@section('content')

    <div class="row" id="main-container">
        <div class="col-md-12">

            <div class="row">
                <div class="col-md-3" id="left-side">
                    <img class="img-responsive" id="logo" src="{{URL::asset('HYPCS.png')}}" />
                </div>
                <div class="col-md-9" id="right-side">
                    <h2><span class="label label-default" id="firstAdd">Reporte de Visita</span></h2>

                    <div class="row">
                        <div class="col-md-3">
                            <div class="table-responsive">
                                <table class="table-bordered">
                                    <tr>
                                        <th>Fecha</th>
                                        <td>{{Carbon\Carbon::now()->toFormattedDateString()}}</td>
                                    </tr>
                                    <tr>
                                        <th>Hora de llegada</th>
                                        <td>{{$horas[0]}}</td>
                                    </tr>
                                    <tr>
                                        <th>Hora de salida</th>
                                        <td>{{$horas[1]}}</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="table-responsive">
                                <table class="table-bordered">
                                    <tr>
                                        <th>Código de Cliente</th>
                                        <td>{{$customer->id_customer}}</td>
                                    </tr>
                                    <tr>
                                        <th>Nombre de Cliente</th>
                                        <td>{{$customer->name}}</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>

                    <h3><span class="label label-default" id="firstAdd">Requisiciones</span></h3>

                    @foreach($requests as $request)
                        <div class="table-responsive">
                            <table class="table-bordered">
                                <tr>
                                    <th>No. Req</th>
                                    <td>{{$request[0]->id_request}}</td>
                                </tr>
                                <tr>
                                    <th>Asunto</th>
                                    <td>{{$request[0]->subject}}</td>
                                </tr>
                                <tr>
                                    <th>Descripción</th>
                                    <td>{{$request[0]->description}}</td>
                                </tr>
                            </table>
                        </div>
                    @endforeach

                    <div class="form-group">
                        <h3><span class="label label-default" id="firstAdd">Comentarios</span></h3>
                        <textarea class="form-control" rows="3" id="comment" readonly>{{$comments}}</textarea>
                    </div>

                    <div class="row">
                        <div class="col-md-1">
                            <form action="{{ route('signReport') }}" method="POST">
                                {{ csrf_field() }}
                                <input type="hidden" name="arrival_time" value="{{$horas[0]}}" />
                                <input type="hidden" name="finishing_time" value="{{$horas[1]}}" />
                                <input type="hidden" name="comments" value="{{$comments}}" />
                                <input type="hidden" name="id_request" value="{{json_encode($requests)}}" />
                                <button type="submit" class="btn btn-default">Firmar</button>
                            </form>
                        </div>
                        <div class="col-md-11">
                            <form action="{{ route('checkClientReq') }}" method="GET">
                                {{ csrf_field() }}
                                <input type="hidden" name="codigo" value="{{$requests[0][0]->id_customer}}" />
                                <button type="submit" class="btn btn-default">Modificar reporte</button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection
