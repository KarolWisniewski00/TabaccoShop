@extends('layout.client')
@section('nav')
@include('module.nav.main')
@endsection
@section('title')
<h1 class="my-5">Twoje zamówienia</h1>
@endsection
@section('content')
<!--HISTORY-->
<section>
    <div class="container">
        <div class="row">
            @include('module.account')
            <div class="col-12">
                <div class="text-center fw-bold mt-4 pt-4" style="font-size: 1.4em;">Brak zamówień!</div>
            </div>
        </div>
    </div>
</section>
<!--END HISTORY-->
@endsection