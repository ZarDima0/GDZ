@extends('home')
@section('content')
<h2>Список предметов</h2>
@if(isset($articleList[0]->article_name))
@foreach($articleList as $articleItem)
    <div class= 'institute-block'>
        <div class= 'institute-block__title'>
            <img src="/img/needle.png" width= '25' height = '25' alt="">
            <a href="{{route('file.index',['instituteSlug' => $instituteSlug,'directionSlug'=> $directionSlug,'articleSlug' => $articleItem->slug])}}">{{$articleItem->article_name}}</a>
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