@extends('layouts.master')


@section('title', 'HyPCS')

@section('navbar')
    @include('layouts.navbarAdmin')
@endsection

@section('content')
    <br> <br> <br>
    <div class="table-responsive">
        <table class="table">
            <tr style="font-weight: bold; margin: auto">
                <td> Cliente </td>
                <td> Codigo </td>
                <td> Fecha Req. </td>
                <td> Descr. </td>
                <td> Consultor </td>
                <td> Asignar </td>
            </tr>
            <tr>
                <td>AAAAA</td>
                <td>AAAAAA</td>
                <td>AAAA</td>
                <td>AAA</td>
                <td>
                </td>
                <td><button type="button" class="btn btn-default">Cita asignada</button></td>
            </tr>
            <tr>
                <td>CCC</td>
                <td>CCCCC</td>
                <td>CCC</td>
                <td>C</td>
                <td>
                    </div>
                </td>
                <td><button type="button" class="btn btn-default">Cita Asignada</button></td>
            </tr>
            <tr>
                <td>HHH</td>
                <td>HHHHH</td>
                <td>HHH</td>
                <td>HHHHH</td>
                <td>
                </td>
                <td><button type="button" class="btn btn-default">Cita Asignada</button></td>
            </tr>
            <tr>
                <td>PPPPPP</td>
                <td>PPPP</td>
                <td>PPPP</td>
                <td>PPPP</td>
                <td>
                </td>
                <td><button type="button" class="btn btn-default">Cita Asignada</button></td>
            </tr>
        </table>
    </div>
@endsection
