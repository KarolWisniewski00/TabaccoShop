@if (session()->has('login_id'))
<ul class="nav">
    <li><a href="{{ route('account.info.index')}}" class="mx-2 btn btn-custom-2 rounded-0"><i class="fa-solid fa-user"></i></a></li>
    <li><a href="{{ route('account.busket.index')}}" class="mx-2 btn btn-custom rounded-0"><i class="fa-solid fa-cart-shopping"></i></a></li>
    <li><a href="{{ route('logout')}}" class="mx-2 btn btn-custom-1 text-black rounded-0"><i class="fa-solid fa-right-from-bracket"></i></a></li>
</ul>
@else
<ul class="nav">
    <li><a href="{{ route('login')}}" class="mx-2 btn btn-custom rounded-0">Logowanie</a></li>
    <li><a href="{{ route('register')}}" class="mx-2 btn btn-custom-1 text-black rounded-0">Rejestracja</a></li>
</ul>
@endif