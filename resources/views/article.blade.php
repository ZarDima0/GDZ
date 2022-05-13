@extends('home')
@section('content')
<h2>Список предметов</h2>
@if($articleList)
    @foreach($articleList as $articleItem) 
        <div class= 'institute-block'>
            <div class= 'institute-block__title'>
                <img src="/img/needle.png" width= '25' height = '25' alt="">
                <a href="{{route('file.index',['instituteSlug' => $instituteSlug,'directionSlug'=> $directionSlug,'articleSlug' => $articleItem->slug])}}">{{$articleItem->article_name}}</a>
            </div>
        </div>
    @endforeach
@else
    <h2>Добавить</h2>
@endif

@endsection