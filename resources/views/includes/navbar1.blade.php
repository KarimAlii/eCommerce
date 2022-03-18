    <nav class="navbar navbar-expand-lg navbar-light bg-light  ">
        <div class="container">
            <p class="mb-2 mb-lg-0 offer">Free Shipping on All Orders Over 75$</p>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link " aria-current="page" href="/">Home</a>
                </li>

                <li>
        <!-- Authentication Links -->
        @guest
        @if (Route::has('login'))
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
        @endif

        @if (Route::has('register'))
            <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
            </li>
        @endif
    @else
        <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }}
            </a>

            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                                @if (Auth::user()->role_id==1)

                            <a class="dropdown-item" href="{{'/admin'}}">Admin Panal</a>
                    @else
                    @endif
                    <a class="dropdown-item" href="{{'/profile'}}">profile</a>
                <a class="dropdown-item" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>

            </div>
        </li>
    @endguest
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="/cart" >
                    <i class="fa-solid fa-cart-shopping"></i>
                    Cart
                        <span>{{ count((array) session('cart')) }}</span>
                </a>
                </li>
            </ul>
            </div>
        </div>

        </nav>
        <div class="container mb-4 mt-4 d-flex justify-content-center   ">
                        <form class="input-box w-25" type="get" action="{{url('/search')}}">
                            <input type="search" class="rounded-pill form-control" name="query" placeholder="Search Here ">
                            <i class="ps-2 fa fa-search"></i>
                        </form>
                    </div>
        </div>

