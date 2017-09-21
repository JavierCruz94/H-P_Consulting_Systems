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
                    <div class="dropdown">
                        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            Selecc. Cons.
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                            <li>Cons. 1</li>
                            <li>Cons. 2</li>
                            <li>Cons. x</li>
                        </ul>
                    </div>
                </td>
                <td><button type="button" class="btn btn-default">Asignar</button></td>
            </tr>
            <tr>
                <td>CCC</td>
                <td>CCCCC</td>
                <td>CCC</td>
                <td>C</td>
                <td>
                    <div class="dropdown">
                        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            Selecc. Cons.
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                            <li>Cons. 1</li>
                            <li>Cons. 2</li>
                            <li>Cons. x</li>
                        </ul>
                    </div>
                </td>
                <td><button type="button" class="btn btn-default">Asignar</button></td>
            </tr>
            <tr>
                <td>HHH</td>
                <td>HHHHH</td>
                <td>HHH</td>
                <td>HHHHH</td>
                <td>
                    <div class="dropdown">
                        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            Selecc. Cons.
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                            <li>Cons. 1</li>
                            <li>Cons. 2</li>
                            <li>Cons. x</li>
                        </ul>
                    </div>
                </td>
                <td><button type="button" class="btn btn-default">Asignar</button></td>
            </tr>
            <tr>
                <td>PPPPPP</td>
                <td>PPPP</td>
                <td>PPPP</td>
                <td>PPPP</td>
                <td>
                    <div class="dropdown">
                        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            Selecc. Cons.
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                            <li>Cons. 1</li>
                            <li>Cons. 2</li>
                            <li>Cons. x</li>
                        </ul>
                    </div>
                </td>
                <td><button type="button" class="btn btn-default">Asignar</button></td>
            </tr>
        </table>
    </div>
@endsection
