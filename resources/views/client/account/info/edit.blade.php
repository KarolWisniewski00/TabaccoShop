@extends('layout.client')
@section('nav')
@include('module.nav')
@endsection
@section('content')
<!--ACCOUNT-->
<section>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="d-flex flex-column justify-content-center align-items-center text-center my-5">
                    <h1>Konto</h1>
                </div>
                @include('module.accnav')
                <div class="col-12">
                    <form class="form text-center my-5" action="{{route('client.account.info.store')}}" method="POST">
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
                </div>
            </div>
        </div>
    </div>
</section>
<!--ACCOUNT-->
@endsection