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
                </div>
            </div>
        </div>
    </div>
</section>
<!--ACCOUNT-->
@endsection