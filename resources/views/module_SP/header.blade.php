<header class="p-3 bg-dark text-white">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <div class="w-100 d-flex justify-content-center">
            <a href="{{ route('home') }}" class="d-flex justify-content-center">
              <img src="/img/logo.png" width="80%" alt="">
            </a>
        </div>
        <div class="row mt-3 w-100">
          <div class="col">
            <form class="col-12 col-lg-auto mb-lg-0 me-lg-3 ml-3">
              <input type="search" class="form-control form-control-dark" placeholder="Поиск..." aria-label="Search">
            </form>
          </div>
          <div class="col">
            <div class="text-end">
              @if(session('login'))
                @include('module_SP.login_true')
              @else
                @include('module_SP.login_false')
              @endif
            </div>
          </div>
          <div class="mt-4">
              <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li><a href="{{ route('home') }}" class="btn-danger nav-link fw-bold text-dark">Главная</a></li>
                <li><a href="{{ route('katalog') }}" class="btn-danger nav-link fw-bold text-dark">Каталог</a></li>
                <li><a href="{{ route('p_comparison') }}" class="btn-danger nav-link fw-bold text-dark">Сравнение товаров</a></li>
                <li><a href="{{ route('favorites') }}" class="btn-danger nav-link fw-bold text-dark">Избранное</a></li>
                <li><a href="#" id='basket' class="btn-warning nav-link text-dark fw-bold">Корзина</a></li>
              </ul>
          </div>
        </div>
      </div>
    </div>
</header>