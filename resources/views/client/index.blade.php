@extends('layout.client')
@section('nav')
@include('module.nav.main')
@endsection
@section('content')
<!--HERO-->
<section>
    <div id="slider" class="carousel slide border-bot-custom" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#slider" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#slider" data-bs-slide-to="1" aria-label="Slide 2"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div style="max-height: 50em;"><img alt="" src="{{ asset('photos/hero.jpg')}}" class="img-fluid" style="min-height: 30em; min-width:40em;"></div>
                <div class="container">
                    <div class="carousel-caption" style="text-shadow: 2px 2px 20px rgba(0,0,0,0.2);">
                        <h1>Wielkie otwarcie Taco Tabacco!</h1>
                        <p>Najwyższej jakości produkty związane z paleniem</p>
                        <p><a class="btn btn-custom rounded-0" href="#">Załóż konto i zamów!</a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div style="max-height: 50em;"><img alt="" src="{{ asset('photos/hero1.jpg')}}" class="img-fluid" style="min-height: 30em; min-width:40em;"></div>

                <div class="container">
                    <div class="carousel-caption" style="text-shadow: 2px 2px 20px rgba(0,0,0,0.2);">
                        <h1>Fenomenalne akcesoria</h1>
                        <p>Największy wybór produktów związanych z paleniem</p>
                        <p><a class="btn btn-custom rounded-0" href="#">Zobacz wszystkie produkty!</a></p>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#slider" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#slider" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</section>
<!--END HERO-->
<!--NAV GRID-->
<section>
    <div class="container">
        <h2 class="text-center my-4" style="font-size: 3em;">Kategorie</h2>
        <div class="row g-4 justify-content-center">
            @foreach($categories as $category)
            <div class="col-12 col-md-4">
                <a href="{{ route('category.show', $category->url)}}" class="position-relative cat-card">
                    <div class="bg-img" style="background-image: url({{ asset('photos/'.$category->photo) }} );"></div>
                    <div class="position-absolute top-0 start-50 translate-middle-x text-center mt-3 p-2">
                        <p class="cat-cat">Kategoria</p>
                        <h2 class="cat-head">{{$category->plural}}</h2>
                    </div>
                </a>
            </div>
            @endforeach
            @if(count($categories) % 2 == 2)
            <div class="col-xx col-sm-12 col-md-4"></div>
            @endif
        </div>
    </div>
</section>
<!--END NAV GRID-->
<!--PRODUCTS GRID-->
<section>
    <div class="container">
        <h2 class="text-center my-4" style="font-size: 3em;">Produkty</h2>
        <div class="row products">
            @foreach ($products as $product)
            <div class="col-12 col-md-6 col-lg-3 mb-4">
                @include('module.card')
            </div>
            @endforeach
        </div>
    </div>
</section>
<!--END PRODUCTS GRID-->
@endsection