@extends('layouts.main')
@section('content')

<!--INFO +NAV + HEADER-->
<section class="bg-light">
    <div class="container-fluid bg-custom border-bot-custom mb-4 text-white">
        <div class="d-flex justify-content-end py-2">
            <div class="me-3"><i class="fa-solid fa-joint"></i> Taco Tabacco</div>
            <div class="me-3"><i class="fa-solid fa-phone"></i> +48 123 456 789</div>
            <div class="me-3"><i class="fa-solid fa-envelope"></i> przykład@przykład.pl</div>
            <div class="me-3"><i class="fa-solid fa-house"></i> Wrocławska 1, 12-123 Bytom</div>
        </div>
    </div>
    <!---->
    <header class="py-2 border-bottom">
        <div class="container d-flex flex-wrap justify-content-center">
            <a href="/" class="d-flex align-items-center mb-3 mb-lg-0 me-lg-auto text-dark text-decoration-none">
                <span class="fs-4">LOGO</span>
            </a>
            <form class="col-12 col-lg-auto mb-3 mb-lg-0" role="search">
                <div class="input-group px-2">
                    <input class="form-control rounded-0" type="search" placeholder="Szukaj" id="search-input">
                    <span class="input-group-append align-items-center d-flex">
                        <button class="btn btn-outline-secondary bg-white border-0 ms-n5" type="button" style="--bs-btn-hover-color: #6c757d;">
                            <i class="fa fa-search"></i>
                        </button>
                    </span>
                </div>
            </form>
            <ul class="nav">
                <li><a href="#" class="mx-2 btn btn-custom rounded-0">Logowanie</a></li>
                <li><a href="#" class="mx-2 btn btn-custom-1 text-black rounded-0">Rejestracja</a></li>
            </ul>
        </div>
    </header>
    <!---->
    <nav class="py-2 mb-2">
        <div class="container d-flex flex-wrap">
            <ul class="nav mx-auto">
                <li class="nav-item"><a href="#" class="nav-link link-dark px-2">Start</a></li>
                <li class="nav-item"><a href="#" class="nav-link link-dark px-2">Bonga</a></li>
                <li class="nav-item"><a href="#" class="nav-link link-dark px-2">Bletki</a></li>
                <li class="nav-item"><a href="#" class="nav-link link-dark px-2">Waporyzatory</a></li>
            </ul>
        </div>
    </nav>
</section>
<!--END INFO +NAV + HEADER-->
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
<!--FOOTER-->
<section class="text-white mt-5">
    <div class="bg-custom border-top-custom">
        <div class="container">
            <footer class="row row-cols-1 row-cols-md-3 py-3 text-center">
                <div class="col">
                    <h5 class="fw-bold fs-4 text-uppercase text-custom">Nowości</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-custom-1">Bonga</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-custom-1">Bletki</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-custom-1">Waporyzatory</a>
                        </li>
                    </ul>
                </div>

                <div class="col">
                    <h5 class="fw-bold fs-4 text-uppercase text-custom">Zakupy</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-custom-1">Koszyk</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-custom-1">Twoje
                                zamówienia</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-custom-1">Formy płatności</a>
                        </li>
                    </ul>
                </div>

                <div class="col">
                    <h5 class="fw-bold fs-4 text-uppercase text-custom">Informacje</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-custom-1">O nas</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-custom-1">Zwroty i
                                reklamacje</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-custom-1">Regulamin</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-custom-1">Polityka
                                prywatności</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-custom-1">Kontakt</a></li>
                    </ul>
                </div>
            </footer>
        </div>
    </div>
    <div class="bg-img-1">
        <div class="d-flex justify-content-center align-items-center h-100 border-bot-custom">
            <div class="border border-4 border-white px-4 py-2 fw-bold fs-1" style="background-color: rgba(0, 0, 0, 0.5);">420</div>
        </div>
    </div>
</section>
@endsection