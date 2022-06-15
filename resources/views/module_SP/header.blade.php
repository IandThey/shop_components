<header class="p-3 bg-dark text-white">
  <div class="container">
    <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
      <div class="row mt-3 w-100">
        <div class="col d-flex justify-content-between login-point">
          <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-bullseye" viewBox="0 0 16 16">
            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
            <path d="M8 13A5 5 0 1 1 8 3a5 5 0 0 1 0 10zm0 1A6 6 0 1 0 8 2a6 6 0 0 0 0 12z"/>
            <path d="M8 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm0 1a4 4 0 1 0 0-8 4 4 0 0 0 0 8z"/>
            <path d="M9.5 8a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
          </svg>
          <div class="text-end">
            @if(session('login'))
              @include('module_SP.login_true')
            @else
              @include('module_SP.login_false')
            @endif
          </div>
        </div>
        <ul class="nav justify-content-center border-bottom p-0 mb-3">
          <li>
            <a href="{{ route('home') }}" class="nav-link px-2 text-white">
              Главная
            </a>
          </li>
          <li>
            <a href="{{ route('katalog') }}" class="nav-link px-2 text-white">
              Каталог
            </a>
          </li>
          <li>
            <a id='basket' class="nav-link px-2 text-white">
              Корзина
            </a>
          </li>
          <li>
            <a href="#" class="nav-link px-2 text-white">
              Избранное
            </a>
          </li>
        </ul>
        <div class="row w-100 m-0 p-0 border-bottom pb-3 mb-3">
          <form class="col-12 col-lg-auto mb-lg-0 me-lg-3 ml-3 w-100">
            <input type="search" class="search-form form-control form-control-dark" placeholder="Поиск..." name="search" aria-label="Search">
            <div class="list-search list-group d-none">
              @if (session('search_status'))
              <a href="#" class="list-group-item list-group-item-action active">Active item</a>
              <a href="#" class="list-group-item list-group-item-action">Item</a>
              @endif
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</header>