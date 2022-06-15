@extends('SP.main_SP')

@section('title')
    TQYES || Заказы
@endsection

@section('content')
<div class="cars-container">
  <div class="container-xxl" id="container-cars">
    <br>
    <div class="col-12 d-flex flex-wrap justify-content-center">
        <h1>Заказы</h1>
    </div>
    <hr>
    <div class="row w-100 m-0 p-0">
        <div class="col d-flex justify-content-center p-0">
            <p>Товар</p>
        </div>
        <div class="col d-flex justify-content-center p-0">
            <p>Цена</p>
        </div>
        <div class="col d-flex justify-content-center p-0">
            <p>Количество</p>
        </div>
        <div class="col d-flex justify-content-center p-0">
            <p>Дата и время</p>
        </div>
        <div class="col d-flex justify-content-center p-0">
            <p>Статус заказа</p>
        </div>
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
<br>
@endsection