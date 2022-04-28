@extends('home')
@section('content')
<h2>Список Направлений</h2>
    @foreach($direction as $directionItem) 
        <div class= 'institute-block'>
            <div class= 'institute-block__title'>
                <img src="/img/needle.png" width= '25' height = '25' alt="">
                <a href="{{$institutSlug->slug . '/' . $directionItem->slug}}">{{$directionItem->nameDirection}}</a>
            </div>
        </div>
    @endforeach
@endsection