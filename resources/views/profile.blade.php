@extends('SP.main_SP')

@section('title')
    TQYES || Профиль
@endsection

@section('content')
<div class="modal modal-signin position-static d-block py-5" tabindex="-1" role="dialog" id="modalSignin">
  <div class="modal-dialog" role="document">
    <div class="modal-content rounded-5 shadow">
        <div class="modal-header p-5 pb-4 border-bottom-0">
            <h2 class="fw-bold mb-0">
                Профиль
            </h2>
        </div>
        <div class="modal-body p-5 pt-0">
            <h1>{{ session()->get('login') }}</h1>
        </div>
        <hr>
        <div class="row">
            <div class="col d-flex justify-content-center mb-3">
                <a href="/zakazs">
                    <button class="btn btn-success">
                        Заказы
                    </button>
                </a>
            </div>
            <div class="col d-flex justify-content-center mb-3">
                <a href="/remove">
                    <button class="btn btn-danger">
                        Выйти
                    </button>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
