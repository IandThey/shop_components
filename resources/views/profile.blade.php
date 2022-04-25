@extends('SP.main_SP')

@section('title')
Сертекс ДВ || Профиль
@endsection

@section('content')
<div class="modal modal-signin position-static d-block py-5" tabindex="-1" role="dialog" id="modalSignin">
    @if(session('alert')) 
  @include('module_SP.alert')
@endif
  <div class="modal-dialog" role="document">
    <div class="modal-content rounded-5 shadow">
        <div class="modal-header p-5 pb-4 border-bottom-0">
            <h2 class="fw-bold mb-0">Профиль</h2>
        </div>
        <div class="modal-body p-5 pt-0">
            <h1>{{ session()->get('login') }}</h1>
        </div>
        <hr>
        <div class="row">
            <div class="col d-flex justify-content-center mb-3">
                <a href="/zakazs">
                    <button class="btn btn-success">Заказы</button>
                </a>
            </div>
            <div class="col d-flex justify-content-center mb-3">
                <a href="/remove"><button class="btn btn-danger">Выйти</button></a>
            </div>
        </div>
    </div>
</div>
<div class="conteiner" role="document">
    <div class="modal-content rounded-5 shadow">
        <div class="modal-header p-5 pb-4 border-bottom-0">
            <h2 class="fw-bold mb-0">Корзина</h2>
        </div>
        <div class="modal-body p-5">
            <div class="row w-100">
                <div class="col w-25">
                    Название
                </div>
                <div class="col w-50">
                    Цена
                </div>
                <div class="col w-50">
                    Количество
                </div>
                <div class="row">
                    <form action="/zakaz" method="GET">
                        @foreach ($tovars as $elem)
                            @foreach ($elem as $elem_dubl)
                                @include('SP.profile_SP',[
                                    'id' => $elem_dubl['id'],
                                    'name_tovar' => $elem_dubl['name_tovar'],
                                    'price_tovar' => $elem_dubl['price_tovar']
                                ])
                            @endforeach
                        @endforeach
                        <hr>
                        <button type="submit" class="btn btn-success">Заказать</button>
                    </form>
                    <a href="/remove/bascet">
                        <button class="btn btn-danger mt-3">Очистить корзину</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
