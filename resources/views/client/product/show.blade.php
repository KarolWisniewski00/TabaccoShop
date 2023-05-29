@extends('layout.client')
@section('nav')
@include('module.nav')
@endsection
@section('title')
<h1 class="my-5">{{$product->name}}</h1>
@endsection

@section('content')
<!--PRODUCT-->
<section>
    <div class="container">
        <div class="row">
            <!--LINKS-->
            <div class="col-12 text-wrap">
                <div class="d-flex flex-row justify-content-start align-items-center mb-4 flex-wrap">
                    <a href="{{route('client.index')}}" class="text-custom-2 mx-1 text-decoration-none">Strona główna</a>
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
            <!--END LINKS-->
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
        <!--END PRODUCT-->
        <!--PRODUCTS GRID-->
        <div class="row">
            <div class="col-12">
                <div class="text-center my-4">
                    <h1>Podobne produkty</h1>
                </div>
            </div>
            @foreach ($products as $product)
            <div class="col-12 col-md-6 col-lg-3 mb-4">
                @include('module.card')
            </div>
            @endforeach
        </div>
        <!--END PRODUCTS GRID-->
    </div>
</section>
<!--END PRODUCT-->
@endsection