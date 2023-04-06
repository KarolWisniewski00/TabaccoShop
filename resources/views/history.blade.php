@extends('layouts.main')
@section('nav')
@if (session()->has('login_id'))
<ul class="nav">
    <li><a href="{{ url('account')}}" class="mx-2 btn btn-custom-2 rounded-0"><i class="fa-solid fa-user"></i></a></li>
    <li><a href="{{ url('busket')}}" class="mx-2 btn btn-custom rounded-0"><i class="fa-solid fa-cart-shopping"></i></a></li>
    <li><a href="{{ url('logout')}}" class="mx-2 btn btn-custom-1 text-black rounded-0"><i class="fa-solid fa-right-from-bracket"></i></a></li>
</ul>
@else
<ul class="nav">
    <li><a href="{{ url('login')}}" class="mx-2 btn btn-custom rounded-0">Logowanie</a></li>
    <li><a href="{{ url('register')}}" class="mx-2 btn btn-custom-1 text-black rounded-0">Rejestracja</a></li>
</ul>
@endif
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="d-flex flex-column justify-content-center align-items-center text-center my-5">
                <h1>Twoje zamówienia</h1>
            </div>
            <nav class="py-2 mb-2">
                <div class="container d-flex flex-wrap">
                    <ul class="nav mx-auto">
                        <li class="nav-item"><a href="{{ url('account')}}" class="nav-link link-dark px-2">Informacje</a></li>
                        <li class="nav-item"><a href="{{ url('history')}}" class="nav-link link-dark px-2">Twoje zamówienia</a></li>
                        <li class="nav-item"><a href="{{ url('busket')}}" class="nav-link link-dark px-2">Koszyk</a></li>
                        @if (session()->has('admin'))
                        <li class="nav-item"><a href="#" class="nav-link link-dark px-2">Panel admina</a></li>
                        @endif
                        <li class="nav-item"><a href="{{ url('logout')}}" class="nav-link link-dark px-2">Wyloguj się</a></li>
                    </ul>
                </div>
            </nav>
            <div class="col-12">
                <div class="text-center fw-bold mt-4 pt-4" style="font-size: 1.4em;">Brak zamówień!</div>
            </div>
        </div>
    </div>
</div>
@endsection