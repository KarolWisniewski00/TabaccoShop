@extends('layouts.main')
@section('nav')
@if (session()->has('login_id'))
<ul class="nav">
    <li><a href="{{ url('account')}}" class="mx-2 btn btn-custom-2 rounded-0"><i class="fa-solid fa-user"></i></a></li>
    <li><a href="{{ url('busket')}}" class="mx-2 btn btn-custom rounded-0"><i class="fa-solid fa-cart-shopping"></i></a></li>
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
            <div class="text-center my-4">
                <h1>{{$product->name}}</h1>
            </div>
        </div>
        <div class="col-12 text-wrap">
            <div class="d-flex flex-row justify-content-start align-items-center mb-4 flex-wrap">
                <a href="{{route('index')}}" class="text-custom-2 mx-1 text-decoration-none">Strona główna</a>
                <div class="mx-1"><i class="fa-solid fa-chevron-right" style="font-size: 0.75em;"></i></div>
                <div class="mx-1">Kategorie</div>
                <div class="mx-1"><i class="fa-solid fa-chevron-right" style="font-size: 0.75em;"></i></div>
                @foreach($categories as $category)
                @if ($category_id == $category->id)
                <a href="{{ url('category/'.$category->url)}}" class="text-custom-2 mx-1 text-decoration-none">{{$category->plural}}</a>
                @endif
                @endforeach
                <div class="mx-1"><i class="fa-solid fa-chevron-right" style="font-size: 0.75em;"></i></div>
                <div class="mx-1">Produkt</div>
                <div class="mx-1"><i class="fa-solid fa-chevron-right" style="font-size: 0.75em;"></i></div>
                <div class="mx-1">{{$product->name}}</div>
            </div>
        </div>
        <div class="col-12 col-md-6 position-relative">
            <img alt="bong" src="{{ asset('photos/'.$product->photo)}}" class="img-fluid">
            <div class="position-absolute top-0 start-100 p-2" style="transform:translateX(-100%)">
                @if ($product->new != 0)
                <div class="bg-custom p-2 text-white mb-2 shadow">Nowość!</div>
                @endif
            </div>
        </div>
        <div class="col-12 col-md-6">
            <div class="d-flex flex-column justify-content-start align-items-start">
                <h3>{{$product->name}}</h3>
                <p class="text-muted">{{$product->long_description}}</p>
                <div class="d-flex flex-column justify-content-start align-items-start my-4">
                    @if ($product->sale_price != 0)
                    <div class="d-flex justify-content-center align-items-center">
                        <div class="text-muted" style="text-decoration: line-through;padding-top:1px;">{{$product->normal_price}} PLN</div>
                        <div class="bg-custom-1 p-2 text-white shadow ms-2">-{{100-(($product->sale_price*100)/$product->normal_price)}}%</div>
                    </div>
                    <div class="text-custom-2 fs-2">{{$product->sale_price}} PLN</div>
                    @else
                    <div class="text-custom-2 fs-1">{{$product->normal_price}} PLN</div>
                    @endif
                </div>
                <button class="btn btn-lg btn-custom rounded-0 w-50">Dodaj do koszyka</button>
                <p class="text-muted">SKU:123456</p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="text-center my-4">
                <h1>Podobne produkty</h1>
            </div>
        </div>
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
@endsection