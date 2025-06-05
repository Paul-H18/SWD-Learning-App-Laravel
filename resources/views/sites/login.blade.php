@extends('layout.root')

@section('title')
    Login
@endsection


@section('head')
    @vite(['resources/js/login/app.js'])
@endsection

@section('content')
    <div id="login-app">
        <app form-action="{{ route('login.action') }}" csrf="{{ csrf_token() }}"></app>
    </div>
@endsection
