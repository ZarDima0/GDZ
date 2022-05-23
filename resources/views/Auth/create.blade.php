@extends('home')
@section('content')
<div class='block-create'>
    <div class='form-create'>
        <form method="POST" action="{{ route('register') }}">
            <h2 class='title-create'>Зарегистрироваться</h2>
            @csrf

            <!-- Name -->
            <div>
                <x-input placeholder='Имя' id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-input id="email" placeholder='Email' class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input id="password" placeholder='Пароль' class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-input id="password_confirmation" placeholder='Повторите пароль' class="block mt-1 w-full" type="password" name="password_confirmation" required />
            </div>

            <div class="link-button">
                <x-button class="button-create ml-4">
                    {{ __('Регистрация') }}
                </x-button>
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Уже Зарегистрированы ?') }}
                </a>
            </div>
        </form>
    </div>
</div>
@endsection