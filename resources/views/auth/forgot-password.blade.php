@extends('sh.main_sh')

@section('title')
Сертекс ДВ || Авторизация
@endsection

@section('content')
<x-guest-layout>
<x-auth-card>
<div class="modal-dialog" role="document">
<div class="modal-content rounded-5 shadow">
<div class="modal-header p-5 pb-4 border-bottom-0">
<h2 class="fw-bold mb-0">
    Восстановление пароля
</h2>
</div>
<div class="modal-body p-5 pt-0">
<div class="mb-4 text-sm text-gray-600">
{{ __('') }}
</div>

<!-- Session Status -->
<x-auth-session-status class="mb-4" :status="session('status')" />

<!-- Validation Errors -->
<x-auth-validation-errors class="mb-4" :errors="$errors" />

<form method="POST" action="{{ route('password.email') }}">
@csrf

<!-- Email Address -->
<div>
<x-label for="email" :value="__('Email')" />

<x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
</div>

<div class="flex items-center justify-end mt-4">
<x-button>
{{ __('Отправить') }}
</x-button>
</div>
</form>
</div>
</div>
</div>
</x-auth-card>
</x-guest-layout>
@endsection