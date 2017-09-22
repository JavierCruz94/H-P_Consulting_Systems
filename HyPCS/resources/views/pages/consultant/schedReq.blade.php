@extends('layouts.master')


@section('title', 'HyPCS')

@section('navbar')
    @include('layouts.navbarConsultant')
@endsection

@section('content')
    <br> <br> <br>
    <h3><span class="label label-default" id="firstAdd">Agendar Cita</span></h3>
    <h5 class="adminMarginAdd">Asunto: Test</h5>
    <h5 class="adminMarginAdd">Descripción: jsjao jfpsnau nsiof hauisf aps fjhus hapo fjpsk fja</h5>
    <h5 class="adminMarginAdd">Hora asignada:</h5>
    <input type="time"  value="12:00">
    <br><br>
    <input id="entryDate" type="date" name="entryDate" value="2017-07-05"><br>
    <button type="button" class="btn btn-default" style="margin-top: 1em">Asignar Cita</button></td>
@endsection
