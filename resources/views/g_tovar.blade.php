@extends('SP.main_SP')

@section('title')
    Сертекс ДВ || Товар
@endsection

@section('content')
    @if(session('alert')) 
    @include('module_SP.alert')
    @endif
    <div class="mt-5 d-flex justify-content-center">
        @include('SP.tovar_SP',[
        'id' => $obj_tovar[0]['id'],
        'name_tovar' => $obj_tovar[0]['name_tovar'],
        'text_tovar' => $obj_tovar[0]['text_tovar'],
        'price_tovar' => $obj_tovar[0]['price_tovar']
        ])
    </div>
@endsection