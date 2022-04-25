<div class="container-fluid bg-dark">
  <footer class="py-5 bg-dark text-white">
      <ul class="nav justify-content-center border-bottom pb-3 mb-3">
        <li><a href="{{ route('home') }}" class="nav-link px-2 text-white">Главная</a></li>
          <li><a href="{{ route('katalog') }}" class="nav-link px-2 text-white">Каталог</a></li>
          <li><a href="{{ route('p_comparison') }}" class="nav-link px-2 text-white">Сравнение товаров</a></li>
          <li><a href="{{ route('favorites') }}" class="nav-link px-2 text-white">Избранное</a></li>
      </ul>
    <div class="d-flex justify-content-between py-4 my-4">
      <div class="col-2">
        <h5>Дополнительная информация</h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-2 p-0 text-muted">
            Сегодня 09:00 - 17:30 
            <span class="text-danger">
              Закрыт сейчас
            </span>
          </li>
          <li class="nav-item mb-2 p-0 text-muted">
            info@414414.ru
          </li>
        </ul>
      </div>
    </div>
    <p>© 2022 www.414414.ru.</p>
  </footer>
</div>