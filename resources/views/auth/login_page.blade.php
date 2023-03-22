@extends('layouts.main')
@section('nav')
<ul class="nav">
    <li><a href="register" class="mx-2 btn btn-custom-1 text-black rounded-0">Rejestracja</a></li>
</ul>
@endsection
@section('content')
<section>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form class="form text-center my-5" action="{{route('login_form')}}" method="POST">
                <!--TOKEN-->
                @csrf
                <h1 class="h3 mb-3 fw-normal">Logowanie</h1>

                <div class="form-floating my-3">
                    <input type="email" class="form-control rounded-0" id="email" value="{{old('email')}}" name="email" required>
                    <label for="email">Email</label>
                    <span class="text-danger">@error('email') {{$message}} @enderror</span>
                </div>

                <div class="form-floating my-3">
                    <input type="password" class="form-control rounded-0" id="password" name="password" required>
                    <label for="password">Hasło</label>
                    <span class="text-danger">@error('password') {{$message}} @enderror</span>
                </div>

                <div><a href="">Zapomaniałeś hasła?</a></div>
                <div><a href="register">Nie masz konta? Rejestracja</a></div>

                <button class="w-100 btn btn-lg btn-custom my-3 rounded-0" type="submit">Zaloguj</button>
            </form>
        </div>
            </div>
        </div>
    </div>
</section>
@endsection