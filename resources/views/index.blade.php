@extends('layouts.main')
@section('nav')
@if (session()->has('login_id'))
<ul class="nav">
    <li><a href="" class="mx-2 btn btn-custom rounded-0"><i class="fa-solid fa-user"></i></a></li>
    <li><a href="" class="mx-2 btn btn-custom rounded-0"><i class="fa-solid fa-cart-shopping"></i></a></li>
    <li><a href="logout" class="mx-2 btn btn-custom-1 text-black rounded-0"><i class="fa-solid fa-right-from-bracket"></i></a></li>
</ul>
@else
<ul class="nav">
    <li><a href="login" class="mx-2 btn btn-custom rounded-0">Logowanie</a></li>
    <li><a href="register" class="mx-2 btn btn-custom-1 text-black rounded-0">Rejestracja</a></li>
</ul>
@endif
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
                <div style="max-height: 50em;"><img alt="" src="{{ asset('photos/hero.jpg')}}" class="img-fluid"></div>
                <div class="container">
                    <div class="carousel-caption">
                        <h1>Wielkie otwarcie Taco Tabacco!</h1>
                        <p>Najwyższej jakości prtykuły związane z paleniem</p>
                        <p><a class="btn btn-lg btn-custom rounded-0" href="#">Załóż konto i zamów!</a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div style="max-height: 50em;"><img alt="" src="{{ asset('photos/hero1.jpg')}}" class="img-fluid"></div>

                <div class="container">
                    <div class="carousel-caption">
                        <h1>Fenomenalne akcesoria</h1>
                        <p>Największy wybór produktów związanych z paleniem</p>
                        <p><a class="btn btn-lg btn-custom rounded-0" href="#">Zobacz wszystkie produkty!</a></p>
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
        <div class="row g-4">
            <div class="col-4">
                <div class="bg-img-2 p-4"></div>
            </div>
            <div class="col-4">
                <div class="bg-img-3 p-4"></div>
            </div>
            <div class="col-4">
                <div class="bg-img-4 p-4"></div>
            </div>
        </div>
    </div>
</section>
<!--END NAV GRID-->
<!--PRODUCTS GRID-->
<section>
    <div class="container">
        <h2 class="text-center my-4" style="font-size: 3em;">Nowości</h2>
        <div class="row g-4">
            <div class="col-3">
                <div class="border rounded text-center p-4 rounded">
                    <img alt="bong" src="{{ asset('photos/product.jpg')}}" class="img-fluid">
                    <h3>Nazwa produktu</h3>
                    <div>
                        <div class="text-danger">100 PLN</div>
                        <button class="btn btn-custom">Wybierz</button>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="border rounded text-center p-4 rounded">
                    <img alt="bong" src="{{ asset('photos/product.jpg')}}" class="img-fluid">
                    <h3>Nazwa produktu</h3>
                    <div>
                        <div class="text-danger">100 PLN</div>
                        <button class="btn btn-custom">Wybierz</button>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="border rounded text-center p-4 rounded">
                    <img alt="bong" src="{{ asset('photos/product.jpg')}}" class="img-fluid">
                    <h3>Nazwa produktu</h3>
                    <div>
                        <div class="text-danger">100 PLN</div>
                        <button class="btn btn-custom">Wybierz</button>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="border rounded text-center p-4 rounded">
                    <img alt="bong" src="{{ asset('photos/product.jpg')}}" class="img-fluid">
                    <h3>Nazwa produktu</h3>
                    <div>
                        <div class="text-danger">100 PLN</div>
                        <button class="btn btn-custom">Wybierz</button>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="border rounded text-center p-4 rounded">
                    <img alt="bong" src="{{ asset('photos/product.jpg')}}" class="img-fluid">
                    <h3>Nazwa produktu</h3>
                    <div>
                        <div class="text-danger">100 PLN</div>
                        <button class="btn btn-custom">Wybierz</button>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="border rounded text-center p-4 rounded">
                    <img alt="bong" src="{{ asset('photos/product.jpg')}}" class="img-fluid">
                    <h3>Nazwa produktu</h3>
                    <div>
                        <div class="text-danger">100 PLN</div>
                        <button class="btn btn-custom">Wybierz</button>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="border rounded text-center p-4 rounded">
                    <img alt="bong" src="{{ asset('photos/product.jpg')}}" class="img-fluid">
                    <h3>Nazwa produktu</h3>
                    <div>
                        <div class="text-danger">100 PLN</div>
                        <button class="btn btn-custom">Wybierz</button>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="border rounded text-center p-4 rounded">
                    <img alt="bong" src="{{ asset('photos/product.jpg')}}" class="img-fluid">
                    <h3>Nazwa produktu</h3>
                    <div>
                        <div class="text-danger">100 PLN</div>
                        <button class="btn btn-custom">Wybierz</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--END PRODUCTS GRID-->
@endsection