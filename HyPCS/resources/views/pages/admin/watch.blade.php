@extends('layouts.master')


@section('title', 'HyPCS')

@section('navbar')
    @include('layouts.navbarAdmin')
@endsection

@section('content')
    <br> <br> <br>
    <h3><span class="label label-default" id="firstAdd">Clientes</span></h3>
    <h2>{{$user->username}}</h2>
    <h2>{{$admin->firstname}}</h2>
    <div class="table-responsive">
        <table class="table">
            <tr style="font-weight: bold; margin: auto">
                <td> Cliente </td>
                <td> Codigo </td>
                <td> Fecha ini </td>
                <td> Cant. Req. </td>
                <td> Ultima Req. </td>
            </tr>
            <tr>
                <td>AAAAA</td>
                <td>AAAAAA</td>
                <td>AAAA</td>
                <td>AAA</td>
                <td>AAA</td>
            </tr>
            <tr>
                <td>CCC</td>
                <td>CCCCC</td>
                <td>CCC</td>
                <td>C</td>
                <td>CCCCCC</td>
            </tr>
            <tr>
                <td>HHH</td>
                <td>HHHHH</td>
                <td>HHH</td>
                <td>HHHHH</td>
                <td>HHHHH</td>
            </tr>
            <tr>
                <td>PPPPPP</td>
                <td>PPPP</td>
                <td>PPPP</td>
                <td>PPPP</td>
                <td>PPP</td>
            </tr>
        </table>
    </div>
@endsection
