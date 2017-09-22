©@extends('layouts.master')

@section('title', 'HyPCS')

@section('navbar')
    @include('layouts.navbarHome')
@endsection

@section('content')
    <div class="row">
        <br> <br> <br>
                <div class="col-xs-12 col-sm-5">
                    <img width="100%" alt="File Icons" style="margin: auto" class="img-responsive" src="{{URL::asset('HYPCS.png')}}" itemprop="image" data-original=”IMAGE URL” align=”left” />
                </div>

                <div class="col-xs-12 col-sm-7">
                    <div class="col-sm-6">
                        <h2>HyPCS</h2>
                    </div>

                </div>
    <!--
           <span align="left">
                <img width="300" alt="File Icons" style="margin: auto" class="pure-img-responsive" src="{{URL::asset('play1.png')}}">
            </span>
            <p style="float:right"> Es una empresa, ante el SAT, registrada en el régimen de “Persona Física con Actividad Empresarial”.
            </p>
     -->
        <p style="font-size:17px; color:#03225C; text-align:justify;">
            Es una empresa, ante el SAT, registrada en el régimen de “Persona Física con Actividad Empresarial”.
        </p>
        <p style="font-size:17px; color:#03225C; text-align:justify;">
            “H&P Consultoría en Sistemas” (H&PCS) comienza a ofrecer sus servicios en 1996, bajo el nombre de “HCG Sistemas de Cómputo” comercializando productos de software y hardware, y realizando instalaciones de cableado estructurado, considerando siempre que las soluciones administrativas instaladas en una plataforma (hardware, sistemas operativos y comunicaciones) bien soportada y puesta a punto, funcionarán correctamente y quedando por mejorar los procesos de información y alimentación de datos por parte de la empresa - cliente.
        </p>
        <p style="font-size:17px; color:#03225C; text-align:justify;">
            Actualmente se ofrecen las soluciones anteriores, adicionando los servicios de consultoría para optimización de procesos y uso de herramientas ofimáticas. Es distribuidor de los sistemas administrativos de ASPEL® y CONTPAQ i®, soportando los requisitos fiscales publicados por el SAT. Además, se busca ofrecer soluciones a la medida según los requerimientos del cliente.
        </p>
        <div class="col-xs-12">
            <hr />
        </div>
    </div>
@endsection


