    @extends('layouts.master')


@section('title', 'HyPCS')

@section('navbar')
    @include('layouts.navbarAdmin')
@endsection

@section('content')
    <br> <br> <br>
    <div>
        <form action="{{ route('addConsultantDB') }}" method="POST">
            {{ csrf_field() }}
            <div style = "padding-left: 300px; padding-top: 100px" class="pull-left">
                <h3><span class="label label-default" id="firstAdd">Nuevo Consultor</span></h3>
                <h5 class="adminMarginAdd">Nombre: </h5>
                <div class="input-group">
                    <input name="firstname" type="text" class="form-control" placeholder="Nombre del Consultor" aria-describedby="basic-addon2" style=" margin-top: -.5em; margin-left: 1em;">
                </div>
                <h5 class="adminMarginAdd">Apellido: </h5>
                <div class="input-group">
                    <input name="lastname" type="text" class="form-control" placeholder="Apellido del Consultor" aria-describedby="basic-addon2" style=" margin-top: -.5em; margin-left: 1em;">
                </div>
                <h5 class="adminMarginAdd">E-mail: </h5>
                <div class="input-group">
                    <input name="email" type="text" class="form-control" placeholder="correo electronico" aria-describedby="basic-addon2" style=" margin-top: -.5em; margin-left: 1em;">
                </div>
                <h5 class="adminMarginAdd">Nivel: </h5>
                <div class="input-group">
                    <input name="nivel" type="text" class="form-control" placeholder="correo electronico" aria-describedby="basic-addon2" style=" margin-top: -.5em; margin-left: 1em;">
                </div>
            </div>
            <div style = "padding-right: 350px; padding-top: 100px" class="pull-right">
                <h3><span class="label label-default" id="firstAdd">Detalles de la cuenta</span></h3>
                <h5 class="adminMarginAdd">Usuario: </h5>
                <div class="input-group">
                    <input name="username" type="text" class="form-control" placeholder="User" aria-describedby="basic-addon2" style=" margin-top: -.5em; margin-left: 1em;">
                </div>
                <h5 class="adminMarginAdd">Pasword: </h5>
                <div class="input-group">
                    <input name="password" type="text" class="form-control" placeholder="Password" aria-describedby="basic-addon2" style=" margin-top: -.5em; margin-left: 1em;">
                </div>
                <button type="submit" class="btn btn-default" style="margin-top: 1em">Agregar</button></td>
            </div>
        </form>
    </div>
@endsection
