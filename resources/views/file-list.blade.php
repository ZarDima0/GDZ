@extends('home')
@section('content')
<h2>Список практик</h2>
@if(isset($fileList[0]->nameFile))
@foreach($fileList as $file)
        <div class= 'institute-block'>
            <div class= 'file-list__item'>
                <div class = 'file__info'>
                    <img src="/img/file.png" width= '25' height = '25' alt="">
                    <h4 class = 'file__title'>Название:{{$file->nameFile}}</h4>
                </div>
                <div class = 'file__link'>
                    <a href="{{route('user.create-page',['id' => $file->user->id])}}">Автор:{{$file->user->name}}</a>
                    <button class = 'file__download-button'  >
                        <a href="{{route('cabinet.download',['id' => $file->id])}}">Скачать</a>
                    </button>
                </div>
            </div>
        </div>
    @endforeach
@else
<div class = 'block-none' >
        <h1>Не найдено</h1>
        <a href="/upload-file">Добавить</a>
    </div>
@endif
@endsection