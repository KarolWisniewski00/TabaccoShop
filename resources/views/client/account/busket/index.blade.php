@extends('layout.client')
@section('nav')
@include('module.nav.main')
@endsection
@section('title')
<h1 class="my-5">Koszyk</h1>
@endsection
@section('content')
<!--BUSKET-->
<section>
    <div class="container">
        <div class="row">
            <div class="col-12">
                @include('module.nav.account')
                <div class="text-center fw-bold mt-4 pt-4" style="font-size: 1.4em;">Twój koszyk jest pusty!</div>
            </div>
        </div>
    </div>
</section>
<!--END BUSKET-->
@endsection