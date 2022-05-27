@extends('home')
@section('content')
<div class='title-page'>
    <h1>Личная страница</h1>
    <a type='button' href="{{route('cabinet.edit',['id' => $userData->id])}}">Изменить</a>
</div>
@if($message = Session::get('updateUser'))
<div class='block-success'>
    <h3>{{$message}}</h3>
    <img class='block-success__button-delete' src="/img/delete.png" alt="delele" width='25px'>
</div>
@endif
<div class='cabinet'>
    <div class='cabinet-user'>
        <div class='cabinet-user__avatar'>
            <img src="/img/avatar.png" width='150px' alt="">
        </div>
        <div class='cabinet-user__info'>
            <h4>Имя: {{$userData->name}}</h4>
            <h4>Email: {{$userData->email}}</h4>
        </div>
        <div>

        </div>
        @if ($errors->all())
        <div class="alert alert-danger">
            @foreach($errors->all() as $error)
            <p>{{ $error }}</p>
            @endforeach
        </div>
        @endif
    </div>
</div>
<h1>Мои практики</h1>
<div>

    @if($message = Session::get('deletefile'))
    <div class='block-success'>
        <h3>Удалено</h3>
        <img class='block-success__button-delete' src="/img/delete.png" alt="delele" width='25px'>
    </div>
    @endif
</div>
<div class='file-list'>
    @if(isset($fileList[0]->nameFile))
    @foreach ($fileList as $file)
    <div class='file-list__file'>
        <div class="file-list__file-info">
            <p>Имя:{{$file->nameFile}}</p>
            <p>Предмет:{{$file->Article->article_name}}</p>
        </div>
        <div class='file-list__file-link'>
            <a href="{{route('cabinet.download',['id' => $file->id])}}">Скачать</a>
            <a href="{{route('cabinet.destroy',['id' => $file->id])}}"><img width='20px' src="/img/delete.png" alt=""></a>
        </div>
    </div>
    @endforeach
    @else
    <div class='block-none'>
        <h1>Не найдено</h1>
        <a href="/upload-file">Добавить</a>
    </div>
    @endif
</div>
@endsection