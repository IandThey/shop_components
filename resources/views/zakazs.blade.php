@extends('SP.main_SP')

@section('title')
    Сертекс ДВ || Заказы
@endsection

@section('content')
@if(session('alert')) 
  @include('module_SP.alert')
@endif
<div class="cars-container">
  <div class="container-xxl" id="container-cars">
    <div class="row">
        <hr>
            <div class="col-12 d-flex flex-wrap justify-content-center">
                <h1>Заказы</h1>
            </div>
        <hr>
    </div>
    <div class="row w-100">
        <div class="col w-25">
            Заказчик
        </div>
        <div class="col w-50">
            Товар
        </div>
        <div class="col w-50">
            Цена
        </div>
        <div class="col w-50">
            Количество
        </div>
        <div class="col w-50">
            Дата и время
        </div>
        <div class="row row-cols-1 row-cols-lg-4 row-cols-md-3 g-4 my-0 cars" id="cars">
            @foreach ($zakazs as $elem)
                @include('SP.zakaz_SP',[
                    'login' => $elem['login'],
                    'name' => $elem['name'],
                    'price' => $elem['price'],
                    'count' => $elem['count'],
                    'time' => $elem['created_at']
                ])
            @endforeach
        </div>
    </div>
  </div>
</div>
@endsection