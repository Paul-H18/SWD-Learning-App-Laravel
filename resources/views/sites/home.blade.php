@extends('layout.root')

@section('title')
    Home
@endsection


@section('head')
    @vite(['resources/js/home/app.js'])

@endsection

@section('content')
    <div>
        Hello World
    </div>
@endsection
