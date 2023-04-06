@extends('layouts.main')
@section('nav')
@include('layouts.nav')
@endsection
@section('content')
<!--HISTORY-->
<section>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="d-flex flex-column justify-content-center align-items-center text-center my-5">
                    <h1>Twoje zamówienia</h1>
                </div>
                @include('layouts.accnav')
                <div class="col-12">
                    <div class="text-center fw-bold mt-4 pt-4" style="font-size: 1.4em;">Brak zamówień!</div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--END HISTORY-->
@endsection