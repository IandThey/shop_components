@extends('SP.main_SP')

@section('title')
  TQYES || Интернет-магазин по продаже комплектующих
@endsection

@section('content')
@include('module_SP.basket')
<div class="container-fluid p-0">
  <div class="row p-0 m-0">
    <div class="container-fluid bg-dark p-0 m-0">
      <div class="bg-dark text-center text-white overflow-hidden">
        <div class="my-3 py-3">
          <h2 class="display-5">
            Заголовок
          </h2>
          <p class="lead">
            Текст.
          </p>
        </div>
      </div>
    </div>
  </div>
  <div class="row p-0 m-0 bg-dark">
    <div class="my-3 py-3 text-white text-center border-bottom pb-3 mb-3">
      <h4 class="display-5">
        Партнеры
      </h4>
    </div>
    <div class="col m-0 p-0 border border-dark d-flex align-items-center ms-5">
      <a href="#">
        <img src="storage/img/p1.png" alt="Изображение партнера" class="h-75 w-100">
      </a>
    </div>
    <div class="col m-0 p-0 border border-dark d-flex align-items-center">
      <a href="#">
        <img src="storage/img/p2.png" alt="Изображение партнера" class="h-75 w-100">
      </a>
    </div>
    <div class="col m-0 p-0 border border-dark d-flex align-items-center">
      <a href="#">
        <img src="storage/img/p3.png" alt="Изображение партнера" class="h-75 w-100">
      </a>
    </div>
    <div class="col m-0 p-0 border border-dark d-flex align-items-center">
      <a href="#">
        <img src="storage/img/p4.png" alt="Изображение партнера" class="h-75 w-100">
      </a>
    </div>
    <div class="col m-0 p-0 border border-dark d-flex align-items-center">
      <a href="#">
        <img src="storage/img/p5.png" alt="Изображение партнера" class="h-75 w-100">
      </a>
    </div>
    <div class="col m-0 p-0 border border-dark d-flex align-items-center me-5">
      <a href="#">
        <img src="storage/img/p6.png" alt="Изображение партнера" class="h-75 w-100">
      </a>
    </div>
    <div class="text-white text-center border-bottom pb-3 mb-3">
    </div>
  </div>
  <div class="row p-0 w-100 m-0">
    <div class="col text-center bg-dark text-white p-0 m-0 text-center">
      <h1 class="font-italic m-0 pb-1 pt-1 bg-secondary">
        Акции
      </h1>
      <hr class="m-0">
    </div>
    <div class="row w-100 p-0 m-0 border border-secondary">
      <div class="col text-center bg-white text-dark p-0 pb-2 m-0 border border-secondary">
        <p class="lead my-3">
          Текст для акции
        </p>
        <p class="lead mb-0">
          <a href="#" class="text-primary font-weight-bold">
            Перейти
          </a>
        </p>
      </div>
      <div class="col text-center bg-white text-dark p-0 pb-2 m-0 border border-secondary">
        <p class="lead my-3">
          Текст для акции
        </p>
        <p class="lead mb-0">
          <a href="#" class="text-primary font-weight-bold">
            Перейти
          </a>
        </p>
      </div>
      <div class="col text-center bg-white text-dark p-0 pb-2 m-0 border border-secondary">
        <p class="lead my-3">
          Текст для акции
        </p>
        <p class="lead mb-0">
          <a href="#" class="text-primary font-weight-bold">
            Перейти
          </a>
        </p>
      </div>
      <div class="row w-100 p-0 m-0 border border-secondary">
        <div class="col text-center bg-white text-dark p-0 pb-2 m-0 border border-secondary">
          <p class="lead my-3">
            Текст для акции
          </p>
          <p class="lead mb-0">
            <a href="#" class="text-primary font-weight-bold">
              Перейти
            </a>
          </p>
        </div>
        <div class="col text-center bg-white text-dark p-0 pb-2 m-0 border border-secondary">
          <p class="lead my-3">
            Текст для акции
          </p>
          <p class="lead mb-0">
            <a href="#" class="text-primary font-weight-bold">
              Перейти
            </a>
          </p>
        </div>
        <div class="col text-center bg-white text-dark p-0 pb-2 m-0 border border-secondary">
          <p class="lead my-3">
            Текст для акции
          </p>
          <p class="lead mb-0">
            <a href="#" class="text-primary font-weight-bold">
              Перейти
            </a>
          </p>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

