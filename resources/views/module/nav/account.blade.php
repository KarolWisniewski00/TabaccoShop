<nav class="py-2 mb-2">
    <div class="container d-flex flex-wrap">
        <ul class="nav mx-auto">
            <div class="d-flex flex-row flex-wrap justify-content-center justify-content-md-end py-2">
                <li class="nav-item"><a href="{{ route('account.info.index')}}" class="nav-link link-dark px-2"><i class="fa-solid fa-info me-2"></i>Konto</a></li>
                <li class="nav-item"><a href="{{ route('account.order.index')}}" class="nav-link link-dark px-2"><i class="fa-solid fa-bag-shopping me-2"></i>Twoje zamówienia</a></li>
                <li class="nav-item"><a href="{{ route('account.busket.index')}}" class="nav-link link-dark px-2"><i class="fa-solid fa-cart-shopping me-2"></i>Koszyk</a></li>
                @if (session()->has('admin'))
                <li class="nav-item"><a href="{{route('admin')}}" class="nav-link link-dark px-2"><i class="fa-solid fa-screwdriver-wrench me-2"></i>Panel admina</a></li>
                @endif
                <li class="nav-item"><a href="{{ route('logout')}}" class="nav-link link-dark px-2"><i class="fa-solid fa-right-from-bracket me-2"></i>Wyloguj się</a></li>
            </div>
        </ul>
    </div>
</nav>