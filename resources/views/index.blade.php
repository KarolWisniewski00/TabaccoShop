@extends('layouts.main')
@section('nav')
@include('layouts.nav')
@endsection
@section('content')
<!--HERO-->
<section>
    <div id="myCarousel" class="carousel slide border-bot-custom" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
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
        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
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
                <a href="{{ url('category/'.$category->url)}}" class="position-relative cat-card">
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
                <div class="border text-center p-4 shadow position-relative h-100 d-flex flex-column justify-content-between align-items-center">
                    <img alt="bong" src="{{ asset('photos/'.$product->photo)}}" class="img-fluid">
                    <h3>{{$product->name}}</h3>
                    <p class="text-muted">{{$product->short_description}}</p>
                    <div class="d-flex flex-row justify-content-center align-items-center mb-4">
                        @if ($product->sale_price != 0)
                        <div class="text-muted" style="text-decoration: line-through;padding-top:1px;">{{$product->normal_price}} PLN</div>
                        <div class="text-custom-2 fs-4"> {{$product->sale_price}} PLN</div>
                        @else
                        <div class="text-custom-2 fs-4"> {{$product->normal_price}} PLN</div>
                        @endif
                    </div>
                    <div class="d-flex flex-row justify-content-between align-items-center">
                        <button class="btn btn-custom rounded-0 w-75 h-100 me-2">Dodaj do koszyka</button>
                        <a href="{{ url('product/'.$product->id)}}" class="btn btn-custom-1 rounded-0 w-25 h-100 text-black d-flex justify-content-center align-items-center"><i class="fa fa-search"></i></a>
                    </div>
                    <div class="position-absolute top-0 start-100 p-2" style="transform:translateX(-100%)">
                        @if ($product->new != 0)
                        <div class="bg-custom p-2 text-white mb-2 shadow">Nowość!</div>
                        @endif
                        @if ($product->sale_price != 0)
                        <div class="bg-custom-1 p-2 text-white shadow">-{{100-(($product->sale_price*100)/$product->normal_price)}}%</div>
                        @endif
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!--END PRODUCTS GRID-->
@endsection