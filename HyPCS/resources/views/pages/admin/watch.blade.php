@extends('layouts.master')


@section('title', 'HyPCS')

@section('navbar')
    @include('layouts.navbarAdmin')
@endsection

@section('content')
    <br> <br> <br>
    <h3><span class="label label-default" id="firstAdd">Clientes</span></h3>
    <div class="table-responsive">
        <table class="table">
            <tr style="font-weight: bold; margin: auto">
                <td> Cliente </td>
                <td> Codigo </td>
                <td> Fecha ini </td>
                <td> Cant. Req. </td>
                <td> Ultima Req. </td>
            </tr>

            @foreach($users as $information)
                <tr>
                    <td>{{ $information->name }}</td>
                    <td>{{ $information->code }}</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                </tr>
            @endforeach

        </table>
    </div>
@endsection
