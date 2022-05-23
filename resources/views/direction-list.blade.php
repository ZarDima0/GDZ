@extends('home')
@section('content')
<h2>Список Направлений</h2>
    @foreach($directionList as $directionItem)
        <div class= 'institute-block'>
            <div class= 'institute-block__title'>
                <img src="/img/needle.png" width= '25' height = '25' alt="">
                <a href="{{route('article.index',['instituteSlug' => $instituteSlug,'directionSlug' => $directionItem->slug])}}">{{$directionItem->nameDirection}}</a>
            </div>
        </div>
    @endforeach
@endsection