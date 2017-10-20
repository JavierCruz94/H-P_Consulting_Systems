@extends('layouts.master')


@section('title', 'HyPCS')

@section('navbar')
    @include('layouts.navbarAdmin')
@endsection

@section('content')
    <br> <br> <br>
    <div>
        <div>
            <form action="{{ route('addClientDB') }}" method="POST">
                {{ csrf_field() }}
                <div style = "padding-left: 300px; padding-top: 100px" class="pull-left">
                    <h3><span class="label label-default" id="firstAdd">Nuevo Cliente</span></h3>
                    <h5 class="adminMarginAdd">Nombre: </h5>
                    <div class="input-group">
                        <input name="nombre" type="text" class="form-control" placeholder="Nombre del Cliente" aria-describedby="basic-addon2" style=" margin-top: -.5em; margin-left: 1em;">
                    </div>
                    <h5 class="adminMarginAdd">Código Cliente: </h5>
                    <div class="input-group">
                        <input name="code" type="text" class="form-control" placeholder="Código del Cliente" aria-describedby="basic-addon2" style=" margin-top: -.5em; margin-left: 1em;">
                    </div>
                    <h5 class="adminMarginAdd">Email: </h5>
                    <div class="input-group">
                        <input name="email" type="text" class="form-control" placeholder="Direccion" aria-describedby="basic-addon2" style=" margin-top: -.5em; margin-left: 1em;">
                    </div>
                </div>
                <div style = "padding-right: 350px; padding-top: 100px" class="pull-right">
                    <h3><span class="label label-default" id="firstAdd">Detalles de la cuenta</span></h3>
                    <h5 class="adminMarginAdd">Usuario: </h5>
                    <div class="input-group">
                        <input name="username" type="text" class="form-control" placeholder="User" aria-describedby="basic-addon2" style=" margin-top: -.5em; margin-left: 1em;">
                    </div>
                    <h5 class="adminMarginAdd">Password: </h5>
                    <div class="input-group">
                        <input name="password" type="text" class="form-control" placeholder="Password" aria-describedby="basic-addon2" style=" margin-top: -.5em; margin-left: 1em;">
                    </div>
                    <button type="submit" class="btn btn-default" style="margin-top: 1em">Agregar</button></td>
                </div>
             </form>
        </div>
    </div>
@endsection
