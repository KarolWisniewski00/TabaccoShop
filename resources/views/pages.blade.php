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
            @foreach($categories as $category)
            @if ($url == $category->url)
            <div class="text-center my-4">
                <h1>{{$category->plural}}</h1>
            </div>
            @endif
            @endforeach
        </div>
        <div class="col-12">
            <div class="d-flex justify-content-start align-items-center mb-4">
                <div class="text-custom-2 mx-1">Strona główna</div>
                <div class="mx-1"><i class="fa-solid fa-chevron-right" style="font-size: 0.75em;"></i></div>
                <div class="mx-1">Kategorie</div>
                <div class="mx-1"><i class="fa-solid fa-chevron-right" style="font-size: 0.75em;"></i></div>
                @foreach($categories as $category)
                @if ($url == $category->url)
                <div class="mx-1">{{$category->plural}}</div>
                @endif
                @endforeach
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-2">
            <div class="border text-center p-4 shadow">
                <div>
                    <h2>Cena</h2>
                    <div data-role="rangeslider">
                        <label for="price-min">Price:</label>
                        <input type="range" name="price-min" id="price-min" value="200" min="0" max="1000">
                        <label for="price-max">Price:</label>
                        <input type="range" name="price-max" id="price-max" value="800" min="0" max="1000">
                    </div>
                </div>
                <div>
                    <h2>Kategorie</h2>
                </div>
            </div>
        </div>
        <div class="col-10">
            <div class="row mb-4">
                <div class="col-6">
                    <div class="text-muted">Pokazano {{count($products)}}
                        @if(count($products) == 1)
                        produkt
                        @elseif(count($products) > 1 && count($products) <= 4)
                        produkty
                        @elseif(count($products)> 4 || count($products) == 0)
                        produktów
                        @endif
                    </div>
                </div>
                <div class="col-6">
                    <div class="d-flex justify-content-end align-items-center">
                        <div class="dropdown">
                            <button class="btn btn-custom dropdown-toggle rounded-0" type="button" data-bs-toggle="dropdown" aria-expanded="false">Sortuj</button>
                            <ul class="dropdown-menu rounded-0">
                                <li><button class="dropdown-item">Domyślne sortowanie</button></li>
                                <li><button class="dropdown-item">Sortuj po cenie od najniższej</button></li>
                                <li><button class="dropdown-item">Sortuj po cenie od najwyższej</button></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row products">
                @foreach ($products as $product)
                <div class="col-3 mb-4" data-price="{{$product->normal_price}}">
                    <div class="border text-center p-4 shadow position-relative">
                        <img alt="bong" src="{{ asset('photos/'.$product->photo)}}" class="img-fluid">
                        <h3>{{$product->name}}</h3>
                        <p class="text-muted">{{$product->short_description}}</p>
                        <div class="d-flex flex-row justify-content-center align-items-center mb-4">
                            @if ($product->sale_price != 0)
                            <div class="text-muted" style="text-decoration: line-through;padding-top:1px;">{{$product->sale_price}}</div>
                            @endif
                            <div class="text-custom-2 fs-4"> {{$product->normal_price}}</div>
                        </div>
                        <button class="btn btn-lg btn-custom rounded-0 w-100">Dodaj do koszyka</button>
                        <div class="position-absolute top-0 start-100 p-2" style="transform:translateX(-100%)">
                            @if ($product->new != 0)
                            <div class="bg-custom p-2 text-white mb-2 shadow">Nowość!</div>
                            @endif
                            @if ($product->sale_price != 0)
                            <div class="bg-custom-1 p-2 text-white shadow">-50%</div>
                            @endif
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function () {
        $(".dropdown-menu button").click(function () {
            var sortValue = $(this).text();
            if (sortValue == "Domyślne sortowanie") {
                $(".col-3").sort(function (a, b) {
                    return $(a).index() - $(b).index();
                }).appendTo(".products");
            } else if (sortValue == "Sortuj po cenie od najniższej") {
                $(".col-3").sort(function (a, b) {
                    return $(a).data("price") - $(b).data("price");
                }).appendTo(".products");
            } else if (sortValue == "Sortuj po cenie od najwyższej") {
                $(".col-3").sort(function (a, b) {
                    return $(b).data("price") - $(a).data("price");
                }).appendTo(".products");
            }
        });
    });
</script>
@endsection