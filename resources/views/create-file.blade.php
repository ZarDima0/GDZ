@extends('home')
@section('content')
<h2>Добавить практику</h2>
<h2>Выбери институт</h2>
<form action="{{route('upload.file')}}" method="post" enctype="multipart/form-data">
    @csrf
    <select name="instityte" id="">
        <option value="">...</option>
        @foreach($instityteList as $instityte)
        <option value="{{$instityte->nameInstitute}}">{{$instityte->nameInstitute}}</option>
        @endforeach
    </select>
    <select name="instityte" id="">
        <option value="">...</option>
        @foreach($directionList as $direction)
        <option value="{{$direction->nameInstitute}}">{{$direction->nameDirection}}</option>
        @endforeach
    </select>
    <select name="instityte" id="">
        <option value="">...</option>
        @foreach($articleList as $article)

        <option value="{{$article->article}}">{{$article->article_name}}</option>
        @endforeach
    </select>
    <input type="file" name="file">
    <input type="submit" value="Сохранить">
</form>
@endsection