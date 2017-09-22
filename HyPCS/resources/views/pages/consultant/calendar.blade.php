@extends('layouts.master')


@section('title', 'HyPCS')

@section('navbar')
    @include('layouts.navbarConsultant')
@endsection

@section('content')
    <br> <br> <br>
    <iframe src="https://calendar.google.com/calendar/embed?src=eli.emmanuel01%40gmail.com&ctz=America/Mexico_City" style="border: 0" width="800" height="600" frameborder="0" scrolling="no"></iframe>
@endsection
