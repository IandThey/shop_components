@extends('SP.main_SP')

@section('title')
    TQYES || Товар
@endsection

@section('content')
    <div class="mt-5 d-flex justify-content-center">
        @include('SP.tovar_SP',[
        'id' => $obj_tovar[0]['id'],
        'name_tovar' => $obj_tovar[0]['name_tovar'],
        'text_tovar' => $obj_tovar[0]['text_tovar'],
        'price_tovar' => $obj_tovar[0]['price_tovar'],
        'a_img_tovar' => $obj_tovar[0]['a_img_tovar']
        ])
    </div>
@endsection