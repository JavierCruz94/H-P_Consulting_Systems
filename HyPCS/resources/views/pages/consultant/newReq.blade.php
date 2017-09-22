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
            <tr>
                <td>AAAAA</td>
                <td>AAAAAA</td>
                <td>AAAA</td>
                <td>AAAA</td>
                <td>AAA</td>
                <td><button type="button" class="btn btn-default">Agendar Visita</button></td>
            </tr>
            <tr>
                <td>CCC</td>
                <td>CCCCC</td>
                <td>CCC</td>
                <td>CCC</td>
                <td>C</td>
                <td><button type="button" class="btn btn-default">Agendar Visita</button></td>
            </tr>
            <tr>
                <td>HHH</td>
                <td>HHHHH</td>
                <td>HHH</td>
                <td>HHH</td>
                <td>HHHHH</td>
                <td><button type="button" class="btn btn-default">Agendar Visita</button></td>
            </tr>
            <tr>
                <td>PPPPPP</td>
                <td>PPPP</td>
                <td>PPPP</td>
                <td>PPPP</td>
                <td>PPPP</td>
                <td><button type="button" class="btn btn-default">Agendar Visita</button></td>
            </tr>
        </table>
    </div>
@endsection
