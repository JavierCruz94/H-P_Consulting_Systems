@extends('layouts.master')


@section('title', 'HyPCS')

@section('navbar')
    @include('layouts.navbarConsultant')
@endsection

@section('content')
    <br> <br> <br>
    <h3><span class="label label-default" id="firstAdd">Nuevas Solicitudes</span></h3>
    <div class="table-responsive">
        <table class="table">
            <tr style="font-weight: bold; margin: auto">
                <td> Cliente </td>
                <td> Codigo </td>
                <td> Fecha Req. </td>
                <td> Asunto </td>
                <td> Descr. </td>
                <td> ¿Agendada? </td>
            </tr>
            @foreach($requests as $request)
                <tr>
                    <td>{{ $request->name }}</td>
                    <td>{{ $request->code }}</td>
                    <td>{{ substr($request->created_at, 0, 10) }}</td>
                    <td>{{ $request->subject }}</td>
                    <td>{{ $request->description }}</td>
                    <td><a href="/schedReq">Agendar Visita</a></td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
