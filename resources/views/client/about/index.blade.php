@extends('layout.client')
@section('nav')
@include('module.nav.main')
@endsection
@section('title')
<h1 class="my-5">O nas</h1>
@endsection
@section('content')
<!--ABOUT-->
<section>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="d-flex flex-column justify-content-center align-items-center text-center">
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
</section>
<!--END ABOUT-->
@endsection