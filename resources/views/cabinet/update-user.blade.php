@extends('home')
@section('content')
<div class = 'title-page'>
<h1>Личная страница</h1>
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
            <h4>Имя:
                <input name = 'name' type="text" value = '{{$user->name}}' >
            </h4>
            <h4>Email:
                <input name = 'email' type="text" value = '{{$user->email}}' >
            </h4>
        </div>
    </div>
    </div>
</form>
<h1>Мои практики</h1>
@endsection