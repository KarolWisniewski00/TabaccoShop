@extends('layout.client')
@section('nav')
@include('module.nav.main')
@endsection
@foreach($categories as $category)
@if ($url == $category->url)
@section('title')
<h1 class="my-5">{{$category->plural}}</h1>
@endsection
@endif
@endforeach

@section('content')
<!--PAGES-->
<section>
    <div class="container">
        <div class="row">
            <!--LINKS-->
            <section>
                <div class="col-12">
                    <div class="d-flex justify-content-start align-items-center mb-4">
                        <a href="{{route('index')}}" class="text-custom-2 mx-1 text-decoration-none">Strona główna</a>
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
            </section>
            <!--END LINKS-->
        </div>
        <div class="row">
            <!--FILTERS-->
            <div class="col-12 col-lg-3 col-xl-2 mb-4">
                <div class="accordion shadow" id="accordionPanelsStayOpenExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                            <i class="fa-solid fa-money-bill-wave me-2"></i>Cena
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                            <div class="accordion-body d-flex flex-column justify-content-center align-items-center">
                                <div data-role="rangeslider" class="d-flex flex-column justify-content-center align-items-center">
                                    <div>
                                        <label for="price-min">Od:</label>
                                        <input type="range" name="price-min" id="price-min" class="slider my-2" value="0" min="0" max="{{$max}}">
                                    </div>
                                    <div>
                                        <label for="price-max">Do:</label>
                                        <input type="range" name="price-max" id="price-max" class="slider my-2" value="{{$max}}" min="0" max="{{$max}}">
                                    </div>
                                </div>
                                <div>
                                    <span id="price-min-value"></span> PLN -
                                    <span id="price-max-value"></span> PLN
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="true" aria-controls="panelsStayOpen-collapseTwo">
                                Kategorie
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingTwo">
                            <div class="accordion-body">
                                @foreach($categories_count as $category)
                                @if ($url != $category->url)
                                <a href="{{ route('category.show', $category->url)}}" class="list-group-item d-flex justify-content-between align-items-start py-1">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold">{{$category->plural}}</div>
                                    </div>
                                    <span class="badge bg-custom rounded-pill">{{$category->count}}</span>
                                </a>
                                @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item py-4">
                        <div class="d-flex justify-content-center align-items-center">
                            <button class="btn btn-lg btn-custom rounded-0"><i class="fa-solid fa-magnifying-glass me-2"></i>Filtruj</button>
                        </div>
                    </div>
                </div>
            </div>
            <!--END FILTERS-->
            <!--PRODUCTS GRID-->
            <div class="col-12 col-lg-9 col-xl-10">
                <!--SORT-->
                <div class="row mb-4">
                    <div class="col-6">
                        <div class="text-muted">Pokazano {{count($products)}}
                            @if(count($products) == 1)
                            produkt
                            @elseif(count($products) > 1 && count($products) <= 4) produkty @elseif(count($products)> 4 || count($products) == 0)
                                produktów
                                @endif
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="d-flex justify-content-end align-items-center">
                            <div class="dropdown">
                                <button class="btn btn-custom dropdown-toggle rounded-0" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-solid fa-sort me-2"></i>Sortuj</button>
                                <ul class="dropdown-menu rounded-0">
                                    <li><button class="dropdown-item">Domyślne sortowanie</button></li>
                                    <li><button class="dropdown-item">Sortuj po cenie od najniższej</button></li>
                                    <li><button class="dropdown-item">Sortuj po cenie od najwyższej</button></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!--END SORT-->
                <div class="row products">
                    @if(count($products) == 0)
                    <svg xmlns="http://www.w3.org/2000/svg" width="731.66998" height="619.11871" viewBox="0 0 731.66998 619.11871" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <path d="m0,599.59869c0,.65997.53,1.19,1.19,1.19h729.28998c.65997,0,1.19-.53003,1.19-1.19s-.53003-1.19-1.19-1.19H1.19c-.66,0-1.19.53003-1.19,1.19Z" fill="#3f3d56" />
                        <polygon points="405.32999 539.69873 405.32999 579.02874 435.07001 579.9887 433.82999 539.69873 405.32999 539.69873" fill="#ffb6b6" />
                        <path d="m399.45001,561.57873c-.39999,0-.79999.04999-1.17999.15997-5.37,1.53003-36.42999,29.27002-45.82001,37.72998-1.16,1.04999-1.78,2.53998-1.69,4.09998.07999,1.54999.85999,2.96002,2.12,3.87,7.12,5.13,21.72,13.25,39.41998,9.96997,8.14001-1.51001,16.35999-2.46002,23.62-3.28998,15.53-1.78998,27.79001-3.21002,27.79001-8.70001,0-9.33002-2.56-33.90002-5.78-34.92999-.29001-.09003-.63.14001-1.01999.67999-4.92001,6.89001-21.84,3.22998-22.56,3.07001l-.19-.03998-.10999-.15997c-.09-.13-8.37-12.44-14.60001-12.44h0v-.02002h0v.00006Z" fill="#2f2e41" />
                        <polygon points="349.70001 539.69873 349.70001 579.02874 379.42999 579.9887 378.19 539.69873 349.70001 539.69873" fill="#ffb6b6" />
                        <polygon points="337.70999 258.16873 321.88 270.15872 319 405.40872 345.85999 553.12872 380.87 554.56872 381.82999 413.55871 426.92001 285.02871 417.79999 254.80873 337.70999 258.16873" fill="#2f2e41" />
                        <polygon points="411.57001 281.18872 426.92001 285.02871 437.95001 553.12872 398.14001 549.76873 371.76001 360.31872 411.57001 281.18872" fill="#2f2e41" />
                        <path d="m328.47,619.11871c-13.64999,0-24.73001-6.03003-30.64999-10.09998-1.79001-1.22998-2.89999-3.17999-3.04001-5.34998-.14001-2.19.70999-4.28998,2.34-5.76001,14.70001-13.21997,40.12-35.62,45.25-37.09003,6.64999-1.90997,15.57999,10.81,16.73001,12.5,1.85999.38,17.09,3.28998,21.38-2.72998.82001-1.15002,1.59-1.20001,2.09-1.03998,4.59,1.46997,6.45001,31.03003,6.45001,35.84998,0,6.34998-12.01001,7.73999-28.64001,9.65997-7.23999.84003-15.44,1.78003-23.54999,3.28003-2.88.53003-5.67001.77002-8.37.77002h0l.00998.00995Z" fill="#2f2e41" />
                        <path id="uuid-bcebe549-af57-499c-bd7d-dc350147856d-356" d="m216.28999,83.17871c-5.08-11.22-3.17-22.98,4.27-26.25s17.59,3.18,22.67,14.41c2.09,4.46,3.05,9.36,2.78,14.29l20.90001,47.84-23.58,9.46001-18.10001-48.16c-3.89999-3.1-6.97-7.07-8.94-11.58h0s0-.01001,0-.01Z" fill="#ffb6b6" />
                        <path d="m360.76001,103.48873h0c12.73999,12.02,11.95001,32.52-1.69,43.51l-66.79999,53.82001c-7.29001,5.87-18.10999,3.8-22.70999-4.36-17.55-28.42-20.86-29.98-31.07001-59.09999l28.76999-10.06,16.22,20.31,35.42001-41.78c10.70001-12.63,29.81-13.69,41.85001-2.34h0l.00998-.00002Z" fill="#618e09" />
                        <polygon points="370.60001 82.98873 381.51999 104.99873 340.23001 124.93872 340.73001 89.64872 370.60001 82.98873" fill="#ffb6b6" />
                        <circle cx="340.37" cy="62.47873" r="37.16" fill="#ffb6b6" />
                        <path d="m340.12,116.35871l38.10001-22.51h0c27.94,19.6,51.20999,24.18,51.95001,58.3l-5.14999,81.39.29999,35.05c.13,14.72-11.76999,26.70999-26.48001,26.70999h-54.39999c-14.39999,0-25.12-13.28-22.09-27.35999l10.26999-47.69-10.97-92.94,18.47-10.97h0v.02h0v.00002-.00002Z" fill="#618e09" />
                        <path d="m127.69,69.65873c0-1.95,1.58-3.52,3.52-3.52h39.71001c1.95,0,3.52,1.58,3.52,3.52v.48l97.93001,5.73c.28-1.11,1.28-1.94,2.48999-1.94h10.41v-7.61c0-1.7,1.38-3.07,3.07001-3.07h2.12v-6.72c0-1.07.87-1.94,1.94-1.94h5.92999c1.07001,0,1.94.87,1.94,1.94v6.72h1.95001c-.14001-.27-.22-.56-.22-.87,0-1.43,1.67999-2.6,3.75-2.6s3.75,1.16,3.75,2.6c0,.37-.12.73-.32001,1.05,1.19.42,2.06,1.55,2.06,2.89v39.46c0,1.7-1.38,3.07-3.07001,3.07h-19.82999c-1.70001,0-3.07001-1.38-3.07001-3.07v-5.3h-10.41c-1.34,0-2.42999-1.03-2.54999-2.34l-98.03,18.05c-.45,1.43-1.78,2.47-3.36,2.47h-39.71001c-1.95,0-3.52-1.58-3.52-3.52-.47-16.1.57-31.39,0-45.48,0,0-.00002,0-.00002,0Z" fill="#3f3d56" />
                        <path id="uuid-56498841-4b1e-4105-a308-6339b9438744-357" d="m281.03,94.43872c-4.95001-11.28-2.89999-23.01,4.57999-26.2,7.48001-3.18,17.54999,3.38,22.5,14.67,2.04001,4.48,2.94,9.39,2.60999,14.32l20.34,48.07999-23.69,9.19-17.54001-48.37c-3.87-3.14-6.89001-7.15-8.79999-11.69h.00003Z" fill="#ffb6b6" />
                        <path d="m425.25,116.43872h0c12.60001,12.17001,11.56,32.66-2.20001,43.49001l-67.41998,53.03c-7.35999,5.78999-18.14999,3.59-22.66-4.62-17.22-28.62-18.61002-24.73-28.48001-53.97l26.54999-16.74001,16.42001,22.03,35.89999-41.36c10.85001-12.5,29.97-13.34,41.88-1.85h.01001s0-.01001,0-.01Z" fill="#618e09" />
                        <path d="m378.57999,81.16873l-6.87,4.92s-2.01999-21.45-4.81-22.4-6.54999,3.99-6.54999,3.99l-2.75,8.05-9.09-3.79s-10.51999-5.67-14.23999-6.94-3.16-12.05-3.16-12.05c0,0-44.63998,6.11-37.94-19.62,0,0,2.31-18.93,7.25-15.17s5.01001-5.56,5.01001-5.56l11.20001-2.41s15.37-20.7,45.69-3.09c30.32001,17.61,16.25,74.05,16.25,74.05h0v.02s.00995,0,.00995,0Z" fill="#2f2e41" />
                    </svg>
                    @endif
                    @foreach ($products as $product)
                    @if ($product->sale_price != 0)
                    <div class="col-12 col-md-6 col-lg-4 mb-4 single" data-price="{{$product->sale_price}}" data-id="{{$product->id}}">
                        @else
                        <div class="col-12 col-md-6 col-lg-4 mb-4 single" data-price="{{$product->normal_price}}" data-id="{{$product->id}}">
                            @endif
                            @include('module.card')
                        </div>
                        @endforeach
                    </div>
                </div>
                <!--END PRODUCTS GRID-->
            </div>
        </div>
    </div>
</section>
<!--END PAGES-->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    //SORT
    $(document).ready(function() {
        $(".dropdown-menu button").click(function() {
            var sortValue = $(this).text();
            if (sortValue == "Domyślne sortowanie") {
                $(".single").sort(function(a, b) {
                    return $(a).data('id') - $(b).data('id');
                }).appendTo(".products");
            } else if (sortValue == "Sortuj po cenie od najniższej") {
                $(".single").sort(function(a, b) {
                    return $(a).data("price") - $(b).data("price");
                }).appendTo(".products");
            } else if (sortValue == "Sortuj po cenie od najwyższej") {
                $(".single").sort(function(a, b) {
                    return $(b).data("price") - $(a).data("price");
                }).appendTo(".products");
            }
        });
    });

    //FILTER
    const priceMin = document.getElementById('price-min');
    const priceMax = document.getElementById('price-max');
    const priceMinValue = document.getElementById('price-min-value');
    const priceMaxValue = document.getElementById('price-max-value');

    priceMin.addEventListener('input', function() {
        priceMinValue.textContent = priceMin.value;
    });

    priceMax.addEventListener('input', function() {
        priceMaxValue.textContent = priceMax.value;
    });
    document.addEventListener('DOMContentLoaded', function() {
        priceMaxValue.textContent = priceMax.value;
        priceMinValue.textContent = priceMin.value;

    });

    function replaceWithErrorSVG(image) {
        var svg = `<svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" class="w-100 h-auto" viewBox="0 0 764.17285 572.568" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M949.08643,695.284H373.91357a33.03734,33.03734,0,0,1-33-33v-307a33.03734,33.03734,0,0,1,33-33H949.08643a33.03734,33.03734,0,0,1,33,33v307A33.03734,33.03734,0,0,1,949.08643,695.284Z" transform="translate(-217.91357 -163.716)" fill="#fff"/><path d="M949.08643,695.284H373.91357a33.03734,33.03734,0,0,1-33-33v-307a33.03734,33.03734,0,0,1,33-33H949.08643a33.03734,33.03734,0,0,1,33,33v307A33.03734,33.03734,0,0,1,949.08643,695.284Zm-575.17286-371a31.03521,31.03521,0,0,0-31,31v307a31.03521,31.03521,0,0,0,31,31H949.08643a31.03521,31.03521,0,0,0,31-31v-307a31.03521,31.03521,0,0,0-31-31Z" transform="translate(-217.91357 -163.716)" fill="#f2f2f2"/><path d="M949.08643,671.284H373.91357a9.01032,9.01032,0,0,1-9-9v-307a9.01032,9.01032,0,0,1,9-9H949.08643a9.01032,9.01032,0,0,1,9,9v307A9.01032,9.01032,0,0,1,949.08643,671.284Zm-575.17286-323a7.00787,7.00787,0,0,0-7,7v307a7.00787,7.00787,0,0,0,7,7H949.08643a7.00787,7.00787,0,0,0,7-7v-307a7.00787,7.00787,0,0,0-7-7Z" transform="translate(-217.91357 -163.716)" fill="#f2f2f2"/><path d="M802.69825,672.74654,246.72732,525.369a33.03733,33.03733,0,0,1-23.44266-40.354L301.9478,188.26413a33.03732,33.03732,0,0,1,40.354-23.44266L898.27268,312.199a33.03733,33.03733,0,0,1,23.44266,40.354L843.0522,649.30387A33.03734,33.03734,0,0,1,802.69825,672.74654Z" transform="translate(-217.91357 -163.716)" fill="#f2f2f2"/><path d="M802.69825,672.74654,246.72732,525.369a33.03733,33.03733,0,0,1-23.44266-40.354L301.9478,188.26413a33.03732,33.03732,0,0,1,40.354-23.44266L898.27268,312.199a33.03733,33.03733,0,0,1,23.44266,40.354L843.0522,649.30387A33.03734,33.03734,0,0,1,802.69825,672.74654ZM341.78929,166.7547A31.0352,31.0352,0,0,0,303.881,188.77659L225.21789,485.52751a31.0352,31.0352,0,0,0,22.02189,37.90826L803.21071,670.8133A31.0352,31.0352,0,0,0,841.119,648.79141l78.66314-296.75092a31.0352,31.0352,0,0,0-22.02189-37.90826Z" transform="translate(-217.91357 -163.716)" fill="#e6e6e6"/><path d="M808.84781,649.54777,252.87688,502.17024a9.01031,9.01031,0,0,1-6.39345-11.00563l78.66314-296.75092a9.01031,9.01031,0,0,1,11.00562-6.39346L892.12312,335.39777a9.0103,9.0103,0,0,1,6.39345,11.00562L819.85343,643.15431A9.01031,9.01031,0,0,1,808.84781,649.54777ZM335.63973,189.95347a7.00786,7.00786,0,0,0-8.55993,4.97268L248.41666,491.67707a7.00786,7.00786,0,0,0,4.97268,8.55993L809.36027,647.61454a7.00787,7.00787,0,0,0,8.55993-4.97269l78.66314-296.75092a7.00786,7.00786,0,0,0-4.97268-8.55993Z" transform="translate(-217.91357 -163.716)" fill="#fff"/><path d="M826.08643,736.284H250.91357a33.03734,33.03734,0,0,1-33-33v-307a33.03734,33.03734,0,0,1,33-33H826.08643a33.03734,33.03734,0,0,1,33,33v307A33.03734,33.03734,0,0,1,826.08643,736.284Z" transform="translate(-217.91357 -163.716)" fill="#fff"/><path d="M669.818,710.284h-371.43c-.46507.002-.92966-.01-1.38793-.03577l175.66931-98.93366c3.345-1.92234,10.84959-2.599,16.762-1.51148a15.18339,15.18339,0,0,1,4.64878,1.51148l117.89608,66.39218,5.64814,3.17689Z" transform="translate(-217.91357 -163.716)" fill="#e6e6e6"/><path d="M787,710.284H465.74351l62.2532-29.40041,4.48-2.11794,81.1215-38.31431c5.31828-2.51112,18.11244-2.66746,24.3653-.47362q.63.22445,1.16817.47362Z" transform="translate(-217.91357 -163.716)" fill="#e6e6e6"/><path d="M250.91357,365.284a31.03521,31.03521,0,0,0-31,31v307a31.03521,31.03521,0,0,0,31,31H826.08643a31.03521,31.03521,0,0,0,31-31v-307a31.03521,31.03521,0,0,0-31-31Z" transform="translate(-217.91357 -163.716)" fill="#3f3d56"/><path d="M826.08643,712.284H250.91357a9.01032,9.01032,0,0,1-9-9v-307a9.01032,9.01032,0,0,1,9-9H826.08643a9.01032,9.01032,0,0,1,9,9v307A9.01032,9.01032,0,0,1,826.08643,712.284Zm-575.17286-323a7.00787,7.00787,0,0,0-7,7v307a7.00787,7.00787,0,0,0,7,7H826.08643a7.00787,7.00787,0,0,0,7-7v-307a7.00787,7.00787,0,0,0-7-7Z" transform="translate(-217.91357 -163.716)" fill="#ccc"/><circle cx="480.01677" cy="217.85864" r="61.9031" fill="#ff6584"/><ellipse cx="505.89607" cy="345.09898" rx="78.40314" ry="98.13725" fill="#f2f2f2"/><polygon points="506.112 325.365 506.327 325.365 510.204 547.65 502.019 547.65 506.112 325.365" fill="#ccc"/><path d="M737.39778,636.24085v0a1.93854,1.93854,0,0,1-.81224,2.61841l-11.245,5.92024-1.80617-3.43065,11.245-5.92025A1.93854,1.93854,0,0,1,737.39778,636.24085Z" transform="translate(-217.91357 -163.716)" fill="#ccc"/><ellipse cx="280.48957" cy="345.09898" rx="78.40314" ry="98.13725" fill="#f2f2f2"/><path d="M511.99148,639.916v-.00008a1.939,1.939,0,0,0-2.61875-.81222l-7.85028,4.133-2.68873-154.15586h-.21534l-4.092,222.28567H502.711l-1.11258-63.788,9.58076-5.04407A1.93935,1.93935,0,0,0,511.99148,639.916Z" transform="translate(-217.91357 -163.716)" fill="#ccc"/><path d="M610.83353,282.6528c54.86685,0,99.46253,103.38233,99.46253,172.05918s-44.47834,124.35043-99.3452,124.35043S511.60567,523.38883,511.60567,454.712,555.96669,282.6528,610.83353,282.6528Z" transform="translate(-217.91357 -163.716)" fill="#618e09"/><path d="M628.16826,619.831a2.45587,2.45587,0,0,0-3.31741-1.02913l-9.94743,5.2369-3.40653-195.332h-.27276L606.03866,710.3665h10.37093l-1.40987-80.82639,12.1397-6.39128A2.45593,2.45593,0,0,0,628.16826,619.831Z" transform="translate(-217.91357 -163.716)" fill="#3f3d56"/><path d="M828.08643,734.284H252.91357a33.03734,33.03734,0,0,1-33-33v-307a33.03734,33.03734,0,0,1,33-33H828.08643a33.03734,33.03734,0,0,1,33,33v307A33.03734,33.03734,0,0,1,828.08643,734.284Z" transform="translate(-217.91357 -163.716)" fill="#fff"/><path d="M671.818,708.284h-371.43c-.46507.002-.92966-.01-1.38793-.03577l175.66931-98.93366c3.345-1.92234,10.84959-2.599,16.762-1.51148a15.18339,15.18339,0,0,1,4.64878,1.51148l117.89608,66.39218,5.64814,3.17689Z" transform="translate(-217.91357 -163.716)" fill="#e6e6e6"/><path d="M789,708.284H467.74351l62.2532-29.40041,4.48-2.11794,81.1215-38.31431c5.31828-2.51112,18.11244-2.66746,24.3653-.47362q.63.22445,1.16817.47362Z" transform="translate(-217.91357 -163.716)" fill="#e6e6e6"/><path d="M828.08643,734.284H252.91357a33.03734,33.03734,0,0,1-33-33v-307a33.03734,33.03734,0,0,1,33-33H828.08643a33.03734,33.03734,0,0,1,33,33v307A33.03734,33.03734,0,0,1,828.08643,734.284Zm-575.17286-371a31.03521,31.03521,0,0,0-31,31v307a31.03521,31.03521,0,0,0,31,31H828.08643a31.03521,31.03521,0,0,0,31-31v-307a31.03521,31.03521,0,0,0-31-31Z" transform="translate(-217.91357 -163.716)" fill="#3f3d56"/><path d="M828.08643,710.284H252.91357a9.01032,9.01032,0,0,1-9-9v-307a9.01032,9.01032,0,0,1,9-9H828.08643a9.01032,9.01032,0,0,1,9,9v307A9.01032,9.01032,0,0,1,828.08643,710.284Zm-575.17286-323a7.00787,7.00787,0,0,0-7,7v307a7.00787,7.00787,0,0,0,7,7H828.08643a7.00787,7.00787,0,0,0,7-7v-307a7.00787,7.00787,0,0,0-7-7Z" transform="translate(-217.91357 -163.716)" fill="#ccc"/><circle cx="482.01677" cy="215.85864" r="61.9031" fill="#ff6584"/><ellipse cx="507.89607" cy="343.09898" rx="78.40314" ry="98.13725" fill="#f2f2f2"/><polygon points="508.112 323.365 508.327 323.365 512.204 545.65 504.019 545.65 508.112 323.365" fill="#ccc"/><path d="M739.39778,634.24085v0a1.93854,1.93854,0,0,1-.81224,2.61841l-11.245,5.92024-1.80617-3.43065,11.245-5.92025A1.93854,1.93854,0,0,1,739.39778,634.24085Z" transform="translate(-217.91357 -163.716)" fill="#ccc"/><ellipse cx="282.48957" cy="343.09898" rx="78.40314" ry="98.13725" fill="#f2f2f2"/><path d="M513.99148,637.916v-.00008a1.939,1.939,0,0,0-2.61875-.81222l-7.85028,4.133-2.68873-154.15586h-.21534l-4.092,222.28567H504.711l-1.11258-63.788,9.58076-5.04407A1.93935,1.93935,0,0,0,513.99148,637.916Z" transform="translate(-217.91357 -163.716)" fill="#ccc"/><path d="M612.83353,280.6528c54.86685,0,99.46253,103.38233,99.46253,172.05918s-44.47834,124.35043-99.3452,124.35043S513.60567,521.38883,513.60567,452.712,557.96669,280.6528,612.83353,280.6528Z" transform="translate(-217.91357 -163.716)" fill="#618e09"/><path d="M630.16826,617.831a2.45587,2.45587,0,0,0-3.31741-1.02913l-9.94743,5.2369-3.40653-195.332h-.27276L608.03866,708.3665h10.37093l-1.40987-80.82639,12.1397-6.39128A2.45593,2.45593,0,0,0,630.16826,617.831Z" transform="translate(-217.91357 -163.716)" fill="#3f3d56"/></svg>`;
        var parentLink = $(image).parent();
        parentLink.empty();
        parentLink.append(svg);
    }
</script>
@endsection