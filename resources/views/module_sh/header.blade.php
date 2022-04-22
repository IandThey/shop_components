<header class="p-3 bg-dark text-white">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                <img src="/img/logo.png" width="80%" alt="">
            </a>

            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li>
                    <a href="{{ route('home') }}" class="nav-link px-2 text-secondary">
                        Главная
                    </a>
                </li>
                <li>
                    <a href="{{ route('katalog') }}" class="nav-link px-2 text-white">
                        Каталог
                    </a>
                </li>
                <li>
                    <a href="{{ route('p_comparison') }}" class="nav-link px-2 text-white">
                        Сравнение товаров
                    </a>
                </li>
                <li>
                    <a href="{{ route('favorites') }}" class="nav-link px-2 text-white">
                        Избранное
                    </a>
                </li>
                <li>
                    <a href="#" id='basket' class="nav-link px-2 text-white">
                        Корзина
                    </a>
                </li>
            </ul>

            <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
                <input type="search" class="form-control form-control-dark" placeholder="Поиск..." aria-label="Search">
            </form>

            <div class="text-end">
                @if(session('login'))
                    @include('module_sh.login_true')
                @else
                    @include('module_sh.login_false')
                @endif
            </div>
        </div>
    </div>
</header>