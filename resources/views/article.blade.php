@extends('home')
@section('content')
<h2>Список предметов</h2>
    @foreach($articleList as $articleItem) 
        <div class= 'institute-block'>
            <div class= 'institute-block__title'>
                <img src="/img/needle.png" width= '25' height = '25' alt="">
                <a href="">{{$articleItem->article_name}}</a>
            </div>
        </div>
    @endforeach
@endsection