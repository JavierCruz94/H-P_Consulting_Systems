@extends('layouts.master')


@section('title', 'HyPCS')

@section('navbar')
    @include('layouts.navbarClient')
@endsection

@section('content')
    <br> <br> <br>
    <img width="900" alt="File Icons" style="margin: auto" class="pure-img-responsive" src="{{URL::asset('calendar.png')}}"/>
@endsection
