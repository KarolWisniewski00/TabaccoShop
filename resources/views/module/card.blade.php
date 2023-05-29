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
        <a href="{{ route('product.show',$product->id)}}" class="btn btn-custom-1 rounded-0 w-25 h-100 text-black d-flex justify-content-center align-items-center"><i class="fa fa-search"></i></a>
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