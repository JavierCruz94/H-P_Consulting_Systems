@extends('layouts.master')

@section('title', 'HyPCS')

@section('navbar')
    @include('layouts.navbarHome')
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <br> <br> <br>

            <div class="col-sm-6 col-md-6 col-xs-6">

                <div class="thumbnail" style="border:none; background:white;">

                    <div class="col-sm-6 col-md-6 col-xs-12 image-container">
                        <img width="300" alt="File Icons" style="margin: auto" class="pure-img-responsive" src="{{URL::asset('HYPCS.png')}}"/>
                    </div>

                    <div class="col-sm-6 col-md-6 col-xs-12">

                        <h3>HyPCS</h3>
                        <p style="font-size:10px; color:#03225C;">
                            Es una empresa, ante el SAT, registrada en el régimen de “Persona Física con Actividad Empresarial”.

                            “H&P Consultoría en Sistemas” (H&PCS) comienza a ofrecer sus servicios en 1996, bajo el nombre de “HCG Sistemas de Cómputo” comercializando productos de software y hardware, y realizando instalaciones de cableado estructurado, considerando siempre que las soluciones administrativas instaladas en una plataforma (hardware, sistemas operativos y comunicaciones) bien soportada y puesta a punto, funcionarán correctamente y quedando por mejorar los procesos de información y alimentación de datos por parte de la empresa - cliente.

                            Actualmente se ofrecen las soluciones anteriores, adicionando los servicios de consultoría para optimización de procesos y uso de herramientas ofimáticas. Es distribuidor de los sistemas administrativos de ASPEL® y CONTPAQ i®, soportando los requisitos fiscales publicados por el SAT. Además, se busca ofrecer soluciones a la medida según los requerimientos del cliente.
                        </p>
                    </div>
                </div>

            </div>

            <!--
            <span align="left">
                <img width="300" alt="File Icons" style="margin: auto" class="pure-img-responsive" src="{{URL::asset('play1.png')}}">
            </span>
            <p style="float:right"> Es una empresa, ante el SAT, registrada en el régimen de “Persona Física con Actividad Empresarial”.
            </p>
            -->
        </div>
    </div>
@endsection


