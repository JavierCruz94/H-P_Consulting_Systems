@extends('layouts.master')


@section('title', 'HyPCS')

@section('navbar')
    @include('layouts.navbarAdmin')
@endsection

@section('content')
    <br> <br> <br>
    <h3><span class="label label-default" id="firstAdd">Asignar Solicitudes</span></h3>
    <div class="table-responsive">
        <table class="table">
            <tr style="font-weight: bold; margin: auto">
                <td> Cliente </td>
                <td> Codigo </td>
                <td> Fecha Req. </td>
                <td> Asunto </td>
                <td> Descr. </td>
                <td> Consultor </td>
                <td> Asignar </td>
            </tr>
            @foreach($requests as $request)
                <tr>
                    <form action="{{ route('assignRequestToConsultant') }}" method="POST">
                        {{ csrf_field() }}
                        <input type="hidden" name="id_request" value="{{$request->id_request}}" />
                        <td>{{ $request->name }}</td>
                        <td>{{ $request->code }}</td>
                        <td>{{ substr($request->created_at, 0, 10) }}</td>
                        <td>{{ $request->subject }}</td>
                        <td>{{ $request->description }}</td>
                        <td>
                            <select class="form-control" id="selectConsId" name="selectCons">
                                @foreach($consultants as $consultant)
                                    <option value="{{$consultant->id_consultant}}">{{$consultant->firstname}} ({{$consultant->cantidad}})</option>
                                @endforeach
                            </select>
                        </td>
                        <td><button type="submit" class="btn btn-default">Asignar</button></td>
                    </form>
                </tr>
            @endforeach
            <!--
            <tr>
                <td>AAAAA</td>
                <td>AAAAAA</td>
                <td>AAAA</td>
                <td>AAA</td>
                <td>AAA</td>
                <td>
                    <div class="dropdown">
                        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            Select Cons
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                            <li><a href="#">Consultor 1</a></li>
                            <li><a href="#">Consultor 2</a></li>
                            <li><a href="#">Consultor 3</a></li>
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
                <td>C</td>
                <td>
                    <div class="dropdown">
                        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            Select Cons
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                            <li><a href="#">Consultor 1</a></li>
                            <li><a href="#">Consultor 2</a></li>
                            <li><a href="#">Consultor 3</a></li>
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
                <td>HHHHH</td>
                <td>
                    <div class="dropdown">
                        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            Select Cons
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                            <li><a href="#">Consultor 1</a></li>
                            <li><a href="#">Consultor 2</a></li>
                            <li><a href="#">Consultor 3</a></li>
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
                <td>PPPP</td>
                <td>
                    <div class="dropdown">
                        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            Select Cons
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                            <li><a href="#">Consultor 1</a></li>
                            <li><a href="#">Consultor 2</a></li>
                            <li><a href="#">Consultor 3</a></li>
                        </ul>
                    </div>
                </td>
                <td><button type="button" class="btn btn-default">Asignar</button></td>
            </tr>
            -->
        </table>
    </div>
@endsection
