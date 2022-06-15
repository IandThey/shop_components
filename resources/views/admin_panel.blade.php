@extends('SP.main_SP')

@section('title')
    TQYES || Админ панель
@endsection

@section('content')
<div class="container mb-3">
    <div class="bg-dark px-3 px-md-5 mt-4 text-center text-white overflow-hidden spec-class-adminp">
        <div class="my-3 py-3">
            <h2 class="display-5">
                Панель админа
            </h2>
            <hr>
            <div class="row">
                <div class="col">
                    <p>Товары</p><hr>
                    <div class="row">
                        <div class="col">
                            <p>Добавить</p><hr>
                            <form method="post" enctype="multipart/form-data">
                                @csrf
                                <input type="text" name="name_tovar" placeholder="Название">
                                <input type="text" class="mt-1"name="type_tovar" placeholder="Тип">
                                <input type="text" class="mt-1"name="price_tovar" placeholder="Цена">
                                <input type="text" class="mt-1"name="text_tovar" placeholder="Текст">
                                <input type="file" class="mt-1" name="img_tovar">
                                <p>Изображение должно иметь "t" в начале</p>
                                <input type="submit" class="mt-3 btn btn-success">
                            </form>
                        </div>
                        <div class="col">
                            <p>Удалить</p><hr>
                            <form method="post" action="/admin_panel/remove_tovar">
                                @csrf
                                <input type="text" name="id" placeholder="id">
                                <input type="submit" class="mt-1 btn btn-danger">
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <p>Акции</p><hr>
                    <div class="row">
                        <div class="col">
                            <p>Добавить</p><hr>
                            <form method="post" enctype="multipart/form-data">
                                @csrf
                                <input type="text" name="name_tovar" placeholder="Текст">
                                <input type="file" class="mt-1" name="img">
                                <p>Изображение должно иметь "a" в начале</p>
                                <input type="submit" class="mt-3 btn btn-success">
                            </form>
                        </div>
                        <div class="col">
                            <p>Удалить</p><hr>
                            <form method="post">
                                @csrf
                                <input type="text" name="id" placeholder="id">
                                <input type="button" class="mt-1 btn btn-danger">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection