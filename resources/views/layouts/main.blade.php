<!doctype html>
<html lang="pl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Taco Tabacco</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/e37acf9c2e.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/main.css')}}">
</head>

<body>
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
        <header class="py-2 border-bottom">
            <div class="container d-flex flex-wrap justify-content-center">
                <a href="{{route('index')}}" class="d-flex align-items-center mb-3 mb-lg-0 me-lg-auto text-dark text-decoration-none">
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
                @yield('nav')
            </div>
        </header>
        <!---->
        <nav class="py-2 mb-2">
            <div class="container d-flex flex-wrap">
                <ul class="nav mx-auto">
                    <li class="nav-item"><a href="{{route('index')}}" class="nav-link link-dark px-2">Start</a></li>
                    @foreach($categories as $category)
                    <li class="nav-item"><a href="{{ url('category/'.$category->url)}}" class="nav-link link-dark px-2">{{$category->plural}}</a></li>
                    @endforeach
                </ul>
            </div>
        </nav>
    </section>
    <!--END INFO +NAV + HEADER-->
    <!--ALERT-->
    <div class="container">
        @if(Session::has('success'))
        <div>
            <div class="alert alert-success">{{Session::get('success')}}</div>
        </div>
        @endif

        @if(Session::has('fail'))
        <div>
            <div class="alert alert-danger">{{Session::get('fail')}}</div>
        </div>
        @endif
    </div>
    <!--END ALERT-->
    @yield('content')
    <!--FOOTER-->
    <section class="text-white mt-5">
        <div class="bg-custom border-top-custom">
            <div class="container">
                <footer class="row row-cols-1 row-cols-md-3 py-3 text-center">
                    <div class="col">
                        <h5 class="fw-bold fs-4 text-uppercase text-custom">Nowości</h5>
                        <ul class="nav flex-column">
                            @foreach($categories as $category)
                            <li class="nav-item mb-2"><a href="{{ url('category/'.$category->url)}}" class="nav-link p-0 text-custom-1">{{$category->plural}}</a></li>
                            @endforeach
                        </ul>
                    </div>

                    <div class="col">
                        <h5 class="fw-bold fs-4 text-uppercase text-custom">Zakupy</h5>
                        <ul class="nav flex-column">
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-custom-1">Koszyk</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-custom-1">Twoje zamówienia</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-custom-1">Formy płatności</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col">
                        <h5 class="fw-bold fs-4 text-uppercase text-custom">Informacje</h5>
                        <ul class="nav flex-column">
                            <li class="nav-item mb-2"><a href="{{ url('about') }}" class="nav-link p-0 text-custom-1">O nas</a></li>
                            <li class="nav-item mb-2"><a href="{{ url('return') }}" class="nav-link p-0 text-custom-1">Zwroty i reklamacje</a></li>
                            <li class="nav-item mb-2"><a href="{{ url('rules') }}" class="nav-link p-0 text-custom-1">Regulamin</a></li>
                            <li class="nav-item mb-2"><a href="{{ url('policy') }}" class="nav-link p-0 text-custom-1">Polityka prywatności</a></li>
                            <li class="nav-item mb-2"><a href="{{ url('contact') }}" class="nav-link p-0 text-custom-1">Kontakt</a></li>
                        </ul>
                    </div>
                </footer>
            </div>
        </div>
        <div class="bg-img-footer">
            <div class="d-flex justify-content-center align-items-center h-100 border-bot-custom">
                <div class="border border-4 border-white px-4 py-2 fw-bold fs-1" style="background-color: rgba(0, 0, 0, 0.5);">420</div>
            </div>
        </div>
    </section>
    <!--END FOOTER-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>