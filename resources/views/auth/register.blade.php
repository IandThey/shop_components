@extends('sh.main_sh')

@section('title')
    Сертекс ДВ || Авторизация
@endsection

@section('content')
<x-guest-layout>
    <x-auth-card>
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
        <div class="modal-dialog" role="document">
            <div class="modal-content rounded-5 shadow">
                <div class="modal-header p-5 pb-4 border-bottom-0">
                    <h2 class="fw-bold mb-0">
                        Войти на сайт Low kik
                    </h2>
                </div>
                <div class="modal-body p-5 pt-0">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-floating mb-3">
                            <x-input id="name" type="text" name="name" :value="old('name')" required autofocus />
                            <x-label for="name" :value="__('Логин')" />
                        </div>
                        <div class="form-floating mb-3">
                            <x-input id="email" type="email" name="email" :value="old('email')" required />
                            <x-label for="email" :value="__('Почта')" />
                        </div>
                        <div class="form-floating mb-3">
                            <x-input id="password" type="password" name="password" required autocomplete="new-password" />
                            <x-label for="password" :value="__('Пороль')" />
                        </div>
                        <div class="form-floating mb-3">
                            <x-input id="password_confirmation" type="password" name="password_confirmation" required />
                            <x-label for="password_confirmation" :value="__('Подтверждение пороля')" />
                        </div>
                        <div class="flex items-center justify-end mt-4">
                            <a class="underline text-sm text-gray-600 hover:text-gray-900 mb-4" href="{{ route('login') }}">
                                {{ __('Уже зарегистрирован?') }}
                            </a>
                            <x-button class="w-100 mt-2 mb-2 btn btn-lg rounded-4 btn-primary">
                                {{ __('Зарегистрироваться') }}
                            </x-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </x-auth-card>
</x-guest-layout>
@endsection