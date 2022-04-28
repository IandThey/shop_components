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
          <div class="mt-3">
              <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li><a href="{{ route('home') }}" class="btn btn-light nav-link px-2 text-dark fw-bold headH">Главная</a></li>
                <li><a href="{{ route('katalog') }}" class="btn btn-light nav-link px-2 rounded-0 text-dark fw-bold headH">Каталог</a></li>
                <li><a href="{{ route('p_comparison') }}" class="btn btn-info nav-link rounded-0 px-2 text-dark fw-bold headH">Сравнение товаров</a></li>
                <li><a href="{{ route('favorites') }}" class="btn btn-danger rounded-0 nav-link px-2 fw-bold text-dark headH">Избранное</a></li>
                <li><a href="#" id='basket' class="btn-warning nav-link px-2 rounded-my1 text-dark fw-bold headH">Корзина</a></li>
              </ul>
          </div>
        </div>
      </div>
    </div>
</header>