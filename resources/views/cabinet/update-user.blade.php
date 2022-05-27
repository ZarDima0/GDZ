@extends('home')
@section('content')
<div class = 'title-page'>
<h1>Изменить</h1>


<form action="{{route('cabinet.update-user')}}" method="post">
    @method('PATCH')
    @csrf
    <button type="submit">Сохранить</button>
    </div>
    <div class = 'cabinet'>
    <div class = 'cabinet-user'>
        <div class = 'cabinet-user__avatar'>
            <img src="/img/avatar.png" width = '150px'alt="">
        </div>
        <div class = 'cabinet-user__info'>

        @if($message = Session::get('updateUser'))
            <div class='block-success'>
                <h3>{{$message}}</h3>
                <img class='block-success__button-delete' src="/img/delete.png" alt="delele" width='25px'>
            </div>
        @endif

        @foreach ($errors->all() as $error)
        <div class='block-success'>
            <h3>{{$error}}</h3>
            <img class='block-success__button-delete' src="/img/delete.png" alt="delele" width='25px'>
        </div>
        @endforeach 
            <h4>Имя:
                <input name = 'name' type="text" value = '{{$user->name}}' >
            </h4>
            <h4>Email:
                <input name = 'email' type="text" value = '{{$user->email}}' >
            </h4>
            <h4>Новый пароль:
                <input name = 'old_password' type="password" placeholder = 'Введите старый пароль'>
                <input name = 'new_password' type="password" placeholder = 'Введите новый пароль'>
            </h4>
        </div>
    </div>
    </div>
</form>
<h1>Мои практики</h1>
@endsection