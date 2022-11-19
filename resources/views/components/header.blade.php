<nav class="navbar navbar-expand-md navbar-light shadow-sm laravelmart-header-container">
    <div class="container">
        <a href="{{ url('/') }}" class="navbar-brand">
            <img src="{{ asset('img/logo.jpg') }}" alt="logo">
        </a>
        <form class="row g-1">
            <div class="col-auto">
                <input class="form-control laravelmart-header-search-input">
            </div>
            <div class="col-auto">
                <button type="submit" class="btn laravelmart-header-search-button">
                    <i class="fas fa-search laravelmart-header-search-icon"></i>
                </button>
            </div>
        </form>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            {{-- Right Side Of Navbar --}}
            <ul class="navbar-nav ms-auto mr-5 mt-2">
                {{-- Authentication Links --}}
                @guest
                    <li class="nav-item mr-5">
                        <a href="{{ route('register') }}" class="nav-link">{{ __('Register') }}</a>
                    </li>
                    <li class="nav-item mr-5">
                        <a href="{{ route('login') }}" class="nav-link">{{ __('Login') }}</a>
                    </li>
                    <hr>
                    <li class="nav-item mr-5">
                        <a href="{{ route('login') }}" class="nav-link"><i class="far fa-heart"></i></a>
                    </li>
                    <li class="nav-item mr-5">
                        <a href="{{ route('login') }}" class="nav-link"><i class="far fa-shopping-cart"></i></a>
                    </li>
                @else
                    <li class="nav-item mr-5">
                        <a href="{{ route('mypage') }}" class="nav-link">
                            <i class="fas fa-user mr-1"></i>
                            <label>マイページ</label>
                        </a>
                    </li>
                    <li class="nav-item mr-5">
                        <a href="{{ route('mypage.favorite') }}" class="nav-link">
                            <i class="far fa-heart"></i>
                        </a>
                    </li>
                @endguest
            </ul>

        </div>
    </div>
</nav>
