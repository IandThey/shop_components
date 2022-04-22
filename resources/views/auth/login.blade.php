@extends('sh.main_sh')

@section('title')
    Сертекс ДВ || Авторизация
@endsection

@section('content')
<x-guest-layout>
    <x-auth-card>
        <x-auth-session-status :status="session('status')" />
        <x-auth-validation-errors :errors="$errors" />
        <div class="modal-dialog" role="document">
            <div class="modal-content rounded-5 shadow">
                <div class="modal-header p-5 pb-4 border-bottom-0">
                    <h2 class="fw-bold mb-0">
                        Войти на сайт Low kik
                    </h2>
                </div>
                <div class="modal-body p-5 pt-0">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-floating mb-3">
                            <x-input id="email" type="email" name="email" :value="old('email')" required autofocus />
                            <x-label for="email" :value="__('Почта')" />
                        </div>
                        <div class="form-floating mb-3">
                            <x-input id="password" type="password" name="password" required autocomplete="current-password" />
                            <x-label for="password" :value="__('Пороль')" />
                        </div>
                        <div class="block mt-4">
                            <label for="remember_me" class="inline-flex items-center">
                                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                                <span class="ml-2 text-sm text-gray-600">{{ __('Запомнить меня') }}</span>
                            </label>
                        </div>
                        <div class="flex items-center justify-end mt-4">
                            @if (Route::has('password.request'))
                                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                                    {{ __('Забыли пороль?') }}
                                </a>
                            @endif
                            <x-button class="w-100 mt-2 mb-2 btn btn-lg rounded-4 btn-primary">
                                {{ __('Войти') }}
                            </x-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </x-auth-card>
</x-guest-layout>
@endsection