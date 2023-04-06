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
                <h1>Konto</h1>
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
                @if ($edit == 0)
                <ul class="list-group rounded-0 shadow">
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="ms-2 me-auto">
                            <div class="fw-bold">Imię</div>
                            {{$user->name}}
                        </div>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="ms-2 me-auto">
                            <div class="fw-bold">Nazwisko</div>
                            {{$user->surname}}
                        </div>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="ms-2 me-auto">
                            <div class="fw-bold">Email</div>
                            {{$user->email}}
                        </div>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="ms-2 me-auto">
                            <div class="fw-bold">Hasło</div>
                            ********
                        </div>
                    </li>
                </ul>
                <div class="d-flex justify-content-start align-items-center mt-4">
                    <a href="{{url('edit')}}" class="me-2 btn btn-custom rounded-0">Edytuj konto</a>
                    <a href="" class="btn btn-danger rounded-0">Usuń konto</a>
                </div>
                @else
                <form class="form text-center my-5" action="{{route('edit_form')}}" method="POST">
                    <p class="text-muted">Edytowanie hasła jest opcjonalne, jeśli chcesz zachować stare hasło pozostaw pola puste, w przeciwnym wypadku podaj nowe hasło.</p>
                    <!--TOKEN-->
                    @csrf
                    <div class="form-floating my-3">
                        <input type="text" class="form-control rounded-0" id="name" value="{{$user->name}}" name="name" required>
                        <label for="name">Imię</label>
                        <span class="text-danger">@error('name') {{$message}} @enderror</span>
                    </div>

                    <div class="form-floating my-3">
                        <input type="text" class="form-control rounded-0" id="surname" value="{{$user->surname}}" name="surname" required>
                        <label for="surname">Nazwisko</label>
                        <span class="text-danger">@error('surname') {{$message}} @enderror</span>
                    </div>

                    <div class="form-floating my-3">
                        <input type="email" class="form-control rounded-0" id="email" value="{{$user->email}}" name="email" required>
                        <label for="email">Email</label>
                        <span class="text-danger">@error('email') {{$message}} @enderror</span>
                    </div>

                    <div class="form-floating my-3">
                        <input type="password" class="form-control rounded-0" id="password" name="password">
                        <label for="password">Nowe hasło</label>
                        <span class="text-danger">@error('password') {{$message}} @enderror</span>
                    </div>

                    <div class="form-floating my-3">
                        <input type="password" class="form-control rounded-0" id="password_confirm" name="password_confirm">
                        <label for="password_confirm">Powtórz nowe hasło</label>
                        <span class="text-danger">@error('password_confirm') {{$message}} @enderror</span>
                    </div>

                    <div class="d-flex justify-content-start align-items-center mt-4">
                        <button class="btn btn-custom rounded-0 me-2" type="submit">Zapisz</button>
                        <a href="{{url('account')}}" class="btn btn-danger rounded-0">Anuluj</a>
                    </div>
                </form>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection