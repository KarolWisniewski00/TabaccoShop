@extends('layouts.main')
@section('nav')
@if (session()->has('login_id'))
<ul class="nav">
    <li><a href="" class="mx-2 btn btn-custom-2 rounded-0"><i class="fa-solid fa-user"></i></a></li>
    <li><a href="" class="mx-2 btn btn-custom rounded-0"><i class="fa-solid fa-cart-shopping"></i></a></li>
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
                <h1 class="display-1">O nas</h1>
                <h4 class="display-6">Nasz sklep w Bytomiu istnieje od 2023 roku</h4>
                <p class="text-muted">Nasza oferta od początku bogata była w produkty najwyższej jakości, które zawsze kojarzyły się z paleniem.</p>
                <div class="my-2"><img alt="" src="{{ asset('photos/emptyplace.jpg')}}" class="img-fluid" style="max-height: 40em;"></div>
                <h4 class="display-6">To jedyny sklep w Bytomiu który oferuje tak ogromny wybór produktów</h4>
                <p class="text-muted">Nasza oferta cenowa sklepu online jest taka sama jak w punkcie stacjonarnym, a nawet często tańsza. Mamy nadzieję, że sklep w Bytomiu jeszcze długo będzie zadowalać miłośników palenia niepowtarzalnym wyborem i ciekawą ofertą</p>
                <p class="fw-bolder">Zapraszamy do odwiedzenia naszego sklepu oraz zamawiania naszych towarów!</p>
            </div>
        </div>
    </div>
</div>
@endsection