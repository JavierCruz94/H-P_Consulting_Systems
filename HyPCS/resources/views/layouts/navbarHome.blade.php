@extends('layouts.navbar')

@section('navTitle')
    <a class="navbar-brand" href="#">HyPCSS</a>
@endsection

@section('navbarType')
    <ul class="nav navbar-nav navbar-right">

        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <div style="background-color: rgba(0, 0, 0, 0.5);border-radius: 15px;padding-bottom: 23px;">
                        <form action="{{ route('login') }}" method="POST" class="form-signin">
                            {{ csrf_field() }}
                            <label for="inputUsername" class="sr-only">Username</label>
                            <input type="text" id="inputUsername" name="username" class="form-control" placeholder="Username"
                                   required autofocus>
                            <label for="inputPassword" class="sr-only">Password</label>
                            <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password"
                                   required>
                            <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!--
        <li> <p class="navbar-text">Usuario:</p></li>
        <li> <input type="text" class="form-control" placeholder="usuario" style="margin-top: .60em"></li>

        <li> <p class="navbar-text">Contraseña:</p></li>
        <li> <input type="text" class="form-control" placeholder="contraseña" style="margin-top: .60em"></li>

        <li><a href="/adminWatch">Adm</a></li>
        <li><a href="/newReq">Cons</a></li>
        <li><a href="/clientReq">Cliente</a></li>
        -->
    </ul>
@endsection